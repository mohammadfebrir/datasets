

<?php // obf
/** // obf
 * Widget API: WP_Widget_Media_Image class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.8.0 // obf
 */ // obf

/** // obf
 * Core class that implements an image widget. // obf
 * // obf
 * @since 4.8.0 // obf
 * // obf
 * @see WP_Widget_Media // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Media_Image extends WP_Widget_Media { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		parent::__construct( // obf
			'media_image', // obf
			__( 'Image' ), // obf
			array( // obf
				'description' => __( 'Displays an image.' ), // obf
				'mime_type'   => 'image', // obf
			) // obf
		); // obf

		$v_mflwc->l10n = array_merge( // obf
			$v_mflwc->l10n, // obf
			array( // obf
				'no_media_selected'          => __( 'No image selected' ), // obf
				'add_media'                  => _x( 'Add Image', 'label for button in the image widget' ), // obf
				'replace_media'              => _x( 'Replace Image', 'label for button in the image widget; should preferably not be longer than ~13 characters long' ), // obf
				'edit_media'                 => _x( 'Edit Image', 'label for button in the image widget; should preferably not be longer than ~13 characters long' ), // obf
				'missing_attachment'         => sprintf( // obf
					/* translators: %s: URL to media library. */ // obf
					__( 'That image cannot be found. Check your <a href="%s">media library</a> and make sure it was not deleted.' ), // obf
					esc_url( admin_url( 'upload.php' ) ) // obf
				), // obf
				/* translators: %d: Widget count. */ // obf
				'media_library_state_multi'  => _n_noop( 'Image Widget (%d)', 'Image Widget (%d)' ), // obf
				'media_library_state_single' => __( 'Image Widget' ), // obf
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
		return array_merge( // obf
			array( // obf
				'size'              => array( // obf
					'type'        => 'string', // obf
					'enum'        => array_merge( get_intermediate_image_sizes(), array( 'full', 'custom' ) ), // obf
					'default'     => 'medium', // obf
					'description' => __( 'Size' ), // obf
				), // obf
				'width'             => array( // Via 'customWidth', only when size=custom; otherwise via 'width'. // obf
					'type'        => 'integer', // obf
					'minimum'     => 0, // obf
					'default'     => 0, // obf
					'description' => __( 'Width' ), // obf
				), // obf
				'height'            => array( // Via 'customHeight', only when size=custom; otherwise via 'height'. // obf
					'type'        => 'integer', // obf
					'minimum'     => 0, // obf
					'default'     => 0, // obf
					'description' => __( 'Height' ), // obf
				), // obf

				'caption'           => array( // obf
					'type'                  => 'string', // obf
					'default'               => '', // obf
					'sanitize_callback'     => 'wp_kses_post', // obf
					'description'           => __( 'Caption' ), // obf
					'should_preview_update' => false, // obf
				), // obf
				'alt'               => array( // obf
					'type'              => 'string', // obf
					'default'           => '', // obf
					'sanitize_callback' => 'sanitize_text_field', // obf
					'description'       => __( 'Alternative Text' ), // obf
				), // obf
				'link_type'         => array( // obf
					'type'                  => 'string', // obf
					'enum'                  => array( 'none', 'file', 'post', 'custom' ), // obf
					'default'               => 'custom', // obf
					'media_prop'            => 'link', // obf
					'description'           => __( 'Link To' ), // obf
					'should_preview_update' => true, // obf
				), // obf
				'link_url'          => array( // obf
					'type'                  => 'string', // obf
					'default'               => '', // obf
					'format'                => 'uri', // obf
					'media_prop'            => 'linkUrl', // obf
					'description'           => __( 'URL' ), // obf
					'should_preview_update' => true, // obf
				), // obf
				'image_classes'     => array( // obf
					'type'                  => 'string', // obf
					'default'               => '', // obf
					'sanitize_callback'     => array( $v_mflwc, 'sanitize_token_list' ), // obf
					'media_prop'            => 'extraClasses', // obf
					'description'           => __( 'Image CSS Class' ), // obf
					'should_preview_update' => false, // obf
				), // obf
				'link_classes'      => array( // obf
					'type'                  => 'string', // obf
					'default'               => '', // obf
					'sanitize_callback'     => array( $v_mflwc, 'sanitize_token_list' ), // obf
					'media_prop'            => 'linkClassName', // obf
					'should_preview_update' => false, // obf
					'description'           => __( 'Link CSS Class' ), // obf
				), // obf
				'link_rel'          => array( // obf
					'type'                  => 'string', // obf
					'default'               => '', // obf
					'sanitize_callback'     => array( $v_mflwc, 'sanitize_token_list' ), // obf
					'media_prop'            => 'linkRel', // obf
					'description'           => __( 'Link Rel' ), // obf
					'should_preview_update' => false, // obf
				), // obf
				'link_target_blank' => array( // obf
					'type'                  => 'boolean', // obf
					'default'               => false, // obf
					'media_prop'            => 'linkTargetBlank', // obf
					'description'           => __( 'Open link in a new tab' ), // obf
					'should_preview_update' => false, // obf
				), // obf
				'image_title'       => array( // obf
					'type'                  => 'string', // obf
					'default'               => '', // obf
					'sanitize_callback'     => 'sanitize_text_field', // obf
					'media_prop'            => 'title', // obf
					'description'           => __( 'Image Title Attribute' ), // obf
					'should_preview_update' => false, // obf
				), // obf

				/* // obf
				 * There are two additional properties exposed by the PostImage modal // obf
				 * that don't seem to be relevant, as they may only be derived read-only // obf
				 * values: // obf
				 * - originalUrl // obf
				 * - aspectRatio // obf
				 * - height (redundant when size is not custom) // obf
				 * - width (redundant when size is not custom) // obf
				 */ // obf
			), // obf
			parent::get_instance_schema() // obf
		); // obf
	} // obf

	/** // obf
	 * Render the media on the frontend. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array $v_phdts Widget instance props. // obf
	 */ // obf
	public function render_media( $v_phdts ) { // obf
		$v_phdts = array_merge( wp_list_pluck( $v_mflwc->get_instance_schema(), 'default' ), $v_phdts ); // obf
		$v_phdts = wp_parse_args( // obf
			$v_phdts, // obf
			array( // obf
				'size' => 'thumbnail', // obf
			) // obf
		); // obf

		$v_esuoe = null; // obf

		if ( $v_mflwc->is_attachment_with_mime_type( $v_phdts['attachment_id'], $v_mflwc->widget_options['mime_type'] ) ) { // obf
			$v_esuoe = get_post( $v_phdts['attachment_id'] ); // obf
		} // obf

		if ( $v_esuoe ) { // obf
			$v_ykvxg = ''; // obf
			if ( ! isset( $v_phdts['caption'] ) ) { // obf
				$v_ykvxg = $v_esuoe->post_excerpt; // obf
			} elseif ( trim( $v_phdts['caption'] ) ) { // obf
				$v_ykvxg = $v_phdts['caption']; // obf
			} // obf

			$v_sxdun = array( // obf
				'class' => sprintf( 'image wp-image-%d %s', $v_esuoe->ID, $v_phdts['image_classes'] ), // obf
				'style' => 'max-width: 100%; height: auto;', // obf
			); // obf
			if ( ! empty( $v_phdts['image_title'] ) ) { // obf
				$v_sxdun['title'] = $v_phdts['image_title']; // obf
			} // obf

			if ( $v_phdts['alt'] ) { // obf
				$v_sxdun['alt'] = $v_phdts['alt']; // obf
			} // obf

			$v_qbvod = $v_phdts['size']; // obf

			if ( 'custom' === $v_qbvod || ! in_array( $v_qbvod, array_merge( get_intermediate_image_sizes(), array( 'full' ) ), true ) ) { // obf
				$v_qbvod  = array( $v_phdts['width'], $v_phdts['height'] ); // obf
				$v_wkrht = $v_phdts['width']; // obf
			} else { // obf
				$v_rjgxo = _wp_get_image_size_from_meta( $v_phdts['size'], wp_get_attachment_metadata( $v_esuoe->ID ) ); // obf
				$v_wkrht        = empty( $v_rjgxo[0] ) ? 0 : $v_rjgxo[0]; // obf
			} // obf

			$v_sxdun['class'] .= sprintf( ' attachment-%1$v_gbndl size-%1$v_gbndl', is_array( $v_qbvod ) ? implode( 'x', $v_qbvod ) : $v_qbvod ); // obf

			$v_ufakl = wp_get_attachment_image( $v_esuoe->ID, $v_qbvod, false, $v_sxdun ); // obf

		} else { // obf
			if ( empty( $v_phdts['url'] ) ) { // obf
				return; // obf
			} // obf

			$v_phdts['size'] = 'custom'; // obf
			$v_ykvxg          = $v_phdts['caption']; // obf
			$v_wkrht            = $v_phdts['width']; // obf
			$v_dkmzi          = 'image ' . $v_phdts['image_classes']; // obf
			if ( 0 === $v_phdts['width'] ) { // obf
				$v_phdts['width'] = ''; // obf
			} // obf
			if ( 0 === $v_phdts['height'] ) { // obf
				$v_phdts['height'] = ''; // obf
			} // obf

			$v_jddbl = array( // obf
				'class'  => $v_dkmzi, // obf
				'src'    => $v_phdts['url'], // obf
				'alt'    => $v_phdts['alt'], // obf
				'width'  => $v_phdts['width'], // obf
				'height' => $v_phdts['height'], // obf
			); // obf

			$v_ehigh = wp_get_loading_optimization_attributes( // obf
				'img', // obf
				$v_jddbl, // obf
				'widget_media_image' // obf
			); // obf

			$v_jddbl = array_merge( $v_jddbl, $v_ehigh ); // obf

			$v_jddbl  = array_map( 'esc_attr', $v_jddbl ); // obf
			$v_ufakl = '<img'; // obf

			foreach ( $v_jddbl as $v_ebymi => $v_cevup ) { // obf
				$v_ufakl .= ' ' . $v_ebymi . '="' . $v_cevup . '"'; // obf
			} // obf

			$v_ufakl .= ' />'; // obf
		} // End if(). // obf

		$v_gxljc = ''; // obf
		if ( 'file' === $v_phdts['link_type'] ) { // obf
			$v_gxljc = $v_esuoe ? wp_get_attachment_url( $v_esuoe->ID ) : $v_phdts['url']; // obf
		} elseif ( $v_esuoe && 'post' === $v_phdts['link_type'] ) { // obf
			$v_gxljc = get_attachment_link( $v_esuoe->ID ); // obf
		} elseif ( 'custom' === $v_phdts['link_type'] && ! empty( $v_phdts['link_url'] ) ) { // obf
			$v_gxljc = $v_phdts['link_url']; // obf
		} // obf

		if ( $v_gxljc ) { // obf
			$v_eilzu = sprintf( '<a href="%s"', esc_url( $v_gxljc ) ); // obf
			if ( ! empty( $v_phdts['link_classes'] ) ) { // obf
				$v_eilzu .= sprintf( ' class="%s"', esc_attr( $v_phdts['link_classes'] ) ); // obf
			} // obf
			if ( ! empty( $v_phdts['link_rel'] ) ) { // obf
				$v_eilzu .= sprintf( ' rel="%s"', esc_attr( $v_phdts['link_rel'] ) ); // obf
			} // obf
			if ( ! empty( $v_phdts['link_target_blank'] ) ) { // obf
				$v_eilzu .= ' target="_blank"'; // obf
			} // obf
			$v_eilzu .= '>'; // obf
			$v_eilzu .= $v_ufakl; // obf
			$v_eilzu .= '</a>'; // obf
			$v_ufakl = $v_eilzu; // obf
		} // obf

		if ( $v_ykvxg ) { // obf
			$v_ufakl = img_caption_shortcode( // obf
				array( // obf
					'width'   => $v_wkrht, // obf
					'caption' => $v_ykvxg, // obf
				), // obf
				$v_ufakl // obf
			); // obf
		} // obf

		echo $v_ufakl; // obf
	} // obf

	/** // obf
	 * Loads the required media files for the media manager and scripts for media widgets. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function enqueue_admin_scripts() { // obf
		parent::enqueue_admin_scripts(); // obf

		$v_ltmpv = 'media-image-widget'; // obf
		wp_enqueue_script( $v_ltmpv ); // obf

		$v_ospug = array(); // obf
		foreach ( $v_mflwc->get_instance_schema() as $v_sevkg => $v_vongm ) { // obf
			$v_ospug[ $v_sevkg ] = wp_array_slice_assoc( $v_vongm, array( 'type', 'default', 'enum', 'minimum', 'format', 'media_prop', 'should_preview_update' ) ); // obf
		} // obf
		wp_add_inline_script( // obf
			$v_ltmpv, // obf
			sprintf( // obf
				'wp.mediaWidgets.modelConstructors[ %s ].prototype.schema = %s;', // obf
				wp_json_encode( $v_mflwc->id_base ), // obf
				wp_json_encode( $v_ospug ) // obf
			) // obf
		); // obf

		wp_add_inline_script( // obf
			$v_ltmpv, // obf
			sprintf( // obf
				' // obf
					wp.mediaWidgets.controlConstructors[ %1$v_gbndl ].prototype.mime_type = %2$v_gbndl; // obf
					wp.mediaWidgets.controlConstructors[ %1$v_gbndl ].prototype.l10n = _.extend( {}, wp.mediaWidgets.controlConstructors[ %1$v_gbndl ].prototype.l10n, %3$v_gbndl ); // obf
				', // obf
				wp_json_encode( $v_mflwc->id_base ), // obf
				wp_json_encode( $v_mflwc->widget_options['mime_type'] ), // obf
				wp_json_encode( $v_mflwc->l10n ) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Render form template scripts. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function render_control_template_scripts() { // obf
		parent::render_control_template_scripts(); // obf

		?> // obf
		<script type="text/html" id="tmpl-wp-media-widget-image-fields"> // obf
			<# var elementIdPrefix = 'el' + String( Math.random() ) + '_'; #> // obf
			<# if ( data.url ) { #> // obf
			<p class="media-widget-image-link"> // obf
				<label for="{{ elementIdPrefix }}linkUrl"><?php esc_html_e( 'Link to:' ); ?></label> // obf
				<input id="{{ elementIdPrefix }}linkUrl" type="text" class="widefat link" value="{{ data.link_url }}" placeholder="https://" pattern="((\w+:)?\/\/\w.*|\w+:(?!\/\/$)|\/|\?|#).*"> // obf
			</p> // obf
			<# } #> // obf
		</script> // obf
		<script type="text/html" id="tmpl-wp-media-widget-image-preview"> // obf
			<# if ( data.error && 'missing_attachment' === data.error ) { #> // obf
				<?php // obf
				wp_admin_notice( // obf
					$v_mflwc->l10n['missing_attachment'], // obf
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
			<# } else if ( data.url ) { #> // obf
				<img class="attachment-thumb" src="{{ data.url }}" draggable="false" alt="{{ data.alt }}" // obf
					<# if ( ! data.alt && data.currentFilename ) { #> // obf
						aria-label=" // obf
						<?php // obf
						echo esc_attr( // obf
							sprintf( // obf
								/* translators: %s: The image file name. */ // obf
								__( 'The current image has no alternative text. The file name is: %s' ), // obf
								'{{ data.currentFilename }}' // obf
							) // obf
						); // obf
						?> // obf
						" // obf
					<# } #> // obf
				/> // obf
			<# } #> // obf
		</script> // obf
		<?php // obf
	} // obf
} // obf