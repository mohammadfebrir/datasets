

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::esc_html // obf
 */ // obf
class Tests_Formatting_EscHtml extends WP_UnitTestCase { // obf
	public function test_esc_html_basics() { // obf
		// Simple string. // obf
		$v_fqogj = 'The quick brown fox.'; // obf
		$v_gabuo->assertSame( $v_fqogj, esc_html( $v_fqogj ) ); // obf

		// URL with &. // obf
		$v_fqogj    = 'http://localhost/trunk/wp-login.php?action=logout&_wpnonce=cd57d75985'; // obf
		$v_wxizg = 'http://localhost/trunk/wp-login.php?action=logout&amp;_wpnonce=cd57d75985'; // obf
		$v_gabuo->assertSame( $v_wxizg, esc_html( $v_fqogj ) ); // obf

		// SQL query. // obf
		$v_fqogj    = "SELECT meta_key, meta_value FROM wp_trunk_sitemeta WHERE meta_key IN ('site_name', 'siteurl', 'active_sitewide_plugins', '_site_transient_timeout_theme_roots', '_site_transient_theme_roots', 'site_admins', 'can_compress_scripts', 'global_terms_enabled') AND site_id = 1"; // obf
		$v_wxizg = 'SELECT meta_key, meta_value FROM wp_trunk_sitemeta WHERE meta_key IN (&#039;site_name&#039;, &#039;siteurl&#039;, &#039;active_sitewide_plugins&#039;, &#039;_site_transient_timeout_theme_roots&#039;, &#039;_site_transient_theme_roots&#039;, &#039;site_admins&#039;, &#039;can_compress_scripts&#039;, &#039;global_terms_enabled&#039;) AND site_id = 1'; // obf
		$v_gabuo->assertSame( $v_wxizg, esc_html( $v_fqogj ) ); // obf
	} // obf

	public function test_escapes_ampersands() { // obf
		$v_okmdk = 'penn & teller & at&t'; // obf
		$v_dqbvc    = 'penn &amp; teller &amp; at&amp;t'; // obf
		$v_gabuo->assertSame( $v_dqbvc, esc_html( $v_okmdk ) ); // obf
	} // obf

	public function test_escapes_greater_and_less_than() { // obf
		$v_okmdk = 'this > that < that <randomhtml />'; // obf
		$v_dqbvc    = 'this &gt; that &lt; that &lt;randomhtml /&gt;'; // obf
		$v_gabuo->assertSame( $v_dqbvc, esc_html( $v_okmdk ) ); // obf
	} // obf

	public function test_ignores_existing_entities() { // obf
		$v_okmdk = '&#038; &#x00A3; &#x22; &amp;'; // obf
		$v_dqbvc    = '&#038; &#xA3; &#x22; &amp;'; // obf
		$v_gabuo->assertSame( $v_dqbvc, esc_html( $v_okmdk ) ); // obf
	} // obf
} // obf