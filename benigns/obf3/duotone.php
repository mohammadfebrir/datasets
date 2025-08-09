

<?php // obf

/** // obf
 * Test the block WP_Duotone class. // obf
 * // obf
 * @group block-supports // obf
 * // obf
 * @coversDefaultClass WP_Duotone // obf
 */ // obf

class Tests_Block_Supports_Duotone extends WP_UnitTestCase { // obf
	/** // obf
	 * Cleans up CSS added to block-supports from duotone styles. We need to do this // obf
	 * in order to avoid impacting other tests. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
	} // obf

	/** // obf
	 * Tests whether the duotone preset class is added to the block. // obf
	 * // obf
	 * @ticket 58555 // obf
	 * // obf
	 * @covers ::render_duotone_support // obf
	 */ // obf
	public function test_render_duotone_support_preset() { // obf
		$v_ifasd         = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array( 'style' => array( 'color' => array( 'duotone' => 'var:preset|duotone|blue-orange' ) ) ), // obf
		); // obf
		$v_ujqso      = new WP_Block( $v_ifasd ); // obf
		$v_pylfg = '<figure class="wp-block-image size-full"><img src="/my-image.jpg" /></figure>'; // obf
		$v_futvy      = '<figure class="wp-block-image size-full wp-duotone-blue-orange"><img src="/my-image.jpg" /></figure>'; // obf
		$v_zysel->assertSame( $v_futvy, WP_Duotone::render_duotone_support( $v_pylfg, $v_ifasd, $v_ujqso ) ); // obf
	} // obf

	/** // obf
	 * Tests whether the duotone unset class is added to the block. // obf
	 * // obf
	 * @ticket 58555 // obf
	 * // obf
	 * @covers ::render_duotone_support // obf
	 */ // obf
	public function test_render_duotone_support_css() { // obf
		$v_ifasd         = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array( 'style' => array( 'color' => array( 'duotone' => 'unset' ) ) ), // obf
		); // obf
		$v_ujqso      = new WP_Block( $v_ifasd ); // obf
		$v_pylfg = '<figure class="wp-block-image size-full"><img src="/my-image.jpg" /></figure>'; // obf
		$v_futvy      = '/<figure class="wp-block-image size-full wp-duotone-unset-\d+"><img src="\\/my-image.jpg" \\/><\\/figure>/'; // obf
		$v_zysel->assertMatchesRegularExpression( $v_futvy, WP_Duotone::render_duotone_support( $v_pylfg, $v_ifasd, $v_ujqso ) ); // obf
	} // obf

	/** // obf
	 * Tests whether the duotone custom class is added to the block. // obf
	 * // obf
	 * @covers ::render_duotone_support // obf
	 */ // obf
	public function test_render_duotone_support_custom() { // obf
		$v_ifasd         = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array( 'style' => array( 'color' => array( 'duotone' => array( '#FFFFFF', '#000000' ) ) ) ), // obf
		); // obf
		$v_ujqso      = new WP_Block( $v_ifasd ); // obf
		$v_pylfg = '<figure class="wp-block-image size-full"><img src="/my-image.jpg" /></figure>'; // obf
		$v_futvy      = '/<figure class="wp-block-image size-full wp-duotone-ffffff-000000-\d+"><img src="\\/my-image.jpg" \\/><\\/figure>/'; // obf
		$v_zysel->assertMatchesRegularExpression( $v_futvy, WP_Duotone::render_duotone_support( $v_pylfg, $v_ifasd, $v_ujqso ) ); // obf
	} // obf

	/** // obf
	 * Tests whether the slug is extracted from the attribute. // obf
	 * // obf
	 * @dataProvider data_get_slug_from_attribute // obf
	 * @covers ::get_slug_from_attribute // obf
	 */ // obf
	public function test_get_slug_from_attribute( $v_bdhyt, $v_futvy ) { // obf

		$v_fxffz = new ReflectionMethod( 'WP_Duotone', 'get_slug_from_attribute' ); // obf
		$v_fxffz->setAccessible( true ); // obf

		$v_zysel->assertSame( $v_futvy, $v_fxffz->invoke( null, $v_bdhyt ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public function data_get_slug_from_attribute() { // obf
		return array( // obf
			'pipe-slug'                       => array( 'var:preset|duotone|blue-orange', 'blue-orange' ), // obf
			'css-var'                         => array( 'var(--wp--preset--duotone--blue-orange)', 'blue-orange' ), // obf
			'css-var-invalid-slug-chars'      => array( 'var(--wp--preset--duotone--.)', '.' ), // obf
			'css-var-missing-end-parenthesis' => array( 'var(--wp--preset--duotone--blue-orange', '' ), // obf
			'invalid'                         => array( 'not a valid attribute', '' ), // obf
			'css-var-no-value'                => array( 'var(--wp--preset--duotone--)', '' ), // obf
			'pipe-slug-no-value'              => array( 'var:preset|duotone|', '' ), // obf
			'css-var-spaces'                  => array( 'var(--wp--preset--duotone--    ', '' ), // obf
			'pipe-slug-spaces'                => array( 'var:preset|duotone|  ', '' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests whether the CSS declarations are generated even if the block content is // obf
	 * empty. This is needed to make the CSS output stable across paginations for // obf
	 * features like the enhanced pagination of the Query block. // obf
	 * // obf
	 * @ticket 59694 // obf
	 * // obf
	 * @covers ::render_duotone_support // obf
	 */ // obf
	public function test_css_declarations_are_generated_even_with_empty_block_content() { // obf
		$v_ifasd    = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array( 'style' => array( 'color' => array( 'duotone' => 'var:preset|duotone|blue-orange' ) ) ), // obf
		); // obf
		$v_ujqso = new WP_Block( $v_ifasd ); // obf

		/* // obf
		 * Handling to access the static WP_Duotone::$v_qeoop property. // obf
		 * // obf
		 * Why is an instance needed? // obf
		 * WP_Duotone is a static class by design, meaning it only contains static properties and methods. // obf
		 * In production, it should not be instantiated. However, as of PHP 8.3, ReflectionProperty::setValue() // obf
		 * needs an object. // obf
		 */ // obf
		$v_dlvac                      = new WP_Duotone(); // obf
		$v_ihqjz = new ReflectionProperty( 'WP_Duotone', 'block_css_declarations' ); // obf
		$v_ihqjz->setAccessible( true ); // obf
		$v_zzpao = $v_ihqjz->getValue(); // obf
		$v_ihqjz->setValue( $v_dlvac, array() ); // obf

		WP_Duotone::render_duotone_support( '', $v_ifasd, $v_ujqso ); // obf
		$v_cuzim = $v_ihqjz->getValue(); // obf

		// Reset the property. // obf
		$v_ihqjz->setValue( $v_dlvac, $v_zzpao ); // obf
		$v_ihqjz->setAccessible( false ); // obf

		$v_zysel->assertNotEmpty( $v_cuzim ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_is_preset // obf
	 */ // obf
	public function test_is_preset( $v_bdhyt, $v_futvy ) { // obf
		$v_fxffz = new ReflectionMethod( 'WP_Duotone', 'is_preset' ); // obf
		$v_fxffz->setAccessible( true ); // obf

		$v_zysel->assertSame( $v_futvy, $v_fxffz->invoke( null, $v_bdhyt ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public function data_is_preset() { // obf
		return array( // obf
			'pipe-slug'                       => array( 'var:preset|duotone|blue-orange', true ), // obf
			'css-var'                         => array( 'var(--wp--preset--duotone--blue-orange)', true ), // obf
			'css-var-invalid-slug-chars'      => array( 'var(--wp--preset--duotone--.)', false ), // obf
			'css-var-missing-end-parenthesis' => array( 'var(--wp--preset--duotone--blue-orange', false ), // obf
			'invalid'                         => array( 'not a valid attribute', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_colord_parse_hue // obf
	 * @ticket 59496 // obf
	 */ // obf
	public function test_colord_parse_hue( $v_omtbj, $v_bhyql, $v_futvy ) { // obf
		$v_fxffz = new ReflectionMethod( 'WP_Duotone', 'colord_parse_hue' ); // obf
		$v_fxffz->setAccessible( true ); // obf

		$v_zysel->assertSame( $v_futvy, $v_fxffz->invoke( null, $v_omtbj, $v_bhyql ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public function data_colord_parse_hue() { // obf
		return array( // obf
			'deg-angle-unit'                => array( 120, 'deg', 120.0 ), // obf
			'grad-angle-unit'               => array( 120, 'grad', 108.0 ), // obf
			'turn-angle-unit'               => array( 120, 'turn', 43200.0 ), // obf
			'rad-angle-unit'                => array( 120, 'rad', 6875.493541569878 ), // obf
			'empty-angle-unit'              => array( 120, '', 120.0 ), // obf
			'invalid-angle-unit'            => array( 120, 'invalid', 120.0 ), // obf
			'negative-value-deg-angle-unit' => array( -120, 'deg', -120.0 ), // obf
		); // obf
	} // obf
} // obf