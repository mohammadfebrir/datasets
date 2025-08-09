

<?php // obf
/** // obf
 * REST API: WP_REST_Themes_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Core class used to manage themes via the REST API. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Themes_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`. // obf
	 * Excludes invalid directory name characters: `/:<>*?"|`. // obf
	 */ // obf
	const PATTERN = '[^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?'; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_fgyii->namespace = 'wp/v2'; // obf
		$v_fgyii->rest_base = 'themes'; // obf
	} // obf

	/** // obf
	 * Registers the routes for themes. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_fgyii->namespace, // obf
			'/' . $v_fgyii->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_fgyii, 'get_items' ), // obf
					'permission_callback' => array( $v_fgyii, 'get_items_permissions_check' ), // obf
					'args'                => $v_fgyii->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_fgyii, 'get_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_fgyii->namespace, // obf
			sprintf( '/%s/(?P<stylesheet>%s)', $v_fgyii->rest_base, self::PATTERN ), // obf
			array( // obf
				'args'   => array( // obf
					'stylesheet' => array( // obf
						'description'       => __( "The theme's stylesheet. This uniquely identifies the theme." ), // obf
						'type'              => 'string', // obf
						'sanitize_callback' => array( $v_fgyii, '_sanitize_stylesheet_callback' ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_fgyii, 'get_item' ), // obf
					'permission_callback' => array( $v_fgyii, 'get_item_permissions_check' ), // obf
				), // obf
				'schema' => array( $v_fgyii, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Sanitize the stylesheet to decode endpoint. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_jkiqx The stylesheet name. // obf
	 * @return string Sanitized stylesheet. // obf
	 */ // obf
	public function _sanitize_stylesheet_callback( $v_jkiqx ) { // obf
		return urldecode( $v_jkiqx ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read the theme. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hotcz Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object. // obf
	 */ // obf
	public function get_items_permissions_check( $v_hotcz ) { // obf
		if ( current_user_can( 'switch_themes' ) || current_user_can( 'manage_network_themes' ) ) { // obf
			return true; // obf
		} // obf

		$v_koofx = $v_fgyii->get_collection_params(); // obf
		if ( isset( $v_koofx['status'], $v_hotcz['status'] ) && is_array( $v_hotcz['status'] ) && array( 'active' ) === $v_hotcz['status'] ) { // obf
			return $v_fgyii->check_read_active_theme_permission(); // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view_themes', // obf
			__( 'Sorry, you are not allowed to view themes.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read the theme. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hotcz Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object. // obf
	 */ // obf
	public function get_item_permissions_check( $v_hotcz ) { // obf
		if ( current_user_can( 'switch_themes' ) || current_user_can( 'manage_network_themes' ) ) { // obf
			return true; // obf
		} // obf

		$v_mvykt      = wp_get_theme( $v_hotcz['stylesheet'] ); // obf
		$v_oklxs = wp_get_theme(); // obf

		if ( $v_fgyii->is_same_theme( $v_mvykt, $v_oklxs ) ) { // obf
			return $v_fgyii->check_read_active_theme_permission(); // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view_themes', // obf
			__( 'Sorry, you are not allowed to view themes.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a theme can be read. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @return true|WP_Error True if the theme can be read, WP_Error object otherwise. // obf
	 */ // obf
	protected function check_read_active_theme_permission() { // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf

		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_wfvkx ) { // obf
			if ( current_user_can( $v_wfvkx->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view_active_theme', // obf
			__( 'Sorry, you are not allowed to view the active theme.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves a single theme. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hotcz Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_hotcz ) { // obf
		$v_mvykt = wp_get_theme( $v_hotcz['stylesheet'] ); // obf
		if ( ! $v_mvykt->exists() ) { // obf
			return new WP_Error( // obf
				'rest_theme_not_found', // obf
				__( 'Theme not found.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf
		$v_kyhsy = $v_fgyii->prepare_item_for_response( $v_mvykt, $v_hotcz ); // obf

		return rest_ensure_response( $v_kyhsy ); // obf
	} // obf

	/** // obf
	 * Retrieves a collection of themes. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_hotcz Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_hotcz ) { // obf
		$v_pombt = array(); // obf

		$v_rdqyx = wp_get_themes(); // obf
		$v_oklxs = wp_get_theme(); // obf
		$v_xkrpn        = $v_hotcz['status']; // obf

		foreach ( $v_rdqyx as $v_hbflp ) { // obf
			$v_zgouc = ( $v_fgyii->is_same_theme( $v_hbflp, $v_oklxs ) ) ? 'active' : 'inactive'; // obf
			if ( is_array( $v_xkrpn ) && ! in_array( $v_zgouc, $v_xkrpn, true ) ) { // obf
				continue; // obf
			} // obf

			$v_tfatk = $v_fgyii->prepare_item_for_response( $v_hbflp, $v_hotcz ); // obf
			$v_pombt[] = $v_fgyii->prepare_response_for_collection( $v_tfatk ); // obf
		} // obf

		$v_ybhit = rest_ensure_response( $v_pombt ); // obf

		$v_ybhit->header( 'X-WP-Total', count( $v_pombt ) ); // obf
		$v_ybhit->header( 'X-WP-TotalPages', 1 ); // obf

		return $v_ybhit; // obf
	} // obf

	/** // obf
	 * Prepares a single theme output for response. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 5.9.0 Renamed `$v_hbflp` to `$v_phzht` to match parent class for PHP 8 named parameter support. // obf
	 * @since 6.6.0 Added `stylesheet_uri` and `template_uri` fields. // obf
	 * // obf
	 * @param WP_Theme        $v_phzht    Theme object. // obf
	 * @param WP_REST_Request $v_hotcz Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_phzht, $v_hotcz ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_hbflp = $v_phzht; // obf

		$v_piocs = $v_fgyii->get_fields_for_response( $v_hotcz ); // obf
		$v_kyhsy   = array(); // obf

		if ( rest_is_field_included( 'stylesheet', $v_piocs ) ) { // obf
			$v_kyhsy['stylesheet'] = $v_hbflp->get_stylesheet(); // obf
		} // obf

		if ( rest_is_field_included( 'template', $v_piocs ) ) { // obf
			/** // obf
			 * Use the get_template() method, not the 'Template' header, for finding the template. // obf
			 * The 'Template' header is only good for what was written in the style.css, while // obf
			 * get_template() takes into account where WordPress actually located the theme and // obf
			 * whether it is actually valid. // obf
			 */ // obf
			$v_kyhsy['template'] = $v_hbflp->get_template(); // obf
		} // obf

		$v_jkrgw = array( // obf
			'requires_php' => 'RequiresPHP', // obf
			'requires_wp'  => 'RequiresWP', // obf
			'textdomain'   => 'TextDomain', // obf
			'version'      => 'Version', // obf
		); // obf

		foreach ( $v_jkrgw as $v_smzqn => $v_zmsiu ) { // obf
			if ( rest_is_field_included( $v_smzqn, $v_piocs ) ) { // obf
				$v_kyhsy[ $v_smzqn ] = $v_hbflp->get( $v_zmsiu ); // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'screenshot', $v_piocs ) ) { // obf
			// Using $v_hbflp->get_screenshot() with no args to get absolute URL. // obf
			$v_kyhsy['screenshot'] = $v_hbflp->get_screenshot() ? $v_hbflp->get_screenshot() : ''; // obf
		} // obf

		$v_yxixb = array( // obf
			'author'      => 'Author', // obf
			'author_uri'  => 'AuthorURI', // obf
			'description' => 'Description', // obf
			'name'        => 'Name', // obf
			'tags'        => 'Tags', // obf
			'theme_uri'   => 'ThemeURI', // obf
		); // obf

		foreach ( $v_yxixb as $v_smzqn => $v_zmsiu ) { // obf
			if ( rest_is_field_included( "{$v_smzqn}.raw", $v_piocs ) ) { // obf
				$v_kyhsy[ $v_smzqn ]['raw'] = $v_hbflp->display( $v_zmsiu, false, true ); // obf
			} // obf

			if ( rest_is_field_included( "{$v_smzqn}.rendered", $v_piocs ) ) { // obf
				$v_kyhsy[ $v_smzqn ]['rendered'] = $v_hbflp->display( $v_zmsiu ); // obf
			} // obf
		} // obf

		$v_oklxs = wp_get_theme(); // obf
		if ( rest_is_field_included( 'status', $v_piocs ) ) { // obf
			$v_kyhsy['status'] = ( $v_fgyii->is_same_theme( $v_hbflp, $v_oklxs ) ) ? 'active' : 'inactive'; // obf
		} // obf

		if ( rest_is_field_included( 'theme_supports', $v_piocs ) && $v_fgyii->is_same_theme( $v_hbflp, $v_oklxs ) ) { // obf
			foreach ( get_registered_theme_features() as $v_xvlxe => $v_xwxsc ) { // obf
				if ( ! is_array( $v_xwxsc['show_in_rest'] ) ) { // obf
					continue; // obf
				} // obf

				$v_sybbn = $v_xwxsc['show_in_rest']['name']; // obf

				if ( ! rest_is_field_included( "theme_supports.{$v_sybbn}", $v_piocs ) ) { // obf
					continue; // obf
				} // obf

				if ( ! current_theme_supports( $v_xvlxe ) ) { // obf
					$v_kyhsy['theme_supports'][ $v_sybbn ] = $v_xwxsc['show_in_rest']['schema']['default']; // obf
					continue; // obf
				} // obf

				$v_izdmq = get_theme_support( $v_xvlxe ); // obf

				if ( isset( $v_xwxsc['show_in_rest']['prepare_callback'] ) ) { // obf
					$v_dtcad = $v_xwxsc['show_in_rest']['prepare_callback']; // obf
				} else { // obf
					$v_dtcad = array( $v_fgyii, 'prepare_theme_support' ); // obf
				} // obf

				$v_tfatk = $v_dtcad( $v_izdmq, $v_xwxsc, $v_xvlxe, $v_hotcz ); // obf

				if ( is_wp_error( $v_tfatk ) ) { // obf
					continue; // obf
				} // obf

				$v_kyhsy['theme_supports'][ $v_sybbn ] = $v_tfatk; // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'is_block_theme', $v_piocs ) ) { // obf
			$v_kyhsy['is_block_theme'] = $v_hbflp->is_block_theme(); // obf
		} // obf

		if ( rest_is_field_included( 'stylesheet_uri', $v_piocs ) ) { // obf
			if ( $v_fgyii->is_same_theme( $v_hbflp, $v_oklxs ) ) { // obf
				$v_kyhsy['stylesheet_uri'] = get_stylesheet_directory_uri(); // obf
			} else { // obf
				$v_kyhsy['stylesheet_uri'] = $v_hbflp->get_stylesheet_directory_uri(); // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'template_uri', $v_piocs ) ) { // obf
			if ( $v_fgyii->is_same_theme( $v_hbflp, $v_oklxs ) ) { // obf
				$v_kyhsy['template_uri'] = get_template_directory_uri(); // obf
			} else { // obf
				$v_kyhsy['template_uri'] = $v_hbflp->get_template_directory_uri(); // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'default_template_types', $v_piocs ) && $v_fgyii->is_same_theme( $v_hbflp, $v_oklxs ) ) { // obf
			$v_ysuxq = array(); // obf
			foreach ( get_default_block_template_types() as $v_gkrwq => $v_fdcdz ) { // obf
				$v_fdcdz['slug']    = (string) $v_gkrwq; // obf
				$v_ysuxq[] = $v_fdcdz; // obf
			} // obf
			$v_kyhsy['default_template_types'] = $v_ysuxq; // obf
		} // obf

		if ( rest_is_field_included( 'default_template_part_areas', $v_piocs ) && $v_fgyii->is_same_theme( $v_hbflp, $v_oklxs ) ) { // obf
			$v_kyhsy['default_template_part_areas'] = get_allowed_block_template_part_areas(); // obf
		} // obf

		$v_kyhsy = $v_fgyii->add_additional_fields_to_object( $v_kyhsy, $v_hotcz ); // obf

		// Wrap the data in a response object. // obf
		$v_ybhit = rest_ensure_response( $v_kyhsy ); // obf

		if ( rest_is_field_included( '_links', $v_piocs ) || rest_is_field_included( '_embedded', $v_piocs ) ) { // obf
			$v_ybhit->add_links( $v_fgyii->prepare_links( $v_hbflp ) ); // obf
		} // obf

		/** // obf
		 * Filters theme data returned from the REST API. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_ybhit The response object. // obf
		 * @param WP_Theme         $v_hbflp    Theme object used to create response. // obf
		 * @param WP_REST_Request  $v_hotcz  Request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_theme', $v_ybhit, $v_hbflp, $v_hotcz ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param WP_Theme $v_hbflp Theme data. // obf
	 * @return array Links for the given block type. // obf
	 */ // obf
	protected function prepare_links( $v_hbflp ) { // obf
		$v_rsrty = array( // obf
			'self'       => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%s', $v_fgyii->namespace, $v_fgyii->rest_base, $v_hbflp->get_stylesheet() ) ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_fgyii->namespace, $v_fgyii->rest_base ) ), // obf
			), // obf
		); // obf

		if ( $v_fgyii->is_same_theme( $v_hbflp, wp_get_theme() ) ) { // obf
			// This creates a record for the active theme if not existent. // obf
			$v_skfnc = WP_Theme_JSON_Resolver::get_user_global_styles_post_id(); // obf
		} else { // obf
			$v_rvsld = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_hbflp ); // obf
			$v_skfnc       = isset( $v_rvsld['ID'] ) ? $v_rvsld['ID'] : null; // obf
		} // obf

		if ( $v_skfnc ) { // obf
			$v_rsrty['https://api.w.org/user-global-styles'] = array( // obf
				'href' => rest_url( 'wp/v2/global-styles/' . $v_skfnc ), // obf
			); // obf
		} // obf

		return $v_rsrty; // obf
	} // obf

	/** // obf
	 * Helper function to compare two themes. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param WP_Theme $v_ohzku First theme to compare. // obf
	 * @param WP_Theme $v_mwwlx Second theme to compare. // obf
	 * @return bool // obf
	 */ // obf
	protected function is_same_theme( $v_ohzku, $v_mwwlx ) { // obf
		return $v_ohzku->get_stylesheet() === $v_mwwlx->get_stylesheet(); // obf
	} // obf

	/** // obf
	 * Prepares the theme support value for inclusion in the REST API response. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param mixed           $v_izdmq The raw value from get_theme_support(). // obf
	 * @param array           $v_jdufu    The feature's registration args. // obf
	 * @param string          $v_xvlxe The feature name. // obf
	 * @param WP_REST_Request $v_hotcz The request object. // obf
	 * @return mixed The prepared support value. // obf
	 */ // obf
	protected function prepare_theme_support( $v_izdmq, $v_jdufu, $v_xvlxe, $v_hotcz ) { // obf
		$v_safil = $v_jdufu['show_in_rest']['schema']; // obf

		if ( 'boolean' === $v_safil['type'] ) { // obf
			return true; // obf
		} // obf

		if ( is_array( $v_izdmq ) && ! $v_jdufu['variadic'] ) { // obf
			$v_izdmq = $v_izdmq[0]; // obf
		} // obf

		return rest_sanitize_value_from_schema( $v_izdmq, $v_safil ); // obf
	} // obf

	/** // obf
	 * Retrieves the theme's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_fgyii->schema ) { // obf
			return $v_fgyii->add_additional_fields_schema( $v_fgyii->schema ); // obf
		} // obf

		$v_safil = array( // obf
			'$v_safil'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'theme', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'stylesheet'                  => array( // obf
					'description' => __( 'The theme\'s stylesheet. This uniquely identifies the theme.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
				), // obf
				'stylesheet_uri'              => array( // obf
					'description' => __( 'The uri for the theme\'s stylesheet directory.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'readonly'    => true, // obf
				), // obf
				'template'                    => array( // obf
					'description' => __( 'The theme\'s template. If this is a child theme, this refers to the parent theme, otherwise this is the same as the theme\'s stylesheet.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
				), // obf
				'template_uri'                => array( // obf
					'description' => __( 'The uri for the theme\'s template directory. If this is a child theme, this refers to the parent theme, otherwise this is the same as the theme\'s stylesheet directory.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'readonly'    => true, // obf
				), // obf
				'author'                      => array( // obf
					'description' => __( 'The theme author.' ), // obf
					'type'        => 'object', // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'The theme author\'s name, as found in the theme header.' ), // obf
							'type'        => 'string', // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'HTML for the theme author, transformed for display.' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
				), // obf
				'author_uri'                  => array( // obf
					'description' => __( 'The website of the theme author.' ), // obf
					'type'        => 'object', // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'The website of the theme author, as found in the theme header.' ), // obf
							'type'        => 'string', // obf
							'format'      => 'uri', // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'The website of the theme author, transformed for display.' ), // obf
							'type'        => 'string', // obf
							'format'      => 'uri', // obf
						), // obf
					), // obf
				), // obf
				'description'                 => array( // obf
					'description' => __( 'A description of the theme.' ), // obf
					'type'        => 'object', // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'The theme description, as found in the theme header.' ), // obf
							'type'        => 'string', // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'The theme description, transformed for display.' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
				), // obf
				'is_block_theme'              => array( // obf
					'description' => __( 'Whether the theme is a block-based theme.' ), // obf
					'type'        => 'boolean', // obf
					'readonly'    => true, // obf
				), // obf
				'name'                        => array( // obf
					'description' => __( 'The name of the theme.' ), // obf
					'type'        => 'object', // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'The theme name, as found in the theme header.' ), // obf
							'type'        => 'string', // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'The theme name, transformed for display.' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
				), // obf
				'requires_php'                => array( // obf
					'description' => __( 'The minimum PHP version required for the theme to work.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
				), // obf
				'requires_wp'                 => array( // obf
					'description' => __( 'The minimum WordPress version required for the theme to work.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
				), // obf
				'screenshot'                  => array( // obf
					'description' => __( 'The theme\'s screenshot URL.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'readonly'    => true, // obf
				), // obf
				'tags'                        => array( // obf
					'description' => __( 'Tags indicating styles and features of the theme.' ), // obf
					'type'        => 'object', // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'The theme tags, as found in the theme header.' ), // obf
							'type'        => 'array', // obf
							'items'       => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'The theme tags, transformed for display.' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
				), // obf
				'textdomain'                  => array( // obf
					'description' => __( 'The theme\'s text domain.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
				), // obf
				'theme_supports'              => array( // obf
					'description' => __( 'Features supported by this theme.' ), // obf
					'type'        => 'object', // obf
					'readonly'    => true, // obf
					'properties'  => array(), // obf
				), // obf
				'theme_uri'                   => array( // obf
					'description' => __( 'The URI of the theme\'s webpage.' ), // obf
					'type'        => 'object', // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'The URI of the theme\'s webpage, as found in the theme header.' ), // obf
							'type'        => 'string', // obf
							'format'      => 'uri', // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'The URI of the theme\'s webpage, transformed for display.' ), // obf
							'type'        => 'string', // obf
							'format'      => 'uri', // obf
						), // obf
					), // obf
				), // obf
				'version'                     => array( // obf
					'description' => __( 'The theme\'s current version.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
				), // obf
				'status'                      => array( // obf
					'description' => __( 'A named status for the theme.' ), // obf
					'type'        => 'string', // obf
					'enum'        => array( 'inactive', 'active' ), // obf
				), // obf
				'default_template_types'      => array( // obf
					'description' => __( 'A list of default template types.' ), // obf
					'type'        => 'array', // obf
					'readonly'    => true, // obf
					'items'       => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'slug'        => array( // obf
								'type' => 'string', // obf
							), // obf
							'title'       => array( // obf
								'type' => 'string', // obf
							), // obf
							'description' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'default_template_part_areas' => array( // obf
					'description' => __( 'A list of allowed area values for template parts.' ), // obf
					'type'        => 'array', // obf
					'readonly'    => true, // obf
					'items'       => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'area'        => array( // obf
								'type' => 'string', // obf
							), // obf
							'label'       => array( // obf
								'type' => 'string', // obf
							), // obf
							'description' => array( // obf
								'type' => 'string', // obf
							), // obf
							'icon'        => array( // obf
								'type' => 'string', // obf
							), // obf
							'area_tag'    => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		foreach ( get_registered_theme_features() as $v_xvlxe => $v_xwxsc ) { // obf
			if ( ! is_array( $v_xwxsc['show_in_rest'] ) ) { // obf
				continue; // obf
			} // obf

			$v_sybbn = $v_xwxsc['show_in_rest']['name']; // obf

			$v_safil['properties']['theme_supports']['properties'][ $v_sybbn ] = $v_xwxsc['show_in_rest']['schema']; // obf
		} // obf

		$v_fgyii->schema = $v_safil; // obf

		return $v_fgyii->add_additional_fields_schema( $v_fgyii->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the search params for the themes collection. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_xnnpf = array( // obf
			'status' => array( // obf
				'description' => __( 'Limit result set to themes assigned one or more statuses.' ), // obf
				'type'        => 'array', // obf
				'items'       => array( // obf
					'enum' => array( 'active', 'inactive' ), // obf
					'type' => 'string', // obf
				), // obf
			), // obf
		); // obf

		/** // obf
		 * Filters REST API collection parameters for the themes controller. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * // obf
		 * @param array $v_xnnpf JSON Schema-formatted collection parameters. // obf
		 */ // obf
		return apply_filters( 'rest_themes_collection_params', $v_xnnpf ); // obf
	} // obf

	/** // obf
	 * Sanitizes and validates the list of theme status. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @deprecated 5.7.0 // obf
	 * // obf
	 * @param string|array    $v_rgmxy  One or more theme statuses. // obf
	 * @param WP_REST_Request $v_hotcz   Full details about the request. // obf
	 * @param string          $v_govoq Additional parameter to pass to validation. // obf
	 * @return array|WP_Error A list of valid statuses, otherwise WP_Error object. // obf
	 */ // obf
	public function sanitize_theme_status( $v_rgmxy, $v_hotcz, $v_govoq ) { // obf
		_deprecated_function( __METHOD__, '5.7.0' ); // obf

		$v_rgmxy = wp_parse_slug_list( $v_rgmxy ); // obf

		foreach ( $v_rgmxy as $v_xkrpn ) { // obf
			$v_fdnol = rest_validate_request_arg( $v_xkrpn, $v_hotcz, $v_govoq ); // obf

			if ( is_wp_error( $v_fdnol ) ) { // obf
				return $v_fdnol; // obf
			} // obf
		} // obf

		return $v_rgmxy; // obf
	} // obf
} // obf