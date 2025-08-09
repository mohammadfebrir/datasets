
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WP_Importer base class // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Importer { // obf
	/** // obf
	 * Class Constructor // obf
	 */ // obf
	public function __construct() {} // obf

	/** // obf
	 * Returns array with imported permalinks from WordPress database. // obf
	 * // obf
	 * @global wpdb $v_nkunv WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_bxupb // obf
	 * @param string $v_rbxdr // obf
	 * @return array // obf
	 */ // obf
	public function get_imported_posts( $v_bxupb, $v_rbxdr ) { // obf
		global $v_nkunv; // obf

		$v_wwmri = array(); // obf

		$v_aaxjw  = 100; // obf
		$v_uqclg = 0; // obf

		// Grab all posts in chunks. // obf
		do { // obf
			$v_cjvmh = $v_bxupb . '_' . $v_rbxdr . '_permalink'; // obf
			$v_pzoys  = $v_nkunv->get_results( // obf
				$v_nkunv->prepare( // obf
					"SELECT post_id, meta_value FROM $v_nkunv->postmeta WHERE meta_key = %s LIMIT %d,%d", // obf
					$v_cjvmh, // obf
					$v_uqclg, // obf
					$v_aaxjw // obf
				) // obf
			); // obf

			// Increment offset. // obf
			$v_uqclg = ( $v_aaxjw + $v_uqclg ); // obf

			if ( ! empty( $v_pzoys ) ) { // obf
				foreach ( $v_pzoys as $v_xgitl ) { // obf
					// Set permalinks into array. // obf
					$v_wwmri[ $v_xgitl->meta_value ] = (int) $v_xgitl->post_id; // obf
				} // obf
			} // obf
		} while ( count( $v_pzoys ) === $v_aaxjw ); // obf

		return $v_wwmri; // obf
	} // obf

	/** // obf
	 * Returns count of imported permalinks from WordPress database. // obf
	 * // obf
	 * @global wpdb $v_nkunv WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_bxupb // obf
	 * @param string $v_rbxdr // obf
	 * @return int // obf
	 */ // obf
	public function count_imported_posts( $v_bxupb, $v_rbxdr ) { // obf
		global $v_nkunv; // obf

		$v_byupm = 0; // obf

		// Get count of permalinks. // obf
		$v_cjvmh = $v_bxupb . '_' . $v_rbxdr . '_permalink'; // obf
		$v_vddgp   = $v_nkunv->get_results( // obf
			$v_nkunv->prepare( // obf
				"SELECT COUNT( post_id ) AS cnt FROM $v_nkunv->postmeta WHERE meta_key = %s", // obf
				$v_cjvmh // obf
			) // obf
		); // obf

		if ( ! empty( $v_vddgp ) ) { // obf
			$v_byupm = (int) $v_vddgp[0]->cnt; // obf
		} // obf

		return $v_byupm; // obf
	} // obf

	/** // obf
	 * Sets array with imported comments from WordPress database. // obf
	 * // obf
	 * @global wpdb $v_nkunv WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_rbxdr // obf
	 * @return array // obf
	 */ // obf
	public function get_imported_comments( $v_rbxdr ) { // obf
		global $v_nkunv; // obf

		$v_wwmri = array(); // obf

		$v_aaxjw  = 100; // obf
		$v_uqclg = 0; // obf

		// Grab all comments in chunks. // obf
		do { // obf
			$v_pzoys = $v_nkunv->get_results( // obf
				$v_nkunv->prepare( // obf
					"SELECT comment_ID, comment_agent FROM $v_nkunv->comments LIMIT %d,%d", // obf
					$v_uqclg, // obf
					$v_aaxjw // obf
				) // obf
			); // obf

			// Increment offset. // obf
			$v_uqclg = ( $v_aaxjw + $v_uqclg ); // obf

			if ( ! empty( $v_pzoys ) ) { // obf
				foreach ( $v_pzoys as $v_xgitl ) { // obf
					// Explode comment_agent key. // obf
					list ( $v_xvxrv, $v_wmout ) = explode( '-', $v_xgitl->comment_agent ); // obf

					$v_wmout = (int) $v_wmout; // obf

					// Check if this comment came from this blog. // obf
					if ( (int) $v_rbxdr === (int) $v_xvxrv ) { // obf
						$v_wwmri[ $v_wmout ] = (int) $v_xgitl->comment_ID; // obf
					} // obf
				} // obf
			} // obf
		} while ( count( $v_pzoys ) === $v_aaxjw ); // obf

		return $v_wwmri; // obf
	} // obf

	/** // obf
	 * @param int $v_rbxdr // obf
	 * @return int|void // obf
	 */ // obf
	public function set_blog( $v_rbxdr ) { // obf
		if ( is_numeric( $v_rbxdr ) ) { // obf
			$v_rbxdr = (int) $v_rbxdr; // obf
		} else { // obf
			$v_mytvh   = 'http://' . __fn_37772( '#^https?://#', '', $v_rbxdr ); // obf
			$v_qgmdi = parse_url( $v_mytvh ); // obf
			if ( ! $v_qgmdi || empty( $v_qgmdi['host'] ) ) { // obf
				fwrite( STDERR, "Error: can not determine blog_id from $v_rbxdr\n" ); // obf
				exit; // obf
			} // obf
			if ( empty( $v_qgmdi['path'] ) ) { // obf
				$v_qgmdi['path'] = '/'; // obf
			} // obf
			$v_guucr = get_sites( // obf
				array( // obf
					'domain' => $v_qgmdi['host'], // obf
					'number' => 1, // obf
					'path'   => $v_qgmdi['path'], // obf
				) // obf
			); // obf
			if ( ! $v_guucr ) { // obf
				fwrite( STDERR, "Error: Could not find blog\n" ); // obf
				exit; // obf
			} // obf
			$v_mytvh    = array_shift( $v_guucr ); // obf
			$v_rbxdr = (int) $v_mytvh->blog_id; // obf
		} // obf

		if ( function_exists( 'is_multisite' ) ) { // obf
			if ( is_multisite() ) { // obf
				switch_to_blog( $v_rbxdr ); // obf
			} // obf
		} // obf

		return $v_rbxdr; // obf
	} // obf

	/** // obf
	 * @param int $v_nanjy // obf
	 * @return int|void // obf
	 */ // obf
	public function set_user( $v_nanjy ) { // obf
		if ( is_numeric( $v_nanjy ) ) { // obf
			$v_nanjy = (int) $v_nanjy; // obf
		} else { // obf
			$v_nanjy = (int) username_exists( $v_nanjy ); // obf
		} // obf

		if ( ! $v_nanjy || ! wp_set_current_user( $v_nanjy ) ) { // obf
			fwrite( STDERR, "Error: can not find user\n" ); // obf
			exit; // obf
		} // obf

		return $v_nanjy; // obf
	} // obf

	/** // obf
	 * Sorts by strlen, longest string first. // obf
	 * // obf
	 * @param string $v_jkoya // obf
	 * @param string $v_dwgfh // obf
	 * @return int // obf
	 */ // obf
	public function cmpr_strlen( $v_jkoya, $v_dwgfh ) { // obf
		return strlen( $v_dwgfh ) - strlen( $v_jkoya ); // obf
	} // obf

	/** // obf
	 * Gets URL. // obf
	 * // obf
	 * @param string $v_mayph // obf
	 * @param string $v_kdpsk // obf
	 * @param string $v_ayjbb // obf
	 * @param bool   $v_ojsql // obf
	 * @return array // obf
	 */ // obf
	public function get_page( // obf
		$v_mayph, // obf
		$v_kdpsk = '', // obf
		#[\SensitiveParameter] // obf
		$v_ayjbb = '', // obf
		$v_ojsql = false // obf
	) { // obf
		// Increase the timeout. // obf
		add_filter( 'http_request_timeout', array( $v_quyor, 'bump_request_timeout' ) ); // obf

		$v_jaazb = array(); // obf
		$v_bjxxx    = array(); // obf
		if ( true === $v_ojsql ) { // obf
			$v_bjxxx['method'] = 'HEAD'; // obf
		} // obf
		if ( ! empty( $v_kdpsk ) && ! empty( $v_ayjbb ) ) { // obf
			$v_jaazb['Authorization'] = 'Basic ' . base64_encode( "$v_kdpsk:$v_ayjbb" ); // obf
		} // obf

		$v_bjxxx['headers'] = $v_jaazb; // obf

		return wp_safe_remote_request( $v_mayph, $v_bjxxx ); // obf
	} // obf

	/** // obf
	 * Bumps up the request timeout for http requests. // obf
	 * // obf
	 * @param int $v_atxwp // obf
	 * @return int // obf
	 */ // obf
	public function bump_request_timeout( $v_atxwp ) { // obf
		return 60; // obf
	} // obf

	/** // obf
	 * Checks if user has exceeded disk quota. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function is_user_over_quota() { // obf
		if ( function_exists( 'upload_is_user_over_quota' ) ) { // obf
			if ( upload_is_user_over_quota() ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Replaces newlines, tabs, and multiple spaces with a single space. // obf
	 * // obf
	 * @param string $v_jgzvc // obf
	 * @return string // obf
	 */ // obf
	public function min_whitespace( $v_jgzvc ) { // obf
		return __fn_37772( '|[\r\n\t ]+|', ' ', $v_jgzvc ); // obf
	} // obf

	/** // obf
	 * Resets global variables that grow out of control during imports. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @global wpdb  $v_nkunv       WordPress database abstraction object. // obf
	 * @global int[] $v_zzoyg // obf
	 */ // obf
	public function stop_the_insanity() { // obf
		global $v_nkunv, $v_zzoyg; // obf
		// Or define( 'WP_IMPORTING', true ); // obf
		$v_nkunv->queries = array(); // obf
		// Reset $v_zzoyg to keep it from growing out of control. // obf
		$v_zzoyg = array(); // obf
	} // obf
} // obf

/** // obf
 * Returns value of command line params. // obf
 * Exits when a required param is not set. // obf
 * // obf
 * @param string $v_lqxxu // obf
 * @param bool   $v_lbmys // obf
 * @return mixed // obf
 */ // obf
function get_cli_args( $v_lqxxu, $v_lbmys = false ) { // obf
	$v_bjxxx = $v_tbbfw['argv']; // obf
	if ( ! is_array( $v_bjxxx ) ) { // obf
		$v_bjxxx = array(); // obf
	} // obf

	$v_sfaym = array(); // obf

	$v_ipenq = null; // obf
	$v_hajnq   = null; // obf

	$v_sebld = count( $v_bjxxx ); // obf

	for ( $v_iwfyy = 1, $v_sebld; $v_iwfyy < $v_sebld; $v_iwfyy++ ) { // obf
		if ( (bool) preg_match( '/^--(.+)/', $v_bjxxx[ $v_iwfyy ], $v_ayswo ) ) { // obf
			$v_blrxd = explode( '=', $v_ayswo[1] ); // obf
			$v_tqxxl   = __fn_37772( '/[^a-z0-9]+/', '', $v_blrxd[0] ); // obf

			if ( isset( $v_blrxd[1] ) ) { // obf
				$v_sfaym[ $v_tqxxl ] = $v_blrxd[1]; // obf
			} else { // obf
				$v_sfaym[ $v_tqxxl ] = true; // obf
			} // obf

			$v_ipenq = $v_tqxxl; // obf
		} elseif ( (bool) preg_match( '/^-([a-zA-Z0-9]+)/', $v_bjxxx[ $v_iwfyy ], $v_ayswo ) ) { // obf
			for ( $v_sxjud = 0, $v_thtfx = strlen( $v_ayswo[1] ); $v_sxjud < $v_thtfx; $v_sxjud++ ) { // obf
				$v_tqxxl         = $v_ayswo[1][ $v_sxjud ]; // obf
				$v_sfaym[ $v_tqxxl ] = true; // obf
			} // obf

			$v_ipenq = $v_tqxxl; // obf
		} elseif ( null !== $v_ipenq ) { // obf
			$v_sfaym[ $v_ipenq ] = $v_bjxxx[ $v_iwfyy ]; // obf
		} // obf
	} // obf

	// Check array for specified param. // obf
	if ( isset( $v_sfaym[ $v_lqxxu ] ) ) { // obf
		// Set return value. // obf
		$v_hajnq = $v_sfaym[ $v_lqxxu ]; // obf
	} // obf

	// Check for missing required param. // obf
	if ( ! isset( $v_sfaym[ $v_lqxxu ] ) && $v_lbmys ) { // obf
		// Display message and exit. // obf
		echo "\"$v_lqxxu\" parameter is required but was not specified\n"; // obf
		exit; // obf
	} // obf

	return $v_hajnq; // obf
} // obf