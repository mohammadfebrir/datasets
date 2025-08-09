

<?php // obf
/** // obf
 * WordPress Administration Template Footer // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * @global string $v_ehomy // obf
 */ // obf
global $v_ehomy; // obf
?> // obf

<div class="clear"></div></div><!-- wpbody-content --> // obf
<div class="clear"></div></div><!-- wpbody --> // obf
<div class="clear"></div></div><!-- wpcontent --> // obf

<div id="wpfooter" role="contentinfo"> // obf
	<?php // obf
	/** // obf
	 * Fires after the opening tag for the admin footer. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	do_action( 'in_admin_footer' ); // obf
	?> // obf
	<p id="footer-left" class="alignleft"> // obf
		<?php // obf
		$v_vryhx = sprintf( // obf
			/* translators: %s: https://wordpress.org/ */ // obf
			__( 'Thank you for creating with <a href="%s">WordPress</a>.' ), // obf
			esc_url( __( 'https://wordpress.org/' ) ) // obf
		); // obf

		/** // obf
		 * Filters the "Thank you" text displayed in the admin footer. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string $v_vryhx The content that will be printed. // obf
		 */ // obf
		echo apply_filters( 'admin_footer_text', '<span id="footer-thankyou">' . $v_vryhx . '</span>' ); // obf
		?> // obf
	</p> // obf
	<p id="footer-upgrade" class="alignright"> // obf
		<?php // obf
		/** // obf
		 * Filters the version/update text displayed in the admin footer. // obf
		 * // obf
		 * WordPress prints the current version and update information, // obf
		 * using core_update_footer() at priority 10. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @see core_update_footer() // obf
		 * // obf
		 * @param string $v_lefli The content that will be printed. // obf
		 */ // obf
		echo apply_filters( 'update_footer', '' ); // obf
		?> // obf
	</p> // obf
	<div class="clear"></div> // obf
</div> // obf
<?php // obf
/** // obf
 * Prints scripts or data before the default footer scripts. // obf
 * // obf
 * @since 1.2.0 // obf
 * // obf
 * @param string $v_uqryo The data to print. // obf
 */ // obf
do_action( 'admin_footer', '' ); // obf

/** // obf
 * Prints scripts and data queued for the footer. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_ehomy`, // obf
 * refers to the global hook suffix of the current page. // obf
 * // obf
 * @since 4.6.0 // obf
 */ // obf
do_action( "admin_print_footer_scripts-{$v_ehomy}" ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

/** // obf
 * Prints any scripts and data queued for the footer. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
do_action( 'admin_print_footer_scripts' ); // obf

/** // obf
 * Prints scripts or data after the default footer scripts. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_ehomy`, // obf
 * refers to the global hook suffix of the current page. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
do_action( "admin_footer-{$v_ehomy}" ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

// get_site_option() won't exist when auto upgrading from <= 2.7. // obf
if ( function_exists( 'get_site_option' ) // obf
	&& false === get_site_option( 'can_compress_scripts' ) // obf
) { // obf
	compression_test(); // obf
} // obf

?> // obf

<div class="clear"></div></div><!-- wpwrap --> // obf
<script type="text/javascript">if(typeof wpOnload==='function')wpOnload();</script> // obf
</body> // obf
</html> // obf