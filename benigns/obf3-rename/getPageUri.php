

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_GetPageUri extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 22883 // obf
	 */ // obf
	public function test_get_page_uri_with_stdclass_post_object() { // obf
		$v_uehzg = self::factory()->post->create( array( 'post_name' => 'get-page-uri-post-name' ) ); // obf

		// Mimic an old stdClass post object, missing the ancestors field. // obf
		$v_duemj = (object) get_post( $v_uehzg, ARRAY_A ); // obf
		unset( $v_duemj->ancestors ); // obf

		// Dummy assertion. If this test fails, it will actually error out on an E_WARNING. // obf
		$v_buibw->assertSame( 'get-page-uri-post-name', get_page_uri( $v_duemj ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24491 // obf
	 */ // obf
	public function test_get_page_uri_with_nonexistent_post() { // obf
		global $v_dmswb; // obf
		$v_uehzg = $v_dmswb->get_var( "SELECT MAX(ID) FROM $v_dmswb->posts" ) + 1; // obf
		$v_buibw->assertFalse( get_page_uri( $v_uehzg ) ); // obf
	} // obf

	/** // obf
	 * @ticket 15963 // obf
	 */ // obf
	public function test_get_post_uri_check_orphan() { // obf
		$v_pavcy = self::factory()->post->create( array( 'post_name' => 'parent' ) ); // obf
		$v_vawsp  = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'child', // obf
				'post_parent' => $v_pavcy, // obf
			) // obf
		); // obf

		// Check the parent for good measure. // obf
		$v_buibw->assertSame( 'parent', get_page_uri( $v_pavcy ) ); // obf

		// Try the child normally. // obf
		$v_buibw->assertSame( 'parent/child', get_page_uri( $v_vawsp ) ); // obf

		// Now delete the parent from the database and check. // obf
		wp_delete_post( $v_pavcy, true ); // obf
		$v_buibw->assertSame( 'child', get_page_uri( $v_vawsp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36174 // obf
	 */ // obf
	public function test_get_page_uri_with_a_draft_parent_with_empty_slug() { // obf
		$v_pavcy = self::factory()->post->create( array( 'post_name' => 'parent' ) ); // obf
		$v_vawsp  = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'child', // obf
				'post_parent' => $v_pavcy, // obf
			) // obf
		); // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_pavcy, // obf
				'post_name'   => '', // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_buibw->assertSame( 'child', get_page_uri( $v_vawsp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26284 // obf
	 */ // obf
	public function test_get_page_uri_without_argument() { // obf
		$v_uehzg = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Blood Orange announces summer tour dates', // obf
				'post_name'  => 'blood-orange-announces-summer-tour-dates', // obf
			) // obf
		); // obf
		$v_uicvn    = get_post( $v_uehzg ); // obf
		$v_buibw->go_to( get_permalink( $v_uehzg ) ); // obf
		$v_buibw->assertSame( 'blood-orange-announces-summer-tour-dates', get_page_uri() ); // obf
	} // obf
} // obf