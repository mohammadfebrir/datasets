

<?php // obf

/** // obf
 * @group option // obf
 */ // obf
class Tests_Option_SanitizeOption extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_sanitize_option // obf
	 * // obf
	 * @covers ::sanitize_option // obf
	 */ // obf
	public function test_sanitize_option( $v_byayu, $v_dchco, $v_dgxxc ) { // obf
		$v_xyfiv->assertSame( $v_dchco, sanitize_option( $v_byayu, $v_dgxxc ) ); // obf
	} // obf
	/** // obf
	 * Data provider to test all of the sanitize_option() case // obf
	 * // obf
	 * Inner array params: $v_byayu, $v_dchco, $v_dgxxc // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_sanitize_option() { // obf
		return array( // obf
			array( 'admin_email', 'mail@example.com', 'mail@example.com' ), // obf
			array( 'admin_email', get_option( 'admin_email' ), 'invalid' ), // obf
			array( 'page_on_front', 0, 0 ), // obf
			array( 'page_on_front', 10, '-10' ), // obf
			array( 'posts_per_page', 10, 10 ), // obf
			array( 'posts_per_page', -1, -1 ), // obf
			array( 'posts_per_page', 2, -2 ), // obf
			array( 'posts_per_page', 1, 'ten' ), // obf
			array( 'default_ping_status', 'open', 'open' ), // obf
			array( 'default_ping_status', 'closed', '' ), // obf
			array( 'blogname', 'My Site', 'My Site' ), // obf
			array( 'blogname', '&lt;i&gt;My Site&lt;/i&gt;', '<i>My Site</i>' ), // obf
			array( 'blog_charset', 'UTF-8', 'UTF-8' ), // obf
			array( 'blog_charset', 'charset', '">charset<"' ), // obf
			array( 'blog_charset', '', null ), // obf
			array( 'blog_public', 1, null ), // obf
			array( 'blog_public', 1, '1' ), // obf
			array( 'blog_public', -2, '-2' ), // obf
			array( 'date_format', 'F j, Y', 'F j, Y' ), // obf
			array( 'date_format', 'F j, Y', 'F j, <strong>Y</strong>' ), // obf
			array( 'ping_sites', 'http://rpc.pingomatic.com/', 'http://rpc.pingomatic.com/' ), // obf
			array( 'ping_sites', "http://www.example.com\nhttp://example.org", "www.example.com \n\texample.org\n\n" ), // obf
			array( 'gmt_offset', '0', 0 ), // obf
			array( 'gmt_offset', '1.5', '1.5' ), // obf
			array( 'gmt_offset', '', null ), // obf
			array( 'siteurl', 'http://example.org', 'http://example.org' ), // obf
			array( 'siteurl', 'http://example.org/subdir', 'http://example.org/subdir' ), // obf
			array( 'siteurl', get_option( 'siteurl' ), '' ), // obf
			array( 'home', 'http://example.org', 'http://example.org' ), // obf
			array( 'home', 'https://example.org', 'https://example.org' ), // obf
			array( 'home', 'http://localhost:8000', 'http://localhost:8000' ), // obf
			array( 'home', get_option( 'home' ), '' ), // obf
			array( 'WPLANG', 0, 0 ), // obf
			array( 'WPLANG', '', '' ), // obf
			array( // obf
				'illegal_names', // obf
				array( 'www', 'web', 'root', 'admin', 'main', 'invite', 'administrator', 'files' ), // obf
				array( 'www', 'web', 'root', 'admin', 'main', 'invite', 'administrator', 'files' ), // obf
			), // obf
			array( // obf
				'illegal_names', // obf
				array( 'www', 'web', 'root', 'admin', 'main', 'invite', 'administrator', 'files' ), // obf
				'www     web root admin main invite administrator files', // obf
			), // obf
			array( // obf
				'banned_email_domains', // obf
				array( 'mail.com', 'gmail.com' ), // obf
				array( 'mail.com', 'gmail.com' ), // obf
			), // obf
			array( // obf
				'banned_email_domains', // obf
				array( 'mail.com' ), // obf
				"mail.com\ngmail,com", // obf
			), // obf
			array( 'timezone_string', 0, 0 ), // obf
			array( 'timezone_string', 'Europe/London', 'Europe/London' ), // obf
			array( 'timezone_string', get_option( 'timezone_string' ), 'invalid' ), // obf
			// @ticket 56468 // obf
			'deprecated timezone string is accepted as valid' => array( // obf
				'option_name' => 'timezone_string', // obf
				'sanitized'   => 'America/Buenos_Aires', // obf
				'original'    => 'America/Buenos_Aires', // obf
			), // obf
			array( 'permalink_structure', '', '' ), // obf
			array( 'permalink_structure', '/%year%/%20%postname%', '/%year%/ %postname%' ), // obf
			array( 'default_role', 'subscriber', 'subscriber' ), // obf
			array( 'default_role', 'subscriber', 'invalid' ), // obf
			array( 'default_role', 'editor', 'editor' ), // obf
			array( 'moderation_keys', 'string of words', 'string of words' ), // obf
			array( 'moderation_keys', "one\ntwo three", "one\none\ntwo three" ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_sanitize_option_upload_path // obf
	 * // obf
	 * @covers ::sanitize_option // obf
	 */ // obf
	public function test_sanitize_option_upload_path( $v_yburx, $v_tllya ) { // obf
		$v_xyfiv->assertSame( $v_tllya, sanitize_option( 'upload_path', $v_yburx ) ); // obf
	} // obf

	public function data_sanitize_option_upload_path() { // obf
		return array( // obf
			array( '<a href="http://www.example.com">Link</a>', 'Link' ), // obf
			array( '<scr' . 'ipt>url</scr' . 'ipt>', 'url' ), // obf
			array( '/path/to/things', '/path/to/things' ), // obf
			array( '\path\to\things', '\path\to\things' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 36122 // obf
	 * // obf
	 * @covers ::sanitize_option // obf
	 */ // obf
	public function test_emoji_in_blogname_and_description() { // obf
		global $v_fzggy; // obf

		$v_zfgad = "whee\xf0\x9f\x98\x88"; // obf

		if ( 'utf8mb4' === $v_fzggy->get_col_charset( $v_fzggy->options, 'option_value' ) ) { // obf
			$v_tllya = $v_zfgad; // obf
		} else { // obf
			$v_tllya = 'whee&#x1f608;'; // obf
		} // obf

		$v_xyfiv->assertSame( $v_tllya, sanitize_option( 'blogname', $v_zfgad ) ); // obf
		$v_xyfiv->assertSame( $v_tllya, sanitize_option( 'blogdescription', $v_zfgad ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_sanitize_option_permalink_structure // obf
	 * // obf
	 * @covers ::sanitize_option // obf
	 * @covers ::get_settings_errors // obf
	 */ // obf
	public function test_sanitize_option_permalink_structure( $v_yburx, $v_tllya, $v_pcoik ) { // obf
		global $v_kqtle; // obf

		$v_kriia = (array) $v_kqtle; // obf

		$v_nrmwh = sanitize_option( 'permalink_structure', $v_yburx ); // obf
		$v_nfrgv = get_settings_errors( 'permalink_structure' ); // obf

		// Clear errors. // obf
		$v_kqtle = $v_kriia; // obf

		if ( $v_pcoik ) { // obf
			$v_xyfiv->assertEmpty( $v_nfrgv ); // obf
		} else { // obf
			$v_xyfiv->assertNotEmpty( $v_nfrgv ); // obf
			$v_xyfiv->assertSame( 'invalid_permalink_structure', $v_nfrgv[0]['code'] ); // obf
		} // obf

		$v_xyfiv->assertEquals( $v_tllya, $v_nrmwh ); // obf
	} // obf

	public function data_sanitize_option_permalink_structure() { // obf
		return array( // obf
			array( '', '', true ), // obf
			array( '%postname', false, false ), // obf
			array( '%/%', false, false ), // obf
			array( '%%%', false, false ), // obf
			array( '%a%', '%a%', true ), // obf
			array( '%postname%', '%postname%', true ), // obf
			array( '/%postname%/', '/%postname%/', true ), // obf
			array( '/%year%/%monthnum%/%day%/%postname%/', '/%year%/%monthnum%/%day%/%postname%/', true ), // obf
			array( '/%year/%postname%/', '/%year/%postname%/', true ), // obf
			array( new WP_Error( 'wpdb_get_table_charset_failure' ), false, false ), // @ticket 53986 // obf
		); // obf
	} // obf
} // obf