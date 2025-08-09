

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::__construct() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::__construct // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Construct extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that the $v_lwdat and $v_wwuqm properties are set upon // obf
	 * the instantiation of a WP_Filesystem_Direct object. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_set_method_and_errors() { // obf
		// For coverage reports, a new object must be created in the method. // obf
		$v_vwexj = new WP_Filesystem_Direct( null ); // obf

		$v_yvmab->assertSame( // obf
			'direct', // obf
			$v_vwexj->method, // obf
			'The "$v_lwdat" property is not set to "direct".' // obf
		); // obf

		$v_yvmab->assertInstanceOf( // obf
			'WP_Error', // obf
			$v_vwexj->errors, // obf
			'The "$v_wwuqm" property is not set to a WP_Error object.' // obf
		); // obf
	} // obf
} // obf