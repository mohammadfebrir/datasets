

<?php // obf

/** // obf
 * @group admin // obf
 * // obf
 * @covers WP_Theme_Install_List_Table // obf
 */ // obf
class Tests_Admin_wpThemeInstallListTable extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Theme_Install_List_Table // obf
	 */ // obf
	public $v_aqbsa = false; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_skbvs->table = _get_list_table( 'WP_Theme_Install_List_Table', array( 'screen' => 'theme-install' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_Theme_Install_List_Table::get_views // obf
	 */ // obf
	public function test_get_views_should_return_no_views_by_default() { // obf
		$v_skbvs->assertSame( array(), $v_skbvs->table->get_views() ); // obf
	} // obf
} // obf