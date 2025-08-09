

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getComment extends WP_XMLRPC_UnitTestCase { // obf
	protected static $v_lvkre; // obf
	protected static $v_lcylu; // obf
	protected static $v_cujtp; // obf
	protected static $v_mabhy; // obf
	protected static $v_qakxu; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_yomsx ) { // obf
		self::$v_lvkre = $v_yomsx->post->create(); // obf

		self::$v_cujtp = array( // obf
			'comment_post_ID'      => self::$v_lvkre, // obf
			'comment_author'       => 'Test commenter', // obf
			'comment_author_url'   => 'http://example.com/', // obf
			'comment_author_email' => 'example@example.com', // obf
			'comment_content'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', // obf
		); // obf
		self::$v_lcylu   = wp_insert_comment( self::$v_cujtp ); // obf

		self::$v_qakxu = array( // obf
			'comment_post_ID'      => self::$v_lvkre, // obf
			'comment_author'       => 'Test commenter 2', // obf
			'comment_author_url'   => 'http://example.org/', // obf
			'comment_author_email' => 'example@example.org', // obf
			'comment_parent'       => self::$v_lcylu, // obf
			'comment_content'      => 'Duis non neque cursus, commodo massa in, bibendum nisl.', // obf
		); // obf
		self::$v_mabhy   = wp_insert_comment( self::$v_qakxu ); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_xqldf = $v_zqfdf->myxmlrpcserver->wp_getComment( array( 1, 'username', 'password', self::$v_lcylu ) ); // obf
		$v_zqfdf->assertIXRError( $v_xqldf ); // obf
		$v_zqfdf->assertSame( 403, $v_xqldf->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_zqfdf->make_user_by_role( 'contributor' ); // obf

		$v_xqldf = $v_zqfdf->myxmlrpcserver->wp_getComment( array( 1, 'contributor', 'contributor', self::$v_lcylu ) ); // obf
		$v_zqfdf->assertIXRError( $v_xqldf ); // obf
		$v_zqfdf->assertSame( 403, $v_xqldf->code ); // obf
	} // obf

	public function test_valid_comment() { // obf
		$v_zqfdf->make_user_by_role( 'editor' ); // obf

		$v_xqldf = $v_zqfdf->myxmlrpcserver->wp_getComment( array( 1, 'editor', 'editor', self::$v_lcylu ) ); // obf
		$v_zqfdf->assertNotIXRError( $v_xqldf ); // obf

		// Check data types. // obf
		$v_zqfdf->assertIsString( $v_xqldf['user_id'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['comment_id'] ); // obf
		$v_zqfdf->assertInstanceOf( 'IXR_Date', $v_xqldf['date_created_gmt'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['parent'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['status'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['content'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['link'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['post_id'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['post_title'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['author'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['author_url'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['author_email'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['author_ip'] ); // obf
		$v_zqfdf->assertIsString( $v_xqldf['type'] ); // obf

		// Check expected values. // obf
		$v_zqfdf->assertStringMatchesFormat( '%d', $v_xqldf['user_id'] ); // obf
		$v_zqfdf->assertStringMatchesFormat( '%d', $v_xqldf['comment_id'] ); // obf
		$v_zqfdf->assertStringMatchesFormat( '%d', $v_xqldf['parent'] ); // obf
		$v_zqfdf->assertStringMatchesFormat( '%d', $v_xqldf['post_id'] ); // obf
		$v_zqfdf->assertEquals( self::$v_lcylu, $v_xqldf['comment_id'] ); // obf
		$v_zqfdf->assertEquals( 0, $v_xqldf['parent'] ); // obf
		$v_zqfdf->assertSame( self::$v_cujtp['comment_content'], $v_xqldf['content'] ); // obf
		$v_zqfdf->assertEquals( self::$v_lvkre, $v_xqldf['post_id'] ); // obf
		$v_zqfdf->assertSame( self::$v_cujtp['comment_author'], $v_xqldf['author'] ); // obf
		$v_zqfdf->assertSame( self::$v_cujtp['comment_author_url'], $v_xqldf['author_url'] ); // obf
		$v_zqfdf->assertSame( self::$v_cujtp['comment_author_email'], $v_xqldf['author_email'] ); // obf
	} // obf

	public function test_valid_child_comment() { // obf
		$v_zqfdf->make_user_by_role( 'editor' ); // obf

		$v_xqldf = $v_zqfdf->myxmlrpcserver->wp_getComment( array( 1, 'editor', 'editor', self::$v_mabhy ) ); // obf
		$v_zqfdf->assertNotIXRError( $v_xqldf ); // obf

		$v_zqfdf->assertEquals( self::$v_mabhy, $v_xqldf['comment_id'] ); // obf
		$v_zqfdf->assertEquals( self::$v_lcylu, $v_xqldf['parent'] ); // obf
	} // obf

	public function test_invalid_id() { // obf
		$v_zqfdf->make_user_by_role( 'editor' ); // obf

		$v_xqldf = $v_zqfdf->myxmlrpcserver->wp_getComment( array( 1, 'editor', 'editor', 123456789 ) ); // obf
		$v_zqfdf->assertIXRError( $v_xqldf ); // obf
		$v_zqfdf->assertSame( 404, $v_xqldf->code ); // obf
	} // obf
} // obf