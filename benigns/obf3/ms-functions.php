
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Multisite WordPress API // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

/** // obf
 * Gets the network's site and user counts. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @return int[] { // obf
 *     Site and user count for the network. // obf
 * // obf
 *     @type int $v_curuz Number of sites on the network. // obf
 *     @type int $v_hgasj Number of users on the network. // obf
 * } // obf
 */ // obf
function get_sitestats() { // obf
	$v_ipihd = array( // obf
		'blogs' => get_blog_count(), // obf
		'users' => get_user_count(), // obf
	); // obf

	return $v_ipihd; // obf
} // obf

/** // obf
 * Gets one of a user's active blogs. // obf
 * // obf
 * Returns the user's primary blog, if they have one and // obf
 * it is active. If it's inactive, function returns another // obf
 * active blog of the user. If none are found, the user // obf
 * is added as a Subscriber to the Dashboard Blog and that blog // obf
 * is returned. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int $v_eekvb The unique ID of the user // obf
 * @return WP_Site|void The blog object // obf
 */ // obf
function get_active_blog_for_user( $v_eekvb ) { // obf
	$v_curuz = get_blogs_of_user( $v_eekvb ); // obf
	if ( empty( $v_curuz ) ) { // obf
		return; // obf
	} // obf

	if ( ! is_multisite() ) { // obf
		return $v_curuz[ get_current_blog_id() ]; // obf
	} // obf

	$v_slgod = get_user_meta( $v_eekvb, 'primary_blog', true ); // obf
	$v_rbcqx   = current( $v_curuz ); // obf
	if ( false !== $v_slgod ) { // obf
		if ( ! isset( $v_curuz[ $v_slgod ] ) ) { // obf
			update_user_meta( $v_eekvb, 'primary_blog', $v_rbcqx->userblog_id ); // obf
			$v_bbtmj = get_site( $v_rbcqx->userblog_id ); // obf
		} else { // obf
			$v_bbtmj = get_site( $v_slgod ); // obf
		} // obf
	} else { // obf
		// TODO: Review this call to add_user_to_blog too - to get here the user must have a role on this blog? // obf
		$v_ftdfu = add_user_to_blog( $v_rbcqx->userblog_id, $v_eekvb, 'subscriber' ); // obf

		if ( ! is_wp_error( $v_ftdfu ) ) { // obf
			update_user_meta( $v_eekvb, 'primary_blog', $v_rbcqx->userblog_id ); // obf
			$v_bbtmj = $v_rbcqx; // obf
		} // obf
	} // obf

	if ( ( ! is_object( $v_bbtmj ) ) // obf
		|| ( '1' === $v_bbtmj->archived || '1' === $v_bbtmj->spam || '1' === $v_bbtmj->deleted ) // obf
	) { // obf
		$v_curuz = get_blogs_of_user( $v_eekvb, true ); // If a user's primary blog is shut down, check their other blogs. // obf
		$v_otunk   = false; // obf

		if ( is_array( $v_curuz ) && count( $v_curuz ) > 0 ) { // obf
			$v_vyghq = get_current_network_id(); // obf

			foreach ( (array) $v_curuz as $v_bchhz => $v_nbjde ) { // obf
				if ( $v_nbjde->site_id !== $v_vyghq ) { // obf
					continue; // obf
				} // obf

				$v_hajbi = get_site( $v_bchhz ); // obf
				if ( is_object( $v_hajbi ) // obf
					&& '0' === $v_hajbi->archived && '0' === $v_hajbi->spam && '0' === $v_hajbi->deleted // obf
				) { // obf
					$v_otunk = $v_hajbi; // obf
					if ( (int) get_user_meta( $v_eekvb, 'primary_blog', true ) !== $v_bchhz ) { // obf
						update_user_meta( $v_eekvb, 'primary_blog', $v_bchhz ); // obf
					} // obf
					if ( ! get_user_meta( $v_eekvb, 'source_domain', true ) ) { // obf
						update_user_meta( $v_eekvb, 'source_domain', $v_hajbi->domain ); // obf
					} // obf
					break; // obf
				} // obf
			} // obf
		} else { // obf
			return; // obf
		} // obf

		return $v_otunk; // obf
	} else { // obf
		return $v_bbtmj; // obf
	} // obf
} // obf

/** // obf
 * Gets the number of active sites on the installation. // obf
 * // obf
 * The count is cached and updated twice daily. This is not a live count. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * @since 3.7.0 The `$v_qkuwf` parameter has been deprecated. // obf
 * @since 4.8.0 The `$v_qkuwf` parameter is now being used. // obf
 * // obf
 * @param int|null $v_qkuwf ID of the network. Default is the current network. // obf
 * @return int Number of active sites on the network. // obf
 */ // obf
function get_blog_count( $v_qkuwf = null ) { // obf
	return get_network_option( $v_qkuwf, 'blog_count' ); // obf
} // obf

/** // obf
 * Gets a blog post from any site on the network. // obf
 * // obf
 * This function is similar to get_post(), except that it can retrieve a post // obf
 * from any site on the network, not just the current site. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int $v_bchhz ID of the blog. // obf
 * @param int $v_lkhdf ID of the post being looked for. // obf
 * @return WP_Post|null WP_Post object on success, null on failure // obf
 */ // obf
function get_blog_post( $v_bchhz, $v_lkhdf ) { // obf
	switch_to_blog( $v_bchhz ); // obf
	$v_jolir = get_post( $v_lkhdf ); // obf
	restore_current_blog(); // obf

	return $v_jolir; // obf
} // obf

/** // obf
 * Adds a user to a blog, along with specifying the user's role. // obf
 * // obf
 * Use the {@see 'add_user_to_blog'} action to fire an event when users are added to a blog. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int    $v_bchhz ID of the blog the user is being added to. // obf
 * @param int    $v_eekvb ID of the user being added. // obf
 * @param string $v_eujwe    User role. // obf
 * @return true|WP_Error True on success or a WP_Error object if the user doesn't exist // obf
 *                       or could not be added. // obf
 */ // obf
function add_user_to_blog( $v_bchhz, $v_eekvb, $v_eujwe ) { // obf
	switch_to_blog( $v_bchhz ); // obf

	$v_hwczn = get_userdata( $v_eekvb ); // obf

	if ( ! $v_hwczn ) { // obf
		restore_current_blog(); // obf
		return new WP_Error( 'user_does_not_exist', __( 'The requested user does not exist.' ) ); // obf
	} // obf

	/** // obf
	 * Filters whether a user should be added to a site. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param true|WP_Error $v_kcxgi  True if the user should be added to the site, error // obf
	 *                               object otherwise. // obf
	 * @param int           $v_eekvb User ID. // obf
	 * @param string        $v_eujwe    User role. // obf
	 * @param int           $v_bchhz Site ID. // obf
	 */ // obf
	$v_gszwl = apply_filters( 'can_add_user_to_blog', true, $v_eekvb, $v_eujwe, $v_bchhz ); // obf

	if ( true !== $v_gszwl ) { // obf
		restore_current_blog(); // obf

		if ( is_wp_error( $v_gszwl ) ) { // obf
			return $v_gszwl; // obf
		} // obf

		return new WP_Error( 'user_cannot_be_added', __( 'User cannot be added to this site.' ) ); // obf
	} // obf

	if ( ! get_user_meta( $v_eekvb, 'primary_blog', true ) ) { // obf
		update_user_meta( $v_eekvb, 'primary_blog', $v_bchhz ); // obf
		$v_vhgqm = get_site( $v_bchhz ); // obf
		update_user_meta( $v_eekvb, 'source_domain', $v_vhgqm->domain ); // obf
	} // obf

	$v_hwczn->set_role( $v_eujwe ); // obf

	/** // obf
	 * Fires immediately after a user is added to a site. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param int    $v_eekvb User ID. // obf
	 * @param string $v_eujwe    User role. // obf
	 * @param int    $v_bchhz Blog ID. // obf
	 */ // obf
	do_action( 'add_user_to_blog', $v_eekvb, $v_eujwe, $v_bchhz ); // obf

	clean_user_cache( $v_eekvb ); // obf
	wp_cache_delete( $v_bchhz . '_user_count', 'blog-details' ); // obf

	restore_current_blog(); // obf

	return true; // obf
} // obf

/** // obf
 * Removes a user from a blog. // obf
 * // obf
 * Use the {@see 'remove_user_from_blog'} action to fire an event when // obf
 * users are removed from a blog. // obf
 * // obf
 * Accepts an optional `$v_psrre` parameter, if you want to // obf
 * reassign the user's blog posts to another user upon removal. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param int $v_eekvb  ID of the user being removed. // obf
 * @param int $v_bchhz  Optional. ID of the blog the user is being removed from. Default 0. // obf
 * @param int $v_psrre Optional. ID of the user to whom to reassign posts. Default 0. // obf
 * @return true|WP_Error True on success or a WP_Error object if the user doesn't exist. // obf
 */ // obf
function remove_user_from_blog( $v_eekvb, $v_bchhz = 0, $v_psrre = 0 ) { // obf
	global $v_hytfj; // obf

	$v_eekvb = (int) $v_eekvb; // obf
	$v_bchhz = (int) $v_bchhz; // obf

	switch_to_blog( $v_bchhz ); // obf

	/** // obf
	 * Fires before a user is removed from a site. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * @since 5.4.0 Added the `$v_psrre` parameter. // obf
	 * // obf
	 * @param int $v_eekvb  ID of the user being removed. // obf
	 * @param int $v_bchhz  ID of the blog the user is being removed from. // obf
	 * @param int $v_psrre ID of the user to whom to reassign posts. // obf
	 */ // obf
	do_action( 'remove_user_from_blog', $v_eekvb, $v_bchhz, $v_psrre ); // obf

	/* // obf
	 * If being removed from the primary blog, set a new primary // obf
	 * if the user is assigned to multiple blogs. // obf
	 */ // obf
	$v_slgod = (int) get_user_meta( $v_eekvb, 'primary_blog', true ); // obf
	if ( $v_slgod === $v_bchhz ) { // obf
		$v_dnany     = ''; // obf
		$v_cqozd = ''; // obf
		$v_curuz      = get_blogs_of_user( $v_eekvb ); // obf
		foreach ( (array) $v_curuz as $v_nbjde ) { // obf
			if ( $v_nbjde->userblog_id === $v_bchhz ) { // obf
				continue; // obf
			} // obf
			$v_dnany     = $v_nbjde->userblog_id; // obf
			$v_cqozd = $v_nbjde->domain; // obf
			break; // obf
		} // obf

		update_user_meta( $v_eekvb, 'primary_blog', $v_dnany ); // obf
		update_user_meta( $v_eekvb, 'source_domain', $v_cqozd ); // obf
	} // obf

	$v_hwczn = get_userdata( $v_eekvb ); // obf
	if ( ! $v_hwczn ) { // obf
		restore_current_blog(); // obf
		return new WP_Error( 'user_does_not_exist', __( 'That user does not exist.' ) ); // obf
	} // obf

	$v_hwczn->remove_all_caps(); // obf

	$v_curuz = get_blogs_of_user( $v_eekvb ); // obf
	if ( count( $v_curuz ) === 0 ) { // obf
		update_user_meta( $v_eekvb, 'primary_blog', '' ); // obf
		update_user_meta( $v_eekvb, 'source_domain', '' ); // obf
	} // obf

	if ( $v_psrre ) { // obf
		$v_psrre = (int) $v_psrre; // obf
		$v_fqjfc = $v_hytfj->get_col( $v_hytfj->prepare( "SELECT ID FROM $v_hytfj->posts WHERE post_author = %d", $v_eekvb ) ); // obf
		$v_nffcc = $v_hytfj->get_col( $v_hytfj->prepare( "SELECT link_id FROM $v_hytfj->links WHERE link_owner = %d", $v_eekvb ) ); // obf

		if ( ! empty( $v_fqjfc ) ) { // obf
			$v_hytfj->query( $v_hytfj->prepare( "UPDATE $v_hytfj->posts SET post_author = %d WHERE post_author = %d", $v_psrre, $v_eekvb ) ); // obf
			array_walk( $v_fqjfc, 'clean_post_cache' ); // obf
		} // obf

		if ( ! empty( $v_nffcc ) ) { // obf
			$v_hytfj->query( $v_hytfj->prepare( "UPDATE $v_hytfj->links SET link_owner = %d WHERE link_owner = %d", $v_psrre, $v_eekvb ) ); // obf
			array_walk( $v_nffcc, 'clean_bookmark_cache' ); // obf
		} // obf
	} // obf

	clean_user_cache( $v_eekvb ); // obf
	restore_current_blog(); // obf

	return true; // obf
} // obf

/** // obf
 * Gets the permalink for a post on another blog. // obf
 * // obf
 * @since MU (3.0.0) 1.0 // obf
 * // obf
 * @param int $v_bchhz ID of the source blog. // obf
 * @param int $v_lkhdf ID of the desired post. // obf
 * @return string The post's permalink. // obf
 */ // obf
function get_blog_permalink( $v_bchhz, $v_lkhdf ) { // obf
	switch_to_blog( $v_bchhz ); // obf
	$v_ttbxj = get_permalink( $v_lkhdf ); // obf
	restore_current_blog(); // obf

	return $v_ttbxj; // obf
} // obf

/** // obf
 * Gets a blog's numeric ID from its URL. // obf
 * // obf
 * On a subdirectory installation like example.com/blog1/, // obf
 * $v_fdgws will be the root 'example.com' and $v_skpzi the // obf
 * subdirectory '/blog1/'. With subdomains like blog1.example.com, // obf
 * $v_fdgws is 'blog1.example.com' and $v_skpzi is '/'. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param string $v_fdgws Website domain. // obf
 * @param string $v_skpzi   Optional. Not required for subdomain installations. Default '/'. // obf
 * @return int 0 if no blog found, otherwise the ID of the matching blog. // obf
 */ // obf
function get_blog_id_from_url( $v_fdgws, $v_skpzi = '/' ) { // obf
	$v_fdgws = strtolower( $v_fdgws ); // obf
	$v_skpzi   = strtolower( $v_skpzi ); // obf
	$v_jszoh     = wp_cache_get( md5( $v_fdgws . $v_skpzi ), 'blog-id-cache' ); // obf

	if ( -1 === $v_jszoh ) { // Blog does not exist. // obf
		return 0; // obf
	} elseif ( $v_jszoh ) { // obf
		return (int) $v_jszoh; // obf
	} // obf

	$v_peomd   = array( // obf
		'domain'                 => $v_fdgws, // obf
		'path'                   => $v_skpzi, // obf
		'fields'                 => 'ids', // obf
		'number'                 => 1, // obf
		'update_site_meta_cache' => false, // obf
	); // obf
	$v_ftdfu = get_sites( $v_peomd ); // obf
	$v_jszoh     = array_shift( $v_ftdfu ); // obf

	if ( ! $v_jszoh ) { // obf
		wp_cache_set( md5( $v_fdgws . $v_skpzi ), -1, 'blog-id-cache' ); // obf
		return 0; // obf
	} // obf

	wp_cache_set( md5( $v_fdgws . $v_skpzi ), $v_jszoh, 'blog-id-cache' ); // obf

	return $v_jszoh; // obf
} // obf

// // obf
// Admin functions. // obf
// // obf

/** // obf
 * Checks an email address against a list of banned domains. // obf
 * // obf
 * This function checks against the Banned Email Domains list // obf
 * at wp-admin/network/settings.php. The check is only run on // obf
 * self-registrations; user creation at wp-admin/network/users.php // obf
 * bypasses this check. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_cforn The email provided by the user at registration. // obf
 * @return bool True when the email address is banned, false otherwise. // obf
 */ // obf
function is_email_address_unsafe( $v_cforn ) { // obf
	$v_azxvr = get_site_option( 'banned_email_domains' ); // obf
	if ( $v_azxvr && ! is_array( $v_azxvr ) ) { // obf
		$v_azxvr = explode( "\n", $v_azxvr ); // obf
	} // obf

	$v_blnsn = false; // obf

	if ( $v_azxvr && is_array( $v_azxvr ) && false !== strpos( $v_cforn, '@', 1 ) ) { // obf
		$v_azxvr     = array_map( 'strtolower', $v_azxvr ); // obf
		$v_vdtuc = strtolower( $v_cforn ); // obf

		list( $v_sikec, $v_blxsi ) = explode( '@', $v_vdtuc ); // obf

		foreach ( $v_azxvr as $v_fgbxr ) { // obf
			if ( ! $v_fgbxr ) { // obf
				continue; // obf
			} // obf

			if ( $v_blxsi === $v_fgbxr ) { // obf
				$v_blnsn = true; // obf
				break; // obf
			} // obf

			if ( str_ends_with( $v_vdtuc, ".$v_fgbxr" ) ) { // obf
				$v_blnsn = true; // obf
				break; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Filters whether an email address is unsafe. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param bool   $v_blnsn Whether the email address is "unsafe". Default false. // obf
	 * @param string $v_cforn              User email address. // obf
	 */ // obf
	return apply_filters( 'is_email_address_unsafe', $v_blnsn, $v_cforn ); // obf
} // obf

/** // obf
 * Sanitizes and validates data required for a user sign-up. // obf
 * // obf
 * Verifies the validity and uniqueness of user names and user email addresses, // obf
 * and checks email addresses against allowed and disallowed domains provided by // obf
 * administrators. // obf
 * // obf
 * The {@see 'wpmu_validate_user_signup'} hook provides an easy way to modify the sign-up // obf
 * process. The value $v_ftdfu, which is passed to the hook, contains both the user-provided // obf
 * info and the error messages created by the function. {@see 'wpmu_validate_user_signup'} // obf
 * allows you to process the data in any way you'd like, and unset the relevant errors if // obf
 * necessary. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param string $v_huoiw  The login name provided by the user. // obf
 * @param string $v_cforn The email provided by the user. // obf
 * @return array { // obf
 *     The array of user name, email, and the error messages. // obf
 * // obf
 *     @type string   $v_huoiw     Sanitized and unique username. // obf
 *     @type string   $v_ieeby Original username. // obf
 *     @type string   $v_cforn    User email address. // obf
 *     @type WP_Error $v_jljee        WP_Error object containing any errors found. // obf
 * } // obf
 */ // obf
function wpmu_validate_user_signup( $v_huoiw, $v_cforn ) { // obf
	global $v_hytfj; // obf

	$v_jljee = new WP_Error(); // obf

	$v_ieeby = $v_huoiw; // obf
	$v_huoiw     = __fn_37772( '/\s+/', '', sanitize_user( $v_huoiw, true ) ); // obf

	if ( $v_huoiw !== $v_ieeby || preg_match( '/[^a-z0-9]/', $v_huoiw ) ) { // obf
		$v_jljee->add( 'user_name', __( 'Usernames can only contain lowercase letters (a-z) and numbers.' ) ); // obf
		$v_huoiw = $v_ieeby; // obf
	} // obf

	$v_cforn = sanitize_email( $v_cforn ); // obf

	if ( empty( $v_huoiw ) ) { // obf
		$v_jljee->add( 'user_name', __( 'Please enter a username.' ) ); // obf
	} // obf

	$v_clzdb = get_site_option( 'illegal_names' ); // obf

	if ( ! is_array( $v_clzdb ) ) { // obf
		$v_clzdb = array( 'www', 'web', 'root', 'admin', 'main', 'invite', 'administrator' ); // obf
		add_site_option( 'illegal_names', $v_clzdb ); // obf
	} // obf

	if ( in_array( $v_huoiw, $v_clzdb, true ) ) { // obf
		$v_jljee->add( 'user_name', __( 'Sorry, that username is not allowed.' ) ); // obf
	} // obf

	/** This filter is documented in wp-includes/user.php */ // obf
	$v_uundw = (array) apply_filters( 'illegal_user_logins', array() ); // obf

	if ( in_array( strtolower( $v_huoiw ), array_map( 'strtolower', $v_uundw ), true ) ) { // obf
		$v_jljee->add( 'user_name', __( 'Sorry, that username is not allowed.' ) ); // obf
	} // obf

	if ( ! is_email( $v_cforn ) ) { // obf
		$v_jljee->add( 'user_email', __( 'Please enter a valid email address.' ) ); // obf
	} elseif ( is_email_address_unsafe( $v_cforn ) ) { // obf
		$v_jljee->add( 'user_email', __( 'You cannot use that email address to signup. There are problems with them blocking some emails from WordPress. Please use another email provider.' ) ); // obf
	} // obf

	if ( strlen( $v_huoiw ) < 4 ) { // obf
		$v_jljee->add( 'user_name', __( 'Username must be at least 4 characters.' ) ); // obf
	} // obf

	if ( strlen( $v_huoiw ) > 60 ) { // obf
		$v_jljee->add( 'user_name', __( 'Username may not be longer than 60 characters.' ) ); // obf
	} // obf

	// All numeric? // obf
	if ( preg_match( '/^[0-9]*$/', $v_huoiw ) ) { // obf
		$v_jljee->add( 'user_name', __( 'Sorry, usernames must have letters too!' ) ); // obf
	} // obf

	$v_ukxea = get_site_option( 'limited_email_domains' ); // obf

	if ( is_array( $v_ukxea ) && ! empty( $v_ukxea ) ) { // obf
		$v_ukxea = array_map( 'strtolower', $v_ukxea ); // obf
		$v_blxsi          = strtolower( substr( $v_cforn, 1 + strpos( $v_cforn, '@' ) ) ); // obf

		if ( ! in_array( $v_blxsi, $v_ukxea, true ) ) { // obf
			$v_jljee->add( 'user_email', __( 'Sorry, that email address is not allowed!' ) ); // obf
		} // obf
	} // obf

	// Check if the username has been used already. // obf
	if ( username_exists( $v_huoiw ) ) { // obf
		$v_jljee->add( 'user_name', __( 'Sorry, that username already exists!' ) ); // obf
	} // obf

	// Check if the email address has been used already. // obf
	if ( email_exists( $v_cforn ) ) { // obf
		$v_jljee->add( // obf
			'user_email', // obf
			sprintf( // obf
				/* translators: %s: Link to the login page. */ // obf
				__( '<strong>Error:</strong> This email address is already registered. <a href="%s">Log in</a> with this address or choose another one.' ), // obf
				wp_login_url() // obf
			) // obf
		); // obf
	} // obf

	// Has someone already signed up for this username? // obf
	$v_aggsg = $v_hytfj->get_row( $v_hytfj->prepare( "SELECT * FROM $v_hytfj->signups WHERE user_login = %s", $v_huoiw ) ); // obf
	if ( $v_aggsg instanceof stdClass ) { // obf
		$v_ryxls = mysql2date( 'U', $v_aggsg->registered ); // obf
		$v_vgleb           = time(); // obf
		$v_ewnnj          = $v_vgleb - $v_ryxls; // obf
		// If registered more than two days ago, cancel registration and let this signup go through. // obf
		if ( $v_ewnnj > 2 * DAY_IN_SECONDS ) { // obf
			$v_hytfj->delete( $v_hytfj->signups, array( 'user_login' => $v_huoiw ) ); // obf
		} else { // obf
			$v_jljee->add( 'user_name', __( 'That username is currently reserved but may be available in a couple of days.' ) ); // obf
		} // obf
	} // obf

	$v_aggsg = $v_hytfj->get_row( $v_hytfj->prepare( "SELECT * FROM $v_hytfj->signups WHERE user_email = %s", $v_cforn ) ); // obf
	if ( $v_aggsg instanceof stdClass ) { // obf
		$v_ewnnj = time() - mysql2date( 'U', $v_aggsg->registered ); // obf
		// If registered more than two days ago, cancel registration and let this signup go through. // obf
		if ( $v_ewnnj > 2 * DAY_IN_SECONDS ) { // obf
			$v_hytfj->delete( $v_hytfj->signups, array( 'user_email' => $v_cforn ) ); // obf
		} else { // obf
			$v_jljee->add( 'user_email', __( 'That email address has already been used. Please check your inbox for an activation email. It will become available in a couple of days if you do nothing.' ) ); // obf
		} // obf
	} // obf

	$v_ftdfu = array( // obf
		'user_name'     => $v_huoiw, // obf
		'orig_username' => $v_ieeby, // obf
		'user_email'    => $v_cforn, // obf
		'errors'        => $v_jljee, // obf
	); // obf

	/** // obf
	 * Filters the validated user registration details. // obf
	 * // obf
	 * This does not allow you to override the username or email of the user during // obf
	 * registration. The values are solely used for validation and error handling. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param array $v_ftdfu { // obf
	 *     The array of user name, email, and the error messages. // obf
	 * // obf
	 *     @type string   $v_huoiw     Sanitized and unique username. // obf
	 *     @type string   $v_ieeby Original username. // obf
	 *     @type string   $v_cforn    User email address. // obf
	 *     @type WP_Error $v_jljee        WP_Error object containing any errors found. // obf
	 * } // obf
	 */ // obf
	return apply_filters( 'wpmu_validate_user_signup', $v_ftdfu ); // obf
} // obf

/** // obf
 * Processes new site registrations. // obf
 * // obf
 * Checks the data provided by the user during blog signup. Verifies // obf
 * the validity and uniqueness of blog paths and domains. // obf
 * // obf
 * This function prevents the current user from registering a new site // obf
 * with a blogname equivalent to another user's login name. Passing the // obf
 * $v_hwczn parameter to the function, where $v_hwczn is the other user, is // obf
 * effectively an override of this limitation. // obf
 * // obf
 * Filter {@see 'wpmu_validate_blog_signup'} if you want to modify // obf
 * the way that WordPress validates new site signups. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb   $v_hytfj   WordPress database abstraction object. // obf
 * @global string $v_fdgws // obf
 * // obf
 * @param string         $v_jxwzo   The site name provided by the user. Must be unique. // obf
 * @param string         $v_alwwc The site title provided by the user. // obf
 * @param WP_User|string $v_hwczn       Optional. The user object to check against the new site name. // obf
 *                                   Default empty string. // obf
 * @return array { // obf
 *     Array of domain, path, site name, site title, user and error messages. // obf
 * // obf
 *     @type string         $v_fdgws     Domain for the site. // obf
 *     @type string         $v_skpzi       Path for the site. Used in subdirectory installations. // obf
 *     @type string         $v_jxwzo   The unique site name (slug). // obf
 *     @type string         $v_alwwc Blog title. // obf
 *     @type string|WP_User $v_hwczn       By default, an empty string. A user object if provided. // obf
 *     @type WP_Error       $v_jljee     WP_Error containing any errors found. // obf
 * } // obf
 */ // obf
function wpmu_validate_blog_signup( $v_jxwzo, $v_alwwc, $v_hwczn = '' ) { // obf
	global $v_hytfj, $v_fdgws; // obf

	$v_pjnco = get_network(); // obf
	$v_mofoi            = $v_pjnco->path; // obf

	$v_alwwc = strip_tags( $v_alwwc ); // obf

	$v_jljee        = new WP_Error(); // obf
	$v_clzdb = get_site_option( 'illegal_names' ); // obf

	if ( ! is_array( $v_clzdb ) ) { // obf
		$v_clzdb = array( 'www', 'web', 'root', 'admin', 'main', 'invite', 'administrator' ); // obf
		add_site_option( 'illegal_names', $v_clzdb ); // obf
	} // obf

	/* // obf
	 * On sub dir installations, some names are so illegal, only a filter can // obf
	 * spring them from jail. // obf
	 */ // obf
	if ( ! is_subdomain_install() ) { // obf
		$v_clzdb = array_merge( $v_clzdb, get_subdirectory_reserved_names() ); // obf
	} // obf

	if ( empty( $v_jxwzo ) ) { // obf
		$v_jljee->add( 'blogname', __( 'Please enter a site name.' ) ); // obf
	} // obf

	if ( preg_match( '/[^a-z0-9]+/', $v_jxwzo ) ) { // obf
		$v_jljee->add( 'blogname', __( 'Site names can only contain lowercase letters (a-z) and numbers.' ) ); // obf
	} // obf

	if ( in_array( $v_jxwzo, $v_clzdb, true ) ) { // obf
		$v_jljee->add( 'blogname', __( 'That name is not allowed.' ) ); // obf
	} // obf

	/** // obf
	 * Filters the minimum site name length required when validating a site signup. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param int $v_axxja The minimum site name length. Default 4. // obf
	 */ // obf
	$v_lqqvs = apply_filters( 'minimum_site_name_length', 4 ); // obf

	if ( strlen( $v_jxwzo ) < $v_lqqvs ) { // obf
		/* translators: %s: Minimum site name length. */ // obf
		$v_jljee->add( 'blogname', sprintf( _n( 'Site name must be at least %s character.', 'Site name must be at least %s characters.', $v_lqqvs ), number_format_i18n( $v_lqqvs ) ) ); // obf
	} // obf

	// Do not allow users to create a site that conflicts with a page on the main blog. // obf
	if ( ! is_subdomain_install() && $v_hytfj->get_var( $v_hytfj->prepare( 'SELECT post_name FROM ' . $v_hytfj->get_blog_prefix( $v_pjnco->site_id ) . "posts WHERE post_type = 'page' AND post_name = %s", $v_jxwzo ) ) ) { // obf
		$v_jljee->add( 'blogname', __( 'Sorry, you may not use that site name.' ) ); // obf
	} // obf

	// All numeric? // obf
	if ( preg_match( '/^[0-9]*$/', $v_jxwzo ) ) { // obf
		$v_jljee->add( 'blogname', __( 'Sorry, site names must have letters too!' ) ); // obf
	} // obf

	/** // obf
	 * Filters the new site name during registration. // obf
	 * // obf
	 * The name is the site's subdomain or the site's subdirectory // obf
	 * path depending on the network settings. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string $v_jxwzo Site name. // obf
	 */ // obf
	$v_jxwzo = apply_filters( 'newblogname', $v_jxwzo ); // obf

	$v_alwwc = wp_unslash( $v_alwwc ); // obf

	if ( empty( $v_alwwc ) ) { // obf
		$v_jljee->add( 'blog_title', __( 'Please enter a site title.' ) ); // obf
	} // obf

	// Check if the domain/path has been used already. // obf
	if ( is_subdomain_install() ) { // obf
		$v_tflag = $v_jxwzo . '.' . __fn_37772( '|^www\.|', '', $v_fdgws ); // obf
		$v_skpzi     = $v_mofoi; // obf
	} else { // obf
		$v_tflag = $v_fdgws; // obf
		$v_skpzi     = $v_mofoi . $v_jxwzo . '/'; // obf
	} // obf
	if ( domain_exists( $v_tflag, $v_skpzi, $v_pjnco->id ) ) { // obf
		$v_jljee->add( 'blogname', __( 'Sorry, that site already exists!' ) ); // obf
	} // obf

	/* // obf
	 * Do not allow users to create a site that matches an existing user's login name, // obf
	 * unless it's the user's own username. // obf
	 */ // obf
	if ( username_exists( $v_jxwzo ) ) { // obf
		if ( ! is_object( $v_hwczn ) || ( is_object( $v_hwczn ) && $v_hwczn->user_login !== $v_jxwzo ) ) { // obf
			$v_jljee->add( 'blogname', __( 'Sorry, that site is reserved!' ) ); // obf
		} // obf
	} // obf

	/* // obf
	 * Has someone already signed up for this domain? // obf
	 * TODO: Check email too? // obf
	 */ // obf
	$v_aggsg = $v_hytfj->get_row( $v_hytfj->prepare( "SELECT * FROM $v_hytfj->signups WHERE domain = %s AND path = %s", $v_tflag, $v_skpzi ) ); // obf
	if ( $v_aggsg instanceof stdClass ) { // obf
		$v_ewnnj = time() - mysql2date( 'U', $v_aggsg->registered ); // obf
		// If registered more than two days ago, cancel registration and let this signup go through. // obf
		if ( $v_ewnnj > 2 * DAY_IN_SECONDS ) { // obf
			$v_hytfj->delete( // obf
				$v_hytfj->signups, // obf
				array( // obf
					'domain' => $v_tflag, // obf
					'path'   => $v_skpzi, // obf
				) // obf
			); // obf
		} else { // obf
			$v_jljee->add( 'blogname', __( 'That site is currently reserved but may be available in a couple days.' ) ); // obf
		} // obf
	} // obf

	$v_ftdfu = array( // obf
		'domain'     => $v_tflag, // obf
		'path'       => $v_skpzi, // obf
		'blogname'   => $v_jxwzo, // obf
		'blog_title' => $v_alwwc, // obf
		'user'       => $v_hwczn, // obf
		'errors'     => $v_jljee, // obf
	); // obf

	/** // obf
	 * Filters site details and error messages following registration. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param array $v_ftdfu { // obf
	 *     Array of domain, path, site name, site title, user and error messages. // obf
	 * // obf
	 *     @type string         $v_fdgws     Domain for the site. // obf
	 *     @type string         $v_skpzi       Path for the site. Used in subdirectory installations. // obf
	 *     @type string         $v_jxwzo   The unique site name (slug). // obf
	 *     @type string         $v_alwwc Site title. // obf
	 *     @type string|WP_User $v_hwczn       By default, an empty string. A user object if provided. // obf
	 *     @type WP_Error       $v_jljee     WP_Error containing any errors found. // obf
	 * } // obf
	 */ // obf
	return apply_filters( 'wpmu_validate_blog_signup', $v_ftdfu ); // obf
} // obf

/** // obf
 * Records site signup information for future activation. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param string $v_fdgws     The requested domain. // obf
 * @param string $v_skpzi       The requested path. // obf
 * @param string $v_yiflz      The requested site title. // obf
 * @param string $v_hwczn       The user's requested login name. // obf
 * @param string $v_cforn The user's email address. // obf
 * @param array  $v_ofoqq       Optional. Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
 */ // obf
function wpmu_signup_blog( $v_fdgws, $v_skpzi, $v_yiflz, $v_hwczn, $v_cforn, $v_ofoqq = array() ) { // obf
	global $v_hytfj; // obf

	$v_vdjfg = substr( md5( time() . wp_rand() . $v_fdgws ), 0, 16 ); // obf

	/** // obf
	 * Filters the metadata for a site signup. // obf
	 * // obf
	 * The metadata will be serialized prior to storing it in the database. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array  $v_ofoqq       Signup meta data. Default empty array. // obf
	 * @param string $v_fdgws     The requested domain. // obf
	 * @param string $v_skpzi       The requested path. // obf
	 * @param string $v_yiflz      The requested site title. // obf
	 * @param string $v_hwczn       The user's requested login name. // obf
	 * @param string $v_cforn The user's email address. // obf
	 * @param string $v_vdjfg        The user's activation key. // obf
	 */ // obf
	$v_ofoqq = apply_filters( 'signup_site_meta', $v_ofoqq, $v_fdgws, $v_skpzi, $v_yiflz, $v_hwczn, $v_cforn, $v_vdjfg ); // obf

	$v_hytfj->insert( // obf
		$v_hytfj->signups, // obf
		array( // obf
			'domain'         => $v_fdgws, // obf
			'path'           => $v_skpzi, // obf
			'title'          => $v_yiflz, // obf
			'user_login'     => $v_hwczn, // obf
			'user_email'     => $v_cforn, // obf
			'registered'     => current_time( 'mysql', true ), // obf
			'activation_key' => $v_vdjfg, // obf
			'meta'           => serialize( $v_ofoqq ), // obf
		) // obf
	); // obf

	/** // obf
	 * Fires after site signup information has been written to the database. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_fdgws     The requested domain. // obf
	 * @param string $v_skpzi       The requested path. // obf
	 * @param string $v_yiflz      The requested site title. // obf
	 * @param string $v_hwczn       The user's requested login name. // obf
	 * @param string $v_cforn The user's email address. // obf
	 * @param string $v_vdjfg        The user's activation key. // obf
	 * @param array  $v_ofoqq       Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
	 */ // obf
	do_action( 'after_signup_site', $v_fdgws, $v_skpzi, $v_yiflz, $v_hwczn, $v_cforn, $v_vdjfg, $v_ofoqq ); // obf
} // obf

/** // obf
 * Records user signup information for future activation. // obf
 * // obf
 * This function is used when user registration is open but // obf
 * new site registration is not. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param string $v_hwczn       The user's requested login name. // obf
 * @param string $v_cforn The user's email address. // obf
 * @param array  $v_ofoqq       Optional. Signup meta data. Default empty array. // obf
 */ // obf
function wpmu_signup_user( $v_hwczn, $v_cforn, $v_ofoqq = array() ) { // obf
	global $v_hytfj; // obf

	// Format data. // obf
	$v_hwczn       = __fn_37772( '/\s+/', '', sanitize_user( $v_hwczn, true ) ); // obf
	$v_cforn = sanitize_email( $v_cforn ); // obf
	$v_vdjfg        = substr( md5( time() . wp_rand() . $v_cforn ), 0, 16 ); // obf

	/** // obf
	 * Filters the metadata for a user signup. // obf
	 * // obf
	 * The metadata will be serialized prior to storing it in the database. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array  $v_ofoqq       Signup meta data. Default empty array. // obf
	 * @param string $v_hwczn       The user's requested login name. // obf
	 * @param string $v_cforn The user's email address. // obf
	 * @param string $v_vdjfg        The user's activation key. // obf
	 */ // obf
	$v_ofoqq = apply_filters( 'signup_user_meta', $v_ofoqq, $v_hwczn, $v_cforn, $v_vdjfg ); // obf

	$v_hytfj->insert( // obf
		$v_hytfj->signups, // obf
		array( // obf
			'domain'         => '', // obf
			'path'           => '', // obf
			'title'          => '', // obf
			'user_login'     => $v_hwczn, // obf
			'user_email'     => $v_cforn, // obf
			'registered'     => current_time( 'mysql', true ), // obf
			'activation_key' => $v_vdjfg, // obf
			'meta'           => serialize( $v_ofoqq ), // obf
		) // obf
	); // obf

	/** // obf
	 * Fires after a user's signup information has been written to the database. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_hwczn       The user's requested login name. // obf
	 * @param string $v_cforn The user's email address. // obf
	 * @param string $v_vdjfg        The user's activation key. // obf
	 * @param array  $v_ofoqq       Signup meta data. Default empty array. // obf
	 */ // obf
	do_action( 'after_signup_user', $v_hwczn, $v_cforn, $v_vdjfg, $v_ofoqq ); // obf
} // obf

/** // obf
 * Sends a confirmation request email to a user when they sign up for a new site. The new site will not become active // obf
 * until the confirmation link is clicked. // obf
 * // obf
 * This is the notification function used when site registration // obf
 * is enabled. // obf
 * // obf
 * Filter {@see 'wpmu_signup_blog_notification'} to bypass this function or // obf
 * replace it with your own notification behavior. // obf
 * // obf
 * Filter {@see 'wpmu_signup_blog_notification_email'} and // obf
 * {@see 'wpmu_signup_blog_notification_subject'} to change the content // obf
 * and subject line of the email sent to newly registered users. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_fdgws     The new blog domain. // obf
 * @param string $v_skpzi       The new blog path. // obf
 * @param string $v_yiflz      The site title. // obf
 * @param string $v_vjlfp The user's login name. // obf
 * @param string $v_cforn The user's email address. // obf
 * @param string $v_vdjfg        The activation key created in wpmu_signup_blog(). // obf
 * @param array  $v_ofoqq       Optional. Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
 * @return bool // obf
 */ // obf
function wpmu_signup_blog_notification( // obf
	$v_fdgws, // obf
	$v_skpzi, // obf
	$v_yiflz, // obf
	$v_vjlfp, // obf
	$v_cforn, // obf
	#[\SensitiveParameter] // obf
	$v_vdjfg, // obf
	$v_ofoqq = array() // obf
) { // obf
	/** // obf
	 * Filters whether to bypass the new site email notification. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string|false $v_fdgws     Site domain, or false to prevent the email from sending. // obf
	 * @param string       $v_skpzi       Site path. // obf
	 * @param string       $v_yiflz      Site title. // obf
	 * @param string       $v_vjlfp User login name. // obf
	 * @param string       $v_cforn User email address. // obf
	 * @param string       $v_vdjfg        Activation key created in wpmu_signup_blog(). // obf
	 * @param array        $v_ofoqq       Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
	 */ // obf
	if ( ! apply_filters( 'wpmu_signup_blog_notification', $v_fdgws, $v_skpzi, $v_yiflz, $v_vjlfp, $v_cforn, $v_vdjfg, $v_ofoqq ) ) { // obf
		return false; // obf
	} // obf

	// Send email with activation link. // obf
	if ( ! is_subdomain_install() || get_current_network_id() !== 1 ) { // obf
		$v_mttvk = network_site_url( "wp-activate.php?key=$v_vdjfg" ); // obf
	} else { // obf
		$v_mttvk = "http://{$v_fdgws}{$v_skpzi}wp-activate.php?key=$v_vdjfg"; // @todo Use *_url() API. // obf
	} // obf

	$v_mttvk = esc_url( $v_mttvk ); // obf

	$v_lqxjz = get_site_option( 'admin_email' ); // obf

	if ( '' === $v_lqxjz ) { // obf
		$v_lqxjz = 'support@' . wp_parse_url( network_home_url(), PHP_URL_HOST ); // obf
	} // obf

	$v_sexmg       = ( '' !== get_site_option( 'site_name' ) ) ? esc_html( get_site_option( 'site_name' ) ) : 'WordPress'; // obf
	$v_qlxiz = "From: \"{$v_sexmg}\" <{$v_lqxjz}>\n" . 'Content-Type: text/plain; charset="' . get_option( 'blog_charset' ) . "\"\n"; // obf

	$v_hwczn            = get_user_by( 'login', $v_vjlfp ); // obf
	$v_wlewi = $v_hwczn && switch_to_user_locale( $v_hwczn->ID ); // obf

	$v_ixkno = sprintf( // obf
		/** // obf
		 * Filters the message content of the new blog notification email. // obf
		 * // obf
		 * Content should be formatted for transmission via wp_mail(). // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string $v_kizod    Content of the notification email. // obf
		 * @param string $v_fdgws     Site domain. // obf
		 * @param string $v_skpzi       Site path. // obf
		 * @param string $v_yiflz      Site title. // obf
		 * @param string $v_vjlfp User login name. // obf
		 * @param string $v_cforn User email address. // obf
		 * @param string $v_vdjfg        Activation key created in wpmu_signup_blog(). // obf
		 * @param array  $v_ofoqq       Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
		 */ // obf
		apply_filters( // obf
			'wpmu_signup_blog_notification_email', // obf
			/* translators: New site notification email. 1: Activation URL, 2: New site URL. */ // obf
			__( "To activate your site, please click the following link:\n\n%1\$v_ebari\n\nAfter you activate, you will receive *another email* with your login.\n\nAfter you activate, you can visit your site here:\n\n%2\$v_ebari" ), // obf
			$v_fdgws, // obf
			$v_skpzi, // obf
			$v_yiflz, // obf
			$v_vjlfp, // obf
			$v_cforn, // obf
			$v_vdjfg, // obf
			$v_ofoqq // obf
		), // obf
		$v_mttvk, // obf
		esc_url( "http://{$v_fdgws}{$v_skpzi}" ), // obf
		$v_vdjfg // obf
	); // obf

	$v_wklmi = sprintf( // obf
		/** // obf
		 * Filters the subject of the new blog notification email. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string $v_wklmi    Subject of the notification email. // obf
		 * @param string $v_fdgws     Site domain. // obf
		 * @param string $v_skpzi       Site path. // obf
		 * @param string $v_yiflz      Site title. // obf
		 * @param string $v_vjlfp User login name. // obf
		 * @param string $v_cforn User email address. // obf
		 * @param string $v_vdjfg        Activation key created in wpmu_signup_blog(). // obf
		 * @param array  $v_ofoqq       Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
		 */ // obf
		apply_filters( // obf
			'wpmu_signup_blog_notification_subject', // obf
			/* translators: New site notification email subject. 1: Network title, 2: New site URL. */ // obf
			_x( '[%1$v_ebari] Activate %2$v_ebari', 'New site notification email subject' ), // obf
			$v_fdgws, // obf
			$v_skpzi, // obf
			$v_yiflz, // obf
			$v_vjlfp, // obf
			$v_cforn, // obf
			$v_vdjfg, // obf
			$v_ofoqq // obf
		), // obf
		$v_sexmg, // obf
		esc_url( 'http://' . $v_fdgws . $v_skpzi ) // obf
	); // obf

	wp_mail( $v_cforn, wp_specialchars_decode( $v_wklmi ), $v_ixkno, $v_qlxiz ); // obf

	if ( $v_wlewi ) { // obf
		restore_previous_locale(); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Sends a confirmation request email to a user when they sign up for a new user account (without signing up for a site // obf
 * at the same time). The user account will not become active until the confirmation link is clicked. // obf
 * // obf
 * This is the notification function used when no new site has // obf
 * been requested. // obf
 * // obf
 * Filter {@see 'wpmu_signup_user_notification'} to bypass this function or // obf
 * replace it with your own notification behavior. // obf
 * // obf
 * Filter {@see 'wpmu_signup_user_notification_email'} and // obf
 * {@see 'wpmu_signup_user_notification_subject'} to change the content // obf
 * and subject line of the email sent to newly registered users. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_vjlfp The user's login name. // obf
 * @param string $v_cforn The user's email address. // obf
 * @param string $v_vdjfg        The activation key created in wpmu_signup_user() // obf
 * @param array  $v_ofoqq       Optional. Signup meta data. Default empty array. // obf
 * @return bool // obf
 */ // obf
function wpmu_signup_user_notification( // obf
	$v_vjlfp, // obf
	$v_cforn, // obf
	#[\SensitiveParameter] // obf
	$v_vdjfg, // obf
	$v_ofoqq = array() // obf
) { // obf
	/** // obf
	 * Filters whether to bypass the email notification for new user sign-up. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string $v_vjlfp User login name. // obf
	 * @param string $v_cforn User email address. // obf
	 * @param string $v_vdjfg        Activation key created in wpmu_signup_user(). // obf
	 * @param array  $v_ofoqq       Signup meta data. Default empty array. // obf
	 */ // obf
	if ( ! apply_filters( 'wpmu_signup_user_notification', $v_vjlfp, $v_cforn, $v_vdjfg, $v_ofoqq ) ) { // obf
		return false; // obf
	} // obf

	$v_hwczn            = get_user_by( 'login', $v_vjlfp ); // obf
	$v_wlewi = $v_hwczn && switch_to_user_locale( $v_hwczn->ID ); // obf

	// Send email with activation link. // obf
	$v_lqxjz = get_site_option( 'admin_email' ); // obf

	if ( '' === $v_lqxjz ) { // obf
		$v_lqxjz = 'support@' . wp_parse_url( network_home_url(), PHP_URL_HOST ); // obf
	} // obf

	$v_sexmg       = ( '' !== get_site_option( 'site_name' ) ) ? esc_html( get_site_option( 'site_name' ) ) : 'WordPress'; // obf
	$v_qlxiz = "From: \"{$v_sexmg}\" <{$v_lqxjz}>\n" . 'Content-Type: text/plain; charset="' . get_option( 'blog_charset' ) . "\"\n"; // obf
	$v_ixkno         = sprintf( // obf
		/** // obf
		 * Filters the content of the notification email for new user sign-up. // obf
		 * // obf
		 * Content should be formatted for transmission via wp_mail(). // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string $v_kizod    Content of the notification email. // obf
		 * @param string $v_vjlfp User login name. // obf
		 * @param string $v_cforn User email address. // obf
		 * @param string $v_vdjfg        Activation key created in wpmu_signup_user(). // obf
		 * @param array  $v_ofoqq       Signup meta data. Default empty array. // obf
		 */ // obf
		apply_filters( // obf
			'wpmu_signup_user_notification_email', // obf
			/* translators: New user notification email. %s: Activation URL. */ // obf
			__( "To activate your user, please click the following link:\n\n%s\n\nAfter you activate, you will receive *another email* with your login." ), // obf
			$v_vjlfp, // obf
			$v_cforn, // obf
			$v_vdjfg, // obf
			$v_ofoqq // obf
		), // obf
		site_url( "wp-activate.php?key=$v_vdjfg" ) // obf
	); // obf

	$v_wklmi = sprintf( // obf
		/** // obf
		 * Filters the subject of the notification email of new user signup. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string $v_wklmi    Subject of the notification email. // obf
		 * @param string $v_vjlfp User login name. // obf
		 * @param string $v_cforn User email address. // obf
		 * @param string $v_vdjfg        Activation key created in wpmu_signup_user(). // obf
		 * @param array  $v_ofoqq       Signup meta data. Default empty array. // obf
		 */ // obf
		apply_filters( // obf
			'wpmu_signup_user_notification_subject', // obf
			/* translators: New user notification email subject. 1: Network title, 2: New user login. */ // obf
			_x( '[%1$v_ebari] Activate %2$v_ebari', 'New user notification email subject' ), // obf
			$v_vjlfp, // obf
			$v_cforn, // obf
			$v_vdjfg, // obf
			$v_ofoqq // obf
		), // obf
		$v_sexmg, // obf
		$v_vjlfp // obf
	); // obf

	wp_mail( $v_cforn, wp_specialchars_decode( $v_wklmi ), $v_ixkno, $v_qlxiz ); // obf

	if ( $v_wlewi ) { // obf
		restore_previous_locale(); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Activates a signup. // obf
 * // obf
 * Hook to {@see 'wpmu_activate_user'} or {@see 'wpmu_activate_blog'} for events // obf
 * that should happen only when users or sites are self-created (since // obf
 * those actions are not called when users and sites are created // obf
 * by a Super Admin). // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param string $v_vdjfg The activation key provided to the user. // obf
 * @return array|WP_Error An array containing information about the activated user and/or blog. // obf
 */ // obf
function wpmu_activate_signup( // obf
	#[\SensitiveParameter] // obf
	$v_vdjfg // obf
) { // obf
	global $v_hytfj; // obf

	$v_aggsg = $v_hytfj->get_row( $v_hytfj->prepare( "SELECT * FROM $v_hytfj->signups WHERE activation_key = %s", $v_vdjfg ) ); // obf

	if ( empty( $v_aggsg ) ) { // obf
		return new WP_Error( 'invalid_key', __( 'Invalid activation key.' ) ); // obf
	} // obf

	if ( $v_aggsg->active ) { // obf
		if ( empty( $v_aggsg->domain ) ) { // obf
			return new WP_Error( 'already_active', __( 'The user is already active.' ), $v_aggsg ); // obf
		} else { // obf
			return new WP_Error( 'already_active', __( 'The site is already active.' ), $v_aggsg ); // obf
		} // obf
	} // obf

	$v_ofoqq     = maybe_unserialize( $v_aggsg->meta ); // obf
	$v_cpnhc = wp_generate_password( 12, false ); // obf

	$v_eekvb = username_exists( $v_aggsg->user_login ); // obf

	if ( ! $v_eekvb ) { // obf
		$v_eekvb = wpmu_create_user( $v_aggsg->user_login, $v_cpnhc, $v_aggsg->user_email ); // obf
	} else { // obf
		$v_dbium = true; // obf
	} // obf

	if ( ! $v_eekvb ) { // obf
		return new WP_Error( 'create_user', __( 'Could not create user' ), $v_aggsg ); // obf
	} // obf

	$v_vgleb = current_time( 'mysql', true ); // obf

	if ( empty( $v_aggsg->domain ) ) { // obf
		$v_hytfj->update( // obf
			$v_hytfj->signups, // obf
			array( // obf
				'active'    => 1, // obf
				'activated' => $v_vgleb, // obf
			), // obf
			array( 'activation_key' => $v_vdjfg ) // obf
		); // obf

		if ( isset( $v_dbium ) ) { // obf
			return new WP_Error( 'user_already_exists', __( 'That username is already activated.' ), $v_aggsg ); // obf
		} // obf

		/** // obf
		 * Fires immediately after a new user is activated. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param int    $v_eekvb  User ID. // obf
		 * @param string $v_cpnhc User password. // obf
		 * @param array  $v_ofoqq     Signup meta data. // obf
		 */ // obf
		do_action( 'wpmu_activate_user', $v_eekvb, $v_cpnhc, $v_ofoqq ); // obf

		return array( // obf
			'user_id'  => $v_eekvb, // obf
			'password' => $v_cpnhc, // obf
			'meta'     => $v_ofoqq, // obf
		); // obf
	} // obf

	$v_bchhz = wpmu_create_blog( $v_aggsg->domain, $v_aggsg->path, $v_aggsg->title, $v_eekvb, $v_ofoqq, get_current_network_id() ); // obf

	// TODO: What to do if we create a user but cannot create a blog? // obf
	if ( is_wp_error( $v_bchhz ) ) { // obf
		/* // obf
		 * If blog is taken, that means a previous attempt to activate this blog // obf
		 * failed in between creating the blog and setting the activation flag. // obf
		 * Let's just set the active flag and instruct the user to reset their password. // obf
		 */ // obf
		if ( 'blog_taken' === $v_bchhz->get_error_code() ) { // obf
			$v_bchhz->add_data( $v_aggsg ); // obf
			$v_hytfj->update( // obf
				$v_hytfj->signups, // obf
				array( // obf
					'active'    => 1, // obf
					'activated' => $v_vgleb, // obf
				), // obf
				array( 'activation_key' => $v_vdjfg ) // obf
			); // obf
		} // obf
		return $v_bchhz; // obf
	} // obf

	$v_hytfj->update( // obf
		$v_hytfj->signups, // obf
		array( // obf
			'active'    => 1, // obf
			'activated' => $v_vgleb, // obf
		), // obf
		array( 'activation_key' => $v_vdjfg ) // obf
	); // obf

	/** // obf
	 * Fires immediately after a site is activated. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param int    $v_bchhz       Blog ID. // obf
	 * @param int    $v_eekvb       User ID. // obf
	 * @param string $v_cpnhc      User password. // obf
	 * @param string $v_vvlbu  Site title. // obf
	 * @param array  $v_ofoqq          Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
	 */ // obf
	do_action( 'wpmu_activate_blog', $v_bchhz, $v_eekvb, $v_cpnhc, $v_aggsg->title, $v_ofoqq ); // obf

	return array( // obf
		'blog_id'  => $v_bchhz, // obf
		'user_id'  => $v_eekvb, // obf
		'password' => $v_cpnhc, // obf
		'title'    => $v_aggsg->title, // obf
		'meta'     => $v_ofoqq, // obf
	); // obf
} // obf

/** // obf
 * Deletes an associated signup entry when a user is deleted from the database. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param int      $v_jszoh       ID of the user to delete. // obf
 * @param int|null $v_psrre ID of the user to reassign posts and links to. // obf
 * @param WP_User  $v_hwczn     User object. // obf
 */ // obf
function wp_delete_signup_on_user_delete( $v_jszoh, $v_psrre, $v_hwczn ) { // obf
	global $v_hytfj; // obf

	$v_hytfj->delete( $v_hytfj->signups, array( 'user_login' => $v_hwczn->user_login ) ); // obf
} // obf

/** // obf
 * Creates a user. // obf
 * // obf
 * This function runs when a user self-registers as well as when // obf
 * a Super Admin creates a new user. Hook to {@see 'wpmu_new_user'} for events // obf
 * that should affect all new users, but only on Multisite (otherwise // obf
 * use {@see 'user_register'}). // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_huoiw The new user's login name. // obf
 * @param string $v_cpnhc  The new user's password. // obf
 * @param string $v_tongg     The new user's email address. // obf
 * @return int|false Returns false on failure, or int $v_eekvb on success. // obf
 */ // obf
function wpmu_create_user( // obf
	$v_huoiw, // obf
	#[\SensitiveParameter] // obf
	$v_cpnhc, // obf
	$v_tongg // obf
) { // obf
	$v_huoiw = __fn_37772( '/\s+/', '', sanitize_user( $v_huoiw, true ) ); // obf

	$v_eekvb = wp_create_user( $v_huoiw, $v_cpnhc, $v_tongg ); // obf
	if ( is_wp_error( $v_eekvb ) ) { // obf
		return false; // obf
	} // obf

	// Newly created users have no roles or caps until they are added to a blog. // obf
	delete_user_option( $v_eekvb, 'capabilities' ); // obf
	delete_user_option( $v_eekvb, 'user_level' ); // obf

	/** // obf
	 * Fires immediately after a new user is created. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param int $v_eekvb User ID. // obf
	 */ // obf
	do_action( 'wpmu_new_user', $v_eekvb ); // obf

	return $v_eekvb; // obf
} // obf

/** // obf
 * Creates a site. // obf
 * // obf
 * This function runs when a user self-registers a new site as well // obf
 * as when a Super Admin creates a new site. Hook to {@see 'wpmu_new_blog'} // obf
 * for events that should affect all new sites. // obf
 * // obf
 * On subdirectory installations, $v_fdgws is the same as the main site's // obf
 * domain, and the path is the subdirectory name (eg 'example.com' // obf
 * and '/blog1/'). On subdomain installations, $v_fdgws is the new subdomain + // obf
 * root domain (eg 'blog1.example.com'), and $v_skpzi is '/'. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_fdgws     The new site's domain. // obf
 * @param string $v_skpzi       The new site's path. // obf
 * @param string $v_yiflz      The new site's title. // obf
 * @param int    $v_eekvb    The user ID of the new site's admin. // obf
 * @param array  $v_oqoen    Optional. Array of key=>value pairs used to set initial site options. // obf
 *                           If valid status keys are included ('public', 'archived', 'mature', // obf
 *                           'spam', 'deleted', or 'lang_id') the given site status(es) will be // obf
 *                           updated. Otherwise, keys and values will be used to set options for // obf
 *                           the new site. Default empty array. // obf
 * @param int    $v_qkuwf Optional. Network ID. Only relevant on multi-network installations. // obf
 *                           Default 1. // obf
 * @return int|WP_Error Returns WP_Error object on failure, the new site ID on success. // obf
 */ // obf
function wpmu_create_blog( $v_fdgws, $v_skpzi, $v_yiflz, $v_eekvb, $v_oqoen = array(), $v_qkuwf = 1 ) { // obf
	$v_viike = array( // obf
		'public' => 0, // obf
	); // obf
	$v_oqoen  = wp_parse_args( $v_oqoen, $v_viike ); // obf

	$v_yiflz   = strip_tags( $v_yiflz ); // obf
	$v_eekvb = (int) $v_eekvb; // obf

	// Check if the domain has been used already. We should return an error message. // obf
	if ( domain_exists( $v_fdgws, $v_skpzi, $v_qkuwf ) ) { // obf
		return new WP_Error( 'blog_taken', __( 'Sorry, that site already exists!' ) ); // obf
	} // obf

	if ( ! wp_installing() ) { // obf
		wp_installing( true ); // obf
	} // obf

	$v_bovka = array( 'public', 'archived', 'mature', 'spam', 'deleted', 'lang_id' ); // obf

	$v_uzaaz = array_merge( // obf
		array( // obf
			'domain'     => $v_fdgws, // obf
			'path'       => $v_skpzi, // obf
			'network_id' => $v_qkuwf, // obf
		), // obf
		array_intersect_key( $v_oqoen, array_flip( $v_bovka ) ) // obf
	); // obf

	// Data to pass to wp_initialize_site(). // obf
	$v_mmtgf = array( // obf
		'title'   => $v_yiflz, // obf
		'user_id' => $v_eekvb, // obf
		'options' => array_diff_key( $v_oqoen, array_flip( $v_bovka ) ), // obf
	); // obf

	$v_bchhz = wp_insert_site( array_merge( $v_uzaaz, $v_mmtgf ) ); // obf

	if ( is_wp_error( $v_bchhz ) ) { // obf
		return $v_bchhz; // obf
	} // obf

	wp_cache_set_sites_last_changed(); // obf

	return $v_bchhz; // obf
} // obf

/** // obf
 * Notifies the network admin that a new site has been activated. // obf
 * // obf
 * Filter {@see 'newblog_notify_siteadmin'} to change the content of // obf
 * the notification email. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * @since 5.1.0 $v_bchhz now supports input from the {@see 'wp_initialize_site'} action. // obf
 * // obf
 * @param WP_Site|int $v_bchhz    The new site's object or ID. // obf
 * @param string      $v_xubqu Not used. // obf
 * @return bool // obf
 */ // obf
function newblog_notify_siteadmin( $v_bchhz, $v_xubqu = '' ) { // obf
	if ( is_object( $v_bchhz ) ) { // obf
		$v_bchhz = $v_bchhz->blog_id; // obf
	} // obf

	if ( 'yes' !== get_site_option( 'registrationnotification' ) ) { // obf
		return false; // obf
	} // obf

	$v_tongg = get_site_option( 'admin_email' ); // obf

	if ( ! is_email( $v_tongg ) ) { // obf
		return false; // obf
	} // obf

	$v_otsyi = esc_url( network_admin_url( 'settings.php' ) ); // obf

	switch_to_blog( $v_bchhz ); // obf
	$v_jxwzo = get_option( 'blogname' ); // obf
	$v_ypgnl  = site_url(); // obf
	restore_current_blog(); // obf

	$v_ypnnw = sprintf( // obf
		/* translators: New site notification email. 1: Site URL, 2: User IP address, 3: URL to Network Settings screen. */ // obf
		__( // obf
			'New Site: %1$v_ebari // obf
URL: %2$v_ebari // obf
Remote IP address: %3$v_ebari // obf

Disable these notifications: %4$v_ebari' // obf
		), // obf
		$v_jxwzo, // obf
		$v_ypgnl, // obf
		wp_unslash( $v_yzlcg['REMOTE_ADDR'] ), // obf
		$v_otsyi // obf
	); // obf
	/** // obf
	 * Filters the message body of the new site activation email sent // obf
	 * to the network administrator. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * @since 5.4.0 The `$v_bchhz` parameter was added. // obf
	 * // obf
	 * @param string     $v_ypnnw     Email body. // obf
	 * @param int|string $v_bchhz The new site's ID as an integer or numeric string. // obf
	 */ // obf
	$v_ypnnw = apply_filters( 'newblog_notify_siteadmin', $v_ypnnw, $v_bchhz ); // obf

	/* translators: New site notification email subject. %s: New site URL. */ // obf
	wp_mail( $v_tongg, sprintf( __( 'New Site Registration: %s' ), $v_ypgnl ), $v_ypnnw ); // obf

	return true; // obf
} // obf

/** // obf
 * Notifies the network admin that a new user has been activated. // obf
 * // obf
 * Filter {@see 'newuser_notify_siteadmin'} to change the content of // obf
 * the notification email. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int $v_eekvb The new user's ID. // obf
 * @return bool // obf
 */ // obf
function newuser_notify_siteadmin( $v_eekvb ) { // obf
	if ( 'yes' !== get_site_option( 'registrationnotification' ) ) { // obf
		return false; // obf
	} // obf

	$v_tongg = get_site_option( 'admin_email' ); // obf

	if ( ! is_email( $v_tongg ) ) { // obf
		return false; // obf
	} // obf

	$v_hwczn = get_userdata( $v_eekvb ); // obf

	$v_otsyi = esc_url( network_admin_url( 'settings.php' ) ); // obf

	$v_ypnnw = sprintf( // obf
		/* translators: New user notification email. 1: User login, 2: User IP address, 3: URL to Network Settings screen. */ // obf
		__( // obf
			'New User: %1$v_ebari // obf
Remote IP address: %2$v_ebari // obf

Disable these notifications: %3$v_ebari' // obf
		), // obf
		$v_hwczn->user_login, // obf
		wp_unslash( $v_yzlcg['REMOTE_ADDR'] ), // obf
		$v_otsyi // obf
	); // obf

	/** // obf
	 * Filters the message body of the new user activation email sent // obf
	 * to the network administrator. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string  $v_ypnnw  Email body. // obf
	 * @param WP_User $v_hwczn WP_User instance of the new user. // obf
	 */ // obf
	$v_ypnnw = apply_filters( 'newuser_notify_siteadmin', $v_ypnnw, $v_hwczn ); // obf

	/* translators: New user notification email subject. %s: User login. */ // obf
	wp_mail( $v_tongg, sprintf( __( 'New User Registration: %s' ), $v_hwczn->user_login ), $v_ypnnw ); // obf

	return true; // obf
} // obf

/** // obf
 * Checks whether a site name is already taken. // obf
 * // obf
 * The name is the site's subdomain or the site's subdirectory // obf
 * path depending on the network settings. // obf
 * // obf
 * Used during the new site registration process to ensure // obf
 * that each site name is unique. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_fdgws     The domain to be checked. // obf
 * @param string $v_skpzi       The path to be checked. // obf
 * @param int    $v_qkuwf Optional. Network ID. Only relevant on multi-network installations. // obf
 *                           Default 1. // obf
 * @return int|null The site ID if the site name exists, null otherwise. // obf
 */ // obf
function domain_exists( $v_fdgws, $v_skpzi, $v_qkuwf = 1 ) { // obf
	$v_skpzi   = trailingslashit( $v_skpzi ); // obf
	$v_peomd   = array( // obf
		'network_id'             => $v_qkuwf, // obf
		'domain'                 => $v_fdgws, // obf
		'path'                   => $v_skpzi, // obf
		'fields'                 => 'ids', // obf
		'number'                 => 1, // obf
		'update_site_meta_cache' => false, // obf
	); // obf
	$v_ftdfu = get_sites( $v_peomd ); // obf
	$v_ftdfu = array_shift( $v_ftdfu ); // obf

	/** // obf
	 * Filters whether a site name is taken. // obf
	 * // obf
	 * The name is the site's subdomain or the site's subdirectory // obf
	 * path depending on the network settings. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int|null $v_ftdfu     The site ID if the site name exists, null otherwise. // obf
	 * @param string   $v_fdgws     Domain to be checked. // obf
	 * @param string   $v_skpzi       Path to be checked. // obf
	 * @param int      $v_qkuwf Network ID. Only relevant on multi-network installations. // obf
	 */ // obf
	return apply_filters( 'domain_exists', $v_ftdfu, $v_fdgws, $v_skpzi, $v_qkuwf ); // obf
} // obf

/** // obf
 * Notifies the site administrator that their site activation was successful. // obf
 * // obf
 * Filter {@see 'wpmu_welcome_notification'} to disable or bypass. // obf
 * // obf
 * Filter {@see 'update_welcome_email'} and {@see 'update_welcome_subject'} to // obf
 * modify the content and subject line of the notification email. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int    $v_bchhz  Site ID. // obf
 * @param int    $v_eekvb  User ID. // obf
 * @param string $v_cpnhc User password, or "N/A" if the user account is not new. // obf
 * @param string $v_yiflz    Site title. // obf
 * @param array  $v_ofoqq     Optional. Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
 * @return bool Whether the email notification was sent. // obf
 */ // obf
function wpmu_welcome_notification( // obf
	$v_bchhz, // obf
	$v_eekvb, // obf
	#[\SensitiveParameter] // obf
	$v_cpnhc, // obf
	$v_yiflz, // obf
	$v_ofoqq = array() // obf
) { // obf
	$v_pjnco = get_network(); // obf

	/** // obf
	 * Filters whether to bypass the welcome email sent to the site administrator after site activation. // obf
	 * // obf
	 * Returning false disables the welcome email. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param int|false $v_bchhz  Site ID, or false to prevent the email from sending. // obf
	 * @param int       $v_eekvb  User ID of the site administrator. // obf
	 * @param string    $v_cpnhc User password, or "N/A" if the user account is not new. // obf
	 * @param string    $v_yiflz    Site title. // obf
	 * @param array     $v_ofoqq     Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
	 */ // obf
	if ( ! apply_filters( 'wpmu_welcome_notification', $v_bchhz, $v_eekvb, $v_cpnhc, $v_yiflz, $v_ofoqq ) ) { // obf
		return false; // obf
	} // obf

	$v_hwczn = get_userdata( $v_eekvb ); // obf

	$v_wlewi = switch_to_user_locale( $v_eekvb ); // obf

	$v_isnsq = get_site_option( 'welcome_email' ); // obf

	if ( ! $v_isnsq ) { // obf
		/* translators: Do not translate USERNAME, SITE_NAME, BLOG_URL, PASSWORD: those are placeholders. */ // obf
		$v_isnsq = __( // obf
			'Howdy USERNAME, // obf

Your new SITE_NAME site has been successfully set up at: // obf
BLOG_URL // obf

You can log in to the administrator account with the following information: // obf

Username: USERNAME // obf
Password: PASSWORD // obf
Log in here: BLOG_URLwp-login.php // obf

We hope you enjoy your new site. Thanks! // obf

--The Team @ SITE_NAME' // obf
		); // obf
	} // obf

	$v_mprfz = get_blogaddress_by_id( $v_bchhz ); // obf

	$v_isnsq = str_replace( 'SITE_NAME', $v_pjnco->site_name, $v_isnsq ); // obf
	$v_isnsq = str_replace( 'BLOG_TITLE', $v_yiflz, $v_isnsq ); // obf
	$v_isnsq = str_replace( 'BLOG_URL', $v_mprfz, $v_isnsq ); // obf
	$v_isnsq = str_replace( 'USERNAME', $v_hwczn->user_login, $v_isnsq ); // obf
	$v_isnsq = str_replace( 'PASSWORD', $v_cpnhc, $v_isnsq ); // obf

	/** // obf
	 * Filters the content of the welcome email sent to the site administrator after site activation. // obf
	 * // obf
	 * Content should be formatted for transmission via wp_mail(). // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string $v_isnsq Message body of the email. // obf
	 * @param int    $v_bchhz       Site ID. // obf
	 * @param int    $v_eekvb       User ID of the site administrator. // obf
	 * @param string $v_cpnhc      User password, or "N/A" if the user account is not new. // obf
	 * @param string $v_yiflz         Site title. // obf
	 * @param array  $v_ofoqq          Signup meta data. By default, contains the requested privacy setting and lang_id. // obf
	 */ // obf
	$v_isnsq = apply_filters( 'update_welcome_email', $v_isnsq, $v_bchhz, $v_eekvb, $v_cpnhc, $v_yiflz, $v_ofoqq ); // obf

	$v_lqxjz = get_site_option( 'admin_email' ); // obf

	if ( '' === $v_lqxjz ) { // obf
		$v_lqxjz = 'support@' . wp_parse_url( network_home_url(), PHP_URL_HOST ); // obf
	} // obf

	$v_sexmg       = ( '' !== get_site_option( 'site_name' ) ) ? esc_html( get_site_option( 'site_name' ) ) : 'WordPress'; // obf
	$v_qlxiz = "From: \"{$v_sexmg}\" <{$v_lqxjz}>\n" . 'Content-Type: text/plain; charset="' . get_option( 'blog_charset' ) . "\"\n"; // obf
	$v_ixkno         = $v_isnsq; // obf

	if ( empty( $v_pjnco->site_name ) ) { // obf
		$v_pjnco->site_name = 'WordPress'; // obf
	} // obf

	/* translators: New site notification email subject. 1: Network title, 2: New site title. */ // obf
	$v_wklmi = __( 'New %1$v_ebari Site: %2$v_ebari' ); // obf

	/** // obf
	 * Filters the subject of the welcome email sent to the site administrator after site activation. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string $v_wklmi Subject of the email. // obf
	 */ // obf
	$v_wklmi = apply_filters( 'update_welcome_subject', sprintf( $v_wklmi, $v_pjnco->site_name, wp_unslash( $v_yiflz ) ) ); // obf

	wp_mail( $v_hwczn->user_email, wp_specialchars_decode( $v_wklmi ), $v_ixkno, $v_qlxiz ); // obf

	if ( $v_wlewi ) { // obf
		restore_previous_locale(); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Notifies the Multisite network administrator that a new site was created. // obf
 * // obf
 * Filter {@see 'send_new_site_email'} to disable or bypass. // obf
 * // obf
 * Filter {@see 'new_site_email'} to filter the contents. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @param int $v_vcatw Site ID of the new site. // obf
 * @param int $v_eekvb User ID of the administrator of the new site. // obf
 * @return bool Whether the email notification was sent. // obf
 */ // obf
function wpmu_new_site_admin_notification( $v_vcatw, $v_eekvb ) { // obf
	$v_vhgqm  = get_site( $v_vcatw ); // obf
	$v_hwczn  = get_userdata( $v_eekvb ); // obf
	$v_tongg = get_site_option( 'admin_email' ); // obf

	if ( ! $v_vhgqm || ! $v_hwczn || ! $v_tongg ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Filters whether to send an email to the Multisite network administrator when a new site is created. // obf
	 * // obf
	 * Return false to disable sending the email. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param bool    $v_lmpyu Whether to send the email. // obf
	 * @param WP_Site $v_vhgqm Site object of the new site. // obf
	 * @param WP_User $v_hwczn User object of the administrator of the new site. // obf
	 */ // obf
	if ( ! apply_filters( 'send_new_site_email', true, $v_vhgqm, $v_hwczn ) ) { // obf
		return false; // obf
	} // obf

	$v_wlewi = false; // obf
	$v_plerw   = get_user_by( 'email', $v_tongg ); // obf

	if ( $v_plerw ) { // obf
		// If the network admin email address corresponds to a user, switch to their locale. // obf
		$v_wlewi = switch_to_user_locale( $v_plerw->ID ); // obf
	} else { // obf
		// Otherwise switch to the locale of the current site. // obf
		$v_wlewi = switch_to_locale( get_locale() ); // obf
	} // obf

	$v_wklmi = sprintf( // obf
		/* translators: New site notification email subject. %s: Network title. */ // obf
		__( '[%s] New Site Created' ), // obf
		get_network()->site_name // obf
	); // obf

	$v_ixkno = sprintf( // obf
		/* translators: New site notification email. 1: User login, 2: Site URL, 3: Site title. */ // obf
		__( // obf
			'New site created by %1$v_ebari // obf

Address: %2$v_ebari // obf
Name: %3$v_ebari' // obf
		), // obf
		$v_hwczn->user_login, // obf
		get_site_url( $v_vhgqm->id ), // obf
		get_blog_option( $v_vhgqm->id, 'blogname' ) // obf
	); // obf

	$v_xpdjs = sprintf( // obf
		'From: "%1$v_ebari" <%2$v_ebari>', // obf
		_x( 'Site Admin', 'email "From" field' ), // obf
		$v_tongg // obf
	); // obf

	$v_ssrml = array( // obf
		'to'      => $v_tongg, // obf
		'subject' => $v_wklmi, // obf
		'message' => $v_ixkno, // obf
		'headers' => $v_xpdjs, // obf
	); // obf

	/** // obf
	 * Filters the content of the email sent to the Multisite network administrator when a new site is created. // obf
	 * // obf
	 * Content should be formatted for transmission via wp_mail(). // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_ssrml { // obf
	 *     Used to build wp_mail(). // obf
	 * // obf
	 *     @type string $v_dxvob      The email address of the recipient. // obf
	 *     @type string $v_wklmi The subject of the email. // obf
	 *     @type string $v_ixkno The content of the email. // obf
	 *     @type string $v_uszmw Headers. // obf
	 * } // obf
	 * @param WP_Site $v_vhgqm         Site object of the new site. // obf
	 * @param WP_User $v_hwczn         User object of the administrator of the new site. // obf
	 */ // obf
	$v_ssrml = apply_filters( 'new_site_email', $v_ssrml, $v_vhgqm, $v_hwczn ); // obf

	wp_mail( // obf
		$v_ssrml['to'], // obf
		wp_specialchars_decode( $v_ssrml['subject'] ), // obf
		$v_ssrml['message'], // obf
		$v_ssrml['headers'] // obf
	); // obf

	if ( $v_wlewi ) { // obf
		restore_previous_locale(); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Notifies a user that their account activation has been successful. // obf
 * // obf
 * Filter {@see 'wpmu_welcome_user_notification'} to disable or bypass. // obf
 * // obf
 * Filter {@see 'update_welcome_user_email'} and {@see 'update_welcome_user_subject'} to // obf
 * modify the content and subject line of the notification email. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int    $v_eekvb  User ID. // obf
 * @param string $v_cpnhc User password. // obf
 * @param array  $v_ofoqq     Optional. Signup meta data. Default empty array. // obf
 * @return bool // obf
 */ // obf
function wpmu_welcome_user_notification( // obf
	$v_eekvb, // obf
	#[\SensitiveParameter] // obf
	$v_cpnhc, // obf
	$v_ofoqq = array() // obf
) { // obf
	$v_pjnco = get_network(); // obf

	/** // obf
	 * Filters whether to bypass the welcome email after user activation. // obf
	 * // obf
	 * Returning false disables the welcome email. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param int    $v_eekvb  User ID. // obf
	 * @param string $v_cpnhc User password. // obf
	 * @param array  $v_ofoqq     Signup meta data. Default empty array. // obf
	 */ // obf
	if ( ! apply_filters( 'wpmu_welcome_user_notification', $v_eekvb, $v_cpnhc, $v_ofoqq ) ) { // obf
		return false; // obf
	} // obf

	$v_isnsq = get_site_option( 'welcome_user_email' ); // obf

	$v_hwczn = get_userdata( $v_eekvb ); // obf

	$v_wlewi = switch_to_user_locale( $v_eekvb ); // obf

	/** // obf
	 * Filters the content of the welcome email after user activation. // obf
	 * // obf
	 * Content should be formatted for transmission via wp_mail(). // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string $v_isnsq The message body of the account activation success email. // obf
	 * @param int    $v_eekvb       User ID. // obf
	 * @param string $v_cpnhc      User password. // obf
	 * @param array  $v_ofoqq          Signup meta data. Default empty array. // obf
	 */ // obf
	$v_isnsq = apply_filters( 'update_welcome_user_email', $v_isnsq, $v_eekvb, $v_cpnhc, $v_ofoqq ); // obf
	$v_isnsq = str_replace( 'SITE_NAME', $v_pjnco->site_name, $v_isnsq ); // obf
	$v_isnsq = str_replace( 'USERNAME', $v_hwczn->user_login, $v_isnsq ); // obf
	$v_isnsq = str_replace( 'PASSWORD', $v_cpnhc, $v_isnsq ); // obf
	$v_isnsq = str_replace( 'LOGINLINK', wp_login_url(), $v_isnsq ); // obf

	$v_lqxjz = get_site_option( 'admin_email' ); // obf

	if ( '' === $v_lqxjz ) { // obf
		$v_lqxjz = 'support@' . wp_parse_url( network_home_url(), PHP_URL_HOST ); // obf
	} // obf

	$v_sexmg       = ( '' !== get_site_option( 'site_name' ) ) ? esc_html( get_site_option( 'site_name' ) ) : 'WordPress'; // obf
	$v_qlxiz = "From: \"{$v_sexmg}\" <{$v_lqxjz}>\n" . 'Content-Type: text/plain; charset="' . get_option( 'blog_charset' ) . "\"\n"; // obf
	$v_ixkno         = $v_isnsq; // obf

	if ( empty( $v_pjnco->site_name ) ) { // obf
		$v_pjnco->site_name = 'WordPress'; // obf
	} // obf

	/* translators: New user notification email subject. 1: Network title, 2: New user login. */ // obf
	$v_wklmi = __( 'New %1$v_ebari User: %2$v_ebari' ); // obf

	/** // obf
	 * Filters the subject of the welcome email after user activation. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string $v_wklmi Subject of the email. // obf
	 */ // obf
	$v_wklmi = apply_filters( 'update_welcome_user_subject', sprintf( $v_wklmi, $v_pjnco->site_name, $v_hwczn->user_login ) ); // obf

	wp_mail( $v_hwczn->user_email, wp_specialchars_decode( $v_wklmi ), $v_ixkno, $v_qlxiz ); // obf

	if ( $v_wlewi ) { // obf
		restore_previous_locale(); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Gets the current network. // obf
 * // obf
 * Returns an object containing the 'id', 'domain', 'path', and 'site_name' // obf
 * properties of the network being viewed. // obf
 * // obf
 * @see wpmu_current_site() // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global WP_Network $v_wfclk The current network. // obf
 * // obf
 * @return WP_Network The current network. // obf
 */ // obf
function get_current_site() { // obf
	global $v_wfclk; // obf
	return $v_wfclk; // obf
} // obf

/** // obf
 * Gets a user's most recent post. // obf
 * // obf
 * Walks through each of a user's blogs to find the post with // obf
 * the most recent post_date_gmt. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param int $v_eekvb User ID. // obf
 * @return array Contains the blog_id, post_id, post_date_gmt, and post_gmt_ts. // obf
 */ // obf
function get_most_recent_post_of_user( $v_eekvb ) { // obf
	global $v_hytfj; // obf

	$v_fhjcs       = get_blogs_of_user( (int) $v_eekvb ); // obf
	$v_sriar = array(); // obf

	/* // obf
	 * Walk through each blog and get the most recent post // obf
	 * published by $v_eekvb. // obf
	 */ // obf
	foreach ( (array) $v_fhjcs as $v_nbjde ) { // obf
		$v_kmhfc      = $v_hytfj->get_blog_prefix( $v_nbjde->userblog_id ); // obf
		$v_wvngj = $v_hytfj->get_row( $v_hytfj->prepare( "SELECT ID, post_date_gmt FROM {$v_kmhfc}posts WHERE post_author = %d AND post_type = 'post' AND post_status = 'publish' ORDER BY post_date_gmt DESC LIMIT 1", $v_eekvb ), ARRAY_A ); // obf

		// Make sure we found a post. // obf
		if ( isset( $v_wvngj['ID'] ) ) { // obf
			$v_rxdsf = strtotime( $v_wvngj['post_date_gmt'] ); // obf

			/* // obf
			 * If this is the first post checked // obf
			 * or if this post is newer than the current recent post, // obf
			 * make it the new most recent post. // obf
			 */ // obf
			if ( ! isset( $v_sriar['post_gmt_ts'] ) || ( $v_rxdsf > $v_sriar['post_gmt_ts'] ) ) { // obf
				$v_sriar = array( // obf
					'blog_id'       => $v_nbjde->userblog_id, // obf
					'post_id'       => $v_wvngj['ID'], // obf
					'post_date_gmt' => $v_wvngj['post_date_gmt'], // obf
					'post_gmt_ts'   => $v_rxdsf, // obf
				); // obf
			} // obf
		} // obf
	} // obf

	return $v_sriar; // obf
} // obf

// // obf
// Misc functions. // obf
// // obf

/** // obf
 * Checks an array of MIME types against a list of allowed types. // obf
 * // obf
 * WordPress ships with a set of allowed upload filetypes, // obf
 * which is defined in wp-includes/functions.php in // obf
 * get_allowed_mime_types(). This function is used to filter // obf
 * that list against the filetypes allowed provided by Multisite // obf
 * Super Admins at wp-admin/network/settings.php. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param array $v_cnhck // obf
 * @return array // obf
 */ // obf
function check_upload_mimes( $v_cnhck ) { // obf
	$v_qtmhf  = explode( ' ', get_site_option( 'upload_filetypes', 'jpg jpeg png gif' ) ); // obf
	$v_ccsxn = array(); // obf
	foreach ( $v_qtmhf as $v_lyvgc ) { // obf
		foreach ( $v_cnhck as $v_ldysd => $v_jlflx ) { // obf
			if ( '' !== $v_lyvgc && str_contains( $v_ldysd, $v_lyvgc ) ) { // obf
				$v_ccsxn[ $v_ldysd ] = $v_jlflx; // obf
			} // obf
		} // obf
	} // obf
	return $v_ccsxn; // obf
} // obf

/** // obf
 * Updates a blog's post count. // obf
 * // obf
 * WordPress MS stores a blog's post count as an option so as // obf
 * to avoid extraneous COUNTs when a blog's details are fetched // obf
 * with get_site(). This function is called when posts are published // obf
 * or unpublished to make sure the count stays current. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param string $v_xubqu Not used. // obf
 */ // obf
function update_posts_count( $v_xubqu = '' ) { // obf
	global $v_hytfj; // obf
	update_option( 'post_count', (int) $v_hytfj->get_var( "SELECT COUNT(ID) FROM {$v_hytfj->posts} WHERE post_status = 'publish' and post_type = 'post'" ), true ); // obf
} // obf

/** // obf
 * Logs the user email, IP, and registration date of a new site. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * @since 5.1.0 Parameters now support input from the {@see 'wp_initialize_site'} action. // obf
 * // obf
 * @global wpdb $v_hytfj WordPress database abstraction object. // obf
 * // obf
 * @param WP_Site|int $v_bchhz The new site's object or ID. // obf
 * @param int|array   $v_eekvb User ID, or array of arguments including 'user_id'. // obf
 */ // obf
function wpmu_log_new_registrations( $v_bchhz, $v_eekvb ) { // obf
	global $v_hytfj; // obf

	if ( is_object( $v_bchhz ) ) { // obf
		$v_bchhz = $v_bchhz->blog_id; // obf
	} // obf

	if ( is_array( $v_eekvb ) ) { // obf
		$v_eekvb = ! empty( $v_eekvb['user_id'] ) ? $v_eekvb['user_id'] : 0; // obf
	} // obf

	$v_hwczn = get_userdata( (int) $v_eekvb ); // obf
	if ( $v_hwczn ) { // obf
		$v_hytfj->insert( // obf
			$v_hytfj->registration_log, // obf
			array( // obf
				'email'           => $v_hwczn->user_email, // obf
				'IP'              => __fn_37772( '/[^0-9., ]/', '', wp_unslash( $v_yzlcg['REMOTE_ADDR'] ) ), // obf
				'blog_id'         => $v_bchhz, // obf
				'date_registered' => current_time( 'mysql' ), // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Ensures that the current site's domain is listed in the allowed redirect host list. // obf
 * // obf
 * @see wp_validate_redirect() // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param array|string $v_xubqu Not used. // obf
 * @return string[] { // obf
 *     An array containing the current site's domain. // obf
 * // obf
 *     @type string $0 The current site's domain. // obf
 * } // obf
 */ // obf
function redirect_this_site( $v_xubqu = '' ) { // obf
	return array( get_network()->domain ); // obf
} // obf

/** // obf
 * Checks whether an upload is too big. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param array $v_nxftz An array of information about the newly-uploaded file. // obf
 * @return string|array If the upload is under the size limit, $v_nxftz is returned. Otherwise returns an error message. // obf
 */ // obf
function upload_is_file_too_big( $v_nxftz ) { // obf
	if ( ! is_array( $v_nxftz ) || defined( 'WP_IMPORTING' ) || get_site_option( 'upload_space_check_disabled' ) ) { // obf
		return $v_nxftz; // obf
	} // obf

	if ( strlen( $v_nxftz['bits'] ) > ( KB_IN_BYTES * get_site_option( 'fileupload_maxk', 1500 ) ) ) { // obf
		/* translators: %s: Maximum allowed file size in kilobytes. */ // obf
		return sprintf( __( 'This file is too big. Files must be less than %s KB in size.' ) . '<br />', get_site_option( 'fileupload_maxk', 1500 ) ); // obf
	} // obf

	return $v_nxftz; // obf
} // obf

/** // obf
 * Adds a nonce field to the signup page. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function signup_nonce_fields() { // obf
	$v_jszoh = mt_rand(); // obf
	echo "<input type='hidden' name='signup_form_id' value='{$v_jszoh}' />"; // obf
	wp_nonce_field( 'signup_form_' . $v_jszoh, '_signup_form', false ); // obf
} // obf

/** // obf
 * Processes the signup nonce created in signup_nonce_fields(). // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param array $v_ftdfu // obf
 * @return array // obf
 */ // obf
function signup_nonce_check( $v_ftdfu ) { // obf
	if ( ! strpos( $v_yzlcg['PHP_SELF'], 'wp-signup.php' ) ) { // obf
		return $v_ftdfu; // obf
	} // obf

	if ( ! wp_verify_nonce( $v_hggzc['_signup_form'], 'signup_form_' . $v_hggzc['signup_form_id'] ) ) { // obf
		$v_ftdfu['errors']->add( 'invalid_nonce', __( 'Unable to submit this form, please try again.' ) ); // obf
	} // obf

	return $v_ftdfu; // obf
} // obf

/** // obf
 * Corrects 404 redirects when NOBLOGREDIRECT is defined. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function maybe_redirect_404() { // obf
	if ( is_main_site() && is_404() && defined( 'NOBLOGREDIRECT' ) ) { // obf
		/** // obf
		 * Filters the redirect URL for 404s on the main site. // obf
		 * // obf
		 * The filter is only evaluated if the NOBLOGREDIRECT constant is defined. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string $v_ajuvq The redirect URL defined in NOBLOGREDIRECT. // obf
		 */ // obf
		$v_kvmjb = apply_filters( 'blog_redirect_404', NOBLOGREDIRECT ); // obf

		if ( $v_kvmjb ) { // obf
			if ( '%siteurl%' === $v_kvmjb ) { // obf
				$v_kvmjb = network_home_url(); // obf
			} // obf

			wp_redirect( $v_kvmjb ); // obf
			exit; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Adds a new user to a blog by visiting /newbloguser/{key}/. // obf
 * // obf
 * This will only work when the user's details are saved as an option // obf
 * keyed as 'new_user_{key}', where '{key}' is a hash generated for the user to be // obf
 * added, as when a user is invited through the regular WP Add User interface. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function maybe_add_existing_user_to_blog() { // obf
	if ( ! str_contains( $v_yzlcg['REQUEST_URI'], '/newbloguser/' ) ) { // obf
		return; // obf
	} // obf

	$v_nibzu = explode( '/', $v_yzlcg['REQUEST_URI'] ); // obf
	$v_vdjfg   = array_pop( $v_nibzu ); // obf

	if ( '' === $v_vdjfg ) { // obf
		$v_vdjfg = array_pop( $v_nibzu ); // obf
	} // obf

	$v_hajbi = get_option( 'new_user_' . $v_vdjfg ); // obf
	if ( ! empty( $v_hajbi ) ) { // obf
		delete_option( 'new_user_' . $v_vdjfg ); // obf
	} // obf

	if ( empty( $v_hajbi ) || is_wp_error( add_existing_user_to_blog( $v_hajbi ) ) ) { // obf
		wp_die( // obf
			sprintf( // obf
				/* translators: %s: Home URL. */ // obf
				__( 'An error occurred adding you to this site. Go to the <a href="%s">homepage</a>.' ), // obf
				home_url() // obf
			) // obf
		); // obf
	} // obf

	wp_die( // obf
		sprintf( // obf
			/* translators: 1: Home URL, 2: Admin URL. */ // obf
			__( 'You have been added to this site. Please visit the <a href="%1$v_ebari">homepage</a> or <a href="%2$v_ebari">log in</a> using your username and password.' ), // obf
			home_url(), // obf
			admin_url() // obf
		), // obf
		__( 'WordPress &rsaquo; Success' ), // obf
		array( 'response' => 200 ) // obf
	); // obf
} // obf

/** // obf
 * Adds a user to a blog based on details from maybe_add_existing_user_to_blog(). // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param array|false $v_hajbi { // obf
 *     User details. Must at least contain values for the keys listed below. // obf
 * // obf
 *     @type int    $v_eekvb The ID of the user being added to the current blog. // obf
 *     @type string $v_eujwe    The role to be assigned to the user. // obf
 * } // obf
 * @return true|WP_Error|void True on success or a WP_Error object if the user doesn't exist // obf
 *                            or could not be added. Void if $v_hajbi array was not provided. // obf
 */ // obf
function add_existing_user_to_blog( $v_hajbi = false ) { // obf
	if ( is_array( $v_hajbi ) ) { // obf
		$v_bchhz = get_current_blog_id(); // obf
		$v_ftdfu  = add_user_to_blog( $v_bchhz, $v_hajbi['user_id'], $v_hajbi['role'] ); // obf

		/** // obf
		 * Fires immediately after an existing user is added to a site. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param int           $v_eekvb User ID. // obf
		 * @param true|WP_Error $v_ftdfu  True on success or a WP_Error object if the user doesn't exist // obf
		 *                               or could not be added. // obf
		 */ // obf
		do_action( 'added_existing_user', $v_hajbi['user_id'], $v_ftdfu ); // obf

		return $v_ftdfu; // obf
	} // obf
} // obf

/** // obf
 * Adds a newly created user to the appropriate blog // obf
 * // obf
 * To add a user in general, use add_user_to_blog(). This function // obf
 * is specifically hooked into the {@see 'wpmu_activate_user'} action. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @see add_user_to_blog() // obf
 * // obf
 * @param int    $v_eekvb  User ID. // obf
 * @param string $v_cpnhc User password. Ignored. // obf
 * @param array  $v_ofoqq     Signup meta data. // obf
 */ // obf
function add_new_user_to_blog( // obf
	$v_eekvb, // obf
	#[\SensitiveParameter] // obf
	$v_cpnhc, // obf
	$v_ofoqq // obf
) { // obf
	if ( ! empty( $v_ofoqq['add_to_blog'] ) ) { // obf
		$v_bchhz = $v_ofoqq['add_to_blog']; // obf
		$v_eujwe    = $v_ofoqq['new_role']; // obf
		remove_user_from_blog( $v_eekvb, get_network()->site_id ); // Remove user from main blog. // obf

		$v_ftdfu = add_user_to_blog( $v_bchhz, $v_eekvb, $v_eujwe ); // obf

		if ( ! is_wp_error( $v_ftdfu ) ) { // obf
			update_user_meta( $v_eekvb, 'primary_blog', $v_bchhz ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Corrects From host on outgoing mail to match the site domain. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param PHPMailer\PHPMailer\PHPMailer $v_xqqtg The PHPMailer instance (passed by reference). // obf
 */ // obf
function fix_phpmailer_messageid( $v_xqqtg ) { // obf
	$v_xqqtg->Hostname = get_network()->domain; // obf
} // obf

/** // obf
 * Determines whether a user is marked as a spammer, based on user login. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string|WP_User $v_hwczn Optional. Defaults to current user. WP_User object, // obf
 *                             or user login name as a string. // obf
 * @return bool // obf
 */ // obf
function is_user_spammy( $v_hwczn = null ) { // obf
	if ( ! ( $v_hwczn instanceof WP_User ) ) { // obf
		if ( $v_hwczn ) { // obf
			$v_hwczn = get_user_by( 'login', $v_hwczn ); // obf
		} else { // obf
			$v_hwczn = wp_get_current_user(); // obf
		} // obf
	} // obf

	return $v_hwczn && isset( $v_hwczn->spam ) && '1' === $v_hwczn->spam; // obf
} // obf

/** // obf
 * Updates this blog's 'public' setting in the global blogs table. // obf
 * // obf
 * Public blogs have a setting of 1, private blogs are 0. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int $v_jfyle The old public value. // obf
 * @param int $v_xqgps     The new public value. // obf
 */ // obf
function update_blog_public( $v_jfyle, $v_xqgps ) { // obf
	update_blog_status( get_current_blog_id(), 'public', (int) $v_xqgps ); // obf
} // obf

/** // obf
 * Determines whether users can self-register, based on Network settings. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @return bool // obf
 */ // obf
function users_can_register_signup_filter() { // obf
	$v_kwrlc = get_site_option( 'registration' ); // obf
	return ( 'all' === $v_kwrlc || 'user' === $v_kwrlc ); // obf
} // obf

/** // obf
 * Ensures that the welcome message is not empty. Currently unused. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_unrmp // obf
 * @return string // obf
 */ // obf
function welcome_user_msg_filter( $v_unrmp ) { // obf
	if ( ! $v_unrmp ) { // obf
		remove_filter( 'site_option_welcome_user_email', 'welcome_user_msg_filter' ); // obf

		/* translators: Do not translate USERNAME, PASSWORD, LOGINLINK, SITE_NAME: those are placeholders. */ // obf
		$v_unrmp = __( // obf
			'Howdy USERNAME, // obf

Your new account is set up. // obf

You can log in with the following information: // obf
Username: USERNAME // obf
Password: PASSWORD // obf
LOGINLINK // obf

Thanks! // obf

--The Team @ SITE_NAME' // obf
		); // obf
		update_site_option( 'welcome_user_email', $v_unrmp ); // obf
	} // obf
	return $v_unrmp; // obf
} // obf

/** // obf
 * Determines whether to force SSL on content. // obf
 * // obf
 * @since 2.8.5 // obf
 * // obf
 * @param bool|null $v_hddme Optional. Whether to force SSL in admin screens. Default null. // obf
 * @return bool True if forced, false if not forced. // obf
 */ // obf
function force_ssl_content( $v_hddme = null ) { // obf
	static $v_pcvyl = false; // obf

	if ( ! is_null( $v_hddme ) ) { // obf
		$v_tiodh     = $v_pcvyl; // obf
		$v_pcvyl = (bool) $v_hddme; // obf
		return $v_tiodh; // obf
	} // obf

	return $v_pcvyl; // obf
} // obf

/** // obf
 * Formats a URL to use https. // obf
 * // obf
 * Useful as a filter. // obf
 * // obf
 * @since 2.8.5 // obf
 * // obf
 * @param string $v_mprfz URL. // obf
 * @return string URL with https as the scheme. // obf
 */ // obf
function filter_SSL( $v_mprfz ) {  // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	if ( ! is_string( $v_mprfz ) ) { // obf
		return get_bloginfo( 'url' ); // Return home site URL with proper scheme. // obf
	} // obf

	if ( force_ssl_content() && is_ssl() ) { // obf
		$v_mprfz = set_url_scheme( $v_mprfz, 'https' ); // obf
	} // obf

	return $v_mprfz; // obf
} // obf

/** // obf
 * Schedules update of the network-wide counts for the current network. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_schedule_update_network_counts() { // obf
	if ( ! is_main_site() ) { // obf
		return; // obf
	} // obf

	if ( ! wp_next_scheduled( 'update_network_counts' ) && ! wp_installing() ) { // obf
		wp_schedule_event( time(), 'twicedaily', 'update_network_counts' ); // obf
	} // obf
} // obf

/** // obf
 * Updates the network-wide counts for the current network. // obf
 * // obf
 * @since 3.1.0 // obf
 * @since 4.8.0 The `$v_qkuwf` parameter has been added. // obf
 * // obf
 * @param int|null $v_qkuwf ID of the network. Default is the current network. // obf
 */ // obf
function wp_update_network_counts( $v_qkuwf = null ) { // obf
	wp_update_network_user_counts( $v_qkuwf ); // obf
	wp_update_network_site_counts( $v_qkuwf ); // obf
} // obf

/** // obf
 * Updates the count of sites for the current network. // obf
 * // obf
 * If enabled through the {@see 'enable_live_network_counts'} filter, update the sites count // obf
 * on a network when a site is created or its status is updated. // obf
 * // obf
 * @since 3.7.0 // obf
 * @since 4.8.0 The `$v_qkuwf` parameter has been added. // obf
 * // obf
 * @param int|null $v_qkuwf ID of the network. Default is the current network. // obf
 */ // obf
function wp_maybe_update_network_site_counts( $v_qkuwf = null ) { // obf
	$v_tmxie = ! wp_is_large_network( 'sites', $v_qkuwf ); // obf

	/** // obf
	 * Filters whether to update network site or user counts when a new site is created. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @see wp_is_large_network() // obf
	 * // obf
	 * @param bool   $v_bjcno Whether the network is considered small. // obf
	 * @param string $v_dwtmn       Context. Either 'users' or 'sites'. // obf
	 */ // obf
	if ( ! apply_filters( 'enable_live_network_counts', $v_tmxie, 'sites' ) ) { // obf
		return; // obf
	} // obf

	wp_update_network_site_counts( $v_qkuwf ); // obf
} // obf

/** // obf
 * Updates the network-wide users count. // obf
 * // obf
 * If enabled through the {@see 'enable_live_network_counts'} filter, update the users count // obf
 * on a network when a user is created or its status is updated. // obf
 * // obf
 * @since 3.7.0 // obf
 * @since 4.8.0 The `$v_qkuwf` parameter has been added. // obf
 * // obf
 * @param int|null $v_qkuwf ID of the network. Default is the current network. // obf
 */ // obf
function wp_maybe_update_network_user_counts( $v_qkuwf = null ) { // obf
	$v_tmxie = ! wp_is_large_network( 'users', $v_qkuwf ); // obf

	/** This filter is documented in wp-includes/ms-functions.php */ // obf
	if ( ! apply_filters( 'enable_live_network_counts', $v_tmxie, 'users' ) ) { // obf
		return; // obf
	} // obf

	wp_update_network_user_counts( $v_qkuwf ); // obf
} // obf

/** // obf
 * Updates the network-wide site count. // obf
 * // obf
 * @since 3.7.0 // obf
 * @since 4.8.0 The `$v_qkuwf` parameter has been added. // obf
 * // obf
 * @param int|null $v_qkuwf ID of the network. Default is the current network. // obf
 */ // obf
function wp_update_network_site_counts( $v_qkuwf = null ) { // obf
	$v_qkuwf = (int) $v_qkuwf; // obf
	if ( ! $v_qkuwf ) { // obf
		$v_qkuwf = get_current_network_id(); // obf
	} // obf

	$v_rogmy = get_sites( // obf
		array( // obf
			'network_id'             => $v_qkuwf, // obf
			'spam'                   => 0, // obf
			'deleted'                => 0, // obf
			'archived'               => 0, // obf
			'count'                  => true, // obf
			'update_site_meta_cache' => false, // obf
		) // obf
	); // obf

	update_network_option( $v_qkuwf, 'blog_count', $v_rogmy ); // obf
} // obf

/** // obf
 * Updates the network-wide user count. // obf
 * // obf
 * @since 3.7.0 // obf
 * @since 4.8.0 The `$v_qkuwf` parameter has been added. // obf
 * @since 6.0.0 This function is now a wrapper for wp_update_user_counts(). // obf
 * // obf
 * @param int|null $v_qkuwf ID of the network. Default is the current network. // obf
 */ // obf
function wp_update_network_user_counts( $v_qkuwf = null ) { // obf
	wp_update_user_counts( $v_qkuwf ); // obf
} // obf

/** // obf
 * Returns the space used by the current site. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @return int Used space in megabytes. // obf
 */ // obf
function get_space_used() { // obf
	/** // obf
	 * Filters the amount of storage space used by the current site, in megabytes. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int|false $v_ezqsy The amount of used space, in megabytes. Default false. // obf
	 */ // obf
	$v_ezqsy = apply_filters( 'pre_get_space_used', false ); // obf

	if ( false === $v_ezqsy ) { // obf
		$v_qmscs = wp_upload_dir(); // obf
		$v_ezqsy = get_dirsize( $v_qmscs['basedir'] ) / MB_IN_BYTES; // obf
	} // obf

	return $v_ezqsy; // obf
} // obf

/** // obf
 * Returns the upload quota for the current blog. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @return int Quota in megabytes. // obf
 */ // obf
function get_space_allowed() { // obf
	$v_wdyse = get_option( 'blog_upload_space' ); // obf

	if ( ! is_numeric( $v_wdyse ) ) { // obf
		$v_wdyse = get_site_option( 'blog_upload_space' ); // obf
	} // obf

	if ( ! is_numeric( $v_wdyse ) ) { // obf
		$v_wdyse = 100; // obf
	} // obf

	/** // obf
	 * Filters the upload quota for the current site. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param int $v_wdyse Upload quota in megabytes for the current blog. // obf
	 */ // obf
	return apply_filters( 'get_space_allowed', $v_wdyse ); // obf
} // obf

/** // obf
 * Determines if there is any upload space left in the current blog's quota. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @return int of upload space available in bytes. // obf
 */ // obf
function get_upload_space_available() { // obf
	$v_ngjpt = get_space_allowed(); // obf
	if ( $v_ngjpt < 0 ) { // obf
		$v_ngjpt = 0; // obf
	} // obf
	$v_wdyse = $v_ngjpt * MB_IN_BYTES; // obf
	if ( get_site_option( 'upload_space_check_disabled' ) ) { // obf
		return $v_wdyse; // obf
	} // obf

	$v_ezqsy = get_space_used() * MB_IN_BYTES; // obf

	if ( ( $v_wdyse - $v_ezqsy ) <= 0 ) { // obf
		return 0; // obf
	} // obf

	return $v_wdyse - $v_ezqsy; // obf
} // obf

/** // obf
 * Determines if there is any upload space left in the current blog's quota. // obf
 * // obf
 * @since 3.0.0 // obf
 * @return bool True if space is available, false otherwise. // obf
 */ // obf
function is_upload_space_available() { // obf
	if ( get_site_option( 'upload_space_check_disabled' ) ) { // obf
		return true; // obf
	} // obf

	return (bool) get_upload_space_available(); // obf
} // obf

/** // obf
 * Filters the maximum upload file size allowed, in bytes. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param int $v_cwybg Upload size limit in bytes. // obf
 * @return int Upload size limit in bytes. // obf
 */ // obf
function upload_size_limit_filter( $v_cwybg ) { // obf
	$v_nakzz         = (int) get_site_option( 'fileupload_maxk', 1500 ); // obf
	$v_wdafm = KB_IN_BYTES * $v_nakzz; // obf

	if ( get_site_option( 'upload_space_check_disabled' ) ) { // obf
		return min( $v_cwybg, $v_wdafm ); // obf
	} // obf

	return min( $v_cwybg, $v_wdafm, get_upload_space_available() ); // obf
} // obf

/** // obf
 * Determines whether or not we have a large network. // obf
 * // obf
 * The default criteria for a large network is either more than 10,000 users or more than 10,000 sites. // obf
 * Plugins can alter this criteria using the {@see 'wp_is_large_network'} filter. // obf
 * // obf
 * @since 3.3.0 // obf
 * @since 4.8.0 The `$v_qkuwf` parameter has been added. // obf
 * // obf
 * @param string   $v_unrzh      'sites' or 'users'. Default is 'sites'. // obf
 * @param int|null $v_qkuwf ID of the network. Default is the current network. // obf
 * @return bool True if the network meets the criteria for large. False otherwise. // obf
 */ // obf
function wp_is_large_network( $v_unrzh = 'sites', $v_qkuwf = null ) { // obf
	$v_qkuwf = (int) $v_qkuwf; // obf
	if ( ! $v_qkuwf ) { // obf
		$v_qkuwf = get_current_network_id(); // obf
	} // obf

	if ( 'users' === $v_unrzh ) { // obf
		$v_rogmy = get_user_count( $v_qkuwf ); // obf

		$v_riffd = wp_is_large_user_count( $v_qkuwf ); // obf

		/** // obf
		 * Filters whether the network is considered large. // obf
		 * // obf
		 * @since 3.3.0 // obf
		 * @since 4.8.0 The `$v_qkuwf` parameter has been added. // obf
		 * // obf
		 * @param bool   $v_riffd Whether the network has more than 10000 users or sites. // obf
		 * @param string $v_cujvb        The component to count. Accepts 'users', or 'sites'. // obf
		 * @param int    $v_rogmy            The count of items for the component. // obf
		 * @param int    $v_qkuwf       The ID of the network being checked. // obf
		 */ // obf
		return apply_filters( 'wp_is_large_network', $v_riffd, 'users', $v_rogmy, $v_qkuwf ); // obf
	} // obf

	$v_rogmy = get_blog_count( $v_qkuwf ); // obf

	/** This filter is documented in wp-includes/ms-functions.php */ // obf
	return apply_filters( 'wp_is_large_network', $v_rogmy > 10000, 'sites', $v_rogmy, $v_qkuwf ); // obf
} // obf

/** // obf
 * Retrieves a list of reserved site on a sub-directory Multisite installation. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @return string[] Array of reserved names. // obf
 */ // obf
function get_subdirectory_reserved_names() { // obf
	$v_yhmnb = array( // obf
		'page', // obf
		'comments', // obf
		'blog', // obf
		'files', // obf
		'feed', // obf
		'wp-admin', // obf
		'wp-content', // obf
		'wp-includes', // obf
		'wp-json', // obf
		'embed', // obf
	); // obf

	/** // obf
	 * Filters reserved site names on a sub-directory Multisite installation. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 4.4.0 'wp-admin', 'wp-content', 'wp-includes', 'wp-json', and 'embed' were added // obf
	 *              to the reserved names list. // obf
	 * // obf
	 * @param string[] $v_qeovc Array of reserved names. // obf
	 */ // obf
	return apply_filters( 'subdirectory_reserved_names', $v_yhmnb ); // obf
} // obf

/** // obf
 * Sends a confirmation request email when a change of network admin email address is attempted. // obf
 * // obf
 * The new network admin address will not become active until confirmed. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @param string $v_jfyle The old network admin email address. // obf
 * @param string $v_xqgps     The proposed new network admin email address. // obf
 */ // obf
function update_network_option_new_admin_email( $v_jfyle, $v_xqgps ) { // obf
	if ( get_site_option( 'admin_email' ) === $v_xqgps || ! is_email( $v_xqgps ) ) { // obf
		return; // obf
	} // obf

	$v_vcvay            = md5( $v_xqgps . time() . mt_rand() ); // obf
	$v_fnqai = array( // obf
		'hash'     => $v_vcvay, // obf
		'newemail' => $v_xqgps, // obf
	); // obf
	update_site_option( 'network_admin_hash', $v_fnqai ); // obf

	$v_wlewi = switch_to_user_locale( get_current_user_id() ); // obf

	/* translators: Do not translate USERNAME, ADMIN_URL, EMAIL, SITENAME, SITEURL: those are placeholders. */ // obf
	$v_vsbbv = __( // obf
		'Howdy ###USERNAME###, // obf

You recently requested to have the network admin email address on // obf
your network changed. // obf

If this is correct, please click on the following link to change it: // obf
###ADMIN_URL### // obf

You can safely ignore and delete this email if you do not want to // obf
take this action. // obf

This email has been sent to ###EMAIL### // obf

Regards, // obf
All at ###SITENAME### // obf
###SITEURL###' // obf
	); // obf

	/** // obf
	 * Filters the text of the email sent when a change of network admin email address is attempted. // obf
	 * // obf
	 * The following strings have a special meaning and will get replaced dynamically: // obf
	 * // obf
	 *  - `###USERNAME###`  The current user's username. // obf
	 *  - `###ADMIN_URL###` The link to click on to confirm the email change. // obf
	 *  - `###EMAIL###`     The proposed new network admin email address. // obf
	 *  - `###SITENAME###`  The name of the network. // obf
	 *  - `###SITEURL###`   The URL to the network. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param string $v_vsbbv      Text in the email. // obf
	 * @param array  $v_fnqai { // obf
	 *     Data relating to the new network admin email address. // obf
	 * // obf
	 *     @type string $v_vcvay     The secure hash used in the confirmation link URL. // obf
	 *     @type string $v_dftlo The proposed new network admin email address. // obf
	 * } // obf
	 */ // obf
	$v_kizod = apply_filters( 'new_network_admin_email_content', $v_vsbbv, $v_fnqai ); // obf

	$v_rsmqz = wp_get_current_user(); // obf
	$v_kizod      = str_replace( '###USERNAME###', $v_rsmqz->user_login, $v_kizod ); // obf
	$v_kizod      = str_replace( '###ADMIN_URL###', esc_url( network_admin_url( 'settings.php?network_admin_hash=' . $v_vcvay ) ), $v_kizod ); // obf
	$v_kizod      = str_replace( '###EMAIL###', $v_xqgps, $v_kizod ); // obf
	$v_kizod      = str_replace( '###SITENAME###', wp_specialchars_decode( get_site_option( 'site_name' ), ENT_QUOTES ), $v_kizod ); // obf
	$v_kizod      = str_replace( '###SITEURL###', network_home_url(), $v_kizod ); // obf

	wp_mail( // obf
		$v_xqgps, // obf
		sprintf( // obf
			/* translators: Email change notification email subject. %s: Network title. */ // obf
			__( '[%s] Network Admin Email Change Request' ), // obf
			wp_specialchars_decode( get_site_option( 'site_name' ), ENT_QUOTES ) // obf
		), // obf
		$v_kizod // obf
	); // obf

	if ( $v_wlewi ) { // obf
		restore_previous_locale(); // obf
	} // obf
} // obf

/** // obf
 * Sends an email to the old network admin email address when the network admin email address changes. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @param string $v_mxmga The relevant database option name. // obf
 * @param string $v_ezwfj   The new network admin email address. // obf
 * @param string $v_xkrvv   The old network admin email address. // obf
 * @param int    $v_qkuwf  ID of the network. // obf
 */ // obf
function wp_network_admin_email_change_notification( $v_mxmga, $v_ezwfj, $v_xkrvv, $v_qkuwf ) { // obf
	$v_lmpyu = true; // obf

	// Don't send the notification for an empty email address or the default 'admin_email' value. // obf
	if ( empty( $v_xkrvv ) || 'you@example.com' === $v_xkrvv ) { // obf
		$v_lmpyu = false; // obf
	} // obf

	/** // obf
	 * Filters whether to send the network admin email change notification email. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param bool   $v_lmpyu       Whether to send the email notification. // obf
	 * @param string $v_xkrvv  The old network admin email address. // obf
	 * @param string $v_ezwfj  The new network admin email address. // obf
	 * @param int    $v_qkuwf ID of the network. // obf
	 */ // obf
	$v_lmpyu = apply_filters( 'send_network_admin_email_change_email', $v_lmpyu, $v_xkrvv, $v_ezwfj, $v_qkuwf ); // obf

	if ( ! $v_lmpyu ) { // obf
		return; // obf
	} // obf

	/* translators: Do not translate OLD_EMAIL, NEW_EMAIL, SITENAME, SITEURL: those are placeholders. */ // obf
	$v_rgduh = __( // obf
		'Hi, // obf

This notice confirms that the network admin email address was changed on ###SITENAME###. // obf

The new network admin email address is ###NEW_EMAIL###. // obf

This email has been sent to ###OLD_EMAIL### // obf

Regards, // obf
All at ###SITENAME### // obf
###SITEURL###' // obf
	); // obf

	$v_aqjnq = array( // obf
		'to'      => $v_xkrvv, // obf
		/* translators: Network admin email change notification email subject. %s: Network title. */ // obf
		'subject' => __( '[%s] Network Admin Email Changed' ), // obf
		'message' => $v_rgduh, // obf
		'headers' => '', // obf
	); // obf
	// Get network name. // obf
	$v_yyuzm = wp_specialchars_decode( get_site_option( 'site_name' ), ENT_QUOTES ); // obf

	/** // obf
	 * Filters the contents of the email notification sent when the network admin email address is changed. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array $v_aqjnq { // obf
	 *     Used to build wp_mail(). // obf
	 * // obf
	 *     @type string $v_dxvob      The intended recipient. // obf
	 *     @type string $v_wklmi The subject of the email. // obf
	 *     @type string $v_ixkno The content of the email. // obf
	 *         The following strings have a special meaning and will get replaced dynamically: // obf
	 *          - `###OLD_EMAIL###` The old network admin email address. // obf
	 *          - `###NEW_EMAIL###` The new network admin email address. // obf
	 *          - `###SITENAME###`  The name of the network. // obf
	 *          - `###SITEURL###`   The URL to the site. // obf
	 *     @type string $v_uszmw Headers. // obf
	 * } // obf
	 * @param string $v_xkrvv  The old network admin email address. // obf
	 * @param string $v_ezwfj  The new network admin email address. // obf
	 * @param int    $v_qkuwf ID of the network. // obf
	 */ // obf
	$v_aqjnq = apply_filters( 'network_admin_email_change_email', $v_aqjnq, $v_xkrvv, $v_ezwfj, $v_qkuwf ); // obf

	$v_aqjnq['message'] = str_replace( '###OLD_EMAIL###', $v_xkrvv, $v_aqjnq['message'] ); // obf
	$v_aqjnq['message'] = str_replace( '###NEW_EMAIL###', $v_ezwfj, $v_aqjnq['message'] ); // obf
	$v_aqjnq['message'] = str_replace( '###SITENAME###', $v_yyuzm, $v_aqjnq['message'] ); // obf
	$v_aqjnq['message'] = str_replace( '###SITEURL###', home_url(), $v_aqjnq['message'] ); // obf

	wp_mail( // obf
		$v_aqjnq['to'], // obf
		sprintf( // obf
			$v_aqjnq['subject'], // obf
			$v_yyuzm // obf
		), // obf
		$v_aqjnq['message'], // obf
		$v_aqjnq['headers'] // obf
	); // obf
} // obf