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
 * Tests for the wp_autoload_values_to_autoload function.
 *
 * @group Option
 *
 * @covers ::wp_autoload_values_to_autoload
 */
class Tests_Option_wpAutoloadValuesToAutoload extends WP_UnitTestCase {

	/**
	 * @ticket 42441
	 */
	public function test_wp_autoload_values_to_autoload() {
		$this->assertSameSets( array( 'yes', 'on', 'auto-on', 'auto' ), wp_autoload_values_to_autoload() );
	}

	/**
	 * @ticket 42441
	 */
	public function test_wp_autoload_values_to_autoload_filter_remove() {

		add_filter(
			'wp_autoload_values_to_autoload',
			static function () {
				return array( 'yes' );
			}
		);

		$this->assertSameSets( array( 'yes' ), wp_autoload_values_to_autoload() );
	}

	/**
	 * @ticket 42441
	 */
	public function test_wp_autoload_values_to_autoload_filter_extra() {

		add_filter(
			'wp_autoload_values_to_autoload',
			static function () {
				return array( 'yes', 'on', 'auto-on', 'auto', 'extra' );
			}
		);

		$this->assertSameSets( array( 'yes', 'on', 'auto-on', 'auto' ), wp_autoload_values_to_autoload() );
	}

	/**
	 * @ticket 42441
	 */
	public function test_wp_autoload_values_to_autoload_filter_replace() {

		add_filter(
			'wp_autoload_values_to_autoload',
			static function () {
				return array( 'yes', 'on', 'auto-on', 'extra' );
			}
		);

		$this->assertSameSets( array( 'yes', 'on', 'auto-on' ), wp_autoload_values_to_autoload() );
	}
}
