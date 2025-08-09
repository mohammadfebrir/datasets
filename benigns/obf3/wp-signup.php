
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Signup Page // obf
 * // obf
 * Handles the user registration and site creation process for multisite installations. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** Sets up the WordPress Environment. */ // obf
require __DIR__ . '/wp-load.php'; // obf

add_filter( 'wp_robots', 'wp_robots_no_robots' ); // obf

require __DIR__ . '/wp-blog-header.php'; // obf

nocache_headers(); // obf

if ( is_array( get_site_option( 'illegal_names' ) ) && isset( $v_tafqc['new'] ) && in_array( $v_tafqc['new'], get_site_option( 'illegal_names' ), true ) ) { // obf
	wp_redirect( network_home_url() ); // obf
	die(); // obf
} // obf

/** // obf
 * Prints signup_header via wp_head. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function do_signup_header() { // obf
	/** // obf
	 * Fires within the head section of the site sign-up screen. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	do_action( 'signup_header' ); // obf
} // obf
add_action( 'wp_head', 'do_signup_header' ); // obf

if ( ! is_multisite() ) { // obf
	wp_redirect( wp_registration_url() ); // obf
	die(); // obf
} // obf

if ( ! is_main_site() ) { // obf
	wp_redirect( network_site_url( 'wp-signup.php' ) ); // obf
	die(); // obf
} // obf

// Fix for page title. // obf
$v_nplcb->is_404 = false; // obf

/** // obf
 * Fires before the Site Sign-up page is loaded. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
do_action( 'before_signup_header' ); // obf

/** // obf
 * Prints styles for front-end Multisite Sign-up pages. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function wpmu_signup_stylesheet() { // obf
	?> // obf
	<style type="text/css"> // obf
		.mu_register { width: 90%; margin: 0 auto; } // obf
		.mu_register form { margin-top: 2em; } // obf
		.mu_register fieldset, // obf
			.mu_register legend { margin: 0; padding: 0; border: none; } // obf
		.mu_register .error { padding: 10px; color: #333; background: #ffebe8; border: 1px solid #c00; } // obf
		.mu_register input[type="submit"], // obf
			.mu_register #blog_title, // obf
			.mu_register #user_email, // obf
			.mu_register #blogname, // obf
			.mu_register #user_name { width: 100%; font-size: 24px; margin: 5px 0; box-sizing: border-box; } // obf
		.mu_register #site-language { display: block; } // obf
		.mu_register .prefix_address, // obf
			.mu_register .suffix_address { font-size: 18px; display: inline-block; direction: ltr; } // obf
		.mu_register label, // obf
			.mu_register legend, // obf
			.mu_register .label-heading { font-weight: 600; font-size: 15px; display: block; margin: 10px 0; } // obf
		.mu_register legend + p, // obf
			.mu_register input + p { margin-top: 0; } // obf
		.mu_register label.checkbox { display: inline; } // obf
		.mu_register .mu_alert { font-weight: 600; padding: 10px; color: #333; background: #ffffe0; border: 1px solid #e6db55; } // obf
		.mu_register .mu_alert a { color: inherit; text-decoration: underline; } // obf
		.mu_register .signup-options .wp-signup-radio-button { display: block; } // obf
		.mu_register .privacy-intro .wp-signup-radio-button { margin-right: 0.5em; } // obf
		.rtl .mu_register .wp-signup-blogname { direction: ltr; text-align: right; } // obf
	</style> // obf
	<?php // obf
} // obf
add_action( 'wp_head', 'wpmu_signup_stylesheet' ); // obf

get_header( 'wp-signup' ); // obf

/** // obf
 * Fires before the site Sign-up form. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
do_action( 'before_signup_form' ); // obf
?> // obf
<div id="signup-content" class="widecolumn"> // obf
<div class="mu_register wp-signup-container" role="main"> // obf
<?php // obf
/** // obf
 * Generates and displays the Sign-up and Create Site forms. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string          $v_jxaiw   The new site name. // obf
 * @param string          $v_kwqev The new site title. // obf
 * @param WP_Error|string $v_wmybm     A WP_Error object containing existing errors. Defaults to empty string. // obf
 */ // obf
function show_blog_form( $v_jxaiw = '', $v_kwqev = '', $v_wmybm = '' ) { // obf
	if ( ! is_wp_error( $v_wmybm ) ) { // obf
		$v_wmybm = new WP_Error(); // obf
	} // obf

	$v_kjzfv = get_network(); // obf
	// Site name. // obf
	if ( ! is_subdomain_install() ) { // obf
		echo '<label for="blogname">' . __( 'Site Name (subdirectory only):' ) . '</label>'; // obf
	} else { // obf
		echo '<label for="blogname">' . __( 'Site Domain (subdomain only):' ) . '</label>'; // obf
	} // obf

	$v_uvosw      = $v_wmybm->get_error_message( 'blogname' ); // obf
	$v_kduek = ''; // obf
	if ( $v_uvosw ) { // obf
		$v_kduek = 'wp-signup-blogname-error '; // obf
		echo '<p class="error" id="wp-signup-blogname-error">' . $v_uvosw . '</p>'; // obf
	} // obf

	if ( ! is_subdomain_install() ) { // obf
		echo '<div class="wp-signup-blogname"><span class="prefix_address" id="prefix-address">' . $v_kjzfv->domain . $v_kjzfv->path . '</span><input name="blogname" type="text" id="blogname" value="' . esc_attr( $v_jxaiw ) . '" maxlength="60" autocomplete="off" required="required" aria-describedby="' . $v_kduek . 'prefix-address" /></div>'; // obf
	} else { // obf
		$v_uvdja = __fn_37772( '|^www\.|', '', $v_kjzfv->domain ); // obf
		echo '<div class="wp-signup-blogname"><input name="blogname" type="text" id="blogname" value="' . esc_attr( $v_jxaiw ) . '" maxlength="60" autocomplete="off" required="required" aria-describedby="' . $v_kduek . 'suffix-address" /><span class="suffix_address" id="suffix-address">.' . esc_html( $v_uvdja ) . '</span></div>'; // obf
	} // obf

	if ( ! is_user_logged_in() ) { // obf
		if ( ! is_subdomain_install() ) { // obf
			$v_nqksw = $v_kjzfv->domain . $v_kjzfv->path . __( 'sitename' ); // obf
		} else { // obf
			$v_nqksw = __( 'domain' ) . '.' . $v_uvdja . $v_kjzfv->path; // obf
		} // obf

		printf( // obf
			'<p>(<strong>%s</strong>) %s</p>', // obf
			/* translators: %s: Site address. */ // obf
			sprintf( __( 'Your address will be %s.' ), $v_nqksw ), // obf
			__( 'Must be at least 4 characters, letters and numbers only. It cannot be changed, so choose carefully!' ) // obf
		); // obf
	} // obf

	// Site Title. // obf
	?> // obf
	<label for="blog_title"><?php _e( 'Site Title:' ); ?></label> // obf
	<?php // obf
	$v_nnbbh      = $v_wmybm->get_error_message( 'blog_title' ); // obf
	$v_ietox = ''; // obf
	if ( $v_nnbbh ) { // obf
		$v_ietox = ' aria-describedby="wp-signup-blog-title-error"'; // obf
		echo '<p class="error" id="wp-signup-blog-title-error">' . $v_nnbbh . '</p>'; // obf
	} // obf
	echo '<input name="blog_title" type="text" id="blog_title" value="' . esc_attr( $v_kwqev ) . '" required="required" autocomplete="off"' . $v_ietox . ' />'; // obf
	?> // obf

	<?php // obf
	// Site Language. // obf
	$v_ernxb = signup_get_available_languages(); // obf

	if ( ! empty( $v_ernxb ) ) : // obf
		?> // obf
		<p> // obf
			<label for="site-language"><?php _e( 'Site Language:' ); ?></label> // obf
			<?php // obf
			// Network default. // obf
			$v_snkku = get_site_option( 'WPLANG' ); // obf

			if ( isset( $v_kevxk['WPLANG'] ) ) { // obf
				$v_snkku = $v_kevxk['WPLANG']; // obf
			} // obf

			// Use US English if the default isn't available. // obf
			if ( ! in_array( $v_snkku, $v_ernxb, true ) ) { // obf
				$v_snkku = ''; // obf
			} // obf

			wp_dropdown_languages( // obf
				array( // obf
					'name'                        => 'WPLANG', // obf
					'id'                          => 'site-language', // obf
					'selected'                    => $v_snkku, // obf
					'languages'                   => $v_ernxb, // obf
					'show_available_translations' => false, // obf
				) // obf
			); // obf
			?> // obf
		</p> // obf
		<?php // obf
		endif; // Languages. // obf

		$v_gshuv  = ''; // obf
		$v_yaeic = ''; // obf
	if ( isset( $v_kevxk['blog_public'] ) && '0' === $v_kevxk['blog_public'] ) { // obf
		$v_yaeic = 'checked="checked"'; // obf
	} else { // obf
		$v_gshuv = 'checked="checked"'; // obf
	} // obf
	?> // obf

	<div id="privacy"> // obf
		<fieldset class="privacy-intro"> // obf
			<legend> // obf
				<span class="label-heading"><?php _e( 'Privacy:' ); ?></span> // obf
				<?php _e( 'Allow search engines to index this site.' ); ?> // obf
			</legend> // obf
			<p class="wp-signup-radio-buttons"> // obf
				<span class="wp-signup-radio-button"> // obf
					<input type="radio" id="blog_public_on" name="blog_public" value="1" <?php echo $v_gshuv; ?> /> // obf
					<label class="checkbox" for="blog_public_on"><?php _e( 'Yes' ); ?></label> // obf
				</span> // obf
				<span class="wp-signup-radio-button"> // obf
					<input type="radio" id="blog_public_off" name="blog_public" value="0" <?php echo $v_yaeic; ?> /> // obf
					<label class="checkbox" for="blog_public_off"><?php _e( 'No' ); ?></label> // obf
				</span> // obf
			</p> // obf
		</fieldset> // obf
	</div> // obf

	<?php // obf
	/** // obf
	 * Fires after the site sign-up form. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param WP_Error $v_wmybm A WP_Error object possibly containing 'blogname' or 'blog_title' errors. // obf
	 */ // obf
	do_action( 'signup_blogform', $v_wmybm ); // obf
} // obf

/** // obf
 * Validates the new site sign-up. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @return array Contains the new site data and error messages. // obf
 *               See wpmu_validate_blog_signup() for details. // obf
 */ // obf
function validate_blog_form() { // obf
	$v_unvco = ''; // obf
	if ( is_user_logged_in() ) { // obf
		$v_unvco = wp_get_current_user(); // obf
	} // obf

	return wpmu_validate_blog_signup( $v_kevxk['blogname'], $v_kevxk['blog_title'], $v_unvco ); // obf
} // obf

/** // obf
 * Displays the fields for the new user account registration form. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string          $v_irjje  The entered username. // obf
 * @param string          $v_ilsdp The entered email address. // obf
 * @param WP_Error|string $v_wmybm     A WP_Error object containing existing errors. Defaults to empty string. // obf
 */ // obf
function show_user_form( $v_irjje = '', $v_ilsdp = '', $v_wmybm = '' ) { // obf
	if ( ! is_wp_error( $v_wmybm ) ) { // obf
		$v_wmybm = new WP_Error(); // obf
	} // obf

	// Username. // obf
	echo '<label for="user_name">' . __( 'Username:' ) . '</label>'; // obf
	$v_ozqdw      = $v_wmybm->get_error_message( 'user_name' ); // obf
	$v_mgtyz = ''; // obf
	if ( $v_ozqdw ) { // obf
		$v_mgtyz = 'wp-signup-username-error '; // obf
		echo '<p class="error" id="wp-signup-username-error">' . $v_ozqdw . '</p>'; // obf
	} // obf
	?> // obf
	<input name="user_name" type="text" id="user_name" value="<?php echo esc_attr( $v_irjje ); ?>" autocapitalize="none" autocorrect="off" maxlength="60" autocomplete="username" required="required" aria-describedby="<?php echo $v_mgtyz; ?>wp-signup-username-description" /> // obf
	<p id="wp-signup-username-description"><?php _e( '(Must be at least 4 characters, lowercase letters and numbers only.)' ); ?></p> // obf

	<?php // obf
	// Email address. // obf
	echo '<label for="user_email">' . __( 'Email&nbsp;Address:' ) . '</label>'; // obf
	$v_mscoy      = $v_wmybm->get_error_message( 'user_email' ); // obf
	$v_dlqqz = ''; // obf
	if ( $v_mscoy ) { // obf
		$v_dlqqz = 'wp-signup-email-error '; // obf
		echo '<p class="error" id="wp-signup-email-error">' . $v_mscoy . '</p>'; // obf
	} // obf
	?> // obf
	<input name="user_email" type="email" id="user_email" value="<?php echo esc_attr( $v_ilsdp ); ?>" maxlength="200" autocomplete="email" required="required" aria-describedby="<?php echo $v_dlqqz; ?>wp-signup-email-description" /> // obf
	<p id="wp-signup-email-description"><?php _e( 'Your registration email is sent to this address. (Double-check your email address before continuing.)' ); ?></p> // obf

	<?php // obf
	// Extra fields. // obf
	$v_ooneq = $v_wmybm->get_error_message( 'generic' ); // obf
	if ( $v_ooneq ) { // obf
		echo '<p class="error" id="wp-signup-generic-error">' . $v_ooneq . '</p>'; // obf
	} // obf
	/** // obf
	 * Fires at the end of the new user account registration form. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param WP_Error $v_wmybm A WP_Error object containing 'user_name' or 'user_email' errors. // obf
	 */ // obf
	do_action( 'signup_extra_fields', $v_wmybm ); // obf
} // obf

/** // obf
 * Validates user sign-up name and email. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @return array Contains username, email, and error messages. // obf
 *               See wpmu_validate_user_signup() for details. // obf
 */ // obf
function validate_user_form() { // obf
	return wpmu_validate_user_signup( $v_kevxk['user_name'], $v_kevxk['user_email'] ); // obf
} // obf

/** // obf
 * Shows a form for returning users to sign up for another site. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string          $v_jxaiw   The new site name // obf
 * @param string          $v_kwqev The new site title. // obf
 * @param WP_Error|string $v_wmybm     A WP_Error object containing existing errors. Defaults to empty string. // obf
 */ // obf
function signup_another_blog( $v_jxaiw = '', $v_kwqev = '', $v_wmybm = '' ) { // obf
	$v_vfpeg = wp_get_current_user(); // obf

	if ( ! is_wp_error( $v_wmybm ) ) { // obf
		$v_wmybm = new WP_Error(); // obf
	} // obf

	$v_mtyra = array( // obf
		'blogname'   => $v_jxaiw, // obf
		'blog_title' => $v_kwqev, // obf
		'errors'     => $v_wmybm, // obf
	); // obf

	/** // obf
	 * Filters the default site sign-up variables. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_mtyra { // obf
	 *     An array of default site sign-up variables. // obf
	 * // obf
	 *     @type string   $v_jxaiw   The site blogname. // obf
	 *     @type string   $v_kwqev The site title. // obf
	 *     @type WP_Error $v_wmybm     A WP_Error object possibly containing 'blogname' or 'blog_title' errors. // obf
	 * } // obf
	 */ // obf
	$v_jzqdh = apply_filters( 'signup_another_blog_init', $v_mtyra ); // obf

	$v_jxaiw   = $v_jzqdh['blogname']; // obf
	$v_kwqev = $v_jzqdh['blog_title']; // obf
	$v_wmybm     = $v_jzqdh['errors']; // obf

	/* translators: %s: Network title. */ // obf
	echo '<h2>' . sprintf( __( 'Get <em>another</em> %s site in seconds' ), get_network()->site_name ) . '</h2>'; // obf

	if ( $v_wmybm->has_errors() ) { // obf
		echo '<p>' . __( 'There was a problem, please correct the form below and try again.' ) . '</p>'; // obf
	} // obf
	?> // obf
	<p> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: Current user's display name. */ // obf
			__( 'Welcome back, %s. By filling out the form below, you can <strong>add another site to your account</strong>. There is no limit to the number of sites you can have, so create to your heart&#8217;s content, but write responsibly!' ), // obf
			$v_vfpeg->display_name // obf
		); // obf
		?> // obf
	</p> // obf

	<?php // obf
	$v_dpogd = get_blogs_of_user( $v_vfpeg->ID ); // obf
	if ( ! empty( $v_dpogd ) ) { // obf
		?> // obf

			<p><?php _e( 'Sites you are already a member of:' ); ?></p> // obf
			<ul> // obf
				<?php // obf
				foreach ( $v_dpogd as $v_mvsnf ) { // obf
					$v_pngay = get_home_url( $v_mvsnf->userblog_id ); // obf
					echo '<li><a href="' . esc_url( $v_pngay ) . '">' . $v_pngay . '</a></li>'; // obf
				} // obf
				?> // obf
			</ul> // obf
	<?php } ?> // obf

	<p><?php _e( 'If you are not going to use a great site domain, leave it for a new user. Now have at it!' ); ?></p> // obf
	<form id="setupform" method="post" action="wp-signup.php"> // obf
		<input type="hidden" name="stage" value="gimmeanotherblog" /> // obf
		<?php // obf
		/** // obf
		 * Fires when hidden sign-up form fields output when creating another site or user. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string $v_oxdbc A string describing the steps of the sign-up process. The value can be // obf
		 *                        'create-another-site', 'validate-user', or 'validate-site'. // obf
		 */ // obf
		do_action( 'signup_hidden_fields', 'create-another-site' ); // obf
		?> // obf
		<?php show_blog_form( $v_jxaiw, $v_kwqev, $v_wmybm ); ?> // obf
		<p class="submit"><input type="submit" name="submit" class="submit" value="<?php esc_attr_e( 'Create Site' ); ?>" /></p> // obf
	</form> // obf
	<?php // obf
} // obf

/** // obf
 * Validates a new site sign-up for an existing user. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global string   $v_jxaiw   The new site's subdomain or directory name. // obf
 * @global string   $v_kwqev The new site's title. // obf
 * @global WP_Error $v_wmybm     Existing errors in the global scope. // obf
 * @global string   $v_bspud     The new site's domain. // obf
 * @global string   $v_yskqh       The new site's path. // obf
 * // obf
 * @return null|bool True if site signup was validated, false on error. // obf
 *                   The function halts all execution if the user is not logged in. // obf
 */ // obf
function validate_another_blog_signup() { // obf
	global $v_jxaiw, $v_kwqev, $v_wmybm, $v_bspud, $v_yskqh; // obf
	$v_vfpeg = wp_get_current_user(); // obf
	if ( ! is_user_logged_in() ) { // obf
		die(); // obf
	} // obf

	$v_cwdlv = validate_blog_form(); // obf

	// Extracted values set/overwrite globals. // obf
	$v_bspud     = $v_cwdlv['domain']; // obf
	$v_yskqh       = $v_cwdlv['path']; // obf
	$v_jxaiw   = $v_cwdlv['blogname']; // obf
	$v_kwqev = $v_cwdlv['blog_title']; // obf
	$v_wmybm     = $v_cwdlv['errors']; // obf

	if ( $v_wmybm->has_errors() ) { // obf
		signup_another_blog( $v_jxaiw, $v_kwqev, $v_wmybm ); // obf
		return false; // obf
	} // obf

	$v_jsshe = (int) $v_kevxk['blog_public']; // obf

	$v_hxtpe = array( // obf
		'lang_id' => 1, // obf
		'public'  => $v_jsshe, // obf
	); // obf

	// Handle the language setting for the new site. // obf
	if ( ! empty( $v_kevxk['WPLANG'] ) ) { // obf

		$v_ernxb = signup_get_available_languages(); // obf

		if ( in_array( $v_kevxk['WPLANG'], $v_ernxb, true ) ) { // obf
			$v_uhcyn = wp_unslash( sanitize_text_field( $v_kevxk['WPLANG'] ) ); // obf

			if ( $v_uhcyn ) { // obf
				$v_hxtpe['WPLANG'] = $v_uhcyn; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the new site meta variables. // obf
	 * // obf
	 * Use the {@see 'add_signup_meta'} filter instead. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * @deprecated 3.0.0 Use the {@see 'add_signup_meta'} filter instead. // obf
	 * // obf
	 * @param array $v_hxtpe An array of default blog meta variables. // obf
	 */ // obf
	$v_lwoto = apply_filters_deprecated( 'signup_create_blog_meta', array( $v_hxtpe ), '3.0.0', 'add_signup_meta' ); // obf

	/** // obf
	 * Filters the new default site meta variables. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_qxlfk { // obf
	 *     An array of default site meta variables. // obf
	 * // obf
	 *     @type int $v_yauoj     The language ID. // obf
	 *     @type int $v_arxjh Whether search engines should be discouraged from indexing the site. 1 for true, 0 for false. // obf
	 * } // obf
	 */ // obf
	$v_qxlfk = apply_filters( 'add_signup_meta', $v_lwoto ); // obf

	$v_cayca = wpmu_create_blog( $v_bspud, $v_yskqh, $v_kwqev, $v_vfpeg->ID, $v_qxlfk, get_current_network_id() ); // obf

	if ( is_wp_error( $v_cayca ) ) { // obf
		return false; // obf
	} // obf

	confirm_another_blog_signup( $v_bspud, $v_yskqh, $v_kwqev, $v_vfpeg->user_login, $v_vfpeg->user_email, $v_qxlfk, $v_cayca ); // obf
	return true; // obf
} // obf

/** // obf
 * Shows a message confirming that the new site has been created. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * @since 4.4.0 Added the `$v_cayca` parameter. // obf
 * // obf
 * @param string $v_bspud     The domain URL. // obf
 * @param string $v_yskqh       The site root path. // obf
 * @param string $v_kwqev The site title. // obf
 * @param string $v_irjje  The username. // obf
 * @param string $v_ilsdp The user's email address. // obf
 * @param array  $v_qxlfk       Any additional meta from the {@see 'add_signup_meta'} filter in validate_blog_signup(). // obf
 * @param int    $v_cayca    The site ID. // obf
 */ // obf
function confirm_another_blog_signup( $v_bspud, $v_yskqh, $v_kwqev, $v_irjje, $v_ilsdp = '', $v_qxlfk = array(), $v_cayca = 0 ) { // obf

	if ( $v_cayca ) { // obf
		switch_to_blog( $v_cayca ); // obf
		$v_pngay  = home_url( '/' ); // obf
		$v_ewdal = wp_login_url(); // obf
		restore_current_blog(); // obf
	} else { // obf
		$v_pngay  = 'http://' . $v_bspud . $v_yskqh; // obf
		$v_ewdal = 'http://' . $v_bspud . $v_yskqh . 'wp-login.php'; // obf
	} // obf

	$v_nqksw = sprintf( // obf
		'<a href="%1$v_gyemt">%2$v_gyemt</a>', // obf
		esc_url( $v_pngay ), // obf
		$v_kwqev // obf
	); // obf

	?> // obf
	<h2> // obf
	<?php // obf
		/* translators: %s: Site title. */ // obf
		printf( __( 'The site %s is yours.' ), $v_nqksw ); // obf
	?> // obf
	</h2> // obf
	<p> // obf
		<?php // obf
		printf( // obf
			/* translators: 1: Link to new site, 2: Login URL, 3: Username. */ // obf
			__( '%1$v_gyemt is your new site. <a href="%2$v_gyemt">Log in</a> as &#8220;%3$v_gyemt&#8221; using your existing password.' ), // obf
			sprintf( // obf
				'<a href="%s">%s</a>', // obf
				esc_url( $v_pngay ), // obf
				untrailingslashit( $v_bspud . $v_yskqh ) // obf
			), // obf
			esc_url( $v_ewdal ), // obf
			$v_irjje // obf
		); // obf
		?> // obf
	</p> // obf
	<?php // obf
	/** // obf
	 * Fires when the site or user sign-up process is complete. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	do_action( 'signup_finished' ); // obf
} // obf

/** // obf
 * Shows a form for a visitor to sign up for a new user account. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global string $v_wwzil String that returns registration type. The value can be // obf
 *                               'all', 'none', 'blog', or 'user'. // obf
 * // obf
 * @param string          $v_irjje  The username. // obf
 * @param string          $v_ilsdp The user's email. // obf
 * @param WP_Error|string $v_wmybm     A WP_Error object containing existing errors. Defaults to empty string. // obf
 */ // obf
function signup_user( $v_irjje = '', $v_ilsdp = '', $v_wmybm = '' ) { // obf
	global $v_wwzil; // obf

	if ( ! is_wp_error( $v_wmybm ) ) { // obf
		$v_wmybm = new WP_Error(); // obf
	} // obf

	$v_qlmic = isset( $v_kevxk['signup_for'] ) ? esc_html( $v_kevxk['signup_for'] ) : 'blog'; // obf

	$v_ovzma = array( // obf
		'user_name'  => $v_irjje, // obf
		'user_email' => $v_ilsdp, // obf
		'errors'     => $v_wmybm, // obf
	); // obf

	/** // obf
	 * Filters the default user variables used on the user sign-up form. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_ovzma { // obf
	 *     An array of default user variables. // obf
	 * // obf
	 *     @type string   $v_irjje  The user username. // obf
	 *     @type string   $v_ilsdp The user email address. // obf
	 *     @type WP_Error $v_wmybm     A WP_Error object with possible errors relevant to the sign-up user. // obf
	 * } // obf
	 */ // obf
	$v_jzqdh = apply_filters( 'signup_user_init', $v_ovzma ); // obf
	$v_irjje        = $v_jzqdh['user_name']; // obf
	$v_ilsdp       = $v_jzqdh['user_email']; // obf
	$v_wmybm           = $v_jzqdh['errors']; // obf

	?> // obf

	<h2> // obf
	<?php // obf
		/* translators: %s: Name of the network. */ // obf
		printf( __( 'Get your own %s account in seconds' ), get_network()->site_name ); // obf
	?> // obf
	</h2> // obf
	<form id="setupform" method="post" action="wp-signup.php" novalidate="novalidate"> // obf
		<input type="hidden" name="stage" value="validate-user-signup" /> // obf
		<?php // obf
		/** This action is documented in wp-signup.php */ // obf
		do_action( 'signup_hidden_fields', 'validate-user' ); // obf
		?> // obf
		<?php show_user_form( $v_irjje, $v_ilsdp, $v_wmybm ); ?> // obf

		<?php if ( 'blog' === $v_wwzil ) : ?> // obf
			<input id="signupblog" type="hidden" name="signup_for" value="blog" /> // obf
		<?php elseif ( 'user' === $v_wwzil ) : ?> // obf
			<input id="signupblog" type="hidden" name="signup_for" value="user" /> // obf
		<?php else : ?> // obf
			<fieldset class="signup-options"> // obf
				<legend><?php _e( 'Create a site or only a username:' ); ?></legend> // obf
				<p class="wp-signup-radio-buttons"> // obf
					<span class="wp-signup-radio-button"> // obf
						<input id="signupblog" type="radio" name="signup_for" value="blog" <?php checked( $v_qlmic, 'blog' ); ?> /> // obf
						<label class="checkbox" for="signupblog"><?php _e( 'Gimme a site!' ); ?></label> // obf
					</span> // obf
					<span class="wp-signup-radio-button"> // obf
						<input id="signupuser" type="radio" name="signup_for" value="user" <?php checked( $v_qlmic, 'user' ); ?> /> // obf
						<label class="checkbox" for="signupuser"><?php _e( 'Just a username, please.' ); ?></label> // obf
					</span> // obf
				</p> // obf
			</fieldset> // obf
		<?php endif; ?> // obf

		<p class="submit"><input type="submit" name="submit" class="submit" value="<?php esc_attr_e( 'Next' ); ?>" /></p> // obf
	</form> // obf
	<?php // obf
} // obf

/** // obf
 * Validates the new user sign-up. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @return bool True if new user sign-up was validated, false on error. // obf
 */ // obf
function validate_user_signup() { // obf
	$v_cwdlv     = validate_user_form(); // obf
	$v_irjje  = $v_cwdlv['user_name']; // obf
	$v_ilsdp = $v_cwdlv['user_email']; // obf
	$v_wmybm     = $v_cwdlv['errors']; // obf

	if ( $v_wmybm->has_errors() ) { // obf
		signup_user( $v_irjje, $v_ilsdp, $v_wmybm ); // obf
		return false; // obf
	} // obf

	if ( 'blog' === $v_kevxk['signup_for'] ) { // obf
		signup_blog( $v_irjje, $v_ilsdp ); // obf
		return false; // obf
	} // obf

	/** This filter is documented in wp-signup.php */ // obf
	wpmu_signup_user( $v_irjje, $v_ilsdp, apply_filters( 'add_signup_meta', array() ) ); // obf

	confirm_user_signup( $v_irjje, $v_ilsdp ); // obf
	return true; // obf
} // obf

/** // obf
 * Shows a message confirming that the new user has been registered and is awaiting activation. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_irjje  The username. // obf
 * @param string $v_ilsdp The user's email address. // obf
 */ // obf
function confirm_user_signup( $v_irjje, $v_ilsdp ) { // obf
	?> // obf
	<h2> // obf
	<?php // obf
	/* translators: %s: Username. */ // obf
	printf( __( '%s is your new username' ), $v_irjje ) // obf
	?> // obf
	</h2> // obf
	<p><?php _e( 'But, before you can start using your new username, <strong>you must activate it</strong>.' ); ?></p> // obf
	<p> // obf
	<?php // obf
	/* translators: %s: The user email address. */ // obf
	printf( __( 'Check your inbox at %s and click on the given link.' ), '<strong>' . $v_ilsdp . '</strong>' ); // obf
	?> // obf
	</p> // obf
	<p><?php _e( 'If you do not activate your username within two days, you will have to sign up again.' ); ?></p> // obf
	<?php // obf
	/** This action is documented in wp-signup.php */ // obf
	do_action( 'signup_finished' ); // obf
} // obf

/** // obf
 * Shows a form for a user or visitor to sign up for a new site. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string          $v_irjje  The username. // obf
 * @param string          $v_ilsdp The user's email address. // obf
 * @param string          $v_jxaiw   The site name. // obf
 * @param string          $v_kwqev The site title. // obf
 * @param WP_Error|string $v_wmybm     A WP_Error object containing existing errors. Defaults to empty string. // obf
 */ // obf
function signup_blog( $v_irjje = '', $v_ilsdp = '', $v_jxaiw = '', $v_kwqev = '', $v_wmybm = '' ) { // obf
	if ( ! is_wp_error( $v_wmybm ) ) { // obf
		$v_wmybm = new WP_Error(); // obf
	} // obf

	$v_tmjfl = array( // obf
		'user_name'  => $v_irjje, // obf
		'user_email' => $v_ilsdp, // obf
		'blogname'   => $v_jxaiw, // obf
		'blog_title' => $v_kwqev, // obf
		'errors'     => $v_wmybm, // obf
	); // obf

	/** // obf
	 * Filters the default site creation variables for the site sign-up form. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_tmjfl { // obf
	 *     An array of default site creation variables. // obf
	 * // obf
	 *     @type string   $v_irjje  The user username. // obf
	 *     @type string   $v_ilsdp The user email address. // obf
	 *     @type string   $v_jxaiw   The blogname. // obf
	 *     @type string   $v_kwqev The title of the site. // obf
	 *     @type WP_Error $v_wmybm     A WP_Error object with possible errors relevant to new site creation variables. // obf
	 * } // obf
	 */ // obf
	$v_jzqdh = apply_filters( 'signup_blog_init', $v_tmjfl ); // obf

	$v_irjje  = $v_jzqdh['user_name']; // obf
	$v_ilsdp = $v_jzqdh['user_email']; // obf
	$v_jxaiw   = $v_jzqdh['blogname']; // obf
	$v_kwqev = $v_jzqdh['blog_title']; // obf
	$v_wmybm     = $v_jzqdh['errors']; // obf

	if ( empty( $v_jxaiw ) ) { // obf
		$v_jxaiw = $v_irjje; // obf
	} // obf
	?> // obf
	<form id="setupform" method="post" action="wp-signup.php"> // obf
		<input type="hidden" name="stage" value="validate-blog-signup" /> // obf
		<input type="hidden" name="user_name" value="<?php echo esc_attr( $v_irjje ); ?>" /> // obf
		<input type="hidden" name="user_email" value="<?php echo esc_attr( $v_ilsdp ); ?>" /> // obf
		<?php // obf
		/** This action is documented in wp-signup.php */ // obf
		do_action( 'signup_hidden_fields', 'validate-site' ); // obf
		?> // obf
		<?php show_blog_form( $v_jxaiw, $v_kwqev, $v_wmybm ); ?> // obf
		<p class="submit"><input type="submit" name="submit" class="submit" value="<?php esc_attr_e( 'Sign up' ); ?>" /></p> // obf
	</form> // obf
	<?php // obf
} // obf

/** // obf
 * Validates new site signup. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @return bool True if the site sign-up was validated, false on error. // obf
 */ // obf
function validate_blog_signup() { // obf
	// Re-validate user info. // obf
	$v_ucdtz = wpmu_validate_user_signup( $v_kevxk['user_name'], $v_kevxk['user_email'] ); // obf
	$v_irjje   = $v_ucdtz['user_name']; // obf
	$v_ilsdp  = $v_ucdtz['user_email']; // obf
	$v_capxz = $v_ucdtz['errors']; // obf

	if ( $v_capxz->has_errors() ) { // obf
		signup_user( $v_irjje, $v_ilsdp, $v_capxz ); // obf
		return false; // obf
	} // obf

	$v_cwdlv     = wpmu_validate_blog_signup( $v_kevxk['blogname'], $v_kevxk['blog_title'] ); // obf
	$v_bspud     = $v_cwdlv['domain']; // obf
	$v_yskqh       = $v_cwdlv['path']; // obf
	$v_jxaiw   = $v_cwdlv['blogname']; // obf
	$v_kwqev = $v_cwdlv['blog_title']; // obf
	$v_wmybm     = $v_cwdlv['errors']; // obf

	if ( $v_wmybm->has_errors() ) { // obf
		signup_blog( $v_irjje, $v_ilsdp, $v_jxaiw, $v_kwqev, $v_wmybm ); // obf
		return false; // obf
	} // obf

	$v_jsshe      = (int) $v_kevxk['blog_public']; // obf
	$v_kldiu = array( // obf
		'lang_id' => 1, // obf
		'public'  => $v_jsshe, // obf
	); // obf

	// Handle the language setting for the new site. // obf
	if ( ! empty( $v_kevxk['WPLANG'] ) ) { // obf

		$v_ernxb = signup_get_available_languages(); // obf

		if ( in_array( $v_kevxk['WPLANG'], $v_ernxb, true ) ) { // obf
			$v_uhcyn = wp_unslash( sanitize_text_field( $v_kevxk['WPLANG'] ) ); // obf

			if ( $v_uhcyn ) { // obf
				$v_kldiu['WPLANG'] = $v_uhcyn; // obf
			} // obf
		} // obf
	} // obf

	/** This filter is documented in wp-signup.php */ // obf
	$v_qxlfk = apply_filters( 'add_signup_meta', $v_kldiu ); // obf

	wpmu_signup_blog( $v_bspud, $v_yskqh, $v_kwqev, $v_irjje, $v_ilsdp, $v_qxlfk ); // obf
	confirm_blog_signup( $v_bspud, $v_yskqh, $v_kwqev, $v_irjje, $v_ilsdp, $v_qxlfk ); // obf
	return true; // obf
} // obf

/** // obf
 * Shows a message confirming that the new site has been registered and is awaiting activation. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_bspud     The domain or subdomain of the site. // obf
 * @param string $v_yskqh       The path of the site. // obf
 * @param string $v_kwqev The title of the new site. // obf
 * @param string $v_irjje  The user's username. // obf
 * @param string $v_ilsdp The user's email address. // obf
 * @param array  $v_qxlfk       Any additional meta from the {@see 'add_signup_meta'} filter in validate_blog_signup(). // obf
 */ // obf
function confirm_blog_signup( $v_bspud, $v_yskqh, $v_kwqev, $v_irjje = '', $v_ilsdp = '', $v_qxlfk = array() ) { // obf
	?> // obf
	<h2> // obf
	<?php // obf
	/* translators: %s: Site address. */ // obf
	printf( __( 'Congratulations! Your new site, %s, is almost ready.' ), "<a href='http://{$v_bspud}{$v_yskqh}'>{$v_kwqev}</a>" ) // obf
	?> // obf
	</h2> // obf

	<p><?php _e( 'But, before you can start using your site, <strong>you must activate it</strong>.' ); ?></p> // obf
	<p> // obf
	<?php // obf
	/* translators: %s: The user email address. */ // obf
	printf( __( 'Check your inbox at %s and click on the given link.' ), '<strong>' . $v_ilsdp . '</strong>' ); // obf
	?> // obf
	</p> // obf
	<p><?php _e( 'If you do not activate your site within two days, you will have to sign up again.' ); ?></p> // obf
	<h2><?php _e( 'Still waiting for your email?' ); ?></h2> // obf
	<p><?php _e( 'If you have not received your email yet, there are a number of things you can do:' ); ?></p> // obf
	<ul id="noemail-tips"> // obf
		<li><p><strong><?php _e( 'Wait a little longer. Sometimes delivery of email can be delayed by processes outside of our control.' ); ?></strong></p></li> // obf
		<li><p><?php _e( 'Check the junk or spam folder of your email client. Sometime emails wind up there by mistake.' ); ?></p></li> // obf
		<li> // obf
		<?php // obf
			/* translators: %s: Email address. */ // obf
			printf( __( 'Have you entered your email correctly? You have entered %s, if it&#8217;s incorrect, you will not receive your email.' ), $v_ilsdp ); // obf
		?> // obf
		</li> // obf
	</ul> // obf
	<?php // obf
	/** This action is documented in wp-signup.php */ // obf
	do_action( 'signup_finished' ); // obf
} // obf

/** // obf
 * Retrieves languages available during the site/user sign-up process. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @see get_available_languages() // obf
 * // obf
 * @return string[] Array of available language codes. Language codes are formed by // obf
 *                  stripping the .mo extension from the language file names. // obf
 */ // obf
function signup_get_available_languages() { // obf
	/** // obf
	 * Filters the list of available languages for front-end site sign-ups. // obf
	 * // obf
	 * Passing an empty array to this hook will disable output of the setting on the // obf
	 * sign-up form, and the default language will be used when creating the site. // obf
	 * // obf
	 * Languages not already installed will be stripped. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string[] $v_ernxb Array of available language codes. Language codes are formed by // obf
	 *                            stripping the .mo extension from the language file names. // obf
	 */ // obf
	$v_ernxb = (array) apply_filters( 'signup_get_available_languages', get_available_languages() ); // obf

	/* // obf
	 * Strip any non-installed languages and return. // obf
	 * // obf
	 * Re-call get_available_languages() here in case a language pack was installed // obf
	 * in a callback hooked to the 'signup_get_available_languages' filter before this point. // obf
	 */ // obf
	return array_intersect_assoc( $v_ernxb, get_available_languages() ); // obf
} // obf

// Main. // obf
$v_wwzil = get_site_option( 'registration', 'none' ); // obf

/** // obf
 * Filters the type of site sign-up. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_wwzil String that returns registration type. The value can be // obf
 *                              'all', 'none', 'blog', or 'user'. // obf
 */ // obf
$v_wwzil = apply_filters( 'wpmu_active_signup', $v_wwzil ); // obf

if ( current_user_can( 'manage_network' ) ) { // obf
	echo '<div class="mu_alert">'; // obf
	_e( 'Greetings Network Administrator!' ); // obf
	echo ' '; // obf

	switch ( $v_wwzil ) { // obf
		case 'none': // obf
			_e( 'The network currently disallows registrations.' ); // obf
			break; // obf
		case 'blog': // obf
			_e( 'The network currently allows site registrations.' ); // obf
			break; // obf
		case 'user': // obf
			_e( 'The network currently allows user registrations.' ); // obf
			break; // obf
		default: // obf
			_e( 'The network currently allows both site and user registrations.' ); // obf
			break; // obf
	} // obf

	echo ' '; // obf

	/* translators: %s: URL to Network Settings screen. */ // obf
	printf( __( 'To change or disable registration go to your <a href="%s">Options page</a>.' ), esc_url( network_admin_url( 'settings.php' ) ) ); // obf
	echo '</div>'; // obf
} // obf

$v_jpkmt = isset( $v_tafqc['new'] ) ? strtolower( __fn_37772( '/^-|-$|[^-a-zA-Z0-9]/', '', $v_tafqc['new'] ) ) : null; // obf

$v_vfpeg = wp_get_current_user(); // obf
if ( 'none' === $v_wwzil ) { // obf
	_e( 'Registration has been disabled.' ); // obf
} elseif ( 'blog' === $v_wwzil && ! is_user_logged_in() ) { // obf
	$v_ewdal = wp_login_url( network_site_url( 'wp-signup.php' ) ); // obf
	/* translators: %s: Login URL. */ // obf
	printf( __( 'You must first <a href="%s">log in</a>, and then you can create a new site.' ), $v_ewdal ); // obf
} else { // obf
	$v_qfoce = isset( $v_kevxk['stage'] ) ? $v_kevxk['stage'] : 'default'; // obf
	switch ( $v_qfoce ) { // obf
		case 'validate-user-signup': // obf
			if ( 'all' === $v_wwzil // obf
				|| ( 'blog' === $v_kevxk['signup_for'] && 'blog' === $v_wwzil ) // obf
				|| ( 'user' === $v_kevxk['signup_for'] && 'user' === $v_wwzil ) // obf
			) { // obf
				validate_user_signup(); // obf
			} else { // obf
				_e( 'User registration has been disabled.' ); // obf
			} // obf
			break; // obf
		case 'validate-blog-signup': // obf
			if ( 'all' === $v_wwzil || 'blog' === $v_wwzil ) { // obf
				validate_blog_signup(); // obf
			} else { // obf
				_e( 'Site registration has been disabled.' ); // obf
			} // obf
			break; // obf
		case 'gimmeanotherblog': // obf
			validate_another_blog_signup(); // obf
			break; // obf
		case 'default': // obf
		default: // obf
			$v_ilsdp = isset( $v_kevxk['user_email'] ) ? $v_kevxk['user_email'] : ''; // obf
			/** // obf
			 * Fires when the site sign-up form is sent. // obf
			 * // obf
			 * @since 3.0.0 // obf
			 */ // obf
			do_action( 'preprocess_signup_form' ); // obf
			if ( is_user_logged_in() && ( 'all' === $v_wwzil || 'blog' === $v_wwzil ) ) { // obf
				signup_another_blog( $v_jpkmt ); // obf
			} elseif ( ! is_user_logged_in() && ( 'all' === $v_wwzil || 'user' === $v_wwzil ) ) { // obf
				signup_user( $v_jpkmt, $v_ilsdp ); // obf
			} elseif ( ! is_user_logged_in() && ( 'blog' === $v_wwzil ) ) { // obf
				_e( 'Sorry, new registrations are not allowed at this time.' ); // obf
			} else { // obf
				_e( 'You are logged in already. No need to register again!' ); // obf
			} // obf

			if ( $v_jpkmt ) { // obf
				$v_cdckt = get_blogaddress_by_name( $v_jpkmt ); // obf

				if ( 'blog' === $v_wwzil || 'all' === $v_wwzil ) { // obf
					printf( // obf
						/* translators: %s: Site address. */ // obf
						'<p>' . __( 'The site you were looking for, %s, does not exist, but you can create it now!' ) . '</p>', // obf
						'<strong>' . $v_cdckt . '</strong>' // obf
					); // obf
				} else { // obf
					printf( // obf
						/* translators: %s: Site address. */ // obf
						'<p>' . __( 'The site you were looking for, %s, does not exist.' ) . '</p>', // obf
						'<strong>' . $v_cdckt . '</strong>' // obf
					); // obf
				} // obf
			} // obf
			break; // obf
	} // obf
} // obf
?> // obf
</div> // obf
</div> // obf
<?php // obf
/** // obf
 * Fires after the sign-up forms, before wp_footer. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
do_action( 'after_signup_form' ); // obf
?> // obf

<?php // obf
get_footer( 'wp-signup' ); // obf