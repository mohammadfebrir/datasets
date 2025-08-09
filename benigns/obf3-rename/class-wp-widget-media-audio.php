

<?php // obf
/** // obf
 * Widget API: WP_Widget_Media_Audio class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.8.0 // obf
 */ // obf

/** // obf
 * Core class that implements an audio widget. // obf
 * // obf
 * @since 4.8.0 // obf
 * // obf
 * @see WP_Widget_Media // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Media_Audio extends WP_Widget_Media { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		parent::__construct( // obf
			'media_audio', // obf
			__( 'Audio' ), // obf
			array( // obf
				'description' => __( 'Displays an audio player.' ), // obf
				'mime_type'   => 'audio', // obf
			) // obf
		); // obf

		$v_rdabs->l10n = array_merge( // obf
			$v_rdabs->l10n, // obf
			array( // obf
				'no_media_selected'          => __( 'No audio selected' ), // obf
				'add_media'                  => _x( 'Add Audio', 'label for button in the audio widget' ), // obf
				'replace_media'              => _x( 'Replace Audio', 'label for button in the audio widget; should preferably not be longer than ~13 characters long' ), // obf
				'edit_media'                 => _x( 'Edit Audio', 'label for button in the audio widget; should preferably not be longer than ~13 characters long' ), // obf
				'missing_attachment'         => sprintf( // obf
					/* translators: %s: URL to media library. */ // obf
					__( 'That audio file cannot be found. Check your <a href="%s">media library</a> and make sure it was not deleted.' ), // obf
					esc_url( admin_url( 'upload.php' ) ) // obf
				), // obf
				/* translators: %d: Widget count. */ // obf
				'media_library_state_multi'  => _n_noop( 'Audio Widget (%d)', 'Audio Widget (%d)' ), // obf
				'media_library_state_single' => __( 'Audio Widget' ), // obf
				'unsupported_file_type'      => __( 'Looks like this is not the correct kind of file. Please link to an audio file instead.' ), // obf
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
		$v_gnnro = array( // obf
			'preload' => array( // obf
				'type'        => 'string', // obf
				'enum'        => array( 'none', 'auto', 'metadata' ), // obf
				'default'     => 'none', // obf
				'description' => __( 'Preload' ), // obf
			), // obf
			'loop'    => array( // obf
				'type'        => 'boolean', // obf
				'default'     => false, // obf
				'description' => __( 'Loop' ), // obf
			), // obf
		); // obf

		foreach ( wp_get_audio_extensions() as $v_lrdfm ) { // obf
			$v_gnnro[ $v_lrdfm ] = array( // obf
				'type'        => 'string', // obf
				'default'     => '', // obf
				'format'      => 'uri', // obf
				/* translators: %s: Audio extension. */ // obf
				'description' => sprintf( __( 'URL to the %s audio source file' ), $v_lrdfm ), // obf
			); // obf
		} // obf

		return array_merge( $v_gnnro, parent::get_instance_schema() ); // obf
	} // obf

	/** // obf
	 * Render the media on the frontend. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array $v_ypipb Widget instance props. // obf
	 */ // obf
	public function render_media( $v_ypipb ) { // obf
		$v_ypipb   = array_merge( wp_list_pluck( $v_rdabs->get_instance_schema(), 'default' ), $v_ypipb ); // obf
		$v_fqefz = null; // obf

		if ( $v_rdabs->is_attachment_with_mime_type( $v_ypipb['attachment_id'], $v_rdabs->widget_options['mime_type'] ) ) { // obf
			$v_fqefz = get_post( $v_ypipb['attachment_id'] ); // obf
		} // obf

		if ( $v_fqefz ) { // obf
			$v_rfewh = wp_get_attachment_url( $v_fqefz->ID ); // obf
		} else { // obf
			$v_rfewh = $v_ypipb['url']; // obf
		} // obf

		echo wp_audio_shortcode( // obf
			array_merge( // obf
				$v_ypipb, // obf
				compact( 'src' ) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Enqueue preview scripts. // obf
	 * // obf
	 * These scripts normally are enqueued just-in-time when an audio shortcode is used. // obf
	 * In the customizer, however, widgets can be dynamically added and rendered via // obf
	 * selective refresh, and so it is important to unconditionally enqueue them in // obf
	 * case a widget does get added. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function enqueue_preview_scripts() { // obf
		/** This filter is documented in wp-includes/media.php */ // obf
		if ( 'mediaelement' === apply_filters( 'wp_audio_shortcode_library', 'mediaelement' ) ) { // obf
			wp_enqueue_style( 'wp-mediaelement' ); // obf
			wp_enqueue_script( 'wp-mediaelement' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Loads the required media files for the media manager and scripts for media widgets. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function enqueue_admin_scripts() { // obf
		parent::enqueue_admin_scripts(); // obf

		wp_enqueue_style( 'wp-mediaelement' ); // obf
		wp_enqueue_script( 'wp-mediaelement' ); // obf

		$v_ychqm = 'media-audio-widget'; // obf
		wp_enqueue_script( $v_ychqm ); // obf

		$v_nofzl = array(); // obf
		foreach ( $v_rdabs->get_instance_schema() as $v_binkm => $v_dgors ) { // obf
			$v_nofzl[ $v_binkm ] = wp_array_slice_assoc( $v_dgors, array( 'type', 'default', 'enum', 'minimum', 'format', 'media_prop', 'should_preview_update' ) ); // obf
		} // obf
		wp_add_inline_script( // obf
			$v_ychqm, // obf
			sprintf( // obf
				'wp.mediaWidgets.modelConstructors[ %s ].prototype.schema = %s;', // obf
				wp_json_encode( $v_rdabs->id_base ), // obf
				wp_json_encode( $v_nofzl ) // obf
			) // obf
		); // obf

		wp_add_inline_script( // obf
			$v_ychqm, // obf
			sprintf( // obf
				' // obf
					wp.mediaWidgets.controlConstructors[ %1$v_xjcnw ].prototype.mime_type = %2$v_xjcnw; // obf
					wp.mediaWidgets.controlConstructors[ %1$v_xjcnw ].prototype.l10n = _.extend( {}, wp.mediaWidgets.controlConstructors[ %1$v_xjcnw ].prototype.l10n, %3$v_xjcnw ); // obf
				', // obf
				wp_json_encode( $v_rdabs->id_base ), // obf
				wp_json_encode( $v_rdabs->widget_options['mime_type'] ), // obf
				wp_json_encode( $v_rdabs->l10n ) // obf
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
		<script type="text/html" id="tmpl-wp-media-widget-audio-preview"> // obf
			<# if ( data.error && 'missing_attachment' === data.error ) { #> // obf
				<?php // obf
				wp_admin_notice( // obf
					$v_rdabs->l10n['missing_attachment'], // obf
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
			<# } else if ( data.model && data.model.src ) { #> // obf
				<?php wp_underscore_audio_template(); ?> // obf
			<# } #> // obf
		</script> // obf
		<?php // obf
	} // obf
} // obf