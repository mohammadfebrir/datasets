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
 * Test wp_guess_url().
 *
 * @group functions
 *
 * @covers ::wp_guess_url
 */
class Tests_Functions_wpGuessUrl extends WP_UnitTestCase {

	/**
	 * @ticket 36827
	 *
	 * @dataProvider data_wp_guess_url_should_return_site_url
	 *
	 * @param string $url The URL to navigate to, relative to `site_url()`.
	 */
	public function test_wp_guess_url_should_return_site_url( $url ) {
		$siteurl = site_url();
		$this->go_to( site_url( $url ) );
		$this->assertSame( $siteurl, wp_guess_url() );
	}

	/**
	 * Data provider.
	 *
	 * @return array[]
	 */
	public function data_wp_guess_url_should_return_site_url() {
		return array(
			'no trailing slash'                            => array( 'url' => 'wp-admin' ),
			'trailing slash'                               => array( 'url' => 'wp-admin/' ),
			'trailing slash, query var'                    => array( 'url' => 'wp-admin/?foo=bar' ),
			'file extension, no trailing slash'            => array( 'url' => 'wp-login.php' ),
			'file extension, query var, no trailing slash' => array( 'url' => 'wp-login.php?foo=bar' ),
		);
	}
}
