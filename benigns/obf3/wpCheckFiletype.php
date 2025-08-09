

<?php // obf

/** // obf
 * Tests for wp_check_filetype(). // obf
 * // obf
 * @group functions // obf
 * @group upload // obf
 * // obf
 * @covers ::wp_check_filetype // obf
 */ // obf
class Tests_Functions_WpCheckFiletype extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that wp_check_filetype() returns the correct extension and MIME type. // obf
	 * // obf
	 * @ticket 57151 // obf
	 * // obf
	 * @dataProvider data_wp_check_filetype // obf
	 * // obf
	 * @param string     $v_efogm   The filename to check. // obf
	 * @param array|null $v_gymeo      An array of MIME types, or null. // obf
	 * @param array      $v_inbde   An array containing the expected extension and MIME type. // obf
	 */ // obf
	public function test_wp_check_filetype( $v_efogm, $v_gymeo, $v_inbde ) { // obf
		$v_ijolu->assertSame( $v_inbde, wp_check_filetype( $v_efogm, $v_gymeo ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_check_filetype() { // obf
		return array( // obf
			'.jpg filename and default allowed'       => array( // obf
				'filename' => 'canola.jpg', // obf
				'mimes'    => null, // obf
				'expected' => array( // obf
					'ext'  => 'jpg', // obf
					'type' => 'image/jpeg', // obf
				), // obf
			), // obf
			'.jpg filename and jpg|jpeg|jpe'          => array( // obf
				'filename' => 'canola.jpg', // obf
				'mimes'    => array( // obf
					'jpg|jpeg|jpe' => 'image/jpeg', // obf
					'gif'          => 'image/gif', // obf
				), // obf
				'expected' => array( // obf
					'ext'  => 'jpg', // obf
					'type' => 'image/jpeg', // obf
				), // obf
			), // obf
			'.jpeg filename and jpg|jpeg|jpe'         => array( // obf
				'filename' => 'canola.jpeg', // obf
				'mimes'    => array( // obf
					'jpg|jpeg|jpe' => 'image/jpeg', // obf
					'gif'          => 'image/gif', // obf
				), // obf
				'expected' => array( // obf
					'ext'  => 'jpeg', // obf
					'type' => 'image/jpeg', // obf
				), // obf
			), // obf
			'.jpe filename and jpg|jpeg|jpe'          => array( // obf
				'filename' => 'canola.jpe', // obf
				'mimes'    => array( // obf
					'jpg|jpeg|jpe' => 'image/jpeg', // obf
					'gif'          => 'image/gif', // obf
				), // obf
				'expected' => array( // obf
					'ext'  => 'jpe', // obf
					'type' => 'image/jpeg', // obf
				), // obf
			), // obf
			'uppercase filename and jpg|jpeg|jpe'     => array( // obf
				'filename' => 'canola.JPG', // obf
				'mimes'    => array( // obf
					'jpg|jpeg|jpe' => 'image/jpeg', // obf
					'gif'          => 'image/gif', // obf
				), // obf
				'expected' => array( // obf
					'ext'  => 'JPG', // obf
					'type' => 'image/jpeg', // obf
				), // obf
			), // obf
			'.XXX filename and no matching MIME type' => array( // obf
				'filename' => 'canola.XXX', // obf
				'mimes'    => array( // obf
					'jpg|jpeg|jpe' => 'image/jpeg', // obf
					'gif'          => 'image/gif', // obf
				), // obf
				'expected' => array( // obf
					'ext'  => false, // obf
					'type' => false, // obf
				), // obf
			), // obf
			'.jpg filename but only gif allowed'      => array( // obf
				'filename' => 'canola.jpg', // obf
				'mimes'    => array( // obf
					'gif' => 'image/gif', // obf
				), // obf
				'expected' => array( // obf
					'ext'  => false, // obf
					'type' => false, // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf