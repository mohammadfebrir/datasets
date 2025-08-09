

<?php // obf
/** // obf
 * REST API: WP_REST_Application_Passwords_Controller class // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST_API // obf
 * @since      5.6.0 // obf
 */ // obf

/** // obf
 * Core class to access a user's application passwords via the REST API. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @see   WP_REST_Controller // obf
 */ // obf
class WP_REST_Application_Passwords_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Application Passwords controller constructor. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_cnbjc->namespace = 'wp/v2'; // obf
		$v_cnbjc->rest_base = 'users/(?P<user_id>(?:[\d]+|me))/application-passwords'; // obf
	} // obf

	/** // obf
	 * Registers the REST API routes for the application passwords controller. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_cnbjc->namespace, // obf
			'/' . $v_cnbjc->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_cnbjc, 'get_items' ), // obf
					'permission_callback' => array( $v_cnbjc, 'get_items_permissions_check' ), // obf
					'args'                => $v_cnbjc->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_cnbjc, 'create_item' ), // obf
					'permission_callback' => array( $v_cnbjc, 'create_item_permissions_check' ), // obf
					'args'                => $v_cnbjc->get_endpoint_args_for_item_schema(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_cnbjc, 'delete_items' ), // obf
					'permission_callback' => array( $v_cnbjc, 'delete_items_permissions_check' ), // obf
				), // obf
				'schema' => array( $v_cnbjc, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_cnbjc->namespace, // obf
			'/' . $v_cnbjc->rest_base . '/introspect', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_cnbjc, 'get_current_item' ), // obf
					'permission_callback' => array( $v_cnbjc, 'get_current_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_cnbjc->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_cnbjc, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_cnbjc->namespace, // obf
			'/' . $v_cnbjc->rest_base . '/(?P<uuid>[\w\-]+)', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_cnbjc, 'get_item' ), // obf
					'permission_callback' => array( $v_cnbjc, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_cnbjc->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_cnbjc, 'update_item' ), // obf
					'permission_callback' => array( $v_cnbjc, 'update_item_permissions_check' ), // obf
					'args'                => $v_cnbjc->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_cnbjc, 'delete_item' ), // obf
					'permission_callback' => array( $v_cnbjc, 'delete_item_permissions_check' ), // obf
				), // obf
				'schema' => array( $v_cnbjc, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get application passwords. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		if ( ! current_user_can( 'list_app_passwords', $v_hmyan->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_list_application_passwords', // obf
				__( 'Sorry, you are not allowed to list application passwords for this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a collection of application passwords. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		$v_clwzz = WP_Application_Passwords::get_user_application_passwords( $v_hmyan->ID ); // obf
		$v_mjcob  = array(); // obf

		foreach ( $v_clwzz as $v_naeaz ) { // obf
			$v_mjcob[] = $v_cnbjc->prepare_response_for_collection( // obf
				$v_cnbjc->prepare_item_for_response( $v_naeaz, $v_hfuug ) // obf
			); // obf
		} // obf

		return new WP_REST_Response( $v_mjcob ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get a specific application password. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		if ( ! current_user_can( 'read_app_password', $v_hmyan->ID, $v_hfuug['uuid'] ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read_application_password', // obf
				__( 'Sorry, you are not allowed to read this application password.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves one application password from the collection. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_hfuug ) { // obf
		$v_naeaz = $v_cnbjc->get_application_password( $v_hfuug ); // obf

		if ( is_wp_error( $v_naeaz ) ) { // obf
			return $v_naeaz; // obf
		} // obf

		return $v_cnbjc->prepare_item_for_response( $v_naeaz, $v_hfuug ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to create application passwords. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		if ( ! current_user_can( 'create_app_password', $v_hmyan->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_create_application_passwords', // obf
				__( 'Sorry, you are not allowed to create application passwords for this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Creates an application password. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		$v_vofdw = $v_cnbjc->prepare_item_for_database( $v_hfuug ); // obf

		if ( is_wp_error( $v_vofdw ) ) { // obf
			return $v_vofdw; // obf
		} // obf

		$v_ugxok = WP_Application_Passwords::create_new_application_password( $v_hmyan->ID, wp_slash( (array) $v_vofdw ) ); // obf

		if ( is_wp_error( $v_ugxok ) ) { // obf
			return $v_ugxok; // obf
		} // obf

		$v_naeaz = $v_ugxok[0]; // obf
		$v_xypgz     = WP_Application_Passwords::get_user_application_password( $v_hmyan->ID, $v_ugxok[1]['uuid'] ); // obf

		$v_xypgz['new_password'] = WP_Application_Passwords::chunk_password( $v_naeaz ); // obf
		$v_cvtea        = $v_cnbjc->update_additional_fields_for_object( $v_xypgz, $v_hfuug ); // obf

		if ( is_wp_error( $v_cvtea ) ) { // obf
			return $v_cvtea; // obf
		} // obf

		/** // obf
		 * Fires after a single application password is completely created or updated via the REST API. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param array           $v_xypgz     Inserted or updated password item. // obf
		 * @param WP_REST_Request $v_hfuug  Request object. // obf
		 * @param bool            $v_rinjq True when creating an application password, false when updating. // obf
		 */ // obf
		do_action( 'rest_after_insert_application_password', $v_xypgz, $v_hfuug, true ); // obf

		$v_hfuug->set_param( 'context', 'edit' ); // obf
		$v_mjcob = $v_cnbjc->prepare_item_for_response( $v_xypgz, $v_hfuug ); // obf

		$v_mjcob->set_status( 201 ); // obf
		$v_mjcob->header( 'Location', $v_mjcob->get_links()['self'][0]['href'] ); // obf

		return $v_mjcob; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to update application passwords. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		if ( ! current_user_can( 'edit_app_password', $v_hmyan->ID, $v_hfuug['uuid'] ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit_application_password', // obf
				__( 'Sorry, you are not allowed to edit this application password.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates an application password. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		$v_xypgz = $v_cnbjc->get_application_password( $v_hfuug ); // obf

		if ( is_wp_error( $v_xypgz ) ) { // obf
			return $v_xypgz; // obf
		} // obf

		$v_vofdw = $v_cnbjc->prepare_item_for_database( $v_hfuug ); // obf

		if ( is_wp_error( $v_vofdw ) ) { // obf
			return $v_vofdw; // obf
		} // obf

		$v_rvvpg = WP_Application_Passwords::update_application_password( $v_hmyan->ID, $v_xypgz['uuid'], wp_slash( (array) $v_vofdw ) ); // obf

		if ( is_wp_error( $v_rvvpg ) ) { // obf
			return $v_rvvpg; // obf
		} // obf

		$v_cvtea = $v_cnbjc->update_additional_fields_for_object( $v_xypgz, $v_hfuug ); // obf

		if ( is_wp_error( $v_cvtea ) ) { // obf
			return $v_cvtea; // obf
		} // obf

		$v_xypgz = WP_Application_Passwords::get_user_application_password( $v_hmyan->ID, $v_xypgz['uuid'] ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-application-passwords-controller.php */ // obf
		do_action( 'rest_after_insert_application_password', $v_xypgz, $v_hfuug, false ); // obf

		$v_hfuug->set_param( 'context', 'edit' ); // obf
		return $v_cnbjc->prepare_item_for_response( $v_xypgz, $v_hfuug ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete all application passwords for a user. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_items_permissions_check( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		if ( ! current_user_can( 'delete_app_passwords', $v_hmyan->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete_application_passwords', // obf
				__( 'Sorry, you are not allowed to delete application passwords for this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes all application passwords for a user. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_items( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		$v_krrzd = WP_Application_Passwords::delete_all_application_passwords( $v_hmyan->ID ); // obf

		if ( is_wp_error( $v_krrzd ) ) { // obf
			return $v_krrzd; // obf
		} // obf

		return new WP_REST_Response( // obf
			array( // obf
				'deleted' => true, // obf
				'count'   => $v_krrzd, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete a specific application password for a user. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		if ( ! current_user_can( 'delete_app_password', $v_hmyan->ID, $v_hfuug['uuid'] ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete_application_password', // obf
				__( 'Sorry, you are not allowed to delete this application password.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes an application password for a user. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		$v_naeaz = $v_cnbjc->get_application_password( $v_hfuug ); // obf

		if ( is_wp_error( $v_naeaz ) ) { // obf
			return $v_naeaz; // obf
		} // obf

		$v_hfuug->set_param( 'context', 'edit' ); // obf
		$v_dgrny = $v_cnbjc->prepare_item_for_response( $v_naeaz, $v_hfuug ); // obf
		$v_krrzd  = WP_Application_Passwords::delete_application_password( $v_hmyan->ID, $v_naeaz['uuid'] ); // obf

		if ( is_wp_error( $v_krrzd ) ) { // obf
			return $v_krrzd; // obf
		} // obf

		return new WP_REST_Response( // obf
			array( // obf
				'deleted'  => true, // obf
				'previous' => $v_dgrny->get_data(), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get the currently used application password for a user. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_current_item_permissions_check( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		if ( get_current_user_id() !== $v_hmyan->ID ) { // obf
			return new WP_Error( // obf
				'rest_cannot_introspect_app_password_for_non_authenticated_user', // obf
				__( 'The authenticated application password can only be introspected for the current user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves the application password being currently used for authentication of a user. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_current_item( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		$v_wvvmg = rest_get_authenticated_app_password(); // obf

		if ( ! $v_wvvmg ) { // obf
			return new WP_Error( // obf
				'rest_no_authenticated_app_password', // obf
				__( 'Cannot introspect application password.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_naeaz = WP_Application_Passwords::get_user_application_password( $v_hmyan->ID, $v_wvvmg ); // obf

		if ( ! $v_naeaz ) { // obf
			return new WP_Error( // obf
				'rest_application_password_not_found', // obf
				__( 'Application password not found.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		return $v_cnbjc->prepare_item_for_response( $v_naeaz, $v_hfuug ); // obf
	} // obf

	/** // obf
	 * Performs a permissions check for the request. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @deprecated 5.7.0 Use `edit_user` directly or one of the specific meta capabilities introduced in 5.7.0. // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug // obf
	 * @return true|WP_Error // obf
	 */ // obf
	protected function do_permissions_check( $v_hfuug ) { // obf
		_deprecated_function( __METHOD__, '5.7.0' ); // obf

		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		if ( ! current_user_can( 'edit_user', $v_hmyan->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_application_passwords', // obf
				__( 'Sorry, you are not allowed to manage application passwords for this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Prepares an application password for a create or update operation. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug Request object. // obf
	 * @return object|WP_Error The prepared item, or WP_Error object on failure. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_hfuug ) { // obf
		$v_vofdw = (object) array( // obf
			'name' => $v_hfuug['name'], // obf
		); // obf

		if ( $v_hfuug['app_id'] && ! $v_hfuug['uuid'] ) { // obf
			$v_vofdw->app_id = $v_hfuug['app_id']; // obf
		} // obf

		/** // obf
		 * Filters an application password before it is inserted via the REST API. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param stdClass        $v_vofdw An object representing a single application password prepared for inserting or updating the database. // obf
		 * @param WP_REST_Request $v_hfuug  Request object. // obf
		 */ // obf
		return apply_filters( 'rest_pre_insert_application_password', $v_vofdw, $v_hfuug ); // obf
	} // obf

	/** // obf
	 * Prepares the application password for the REST response. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array           $v_xypgz    WordPress representation of the item. // obf
	 * @param WP_REST_Request $v_hfuug Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function prepare_item_for_response( $v_xypgz, $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		$v_edowl = $v_cnbjc->get_fields_for_response( $v_hfuug ); // obf

		$v_vofdw = array( // obf
			'uuid'      => $v_xypgz['uuid'], // obf
			'app_id'    => empty( $v_xypgz['app_id'] ) ? '' : $v_xypgz['app_id'], // obf
			'name'      => $v_xypgz['name'], // obf
			'created'   => gmdate( 'Y-m-d\TH:i:s', $v_xypgz['created'] ), // obf
			'last_used' => $v_xypgz['last_used'] ? gmdate( 'Y-m-d\TH:i:s', $v_xypgz['last_used'] ) : null, // obf
			'last_ip'   => $v_xypgz['last_ip'] ? $v_xypgz['last_ip'] : null, // obf
		); // obf

		if ( isset( $v_xypgz['new_password'] ) ) { // obf
			$v_vofdw['password'] = $v_xypgz['new_password']; // obf
		} // obf

		$v_vofdw = $v_cnbjc->add_additional_fields_to_object( $v_vofdw, $v_hfuug ); // obf
		$v_vofdw = $v_cnbjc->filter_response_by_context( $v_vofdw, $v_hfuug['context'] ); // obf

		$v_mjcob = new WP_REST_Response( $v_vofdw ); // obf

		if ( rest_is_field_included( '_links', $v_edowl ) || rest_is_field_included( '_embedded', $v_edowl ) ) { // obf
			$v_mjcob->add_links( $v_cnbjc->prepare_links( $v_hmyan, $v_xypgz ) ); // obf
		} // obf

		/** // obf
		 * Filters the REST API response for an application password. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_mjcob The response object. // obf
		 * @param array            $v_xypgz     The application password array. // obf
		 * @param WP_REST_Request  $v_hfuug  The request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_application_password', $v_mjcob, $v_xypgz, $v_hfuug ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_User $v_hmyan The requested user. // obf
	 * @param array   $v_xypgz The application password. // obf
	 * @return array The list of links. // obf
	 */ // obf
	protected function prepare_links( WP_User $v_hmyan, $v_xypgz ) { // obf
		return array( // obf
			'self' => array( // obf
				'href' => rest_url( // obf
					sprintf( // obf
						'%s/users/%d/application-passwords/%s', // obf
						$v_cnbjc->namespace, // obf
						$v_hmyan->ID, // obf
						$v_xypgz['uuid'] // obf
					) // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the requested user. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug The request object. // obf
	 * @return WP_User|WP_Error The WordPress user associated with the request, or a WP_Error if none found. // obf
	 */ // obf
	protected function get_user( $v_hfuug ) { // obf
		if ( ! wp_is_application_passwords_available() ) { // obf
			return new WP_Error( // obf
				'application_passwords_disabled', // obf
				__( 'Application passwords are not available.' ), // obf
				array( 'status' => 501 ) // obf
			); // obf
		} // obf

		$v_raezj = new WP_Error( // obf
			'rest_user_invalid_id', // obf
			__( 'Invalid user ID.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		$v_hlseh = $v_hfuug['user_id']; // obf

		if ( 'me' === $v_hlseh ) { // obf
			if ( ! is_user_logged_in() ) { // obf
				return new WP_Error( // obf
					'rest_not_logged_in', // obf
					__( 'You are not currently logged in.' ), // obf
					array( 'status' => 401 ) // obf
				); // obf
			} // obf

			$v_hmyan = wp_get_current_user(); // obf
		} else { // obf
			$v_hlseh = (int) $v_hlseh; // obf

			if ( $v_hlseh <= 0 ) { // obf
				return $v_raezj; // obf
			} // obf

			$v_hmyan = get_userdata( $v_hlseh ); // obf
		} // obf

		if ( empty( $v_hmyan ) || ! $v_hmyan->exists() ) { // obf
			return $v_raezj; // obf
		} // obf

		if ( is_multisite() && ! user_can( $v_hmyan->ID, 'manage_sites' ) && ! is_user_member_of_blog( $v_hmyan->ID ) ) { // obf
			return $v_raezj; // obf
		} // obf

		if ( ! wp_is_application_passwords_available_for_user( $v_hmyan ) ) { // obf
			return new WP_Error( // obf
				'application_passwords_disabled_for_user', // obf
				__( 'Application passwords are not available for your account. Please contact the site administrator for assistance.' ), // obf
				array( 'status' => 501 ) // obf
			); // obf
		} // obf

		return $v_hmyan; // obf
	} // obf

	/** // obf
	 * Gets the requested application password for a user. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hfuug The request object. // obf
	 * @return array|WP_Error The application password details if found, a WP_Error otherwise. // obf
	 */ // obf
	protected function get_application_password( $v_hfuug ) { // obf
		$v_hmyan = $v_cnbjc->get_user( $v_hfuug ); // obf

		if ( is_wp_error( $v_hmyan ) ) { // obf
			return $v_hmyan; // obf
		} // obf

		$v_naeaz = WP_Application_Passwords::get_user_application_password( $v_hmyan->ID, $v_hfuug['uuid'] ); // obf

		if ( ! $v_naeaz ) { // obf
			return new WP_Error( // obf
				'rest_application_password_not_found', // obf
				__( 'Application password not found.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		return $v_naeaz; // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the collections. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array Query parameters for the collection. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context' => $v_cnbjc->get_context_param( array( 'default' => 'view' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the application password's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_cnbjc->schema ) { // obf
			return $v_cnbjc->add_additional_fields_schema( $v_cnbjc->schema ); // obf
		} // obf

		$v_cnbjc->schema = array( // obf
			'$v_wcwly'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'application-password', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'uuid'      => array( // obf
					'description' => __( 'The unique identifier for the application password.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uuid', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'app_id'    => array( // obf
					'description' => __( 'A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uuid', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'name'      => array( // obf
					'description' => __( 'The name of the application password.' ), // obf
					'type'        => 'string', // obf
					'required'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'minLength'   => 1, // obf
					'pattern'     => '.*\S.*', // obf
				), // obf
				'password'  => array( // obf
					'description' => __( 'The generated password. Only available after adding an application.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'created'   => array( // obf
					'description' => __( 'The GMT date the application password was created.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'last_used' => array( // obf
					'description' => __( 'The GMT date the application password was last used.' ), // obf
					'type'        => array( 'string', 'null' ), // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'last_ip'   => array( // obf
					'description' => __( 'The IP address the application password was last used by.' ), // obf
					'type'        => array( 'string', 'null' ), // obf
					'format'      => 'ip', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		return $v_cnbjc->add_additional_fields_schema( $v_cnbjc->schema ); // obf
	} // obf
} // obf