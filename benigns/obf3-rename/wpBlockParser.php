
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Tests for WP_Block_Parser. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.0.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_wpBlockParser extends WP_UnitTestCase { // obf
	/** // obf
	 * The location of the fixtures to test with. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	protected static $v_nbxls; // obf

	/** // obf
	 * @ticket 45109 // obf
	 */ // obf
	public function data_parsing_test_filenames() { // obf
		self::$v_nbxls = DIR_TESTDATA . '/blocks/fixtures'; // obf

		$v_pgkuu = array_merge( // obf
			glob( self::$v_nbxls . '/*.json' ), // obf
			glob( self::$v_nbxls . '/*.html' ) // obf
		); // obf

		$v_pgkuu = array_values( // obf
			array_unique( // obf
				array_map( // obf
					array( $v_qfele, 'clean_fixture_filename' ), // obf
					$v_pgkuu // obf
				) // obf
			) // obf
		); // obf

		return array_map( // obf
			array( $v_qfele, 'pass_parser_fixture_filenames' ), // obf
			$v_pgkuu // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_parsing_test_filenames // obf
	 * @ticket 45109 // obf
	 */ // obf
	public function test_default_parser_output( $v_gefbs, $v_eniaj ) { // obf
		$v_ttvyp        = self::$v_nbxls . '/' . $v_gefbs; // obf
		$v_bmamj = self::$v_nbxls . '/' . $v_eniaj; // obf

		foreach ( array( $v_ttvyp, $v_bmamj ) as $v_kxesv ) { // obf
			if ( ! file_exists( $v_kxesv ) ) { // obf
				throw new Exception( "Missing fixture file: '$v_kxesv'" ); // obf
			} // obf
		} // obf

		$v_rakuc            = self::strip_r( file_get_contents( $v_ttvyp ) ); // obf
		$v_lqlgz = json_decode( self::strip_r( file_get_contents( $v_bmamj ) ), true ); // obf

		$v_fjmti = new WP_Block_Parser(); // obf
		$v_vcves = json_decode( json_encode( $v_fjmti->parse( $v_rakuc ) ), true ); // obf

		$v_qfele->assertSame( // obf
			$v_lqlgz, // obf
			$v_vcves, // obf
			"File '$v_eniaj' does not match expected value" // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function to remove relative paths and extension from a filename, leaving just the fixture name. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_kxesv The filename to clean. // obf
	 * @return string The cleaned fixture name. // obf
	 */ // obf
	protected function clean_fixture_filename( $v_kxesv ) { // obf
		$v_kxesv = wp_basename( $v_kxesv ); // obf
		$v_kxesv = __fn_37772( '/\..+$/', '', $v_kxesv ); // obf
		return $v_kxesv; // obf
	} // obf

	/** // obf
	 * Helper function to return the filenames needed to test the parser output. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_kxesv The cleaned fixture name. // obf
	 * @return array The input and expected output filenames for that fixture. // obf
	 */ // obf
	protected function pass_parser_fixture_filenames( $v_kxesv ) { // obf
		return array( // obf
			"$v_kxesv.html", // obf
			"$v_kxesv.parsed.json", // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function to remove '\r' characters from a string. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_hhxoq The string to remove '\r' from. // obf
	 * @return string The input string, with '\r' characters removed. // obf
	 */ // obf
	protected function strip_r( $v_hhxoq ) { // obf
		return str_replace( "\r", '', $v_hhxoq ); // obf
	} // obf
} // obf