

<?php // obf
/** // obf
 * REST API: WP_REST_Block_Pattern_Categories_Controller class // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST_API // obf
 * @since      6.0.0 // obf
 */ // obf

/** // obf
 * Core class used to access block pattern categories via the REST API. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Block_Pattern_Categories_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructs the controller. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_abzbl->namespace = 'wp/v2'; // obf
		$v_abzbl->rest_base = 'block-patterns/categories'; // obf
	} // obf

	/** // obf
	 * Registers the routes for the objects of the controller. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_abzbl->namespace, // obf
			'/' . $v_abzbl->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_abzbl, 'get_items' ), // obf
					'permission_callback' => array( $v_abzbl, 'get_items_permissions_check' ), // obf
				), // obf
				'schema' => array( $v_abzbl, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read block patterns. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_psyxo Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_psyxo ) { // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf

		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_defry ) { // obf
			if ( current_user_can( $v_defry->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view', // obf
			__( 'Sorry, you are not allowed to view the registered block pattern categories.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves all block pattern categories. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_psyxo Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_psyxo ) { // obf
		if ( $v_psyxo->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_mixcg   = array(); // obf
		$v_qnjpz = WP_Block_Pattern_Categories_Registry::get_instance()->get_all_registered(); // obf
		foreach ( $v_qnjpz as $v_chxwl ) { // obf
			$v_emwla = $v_abzbl->prepare_item_for_response( $v_chxwl, $v_psyxo ); // obf
			$v_mixcg[]        = $v_abzbl->prepare_response_for_collection( $v_emwla ); // obf
		} // obf

		return rest_ensure_response( $v_mixcg ); // obf
	} // obf

	/** // obf
	 * Prepare a raw block pattern category before it gets output in a REST API response. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param array           $v_zlvuv    Raw category as registered, before any changes. // obf
	 * @param WP_REST_Request $v_psyxo Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function prepare_item_for_response( $v_zlvuv, $v_psyxo ) { // obf
		$v_yhunv = $v_abzbl->get_fields_for_response( $v_psyxo ); // obf
		$v_rjmqv   = array( 'name', 'label', 'description' ); // obf
		$v_ufnym   = array(); // obf
		foreach ( $v_rjmqv as $v_gnvxu ) { // obf
			if ( isset( $v_zlvuv[ $v_gnvxu ] ) && rest_is_field_included( $v_gnvxu, $v_yhunv ) ) { // obf
				$v_ufnym[ $v_gnvxu ] = $v_zlvuv[ $v_gnvxu ]; // obf
			} // obf
		} // obf

		$v_ktqrw = ! empty( $v_psyxo['context'] ) ? $v_psyxo['context'] : 'view'; // obf
		$v_ufnym    = $v_abzbl->add_additional_fields_to_object( $v_ufnym, $v_psyxo ); // obf
		$v_ufnym    = $v_abzbl->filter_response_by_context( $v_ufnym, $v_ktqrw ); // obf

		return rest_ensure_response( $v_ufnym ); // obf
	} // obf

	/** // obf
	 * Retrieves the block pattern category schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_abzbl->schema ) { // obf
			return $v_abzbl->add_additional_fields_schema( $v_abzbl->schema ); // obf
		} // obf

		$v_hxlvr = array( // obf
			'$v_hxlvr'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'block-pattern-category', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'name'        => array( // obf
					'description' => __( 'The category name.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'label'       => array( // obf
					'description' => __( 'The category label, in human readable format.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'description' => array( // obf
					'description' => __( 'The category description, in human readable format.' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
			), // obf
		); // obf

		$v_abzbl->schema = $v_hxlvr; // obf

		return $v_abzbl->add_additional_fields_schema( $v_abzbl->schema ); // obf
	} // obf
} // obf