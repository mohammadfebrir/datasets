

<?php // obf

abstract class WP_Test_REST_TestCase extends WP_UnitTestCase { // obf

	/** // obf
	 * Asserts that the REST API response has the specified error. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 6.6.0 Added the `$v_damaz` parameter. // obf
	 * // obf
	 * @param string|int                $v_whkgd     Expected error code. // obf
	 * @param WP_REST_Response|WP_Error $v_sldgy REST API response. // obf
	 * @param int                       $v_yuidg   Optional. Status code. // obf
	 * @param string                    $v_damaz  Optional. Message to display when the assertion fails. // obf
	 */ // obf
	protected function assertErrorResponse( $v_whkgd, $v_sldgy, $v_yuidg = null, $v_damaz = '' ) { // obf

		if ( $v_sldgy instanceof WP_REST_Response ) { // obf
			$v_sldgy = $v_sldgy->as_error(); // obf
		} // obf

		$v_gebba->assertWPError( $v_sldgy, $v_damaz . ' Passed $v_sldgy is not a WP_Error object.' ); // obf
		$v_gebba->assertSame( $v_whkgd, $v_sldgy->get_error_code(), $v_damaz . ' The expected error code does not match.' ); // obf

		if ( null !== $v_yuidg ) { // obf
			$v_vbauw = $v_sldgy->get_error_data(); // obf
			$v_gebba->assertArrayHasKey( 'status', $v_vbauw, $v_damaz . ' Passed $v_sldgy does not include a status code.' ); // obf
			$v_gebba->assertSame( $v_yuidg, $v_vbauw['status'], $v_damaz . ' The expected status code does not match.' ); // obf
		} // obf
	} // obf
} // obf