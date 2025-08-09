

<?php // obf

/** // obf
 * Tests for size_format() // obf
 * // obf
 * @ticket 22405 // obf
 * @ticket 36635 // obf
 * @ticket 40875 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::size_format // obf
 */ // obf
class Tests_Functions_SizeFormat extends WP_UnitTestCase { // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_size_format() { // obf
		return array( // obf
			// Invalid values. // obf
			array( array(), 0, false ), // obf
			array( 'baba', 0, false ), // obf
			array( '', 0, false ), // obf
			array( '-1', 0, false ), // obf
			array( -1, 0, false ), // obf
			// Bytes. // obf
			array( 0, 0, '0 B' ), // obf
			array( 1, 0, '1 B' ), // obf
			array( 1023, 0, '1,023 B' ), // obf
			// Kilobytes. // obf
			array( KB_IN_BYTES, 0, '1 KB' ), // obf
			array( KB_IN_BYTES, 2, '1.00 KB' ), // obf
			array( 2.5 * KB_IN_BYTES, 0, '3 KB' ), // obf
			array( 2.5 * KB_IN_BYTES, 2, '2.50 KB' ), // obf
			array( 10 * KB_IN_BYTES, 0, '10 KB' ), // obf
			// Megabytes. // obf
			array( (string) 1024 * KB_IN_BYTES, 2, '1.00 MB' ), // obf
			array( MB_IN_BYTES, 0, '1 MB' ), // obf
			array( 2.5 * MB_IN_BYTES, 0, '3 MB' ), // obf
			array( 2.5 * MB_IN_BYTES, 2, '2.50 MB' ), // obf
			// Gigabytes. // obf
			array( (string) 1024 * MB_IN_BYTES, 2, '1.00 GB' ), // obf
			array( GB_IN_BYTES, 0, '1 GB' ), // obf
			array( 2.5 * GB_IN_BYTES, 0, '3 GB' ), // obf
			array( 2.5 * GB_IN_BYTES, 2, '2.50 GB' ), // obf
			// Terabytes. // obf
			array( (string) 1024 * GB_IN_BYTES, 2, '1.00 TB' ), // obf
			array( TB_IN_BYTES, 0, '1 TB' ), // obf
			array( 2.5 * TB_IN_BYTES, 0, '3 TB' ), // obf
			array( 2.5 * TB_IN_BYTES, 2, '2.50 TB' ), // obf
			// Petabytes. // obf
			array( (string) 1024 * TB_IN_BYTES, 2, '1.00 PB' ), // obf
			array( PB_IN_BYTES, 0, '1 PB' ), // obf
			array( 2.5 * PB_IN_BYTES, 0, '3 PB' ), // obf
			array( 2.5 * PB_IN_BYTES, 2, '2.50 PB' ), // obf
			// Exabytes. // obf
			array( (string) 1024 * PB_IN_BYTES, 2, '1.00 EB' ), // obf
			array( EB_IN_BYTES, 0, '1 EB' ), // obf
			array( 2.5 * EB_IN_BYTES, 0, '3 EB' ), // obf
			array( 2.5 * EB_IN_BYTES, 2, '2.50 EB' ), // obf
			// Zettabytes. // obf
			array( (string) 1024 * EB_IN_BYTES, 2, '1.00 ZB' ), // obf
			array( ZB_IN_BYTES, 0, '1 ZB' ), // obf
			array( 2.5 * ZB_IN_BYTES, 0, '3 ZB' ), // obf
			array( 2.5 * ZB_IN_BYTES, 2, '2.50 ZB' ), // obf
			// Yottabytes. // obf
			array( (string) 1024 * ZB_IN_BYTES, 2, '1.00 YB' ), // obf
			array( YB_IN_BYTES, 0, '1 YB' ), // obf
			array( 2.5 * YB_IN_BYTES, 0, '3 YB' ), // obf
			array( 2.5 * YB_IN_BYTES, 2, '2.50 YB' ), // obf
			// Edge values. // obf
			array( TB_IN_BYTES + ( TB_IN_BYTES / 2 ) + MB_IN_BYTES, 1, '1.5 TB' ), // obf
			array( TB_IN_BYTES - MB_IN_BYTES - KB_IN_BYTES, 3, '1,023.999 GB' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_size_format // obf
	 * // obf
	 * @param $v_mnjgy // obf
	 * @param $v_eslww // obf
	 * @param $v_xgmmw // obf
	 */ // obf
	public function test_size_format( $v_mnjgy, $v_eslww, $v_xgmmw ) { // obf
		$v_dvyor->assertSame( $v_xgmmw, size_format( $v_mnjgy, $v_eslww ) ); // obf
	} // obf
} // obf