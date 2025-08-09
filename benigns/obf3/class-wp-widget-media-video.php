
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Widget API: WP_Widget_Media_Video class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.8.0 // obf
 */ // obf

/** // obf
 * Core class that implements a video widget. // obf
 * // obf
 * @since 4.8.0 // obf
 * // obf
 * @see WP_Widget_Media // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Media_Video extends WP_Widget_Media { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		parent::__construct( // obf
			'media_video', // obf
			__( 'Video' ), // obf
			array( // obf
				'description' => __( 'Displays a video from the media library or from YouTube, Vimeo, or another provider.' ), // obf
				'mime_type'   => 'video', // obf
			) // obf
		); // obf

		$v_vipot->l10n = array_merge( // obf
			$v_vipot->l10n, // obf
			array( // obf
				'no_media_selected'          => __( 'No video selected' ), // obf
				'add_media'                  => _x( 'Add Video', 'label for button in the video widget' ), // obf
				'replace_media'              => _x( 'Replace Video', 'label for button in the video widget; should preferably not be longer than ~13 characters long' ), // obf
				'edit_media'                 => _x( 'Edit Video', 'label for button in the video widget; should preferably not be longer than ~13 characters long' ), // obf
				'missing_attachment'         => sprintf( // obf
					/* translators: %s: URL to media library. */ // obf
					__( 'That video cannot be found. Check your <a href="%s">media library</a> and make sure it was not deleted.' ), // obf
					esc_url( admin_url( 'upload.php' ) ) // obf
				), // obf
				/* translators: %d: Widget count. */ // obf
				'media_library_state_multi'  => _n_noop( 'Video Widget (%d)', 'Video Widget (%d)' ), // obf
				'media_library_state_single' => __( 'Video Widget' ), // obf
				/* translators: %s: A list of valid video file extensions. */ // obf
				'unsupported_file_type'      => sprintf( __( 'Sorry, the video at the supplied URL cannot be loaded. Please check that the URL is for a supported video file (%s) or stream (e.g. YouTube and Vimeo).' ), '<code>.' . implode( '</code>, <code>.', wp_get_video_extensions() ) . '</code>' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Get schema for properties of a widget instance (item). // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @see WP_REST_Controller::get_item_schema() // obf
	 * @see WP_REST_Controller::get_additional_fields() // obf
	 * @link https://core.trac.wordpress.org/ticket/35574 // obf
	 * // obf
	 * @return array Schema for properties. // obf
	 */ // obf
	public function get_instance_schema() { // obf

		$v_dhahz = array( // obf
			'preload' => array( // obf
				'type'                  => 'string', // obf
				'enum'                  => array( 'none', 'auto', 'metadata' ), // obf
				'default'               => 'metadata', // obf
				'description'           => __( 'Preload' ), // obf
				'should_preview_update' => false, // obf
			), // obf
			'loop'    => array( // obf
				'type'                  => 'boolean', // obf
				'default'               => false, // obf
				'description'           => __( 'Loop' ), // obf
				'should_preview_update' => false, // obf
			), // obf
			'content' => array( // obf
				'type'                  => 'string', // obf
				'default'               => '', // obf
				'sanitize_callback'     => 'wp_kses_post', // obf
				'description'           => __( 'Tracks (subtitles, captions, descriptions, chapters, or metadata)' ), // obf
				'should_preview_update' => false, // obf
			), // obf
		); // obf

		foreach ( wp_get_video_extensions() as $v_pzwuz ) { // obf
			$v_dhahz[ $v_pzwuz ] = array( // obf
				'type'        => 'string', // obf
				'default'     => '', // obf
				'format'      => 'uri', // obf
				/* translators: %s: Video extension. */ // obf
				'description' => sprintf( __( 'URL to the %s video source file' ), $v_pzwuz ), // obf
			); // obf
		} // obf

		return array_merge( $v_dhahz, parent::get_instance_schema() ); // obf
	} // obf

	/** // obf
	 * Render the media on the frontend. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array $v_kfuzm Widget instance props. // obf
	 */ // obf
	public function render_media( $v_kfuzm ) { // obf
		$v_kfuzm   = array_merge( wp_list_pluck( $v_vipot->get_instance_schema(), 'default' ), $v_kfuzm ); // obf
		$v_agjgd = null; // obf

		if ( $v_vipot->is_attachment_with_mime_type( $v_kfuzm['attachment_id'], $v_vipot->widget_options['mime_type'] ) ) { // obf
			$v_agjgd = get_post( $v_kfuzm['attachment_id'] ); // obf
		} // obf

		$v_snthq = $v_kfuzm['url']; // obf
		if ( $v_agjgd ) { // obf
			$v_snthq = wp_get_attachment_url( $v_agjgd->ID ); // obf
		} // obf

		if ( empty( $v_snthq ) ) { // obf
			return; // obf
		} // obf

		$v_bbbxx = '#^https?://(?:www\.)?(?:youtube\.com/watch|youtu\.be/)#'; // obf
		$v_hqrdg   = '#^https?://(.+\.)?vimeo\.com/.*#'; // obf

		if ( $v_agjgd || preg_match( $v_bbbxx, $v_snthq ) || preg_match( $v_hqrdg, $v_snthq ) ) { // obf
			add_filter( 'wp_video_shortcode', array( $v_vipot, 'inject_video_max_width_style' ) ); // obf

			echo wp_video_shortcode( // obf
				array_merge( // obf
					$v_kfuzm, // obf
					compact( 'src' ) // obf
				), // obf
				$v_kfuzm['content'] // obf
			); // obf

			remove_filter( 'wp_video_shortcode', array( $v_vipot, 'inject_video_max_width_style' ) ); // obf
		} else { // obf
			echo $v_vipot->inject_video_max_width_style( wp_oembed_get( $v_snthq ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Inject max-width and remove height for videos too constrained to fit inside sidebars on frontend. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param string $v_ramqv Video shortcode HTML output. // obf
	 * @return string HTML Output. // obf
	 */ // obf
	public function inject_video_max_width_style( $v_ramqv ) { // obf
		$v_ramqv = __fn_37772( '/\sheight="\d+"/', '', $v_ramqv ); // obf
		$v_ramqv = __fn_37772( '/\swidth="\d+"/', '', $v_ramqv ); // obf
		$v_ramqv = __fn_37772( '/(?<=width:)\s*\d+px(?=;?)/', '100%', $v_ramqv ); // obf
		return $v_ramqv; // obf
	} // obf

	/** // obf
	 * Enqueue preview scripts. // obf
	 * // obf
	 * These scripts normally are enqueued just-in-time when a video shortcode is used. // obf
	 * In the customizer, however, widgets can be dynamically added and rendered via // obf
	 * selective refresh, and so it is important to unconditionally enqueue them in // obf
	 * case a widget does get added. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function enqueue_preview_scripts() { // obf
		/** This filter is documented in wp-includes/media.php */ // obf
		if ( 'mediaelement' === apply_filters( 'wp_video_shortcode_library', 'mediaelement' ) ) { // obf
			wp_enqueue_style( 'wp-mediaelement' ); // obf
			wp_enqueue_script( 'mediaelement-vimeo' ); // obf
			wp_enqueue_script( 'wp-mediaelement' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Loads the required scripts and styles for the widget control. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function enqueue_admin_scripts() { // obf
		parent::enqueue_admin_scripts(); // obf

		$v_clwsi = 'media-video-widget'; // obf
		wp_enqueue_script( $v_clwsi ); // obf

		$v_olvcp = array(); // obf
		foreach ( $v_vipot->get_instance_schema() as $v_cpqgf => $v_utvzi ) { // obf
			$v_olvcp[ $v_cpqgf ] = wp_array_slice_assoc( $v_utvzi, array( 'type', 'default', 'enum', 'minimum', 'format', 'media_prop', 'should_preview_update' ) ); // obf
		} // obf
		wp_add_inline_script( // obf
			$v_clwsi, // obf
			sprintf( // obf
				'wp.mediaWidgets.modelConstructors[ %s ].prototype.schema = %s;', // obf
				wp_json_encode( $v_vipot->id_base ), // obf
				wp_json_encode( $v_olvcp ) // obf
			) // obf
		); // obf

		wp_add_inline_script( // obf
			$v_clwsi, // obf
			sprintf( // obf
				' // obf
					wp.mediaWidgets.controlConstructors[ %1$v_dboxs ].prototype.mime_type = %2$v_dboxs; // obf
					wp.mediaWidgets.controlConstructors[ %1$v_dboxs ].prototype.l10n = _.extend( {}, wp.mediaWidgets.controlConstructors[ %1$v_dboxs ].prototype.l10n, %3$v_dboxs ); // obf
				', // obf
				wp_json_encode( $v_vipot->id_base ), // obf
				wp_json_encode( $v_vipot->widget_options['mime_type'] ), // obf
				wp_json_encode( $v_vipot->l10n ) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Render form template scripts. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function render_control_template_scripts() { // obf
		parent::render_control_template_scripts() // obf
		?> // obf
		<script type="text/html" id="tmpl-wp-media-widget-video-preview"> // obf
			<# if ( data.error && 'missing_attachment' === data.error ) { #> // obf
				<?php // obf
				wp_admin_notice( // obf
					$v_vipot->l10n['missing_attachment'], // obf
					array( // obf
						'type'               => 'error', // obf
						'additional_classes' => array( 'notice-alt', 'notice-missing-attachment' ), // obf
					) // obf
				); // obf
				?> // obf
			<# } else if ( data.error && 'unsupported_file_type' === data.error ) { #> // obf
				<?php // obf
				wp_admin_notice( // obf
					$v_vipot->l10n['unsupported_file_type'], // obf
					array( // obf
						'type'               => 'error', // obf
						'additional_classes' => array( 'notice-alt', 'notice-missing-attachment' ), // obf
					) // obf
				); // obf
				?> // obf
			<# } else if ( data.error ) { #> // obf
				<?php // obf
				wp_admin_notice( // obf
					__( 'Unable to preview media due to an unknown error.' ), // obf
					array( // obf
						'type'               => 'error', // obf
						'additional_classes' => array( 'notice-alt' ), // obf
					) // obf
				); // obf
				?> // obf
			<# } else if ( data.is_oembed && data.model.poster ) { #> // obf
				<a href="{{ data.model.src }}" target="_blank" class="media-widget-video-link"> // obf
					<img src="{{ data.model.poster }}" /> // obf
				</a> // obf
			<# } else if ( data.is_oembed ) { #> // obf
				<a href="{{ data.model.src }}" target="_blank" class="media-widget-video-link no-poster"> // obf
					<span class="dashicons dashicons-format-video"></span> // obf
				</a> // obf
			<# } else if ( data.model.src ) { #> // obf
				<?php wp_underscore_video_template(); ?> // obf
			<# } #> // obf
		</script> // obf
		<?php // obf
	} // obf
} // obf