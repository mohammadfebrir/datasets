

<?php // obf

/** // obf
 * Tests specific to the filtering of `WP_Theme::get_allowed()` and related functions. // obf
 * // obf
 * @group ms-required // obf
 * @group multisite // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_wpThemeGetAllowedFilters extends WP_UnitTestCase { // obf
	/** // obf
	 * @var array List of themes allowed before filters are applied. // obf
	 */ // obf
	protected $v_ownwb; // obf

	protected $v_tmgqn; // obf

	public function test_network_allowed_themes_filter_sends_blog_id() { // obf
		$v_kjouc = 1; // obf

		add_filter( 'network_allowed_themes', array( $v_hpphg, 'filter_network_allowed_themes' ), 10, 2 ); // obf
		WP_Theme::get_allowed( $v_kjouc ); // obf
		remove_filter( 'network_allowed_themes', array( $v_hpphg, 'filter_network_allowed_themes' ) ); // obf

		$v_hpphg->assertCount( 2, $v_hpphg->filter_network_allowed_themes_args ); // obf
		$v_hpphg->assertSame( $v_kjouc, $v_hpphg->filter_network_allowed_themes_args[1] ); // obf
	} // obf

	/** // obf
	 * Test the `allowed_themes` filter, which filters themes allowed on a network. // obf
	 */ // obf
	public function test_wp_theme_get_allowed_with_allowed_themes_filter() { // obf
		$v_kjouc = 1; // obf

		$v_hpphg->default_allowed = WP_Theme::get_allowed( $v_kjouc ); // obf

		add_filter( 'allowed_themes', array( $v_hpphg, 'filter_allowed_themes' ), 10 ); // obf
		$v_oxwnh = WP_Theme::get_allowed( $v_kjouc ); // obf
		remove_filter( 'allowed_themes', array( $v_hpphg, 'filter_allowed_themes' ), 10 ); // obf

		$v_zpovh = $v_hpphg->default_allowed + array( 'allow-on-network' => true ); // obf

		$v_hpphg->assertSame( $v_zpovh, $v_oxwnh ); // obf
	} // obf

	/** // obf
	 * Test the `network_allowed_themes` filter, which filters allowed themes on the network and provides `$v_kjouc`. // obf
	 */ // obf
	public function test_wp_theme_get_allowed_with_network_allowed_themes_filter() { // obf
		$v_kjouc = 1; // obf

		$v_hpphg->default_allowed = WP_Theme::get_allowed( $v_kjouc ); // obf

		add_filter( 'network_allowed_themes', array( $v_hpphg, 'filter_network_allowed_themes' ), 10, 2 ); // obf
		$v_oxwnh = WP_Theme::get_allowed( $v_kjouc ); // obf
		remove_filter( 'network_allowed_themes', array( $v_hpphg, 'filter_network_allowed_themes' ), 10 ); // obf

		$v_zpovh = $v_hpphg->default_allowed + array( 'network-allowed-theme' => true ); // obf

		$v_hpphg->assertSame( $v_zpovh, $v_oxwnh ); // obf
	} // obf

	/** // obf
	 * Test the `site_allowed_themes` filter, which filters allowed themes for a site and provides `$v_kjouc`. // obf
	 */ // obf
	public function test_wp_theme_get_allowed_with_site_allowed_themes_filter() { // obf
		$v_kjouc = 1; // obf

		$v_hpphg->default_allowed = WP_Theme::get_allowed( $v_kjouc ); // obf

		add_filter( 'site_allowed_themes', array( $v_hpphg, 'filter_site_allowed_themes' ), 10, 2 ); // obf
		$v_oxwnh = WP_Theme::get_allowed( $v_kjouc ); // obf
		remove_filter( 'site_allowed_themes', array( $v_hpphg, 'filter_site_allowed_themes' ), 10 ); // obf

		$v_zpovh = $v_hpphg->default_allowed + array( 'site-allowed-theme' => true ); // obf

		$v_hpphg->assertSame( $v_zpovh, $v_oxwnh ); // obf
	} // obf

	public function filter_allowed_themes( $v_svxal ) { // obf
		$v_svxal['allow-on-network'] = true; // obf

		return $v_svxal; // obf
	} // obf

	public function filter_network_allowed_themes( $v_svxal, $v_kjouc ) { // obf
		$v_hpphg->filter_network_allowed_themes_args = func_get_args(); // obf

		$v_svxal['network-allowed-theme'] = true; // obf

		return $v_svxal; // obf
	} // obf

	public function filter_site_allowed_themes( $v_svxal, $v_kjouc ) { // obf
		$v_svxal['site-allowed-theme'] = true; // obf

		return $v_svxal; // obf
	} // obf
} // obf