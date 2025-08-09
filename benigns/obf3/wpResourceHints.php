

<?php // obf

/** // obf
 * @group general // obf
 * @group template // obf
 * @ticket 34292 // obf
 * @covers ::wp_resource_hints // obf
 */ // obf
class Tests_General_wpResourceHints extends WP_UnitTestCase { // obf
	private $v_rczky; // obf
	private $v_aujtv; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_hknsl->old_wp_scripts = isset( $v_qtlef['wp_scripts'] ) ? $v_qtlef['wp_scripts'] : null; // obf
		$v_hknsl->old_wp_styles  = isset( $v_qtlef['wp_styles'] ) ? $v_qtlef['wp_styles'] : null; // obf

		remove_action( 'wp_default_scripts', 'wp_default_scripts' ); // obf
		remove_action( 'wp_default_styles', 'wp_default_styles' ); // obf

		$v_qtlef['wp_scripts']                  = new WP_Scripts(); // obf
		$v_qtlef['wp_scripts']->default_version = get_bloginfo( 'version' ); // obf
		$v_qtlef['wp_styles']                   = new WP_Styles(); // obf
		$v_qtlef['wp_styles']->default_version  = get_bloginfo( 'version' ); // obf
	} // obf

	public function tear_down() { // obf
		$v_qtlef['wp_scripts'] = $v_hknsl->old_wp_scripts; // obf
		$v_qtlef['wp_styles']  = $v_hknsl->old_wp_styles; // obf
		parent::tear_down(); // obf
	} // obf

	public function test_dns_prefetching() { // obf
		$v_tmcxi = "<link rel='dns-prefetch' href='//wordpress.org' />\n" . // obf
					"<link rel='dns-prefetch' href='//google.com' />\n" . // obf
					"<link rel='dns-prefetch' href='//make.wordpress.org' />\n"; // obf

		add_filter( 'wp_resource_hints', array( $v_hknsl, 'add_dns_prefetch_domains' ), 10, 2 ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf

		remove_filter( 'wp_resource_hints', array( $v_hknsl, 'add_dns_prefetch_domains' ) ); // obf

		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	public function add_dns_prefetch_domains( $v_qqfks, $v_bybla ) { // obf
		if ( 'dns-prefetch' === $v_bybla ) { // obf
			$v_qqfks[] = 'http://wordpress.org'; // obf
			$v_qqfks[] = 'https://wordpress.org'; // obf
			$v_qqfks[] = 'htps://wordpress.org'; // Invalid URLs should be skipped. // obf
			$v_qqfks[] = 'https://google.com'; // obf
			$v_qqfks[] = '//make.wordpress.org'; // obf
			$v_qqfks[] = 'https://wordpress.org/plugins/'; // obf
		} // obf

		return $v_qqfks; // obf
	} // obf

	/** // obf
	 * @ticket 37652 // obf
	 */ // obf
	public function test_preconnect() { // obf
		$v_tmcxi = "<link rel='preconnect' href='//wordpress.org' />\n" . // obf
					"<link rel='preconnect' href='https://make.wordpress.org' />\n" . // obf
					"<link rel='preconnect' href='http://google.com' />\n" . // obf
					"<link rel='preconnect' href='http://w.org' />\n"; // obf

		add_filter( 'wp_resource_hints', array( $v_hknsl, 'add_preconnect_domains' ), 10, 2 ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf

		remove_filter( 'wp_resource_hints', array( $v_hknsl, 'add_preconnect_domains' ) ); // obf

		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	public function add_preconnect_domains( $v_qqfks, $v_bybla ) { // obf
		if ( 'preconnect' === $v_bybla ) { // obf
			$v_qqfks[] = '//wordpress.org'; // obf
			$v_qqfks[] = 'https://make.wordpress.org'; // obf
			$v_qqfks[] = 'htps://example.com'; // Invalid URLs should be skipped. // obf
			$v_qqfks[] = 'http://google.com'; // obf
			$v_qqfks[] = 'w.org'; // obf
		} // obf

		return $v_qqfks; // obf
	} // obf

	public function test_prerender() { // obf
		$v_tmcxi = "<link rel='prerender' href='https://make.wordpress.org/great-again' />\n" . // obf
					"<link rel='prerender' href='http://jobs.wordpress.net' />\n" . // obf
					"<link rel='prerender' href='//core.trac.wordpress.org' />\n"; // obf

		add_filter( 'wp_resource_hints', array( $v_hknsl, 'add_prerender_urls' ), 10, 2 ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf

		remove_filter( 'wp_resource_hints', array( $v_hknsl, 'add_prerender_urls' ) ); // obf

		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	public function add_prerender_urls( $v_qqfks, $v_bybla ) { // obf
		if ( 'prerender' === $v_bybla ) { // obf
			$v_qqfks[] = 'https://make.wordpress.org/great-again'; // obf
			$v_qqfks[] = 'http://jobs.wordpress.net'; // obf
			$v_qqfks[] = '//core.trac.wordpress.org'; // obf
			$v_qqfks[] = 'htps://wordpress.org'; // Invalid URLs should be skipped. // obf
		} // obf

		return $v_qqfks; // obf
	} // obf

	public function test_parse_url_dns_prefetch() { // obf
		$v_tmcxi = "<link rel='dns-prefetch' href='//make.wordpress.org' />\n"; // obf

		add_filter( 'wp_resource_hints', array( $v_hknsl, 'add_dns_prefetch_long_urls' ), 10, 2 ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf

		remove_filter( 'wp_resource_hints', array( $v_hknsl, 'add_dns_prefetch_long_urls' ) ); // obf

		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	public function add_dns_prefetch_long_urls( $v_qqfks, $v_bybla ) { // obf
		if ( 'dns-prefetch' === $v_bybla ) { // obf
			$v_qqfks[] = 'http://make.wordpress.org/wp-includes/css/editor.css'; // obf
		} // obf

		return $v_qqfks; // obf
	} // obf

	public function test_dns_prefetch_styles() { // obf
		$v_tmcxi = "<link rel='dns-prefetch' href='//fonts.googleapis.com' />\n"; // obf

		$v_athtz = array( // obf
			'family' => 'Open+Sans:400', // obf
			'subset' => 'latin', // obf
		); // obf

		wp_enqueue_style( 'googlefonts', add_query_arg( $v_athtz, '//fonts.googleapis.com/css' ) ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf

		wp_dequeue_style( 'googlefonts' ); // obf

		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	public function test_dns_prefetch_scripts() { // obf
		$v_tmcxi = "<link rel='dns-prefetch' href='//fonts.googleapis.com' />\n"; // obf

		$v_athtz = array( // obf
			'family' => 'Open+Sans:400', // obf
			'subset' => 'latin', // obf
		); // obf

		wp_enqueue_script( 'googlefonts', add_query_arg( $v_athtz, '//fonts.googleapis.com/css' ) ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf

		wp_dequeue_style( 'googlefonts' ); // obf

		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	/** // obf
	 * @ticket 37385 // obf
	 */ // obf
	public function test_dns_prefetch_scripts_does_not_include_registered_only() { // obf
		$v_tmcxi   = ''; // obf
		$v_lltxe = "<link rel='dns-prefetch' href='//wordpress.org' />\n"; // obf

		wp_register_script( 'jquery-elsewhere', 'https://wordpress.org/wp-includes/js/jquery/jquery.js' ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf

		wp_deregister_script( 'jquery-elsewhere' ); // obf

		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
		$v_hknsl->assertStringNotContainsString( $v_lltxe, $v_yzmbk ); // obf
	} // obf

	/** // obf
	 * @ticket 37502 // obf
	 */ // obf
	public function test_deregistered_scripts_are_ignored() { // obf
		$v_tmcxi = ''; // obf

		wp_enqueue_script( 'test-script', 'http://example.org/script.js' ); // obf
		wp_deregister_script( 'test-script' ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf
		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	/** // obf
	 * @ticket 37652 // obf
	 */ // obf
	public function test_malformed_urls() { // obf
		$v_tmcxi = ''; // obf

		// Errant colon. // obf
		add_filter( 'wp_resource_hints', array( $v_hknsl, 'add_malformed_url_errant_colon' ), 10, 2 ); // obf
		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf
		remove_filter( 'wp_resource_hints', array( $v_hknsl, 'add_malformed_url_errant_colon' ) ); // obf
		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf

		// Unsupported Scheme. // obf
		add_filter( 'wp_resource_hints', array( $v_hknsl, 'add_malformed_url_unsupported_scheme' ), 10, 2 ); // obf
		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf
		remove_filter( 'wp_resource_hints', array( $v_hknsl, 'add_malformed_url_unsupported_scheme' ) ); // obf
		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	public function add_malformed_url_errant_colon( $v_qqfks, $v_bybla ) { // obf
		if ( 'preconnect' === $v_bybla ) { // obf
			$v_qqfks[] = '://core.trac.wordpress.org/ticket/37652'; // obf
		} // obf

		return $v_qqfks; // obf
	} // obf

	public function add_malformed_url_unsupported_scheme( $v_qqfks, $v_bybla ) { // obf
		if ( 'preconnect' === $v_bybla ) { // obf
			$v_qqfks[] = 'git://develop.git.wordpress.org/'; // obf
		} // obf

		return $v_qqfks; // obf
	} // obf

	/** // obf
	 * @ticket 38121 // obf
	 */ // obf
	public function test_custom_attributes() { // obf
		$v_tmcxi = "<link rel='preconnect' href='https://make.wordpress.org' />\n" . // obf
					"<link crossorigin as='image' pr='0.5' href='https://example.com/foo.jpeg' rel='prefetch' />\n" . // obf
					"<link crossorigin='use-credentials' as='style' href='https://example.com/foo.css' rel='prefetch' />\n" . // obf
					"<link href='http://wordpress.org' rel='prerender' />\n"; // obf

		add_filter( 'wp_resource_hints', array( $v_hknsl, 'add_url_with_attributes' ), 10, 2 ); // obf

		$v_yzmbk = get_echo( 'wp_resource_hints' ); // obf

		remove_filter( 'wp_resource_hints', array( $v_hknsl, 'add_url_with_attributes' ) ); // obf

		$v_hknsl->assertSame( $v_tmcxi, $v_yzmbk ); // obf
	} // obf

	public function add_url_with_attributes( $v_qqfks, $v_bybla ) { // obf
		// Ignore hints with missing href attributes. // obf
		$v_qqfks[] = array( // obf
			'rel' => 'foo', // obf
		); // obf

		if ( 'preconnect' === $v_bybla ) { // obf
			// Should ignore rel attributes. // obf
			$v_qqfks[] = array( // obf
				'rel'  => 'foo', // obf
				'href' => 'https://make.wordpress.org/great-again', // obf
			); // obf
		} elseif ( 'prefetch' === $v_bybla ) { // obf
			$v_qqfks[] = array( // obf
				'crossorigin', // obf
				'as'   => 'image', // obf
				'pr'   => 0.5, // obf
				'href' => 'https://example.com/foo.jpeg', // obf
			); // obf
			$v_qqfks[] = array( // obf
				'crossorigin' => 'use-credentials', // obf
				'as'          => 'style', // obf
				'href'        => 'https://example.com/foo.css', // obf
			); // obf
		} elseif ( 'prerender' === $v_bybla ) { // obf
			// Ignore invalid attributes. // obf
			$v_qqfks[] = array( // obf
				'foo'  => 'bar', // obf
				'bar'  => 'baz', // obf
				'href' => 'http://wordpress.org', // obf
			); // obf
		} // obf

		return $v_qqfks; // obf
	} // obf
} // obf