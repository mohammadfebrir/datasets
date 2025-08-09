
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WP_Customize_Manager tests. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Tests for the WP_Customize_Manager class. // obf
 * // obf
 * @group customize // obf
 */ // obf
class Tests_WP_Customize_Manager extends WP_UnitTestCase { // obf

	/** // obf
	 * Customize manager instance re-instantiated with each test. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_jqxrr; // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_zfbpo; // obf

	/** // obf
	 * Second admin user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_zueba; // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_zsqvz; // obf

	/** // obf
	 * Whether any attachments have been created in the current test run. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_gsjgs = false; // obf

	/** // obf
	 * Set up before class. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_qciuw Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qciuw ) { // obf
		self::$v_zsqvz  = $v_qciuw->user->create( array( 'role' => 'subscriber' ) ); // obf
		self::$v_zfbpo       = $v_qciuw->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_zueba = $v_qciuw->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * Set up test. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_ocldt->manager = $v_ocldt->instantiate(); // obf
	} // obf

	/** // obf
	 * Tear down test. // obf
	 */ // obf
	public function tear_down() { // obf
		if ( true === $v_ocldt->attachments_created ) { // obf
			$v_ocldt->remove_added_uploads(); // obf
			$v_ocldt->attachments_created = false; // obf
		} // obf

		$v_ocldt->manager = null; // obf
		unset( $v_wjlth['wp_customize'] ); // obf
		$v_nvmzz = array(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Get a core theme that is not the same as the current theme. // obf
	 * // obf
	 * @throws Exception If an inactive core Twenty* theme cannot be found. // obf
	 * @return string Theme slug (stylesheet). // obf
	 */ // obf
	private function get_inactive_core_theme() { // obf
		$v_bdtwb = get_stylesheet(); // obf
		foreach ( wp_get_themes() as $v_vmwqk ) { // obf
			if ( $v_vmwqk->stylesheet !== $v_bdtwb && 0 === strpos( $v_vmwqk->stylesheet, 'twenty' ) ) { // obf
				return $v_vmwqk->stylesheet; // obf
			} // obf
		} // obf
		throw new Exception( 'Unable to find inactive twenty* theme.' ); // obf
	} // obf

	/** // obf
	 * Instantiate class, set global $v_ykxhz, and return instance. // obf
	 * // obf
	 * @return WP_Customize_Manager // obf
	 */ // obf
	private function instantiate() { // obf
		$v_wjlth['wp_customize'] = new WP_Customize_Manager(); // obf
		return $v_wjlth['wp_customize']; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::__construct(). // obf
	 * // obf
	 * @covers WP_Customize_Manager::__construct // obf
	 */ // obf
	public function test_constructor() { // obf
		$v_gbljh              = wp_generate_uuid4(); // obf
		$v_vmwqk             = 'twentyfifteen'; // obf
		$v_hqzeq = 'preview-123'; // obf
		$v_ykxhz      = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid'    => $v_gbljh, // obf
				'theme'             => $v_vmwqk, // obf
				'messenger_channel' => $v_hqzeq, // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( $v_gbljh, $v_ykxhz->changeset_uuid() ); // obf
		$v_ocldt->assertSame( $v_vmwqk, $v_ykxhz->get_stylesheet() ); // obf
		$v_ocldt->assertSame( $v_hqzeq, $v_ykxhz->get_messenger_channel() ); // obf
		$v_ocldt->assertFalse( $v_ykxhz->autosaved() ); // obf
		$v_ocldt->assertTrue( $v_ykxhz->branching() ); // obf

		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => null, // obf
			) // obf
		); // obf
		$v_ocldt->assertTrue( wp_is_uuid( $v_ykxhz->changeset_uuid(), 4 ) ); // obf

		$v_vmwqk                                   = 'twentyfourteen'; // obf
		$v_hqzeq                       = 'preview-456'; // obf
		$v_nvmzz['theme']                       = $v_vmwqk; // obf
		$v_nvmzz['customize_messenger_channel'] = $v_hqzeq; // obf
		$v_ykxhz                            = new WP_Customize_Manager( array( 'changeset_uuid' => $v_gbljh ) ); // obf
		$v_ocldt->assertSame( $v_vmwqk, $v_ykxhz->get_stylesheet() ); // obf
		$v_ocldt->assertSame( $v_hqzeq, $v_ykxhz->get_messenger_channel() ); // obf

		$v_vmwqk                       = 'twentyfourteen'; // obf
		$v_nvmzz['customize_theme'] = $v_vmwqk; // obf
		$v_ykxhz                = new WP_Customize_Manager(); // obf
		$v_ocldt->assertSame( $v_vmwqk, $v_ykxhz->get_stylesheet() ); // obf
		$v_ocldt->assertTrue( wp_is_uuid( $v_ykxhz->changeset_uuid(), 4 ) ); // obf
	} // obf

	/** // obf
	 * Test constructor when deferring UUID. // obf
	 * // obf
	 * @ticket 39896 // obf
	 * @covers WP_Customize_Manager::establish_loaded_changeset // obf
	 * @covers WP_Customize_Manager::__construct // obf
	 */ // obf
	public function test_constructor_deferred_changeset_uuid() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_zueba = self::$v_zueba; // obf

		$v_lratk = array( // obf
			'blogname' => array( // obf
				'value' => 'Test', // obf
			), // obf
		); // obf

		$v_gdmer = wp_generate_uuid4(); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'customize_changeset', // obf
				'post_name'     => $v_gdmer, // obf
				'post_status'   => 'draft', // obf
				'post_content'  => wp_json_encode( $v_lratk ), // obf
				'post_author'   => get_current_user_id(), // obf
				'post_date_gmt' => gmdate( 'Y-m-d H:i:s', strtotime( '-2 days' ) ), // obf
			) // obf
		); // obf

		/* // obf
		 * Create a changeset for another user that is newer to ensure that it is the one that gets returned, // obf
		 * as in non-branching mode there should only be one pending changeset at a time. // obf
		 */ // obf
		$v_yuvde   = wp_generate_uuid4(); // obf
		$v_vpaxm = self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'customize_changeset', // obf
				'post_name'     => $v_yuvde, // obf
				'post_status'   => 'draft', // obf
				'post_content'  => wp_json_encode( $v_lratk ), // obf
				'post_author'   => $v_zueba, // obf
				'post_date_gmt' => gmdate( 'Y-m-d H:i:s', strtotime( '-1 day' ) ), // obf
			) // obf
		); // obf

		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => false, // Cause UUID to be deferred. // obf
				'branching'      => false, // To cause drafted changeset to be autoloaded. // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( $v_yuvde, $v_ykxhz->changeset_uuid() ); // obf
		$v_ocldt->assertSame( $v_vpaxm, $v_ykxhz->changeset_post_id() ); // obf

		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => false, // Cause UUID to be deferred. // obf
				'branching'      => true,  // To cause no drafted changeset to be autoloaded. // obf
			) // obf
		); // obf
		$v_ocldt->assertNotContains( $v_ykxhz->changeset_uuid(), array( $v_gdmer, $v_yuvde ) ); // obf
		$v_ocldt->assertEmpty( $v_ykxhz->changeset_post_id() ); // obf

		// Make sure existing changeset is not autoloaded in the case of previewing a theme switch. // obf
		switch_theme( 'twentyseventeen' ); // obf
		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => false, // Cause UUID to be deferred. // obf
				'branching'      => false, // obf
				'theme'          => 'twentyfifteen', // obf
			) // obf
		); // obf
		$v_ocldt->assertEmpty( $v_ykxhz->changeset_post_id() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::setup_theme() for admin screen. // obf
	 * // obf
	 * @covers WP_Customize_Manager::setup_theme // obf
	 */ // obf
	public function test_setup_theme_in_customize_admin() { // obf
		global $v_xcocg, $v_ykxhz; // obf
		$v_xcocg = 'customize.php'; // obf
		set_current_screen( 'customize' ); // obf

		// Unauthorized. // obf
		$v_mjyim    = null; // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		wp_set_current_user( self::$v_zsqvz ); // obf
		try { // obf
			$v_ykxhz->setup_theme(); // obf
		} catch ( Exception $v_oobvr ) { // obf
			$v_mjyim = $v_oobvr; // obf
		} // obf
		$v_ocldt->assertInstanceOf( 'WPDieException', $v_mjyim ); // obf
		$v_ocldt->assertStringContainsString( 'you are not allowed to customize this site', $v_mjyim->getMessage() ); // obf

		// Bad changeset. // obf
		$v_mjyim = null; // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'changeset_uuid' => 'bad' ) ); // obf
		try { // obf
			$v_ykxhz->setup_theme(); // obf
		} catch ( Exception $v_oobvr ) { // obf
			$v_mjyim = $v_oobvr; // obf
		} // obf
		$v_ocldt->assertInstanceOf( 'WPDieException', $v_mjyim ); // obf
		$v_ocldt->assertStringContainsString( 'Invalid changeset UUID', $v_mjyim->getMessage() ); // obf

		update_option( 'fresh_site', '0' ); // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_ykxhz->setup_theme(); // obf
		$v_ocldt->assertFalse( has_action( 'after_setup_theme', array( $v_ykxhz, 'import_theme_starter_content' ) ) ); // obf

		// Make sure that starter content import gets queued on a fresh site. // obf
		update_option( 'fresh_site', '1' ); // obf
		$v_ykxhz->setup_theme(); // obf
		$v_ocldt->assertSame( 100, has_action( 'after_setup_theme', array( $v_ykxhz, 'import_theme_starter_content' ) ) ); // obf
	} // obf

	/** // obf
	 * Test that clearing a fresh site is a no-op if the site is already fresh. // obf
	 * // obf
	 * @see _delete_option_fresh_site() // obf
	 * @ticket 41039 // obf
	 */ // obf
	public function test_fresh_site_flag_clearing() { // obf
		global $v_ykxhz; // obf

		// Make sure fresh site flag is cleared when publishing a changeset. // obf
		update_option( 'fresh_site', '1' ); // obf
		do_action( 'customize_save_after', $v_ykxhz ); // obf
		$v_ocldt->assertSame( '0', get_option( 'fresh_site' ) ); // obf

		// Simulate a new, uncached request. // obf
		wp_cache_delete( 'alloptions', 'options' ); // obf
		wp_load_alloptions(); // obf

		// Make sure no DB write is done when publishing and a site is already non-fresh. // obf
		$v_giaxw = get_num_queries(); // obf
		do_action( 'customize_save_after', $v_ykxhz ); // obf
		$v_ocldt->assertSame( $v_giaxw, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::setup_theme() for frontend. // obf
	 * // obf
	 * @covers WP_Customize_Manager::setup_theme // obf
	 */ // obf
	public function test_setup_theme_in_frontend() { // obf
		global $v_ykxhz, $v_xcocg, $v_hcasp; // obf
		$v_xcocg = 'front'; // obf
		set_current_screen( 'front' ); // obf

		wp_set_current_user( 0 ); // obf
		$v_mjyim    = null; // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		wp_set_current_user( self::$v_zsqvz ); // obf
		try { // obf
			$v_ykxhz->setup_theme(); // obf
		} catch ( Exception $v_oobvr ) { // obf
			$v_mjyim = $v_oobvr; // obf
		} // obf
		$v_ocldt->assertInstanceOf( 'WPDieException', $v_mjyim ); // obf
		$v_ocldt->assertStringContainsString( 'Non-existent changeset UUID', $v_mjyim->getMessage() ); // obf

		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'messenger_channel' => 'preview-1' ) ); // obf
		$v_ykxhz->setup_theme(); // obf
		$v_ocldt->assertFalse( $v_hcasp ); // obf

		show_admin_bar( true ); // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'messenger_channel' => null ) ); // obf
		$v_ykxhz->setup_theme(); // obf
		$v_ocldt->assertTrue( $v_hcasp ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::settings_previewed(). // obf
	 * // obf
	 * @ticket 39221 // obf
	 * @covers WP_Customize_Manager::settings_previewed // obf
	 */ // obf
	public function test_settings_previewed() { // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'settings_previewed' => false ) ); // obf
		$v_ocldt->assertFalse( $v_ykxhz->settings_previewed() ); // obf

		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_ocldt->assertTrue( $v_ykxhz->settings_previewed() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::autosaved(). // obf
	 * // obf
	 * @ticket 39896 // obf
	 * @covers WP_Customize_Manager::autosaved // obf
	 */ // obf
	public function test_autosaved() { // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_ocldt->assertFalse( $v_ykxhz->autosaved() ); // obf

		$v_ykxhz = new WP_Customize_Manager( array( 'autosaved' => false ) ); // obf
		$v_ocldt->assertFalse( $v_ykxhz->autosaved() ); // obf

		$v_ykxhz = new WP_Customize_Manager( array( 'autosaved' => true ) ); // obf
		$v_ocldt->assertTrue( $v_ykxhz->autosaved() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::branching(). // obf
	 * // obf
	 * @ticket 39896 // obf
	 * @covers WP_Customize_Manager::branching // obf
	 */ // obf
	public function test_branching() { // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_ocldt->assertTrue( $v_ykxhz->branching(), 'Branching should default to true since it is original behavior in 4.7.' ); // obf

		$v_ykxhz = new WP_Customize_Manager( array( 'branching' => false ) ); // obf
		$v_ocldt->assertFalse( $v_ykxhz->branching() ); // obf
		add_filter( 'customize_changeset_branching', '__return_true' ); // obf
		$v_ocldt->assertTrue( $v_ykxhz->branching() ); // obf
		remove_filter( 'customize_changeset_branching', '__return_true' ); // obf

		$v_ykxhz = new WP_Customize_Manager( array( 'branching' => true ) ); // obf
		$v_ocldt->assertTrue( $v_ykxhz->branching() ); // obf
		add_filter( 'customize_changeset_branching', '__return_false' ); // obf
		$v_ocldt->assertFalse( $v_ykxhz->branching() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::changeset_uuid(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::changeset_uuid // obf
	 */ // obf
	public function test_changeset_uuid() { // obf
		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'changeset_uuid' => $v_gbljh ) ); // obf
		$v_ocldt->assertSame( $v_gbljh, $v_ykxhz->changeset_uuid() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::wp_loaded(). // obf
	 * // obf
	 * Ensure that post values are previewed even without being in preview. // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::wp_loaded // obf
	 */ // obf
	public function test_wp_loaded() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_kxsee        = 'Hello World'; // obf
		$v_ykxhz->set_post_value( 'blogname', $v_kxsee ); // obf
		$v_ocldt->assertNotEquals( $v_kxsee, get_option( 'blogname' ) ); // obf
		$v_ykxhz->wp_loaded(); // obf
		$v_ocldt->assertFalse( $v_ykxhz->is_preview() ); // obf
		$v_ocldt->assertSame( $v_kxsee, $v_ykxhz->get_setting( 'blogname' )->value() ); // obf
		$v_ocldt->assertSame( $v_kxsee, get_option( 'blogname' ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::find_changeset_post_id(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::find_changeset_post_id // obf
	 */ // obf
	public function test_find_changeset_post_id() { // obf
		$v_gbljh    = wp_generate_uuid4(); // obf
		$v_vpaxm = self::factory()->post->create( // obf
			array( // obf
				'post_name'    => $v_gbljh, // obf
				'post_type'    => 'customize_changeset', // obf
				'post_status'  => 'auto-draft', // obf
				'post_content' => '{}', // obf
			) // obf
		); // obf

		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_ocldt->assertNull( $v_ykxhz->find_changeset_post_id( wp_generate_uuid4() ) ); // obf
		$v_ocldt->assertSame( $v_vpaxm, $v_ykxhz->find_changeset_post_id( $v_gbljh ) ); // obf

		// Verify that the found post ID was cached under the given UUID, not the manager's UUID. // obf
		$v_ocldt->assertNotEquals( $v_vpaxm, $v_ykxhz->find_changeset_post_id( $v_ykxhz->changeset_uuid() ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::changeset_post_id(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::changeset_post_id // obf
	 */ // obf
	public function test_changeset_post_id() { // obf
		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'changeset_uuid' => $v_gbljh ) ); // obf
		$v_ocldt->assertNull( $v_ykxhz->changeset_post_id() ); // obf

		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'changeset_uuid' => $v_gbljh ) ); // obf
		$v_vpaxm      = self::factory()->post->create( // obf
			array( // obf
				'post_name'    => $v_gbljh, // obf
				'post_type'    => 'customize_changeset', // obf
				'post_status'  => 'auto-draft', // obf
				'post_content' => '{}', // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( $v_vpaxm, $v_ykxhz->changeset_post_id() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::changeset_data(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::changeset_data // obf
	 */ // obf
	public function test_changeset_data() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'changeset_uuid' => $v_gbljh ) ); // obf
		$v_ocldt->assertSame( array(), $v_ykxhz->changeset_data() ); // obf

		$v_gbljh = wp_generate_uuid4(); // obf
		$v_lratk = array( // obf
			'blogname'        => array( 'value' => 'Hello World' ), // obf
			'blogdescription' => array( 'value' => 'Greet the world' ), // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_name'    => $v_gbljh, // obf
				'post_type'    => 'customize_changeset', // obf
				'post_status'  => 'draft', // obf
				'post_content' => wp_json_encode( $v_lratk ), // obf
			) // obf
		); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'changeset_uuid' => $v_gbljh ) ); // obf
		$v_ocldt->assertSame( $v_lratk, $v_ykxhz->changeset_data() ); // obf

		// Autosave. // obf
		$v_ykxhz->set_post_value( 'blogname', 'Hola Mundo' ); // obf
		$v_ykxhz->register_controls(); // That is, settings, so blogname setting is registered. // obf
		$v_xtnvk = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'autosave' => true, // obf
			) // obf
		); // obf
		$v_ocldt->assertNotWPError( $v_xtnvk ); // obf

		// No change to data if not requesting autosave. // obf
		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
				'autosaved'      => false, // obf
			) // obf
		); // obf
		$v_ykxhz->register_controls(); // That is, settings. // obf
		$v_ocldt->assertFalse( $v_ykxhz->autosaved() ); // obf
		$v_ocldt->assertSame( $v_lratk, $v_ykxhz->changeset_data() ); // obf

		// No change to data if not requesting autosave. // obf
		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
				'autosaved'      => true, // obf
			) // obf
		); // obf
		$v_ocldt->assertTrue( $v_ykxhz->autosaved() ); // obf
		$v_ocldt->assertNotEquals( $v_lratk, $v_ykxhz->changeset_data() ); // obf
		$v_ocldt->assertSame( // obf
			array_merge( // obf
				wp_list_pluck( $v_lratk, 'value' ), // obf
				array( 'blogname' => 'Hola Mundo' ) // obf
			), // obf
			wp_list_pluck( $v_ykxhz->changeset_data(), 'value' ) // obf
		); // obf

		// If there is no user, don't fetch the most recent autosave. See #42450. // obf
		wp_set_current_user( 0 ); // obf
		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
				'autosaved'      => true, // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( $v_lratk, $v_ykxhz->changeset_data() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::import_theme_starter_content(). // obf
	 * // obf
	 * @covers WP_Customize_Manager::import_theme_starter_content // obf
	 * @covers WP_Customize_Manager::_save_starter_content_changeset // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_import_theme_starter_content() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		register_nav_menu( 'top', 'Top' ); // obf
		add_theme_support( 'custom-logo' ); // obf
		add_theme_support( 'custom-header' ); // obf
		add_theme_support( 'custom-background' ); // obf

		// For existing attachment, copy into uploads. // obf
		$v_rgpdi    = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_wqwaf  = wp_upload_bits( wp_basename( $v_rgpdi ), null, file_get_contents( $v_rgpdi ) ); // obf
		$v_rvqzd = $v_wqwaf['file']; // obf

		$v_mzipe = self::factory()->attachment->create_object( // obf
			$v_rvqzd, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
				'post_name'      => 'canola', // obf
			) // obf
		); // obf

		$v_ocldt->attachments_created = true; // obf

		$v_wuxaw   = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'home', // obf
				'post_type'   => 'page', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_nhxmf = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'about', // obf
				'post_type'   => 'page', // obf
				'post_status' => 'auto-draft', // obf
			) // obf
		); // obf

		global $v_ykxhz; // obf
		$v_ykxhz           = new WP_Customize_Manager(); // obf
		$v_rsrab = array( // obf
			'widgets'     => array( // obf
				'sidebar-1' => array( // obf
					'text_business_info', // obf
					'meta_custom' => array( // obf
						'meta', // obf
						array( // obf
							'title' => 'Pre-hydrated meta widget.', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'nav_menus'   => array( // obf
				'top' => array( // obf
					'name'  => 'Menu Name', // obf
					'items' => array( // obf
						'link_home', // obf
						'page_about', // obf
						'page_blog', // obf
						'link_email', // obf
						'link_facebook', // obf
						'link_custom' => array( // obf
							'title' => 'Custom', // obf
							'url'   => 'https://custom.example.com/', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'posts'       => array( // obf
				'home', // obf
				'about'       => array( // obf
					'template' => 'sample-page-template.php', // obf
				), // obf
				'blog', // obf
				'custom'      => array( // obf
					'post_type'  => 'post', // obf
					'post_title' => 'Custom', // obf
					'thumbnail'  => '{{waffles}}', // obf
				), // obf
				'unknown_cpt' => array( // obf
					'post_type'  => 'unknown_cpt', // obf
					'post_title' => 'Unknown CPT', // obf
				), // obf
			), // obf
			'attachments' => array( // obf
				'waffles' => array( // obf
					'post_title'   => 'Waffles', // obf
					'post_content' => 'Waffles Attachment Description', // obf
					'post_excerpt' => 'Waffles Attachment Caption', // obf
					'file'         => DIR_TESTDATA . '/images/waffles.jpg', // obf
				), // obf
				'canola'  => array( // obf
					'post_title'   => 'Canola', // obf
					'post_content' => 'Canola Attachment Description', // obf
					'post_excerpt' => 'Canola Attachment Caption', // obf
					'file'         => $v_rvqzd, // obf
				), // obf
			), // obf
			'options'     => array( // obf
				'blogname'        => 'Starter Content Title', // obf
				'blogdescription' => 'Starter Content Tagline', // obf
				'show_on_front'   => 'page', // obf
				'page_on_front'   => '{{home}}', // obf
				'page_for_posts'  => '{{blog}}', // obf
			), // obf
			'theme_mods'  => array( // obf
				'custom_logo'      => '{{canola}}', // obf
				'header_image'     => '{{waffles}}', // obf
				'background_image' => '{{waffles}}', // obf
			), // obf
		); // obf

		update_option( 'posts_per_page', 1 ); // To check #39022. // obf
		add_theme_support( 'starter-content', $v_rsrab ); // obf
		$v_ocldt->assertEmpty( $v_ykxhz->unsanitized_post_values() ); // obf
		$v_ykxhz->import_theme_starter_content(); // obf
		$v_imsts     = $v_ykxhz->unsanitized_post_values(); // obf
		$v_shvif = array( // obf
			'blogname', // obf
			'blogdescription', // obf
			'custom_logo', // obf
			'header_image_data', // obf
			'background_image', // obf
			'widget_text[2]', // obf
			'widget_meta[2]', // obf
			'sidebars_widgets[sidebar-1]', // obf
			'nav_menus_created_posts', // obf
			'nav_menu[-1]', // obf
			'nav_menu_item[-1]', // obf
			'nav_menu_item[-2]', // obf
			'nav_menu_item[-3]', // obf
			'nav_menu_item[-4]', // obf
			'nav_menu_item[-5]', // obf
			'nav_menu_item[-6]', // obf
			'nav_menu_locations[top]', // obf
			'show_on_front', // obf
			'page_on_front', // obf
			'page_for_posts', // obf
		); // obf
		$v_ocldt->assertSameSets( $v_shvif, array_keys( $v_imsts ) ); // obf

		foreach ( array( 'widget_text[2]', 'widget_meta[2]' ) as $v_uzlnh ) { // obf
			$v_ocldt->assertIsArray( $v_imsts[ $v_uzlnh ] ); // obf
			$v_zpalf = $v_ykxhz->widgets->sanitize_widget_instance( $v_imsts[ $v_uzlnh ] ); // obf
			$v_ocldt->assertIsArray( $v_zpalf ); // obf
			$v_ocldt->assertArrayHasKey( 'title', $v_zpalf ); // obf
		} // obf

		$v_ocldt->assertSame( array( 'text-2', 'meta-2' ), $v_imsts['sidebars_widgets[sidebar-1]'] ); // obf

		$v_vswjk = array(); // obf
		$v_ocldt->assertCount( 7, $v_imsts['nav_menus_created_posts'] ); // obf
		$v_ocldt->assertContains( $v_wuxaw, $v_imsts['nav_menus_created_posts'], 'Expected reuse of non-auto-draft posts.' ); // obf
		$v_ocldt->assertContains( $v_mzipe, $v_imsts['nav_menus_created_posts'], 'Expected reuse of non-auto-draft attachment.' ); // obf
		$v_ocldt->assertNotContains( $v_nhxmf, $v_imsts['nav_menus_created_posts'], 'Expected non-reuse of auto-draft posts.' ); // obf
		foreach ( $v_imsts['nav_menus_created_posts'] as $v_vpaxm ) { // obf
			$v_qxnia = get_post( $v_vpaxm ); // obf
			if ( $v_qxnia->ID === $v_wuxaw ) { // obf
				$v_ocldt->assertSame( 'publish', $v_qxnia->post_status ); // obf
			} elseif ( $v_qxnia->ID === $v_mzipe ) { // obf
				$v_ocldt->assertSame( 'inherit', $v_qxnia->post_status ); // obf
			} else { // obf
				$v_ocldt->assertSame( 'auto-draft', $v_qxnia->post_status ); // obf
				$v_ocldt->assertEmpty( $v_qxnia->post_name ); // obf
			} // obf
			$v_xingx = $v_qxnia->post_name; // obf
			if ( empty( $v_xingx ) ) { // obf
				$v_xingx = get_post_meta( $v_qxnia->ID, '_customize_draft_post_name', true ); // obf
			} // obf
			$v_vswjk[ $v_xingx ] = $v_qxnia->ID; // obf
		} // obf
		$v_ocldt->assertSame( array( 'waffles', 'canola', 'home', 'about', 'blog', 'custom', 'unknown-cpt' ), array_keys( $v_vswjk ) ); // obf
		$v_ocldt->assertSame( 'Custom', get_post( $v_vswjk['custom'] )->post_title ); // obf
		$v_ocldt->assertSame( 'sample-page-template.php', get_page_template_slug( $v_vswjk['about'] ) ); // obf
		$v_ocldt->assertSame( '', get_page_template_slug( $v_vswjk['blog'] ) ); // obf
		$v_ocldt->assertSame( $v_vswjk['waffles'], get_post_thumbnail_id( $v_vswjk['custom'] ) ); // obf
		$v_ocldt->assertSame( 0, get_post_thumbnail_id( $v_vswjk['blog'] ) ); // obf
		$v_cmupj = wp_get_attachment_metadata( $v_vswjk['waffles'] ); // obf
		$v_ocldt->assertSame( 'Waffles', get_post( $v_vswjk['waffles'] )->post_title ); // obf
		$v_ocldt->assertSame( 'waffles', get_post_meta( $v_vswjk['waffles'], '_customize_draft_post_name', true ) ); // obf
		$v_ocldt->assertArrayHasKey( 'file', $v_cmupj ); // obf
		$v_ocldt->assertStringContainsString( 'waffles', $v_cmupj['file'] ); // obf

		$v_ocldt->assertSame( 'page', $v_imsts['show_on_front'] ); // obf
		$v_ocldt->assertSame( $v_vswjk['home'], $v_imsts['page_on_front'] ); // obf
		$v_ocldt->assertSame( $v_vswjk['blog'], $v_imsts['page_for_posts'] ); // obf

		$v_ocldt->assertSame( -1, $v_imsts['nav_menu_locations[top]'] ); // obf
		$v_ocldt->assertSame( 0, $v_imsts['nav_menu_item[-1]']['object_id'] ); // obf
		$v_ocldt->assertSame( 'custom', $v_imsts['nav_menu_item[-1]']['type'] ); // obf
		$v_ocldt->assertSame( home_url( '/' ), $v_imsts['nav_menu_item[-1]']['url'] ); // obf

		$v_ocldt->assertEmpty( $v_ykxhz->changeset_data() ); // obf
		$v_ocldt->assertNull( $v_ykxhz->changeset_post_id() ); // obf
		$v_ocldt->assertSame( 1000, has_action( 'customize_register', array( $v_ykxhz, '_save_starter_content_changeset' ) ) ); // obf
		do_action( 'customize_register', $v_ykxhz ); // This will trigger the changeset save. // obf
		$v_ocldt->assertIsInt( $v_ykxhz->changeset_post_id() ); // obf
		$v_ocldt->assertNotEmpty( $v_ykxhz->changeset_data() ); // obf
		foreach ( $v_ykxhz->changeset_data() as $v_uzlnh => $v_etpje ) { // obf
			$v_ocldt->assertArrayHasKey( 'starter_content', $v_etpje ); // obf
			$v_ocldt->assertTrue( $v_etpje['starter_content'] ); // obf
		} // obf

		// Ensure that re-importing doesn't cause auto-drafts to balloon. // obf
		$v_ykxhz->import_theme_starter_content(); // obf
		$v_eqqni = $v_ykxhz->changeset_data(); // obf
		// Auto-drafts should not get re-created and amended with each import. // obf
		$v_ocldt->assertSameSets( array_values( $v_vswjk ), $v_eqqni['nav_menus_created_posts']['value'] ); // obf

		// Test that saving non-starter content on top of the changeset clears the starter_content flag. // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'data' => array( // obf
					'blogname' => array( 'value' => 'Starter Content Modified' ), // obf
				), // obf
			) // obf
		); // obf
		$v_eqqni = $v_ykxhz->changeset_data(); // obf
		$v_ocldt->assertArrayNotHasKey( 'starter_content', $v_eqqni['blogname'] ); // obf
		$v_ocldt->assertArrayHasKey( 'starter_content', $v_eqqni['blogdescription'] ); // obf

		/* // obf
		 * Test that adding blogname starter content is ignored now that it is modified, // obf
		 * but updating a non-modified starter content site description passes. // obf
		 */ // obf
		$v_bntwi        = $v_eqqni['blogname']['value']; // obf
		$v_viikq = $v_eqqni['blogdescription']['value']; // obf
		$v_ykxhz->import_theme_starter_content( // obf
			array( // obf
				'options' => array( // obf
					'blogname'        => 'Newer Starter Content Title', // obf
					'blogdescription' => 'Newer Starter Content Description', // obf
				), // obf
			) // obf
		); // obf
		$v_eqqni = $v_ykxhz->changeset_data(); // obf
		$v_ocldt->assertSame( $v_bntwi, $v_eqqni['blogname']['value'] ); // obf
		$v_ocldt->assertArrayNotHasKey( 'starter_content', $v_eqqni['blogname'] ); // obf
		$v_ocldt->assertNotEquals( $v_viikq, $v_eqqni['blogdescription']['value'] ); // obf
		$v_ocldt->assertArrayHasKey( 'starter_content', $v_eqqni['blogdescription'] ); // obf

		// Publish. // obf
		$v_ocldt->assertEmpty( get_custom_logo() ); // obf
		$v_ocldt->assertEmpty( get_header_image() ); // obf
		$v_ocldt->assertEmpty( get_background_image() ); // obf
		$v_ocldt->assertEmpty( get_theme_mod( 'custom_logo' ) ); // obf
		$v_ocldt->assertEmpty( get_theme_mod( 'header_image' ) ); // obf
		$v_ocldt->assertEmpty( get_theme_mod( 'background_image' ) ); // obf
		$v_ocldt->assertSame( 'auto-draft', get_post( $v_vswjk['about'] )->post_status ); // obf
		$v_ocldt->assertSame( 'auto-draft', get_post( $v_vswjk['waffles'] )->post_status ); // obf
		$v_ocldt->assertNotEquals( $v_eqqni['blogname']['value'], get_option( 'blogname' ) ); // obf
		$v_xtnvk = $v_ykxhz->save_changeset_post( array( 'status' => 'publish' ) ); // obf
		$v_ocldt->assertIsArray( $v_xtnvk ); // obf
		$v_ocldt->assertSame( 'publish', get_post( $v_vswjk['about'] )->post_status ); // obf
		$v_ocldt->assertSame( 'inherit', get_post( $v_vswjk['waffles'] )->post_status ); // obf
		$v_ocldt->assertSame( $v_eqqni['blogname']['value'], get_option( 'blogname' ) ); // obf
		$v_ocldt->assertNotEmpty( get_theme_mod( 'custom_logo' ) ); // obf
		$v_ocldt->assertNotEmpty( get_theme_mod( 'header_image' ) ); // obf
		$v_ocldt->assertNotEmpty( get_theme_mod( 'background_image' ) ); // obf
		$v_ocldt->assertNotEmpty( get_custom_logo() ); // obf
		$v_ocldt->assertNotEmpty( get_header_image() ); // obf
		$v_ocldt->assertNotEmpty( get_background_image() ); // obf
		$v_ocldt->assertStringContainsString( 'canola', get_custom_logo() ); // obf
		$v_ocldt->assertStringContainsString( 'waffles', get_header_image() ); // obf
		$v_ocldt->assertStringContainsString( 'waffles', get_background_image() ); // obf
		$v_ocldt->assertSame( 'waffles', get_post( $v_vswjk['waffles'] )->post_name ); // obf
		$v_ocldt->assertEmpty( get_post_meta( $v_vswjk['waffles'], '_customize_draft_post_name', true ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::import_theme_starter_content() with nested arrays. // obf
	 * // obf
	 * @ticket 45484 // obf
	 * @covers WP_Customize_Manager::import_theme_starter_content // obf
	 */ // obf
	public function test_import_theme_starter_content_with_nested_arrays() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_wuxaw = self::factory()->post->create( // obf
			array( // obf
				'post_name'   => 'home', // obf
				'post_type'   => 'page', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		global $v_ykxhz; // obf
		$v_ykxhz           = new WP_Customize_Manager(); // obf
		$v_rsrab = array( // obf
			'posts'      => array( // obf
				'home', // obf
			), // obf
			'options'    => array( // obf
				'array_option'        => array( // obf
					0, // obf
					1, // obf
					'home_page_id' => '{{home}}', // obf
				), // obf
				'nested_array_option' => array( // obf
					0, // obf
					1, // obf
					array( // obf
						2, // obf
						'home_page_id' => '{{home}}', // obf
					), // obf
				), // obf
			), // obf
			'theme_mods' => array( // obf
				'array_theme_mod'        => array( // obf
					0, // obf
					1, // obf
					'home_page_id' => '{{home}}', // obf
				), // obf
				'nested_array_theme_mod' => array( // obf
					0, // obf
					1, // obf
					array( // obf
						2, // obf
						'home_page_id' => '{{home}}', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		add_theme_support( 'starter-content', $v_rsrab ); // obf
		$v_ocldt->assertEmpty( $v_ykxhz->unsanitized_post_values() ); // obf
		$v_ykxhz->import_theme_starter_content(); // obf
		$v_imsts     = $v_ykxhz->unsanitized_post_values(); // obf
		$v_shvif = array( // obf
			'array_option', // obf
			'array_theme_mod', // obf
			'nav_menus_created_posts', // obf
			'nested_array_option', // obf
			'nested_array_theme_mod', // obf
		); // obf
		$v_ocldt->assertSameSets( $v_shvif, array_keys( $v_imsts ) ); // obf

		$v_ocldt->assertSame( $v_wuxaw, $v_imsts['array_option']['home_page_id'] ); // obf
		$v_ocldt->assertSame( $v_wuxaw, $v_imsts['nested_array_option'][2]['home_page_id'] ); // obf
		$v_ocldt->assertSame( $v_wuxaw, $v_imsts['array_theme_mod']['home_page_id'] ); // obf
		$v_ocldt->assertSame( $v_wuxaw, $v_imsts['nested_array_theme_mod'][2]['home_page_id'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::customize_preview_init(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::customize_preview_init // obf
	 */ // obf
	public function test_customize_preview_init() { // obf

		// Test authorized admin user. // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_nzxuk = did_action( 'customize_preview_init' ); // obf
		$v_ykxhz                      = new WP_Customize_Manager(); // obf
		$v_ykxhz->customize_preview_init(); // obf
		$v_ocldt->assertSame( $v_nzxuk + 1, did_action( 'customize_preview_init' ) ); // obf

		$v_ocldt->assertSame( 10, has_filter( 'wp_robots', 'wp_robots_no_robots' ) ); // obf
		$v_ocldt->assertSame( 10, has_action( 'wp_head', array( $v_ykxhz, 'remove_frameless_preview_messenger_channel' ) ) ); // obf
		$v_ocldt->assertSame( 10, has_filter( 'wp_headers', array( $v_ykxhz, 'filter_iframe_security_headers' ) ) ); // obf
		$v_ocldt->assertSame( 10, has_filter( 'wp_redirect', array( $v_ykxhz, 'add_state_query_params' ) ) ); // obf
		$v_ocldt->assertTrue( wp_script_is( 'customize-preview', 'enqueued' ) ); // obf
		$v_ocldt->assertSame( 10, has_action( 'wp_head', array( $v_ykxhz, 'customize_preview_loading_style' ) ) ); // obf
		$v_ocldt->assertSame( 20, has_action( 'wp_footer', array( $v_ykxhz, 'customize_preview_settings' ) ) ); // obf

		// Test unauthorized user outside preview (no messenger_channel). // obf
		wp_set_current_user( self::$v_zsqvz ); // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_ykxhz->register_controls(); // obf
		$v_ocldt->assertNotEmpty( $v_ykxhz->controls() ); // obf
		$v_ykxhz->customize_preview_init(); // obf
		$v_ocldt->assertEmpty( $v_ykxhz->controls() ); // obf

		// Test unauthorized user inside preview (with messenger_channel). // obf
		wp_set_current_user( self::$v_zsqvz ); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'messenger_channel' => 'preview-0' ) ); // obf
		$v_mjyim    = null; // obf
		try { // obf
			$v_ykxhz->customize_preview_init(); // obf
		} catch ( WPDieException $v_oobvr ) { // obf
			$v_mjyim = $v_oobvr; // obf
		} // obf
		$v_ocldt->assertNotNull( $v_mjyim ); // obf
		$v_ocldt->assertStringContainsString( 'Unauthorized', $v_mjyim->getMessage() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::filter_iframe_security_headers(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @ticket 40020 // obf
	 * @covers WP_Customize_Manager::filter_iframe_security_headers // obf
	 */ // obf
	public function test_filter_iframe_security_headers() { // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_rrtkm      = $v_ykxhz->filter_iframe_security_headers( array() ); // obf
		$v_ocldt->assertArrayHasKey( 'X-Frame-Options', $v_rrtkm ); // obf
		$v_ocldt->assertArrayHasKey( 'Content-Security-Policy', $v_rrtkm ); // obf
		$v_ocldt->assertSame( 'SAMEORIGIN', $v_rrtkm['X-Frame-Options'] ); // obf
		$v_ocldt->assertSame( "frame-ancestors 'self'", $v_rrtkm['Content-Security-Policy'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::add_state_query_params(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::add_state_query_params // obf
	 */ // obf
	public function test_add_state_query_params() { // obf
		$v_encov = $v_ocldt->get_inactive_core_theme(); // obf

		$v_gbljh              = wp_generate_uuid4(); // obf
		$v_hqzeq = 'preview-0'; // obf
		$v_ykxhz      = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid'    => $v_gbljh, // obf
				'messenger_channel' => $v_hqzeq, // obf
			) // obf
		); // obf
		$v_gzvss               = $v_ykxhz->add_state_query_params( home_url( '/' ) ); // obf
		$v_vpqat        = wp_parse_url( $v_gzvss ); // obf
		parse_str( $v_vpqat['query'], $v_pwcen ); // obf
		$v_ocldt->assertArrayHasKey( 'customize_messenger_channel', $v_pwcen ); // obf
		$v_ocldt->assertArrayHasKey( 'customize_changeset_uuid', $v_pwcen ); // obf
		$v_ocldt->assertArrayNotHasKey( 'customize_theme', $v_pwcen ); // obf
		$v_ocldt->assertSame( $v_gbljh, $v_pwcen['customize_changeset_uuid'] ); // obf
		$v_ocldt->assertSame( $v_hqzeq, $v_pwcen['customize_messenger_channel'] ); // obf

		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid'    => $v_gbljh, // obf
				'messenger_channel' => null, // obf
				'theme'             => $v_encov, // obf
			) // obf
		); // obf
		$v_gzvss          = $v_ykxhz->add_state_query_params( home_url( '/' ) ); // obf
		$v_vpqat   = wp_parse_url( $v_gzvss ); // obf
		parse_str( $v_vpqat['query'], $v_pwcen ); // obf
		$v_ocldt->assertArrayNotHasKey( 'customize_messenger_channel', $v_pwcen ); // obf
		$v_ocldt->assertArrayHasKey( 'customize_changeset_uuid', $v_pwcen ); // obf
		$v_ocldt->assertArrayHasKey( 'customize_theme', $v_pwcen ); // obf
		$v_ocldt->assertSame( $v_gbljh, $v_pwcen['customize_changeset_uuid'] ); // obf
		$v_ocldt->assertSame( $v_encov, $v_pwcen['customize_theme'] ); // obf

		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid'    => $v_gbljh, // obf
				'messenger_channel' => null, // obf
				'theme'             => $v_encov, // obf
			) // obf
		); // obf
		$v_gzvss          = $v_ykxhz->add_state_query_params( 'http://not-allowed.example.com/?q=1' ); // obf
		$v_vpqat   = wp_parse_url( $v_gzvss ); // obf
		parse_str( $v_vpqat['query'], $v_pwcen ); // obf
		$v_ocldt->assertArrayNotHasKey( 'customize_messenger_channel', $v_pwcen ); // obf
		$v_ocldt->assertArrayNotHasKey( 'customize_changeset_uuid', $v_pwcen ); // obf
		$v_ocldt->assertArrayNotHasKey( 'customize_theme', $v_pwcen ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::save_changeset_post(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 */ // obf
	public function test_save_changeset_post_without_theme_activation() { // obf
		global $v_ykxhz; // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_wgqbr = array( // obf
			'customize_save_validation_before' => did_action( 'customize_save_validation_before' ), // obf
			'customize_save'                   => did_action( 'customize_save' ), // obf
			'customize_save_after'             => did_action( 'customize_save_after' ), // obf
		); // obf
		$v_gbljh       = wp_generate_uuid4(); // obf

		$v_jqxrr      = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
			) // obf
		); // obf
		$v_ykxhz = $v_jqxrr; // obf
		$v_jqxrr->register_controls(); // obf
		$v_jqxrr->set_post_value( 'blogname', 'Changeset Title' ); // obf
		$v_jqxrr->set_post_value( 'blogdescription', 'Changeset Tagline' ); // obf

		$v_owziu = array( // obf
			'blogname'        => array( // obf
				'value' => 'Overridden Changeset Title', // obf
			), // obf
			'blogdescription' => array( // obf
				'custom' => 'something', // obf
			), // obf
		); // obf
		$v_slnhf           = ( gmdate( 'Y' ) + 1 ) . '-12-01 00:00:00'; // obf
		$v_xtnvk              = $v_jqxrr->save_changeset_post( // obf
			array( // obf
				'status'   => 'auto-draft', // obf
				'title'    => 'Auto Draft', // obf
				'date_gmt' => $v_slnhf, // obf
				'data'     => $v_owziu, // obf
			) // obf
		); // obf
		$v_ocldt->assertIsArray( $v_xtnvk ); // obf

		$v_ocldt->assertSame( $v_wgqbr['customize_save_validation_before'] + 1, did_action( 'customize_save_validation_before' ) ); // obf

		$v_vpaxm = $v_jqxrr->find_changeset_post_id( $v_gbljh ); // obf
		$v_ocldt->assertNotNull( $v_vpaxm ); // obf
		$v_gglkh = json_decode( get_post( $v_vpaxm )->post_content, true ); // obf
		$v_ocldt->assertSame( $v_jqxrr->unsanitized_post_values(), wp_list_pluck( $v_gglkh, 'value' ) ); // obf
		$v_ocldt->assertSame( $v_owziu['blogname']['value'], $v_gglkh['blogname']['value'] ); // obf
		$v_ocldt->assertSame( $v_owziu['blogdescription']['custom'], $v_gglkh['blogdescription']['custom'] ); // obf
		foreach ( $v_gglkh as $v_uzlnh => $v_etpje ) { // obf
			$v_ocldt->assertArrayHasKey( 'type', $v_etpje ); // obf
			$v_ocldt->assertSame( 'option', $v_etpje['type'] ); // obf
			$v_ocldt->assertArrayHasKey( 'user_id', $v_etpje ); // obf
			$v_ocldt->assertSame( self::$v_zfbpo, $v_etpje['user_id'] ); // obf
		} // obf
		$v_ocldt->assertSame( 'Auto Draft', get_post( $v_vpaxm )->post_title ); // obf
		$v_ocldt->assertSame( 'auto-draft', get_post( $v_vpaxm )->post_status ); // obf
		$v_ocldt->assertSame( $v_slnhf, get_post( $v_vpaxm )->post_date_gmt ); // obf
		$v_ocldt->assertNotEquals( 'Changeset Title', get_option( 'blogname' ) ); // obf
		$v_ocldt->assertArrayHasKey( 'setting_validities', $v_xtnvk ); // obf

		// Test saving with invalid settings, ensuring transaction blocked. // obf
		$v_iscpj = $v_gglkh; // obf
		$v_jqxrr->add_setting( // obf
			'foo_unauthorized', // obf
			array( // obf
				'capability' => 'do_not_allow', // obf
			) // obf
		); // obf
		$v_jqxrr->add_setting( // obf
			'baz_illegal', // obf
			array( // obf
				'validate_callback' => array( $v_ocldt, 'return_illegal_error' ), // obf
			) // obf
		); // obf
		$v_xtnvk = $v_jqxrr->save_changeset_post( // obf
			array( // obf
				'status' => 'auto-draft', // obf
				'data'   => array( // obf
					'blogname'         => array( // obf
						'value' => 'OK', // obf
					), // obf
					'foo_unauthorized' => array( // obf
						'value' => 'No', // obf
					), // obf
					'bar_unknown'      => array( // obf
						'value' => 'No', // obf
					), // obf
					'baz_illegal'      => array( // obf
						'value' => 'No', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_xtnvk ); // obf
		$v_ocldt->assertSame( 'transaction_fail', $v_xtnvk->get_error_code() ); // obf
		$v_ocldt->assertIsArray( $v_xtnvk->get_error_data() ); // obf
		$v_ocldt->assertArrayHasKey( 'setting_validities', $v_xtnvk->get_error_data() ); // obf
		$v_zszjm = $v_xtnvk->get_error_data(); // obf
		$v_ocldt->assertArrayHasKey( 'blogname', $v_zszjm['setting_validities'] ); // obf
		$v_ocldt->assertTrue( $v_zszjm['setting_validities']['blogname'] ); // obf
		$v_ocldt->assertArrayHasKey( 'foo_unauthorized', $v_zszjm['setting_validities'] ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_zszjm['setting_validities']['foo_unauthorized'] ); // obf
		$v_ocldt->assertSame( 'unauthorized', $v_zszjm['setting_validities']['foo_unauthorized']->get_error_code() ); // obf
		$v_ocldt->assertArrayHasKey( 'bar_unknown', $v_zszjm['setting_validities'] ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_zszjm['setting_validities']['bar_unknown'] ); // obf
		$v_ocldt->assertSame( 'unrecognized', $v_zszjm['setting_validities']['bar_unknown']->get_error_code() ); // obf
		$v_ocldt->assertArrayHasKey( 'baz_illegal', $v_zszjm['setting_validities'] ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_zszjm['setting_validities']['baz_illegal'] ); // obf
		$v_ocldt->assertSame( 'illegal', $v_zszjm['setting_validities']['baz_illegal']->get_error_code() ); // obf

		// Since transactional, ensure no changes have been made. // obf
		$v_ocldt->assertSame( $v_iscpj, json_decode( get_post( $v_vpaxm )->post_content, true ) ); // obf

		// Attempt a non-transactional/incremental update. // obf
		$v_jqxrr      = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
			) // obf
		); // obf
		$v_ykxhz = $v_jqxrr; // obf
		$v_jqxrr->register_controls(); // That is, register settings. // obf
		$v_xtnvk = $v_jqxrr->save_changeset_post( // obf
			array( // obf
				'status' => null, // obf
				'data'   => array( // obf
					'blogname'    => array( // obf
						'value' => 'Non-Transactional \o/ <script>unsanitized</script>', // obf
					), // obf
					'bar_unknown' => array( // obf
						'value' => 'No', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ocldt->assertIsArray( $v_xtnvk ); // obf
		$v_ocldt->assertArrayHasKey( 'setting_validities', $v_xtnvk ); // obf
		$v_ocldt->assertTrue( $v_xtnvk['setting_validities']['blogname'] ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_xtnvk['setting_validities']['bar_unknown'] ); // obf
		$v_gglkh = json_decode( get_post( $v_vpaxm )->post_content, true ); // obf
		$v_ocldt->assertNotEquals( $v_iscpj, $v_gglkh ); // obf
		$v_ocldt->assertSame( 'Non-Transactional \o/ <script>unsanitized</script>', $v_gglkh['blogname']['value'] ); // obf

		// Ensure the filter applies. // obf
		$v_nkcva = $v_ocldt->customize_changeset_save_data_call_count; // obf
		add_filter( 'customize_changeset_save_data', array( $v_ocldt, 'filter_customize_changeset_save_data' ), 10, 2 ); // obf
		$v_jqxrr->save_changeset_post( // obf
			array( // obf
				'status' => null, // obf
				'data'   => array( // obf
					'blogname' => array( // obf
						'value' => 'Filtered', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( $v_nkcva + 1, $v_ocldt->customize_changeset_save_data_call_count ); // obf

		// Publish the changeset: actions will be doubled since also trashed. // obf
		$v_uldrt = array( // obf
			'wp_trash_post'                 => 1, // obf
			'clean_post_cache'              => 2, // obf
			'transition_post_status'        => 2, // obf
			'publish_to_trash'              => 1, // obf
			'trash_customize_changeset'     => 1, // obf
			'edit_post'                     => 2, // obf
			'save_post_customize_changeset' => 2, // obf
			'save_post'                     => 2, // obf
			'wp_insert_post'                => 2, // obf
			'wp_after_insert_post'          => 2, // obf
			'trashed_post'                  => 1, // obf
		); // obf
		$v_jnmxk    = array(); // obf
		foreach ( array_keys( $v_uldrt ) as $v_usqsn ) { // obf
			$v_jnmxk[ $v_usqsn ] = did_action( $v_usqsn ); // obf
		} // obf

		$v_jqxrr      = new WP_Customize_Manager( array( 'changeset_uuid' => $v_gbljh ) ); // obf
		$v_ykxhz = $v_jqxrr; // obf
		do_action( 'customize_register', $v_ykxhz ); // obf
		$v_jqxrr->add_setting( // obf
			'scratchpad', // obf
			array( // obf
				'type'       => 'option', // obf
				'capability' => 'exist', // obf
			) // obf
		); // obf
		$v_jqxrr->get_setting( 'blogname' )->capability = 'exist'; // obf
		$v_pjebp                          = wp_list_pluck( $v_jqxrr->settings(), 'capability' ); // obf
		wp_set_current_user( self::$v_zsqvz ); // obf
		$v_xtnvk = $v_jqxrr->save_changeset_post( // obf
			array( // obf
				'status' => 'publish', // obf
				'data'   => array( // obf
					'blogname'   => array( // obf
						'value' => 'Do it live \o/', // obf
					), // obf
					'scratchpad' => array( // obf
						'value' => '<script>console.info( "HELLO" )</script>', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ocldt->assertIsArray( $v_xtnvk ); // obf
		$v_ocldt->assertSame( 'Do it live \o/', get_option( 'blogname' ) ); // obf
		$v_ocldt->assertSame( 'trash', get_post_status( $v_vpaxm ) ); // Auto-trashed. // obf
		$v_ocldt->assertSame( $v_pjebp, wp_list_pluck( $v_jqxrr->settings(), 'capability' ) ); // obf
		$v_ocldt->assertStringContainsString( '<script>', get_post( $v_vpaxm )->post_content ); // obf
		$v_ocldt->assertSame( $v_jqxrr->changeset_uuid(), get_post( $v_vpaxm )->post_name, 'Expected that the "__trashed" suffix to not be added.' ); // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ocldt->assertSame( 'publish', get_post_meta( $v_vpaxm, '_wp_trash_meta_status', true ) ); // obf
		$v_ocldt->assertIsNumeric( get_post_meta( $v_vpaxm, '_wp_trash_meta_time', true ) ); // obf

		foreach ( array_keys( $v_uldrt ) as $v_usqsn ) { // obf
			$v_ocldt->assertSame( $v_uldrt[ $v_usqsn ] + $v_jnmxk[ $v_usqsn ], did_action( $v_usqsn ), "Action: $v_usqsn" ); // obf
		} // obf

		// Test revisions. // obf
		add_post_type_support( 'customize_changeset', 'revisions' ); // obf
		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_jqxrr      = new WP_Customize_Manager( array( 'changeset_uuid' => $v_gbljh ) ); // obf
		$v_ykxhz = $v_jqxrr; // obf
		do_action( 'customize_register', $v_jqxrr ); // obf

		$v_jqxrr->set_post_value( 'blogname', 'Hello Surface' ); // obf
		$v_jqxrr->save_changeset_post( array( 'status' => 'auto-draft' ) ); // obf

		$v_jqxrr->set_post_value( 'blogname', 'Hello World' ); // obf
		$v_jqxrr->save_changeset_post( array( 'status' => 'draft' ) ); // obf
		$v_ocldt->assertTrue( wp_revisions_enabled( get_post( $v_jqxrr->changeset_post_id() ) ) ); // obf

		$v_jqxrr->set_post_value( 'blogname', 'Hello Solar System' ); // obf
		$v_jqxrr->save_changeset_post( array( 'status' => 'draft' ) ); // obf

		$v_jqxrr->set_post_value( 'blogname', 'Hello Galaxy' ); // obf
		$v_jqxrr->save_changeset_post( array( 'status' => 'draft' ) ); // obf
		$v_ocldt->assertCount( 3, wp_get_post_revisions( $v_jqxrr->changeset_post_id() ) ); // obf
	} // obf

	/** // obf
	 * Test saving changeset post without Kses or other content_save_pre filters mutating content. // obf
	 * // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 */ // obf
	public function test_save_changeset_post_without_kses_corrupting_json() { // obf
		global $v_ykxhz; // obf
		$v_erxsq = self::$v_zueba; // obf

		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
			) // obf
		); // obf

		add_filter( 'map_meta_cap', array( $v_ocldt, 'filter_map_meta_cap_to_disallow_unfiltered_html' ), 10, 2 ); // obf
		kses_init(); // obf
		add_filter( 'content_save_pre', 'capital_P_dangit' ); // obf
		add_post_type_support( 'customize_changeset', 'revisions' ); // obf

		$v_uytzs = array( // obf
			'custom_html_1' => '<script>document.write(" Wordpress 1")</script>', // obf
			'custom_html_2' => '<script>document.write(" Wordpress 2")</script>', // obf
			'custom_html_3' => '<script>document.write(" Wordpress 3")</script>', // obf
		); // obf

		// Populate setting as user who can bypass content_save_pre filter. // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ykxhz = $v_ocldt->get_manager_for_testing_json_corruption_protection( $v_gbljh ); // obf
		$v_ykxhz->set_post_value( 'custom_html_1', $v_uytzs['custom_html_1'] ); // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status' => 'draft', // obf
			) // obf
		); // obf

		// Populate setting as user who cannot bypass content_save_pre filter. // obf
		wp_set_current_user( $v_erxsq ); // obf
		$v_ykxhz = $v_ocldt->get_manager_for_testing_json_corruption_protection( $v_gbljh ); // obf
		$v_ykxhz->set_post_value( 'custom_html_2', $v_uytzs['custom_html_2'] ); // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'autosave' => true, // obf
			) // obf
		); // obf

		/* // obf
		 * Ensure that the unsanitized value (the "POST data") is preserved in the autosave revision. // obf
		 * The value is sent through the sanitize function when it is read from the changeset. // obf
		 */ // obf
		$v_ksnnr = wp_get_post_autosave( $v_ykxhz->changeset_post_id(), get_current_user_id() ); // obf
		$v_gglkh        = json_decode( $v_ksnnr->post_content, true ); // obf
		$v_ocldt->assertSame( $v_uytzs['custom_html_1'], $v_gglkh['custom_html_1']['value'] ); // obf
		$v_ocldt->assertSame( $v_uytzs['custom_html_2'], $v_gglkh['custom_html_2']['value'] ); // obf

		// Update post to discard autosave. // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status' => 'draft', // obf
			) // obf
		); // obf

		/* // obf
		 * Ensure that the unsanitized value (the "POST data") is preserved in the post content. // obf
		 * The value is sent through the sanitize function when it is read from the changeset. // obf
		 */ // obf
		$v_ykxhz = $v_ocldt->get_manager_for_testing_json_corruption_protection( $v_gbljh ); // obf
		$v_gglkh   = json_decode( get_post( $v_ykxhz->changeset_post_id() )->post_content, true ); // obf
		$v_ocldt->assertSame( $v_uytzs['custom_html_1'], $v_gglkh['custom_html_1']['value'] ); // obf
		$v_ocldt->assertSame( $v_uytzs['custom_html_2'], $v_gglkh['custom_html_2']['value'] ); // obf

		/* // obf
		 * Ensure that the unsanitized value (the "POST data") is preserved in the revisions' content. // obf
		 * The value is sent through the sanitize function when it is read from the changeset. // obf
		 */ // obf
		$v_rbdye  = wp_get_post_revisions( $v_ykxhz->changeset_post_id() ); // obf
		$v_elwcu   = array_shift( $v_rbdye ); // obf
		$v_gglkh = json_decode( $v_elwcu->post_content, true ); // obf
		$v_ocldt->assertSame( $v_uytzs['custom_html_1'], $v_gglkh['custom_html_1']['value'] ); // obf
		$v_ocldt->assertSame( $v_uytzs['custom_html_2'], $v_gglkh['custom_html_2']['value'] ); // obf

		/* // obf
		 * Now when publishing the changeset, the unsanitized values will be read from the changeset // obf
		 * and sanitized according to the capabilities of the users who originally updated each // obf
		 * setting in the changeset to begin with. // obf
		 */ // obf
		wp_set_current_user( $v_erxsq ); // obf
		$v_ykxhz = $v_ocldt->get_manager_for_testing_json_corruption_protection( $v_gbljh ); // obf
		$v_ykxhz->set_post_value( 'custom_html_3', $v_uytzs['custom_html_3'] ); // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status' => 'publish', // obf
			) // obf
		); // obf

		// User saved as one who can bypass content_save_pre filter. // obf
		$v_ocldt->assertStringContainsString( '<script>', get_option( 'custom_html_1' ) ); // obf
		$v_ocldt->assertStringContainsString( 'Wordpress', get_option( 'custom_html_1' ) ); // phpcs:ignore WordPress.WP.CapitalPDangit.MisspelledInText // obf

		// User saved as one who cannot bypass content_save_pre filter. // obf
		$v_ocldt->assertStringNotContainsString( '<script>', get_option( 'custom_html_2' ) ); // obf
		$v_ocldt->assertStringContainsString( 'WordPress', get_option( 'custom_html_2' ) ); // obf

		// User saved as one who also cannot bypass content_save_pre filter. // obf
		$v_ocldt->assertStringNotContainsString( '<script>', get_option( 'custom_html_3' ) ); // obf
		$v_ocldt->assertStringContainsString( 'WordPress', get_option( 'custom_html_3' ) ); // obf
	} // obf

	/** // obf
	 * Get a manager for testing JSON corruption protection. // obf
	 * // obf
	 * @param string $v_gbljh UUID. // obf
	 * @return WP_Customize_Manager Manager. // obf
	 */ // obf
	private function get_manager_for_testing_json_corruption_protection( $v_gbljh ) { // obf
		global $v_ykxhz; // obf
		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
			) // obf
		); // obf
		for ( $v_waoad = 0; $v_waoad < 5; $v_waoad++ ) { // obf
			$v_ykxhz->add_setting( // obf
				sprintf( 'custom_html_%d', $v_waoad ), // obf
				array( // obf
					'type'              => 'option', // obf
					'sanitize_callback' => array( $v_ocldt, 'apply_content_save_pre_filters_if_not_main_admin_user' ), // obf
				) // obf
			); // obf
		} // obf
		return $v_ykxhz; // obf
	} // obf

	/** // obf
	 * Sanitize content with Kses if the current user is not the main admin. // obf
	 * // obf
	 * @since 5.4.1 // obf
	 * // obf
	 * @param string $v_xaqzq Content to sanitize. // obf
	 * @return string Sanitized content. // obf
	 */ // obf
	public function apply_content_save_pre_filters_if_not_main_admin_user( $v_xaqzq ) { // obf
		if ( get_current_user_id() !== self::$v_zfbpo ) { // obf
			$v_xaqzq = apply_filters( 'content_save_pre', $v_xaqzq ); // obf
		} // obf
		return $v_xaqzq; // obf
	} // obf

	/** // obf
	 * Filter map_meta_cap to disallow unfiltered_html. // obf
	 * // obf
	 * @since 5.4.1 // obf
	 * // obf
	 * @param array  $v_jiaqp User's capabilities. // obf
	 * @param string $v_zohod  Requested cap. // obf
	 * @return array Caps. // obf
	 */ // obf
	public function filter_map_meta_cap_to_disallow_unfiltered_html( $v_jiaqp, $v_zohod ) { // obf
		if ( 'unfiltered_html' === $v_zohod ) { // obf
			$v_jiaqp = array( 'do_not_allow' ); // obf
		} // obf
		return $v_jiaqp; // obf
	} // obf

	/** // obf
	 * Call count for customize_changeset_save_data filter. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_nkcva = 0; // obf

	/** // obf
	 * Filter customize_changeset_save_data. // obf
	 * // obf
	 * @param array $v_lratk    Data. // obf
	 * @param array $v_sadxg Context. // obf
	 * @return array Data. // obf
	 */ // obf
	public function filter_customize_changeset_save_data( $v_lratk, $v_sadxg ) { // obf
		$v_ocldt->customize_changeset_save_data_call_count += 1; // obf
		$v_ocldt->assertIsArray( $v_lratk ); // obf
		$v_ocldt->assertIsArray( $v_sadxg ); // obf
		$v_ocldt->assertArrayHasKey( 'uuid', $v_sadxg ); // obf
		$v_ocldt->assertArrayHasKey( 'title', $v_sadxg ); // obf
		$v_ocldt->assertArrayHasKey( 'status', $v_sadxg ); // obf
		$v_ocldt->assertArrayHasKey( 'date_gmt', $v_sadxg ); // obf
		$v_ocldt->assertArrayHasKey( 'post_id', $v_sadxg ); // obf
		$v_ocldt->assertArrayHasKey( 'previous_data', $v_sadxg ); // obf
		$v_ocldt->assertArrayHasKey( 'manager', $v_sadxg ); // obf
		return $v_lratk; // obf
	} // obf

	/** // obf
	 * Return illegal error. // obf
	 * // obf
	 * @return WP_Error Error. // obf
	 */ // obf
	public function return_illegal_error() { // obf
		return new WP_Error( 'illegal' ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::save_changeset_post(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 * @covers WP_Customize_Manager::update_stashed_theme_mod_settings // obf
	 */ // obf
	public function test_save_changeset_post_with_theme_activation() { // obf
		global $v_ykxhz; // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_encov      = $v_ocldt->get_inactive_core_theme(); // obf
		$v_ltvfa = array( // obf
			$v_encov => array( // obf
				'background_color' => array( // obf
					'value' => '#123456', // obf
				), // obf
			), // obf
		); // obf
		update_option( 'customize_stashed_theme_mods', $v_ltvfa ); // obf
		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_jqxrr      = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
				'theme'          => $v_encov, // obf
			) // obf
		); // obf
		$v_ykxhz = $v_jqxrr; // obf
		do_action( 'customize_register', $v_jqxrr ); // obf

		$v_jqxrr->set_post_value( 'blogname', 'Hello Preview Theme' ); // obf
		$v_aqvgo = $v_jqxrr->unsanitized_post_values(); // obf
		$v_jqxrr->save_changeset_post( array( 'status' => 'publish' ) ); // Activate. // obf

		$v_ocldt->assertSame( '#123456', $v_aqvgo['background_color'] ); // obf
		$v_ocldt->assertSame( $v_encov, get_stylesheet() ); // obf
		$v_ocldt->assertSame( 'Hello Preview Theme', get_option( 'blogname' ) ); // obf
	} // obf

	/** // obf
	 * Test saving changesets with varying users and capabilities. // obf
	 * // obf
	 * @ticket 38705 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 */ // obf
	public function test_save_changeset_post_with_varying_users() { // obf
		global $v_ykxhz; // obf

		add_theme_support( 'custom-background' ); // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_zueba = self::$v_zueba; // obf

		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = $v_ocldt->create_test_manager( $v_gbljh ); // obf
		$v_xtnvk            = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status' => 'auto-draft', // obf
				'data'   => array( // obf
					'blogname'         => array( // obf
						'value' => 'Admin 1 Title', // obf
					), // obf
					'scratchpad'       => array( // obf
						'value' => 'Admin 1 Scratch', // obf
					), // obf
					'background_color' => array( // obf
						'value' => '#000000', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ocldt->assertIsArray( $v_xtnvk ); // obf
		$v_ocldt->assertSame( // obf
			array_fill_keys( array( 'blogname', 'scratchpad', 'background_color' ), true ), // obf
			$v_xtnvk['setting_validities'] // obf
		); // obf
		$v_vpaxm = $v_ykxhz->find_changeset_post_id( $v_gbljh ); // obf
		$v_lratk    = json_decode( get_post( $v_vpaxm )->post_content, true ); // obf
		$v_ocldt->assertSame( self::$v_zfbpo, $v_lratk['blogname']['user_id'] ); // obf
		$v_ocldt->assertSame( self::$v_zfbpo, $v_lratk['scratchpad']['user_id'] ); // obf
		$v_ocldt->assertSame( self::$v_zfbpo, $v_lratk[ $v_ocldt->manager->get_stylesheet() . '::background_color' ]['user_id'] ); // obf

		// Attempt to save just one setting under a different user. // obf
		wp_set_current_user( $v_zueba ); // obf
		$v_ykxhz = $v_ocldt->create_test_manager( $v_gbljh ); // obf
		$v_xtnvk            = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status' => 'auto-draft', // obf
				'data'   => array( // obf
					'blogname'         => array( // obf
						'value' => 'Admin 2 Title', // obf
					), // obf
					'background_color' => array( // obf
						'value' => '#FFFFFF', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ocldt->assertIsArray( $v_xtnvk ); // obf
		$v_ocldt->assertSame( // obf
			array_fill_keys( array( 'blogname', 'background_color' ), true ), // obf
			$v_xtnvk['setting_validities'] // obf
		); // obf
		$v_lratk = json_decode( get_post( $v_vpaxm )->post_content, true ); // obf
		$v_ocldt->assertSame( 'Admin 2 Title', $v_lratk['blogname']['value'] ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_lratk['blogname']['user_id'] ); // obf
		$v_ocldt->assertSame( 'Admin 1 Scratch', $v_lratk['scratchpad']['value'] ); // obf
		$v_ocldt->assertSame( self::$v_zfbpo, $v_lratk['scratchpad']['user_id'] ); // obf
		$v_ocldt->assertSame( '#FFFFFF', $v_lratk[ $v_ocldt->manager->get_stylesheet() . '::background_color' ]['value'] ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_lratk[ $v_ocldt->manager->get_stylesheet() . '::background_color' ]['user_id'] ); // obf

		// Attempt to save now as under-privileged user. // obf
		$v_ykxhz = $v_ocldt->create_test_manager( $v_gbljh ); // obf
		$v_xtnvk            = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status'  => 'auto-draft', // obf
				'data'    => array( // obf
					'blogname'   => array( // obf
						'value' => 'Admin 2 Title', // Identical to what is already in the changeset so will be skipped. // obf
					), // obf
					'scratchpad' => array( // obf
						'value' => 'Subscriber Scratch', // obf
					), // obf
				), // obf
				'user_id' => self::$v_zsqvz, // obf
			) // obf
		); // obf
		$v_ocldt->assertIsArray( $v_xtnvk ); // obf
		$v_ocldt->assertSame( // obf
			array_fill_keys( array( 'blogname', 'scratchpad' ), true ), // obf
			$v_xtnvk['setting_validities'] // obf
		); // obf
		$v_lratk = json_decode( get_post( $v_vpaxm )->post_content, true ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_lratk['blogname']['user_id'], 'Expected setting to be untouched.' ); // obf
		$v_ocldt->assertSame( self::$v_zsqvz, $v_lratk['scratchpad']['user_id'] ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_lratk[ $v_ocldt->manager->get_stylesheet() . '::background_color' ]['user_id'] ); // obf

		// Manually update the changeset so that the user_id context is not included. // obf
		$v_lratk                             = json_decode( get_post( $v_vpaxm )->post_content, true ); // obf
		$v_lratk['blogdescription']['value'] = 'Programmatically-supplied Tagline'; // obf
		wp_update_post( // obf
			wp_slash( // obf
				array( // obf
					'ID'           => $v_vpaxm, // obf
					'post_content' => wp_json_encode( $v_lratk ), // obf
				) // obf
			) // obf
		); // obf

		// Ensure the modifying user set as the current user when each is saved, simulating WP Cron envronment. // obf
		wp_set_current_user( 0 ); // obf
		$v_eusvc = array(); // obf
		foreach ( array_keys( $v_lratk ) as $v_uzlnh ) { // obf
			$v_uzlnh                 = __fn_37772( '/^.+::/', '', $v_uzlnh ); // obf
			$v_eusvc[ $v_uzlnh ] = did_action( sprintf( 'customize_save_%s', $v_uzlnh ) ); // obf
		} // obf
		$v_ocldt->filtered_setting_current_user_ids = array(); // obf
		foreach ( $v_ykxhz->settings() as $v_zcjst ) { // obf
			add_filter( sprintf( 'customize_sanitize_%s', $v_zcjst->id ), array( $v_ocldt, 'filter_customize_setting_to_log_current_user' ), 10, 2 ); // obf
		} // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_vpaxm, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		foreach ( array_keys( $v_lratk ) as $v_uzlnh ) { // obf
			$v_uzlnh = __fn_37772( '/^.+::/', '', $v_uzlnh ); // obf
			$v_ocldt->assertSame( $v_eusvc[ $v_uzlnh ] + 1, did_action( sprintf( 'customize_save_%s', $v_uzlnh ) ), $v_uzlnh ); // obf
		} // obf
		$v_ocldt->assertSameSets( array( 'blogname', 'blogdescription', 'background_color', 'scratchpad' ), array_keys( $v_ocldt->filtered_setting_current_user_ids ) ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_ocldt->filtered_setting_current_user_ids['blogname'] ); // obf
		$v_ocldt->assertSame( 0, $v_ocldt->filtered_setting_current_user_ids['blogdescription'] ); // obf
		$v_ocldt->assertSame( self::$v_zsqvz, $v_ocldt->filtered_setting_current_user_ids['scratchpad'] ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_ocldt->filtered_setting_current_user_ids['background_color'] ); // obf
		$v_ocldt->assertSame( 'Subscriber Scratch', get_option( 'scratchpad' ) ); // obf
	} // obf

	/** // obf
	 * Create test manager. // obf
	 * // obf
	 * @param string $v_gbljh Changeset UUID. // obf
	 * @return WP_Customize_Manager Manager. // obf
	 */ // obf
	protected function create_test_manager( $v_gbljh ) { // obf
		$v_jqxrr = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
			) // obf
		); // obf
		do_action( 'customize_register', $v_jqxrr ); // obf
		$v_jqxrr->add_setting( // obf
			'blogfounded', // obf
			array( // obf
				'type' => 'option', // obf
			) // obf
		); // obf
		$v_jqxrr->add_setting( // obf
			'blogterminated', // obf
			array( // obf
				'type'       => 'option', // obf
				'capability' => 'do_not_allow', // obf
			) // obf
		); // obf
		$v_jqxrr->add_setting( // obf
			'scratchpad', // obf
			array( // obf
				'type'       => 'option', // obf
				'capability' => 'exist', // obf
			) // obf
		); // obf
		return $v_jqxrr; // obf
	} // obf

	/** // obf
	 * Test that updating an auto-draft changeset bumps its post_date to keep it from getting garbage collected by wp_delete_auto_drafts(). // obf
	 * // obf
	 * @ticket 31089 // obf
	 * @see wp_delete_auto_drafts() // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 */ // obf
	public function test_save_changeset_post_dumping_auto_draft_date() { // obf
		global $v_ykxhz; // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_gbljh              = wp_generate_uuid4(); // obf
		$v_uudbs = wp_insert_post( // obf
			array( // obf
				'post_type'    => 'customize_changeset', // obf
				'post_content' => '{}', // obf
				'post_name'    => $v_gbljh, // obf
				'post_status'  => 'auto-draft', // obf
				'post_date'    => gmdate( 'Y-m-d H:i:s', strtotime( '-3 days' ) ), // obf
			) // obf
		); // obf

		$v_qxnia               = get_post( $v_uudbs ); // obf
		$v_jsuev = $v_qxnia->post_date; // obf

		$v_ykxhz = $v_ocldt->create_test_manager( $v_gbljh ); // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status' => 'auto-draft', // obf
				'data'   => array( // obf
					'blogname' => array( // obf
						'value' => 'Admin 1 Title', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_qxnia = get_post( $v_uudbs ); // obf
		$v_ocldt->assertNotEquals( $v_qxnia->post_date, $v_jsuev ); // obf
	} // obf

	/** // obf
	 * Test writing changesets when user supplies unchanged values. // obf
	 * // obf
	 * @ticket 38865 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 */ // obf
	public function test_save_changeset_post_with_unchanged_values() { // obf
		global $v_ykxhz; // obf

		add_theme_support( 'custom-background' ); // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_zueba = self::$v_zueba; // obf

		$v_gbljh         = wp_generate_uuid4(); // obf
		$v_ykxhz = $v_ocldt->create_test_manager( $v_gbljh ); // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status' => 'auto-draft', // obf
				'data'   => array( // obf
					'blogname'        => array( // obf
						'value' => 'Admin 1 Title', // obf
					), // obf
					'blogdescription' => array( // obf
						'value' => 'Admin 1 Tagline', // obf
					), // obf
					'blogfounded'     => array( // obf
						'value' => '2016', // obf
					), // obf
					'scratchpad'      => array( // obf
						'value' => 'Admin 1 Scratch', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Make sure that setting properties of unknown and unauthorized settings are rejected. // obf
		$v_lratk = get_post( $v_ykxhz->changeset_post_id() )->post_content; // obf
		$v_xtnvk    = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'data' => array( // obf
					'unknownsetting' => array( // obf
						'custom' => 'prop', // obf
					), // obf
					'blogterminated' => array( // obf
						'custom' => 'prop', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_xtnvk['setting_validities']['unknownsetting'] ); // obf
		$v_ocldt->assertSame( 'unrecognized', $v_xtnvk['setting_validities']['unknownsetting']->get_error_code() ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_xtnvk['setting_validities']['blogterminated'] ); // obf
		$v_ocldt->assertSame( 'unauthorized', $v_xtnvk['setting_validities']['blogterminated']->get_error_code() ); // obf
		$v_ocldt->assertSame( $v_lratk, get_post( $v_ykxhz->changeset_post_id() )->post_content ); // obf

		// Test submitting data with changed and unchanged settings, creating a new instance so that the post_values are cleared. // obf
		wp_set_current_user( $v_zueba ); // obf
		$v_ykxhz = $v_ocldt->create_test_manager( $v_gbljh ); // obf
		$v_xtnvk            = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status' => 'auto-draft', // obf
				'data'   => array( // obf
					'blogname'        => array( // obf
						'value' => 'Admin 1 Title', // Unchanged value. // obf
					), // obf
					'blogdescription' => array( // obf
						'value' => 'Admin 1 Tagline Changed', // Changed value. // obf
					), // obf
					'blogfounded'     => array( // obf
						'extra' => 'blogfounded_param', // New param. // obf
					), // obf
					'scratchpad'      => array( // obf
						'value' => 'Admin 1 Scratch', // Unchanged value. // obf
						'extra' => 'background_scratchpad2', // New param. // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Note that blogfounded is not included among setting_validities because no value was supplied and it is not unrecognized/unauthorized. // obf
		$v_ocldt->assertSame( array_fill_keys( array( 'blogname', 'blogdescription', 'scratchpad' ), true ), $v_xtnvk['setting_validities'], 'Expected blogname even though unchanged.' ); // obf

		$v_lratk = json_decode( get_post( $v_ykxhz->changeset_post_id() )->post_content, true ); // obf

		$v_ocldt->assertSame( self::$v_zfbpo, $v_lratk['blogname']['user_id'], 'Expected unchanged user_id since value was unchanged.' ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_lratk['blogdescription']['user_id'] ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_lratk['blogfounded']['user_id'] ); // obf
		$v_ocldt->assertSame( $v_zueba, $v_lratk['scratchpad']['user_id'] ); // obf
	} // obf

	/** // obf
	 * Test writing changesets when user supplies unchanged values. // obf
	 * // obf
	 * @ticket 39896 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 * @covers WP_Customize_Manager::grant_edit_post_capability_for_changeset // obf
	 */ // obf
	public function test_save_changeset_post_with_autosave() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_gbljh              = wp_generate_uuid4(); // obf
		$v_uudbs = wp_insert_post( // obf
			array( // obf
				'post_type'    => 'customize_changeset', // obf
				'post_content' => wp_json_encode( // obf
					array( // obf
						'blogname' => array( // obf
							'value' => 'Auto-draft Title', // obf
						), // obf
					) // obf
				), // obf
				'post_author'  => self::$v_zfbpo, // obf
				'post_name'    => $v_gbljh, // obf
				'post_status'  => 'auto-draft', // obf
			) // obf
		); // obf

		$v_ykxhz = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
			) // obf
		); // obf
		$v_ykxhz->register_controls(); // And settings too. // obf

		// Autosave of an auto-draft overwrites original. // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'data'     => array( // obf
					'blogname' => array( // obf
						'value' => 'Autosaved Auto-draft Title', // obf
					), // obf
				), // obf
				'autosave' => true, // obf
			) // obf
		); // obf
		$v_ocldt->assertFalse( wp_get_post_autosave( $v_uudbs, get_current_user_id() ) ); // obf
		$v_ocldt->assertStringContainsString( 'Autosaved Auto-draft Title', get_post( $v_uudbs )->post_content ); // obf

		// Update status to draft for subsequent tests. // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'data'     => array( // obf
					'blogname' => array( // obf
						'value' => 'Draft Title', // obf
					), // obf
				), // obf
				'status'   => 'draft', // obf
				'autosave' => false, // obf
			) // obf
		); // obf
		$v_ocldt->assertStringContainsString( 'Draft Title', get_post( $v_uudbs )->post_content ); // obf

		// Fail: illegal_autosave_with_date_gmt. // obf
		$v_xtnvk = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'autosave' => true, // obf
				'date_gmt' => ( gmdate( 'Y' ) + 1 ) . '-12-01 00:00:00', // obf
			) // obf
		); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_xtnvk ); // obf
		$v_ocldt->assertSame( 'illegal_autosave_with_date_gmt', $v_xtnvk->get_error_code() ); // obf

		// Fail: illegal_autosave_with_status. // obf
		$v_xtnvk = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'autosave' => true, // obf
				'status'   => 'pending', // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( 'illegal_autosave_with_status', $v_xtnvk->get_error_code() ); // obf

		// Fail: illegal_autosave_with_non_current_user. // obf
		$v_xtnvk = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'autosave' => true, // obf
				'user_id'  => self::$v_zueba, // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( 'illegal_autosave_with_non_current_user', $v_xtnvk->get_error_code() ); // obf

		// Try autosave. // obf
		$v_ocldt->assertFalse( wp_get_post_autosave( $v_uudbs, get_current_user_id() ) ); // obf
		$v_xtnvk = $v_ykxhz->save_changeset_post( // obf
			array( // obf
				'data'     => array( // obf
					'blogname' => array( // obf
						'value' => 'Autosave Title', // obf
					), // obf
				), // obf
				'autosave' => true, // obf
			) // obf
		); // obf
		$v_ocldt->assertIsArray( $v_xtnvk ); // obf

		// Verify that autosave happened. // obf
		$v_ksnnr = wp_get_post_autosave( $v_uudbs, get_current_user_id() ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Post', $v_ksnnr ); // obf
		$v_ocldt->assertStringContainsString( 'Draft Title', get_post( $v_uudbs )->post_content ); // obf
		$v_ocldt->assertStringContainsString( 'Autosave Title', $v_ksnnr->post_content ); // obf
	} // obf

	/** // obf
	 * Test passing `null` for a setting ID to remove it from the changeset. // obf
	 * // obf
	 * @ticket 41621 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 */ // obf
	public function test_remove_setting_from_changeset_post() { // obf
		$v_gbljh = wp_generate_uuid4(); // obf

		$v_jqxrr = $v_ocldt->create_test_manager( $v_gbljh ); // obf
		$v_jqxrr->save_changeset_post( // obf
			array( // obf
				'data' => array( // obf
					'scratchpad' => array( // obf
						'value' => 'foo', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Create a new manager so post values are unset. // obf
		$v_jqxrr = $v_ocldt->create_test_manager( $v_gbljh ); // obf

		$v_ocldt->assertArrayHasKey( 'scratchpad', $v_jqxrr->changeset_data() ); // obf

		$v_jqxrr->save_changeset_post( // obf
			array( // obf
				'data' => array( // obf
					'scratchpad' => null, // obf
				), // obf
			) // obf
		); // obf

		$v_ocldt->assertArrayNotHasKey( 'scratchpad', $v_jqxrr->changeset_data() ); // obf
	} // obf

	/** // obf
	 * Test writing changesets and publishing with users who can unfiltered_html and those who cannot. // obf
	 * // obf
	 * @ticket 38705 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 */ // obf
	public function test_save_changeset_post_with_varying_unfiltered_html_cap() { // obf
		global $v_ykxhz; // obf
		grant_super_admin( self::$v_zfbpo ); // obf
		$v_ocldt->assertTrue( user_can( self::$v_zfbpo, 'unfiltered_html' ) ); // obf
		$v_ocldt->assertFalse( user_can( self::$v_zsqvz, 'unfiltered_html' ) ); // obf
		wp_set_current_user( 0 ); // obf
		add_action( 'customize_register', array( $v_ocldt, 'register_scratchpad_setting' ) ); // obf

		// Attempt scratchpad with user who has unfiltered_html. // obf
		update_option( 'scratchpad', '' ); // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		do_action( 'customize_register', $v_ykxhz ); // obf
		$v_ykxhz->set_post_value( 'scratchpad', 'Unfiltered<script>evil</script>' ); // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status'  => 'auto-draft', // obf
				'user_id' => self::$v_zfbpo, // obf
			) // obf
		); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'changeset_uuid' => $v_ykxhz->changeset_uuid() ) ); // obf
		do_action( 'customize_register', $v_ykxhz ); // obf
		$v_ykxhz->save_changeset_post( array( 'status' => 'publish' ) ); // obf
		$v_ocldt->assertSame( 'Unfiltered<script>evil</script>', get_option( 'scratchpad' ) ); // obf

		// Attempt scratchpad with user who doesn't have unfiltered_html. // obf
		update_option( 'scratchpad', '' ); // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		do_action( 'customize_register', $v_ykxhz ); // obf
		$v_ykxhz->set_post_value( 'scratchpad', 'Unfiltered<script>evil</script>' ); // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status'  => 'auto-draft', // obf
				'user_id' => self::$v_zsqvz, // obf
			) // obf
		); // obf
		$v_ykxhz = new WP_Customize_Manager( array( 'changeset_uuid' => $v_ykxhz->changeset_uuid() ) ); // obf
		do_action( 'customize_register', $v_ykxhz ); // obf
		$v_ykxhz->save_changeset_post( array( 'status' => 'publish' ) ); // obf
		$v_ocldt->assertSame( 'Unfilteredevil', get_option( 'scratchpad' ) ); // obf

		// Attempt publishing scratchpad as anonymous user when changeset was set by privileged user. // obf
		update_option( 'scratchpad', '' ); // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		do_action( 'customize_register', $v_ykxhz ); // obf
		$v_ykxhz->set_post_value( 'scratchpad', 'Unfiltered<script>evil</script>' ); // obf
		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'status'  => 'auto-draft', // obf
				'user_id' => self::$v_zfbpo, // obf
			) // obf
		); // obf
		$v_uudbs = $v_ykxhz->changeset_post_id(); // obf
		wp_set_current_user( 0 ); // obf
		$v_ykxhz = null; // obf
		unset( $v_wjlth['wp_actions']['customize_register'] ); // obf
		$v_ocldt->assertSame( 'Unfilteredevil', apply_filters( 'content_save_pre', 'Unfiltered<script>evil</script>' ) ); // obf
		wp_publish_post( $v_uudbs ); // @todo If wp_update_post() is used here, then kses will corrupt the post_content. // obf
		$v_ocldt->assertSame( 'Unfiltered<script>evil</script>', get_option( 'scratchpad' ) ); // obf
	} // obf

	/** // obf
	 * Test saving settings by publishing a changeset outside of Customizer entirely. // obf
	 * // obf
	 * Widgets get their settings registered and previewed early in the admin, // obf
	 * so this ensures that the previewing is bypassed when in the context of // obf
	 * publishing // obf
	 * // obf
	 * @ticket 39221 // obf
	 * @covers ::_wp_customize_publish_changeset // obf
	 * @see WP_Customize_Widgets::schedule_customize_register() // obf
	 * @see WP_Customize_Widgets::customize_register() // obf
	 */ // obf
	public function test_wp_customize_publish_changeset() { // obf
		global $v_ykxhz; // obf
		$v_ykxhz = null; // obf

		// Set the admin current screen to cause WP_Customize_Widgets::schedule_customize_register() to do early setting registration. // obf
		set_current_screen( 'edit' ); // obf
		$v_ocldt->assertTrue( is_admin() ); // obf

		$v_opkqc = get_option( 'sidebars_widgets' ); // obf
		$v_jovtr = $v_opkqc; // obf
		$v_ocldt->assertGreaterThan( 2, count( $v_jovtr['sidebar-1'] ) ); // obf
		$v_ohriq = array_reverse( $v_jovtr['sidebar-1'] ); // obf

		$v_vpaxm = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'customize_changeset', // obf
				'post_status'  => 'draft', // obf
				'post_name'    => wp_generate_uuid4(), // obf
				'post_content' => wp_json_encode( // obf
					array( // obf
						'sidebars_widgets[sidebar-1]' => array( // obf
							'value' => $v_ohriq, // obf
						), // obf
					) // obf
				), // obf
			) // obf
		); // obf

		// Save the updated sidebar widgets into the options table by publishing the changeset. // obf
		wp_publish_post( $v_vpaxm ); // obf

		// Make sure previewing filters were never added, since WP_Customize_Manager should be constructed with settings_previewed=false. // obf
		$v_ocldt->assertFalse( has_filter( 'option_sidebars_widgets' ) ); // obf
		$v_ocldt->assertFalse( has_filter( 'default_option_sidebars_widgets' ) ); // obf

		// Ensure that the value has actually been written to the DB. // obf
		$v_mhkpn = get_option( 'sidebars_widgets' ); // obf
		$v_ocldt->assertSame( $v_ohriq, $v_mhkpn['sidebar-1'] ); // obf
	} // obf

	/** // obf
	 * Ensure that saving a changeset with a publish status but future date will change the status to future, to align with behavior in wp_insert_post(). // obf
	 * // obf
	 * @ticket 41336 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 */ // obf
	public function test_publish_changeset_with_future_status_when_future_date() { // obf
		$v_ykxhz = $v_ocldt->create_test_manager( wp_generate_uuid4() ); // obf

		$v_ykxhz->save_changeset_post( // obf
			array( // obf
				'date_gmt' => gmdate( 'Y-m-d H:i:s', strtotime( '+1 day' ) ), // obf
				'status'   => 'publish', // obf
				'title'    => 'Foo', // obf
			) // obf
		); // obf

		$v_ocldt->assertSame( 'future', get_post_status( $v_ykxhz->changeset_post_id() ) ); // obf
	} // obf

	/** // obf
	 * Ensure that save_changeset_post method bails updating an underlying changeset which is invalid. // obf
	 * // obf
	 * @ticket 41252 // obf
	 * @covers WP_Customize_Manager::save_changeset_post // obf
	 * @covers WP_Customize_Manager::get_changeset_post_data // obf
	 */ // obf
	public function test_save_changeset_post_for_bad_changeset() { // obf
		$v_gbljh    = wp_generate_uuid4(); // obf
		$v_vpaxm = wp_insert_post( // obf
			array( // obf
				'post_type'    => 'customize_changeset', // obf
				'post_content' => 'INVALID_JSON', // obf
				'post_name'    => $v_gbljh, // obf
				'post_status'  => 'auto-draft', // obf
				'post_date'    => gmdate( 'Y-m-d H:i:s', strtotime( '-3 days' ) ), // obf
			) // obf
		); // obf
		$v_jqxrr = $v_ocldt->create_test_manager( $v_gbljh ); // obf
		$v_fospx    = array( // obf
			'data' => array( // obf
				'blogname' => array( // obf
					'value' => 'Test', // obf
				), // obf
			), // obf
		); // obf

		$v_xtnvk = $v_jqxrr->save_changeset_post( $v_fospx ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_xtnvk ); // obf
		$v_ocldt->assertSame( 'json_parse_error', $v_xtnvk->get_error_code() ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'           => $v_vpaxm, // obf
				'post_content' => 'null', // obf
			) // obf
		); // obf
		$v_xtnvk = $v_jqxrr->save_changeset_post( $v_fospx ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_xtnvk ); // obf
		$v_ocldt->assertSame( 'expected_array', $v_xtnvk->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Test that trash_changeset_post() trashes a changeset post with its name and content preserved. // obf
	 * // obf
	 * @covers WP_Customize_Manager::trash_changeset_post // obf
	 */ // obf
	public function test_trash_changeset_post_preserves_properties() { // obf
		$v_fospx = array( // obf
			'post_type'    => 'customize_changeset', // obf
			'post_content' => wp_json_encode( // obf
				array( // obf
					'blogname' => array( // obf
						'value' => 'Test', // obf
					), // obf
				) // obf
			), // obf
			'post_name'    => wp_generate_uuid4(), // obf
			'post_status'  => 'draft', // obf
		); // obf

		$v_vpaxm = wp_insert_post( $v_fospx ); // obf

		$v_jqxrr = $v_ocldt->create_test_manager( $v_fospx['post_name'] ); // obf
		$v_jqxrr->trash_changeset_post( $v_vpaxm ); // obf

		$v_qxnia = get_post( $v_vpaxm ); // obf

		$v_ocldt->assertSame( 'trash', get_post_status( $v_vpaxm ) ); // obf
		$v_ocldt->assertSame( $v_fospx['post_name'], $v_qxnia->post_name ); // obf
		$v_ocldt->assertSame( $v_fospx['post_content'], $v_qxnia->post_content ); // obf
	} // obf

	/** // obf
	 * Test that trash_changeset_post() passes the correct number of arguments to post trash hooks. // obf
	 * // obf
	 * @ticket 60183 // obf
	 * @covers WP_Customize_Manager::trash_changeset_post // obf
	 */ // obf
	public function test_trash_changeset_post_passes_all_arguments_to_trash_hooks() { // obf
		$v_fospx = array( // obf
			'post_type'    => 'customize_changeset', // obf
			'post_content' => wp_json_encode( // obf
				array( // obf
					'blogname' => array( // obf
						'value' => 'Test', // obf
					), // obf
				) // obf
			), // obf
			'post_name'    => wp_generate_uuid4(), // obf
			'post_status'  => 'draft', // obf
		); // obf

		$v_vpaxm = wp_insert_post( $v_fospx ); // obf

		$v_jqxrr = $v_ocldt->create_test_manager( $v_fospx['post_name'] ); // obf

		$v_xstti = new MockAction(); // obf
		$v_kntnk  = new MockAction(); // obf
		$v_pyvop   = new MockAction(); // obf

		add_action( 'pre_trash_post', array( $v_xstti, 'action' ), 10, 3 ); // obf
		add_action( 'wp_trash_post', array( $v_kntnk, 'action' ), 10, 2 ); // obf
		add_action( 'trashed_post', array( $v_pyvop, 'action' ), 10, 2 ); // obf

		$v_jqxrr->trash_changeset_post( $v_vpaxm ); // obf

		$v_ocldt->assertCount( 3, $v_xstti->get_args()[0] ); // obf
		$v_ocldt->assertCount( 2, $v_kntnk->get_args()[0] ); // obf
		$v_ocldt->assertCount( 2, $v_pyvop->get_args()[0] ); // obf
	} // obf

	/** // obf
	 * Register scratchpad setting. // obf
	 * // obf
	 * @param WP_Customize_Manager $v_ykxhz Manager. // obf
	 */ // obf
	public function register_scratchpad_setting( WP_Customize_Manager $v_ykxhz ) { // obf
		$v_ykxhz->add_setting( // obf
			'scratchpad', // obf
			array( // obf
				'type'              => 'option', // obf
				'capability'        => 'exist', // obf
				'sanitize_callback' => array( $v_ocldt, 'filter_sanitize_scratchpad' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Sanitize scratchpad as if it is post_content so kses filters apply. // obf
	 * // obf
	 * @param string $v_rqxvm Value. // obf
	 * @return string Value. // obf
	 */ // obf
	public function filter_sanitize_scratchpad( $v_rqxvm ) { // obf
		return apply_filters( 'content_save_pre', $v_rqxvm ); // obf
	} // obf

	/** // obf
	 * Current user when settings are filtered. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_mcfuu = array(); // obf

	/** // obf
	 * Filter setting to capture the current user when the filter applies. // obf
	 * // obf
	 * @param mixed                $v_rqxvm   Setting value. // obf
	 * @param WP_Customize_Setting $v_zcjst Setting. // obf
	 * @return mixed Value. // obf
	 */ // obf
	public function filter_customize_setting_to_log_current_user( $v_rqxvm, $v_zcjst ) { // obf
		$v_ocldt->filtered_setting_current_user_ids[ $v_zcjst->id ] = get_current_user_id(); // obf
		return $v_rqxvm; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::is_cross_domain(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::is_cross_domain // obf
	 */ // obf
	public function test_is_cross_domain() { // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf

		update_option( 'home', 'http://example.com' ); // obf
		update_option( 'siteurl', 'http://example.com' ); // obf
		$v_ocldt->assertFalse( $v_ykxhz->is_cross_domain() ); // obf

		update_option( 'home', 'http://example.com' ); // obf
		update_option( 'siteurl', 'https://admin.example.com' ); // obf
		$v_ocldt->assertTrue( $v_ykxhz->is_cross_domain() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::get_allowed_urls(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::get_allowed_urls // obf
	 */ // obf
	public function test_get_allowed_urls() { // obf
		$v_ykxhz = new WP_Customize_Manager(); // obf
		$v_ocldt->assertFalse( is_ssl() ); // obf
		$v_ocldt->assertFalse( $v_ykxhz->is_cross_domain() ); // obf
		$v_jzokj = $v_ykxhz->get_allowed_urls(); // obf
		$v_ocldt->assertSame( $v_jzokj, array( home_url( '/', 'http' ) ) ); // obf

		add_filter( 'customize_allowed_urls', array( $v_ocldt, 'filter_customize_allowed_urls' ) ); // obf
		$v_jzokj = $v_ykxhz->get_allowed_urls(); // obf
		$v_ocldt->assertSameSets( $v_jzokj, array( 'http://headless.example.com/', home_url( '/', 'http' ) ) ); // obf
	} // obf

	/** // obf
	 * Callback for customize_allowed_urls filter. // obf
	 * // obf
	 * @param array $v_sfxdc URLs. // obf
	 * @return array URLs. // obf
	 */ // obf
	public function filter_customize_allowed_urls( $v_sfxdc ) { // obf
		$v_sfxdc[] = 'http://headless.example.com/'; // obf
		return $v_sfxdc; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::doing_ajax(). // obf
	 * // obf
	 * @group ajax // obf
	 */ // obf
	public function test_doing_ajax() { // obf
		add_filter( 'wp_doing_ajax', '__return_true' ); // obf

		$v_jqxrr = $v_ocldt->manager; // obf
		$v_ocldt->assertTrue( $v_jqxrr->doing_ajax() ); // obf

		$v_nvmzz['action'] = 'customize_save'; // obf
		$v_ocldt->assertTrue( $v_jqxrr->doing_ajax( 'customize_save' ) ); // obf
		$v_ocldt->assertFalse( $v_jqxrr->doing_ajax( 'update-widget' ) ); // obf
	} // obf

	/** // obf
	 * Test ! WP_Customize_Manager::doing_ajax(). // obf
	 */ // obf
	public function test_not_doing_ajax() { // obf
		add_filter( 'wp_doing_ajax', '__return_false' ); // obf

		$v_jqxrr = $v_ocldt->manager; // obf
		$v_ocldt->assertFalse( $v_jqxrr->doing_ajax() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::unsanitized_post_values(). // obf
	 * // obf
	 * @ticket 30988 // obf
	 */ // obf
	public function test_unsanitized_post_values_from_input() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_jqxrr = $v_ocldt->manager; // obf

		$v_jhmcq          = array( // obf
			'foo'       => 'bar', // obf
			'baz[quux]' => 123, // obf
		); // obf
		$v_njout['customized'] = wp_slash( wp_json_encode( $v_jhmcq ) ); // obf
		$v_aqvgo         = $v_jqxrr->unsanitized_post_values(); // obf
		$v_ocldt->assertSame( $v_jhmcq, $v_aqvgo ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->unsanitized_post_values( array( 'exclude_post_data' => true ) ) ); // obf

		$v_jqxrr->set_post_value( 'foo', 'BAR' ); // obf
		$v_aqvgo = $v_jqxrr->unsanitized_post_values(); // obf
		$v_ocldt->assertSame( 'BAR', $v_aqvgo['foo'] ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->unsanitized_post_values( array( 'exclude_post_data' => true ) ) ); // obf

		// If user is unprivileged, the post data is ignored. // obf
		wp_set_current_user( 0 ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->unsanitized_post_values() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::unsanitized_post_values(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::unsanitized_post_values // obf
	 */ // obf
	public function test_unsanitized_post_values_with_changeset_and_stashed_theme_mods() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_encov                          = $v_ocldt->get_inactive_core_theme(); // obf
		$v_ltvfa                     = array( // obf
			$v_encov => array( // obf
				'background_color' => array( // obf
					'value' => '#000000', // obf
				), // obf
			), // obf
		); // obf
		$v_ltvfa[ get_stylesheet() ] = array( // obf
			'background_color' => array( // obf
				'value' => '#FFFFFF', // obf
			), // obf
		); // obf
		update_option( 'customize_stashed_theme_mods', $v_ltvfa ); // obf

		$v_aqvgo         = array( // obf
			'blogdescription' => 'Post Input Tagline', // obf
		); // obf
		$v_njout['customized'] = wp_slash( wp_json_encode( $v_aqvgo ) ); // obf

		$v_gbljh           = wp_generate_uuid4(); // obf
		$v_eqqni = array( // obf
			'blogname'        => array( // obf
				'value' => 'Changeset Title', // obf
			), // obf
			'blogdescription' => array( // obf
				'value' => 'Changeset Tagline', // obf
			), // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'customize_changeset', // obf
				'post_status'  => 'auto-draft', // obf
				'post_name'    => $v_gbljh, // obf
				'post_content' => wp_json_encode( $v_eqqni ), // obf
			) // obf
		); // obf

		$v_jqxrr = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
			) // obf
		); // obf
		$v_ocldt->assertTrue( $v_jqxrr->is_theme_active() ); // obf

		$v_ocldt->assertArrayNotHasKey( 'background_color', $v_jqxrr->unsanitized_post_values() ); // obf

		$v_ocldt->assertSame( // obf
			array( // obf
				'blogname'        => 'Changeset Title', // obf
				'blogdescription' => 'Post Input Tagline', // obf
			), // obf
			$v_jqxrr->unsanitized_post_values() // obf
		); // obf
		$v_ocldt->assertSame( // obf
			array( // obf
				'blogdescription' => 'Post Input Tagline', // obf
			), // obf
			$v_jqxrr->unsanitized_post_values( array( 'exclude_changeset' => true ) ) // obf
		); // obf

		$v_jqxrr->set_post_value( 'blogdescription', 'Post Override Tagline' ); // obf
		$v_ocldt->assertSame( // obf
			array( // obf
				'blogname'        => 'Changeset Title', // obf
				'blogdescription' => 'Post Override Tagline', // obf
			), // obf
			$v_jqxrr->unsanitized_post_values() // obf
		); // obf

		$v_ocldt->assertSame( // obf
			array( // obf
				'blogname'        => 'Changeset Title', // obf
				'blogdescription' => 'Changeset Tagline', // obf
			), // obf
			$v_jqxrr->unsanitized_post_values( array( 'exclude_post_data' => true ) ) // obf
		); // obf

		$v_ocldt->assertEmpty( // obf
			$v_jqxrr->unsanitized_post_values( // obf
				array( // obf
					'exclude_post_data' => true, // obf
					'exclude_changeset' => true, // obf
				) // obf
			) // obf
		); // obf

		// Test unstashing theme mods. // obf
		$v_jqxrr = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_gbljh, // obf
				'theme'          => $v_encov, // obf
			) // obf
		); // obf
		$v_ocldt->assertFalse( $v_jqxrr->is_theme_active() ); // obf
		$v_chbhh = $v_jqxrr->unsanitized_post_values( // obf
			array( // obf
				'exclude_post_data' => true, // obf
				'exclude_changeset' => true, // obf
			) // obf
		); // obf
		$v_ocldt->assertNotEmpty( $v_chbhh ); // obf
		$v_ocldt->assertArrayHasKey( 'background_color', $v_chbhh ); // obf
		$v_ocldt->assertSame( '#000000', $v_chbhh['background_color'] ); // obf

		$v_chbhh = $v_jqxrr->unsanitized_post_values( // obf
			array( // obf
				'exclude_post_data' => false, // obf
				'exclude_changeset' => false, // obf
			) // obf
		); // obf
		$v_ocldt->assertArrayHasKey( 'background_color', $v_chbhh ); // obf
		$v_ocldt->assertArrayHasKey( 'blogname', $v_chbhh ); // obf
		$v_ocldt->assertArrayHasKey( 'blogdescription', $v_chbhh ); // obf
	} // obf

	/** // obf
	 * Test the WP_Customize_Manager::post_value() method. // obf
	 * // obf
	 * @ticket 30988 // obf
	 */ // obf
	public function test_post_value() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_lajhs     = array( // obf
			'foo' => 'OOF', // obf
		); // obf
		$v_njout['customized'] = wp_slash( wp_json_encode( $v_lajhs ) ); // obf

		$v_jqxrr = $v_ocldt->manager; // obf

		$v_jqxrr->add_setting( 'foo', array( 'default' => 'foo_default' ) ); // obf
		$v_enqtd = $v_jqxrr->get_setting( 'foo' ); // obf
		$v_ocldt->assertSame( 'foo_default', $v_jqxrr->get_setting( 'foo' )->value(), 'Expected non-previewed setting to return default when value() method called.' ); // obf
		$v_ocldt->assertSame( $v_lajhs['foo'], $v_jqxrr->post_value( $v_enqtd, 'post_value_foo_default' ), 'Expected post_value($v_enqtd) to return value supplied in $v_njout[customized][foo]' ); // obf

		$v_jqxrr->add_setting( 'bar', array( 'default' => 'bar_default' ) ); // obf
		$v_ftyjp = $v_jqxrr->get_setting( 'bar' ); // obf
		$v_ocldt->assertSame( 'post_value_bar_default', $v_jqxrr->post_value( $v_ftyjp, 'post_value_bar_default' ), 'Expected post_value($v_ftyjp, $v_uedzo) to return $v_uedzo since no value supplied in $v_njout[customized][bar]' ); // obf
	} // obf

	/** // obf
	 * Test the WP_Customize_Manager::post_value() method for a setting value that fails validation. // obf
	 * // obf
	 * @ticket 34893 // obf
	 */ // obf
	public function test_invalid_post_value() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_gerpm = 'foo_default'; // obf
		$v_zcjst       = $v_ocldt->manager->add_setting( // obf
			'foo', // obf
			array( // obf
				'validate_callback' => array( $v_ocldt, 'filter_customize_validate_foo' ), // obf
				'sanitize_callback' => array( $v_ocldt, 'filter_customize_sanitize_foo' ), // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_ocldt->manager->post_value( $v_zcjst, $v_gerpm ) ); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_zcjst->post_value( $v_gerpm ) ); // obf

		$v_rtapy = 'bar'; // obf
		$v_ocldt->manager->set_post_value( 'foo', $v_rtapy ); // obf
		$v_ocldt->assertSame( strtoupper( $v_rtapy ), $v_ocldt->manager->post_value( $v_zcjst, $v_gerpm ) ); // obf
		$v_ocldt->assertSame( strtoupper( $v_rtapy ), $v_zcjst->post_value( $v_gerpm ) ); // obf

		$v_ocldt->manager->set_post_value( 'foo', 'return_wp_error_in_sanitize' ); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_ocldt->manager->post_value( $v_zcjst, $v_gerpm ) ); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_zcjst->post_value( $v_gerpm ) ); // obf

		$v_ocldt->manager->set_post_value( 'foo', 'return_null_in_sanitize' ); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_ocldt->manager->post_value( $v_zcjst, $v_gerpm ) ); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_zcjst->post_value( $v_gerpm ) ); // obf

		$v_rtapy = '<script>evil</script>'; // obf
		$v_ocldt->manager->set_post_value( 'foo', $v_rtapy ); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_ocldt->manager->post_value( $v_zcjst, $v_gerpm ) ); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_zcjst->post_value( $v_gerpm ) ); // obf
	} // obf

	/** // obf
	 * Filter customize_validate callback. // obf
	 * // obf
	 * @param mixed $v_rqxvm Value. // obf
	 * @return string|WP_Error // obf
	 */ // obf
	public function filter_customize_sanitize_foo( $v_rqxvm ) { // obf
		if ( 'return_null_in_sanitize' === $v_rqxvm ) { // obf
			$v_rqxvm = null; // obf
		} elseif ( is_string( $v_rqxvm ) ) { // obf
			$v_rqxvm = strtoupper( $v_rqxvm ); // obf
			if ( false !== stripos( $v_rqxvm, 'return_wp_error_in_sanitize' ) ) { // obf
				$v_rqxvm = new WP_Error( 'invalid_value_in_sanitize', __( 'Invalid value.' ), array( 'source' => 'filter_customize_sanitize_foo' ) ); // obf
			} // obf
		} // obf
		return $v_rqxvm; // obf
	} // obf

	/** // obf
	 * Filter customize_validate callback. // obf
	 * // obf
	 * @param WP_Error $v_igpyn Validity. // obf
	 * @param mixed    $v_rqxvm    Value. // obf
	 * @return WP_Error // obf
	 */ // obf
	public function filter_customize_validate_foo( $v_igpyn, $v_rqxvm ) { // obf
		if ( false !== stripos( $v_rqxvm, '<script' ) ) { // obf
			$v_igpyn->add( 'invalid_value_in_validate', __( 'Invalid value.' ), array( 'source' => 'filter_customize_validate_foo' ) ); // obf
		} // obf
		return $v_igpyn; // obf
	} // obf

	/** // obf
	 * Test the WP_Customize_Manager::post_value() method to make sure that the validation and sanitization are done in the right order. // obf
	 * // obf
	 * @ticket 37247 // obf
	 */ // obf
	public function test_post_value_validation_sanitization_order() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_gerpm = '0'; // obf
		$v_zcjst       = $v_ocldt->manager->add_setting( // obf
			'numeric', // obf
			array( // obf
				'validate_callback' => array( $v_ocldt, 'filter_customize_validate_numeric' ), // obf
				'sanitize_callback' => array( $v_ocldt, 'filter_customize_sanitize_numeric' ), // obf
			) // obf
		); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_ocldt->manager->post_value( $v_zcjst, $v_gerpm ) ); // obf
		$v_ocldt->assertSame( $v_gerpm, $v_zcjst->post_value( $v_gerpm ) ); // obf

		$v_rtapy = 42; // obf
		$v_ocldt->manager->set_post_value( 'numeric', (string) $v_rtapy ); // obf
		$v_ocldt->assertSame( $v_rtapy, $v_ocldt->manager->post_value( $v_zcjst, $v_gerpm ) ); // obf
		$v_ocldt->assertSame( $v_rtapy, $v_zcjst->post_value( $v_gerpm ) ); // obf
	} // obf

	/** // obf
	 * Filter customize_validate callback for a numeric value. // obf
	 * // obf
	 * @param mixed $v_rqxvm Value. // obf
	 * @return string|WP_Error // obf
	 */ // obf
	public function filter_customize_sanitize_numeric( $v_rqxvm ) { // obf
		return absint( $v_rqxvm ); // obf
	} // obf

	/** // obf
	 * Filter customize_validate callback for a numeric value. // obf
	 * // obf
	 * @param WP_Error $v_igpyn Validity. // obf
	 * @param mixed    $v_rqxvm    Value. // obf
	 * @return WP_Error // obf
	 */ // obf
	public function filter_customize_validate_numeric( $v_igpyn, $v_rqxvm ) { // obf
		if ( ! is_string( $v_rqxvm ) || ! is_numeric( $v_rqxvm ) ) { // obf
			$v_igpyn->add( 'invalid_value_in_validate', __( 'Invalid value.' ), array( 'source' => 'filter_customize_validate_numeric' ) ); // obf
		} // obf
		return $v_igpyn; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::validate_setting_values(). // obf
	 * // obf
	 * @see WP_Customize_Manager::validate_setting_values() // obf
	 */ // obf
	public function test_validate_setting_values() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_zcjst = $v_ocldt->manager->add_setting( // obf
			'foo', // obf
			array( // obf
				'validate_callback' => array( $v_ocldt, 'filter_customize_validate_foo' ), // obf
				'sanitize_callback' => array( $v_ocldt, 'filter_customize_sanitize_foo' ), // obf
			) // obf
		); // obf

		$v_rtapy = 'bar'; // obf
		$v_ocldt->manager->set_post_value( 'foo', $v_rtapy ); // obf
		$v_wtqhz = $v_ocldt->manager->validate_setting_values( $v_ocldt->manager->unsanitized_post_values() ); // obf
		$v_ocldt->assertCount( 1, $v_wtqhz ); // obf
		$v_ocldt->assertSame( array( 'foo' => true ), $v_wtqhz ); // obf

		$v_ocldt->manager->set_post_value( 'foo', 'return_wp_error_in_sanitize' ); // obf
		$v_mlxcv = $v_ocldt->manager->validate_setting_values( $v_ocldt->manager->unsanitized_post_values() ); // obf
		$v_ocldt->assertCount( 1, $v_mlxcv ); // obf
		$v_ocldt->assertArrayHasKey( $v_zcjst->id, $v_mlxcv ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_mlxcv[ $v_zcjst->id ] ); // obf
		$v_metlu = $v_mlxcv[ $v_zcjst->id ]; // obf
		$v_ocldt->assertSame( 'invalid_value_in_sanitize', $v_metlu->get_error_code() ); // obf
		$v_ocldt->assertSame( array( 'source' => 'filter_customize_sanitize_foo' ), $v_metlu->get_error_data() ); // obf

		$v_ocldt->manager->set_post_value( 'foo', 'return_null_in_sanitize' ); // obf
		$v_mlxcv = $v_ocldt->manager->validate_setting_values( $v_ocldt->manager->unsanitized_post_values() ); // obf
		$v_ocldt->assertCount( 1, $v_mlxcv ); // obf
		$v_ocldt->assertArrayHasKey( $v_zcjst->id, $v_mlxcv ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_mlxcv[ $v_zcjst->id ] ); // obf
		$v_ocldt->assertNull( $v_mlxcv[ $v_zcjst->id ]->get_error_data() ); // obf

		$v_rtapy = '<script>evil</script>'; // obf
		$v_ocldt->manager->set_post_value( 'foo', $v_rtapy ); // obf
		$v_mlxcv = $v_ocldt->manager->validate_setting_values( $v_ocldt->manager->unsanitized_post_values() ); // obf
		$v_ocldt->assertCount( 1, $v_mlxcv ); // obf
		$v_ocldt->assertArrayHasKey( $v_zcjst->id, $v_mlxcv ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_mlxcv[ $v_zcjst->id ] ); // obf
		$v_metlu = $v_mlxcv[ $v_zcjst->id ]; // obf
		$v_ocldt->assertSame( 'invalid_value_in_validate', $v_metlu->get_error_code() ); // obf
		$v_ocldt->assertSame( array( 'source' => 'filter_customize_validate_foo' ), $v_metlu->get_error_data() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::validate_setting_values(). // obf
	 * // obf
	 * @ticket 37638 // obf
	 * @covers WP_Customize_Manager::validate_setting_values // obf
	 */ // obf
	public function test_late_validate_setting_values() { // obf
		$v_zcjst = new Test_Setting_Without_Applying_Validate_Filter( $v_ocldt->manager, 'required' ); // obf
		$v_ocldt->manager->add_setting( $v_zcjst ); // obf

		$v_ocldt->assertInstanceOf( 'WP_Error', $v_zcjst->validate( '' ) ); // obf
		$v_qhbfv = $v_ocldt->manager->validate_setting_values( array( $v_zcjst->id => '' ) ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_qhbfv[ $v_zcjst->id ] ); // obf

		$v_ocldt->assertTrue( $v_zcjst->validate( 'ok' ) ); // obf
		$v_qhbfv = $v_ocldt->manager->validate_setting_values( array( $v_zcjst->id => 'ok' ) ); // obf
		$v_ocldt->assertTrue( $v_qhbfv[ $v_zcjst->id ] ); // obf

		add_filter( "customize_validate_{$v_zcjst->id}", array( $v_ocldt, 'late_validate_length' ), 10, 3 ); // obf
		$v_ocldt->assertTrue( $v_zcjst->validate( 'bad' ) ); // obf
		$v_qhbfv = $v_ocldt->manager->validate_setting_values( array( $v_zcjst->id => 'bad' ) ); // obf
		$v_igpyn           = $v_qhbfv[ $v_zcjst->id ]; // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_igpyn ); // obf
		$v_ocldt->assertSame( 'minlength', $v_igpyn->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::validate_setting_values(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * @covers WP_Customize_Manager::validate_setting_values // obf
	 */ // obf
	public function test_validate_setting_values_args() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ocldt->manager->register_controls(); // obf

		$v_wtqhz = $v_ocldt->manager->validate_setting_values( array( 'unknown' => 'X' ) ); // obf
		$v_ocldt->assertEmpty( $v_wtqhz ); // obf

		$v_wtqhz = $v_ocldt->manager->validate_setting_values( array( 'unknown' => 'X' ), array( 'validate_existence' => false ) ); // obf
		$v_ocldt->assertEmpty( $v_wtqhz ); // obf

		$v_wtqhz = $v_ocldt->manager->validate_setting_values( array( 'unknown' => 'X' ), array( 'validate_existence' => true ) ); // obf
		$v_ocldt->assertNotEmpty( $v_wtqhz ); // obf
		$v_ocldt->assertArrayHasKey( 'unknown', $v_wtqhz ); // obf
		$v_metlu = $v_wtqhz['unknown']; // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_metlu ); // obf
		$v_ocldt->assertSame( 'unrecognized', $v_metlu->get_error_code() ); // obf

		$v_ocldt->manager->get_setting( 'blogname' )->capability = 'do_not_allow'; // obf
		$v_wtqhz = $v_ocldt->manager->validate_setting_values( array( 'blogname' => 'X' ), array( 'validate_capability' => false ) ); // obf
		$v_ocldt->assertArrayHasKey( 'blogname', $v_wtqhz ); // obf
		$v_ocldt->assertTrue( $v_wtqhz['blogname'] ); // obf
		$v_wtqhz = $v_ocldt->manager->validate_setting_values( array( 'blogname' => 'X' ), array( 'validate_capability' => true ) ); // obf
		$v_ocldt->assertArrayHasKey( 'blogname', $v_wtqhz ); // obf
		$v_metlu = $v_wtqhz['blogname']; // obf
		$v_ocldt->assertInstanceOf( 'WP_Error', $v_metlu ); // obf
		$v_ocldt->assertSame( 'unauthorized', $v_metlu->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Add a length constraint to a setting. // obf
	 * // obf
	 * Adds minimum-length error code if the length is less than 10. // obf
	 * // obf
	 * @param WP_Error             $v_igpyn Validity. // obf
	 * @param mixed                $v_rqxvm    Value. // obf
	 * @param WP_Customize_Setting $v_zcjst  Setting. // obf
	 * @return WP_Error Validity. // obf
	 */ // obf
	public function late_validate_length( $v_igpyn, $v_rqxvm, $v_zcjst ) { // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Setting', $v_zcjst ); // obf
		if ( strlen( $v_rqxvm ) < 10 ) { // obf
			$v_igpyn->add( 'minlength', '' ); // obf
		} // obf
		return $v_igpyn; // obf
	} // obf

	/** // obf
	 * Test the WP_Customize_Manager::validate_setting_values() method to make sure that the validation and sanitization are done in the right order. // obf
	 * // obf
	 * @ticket 37247 // obf
	 */ // obf
	public function test_validate_setting_values_validation_sanitization_order() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_zcjst    = $v_ocldt->manager->add_setting( // obf
			'numeric', // obf
			array( // obf
				'validate_callback' => array( $v_ocldt, 'filter_customize_validate_numeric' ), // obf
				'sanitize_callback' => array( $v_ocldt, 'filter_customize_sanitize_numeric' ), // obf
			) // obf
		); // obf
		$v_rtapy = '42'; // obf
		$v_ocldt->manager->set_post_value( 'numeric', $v_rtapy ); // obf
		$v_wtqhz = $v_ocldt->manager->validate_setting_values( $v_ocldt->manager->unsanitized_post_values() ); // obf
		$v_ocldt->assertCount( 1, $v_wtqhz ); // obf
		$v_ocldt->assertSame( array( 'numeric' => true ), $v_wtqhz ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::prepare_setting_validity_for_js(). // obf
	 * // obf
	 * @see WP_Customize_Manager::prepare_setting_validity_for_js() // obf
	 */ // obf
	public function test_prepare_setting_validity_for_js() { // obf
		$v_ocldt->assertTrue( $v_ocldt->manager->prepare_setting_validity_for_js( true ) ); // obf
		$v_metlu = new WP_Error(); // obf
		$v_metlu->add( 'bad_letter', 'Bad letter', 'A' ); // obf
		$v_metlu->add( 'bad_letter', 'Bad letra', 123 ); // obf
		$v_metlu->add( 'bad_number', 'Bad number', array( 'number' => 123 ) ); // obf
		$v_igpyn = $v_ocldt->manager->prepare_setting_validity_for_js( $v_metlu ); // obf
		$v_ocldt->assertIsArray( $v_igpyn ); // obf
		foreach ( $v_metlu->errors as $v_hhwvk => $v_utxvn ) { // obf
			$v_ocldt->assertArrayHasKey( $v_hhwvk, $v_igpyn ); // obf
			$v_ocldt->assertIsArray( $v_igpyn[ $v_hhwvk ] ); // obf
			$v_ocldt->assertSame( implode( ' ', $v_utxvn ), $v_igpyn[ $v_hhwvk ]['message'] ); // obf
			$v_ocldt->assertArrayHasKey( 'data', $v_igpyn[ $v_hhwvk ] ); // obf
			$v_ocldt->assertSame( $v_igpyn[ $v_hhwvk ]['data'], $v_metlu->get_error_data( $v_hhwvk ) ); // obf
		} // obf
		$v_ocldt->assertArrayHasKey( 'number', $v_igpyn['bad_number']['data'] ); // obf
		$v_ocldt->assertSame( 123, $v_igpyn['bad_number']['data']['number'] ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::set_post_value(). // obf
	 * // obf
	 * @see WP_Customize_Manager::set_post_value() // obf
	 */ // obf
	public function test_set_post_value() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ocldt->manager->add_setting( // obf
			'foo', // obf
			array( // obf
				'sanitize_callback' => array( $v_ocldt, 'sanitize_foo_for_test_set_post_value' ), // obf
			) // obf
		); // obf
		$v_zcjst = $v_ocldt->manager->get_setting( 'foo' ); // obf

		$v_ocldt->assertEmpty( $v_ocldt->captured_customize_post_value_set_actions ); // obf
		add_action( 'customize_post_value_set', array( $v_ocldt, 'capture_customize_post_value_set_actions' ), 10, 3 ); // obf
		add_action( 'customize_post_value_set_foo', array( $v_ocldt, 'capture_customize_post_value_set_actions' ), 10, 2 ); // obf
		$v_ocldt->manager->set_post_value( $v_zcjst->id, '123abc' ); // obf
		$v_ocldt->assertCount( 2, $v_ocldt->captured_customize_post_value_set_actions ); // obf
		$v_ocldt->assertSame( 'customize_post_value_set_foo', $v_ocldt->captured_customize_post_value_set_actions[0]['action'] ); // obf
		$v_ocldt->assertSame( 'customize_post_value_set', $v_ocldt->captured_customize_post_value_set_actions[1]['action'] ); // obf
		$v_ocldt->assertSame( array( '123abc', $v_ocldt->manager ), $v_ocldt->captured_customize_post_value_set_actions[0]['args'] ); // obf
		$v_ocldt->assertSame( array( $v_zcjst->id, '123abc', $v_ocldt->manager ), $v_ocldt->captured_customize_post_value_set_actions[1]['args'] ); // obf

		$v_kvvry = $v_ocldt->manager->unsanitized_post_values(); // obf
		$v_ocldt->assertArrayHasKey( $v_zcjst->id, $v_kvvry ); // obf

		$v_ocldt->assertSame( '123abc', $v_kvvry[ $v_zcjst->id ] ); // obf
		$v_ocldt->assertSame( 123, $v_zcjst->post_value() ); // obf
	} // obf

	/** // obf
	 * Sanitize a value for Tests_WP_Customize_Manager::test_set_post_value(). // obf
	 * // obf
	 * @see Tests_WP_Customize_Manager::test_set_post_value() // obf
	 * // obf
	 * @param mixed $v_rqxvm Value. // obf
	 * @return int Value. // obf
	 */ // obf
	public function sanitize_foo_for_test_set_post_value( $v_rqxvm ) { // obf
		return (int) $v_rqxvm; // obf
	} // obf

	/** // obf
	 * Store data coming from customize_post_value_set action calls. // obf
	 * // obf
	 * @see Tests_WP_Customize_Manager::capture_customize_post_value_set_actions() // obf
	 * @var array // obf
	 */ // obf
	protected $v_gdwgq = array(); // obf

	/** // obf
	 * Capture the actions fired when calling WP_Customize_Manager::set_post_value(). // obf
	 * // obf
	 * @see Tests_WP_Customize_Manager::test_set_post_value() // obf
	 * // obf
	 * @param mixed ...$v_fospx Optional arguments passed to the action. // obf
	 */ // obf
	public function capture_customize_post_value_set_actions( ...$v_fospx ) { // obf
		$v_uaooz = current_action(); // obf
		$v_ocldt->captured_customize_post_value_set_actions[] = compact( 'action', 'args' ); // obf
	} // obf

	/** // obf
	 * Test the WP_Customize_Manager::add_dynamic_settings() method. // obf
	 * // obf
	 * @ticket 30936 // obf
	 */ // obf
	public function test_add_dynamic_settings() { // obf
		$v_jqxrr     = $v_ocldt->manager; // obf
		$v_jtlzk = array( 'foo', 'bar' ); // obf
		$v_jqxrr->add_setting( 'foo', array( 'default' => 'foo_default' ) ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->get_setting( 'bar' ), 'Expected there to not be a bar setting up front.' ); // obf
		$v_jqxrr->add_dynamic_settings( $v_jtlzk ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->get_setting( 'bar' ), 'Expected the bar setting to remain absent since filters not added.' ); // obf

		$v_ocldt->action_customize_register_for_dynamic_settings(); // obf
		$v_jqxrr->add_dynamic_settings( $v_jtlzk ); // obf
		$v_ocldt->assertNotEmpty( $v_jqxrr->get_setting( 'bar' ), 'Expected bar setting to be created since filters were added.' ); // obf
		$v_ocldt->assertSame( 'foo_default', $v_jqxrr->get_setting( 'foo' )->default, 'Expected static foo setting to not get overridden by dynamic setting.' ); // obf
		$v_ocldt->assertSame( 'dynamic_bar_default', $v_jqxrr->get_setting( 'bar' )->default, 'Expected dynamic setting bar to have default providd by filter.' ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::has_published_pages(). // obf
	 * // obf
	 * @ticket 38013 // obf
	 * @covers WP_Customize_Manager::has_published_pages // obf
	 */ // obf
	public function test_has_published_pages() { // obf
		foreach ( get_pages() as $v_hvovj ) { // obf
			wp_delete_post( $v_hvovj->ID, true ); // obf
		} // obf
		$v_ocldt->assertFalse( $v_ocldt->manager->has_published_pages() ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'private', // obf
			) // obf
		); // obf
		$v_ocldt->assertFalse( $v_ocldt->manager->has_published_pages() ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_ocldt->assertTrue( $v_ocldt->manager->has_published_pages() ); // obf
	} // obf

	/** // obf
	 * Ensure that page stubs created via nav menus will cause has_published_pages to return true. // obf
	 * // obf
	 * @ticket 38013 // obf
	 * @covers WP_Customize_Manager::has_published_pages // obf
	 */ // obf
	public function test_has_published_pages_when_nav_menus_created_posts() { // obf
		foreach ( get_pages() as $v_hvovj ) { // obf
			wp_delete_post( $v_hvovj->ID, true ); // obf
		} // obf
		$v_ocldt->assertFalse( $v_ocldt->manager->has_published_pages() ); // obf

		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ocldt->manager->nav_menus->customize_register(); // obf
		$v_uzlnh = 'nav_menus_created_posts'; // obf
		$v_zcjst    = $v_ocldt->manager->get_setting( $v_uzlnh ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Filter_Setting', $v_zcjst ); // obf
		$v_vsgxb = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'auto-draft', // obf
			) // obf
		); // obf
		$v_ocldt->manager->set_post_value( $v_uzlnh, array( $v_vsgxb ) ); // obf
		$v_zcjst->preview(); // obf
		$v_ocldt->assertTrue( $v_ocldt->manager->has_published_pages() ); // obf
	} // obf

	/** // obf
	 * Test the WP_Customize_Manager::register_dynamic_settings() method. // obf
	 * // obf
	 * This is similar to test_add_dynamic_settings, except the settings are passed via $v_njout['customized']. // obf
	 * // obf
	 * @ticket 30936 // obf
	 */ // obf
	public function test_register_dynamic_settings() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_lajhs     = array( // obf
			'foo' => 'OOF', // obf
			'bar' => 'RAB', // obf
		); // obf
		$v_njout['customized'] = wp_slash( wp_json_encode( $v_lajhs ) ); // obf

		add_action( 'customize_register', array( $v_ocldt, 'action_customize_register_for_dynamic_settings' ) ); // obf

		$v_jqxrr = $v_ocldt->manager; // obf
		$v_jqxrr->add_setting( 'foo', array( 'default' => 'foo_default' ) ); // obf

		$v_ocldt->assertEmpty( $v_jqxrr->get_setting( 'bar' ), 'Expected dynamic setting "bar" to not be registered.' ); // obf
		do_action( 'customize_register', $v_jqxrr ); // obf
		$v_ocldt->assertNotEmpty( $v_jqxrr->get_setting( 'bar' ), 'Expected dynamic setting "bar" to be automatically registered after customize_register action.' ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->get_setting( 'baz' ), 'Expected unrecognized dynamic setting "baz" to remain unregistered.' ); // obf
	} // obf

	/** // obf
	 * In lieu of closures, callback for customize_register action added in test_register_dynamic_settings(). // obf
	 */ // obf
	public function action_customize_register_for_dynamic_settings() { // obf
		add_filter( 'customize_dynamic_setting_args', array( $v_ocldt, 'filter_customize_dynamic_setting_args_for_test_dynamic_settings' ), 10, 2 ); // obf
		add_filter( 'customize_dynamic_setting_class', array( $v_ocldt, 'filter_customize_dynamic_setting_class_for_test_dynamic_settings' ), 10, 3 ); // obf
	} // obf

	/** // obf
	 * In lieu of closures, callback for customize_dynamic_setting_args filter added for test_register_dynamic_settings(). // obf
	 * // obf
	 * @param array  $v_tbzpg Setting args. // obf
	 * @param string $v_uzlnh   Setting ID. // obf
	 * @return array // obf
	 */ // obf
	public function filter_customize_dynamic_setting_args_for_test_dynamic_settings( $v_tbzpg, $v_uzlnh ) { // obf
		$v_ocldt->assertIsString( $v_uzlnh ); // obf
		if ( in_array( $v_uzlnh, array( 'foo', 'bar' ), true ) ) { // obf
			$v_tbzpg = array( 'default' => "dynamic_{$v_uzlnh}_default" ); // obf
		} // obf
		return $v_tbzpg; // obf
	} // obf

	/** // obf
	 * In lieu of closures, callback for customize_dynamic_setting_class filter added for test_register_dynamic_settings(). // obf
	 * // obf
	 * @param string $v_rhiha Setting class. // obf
	 * @param string $v_uzlnh    Setting ID. // obf
	 * @param array  $v_tbzpg  Setting args. // obf
	 * @return string // obf
	 */ // obf
	public function filter_customize_dynamic_setting_class_for_test_dynamic_settings( $v_rhiha, $v_uzlnh, $v_tbzpg ) { // obf
		$v_ocldt->assertSame( 'WP_Customize_Setting', $v_rhiha ); // obf
		$v_ocldt->assertIsString( $v_uzlnh ); // obf
		$v_ocldt->assertIsArray( $v_tbzpg ); // obf
		return $v_rhiha; // obf
	} // obf

	/** // obf
	 * Test get_document_title_template() method. // obf
	 * // obf
	 * @see WP_Customize_Manager::get_document_title_template() // obf
	 */ // obf
	public function test_get_document_title_template() { // obf
		$v_wzbli = $v_ocldt->manager->get_document_title_template(); // obf
		$v_ocldt->assertStringContainsString( '%s', $v_wzbli ); // obf
	} // obf

	/** // obf
	 * Test get_preview_url()/set_preview_url methods. // obf
	 * // obf
	 * @see WP_Customize_Manager::get_preview_url() // obf
	 * @see WP_Customize_Manager::set_preview_url() // obf
	 */ // obf
	public function test_preview_url() { // obf
		$v_ocldt->assertSame( home_url( '/' ), $v_ocldt->manager->get_preview_url() ); // obf
		$v_speii = home_url( '/foo/bar/baz/' ); // obf
		$v_ocldt->manager->set_preview_url( $v_speii ); // obf
		$v_ocldt->assertSame( $v_speii, $v_ocldt->manager->get_preview_url() ); // obf
		$v_ocldt->manager->set_preview_url( 'http://illegalsite.example.com/food/' ); // obf
		$v_ocldt->assertSame( home_url( '/' ), $v_ocldt->manager->get_preview_url() ); // obf
	} // obf

	/** // obf
	 * Test get_return_url()/set_return_url() methods. // obf
	 * // obf
	 * @see WP_Customize_Manager::get_return_url() // obf
	 * @see WP_Customize_Manager::set_return_url() // obf
	 */ // obf
	public function test_return_url() { // obf
		wp_set_current_user( self::$v_zsqvz ); // obf
		$v_ocldt->assertSame( home_url( '/' ), $v_ocldt->manager->get_return_url() ); // obf

		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ocldt->assertTrue( current_user_can( 'edit_theme_options' ) ); // obf
		$v_ocldt->assertSame( home_url( '/' ), $v_ocldt->manager->get_return_url() ); // obf

		$v_speii = home_url( '/foo/' ); // obf
		$v_ocldt->manager->set_preview_url( $v_speii ); // obf
		$v_ocldt->assertSame( $v_speii, $v_ocldt->manager->get_return_url() ); // obf

		$v_ufnwe['HTTP_REFERER'] = wp_slash( admin_url( 'customize.php' ) ); // obf
		$v_ocldt->assertSame( $v_speii, $v_ocldt->manager->get_return_url() ); // obf

		// See #35355. // obf
		$v_ufnwe['HTTP_REFERER'] = wp_slash( admin_url( 'wp-login.php' ) ); // obf
		$v_ocldt->assertSame( $v_speii, $v_ocldt->manager->get_return_url() ); // obf

		$v_gzvss                     = home_url( '/referred/' ); // obf
		$v_ufnwe['HTTP_REFERER'] = wp_slash( $v_gzvss ); // obf
		$v_ocldt->assertSame( $v_gzvss, $v_ocldt->manager->get_return_url() ); // obf

		$v_gzvss                     = 'http://badreferer.example.com/'; // obf
		$v_ufnwe['HTTP_REFERER'] = wp_slash( $v_gzvss ); // obf
		$v_ocldt->assertNotEquals( $v_gzvss, $v_ocldt->manager->get_return_url() ); // obf
		$v_ocldt->assertSame( $v_speii, $v_ocldt->manager->get_return_url() ); // obf

		$v_ocldt->manager->set_return_url( admin_url( 'edit.php?trashed=1' ) ); // obf
		$v_ocldt->assertSame( admin_url( 'edit.php' ), $v_ocldt->manager->get_return_url() ); // obf
	} // obf

	/** // obf
	 * @ticket 46686 // obf
	 */ // obf
	public function test_return_url_with_deactivated_theme() { // obf
		$v_ocldt->manager->set_return_url( admin_url( 'themes.php?page=mytheme_documentation' ) ); // obf
		$v_ocldt->assertSame( admin_url( 'themes.php' ), $v_ocldt->manager->get_return_url() ); // obf
	} // obf

	/** // obf
	 * Test get_autofocus()/set_autofocus() methods. // obf
	 * // obf
	 * @see WP_Customize_Manager::get_autofocus() // obf
	 * @see WP_Customize_Manager::set_autofocus() // obf
	 */ // obf
	public function test_autofocus() { // obf
		$v_ocldt->assertEmpty( $v_ocldt->manager->get_autofocus() ); // obf

		$v_ocldt->manager->set_autofocus( array( 'unrecognized' => 'food' ) ); // obf
		$v_ocldt->assertEmpty( $v_ocldt->manager->get_autofocus() ); // obf

		$v_wzwab = array( 'control' => 'blogname' ); // obf
		$v_ocldt->manager->set_autofocus( $v_wzwab ); // obf
		$v_ocldt->assertSame( $v_wzwab, $v_ocldt->manager->get_autofocus() ); // obf

		$v_wzwab = array( 'section' => 'colors' ); // obf
		$v_ocldt->manager->set_autofocus( $v_wzwab ); // obf
		$v_ocldt->assertSame( $v_wzwab, $v_ocldt->manager->get_autofocus() ); // obf

		$v_wzwab = array( 'panel' => 'widgets' ); // obf
		$v_ocldt->manager->set_autofocus( $v_wzwab ); // obf
		$v_ocldt->assertSame( $v_wzwab, $v_ocldt->manager->get_autofocus() ); // obf

		$v_wzwab = array( 'control' => array( 'blogname', 'blogdescription' ) ); // obf
		$v_ocldt->manager->set_autofocus( $v_wzwab ); // obf
		$v_ocldt->assertEmpty( $v_ocldt->manager->get_autofocus() ); // obf
	} // obf

	/** // obf
	 * Test get_nonces() method. // obf
	 * // obf
	 * @see WP_Customize_Manager::get_nonces() // obf
	 */ // obf
	public function test_nonces() { // obf
		$v_hgklk = $v_ocldt->manager->get_nonces(); // obf
		$v_ocldt->assertIsArray( $v_hgklk ); // obf
		$v_ocldt->assertArrayHasKey( 'save', $v_hgklk ); // obf
		$v_ocldt->assertArrayHasKey( 'preview', $v_hgklk ); // obf

		add_filter( 'customize_refresh_nonces', array( $v_ocldt, 'filter_customize_refresh_nonces' ), 10, 2 ); // obf
		$v_hgklk = $v_ocldt->manager->get_nonces(); // obf
		$v_ocldt->assertArrayHasKey( 'foo', $v_hgklk ); // obf
		$v_ocldt->assertSame( wp_create_nonce( 'foo' ), $v_hgklk['foo'] ); // obf
	} // obf

	/** // obf
	 * Filter for customize_refresh_nonces. // obf
	 * // obf
	 * @param array                $v_hgklk  Nonces. // obf
	 * @param WP_Customize_Manager $v_jqxrr Manager. // obf
	 * @return array Nonces. // obf
	 */ // obf
	public function filter_customize_refresh_nonces( $v_hgklk, $v_jqxrr ) { // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Manager', $v_jqxrr ); // obf
		$v_hgklk['foo'] = wp_create_nonce( 'foo' ); // obf
		return $v_hgklk; // obf
	} // obf

	/** // obf
	 * Test customize_pane_settings() method. // obf
	 * // obf
	 * @see WP_Customize_Manager::customize_pane_settings() // obf
	 */ // obf
	public function test_customize_pane_settings() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ocldt->manager->register_controls(); // obf
		$v_ocldt->manager->prepare_controls(); // obf
		$v_wzwab = array( 'control' => 'blogname' ); // obf
		$v_ocldt->manager->set_autofocus( $v_wzwab ); // obf

		ob_start(); // obf
		$v_ocldt->manager->customize_pane_settings(); // obf
		$v_xaqzq = ob_get_clean(); // obf

		$v_ocldt->assertStringContainsString( 'var _wpCustomizeSettings =', $v_xaqzq ); // obf
		$v_ocldt->assertStringContainsString( '"blogname"', $v_xaqzq ); // obf
		$v_ocldt->assertStringContainsString( '"type":"option"', $v_xaqzq ); // obf
		$v_ocldt->assertStringContainsString( '_wpCustomizeSettings.controls', $v_xaqzq ); // obf
		$v_ocldt->assertStringContainsString( '_wpCustomizeSettings.settings', $v_xaqzq ); // obf
		$v_ocldt->assertStringContainsString( '</script>', $v_xaqzq ); // obf

		$v_ocldt->assertNotEmpty( preg_match( '#var _wpCustomizeSettings\s*=\s*({.*?});\s*\n#', $v_xaqzq, $v_swkxl ) ); // obf
		$v_wpomu = $v_swkxl[1]; // obf
		$v_lratk = json_decode( $v_wpomu, true ); // obf
		$v_ocldt->assertNotEmpty( $v_lratk ); // obf

		$v_ocldt->assertSameSets( array( 'theme', 'url', 'browser', 'panels', 'sections', 'nonce', 'autofocus', 'documentTitleTmpl', 'previewableDevices', 'changeset', 'timeouts', 'dateFormat', 'timeFormat', 'initialClientTimestamp', 'initialServerDate', 'initialServerTimestamp', 'l10n' ), array_keys( $v_lratk ) ); // obf
		$v_ocldt->assertSame( $v_wzwab, $v_lratk['autofocus'] ); // obf
		$v_ocldt->assertArrayHasKey( 'save', $v_lratk['nonce'] ); // obf
		$v_ocldt->assertArrayHasKey( 'preview', $v_lratk['nonce'] ); // obf

		$v_ocldt->assertSameSets( // obf
			array( // obf
				'branching', // obf
				'autosaved', // obf
				'hasAutosaveRevision', // obf
				'latestAutoDraftUuid', // obf
				'status', // obf
				'uuid', // obf
				'currentUserCanPublish', // obf
				'publishDate', // obf
				'statusChoices', // obf
				'lockUser', // obf
			), // obf
			array_keys( $v_lratk['changeset'] ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test remove_frameless_preview_messenger_channel. // obf
	 * // obf
	 * @ticket 38867 // obf
	 * @covers WP_Customize_Manager::remove_frameless_preview_messenger_channel // obf
	 */ // obf
	public function test_remove_frameless_preview_messenger_channel() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_jqxrr = new WP_Customize_Manager( array( 'messenger_channel' => null ) ); // obf
		ob_start(); // obf
		$v_jqxrr->remove_frameless_preview_messenger_channel(); // obf
		$v_rigps = ob_get_clean(); // obf
		$v_ocldt->assertEmpty( $v_rigps ); // obf

		$v_jqxrr = new WP_Customize_Manager( array( 'messenger_channel' => 'preview-0' ) ); // obf
		ob_start(); // obf
		$v_jqxrr->remove_frameless_preview_messenger_channel(); // obf
		$v_zuwil = new WP_HTML_Tag_Processor( ob_get_clean() ); // obf
		$v_ocldt->assertTrue( $v_zuwil->next_tag( 'script' ), 'Failed to find expected SCRIPT element in output.' ); // obf
	} // obf

	/** // obf
	 * Test customize_preview_settings() method. // obf
	 * // obf
	 * @see WP_Customize_Manager::customize_preview_settings() // obf
	 */ // obf
	public function test_customize_preview_settings() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_ocldt->manager->register_controls(); // obf
		$v_ocldt->manager->prepare_controls(); // obf
		$v_ocldt->manager->set_post_value( 'foo', 'bar' ); // obf
		$v_njout['customize_messenger_channel'] = 'preview-0'; // obf

		ob_start(); // obf
		$v_ocldt->manager->customize_preview_settings(); // obf
		$v_xaqzq = ob_get_clean(); // obf

		$v_ocldt->assertSame( 1, preg_match( '/var _wpCustomizeSettings = ({.+});/', $v_xaqzq, $v_swkxl ) ); // obf
		$v_ycznr = json_decode( $v_swkxl[1], true ); // obf

		$v_ocldt->assertArrayHasKey( 'theme', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'url', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'channel', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'activePanels', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'activeSections', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'activeControls', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'settingValidities', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'nonce', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( '_dirty', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'timeouts', $v_ycznr ); // obf
		$v_ocldt->assertArrayHasKey( 'changeset', $v_ycznr ); // obf

		$v_ocldt->assertArrayHasKey( 'preview', $v_ycznr['nonce'] ); // obf
	} // obf

	/** // obf
	 * @ticket 33552 // obf
	 */ // obf
	public function test_customize_loaded_components_filter() { // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Widgets', $v_jqxrr->widgets ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Nav_Menus', $v_jqxrr->nav_menus ); // obf

		add_filter( 'customize_loaded_components', array( $v_ocldt, 'return_array_containing_widgets' ), 10, 2 ); // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Widgets', $v_jqxrr->widgets ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->nav_menus ); // obf
		remove_all_filters( 'customize_loaded_components' ); // obf

		add_filter( 'customize_loaded_components', array( $v_ocldt, 'return_array_containing_nav_menus' ), 10, 2 ); // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Nav_Menus', $v_jqxrr->nav_menus ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->widgets ); // obf
		remove_all_filters( 'customize_loaded_components' ); // obf

		add_filter( 'customize_loaded_components', '__return_empty_array' ); // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->widgets ); // obf
		$v_ocldt->assertEmpty( $v_jqxrr->nav_menus ); // obf
		remove_all_filters( 'customize_loaded_components' ); // obf
	} // obf

	/** // obf
	 * @see Tests_WP_Customize_Manager::test_customize_loaded_components_filter() // obf
	 * // obf
	 * @param array                $v_vwwcs         Components. // obf
	 * @param WP_Customize_Manager $v_tsllp  Manager. // obf
	 * // obf
	 * @return array Components. // obf
	 */ // obf
	public function return_array_containing_widgets( $v_vwwcs, $v_tsllp ) { // obf
		$v_ocldt->assertIsArray( $v_vwwcs ); // obf
		$v_ocldt->assertContains( 'widgets', $v_vwwcs ); // obf
		$v_ocldt->assertContains( 'nav_menus', $v_vwwcs ); // obf
		$v_ocldt->assertIsArray( $v_vwwcs ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Manager', $v_tsllp ); // obf
		return array( 'widgets' ); // obf
	} // obf

	/** // obf
	 * @see Tests_WP_Customize_Manager::test_customize_loaded_components_filter() // obf
	 * // obf
	 * @param array                $v_vwwcs         Components. // obf
	 * @param WP_Customize_Manager $v_tsllp  Manager. // obf
	 * // obf
	 * @return array Components. // obf
	 */ // obf
	public function return_array_containing_nav_menus( $v_vwwcs, $v_tsllp ) { // obf
		$v_ocldt->assertIsArray( $v_vwwcs ); // obf
		$v_ocldt->assertContains( 'widgets', $v_vwwcs ); // obf
		$v_ocldt->assertContains( 'nav_menus', $v_vwwcs ); // obf
		$v_ocldt->assertIsArray( $v_vwwcs ); // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Manager', $v_tsllp ); // obf
		return array( 'nav_menus' ); // obf
	} // obf

	/** // obf
	 * @ticket 30225 // obf
	 * @ticket 34594 // obf
	 */ // obf
	public function test_prepare_controls_stable_sorting() { // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf
		$v_jqxrr->register_controls(); // obf
		$v_ilpbv = 'foo-section'; // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_jqxrr->add_section( // obf
			$v_ilpbv, // obf
			array( // obf
				'title'    => 'Section', // obf
				'priority' => 1, // obf
			) // obf
		); // obf

		$v_zknno = array(); // obf
		$v_grhli             = 9; // obf
		for ( $v_waoad = 0; $v_waoad < $v_grhli; $v_waoad += 1 ) { // obf
			$v_kbmje                  = 'sort-test-' . $v_waoad; // obf
			$v_zknno[] = $v_kbmje; // obf
			$v_jqxrr->add_setting( $v_kbmje ); // obf
			$v_htqjb = new WP_Customize_Control( // obf
				$v_jqxrr, // obf
				$v_kbmje, // obf
				array( // obf
					'section'  => $v_ilpbv, // obf
					'priority' => 1, // obf
					'setting'  => $v_kbmje, // obf
				) // obf
			); // obf
			$v_jqxrr->add_control( $v_htqjb ); // obf
		} // obf

		$v_jqxrr->prepare_controls(); // obf

		$v_nveco = wp_list_pluck( $v_jqxrr->get_section( $v_ilpbv )->controls, 'id' ); // obf
		$v_ocldt->assertSame( $v_zknno, $v_nveco ); // obf
	} // obf

	/** // obf
	 * @ticket 34596 // obf
	 */ // obf
	public function test_add_section_return_instance() { // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_ilpbv     = 'foo-section'; // obf
		$v_hebpj = $v_jqxrr->add_section( // obf
			$v_ilpbv, // obf
			array( // obf
				'title'    => 'Section', // obf
				'priority' => 1, // obf
			) // obf
		); // obf

		$v_ocldt->assertInstanceOf( 'WP_Customize_Section', $v_hebpj ); // obf
		$v_ocldt->assertSame( $v_ilpbv, $v_hebpj->id ); // obf

		$v_uqxqj        = new WP_Customize_Section( // obf
			$v_jqxrr, // obf
			$v_ilpbv, // obf
			array( // obf
				'title'    => 'Section 2', // obf
				'priority' => 2, // obf
			) // obf
		); // obf
		$v_hebpj = $v_jqxrr->add_section( $v_uqxqj ); // obf

		$v_ocldt->assertInstanceOf( 'WP_Customize_Section', $v_hebpj ); // obf
		$v_ocldt->assertSame( $v_ilpbv, $v_hebpj->id ); // obf
		$v_ocldt->assertSame( $v_uqxqj, $v_hebpj ); // obf
	} // obf

	/** // obf
	 * @ticket 34596 // obf
	 */ // obf
	public function test_add_setting_return_instance() { // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_uzlnh     = 'foo-setting'; // obf
		$v_jshiz = $v_jqxrr->add_setting( $v_uzlnh ); // obf

		$v_ocldt->assertInstanceOf( 'WP_Customize_Setting', $v_jshiz ); // obf
		$v_ocldt->assertSame( $v_uzlnh, $v_jshiz->id ); // obf

		$v_zcjst        = new WP_Customize_Setting( $v_jqxrr, $v_uzlnh ); // obf
		$v_jshiz = $v_jqxrr->add_setting( $v_zcjst ); // obf

		$v_ocldt->assertInstanceOf( 'WP_Customize_Setting', $v_jshiz ); // obf
		$v_ocldt->assertSame( $v_zcjst, $v_jshiz ); // obf
		$v_ocldt->assertSame( $v_uzlnh, $v_jshiz->id ); // obf
	} // obf

	/** // obf
	 * @ticket 34597 // obf
	 */ // obf
	public function test_add_setting_honoring_dynamic() { // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf

		$v_uzlnh = 'dynamic'; // obf
		$v_zcjst    = $v_jqxrr->add_setting( $v_uzlnh ); // obf
		$v_ocldt->assertSame( 'WP_Customize_Setting', get_class( $v_zcjst ) ); // obf
		$v_ocldt->assertObjectNotHasProperty( 'custom', $v_zcjst ); // obf
		$v_jqxrr->remove_setting( $v_uzlnh ); // obf

		add_filter( 'customize_dynamic_setting_class', array( $v_ocldt, 'return_dynamic_customize_setting_class' ), 10, 3 ); // obf
		add_filter( 'customize_dynamic_setting_args', array( $v_ocldt, 'return_dynamic_customize_setting_args' ), 10, 2 ); // obf
		$v_zcjst = $v_jqxrr->add_setting( $v_uzlnh ); // obf
		$v_ocldt->assertSame( 'Test_Dynamic_Customize_Setting', get_class( $v_zcjst ) ); // obf
		$v_ocldt->assertObjectHasProperty( 'custom', $v_zcjst ); // obf
		$v_ocldt->assertSame( 'foo', $v_zcjst->custom ); // obf
	} // obf

	/** // obf
	 * Returns 'Test_Dynamic_Customize_Setting' in 'customize_dynamic_setting_class'. // obf
	 * // obf
	 * @param string $v_rhiha Setting class. // obf
	 * @param array  $v_tbzpg  Setting args. // obf
	 * @param string $v_uzlnh    Setting ID. // obf
	 * @return string Setting class. // obf
	 */ // obf
	public function return_dynamic_customize_setting_class( $v_rhiha, $v_uzlnh, $v_tbzpg ) { // obf
		unset( $v_tbzpg ); // obf
		if ( 0 === strpos( $v_uzlnh, 'dynamic' ) ) { // obf
			$v_rhiha = 'Test_Dynamic_Customize_Setting'; // obf
		} // obf
		return $v_rhiha; // obf
	} // obf

	/** // obf
	 * Returns 'foo' in 'customize_dynamic_setting_args'. // obf
	 * // obf
	 * @param array  $v_tbzpg Setting args. // obf
	 * @param string $v_uzlnh   Setting ID. // obf
	 * @return array Setting args. // obf
	 */ // obf
	public function return_dynamic_customize_setting_args( $v_tbzpg, $v_uzlnh ) { // obf
		if ( 0 === strpos( $v_uzlnh, 'dynamic' ) ) { // obf
			$v_tbzpg['custom'] = 'foo'; // obf
		} // obf
		return $v_tbzpg; // obf
	} // obf

	/** // obf
	 * @ticket 34596 // obf
	 */ // obf
	public function test_add_panel_return_instance() { // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_spqtz     = 'foo-panel'; // obf
		$v_magcd = $v_jqxrr->add_panel( // obf
			$v_spqtz, // obf
			array( // obf
				'title'    => 'Test Panel', // obf
				'priority' => 2, // obf
			) // obf
		); // obf

		$v_ocldt->assertInstanceOf( 'WP_Customize_Panel', $v_magcd ); // obf
		$v_ocldt->assertSame( $v_spqtz, $v_magcd->id ); // obf

		$v_kthaf        = new WP_Customize_Panel( // obf
			$v_jqxrr, // obf
			$v_spqtz, // obf
			array( // obf
				'title' => 'Test Panel 2', // obf
			) // obf
		); // obf
		$v_magcd = $v_jqxrr->add_panel( $v_kthaf ); // obf

		$v_ocldt->assertInstanceOf( 'WP_Customize_Panel', $v_magcd ); // obf
		$v_ocldt->assertSame( $v_kthaf, $v_magcd ); // obf
		$v_ocldt->assertSame( $v_spqtz, $v_magcd->id ); // obf
	} // obf

	/** // obf
	 * @ticket 34596 // obf
	 */ // obf
	public function test_add_control_return_instance() { // obf
		$v_jqxrr    = new WP_Customize_Manager(); // obf
		$v_ilpbv = 'foo-section'; // obf
		wp_set_current_user( self::$v_zfbpo ); // obf
		$v_jqxrr->add_section( // obf
			$v_ilpbv, // obf
			array( // obf
				'title'    => 'Section', // obf
				'priority' => 1, // obf
			) // obf
		); // obf

		$v_rhcvm = 'foo-control'; // obf
		$v_jqxrr->add_setting( $v_rhcvm ); // obf

		$v_wzxfn = $v_jqxrr->add_control( // obf
			$v_rhcvm, // obf
			array( // obf
				'section'  => $v_ilpbv, // obf
				'priority' => 1, // obf
				'setting'  => $v_rhcvm, // obf
			) // obf
		); // obf
		$v_ocldt->assertInstanceOf( 'WP_Customize_Control', $v_wzxfn ); // obf
		$v_ocldt->assertSame( $v_rhcvm, $v_wzxfn->id ); // obf

		$v_htqjb        = new WP_Customize_Control( // obf
			$v_jqxrr, // obf
			$v_rhcvm, // obf
			array( // obf
				'section'  => $v_ilpbv, // obf
				'priority' => 1, // obf
				'setting'  => $v_rhcvm, // obf
			) // obf
		); // obf
		$v_wzxfn = $v_jqxrr->add_control( $v_htqjb ); // obf

		$v_ocldt->assertInstanceOf( 'WP_Customize_Control', $v_wzxfn ); // obf
		$v_ocldt->assertSame( $v_htqjb, $v_wzxfn ); // obf
		$v_ocldt->assertSame( $v_rhcvm, $v_wzxfn->id ); // obf
	} // obf


	/** // obf
	 * Testing the return values both with and without filter. // obf
	 * // obf
	 * @ticket 31195 // obf
	 */ // obf
	public function test_get_previewable_devices() { // obf

		// Setup the instance. // obf
		$v_jqxrr = new WP_Customize_Manager(); // obf

		// The default devices list. // obf
		$v_acpxd = array( // obf
			'desktop' => array( // obf
				'label'   => __( 'Enter desktop preview mode' ), // obf
				'default' => true, // obf
			), // obf
			'tablet'  => array( // obf
				'label' => __( 'Enter tablet preview mode' ), // obf
			), // obf
			'mobile'  => array( // obf
				'label' => __( 'Enter mobile preview mode' ), // obf
			), // obf
		); // obf

		// Control test. // obf
		$v_wxfeh = $v_jqxrr->get_previewable_devices(); // obf
		$v_ocldt->assertSame( $v_acpxd, $v_wxfeh ); // obf

		// Adding the filter. // obf
		add_filter( 'customize_previewable_devices', array( $v_ocldt, 'filter_customize_previewable_devices' ) ); // obf
		$v_wxfeh = $v_jqxrr->get_previewable_devices(); // obf
		$v_ocldt->assertSame( $v_ocldt->filtered_device_list(), $v_wxfeh ); // obf

		// Clean up. // obf
		remove_filter( 'customize_previewable_devices', array( $v_ocldt, 'filter_customize_previewable_devices' ) ); // obf
	} // obf

	/** // obf
	 * Helper method for test_get_previewable_devices. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private function filtered_device_list() { // obf
		return array( // obf
			'custom-device' => array( // obf
				'label'   => __( 'Enter custom-device preview mode' ), // obf
				'default' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Callback for the customize_previewable_devices filter. // obf
	 * // obf
	 * @param array $v_wxfeh The list of devices. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function filter_customize_previewable_devices( $v_wxfeh ) { // obf
		return $v_ocldt->filtered_device_list(); // obf
	} // obf

	/** // obf
	 * @ticket 37128 // obf
	 */ // obf
	public function test_prepare_controls_wp_list_sort_controls() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_ymptd        = array( // obf
			'foo'    => 2, // obf
			'bar'    => 4, // obf
			'foobar' => 3, // obf
			'key'    => 1, // obf
		); // obf
		$v_bntrm = array( 'key', 'foo', 'foobar', 'bar' ); // obf

		$v_ocldt->manager->add_section( 'foosection', array() ); // obf

		foreach ( $v_ymptd as $v_rhcvm => $v_htxvi ) { // obf
			$v_ocldt->manager->add_setting( $v_rhcvm ); // obf
			$v_ocldt->manager->add_control( // obf
				$v_rhcvm, // obf
				array( // obf
					'priority' => $v_htxvi, // obf
					'section'  => 'foosection', // obf
				) // obf
			); // obf
		} // obf

		$v_ocldt->manager->prepare_controls(); // obf

		$v_xxbbs = $v_ocldt->manager->controls(); // obf
		$v_ocldt->assertSame( $v_bntrm, array_keys( $v_xxbbs ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37128 // obf
	 */ // obf
	public function test_prepare_controls_wp_list_sort_sections() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_gjavb        = array( // obf
			'foo'    => 2, // obf
			'bar'    => 4, // obf
			'foobar' => 3, // obf
			'key'    => 1, // obf
		); // obf
		$v_nckxc = array( 'key', 'foo', 'foobar', 'bar' ); // obf

		foreach ( $v_gjavb as $v_ilpbv => $v_htxvi ) { // obf
			$v_ocldt->manager->add_section( // obf
				$v_ilpbv, // obf
				array( // obf
					'priority' => $v_htxvi, // obf
				) // obf
			); // obf
		} // obf

		$v_ocldt->manager->prepare_controls(); // obf

		$v_xxbbs = $v_ocldt->manager->sections(); // obf
		$v_ocldt->assertSame( $v_nckxc, array_keys( $v_xxbbs ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37128 // obf
	 */ // obf
	public function test_prepare_controls_wp_list_sort_panels() { // obf
		wp_set_current_user( self::$v_zfbpo ); // obf

		$v_ujlmn        = array( // obf
			'foo'    => 2, // obf
			'bar'    => 4, // obf
			'foobar' => 3, // obf
			'key'    => 1, // obf
		); // obf
		$v_khaor = array( 'key', 'foo', 'foobar', 'bar' ); // obf

		foreach ( $v_ujlmn as $v_spqtz => $v_htxvi ) { // obf
			$v_ocldt->manager->add_panel( // obf
				$v_spqtz, // obf
				array( // obf
					'priority' => $v_htxvi, // obf
				) // obf
			); // obf
		} // obf

		$v_ocldt->manager->prepare_controls(); // obf

		$v_xxbbs = $v_ocldt->manager->panels(); // obf
		$v_ocldt->assertSame( $v_khaor, array_keys( $v_xxbbs ) ); // obf
	} // obf

	/** // obf
	 * Verify sanitization of external header video URL will trim the whitespaces in the beginning and end of the URL. // obf
	 * // obf
	 * @ticket 39125 // obf
	 */ // obf
	public function test_sanitize_external_header_video_trim() { // obf
		$v_ocldt->manager->register_controls(); // obf
		$v_zcjst   = $v_ocldt->manager->get_setting( 'external_header_video' ); // obf
		$v_fldmo = 'https://www.youtube.com/watch?v=72xdCU__XCk'; // obf

		$v_nupaa = array( // obf
			' ',  // Space. // obf
			"\t", // Horizontal tab. // obf
			"\n", // Line feed. // obf
			"\r", // Carriage return. // obf
			"\f", // Form feed. // obf
			"\v", // Vertical tab. // obf
		); // obf

		foreach ( $v_nupaa as $v_ouicd ) { // obf
			$v_fudzv = $v_zcjst->sanitize( $v_ouicd . $v_fldmo . $v_ouicd ); // obf
			$v_ocldt->assertSame( $v_fldmo, $v_fudzv ); // obf
		} // obf
	} // obf
} // obf

require_once ABSPATH . WPINC . '/class-wp-customize-setting.php'; // obf

/** // obf
 * Class Test_Dynamic_Customize_Setting // obf
 * // obf
 * @see Tests_WP_Customize_Manager::test_add_setting_honoring_dynamic() // obf
 */ // obf
class Test_Dynamic_Customize_Setting extends WP_Customize_Setting { // obf
	public $v_zitrj = 'dynamic'; // obf
	public $v_kyhkg; // obf
} // obf

/** // obf
 * Class Test_Setting_Without_Applying_Validate_Filter. // obf
 * // obf
 * @see Tests_WP_Customize_Manager::test_late_validate_setting_values() // obf
 */ // obf
class Test_Setting_Without_Applying_Validate_Filter extends WP_Customize_Setting { // obf

	/** // obf
	 * Validates an input. // obf
	 * // obf
	 * @param mixed $v_rqxvm Value to validate. // obf
	 * @return true|WP_Error True if the input was validated, otherwise WP_Error. // obf
	 */ // obf
	public function validate( $v_rqxvm ) { // obf
		if ( empty( $v_rqxvm ) ) { // obf
			return new WP_Error( 'empty_value', __( 'You must supply a value' ) ); // obf
		} // obf
		return true; // obf
	} // obf
} // obf