

<?php // obf
/** // obf
 * REST API: WP_REST_Plugins_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Core class to access plugins via the REST API. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Plugins_Controller extends WP_REST_Controller { // obf

	const PATTERN = '[^.\/]+(?:\/[^.\/]+)?'; // obf

	/** // obf
	 * Plugins controller constructor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_wfikx->namespace = 'wp/v2'; // obf
		$v_wfikx->rest_base = 'plugins'; // obf
	} // obf

	/** // obf
	 * Registers the routes for the plugins controller. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_wfikx->namespace, // obf
			'/' . $v_wfikx->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_wfikx, 'get_items' ), // obf
					'permission_callback' => array( $v_wfikx, 'get_items_permissions_check' ), // obf
					'args'                => $v_wfikx->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_wfikx, 'create_item' ), // obf
					'permission_callback' => array( $v_wfikx, 'create_item_permissions_check' ), // obf
					'args'                => array( // obf
						'slug'   => array( // obf
							'type'        => 'string', // obf
							'required'    => true, // obf
							'description' => __( 'WordPress.org plugin directory slug.' ), // obf
							'pattern'     => '[\w\-]+', // obf
						), // obf
						'status' => array( // obf
							'description' => __( 'The plugin activation status.' ), // obf
							'type'        => 'string', // obf
							'enum'        => is_multisite() ? array( 'inactive', 'active', 'network-active' ) : array( 'inactive', 'active' ), // obf
							'default'     => 'inactive', // obf
						), // obf
					), // obf
				), // obf
				'schema' => array( $v_wfikx, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_wfikx->namespace, // obf
			'/' . $v_wfikx->rest_base . '/(?P<plugin>' . self::PATTERN . ')', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_wfikx, 'get_item' ), // obf
					'permission_callback' => array( $v_wfikx, 'get_item_permissions_check' ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_wfikx, 'update_item' ), // obf
					'permission_callback' => array( $v_wfikx, 'update_item_permissions_check' ), // obf
					'args'                => $v_wfikx->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_wfikx, 'delete_item' ), // obf
					'permission_callback' => array( $v_wfikx, 'delete_item_permissions_check' ), // obf
				), // obf
				'args'   => array( // obf
					'context' => $v_wfikx->get_context_param( array( 'default' => 'view' ) ), // obf
					'plugin'  => array( // obf
						'type'              => 'string', // obf
						'pattern'           => self::PATTERN, // obf
						'validate_callback' => array( $v_wfikx, 'validate_plugin_param' ), // obf
						'sanitize_callback' => array( $v_wfikx, 'sanitize_plugin_param' ), // obf
					), // obf
				), // obf
				'schema' => array( $v_wfikx, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get plugins. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_qxsvv ) { // obf
		if ( ! current_user_can( 'activate_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_view_plugins', // obf
				__( 'Sorry, you are not allowed to manage plugins for this site.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a collection of plugins. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_qxsvv ) { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		$v_wgxrt = array(); // obf

		foreach ( get_plugins() as $v_sxwgm => $v_riqjy ) { // obf
			if ( is_wp_error( $v_wfikx->check_read_permission( $v_sxwgm ) ) ) { // obf
				continue; // obf
			} // obf

			$v_riqjy['_file'] = $v_sxwgm; // obf

			if ( ! $v_wfikx->does_plugin_match_request( $v_qxsvv, $v_riqjy ) ) { // obf
				continue; // obf
			} // obf

			$v_wgxrt[] = $v_wfikx->prepare_response_for_collection( $v_wfikx->prepare_item_for_response( $v_riqjy, $v_qxsvv ) ); // obf
		} // obf

		return new WP_REST_Response( $v_wgxrt ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get a specific plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_qxsvv ) { // obf
		if ( ! current_user_can( 'activate_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_view_plugin', // obf
				__( 'Sorry, you are not allowed to manage plugins for this site.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		$v_eeeiw = $v_wfikx->check_read_permission( $v_qxsvv['plugin'] ); // obf

		if ( is_wp_error( $v_eeeiw ) ) { // obf
			return $v_eeeiw; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves one plugin from the site. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_qxsvv ) { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		$v_riqjy = $v_wfikx->get_plugin_data( $v_qxsvv['plugin'] ); // obf

		if ( is_wp_error( $v_riqjy ) ) { // obf
			return $v_riqjy; // obf
		} // obf

		return $v_wfikx->prepare_item_for_response( $v_riqjy, $v_qxsvv ); // obf
	} // obf

	/** // obf
	 * Checks if the given plugin can be viewed by the current user. // obf
	 * // obf
	 * On multisite, this hides non-active network only plugins if the user does not have permission // obf
	 * to manage network plugins. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_jkvwf The plugin file to check. // obf
	 * @return true|WP_Error True if can read, a WP_Error instance otherwise. // obf
	 */ // obf
	protected function check_read_permission( $v_jkvwf ) { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		if ( ! $v_wfikx->is_plugin_installed( $v_jkvwf ) ) { // obf
			return new WP_Error( 'rest_plugin_not_found', __( 'Plugin not found.' ), array( 'status' => 404 ) ); // obf
		} // obf

		if ( ! is_multisite() ) { // obf
			return true; // obf
		} // obf

		if ( ! is_network_only_plugin( $v_jkvwf ) || is_plugin_active( $v_jkvwf ) || current_user_can( 'manage_network_plugins' ) ) { // obf
			return true; // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view_plugin', // obf
			__( 'Sorry, you are not allowed to manage this plugin.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to upload plugins. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_qxsvv ) { // obf
		if ( ! current_user_can( 'install_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_install_plugin', // obf
				__( 'Sorry, you are not allowed to install plugins on this site.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( 'inactive' !== $v_qxsvv['status'] && ! current_user_can( 'activate_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_activate_plugin', // obf
				__( 'Sorry, you are not allowed to activate plugins.' ), // obf
				array( // obf
					'status' => rest_authorization_required_code(), // obf
				) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Uploads a plugin and optionally activates it. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @global WP_Filesystem_Base $v_fqbch WordPress filesystem subclass. // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_qxsvv ) { // obf
		global $v_fqbch; // obf

		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // obf

		$v_taulm = $v_qxsvv['slug']; // obf

		// Verify filesystem is accessible first. // obf
		$v_djtlk = $v_wfikx->is_filesystem_available(); // obf
		if ( is_wp_error( $v_djtlk ) ) { // obf
			return $v_djtlk; // obf
		} // obf

		$v_dhlva = plugins_api( // obf
			'plugin_information', // obf
			array( // obf
				'slug'   => $v_taulm, // obf
				'fields' => array( // obf
					'sections'       => false, // obf
					'language_packs' => true, // obf
				), // obf
			) // obf
		); // obf

		if ( is_wp_error( $v_dhlva ) ) { // obf
			if ( str_contains( $v_dhlva->get_error_message(), 'Plugin not found.' ) ) { // obf
				$v_dhlva->add_data( array( 'status' => 404 ) ); // obf
			} else { // obf
				$v_dhlva->add_data( array( 'status' => 500 ) ); // obf
			} // obf

			return $v_dhlva; // obf
		} // obf

		$v_rsmbb     = new WP_Ajax_Upgrader_Skin(); // obf
		$v_cplqu = new Plugin_Upgrader( $v_rsmbb ); // obf

		$v_oabox = $v_cplqu->install( $v_dhlva->download_link ); // obf

		if ( is_wp_error( $v_oabox ) ) { // obf
			$v_oabox->add_data( array( 'status' => 500 ) ); // obf

			return $v_oabox; // obf
		} // obf

		// This should be the same as $v_oabox above. // obf
		if ( is_wp_error( $v_rsmbb->result ) ) { // obf
			$v_rsmbb->result->add_data( array( 'status' => 500 ) ); // obf

			return $v_rsmbb->result; // obf
		} // obf

		if ( $v_rsmbb->get_errors()->has_errors() ) { // obf
			$v_ydeme = $v_rsmbb->get_errors(); // obf
			$v_ydeme->add_data( array( 'status' => 500 ) ); // obf

			return $v_ydeme; // obf
		} // obf

		if ( is_null( $v_oabox ) ) { // obf
			// Pass through the error from WP_Filesystem if one was raised. // obf
			if ( $v_fqbch instanceof WP_Filesystem_Base // obf
				&& is_wp_error( $v_fqbch->errors ) && $v_fqbch->errors->has_errors() // obf
			) { // obf
				return new WP_Error( // obf
					'unable_to_connect_to_filesystem', // obf
					$v_fqbch->errors->get_error_message(), // obf
					array( 'status' => 500 ) // obf
				); // obf
			} // obf

			return new WP_Error( // obf
				'unable_to_connect_to_filesystem', // obf
				__( 'Unable to connect to the filesystem. Please confirm your credentials.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		$v_sxwgm = $v_cplqu->plugin_info(); // obf

		if ( ! $v_sxwgm ) { // obf
			return new WP_Error( // obf
				'unable_to_determine_installed_plugin', // obf
				__( 'Unable to determine what plugin was installed.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		if ( 'inactive' !== $v_qxsvv['status'] ) { // obf
			$v_clrco = $v_wfikx->plugin_status_permission_check( $v_sxwgm, $v_qxsvv['status'], 'inactive' ); // obf

			if ( is_wp_error( $v_clrco ) ) { // obf
				return $v_clrco; // obf
			} // obf

			$v_yefir = $v_wfikx->handle_plugin_status( $v_sxwgm, $v_qxsvv['status'], 'inactive' ); // obf

			if ( is_wp_error( $v_yefir ) ) { // obf
				return $v_yefir; // obf
			} // obf
		} // obf

		// Install translations. // obf
		$v_bdqfx = array_values( get_available_languages() ); // obf
		/** This filter is documented in wp-includes/update.php */ // obf
		$v_bdqfx = apply_filters( 'plugins_update_check_locales', $v_bdqfx ); // obf

		$v_zaqgm = array_map( // obf
			static function ( $v_sensg ) { // obf
				return (object) $v_sensg; // obf
			}, // obf
			$v_dhlva->language_packs // obf
		); // obf

		$v_zaqgm = array_filter( // obf
			$v_zaqgm, // obf
			static function ( $v_yrapr ) use ( $v_bdqfx ) { // obf
				return in_array( $v_yrapr->language, $v_bdqfx, true ); // obf
			} // obf
		); // obf

		if ( $v_zaqgm ) { // obf
			$v_daocv = new Language_Pack_Upgrader( $v_rsmbb ); // obf

			// Install all applicable language packs for the plugin. // obf
			$v_daocv->bulk_upgrade( $v_zaqgm ); // obf
		} // obf

		$v_pkohx          = WP_PLUGIN_DIR . '/' . $v_sxwgm; // obf
		$v_riqjy          = get_plugin_data( $v_pkohx, false, false ); // obf
		$v_riqjy['_file'] = $v_sxwgm; // obf

		$v_jehsu = $v_wfikx->prepare_item_for_response( $v_riqjy, $v_qxsvv ); // obf
		$v_jehsu->set_status( 201 ); // obf
		$v_jehsu->header( 'Location', rest_url( sprintf( '%s/%s/%s', $v_wfikx->namespace, $v_wfikx->rest_base, substr( $v_sxwgm, 0, - 4 ) ) ) ); // obf

		return $v_jehsu; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to update a specific plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_qxsvv ) { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		if ( ! current_user_can( 'activate_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_plugins', // obf
				__( 'Sorry, you are not allowed to manage plugins for this site.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		$v_eeeiw = $v_wfikx->check_read_permission( $v_qxsvv['plugin'] ); // obf

		if ( is_wp_error( $v_eeeiw ) ) { // obf
			return $v_eeeiw; // obf
		} // obf

		$v_dmwap = $v_wfikx->get_plugin_status( $v_qxsvv['plugin'] ); // obf

		if ( $v_qxsvv['status'] && $v_dmwap !== $v_qxsvv['status'] ) { // obf
			$v_clrco = $v_wfikx->plugin_status_permission_check( $v_qxsvv['plugin'], $v_qxsvv['status'], $v_dmwap ); // obf

			if ( is_wp_error( $v_clrco ) ) { // obf
				return $v_clrco; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates one plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_qxsvv ) { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		$v_riqjy = $v_wfikx->get_plugin_data( $v_qxsvv['plugin'] ); // obf

		if ( is_wp_error( $v_riqjy ) ) { // obf
			return $v_riqjy; // obf
		} // obf

		$v_dmwap = $v_wfikx->get_plugin_status( $v_qxsvv['plugin'] ); // obf

		if ( $v_qxsvv['status'] && $v_dmwap !== $v_qxsvv['status'] ) { // obf
			$v_tlgyl = $v_wfikx->handle_plugin_status( $v_qxsvv['plugin'], $v_qxsvv['status'], $v_dmwap ); // obf

			if ( is_wp_error( $v_tlgyl ) ) { // obf
				return $v_tlgyl; // obf
			} // obf
		} // obf

		$v_wfikx->update_additional_fields_for_object( $v_riqjy, $v_qxsvv ); // obf

		$v_qxsvv['context'] = 'edit'; // obf

		return $v_wfikx->prepare_item_for_response( $v_riqjy, $v_qxsvv ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete a specific plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_qxsvv ) { // obf
		if ( ! current_user_can( 'activate_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_plugins', // obf
				__( 'Sorry, you are not allowed to manage plugins for this site.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! current_user_can( 'delete_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_plugins', // obf
				__( 'Sorry, you are not allowed to delete plugins for this site.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		$v_eeeiw = $v_wfikx->check_read_permission( $v_qxsvv['plugin'] ); // obf

		if ( is_wp_error( $v_eeeiw ) ) { // obf
			return $v_eeeiw; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes one plugin from the site. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_qxsvv ) { // obf
		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		$v_riqjy = $v_wfikx->get_plugin_data( $v_qxsvv['plugin'] ); // obf

		if ( is_wp_error( $v_riqjy ) ) { // obf
			return $v_riqjy; // obf
		} // obf

		if ( is_plugin_active( $v_qxsvv['plugin'] ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete_active_plugin', // obf
				__( 'Cannot delete an active plugin. Please deactivate it first.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_djtlk = $v_wfikx->is_filesystem_available(); // obf
		if ( is_wp_error( $v_djtlk ) ) { // obf
			return $v_djtlk; // obf
		} // obf

		$v_norju = $v_wfikx->prepare_item_for_response( $v_riqjy, $v_qxsvv ); // obf
		$v_dbnin  = delete_plugins( array( $v_qxsvv['plugin'] ) ); // obf

		if ( is_wp_error( $v_dbnin ) ) { // obf
			$v_dbnin->add_data( array( 'status' => 500 ) ); // obf

			return $v_dbnin; // obf
		} // obf

		return new WP_REST_Response( // obf
			array( // obf
				'deleted'  => true, // obf
				'previous' => $v_norju->get_data(), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares the plugin for the REST response. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array           $v_sensg    Unmarked up and untranslated plugin data from {@see get_plugin_data()}. // obf
	 * @param WP_REST_Request $v_qxsvv Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function prepare_item_for_response( $v_sensg, $v_qxsvv ) { // obf
		$v_eqnmp = $v_wfikx->get_fields_for_response( $v_qxsvv ); // obf

		$v_sensg   = _get_plugin_data_markup_translate( $v_sensg['_file'], $v_sensg, false ); // obf
		$v_xmiri = _get_plugin_data_markup_translate( $v_sensg['_file'], $v_sensg, true ); // obf

		$v_riqjy = array( // obf
			'plugin'       => substr( $v_sensg['_file'], 0, - 4 ), // obf
			'status'       => $v_wfikx->get_plugin_status( $v_sensg['_file'] ), // obf
			'name'         => $v_sensg['Name'], // obf
			'plugin_uri'   => $v_sensg['PluginURI'], // obf
			'author'       => $v_sensg['Author'], // obf
			'author_uri'   => $v_sensg['AuthorURI'], // obf
			'description'  => array( // obf
				'raw'      => $v_sensg['Description'], // obf
				'rendered' => $v_xmiri['Description'], // obf
			), // obf
			'version'      => $v_sensg['Version'], // obf
			'network_only' => $v_sensg['Network'], // obf
			'requires_wp'  => $v_sensg['RequiresWP'], // obf
			'requires_php' => $v_sensg['RequiresPHP'], // obf
			'textdomain'   => $v_sensg['TextDomain'], // obf
		); // obf

		$v_riqjy = $v_wfikx->add_additional_fields_to_object( $v_riqjy, $v_qxsvv ); // obf

		$v_jehsu = new WP_REST_Response( $v_riqjy ); // obf

		if ( rest_is_field_included( '_links', $v_eqnmp ) || rest_is_field_included( '_embedded', $v_eqnmp ) ) { // obf
			$v_jehsu->add_links( $v_wfikx->prepare_links( $v_sensg ) ); // obf
		} // obf

		/** // obf
		 * Filters plugin data for a REST API response. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_jehsu The response object. // obf
		 * @param array            $v_sensg     The plugin item from {@see get_plugin_data()}. // obf
		 * @param WP_REST_Request  $v_qxsvv  The request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_plugin', $v_jehsu, $v_sensg, $v_qxsvv ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array $v_sensg The plugin item. // obf
	 * @return array[] // obf
	 */ // obf
	protected function prepare_links( $v_sensg ) { // obf
		return array( // obf
			'self' => array( // obf
				'href' => rest_url( // obf
					sprintf( // obf
						'%s/%s/%s', // obf
						$v_wfikx->namespace, // obf
						$v_wfikx->rest_base, // obf
						substr( $v_sensg['_file'], 0, - 4 ) // obf
					) // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the plugin header data for a plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_jkvwf The plugin file to get data for. // obf
	 * @return array|WP_Error The plugin data, or a WP_Error if the plugin is not installed. // obf
	 */ // obf
	protected function get_plugin_data( $v_jkvwf ) { // obf
		$v_wgxrt = get_plugins(); // obf

		if ( ! isset( $v_wgxrt[ $v_jkvwf ] ) ) { // obf
			return new WP_Error( 'rest_plugin_not_found', __( 'Plugin not found.' ), array( 'status' => 404 ) ); // obf
		} // obf

		$v_riqjy          = $v_wgxrt[ $v_jkvwf ]; // obf
		$v_riqjy['_file'] = $v_jkvwf; // obf

		return $v_riqjy; // obf
	} // obf

	/** // obf
	 * Get's the activation status for a plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_jkvwf The plugin file to check. // obf
	 * @return string Either 'network-active', 'active' or 'inactive'. // obf
	 */ // obf
	protected function get_plugin_status( $v_jkvwf ) { // obf
		if ( is_plugin_active_for_network( $v_jkvwf ) ) { // obf
			return 'network-active'; // obf
		} // obf

		if ( is_plugin_active( $v_jkvwf ) ) { // obf
			return 'active'; // obf
		} // obf

		return 'inactive'; // obf
	} // obf

	/** // obf
	 * Handle updating a plugin's status. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_jkvwf         The plugin file to update. // obf
	 * @param string $v_umkgy     The plugin's new status. // obf
	 * @param string $v_sohrf The plugin's current status. // obf
	 * @return true|WP_Error // obf
	 */ // obf
	protected function plugin_status_permission_check( $v_jkvwf, $v_umkgy, $v_sohrf ) { // obf
		if ( is_multisite() && ( 'network-active' === $v_sohrf || 'network-active' === $v_umkgy ) && ! current_user_can( 'manage_network_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_network_plugins', // obf
				__( 'Sorry, you are not allowed to manage network plugins.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ( 'active' === $v_umkgy || 'network-active' === $v_umkgy ) && ! current_user_can( 'activate_plugin', $v_jkvwf ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_activate_plugin', // obf
				__( 'Sorry, you are not allowed to activate this plugin.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( 'inactive' === $v_umkgy && ! current_user_can( 'deactivate_plugin', $v_jkvwf ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_deactivate_plugin', // obf
				__( 'Sorry, you are not allowed to deactivate this plugin.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Handle updating a plugin's status. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_jkvwf         The plugin file to update. // obf
	 * @param string $v_umkgy     The plugin's new status. // obf
	 * @param string $v_sohrf The plugin's current status. // obf
	 * @return true|WP_Error // obf
	 */ // obf
	protected function handle_plugin_status( $v_jkvwf, $v_umkgy, $v_sohrf ) { // obf
		if ( 'inactive' === $v_umkgy ) { // obf
			deactivate_plugins( $v_jkvwf, false, 'network-active' === $v_sohrf ); // obf

			return true; // obf
		} // obf

		if ( 'active' === $v_umkgy && 'network-active' === $v_sohrf ) { // obf
			return true; // obf
		} // obf

		$v_jqlcx = 'network-active' === $v_umkgy; // obf

		if ( is_multisite() && ! $v_jqlcx && is_network_only_plugin( $v_jkvwf ) ) { // obf
			return new WP_Error( // obf
				'rest_network_only_plugin', // obf
				__( 'Network only plugin must be network activated.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_fcbzq = activate_plugin( $v_jkvwf, '', $v_jqlcx ); // obf

		if ( is_wp_error( $v_fcbzq ) ) { // obf
			$v_fcbzq->add_data( array( 'status' => 500 ) ); // obf

			return $v_fcbzq; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks that the "plugin" parameter is a valid path. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_sxwgm The plugin file parameter. // obf
	 * @return bool // obf
	 */ // obf
	public function validate_plugin_param( $v_sxwgm ) { // obf
		if ( ! is_string( $v_sxwgm ) || ! preg_match( '/' . self::PATTERN . '/u', $v_sxwgm ) ) { // obf
			return false; // obf
		} // obf

		$v_dantv = validate_file( plugin_basename( $v_sxwgm ) ); // obf

		return 0 === $v_dantv; // obf
	} // obf

	/** // obf
	 * Sanitizes the "plugin" parameter to be a proper plugin file with ".php" appended. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_sxwgm The plugin file parameter. // obf
	 * @return string // obf
	 */ // obf
	public function sanitize_plugin_param( $v_sxwgm ) { // obf
		return plugin_basename( sanitize_text_field( $v_sxwgm . '.php' ) ); // obf
	} // obf

	/** // obf
	 * Checks if the plugin matches the requested parameters. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qxsvv The request to require the plugin matches against. // obf
	 * @param array           $v_sensg    The plugin item. // obf
	 * @return bool // obf
	 */ // obf
	protected function does_plugin_match_request( $v_qxsvv, $v_sensg ) { // obf
		$v_jlzhj = $v_qxsvv['search']; // obf

		if ( $v_jlzhj ) { // obf
			$v_hrywn = false; // obf

			foreach ( $v_sensg as $v_nmxbf ) { // obf
				if ( is_string( $v_nmxbf ) && str_contains( strip_tags( $v_nmxbf ), $v_jlzhj ) ) { // obf
					$v_hrywn = true; // obf
					break; // obf
				} // obf
			} // obf

			if ( ! $v_hrywn ) { // obf
				return false; // obf
			} // obf
		} // obf

		$v_dmwap = $v_qxsvv['status']; // obf

		if ( $v_dmwap && ! in_array( $v_wfikx->get_plugin_status( $v_sensg['_file'] ), $v_dmwap, true ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if the plugin is installed. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_jkvwf The plugin file. // obf
	 * @return bool // obf
	 */ // obf
	protected function is_plugin_installed( $v_jkvwf ) { // obf
		return file_exists( WP_PLUGIN_DIR . '/' . $v_jkvwf ); // obf
	} // obf

	/** // obf
	 * Determine if the endpoints are available. // obf
	 * // obf
	 * Only the 'Direct' filesystem transport, and SSH/FTP when credentials are stored are supported at present. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return true|WP_Error True if filesystem is available, WP_Error otherwise. // obf
	 */ // obf
	protected function is_filesystem_available() { // obf
		$v_pespt = get_filesystem_method(); // obf

		if ( 'direct' === $v_pespt ) { // obf
			return true; // obf
		} // obf

		ob_start(); // obf
		$v_sitem = request_filesystem_credentials( self_admin_url() ); // obf
		ob_end_clean(); // obf

		if ( $v_sitem ) { // obf
			return true; // obf
		} // obf

		return new WP_Error( 'fs_unavailable', __( 'The filesystem is currently unavailable for managing plugins.' ), array( 'status' => 500 ) ); // obf
	} // obf

	/** // obf
	 * Retrieves the plugin's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_wfikx->schema ) { // obf
			return $v_wfikx->add_additional_fields_schema( $v_wfikx->schema ); // obf
		} // obf

		$v_wfikx->schema = array( // obf
			'$v_vxyrp'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'plugin', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'plugin'       => array( // obf
					'description' => __( 'The plugin file.' ), // obf
					'type'        => 'string', // obf
					'pattern'     => self::PATTERN, // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'status'       => array( // obf
					'description' => __( 'The plugin activation status.' ), // obf
					'type'        => 'string', // obf
					'enum'        => is_multisite() ? array( 'inactive', 'active', 'network-active' ) : array( 'inactive', 'active' ), // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'name'         => array( // obf
					'description' => __( 'The plugin name.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'plugin_uri'   => array( // obf
					'description' => __( 'The plugin\'s website address.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'author'       => array( // obf
					'description' => __( 'The plugin author.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'author_uri'   => array( // obf
					'description' => __( 'Plugin author\'s website address.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'description'  => array( // obf
					'description' => __( 'The plugin description.' ), // obf
					'type'        => 'object', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit' ), // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'The raw plugin description.' ), // obf
							'type'        => 'string', // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'The plugin description formatted for display.' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
				), // obf
				'version'      => array( // obf
					'description' => __( 'The plugin version number.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'network_only' => array( // obf
					'description' => __( 'Whether the plugin can only be activated network-wide.' ), // obf
					'type'        => 'boolean', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'requires_wp'  => array( // obf
					'description' => __( 'Minimum required version of WordPress.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'requires_php' => array( // obf
					'description' => __( 'Minimum required version of PHP.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'textdomain'   => array( // obf
					'description' => __( 'The plugin\'s text domain.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
			), // obf
		); // obf

		return $v_wfikx->add_additional_fields_schema( $v_wfikx->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the collections. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array Query parameters for the collection. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_ufebu = parent::get_collection_params(); // obf

		$v_ufebu['context']['default'] = 'view'; // obf

		$v_ufebu['status'] = array( // obf
			'description' => __( 'Limits results to plugins with the given status.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
				'enum' => is_multisite() ? array( 'inactive', 'active', 'network-active' ) : array( 'inactive', 'active' ), // obf
			), // obf
		); // obf

		unset( $v_ufebu['page'], $v_ufebu['per_page'] ); // obf

		return $v_ufebu; // obf
	} // obf
} // obf