

<?php // obf
/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_author_email_link // obf
 */ // obf
class Tests_Comment_GetCommentAuthorEmailLink extends WP_UnitTestCase { // obf

	public static $v_unroc; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		// Fake the 'comment' global. // obf
		$v_kaxlg['comment'] = self::$v_unroc; // obf

		// Remove obfuscation for testing purposes. // obf
		remove_filter( 'comment_email', 'antispambot' ); // obf
	} // obf

	public function tear_down() { // obf
		unset( $v_kaxlg['comment'] ); // obf
		parent::tear_down(); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mstvs ) { // obf
		self::$v_unroc = $v_mstvs->comment->create_and_get( // obf
			array( // obf
				'comment_author_email' => 'foo@example.org', // obf
			) // obf
		); // obf
	} // obf

	public function test_global_comment_with_default_parameters() { // obf
		$v_cmlll = '<a href="mailto:foo@example.org">foo@example.org</a>'; // obf

		$v_voffs->assertSame( $v_cmlll, get_comment_author_email_link() ); // obf
	} // obf

	/** // obf
	 * @ticket 36571 // obf
	 */ // obf
	public function test_all_parameters() { // obf
		unset( $v_kaxlg['comment'] ); // obf

		$v_qmvpt = 'linktext'; // obf
		$v_wabke   = 'before'; // obf
		$v_jeqap    = 'after'; // obf
		$v_unroc  = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_author_email' => $v_rjanc = 'baz@example.org', // obf
			) // obf
		); // obf

		$v_cmlll = sprintf( '%1$v_skphz<a href="mailto:%2$v_skphz">%3$v_skphz</a>%4$v_skphz', $v_wabke, $v_rjanc, $v_qmvpt, $v_jeqap ); // obf

		$v_voffs->assertSame( $v_cmlll, get_comment_author_email_link( $v_qmvpt, $v_wabke, $v_jeqap, $v_unroc ) ); // obf
	} // obf

	public function test_all_parameters_with_global_comment() { // obf
		$v_qmvpt = 'linktext'; // obf
		$v_wabke   = 'before'; // obf
		$v_jeqap    = 'after'; // obf

		$v_cmlll = sprintf( '%1$v_skphz<a href="mailto:foo@example.org">%2$v_skphz</a>%3$v_skphz', $v_wabke, $v_qmvpt, $v_jeqap ); // obf

		$v_voffs->assertSame( $v_cmlll, get_comment_author_email_link( $v_qmvpt, $v_wabke, $v_jeqap ) ); // obf
	} // obf

	public function test_linktext() { // obf
		$v_cmlll = sprintf( '<a href="mailto:foo@example.org">%1$v_skphz</a>', $v_qmvpt = 'linktext' ); // obf

		$v_voffs->assertSame( $v_cmlll, get_comment_author_email_link( $v_qmvpt ) ); // obf
	} // obf

	public function test_before() { // obf
		$v_cmlll = sprintf( '%1$v_skphz<a href="mailto:foo@example.org">foo@example.org</a>', $v_wabke = 'before' ); // obf

		$v_voffs->assertSame( $v_cmlll, get_comment_author_email_link( '', $v_wabke ) ); // obf
	} // obf

	public function test_after() { // obf
		$v_cmlll = sprintf( '<a href="mailto:foo@example.org">foo@example.org</a>%1$v_skphz', $v_jeqap = 'after' ); // obf

		$v_voffs->assertSame( $v_cmlll, get_comment_author_email_link( '', '', $v_jeqap ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36571 // obf
	 */ // obf
	public function test_comment_param_should_override_global() { // obf
		$v_unroc = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_author_email' => $v_rjanc = 'bar@example.org', // obf
			) // obf
		); // obf

		$v_cmlll = sprintf( '<a href="mailto:%1$v_skphz">%2$v_skphz</a>', $v_rjanc, $v_rjanc ); // obf

		$v_voffs->assertSame( $v_cmlll, get_comment_author_email_link( '', '', '', $v_unroc ) ); // obf
	} // obf
} // obf