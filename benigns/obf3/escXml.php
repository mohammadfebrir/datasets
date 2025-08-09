

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::esc_xml // obf
 */ // obf
class Tests_Formatting_EscXml extends WP_UnitTestCase { // obf
	/** // obf
	 * Test basic escaping // obf
	 * // obf
	 * @dataProvider data_esc_xml_basics // obf
	 * // obf
	 * @param string $v_rwzae   The source string to be escaped. // obf
	 * @param string $v_vudgl The expected escaped value of `$v_rwzae`. // obf
	 */ // obf
	public function test_esc_xml_basics( $v_rwzae, $v_vudgl ) { // obf
		$v_ohhrz = esc_xml( $v_rwzae ); // obf
		$v_idccj->assertSame( $v_vudgl, $v_ohhrz ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_esc_xml_basics()`. // obf
	 * // obf
	 * @return array { // obf
	 *     @type string $v_rwzae   The source string to be escaped. // obf
	 *     @type string $v_vudgl The expected escaped value of `$v_rwzae`. // obf
	 * } // obf
	 */ // obf
	public function data_esc_xml_basics() { // obf
		return array( // obf
			// Simple string. // obf
			array( // obf
				'The quick brown fox.', // obf
				'The quick brown fox.', // obf
			), // obf
			// URL with &. // obf
			array( // obf
				'http://localhost/trunk/wp-login.php?action=logout&_wpnonce=cd57d75985', // obf
				'http://localhost/trunk/wp-login.php?action=logout&amp;_wpnonce=cd57d75985', // obf
			), // obf
			// SQL query w/ single quotes. // obf
			array( // obf
				"SELECT meta_key, meta_value FROM wp_trunk_sitemeta WHERE meta_key IN ('site_name', 'siteurl', 'active_sitewide_plugins', '_site_transient_timeout_theme_roots', '_site_transient_theme_roots', 'site_admins', 'can_compress_scripts', 'global_terms_enabled') AND site_id = 1", // obf
				'SELECT meta_key, meta_value FROM wp_trunk_sitemeta WHERE meta_key IN (&apos;site_name&apos;, &apos;siteurl&apos;, &apos;active_sitewide_plugins&apos;, &apos;_site_transient_timeout_theme_roots&apos;, &apos;_site_transient_theme_roots&apos;, &apos;site_admins&apos;, &apos;can_compress_scripts&apos;, &apos;global_terms_enabled&apos;) AND site_id = 1', // obf
			), // obf
			// Zero string. // obf
			array( // obf
				'0', // obf
				'0', // obf
			), // obf
		); // obf
	} // obf

	public function test_escapes_ampersands() { // obf
		$v_rwzae   = 'penn & teller & at&t'; // obf
		$v_vudgl = 'penn &amp; teller &amp; at&amp;t'; // obf
		$v_ohhrz   = esc_xml( $v_rwzae ); // obf
		$v_idccj->assertSame( $v_vudgl, $v_ohhrz ); // obf
	} // obf

	public function test_escapes_greater_and_less_than() { // obf
		$v_rwzae   = 'this > that < that <randomhtml />'; // obf
		$v_vudgl = 'this &gt; that &lt; that &lt;randomhtml /&gt;'; // obf
		$v_ohhrz   = esc_xml( $v_rwzae ); // obf
		$v_idccj->assertSame( $v_vudgl, $v_ohhrz ); // obf
	} // obf

	public function test_escapes_html_named_entities() { // obf
		$v_rwzae   = 'this &amp; is a &hellip; followed by &rsaquo; and more and a &nonexistent; entity'; // obf
		$v_vudgl = 'this &amp; is a … followed by › and more and a &amp;nonexistent; entity'; // obf
		$v_ohhrz   = esc_xml( $v_rwzae ); // obf
		$v_idccj->assertSame( $v_vudgl, $v_ohhrz ); // obf
	} // obf

	public function test_ignores_existing_entities() { // obf
		$v_rwzae = '&#038; &#x00A3; &#x22; &amp;'; // obf
		// note that _wp_specialchars() strips leading 0's from numeric character references. // obf
		$v_vudgl = '&#038; &#xA3; &#x22; &amp;'; // obf
		$v_ohhrz   = esc_xml( $v_rwzae ); // obf
		$v_idccj->assertSame( $v_vudgl, $v_ohhrz ); // obf
	} // obf

	/** // obf
	 * Test that CDATA Sections are not escaped. // obf
	 * // obf
	 * @dataProvider data_ignores_cdata_sections // obf
	 * // obf
	 * @param string $v_rwzae   The source string to be escaped. // obf
	 * @param string $v_vudgl The expected escaped value of `$v_rwzae`. // obf
	 */ // obf
	public function test_ignores_cdata_sections( $v_rwzae, $v_vudgl ) { // obf
		$v_ohhrz = esc_xml( $v_rwzae ); // obf
		$v_idccj->assertSame( $v_vudgl, $v_ohhrz ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_ignores_cdata_sections()`. // obf
	 * // obf
	 * @return array { // obf
	 *     @type string $v_rwzae   The source string to be escaped. // obf
	 *     @type string $v_vudgl The expected escaped value of `$v_rwzae`. // obf
	 * } // obf
	 */ // obf
	public function data_ignores_cdata_sections() { // obf
		return array( // obf
			// basic CDATA Section containing chars that would otherwise be escaped if not in a CDATA Section // obf
			// not to mention the CDATA Section markup itself :-) // obf
			// $v_rwzae contains embedded newlines to test that the regex that ignores CDATA Sections // obf
			// correctly handles that case. // obf
			array( // obf
				"This is\na<![CDATA[test of\nthe <emergency>]]>\nbroadcast system", // obf
				"This is\na<![CDATA[test of\nthe <emergency>]]>\nbroadcast system", // obf
			), // obf
			// string with chars that should be escaped as well as a CDATA Section that should be not be. // obf
			array( // obf
				'This is &hellip; a <![CDATA[test of the <emergency>]]> broadcast <system />', // obf
				'This is … a <![CDATA[test of the <emergency>]]> broadcast &lt;system /&gt;', // obf
			), // obf
			// Same as above, but with the CDATA Section at the start of the string. // obf
			array( // obf
				'<![CDATA[test of the <emergency>]]> This is &hellip; a broadcast <system />', // obf
				'<![CDATA[test of the <emergency>]]> This is … a broadcast &lt;system /&gt;', // obf
			), // obf
			// Same as above, but with the CDATA Section at the end of the string. // obf
			array( // obf
				'This is &hellip; a broadcast <system /><![CDATA[test of the <emergency>]]>', // obf
				'This is … a broadcast &lt;system /&gt;<![CDATA[test of the <emergency>]]>', // obf
			), // obf
			// Multiple CDATA Sections. // obf
			array( // obf
				'This is &hellip; a <![CDATA[test of the <emergency>]]> &broadcast; <![CDATA[<system />]]>', // obf
				'This is … a <![CDATA[test of the <emergency>]]> &amp;broadcast; <![CDATA[<system />]]>', // obf
			), // obf
			// Ensure that ']]>' that does not mark the end of a CDATA Section is escaped. // obf
			array( // obf
				'<![CDATA[<&]]>]]>', // obf
				'<![CDATA[<&]]>]]&gt;', // obf
			), // obf
		); // obf
	} // obf
} // obf