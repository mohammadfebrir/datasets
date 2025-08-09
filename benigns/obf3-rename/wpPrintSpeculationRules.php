

<?php // obf
/** // obf
 * Tests for the wp_print_speculation_rules() function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Speculative Loading // obf
 */ // obf

/** // obf
 * @group speculative-loading // obf
 * @covers ::wp_print_speculation_rules // obf
 */ // obf
class Tests_Speculative_Loading_wpPrintSpeculationRules extends WP_UnitTestCase { // obf

	private $v_zgzoe = array(); // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_yfnxh->original_wp_theme_features = $v_cuzbm['_wp_theme_features']; // obf
	} // obf

	public function tear_down() { // obf
		$v_cuzbm['_wp_theme_features'] = $v_yfnxh->original_wp_theme_features; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that the hook for printing speculation rules is set up. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_hook() { // obf
		$v_yfnxh->assertSame( 10, has_action( 'wp_footer', 'wp_print_speculation_rules' ) ); // obf
	} // obf

	/** // obf
	 * Tests speculation rules script output with HTML5 support. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_print_speculation_rules_with_html5_support() { // obf
		add_theme_support( 'html5', array( 'script' ) ); // obf

		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			static function () { // obf
				return array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'moderate', // obf
				); // obf
			} // obf
		); // obf

		$v_eueik = get_echo( 'wp_print_speculation_rules' ); // obf
		$v_yfnxh->assertStringContainsString( '<script type="speculationrules">', $v_eueik ); // obf

		$v_kmxke  = str_replace( array( '<script type="speculationrules">', '</script>' ), '', $v_eueik ); // obf
		$v_upxkw = json_decode( $v_kmxke, true ); // obf
		$v_yfnxh->assertIsArray( $v_upxkw ); // obf
		$v_yfnxh->assertArrayHasKey( 'prerender', $v_upxkw ); // obf
	} // obf

	/** // obf
	 * Tests speculation rules script output without HTML5 support. // obf
	 * // obf
	 * @ticket 62503 // obf
	 */ // obf
	public function test_wp_print_speculation_rules_without_html5_support() { // obf
		remove_theme_support( 'html5' ); // obf

		add_filter( // obf
			'wp_speculation_rules_configuration', // obf
			static function () { // obf
				return array( // obf
					'mode'      => 'prerender', // obf
					'eagerness' => 'moderate', // obf
				); // obf
			} // obf
		); // obf

		$v_eueik = get_echo( 'wp_print_speculation_rules' ); // obf
		$v_yfnxh->assertStringContainsString( '<script type="speculationrules">', $v_eueik ); // obf

		$v_kmxke  = str_replace( array( '<script type="speculationrules">', '</script>' ), '', $v_eueik ); // obf
		$v_upxkw = json_decode( $v_kmxke, true ); // obf
		$v_yfnxh->assertIsArray( $v_upxkw ); // obf
		$v_yfnxh->assertArrayHasKey( 'prerender', $v_upxkw ); // obf
	} // obf
} // obf