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
 * @group user
 */
class Tests_User_wpAuthenticateSpamCheck extends WP_UnitTestCase {

	/**
	 * @group ms-excluded
	 */
	public function test_wp_authenticate_spam_check_returns_user_when_single_site() {
		$user_id     = self::factory()->user->create( array( 'role' => 'contributor' ) );
		$user        = new WP_User( $user_id );
		$actual_user = wp_authenticate_spam_check( $user );
		wp_delete_user( $user_id );

		$this->assertSame( $user->user_login, $actual_user->user_login );
	}

	/**
	 * @group ms-required
	 */
	public function test_wp_authenticate_spam_check_returns_user_when_not_flagged() {
		$user_id     = self::factory()->user->create( array( 'role' => 'contributor' ) );
		$user        = new WP_User( $user_id );
		$actual_user = wp_authenticate_spam_check( $user );
		wpmu_delete_user( $user_id );

		$this->assertSame( $user->user_login, $actual_user->user_login );
	}

	/**
	 * @group ms-required
	 */
	public function test_wp_authenticate_spam_check_returns_wp_error_when_flagged() {
		$user_id = self::factory()->user->create( array( 'role' => 'contributor' ) );
		wp_update_user(
			array(
				'ID'   => $user_id,
				'spam' => '1',
			)
		);

		$user        = new WP_User( $user_id );
		$actual_user = wp_authenticate_spam_check( $user );
		wpmu_delete_user( $user_id );

		$this->assertInstanceOf( 'WP_Error', $actual_user );
	}
}
