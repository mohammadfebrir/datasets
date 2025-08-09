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
 * @group dependencies
 * @group scripts
 */
class Tests_Dependencies_LocalizeScript extends WP_UnitTestCase {
	/**
	 * @var WP_Scripts
	 */
	protected $old_wp_scripts;

	public function set_up() {
		parent::set_up();

		$this->old_wp_scripts  = $GLOBALS['wp_scripts'] ?? null;
		$GLOBALS['wp_scripts'] = null;
	}

	public function tear_down() {
		$GLOBALS['wp_scripts'] = $this->old_wp_scripts;
		parent::tear_down();
	}

	/**
	 * Verifies that wp_localize_script() works if global has not been initialized yet.
	 *
	 * @ticket 60862
	 * @covers ::wp_localize_script
	 */
	public function test_wp_localize_script_works_before_enqueue_script() {
		$this->assertTrue(
			wp_localize_script(
				'wp-util',
				'salcodeExample',
				array(
					'answerToTheUltimateQuestionOfLifeTheUniverseAndEverything' => 42,
				)
			)
		);
	}
}
