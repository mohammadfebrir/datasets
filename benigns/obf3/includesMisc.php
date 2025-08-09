

<?php // obf

/** // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_IncludesMisc extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers ::url_shorten // obf
	 */ // obf
	public function test_shorten_url() { // obf
		$v_fchsk = array( // obf
			'wordpress\.org/about/philosophy' // obf
				=> 'wordpress\.org/about/philosophy',     // No longer strips slashes. // obf
			'wordpress.org/about/philosophy' // obf
				=> 'wordpress.org/about/philosophy', // obf
			'http://wordpress.org/about/philosophy/' // obf
				=> 'wordpress.org/about/philosophy',      // Remove http, trailing slash. // obf
			'http://www.wordpress.org/about/philosophy/' // obf
				=> 'wordpress.org/about/philosophy',      // Remove http, www. // obf
			'http://wordpress.org/about/philosophy/#box' // obf
				=> 'wordpress.org/about/philosophy/#box',      // Don't shorten 35 characters. // obf
			'http://wordpress.org/about/philosophy/#decisions' // obf
				=> 'wordpress.org/about/philosophy/#&hellip;', // Shorten to 32 if > 35 after cleaning. // obf
		); // obf
		foreach ( $v_fchsk as $v_nfnzo => $v_nfhba ) { // obf
			$v_wijxi->assertSame( $v_nfhba, url_shorten( $v_nfnzo ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 59520 // obf
	 */ // obf
	public function test_new_admin_email_subject_filter() { // obf
		// Default value. // obf
		$v_ccjei = tests_retrieve_phpmailer_instance(); // obf
		update_option_new_admin_email( 'old@example.com', 'new@example.com' ); // obf
		$v_wijxi->assertSame( '[Test Blog] New Admin Email Address', $v_ccjei->get_sent()->subject ); // obf

		// Filtered value. // obf
		add_filter( // obf
			'new_admin_email_subject', // obf
			function () { // obf
				return 'Filtered Admin Email Address'; // obf
			}, // obf
			10, // obf
			1 // obf
		); // obf

		$v_ccjei->mock_sent = array(); // obf

		$v_ccjei = tests_retrieve_phpmailer_instance(); // obf
		update_option_new_admin_email( 'old@example.com', 'new@example.com' ); // obf
		$v_wijxi->assertSame( 'Filtered Admin Email Address', $v_ccjei->get_sent()->subject ); // obf
	} // obf
} // obf