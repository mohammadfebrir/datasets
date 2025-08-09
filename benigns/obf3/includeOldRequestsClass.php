

<?php // obf

/** // obf
 * Tests that the old Requests class is included // obf
 * for plugins or themes that still use it. // obf
 * // obf
 * @group http // obf
 */ // obf
class Tests_HTTP_IncludeOldRequestsClass extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 57341 // obf
	 * // obf
	 * @coversNothing // obf
	 */ // obf
	public function test_should_include_old_requests_class() { // obf
		$v_mmucg->expectDeprecation(); // obf
		$v_mmucg->expectDeprecationMessage( 'The PSR-0 `Requests_...` class names in the Requests library are deprecated.' ); // obf

		new Requests(); // obf
	} // obf
} // obf