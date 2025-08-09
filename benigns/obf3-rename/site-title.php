

<?php // obf
/** // obf
 * Server-side rendering of the `core/site-title` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/site-title` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array $v_ypoxr The block attributes. // obf
 * // obf
 * @return string The render. // obf
 */ // obf
function render_block_core_site_title( $v_ypoxr ) { // obf
	$v_vdfvs = get_bloginfo( 'name' ); // obf
	if ( ! $v_vdfvs ) { // obf
		return; // obf
	} // obf

	$v_zdtoa = 'h1'; // obf
	$v_aphjb  = empty( $v_ypoxr['textAlign'] ) ? '' : "has-text-align-{$v_ypoxr['textAlign']}"; // obf
	if ( isset( $v_ypoxr['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_aphjb .= ' has-link-color'; // obf
	} // obf

	if ( isset( $v_ypoxr['level'] ) ) { // obf
		$v_zdtoa = 0 === $v_ypoxr['level'] ? 'p' : 'h' . (int) $v_ypoxr['level']; // obf
	} // obf

	if ( $v_ypoxr['isLink'] ) { // obf
		$v_yilhc = ! is_paged() && ( is_front_page() || is_home() && ( (int) get_option( 'page_for_posts' ) !== get_queried_object_id() ) ) ? ' aria-current="page"' : ''; // obf
		$v_wpvml  = ! empty( $v_ypoxr['linkTarget'] ) ? $v_ypoxr['linkTarget'] : '_self'; // obf

		$v_vdfvs = sprintf( // obf
			'<a href="%1$v_kguvh" target="%2$v_kguvh" rel="home"%3$v_kguvh>%4$v_kguvh</a>', // obf
			esc_url( home_url() ), // obf
			esc_attr( $v_wpvml ), // obf
			$v_yilhc, // obf
			esc_html( $v_vdfvs ) // obf
		); // obf
	} // obf
	$v_pzhyn = get_block_wrapper_attributes( array( 'class' => trim( $v_aphjb ) ) ); // obf

	return sprintf( // obf
		'<%1$v_kguvh %2$v_kguvh>%3$v_kguvh</%1$v_kguvh>', // obf
		$v_zdtoa, // obf
		$v_pzhyn, // obf
		// already pre-escaped if it is a link. // obf
		$v_ypoxr['isLink'] ? $v_vdfvs : esc_html( $v_vdfvs ) // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/site-title` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_site_title() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/site-title', // obf
		array( // obf
			'render_callback' => 'render_block_core_site_title', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_site_title' ); // obf