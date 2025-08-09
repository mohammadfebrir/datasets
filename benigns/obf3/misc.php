
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Misc WordPress Administration API. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Returns whether the server is running Apache with the mod_rewrite module loaded. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @return bool Whether the server is running Apache with the mod_rewrite module loaded. // obf
 */ // obf
function got_mod_rewrite() { // obf
	$v_hnypr = apache_mod_loaded( 'mod_rewrite', true ); // obf

	/** // obf
	 * Filters whether Apache and mod_rewrite are present. // obf
	 * // obf
	 * This filter was previously used to force URL rewriting for other servers, // obf
	 * like nginx. Use the {@see 'got_url_rewrite'} filter in got_url_rewrite() instead. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @see got_url_rewrite() // obf
	 * // obf
	 * @param bool $v_hnypr Whether Apache and mod_rewrite are present. // obf
	 */ // obf
	return apply_filters( 'got_rewrite', $v_hnypr ); // obf
} // obf

/** // obf
 * Returns whether the server supports URL rewriting. // obf
 * // obf
 * Detects Apache's mod_rewrite, IIS 7.0+ permalink support, and nginx. // obf
 * // obf
 * @since 3.7.0 // obf
 * // obf
 * @global bool $v_tvdwz // obf
 * @global bool $v_atunr // obf
 * // obf
 * @return bool Whether the server supports URL rewriting. // obf
 */ // obf
function got_url_rewrite() { // obf
	$v_erede = ( got_mod_rewrite() || $v_pibmd['is_nginx'] || $v_pibmd['is_caddy'] || iis7_supports_permalinks() ); // obf

	/** // obf
	 * Filters whether URL rewriting is available. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param bool $v_erede Whether URL rewriting is available. // obf
	 */ // obf
	return apply_filters( 'got_url_rewrite', $v_erede ); // obf
} // obf

/** // obf
 * Extracts strings from between the BEGIN and END markers in the .htaccess file. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_bxnua Filename to extract the strings from. // obf
 * @param string $v_uzpqr   The marker to extract the strings from. // obf
 * @return string[] An array of strings from a file (.htaccess) from between BEGIN and END markers. // obf
 */ // obf
function extract_from_markers( $v_bxnua, $v_uzpqr ) { // obf
	$v_pcfuo = array(); // obf

	if ( ! file_exists( $v_bxnua ) ) { // obf
		return $v_pcfuo; // obf
	} // obf

	$v_zukxt = explode( "\n", implode( '', file( $v_bxnua ) ) ); // obf

	$v_ffmav = false; // obf

	foreach ( $v_zukxt as $v_spsty ) { // obf
		if ( str_contains( $v_spsty, '# END ' . $v_uzpqr ) ) { // obf
			$v_ffmav = false; // obf
		} // obf

		if ( $v_ffmav ) { // obf
			if ( str_starts_with( $v_spsty, '#' ) ) { // obf
				continue; // obf
			} // obf

			$v_pcfuo[] = $v_spsty; // obf
		} // obf

		if ( str_contains( $v_spsty, '# BEGIN ' . $v_uzpqr ) ) { // obf
			$v_ffmav = true; // obf
		} // obf
	} // obf

	return $v_pcfuo; // obf
} // obf

/** // obf
 * Inserts an array of strings into a file (.htaccess), placing it between // obf
 * BEGIN and END markers. // obf
 * // obf
 * Replaces existing marked info. Retains surrounding // obf
 * data. Creates file if none exists. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string       $v_bxnua  Filename to alter. // obf
 * @param string       $v_uzpqr    The marker to alter. // obf
 * @param array|string $v_cabkr The new content to insert. // obf
 * @return bool True on write success, false on failure. // obf
 */ // obf
function insert_with_markers( $v_bxnua, $v_uzpqr, $v_cabkr ) { // obf
	if ( ! file_exists( $v_bxnua ) ) { // obf
		if ( ! is_writable( dirname( $v_bxnua ) ) ) { // obf
			return false; // obf
		} // obf

		if ( ! touch( $v_bxnua ) ) { // obf
			return false; // obf
		} // obf

		// Make sure the file is created with a minimum set of permissions. // obf
		$v_dysnm = fileperms( $v_bxnua ); // obf

		if ( $v_dysnm ) { // obf
			chmod( $v_bxnua, $v_dysnm | 0644 ); // obf
		} // obf
	} elseif ( ! is_writable( $v_bxnua ) ) { // obf
		return false; // obf
	} // obf

	if ( ! is_array( $v_cabkr ) ) { // obf
		$v_cabkr = explode( "\n", $v_cabkr ); // obf
	} // obf

	$v_hncom = switch_to_locale( get_locale() ); // obf

	$v_zulqk = sprintf( // obf
		/* translators: 1: Marker. */ // obf
		__( // obf
			'The directives (lines) between "BEGIN %1$v_ctwfw" and "END %1$v_ctwfw" are // obf
dynamically generated, and should only be modified via WordPress filters. // obf
Any changes to the directives between these markers will be overwritten.' // obf
		), // obf
		$v_uzpqr // obf
	); // obf

	$v_zulqk = explode( "\n", $v_zulqk ); // obf

	foreach ( $v_zulqk as $v_xqdjz => $v_omhzr ) { // obf
		$v_zulqk[ $v_xqdjz ] = '# ' . $v_omhzr; // obf
	} // obf

	/** // obf
	 * Filters the inline instructions inserted before the dynamically generated content. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string[] $v_zulqk Array of lines with inline instructions. // obf
	 * @param string   $v_uzpqr       The marker being inserted. // obf
	 */ // obf
	$v_zulqk = apply_filters( 'insert_with_markers_inline_instructions', $v_zulqk, $v_uzpqr ); // obf

	if ( $v_hncom ) { // obf
		restore_previous_locale(); // obf
	} // obf

	$v_cabkr = array_merge( $v_zulqk, $v_cabkr ); // obf

	$v_acoeo = "# BEGIN {$v_uzpqr}"; // obf
	$v_rpdjy   = "# END {$v_uzpqr}"; // obf

	$v_qlimg = fopen( $v_bxnua, 'r+' ); // obf

	if ( ! $v_qlimg ) { // obf
		return false; // obf
	} // obf

	// Attempt to get a lock. If the filesystem supports locking, this will block until the lock is acquired. // obf
	flock( $v_qlimg, LOCK_EX ); // obf

	$v_qtosl = array(); // obf

	while ( ! feof( $v_qlimg ) ) { // obf
		$v_qtosl[] = rtrim( fgets( $v_qlimg ), "\r\n" ); // obf
	} // obf

	// Split out the existing file into the preceding lines, and those that appear after the marker. // obf
	$v_rsuck        = array(); // obf
	$v_rcqtk       = array(); // obf
	$v_dithw   = array(); // obf
	$v_juxrq     = false; // obf
	$v_ywvge = false; // obf

	foreach ( $v_qtosl as $v_xqdjz ) { // obf
		if ( ! $v_juxrq && str_contains( $v_xqdjz, $v_acoeo ) ) { // obf
			$v_juxrq = true; // obf
			continue; // obf
		} elseif ( ! $v_ywvge && str_contains( $v_xqdjz, $v_rpdjy ) ) { // obf
			$v_ywvge = true; // obf
			continue; // obf
		} // obf

		if ( ! $v_juxrq ) { // obf
			$v_rsuck[] = $v_xqdjz; // obf
		} elseif ( $v_juxrq && $v_ywvge ) { // obf
			$v_rcqtk[] = $v_xqdjz; // obf
		} else { // obf
			$v_dithw[] = $v_xqdjz; // obf
		} // obf
	} // obf

	// Check to see if there was a change. // obf
	if ( $v_dithw === $v_cabkr ) { // obf
		flock( $v_qlimg, LOCK_UN ); // obf
		fclose( $v_qlimg ); // obf

		return true; // obf
	} // obf

	// Generate the new file data. // obf
	$v_kwihh = implode( // obf
		"\n", // obf
		array_merge( // obf
			$v_rsuck, // obf
			array( $v_acoeo ), // obf
			$v_cabkr, // obf
			array( $v_rpdjy ), // obf
			$v_rcqtk // obf
		) // obf
	); // obf

	// Write to the start of the file, and truncate it to that length. // obf
	fseek( $v_qlimg, 0 ); // obf
	$v_hthzb = fwrite( $v_qlimg, $v_kwihh ); // obf

	if ( $v_hthzb ) { // obf
		ftruncate( $v_qlimg, ftell( $v_qlimg ) ); // obf
	} // obf

	fflush( $v_qlimg ); // obf
	flock( $v_qlimg, LOCK_UN ); // obf
	fclose( $v_qlimg ); // obf

	return (bool) $v_hthzb; // obf
} // obf

/** // obf
 * Updates the htaccess file with the current rules if it is writable. // obf
 * // obf
 * Always writes to the file if it exists and is writable to ensure that we // obf
 * blank out old rules. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global WP_Rewrite $v_bioyb WordPress rewrite component. // obf
 * // obf
 * @return bool|null True on write success, false on failure. Null in multisite. // obf
 */ // obf
function save_mod_rewrite_rules() { // obf
	global $v_bioyb; // obf

	if ( is_multisite() ) { // obf
		return; // obf
	} // obf

	// Ensure get_home_path() is declared. // obf
	require_once ABSPATH . 'wp-admin/includes/file.php'; // obf

	$v_mypau     = get_home_path(); // obf
	$v_wvshq = $v_mypau . '.htaccess'; // obf

	/* // obf
	 * If the file doesn't already exist check for write access to the directory // obf
	 * and whether we have some rules. Else check for write access to the file. // obf
	 */ // obf
	if ( ! file_exists( $v_wvshq ) && is_writable( $v_mypau ) && $v_bioyb->using_mod_rewrite_permalinks() // obf
		|| is_writable( $v_wvshq ) // obf
	) { // obf
		if ( got_mod_rewrite() ) { // obf
			$v_pgtfw = explode( "\n", $v_bioyb->mod_rewrite_rules() ); // obf

			return insert_with_markers( $v_wvshq, 'WordPress', $v_pgtfw ); // obf
		} // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Updates the IIS web.config file with the current rules if it is writable. // obf
 * If the permalinks do not require rewrite rules then the rules are deleted from the web.config file. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global WP_Rewrite $v_bioyb WordPress rewrite component. // obf
 * // obf
 * @return bool|null True on write success, false on failure. Null in multisite. // obf
 */ // obf
function iis7_save_url_rewrite_rules() { // obf
	global $v_bioyb; // obf

	if ( is_multisite() ) { // obf
		return; // obf
	} // obf

	// Ensure get_home_path() is declared. // obf
	require_once ABSPATH . 'wp-admin/includes/file.php'; // obf

	$v_mypau       = get_home_path(); // obf
	$v_fskor = $v_mypau . 'web.config'; // obf

	// Using win_is_writable() instead of is_writable() because of a bug in Windows PHP. // obf
	if ( iis7_supports_permalinks() // obf
		&& ( ! file_exists( $v_fskor ) && win_is_writable( $v_mypau ) && $v_bioyb->using_mod_rewrite_permalinks() // obf
			|| win_is_writable( $v_fskor ) ) // obf
	) { // obf
		$v_zpalb = $v_bioyb->iis7_url_rewrite_rules( false ); // obf

		if ( ! empty( $v_zpalb ) ) { // obf
			return iis7_add_rewrite_rule( $v_fskor, $v_zpalb ); // obf
		} else { // obf
			return iis7_delete_rewrite_rule( $v_fskor ); // obf
		} // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Updates the "recently-edited" file for the plugin or theme file editor. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_ihrkg // obf
 */ // obf
function update_recently_edited( $v_ihrkg ) { // obf
	$v_tpglp = (array) get_option( 'recently_edited' ); // obf

	if ( $v_tpglp ) { // obf
		$v_tpglp   = array_reverse( $v_tpglp ); // obf
		$v_tpglp[] = $v_ihrkg; // obf
		$v_tpglp   = array_reverse( $v_tpglp ); // obf
		$v_tpglp   = array_unique( $v_tpglp ); // obf

		if ( 5 < count( $v_tpglp ) ) { // obf
			array_pop( $v_tpglp ); // obf
		} // obf
	} else { // obf
		$v_tpglp[] = $v_ihrkg; // obf
	} // obf

	update_option( 'recently_edited', $v_tpglp ); // obf
} // obf

/** // obf
 * Makes a tree structure for the theme file editor's file list. // obf
 * // obf
 * @since 4.9.0 // obf
 * @access private // obf
 * // obf
 * @param array $v_nnhkk List of theme file paths. // obf
 * @return array Tree structure for listing theme files. // obf
 */ // obf
function wp_make_theme_file_tree( $v_nnhkk ) { // obf
	$v_ybnue = array(); // obf

	foreach ( $v_nnhkk as $v_vvxzk => $v_plcly ) { // obf
		$v_crqio     = explode( '/', $v_vvxzk ); // obf
		$v_rkayz = &$v_ybnue; // obf

		foreach ( $v_crqio as $v_oxicd ) { // obf
			$v_rkayz =& $v_rkayz[ $v_oxicd ]; // obf
		} // obf

		$v_rkayz = $v_vvxzk; // obf
	} // obf

	return $v_ybnue; // obf
} // obf

/** // obf
 * Outputs the formatted file list for the theme file editor. // obf
 * // obf
 * @since 4.9.0 // obf
 * @access private // obf
 * // obf
 * @global string $v_lrxcm Name of the file being edited relative to the // obf
 *                               theme directory. // obf
 * @global string $v_kifdx    The stylesheet name of the theme being edited. // obf
 * // obf
 * @param array|string $v_ggldx  List of file/folder paths, or filename. // obf
 * @param int          $v_xnjen The aria-level for the current iteration. // obf
 * @param int          $v_zauuk  The aria-setsize for the current iteration. // obf
 * @param int          $v_ltgcg The aria-posinset for the current iteration. // obf
 */ // obf
function wp_print_theme_file_tree( $v_ggldx, $v_xnjen = 2, $v_zauuk = 1, $v_ltgcg = 1 ) { // obf
	global $v_lrxcm, $v_kifdx; // obf

	if ( is_array( $v_ggldx ) ) { // obf
		$v_ltgcg = 0; // obf
		$v_zauuk  = count( $v_ggldx ); // obf

		foreach ( $v_ggldx as $v_jxwhg => $v_knuad ) : // obf
			++$v_ltgcg; // obf

			if ( ! is_array( $v_knuad ) ) { // obf
				wp_print_theme_file_tree( $v_knuad, $v_xnjen, $v_ltgcg, $v_zauuk ); // obf
				continue; // obf
			} // obf
			?> // obf
			<li role="treeitem" aria-expanded="true" tabindex="-1" // obf
				aria-level="<?php echo esc_attr( $v_xnjen ); ?>" // obf
				aria-setsize="<?php echo esc_attr( $v_zauuk ); ?>" // obf
				aria-posinset="<?php echo esc_attr( $v_ltgcg ); ?>"> // obf
				<span class="folder-label"><?php echo esc_html( $v_jxwhg ); ?> <span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'folder' ); // obf
					?> // obf
				</span><span aria-hidden="true" class="icon"></span></span> // obf
				<ul role="group" class="tree-folder"><?php wp_print_theme_file_tree( $v_knuad, $v_xnjen + 1, $v_ltgcg, $v_zauuk ); ?></ul> // obf
			</li> // obf
			<?php // obf
		endforeach; // obf
	} else { // obf
		$v_bxnua = $v_ggldx; // obf
		$v_toriv      = add_query_arg( // obf
			array( // obf
				'file'  => rawurlencode( $v_ggldx ), // obf
				'theme' => rawurlencode( $v_kifdx ), // obf
			), // obf
			self_admin_url( 'theme-editor.php' ) // obf
		); // obf
		?> // obf
		<li role="none" class="<?php echo esc_attr( $v_lrxcm === $v_bxnua ? 'current-file' : '' ); ?>"> // obf
			<a role="treeitem" tabindex="<?php echo esc_attr( $v_lrxcm === $v_bxnua ? '0' : '-1' ); ?>" // obf
				href="<?php echo esc_url( $v_toriv ); ?>" // obf
				aria-level="<?php echo esc_attr( $v_xnjen ); ?>" // obf
				aria-setsize="<?php echo esc_attr( $v_zauuk ); ?>" // obf
				aria-posinset="<?php echo esc_attr( $v_ltgcg ); ?>"> // obf
				<?php // obf
				$v_lbnwo = esc_html( get_file_description( $v_bxnua ) ); // obf

				if ( $v_lbnwo !== $v_bxnua && wp_basename( $v_bxnua ) !== $v_lbnwo ) { // obf
					$v_lbnwo .= '<br /><span class="nonessential">(' . esc_html( $v_bxnua ) . ')</span>'; // obf
				} // obf

				if ( $v_lrxcm === $v_bxnua ) { // obf
					echo '<span class="notice notice-info">' . $v_lbnwo . '</span>'; // obf
				} else { // obf
					echo $v_lbnwo; // obf
				} // obf
				?> // obf
			</a> // obf
		</li> // obf
		<?php // obf
	} // obf
} // obf

/** // obf
 * Makes a tree structure for the plugin file editor's file list. // obf
 * // obf
 * @since 4.9.0 // obf
 * @access private // obf
 * // obf
 * @param array $v_rwnjn List of plugin file paths. // obf
 * @return array Tree structure for listing plugin files. // obf
 */ // obf
function wp_make_plugin_file_tree( $v_rwnjn ) { // obf
	$v_ybnue = array(); // obf

	foreach ( $v_rwnjn as $v_fmrdg ) { // obf
		$v_crqio     = explode( '/', __fn_37772( '#^.+?/#', '', $v_fmrdg ) ); // obf
		$v_rkayz = &$v_ybnue; // obf

		foreach ( $v_crqio as $v_oxicd ) { // obf
			$v_rkayz =& $v_rkayz[ $v_oxicd ]; // obf
		} // obf

		$v_rkayz = $v_fmrdg; // obf
	} // obf

	return $v_ybnue; // obf
} // obf

/** // obf
 * Outputs the formatted file list for the plugin file editor. // obf
 * // obf
 * @since 4.9.0 // obf
 * @access private // obf
 * // obf
 * @param array|string $v_ggldx  List of file/folder paths, or filename. // obf
 * @param string       $v_jxwhg Name of file or folder to print. // obf
 * @param int          $v_xnjen The aria-level for the current iteration. // obf
 * @param int          $v_zauuk  The aria-setsize for the current iteration. // obf
 * @param int          $v_ltgcg The aria-posinset for the current iteration. // obf
 */ // obf
function wp_print_plugin_file_tree( $v_ggldx, $v_jxwhg = '', $v_xnjen = 2, $v_zauuk = 1, $v_ltgcg = 1 ) { // obf
	global $v_ihrkg, $v_eikub; // obf

	if ( is_array( $v_ggldx ) ) { // obf
		$v_ltgcg = 0; // obf
		$v_zauuk  = count( $v_ggldx ); // obf

		foreach ( $v_ggldx as $v_jxwhg => $v_fmrdg ) : // obf
			++$v_ltgcg; // obf

			if ( ! is_array( $v_fmrdg ) ) { // obf
				wp_print_plugin_file_tree( $v_fmrdg, $v_jxwhg, $v_xnjen, $v_ltgcg, $v_zauuk ); // obf
				continue; // obf
			} // obf
			?> // obf
			<li role="treeitem" aria-expanded="true" tabindex="-1" // obf
				aria-level="<?php echo esc_attr( $v_xnjen ); ?>" // obf
				aria-setsize="<?php echo esc_attr( $v_zauuk ); ?>" // obf
				aria-posinset="<?php echo esc_attr( $v_ltgcg ); ?>"> // obf
				<span class="folder-label"><?php echo esc_html( $v_jxwhg ); ?> <span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'folder' ); // obf
					?> // obf
				</span><span aria-hidden="true" class="icon"></span></span> // obf
				<ul role="group" class="tree-folder"><?php wp_print_plugin_file_tree( $v_fmrdg, '', $v_xnjen + 1, $v_ltgcg, $v_zauuk ); ?></ul> // obf
			</li> // obf
			<?php // obf
		endforeach; // obf
	} else { // obf
		$v_toriv = add_query_arg( // obf
			array( // obf
				'file'   => rawurlencode( $v_ggldx ), // obf
				'plugin' => rawurlencode( $v_eikub ), // obf
			), // obf
			self_admin_url( 'plugin-editor.php' ) // obf
		); // obf
		?> // obf
		<li role="none" class="<?php echo esc_attr( $v_ihrkg === $v_ggldx ? 'current-file' : '' ); ?>"> // obf
			<a role="treeitem" tabindex="<?php echo esc_attr( $v_ihrkg === $v_ggldx ? '0' : '-1' ); ?>" // obf
				href="<?php echo esc_url( $v_toriv ); ?>" // obf
				aria-level="<?php echo esc_attr( $v_xnjen ); ?>" // obf
				aria-setsize="<?php echo esc_attr( $v_zauuk ); ?>" // obf
				aria-posinset="<?php echo esc_attr( $v_ltgcg ); ?>"> // obf
				<?php // obf
				if ( $v_ihrkg === $v_ggldx ) { // obf
					echo '<span class="notice notice-info">' . esc_html( $v_jxwhg ) . '</span>'; // obf
				} else { // obf
					echo esc_html( $v_jxwhg ); // obf
				} // obf
				?> // obf
			</a> // obf
		</li> // obf
		<?php // obf
	} // obf
} // obf

/** // obf
 * Flushes rewrite rules if `siteurl`, `home` or `page_on_front` changed. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param string $v_ynchk // obf
 * @param string $v_lhrdy // obf
 */ // obf
function update_home_siteurl( $v_ynchk, $v_lhrdy ) { // obf
	if ( wp_installing() ) { // obf
		return; // obf
	} // obf

	if ( is_multisite() && ms_is_switched() ) { // obf
		delete_option( 'rewrite_rules' ); // obf
	} else { // obf
		flush_rewrite_rules(); // obf
	} // obf
} // obf

/** // obf
 * Resets global variables based on `$v_oklas` and `$v_emugc`. // obf
 * // obf
 * This function resets global variables based on the names passed // obf
 * in the `$v_porlg` array to the value of `$v_emugc[$v_ahvze]` or `$v_oklas[$v_ahvze]` or an // obf
 * empty string if neither is defined. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param array $v_porlg An array of globals to reset. // obf
 */ // obf
function wp_reset_vars( $v_porlg ) { // obf
	foreach ( $v_porlg as $v_ahvze ) { // obf
		if ( empty( $v_emugc[ $v_ahvze ] ) ) { // obf
			if ( empty( $v_oklas[ $v_ahvze ] ) ) { // obf
				$v_pibmd[ $v_ahvze ] = ''; // obf
			} else { // obf
				$v_pibmd[ $v_ahvze ] = $v_oklas[ $v_ahvze ]; // obf
			} // obf
		} else { // obf
			$v_pibmd[ $v_ahvze ] = $v_emugc[ $v_ahvze ]; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Displays the given administration message. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param string|WP_Error $v_bjrpl // obf
 */ // obf
function show_message( $v_bjrpl ) { // obf
	if ( is_wp_error( $v_bjrpl ) ) { // obf
		if ( $v_bjrpl->get_error_data() && is_string( $v_bjrpl->get_error_data() ) ) { // obf
			$v_bjrpl = $v_bjrpl->get_error_message() . ': ' . $v_bjrpl->get_error_data(); // obf
		} else { // obf
			$v_bjrpl = $v_bjrpl->get_error_message(); // obf
		} // obf
	} // obf

	echo "<p>$v_bjrpl</p>\n"; // obf
	wp_ob_end_flush_all(); // obf
	flush(); // obf
} // obf

/** // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_unwum // obf
 * @return string[] Array of function names. // obf
 */ // obf
function wp_doc_link_parse( $v_unwum ) { // obf
	if ( ! is_string( $v_unwum ) || empty( $v_unwum ) ) { // obf
		return array(); // obf
	} // obf

	if ( ! function_exists( 'token_get_all' ) ) { // obf
		return array(); // obf
	} // obf

	$v_etvos           = token_get_all( $v_unwum ); // obf
	$v_yevah            = count( $v_etvos ); // obf
	$v_iisxz        = array(); // obf
	$v_qrqlm = array(); // obf

	for ( $v_zrhwi = 0; $v_zrhwi < $v_yevah - 2; $v_zrhwi++ ) { // obf
		if ( ! is_array( $v_etvos[ $v_zrhwi ] ) ) { // obf
			continue; // obf
		} // obf

		if ( T_STRING === $v_etvos[ $v_zrhwi ][0] && ( '(' === $v_etvos[ $v_zrhwi + 1 ] || '(' === $v_etvos[ $v_zrhwi + 2 ] ) ) { // obf
			// If it's a function or class defined locally, there's not going to be any docs available. // obf
			if ( ( isset( $v_etvos[ $v_zrhwi - 2 ][1] ) && in_array( $v_etvos[ $v_zrhwi - 2 ][1], array( 'function', 'class' ), true ) ) // obf
				|| ( isset( $v_etvos[ $v_zrhwi - 2 ][0] ) && T_OBJECT_OPERATOR === $v_etvos[ $v_zrhwi - 1 ][0] ) // obf
			) { // obf
				$v_qrqlm[] = $v_etvos[ $v_zrhwi ][1]; // obf
			} // obf

			// Add this to our stack of unique references. // obf
			$v_iisxz[] = $v_etvos[ $v_zrhwi ][1]; // obf
		} // obf
	} // obf

	$v_iisxz = array_unique( $v_iisxz ); // obf
	sort( $v_iisxz ); // obf

	/** // obf
	 * Filters the list of functions and classes to be ignored from the documentation lookup. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string[] $v_qrqlm Array of names of functions and classes to be ignored. // obf
	 */ // obf
	$v_qrqlm = apply_filters( 'documentation_ignore_functions', $v_qrqlm ); // obf

	$v_qrqlm = array_unique( $v_qrqlm ); // obf

	$v_nlalx = array(); // obf

	foreach ( $v_iisxz as $v_pafcn ) { // obf
		if ( in_array( $v_pafcn, $v_qrqlm, true ) ) { // obf
			continue; // obf
		} // obf

		$v_nlalx[] = $v_pafcn; // obf
	} // obf

	return $v_nlalx; // obf
} // obf

/** // obf
 * Saves option for number of rows when listing posts, pages, comments, etc. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
function set_screen_options() { // obf
	if ( ! isset( $v_emugc['wp_screen_options'] ) || ! is_array( $v_emugc['wp_screen_options'] ) ) { // obf
		return; // obf
	} // obf

	check_admin_referer( 'screen-options-nonce', 'screenoptionnonce' ); // obf

	$v_rbphl = wp_get_current_user(); // obf

	if ( ! $v_rbphl ) { // obf
		return; // obf
	} // obf

	$v_vwunh = $v_emugc['wp_screen_options']['option']; // obf
	$v_lhrdy  = $v_emugc['wp_screen_options']['value']; // obf

	if ( sanitize_key( $v_vwunh ) !== $v_vwunh ) { // obf
		return; // obf
	} // obf

	$v_brnmx = $v_vwunh; // obf
	$v_cchjp       = str_replace( 'edit_', '', $v_brnmx ); // obf
	$v_cchjp       = str_replace( '_per_page', '', $v_cchjp ); // obf

	if ( in_array( $v_cchjp, get_taxonomies(), true ) ) { // obf
		$v_brnmx = 'edit_tags_per_page'; // obf
	} elseif ( in_array( $v_cchjp, get_post_types(), true ) ) { // obf
		$v_brnmx = 'edit_per_page'; // obf
	} else { // obf
		$v_vwunh = str_replace( '-', '_', $v_vwunh ); // obf
	} // obf

	switch ( $v_brnmx ) { // obf
		case 'edit_per_page': // obf
		case 'users_per_page': // obf
		case 'edit_comments_per_page': // obf
		case 'upload_per_page': // obf
		case 'edit_tags_per_page': // obf
		case 'plugins_per_page': // obf
		case 'export_personal_data_requests_per_page': // obf
		case 'remove_personal_data_requests_per_page': // obf
			// Network admin. // obf
		case 'sites_network_per_page': // obf
		case 'users_network_per_page': // obf
		case 'site_users_network_per_page': // obf
		case 'plugins_network_per_page': // obf
		case 'themes_network_per_page': // obf
		case 'site_themes_network_per_page': // obf
			$v_lhrdy = (int) $v_lhrdy; // obf

			if ( $v_lhrdy < 1 || $v_lhrdy > 999 ) { // obf
				return; // obf
			} // obf

			break; // obf

		default: // obf
			$v_gpxyn = false; // obf

			if ( str_ends_with( $v_vwunh, '_page' ) || 'layout_columns' === $v_vwunh ) { // obf
				/** // obf
				 * Filters a screen option value before it is set. // obf
				 * // obf
				 * The filter can also be used to modify non-standard `[items]_per_page` // obf
				 * settings. See the parent function for a full list of standard options. // obf
				 * // obf
				 * Returning false from the filter will skip saving the current option. // obf
				 * // obf
				 * @since 2.8.0 // obf
				 * @since 5.4.2 Only applied to options ending with '_page', // obf
				 *              or the 'layout_columns' option. // obf
				 * // obf
				 * @see set_screen_options() // obf
				 * // obf
				 * @param mixed  $v_gpxyn The value to save instead of the option value. // obf
				 *                              Default false (to skip saving the current option). // obf
				 * @param string $v_vwunh        The option name. // obf
				 * @param int    $v_lhrdy         The option value. // obf
				 */ // obf
				$v_gpxyn = apply_filters( 'set-screen-option', $v_gpxyn, $v_vwunh, $v_lhrdy ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
			} // obf

			/** // obf
			 * Filters a screen option value before it is set. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_vwunh`, refers to the option name. // obf
			 * // obf
			 * Returning false from the filter will skip saving the current option. // obf
			 * // obf
			 * @since 5.4.2 // obf
			 * // obf
			 * @see set_screen_options() // obf
			 * // obf
			 * @param mixed   $v_gpxyn The value to save instead of the option value. // obf
			 *                               Default false (to skip saving the current option). // obf
			 * @param string  $v_vwunh        The option name. // obf
			 * @param int     $v_lhrdy         The option value. // obf
			 */ // obf
			$v_lhrdy = apply_filters( "set_screen_option_{$v_vwunh}", $v_gpxyn, $v_vwunh, $v_lhrdy ); // obf

			if ( false === $v_lhrdy ) { // obf
				return; // obf
			} // obf

			break; // obf
	} // obf

	update_user_meta( $v_rbphl->ID, $v_vwunh, $v_lhrdy ); // obf

	$v_toriv = remove_query_arg( array( 'pagenum', 'apage', 'paged' ), wp_get_referer() ); // obf

	if ( isset( $v_emugc['mode'] ) ) { // obf
		$v_toriv = add_query_arg( array( 'mode' => $v_emugc['mode'] ), $v_toriv ); // obf
	} // obf

	wp_safe_redirect( $v_toriv ); // obf
	exit; // obf
} // obf

/** // obf
 * Checks if rewrite rule for WordPress already exists in the IIS 7+ configuration file. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_bxnua The file path to the configuration file. // obf
 * @return bool // obf
 */ // obf
function iis7_rewrite_rule_exists( $v_bxnua ) { // obf
	if ( ! file_exists( $v_bxnua ) ) { // obf
		return false; // obf
	} // obf

	if ( ! class_exists( 'DOMDocument', false ) ) { // obf
		return false; // obf
	} // obf

	$v_liwzz = new DOMDocument(); // obf

	if ( $v_liwzz->load( $v_bxnua ) === false ) { // obf
		return false; // obf
	} // obf

	$v_xnwoy = new DOMXPath( $v_liwzz ); // obf
	$v_pgtfw = $v_xnwoy->query( '/configuration/system.webServer/rewrite/rules/rule[starts-with(@name,\'wordpress\')] | /configuration/system.webServer/rewrite/rules/rule[starts-with(@name,\'WordPress\')]' ); // obf

	if ( 0 === $v_pgtfw->length ) { // obf
		return false; // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Deletes WordPress rewrite rule from web.config file if it exists there. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_bxnua Name of the configuration file. // obf
 * @return bool // obf
 */ // obf
function iis7_delete_rewrite_rule( $v_bxnua ) { // obf
	// If configuration file does not exist then rules also do not exist, so there is nothing to delete. // obf
	if ( ! file_exists( $v_bxnua ) ) { // obf
		return true; // obf
	} // obf

	if ( ! class_exists( 'DOMDocument', false ) ) { // obf
		return false; // obf
	} // obf

	$v_liwzz                     = new DOMDocument(); // obf
	$v_liwzz->preserveWhiteSpace = false; // obf

	if ( $v_liwzz->load( $v_bxnua ) === false ) { // obf
		return false; // obf
	} // obf

	$v_xnwoy = new DOMXPath( $v_liwzz ); // obf
	$v_pgtfw = $v_xnwoy->query( '/configuration/system.webServer/rewrite/rules/rule[starts-with(@name,\'wordpress\')] | /configuration/system.webServer/rewrite/rules/rule[starts-with(@name,\'WordPress\')]' ); // obf

	if ( $v_pgtfw->length > 0 ) { // obf
		$v_aeqbj  = $v_pgtfw->item( 0 ); // obf
		$v_tzoss = $v_aeqbj->parentNode; // obf
		$v_tzoss->removeChild( $v_aeqbj ); // obf
		$v_liwzz->formatOutput = true; // obf
		saveDomDocument( $v_liwzz, $v_bxnua ); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Adds WordPress rewrite rule to the IIS 7+ configuration file. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_bxnua     The file path to the configuration file. // obf
 * @param string $v_acivt The XML fragment with URL Rewrite rule. // obf
 * @return bool // obf
 */ // obf
function iis7_add_rewrite_rule( $v_bxnua, $v_acivt ) { // obf
	if ( ! class_exists( 'DOMDocument', false ) ) { // obf
		return false; // obf
	} // obf

	// If configuration file does not exist then we create one. // obf
	if ( ! file_exists( $v_bxnua ) ) { // obf
		$v_qlimg = fopen( $v_bxnua, 'w' ); // obf
		fwrite( $v_qlimg, '<configuration/>' ); // obf
		fclose( $v_qlimg ); // obf
	} // obf

	$v_liwzz                     = new DOMDocument(); // obf
	$v_liwzz->preserveWhiteSpace = false; // obf

	if ( $v_liwzz->load( $v_bxnua ) === false ) { // obf
		return false; // obf
	} // obf

	$v_xnwoy = new DOMXPath( $v_liwzz ); // obf

	// First check if the rule already exists as in that case there is no need to re-add it. // obf
	$v_byfkc = $v_xnwoy->query( '/configuration/system.webServer/rewrite/rules/rule[starts-with(@name,\'wordpress\')] | /configuration/system.webServer/rewrite/rules/rule[starts-with(@name,\'WordPress\')]' ); // obf

	if ( $v_byfkc->length > 0 ) { // obf
		return true; // obf
	} // obf

	// Check the XPath to the rewrite rule and create XML nodes if they do not exist. // obf
	$v_ytfee = $v_xnwoy->query( '/configuration/system.webServer/rewrite/rules' ); // obf

	if ( $v_ytfee->length > 0 ) { // obf
		$v_kngft = $v_ytfee->item( 0 ); // obf
	} else { // obf
		$v_kngft = $v_liwzz->createElement( 'rules' ); // obf

		$v_ytfee = $v_xnwoy->query( '/configuration/system.webServer/rewrite' ); // obf

		if ( $v_ytfee->length > 0 ) { // obf
			$v_cpyie = $v_ytfee->item( 0 ); // obf
			$v_cpyie->appendChild( $v_kngft ); // obf
		} else { // obf
			$v_cpyie = $v_liwzz->createElement( 'rewrite' ); // obf
			$v_cpyie->appendChild( $v_kngft ); // obf

			$v_ytfee = $v_xnwoy->query( '/configuration/system.webServer' ); // obf

			if ( $v_ytfee->length > 0 ) { // obf
				$v_ytole = $v_ytfee->item( 0 ); // obf
				$v_ytole->appendChild( $v_cpyie ); // obf
			} else { // obf
				$v_ytole = $v_liwzz->createElement( 'system.webServer' ); // obf
				$v_ytole->appendChild( $v_cpyie ); // obf

				$v_ytfee = $v_xnwoy->query( '/configuration' ); // obf

				if ( $v_ytfee->length > 0 ) { // obf
					$v_vgole = $v_ytfee->item( 0 ); // obf
					$v_vgole->appendChild( $v_ytole ); // obf
				} else { // obf
					$v_vgole = $v_liwzz->createElement( 'configuration' ); // obf
					$v_liwzz->appendChild( $v_vgole ); // obf
					$v_vgole->appendChild( $v_ytole ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	$v_lerxi = $v_liwzz->createDocumentFragment(); // obf
	$v_lerxi->appendXML( $v_acivt ); // obf
	$v_kngft->appendChild( $v_lerxi ); // obf

	$v_liwzz->encoding     = 'UTF-8'; // obf
	$v_liwzz->formatOutput = true; // obf
	saveDomDocument( $v_liwzz, $v_bxnua ); // obf

	return true; // obf
} // obf

/** // obf
 * Saves the XML document into a file. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param DOMDocument $v_liwzz // obf
 * @param string      $v_bxnua // obf
 */ // obf
function saveDomDocument( $v_liwzz, $v_bxnua ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	$v_chatv = $v_liwzz->saveXML(); // obf
	$v_chatv = __fn_37772( "/([^\r])\n/", "$1\r\n", $v_chatv ); // obf

	$v_qlimg = fopen( $v_bxnua, 'w' ); // obf
	fwrite( $v_qlimg, $v_chatv ); // obf
	fclose( $v_qlimg ); // obf
} // obf

/** // obf
 * Displays the default administration color scheme picker (Used in user-edit.php). // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @global array $v_fjrop // obf
 * // obf
 * @param int $v_vjwii User ID. // obf
 */ // obf
function admin_color_scheme_picker( $v_vjwii ) { // obf
	global $v_fjrop; // obf

	ksort( $v_fjrop ); // obf

	if ( isset( $v_fjrop['fresh'] ) ) { // obf
		// Set Default ('fresh') and Light should go first. // obf
		$v_fjrop = array_filter( // obf
			array_merge( // obf
				array( // obf
					'fresh'  => '', // obf
					'light'  => '', // obf
					'modern' => '', // obf
				), // obf
				$v_fjrop // obf
			) // obf
		); // obf
	} // obf

	$v_ilnmp = get_user_option( 'admin_color', $v_vjwii ); // obf

	if ( empty( $v_ilnmp ) || ! isset( $v_fjrop[ $v_ilnmp ] ) ) { // obf
		$v_ilnmp = 'fresh'; // obf
	} // obf
	?> // obf
	<fieldset id="color-picker" class="scheme-list"> // obf
		<legend class="screen-reader-text"><span> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Administration Color Scheme' ); // obf
			?> // obf
		</span></legend> // obf
		<?php // obf
		wp_nonce_field( 'save-color-scheme', 'color-nonce', false ); // obf
		foreach ( $v_fjrop as $v_yodch => $v_stzrp ) : // obf

			?> // obf
			<div class="color-option <?php echo ( $v_yodch === $v_ilnmp ) ? 'selected' : ''; ?>"> // obf
				<input name="admin_color" id="admin_color_<?php echo esc_attr( $v_yodch ); ?>" type="radio" value="<?php echo esc_attr( $v_yodch ); ?>" class="tog" <?php checked( $v_yodch, $v_ilnmp ); ?> /> // obf
				<input type="hidden" class="css_url" value="<?php echo esc_url( $v_stzrp->url ); ?>" /> // obf
				<input type="hidden" class="icon_colors" value="<?php echo esc_attr( wp_json_encode( array( 'icons' => $v_stzrp->icon_colors ) ) ); ?>" /> // obf
				<label for="admin_color_<?php echo esc_attr( $v_yodch ); ?>"><?php echo esc_html( $v_stzrp->name ); ?></label> // obf
				<div class="color-palette"> // obf
				<?php // obf
				foreach ( $v_stzrp->colors as $v_mvyyk ) { // obf
					?> // obf
					<div class="color-palette-shade" style="background-color: <?php echo esc_attr( $v_mvyyk ); ?>">&nbsp;</div> // obf
					<?php // obf
				} // obf
				?> // obf
				</div> // obf
			</div> // obf
			<?php // obf

		endforeach; // obf
		?> // obf
	</fieldset> // obf
	<?php // obf
} // obf

/** // obf
 * // obf
 * @global array $v_fjrop // obf
 */ // obf
function wp_color_scheme_settings() { // obf
	global $v_fjrop; // obf

	$v_figng = get_user_option( 'admin_color' ); // obf

	// It's possible to have a color scheme set that is no longer registered. // obf
	if ( empty( $v_fjrop[ $v_figng ] ) ) { // obf
		$v_figng = 'fresh'; // obf
	} // obf

	if ( ! empty( $v_fjrop[ $v_figng ]->icon_colors ) ) { // obf
		$v_ehffp = $v_fjrop[ $v_figng ]->icon_colors; // obf
	} elseif ( ! empty( $v_fjrop['fresh']->icon_colors ) ) { // obf
		$v_ehffp = $v_fjrop['fresh']->icon_colors; // obf
	} else { // obf
		// Fall back to the default set of icon colors if the default scheme is missing. // obf
		$v_ehffp = array( // obf
			'base'    => '#a7aaad', // obf
			'focus'   => '#72aee6', // obf
			'current' => '#fff', // obf
		); // obf
	} // obf

	echo '<script type="text/javascript">var _wpColorScheme = ' . wp_json_encode( array( 'icons' => $v_ehffp ) ) . ";</script>\n"; // obf
} // obf

/** // obf
 * Displays the viewport meta in the admin. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
function wp_admin_viewport_meta() { // obf
	/** // obf
	 * Filters the viewport meta in the admin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_veqhg The viewport meta. // obf
	 */ // obf
	$v_veqhg = apply_filters( 'admin_viewport_meta', 'width=device-width,initial-scale=1.0' ); // obf

	if ( empty( $v_veqhg ) ) { // obf
		return; // obf
	} // obf

	echo '<meta name="viewport" content="' . esc_attr( $v_veqhg ) . '">'; // obf
} // obf

/** // obf
 * Adds viewport meta for mobile in Customizer. // obf
 * // obf
 * Hooked to the {@see 'admin_viewport_meta'} filter. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param string $v_veqhg The viewport meta. // obf
 * @return string Filtered viewport meta. // obf
 */ // obf
function _customizer_mobile_viewport_meta( $v_veqhg ) { // obf
	return trim( $v_veqhg, ',' ) . ',minimum-scale=0.5,maximum-scale=1.2'; // obf
} // obf

/** // obf
 * Checks lock status for posts displayed on the Posts screen. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param array  $v_pumgr  The Heartbeat response. // obf
 * @param array  $v_ztsej      The $v_emugc data sent. // obf
 * @param string $v_kjwuh The screen ID. // obf
 * @return array The Heartbeat response. // obf
 */ // obf
function wp_check_locked_posts( $v_pumgr, $v_ztsej, $v_kjwuh ) { // obf
	$v_ricrf = array(); // obf

	if ( array_key_exists( 'wp-check-locked-posts', $v_ztsej ) && is_array( $v_ztsej['wp-check-locked-posts'] ) ) { // obf
		foreach ( $v_ztsej['wp-check-locked-posts'] as $v_tftvu ) { // obf
			$v_qkzgu = absint( substr( $v_tftvu, 5 ) ); // obf

			if ( ! $v_qkzgu ) { // obf
				continue; // obf
			} // obf

			$v_vjwii = wp_check_post_lock( $v_qkzgu ); // obf

			if ( $v_vjwii ) { // obf
				$v_rbphl = get_userdata( $v_vjwii ); // obf

				if ( $v_rbphl && current_user_can( 'edit_post', $v_qkzgu ) ) { // obf
					$v_kqjdz = array( // obf
						'name' => $v_rbphl->display_name, // obf
						/* translators: %s: User's display name. */ // obf
						'text' => sprintf( __( '%s is currently editing' ), $v_rbphl->display_name ), // obf
					); // obf

					if ( get_option( 'show_avatars' ) ) { // obf
						$v_kqjdz['avatar_src']    = get_avatar_url( $v_rbphl->ID, array( 'size' => 18 ) ); // obf
						$v_kqjdz['avatar_src_2x'] = get_avatar_url( $v_rbphl->ID, array( 'size' => 36 ) ); // obf
					} // obf

					$v_ricrf[ $v_tftvu ] = $v_kqjdz; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	if ( ! empty( $v_ricrf ) ) { // obf
		$v_pumgr['wp-check-locked-posts'] = $v_ricrf; // obf
	} // obf

	return $v_pumgr; // obf
} // obf

/** // obf
 * Checks lock status on the New/Edit Post screen and refresh the lock. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param array  $v_pumgr  The Heartbeat response. // obf
 * @param array  $v_ztsej      The $v_emugc data sent. // obf
 * @param string $v_kjwuh The screen ID. // obf
 * @return array The Heartbeat response. // obf
 */ // obf
function wp_refresh_post_lock( $v_pumgr, $v_ztsej, $v_kjwuh ) { // obf
	if ( array_key_exists( 'wp-refresh-post-lock', $v_ztsej ) ) { // obf
		$v_kwgah = $v_ztsej['wp-refresh-post-lock']; // obf
		$v_kqjdz     = array(); // obf

		$v_qkzgu = absint( $v_kwgah['post_id'] ); // obf

		if ( ! $v_qkzgu ) { // obf
			return $v_pumgr; // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_qkzgu ) ) { // obf
			return $v_pumgr; // obf
		} // obf

		$v_vjwii = wp_check_post_lock( $v_qkzgu ); // obf
		$v_rbphl    = get_userdata( $v_vjwii ); // obf

		if ( $v_rbphl ) { // obf
			$v_mefyf = array( // obf
				'name' => $v_rbphl->display_name, // obf
				/* translators: %s: User's display name. */ // obf
				'text' => sprintf( __( '%s has taken over and is currently editing.' ), $v_rbphl->display_name ), // obf
			); // obf

			if ( get_option( 'show_avatars' ) ) { // obf
				$v_mefyf['avatar_src']    = get_avatar_url( $v_rbphl->ID, array( 'size' => 64 ) ); // obf
				$v_mefyf['avatar_src_2x'] = get_avatar_url( $v_rbphl->ID, array( 'size' => 128 ) ); // obf
			} // obf

			$v_kqjdz['lock_error'] = $v_mefyf; // obf
		} else { // obf
			$v_xdisl = wp_set_post_lock( $v_qkzgu ); // obf

			if ( $v_xdisl ) { // obf
				$v_kqjdz['new_lock'] = implode( ':', $v_xdisl ); // obf
			} // obf
		} // obf

		$v_pumgr['wp-refresh-post-lock'] = $v_kqjdz; // obf
	} // obf

	return $v_pumgr; // obf
} // obf

/** // obf
 * Checks nonce expiration on the New/Edit Post screen and refresh if needed. // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param array  $v_pumgr  The Heartbeat response. // obf
 * @param array  $v_ztsej      The $v_emugc data sent. // obf
 * @param string $v_kjwuh The screen ID. // obf
 * @return array The Heartbeat response. // obf
 */ // obf
function wp_refresh_post_nonces( $v_pumgr, $v_ztsej, $v_kjwuh ) { // obf
	if ( array_key_exists( 'wp-refresh-post-nonces', $v_ztsej ) ) { // obf
		$v_kwgah = $v_ztsej['wp-refresh-post-nonces']; // obf

		$v_pumgr['wp-refresh-post-nonces'] = array( 'check' => 1 ); // obf

		$v_qkzgu = absint( $v_kwgah['post_id'] ); // obf

		if ( ! $v_qkzgu ) { // obf
			return $v_pumgr; // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_qkzgu ) ) { // obf
			return $v_pumgr; // obf
		} // obf

		$v_pumgr['wp-refresh-post-nonces'] = array( // obf
			'replace' => array( // obf
				'getpermalinknonce'    => wp_create_nonce( 'getpermalink' ), // obf
				'samplepermalinknonce' => wp_create_nonce( 'samplepermalink' ), // obf
				'closedpostboxesnonce' => wp_create_nonce( 'closedpostboxes' ), // obf
				'_ajax_linking_nonce'  => wp_create_nonce( 'internal-linking' ), // obf
				'_wpnonce'             => wp_create_nonce( 'update-post_' . $v_qkzgu ), // obf
			), // obf
		); // obf
	} // obf

	return $v_pumgr; // obf
} // obf

/** // obf
 * Refresh nonces used with meta boxes in the block editor. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @param array  $v_pumgr  The Heartbeat response. // obf
 * @param array  $v_ztsej      The $v_emugc data sent. // obf
 * @return array The Heartbeat response. // obf
 */ // obf
function wp_refresh_metabox_loader_nonces( $v_pumgr, $v_ztsej ) { // obf
	if ( empty( $v_ztsej['wp-refresh-metabox-loader-nonces'] ) ) { // obf
		return $v_pumgr; // obf
	} // obf

	$v_kwgah = $v_ztsej['wp-refresh-metabox-loader-nonces']; // obf
	$v_qkzgu  = (int) $v_kwgah['post_id']; // obf

	if ( ! $v_qkzgu ) { // obf
		return $v_pumgr; // obf
	} // obf

	if ( ! current_user_can( 'edit_post', $v_qkzgu ) ) { // obf
		return $v_pumgr; // obf
	} // obf

	$v_pumgr['wp-refresh-metabox-loader-nonces'] = array( // obf
		'replace' => array( // obf
			'metabox_loader_nonce' => wp_create_nonce( 'meta-box-loader' ), // obf
			'_wpnonce'             => wp_create_nonce( 'update-post_' . $v_qkzgu ), // obf
		), // obf
	); // obf

	return $v_pumgr; // obf
} // obf

/** // obf
 * Adds the latest Heartbeat and REST API nonce to the Heartbeat response. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param array $v_pumgr The Heartbeat response. // obf
 * @return array The Heartbeat response. // obf
 */ // obf
function wp_refresh_heartbeat_nonces( $v_pumgr ) { // obf
	// Refresh the Rest API nonce. // obf
	$v_pumgr['rest_nonce'] = wp_create_nonce( 'wp_rest' ); // obf

	// Refresh the Heartbeat nonce. // obf
	$v_pumgr['heartbeat_nonce'] = wp_create_nonce( 'heartbeat-nonce' ); // obf

	return $v_pumgr; // obf
} // obf

/** // obf
 * Disables suspension of Heartbeat on the Add/Edit Post screens. // obf
 * // obf
 * @since 3.8.0 // obf
 * // obf
 * @global string $v_lksxa The filename of the current screen. // obf
 * // obf
 * @param array $v_fuxgd An array of Heartbeat settings. // obf
 * @return array Filtered Heartbeat settings. // obf
 */ // obf
function wp_heartbeat_set_suspension( $v_fuxgd ) { // obf
	global $v_lksxa; // obf

	if ( 'post.php' === $v_lksxa || 'post-new.php' === $v_lksxa ) { // obf
		$v_fuxgd['suspension'] = 'disable'; // obf
	} // obf

	return $v_fuxgd; // obf
} // obf

/** // obf
 * Performs autosave with heartbeat. // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @param array $v_pumgr The Heartbeat response. // obf
 * @param array $v_ztsej     The $v_emugc data sent. // obf
 * @return array The Heartbeat response. // obf
 */ // obf
function heartbeat_autosave( $v_pumgr, $v_ztsej ) { // obf
	if ( ! empty( $v_ztsej['wp_autosave'] ) ) { // obf
		$v_vjxjp = wp_autosave( $v_ztsej['wp_autosave'] ); // obf

		if ( is_wp_error( $v_vjxjp ) ) { // obf
			$v_pumgr['wp_autosave'] = array( // obf
				'success' => false, // obf
				'message' => $v_vjxjp->get_error_message(), // obf
			); // obf
		} elseif ( empty( $v_vjxjp ) ) { // obf
			$v_pumgr['wp_autosave'] = array( // obf
				'success' => false, // obf
				'message' => __( 'Error while saving.' ), // obf
			); // obf
		} else { // obf
			/* translators: Draft saved date format, see https://www.php.net/manual/datetime.format.php */ // obf
			$v_ibsms = __( 'g:i:s a' ); // obf
			$v_pumgr['wp_autosave'] = array( // obf
				'success' => true, // obf
				/* translators: %s: Date and time. */ // obf
				'message' => sprintf( __( 'Draft saved at %s.' ), date_i18n( $v_ibsms ) ), // obf
			); // obf
		} // obf
	} // obf

	return $v_pumgr; // obf
} // obf

/** // obf
 * Removes single-use URL parameters and create canonical link based on new URL. // obf
 * // obf
 * Removes specific query string parameters from a URL, create the canonical link, // obf
 * put it in the admin header, and change the current URL to match. // obf
 * // obf
 * @since 4.2.0 // obf
 */ // obf
function wp_admin_canonical_url() { // obf
	$v_dykqx = wp_removable_query_args(); // obf

	if ( empty( $v_dykqx ) ) { // obf
		return; // obf
	} // obf

	// Ensure we're using an absolute URL. // obf
	$v_ckmef  = set_url_scheme( 'http://' . $v_srndv['HTTP_HOST'] . $v_srndv['REQUEST_URI'] ); // obf
	$v_cphzi = remove_query_arg( $v_dykqx, $v_ckmef ); // obf

	/** // obf
	 * Filters the admin canonical URL value. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_cphzi The admin canonical URL value. // obf
	 */ // obf
	$v_cphzi = apply_filters( 'wp_admin_canonical_url', $v_cphzi ); // obf
	?> // obf
	<link id="wp-admin-canonical" rel="canonical" href="<?php echo esc_url( $v_cphzi ); ?>" /> // obf
	<script> // obf
		if ( window.history.replaceState ) { // obf
			window.history.replaceState( null, null, document.getElementById( 'wp-admin-canonical' ).href + window.location.hash ); // obf
		} // obf
	</script> // obf
	<?php // obf
} // obf

/** // obf
 * Outputs JS that reloads the page if the user navigated to it with the Back or Forward button. // obf
 * // obf
 * Used on the Edit Post and Add New Post screens. Needed to ensure the page is not loaded from browser cache, // obf
 * so the post title and editor content are the last saved versions. Ideally this script should run first in the head. // obf
 * // obf
 * @since 4.6.0 // obf
 */ // obf
function wp_page_reload_on_back_button_js() { // obf
	?> // obf
	<script> // obf
		if ( typeof performance !== 'undefined' && performance.navigation && performance.navigation.type === 2 ) { // obf
			document.location.reload( true ); // obf
		} // obf
	</script> // obf
	<?php // obf
} // obf

/** // obf
 * Sends a confirmation request email when a change of site admin email address is attempted. // obf
 * // obf
 * The new site admin address will not become active until confirmed. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 4.9.0 This function was moved from wp-admin/includes/ms.php so it's no longer Multisite specific. // obf
 * // obf
 * @param string $v_ynchk The old site admin email address. // obf
 * @param string $v_lhrdy     The proposed new site admin email address. // obf
 */ // obf
function update_option_new_admin_email( $v_ynchk, $v_lhrdy ) { // obf
	if ( get_option( 'admin_email' ) === $v_lhrdy || ! is_email( $v_lhrdy ) ) { // obf
		return; // obf
	} // obf

	$v_gjjxz            = md5( $v_lhrdy . time() . wp_rand() ); // obf
	$v_qleex = array( // obf
		'hash'     => $v_gjjxz, // obf
		'newemail' => $v_lhrdy, // obf
	); // obf
	update_option( 'adminhash', $v_qleex, false ); // obf

	$v_hncom = switch_to_user_locale( get_current_user_id() ); // obf

	/* translators: Do not translate USERNAME, ADMIN_URL, EMAIL, SITENAME, SITEURL: those are placeholders. */ // obf
	$v_jcuyn = __( // obf
		'Howdy, // obf

A site administrator (###USERNAME###) recently requested to have the // obf
administration email address changed on this site: // obf
###SITEURL### // obf

To confirm this change, please click on the following link: // obf
###ADMIN_URL### // obf

You can safely ignore and delete this email if you do not want to // obf
take this action. // obf

This email has been sent to ###EMAIL### // obf

Regards, // obf
All at ###SITENAME### // obf
###SITEURL###' // obf
	); // obf

	/** // obf
	 * Filters the text of the email sent when a change of site admin email address is attempted. // obf
	 * // obf
	 * The following strings have a special meaning and will get replaced dynamically: // obf
	 * // obf
	 *  - `###USERNAME###`  The current user's username. // obf
	 *  - `###ADMIN_URL###` The link to click on to confirm the email change. // obf
	 *  - `###EMAIL###`     The proposed new site admin email address. // obf
	 *  - `###SITENAME###`  The name of the site. // obf
	 *  - `###SITEURL###`   The URL to the site. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * @since 4.9.0 This filter is no longer Multisite specific. // obf
	 * // obf
	 * @param string $v_jcuyn      Text in the email. // obf
	 * @param array  $v_qleex { // obf
	 *     Data relating to the new site admin email address. // obf
	 * // obf
	 *     @type string $v_gjjxz     The secure hash used in the confirmation link URL. // obf
	 *     @type string $v_bcird The proposed new site admin email address. // obf
	 * } // obf
	 */ // obf
	$v_unwum = apply_filters( 'new_admin_email_content', $v_jcuyn, $v_qleex ); // obf

	$v_xxryn = wp_get_current_user(); // obf
	$v_unwum      = str_replace( '###USERNAME###', $v_xxryn->user_login, $v_unwum ); // obf
	$v_unwum      = str_replace( '###ADMIN_URL###', esc_url( self_admin_url( 'options.php?adminhash=' . $v_gjjxz ) ), $v_unwum ); // obf
	$v_unwum      = str_replace( '###EMAIL###', $v_lhrdy, $v_unwum ); // obf
	$v_unwum      = str_replace( '###SITENAME###', wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ), $v_unwum ); // obf
	$v_unwum      = str_replace( '###SITEURL###', home_url(), $v_unwum ); // obf

	if ( '' !== get_option( 'blogname' ) ) { // obf
		$v_mmpty = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ); // obf
	} else { // obf
		$v_mmpty = parse_url( home_url(), PHP_URL_HOST ); // obf
	} // obf

	$v_xhlzp = sprintf( // obf
		/* translators: New admin email address notification email subject. %s: Site title. */ // obf
		__( '[%s] New Admin Email Address' ), // obf
		$v_mmpty // obf
	); // obf

	/** // obf
	 * Filters the subject of the email sent when a change of site admin email address is attempted. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_xhlzp Subject of the email. // obf
	 */ // obf
	$v_xhlzp = apply_filters( 'new_admin_email_subject', $v_xhlzp ); // obf

	wp_mail( $v_lhrdy, $v_xhlzp, $v_unwum ); // obf

	if ( $v_hncom ) { // obf
		restore_previous_locale(); // obf
	} // obf
} // obf

/** // obf
 * Appends '(Draft)' to draft page titles in the privacy page dropdown // obf
 * so that unpublished content is obvious. // obf
 * // obf
 * @since 4.9.8 // obf
 * @access private // obf
 * // obf
 * @param string  $v_scfah Page title. // obf
 * @param WP_Post $v_fupht  Page data object. // obf
 * @return string Page title. // obf
 */ // obf
function _wp_privacy_settings_filter_draft_page_titles( $v_scfah, $v_fupht ) { // obf
	if ( 'draft' === $v_fupht->post_status && 'privacy' === get_current_screen()->id ) { // obf
		/* translators: %s: Page title. */ // obf
		$v_scfah = sprintf( __( '%s (Draft)' ), $v_scfah ); // obf
	} // obf

	return $v_scfah; // obf
} // obf

/** // obf
 * Checks if the user needs to update PHP. // obf
 * // obf
 * @since 5.1.0 // obf
 * @since 5.1.1 Added the {@see 'wp_is_php_version_acceptable'} filter. // obf
 * // obf
 * @return array|false { // obf
 *     Array of PHP version data. False on failure. // obf
 * // obf
 *     @type string $v_frspc The PHP version recommended by WordPress. // obf
 *     @type string $v_yodmj     The minimum required PHP version. // obf
 *     @type bool   $v_kmxiq        Whether the PHP version is actively supported. // obf
 *     @type bool   $v_icano           Whether the PHP version receives security updates. // obf
 *     @type bool   $v_mpqkw       Whether the PHP version is still acceptable or warnings // obf
 *                                       should be shown and an update recommended. // obf
 * } // obf
 */ // obf
function wp_check_php_version() { // obf
	$v_pynug = PHP_VERSION; // obf
	$v_tftvu     = md5( $v_pynug ); // obf

	$v_pumgr = get_site_transient( 'php_check_' . $v_tftvu ); // obf

	if ( false === $v_pumgr ) { // obf
		$v_toriv = 'http://api.wordpress.org/core/serve-happy/1.0/'; // obf

		if ( wp_http_supports( array( 'ssl' ) ) ) { // obf
			$v_toriv = set_url_scheme( $v_toriv, 'https' ); // obf
		} // obf

		$v_toriv = add_query_arg( 'php_version', $v_pynug, $v_toriv ); // obf

		$v_pumgr = wp_remote_get( $v_toriv ); // obf

		if ( is_wp_error( $v_pumgr ) || 200 !== wp_remote_retrieve_response_code( $v_pumgr ) ) { // obf
			return false; // obf
		} // obf

		$v_pumgr = json_decode( wp_remote_retrieve_body( $v_pumgr ), true ); // obf

		if ( ! is_array( $v_pumgr ) ) { // obf
			return false; // obf
		} // obf

		set_site_transient( 'php_check_' . $v_tftvu, $v_pumgr, WEEK_IN_SECONDS ); // obf
	} // obf

	if ( isset( $v_pumgr['is_acceptable'] ) && $v_pumgr['is_acceptable'] ) { // obf
		/** // obf
		 * Filters whether the active PHP version is considered acceptable by WordPress. // obf
		 * // obf
		 * Returning false will trigger a PHP version warning to show up in the admin dashboard to administrators. // obf
		 * // obf
		 * This filter is only run if the wordpress.org Serve Happy API considers the PHP version acceptable, ensuring // obf
		 * that this filter can only make this check stricter, but not loosen it. // obf
		 * // obf
		 * @since 5.1.1 // obf
		 * // obf
		 * @param bool   $v_mpqkw Whether the PHP version is considered acceptable. Default true. // obf
		 * @param string $v_pynug       PHP version checked. // obf
		 */ // obf
		$v_pumgr['is_acceptable'] = (bool) apply_filters( 'wp_is_php_version_acceptable', true, $v_pynug ); // obf
	} // obf

	$v_pumgr['is_lower_than_future_minimum'] = false; // obf

	// The minimum supported PHP version will be updated to 7.4 in the future. Check if the current version is lower. // obf
	if ( version_compare( $v_pynug, '7.4', '<' ) ) { // obf
		$v_pumgr['is_lower_than_future_minimum'] = true; // obf

		// Force showing of warnings. // obf
		$v_pumgr['is_acceptable'] = false; // obf
	} // obf

	return $v_pumgr; // obf
} // obf