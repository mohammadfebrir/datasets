

<?php // obf
/** // obf
 * REST API: WP_REST_Menu_Items_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 */ // obf

/** // obf
 * Core class to access nav items via the REST API. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @see WP_REST_Posts_Controller // obf
 */ // obf
class WP_REST_Menu_Items_Controller extends WP_REST_Posts_Controller { // obf

	/** // obf
	 * Gets the nav menu item, if the ID is valid. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int $v_rrvbn Supplied ID. // obf
	 * @return object|WP_Error Post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_nav_menu_item( $v_rrvbn ) { // obf
		$v_yvfbr = $v_pulmr->get_post( $v_rrvbn ); // obf
		if ( is_wp_error( $v_yvfbr ) ) { // obf
			return $v_yvfbr; // obf
		} // obf

		return wp_setup_nav_menu_item( $v_yvfbr ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read menu items. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_vdrdr Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_vdrdr ) { // obf
		$v_yafeg = parent::get_items_permissions_check( $v_vdrdr ); // obf

		if ( true !== $v_yafeg ) { // obf
			return $v_yafeg; // obf
		} // obf

		return $v_pulmr->check_has_read_only_access( $v_vdrdr ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a menu item if they have access to edit them. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_vdrdr Full details about the request. // obf
	 * @return bool|WP_Error True if the request has read access for the item, WP_Error object or false otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_vdrdr ) { // obf
		$v_mvmgu = parent::get_item_permissions_check( $v_vdrdr ); // obf

		if ( true !== $v_mvmgu ) { // obf
			return $v_mvmgu; // obf
		} // obf

		return $v_pulmr->check_has_read_only_access( $v_vdrdr ); // obf
	} // obf

	/** // obf
	 * Checks whether the current user has read permission for the endpoint. // obf
	 * // obf
	 * This allows for any user that can `edit_theme_options` or edit any REST API available post type. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_vdrdr Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	protected function check_has_read_only_access( $v_vdrdr ) { // obf
		/** // obf
		 * Filters whether the current user has read access to menu items via the REST API. // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param bool               $v_dwjhu Whether the current user has read access to menu items // obf
		 *                                             via the REST API. // obf
		 * @param WP_REST_Request    $v_vdrdr          Full details about the request. // obf
		 * @param WP_REST_Controller $v_gswcf       The current instance of the controller. // obf
		 */ // obf
		$v_dwjhu = apply_filters( 'rest_menu_read_access', false, $v_vdrdr, $v_pulmr ); // obf
		if ( $v_dwjhu ) { // obf
			return true; // obf
		} // obf

		if ( current_user_can( 'edit_theme_options' ) ) { // obf
			return true; // obf
		} // obf

		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf

		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_zrwsw ) { // obf
			if ( current_user_can( $v_zrwsw->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view', // obf
			__( 'Sorry, you are not allowed to view menu items.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Creates a single nav menu item. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_vdrdr Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_vdrdr ) { // obf
		if ( ! empty( $v_vdrdr['id'] ) ) { // obf
			return new WP_Error( 'rest_post_exists', __( 'Cannot create existing post.' ), array( 'status' => 400 ) ); // obf
		} // obf

		$v_rkjzi = $v_pulmr->prepare_item_for_database( $v_vdrdr ); // obf

		if ( is_wp_error( $v_rkjzi ) ) { // obf
			return $v_rkjzi; // obf
		} // obf
		$v_rkjzi = (array) $v_rkjzi; // obf

		$v_dpuko = wp_update_nav_menu_item( $v_rkjzi['menu-id'], $v_rkjzi['menu-item-db-id'], wp_slash( $v_rkjzi ), false ); // obf
		if ( is_wp_error( $v_dpuko ) ) { // obf
			if ( 'db_insert_error' === $v_dpuko->get_error_code() ) { // obf
				$v_dpuko->add_data( array( 'status' => 500 ) ); // obf
			} else { // obf
				$v_dpuko->add_data( array( 'status' => 400 ) ); // obf
			} // obf

			return $v_dpuko; // obf
		} // obf

		$v_okzzp = $v_pulmr->get_nav_menu_item( $v_dpuko ); // obf
		if ( is_wp_error( $v_okzzp ) ) { // obf
			$v_okzzp->add_data( array( 'status' => 404 ) ); // obf

			return $v_okzzp; // obf
		} // obf

		/** // obf
		 * Fires after a single menu item is created or updated via the REST API. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param object          $v_okzzp Inserted or updated menu item object. // obf
		 * @param WP_REST_Request $v_vdrdr       Request object. // obf
		 * @param bool            $v_bmhsj      True when creating a menu item, false when updating. // obf
		 */ // obf
		do_action( 'rest_insert_nav_menu_item', $v_okzzp, $v_vdrdr, true ); // obf

		$v_qadhb = $v_pulmr->get_item_schema(); // obf

		if ( ! empty( $v_qadhb['properties']['meta'] ) && isset( $v_vdrdr['meta'] ) ) { // obf
			$v_lllav = $v_pulmr->meta->update_value( $v_vdrdr['meta'], $v_dpuko ); // obf

			if ( is_wp_error( $v_lllav ) ) { // obf
				return $v_lllav; // obf
			} // obf
		} // obf

		$v_okzzp = $v_pulmr->get_nav_menu_item( $v_dpuko ); // obf
		$v_imktw = $v_pulmr->update_additional_fields_for_object( $v_okzzp, $v_vdrdr ); // obf

		if ( is_wp_error( $v_imktw ) ) { // obf
			return $v_imktw; // obf
		} // obf

		$v_vdrdr->set_param( 'context', 'edit' ); // obf

		/** // obf
		 * Fires after a single menu item is completely created or updated via the REST API. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param object          $v_okzzp Inserted or updated menu item object. // obf
		 * @param WP_REST_Request $v_vdrdr       Request object. // obf
		 * @param bool            $v_bmhsj      True when creating a menu item, false when updating. // obf
		 */ // obf
		do_action( 'rest_after_insert_nav_menu_item', $v_okzzp, $v_vdrdr, true ); // obf

		$v_yvfbr = get_post( $v_dpuko ); // obf
		wp_after_insert_post( $v_yvfbr, false, null ); // obf

		$v_palsl = $v_pulmr->prepare_item_for_response( $v_yvfbr, $v_vdrdr ); // obf
		$v_palsl = rest_ensure_response( $v_palsl ); // obf

		$v_palsl->set_status( 201 ); // obf
		$v_palsl->header( 'Location', rest_url( sprintf( '%s/%s/%d', $v_pulmr->namespace, $v_pulmr->rest_base, $v_dpuko ) ) ); // obf

		return $v_palsl; // obf
	} // obf

	/** // obf
	 * Updates a single nav menu item. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_vdrdr Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_vdrdr ) { // obf
		$v_esxmc = $v_pulmr->get_nav_menu_item( $v_vdrdr['id'] ); // obf
		if ( is_wp_error( $v_esxmc ) ) { // obf
			return $v_esxmc; // obf
		} // obf
		$v_ougts       = get_post( $v_vdrdr['id'] ); // obf
		$v_rkjzi = $v_pulmr->prepare_item_for_database( $v_vdrdr ); // obf

		if ( is_wp_error( $v_rkjzi ) ) { // obf
			return $v_rkjzi; // obf
		} // obf

		$v_rkjzi = (array) $v_rkjzi; // obf

		$v_dpuko = wp_update_nav_menu_item( $v_rkjzi['menu-id'], $v_rkjzi['menu-item-db-id'], wp_slash( $v_rkjzi ), false ); // obf

		if ( is_wp_error( $v_dpuko ) ) { // obf
			if ( 'db_update_error' === $v_dpuko->get_error_code() ) { // obf
				$v_dpuko->add_data( array( 'status' => 500 ) ); // obf
			} else { // obf
				$v_dpuko->add_data( array( 'status' => 400 ) ); // obf
			} // obf

			return $v_dpuko; // obf
		} // obf

		$v_okzzp = $v_pulmr->get_nav_menu_item( $v_dpuko ); // obf
		if ( is_wp_error( $v_okzzp ) ) { // obf
			$v_okzzp->add_data( array( 'status' => 404 ) ); // obf

			return $v_okzzp; // obf
		} // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-menu-items-controller.php */ // obf
		do_action( 'rest_insert_nav_menu_item', $v_okzzp, $v_vdrdr, false ); // obf

		$v_qadhb = $v_pulmr->get_item_schema(); // obf

		if ( ! empty( $v_qadhb['properties']['meta'] ) && isset( $v_vdrdr['meta'] ) ) { // obf
			$v_lllav = $v_pulmr->meta->update_value( $v_vdrdr['meta'], $v_okzzp->ID ); // obf

			if ( is_wp_error( $v_lllav ) ) { // obf
				return $v_lllav; // obf
			} // obf
		} // obf

		$v_yvfbr          = get_post( $v_dpuko ); // obf
		$v_okzzp = $v_pulmr->get_nav_menu_item( $v_dpuko ); // obf
		$v_imktw = $v_pulmr->update_additional_fields_for_object( $v_okzzp, $v_vdrdr ); // obf

		if ( is_wp_error( $v_imktw ) ) { // obf
			return $v_imktw; // obf
		} // obf

		$v_vdrdr->set_param( 'context', 'edit' ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-menu-items-controller.php */ // obf
		do_action( 'rest_after_insert_nav_menu_item', $v_okzzp, $v_vdrdr, false ); // obf

		wp_after_insert_post( $v_yvfbr, true, $v_ougts ); // obf

		$v_palsl = $v_pulmr->prepare_item_for_response( get_post( $v_dpuko ), $v_vdrdr ); // obf

		return rest_ensure_response( $v_palsl ); // obf
	} // obf

	/** // obf
	 * Deletes a single nav menu item. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_vdrdr Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error True on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_vdrdr ) { // obf
		$v_pklrg = $v_pulmr->get_nav_menu_item( $v_vdrdr['id'] ); // obf
		if ( is_wp_error( $v_pklrg ) ) { // obf
			return $v_pklrg; // obf
		} // obf

		// We don't support trashing for menu items. // obf
		if ( ! $v_vdrdr['force'] ) { // obf
			/* translators: %s: force=true */ // obf
			return new WP_Error( 'rest_trash_not_supported', sprintf( __( "Menu items do not support trashing. Set '%s' to delete." ), 'force=true' ), array( 'status' => 501 ) ); // obf
		} // obf

		$v_gxuji = $v_pulmr->prepare_item_for_response( get_post( $v_vdrdr['id'] ), $v_vdrdr ); // obf

		$v_xcagg = wp_delete_post( $v_vdrdr['id'], true ); // obf

		if ( ! $v_xcagg ) { // obf
			return new WP_Error( 'rest_cannot_delete', __( 'The post cannot be deleted.' ), array( 'status' => 500 ) ); // obf
		} // obf

		$v_palsl = new WP_REST_Response(); // obf
		$v_palsl->set_data( // obf
			array( // obf
				'deleted'  => true, // obf
				'previous' => $v_gxuji->get_data(), // obf
			) // obf
		); // obf

		/** // obf
		 * Fires immediately after a single menu item is deleted via the REST API. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param object          $v_okzzp Inserted or updated menu item object. // obf
		 * @param WP_REST_Response $v_palsl The response data. // obf
		 * @param WP_REST_Request $v_vdrdr       Request object. // obf
		 */ // obf
		do_action( 'rest_delete_nav_menu_item', $v_pklrg, $v_palsl, $v_vdrdr ); // obf

		return $v_palsl; // obf
	} // obf

	/** // obf
	 * Prepares a single nav menu item for create or update. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_vdrdr Request object. // obf
	 * // obf
	 * @return object|WP_Error // obf
	 */ // obf
	protected function prepare_item_for_database( $v_vdrdr ) { // obf
		$v_emjym = $v_vdrdr['id']; // obf
		$v_rzopq   = $v_pulmr->get_nav_menu_item( $v_emjym ); // obf
		// Need to persist the menu item data. See https://core.trac.wordpress.org/ticket/28138 // obf
		if ( ! is_wp_error( $v_rzopq ) ) { // obf
			// Correct the menu position if this was the first item. See https://core.trac.wordpress.org/ticket/28140 // obf
			$v_rjykk = ( 0 === $v_rzopq->menu_order ) ? 1 : $v_rzopq->menu_order; // obf

			$v_rkjzi = array( // obf
				'menu-item-db-id'       => $v_emjym, // obf
				'menu-item-object-id'   => $v_rzopq->object_id, // obf
				'menu-item-object'      => $v_rzopq->object, // obf
				'menu-item-parent-id'   => $v_rzopq->menu_item_parent, // obf
				'menu-item-position'    => $v_rjykk, // obf
				'menu-item-type'        => $v_rzopq->type, // obf
				'menu-item-title'       => $v_rzopq->title, // obf
				'menu-item-url'         => $v_rzopq->url, // obf
				'menu-item-description' => $v_rzopq->description, // obf
				'menu-item-attr-title'  => $v_rzopq->attr_title, // obf
				'menu-item-target'      => $v_rzopq->target, // obf
				'menu-item-classes'     => $v_rzopq->classes, // obf
				// Stored in the database as a string. // obf
				'menu-item-xfn'         => explode( ' ', $v_rzopq->xfn ), // obf
				'menu-item-status'      => $v_rzopq->post_status, // obf
				'menu-id'               => $v_pulmr->get_menu_id( $v_emjym ), // obf
			); // obf
		} else { // obf
			$v_rkjzi = array( // obf
				'menu-id'               => 0, // obf
				'menu-item-db-id'       => 0, // obf
				'menu-item-object-id'   => 0, // obf
				'menu-item-object'      => '', // obf
				'menu-item-parent-id'   => 0, // obf
				'menu-item-position'    => 1, // obf
				'menu-item-type'        => 'custom', // obf
				'menu-item-title'       => '', // obf
				'menu-item-url'         => '', // obf
				'menu-item-description' => '', // obf
				'menu-item-attr-title'  => '', // obf
				'menu-item-target'      => '', // obf
				'menu-item-classes'     => array(), // obf
				'menu-item-xfn'         => array(), // obf
				'menu-item-status'      => 'publish', // obf
			); // obf
		} // obf

		$v_utzkx = array( // obf
			'menu-item-db-id'       => 'id', // obf
			'menu-item-object-id'   => 'object_id', // obf
			'menu-item-object'      => 'object', // obf
			'menu-item-parent-id'   => 'parent', // obf
			'menu-item-position'    => 'menu_order', // obf
			'menu-item-type'        => 'type', // obf
			'menu-item-url'         => 'url', // obf
			'menu-item-description' => 'description', // obf
			'menu-item-attr-title'  => 'attr_title', // obf
			'menu-item-target'      => 'target', // obf
			'menu-item-classes'     => 'classes', // obf
			'menu-item-xfn'         => 'xfn', // obf
			'menu-item-status'      => 'status', // obf
		); // obf

		$v_qadhb = $v_pulmr->get_item_schema(); // obf

		foreach ( $v_utzkx as $v_nxffi => $v_jevck ) { // obf
			if ( isset( $v_vdrdr[ $v_jevck ] ) ) { // obf
				$v_rkjzi[ $v_nxffi ] = $v_vdrdr[ $v_jevck ]; // obf
			} // obf
		} // obf

		$v_hptxc = get_taxonomy( 'nav_menu' ); // obf
		$v_qivcd     = ! empty( $v_hptxc->rest_base ) ? $v_hptxc->rest_base : $v_hptxc->name; // obf
		// If menus submitted, cast to int. // obf
		if ( ! empty( $v_vdrdr[ $v_qivcd ] ) ) { // obf
			$v_rkjzi['menu-id'] = absint( $v_vdrdr[ $v_qivcd ] ); // obf
		} // obf

		// Nav menu title. // obf
		if ( ! empty( $v_qadhb['properties']['title'] ) && isset( $v_vdrdr['title'] ) ) { // obf
			if ( is_string( $v_vdrdr['title'] ) ) { // obf
				$v_rkjzi['menu-item-title'] = $v_vdrdr['title']; // obf
			} elseif ( ! empty( $v_vdrdr['title']['raw'] ) ) { // obf
				$v_rkjzi['menu-item-title'] = $v_vdrdr['title']['raw']; // obf
			} // obf
		} // obf

		$v_tryfv = new WP_Error(); // obf

		// Check if object id exists before saving. // obf
		if ( ! $v_rkjzi['menu-item-object'] ) { // obf
			// If taxonomy, check if term exists. // obf
			if ( 'taxonomy' === $v_rkjzi['menu-item-type'] ) { // obf
				$v_nxffi = get_term( absint( $v_rkjzi['menu-item-object-id'] ) ); // obf
				if ( empty( $v_nxffi ) || is_wp_error( $v_nxffi ) ) { // obf
					$v_tryfv->add( 'rest_term_invalid_id', __( 'Invalid term ID.' ), array( 'status' => 400 ) ); // obf
				} else { // obf
					$v_rkjzi['menu-item-object'] = get_term_field( 'taxonomy', $v_nxffi ); // obf
				} // obf
				// If post, check if post object exists. // obf
			} elseif ( 'post_type' === $v_rkjzi['menu-item-type'] ) { // obf
				$v_nxffi = get_post( absint( $v_rkjzi['menu-item-object-id'] ) ); // obf
				if ( empty( $v_nxffi ) ) { // obf
					$v_tryfv->add( 'rest_post_invalid_id', __( 'Invalid post ID.' ), array( 'status' => 400 ) ); // obf
				} else { // obf
					$v_rkjzi['menu-item-object'] = get_post_type( $v_nxffi ); // obf
				} // obf
			} // obf
		} // obf

		// If post type archive, check if post type exists. // obf
		if ( 'post_type_archive' === $v_rkjzi['menu-item-type'] ) { // obf
			$v_zrwsw = $v_rkjzi['menu-item-object'] ? $v_rkjzi['menu-item-object'] : false; // obf
			$v_nxffi  = get_post_type_object( $v_zrwsw ); // obf
			if ( ! $v_nxffi ) { // obf
				$v_tryfv->add( 'rest_post_invalid_type', __( 'Invalid post type.' ), array( 'status' => 400 ) ); // obf
			} // obf
		} // obf

		// Check if menu item is type custom, then title and url are required. // obf
		if ( 'custom' === $v_rkjzi['menu-item-type'] ) { // obf
			if ( '' === $v_rkjzi['menu-item-title'] ) { // obf
				$v_tryfv->add( 'rest_title_required', __( 'The title is required when using a custom menu item type.' ), array( 'status' => 400 ) ); // obf
			} // obf
			if ( empty( $v_rkjzi['menu-item-url'] ) ) { // obf
				$v_tryfv->add( 'rest_url_required', __( 'The url is required when using a custom menu item type.' ), array( 'status' => 400 ) ); // obf
			} // obf
		} // obf

		if ( $v_tryfv->has_errors() ) { // obf
			return $v_tryfv; // obf
		} // obf

		// The xfn and classes properties are arrays, but passed to wp_update_nav_menu_item as a string. // obf
		foreach ( array( 'menu-item-xfn', 'menu-item-classes' ) as $v_ghyww ) { // obf
			$v_rkjzi[ $v_ghyww ] = implode( ' ', $v_rkjzi[ $v_ghyww ] ); // obf
		} // obf

		// Only draft / publish are valid post status for menu items. // obf
		if ( 'publish' !== $v_rkjzi['menu-item-status'] ) { // obf
			$v_rkjzi['menu-item-status'] = 'draft'; // obf
		} // obf

		$v_rkjzi = (object) $v_rkjzi; // obf

		/** // obf
		 * Filters a menu item before it is inserted via the REST API. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param object          $v_rkjzi An object representing a single menu item prepared // obf
		 *                                           for inserting or updating the database. // obf
		 * @param WP_REST_Request $v_vdrdr           Request object. // obf
		 */ // obf
		return apply_filters( 'rest_pre_insert_nav_menu_item', $v_rkjzi, $v_vdrdr ); // obf
	} // obf

	/** // obf
	 * Prepares a single nav menu item output for response. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_Post         $v_uhthx    Post object. // obf
	 * @param WP_REST_Request $v_vdrdr Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_uhthx, $v_vdrdr ) { // obf
		// Base fields for every post. // obf
		$v_gtcag    = $v_pulmr->get_fields_for_response( $v_vdrdr ); // obf
		$v_pklrg = $v_pulmr->get_nav_menu_item( $v_uhthx->ID ); // obf
		$v_fhboi      = array(); // obf

		if ( rest_is_field_included( 'id', $v_gtcag ) ) { // obf
			$v_fhboi['id'] = $v_pklrg->ID; // obf
		} // obf

		if ( rest_is_field_included( 'title', $v_gtcag ) ) { // obf
			$v_fhboi['title'] = array(); // obf
		} // obf

		if ( rest_is_field_included( 'title.raw', $v_gtcag ) ) { // obf
			$v_fhboi['title']['raw'] = $v_pklrg->title; // obf
		} // obf

		if ( rest_is_field_included( 'title.rendered', $v_gtcag ) ) { // obf
			add_filter( 'protected_title_format', array( $v_pulmr, 'protected_title_format' ) ); // obf
			add_filter( 'private_title_format', array( $v_pulmr, 'protected_title_format' ) ); // obf

			/** This filter is documented in wp-includes/post-template.php */ // obf
			$v_anqdc = apply_filters( 'the_title', $v_pklrg->title, $v_pklrg->ID ); // obf

			$v_fhboi['title']['rendered'] = $v_anqdc; // obf

			remove_filter( 'protected_title_format', array( $v_pulmr, 'protected_title_format' ) ); // obf
			remove_filter( 'private_title_format', array( $v_pulmr, 'protected_title_format' ) ); // obf
		} // obf

		if ( rest_is_field_included( 'status', $v_gtcag ) ) { // obf
			$v_fhboi['status'] = $v_pklrg->post_status; // obf
		} // obf

		if ( rest_is_field_included( 'url', $v_gtcag ) ) { // obf
			$v_fhboi['url'] = $v_pklrg->url; // obf
		} // obf

		if ( rest_is_field_included( 'attr_title', $v_gtcag ) ) { // obf
			// Same as post_excerpt. // obf
			$v_fhboi['attr_title'] = $v_pklrg->attr_title; // obf
		} // obf

		if ( rest_is_field_included( 'description', $v_gtcag ) ) { // obf
			// Same as post_content. // obf
			$v_fhboi['description'] = $v_pklrg->description; // obf
		} // obf

		if ( rest_is_field_included( 'type', $v_gtcag ) ) { // obf
			$v_fhboi['type'] = $v_pklrg->type; // obf
		} // obf

		if ( rest_is_field_included( 'type_label', $v_gtcag ) ) { // obf
			$v_fhboi['type_label'] = $v_pklrg->type_label; // obf
		} // obf

		if ( rest_is_field_included( 'object', $v_gtcag ) ) { // obf
			$v_fhboi['object'] = $v_pklrg->object; // obf
		} // obf

		if ( rest_is_field_included( 'object_id', $v_gtcag ) ) { // obf
			// It is stored as a string, but should be exposed as an integer. // obf
			$v_fhboi['object_id'] = absint( $v_pklrg->object_id ); // obf
		} // obf

		if ( rest_is_field_included( 'parent', $v_gtcag ) ) { // obf
			// Same as post_parent, exposed as an integer. // obf
			$v_fhboi['parent'] = (int) $v_pklrg->menu_item_parent; // obf
		} // obf

		if ( rest_is_field_included( 'menu_order', $v_gtcag ) ) { // obf
			// Same as post_parent, exposed as an integer. // obf
			$v_fhboi['menu_order'] = (int) $v_pklrg->menu_order; // obf
		} // obf

		if ( rest_is_field_included( 'target', $v_gtcag ) ) { // obf
			$v_fhboi['target'] = $v_pklrg->target; // obf
		} // obf

		if ( rest_is_field_included( 'classes', $v_gtcag ) ) { // obf
			$v_fhboi['classes'] = (array) $v_pklrg->classes; // obf
		} // obf

		if ( rest_is_field_included( 'xfn', $v_gtcag ) ) { // obf
			$v_fhboi['xfn'] = array_map( 'sanitize_html_class', explode( ' ', $v_pklrg->xfn ) ); // obf
		} // obf

		if ( rest_is_field_included( 'invalid', $v_gtcag ) ) { // obf
			$v_fhboi['invalid'] = (bool) $v_pklrg->_invalid; // obf
		} // obf

		if ( rest_is_field_included( 'meta', $v_gtcag ) ) { // obf
			$v_fhboi['meta'] = $v_pulmr->meta->get_value( $v_pklrg->ID, $v_vdrdr ); // obf
		} // obf

		$v_ulxke = wp_list_filter( get_object_taxonomies( $v_pulmr->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf

		foreach ( $v_ulxke as $v_hptxc ) { // obf
			$v_qivcd = ! empty( $v_hptxc->rest_base ) ? $v_hptxc->rest_base : $v_hptxc->name; // obf

			if ( rest_is_field_included( $v_qivcd, $v_gtcag ) ) { // obf
				$v_xjebd = get_the_terms( $v_uhthx, $v_hptxc->name ); // obf
				if ( ! is_array( $v_xjebd ) ) { // obf
					continue; // obf
				} // obf
				$v_fpbei = $v_xjebd ? array_values( wp_list_pluck( $v_xjebd, 'term_id' ) ) : array(); // obf
				if ( 'nav_menu' === $v_hptxc->name ) { // obf
					$v_fhboi[ $v_qivcd ] = $v_fpbei ? array_shift( $v_fpbei ) : 0; // obf
				} else { // obf
					$v_fhboi[ $v_qivcd ] = $v_fpbei; // obf
				} // obf
			} // obf
		} // obf

		$v_dqtfx = ! empty( $v_vdrdr['context'] ) ? $v_vdrdr['context'] : 'view'; // obf
		$v_fhboi    = $v_pulmr->add_additional_fields_to_object( $v_fhboi, $v_vdrdr ); // obf
		$v_fhboi    = $v_pulmr->filter_response_by_context( $v_fhboi, $v_dqtfx ); // obf

		// Wrap the data in a response object. // obf
		$v_palsl = rest_ensure_response( $v_fhboi ); // obf

		if ( rest_is_field_included( '_links', $v_gtcag ) || rest_is_field_included( '_embedded', $v_gtcag ) ) { // obf
			$v_mmilx = $v_pulmr->prepare_links( $v_uhthx ); // obf
			$v_palsl->add_links( $v_mmilx ); // obf

			if ( ! empty( $v_mmilx['self']['href'] ) ) { // obf
				$v_dozfs = $v_pulmr->get_available_actions( $v_uhthx, $v_vdrdr ); // obf

				$v_eopbb = $v_mmilx['self']['href']; // obf

				foreach ( $v_dozfs as $v_qrxti ) { // obf
					$v_palsl->add_link( $v_qrxti, $v_eopbb ); // obf
				} // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the menu item data for a REST API response. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_palsl  The response object. // obf
		 * @param object           $v_pklrg Menu item setup by {@see wp_setup_nav_menu_item()}. // obf
		 * @param WP_REST_Request  $v_vdrdr   Request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_nav_menu_item', $v_palsl, $v_pklrg, $v_vdrdr ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_Post $v_yvfbr Post object. // obf
	 * @return array Links for the given post. // obf
	 */ // obf
	protected function prepare_links( $v_yvfbr ) { // obf
		$v_mmilx     = parent::prepare_links( $v_yvfbr ); // obf
		$v_pklrg = $v_pulmr->get_nav_menu_item( $v_yvfbr->ID ); // obf

		if ( empty( $v_pklrg->object_id ) ) { // obf
			return $v_mmilx; // obf
		} // obf

		$v_ahzgq = ''; // obf
		$v_obhlq = ''; // obf
		$v_ghyww  = $v_pklrg->type; // obf
		if ( 'post_type' === $v_pklrg->type ) { // obf
			$v_ahzgq = rest_get_route_for_post( $v_pklrg->object_id ); // obf
			$v_obhlq = get_post_type( $v_pklrg->object_id ); // obf
		} elseif ( 'taxonomy' === $v_pklrg->type ) { // obf
			$v_ahzgq = rest_get_route_for_term( $v_pklrg->object_id ); // obf
			$v_obhlq = get_term_field( 'taxonomy', $v_pklrg->object_id ); // obf
		} // obf

		if ( $v_ahzgq && $v_obhlq ) { // obf
			$v_mmilx['https://api.w.org/menu-item-object'][] = array( // obf
				'href'       => rest_url( $v_ahzgq ), // obf
				$v_ghyww         => $v_obhlq, // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		return $v_mmilx; // obf
	} // obf

	/** // obf
	 * Retrieves Link Description Objects that should be added to the Schema for the nav menu items collection. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_schema_links() { // obf
		$v_mmilx   = parent::get_schema_links(); // obf
		$v_tyemh    = rest_url( "{$v_pulmr->namespace}/{$v_pulmr->rest_base}/{id}" ); // obf
		$v_mmilx[] = array( // obf
			'rel'          => 'https://api.w.org/menu-item-object', // obf
			'title'        => __( 'Get linked object.' ), // obf
			'href'         => $v_tyemh, // obf
			'targetSchema' => array( // obf
				'type'       => 'object', // obf
				'properties' => array( // obf
					'object' => array( // obf
						'type' => 'integer', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		return $v_mmilx; // obf
	} // obf

	/** // obf
	 * Retrieves the nav menu item's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_pulmr->schema ) { // obf
			return $v_pulmr->add_additional_fields_schema( $v_pulmr->schema ); // obf
		} // obf

		$v_qadhb = array( // obf
			'$v_qadhb' => 'http://json-schema.org/draft-04/schema#', // obf
			'title'   => $v_pulmr->post_type, // obf
			'type'    => 'object', // obf
		); // obf

		$v_qadhb['properties']['title'] = array( // obf
			'description' => __( 'The title for the object.' ), // obf
			'type'        => array( 'string', 'object' ), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'properties'  => array( // obf
				'raw'      => array( // obf
					'description' => __( 'Title for the object, as it exists in the database.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
				), // obf
				'rendered' => array( // obf
					'description' => __( 'HTML title for the object, transformed for display.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		$v_qadhb['properties']['id'] = array( // obf
			'description' => __( 'Unique identifier for the object.' ), // obf
			'type'        => 'integer', // obf
			'default'     => 0, // obf
			'minimum'     => 0, // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_qadhb['properties']['type_label'] = array( // obf
			'description' => __( 'The singular label used to describe this type of menu item.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_qadhb['properties']['type'] = array( // obf
			'description' => __( 'The family of objects originally represented, such as "post_type" or "taxonomy".' ), // obf
			'type'        => 'string', // obf
			'enum'        => array( 'taxonomy', 'post_type', 'post_type_archive', 'custom' ), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'default'     => 'custom', // obf
		); // obf

		$v_qadhb['properties']['status'] = array( // obf
			'description' => __( 'A named status for the object.' ), // obf
			'type'        => 'string', // obf
			'enum'        => array_keys( get_post_stati( array( 'internal' => false ) ) ), // obf
			'default'     => 'publish', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
		); // obf

		$v_qadhb['properties']['parent'] = array( // obf
			'description' => __( 'The ID for the parent of the object.' ), // obf
			'type'        => 'integer', // obf
			'minimum'     => 0, // obf
			'default'     => 0, // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
		); // obf

		$v_qadhb['properties']['attr_title'] = array( // obf
			'description' => __( 'Text for the title attribute of the link element for this menu item.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'arg_options' => array( // obf
				'sanitize_callback' => 'sanitize_text_field', // obf
			), // obf
		); // obf

		$v_qadhb['properties']['classes'] = array( // obf
			'description' => __( 'Class names for the link element of this menu item.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'arg_options' => array( // obf
				'sanitize_callback' => static function ( $v_ofrtz ) { // obf
					return array_map( 'sanitize_html_class', wp_parse_list( $v_ofrtz ) ); // obf
				}, // obf
			), // obf
		); // obf

		$v_qadhb['properties']['description'] = array( // obf
			'description' => __( 'The description of this menu item.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'arg_options' => array( // obf
				'sanitize_callback' => 'sanitize_text_field', // obf
			), // obf
		); // obf

		$v_qadhb['properties']['menu_order'] = array( // obf
			'description' => __( 'The DB ID of the nav_menu_item that is this item\'s menu parent, if any, otherwise 0.' ), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'type'        => 'integer', // obf
			'minimum'     => 1, // obf
			'default'     => 1, // obf
		); // obf

		$v_qadhb['properties']['object'] = array( // obf
			'description' => __( 'The type of object originally represented, such as "category", "post", or "attachment".' ), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'type'        => 'string', // obf
			'arg_options' => array( // obf
				'sanitize_callback' => 'sanitize_key', // obf
			), // obf
		); // obf

		$v_qadhb['properties']['object_id'] = array( // obf
			'description' => __( 'The database ID of the original object this menu item represents, for example the ID for posts or the term_id for categories.' ), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'type'        => 'integer', // obf
			'minimum'     => 0, // obf
			'default'     => 0, // obf
		); // obf

		$v_qadhb['properties']['target'] = array( // obf
			'description' => __( 'The target attribute of the link element for this menu item.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'enum'        => array( // obf
				'_blank', // obf
				'', // obf
			), // obf
		); // obf

		$v_qadhb['properties']['url'] = array( // obf
			'description' => __( 'The URL to which this menu item points.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'uri', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'arg_options' => array( // obf
				'validate_callback' => static function ( $v_ijrnl ) { // obf
					if ( '' === $v_ijrnl ) { // obf
						return true; // obf
					} // obf

					if ( sanitize_url( $v_ijrnl ) ) { // obf
						return true; // obf
					} // obf

					return new WP_Error( // obf
						'rest_invalid_url', // obf
						__( 'Invalid URL.' ) // obf
					); // obf
				}, // obf
			), // obf
		); // obf

		$v_qadhb['properties']['xfn'] = array( // obf
			'description' => __( 'The XFN relationship expressed in the link of this menu item.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'arg_options' => array( // obf
				'sanitize_callback' => static function ( $v_ofrtz ) { // obf
					return array_map( 'sanitize_html_class', wp_parse_list( $v_ofrtz ) ); // obf
				}, // obf
			), // obf
		); // obf

		$v_qadhb['properties']['invalid'] = array( // obf
			'description' => __( 'Whether the menu item represents an object that no longer exists.' ), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'type'        => 'boolean', // obf
			'readonly'    => true, // obf
		); // obf

		$v_ulxke = wp_list_filter( get_object_taxonomies( $v_pulmr->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf

		foreach ( $v_ulxke as $v_hptxc ) { // obf
			$v_qivcd                          = ! empty( $v_hptxc->rest_base ) ? $v_hptxc->rest_base : $v_hptxc->name; // obf
			$v_qadhb['properties'][ $v_qivcd ] = array( // obf
				/* translators: %s: taxonomy name */ // obf
				'description' => sprintf( __( 'The terms assigned to the object in the %s taxonomy.' ), $v_hptxc->name ), // obf
				'type'        => 'array', // obf
				'items'       => array( // obf
					'type' => 'integer', // obf
				), // obf
				'context'     => array( 'view', 'edit' ), // obf
			); // obf

			if ( 'nav_menu' === $v_hptxc->name ) { // obf
				$v_qadhb['properties'][ $v_qivcd ]['type'] = 'integer'; // obf
				unset( $v_qadhb['properties'][ $v_qivcd ]['items'] ); // obf
			} // obf
		} // obf

		$v_qadhb['properties']['meta'] = $v_pulmr->meta->get_field_schema(); // obf

		$v_qhuju = $v_pulmr->get_schema_links(); // obf

		if ( $v_qhuju ) { // obf
			$v_qadhb['links'] = $v_qhuju; // obf
		} // obf

		$v_pulmr->schema = $v_qadhb; // obf

		return $v_pulmr->add_additional_fields_schema( $v_pulmr->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the nav menu items collection. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_fzytj = parent::get_collection_params(); // obf

		$v_fzytj['menu_order'] = array( // obf
			'description' => __( 'Limit result set to posts with a specific menu_order value.' ), // obf
			'type'        => 'integer', // obf
		); // obf

		$v_fzytj['order'] = array( // obf
			'description' => __( 'Order sort attribute ascending or descending.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'asc', // obf
			'enum'        => array( 'asc', 'desc' ), // obf
		); // obf

		$v_fzytj['orderby'] = array( // obf
			'description' => __( 'Sort collection by object attribute.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'menu_order', // obf
			'enum'        => array( // obf
				'author', // obf
				'date', // obf
				'id', // obf
				'include', // obf
				'modified', // obf
				'parent', // obf
				'relevance', // obf
				'slug', // obf
				'include_slugs', // obf
				'title', // obf
				'menu_order', // obf
			), // obf
		); // obf
		// Change default to 100 items. // obf
		$v_fzytj['per_page']['default'] = 100; // obf

		return $v_fzytj; // obf
	} // obf

	/** // obf
	 * Determines the allowed query_vars for a get_items() response and prepares // obf
	 * them for WP_Query. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array           $v_rqcdq Optional. Prepared WP_Query arguments. Default empty array. // obf
	 * @param WP_REST_Request $v_vdrdr       Optional. Full details about the request. // obf
	 * @return array Items query arguments. // obf
	 */ // obf
	protected function prepare_items_query( $v_rqcdq = array(), $v_vdrdr = null ) { // obf
		$v_zxjum = parent::prepare_items_query( $v_rqcdq, $v_vdrdr ); // obf

		// Map to proper WP_Query orderby param. // obf
		if ( isset( $v_zxjum['orderby'], $v_vdrdr['orderby'] ) ) { // obf
			$v_ygynt = array( // obf
				'id'            => 'ID', // obf
				'include'       => 'post__in', // obf
				'slug'          => 'post_name', // obf
				'include_slugs' => 'post_name__in', // obf
				'menu_order'    => 'menu_order', // obf
			); // obf

			if ( isset( $v_ygynt[ $v_vdrdr['orderby'] ] ) ) { // obf
				$v_zxjum['orderby'] = $v_ygynt[ $v_vdrdr['orderby'] ]; // obf
			} // obf
		} // obf

		$v_zxjum['update_menu_item_cache'] = true; // obf

		return $v_zxjum; // obf
	} // obf

	/** // obf
	 * Gets the id of the menu that the given menu item belongs to. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int $v_yxzmd Menu item id. // obf
	 * @return int // obf
	 */ // obf
	protected function get_menu_id( $v_yxzmd ) { // obf
		$v_lcsyx = wp_get_post_terms( $v_yxzmd, 'nav_menu', array( 'fields' => 'ids' ) ); // obf
		$v_hxglf  = 0; // obf
		if ( $v_lcsyx && ! is_wp_error( $v_lcsyx ) ) { // obf
			$v_hxglf = array_shift( $v_lcsyx ); // obf
		} // obf

		return $v_hxglf; // obf
	} // obf
} // obf