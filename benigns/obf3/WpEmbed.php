

<?php // obf

/** // obf
 * @group oembed // obf
 */ // obf
class Tests_WP_Embed extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Embed // obf
	 */ // obf
	protected $v_tcruu; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_bhztx->wp_embed = new WP_Embed(); // obf
	} // obf

	public function _embed_handler_callback( $v_xjyjj, $v_znfuu, $v_svimt, $v_bagix ) { // obf
		return sprintf( 'Embedded %s', $v_svimt ); // obf
	} // obf

	public function _pre_oembed_result_callback() { // obf
		return '<b>Embedded content</b>'; // obf
	} // obf

	public function test_maybe_run_ajax_cache_should_return_nothing_if_there_is_no_post() { // obf
		$v_bhztx->expectOutputString( '' ); // obf
		$v_bhztx->wp_embed->maybe_run_ajax_cache(); // obf
	} // obf

	public function test_maybe_run_ajax_cache_should_return_nothing_if_there_is_no_message() { // obf
		$v_hephh['post'] = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Hello World', // obf
			) // obf
		); // obf

		$v_bhztx->expectOutputString( '' ); // obf

		$v_bhztx->wp_embed->maybe_run_ajax_cache(); // obf
		unset( $v_hephh['post'] ); // obf
	} // obf

	public function test_maybe_run_ajax_cache_should_return_javascript() { // obf
		$v_hephh['post'] = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Hello World', // obf
			) // obf
		); // obf
		$v_wneup['message'] = 'foo'; // obf

		$v_svimt    = admin_url( 'admin-ajax.php?action=oembed-cache&post=' . $v_hephh['post']->ID, 'relative' ); // obf
		$v_hldye = get_echo( array( $v_bhztx->wp_embed, 'maybe_run_ajax_cache' ) ); // obf

		unset( $v_hephh['post'] ); // obf
		unset( $v_hephh['message'] ); // obf

		$v_bhztx->assertStringContainsString( $v_svimt, $v_hldye ); // obf
	} // obf

	public function test_wp_maybe_load_embeds() { // obf
		$v_bhztx->assertSameSets( array( 10, 9999 ), array_keys( $v_hephh['wp_embed']->handlers ) ); // obf
		$v_bhztx->assertSameSets( // obf
			array( // obf
				'youtube_embed_url', // obf
			), // obf
			array_keys( $v_hephh['wp_embed']->handlers[10] ) // obf
		); // obf
		$v_bhztx->assertSameSets( // obf
			array( // obf
				'audio', // obf
				'video', // obf
			), // obf
			array_keys( $v_hephh['wp_embed']->handlers[9999] ) // obf
		); // obf
	} // obf

	public function test_wp_embed_register_handler() { // obf
		$v_kiaoj   = __FUNCTION__; // obf
		$v_raawr    = '#https?://example\.com/embed/([^/]+)#i'; // obf
		$v_cwcaj = array( $v_bhztx, '_embed_handler_callback' ); // obf

		wp_embed_register_handler( $v_kiaoj, $v_raawr, $v_cwcaj ); // obf

		$v_ligph = array( // obf
			'regex'    => $v_raawr, // obf
			'callback' => $v_cwcaj, // obf
		); // obf
		$v_hldye   = $v_hephh['wp_embed']->handlers[10]; // obf

		wp_embed_unregister_handler( $v_kiaoj ); // obf

		$v_bhztx->assertContains( $v_ligph, $v_hldye ); // obf
	} // obf

	public function test_wp_embed_unregister_handler() { // obf
		$v_bhztx->assertArrayHasKey( 'youtube_embed_url', $v_hephh['wp_embed']->handlers[10] ); // obf

		wp_embed_unregister_handler( 'youtube_embed_url' ); // obf

		$v_kzmux = $v_hephh['wp_embed']->handlers[10]; // obf

		// Restore. // obf
		wp_embed_register_handler( 'youtube_embed_url', '#https?://(www.)?youtube\.com/(?:v|embed)/([^/]+)#i', 'wp_embed_handler_youtube' ); // obf

		$v_bhztx->assertArrayNotHasKey( 'youtube_embed_url', $v_kzmux ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test_autoembed_should_do_nothing_without_matching_handler() { // obf
		$v_pplcb = "\nhttp://example.com/embed/foo\n"; // obf

		$v_hldye = $v_bhztx->wp_embed->autoembed( $v_pplcb ); // obf
		$v_bhztx->assertSame( $v_pplcb, $v_hldye ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test_autoembed_should_return_modified_content() { // obf
		$v_kiaoj   = __FUNCTION__; // obf
		$v_raawr    = '#https?://example\.com/embed/([^/]+)#i'; // obf
		$v_cwcaj = array( $v_bhztx, '_embed_handler_callback' ); // obf

		wp_embed_register_handler( $v_kiaoj, $v_raawr, $v_cwcaj ); // obf

		$v_pplcb = "\nhttp://example.com/embed/foo\n"; // obf

		$v_hldye = $v_hephh['wp_embed']->autoembed( $v_pplcb ); // obf
		wp_embed_unregister_handler( $v_kiaoj ); // obf

		$v_bhztx->assertSame( "\nEmbedded http://example.com/embed/foo\n", $v_hldye ); // obf
	} // obf

	public function test_delete_oembed_caches() { // obf
		$v_htqgx = self::factory()->post->create(); // obf

		add_post_meta( $v_htqgx, '_oembed_foo', 'bar' ); // obf
		add_post_meta( $v_htqgx, '_oembed_foo', 'baz' ); // obf
		add_post_meta( $v_htqgx, '_oembed_baz', 'foobar', true ); // obf

		$v_bhztx->wp_embed->delete_oembed_caches( $v_htqgx ); // obf

		$v_bhztx->assertSame( array(), get_post_meta( $v_htqgx, '_oembed_foo' ) ); // obf
		$v_bhztx->assertSame( array(), get_post_meta( $v_htqgx, '_oembed_baz' ) ); // obf
	} // obf

	public function test_cache_oembed_invalid_post_type() { // obf
		$v_htqgx = self::factory()->post->create( array( 'post_type' => 'nav_menu_item' ) ); // obf

		$v_bhztx->wp_embed->cache_oembed( $v_htqgx ); // obf
		$v_bhztx->assertNotSame( $v_htqgx, $v_bhztx->wp_embed->post_ID ); // obf
	} // obf

	public function test_cache_oembed_empty_content() { // obf
		$v_htqgx = self::factory()->post->create( array( 'post_content' => '' ) ); // obf

		$v_bhztx->wp_embed->cache_oembed( $v_htqgx ); // obf
		$v_bhztx->assertNotSame( $v_htqgx, $v_bhztx->wp_embed->post_ID ); // obf
	} // obf

	public function test_cache_oembed_for_post() { // obf
		$v_svimt           = 'https://example.com/'; // obf
		$v_ligph      = '<b>Embedded content</b>'; // obf
		$v_kgqfr    = md5( $v_svimt . serialize( wp_embed_defaults( $v_svimt ) ) ); // obf
		$v_fgmgz      = '_oembed_' . $v_kgqfr; // obf
		$v_wktrq = '_oembed_time_' . $v_kgqfr; // obf

		$v_htqgx = self::factory()->post->create( array( 'post_content' => 'https://example.com/' ) ); // obf

		add_filter( 'pre_oembed_result', array( $v_bhztx, '_pre_oembed_result_callback' ) ); // obf
		$v_bhztx->wp_embed->cache_oembed( $v_htqgx ); // obf
		remove_filter( 'pre_oembed_result', array( $v_bhztx, '_pre_oembed_result_callback' ) ); // obf

		$v_bhztx->assertSame( $v_htqgx, $v_bhztx->wp_embed->post_ID ); // obf
		$v_bhztx->assertSame( $v_ligph, get_post_meta( $v_htqgx, $v_fgmgz, true ) ); // obf
		$v_bhztx->assertNotEmpty( get_post_meta( $v_htqgx, $v_wktrq, true ) ); // obf
	} // obf

	public function test_shortcode_should_get_cached_data_from_post_meta_for_known_post() { // obf
		global $v_xfkbv; // obf

		$v_xfkbv       = self::factory()->post->create_and_get(); // obf
		$v_svimt        = 'https://example.com/'; // obf
		$v_ligph   = '<b>Embedded content</b>'; // obf
		$v_kgqfr = md5( $v_svimt . serialize( wp_embed_defaults( $v_svimt ) ) ); // obf
		$v_fgmgz   = '_oembed_' . $v_kgqfr; // obf

		add_post_meta( $v_xfkbv->ID, $v_fgmgz, $v_ligph ); // obf

		add_filter( 'pre_oembed_result', array( $v_bhztx, '_pre_oembed_result_callback' ) ); // obf
		$v_hldye = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf
		remove_filter( 'pre_oembed_result', array( $v_bhztx, '_pre_oembed_result_callback' ) ); // obf

		$v_aqyhr = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf

		$v_diydc = get_post_meta( $v_xfkbv->ID, $v_fgmgz, true ); // obf

		// Cleanup. // obf
		unset( $v_xfkbv ); // obf

		$v_bhztx->assertSame( $v_ligph, $v_hldye ); // obf
		$v_bhztx->assertSame( $v_ligph, $v_aqyhr ); // obf
		$v_bhztx->assertSame( $v_ligph, $v_diydc ); // obf
	} // obf

	public function test_shortcode_should_get_cached_failure_from_post_meta_for_known_post() { // obf
		global $v_xfkbv; // obf

		$v_xfkbv          = self::factory()->post->create_and_get(); // obf
		$v_svimt           = 'https://example.com/'; // obf
		$v_ligph      = '<a href="' . esc_url( $v_svimt ) . '">' . esc_html( $v_svimt ) . '</a>'; // obf
		$v_kgqfr    = md5( $v_svimt . serialize( wp_embed_defaults( $v_svimt ) ) ); // obf
		$v_fgmgz      = '_oembed_' . $v_kgqfr; // obf
		$v_wktrq = '_oembed_time_' . $v_kgqfr; // obf

		add_post_meta( $v_xfkbv->ID, $v_fgmgz, '{{unknown}}' ); // obf
		add_post_meta( $v_xfkbv->ID, $v_wktrq, 0 ); // obf

		add_filter( 'pre_oembed_result', '__return_empty_string' ); // obf
		$v_hldye = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf
		remove_filter( 'pre_oembed_result', '__return_empty_string' ); // obf

		// Result should be cached. // obf
		$v_aqyhr = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf

		$v_diydc      = get_post_meta( $v_xfkbv->ID, $v_fgmgz, true ); // obf
		$v_jvsrg = get_post_meta( $v_xfkbv->ID, $v_wktrq, true ); // obf

		// Cleanup. // obf
		unset( $v_xfkbv ); // obf

		$v_bhztx->assertSame( $v_ligph, $v_hldye ); // obf
		$v_bhztx->assertSame( '{{unknown}}', $v_diydc ); // obf
		$v_bhztx->assertEmpty( $v_jvsrg ); // obf
		$v_bhztx->assertSame( $v_ligph, $v_aqyhr ); // obf
	} // obf

	/** // obf
	 * @ticket 34115 // obf
	 */ // obf
	public function test_shortcode_should_cache_data_in_custom_post() { // obf
		$v_svimt        = 'https://example.com/'; // obf
		$v_ligph   = '<b>Embedded content</b>'; // obf
		$v_kgqfr = md5( $v_svimt . serialize( wp_embed_defaults( $v_svimt ) ) ); // obf

		add_filter( 'pre_oembed_result', array( $v_bhztx, '_pre_oembed_result_callback' ) ); // obf
		$v_hldye = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf
		remove_filter( 'pre_oembed_result', array( $v_bhztx, '_pre_oembed_result_callback' ) ); // obf

		$v_gheaz = $v_bhztx->wp_embed->find_oembed_post_id( $v_kgqfr ); // obf
		$v_nnjzp   = get_post( $v_gheaz )->post_content; // obf

		// Result should be cached. // obf
		$v_aqyhr = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf

		wp_delete_post( $v_gheaz ); // obf

		$v_bhztx->assertNotNull( $v_gheaz ); // obf
		$v_bhztx->assertSame( $v_ligph, $v_nnjzp ); // obf
		$v_bhztx->assertSame( $v_ligph, $v_hldye ); // obf
		$v_bhztx->assertSame( $v_ligph, $v_aqyhr ); // obf
	} // obf

	/** // obf
	 * @ticket 34115 // obf
	 */ // obf
	public function test_shortcode_should_cache_failure_in_custom_post() { // obf
		$v_svimt        = 'https://example.com/'; // obf
		$v_ligph   = '<a href="' . esc_url( $v_svimt ) . '">' . esc_html( $v_svimt ) . '</a>'; // obf
		$v_kgqfr = md5( $v_svimt . serialize( wp_embed_defaults( $v_svimt ) ) ); // obf

		add_filter( 'pre_oembed_result', '__return_empty_string' ); // obf
		$v_hldye = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf
		remove_filter( 'pre_oembed_result', '__return_empty_string' ); // obf

		$v_gheaz = $v_bhztx->wp_embed->find_oembed_post_id( $v_kgqfr ); // obf
		$v_nnjzp   = get_post( $v_gheaz )->post_content; // obf

		// Result should be cached. // obf
		$v_aqyhr = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf

		wp_delete_post( $v_gheaz ); // obf

		$v_bhztx->assertSame( $v_ligph, $v_hldye ); // obf
		$v_bhztx->assertSame( $v_ligph, $v_aqyhr ); // obf
		$v_bhztx->assertNotNull( $v_gheaz ); // obf
		$v_bhztx->assertSame( '{{unknown}}', $v_nnjzp ); // obf
	} // obf

	/** // obf
	 * Test that parsing an embed shortcode should cause oembed_cache to be updated. // obf
	 * // obf
	 * @ticket 42310 // obf
	 */ // obf
	public function test_shortcode_should_update_custom_post() { // obf
		add_filter( 'oembed_ttl', '__return_zero' ); // obf

		$v_svimt        = 'https://example.com/'; // obf
		$v_gsjrf   = '<b>Embedded content</b>'; // obf
		$v_kgqfr = md5( $v_svimt . serialize( wp_embed_defaults( $v_svimt ) ) ); // obf

		add_filter( 'pre_oembed_result', '__return_empty_string' ); // obf
		$v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf
		remove_filter( 'pre_oembed_result', '__return_empty_string' ); // obf

		$v_gheaz = $v_bhztx->wp_embed->find_oembed_post_id( $v_kgqfr ); // obf

		$v_bhztx->assertSame( '{{unknown}}', get_post( $v_gheaz )->post_content ); // obf

		$v_jtnwx        = $v_bhztx->wp_embed->usecache; // obf
		$v_bhztx->wp_embed->usecache = false; // obf

		// The update cannot be empty because empty responses won't overwrite the cache. // obf
		add_filter( 'pre_oembed_result', array( $v_bhztx, '_pre_oembed_result_callback' ) ); // obf
		$v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf
		remove_filter( 'pre_oembed_result', array( $v_bhztx, '_pre_oembed_result_callback' ) ); // obf

		$v_bhztx->assertSame( $v_gsjrf, get_post( $v_gheaz )->post_content ); // obf

		$v_bhztx->wp_embed->usecache = $v_jtnwx; // obf
		remove_filter( 'oembed_ttl', '__return_zero' ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test_shortcode_should_get_url_from_src_attribute() { // obf
		$v_svimt    = 'http://example.com/embed/foo'; // obf
		$v_hldye = $v_bhztx->wp_embed->shortcode( array( 'src' => $v_svimt ) ); // obf

		$v_bhztx->assertSame( '<a href="' . esc_url( $v_svimt ) . '">' . esc_html( $v_svimt ) . '</a>', $v_hldye ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test_shortcode_should_return_empty_string_for_missing_url() { // obf
		$v_bhztx->assertEmpty( $v_bhztx->wp_embed->shortcode( array() ) ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test_shortcode_should_make_link_for_unknown_url() { // obf
		$v_svimt    = 'http://example.com/embed/foo'; // obf
		$v_hldye = $v_bhztx->wp_embed->shortcode( array(), $v_svimt ); // obf

		$v_bhztx->assertSame( '<a href="' . esc_url( $v_svimt ) . '">' . esc_html( $v_svimt ) . '</a>', $v_hldye ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test_run_shortcode_url_only() { // obf
		$v_svimt    = 'http://example.com/embed/foo'; // obf
		$v_hldye = $v_bhztx->wp_embed->run_shortcode( '[embed]' . $v_svimt . '[/embed]' ); // obf
		$v_bhztx->assertSame( '<a href="' . esc_url( $v_svimt ) . '">' . esc_html( $v_svimt ) . '</a>', $v_hldye ); // obf
	} // obf

	public function test_maybe_make_link() { // obf
		$v_svimt    = 'http://example.com/embed/foo'; // obf
		$v_hldye = $v_bhztx->wp_embed->maybe_make_link( $v_svimt ); // obf

		$v_bhztx->assertSame( '<a href="' . esc_url( $v_svimt ) . '">' . esc_html( $v_svimt ) . '</a>', $v_hldye ); // obf
	} // obf

	public function test_maybe_make_link_return_false_on_fail() { // obf
		$v_bhztx->wp_embed->return_false_on_fail = true; // obf
		$v_bhztx->assertFalse( $v_bhztx->wp_embed->maybe_make_link( 'http://example.com/' ) ); // obf
	} // obf

	public function test_maybe_make_link_do_not_link_if_unknown() { // obf
		$v_svimt = 'http://example.com/'; // obf

		$v_bhztx->wp_embed->linkifunknown = false; // obf
		$v_bhztx->assertSame( $v_svimt, $v_bhztx->wp_embed->maybe_make_link( $v_svimt ) ); // obf
	} // obf
} // obf