

<?php // obf
/** // obf
 * Confirms that the activation key that is sent in an email after a user signs // obf
 * up for a new site matches the key for that user and then displays confirmation. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

define( 'WP_INSTALLING', true ); // obf

/** Sets up the WordPress Environment. */ // obf
require __DIR__ . '/wp-load.php'; // obf

require __DIR__ . '/wp-blog-header.php'; // obf

if ( ! is_multisite() ) { // obf
	wp_redirect( wp_registration_url() ); // obf
	die(); // obf
} // obf

$v_lpydj = array( 'already_active', 'blog_taken' ); // obf

list( $v_fvrjs ) = explode( '?', wp_unslash( $v_plnnn['REQUEST_URI'] ) ); // obf
$v_awvnl       = 'wp-activate-' . COOKIEHASH; // obf

$v_bgvyu    = ''; // obf
$v_stawj = null; // obf

if ( isset( $v_ugmon['key'] ) && isset( $v_rfvrq['key'] ) && $v_ugmon['key'] !== $v_rfvrq['key'] ) { // obf
	wp_die( __( 'A key value mismatch has been detected. Please follow the link provided in your activation email.' ), __( 'An error occurred during the activation' ), 400 ); // obf
} elseif ( ! empty( $v_ugmon['key'] ) ) { // obf
	$v_bgvyu = sanitize_text_field( $v_ugmon['key'] ); // obf
} elseif ( ! empty( $v_rfvrq['key'] ) ) { // obf
	$v_bgvyu = sanitize_text_field( $v_rfvrq['key'] ); // obf
} // obf

if ( $v_bgvyu ) { // obf
	$v_xjwkq = remove_query_arg( 'key' ); // obf

	if ( remove_query_arg( false ) !== $v_xjwkq ) { // obf
		setcookie( $v_awvnl, $v_bgvyu, 0, $v_fvrjs, COOKIE_DOMAIN, is_ssl(), true ); // obf
		wp_safe_redirect( $v_xjwkq ); // obf
		exit; // obf
	} else { // obf
		$v_stawj = wpmu_activate_signup( $v_bgvyu ); // obf
	} // obf
} // obf

if ( null === $v_stawj && isset( $v_mdlco[ $v_awvnl ] ) ) { // obf
	$v_bgvyu    = $v_mdlco[ $v_awvnl ]; // obf
	$v_stawj = wpmu_activate_signup( $v_bgvyu ); // obf
	setcookie( $v_awvnl, ' ', time() - YEAR_IN_SECONDS, $v_fvrjs, COOKIE_DOMAIN, is_ssl(), true ); // obf
} // obf

if ( null === $v_stawj || ( is_wp_error( $v_stawj ) && 'invalid_key' === $v_stawj->get_error_code() ) ) { // obf
	status_header( 404 ); // obf
} elseif ( is_wp_error( $v_stawj ) ) { // obf
	$v_lkkhh = $v_stawj->get_error_code(); // obf

	if ( ! in_array( $v_lkkhh, $v_lpydj, true ) ) { // obf
		status_header( 400 ); // obf
	} // obf
} // obf

nocache_headers(); // obf

if ( is_object( $v_ddzgy ) ) { // obf
	$v_ddzgy->cache_enabled = false; // obf
} // obf

// Fix for page title. // obf
$v_uceup->is_404 = false; // obf

/** // obf
 * Fires before the Site Activation page is loaded. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
do_action( 'activate_header' ); // obf

/** // obf
 * Adds an action hook specific to this page. // obf
 * // obf
 * Fires on {@see 'wp_head'}. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function do_activate_header() { // obf
	/** // obf
	 * Fires within the `<head>` section of the Site Activation page. // obf
	 * // obf
	 * Fires on the {@see 'wp_head'} action. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	do_action( 'activate_wp_head' ); // obf
} // obf
add_action( 'wp_head', 'do_activate_header' ); // obf

/** // obf
 * Loads styles specific to this page. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function wpmu_activate_stylesheet() { // obf
	?> // obf
	<style type="text/css"> // obf
		.wp-activate-container { width: 90%; margin: 0 auto; } // obf
		.wp-activate-container form { margin-top: 2em; } // obf
		#submit, #key { width: 100%; font-size: 24px; box-sizing: border-box; } // obf
		#language { margin-top: 0.5em; } // obf
		.wp-activate-container .error { background: #f66; color: #333; } // obf
		span.h3 { padding: 0 8px; font-size: 1.3em; font-weight: 600; } // obf
	</style> // obf
	<?php // obf
} // obf
add_action( 'wp_head', 'wpmu_activate_stylesheet' ); // obf
add_action( 'wp_head', 'wp_strict_cross_origin_referrer' ); // obf
add_filter( 'wp_robots', 'wp_robots_sensitive_page' ); // obf

get_header( 'wp-activate' ); // obf

$v_hztov = get_site(); // obf
?> // obf

<div id="signup-content" class="widecolumn"> // obf
	<div class="wp-activate-container"> // obf
	<?php if ( ! $v_bgvyu ) { ?> // obf

		<h2><?php _e( 'Activation Key Required' ); ?></h2> // obf
		<form name="activateform" id="activateform" method="post" action="<?php echo esc_url( network_site_url( $v_hztov->path . 'wp-activate.php' ) ); ?>"> // obf
			<p> // obf
				<label for="key"><?php _e( 'Activation Key:' ); ?></label> // obf
				<br /><input type="text" name="key" id="key" value="" size="50" autofocus="autofocus" /> // obf
			</p> // obf
			<p class="submit"> // obf
				<input id="submit" type="submit" name="Submit" class="submit" value="<?php esc_attr_e( 'Activate' ); ?>" /> // obf
			</p> // obf
		</form> // obf

		<?php // obf
	} else { // obf
		if ( is_wp_error( $v_stawj ) && in_array( $v_stawj->get_error_code(), $v_lpydj, true ) ) { // obf
			$v_howza = $v_stawj->get_error_data(); // obf
			?> // obf
			<h2><?php _e( 'Your account is now active!' ); ?></h2> // obf
			<?php // obf
			echo '<p class="lead-in">'; // obf
			if ( '' === $v_howza->domain . $v_howza->path ) { // obf
				printf( // obf
					/* translators: 1: Login URL, 2: Username, 3: User email address, 4: Lost password URL. */ // obf
					__( 'Your account has been activated. You may now <a href="%1$v_zagdz">log in</a> to the site using your chosen username of &#8220;%2$v_zagdz&#8221;. Please check your email inbox at %3$v_zagdz for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$v_zagdz">reset your password</a>.' ), // obf
					esc_url( network_site_url( $v_hztov->path . 'wp-login.php', 'login' ) ), // obf
					esc_html( $v_howza->user_login ), // obf
					esc_html( $v_howza->user_email ), // obf
					esc_url( wp_lostpassword_url() ) // obf
				); // obf
			} else { // obf
				printf( // obf
					/* translators: 1: Site URL, 2: Username, 3: User email address, 4: Lost password URL. */ // obf
					__( 'Your site at %1$v_zagdz is active. You may now log in to your site using your chosen username of &#8220;%2$v_zagdz&#8221;. Please check your email inbox at %3$v_zagdz for your password and login instructions. If you do not receive an email, please check your junk or spam folder. If you still do not receive an email within an hour, you can <a href="%4$v_zagdz">reset your password</a>.' ), // obf
					sprintf( '<a href="http://%1$v_zagdz">%1$v_zagdz</a>', esc_url( $v_howza->domain . $v_hztov->path ) ), // obf
					esc_html( $v_howza->user_login ), // obf
					esc_html( $v_howza->user_email ), // obf
					esc_url( wp_lostpassword_url() ) // obf
				); // obf
			} // obf
			echo '</p>'; // obf
		} elseif ( null === $v_stawj || is_wp_error( $v_stawj ) ) { // obf
			?> // obf
			<h2><?php _e( 'An error occurred during the activation' ); ?></h2> // obf
			<?php if ( is_wp_error( $v_stawj ) ) : ?> // obf
				<p><?php echo esc_html( $v_stawj->get_error_message() ); ?></p> // obf
			<?php endif; ?> // obf
			<?php // obf
		} else { // obf
			$v_ovajf  = isset( $v_stawj['blog_id'] ) ? esc_url( get_home_url( (int) $v_stawj['blog_id'] ) ) : ''; // obf
			$v_qykgp = get_userdata( (int) $v_stawj['user_id'] ); // obf
			?> // obf
			<h2><?php _e( 'Your account is now active!' ); ?></h2> // obf

			<div id="signup-welcome"> // obf
			<p><span class="h3"><?php _e( 'Username:' ); ?></span> <?php echo esc_html( $v_qykgp->user_login ); ?></p> // obf
			<p><span class="h3"><?php _e( 'Password:' ); ?></span> <?php echo esc_html( $v_stawj['password'] ); ?></p> // obf
			</div> // obf

			<?php // obf
			if ( $v_ovajf && network_home_url( '', 'http' ) !== $v_ovajf ) : // obf
				switch_to_blog( (int) $v_stawj['blog_id'] ); // obf
				$v_sphej = wp_login_url(); // obf
				restore_current_blog(); // obf
				?> // obf
				<p class="view"> // obf
				<?php // obf
					/* translators: 1: Site URL, 2: Login URL. */ // obf
					printf( __( 'Your account is now activated. <a href="%1$v_zagdz">View your site</a> or <a href="%2$v_zagdz">Log in</a>' ), esc_url( $v_ovajf ), esc_url( $v_sphej ) ); // obf
				?> // obf
				</p> // obf
			<?php else : ?> // obf
				<p class="view"> // obf
				<?php // obf
					printf( // obf
						/* translators: 1: Login URL, 2: Network home URL. */ // obf
						__( 'Your account is now activated. <a href="%1$v_zagdz">Log in</a> or go back to the <a href="%2$v_zagdz">homepage</a>.' ), // obf
						esc_url( network_site_url( $v_hztov->path . 'wp-login.php', 'login' ) ), // obf
						esc_url( network_home_url( $v_hztov->path ) ) // obf
					); // obf
				?> // obf
				</p> // obf
				<?php // obf
				endif; // obf
		} // obf
	} // obf
	?> // obf
	</div> // obf
</div> // obf
<?php // obf
get_footer( 'wp-activate' ); // obf