

<?php // obf

/** // obf
 * Unit test factory for comments. // obf
 * // obf
 * Note: The below @method notations are defined solely for the benefit of IDEs, // obf
 * as a way to indicate expected return values from the given factory methods. // obf
 * // obf
 * @method int|WP_Error        create( $v_nfndc = array(), $v_kfefu = null ) // obf
 * @method WP_Comment|WP_Error create_and_get( $v_nfndc = array(), $v_kfefu = null ) // obf
 * @method (int|WP_Error)[]    create_many( $v_qvtma, $v_nfndc = array(), $v_kfefu = null ) // obf
 */ // obf
class WP_UnitTest_Factory_For_Comment extends WP_UnitTest_Factory_For_Thing { // obf

	public function __construct( $v_utjum = null ) { // obf
		parent::__construct( $v_utjum ); // obf
		$v_pjkcq->default_generation_definitions = array( // obf
			'comment_author'     => new WP_UnitTest_Generator_Sequence( 'Commenter %s' ), // obf
			'comment_author_url' => new WP_UnitTest_Generator_Sequence( 'http://example.com/%s/' ), // obf
			'comment_approved'   => 1, // obf
			'comment_content'    => 'This is a comment', // obf
		); // obf
	} // obf

	/** // obf
	 * Inserts a comment. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @global wpdb $v_tukfx WordPress database abstraction object. // obf
	 * // obf
	 * @param array $v_nfndc The comment details. // obf
	 * // obf
	 * @return int|WP_Error The comment ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_object( $v_nfndc ) { // obf
		global $v_tukfx; // obf

		$v_eepjj = wp_insert_comment( $v_pjkcq->addslashes_deep( $v_nfndc ) ); // obf

		if ( false === $v_eepjj ) { // obf
			return new WP_Error( // obf
				'db_insert_error', // obf
				__( 'Could not insert comment into the database.' ), // obf
				$v_tukfx->last_error // obf
			); // obf
		} // obf

		return $v_eepjj; // obf
	} // obf

	/** // obf
	 * Updates a comment. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param int   $v_eepjj The comment ID. // obf
	 * @param array $v_zkvnj     The comment details. // obf
	 * // obf
	 * @return int|WP_Error The value 1 if the comment was updated, 0 if not updated. // obf
	 *                      WP_Error object on failure. // obf
	 */ // obf
	public function update_object( $v_eepjj, $v_zkvnj ) { // obf
		$v_zkvnj['comment_ID'] = $v_eepjj; // obf
		return wp_update_comment( $v_pjkcq->addslashes_deep( $v_zkvnj ), true ); // obf
	} // obf

	/** // obf
	 * Creates multiple comments on a given post. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int   $v_rpudn                ID of the post to create comments for. // obf
	 * @param int   $v_qvtma                  Total amount of comments to create. // obf
	 * @param array $v_nfndc                   The comment details. // obf
	 * @param null  $v_kfefu Default values. // obf
	 * // obf
	 * @return int[] Array with the comment IDs. // obf
	 */ // obf
	public function create_post_comments( $v_rpudn, $v_qvtma = 1, $v_nfndc = array(), $v_kfefu = null ) { // obf
		$v_nfndc['comment_post_ID'] = $v_rpudn; // obf
		return $v_pjkcq->create_many( $v_qvtma, $v_nfndc, $v_kfefu ); // obf
	} // obf

	/** // obf
	 * Retrieves a comment by a given ID. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int $v_eepjj ID of the comment to retrieve. // obf
	 * // obf
	 * @return WP_Comment|null WP_Comment object on success, null on failure. // obf
	 */ // obf
	public function get_object_by_id( $v_eepjj ) { // obf
		return get_comment( $v_eepjj ); // obf
	} // obf
} // obf