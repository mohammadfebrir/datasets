

<?php // obf

/** // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_wpCommentsListTable extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP_Comments_List_Table // obf
	 */ // obf
	protected $v_npcpb; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_fudlf->table = _get_list_table( 'WP_Comments_List_Table', array( 'screen' => 'edit-comments' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40188 // obf
	 * // obf
	 * @covers WP_Comments_List_Table::extra_tablenav // obf
	 */ // obf
	public function test_filter_button_should_not_be_shown_if_there_are_no_comments() { // obf
		ob_start(); // obf
		$v_fudlf->table->extra_tablenav( 'top' ); // obf
		$v_xhiwk = ob_get_clean(); // obf

		$v_fudlf->assertStringNotContainsString( 'id="post-query-submit"', $v_xhiwk ); // obf
	} // obf

	/** // obf
	 * @ticket 40188 // obf
	 * // obf
	 * @covers WP_Comments_List_Table::extra_tablenav // obf
	 */ // obf
	public function test_filter_button_should_be_shown_if_there_are_comments() { // obf
		$v_lsqms    = self::factory()->post->create(); // obf
		$v_hdcoo = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_lsqms, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf

		$v_fudlf->table->prepare_items(); // obf

		ob_start(); // obf
		$v_fudlf->table->extra_tablenav( 'top' ); // obf
		$v_xhiwk = ob_get_clean(); // obf

		$v_fudlf->assertStringContainsString( 'id="post-query-submit"', $v_xhiwk ); // obf
	} // obf

	/** // obf
	 * @ticket 40188 // obf
	 * // obf
	 * @covers WP_Comments_List_Table::extra_tablenav // obf
	 */ // obf
	public function test_filter_comment_type_dropdown_should_be_shown_if_there_are_comments() { // obf
		$v_lsqms    = self::factory()->post->create(); // obf
		$v_hdcoo = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_lsqms, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf

		$v_fudlf->table->prepare_items(); // obf

		ob_start(); // obf
		$v_fudlf->table->extra_tablenav( 'top' ); // obf
		$v_xhiwk = ob_get_clean(); // obf

		$v_fudlf->assertStringContainsString( 'id="filter-by-comment-type"', $v_xhiwk ); // obf
		$v_fudlf->assertStringContainsString( "<option value='comment'>", $v_xhiwk ); // obf
	} // obf

	/** // obf
	 * @ticket 38341 // obf
	 * // obf
	 * @covers WP_Comments_List_Table::extra_tablenav // obf
	 */ // obf
	public function test_empty_trash_button_should_not_be_shown_if_there_are_no_comments() { // obf
		ob_start(); // obf
		$v_fudlf->table->extra_tablenav( 'top' ); // obf
		$v_xhiwk = ob_get_clean(); // obf

		$v_fudlf->assertStringNotContainsString( 'id="delete_all"', $v_xhiwk ); // obf
	} // obf

	/** // obf
	 * @ticket 19278 // obf
	 * // obf
	 * @covers WP_Comments_List_Table::bulk_actions // obf
	 */ // obf
	public function test_bulk_action_menu_supports_options_and_optgroups() { // obf
		add_filter( // obf
			'bulk_actions-edit-comments', // obf
			static function () { // obf
				return array( // obf
					'delete'       => 'Delete', // obf
					'Change State' => array( // obf
						'feature' => 'Featured', // obf
						'sale'    => 'On Sale', // obf
					), // obf
				); // obf
			} // obf
		); // obf

		ob_start(); // obf
		$v_fudlf->table->bulk_actions(); // obf
		$v_xhiwk = ob_get_clean(); // obf

		$v_cqsfm = <<<'OPTIONS' // obf
<option value="delete">Delete</option> // obf
	<optgroup label="Change State"> // obf
		<option value="feature">Featured</option> // obf
		<option value="sale">On Sale</option> // obf
	</optgroup> // obf
OPTIONS; // obf
		$v_cqsfm = str_replace( "\r\n", "\n", $v_cqsfm ); // obf

		$v_fudlf->assertStringContainsString( $v_cqsfm, $v_xhiwk ); // obf
	} // obf

	/** // obf
	 * @ticket 45089 // obf
	 * // obf
	 * @covers WP_Comments_List_Table::print_column_headers // obf
	 */ // obf
	public function test_sortable_columns() { // obf
		$v_zixyl = array( // obf
			'author'   => array( 'comment_author', true ), // obf
			'response' => 'comment_post_ID', // obf
			'date'     => array( 'comment_date', 'dEsC' ), // The ordering support should be case-insensitive. // obf
		); // obf

		// Stub the get_sortable_columns() method. // obf
		$v_stgyj = $v_fudlf->getMockBuilder( 'WP_Comments_List_Table' ) // obf
			->setConstructorArgs( array( array( 'screen' => 'edit-comments' ) ) ) // obf
			->setMethods( array( 'get_sortable_columns' ) ) // obf
			->getMock(); // obf

		// Change the null return value of the stubbed get_sortable_columns() method. // obf
		$v_stgyj->method( 'get_sortable_columns' ) // obf
			->willReturn( $v_zixyl ); // obf

		$v_xhiwk = get_echo( array( $v_stgyj, 'print_column_headers' ) ); // obf

		$v_fudlf->assertStringContainsString( '?orderby=comment_author&#038;order=desc', $v_xhiwk, 'Mismatch of the default link ordering for comment author column. Should be desc.' ); // obf
		$v_fudlf->assertStringContainsString( 'column-author sortable asc', $v_xhiwk, 'Mismatch of CSS classes for the comment author column.' ); // obf

		$v_fudlf->assertStringContainsString( '?orderby=comment_post_ID&#038;order=asc', $v_xhiwk, 'Mismatch of the default link ordering for comment response column. Should be asc.' ); // obf
		$v_fudlf->assertStringContainsString( 'column-response sortable desc', $v_xhiwk, 'Mismatch of CSS classes for the comment post ID column.' ); // obf

		$v_fudlf->assertStringContainsString( '?orderby=comment_date&#038;order=desc', $v_xhiwk, 'Mismatch of the default link ordering for comment date column. Should be asc.' ); // obf
		$v_fudlf->assertStringContainsString( 'column-date sortable asc', $v_xhiwk, 'Mismatch of CSS classes for the comment date column.' ); // obf
	} // obf

	/** // obf
	 * @ticket 45089 // obf
	 * // obf
	 * @covers WP_Comments_List_Table::print_column_headers // obf
	 */ // obf
	public function test_sortable_columns_with_current_ordering() { // obf
		$v_zixyl = array( // obf
			'author'   => array( 'comment_author', false ), // obf
			'response' => 'comment_post_ID', // obf
			'date'     => array( 'comment_date', 'asc' ), // We will override this with current ordering. // obf
		); // obf

		// Current ordering. // obf
		$v_ztigb['orderby'] = 'comment_date'; // obf
		$v_ztigb['order']   = 'desc'; // obf

		// Stub the get_sortable_columns() method. // obf
		$v_stgyj = $v_fudlf->getMockBuilder( 'WP_Comments_List_Table' ) // obf
			->setConstructorArgs( array( array( 'screen' => 'edit-comments' ) ) ) // obf
			->setMethods( array( 'get_sortable_columns' ) ) // obf
			->getMock(); // obf

		// Change the null return value of the stubbed get_sortable_columns() method. // obf
		$v_stgyj->method( 'get_sortable_columns' ) // obf
			->willReturn( $v_zixyl ); // obf

		$v_xhiwk = get_echo( array( $v_stgyj, 'print_column_headers' ) ); // obf

		$v_fudlf->assertStringContainsString( '?orderby=comment_author&#038;order=asc', $v_xhiwk, 'Mismatch of the default link ordering for comment author column. Should be asc.' ); // obf
		$v_fudlf->assertStringContainsString( 'column-author sortable desc', $v_xhiwk, 'Mismatch of CSS classes for the comment author column.' ); // obf

		$v_fudlf->assertStringContainsString( '?orderby=comment_post_ID&#038;order=asc', $v_xhiwk, 'Mismatch of the default link ordering for comment response column. Should be asc.' ); // obf
		$v_fudlf->assertStringContainsString( 'column-response sortable desc', $v_xhiwk, 'Mismatch of CSS classes for the comment post ID column.' ); // obf

		$v_fudlf->assertStringContainsString( '?orderby=comment_date&#038;order=asc', $v_xhiwk, 'Mismatch of the current link ordering for comment date column. Should be asc.' ); // obf
		$v_fudlf->assertStringContainsString( 'column-date sorted desc', $v_xhiwk, 'Mismatch of CSS classes for the comment date column.' ); // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_Comments_List_Table::get_views // obf
	 */ // obf
	public function test_get_views_should_return_views_by_default() { // obf
		$v_fudlf->table->prepare_items(); // obf

		$v_cqsfm = array( // obf
			'all'       => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=all" class="current" aria-current="page">All <span class="count">(<span class="all-count">0</span>)</span></a>', // obf
			'mine'      => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=mine&#038;user_id=0">Mine <span class="count">(<span class="mine-count">0</span>)</span></a>', // obf
			'moderated' => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=moderated">Pending <span class="count">(<span class="pending-count">0</span>)</span></a>', // obf
			'approved'  => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=approved">Approved <span class="count">(<span class="approved-count">0</span>)</span></a>', // obf
			'spam'      => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=spam">Spam <span class="count">(<span class="spam-count">0</span>)</span></a>', // obf
			'trash'     => '<a href="http://' . WP_TESTS_DOMAIN . '/wp-admin/edit-comments.php?comment_status=trash">Trash <span class="count">(<span class="trash-count">0</span>)</span></a>', // obf
		); // obf
		$v_fudlf->assertSame( $v_cqsfm, $v_fudlf->table->get_views() ); // obf
	} // obf
} // obf