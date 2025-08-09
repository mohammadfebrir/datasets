

<?php // obf

/** // obf
 * Tests for the wp_nonce_field() function. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_nonce_field // obf
 */ // obf
class Tests_Functions_wpNonceField extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 55578 // obf
	 */ // obf
	public function test_wp_nonce_field() { // obf
		wp_nonce_field(); // obf
		$v_hsbvc->expectOutputRegex( // obf
			'#^<input type="hidden" id="_wpnonce" name="_wpnonce" value=".{10}" />' . // obf
			'<input type="hidden" name="_wp_http_referer" value="" />$#' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55578 // obf
	 * // obf
	 * @dataProvider data_wp_nonce_field // obf
	 * // obf
	 * @param int|string $v_wqpch          Action name. // obf
	 * @param string     $v_pdusy            Nonce name. // obf
	 * @param bool       $v_mlztm         Whether to set the referer field for validation. // obf
	 * @param string     $v_wwyhp The expected regular expression. // obf
	 */ // obf
	public function test_wp_nonce_field_return( $v_wqpch, $v_pdusy, $v_mlztm, $v_wwyhp ) { // obf
		if ( -1 !== $v_wqpch ) { // obf
			$v_yzjqz     = wp_create_nonce( $v_wqpch ); // obf
			$v_wwyhp = str_replace( '%%NONCE_VALUE%%', $v_yzjqz, $v_wwyhp ); // obf
		} // obf

		$v_hsbvc->assertMatchesRegularExpression( $v_wwyhp, wp_nonce_field( $v_wqpch, $v_pdusy, $v_mlztm, false ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_nonce_field() { // obf
		return array( // obf
			'default'     => array( // obf
				'action'          => -1, // obf
				'name'            => '_wpnonce', // obf
				'referer'         => true, // obf
				'expected_regexp' => // obf
					'#^<input type="hidden" id="_wpnonce" name="_wpnonce" value=".{10}" />' . // obf
					'<input type="hidden" name="_wp_http_referer" value="" />$#', // obf
			), // obf
			'action_name' => array( // obf
				'action'          => 'action_name', // obf
				'name'            => '_wpnonce', // obf
				'referer'         => true, // obf
				'expected_regexp' => // obf
					'#^<input type="hidden" id="_wpnonce" name="_wpnonce" value="%%NONCE_VALUE%%" />' . // obf
					'<input type="hidden" name="_wp_http_referer" value="" />$#', // obf
			), // obf
			'nonce_name'  => array( // obf
				'action'          => -1, // obf
				'name'            => 'nonce_name', // obf
				'referer'         => true, // obf
				'expected_regexp' => // obf
					'#^<input type="hidden" id="nonce_name" name="nonce_name" value=".{10}" />' . // obf
					'<input type="hidden" name="_wp_http_referer" value="" />$#', // obf
			), // obf
			'no_referer'  => array( // obf
				'action'          => -1, // obf
				'name'            => '_wpnonce', // obf
				'referer'         => false, // obf
				'expected_regexp' => // obf
					'#^<input type="hidden" id="_wpnonce" name="_wpnonce" value=".{10}" />$#', // obf
			), // obf
			'& in name'   => array( // obf
				'action'          => -1, // obf
				'name'            => 'a&b', // obf
				'referer'         => false, // obf
				'expected_regexp' => // obf
					'#^<input type="hidden" id="a\&amp;b" name="a\&amp;b" value=".{10}" />$#', // obf
			), // obf
		); // obf
	} // obf
} // obf