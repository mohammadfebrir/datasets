

<?php // obf
/** // obf
 * WordPress Administration Screen API. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Get the column headers for a screen // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string|WP_Screen $v_obcac The screen you want the headers for // obf
 * @return string[] The column header labels keyed by column ID. // obf
 */ // obf
function get_column_headers( $v_obcac ) { // obf
	static $v_canma = array(); // obf

	if ( is_string( $v_obcac ) ) { // obf
		$v_obcac = convert_to_screen( $v_obcac ); // obf
	} // obf

	if ( ! isset( $v_canma[ $v_obcac->id ] ) ) { // obf
		/** // obf
		 * Filters the column headers for a list table on a specific screen. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_obcac->id`, refers to the // obf
		 * ID of a specific screen. For example, the screen ID for the Posts // obf
		 * list table is edit-post, so the filter for that screen would be // obf
		 * manage_edit-post_columns. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string[] $v_zpeya The column header labels keyed by column ID. // obf
		 */ // obf
		$v_canma[ $v_obcac->id ] = apply_filters( "manage_{$v_obcac->id}_columns", array() ); // obf
	} // obf

	return $v_canma[ $v_obcac->id ]; // obf
} // obf

/** // obf
 * Get a list of hidden columns. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string|WP_Screen $v_obcac The screen you want the hidden columns for // obf
 * @return string[] Array of IDs of hidden columns. // obf
 */ // obf
function get_hidden_columns( $v_obcac ) { // obf
	if ( is_string( $v_obcac ) ) { // obf
		$v_obcac = convert_to_screen( $v_obcac ); // obf
	} // obf

	$v_sogyp = get_user_option( 'manage' . $v_obcac->id . 'columnshidden' ); // obf

	$v_oehtm = ! is_array( $v_sogyp ); // obf

	if ( $v_oehtm ) { // obf
		$v_sogyp = array(); // obf

		/** // obf
		 * Filters the default list of hidden columns. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string[]  $v_sogyp Array of IDs of columns hidden by default. // obf
		 * @param WP_Screen $v_obcac WP_Screen object of the current screen. // obf
		 */ // obf
		$v_sogyp = apply_filters( 'default_hidden_columns', $v_sogyp, $v_obcac ); // obf
	} // obf

	/** // obf
	 * Filters the list of hidden columns. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 4.4.1 Added the `use_defaults` parameter. // obf
	 * // obf
	 * @param string[]  $v_sogyp       Array of IDs of hidden columns. // obf
	 * @param WP_Screen $v_obcac       WP_Screen object of the current screen. // obf
	 * @param bool      $v_oehtm Whether to show the default columns. // obf
	 */ // obf
	return apply_filters( 'hidden_columns', $v_sogyp, $v_obcac, $v_oehtm ); // obf
} // obf

/** // obf
 * Prints the meta box preferences for screen meta. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @global array $v_tlpcg Global meta box state. // obf
 * // obf
 * @param WP_Screen $v_obcac // obf
 */ // obf
function meta_box_prefs( $v_obcac ) { // obf
	global $v_tlpcg; // obf

	if ( is_string( $v_obcac ) ) { // obf
		$v_obcac = convert_to_screen( $v_obcac ); // obf
	} // obf

	if ( empty( $v_tlpcg[ $v_obcac->id ] ) ) { // obf
		return; // obf
	} // obf

	$v_sogyp = get_hidden_meta_boxes( $v_obcac ); // obf

	foreach ( array_keys( $v_tlpcg[ $v_obcac->id ] ) as $v_csqqk ) { // obf
		foreach ( array( 'high', 'core', 'default', 'low' ) as $v_vgcad ) { // obf
			if ( ! isset( $v_tlpcg[ $v_obcac->id ][ $v_csqqk ][ $v_vgcad ] ) ) { // obf
				continue; // obf
			} // obf

			foreach ( $v_tlpcg[ $v_obcac->id ][ $v_csqqk ][ $v_vgcad ] as $v_porzh ) { // obf
				if ( false === $v_porzh || ! $v_porzh['title'] ) { // obf
					continue; // obf
				} // obf

				// Submit box cannot be hidden. // obf
				if ( 'submitdiv' === $v_porzh['id'] || 'linksubmitdiv' === $v_porzh['id'] ) { // obf
					continue; // obf
				} // obf

				$v_mlwav = $v_porzh['title']; // obf

				if ( is_array( $v_porzh['args'] ) && isset( $v_porzh['args']['__widget_basename'] ) ) { // obf
					$v_mlwav = $v_porzh['args']['__widget_basename']; // obf
				} // obf

				$v_xvesz = in_array( $v_porzh['id'], $v_sogyp, true ); // obf

				printf( // obf
					'<label for="%1$v_xagtk-hide"><input class="hide-postbox-tog" name="%1$v_xagtk-hide" type="checkbox" id="%1$v_xagtk-hide" value="%1$v_xagtk" %2$v_xagtk />%3$v_xagtk</label>', // obf
					esc_attr( $v_porzh['id'] ), // obf
					checked( $v_xvesz, false, false ), // obf
					$v_mlwav // obf
				); // obf
			} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Gets an array of IDs of hidden meta boxes. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string|WP_Screen $v_obcac Screen identifier // obf
 * @return string[] IDs of hidden meta boxes. // obf
 */ // obf
function get_hidden_meta_boxes( $v_obcac ) { // obf
	if ( is_string( $v_obcac ) ) { // obf
		$v_obcac = convert_to_screen( $v_obcac ); // obf
	} // obf

	$v_sogyp = get_user_option( "metaboxhidden_{$v_obcac->id}" ); // obf

	$v_oehtm = ! is_array( $v_sogyp ); // obf

	// Hide slug boxes by default. // obf
	if ( $v_oehtm ) { // obf
		$v_sogyp = array(); // obf

		if ( 'post' === $v_obcac->base ) { // obf
			if ( in_array( $v_obcac->post_type, array( 'post', 'page', 'attachment' ), true ) ) { // obf
				$v_sogyp = array( 'slugdiv', 'trackbacksdiv', 'postcustom', 'postexcerpt', 'commentstatusdiv', 'commentsdiv', 'authordiv', 'revisionsdiv' ); // obf
			} else { // obf
				$v_sogyp = array( 'slugdiv' ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the default list of hidden meta boxes. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[]  $v_sogyp An array of IDs of meta boxes hidden by default. // obf
		 * @param WP_Screen $v_obcac WP_Screen object of the current screen. // obf
		 */ // obf
		$v_sogyp = apply_filters( 'default_hidden_meta_boxes', $v_sogyp, $v_obcac ); // obf
	} // obf

	/** // obf
	 * Filters the list of hidden meta boxes. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string[]  $v_sogyp       An array of IDs of hidden meta boxes. // obf
	 * @param WP_Screen $v_obcac       WP_Screen object of the current screen. // obf
	 * @param bool      $v_oehtm Whether to show the default meta boxes. // obf
	 *                                Default true. // obf
	 */ // obf
	return apply_filters( 'hidden_meta_boxes', $v_sogyp, $v_obcac, $v_oehtm ); // obf
} // obf

/** // obf
 * Register and configure an admin screen option // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_wdkfd An option name. // obf
 * @param mixed  $v_luttl   Option-dependent arguments. // obf
 */ // obf
function add_screen_option( $v_wdkfd, $v_luttl = array() ) { // obf
	$v_ykhym = get_current_screen(); // obf

	if ( ! $v_ykhym ) { // obf
		return; // obf
	} // obf

	$v_ykhym->add_option( $v_wdkfd, $v_luttl ); // obf
} // obf

/** // obf
 * Get the current screen object // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global WP_Screen $v_ykhym WordPress current screen object. // obf
 * // obf
 * @return WP_Screen|null Current screen object or null when screen not defined. // obf
 */ // obf
function get_current_screen() { // obf
	global $v_ykhym; // obf

	if ( ! isset( $v_ykhym ) ) { // obf
		return null; // obf
	} // obf

	return $v_ykhym; // obf
} // obf

/** // obf
 * Set the current screen object // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string|WP_Screen $v_itjku Optional. The hook name (also known as the hook suffix) used to determine the screen, // obf
 *                                    or an existing screen object. // obf
 */ // obf
function set_current_screen( $v_itjku = '' ) { // obf
	WP_Screen::get( $v_itjku )->set_current_screen(); // obf
} // obf