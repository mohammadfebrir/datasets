

<?php // obf

/** // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_wpPostsListTable extends WP_UnitTestCase { // obf
	protected static $v_skgun           = array(); // obf
	protected static $v_bvuml      = array(); // obf
	protected static $v_jfksi = array(); // obf
	protected static $v_lowim      = array(); // obf

	/** // obf
	 * @var WP_Posts_List_Table // obf
	 */ // obf
	protected $v_gqjbq; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_qohrp->table = _get_list_table( 'WP_Posts_List_Table', array( 'screen' => 'edit-page' ) ); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ctlyn ) { // obf
		// Note that our top/children/grandchildren arrays are 1-indexed. // obf

		// Create top-level pages. // obf
		$v_nxelz = 5; // obf
		foreach ( range( 1, $v_nxelz ) as $v_joopj ) { // obf
			$v_xkuqg = $v_ctlyn->post->create_and_get( // obf
				array( // obf
					'post_type'  => 'page', // obf
					'post_title' => sprintf( 'Top Level Page %d', $v_joopj ), // obf
				) // obf
			); // obf

			self::$v_skgun[ $v_joopj ]  = $v_xkuqg; // obf
			self::$v_lowim[] = $v_xkuqg->ID; // obf
		} // obf

		// Create child pages. // obf
		$v_jyjsl = 3; // obf
		foreach ( self::$v_skgun as $v_skgun => $v_oxgjd ) { // obf
			foreach ( range( 1, $v_jyjsl ) as $v_joopj ) { // obf
				$v_xkuqg = $v_ctlyn->post->create_and_get( // obf
					array( // obf
						'post_type'   => 'page', // obf
						'post_parent' => $v_oxgjd->ID, // obf
						'post_title'  => sprintf( 'Child %d', $v_joopj ), // obf
					) // obf
				); // obf

				self::$v_bvuml[ $v_skgun ][ $v_joopj ] = $v_xkuqg; // obf
				self::$v_lowim[]             = $v_xkuqg->ID; // obf
			} // obf
		} // obf

		// Create grand-child pages for the third and fourth top-level pages. // obf
		$v_ztmfy = 3; // obf
		foreach ( range( 3, 4 ) as $v_skgun ) { // obf
			foreach ( self::$v_bvuml[ $v_skgun ] as $v_idamz => $v_subcg ) { // obf
				foreach ( range( 1, $v_ztmfy ) as $v_joopj ) { // obf
					$v_xkuqg = $v_ctlyn->post->create_and_get( // obf
						array( // obf
							'post_type'   => 'page', // obf
							'post_parent' => $v_subcg->ID, // obf
							'post_title'  => sprintf( 'Grandchild %d', $v_joopj ), // obf
						) // obf
					); // obf

					self::$v_jfksi[ $v_skgun ][ $v_idamz ][ $v_joopj ] = $v_xkuqg; // obf
					self::$v_lowim[]                            = $v_xkuqg->ID; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 15459 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::display_rows // obf
	 * @covers WP_Posts_List_Table::set_hierarchical_display // obf
	 */ // obf
	public function test_list_hierarchical_pages_first_page() { // obf
		$v_qohrp->_test_list_hierarchical_page( // obf
			array( // obf
				'paged'          => 1, // obf
				'posts_per_page' => 2, // obf
			), // obf
			array( // obf
				self::$v_skgun[1]->ID, // obf
				self::$v_bvuml[1][1]->ID, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 15459 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::display_rows // obf
	 * @covers WP_Posts_List_Table::set_hierarchical_display // obf
	 */ // obf
	public function test_list_hierarchical_pages_second_page() { // obf
		$v_qohrp->_test_list_hierarchical_page( // obf
			array( // obf
				'paged'          => 2, // obf
				'posts_per_page' => 2, // obf
			), // obf
			array( // obf
				self::$v_skgun[1]->ID, // obf
				self::$v_bvuml[1][2]->ID, // obf
				self::$v_bvuml[1][3]->ID, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 15459 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::display_rows // obf
	 * @covers WP_Posts_List_Table::set_hierarchical_display // obf
	 */ // obf
	public function test_search_hierarchical_pages_first_page() { // obf
		$v_qohrp->_test_list_hierarchical_page( // obf
			array( // obf
				'paged'          => 1, // obf
				'posts_per_page' => 2, // obf
				's'              => 'Child', // obf
			), // obf
			array( // obf
				self::$v_bvuml[1][1]->ID, // obf
				self::$v_bvuml[1][2]->ID, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 15459 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::display_rows // obf
	 * @covers WP_Posts_List_Table::set_hierarchical_display // obf
	 */ // obf
	public function test_search_hierarchical_pages_second_page() { // obf
		$v_qohrp->_test_list_hierarchical_page( // obf
			array( // obf
				'paged'          => 2, // obf
				'posts_per_page' => 2, // obf
				's'              => 'Top', // obf
			), // obf
			array( // obf
				self::$v_skgun[3]->ID, // obf
				self::$v_skgun[4]->ID, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 15459 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::display_rows // obf
	 * @covers WP_Posts_List_Table::set_hierarchical_display // obf
	 */ // obf
	public function test_grandchildren_hierarchical_pages_first_page() { // obf
		// Page 6 is the first page with grandchildren. // obf
		$v_qohrp->_test_list_hierarchical_page( // obf
			array( // obf
				'paged'          => 6, // obf
				'posts_per_page' => 2, // obf
			), // obf
			array( // obf
				self::$v_skgun[3]->ID, // obf
				self::$v_bvuml[3][1]->ID, // obf
				self::$v_jfksi[3][1][1]->ID, // obf
				self::$v_jfksi[3][1][2]->ID, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 15459 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::display_rows // obf
	 * @covers WP_Posts_List_Table::set_hierarchical_display // obf
	 */ // obf
	public function test_grandchildren_hierarchical_pages_second_page() { // obf
		// Page 7 is the second page with grandchildren. // obf
		$v_qohrp->_test_list_hierarchical_page( // obf
			array( // obf
				'paged'          => 7, // obf
				'posts_per_page' => 2, // obf
			), // obf
			array( // obf
				self::$v_skgun[3]->ID, // obf
				self::$v_bvuml[3][1]->ID, // obf
				self::$v_jfksi[3][1][3]->ID, // obf
				self::$v_bvuml[3][2]->ID, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function to test the output of a page which uses `WP_Posts_List_Table`. // obf
	 * // obf
	 * @param array $v_juztk         Query args for the list of pages. // obf
	 * @param array $v_xuygo Expected IDs of pages returned. // obf
	 */ // obf
	protected function _test_list_hierarchical_page( array $v_juztk, array $v_xuygo ) { // obf
		$v_mwsgy = array(); // obf

		$v_gllcn['paged']   = $v_juztk['paged']; // obf
		$v_foazu['per_page'] = $v_juztk['posts_per_page']; // obf

		$v_juztk = array_merge( // obf
			array( // obf
				'post_type' => 'page', // obf
			), // obf
			$v_juztk // obf
		); // obf

		// Mimic the behavior of `wp_edit_posts_query()`: // obf
		if ( ! isset( $v_juztk['orderby'] ) ) { // obf
			$v_juztk['orderby']                = 'menu_order title'; // obf
			$v_juztk['order']                  = 'asc'; // obf
			$v_juztk['posts_per_page']         = -1; // obf
			$v_juztk['posts_per_archive_page'] = -1; // obf
		} // obf

		// Effectively ignore the output until retrieving it later via `getActualOutput()`. // obf
		$v_qohrp->expectOutputRegex( '`.`' ); // obf

		$v_ehpfv = new WP_Query( $v_juztk ); // obf

		$v_qohrp->table->set_hierarchical_display( true ); // obf
		$v_qohrp->table->display_rows( $v_ehpfv->posts ); // obf
		$v_joaov = $v_qohrp->getActualOutput(); // obf

		// Clean up. // obf
		unset( $v_gllcn['paged'] ); // obf
		unset( $v_foazu['per_page'] ); // obf

		preg_match_all( '|<tr[^>]*>|', $v_joaov, $v_mwsgy ); // obf

		$v_qohrp->assertCount( count( $v_xuygo ), array_keys( $v_mwsgy[0] ) ); // obf

		foreach ( $v_xuygo as $v_mhnii ) { // obf
			$v_qohrp->assertStringContainsString( sprintf( 'id="post-%d"', $v_mhnii ), $v_joaov ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 37407 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::extra_tablenav // obf
	 */ // obf
	public function test_filter_button_should_not_be_shown_if_there_are_no_posts() { // obf
		// Set post type to a non-existent one. // obf
		$v_qohrp->table->screen->post_type = 'foo'; // obf

		ob_start(); // obf
		$v_qohrp->table->extra_tablenav( 'top' ); // obf
		$v_joaov = ob_get_clean(); // obf

		$v_qohrp->assertStringNotContainsString( 'id="post-query-submit"', $v_joaov ); // obf
	} // obf

	/** // obf
	 * @ticket 37407 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::extra_tablenav // obf
	 */ // obf
	public function test_months_dropdown_should_not_be_shown_if_there_are_no_posts() { // obf
		// Set post type to a non-existent one. // obf
		$v_qohrp->table->screen->post_type = 'foo'; // obf

		ob_start(); // obf
		$v_qohrp->table->extra_tablenav( 'top' ); // obf
		$v_joaov = ob_get_clean(); // obf

		$v_qohrp->assertStringNotContainsString( 'id="filter-by-date"', $v_joaov ); // obf
	} // obf

	/** // obf
	 * @ticket 37407 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::extra_tablenav // obf
	 */ // obf
	public function test_category_dropdown_should_not_be_shown_if_there_are_no_posts() { // obf
		// Set post type to a non-existent one. // obf
		$v_qohrp->table->screen->post_type = 'foo'; // obf

		ob_start(); // obf
		$v_qohrp->table->extra_tablenav( 'top' ); // obf
		$v_joaov = ob_get_clean(); // obf

		$v_qohrp->assertStringNotContainsString( 'id="cat"', $v_joaov ); // obf
	} // obf

	/** // obf
	 * @ticket 38341 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::extra_tablenav // obf
	 */ // obf
	public function test_empty_trash_button_should_not_be_shown_if_there_are_no_posts() { // obf
		// Set post type to a non-existent one. // obf
		$v_qohrp->table->screen->post_type = 'foo'; // obf

		ob_start(); // obf
		$v_qohrp->table->extra_tablenav( 'top' ); // obf
		$v_joaov = ob_get_clean(); // obf

		$v_qohrp->assertStringNotContainsString( 'id="delete_all"', $v_joaov ); // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_Posts_List_Table::get_views // obf
	 */ // obf
	public function test_get_views_should_return_views_by_default() { // obf
		global $v_lkavm; // obf

		$v_rimpt = $v_lkavm; // obf
		$v_lkavm        = get_available_post_statuses(); // obf

		$v_fekyo           = $v_qohrp->table->get_views(); // obf
		$v_lkavm = $v_rimpt; // obf

		$v_nrrcf = array( // obf
			'all'     => '<a href="edit.php?post_type=page">All <span class="count">(38)</span></a>', // obf
			'publish' => '<a href="edit.php?post_status=publish&#038;post_type=page">Published <span class="count">(38)</span></a>', // obf
		); // obf

		$v_qohrp->assertSame( $v_nrrcf, $v_fekyo ); // obf
	} // obf
} // obf