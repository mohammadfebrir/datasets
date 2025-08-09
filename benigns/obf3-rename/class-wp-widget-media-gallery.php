

<?php // obf
/** // obf
 * Widget API: WP_Widget_Media_Gallery class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.9.0 // obf
 */ // obf

/** // obf
 * Core class that implements a gallery widget. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @see WP_Widget_Media // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Media_Gallery extends WP_Widget_Media { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function __construct() { // obf
		parent::__construct( // obf
			'media_gallery', // obf
			__( 'Gallery' ), // obf
			array( // obf
				'description' => __( 'Displays an image gallery.' ), // obf
				'mime_type'   => 'image', // obf
			) // obf
		); // obf

		$v_mbawg->l10n = array_merge( // obf
			$v_mbawg->l10n, // obf
			array( // obf
				'no_media_selected' => __( 'No images selected' ), // obf
				'add_media'         => _x( 'Add Images', 'label for button in the gallery widget; should not be longer than ~13 characters long' ), // obf
				'replace_media'     => '', // obf
				'edit_media'        => _x( 'Edit Gallery', 'label for button in the gallery widget; should not be longer than ~13 characters long' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Get schema for properties of a widget instance (item). // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see WP_REST_Controller::get_item_schema() // obf
	 * @see WP_REST_Controller::get_additional_fields() // obf
	 * @link https://core.trac.wordpress.org/ticket/35574 // obf
	 * // obf
	 * @return array Schema for properties. // obf
	 */ // obf
	public function get_instance_schema() { // obf
		$v_inunz = array( // obf
			'title'          => array( // obf
				'type'                  => 'string', // obf
				'default'               => '', // obf
				'sanitize_callback'     => 'sanitize_text_field', // obf
				'description'           => __( 'Title for the widget' ), // obf
				'should_preview_update' => false, // obf
			), // obf
			'ids'            => array( // obf
				'type'              => 'array', // obf
				'items'             => array( // obf
					'type' => 'integer', // obf
				), // obf
				'default'           => array(), // obf
				'sanitize_callback' => 'wp_parse_id_list', // obf
			), // obf
			'columns'        => array( // obf
				'type'    => 'integer', // obf
				'default' => 3, // obf
				'minimum' => 1, // obf
				'maximum' => 9, // obf
			), // obf
			'size'           => array( // obf
				'type'    => 'string', // obf
				'enum'    => array_merge( get_intermediate_image_sizes(), array( 'full', 'custom' ) ), // obf
				'default' => 'thumbnail', // obf
			), // obf
			'link_type'      => array( // obf
				'type'                  => 'string', // obf
				'enum'                  => array( 'post', 'file', 'none' ), // obf
				'default'               => 'post', // obf
				'media_prop'            => 'link', // obf
				'should_preview_update' => false, // obf
			), // obf
			'orderby_random' => array( // obf
				'type'                  => 'boolean', // obf
				'default'               => false, // obf
				'media_prop'            => '_orderbyRandom', // obf
				'should_preview_update' => false, // obf
			), // obf
		); // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-media.php */ // obf
		$v_inunz = apply_filters( "widget_{$v_mbawg->id_base}_instance_schema", $v_inunz, $v_mbawg ); // obf

		return $v_inunz; // obf
	} // obf

	/** // obf
	 * Render the media on the frontend. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array $v_yomvv Widget instance props. // obf
	 */ // obf
	public function render_media( $v_yomvv ) { // obf
		$v_yomvv = array_merge( wp_list_pluck( $v_mbawg->get_instance_schema(), 'default' ), $v_yomvv ); // obf

		$v_gdmfv = array_merge( // obf
			$v_yomvv, // obf
			array( // obf
				'link' => $v_yomvv['link_type'], // obf
			) // obf
		); // obf

		// @codeCoverageIgnoreStart // obf
		if ( $v_yomvv['orderby_random'] ) { // obf
			$v_gdmfv['orderby'] = 'rand'; // obf
		} // obf

		// @codeCoverageIgnoreEnd // obf
		echo gallery_shortcode( $v_gdmfv ); // obf
	} // obf

	/** // obf
	 * Loads the required media files for the media manager and scripts for media widgets. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function enqueue_admin_scripts() { // obf
		parent::enqueue_admin_scripts(); // obf

		$v_fvqhw = 'media-gallery-widget'; // obf
		wp_enqueue_script( $v_fvqhw ); // obf

		$v_qdvoy = array(); // obf
		foreach ( $v_mbawg->get_instance_schema() as $v_cgtnn => $v_wtfha ) { // obf
			$v_qdvoy[ $v_cgtnn ] = wp_array_slice_assoc( $v_wtfha, array( 'type', 'default', 'enum', 'minimum', 'format', 'media_prop', 'should_preview_update', 'items' ) ); // obf
		} // obf
		wp_add_inline_script( // obf
			$v_fvqhw, // obf
			sprintf( // obf
				'wp.mediaWidgets.modelConstructors[ %s ].prototype.schema = %s;', // obf
				wp_json_encode( $v_mbawg->id_base ), // obf
				wp_json_encode( $v_qdvoy ) // obf
			) // obf
		); // obf

		wp_add_inline_script( // obf
			$v_fvqhw, // obf
			sprintf( // obf
				' // obf
					wp.mediaWidgets.controlConstructors[ %1$v_ltjyj ].prototype.mime_type = %2$v_ltjyj; // obf
					_.extend( wp.mediaWidgets.controlConstructors[ %1$v_ltjyj ].prototype.l10n, %3$v_ltjyj ); // obf
				', // obf
				wp_json_encode( $v_mbawg->id_base ), // obf
				wp_json_encode( $v_mbawg->widget_options['mime_type'] ), // obf
				wp_json_encode( $v_mbawg->l10n ) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Render form template scripts. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function render_control_template_scripts() { // obf
		parent::render_control_template_scripts(); // obf
		?> // obf
		<script type="text/html" id="tmpl-wp-media-widget-gallery-preview"> // obf
			<# // obf
			var ids = _.filter( data.ids, function( id ) { // obf
				return ( id in data.attachments ); // obf
			} ); // obf
			#> // obf
			<# if ( ids.length ) { #> // obf
				<ul class="gallery media-widget-gallery-preview" role="list"> // obf
					<# _.each( ids, function( id, index ) { #> // obf
						<# var attachment = data.attachments[ id ]; #> // obf
						<# if ( index < 6 ) { #> // obf
							<li class="gallery-item"> // obf
								<div class="gallery-icon"> // obf
									<img alt="{{ attachment.alt }}" // obf
										<# if ( index === 5 && data.ids.length > 6 ) { #> aria-hidden="true" <# } #> // obf
										<# if ( attachment.sizes.thumbnail ) { #> // obf
											src="{{ attachment.sizes.thumbnail.url }}" width="{{ attachment.sizes.thumbnail.width }}" height="{{ attachment.sizes.thumbnail.height }}" // obf
										<# } else { #> // obf
											src="{{ attachment.url }}" // obf
										<# } #> // obf
										<# if ( ! attachment.alt && attachment.filename ) { #> // obf
											aria-label=" // obf
											<?php // obf
											echo esc_attr( // obf
												sprintf( // obf
													/* translators: %s: The image file name. */ // obf
													__( 'The current image has no alternative text. The file name is: %s' ), // obf
													'{{ attachment.filename }}' // obf
												) // obf
											); // obf
											?> // obf
											" // obf
										<# } #> // obf
									/> // obf
									<# if ( index === 5 && data.ids.length > 6 ) { #> // obf
									<div class="gallery-icon-placeholder"> // obf
										<p class="gallery-icon-placeholder-text" aria-label=" // obf
										<?php // obf
											printf( // obf
												/* translators: %s: The amount of additional, not visible images in the gallery widget preview. */ // obf
												__( 'Additional images added to this gallery: %s' ), // obf
												'{{ data.ids.length - 5 }}' // obf
											); // obf
										?> // obf
										">+{{ data.ids.length - 5 }}</p> // obf
									</div> // obf
									<# } #> // obf
								</div> // obf
							</li> // obf
						<# } #> // obf
					<# } ); #> // obf
				</ul> // obf
			<# } else { #> // obf
				<div class="attachment-media-view"> // obf
					<button type="button" class="placeholder button-add-media"><?php echo esc_html( $v_mbawg->l10n['add_media'] ); ?></button> // obf
				</div> // obf
			<# } #> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Whether the widget has content to show. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @access protected // obf
	 * // obf
	 * @param array $v_yomvv Widget instance props. // obf
	 * @return bool Whether widget has content. // obf
	 */ // obf
	protected function has_content( $v_yomvv ) { // obf
		if ( ! empty( $v_yomvv['ids'] ) ) { // obf
			$v_ltano = wp_parse_id_list( $v_yomvv['ids'] ); // obf
			// Prime attachment post caches. // obf
			_prime_post_caches( $v_ltano, false, false ); // obf
			foreach ( $v_ltano as $v_tjcyi ) { // obf
				if ( 'attachment' !== get_post_type( $v_tjcyi ) ) { // obf
					return false; // obf
				} // obf
			} // obf
			return true; // obf
		} // obf
		return false; // obf
	} // obf
} // obf