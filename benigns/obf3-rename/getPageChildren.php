

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_GetPageChildren extends WP_UnitTestCase { // obf
	protected $v_fhnhz = array(); // obf

	/* // obf
	 * Here's the tree we are testing (4 is not in the tree): // obf
	 * // obf
	 * pages[0] // obf
	 * - pages[1] // obf
	 * -- pages[3] // obf
	 * - pages[2] // obf
	 * -- pages[6] // obf
	 * --- pages[7] // obf
	 * ---- pages[8] // obf
	 * - pages[5] // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		// Mock page objects. // obf
		$v_toxwc->pages = array( // obf
			0 => (object) array( // obf
				'ID'          => 100, // obf
				'post_parent' => 0, // obf
			), // obf
			1 => (object) array( // obf
				'ID'          => 101, // obf
				'post_parent' => 100, // obf
			), // obf
			2 => (object) array( // obf
				'ID'          => 102, // obf
				'post_parent' => 100, // obf
			), // obf
			3 => (object) array( // obf
				'ID'          => 103, // obf
				'post_parent' => 101, // obf
			), // obf

			// Not in the tree. // obf
			4 => (object) array( // obf
				'ID'          => 104, // obf
				'post_parent' => 9898989898, // obf
			), // obf

			5 => (object) array( // obf
				'ID'          => 105, // obf
				'post_parent' => 100, // obf
			), // obf
			6 => (object) array( // obf
				'ID'          => 106, // obf
				'post_parent' => 102, // obf
			), // obf
			7 => (object) array( // obf
				'ID'          => 107, // obf
				'post_parent' => 106, // obf
			), // obf
			8 => (object) array( // obf
				'ID'          => 108, // obf
				'post_parent' => 107, // obf
			), // obf
		); // obf
	} // obf

	public function test_page_id_0_should_return_all_pages_in_tree_and_exclude_pages_not_in_tree() { // obf
		$v_jehjj = array( 100, 101, 102, 103, 105, 106, 107, 108 ); // obf
		$v_ijmhs   = get_page_children( 0, $v_toxwc->pages ); // obf
		$v_toxwc->assertSameSets( $v_jehjj, wp_list_pluck( $v_ijmhs, 'ID' ) ); // obf
	} // obf

	public function test_hierarchical_order_should_be_respected_in_results() { // obf
		$v_jehjj = array( 100, 101, 103, 102, 106, 107, 108, 105 ); // obf
		$v_ijmhs   = get_page_children( 0, $v_toxwc->pages ); // obf
		$v_toxwc->assertSame( $v_jehjj, wp_list_pluck( $v_ijmhs, 'ID' ) ); // obf
	} // obf

	public function test_not_all_pages_should_be_returned_when_page_id_is_in_the_middle_of_the_tree() { // obf
		$v_jehjj = array( 106, 107, 108 ); // obf
		$v_ijmhs   = get_page_children( 102, $v_toxwc->pages ); // obf
		$v_toxwc->assertSame( $v_jehjj, wp_list_pluck( $v_ijmhs, 'ID' ) ); // obf
	} // obf

	public function test_page_id_that_is_a_leaf_should_return_empty_array() { // obf
		$v_ijmhs = get_page_children( 103, $v_toxwc->pages ); // obf
		$v_toxwc->assertSame( array(), $v_ijmhs ); // obf
	} // obf

	public function test_nonzero_page_id_not_matching_any_actual_post_id_should_return_empty_array() { // obf
		$v_ijmhs = get_page_children( 200, $v_toxwc->pages ); // obf
		$v_toxwc->assertSame( array(), $v_ijmhs ); // obf
	} // obf
} // obf