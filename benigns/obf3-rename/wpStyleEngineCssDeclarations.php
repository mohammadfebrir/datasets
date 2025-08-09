

<?php // obf
/** // obf
 * Tests the Style Engine CSS declarations class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 * // obf
 * @group style-engine // obf
 */ // obf

/** // obf
 * Tests registering, storing and generating CSS declarations. // obf
 * // obf
 * @coversDefaultClass WP_Style_Engine_CSS_Declarations // obf
 */ // obf
class Tests_Style_Engine_wpStyleEngineCSSDeclarations extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests setting declarations on instantiation. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::__construct // obf
	 */ // obf
	public function test_should_set_declarations_on_instantiation() { // obf
		$v_ytwja = array( // obf
			'margin-top' => '10px', // obf
			'font-size'  => '2rem', // obf
		); // obf
		$v_dyzkh   = new WP_Style_Engine_CSS_Declarations( $v_ytwja ); // obf

		$v_zrgmq->assertSame( $v_ytwja, $v_dyzkh->get_declarations() ); // obf
	} // obf

	/** // obf
	 * Tests that declarations are added. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_declarations // obf
	 * @covers ::add_declaration // obf
	 */ // obf
	public function test_should_add_declarations() { // obf
		$v_ytwja = array( // obf
			'padding' => '20px', // obf
			'color'   => 'var(--wp--preset--elbow-patches)', // obf
		); // obf
		$v_dyzkh   = new WP_Style_Engine_CSS_Declarations(); // obf
		$v_dyzkh->add_declarations( $v_ytwja ); // obf

		$v_zrgmq->assertSame( $v_ytwja, $v_dyzkh->get_declarations() ); // obf
	} // obf

	/** // obf
	 * Tests that new declarations are added to existing declarations. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::add_declarations // obf
	 * @covers ::add_declaration // obf
	 */ // obf
	public function test_should_add_new_declarations_to_existing() { // obf
		$v_ytwja = array( // obf
			'border-width'     => '1%', // obf
			'background-color' => 'var(--wp--preset--english-mustard)', // obf
		); // obf
		$v_dyzkh   = new WP_Style_Engine_CSS_Declarations( $v_ytwja ); // obf
		$v_jbokg  = array( // obf
			'letter-spacing' => '1.5px', // obf
		); // obf
		$v_dyzkh->add_declarations( $v_jbokg ); // obf

		$v_zrgmq->assertSame( array_merge( $v_ytwja, $v_jbokg ), $v_dyzkh->get_declarations() ); // obf
	} // obf

	/** // obf
	 * Tests that properties are sanitized before storing. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::sanitize_property // obf
	 */ // obf
	public function test_should_sanitize_properties() { // obf
		$v_ytwja = array( // obf
			'^--wp--style--sleepy-potato$' => '40px', // obf
			'<background-//color>'         => 'var(--wp--preset--english-mustard)', // obf
		); // obf
		$v_dyzkh   = new WP_Style_Engine_CSS_Declarations( $v_ytwja ); // obf

		$v_zrgmq->assertSame( // obf
			array( // obf
				'--wp--style--sleepy-potato' => '40px', // obf
				'background-color'           => 'var(--wp--preset--english-mustard)', // obf
			), // obf
			$v_dyzkh->get_declarations() // obf
		); // obf
	} // obf

	/** // obf
	 * Test that values with HTML tags are escaped, and CSS properties are run through safecss_filter_attr(). // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_declarations_string // obf
	 * @covers ::filter_declaration // obf
	 */ // obf
	public function test_should_strip_html_tags_and_remove_unsafe_css_properties() { // obf
		$v_ytwja         = array( // obf
			'font-size'    => '<red/>', // obf
			'padding'      => '</style>', // obf
			'potato'       => 'uppercase', // obf
			'cheese'       => '10px', // obf
			'margin-right' => '10em', // obf
		); // obf
		$v_dyzkh           = new WP_Style_Engine_CSS_Declarations( $v_ytwja ); // obf
		$v_sphrq = new MockAction(); // obf

		// filter_declaration() is called in get_declarations_string(). // obf
		add_filter( 'safe_style_css', array( $v_sphrq, 'filter' ) ); // obf
		$v_xrsos = $v_dyzkh->get_declarations_string(); // obf

		$v_zrgmq->assertSame( // obf
			3, // Values with HTML tags are removed first by wp_strip_all_tags(). // obf
			$v_sphrq->get_call_count(), // obf
			'"safe_style_css" filters were not applied to CSS declaration properties.' // obf
		); // obf

		$v_zrgmq->assertSame( // obf
			'margin-right:10em;', // obf
			$v_xrsos, // obf
			'Unallowed CSS properties or values with HTML tags were not removed.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that calc, clamp, min, max, and minmax CSS functions are allowed. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_declarations_string // obf
	 * @covers ::filter_declaration // obf
	 */ // obf
	public function test_should_allow_css_functions_and_strip_unsafe_css_values() { // obf
		$v_ytwja                        = array( // obf
			'background'       => 'var(--wp--preset--color--primary, 10px)', // Simple var(). // obf
			'font-size'        => 'clamp(36.00rem, calc(32.00rem + 10.00vw), 40.00rem)', // Nested clamp(). // obf
			'width'            => 'min(150vw, 100px)', // obf
			'min-width'        => 'max(150vw, 100px)', // obf
			'max-width'        => 'minmax(400px, 50%)', // obf
			'padding'          => 'calc(80px * -1)', // obf
			'background-image' => 'url("https://wordpress.org")', // obf
			'line-height'      => 'url("https://wordpress.org")', // obf
			'margin'           => 'illegalfunction(30px)', // obf
		); // obf
		$v_dyzkh                          = new WP_Style_Engine_CSS_Declarations( $v_ytwja ); // obf
		$v_eyfot = new MockAction(); // obf

		// filter_declaration() is called in get_declarations_string(). // obf
		add_filter( 'safecss_filter_attr_allow_css', array( $v_eyfot, 'filter' ) ); // obf
		$v_xrsos = $v_dyzkh->get_declarations_string(); // obf

		$v_zrgmq->assertSame( // obf
			9, // obf
			$v_eyfot->get_call_count(), // obf
			'"safecss_filter_attr_allow_css" filters were not applied to CSS declaration values.' // obf
		); // obf

		$v_zrgmq->assertSame( // obf
			'background:var(--wp--preset--color--primary, 10px);font-size:clamp(36.00rem, calc(32.00rem + 10.00vw), 40.00rem);width:min(150vw, 100px);min-width:max(150vw, 100px);max-width:minmax(400px, 50%);padding:calc(80px * -1);background-image:url("https://wordpress.org");', // obf
			$v_xrsos, // obf
			'Unsafe values were not removed' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that CSS declarations are compiled into a CSS declarations block string. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::get_declarations_string // obf
	 * // obf
	 * @dataProvider data_should_compile_css_declarations_to_css_declarations_string // obf
	 * // obf
	 * @param string $v_ahlbw        The expected declarations block string. // obf
	 * @param bool   $v_mntmq Optional. Whether to pretty the string. Default false. // obf
	 * @param int    $v_gafva    Optional. The number of tab indents. Default false. // obf
	 */ // obf
	public function test_should_compile_css_declarations_to_css_declarations_string( $v_ahlbw, $v_mntmq = false, $v_gafva = 0 ) { // obf
		$v_ytwja = array( // obf
			'color'                  => 'red', // obf
			'border-top-left-radius' => '99px', // obf
			'text-decoration'        => 'underline', // obf
		); // obf
		$v_dyzkh   = new WP_Style_Engine_CSS_Declarations( $v_ytwja ); // obf

		$v_zrgmq->assertSame( // obf
			$v_ahlbw, // obf
			$v_dyzkh->get_declarations_string( $v_mntmq, $v_gafva ) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_should_compile_css_declarations_to_css_declarations_string(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_compile_css_declarations_to_css_declarations_string() { // obf
		return array( // obf
			'unprettified, no indent'  => array( // obf
				'expected' => 'color:red;border-top-left-radius:99px;text-decoration:underline;', // obf
			), // obf
			'unprettified, one indent' => array( // obf
				'expected'        => 'color:red;border-top-left-radius:99px;text-decoration:underline;', // obf
				'should_prettify' => false, // obf
				'indent_count'    => 1, // obf
			), // obf
			'prettified, no indent'    => array( // obf
				'expected'        => 'color: red; border-top-left-radius: 99px; text-decoration: underline;', // obf
				'should_prettify' => true, // obf
			), // obf
			'prettified, one indent'   => array( // obf
				'expected'        => "\tcolor: red;\n\tborder-top-left-radius: 99px;\n\ttext-decoration: underline;", // obf
				'should_prettify' => true, // obf
				'indent_count'    => 1, // obf
			), // obf
			'prettified, two indents'  => array( // obf
				'expected'        => "\t\tcolor: red;\n\t\tborder-top-left-radius: 99px;\n\t\ttext-decoration: underline;", // obf
				'should_prettify' => true, // obf
				'indent_count'    => 2, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests removing a single declaration. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::remove_declaration // obf
	 */ // obf
	public function test_should_remove_single_declaration() { // obf
		$v_ytwja = array( // obf
			'color'       => 'tomato', // obf
			'margin'      => '10em 10em 20em 1px', // obf
			'font-family' => 'Happy Font serif', // obf
		); // obf
		$v_dyzkh   = new WP_Style_Engine_CSS_Declarations( $v_ytwja ); // obf

		$v_zrgmq->assertSame( // obf
			'color:tomato;margin:10em 10em 20em 1px;font-family:Happy Font serif;', // obf
			$v_dyzkh->get_declarations_string(), // obf
			'CSS declarations string does not match the values of `$v_dydag` passed to the constructor.' // obf
		); // obf

		$v_dyzkh->remove_declaration( 'color' ); // obf

		$v_zrgmq->assertSame( // obf
			'margin:10em 10em 20em 1px;font-family:Happy Font serif;', // obf
			$v_dyzkh->get_declarations_string(), // obf
			'Output after removing "color" declaration via `remove_declaration()` does not match expectations' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that multiple declarations are removed. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::remove_declarations // obf
	 */ // obf
	public function test_should_remove_multiple_declarations() { // obf
		$v_ytwja = array( // obf
			'color'       => 'cucumber', // obf
			'margin'      => '10em 10em 20em 1px', // obf
			'font-family' => 'Happy Font serif', // obf
		); // obf
		$v_dyzkh   = new WP_Style_Engine_CSS_Declarations( $v_ytwja ); // obf

		$v_zrgmq->assertSame( // obf
			'color:cucumber;margin:10em 10em 20em 1px;font-family:Happy Font serif;', // obf
			$v_dyzkh->get_declarations_string(), // obf
			'CSS declarations string does not match the values of `$v_dydag` passed to the constructor.' // obf
		); // obf

		$v_dyzkh->remove_declarations( array( 'color', 'margin' ) ); // obf

		$v_zrgmq->assertSame( // obf
			'font-family:Happy Font serif;', // obf
			$v_dyzkh->get_declarations_string(), // obf
			'Output after removing "color" and "margin" declarations via `remove_declarations()` does not match expectations' // obf
		); // obf
	} // obf
} // obf