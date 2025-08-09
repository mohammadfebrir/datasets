

<?php // obf
/** // obf
 * REST API: WP_REST_Users_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to manage users via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Users_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Instance of a user meta fields object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var WP_REST_User_Meta_Fields // obf
	 */ // obf
	protected $v_yrfwx; // obf

	/** // obf
	 * Whether the controller supports batching. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_hhaws = array( 'v1' => true ); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_xbbhf->namespace = 'wp/v2'; // obf
		$v_xbbhf->rest_base = 'users'; // obf

		$v_xbbhf->meta = new WP_REST_User_Meta_Fields(); // obf
	} // obf

	/** // obf
	 * Registers the routes for users. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_xbbhf->namespace, // obf
			'/' . $v_xbbhf->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_xbbhf, 'get_items' ), // obf
					'permission_callback' => array( $v_xbbhf, 'get_items_permissions_check' ), // obf
					'args'                => $v_xbbhf->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_xbbhf, 'create_item' ), // obf
					'permission_callback' => array( $v_xbbhf, 'create_item_permissions_check' ), // obf
					'args'                => $v_xbbhf->get_endpoint_args_for_item_schema( WP_REST_Server::CREATABLE ), // obf
				), // obf
				'allow_batch' => $v_xbbhf->allow_batch, // obf
				'schema'      => array( $v_xbbhf, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_xbbhf->namespace, // obf
			'/' . $v_xbbhf->rest_base . '/(?P<id>[\d]+)', // obf
			array( // obf
				'args'        => array( // obf
					'id' => array( // obf
						'description' => __( 'Unique identifier for the user.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_xbbhf, 'get_item' ), // obf
					'permission_callback' => array( $v_xbbhf, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_xbbhf->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_xbbhf, 'update_item' ), // obf
					'permission_callback' => array( $v_xbbhf, 'update_item_permissions_check' ), // obf
					'args'                => $v_xbbhf->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_xbbhf, 'delete_item' ), // obf
					'permission_callback' => array( $v_xbbhf, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force'    => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Required to be true, as users do not support trashing.' ), // obf
						), // obf
						'reassign' => array( // obf
							'type'              => 'integer', // obf
							'description'       => __( 'Reassign the deleted user\'s posts and links to this user ID.' ), // obf
							'required'          => true, // obf
							'sanitize_callback' => array( $v_xbbhf, 'check_reassign' ), // obf
						), // obf
					), // obf
				), // obf
				'allow_batch' => $v_xbbhf->allow_batch, // obf
				'schema'      => array( $v_xbbhf, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_xbbhf->namespace, // obf
			'/' . $v_xbbhf->rest_base . '/me', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'permission_callback' => '__return_true', // obf
					'callback'            => array( $v_xbbhf, 'get_current_item' ), // obf
					'args'                => array( // obf
						'context' => $v_xbbhf->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_xbbhf, 'update_current_item' ), // obf
					'permission_callback' => array( $v_xbbhf, 'update_current_item_permissions_check' ), // obf
					'args'                => $v_xbbhf->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_xbbhf, 'delete_current_item' ), // obf
					'permission_callback' => array( $v_xbbhf, 'delete_current_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force'    => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Required to be true, as users do not support trashing.' ), // obf
						), // obf
						'reassign' => array( // obf
							'type'              => 'integer', // obf
							'description'       => __( 'Reassign the deleted user\'s posts and links to this user ID.' ), // obf
							'required'          => true, // obf
							'sanitize_callback' => array( $v_xbbhf, 'check_reassign' ), // obf
						), // obf
					), // obf
				), // obf
				'schema' => array( $v_xbbhf, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks for a valid value for the reassign parameter when deleting users. // obf
	 * // obf
	 * The value can be an integer, 'false', false, or ''. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int|bool        $v_jnsuy   The value passed to the reassign parameter. // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @param string          $v_dxksj   The parameter that is being sanitized. // obf
	 * @return int|bool|WP_Error // obf
	 */ // obf
	public function check_reassign( $v_jnsuy, $v_dipcb, $v_dxksj ) { // obf
		if ( is_numeric( $v_jnsuy ) ) { // obf
			return $v_jnsuy; // obf
		} // obf

		if ( empty( $v_jnsuy ) || false === $v_jnsuy || 'false' === $v_jnsuy ) { // obf
			return false; // obf
		} // obf

		return new WP_Error( // obf
			'rest_invalid_param', // obf
			__( 'Invalid user parameter(s).' ), // obf
			array( 'status' => 400 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Permissions check for getting all users. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, otherwise WP_Error object. // obf
	 */ // obf
	public function get_items_permissions_check( $v_dipcb ) { // obf
		// Check if roles is specified in GET request and if user can list users. // obf
		if ( ! empty( $v_dipcb['roles'] ) && ! current_user_can( 'list_users' ) ) { // obf
			return new WP_Error( // obf
				'rest_user_cannot_view', // obf
				__( 'Sorry, you are not allowed to filter users by role.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		// Check if capabilities is specified in GET request and if user can list users. // obf
		if ( ! empty( $v_dipcb['capabilities'] ) && ! current_user_can( 'list_users' ) ) { // obf
			return new WP_Error( // obf
				'rest_user_cannot_view', // obf
				__( 'Sorry, you are not allowed to filter users by capability.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( 'edit' === $v_dipcb['context'] && ! current_user_can( 'list_users' ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to list users.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( in_array( $v_dipcb['orderby'], array( 'email', 'registered_date' ), true ) && ! current_user_can( 'list_users' ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_orderby', // obf
				__( 'Sorry, you are not allowed to order users by this parameter.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( 'authors' === $v_dipcb['who'] ) { // obf
			$v_eugvi = get_post_types( array( 'show_in_rest' => true ), 'objects' ); // obf

			foreach ( $v_eugvi as $v_mdaqv ) { // obf
				if ( post_type_supports( $v_mdaqv->name, 'author' ) // obf
					&& current_user_can( $v_mdaqv->cap->edit_posts ) ) { // obf
					return true; // obf
				} // obf
			} // obf

			return new WP_Error( // obf
				'rest_forbidden_who', // obf
				__( 'Sorry, you are not allowed to query users by this parameter.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves all users. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.8.0 Added support for the search_columns query param. // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_dipcb ) { // obf

		// Retrieve the list of registered collection query parameters. // obf
		$v_rwdgy = $v_xbbhf->get_collection_params(); // obf

		/* // obf
		 * This array defines mappings between public API query parameters whose // obf
		 * values are accepted as-passed, and their internal WP_Query parameter // obf
		 * name equivalents (some are the same). Only values which are also // obf
		 * present in $v_rwdgy will be set. // obf
		 */ // obf
		$v_avdkk = array( // obf
			'exclude'      => 'exclude', // obf
			'include'      => 'include', // obf
			'order'        => 'order', // obf
			'per_page'     => 'number', // obf
			'search'       => 'search', // obf
			'roles'        => 'role__in', // obf
			'capabilities' => 'capability__in', // obf
			'slug'         => 'nicename__in', // obf
		); // obf

		$v_xfrmk = array(); // obf

		/* // obf
		 * For each known parameter which is both registered and present in the request, // obf
		 * set the parameter's value on the query $v_xfrmk. // obf
		 */ // obf
		foreach ( $v_avdkk as $v_bsaeh => $v_rovwa ) { // obf
			if ( isset( $v_rwdgy[ $v_bsaeh ], $v_dipcb[ $v_bsaeh ] ) ) { // obf
				$v_xfrmk[ $v_rovwa ] = $v_dipcb[ $v_bsaeh ]; // obf
			} // obf
		} // obf

		if ( isset( $v_rwdgy['offset'] ) && ! empty( $v_dipcb['offset'] ) ) { // obf
			$v_xfrmk['offset'] = $v_dipcb['offset']; // obf
		} else { // obf
			$v_xfrmk['offset'] = ( $v_dipcb['page'] - 1 ) * $v_xfrmk['number']; // obf
		} // obf

		if ( isset( $v_rwdgy['orderby'] ) ) { // obf
			$v_iftqt        = array( // obf
				'id'              => 'ID', // obf
				'include'         => 'include', // obf
				'name'            => 'display_name', // obf
				'registered_date' => 'registered', // obf
				'slug'            => 'user_nicename', // obf
				'include_slugs'   => 'nicename__in', // obf
				'email'           => 'user_email', // obf
				'url'             => 'user_url', // obf
			); // obf
			$v_xfrmk['orderby'] = $v_iftqt[ $v_dipcb['orderby'] ]; // obf
		} // obf

		if ( isset( $v_rwdgy['who'] ) && ! empty( $v_dipcb['who'] ) && 'authors' === $v_dipcb['who'] ) { // obf
			$v_xfrmk['who'] = 'authors'; // obf
		} elseif ( ! current_user_can( 'list_users' ) ) { // obf
			$v_xfrmk['has_published_posts'] = get_post_types( array( 'show_in_rest' => true ), 'names' ); // obf
		} // obf

		if ( ! empty( $v_dipcb['has_published_posts'] ) ) { // obf
			$v_xfrmk['has_published_posts'] = ( true === $v_dipcb['has_published_posts'] ) // obf
				? get_post_types( array( 'show_in_rest' => true ), 'names' ) // obf
				: (array) $v_dipcb['has_published_posts']; // obf
		} // obf

		if ( ! empty( $v_xfrmk['search'] ) ) { // obf
			if ( ! current_user_can( 'list_users' ) ) { // obf
				$v_xfrmk['search_columns'] = array( 'ID', 'user_login', 'user_nicename', 'display_name' ); // obf
			} // obf
			$v_jngnq         = $v_dipcb->get_param( 'search_columns' ); // obf
			$v_gtmvm          = isset( $v_xfrmk['search_columns'] ) // obf
				? $v_xfrmk['search_columns'] // obf
				: array( 'ID', 'user_login', 'user_nicename', 'user_email', 'display_name' ); // obf
			$v_prgbj = array( // obf
				'id'       => 'ID', // obf
				'username' => 'user_login', // obf
				'slug'     => 'user_nicename', // obf
				'email'    => 'user_email', // obf
				'name'     => 'display_name', // obf
			); // obf
			$v_jngnq         = array_map( // obf
				static function ( $v_zawow ) use ( $v_prgbj ) { // obf
					return $v_prgbj[ $v_zawow ]; // obf
				}, // obf
				$v_jngnq // obf
			); // obf
			$v_jngnq         = array_intersect( $v_jngnq, $v_gtmvm ); // obf
			if ( ! empty( $v_jngnq ) ) { // obf
				$v_xfrmk['search_columns'] = $v_jngnq; // obf
			} // obf
			$v_xfrmk['search'] = '*' . $v_xfrmk['search'] . '*'; // obf
		} // obf

		$v_radxo = $v_dipcb->is_method( 'HEAD' ); // obf
		if ( $v_radxo ) { // obf
			// Force the 'fields' argument. For HEAD requests, only user IDs are required. // obf
			$v_xfrmk['fields'] = 'id'; // obf
		} // obf
		/** // obf
		 * Filters WP_User_Query arguments when querying users via the REST API. // obf
		 * // obf
		 * @link https://developer.wordpress.org/reference/classes/wp_user_query/ // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param array           $v_xfrmk Array of arguments for WP_User_Query. // obf
		 * @param WP_REST_Request $v_dipcb       The REST API request. // obf
		 */ // obf
		$v_xfrmk = apply_filters( 'rest_user_query', $v_xfrmk, $v_dipcb ); // obf

		$v_etwhh = new WP_User_Query( $v_xfrmk ); // obf

		if ( ! $v_radxo ) { // obf
			$v_wkukp = array(); // obf

			foreach ( $v_etwhh->get_results() as $v_fvoqx ) { // obf
				$v_cnrfv    = $v_xbbhf->prepare_item_for_response( $v_fvoqx, $v_dipcb ); // obf
				$v_wkukp[] = $v_xbbhf->prepare_response_for_collection( $v_cnrfv ); // obf
			} // obf
		} // obf

		$v_gbyxo = $v_radxo ? new WP_REST_Response( array() ) : rest_ensure_response( $v_wkukp ); // obf

		// Store pagination values for headers then unset for count query. // obf
		$v_zbhij = (int) $v_xfrmk['number']; // obf
		$v_nrqcf     = (int) ceil( ( ( (int) $v_xfrmk['offset'] ) / $v_zbhij ) + 1 ); // obf

		$v_xfrmk['fields'] = 'ID'; // obf

		$v_kmsgo = $v_etwhh->get_total(); // obf

		if ( $v_kmsgo < 1 ) { // obf
			// Out-of-bounds, run the query again without LIMIT for total count. // obf
			unset( $v_xfrmk['number'], $v_xfrmk['offset'] ); // obf
			$v_xbgmv = new WP_User_Query( $v_xfrmk ); // obf
			$v_kmsgo = $v_xbgmv->get_total(); // obf
		} // obf

		$v_gbyxo->header( 'X-WP-Total', (int) $v_kmsgo ); // obf

		$v_amuxm = (int) ceil( $v_kmsgo / $v_zbhij ); // obf

		$v_gbyxo->header( 'X-WP-TotalPages', $v_amuxm ); // obf

		$v_psbdg = add_query_arg( urlencode_deep( $v_dipcb->get_query_params() ), rest_url( sprintf( '%s/%s', $v_xbbhf->namespace, $v_xbbhf->rest_base ) ) ); // obf
		if ( $v_nrqcf > 1 ) { // obf
			$v_ojhkg = $v_nrqcf - 1; // obf

			if ( $v_ojhkg > $v_amuxm ) { // obf
				$v_ojhkg = $v_amuxm; // obf
			} // obf

			$v_wuyvl = add_query_arg( 'page', $v_ojhkg, $v_psbdg ); // obf
			$v_gbyxo->link_header( 'prev', $v_wuyvl ); // obf
		} // obf
		if ( $v_amuxm > $v_nrqcf ) { // obf
			$v_wvebp = $v_nrqcf + 1; // obf
			$v_vttcy = add_query_arg( 'page', $v_wvebp, $v_psbdg ); // obf

			$v_gbyxo->link_header( 'next', $v_vttcy ); // obf
		} // obf

		return $v_gbyxo; // obf
	} // obf

	/** // obf
	 * Get the user, if the ID is valid. // obf
	 * // obf
	 * @since 4.7.2 // obf
	 * // obf
	 * @param int $v_lnqnn Supplied ID. // obf
	 * @return WP_User|WP_Error True if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_user( $v_lnqnn ) { // obf
		$v_ulgke = new WP_Error( // obf
			'rest_user_invalid_id', // obf
			__( 'Invalid user ID.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		if ( (int) $v_lnqnn <= 0 ) { // obf
			return $v_ulgke; // obf
		} // obf

		$v_fvoqx = get_userdata( (int) $v_lnqnn ); // obf
		if ( empty( $v_fvoqx ) || ! $v_fvoqx->exists() ) { // obf
			return $v_ulgke; // obf
		} // obf

		if ( is_multisite() && ! is_user_member_of_blog( $v_fvoqx->ID ) ) { // obf
			return $v_ulgke; // obf
		} // obf

		return $v_fvoqx; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object. // obf
	 */ // obf
	public function get_item_permissions_check( $v_dipcb ) { // obf
		$v_fvoqx = $v_xbbhf->get_user( $v_dipcb['id'] ); // obf
		if ( is_wp_error( $v_fvoqx ) ) { // obf
			return $v_fvoqx; // obf
		} // obf

		$v_eugvi = get_post_types( array( 'show_in_rest' => true ), 'names' ); // obf

		if ( get_current_user_id() === $v_fvoqx->ID ) { // obf
			return true; // obf
		} // obf

		if ( 'edit' === $v_dipcb['context'] && ! current_user_can( 'list_users' ) ) { // obf
			return new WP_Error( // obf
				'rest_user_cannot_view', // obf
				__( 'Sorry, you are not allowed to list users.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} elseif ( ! count_user_posts( $v_fvoqx->ID, $v_eugvi ) && ! current_user_can( 'edit_user', $v_fvoqx->ID ) && ! current_user_can( 'list_users' ) ) { // obf
			return new WP_Error( // obf
				'rest_user_cannot_view', // obf
				__( 'Sorry, you are not allowed to list users.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a single user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_dipcb ) { // obf
		$v_fvoqx = $v_xbbhf->get_user( $v_dipcb['id'] ); // obf
		if ( is_wp_error( $v_fvoqx ) ) { // obf
			return $v_fvoqx; // obf
		} // obf

		$v_fvoqx     = $v_xbbhf->prepare_item_for_response( $v_fvoqx, $v_dipcb ); // obf
		$v_gbyxo = rest_ensure_response( $v_fvoqx ); // obf

		return $v_gbyxo; // obf
	} // obf

	/** // obf
	 * Retrieves the current user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_current_item( $v_dipcb ) { // obf
		$v_ajool = get_current_user_id(); // obf

		if ( empty( $v_ajool ) ) { // obf
			return new WP_Error( // obf
				'rest_not_logged_in', // obf
				__( 'You are not currently logged in.' ), // obf
				array( 'status' => 401 ) // obf
			); // obf
		} // obf

		$v_fvoqx     = wp_get_current_user(); // obf
		$v_gbyxo = $v_xbbhf->prepare_item_for_response( $v_fvoqx, $v_dipcb ); // obf
		$v_gbyxo = rest_ensure_response( $v_gbyxo ); // obf

		return $v_gbyxo; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access create users. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_dipcb ) { // obf

		if ( ! current_user_can( 'create_users' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_create_user', // obf
				__( 'Sorry, you are not allowed to create new users.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Creates a single user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_dipcb ) { // obf
		if ( ! empty( $v_dipcb['id'] ) ) { // obf
			return new WP_Error( // obf
				'rest_user_exists', // obf
				__( 'Cannot create existing user.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_imcqn = $v_xbbhf->get_item_schema(); // obf

		if ( ! empty( $v_dipcb['roles'] ) && ! empty( $v_imcqn['properties']['roles'] ) ) { // obf
			$v_cmrjj = $v_xbbhf->check_role_update( $v_dipcb['id'], $v_dipcb['roles'] ); // obf

			if ( is_wp_error( $v_cmrjj ) ) { // obf
				return $v_cmrjj; // obf
			} // obf
		} // obf

		$v_fvoqx = $v_xbbhf->prepare_item_for_database( $v_dipcb ); // obf

		if ( is_multisite() ) { // obf
			$v_kkxry = wpmu_validate_user_signup( $v_fvoqx->user_login, $v_fvoqx->user_email ); // obf

			if ( is_wp_error( $v_kkxry['errors'] ) && $v_kkxry['errors']->has_errors() ) { // obf
				$v_ulgke = new WP_Error( // obf
					'rest_invalid_param', // obf
					__( 'Invalid user parameter(s).' ), // obf
					array( 'status' => 400 ) // obf
				); // obf

				foreach ( $v_kkxry['errors']->errors as $v_xvnde => $v_fjssp ) { // obf
					foreach ( $v_fjssp as $v_rmqyc ) { // obf
						$v_ulgke->add( $v_xvnde, $v_rmqyc ); // obf
					} // obf

					$v_nxbzl = $v_ulgke->get_error_data( $v_xvnde ); // obf

					if ( $v_nxbzl ) { // obf
						$v_ulgke->add_data( $v_nxbzl, $v_xvnde ); // obf
					} // obf
				} // obf
				return $v_ulgke; // obf
			} // obf
		} // obf

		if ( is_multisite() ) { // obf
			$v_tgzkf = wpmu_create_user( $v_fvoqx->user_login, $v_fvoqx->user_pass, $v_fvoqx->user_email ); // obf

			if ( ! $v_tgzkf ) { // obf
				return new WP_Error( // obf
					'rest_user_create', // obf
					__( 'Error creating new user.' ), // obf
					array( 'status' => 500 ) // obf
				); // obf
			} // obf

			$v_fvoqx->ID = $v_tgzkf; // obf
			$v_tgzkf  = wp_update_user( wp_slash( (array) $v_fvoqx ) ); // obf

			if ( is_wp_error( $v_tgzkf ) ) { // obf
				return $v_tgzkf; // obf
			} // obf

			$v_zfcfq = add_user_to_blog( get_site()->id, $v_tgzkf, '' ); // obf
			if ( is_wp_error( $v_zfcfq ) ) { // obf
				return $v_zfcfq; // obf
			} // obf
		} else { // obf
			$v_tgzkf = wp_insert_user( wp_slash( (array) $v_fvoqx ) ); // obf

			if ( is_wp_error( $v_tgzkf ) ) { // obf
				return $v_tgzkf; // obf
			} // obf
		} // obf

		$v_fvoqx = get_user_by( 'id', $v_tgzkf ); // obf

		/** // obf
		 * Fires immediately after a user is created or updated via the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_User         $v_fvoqx     Inserted or updated user object. // obf
		 * @param WP_REST_Request $v_dipcb  Request object. // obf
		 * @param bool            $v_xeuky True when creating a user, false when updating. // obf
		 */ // obf
		do_action( 'rest_insert_user', $v_fvoqx, $v_dipcb, true ); // obf

		if ( ! empty( $v_dipcb['roles'] ) && ! empty( $v_imcqn['properties']['roles'] ) ) { // obf
			array_map( array( $v_fvoqx, 'add_role' ), $v_dipcb['roles'] ); // obf
		} // obf

		if ( ! empty( $v_imcqn['properties']['meta'] ) && isset( $v_dipcb['meta'] ) ) { // obf
			$v_weiun = $v_xbbhf->meta->update_value( $v_dipcb['meta'], $v_tgzkf ); // obf

			if ( is_wp_error( $v_weiun ) ) { // obf
				return $v_weiun; // obf
			} // obf
		} // obf

		$v_fvoqx          = get_user_by( 'id', $v_tgzkf ); // obf
		$v_tekge = $v_xbbhf->update_additional_fields_for_object( $v_fvoqx, $v_dipcb ); // obf

		if ( is_wp_error( $v_tekge ) ) { // obf
			return $v_tekge; // obf
		} // obf

		$v_dipcb->set_param( 'context', 'edit' ); // obf

		/** // obf
		 * Fires after a user is completely created or updated via the REST API. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * // obf
		 * @param WP_User         $v_fvoqx     Inserted or updated user object. // obf
		 * @param WP_REST_Request $v_dipcb  Request object. // obf
		 * @param bool            $v_xeuky True when creating a user, false when updating. // obf
		 */ // obf
		do_action( 'rest_after_insert_user', $v_fvoqx, $v_dipcb, true ); // obf

		$v_gbyxo = $v_xbbhf->prepare_item_for_response( $v_fvoqx, $v_dipcb ); // obf
		$v_gbyxo = rest_ensure_response( $v_gbyxo ); // obf

		$v_gbyxo->set_status( 201 ); // obf
		$v_gbyxo->header( 'Location', rest_url( sprintf( '%s/%s/%d', $v_xbbhf->namespace, $v_xbbhf->rest_base, $v_tgzkf ) ) ); // obf

		return $v_gbyxo; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to update a user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_dipcb ) { // obf
		$v_fvoqx = $v_xbbhf->get_user( $v_dipcb['id'] ); // obf
		if ( is_wp_error( $v_fvoqx ) ) { // obf
			return $v_fvoqx; // obf
		} // obf

		if ( ! empty( $v_dipcb['roles'] ) ) { // obf
			if ( ! current_user_can( 'promote_user', $v_fvoqx->ID ) ) { // obf
				return new WP_Error( // obf
					'rest_cannot_edit_roles', // obf
					__( 'Sorry, you are not allowed to edit roles of this user.' ), // obf
					array( 'status' => rest_authorization_required_code() ) // obf
				); // obf
			} // obf

			$v_lafxh = array_keys( $v_dipcb->get_params() ); // obf
			sort( $v_lafxh ); // obf
			/* // obf
			 * If only 'id' and 'roles' are specified (we are only trying to // obf
			 * edit roles), then only the 'promote_user' cap is required. // obf
			 */ // obf
			if ( array( 'id', 'roles' ) === $v_lafxh ) { // obf
				return true; // obf
			} // obf
		} // obf

		if ( ! current_user_can( 'edit_user', $v_fvoqx->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit', // obf
				__( 'Sorry, you are not allowed to edit this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates a single user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_dipcb ) { // obf
		$v_fvoqx = $v_xbbhf->get_user( $v_dipcb['id'] ); // obf
		if ( is_wp_error( $v_fvoqx ) ) { // obf
			return $v_fvoqx; // obf
		} // obf

		$v_lnqnn = $v_fvoqx->ID; // obf

		$v_fjmxf = false; // obf
		if ( is_string( $v_dipcb['email'] ) ) { // obf
			$v_fjmxf = email_exists( $v_dipcb['email'] ); // obf
		} // obf

		if ( $v_fjmxf && $v_fjmxf !== $v_lnqnn ) { // obf
			return new WP_Error( // obf
				'rest_user_invalid_email', // obf
				__( 'Invalid email address.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_dipcb['username'] ) && $v_dipcb['username'] !== $v_fvoqx->user_login ) { // obf
			return new WP_Error( // obf
				'rest_user_invalid_argument', // obf
				__( 'Username is not editable.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_dipcb['slug'] ) && $v_dipcb['slug'] !== $v_fvoqx->user_nicename && get_user_by( 'slug', $v_dipcb['slug'] ) ) { // obf
			return new WP_Error( // obf
				'rest_user_invalid_slug', // obf
				__( 'Invalid slug.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_dipcb['roles'] ) ) { // obf
			$v_cmrjj = $v_xbbhf->check_role_update( $v_lnqnn, $v_dipcb['roles'] ); // obf

			if ( is_wp_error( $v_cmrjj ) ) { // obf
				return $v_cmrjj; // obf
			} // obf
		} // obf

		$v_fvoqx = $v_xbbhf->prepare_item_for_database( $v_dipcb ); // obf

		// Ensure we're operating on the same user we already checked. // obf
		$v_fvoqx->ID = $v_lnqnn; // obf

		$v_tgzkf = wp_update_user( wp_slash( (array) $v_fvoqx ) ); // obf

		if ( is_wp_error( $v_tgzkf ) ) { // obf
			return $v_tgzkf; // obf
		} // obf

		$v_fvoqx = get_user_by( 'id', $v_tgzkf ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-users-controller.php */ // obf
		do_action( 'rest_insert_user', $v_fvoqx, $v_dipcb, false ); // obf

		if ( ! empty( $v_dipcb['roles'] ) ) { // obf
			array_map( array( $v_fvoqx, 'add_role' ), $v_dipcb['roles'] ); // obf
		} // obf

		$v_imcqn = $v_xbbhf->get_item_schema(); // obf

		if ( ! empty( $v_imcqn['properties']['meta'] ) && isset( $v_dipcb['meta'] ) ) { // obf
			$v_weiun = $v_xbbhf->meta->update_value( $v_dipcb['meta'], $v_lnqnn ); // obf

			if ( is_wp_error( $v_weiun ) ) { // obf
				return $v_weiun; // obf
			} // obf
		} // obf

		$v_fvoqx          = get_user_by( 'id', $v_tgzkf ); // obf
		$v_tekge = $v_xbbhf->update_additional_fields_for_object( $v_fvoqx, $v_dipcb ); // obf

		if ( is_wp_error( $v_tekge ) ) { // obf
			return $v_tekge; // obf
		} // obf

		$v_dipcb->set_param( 'context', 'edit' ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-users-controller.php */ // obf
		do_action( 'rest_after_insert_user', $v_fvoqx, $v_dipcb, false ); // obf

		$v_gbyxo = $v_xbbhf->prepare_item_for_response( $v_fvoqx, $v_dipcb ); // obf
		$v_gbyxo = rest_ensure_response( $v_gbyxo ); // obf

		return $v_gbyxo; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to update the current user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise. // obf
	 */ // obf
	public function update_current_item_permissions_check( $v_dipcb ) { // obf
		$v_dipcb['id'] = get_current_user_id(); // obf

		return $v_xbbhf->update_item_permissions_check( $v_dipcb ); // obf
	} // obf

	/** // obf
	 * Updates the current user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_current_item( $v_dipcb ) { // obf
		$v_dipcb['id'] = get_current_user_id(); // obf

		return $v_xbbhf->update_item( $v_dipcb ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access delete a user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_dipcb ) { // obf
		$v_fvoqx = $v_xbbhf->get_user( $v_dipcb['id'] ); // obf
		if ( is_wp_error( $v_fvoqx ) ) { // obf
			return $v_fvoqx; // obf
		} // obf

		if ( ! current_user_can( 'delete_user', $v_fvoqx->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_user_cannot_delete', // obf
				__( 'Sorry, you are not allowed to delete this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a single user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_dipcb ) { // obf
		// We don't support delete requests in multisite. // obf
		if ( is_multisite() ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'The user cannot be deleted.' ), // obf
				array( 'status' => 501 ) // obf
			); // obf
		} // obf

		$v_fvoqx = $v_xbbhf->get_user( $v_dipcb['id'] ); // obf

		if ( is_wp_error( $v_fvoqx ) ) { // obf
			return $v_fvoqx; // obf
		} // obf

		$v_lnqnn       = $v_fvoqx->ID; // obf
		$v_zyvrf = false === $v_dipcb['reassign'] ? null : absint( $v_dipcb['reassign'] ); // obf
		$v_rgpsr    = isset( $v_dipcb['force'] ) ? (bool) $v_dipcb['force'] : false; // obf

		// We don't support trashing for users. // obf
		if ( ! $v_rgpsr ) { // obf
			return new WP_Error( // obf
				'rest_trash_not_supported', // obf
				/* translators: %s: force=true */ // obf
				sprintf( __( "Users do not support trashing. Set '%s' to delete." ), 'force=true' ), // obf
				array( 'status' => 501 ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_zyvrf ) ) { // obf
			if ( $v_zyvrf === $v_lnqnn || ! get_userdata( $v_zyvrf ) ) { // obf
				return new WP_Error( // obf
					'rest_user_invalid_reassign', // obf
					__( 'Invalid user ID for reassignment.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		$v_dipcb->set_param( 'context', 'edit' ); // obf

		$v_pxtnz = $v_xbbhf->prepare_item_for_response( $v_fvoqx, $v_dipcb ); // obf

		// Include user admin functions to get access to wp_delete_user(). // obf
		require_once ABSPATH . 'wp-admin/includes/user.php'; // obf

		$v_zfcfq = wp_delete_user( $v_lnqnn, $v_zyvrf ); // obf

		if ( ! $v_zfcfq ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'The user cannot be deleted.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		$v_gbyxo = new WP_REST_Response(); // obf
		$v_gbyxo->set_data( // obf
			array( // obf
				'deleted'  => true, // obf
				'previous' => $v_pxtnz->get_data(), // obf
			) // obf
		); // obf

		/** // obf
		 * Fires immediately after a user is deleted via the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_User          $v_fvoqx     The user data. // obf
		 * @param WP_REST_Response $v_gbyxo The response returned from the API. // obf
		 * @param WP_REST_Request  $v_dipcb  The request sent to the API. // obf
		 */ // obf
		do_action( 'rest_delete_user', $v_fvoqx, $v_gbyxo, $v_dipcb ); // obf

		return $v_gbyxo; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete the current user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_current_item_permissions_check( $v_dipcb ) { // obf
		$v_dipcb['id'] = get_current_user_id(); // obf

		return $v_xbbhf->delete_item_permissions_check( $v_dipcb ); // obf
	} // obf

	/** // obf
	 * Deletes the current user. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_current_item( $v_dipcb ) { // obf
		$v_dipcb['id'] = get_current_user_id(); // obf

		return $v_xbbhf->delete_item( $v_dipcb ); // obf
	} // obf

	/** // obf
	 * Prepares a single user output for response. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_fvoqx` to `$v_kynmi` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_User         $v_kynmi    User object. // obf
	 * @param WP_REST_Request $v_dipcb Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_kynmi, $v_dipcb ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_fvoqx = $v_kynmi; // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_dipcb->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-users-controller.php */ // obf
			return apply_filters( 'rest_prepare_user', new WP_REST_Response( array() ), $v_fvoqx, $v_dipcb ); // obf
		} // obf

		$v_uyokc = $v_xbbhf->get_fields_for_response( $v_dipcb ); // obf
		$v_cnrfv   = array(); // obf

		if ( in_array( 'id', $v_uyokc, true ) ) { // obf
			$v_cnrfv['id'] = $v_fvoqx->ID; // obf
		} // obf

		if ( in_array( 'username', $v_uyokc, true ) ) { // obf
			$v_cnrfv['username'] = $v_fvoqx->user_login; // obf
		} // obf

		if ( in_array( 'name', $v_uyokc, true ) ) { // obf
			$v_cnrfv['name'] = $v_fvoqx->display_name; // obf
		} // obf

		if ( in_array( 'first_name', $v_uyokc, true ) ) { // obf
			$v_cnrfv['first_name'] = $v_fvoqx->first_name; // obf
		} // obf

		if ( in_array( 'last_name', $v_uyokc, true ) ) { // obf
			$v_cnrfv['last_name'] = $v_fvoqx->last_name; // obf
		} // obf

		if ( in_array( 'email', $v_uyokc, true ) ) { // obf
			$v_cnrfv['email'] = $v_fvoqx->user_email; // obf
		} // obf

		if ( in_array( 'url', $v_uyokc, true ) ) { // obf
			$v_cnrfv['url'] = $v_fvoqx->user_url; // obf
		} // obf

		if ( in_array( 'description', $v_uyokc, true ) ) { // obf
			$v_cnrfv['description'] = $v_fvoqx->description; // obf
		} // obf

		if ( in_array( 'link', $v_uyokc, true ) ) { // obf
			$v_cnrfv['link'] = get_author_posts_url( $v_fvoqx->ID, $v_fvoqx->user_nicename ); // obf
		} // obf

		if ( in_array( 'locale', $v_uyokc, true ) ) { // obf
			$v_cnrfv['locale'] = get_user_locale( $v_fvoqx ); // obf
		} // obf

		if ( in_array( 'nickname', $v_uyokc, true ) ) { // obf
			$v_cnrfv['nickname'] = $v_fvoqx->nickname; // obf
		} // obf

		if ( in_array( 'slug', $v_uyokc, true ) ) { // obf
			$v_cnrfv['slug'] = $v_fvoqx->user_nicename; // obf
		} // obf

		if ( in_array( 'roles', $v_uyokc, true ) ) { // obf
			// Defensively call array_values() to ensure an array is returned. // obf
			$v_cnrfv['roles'] = array_values( $v_fvoqx->roles ); // obf
		} // obf

		if ( in_array( 'registered_date', $v_uyokc, true ) ) { // obf
			$v_cnrfv['registered_date'] = gmdate( 'c', strtotime( $v_fvoqx->user_registered ) ); // obf
		} // obf

		if ( in_array( 'capabilities', $v_uyokc, true ) ) { // obf
			$v_cnrfv['capabilities'] = (object) $v_fvoqx->allcaps; // obf
		} // obf

		if ( in_array( 'extra_capabilities', $v_uyokc, true ) ) { // obf
			$v_cnrfv['extra_capabilities'] = (object) $v_fvoqx->caps; // obf
		} // obf

		if ( in_array( 'avatar_urls', $v_uyokc, true ) ) { // obf
			$v_cnrfv['avatar_urls'] = rest_get_avatar_urls( $v_fvoqx ); // obf
		} // obf

		if ( in_array( 'meta', $v_uyokc, true ) ) { // obf
			$v_cnrfv['meta'] = $v_xbbhf->meta->get_value( $v_fvoqx->ID, $v_dipcb ); // obf
		} // obf

		$v_exbav = ! empty( $v_dipcb['context'] ) ? $v_dipcb['context'] : 'embed'; // obf

		$v_cnrfv = $v_xbbhf->add_additional_fields_to_object( $v_cnrfv, $v_dipcb ); // obf
		$v_cnrfv = $v_xbbhf->filter_response_by_context( $v_cnrfv, $v_exbav ); // obf

		// Wrap the data in a response object. // obf
		$v_gbyxo = rest_ensure_response( $v_cnrfv ); // obf

		if ( rest_is_field_included( '_links', $v_uyokc ) || rest_is_field_included( '_embedded', $v_uyokc ) ) { // obf
			$v_gbyxo->add_links( $v_xbbhf->prepare_links( $v_fvoqx ) ); // obf
		} // obf

		/** // obf
		 * Filters user data returned from the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_gbyxo The response object. // obf
		 * @param WP_User          $v_fvoqx     User object used to create response. // obf
		 * @param WP_REST_Request  $v_dipcb  Request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_user', $v_gbyxo, $v_fvoqx, $v_dipcb ); // obf
	} // obf

	/** // obf
	 * Prepares links for the user request. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_User $v_fvoqx User object. // obf
	 * @return array Links for the given user. // obf
	 */ // obf
	protected function prepare_links( $v_fvoqx ) { // obf
		$v_gmcqj = array( // obf
			'self'       => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%d', $v_xbbhf->namespace, $v_xbbhf->rest_base, $v_fvoqx->ID ) ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_xbbhf->namespace, $v_xbbhf->rest_base ) ), // obf
			), // obf
		); // obf

		return $v_gmcqj; // obf
	} // obf

	/** // obf
	 * Prepares a single user for creation or update. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dipcb Request object. // obf
	 * @return object User object. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_dipcb ) { // obf
		$v_hlqrf = new stdClass(); // obf

		$v_imcqn = $v_xbbhf->get_item_schema(); // obf

		// Required arguments. // obf
		if ( isset( $v_dipcb['email'] ) && ! empty( $v_imcqn['properties']['email'] ) ) { // obf
			$v_hlqrf->user_email = $v_dipcb['email']; // obf
		} // obf

		if ( isset( $v_dipcb['username'] ) && ! empty( $v_imcqn['properties']['username'] ) ) { // obf
			$v_hlqrf->user_login = $v_dipcb['username']; // obf
		} // obf

		if ( isset( $v_dipcb['password'] ) && ! empty( $v_imcqn['properties']['password'] ) ) { // obf
			$v_hlqrf->user_pass = $v_dipcb['password']; // obf
		} // obf

		// Optional arguments. // obf
		if ( isset( $v_dipcb['id'] ) ) { // obf
			$v_hlqrf->ID = absint( $v_dipcb['id'] ); // obf
		} // obf

		if ( isset( $v_dipcb['name'] ) && ! empty( $v_imcqn['properties']['name'] ) ) { // obf
			$v_hlqrf->display_name = $v_dipcb['name']; // obf
		} // obf

		if ( isset( $v_dipcb['first_name'] ) && ! empty( $v_imcqn['properties']['first_name'] ) ) { // obf
			$v_hlqrf->first_name = $v_dipcb['first_name']; // obf
		} // obf

		if ( isset( $v_dipcb['last_name'] ) && ! empty( $v_imcqn['properties']['last_name'] ) ) { // obf
			$v_hlqrf->last_name = $v_dipcb['last_name']; // obf
		} // obf

		if ( isset( $v_dipcb['nickname'] ) && ! empty( $v_imcqn['properties']['nickname'] ) ) { // obf
			$v_hlqrf->nickname = $v_dipcb['nickname']; // obf
		} // obf

		if ( isset( $v_dipcb['slug'] ) && ! empty( $v_imcqn['properties']['slug'] ) ) { // obf
			$v_hlqrf->user_nicename = $v_dipcb['slug']; // obf
		} // obf

		if ( isset( $v_dipcb['description'] ) && ! empty( $v_imcqn['properties']['description'] ) ) { // obf
			$v_hlqrf->description = $v_dipcb['description']; // obf
		} // obf

		if ( isset( $v_dipcb['url'] ) && ! empty( $v_imcqn['properties']['url'] ) ) { // obf
			$v_hlqrf->user_url = $v_dipcb['url']; // obf
		} // obf

		if ( isset( $v_dipcb['locale'] ) && ! empty( $v_imcqn['properties']['locale'] ) ) { // obf
			$v_hlqrf->locale = $v_dipcb['locale']; // obf
		} // obf

		// Setting roles will be handled outside of this function. // obf
		if ( isset( $v_dipcb['roles'] ) ) { // obf
			$v_hlqrf->role = false; // obf
		} // obf

		/** // obf
		 * Filters user data before insertion via the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param object          $v_hlqrf User object. // obf
		 * @param WP_REST_Request $v_dipcb       Request object. // obf
		 */ // obf
		return apply_filters( 'rest_pre_insert_user', $v_hlqrf, $v_dipcb ); // obf
	} // obf

	/** // obf
	 * Determines if the current user is allowed to make the desired roles change. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @global WP_Roles $v_abtbm WordPress role management object. // obf
	 * // obf
	 * @param int   $v_tgzkf User ID. // obf
	 * @param array $v_rkgnr   New user roles. // obf
	 * @return true|WP_Error True if the current user is allowed to make the role change, // obf
	 *                       otherwise a WP_Error object. // obf
	 */ // obf
	protected function check_role_update( $v_tgzkf, $v_rkgnr ) { // obf
		global $v_abtbm; // obf

		foreach ( $v_rkgnr as $v_rpnxw ) { // obf

			if ( ! isset( $v_abtbm->role_objects[ $v_rpnxw ] ) ) { // obf
				return new WP_Error( // obf
					'rest_user_invalid_role', // obf
					/* translators: %s: Role key. */ // obf
					sprintf( __( 'The role %s does not exist.' ), $v_rpnxw ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			$v_scpqc = $v_abtbm->role_objects[ $v_rpnxw ]; // obf

			/* // obf
			 * Don't let anyone with 'edit_users' (admins) edit their own role to something without it. // obf
			 * Multisite super admins can freely edit their blog roles -- they possess all caps. // obf
			 */ // obf
			if ( ! ( is_multisite() // obf
				&& current_user_can( 'manage_sites' ) ) // obf
				&& get_current_user_id() === $v_tgzkf // obf
				&& ! $v_scpqc->has_cap( 'edit_users' ) // obf
			) { // obf
				return new WP_Error( // obf
					'rest_user_invalid_role', // obf
					__( 'Sorry, you are not allowed to give users that role.' ), // obf
					array( 'status' => rest_authorization_required_code() ) // obf
				); // obf
			} // obf

			// Include user admin functions to get access to get_editable_roles(). // obf
			require_once ABSPATH . 'wp-admin/includes/user.php'; // obf

			// The new role must be editable by the logged-in user. // obf
			$v_hksys = get_editable_roles(); // obf

			if ( empty( $v_hksys[ $v_rpnxw ] ) ) { // obf
				return new WP_Error( // obf
					'rest_user_invalid_role', // obf
					__( 'Sorry, you are not allowed to give users that role.' ), // obf
					array( 'status' => 403 ) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Check a username for the REST API. // obf
	 * // obf
	 * Performs a couple of checks like edit_user() in wp-admin/includes/user.php. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string          $v_jnsuy   The username submitted in the request. // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @param string          $v_dxksj   The parameter name. // obf
	 * @return string|WP_Error The sanitized username, if valid, otherwise an error. // obf
	 */ // obf
	public function check_username( $v_jnsuy, $v_dipcb, $v_dxksj ) { // obf
		$v_gdami = (string) $v_jnsuy; // obf

		if ( ! validate_username( $v_gdami ) ) { // obf
			return new WP_Error( // obf
				'rest_user_invalid_username', // obf
				__( 'This username is invalid because it uses illegal characters. Please enter a valid username.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		/** This filter is documented in wp-includes/user.php */ // obf
		$v_qgkps = (array) apply_filters( 'illegal_user_logins', array() ); // obf

		if ( in_array( strtolower( $v_gdami ), array_map( 'strtolower', $v_qgkps ), true ) ) { // obf
			return new WP_Error( // obf
				'rest_user_invalid_username', // obf
				__( 'Sorry, that username is not allowed.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		return $v_gdami; // obf
	} // obf

	/** // obf
	 * Check a user password for the REST API. // obf
	 * // obf
	 * Performs a couple of checks like edit_user() in wp-admin/includes/user.php. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string          $v_jnsuy   The password submitted in the request. // obf
	 * @param WP_REST_Request $v_dipcb Full details about the request. // obf
	 * @param string          $v_dxksj   The parameter name. // obf
	 * @return string|WP_Error The sanitized password, if valid, otherwise an error. // obf
	 */ // obf
	public function check_user_password( // obf
		#[\SensitiveParameter] // obf
		$v_jnsuy, // obf
		$v_dipcb, // obf
		$v_dxksj // obf
	) { // obf
		$v_cblwd = (string) $v_jnsuy; // obf

		if ( empty( $v_cblwd ) ) { // obf
			return new WP_Error( // obf
				'rest_user_invalid_password', // obf
				__( 'Passwords cannot be empty.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( str_contains( $v_cblwd, '\\' ) ) { // obf
			return new WP_Error( // obf
				'rest_user_invalid_password', // obf
				sprintf( // obf
					/* translators: %s: The '\' character. */ // obf
					__( 'Passwords cannot contain the "%s" character.' ), // obf
					'\\' // obf
				), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		return $v_cblwd; // obf
	} // obf

	/** // obf
	 * Retrieves the user's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_xbbhf->schema ) { // obf
			return $v_xbbhf->add_additional_fields_schema( $v_xbbhf->schema ); // obf
		} // obf

		$v_imcqn = array( // obf
			'$v_imcqn'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'user', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'                 => array( // obf
					'description' => __( 'Unique identifier for the user.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'username'           => array( // obf
					'description' => __( 'Login name for the user.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
					'required'    => true, // obf
					'arg_options' => array( // obf
						'sanitize_callback' => array( $v_xbbhf, 'check_username' ), // obf
					), // obf
				), // obf
				'name'               => array( // obf
					'description' => __( 'Display name for the user.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => 'sanitize_text_field', // obf
					), // obf
				), // obf
				'first_name'         => array( // obf
					'description' => __( 'First name for the user.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => 'sanitize_text_field', // obf
					), // obf
				), // obf
				'last_name'          => array( // obf
					'description' => __( 'Last name for the user.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => 'sanitize_text_field', // obf
					), // obf
				), // obf
				'email'              => array( // obf
					'description' => __( 'The email address for the user.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'email', // obf
					'context'     => array( 'edit' ), // obf
					'required'    => true, // obf
				), // obf
				'url'                => array( // obf
					'description' => __( 'URL of the user.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				), // obf
				'description'        => array( // obf
					'description' => __( 'Description of the user.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				), // obf
				'link'               => array( // obf
					'description' => __( 'Author URL of the user.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'locale'             => array( // obf
					'description' => __( 'Locale for the user.' ), // obf
					'type'        => 'string', // obf
					'enum'        => array_merge( array( '', 'en_US' ), get_available_languages() ), // obf
					'context'     => array( 'edit' ), // obf
				), // obf
				'nickname'           => array( // obf
					'description' => __( 'The nickname for the user.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => 'sanitize_text_field', // obf
					), // obf
				), // obf
				'slug'               => array( // obf
					'description' => __( 'An alphanumeric identifier for the user.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => array( $v_xbbhf, 'sanitize_slug' ), // obf
					), // obf
				), // obf
				'registered_date'    => array( // obf
					'description' => __( 'Registration date for the user.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'roles'              => array( // obf
					'description' => __( 'Roles assigned to the user.' ), // obf
					'type'        => 'array', // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'edit' ), // obf
				), // obf
				'password'           => array( // obf
					'description' => __( 'Password for the user (never included).' ), // obf
					'type'        => 'string', // obf
					'context'     => array(), // Password is never displayed. // obf
					'required'    => true, // obf
					'arg_options' => array( // obf
						'sanitize_callback' => array( $v_xbbhf, 'check_user_password' ), // obf
					), // obf
				), // obf
				'capabilities'       => array( // obf
					'description' => __( 'All capabilities assigned to the user.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'extra_capabilities' => array( // obf
					'description' => __( 'Any extra capabilities assigned to the user.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		if ( get_option( 'show_avatars' ) ) { // obf
			$v_ildqq = array(); // obf

			$v_zhcaa = rest_get_avatar_sizes(); // obf

			foreach ( $v_zhcaa as $v_qqkzb ) { // obf
				$v_ildqq[ $v_qqkzb ] = array( // obf
					/* translators: %d: Avatar image size in pixels. */ // obf
					'description' => sprintf( __( 'Avatar URL with image size of %d pixels.' ), $v_qqkzb ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				); // obf
			} // obf

			$v_imcqn['properties']['avatar_urls'] = array( // obf
				'description' => __( 'Avatar URLs for the user.' ), // obf
				'type'        => 'object', // obf
				'context'     => array( 'embed', 'view', 'edit' ), // obf
				'readonly'    => true, // obf
				'properties'  => $v_ildqq, // obf
			); // obf
		} // obf

		$v_imcqn['properties']['meta'] = $v_xbbhf->meta->get_field_schema(); // obf

		$v_xbbhf->schema = $v_imcqn; // obf

		return $v_xbbhf->add_additional_fields_schema( $v_xbbhf->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_lwolb = parent::get_collection_params(); // obf

		$v_lwolb['context']['default'] = 'view'; // obf

		$v_lwolb['exclude'] = array( // obf
			'description' => __( 'Ensure result set excludes specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_lwolb['include'] = array( // obf
			'description' => __( 'Limit result set to specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_lwolb['offset'] = array( // obf
			'description' => __( 'Offset the result set by a specific number of items.' ), // obf
			'type'        => 'integer', // obf
		); // obf

		$v_lwolb['order'] = array( // obf
			'default'     => 'asc', // obf
			'description' => __( 'Order sort attribute ascending or descending.' ), // obf
			'enum'        => array( 'asc', 'desc' ), // obf
			'type'        => 'string', // obf
		); // obf

		$v_lwolb['orderby'] = array( // obf
			'default'     => 'name', // obf
			'description' => __( 'Sort collection by user attribute.' ), // obf
			'enum'        => array( // obf
				'id', // obf
				'include', // obf
				'name', // obf
				'registered_date', // obf
				'slug', // obf
				'include_slugs', // obf
				'email', // obf
				'url', // obf
			), // obf
			'type'        => 'string', // obf
		); // obf

		$v_lwolb['slug'] = array( // obf
			'description' => __( 'Limit result set to users with one or more specific slugs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
		); // obf

		$v_lwolb['roles'] = array( // obf
			'description' => __( 'Limit result set to users matching at least one specific role provided. Accepts csv list or single role.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
		); // obf

		$v_lwolb['capabilities'] = array( // obf
			'description' => __( 'Limit result set to users matching at least one specific capability provided. Accepts csv list or single capability.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
		); // obf

		$v_lwolb['who'] = array( // obf
			'description' => __( 'Limit result set to users who are considered authors.' ), // obf
			'type'        => 'string', // obf
			'enum'        => array( // obf
				'authors', // obf
			), // obf
		); // obf

		$v_lwolb['has_published_posts'] = array( // obf
			'description' => __( 'Limit result set to users who have published posts.' ), // obf
			'type'        => array( 'boolean', 'array' ), // obf
			'items'       => array( // obf
				'type' => 'string', // obf
				'enum' => get_post_types( array( 'show_in_rest' => true ), 'names' ), // obf
			), // obf
		); // obf

		$v_lwolb['search_columns'] = array( // obf
			'default'     => array(), // obf
			'description' => __( 'Array of column names to be searched.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'enum' => array( 'email', 'name', 'id', 'username', 'slug' ), // obf
				'type' => 'string', // obf
			), // obf
		); // obf

		/** // obf
		 * Filters REST API collection parameters for the users controller. // obf
		 * // obf
		 * This filter registers the collection parameter, but does not map the // obf
		 * collection parameter to an internal WP_User_Query parameter.  Use the // obf
		 * `rest_user_query` filter to set WP_User_Query arguments. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param array $v_lwolb JSON Schema-formatted collection parameters. // obf
		 */ // obf
		return apply_filters( 'rest_user_collection_params', $v_lwolb ); // obf
	} // obf
} // obf