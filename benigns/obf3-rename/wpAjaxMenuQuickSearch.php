

<?php // obf

/** // obf
 * @group menu // obf
 */ // obf
class Tests_Menu_WpAjaxMenuQuickSearch extends WP_UnitTestCase { // obf

	/** // obf
	 * Test search returns results for pages. // obf
	 * // obf
	 * @ticket 27042 // obf
	 */ // obf
	public function test_search_returns_results_for_pages() { // obf
		require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf

		self::factory()->post->create_many( // obf
			3, // obf
			array( // obf
				'post_type'    => 'page', // obf
				'post_content' => 'foo', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'page', // obf
				'post_content' => 'bar', // obf
			) // obf
		); // obf

		$v_mctml = array( // obf
			'type'            => 'quick-search-posttype-page', // obf
			'q'               => 'foo', // obf
			'response-format' => 'json', // obf
		); // obf

		$v_tryyf = get_echo( '_wp_ajax_menu_quick_search', array( $v_mctml ) ); // obf
		$v_tsmyk->assertNotEmpty( $v_tryyf ); // obf

		$v_mlysa = explode( "\n", trim( $v_tryyf ) ); // obf
		$v_tsmyk->assertCount( 3, $v_mlysa ); // obf
	} // obf

	/** // obf
	 * Test that search only returns results for published posts. // obf
	 * // obf
	 * @ticket 33742 // obf
	 */ // obf
	public function test_search_returns_results_for_published_posts() { // obf
		require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf

		// This will make sure that WP_Query sets is_admin to true. // obf
		set_current_screen( 'nav-menu.php' ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'Publish', // obf
				'post_content' => 'FOO', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'draft', // obf
				'post_title'   => 'Draft', // obf
				'post_content' => 'FOO', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'pending', // obf
				'post_title'   => 'Pending', // obf
				'post_content' => 'FOO', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'future', // obf
				'post_title'   => 'Future', // obf
				'post_content' => 'FOO', // obf
				'post_date'    => gmdate( 'Y-m-d H:i:s', strtotime( '+1 month' ) ), // obf
			) // obf
		); // obf

		$v_mctml = array( // obf
			'type' => 'quick-search-posttype-post', // obf
			'q'    => 'FOO', // obf
		); // obf
		$v_tryyf  = get_echo( '_wp_ajax_menu_quick_search', array( $v_mctml ) ); // obf

		$v_tsmyk->assertNotEmpty( $v_tryyf ); // obf
		$v_mlysa = explode( "\n", trim( $v_tryyf ) ); // obf
		$v_tsmyk->assertCount( 1, $v_mlysa ); // obf
	} // obf

	/** // obf
	 * Test that search displays terms that are not assigned to any posts. // obf
	 * // obf
	 * @ticket 45298 // obf
	 */ // obf
	public function test_search_should_return_unassigned_term_items() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foobar', // obf
			) // obf
		); // obf

		$v_mctml = array( // obf
			'type' => 'quick-search-taxonomy-wptests_tax', // obf
			'q'    => 'foobar', // obf
		); // obf
		$v_tryyf  = get_echo( '_wp_ajax_menu_quick_search', array( $v_mctml ) ); // obf

		$v_tsmyk->assertNotEmpty( $v_tryyf ); // obf
		$v_mlysa = explode( "\n", trim( $v_tryyf ) ); // obf
		$v_tsmyk->assertCount( 1, $v_mlysa ); // obf
	} // obf
} // obf