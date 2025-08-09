

<?php // obf
/** // obf
 * WP_REST_Navigation_Fallback_Controller class // obf
 * // obf
 * REST Controller to create/fetch a fallback Navigation Menu. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.3.0 // obf
 */ // obf

/** // obf
 * REST Controller to fetch a fallback Navigation Block Menu. If needed it creates one. // obf
 * // obf
 * @since 6.3.0 // obf
 */ // obf
class WP_REST_Navigation_Fallback_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * The Post Type for the Controller // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_zstjm; // obf

	/** // obf
	 * Constructs the controller. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_fcbpj->namespace = 'wp-block-editor/v1'; // obf
		$v_fcbpj->rest_base = 'navigation-fallback'; // obf
		$v_fcbpj->post_type = 'wp_navigation'; // obf
	} // obf

	/** // obf
	 * Registers the controllers routes. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 */ // obf
	public function register_routes() { // obf

		// Lists a single nav item based on the given id or slug. // obf
		register_rest_route( // obf
			$v_fcbpj->namespace, // obf
			'/' . $v_fcbpj->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_fcbpj, 'get_item' ), // obf
					'permission_callback' => array( $v_fcbpj, 'get_item_permissions_check' ), // obf
					'args'                => $v_fcbpj->get_endpoint_args_for_item_schema( WP_REST_Server::READABLE ), // obf
				), // obf
				'schema' => array( $v_fcbpj, 'get_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read fallbacks. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_tlexa Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_tlexa ) { // obf

		$v_zstjm = get_post_type_object( $v_fcbpj->post_type ); // obf

		// Getting fallbacks requires creating and reading `wp_navigation` posts. // obf
		if ( ! current_user_can( $v_zstjm->cap->create_posts ) || ! current_user_can( 'edit_theme_options' ) || ! current_user_can( 'edit_posts' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_create', // obf
				__( 'Sorry, you are not allowed to create Navigation Menus as this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( 'edit' === $v_tlexa['context'] && ! current_user_can( $v_zstjm->cap->edit_posts ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit Navigation Menus as this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the most appropriate fallback Navigation Menu. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_tlexa Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_tlexa ) { // obf
		$v_sqvym = WP_Navigation_Fallback::get_fallback(); // obf

		if ( empty( $v_sqvym ) ) { // obf
			return rest_ensure_response( new WP_Error( 'no_fallback_menu', __( 'No fallback menu found.' ), array( 'status' => 404 ) ) ); // obf
		} // obf

		$v_yjvsj = $v_fcbpj->prepare_item_for_response( $v_sqvym, $v_tlexa ); // obf

		return $v_yjvsj; // obf
	} // obf

	/** // obf
	 * Retrieves the fallbacks' schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_fcbpj->schema ) { // obf
			return $v_fcbpj->add_additional_fields_schema( $v_fcbpj->schema ); // obf
		} // obf

		$v_fcbpj->schema = array( // obf
			'$v_vmsoi'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'navigation-fallback', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id' => array( // obf
					'description' => __( 'The unique identifier for the Navigation Menu.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		return $v_fcbpj->add_additional_fields_schema( $v_fcbpj->schema ); // obf
	} // obf

	/** // obf
	 * Matches the post data to the schema we want. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_Post         $v_ohufz    The wp_navigation Post object whose response is being prepared. // obf
	 * @param WP_REST_Request $v_tlexa Request object. // obf
	 * @return WP_REST_Response $v_yjvsj The response data. // obf
	 */ // obf
	public function prepare_item_for_response( $v_ohufz, $v_tlexa ) { // obf
		$v_fchyn = array(); // obf

		$v_arqzd = $v_fcbpj->get_fields_for_response( $v_tlexa ); // obf

		if ( rest_is_field_included( 'id', $v_arqzd ) ) { // obf
			$v_fchyn['id'] = (int) $v_ohufz->ID; // obf
		} // obf

		$v_ijthu = ! empty( $v_tlexa['context'] ) ? $v_tlexa['context'] : 'view'; // obf
		$v_fchyn    = $v_fcbpj->add_additional_fields_to_object( $v_fchyn, $v_tlexa ); // obf
		$v_fchyn    = $v_fcbpj->filter_response_by_context( $v_fchyn, $v_ijthu ); // obf

		$v_yjvsj = rest_ensure_response( $v_fchyn ); // obf

		if ( rest_is_field_included( '_links', $v_arqzd ) || rest_is_field_included( '_embedded', $v_arqzd ) ) { // obf
			$v_kwqcd = $v_fcbpj->prepare_links( $v_ohufz ); // obf
			$v_yjvsj->add_links( $v_kwqcd ); // obf
		} // obf

		return $v_yjvsj; // obf
	} // obf

	/** // obf
	 * Prepares the links for the request. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_Post $v_sqvym the Navigation Menu post object. // obf
	 * @return array Links for the given request. // obf
	 */ // obf
	private function prepare_links( $v_sqvym ) { // obf
		return array( // obf
			'self' => array( // obf
				'href'       => rest_url( rest_get_route_for_post( $v_sqvym->ID ) ), // obf
				'embeddable' => true, // obf
			), // obf
		); // obf
	} // obf
} // obf