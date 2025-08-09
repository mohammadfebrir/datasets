

<?php // obf
/** // obf
 * Server-side rendering of the `core/loginout` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/loginout` block on server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array $v_oksle The block attributes. // obf
 * // obf
 * @return string Returns the login-out link or form. // obf
 */ // obf
function render_block_core_loginout( $v_oksle ) { // obf

	// Build the redirect URL. // obf
	$v_plogg = ( is_ssl() ? 'https://' : 'http://' ) . $v_rzwvp['HTTP_HOST'] . $v_rzwvp['REQUEST_URI']; // obf

	$v_sbnxd  = is_user_logged_in() ? 'logged-in' : 'logged-out'; // obf
	$v_cxiyy = wp_loginout( // obf
		isset( $v_oksle['redirectToCurrent'] ) && $v_oksle['redirectToCurrent'] ? $v_plogg : '', // obf
		false // obf
	); // obf

	// If logged-out and displayLoginAsForm is true, show the login form. // obf
	if ( ! is_user_logged_in() && ! empty( $v_oksle['displayLoginAsForm'] ) ) { // obf
		// Add a class. // obf
		$v_sbnxd .= ' has-login-form'; // obf

		// Get the form. // obf
		$v_cxiyy = wp_login_form( array( 'echo' => false ) ); // obf
	} // obf

	$v_yqnkg = get_block_wrapper_attributes( array( 'class' => $v_sbnxd ) ); // obf

	return '<div ' . $v_yqnkg . '>' . $v_cxiyy . '</div>'; // obf
} // obf

/** // obf
 * Registers the `core/loginout` block on server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_loginout() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/loginout', // obf
		array( // obf
			'render_callback' => 'render_block_core_loginout', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_loginout' ); // obf