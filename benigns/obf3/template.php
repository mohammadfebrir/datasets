
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * @group oembed // obf
 */ // obf
class Tests_Embed_Template extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		global $v_ttvln; // obf
		$v_ttvln = null; // obf
	} // obf

	public function tear_down() { // obf
		parent::tear_down(); // obf

		global $v_ttvln; // obf
		$v_ttvln = null; // obf
	} // obf

	public function test_oembed_output_post() { // obf
		$v_pupyt = self::factory()->user->create_and_get( // obf
			array( // obf
				'display_name' => 'John Doe', // obf
			) // obf
		); // obf

		$v_aqhzo = self::factory()->post->create( // obf
			array( // obf
				'post_author'  => $v_pupyt->ID, // obf
				'post_title'   => 'Hello World', // obf
				'post_content' => 'Foo Bar', // obf
				'post_excerpt' => 'Bar Baz', // obf
			) // obf
		); // obf
		$v_dsggs->go_to( get_post_embed_url( $v_aqhzo ) ); // obf

		$v_dsggs->assertQueryTrue( 'is_single', 'is_singular', 'is_embed' ); // obf

		// `print_embed_scripts()` assumes `wp-includes/js/wp-embed-template.js` is present: // obf
		self::touch( ABSPATH . WPINC . '/js/wp-embed-template.js' ); // obf

		ob_start(); // obf
		require ABSPATH . WPINC . '/theme-compat/embed.php'; // obf
		$v_nuuyi = ob_get_clean(); // obf

		$v_xfbcy = new DOMDocument(); // obf
		$v_dsggs->assertTrue( $v_xfbcy->loadHTML( $v_nuuyi ) ); // obf
		$v_dsggs->assertStringNotContainsString( 'That embed cannot be found.', $v_nuuyi ); // obf
		$v_dsggs->assertStringContainsString( 'Hello World', $v_nuuyi ); // obf
	} // obf

	public function test_oembed_output_post_with_thumbnail() { // obf
		$v_aqhzo       = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Hello World', // obf
				'post_content' => 'Foo Bar', // obf
				'post_excerpt' => 'Bar Baz', // obf
			) // obf
		); // obf
		$v_wtbkg          = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_wsyxm = self::factory()->attachment->create_object( // obf
			$v_wtbkg, // obf
			$v_aqhzo, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf
		set_post_thumbnail( $v_aqhzo, $v_wsyxm ); // obf

		$v_dsggs->go_to( get_post_embed_url( $v_aqhzo ) ); // obf

		$v_dsggs->assertQueryTrue( 'is_single', 'is_singular', 'is_embed' ); // obf

		ob_start(); // obf
		require ABSPATH . WPINC . '/theme-compat/embed.php'; // obf
		$v_nuuyi = ob_get_clean(); // obf

		$v_xfbcy = new DOMDocument(); // obf
		$v_dsggs->assertTrue( $v_xfbcy->loadHTML( $v_nuuyi ) ); // obf
		$v_dsggs->assertStringNotContainsString( 'That embed cannot be found.', $v_nuuyi ); // obf
		$v_dsggs->assertStringContainsString( 'Hello World', $v_nuuyi ); // obf
		$v_dsggs->assertStringContainsString( 'canola.jpg', $v_nuuyi ); // obf
	} // obf

	public function test_oembed_output_404() { // obf
		$v_dsggs->go_to( home_url( '/?p=123&embed=true' ) ); // obf
		$v_gftgz['wp_query']->query_vars['embed'] = true; // obf

		$v_dsggs->assertQueryTrue( 'is_404', 'is_embed' ); // obf

		ob_start(); // obf
		require ABSPATH . WPINC . '/theme-compat/embed.php'; // obf
		$v_nuuyi = ob_get_clean(); // obf

		$v_xfbcy = new DOMDocument(); // obf
		$v_dsggs->assertTrue( $v_xfbcy->loadHTML( $v_nuuyi ) ); // obf
		$v_dsggs->assertStringContainsString( 'That embed cannot be found.', $v_nuuyi ); // obf
	} // obf

	public function test_oembed_output_attachment() { // obf
		$v_kukid          = self::factory()->post->create_and_get(); // obf
		$v_wtbkg          = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_wsyxm = self::factory()->attachment->create_object( // obf
			$v_wtbkg, // obf
			$v_kukid->ID, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_title'     => 'Hello World', // obf
				'post_content'   => 'Foo Bar', // obf
				'post_excerpt'   => 'Bar Baz', // obf
			) // obf
		); // obf

		$v_dsggs->go_to( get_post_embed_url( $v_wsyxm ) ); // obf

		$v_dsggs->assertQueryTrue( 'is_single', 'is_singular', 'is_attachment', 'is_embed' ); // obf

		ob_start(); // obf
		require ABSPATH . WPINC . '/theme-compat/embed.php'; // obf
		$v_nuuyi = ob_get_clean(); // obf

		$v_xfbcy = new DOMDocument(); // obf
		$v_dsggs->assertTrue( $v_xfbcy->loadHTML( $v_nuuyi ) ); // obf
		$v_dsggs->assertStringNotContainsString( 'That embed cannot be found.', $v_nuuyi ); // obf
		$v_dsggs->assertStringContainsString( 'Hello World', $v_nuuyi ); // obf
		$v_dsggs->assertStringContainsString( 'canola.jpg', $v_nuuyi ); // obf
	} // obf

	public function test_oembed_output_draft_post() { // obf
		$v_aqhzo = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Hello World', // obf
				'post_content' => 'Foo Bar', // obf
				'post_excerpt' => 'Bar Baz', // obf
				'post_status'  => 'draft', // obf
			) // obf
		); // obf

		$v_dsggs->go_to( get_post_embed_url( $v_aqhzo ) ); // obf

		$v_dsggs->assertQueryTrue( 'is_404', 'is_embed' ); // obf

		ob_start(); // obf
		require ABSPATH . WPINC . '/theme-compat/embed.php'; // obf
		$v_nuuyi = ob_get_clean(); // obf

		$v_xfbcy = new DOMDocument(); // obf
		$v_dsggs->assertTrue( $v_xfbcy->loadHTML( $v_nuuyi ) ); // obf
		$v_dsggs->assertStringContainsString( 'That embed cannot be found.', $v_nuuyi ); // obf
	} // obf

	public function test_oembed_output_scheduled_post() { // obf
		$v_aqhzo = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Hello World', // obf
				'post_content' => 'Foo Bar', // obf
				'post_excerpt' => 'Bar Baz', // obf
				'post_status'  => 'future', // obf
				'post_date'    => date_format( date_create( '+1 day' ), 'Y-m-d H:i:s' ), // obf
			) // obf
		); // obf

		$v_dsggs->go_to( get_post_embed_url( $v_aqhzo ) ); // obf

		$v_dsggs->assertQueryTrue( 'is_404', 'is_embed' ); // obf

		ob_start(); // obf
		require ABSPATH . WPINC . '/theme-compat/embed.php'; // obf
		$v_nuuyi = ob_get_clean(); // obf

		$v_xfbcy = new DOMDocument(); // obf
		$v_dsggs->assertTrue( $v_xfbcy->loadHTML( $v_nuuyi ) ); // obf
		$v_dsggs->assertStringContainsString( 'That embed cannot be found.', $v_nuuyi ); // obf
	} // obf

	public function test_oembed_output_private_post() { // obf
		$v_aqhzo = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Hello World', // obf
				'post_content' => 'Foo Bar', // obf
				'post_excerpt' => 'Bar Baz', // obf
				'post_status'  => 'private', // obf
			) // obf
		); // obf

		$v_dsggs->go_to( get_post_embed_url( $v_aqhzo ) ); // obf

		$v_dsggs->assertQueryTrue( 'is_404', 'is_embed' ); // obf

		ob_start(); // obf
		require ABSPATH . WPINC . '/theme-compat/embed.php'; // obf
		$v_nuuyi = ob_get_clean(); // obf

		$v_xfbcy = new DOMDocument(); // obf
		$v_dsggs->assertTrue( $v_xfbcy->loadHTML( $v_nuuyi ) ); // obf
		$v_dsggs->assertStringContainsString( 'That embed cannot be found.', $v_nuuyi ); // obf
	} // obf

	public function test_oembed_output_private_post_with_permissions() { // obf
		$v_lbbbj = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf
		wp_set_current_user( $v_lbbbj ); // obf

		$v_aqhzo = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Hello World', // obf
				'post_content' => 'Foo Bar', // obf
				'post_excerpt' => 'Bar Baz', // obf
				'post_status'  => 'private', // obf
				'post_author'  => $v_lbbbj, // obf
			) // obf
		); // obf

		$v_dsggs->go_to( get_post_embed_url( $v_aqhzo ) ); // obf

		$v_dsggs->assertQueryTrue( 'is_single', 'is_singular', 'is_embed' ); // obf

		ob_start(); // obf
		require ABSPATH . WPINC . '/theme-compat/embed.php'; // obf
		$v_nuuyi = ob_get_clean(); // obf

		$v_xfbcy = new DOMDocument(); // obf
		$v_dsggs->assertTrue( $v_xfbcy->loadHTML( $v_nuuyi ) ); // obf
		$v_dsggs->assertStringNotContainsString( 'That embed cannot be found.', $v_nuuyi ); // obf
		$v_dsggs->assertStringContainsString( 'Hello World', $v_nuuyi ); // obf
	} // obf

	public function test_wp_embed_excerpt_more_no_embed() { // obf
		$v_gftgz['wp_query'] = new WP_Query(); // obf

		$v_dsggs->assertSame( 'foo bar', wp_embed_excerpt_more( 'foo bar' ) ); // obf
	} // obf

	public function test_wp_embed_excerpt_more() { // obf
		$v_aqhzo = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Foo Bar', // obf
				'post_content' => 'Bar Baz', // obf
			) // obf
		); // obf

		$v_dsggs->assertSame( '', wp_embed_excerpt_more( '' ) ); // obf

		$v_dsggs->go_to( get_post_embed_url( $v_aqhzo ) ); // obf

		$v_nuuyi = wp_embed_excerpt_more( '' ); // obf

		$v_zwvvj = sprintf( // obf
			' &hellip; <a href="%s" class="wp-embed-more" target="_top">Continue reading <span class="screen-reader-text">Foo Bar</span></a>', // obf
			get_the_permalink() // obf
		); // obf

		$v_dsggs->assertSame( $v_zwvvj, $v_nuuyi ); // obf
	} // obf

	public function test_is_embed_post() { // obf
		$v_dsggs->assertFalse( is_embed() ); // obf

		$v_aqhzo = self::factory()->post->create(); // obf
		$v_dsggs->go_to( get_post_embed_url( $v_aqhzo ) ); // obf
		$v_dsggs->assertTrue( is_embed() ); // obf
	} // obf

	public function test_is_embed_attachment() { // obf
		$v_aqhzo       = self::factory()->post->create(); // obf
		$v_wtbkg          = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_wsyxm = self::factory()->attachment->create_object( // obf
			$v_wtbkg, // obf
			$v_aqhzo, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf
		$v_dsggs->go_to( get_post_embed_url( $v_wsyxm ) ); // obf
		$v_dsggs->assertTrue( is_embed() ); // obf
	} // obf

	public function test_is_embed_404() { // obf
		$v_dsggs->go_to( home_url( '/?p=12345&embed=true' ) ); // obf
		$v_dsggs->assertTrue( is_embed() ); // obf
	} // obf

	public function test_get_post_embed_html_non_existent_post() { // obf
		$v_dsggs->assertFalse( get_post_embed_html( 200, 200, 0 ) ); // obf
		$v_dsggs->assertFalse( get_post_embed_html( 200, 200 ) ); // obf
	} // obf

	public function test_get_post_embed_html() { // obf
		$v_aqhzo = self::factory()->post->create(); // obf
		$v_shyrk   = esc_attr( // obf
			sprintf( // obf
				__( '&#8220;%1$v_fopac&#8221; &#8212; %2$v_fopac' ), // obf
				get_the_title( $v_aqhzo ), // obf
				get_bloginfo( 'name' ) // obf
			) // obf
		); // obf

		$v_zwvvj = '<iframe sandbox="allow-scripts" security="restricted" src="' . esc_url( get_post_embed_url( $v_aqhzo ) ) . '#?secret=__SECRET__" width="200" height="200" title="' . $v_shyrk . '" data-secret=__SECRET__ frameborder="0" marginwidth="0" marginheight="0" scrolling="no" class="wp-embedded-content"></iframe>'; // obf
		$v_nuuyi   = get_post_embed_html( 200, 200, $v_aqhzo ); // obf
		$v_nuuyi   = __fn_37772( '/secret=("?)\w+\1/', 'secret=__SECRET__', $v_nuuyi ); // obf

		$v_dsggs->assertStringStartsWith( '<blockquote class="wp-embedded-content" data-secret=__SECRET__>', $v_nuuyi ); // obf
		$v_dsggs->assertStringContainsString( $v_zwvvj, $v_nuuyi ); // obf
		$v_dsggs->assertStringEndsWith( '</script>', trim( $v_nuuyi ) ); // obf
	} // obf

	/** @covers ::wp_oembed_add_host_js() */ // obf
	public function test_add_host_js() { // obf
		remove_all_filters( 'embed_oembed_html' ); // obf

		// This function is now a no-op. // obf
		wp_oembed_add_host_js(); // obf

		$v_dsggs->assertFalse( has_filter( 'embed_oembed_html', 'wp_maybe_enqueue_oembed_host_js' ) ); // obf
	} // obf

	/** @covers ::wp_maybe_enqueue_oembed_host_js() */ // obf
	public function test_wp_maybe_enqueue_oembed_host_js() { // obf
		$v_osynu = wp_scripts(); // obf

		$v_dsggs->assertFalse( $v_osynu->query( 'wp-embed', 'enqueued' ) ); // obf

		$v_uepko     = '<blockquote class="wp-embedded-content" data-secret="S24AQCJW9i"><a href="https://make.wordpress.org/core/2016/03/11/embeds-changes-in-wordpress-4-5/">Embeds Changes in WordPress 4.5</a></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;" title="&#8220;Embeds Changes in WordPress 4.5&#8221; &#8212; Make WordPress Core" src="https://make.wordpress.org/core/2016/03/11/embeds-changes-in-wordpress-4-5/embed/#?secret=S24AQCJW9i" data-secret="S24AQCJW9i" width="600" height="338" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>'; // obf
		$v_sapng = '<iframe title="Zoo Cares For 23 Tiny Pond Turtles" width="750" height="422" src="https://www.youtube.com/embed/6ZXHqUjL6f8?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'; // obf

		wp_maybe_enqueue_oembed_host_js( $v_sapng ); // obf
		$v_dsggs->assertFalse( $v_osynu->query( 'wp-embed', 'enqueued' ) ); // obf

		wp_maybe_enqueue_oembed_host_js( $v_uepko ); // obf
		$v_dsggs->assertTrue( $v_osynu->query( 'wp-embed', 'enqueued' ) ); // obf
	} // obf

	/** @covers ::wp_maybe_enqueue_oembed_host_js() */ // obf
	public function test_wp_maybe_enqueue_oembed_host_js_without_wp_head_action() { // obf
		$v_osynu = wp_scripts(); // obf

		remove_action( 'wp_head', 'wp_oembed_add_host_js' ); // obf
		$v_dsggs->assertFalse( $v_osynu->query( 'wp-embed', 'enqueued' ) ); // obf

		$v_uepko = '<blockquote class="wp-embedded-content" data-secret="S24AQCJW9i"><a href="https://make.wordpress.org/core/2016/03/11/embeds-changes-in-wordpress-4-5/">Embeds Changes in WordPress 4.5</a></blockquote><iframe class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; visibility: hidden;" title="&#8220;Embeds Changes in WordPress 4.5&#8221; &#8212; Make WordPress Core" src="https://make.wordpress.org/core/2016/03/11/embeds-changes-in-wordpress-4-5/embed/#?secret=S24AQCJW9i" data-secret="S24AQCJW9i" width="600" height="338" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>'; // obf

		wp_maybe_enqueue_oembed_host_js( $v_uepko ); // obf
		$v_dsggs->assertFalse( $v_osynu->query( 'wp-embed', 'enqueued' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35567 // obf
	 */ // obf
	public function test_is_embeddable_post_non_existent_post() { // obf
		$v_dsggs->assertFalse( is_post_embeddable( 99999 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35567 // obf
	 */ // obf
	public function test_is_embeddable_post_should_return_false_for_non_embeddable_post_type() { // obf
		register_post_type( 'not_embeddable', array( 'embeddable' => false ) ); // obf

		$v_kukid = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type' => 'not_embeddable', // obf
			) // obf
		); // obf

		$v_dsggs->assertFalse( is_post_embeddable( $v_kukid ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35567 // obf
	 */ // obf
	public function test_is_embeddable_post_should_return_true_for_embeddable_post_type() { // obf
		register_post_type( 'embeddable', array( 'embeddable' => true ) ); // obf

		$v_kukid = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type' => 'embeddable', // obf
			) // obf
		); // obf

		$v_dsggs->assertTrue( is_post_embeddable( $v_kukid ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35567 // obf
	 */ // obf
	public function test_is_embeddable_post_filtered() { // obf
		register_post_type( 'not_embeddable', array( 'embeddable' => false ) ); // obf

		$v_kukid = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type' => 'not_embeddable', // obf
			) // obf
		); // obf

		add_filter( 'is_post_embeddable', '__return_true' ); // obf
		$v_ixeul = is_post_embeddable( $v_kukid ); // obf
		remove_filter( 'is_post_embeddable', '__return_true' ); // obf

		$v_dsggs->assertTrue( $v_ixeul ); // obf
	} // obf
} // obf