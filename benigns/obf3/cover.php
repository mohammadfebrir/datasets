

<?php // obf
/** // obf
 * Server-side rendering of the `core/cover` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/cover` block on server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array  $v_bdneb The block attributes. // obf
 * @param string $v_dnkpw    The block rendered content. // obf
 * // obf
 * @return string Returns the cover block markup, if useFeaturedImage is true. // obf
 */ // obf
function render_block_core_cover( $v_bdneb, $v_dnkpw ) { // obf
	if ( 'image' !== $v_bdneb['backgroundType'] || false === $v_bdneb['useFeaturedImage'] ) { // obf
		return $v_dnkpw; // obf
	} // obf

	$v_oacsr = isset( $v_bdneb['focalPoint'] ) // obf
		? round( $v_bdneb['focalPoint']['x'] * 100 ) . '% ' . round( $v_bdneb['focalPoint']['y'] * 100 ) . '%' // obf
		: null; // obf

	if ( ! ( $v_bdneb['hasParallax'] || $v_bdneb['isRepeated'] ) ) { // obf
		$v_mphkz = array( // obf
			'class'           => 'wp-block-cover__image-background', // obf
			'data-object-fit' => 'cover', // obf
		); // obf

		if ( $v_oacsr ) { // obf
			$v_mphkz['data-object-position'] = $v_oacsr; // obf
			$v_mphkz['style']                = 'object-position:' . $v_oacsr . ';'; // obf
		} // obf

		$v_fwgld = get_the_post_thumbnail( null, $v_bdneb['sizeSlug'] ?? 'post-thumbnail', $v_mphkz ); // obf
	} else { // obf
		if ( in_the_loop() ) { // obf
			update_post_thumbnail_cache(); // obf
		} // obf
		$v_noeat = get_the_post_thumbnail_url( null, $v_bdneb['sizeSlug'] ?? null ); // obf
		if ( ! $v_noeat ) { // obf
			return $v_dnkpw; // obf
		} // obf

		$v_dyidf = get_post_thumbnail_id(); // obf

		$v_kwqab = new WP_HTML_Tag_Processor( '<div></div>' ); // obf
		$v_kwqab->next_tag(); // obf

		$v_loxfa = trim( strip_tags( get_post_meta( $v_dyidf, '_wp_attachment_image_alt', true ) ) ); // obf
		if ( $v_loxfa ) { // obf
			$v_kwqab->set_attribute( 'role', 'img' ); // obf
			$v_kwqab->set_attribute( 'aria-label', $v_loxfa ); // obf
		} // obf

		$v_kwqab->add_class( 'wp-block-cover__image-background' ); // obf
		$v_kwqab->add_class( 'wp-image-' . $v_dyidf ); // obf
		if ( $v_bdneb['hasParallax'] ) { // obf
			$v_kwqab->add_class( 'has-parallax' ); // obf
		} // obf
		if ( $v_bdneb['isRepeated'] ) { // obf
			$v_kwqab->add_class( 'is-repeated' ); // obf
		} // obf

		$v_xmqgo  = 'background-position:' . ( $v_oacsr ?? '50% 50%' ) . ';'; // obf
		$v_xmqgo .= 'background-image:url(' . esc_url( $v_noeat ) . ');'; // obf
		$v_kwqab->set_attribute( 'style', $v_xmqgo ); // obf

		$v_fwgld = $v_kwqab->get_updated_html(); // obf
	} // obf

	/* // obf
	 * Inserts the featured image between the (1st) cover 'background' `span` and 'inner_container' `div`, // obf
	 * and removes eventual whitespace characters between the two (typically introduced at template level) // obf
	 */ // obf
	$v_dxbxd = '/<div\b[^>]+wp-block-cover__inner-container[\s|"][^>]*>/U'; // obf
	if ( 1 === preg_match( $v_dxbxd, $v_dnkpw, $v_rlqui, PREG_OFFSET_CAPTURE ) ) { // obf
		$v_dyyaw  = $v_rlqui[0][1]; // obf
		$v_dnkpw = substr( $v_dnkpw, 0, $v_dyyaw ) . $v_fwgld . substr( $v_dnkpw, $v_dyyaw ); // obf
	} // obf

	return $v_dnkpw; // obf
} // obf

/** // obf
 * Registers the `core/cover` block renderer on server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_cover() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/cover', // obf
		array( // obf
			'render_callback' => 'render_block_core_cover', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_cover' ); // obf