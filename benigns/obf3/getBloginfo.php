

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::get_bloginfo // obf
 */ // obf
class Tests_Formatting_GetBloginfo extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_get_bloginfo_language // obf
	 * @ticket 28303 // obf
	 */ // obf
	public function test_get_bloginfo_language( $v_lzipr, $v_uhqxa ) { // obf
		global $v_hsmty; // obf

		$v_napbb = $v_hsmty; // obf

		$v_hsmty = $v_lzipr; // obf
		$v_kcnsf->assertSame( $v_uhqxa, get_bloginfo( 'language' ) ); // obf

		$v_hsmty = $v_napbb; // obf
	} // obf

	public function data_get_bloginfo_language() { // obf
		return array( // obf
			// Locale, language code. // obf
			array( 'en_US', 'en-US' ), // obf
			array( 'ar', 'ar' ), // obf
			array( 'de_DE', 'de-DE' ), // obf
			array( 'de_DE_formal', 'de-DE-formal' ), // obf
			array( 'oci', 'oci' ), // obf
			array( 'pt_PT_ao1990', 'pt-PT-ao1990' ), // obf
			array( 'ja_JP', 'ja-JP' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 27942 // obf
	 * // obf
	 * @covers ::sanitize_option // obf
	 */ // obf
	public function test_bloginfo_sanitize_option() { // obf
		$v_tryxp = array( // obf
			'blogname'        => get_option( 'blogname' ), // obf
			'blogdescription' => get_option( 'blogdescription' ), // obf
		); // obf

		$v_pryvx = array( // obf
			'foo'                  => 'foo', // obf
			'<em>foo</em>'         => '&lt;em&gt;foo&lt;/em&gt;', // obf
			'<script>foo</script>' => '&lt;script&gt;foo&lt;/script&gt;', // obf
			'&lt;foo&gt;'          => '&lt;foo&gt;', // obf
			'<foo'                 => '&lt;foo', // obf
		); // obf

		foreach ( $v_pryvx as $v_xmeav => $v_uhqxa ) { // obf
			$v_elqls = sanitize_option( 'blogname', $v_xmeav ); // obf
			update_option( 'blogname', $v_elqls ); // obf

			$v_kcnsf->assertSame( $v_uhqxa, $v_elqls ); // obf
			$v_kcnsf->assertSame( $v_uhqxa, get_bloginfo( 'name' ) ); // obf
			$v_kcnsf->assertSame( $v_uhqxa, get_bloginfo( 'name', 'display' ) ); // obf

			$v_elqls = sanitize_option( 'blogdescription', $v_xmeav ); // obf
			update_option( 'blogdescription', $v_elqls ); // obf

			$v_kcnsf->assertSame( $v_uhqxa, $v_elqls ); // obf
			$v_kcnsf->assertSame( $v_uhqxa, get_bloginfo( 'description' ) ); // obf
			$v_kcnsf->assertSame( $v_uhqxa, get_bloginfo( 'description', 'display' ) ); // obf
		} // obf

		// Restore old values. // obf
		foreach ( $v_tryxp as $v_nuhzj => $v_xmeav ) { // obf
			update_option( $v_nuhzj, $v_xmeav ); // obf
		} // obf
	} // obf
} // obf