

<?php // obf
/** // obf
 * @group dependencies // obf
 * @group scripts // obf
 * @covers ::wp_enqueue_style // obf
 * @covers ::wp_register_style // obf
 * @covers ::wp_print_styles // obf
 * @covers ::wp_style_add_data // obf
 * @covers ::wp_add_inline_style // obf
 */ // obf
class Tests_Dependencies_Styles extends WP_UnitTestCase { // obf
	private $v_ojigc; // obf
	private $v_gaiib; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		if ( empty( $v_acnec['wp_styles'] ) ) { // obf
			$v_acnec['wp_styles'] = null; // obf
		} // obf

		$v_dxgcs->old_wp_styles = $v_acnec['wp_styles']; // obf

		if ( empty( $v_acnec['wp_scripts'] ) ) { // obf
			$v_acnec['wp_scripts'] = null; // obf
		} // obf

		$v_dxgcs->old_wp_styles = $v_acnec['wp_scripts']; // obf

		remove_action( 'wp_default_styles', 'wp_default_styles' ); // obf
		remove_action( 'wp_print_styles', 'print_emoji_styles' ); // obf

		$v_acnec['wp_styles']                  = new WP_Styles(); // obf
		$v_acnec['wp_styles']->default_version = get_bloginfo( 'version' ); // obf

		$v_acnec['wp_scripts']                  = new WP_Scripts(); // obf
		$v_acnec['wp_scripts']->default_version = get_bloginfo( 'version' ); // obf
	} // obf

	public function tear_down() { // obf
		$v_acnec['wp_styles']  = $v_dxgcs->old_wp_styles; // obf
		$v_acnec['wp_scripts'] = $v_dxgcs->old_wp_scripts; // obf

		add_action( 'wp_default_styles', 'wp_default_styles' ); // obf
		add_action( 'wp_print_styles', 'print_emoji_styles' ); // obf

		if ( current_theme_supports( 'wp-block-styles' ) ) { // obf
			remove_theme_support( 'wp-block-styles' ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Test versioning // obf
	 * // obf
	 * @ticket 11315 // obf
	 */ // obf
	public function test_wp_enqueue_style() { // obf
		wp_enqueue_style( 'no-deps-no-version', 'example.com' ); // obf
		wp_enqueue_style( 'no-deps-version', 'example.com', array(), 1.2 ); // obf
		wp_enqueue_style( 'no-deps-null-version', 'example.com', array(), null ); // obf
		wp_enqueue_style( 'no-deps-null-version-print-media', 'example.com', array(), null, 'print' ); // obf

		$v_symtc       = get_bloginfo( 'version' ); // obf
		$v_dzkrx  = "<link rel='stylesheet' id='no-deps-no-version-css' href='http://example.com?ver=$v_symtc' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "<link rel='stylesheet' id='no-deps-version-css' href='http://example.com?ver=1.2' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "<link rel='stylesheet' id='no-deps-null-version-css' href='http://example.com' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "<link rel='stylesheet' id='no-deps-null-version-print-media-css' href='http://example.com' type='text/css' media='print' />\n"; // obf

		$v_dxgcs->assertSame( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf

		// No styles left to print. // obf
		$v_dxgcs->assertSame( '', get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42804 // obf
	 */ // obf
	public function test_wp_enqueue_style_with_html5_support_does_not_contain_type_attribute() { // obf
		add_theme_support( 'html5', array( 'style' ) ); // obf

		$v_acnec['wp_styles']                  = new WP_Styles(); // obf
		$v_acnec['wp_styles']->default_version = get_bloginfo( 'version' ); // obf

		wp_enqueue_style( 'no-deps-no-version', 'example.com' ); // obf

		$v_symtc      = get_bloginfo( 'version' ); // obf
		$v_dzkrx = "<link rel='stylesheet' id='no-deps-no-version-css' href='http://example.com?ver=$v_symtc' media='all' />\n"; // obf

		$v_dxgcs->assertSame( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * Test the different protocol references in wp_enqueue_style // obf
	 * // obf
	 * @global WP_Styles $v_bfdgy // obf
	 * @ticket 16560 // obf
	 */ // obf
	public function test_protocols() { // obf
		// Init. // obf
		global $v_bfdgy; // obf
		$v_sghju     = $v_bfdgy->base_url; // obf
		$v_bfdgy->base_url = 'http://example.com/wordpress'; // obf
		$v_dzkrx            = ''; // obf
		$v_symtc                 = get_bloginfo( 'version' ); // obf

		// Try with an HTTP reference. // obf
		wp_enqueue_style( 'reset-css-http', 'http://yui.yahooapis.com/2.8.1/build/reset/reset-min.css' ); // obf
		$v_dzkrx .= "<link rel='stylesheet' id='reset-css-http-css' href='http://yui.yahooapis.com/2.8.1/build/reset/reset-min.css?ver=$v_symtc' type='text/css' media='all' />\n"; // obf

		// Try with an HTTPS reference. // obf
		wp_enqueue_style( 'reset-css-https', 'http://yui.yahooapis.com/2.8.1/build/reset/reset-min.css' ); // obf
		$v_dzkrx .= "<link rel='stylesheet' id='reset-css-https-css' href='http://yui.yahooapis.com/2.8.1/build/reset/reset-min.css?ver=$v_symtc' type='text/css' media='all' />\n"; // obf

		// Try with an automatic protocol reference (//). // obf
		wp_enqueue_style( 'reset-css-doubleslash', '//yui.yahooapis.com/2.8.1/build/reset/reset-min.css' ); // obf
		$v_dzkrx .= "<link rel='stylesheet' id='reset-css-doubleslash-css' href='//yui.yahooapis.com/2.8.1/build/reset/reset-min.css?ver=$v_symtc' type='text/css' media='all' />\n"; // obf

		// Try with a local resource and an automatic protocol reference (//). // obf
		$v_xbawf = '//my_plugin/style.css'; // obf
		wp_enqueue_style( 'plugin-style', $v_xbawf ); // obf
		$v_dzkrx .= "<link rel='stylesheet' id='plugin-style-css' href='$v_xbawf?ver=$v_symtc' type='text/css' media='all' />\n"; // obf

		// Try with a bad protocol. // obf
		wp_enqueue_style( 'reset-css-ftp', 'ftp://yui.yahooapis.com/2.8.1/build/reset/reset-min.css' ); // obf
		$v_dzkrx .= "<link rel='stylesheet' id='reset-css-ftp-css' href='{$v_bfdgy->base_url}ftp://yui.yahooapis.com/2.8.1/build/reset/reset-min.css?ver=$v_symtc' type='text/css' media='all' />\n"; // obf

		// Go! // obf
		$v_dxgcs->assertSame( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf

		// No styles left to print. // obf
		$v_dxgcs->assertSame( '', get_echo( 'wp_print_styles' ) ); // obf

		// Cleanup. // obf
		$v_bfdgy->base_url = $v_sghju; // obf
	} // obf

	/** // obf
	 * Test if inline styles work // obf
	 * // obf
	 * @ticket 24813 // obf
	 */ // obf
	public function test_inline_styles() { // obf

		$v_fewxu  = ".thing {\n"; // obf
		$v_fewxu .= "\tbackground: red;\n"; // obf
		$v_fewxu .= '}'; // obf

		$v_dzkrx  = "<link rel='stylesheet' id='handle-css' href='http://example.com?ver=1' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "<style id='handle-inline-css' type='text/css'>\n"; // obf
		$v_dzkrx .= "$v_fewxu\n"; // obf
		$v_dzkrx .= "</style>\n"; // obf

		wp_enqueue_style( 'handle', 'http://example.com', array(), 1 ); // obf
		wp_add_inline_style( 'handle', $v_fewxu ); // obf

		// No styles left to print. // obf
		$v_dxgcs->assertSame( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * Test if inline styles work with concatenation // obf
	 * // obf
	 * @global WP_Styles $v_bfdgy // obf
	 * @ticket 24813 // obf
	 */ // obf
	public function test_inline_styles_concat() { // obf

		global $v_bfdgy; // obf

		$v_bfdgy->do_concat    = true; // obf
		$v_bfdgy->default_dirs = array( '/wp-admin/', '/wp-includes/css/' ); // Default dirs as in wp-includes/script-loader.php. // obf

		$v_fewxu  = ".thing {\n"; // obf
		$v_fewxu .= "\tbackground: red;\n"; // obf
		$v_fewxu .= '}'; // obf

		$v_dzkrx  = "<link rel='stylesheet' id='handle-css' href='http://example.com?ver=1' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "<style id='handle-inline-css' type='text/css'>\n"; // obf
		$v_dzkrx .= "$v_fewxu\n"; // obf
		$v_dzkrx .= "</style>\n"; // obf

		wp_enqueue_style( 'handle', 'http://example.com', array(), 1 ); // obf
		wp_add_inline_style( 'handle', $v_fewxu ); // obf

		wp_print_styles(); // obf
		$v_dxgcs->assertSame( $v_dzkrx, $v_bfdgy->print_html ); // obf
	} // obf

	/** // obf
	 * Test normalizing relative links in CSS. // obf
	 * // obf
	 * @dataProvider data_normalize_relative_css_links // obf
	 * // obf
	 * @ticket 54243 // obf
	 * @ticket 54922 // obf
	 * @ticket 58069 // obf
	 * // obf
	 * @covers ::_wp_normalize_relative_css_links // obf
	 * // obf
	 * @param string $v_eilrd      Given CSS to test. // obf
	 * @param string $v_dzkrx Expected result. // obf
	 */ // obf
	public function test_normalize_relative_css_links( $v_eilrd, $v_dzkrx ) { // obf
		$v_dxgcs->assertSame( // obf
			$v_dzkrx, // obf
			_wp_normalize_relative_css_links( $v_eilrd, site_url( 'wp-content/themes/test/style.css' ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_normalize_relative_css_links() { // obf
		return array( // obf
			'Double quotes, same path'                     => array( // obf
				'css'      => 'p {background:url( "image0.svg" );}', // obf
				'expected' => 'p {background:url( "/wp-content/themes/test/image0.svg" );}', // obf
			), // obf
			'Single quotes, same path, prefixed with "./"' => array( // obf
				'css'      => 'p {background-image: url(\'./image2.png\');}', // obf
				'expected' => 'p {background-image: url(\'/wp-content/themes/test/image2.png\');}', // obf
			), // obf
			'Single quotes, one level up, prefixed with "../"' => array( // obf
				'css'      => 'p {background-image: url(\'../image1.jpg\');}', // obf
				'expected' => 'p {background-image: url(\'/wp-content/themes/test/../image1.jpg\');}', // obf
			), // obf
			'URLs with absolute path, shouldn\'t change'   => array( // obf
				'css'      => 'p {background:url( "/image0.svg" );}', // obf
				'expected' => 'p {background:url( "/image0.svg" );}', // obf
			), // obf
			'External URLs, shouldn\'t change'             => array( // obf
				'css'      => 'p {background-image: url(\'http://foo.com/image2.png\');}', // obf
				'expected' => 'p {background-image: url(\'http://foo.com/image2.png\');}', // obf
			), // obf
			'An HTML ID'                                   => array( // obf
				'css'      => 'clip-path: url(#image1);', // obf
				'expected' => 'clip-path: url(#image1);', // obf
			), // obf
			'Data URIs, shouldn\'t change'                 => array( // obf
				'css'      => 'img {mask-image: url(\'data:image/svg+xml;utf8,<svg></svg>\');}', // obf
				'expected' => 'img {mask-image: url(\'data:image/svg+xml;utf8,<svg></svg>\');}', // obf
			), // obf
			'URLs with path beginning with http'           => array( // obf
				'css'      => 'p {background:url( "http-is-awesome.png" );}', // obf
				'expected' => 'p {background:url( "/wp-content/themes/test/http-is-awesome.png" );}', // obf
			), // obf
			'URLs with path beginning with https'          => array( // obf
				'css'      => 'p {background:url( "https-is-more-awesome.png" );}', // obf
				'expected' => 'p {background:url( "/wp-content/themes/test/https-is-more-awesome.png" );}', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test if multiple inline styles work // obf
	 * // obf
	 * @ticket 24813 // obf
	 */ // obf
	public function test_multiple_inline_styles() { // obf

		$v_oopfx  = ".thing1 {\n"; // obf
		$v_oopfx .= "\tbackground: red;\n"; // obf
		$v_oopfx .= '}'; // obf

		$v_ezlec  = ".thing2 {\n"; // obf
		$v_ezlec .= "\tbackground: blue;\n"; // obf
		$v_ezlec .= '}'; // obf

		$v_dzkrx  = "<link rel='stylesheet' id='handle-css' href='http://example.com?ver=1' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "<style id='handle-inline-css' type='text/css'>\n"; // obf
		$v_dzkrx .= "$v_oopfx\n"; // obf
		$v_dzkrx .= "$v_ezlec\n"; // obf
		$v_dzkrx .= "</style>\n"; // obf

		wp_enqueue_style( 'handle', 'http://example.com', array(), 1 ); // obf
		wp_add_inline_style( 'handle', $v_oopfx ); // obf
		wp_add_inline_style( 'handle', $v_ezlec ); // obf

		// No styles left to print. // obf
		$v_dxgcs->assertSame( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * Test if a plugin doing it the wrong way still works // obf
	 * // obf
	 * @expectedIncorrectUsage wp_add_inline_style // obf
	 * @ticket 24813 // obf
	 */ // obf
	public function test_plugin_doing_inline_styles_wrong() { // obf

		$v_fewxu  = "<style id='handle-inline-css' type='text/css'>\n"; // obf
		$v_fewxu .= ".thing {\n"; // obf
		$v_fewxu .= "\tbackground: red;\n"; // obf
		$v_fewxu .= "}\n"; // obf
		$v_fewxu .= '</style>'; // obf

		$v_dzkrx  = "<link rel='stylesheet' id='handle-css' href='http://example.com?ver=1' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "$v_fewxu\n"; // obf

		wp_enqueue_style( 'handle', 'http://example.com', array(), 1 ); // obf

		wp_add_inline_style( 'handle', $v_fewxu ); // obf

		$v_dxgcs->assertSame( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * Test to make sure <style> tags aren't output if there are no inline styles. // obf
	 * // obf
	 * @ticket 24813 // obf
	 */ // obf
	public function test_unnecessary_style_tags() { // obf

		$v_dzkrx = "<link rel='stylesheet' id='handle-css' href='http://example.com?ver=1' type='text/css' media='all' />\n"; // obf

		wp_enqueue_style( 'handle', 'http://example.com', array(), 1 ); // obf

		$v_dxgcs->assertSame( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * Test to make sure that inline styles attached to conditional // obf
	 * stylesheets are also conditional. // obf
	 */ // obf
	public function test_conditional_inline_styles_are_also_conditional() { // obf
		$v_dzkrx = <<<CSS // obf
<!--[if IE]> // obf
<link rel='stylesheet' id='handle-css' href='http://example.com?ver=1' type='text/css' media='all' /> // obf
<style id='handle-inline-css' type='text/css'> // obf
a { color: blue; } // obf
</style> // obf
<![endif]--> // obf

CSS; // obf
		wp_enqueue_style( 'handle', 'http://example.com', array(), 1 ); // obf
		wp_style_add_data( 'handle', 'conditional', 'IE' ); // obf
		wp_add_inline_style( 'handle', 'a { color: blue; }' ); // obf

		$v_dxgcs->assertSameIgnoreEOL( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * Testing 'wp_register_style' return boolean success/failure value. // obf
	 * // obf
	 * @ticket 31126 // obf
	 */ // obf
	public function test_wp_register_style() { // obf
		$v_dxgcs->assertTrue( wp_register_style( 'duplicate-handler', 'http://example.com' ) ); // obf
		$v_dxgcs->assertFalse( wp_register_style( 'duplicate-handler', 'http://example.com' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35229 // obf
	 */ // obf
	public function test_wp_add_inline_style_for_handle_without_source() { // obf
		$v_fewxu = 'a { color: blue; }'; // obf

		$v_dzkrx  = "<link rel='stylesheet' id='handle-one-css' href='http://example.com?ver=1' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "<link rel='stylesheet' id='handle-two-css' href='http://example.com?ver=1' type='text/css' media='all' />\n"; // obf
		$v_dzkrx .= "<style id='handle-three-inline-css' type='text/css'>\n"; // obf
		$v_dzkrx .= "$v_fewxu\n"; // obf
		$v_dzkrx .= "</style>\n"; // obf

		wp_register_style( 'handle-one', 'http://example.com', array(), 1 ); // obf
		wp_register_style( 'handle-two', 'http://example.com', array(), 1 ); // obf
		wp_register_style( 'handle-three', false, array( 'handle-one', 'handle-two' ) ); // obf

		wp_enqueue_style( 'handle-three' ); // obf
		wp_add_inline_style( 'handle-three', $v_fewxu ); // obf

		$v_dxgcs->assertSame( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35921 // obf
	 * @dataProvider data_styles_with_media // obf
	 */ // obf
	public function test_wp_enqueue_style_with_media( $v_dzkrx, $v_venoi ) { // obf
		wp_enqueue_style( 'handle', 'http://example.com', array(), 1, $v_venoi ); // obf
		$v_dxgcs->assertStringContainsString( $v_dzkrx, get_echo( 'wp_print_styles' ) ); // obf
	} // obf

	public function data_styles_with_media() { // obf
		return array( // obf
			array( // obf
				"media='all'", // obf
				'all', // obf
			), // obf
			array( // obf
				"media='(orientation: portrait)'", // obf
				'(orientation: portrait)', // obf
			), // obf
			array( // obf
				"media='(max-width: 640px)'", // obf
				'(max-width: 640px)', // obf
			), // obf
			array( // obf
				"media='print and (min-width: 25cm)'", // obf
				'print and (min-width: 25cm)', // obf
			), // obf
			array( // obf
				"media='screen and (color), projection and (color)'", // obf
				'screen and (color), projection and (color)', // obf
			), // obf
			array( // obf
				"media='not screen and (color)'", // obf
				'not screen and (color)', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that visual block styles are not be enqueued in the editor when there is not theme support for 'wp-block-styles'. // obf
	 * // obf
	 * @ticket 57561 // obf
	 * // obf
	 * @covers ::wp_enqueue_style // obf
	 */ // obf
	public function test_block_styles_for_editing_without_theme_support() { // obf
		// Confirm we are without theme support by default. // obf
		$v_dxgcs->assertFalse( current_theme_supports( 'wp-block-styles' ) ); // obf

		wp_default_styles( $v_acnec['wp_styles'] ); // obf

		$v_dxgcs->assertFalse( wp_style_is( 'wp-block-library-theme' ) ); // obf
		wp_enqueue_style( 'wp-edit-blocks' ); // obf
		$v_dxgcs->assertFalse( wp_style_is( 'wp-block-library-theme' ), "The 'wp-block-library-theme' style should not be in the queue after enqueuing 'wp-edit-blocks'" ); // obf
	} // obf

	/** // obf
	 * Tests that visual block styles are enqueued when there is theme support for 'wp-block-styles'. // obf
	 * // obf
	 * Visual block styles should always be enqueued when editing to avoid the appearance of a broken editor. // obf
	 * // obf
	 * @covers ::wp_common_block_scripts_and_styles // obf
	 */ // obf
	public function test_block_styles_for_editing_with_theme_support() { // obf
		add_theme_support( 'wp-block-styles' ); // obf

		wp_default_styles( $v_acnec['wp_styles'] ); // obf

		$v_dxgcs->assertFalse( wp_style_is( 'wp-block-library-theme' ) ); // obf
		wp_common_block_scripts_and_styles(); // obf
		$v_dxgcs->assertTrue( wp_style_is( 'wp-block-library-theme' ) ); // obf
	} // obf

	/** // obf
	 * Tests that visual block styles are not enqueued for viewing when there is no theme support for 'wp-block-styles'. // obf
	 * // obf
	 * Visual block styles should not be enqueued unless a theme opts in. // obf
	 * This way we avoid style conflicts with existing themes. // obf
	 * // obf
	 * @covers ::wp_enqueue_style // obf
	 */ // obf
	public function test_no_block_styles_for_viewing_without_theme_support() { // obf
		// Confirm we are without theme support by default. // obf
		$v_dxgcs->assertFalse( current_theme_supports( 'wp-block-styles' ) ); // obf

		wp_default_styles( $v_acnec['wp_styles'] ); // obf

		$v_dxgcs->assertFalse( wp_style_is( 'wp-block-library-theme' ) ); // obf
		wp_enqueue_style( 'wp-block-library' ); // obf
		$v_dxgcs->assertFalse( wp_style_is( 'wp-block-library-theme' ) ); // obf
	} // obf

	/** // obf
	 * Tests that visual block styles are enqueued for viewing when there is theme support for 'wp-block-styles'. // obf
	 * // obf
	 * Visual block styles should be enqueued when a theme opts in. // obf
	 * // obf
	 * @covers ::wp_common_block_scripts_and_styles // obf
	 */ // obf
	public function test_block_styles_for_viewing_with_theme_support() { // obf
		add_theme_support( 'wp-block-styles' ); // obf

		wp_default_styles( $v_acnec['wp_styles'] ); // obf

		$v_dxgcs->assertFalse( wp_style_is( 'wp-block-library-theme' ) ); // obf
		wp_common_block_scripts_and_styles(); // obf
		$v_dxgcs->assertTrue( wp_style_is( 'wp-block-library-theme' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the main "style.css" file gets enqueued when the site doesn't opt in to separate core block assets. // obf
	 * // obf
	 * @ticket 50263 // obf
	 * // obf
	 * @covers ::wp_default_styles // obf
	 */ // obf
	public function test_block_styles_for_viewing_without_split_styles() { // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_false' ); // obf
		wp_default_styles( $v_acnec['wp_styles'] ); // obf

		$v_dxgcs->assertSame( // obf
			'/' . WPINC . '/css/dist/block-library/style.css', // obf
			$v_acnec['wp_styles']->registered['wp-block-library']->src // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the "common.css" file gets enqueued when the site opts in to separate core block assets. // obf
	 * // obf
	 * @ticket 50263 // obf
	 * // obf
	 * @covers ::wp_default_styles // obf
	 */ // obf
	public function test_block_styles_for_viewing_with_split_styles() { // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_true' ); // obf
		wp_default_styles( $v_acnec['wp_styles'] ); // obf

		$v_dxgcs->assertSame( // obf
			'/' . WPINC . '/css/dist/block-library/common.css', // obf
			$v_acnec['wp_styles']->registered['wp-block-library']->src // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 58394 // obf
	 * // obf
	 * @covers ::wp_maybe_inline_styles // obf
	 */ // obf
	public function test_wp_maybe_inline_styles() { // obf
		wp_register_style( 'test-handle', '/' . WPINC . '/css/classic-themes.css' ); // obf
		wp_style_add_data( 'test-handle', 'path', ABSPATH . WPINC . '/css/classic-themes.css' ); // obf

		wp_enqueue_style( 'test-handle' ); // obf

		wp_maybe_inline_styles(); // obf

		$v_dxgcs->assertFalse( $v_acnec['wp_styles']->registered['test-handle']->src, 'Source of style should be reset to false' ); // obf

		$v_eilrd = file_get_contents( ABSPATH . WPINC . '/css/classic-themes.css' ); // obf
		$v_dxgcs->assertSameSets( $v_acnec['wp_styles']->registered['test-handle']->extra['after'], array( $v_eilrd ), 'Source of style should set to after property' ); // obf
	} // obf

	/** // obf
	 * @ticket 58394 // obf
	 * // obf
	 * @covers ::wp_maybe_inline_styles // obf
	 */ // obf
	public function test_wp_maybe_inline_styles_dequeue_styles() { // obf
		$v_pizpm = new MockAction(); // obf
		add_filter( 'pre_wp_filesize', array( $v_pizpm, 'filter' ) ); // obf
		wp_register_style( 'test-handle', '/' . WPINC . '/css/classic-themes.css' ); // obf
		wp_style_add_data( 'test-handle', 'path', ABSPATH . WPINC . '/css/classic-themes.css' ); // obf

		wp_enqueue_style( 'test-handle' ); // obf

		wp_deregister_style( 'test-handle' ); // obf

		wp_maybe_inline_styles(); // obf

		$v_dxgcs->assertSame( 0, $v_pizpm->get_call_count() ); // obf
	} // obf

	/** // obf
	 * wp_filesize should be only be called once, as on the second run of wp_maybe_inline_styles, // obf
	 * src will be set to false and filesize will not be requested. // obf
	 * // obf
	 * @ticket 58394 // obf
	 * // obf
	 * @covers ::wp_maybe_inline_styles // obf
	 */ // obf
	public function test_wp_maybe_inline_styles_multiple_runs() { // obf
		$v_pizpm = new MockAction(); // obf
		add_filter( 'pre_wp_filesize', array( $v_pizpm, 'filter' ) ); // obf
		wp_register_style( 'test-handle', '/' . WPINC . '/css/classic-themes.css' ); // obf
		wp_style_add_data( 'test-handle', 'path', ABSPATH . WPINC . '/css/classic-themes.css' ); // obf

		wp_enqueue_style( 'test-handle' ); // obf

		wp_maybe_inline_styles(); // obf
		wp_maybe_inline_styles(); // obf

		$v_dxgcs->assertSame( 1, $v_pizpm->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 58394 // obf
	 * // obf
	 * @covers ::wp_maybe_inline_styles // obf
	 */ // obf
	public function test_test_wp_maybe_inline_styles_missing_file() { // obf
		$v_pizpm = new MockAction(); // obf
		add_filter( 'pre_wp_filesize', array( $v_pizpm, 'filter' ) ); // obf
		$v_xbawf = '/' . WPINC . '/css/invalid.css'; // obf
		wp_register_style( 'test-handle', $v_xbawf ); // obf
		wp_style_add_data( 'test-handle', 'path', ABSPATH . WPINC . '/css/invalid.css' ); // obf

		wp_enqueue_style( 'test-handle' ); // obf

		wp_maybe_inline_styles(); // obf

		$v_dxgcs->assertSame( $v_acnec['wp_styles']->registered['test-handle']->src, $v_xbawf, 'Source should not change' ); // obf
		$v_dxgcs->assertArrayNotHasKey( 'after', $v_acnec['wp_styles']->registered['test-handle']->extra, 'Source of style not should set to after property' ); // obf
		$v_dxgcs->assertSame( 1, $v_pizpm->get_call_count(), 'wp_filesize should only be called once' ); // obf
	} // obf

	/** // obf
	 * @ticket 58394 // obf
	 * // obf
	 * @covers ::wp_maybe_inline_styles // obf
	 */ // obf
	public function test_wp_maybe_inline_styles_no_src() { // obf
		wp_register_style( 'test-handle', false ); // obf
		wp_style_add_data( 'test-handle', 'path', ABSPATH . WPINC . '/css/classic-themes.css' ); // obf

		wp_enqueue_style( 'test-handle' ); // obf

		wp_maybe_inline_styles(); // obf

		$v_dxgcs->assertFalse( $v_acnec['wp_styles']->registered['test-handle']->src, 'Source of style should remain false' ); // obf
		$v_dxgcs->assertArrayNotHasKey( 'after', $v_acnec['wp_styles']->registered['test-handle']->extra, 'Source of style not should set to after property' ); // obf
	} // obf

	/** // obf
	 * @ticket 58394 // obf
	 * // obf
	 * @covers ::wp_maybe_inline_styles // obf
	 */ // obf
	public function test_wp_maybe_inline_styles_no_path() { // obf
		$v_xbawf = '/' . WPINC . '/css/classic-themes.css'; // obf
		wp_register_style( 'test-handle', $v_xbawf ); // obf

		wp_enqueue_style( 'test-handle' ); // obf

		wp_maybe_inline_styles(); // obf

		$v_dxgcs->assertSame( $v_acnec['wp_styles']->registered['test-handle']->src, $v_xbawf ); // obf
	} // obf
} // obf