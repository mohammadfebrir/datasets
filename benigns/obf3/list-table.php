

<?php // obf
/** // obf
 * Helper functions for displaying a list of items in an ajaxified HTML table. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage List_Table // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Fetches an instance of a WP_List_Table class. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global string $v_rxdne // obf
 * // obf
 * @param string $v_bximp The type of the list table, which is the class name. // obf
 * @param array  $v_njebk       Optional. Arguments to pass to the class. Accepts 'screen'. // obf
 * @return WP_List_Table|false List table object on success, false if the class does not exist. // obf
 */ // obf
function _get_list_table( $v_bximp, $v_njebk = array() ) { // obf
	$v_wgbpa = array( // obf
		// Site Admin. // obf
		'WP_Posts_List_Table'                         => 'posts', // obf
		'WP_Media_List_Table'                         => 'media', // obf
		'WP_Terms_List_Table'                         => 'terms', // obf
		'WP_Users_List_Table'                         => 'users', // obf
		'WP_Comments_List_Table'                      => 'comments', // obf
		'WP_Post_Comments_List_Table'                 => array( 'comments', 'post-comments' ), // obf
		'WP_Links_List_Table'                         => 'links', // obf
		'WP_Plugin_Install_List_Table'                => 'plugin-install', // obf
		'WP_Themes_List_Table'                        => 'themes', // obf
		'WP_Theme_Install_List_Table'                 => array( 'themes', 'theme-install' ), // obf
		'WP_Plugins_List_Table'                       => 'plugins', // obf
		'WP_Application_Passwords_List_Table'         => 'application-passwords', // obf

		// Network Admin. // obf
		'WP_MS_Sites_List_Table'                      => 'ms-sites', // obf
		'WP_MS_Users_List_Table'                      => 'ms-users', // obf
		'WP_MS_Themes_List_Table'                     => 'ms-themes', // obf

		// Privacy requests tables. // obf
		'WP_Privacy_Data_Export_Requests_List_Table'  => 'privacy-data-export-requests', // obf
		'WP_Privacy_Data_Removal_Requests_List_Table' => 'privacy-data-removal-requests', // obf
	); // obf

	if ( isset( $v_wgbpa[ $v_bximp ] ) ) { // obf
		foreach ( (array) $v_wgbpa[ $v_bximp ] as $v_bohyf ) { // obf
			require_once ABSPATH . 'wp-admin/includes/class-wp-' . $v_bohyf . '-list-table.php'; // obf
		} // obf

		if ( isset( $v_njebk['screen'] ) ) { // obf
			$v_njebk['screen'] = convert_to_screen( $v_njebk['screen'] ); // obf
		} elseif ( isset( $v_cqylc['hook_suffix'] ) ) { // obf
			$v_njebk['screen'] = get_current_screen(); // obf
		} else { // obf
			$v_njebk['screen'] = null; // obf
		} // obf

		/** // obf
		 * Filters the list table class to instantiate. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param string $v_bximp The list table class to use. // obf
		 * @param array  $v_njebk       An array containing _get_list_table() arguments. // obf
		 */ // obf
		$v_lmrsi = apply_filters( 'wp_list_table_class_name', $v_bximp, $v_njebk ); // obf

		if ( is_string( $v_lmrsi ) && class_exists( $v_lmrsi ) ) { // obf
			$v_bximp = $v_lmrsi; // obf
		} // obf

		return new $v_bximp( $v_njebk ); // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Register column headers for a particular screen. // obf
 * // obf
 * @see get_column_headers(), print_column_headers(), get_hidden_columns() // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string    $v_xuxbl The handle for the screen to register column headers for. This is // obf
 *                          usually the hook name returned by the `add_*_page()` functions. // obf
 * @param string[] $v_eaerw An array of columns with column IDs as the keys and translated // obf
 *                          column names as the values. // obf
 */ // obf
function register_column_headers( $v_xuxbl, $v_eaerw ) { // obf
	new _WP_List_Table_Compat( $v_xuxbl, $v_eaerw ); // obf
} // obf

/** // obf
 * Prints column headers for a particular screen. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string|WP_Screen $v_xuxbl  The screen hook name or screen object. // obf
 * @param bool             $v_yhwho Whether to set the ID attribute or not. // obf
 */ // obf
function print_column_headers( $v_xuxbl, $v_yhwho = true ) { // obf
	$v_whkyd = new _WP_List_Table_Compat( $v_xuxbl ); // obf

	$v_whkyd->print_column_headers( $v_yhwho ); // obf
} // obf