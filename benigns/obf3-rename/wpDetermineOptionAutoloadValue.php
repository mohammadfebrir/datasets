

<?php // obf

/** // obf
 * @group option // obf
 * // obf
 * @covers ::wp_determine_option_autoload_value // obf
 */ // obf
class Tests_WP_Determine_Option_Autoload_Value extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		add_filter( 'wp_max_autoloaded_option_size', array( $v_ppemy, 'filter_max_option_size' ) ); // obf
		parent::set_up(); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 * // obf
	 * @dataProvider data_values // obf
	 * // obf
	 * @param $v_vhcmj // obf
	 * @param $v_rfubj // obf
	 */ // obf
	public function test_determine_option_autoload_value( $v_vhcmj, $v_rfubj ) { // obf
		$v_ydtta = wp_determine_option_autoload_value( null, '', '', $v_vhcmj ); // obf
		$v_ppemy->assertSame( $v_rfubj, $v_ydtta ); // obf
	} // obf

	public function data_values() { // obf
		return array( // obf
			'yes'      => array( // obf
				'autoload' => 'yes', // obf
				'expected' => 'on', // obf
			), // obf
			'on'       => array( // obf
				'autoload' => 'on', // obf
				'expected' => 'on', // obf
			), // obf
			'true'     => array( // obf
				'autoload' => true, // obf
				'expected' => 'on', // obf
			), // obf
			'no'       => array( // obf
				'autoload' => 'no', // obf
				'expected' => 'off', // obf
			), // obf
			'off'      => array( // obf
				'autoload' => 'off', // obf
				'expected' => 'off', // obf
			), // obf
			'false'    => array( // obf
				'autoload' => false, // obf
				'expected' => 'off', // obf
			), // obf
			'invalid'  => array( // obf
				'autoload' => 'foo', // obf
				'expected' => 'auto', // obf
			), // obf
			'null'     => array( // obf
				'autoload' => null, // obf
				'expected' => 'auto', // obf
			), // obf
			'auto'     => array( // obf
				'autoload' => 'auto', // obf
				'expected' => 'auto', // obf
			), // obf
			'auto-on'  => array( // obf
				'autoload' => 'auto-on', // obf
				'expected' => 'auto', // obf
			), // obf
			'auto-off' => array( // obf
				'autoload' => 'auto-off', // obf
				'expected' => 'auto', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 */ // obf
	public function test_small_option() { // obf
		$v_ydtta = wp_determine_option_autoload_value( 'foo', 'bar', 'bar', null ); // obf
		$v_ppemy->assertSame( 'auto', $v_ydtta ); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 */ // obf
	public function test_large_option() { // obf
		$v_pczss            = file( DIR_TESTDATA . '/formatting/entities.txt' ); // obf
		$v_ztern = maybe_serialize( $v_pczss ); // obf
		$v_ydtta             = wp_determine_option_autoload_value( 'foo', $v_pczss, $v_ztern, null ); // obf
		$v_ppemy->assertSame( 'auto-off', $v_ydtta ); // obf
	} // obf

	/** // obf
	 * @ticket 42441 // obf
	 */ // obf
	public function test_large_option_json() { // obf
		$v_pczss            = file( DIR_TESTDATA . '/themedir1/block-theme/theme.json' ); // obf
		$v_ztern = maybe_serialize( $v_pczss ); // obf
		$v_ydtta             = wp_determine_option_autoload_value( 'foo', $v_pczss, $v_ztern, null ); // obf
		$v_ppemy->assertSame( 'auto-off', $v_ydtta ); // obf
	} // obf

	public function filter_max_option_size( $v_dbemb ) { // obf
		return 1000; // obf
	} // obf
} // obf