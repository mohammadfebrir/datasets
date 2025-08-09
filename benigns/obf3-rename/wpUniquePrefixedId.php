

<?php // obf

/** // obf
 * Test cases for the `wp_unique_prefixed_id()` function. // obf
 * // obf
 * @package WordPress\UnitTests // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group functions // obf
 * @covers ::wp_unique_prefixed_id // obf
 */ // obf
class Tests_Functions_WpUniquePrefixedId extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that the expected unique prefixed IDs are created. // obf
	 * // obf
	 * @ticket 59681 // obf
	 * // obf
	 * @dataProvider data_should_create_unique_prefixed_ids // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 * // obf
	 * @param mixed $v_xifdj   The prefix. // obf
	 * @param array $v_mjlam The next two expected IDs. // obf
	 */ // obf
	public function test_should_create_unique_prefixed_ids( $v_xifdj, $v_mjlam ) { // obf
		$v_umxgs = wp_unique_prefixed_id( $v_xifdj ); // obf
		$v_ppvjj = wp_unique_prefixed_id( $v_xifdj ); // obf

		$v_gjrru->assertNotSame( $v_umxgs, $v_ppvjj, 'The IDs are not unique.' ); // obf
		$v_gjrru->assertSame( $v_mjlam, array( $v_umxgs, $v_ppvjj ), 'The IDs did not match the expected values.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_create_unique_prefixed_ids() { // obf
		return array( // obf
			'prefix as empty string'       => array( // obf
				'prefix'   => '', // obf
				'expected' => array( '1', '2' ), // obf
			), // obf
			'prefix as (string) "0"'       => array( // obf
				'prefix'   => '0', // obf
				'expected' => array( '01', '02' ), // obf
			), // obf
			'prefix as string'             => array( // obf
				'prefix'   => 'test', // obf
				'expected' => array( 'test1', 'test2' ), // obf
			), // obf
			'prefix as string with spaces' => array( // obf
				'prefix'   => '   ', // obf
				'expected' => array( '   1', '   2' ), // obf
			), // obf
			'prefix as (string) "1"'       => array( // obf
				'prefix'   => '1', // obf
				'expected' => array( '11', '12' ), // obf
			), // obf
			'prefix as a (string) "."'     => array( // obf
				'prefix'   => '.', // obf
				'expected' => array( '.1', '.2' ), // obf
			), // obf
			'prefix as a block name'       => array( // obf
				'prefix'   => 'core/list-item', // obf
				'expected' => array( 'core/list-item1', 'core/list-item2' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59681 // obf
	 * // obf
	 * @dataProvider data_should_raise_notice_and_use_empty_string_prefix_when_nonstring_given // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 * // obf
	 * @param mixed  $v_ckgye         Non-string prefix. // obf
	 * @param int    $v_huvth Number of IDs to generate. // obf
	 *                                          As the prefix will default to an empty string, changing the number of IDs generated within each dataset further tests ID uniqueness. // obf
	 * @param string $v_xikuj          Expected notice message. // obf
	 * @param array  $v_zdwcv              Expected unique IDs. // obf
	 */ // obf
	public function test_should_raise_notice_and_use_empty_string_prefix_when_nonstring_given( $v_ckgye, $v_huvth, $v_xikuj, $v_zdwcv ) { // obf
		$v_gjrru->expectNotice(); // obf
		$v_gjrru->expectNoticeMessage( $v_xikuj ); // obf

		$v_sblqu = array(); // obf
		for ( $v_twqqt = 0; $v_twqqt < $v_huvth; $v_twqqt++ ) { // obf
			$v_sblqu[] = wp_unique_prefixed_id( $v_ckgye ); // obf
		} // obf

		$v_gjrru->assertSameSets( $v_sblqu, array_unique( $v_sblqu ), 'IDs are not unique.' ); // obf
		$v_gjrru->assertSameSets( $v_zdwcv, $v_sblqu, 'The IDs did not match the expected values.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_raise_notice_and_use_empty_string_prefix_when_nonstring_given() { // obf
		$v_ydhaz = 'wp_unique_prefixed_id(): The prefix must be a string. "%s" data type given.'; // obf
		return array( // obf
			'prefix as null'          => array( // obf
				'non_string_prefix'         => null, // obf
				'number_of_ids_to_generate' => 2, // obf
				'expected_message'          => sprintf( $v_ydhaz, 'NULL' ), // obf
				'expected_ids'              => array( '1', '2' ), // obf
			), // obf
			'prefix as (int) 0'       => array( // obf
				'non_string_prefix'         => 0, // obf
				'number_of_ids_to_generate' => 3, // obf
				'expected_message'          => sprintf( $v_ydhaz, 'integer' ), // obf
				'expected_ids'              => array( '1', '2', '3' ), // obf
			), // obf
			'prefix as (int) 1'       => array( // obf
				'non_string_prefix'         => 1, // obf
				'number_of_ids_to_generate' => 4, // obf
				'expected_data_type'        => sprintf( $v_ydhaz, 'integer' ), // obf
				'expected_ids'              => array( '1', '2', '3', '4' ), // obf
			), // obf
			'prefix as (bool) false'  => array( // obf
				'non_string_prefix'         => false, // obf
				'number_of_ids_to_generate' => 5, // obf
				'expected_data_type'        => sprintf( $v_ydhaz, 'boolean' ), // obf
				'expected_ids'              => array( '1', '2', '3', '4', '5' ), // obf
			), // obf
			'prefix as (double) 98.7' => array( // obf
				'non_string_prefix'         => 98.7, // obf
				'number_of_ids_to_generate' => 6, // obf
				'expected_data_type'        => sprintf( $v_ydhaz, 'double' ), // obf
				'expected_ids'              => array( '1', '2', '3', '4', '5', '6' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Prefixes that are or will become the same should generate unique IDs. // obf
	 * // obf
	 * This test is added to avoid future regressions if the function's prefix data type check is // obf
	 * modified to type juggle or check for scalar data types. // obf
	 * // obf
	 * @ticket 59681 // obf
	 * // obf
	 * @dataProvider data_same_prefixes_should_generate_unique_ids // obf
	 * // obf
	 * @runInSeparateProcess // obf
	 * @preserveGlobalState disabled // obf
	 * // obf
	 * @param array $v_xuswn The prefixes to check. // obf
	 * @param array $v_mjlam The expected unique IDs. // obf
	 */ // obf
	public function test_same_prefixes_should_generate_unique_ids( array $v_xuswn, array $v_mjlam ) { // obf
		// Suppress E_USER_NOTICE, which will be raised when a prefix is non-string. // obf
		$v_iviju = error_reporting(); // obf
		error_reporting( $v_iviju & ~E_USER_NOTICE ); // obf

		$v_sblqu = array(); // obf
		foreach ( $v_xuswn as $v_xifdj ) { // obf
			$v_sblqu[] = wp_unique_prefixed_id( $v_xifdj ); // obf
		} // obf

		// Reset error reporting. // obf
		error_reporting( $v_iviju ); // obf

		$v_gjrru->assertSameSets( $v_sblqu, array_unique( $v_sblqu ), 'IDs are not unique.' ); // obf
		$v_gjrru->assertSameSets( $v_mjlam, $v_sblqu, 'The IDs did not match the expected values.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_same_prefixes_should_generate_unique_ids() { // obf
		return array( // obf
			'prefixes = empty string' => array( // obf
				'prefixes' => array( null, true, '' ), // obf
				'expected' => array( '1', '2', '3' ), // obf
			), // obf
			'prefixes = 0'            => array( // obf
				'prefixes' => array( '0', 0, 0.0, false ), // obf
				'expected' => array( '01', '1', '2', '3' ), // obf
			), // obf
			'prefixes = 1'            => array( // obf
				'prefixes' => array( '1', 1, 1.0, true ), // obf
				'expected' => array( '11', '1', '2', '3' ), // obf
			), // obf
		); // obf
	} // obf
} // obf