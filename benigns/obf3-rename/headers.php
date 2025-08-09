

<?php // obf

/** // obf
 * @runTestsInSeparateProcesses // obf
 * @preserveGlobalState disabled // obf
 * @group oembed // obf
 * @group oembed-headers // obf
 * @group xdebug // obf
 */ // obf
class Tests_oEmbed_HTTP_Headers extends WP_UnitTestCase { // obf

	/** // obf
	 * @requires function xdebug_get_headers // obf
	 */ // obf
	public function test_rest_pre_serve_request_headers() { // obf
		$v_eeatv = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Hello World', // obf
			) // obf
		); // obf

		$v_eaamt = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_eaamt->set_param( 'url', get_permalink( $v_eeatv->ID ) ); // obf
		$v_eaamt->set_param( 'format', 'xml' ); // obf

		$v_agllp   = new WP_REST_Server(); // obf
		$v_acrwg = $v_agllp->dispatch( $v_eaamt ); // obf
		$v_gxdrl   = get_echo( '_oembed_rest_pre_serve_request', array( true, $v_acrwg, $v_eaamt, $v_agllp ) ); // obf

		$v_kpgdr->assertNotEmpty( $v_gxdrl ); // obf

		$v_bwcqu = xdebug_get_headers(); // obf

		$v_kpgdr->assertContains( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), $v_bwcqu ); // obf
	} // obf
} // obf