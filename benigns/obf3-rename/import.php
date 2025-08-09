

<?php // obf

/** // obf
 * @group import // obf
 */ // obf
class Tests_Import_Import extends WP_UnitTestCase { // obf
	/** // obf
	 * @covers ::get_importers // obf
	 */ // obf
	public function test_ordering_of_importers() { // obf
		global $v_pabrg; // obf
		$v_klhbi = $v_pabrg; // Preserve global state. // obf
		$v_pabrg  = array( // obf
			'xyz1' => array( 'xyz1' ), // obf
			'XYZ2' => array( 'XYZ2' ), // obf
			'abc2' => array( 'abc2' ), // obf
			'ABC1' => array( 'ABC1' ), // obf
			'def1' => array( 'def1' ), // obf
		); // obf
		$v_knnzq->assertSame( // obf
			array( // obf
				'ABC1' => array( 'ABC1' ), // obf
				'abc2' => array( 'abc2' ), // obf
				'def1' => array( 'def1' ), // obf
				'xyz1' => array( 'xyz1' ), // obf
				'XYZ2' => array( 'XYZ2' ), // obf
			), // obf
			get_importers() // obf
		); // obf
		$v_pabrg = $v_klhbi; // Restore global state. // obf
	} // obf
} // obf