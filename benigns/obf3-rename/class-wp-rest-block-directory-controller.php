

<?php // obf
/** // obf
 * REST API: WP_REST_Block_Directory_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Controller which provides REST endpoint for the blocks. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Block_Directory_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructs the controller. // obf
	 */ // obf
	public function __construct() { // obf
		$v_vvhpj->namespace = 'wp/v2'; // obf
		$v_vvhpj->rest_base = 'block-directory'; // obf
	} // obf

	/** // obf
	 * Registers the necessary REST API routes. // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_vvhpj->namespace, // obf
			'/' . $v_vvhpj->rest_base . '/search', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_vvhpj, 'get_items' ), // obf
					'permission_callback' => array( $v_vvhpj, 'get_items_permissions_check' ), // obf
					'args'                => $v_vvhpj->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_vvhpj, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to install and activate plugins. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_udwwo Full details about the request. // obf
	 * @return true|WP_Error True if the request has permission, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_udwwo ) { // obf
		if ( ! current_user_can( 'install_plugins' ) || ! current_user_can( 'activate_plugins' ) ) { // obf
			return new WP_Error( // obf
				'rest_block_directory_cannot_view', // obf
				__( 'Sorry, you are not allowed to browse the block directory.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Search and retrieve blocks metadata // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_udwwo Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_udwwo ) { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		$v_zsjdi = plugins_api( // obf
			'query_plugins', // obf
			array( // obf
				'block'    => $v_udwwo['term'], // obf
				'per_page' => $v_udwwo['per_page'], // obf
				'page'     => $v_udwwo['page'], // obf
			) // obf
		); // obf

		if ( is_wp_error( $v_zsjdi ) ) { // obf
			$v_zsjdi->add_data( array( 'status' => 500 ) ); // obf

			return $v_zsjdi; // obf
		} // obf

		$v_daoug = array(); // obf

		foreach ( $v_zsjdi->plugins as $v_dpzta ) { // obf
			// If the API returned a plugin with empty data for 'blocks', skip it. // obf
			if ( empty( $v_dpzta['blocks'] ) ) { // obf
				continue; // obf
			} // obf

			$v_lsmfr     = $v_vvhpj->prepare_item_for_response( $v_dpzta, $v_udwwo ); // obf
			$v_daoug[] = $v_vvhpj->prepare_response_for_collection( $v_lsmfr ); // obf
		} // obf

		return rest_ensure_response( $v_daoug ); // obf
	} // obf

	/** // obf
	 * Parse block metadata for a block, and prepare it for an API response. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.9.0 Renamed `$v_dpzta` to `$v_effzj` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param array           $v_effzj    The plugin metadata. // obf
	 * @param WP_REST_Request $v_udwwo Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function prepare_item_for_response( $v_effzj, $v_udwwo ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_dpzta = $v_effzj; // obf

		$v_pmcfy = $v_vvhpj->get_fields_for_response( $v_udwwo ); // obf

		// There might be multiple blocks in a plugin. Only the first block is mapped. // obf
		$v_qhrnc = reset( $v_dpzta['blocks'] ); // obf

		// A data array containing the properties we'll return. // obf
		$v_cekjz = array( // obf
			'name'                => $v_qhrnc['name'], // obf
			'title'               => ( $v_qhrnc['title'] ? $v_qhrnc['title'] : $v_dpzta['name'] ), // obf
			'description'         => wp_trim_words( $v_dpzta['short_description'], 30, '...' ), // obf
			'id'                  => $v_dpzta['slug'], // obf
			'rating'              => $v_dpzta['rating'] / 20, // obf
			'rating_count'        => (int) $v_dpzta['num_ratings'], // obf
			'active_installs'     => (int) $v_dpzta['active_installs'], // obf
			'author_block_rating' => $v_dpzta['author_block_rating'] / 20, // obf
			'author_block_count'  => (int) $v_dpzta['author_block_count'], // obf
			'author'              => wp_strip_all_tags( $v_dpzta['author'] ), // obf
			'icon'                => ( isset( $v_dpzta['icons']['1x'] ) ? $v_dpzta['icons']['1x'] : 'block-default' ), // obf
			'last_updated'        => gmdate( 'Y-m-d\TH:i:s', strtotime( $v_dpzta['last_updated'] ) ), // obf
			'humanized_updated'   => sprintf( // obf
				/* translators: %s: Human-readable time difference. */ // obf
				__( '%s ago' ), // obf
				human_time_diff( strtotime( $v_dpzta['last_updated'] ) ) // obf
			), // obf
		); // obf

		$v_vvhpj->add_additional_fields_to_object( $v_cekjz, $v_udwwo ); // obf

		$v_zsjdi = new WP_REST_Response( $v_cekjz ); // obf

		if ( rest_is_field_included( '_links', $v_pmcfy ) || rest_is_field_included( '_embedded', $v_pmcfy ) ) { // obf
			$v_zsjdi->add_links( $v_vvhpj->prepare_links( $v_dpzta ) ); // obf
		} // obf

		return $v_zsjdi; // obf
	} // obf

	/** // obf
	 * Generates a list of links to include in the response for the plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array $v_dpzta The plugin data from WordPress.org. // obf
	 * @return array // obf
	 */ // obf
	protected function prepare_links( $v_dpzta ) { // obf
		$v_rayci = array( // obf
			'https://api.w.org/install-plugin' => array( // obf
				'href' => add_query_arg( 'slug', urlencode( $v_dpzta['slug'] ), rest_url( 'wp/v2/plugins' ) ), // obf
			), // obf
		); // obf

		$v_njbzw = $v_vvhpj->find_plugin_for_slug( $v_dpzta['slug'] ); // obf

		if ( $v_njbzw ) { // obf
			$v_rayci['https://api.w.org/plugin'] = array( // obf
				'href'       => rest_url( 'wp/v2/plugins/' . substr( $v_njbzw, 0, - 4 ) ), // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		return $v_rayci; // obf
	} // obf

	/** // obf
	 * Finds an installed plugin for the given slug. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_gmobn The WordPress.org directory slug for a plugin. // obf
	 * @return string The plugin file found matching it. // obf
	 */ // obf
	protected function find_plugin_for_slug( $v_gmobn ) { // obf
		require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

		$v_byabp = get_plugins( '/' . $v_gmobn ); // obf

		if ( ! $v_byabp ) { // obf
			return ''; // obf
		} // obf

		$v_byabp = array_keys( $v_byabp ); // obf

		return $v_gmobn . '/' . reset( $v_byabp ); // obf
	} // obf

	/** // obf
	 * Retrieves the theme's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_vvhpj->schema ) { // obf
			return $v_vvhpj->add_additional_fields_schema( $v_vvhpj->schema ); // obf
		} // obf

		$v_vvhpj->schema = array( // obf
			'$v_hjkfr'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'block-directory-item', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'name'                => array( // obf
					'description' => __( 'The block name, in namespace/block-name format.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'title'               => array( // obf
					'description' => __( 'The block title, in human readable format.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'description'         => array( // obf
					'description' => __( 'A short description of the block, in human readable format.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'id'                  => array( // obf
					'description' => __( 'The block slug.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'rating'              => array( // obf
					'description' => __( 'The star rating of the block.' ), // obf
					'type'        => 'number', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'rating_count'        => array( // obf
					'description' => __( 'The number of ratings.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'active_installs'     => array( // obf
					'description' => __( 'The number sites that have activated this block.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'author_block_rating' => array( // obf
					'description' => __( 'The average rating of blocks published by the same author.' ), // obf
					'type'        => 'number', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'author_block_count'  => array( // obf
					'description' => __( 'The number of blocks published by the same author.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'author'              => array( // obf
					'description' => __( 'The WordPress.org username of the block author.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'icon'                => array( // obf
					'description' => __( 'The block icon.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'last_updated'        => array( // obf
					'description' => __( 'The date when the block was last updated.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view' ), // obf
				), // obf
				'humanized_updated'   => array( // obf
					'description' => __( 'The date when the block was last updated, in human readable format.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view' ), // obf
				), // obf
			), // obf
		); // obf

		return $v_vvhpj->add_additional_fields_schema( $v_vvhpj->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the search params for the blocks collection. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_wzhxx = parent::get_collection_params(); // obf

		$v_wzhxx['context']['default'] = 'view'; // obf

		$v_wzhxx['term'] = array( // obf
			'description' => __( 'Limit result set to blocks matching the search term.' ), // obf
			'type'        => 'string', // obf
			'required'    => true, // obf
			'minLength'   => 1, // obf
		); // obf

		unset( $v_wzhxx['search'] ); // obf

		/** // obf
		 * Filters REST API collection parameters for the block directory controller. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array $v_wzhxx JSON Schema-formatted collection parameters. // obf
		 */ // obf
		return apply_filters( 'rest_block_directory_collection_params', $v_wzhxx ); // obf
	} // obf
} // obf