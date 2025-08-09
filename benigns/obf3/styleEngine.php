

<?php // obf
/** // obf
 * Tests the Style Engine global functions that interact with the WP_Style_Engine class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 * // obf
 * @group style-engine // obf
 */ // obf

/** // obf
 * Tests for registering, storing and generating styles. // obf
 */ // obf
class Tests_wpStyleEngine extends WP_UnitTestCase { // obf
	/** // obf
	 * Cleans up stores after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests generating block styles and classnames based on various manifestations of the $v_bwzfm argument. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 58549 // obf
	 * @ticket 58590 // obf
	 * @ticket 60175 // obf
	 * @ticket 61720 // obf
	 * @ticket 62189 // obf
	 * // obf
	 * @covers ::wp_style_engine_get_styles // obf
	 * // obf
	 * @dataProvider data_wp_style_engine_get_styles // obf
	 * // obf
	 * @param array  $v_bwzfm    The incoming block styles object. // obf
	 * @param array  $v_vbygc         { // obf
	 *     An array of options to pass to `wp_style_engine_get_styles()`. // obf
	 * // obf
	 *     @type string|null $v_rqdry                    An identifier describing the origin of the style object, e.g., 'block-supports' or 'global-styles'. Default is `null`. // obf
	 *                                                   When set, the style engine will attempt to store the CSS rules, where a selector is also passed. // obf
	 *     @type bool        $v_fryhv Whether to skip converting incoming CSS var patterns, e.g., `var:preset|<PRESET_TYPE>|<PRESET_SLUG>`, to var( --wp--preset--* ) values. Default `false`. // obf
	 *     @type string      $v_vzltd                   Optional. When a selector is passed, the value of `$v_qiyyq` in the return value will comprise a full CSS rule `$v_vzltd { ...$v_tfrxr }`, // obf
	 *                                                   otherwise, the value will be a concatenated string of CSS declarations. // obf
	 * } // obf
	 * @param string $v_hwfxg The expected output. // obf
	 */ // obf
	public function test_wp_style_engine_get_styles( $v_bwzfm, $v_vbygc, $v_hwfxg ) { // obf
		$v_wwelc = wp_style_engine_get_styles( $v_bwzfm, $v_vbygc ); // obf

		$v_oiqsk->assertSame( $v_hwfxg, $v_wwelc ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_style_engine_get_styles(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_style_engine_get_styles() { // obf
		return array( // obf
			'default_return_value'                         => array( // obf
				'block_styles'    => array(), // obf
				'options'         => null, // obf
				'expected_output' => array(), // obf
			), // obf

			'inline_invalid_block_styles_empty'            => array( // obf
				'block_styles'    => 'hello world!', // obf
				'options'         => null, // obf
				'expected_output' => array(), // obf
			), // obf

			'inline_invalid_block_styles_unknown_style'    => array( // obf
				'block_styles'    => array( // obf
					'pageBreakAfter' => 'verso', // obf
				), // obf
				'options'         => null, // obf
				'expected_output' => array(), // obf
			), // obf

			'inline_invalid_block_styles_unknown_definition' => array( // obf
				'block_styles'    => array( // obf
					'pageBreakAfter' => 'verso', // obf
				), // obf
				'options'         => null, // obf
				'expected_output' => array(), // obf
			), // obf

			'inline_invalid_block_styles_unknown_property' => array( // obf
				'block_styles'    => array( // obf
					'spacing' => array( // obf
						'gap' => '1000vw', // obf
					), // obf
				), // obf
				'options'         => null, // obf
				'expected_output' => array(), // obf
			), // obf

			'valid_inline_css_and_classnames_as_default_context' => array( // obf
				'block_styles'    => array( // obf
					'color'   => array( // obf
						'text' => 'var:preset|color|texas-flood', // obf
					), // obf
					'spacing' => array( // obf
						'margin'  => '111px', // obf
						'padding' => '0', // obf
					), // obf
					'border'  => array( // obf
						'color' => 'var:preset|color|cool-caramel', // obf
						'width' => '2rem', // obf
						'style' => 'dotted', // obf
					), // obf
				), // obf
				'options'         => array( 'convert_vars_to_classnames' => true ), // obf
				'expected_output' => array( // obf
					'css'          => 'border-style:dotted;border-width:2rem;padding:0;margin:111px;', // obf
					'declarations' => array( // obf
						'border-style' => 'dotted', // obf
						'border-width' => '2rem', // obf
						'padding'      => '0', // obf
						'margin'       => '111px', // obf
					), // obf
					'classnames'   => 'has-text-color has-texas-flood-color has-border-color has-cool-caramel-border-color', // obf
				), // obf
			), // obf

			'inline_valid_box_model_style'                 => array( // obf
				'block_styles'    => array( // obf
					'spacing' => array( // obf
						'padding' => array( // obf
							'top'    => '42px', // obf
							'left'   => '2%', // obf
							'bottom' => '44px', // obf
							'right'  => '5rem', // obf
						), // obf
						'margin'  => array( // obf
							'top'    => '12rem', // obf
							'left'   => '2vh', // obf
							'bottom' => '2px', // obf
							'right'  => '10em', // obf
						), // obf
					), // obf
					'border'  => array( // obf
						'radius' => array( // obf
							'topLeft'     => '99px', // obf
							'topRight'    => '98px', // obf
							'bottomLeft'  => '97px', // obf
							'bottomRight' => '96px', // obf
						), // obf
					), // obf
				), // obf
				'options'         => null, // obf
				'expected_output' => array( // obf
					'css'          => 'border-top-left-radius:99px;border-top-right-radius:98px;border-bottom-left-radius:97px;border-bottom-right-radius:96px;padding-top:42px;padding-left:2%;padding-bottom:44px;padding-right:5rem;margin-top:12rem;margin-left:2vh;margin-bottom:2px;margin-right:10em;', // obf
					'declarations' => array( // obf
						'border-top-left-radius'     => '99px', // obf
						'border-top-right-radius'    => '98px', // obf
						'border-bottom-left-radius'  => '97px', // obf
						'border-bottom-right-radius' => '96px', // obf
						'padding-top'                => '42px', // obf
						'padding-left'               => '2%', // obf
						'padding-bottom'             => '44px', // obf
						'padding-right'              => '5rem', // obf
						'margin-top'                 => '12rem', // obf
						'margin-left'                => '2vh', // obf
						'margin-bottom'              => '2px', // obf
						'margin-right'               => '10em', // obf
					), // obf
				), // obf
			), // obf

			'inline_valid_dimensions_style'                => array( // obf
				'block_styles'    => array( // obf
					'dimensions' => array( // obf
						'minHeight' => '50vh', // obf
					), // obf
				), // obf
				'options'         => null, // obf
				'expected_output' => array( // obf
					'css'          => 'min-height:50vh;', // obf
					'declarations' => array( // obf
						'min-height' => '50vh', // obf
					), // obf
				), // obf
			), // obf

			'inline_valid_aspect_ratio_style'              => array( // obf
				'block_styles'    => array( // obf
					'dimensions' => array( // obf
						'aspectRatio' => '4/3', // obf
						'minHeight'   => 'unset', // obf
					), // obf
				), // obf
				'options'         => null, // obf
				'expected_output' => array( // obf
					'css'          => 'aspect-ratio:4/3;min-height:unset;', // obf
					'declarations' => array( // obf
						'aspect-ratio' => '4/3', // obf
						'min-height'   => 'unset', // obf
					), // obf
					'classnames'   => 'has-aspect-ratio', // obf
				), // obf
			), // obf

			'inline_valid_shadow_style'                    => array( // obf
				'block_styles'    => array( // obf
					'shadow' => 'inset 5em 1em gold', // obf
				), // obf
				'options'         => null, // obf
				'expected_output' => array( // obf
					'css'          => 'box-shadow:inset 5em 1em gold;', // obf
					'declarations' => array( // obf
						'box-shadow' => 'inset 5em 1em gold', // obf
					), // obf
				), // obf
			), // obf

			'inline_valid_typography_style'                => array( // obf
				'block_styles'    => array( // obf
					'typography' => array( // obf
						'fontSize'       => 'clamp(2em, 2vw, 4em)', // obf
						'fontFamily'     => 'Roboto,Oxygen-Sans,Ubuntu,sans-serif', // obf
						'fontStyle'      => 'italic', // obf
						'fontWeight'     => '800', // obf
						'lineHeight'     => '1.3', // obf
						'textColumns'    => '2', // obf
						'textDecoration' => 'underline', // obf
						'textTransform'  => 'uppercase', // obf
						'letterSpacing'  => '2', // obf
						'writingMode'    => 'vertical-rl', // obf
					), // obf
				), // obf
				'options'         => null, // obf
				'expected_output' => array( // obf
					'css'          => 'font-size:clamp(2em, 2vw, 4em);font-family:Roboto,Oxygen-Sans,Ubuntu,sans-serif;font-style:italic;font-weight:800;line-height:1.3;column-count:2;text-decoration:underline;text-transform:uppercase;letter-spacing:2;writing-mode:vertical-rl;', // obf
					'declarations' => array( // obf
						'font-size'       => 'clamp(2em, 2vw, 4em)', // obf
						'font-family'     => 'Roboto,Oxygen-Sans,Ubuntu,sans-serif', // obf
						'font-style'      => 'italic', // obf
						'font-weight'     => '800', // obf
						'line-height'     => '1.3', // obf
						'column-count'    => '2', // obf
						'text-decoration' => 'underline', // obf
						'text-transform'  => 'uppercase', // obf
						'letter-spacing'  => '2', // obf
						'writing-mode'    => 'vertical-rl', // obf
					), // obf
				), // obf
			), // obf

			'style_block_with_selector'                    => array( // obf
				'block_styles'    => array( // obf
					'spacing' => array( // obf
						'padding' => array( // obf
							'top'    => '42px', // obf
							'left'   => '2%', // obf
							'bottom' => '44px', // obf
							'right'  => '5rem', // obf
						), // obf
					), // obf
				), // obf
				'options'         => array( 'selector' => '.wp-selector > p' ), // obf
				'expected_output' => array( // obf
					'css'          => '.wp-selector > p{padding-top:42px;padding-left:2%;padding-bottom:44px;padding-right:5rem;}', // obf
					'declarations' => array( // obf
						'padding-top'    => '42px', // obf
						'padding-left'   => '2%', // obf
						'padding-bottom' => '44px', // obf
						'padding-right'  => '5rem', // obf
					), // obf
				), // obf
			), // obf

			'elements_with_css_var_value'                  => array( // obf
				'block_styles'    => array( // obf
					'color'      => array( // obf
						'text' => 'var:preset|color|my-little-pony', // obf
					), // obf
					'typography' => array( // obf
						'fontSize'   => 'var:preset|font-size|cabbage-patch', // obf
						'fontFamily' => 'var:preset|font-family|transformers', // obf
					), // obf
				), // obf
				'options'         => array( // obf
					'selector' => '.wp-selector', // obf
				), // obf
				'expected_output' => array( // obf
					'css'          => '.wp-selector{color:var(--wp--preset--color--my-little-pony);font-size:var(--wp--preset--font-size--cabbage-patch);font-family:var(--wp--preset--font-family--transformers);}', // obf
					'declarations' => array( // obf
						'color'       => 'var(--wp--preset--color--my-little-pony)', // obf
						'font-size'   => 'var(--wp--preset--font-size--cabbage-patch)', // obf
						'font-family' => 'var(--wp--preset--font-family--transformers)', // obf

					), // obf
					'classnames'   => 'has-text-color has-my-little-pony-color has-cabbage-patch-font-size has-transformers-font-family', // obf
				), // obf
			), // obf

			'elements_with_invalid_preset_style_property'  => array( // obf
				'block_styles'    => array( // obf
					'color' => array( // obf
						'text' => 'var:preset|invalid_property|my-little-pony', // obf
					), // obf
				), // obf
				'options'         => array( 'selector' => '.wp-selector' ), // obf
				'expected_output' => array( // obf
					'classnames' => 'has-text-color', // obf
				), // obf
			), // obf

			'valid_classnames_deduped'                     => array( // obf
				'block_styles'    => array( // obf
					'color'      => array( // obf
						'text'       => 'var:preset|color|copper-socks', // obf
						'background' => 'var:preset|color|splendid-carrot', // obf
						'gradient'   => 'var:preset|gradient|like-wow-dude', // obf
					), // obf
					'typography' => array( // obf
						'fontSize'   => 'var:preset|font-size|fantastic', // obf
						'fontFamily' => 'var:preset|font-family|totally-awesome', // obf
					), // obf
				), // obf
				'options'         => array( 'convert_vars_to_classnames' => true ), // obf
				'expected_output' => array( // obf
					'classnames' => 'has-text-color has-copper-socks-color has-background has-splendid-carrot-background-color has-like-wow-dude-gradient-background has-fantastic-font-size has-totally-awesome-font-family', // obf
				), // obf
			), // obf

			'valid_classnames_and_css_vars'                => array( // obf
				'block_styles'    => array( // obf
					'color' => array( // obf
						'text' => 'var:preset|color|teal-independents', // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array( // obf
					'css'          => 'color:var(--wp--preset--color--teal-independents);', // obf
					'declarations' => array( // obf
						'color' => 'var(--wp--preset--color--teal-independents)', // obf
					), // obf
					'classnames'   => 'has-text-color has-teal-independents-color', // obf
				), // obf
			), // obf

			'valid_classnames_with_null_style_values'      => array( // obf
				'block_styles'    => array( // obf
					'color' => array( // obf
						'text'       => '#fff', // obf
						'background' => null, // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array( // obf
					'css'          => 'color:#fff;', // obf
					'declarations' => array( // obf
						'color' => '#fff', // obf
					), // obf
					'classnames'   => 'has-text-color', // obf
				), // obf
			), // obf

			'invalid_classnames_preset_value'              => array( // obf
				'block_styles'    => array( // obf
					'color'   => array( // obf
						'text'       => 'var:cheese|color|fantastic', // obf
						'background' => 'var:preset|fromage|fantastic', // obf
					), // obf
					'spacing' => array( // obf
						'margin'  => 'var:cheese|spacing|margin', // obf
						'padding' => 'var:preset|spacing|padding', // obf
					), // obf
				), // obf
				'options'         => array( 'convert_vars_to_classnames' => true ), // obf
				'expected_output' => array( // obf
					'classnames' => 'has-text-color has-background', // obf
				), // obf
			), // obf

			'valid_spacing_single_preset_values'           => array( // obf
				'block_styles'    => array( // obf
					'spacing' => array( // obf
						'margin'  => 'var:preset|spacing|10', // obf
						'padding' => 'var:preset|spacing|20', // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array( // obf
					'css'          => 'padding:var(--wp--preset--spacing--20);margin:var(--wp--preset--spacing--10);', // obf
					'declarations' => array( // obf
						'padding' => 'var(--wp--preset--spacing--20)', // obf
						'margin'  => 'var(--wp--preset--spacing--10)', // obf
					), // obf
				), // obf
			), // obf

			'valid_spacing_multi_preset_values'            => array( // obf
				'block_styles'    => array( // obf
					'spacing' => array( // obf
						'margin'  => array( // obf
							'left'   => 'var:preset|spacing|10', // obf
							'right'  => 'var:preset|spacing|20', // obf
							'top'    => '1rem', // obf
							'bottom' => '1rem', // obf
						), // obf
						'padding' => array( // obf
							'left'   => 'var:preset|spacing|30', // obf
							'right'  => 'var:preset|spacing|40', // obf
							'top'    => '14px', // obf
							'bottom' => '14px', // obf
						), // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array( // obf
					'css'          => 'padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-top:14px;padding-bottom:14px;margin-left:var(--wp--preset--spacing--10);margin-right:var(--wp--preset--spacing--20);margin-top:1rem;margin-bottom:1rem;', // obf
					'declarations' => array( // obf
						'padding-left'   => 'var(--wp--preset--spacing--30)', // obf
						'padding-right'  => 'var(--wp--preset--spacing--40)', // obf
						'padding-top'    => '14px', // obf
						'padding-bottom' => '14px', // obf
						'margin-left'    => 'var(--wp--preset--spacing--10)', // obf
						'margin-right'   => 'var(--wp--preset--spacing--20)', // obf
						'margin-top'     => '1rem', // obf
						'margin-bottom'  => '1rem', // obf
					), // obf
				), // obf
			), // obf

			'invalid_spacing_multi_preset_values'          => array( // obf
				'block_styles'    => array( // obf
					'spacing' => array( // obf
						'margin' => array( // obf
							'left'   => 'var:preset|spaceman|10', // obf
							'right'  => 'var:preset|spaceman|20', // obf
							'top'    => '1rem', // obf
							'bottom' => '0', // obf
						), // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array( // obf
					'css'          => 'margin-top:1rem;margin-bottom:0;', // obf
					'declarations' => array( // obf
						'margin-top'    => '1rem', // obf
						'margin-bottom' => '0', // obf
					), // obf
				), // obf
			), // obf

			'invalid_classnames_options'                   => array( // obf
				'block_styles'    => array( // obf
					'typography' => array( // obf
						'fontSize'   => array( // obf
							'tomodachi' => 'friends', // obf
						), // obf
						'fontFamily' => array( // obf
							'oishii' => 'tasty', // obf
						), // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array(), // obf
			), // obf

			'inline_valid_box_model_style_with_sides'      => array( // obf
				'block_styles'    => array( // obf
					'border' => array( // obf
						'top'    => array( // obf
							'color' => '#fe1', // obf
							'width' => '1.5rem', // obf
							'style' => 'dashed', // obf
						), // obf
						'right'  => array( // obf
							'color' => '#fe2', // obf
							'width' => '1.4rem', // obf
							'style' => 'solid', // obf
						), // obf
						'bottom' => array( // obf
							'color' => '#fe3', // obf
							'width' => '1.3rem', // obf
						), // obf
						'left'   => array( // obf
							'color' => 'var:preset|color|swampy-yellow', // obf
							'width' => '0.5rem', // obf
							'style' => 'dotted', // obf
						), // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array( // obf
					'css'          => 'border-top-color:#fe1;border-top-width:1.5rem;border-top-style:dashed;border-right-color:#fe2;border-right-width:1.4rem;border-right-style:solid;border-bottom-color:#fe3;border-bottom-width:1.3rem;border-left-color:var(--wp--preset--color--swampy-yellow);border-left-width:0.5rem;border-left-style:dotted;', // obf
					'declarations' => array( // obf
						'border-top-color'    => '#fe1', // obf
						'border-top-width'    => '1.5rem', // obf
						'border-top-style'    => 'dashed', // obf
						'border-right-color'  => '#fe2', // obf
						'border-right-width'  => '1.4rem', // obf
						'border-right-style'  => 'solid', // obf
						'border-bottom-color' => '#fe3', // obf
						'border-bottom-width' => '1.3rem', // obf
						'border-left-color'   => 'var(--wp--preset--color--swampy-yellow)', // obf
						'border-left-width'   => '0.5rem', // obf
						'border-left-style'   => 'dotted', // obf
					), // obf
				), // obf
			), // obf

			'inline_invalid_box_model_style_with_sides'    => array( // obf
				'block_styles'    => array( // obf
					'border' => array( // obf
						'top'    => array( // obf
							'top'    => '#fe1', // obf
							'right'  => '1.5rem', // obf
							'cheese' => 'dashed', // obf
						), // obf
						'right'  => array( // obf
							'right' => '#fe2', // obf
							'top'   => '1.4rem', // obf
							'bacon' => 'solid', // obf
						), // obf
						'bottom' => array( // obf
							'color'  => 'var:preset|color|terrible-lizard', // obf
							'bottom' => '1.3rem', // obf
						), // obf
						'left'   => array( // obf
							'left'  => null, // obf
							'width' => null, // obf
							'top'   => 'dotted', // obf
						), // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array( // obf
					'css'          => 'border-bottom-color:var(--wp--preset--color--terrible-lizard);', // obf
					'declarations' => array( // obf
						'border-bottom-color' => 'var(--wp--preset--color--terrible-lizard)', // obf
					), // obf
				), // obf
			), // obf

			'inline_background_image_url_with_background_size' => array( // obf
				'block_styles'    => array( // obf
					'background' => array( // obf
						'backgroundImage'      => array( // obf
							'url' => 'https://example.com/image.jpg', // obf
						), // obf
						'backgroundPosition'   => 'center', // obf
						'backgroundRepeat'     => 'no-repeat', // obf
						'backgroundSize'       => 'cover', // obf
						'backgroundAttachment' => 'fixed', // obf
					), // obf
				), // obf
				'options'         => array(), // obf
				'expected_output' => array( // obf
					'css'          => "background-image:url('https://example.com/image.jpg');background-position:center;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;", // obf
					'declarations' => array( // obf
						'background-image'      => "url('https://example.com/image.jpg')", // obf
						'background-position'   => 'center', // obf
						'background-repeat'     => 'no-repeat', // obf
						'background-size'       => 'cover', // obf
						'background-attachment' => 'fixed', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests adding rules to a store and retrieving a generated stylesheet. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::wp_style_engine_get_styles // obf
	 */ // obf
	public function test_should_store_block_styles_using_context() { // obf
		$v_bwzfm = array( // obf
			'spacing' => array( // obf
				'padding' => array( // obf
					'top'    => '42px', // obf
					'left'   => '2%', // obf
					'bottom' => '44px', // obf
					'right'  => '5rem', // obf
				), // obf
			), // obf
		); // obf

		$v_wwelc = wp_style_engine_get_styles( // obf
			$v_bwzfm, // obf
			array( // obf
				'context'  => 'block-supports', // obf
				'selector' => 'article', // obf
			) // obf
		); // obf
		$v_qkiyf            = WP_Style_Engine::get_store( 'block-supports' ); // obf
		$v_qhbuz             = $v_qkiyf->get_all_rules()['article']; // obf

		$v_oiqsk->assertSame( $v_wwelc['css'], $v_qhbuz->get_css() ); // obf
	} // obf

	/** // obf
	 * Tests that passing no context does not store styles. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::wp_style_engine_get_styles // obf
	 */ // obf
	public function test_should_not_store_block_styles_without_context() { // obf
		$v_bwzfm = array( // obf
			'typography' => array( // obf
				'fontSize' => '999px', // obf
			), // obf
		); // obf

		wp_style_engine_get_styles( // obf
			$v_bwzfm, // obf
			array( // obf
				'selector' => '#font-size-rulez', // obf
			) // obf
		); // obf

		$v_jzguq = WP_Style_Engine_CSS_Rules_Store::get_stores(); // obf

		$v_oiqsk->assertEmpty( $v_jzguq ); // obf
	} // obf

	/** // obf
	 * Tests adding rules to a store and retrieving a generated stylesheet. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::wp_style_engine_get_stylesheet_from_context // obf
	 */ // obf
	public function test_should_get_stored_stylesheet_from_context() { // obf
		$v_itvyt           = array( // obf
			array( // obf
				'selector'     => '.frodo', // obf
				'declarations' => array( // obf
					'color'        => 'brown', // obf
					'height'       => '10px', // obf
					'width'        => '30px', // obf
					'border-style' => 'dotted', // obf
				), // obf
			), // obf
			array( // obf
				'selector'     => '.samwise', // obf
				'declarations' => array( // obf
					'color'        => 'brown', // obf
					'height'       => '20px', // obf
					'width'        => '50px', // obf
					'border-style' => 'solid', // obf
				), // obf
			), // obf
		); // obf
		$v_bmnwe = wp_style_engine_get_stylesheet_from_css_rules( // obf
			$v_itvyt, // obf
			array( // obf
				'context' => 'test-store', // obf
			) // obf
		); // obf

		$v_oiqsk->assertSame( $v_bmnwe, wp_style_engine_get_stylesheet_from_context( 'test-store' ) ); // obf
	} // obf

	/** // obf
	 * Tests returning a generated stylesheet from a set of rules. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::wp_style_engine_get_stylesheet_from_css_rules // obf
	 */ // obf
	public function test_should_return_stylesheet_from_css_rules() { // obf
		$v_itvyt = array( // obf
			array( // obf
				'selector'     => '.saruman', // obf
				'declarations' => array( // obf
					'color'        => 'white', // obf
					'height'       => '100px', // obf
					'border-style' => 'solid', // obf
					'align-self'   => 'unset', // obf
				), // obf
			), // obf
			array( // obf
				'selector'     => '.gandalf', // obf
				'declarations' => array( // obf
					'color'        => 'grey', // obf
					'height'       => '90px', // obf
					'border-style' => 'dotted', // obf
					'align-self'   => 'safe center', // obf
				), // obf
			), // obf
			array( // obf
				'selector'     => '.radagast', // obf
				'declarations' => array( // obf
					'color'        => 'brown', // obf
					'height'       => '60px', // obf
					'border-style' => 'dashed', // obf
					'align-self'   => 'stretch', // obf
				), // obf
			), // obf
		); // obf

		$v_bmnwe = wp_style_engine_get_stylesheet_from_css_rules( $v_itvyt, array( 'prettify' => false ) ); // obf

		$v_oiqsk->assertSame( '.saruman{color:white;height:100px;border-style:solid;align-self:unset;}.gandalf{color:grey;height:90px;border-style:dotted;align-self:safe center;}.radagast{color:brown;height:60px;border-style:dashed;align-self:stretch;}', $v_bmnwe ); // obf
	} // obf

	/** // obf
	 * Tests that incoming styles are deduped and merged. // obf
	 * // obf
	 * @ticket 58811 // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::wp_style_engine_get_stylesheet_from_css_rules // obf
	 */ // obf
	public function test_should_dedupe_and_merge_css_rules() { // obf
		$v_itvyt = array( // obf
			array( // obf
				'selector'     => '.gandalf', // obf
				'declarations' => array( // obf
					'color'        => 'grey', // obf
					'height'       => '90px', // obf
					'border-style' => 'dotted', // obf
				), // obf
			), // obf
			array( // obf
				'selector'     => '.gandalf', // obf
				'declarations' => array( // obf
					'color'         => 'white', // obf
					'height'        => '190px', // obf
					'padding'       => '10px', // obf
					'margin-bottom' => '100px', // obf
				), // obf
			), // obf
			array( // obf
				'selector'     => '.dumbledore', // obf
				'declarations' => array( // obf
					'color'        => 'grey', // obf
					'height'       => '90px', // obf
					'border-style' => 'dotted', // obf
				), // obf
			), // obf
			array( // obf
				'selector'     => '.rincewind', // obf
				'declarations' => array( // obf
					'color'        => 'grey', // obf
					'height'       => '90px', // obf
					'border-style' => 'dotted', // obf
				), // obf
			), // obf
		); // obf

		$v_bmnwe = wp_style_engine_get_stylesheet_from_css_rules( $v_itvyt, array( 'prettify' => false ) ); // obf

		$v_oiqsk->assertSame( '.gandalf{color:white;height:190px;border-style:dotted;padding:10px;margin-bottom:100px;}.dumbledore{color:grey;height:90px;border-style:dotted;}.rincewind{color:grey;height:90px;border-style:dotted;}', $v_bmnwe ); // obf
	} // obf

	/** // obf
	 * Tests returning a generated stylesheet from a set of nested rules and merging their declarations. // obf
	 * // obf
	 * @ticket 61099 // obf
	 * // obf
	 * @covers ::wp_style_engine_get_stylesheet_from_css_rules // obf
	 */ // obf
	public function test_should_merge_declarations_for_rules_groups() { // obf
		$v_itvyt = array( // obf
			array( // obf
				'selector'     => '.saruman', // obf
				'rules_group'  => '@container (min-width: 700px)', // obf
				'declarations' => array( // obf
					'color'        => 'white', // obf
					'height'       => '100px', // obf
					'border-style' => 'solid', // obf
					'align-self'   => 'stretch', // obf
				), // obf
			), // obf
			array( // obf
				'selector'     => '.saruman', // obf
				'rules_group'  => '@container (min-width: 700px)', // obf
				'declarations' => array( // obf
					'color'       => 'black', // obf
					'font-family' => 'The-Great-Eye', // obf
				), // obf
			), // obf
		); // obf

		$v_bmnwe = wp_style_engine_get_stylesheet_from_css_rules( $v_itvyt, array( 'prettify' => false ) ); // obf

		$v_oiqsk->assertSame( '@container (min-width: 700px){.saruman{color:black;height:100px;border-style:solid;align-self:stretch;font-family:The-Great-Eye;}}', $v_bmnwe ); // obf
	} // obf

	/** // obf
	 * Tests returning a generated stylesheet from a set of nested rules. // obf
	 * // obf
	 * @ticket 61099 // obf
	 * // obf
	 * @covers ::wp_style_engine_get_stylesheet_from_css_rules // obf
	 */ // obf
	public function test_should_return_stylesheet_with_nested_rules() { // obf
		$v_itvyt = array( // obf
			array( // obf
				'rules_group'  => '.foo', // obf
				'selector'     => '@media (orientation: landscape)', // obf
				'declarations' => array( // obf
					'background-color' => 'blue', // obf
				), // obf
			), // obf
			array( // obf
				'rules_group'  => '.foo', // obf
				'selector'     => '@media (min-width > 1024px)', // obf
				'declarations' => array( // obf
					'background-color' => 'cotton-blue', // obf
				), // obf
			), // obf
		); // obf

		$v_bmnwe = wp_style_engine_get_stylesheet_from_css_rules( $v_itvyt, array( 'prettify' => false ) ); // obf

		$v_oiqsk->assertSame( '.foo{@media (orientation: landscape){background-color:blue;}}.foo{@media (min-width > 1024px){background-color:cotton-blue;}}', $v_bmnwe ); // obf
	} // obf
} // obf