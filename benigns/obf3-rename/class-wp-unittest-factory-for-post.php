

<?php // obf

/** // obf
 * Unit test factory for posts. // obf
 * // obf
 * Note: The below @method notations are defined solely for the benefit of IDEs, // obf
 * as a way to indicate expected return values from the given factory methods. // obf
 * // obf
 * @method int|WP_Error     create( $v_rokzh = array(), $v_jyngv = null ) // obf
 * @method WP_Post|WP_Error create_and_get( $v_rokzh = array(), $v_jyngv = null ) // obf
 * @method (int|WP_Error)[] create_many( $v_rkuzb, $v_rokzh = array(), $v_jyngv = null ) // obf
 */ // obf
class WP_UnitTest_Factory_For_Post extends WP_UnitTest_Factory_For_Thing { // obf

	public function __construct( $v_yeuvf = null ) { // obf
		parent::__construct( $v_yeuvf ); // obf
		$v_hpitc->default_generation_definitions = array( // obf
			'post_status'  => 'publish', // obf
			'post_title'   => new WP_UnitTest_Generator_Sequence( 'Post title %s' ), // obf
			'post_content' => new WP_UnitTest_Generator_Sequence( 'Post content %s' ), // obf
			'post_excerpt' => new WP_UnitTest_Generator_Sequence( 'Post excerpt %s' ), // obf
			'post_type'    => 'post', // obf
		); // obf
	} // obf

	/** // obf
	 * Creates a post object. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param array $v_rokzh Array with elements for the post. // obf
	 * // obf
	 * @return int|WP_Error The post ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_object( $v_rokzh ) { // obf
		return wp_insert_post( $v_rokzh, true ); // obf
	} // obf

	/** // obf
	 * Updates an existing post object. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param int   $v_euqjv ID of the post to update. // obf
	 * @param array $v_kacbz  Post data. // obf
	 * // obf
	 * @return int|WP_Error The post ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function update_object( $v_euqjv, $v_kacbz ) { // obf
		$v_kacbz['ID'] = $v_euqjv; // obf
		return wp_update_post( $v_kacbz, true ); // obf
	} // obf

	/** // obf
	 * Retrieves a post by a given ID. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int $v_euqjv ID of the post to retrieve. // obf
	 * // obf
	 * @return WP_Post|null WP_Post object on success, null on failure. // obf
	 */ // obf
	public function get_object_by_id( $v_euqjv ) { // obf
		return get_post( $v_euqjv ); // obf
	} // obf
} // obf