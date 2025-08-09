

<?php // obf
/** // obf
 * Synced patterns REST API: WP_REST_Blocks_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Controller which provides a REST endpoint for the editor to read, create, // obf
 * edit, and delete synced patterns (formerly called reusable blocks). // obf
 * Patterns are stored as posts with the wp_block post type. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see WP_REST_Posts_Controller // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Blocks_Controller extends WP_REST_Posts_Controller { // obf

	/** // obf
	 * Checks if a pattern can be read. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_Post $v_yxykf Post object that backs the block. // obf
	 * @return bool Whether the pattern can be read. // obf
	 */ // obf
	public function check_read_permission( $v_yxykf ) { // obf
		// By default the read_post capability is mapped to edit_posts. // obf
		if ( ! current_user_can( 'read_post', $v_yxykf->ID ) ) { // obf
			return false; // obf
		} // obf

		return parent::check_read_permission( $v_yxykf ); // obf
	} // obf

	/** // obf
	 * Filters a response based on the context defined in the schema. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 6.3.0 Adds the `wp_pattern_sync_status` postmeta property to the top level of response. // obf
	 * // obf
	 * @param array  $v_byipa    Response data to filter. // obf
	 * @param string $v_fchpc Context defined in the schema. // obf
	 * @return array Filtered response. // obf
	 */ // obf
	public function filter_response_by_context( $v_byipa, $v_fchpc ) { // obf
		$v_byipa = parent::filter_response_by_context( $v_byipa, $v_fchpc ); // obf

		/* // obf
		 * Remove `title.rendered` and `content.rendered` from the response. // obf
		 * It doesn't make sense for a pattern to have rendered content on its own, // obf
		 * since rendering a block requires it to be inside a post or a page. // obf
		 */ // obf
		unset( $v_byipa['title']['rendered'] ); // obf
		unset( $v_byipa['content']['rendered'] ); // obf

		// Add the core wp_pattern_sync_status meta as top level property to the response. // obf
		$v_byipa['wp_pattern_sync_status'] = isset( $v_byipa['meta']['wp_pattern_sync_status'] ) ? $v_byipa['meta']['wp_pattern_sync_status'] : ''; // obf
		unset( $v_byipa['meta']['wp_pattern_sync_status'] ); // obf
		return $v_byipa; // obf
	} // obf

	/** // obf
	 * Retrieves the pattern's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_flefv->schema ) { // obf
			return $v_flefv->add_additional_fields_schema( $v_flefv->schema ); // obf
		} // obf

		$v_wqexw = parent::get_item_schema(); // obf

		/* // obf
		 * Allow all contexts to access `title.raw` and `content.raw`. // obf
		 * Clients always need the raw markup of a pattern to do anything useful, // obf
		 * e.g. parse it or display it in an editor. // obf
		 */ // obf
		$v_wqexw['properties']['title']['properties']['raw']['context']   = array( 'view', 'edit' ); // obf
		$v_wqexw['properties']['content']['properties']['raw']['context'] = array( 'view', 'edit' ); // obf

		/* // obf
		 * Remove `title.rendered` and `content.rendered` from the schema. // obf
		 * It doesn't make sense for a pattern to have rendered content on its own, // obf
		 * since rendering a block requires it to be inside a post or a page. // obf
		 */ // obf
		unset( $v_wqexw['properties']['title']['properties']['rendered'] ); // obf
		unset( $v_wqexw['properties']['content']['properties']['rendered'] ); // obf

		$v_flefv->schema = $v_wqexw; // obf

		return $v_flefv->add_additional_fields_schema( $v_flefv->schema ); // obf
	} // obf
} // obf