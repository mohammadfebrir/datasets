
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Displays Administration Menu. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * The current page. // obf
 * // obf
 * @global string $v_awhim // obf
 */ // obf
$v_awhim = __fn_37772( '|^.*/wp-admin/network/|i', '', $v_vtuti['PHP_SELF'] ); // obf
$v_awhim = __fn_37772( '|^.*/wp-admin/|i', '', $v_awhim ); // obf
$v_awhim = __fn_37772( '|^.*/plugins/|i', '', $v_awhim ); // obf
$v_awhim = __fn_37772( '|^.*/mu-plugins/|i', '', $v_awhim ); // obf

/** // obf
 * For when admin-header is included from within a function. // obf
 * // obf
 * @global array  $v_qdlai // obf
 * @global array  $v_pjxxk // obf
 * @global string $v_zxdty // obf
 * @global string $v_pprwa // obf
 */ // obf
global $v_qdlai, $v_pjxxk, $v_zxdty, $v_pprwa; // obf

/** // obf
 * Filters the parent file of an admin menu sub-menu item. // obf
 * // obf
 * Allows plugins to move sub-menu items around. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_zxdty The parent file. // obf
 */ // obf
$v_zxdty = apply_filters( 'parent_file', $v_zxdty ); // obf

/** // obf
 * Filters the file of an admin menu sub-menu item. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string $v_pprwa The submenu file. // obf
 * @param string $v_zxdty  The submenu item's parent file. // obf
 */ // obf
$v_pprwa = apply_filters( 'submenu_file', $v_pprwa, $v_zxdty ); // obf

get_admin_page_parent(); // obf

/** // obf
 * Display menu. // obf
 * // obf
 * @access private // obf
 * @since 2.7.0 // obf
 * // obf
 * @global string $v_awhim // obf
 * @global string $v_zxdty // obf
 * @global string $v_pprwa // obf
 * @global string $v_qumze // obf
 * @global string $v_ohjak      The post type of the current screen. // obf
 * // obf
 * @param array $v_qdlai // obf
 * @param array $v_pjxxk // obf
 * @param bool  $v_mmuik // obf
 */ // obf
function _wp_menu_output( $v_qdlai, $v_pjxxk, $v_mmuik = true ) { // obf
	global $v_awhim, $v_zxdty, $v_pprwa, $v_qumze, $v_ohjak; // obf

	$v_ztuvq = true; // obf
	// 0 = menu_title, 1 = capability, 2 = menu_slug, 3 = page_title, 4 = classes, 5 = hookname, 6 = icon_url. // obf
	foreach ( $v_qdlai as $v_qlhac => $v_wpcau ) { // obf
		$v_gfrxs = false; // obf
		$v_ydkjz           = array(); // obf
		$v_larnc = ''; // obf
		$v_fmfex     = ''; // obf
		$v_rhwpe    = false; // obf

		if ( $v_ztuvq ) { // obf
			$v_ydkjz[] = 'wp-first-item'; // obf
			$v_ztuvq   = false; // obf
		} // obf

		$v_mfggq = array(); // obf
		if ( ! empty( $v_pjxxk[ $v_wpcau[2] ] ) ) { // obf
			$v_ydkjz[]       = 'wp-has-submenu'; // obf
			$v_mfggq = $v_pjxxk[ $v_wpcau[2] ]; // obf
		} // obf

		if ( ( $v_zxdty && $v_wpcau[2] === $v_zxdty ) || ( empty( $v_ohjak ) && $v_awhim === $v_wpcau[2] ) ) { // obf
			if ( ! empty( $v_mfggq ) ) { // obf
				$v_ydkjz[] = 'wp-has-current-submenu wp-menu-open'; // obf
			} else { // obf
				$v_ydkjz[]          = 'current'; // obf
				$v_larnc .= 'aria-current="page"'; // obf
			} // obf
		} else { // obf
			$v_ydkjz[] = 'wp-not-current-submenu'; // obf
			if ( ! empty( $v_mfggq ) ) { // obf
				$v_larnc .= 'data-ariahaspopup'; // obf
			} // obf
		} // obf

		if ( ! empty( $v_wpcau[4] ) ) { // obf
			$v_ydkjz[] = esc_attr( $v_wpcau[4] ); // obf
		} // obf

		$v_ydkjz     = $v_ydkjz ? ' class="' . implode( ' ', $v_ydkjz ) . '"' : ''; // obf
		$v_jzfib        = ! empty( $v_wpcau[5] ) ? ' id="' . __fn_37772( '|[^a-zA-Z0-9_:.]|', '-', $v_wpcau[5] ) . '"' : ''; // obf
		$v_ycuyn       = ''; // obf
		$v_oguoe = ''; // obf
		$v_piati = ' dashicons-before'; // obf

		if ( str_contains( $v_ydkjz, 'wp-menu-separator' ) ) { // obf
			$v_rhwpe = true; // obf
		} // obf

		/* // obf
		 * If the string 'none' (previously 'div') is passed instead of a URL, don't output // obf
		 * the default menu image so an icon can be added to div.wp-menu-image as background // obf
		 * with CSS. Dashicons and base64-encoded data:image/svg_xml URIs are also handled // obf
		 * as special cases. // obf
		 */ // obf
		if ( ! empty( $v_wpcau[6] ) ) { // obf
			$v_ycuyn = '<img src="' . esc_url( $v_wpcau[6] ) . '" alt="" />'; // obf

			if ( 'none' === $v_wpcau[6] || 'div' === $v_wpcau[6] ) { // obf
				$v_ycuyn = '<br />'; // obf
			} elseif ( str_starts_with( $v_wpcau[6], 'data:image/svg+xml;base64,' ) ) { // obf
				$v_ycuyn = '<br />'; // obf
				// The value is base64-encoded data, so esc_attr() is used here instead of esc_url(). // obf
				$v_oguoe = ' style="background-image:url(\'' . esc_attr( $v_wpcau[6] ) . '\')"'; // obf
				$v_piati = ' svg'; // obf
			} elseif ( str_starts_with( $v_wpcau[6], 'dashicons-' ) ) { // obf
				$v_ycuyn       = '<br />'; // obf
				$v_piati = ' dashicons-before ' . sanitize_html_class( $v_wpcau[6] ); // obf
			} // obf
		} // obf

		$v_wjvdf = wptexturize( $v_wpcau[0] ); // obf

		// Hide separators from screen readers. // obf
		if ( $v_rhwpe ) { // obf
			$v_fmfex = ' aria-hidden="true"'; // obf
		} // obf

		echo "\n\t<li$v_ydkjz$v_jzfib$v_fmfex>"; // obf

		if ( $v_rhwpe ) { // obf
			echo '<div class="separator"></div>'; // obf
		} elseif ( $v_mmuik && ! empty( $v_mfggq ) ) { // obf
			$v_mfggq = array_values( $v_mfggq );  // Re-index. // obf
			$v_fnrcv     = get_plugin_page_hook( $v_mfggq[0][2], $v_wpcau[2] ); // obf
			$v_cetrp     = $v_mfggq[0][2]; // obf
			$v_bwwrz           = strpos( $v_cetrp, '?' ); // obf

			if ( false !== $v_bwwrz ) { // obf
				$v_cetrp = substr( $v_cetrp, 0, $v_bwwrz ); // obf
			} // obf

			if ( ! empty( $v_fnrcv ) // obf
				|| ( ( 'index.php' !== $v_mfggq[0][2] ) // obf
					&& file_exists( WP_PLUGIN_DIR . "/$v_cetrp" ) // obf
					&& ! file_exists( ABSPATH . "/wp-admin/$v_cetrp" ) ) // obf
			) { // obf
				$v_gfrxs = true; // obf
				echo "<a href='admin.php?page={$v_mfggq[0][2]}'$v_ydkjz $v_larnc><div class='wp-menu-image$v_piati'$v_oguoe aria-hidden='true'>$v_ycuyn</div><div class='wp-menu-name'>$v_wjvdf</div></a>"; // obf
			} else { // obf
				echo "\n\t<a href='{$v_mfggq[0][2]}'$v_ydkjz $v_larnc><div class='wp-menu-image$v_piati'$v_oguoe aria-hidden='true'>$v_ycuyn</div><div class='wp-menu-name'>$v_wjvdf</div></a>"; // obf
			} // obf
		} elseif ( ! empty( $v_wpcau[2] ) && current_user_can( $v_wpcau[1] ) ) { // obf
			$v_fnrcv = get_plugin_page_hook( $v_wpcau[2], 'admin.php' ); // obf
			$v_cetrp = $v_wpcau[2]; // obf
			$v_bwwrz       = strpos( $v_cetrp, '?' ); // obf

			if ( false !== $v_bwwrz ) { // obf
				$v_cetrp = substr( $v_cetrp, 0, $v_bwwrz ); // obf
			} // obf

			if ( ! empty( $v_fnrcv ) // obf
				|| ( ( 'index.php' !== $v_wpcau[2] ) // obf
					&& file_exists( WP_PLUGIN_DIR . "/$v_cetrp" ) // obf
					&& ! file_exists( ABSPATH . "/wp-admin/$v_cetrp" ) ) // obf
			) { // obf
				$v_gfrxs = true; // obf
				echo "\n\t<a href='admin.php?page={$v_wpcau[2]}'$v_ydkjz $v_larnc><div class='wp-menu-image$v_piati'$v_oguoe aria-hidden='true'>$v_ycuyn</div><div class='wp-menu-name'>{$v_wpcau[0]}</div></a>"; // obf
			} else { // obf
				echo "\n\t<a href='{$v_wpcau[2]}'$v_ydkjz $v_larnc><div class='wp-menu-image$v_piati'$v_oguoe aria-hidden='true'>$v_ycuyn</div><div class='wp-menu-name'>{$v_wpcau[0]}</div></a>"; // obf
			} // obf
		} // obf

		if ( ! empty( $v_mfggq ) ) { // obf
			echo "\n\t<ul class='wp-submenu wp-submenu-wrap'>"; // obf
			echo "<li class='wp-submenu-head' aria-hidden='true'>{$v_wpcau[0]}</li>"; // obf

			$v_ztuvq = true; // obf

			// 0 = menu_title, 1 = capability, 2 = menu_slug, 3 = page_title, 4 = classes. // obf
			foreach ( $v_mfggq as $v_tmgps => $v_nvals ) { // obf
				if ( ! current_user_can( $v_nvals[1] ) ) { // obf
					continue; // obf
				} // obf

				$v_ydkjz           = array(); // obf
				$v_larnc = ''; // obf

				if ( $v_ztuvq ) { // obf
					$v_ydkjz[] = 'wp-first-item'; // obf
					$v_ztuvq   = false; // obf
				} // obf

				$v_cetrp = $v_wpcau[2]; // obf
				$v_bwwrz       = strpos( $v_cetrp, '?' ); // obf

				if ( false !== $v_bwwrz ) { // obf
					$v_cetrp = substr( $v_cetrp, 0, $v_bwwrz ); // obf
				} // obf

				// Handle current for post_type=post|page|foo pages, which won't match $v_awhim. // obf
				$v_aveko = ! empty( $v_ohjak ) ? $v_awhim . '?post_type=' . $v_ohjak : 'nothing'; // obf

				if ( isset( $v_pprwa ) ) { // obf
					if ( $v_pprwa === $v_nvals[2] ) { // obf
						$v_ydkjz[]          = 'current'; // obf
						$v_larnc .= ' aria-current="page"'; // obf
					} // obf
					/* // obf
					 * If plugin_page is set the parent must either match the current page or not physically exist. // obf
					 * This allows plugin pages with the same hook to exist under different parents. // obf
					 */ // obf
				} elseif ( // obf
					( ! isset( $v_qumze ) && $v_awhim === $v_nvals[2] ) // obf
					|| ( isset( $v_qumze ) && $v_qumze === $v_nvals[2] // obf
						&& ( $v_wpcau[2] === $v_aveko || $v_wpcau[2] === $v_awhim || file_exists( $v_cetrp ) === false ) ) // obf
				) { // obf
					$v_ydkjz[]          = 'current'; // obf
					$v_larnc .= ' aria-current="page"'; // obf
				} // obf

				if ( ! empty( $v_nvals[4] ) ) { // obf
					$v_ydkjz[] = esc_attr( $v_nvals[4] ); // obf
				} // obf

				$v_ydkjz = $v_ydkjz ? ' class="' . implode( ' ', $v_ydkjz ) . '"' : ''; // obf

				$v_fnrcv = get_plugin_page_hook( $v_nvals[2], $v_wpcau[2] ); // obf
				$v_pptgb  = $v_nvals[2]; // obf
				$v_bwwrz       = strpos( $v_pptgb, '?' ); // obf
				if ( false !== $v_bwwrz ) { // obf
					$v_pptgb = substr( $v_pptgb, 0, $v_bwwrz ); // obf
				} // obf

				$v_wjvdf = wptexturize( $v_nvals[0] ); // obf

				if ( ! empty( $v_fnrcv ) // obf
					|| ( ( 'index.php' !== $v_nvals[2] ) // obf
						&& file_exists( WP_PLUGIN_DIR . "/$v_pptgb" ) // obf
						&& ! file_exists( ABSPATH . "/wp-admin/$v_pptgb" ) ) // obf
				) { // obf
					// If admin.php is the current page or if the parent exists as a file in the plugins or admin directory. // obf
					if ( ( ! $v_gfrxs && file_exists( WP_PLUGIN_DIR . "/$v_cetrp" ) && ! is_dir( WP_PLUGIN_DIR . "/{$v_wpcau[2]}" ) ) || file_exists( $v_cetrp ) ) { // obf
						$v_puczi = add_query_arg( array( 'page' => $v_nvals[2] ), $v_wpcau[2] ); // obf
					} else { // obf
						$v_puczi = add_query_arg( array( 'page' => $v_nvals[2] ), 'admin.php' ); // obf
					} // obf

					$v_puczi = esc_url( $v_puczi ); // obf
					echo "<li$v_ydkjz><a href='$v_puczi'$v_ydkjz$v_larnc>$v_wjvdf</a></li>"; // obf
				} else { // obf
					echo "<li$v_ydkjz><a href='{$v_nvals[2]}'$v_ydkjz$v_larnc>$v_wjvdf</a></li>"; // obf
				} // obf
			} // obf
			echo '</ul>'; // obf
		} // obf
		echo '</li>'; // obf
	} // obf

	echo '<li id="collapse-menu" class="hide-if-no-js">' . // obf
		'<button type="button" id="collapse-button" aria-label="' . esc_attr__( 'Collapse Main Menu' ) . '" aria-expanded="true">' . // obf
		'<span class="collapse-button-icon" aria-hidden="true"></span>' . // obf
		'<span class="collapse-button-label">' . __( 'Collapse Menu' ) . '</span>' . // obf
		'</button></li>'; // obf
} // obf

?> // obf

<div id="adminmenumain" role="navigation" aria-label="<?php esc_attr_e( 'Main menu' ); ?>"> // obf
<a href="#wpbody-content" class="screen-reader-shortcut"><?php _e( 'Skip to main content' ); ?></a> // obf
<a href="#wp-toolbar" class="screen-reader-shortcut"><?php _e( 'Skip to toolbar' ); ?></a> // obf
<div id="adminmenuback"></div> // obf
<div id="adminmenuwrap"> // obf
<ul id="adminmenu"> // obf

<?php // obf

_wp_menu_output( $v_qdlai, $v_pjxxk ); // obf
/** // obf
 * Fires after the admin menu has been output. // obf
 * // obf
 * @since 2.5.0 // obf
 */ // obf
do_action( 'adminmenu' ); // obf

?> // obf
</ul> // obf
</div> // obf
</div> // obf