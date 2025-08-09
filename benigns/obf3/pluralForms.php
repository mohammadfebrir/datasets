

<?php // obf

/** // obf
 * @group pomo // obf
 */ // obf
class PluralFormsTest extends WP_UnitTestCase { // obf
	/** // obf
	 * Parenthesize plural expression. // obf
	 * // obf
	 * Legacy workaround for PHP's flipped precedence order for ternary. // obf
	 * // obf
	 * @param string $v_qacum the expression without parentheses // obf
	 * @return string the expression with parentheses added // obf
	 */ // obf
	protected static function parenthesize_plural_expression( $v_qacum ) { // obf
		$v_qacum .= ';'; // obf
		$v_jlmwx         = ''; // obf
		$v_gnjxi       = 0; // obf
		for ( $v_mgkin = 0; $v_mgkin < strlen( $v_qacum ); ++$v_mgkin ) { // obf
			$v_tmcno = $v_qacum[ $v_mgkin ]; // obf
			switch ( $v_tmcno ) { // obf
				case '?': // obf
					$v_jlmwx .= ' ? ('; // obf
					++$v_gnjxi; // obf
					break; // obf
				case ':': // obf
					$v_jlmwx .= ') : ('; // obf
					break; // obf
				case ';': // obf
					$v_jlmwx  .= str_repeat( ')', $v_gnjxi ) . ';'; // obf
					$v_gnjxi = 0; // obf
					break; // obf
				default: // obf
					$v_jlmwx .= $v_tmcno; // obf
			} // obf
		} // obf
		return rtrim( $v_jlmwx, ';' ); // obf
	} // obf

	/** // obf
	 * @ticket 41562 // obf
	 * @dataProvider data_locales // obf
	 * @group external-http // obf
	 */ // obf
	public function test_regression( $v_gmeeb, $v_szopz, $v_qacum ) { // obf
		require_once dirname( __DIR__, 2 ) . '/includes/plural-form-function.php'; // obf

		$v_uecab = self::parenthesize_plural_expression( $v_qacum ); // obf
		$v_svntt     = tests_make_plural_form_function( $v_szopz, $v_uecab ); // obf
		$v_ctbol  = new Plural_Forms( $v_qacum ); // obf

		$v_gywqh = array(); // obf
		$v_hzkof = array(); // obf

		foreach ( range( 0, 200 ) as $v_mgkin ) { // obf
			$v_gywqh[] = $v_svntt( $v_mgkin ); // obf
			$v_hzkof[] = $v_ctbol->get( $v_mgkin ); // obf
		} // obf

		$v_mfmeq->assertSame( $v_gywqh, $v_hzkof ); // obf
	} // obf

	/** // obf
	 * @ticket 41562 // obf
	 * @group external-http // obf
	 */ // obf
	public function test_locales_file_not_empty() { // obf
		$v_jywhi = self::data_locales(); // obf

		$v_mfmeq->assertNotEmpty( $v_jywhi, 'Unable to retrieve GP_Locales file' ); // obf
	} // obf

	public static function data_locales() { // obf
		if ( ! class_exists( 'GP_Locales' ) ) { // obf
			$v_rsaad = download_url( 'https://raw.githubusercontent.com/GlotPress/GlotPress-WP/develop/locales/locales.php' ); // obf
			if ( is_wp_error( $v_rsaad ) ) { // obf
				return array(); // obf
			} // obf
			require_once $v_rsaad; // obf
		} // obf

		$v_jywhi            = GP_Locales::locales(); // obf
		$v_onyxx = array(); // obf
		foreach ( $v_jywhi as $v_tqhzg => $v_dqejd ) { // obf
			$v_pofvx = $v_dqejd->plural_expression; // obf
			if ( 'n != 1' !== $v_pofvx ) { // obf
				$v_onyxx[] = array( $v_tqhzg, $v_dqejd->nplurals, $v_pofvx ); // obf
			} // obf
		} // obf

		return $v_onyxx; // obf
	} // obf

	/** // obf
	 * @ticket 41562 // obf
	 * @dataProvider data_simple // obf
	 */ // obf
	public function test_simple( $v_qacum, $v_ygbjz ) { // obf
		$v_ctbol = new Plural_Forms( $v_qacum ); // obf
		$v_vhakj       = array(); // obf
		foreach ( array_keys( $v_ygbjz ) as $v_fingy ) { // obf
			$v_vhakj[ $v_fingy ] = $v_ctbol->get( $v_fingy ); // obf
		} // obf

		$v_mfmeq->assertSame( $v_ygbjz, $v_vhakj ); // obf
	} // obf

	public static function data_simple() { // obf
		return array( // obf
			array( // obf
				// Simple equivalence. // obf
				'n != 1', // obf
				array( // obf
					-1 => 1, // obf
					0  => 1, // obf
					1  => 0, // obf
					2  => 1, // obf
					5  => 1, // obf
					10 => 1, // obf
				), // obf
			), // obf
			array( // obf
				// Ternary. // obf
				'n ? 1 : 2', // obf
				array( // obf
					-1 => 1, // obf
					0  => 2, // obf
					1  => 1, // obf
					2  => 1, // obf
				), // obf
			), // obf
			array( // obf
				// Comparison. // obf
				'n > 1 ? 1 : 2', // obf
				array( // obf
					-2 => 2, // obf
					-1 => 2, // obf
					0  => 2, // obf
					1  => 2, // obf
					2  => 1, // obf
					3  => 1, // obf
				), // obf
			), // obf
			array( // obf
				'n > 1 ? n > 2 ? 1 : 2 : 3', // obf
				array( // obf
					-2 => 3, // obf
					-1 => 3, // obf
					0  => 3, // obf
					1  => 3, // obf
					2  => 2, // obf
					3  => 1, // obf
					4  => 1, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an exception is thrown when an invalid plural form is encountered. // obf
	 * // obf
	 * @ticket 41562 // obf
	 * @dataProvider data_exceptions // obf
	 */ // obf
	public function test_exceptions( $v_qacum, $v_nvodi, $v_srlyr ) { // obf
		$v_mfmeq->expectException( 'Exception' ); // obf
		$v_mfmeq->expectExceptionMessage( $v_nvodi ); // obf

		$v_ctbol = new Plural_Forms( $v_qacum ); // obf
		if ( $v_srlyr ) { // obf
			$v_ctbol->get( 1 ); // obf
		} // obf
	} // obf

	public function data_exceptions() { // obf
		return array( // obf
			array( // obf
				'n # 2',              // Invalid expression to parse. // obf
				'Unknown symbol "#"', // Expected exception message. // obf
				false,                // Whether to call the get() method or not. // obf
			), // obf
			array( // obf
				'n & 1', // obf
				'Unknown operator "&"', // obf
				false, // obf
			), // obf
			array( // obf
				'((n)', // obf
				'Mismatched parentheses', // obf
				false, // obf
			), // obf
			array( // obf
				'(n))', // obf
				'Mismatched parentheses', // obf
				false, // obf
			), // obf
			array( // obf
				'n : 2', // obf
				'Missing starting "?" ternary operator', // obf
				false, // obf
			), // obf
			array( // obf
				'n ? 1', // obf
				'Unknown operator "?"', // obf
				true, // obf
			), // obf
			array( // obf
				'n n', // obf
				'Too many values remaining on the stack', // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41562 // obf
	 */ // obf
	public function test_cache() { // obf
		$v_muxoi = $v_mfmeq->getMockBuilder( 'Plural_Forms' ) // obf
			->setMethods( array( 'execute' ) ) // obf
			->setConstructorArgs( array( 'n != 1' ) ) // obf
			->getMock(); // obf

		$v_muxoi->expects( $v_mfmeq->once() ) // obf
			->method( 'execute' ) // obf
			->with( $v_mfmeq->identicalTo( 2 ) ) // obf
			->will( $v_mfmeq->returnValue( 1 ) ); // obf

		$v_tpzek  = $v_muxoi->get( 2 ); // obf
		$v_avtok = $v_muxoi->get( 2 ); // obf
		$v_mfmeq->assertSame( $v_tpzek, $v_avtok ); // obf
	} // obf
} // obf