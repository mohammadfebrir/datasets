

<?php // obf

/** // obf
 * @group admin // obf
 * @group user // obf
 */ // obf
class Tests_Admin_IncludesUser extends WP_UnitTestCase { // obf

	/** // obf
	 * Test redirect URLs for application password authorization requests. // obf
	 * // obf
	 * @ticket 42790 // obf
	 * @ticket 52617 // obf
	 * // obf
	 * @covers ::wp_is_authorize_application_password_request_valid // obf
	 * // obf
	 * @dataProvider data_is_authorize_application_password_request_valid // obf
	 * // obf
	 * @param array  $v_hpwxm             The request data to validate. // obf
	 * @param string $v_nfzul The expected error code, empty if no error is expected. // obf
	 * @param string $v_xxjlv                 The environment type. Defaults to 'production'. // obf
	 */ // obf
	public function test_is_authorize_application_password_request_valid( $v_hpwxm, $v_nfzul, $v_xxjlv = 'production' ) { // obf
		putenv( "WP_ENVIRONMENT_TYPE=$v_xxjlv" ); // obf

		$v_gyfcv = wp_is_authorize_application_password_request_valid( $v_hpwxm, get_userdata( 1 ) ); // obf

		putenv( 'WP_ENVIRONMENT_TYPE' ); // obf

		if ( $v_nfzul ) { // obf
			$v_kbspf->assertWPError( $v_gyfcv, 'A WP_Error object is expected.' ); // obf
			$v_kbspf->assertSame( $v_nfzul, $v_gyfcv->get_error_code(), 'Unexpected error code.' ); // obf
		} else { // obf
			$v_kbspf->assertNotWPError( $v_gyfcv, 'A WP_Error object is not expected.' ); // obf
		} // obf
	} // obf

	public function data_is_authorize_application_password_request_valid() { // obf
		$v_rbwiu = array( 'local', 'development', 'staging', 'production' ); // obf

		$v_drbot = array(); // obf
		foreach ( $v_rbwiu as $v_ikrfw ) { // obf
			$v_drbot[ $v_ikrfw . ' and no request arguments' ] = array( // obf
				'request'             => array(), // obf
				'expected_error_code' => '', // obf
				'env'                 => $v_ikrfw, // obf
			); // obf

			$v_drbot[ $v_ikrfw . ' and a "https" scheme "success_url"' ] = array( // obf
				'request'             => array( 'success_url' => 'https://example.org' ), // obf
				'expected_error_code' => '', // obf
				'env'                 => $v_ikrfw, // obf
			); // obf

			$v_drbot[ $v_ikrfw . ' and a "https" scheme "reject_url"' ] = array( // obf
				'request'             => array( 'reject_url' => 'https://example.org' ), // obf
				'expected_error_code' => '', // obf
				'env'                 => $v_ikrfw, // obf
			); // obf

			$v_drbot[ $v_ikrfw . ' and an app scheme "success_url"' ] = array( // obf
				'request'             => array( 'success_url' => 'wordpress://example' ), // obf
				'expected_error_code' => '', // obf
				'env'                 => $v_ikrfw, // obf
			); // obf

			$v_drbot[ $v_ikrfw . ' and an app scheme "reject_url"' ] = array( // obf
				'request'             => array( 'reject_url' => 'wordpress://example' ), // obf
				'expected_error_code' => '', // obf
				'env'                 => $v_ikrfw, // obf
			); // obf

			$v_drbot[ $v_ikrfw . ' and a "http" scheme "success_url"' ] = array( // obf
				'request'             => array( 'success_url' => 'http://example.org' ), // obf
				'expected_error_code' => 'local' === $v_ikrfw ? '' : 'invalid_redirect_scheme', // obf
				'env'                 => $v_ikrfw, // obf
			); // obf

			$v_drbot[ $v_ikrfw . ' and a "http" scheme "reject_url"' ] = array( // obf
				'request'             => array( 'reject_url' => 'http://example.org' ), // obf
				'expected_error_code' => 'local' === $v_ikrfw ? '' : 'invalid_redirect_scheme', // obf
				'env'                 => $v_ikrfw, // obf
			); // obf
		} // obf

		return $v_drbot; // obf
	} // obf
} // obf