

<?php // obf
/** // obf
 * REST API: WP_REST_Menus_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 */ // obf

/** // obf
 * Core class used to managed menu terms associated via the REST API. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Menus_Controller extends WP_REST_Terms_Controller { // obf

	/** // obf
	 * Checks if a request has access to read menus. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lohgc Full details about the request. // obf
	 * @return bool|WP_Error True if the request has read access, otherwise false or WP_Error object. // obf
	 */ // obf
	public function get_items_permissions_check( $v_lohgc ) { // obf
		$v_wanby = parent::get_items_permissions_check( $v_lohgc ); // obf

		if ( true !== $v_wanby ) { // obf
			return $v_wanby; // obf
		} // obf

		return $v_lnqxq->check_has_read_only_access( $v_lohgc ); // obf
	} // obf

	/** // obf
	 * Checks if a request has access to read or edit the specified menu. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lohgc Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object. // obf
	 */ // obf
	public function get_item_permissions_check( $v_lohgc ) { // obf
		$v_wanby = parent::get_item_permissions_check( $v_lohgc ); // obf

		if ( true !== $v_wanby ) { // obf
			return $v_wanby; // obf
		} // obf

		return $v_lnqxq->check_has_read_only_access( $v_lohgc ); // obf
	} // obf

	/** // obf
	 * Gets the term, if the ID is valid. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int $v_etlws Supplied ID. // obf
	 * @return WP_Term|WP_Error Term object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_term( $v_etlws ) { // obf
		$v_ekzhc = parent::get_term( $v_etlws ); // obf

		if ( is_wp_error( $v_ekzhc ) ) { // obf
			return $v_ekzhc; // obf
		} // obf

		$v_uuzzr           = wp_get_nav_menu_object( $v_ekzhc ); // obf
		$v_uuzzr->auto_add = $v_lnqxq->get_menu_auto_add( $v_uuzzr->term_id ); // obf

		return $v_uuzzr; // obf
	} // obf

	/** // obf
	 * Checks whether the current user has read permission for the endpoint. // obf
	 * // obf
	 * This allows for any user that can `edit_theme_options` or edit any REST API available post type. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lohgc Full details about the request. // obf
	 * @return true|WP_Error True if the current user has permission, WP_Error object otherwise. // obf
	 */ // obf
	protected function check_has_read_only_access( $v_lohgc ) { // obf
		/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-menu-items-controller.php */ // obf
		$v_dyaxy = apply_filters( 'rest_menu_read_access', false, $v_lohgc, $v_lnqxq ); // obf
		if ( $v_dyaxy ) { // obf
			return true; // obf
		} // obf

		if ( current_user_can( 'edit_theme_options' ) ) { // obf
			return true; // obf
		} // obf

		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf

		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_jskhv ) { // obf
			if ( current_user_can( $v_jskhv->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view', // obf
			__( 'Sorry, you are not allowed to view menus.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares a single term output for response. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_Term         $v_ekzhc    Term object. // obf
	 * @param WP_REST_Request $v_lohgc Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_ekzhc, $v_lohgc ) { // obf
		$v_hupaa = wp_get_nav_menu_object( $v_ekzhc ); // obf
		$v_blcmd = parent::prepare_item_for_response( $v_hupaa, $v_lohgc ); // obf

		$v_mspbg = $v_lnqxq->get_fields_for_response( $v_lohgc ); // obf
		$v_xjjnu   = $v_blcmd->get_data(); // obf

		if ( rest_is_field_included( 'locations', $v_mspbg ) ) { // obf
			$v_xjjnu['locations'] = $v_lnqxq->get_menu_locations( $v_hupaa->term_id ); // obf
		} // obf

		if ( rest_is_field_included( 'auto_add', $v_mspbg ) ) { // obf
			$v_xjjnu['auto_add'] = $v_lnqxq->get_menu_auto_add( $v_hupaa->term_id ); // obf
		} // obf

		$v_wrequ = ! empty( $v_lohgc['context'] ) ? $v_lohgc['context'] : 'view'; // obf
		$v_xjjnu    = $v_lnqxq->add_additional_fields_to_object( $v_xjjnu, $v_lohgc ); // obf
		$v_xjjnu    = $v_lnqxq->filter_response_by_context( $v_xjjnu, $v_wrequ ); // obf

		$v_blcmd = rest_ensure_response( $v_xjjnu ); // obf

		if ( rest_is_field_included( '_links', $v_mspbg ) || rest_is_field_included( '_embedded', $v_mspbg ) ) { // obf
			$v_blcmd->add_links( $v_lnqxq->prepare_links( $v_ekzhc ) ); // obf
		} // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
		return apply_filters( "rest_prepare_{$v_lnqxq->taxonomy}", $v_blcmd, $v_ekzhc, $v_lohgc ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_Term $v_ekzhc Term object. // obf
	 * @return array Links for the given term. // obf
	 */ // obf
	protected function prepare_links( $v_ekzhc ) { // obf
		$v_bfcjv = parent::prepare_links( $v_ekzhc ); // obf

		$v_obnfa = $v_lnqxq->get_menu_locations( $v_ekzhc->term_id ); // obf
		foreach ( $v_obnfa as $v_eriot ) { // obf
			$v_qeaty = rest_url( sprintf( 'wp/v2/menu-locations/%s', $v_eriot ) ); // obf

			$v_bfcjv['https://api.w.org/menu-location'][] = array( // obf
				'href'       => $v_qeaty, // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		return $v_bfcjv; // obf
	} // obf

	/** // obf
	 * Prepares a single term for create or update. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lohgc Request object. // obf
	 * @return object Prepared term data. // obf
	 */ // obf
	public function prepare_item_for_database( $v_lohgc ) { // obf
		$v_ucxeh = parent::prepare_item_for_database( $v_lohgc ); // obf

		$v_rvfrl = $v_lnqxq->get_item_schema(); // obf

		if ( isset( $v_lohgc['name'] ) && ! empty( $v_rvfrl['properties']['name'] ) ) { // obf
			$v_ucxeh->{'menu-name'} = $v_lohgc['name']; // obf
		} // obf

		return $v_ucxeh; // obf
	} // obf

	/** // obf
	 * Creates a single term in a taxonomy. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lohgc Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_lohgc ) { // obf
		if ( isset( $v_lohgc['parent'] ) ) { // obf
			if ( ! is_taxonomy_hierarchical( $v_lnqxq->taxonomy ) ) { // obf
				return new WP_Error( 'rest_taxonomy_not_hierarchical', __( 'Cannot set parent term, taxonomy is not hierarchical.' ), array( 'status' => 400 ) ); // obf
			} // obf

			$v_wohzv = wp_get_nav_menu_object( (int) $v_lohgc['parent'] ); // obf

			if ( ! $v_wohzv ) { // obf
				return new WP_Error( 'rest_term_invalid', __( 'Parent term does not exist.' ), array( 'status' => 400 ) ); // obf
			} // obf
		} // obf

		$v_ucxeh = $v_lnqxq->prepare_item_for_database( $v_lohgc ); // obf

		$v_ekzhc = wp_update_nav_menu_object( 0, wp_slash( (array) $v_ucxeh ) ); // obf

		if ( is_wp_error( $v_ekzhc ) ) { // obf
			/* // obf
			 * If we're going to inform the client that the term already exists, // obf
			 * give them the identifier for future use. // obf
			 */ // obf

			if ( in_array( 'menu_exists', $v_ekzhc->get_error_codes(), true ) ) { // obf
				$v_lvnch = get_term_by( 'name', $v_ucxeh->{'menu-name'}, $v_lnqxq->taxonomy ); // obf
				$v_ekzhc->add_data( $v_lvnch->term_id, 'menu_exists' ); // obf
				$v_ekzhc->add_data( // obf
					array( // obf
						'status'  => 400, // obf
						'term_id' => $v_lvnch->term_id, // obf
					) // obf
				); // obf
			} else { // obf
				$v_ekzhc->add_data( array( 'status' => 400 ) ); // obf
			} // obf

			return $v_ekzhc; // obf
		} // obf

		$v_ekzhc = $v_lnqxq->get_term( $v_ekzhc ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
		do_action( "rest_insert_{$v_lnqxq->taxonomy}", $v_ekzhc, $v_lohgc, true ); // obf

		$v_rvfrl = $v_lnqxq->get_item_schema(); // obf
		if ( ! empty( $v_rvfrl['properties']['meta'] ) && isset( $v_lohgc['meta'] ) ) { // obf
			$v_yqpfa = $v_lnqxq->meta->update_value( $v_lohgc['meta'], $v_ekzhc->term_id ); // obf

			if ( is_wp_error( $v_yqpfa ) ) { // obf
				return $v_yqpfa; // obf
			} // obf
		} // obf

		$v_fttds = $v_lnqxq->handle_locations( $v_ekzhc->term_id, $v_lohgc ); // obf

		if ( is_wp_error( $v_fttds ) ) { // obf
			return $v_fttds; // obf
		} // obf

		$v_lnqxq->handle_auto_add( $v_ekzhc->term_id, $v_lohgc ); // obf

		$v_cjrgx = $v_lnqxq->update_additional_fields_for_object( $v_ekzhc, $v_lohgc ); // obf

		if ( is_wp_error( $v_cjrgx ) ) { // obf
			return $v_cjrgx; // obf
		} // obf

		$v_lohgc->set_param( 'context', 'view' ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
		do_action( "rest_after_insert_{$v_lnqxq->taxonomy}", $v_ekzhc, $v_lohgc, true ); // obf

		$v_blcmd = $v_lnqxq->prepare_item_for_response( $v_ekzhc, $v_lohgc ); // obf
		$v_blcmd = rest_ensure_response( $v_blcmd ); // obf

		$v_blcmd->set_status( 201 ); // obf
		$v_blcmd->header( 'Location', rest_url( $v_lnqxq->namespace . '/' . $v_lnqxq->rest_base . '/' . $v_ekzhc->term_id ) ); // obf

		return $v_blcmd; // obf
	} // obf

	/** // obf
	 * Updates a single term from a taxonomy. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lohgc Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_lohgc ) { // obf
		$v_ekzhc = $v_lnqxq->get_term( $v_lohgc['id'] ); // obf
		if ( is_wp_error( $v_ekzhc ) ) { // obf
			return $v_ekzhc; // obf
		} // obf

		if ( isset( $v_lohgc['parent'] ) ) { // obf
			if ( ! is_taxonomy_hierarchical( $v_lnqxq->taxonomy ) ) { // obf
				return new WP_Error( 'rest_taxonomy_not_hierarchical', __( 'Cannot set parent term, taxonomy is not hierarchical.' ), array( 'status' => 400 ) ); // obf
			} // obf

			$v_wohzv = get_term( (int) $v_lohgc['parent'], $v_lnqxq->taxonomy ); // obf

			if ( ! $v_wohzv ) { // obf
				return new WP_Error( 'rest_term_invalid', __( 'Parent term does not exist.' ), array( 'status' => 400 ) ); // obf
			} // obf
		} // obf

		$v_ucxeh = $v_lnqxq->prepare_item_for_database( $v_lohgc ); // obf

		// Only update the term if we have something to update. // obf
		if ( ! empty( $v_ucxeh ) ) { // obf
			if ( ! isset( $v_ucxeh->{'menu-name'} ) ) { // obf
				// wp_update_nav_menu_object() requires that the menu-name is always passed. // obf
				$v_ucxeh->{'menu-name'} = $v_ekzhc->name; // obf
			} // obf

			$v_wobcd = wp_update_nav_menu_object( $v_ekzhc->term_id, wp_slash( (array) $v_ucxeh ) ); // obf

			if ( is_wp_error( $v_wobcd ) ) { // obf
				return $v_wobcd; // obf
			} // obf
		} // obf

		$v_ekzhc = get_term( $v_ekzhc->term_id, $v_lnqxq->taxonomy ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
		do_action( "rest_insert_{$v_lnqxq->taxonomy}", $v_ekzhc, $v_lohgc, false ); // obf

		$v_rvfrl = $v_lnqxq->get_item_schema(); // obf
		if ( ! empty( $v_rvfrl['properties']['meta'] ) && isset( $v_lohgc['meta'] ) ) { // obf
			$v_yqpfa = $v_lnqxq->meta->update_value( $v_lohgc['meta'], $v_ekzhc->term_id ); // obf

			if ( is_wp_error( $v_yqpfa ) ) { // obf
				return $v_yqpfa; // obf
			} // obf
		} // obf

		$v_fttds = $v_lnqxq->handle_locations( $v_ekzhc->term_id, $v_lohgc ); // obf

		if ( is_wp_error( $v_fttds ) ) { // obf
			return $v_fttds; // obf
		} // obf

		$v_lnqxq->handle_auto_add( $v_ekzhc->term_id, $v_lohgc ); // obf

		$v_cjrgx = $v_lnqxq->update_additional_fields_for_object( $v_ekzhc, $v_lohgc ); // obf

		if ( is_wp_error( $v_cjrgx ) ) { // obf
			return $v_cjrgx; // obf
		} // obf

		$v_lohgc->set_param( 'context', 'view' ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
		do_action( "rest_after_insert_{$v_lnqxq->taxonomy}", $v_ekzhc, $v_lohgc, false ); // obf

		$v_blcmd = $v_lnqxq->prepare_item_for_response( $v_ekzhc, $v_lohgc ); // obf

		return rest_ensure_response( $v_blcmd ); // obf
	} // obf

	/** // obf
	 * Deletes a single term from a taxonomy. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lohgc Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_lohgc ) { // obf
		$v_ekzhc = $v_lnqxq->get_term( $v_lohgc['id'] ); // obf
		if ( is_wp_error( $v_ekzhc ) ) { // obf
			return $v_ekzhc; // obf
		} // obf

		// We don't support trashing for terms. // obf
		if ( ! $v_lohgc['force'] ) { // obf
			/* translators: %s: force=true */ // obf
			return new WP_Error( 'rest_trash_not_supported', sprintf( __( "Menus do not support trashing. Set '%s' to delete." ), 'force=true' ), array( 'status' => 501 ) ); // obf
		} // obf

		$v_lohgc->set_param( 'context', 'view' ); // obf

		$v_vycwr = $v_lnqxq->prepare_item_for_response( $v_ekzhc, $v_lohgc ); // obf

		$v_gnovh = wp_delete_nav_menu( $v_ekzhc ); // obf

		if ( ! $v_gnovh || is_wp_error( $v_gnovh ) ) { // obf
			return new WP_Error( 'rest_cannot_delete', __( 'The menu cannot be deleted.' ), array( 'status' => 500 ) ); // obf
		} // obf

		$v_blcmd = new WP_REST_Response(); // obf
		$v_blcmd->set_data( // obf
			array( // obf
				'deleted'  => true, // obf
				'previous' => $v_vycwr->get_data(), // obf
			) // obf
		); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
		do_action( "rest_delete_{$v_lnqxq->taxonomy}", $v_ekzhc, $v_blcmd, $v_lohgc ); // obf

		return $v_blcmd; // obf
	} // obf

	/** // obf
	 * Returns the value of a menu's auto_add setting. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int $v_vnhtj The menu id to query. // obf
	 * @return bool The value of auto_add. // obf
	 */ // obf
	protected function get_menu_auto_add( $v_vnhtj ) { // obf
		$v_frcps = (array) get_option( 'nav_menu_options', array( 'auto_add' => array() ) ); // obf

		return in_array( $v_vnhtj, $v_frcps['auto_add'], true ); // obf
	} // obf

	/** // obf
	 * Updates the menu's auto add from a REST request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int             $v_vnhtj The menu id to update. // obf
	 * @param WP_REST_Request $v_lohgc Full details about the request. // obf
	 * @return bool True if the auto add setting was successfully updated. // obf
	 */ // obf
	protected function handle_auto_add( $v_vnhtj, $v_lohgc ) { // obf
		if ( ! isset( $v_lohgc['auto_add'] ) ) { // obf
			return true; // obf
		} // obf

		$v_frcps = (array) get_option( 'nav_menu_options', array( 'auto_add' => array() ) ); // obf

		if ( ! isset( $v_frcps['auto_add'] ) ) { // obf
			$v_frcps['auto_add'] = array(); // obf
		} // obf

		$v_mougl = $v_lohgc['auto_add']; // obf

		$v_tkkkc = array_search( $v_vnhtj, $v_frcps['auto_add'], true ); // obf

		if ( $v_mougl && false === $v_tkkkc ) { // obf
			$v_frcps['auto_add'][] = $v_vnhtj; // obf
		} elseif ( ! $v_mougl && false !== $v_tkkkc ) { // obf
			array_splice( $v_frcps['auto_add'], $v_tkkkc, 1 ); // obf
		} // obf

		$v_wobcd = update_option( 'nav_menu_options', $v_frcps ); // obf

		/** This action is documented in wp-includes/nav-menu.php */ // obf
		do_action( 'wp_update_nav_menu', $v_vnhtj ); // obf

		return $v_wobcd; // obf
	} // obf

	/** // obf
	 * Returns the names of the locations assigned to the menu. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int $v_vnhtj The menu id. // obf
	 * @return string[] The locations assigned to the menu. // obf
	 */ // obf
	protected function get_menu_locations( $v_vnhtj ) { // obf
		$v_obnfa      = get_nav_menu_locations(); // obf
		$v_kfgwg = array(); // obf

		foreach ( $v_obnfa as $v_eriot => $v_efiww ) { // obf
			if ( $v_vnhtj === $v_efiww ) { // obf
				$v_kfgwg[] = $v_eriot; // obf
			} // obf
		} // obf

		return $v_kfgwg; // obf
	} // obf

	/** // obf
	 * Updates the menu's locations from a REST request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int             $v_vnhtj The menu id to update. // obf
	 * @param WP_REST_Request $v_lohgc Full details about the request. // obf
	 * @return true|WP_Error True on success, a WP_Error on an error updating any of the locations. // obf
	 */ // obf
	protected function handle_locations( $v_vnhtj, $v_lohgc ) { // obf
		if ( ! isset( $v_lohgc['locations'] ) ) { // obf
			return true; // obf
		} // obf

		$v_kfgwg = get_registered_nav_menus(); // obf
		$v_kfgwg = array_keys( $v_kfgwg ); // obf
		$v_wvhyp  = array(); // obf
		foreach ( $v_lohgc['locations'] as $v_eriot ) { // obf
			if ( ! in_array( $v_eriot, $v_kfgwg, true ) ) { // obf
				return new WP_Error( // obf
					'rest_invalid_menu_location', // obf
					__( 'Invalid menu location.' ), // obf
					array( // obf
						'status'   => 400, // obf
						'location' => $v_eriot, // obf
					) // obf
				); // obf
			} // obf
			$v_wvhyp[ $v_eriot ] = $v_vnhtj; // obf
		} // obf
		$v_ufrjd = get_nav_menu_locations(); // obf
		foreach ( $v_ufrjd as $v_eriot => $v_mpagd ) { // obf
			if ( $v_mpagd === $v_vnhtj ) { // obf
				unset( $v_ufrjd[ $v_eriot ] ); // obf
			} // obf
		} // obf
		$v_egawg = array_merge( $v_ufrjd, $v_wvhyp ); // obf
		set_theme_mod( 'nav_menu_locations', $v_egawg ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves the term's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_lnqxq->schema ) { // obf
			return $v_lnqxq->add_additional_fields_schema( $v_lnqxq->schema ); // obf
		} // obf

		$v_rvfrl = parent::get_item_schema(); // obf
		unset( $v_rvfrl['properties']['count'], $v_rvfrl['properties']['link'], $v_rvfrl['properties']['taxonomy'] ); // obf

		$v_rvfrl['properties']['locations'] = array( // obf
			'description' => __( 'The locations assigned to the menu.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
			'context'     => array( 'view', 'edit' ), // obf
			'arg_options' => array( // obf
				'validate_callback' => static function ( $v_obnfa, $v_lohgc, $v_lppll ) { // obf
					$v_qqveh = rest_validate_request_arg( $v_obnfa, $v_lohgc, $v_lppll ); // obf

					if ( true !== $v_qqveh ) { // obf
						return $v_qqveh; // obf
					} // obf

					$v_obnfa = rest_sanitize_request_arg( $v_obnfa, $v_lohgc, $v_lppll ); // obf

					foreach ( $v_obnfa as $v_eriot ) { // obf
						if ( ! array_key_exists( $v_eriot, get_registered_nav_menus() ) ) { // obf
							return new WP_Error( // obf
								'rest_invalid_menu_location', // obf
								__( 'Invalid menu location.' ), // obf
								array( // obf
									'location' => $v_eriot, // obf
								) // obf
							); // obf
						} // obf
					} // obf

					return true; // obf
				}, // obf
			), // obf
		); // obf

		$v_rvfrl['properties']['auto_add'] = array( // obf
			'description' => __( 'Whether to automatically add top level pages to this menu.' ), // obf
			'context'     => array( 'view', 'edit' ), // obf
			'type'        => 'boolean', // obf
		); // obf

		$v_lnqxq->schema = $v_rvfrl; // obf

		return $v_lnqxq->add_additional_fields_schema( $v_lnqxq->schema ); // obf
	} // obf
} // obf