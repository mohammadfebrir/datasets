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
 * @group block-supports
 *
 * @covers ::wp_get_block_style_variation_name_from_class
 */
class Tests_Block_Supports_WpGetBlockStyleVariationNameFromClass extends WP_UnitTestCase {
	/**
	 * Tests variation names are extracted correctly from a CSS class string.
	 *
	 * @ticket 61312
	 *
	 * @covers ::wp_get_block_style_variation_name_from_class
	 *
	 * @dataProvider data_block_style_variation_name_extraction
	 *
	 * @param string     $class_string CSS class string.
	 * @param array|null $expected     Expected variation names.
	 */
	public function test_block_style_variation_name_extraction( $class_string, $expected ) {
		$actual = wp_get_block_style_variation_name_from_class( $class_string );

		$this->assertSame(
			$expected,
			$actual,
			'Block style variation names extracted from CSS class string should match'
		);
	}

	/**
	 * Data provider.
	 *
	 * @return array
	 */
	public function data_block_style_variation_name_extraction() {
		return array(
			// @ticket 61312
			'missing class string' => array(
				'class_string' => null,
				'expected'     => null,
			),
			// @ticket 61312
			'empty class string'   => array(
				'class_string' => '',
				'expected'     => array(),
			),
			// @ticket 61312
			'no variation'         => array(
				'class_string' => 'is-style no-variation',
				'expected'     => array(),
			),
			// @ticket 61312
			'single variation'     => array(
				'class_string' => 'custom-class is-style-outline',
				'expected'     => array( 'outline' ),
			),
			// @ticket 61312
			'multiple variations'  => array(
				'class_string' => 'is-style-light custom-class is-style-outline',
				'expected'     => array( 'light', 'outline' ),
			),
		);
	}
}
