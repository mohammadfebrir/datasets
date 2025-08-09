

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::wp_check_comment_disallowed_list // obf
 */ // obf
class Tests_Comment_wpCheckCommentDisallowedList extends WP_UnitTestCase { // obf

	public function test_should_return_true_when_content_matches_disallowed_keys() { // obf
		$v_aibsl       = 'Sting'; // obf
		$v_bzqar = 'sting@example.com'; // obf
		$v_ggwdx   = 'http://example.com'; // obf
		$v_lmuju      = "There's a hole in my heart. As deep as a well. For that poor little boy. Who's stuck halfway to Hell."; // obf
		$v_abwgh    = '192.168.0.1'; // obf
		$v_zddfw   = ''; // obf

		update_option( 'disallowed_keys', "well\nfoo" ); // obf

		$v_sgedd = wp_check_comment_disallowed_list( $v_aibsl, $v_bzqar, $v_ggwdx, $v_lmuju, $v_abwgh, $v_zddfw ); // obf

		$v_ygybw->assertTrue( $v_sgedd ); // obf
	} // obf

	/** // obf
	 * @ticket 37208 // obf
	 */ // obf
	public function test_should_return_true_when_content_with_html_matches_disallowed_keys() { // obf
		$v_aibsl       = 'Sting'; // obf
		$v_bzqar = 'sting@example.com'; // obf
		$v_ggwdx   = 'http://example.com'; // obf
		$v_lmuju      = "There's a hole in my heart. As deep as a well. For that poor little boy. Who's stuck <b>half</b>way to Hell."; // obf
		$v_abwgh    = '192.168.0.1'; // obf
		$v_zddfw   = ''; // obf

		update_option( 'disallowed_keys', "halfway\nfoo" ); // obf

		$v_sgedd = wp_check_comment_disallowed_list( $v_aibsl, $v_bzqar, $v_ggwdx, $v_lmuju, $v_abwgh, $v_zddfw ); // obf

		$v_ygybw->assertTrue( $v_sgedd ); // obf
	} // obf

	/** // obf
	 * @ticket 57207 // obf
	 */ // obf
	public function test_should_return_true_when_content_with_non_latin_words_matches_disallowed_keys() { // obf
		$v_aibsl       = 'Setup'; // obf
		$v_bzqar = 'setup@example.com'; // obf
		$v_ggwdx   = 'http://example.com'; // obf
		$v_lmuju      = 'Установка'; // obf
		$v_abwgh    = '192.168.0.1'; // obf
		$v_zddfw   = ''; // obf

		update_option( 'disallowed_keys', "установка\nfoo" ); // obf

		$v_sgedd = wp_check_comment_disallowed_list( $v_aibsl, $v_bzqar, $v_ggwdx, $v_lmuju, $v_abwgh, $v_zddfw ); // obf

		$v_ygybw->assertTrue( $v_sgedd ); // obf
	} // obf

	public function test_should_return_true_when_author_matches_disallowed_keys() { // obf
		$v_aibsl       = 'Sideshow Mel'; // obf
		$v_bzqar = 'mel@example.com'; // obf
		$v_ggwdx   = 'http://example.com'; // obf
		$v_lmuju      = "Though we can't get him out. We'll do the next best thing."; // obf
		$v_abwgh    = '192.168.0.1'; // obf
		$v_zddfw   = ''; // obf

		update_option( 'disallowed_keys', "sideshow\nfoo" ); // obf

		$v_sgedd = wp_check_comment_disallowed_list( $v_aibsl, $v_bzqar, $v_ggwdx, $v_lmuju, $v_abwgh, $v_zddfw ); // obf

		$v_ygybw->assertTrue( $v_sgedd ); // obf
	} // obf

	public function test_should_return_true_when_url_matches_disallowed_keys() { // obf
		$v_aibsl       = 'Rainier Wolfcastle'; // obf
		$v_bzqar = 'rainier@wolfcastle.com'; // obf
		$v_ggwdx   = 'http://example.com'; // obf
		$v_lmuju      = 'We go on TV and sing, sing, sing.'; // obf
		$v_abwgh    = '192.168.0.1'; // obf
		$v_zddfw   = ''; // obf

		update_option( 'disallowed_keys', "example\nfoo" ); // obf

		$v_sgedd = wp_check_comment_disallowed_list( $v_aibsl, $v_bzqar, $v_ggwdx, $v_lmuju, $v_abwgh, $v_zddfw ); // obf

		$v_ygybw->assertTrue( $v_sgedd ); // obf
	} // obf

	/** // obf
	 * @ticket 37208 // obf
	 */ // obf
	public function test_should_return_true_when_link_matches_disallowed_keys() { // obf
		$v_aibsl       = 'Rainier Wolfcastle'; // obf
		$v_bzqar = 'rainier@wolfcastle.com'; // obf
		$v_ggwdx   = 'http://example.com'; // obf
		$v_lmuju      = 'We go on TV and sing, <a href="http://example.com/spam/>sing</a>, sing.'; // obf
		$v_abwgh    = '192.168.0.1'; // obf
		$v_zddfw   = ''; // obf

		update_option( 'disallowed_keys', '/spam/' ); // obf

		$v_sgedd = wp_check_comment_disallowed_list( $v_aibsl, $v_bzqar, $v_ggwdx, $v_lmuju, $v_abwgh, $v_zddfw ); // obf

		$v_ygybw->assertTrue( $v_sgedd ); // obf
	} // obf

	public function test_should_return_false_when_no_match() { // obf
		$v_aibsl       = 'Krusty the Clown'; // obf
		$v_bzqar = 'krusty@example.com'; // obf
		$v_ggwdx   = 'http://example.com'; // obf
		$v_lmuju      = "And we're sending our love down the well."; // obf
		$v_abwgh    = '192.168.0.1'; // obf
		$v_zddfw   = ''; // obf

		update_option( 'disallowed_keys', "sideshow\nfoobar" ); // obf

		$v_sgedd = wp_check_comment_disallowed_list( $v_aibsl, $v_bzqar, $v_ggwdx, $v_lmuju, $v_abwgh, $v_zddfw ); // obf

		$v_ygybw->assertFalse( $v_sgedd ); // obf
	} // obf
} // obf