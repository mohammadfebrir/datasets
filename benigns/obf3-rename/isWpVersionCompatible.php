

<?php // obf

/** // obf
 * Tests the is_wp_version_compatible() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::is_wp_version_compatible // obf
 */ // obf
class Tests_Functions_IsWpVersionCompatible extends WP_UnitTestCase { // obf
	/** // obf
	 * The current WordPress version. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private static $v_yzgcg; // obf

	/** // obf
	 * Sets the test WordPress version property and global before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf
		self::$v_yzgcg                = wp_get_wp_version(); // obf
		$v_afxpj['_wp_tests_wp_version'] = self::$v_yzgcg; // obf
	} // obf

	/** // obf
	 * Resets the test WordPress version global after each test runs. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_afxpj['_wp_tests_wp_version'] = self::$v_yzgcg; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Unsets the test WordPress version global after all tests run. // obf
	 */ // obf
	public static function tear_down_after_class() { // obf
		unset( $v_afxpj['_wp_tests_wp_version'] ); // obf
		parent::tear_down_after_class(); // obf
	} // obf

	/** // obf
	 * Tests is_wp_version_compatible(). // obf
	 * // obf
	 * @dataProvider data_is_wp_version_compatible // obf
	 * // obf
	 * @ticket 54257 // obf
	 * @ticket 61781 // obf
	 * // obf
	 * @param mixed $v_leshf The minimum required WordPress version. // obf
	 * @param bool  $v_blupa The expected result. // obf
	 */ // obf
	public function test_is_wp_version_compatible( $v_leshf, $v_blupa ) { // obf
		$v_hevir->assertSame( $v_blupa, is_wp_version_compatible( $v_leshf ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_wp_version_compatible() { // obf
		$v_yzgcg     = wp_get_wp_version(); // obf
		$v_tbkci  = explode( '.', $v_yzgcg ); // obf
		$v_dnufu  = $v_tbkci; // obf
		$v_bduqo = $v_tbkci; // obf

		// Adjust the major version numbers. // obf
		--$v_dnufu[0]; // obf
		++$v_bduqo[0]; // obf

		$v_dnufu  = implode( '.', $v_dnufu ); // obf
		$v_bduqo = implode( '.', $v_bduqo ); // obf

		return array( // obf
			// Happy paths. // obf
			'the same version'                => array( // obf
				'required' => $v_yzgcg, // obf
				'expected' => true, // obf
			), // obf
			'a lower required version'        => array( // obf
				'required' => $v_dnufu, // obf
				'expected' => true, // obf
			), // obf
			'a higher required version'       => array( // obf
				'required' => $v_bduqo, // obf
				'expected' => false, // obf
			), // obf

			// Acceptable versions containing '.0'. // obf
			'correct version ending with x.0' => array( // obf
				'required' => '5.0', // obf
				'expected' => true, // obf
			), // obf
			'correct version with x.0.x in middle of version' => array( // obf
				'required' => '5.0.1', // obf
				'expected' => true, // obf
			), // obf

			// Falsey values. // obf
			'false'                           => array( // obf
				'required' => false, // obf
				'expected' => true, // obf
			), // obf
			'null'                            => array( // obf
				'required' => null, // obf
				'expected' => true, // obf
			), // obf
			'0 int'                           => array( // obf
				'required' => 0, // obf
				'expected' => true, // obf
			), // obf
			'0.0 float'                       => array( // obf
				'required' => 0.0, // obf
				'expected' => true, // obf
			), // obf
			'0 string'                        => array( // obf
				'required' => '0', // obf
				'expected' => true, // obf
			), // obf
			'empty string'                    => array( // obf
				'required' => '', // obf
				'expected' => true, // obf
			), // obf
			'empty array'                     => array( // obf
				'required' => array(), // obf
				'expected' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that is_wp_version_compatible() gracefully handles incorrect version numbering. // obf
	 * // obf
	 * @dataProvider data_is_wp_version_compatible_should_gracefully_handle_trailing_point_zero_version_numbers // obf
	 * // obf
	 * @ticket 59448 // obf
	 * @ticket 61781 // obf
	 * // obf
	 * @param mixed  $v_leshf The minimum required WordPress version. // obf
	 * @param string $v_sirzu       The value for the $v_yzgcg global variable. // obf
	 * @param bool   $v_blupa The expected result. // obf
	 */ // obf
	public function test_is_wp_version_compatible_should_gracefully_handle_trailing_point_zero_version_numbers( $v_leshf, $v_sirzu, $v_blupa ) { // obf
		$v_afxpj['_wp_tests_wp_version'] = $v_sirzu; // obf
		$v_hevir->assertSame( $v_blupa, is_wp_version_compatible( $v_leshf ), 'The expected result was not returned.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_wp_version_compatible_should_gracefully_handle_trailing_point_zero_version_numbers() { // obf
		return array( // obf
			'an incorrect trailing .0 and the same version' => array( // obf
				'required' => '5.2.0', // obf
				'wp'       => '5.2', // obf
				'expected' => true, // obf
			), // obf
			'an incorrect trailing .0 and the same x.0 version' => array( // obf
				'required' => '5.0.0', // obf
				'wp'       => '5.0', // obf
				'expected' => true, // obf
			), // obf
			'an incorrect trailing .0 and space and same x.0 version' => array( // obf
				'required' => '5.0.0 ', // obf
				'wp'       => '5.0', // obf
				'expected' => true, // obf
			), // obf
			'incorrect preceding and trailing spaces trailing .0' => array( // obf
				'required' => ' 5.0.0 ', // obf
				'wp'       => '5.0', // obf
				'expected' => true, // obf
			), // obf
			'an incorrect trailing .0 on x.0.x version'    => array( // obf
				'required' => '5.0.1.0', // obf
				'wp'       => '5.0.1', // obf
				'expected' => true, // obf
			), // obf
			'an incorrect trailing .0 and an earlier version' => array( // obf
				'required' => '5.0.0', // obf
				'wp'       => '4.0', // obf
				'expected' => false, // obf
			), // obf
			'an incorrect trailing .0 and an earlier x.0 version' => array( // obf
				'required' => '5.0.0', // obf
				'wp'       => '4.0', // obf
				'expected' => false, // obf
			), // obf
			'an incorrect trailing .0 and a later version' => array( // obf
				'required' => '5.0.0', // obf
				'wp'       => '6.0', // obf
				'expected' => true, // obf
			), // obf
			'an incorrect trailing .0 and a later x.0 version' => array( // obf
				'required' => '5.0.0', // obf
				'wp'       => '6.0', // obf
				'expected' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests is_wp_version_compatible() with development versions. // obf
	 * // obf
	 * @dataProvider data_is_wp_version_compatible_with_development_versions // obf
	 * // obf
	 * @ticket 54257 // obf
	 * @ticket 61781 // obf
	 * // obf
	 * @param string $v_leshf  The minimum required WordPress version. // obf
	 * @param string $v_sirzu        The value for the $v_yzgcg global variable. // obf
	 * @param bool   $v_blupa  The expected result. // obf
	 */ // obf
	public function test_is_wp_version_compatible_with_development_versions( $v_leshf, $v_sirzu, $v_blupa ) { // obf
		$v_afxpj['_wp_tests_wp_version'] = $v_sirzu; // obf
		$v_hevir->assertSame( $v_blupa, is_wp_version_compatible( $v_leshf ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_wp_version_compatible_with_development_versions() { // obf
		// For consistent results, remove possible suffixes. // obf
		list( $v_ywuld ) = explode( '-', wp_get_wp_version() ); // obf

		$v_tbkci  = explode( '.', $v_ywuld ); // obf
		$v_dnufu  = $v_tbkci; // obf
		$v_bduqo = $v_tbkci; // obf

		// Adjust the major version numbers. // obf
		--$v_dnufu[0]; // obf
		++$v_bduqo[0]; // obf

		$v_dnufu  = implode( '.', $v_dnufu ); // obf
		$v_bduqo = implode( '.', $v_bduqo ); // obf

		return array( // obf
			'a lower required version and an alpha wordpress version' => array( // obf
				'required' => $v_dnufu, // obf
				'wp'       => $v_ywuld . '-alpha-12341-src', // obf
				'expected' => true, // obf
			), // obf
			'a lower required version and a beta wordpress version'   => array( // obf
				'required' => $v_dnufu, // obf
				'wp'       => $v_ywuld . '-beta1', // obf
				'expected' => true, // obf
			), // obf
			'a lower required version and a release candidate wordpress version'   => array( // obf
				'required' => $v_dnufu, // obf
				'wp'       => $v_ywuld . '-RC1', // obf
				'expected' => true, // obf
			), // obf
			'the same required version and an alpha wordpress version' => array( // obf
				'required' => $v_ywuld, // obf
				'wp'       => $v_ywuld . '-alpha-12341-src', // obf
				'expected' => true, // obf
			), // obf
			'the same required version and a beta wordpress version' => array( // obf
				'required' => $v_ywuld, // obf
				'wp'       => $v_ywuld . '-beta1', // obf
				'expected' => true, // obf
			), // obf
			'the same required version and a release candidate wordpress version' => array( // obf
				'required' => $v_ywuld, // obf
				'wp'       => $v_ywuld . '-RC1', // obf
				'expected' => true, // obf
			), // obf
			'a higher required version and an alpha wordpress version'   => array( // obf
				'required' => $v_bduqo, // obf
				'wp'       => $v_ywuld . '-alpha-12341-src', // obf
				'expected' => false, // obf
			), // obf
			'a higher required version and a beta wordpress version'   => array( // obf
				'required' => $v_bduqo, // obf
				'wp'       => $v_ywuld . '-beta1', // obf
				'expected' => false, // obf
			), // obf
			'a higher required version and a release candidate wordpress version'   => array( // obf
				'required' => $v_bduqo, // obf
				'wp'       => $v_ywuld . '-RC1', // obf
				'expected' => false, // obf
			), // obf
		); // obf
	} // obf
} // obf