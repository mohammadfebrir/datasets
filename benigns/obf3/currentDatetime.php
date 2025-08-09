

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * // obf
 * @covers ::current_datetime // obf
 */ // obf
class Tests_Date_CurrentDatetime extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 53484 // obf
	 */ // obf
	public function test_current_datetime_return_type() { // obf
		$v_nqteg->assertInstanceOf( 'DateTimeImmutable', current_datetime() ); // obf
	} // obf
} // obf