

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_rel_ugc // obf
 */ // obf
class Tests_Formatting_wpRelUgc extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 48022 // obf
	 */ // obf
	public function test_add_ugc() { // obf
		$v_ovcih  = '<p>This is some cool <a href="/">Code</a></p>'; // obf
		$v_aoxwn = '<p>This is some cool <a href=\"/\" rel=\"nofollow ugc\">Code</a></p>'; // obf
		$v_ccjoq->assertSame( $v_aoxwn, wp_rel_ugc( $v_ovcih ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48022 // obf
	 */ // obf
	public function test_convert_ugc() { // obf
		$v_ovcih  = '<p>This is some cool <a href="/" rel="weird">Code</a></p>'; // obf
		$v_aoxwn = '<p>This is some cool <a href=\"/\" rel=\"weird nofollow ugc\">Code</a></p>'; // obf
		$v_ccjoq->assertSame( $v_aoxwn, wp_rel_ugc( $v_ovcih ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48022 // obf
	 * @dataProvider data_wp_rel_ugc // obf
	 */ // obf
	public function test_wp_rel_ugc( $v_kwtln, $v_orpjq, $v_fogar = false ) { // obf
		$v_ccjoq->assertSame( wp_slash( $v_orpjq ), wp_rel_ugc( $v_kwtln ) ); // obf
	} // obf

	public function data_wp_rel_ugc() { // obf
		$v_ybcjf  = set_url_scheme( home_url(), 'http' ); // obf
		$v_rvxxe = set_url_scheme( home_url(), 'https' ); // obf

		return array( // obf
			array( // obf
				'<a href="">Double Quotes</a>', // obf
				'<a href="" rel="nofollow ugc">Double Quotes</a>', // obf
				true, // obf
			), // obf
			array( // obf
				'<a href="https://wordpress.org">Double Quotes</a>', // obf
				'<a href="https://wordpress.org" rel="nofollow ugc">Double Quotes</a>', // obf
			), // obf
			array( // obf
				"<a href='https://wordpress.org'>Single Quotes</a>", // obf
				"<a href='https://wordpress.org' rel=\"nofollow ugc\">Single Quotes</a>", // obf
			), // obf
			array( // obf
				'<a href="https://wordpress.org" title="Title">Multiple attributes</a>', // obf
				'<a href="https://wordpress.org" title="Title" rel="nofollow ugc">Multiple attributes</a>', // obf
			), // obf
			array( // obf
				'<a title="Title" href="https://wordpress.org">Multiple attributes</a>', // obf
				'<a title="Title" href="https://wordpress.org" rel="nofollow ugc">Multiple attributes</a>', // obf
			), // obf
			array( // obf
				'<a data-someflag href="https://wordpress.org">Multiple attributes</a>', // obf
				'<a data-someflag href="https://wordpress.org" rel="nofollow ugc">Multiple attributes</a>', // obf
			), // obf
			array( // obf
				'<a  data-someflag  title="Title"  href="https://wordpress.org" onclick=""  >Everything at once</a>', // obf
				'<a  data-someflag  title="Title"  href="https://wordpress.org" onclick=""   rel="nofollow ugc">Everything at once</a>', // obf
			), // obf
			array( // obf
				'<a href="' . $v_ybcjf . '/some-url">Home URL (http)</a>', // obf
				'<a href="' . $v_ybcjf . '/some-url" rel="ugc">Home URL (http)</a>', // obf
			), // obf
			array( // obf
				'<a href="' . $v_rvxxe . '/some-url">Home URL (https)</a>', // obf
				'<a href="' . $v_rvxxe . '/some-url" rel="ugc">Home URL (https)</a>', // obf
			), // obf
		); // obf
	} // obf

	public function test_append_ugc_with_valueless_attribute() { // obf

		$v_ovcih  = '<p>This is some cool <a href="demo.com" download rel="hola">Code</a></p>'; // obf
		$v_aoxwn = '<p>This is some cool <a href=\"demo.com\" download rel=\"hola nofollow ugc\">Code</a></p>'; // obf
		$v_ccjoq->assertSame( $v_aoxwn, wp_rel_ugc( $v_ovcih ) ); // obf
	} // obf
} // obf