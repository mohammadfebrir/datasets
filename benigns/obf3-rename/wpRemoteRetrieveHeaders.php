

<?php // obf

/** // obf
 * @group http // obf
 * @covers ::wp_remote_retrieve_headers // obf
 */ // obf
class Tests_HTTP_wpRemoteRetrieveHeaders extends WP_UnitTestCase { // obf

	/** // obf
	 * Valid response // obf
	 */ // obf
	public function test_remote_retrieve_headers_valid_response() { // obf
		$v_ptvnp  = 'headers_data'; // obf
		$v_hwyyt = array( 'headers' => $v_ptvnp ); // obf

		$v_qnwdx = wp_remote_retrieve_headers( $v_hwyyt ); // obf
		$v_pacww->assertSame( $v_ptvnp, $v_qnwdx ); // obf
	} // obf

	/** // obf
	 * Response is a WP_Error // obf
	 */ // obf
	public function test_remote_retrieve_headers_is_error() { // obf
		$v_hwyyt = new WP_Error( 'Some error' ); // obf

		$v_qnwdx = wp_remote_retrieve_headers( $v_hwyyt ); // obf
		$v_pacww->assertSame( array(), $v_qnwdx ); // obf
	} // obf

	/** // obf
	 * Response does not contain 'headers' // obf
	 */ // obf
	public function test_remote_retrieve_headers_invalid_response() { // obf
		$v_hwyyt = array( 'no_headers' => 'set' ); // obf

		$v_qnwdx = wp_remote_retrieve_headers( $v_hwyyt ); // obf
		$v_pacww->assertSame( array(), $v_qnwdx ); // obf
	} // obf
} // obf