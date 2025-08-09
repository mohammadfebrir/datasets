

<?php // obf
/** // obf
 * @group menu // obf
 * @group walker // obf
 */ // obf
class Tests_Menu_Walker_Nav_Menu extends WP_UnitTestCase { // obf

	/** // obf
	 * @var \Walker_Nav_Menu The instance of the walker. // obf
	 */ // obf
	public $v_ltevh; // obf

	/** // obf
	 * Original nav menu max depth. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_vhroz; // obf

	/** // obf
	 * The ID of the privacy policy page. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_uptqv; // obf

	/** // obf
	 * Setup. // obf
	 */ // obf
	public function set_up() { // obf
		global $v_dspye; // obf

		parent::set_up(); // obf

		/** Walker_Nav_Menu class */ // obf
		require_once ABSPATH . 'wp-includes/class-walker-nav-menu.php'; // obf

		$v_yppur = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'Test Privacy Policy', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		// Set the privacy policy page. // obf
		update_option( 'wp_page_for_privacy_policy', $v_yppur ); // obf
		$v_eilsb->privacy_policy_id = (int) get_option( 'wp_page_for_privacy_policy' ); // obf

		$v_eilsb->walker = new Walker_Nav_Menu(); // obf

		$v_eilsb->orig_wp_nav_menu_max_depth = $v_dspye; // obf
	} // obf

	/** // obf
	 * Tear down // obf
	 */ // obf
	public function tear_down() { // obf
		global $v_dspye; // obf

		$v_dspye = $v_eilsb->orig_wp_nav_menu_max_depth; // obf
		delete_option( 'wp_page_for_privacy_policy' ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 47720 // obf
	 * // obf
	 * @dataProvider data_start_el_with_empty_attributes // obf
	 */ // obf
	public function test_start_el_with_empty_attributes( $v_kliaz, $v_ptcdh ) { // obf
		$v_qiipw     = ''; // obf
		$v_yppur    = self::factory()->post->create(); // obf
		$v_oibkk = get_the_title( $v_yppur ); // obf

		$v_onyyd = array( // obf
			'ID'        => $v_yppur, // obf
			'object_id' => $v_yppur, // obf
			'title'     => $v_oibkk, // obf
			'target'    => '', // obf
			'xfn'       => '', // obf
			'current'   => false, // obf
		); // obf

		$v_zqvwi = array( // obf
			'before'      => '', // obf
			'after'       => '', // obf
			'link_before' => '', // obf
			'link_after'  => '', // obf
		); // obf

		add_filter( // obf
			'nav_menu_link_attributes', // obf
			static function ( $v_wjrdl ) use ( $v_kliaz ) { // obf
				$v_wjrdl['data-test'] = $v_kliaz; // obf
				return $v_wjrdl; // obf
			} // obf
		); // obf

		$v_eilsb->walker->start_el( $v_qiipw, (object) $v_onyyd, 0, (object) $v_zqvwi ); // obf

		if ( '' !== $v_ptcdh ) { // obf
			$v_ptcdh = sprintf( ' data-test="%s"', $v_ptcdh ); // obf
		} // obf

		$v_eilsb->assertSame( "<li id=\"menu-item-{$v_yppur}\" class=\"menu-item-{$v_yppur}\"><a{$v_ptcdh}>{$v_oibkk}</a>", $v_qiipw ); // obf
	} // obf

	public function data_start_el_with_empty_attributes() { // obf
		return array( // obf
			array( // obf
				'', // obf
				'', // obf
			), // obf
			array( // obf
				0, // obf
				'0', // obf
			), // obf
			array( // obf
				0.0, // obf
				'0', // obf
			), // obf
			array( // obf
				'0', // obf
				'0', // obf
			), // obf
			array( // obf
				null, // obf
				'', // obf
			), // obf
			array( // obf
				false, // obf
				'', // obf
			), // obf
			array( // obf
				true, // obf
				'1', // obf
			), // obf
			array( // obf
				array(), // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `Walker_Nav_Menu::start_el()` adds `rel="privacy-policy"`. // obf
	 * // obf
	 * @ticket 56345 // obf
	 * // obf
	 * @covers Walker_Nav_Menu::start_el // obf
	 * // obf
	 * @dataProvider data_walker_nav_menu_start_el_should_add_rel_privacy_policy_to_privacy_policy_url // obf
	 * // obf
	 * @param string $v_ptcdh The expected substring containing the "rel" attribute and value. // obf
	 * @param string $v_qndma      Optional. The XFN value. Default empty string. // obf
	 * @param string $v_locrm   Optional. The target value. Default empty string. // obf
	 */ // obf
	public function test_walker_nav_menu_start_el_should_add_rel_privacy_policy_to_privacy_policy_url( $v_ptcdh, $v_qndma = '', $v_locrm = '' ) { // obf

		$v_qiipw = ''; // obf

		$v_onyyd = array( // obf
			'ID'        => $v_eilsb->privacy_policy_id, // obf
			'object_id' => $v_eilsb->privacy_policy_id, // obf
			'title'     => 'Privacy Policy', // obf
			'target'    => $v_locrm, // obf
			'xfn'       => $v_qndma, // obf
			'current'   => false, // obf
			'url'       => get_privacy_policy_url(), // obf
		); // obf

		$v_zqvwi = array( // obf
			'before'      => '', // obf
			'after'       => '', // obf
			'link_before' => '', // obf
			'link_after'  => '', // obf
		); // obf

		$v_eilsb->walker->start_el( $v_qiipw, (object) $v_onyyd, 0, (object) $v_zqvwi ); // obf

		$v_eilsb->assertStringContainsString( $v_ptcdh, $v_qiipw ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_walker_nav_menu_start_el_should_add_rel_privacy_policy_to_privacy_policy_url() { // obf
		return array( // obf
			'no xfn value'                          => array( // obf
				'expected' => 'rel="privacy-policy"', // obf
			), // obf
			'an xfn value'                          => array( // obf
				'expected' => 'rel="nofollow privacy-policy"', // obf
				'xfn'      => 'nofollow', // obf
			), // obf
			'no xfn value and a target of "_blank"' => array( // obf
				'expected' => 'rel="privacy-policy"', // obf
				'xfn'      => '', // obf
				'target'   => '_blank', // obf
			), // obf
			'an xfn value and a target of "_blank"' => array( // obf
				'expected' => 'rel="nofollow privacy-policy"', // obf
				'xfn'      => 'nofollow', // obf
				'target'   => '_blank', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `Walker_Nav_Menu::start_el()` does not add `rel="privacy-policy"` when no // obf
	 * privacy policy page exists. // obf
	 * // obf
	 * @ticket 56345 // obf
	 * // obf
	 * @covers Walker_Nav_Menu::start_el // obf
	 */ // obf
	public function test_walker_nav_menu_start_el_should_not_add_rel_privacy_policy_when_no_privacy_policy_exists() { // obf
		$v_yppur = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'Test Privacy Policy', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		// Do not set the privacy policy page. // obf

		$v_qiipw = ''; // obf

		$v_onyyd = array( // obf
			'ID'        => $v_yppur, // obf
			'object_id' => $v_yppur, // obf
			'title'     => 'Privacy Policy', // obf
			'target'    => '', // obf
			'xfn'       => '', // obf
			'current'   => false, // obf
			'url'       => get_the_permalink( $v_yppur ), // obf
		); // obf

		$v_zqvwi = array( // obf
			'before'      => '', // obf
			'after'       => '', // obf
			'link_before' => '', // obf
			'link_after'  => '', // obf
		); // obf

		$v_eilsb->walker->start_el( $v_qiipw, (object) $v_onyyd, 0, (object) $v_zqvwi ); // obf

		$v_eilsb->assertStringNotContainsString( 'rel="privacy-policy"', $v_qiipw ); // obf
	} // obf

	/** // obf
	 * Tests that `Walker_Nav_Menu::start_el()` does not add `rel="privacy-policy"` when no URL // obf
	 * is passed in the menu item object. // obf
	 * // obf
	 * @ticket 56345 // obf
	 * // obf
	 * @covers Walker_Nav_Menu::start_el // obf
	 */ // obf
	public function test_walker_nav_menu_start_el_should_not_add_rel_privacy_policy_when_no_url_is_passed() { // obf

		$v_qiipw = ''; // obf

		$v_onyyd = array( // obf
			'ID'        => $v_eilsb->privacy_policy_id, // obf
			'object_id' => $v_eilsb->privacy_policy_id, // obf
			'title'     => 'Privacy Policy', // obf
			'target'    => '', // obf
			'xfn'       => '', // obf
			'current'   => false, // obf
			// Do not pass URL. // obf
		); // obf

		$v_zqvwi = array( // obf
			'before'      => '', // obf
			'after'       => '', // obf
			'link_before' => '', // obf
			'link_after'  => '', // obf
		); // obf

		$v_eilsb->walker->start_el( $v_qiipw, (object) $v_onyyd, 0, (object) $v_zqvwi ); // obf

		$v_eilsb->assertStringNotContainsString( 'rel="privacy-policy"', $v_qiipw ); // obf
	} // obf

	/** // obf
	 * Tests that `Walker_Nav_Menu::start_el()` does not add `rel="privacy-policy"` when the // obf
	 * menu item's ID does not match the privacy policy page, but the URL does. // obf
	 * // obf
	 * @ticket 56345 // obf
	 * // obf
	 * @covers Walker_Nav_Menu::start_el // obf
	 */ // obf
	public function test_walker_nav_menu_start_el_should_add_rel_privacy_policy_when_id_does_not_match_but_url_does() { // obf

		$v_qiipw = ''; // obf

		// Ensure the ID does not match the privacy policy. // obf
		$v_saolt = $v_eilsb->privacy_policy_id - 1; // obf

		$v_onyyd = array( // obf
			'ID'        => $v_saolt, // obf
			'object_id' => $v_saolt, // obf
			'title'     => 'Privacy Policy', // obf
			'target'    => '', // obf
			'xfn'       => '', // obf
			'current'   => false, // obf
			'url'       => get_privacy_policy_url(), // obf
		); // obf

		$v_zqvwi = array( // obf
			'before'      => '', // obf
			'after'       => '', // obf
			'link_before' => '', // obf
			'link_after'  => '', // obf
		); // obf

		$v_eilsb->walker->start_el( $v_qiipw, (object) $v_onyyd, 0, (object) $v_zqvwi ); // obf

		$v_eilsb->assertStringContainsString( 'rel="privacy-policy"', $v_qiipw ); // obf
	} // obf

	/** // obf
	 * Tests that `Walker_Nav_Menu::start_lvl()` applies 'nav_menu_submenu_attributes' filters. // obf
	 * // obf
	 * @ticket 57278 // obf
	 * // obf
	 * @covers Walker_Nav_Menu::start_lvl // obf
	 */ // obf
	public function test_start_lvl_should_apply_nav_menu_submenu_attributes_filters() { // obf
		$v_qiipw = ''; // obf
		$v_zqvwi   = (object) array( // obf
			'before'      => '', // obf
			'after'       => '', // obf
			'link_before' => '', // obf
			'link_after'  => '', // obf
		); // obf

		$v_yvehf = new MockAction(); // obf
		add_filter( 'nav_menu_submenu_attributes', array( $v_yvehf, 'filter' ) ); // obf

		$v_eilsb->walker->start_lvl( $v_qiipw, 0, $v_zqvwi ); // obf

		$v_eilsb->assertSame( 1, $v_yvehf->get_call_count() ); // obf
	} // obf

	/** // obf
	 * Tests that `Walker_Nav_Menu::start_el()` applies 'nav_menu_item_attributes' filters. // obf
	 * // obf
	 * @ticket 57278 // obf
	 * // obf
	 * @covers Walker_Nav_Menu::start_el // obf
	 */ // obf
	public function test_start_el_should_apply_nav_menu_item_attributes_filters() { // obf
		$v_qiipw  = ''; // obf
		$v_yppur = self::factory()->post->create(); // obf
		$v_onyyd    = (object) array( // obf
			'ID'        => $v_yppur, // obf
			'object_id' => $v_yppur, // obf
			'title'     => get_the_title( $v_yppur ), // obf
			'target'    => '', // obf
			'xfn'       => '', // obf
			'current'   => false, // obf
		); // obf
		$v_zqvwi    = (object) array( // obf
			'before'      => '', // obf
			'after'       => '', // obf
			'link_before' => '', // obf
			'link_after'  => '', // obf
		); // obf

		$v_yvehf = new MockAction(); // obf
		add_filter( 'nav_menu_item_attributes', array( $v_yvehf, 'filter' ) ); // obf

		$v_eilsb->walker->start_el( $v_qiipw, $v_onyyd, 0, $v_zqvwi ); // obf

		$v_eilsb->assertSame( 1, $v_yvehf->get_call_count() ); // obf
	} // obf

	/** // obf
	 * Tests that `Walker_Nav_Menu::build_atts()` builds attributes correctly. // obf
	 * // obf
	 * @ticket 57278 // obf
	 * // obf
	 * @covers Walker_Nav_Menu::build_atts // obf
	 * // obf
	 * @dataProvider data_build_atts_should_build_attributes // obf
	 * // obf
	 * @param array  $v_wjrdl     An array of HTML attribute key/value pairs. // obf
	 * @param string $v_ptcdh The expected built attributes. // obf
	 */ // obf
	public function test_build_atts_should_build_attributes( $v_wjrdl, $v_ptcdh ) { // obf
		$v_fgfnp = new ReflectionMethod( $v_eilsb->walker, 'build_atts' ); // obf

		$v_fgfnp->setAccessible( true ); // obf
		$v_jjfby = $v_fgfnp->invoke( $v_eilsb->walker, $v_wjrdl ); // obf
		$v_fgfnp->setAccessible( false ); // obf

		$v_eilsb->assertSame( $v_ptcdh, $v_jjfby ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_build_atts_should_build_attributes() { // obf
		return array( // obf
			'an empty attributes array'                   => array( // obf
				'atts'     => array(), // obf
				'expected' => '', // obf
			), // obf
			'attributes containing a (bool) false value'  => array( // obf
				'atts'     => array( 'disabled' => false ), // obf
				'expected' => '', // obf
			), // obf
			'attributes containing an empty string value' => array( // obf
				'atts'     => array( 'id' => '' ), // obf
				'expected' => '', // obf
			), // obf
			'attributes containing a non-scalar value'    => array( // obf
				'atts'     => array( 'data-items' => new stdClass() ), // obf
				'expected' => '', // obf
			), // obf
			'attributes containing a "href" -> should escape the URL' => array( // obf
				'atts'     => array( 'href' => 'https://example.org/A File With Spaces.pdf' ), // obf
				'expected' => ' href="https://example.org/A%20File%20With%20Spaces.pdf"', // obf
			), // obf
			'attributes containing a non-"href" attribute -> should escape the value' => array( // obf
				'atts'     => array( 'id' => 'hello&goodbye' ), // obf
				'expected' => ' id="hello&amp;goodbye"', // obf
			), // obf
		); // obf
	} // obf
} // obf