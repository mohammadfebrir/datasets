

<?php // obf
/** // obf
 * REST API: WP_REST_Widgets_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Core class to access widgets via the REST API. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Widgets_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Tracks whether {@see retrieve_widgets()} has been called in the current request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_qekjt = false; // obf

	/** // obf
	 * Whether the controller supports batching. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_zrhxz = array( 'v1' => true ); // obf

	/** // obf
	 * Widgets controller constructor. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_netid->namespace = 'wp/v2'; // obf
		$v_netid->rest_base = 'widgets'; // obf
	} // obf

	/** // obf
	 * Registers the widget routes for the controller. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_netid->namespace, // obf
			$v_netid->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_netid, 'get_items' ), // obf
					'permission_callback' => array( $v_netid, 'get_items_permissions_check' ), // obf
					'args'                => $v_netid->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_netid, 'create_item' ), // obf
					'permission_callback' => array( $v_netid, 'create_item_permissions_check' ), // obf
					'args'                => $v_netid->get_endpoint_args_for_item_schema(), // obf
				), // obf
				'allow_batch' => $v_netid->allow_batch, // obf
				'schema'      => array( $v_netid, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_netid->namespace, // obf
			$v_netid->rest_base . '/(?P<id>[\w\-]+)', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_netid, 'get_item' ), // obf
					'permission_callback' => array( $v_netid, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_netid->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_netid, 'update_item' ), // obf
					'permission_callback' => array( $v_netid, 'update_item_permissions_check' ), // obf
					'args'                => $v_netid->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_netid, 'delete_item' ), // obf
					'permission_callback' => array( $v_netid, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force' => array( // obf
							'description' => __( 'Whether to force removal of the widget, or move it to the inactive sidebar.' ), // obf
							'type'        => 'boolean', // obf
						), // obf
					), // obf
				), // obf
				'allow_batch' => $v_netid->allow_batch, // obf
				'schema'      => array( $v_netid, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get widgets. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_enlce ) { // obf
		$v_netid->retrieve_widgets(); // obf
		if ( isset( $v_enlce['sidebar'] ) && $v_netid->check_read_sidebar_permission( $v_enlce['sidebar'] ) ) { // obf
			return true; // obf
		} // obf

		foreach ( wp_get_sidebars_widgets() as $v_pimyn => $v_crtuh ) { // obf
			if ( $v_netid->check_read_sidebar_permission( $v_pimyn ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return $v_netid->permissions_check( $v_enlce ); // obf
	} // obf

	/** // obf
	 * Retrieves a collection of widgets. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function get_items( $v_enlce ) { // obf
		if ( $v_enlce->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_netid->retrieve_widgets(); // obf

		$v_llpkv          = array(); // obf
		$v_yuvle = $v_netid->permissions_check( $v_enlce ); // obf

		foreach ( wp_get_sidebars_widgets() as $v_pimyn => $v_crtuh ) { // obf
			if ( isset( $v_enlce['sidebar'] ) && $v_pimyn !== $v_enlce['sidebar'] ) { // obf
				continue; // obf
			} // obf

			if ( is_wp_error( $v_yuvle ) && ! $v_netid->check_read_sidebar_permission( $v_pimyn ) ) { // obf
				continue; // obf
			} // obf

			foreach ( $v_crtuh as $v_mqbyb ) { // obf
				$v_dyvmg = $v_netid->prepare_item_for_response( compact( 'sidebar_id', 'widget_id' ), $v_enlce ); // obf

				if ( ! is_wp_error( $v_dyvmg ) ) { // obf
					$v_llpkv[] = $v_netid->prepare_response_for_collection( $v_dyvmg ); // obf
				} // obf
			} // obf
		} // obf

		return new WP_REST_Response( $v_llpkv ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get a widget. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_enlce ) { // obf
		$v_netid->retrieve_widgets(); // obf

		$v_mqbyb  = $v_enlce['id']; // obf
		$v_pimyn = wp_find_widgets_sidebar( $v_mqbyb ); // obf

		if ( $v_pimyn && $v_netid->check_read_sidebar_permission( $v_pimyn ) ) { // obf
			return true; // obf
		} // obf

		return $v_netid->permissions_check( $v_enlce ); // obf
	} // obf

	/** // obf
	 * Checks if a sidebar can be read publicly. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_pimyn The sidebar ID. // obf
	 * @return bool Whether the sidebar can be read. // obf
	 */ // obf
	protected function check_read_sidebar_permission( $v_pimyn ) { // obf
		$v_cvjmm = wp_get_sidebar( $v_pimyn ); // obf

		return ! empty( $v_cvjmm['show_in_rest'] ); // obf
	} // obf

	/** // obf
	 * Gets an individual widget. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_enlce ) { // obf
		$v_netid->retrieve_widgets(); // obf

		$v_mqbyb  = $v_enlce['id']; // obf
		$v_pimyn = wp_find_widgets_sidebar( $v_mqbyb ); // obf

		if ( is_null( $v_pimyn ) ) { // obf
			return new WP_Error( // obf
				'rest_widget_not_found', // obf
				__( 'No widget was found with that id.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		return $v_netid->prepare_item_for_response( compact( 'widget_id', 'sidebar_id' ), $v_enlce ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to create widgets. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_enlce ) { // obf
		return $v_netid->permissions_check( $v_enlce ); // obf
	} // obf

	/** // obf
	 * Creates a widget. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_enlce ) { // obf
		$v_pimyn = $v_enlce['sidebar']; // obf

		$v_mqbyb = $v_netid->save_widget( $v_enlce, $v_pimyn ); // obf

		if ( is_wp_error( $v_mqbyb ) ) { // obf
			return $v_mqbyb; // obf
		} // obf

		wp_assign_widget_to_sidebar( $v_mqbyb, $v_pimyn ); // obf

		$v_enlce['context'] = 'edit'; // obf

		$v_dyvmg = $v_netid->prepare_item_for_response( compact( 'sidebar_id', 'widget_id' ), $v_enlce ); // obf

		if ( is_wp_error( $v_dyvmg ) ) { // obf
			return $v_dyvmg; // obf
		} // obf

		$v_dyvmg->set_status( 201 ); // obf

		return $v_dyvmg; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to update widgets. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_enlce ) { // obf
		return $v_netid->permissions_check( $v_enlce ); // obf
	} // obf

	/** // obf
	 * Updates an existing widget. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @global WP_Widget_Factory $v_ifzee // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_enlce ) { // obf
		global $v_ifzee; // obf

		/* // obf
		 * retrieve_widgets() contains logic to move "hidden" or "lost" widgets to the // obf
		 * wp_inactive_widgets sidebar based on the contents of the $v_kqxli global. // obf
		 * // obf
		 * When batch requests are processed, this global is not properly updated by previous // obf
		 * calls, resulting in widgets incorrectly being moved to the wp_inactive_widgets // obf
		 * sidebar. // obf
		 * // obf
		 * See https://core.trac.wordpress.org/ticket/53657. // obf
		 */ // obf
		wp_get_sidebars_widgets(); // obf
		$v_netid->retrieve_widgets(); // obf

		$v_mqbyb  = $v_enlce['id']; // obf
		$v_pimyn = wp_find_widgets_sidebar( $v_mqbyb ); // obf

		// Allow sidebar to be unset or missing when widget is not a WP_Widget. // obf
		$v_ksvtj     = wp_parse_widget_id( $v_mqbyb ); // obf
		$v_mlrrv = $v_ifzee->get_widget_object( $v_ksvtj['id_base'] ); // obf
		if ( is_null( $v_pimyn ) && $v_mlrrv ) { // obf
			return new WP_Error( // obf
				'rest_widget_not_found', // obf
				__( 'No widget was found with that id.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		if ( // obf
			$v_enlce->has_param( 'instance' ) || // obf
			$v_enlce->has_param( 'form_data' ) // obf
		) { // obf
			$v_eyylq = $v_netid->save_widget( $v_enlce, $v_pimyn ); // obf
			if ( is_wp_error( $v_eyylq ) ) { // obf
				return $v_eyylq; // obf
			} // obf
		} // obf

		if ( $v_enlce->has_param( 'sidebar' ) ) { // obf
			if ( $v_pimyn !== $v_enlce['sidebar'] ) { // obf
				$v_pimyn = $v_enlce['sidebar']; // obf
				wp_assign_widget_to_sidebar( $v_mqbyb, $v_pimyn ); // obf
			} // obf
		} // obf

		$v_enlce['context'] = 'edit'; // obf

		return $v_netid->prepare_item_for_response( compact( 'widget_id', 'sidebar_id' ), $v_enlce ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete widgets. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_enlce ) { // obf
		return $v_netid->permissions_check( $v_enlce ); // obf
	} // obf

	/** // obf
	 * Deletes a widget. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @global WP_Widget_Factory $v_ifzee // obf
	 * @global array             $v_uludl The registered widget update functions. // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_enlce ) { // obf
		global $v_ifzee, $v_uludl; // obf

		/* // obf
		 * retrieve_widgets() contains logic to move "hidden" or "lost" widgets to the // obf
		 * wp_inactive_widgets sidebar based on the contents of the $v_kqxli global. // obf
		 * // obf
		 * When batch requests are processed, this global is not properly updated by previous // obf
		 * calls, resulting in widgets incorrectly being moved to the wp_inactive_widgets // obf
		 * sidebar. // obf
		 * // obf
		 * See https://core.trac.wordpress.org/ticket/53657. // obf
		 */ // obf
		wp_get_sidebars_widgets(); // obf
		$v_netid->retrieve_widgets(); // obf

		$v_mqbyb  = $v_enlce['id']; // obf
		$v_pimyn = wp_find_widgets_sidebar( $v_mqbyb ); // obf

		if ( is_null( $v_pimyn ) ) { // obf
			return new WP_Error( // obf
				'rest_widget_not_found', // obf
				__( 'No widget was found with that id.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_enlce['context'] = 'edit'; // obf

		if ( $v_enlce['force'] ) { // obf
			$v_dyvmg = $v_netid->prepare_item_for_response( compact( 'widget_id', 'sidebar_id' ), $v_enlce ); // obf

			$v_ksvtj = wp_parse_widget_id( $v_mqbyb ); // obf
			$v_dxkxa   = $v_ksvtj['id_base']; // obf

			$v_sqmxv    = $v_kcamf; // obf
			$v_kbvkr = $v_lgequ; // obf

			$v_kcamf    = array( // obf
				'sidebar'         => $v_pimyn, // obf
				"widget-$v_dxkxa" => array(), // obf
				'the-widget-id'   => $v_mqbyb, // obf
				'delete_widget'   => '1', // obf
			); // obf
			$v_lgequ = $v_kcamf; // obf

			/** This action is documented in wp-admin/widgets-form.php */ // obf
			do_action( 'delete_widget', $v_mqbyb, $v_pimyn, $v_dxkxa ); // obf

			$v_ktogp = $v_uludl[ $v_dxkxa ]['callback']; // obf
			$v_nddel   = $v_uludl[ $v_dxkxa ]['params']; // obf

			if ( is_callable( $v_ktogp ) ) { // obf
				ob_start(); // obf
				call_user_func_array( $v_ktogp, $v_nddel ); // obf
				ob_end_clean(); // obf
			} // obf

			$v_kcamf    = $v_sqmxv; // obf
			$v_lgequ = $v_kbvkr; // obf

			$v_mlrrv = $v_ifzee->get_widget_object( $v_dxkxa ); // obf

			if ( $v_mlrrv ) { // obf
				/* // obf
				 * WP_Widget sets `updated = true` after an update to prevent more than one widget // obf
				 * from being saved per request. This isn't what we want in the REST API, though, // obf
				 * as we support batch requests. // obf
				 */ // obf
				$v_mlrrv->updated = false; // obf
			} // obf

			wp_assign_widget_to_sidebar( $v_mqbyb, '' ); // obf

			$v_dyvmg->set_data( // obf
				array( // obf
					'deleted'  => true, // obf
					'previous' => $v_dyvmg->get_data(), // obf
				) // obf
			); // obf
		} else { // obf
			wp_assign_widget_to_sidebar( $v_mqbyb, 'wp_inactive_widgets' ); // obf

			$v_dyvmg = $v_netid->prepare_item_for_response( // obf
				array( // obf
					'sidebar_id' => 'wp_inactive_widgets', // obf
					'widget_id'  => $v_mqbyb, // obf
				), // obf
				$v_enlce // obf
			); // obf
		} // obf

		/** // obf
		 * Fires after a widget is deleted via the REST API. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param string                    $v_mqbyb  ID of the widget marked for deletion. // obf
		 * @param string                    $v_pimyn ID of the sidebar the widget was deleted from. // obf
		 * @param WP_REST_Response|WP_Error $v_dyvmg   The response data, or WP_Error object on failure. // obf
		 * @param WP_REST_Request           $v_enlce    The request sent to the API. // obf
		 */ // obf
		do_action( 'rest_delete_widget', $v_mqbyb, $v_pimyn, $v_dyvmg, $v_enlce ); // obf

		return $v_dyvmg; // obf
	} // obf

	/** // obf
	 * Performs a permissions check for managing widgets. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce Full details about the request. // obf
	 * @return true|WP_Error // obf
	 */ // obf
	protected function permissions_check( $v_enlce ) { // obf
		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_widgets', // obf
				__( 'Sorry, you are not allowed to manage widgets on this site.' ), // obf
				array( // obf
					'status' => rest_authorization_required_code(), // obf
				) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Looks for "lost" widgets once per request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @see retrieve_widgets() // obf
	 */ // obf
	protected function retrieve_widgets() { // obf
		if ( ! $v_netid->widgets_retrieved ) { // obf
			retrieve_widgets(); // obf
			$v_netid->widgets_retrieved = true; // obf
		} // obf
	} // obf

	/** // obf
	 * Saves the widget in the request object. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @global WP_Widget_Factory $v_ifzee // obf
	 * @global array             $v_uludl The registered widget update functions. // obf
	 * // obf
	 * @param WP_REST_Request $v_enlce    Full details about the request. // obf
	 * @param string          $v_pimyn ID of the sidebar the widget belongs to. // obf
	 * @return string|WP_Error The saved widget ID. // obf
	 */ // obf
	protected function save_widget( $v_enlce, $v_pimyn ) { // obf
		global $v_ifzee, $v_uludl; // obf

		require_once ABSPATH . 'wp-admin/includes/widgets.php'; // For next_widget_id_number(). // obf

		if ( isset( $v_enlce['id'] ) ) { // obf
			// Saving an existing widget. // obf
			$v_iltuh            = $v_enlce['id']; // obf
			$v_ksvtj     = wp_parse_widget_id( $v_iltuh ); // obf
			$v_dxkxa       = $v_ksvtj['id_base']; // obf
			$v_vnwep        = isset( $v_ksvtj['number'] ) ? $v_ksvtj['number'] : null; // obf
			$v_mlrrv = $v_ifzee->get_widget_object( $v_dxkxa ); // obf
			$v_wcxpq      = false; // obf
		} elseif ( $v_enlce['id_base'] ) { // obf
			// Saving a new widget. // obf
			$v_dxkxa       = $v_enlce['id_base']; // obf
			$v_mlrrv = $v_ifzee->get_widget_object( $v_dxkxa ); // obf
			$v_vnwep        = $v_mlrrv ? next_widget_id_number( $v_dxkxa ) : null; // obf
			$v_iltuh            = $v_mlrrv ? $v_dxkxa . '-' . $v_vnwep : $v_dxkxa; // obf
			$v_wcxpq      = true; // obf
		} else { // obf
			return new WP_Error( // obf
				'rest_invalid_widget', // obf
				__( 'Widget type (id_base) is required.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( ! isset( $v_uludl[ $v_dxkxa ] ) ) { // obf
			return new WP_Error( // obf
				'rest_invalid_widget', // obf
				__( 'The provided widget type (id_base) cannot be updated.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( isset( $v_enlce['instance'] ) ) { // obf
			if ( ! $v_mlrrv ) { // obf
				return new WP_Error( // obf
					'rest_invalid_widget', // obf
					__( 'Cannot set instance on a widget that does not extend WP_Widget.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			if ( isset( $v_enlce['instance']['raw'] ) ) { // obf
				if ( empty( $v_mlrrv->widget_options['show_instance_in_rest'] ) ) { // obf
					return new WP_Error( // obf
						'rest_invalid_widget', // obf
						__( 'Widget type does not support raw instances.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf
				$v_altlb = $v_enlce['instance']['raw']; // obf
			} elseif ( isset( $v_enlce['instance']['encoded'], $v_enlce['instance']['hash'] ) ) { // obf
				$v_ixfep = base64_decode( $v_enlce['instance']['encoded'] ); // obf
				if ( ! hash_equals( wp_hash( $v_ixfep ), $v_enlce['instance']['hash'] ) ) { // obf
					return new WP_Error( // obf
						'rest_invalid_widget', // obf
						__( 'The provided instance is malformed.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf
				$v_altlb = unserialize( $v_ixfep ); // obf
			} else { // obf
				return new WP_Error( // obf
					'rest_invalid_widget', // obf
					__( 'The provided instance is invalid. Must contain raw OR encoded and hash.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			$v_wvixk = array( // obf
				"widget-$v_dxkxa" => array( // obf
					$v_vnwep => $v_altlb, // obf
				), // obf
				'sidebar'         => $v_pimyn, // obf
			); // obf
		} elseif ( isset( $v_enlce['form_data'] ) ) { // obf
			$v_wvixk = $v_enlce['form_data']; // obf
		} else { // obf
			$v_wvixk = array(); // obf
		} // obf

		$v_sqmxv    = $v_kcamf; // obf
		$v_kbvkr = $v_lgequ; // obf

		foreach ( $v_wvixk as $v_ivgci => $v_iteco ) { // obf
			$v_wuvyb    = wp_slash( $v_iteco ); // obf
			$v_kcamf[ $v_ivgci ]    = $v_wuvyb; // obf
			$v_lgequ[ $v_ivgci ] = $v_wuvyb; // obf
		} // obf

		$v_ktogp = $v_uludl[ $v_dxkxa ]['callback']; // obf
		$v_nddel   = $v_uludl[ $v_dxkxa ]['params']; // obf

		if ( is_callable( $v_ktogp ) ) { // obf
			ob_start(); // obf
			call_user_func_array( $v_ktogp, $v_nddel ); // obf
			ob_end_clean(); // obf
		} // obf

		$v_kcamf    = $v_sqmxv; // obf
		$v_lgequ = $v_kbvkr; // obf

		if ( $v_mlrrv ) { // obf
			// Register any multi-widget that the update callback just created. // obf
			$v_mlrrv->_set( $v_vnwep ); // obf
			$v_mlrrv->_register_one( $v_vnwep ); // obf

			/* // obf
			 * WP_Widget sets `updated = true` after an update to prevent more than one widget // obf
			 * from being saved per request. This isn't what we want in the REST API, though, // obf
			 * as we support batch requests. // obf
			 */ // obf
			$v_mlrrv->updated = false; // obf
		} // obf

		/** // obf
		 * Fires after a widget is created or updated via the REST API. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param string          $v_iltuh         ID of the widget being saved. // obf
		 * @param string          $v_pimyn ID of the sidebar containing the widget being saved. // obf
		 * @param WP_REST_Request $v_enlce    Request object. // obf
		 * @param bool            $v_wcxpq   True when creating a widget, false when updating. // obf
		 */ // obf
		do_action( 'rest_after_save_widget', $v_iltuh, $v_pimyn, $v_enlce, $v_wcxpq ); // obf

		return $v_iltuh; // obf
	} // obf

	/** // obf
	 * Prepares the widget for the REST response. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @global WP_Widget_Factory $v_ifzee // obf
	 * @global array             $v_pzrcp The registered widgets. // obf
	 * // obf
	 * @param array           $v_uffik    An array containing a widget_id and sidebar_id. // obf
	 * @param WP_REST_Request $v_enlce Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function prepare_item_for_response( $v_uffik, $v_enlce ) { // obf
		global $v_ifzee, $v_pzrcp; // obf

		$v_mqbyb  = $v_uffik['widget_id']; // obf
		$v_pimyn = $v_uffik['sidebar_id']; // obf

		if ( ! isset( $v_pzrcp[ $v_mqbyb ] ) ) { // obf
			return new WP_Error( // obf
				'rest_invalid_widget', // obf
				__( 'The requested widget is invalid.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		$v_wdxxw = $v_pzrcp[ $v_mqbyb ]; // obf
		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_enlce->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-widgets-controller.php */ // obf
			return apply_filters( 'rest_prepare_widget', new WP_REST_Response( array() ), $v_wdxxw, $v_enlce ); // obf
		} // obf

		$v_ksvtj = wp_parse_widget_id( $v_mqbyb ); // obf
		$v_ylyjw    = $v_netid->get_fields_for_response( $v_enlce ); // obf

		$v_llpkv = array( // obf
			'id'            => $v_mqbyb, // obf
			'id_base'       => $v_ksvtj['id_base'], // obf
			'sidebar'       => $v_pimyn, // obf
			'rendered'      => '', // obf
			'rendered_form' => null, // obf
			'instance'      => null, // obf
		); // obf

		if ( // obf
			rest_is_field_included( 'rendered', $v_ylyjw ) && // obf
			'wp_inactive_widgets' !== $v_pimyn // obf
		) { // obf
			$v_llpkv['rendered'] = trim( wp_render_widget( $v_mqbyb, $v_pimyn ) ); // obf
		} // obf

		if ( rest_is_field_included( 'rendered_form', $v_ylyjw ) ) { // obf
			$v_vfmbb = wp_render_widget_control( $v_mqbyb ); // obf
			if ( ! is_null( $v_vfmbb ) ) { // obf
				$v_llpkv['rendered_form'] = trim( $v_vfmbb ); // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'instance', $v_ylyjw ) ) { // obf
			$v_mlrrv = $v_ifzee->get_widget_object( $v_ksvtj['id_base'] ); // obf
			if ( $v_mlrrv && isset( $v_ksvtj['number'] ) ) { // obf
				$v_affgl                   = $v_mlrrv->get_settings(); // obf
				$v_altlb                        = $v_affgl[ $v_ksvtj['number'] ]; // obf
				$v_ixfep             = serialize( $v_altlb ); // obf
				$v_llpkv['instance']['encoded'] = base64_encode( $v_ixfep ); // obf
				$v_llpkv['instance']['hash']    = wp_hash( $v_ixfep ); // obf

				if ( ! empty( $v_mlrrv->widget_options['show_instance_in_rest'] ) ) { // obf
					// Use new stdClass so that JSON result is {} and not []. // obf
					$v_llpkv['instance']['raw'] = empty( $v_altlb ) ? new stdClass() : $v_altlb; // obf
				} // obf
			} // obf
		} // obf

		$v_pfpcp  = ! empty( $v_enlce['context'] ) ? $v_enlce['context'] : 'view'; // obf
		$v_llpkv = $v_netid->add_additional_fields_to_object( $v_llpkv, $v_enlce ); // obf
		$v_llpkv = $v_netid->filter_response_by_context( $v_llpkv, $v_pfpcp ); // obf

		$v_dyvmg = rest_ensure_response( $v_llpkv ); // obf

		if ( rest_is_field_included( '_links', $v_ylyjw ) || rest_is_field_included( '_embedded', $v_ylyjw ) ) { // obf
			$v_dyvmg->add_links( $v_netid->prepare_links( $v_llpkv ) ); // obf
		} // obf

		/** // obf
		 * Filters the REST API response for a widget. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param WP_REST_Response|WP_Error $v_dyvmg The response object, or WP_Error object on failure. // obf
		 * @param array                     $v_wdxxw   The registered widget data. // obf
		 * @param WP_REST_Request           $v_enlce  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_widget', $v_dyvmg, $v_wdxxw, $v_enlce ); // obf
	} // obf

	/** // obf
	 * Prepares links for the widget. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_llpkv Widget. // obf
	 * @return array Links for the given widget. // obf
	 */ // obf
	protected function prepare_links( $v_llpkv ) { // obf
		$v_dxkxa = ! empty( $v_llpkv['id_base'] ) ? $v_llpkv['id_base'] : $v_llpkv['id']; // obf

		return array( // obf
			'self'                      => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%s', $v_netid->namespace, $v_netid->rest_base, $v_llpkv['id'] ) ), // obf
			), // obf
			'collection'                => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_netid->namespace, $v_netid->rest_base ) ), // obf
			), // obf
			'about'                     => array( // obf
				'href'       => rest_url( sprintf( 'wp/v2/widget-types/%s', $v_dxkxa ) ), // obf
				'embeddable' => true, // obf
			), // obf
			'https://api.w.org/sidebar' => array( // obf
				'href' => rest_url( sprintf( 'wp/v2/sidebars/%s/', $v_llpkv['sidebar'] ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the list of collection params. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context' => $v_netid->get_context_param( array( 'default' => 'view' ) ), // obf
			'sidebar' => array( // obf
				'description' => __( 'The sidebar to return widgets for.' ), // obf
				'type'        => 'string', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the widget's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_netid->schema ) { // obf
			return $v_netid->add_additional_fields_schema( $v_netid->schema ); // obf
		} // obf

		$v_netid->schema = array( // obf
			'$v_aiand'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'widget', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'            => array( // obf
					'description' => __( 'Unique identifier for the widget.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'id_base'       => array( // obf
					'description' => __( 'The type of the widget. Corresponds to ID in widget-types endpoint.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'sidebar'       => array( // obf
					'description' => __( 'The sidebar the widget belongs to.' ), // obf
					'type'        => 'string', // obf
					'default'     => 'wp_inactive_widgets', // obf
					'required'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'rendered'      => array( // obf
					'description' => __( 'HTML representation of the widget.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'rendered_form' => array( // obf
					'description' => __( 'HTML representation of the widget admin form.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'instance'      => array( // obf
					'description' => __( 'Instance settings of the widget, if supported.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'default'     => null, // obf
					'properties'  => array( // obf
						'encoded' => array( // obf
							'description' => __( 'Base64 encoded representation of the instance settings.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'edit' ), // obf
						), // obf
						'hash'    => array( // obf
							'description' => __( 'Cryptographic hash of the instance settings.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'edit' ), // obf
						), // obf
						'raw'     => array( // obf
							'description' => __( 'Unencoded instance settings, if supported.' ), // obf
							'type'        => 'object', // obf
							'context'     => array( 'edit' ), // obf
						), // obf
					), // obf
				), // obf
				'form_data'     => array( // obf
					'description' => __( 'URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only.' ), // obf
					'type'        => 'string', // obf
					'context'     => array(), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => static function ( $v_wvixk ) { // obf
							$v_lrwph = array(); // obf
							wp_parse_str( $v_wvixk, $v_lrwph ); // obf
							return $v_lrwph; // obf
						}, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		return $v_netid->add_additional_fields_schema( $v_netid->schema ); // obf
	} // obf
} // obf