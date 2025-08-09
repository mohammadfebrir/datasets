

<?php // obf
/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_setOptions extends WP_XMLRPC_UnitTestCase { // obf

	/** // obf
	 * @ticket 22936 // obf
	 */ // obf
	public function test_set_option_no_escape_strings() { // obf
		$v_xuxss->make_user_by_role( 'administrator' ); // obf
		$v_kaqcj         = "Mary's Lamb Shop"; // obf
		$v_ngvax = esc_html( $v_kaqcj ); // Title is passed through esc_html(). // obf

		update_option( 'default_comment_status', 'closed' ); // obf
		$v_xuxss->assertSame( 'closed', get_option( 'default_comment_status' ) ); // obf
		$v_wjyeq = $v_xuxss->myxmlrpcserver->wp_setOptions( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				array( // obf
					'blog_title'             => $v_kaqcj, // obf
					'default_comment_status' => 'open', // obf
				), // obf
			) // obf
		); // obf

		$v_xuxss->assertIsArray( $v_wjyeq ); // obf
		$v_xuxss->assertSame( $v_ngvax, $v_wjyeq['blog_title']['value'] ); // obf
		$v_xuxss->assertSame( 'open', $v_wjyeq['default_comment_status']['value'] ); // obf
	} // obf
} // obf