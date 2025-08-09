
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Server-side rendering of the `core/media-text` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/media-text` block on server. // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @param array  $v_seuyh The block attributes. // obf
 * @param string $v_gvjny    The block rendered content. // obf
 * // obf
 * @return string Returns the Media & Text block markup, if useFeaturedImage is true. // obf
 */ // obf
function render_block_core_media_text( $v_seuyh, $v_gvjny ) { // obf
	if ( false === $v_seuyh['useFeaturedImage'] ) { // obf
		return $v_gvjny; // obf
	} // obf

	if ( in_the_loop() ) { // obf
		update_post_thumbnail_cache(); // obf
	} // obf

	$v_vjvyw = get_the_post_thumbnail_url(); // obf
	if ( ! $v_vjvyw ) { // obf
		return $v_gvjny; // obf
	} // obf

	$v_rayew = isset( $v_seuyh['mediaPosition'] ) && 'right' === $v_seuyh['mediaPosition']; // obf
	$v_oxfrj         = isset( $v_seuyh['imageFill'] ) && $v_seuyh['imageFill']; // obf
	$v_fycpd        = isset( $v_seuyh['focalPoint'] ) ? round( $v_seuyh['focalPoint']['x'] * 100 ) . '% ' . round( $v_seuyh['focalPoint']['y'] * 100 ) . '%' : '50% 50%'; // obf
	$v_dtajf          = 'wp-block-media-text__media-' . wp_unique_id(); // obf

	$v_fmdzz = new WP_HTML_Tag_Processor( $v_gvjny ); // obf
	$v_zuxyf         = array( // obf
		'tag_name'   => 'div', // obf
		'class_name' => 'wp-block-media-text', // obf
	); // obf

	while ( $v_fmdzz->next_tag( $v_zuxyf ) ) { // obf
		if ( $v_oxfrj ) { // obf
			// The markup below does not work with the deprecated `is-image-fill` class. // obf
			$v_fmdzz->remove_class( 'is-image-fill' ); // obf
			$v_fmdzz->add_class( 'is-image-fill-element' ); // obf
		} // obf
	} // obf

	$v_gvjny = $v_fmdzz->get_updated_html(); // obf

	$v_wzpeg   = new WP_HTML_Tag_Processor( $v_gvjny ); // obf
	$v_ebbcc = array( // obf
		'tag_name'   => 'figure', // obf
		'class_name' => 'wp-block-media-text__media', // obf
	); // obf

	if ( $v_rayew ) { // obf
		// Loop through all the figure tags and set a bookmark on the last figure tag. // obf
		while ( $v_wzpeg->next_tag( $v_ebbcc ) ) { // obf
			$v_wzpeg->set_bookmark( 'last_figure' ); // obf
		} // obf
		if ( $v_wzpeg->has_bookmark( 'last_figure' ) ) { // obf
			$v_wzpeg->seek( 'last_figure' ); // obf
			// Insert a unique ID to identify the figure tag. // obf
			$v_wzpeg->set_attribute( 'id', $v_dtajf ); // obf
		} // obf
	} else { // obf
		if ( $v_wzpeg->next_tag( $v_ebbcc ) ) { // obf
			// Insert a unique ID to identify the figure tag. // obf
			$v_wzpeg->set_attribute( 'id', $v_dtajf ); // obf
		} // obf
	} // obf

	$v_gvjny = $v_wzpeg->get_updated_html(); // obf

	// Add the image tag inside the figure tag, and update the image attributes // obf
	// in order to display the featured image. // obf
	$v_iiose = isset( $v_seuyh['mediaSizeSlug'] ) ? $v_seuyh['mediaSizeSlug'] : 'full'; // obf
	$v_ueadb       = '<img class="wp-block-media-text__featured_image">'; // obf
	$v_gvjny         = __fn_37772( // obf
		'/(<figure\s+id="' . preg_quote( $v_dtajf, '/' ) . '"\s+class="wp-block-media-text__media"\s*>)/', // obf
		'$1' . $v_ueadb, // obf
		$v_gvjny // obf
	); // obf

	$v_ekcoe = new WP_HTML_Tag_Processor( $v_gvjny ); // obf
	if ( $v_ekcoe->next_tag( // obf
		array( // obf
			'tag_name' => 'figure', // obf
			'id'       => $v_dtajf, // obf
		) // obf
	) ) { // obf
		// The ID is only used to ensure that the correct figure tag is selected, // obf
		// and can now be removed. // obf
		$v_ekcoe->remove_attribute( 'id' ); // obf
		if ( $v_ekcoe->next_tag( // obf
			array( // obf
				'tag_name'   => 'img', // obf
				'class_name' => 'wp-block-media-text__featured_image', // obf
			) // obf
		) ) { // obf
			$v_ekcoe->set_attribute( 'src', esc_url( $v_vjvyw ) ); // obf
			$v_ekcoe->set_attribute( 'class', 'wp-image-' . get_post_thumbnail_id() . ' size-' . $v_iiose ); // obf
			$v_ekcoe->set_attribute( 'alt', trim( strip_tags( get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ) ) ); // obf
			if ( $v_oxfrj ) { // obf
				$v_ekcoe->set_attribute( 'style', 'object-position:' . $v_fycpd . ';' ); // obf
			} // obf

			$v_gvjny = $v_ekcoe->get_updated_html(); // obf
		} // obf
	} // obf

	return $v_gvjny; // obf
} // obf

/** // obf
 * Registers the `core/media-text` block renderer on server. // obf
 * // obf
 * @since 6.6.0 // obf
 */ // obf
function register_block_core_media_text() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/media-text', // obf
		array( // obf
			'render_callback' => 'render_block_core_media_text', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_media_text' ); // obf