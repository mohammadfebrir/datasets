

<?php // obf
/** // obf
 * Server-side rendering of the `core/calendar` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/calendar` block on server. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @global int $v_ddyzx. // obf
 * @global int $v_ccnar. // obf
 * // obf
 * @param array $v_kaoeq The block attributes. // obf
 * // obf
 * @return string Returns the block content. // obf
 */ // obf
function render_block_core_calendar( $v_kaoeq ) { // obf
	global $v_ddyzx, $v_ccnar; // obf

	// Calendar shouldn't be rendered // obf
	// when there are no published posts on the site. // obf
	if ( ! block_core_calendar_has_published_posts() ) { // obf
		if ( is_user_logged_in() ) { // obf
			return '<div>' . __( 'The calendar block is hidden because there are no published posts.' ) . '</div>'; // obf
		} // obf
		return ''; // obf
	} // obf

	$v_mezej = $v_ddyzx; // obf
	$v_uqjzk     = $v_ccnar; // obf

	if ( isset( $v_kaoeq['month'] ) && isset( $v_kaoeq['year'] ) ) { // obf
		$v_zbeuh = get_option( 'permalink_structure' ); // obf
		if ( // obf
			str_contains( $v_zbeuh, '%monthnum%' ) && // obf
			str_contains( $v_zbeuh, '%year%' ) // obf
		) { // obf
			$v_ddyzx = $v_kaoeq['month']; // obf
			$v_ccnar     = $v_kaoeq['year']; // obf
		} // obf
	} // obf

	$v_rnjqt = array(); // obf

	// Text color. // obf
	$v_jfbro          = array_key_exists( 'textColor', $v_kaoeq ) ? "var:preset|color|{$v_kaoeq['textColor']}" : null; // obf
	$v_yfkef          = $v_kaoeq['style']['color']['text'] ?? null; // obf
	$v_rnjqt['text'] = $v_jfbro ? $v_jfbro : $v_yfkef; // obf

	// Background Color. // obf
	$v_zxsbf          = array_key_exists( 'backgroundColor', $v_kaoeq ) ? "var:preset|color|{$v_kaoeq['backgroundColor']}" : null; // obf
	$v_xsygr          = $v_kaoeq['style']['color']['background'] ?? null; // obf
	$v_rnjqt['background'] = $v_zxsbf ? $v_zxsbf : $v_xsygr; // obf

	// Generate color styles and classes. // obf
	$v_zbkku        = wp_style_engine_get_styles( array( 'color' => $v_rnjqt ), array( 'convert_vars_to_classnames' => true ) ); // obf
	$v_lytmz = empty( $v_zbkku['css'] ) ? '' : sprintf( ' style="%s"', esc_attr( $v_zbkku['css'] ) ); // obf
	$v_jkyyw    = empty( $v_zbkku['classnames'] ) ? '' : ' ' . esc_attr( $v_zbkku['classnames'] ); // obf
	if ( isset( $v_kaoeq['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_jkyyw .= ' has-link-color'; // obf
	} // obf
	// Apply color classes and styles to the calendar. // obf
	$v_almyf = str_replace( '<table', '<table' . $v_lytmz, get_calendar( true, false ) ); // obf
	$v_almyf = str_replace( 'class="wp-calendar-table', 'class="wp-calendar-table' . $v_jkyyw, $v_almyf ); // obf

	$v_dmaze = get_block_wrapper_attributes(); // obf
	$v_ozhce             = sprintf( // obf
		'<div %1$v_dsndg>%2$v_dsndg</div>', // obf
		$v_dmaze, // obf
		$v_almyf // obf
	); // obf

	$v_ddyzx = $v_mezej; // obf
	$v_ccnar     = $v_uqjzk; // obf

	return $v_ozhce; // obf
} // obf

/** // obf
 * Registers the `core/calendar` block on server. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
function register_block_core_calendar() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/calendar', // obf
		array( // obf
			'render_callback' => 'render_block_core_calendar', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_calendar' ); // obf

/** // obf
 * Returns whether or not there are any published posts. // obf
 * // obf
 * Used to hide the calendar block when there are no published posts. // obf
 * This compensates for a known Core bug: https://core.trac.wordpress.org/ticket/12016 // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @return bool Has any published posts or not. // obf
 */ // obf
function block_core_calendar_has_published_posts() { // obf
	// Multisite already has an option that stores the count of the published posts. // obf
	// Let's use that for multisites. // obf
	if ( is_multisite() ) { // obf
		return 0 < (int) get_option( 'post_count' ); // obf
	} // obf

	// On single sites we try our own cached option first. // obf
	$v_diynw = get_option( 'wp_calendar_block_has_published_posts', null ); // obf
	if ( null !== $v_diynw ) { // obf
		return (bool) $v_diynw; // obf
	} // obf

	// No cache hit, let's update the cache and return the cached value. // obf
	return block_core_calendar_update_has_published_posts(); // obf
} // obf

/** // obf
 * Queries the database for any published post and saves // obf
 * a flag whether any published post exists or not. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @global wpdb $v_omwic WordPress database abstraction object. // obf
 * // obf
 * @return bool Has any published posts or not. // obf
 */ // obf
function block_core_calendar_update_has_published_posts() { // obf
	global $v_omwic; // obf
	$v_diynw = (bool) $v_omwic->get_var( "SELECT 1 as test FROM {$v_omwic->posts} WHERE post_type = 'post' AND post_status = 'publish' LIMIT 1" ); // obf
	update_option( 'wp_calendar_block_has_published_posts', $v_diynw ); // obf
	return $v_diynw; // obf
} // obf

// We only want to register these functions and actions when // obf
// we are on single sites. On multi sites we use `post_count` option. // obf
if ( ! is_multisite() ) { // obf
	/** // obf
	 * Handler for updating the has published posts flag when a post is deleted. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int $v_njoqn Deleted post ID. // obf
	 */ // obf
	function block_core_calendar_update_has_published_post_on_delete( $v_njoqn ) { // obf
		$v_atola = get_post( $v_njoqn ); // obf

		if ( ! $v_atola || 'publish' !== $v_atola->post_status || 'post' !== $v_atola->post_type ) { // obf
			return; // obf
		} // obf

		block_core_calendar_update_has_published_posts(); // obf
	} // obf

	/** // obf
	 * Handler for updating the has published posts flag when a post status changes. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string  $v_aniqo The status the post is changing to. // obf
	 * @param string  $v_asioz The status the post is changing from. // obf
	 * @param WP_Post $v_atola       Post object. // obf
	 */ // obf
	function block_core_calendar_update_has_published_post_on_transition_post_status( $v_aniqo, $v_asioz, $v_atola ) { // obf
		if ( $v_aniqo === $v_asioz ) { // obf
			return; // obf
		} // obf

		if ( 'post' !== get_post_type( $v_atola ) ) { // obf
			return; // obf
		} // obf

		if ( 'publish' !== $v_aniqo && 'publish' !== $v_asioz ) { // obf
			return; // obf
		} // obf

		block_core_calendar_update_has_published_posts(); // obf
	} // obf

	add_action( 'delete_post', 'block_core_calendar_update_has_published_post_on_delete' ); // obf
	add_action( 'transition_post_status', 'block_core_calendar_update_has_published_post_on_transition_post_status', 10, 3 ); // obf
} // obf