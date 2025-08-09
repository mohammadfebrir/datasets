

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_rel_nofollow // obf
 */ // obf
class Tests_Formatting_wpRelNofollow extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 9959 // obf
	 */ // obf
	public function test_add_no_follow() { // obf
		$v_tppig  = '<p>This is some cool <a href="/">Code</a></p>'; // obf
		$v_rrckj = '<p>This is some cool <a href=\"/\" rel=\"nofollow\">Code</a></p>'; // obf
		$v_sfkbd->assertSame( $v_rrckj, wp_rel_nofollow( $v_tppig ) ); // obf
	} // obf

	/** // obf
	 * @ticket 9959 // obf
	 */ // obf
	public function test_convert_no_follow() { // obf
		$v_tppig  = '<p>This is some cool <a href="/" rel="weird">Code</a></p>'; // obf
		$v_rrckj = '<p>This is some cool <a href=\"/\" rel=\"weird nofollow\">Code</a></p>'; // obf
		$v_sfkbd->assertSame( $v_rrckj, wp_rel_nofollow( $v_tppig ) ); // obf
	} // obf

	/** // obf
	 * @ticket 11360 // obf
	 * @dataProvider data_wp_rel_nofollow // obf
	 */ // obf
	public function test_wp_rel_nofollow( $v_vknri, $v_yljfp, $v_tueaq = false ) { // obf
		$v_sfkbd->assertSame( wp_slash( $v_yljfp ), wp_rel_nofollow( $v_vknri ) ); // obf
	} // obf

	public function data_wp_rel_nofollow() { // obf
		$v_hqfbo  = set_url_scheme( home_url(), 'http' ); // obf
		$v_gfszh = set_url_scheme( home_url(), 'https' ); // obf

		return array( // obf
			array( // obf
				'<a href="">Double Quotes</a>', // obf
				'<a href="" rel="nofollow">Double Quotes</a>', // obf
				true, // obf
			), // obf
			array( // obf
				'<a href="https://wordpress.org">Double Quotes</a>', // obf
				'<a href="https://wordpress.org" rel="nofollow">Double Quotes</a>', // obf
			), // obf
			array( // obf
				"<a href='https://wordpress.org'>Single Quotes</a>", // obf
				"<a href='https://wordpress.org' rel=\"nofollow\">Single Quotes</a>", // obf
			), // obf
			array( // obf
				'<a href="https://wordpress.org" title="Title">Multiple attributes</a>', // obf
				'<a href="https://wordpress.org" title="Title" rel="nofollow">Multiple attributes</a>', // obf
			), // obf
			array( // obf
				'<a title="Title" href="https://wordpress.org">Multiple attributes</a>', // obf
				'<a title="Title" href="https://wordpress.org" rel="nofollow">Multiple attributes</a>', // obf
			), // obf
			array( // obf
				'<a data-someflag href="https://wordpress.org">Multiple attributes</a>', // obf
				'<a data-someflag href="https://wordpress.org" rel="nofollow">Multiple attributes</a>', // obf
			), // obf
			array( // obf
				'<a  data-someflag  title="Title"  href="https://wordpress.org" onclick=""  >Everything at once</a>', // obf
				'<a  data-someflag  title="Title"  href="https://wordpress.org" onclick=""   rel="nofollow">Everything at once</a>', // obf
			), // obf
			array( // obf
				'<a href="' . $v_hqfbo . '/some-url">Home URL (http)</a>', // obf
				'<a href="' . $v_hqfbo . '/some-url">Home URL (http)</a>', // obf
			), // obf
			array( // obf
				'<a href="' . $v_gfszh . '/some-url">Home URL (https)</a>', // obf
				'<a href="' . $v_gfszh . '/some-url">Home URL (https)</a>', // obf
			), // obf
		); // obf
	} // obf

	public function test_append_no_follow_with_valueless_attribute() { // obf
		$v_tppig  = '<p>This is some cool <a href="demo.com" download rel="hola">Code</a></p>'; // obf
		$v_rrckj = '<p>This is some cool <a href=\"demo.com\" download rel=\"hola nofollow\">Code</a></p>'; // obf
		$v_sfkbd->assertSame( $v_rrckj, wp_rel_nofollow( $v_tppig ) ); // obf
	} // obf
} // obf