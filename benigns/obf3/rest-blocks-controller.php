

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Blocks_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 * // obf
 * @covers WP_REST_Blocks_Controller // obf
 * // obf
 * @group restapi-blocks // obf
 * @group restapi // obf
 */ // obf
class REST_Blocks_Controller_Test extends WP_UnitTestCase { // obf

	/** // obf
	 * Our fake block's post ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_mbdze; // obf

	/** // obf
	 * Our fake user IDs, keyed by their role. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_otvkg; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_wfkku Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wfkku ) { // obf
		self::$v_mbdze = wp_insert_post( // obf
			array( // obf
				'post_type'    => 'wp_block', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'My cool block', // obf
				'post_content' => '<!-- wp:paragraph --><p>Hello!</p><!-- /wp:paragraph -->', // obf
			) // obf
		); // obf

		self::$v_otvkg = array( // obf
			'editor'      => $v_wfkku->user->create( array( 'role' => 'editor' ) ), // obf
			'author'      => $v_wfkku->user->create( array( 'role' => 'author' ) ), // obf
			'contributor' => $v_wfkku->user->create( array( 'role' => 'contributor' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Delete our fake data after our tests run. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_mbdze ); // obf

		foreach ( self::$v_otvkg as $v_hwnau ) { // obf
			self::delete_user( $v_hwnau ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test cases for test_capabilities(). // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function data_capabilities() { // obf
		return array( // obf
			array( 'create', 'editor', 201 ), // obf
			array( 'create', 'author', 201 ), // obf
			array( 'create', 'contributor', 403 ), // obf
			array( 'create', null, 401 ), // obf

			array( 'read', 'editor', 200 ), // obf
			array( 'read', 'author', 200 ), // obf
			array( 'read', 'contributor', 200 ), // obf
			array( 'read', null, 401 ), // obf

			array( 'update_delete_own', 'editor', 200 ), // obf
			array( 'update_delete_own', 'author', 200 ), // obf
			array( 'update_delete_own', 'contributor', 403 ), // obf

			array( 'update_delete_others', 'editor', 200 ), // obf
			array( 'update_delete_others', 'author', 403 ), // obf
			array( 'update_delete_others', 'contributor', 403 ), // obf
			array( 'update_delete_others', null, 401 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Exhaustively check that each role either can or cannot create, edit, // obf
	 * update, and delete synced patterns. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @dataProvider data_capabilities // obf
	 * // obf
	 * @param string $v_gshjd          Action to perform in the test. // obf
	 * @param string $v_kktmc            User role to test. // obf
	 * @param int    $v_bzkau Expected HTTP response status. // obf
	 */ // obf
	public function test_capabilities( $v_gshjd, $v_kktmc, $v_bzkau ) { // obf
		if ( $v_kktmc ) { // obf
			$v_hwnau = self::$v_otvkg[ $v_kktmc ]; // obf
			wp_set_current_user( $v_hwnau ); // obf
		} else { // obf
			wp_set_current_user( 0 ); // obf
		} // obf

		switch ( $v_gshjd ) { // obf
			case 'create': // obf
				$v_dvkzg = new WP_REST_Request( 'POST', '/wp/v2/blocks' ); // obf
				$v_dvkzg->set_body_params( // obf
					array( // obf
						'title'   => 'Test', // obf
						'content' => '<!-- wp:paragraph --><p>Test</p><!-- /wp:paragraph -->', // obf
					) // obf
				); // obf

				$v_gjorw = rest_get_server()->dispatch( $v_dvkzg ); // obf
				$v_jmmwd->assertSame( $v_bzkau, $v_gjorw->get_status() ); // obf

				break; // obf

			case 'read': // obf
				$v_dvkzg = new WP_REST_Request( 'GET', '/wp/v2/blocks/' . self::$v_mbdze ); // obf

				$v_gjorw = rest_get_server()->dispatch( $v_dvkzg ); // obf
				$v_jmmwd->assertSame( $v_bzkau, $v_gjorw->get_status() ); // obf

				break; // obf

			case 'update_delete_own': // obf
				$v_mbdze = wp_insert_post( // obf
					array( // obf
						'post_type'    => 'wp_block', // obf
						'post_status'  => 'publish', // obf
						'post_title'   => 'My cool block', // obf
						'post_content' => '<!-- wp:paragraph --><p>Hello!</p><!-- /wp:paragraph -->', // obf
						'post_author'  => $v_hwnau, // obf
					) // obf
				); // obf

				$v_dvkzg = new WP_REST_Request( 'PUT', '/wp/v2/blocks/' . $v_mbdze ); // obf
				$v_dvkzg->set_body_params( // obf
					array( // obf
						'title'   => 'Test', // obf
						'content' => '<!-- wp:paragraph --><p>Test</p><!-- /wp:paragraph -->', // obf
					) // obf
				); // obf

				$v_gjorw = rest_get_server()->dispatch( $v_dvkzg ); // obf
				$v_jmmwd->assertSame( $v_bzkau, $v_gjorw->get_status() ); // obf

				$v_dvkzg = new WP_REST_Request( 'DELETE', '/wp/v2/blocks/' . $v_mbdze ); // obf

				$v_gjorw = rest_get_server()->dispatch( $v_dvkzg ); // obf
				$v_jmmwd->assertSame( $v_bzkau, $v_gjorw->get_status() ); // obf

				wp_delete_post( $v_mbdze ); // obf

				break; // obf

			case 'update_delete_others': // obf
				$v_dvkzg = new WP_REST_Request( 'PUT', '/wp/v2/blocks/' . self::$v_mbdze ); // obf
				$v_dvkzg->set_body_params( // obf
					array( // obf
						'title'   => 'Test', // obf
						'content' => '<!-- wp:paragraph --><p>Test</p><!-- /wp:paragraph -->', // obf
					) // obf
				); // obf

				$v_gjorw = rest_get_server()->dispatch( $v_dvkzg ); // obf
				$v_jmmwd->assertSame( $v_bzkau, $v_gjorw->get_status() ); // obf

				$v_dvkzg = new WP_REST_Request( 'DELETE', '/wp/v2/blocks/' . self::$v_mbdze ); // obf

				$v_gjorw = rest_get_server()->dispatch( $v_dvkzg ); // obf
				$v_jmmwd->assertSame( $v_bzkau, $v_gjorw->get_status() ); // obf

				break; // obf

			default: // obf
				$v_jmmwd->fail( "'$v_gshjd' is not a valid action." ); // obf
		} // obf
	} // obf

	/** // obf
	 * Check that the raw title and content of a block can be accessed when there // obf
	 * is no set schema, and that the rendered content of a block is not included // obf
	 * in the response. // obf
	 */ // obf
	public function test_content() { // obf
		wp_set_current_user( self::$v_otvkg['author'] ); // obf

		$v_dvkzg  = new WP_REST_Request( 'GET', '/wp/v2/blocks/' . self::$v_mbdze ); // obf
		$v_gjorw = rest_get_server()->dispatch( $v_dvkzg ); // obf
		$v_wplrg     = $v_gjorw->get_data(); // obf

		$v_jmmwd->assertSame( // obf
			array( // obf
				'raw' => 'My cool block', // obf
			), // obf
			$v_wplrg['title'] // obf
		); // obf
		$v_jmmwd->assertSame( // obf
			array( // obf
				'raw'       => '<!-- wp:paragraph --><p>Hello!</p><!-- /wp:paragraph -->', // obf
				'protected' => false, // obf
			), // obf
			$v_wplrg['content'] // obf
		); // obf
	} // obf

	/** // obf
	 * Check that the `wp_pattern_sync_status` postmeta is moved from meta array to top // obf
	 * level of response. // obf
	 * // obf
	 * @ticket 58677 // obf
	 */ // obf
	public function test_wp_patterns_sync_status_post_meta() { // obf
		register_post_meta( // obf
			'wp_block', // obf
			'wp_pattern_sync_status', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'string', // obf
						'properties' => array( // obf
							'sync_status' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_otvkg['author'] ); // obf

		$v_dvkzg  = new WP_REST_Request( 'GET', '/wp/v2/blocks/' . self::$v_mbdze ); // obf
		$v_gjorw = rest_get_server()->dispatch( $v_dvkzg ); // obf
		$v_wplrg     = $v_gjorw->get_data(); // obf

		$v_jmmwd->assertArrayHasKey( 'wp_pattern_sync_status', $v_wplrg ); // obf
		$v_jmmwd->assertArrayNotHasKey( 'wp_pattern_sync_status', $v_wplrg['meta'] ); // obf
	} // obf
} // obf