

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-featured-image` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-featured-image` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array    $v_rspal Block attributes. // obf
 * @param string   $v_pxzfp    Block default content. // obf
 * @param WP_Block $v_sxcdx      Block instance. // obf
 * @return string Returns the featured image for the current post. // obf
 */ // obf
function render_block_core_post_featured_image( $v_rspal, $v_pxzfp, $v_sxcdx ) { // obf
	if ( ! isset( $v_sxcdx->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf
	$v_kryll = $v_sxcdx->context['postId']; // obf

	$v_pvbxh        = isset( $v_rspal['isLink'] ) && $v_rspal['isLink']; // obf
	$v_ovqxr      = isset( $v_rspal['sizeSlug'] ) ? $v_rspal['sizeSlug'] : 'post-thumbnail'; // obf
	$v_algoq           = get_block_core_post_featured_image_border_attributes( $v_rspal ); // obf
	$v_wpqjn = get_block_core_post_featured_image_overlay_element_markup( $v_rspal ); // obf

	if ( $v_pvbxh ) { // obf
		if ( get_the_title( $v_kryll ) ) { // obf
			$v_algoq['alt'] = trim( strip_tags( get_the_title( $v_kryll ) ) ); // obf
		} else { // obf
			$v_algoq['alt'] = sprintf( // obf
				// translators: %d is the post ID. // obf
				__( 'Untitled post %d' ), // obf
				$v_kryll // obf
			); // obf
		} // obf
	} // obf

	$v_gfwhs = ''; // obf

	// Aspect ratio with a height set needs to override the default width/height. // obf
	if ( ! empty( $v_rspal['aspectRatio'] ) ) { // obf
		$v_gfwhs .= 'width:100%;height:100%;'; // obf
	} elseif ( ! empty( $v_rspal['height'] ) ) { // obf
		$v_gfwhs .= "height:{$v_rspal['height']};"; // obf
	} // obf

	if ( ! empty( $v_rspal['scale'] ) ) { // obf
		$v_gfwhs .= "object-fit:{$v_rspal['scale']};"; // obf
	} // obf
	if ( ! empty( $v_rspal['style']['shadow'] ) ) { // obf
		$v_eessx = wp_style_engine_get_styles( array( 'shadow' => $v_rspal['style']['shadow'] ) ); // obf

		if ( ! empty( $v_eessx['css'] ) ) { // obf
			$v_gfwhs .= $v_eessx['css']; // obf
		} // obf
	} // obf

	if ( ! empty( $v_gfwhs ) ) { // obf
		$v_algoq['style'] = empty( $v_algoq['style'] ) ? $v_gfwhs : $v_algoq['style'] . $v_gfwhs; // obf
	} // obf

	$v_hqbya = get_the_post_thumbnail( $v_kryll, $v_ovqxr, $v_algoq ); // obf

	// Get the first image from the post. // obf
	if ( $v_rspal['useFirstImageFromPost'] && ! $v_hqbya ) { // obf
		$v_oztnt = get_post( $v_kryll ); // obf
		$v_pxzfp      = $v_oztnt->post_content; // obf
		$v_zqdjr    = new WP_HTML_Tag_Processor( $v_pxzfp ); // obf

		/* // obf
		 * Transfer the image tag from the post into a new text snippet. // obf
		 * Because the HTML API doesn't currently expose a way to extract // obf
		 * HTML substrings this is necessary as a workaround. Of note, this // obf
		 * is different than directly extracting the IMG tag: // obf
		 * - If there are duplicate attributes in the source there will only be one in the output. // obf
		 * - If there are single-quoted or unquoted attributes they will be double-quoted in the output. // obf
		 * - If there are named character references in the attribute values they may be replaced with their direct code points. E.g. `&hellip;` becomes `…`. // obf
		 * In the future there will likely be a mechanism to copy snippets of HTML from // obf
		 * one document into another, via the HTML Processor's `get_outer_html()` or // obf
		 * equivalent. When that happens it would be appropriate to replace this custom // obf
		 * code with that canonical code. // obf
		 */ // obf
		if ( $v_zqdjr->next_tag( 'img' ) ) { // obf
			$v_dvlvo = new WP_HTML_Tag_Processor( '<img>' ); // obf
			$v_dvlvo->next_tag(); // obf
			foreach ( $v_zqdjr->get_attribute_names_with_prefix( '' ) as $v_macfh ) { // obf
				$v_dvlvo->set_attribute( $v_macfh, $v_zqdjr->get_attribute( $v_macfh ) ); // obf
			} // obf
			$v_hqbya = $v_dvlvo->get_updated_html(); // obf
		} // obf
	} // obf

	if ( ! $v_hqbya ) { // obf
		return ''; // obf
	} // obf

	if ( $v_pvbxh ) { // obf
		$v_fqxzk    = $v_rspal['linkTarget']; // obf
		$v_evnmb            = ! empty( $v_rspal['rel'] ) ? 'rel="' . esc_attr( $v_rspal['rel'] ) . '"' : ''; // obf
		$v_xcsyh         = ! empty( $v_rspal['height'] ) ? 'style="' . esc_attr( safecss_filter_attr( 'height:' . $v_rspal['height'] ) ) . '"' : ''; // obf
		$v_hqbya = sprintf( // obf
			'<a href="%1$v_ereza" target="%2$v_ereza" %3$v_ereza %4$v_ereza>%5$v_ereza%6$v_ereza</a>', // obf
			get_the_permalink( $v_kryll ), // obf
			esc_attr( $v_fqxzk ), // obf
			$v_evnmb, // obf
			$v_xcsyh, // obf
			$v_hqbya, // obf
			$v_wpqjn // obf
		); // obf
	} else { // obf
		$v_hqbya = $v_hqbya . $v_wpqjn; // obf
	} // obf

	$v_iutjm = ! empty( $v_rspal['aspectRatio'] ) // obf
		? esc_attr( safecss_filter_attr( 'aspect-ratio:' . $v_rspal['aspectRatio'] ) ) . ';' // obf
		: ''; // obf
	$v_tbdnd        = ! empty( $v_rspal['width'] ) // obf
		? esc_attr( safecss_filter_attr( 'width:' . $v_rspal['width'] ) ) . ';' // obf
		: ''; // obf
	$v_xcsyh       = ! empty( $v_rspal['height'] ) // obf
		? esc_attr( safecss_filter_attr( 'height:' . $v_rspal['height'] ) ) . ';' // obf
		: ''; // obf
	if ( ! $v_xcsyh && ! $v_tbdnd && ! $v_iutjm ) { // obf
		$v_xyabt = get_block_wrapper_attributes(); // obf
	} else { // obf
		$v_xyabt = get_block_wrapper_attributes( array( 'style' => $v_iutjm . $v_tbdnd . $v_xcsyh ) ); // obf
	} // obf
	return "<figure {$v_xyabt}>{$v_hqbya}</figure>"; // obf
} // obf

/** // obf
 * Generate markup for the HTML element that will be used for the overlay. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @param array $v_rspal Block attributes. // obf
 * // obf
 * @return string HTML markup in string format. // obf
 */ // obf
function get_block_core_post_featured_image_overlay_element_markup( $v_rspal ) { // obf
	$v_evukk  = isset( $v_rspal['dimRatio'] ) && $v_rspal['dimRatio']; // obf
	$v_unzil        = isset( $v_rspal['gradient'] ) && $v_rspal['gradient']; // obf
	$v_heaae = isset( $v_rspal['customGradient'] ) && $v_rspal['customGradient']; // obf
	$v_pvtxa   = isset( $v_rspal['overlayColor'] ) && $v_rspal['overlayColor']; // obf
	$v_lpncx  = isset( $v_rspal['customOverlayColor'] ) && $v_rspal['customOverlayColor']; // obf
	$v_hxzff         = array( 'wp-block-post-featured-image__overlay' ); // obf
	$v_ijovu              = array(); // obf

	if ( ! $v_evukk ) { // obf
		return ''; // obf
	} // obf

	// Apply border classes and styles. // obf
	$v_quvdd = get_block_core_post_featured_image_border_attributes( $v_rspal ); // obf

	if ( ! empty( $v_quvdd['class'] ) ) { // obf
		$v_hxzff[] = $v_quvdd['class']; // obf
	} // obf

	if ( ! empty( $v_quvdd['style'] ) ) { // obf
		$v_ijovu[] = $v_quvdd['style']; // obf
	} // obf

	// Apply overlay and gradient classes. // obf
	if ( $v_evukk ) { // obf
		$v_hxzff[] = 'has-background-dim'; // obf
		$v_hxzff[] = "has-background-dim-{$v_rspal['dimRatio']}"; // obf
	} // obf

	if ( $v_pvtxa ) { // obf
		$v_hxzff[] = "has-{$v_rspal['overlayColor']}-background-color"; // obf
	} // obf

	if ( $v_unzil || $v_heaae ) { // obf
		$v_hxzff[] = 'has-background-gradient'; // obf
	} // obf

	if ( $v_unzil ) { // obf
		$v_hxzff[] = "has-{$v_rspal['gradient']}-gradient-background"; // obf
	} // obf

	// Apply background styles. // obf
	if ( $v_heaae ) { // obf
		$v_ijovu[] = sprintf( 'background-image: %s;', $v_rspal['customGradient'] ); // obf
	} // obf

	if ( $v_lpncx ) { // obf
		$v_ijovu[] = sprintf( 'background-color: %s;', $v_rspal['customOverlayColor'] ); // obf
	} // obf

	return sprintf( // obf
		'<span class="%s" style="%s" aria-hidden="true"></span>', // obf
		esc_attr( implode( ' ', $v_hxzff ) ), // obf
		esc_attr( safecss_filter_attr( implode( ' ', $v_ijovu ) ) ) // obf
	); // obf
} // obf

/** // obf
 * Generates class names and styles to apply the border support styles for // obf
 * the Post Featured Image block. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @param array $v_rspal The block attributes. // obf
 * @return array The border-related classnames and styles for the block. // obf
 */ // obf
function get_block_core_post_featured_image_border_attributes( $v_rspal ) { // obf
	$v_piyzl = array(); // obf
	$v_siewt         = array( 'top', 'right', 'bottom', 'left' ); // obf

	// Border radius. // obf
	if ( isset( $v_rspal['style']['border']['radius'] ) ) { // obf
		$v_piyzl['radius'] = $v_rspal['style']['border']['radius']; // obf
	} // obf

	// Border style. // obf
	if ( isset( $v_rspal['style']['border']['style'] ) ) { // obf
		$v_piyzl['style'] = $v_rspal['style']['border']['style']; // obf
	} // obf

	// Border width. // obf
	if ( isset( $v_rspal['style']['border']['width'] ) ) { // obf
		$v_piyzl['width'] = $v_rspal['style']['border']['width']; // obf
	} // obf

	// Border color. // obf
	$v_ivolj           = array_key_exists( 'borderColor', $v_rspal ) ? "var:preset|color|{$v_rspal['borderColor']}" : null; // obf
	$v_wqbwt           = $v_rspal['style']['border']['color'] ?? null; // obf
	$v_piyzl['color'] = $v_ivolj ? $v_ivolj : $v_wqbwt; // obf

	// Individual border styles e.g. top, left etc. // obf
	foreach ( $v_siewt as $v_kpqwk ) { // obf
		$v_oryux                 = $v_rspal['style']['border'][ $v_kpqwk ] ?? null; // obf
		$v_piyzl[ $v_kpqwk ] = array( // obf
			'color' => isset( $v_oryux['color'] ) ? $v_oryux['color'] : null, // obf
			'style' => isset( $v_oryux['style'] ) ? $v_oryux['style'] : null, // obf
			'width' => isset( $v_oryux['width'] ) ? $v_oryux['width'] : null, // obf
		); // obf
	} // obf

	$v_ijovu     = wp_style_engine_get_styles( array( 'border' => $v_piyzl ) ); // obf
	$v_rspal = array(); // obf
	if ( ! empty( $v_ijovu['classnames'] ) ) { // obf
		$v_rspal['class'] = $v_ijovu['classnames']; // obf
	} // obf
	if ( ! empty( $v_ijovu['css'] ) ) { // obf
		$v_rspal['style'] = $v_ijovu['css']; // obf
	} // obf
	return $v_rspal; // obf
} // obf

/** // obf
 * Registers the `core/post-featured-image` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_post_featured_image() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-featured-image', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_featured_image', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_featured_image' ); // obf