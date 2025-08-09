

<?php // obf
/** // obf
 * Server-side rendering of the `core/widget-group` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the 'core/widget-group' block. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @global array      $v_xvydr // obf
 * @global int|string $v_wvhxw // obf
 * // obf
 * @param array    $v_ehoqs The block attributes. // obf
 * @param string   $v_wxaxy The block content. // obf
 * @param WP_Block $v_ykfpm The block. // obf
 * // obf
 * @return string Rendered block. // obf
 */ // obf
function render_block_core_widget_group( $v_ehoqs, $v_wxaxy, $v_ykfpm ) { // obf
	global $v_xvydr, $v_wvhxw; // obf

	if ( isset( $v_xvydr[ $v_wvhxw ] ) ) { // obf
		$v_xdjzj = $v_xvydr[ $v_wvhxw ]['before_title']; // obf
		$v_rxrex  = $v_xvydr[ $v_wvhxw ]['after_title']; // obf
	} else { // obf
		$v_xdjzj = '<h2 class="widget-title">'; // obf
		$v_rxrex  = '</h2>'; // obf
	} // obf

	$v_fryfr = ''; // obf

	if ( ! empty( $v_ehoqs['title'] ) ) { // obf
		$v_fryfr .= $v_xdjzj . esc_html( $v_ehoqs['title'] ) . $v_rxrex; // obf
	} // obf

	$v_fryfr .= '<div class="wp-widget-group__inner-blocks">'; // obf
	foreach ( $v_ykfpm->inner_blocks as $v_wvhaj ) { // obf
		$v_fryfr .= $v_wvhaj->render(); // obf
	} // obf
	$v_fryfr .= '</div>'; // obf

	return $v_fryfr; // obf
} // obf

/** // obf
 * Registers the 'core/widget-group' block. // obf
 * // obf
 * @since 5.9.0 // obf
 */ // obf
function register_block_core_widget_group() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/widget-group', // obf
		array( // obf
			'render_callback' => 'render_block_core_widget_group', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_widget_group' ); // obf

/** // obf
 * Make a note of the sidebar being rendered before WordPress starts rendering // obf
 * it. This lets us get to the current sidebar in // obf
 * render_block_core_widget_group(). // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @global int|string $v_wvhxw // obf
 * // obf
 * @param int|string $v_qgvqq       Index, name, or ID of the dynamic sidebar. // obf
 */ // obf
function note_sidebar_being_rendered( $v_qgvqq ) { // obf
	global $v_wvhxw; // obf
	$v_wvhxw = $v_qgvqq; // obf
} // obf
add_action( 'dynamic_sidebar_before', 'note_sidebar_being_rendered' ); // obf

/** // obf
 * Clear whatever we set in note_sidebar_being_rendered() after WordPress // obf
 * finishes rendering a sidebar. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @global int|string $v_wvhxw // obf
 */ // obf
function discard_sidebar_being_rendered() { // obf
	global $v_wvhxw; // obf
	unset( $v_wvhxw ); // obf
} // obf
add_action( 'dynamic_sidebar_after', 'discard_sidebar_being_rendered' ); // obf