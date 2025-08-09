

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_termCount extends WP_UnitTestCase { // obf

	/** // obf
	 * Term ID for testing attachment counts. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_wvxov; // obf

	/** // obf
	 * Post IDs of shared posts. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_bwomo; // obf

	/** // obf
	 * Array of tag IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_jhmuv; // obf

	/** // obf
	 * Term ID for testing user counts. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_hroks; // obf

	/** // obf
	 * User ID for testing user counts. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_nrivb; // obf

	/** // obf
	 * Create shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_vvlsz Test suite factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_vvlsz ) { // obf
		$v_iusyh = array( 'publish', 'auto-draft', 'draft', 'private' ); // obf
		foreach ( $v_iusyh as $v_cmdcx ) { // obf
			self::$v_bwomo[ $v_cmdcx ] = $v_vvlsz->post->create( array( 'post_status' => $v_cmdcx ) ); // obf
		} // obf

		// Extra published post. // obf
		self::$v_bwomo['publish_two'] = $v_vvlsz->post->create( array( 'post_status' => 'publish' ) ); // obf

		self::$v_nrivb = $v_vvlsz->user->create( array( 'role' => 'author' ) ); // obf

		self::register_taxonomies(); // obf
		self::$v_wvxov = $v_vvlsz->term->create( array( 'taxonomy' => 'wp_test_tax_counts' ) ); // obf
		self::$v_hroks       = $v_vvlsz->term->create( array( 'taxonomy' => 'wp_test_user_tax_counts' ) ); // obf
		self::$v_jhmuv         = $v_vvlsz->term->create_many( 5 ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		self::register_taxonomies(); // obf
	} // obf

	/** // obf
	 * Register taxonomies used by tests. // obf
	 * // obf
	 * This is called both before class and before each test as the global is // obf
	 * reset in each test's tearDown. // obf
	 */ // obf
	public static function register_taxonomies() { // obf
		register_taxonomy( 'wp_test_tax_counts', array( 'post', 'attachment' ) ); // obf
		register_taxonomy( 'wp_test_user_tax_counts', 'user' ); // obf
	} // obf

	/** // obf
	 * Term counts are incremented when post created. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @dataProvider data_term_count_changes_for_post_statuses // obf
	 * // obf
	 * @param string $v_ejdov New post status. // obf
	 * @param int    $v_ejksq      Expected change. // obf
	 */ // obf
	public function test_term_count_changes_for_post_statuses( $v_ejdov, $v_ejksq ) { // obf
		$v_udupd = get_term( get_option( 'default_category' ) )->count; // obf
		// Do not use shared fixture for this test as it relies on a new post. // obf
		$v_qcaym = self::factory()->post->create( array( 'post_status' => $v_ejdov ) ); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( get_option( 'default_category' ) )->count ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_changes_for_post_statuses. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_ejdov New post status. // obf
	 *     @type int    $v_ejksq      Expected change. // obf
	 * } // obf
	 */ // obf
	public function data_term_count_changes_for_post_statuses() { // obf
		return array( // obf
			// 0. Published post // obf
			array( 'publish', 1 ), // obf
			// 1. Auto draft // obf
			array( 'auto-draft', 0 ), // obf
			// 2. Draft // obf
			array( 'draft', 0 ), // obf
			// 3. Private post // obf
			array( 'private', 0 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Term counts increments correctly when post status becomes published. // obf
	 * // obf
	 * @covers ::wp_publish_post // obf
	 * @covers ::wp_update_term_count // obf
	 * @dataProvider data_term_counts_incremented_on_publish // obf
	 * @ticket 51292 // obf
	 * // obf
	 * @param string $v_rlszn Post status prior to change to publish. // obf
	 * @param int    $v_ejksq               Expected change upon publish. // obf
	 */ // obf
	public function test_term_counts_incremented_on_publish( $v_rlszn, $v_ejksq ) { // obf
		$v_qcaym    = self::$v_bwomo[ $v_rlszn ]; // obf
		$v_udupd = get_term( get_option( 'default_category' ) )->count; // obf

		wp_publish_post( $v_qcaym ); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( get_option( 'default_category' ) )->count ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_changes_for_post_statuses. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_rlszn Post status prior to change to publish. // obf
	 *     @type int    $v_ejksq               Expected change upon publish. // obf
	 * } // obf
	 */ // obf
	public function data_term_counts_incremented_on_publish() { // obf
		return array( // obf
			// 0. Published post // obf
			array( 'publish', 0 ), // obf
			// 1. Auto draft // obf
			array( 'auto-draft', 1 ), // obf
			// 2. Draft // obf
			array( 'draft', 1 ), // obf
			// 3. Private post // obf
			array( 'private', 1 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test post status transition update term counts correctly. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @dataProvider data_term_count_transitions_update_term_counts // obf
	 * // obf
	 * @param string $v_rlszn Post status upon create. // obf
	 * @param string $v_qxoci      Post status after update. // obf
	 * @param int    $v_ejksq               Expected change upon publish. // obf
	 */ // obf
	public function test_term_count_transitions_update_term_counts( $v_rlszn, $v_qxoci, $v_ejksq ) { // obf
		$v_qcaym    = self::$v_bwomo[ $v_rlszn ]; // obf
		$v_udupd = get_term( get_option( 'default_category' ) )->count; // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_qcaym, // obf
				'post_status' => $v_qxoci, // obf
			) // obf
		); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( get_option( 'default_category' ) )->count ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_transitions_update_term_counts. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_rlszn Post status upon create. // obf
	 *     @type string $v_qxoci      Post status after update. // obf
	 *     @type int    $v_ejksq               Expected change upon publish. // obf
	 * } // obf
	 */ // obf
	public function data_term_count_transitions_update_term_counts() { // obf
		return array( // obf
			// 0. Draft -> published post // obf
			array( 'draft', 'publish', 1 ), // obf
			// 1. Auto draft -> published post // obf
			array( 'auto-draft', 'publish', 1 ), // obf
			// 2. Private -> published post // obf
			array( 'private', 'publish', 1 ), // obf
			// 3. Published -> published post // obf
			array( 'publish', 'publish', 0 ), // obf

			// 4. Draft -> private post // obf
			array( 'draft', 'private', 0 ), // obf
			// 5. Auto draft -> private post // obf
			array( 'auto-draft', 'private', 0 ), // obf
			// 6. Private -> private post // obf
			array( 'private', 'private', 0 ), // obf
			// 7. Published -> private post // obf
			array( 'publish', 'private', -1 ), // obf

			// 8. Draft -> draft post // obf
			array( 'draft', 'draft', 0 ), // obf
			// 9. Auto draft -> draft post // obf
			array( 'auto-draft', 'draft', 0 ), // obf
			// 10. Private -> draft post // obf
			array( 'private', 'draft', 0 ), // obf
			// 11. Published -> draft post // obf
			array( 'publish', 'draft', -1 ), // obf
		); // obf
	} // obf

	public function add_custom_status_to_counted_statuses( $v_iusyh ) { // obf
		array_push( $v_iusyh, 'custom' ); // obf
		return $v_iusyh; // obf
	} // obf

	/** // obf
	 * Term counts incremented correctly when the `update_post_term_count_statuses` filter is used. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @dataProvider data_term_count_changes_for_update_post_term_count_statuses_filter // obf
	 * @ticket 38843 // obf
	 * // obf
	 * @param string $v_ejdov New post status. // obf
	 * @param int    $v_ejksq      Expected change. // obf
	 */ // obf
	public function test_term_count_changes_for_update_post_term_count_statuses_filter( $v_ejdov, $v_ejksq ) { // obf
		$v_udupd = get_term( self::$v_wvxov )->count; // obf

		add_filter( 'update_post_term_count_statuses', array( $v_kzmhi, 'add_custom_status_to_counted_statuses' ) ); // obf

		$v_qcaym = self::factory()->post->create( array( 'post_status' => $v_ejdov ) ); // obf
		wp_add_object_terms( $v_qcaym, self::$v_wvxov, 'wp_test_tax_counts' ); // obf
		$v_kbbda = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'        => 'image.jpg', // obf
				'post_parent' => $v_qcaym, // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf
		wp_add_object_terms( $v_kbbda, self::$v_wvxov, 'wp_test_tax_counts' ); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( self::$v_wvxov )->count ); // obf

		remove_filter( 'update_post_term_count_statuses', array( $v_kzmhi, 'add_custom_status_to_counted_statuses' ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_changes_for_update_post_term_count_statuses_filter. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_ejdov New post status. // obf
	 *     @type int    $v_ejksq      Expected change. // obf
	 * } // obf
	 */ // obf
	public function data_term_count_changes_for_update_post_term_count_statuses_filter() { // obf
		return array( // obf
			// 0. Published post // obf
			array( 'publish', 2 ), // obf
			// 1. Auto draft // obf
			array( 'auto-draft', 0 ), // obf
			// 2. Draft // obf
			array( 'draft', 0 ), // obf
			// 3. Private post // obf
			array( 'private', 0 ), // obf
			// 4. Custom post status // obf
			array( 'custom', 2 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Term counts incremented correctly for posts with attachment. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @dataProvider data_term_count_changes_for_post_statuses_with_attachments // obf
	 * // obf
	 * @param string $v_ejdov New post status. // obf
	 * @param int    $v_ejksq      Expected change. // obf
	 */ // obf
	public function test_term_count_changes_for_post_statuses_with_attachments( $v_ejdov, $v_ejksq ) { // obf
		$v_udupd = get_term( self::$v_wvxov )->count; // obf
		// Do not use shared fixture for this test as it relies on a new post. // obf
		$v_qcaym = self::factory()->post->create( array( 'post_status' => $v_ejdov ) ); // obf
		wp_add_object_terms( $v_qcaym, self::$v_wvxov, 'wp_test_tax_counts' ); // obf
		$v_kbbda = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'        => 'image.jpg', // obf
				'post_parent' => $v_qcaym, // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf
		wp_add_object_terms( $v_kbbda, self::$v_wvxov, 'wp_test_tax_counts' ); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( self::$v_wvxov )->count ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_changes_for_post_statuses_with_attachments. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_ejdov New post status. // obf
	 *     @type int    $v_ejksq      Expected change. // obf
	 * } // obf
	 */ // obf
	public function data_term_count_changes_for_post_statuses_with_attachments() { // obf
		return array( // obf
			// 0. Published post // obf
			array( 'publish', 2 ), // obf
			// 1. Auto draft // obf
			array( 'auto-draft', 0 ), // obf
			// 2. Draft // obf
			array( 'draft', 0 ), // obf
			// 3. Private post // obf
			array( 'private', 0 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Term counts increments correctly when post with attachment becomes published. // obf
	 * // obf
	 * @covers ::wp_publish_post // obf
	 * @covers ::wp_update_term_count // obf
	 * @dataProvider data_term_counts_incremented_on_publish_with_attachments // obf
	 * @ticket 51292 // obf
	 * // obf
	 * @param string $v_rlszn Post status prior to change to publish. // obf
	 * @param int    $v_ejksq               Expected change upon publish. // obf
	 */ // obf
	public function test_term_counts_incremented_on_publish_with_attachments( $v_rlszn, $v_ejksq ) { // obf
		$v_qcaym = self::$v_bwomo[ $v_rlszn ]; // obf
		wp_add_object_terms( $v_qcaym, self::$v_wvxov, 'wp_test_tax_counts' ); // obf
		$v_kbbda = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'        => 'image.jpg', // obf
				'post_parent' => $v_qcaym, // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf
		wp_add_object_terms( $v_kbbda, self::$v_wvxov, 'wp_test_tax_counts' ); // obf
		$v_udupd = get_term( self::$v_wvxov )->count; // obf

		wp_publish_post( $v_qcaym ); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( self::$v_wvxov )->count ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_changes_for_post_statuses_with_attachments. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_rlszn Post status prior to change to publish. // obf
	 *     @type int    $v_ejksq               Expected change upon publish. // obf
	 * } // obf
	 */ // obf
	public function data_term_counts_incremented_on_publish_with_attachments() { // obf
		return array( // obf
			// 0. Published post // obf
			array( 'publish', 0 ), // obf
			// 1. Auto draft // obf
			array( 'auto-draft', 2 ), // obf
			// 2. Draft // obf
			array( 'draft', 2 ), // obf
			// 3. Private post // obf
			array( 'private', 2 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test post status transition update term counts correctly for posts with attachments. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @dataProvider data_term_count_transitions_update_term_counts_with_attachments // obf
	 * // obf
	 * @param string $v_rlszn Post status upon create. // obf
	 * @param string $v_qxoci      Post status after update. // obf
	 * @param int    $v_ejksq               Expected change upon publish. // obf
	 */ // obf
	public function test_term_count_transitions_update_term_counts_with_attachments( $v_rlszn, $v_qxoci, $v_ejksq ) { // obf
		$v_qcaym = self::$v_bwomo[ $v_rlszn ]; // obf
		wp_add_object_terms( $v_qcaym, self::$v_wvxov, 'wp_test_tax_counts' ); // obf
		$v_kbbda = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'        => 'image.jpg', // obf
				'post_parent' => $v_qcaym, // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf
		wp_add_object_terms( $v_kbbda, self::$v_wvxov, 'wp_test_tax_counts' ); // obf
		$v_udupd = get_term( self::$v_wvxov )->count; // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_qcaym, // obf
				'post_status' => $v_qxoci, // obf
			) // obf
		); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( self::$v_wvxov )->count ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_transitions_update_term_counts_with_attachments. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_rlszn Post status upon create. // obf
	 *     @type string $v_qxoci      Post status after update. // obf
	 *     @type int    $v_ejksq               Expected change upon publish. // obf
	 * } // obf
	 */ // obf
	public function data_term_count_transitions_update_term_counts_with_attachments() { // obf
		return array( // obf
			// 0. Draft -> published post // obf
			array( 'draft', 'publish', 2 ), // obf
			// 1. Auto draft -> published post // obf
			array( 'auto-draft', 'publish', 2 ), // obf
			// 2. Private -> published post // obf
			array( 'private', 'publish', 2 ), // obf
			// 3. Published -> published post // obf
			array( 'publish', 'publish', 0 ), // obf

			// 4. Draft -> private post // obf
			array( 'draft', 'private', 0 ), // obf
			// 5. Auto draft -> private post // obf
			array( 'auto-draft', 'private', 0 ), // obf
			// 6. Private -> private post // obf
			array( 'private', 'private', 0 ), // obf
			// 7. Published -> private post // obf
			array( 'publish', 'private', -2 ), // obf

			// 8. Draft -> draft post // obf
			array( 'draft', 'draft', 0 ), // obf
			// 9. Auto draft -> draft post // obf
			array( 'auto-draft', 'draft', 0 ), // obf
			// 10. Private -> draft post // obf
			array( 'private', 'draft', 0 ), // obf
			// 11. Published -> draft post // obf
			array( 'publish', 'draft', -2 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Term counts increments correctly when post with attachment becomes published. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @covers ::wp_publish_post // obf
	 * @dataProvider data_term_counts_incremented_on_publish_with_untermed_attachments // obf
	 * @ticket 51292 // obf
	 * // obf
	 * @param string $v_rlszn Post status prior to change to publish. // obf
	 * @param int    $v_ejksq               Expected change upon publish. // obf
	 */ // obf
	public function test_term_counts_incremented_on_publish_with_untermed_attachments( $v_rlszn, $v_ejksq ) { // obf
		$v_qcaym = self::$v_bwomo[ $v_rlszn ]; // obf
		wp_add_object_terms( $v_qcaym, self::$v_wvxov, 'wp_test_tax_counts' ); // obf
		$v_kbbda = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'        => 'image.jpg', // obf
				'post_parent' => $v_qcaym, // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf
		$v_udupd    = get_term( self::$v_wvxov )->count; // obf

		wp_publish_post( $v_qcaym ); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( self::$v_wvxov )->count ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_changes_for_post_statuses_with_untermed_attachments. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_rlszn Post status prior to change to publish. // obf
	 *     @type int    $v_ejksq               Expected change upon publish. // obf
	 * } // obf
	 */ // obf
	public function data_term_counts_incremented_on_publish_with_untermed_attachments() { // obf
		return array( // obf
			// 0. Published post // obf
			array( 'publish', 0 ), // obf
			// 1. Auto draft // obf
			array( 'auto-draft', 1 ), // obf
			// 2. Draft // obf
			array( 'draft', 1 ), // obf
			// 3. Private post // obf
			array( 'private', 1 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test post status transition update term counts correctly on post with attachment. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @dataProvider data_term_count_transitions_update_term_counts_with_untermed_attachments // obf
	 * // obf
	 * @param string $v_rlszn Post status upon create. // obf
	 * @param string $v_qxoci      Post status after update. // obf
	 * @param int    $v_ejksq               Expected change upon publish. // obf
	 */ // obf
	public function test_term_count_transitions_update_term_counts_with_untermed_attachments( $v_rlszn, $v_qxoci, $v_ejksq ) { // obf
		$v_qcaym = self::$v_bwomo[ $v_rlszn ]; // obf
		wp_add_object_terms( $v_qcaym, self::$v_wvxov, 'wp_test_tax_counts' ); // obf
		$v_kbbda = self::factory()->attachment->create_object( // obf
			array( // obf
				'file'        => 'image.jpg', // obf
				'post_parent' => $v_qcaym, // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf
		$v_udupd    = get_term( self::$v_wvxov )->count; // obf

		wp_update_post( // obf
			array( // obf
				'ID'          => $v_qcaym, // obf
				'post_status' => $v_qxoci, // obf
			) // obf
		); // obf

		$v_jpufm = $v_udupd + $v_ejksq; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( self::$v_wvxov )->count ); // obf
	} // obf

	/** // obf
	 * Data provider for test_term_count_transitions_update_term_counts_with_untermed_attachments. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_rlszn Post status upon create. // obf
	 *     @type string $v_qxoci      Post status after update. // obf
	 *     @type int    $v_ejksq               Expected change upon publish. // obf
	 * } // obf
	 */ // obf
	public function data_term_count_transitions_update_term_counts_with_untermed_attachments() { // obf
		return array( // obf
			// 0. Draft -> published post // obf
			array( 'draft', 'publish', 1 ), // obf
			// 1. Auto draft -> published post // obf
			array( 'auto-draft', 'publish', 1 ), // obf
			// 2. Private -> published post // obf
			array( 'private', 'publish', 1 ), // obf
			// 3. Published -> published post // obf
			array( 'publish', 'publish', 0 ), // obf

			// 4. Draft -> private post // obf
			array( 'draft', 'private', 0 ), // obf
			// 5. Auto draft -> private post // obf
			array( 'auto-draft', 'private', 0 ), // obf
			// 6. Private -> private post // obf
			array( 'private', 'private', 0 ), // obf
			// 7. Published -> private post // obf
			array( 'publish', 'private', -1 ), // obf

			// 8. Draft -> draft post // obf
			array( 'draft', 'draft', 0 ), // obf
			// 9. Auto draft -> draft post // obf
			array( 'auto-draft', 'draft', 0 ), // obf
			// 10. Private -> draft post // obf
			array( 'private', 'draft', 0 ), // obf
			// 11. Published -> draft post // obf
			array( 'publish', 'draft', -1 ), // obf
		); // obf
	} // obf

	/** // obf
	 * User taxonomy term counts increments when added to an account. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @ticket 51292 // obf
	 */ // obf
	public function test_term_counts_user_adding_term() { // obf
		$v_udupd = get_term( self::$v_hroks )->count; // obf
		wp_add_object_terms( self::$v_nrivb, self::$v_hroks, 'wp_test_user_tax_counts' ); // obf

		$v_jpufm = $v_udupd + 1; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( self::$v_hroks )->count ); // obf
	} // obf

	/** // obf
	 * User taxonomy term counts decrement when term deleted from user. // obf
	 * // obf
	 * @covers ::wp_update_term_count // obf
	 * @ticket 51292 // obf
	 */ // obf
	public function test_term_counts_user_removing_term() { // obf
		wp_add_object_terms( self::$v_nrivb, self::$v_hroks, 'wp_test_user_tax_counts' ); // obf
		$v_udupd = get_term( self::$v_hroks )->count; // obf

		wp_remove_object_terms( self::$v_nrivb, self::$v_hroks, 'wp_test_user_tax_counts' ); // obf
		$v_jpufm = $v_udupd - 1; // obf
		$v_kzmhi->assertSame( $v_jpufm, get_term( self::$v_hroks )->count ); // obf
	} // obf
} // obf