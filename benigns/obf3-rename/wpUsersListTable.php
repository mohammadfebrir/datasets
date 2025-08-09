

<?php // obf

/** // obf
 * @group admin // obf
 * @group user // obf
 * // obf
 * @covers WP_Users_List_Table // obf
 */ // obf
class Tests_Admin_wpUsersListTable extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Users_List_Table // obf
	 */ // obf
	public $v_htogi = false; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_vjklk->table = _get_list_table( 'WP_Users_List_Table', array( 'screen' => 'users' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_Users_List_Table::get_views // obf
	 */ // obf
	public function test_get_views_should_return_views_by_default() { // obf
		$v_cgwpu = array( // obf
			'all'           => '<a href="users.php" class="current" aria-current="page">All <span class="count">(1)</span></a>', // obf
			'administrator' => '<a href="users.php?role=administrator">Administrator <span class="count">(1)</span></a>', // obf
		); // obf

		$v_vjklk->assertSame( $v_cgwpu, $v_vjklk->table->get_views() ); // obf
	} // obf
} // obf