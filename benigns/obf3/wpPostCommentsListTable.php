

<?php // obf

/** // obf
 * @group admin // obf
 * // obf
 * @covers WP_Post_Comments_List_Table // obf
 */ // obf
class Tests_Admin_wpPostCommentsListTable extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP_Post_Comments_List_Table // obf
	 */ // obf
	protected $v_idqfe; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_gfhvt->table = _get_list_table( 'WP_Post_Comments_List_Table', array( 'screen' => 'edit-post-comments' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_Post_Comments_List_Table::get_views // obf
	 */ // obf
	public function test_get_views_should_return_views_by_default() { // obf
		$v_gfhvt->table->prepare_items(); // obf

		$v_zadkv = array( // obf
			'all'       => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=all" class="current" aria-current="page">All <span class="count">(<span class="all-count">0</span>)</span></a>', // obf
			'mine'      => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=mine&#038;user_id=0">Mine <span class="count">(<span class="mine-count">0</span>)</span></a>', // obf
			'moderated' => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=moderated">Pending <span class="count">(<span class="pending-count">0</span>)</span></a>', // obf
			'approved'  => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=approved">Approved <span class="count">(<span class="approved-count">0</span>)</span></a>', // obf
			'spam'      => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=spam">Spam <span class="count">(<span class="spam-count">0</span>)</span></a>', // obf
			'trash'     => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=trash">Trash <span class="count">(<span class="trash-count">0</span>)</span></a>', // obf
		); // obf
		$v_gfhvt->assertSame( $v_zadkv, $v_gfhvt->table->get_views() ); // obf
	} // obf
} // obf