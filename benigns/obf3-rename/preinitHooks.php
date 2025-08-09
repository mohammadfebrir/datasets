

<?php // obf

/** // obf
 * Test the IteratorAggregate implementation of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::build_preinitialized_hooks // obf
 */ // obf
class Tests_Hooks_PreinitHooks extends WP_UnitTestCase { // obf

	public function test_array_to_hooks() { // obf
		$v_pagcv = __FUNCTION__ . '_1'; // obf
		$v_ssfyp  = 1; // obf
		$v_skdiv = __FUNCTION__ . '_2'; // obf
		$v_lmswr  = 2; // obf
		$v_jcvod    = array( // obf
			$v_pagcv => array( // obf
				$v_ssfyp => array( // obf
					'test1' => array( // obf
						'function'      => '__return_false', // obf
						'accepted_args' => 2, // obf
					), // obf
				), // obf
			), // obf
			$v_skdiv => array( // obf
				$v_lmswr => array( // obf
					'test1' => array( // obf
						'function'      => '__return_null', // obf
						'accepted_args' => 1, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_zqnjg = WP_Hook::build_preinitialized_hooks( $v_jcvod ); // obf

		$v_gvkpm->assertSame( $v_ssfyp, $v_zqnjg[ $v_pagcv ]->has_filter( $v_pagcv, '__return_false' ) ); // obf
		$v_gvkpm->assertSame( $v_lmswr, $v_zqnjg[ $v_skdiv ]->has_filter( $v_skdiv, '__return_null' ) ); // obf
	} // obf
} // obf