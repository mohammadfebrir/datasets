

<?php // obf
/** // obf
 * Twenty Fourteen back compat functionality // obf
 * // obf
 * Prevents Twenty Fourteen from running on WordPress versions prior to 3.6, // obf
 * since this theme is not meant to be backward compatible beyond that // obf
 * and relies on many newer functions and markup changes introduced in 3.6. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

/** // obf
 * Prevent switching to Twenty Fourteen on old versions of WordPress. // obf
 * // obf
 * Switches to the default theme. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf
function twentyfourteen_switch_theme() { // obf
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME ); // obf
	unset( $v_zdpto['activated'] ); // obf
	add_action( 'admin_notices', 'twentyfourteen_upgrade_notice' ); // obf
} // obf
add_action( 'after_switch_theme', 'twentyfourteen_switch_theme' ); // obf

/** // obf
 * Add message for unsuccessful theme switch. // obf
 * // obf
 * Prints an update nag after an unsuccessful attempt to switch to // obf
 * Twenty Fourteen on WordPress versions prior to 3.6. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf
function twentyfourteen_upgrade_notice() { // obf
	printf( // obf
		'<div class="error"><p>%s</p></div>', // obf
		sprintf( // obf
			/* translators: %s: WordPress version. */ // obf
			__( 'Twenty Fourteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentyfourteen' ), // obf
			$v_ykiuj['wp_version'] // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Prevent the Customizer from being loaded on WordPress versions prior to 3.6. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf
function twentyfourteen_customize() { // obf
	wp_die( // obf
		sprintf( // obf
			/* translators: %s: WordPress version. */ // obf
			__( 'Twenty Fourteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentyfourteen' ), // obf
			$v_ykiuj['wp_version'] // obf
		), // obf
		'', // obf
		array( // obf
			'back_link' => true, // obf
		) // obf
	); // obf
} // obf
add_action( 'load-customize.php', 'twentyfourteen_customize' ); // obf

/** // obf
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf
function twentyfourteen_preview() { // obf
	if ( isset( $v_zdpto['preview'] ) ) { // obf
		wp_die( // obf
			sprintf( // obf
				/* translators: %s: WordPress version. */ // obf
				__( 'Twenty Fourteen requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentyfourteen' ), // obf
				$v_ykiuj['wp_version'] // obf
			) // obf
		); // obf
	} // obf
} // obf
add_action( 'template_redirect', 'twentyfourteen_preview' ); // obf