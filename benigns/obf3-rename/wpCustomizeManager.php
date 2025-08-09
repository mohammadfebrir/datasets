

<?php // obf
/** // obf
 * Testing Ajax customize manager functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.3.0 // obf
 * // obf
 * @group ajax // obf
 */ // obf
class Tests_Ajax_wpCustomizeManager extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * Instance of WP_Customize_Manager which is reset for each test. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_oyvez; // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_zcrwq; // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_qunvo; // obf

	/** // obf
	 * Last response parsed. // obf
	 * // obf
	 * @var array|null // obf
	 */ // obf
	protected $v_qndcj; // obf

	/** // obf
	 * Set up before class. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_yqnxy Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_yqnxy ) { // obf
		self::$v_qunvo = $v_yqnxy->user->create( array( 'role' => 'subscriber' ) ); // obf
		self::$v_zcrwq      = $v_yqnxy->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	/** // obf
	 * Set up the test fixture. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_dgnon = array(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Helper to keep it DRY // obf
	 * // obf
	 * @param string $v_erftn Action. // obf
	 */ // obf
	protected function make_ajax_call( $v_erftn ) { // obf
		$v_puvcx->_last_response_parsed = null; // obf
		$v_puvcx->_last_response        = ''; // obf
		try { // obf
			$v_puvcx->_handleAjax( $v_erftn ); // obf
		} catch ( WPAjaxDieContinueException $v_tzepe ) { // obf
			unset( $v_tzepe ); // obf
		} // obf
		if ( $v_puvcx->_last_response ) { // obf
			$v_puvcx->_last_response_parsed = json_decode( $v_puvcx->_last_response, true ); // obf
		} // obf
	} // obf

	/** // obf
	 * Overridden caps for user_has_cap. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_xnuzf = array(); // obf

	/** // obf
	 * Dynamically filter a user's capabilities. // obf
	 * // obf
	 * @param array $v_csaus An array of all the user's capabilities. // obf
	 * @return array All caps. // obf
	 */ // obf
	public function filter_user_has_cap( $v_csaus ) { // obf
		$v_csaus = array_merge( $v_csaus, $v_puvcx->overridden_caps ); // obf
		return $v_csaus; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::save(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * // obf
	 * @covers WP_Customize_Manager::save // obf
	 */ // obf
	public function test_save_failures() { // obf
		global $v_oyvez; // obf
		$v_oyvez = new WP_Customize_Manager(); // obf
		$v_oyvez->register_controls(); // obf
		add_filter( 'user_has_cap', array( $v_puvcx, 'filter_user_has_cap' ) ); // obf

		// Unauthenticated. // obf
		wp_set_current_user( 0 ); // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'unauthenticated', $v_puvcx->_last_response_parsed['data'] ); // obf

		// Unauthorized. // obf
		wp_set_current_user( self::$v_qunvo ); // obf
		$v_elxwa             = wp_create_nonce( 'save-customize_' . $v_oyvez->get_stylesheet() ); // obf
		$v_wlcwe['nonce']    = $v_elxwa; // obf
		$v_tvhya['nonce']     = $v_elxwa; // obf
		$v_dgnon['nonce'] = $v_elxwa; // obf
		$v_tuzju         = null; // obf
		try { // obf
			ob_start(); // obf
			$v_oyvez->setup_theme(); // obf
		} catch ( WPAjaxDieContinueException $v_tzepe ) { // obf
			$v_tuzju = $v_tzepe; // obf
		} // obf
		$v_puvcx->assertNotEmpty( $v_tzepe ); // obf
		$v_puvcx->assertSame( '-1', $v_tzepe->getMessage() ); // obf

		// Not called setup_theme. // obf
		wp_set_current_user( self::$v_zcrwq ); // obf
		$v_elxwa             = wp_create_nonce( 'save-customize_' . $v_oyvez->get_stylesheet() ); // obf
		$v_wlcwe['nonce']    = $v_elxwa; // obf
		$v_tvhya['nonce']     = $v_elxwa; // obf
		$v_dgnon['nonce'] = $v_elxwa; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'not_preview', $v_puvcx->_last_response_parsed['data'] ); // obf

		// Bad nonce. // obf
		$v_wlcwe['nonce']    = 'bad'; // obf
		$v_tvhya['nonce']     = 'bad'; // obf
		$v_dgnon['nonce'] = 'bad'; // obf
		$v_oyvez->setup_theme(); // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'invalid_nonce', $v_puvcx->_last_response_parsed['data'] ); // obf

		// User cannot create. // obf
		$v_elxwa                            = wp_create_nonce( 'save-customize_' . $v_oyvez->get_stylesheet() ); // obf
		$v_wlcwe['nonce']                   = $v_elxwa; // obf
		$v_tvhya['nonce']                    = $v_elxwa; // obf
		$v_dgnon['nonce']                = $v_elxwa; // obf
		$v_xnrln                    = get_post_type_object( 'customize_changeset' ); // obf
		$v_xnrln->cap->create_posts = 'create_customize_changesets'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'cannot_create_changeset_post', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_puvcx->overridden_caps[ $v_xnrln->cap->create_posts ] = true; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_xnrln->cap->create_posts = 'customize'; // Restore. // obf

		// Changeset already published. // obf
		$v_oyvez->set_post_value( 'blogname', 'Hello' ); // obf
		$v_oyvez->save_changeset_post( array( 'status' => 'publish' ) ); // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_already_published', $v_puvcx->_last_response_parsed['data']['code'] ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_oyvez->changeset_post_id(), // obf
				'post_status' => 'auto-draft', // obf
			) // obf
		); // obf

		// User cannot edit. // obf
		$v_xnrln                 = get_post_type_object( 'customize_changeset' ); // obf
		$v_xnrln->cap->edit_post = 'edit_customize_changesets'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'cannot_edit_changeset_post', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_puvcx->overridden_caps[ $v_xnrln->cap->edit_post ] = true; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_xnrln->cap->edit_post = 'customize'; // Restore. // obf

		// Bad customize_changeset_data. // obf
		$v_wlcwe['customize_changeset_data'] = '[MALFORMED]'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'invalid_customize_changeset_data', $v_puvcx->_last_response_parsed['data'] ); // obf

		// Bad customize_changeset_status. // obf
		$v_wlcwe['customize_changeset_data']   = '{}'; // obf
		$v_wlcwe['customize_changeset_status'] = 'unrecognized'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'bad_customize_changeset_status', $v_puvcx->_last_response_parsed['data'] ); // obf

		// Disallowed publish posts if not allowed. // obf
		$v_xnrln                       = get_post_type_object( 'customize_changeset' ); // obf
		$v_xnrln->cap->publish_posts   = 'publish_customize_changesets'; // obf
		$v_wlcwe['customize_changeset_status'] = 'publish'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_publish_unauthorized', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_wlcwe['customize_changeset_status'] = 'future'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_publish_unauthorized', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_xnrln->cap->publish_posts = 'customize'; // Restore. // obf

		// Validate date. // obf
		$v_wlcwe['customize_changeset_status'] = 'draft'; // obf
		$v_wlcwe['customize_changeset_date']   = 'BAD DATE'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'bad_customize_changeset_date', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_wlcwe['customize_changeset_date'] = '2010-01-01 00:00:00'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'not_future_date', $v_puvcx->_last_response_parsed['data']['code'] ); // obf
		$v_wlcwe['customize_changeset_date'] = ( gmdate( 'Y' ) + 1 ) . '-01-01 00:00:00'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_wlcwe['customize_changeset_status'] = 'future'; // obf
		$v_wlcwe['customize_changeset_date']   = '+10 minutes'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'future', get_post_status( $v_oyvez->changeset_post_id() ) ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_oyvez->changeset_post_id(), // obf
				'post_status' => 'auto-draft', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Set up valid user state. // obf
	 * // obf
	 * @param string $v_zlbqm Changeset UUID. // obf
	 * @return WP_Customize_Manager // obf
	 */ // obf
	protected function set_up_valid_state( $v_zlbqm = null ) { // obf
		global $v_oyvez; // obf
		wp_set_current_user( self::$v_zcrwq ); // obf
		$v_oyvez = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_zlbqm, // obf
			) // obf
		); // obf
		$v_oyvez->register_controls(); // obf
		$v_elxwa             = wp_create_nonce( 'save-customize_' . $v_oyvez->get_stylesheet() ); // obf
		$v_wlcwe['nonce']    = $v_elxwa; // obf
		$v_tvhya['nonce']     = $v_elxwa; // obf
		$v_dgnon['nonce'] = $v_elxwa; // obf
		$v_oyvez->setup_theme(); // obf
		return $v_oyvez; // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::save(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * // obf
	 * @covers WP_Customize_Manager::save // obf
	 */ // obf
	public function test_save_success_publish_create() { // obf
		$v_oyvez = $v_puvcx->set_up_valid_state(); // obf

		$v_wlcwe['customize_changeset_status'] = 'publish'; // obf
		$v_wlcwe['customize_changeset_title']  = 'Success Changeset'; // obf
		$v_wlcwe['customize_changeset_data']   = wp_json_encode( // obf
			array( // obf
				'blogname' => array( // obf
					'value' => 'Successful Site Title', // obf
				), // obf
			) // obf
		); // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertIsArray( $v_puvcx->_last_response_parsed['data'] ); // obf

		$v_puvcx->assertSame( 'publish', $v_puvcx->_last_response_parsed['data']['changeset_status'] ); // obf
		$v_puvcx->assertArrayHasKey( 'next_changeset_uuid', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_puvcx->assertTrue( wp_is_uuid( $v_puvcx->_last_response_parsed['data']['next_changeset_uuid'], 4 ) ); // obf
		$v_puvcx->assertSame( 'Success Changeset', get_post( $v_oyvez->changeset_post_id() )->post_title ); // obf
		$v_puvcx->assertSame( 'Successful Site Title', get_option( 'blogname' ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::save(). // obf
	 * // obf
	 * @ticket 30937 // obf
	 * // obf
	 * @covers WP_Customize_Manager::save // obf
	 */ // obf
	public function test_save_success_publish_edit() { // obf
		$v_zlbqm = wp_generate_uuid4(); // obf

		$v_hxilj      = self::factory()->post->create( // obf
			array( // obf
				'post_name'    => $v_zlbqm, // obf
				'post_title'   => 'Original', // obf
				'post_type'    => 'customize_changeset', // obf
				'post_status'  => 'auto-draft', // obf
				'post_content' => wp_json_encode( // obf
					array( // obf
						'blogname' => array( // obf
							'value' => 'New Site Title', // obf
						), // obf
					) // obf
				), // obf
			) // obf
		); // obf
		$v_oyvez = $v_puvcx->set_up_valid_state( $v_zlbqm ); // obf

		$v_wlcwe['customize_changeset_status'] = 'publish'; // obf
		$v_wlcwe['customize_changeset_title']  = 'Published'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertIsArray( $v_puvcx->_last_response_parsed['data'] ); // obf

		$v_puvcx->assertSame( 'publish', $v_puvcx->_last_response_parsed['data']['changeset_status'] ); // obf
		$v_puvcx->assertArrayHasKey( 'next_changeset_uuid', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_puvcx->assertTrue( wp_is_uuid( $v_puvcx->_last_response_parsed['data']['next_changeset_uuid'], 4 ) ); // obf
		$v_puvcx->assertSame( 'New Site Title', get_option( 'blogname' ) ); // obf
		$v_puvcx->assertSame( 'Published', get_post( $v_hxilj )->post_title ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::save(). // obf
	 * // obf
	 * @ticket 38943 // obf
	 * // obf
	 * @covers WP_Customize_Manager::save // obf
	 */ // obf
	public function test_success_save_post_date() { // obf
		$v_zlbqm         = wp_generate_uuid4(); // obf
		$v_hxilj      = self::factory()->post->create( // obf
			array( // obf
				'post_name'    => $v_zlbqm, // obf
				'post_title'   => 'Original', // obf
				'post_type'    => 'customize_changeset', // obf
				'post_status'  => 'auto-draft', // obf
				'post_content' => wp_json_encode( // obf
					array( // obf
						'blogname' => array( // obf
							'value' => 'New Site Title', // obf
						), // obf
					) // obf
				), // obf
			) // obf
		); // obf
		$v_oyvez = $v_puvcx->set_up_valid_state( $v_zlbqm ); // obf

		// Success future schedule date. // obf
		$v_smvum                         = ( gmdate( 'Y' ) + 1 ) . '-01-01 00:00:00'; // obf
		$v_wlcwe['customize_changeset_status'] = 'future'; // obf
		$v_wlcwe['customize_changeset_title']  = 'Future date'; // obf
		$v_wlcwe['customize_changeset_date']   = $v_smvum; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertArrayHasKey( 'changeset_date', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_sfxtx = get_post( $v_hxilj ); // obf
		$v_puvcx->assertSame( $v_smvum, $v_sfxtx->post_date ); // obf

		// Success future changeset change to draft keeping existing date. // obf
		unset( $v_wlcwe['customize_changeset_date'] ); // obf
		$v_wlcwe['customize_changeset_status'] = 'draft'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertArrayNotHasKey( 'changeset_date', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_xavwp = get_post( $v_hxilj ); // obf
		$v_puvcx->assertSame( $v_smvum, $v_xavwp->post_date ); // obf

		// Success if date is not passed with schedule changeset and stored changeset have future date. // obf
		$v_wlcwe['customize_changeset_status'] = 'future'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertArrayHasKey( 'changeset_date', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_sfxtx = get_post( $v_hxilj ); // obf
		$v_puvcx->assertSame( $v_smvum, $v_sfxtx->post_date ); // obf
		// Success if draft with past date. // obf
		$v_ihktd = current_time( 'mysql' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => $v_hxilj, // obf
				'post_status'   => 'draft', // obf
				'post_date'     => $v_ihktd, // obf
				'post_date_gmt' => get_gmt_from_date( $v_ihktd ), // obf
			) // obf
		); // obf

		// Fail if future request and existing date is past. // obf
		$v_wlcwe['customize_changeset_status'] = 'future'; // obf
		unset( $v_wlcwe['customize_changeset_date'] ); // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'not_future_date', $v_puvcx->_last_response_parsed['data']['code'] ); // obf

		// Success publish changeset reset date to current. // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => $v_hxilj, // obf
				'post_status'   => 'future', // obf
				'post_date'     => $v_smvum, // obf
				'post_date_gmt' => get_gmt_from_date( $v_smvum ), // obf
			) // obf
		); // obf
		unset( $v_wlcwe['customize_changeset_date'] ); // obf
		$v_wlcwe['customize_changeset_status'] = 'publish'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertArrayHasKey( 'next_changeset_uuid', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_puvcx->assertTrue( wp_is_uuid( $v_puvcx->_last_response_parsed['data']['next_changeset_uuid'], 4 ) ); // obf
		$v_oymjr = get_post( $v_hxilj ); // obf
		$v_puvcx->assertNotEquals( $v_smvum, $v_oymjr->post_date ); // obf

		// Check response when trying to update an already-published post. // obf
		$v_puvcx->assertSame( 'trash', get_post_status( $v_hxilj ) ); // obf
		$v_wlcwe['customize_changeset_status'] = 'publish'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_already_published', $v_puvcx->_last_response_parsed['data']['code'] ); // obf
		$v_puvcx->assertArrayHasKey( 'next_changeset_uuid', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_puvcx->assertTrue( wp_is_uuid( $v_puvcx->_last_response_parsed['data']['next_changeset_uuid'], 4 ) ); // obf
	} // obf

	/** // obf
	 * Test WP_Customize_Manager::save(). // obf
	 * // obf
	 * @ticket 39896 // obf
	 * // obf
	 * @covers WP_Customize_Manager::save // obf
	 */ // obf
	public function test_save_autosave() { // obf
		$v_zlbqm = wp_generate_uuid4(); // obf

		$v_hxilj = self::factory()->post->create( // obf
			array( // obf
				'post_name'    => $v_zlbqm, // obf
				'post_type'    => 'customize_changeset', // obf
				'post_status'  => 'draft', // obf
				'post_content' => wp_json_encode( // obf
					array( // obf
						'blogname' => array( // obf
							'value' => 'New Site Title', // obf
						), // obf
					) // obf
				), // obf
			) // obf
		); // obf
		$v_puvcx->set_up_valid_state( $v_zlbqm ); // obf

		$v_puvcx->assertFalse( wp_get_post_autosave( $v_hxilj ) ); // obf

		$v_wlcwe['customize_changeset_data'] = wp_json_encode( // obf
			array( // obf
				'blogname' => array( // obf
					'value' => 'Autosaved Site Title', // obf
				), // obf
			) // obf
		); // obf

		$v_wlcwe['customize_changeset_autosave'] = 'on'; // obf
		$v_puvcx->make_ajax_call( 'customize_save' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'draft', $v_puvcx->_last_response_parsed['data']['changeset_status'] ); // obf
		$v_unplz = wp_get_post_autosave( $v_hxilj ); // obf
		$v_puvcx->assertInstanceOf( 'WP_Post', $v_unplz ); // obf

		$v_puvcx->assertStringContainsString( 'New Site Title', get_post( $v_hxilj )->post_content ); // obf
		$v_puvcx->assertStringContainsString( 'Autosaved Site Title', $v_unplz->post_content ); // obf
	} // obf

	/** // obf
	 * Test request for trashing a changeset. // obf
	 * // obf
	 * @ticket 39896 // obf
	 * // obf
	 * @covers WP_Customize_Manager::handle_changeset_trash_request // obf
	 */ // obf
	public function test_handle_changeset_trash_request() { // obf
		$v_zlbqm         = wp_generate_uuid4(); // obf
		$v_oyvez = $v_puvcx->set_up_valid_state( $v_zlbqm ); // obf

		$v_puvcx->make_ajax_call( 'customize_trash' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'invalid_nonce', $v_puvcx->_last_response_parsed['data']['code'] ); // obf

		$v_elxwa             = wp_create_nonce( 'trash_customize_changeset' ); // obf
		$v_wlcwe['nonce']    = $v_elxwa; // obf
		$v_tvhya['nonce']     = $v_elxwa; // obf
		$v_dgnon['nonce'] = $v_elxwa; // obf
		$v_puvcx->make_ajax_call( 'customize_trash' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'non_existent_changeset', $v_puvcx->_last_response_parsed['data']['code'] ); // obf

		$v_oyvez->register_controls(); // And settings too. // obf
		$v_oyvez->set_post_value( 'blogname', 'HELLO' ); // obf
		$v_oyvez->save_changeset_post( // obf
			array( // obf
				'status' => 'save', // obf
			) // obf
		); // obf

		add_filter( 'map_meta_cap', array( $v_puvcx, 'return_do_not_allow' ) ); // obf
		$v_puvcx->make_ajax_call( 'customize_trash' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_trash_unauthorized', $v_puvcx->_last_response_parsed['data']['code'] ); // obf
		remove_filter( 'map_meta_cap', array( $v_puvcx, 'return_do_not_allow' ) ); // obf

		$v_lpcpp  = static::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		$v_sjfst = get_current_user_id(); // obf
		wp_set_current_user( $v_lpcpp ); // obf
		$v_oyvez->set_changeset_lock( $v_oyvez->changeset_post_id() ); // obf
		wp_set_current_user( $v_sjfst ); // obf
		$v_puvcx->make_ajax_call( 'customize_trash' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_locked', $v_puvcx->_last_response_parsed['data']['code'] ); // obf
		delete_post_meta( $v_oyvez->changeset_post_id(), '_edit_lock' ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_oyvez->changeset_post_id(), // obf
				'post_status' => 'trash', // obf
			) // obf
		); // obf
		$v_puvcx->make_ajax_call( 'customize_trash' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_already_trashed', $v_puvcx->_last_response_parsed['data']['code'] ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_oyvez->changeset_post_id(), // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_pvkzc = did_action( 'wp_trash_post' ); // obf
		add_filter( 'pre_trash_post', '__return_false' ); // obf
		$v_puvcx->make_ajax_call( 'customize_trash' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_trash_failure', $v_puvcx->_last_response_parsed['data']['code'] ); // obf
		remove_filter( 'pre_trash_post', '__return_false' ); // obf
		$v_puvcx->assertSame( $v_pvkzc, did_action( 'wp_trash_post' ) ); // obf

		$v_pvkzc = did_action( 'wp_trash_post' ); // obf
		$v_puvcx->assertSame( 'draft', get_post_status( $v_oyvez->changeset_post_id() ) ); // obf
		$v_puvcx->make_ajax_call( 'customize_trash' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'trash', get_post_status( $v_oyvez->changeset_post_id() ) ); // obf
		$v_puvcx->assertSame( $v_pvkzc + 1, did_action( 'wp_trash_post' ) ); // obf
	} // obf

	/** // obf
	 * Return caps array containing 'do_not_allow'. // obf
	 * // obf
	 * @return array Caps. // obf
	 */ // obf
	public function return_do_not_allow() { // obf
		return array( 'do_not_allow' ); // obf
	} // obf

	/** // obf
	 * Test request for dismissing autosave changesets. // obf
	 * // obf
	 * @ticket 39896 // obf
	 * @covers WP_Customize_Manager::handle_dismiss_autosave_or_lock_request // obf
	 * @covers WP_Customize_Manager::dismiss_user_auto_draft_changesets // obf
	 */ // obf
	public function test_handle_dismiss_autosave_or_lock_request() { // obf
		$v_zlbqm          = wp_generate_uuid4(); // obf
		$v_oyvez  = $v_puvcx->set_up_valid_state( $v_zlbqm ); // obf
		$v_gfmrf = get_current_user_id(); // obf

		// Temporarily remove user to test requirement that user is logged in. See #42450. // obf
		wp_set_current_user( 0 ); // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'unauthenticated', $v_puvcx->_last_response_parsed['data'] ); // obf
		wp_set_current_user( $v_gfmrf ); // obf

		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'invalid_nonce', $v_puvcx->_last_response_parsed['data'] ); // obf

		$v_elxwa             = wp_create_nonce( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_wlcwe['nonce']    = $v_elxwa; // obf
		$v_tvhya['nonce']     = $v_elxwa; // obf
		$v_dgnon['nonce'] = $v_elxwa; // obf

		$v_wlcwe['dismiss_lock']    = true; // obf
		$v_tvhya['dismiss_lock']     = true; // obf
		$v_dgnon['dismiss_lock'] = true; // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'no_changeset_to_dismiss_lock', $v_puvcx->_last_response_parsed['data'] ); // obf

		$v_wlcwe['dismiss_autosave']    = true; // obf
		$v_tvhya['dismiss_autosave']     = true; // obf
		$v_dgnon['dismiss_autosave'] = true; // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'no_auto_draft_to_delete', $v_puvcx->_last_response_parsed['data'] ); // obf

		$v_jtggo = self::factory()->user->create(); // obf

		// Create auto-drafts. // obf
		$v_njlsv = array(); // obf
		for ( $v_eysku = 0; $v_eysku < 3; $v_eysku++ ) { // obf
			$v_njlsv[] = self::factory()->post->create( // obf
				array( // obf
					'post_name'    => wp_generate_uuid4(), // obf
					'post_type'    => 'customize_changeset', // obf
					'post_status'  => 'auto-draft', // obf
					'post_author'  => self::$v_zcrwq, // obf
					'post_content' => wp_json_encode( array() ), // obf
				) // obf
			); // obf
		} // obf
		$v_ygyts = array(); // obf
		for ( $v_eysku = 0; $v_eysku < 3; $v_eysku++ ) { // obf
			$v_ygyts[] = self::factory()->post->create( // obf
				array( // obf
					'post_name'    => wp_generate_uuid4(), // obf
					'post_type'    => 'customize_changeset', // obf
					'post_status'  => 'auto-draft', // obf
					'post_author'  => $v_jtggo, // obf
					'post_content' => wp_json_encode( array() ), // obf
				) // obf
			); // obf
		} // obf
		foreach ( array_merge( $v_njlsv, $v_ygyts ) as $v_hxilj ) { // obf
			$v_puvcx->assertFalse( (bool) get_post_meta( $v_hxilj, '_customize_restore_dismissed', true ) ); // obf
		} // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'auto_draft_dismissed', $v_puvcx->_last_response_parsed['data'] ); // obf
		foreach ( $v_njlsv as $v_hxilj ) { // obf
			$v_puvcx->assertSame( 'auto-draft', get_post_status( $v_hxilj ) ); // obf
			$v_puvcx->assertTrue( (bool) get_post_meta( $v_hxilj, '_customize_restore_dismissed', true ) ); // obf
		} // obf
		foreach ( $v_ygyts as $v_hxilj ) { // obf
			$v_puvcx->assertSame( 'auto-draft', get_post_status( $v_hxilj ) ); // obf
			$v_puvcx->assertFalse( (bool) get_post_meta( $v_hxilj, '_customize_restore_dismissed', true ) ); // obf
		} // obf

		// Subsequent test results in none dismissed. // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'no_auto_draft_to_delete', $v_puvcx->_last_response_parsed['data'] ); // obf

		// Save a changeset as a draft. // obf
		$v_bvevk = $v_oyvez->save_changeset_post( // obf
			array( // obf
				'data'   => array( // obf
					'blogname' => array( // obf
						'value' => 'Foo', // obf
					), // obf
				), // obf
				'status' => 'draft', // obf
			) // obf
		); // obf

		$v_wlcwe['dismiss_autosave']    = false; // obf
		$v_tvhya['dismiss_autosave']     = false; // obf
		$v_dgnon['dismiss_autosave'] = false; // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'changeset_lock_dismissed', $v_puvcx->_last_response_parsed['data'] ); // obf

		$v_wlcwe['dismiss_autosave']    = true; // obf
		$v_tvhya['dismiss_autosave']     = true; // obf
		$v_dgnon['dismiss_autosave'] = true; // obf
		$v_puvcx->assertNotWPError( $v_bvevk ); // obf
		$v_puvcx->assertFalse( wp_get_post_autosave( $v_oyvez->changeset_post_id() ) ); // obf
		$v_puvcx->assertStringContainsString( 'Foo', get_post( $v_oyvez->changeset_post_id() )->post_content ); // obf

		// Since no autosave yet, confirm no action. // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'no_autosave_revision_to_delete', $v_puvcx->_last_response_parsed['data'] ); // obf

		// Add the autosave revision. // obf
		$v_bvevk = $v_oyvez->save_changeset_post( // obf
			array( // obf
				'data'     => array( // obf
					'blogname' => array( // obf
						'value' => 'Bar', // obf
					), // obf
				), // obf
				'autosave' => true, // obf
			) // obf
		); // obf
		$v_puvcx->assertNotWPError( $v_bvevk ); // obf
		$v_unplz = wp_get_post_autosave( $v_oyvez->changeset_post_id() ); // obf
		$v_puvcx->assertInstanceOf( 'WP_Post', $v_unplz ); // obf
		$v_puvcx->assertStringContainsString( 'Foo', get_post( $v_oyvez->changeset_post_id() )->post_content ); // obf
		$v_puvcx->assertStringContainsString( 'Bar', $v_unplz->post_content ); // obf

		// Confirm autosave gets deleted. // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertTrue( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'autosave_revision_deleted', $v_puvcx->_last_response_parsed['data'] ); // obf
		$v_puvcx->assertFalse( wp_get_post_autosave( $v_oyvez->changeset_post_id() ) ); // obf

		// Since no autosave yet, confirm no action. // obf
		$v_puvcx->make_ajax_call( 'customize_dismiss_autosave_or_lock' ); // obf
		$v_puvcx->assertFalse( $v_puvcx->_last_response_parsed['success'] ); // obf
		$v_puvcx->assertSame( 'no_autosave_revision_to_delete', $v_puvcx->_last_response_parsed['data'] ); // obf
	} // obf

	/** // obf
	 * Test request for retrieving installed themes. // obf
	 * // obf
	 * @ticket 54549 // obf
	 * @covers WP_Customize_Manager::handle_load_themes_request // obf
	 */ // obf
	public function test_wp_ajax_customize_load_themes_action() { // obf
		$v_imjcl = array( // obf
			'changeset_uuid'     => false, // obf
			'settings_previewed' => true, // obf
			'branching'          => false, // obf
		); // obf
		new WP_Customize_Manager( $v_imjcl ); // obf
		wp_set_current_user( self::$v_zcrwq ); // obf
		$v_elxwa                 = wp_create_nonce( 'switch_themes' ); // obf
		$v_wlcwe['nonce']        = $v_elxwa; // obf
		$v_tvhya['nonce']         = $v_elxwa; // obf
		$v_dgnon['nonce']     = $v_elxwa; // obf
		$v_wlcwe['theme_action'] = 'installed'; // obf
		$v_puvcx->make_ajax_call( 'customize_load_themes' ); // obf
		$v_fgxgo = $v_puvcx->_last_response_parsed; // obf
		$v_puvcx->assertIsArray( $v_fgxgo, 'Response is not an array' ); // obf

		$v_puvcx->assertArrayHasKey( 'success', $v_fgxgo, 'Response must have a "success" key' ); // obf
		$v_puvcx->assertTrue( $v_fgxgo['success'], 'Response was not "success"' ); // obf

		$v_puvcx->assertArrayHasKey( 'data', $v_fgxgo, 'Response must have a "data" key' ); // obf
		$v_puvcx->assertIsArray( $v_fgxgo['data'], 'The response "data" is not an array' ); // obf
		$v_puvcx->assertArrayHasKey( 'themes', $v_fgxgo['data'], 'The response data must have a "themes" key' ); // obf
		$v_puvcx->assertIsArray( $v_fgxgo['data']['themes'], 'Themes data is not an array' ); // obf
		$v_puvcx->assertNotEmpty( $v_fgxgo['data']['themes'], 'Themes data must not be empty' ); // obf

		foreach ( $v_fgxgo['data']['themes'] as $v_dxvfv ) { // obf
			$v_puvcx->assertIsArray( $v_dxvfv, 'Theme is not an array' ); // obf
			$v_puvcx->assertNotEmpty( $v_dxvfv, 'Theme data must not be empty' ); // obf
			$v_puvcx->assertArrayHasKey( 'id', $v_dxvfv, 'Theme data must have an "id" key' ); // obf
			$v_puvcx->assertNotEmpty( $v_dxvfv['id'], 'Theme id cannot be empty' ); // obf

			$v_puvcx->assertArrayHasKey( 'name', $v_dxvfv, 'Theme data must have a "name" key' ); // obf
			$v_puvcx->assertNotEmpty( $v_dxvfv['name'], 'Theme name cannot be empty' ); // obf

			$v_puvcx->assertArrayHasKey( 'blockTheme', $v_dxvfv, 'Themes data must include information about blocks support' ); // obf
		} // obf
	} // obf
} // obf