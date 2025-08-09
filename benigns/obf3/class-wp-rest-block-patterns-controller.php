

<?php // obf
/** // obf
 * REST API: WP_REST_Block_Patterns_Controller class // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST_API // obf
 * @since      6.0.0 // obf
 */ // obf

/** // obf
 * Core class used to access block patterns via the REST API. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Block_Patterns_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Defines whether remote patterns should be loaded. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_rvjxn; // obf

	/** // obf
	 * An array that maps old categories names to new ones. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var array // obf
	 */ // obf
	protected static $v_gdxkq = array( // obf
		'buttons' => 'call-to-action', // obf
		'columns' => 'text', // obf
		'query'   => 'posts', // obf
	); // obf

	/** // obf
	 * Constructs the controller. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_xwilq->namespace = 'wp/v2'; // obf
		$v_xwilq->rest_base = 'block-patterns/patterns'; // obf
	} // obf

	/** // obf
	 * Registers the routes for the objects of the controller. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_xwilq->namespace, // obf
			'/' . $v_xwilq->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_xwilq, 'get_items' ), // obf
					'permission_callback' => array( $v_xwilq, 'get_items_permissions_check' ), // obf
				), // obf
				'schema' => array( $v_xwilq, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read block patterns. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_uhfqa Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_uhfqa ) { // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf

		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_xflgw ) { // obf
			if ( current_user_can( $v_xflgw->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view', // obf
			__( 'Sorry, you are not allowed to view the registered block patterns.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves all block patterns. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @since 6.2.0 Added migration for old core pattern categories to the new ones. // obf
	 * // obf
	 * @param WP_REST_Request $v_uhfqa Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_uhfqa ) { // obf
		if ( ! $v_xwilq->remote_patterns_loaded ) { // obf
			// Load block patterns from w.org. // obf
			_load_remote_block_patterns(); // Patterns with the `core` keyword. // obf
			_load_remote_featured_patterns(); // Patterns in the `featured` category. // obf
			_register_remote_theme_patterns(); // Patterns requested by current theme. // obf

			$v_xwilq->remote_patterns_loaded = true; // obf
		} // obf

		$v_zegbk = array(); // obf
		$v_zzydq = WP_Block_Patterns_Registry::get_instance()->get_all_registered(); // obf
		foreach ( $v_zzydq as $v_wjayw ) { // obf
			$v_nsnaz = $v_xwilq->migrate_pattern_categories( $v_wjayw ); // obf
			$v_bppem = $v_xwilq->prepare_item_for_response( $v_nsnaz, $v_uhfqa ); // obf
			$v_zegbk[]       = $v_xwilq->prepare_response_for_collection( $v_bppem ); // obf
		} // obf
		return rest_ensure_response( $v_zegbk ); // obf
	} // obf

	/** // obf
	 * Migrates old core pattern categories to the new categories. // obf
	 * // obf
	 * Core pattern categories are revamped. Migration is needed to ensure // obf
	 * backwards compatibility. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param array $v_wjayw Raw pattern as registered, before applying any changes. // obf
	 * @return array Migrated pattern. // obf
	 */ // obf
	protected function migrate_pattern_categories( $v_wjayw ) { // obf
		// No categories to migrate. // obf
		if ( // obf
			! isset( $v_wjayw['categories'] ) || // obf
			! is_array( $v_wjayw['categories'] ) // obf
		) { // obf
			return $v_wjayw; // obf
		} // obf

		foreach ( $v_wjayw['categories'] as $v_ecmtx => $v_rryvk ) { // obf
			// If the category exists as a key, then it needs migration. // obf
			if ( isset( static::$v_gdxkq[ $v_rryvk ] ) ) { // obf
				$v_wjayw['categories'][ $v_ecmtx ] = static::$v_gdxkq[ $v_rryvk ]; // obf
			} // obf
		} // obf

		return $v_wjayw; // obf
	} // obf

	/** // obf
	 * Prepare a raw block pattern before it gets output in a REST API response. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @since 6.3.0 Added `source` property. // obf
	 * // obf
	 * @param array           $v_oanqx    Raw pattern as registered, before any changes. // obf
	 * @param WP_REST_Request $v_uhfqa Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function prepare_item_for_response( $v_oanqx, $v_uhfqa ) { // obf
		// Resolve pattern blocks so they don't need to be resolved client-side // obf
		// in the editor, improving performance. // obf
		$v_ygoas          = parse_blocks( $v_oanqx['content'] ); // obf
		$v_ygoas          = resolve_pattern_blocks( $v_ygoas ); // obf
		$v_oanqx['content'] = serialize_blocks( $v_ygoas ); // obf

		$v_sklot = $v_xwilq->get_fields_for_response( $v_uhfqa ); // obf
		$v_jagms   = array( // obf
			'name'          => 'name', // obf
			'title'         => 'title', // obf
			'content'       => 'content', // obf
			'description'   => 'description', // obf
			'viewportWidth' => 'viewport_width', // obf
			'inserter'      => 'inserter', // obf
			'categories'    => 'categories', // obf
			'keywords'      => 'keywords', // obf
			'blockTypes'    => 'block_types', // obf
			'postTypes'     => 'post_types', // obf
			'templateTypes' => 'template_types', // obf
			'source'        => 'source', // obf
		); // obf
		$v_ajbnu   = array(); // obf
		foreach ( $v_jagms as $v_joadl => $v_xsfal ) { // obf
			if ( isset( $v_oanqx[ $v_joadl ] ) && rest_is_field_included( $v_xsfal, $v_sklot ) ) { // obf
				$v_ajbnu[ $v_xsfal ] = $v_oanqx[ $v_joadl ]; // obf
			} // obf
		} // obf

		$v_fmrwi = ! empty( $v_uhfqa['context'] ) ? $v_uhfqa['context'] : 'view'; // obf
		$v_ajbnu    = $v_xwilq->add_additional_fields_to_object( $v_ajbnu, $v_uhfqa ); // obf
		$v_ajbnu    = $v_xwilq->filter_response_by_context( $v_ajbnu, $v_fmrwi ); // obf
		return rest_ensure_response( $v_ajbnu ); // obf
	} // obf

	/** // obf
	 * Retrieves the block pattern schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @since 6.3.0 Added `source` property. // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_xwilq->schema ) { // obf
			return $v_xwilq->add_additional_fields_schema( $v_xwilq->schema ); // obf
		} // obf

		$v_dopcq = array( // obf
			'$v_dopcq'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'block-pattern', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'name'           => array( // obf
					'description' => __( 'The pattern name.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'title'          => array( // obf
					'description' => __( 'The pattern title, in human readable format.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'content'        => array( // obf
					'description' => __( 'The pattern content.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'description'    => array( // obf
					'description' => __( 'The pattern detailed description.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'viewport_width' => array( // obf
					'description' => __( 'The pattern viewport width for inserter preview.' ), // obf
					'type'        => 'number', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'inserter'       => array( // obf
					'description' => __( 'Determines whether the pattern is visible in inserter.' ), // obf
					'type'        => 'boolean', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'categories'     => array( // obf
					'description' => __( 'The pattern category slugs.' ), // obf
					'type'        => 'array', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'keywords'       => array( // obf
					'description' => __( 'The pattern keywords.' ), // obf
					'type'        => 'array', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'block_types'    => array( // obf
					'description' => __( 'Block types that the pattern is intended to be used with.' ), // obf
					'type'        => 'array', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'post_types'     => array( // obf
					'description' => __( 'An array of post types that the pattern is restricted to be used with.' ), // obf
					'type'        => 'array', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'template_types' => array( // obf
					'description' => __( 'An array of template types where the pattern fits.' ), // obf
					'type'        => 'array', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'source'         => array( // obf
					'description' => __( 'Where the pattern comes from e.g. core' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'enum'        => array( // obf
						'core', // obf
						'plugin', // obf
						'theme', // obf
						'pattern-directory/core', // obf
						'pattern-directory/theme', // obf
						'pattern-directory/featured', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_xwilq->schema = $v_dopcq; // obf

		return $v_xwilq->add_additional_fields_schema( $v_xwilq->schema ); // obf
	} // obf
} // obf