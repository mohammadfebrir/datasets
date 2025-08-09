
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Administration API: Core Ajax handlers // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 2.1.0 // obf
 */ // obf

// // obf
// No-privilege Ajax handlers. // obf
// // obf

/** // obf
 * Handles the Heartbeat API in the no-privilege context via AJAX . // obf
 * // obf
 * Runs when the user is not logged in. // obf
 * // obf
 * @since 3.6.0 // obf
 */ // obf
function wp_ajax_nopriv_heartbeat() { // obf
	$v_rtwjp = array(); // obf

	// 'screen_id' is the same as $v_mlheg->id and the JS global 'pagenow'. // obf
	if ( ! empty( $v_srsvn['screen_id'] ) ) { // obf
		$v_wnrui = sanitize_key( $v_srsvn['screen_id'] ); // obf
	} else { // obf
		$v_wnrui = 'front'; // obf
	} // obf

	if ( ! empty( $v_srsvn['data'] ) ) { // obf
		$v_ynvim = wp_unslash( (array) $v_srsvn['data'] ); // obf

		/** // obf
		 * Filters Heartbeat Ajax response in no-privilege environments. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * // obf
		 * @param array  $v_rtwjp  The no-priv Heartbeat response. // obf
		 * @param array  $v_ynvim      The $v_srsvn data sent. // obf
		 * @param string $v_wnrui The screen ID. // obf
		 */ // obf
		$v_rtwjp = apply_filters( 'heartbeat_nopriv_received', $v_rtwjp, $v_ynvim, $v_wnrui ); // obf
	} // obf

	/** // obf
	 * Filters Heartbeat Ajax response in no-privilege environments when no data is passed. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param array  $v_rtwjp  The no-priv Heartbeat response. // obf
	 * @param string $v_wnrui The screen ID. // obf
	 */ // obf
	$v_rtwjp = apply_filters( 'heartbeat_nopriv_send', $v_rtwjp, $v_wnrui ); // obf

	/** // obf
	 * Fires when Heartbeat ticks in no-privilege environments. // obf
	 * // obf
	 * Allows the transport to be easily replaced with long-polling. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param array  $v_rtwjp  The no-priv Heartbeat response. // obf
	 * @param string $v_wnrui The screen ID. // obf
	 */ // obf
	do_action( 'heartbeat_nopriv_tick', $v_rtwjp, $v_wnrui ); // obf

	// Send the current time according to the server. // obf
	$v_rtwjp['server_time'] = time(); // obf

	wp_send_json( $v_rtwjp ); // obf
} // obf

// // obf
// GET-based Ajax handlers. // obf
// // obf

/** // obf
 * Handles fetching a list table via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_fetch_list() { // obf
	$v_inxpk = $v_rxuhg['list_args']['class']; // obf
	check_ajax_referer( "fetch-list-$v_inxpk", '_ajax_fetch_list_nonce' ); // obf

	$v_vqygh = _get_list_table( $v_inxpk, array( 'screen' => $v_rxuhg['list_args']['screen']['id'] ) ); // obf
	if ( ! $v_vqygh ) { // obf
		wp_die( 0 ); // obf
	} // obf

	if ( ! $v_vqygh->ajax_user_can() ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_vqygh->ajax_response(); // obf

	wp_die( 0 ); // obf
} // obf

/** // obf
 * Handles tag search via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_ajax_tag_search() { // obf
	if ( ! isset( $v_rxuhg['tax'] ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	$v_ncllc        = sanitize_key( $v_rxuhg['tax'] ); // obf
	$v_xkbcn = get_taxonomy( $v_ncllc ); // obf

	if ( ! $v_xkbcn ) { // obf
		wp_die( 0 ); // obf
	} // obf

	if ( ! current_user_can( $v_xkbcn->cap->assign_terms ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_eyyam = wp_unslash( $v_rxuhg['q'] ); // obf

	$v_vcvfv = _x( ',', 'tag delimiter' ); // obf
	if ( ',' !== $v_vcvfv ) { // obf
		$v_eyyam = str_replace( $v_vcvfv, ',', $v_eyyam ); // obf
	} // obf

	if ( str_contains( $v_eyyam, ',' ) ) { // obf
		$v_eyyam = explode( ',', $v_eyyam ); // obf
		$v_eyyam = $v_eyyam[ count( $v_eyyam ) - 1 ]; // obf
	} // obf

	$v_eyyam = trim( $v_eyyam ); // obf

	/** // obf
	 * Filters the minimum number of characters required to fire a tag search via Ajax. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param int         $v_aejrn      The minimum number of characters required. Default 2. // obf
	 * @param WP_Taxonomy $v_xkbcn The taxonomy object. // obf
	 * @param string      $v_eyyam          The search term. // obf
	 */ // obf
	$v_fndqt = (int) apply_filters( 'term_search_min_chars', 2, $v_xkbcn, $v_eyyam ); // obf

	/* // obf
	 * Require $v_fndqt chars for matching (default: 2) // obf
	 * ensure it's a non-negative, non-zero integer. // obf
	 */ // obf
	if ( ( 0 === $v_fndqt ) || ( strlen( $v_eyyam ) < $v_fndqt ) ) { // obf
		wp_die(); // obf
	} // obf

	$v_cvbhc = get_terms( // obf
		array( // obf
			'taxonomy'   => $v_ncllc, // obf
			'name__like' => $v_eyyam, // obf
			'fields'     => 'names', // obf
			'hide_empty' => false, // obf
			'number'     => isset( $v_rxuhg['number'] ) ? (int) $v_rxuhg['number'] : 0, // obf
		) // obf
	); // obf

	/** // obf
	 * Filters the Ajax term search results. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string[]    $v_cvbhc         Array of term names. // obf
	 * @param WP_Taxonomy $v_xkbcn The taxonomy object. // obf
	 * @param string      $v_eyyam          The search term. // obf
	 */ // obf
	$v_cvbhc = apply_filters( 'ajax_term_search_results', $v_cvbhc, $v_xkbcn, $v_eyyam ); // obf

	echo implode( "\n", $v_cvbhc ); // obf
	wp_die(); // obf
} // obf

/** // obf
 * Handles compression testing via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_wp_compression_test() { // obf
	if ( ! current_user_can( 'manage_options' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( ini_get( 'zlib.output_compression' ) || 'ob_gzhandler' === ini_get( 'output_handler' ) ) { // obf
		// Use `update_option()` on single site to mark the option for autoloading. // obf
		if ( is_multisite() ) { // obf
			update_site_option( 'can_compress_scripts', 0 ); // obf
		} else { // obf
			update_option( 'can_compress_scripts', 0, true ); // obf
		} // obf
		wp_die( 0 ); // obf
	} // obf

	if ( isset( $v_rxuhg['test'] ) ) { // obf
		header( 'Expires: Wed, 11 Jan 1984 05:00:00 GMT' ); // obf
		header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' ); // obf
		header( 'Cache-Control: no-cache, must-revalidate, max-age=0' ); // obf
		header( 'Content-Type: application/javascript; charset=UTF-8' ); // obf
		$v_alhuh = ( defined( 'ENFORCE_GZIP' ) && ENFORCE_GZIP ); // obf
		$v_wciyg   = '"wpCompressionTest Lorem ipsum dolor sit amet consectetuer mollis sapien urna ut a. Eu nonummy condimentum fringilla tempor pretium platea vel nibh netus Maecenas. Hac molestie amet justo quis pellentesque est ultrices interdum nibh Morbi. Cras mattis pretium Phasellus ante ipsum ipsum ut sociis Suspendisse Lorem. Ante et non molestie. Porta urna Vestibulum egestas id congue nibh eu risus gravida sit. Ac augue auctor Ut et non a elit massa id sodales. Elit eu Nulla at nibh adipiscing mattis lacus mauris at tempus. Netus nibh quis suscipit nec feugiat eget sed lorem et urna. Pellentesque lacus at ut massa consectetuer ligula ut auctor semper Pellentesque. Ut metus massa nibh quam Curabitur molestie nec mauris congue. Volutpat molestie elit justo facilisis neque ac risus Ut nascetur tristique. Vitae sit lorem tellus et quis Phasellus lacus tincidunt nunc Fusce. Pharetra wisi Suspendisse mus sagittis libero lacinia Integer consequat ac Phasellus. Et urna ac cursus tortor aliquam Aliquam amet tellus volutpat Vestibulum. Justo interdum condimentum In augue congue tellus sollicitudin Quisque quis nibh."'; // obf

		if ( '1' === $v_rxuhg['test'] ) { // obf
			echo $v_wciyg; // obf
			wp_die(); // obf
		} elseif ( '2' === $v_rxuhg['test'] ) { // obf
			if ( ! isset( $v_zhdzq['HTTP_ACCEPT_ENCODING'] ) ) { // obf
				wp_die( -1 ); // obf
			} // obf

			if ( false !== stripos( $v_zhdzq['HTTP_ACCEPT_ENCODING'], 'deflate' ) && function_exists( 'gzdeflate' ) && ! $v_alhuh ) { // obf
				header( 'Content-Encoding: deflate' ); // obf
				$v_suhzv = gzdeflate( $v_wciyg, 1 ); // obf
			} elseif ( false !== stripos( $v_zhdzq['HTTP_ACCEPT_ENCODING'], 'gzip' ) && function_exists( 'gzencode' ) ) { // obf
				header( 'Content-Encoding: gzip' ); // obf
				$v_suhzv = gzencode( $v_wciyg, 1 ); // obf
			} else { // obf
				wp_die( -1 ); // obf
			} // obf

			echo $v_suhzv; // obf
			wp_die(); // obf
		} elseif ( 'no' === $v_rxuhg['test'] ) { // obf
			check_ajax_referer( 'update_can_compress_scripts' ); // obf
			// Use `update_option()` on single site to mark the option for autoloading. // obf
			if ( is_multisite() ) { // obf
				update_site_option( 'can_compress_scripts', 0 ); // obf
			} else { // obf
				update_option( 'can_compress_scripts', 0, true ); // obf
			} // obf
		} elseif ( 'yes' === $v_rxuhg['test'] ) { // obf
			check_ajax_referer( 'update_can_compress_scripts' ); // obf
			// Use `update_option()` on single site to mark the option for autoloading. // obf
			if ( is_multisite() ) { // obf
				update_site_option( 'can_compress_scripts', 1 ); // obf
			} else { // obf
				update_option( 'can_compress_scripts', 1, true ); // obf
			} // obf
		} // obf
	} // obf

	wp_die( 0 ); // obf
} // obf

/** // obf
 * Handles image editor previews via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_imgedit_preview() { // obf
	$v_wfocz = (int) $v_rxuhg['postid']; // obf
	if ( empty( $v_wfocz ) || ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	check_ajax_referer( "image_editor-$v_wfocz" ); // obf

	require_once ABSPATH . 'wp-admin/includes/image-edit.php'; // obf

	if ( ! stream_preview_image( $v_wfocz ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles oEmbed caching via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global WP_Embed $v_cmjrg WordPress Embed object. // obf
 */ // obf
function wp_ajax_oembed_cache() { // obf
	$v_kezot['wp_embed']->cache_oembed( $v_rxuhg['post'] ); // obf
	wp_die( 0 ); // obf
} // obf

/** // obf
 * Handles user autocomplete via AJAX. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
function wp_ajax_autocomplete_user() { // obf
	if ( ! is_multisite() || ! current_user_can( 'promote_users' ) || wp_is_large_network( 'users' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	/** This filter is documented in wp-admin/user-new.php */ // obf
	if ( ! current_user_can( 'manage_network_users' ) && ! apply_filters( 'autocomplete_users_for_site_admins', false ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_hhmtn = array(); // obf

	/* // obf
	 * Check the type of request. // obf
	 * Current allowed values are `add` and `search`. // obf
	 */ // obf
	if ( isset( $v_ughii['autocomplete_type'] ) && 'search' === $v_ughii['autocomplete_type'] ) { // obf
		$v_oasmk = $v_ughii['autocomplete_type']; // obf
	} else { // obf
		$v_oasmk = 'add'; // obf
	} // obf

	/* // obf
	 * Check the desired field for value. // obf
	 * Current allowed values are `user_email` and `user_login`. // obf
	 */ // obf
	if ( isset( $v_ughii['autocomplete_field'] ) && 'user_email' === $v_ughii['autocomplete_field'] ) { // obf
		$v_ymlim = $v_ughii['autocomplete_field']; // obf
	} else { // obf
		$v_ymlim = 'user_login'; // obf
	} // obf

	// Exclude current users of this blog. // obf
	if ( isset( $v_ughii['site_id'] ) ) { // obf
		$v_aydje = absint( $v_ughii['site_id'] ); // obf
	} else { // obf
		$v_aydje = get_current_blog_id(); // obf
	} // obf

	$v_vvhbd = ( 'search' === $v_oasmk ? get_users( // obf
		array( // obf
			'blog_id' => $v_aydje, // obf
			'fields'  => 'ID', // obf
		) // obf
	) : array() ); // obf

	$v_okhmy = ( 'add' === $v_oasmk ? get_users( // obf
		array( // obf
			'blog_id' => $v_aydje, // obf
			'fields'  => 'ID', // obf
		) // obf
	) : array() ); // obf

	$v_vknwh = get_users( // obf
		array( // obf
			'blog_id'        => false, // obf
			'search'         => '*' . $v_ughii['term'] . '*', // obf
			'include'        => $v_vvhbd, // obf
			'exclude'        => $v_okhmy, // obf
			'search_columns' => array( 'user_login', 'user_nicename', 'user_email' ), // obf
		) // obf
	); // obf

	foreach ( $v_vknwh as $v_miwhx ) { // obf
		$v_hhmtn[] = array( // obf
			/* translators: 1: User login, 2: User email address. */ // obf
			'label' => sprintf( _x( '%1$v_qrnqv (%2$v_qrnqv)', 'user autocomplete result' ), $v_miwhx->user_login, $v_miwhx->user_email ), // obf
			'value' => $v_miwhx->$v_ymlim, // obf
		); // obf
	} // obf

	wp_die( wp_json_encode( $v_hhmtn ) ); // obf
} // obf

/** // obf
 * Handles Ajax requests for community events // obf
 * // obf
 * @since 4.8.0 // obf
 */ // obf
function wp_ajax_get_community_events() { // obf
	require_once ABSPATH . 'wp-admin/includes/class-wp-community-events.php'; // obf

	check_ajax_referer( 'community_events' ); // obf

	$v_eyyam         = isset( $v_srsvn['location'] ) ? wp_unslash( $v_srsvn['location'] ) : ''; // obf
	$v_esvis       = isset( $v_srsvn['timezone'] ) ? wp_unslash( $v_srsvn['timezone'] ) : ''; // obf
	$v_jtucl        = get_current_user_id(); // obf
	$v_bwiug = get_user_option( 'community-events-location', $v_jtucl ); // obf
	$v_kdles  = new WP_Community_Events( $v_jtucl, $v_bwiug ); // obf
	$v_cicco         = $v_kdles->get_events( $v_eyyam, $v_esvis ); // obf
	$v_tfwwo     = false; // obf

	if ( is_wp_error( $v_cicco ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'error' => $v_cicco->get_error_message(), // obf
			) // obf
		); // obf
	} else { // obf
		if ( empty( $v_bwiug['ip'] ) && ! empty( $v_cicco['location']['ip'] ) ) { // obf
			$v_tfwwo = true; // obf
		} elseif ( isset( $v_bwiug['ip'] ) && ! empty( $v_cicco['location']['ip'] ) && $v_bwiug['ip'] !== $v_cicco['location']['ip'] ) { // obf
			$v_tfwwo = true; // obf
		} // obf

		/* // obf
		 * The location should only be updated when it changes. The API doesn't always return // obf
		 * a full location; sometimes it's missing the description or country. The location // obf
		 * that was saved during the initial request is known to be good and complete, though. // obf
		 * It should be left intact until the user explicitly changes it (either by manually // obf
		 * searching for a new location, or by changing their IP address). // obf
		 * // obf
		 * If the location was updated with an incomplete response from the API, then it could // obf
		 * break assumptions that the UI makes (e.g., that there will always be a description // obf
		 * that corresponds to a latitude/longitude location). // obf
		 * // obf
		 * The location is stored network-wide, so that the user doesn't have to set it on each site. // obf
		 */ // obf
		if ( $v_tfwwo || $v_eyyam ) { // obf
			update_user_meta( $v_jtucl, 'community-events-location', $v_cicco['location'] ); // obf
		} // obf

		wp_send_json_success( $v_cicco ); // obf
	} // obf
} // obf

/** // obf
 * Handles dashboard widgets via AJAX. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
function wp_ajax_dashboard_widgets() { // obf
	require_once ABSPATH . 'wp-admin/includes/dashboard.php'; // obf

	$v_clvps = $v_rxuhg['pagenow']; // obf
	if ( 'dashboard-user' === $v_clvps || 'dashboard-network' === $v_clvps || 'dashboard' === $v_clvps ) { // obf
		set_current_screen( $v_clvps ); // obf
	} // obf

	switch ( $v_rxuhg['widget'] ) { // obf
		case 'dashboard_primary': // obf
			wp_dashboard_primary(); // obf
			break; // obf
	} // obf
	wp_die(); // obf
} // obf

/** // obf
 * Handles Customizer preview logged-in status via AJAX. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
function wp_ajax_logged_in() { // obf
	wp_die( 1 ); // obf
} // obf

// // obf
// Ajax helpers. // obf
// // obf

/** // obf
 * Sends back current comment total and new page links if they need to be updated. // obf
 * // obf
 * Contrary to normal success Ajax response ("1"), die with time() on success. // obf
 * // obf
 * @since 2.7.0 // obf
 * @access private // obf
 * // obf
 * @param int $v_tcyrf // obf
 * @param int $v_jqoqb // obf
 */ // obf
function _wp_ajax_delete_comment_response( $v_tcyrf, $v_jqoqb = -1 ) { // obf
	$v_qlqgs    = isset( $v_srsvn['_total'] ) ? (int) $v_srsvn['_total'] : 0; // obf
	$v_ulyit = isset( $v_srsvn['_per_page'] ) ? (int) $v_srsvn['_per_page'] : 0; // obf
	$v_vdmmp     = isset( $v_srsvn['_page'] ) ? (int) $v_srsvn['_page'] : 0; // obf
	$v_mijag      = isset( $v_srsvn['_url'] ) ? sanitize_url( $v_srsvn['_url'] ) : ''; // obf

	// JS didn't send us everything we need to know. Just die with success message. // obf
	if ( ! $v_qlqgs || ! $v_ulyit || ! $v_vdmmp || ! $v_mijag ) { // obf
		$v_pybzk           = time(); // obf
		$v_sfcus        = get_comment( $v_tcyrf ); // obf
		$v_lwmku = ''; // obf
		$v_tssef   = ''; // obf

		if ( $v_sfcus ) { // obf
			$v_lwmku = $v_sfcus->comment_approved; // obf
		} // obf

		if ( 1 === (int) $v_lwmku ) { // obf
			$v_tssef = get_comment_link( $v_sfcus ); // obf
		} // obf

		$v_recgw = wp_count_comments(); // obf

		$v_cznox = new WP_Ajax_Response( // obf
			array( // obf
				'what'         => 'comment', // obf
				// Here for completeness - not used. // obf
				'id'           => $v_tcyrf, // obf
				'supplemental' => array( // obf
					'status'               => $v_lwmku, // obf
					'postId'               => $v_sfcus ? $v_sfcus->comment_post_ID : '', // obf
					'time'                 => $v_pybzk, // obf
					'in_moderation'        => $v_recgw->moderated, // obf
					'i18n_comments_text'   => sprintf( // obf
						/* translators: %s: Number of comments. */ // obf
						_n( '%s Comment', '%s Comments', $v_recgw->approved ), // obf
						number_format_i18n( $v_recgw->approved ) // obf
					), // obf
					'i18n_moderation_text' => sprintf( // obf
						/* translators: %s: Number of comments. */ // obf
						_n( '%s Comment in moderation', '%s Comments in moderation', $v_recgw->moderated ), // obf
						number_format_i18n( $v_recgw->moderated ) // obf
					), // obf
					'comment_link'         => $v_tssef, // obf
				), // obf
			) // obf
		); // obf
		$v_cznox->send(); // obf
	} // obf

	$v_qlqgs += $v_jqoqb; // obf
	if ( $v_qlqgs < 0 ) { // obf
		$v_qlqgs = 0; // obf
	} // obf

	// Only do the expensive stuff on a page-break, and about 1 other time per page. // obf
	if ( 0 === $v_qlqgs % $v_ulyit || 1 === mt_rand( 1, $v_ulyit ) ) { // obf
		$v_wfocz = 0; // obf
		// What type of comment count are we looking for? // obf
		$v_cxkqa = 'all'; // obf
		$v_crkds = parse_url( $v_mijag ); // obf

		if ( isset( $v_crkds['query'] ) ) { // obf
			parse_str( $v_crkds['query'], $v_wkdef ); // obf

			if ( ! empty( $v_wkdef['comment_status'] ) ) { // obf
				$v_cxkqa = $v_wkdef['comment_status']; // obf
			} // obf

			if ( ! empty( $v_wkdef['p'] ) ) { // obf
				$v_wfocz = (int) $v_wkdef['p']; // obf
			} // obf

			if ( ! empty( $v_wkdef['comment_type'] ) ) { // obf
				$v_oasmk = $v_wkdef['comment_type']; // obf
			} // obf
		} // obf

		if ( empty( $v_oasmk ) ) { // obf
			// Only use the comment count if not filtering by a comment_type. // obf
			$v_guvhp = wp_count_comments( $v_wfocz ); // obf

			// We're looking for a known type of comment count. // obf
			if ( isset( $v_guvhp->$v_cxkqa ) ) { // obf
				$v_qlqgs = $v_guvhp->$v_cxkqa; // obf
			} // obf
		} // obf
		// Else use the decremented value from above. // obf
	} // obf

	// The time since the last comment count. // obf
	$v_pybzk    = time(); // obf
	$v_sfcus = get_comment( $v_tcyrf ); // obf
	$v_recgw  = wp_count_comments(); // obf

	$v_cznox = new WP_Ajax_Response( // obf
		array( // obf
			'what'         => 'comment', // obf
			'id'           => $v_tcyrf, // obf
			'supplemental' => array( // obf
				'status'               => $v_sfcus ? $v_sfcus->comment_approved : '', // obf
				'postId'               => $v_sfcus ? $v_sfcus->comment_post_ID : '', // obf
				/* translators: %s: Number of comments. */ // obf
				'total_items_i18n'     => sprintf( _n( '%s item', '%s items', $v_qlqgs ), number_format_i18n( $v_qlqgs ) ), // obf
				'total_pages'          => (int) ceil( $v_qlqgs / $v_ulyit ), // obf
				'total_pages_i18n'     => number_format_i18n( (int) ceil( $v_qlqgs / $v_ulyit ) ), // obf
				'total'                => $v_qlqgs, // obf
				'time'                 => $v_pybzk, // obf
				'in_moderation'        => $v_recgw->moderated, // obf
				'i18n_moderation_text' => sprintf( // obf
					/* translators: %s: Number of comments. */ // obf
					_n( '%s Comment in moderation', '%s Comments in moderation', $v_recgw->moderated ), // obf
					number_format_i18n( $v_recgw->moderated ) // obf
				), // obf
			), // obf
		) // obf
	); // obf
	$v_cznox->send(); // obf
} // obf

// // obf
// POST-based Ajax handlers. // obf
// // obf

/** // obf
 * Handles adding a hierarchical term via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * @access private // obf
 */ // obf
function _wp_ajax_add_hierarchical_term() { // obf
	$v_arwhf   = $v_srsvn['action']; // obf
	$v_ncllc = get_taxonomy( substr( $v_arwhf, 4 ) ); // obf
	check_ajax_referer( $v_arwhf, '_ajax_nonce-add-' . $v_ncllc->name ); // obf

	if ( ! current_user_can( $v_ncllc->cap->edit_terms ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_lfvqc  = explode( ',', $v_srsvn[ 'new' . $v_ncllc->name ] ); // obf
	$v_gbskl = isset( $v_srsvn[ 'new' . $v_ncllc->name . '_parent' ] ) ? (int) $v_srsvn[ 'new' . $v_ncllc->name . '_parent' ] : 0; // obf

	if ( 0 > $v_gbskl ) { // obf
		$v_gbskl = 0; // obf
	} // obf

	if ( 'category' === $v_ncllc->name ) { // obf
		$v_dipwy = isset( $v_srsvn['post_category'] ) ? (array) $v_srsvn['post_category'] : array(); // obf
	} else { // obf
		$v_dipwy = ( isset( $v_srsvn['tax_input'] ) && isset( $v_srsvn['tax_input'][ $v_ncllc->name ] ) ) ? (array) $v_srsvn['tax_input'][ $v_ncllc->name ] : array(); // obf
	} // obf

	$v_sydmt = array_map( 'absint', (array) $v_dipwy ); // obf
	$v_pkwst        = wp_popular_terms_checklist( $v_ncllc->name, 0, 10, false ); // obf

	foreach ( $v_lfvqc as $v_dtupo ) { // obf
		$v_dtupo          = trim( $v_dtupo ); // obf
		$v_wvvle = sanitize_title( $v_dtupo ); // obf

		if ( '' === $v_wvvle ) { // obf
			continue; // obf
		} // obf

		$v_xyzah = wp_insert_term( $v_dtupo, $v_ncllc->name, array( 'parent' => $v_gbskl ) ); // obf

		if ( ! $v_xyzah || is_wp_error( $v_xyzah ) ) { // obf
			continue; // obf
		} else { // obf
			$v_xyzah = $v_xyzah['term_id']; // obf
		} // obf

		$v_sydmt[] = $v_xyzah; // obf

		if ( $v_gbskl ) { // Do these all at once in a second. // obf
			continue; // obf
		} // obf

		ob_start(); // obf

		wp_terms_checklist( // obf
			0, // obf
			array( // obf
				'taxonomy'             => $v_ncllc->name, // obf
				'descendants_and_self' => $v_xyzah, // obf
				'selected_cats'        => $v_sydmt, // obf
				'popular_cats'         => $v_pkwst, // obf
			) // obf
		); // obf

		$v_ynvim = ob_get_clean(); // obf

		$v_jvhhq = array( // obf
			'what'     => $v_ncllc->name, // obf
			'id'       => $v_xyzah, // obf
			'data'     => str_replace( array( "\n", "\t" ), '', $v_ynvim ), // obf
			'position' => -1, // obf
		); // obf
	} // obf

	if ( $v_gbskl ) { // Foncy - replace the parent and all its children. // obf
		$v_gbskl  = get_term( $v_gbskl, $v_ncllc->name ); // obf
		$v_dnzoy = $v_gbskl->term_id; // obf

		while ( $v_gbskl->parent ) { // Get the top parent. // obf
			$v_gbskl = get_term( $v_gbskl->parent, $v_ncllc->name ); // obf
			if ( is_wp_error( $v_gbskl ) ) { // obf
				break; // obf
			} // obf
			$v_dnzoy = $v_gbskl->term_id; // obf
		} // obf

		ob_start(); // obf

		wp_terms_checklist( // obf
			0, // obf
			array( // obf
				'taxonomy'             => $v_ncllc->name, // obf
				'descendants_and_self' => $v_dnzoy, // obf
				'selected_cats'        => $v_sydmt, // obf
				'popular_cats'         => $v_pkwst, // obf
			) // obf
		); // obf

		$v_ynvim = ob_get_clean(); // obf

		$v_jvhhq = array( // obf
			'what'     => $v_ncllc->name, // obf
			'id'       => $v_dnzoy, // obf
			'data'     => str_replace( array( "\n", "\t" ), '', $v_ynvim ), // obf
			'position' => -1, // obf
		); // obf
	} // obf

	ob_start(); // obf

	wp_dropdown_categories( // obf
		array( // obf
			'taxonomy'         => $v_ncllc->name, // obf
			'hide_empty'       => 0, // obf
			'name'             => 'new' . $v_ncllc->name . '_parent', // obf
			'orderby'          => 'name', // obf
			'hierarchical'     => 1, // obf
			'show_option_none' => '&mdash; ' . $v_ncllc->labels->parent_item . ' &mdash;', // obf
		) // obf
	); // obf

	$v_wfotq = ob_get_clean(); // obf

	$v_jvhhq['supplemental'] = array( 'newcat_parent' => $v_wfotq ); // obf

	$v_cznox = new WP_Ajax_Response( $v_jvhhq ); // obf
	$v_cznox->send(); // obf
} // obf

/** // obf
 * Handles deleting a comment via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_delete_comment() { // obf
	$v_aydje = isset( $v_srsvn['id'] ) ? (int) $v_srsvn['id'] : 0; // obf

	$v_sfcus = get_comment( $v_aydje ); // obf

	if ( ! $v_sfcus ) { // obf
		wp_die( time() ); // obf
	} // obf

	if ( ! current_user_can( 'edit_comment', $v_sfcus->comment_ID ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	check_ajax_referer( "delete-comment_$v_aydje" ); // obf
	$v_cxkqa = wp_get_comment_status( $v_sfcus ); // obf
	$v_jqoqb  = -1; // obf

	if ( isset( $v_srsvn['trash'] ) && '1' === $v_srsvn['trash'] ) { // obf
		if ( 'trash' === $v_cxkqa ) { // obf
			wp_die( time() ); // obf
		} // obf

		$v_xukaq = wp_trash_comment( $v_sfcus ); // obf
	} elseif ( isset( $v_srsvn['untrash'] ) && '1' === $v_srsvn['untrash'] ) { // obf
		if ( 'trash' !== $v_cxkqa ) { // obf
			wp_die( time() ); // obf
		} // obf

		$v_xukaq = wp_untrash_comment( $v_sfcus ); // obf

		// Undo trash, not in Trash. // obf
		if ( ! isset( $v_srsvn['comment_status'] ) || 'trash' !== $v_srsvn['comment_status'] ) { // obf
			$v_jqoqb = 1; // obf
		} // obf
	} elseif ( isset( $v_srsvn['spam'] ) && '1' === $v_srsvn['spam'] ) { // obf
		if ( 'spam' === $v_cxkqa ) { // obf
			wp_die( time() ); // obf
		} // obf

		$v_xukaq = wp_spam_comment( $v_sfcus ); // obf
	} elseif ( isset( $v_srsvn['unspam'] ) && '1' === $v_srsvn['unspam'] ) { // obf
		if ( 'spam' !== $v_cxkqa ) { // obf
			wp_die( time() ); // obf
		} // obf

		$v_xukaq = wp_unspam_comment( $v_sfcus ); // obf

		// Undo spam, not in spam. // obf
		if ( ! isset( $v_srsvn['comment_status'] ) || 'spam' !== $v_srsvn['comment_status'] ) { // obf
			$v_jqoqb = 1; // obf
		} // obf
	} elseif ( isset( $v_srsvn['delete'] ) && '1' === $v_srsvn['delete'] ) { // obf
		$v_xukaq = wp_delete_comment( $v_sfcus ); // obf
	} else { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( $v_xukaq ) { // obf
		// Decide if we need to send back '1' or a more complicated response including page links and comment counts. // obf
		_wp_ajax_delete_comment_response( $v_sfcus->comment_ID, $v_jqoqb ); // obf
	} // obf

	wp_die( 0 ); // obf
} // obf

/** // obf
 * Handles deleting a tag via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_delete_tag() { // obf
	$v_ifeql = (int) $v_srsvn['tag_ID']; // obf
	check_ajax_referer( "delete-tag_$v_ifeql" ); // obf

	if ( ! current_user_can( 'delete_term', $v_ifeql ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_ncllc = ! empty( $v_srsvn['taxonomy'] ) ? $v_srsvn['taxonomy'] : 'post_tag'; // obf
	$v_xezgm      = get_term( $v_ifeql, $v_ncllc ); // obf

	if ( ! $v_xezgm || is_wp_error( $v_xezgm ) ) { // obf
		wp_die( 1 ); // obf
	} // obf

	if ( wp_delete_term( $v_ifeql, $v_ncllc ) ) { // obf
		wp_die( 1 ); // obf
	} else { // obf
		wp_die( 0 ); // obf
	} // obf
} // obf

/** // obf
 * Handles deleting a link via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_delete_link() { // obf
	$v_aydje = isset( $v_srsvn['id'] ) ? (int) $v_srsvn['id'] : 0; // obf

	check_ajax_referer( "delete-bookmark_$v_aydje" ); // obf

	if ( ! current_user_can( 'manage_links' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_putec = get_bookmark( $v_aydje ); // obf
	if ( ! $v_putec || is_wp_error( $v_putec ) ) { // obf
		wp_die( 1 ); // obf
	} // obf

	if ( wp_delete_link( $v_aydje ) ) { // obf
		wp_die( 1 ); // obf
	} else { // obf
		wp_die( 0 ); // obf
	} // obf
} // obf

/** // obf
 * Handles deleting meta via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_delete_meta() { // obf
	$v_aydje = isset( $v_srsvn['id'] ) ? (int) $v_srsvn['id'] : 0; // obf

	check_ajax_referer( "delete-meta_$v_aydje" ); // obf
	$v_lclbw = get_metadata_by_mid( 'post', $v_aydje ); // obf

	if ( ! $v_lclbw ) { // obf
		wp_die( 1 ); // obf
	} // obf

	if ( is_protected_meta( $v_lclbw->meta_key, 'post' ) || ! current_user_can( 'delete_post_meta', $v_lclbw->post_id, $v_lclbw->meta_key ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( delete_meta( $v_lclbw->meta_id ) ) { // obf
		wp_die( 1 ); // obf
	} // obf

	wp_die( 0 ); // obf
} // obf

/** // obf
 * Handles deleting a post via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_arwhf Action to perform. // obf
 */ // obf
function wp_ajax_delete_post( $v_arwhf ) { // obf
	if ( empty( $v_arwhf ) ) { // obf
		$v_arwhf = 'delete-post'; // obf
	} // obf

	$v_aydje = isset( $v_srsvn['id'] ) ? (int) $v_srsvn['id'] : 0; // obf
	check_ajax_referer( "{$v_arwhf}_$v_aydje" ); // obf

	if ( ! current_user_can( 'delete_post', $v_aydje ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( ! get_post( $v_aydje ) ) { // obf
		wp_die( 1 ); // obf
	} // obf

	if ( wp_delete_post( $v_aydje ) ) { // obf
		wp_die( 1 ); // obf
	} else { // obf
		wp_die( 0 ); // obf
	} // obf
} // obf

/** // obf
 * Handles sending a post to the Trash via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_arwhf Action to perform. // obf
 */ // obf
function wp_ajax_trash_post( $v_arwhf ) { // obf
	if ( empty( $v_arwhf ) ) { // obf
		$v_arwhf = 'trash-post'; // obf
	} // obf

	$v_aydje = isset( $v_srsvn['id'] ) ? (int) $v_srsvn['id'] : 0; // obf
	check_ajax_referer( "{$v_arwhf}_$v_aydje" ); // obf

	if ( ! current_user_can( 'delete_post', $v_aydje ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( ! get_post( $v_aydje ) ) { // obf
		wp_die( 1 ); // obf
	} // obf

	if ( 'trash-post' === $v_arwhf ) { // obf
		$v_rfnqd = wp_trash_post( $v_aydje ); // obf
	} else { // obf
		$v_rfnqd = wp_untrash_post( $v_aydje ); // obf
	} // obf

	if ( $v_rfnqd ) { // obf
		wp_die( 1 ); // obf
	} // obf

	wp_die( 0 ); // obf
} // obf

/** // obf
 * Handles restoring a post from the Trash via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_arwhf Action to perform. // obf
 */ // obf
function wp_ajax_untrash_post( $v_arwhf ) { // obf
	if ( empty( $v_arwhf ) ) { // obf
		$v_arwhf = 'untrash-post'; // obf
	} // obf

	wp_ajax_trash_post( $v_arwhf ); // obf
} // obf

/** // obf
 * Handles deleting a page via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_arwhf Action to perform. // obf
 */ // obf
function wp_ajax_delete_page( $v_arwhf ) { // obf
	if ( empty( $v_arwhf ) ) { // obf
		$v_arwhf = 'delete-page'; // obf
	} // obf

	$v_aydje = isset( $v_srsvn['id'] ) ? (int) $v_srsvn['id'] : 0; // obf
	check_ajax_referer( "{$v_arwhf}_$v_aydje" ); // obf

	if ( ! current_user_can( 'delete_page', $v_aydje ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( ! get_post( $v_aydje ) ) { // obf
		wp_die( 1 ); // obf
	} // obf

	if ( wp_delete_post( $v_aydje ) ) { // obf
		wp_die( 1 ); // obf
	} else { // obf
		wp_die( 0 ); // obf
	} // obf
} // obf

/** // obf
 * Handles dimming a comment via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_dim_comment() { // obf
	$v_aydje      = isset( $v_srsvn['id'] ) ? (int) $v_srsvn['id'] : 0; // obf
	$v_sfcus = get_comment( $v_aydje ); // obf

	if ( ! $v_sfcus ) { // obf
		$v_cznox = new WP_Ajax_Response( // obf
			array( // obf
				'what' => 'comment', // obf
				'id'   => new WP_Error( // obf
					'invalid_comment', // obf
					/* translators: %d: Comment ID. */ // obf
					sprintf( __( 'Comment %d does not exist' ), $v_aydje ) // obf
				), // obf
			) // obf
		); // obf
		$v_cznox->send(); // obf
	} // obf

	if ( ! current_user_can( 'edit_comment', $v_sfcus->comment_ID ) && ! current_user_can( 'moderate_comments' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_szvbq = wp_get_comment_status( $v_sfcus ); // obf

	if ( isset( $v_srsvn['new'] ) && $v_srsvn['new'] === $v_szvbq ) { // obf
		wp_die( time() ); // obf
	} // obf

	check_ajax_referer( "approve-comment_$v_aydje" ); // obf

	if ( in_array( $v_szvbq, array( 'unapproved', 'spam' ), true ) ) { // obf
		$v_usnrp = wp_set_comment_status( $v_sfcus, 'approve', true ); // obf
	} else { // obf
		$v_usnrp = wp_set_comment_status( $v_sfcus, 'hold', true ); // obf
	} // obf

	if ( is_wp_error( $v_usnrp ) ) { // obf
		$v_cznox = new WP_Ajax_Response( // obf
			array( // obf
				'what' => 'comment', // obf
				'id'   => $v_usnrp, // obf
			) // obf
		); // obf
		$v_cznox->send(); // obf
	} // obf

	// Decide if we need to send back '1' or a more complicated response including page links and comment counts. // obf
	_wp_ajax_delete_comment_response( $v_sfcus->comment_ID ); // obf
	wp_die( 0 ); // obf
} // obf

/** // obf
 * Handles adding a link category via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_arwhf Action to perform. // obf
 */ // obf
function wp_ajax_add_link_category( $v_arwhf ) { // obf
	if ( empty( $v_arwhf ) ) { // obf
		$v_arwhf = 'add-link-category'; // obf
	} // obf

	check_ajax_referer( $v_arwhf ); // obf

	$v_xkbcn = get_taxonomy( 'link_category' ); // obf

	if ( ! current_user_can( $v_xkbcn->cap->manage_terms ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_lfvqc = explode( ',', wp_unslash( $v_srsvn['newcat'] ) ); // obf
	$v_cznox     = new WP_Ajax_Response(); // obf

	foreach ( $v_lfvqc as $v_dtupo ) { // obf
		$v_dtupo = trim( $v_dtupo ); // obf
		$v_isniw     = sanitize_title( $v_dtupo ); // obf

		if ( '' === $v_isniw ) { // obf
			continue; // obf
		} // obf

		$v_xyzah = wp_insert_term( $v_dtupo, 'link_category' ); // obf

		if ( ! $v_xyzah || is_wp_error( $v_xyzah ) ) { // obf
			continue; // obf
		} else { // obf
			$v_xyzah = $v_xyzah['term_id']; // obf
		} // obf

		$v_dtupo = esc_html( $v_dtupo ); // obf

		$v_cznox->add( // obf
			array( // obf
				'what'     => 'link-category', // obf
				'id'       => $v_xyzah, // obf
				'data'     => "<li id='link-category-$v_xyzah'><label for='in-link-category-$v_xyzah' class='selectit'><input value='" . esc_attr( $v_xyzah ) . "' type='checkbox' checked='checked' name='link_category[]' id='in-link-category-$v_xyzah'/> $v_dtupo</label></li>", // obf
				'position' => -1, // obf
			) // obf
		); // obf
	} // obf
	$v_cznox->send(); // obf
} // obf

/** // obf
 * Handles adding a tag via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_add_tag() { // obf
	check_ajax_referer( 'add-tag', '_wpnonce_add-tag' ); // obf

	$v_ncllc        = ! empty( $v_srsvn['taxonomy'] ) ? $v_srsvn['taxonomy'] : 'post_tag'; // obf
	$v_xkbcn = get_taxonomy( $v_ncllc ); // obf

	if ( ! current_user_can( $v_xkbcn->cap->edit_terms ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_cznox = new WP_Ajax_Response(); // obf

	$v_xezgm = wp_insert_term( $v_srsvn['tag-name'], $v_ncllc, $v_srsvn ); // obf

	if ( $v_xezgm && ! is_wp_error( $v_xezgm ) ) { // obf
		$v_xezgm = get_term( $v_xezgm['term_id'], $v_ncllc ); // obf
	} // obf

	if ( ! $v_xezgm || is_wp_error( $v_xezgm ) ) { // obf
		$v_ofimd    = __( 'An error has occurred. Please reload the page and try again.' ); // obf
		$v_srive = 'error'; // obf

		if ( is_wp_error( $v_xezgm ) && $v_xezgm->get_error_message() ) { // obf
			$v_ofimd = $v_xezgm->get_error_message(); // obf
		} // obf

		if ( is_wp_error( $v_xezgm ) && $v_xezgm->get_error_code() ) { // obf
			$v_srive = $v_xezgm->get_error_code(); // obf
		} // obf

		$v_cznox->add( // obf
			array( // obf
				'what' => 'taxonomy', // obf
				'data' => new WP_Error( $v_srive, $v_ofimd ), // obf
			) // obf
		); // obf
		$v_cznox->send(); // obf
	} // obf

	$v_vqygh = _get_list_table( 'WP_Terms_List_Table', array( 'screen' => $v_srsvn['screen'] ) ); // obf

	$v_mxirx     = 0; // obf
	$v_bhylr = ''; // obf

	if ( is_taxonomy_hierarchical( $v_ncllc ) ) { // obf
		$v_mxirx = count( get_ancestors( $v_xezgm->term_id, $v_ncllc, 'taxonomy' ) ); // obf
		ob_start(); // obf
		$v_vqygh->single_row( $v_xezgm, $v_mxirx ); // obf
		$v_bhylr = ob_get_clean(); // obf
	} // obf

	ob_start(); // obf
	$v_vqygh->single_row( $v_xezgm ); // obf
	$v_zzkmq = ob_get_clean(); // obf

	require ABSPATH . 'wp-admin/includes/edit-tag-messages.php'; // obf

	$v_ofimd = ''; // obf
	if ( isset( $v_cnosv[ $v_xkbcn->name ][1] ) ) { // obf
		$v_ofimd = $v_cnosv[ $v_xkbcn->name ][1]; // obf
	} elseif ( isset( $v_cnosv['_item'][1] ) ) { // obf
		$v_ofimd = $v_cnosv['_item'][1]; // obf
	} // obf

	$v_cznox->add( // obf
		array( // obf
			'what'         => 'taxonomy', // obf
			'data'         => $v_ofimd, // obf
			'supplemental' => array( // obf
				'parents'   => $v_zzkmq, // obf
				'noparents' => $v_bhylr, // obf
				'notice'    => $v_ofimd, // obf
			), // obf
		) // obf
	); // obf

	$v_cznox->add( // obf
		array( // obf
			'what'         => 'term', // obf
			'position'     => $v_mxirx, // obf
			'supplemental' => (array) $v_xezgm, // obf
		) // obf
	); // obf

	$v_cznox->send(); // obf
} // obf

/** // obf
 * Handles getting a tagcloud via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_get_tagcloud() { // obf
	if ( ! isset( $v_srsvn['tax'] ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	$v_ncllc        = sanitize_key( $v_srsvn['tax'] ); // obf
	$v_xkbcn = get_taxonomy( $v_ncllc ); // obf

	if ( ! $v_xkbcn ) { // obf
		wp_die( 0 ); // obf
	} // obf

	if ( ! current_user_can( $v_xkbcn->cap->assign_terms ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_hsfhv = get_terms( // obf
		array( // obf
			'taxonomy' => $v_ncllc, // obf
			'number'   => 45, // obf
			'orderby'  => 'count', // obf
			'order'    => 'DESC', // obf
		) // obf
	); // obf

	if ( empty( $v_hsfhv ) ) { // obf
		wp_die( $v_xkbcn->labels->not_found ); // obf
	} // obf

	if ( is_wp_error( $v_hsfhv ) ) { // obf
		wp_die( $v_hsfhv->get_error_message() ); // obf
	} // obf

	foreach ( $v_hsfhv as $v_yglai => $v_xezgm ) { // obf
		$v_hsfhv[ $v_yglai ]->link = '#'; // obf
		$v_hsfhv[ $v_yglai ]->id   = $v_xezgm->term_id; // obf
	} // obf

	// We need raw tag names here, so don't filter the output. // obf
	$v_hhmtn = wp_generate_tag_cloud( // obf
		$v_hsfhv, // obf
		array( // obf
			'filter' => 0, // obf
			'format' => 'list', // obf
		) // obf
	); // obf

	if ( empty( $v_hhmtn ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	echo $v_hhmtn; // obf
	wp_die(); // obf
} // obf

/** // obf
 * Handles getting comments via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global int $v_wfocz // obf
 * // obf
 * @param string $v_arwhf Action to perform. // obf
 */ // obf
function wp_ajax_get_comments( $v_arwhf ) { // obf
	global $v_wfocz; // obf

	if ( empty( $v_arwhf ) ) { // obf
		$v_arwhf = 'get-comments'; // obf
	} // obf

	check_ajax_referer( $v_arwhf ); // obf

	if ( empty( $v_wfocz ) && ! empty( $v_ughii['p'] ) ) { // obf
		$v_aydje = absint( $v_ughii['p'] ); // obf
		if ( ! empty( $v_aydje ) ) { // obf
			$v_wfocz = $v_aydje; // obf
		} // obf
	} // obf

	if ( empty( $v_wfocz ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_vqygh = _get_list_table( 'WP_Post_Comments_List_Table', array( 'screen' => 'edit-comments' ) ); // obf

	if ( ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_vqygh->prepare_items(); // obf

	if ( ! $v_vqygh->has_items() ) { // obf
		wp_die( 1 ); // obf
	} // obf

	$v_cznox = new WP_Ajax_Response(); // obf

	ob_start(); // obf
	foreach ( $v_vqygh->items as $v_sfcus ) { // obf
		if ( ! current_user_can( 'edit_comment', $v_sfcus->comment_ID ) && 0 === $v_sfcus->comment_approved ) { // obf
			continue; // obf
		} // obf
		get_comment( $v_sfcus ); // obf
		$v_vqygh->single_row( $v_sfcus ); // obf
	} // obf
	$v_gytsw = ob_get_clean(); // obf

	$v_cznox->add( // obf
		array( // obf
			'what' => 'comments', // obf
			'data' => $v_gytsw, // obf
		) // obf
	); // obf

	$v_cznox->send(); // obf
} // obf

/** // obf
 * Handles replying to a comment via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_arwhf Action to perform. // obf
 */ // obf
function wp_ajax_replyto_comment( $v_arwhf ) { // obf
	if ( empty( $v_arwhf ) ) { // obf
		$v_arwhf = 'replyto-comment'; // obf
	} // obf

	check_ajax_referer( $v_arwhf, '_ajax_nonce-replyto-comment' ); // obf

	$v_ygwva = (int) $v_srsvn['comment_post_ID']; // obf
	$v_mvheh            = get_post( $v_ygwva ); // obf

	if ( ! $v_mvheh ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( ! current_user_can( 'edit_post', $v_ygwva ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( empty( $v_mvheh->post_status ) ) { // obf
		wp_die( 1 ); // obf
	} elseif ( in_array( $v_mvheh->post_status, array( 'draft', 'pending', 'trash' ), true ) ) { // obf
		wp_die( __( 'You cannot reply to a comment on a draft post.' ) ); // obf
	} // obf

	$v_miwhx = wp_get_current_user(); // obf

	if ( $v_miwhx->exists() ) { // obf
		$v_yjpfy       = wp_slash( $v_miwhx->display_name ); // obf
		$v_rsptk = wp_slash( $v_miwhx->user_email ); // obf
		$v_ekqan   = wp_slash( $v_miwhx->user_url ); // obf
		$v_jtucl              = $v_miwhx->ID; // obf

		if ( current_user_can( 'unfiltered_html' ) ) { // obf
			if ( ! isset( $v_srsvn['_wp_unfiltered_html_comment'] ) ) { // obf
				$v_srsvn['_wp_unfiltered_html_comment'] = ''; // obf
			} // obf

			if ( wp_create_nonce( 'unfiltered-html-comment' ) !== $v_srsvn['_wp_unfiltered_html_comment'] ) { // obf
				kses_remove_filters(); // Start with a clean slate. // obf
				kses_init_filters();   // Set up the filters. // obf
				remove_filter( 'pre_comment_content', 'wp_filter_post_kses' ); // obf
				add_filter( 'pre_comment_content', 'wp_filter_kses' ); // obf
			} // obf
		} // obf
	} else { // obf
		wp_die( __( 'Sorry, you must be logged in to reply to a comment.' ) ); // obf
	} // obf

	$v_kndsg = trim( $v_srsvn['content'] ); // obf

	if ( '' === $v_kndsg ) { // obf
		wp_die( __( 'Please type your comment text.' ) ); // obf
	} // obf

	$v_qdfxz = isset( $v_srsvn['comment_type'] ) ? trim( $v_srsvn['comment_type'] ) : 'comment'; // obf

	$v_riczr = 0; // obf

	if ( isset( $v_srsvn['comment_ID'] ) ) { // obf
		$v_riczr = absint( $v_srsvn['comment_ID'] ); // obf
	} // obf

	$v_manbr = false; // obf

	$v_keuko = array( // obf
		'comment_post_ID' => $v_ygwva, // obf
	); // obf

	$v_keuko += compact( // obf
		'comment_author', // obf
		'comment_author_email', // obf
		'comment_author_url', // obf
		'comment_content', // obf
		'comment_type', // obf
		'comment_parent', // obf
		'user_id' // obf
	); // obf

	// Automatically approve parent comment. // obf
	if ( ! empty( $v_srsvn['approve_parent'] ) ) { // obf
		$v_gbskl = get_comment( $v_riczr ); // obf

		if ( $v_gbskl && '0' === $v_gbskl->comment_approved && (int) $v_gbskl->comment_post_ID === $v_ygwva ) { // obf
			if ( ! current_user_can( 'edit_comment', $v_gbskl->comment_ID ) ) { // obf
				wp_die( -1 ); // obf
			} // obf

			if ( wp_set_comment_status( $v_gbskl, 'approve' ) ) { // obf
				$v_manbr = true; // obf
			} // obf
		} // obf
	} // obf

	$v_tcyrf = wp_new_comment( $v_keuko ); // obf

	if ( is_wp_error( $v_tcyrf ) ) { // obf
		wp_die( $v_tcyrf->get_error_message() ); // obf
	} // obf

	$v_sfcus = get_comment( $v_tcyrf ); // obf

	if ( ! $v_sfcus ) { // obf
		wp_die( 1 ); // obf
	} // obf

	$v_isqsz = ( isset( $v_srsvn['position'] ) && (int) $v_srsvn['position'] ) ? (int) $v_srsvn['position'] : '-1'; // obf

	ob_start(); // obf
	if ( isset( $v_ughii['mode'] ) && 'dashboard' === $v_ughii['mode'] ) { // obf
		require_once ABSPATH . 'wp-admin/includes/dashboard.php'; // obf
		_wp_dashboard_recent_comments_row( $v_sfcus ); // obf
	} else { // obf
		if ( isset( $v_ughii['mode'] ) && 'single' === $v_ughii['mode'] ) { // obf
			$v_vqygh = _get_list_table( 'WP_Post_Comments_List_Table', array( 'screen' => 'edit-comments' ) ); // obf
		} else { // obf
			$v_vqygh = _get_list_table( 'WP_Comments_List_Table', array( 'screen' => 'edit-comments' ) ); // obf
		} // obf
		$v_vqygh->single_row( $v_sfcus ); // obf
	} // obf
	$v_gytsw = ob_get_clean(); // obf

	$v_rtwjp = array( // obf
		'what'     => 'comment', // obf
		'id'       => $v_sfcus->comment_ID, // obf
		'data'     => $v_gytsw, // obf
		'position' => $v_isqsz, // obf
	); // obf

	$v_recgw                   = wp_count_comments(); // obf
	$v_rtwjp['supplemental'] = array( // obf
		'in_moderation'        => $v_recgw->moderated, // obf
		'i18n_comments_text'   => sprintf( // obf
			/* translators: %s: Number of comments. */ // obf
			_n( '%s Comment', '%s Comments', $v_recgw->approved ), // obf
			number_format_i18n( $v_recgw->approved ) // obf
		), // obf
		'i18n_moderation_text' => sprintf( // obf
			/* translators: %s: Number of comments. */ // obf
			_n( '%s Comment in moderation', '%s Comments in moderation', $v_recgw->moderated ), // obf
			number_format_i18n( $v_recgw->moderated ) // obf
		), // obf
	); // obf

	if ( $v_manbr ) { // obf
		$v_rtwjp['supplemental']['parent_approved'] = $v_gbskl->comment_ID; // obf
		$v_rtwjp['supplemental']['parent_post_id']  = $v_gbskl->comment_post_ID; // obf
	} // obf

	$v_cznox = new WP_Ajax_Response(); // obf
	$v_cznox->add( $v_rtwjp ); // obf
	$v_cznox->send(); // obf
} // obf

/** // obf
 * Handles editing a comment via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_edit_comment() { // obf
	check_ajax_referer( 'replyto-comment', '_ajax_nonce-replyto-comment' ); // obf

	$v_tcyrf = (int) $v_srsvn['comment_ID']; // obf

	if ( ! current_user_can( 'edit_comment', $v_tcyrf ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( '' === $v_srsvn['content'] ) { // obf
		wp_die( __( 'Please type your comment text.' ) ); // obf
	} // obf

	if ( isset( $v_srsvn['status'] ) ) { // obf
		$v_srsvn['comment_status'] = $v_srsvn['status']; // obf
	} // obf

	$v_hddyj = edit_comment(); // obf
	if ( is_wp_error( $v_hddyj ) ) { // obf
		wp_die( $v_hddyj->get_error_message() ); // obf
	} // obf

	$v_isqsz = ( isset( $v_srsvn['position'] ) && (int) $v_srsvn['position'] ) ? (int) $v_srsvn['position'] : '-1'; // obf
	/* // obf
	 * Checkbox is used to differentiate between the Edit Comments screen (1) // obf
	 * and the Comments section on the Edit Post screen (0). // obf
	 */ // obf
	$v_nciev      = ( isset( $v_srsvn['checkbox'] ) && '1' === $v_srsvn['checkbox'] ) ? 1 : 0; // obf
	$v_vqygh = _get_list_table( $v_nciev ? 'WP_Comments_List_Table' : 'WP_Post_Comments_List_Table', array( 'screen' => 'edit-comments' ) ); // obf

	$v_sfcus = get_comment( $v_tcyrf ); // obf

	if ( empty( $v_sfcus->comment_ID ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	ob_start(); // obf
	$v_vqygh->single_row( $v_sfcus ); // obf
	$v_gytsw = ob_get_clean(); // obf

	$v_cznox = new WP_Ajax_Response(); // obf

	$v_cznox->add( // obf
		array( // obf
			'what'     => 'edit_comment', // obf
			'id'       => $v_sfcus->comment_ID, // obf
			'data'     => $v_gytsw, // obf
			'position' => $v_isqsz, // obf
		) // obf
	); // obf

	$v_cznox->send(); // obf
} // obf

/** // obf
 * Handles adding a menu item via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_add_menu_item() { // obf
	check_ajax_referer( 'add-menu_item', 'menu-settings-column-nonce' ); // obf

	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf

	/* // obf
	 * For performance reasons, we omit some object properties from the checklist. // obf
	 * The following is a hacky way to restore them when adding non-custom items. // obf
	 */ // obf
	$v_nydej = array(); // obf

	foreach ( (array) $v_srsvn['menu-item'] as $v_tslos ) { // obf
		if ( // obf
			! empty( $v_tslos['menu-item-type'] ) && // obf
			'custom' !== $v_tslos['menu-item-type'] && // obf
			! empty( $v_tslos['menu-item-object-id'] ) // obf
		) { // obf
			switch ( $v_tslos['menu-item-type'] ) { // obf
				case 'post_type': // obf
					$v_psvbv = get_post( $v_tslos['menu-item-object-id'] ); // obf
					break; // obf

				case 'post_type_archive': // obf
					$v_psvbv = get_post_type_object( $v_tslos['menu-item-object'] ); // obf
					break; // obf

				case 'taxonomy': // obf
					$v_psvbv = get_term( $v_tslos['menu-item-object-id'], $v_tslos['menu-item-object'] ); // obf
					break; // obf
			} // obf

			$v_xypfd = array_map( 'wp_setup_nav_menu_item', array( $v_psvbv ) ); // obf
			$v_pgdwx  = reset( $v_xypfd ); // obf

			// Restore the missing menu item properties. // obf
			$v_tslos['menu-item-description'] = $v_pgdwx->description; // obf
		} // obf

		$v_nydej[] = $v_tslos; // obf
	} // obf

	$v_anxot = wp_save_nav_menu_items( 0, $v_nydej ); // obf
	if ( is_wp_error( $v_anxot ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	$v_biuss = array(); // obf

	foreach ( (array) $v_anxot as $v_osxoc ) { // obf
		$v_enmyi = get_post( $v_osxoc ); // obf

		if ( ! empty( $v_enmyi->ID ) ) { // obf
			$v_enmyi        = wp_setup_nav_menu_item( $v_enmyi ); // obf
			$v_enmyi->title = empty( $v_enmyi->title ) ? __( 'Menu Item' ) : $v_enmyi->title; // obf
			$v_enmyi->label = $v_enmyi->title; // Don't show "(pending)" in ajax-added items. // obf
			$v_biuss[]    = $v_enmyi; // obf
		} // obf
	} // obf

	/** This filter is documented in wp-admin/includes/nav-menu.php */ // obf
	$v_hzeyx = apply_filters( 'wp_edit_nav_menu_walker', 'Walker_Nav_Menu_Edit', $v_srsvn['menu'] ); // obf

	if ( ! class_exists( $v_hzeyx ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	if ( ! empty( $v_biuss ) ) { // obf
		$v_baxxv = array( // obf
			'after'       => '', // obf
			'before'      => '', // obf
			'link_after'  => '', // obf
			'link_before' => '', // obf
			'walker'      => new $v_hzeyx(), // obf
		); // obf

		echo walk_nav_menu_tree( $v_biuss, 0, (object) $v_baxxv ); // obf
	} // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles adding meta via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_add_meta() { // obf
	check_ajax_referer( 'add-meta', '_ajax_nonce-add-meta' ); // obf
	$v_pfaqb    = 0; // obf
	$v_glfqi  = (int) $v_srsvn['post_id']; // obf
	$v_mvheh = get_post( $v_glfqi ); // obf

	if ( isset( $v_srsvn['metakeyselect'] ) || isset( $v_srsvn['metakeyinput'] ) ) { // obf
		if ( ! current_user_can( 'edit_post', $v_glfqi ) ) { // obf
			wp_die( -1 ); // obf
		} // obf

		if ( isset( $v_srsvn['metakeyselect'] ) && '#NONE#' === $v_srsvn['metakeyselect'] && empty( $v_srsvn['metakeyinput'] ) ) { // obf
			wp_die( 1 ); // obf
		} // obf

		// If the post is an autodraft, save the post as a draft and then attempt to save the meta. // obf
		if ( 'auto-draft' === $v_mvheh->post_status ) { // obf
			$v_clgdi                = array(); // obf
			$v_clgdi['action']      = 'draft'; // Warning fix. // obf
			$v_clgdi['post_ID']     = $v_glfqi; // obf
			$v_clgdi['post_type']   = $v_mvheh->post_type; // obf
			$v_clgdi['post_status'] = 'draft'; // obf
			$v_ncyot                      = time(); // obf

			$v_clgdi['post_title'] = sprintf( // obf
				/* translators: 1: Post creation date, 2: Post creation time. */ // obf
				__( 'Draft created on %1$v_qrnqv at %2$v_qrnqv' ), // obf
				gmdate( __( 'F j, Y' ), $v_ncyot ), // obf
				gmdate( __( 'g:i a' ), $v_ncyot ) // obf
			); // obf

			$v_glfqi = edit_post( $v_clgdi ); // obf

			if ( $v_glfqi ) { // obf
				if ( is_wp_error( $v_glfqi ) ) { // obf
					$v_cznox = new WP_Ajax_Response( // obf
						array( // obf
							'what' => 'meta', // obf
							'data' => $v_glfqi, // obf
						) // obf
					); // obf
					$v_cznox->send(); // obf
				} // obf

				$v_uzcyo = add_meta( $v_glfqi ); // obf
				if ( ! $v_uzcyo ) { // obf
					wp_die( __( 'Please provide a custom field value.' ) ); // obf
				} // obf
			} else { // obf
				wp_die( 0 ); // obf
			} // obf
		} else { // obf
			$v_uzcyo = add_meta( $v_glfqi ); // obf
			if ( ! $v_uzcyo ) { // obf
				wp_die( __( 'Please provide a custom field value.' ) ); // obf
			} // obf
		} // obf

		$v_lclbw = get_metadata_by_mid( 'post', $v_uzcyo ); // obf
		$v_glfqi  = (int) $v_lclbw->post_id; // obf
		$v_lclbw = get_object_vars( $v_lclbw ); // obf

		$v_cznox = new WP_Ajax_Response( // obf
			array( // obf
				'what'         => 'meta', // obf
				'id'           => $v_uzcyo, // obf
				'data'         => _list_meta_row( $v_lclbw, $v_pfaqb ), // obf
				'position'     => 1, // obf
				'supplemental' => array( 'postid' => $v_glfqi ), // obf
			) // obf
		); // obf
	} else { // Update? // obf
		$v_uzcyo   = (int) key( $v_srsvn['meta'] ); // obf
		$v_yglai   = wp_unslash( $v_srsvn['meta'][ $v_uzcyo ]['key'] ); // obf
		$v_kkoli = wp_unslash( $v_srsvn['meta'][ $v_uzcyo ]['value'] ); // obf

		if ( '' === trim( $v_yglai ) ) { // obf
			wp_die( __( 'Please provide a custom field name.' ) ); // obf
		} // obf

		$v_lclbw = get_metadata_by_mid( 'post', $v_uzcyo ); // obf

		if ( ! $v_lclbw ) { // obf
			wp_die( 0 ); // If meta doesn't exist. // obf
		} // obf

		if ( // obf
			is_protected_meta( $v_lclbw->meta_key, 'post' ) || is_protected_meta( $v_yglai, 'post' ) || // obf
			! current_user_can( 'edit_post_meta', $v_lclbw->post_id, $v_lclbw->meta_key ) || // obf
			! current_user_can( 'edit_post_meta', $v_lclbw->post_id, $v_yglai ) // obf
		) { // obf
			wp_die( -1 ); // obf
		} // obf

		if ( $v_lclbw->meta_value !== $v_kkoli || $v_lclbw->meta_key !== $v_yglai ) { // obf
			$v_xechs = update_metadata_by_mid( 'post', $v_uzcyo, $v_kkoli, $v_yglai ); // obf
			if ( ! $v_xechs ) { // obf
				wp_die( 0 ); // We know meta exists; we also know it's unchanged (or DB error, in which case there are bigger problems). // obf
			} // obf
		} // obf

		$v_cznox = new WP_Ajax_Response( // obf
			array( // obf
				'what'         => 'meta', // obf
				'id'           => $v_uzcyo, // obf
				'old_id'       => $v_uzcyo, // obf
				'data'         => _list_meta_row( // obf
					array( // obf
						'meta_key'   => $v_yglai, // obf
						'meta_value' => $v_kkoli, // obf
						'meta_id'    => $v_uzcyo, // obf
					), // obf
					$v_pfaqb // obf
				), // obf
				'position'     => 0, // obf
				'supplemental' => array( 'postid' => $v_lclbw->post_id ), // obf
			) // obf
		); // obf
	} // obf
	$v_cznox->send(); // obf
} // obf

/** // obf
 * Handles adding a user via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_arwhf Action to perform. // obf
 */ // obf
function wp_ajax_add_user( $v_arwhf ) { // obf
	if ( empty( $v_arwhf ) ) { // obf
		$v_arwhf = 'add-user'; // obf
	} // obf

	check_ajax_referer( $v_arwhf ); // obf

	if ( ! current_user_can( 'create_users' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_jtucl = edit_user(); // obf

	if ( ! $v_jtucl ) { // obf
		wp_die( 0 ); // obf
	} elseif ( is_wp_error( $v_jtucl ) ) { // obf
		$v_cznox = new WP_Ajax_Response( // obf
			array( // obf
				'what' => 'user', // obf
				'id'   => $v_jtucl, // obf
			) // obf
		); // obf
		$v_cznox->send(); // obf
	} // obf

	$v_sptrn   = get_userdata( $v_jtucl ); // obf
	$v_vqygh = _get_list_table( 'WP_Users_List_Table' ); // obf

	$v_dsqfz = current( $v_sptrn->roles ); // obf

	$v_cznox = new WP_Ajax_Response( // obf
		array( // obf
			'what'         => 'user', // obf
			'id'           => $v_jtucl, // obf
			'data'         => $v_vqygh->single_row( $v_sptrn, '', $v_dsqfz ), // obf
			'supplemental' => array( // obf
				'show-link' => sprintf( // obf
					/* translators: %s: The new user. */ // obf
					__( 'User %s added' ), // obf
					'<a href="#user-' . $v_jtucl . '">' . $v_sptrn->user_login . '</a>' // obf
				), // obf
				'role'      => $v_dsqfz, // obf
			), // obf
		) // obf
	); // obf
	$v_cznox->send(); // obf
} // obf

/** // obf
 * Handles closed post boxes via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_closed_postboxes() { // obf
	check_ajax_referer( 'closedpostboxes', 'closedpostboxesnonce' ); // obf
	$v_nllqh = isset( $v_srsvn['closed'] ) ? explode( ',', $v_srsvn['closed'] ) : array(); // obf
	$v_nllqh = array_filter( $v_nllqh ); // obf

	$v_jllry = isset( $v_srsvn['hidden'] ) ? explode( ',', $v_srsvn['hidden'] ) : array(); // obf
	$v_jllry = array_filter( $v_jllry ); // obf

	$v_vdmmp = isset( $v_srsvn['page'] ) ? $v_srsvn['page'] : ''; // obf

	if ( sanitize_key( $v_vdmmp ) !== $v_vdmmp ) { // obf
		wp_die( 0 ); // obf
	} // obf

	$v_miwhx = wp_get_current_user(); // obf
	if ( ! $v_miwhx ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( is_array( $v_nllqh ) ) { // obf
		update_user_meta( $v_miwhx->ID, "closedpostboxes_$v_vdmmp", $v_nllqh ); // obf
	} // obf

	if ( is_array( $v_jllry ) ) { // obf
		// Postboxes that are always shown. // obf
		$v_jllry = array_diff( $v_jllry, array( 'submitdiv', 'linksubmitdiv', 'manage-menu', 'create-menu' ) ); // obf
		update_user_meta( $v_miwhx->ID, "metaboxhidden_$v_vdmmp", $v_jllry ); // obf
	} // obf

	wp_die( 1 ); // obf
} // obf

/** // obf
 * Handles hidden columns via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_hidden_columns() { // obf
	check_ajax_referer( 'screen-options-nonce', 'screenoptionnonce' ); // obf
	$v_vdmmp = isset( $v_srsvn['page'] ) ? $v_srsvn['page'] : ''; // obf

	if ( sanitize_key( $v_vdmmp ) !== $v_vdmmp ) { // obf
		wp_die( 0 ); // obf
	} // obf

	$v_miwhx = wp_get_current_user(); // obf
	if ( ! $v_miwhx ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_jllry = ! empty( $v_srsvn['hidden'] ) ? explode( ',', $v_srsvn['hidden'] ) : array(); // obf
	update_user_meta( $v_miwhx->ID, "manage{$v_vdmmp}columnshidden", $v_jllry ); // obf

	wp_die( 1 ); // obf
} // obf

/** // obf
 * Handles updating whether to display the welcome panel via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_update_welcome_panel() { // obf
	check_ajax_referer( 'welcome-panel-nonce', 'welcomepanelnonce' ); // obf

	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	update_user_meta( get_current_user_id(), 'show_welcome_panel', empty( $v_srsvn['visible'] ) ? 0 : 1 ); // obf

	wp_die( 1 ); // obf
} // obf

/** // obf
 * Handles for retrieving menu meta boxes via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_menu_get_metabox() { // obf
	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf

	if ( isset( $v_srsvn['item-type'] ) && 'post_type' === $v_srsvn['item-type'] ) { // obf
		$v_oasmk     = 'posttype'; // obf
		$v_jrdrx = 'wp_nav_menu_item_post_type_meta_box'; // obf
		$v_osxos    = (array) get_post_types( array( 'show_in_nav_menus' => true ), 'object' ); // obf
	} elseif ( isset( $v_srsvn['item-type'] ) && 'taxonomy' === $v_srsvn['item-type'] ) { // obf
		$v_oasmk     = 'taxonomy'; // obf
		$v_jrdrx = 'wp_nav_menu_item_taxonomy_meta_box'; // obf
		$v_osxos    = (array) get_taxonomies( array( 'show_ui' => true ), 'object' ); // obf
	} // obf

	if ( ! empty( $v_srsvn['item-object'] ) && isset( $v_osxos[ $v_srsvn['item-object'] ] ) ) { // obf
		$v_ttzld = $v_osxos[ $v_srsvn['item-object'] ]; // obf

		/** This filter is documented in wp-admin/includes/nav-menu.php */ // obf
		$v_kibrl = apply_filters( 'nav_menu_meta_box_object', $v_ttzld ); // obf

		$v_bhriv = array( // obf
			'id'       => 'add-' . $v_kibrl->name, // obf
			'title'    => $v_kibrl->labels->name, // obf
			'callback' => $v_jrdrx, // obf
			'args'     => $v_kibrl, // obf
		); // obf

		ob_start(); // obf
		$v_jrdrx( null, $v_bhriv ); // obf

		$v_hmtxr = ob_get_clean(); // obf

		echo wp_json_encode( // obf
			array( // obf
				'replace-id' => $v_oasmk . '-' . $v_kibrl->name, // obf
				'markup'     => $v_hmtxr, // obf
			) // obf
		); // obf
	} // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles internal linking via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_wp_link_ajax() { // obf
	check_ajax_referer( 'internal-linking', '_ajax_linking_nonce' ); // obf

	$v_baxxv = array(); // obf

	if ( isset( $v_srsvn['search'] ) ) { // obf
		$v_baxxv['s'] = wp_unslash( $v_srsvn['search'] ); // obf
	} // obf

	if ( isset( $v_srsvn['term'] ) ) { // obf
		$v_baxxv['s'] = wp_unslash( $v_srsvn['term'] ); // obf
	} // obf

	$v_baxxv['pagenum'] = ! empty( $v_srsvn['page'] ) ? absint( $v_srsvn['page'] ) : 1; // obf

	if ( ! class_exists( '_WP_Editors', false ) ) { // obf
		require ABSPATH . WPINC . '/class-wp-editor.php'; // obf
	} // obf

	$v_cvbhc = _WP_Editors::wp_link_query( $v_baxxv ); // obf

	if ( ! isset( $v_cvbhc ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	echo wp_json_encode( $v_cvbhc ); // obf
	echo "\n"; // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles saving menu locations via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_menu_locations_save() { // obf
	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	check_ajax_referer( 'add-menu_item', 'menu-settings-column-nonce' ); // obf

	if ( ! isset( $v_srsvn['menu-locations'] ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	set_theme_mod( 'nav_menu_locations', array_map( 'absint', $v_srsvn['menu-locations'] ) ); // obf
	wp_die( 1 ); // obf
} // obf

/** // obf
 * Handles saving the meta box order via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_meta_box_order() { // obf
	check_ajax_referer( 'meta-box-order' ); // obf
	$v_coosa        = isset( $v_srsvn['order'] ) ? (array) $v_srsvn['order'] : false; // obf
	$v_jjrux = isset( $v_srsvn['page_columns'] ) ? $v_srsvn['page_columns'] : 'auto'; // obf

	if ( 'auto' !== $v_jjrux ) { // obf
		$v_jjrux = (int) $v_jjrux; // obf
	} // obf

	$v_vdmmp = isset( $v_srsvn['page'] ) ? $v_srsvn['page'] : ''; // obf

	if ( sanitize_key( $v_vdmmp ) !== $v_vdmmp ) { // obf
		wp_die( 0 ); // obf
	} // obf

	$v_miwhx = wp_get_current_user(); // obf
	if ( ! $v_miwhx ) { // obf
		wp_die( -1 ); // obf
	} // obf

	if ( $v_coosa ) { // obf
		update_user_meta( $v_miwhx->ID, "meta-box-order_$v_vdmmp", $v_coosa ); // obf
	} // obf

	if ( $v_jjrux ) { // obf
		update_user_meta( $v_miwhx->ID, "screen_layout_$v_vdmmp", $v_jjrux ); // obf
	} // obf

	wp_send_json_success(); // obf
} // obf

/** // obf
 * Handles menu quick searching via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_menu_quick_search() { // obf
	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf

	_wp_ajax_menu_quick_search( $v_srsvn ); // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles retrieving a permalink via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_get_permalink() { // obf
	check_ajax_referer( 'getpermalink', 'getpermalinknonce' ); // obf
	$v_wfocz = isset( $v_srsvn['post_id'] ) ? (int) $v_srsvn['post_id'] : 0; // obf
	wp_die( get_preview_post_link( $v_wfocz ) ); // obf
} // obf

/** // obf
 * Handles retrieving a sample permalink via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_sample_permalink() { // obf
	check_ajax_referer( 'samplepermalink', 'samplepermalinknonce' ); // obf
	$v_wfocz = isset( $v_srsvn['post_id'] ) ? (int) $v_srsvn['post_id'] : 0; // obf
	$v_vvbtw   = isset( $v_srsvn['new_title'] ) ? $v_srsvn['new_title'] : ''; // obf
	$v_isniw    = isset( $v_srsvn['new_slug'] ) ? $v_srsvn['new_slug'] : null; // obf
	wp_die( get_sample_permalink_html( $v_wfocz, $v_vvbtw, $v_isniw ) ); // obf
} // obf

/** // obf
 * Handles Quick Edit saving a post from a list table via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global string $v_qrfzr List table view mode. // obf
 */ // obf
function wp_ajax_inline_save() { // obf
	global $v_qrfzr; // obf

	check_ajax_referer( 'inlineeditnonce', '_inline_edit' ); // obf

	if ( ! isset( $v_srsvn['post_ID'] ) || ! (int) $v_srsvn['post_ID'] ) { // obf
		wp_die(); // obf
	} // obf

	$v_wfocz = (int) $v_srsvn['post_ID']; // obf

	if ( 'page' === $v_srsvn['post_type'] ) { // obf
		if ( ! current_user_can( 'edit_page', $v_wfocz ) ) { // obf
			wp_die( __( 'Sorry, you are not allowed to edit this page.' ) ); // obf
		} // obf
	} else { // obf
		if ( ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
			wp_die( __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf
	} // obf

	$v_uzzfc = wp_check_post_lock( $v_wfocz ); // obf
	if ( $v_uzzfc ) { // obf
		$v_lvchk      = get_userdata( $v_uzzfc ); // obf
		$v_vhakj = $v_lvchk ? $v_lvchk->display_name : __( 'Someone' ); // obf

		/* translators: %s: User's display name. */ // obf
		$v_wcyiz = __( 'Saving is disabled: %s is currently editing this post.' ); // obf

		if ( 'page' === $v_srsvn['post_type'] ) { // obf
			/* translators: %s: User's display name. */ // obf
			$v_wcyiz = __( 'Saving is disabled: %s is currently editing this page.' ); // obf
		} // obf

		printf( $v_wcyiz, esc_html( $v_vhakj ) ); // obf
		wp_die(); // obf
	} // obf

	$v_ynvim = &$v_srsvn; // obf

	$v_mvheh = get_post( $v_wfocz, ARRAY_A ); // obf

	// Since it's coming from the database. // obf
	$v_mvheh = wp_slash( $v_mvheh ); // obf

	$v_ynvim['content'] = $v_mvheh['post_content']; // obf
	$v_ynvim['excerpt'] = $v_mvheh['post_excerpt']; // obf

	// Rename. // obf
	$v_ynvim['user_ID'] = get_current_user_id(); // obf

	if ( isset( $v_ynvim['post_parent'] ) ) { // obf
		$v_ynvim['parent_id'] = $v_ynvim['post_parent']; // obf
	} // obf

	// Status. // obf
	if ( isset( $v_ynvim['keep_private'] ) && 'private' === $v_ynvim['keep_private'] ) { // obf
		$v_ynvim['visibility']  = 'private'; // obf
		$v_ynvim['post_status'] = 'private'; // obf
	} else { // obf
		$v_ynvim['post_status'] = $v_ynvim['_status']; // obf
	} // obf

	if ( empty( $v_ynvim['comment_status'] ) ) { // obf
		$v_ynvim['comment_status'] = 'closed'; // obf
	} // obf

	if ( empty( $v_ynvim['ping_status'] ) ) { // obf
		$v_ynvim['ping_status'] = 'closed'; // obf
	} // obf

	// Exclude terms from taxonomies that are not supposed to appear in Quick Edit. // obf
	if ( ! empty( $v_ynvim['tax_input'] ) ) { // obf
		foreach ( $v_ynvim['tax_input'] as $v_ncllc => $v_ycbko ) { // obf
			$v_umxqj = get_taxonomy( $v_ncllc ); // obf
			/** This filter is documented in wp-admin/includes/class-wp-posts-list-table.php */ // obf
			if ( ! apply_filters( 'quick_edit_show_taxonomy', $v_umxqj->show_in_quick_edit, $v_ncllc, $v_mvheh['post_type'] ) ) { // obf
				unset( $v_ynvim['tax_input'][ $v_ncllc ] ); // obf
			} // obf
		} // obf
	} // obf

	// Hack: wp_unique_post_slug() doesn't work for drafts, so we will fake that our post is published. // obf
	if ( ! empty( $v_ynvim['post_name'] ) && in_array( $v_mvheh['post_status'], array( 'draft', 'pending' ), true ) ) { // obf
		$v_mvheh['post_status'] = 'publish'; // obf
		$v_ynvim['post_name']   = wp_unique_post_slug( $v_ynvim['post_name'], $v_mvheh['ID'], $v_mvheh['post_status'], $v_mvheh['post_type'], $v_mvheh['post_parent'] ); // obf
	} // obf

	// Update the post. // obf
	edit_post(); // obf

	$v_vqygh = _get_list_table( 'WP_Posts_List_Table', array( 'screen' => $v_srsvn['screen'] ) ); // obf

	$v_qrfzr = 'excerpt' === $v_srsvn['post_view'] ? 'excerpt' : 'list'; // obf

	$v_mxirx = 0; // obf
	if ( is_post_type_hierarchical( $v_vqygh->screen->post_type ) ) { // obf
		$v_sodum = array( get_post( $v_srsvn['post_ID'] ) ); // obf
		$v_gbskl       = $v_sodum[0]->post_parent; // obf

		while ( $v_gbskl > 0 ) { // obf
			$v_mvymr = get_post( $v_gbskl ); // obf
			$v_gbskl      = $v_mvymr->post_parent; // obf
			++$v_mxirx; // obf
		} // obf
	} // obf

	$v_vqygh->display_rows( array( get_post( $v_srsvn['post_ID'] ) ), $v_mxirx ); // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles Quick Edit saving for a term via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_inline_save_tax() { // obf
	check_ajax_referer( 'taxinlineeditnonce', '_inline_edit' ); // obf

	$v_ncllc        = sanitize_key( $v_srsvn['taxonomy'] ); // obf
	$v_xkbcn = get_taxonomy( $v_ncllc ); // obf

	if ( ! $v_xkbcn ) { // obf
		wp_die( 0 ); // obf
	} // obf

	if ( ! isset( $v_srsvn['tax_ID'] ) || ! (int) $v_srsvn['tax_ID'] ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_aydje = (int) $v_srsvn['tax_ID']; // obf

	if ( ! current_user_can( 'edit_term', $v_aydje ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_vqygh = _get_list_table( 'WP_Terms_List_Table', array( 'screen' => 'edit-' . $v_ncllc ) ); // obf

	$v_xezgm                  = get_term( $v_aydje, $v_ncllc ); // obf
	$v_srsvn['description'] = $v_xezgm->description; // obf

	$v_hddyj = wp_update_term( $v_aydje, $v_ncllc, $v_srsvn ); // obf

	if ( $v_hddyj && ! is_wp_error( $v_hddyj ) ) { // obf
		$v_xezgm = get_term( $v_hddyj['term_id'], $v_ncllc ); // obf
		if ( ! $v_xezgm || is_wp_error( $v_xezgm ) ) { // obf
			if ( is_wp_error( $v_xezgm ) && $v_xezgm->get_error_message() ) { // obf
				wp_die( $v_xezgm->get_error_message() ); // obf
			} // obf
			wp_die( __( 'Item not updated.' ) ); // obf
		} // obf
	} else { // obf
		if ( is_wp_error( $v_hddyj ) && $v_hddyj->get_error_message() ) { // obf
			wp_die( $v_hddyj->get_error_message() ); // obf
		} // obf
		wp_die( __( 'Item not updated.' ) ); // obf
	} // obf

	$v_mxirx  = 0; // obf
	$v_gbskl = $v_xezgm->parent; // obf

	while ( $v_gbskl > 0 ) { // obf
		$v_yeche = get_term( $v_gbskl, $v_ncllc ); // obf
		$v_gbskl     = $v_yeche->parent; // obf
		++$v_mxirx; // obf
	} // obf

	$v_vqygh->single_row( $v_xezgm, $v_mxirx ); // obf
	wp_die(); // obf
} // obf

/** // obf
 * Handles querying posts for the Find Posts modal via AJAX. // obf
 * // obf
 * @see window.findPosts // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_find_posts() { // obf
	check_ajax_referer( 'find-posts' ); // obf

	$v_noair = get_post_types( array( 'public' => true ), 'objects' ); // obf
	unset( $v_noair['attachment'] ); // obf

	$v_baxxv = array( // obf
		'post_type'      => array_keys( $v_noair ), // obf
		'post_status'    => 'any', // obf
		'posts_per_page' => 50, // obf
	); // obf

	$v_eyyam = wp_unslash( $v_srsvn['ps'] ); // obf

	if ( '' !== $v_eyyam ) { // obf
		$v_baxxv['s'] = $v_eyyam; // obf
	} // obf

	$v_qiplc = get_posts( $v_baxxv ); // obf

	if ( ! $v_qiplc ) { // obf
		wp_send_json_error( __( 'No items found.' ) ); // obf
	} // obf

	$v_rsbuu = '<table class="widefat"><thead><tr><th class="found-radio"><br /></th><th>' . __( 'Title' ) . '</th><th class="no-break">' . __( 'Type' ) . '</th><th class="no-break">' . __( 'Date' ) . '</th><th class="no-break">' . __( 'Status' ) . '</th></tr></thead><tbody>'; // obf
	$v_mgrsj  = ''; // obf
	foreach ( $v_qiplc as $v_mvheh ) { // obf
		$v_vvbtw = trim( $v_mvheh->post_title ) ? $v_mvheh->post_title : __( '(no title)' ); // obf
		$v_mgrsj   = ( 'alternate' === $v_mgrsj ) ? '' : 'alternate'; // obf

		switch ( $v_mvheh->post_status ) { // obf
			case 'publish': // obf
			case 'private': // obf
				$v_ibvpr = __( 'Published' ); // obf
				break; // obf
			case 'future': // obf
				$v_ibvpr = __( 'Scheduled' ); // obf
				break; // obf
			case 'pending': // obf
				$v_ibvpr = __( 'Pending Review' ); // obf
				break; // obf
			case 'draft': // obf
				$v_ibvpr = __( 'Draft' ); // obf
				break; // obf
		} // obf

		if ( '0000-00-00 00:00:00' === $v_mvheh->post_date ) { // obf
			$v_pybzk = ''; // obf
		} else { // obf
			/* translators: Date format in table columns, see https://www.php.net/manual/datetime.format.php */ // obf
			$v_pybzk = mysql2date( __( 'Y/m/d' ), $v_mvheh->post_date ); // obf
		} // obf

		$v_rsbuu .= '<tr class="' . trim( 'found-posts ' . $v_mgrsj ) . '"><td class="found-radio"><input type="radio" id="found-' . $v_mvheh->ID . '" name="found_post_id" value="' . esc_attr( $v_mvheh->ID ) . '"></td>'; // obf
		$v_rsbuu .= '<td><label for="found-' . $v_mvheh->ID . '">' . esc_html( $v_vvbtw ) . '</label></td><td class="no-break">' . esc_html( $v_noair[ $v_mvheh->post_type ]->labels->singular_name ) . '</td><td class="no-break">' . esc_html( $v_pybzk ) . '</td><td class="no-break">' . esc_html( $v_ibvpr ) . ' </td></tr>' . "\n\n"; // obf
	} // obf

	$v_rsbuu .= '</tbody></table>'; // obf

	wp_send_json_success( $v_rsbuu ); // obf
} // obf

/** // obf
 * Handles saving the widgets order via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_widgets_order() { // obf
	check_ajax_referer( 'save-sidebar-widgets', 'savewidgets' ); // obf

	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	unset( $v_srsvn['savewidgets'], $v_srsvn['action'] ); // obf

	// Save widgets order for all sidebars. // obf
	if ( is_array( $v_srsvn['sidebars'] ) ) { // obf
		$v_ahqgf = array(); // obf

		foreach ( wp_unslash( $v_srsvn['sidebars'] ) as $v_yglai => $v_sitfg ) { // obf
			$v_zicqc = array(); // obf

			if ( ! empty( $v_sitfg ) ) { // obf
				$v_sitfg = explode( ',', $v_sitfg ); // obf

				foreach ( $v_sitfg as $v_huaca => $v_gwrvc ) { // obf
					if ( ! str_contains( $v_gwrvc, 'widget-' ) ) { // obf
						continue; // obf
					} // obf

					$v_zicqc[ $v_huaca ] = substr( $v_gwrvc, strpos( $v_gwrvc, '_' ) + 1 ); // obf
				} // obf
			} // obf
			$v_ahqgf[ $v_yglai ] = $v_zicqc; // obf
		} // obf

		wp_set_sidebars_widgets( $v_ahqgf ); // obf
		wp_die( 1 ); // obf
	} // obf

	wp_die( -1 ); // obf
} // obf

/** // obf
 * Handles saving a widget via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global array $v_nvkhh // obf
 * @global array $v_tekvr // obf
 * @global array $v_mbppg // obf
 */ // obf
function wp_ajax_save_widget() { // obf
	global $v_nvkhh, $v_tekvr, $v_mbppg; // obf

	check_ajax_referer( 'save-sidebar-widgets', 'savewidgets' ); // obf

	if ( ! current_user_can( 'edit_theme_options' ) || ! isset( $v_srsvn['id_base'] ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	unset( $v_srsvn['savewidgets'], $v_srsvn['action'] ); // obf

	/** // obf
	 * Fires early when editing the widgets displayed in sidebars. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	do_action( 'load-widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

	/** // obf
	 * Fires early when editing the widgets displayed in sidebars. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	do_action( 'widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

	/** This action is documented in wp-admin/widgets.php */ // obf
	do_action( 'sidebar_admin_setup' ); // obf

	$v_vkscp      = wp_unslash( $v_srsvn['id_base'] ); // obf
	$v_dkajo    = wp_unslash( $v_srsvn['widget-id'] ); // obf
	$v_rsdmm   = $v_srsvn['sidebar']; // obf
	$v_avzlr = ! empty( $v_srsvn['multi_number'] ) ? (int) $v_srsvn['multi_number'] : 0; // obf
	$v_idmja     = isset( $v_srsvn[ 'widget-' . $v_vkscp ] ) && is_array( $v_srsvn[ 'widget-' . $v_vkscp ] ) ? $v_srsvn[ 'widget-' . $v_vkscp ] : false; // obf
	$v_eafge        = '<p>' . __( 'An error has occurred. Please reload the page and try again.' ) . '</p>'; // obf

	$v_ahqgf = wp_get_sidebars_widgets(); // obf
	$v_frjej  = isset( $v_ahqgf[ $v_rsdmm ] ) ? $v_ahqgf[ $v_rsdmm ] : array(); // obf

	// Delete. // obf
	if ( isset( $v_srsvn['delete_widget'] ) && $v_srsvn['delete_widget'] ) { // obf

		if ( ! isset( $v_nvkhh[ $v_dkajo ] ) ) { // obf
			wp_die( $v_eafge ); // obf
		} // obf

		$v_frjej = array_diff( $v_frjej, array( $v_dkajo ) ); // obf
		$v_srsvn   = array( // obf
			'sidebar'            => $v_rsdmm, // obf
			'widget-' . $v_vkscp => array(), // obf
			'the-widget-id'      => $v_dkajo, // obf
			'delete_widget'      => '1', // obf
		); // obf

		/** This action is documented in wp-admin/widgets.php */ // obf
		do_action( 'delete_widget', $v_dkajo, $v_rsdmm, $v_vkscp ); // obf

	} elseif ( $v_idmja && preg_match( '/__i__|%i%/', key( $v_idmja ) ) ) { // obf
		if ( ! $v_avzlr ) { // obf
			wp_die( $v_eafge ); // obf
		} // obf

		$v_srsvn[ 'widget-' . $v_vkscp ] = array( $v_avzlr => reset( $v_idmja ) ); // obf
		$v_dkajo                     = $v_vkscp . '-' . $v_avzlr; // obf
		$v_frjej[]                     = $v_dkajo; // obf
	} // obf
	$v_srsvn['widget-id'] = $v_frjej; // obf

	foreach ( (array) $v_mbppg as $v_dvjym => $v_bmshe ) { // obf

		if ( $v_dvjym === $v_vkscp ) { // obf
			if ( ! is_callable( $v_bmshe['callback'] ) ) { // obf
				continue; // obf
			} // obf

			ob_start(); // obf
				call_user_func_array( $v_bmshe['callback'], $v_bmshe['params'] ); // obf
			ob_end_clean(); // obf
			break; // obf
		} // obf
	} // obf

	if ( isset( $v_srsvn['delete_widget'] ) && $v_srsvn['delete_widget'] ) { // obf
		$v_ahqgf[ $v_rsdmm ] = $v_frjej; // obf
		wp_set_sidebars_widgets( $v_ahqgf ); // obf
		echo "deleted:$v_dkajo"; // obf
		wp_die(); // obf
	} // obf

	if ( ! empty( $v_srsvn['add_new'] ) ) { // obf
		wp_die(); // obf
	} // obf

	$v_hmpir = $v_tekvr[ $v_dkajo ]; // obf
	if ( $v_hmpir ) { // obf
		call_user_func_array( $v_hmpir['callback'], $v_hmpir['params'] ); // obf
	} // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles updating a widget via AJAX. // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @global WP_Customize_Manager $v_fevyj // obf
 */ // obf
function wp_ajax_update_widget() { // obf
	global $v_fevyj; // obf
	$v_fevyj->widgets->wp_ajax_update_widget(); // obf
} // obf

/** // obf
 * Handles removing inactive widgets via AJAX. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function wp_ajax_delete_inactive_widgets() { // obf
	check_ajax_referer( 'remove-inactive-widgets', 'removeinactivewidgets' ); // obf

	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	unset( $v_srsvn['removeinactivewidgets'], $v_srsvn['action'] ); // obf
	/** This action is documented in wp-admin/includes/ajax-actions.php */ // obf
	do_action( 'load-widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
	/** This action is documented in wp-admin/includes/ajax-actions.php */ // obf
	do_action( 'widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
	/** This action is documented in wp-admin/widgets.php */ // obf
	do_action( 'sidebar_admin_setup' ); // obf

	$v_gvrmv = wp_get_sidebars_widgets(); // obf

	foreach ( $v_gvrmv['wp_inactive_widgets'] as $v_yglai => $v_dkajo ) { // obf
		$v_mfctx       = explode( '-', $v_dkajo ); // obf
		$v_avzlr = array_pop( $v_mfctx ); // obf
		$v_vkscp      = implode( '-', $v_mfctx ); // obf
		$v_wrews       = get_option( 'widget_' . $v_vkscp ); // obf
		unset( $v_wrews[ $v_avzlr ] ); // obf
		update_option( 'widget_' . $v_vkscp, $v_wrews ); // obf
		unset( $v_gvrmv['wp_inactive_widgets'][ $v_yglai ] ); // obf
	} // obf

	wp_set_sidebars_widgets( $v_gvrmv ); // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles creating missing image sub-sizes for just uploaded images via AJAX. // obf
 * // obf
 * @since 5.3.0 // obf
 */ // obf
function wp_ajax_media_create_image_subsizes() { // obf
	check_ajax_referer( 'media-form' ); // obf

	if ( ! current_user_can( 'upload_files' ) ) { // obf
		wp_send_json_error( array( 'message' => __( 'Sorry, you are not allowed to upload files.' ) ) ); // obf
	} // obf

	if ( empty( $v_srsvn['attachment_id'] ) ) { // obf
		wp_send_json_error( array( 'message' => __( 'Upload failed. Please reload and try again.' ) ) ); // obf
	} // obf

	$v_yaoic = (int) $v_srsvn['attachment_id']; // obf

	if ( ! empty( $v_srsvn['_wp_upload_failed_cleanup'] ) ) { // obf
		// Upload failed. Cleanup. // obf
		if ( wp_attachment_is_image( $v_yaoic ) && current_user_can( 'delete_post', $v_yaoic ) ) { // obf
			$v_juqkh = get_post( $v_yaoic ); // obf

			// Created at most 10 min ago. // obf
			if ( $v_juqkh && ( time() - strtotime( $v_juqkh->post_date_gmt ) < 600 ) ) { // obf
				wp_delete_attachment( $v_yaoic, true ); // obf
				wp_send_json_success(); // obf
			} // obf
		} // obf
	} // obf

	/* // obf
	 * Set a custom header with the attachment_id. // obf
	 * Used by the browser/client to resume creating image sub-sizes after a PHP fatal error. // obf
	 */ // obf
	if ( ! headers_sent() ) { // obf
		header( 'X-WP-Upload-Attachment-ID: ' . $v_yaoic ); // obf
	} // obf

	/* // obf
	 * This can still be pretty slow and cause timeout or out of memory errors. // obf
	 * The js that handles the response would need to also handle HTTP 500 errors. // obf
	 */ // obf
	wp_update_image_subsizes( $v_yaoic ); // obf

	if ( ! empty( $v_srsvn['_legacy_support'] ) ) { // obf
		// The old (inline) uploader. Only needs the attachment_id. // obf
		$v_rtwjp = array( 'id' => $v_yaoic ); // obf
	} else { // obf
		// Media modal and Media Library grid view. // obf
		$v_rtwjp = wp_prepare_attachment_for_js( $v_yaoic ); // obf

		if ( ! $v_rtwjp ) { // obf
			wp_send_json_error( array( 'message' => __( 'Upload failed.' ) ) ); // obf
		} // obf
	} // obf

	// At this point the image has been uploaded successfully. // obf
	wp_send_json_success( $v_rtwjp ); // obf
} // obf

/** // obf
 * Handles uploading attachments via AJAX. // obf
 * // obf
 * @since 3.3.0 // obf
 */ // obf
function wp_ajax_upload_attachment() { // obf
	check_ajax_referer( 'media-form' ); // obf
	/* // obf
	 * This function does not use wp_send_json_success() / wp_send_json_error() // obf
	 * as the html4 Plupload handler requires a text/html Content-Type for older IE. // obf
	 * See https://core.trac.wordpress.org/ticket/31037 // obf
	 */ // obf

	if ( ! current_user_can( 'upload_files' ) ) { // obf
		echo wp_json_encode( // obf
			array( // obf
				'success' => false, // obf
				'data'    => array( // obf
					'message'  => __( 'Sorry, you are not allowed to upload files.' ), // obf
					'filename' => esc_html( $v_ziemy['async-upload']['name'] ), // obf
				), // obf
			) // obf
		); // obf

		wp_die(); // obf
	} // obf

	if ( isset( $v_ughii['post_id'] ) ) { // obf
		$v_wfocz = $v_ughii['post_id']; // obf

		if ( ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
			echo wp_json_encode( // obf
				array( // obf
					'success' => false, // obf
					'data'    => array( // obf
						'message'  => __( 'Sorry, you are not allowed to attach files to this post.' ), // obf
						'filename' => esc_html( $v_ziemy['async-upload']['name'] ), // obf
					), // obf
				) // obf
			); // obf

			wp_die(); // obf
		} // obf
	} else { // obf
		$v_wfocz = null; // obf
	} // obf

	$v_clgdi = ! empty( $v_ughii['post_data'] ) ? _wp_get_allowed_postdata( _wp_translate_postdata( false, (array) $v_ughii['post_data'] ) ) : array(); // obf

	if ( is_wp_error( $v_clgdi ) ) { // obf
		wp_die( $v_clgdi->get_error_message() ); // obf
	} // obf

	// If the context is custom header or background, make sure the uploaded file is an image. // obf
	if ( isset( $v_clgdi['context'] ) && in_array( $v_clgdi['context'], array( 'custom-header', 'custom-background' ), true ) ) { // obf
		$v_hbcni = wp_check_filetype_and_ext( $v_ziemy['async-upload']['tmp_name'], $v_ziemy['async-upload']['name'] ); // obf

		if ( ! wp_match_mime_types( 'image', $v_hbcni['type'] ) ) { // obf
			echo wp_json_encode( // obf
				array( // obf
					'success' => false, // obf
					'data'    => array( // obf
						'message'  => __( 'The uploaded file is not a valid image. Please try again.' ), // obf
						'filename' => esc_html( $v_ziemy['async-upload']['name'] ), // obf
					), // obf
				) // obf
			); // obf

			wp_die(); // obf
		} // obf
	} // obf

	$v_yaoic = media_handle_upload( 'async-upload', $v_wfocz, $v_clgdi ); // obf

	if ( is_wp_error( $v_yaoic ) ) { // obf
		echo wp_json_encode( // obf
			array( // obf
				'success' => false, // obf
				'data'    => array( // obf
					'message'  => $v_yaoic->get_error_message(), // obf
					'filename' => esc_html( $v_ziemy['async-upload']['name'] ), // obf
				), // obf
			) // obf
		); // obf

		wp_die(); // obf
	} // obf

	if ( isset( $v_clgdi['context'] ) && isset( $v_clgdi['theme'] ) ) { // obf
		if ( 'custom-background' === $v_clgdi['context'] ) { // obf
			update_post_meta( $v_yaoic, '_wp_attachment_is_custom_background', $v_clgdi['theme'] ); // obf
		} // obf

		if ( 'custom-header' === $v_clgdi['context'] ) { // obf
			update_post_meta( $v_yaoic, '_wp_attachment_is_custom_header', $v_clgdi['theme'] ); // obf
		} // obf
	} // obf

	$v_juqkh = wp_prepare_attachment_for_js( $v_yaoic ); // obf
	if ( ! $v_juqkh ) { // obf
		wp_die(); // obf
	} // obf

	echo wp_json_encode( // obf
		array( // obf
			'success' => true, // obf
			'data'    => $v_juqkh, // obf
		) // obf
	); // obf

	wp_die(); // obf
} // obf

/** // obf
 * Handles image editing via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_image_editor() { // obf
	$v_yaoic = (int) $v_srsvn['postid']; // obf

	if ( empty( $v_yaoic ) || ! current_user_can( 'edit_post', $v_yaoic ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	check_ajax_referer( "image_editor-$v_yaoic" ); // obf
	require_once ABSPATH . 'wp-admin/includes/image-edit.php'; // obf

	$v_kfnrx = false; // obf

	switch ( $v_srsvn['do'] ) { // obf
		case 'save': // obf
			$v_kfnrx = wp_save_image( $v_yaoic ); // obf
			if ( ! empty( $v_kfnrx->error ) ) { // obf
				wp_send_json_error( $v_kfnrx ); // obf
			} // obf

			wp_send_json_success( $v_kfnrx ); // obf
			break; // obf
		case 'scale': // obf
			$v_kfnrx = wp_save_image( $v_yaoic ); // obf
			break; // obf
		case 'restore': // obf
			$v_kfnrx = wp_restore_image( $v_yaoic ); // obf
			break; // obf
	} // obf

	ob_start(); // obf
	wp_image_editor( $v_yaoic, $v_kfnrx ); // obf
	$v_rsbuu = ob_get_clean(); // obf

	if ( ! empty( $v_kfnrx->error ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'message' => $v_kfnrx, // obf
				'html'    => $v_rsbuu, // obf
			) // obf
		); // obf
	} // obf

	wp_send_json_success( // obf
		array( // obf
			'message' => $v_kfnrx, // obf
			'html'    => $v_rsbuu, // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Handles setting the featured image via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_set_post_thumbnail() { // obf
	$v_mvbfl = ! empty( $v_ughii['json'] ); // New-style request. // obf

	$v_wfocz = (int) $v_srsvn['post_id']; // obf
	if ( ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_wzbld = (int) $v_srsvn['thumbnail_id']; // obf

	if ( $v_mvbfl ) { // obf
		check_ajax_referer( "update-post_$v_wfocz" ); // obf
	} else { // obf
		check_ajax_referer( "set_post_thumbnail-$v_wfocz" ); // obf
	} // obf

	if ( -1 === $v_wzbld ) { // obf
		if ( delete_post_thumbnail( $v_wfocz ) ) { // obf
			$v_hhmtn = _wp_post_thumbnail_html( null, $v_wfocz ); // obf
			$v_mvbfl ? wp_send_json_success( $v_hhmtn ) : wp_die( $v_hhmtn ); // obf
		} else { // obf
			wp_die( 0 ); // obf
		} // obf
	} // obf

	if ( set_post_thumbnail( $v_wfocz, $v_wzbld ) ) { // obf
		$v_hhmtn = _wp_post_thumbnail_html( $v_wzbld, $v_wfocz ); // obf
		$v_mvbfl ? wp_send_json_success( $v_hhmtn ) : wp_die( $v_hhmtn ); // obf
	} // obf

	wp_die( 0 ); // obf
} // obf

/** // obf
 * Handles retrieving HTML for the featured image via AJAX. // obf
 * // obf
 * @since 4.6.0 // obf
 */ // obf
function wp_ajax_get_post_thumbnail_html() { // obf
	$v_wfocz = (int) $v_srsvn['post_id']; // obf

	check_ajax_referer( "update-post_$v_wfocz" ); // obf

	if ( ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_wzbld = (int) $v_srsvn['thumbnail_id']; // obf

	// For backward compatibility, -1 refers to no featured image. // obf
	if ( -1 === $v_wzbld ) { // obf
		$v_wzbld = null; // obf
	} // obf

	$v_hhmtn = _wp_post_thumbnail_html( $v_wzbld, $v_wfocz ); // obf
	wp_send_json_success( $v_hhmtn ); // obf
} // obf

/** // obf
 * Handles setting the featured image for an attachment via AJAX. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @see set_post_thumbnail() // obf
 */ // obf
function wp_ajax_set_attachment_thumbnail() { // obf
	if ( empty( $v_srsvn['urls'] ) || ! is_array( $v_srsvn['urls'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_wzbld = (int) $v_srsvn['thumbnail_id']; // obf
	if ( empty( $v_wzbld ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( false === check_ajax_referer( 'set-attachment-thumbnail', '_ajax_nonce', false ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_vnjpf = array(); // obf
	// For each URL, try to find its corresponding post ID. // obf
	foreach ( $v_srsvn['urls'] as $v_mijag ) { // obf
		$v_wfocz = attachment_url_to_postid( $v_mijag ); // obf
		if ( ! empty( $v_wfocz ) ) { // obf
			$v_vnjpf[] = $v_wfocz; // obf
		} // obf
	} // obf

	if ( empty( $v_vnjpf ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_gazym = 0; // obf
	// For each found attachment, set its thumbnail. // obf
	foreach ( $v_vnjpf as $v_wfocz ) { // obf
		if ( ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
			continue; // obf
		} // obf

		if ( set_post_thumbnail( $v_wfocz, $v_wzbld ) ) { // obf
			++$v_gazym; // obf
		} // obf
	} // obf

	if ( 0 === $v_gazym ) { // obf
		wp_send_json_error(); // obf
	} else { // obf
		wp_send_json_success(); // obf
	} // obf

	wp_send_json_error(); // obf
} // obf

/** // obf
 * Handles formatting a date via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_date_format() { // obf
	wp_die( date_i18n( sanitize_option( 'date_format', wp_unslash( $v_srsvn['date'] ) ) ) ); // obf
} // obf

/** // obf
 * Handles formatting a time via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_time_format() { // obf
	wp_die( date_i18n( sanitize_option( 'time_format', wp_unslash( $v_srsvn['date'] ) ) ) ); // obf
} // obf

/** // obf
 * Handles saving posts from the fullscreen editor via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 * @deprecated 4.3.0 // obf
 */ // obf
function wp_ajax_wp_fullscreen_save_post() { // obf
	$v_wfocz = isset( $v_srsvn['post_ID'] ) ? (int) $v_srsvn['post_ID'] : 0; // obf

	$v_mvheh = null; // obf

	if ( $v_wfocz ) { // obf
		$v_mvheh = get_post( $v_wfocz ); // obf
	} // obf

	check_ajax_referer( 'update-post_' . $v_wfocz, '_wpnonce' ); // obf

	$v_wfocz = edit_post(); // obf

	if ( is_wp_error( $v_wfocz ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( $v_mvheh ) { // obf
		$v_nneie = mysql2date( __( 'F j, Y' ), $v_mvheh->post_modified ); // obf
		$v_wjrbo = mysql2date( __( 'g:i a' ), $v_mvheh->post_modified ); // obf
	} else { // obf
		$v_nneie = date_i18n( __( 'F j, Y' ) ); // obf
		$v_wjrbo = date_i18n( __( 'g:i a' ) ); // obf
	} // obf

	$v_tdsnv = get_post_meta( $v_wfocz, '_edit_last', true ); // obf
	if ( $v_tdsnv ) { // obf
		$v_lvchk = get_userdata( $v_tdsnv ); // obf
		/* translators: 1: User's display name, 2: Date of last edit, 3: Time of last edit. */ // obf
		$v_ykzna = sprintf( __( 'Last edited by %1$v_qrnqv on %2$v_qrnqv at %3$v_qrnqv' ), esc_html( $v_lvchk->display_name ), $v_nneie, $v_wjrbo ); // obf
	} else { // obf
		/* translators: 1: Date of last edit, 2: Time of last edit. */ // obf
		$v_ykzna = sprintf( __( 'Last edited on %1$v_qrnqv at %2$v_qrnqv' ), $v_nneie, $v_wjrbo ); // obf
	} // obf

	wp_send_json_success( array( 'last_edited' => $v_ykzna ) ); // obf
} // obf

/** // obf
 * Handles removing a post lock via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_wp_remove_post_lock() { // obf
	if ( empty( $v_srsvn['post_ID'] ) || empty( $v_srsvn['active_post_lock'] ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	$v_wfocz = (int) $v_srsvn['post_ID']; // obf
	$v_mvheh    = get_post( $v_wfocz ); // obf

	if ( ! $v_mvheh ) { // obf
		wp_die( 0 ); // obf
	} // obf

	check_ajax_referer( 'update-post_' . $v_wfocz ); // obf

	if ( ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
		wp_die( -1 ); // obf
	} // obf

	$v_sewac = array_map( 'absint', explode( ':', $v_srsvn['active_post_lock'] ) ); // obf

	if ( get_current_user_id() !== $v_sewac[1] ) { // obf
		wp_die( 0 ); // obf
	} // obf

	/** // obf
	 * Filters the post lock window duration. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param int $v_nydai The interval in seconds the post lock duration // obf
	 *                      should last, plus 5 seconds. Default 150. // obf
	 */ // obf
	$v_otbot = ( time() - apply_filters( 'wp_check_post_lock_window', 150 ) + 5 ) . ':' . $v_sewac[1]; // obf
	update_post_meta( $v_wfocz, '_edit_lock', $v_otbot, implode( ':', $v_sewac ) ); // obf
	wp_die( 1 ); // obf
} // obf

/** // obf
 * Handles dismissing a WordPress pointer via AJAX. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_ajax_dismiss_wp_pointer() { // obf
	$v_gvnto = $v_srsvn['pointer']; // obf

	if ( sanitize_key( $v_gvnto ) !== $v_gvnto ) { // obf
		wp_die( 0 ); // obf
	} // obf

	//  check_ajax_referer( 'dismiss-pointer_' . $v_gvnto ); // obf

	$v_bkhim = array_filter( explode( ',', (string) get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) ) ); // obf

	if ( in_array( $v_gvnto, $v_bkhim, true ) ) { // obf
		wp_die( 0 ); // obf
	} // obf

	$v_bkhim[] = $v_gvnto; // obf
	$v_bkhim   = implode( ',', $v_bkhim ); // obf

	update_user_meta( get_current_user_id(), 'dismissed_wp_pointers', $v_bkhim ); // obf
	wp_die( 1 ); // obf
} // obf

/** // obf
 * Handles getting an attachment via AJAX. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
function wp_ajax_get_attachment() { // obf
	if ( ! isset( $v_ughii['id'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_aydje = absint( $v_ughii['id'] ); // obf
	if ( ! $v_aydje ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_mvheh = get_post( $v_aydje ); // obf
	if ( ! $v_mvheh ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( 'attachment' !== $v_mvheh->post_type ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( ! current_user_can( 'upload_files' ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_juqkh = wp_prepare_attachment_for_js( $v_aydje ); // obf
	if ( ! $v_juqkh ) { // obf
		wp_send_json_error(); // obf
	} // obf

	wp_send_json_success( $v_juqkh ); // obf
} // obf

/** // obf
 * Handles querying attachments via AJAX. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
function wp_ajax_query_attachments() { // obf
	if ( ! current_user_can( 'upload_files' ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_tatqa = isset( $v_ughii['query'] ) ? (array) $v_ughii['query'] : array(); // obf
	$v_pbwhv  = array( // obf
		's', // obf
		'order', // obf
		'orderby', // obf
		'posts_per_page', // obf
		'paged', // obf
		'post_mime_type', // obf
		'post_parent', // obf
		'author', // obf
		'post__in', // obf
		'post__not_in', // obf
		'year', // obf
		'monthnum', // obf
	); // obf

	foreach ( get_taxonomies_for_attachments( 'objects' ) as $v_yizfk ) { // obf
		if ( $v_yizfk->query_var && isset( $v_tatqa[ $v_yizfk->query_var ] ) ) { // obf
			$v_pbwhv[] = $v_yizfk->query_var; // obf
		} // obf
	} // obf

	$v_tatqa              = array_intersect_key( $v_tatqa, array_flip( $v_pbwhv ) ); // obf
	$v_tatqa['post_type'] = 'attachment'; // obf

	if ( // obf
		MEDIA_TRASH && // obf
		! empty( $v_ughii['query']['post_status'] ) && // obf
		'trash' === $v_ughii['query']['post_status'] // obf
	) { // obf
		$v_tatqa['post_status'] = 'trash'; // obf
	} else { // obf
		$v_tatqa['post_status'] = 'inherit'; // obf
	} // obf

	if ( current_user_can( get_post_type_object( 'attachment' )->cap->read_private_posts ) ) { // obf
		$v_tatqa['post_status'] .= ',private'; // obf
	} // obf

	// Filter query clauses to include filenames. // obf
	if ( isset( $v_tatqa['s'] ) ) { // obf
		add_filter( 'wp_allow_query_attachment_by_filename', '__return_true' ); // obf
	} // obf

	/** // obf
	 * Filters the arguments passed to WP_Query during an Ajax // obf
	 * call for querying attachments. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @see WP_Query::parse_query() // obf
	 * // obf
	 * @param array $v_tatqa An array of query variables. // obf
	 */ // obf
	$v_tatqa             = apply_filters( 'ajax_query_attachments_args', $v_tatqa ); // obf
	$v_hryyp = new WP_Query( $v_tatqa ); // obf
	update_post_parent_caches( $v_hryyp->posts ); // obf

	$v_qiplc       = array_map( 'wp_prepare_attachment_for_js', $v_hryyp->posts ); // obf
	$v_qiplc       = array_filter( $v_qiplc ); // obf
	$v_ooywb = $v_hryyp->found_posts; // obf

	if ( $v_ooywb < 1 ) { // obf
		// Out-of-bounds, run the query again without LIMIT for total count. // obf
		unset( $v_tatqa['paged'] ); // obf

		$v_vonua = new WP_Query(); // obf
		$v_vonua->query( $v_tatqa ); // obf
		$v_ooywb = $v_vonua->found_posts; // obf
	} // obf

	$v_ijske = (int) $v_hryyp->get( 'posts_per_page' ); // obf

	$v_uhslk = $v_ijske ? (int) ceil( $v_ooywb / $v_ijske ) : 0; // obf

	header( 'X-WP-Total: ' . (int) $v_ooywb ); // obf
	header( 'X-WP-TotalPages: ' . $v_uhslk ); // obf

	wp_send_json_success( $v_qiplc ); // obf
} // obf

/** // obf
 * Handles updating attachment attributes via AJAX. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
function wp_ajax_save_attachment() { // obf
	if ( ! isset( $v_ughii['id'] ) || ! isset( $v_ughii['changes'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_aydje = absint( $v_ughii['id'] ); // obf
	if ( ! $v_aydje ) { // obf
		wp_send_json_error(); // obf
	} // obf

	check_ajax_referer( 'update-post_' . $v_aydje, 'nonce' ); // obf

	if ( ! current_user_can( 'edit_post', $v_aydje ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_kphgn = $v_ughii['changes']; // obf
	$v_mvheh    = get_post( $v_aydje, ARRAY_A ); // obf

	if ( 'attachment' !== $v_mvheh['post_type'] ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( isset( $v_kphgn['parent'] ) ) { // obf
		$v_mvheh['post_parent'] = $v_kphgn['parent']; // obf
	} // obf

	if ( isset( $v_kphgn['title'] ) ) { // obf
		$v_mvheh['post_title'] = $v_kphgn['title']; // obf
	} // obf

	if ( isset( $v_kphgn['caption'] ) ) { // obf
		$v_mvheh['post_excerpt'] = $v_kphgn['caption']; // obf
	} // obf

	if ( isset( $v_kphgn['description'] ) ) { // obf
		$v_mvheh['post_content'] = $v_kphgn['description']; // obf
	} // obf

	if ( MEDIA_TRASH && isset( $v_kphgn['status'] ) ) { // obf
		$v_mvheh['post_status'] = $v_kphgn['status']; // obf
	} // obf

	if ( isset( $v_kphgn['alt'] ) ) { // obf
		$v_mgrsj = wp_unslash( $v_kphgn['alt'] ); // obf
		if ( get_post_meta( $v_aydje, '_wp_attachment_image_alt', true ) !== $v_mgrsj ) { // obf
			$v_mgrsj = wp_strip_all_tags( $v_mgrsj, true ); // obf
			update_post_meta( $v_aydje, '_wp_attachment_image_alt', wp_slash( $v_mgrsj ) ); // obf
		} // obf
	} // obf

	if ( wp_attachment_is( 'audio', $v_mvheh['ID'] ) ) { // obf
		$v_qakum = false; // obf
		$v_nluut = wp_get_attachment_metadata( $v_mvheh['ID'] ); // obf

		if ( ! is_array( $v_nluut ) ) { // obf
			$v_qakum = true; // obf
			$v_nluut = array(); // obf
		} // obf

		foreach ( wp_get_attachment_id3_keys( (object) $v_mvheh, 'edit' ) as $v_yglai => $v_cilhi ) { // obf
			if ( isset( $v_kphgn[ $v_yglai ] ) ) { // obf
				$v_qakum         = true; // obf
				$v_nluut[ $v_yglai ] = sanitize_text_field( wp_unslash( $v_kphgn[ $v_yglai ] ) ); // obf
			} // obf
		} // obf

		if ( $v_qakum ) { // obf
			wp_update_attachment_metadata( $v_aydje, $v_nluut ); // obf
		} // obf
	} // obf

	if ( MEDIA_TRASH && isset( $v_kphgn['status'] ) && 'trash' === $v_kphgn['status'] ) { // obf
		wp_delete_post( $v_aydje ); // obf
	} else { // obf
		wp_update_post( $v_mvheh ); // obf
	} // obf

	wp_send_json_success(); // obf
} // obf

/** // obf
 * Handles saving backward compatible attachment attributes via AJAX. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
function wp_ajax_save_attachment_compat() { // obf
	if ( ! isset( $v_ughii['id'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_aydje = absint( $v_ughii['id'] ); // obf
	if ( ! $v_aydje ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( empty( $v_ughii['attachments'] ) || empty( $v_ughii['attachments'][ $v_aydje ] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_cgxmj = $v_ughii['attachments'][ $v_aydje ]; // obf

	check_ajax_referer( 'update-post_' . $v_aydje, 'nonce' ); // obf

	if ( ! current_user_can( 'edit_post', $v_aydje ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_mvheh = get_post( $v_aydje, ARRAY_A ); // obf

	if ( 'attachment' !== $v_mvheh['post_type'] ) { // obf
		wp_send_json_error(); // obf
	} // obf

	/** This filter is documented in wp-admin/includes/media.php */ // obf
	$v_mvheh = apply_filters( 'attachment_fields_to_save', $v_mvheh, $v_cgxmj ); // obf

	if ( isset( $v_mvheh['errors'] ) ) { // obf
		$v_jmqjz = $v_mvheh['errors']; // @todo return me and display me! // obf
		unset( $v_mvheh['errors'] ); // obf
	} // obf

	wp_update_post( $v_mvheh ); // obf

	foreach ( get_attachment_taxonomies( $v_mvheh ) as $v_ncllc ) { // obf
		if ( isset( $v_cgxmj[ $v_ncllc ] ) ) { // obf
			wp_set_object_terms( $v_aydje, array_map( 'trim', preg_split( '/,+/', $v_cgxmj[ $v_ncllc ] ) ), $v_ncllc, false ); // obf
		} // obf
	} // obf

	$v_juqkh = wp_prepare_attachment_for_js( $v_aydje ); // obf

	if ( ! $v_juqkh ) { // obf
		wp_send_json_error(); // obf
	} // obf

	wp_send_json_success( $v_juqkh ); // obf
} // obf

/** // obf
 * Handles saving the attachment order via AJAX. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
function wp_ajax_save_attachment_order() { // obf
	if ( ! isset( $v_ughii['post_id'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_wfocz = absint( $v_ughii['post_id'] ); // obf
	if ( ! $v_wfocz ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( empty( $v_ughii['attachments'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	check_ajax_referer( 'update-post_' . $v_wfocz, 'nonce' ); // obf

	$v_ipwzy = $v_ughii['attachments']; // obf

	if ( ! current_user_can( 'edit_post', $v_wfocz ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	foreach ( $v_ipwzy as $v_yaoic => $v_nlnkh ) { // obf
		if ( ! current_user_can( 'edit_post', $v_yaoic ) ) { // obf
			continue; // obf
		} // obf

		$v_juqkh = get_post( $v_yaoic ); // obf

		if ( ! $v_juqkh ) { // obf
			continue; // obf
		} // obf

		if ( 'attachment' !== $v_juqkh->post_type ) { // obf
			continue; // obf
		} // obf

		wp_update_post( // obf
			array( // obf
				'ID'         => $v_yaoic, // obf
				'menu_order' => $v_nlnkh, // obf
			) // obf
		); // obf
	} // obf

	wp_send_json_success(); // obf
} // obf

/** // obf
 * Handles sending an attachment to the editor via AJAX. // obf
 * // obf
 * Generates the HTML to send an attachment to the editor. // obf
 * Backward compatible with the {@see 'media_send_to_editor'} filter // obf
 * and the chain of filters that follow. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
function wp_ajax_send_attachment_to_editor() { // obf
	check_ajax_referer( 'media-send-to-editor', 'nonce' ); // obf

	$v_juqkh = wp_unslash( $v_srsvn['attachment'] ); // obf

	$v_aydje = (int) $v_juqkh['id']; // obf

	$v_mvheh = get_post( $v_aydje ); // obf
	if ( ! $v_mvheh ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( 'attachment' !== $v_mvheh->post_type ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( current_user_can( 'edit_post', $v_aydje ) ) { // obf
		// If this attachment is unattached, attach it. Primarily a back compat thing. // obf
		$v_qboug = (int) $v_srsvn['post_id']; // obf

		if ( 0 === $v_mvheh->post_parent && $v_qboug ) { // obf
			wp_update_post( // obf
				array( // obf
					'ID'          => $v_aydje, // obf
					'post_parent' => $v_qboug, // obf
				) // obf
			); // obf
		} // obf
	} // obf

	$v_mijag = empty( $v_juqkh['url'] ) ? '' : $v_juqkh['url']; // obf
	$v_fzstb = ( str_contains( $v_mijag, 'attachment_id' ) || get_attachment_link( $v_aydje ) === $v_mijag ); // obf

	remove_filter( 'media_send_to_editor', 'image_media_send_to_editor' ); // obf

	if ( str_starts_with( $v_mvheh->post_mime_type, 'image' ) ) { // obf
		$v_tzmfe = isset( $v_juqkh['align'] ) ? $v_juqkh['align'] : 'none'; // obf
		$v_tmgpv  = isset( $v_juqkh['image-size'] ) ? $v_juqkh['image-size'] : 'medium'; // obf
		$v_mgrsj   = isset( $v_juqkh['image_alt'] ) ? $v_juqkh['image_alt'] : ''; // obf

		// No whitespace-only captions. // obf
		$v_czpnf = isset( $v_juqkh['post_excerpt'] ) ? $v_juqkh['post_excerpt'] : ''; // obf
		if ( '' === trim( $v_czpnf ) ) { // obf
			$v_czpnf = ''; // obf
		} // obf

		$v_vvbtw = ''; // We no longer insert title tags into <img> tags, as they are redundant. // obf
		$v_rsbuu  = get_image_send_to_editor( $v_aydje, $v_czpnf, $v_vvbtw, $v_tzmfe, $v_mijag, $v_fzstb, $v_tmgpv, $v_mgrsj ); // obf
	} elseif ( wp_attachment_is( 'video', $v_mvheh ) || wp_attachment_is( 'audio', $v_mvheh ) ) { // obf
		$v_rsbuu = stripslashes_deep( $v_srsvn['html'] ); // obf
	} else { // obf
		$v_rsbuu = isset( $v_juqkh['post_title'] ) ? $v_juqkh['post_title'] : ''; // obf
		$v_fzstb  = $v_fzstb ? ' rel="attachment wp-att-' . $v_aydje . '"' : ''; // Hard-coded string, $v_aydje is already sanitized. // obf

		if ( ! empty( $v_mijag ) ) { // obf
			$v_rsbuu = '<a href="' . esc_url( $v_mijag ) . '"' . $v_fzstb . '>' . $v_rsbuu . '</a>'; // obf
		} // obf
	} // obf

	/** This filter is documented in wp-admin/includes/media.php */ // obf
	$v_rsbuu = apply_filters( 'media_send_to_editor', $v_rsbuu, $v_aydje, $v_juqkh ); // obf

	wp_send_json_success( $v_rsbuu ); // obf
} // obf

/** // obf
 * Handles sending a link to the editor via AJAX. // obf
 * // obf
 * Generates the HTML to send a non-image embed link to the editor. // obf
 * // obf
 * Backward compatible with the following filters: // obf
 * - file_send_to_editor_url // obf
 * - audio_send_to_editor_url // obf
 * - video_send_to_editor_url // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @global WP_Post  $v_mvheh     Global post object. // obf
 * @global WP_Embed $v_cmjrg WordPress Embed object. // obf
 */ // obf
function wp_ajax_send_link_to_editor() { // obf
	global $v_mvheh, $v_cmjrg; // obf

	check_ajax_referer( 'media-send-to-editor', 'nonce' ); // obf

	$v_bpile = wp_unslash( $v_srsvn['src'] ); // obf
	if ( ! $v_bpile ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( ! strpos( $v_bpile, '://' ) ) { // obf
		$v_bpile = 'http://' . $v_bpile; // obf
	} // obf

	$v_bpile = sanitize_url( $v_bpile ); // obf
	if ( ! $v_bpile ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_qscje = trim( wp_unslash( $v_srsvn['link_text'] ) ); // obf
	if ( ! $v_qscje ) { // obf
		$v_qscje = wp_basename( $v_bpile ); // obf
	} // obf

	$v_mvheh = get_post( isset( $v_srsvn['post_id'] ) ? $v_srsvn['post_id'] : 0 ); // obf

	// Ping WordPress for an embed. // obf
	$v_zogce = $v_cmjrg->run_shortcode( '[embed]' . $v_bpile . '[/embed]' ); // obf

	// Fallback that WordPress creates when no oEmbed was found. // obf
	$v_zvovs = $v_cmjrg->maybe_make_link( $v_bpile ); // obf

	if ( $v_zogce !== $v_zvovs ) { // obf
		// TinyMCE view for [embed] will parse this. // obf
		$v_rsbuu = '[embed]' . $v_bpile . '[/embed]'; // obf
	} elseif ( $v_qscje ) { // obf
		$v_rsbuu = '<a href="' . esc_url( $v_bpile ) . '">' . $v_qscje . '</a>'; // obf
	} else { // obf
		$v_rsbuu = ''; // obf
	} // obf

	// Figure out what filter to run: // obf
	$v_oasmk = 'file'; // obf
	$v_lmido  = __fn_37772( '/^.+?\.([^.]+)$/', '$1', $v_bpile ); // obf
	if ( $v_lmido ) { // obf
		$v_asjjc = wp_ext2type( $v_lmido ); // obf
		if ( 'audio' === $v_asjjc || 'video' === $v_asjjc ) { // obf
			$v_oasmk = $v_asjjc; // obf
		} // obf
	} // obf

	/** This filter is documented in wp-admin/includes/media.php */ // obf
	$v_rsbuu = apply_filters( "{$v_oasmk}_send_to_editor_url", $v_rsbuu, $v_bpile, $v_qscje ); // obf

	wp_send_json_success( $v_rsbuu ); // obf
} // obf

/** // obf
 * Handles the Heartbeat API via AJAX. // obf
 * // obf
 * Runs when the user is logged in. // obf
 * // obf
 * @since 3.6.0 // obf
 */ // obf
function wp_ajax_heartbeat() { // obf
	if ( empty( $v_srsvn['_nonce'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_rtwjp    = array(); // obf
	$v_ynvim        = array(); // obf
	$v_wfuhw = wp_verify_nonce( $v_srsvn['_nonce'], 'heartbeat-nonce' ); // obf

	// 'screen_id' is the same as $v_mlheg->id and the JS global 'pagenow'. // obf
	if ( ! empty( $v_srsvn['screen_id'] ) ) { // obf
		$v_wnrui = sanitize_key( $v_srsvn['screen_id'] ); // obf
	} else { // obf
		$v_wnrui = 'front'; // obf
	} // obf

	if ( ! empty( $v_srsvn['data'] ) ) { // obf
		$v_ynvim = wp_unslash( (array) $v_srsvn['data'] ); // obf
	} // obf

	if ( 1 !== $v_wfuhw ) { // obf
		/** // obf
		 * Filters the nonces to send to the New/Edit Post screen. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @param array  $v_rtwjp  The Heartbeat response. // obf
		 * @param array  $v_ynvim      The $v_srsvn data sent. // obf
		 * @param string $v_wnrui The screen ID. // obf
		 */ // obf
		$v_rtwjp = apply_filters( 'wp_refresh_nonces', $v_rtwjp, $v_ynvim, $v_wnrui ); // obf

		if ( false === $v_wfuhw ) { // obf
			// User is logged in but nonces have expired. // obf
			$v_rtwjp['nonces_expired'] = true; // obf
			wp_send_json( $v_rtwjp ); // obf
		} // obf
	} // obf

	if ( ! empty( $v_ynvim ) ) { // obf
		/** // obf
		 * Filters the Heartbeat response received. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * // obf
		 * @param array  $v_rtwjp  The Heartbeat response. // obf
		 * @param array  $v_ynvim      The $v_srsvn data sent. // obf
		 * @param string $v_wnrui The screen ID. // obf
		 */ // obf
		$v_rtwjp = apply_filters( 'heartbeat_received', $v_rtwjp, $v_ynvim, $v_wnrui ); // obf
	} // obf

	/** // obf
	 * Filters the Heartbeat response sent. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param array  $v_rtwjp  The Heartbeat response. // obf
	 * @param string $v_wnrui The screen ID. // obf
	 */ // obf
	$v_rtwjp = apply_filters( 'heartbeat_send', $v_rtwjp, $v_wnrui ); // obf

	/** // obf
	 * Fires when Heartbeat ticks in logged-in environments. // obf
	 * // obf
	 * Allows the transport to be easily replaced with long-polling. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param array  $v_rtwjp  The Heartbeat response. // obf
	 * @param string $v_wnrui The screen ID. // obf
	 */ // obf
	do_action( 'heartbeat_tick', $v_rtwjp, $v_wnrui ); // obf

	// Send the current time according to the server. // obf
	$v_rtwjp['server_time'] = time(); // obf

	wp_send_json( $v_rtwjp ); // obf
} // obf

/** // obf
 * Handles getting revision diffs via AJAX. // obf
 * // obf
 * @since 3.6.0 // obf
 */ // obf
function wp_ajax_get_revision_diffs() { // obf
	require ABSPATH . 'wp-admin/includes/revision.php'; // obf

	$v_mvheh = get_post( (int) $v_ughii['post_id'] ); // obf
	if ( ! $v_mvheh ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( ! current_user_can( 'edit_post', $v_mvheh->ID ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	// Really just pre-loading the cache here. // obf
	$v_gmazw = wp_get_post_revisions( $v_mvheh->ID, array( 'check_enabled' => false ) ); // obf
	if ( ! $v_gmazw ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_hhmtn = array(); // obf

	// Increase the script timeout limit to allow ample time for diff UI setup. // obf
	if ( function_exists( 'set_time_limit' ) ) { // obf
		set_time_limit( 5 * MINUTE_IN_SECONDS ); // obf
	} // obf

	foreach ( $v_ughii['compare'] as $v_oswyw ) { // obf
		list( $v_jhzcn, $v_hdnrt ) = explode( ':', $v_oswyw ); // from:to // obf

		$v_hhmtn[] = array( // obf
			'id'     => $v_oswyw, // obf
			'fields' => wp_get_revision_ui_diff( $v_mvheh, $v_jhzcn, $v_hdnrt ), // obf
		); // obf
	} // obf
	wp_send_json_success( $v_hhmtn ); // obf
} // obf

/** // obf
 * Handles auto-saving the selected color scheme for // obf
 * a user's own profile via AJAX. // obf
 * // obf
 * @since 3.8.0 // obf
 * // obf
 * @global array $v_dbxvq // obf
 */ // obf
function wp_ajax_save_user_color_scheme() { // obf
	global $v_dbxvq; // obf

	check_ajax_referer( 'save-color-scheme', 'nonce' ); // obf

	$v_wuuza = sanitize_key( $v_srsvn['color_scheme'] ); // obf

	if ( ! isset( $v_dbxvq[ $v_wuuza ] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_kbpas = get_user_meta( get_current_user_id(), 'admin_color', true ); // obf
	update_user_meta( get_current_user_id(), 'admin_color', $v_wuuza ); // obf

	wp_send_json_success( // obf
		array( // obf
			'previousScheme' => 'admin-color-' . $v_kbpas, // obf
			'currentScheme'  => 'admin-color-' . $v_wuuza, // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Handles getting themes from themes_api() via AJAX. // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @global array $v_jkeyd // obf
 * @global array $v_eciwc // obf
 */ // obf
function wp_ajax_query_themes() { // obf
	global $v_jkeyd, $v_eciwc; // obf

	if ( ! current_user_can( 'install_themes' ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_baxxv = wp_parse_args( // obf
		wp_unslash( $v_ughii['request'] ), // obf
		array( // obf
			'per_page' => 20, // obf
			'fields'   => array_merge( // obf
				(array) $v_eciwc, // obf
				array( // obf
					'reviews_url' => true, // Explicitly request the reviews URL to be linked from the Add Themes screen. // obf
				) // obf
			), // obf
		) // obf
	); // obf

	if ( isset( $v_baxxv['browse'] ) && 'favorites' === $v_baxxv['browse'] && ! isset( $v_baxxv['user'] ) ) { // obf
		$v_miwhx = get_user_option( 'wporg_favorites' ); // obf
		if ( $v_miwhx ) { // obf
			$v_baxxv['user'] = $v_miwhx; // obf
		} // obf
	} // obf

	$v_appes = isset( $v_baxxv['browse'] ) ? $v_baxxv['browse'] : 'search'; // obf

	/** This filter is documented in wp-admin/includes/class-wp-theme-install-list-table.php */ // obf
	$v_baxxv = apply_filters( 'install_themes_table_api_args_' . $v_appes, $v_baxxv ); // obf

	$v_rjkms = themes_api( 'query_themes', $v_baxxv ); // obf

	if ( is_wp_error( $v_rjkms ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_ksrog = network_admin_url( 'update.php?action=install-theme' ); // obf

	$v_nnsqd = search_theme_directories(); // obf

	if ( false === $v_nnsqd ) { // obf
		$v_nnsqd = array(); // obf
	} // obf

	foreach ( $v_nnsqd as $v_fpycv => $v_aahnc ) { // obf
		// Ignore child themes. // obf
		if ( str_contains( $v_fpycv, '/' ) ) { // obf
			unset( $v_nnsqd[ $v_fpycv ] ); // obf
		} // obf
	} // obf

	foreach ( $v_rjkms->themes as &$v_gkmod ) { // obf
		$v_gkmod->install_url = add_query_arg( // obf
			array( // obf
				'theme'    => $v_gkmod->slug, // obf
				'_wpnonce' => wp_create_nonce( 'install-theme_' . $v_gkmod->slug ), // obf
			), // obf
			$v_ksrog // obf
		); // obf

		if ( current_user_can( 'switch_themes' ) ) { // obf
			if ( is_multisite() ) { // obf
				$v_gkmod->activate_url = add_query_arg( // obf
					array( // obf
						'action'   => 'enable', // obf
						'_wpnonce' => wp_create_nonce( 'enable-theme_' . $v_gkmod->slug ), // obf
						'theme'    => $v_gkmod->slug, // obf
					), // obf
					network_admin_url( 'themes.php' ) // obf
				); // obf
			} else { // obf
				$v_gkmod->activate_url = add_query_arg( // obf
					array( // obf
						'action'     => 'activate', // obf
						'_wpnonce'   => wp_create_nonce( 'switch-theme_' . $v_gkmod->slug ), // obf
						'stylesheet' => $v_gkmod->slug, // obf
					), // obf
					admin_url( 'themes.php' ) // obf
				); // obf
			} // obf
		} // obf

		$v_tangr = array_key_exists( $v_gkmod->slug, $v_nnsqd ); // obf

		// We only care about installed themes. // obf
		$v_gkmod->block_theme = $v_tangr && wp_get_theme( $v_gkmod->slug )->is_block_theme(); // obf

		if ( ! is_multisite() && current_user_can( 'edit_theme_options' ) && current_user_can( 'customize' ) ) { // obf
			$v_bojcd = $v_gkmod->block_theme ? admin_url( 'site-editor.php' ) : wp_customize_url( $v_gkmod->slug ); // obf

			$v_gkmod->customize_url = add_query_arg( // obf
				array( // obf
					'return' => urlencode( network_admin_url( 'theme-install.php', 'relative' ) ), // obf
				), // obf
				$v_bojcd // obf
			); // obf
		} // obf

		$v_gkmod->name        = wp_kses( $v_gkmod->name, $v_jkeyd ); // obf
		$v_gkmod->author      = wp_kses( $v_gkmod->author['display_name'], $v_jkeyd ); // obf
		$v_gkmod->version     = wp_kses( $v_gkmod->version, $v_jkeyd ); // obf
		$v_gkmod->description = wp_kses( $v_gkmod->description, $v_jkeyd ); // obf

		$v_gkmod->stars = wp_star_rating( // obf
			array( // obf
				'rating' => $v_gkmod->rating, // obf
				'type'   => 'percent', // obf
				'number' => $v_gkmod->num_ratings, // obf
				'echo'   => false, // obf
			) // obf
		); // obf

		$v_gkmod->num_ratings    = number_format_i18n( $v_gkmod->num_ratings ); // obf
		$v_gkmod->preview_url    = set_url_scheme( $v_gkmod->preview_url ); // obf
		$v_gkmod->compatible_wp  = is_wp_version_compatible( $v_gkmod->requires ); // obf
		$v_gkmod->compatible_php = is_php_version_compatible( $v_gkmod->requires_php ); // obf
	} // obf

	wp_send_json_success( $v_rjkms ); // obf
} // obf

/** // obf
 * Applies [embed] Ajax handlers to a string. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @global WP_Post    $v_mvheh          Global post object. // obf
 * @global WP_Embed   $v_cmjrg      WordPress Embed object. // obf
 * @global WP_Scripts $v_bhnox // obf
 * @global int        $v_rmimk // obf
 */ // obf
function wp_ajax_parse_embed() { // obf
	global $v_mvheh, $v_cmjrg, $v_rmimk; // obf

	if ( empty( $v_srsvn['shortcode'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_wfocz = isset( $v_srsvn['post_ID'] ) ? (int) $v_srsvn['post_ID'] : 0; // obf

	if ( $v_wfocz > 0 ) { // obf
		$v_mvheh = get_post( $v_wfocz ); // obf

		if ( ! $v_mvheh || ! current_user_can( 'edit_post', $v_mvheh->ID ) ) { // obf
			wp_send_json_error(); // obf
		} // obf
		setup_postdata( $v_mvheh ); // obf
	} elseif ( ! current_user_can( 'edit_posts' ) ) { // See WP_oEmbed_Controller::get_proxy_item_permissions_check(). // obf
		wp_send_json_error(); // obf
	} // obf

	$v_cmnnv = wp_unslash( $v_srsvn['shortcode'] ); // obf

	preg_match( '/' . get_shortcode_regex() . '/s', $v_cmnnv, $v_vlgoe ); // obf
	$v_djjel = shortcode_parse_atts( $v_vlgoe[3] ); // obf

	if ( ! empty( $v_vlgoe[5] ) ) { // obf
		$v_mijag = $v_vlgoe[5]; // obf
	} elseif ( ! empty( $v_djjel['src'] ) ) { // obf
		$v_mijag = $v_djjel['src']; // obf
	} else { // obf
		$v_mijag = ''; // obf
	} // obf

	$v_crkds                         = false; // obf
	$v_cmjrg->return_false_on_fail = true; // obf

	if ( 0 === $v_wfocz ) { // obf
		/* // obf
		 * Refresh oEmbeds cached outside of posts that are past their TTL. // obf
		 * Posts are excluded because they have separate logic for refreshing // obf
		 * their post meta caches. See WP_Embed::cache_oembed(). // obf
		 */ // obf
		$v_cmjrg->usecache = false; // obf
	} // obf

	if ( is_ssl() && str_starts_with( $v_mijag, 'http://' ) ) { // obf
		/* // obf
		 * Admin is ssl and the user pasted non-ssl URL. // obf
		 * Check if the provider supports ssl embeds and use that for the preview. // obf
		 */ // obf
		$v_ltugo = __fn_37772( '%^(\\[embed[^\\]]*\\])http://%i', '$1https://', $v_cmnnv ); // obf
		$v_crkds        = $v_cmjrg->run_shortcode( $v_ltugo ); // obf

		if ( ! $v_crkds ) { // obf
			$v_hgxpe = true; // obf
		} // obf
	} // obf

	// Set $v_rmimk so any embeds fit in the destination iframe. // obf
	if ( isset( $v_srsvn['maxwidth'] ) && is_numeric( $v_srsvn['maxwidth'] ) && $v_srsvn['maxwidth'] > 0 ) { // obf
		if ( ! isset( $v_rmimk ) ) { // obf
			$v_rmimk = (int) $v_srsvn['maxwidth']; // obf
		} else { // obf
			$v_rmimk = min( $v_rmimk, (int) $v_srsvn['maxwidth'] ); // obf
		} // obf
	} // obf

	if ( $v_mijag && ! $v_crkds ) { // obf
		$v_crkds = $v_cmjrg->run_shortcode( $v_cmnnv ); // obf
	} // obf

	if ( ! $v_crkds ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'type'    => 'not-embeddable', // obf
				/* translators: %s: URL that could not be embedded. */ // obf
				'message' => sprintf( __( '%s failed to embed.' ), '<code>' . esc_html( $v_mijag ) . '</code>' ), // obf
			) // obf
		); // obf
	} // obf

	if ( has_shortcode( $v_crkds, 'audio' ) || has_shortcode( $v_crkds, 'video' ) ) { // obf
		$v_oejud     = ''; // obf
		$v_nrtlx = wpview_media_sandbox_styles(); // obf

		foreach ( $v_nrtlx as $v_wrtgs ) { // obf
			$v_oejud .= sprintf( '<link rel="stylesheet" href="%s" />', $v_wrtgs ); // obf
		} // obf

		$v_rsbuu = do_shortcode( $v_crkds ); // obf

		global $v_bhnox; // obf

		if ( ! empty( $v_bhnox ) ) { // obf
			$v_bhnox->done = array(); // obf
		} // obf

		ob_start(); // obf
		wp_print_scripts( array( 'mediaelement-vimeo', 'wp-mediaelement' ) ); // obf
		$v_wyqtr = ob_get_clean(); // obf

		$v_crkds = $v_oejud . $v_rsbuu . $v_wyqtr; // obf
	} // obf

	if ( ! empty( $v_hgxpe ) || ( is_ssl() && ( preg_match( '%<(iframe|script|embed) [^>]*src="http://%', $v_crkds ) || // obf
		preg_match( '%<link [^>]*href="http://%', $v_crkds ) ) ) ) { // obf
		// Admin is ssl and the embed is not. Iframes, scripts, and other "active content" will be blocked. // obf
		wp_send_json_error( // obf
			array( // obf
				'type'    => 'not-ssl', // obf
				'message' => __( 'This preview is unavailable in the editor.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_hhmtn = array( // obf
		'body' => $v_crkds, // obf
		'attr' => $v_cmjrg->last_attr, // obf
	); // obf

	if ( str_contains( $v_crkds, 'class="wp-embedded-content' ) ) { // obf
		if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) { // obf
			$v_bbdmx = includes_url( 'js/wp-embed.js' ); // obf
		} else { // obf
			$v_bbdmx = includes_url( 'js/wp-embed.min.js' ); // obf
		} // obf

		$v_hhmtn['head']    = '<script src="' . $v_bbdmx . '"></script>'; // obf
		$v_hhmtn['sandbox'] = true; // obf
	} // obf

	wp_send_json_success( $v_hhmtn ); // obf
} // obf

/** // obf
 * @since 4.0.0 // obf
 * // obf
 * @global WP_Post    $v_mvheh       Global post object. // obf
 * @global WP_Scripts $v_bhnox // obf
 */ // obf
function wp_ajax_parse_media_shortcode() { // obf
	global $v_mvheh, $v_bhnox; // obf

	if ( empty( $v_srsvn['shortcode'] ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_cmnnv = wp_unslash( $v_srsvn['shortcode'] ); // obf

	// Only process previews for media related shortcodes: // obf
	$v_vbgph = get_shortcode_tags_in_content( $v_cmnnv ); // obf
	$v_auvbs = array( // obf
		'audio', // obf
		'embed', // obf
		'playlist', // obf
		'video', // obf
		'gallery', // obf
	); // obf

	$v_kyamj = array_diff( $v_vbgph, $v_auvbs ); // obf

	if ( ! empty( $v_kyamj ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( ! empty( $v_srsvn['post_ID'] ) ) { // obf
		$v_mvheh = get_post( (int) $v_srsvn['post_ID'] ); // obf
	} // obf

	// The embed shortcode requires a post. // obf
	if ( ! $v_mvheh || ! current_user_can( 'edit_post', $v_mvheh->ID ) ) { // obf
		if ( in_array( 'embed', $v_vbgph, true ) ) { // obf
			wp_send_json_error(); // obf
		} // obf
	} else { // obf
		setup_postdata( $v_mvheh ); // obf
	} // obf

	$v_crkds = do_shortcode( $v_cmnnv ); // obf

	if ( empty( $v_crkds ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'type'    => 'no-items', // obf
				'message' => __( 'No items found.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_bqyuq   = ''; // obf
	$v_oejud = wpview_media_sandbox_styles(); // obf

	foreach ( $v_oejud as $v_wrtgs ) { // obf
		$v_bqyuq .= '<link type="text/css" rel="stylesheet" href="' . $v_wrtgs . '">'; // obf
	} // obf

	if ( ! empty( $v_bhnox ) ) { // obf
		$v_bhnox->done = array(); // obf
	} // obf

	ob_start(); // obf

	echo $v_crkds; // obf

	if ( 'playlist' === $v_ughii['type'] ) { // obf
		wp_underscore_playlist_templates(); // obf

		wp_print_scripts( 'wp-playlist' ); // obf
	} else { // obf
		wp_print_scripts( array( 'mediaelement-vimeo', 'wp-mediaelement' ) ); // obf
	} // obf

	wp_send_json_success( // obf
		array( // obf
			'head' => $v_bqyuq, // obf
			'body' => ob_get_clean(), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Handles destroying multiple open sessions for a user via AJAX. // obf
 * // obf
 * @since 4.1.0 // obf
 */ // obf
function wp_ajax_destroy_sessions() { // obf
	$v_miwhx = get_userdata( (int) $v_srsvn['user_id'] ); // obf

	if ( $v_miwhx ) { // obf
		if ( ! current_user_can( 'edit_user', $v_miwhx->ID ) ) { // obf
			$v_miwhx = false; // obf
		} elseif ( ! wp_verify_nonce( $v_srsvn['nonce'], 'update-user_' . $v_miwhx->ID ) ) { // obf
			$v_miwhx = false; // obf
		} // obf
	} // obf

	if ( ! $v_miwhx ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'message' => __( 'Could not log out user sessions. Please try again.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_oyhdv = WP_Session_Tokens::get_instance( $v_miwhx->ID ); // obf

	if ( get_current_user_id() === $v_miwhx->ID ) { // obf
		$v_oyhdv->destroy_others( wp_get_session_token() ); // obf
		$v_ofimd = __( 'You are now logged out everywhere else.' ); // obf
	} else { // obf
		$v_oyhdv->destroy_all(); // obf
		/* translators: %s: User's display name. */ // obf
		$v_ofimd = sprintf( __( '%s has been logged out.' ), $v_miwhx->display_name ); // obf
	} // obf

	wp_send_json_success( array( 'message' => $v_ofimd ) ); // obf
} // obf

/** // obf
 * Handles cropping an image via AJAX. // obf
 * // obf
 * @since 4.3.0 // obf
 */ // obf
function wp_ajax_crop_image() { // obf
	$v_yaoic = absint( $v_srsvn['id'] ); // obf

	check_ajax_referer( 'image_editor-' . $v_yaoic, 'nonce' ); // obf

	if ( empty( $v_yaoic ) || ! current_user_can( 'edit_post', $v_yaoic ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	$v_fcrzp = str_replace( '_', '-', $v_srsvn['context'] ); // obf
	$v_ynvim    = array_map( 'absint', $v_srsvn['cropDetails'] ); // obf
	$v_rcfmi = wp_crop_image( $v_yaoic, $v_ynvim['x1'], $v_ynvim['y1'], $v_ynvim['width'], $v_ynvim['height'], $v_ynvim['dst_width'], $v_ynvim['dst_height'] ); // obf

	if ( ! $v_rcfmi || is_wp_error( $v_rcfmi ) ) { // obf
		wp_send_json_error( array( 'message' => __( 'Image could not be processed.' ) ) ); // obf
	} // obf

	switch ( $v_fcrzp ) { // obf
		case 'site-icon': // obf
			require_once ABSPATH . 'wp-admin/includes/class-wp-site-icon.php'; // obf
			$v_mqjgs = new WP_Site_Icon(); // obf

			// Skip creating a new attachment if the attachment is a Site Icon. // obf
			if ( get_post_meta( $v_yaoic, '_wp_attachment_context', true ) === $v_fcrzp ) { // obf

				// Delete the temporary cropped file, we don't need it. // obf
				wp_delete_file( $v_rcfmi ); // obf

				// Additional sizes in wp_prepare_attachment_for_js(). // obf
				add_filter( 'image_size_names_choose', array( $v_mqjgs, 'additional_sizes' ) ); // obf
				break; // obf
			} // obf

			/** This filter is documented in wp-admin/includes/class-custom-image-header.php */ // obf
			$v_rcfmi = apply_filters( 'wp_create_file_in_uploads', $v_rcfmi, $v_yaoic ); // For replication. // obf

			// Copy attachment properties. // obf
			$v_juqkh = wp_copy_parent_attachment_properties( $v_rcfmi, $v_yaoic, $v_fcrzp ); // obf

			// Update the attachment. // obf
			add_filter( 'intermediate_image_sizes_advanced', array( $v_mqjgs, 'additional_sizes' ) ); // obf
			$v_yaoic = $v_mqjgs->insert_attachment( $v_juqkh, $v_rcfmi ); // obf
			remove_filter( 'intermediate_image_sizes_advanced', array( $v_mqjgs, 'additional_sizes' ) ); // obf

			// Additional sizes in wp_prepare_attachment_for_js(). // obf
			add_filter( 'image_size_names_choose', array( $v_mqjgs, 'additional_sizes' ) ); // obf
			break; // obf

		default: // obf
			/** // obf
			 * Fires before a cropped image is saved. // obf
			 * // obf
			 * Allows to add filters to modify the way a cropped image is saved. // obf
			 * // obf
			 * @since 4.3.0 // obf
			 * // obf
			 * @param string $v_fcrzp       The Customizer control requesting the cropped image. // obf
			 * @param int    $v_yaoic The attachment ID of the original image. // obf
			 * @param string $v_rcfmi       Path to the cropped image file. // obf
			 */ // obf
			do_action( 'wp_ajax_crop_image_pre_save', $v_fcrzp, $v_yaoic, $v_rcfmi ); // obf

			/** This filter is documented in wp-admin/includes/class-custom-image-header.php */ // obf
			$v_rcfmi = apply_filters( 'wp_create_file_in_uploads', $v_rcfmi, $v_yaoic ); // For replication. // obf

			// Copy attachment properties. // obf
			$v_juqkh = wp_copy_parent_attachment_properties( $v_rcfmi, $v_yaoic, $v_fcrzp ); // obf

			$v_yaoic = wp_insert_attachment( $v_juqkh, $v_rcfmi ); // obf
			$v_kshrv      = wp_generate_attachment_metadata( $v_yaoic, $v_rcfmi ); // obf

			/** // obf
			 * Filters the cropped image attachment metadata. // obf
			 * // obf
			 * @since 4.3.0 // obf
			 * // obf
			 * @see wp_generate_attachment_metadata() // obf
			 * // obf
			 * @param array $v_kshrv Attachment metadata. // obf
			 */ // obf
			$v_kshrv = apply_filters( 'wp_ajax_cropped_attachment_metadata', $v_kshrv ); // obf
			wp_update_attachment_metadata( $v_yaoic, $v_kshrv ); // obf

			/** // obf
			 * Filters the attachment ID for a cropped image. // obf
			 * // obf
			 * @since 4.3.0 // obf
			 * // obf
			 * @param int    $v_yaoic The attachment ID of the cropped image. // obf
			 * @param string $v_fcrzp       The Customizer control requesting the cropped image. // obf
			 */ // obf
			$v_yaoic = apply_filters( 'wp_ajax_cropped_attachment_id', $v_yaoic, $v_fcrzp ); // obf
	} // obf

	wp_send_json_success( wp_prepare_attachment_for_js( $v_yaoic ) ); // obf
} // obf

/** // obf
 * Handles generating a password via AJAX. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function wp_ajax_generate_password() { // obf
	wp_send_json_success( wp_generate_password( 24 ) ); // obf
} // obf

/** // obf
 * Handles generating a password in the no-privilege context via AJAX. // obf
 * // obf
 * @since 5.7.0 // obf
 */ // obf
function wp_ajax_nopriv_generate_password() { // obf
	wp_send_json_success( wp_generate_password( 24 ) ); // obf
} // obf

/** // obf
 * Handles saving the user's WordPress.org username via AJAX. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
function wp_ajax_save_wporg_username() { // obf
	if ( ! current_user_can( 'install_themes' ) && ! current_user_can( 'install_plugins' ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	check_ajax_referer( 'save_wporg_username_' . get_current_user_id() ); // obf

	$v_nfpvk = isset( $v_ughii['username'] ) ? wp_unslash( $v_ughii['username'] ) : false; // obf

	if ( ! $v_nfpvk ) { // obf
		wp_send_json_error(); // obf
	} // obf

	wp_send_json_success( update_user_meta( get_current_user_id(), 'wporg_favorites', $v_nfpvk ) ); // obf
} // obf

/** // obf
 * Handles installing a theme via AJAX. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see Theme_Upgrader // obf
 * // obf
 * @global WP_Filesystem_Base $v_pqwqy WordPress filesystem subclass. // obf
 */ // obf
function wp_ajax_install_theme() { // obf
	check_ajax_referer( 'updates' ); // obf

	if ( empty( $v_srsvn['slug'] ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_theme_specified', // obf
				'errorMessage' => __( 'No theme specified.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_isniw = sanitize_key( wp_unslash( $v_srsvn['slug'] ) ); // obf

	$v_cxkqa = array( // obf
		'install' => 'theme', // obf
		'slug'    => $v_isniw, // obf
	); // obf

	if ( ! current_user_can( 'install_themes' ) ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to install themes on this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
	require_once ABSPATH . 'wp-admin/includes/theme.php'; // obf

	$v_rjkms = themes_api( // obf
		'theme_information', // obf
		array( // obf
			'slug'   => $v_isniw, // obf
			'fields' => array( 'sections' => false ), // obf
		) // obf
	); // obf

	if ( is_wp_error( $v_rjkms ) ) { // obf
		$v_cxkqa['errorMessage'] = $v_rjkms->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	$v_wtqil     = new WP_Ajax_Upgrader_Skin(); // obf
	$v_cdnyg = new Theme_Upgrader( $v_wtqil ); // obf
	$v_usnrp   = $v_cdnyg->install( $v_rjkms->download_link ); // obf

	if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) { // obf
		$v_cxkqa['debug'] = $v_wtqil->get_upgrade_messages(); // obf
	} // obf

	if ( is_wp_error( $v_usnrp ) ) { // obf
		$v_cxkqa['errorCode']    = $v_usnrp->get_error_code(); // obf
		$v_cxkqa['errorMessage'] = $v_usnrp->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( is_wp_error( $v_wtqil->result ) ) { // obf
		$v_cxkqa['errorCode']    = $v_wtqil->result->get_error_code(); // obf
		$v_cxkqa['errorMessage'] = $v_wtqil->result->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( $v_wtqil->get_errors()->has_errors() ) { // obf
		$v_cxkqa['errorMessage'] = $v_wtqil->get_error_messages(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( is_null( $v_usnrp ) ) { // obf
		global $v_pqwqy; // obf

		$v_cxkqa['errorCode']    = 'unable_to_connect_to_filesystem'; // obf
		$v_cxkqa['errorMessage'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.' ); // obf

		// Pass through the error from WP_Filesystem if one was raised. // obf
		if ( $v_pqwqy instanceof WP_Filesystem_Base && is_wp_error( $v_pqwqy->errors ) && $v_pqwqy->errors->has_errors() ) { // obf
			$v_cxkqa['errorMessage'] = esc_html( $v_pqwqy->errors->get_error_message() ); // obf
		} // obf

		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	$v_cxkqa['themeName'] = wp_get_theme( $v_isniw )->get( 'Name' ); // obf

	if ( current_user_can( 'switch_themes' ) ) { // obf
		if ( is_multisite() ) { // obf
			$v_cxkqa['activateUrl'] = add_query_arg( // obf
				array( // obf
					'action'   => 'enable', // obf
					'_wpnonce' => wp_create_nonce( 'enable-theme_' . $v_isniw ), // obf
					'theme'    => $v_isniw, // obf
				), // obf
				network_admin_url( 'themes.php' ) // obf
			); // obf
		} else { // obf
			$v_cxkqa['activateUrl'] = add_query_arg( // obf
				array( // obf
					'action'     => 'activate', // obf
					'_wpnonce'   => wp_create_nonce( 'switch-theme_' . $v_isniw ), // obf
					'stylesheet' => $v_isniw, // obf
				), // obf
				admin_url( 'themes.php' ) // obf
			); // obf
		} // obf
	} // obf

	$v_gkmod                = wp_get_theme( $v_isniw ); // obf
	$v_cxkqa['blockTheme'] = $v_gkmod->is_block_theme(); // obf

	if ( ! is_multisite() && current_user_can( 'edit_theme_options' ) && current_user_can( 'customize' ) ) { // obf
		$v_cxkqa['customizeUrl'] = add_query_arg( // obf
			array( // obf
				'return' => urlencode( network_admin_url( 'theme-install.php', 'relative' ) ), // obf
			), // obf
			wp_customize_url( $v_isniw ) // obf
		); // obf
	} // obf

	/* // obf
	 * See WP_Theme_Install_List_Table::_get_theme_status() if we wanted to check // obf
	 * on post-installation status. // obf
	 */ // obf
	wp_send_json_success( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles updating a theme via AJAX. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see Theme_Upgrader // obf
 * // obf
 * @global WP_Filesystem_Base $v_pqwqy WordPress filesystem subclass. // obf
 */ // obf
function wp_ajax_update_theme() { // obf
	check_ajax_referer( 'updates' ); // obf

	if ( empty( $v_srsvn['slug'] ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_theme_specified', // obf
				'errorMessage' => __( 'No theme specified.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_vrakj = __fn_37772( '/[^A-z0-9_\-]/', '', wp_unslash( $v_srsvn['slug'] ) ); // obf
	$v_cxkqa     = array( // obf
		'update'     => 'theme', // obf
		'slug'       => $v_vrakj, // obf
		'oldVersion' => '', // obf
		'newVersion' => '', // obf
	); // obf

	if ( ! current_user_can( 'update_themes' ) ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to update themes for this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	$v_gkmod = wp_get_theme( $v_vrakj ); // obf
	if ( $v_gkmod->exists() ) { // obf
		$v_cxkqa['oldVersion'] = $v_gkmod->get( 'Version' ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf

	$v_szvbq = get_site_transient( 'update_themes' ); // obf
	if ( empty( $v_szvbq ) ) { // obf
		wp_update_themes(); // obf
	} // obf

	$v_wtqil     = new WP_Ajax_Upgrader_Skin(); // obf
	$v_cdnyg = new Theme_Upgrader( $v_wtqil ); // obf
	$v_usnrp   = $v_cdnyg->bulk_upgrade( array( $v_vrakj ) ); // obf

	if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) { // obf
		$v_cxkqa['debug'] = $v_wtqil->get_upgrade_messages(); // obf
	} // obf

	if ( is_wp_error( $v_wtqil->result ) ) { // obf
		$v_cxkqa['errorCode']    = $v_wtqil->result->get_error_code(); // obf
		$v_cxkqa['errorMessage'] = $v_wtqil->result->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( $v_wtqil->get_errors()->has_errors() ) { // obf
		$v_cxkqa['errorMessage'] = $v_wtqil->get_error_messages(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( is_array( $v_usnrp ) && ! empty( $v_usnrp[ $v_vrakj ] ) ) { // obf

		// Theme is already at the latest version. // obf
		if ( true === $v_usnrp[ $v_vrakj ] ) { // obf
			$v_cxkqa['errorMessage'] = $v_cdnyg->strings['up_to_date']; // obf
			wp_send_json_error( $v_cxkqa ); // obf
		} // obf

		$v_gkmod = wp_get_theme( $v_vrakj ); // obf
		if ( $v_gkmod->exists() ) { // obf
			$v_cxkqa['newVersion'] = $v_gkmod->get( 'Version' ); // obf
		} // obf

		wp_send_json_success( $v_cxkqa ); // obf
	} elseif ( false === $v_usnrp ) { // obf
		global $v_pqwqy; // obf

		$v_cxkqa['errorCode']    = 'unable_to_connect_to_filesystem'; // obf
		$v_cxkqa['errorMessage'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.' ); // obf

		// Pass through the error from WP_Filesystem if one was raised. // obf
		if ( $v_pqwqy instanceof WP_Filesystem_Base && is_wp_error( $v_pqwqy->errors ) && $v_pqwqy->errors->has_errors() ) { // obf
			$v_cxkqa['errorMessage'] = esc_html( $v_pqwqy->errors->get_error_message() ); // obf
		} // obf

		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	// An unhandled error occurred. // obf
	$v_cxkqa['errorMessage'] = __( 'Theme update failed.' ); // obf
	wp_send_json_error( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles deleting a theme via AJAX. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see delete_theme() // obf
 * // obf
 * @global WP_Filesystem_Base $v_pqwqy WordPress filesystem subclass. // obf
 */ // obf
function wp_ajax_delete_theme() { // obf
	check_ajax_referer( 'updates' ); // obf

	if ( empty( $v_srsvn['slug'] ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_theme_specified', // obf
				'errorMessage' => __( 'No theme specified.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_vrakj = __fn_37772( '/[^A-z0-9_\-]/', '', wp_unslash( $v_srsvn['slug'] ) ); // obf
	$v_cxkqa     = array( // obf
		'delete' => 'theme', // obf
		'slug'   => $v_vrakj, // obf
	); // obf

	if ( ! current_user_can( 'delete_themes' ) ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to delete themes on this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	if ( ! wp_get_theme( $v_vrakj )->exists() ) { // obf
		$v_cxkqa['errorMessage'] = __( 'The requested theme does not exist.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	// Check filesystem credentials. `delete_theme()` will bail otherwise. // obf
	$v_mijag = wp_nonce_url( 'themes.php?action=delete&stylesheet=' . urlencode( $v_vrakj ), 'delete-theme_' . $v_vrakj ); // obf

	ob_start(); // obf
	$v_dozzx = request_filesystem_credentials( $v_mijag ); // obf
	ob_end_clean(); // obf

	if ( false === $v_dozzx || ! WP_Filesystem( $v_dozzx ) ) { // obf
		global $v_pqwqy; // obf

		$v_cxkqa['errorCode']    = 'unable_to_connect_to_filesystem'; // obf
		$v_cxkqa['errorMessage'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.' ); // obf

		// Pass through the error from WP_Filesystem if one was raised. // obf
		if ( $v_pqwqy instanceof WP_Filesystem_Base && is_wp_error( $v_pqwqy->errors ) && $v_pqwqy->errors->has_errors() ) { // obf
			$v_cxkqa['errorMessage'] = esc_html( $v_pqwqy->errors->get_error_message() ); // obf
		} // obf

		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/theme.php'; // obf

	$v_usnrp = delete_theme( $v_vrakj ); // obf

	if ( is_wp_error( $v_usnrp ) ) { // obf
		$v_cxkqa['errorMessage'] = $v_usnrp->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( false === $v_usnrp ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Theme could not be deleted.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	wp_send_json_success( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles installing a plugin via AJAX. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see Plugin_Upgrader // obf
 * // obf
 * @global WP_Filesystem_Base $v_pqwqy WordPress filesystem subclass. // obf
 */ // obf
function wp_ajax_install_plugin() { // obf
	check_ajax_referer( 'updates' ); // obf

	if ( empty( $v_srsvn['slug'] ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_plugin_specified', // obf
				'errorMessage' => __( 'No plugin specified.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_cxkqa = array( // obf
		'install' => 'plugin', // obf
		'slug'    => sanitize_key( wp_unslash( $v_srsvn['slug'] ) ), // obf
	); // obf

	if ( ! current_user_can( 'install_plugins' ) ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to install plugins on this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
	require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // obf

	$v_rjkms = plugins_api( // obf
		'plugin_information', // obf
		array( // obf
			'slug'   => sanitize_key( wp_unslash( $v_srsvn['slug'] ) ), // obf
			'fields' => array( // obf
				'sections' => false, // obf
			), // obf
		) // obf
	); // obf

	if ( is_wp_error( $v_rjkms ) ) { // obf
		$v_cxkqa['errorMessage'] = $v_rjkms->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	$v_cxkqa['pluginName'] = $v_rjkms->name; // obf

	$v_wtqil     = new WP_Ajax_Upgrader_Skin(); // obf
	$v_cdnyg = new Plugin_Upgrader( $v_wtqil ); // obf
	$v_usnrp   = $v_cdnyg->install( $v_rjkms->download_link ); // obf

	if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) { // obf
		$v_cxkqa['debug'] = $v_wtqil->get_upgrade_messages(); // obf
	} // obf

	if ( is_wp_error( $v_usnrp ) ) { // obf
		$v_cxkqa['errorCode']    = $v_usnrp->get_error_code(); // obf
		$v_cxkqa['errorMessage'] = $v_usnrp->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( is_wp_error( $v_wtqil->result ) ) { // obf
		$v_cxkqa['errorCode']    = $v_wtqil->result->get_error_code(); // obf
		$v_cxkqa['errorMessage'] = $v_wtqil->result->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( $v_wtqil->get_errors()->has_errors() ) { // obf
		$v_cxkqa['errorMessage'] = $v_wtqil->get_error_messages(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( is_null( $v_usnrp ) ) { // obf
		global $v_pqwqy; // obf

		$v_cxkqa['errorCode']    = 'unable_to_connect_to_filesystem'; // obf
		$v_cxkqa['errorMessage'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.' ); // obf

		// Pass through the error from WP_Filesystem if one was raised. // obf
		if ( $v_pqwqy instanceof WP_Filesystem_Base && is_wp_error( $v_pqwqy->errors ) && $v_pqwqy->errors->has_errors() ) { // obf
			$v_cxkqa['errorMessage'] = esc_html( $v_pqwqy->errors->get_error_message() ); // obf
		} // obf

		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	$v_swkvs = install_plugin_install_status( $v_rjkms ); // obf
	$v_clvps        = isset( $v_srsvn['pagenow'] ) ? sanitize_key( $v_srsvn['pagenow'] ) : ''; // obf

	// If installation request is coming from import page, do not return network activation link. // obf
	$v_grhhp = ( 'import' === $v_clvps ) ? admin_url( 'plugins.php' ) : network_admin_url( 'plugins.php' ); // obf

	if ( current_user_can( 'activate_plugin', $v_swkvs['file'] ) && is_plugin_inactive( $v_swkvs['file'] ) ) { // obf
		$v_cxkqa['activateUrl'] = add_query_arg( // obf
			array( // obf
				'_wpnonce' => wp_create_nonce( 'activate-plugin_' . $v_swkvs['file'] ), // obf
				'action'   => 'activate', // obf
				'plugin'   => $v_swkvs['file'], // obf
			), // obf
			$v_grhhp // obf
		); // obf
	} // obf

	if ( is_multisite() && current_user_can( 'manage_network_plugins' ) && 'import' !== $v_clvps ) { // obf
		$v_cxkqa['activateUrl'] = add_query_arg( array( 'networkwide' => 1 ), $v_cxkqa['activateUrl'] ); // obf
	} // obf

	wp_send_json_success( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles activating a plugin via AJAX. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
function wp_ajax_activate_plugin() { // obf
	check_ajax_referer( 'updates' ); // obf

	if ( empty( $v_srsvn['name'] ) || empty( $v_srsvn['slug'] ) || empty( $v_srsvn['plugin'] ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'slug'         => '', // obf
				'pluginName'   => '', // obf
				'plugin'       => '', // obf
				'errorCode'    => 'no_plugin_specified', // obf
				'errorMessage' => __( 'No plugin specified.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_cxkqa = array( // obf
		'activate'   => 'plugin', // obf
		'slug'       => wp_unslash( $v_srsvn['slug'] ), // obf
		'pluginName' => wp_unslash( $v_srsvn['name'] ), // obf
		'plugin'     => wp_unslash( $v_srsvn['plugin'] ), // obf
	); // obf

	if ( ! current_user_can( 'activate_plugin', $v_cxkqa['plugin'] ) ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to activate plugins on this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	if ( is_plugin_active( $v_cxkqa['plugin'] ) ) { // obf
		$v_cxkqa['errorMessage'] = sprintf( // obf
			/* translators: %s: Plugin name. */ // obf
			__( '%s is already active.' ), // obf
			$v_cxkqa['pluginName'] // obf
		); // obf
	} // obf

	$v_sclhn = activate_plugin( $v_cxkqa['plugin'] ); // obf

	if ( is_wp_error( $v_sclhn ) ) { // obf
		$v_cxkqa['errorMessage'] = $v_sclhn->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	wp_send_json_success( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles updating a plugin via AJAX. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @see Plugin_Upgrader // obf
 * // obf
 * @global WP_Filesystem_Base $v_pqwqy WordPress filesystem subclass. // obf
 */ // obf
function wp_ajax_update_plugin() { // obf
	check_ajax_referer( 'updates' ); // obf

	if ( empty( $v_srsvn['plugin'] ) || empty( $v_srsvn['slug'] ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_plugin_specified', // obf
				'errorMessage' => __( 'No plugin specified.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_inioo = plugin_basename( sanitize_text_field( wp_unslash( $v_srsvn['plugin'] ) ) ); // obf

	$v_cxkqa = array( // obf
		'update'     => 'plugin', // obf
		'slug'       => sanitize_key( wp_unslash( $v_srsvn['slug'] ) ), // obf
		'oldVersion' => '', // obf
		'newVersion' => '', // obf
	); // obf

	if ( ! current_user_can( 'update_plugins' ) || 0 !== validate_file( $v_inioo ) ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to update plugins for this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	$v_rxzhl          = get_plugin_data( WP_PLUGIN_DIR . '/' . $v_inioo ); // obf
	$v_cxkqa['plugin']     = $v_inioo; // obf
	$v_cxkqa['pluginName'] = $v_rxzhl['Name']; // obf

	if ( $v_rxzhl['Version'] ) { // obf
		/* translators: %s: Plugin version. */ // obf
		$v_cxkqa['oldVersion'] = sprintf( __( 'Version %s' ), $v_rxzhl['Version'] ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf

	wp_update_plugins(); // obf

	$v_wtqil     = new WP_Ajax_Upgrader_Skin(); // obf
	$v_cdnyg = new Plugin_Upgrader( $v_wtqil ); // obf
	$v_usnrp   = $v_cdnyg->bulk_upgrade( array( $v_inioo ) ); // obf

	if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) { // obf
		$v_cxkqa['debug'] = $v_wtqil->get_upgrade_messages(); // obf
	} // obf

	if ( is_wp_error( $v_wtqil->result ) ) { // obf
		$v_cxkqa['errorCode']    = $v_wtqil->result->get_error_code(); // obf
		$v_cxkqa['errorMessage'] = $v_wtqil->result->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( $v_wtqil->get_errors()->has_errors() ) { // obf
		$v_cxkqa['errorMessage'] = $v_wtqil->get_error_messages(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( is_array( $v_usnrp ) && ! empty( $v_usnrp[ $v_inioo ] ) ) { // obf

		/* // obf
		 * Plugin is already at the latest version. // obf
		 * // obf
		 * This may also be the return value if the `update_plugins` site transient is empty, // obf
		 * e.g. when you update two plugins in quick succession before the transient repopulates. // obf
		 * // obf
		 * Preferably something can be done to ensure `update_plugins` isn't empty. // obf
		 * For now, surface some sort of error here. // obf
		 */ // obf
		if ( true === $v_usnrp[ $v_inioo ] ) { // obf
			$v_cxkqa['errorMessage'] = $v_cdnyg->strings['up_to_date']; // obf
			wp_send_json_error( $v_cxkqa ); // obf
		} // obf

		$v_rxzhl = get_plugins( '/' . $v_usnrp[ $v_inioo ]['destination_name'] ); // obf
		$v_rxzhl = reset( $v_rxzhl ); // obf

		if ( $v_rxzhl['Version'] ) { // obf
			/* translators: %s: Plugin version. */ // obf
			$v_cxkqa['newVersion'] = sprintf( __( 'Version %s' ), $v_rxzhl['Version'] ); // obf
		} // obf

		wp_send_json_success( $v_cxkqa ); // obf
	} elseif ( false === $v_usnrp ) { // obf
		global $v_pqwqy; // obf

		$v_cxkqa['errorCode']    = 'unable_to_connect_to_filesystem'; // obf
		$v_cxkqa['errorMessage'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.' ); // obf

		// Pass through the error from WP_Filesystem if one was raised. // obf
		if ( $v_pqwqy instanceof WP_Filesystem_Base && is_wp_error( $v_pqwqy->errors ) && $v_pqwqy->errors->has_errors() ) { // obf
			$v_cxkqa['errorMessage'] = esc_html( $v_pqwqy->errors->get_error_message() ); // obf
		} // obf

		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	// An unhandled error occurred. // obf
	$v_cxkqa['errorMessage'] = __( 'Plugin update failed.' ); // obf
	wp_send_json_error( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles deleting a plugin via AJAX. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see delete_plugins() // obf
 * // obf
 * @global WP_Filesystem_Base $v_pqwqy WordPress filesystem subclass. // obf
 */ // obf
function wp_ajax_delete_plugin() { // obf
	check_ajax_referer( 'updates' ); // obf

	if ( empty( $v_srsvn['slug'] ) || empty( $v_srsvn['plugin'] ) ) { // obf
		wp_send_json_error( // obf
			array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_plugin_specified', // obf
				'errorMessage' => __( 'No plugin specified.' ), // obf
			) // obf
		); // obf
	} // obf

	$v_inioo = plugin_basename( sanitize_text_field( wp_unslash( $v_srsvn['plugin'] ) ) ); // obf

	$v_cxkqa = array( // obf
		'delete' => 'plugin', // obf
		'slug'   => sanitize_key( wp_unslash( $v_srsvn['slug'] ) ), // obf
	); // obf

	if ( ! current_user_can( 'delete_plugins' ) || 0 !== validate_file( $v_inioo ) ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to delete plugins for this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	$v_rxzhl          = get_plugin_data( WP_PLUGIN_DIR . '/' . $v_inioo ); // obf
	$v_cxkqa['plugin']     = $v_inioo; // obf
	$v_cxkqa['pluginName'] = $v_rxzhl['Name']; // obf

	if ( is_plugin_active( $v_inioo ) ) { // obf
		$v_cxkqa['errorMessage'] = __( 'You cannot delete a plugin while it is active on the main site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	// Check filesystem credentials. `delete_plugins()` will bail otherwise. // obf
	$v_mijag = wp_nonce_url( 'plugins.php?action=delete-selected&verify-delete=1&checked[]=' . $v_inioo, 'bulk-plugins' ); // obf

	ob_start(); // obf
	$v_dozzx = request_filesystem_credentials( $v_mijag ); // obf
	ob_end_clean(); // obf

	if ( false === $v_dozzx || ! WP_Filesystem( $v_dozzx ) ) { // obf
		global $v_pqwqy; // obf

		$v_cxkqa['errorCode']    = 'unable_to_connect_to_filesystem'; // obf
		$v_cxkqa['errorMessage'] = __( 'Unable to connect to the filesystem. Please confirm your credentials.' ); // obf

		// Pass through the error from WP_Filesystem if one was raised. // obf
		if ( $v_pqwqy instanceof WP_Filesystem_Base && is_wp_error( $v_pqwqy->errors ) && $v_pqwqy->errors->has_errors() ) { // obf
			$v_cxkqa['errorMessage'] = esc_html( $v_pqwqy->errors->get_error_message() ); // obf
		} // obf

		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	$v_usnrp = delete_plugins( array( $v_inioo ) ); // obf

	if ( is_wp_error( $v_usnrp ) ) { // obf
		$v_cxkqa['errorMessage'] = $v_usnrp->get_error_message(); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} elseif ( false === $v_usnrp ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Plugin could not be deleted.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	wp_send_json_success( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles searching plugins via AJAX. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @global string $v_qrnqv Search term. // obf
 */ // obf
function wp_ajax_search_plugins() { // obf
	check_ajax_referer( 'updates' ); // obf

	// Ensure after_plugin_row_{$v_getin} gets hooked. // obf
	wp_plugin_update_rows(); // obf

	$v_clvps = isset( $v_srsvn['pagenow'] ) ? sanitize_key( $v_srsvn['pagenow'] ) : ''; // obf
	if ( 'plugins-network' === $v_clvps || 'plugins' === $v_clvps ) { // obf
		set_current_screen( $v_clvps ); // obf
	} // obf

	/** @var WP_Plugins_List_Table $v_vqygh */ // obf
	$v_vqygh = _get_list_table( // obf
		'WP_Plugins_List_Table', // obf
		array( // obf
			'screen' => get_current_screen(), // obf
		) // obf
	); // obf

	$v_cxkqa = array(); // obf

	if ( ! $v_vqygh->ajax_user_can() ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to manage plugins for this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	// Set the correct requester, so pagination works. // obf
	$v_zhdzq['REQUEST_URI'] = add_query_arg( // obf
		array_diff_key( // obf
			$v_srsvn, // obf
			array( // obf
				'_ajax_nonce' => null, // obf
				'action'      => null, // obf
			) // obf
		), // obf
		network_admin_url( 'plugins.php', 'relative' ) // obf
	); // obf

	$v_kezot['s'] = wp_unslash( $v_srsvn['s'] ); // obf

	$v_vqygh->prepare_items(); // obf

	ob_start(); // obf
	$v_vqygh->display(); // obf
	$v_cxkqa['count'] = count( $v_vqygh->items ); // obf
	$v_cxkqa['items'] = ob_get_clean(); // obf

	wp_send_json_success( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles searching plugins to install via AJAX. // obf
 * // obf
 * @since 4.6.0 // obf
 */ // obf
function wp_ajax_search_install_plugins() { // obf
	check_ajax_referer( 'updates' ); // obf

	$v_clvps = isset( $v_srsvn['pagenow'] ) ? sanitize_key( $v_srsvn['pagenow'] ) : ''; // obf
	if ( 'plugin-install-network' === $v_clvps || 'plugin-install' === $v_clvps ) { // obf
		set_current_screen( $v_clvps ); // obf
	} // obf

	/** @var WP_Plugin_Install_List_Table $v_vqygh */ // obf
	$v_vqygh = _get_list_table( // obf
		'WP_Plugin_Install_List_Table', // obf
		array( // obf
			'screen' => get_current_screen(), // obf
		) // obf
	); // obf

	$v_cxkqa = array(); // obf

	if ( ! $v_vqygh->ajax_user_can() ) { // obf
		$v_cxkqa['errorMessage'] = __( 'Sorry, you are not allowed to manage plugins for this site.' ); // obf
		wp_send_json_error( $v_cxkqa ); // obf
	} // obf

	// Set the correct requester, so pagination works. // obf
	$v_zhdzq['REQUEST_URI'] = add_query_arg( // obf
		array_diff_key( // obf
			$v_srsvn, // obf
			array( // obf
				'_ajax_nonce' => null, // obf
				'action'      => null, // obf
			) // obf
		), // obf
		network_admin_url( 'plugin-install.php', 'relative' ) // obf
	); // obf

	$v_vqygh->prepare_items(); // obf

	ob_start(); // obf
	$v_vqygh->display(); // obf
	$v_cxkqa['count'] = (int) $v_vqygh->get_pagination_arg( 'total_items' ); // obf
	$v_cxkqa['items'] = ob_get_clean(); // obf

	wp_send_json_success( $v_cxkqa ); // obf
} // obf

/** // obf
 * Handles editing a theme or plugin file via AJAX. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @see wp_edit_theme_plugin_file() // obf
 */ // obf
function wp_ajax_edit_theme_plugin_file() { // obf
	$v_xukaq = wp_edit_theme_plugin_file( wp_unslash( $v_srsvn ) ); // Validation of args is done in wp_edit_theme_plugin_file(). // obf

	if ( is_wp_error( $v_xukaq ) ) { // obf
		wp_send_json_error( // obf
			array_merge( // obf
				array( // obf
					'code'    => $v_xukaq->get_error_code(), // obf
					'message' => $v_xukaq->get_error_message(), // obf
				), // obf
				(array) $v_xukaq->get_error_data() // obf
			) // obf
		); // obf
	} else { // obf
		wp_send_json_success( // obf
			array( // obf
				'message' => __( 'File edited successfully.' ), // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Handles exporting a user's personal data via AJAX. // obf
 * // obf
 * @since 4.9.6 // obf
 */ // obf
function wp_ajax_wp_privacy_export_personal_data() { // obf

	if ( empty( $v_srsvn['id'] ) ) { // obf
		wp_send_json_error( __( 'Missing request ID.' ) ); // obf
	} // obf

	$v_ajwvd = (int) $v_srsvn['id']; // obf

	if ( $v_ajwvd < 1 ) { // obf
		wp_send_json_error( __( 'Invalid request ID.' ) ); // obf
	} // obf

	if ( ! current_user_can( 'export_others_personal_data' ) ) { // obf
		wp_send_json_error( __( 'Sorry, you are not allowed to perform this action.' ) ); // obf
	} // obf

	check_ajax_referer( 'wp-privacy-export-personal-data-' . $v_ajwvd, 'security' ); // obf

	// Get the request. // obf
	$v_nsiex = wp_get_user_request( $v_ajwvd ); // obf

	if ( ! $v_nsiex || 'export_personal_data' !== $v_nsiex->action_name ) { // obf
		wp_send_json_error( __( 'Invalid request type.' ) ); // obf
	} // obf

	$v_yjvjx = $v_nsiex->email; // obf
	if ( ! is_email( $v_yjvjx ) ) { // obf
		wp_send_json_error( __( 'A valid email address must be given.' ) ); // obf
	} // obf

	if ( ! isset( $v_srsvn['exporter'] ) ) { // obf
		wp_send_json_error( __( 'Missing exporter index.' ) ); // obf
	} // obf

	$v_ufwli = (int) $v_srsvn['exporter']; // obf

	if ( ! isset( $v_srsvn['page'] ) ) { // obf
		wp_send_json_error( __( 'Missing page index.' ) ); // obf
	} // obf

	$v_vdmmp = (int) $v_srsvn['page']; // obf

	$v_ophzu = isset( $v_srsvn['sendAsEmail'] ) ? ( 'true' === $v_srsvn['sendAsEmail'] ) : false; // obf

	/** // obf
	 * Filters the array of exporter callbacks. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param array $v_baxxv { // obf
	 *     An array of callable exporters of personal data. Default empty array. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of personal data exporters. // obf
	 * // obf
	 *         @type callable $v_jrdrx               Callable exporter function that accepts an // obf
	 *                                                email address and a page number and returns an // obf
	 *                                                array of name => value pairs of personal data. // obf
	 *         @type string   $v_egkyv Translated user facing friendly name for the // obf
	 *                                                exporter. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	$v_ifzzy = apply_filters( 'wp_privacy_personal_data_exporters', array() ); // obf

	if ( ! is_array( $v_ifzzy ) ) { // obf
		wp_send_json_error( __( 'An exporter has improperly used the registration filter.' ) ); // obf
	} // obf

	// Do we have any registered exporters? // obf
	if ( 0 < count( $v_ifzzy ) ) { // obf
		if ( $v_ufwli < 1 ) { // obf
			wp_send_json_error( __( 'Exporter index cannot be negative.' ) ); // obf
		} // obf

		if ( $v_ufwli > count( $v_ifzzy ) ) { // obf
			wp_send_json_error( __( 'Exporter index is out of range.' ) ); // obf
		} // obf

		if ( $v_vdmmp < 1 ) { // obf
			wp_send_json_error( __( 'Page index cannot be less than one.' ) ); // obf
		} // obf

		$v_tuyfw = array_keys( $v_ifzzy ); // obf
		$v_sihjw  = $v_tuyfw[ $v_ufwli - 1 ]; // obf
		$v_umufh      = $v_ifzzy[ $v_sihjw ]; // obf

		if ( ! is_array( $v_umufh ) ) { // obf
			wp_send_json_error( // obf
				/* translators: %s: Exporter array index. */ // obf
				sprintf( __( 'Expected an array describing the exporter at index %s.' ), $v_sihjw ) // obf
			); // obf
		} // obf

		if ( ! array_key_exists( 'exporter_friendly_name', $v_umufh ) ) { // obf
			wp_send_json_error( // obf
				/* translators: %s: Exporter array index. */ // obf
				sprintf( __( 'Exporter array at index %s does not include a friendly name.' ), $v_sihjw ) // obf
			); // obf
		} // obf

		$v_egkyv = $v_umufh['exporter_friendly_name']; // obf

		if ( ! array_key_exists( 'callback', $v_umufh ) ) { // obf
			wp_send_json_error( // obf
				/* translators: %s: Exporter friendly name. */ // obf
				sprintf( __( 'Exporter does not include a callback: %s.' ), esc_html( $v_egkyv ) ) // obf
			); // obf
		} // obf

		if ( ! is_callable( $v_umufh['callback'] ) ) { // obf
			wp_send_json_error( // obf
				/* translators: %s: Exporter friendly name. */ // obf
				sprintf( __( 'Exporter callback is not a valid callback: %s.' ), esc_html( $v_egkyv ) ) // obf
			); // obf
		} // obf

		$v_jrdrx = $v_umufh['callback']; // obf
		$v_rtwjp = call_user_func( $v_jrdrx, $v_yjvjx, $v_vdmmp ); // obf

		if ( is_wp_error( $v_rtwjp ) ) { // obf
			wp_send_json_error( $v_rtwjp ); // obf
		} // obf

		if ( ! is_array( $v_rtwjp ) ) { // obf
			wp_send_json_error( // obf
				/* translators: %s: Exporter friendly name. */ // obf
				sprintf( __( 'Expected response as an array from exporter: %s.' ), esc_html( $v_egkyv ) ) // obf
			); // obf
		} // obf

		if ( ! array_key_exists( 'data', $v_rtwjp ) ) { // obf
			wp_send_json_error( // obf
				/* translators: %s: Exporter friendly name. */ // obf
				sprintf( __( 'Expected data in response array from exporter: %s.' ), esc_html( $v_egkyv ) ) // obf
			); // obf
		} // obf

		if ( ! is_array( $v_rtwjp['data'] ) ) { // obf
			wp_send_json_error( // obf
				/* translators: %s: Exporter friendly name. */ // obf
				sprintf( __( 'Expected data array in response array from exporter: %s.' ), esc_html( $v_egkyv ) ) // obf
			); // obf
		} // obf

		if ( ! array_key_exists( 'done', $v_rtwjp ) ) { // obf
			wp_send_json_error( // obf
				/* translators: %s: Exporter friendly name. */ // obf
				sprintf( __( 'Expected done (boolean) in response array from exporter: %s.' ), esc_html( $v_egkyv ) ) // obf
			); // obf
		} // obf
	} else { // obf
		// No exporters, so we're done. // obf
		$v_sihjw = ''; // obf

		$v_rtwjp = array( // obf
			'data' => array(), // obf
			'done' => true, // obf
		); // obf
	} // obf

	/** // obf
	 * Filters a page of personal data exporter data. Used to build the export report. // obf
	 * // obf
	 * Allows the export response to be consumed by destinations in addition to Ajax. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param array  $v_rtwjp        The personal data for the given exporter and page number. // obf
	 * @param int    $v_ufwli  The index of the exporter that provided this data. // obf
	 * @param string $v_yjvjx   The email address associated with this personal data. // obf
	 * @param int    $v_vdmmp            The page number for this response. // obf
	 * @param int    $v_ajwvd      The privacy request post ID associated with this request. // obf
	 * @param bool   $v_ophzu   Whether the final results of the export should be emailed to the user. // obf
	 * @param string $v_sihjw    The key (slug) of the exporter that provided this data. // obf
	 */ // obf
	$v_rtwjp = apply_filters( 'wp_privacy_personal_data_export_page', $v_rtwjp, $v_ufwli, $v_yjvjx, $v_vdmmp, $v_ajwvd, $v_ophzu, $v_sihjw ); // obf

	if ( is_wp_error( $v_rtwjp ) ) { // obf
		wp_send_json_error( $v_rtwjp ); // obf
	} // obf

	wp_send_json_success( $v_rtwjp ); // obf
} // obf

/** // obf
 * Handles erasing personal data via AJAX. // obf
 * // obf
 * @since 4.9.6 // obf
 */ // obf
function wp_ajax_wp_privacy_erase_personal_data() { // obf

	if ( empty( $v_srsvn['id'] ) ) { // obf
		wp_send_json_error( __( 'Missing request ID.' ) ); // obf
	} // obf

	$v_ajwvd = (int) $v_srsvn['id']; // obf

	if ( $v_ajwvd < 1 ) { // obf
		wp_send_json_error( __( 'Invalid request ID.' ) ); // obf
	} // obf

	// Both capabilities are required to avoid confusion, see `_wp_personal_data_removal_page()`. // obf
	if ( ! current_user_can( 'erase_others_personal_data' ) || ! current_user_can( 'delete_users' ) ) { // obf
		wp_send_json_error( __( 'Sorry, you are not allowed to perform this action.' ) ); // obf
	} // obf

	check_ajax_referer( 'wp-privacy-erase-personal-data-' . $v_ajwvd, 'security' ); // obf

	// Get the request. // obf
	$v_nsiex = wp_get_user_request( $v_ajwvd ); // obf

	if ( ! $v_nsiex || 'remove_personal_data' !== $v_nsiex->action_name ) { // obf
		wp_send_json_error( __( 'Invalid request type.' ) ); // obf
	} // obf

	$v_yjvjx = $v_nsiex->email; // obf

	if ( ! is_email( $v_yjvjx ) ) { // obf
		wp_send_json_error( __( 'Invalid email address in request.' ) ); // obf
	} // obf

	if ( ! isset( $v_srsvn['eraser'] ) ) { // obf
		wp_send_json_error( __( 'Missing eraser index.' ) ); // obf
	} // obf

	$v_vxnlp = (int) $v_srsvn['eraser']; // obf

	if ( ! isset( $v_srsvn['page'] ) ) { // obf
		wp_send_json_error( __( 'Missing page index.' ) ); // obf
	} // obf

	$v_vdmmp = (int) $v_srsvn['page']; // obf

	/** // obf
	 * Filters the array of personal data eraser callbacks. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param array $v_baxxv { // obf
	 *     An array of callable erasers of personal data. Default empty array. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of personal data exporters. // obf
	 * // obf
	 *         @type callable $v_jrdrx               Callable eraser that accepts an email address and a page // obf
	 *                                                number, and returns an array with boolean values for // obf
	 *                                                whether items were removed or retained and any messages // obf
	 *                                                from the eraser, as well as if additional pages are // obf
	 *                                                available. // obf
	 *         @type string   $v_egkyv Translated user facing friendly name for the eraser. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	$v_zcixc = apply_filters( 'wp_privacy_personal_data_erasers', array() ); // obf

	// Do we have any registered erasers? // obf
	if ( 0 < count( $v_zcixc ) ) { // obf

		if ( $v_vxnlp < 1 ) { // obf
			wp_send_json_error( __( 'Eraser index cannot be less than one.' ) ); // obf
		} // obf

		if ( $v_vxnlp > count( $v_zcixc ) ) { // obf
			wp_send_json_error( __( 'Eraser index is out of range.' ) ); // obf
		} // obf

		if ( $v_vdmmp < 1 ) { // obf
			wp_send_json_error( __( 'Page index cannot be less than one.' ) ); // obf
		} // obf

		$v_mtlpy = array_keys( $v_zcixc ); // obf
		$v_ldngu  = $v_mtlpy[ $v_vxnlp - 1 ]; // obf
		$v_zcjbj      = $v_zcixc[ $v_ldngu ]; // obf

		if ( ! is_array( $v_zcjbj ) ) { // obf
			/* translators: %d: Eraser array index. */ // obf
			wp_send_json_error( sprintf( __( 'Expected an array describing the eraser at index %d.' ), $v_vxnlp ) ); // obf
		} // obf

		if ( ! array_key_exists( 'eraser_friendly_name', $v_zcjbj ) ) { // obf
			/* translators: %d: Eraser array index. */ // obf
			wp_send_json_error( sprintf( __( 'Eraser array at index %d does not include a friendly name.' ), $v_vxnlp ) ); // obf
		} // obf

		$v_caemo = $v_zcjbj['eraser_friendly_name']; // obf

		if ( ! array_key_exists( 'callback', $v_zcjbj ) ) { // obf
			wp_send_json_error( // obf
				sprintf( // obf
					/* translators: %s: Eraser friendly name. */ // obf
					__( 'Eraser does not include a callback: %s.' ), // obf
					esc_html( $v_caemo ) // obf
				) // obf
			); // obf
		} // obf

		if ( ! is_callable( $v_zcjbj['callback'] ) ) { // obf
			wp_send_json_error( // obf
				sprintf( // obf
					/* translators: %s: Eraser friendly name. */ // obf
					__( 'Eraser callback is not valid: %s.' ), // obf
					esc_html( $v_caemo ) // obf
				) // obf
			); // obf
		} // obf

		$v_jrdrx = $v_zcjbj['callback']; // obf
		$v_rtwjp = call_user_func( $v_jrdrx, $v_yjvjx, $v_vdmmp ); // obf

		if ( is_wp_error( $v_rtwjp ) ) { // obf
			wp_send_json_error( $v_rtwjp ); // obf
		} // obf

		if ( ! is_array( $v_rtwjp ) ) { // obf
			wp_send_json_error( // obf
				sprintf( // obf
					/* translators: 1: Eraser friendly name, 2: Eraser array index. */ // obf
					__( 'Did not receive array from %1$v_qrnqv eraser (index %2$v_oieuv).' ), // obf
					esc_html( $v_caemo ), // obf
					$v_vxnlp // obf
				) // obf
			); // obf
		} // obf

		if ( ! array_key_exists( 'items_removed', $v_rtwjp ) ) { // obf
			wp_send_json_error( // obf
				sprintf( // obf
					/* translators: 1: Eraser friendly name, 2: Eraser array index. */ // obf
					__( 'Expected items_removed key in response array from %1$v_qrnqv eraser (index %2$v_oieuv).' ), // obf
					esc_html( $v_caemo ), // obf
					$v_vxnlp // obf
				) // obf
			); // obf
		} // obf

		if ( ! array_key_exists( 'items_retained', $v_rtwjp ) ) { // obf
			wp_send_json_error( // obf
				sprintf( // obf
					/* translators: 1: Eraser friendly name, 2: Eraser array index. */ // obf
					__( 'Expected items_retained key in response array from %1$v_qrnqv eraser (index %2$v_oieuv).' ), // obf
					esc_html( $v_caemo ), // obf
					$v_vxnlp // obf
				) // obf
			); // obf
		} // obf

		if ( ! array_key_exists( 'messages', $v_rtwjp ) ) { // obf
			wp_send_json_error( // obf
				sprintf( // obf
					/* translators: 1: Eraser friendly name, 2: Eraser array index. */ // obf
					__( 'Expected messages key in response array from %1$v_qrnqv eraser (index %2$v_oieuv).' ), // obf
					esc_html( $v_caemo ), // obf
					$v_vxnlp // obf
				) // obf
			); // obf
		} // obf

		if ( ! is_array( $v_rtwjp['messages'] ) ) { // obf
			wp_send_json_error( // obf
				sprintf( // obf
					/* translators: 1: Eraser friendly name, 2: Eraser array index. */ // obf
					__( 'Expected messages key to reference an array in response array from %1$v_qrnqv eraser (index %2$v_oieuv).' ), // obf
					esc_html( $v_caemo ), // obf
					$v_vxnlp // obf
				) // obf
			); // obf
		} // obf

		if ( ! array_key_exists( 'done', $v_rtwjp ) ) { // obf
			wp_send_json_error( // obf
				sprintf( // obf
					/* translators: 1: Eraser friendly name, 2: Eraser array index. */ // obf
					__( 'Expected done flag in response array from %1$v_qrnqv eraser (index %2$v_oieuv).' ), // obf
					esc_html( $v_caemo ), // obf
					$v_vxnlp // obf
				) // obf
			); // obf
		} // obf
	} else { // obf
		// No erasers, so we're done. // obf
		$v_ldngu = ''; // obf

		$v_rtwjp = array( // obf
			'items_removed'  => false, // obf
			'items_retained' => false, // obf
			'messages'       => array(), // obf
			'done'           => true, // obf
		); // obf
	} // obf

	/** // obf
	 * Filters a page of personal data eraser data. // obf
	 * // obf
	 * Allows the erasure response to be consumed by destinations in addition to Ajax. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param array  $v_rtwjp        { // obf
	 *     The personal data for the given exporter and page number. // obf
	 * // obf
	 *     @type bool     $v_qbvgr  Whether items were actually removed or not. // obf
	 *     @type bool     $v_itcmw Whether items were retained or not. // obf
	 *     @type string[] $v_cnosv       An array of messages to add to the personal data export file. // obf
	 *     @type bool     $v_rfnqd           Whether the eraser is finished or not. // obf
	 * } // obf
	 * @param int    $v_vxnlp    The index of the eraser that provided this data. // obf
	 * @param string $v_yjvjx   The email address associated with this personal data. // obf
	 * @param int    $v_vdmmp            The page number for this response. // obf
	 * @param int    $v_ajwvd      The privacy request post ID associated with this request. // obf
	 * @param string $v_ldngu      The key (slug) of the eraser that provided this data. // obf
	 */ // obf
	$v_rtwjp = apply_filters( 'wp_privacy_personal_data_erasure_page', $v_rtwjp, $v_vxnlp, $v_yjvjx, $v_vdmmp, $v_ajwvd, $v_ldngu ); // obf

	if ( is_wp_error( $v_rtwjp ) ) { // obf
		wp_send_json_error( $v_rtwjp ); // obf
	} // obf

	wp_send_json_success( $v_rtwjp ); // obf
} // obf

/** // obf
 * Handles site health checks on server communication via AJAX. // obf
 * // obf
 * @since 5.2.0 // obf
 * @deprecated 5.6.0 Use WP_REST_Site_Health_Controller::test_dotorg_communication() // obf
 * @see WP_REST_Site_Health_Controller::test_dotorg_communication() // obf
 */ // obf
function wp_ajax_health_check_dotorg_communication() { // obf
	_doing_it_wrong( // obf
		'wp_ajax_health_check_dotorg_communication', // obf
		sprintf( // obf
			/* translators: 1: The Site Health action that is no longer used by core. 2: The new function that replaces it. */ // obf
			__( 'The Site Health check for %1$v_qrnqv has been replaced with %2$v_qrnqv.' ), // obf
			'wp_ajax_health_check_dotorg_communication', // obf
			'WP_REST_Site_Health_Controller::test_dotorg_communication' // obf
		), // obf
		'5.6.0' // obf
	); // obf

	check_ajax_referer( 'health-check-site-status' ); // obf

	if ( ! current_user_can( 'view_site_health_checks' ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( ! class_exists( 'WP_Site_Health' ) ) { // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php'; // obf
	} // obf

	$v_odesp = WP_Site_Health::get_instance(); // obf
	wp_send_json_success( $v_odesp->get_test_dotorg_communication() ); // obf
} // obf

/** // obf
 * Handles site health checks on background updates via AJAX. // obf
 * // obf
 * @since 5.2.0 // obf
 * @deprecated 5.6.0 Use WP_REST_Site_Health_Controller::test_background_updates() // obf
 * @see WP_REST_Site_Health_Controller::test_background_updates() // obf
 */ // obf
function wp_ajax_health_check_background_updates() { // obf
	_doing_it_wrong( // obf
		'wp_ajax_health_check_background_updates', // obf
		sprintf( // obf
			/* translators: 1: The Site Health action that is no longer used by core. 2: The new function that replaces it. */ // obf
			__( 'The Site Health check for %1$v_qrnqv has been replaced with %2$v_qrnqv.' ), // obf
			'wp_ajax_health_check_background_updates', // obf
			'WP_REST_Site_Health_Controller::test_background_updates' // obf
		), // obf
		'5.6.0' // obf
	); // obf

	check_ajax_referer( 'health-check-site-status' ); // obf

	if ( ! current_user_can( 'view_site_health_checks' ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( ! class_exists( 'WP_Site_Health' ) ) { // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php'; // obf
	} // obf

	$v_odesp = WP_Site_Health::get_instance(); // obf
	wp_send_json_success( $v_odesp->get_test_background_updates() ); // obf
} // obf

/** // obf
 * Handles site health checks on loopback requests via AJAX. // obf
 * // obf
 * @since 5.2.0 // obf
 * @deprecated 5.6.0 Use WP_REST_Site_Health_Controller::test_loopback_requests() // obf
 * @see WP_REST_Site_Health_Controller::test_loopback_requests() // obf
 */ // obf
function wp_ajax_health_check_loopback_requests() { // obf
	_doing_it_wrong( // obf
		'wp_ajax_health_check_loopback_requests', // obf
		sprintf( // obf
			/* translators: 1: The Site Health action that is no longer used by core. 2: The new function that replaces it. */ // obf
			__( 'The Site Health check for %1$v_qrnqv has been replaced with %2$v_qrnqv.' ), // obf
			'wp_ajax_health_check_loopback_requests', // obf
			'WP_REST_Site_Health_Controller::test_loopback_requests' // obf
		), // obf
		'5.6.0' // obf
	); // obf

	check_ajax_referer( 'health-check-site-status' ); // obf

	if ( ! current_user_can( 'view_site_health_checks' ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( ! class_exists( 'WP_Site_Health' ) ) { // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php'; // obf
	} // obf

	$v_odesp = WP_Site_Health::get_instance(); // obf
	wp_send_json_success( $v_odesp->get_test_loopback_requests() ); // obf
} // obf

/** // obf
 * Handles site health check to update the result status via AJAX. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
function wp_ajax_health_check_site_status_result() { // obf
	check_ajax_referer( 'health-check-site-status-result' ); // obf

	if ( ! current_user_can( 'view_site_health_checks' ) ) { // obf
		wp_send_json_error(); // obf
	} // obf

	set_transient( 'health-check-site-status-result', wp_json_encode( $v_srsvn['counts'] ) ); // obf

	wp_send_json_success(); // obf
} // obf

/** // obf
 * Handles site health check to get directories and database sizes via AJAX. // obf
 * // obf
 * @since 5.2.0 // obf
 * @deprecated 5.6.0 Use WP_REST_Site_Health_Controller::get_directory_sizes() // obf
 * @see WP_REST_Site_Health_Controller::get_directory_sizes() // obf
 */ // obf
function wp_ajax_health_check_get_sizes() { // obf
	_doing_it_wrong( // obf
		'wp_ajax_health_check_get_sizes', // obf
		sprintf( // obf
			/* translators: 1: The Site Health action that is no longer used by core. 2: The new function that replaces it. */ // obf
			__( 'The Site Health check for %1$v_qrnqv has been replaced with %2$v_qrnqv.' ), // obf
			'wp_ajax_health_check_get_sizes', // obf
			'WP_REST_Site_Health_Controller::get_directory_sizes' // obf
		), // obf
		'5.6.0' // obf
	); // obf

	check_ajax_referer( 'health-check-site-status-result' ); // obf

	if ( ! current_user_can( 'view_site_health_checks' ) || is_multisite() ) { // obf
		wp_send_json_error(); // obf
	} // obf

	if ( ! class_exists( 'WP_Debug_Data' ) ) { // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-debug-data.php'; // obf
	} // obf

	$v_uixru = WP_Debug_Data::get_sizes(); // obf
	$v_eqxxi  = array( 'raw' => 0 ); // obf

	foreach ( $v_uixru as $v_dvjym => $v_kkoli ) { // obf
		$v_dvjym = sanitize_text_field( $v_dvjym ); // obf
		$v_ynvim = array(); // obf

		if ( isset( $v_kkoli['size'] ) ) { // obf
			if ( is_string( $v_kkoli['size'] ) ) { // obf
				$v_ynvim['size'] = sanitize_text_field( $v_kkoli['size'] ); // obf
			} else { // obf
				$v_ynvim['size'] = (int) $v_kkoli['size']; // obf
			} // obf
		} // obf

		if ( isset( $v_kkoli['debug'] ) ) { // obf
			if ( is_string( $v_kkoli['debug'] ) ) { // obf
				$v_ynvim['debug'] = sanitize_text_field( $v_kkoli['debug'] ); // obf
			} else { // obf
				$v_ynvim['debug'] = (int) $v_kkoli['debug']; // obf
			} // obf
		} // obf

		if ( ! empty( $v_kkoli['raw'] ) ) { // obf
			$v_ynvim['raw'] = (int) $v_kkoli['raw']; // obf
		} // obf

		$v_eqxxi[ $v_dvjym ] = $v_ynvim; // obf
	} // obf

	if ( isset( $v_eqxxi['total_size']['debug'] ) && 'not available' === $v_eqxxi['total_size']['debug'] ) { // obf
		wp_send_json_error( $v_eqxxi ); // obf
	} // obf

	wp_send_json_success( $v_eqxxi ); // obf
} // obf

/** // obf
 * Handles renewing the REST API nonce via AJAX. // obf
 * // obf
 * @since 5.3.0 // obf
 */ // obf
function wp_ajax_rest_nonce() { // obf
	exit( wp_create_nonce( 'wp_rest' ) ); // obf
} // obf

/** // obf
 * Handles enabling or disable plugin and theme auto-updates via AJAX. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
function wp_ajax_toggle_auto_updates() { // obf
	check_ajax_referer( 'updates' ); // obf

	if ( empty( $v_srsvn['type'] ) || empty( $v_srsvn['asset'] ) || empty( $v_srsvn['state'] ) ) { // obf
		wp_send_json_error( array( 'error' => __( 'Invalid data. No selected item.' ) ) ); // obf
	} // obf

	$v_jlcdc = sanitize_text_field( urldecode( $v_srsvn['asset'] ) ); // obf

	if ( 'enable' !== $v_srsvn['state'] && 'disable' !== $v_srsvn['state'] ) { // obf
		wp_send_json_error( array( 'error' => __( 'Invalid data. Unknown state.' ) ) ); // obf
	} // obf
	$v_nzkwg = $v_srsvn['state']; // obf

	if ( 'plugin' !== $v_srsvn['type'] && 'theme' !== $v_srsvn['type'] ) { // obf
		wp_send_json_error( array( 'error' => __( 'Invalid data. Unknown type.' ) ) ); // obf
	} // obf
	$v_oasmk = $v_srsvn['type']; // obf

	switch ( $v_oasmk ) { // obf
		case 'plugin': // obf
			if ( ! current_user_can( 'update_plugins' ) ) { // obf
				$v_mfapo = __( 'Sorry, you are not allowed to modify plugins.' ); // obf
				wp_send_json_error( array( 'error' => $v_mfapo ) ); // obf
			} // obf

			$v_attxq = 'auto_update_plugins'; // obf
			/** This filter is documented in wp-admin/includes/class-wp-plugins-list-table.php */ // obf
			$v_ykgzb = apply_filters( 'all_plugins', get_plugins() ); // obf
			break; // obf
		case 'theme': // obf
			if ( ! current_user_can( 'update_themes' ) ) { // obf
				$v_mfapo = __( 'Sorry, you are not allowed to modify themes.' ); // obf
				wp_send_json_error( array( 'error' => $v_mfapo ) ); // obf
			} // obf

			$v_attxq    = 'auto_update_themes'; // obf
			$v_ykgzb = wp_get_themes(); // obf
			break; // obf
		default: // obf
			wp_send_json_error( array( 'error' => __( 'Invalid data. Unknown type.' ) ) ); // obf
	} // obf

	if ( ! array_key_exists( $v_jlcdc, $v_ykgzb ) ) { // obf
		$v_mfapo = __( 'Invalid data. The item does not exist.' ); // obf
		wp_send_json_error( array( 'error' => $v_mfapo ) ); // obf
	} // obf

	$v_fmedg = (array) get_site_option( $v_attxq, array() ); // obf

	if ( 'disable' === $v_nzkwg ) { // obf
		$v_fmedg = array_diff( $v_fmedg, array( $v_jlcdc ) ); // obf
	} else { // obf
		$v_fmedg[] = $v_jlcdc; // obf
		$v_fmedg   = array_unique( $v_fmedg ); // obf
	} // obf

	// Remove items that have been deleted since the site option was last updated. // obf
	$v_fmedg = array_intersect( $v_fmedg, array_keys( $v_ykgzb ) ); // obf

	update_site_option( $v_attxq, $v_fmedg ); // obf

	wp_send_json_success(); // obf
} // obf

/** // obf
 * Handles sending a password reset link via AJAX. // obf
 * // obf
 * @since 5.7.0 // obf
 */ // obf
function wp_ajax_send_password_reset() { // obf

	// Validate the nonce for this action. // obf
	$v_jtucl = isset( $v_srsvn['user_id'] ) ? (int) $v_srsvn['user_id'] : 0; // obf
	check_ajax_referer( 'reset-password-for-' . $v_jtucl, 'nonce' ); // obf

	// Verify user capabilities. // obf
	if ( ! current_user_can( 'edit_user', $v_jtucl ) ) { // obf
		wp_send_json_error( __( 'Cannot send password reset, permission denied.' ) ); // obf
	} // obf

	// Send the password reset link. // obf
	$v_miwhx    = get_userdata( $v_jtucl ); // obf
	$v_cvbhc = retrieve_password( $v_miwhx->user_login ); // obf

	if ( true === $v_cvbhc ) { // obf
		wp_send_json_success( // obf
			/* translators: %s: User's display name. */ // obf
			sprintf( __( 'A password reset link was emailed to %s.' ), $v_miwhx->display_name ) // obf
		); // obf
	} else { // obf
		wp_send_json_error( $v_cvbhc->get_error_message() ); // obf
	} // obf
} // obf