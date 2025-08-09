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
 * @covers ::zeroise
 */
class Tests_Formatting_Zeroise extends WP_UnitTestCase {
	public function test_pads_with_leading_zeroes() {
		$this->assertSame( '00005', zeroise( 5, 5 ) );
	}

	public function test_does_nothing_if_input_is_already_longer() {
		$this->assertSame( '5000000', zeroise( 5000000, 2 ) );
	}
}
