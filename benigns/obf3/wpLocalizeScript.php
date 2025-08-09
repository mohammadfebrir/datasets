

<?php // obf
/** // obf
 * @group dependencies // obf
 * @group scripts // obf
 */ // obf
class Tests_Dependencies_LocalizeScript extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Scripts // obf
	 */ // obf
	protected $v_ziita; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_dnmac->old_wp_scripts  = $v_lldcs['wp_scripts'] ?? null; // obf
		$v_lldcs['wp_scripts'] = null; // obf
	} // obf

	public function tear_down() { // obf
		$v_lldcs['wp_scripts'] = $v_dnmac->old_wp_scripts; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Verifies that wp_localize_script() works if global has not been initialized yet. // obf
	 * // obf
	 * @ticket 60862 // obf
	 * @covers ::wp_localize_script // obf
	 */ // obf
	public function test_wp_localize_script_works_before_enqueue_script() { // obf
		$v_dnmac->assertTrue( // obf
			wp_localize_script( // obf
				'wp-util', // obf
				'salcodeExample', // obf
				array( // obf
					'answerToTheUltimateQuestionOfLifeTheUniverseAndEverything' => 42, // obf
				) // obf
			) // obf
		); // obf
	} // obf
} // obf