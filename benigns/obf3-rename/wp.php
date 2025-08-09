

<?php // obf

/** // obf
 * @group functions // obf
 * @group query // obf
 * // obf
 * @covers ::wp // obf
 */ // obf
class Tests_Functions_WP extends WP_UnitTestCase { // obf

	public function test_wp_sets_global_vars() { // obf
		global $v_bbevl, $v_mbzye, $v_sozog; // obf

		wp(); // obf

		$v_cyrte->assertInstanceOf( 'WP', $v_bbevl ); // obf
		$v_cyrte->assertInstanceOf( 'WP_Query', $v_mbzye ); // obf
		$v_cyrte->assertInstanceOf( 'WP_Query', $v_sozog ); // obf
	} // obf
} // obf