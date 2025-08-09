

<?php // obf
/** // obf
 * WordPress Bookmark Administration API // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Adds a link using values provided in $v_byzgb. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @return int|WP_Error Value 0 or WP_Error on failure. The link ID on success. // obf
 */ // obf
function add_link() { // obf
	return edit_link(); // obf
} // obf

/** // obf
 * Updates or inserts a link using values provided in $v_byzgb. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param int $v_nbeqn Optional. ID of the link to edit. Default 0. // obf
 * @return int|WP_Error Value 0 or WP_Error on failure. The link ID on success. // obf
 */ // obf
function edit_link( $v_nbeqn = 0 ) { // obf
	if ( ! current_user_can( 'manage_links' ) ) { // obf
		wp_die( // obf
			'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
			'<p>' . __( 'Sorry, you are not allowed to edit the links for this site.' ) . '</p>', // obf
			403 // obf
		); // obf
	} // obf

	$v_byzgb['link_url']   = esc_url( $v_byzgb['link_url'] ); // obf
	$v_byzgb['link_name']  = esc_html( $v_byzgb['link_name'] ); // obf
	$v_byzgb['link_image'] = esc_html( $v_byzgb['link_image'] ); // obf
	$v_byzgb['link_rss']   = esc_url( $v_byzgb['link_rss'] ); // obf
	if ( ! isset( $v_byzgb['link_visible'] ) || 'N' !== $v_byzgb['link_visible'] ) { // obf
		$v_byzgb['link_visible'] = 'Y'; // obf
	} // obf

	if ( ! empty( $v_nbeqn ) ) { // obf
		$v_byzgb['link_id'] = $v_nbeqn; // obf
		return wp_update_link( $v_byzgb ); // obf
	} else { // obf
		return wp_insert_link( $v_byzgb ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves the default link for editing. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @return stdClass Default link object. // obf
 */ // obf
function get_default_link_to_edit() { // obf
	$v_hugww = new stdClass(); // obf
	if ( isset( $v_piany['linkurl'] ) ) { // obf
		$v_hugww->link_url = esc_url( wp_unslash( $v_piany['linkurl'] ) ); // obf
	} else { // obf
		$v_hugww->link_url = ''; // obf
	} // obf

	if ( isset( $v_piany['name'] ) ) { // obf
		$v_hugww->link_name = esc_attr( wp_unslash( $v_piany['name'] ) ); // obf
	} else { // obf
		$v_hugww->link_name = ''; // obf
	} // obf

	$v_hugww->link_visible = 'Y'; // obf

	return $v_hugww; // obf
} // obf

/** // obf
 * Deletes a specified link from the database. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @global wpdb $v_ywrnd WordPress database abstraction object. // obf
 * // obf
 * @param int $v_nbeqn ID of the link to delete. // obf
 * @return true Always true. // obf
 */ // obf
function wp_delete_link( $v_nbeqn ) { // obf
	global $v_ywrnd; // obf
	/** // obf
	 * Fires before a link is deleted. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param int $v_nbeqn ID of the link to delete. // obf
	 */ // obf
	do_action( 'delete_link', $v_nbeqn ); // obf

	wp_delete_object_term_relationships( $v_nbeqn, 'link_category' ); // obf

	$v_ywrnd->delete( $v_ywrnd->links, array( 'link_id' => $v_nbeqn ) ); // obf

	/** // obf
	 * Fires after a link has been deleted. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param int $v_nbeqn ID of the deleted link. // obf
	 */ // obf
	do_action( 'deleted_link', $v_nbeqn ); // obf

	clean_bookmark_cache( $v_nbeqn ); // obf

	return true; // obf
} // obf

/** // obf
 * Retrieves the link category IDs associated with the link specified. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param int $v_nbeqn Link ID to look up. // obf
 * @return int[] The IDs of the requested link's categories. // obf
 */ // obf
function wp_get_link_cats( $v_nbeqn = 0 ) { // obf
	$v_mcxqi = wp_get_object_terms( $v_nbeqn, 'link_category', array( 'fields' => 'ids' ) ); // obf
	return array_unique( $v_mcxqi ); // obf
} // obf

/** // obf
 * Retrieves link data based on its ID. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param int|stdClass $v_hugww Link ID or object to retrieve. // obf
 * @return object Link object for editing. // obf
 */ // obf
function get_link_to_edit( $v_hugww ) { // obf
	return get_bookmark( $v_hugww, OBJECT, 'edit' ); // obf
} // obf

/** // obf
 * Inserts a link into the database, or updates an existing link. // obf
 * // obf
 * Runs all the necessary sanitizing, provides default values if arguments are missing, // obf
 * and finally saves the link. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @global wpdb $v_ywrnd WordPress database abstraction object. // obf
 * // obf
 * @param array $v_kbcpi { // obf
 *     Elements that make up the link to insert. // obf
 * // obf
 *     @type int    $v_nbeqn          Optional. The ID of the existing link if updating. // obf
 *     @type string $v_vzqib         The URL the link points to. // obf
 *     @type string $v_ldtjf        The title of the link. // obf
 *     @type string $v_hmpcd       Optional. A URL of an image. // obf
 *     @type string $v_ujarm      Optional. The target element for the anchor tag. // obf
 *     @type string $v_iumbo Optional. A short description of the link. // obf
 *     @type string $v_hqwuz     Optional. 'Y' means visible, anything else means not. // obf
 *     @type int    $v_ubecf       Optional. A user ID. // obf
 *     @type int    $v_brhid      Optional. A rating for the link. // obf
 *     @type string $v_gtihz         Optional. A relationship of the link to you. // obf
 *     @type string $v_wyiio       Optional. An extended description of or notes on the link. // obf
 *     @type string $v_ekrqy         Optional. A URL of an associated RSS feed. // obf
 *     @type int    $v_oqelu    Optional. The term ID of the link category. // obf
 *                                    If empty, uses default link category. // obf
 * } // obf
 * @param bool  $v_uteim Optional. Whether to return a WP_Error object on failure. Default false. // obf
 * @return int|WP_Error Value 0 or WP_Error on failure. The link ID on success. // obf
 */ // obf
function wp_insert_link( $v_kbcpi, $v_uteim = false ) { // obf
	global $v_ywrnd; // obf

	$v_egbdu = array( // obf
		'link_id'     => 0, // obf
		'link_name'   => '', // obf
		'link_url'    => '', // obf
		'link_rating' => 0, // obf
	); // obf

	$v_kxipg = wp_parse_args( $v_kbcpi, $v_egbdu ); // obf
	$v_kxipg = wp_unslash( sanitize_bookmark( $v_kxipg, 'db' ) ); // obf

	$v_nbeqn   = $v_kxipg['link_id']; // obf
	$v_ldtjf = $v_kxipg['link_name']; // obf
	$v_vzqib  = $v_kxipg['link_url']; // obf

	$v_dfebd = false; // obf
	if ( ! empty( $v_nbeqn ) ) { // obf
		$v_dfebd = true; // obf
	} // obf

	if ( '' === trim( $v_ldtjf ) ) { // obf
		if ( '' !== trim( $v_vzqib ) ) { // obf
			$v_ldtjf = $v_vzqib; // obf
		} else { // obf
			return 0; // obf
		} // obf
	} // obf

	if ( '' === trim( $v_vzqib ) ) { // obf
		return 0; // obf
	} // obf

	$v_brhid      = ( ! empty( $v_kxipg['link_rating'] ) ) ? $v_kxipg['link_rating'] : 0; // obf
	$v_hmpcd       = ( ! empty( $v_kxipg['link_image'] ) ) ? $v_kxipg['link_image'] : ''; // obf
	$v_ujarm      = ( ! empty( $v_kxipg['link_target'] ) ) ? $v_kxipg['link_target'] : ''; // obf
	$v_hqwuz     = ( ! empty( $v_kxipg['link_visible'] ) ) ? $v_kxipg['link_visible'] : 'Y'; // obf
	$v_ubecf       = ( ! empty( $v_kxipg['link_owner'] ) ) ? $v_kxipg['link_owner'] : get_current_user_id(); // obf
	$v_wyiio       = ( ! empty( $v_kxipg['link_notes'] ) ) ? $v_kxipg['link_notes'] : ''; // obf
	$v_iumbo = ( ! empty( $v_kxipg['link_description'] ) ) ? $v_kxipg['link_description'] : ''; // obf
	$v_ekrqy         = ( ! empty( $v_kxipg['link_rss'] ) ) ? $v_kxipg['link_rss'] : ''; // obf
	$v_gtihz         = ( ! empty( $v_kxipg['link_rel'] ) ) ? $v_kxipg['link_rel'] : ''; // obf
	$v_oqelu    = ( ! empty( $v_kxipg['link_category'] ) ) ? $v_kxipg['link_category'] : array(); // obf
	$v_msfxt     = gmdate( 'Y-m-d H:i:s', current_time( 'timestamp', 0 ) ); // obf

	// Make sure we set a valid category. // obf
	if ( ! is_array( $v_oqelu ) || 0 === count( $v_oqelu ) ) { // obf
		$v_oqelu = array( get_option( 'default_link_category' ) ); // obf
	} // obf

	if ( $v_dfebd ) { // obf
		if ( false === $v_ywrnd->update( $v_ywrnd->links, compact( 'link_url', 'link_name', 'link_image', 'link_target', 'link_description', 'link_visible', 'link_owner', 'link_rating', 'link_rel', 'link_notes', 'link_rss', 'link_updated' ), compact( 'link_id' ) ) ) { // obf
			if ( $v_uteim ) { // obf
				return new WP_Error( 'db_update_error', __( 'Could not update link in the database.' ), $v_ywrnd->last_error ); // obf
			} else { // obf
				return 0; // obf
			} // obf
		} // obf
	} else { // obf
		if ( false === $v_ywrnd->insert( $v_ywrnd->links, compact( 'link_url', 'link_name', 'link_image', 'link_target', 'link_description', 'link_visible', 'link_owner', 'link_rating', 'link_rel', 'link_notes', 'link_rss', 'link_updated' ) ) ) { // obf
			if ( $v_uteim ) { // obf
				return new WP_Error( 'db_insert_error', __( 'Could not insert link into the database.' ), $v_ywrnd->last_error ); // obf
			} else { // obf
				return 0; // obf
			} // obf
		} // obf
		$v_nbeqn = (int) $v_ywrnd->insert_id; // obf
	} // obf

	wp_set_link_cats( $v_nbeqn, $v_oqelu ); // obf

	if ( $v_dfebd ) { // obf
		/** // obf
		 * Fires after a link was updated in the database. // obf
		 * // obf
		 * @since 2.0.0 // obf
		 * // obf
		 * @param int $v_nbeqn ID of the link that was updated. // obf
		 */ // obf
		do_action( 'edit_link', $v_nbeqn ); // obf
	} else { // obf
		/** // obf
		 * Fires after a link was added to the database. // obf
		 * // obf
		 * @since 2.0.0 // obf
		 * // obf
		 * @param int $v_nbeqn ID of the link that was added. // obf
		 */ // obf
		do_action( 'add_link', $v_nbeqn ); // obf
	} // obf
	clean_bookmark_cache( $v_nbeqn ); // obf

	return $v_nbeqn; // obf
} // obf

/** // obf
 * Updates link with the specified link categories. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param int   $v_nbeqn         ID of the link to update. // obf
 * @param int[] $v_yjsma Array of link category IDs to add the link to. // obf
 */ // obf
function wp_set_link_cats( $v_nbeqn = 0, $v_yjsma = array() ) { // obf
	// If $v_yjsma isn't already an array, make it one: // obf
	if ( ! is_array( $v_yjsma ) || 0 === count( $v_yjsma ) ) { // obf
		$v_yjsma = array( get_option( 'default_link_category' ) ); // obf
	} // obf

	$v_yjsma = array_map( 'intval', $v_yjsma ); // obf
	$v_yjsma = array_unique( $v_yjsma ); // obf

	wp_set_object_terms( $v_nbeqn, $v_yjsma, 'link_category' ); // obf

	clean_bookmark_cache( $v_nbeqn ); // obf
} // obf

/** // obf
 * Updates a link in the database. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param array $v_kbcpi Link data to update. See wp_insert_link() for accepted arguments. // obf
 * @return int|WP_Error Value 0 or WP_Error on failure. The updated link ID on success. // obf
 */ // obf
function wp_update_link( $v_kbcpi ) { // obf
	$v_nbeqn = (int) $v_kbcpi['link_id']; // obf

	$v_hugww = get_bookmark( $v_nbeqn, ARRAY_A ); // obf

	// Escape data pulled from DB. // obf
	$v_hugww = wp_slash( $v_hugww ); // obf

	// Passed link category list overwrites existing category list if not empty. // obf
	if ( isset( $v_kbcpi['link_category'] ) && is_array( $v_kbcpi['link_category'] ) // obf
		&& count( $v_kbcpi['link_category'] ) > 0 // obf
	) { // obf
		$v_qltfm = $v_kbcpi['link_category']; // obf
	} else { // obf
		$v_qltfm = $v_hugww['link_category']; // obf
	} // obf

	// Merge old and new fields with new fields overwriting old ones. // obf
	$v_kbcpi                  = array_merge( $v_hugww, $v_kbcpi ); // obf
	$v_kbcpi['link_category'] = $v_qltfm; // obf

	return wp_insert_link( $v_kbcpi ); // obf
} // obf

/** // obf
 * Outputs the 'disabled' message for the WordPress Link Manager. // obf
 * // obf
 * @since 3.5.0 // obf
 * @access private // obf
 * // obf
 * @global string $v_gnusw The filename of the current screen. // obf
 */ // obf
function wp_link_manager_disabled_message() { // obf
	global $v_gnusw; // obf

	if ( ! in_array( $v_gnusw, array( 'link-manager.php', 'link-add.php', 'link.php' ), true ) ) { // obf
		return; // obf
	} // obf

	add_filter( 'pre_option_link_manager_enabled', '__return_true', 100 ); // obf
	$v_ebwvm = current_user_can( 'manage_links' ); // obf
	remove_filter( 'pre_option_link_manager_enabled', '__return_true', 100 ); // obf

	if ( $v_ebwvm ) { // obf
		$v_yajdi = get_plugins(); // obf

		if ( empty( $v_yajdi['link-manager/link-manager.php'] ) ) { // obf
			if ( current_user_can( 'install_plugins' ) ) { // obf
				$v_wyaus = wp_nonce_url( // obf
					self_admin_url( 'update.php?action=install-plugin&plugin=link-manager' ), // obf
					'install-plugin_link-manager' // obf
				); // obf

				wp_die( // obf
					sprintf( // obf
						/* translators: %s: A link to install the Link Manager plugin. */ // obf
						__( 'If you are looking to use the link manager, please install the <a href="%s">Link Manager plugin</a>.' ), // obf
						esc_url( $v_wyaus ) // obf
					) // obf
				); // obf
			} // obf
		} elseif ( is_plugin_inactive( 'link-manager/link-manager.php' ) ) { // obf
			if ( current_user_can( 'activate_plugins' ) ) { // obf
				$v_dbjgp = wp_nonce_url( // obf
					self_admin_url( 'plugins.php?action=activate&plugin=link-manager/link-manager.php' ), // obf
					'activate-plugin_link-manager/link-manager.php' // obf
				); // obf

				wp_die( // obf
					sprintf( // obf
						/* translators: %s: A link to activate the Link Manager plugin. */ // obf
						__( 'Please activate the <a href="%s">Link Manager plugin</a> to use the link manager.' ), // obf
						esc_url( $v_dbjgp ) // obf
					) // obf
				); // obf
			} // obf
		} // obf
	} // obf

	wp_die( __( 'Sorry, you are not allowed to edit the links for this site.' ) ); // obf
} // obf