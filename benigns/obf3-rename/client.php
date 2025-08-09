

<?php // obf
require_once ABSPATH . WPINC . '/class-IXR.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-http-ixr-client.php'; // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_Client extends WP_XMLRPC_UnitTestCase { // obf

	/** // obf
	 * @ticket 26947 // obf
	 */ // obf
	public function test_ixr_client_allows_query_strings() { // obf
		$v_zljfr = new IXR_Client( 'http://example.com/server.php?this-is-needed=true#not-this' ); // obf
		$v_hjzls->assertSame( 'example.com', $v_zljfr->server ); // obf
		$v_hjzls->assertSame( 80, $v_zljfr->port ); // obf
		$v_hjzls->assertSame( '/server.php?this-is-needed=true', $v_zljfr->path ); // obf
	} // obf

	/** // obf
	 * @ticket 26947 // obf
	 */ // obf
	public function test_wp_ixr_client_allows_query_strings() { // obf
		$v_zljfr = new WP_HTTP_IXR_Client( 'http://example.com/server.php?this-is-needed=true#not-this' ); // obf
		$v_hjzls->assertSame( 'example.com', $v_zljfr->server ); // obf
		$v_hjzls->assertFalse( $v_zljfr->port ); // obf
		$v_hjzls->assertSame( '/server.php?this-is-needed=true', $v_zljfr->path ); // obf
	} // obf
} // obf