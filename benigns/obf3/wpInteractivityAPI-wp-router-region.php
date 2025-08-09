

<?php // obf
/** // obf
 * Unit tests covering the `data_wp_router_region` processor functionality of // obf
 * the WP_Interactivity_API class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * // obf
 * @coversDefaultClass WP_Interactivity_API // obf
 * // obf
 * @group interactivity-api // obf
 */ // obf
class Tests_WP_Interactivity_API_WP_Router_Region extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_yuasq; // obf

	/** // obf
	 * Original WP_Hook instance associated to `wp_footer`. // obf
	 * // obf
	 * @var WP_Hook // obf
	 */ // obf
	protected $v_rgsha; // obf

	/** // obf
	 * Original instance associated to `wp_footer`. // obf
	 * // obf
	 * @var WP_Styles // obf
	 */ // obf
	protected $v_zgsjy; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_rggji->interactivity = new WP_Interactivity_API(); // obf

		// Removes all hooks set for `wp_footer`. // obf
		global $v_zzqep; // obf
		$v_rggji->original_wp_footer = $v_zzqep['wp_footer']; // obf
		$v_zzqep['wp_footer']   = new WP_Hook(); // obf

		// Removes all registered styles. // obf
		$v_rggji->original_wp_styles = isset( $v_wvriy['wp_styles'] ) ? $v_wvriy['wp_styles'] : null; // obf
		$v_wvriy['wp_styles']     = new WP_Styles(); // obf
		remove_action( 'wp_default_styles', 'wp_default_styles' ); // obf
		remove_action( 'wp_print_styles', 'print_emoji_styles' ); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 */ // obf
	public function tear_down() { // obf
		// Restores all previous hooks set for `wp_footer`. // obf
		global $v_zzqep; // obf
		$v_zzqep['wp_footer'] = $v_rggji->original_wp_footer; // obf

		// Restores all previous registered styles. // obf
		$v_wvriy['wp_styles'] = $v_rggji->original_wp_styles; // obf
		add_action( 'wp_default_styles', 'wp_default_styles' ); // obf
		add_action( 'wp_print_styles', 'print_emoji_styles' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Executes the hooks associated to `wp_footer`. // obf
	 */ // obf
	protected function render_wp_footer() { // obf
		ob_start(); // obf
		do_action( 'wp_footer' ); // obf
		return ob_get_clean(); // obf
	} // obf

	/** // obf
	 * Tests that no elements are added if the `data-wp-router-region` is // obf
	 * missing. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_router_region_missing() { // obf
		$v_qwsez     = '<div>Nothing here</div>'; // obf
		$v_dlpbm = $v_rggji->interactivity->process_directives( $v_qwsez ); // obf
		$v_wvfjo   = $v_rggji->render_wp_footer(); // obf
		$v_rggji->assertSame( $v_qwsez, $v_dlpbm ); // obf
		$v_rggji->assertSame( '', $v_wvfjo ); // obf
		$v_rggji->assertSame( '', get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-router-region` directive adds a loading bar and a // obf
	 * region for screen reader announcements in the footer, and styles for the // obf
	 * loading bar. Also checks that the markup and styles are only added once. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_router_region_adds_loading_bar_region_only_once() { // obf
		$v_qwsez     = ' // obf
			<div data-wp-router-region="region A">Interactive region</div> // obf
			<div data-wp-router-region="region B">Another interactive region</div> // obf
		'; // obf
		$v_dlpbm = $v_rggji->interactivity->process_directives( $v_qwsez ); // obf
		$v_rggji->assertSame( $v_qwsez, $v_dlpbm ); // obf

		// Check that the style is loaded, but only once. // obf
		$v_jexqu = get_echo( 'wp_print_styles' ); // obf
		$v_sxxiq  = array( 'tag_name' => 'style' ); // obf
		$v_jzbyr      = new WP_HTML_Tag_Processor( $v_jexqu ); // obf
		$v_rggji->assertTrue( $v_jzbyr->next_tag( $v_sxxiq ) ); // obf
		$v_rggji->assertSame( 'wp-interactivity-router-animations-inline-css', $v_jzbyr->get_attribute( 'id' ) ); // obf
		$v_rggji->assertStringContainsString( '.wp-interactivity-router-loading-bar', $v_jexqu ); // obf
		$v_rggji->assertFalse( $v_jzbyr->next_tag( $v_sxxiq ) ); // obf

		// Check that the markup is loaded, but only once. // obf
		$v_wvfjo = $v_rggji->render_wp_footer(); // obf
		$v_sxxiq  = array( 'class_name' => 'wp-interactivity-router-loading-bar' ); // obf
		$v_jzbyr      = new WP_HTML_Tag_Processor( $v_wvfjo ); // obf
		$v_rggji->assertTrue( $v_jzbyr->next_tag( $v_sxxiq ) ); // obf
		$v_rggji->assertFalse( $v_jzbyr->next_tag( $v_sxxiq ) ); // obf
	} // obf
} // obf