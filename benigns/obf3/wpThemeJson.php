

<?php // obf

/** // obf
 * Test WP_Theme_JSON class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @group themes // obf
 * // obf
 * @covers WP_Theme_JSON // obf
 */ // obf
class Tests_Theme_wpThemeJson extends WP_UnitTestCase { // obf

	/** // obf
	 * Administrator ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_npczm; // obf

	/** // obf
	 * User ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_xohjl; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		static::$v_npczm = self::factory()->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_npczm ); // obf
		} // obf

		static::$v_xohjl = self::factory()->user->create(); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_settings() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'       => array( // obf
						'custom' => false, // obf
					), // obf
					'layout'      => array( // obf
						'contentSize' => 'value', // obf
						'invalid/key' => 'value', // obf
					), // obf
					'invalid/key' => 'value', // obf
					'blocks'      => array( // obf
						'core/group' => array( // obf
							'color'       => array( // obf
								'custom' => false, // obf
							), // obf
							'invalid/key' => 'value', // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'elements' => array( // obf
						'link' => array( // obf
							'color' => array( // obf
								'text' => '#111', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hzkft = $v_rndft->get_settings(); // obf

		$v_sdvhi = array( // obf
			'color'  => array( // obf
				'custom' => false, // obf
			), // obf
			'layout' => array( // obf
				'contentSize' => 'value', // obf
			), // obf
			'blocks' => array( // obf
				'core/group' => array( // obf
					'color' => array( // obf
						'custom' => false, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 53397 // obf
	 */ // obf
	public function test_get_settings_presets_are_keyed_by_origin() { // obf
		$v_qaejp = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'       => array( // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'white', // obf
								'color' => 'white', // obf
							), // obf
						), // obf
					), // obf
					'invalid/key' => 'value', // obf
					'blocks'      => array( // obf
						'core/group' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									array( // obf
										'slug'  => 'white', // obf
										'color' => 'white', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf
		$v_ngrpo      = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'       => array( // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'black', // obf
								'color' => 'black', // obf
							), // obf
						), // obf
					), // obf
					'invalid/key' => 'value', // obf
					'blocks'      => array( // obf
						'core/group' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									array( // obf
										'slug'  => 'black', // obf
										'color' => 'black', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_dfpgo   = $v_qaejp->get_raw_data(); // obf
		$v_ejyfr = $v_ngrpo->get_raw_data(); // obf

		$v_izlry   = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'  => array( // obf
					'palette' => array( // obf
						'default' => array( // obf
							array( // obf
								'slug'  => 'white', // obf
								'color' => 'white', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'blocks' => array( // obf
					'core/group' => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'default' => array( // obf
									array( // obf
										'slug'  => 'white', // obf
										'color' => 'white', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_qammd = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'  => array( // obf
					'palette' => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'  => 'black', // obf
								'color' => 'black', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'blocks' => array( // obf
					'core/group' => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'theme' => array( // obf
									array( // obf
										'slug'  => 'black', // obf
										'color' => 'black', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_izlry, $v_dfpgo ); // obf
		$v_hsfve->assertEqualSetsWithIndex( $v_qammd, $v_ejyfr ); // obf
	} // obf

	public function test_get_settings_appearance_true_opts_in() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'appearanceTools' => true, // obf
					'spacing'         => array( // obf
						'blockGap' => false, // This should override appearanceTools. // obf
					), // obf
					'blocks'          => array( // obf
						'core/paragraph' => array( // obf
							'typography' => array( // obf
								'lineHeight' => false, // obf
							), // obf
						), // obf
						'core/group'     => array( // obf
							'appearanceTools' => true, // obf
							'typography'      => array( // obf
								'lineHeight' => false, // This should override appearanceTools. // obf
							), // obf
							'spacing'         => array( // obf
								'blockGap' => null, // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hzkft   = $v_rndft->get_settings(); // obf
		$v_sdvhi = array( // obf
			'background' => array( // obf
				'backgroundImage' => true, // obf
				'backgroundSize'  => true, // obf
			), // obf
			'border'     => array( // obf
				'width'  => true, // obf
				'style'  => true, // obf
				'radius' => true, // obf
				'color'  => true, // obf
			), // obf
			'color'      => array( // obf
				'link'    => true, // obf
				'heading' => true, // obf
				'button'  => true, // obf
				'caption' => true, // obf
			), // obf
			'dimensions' => array( // obf
				'aspectRatio' => true, // obf
				'minHeight'   => true, // obf
			), // obf
			'position'   => array( // obf
				'sticky' => true, // obf
			), // obf
			'spacing'    => array( // obf
				'blockGap' => false, // obf
				'margin'   => true, // obf
				'padding'  => true, // obf
			), // obf
			'typography' => array( // obf
				'lineHeight' => true, // obf
			), // obf
			'blocks'     => array( // obf
				'core/paragraph' => array( // obf
					'typography' => array( // obf
						'lineHeight' => false, // obf
					), // obf
				), // obf
				'core/group'     => array( // obf
					'background' => array( // obf
						'backgroundImage' => true, // obf
						'backgroundSize'  => true, // obf
					), // obf
					'border'     => array( // obf
						'width'  => true, // obf
						'style'  => true, // obf
						'radius' => true, // obf
						'color'  => true, // obf
					), // obf
					'color'      => array( // obf
						'link'    => true, // obf
						'heading' => true, // obf
						'button'  => true, // obf
						'caption' => true, // obf
					), // obf
					'dimensions' => array( // obf
						'aspectRatio' => true, // obf
						'minHeight'   => true, // obf
					), // obf
					'position'   => array( // obf
						'sticky' => true, // obf
					), // obf
					'spacing'    => array( // obf
						'blockGap' => false, // obf
						'margin'   => true, // obf
						'padding'  => true, // obf
					), // obf
					'typography' => array( // obf
						'lineHeight' => false, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	public function test_get_settings_appearance_false_does_not_opt_in() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'appearanceTools' => false, // obf
					'border'          => array( // obf
						'width' => true, // obf
					), // obf
					'blocks'          => array( // obf
						'core/paragraph' => array( // obf
							'typography' => array( // obf
								'lineHeight' => false, // obf
							), // obf
						), // obf
						'core/group'     => array( // obf
							'typography' => array( // obf
								'lineHeight' => false, // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hzkft   = $v_rndft->get_settings(); // obf
		$v_sdvhi = array( // obf
			'appearanceTools' => false, // obf
			'border'          => array( // obf
				'width' => true, // obf
			), // obf
			'blocks'          => array( // obf
				'core/paragraph' => array( // obf
					'typography' => array( // obf
						'lineHeight' => false, // obf
					), // obf
				), // obf
				'core/group'     => array( // obf
					'typography' => array( // obf
						'lineHeight' => false, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 53175 // obf
	 * @ticket 54336 // obf
	 * @ticket 56611 // obf
	 * @ticket 58549 // obf
	 * @ticket 58550 // obf
	 * @ticket 60365 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61630 // obf
	 * @ticket 61704 // obf
	 */ // obf
	public function test_get_stylesheet() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'      => array( // obf
						'text'      => 'value', // obf
						'palette'   => array( // obf
							array( // obf
								'slug'  => 'grey', // obf
								'color' => 'grey', // obf
							), // obf
						), // obf
						'gradients' => array( // obf
							array( // obf
								'gradient' => 'linear-gradient(135deg,rgba(0,0,0) 0%,rgb(0,0,0) 100%)', // obf
								'name'     => 'Custom gradient', // obf
								'slug'     => 'custom-gradient', // obf
							), // obf
						), // obf
						'duotone'   => array( // obf
							array( // obf
								'colors' => array( '#333333', '#aaaaaa' ), // obf
								'name'   => 'Custom Duotone', // obf
								'slug'   => 'custom-duotone', // obf
							), // obf
						), // obf
					), // obf
					'typography' => array( // obf
						'fontFamilies' => array( // obf
							array( // obf
								'name'       => 'Arial', // obf
								'slug'       => 'arial', // obf
								'fontFamily' => 'Arial, serif', // obf
							), // obf
						), // obf
						'fontSizes'    => array( // obf
							array( // obf
								'slug' => 'small', // obf
								'size' => '14px', // obf
							), // obf
							array( // obf
								'slug' => 'big', // obf
								'size' => '41px', // obf
							), // obf
						), // obf
					), // obf
					'misc'       => 'value', // obf
					'blocks'     => array( // obf
						'core/group' => array( // obf
							'custom' => array( // obf
								'base-font'   => 16, // obf
								'line-height' => array( // obf
									'small'  => 1.2, // obf
									'medium' => 1.4, // obf
									'large'  => 1.8, // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'color'    => array( // obf
						'text' => 'var:preset|color|grey', // obf
					), // obf
					'misc'     => 'value', // obf
					'elements' => array( // obf
						'link'   => array( // obf
							'color' => array( // obf
								'text'       => '#111', // obf
								'background' => '#333', // obf
							), // obf
						), // obf
						'button' => array( // obf
							'shadow' => '10px 10px 5px 0px rgba(0,0,0,0.66)', // obf
						), // obf
					), // obf
					'blocks'   => array( // obf
						'core/cover'        => array( // obf
							'dimensions' => array( // obf
								'aspectRatio' => '16/9', // obf
							), // obf
						), // obf
						'core/group'        => array( // obf
							'color'      => array( // obf
								'gradient' => 'var:preset|gradient|custom-gradient', // obf
							), // obf
							'border'     => array( // obf
								'radius' => '10px', // obf
							), // obf
							'dimensions' => array( // obf
								'minHeight' => '50vh', // obf
							), // obf
							'elements'   => array( // obf
								'link' => array( // obf
									'color' => array( // obf
										'text' => '#111', // obf
									), // obf
								), // obf
							), // obf
							'spacing'    => array( // obf
								'padding' => '24px', // obf
							), // obf
						), // obf
						'core/heading'      => array( // obf
							'color'    => array( // obf
								'text' => '#123456', // obf
							), // obf
							'elements' => array( // obf
								'link' => array( // obf
									'color'      => array( // obf
										'text'       => '#111', // obf
										'background' => '#333', // obf
									), // obf
									'typography' => array( // obf
										'fontSize' => '60px', // obf
									), // obf
								), // obf
							), // obf
						), // obf
						'core/media-text'   => array( // obf
							'typography' => array( // obf
								'textAlign' => 'center', // obf
							), // obf
						), // obf
						'core/post-date'    => array( // obf
							'color'    => array( // obf
								'text' => '#123456', // obf
							), // obf
							'elements' => array( // obf
								'link' => array( // obf
									'color' => array( // obf
										'background' => '#777', // obf
										'text'       => '#555', // obf
									), // obf
								), // obf
							), // obf
						), // obf
						'core/post-excerpt' => array( // obf
							'typography' => array( // obf
								'textColumns' => 2, // obf
							), // obf
						), // obf
						'core/image'        => array( // obf
							'border'  => array( // obf
								'radius' => array( // obf
									'topLeft'     => '10px', // obf
									'bottomRight' => '1em', // obf
								), // obf
							), // obf
							'spacing' => array( // obf
								'margin' => array( // obf
									'bottom' => '30px', // obf
								), // obf
							), // obf
							'filter'  => array( // obf
								'duotone' => 'var:preset|duotone|custom-duotone', // obf
							), // obf
						), // obf
					), // obf
					'spacing'  => array( // obf
						'blockGap' => '24px', // obf
					), // obf
				), // obf
				'misc'     => 'value', // obf
			) // obf
		); // obf

		$v_fvrps = ':root{--wp--preset--color--grey: grey;--wp--preset--gradient--custom-gradient: linear-gradient(135deg,rgba(0,0,0) 0%,rgb(0,0,0) 100%);--wp--preset--font-size--small: 14px;--wp--preset--font-size--big: 41px;--wp--preset--font-family--arial: Arial, serif;}.wp-block-group{--wp--custom--base-font: 16;--wp--custom--line-height--small: 1.2;--wp--custom--line-height--medium: 1.4;--wp--custom--line-height--large: 1.8;}'; // obf
		$v_gxixl    = ':where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{color: var(--wp--preset--color--grey);}a:where(:not(.wp-element-button)){background-color: #333;color: #111;}:root :where(.wp-element-button, .wp-block-button__link){box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.66);}:root :where(.wp-block-cover){min-height: unset;aspect-ratio: 16/9;}:root :where(.wp-block-group){background: var(--wp--preset--gradient--custom-gradient);border-radius: 10px;min-height: 50vh;padding: 24px;}:root :where(.wp-block-group a:where(:not(.wp-element-button))){color: #111;}:root :where(.wp-block-heading){color: #123456;}:root :where(.wp-block-heading a:where(:not(.wp-element-button))){background-color: #333;color: #111;font-size: 60px;}:root :where(.wp-block-media-text){text-align: center;}:root :where(.wp-block-post-date){color: #123456;}:root :where(.wp-block-post-date a:where(:not(.wp-element-button))){background-color: #777;color: #555;}:root :where(.wp-block-post-excerpt){column-count: 2;}:root :where(.wp-block-image){margin-bottom: 30px;}:root :where(.wp-block-image img, .wp-block-image .wp-block-image__crop-area, .wp-block-image .components-placeholder){border-top-left-radius: 10px;border-bottom-right-radius: 1em;}:root :where(.wp-block-image img, .wp-block-image .components-placeholder){filter: var(--wp--preset--duotone--custom-duotone);}'; // obf
		$v_csepn   = '.has-grey-color{color: var(--wp--preset--color--grey) !important;}.has-grey-background-color{background-color: var(--wp--preset--color--grey) !important;}.has-grey-border-color{border-color: var(--wp--preset--color--grey) !important;}.has-custom-gradient-gradient-background{background: var(--wp--preset--gradient--custom-gradient) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-big-font-size{font-size: var(--wp--preset--font-size--big) !important;}.has-arial-font-family{font-family: var(--wp--preset--font-family--arial) !important;}'; // obf
		$v_ktpms       = $v_fvrps . $v_gxixl . $v_csepn; // obf

		$v_hsfve->assertSame( $v_fvrps, $v_rndft->get_stylesheet( array( 'variables' ) ) ); // obf
		$v_hsfve->assertSame( $v_gxixl, $v_rndft->get_stylesheet( array( 'styles' ) ) ); // obf
		$v_hsfve->assertSame( $v_csepn, $v_rndft->get_stylesheet( array( 'presets' ) ) ); // obf
		$v_hsfve->assertSame( $v_ktpms, $v_rndft->get_stylesheet() ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_styles_for_block_support_for_shorthand_and_longhand_values() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'core/group' => array( // obf
							'border'  => array( // obf
								'radius' => '10px', // obf
							), // obf
							'spacing' => array( // obf
								'padding' => '24px', // obf
								'margin'  => '1em', // obf
							), // obf
						), // obf
						'core/image' => array( // obf
							'border'  => array( // obf
								'radius' => array( // obf
									'topLeft'     => '10px', // obf
									'bottomRight' => '1em', // obf
								), // obf
							), // obf
							'spacing' => array( // obf
								'padding' => array( // obf
									'top' => '15px', // obf
								), // obf
								'margin'  => array( // obf
									'bottom' => '30px', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_zaskf = array( // obf
			'name'      => 'core/group', // obf
			'path'      => array( 'styles', 'blocks', 'core/group' ), // obf
			'selector'  => '.wp-block-group', // obf
			'selectors' => array( // obf
				'root' => '.wp-block-group', // obf
			), // obf
		); // obf
		$v_mbyvj = array( // obf
			'name'      => 'core/image', // obf
			'path'      => array( 'styles', 'blocks', 'core/image' ), // obf
			'selector'  => '.wp-block-image', // obf
			'selectors' => array( // obf
				'root'   => '.wp-block-image', // obf
				'border' => '.wp-block-image img, .wp-block-image .wp-block-image__crop-area, .wp-block-image .components-placeholder', // obf
			), // obf
		); // obf

		$v_gnsjb = ':root :where(.wp-block-group){border-radius: 10px;margin: 1em;padding: 24px;}'; // obf
		$v_uzbji = ':root :where(.wp-block-image){margin-bottom: 30px;padding-top: 15px;}:root :where(.wp-block-image img, .wp-block-image .wp-block-image__crop-area, .wp-block-image .components-placeholder){border-top-left-radius: 10px;border-bottom-right-radius: 1em;}'; // obf
		$v_hsfve->assertSame( $v_gnsjb, $v_rndft->get_styles_for_block( $v_zaskf ) ); // obf
		$v_hsfve->assertSame( $v_uzbji, $v_rndft->get_styles_for_block( $v_mbyvj ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_stylesheet_skips_disabled_protected_properties() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'spacing' => array( // obf
						'blockGap' => null, // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'spacing' => array( // obf
						'blockGap' => '1em', // obf
					), // obf
					'blocks'  => array( // obf
						'core/columns' => array( // obf
							'spacing' => array( // obf
								'blockGap' => '24px', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = ':where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}'; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet() ); // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 * @ticket 58548 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61829 // obf
	 */ // obf
	public function test_get_stylesheet_renders_enabled_protected_properties() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'spacing' => array( // obf
						'blockGap' => true, // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'spacing' => array( // obf
						'blockGap' => '1em', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = ':where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 1em; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 1em; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 1em;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 1em;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 1em;}:root :where(.is-layout-grid){gap: 1em;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}'; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet() ); // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_stylesheet_preset_classes_work_with_compounded_selectors() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'blocks' => array( // obf
						'core/heading' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									array( // obf
										'slug'  => 'white', // obf
										'color' => '#fff', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hsfve->assertSame( // obf
			'.wp-block-heading.has-white-color{color: var(--wp--preset--color--white) !important;}.wp-block-heading.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.wp-block-heading.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}', // obf
			$v_rndft->get_stylesheet( array( 'presets' ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53175 // obf
	 * @ticket 54336 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_stylesheet_preset_rules_come_after_block_rules() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'blocks' => array( // obf
						'core/group' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									array( // obf
										'slug'  => 'grey', // obf
										'color' => 'grey', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'blocks' => array( // obf
						'core/group' => array( // obf
							'color' => array( // obf
								'text' => 'red', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gxixl    = ':root :where(.wp-block-group){color: red;}'; // obf
		$v_csepn   = '.wp-block-group.has-grey-color{color: var(--wp--preset--color--grey) !important;}.wp-block-group.has-grey-background-color{background-color: var(--wp--preset--color--grey) !important;}.wp-block-group.has-grey-border-color{border-color: var(--wp--preset--color--grey) !important;}'; // obf
		$v_fvrps = '.wp-block-group{--wp--preset--color--grey: grey;}'; // obf

		$v_ktpms = $v_fvrps . $v_gxixl . $v_csepn; // obf

		$v_hsfve->assertSame( $v_ktpms, $v_rndft->get_stylesheet( array( 'styles', 'presets', 'variables' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
		$v_hsfve->assertSame( $v_gxixl, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
		$v_hsfve->assertSame( $v_csepn, $v_rndft->get_stylesheet( array( 'presets' ) ) ); // obf
		$v_hsfve->assertSame( $v_fvrps, $v_rndft->get_stylesheet( array( 'variables' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_stylesheet_generates_proper_classes_and_css_vars_from_slugs() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'  => array( // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'grey', // obf
								'color' => 'grey', // obf
							), // obf
							array( // obf
								'slug'  => 'dark grey', // obf
								'color' => 'grey', // obf
							), // obf
							array( // obf
								'slug'  => 'light-grey', // obf
								'color' => 'grey', // obf
							), // obf
							array( // obf
								'slug'  => 'white2black', // obf
								'color' => 'grey', // obf
							), // obf
						), // obf
					), // obf
					'custom' => array( // obf
						'white2black' => 'value', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hsfve->assertSame( // obf
			'.has-grey-color{color: var(--wp--preset--color--grey) !important;}.has-dark-grey-color{color: var(--wp--preset--color--dark-grey) !important;}.has-light-grey-color{color: var(--wp--preset--color--light-grey) !important;}.has-white-2-black-color{color: var(--wp--preset--color--white-2-black) !important;}.has-grey-background-color{background-color: var(--wp--preset--color--grey) !important;}.has-dark-grey-background-color{background-color: var(--wp--preset--color--dark-grey) !important;}.has-light-grey-background-color{background-color: var(--wp--preset--color--light-grey) !important;}.has-white-2-black-background-color{background-color: var(--wp--preset--color--white-2-black) !important;}.has-grey-border-color{border-color: var(--wp--preset--color--grey) !important;}.has-dark-grey-border-color{border-color: var(--wp--preset--color--dark-grey) !important;}.has-light-grey-border-color{border-color: var(--wp--preset--color--light-grey) !important;}.has-white-2-black-border-color{border-color: var(--wp--preset--color--white-2-black) !important;}', // obf
			$v_rndft->get_stylesheet( array( 'presets' ) ) // obf
		); // obf
		$v_hsfve->assertSame( // obf
			':root{--wp--preset--color--grey: grey;--wp--preset--color--dark-grey: grey;--wp--preset--color--light-grey: grey;--wp--preset--color--white-2-black: grey;--wp--custom--white-2-black: value;}', // obf
			$v_rndft->get_stylesheet( array( 'variables' ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61630 // obf
	 */ // obf
	public function test_get_styles_for_block_handles_whitelisted_element_pseudo_selectors() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'elements' => array( // obf
						'link' => array( // obf
							'color'  => array( // obf
								'text'       => 'green', // obf
								'background' => 'red', // obf
							), // obf
							':hover' => array( // obf
								'color'      => array( // obf
									'text'       => 'red', // obf
									'background' => 'green', // obf
								), // obf
								'typography' => array( // obf
									'textTransform' => 'uppercase', // obf
									'fontSize'      => '10em', // obf
								), // obf
							), // obf
							':focus' => array( // obf
								'color' => array( // obf
									'text'       => 'yellow', // obf
									'background' => 'black', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_itrdn  = array( // obf
			'path'     => array( 'styles', 'elements', 'link' ), // obf
			'selector' => 'a:where(:not(.wp-element-button))', // obf
		); // obf
		$v_paohn = array( // obf
			'path'     => array( 'styles', 'elements', 'link' ), // obf
			'selector' => 'a:where(:not(.wp-element-button)):hover', // obf
		); // obf
		$v_bodyf = array( // obf
			'path'     => array( 'styles', 'elements', 'link' ), // obf
			'selector' => 'a:where(:not(.wp-element-button)):focus', // obf
		); // obf

		$v_ppspp  = 'a:where(:not(.wp-element-button)){background-color: red;color: green;}'; // obf
		$v_iofag = ':root :where(a:where(:not(.wp-element-button)):hover){background-color: green;color: red;font-size: 10em;text-transform: uppercase;}'; // obf
		$v_lojeb = ':root :where(a:where(:not(.wp-element-button)):focus){background-color: black;color: yellow;}'; // obf

		$v_hsfve->assertSame( $v_ppspp, $v_rndft->get_styles_for_block( $v_itrdn ) ); // obf
		$v_hsfve->assertSame( $v_iofag, $v_rndft->get_styles_for_block( $v_paohn ) ); // obf
		$v_hsfve->assertSame( $v_lojeb, $v_rndft->get_styles_for_block( $v_bodyf ) ); // obf
	} // obf

	/** // obf
	 * Tests that if an element has nothing but pseudo selector styles, they are still output by get_stylesheet. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_stylesheet_handles_only_pseudo_selector_rules_for_given_property() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'elements' => array( // obf
						'link' => array( // obf
							':hover' => array( // obf
								'color'      => array( // obf
									'text'       => 'red', // obf
									'background' => 'green', // obf
								), // obf
								'typography' => array( // obf
									'textTransform' => 'uppercase', // obf
									'fontSize'      => '10em', // obf
								), // obf
							), // obf
							':focus' => array( // obf
								'color' => array( // obf
									'text'       => 'yellow', // obf
									'background' => 'black', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = ':root :where(a:where(:not(.wp-element-button)):hover){background-color: green;color: red;font-size: 10em;text-transform: uppercase;}:root :where(a:where(:not(.wp-element-button)):focus){background-color: black;color: yellow;}'; // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61630 // obf
	 */ // obf
	public function test_get_stylesheet_ignores_pseudo_selectors_on_non_whitelisted_elements() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'elements' => array( // obf
						'h4' => array( // obf
							'color'  => array( // obf
								'text'       => 'green', // obf
								'background' => 'red', // obf
							), // obf
							':hover' => array( // obf
								'color' => array( // obf
									'text'       => 'red', // obf
									'background' => 'green', // obf
								), // obf
							), // obf
							':focus' => array( // obf
								'color' => array( // obf
									'text'       => 'yellow', // obf
									'background' => 'black', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = 'h4{background-color: red;color: green;}'; // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61630 // obf
	 */ // obf
	public function test_get_stylesheet_ignores_non_whitelisted_pseudo_selectors() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'elements' => array( // obf
						'link' => array( // obf
							'color'     => array( // obf
								'text'       => 'green', // obf
								'background' => 'red', // obf
							), // obf
							':hover'    => array( // obf
								'color' => array( // obf
									'text'       => 'red', // obf
									'background' => 'green', // obf
								), // obf
							), // obf
							':levitate' => array( // obf
								'color' => array( // obf
									'text'       => 'yellow', // obf
									'background' => 'black', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = 'a:where(:not(.wp-element-button)){background-color: red;color: green;}:root :where(a:where(:not(.wp-element-button)):hover){background-color: green;color: red;}'; // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
		$v_hsfve->assertStringNotContainsString( 'a:levitate{', $v_rndft->get_stylesheet( array( 'styles' ) ) ); // obf
	} // obf

	/** // obf
	 * Tests that element pseudo selectors are output before block element pseudo selectors, and that whitelisted // obf
	 * block element pseudo selectors are output correctly. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61630 // obf
	 */ // obf
	public function test_get_stylesheet_handles_priority_of_elements_vs_block_elements_pseudo_selectors() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'elements' => array( // obf
						'link' => array( // obf
							'color'  => array( // obf
								'text'       => 'green', // obf
								'background' => 'red', // obf
							), // obf
							':hover' => array( // obf
								'color' => array( // obf
									'text'       => 'red', // obf
									'background' => 'green', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'blocks'   => array( // obf
						'core/group' => array( // obf
							'elements' => array( // obf
								'link' => array( // obf
									':hover' => array( // obf
										'color' => array( // obf
											'text'       => 'yellow', // obf
											'background' => 'black', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = 'a:where(:not(.wp-element-button)){background-color: red;color: green;}:root :where(a:where(:not(.wp-element-button)):hover){background-color: green;color: red;}:root :where(.wp-block-group a:where(:not(.wp-element-button)):hover){background-color: black;color: yellow;}'; // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58548 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61829 // obf
	 */ // obf
	public function test_get_stylesheet_generates_layout_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'layout'  => array( // obf
						'contentSize' => '640px', // obf
						'wideSize'    => '1200px', // obf
					), // obf
					'spacing' => array( // obf
						'blockGap' => true, // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'spacing' => array( // obf
						'blockGap' => '1em', // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf

		// Results also include root site blocks styles. // obf
		$v_hsfve->assertSame( // obf
			':root { --wp--style--global--content-size: 640px;--wp--style--global--wide-size: 1200px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 1em; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 1em; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 1em;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 1em;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 1em;}:root :where(.is-layout-grid){gap: 1em;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}', // obf
			$v_rndft->get_stylesheet( array( 'styles' ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58548 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61829 // obf
	 */ // obf
	public function test_get_stylesheet_generates_layout_styles_with_spacing_presets() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'layout'  => array( // obf
						'contentSize' => '640px', // obf
						'wideSize'    => '1200px', // obf
					), // obf
					'spacing' => array( // obf
						'blockGap' => true, // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'spacing' => array( // obf
						'blockGap' => 'var:preset|spacing|60', // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf

		// Results also include root site blocks styles. // obf
		$v_hsfve->assertSame( // obf
			':root { --wp--style--global--content-size: 640px;--wp--style--global--wide-size: 1200px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: var(--wp--preset--spacing--60); margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: var(--wp--preset--spacing--60); }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: var(--wp--preset--spacing--60);margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: var(--wp--preset--spacing--60);margin-block-end: 0;}:root :where(.is-layout-flex){gap: var(--wp--preset--spacing--60);}:root :where(.is-layout-grid){gap: var(--wp--preset--spacing--60);}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}', // obf
			$v_rndft->get_stylesheet( array( 'styles' ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_stylesheet_generates_fallback_gap_layout_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'layout'  => array( // obf
						'contentSize' => '640px', // obf
						'wideSize'    => '1200px', // obf
					), // obf
					'spacing' => array( // obf
						'blockGap' => null, // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'spacing' => array( // obf
						'blockGap' => '1em', // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf
		$v_gkioj = $v_rndft->get_stylesheet( array( 'styles' ) ); // obf

		// Results also include root site blocks styles. // obf
		$v_hsfve->assertSame( // obf
			':root { --wp--style--global--content-size: 640px;--wp--style--global--wide-size: 1200px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}', // obf
			$v_gkioj // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 60981 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_stylesheet_generates_base_fallback_gap_layout_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'spacing' => array( // obf
						'blockGap' => null, // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf
		$v_gkioj = $v_rndft->get_stylesheet( array( 'base-layout-styles' ) ); // obf

		// Note the `base-layout-styles` includes a fallback gap for the Columns block for backwards compatibility. // obf
		$v_hsfve->assertSame( // obf
			':where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}', // obf
			$v_gkioj // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 */ // obf
	public function test_get_stylesheet_skips_layout_styles() { // obf
		add_theme_support( 'disable-layout-styles' ); // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'spacing' => array( // obf
						'blockGap' => null, // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf
		$v_gkioj = $v_rndft->get_stylesheet( array( 'base-layout-styles' ) ); // obf
		remove_theme_support( 'disable-layout-styles' ); // obf

		// All Layout styles should be skipped. // obf
		$v_hsfve->assertSame( // obf
			'', // obf
			$v_gkioj // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61829 // obf
	 */ // obf
	public function test_get_stylesheet_generates_valid_block_gap_values_and_skips_null_or_false_values() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'layout'  => array( // obf
						'contentSize' => '640px', // obf
						'wideSize'    => '1200px', // obf
					), // obf
					'spacing' => array( // obf
						'blockGap' => true, // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'spacing' => array( // obf
						'blockGap' => '1rem', // obf
					), // obf
					'blocks'  => array( // obf
						'core/post-content' => array( // obf
							'color' => array( // obf
								'text' => 'gray', // This value should not render block layout styles. // obf
							), // obf
						), // obf
						'core/social-links' => array( // obf
							'spacing' => array( // obf
								'blockGap' => '0', // This value should render block layout gap as zero. // obf
							), // obf
						), // obf
						'core/buttons'      => array( // obf
							'spacing' => array( // obf
								'blockGap' => 0, // This value should render block layout gap as zero. // obf
							), // obf
						), // obf
						'core/columns'      => array( // obf
							'spacing' => array( // obf
								'blockGap' => false, // This value should be ignored. The block will use the global layout value. // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf

		$v_hsfve->assertSame( // obf
			':root { --wp--style--global--content-size: 640px;--wp--style--global--wide-size: 1200px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 1rem; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 1rem; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 1rem;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 1rem;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 1rem;}:root :where(.is-layout-grid){gap: 1rem;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:root :where(.wp-block-post-content){color: gray;}:root :where(.wp-block-social-links-is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.wp-block-social-links-is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.wp-block-social-links-is-layout-flow) > *{margin-block-start: 0;margin-block-end: 0;}:root :where(.wp-block-social-links-is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.wp-block-social-links-is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.wp-block-social-links-is-layout-constrained) > *{margin-block-start: 0;margin-block-end: 0;}:root :where(.wp-block-social-links-is-layout-flex){gap: 0;}:root :where(.wp-block-social-links-is-layout-grid){gap: 0;}:root :where(.wp-block-buttons-is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.wp-block-buttons-is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.wp-block-buttons-is-layout-flow) > *{margin-block-start: 0;margin-block-end: 0;}:root :where(.wp-block-buttons-is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.wp-block-buttons-is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.wp-block-buttons-is-layout-constrained) > *{margin-block-start: 0;margin-block-end: 0;}:root :where(.wp-block-buttons-is-layout-flex){gap: 0;}:root :where(.wp-block-buttons-is-layout-grid){gap: 0;}', // obf
			$v_rndft->get_stylesheet() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57354 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_stylesheet_returns_outline_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'elements' => array( // obf
						'button' => array( // obf
							'outline' => array( // obf
								'offset' => '3px', // obf
								'width'  => '3px', // obf
								'style'  => 'dashed', // obf
								'color'  => 'red', // obf
							), // obf
							':hover'  => array( // obf
								'outline' => array( // obf
									'offset' => '3px', // obf
									'width'  => '3px', // obf
									'style'  => 'solid', // obf
									'color'  => 'blue', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = ':root :where(.wp-element-button, .wp-block-button__link){outline-color: red;outline-offset: 3px;outline-style: dashed;outline-width: 3px;}:root :where(.wp-element-button:hover, .wp-block-button__link:hover){outline-color: blue;outline-offset: 3px;outline-style: solid;outline-width: 3px;}'; // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * Tests that a custom root selector is correctly applied when generating a stylesheet. // obf
	 * // obf
	 * @ticket 60343 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_stylesheet_custom_root_selector() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'color' => array( // obf
						'text' => 'teal', // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf

		// Custom root selector is unrelated to root layout styles so they don't need to be output for this test. // obf
		$v_wpbnz = array( // obf
			'root_selector'           => '.custom', // obf
			'skip_root_layout_styles' => true, // obf
		); // obf
		$v_hzkft  = $v_rndft->get_stylesheet( array( 'styles' ), null, $v_wpbnz ); // obf

		$v_hsfve->assertSame( // obf
			':root :where(.custom){color: teal;}', // obf
			$v_hzkft // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that settings passed to WP_Theme_JSON override merged theme data. // obf
	 * // obf
	 * @ticket 61118 // obf
	 * @ticket 61165 // obf
	 * @ticket 61630 // obf
	 * @ticket 61704 // obf
	 */ // obf
	public function test_get_stylesheet_generates_fluid_typography_values() { // obf
		register_block_type( // obf
			'test/clamp-me', // obf
			array( // obf
				'api_version' => 3, // obf
			) // obf
		); // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'typography' => array( // obf
						'fluid'     => true, // obf
						'fontSizes' => array( // obf
							array( // obf
								'size' => '16px', // obf
								'slug' => 'pickles', // obf
								'name' => 'Pickles', // obf
							), // obf
							array( // obf
								'size' => '22px', // obf
								'slug' => 'toast', // obf
								'name' => 'Toast', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'typography' => array( // obf
						'fontSize' => '1em', // obf
					), // obf
					'elements'   => array( // obf
						'h1' => array( // obf
							'typography' => array( // obf
								'fontSize' => '100px', // obf
							), // obf
						), // obf
					), // obf
					'blocks'     => array( // obf
						'test/clamp-me' => array( // obf
							'typography' => array( // obf
								'fontSize' => '48px', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf

		unregister_block_type( 'test/clamp-me' ); // obf

		$v_hsfve->assertSame( // obf
			':root{--wp--preset--font-size--pickles: clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.156), 16px);--wp--preset--font-size--toast: clamp(14.642px, 0.915rem + ((1vw - 3.2px) * 0.575), 22px);}body{font-size: clamp(0.875em, 0.875rem + ((1vw - 0.2em) * 0.156), 1em);}h1{font-size: clamp(50.171px, 3.136rem + ((1vw - 3.2px) * 3.893), 100px);}:root :where(.wp-block-test-clamp-me){font-size: clamp(27.894px, 1.743rem + ((1vw - 3.2px) * 1.571), 48px);}.has-pickles-font-size{font-size: var(--wp--preset--font-size--pickles) !important;}.has-toast-font-size{font-size: var(--wp--preset--font-size--toast) !important;}', // obf
			$v_rndft->get_stylesheet( array( 'styles', 'variables', 'presets' ), null, array( 'skip_root_layout_styles' => true ) ) // obf
		); // obf
	} // obf

	public function test_allow_indirect_properties() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'   => array( // obf
					'blocks'  => array( // obf
						'core/social-links' => array( // obf
							'spacing' => array( // obf
								'blockGap' => array( // obf
									'top'  => '1em', // obf
									'left' => '2em', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'spacing' => array( // obf
						'blockGap' => '3em', // obf
					), // obf
				), // obf
				'settings' => array( // obf
					'layout' => array( // obf
						'contentSize' => '800px', // obf
						'wideSize'    => '1000px', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'   => array( // obf
				'blocks'  => array( // obf
					'core/social-links' => array( // obf
						'spacing' => array( // obf
							'blockGap' => array( // obf
								'top'  => '1em', // obf
								'left' => '2em', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'spacing' => array( // obf
					'blockGap' => '3em', // obf
				), // obf
			), // obf
			'settings' => array( // obf
				'layout' => array( // obf
					'contentSize' => '800px', // obf
					'wideSize'    => '1000px', // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_merge_incoming_data() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'  => array( // obf
						'custom'  => false, // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'red', // obf
								'color' => 'red', // obf
							), // obf
							array( // obf
								'slug'  => 'green', // obf
								'color' => 'green', // obf
							), // obf
						), // obf
					), // obf
					'blocks' => array( // obf
						'core/paragraph' => array( // obf
							'color' => array( // obf
								'custom' => false, // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'typography' => array( // obf
						'fontSize' => '12', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_bayct = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'blocks' => array( // obf
					'core/list' => array( // obf
						'color' => array( // obf
							'custom' => false, // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'styles'   => array( // obf
				'blocks' => array( // obf
					'core/list' => array( // obf
						'typography' => array( // obf
							'fontSize' => '12', // obf
						), // obf
						'color'      => array( // obf
							'background' => 'brown', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hnxcf = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color' => array( // obf
					'customGradient' => true, // obf
				), // obf
			), // obf
		); // obf

		$v_ubajh = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color' => array( // obf
					'custom' => true, // obf
				), // obf
			), // obf
		); // obf

		$v_cgiza = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/group' => array( // obf
						'spacing' => array( // obf
							'padding' => array( // obf
								'top' => '12px', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_cuvqe = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/group' => array( // obf
						'spacing' => array( // obf
							'padding' => array( // obf
								'bottom' => '12px', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_zensd = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/para' => array( // obf
						'typography' => array( // obf
							'lineHeight' => '12', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_kinlm = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'palette'   => array( // obf
						array( // obf
							'slug'  => 'blue', // obf
							'color' => 'blue', // obf
						), // obf
					), // obf
					'gradients' => array( // obf
						array( // obf
							'slug'     => 'gradient', // obf
							'gradient' => 'gradient', // obf
						), // obf
					), // obf
				), // obf
				'typography' => array( // obf
					'fontSizes'    => array( // obf
						array( // obf
							'slug' => 'fontSize', // obf
							'size' => 'fontSize', // obf
						), // obf
					), // obf
					'fontFamilies' => array( // obf
						array( // obf
							'slug'       => 'fontFamily', // obf
							'fontFamily' => 'fontFamily', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'custom'         => true, // obf
					'customGradient' => true, // obf
					'palette'        => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'  => 'blue', // obf
								'color' => 'blue', // obf
							), // obf
						), // obf
					), // obf
					'gradients'      => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'     => 'gradient', // obf
								'gradient' => 'gradient', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'typography' => array( // obf
					'fontSizes'    => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug' => 'fontSize', // obf
								'size' => 'fontSize', // obf
							), // obf
						), // obf
					), // obf
					'fontFamilies' => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'       => 'fontFamily', // obf
								'fontFamily' => 'fontFamily', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'blocks'     => array( // obf
					'core/paragraph' => array( // obf
						'color' => array( // obf
							'custom' => false, // obf
						), // obf
					), // obf
					'core/list'      => array( // obf
						'color' => array( // obf
							'custom' => false, // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'styles'   => array( // obf
				'typography' => array( // obf
					'fontSize' => '12', // obf
				), // obf
				'blocks'     => array( // obf
					'core/group' => array( // obf
						'spacing' => array( // obf
							'padding' => array( // obf
								'top'    => '12px', // obf
								'bottom' => '12px', // obf
							), // obf
						), // obf
					), // obf
					'core/list'  => array( // obf
						'typography' => array( // obf
							'fontSize' => '12', // obf
						), // obf
						'color'      => array( // obf
							'background' => 'brown', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_rndft->merge( new WP_Theme_JSON( $v_bayct ) ); // obf
		$v_rndft->merge( new WP_Theme_JSON( $v_hnxcf ) ); // obf
		$v_rndft->merge( new WP_Theme_JSON( $v_ubajh ) ); // obf
		$v_rndft->merge( new WP_Theme_JSON( $v_cgiza ) ); // obf
		$v_rndft->merge( new WP_Theme_JSON( $v_cuvqe ) ); // obf
		$v_rndft->merge( new WP_Theme_JSON( $v_zensd ) ); // obf
		$v_rndft->merge( new WP_Theme_JSON( $v_kinlm ) ); // obf
		$v_hzkft = $v_rndft->get_raw_data(); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 53175 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_merge_incoming_data_empty_presets() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'      => array( // obf
						'duotone'   => array( // obf
							array( // obf
								'slug'   => 'value', // obf
								'colors' => array( 'red', 'green' ), // obf
							), // obf
						), // obf
						'gradients' => array( // obf
							array( // obf
								'slug'     => 'gradient', // obf
								'gradient' => 'gradient', // obf
							), // obf
						), // obf
						'palette'   => array( // obf
							array( // obf
								'slug'  => 'red', // obf
								'color' => 'red', // obf
							), // obf
						), // obf
					), // obf
					'spacing'    => array( // obf
						'units' => array( 'px', 'em' ), // obf
					), // obf
					'typography' => array( // obf
						'fontSizes' => array( // obf
							array( // obf
								'slug'  => 'size', // obf
								'value' => 'size', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_rndft->merge( // obf
			new WP_Theme_JSON( // obf
				array( // obf
					'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
					'settings' => array( // obf
						'color'      => array( // obf
							'duotone'   => array(), // obf
							'gradients' => array(), // obf
							'palette'   => array(), // obf
						), // obf
						'spacing'    => array( // obf
							'units' => array(), // obf
						), // obf
						'typography' => array( // obf
							'fontSizes' => array(), // obf
						), // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_hzkft   = $v_rndft->get_raw_data(); // obf
		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'duotone'   => array( // obf
						'theme' => array(), // obf
					), // obf
					'gradients' => array( // obf
						'theme' => array(), // obf
					), // obf
					'palette'   => array( // obf
						'theme' => array(), // obf
					), // obf
				), // obf
				'spacing'    => array( // obf
					'units' => array(), // obf
				), // obf
				'typography' => array( // obf
					'fontSizes' => array( // obf
						'theme' => array(), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 53175 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_merge_incoming_data_null_presets() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'      => array( // obf
						'duotone'   => array( // obf
							array( // obf
								'slug'   => 'value', // obf
								'colors' => array( 'red', 'green' ), // obf
							), // obf
						), // obf
						'gradients' => array( // obf
							array( // obf
								'slug'     => 'gradient', // obf
								'gradient' => 'gradient', // obf
							), // obf
						), // obf
						'palette'   => array( // obf
							array( // obf
								'slug'  => 'red', // obf
								'color' => 'red', // obf
							), // obf
						), // obf
					), // obf
					'spacing'    => array( // obf
						'units' => array( 'px', 'em' ), // obf
					), // obf
					'typography' => array( // obf
						'fontSizes' => array( // obf
							array( // obf
								'slug'  => 'size', // obf
								'value' => 'size', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_rndft->merge( // obf
			new WP_Theme_JSON( // obf
				array( // obf
					'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
					'settings' => array( // obf
						'color'      => array( // obf
							'custom' => false, // obf
						), // obf
						'spacing'    => array( // obf
							'margin' => false, // obf
						), // obf
						'typography' => array( // obf
							'lineHeight' => false, // obf
						), // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_hzkft   = $v_rndft->get_raw_data(); // obf
		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'custom'    => false, // obf
					'duotone'   => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'   => 'value', // obf
								'colors' => array( 'red', 'green' ), // obf
							), // obf
						), // obf
					), // obf
					'gradients' => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'     => 'gradient', // obf
								'gradient' => 'gradient', // obf
							), // obf
						), // obf
					), // obf
					'palette'   => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'  => 'red', // obf
								'color' => 'red', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'spacing'    => array( // obf
					'margin' => false, // obf
					'units'  => array( 'px', 'em' ), // obf
				), // obf
				'typography' => array( // obf
					'lineHeight' => false, // obf
					'fontSizes'  => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'  => 'size', // obf
								'value' => 'size', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	public function test_merge_incoming_data_color_presets_with_same_slugs_as_default_are_removed() { // obf
		$v_lmrvw = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'  => array( // obf
						'defaultPalette' => true, // obf
						'palette'        => array( // obf
							array( // obf
								'slug'  => 'red', // obf
								'color' => 'red', // obf
								'name'  => 'Red', // obf
							), // obf
							array( // obf
								'slug'  => 'green', // obf
								'color' => 'green', // obf
								'name'  => 'Green', // obf
							), // obf
						), // obf
					), // obf
					'blocks' => array( // obf
						'core/paragraph' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									array( // obf
										'slug'  => 'blue', // obf
										'color' => 'blue', // obf
										'name'  => 'Blue', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf
		$v_wsxhb    = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'  => array( // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'pink', // obf
								'color' => 'pink', // obf
								'name'  => 'Pink', // obf
							), // obf
							array( // obf
								'slug'  => 'green', // obf
								'color' => 'green', // obf
								'name'  => 'Greenish', // obf
							), // obf
						), // obf
					), // obf
					'blocks' => array( // obf
						'core/paragraph' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									array( // obf
										'slug'  => 'blue', // obf
										'color' => 'blue', // obf
										'name'  => 'Bluish', // obf
									), // obf
									array( // obf
										'slug'  => 'yellow', // obf
										'color' => 'yellow', // obf
										'name'  => 'Yellow', // obf
									), // obf
									array( // obf
										'slug'  => 'green', // obf
										'color' => 'green', // obf
										'name'  => 'Block Green', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'  => array( // obf
					'palette'        => array( // obf
						'default' => array( // obf
							array( // obf
								'slug'  => 'red', // obf
								'color' => 'red', // obf
								'name'  => 'Red', // obf
							), // obf
							array( // obf
								'slug'  => 'green', // obf
								'color' => 'green', // obf
								'name'  => 'Green', // obf
							), // obf
						), // obf
						'theme'   => array( // obf
							array( // obf
								'slug'  => 'pink', // obf
								'color' => 'pink', // obf
								'name'  => 'Pink', // obf
							), // obf
						), // obf
					), // obf
					'defaultPalette' => true, // obf
				), // obf
				'blocks' => array( // obf
					'core/paragraph' => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'default' => array( // obf
									array( // obf
										'slug'  => 'blue', // obf
										'color' => 'blue', // obf
										'name'  => 'Blue', // obf
									), // obf
								), // obf
								'theme'   => array( // obf
									array( // obf
										'slug'  => 'yellow', // obf
										'color' => 'yellow', // obf
										'name'  => 'Yellow', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_lmrvw->merge( $v_wsxhb ); // obf
		$v_hzkft = $v_lmrvw->get_raw_data(); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	public function test_merge_incoming_data_color_presets_with_same_slugs_as_default_are_not_removed_if_defaults_are_disabled() { // obf
		$v_lmrvw = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'  => array( // obf
						'defaultPalette' => true, // Emulate the defaults from core theme.json. // obf
						'palette'        => array( // obf
							array( // obf
								'slug'  => 'red', // obf
								'color' => 'red', // obf
								'name'  => 'Red', // obf
							), // obf
							array( // obf
								'slug'  => 'green', // obf
								'color' => 'green', // obf
								'name'  => 'Green', // obf
							), // obf
						), // obf
					), // obf
					'blocks' => array( // obf
						'core/paragraph' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									array( // obf
										'slug'  => 'blue', // obf
										'color' => 'blue', // obf
										'name'  => 'Blue', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf
		$v_wsxhb    = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'  => array( // obf
						'defaultPalette' => false, // obf
						'palette'        => array( // obf
							array( // obf
								'slug'  => 'pink', // obf
								'color' => 'pink', // obf
								'name'  => 'Pink', // obf
							), // obf
							array( // obf
								'slug'  => 'green', // obf
								'color' => 'green', // obf
								'name'  => 'Greenish', // obf
							), // obf
						), // obf
					), // obf
					'blocks' => array( // obf
						'core/paragraph' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									array( // obf
										'slug'  => 'blue', // obf
										'color' => 'blue', // obf
										'name'  => 'Bluish', // obf
									), // obf
									array( // obf
										'slug'  => 'yellow', // obf
										'color' => 'yellow', // obf
										'name'  => 'Yellow', // obf
									), // obf
									array( // obf
										'slug'  => 'green', // obf
										'color' => 'green', // obf
										'name'  => 'Block Green', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'  => array( // obf
					'defaultPalette' => false, // obf
					'palette'        => array( // obf
						'default' => array( // obf
							array( // obf
								'slug'  => 'red', // obf
								'color' => 'red', // obf
								'name'  => 'Red', // obf
							), // obf
							array( // obf
								'slug'  => 'green', // obf
								'color' => 'green', // obf
								'name'  => 'Green', // obf
							), // obf
						), // obf
						'theme'   => array( // obf
							array( // obf
								'slug'  => 'pink', // obf
								'color' => 'pink', // obf
								'name'  => 'Pink', // obf
							), // obf
							array( // obf
								'slug'  => 'green', // obf
								'color' => 'green', // obf
								'name'  => 'Greenish', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'blocks' => array( // obf
					'core/paragraph' => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'default' => array( // obf
									array( // obf
										'slug'  => 'blue', // obf
										'color' => 'blue', // obf
										'name'  => 'Blue', // obf
									), // obf
								), // obf
								'theme'   => array( // obf
									array( // obf
										'slug'  => 'blue', // obf
										'color' => 'blue', // obf
										'name'  => 'Bluish', // obf
									), // obf
									array( // obf
										'slug'  => 'yellow', // obf
										'color' => 'yellow', // obf
										'name'  => 'Yellow', // obf
									), // obf
									array( // obf
										'slug'  => 'green', // obf
										'color' => 'green', // obf
										'name'  => 'Block Green', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_lmrvw->merge( $v_wsxhb ); // obf
		$v_hzkft = $v_lmrvw->get_raw_data(); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 54640 // obf
	 */ // obf
	public function test_merge_incoming_data_presets_use_default_names() { // obf
		$v_lmrvw   = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'typography' => array( // obf
						'fontSizes' => array( // obf
							array( // obf
								'name' => 'Small', // obf
								'slug' => 'small', // obf
								'size' => '12px', // obf
							), // obf
							array( // obf
								'name' => 'Large', // obf
								'slug' => 'large', // obf
								'size' => '20px', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'typography' => array( // obf
						'fontSizes' => array( // obf
							array( // obf
								'slug' => 'small', // obf
								'size' => '1.1rem', // obf
							), // obf
							array( // obf
								'slug' => 'large', // obf
								'size' => '1.75rem', // obf
							), // obf
							array( // obf
								'name' => 'Huge', // obf
								'slug' => 'huge', // obf
								'size' => '3rem', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'theme' // obf
		); // obf
		$v_sdvhi   = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'typography' => array( // obf
					'fontSizes' => array( // obf
						'default' => array( // obf
							array( // obf
								'name' => 'Small', // obf
								'slug' => 'small', // obf
								'size' => '12px', // obf
							), // obf
							array( // obf
								'name' => 'Large', // obf
								'slug' => 'large', // obf
								'size' => '20px', // obf
							), // obf
						), // obf
						'theme'   => array( // obf
							array( // obf
								'slug' => 'small', // obf
								'size' => '1.1rem', // obf
								'name' => 'Small', // obf
							), // obf
							array( // obf
								'slug' => 'large', // obf
								'size' => '1.75rem', // obf
								'name' => 'Large', // obf
							), // obf
							array( // obf
								'name' => 'Huge', // obf
								'slug' => 'huge', // obf
								'size' => '3rem', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_lmrvw->merge( $v_rndft ); // obf
		$v_hzkft = $v_lmrvw->get_raw_data(); // obf
		$v_hsfve->assertSameSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 61858 // obf
	 */ // obf
	public function test_merge_incoming_background_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'background' => array( // obf
						'backgroundImage' => array( // obf
							'id'     => 'uploaded', // obf
							'source' => 'file', // obf
							'url'    => 'http://example.org/quote.png', // obf
						), // obf
						'backgroundSize'  => 'cover', // obf
					), // obf
					'blocks'     => array( // obf
						'core/group' => array( // obf
							'background' => array( // obf
								'backgroundImage'      => array( // obf
									'ref' => 'styles.blocks.core/verse.background.backgroundImage', // obf
								), // obf
								'backgroundAttachment' => 'fixed', // obf
							), // obf
						), // obf
						'core/quote' => array( // obf
							'background' => array( // obf
								'backgroundImage'      => array( // obf
									'url' => 'http://example.org/quote.png', // obf
								), // obf
								'backgroundAttachment' => array( // obf
									'ref' => 'styles.blocks.core/group.background.backgroundAttachment', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_bdxbh = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'background' => array( // obf
					'backgroundImage' => array( // obf
						'url' => 'http://example.org/site.png', // obf
					), // obf
					'backgroundSize'  => 'contain', // obf
				), // obf
				'blocks'     => array( // obf
					'core/group' => array( // obf
						'background' => array( // obf
							'backgroundImage' => array( // obf
								'url' => 'http://example.org/group.png', // obf
							), // obf
						), // obf
					), // obf
					'core/quote' => array( // obf
						'background' => array( // obf
							'backgroundAttachment' => 'fixed', // obf
						), // obf
					), // obf
					'core/verse' => array( // obf
						'background' => array( // obf
							'backgroundImage' => array( // obf
								'ref' => 'styles.blocks.core/group.background.backgroundImage', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_sdvhi                       = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'background' => array( // obf
					'backgroundImage' => array( // obf
						'url' => 'http://example.org/site.png', // obf
					), // obf
					'backgroundSize'  => 'contain', // obf
				), // obf
				'blocks'     => array( // obf
					'core/group' => array( // obf
						'background' => array( // obf
							'backgroundImage'      => array( // obf
								'url' => 'http://example.org/group.png', // obf
							), // obf
							'backgroundAttachment' => 'fixed', // obf
						), // obf
					), // obf
					'core/quote' => array( // obf
						'background' => array( // obf
							'backgroundImage'      => array( // obf
								'url' => 'http://example.org/quote.png', // obf
							), // obf
							'backgroundAttachment' => 'fixed', // obf
						), // obf
					), // obf
					'core/verse' => array( // obf
						'background' => array( // obf
							'backgroundImage' => array( // obf
								'ref' => 'styles.blocks.core/group.background.backgroundImage', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_rndft->merge( new WP_Theme_JSON( $v_bdxbh ) ); // obf
		$v_hzkft = $v_rndft->get_raw_data(); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * This test covers `get_block_nodes` with the `$v_xgarv` option. // obf
	 * When `true`, `$v_xgarv` should return only the paths of the block nodes. // obf
	 * // obf
	 * @ticket 61858 // obf
	 */ // obf
	public function test_return_block_node_paths() { // obf
		$v_rndft = new ReflectionClass( 'WP_Theme_JSON' ); // obf

		$v_gzxtb = $v_rndft->getMethod( 'get_block_nodes' ); // obf
		$v_gzxtb->setAccessible( true ); // obf

		$v_rndft = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'typography' => array( // obf
					'fontSize' => '16px', // obf
				), // obf
				'blocks'     => array( // obf
					'core/button' => array( // obf
						'color' => array( // obf
							'background' => 'red', // obf
						), // obf
					), // obf
					'core/group'  => array( // obf
						'elements' => array( // obf
							'link' => array( // obf
								'color' => array( // obf
									'background' => 'blue', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_ztgyb = $v_gzxtb->invoke( null, $v_rndft, array(), array( 'include_node_paths_only' => true ) ); // obf

		$v_sdvhi = array( // obf
			array( // obf
				'path' => array( 'styles', 'blocks', 'core/button' ), // obf
			), // obf
			array( // obf
				'path' => array( 'styles', 'blocks', 'core/group' ), // obf
			), // obf
			array( // obf
				'path' => array( 'styles', 'blocks', 'core/group', 'elements', 'link' ), // obf
			), // obf
		); // obf

		$v_hsfve->assertEquals( $v_sdvhi, $v_ztgyb ); // obf
	} // obf

	/** // obf
	 * This test covers `get_block_nodes` with the `$v_xgarv` // obf
	 * and `include_block_style_variations` options. // obf
	 * // obf
	 * @ticket 62399 // obf
	 */ // obf
	public function test_return_block_node_paths_with_variations() { // obf
		$v_rndft = new ReflectionClass( 'WP_Theme_JSON' ); // obf

		$v_gzxtb = $v_rndft->getMethod( 'get_block_nodes' ); // obf
		$v_gzxtb->setAccessible( true ); // obf

		$v_rndft = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'typography' => array( // obf
					'fontSize' => '16px', // obf
				), // obf
				'blocks'     => array( // obf
					'core/button' => array( // obf
						'color'      => array( // obf
							'background' => 'red', // obf
						), // obf
						'variations' => array( // obf
							'cheese' => array( // obf
								'color' => array( // obf
									'background' => 'cheese', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'core/group'  => array( // obf
						'color'      => array( // obf
							'background' => 'blue', // obf
						), // obf
						'variations' => array( // obf
							'apricot' => array( // obf
								'color' => array( // obf
									'background' => 'apricot', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_ztgyb = $v_gzxtb->invoke( // obf
			null, // obf
			$v_rndft, // obf
			array(), // obf
			array( // obf
				'include_node_paths_only'        => true, // obf
				'include_block_style_variations' => true, // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			array( // obf
				'path'       => array( 'styles', 'blocks', 'core/button' ), // obf
				'variations' => array( // obf
					array( // obf
						'path' => array( 'styles', 'blocks', 'core/button', 'variations', 'cheese' ), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'path'       => array( 'styles', 'blocks', 'core/group' ), // obf
				'variations' => array( // obf
					array( // obf
						'path' => array( 'styles', 'blocks', 'core/group', 'variations', 'apricot' ), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEquals( $v_sdvhi, $v_ztgyb ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_remove_insecure_properties_removes_unsafe_styles() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'color'    => array( // obf
						'gradient' => 'url(\'data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMCcgaGVpZ2h0PScxMCc+PHNjcmlwdD5hbGVydCgnb2snKTwvc2NyaXB0PjxsaW5lYXJHcmFkaWVudCBpZD0nZ3JhZGllbnQnPjxzdG9wIG9mZnNldD0nMTAlJyBzdG9wLWNvbG9yPScjRjAwJy8+PHN0b3Agb2Zmc2V0PSc5MCUnIHN0b3AtY29sb3I9JyNmY2MnLz4gPC9saW5lYXJHcmFkaWVudD48cmVjdCBmaWxsPSd1cmwoI2dyYWRpZW50KScgeD0nMCcgeT0nMCcgd2lkdGg9JzEwMCUnIGhlaWdodD0nMTAwJScvPjwvc3ZnPg==\')', // obf
						'text'     => 'var:preset|color|dark-red', // obf
					), // obf
					'elements' => array( // obf
						'link' => array( // obf
							'color' => array( // obf
								'gradient'   => 'url(\'data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMCcgaGVpZ2h0PScxMCc+PHNjcmlwdD5hbGVydCgnb2snKTwvc2NyaXB0PjxsaW5lYXJHcmFkaWVudCBpZD0nZ3JhZGllbnQnPjxzdG9wIG9mZnNldD0nMTAlJyBzdG9wLWNvbG9yPScjRjAwJy8+PHN0b3Agb2Zmc2V0PSc5MCUnIHN0b3AtY29sb3I9JyNmY2MnLz4gPC9saW5lYXJHcmFkaWVudD48cmVjdCBmaWxsPSd1cmwoI2dyYWRpZW50KScgeD0nMCcgeT0nMCcgd2lkdGg9JzEwMCUnIGhlaWdodD0nMTAwJScvPjwvc3ZnPg==\')', // obf
								'text'       => 'var:preset|color|dark-pink', // obf
								'background' => 'var:preset|color|dark-red', // obf
							), // obf
						), // obf
					), // obf
					'blocks'   => array( // obf
						'core/image'  => array( // obf
							'filter' => array( // obf
								'duotone' => 'var:preset|duotone|blue-red', // obf
							), // obf
						), // obf
						'core/cover'  => array( // obf
							'filter' => array( // obf
								'duotone' => 'var(--invalid', // obf
							), // obf
						), // obf
						'core/group'  => array( // obf
							'color'    => array( // obf
								'gradient' => 'url(\'data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMCcgaGVpZ2h0PScxMCc+PHNjcmlwdD5hbGVydCgnb2snKTwvc2NyaXB0PjxsaW5lYXJHcmFkaWVudCBpZD0nZ3JhZGllbnQnPjxzdG9wIG9mZnNldD0nMTAlJyBzdG9wLWNvbG9yPScjRjAwJy8+PHN0b3Agb2Zmc2V0PSc5MCUnIHN0b3AtY29sb3I9JyNmY2MnLz4gPC9saW5lYXJHcmFkaWVudD48cmVjdCBmaWxsPSd1cmwoI2dyYWRpZW50KScgeD0nMCcgeT0nMCcgd2lkdGg9JzEwMCUnIGhlaWdodD0nMTAwJScvPjwvc3ZnPg==\')', // obf
								'text'     => 'var:preset|color|dark-gray', // obf
							), // obf
							'elements' => array( // obf
								'link' => array( // obf
									'color' => array( // obf
										'gradient' => 'url(\'data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMCcgaGVpZ2h0PScxMCc+PHNjcmlwdD5hbGVydCgnb2snKTwvc2NyaXB0PjxsaW5lYXJHcmFkaWVudCBpZD0nZ3JhZGllbnQnPjxzdG9wIG9mZnNldD0nMTAlJyBzdG9wLWNvbG9yPScjRjAwJy8+PHN0b3Agb2Zmc2V0PSc5MCUnIHN0b3AtY29sb3I9JyNmY2MnLz4gPC9saW5lYXJHcmFkaWVudD48cmVjdCBmaWxsPSd1cmwoI2dyYWRpZW50KScgeD0nMCcgeT0nMCcgd2lkdGg9JzEwMCUnIGhlaWdodD0nMTAwJScvPjwvc3ZnPg==\')', // obf
										'text'     => 'var:preset|color|dark-pink', // obf
									), // obf
								), // obf
							), // obf
						), // obf
						'invalid/key' => array( // obf
							'background' => 'green', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'color'    => array( // obf
					'text' => 'var(--wp--preset--color--dark-red)', // obf
				), // obf
				'elements' => array( // obf
					'link' => array( // obf
						'color' => array( // obf
							'text'       => 'var(--wp--preset--color--dark-pink)', // obf
							'background' => 'var(--wp--preset--color--dark-red)', // obf
						), // obf
					), // obf
				), // obf
				'blocks'   => array( // obf
					'core/image' => array( // obf
						'filter' => array( // obf
							'duotone' => 'var(--wp--preset--duotone--blue-red)', // obf
						), // obf
					), // obf
					'core/group' => array( // obf
						'color'    => array( // obf
							'text' => 'var(--wp--preset--color--dark-gray)', // obf
						), // obf
						'elements' => array( // obf
							'link' => array( // obf
								'color' => array( // obf
									'text' => 'var(--wp--preset--color--dark-pink)', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_remove_insecure_properties_removes_unsafe_styles_sub_properties() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'border'   => array( // obf
						'radius' => array( // obf
							'topLeft'     => '6px', // obf
							'topRight'    => 'var(--invalid', // obf
							'bottomRight' => '6px', // obf
							'bottomLeft'  => '6px', // obf
						), // obf
					), // obf
					'spacing'  => array( // obf
						'padding' => array( // obf
							'top'    => '1px', // obf
							'right'  => '1px', // obf
							'bottom' => 'var(--invalid', // obf
							'left'   => '1px', // obf
						), // obf
					), // obf
					'elements' => array( // obf
						'link' => array( // obf
							'spacing' => array( // obf
								'padding' => array( // obf
									'top'    => '2px', // obf
									'right'  => '2px', // obf
									'bottom' => 'var(--invalid', // obf
									'left'   => '2px', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'blocks'   => array( // obf
						'core/group' => array( // obf
							'border'   => array( // obf
								'radius' => array( // obf
									'topLeft'     => '5px', // obf
									'topRight'    => 'var(--invalid', // obf
									'bottomRight' => '5px', // obf
									'bottomLeft'  => '5px', // obf
								), // obf
							), // obf
							'spacing'  => array( // obf
								'padding' => array( // obf
									'top'    => '3px', // obf
									'right'  => '3px', // obf
									'bottom' => 'var(--invalid', // obf
									'left'   => '3px', // obf
								), // obf
							), // obf
							'elements' => array( // obf
								'link' => array( // obf
									'spacing' => array( // obf
										'padding' => array( // obf
											'top'    => '4px', // obf
											'right'  => '4px', // obf
											'bottom' => 'var(--invalid', // obf
											'left'   => '4px', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			true // obf
		); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'border'   => array( // obf
					'radius' => array( // obf
						'topLeft'     => '6px', // obf
						'bottomRight' => '6px', // obf
						'bottomLeft'  => '6px', // obf
					), // obf
				), // obf
				'spacing'  => array( // obf
					'padding' => array( // obf
						'top'   => '1px', // obf
						'right' => '1px', // obf
						'left'  => '1px', // obf
					), // obf
				), // obf
				'elements' => array( // obf
					'link' => array( // obf
						'spacing' => array( // obf
							'padding' => array( // obf
								'top'   => '2px', // obf
								'right' => '2px', // obf
								'left'  => '2px', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'blocks'   => array( // obf
					'core/group' => array( // obf
						'border'   => array( // obf
							'radius' => array( // obf
								'topLeft'     => '5px', // obf
								'bottomRight' => '5px', // obf
								'bottomLeft'  => '5px', // obf
							), // obf
						), // obf
						'spacing'  => array( // obf
							'padding' => array( // obf
								'top'   => '3px', // obf
								'right' => '3px', // obf
								'left'  => '3px', // obf
							), // obf
						), // obf
						'elements' => array( // obf
							'link' => array( // obf
								'spacing' => array( // obf
									'padding' => array( // obf
										'top'   => '4px', // obf
										'right' => '4px', // obf
										'left'  => '4px', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_remove_insecure_properties_removes_non_preset_settings() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'   => array( // obf
						'custom'  => true, // obf
						'palette' => array( // obf
							'custom' => array( // obf
								array( // obf
									'name'  => 'Red', // obf
									'slug'  => 'red', // obf
									'color' => '#ff0000', // obf
								), // obf
								array( // obf
									'name'  => 'Green', // obf
									'slug'  => 'green', // obf
									'color' => '#00ff00', // obf
								), // obf
								array( // obf
									'name'  => 'Blue', // obf
									'slug'  => 'blue', // obf
									'color' => '#0000ff', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'spacing' => array( // obf
						'padding' => false, // obf
					), // obf
					'blocks'  => array( // obf
						'core/group' => array( // obf
							'color'   => array( // obf
								'custom'  => true, // obf
								'palette' => array( // obf
									'custom' => array( // obf
										array( // obf
											'name'  => 'Yellow', // obf
											'slug'  => 'yellow', // obf
											'color' => '#ff0000', // obf
										), // obf
										array( // obf
											'name'  => 'Pink', // obf
											'slug'  => 'pink', // obf
											'color' => '#00ff00', // obf
										), // obf
										array( // obf
											'name'  => 'Orange', // obf
											'slug'  => 'orange', // obf
											'color' => '#0000ff', // obf
										), // obf
									), // obf
								), // obf
							), // obf
							'spacing' => array( // obf
								'padding' => false, // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'  => array( // obf
					'palette' => array( // obf
						'custom' => array( // obf
							array( // obf
								'name'  => 'Red', // obf
								'slug'  => 'red', // obf
								'color' => '#ff0000', // obf
							), // obf
							array( // obf
								'name'  => 'Green', // obf
								'slug'  => 'green', // obf
								'color' => '#00ff00', // obf
							), // obf
							array( // obf
								'name'  => 'Blue', // obf
								'slug'  => 'blue', // obf
								'color' => '#0000ff', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'blocks' => array( // obf
					'core/group' => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'custom' => array( // obf
									array( // obf
										'name'  => 'Yellow', // obf
										'slug'  => 'yellow', // obf
										'color' => '#ff0000', // obf
									), // obf
									array( // obf
										'name'  => 'Pink', // obf
										'slug'  => 'pink', // obf
										'color' => '#00ff00', // obf
									), // obf
									array( // obf
										'name'  => 'Orange', // obf
										'slug'  => 'orange', // obf
										'color' => '#0000ff', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_remove_insecure_properties_removes_unsafe_preset_settings() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'      => array( // obf
						'palette' => array( // obf
							'custom' => array( // obf
								array( // obf
									'name'  => 'Red/><b>ok</ok>', // obf
									'slug'  => 'red', // obf
									'color' => '#ff0000', // obf
								), // obf
								array( // obf
									'name'  => 'Green', // obf
									'slug'  => 'a" attr', // obf
									'color' => '#00ff00', // obf
								), // obf
								array( // obf
									'name'  => 'Blue', // obf
									'slug'  => 'blue', // obf
									'color' => 'var(--invalid', // obf
								), // obf
								array( // obf
									'name'  => 'Pink', // obf
									'slug'  => 'pink', // obf
									'color' => '#FFC0CB', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'typography' => array( // obf
						'fontFamilies' => array( // obf
							'custom' => array( // obf
								array( // obf
									'name'       => 'Helvetica Arial/><b>test</b>', // obf
									'slug'       => 'helvetica-arial', // obf
									'fontFamily' => 'Helvetica Neue, Helvetica, Arial, sans-serif', // obf
								), // obf
								array( // obf
									'name'       => 'Geneva', // obf
									'slug'       => 'geneva#asa', // obf
									'fontFamily' => 'Geneva, Tahoma, Verdana, sans-serif', // obf
								), // obf
								array( // obf
									'name'       => 'Cambria', // obf
									'slug'       => 'cambria', // obf
									'fontFamily' => 'Cambria, Georgia, serif', // obf
								), // obf
								array( // obf
									'name'       => 'Helvetica Arial', // obf
									'slug'       => 'helvetica-arial', // obf
									'fontFamily' => 'var(--invalid', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'blocks'     => array( // obf
						'core/group' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									'custom' => array( // obf
										array( // obf
											'name'  => 'Red/><b>ok</ok>', // obf
											'slug'  => 'red', // obf
											'color' => '#ff0000', // obf
										), // obf
										array( // obf
											'name'  => 'Green', // obf
											'slug'  => 'a" attr', // obf
											'color' => '#00ff00', // obf
										), // obf
										array( // obf
											'name'  => 'Blue', // obf
											'slug'  => 'blue', // obf
											'color' => 'var(--invalid', // obf
										), // obf
										array( // obf
											'name'  => 'Pink', // obf
											'slug'  => 'pink', // obf
											'color' => '#FFC0CB', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'palette' => array( // obf
						'custom' => array( // obf
							array( // obf
								'name'  => 'Pink', // obf
								'slug'  => 'pink', // obf
								'color' => '#FFC0CB', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'typography' => array( // obf
					'fontFamilies' => array( // obf
						'custom' => array( // obf
							array( // obf
								'name'       => 'Cambria', // obf
								'slug'       => 'cambria', // obf
								'fontFamily' => 'Cambria, Georgia, serif', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'blocks'     => array( // obf
					'core/group' => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'custom' => array( // obf
									array( // obf
										'name'  => 'Pink', // obf
										'slug'  => 'pink', // obf
										'color' => '#FFC0CB', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_remove_insecure_properties_applies_safe_styles() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'color' => array( // obf
						'text' => '#abcabc ', // Trailing space. // obf
					), // obf
				), // obf
			), // obf
			true // obf
		); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'color' => array( // obf
					'text' => '#abcabc ', // obf
				), // obf
			), // obf
		); // obf
		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 57321 // obf
	 * // obf
	 * @covers WP_Theme_JSON::remove_insecure_properties // obf
	 */ // obf
	public function test_remove_insecure_properties_should_allow_indirect_properties() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'   => array( // obf
					'spacing' => array( // obf
						'blockGap' => '3em', // obf
					), // obf
					'blocks'  => array( // obf
						'core/social-links' => array( // obf
							'spacing' => array( // obf
								'blockGap' => array( // obf
									'left' => '2em', // obf
									'top'  => '1em', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'settings' => array( // obf
					'layout' => array( // obf
						'contentSize' => '800px', // obf
						'wideSize'    => '1000px', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'   => array( // obf
				'spacing' => array( // obf
					'blockGap' => '3em', // obf
				), // obf
				'blocks'  => array( // obf
					'core/social-links' => array( // obf
						'spacing' => array( // obf
							'blockGap' => array( // obf
								'left' => '2em', // obf
								'top'  => '1em', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'settings' => array( // obf
				'layout' => array( // obf
					'contentSize' => '800px', // obf
					'wideSize'    => '1000px', // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertSameSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 */ // obf
	public function test_remove_invalid_element_pseudo_selectors() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'elements' => array( // obf
						'link' => array( // obf
							'color'  => array( // obf
								'text'       => 'hotpink', // obf
								'background' => 'yellow', // obf
							), // obf
							':hover' => array( // obf
								'color' => array( // obf
									'text'       => 'red', // obf
									'background' => 'blue', // obf
								), // obf
							), // obf
							':seen'  => array( // obf
								'color' => array( // obf
									'background' => 'ivory', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			true // obf
		); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'elements' => array( // obf
					'link' => array( // obf
						'color'  => array( // obf
							'text'       => 'hotpink', // obf
							'background' => 'yellow', // obf
						), // obf
						':hover' => array( // obf
							'color' => array( // obf
								'text'       => 'red', // obf
								'background' => 'blue', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_custom_templates() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'         => 1, // obf
				'customTemplates' => array( // obf
					array( // obf
						'name'  => 'page-home', // obf
						'title' => 'Homepage template', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vmijb = $v_rndft->get_custom_templates(); // obf

		$v_hsfve->assertEqualSetsWithIndex( // obf
			$v_vmijb, // obf
			array( // obf
				'page-home' => array( // obf
					'title'     => 'Homepage template', // obf
					'postTypes' => array( 'page' ), // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_template_parts() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'       => 1, // obf
				'templateParts' => array( // obf
					array( // obf
						'name'  => 'small-header', // obf
						'title' => 'Small Header', // obf
						'area'  => 'header', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_osqka = $v_rndft->get_template_parts(); // obf

		$v_hsfve->assertEqualSetsWithIndex( // obf
			$v_osqka, // obf
			array( // obf
				'small-header' => array( // obf
					'title' => 'Small Header', // obf
					'area'  => 'header', // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_get_from_editor_settings() { // obf
		$v_ovwmj = array( // obf
			'disableCustomColors'    => true, // obf
			'disableCustomGradients' => true, // obf
			'disableCustomFontSizes' => true, // obf
			'enableCustomLineHeight' => true, // obf
			'enableCustomUnits'      => true, // obf
			'colors'                 => array( // obf
				array( // obf
					'slug'  => 'color-slug', // obf
					'name'  => 'Color Name', // obf
					'color' => 'colorvalue', // obf
				), // obf
			), // obf
			'gradients'              => array( // obf
				array( // obf
					'slug'     => 'gradient-slug', // obf
					'name'     => 'Gradient Name', // obf
					'gradient' => 'gradientvalue', // obf
				), // obf
			), // obf
			'fontSizes'              => array( // obf
				array( // obf
					'slug' => 'size-slug', // obf
					'name' => 'Size Name', // obf
					'size' => 'sizevalue', // obf
				), // obf
			), // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'custom'         => false, // obf
					'customGradient' => false, // obf
					'gradients'      => array( // obf
						array( // obf
							'slug'     => 'gradient-slug', // obf
							'name'     => 'Gradient Name', // obf
							'gradient' => 'gradientvalue', // obf
						), // obf
					), // obf
					'palette'        => array( // obf
						array( // obf
							'slug'  => 'color-slug', // obf
							'name'  => 'Color Name', // obf
							'color' => 'colorvalue', // obf
						), // obf
					), // obf
				), // obf
				'spacing'    => array( // obf
					'units' => array( 'px', 'em', 'rem', 'vh', 'vw', '%' ), // obf
				), // obf
				'typography' => array( // obf
					'customFontSize' => false, // obf
					'lineHeight'     => true, // obf
					'fontSizes'      => array( // obf
						array( // obf
							'slug' => 'size-slug', // obf
							'name' => 'Size Name', // obf
							'size' => 'sizevalue', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hzkft = WP_Theme_JSON::get_from_editor_settings( $v_ovwmj ); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_editor_settings_no_theme_support() { // obf
		$v_ovwmj = array( // obf
			'__unstableEnableFullSiteEditingBlocks' => false, // obf
			'disableCustomColors'                   => false, // obf
			'disableCustomFontSizes'                => false, // obf
			'disableCustomGradients'                => false, // obf
			'enableCustomLineHeight'                => false, // obf
			'enableCustomUnits'                     => false, // obf
			'imageSizes'                            => array( // obf
				array( // obf
					'slug' => 'thumbnail', // obf
					'name' => 'Thumbnail', // obf
				), // obf
				array( // obf
					'slug' => 'medium', // obf
					'name' => 'Medium', // obf
				), // obf
				array( // obf
					'slug' => 'large', // obf
					'name' => 'Large', // obf
				), // obf
				array( // obf
					'slug' => 'full', // obf
					'name' => 'Full Size', // obf
				), // obf
			), // obf
			'isRTL'                                 => false, // obf
			'maxUploadFileSize'                     => 123, // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'custom'         => true, // obf
					'customGradient' => true, // obf
				), // obf
				'spacing'    => array( // obf
					'units' => false, // obf
				), // obf
				'typography' => array( // obf
					'customFontSize' => true, // obf
					'lineHeight'     => false, // obf
				), // obf
			), // obf
		); // obf

		$v_hzkft = WP_Theme_JSON::get_from_editor_settings( $v_ovwmj ); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_editor_settings_blank() { // obf
		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array(), // obf
		); // obf
		$v_hzkft   = WP_Theme_JSON::get_from_editor_settings( array() ); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_editor_settings_custom_units_can_be_disabled() { // obf
		add_theme_support( 'custom-units', array() ); // obf
		$v_hzkft = WP_Theme_JSON::get_from_editor_settings( get_classic_theme_supports_block_editor_settings() ); // obf
		remove_theme_support( 'custom-units' ); // obf

		$v_sdvhi = array( // obf
			'units'   => array( array() ), // obf
			'padding' => false, // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft['settings']['spacing'] ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_editor_settings_custom_units_can_be_enabled() { // obf
		add_theme_support( 'custom-units' ); // obf
		$v_hzkft = WP_Theme_JSON::get_from_editor_settings( get_classic_theme_supports_block_editor_settings() ); // obf
		remove_theme_support( 'custom-units' ); // obf

		$v_sdvhi = array( // obf
			'units'   => array( 'px', 'em', 'rem', 'vh', 'vw', '%' ), // obf
			'padding' => false, // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft['settings']['spacing'] ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_get_editor_settings_custom_units_can_be_filtered() { // obf
		add_theme_support( 'custom-units', 'rem', 'em' ); // obf
		$v_hzkft = WP_Theme_JSON::get_from_editor_settings( get_classic_theme_supports_block_editor_settings() ); // obf
		remove_theme_support( 'custom-units' ); // obf

		$v_sdvhi = array( // obf
			'units'   => array( 'rem', 'em' ), // obf
			'padding' => false, // obf
		); // obf
		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft['settings']['spacing'] ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_export_data() { // obf
		$v_wsxhb = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color' => array( // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'white', // obf
								'color' => 'white', // obf
								'label' => 'White', // obf
							), // obf
							array( // obf
								'slug'  => 'black', // obf
								'color' => 'black', // obf
								'label' => 'Black', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_tputf  = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color' => array( // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'white', // obf
								'color' => '#fff', // obf
								'label' => 'User White', // obf
							), // obf
							array( // obf
								'slug'  => 'hotpink', // obf
								'color' => 'hotpink', // obf
								'label' => 'hotpink', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'custom' // obf
		); // obf

		$v_wsxhb->merge( $v_tputf ); // obf
		$v_hzkft   = $v_wsxhb->get_data(); // obf
		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color' => array( // obf
					'palette' => array( // obf
						array( // obf
							'slug'  => 'white', // obf
							'color' => '#fff', // obf
							'label' => 'User White', // obf
						), // obf
						array( // obf
							'slug'  => 'black', // obf
							'color' => 'black', // obf
							'label' => 'Black', // obf
						), // obf
						array( // obf
							'slug'  => 'hotpink', // obf
							'color' => 'hotpink', // obf
							'label' => 'hotpink', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_export_data_deals_with_empty_user_data() { // obf
		$v_wsxhb = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color' => array( // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'white', // obf
								'color' => 'white', // obf
								'label' => 'White', // obf
							), // obf
							array( // obf
								'slug'  => 'black', // obf
								'color' => 'black', // obf
								'label' => 'Black', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hzkft   = $v_wsxhb->get_data(); // obf
		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color' => array( // obf
					'palette' => array( // obf
						array( // obf
							'slug'  => 'white', // obf
							'color' => 'white', // obf
							'label' => 'White', // obf
						), // obf
						array( // obf
							'slug'  => 'black', // obf
							'color' => 'black', // obf
							'label' => 'Black', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_export_data_deals_with_empty_theme_data() { // obf
		$v_tputf = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color' => array( // obf
						'palette' => array( // obf
							array( // obf
								'slug'  => 'white', // obf
								'color' => '#fff', // obf
								'label' => 'User White', // obf
							), // obf
							array( // obf
								'slug'  => 'hotpink', // obf
								'color' => 'hotpink', // obf
								'label' => 'hotpink', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'custom' // obf
		); // obf

		$v_hzkft   = $v_tputf->get_data(); // obf
		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color' => array( // obf
					'palette' => array( // obf
						array( // obf
							'slug'  => 'white', // obf
							'color' => '#fff', // obf
							'label' => 'User White', // obf
						), // obf
						array( // obf
							'slug'  => 'hotpink', // obf
							'color' => 'hotpink', // obf
							'label' => 'hotpink', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_export_data_deals_with_empty_data() { // obf
		$v_wsxhb    = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			), // obf
			'theme' // obf
		); // obf
		$v_hzkft   = $v_wsxhb->get_data(); // obf
		$v_sdvhi = array( 'version' => WP_Theme_JSON::LATEST_SCHEMA ); // obf
		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_export_data_sets_appearance_tools() { // obf
		$v_wsxhb = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'appearanceTools' => true, // obf
					'blocks'          => array( // obf
						'core/paragraph' => array( // obf
							'appearanceTools' => true, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hzkft   = $v_wsxhb->get_data(); // obf
		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'appearanceTools' => true, // obf
				'blocks'          => array( // obf
					'core/paragraph' => array( // obf
						'appearanceTools' => true, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 56611 // obf
	 */ // obf
	public function test_export_data_sets_use_root_padding_aware_alignments() { // obf
		$v_wsxhb = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'useRootPaddingAwareAlignments' => true, // obf
					'blocks'                        => array( // obf
						'core/paragraph' => array( // obf
							'useRootPaddingAwareAlignments' => true, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hzkft   = $v_wsxhb->get_data(); // obf
		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'useRootPaddingAwareAlignments' => true, // obf
				'blocks'                        => array( // obf
					'core/paragraph' => array( // obf
						'useRootPaddingAwareAlignments' => true, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	public function test_remove_invalid_font_family_settings() { // obf
		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'typography' => array( // obf
						'fontFamilies' => array( // obf
							'custom' => array( // obf
								array( // obf
									'name'       => 'Open Sans', // obf
									'slug'       => 'open-sans', // obf
									'fontFamily' => '"Open Sans", sans-serif</style><script>alert("xss")</script>', // obf
								), // obf
								array( // obf
									'name'       => 'Arial', // obf
									'slug'       => 'arial', // obf
									'fontFamily' => 'Arial, serif', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			true // obf
		); // obf

		$v_sdvhi = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'typography' => array( // obf
					'fontFamilies' => array( // obf
						'custom' => array( // obf
							array( // obf
								'name'       => 'Arial', // obf
								'slug'       => 'arial', // obf
								'fontFamily' => 'Arial, serif', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 */ // obf
	public function test_get_element_class_name_button() { // obf
		$v_sdvhi = 'wp-element-button'; // obf
		$v_hzkft   = WP_Theme_JSON::get_element_class_name( 'button' ); // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 */ // obf
	public function test_get_element_class_name_invalid() { // obf
		$v_sdvhi = ''; // obf
		$v_hzkft   = WP_Theme_JSON::get_element_class_name( 'unknown-element' ); // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * Testing that dynamic properties in theme.json return the value they reference, // obf
	 * e.g. array( 'ref' => 'styles.color.background' ) => "#ffffff". // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61704 // obf
	 */ // obf
	public function test_get_property_value_valid() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'color'    => array( // obf
						'background' => '#ffffff', // obf
						'text'       => '#000000', // obf
					), // obf
					'elements' => array( // obf
						'button' => array( // obf
							'color' => array( // obf
								'background' => array( 'ref' => 'styles.color.text' ), // obf
								'text'       => array( 'ref' => 'styles.color.background' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = 'body{background-color: #ffffff;color: #000000;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #000000;color: #ffffff;}'; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * Tests that get_property_value() static method returns an empty string // obf
	 * if the path is invalid or the value is null. // obf
	 * // obf
	 * Also, tests that PHP 8.1 "passing null to non-nullable" deprecation notice // obf
	 * is not thrown when passing the value to strncmp() in the method. // obf
	 * // obf
	 * The notice that we should not see: // obf
	 * `Deprecated: strncmp(): Passing null to parameter #1 ($v_lfosh) of type string is deprecated`. // obf
	 * // obf
	 * @dataProvider data_get_property_value_should_return_string_for_invalid_paths_or_null_values // obf
	 * // obf
	 * @ticket 56620 // obf
	 * // obf
	 * @covers WP_Theme_JSON::get_property_value // obf
	 * // obf
	 * @param array $v_gxixl An array with style definitions. // obf
	 * @param array $v_uelit   Path to the desired properties. // obf
	 */ // obf
	public function test_get_property_value_should_return_string_for_invalid_paths_or_null_values( $v_gxixl, $v_uelit ) { // obf
		$v_eeoxe = new ReflectionClass( WP_Theme_JSON::class ); // obf

		$v_fsxyu = $v_eeoxe->getMethod( 'get_property_value' ); // obf
		$v_fsxyu->setAccessible( true ); // obf
		$v_mhkon = $v_fsxyu->invoke( null, $v_gxixl, $v_uelit ); // obf

		$v_hsfve->assertSame( '', $v_mhkon ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_property_value_should_return_string_for_invalid_paths_or_null_values(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_property_value_should_return_string_for_invalid_paths_or_null_values() { // obf
		return array( // obf
			'empty string' => array( // obf
				'styles' => array(), // obf
				'path'   => array( 'non_existent_path' ), // obf
			), // obf
			'null'         => array( // obf
				'styles' => array( 'some_null_value' => null ), // obf
				'path'   => array( 'some_null_value' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Testing that dynamic properties in theme.json that // obf
	 * refer to other dynamic properties in a loop // obf
	 * should be left untouched. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61704 // obf
	 * @expectedIncorrectUsage get_property_value // obf
	 */ // obf
	public function test_get_property_value_loop() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'color'    => array( // obf
						'background' => '#ffffff', // obf
						'text'       => array( 'ref' => 'styles.elements.button.color.background' ), // obf
					), // obf
					'elements' => array( // obf
						'button' => array( // obf
							'color' => array( // obf
								'background' => array( 'ref' => 'styles.color.text' ), // obf
								'text'       => array( 'ref' => 'styles.color.background' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = 'body{background-color: #ffffff;}:root :where(.wp-element-button, .wp-block-button__link){color: #ffffff;}'; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * Testing that dynamic properties in theme.json that // obf
	 * refer to other dynamic properties // obf
	 * should be left unprocessed. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61704 // obf
	 * @expectedIncorrectUsage get_property_value // obf
	 */ // obf
	public function test_get_property_value_recursion() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'color'    => array( // obf
						'background' => '#ffffff', // obf
						'text'       => array( 'ref' => 'styles.color.background' ), // obf
					), // obf
					'elements' => array( // obf
						'button' => array( // obf
							'color' => array( // obf
								'background' => array( 'ref' => 'styles.color.text' ), // obf
								'text'       => array( 'ref' => 'styles.color.background' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = 'body{background-color: #ffffff;color: #ffffff;}:root :where(.wp-element-button, .wp-block-button__link){color: #ffffff;}'; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * Testing that dynamic properties in theme.json that // obf
	 * refer to themselves should be left unprocessed. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61704 // obf
	 * @expectedIncorrectUsage get_property_value // obf
	 */ // obf
	public function test_get_property_value_self() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'color' => array( // obf
						'background' => '#ffffff', // obf
						'text'       => array( 'ref' => 'styles.color.text' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = 'body{background-color: #ffffff;}'; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61304 // obf
	 * @ticket 61165 // obf
	 * @ticket 61704 // obf
	 */ // obf
	public function test_get_styles_for_block_with_padding_aware_alignments() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'   => array( // obf
					'spacing' => array( // obf
						'padding' => array( // obf
							'top'    => '10px', // obf
							'right'  => '12px', // obf
							'bottom' => '10px', // obf
							'left'   => '12px', // obf
						), // obf
					), // obf
				), // obf
				'settings' => array( // obf
					'useRootPaddingAwareAlignments' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_cldbw = array( // obf
			'path'     => array( 'styles' ), // obf
			'selector' => 'body', // obf
		); // obf

		$v_sdvhi    = ':where(body) { margin: 0; }.wp-site-blocks { padding-top: var(--wp--style--root--padding-top); padding-bottom: var(--wp--style--root--padding-bottom); }.has-global-padding { padding-right: var(--wp--style--root--padding-right); padding-left: var(--wp--style--root--padding-left); }.has-global-padding > .alignfull { margin-right: calc(var(--wp--style--root--padding-right) * -1); margin-left: calc(var(--wp--style--root--padding-left) * -1); }.has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) { padding-right: 0; padding-left: 0; }.has-global-padding :where(:not(.alignfull.is-layout-flow) > .has-global-padding:not(.wp-block-block, .alignfull)) > .alignfull { margin-left: 0; margin-right: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{--wp--style--root--padding-top: 10px;--wp--style--root--padding-right: 12px;--wp--style--root--padding-bottom: 10px;--wp--style--root--padding-left: 12px;}'; // obf
		$v_jrhdc  = $v_rndft->get_root_layout_rules( WP_Theme_JSON::ROOT_BLOCK_SELECTOR, $v_cldbw ); // obf
		$v_mrzql = $v_rndft->get_styles_for_block( $v_cldbw ); // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_jrhdc . $v_mrzql ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61704 // obf
	 */ // obf
	public function test_get_styles_for_block_without_padding_aware_alignments() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'spacing' => array( // obf
						'padding' => array( // obf
							'top'    => '10px', // obf
							'right'  => '12px', // obf
							'bottom' => '10px', // obf
							'left'   => '12px', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_cldbw = array( // obf
			'path'     => array( 'styles' ), // obf
			'selector' => 'body', // obf
		); // obf

		$v_sdvhi    = ':where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 10px;padding-right: 12px;padding-bottom: 10px;padding-left: 12px;}'; // obf
		$v_jrhdc  = $v_rndft->get_root_layout_rules( WP_Theme_JSON::ROOT_BLOCK_SELECTOR, $v_cldbw ); // obf
		$v_mrzql = $v_rndft->get_styles_for_block( $v_cldbw ); // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_jrhdc . $v_mrzql ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * @ticket 58550 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_get_styles_with_content_width() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'layout' => array( // obf
						'contentSize' => '800px', // obf
						'wideSize'    => '1000px', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_cldbw = array( // obf
			'path'     => array( 'settings' ), // obf
			'selector' => 'body', // obf
		); // obf

		$v_sdvhi = ':root { --wp--style--global--content-size: 800px;--wp--style--global--wide-size: 1000px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}'; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_root_layout_rules( WP_Theme_JSON::ROOT_BLOCK_SELECTOR, $v_cldbw ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56611 // obf
	 * @ticket 58548 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61829 // obf
	 */ // obf
	public function test_get_styles_with_appearance_tools() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'appearanceTools' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_cldbw = array( // obf
			'path'     => array( 'settings' ), // obf
			'selector' => 'body', // obf
		); // obf

		$v_sdvhi = ':where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: ; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: ; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 1;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 1;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 1;}:root :where(.is-layout-grid){gap: 1;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){margin-left: auto !important;margin-right: auto !important;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}'; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_root_layout_rules( WP_Theme_JSON::ROOT_BLOCK_SELECTOR, $v_cldbw ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54487 // obf
	 */ // obf
	public function test_sanitization() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'spacing' => array( // obf
						'blockGap' => 'valid value', // obf
					), // obf
					'blocks'  => array( // obf
						'core/group' => array( // obf
							'spacing' => array( // obf
								'margin'  => 'valid value', // obf
								'display' => 'none', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hzkft   = $v_rndft->get_raw_data(); // obf
		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'spacing' => array( // obf
					'blockGap' => 'valid value', // obf
				), // obf
				'blocks'  => array( // obf
					'core/group' => array( // obf
						'spacing' => array( // obf
							'margin' => 'valid value', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertEqualSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * @ticket 58462 // obf
	 */ // obf
	public function test_sanitize_for_unregistered_style_variations() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'core/quote' => array( // obf
							'variations' => array( // obf
								'unregisteredVariation' => array( // obf
									'color' => array( // obf
										'background' => 'hotpink', // obf
									), // obf
								), // obf
								'plain'                 => array( // obf
									'color' => array( // obf
										'background' => 'hotpink', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vprjl = $v_rndft->get_raw_data(); // obf
		$v_sdvhi             = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/quote' => array( // obf
						'variations' => array( // obf
							'plain' => array( // obf
								'color' => array( // obf
									'background' => 'hotpink', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_hsfve->assertSameSetsWithIndex( $v_sdvhi, $v_vprjl, 'Sanitized theme.json styles does not match' ); // obf
	} // obf

	/** // obf
	 * @ticket 61451 // obf
	 */ // obf
	public function test_unwraps_block_style_variations() { // obf
		register_block_style( // obf
			array( 'core/paragraph', 'core/group' ), // obf
			array( // obf
				'name'  => 'myVariation', // obf
				'label' => 'My variation', // obf
			) // obf
		); // obf

		$v_ovwmj = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'variations' => array( // obf
						'myVariation' => array( // obf
							'color'      => array( // obf
								'background' => 'topLevel', // obf
								'gradient'   => 'topLevel', // obf
							), // obf
							'typography' => array( // obf
								'fontFamily' => 'topLevel', // obf
							), // obf
						), // obf
					), // obf
					'blocks'     => array( // obf
						'core/paragraph' => array( // obf
							'variations' => array( // obf
								'myVariation' => array( // obf
									'color'   => array( // obf
										'background' => 'blockLevel', // obf
										'text'       => 'blockLevel', // obf
									), // obf
									'outline' => array( // obf
										'offset' => 'blockLevel', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/paragraph' => array( // obf
						'variations' => array( // obf
							'myVariation' => array( // obf
								'color'      => array( // obf
									'background' => 'blockLevel', // obf
									'gradient'   => 'topLevel', // obf
									'text'       => 'blockLevel', // obf
								), // obf
								'typography' => array( // obf
									'fontFamily' => 'topLevel', // obf
								), // obf
								'outline'    => array( // obf
									'offset' => 'blockLevel', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'core/group'     => array( // obf
						'variations' => array( // obf
							'myVariation' => array( // obf
								'color'      => array( // obf
									'background' => 'topLevel', // obf
									'gradient'   => 'topLevel', // obf
								), // obf
								'typography' => array( // obf
									'fontFamily' => 'topLevel', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_hsfve->assertSameSetsWithIndex( $v_sdvhi, $v_ovwmj->get_raw_data(), 'Unwrapped block style variations do not match' ); // obf
	} // obf

	/** // obf
	 * @ticket 57583 // obf
	 * // obf
	 * @dataProvider data_sanitize_for_block_with_style_variations // obf
	 * // obf
	 * @param array $v_yckek Theme.json variations to test. // obf
	 * @param array $v_twsux    Expected results after sanitizing. // obf
	 */ // obf
	public function test_sanitize_for_block_with_style_variations( $v_yckek, $v_twsux ) { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'core/quote' => $v_yckek, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Validate structure is sanitized. // obf
		$v_vprjl = $v_rndft->get_raw_data(); // obf
		$v_hsfve->assertIsArray( $v_vprjl, 'Sanitized theme.json is not an array data type' ); // obf
		$v_hsfve->assertArrayHasKey( 'styles', $v_vprjl, 'Sanitized theme.json does not have an "styles" key' ); // obf
		$v_hsfve->assertSameSetsWithIndex( $v_twsux, $v_vprjl['styles'], 'Sanitized theme.json styles does not match' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_sanitize_for_block_with_style_variations() { // obf
		return array( // obf
			'1 variation with 1 valid property'     => array( // obf
				'theme_json_variations' => array( // obf
					'variations' => array( // obf
						'plain' => array( // obf
							'color' => array( // obf
								'background' => 'hotpink', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'expected_sanitized'    => array( // obf
					'blocks' => array( // obf
						'core/quote' => array( // obf
							'variations' => array( // obf
								'plain' => array( // obf
									'color' => array( // obf
										'background' => 'hotpink', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'1 variation with 2 invalid properties' => array( // obf
				'theme_json_variations' => array( // obf
					'variations' => array( // obf
						'plain' => array( // obf
							'color'            => array( // obf
								'background' => 'hotpink', // obf
							), // obf
							'invalidProperty1' => 'value1', // obf
							'invalidProperty2' => 'value2', // obf
						), // obf
					), // obf
				), // obf
				'expected_sanitized'    => array( // obf
					'blocks' => array( // obf
						'core/quote' => array( // obf
							'variations' => array( // obf
								'plain' => array( // obf
									'color' => array( // obf
										'background' => 'hotpink', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that invalid properties are removed from the theme.json inside indexed arrays as settings.typography.fontFamilies. // obf
	 * // obf
	 * @ticket 60360 // obf
	 */ // obf
	public function test_sanitize_indexed_arrays() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'badKey2'  => 'I am Evil!', // obf
				'settings' => array( // obf
					'badKey3'    => 'I am Evil!', // obf
					'typography' => array( // obf
						'badKey4'      => 'I am Evil!', // obf
						'fontFamilies' => array( // obf
							'custom' => array( // obf
								array( // obf
									'badKey4'    => 'I am Evil!', // obf
									'name'       => 'Arial', // obf
									'slug'       => 'arial', // obf
									'fontFamily' => 'Arial, sans-serif', // obf
								), // obf
							), // obf
							'theme'  => array( // obf
								array( // obf
									'badKey5'    => 'I am Evil!', // obf
									'name'       => 'Piazzolla', // obf
									'slug'       => 'piazzolla', // obf
									'fontFamily' => 'Piazzolla', // obf
									'fontFace'   => array( // obf
										array( // obf
											'badKey6'    => 'I am Evil!', // obf
											'fontFamily' => 'Piazzolla', // obf
											'fontStyle'  => 'italic', // obf
											'fontWeight' => '400', // obf
											'src'        => 'https://example.com/font.ttf', // obf
										), // obf
										array( // obf
											'badKey7'    => 'I am Evil!', // obf
											'fontFamily' => 'Piazzolla', // obf
											'fontStyle'  => 'italic', // obf
											'fontWeight' => '400', // obf
											'src'        => 'https://example.com/font.ttf', // obf
										), // obf
									), // obf
								), // obf
								array( // obf
									'badKey8'    => 'I am Evil!', // obf
									'name'       => 'Inter', // obf
									'slug'       => 'Inter', // obf
									'fontFamily' => 'Inter', // obf
									'fontFace'   => array( // obf
										array( // obf
											'badKey9'    => 'I am Evil!', // obf
											'fontFamily' => 'Inter', // obf
											'fontStyle'  => 'italic', // obf
											'fontWeight' => '400', // obf
											'src'        => 'https://example.com/font.ttf', // obf
										), // obf
										array( // obf
											'badKey10'   => 'I am Evil!', // obf
											'fontFamily' => 'Inter', // obf
											'fontStyle'  => 'italic', // obf
											'fontWeight' => '400', // obf
											'src'        => 'https://example.com/font.ttf', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_twsux   = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'typography' => array( // obf
					'fontFamilies' => array( // obf
						'custom' => array( // obf
							array( // obf
								'name'       => 'Arial', // obf
								'slug'       => 'arial', // obf
								'fontFamily' => 'Arial, sans-serif', // obf
							), // obf
						), // obf
						'theme'  => array( // obf
							array( // obf
								'name'       => 'Piazzolla', // obf
								'slug'       => 'piazzolla', // obf
								'fontFamily' => 'Piazzolla', // obf
								'fontFace'   => array( // obf
									array( // obf
										'fontFamily' => 'Piazzolla', // obf
										'fontStyle'  => 'italic', // obf
										'fontWeight' => '400', // obf
										'src'        => 'https://example.com/font.ttf', // obf
									), // obf
									array( // obf
										'fontFamily' => 'Piazzolla', // obf
										'fontStyle'  => 'italic', // obf
										'fontWeight' => '400', // obf
										'src'        => 'https://example.com/font.ttf', // obf
									), // obf
								), // obf
							), // obf
							array( // obf
								'name'       => 'Inter', // obf
								'slug'       => 'Inter', // obf
								'fontFamily' => 'Inter', // obf
								'fontFace'   => array( // obf
									array( // obf
										'fontFamily' => 'Inter', // obf
										'fontStyle'  => 'italic', // obf
										'fontWeight' => '400', // obf
										'src'        => 'https://example.com/font.ttf', // obf
									), // obf
									array( // obf
										'fontFamily' => 'Inter', // obf
										'fontStyle'  => 'italic', // obf
										'fontWeight' => '400', // obf
										'src'        => 'https://example.com/font.ttf', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_vprjl = $v_rndft->get_raw_data(); // obf
		$v_hsfve->assertSameSetsWithIndex( $v_twsux, $v_vprjl, 'Sanitized theme.json does not match' ); // obf
	} // obf

	/** // obf
	 * @ticket 57583 // obf
	 * // obf
	 * @dataProvider data_sanitize_with_invalid_style_variation // obf
	 * // obf
	 * @param array $v_yckek The theme.json variations to test. // obf
	 */ // obf
	public function test_sanitize_with_invalid_style_variation( $v_yckek ) { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'core/quote' => $v_yckek, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Validate structure is sanitized. // obf
		$v_vprjl = $v_rndft->get_raw_data(); // obf
		$v_hsfve->assertIsArray( $v_vprjl, 'Sanitized theme.json is not an array data type' ); // obf
		$v_hsfve->assertArrayNotHasKey( 'styles', $v_vprjl, 'Sanitized theme.json should not have a "styles" key' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_sanitize_with_invalid_style_variation() { // obf
		return array( // obf
			'empty string variation' => array( // obf
				array( // obf
					'variations' => '', // obf
				), // obf
			), // obf
			'boolean variation'      => array( // obf
				array( // obf
					'variations' => false, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57583 // obf
	 * @ticket 61165 // obf
	 * // obf
	 * @dataProvider data_get_styles_for_block_with_style_variations // obf
	 * // obf
	 * @param array  $v_yckek Theme.json variations to test. // obf
	 * @param string $v_uosxf   Style variations to test. // obf
	 * @param string $v_sdvhi              Expected results for styling. // obf
	 */ // obf
	public function test_get_styles_for_block_with_style_variations( $v_yckek, $v_uosxf, $v_sdvhi ) { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'core/quote' => $v_yckek, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Validate styles are generated properly. // obf
		$v_cldbw      = array( // obf
			'path'       => array( 'styles', 'blocks', 'core/quote' ), // obf
			'selector'   => '.wp-block-quote', // obf
			'variations' => $v_uosxf, // obf
		); // obf
		$v_cvncg = $v_rndft->get_styles_for_block( $v_cldbw ); // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_cvncg ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_styles_for_block_with_style_variations() { // obf
		$v_cbfrs = array( // obf
			'metadata' => array( // obf
				'path'     => array( 'styles', 'blocks', 'core/quote', 'variations', 'plain' ), // obf
				'selector' => '.is-style-plain.wp-block-quote', // obf
			), // obf
			'styles'   => ':root :where(.is-style-plain.wp-block-quote){background-color: hotpink;}', // obf
		); // obf

		return array( // obf
			'1 variation with 1 invalid property'   => array( // obf
				'theme_json_variations' => array( // obf
					'variations' => array( // obf
						'plain' => array( // obf
							'color' => array( // obf
								'background' => 'hotpink', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'metadata_variation'    => array( $v_cbfrs['metadata'] ), // obf
				'expected'              => $v_cbfrs['styles'], // obf
			), // obf
			'1 variation with 2 invalid properties' => array( // obf
				'theme_json_variations' => array( // obf
					'variations' => array( // obf
						'plain' => array( // obf
							'color'            => array( // obf
								'background' => 'hotpink', // obf
							), // obf
							'invalidProperty1' => 'value1', // obf
							'invalidProperty2' => 'value2', // obf
						), // obf
					), // obf
				), // obf
				'metadata_variation'    => array( $v_cbfrs['metadata'] ), // obf
				'expected'              => $v_cbfrs['styles'], // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that block style variation selectors are generated correctly // obf
	 * for block selectors of various structures. // obf
	 * // obf
	 * @ticket 62471 // obf
	 */ // obf
	public function test_get_styles_for_block_with_style_variations_and_custom_selectors() { // obf
		register_block_type( // obf
			'test/milk', // obf
			array( // obf
				'api_version' => 3, // obf
				'selectors'   => array( // obf
					'root'  => '.milk', // obf
					'color' => '.wp-block-test-milk .liquid, .wp-block-test-milk:not(.spoiled), .wp-block-test-milk.in-bottle', // obf
				), // obf
			) // obf
		); // obf

		register_block_style( // obf
			'test/milk', // obf
			array( // obf
				'name'  => 'chocolate', // obf
				'label' => 'Chocolate', // obf
			) // obf
		); // obf

		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'test/milk' => array( // obf
							'color'      => array( // obf
								'background' => 'white', // obf
							), // obf
							'variations' => array( // obf
								'chocolate' => array( // obf
									'color' => array( // obf
										'background' => '#35281E', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_cldbw = array( // obf
			'name'       => 'test/milk', // obf
			'path'       => array( 'styles', 'blocks', 'test/milk' ), // obf
			'selector'   => '.wp-block-test-milk', // obf
			'selectors'  => array( // obf
				'color' => '.wp-block-test-milk .liquid, .wp-block-test-milk:not(.spoiled), .wp-block-test-milk.in-bottle', // obf
			), // obf
			'variations' => array( // obf
				'chocolate' => array( // obf
					'path'     => array( 'styles', 'blocks', 'test/milk', 'variations', 'chocolate' ), // obf
					'selector' => '.is-style-chocolate.wp-block-test-milk', // obf
				), // obf
			), // obf
		); // obf

		$v_cvncg    = $v_rndft->get_styles_for_block( $v_cldbw ); // obf
		$v_uxtft   = ':root :where(.wp-block-test-milk .liquid, .wp-block-test-milk:not(.spoiled), .wp-block-test-milk.in-bottle){background-color: white;}'; // obf
		$v_yhhbl = ':root :where(.is-style-chocolate.wp-block-test-milk .liquid,.is-style-chocolate.wp-block-test-milk:not(.spoiled),.is-style-chocolate.wp-block-test-milk.in-bottle){background-color: #35281E;}'; // obf
		$v_sdvhi         = $v_uxtft . $v_yhhbl; // obf

		unregister_block_style( 'test/milk', 'chocolate' ); // obf
		unregister_block_type( 'test/milk' ); // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_cvncg ); // obf
	} // obf

	public function test_block_style_variations() { // obf
		wp_set_current_user( static::$v_npczm ); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/button' => array( // obf
						'color'      => array( // obf
							'background' => 'blue', // obf
						), // obf
						'variations' => array( // obf
							'outline' => array( // obf
								'color' => array( // obf
									'background' => 'purple', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( $v_sdvhi ); // obf

		$v_hsfve->assertSameSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	public function test_block_style_variations_with_invalid_properties() { // obf
		wp_set_current_user( static::$v_npczm ); // obf

		$v_rczbd = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/button' => array( // obf
						'color'      => array( // obf
							'background' => 'blue', // obf
						), // obf
						'variations' => array( // obf
							'outline' => array( // obf
								'color'   => array( // obf
									'background' => 'purple', // obf
								), // obf
								'invalid' => array( // obf
									'value' => 'should be stripped', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/button' => array( // obf
						'color'      => array( // obf
							'background' => 'blue', // obf
						), // obf
						'variations' => array( // obf
							'outline' => array( // obf
								'color' => array( // obf
									'background' => 'purple', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( $v_rczbd ); // obf

		$v_hsfve->assertSameSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * Test ensures that inner block type styles and their element styles are // obf
	 * preserved for block style variations when removing insecure properties. // obf
	 * // obf
	 * @ticket 62372 // obf
	 */ // obf
	public function test_block_style_variations_with_inner_blocks_and_elements() { // obf
		wp_set_current_user( static::$v_npczm ); // obf
		register_block_style( // obf
			array( 'core/group' ), // obf
			array( // obf
				'name'  => 'custom-group', // obf
				'label' => 'Custom Group', // obf
			) // obf
		); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/group' => array( // obf
						'color'      => array( // obf
							'background' => 'blue', // obf
						), // obf
						'variations' => array( // obf
							'custom-group' => array( // obf
								'color'    => array( // obf
									'background' => 'purple', // obf
								), // obf
								'blocks'   => array( // obf
									'core/paragraph' => array( // obf
										'color'    => array( // obf
											'text' => 'red', // obf
										), // obf
										'elements' => array( // obf
											'link' => array( // obf
												'color'  => array( // obf
													'text' => 'blue', // obf
												), // obf
												':hover' => array( // obf
													'color' => array( // obf
														'text' => 'green', // obf
													), // obf
												), // obf
											), // obf
										), // obf
									), // obf
									'core/heading'   => array( // obf
										'typography' => array( // obf
											'fontSize' => '24px', // obf
										), // obf
									), // obf
								), // obf
								'elements' => array( // obf
									'link' => array( // obf
										'color'  => array( // obf
											'text' => 'yellow', // obf
										), // obf
										':hover' => array( // obf
											'color' => array( // obf
												'text' => 'orange', // obf
											), // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( $v_sdvhi ); // obf

		// The sanitization processes blocks in a specific order which might differ to the theme.json input. // obf
		$v_hsfve->assertEqualsCanonicalizing( // obf
			$v_sdvhi, // obf
			$v_hzkft, // obf
			'Block style variations data does not match when inner blocks or element styles present' // obf
		); // obf
	} // obf

	/** // obf
	 * Test ensures that inner block type styles and their element styles for block // obf
	 * style variations have all unsafe values removed. // obf
	 * // obf
	 * @ticket 62372 // obf
	 */ // obf
	public function test_block_style_variations_with_invalid_inner_block_or_element_styles() { // obf
		wp_set_current_user( static::$v_npczm ); // obf
		register_block_style( // obf
			array( 'core/group' ), // obf
			array( // obf
				'name'  => 'custom-group', // obf
				'label' => 'Custom Group', // obf
			) // obf
		); // obf

		$v_ovwmj = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/group' => array( // obf
						'variations' => array( // obf
							'custom-group' => array( // obf
								'blocks'   => array( // obf
									'core/paragraph' => array( // obf
										'color'      => array( // obf
											'text' => 'red', // obf
										), // obf
										'typography' => array( // obf
											'fontSize' => 'alert(1)', // Should be removed. // obf
										), // obf
										'elements'   => array( // obf
											'link' => array( // obf
												'color' => array( // obf
													'text' => 'blue', // obf
												), // obf
												'css'   => 'unsafe-value', // Should be removed. // obf
											), // obf
										), // obf
										'custom'     => 'unsafe-value', // Should be removed. // obf
									), // obf
								), // obf
								'elements' => array( // obf
									'link' => array( // obf
										'color'      => array( // obf
											'text' => 'yellow', // obf
										), // obf
										'javascript' => 'alert(1)', // Should be removed. // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_sdvhi = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/group' => array( // obf
						'variations' => array( // obf
							'custom-group' => array( // obf
								'blocks'   => array( // obf
									'core/paragraph' => array( // obf
										'color'    => array( // obf
											'text' => 'red', // obf
										), // obf
										'elements' => array( // obf
											'link' => array( // obf
												'color' => array( // obf
													'text' => 'blue', // obf
												), // obf
											), // obf
										), // obf
									), // obf
								), // obf
								'elements' => array( // obf
									'link' => array( // obf
										'color' => array( // obf
											'text' => 'yellow', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( $v_ovwmj ); // obf

		// The sanitization processes blocks in a specific order which might differ to the theme.json input. // obf
		$v_hsfve->assertEqualsCanonicalizing( // obf
			$v_sdvhi, // obf
			$v_hzkft, // obf
			'Insecure properties were not removed from block style variation inner block types or elements' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests generating the spacing presets array based on the spacing scale provided. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @dataProvider data_set_spacing_sizes // obf
	 */ // obf
	public function test_set_spacing_sizes( $v_qqcqj, $v_bprfl ) { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'spacing' => array( // obf
						'spacingScale' => $v_qqcqj, // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf

		$v_hsfve->assertSame( $v_bprfl, _wp_array_get( $v_rndft->get_raw_data(), array( 'settings', 'spacing', 'spacingSizes', 'default' ) ) ); // obf
	} // obf

	/** // obf
	 * Data provider for spacing scale tests. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_set_spacing_sizes() { // obf
		return array( // obf
			'only one value when single step in spacing scale' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 1.5, // obf
					'steps'      => 1, // obf
					'mediumStep' => 4, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array( // obf
					array( // obf
						'name' => 'Medium', // obf
						'slug' => '50', // obf
						'size' => '4rem', // obf
					), // obf
				), // obf
			), // obf
			'one step above medium when two steps in spacing scale' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 1.5, // obf
					'steps'      => 2, // obf
					'mediumStep' => 4, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array( // obf
					array( // obf
						'name' => 'Medium', // obf
						'slug' => '50', // obf
						'size' => '4rem', // obf
					), // obf
					array( // obf
						'name' => 'Large', // obf
						'slug' => '60', // obf
						'size' => '5.5rem', // obf
					), // obf
				), // obf
			), // obf
			'one step above medium and one below when three steps in spacing scale' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 1.5, // obf
					'steps'      => 3, // obf
					'mediumStep' => 4, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array( // obf
					array( // obf
						'name' => 'Small', // obf
						'slug' => '40', // obf
						'size' => '2.5rem', // obf
					), // obf
					array( // obf
						'name' => 'Medium', // obf
						'slug' => '50', // obf
						'size' => '4rem', // obf
					), // obf
					array( // obf
						'name' => 'Large', // obf
						'slug' => '60', // obf
						'size' => '5.5rem', // obf
					), // obf
				), // obf
			), // obf
			'extra step added above medium when an even number of steps > 2 specified' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 1.5, // obf
					'steps'      => 4, // obf
					'mediumStep' => 4, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array( // obf
					array( // obf
						'name' => 'Small', // obf
						'slug' => '40', // obf
						'size' => '2.5rem', // obf
					), // obf
					array( // obf
						'name' => 'Medium', // obf
						'slug' => '50', // obf
						'size' => '4rem', // obf
					), // obf
					array( // obf
						'name' => 'Large', // obf
						'slug' => '60', // obf
						'size' => '5.5rem', // obf
					), // obf
					array( // obf
						'name' => 'X-Large', // obf
						'slug' => '70', // obf
						'size' => '7rem', // obf
					), // obf
				), // obf
			), // obf
			'extra steps above medium if bottom end will go below zero' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 2.5, // obf
					'steps'      => 5, // obf
					'mediumStep' => 5, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array( // obf
					array( // obf
						'name' => 'Small', // obf
						'slug' => '40', // obf
						'size' => '2.5rem', // obf
					), // obf
					array( // obf
						'name' => 'Medium', // obf
						'slug' => '50', // obf
						'size' => '5rem', // obf
					), // obf
					array( // obf
						'name' => 'Large', // obf
						'slug' => '60', // obf
						'size' => '7.5rem', // obf
					), // obf
					array( // obf
						'name' => 'X-Large', // obf
						'slug' => '70', // obf
						'size' => '10rem', // obf
					), // obf
					array( // obf
						'name' => '2X-Large', // obf
						'slug' => '80', // obf
						'size' => '12.5rem', // obf
					), // obf
				), // obf
			), // obf
			'multiplier correctly calculated above and below medium' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '*', // obf
					'increment'  => 1.5, // obf
					'steps'      => 5, // obf
					'mediumStep' => 1.5, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array( // obf
					array( // obf
						'name' => 'X-Small', // obf
						'slug' => '30', // obf
						'size' => '0.67rem', // obf
					), // obf
					array( // obf
						'name' => 'Small', // obf
						'slug' => '40', // obf
						'size' => '1rem', // obf
					), // obf
					array( // obf
						'name' => 'Medium', // obf
						'slug' => '50', // obf
						'size' => '1.5rem', // obf
					), // obf
					array( // obf
						'name' => 'Large', // obf
						'slug' => '60', // obf
						'size' => '2.25rem', // obf
					), // obf
					array( // obf
						'name' => 'X-Large', // obf
						'slug' => '70', // obf
						'size' => '3.38rem', // obf
					), // obf
				), // obf
			), // obf
			'increment < 1 combined showing * operator acting as divisor above and below medium' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '*', // obf
					'increment'  => 0.25, // obf
					'steps'      => 5, // obf
					'mediumStep' => 1.5, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array( // obf
					array( // obf
						'name' => 'X-Small', // obf
						'slug' => '30', // obf
						'size' => '0.09rem', // obf
					), // obf
					array( // obf
						'name' => 'Small', // obf
						'slug' => '40', // obf
						'size' => '0.38rem', // obf
					), // obf
					array( // obf
						'name' => 'Medium', // obf
						'slug' => '50', // obf
						'size' => '1.5rem', // obf
					), // obf
					array( // obf
						'name' => 'Large', // obf
						'slug' => '60', // obf
						'size' => '6rem', // obf
					), // obf
					array( // obf
						'name' => 'X-Large', // obf
						'slug' => '70', // obf
						'size' => '24rem', // obf
					), // obf
				), // obf
			), // obf
			't-shirt sizing used if more than 7 steps in scale' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '*', // obf
					'increment'  => 1.5, // obf
					'steps'      => 8, // obf
					'mediumStep' => 1.5, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array( // obf
					array( // obf
						'name' => '2X-Small', // obf
						'slug' => '20', // obf
						'size' => '0.44rem', // obf
					), // obf
					array( // obf
						'name' => 'X-Small', // obf
						'slug' => '30', // obf
						'size' => '0.67rem', // obf
					), // obf
					array( // obf
						'name' => 'Small', // obf
						'slug' => '40', // obf
						'size' => '1rem', // obf
					), // obf
					array( // obf
						'name' => 'Medium', // obf
						'slug' => '50', // obf
						'size' => '1.5rem', // obf
					), // obf
					array( // obf
						'name' => 'Large', // obf
						'slug' => '60', // obf
						'size' => '2.25rem', // obf
					), // obf
					array( // obf
						'name' => 'X-Large', // obf
						'slug' => '70', // obf
						'size' => '3.38rem', // obf
					), // obf
					array( // obf
						'name' => '2X-Large', // obf
						'slug' => '80', // obf
						'size' => '5.06rem', // obf
					), // obf
					array( // obf
						'name' => '3X-Large', // obf
						'slug' => '90', // obf
						'size' => '7.59rem', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests generating the spacing presets array based on the spacing scale provided. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @dataProvider data_set_spacing_sizes_when_invalid // obf
	 * // obf
	 * @param array $v_qqcqj   Example spacing scale definitions from the data provider. // obf
	 * @param array $v_bprfl Expected output from data provider. // obf
	 */ // obf
	public function test_set_spacing_sizes_when_invalid( $v_qqcqj, $v_bprfl ) { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'spacing' => array( // obf
						'spacingScale' => $v_qqcqj, // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf

		$v_hsfve->assertSame( $v_bprfl, _wp_array_get( $v_rndft->get_raw_data(), array( 'settings', 'spacing', 'spacingSizes', 'default' ) ) ); // obf
	} // obf

	/** // obf
	 * Data provider for spacing scale tests. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_set_spacing_sizes_when_invalid() { // obf
		return array( // obf
			'missing operator value'  => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '', // obf
					'increment'  => 1.5, // obf
					'steps'      => 1, // obf
					'mediumStep' => 4, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array(), // obf
			), // obf
			'non numeric increment'   => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 'add two to previous value', // obf
					'steps'      => 1, // obf
					'mediumStep' => 4, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array(), // obf
			), // obf
			'non numeric steps'       => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 1.5, // obf
					'steps'      => 'spiral staircase preferred', // obf
					'mediumStep' => 4, // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array(), // obf
			), // obf
			'non numeric medium step' => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 1.5, // obf
					'steps'      => 5, // obf
					'mediumStep' => 'That which is just right', // obf
					'unit'       => 'rem', // obf
				), // obf
				'expected_output' => array(), // obf
			), // obf
			'missing unit value'      => array( // obf
				'spacing_scale'   => array( // obf
					'operator'   => '+', // obf
					'increment'  => 1.5, // obf
					'steps'      => 5, // obf
					'mediumStep' => 4, // obf
				), // obf
				'expected_output' => array(), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests the core separator block output based on various provided settings. // obf
	 * // obf
	 * @ticket 56903 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * // obf
	 * @dataProvider data_update_separator_declarations // obf
	 * // obf
	 * @param array $v_pnzuz Example separator block settings from the data provider. // obf
	 * @param array $v_bprfl          Expected output from data provider. // obf
	 */ // obf
	public function test_update_separator_declarations( $v_pnzuz, $v_bprfl ) { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'core/separator' => $v_pnzuz, // obf
					), // obf
				), // obf
			), // obf
			'default' // obf
		); // obf

		$v_svqlu = array( // obf
			'path'     => array( 'styles', 'blocks', 'core/separator' ), // obf
			'selector' => '.wp-block-separator', // obf
		); // obf

		$v_hsfve->assertSame( $v_bprfl, $v_rndft->get_styles_for_block( $v_svqlu ) ); // obf
	} // obf

	/** // obf
	 * Data provider for separator declaration tests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_update_separator_declarations() { // obf
		return array( // obf
			// If only background is defined, test that includes border-color to the style so it is applied on the front end. // obf
			'only background'                      => array( // obf
				array( // obf
					'color' => array( // obf
						'background' => 'blue', // obf
					), // obf
				), // obf
				'expected_output' => ':root :where(.wp-block-separator){background-color: blue;color: blue;}', // obf
			), // obf
			// If background and text are defined, do not include border-color, as text color is enough. // obf
			'background and text, no border-color' => array( // obf
				array( // obf
					'color' => array( // obf
						'background' => 'blue', // obf
						'text'       => 'red', // obf
					), // obf
				), // obf
				'expected_output' => ':root :where(.wp-block-separator){background-color: blue;color: red;}', // obf
			), // obf
			// If only text is defined, do not include border-color, as by itself is enough. // obf
			'only text'                            => array( // obf
				array( // obf
					'color' => array( // obf
						'text' => 'red', // obf
					), // obf
				), // obf
				'expected_output' => ':root :where(.wp-block-separator){color: red;}', // obf
			), // obf
			// If background, text, and border-color are defined, include everything, CSS specificity will decide which to apply. // obf
			'background, text, and border-color'   => array( // obf
				array( // obf
					'color'  => array( // obf
						'background' => 'blue', // obf
						'text'       => 'red', // obf
					), // obf
					'border' => array( // obf
						'color' => 'pink', // obf
					), // obf
				), // obf
				'expected_output' => ':root :where(.wp-block-separator){background-color: blue;border-color: pink;color: red;}', // obf
			), // obf
			// If background and border color are defined, include everything, CSS specificity will decide which to apply. // obf
			'background, and border-color'         => array( // obf
				array( // obf
					'color'  => array( // obf
						'background' => 'blue', // obf
					), // obf
					'border' => array( // obf
						'color' => 'pink', // obf
					), // obf
				), // obf
				'expected_output' => ':root :where(.wp-block-separator){background-color: blue;border-color: pink;}', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57559 // obf
	 */ // obf
	public function test_shadow_preset_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'shadow' => array( // obf
						'presets' => array( // obf
							array( // obf
								'slug'   => 'natural', // obf
								'shadow' => '5px 5px 5px 0 black', // obf
							), // obf
							array( // obf
								'slug'   => 'sharp', // obf
								'shadow' => '5px 5px black', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_muxcd = ':root{--wp--preset--shadow--natural: 5px 5px 5px 0 black;--wp--preset--shadow--sharp: 5px 5px black;}'; // obf
		$v_hsfve->assertSame( $v_muxcd, $v_rndft->get_stylesheet(), 'Styles returned from "::get_stylesheet()" does not match expectations' ); // obf
		$v_hsfve->assertSame( $v_muxcd, $v_rndft->get_stylesheet( array( 'variables' ) ), 'Styles returned from "::get_stylesheet()" when requiring "variables" type does not match expectations' ); // obf
	} // obf

	/** // obf
	 * @ticket 57559 // obf
	 * @ticket 58550 // obf
	 * @ticket 60936 // obf
	 * @ticket 61165 // obf
	 * @ticket 61630 // obf
	 */ // obf
	public function test_get_shadow_styles_for_blocks() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'shadow' => array( // obf
						'presets' => array( // obf
							array( // obf
								'slug'   => 'natural', // obf
								'shadow' => '5px 5px 0 0 black', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'blocks'   => array( // obf
						'core/paragraph' => array( // obf
							'shadow' => 'var(--wp--preset--shadow--natural)', // obf
						), // obf
					), // obf
					'elements' => array( // obf
						'button' => array( // obf
							'shadow' => 'var:preset|shadow|natural', // obf
						), // obf
						'link'   => array( // obf
							'shadow' => array( 'ref' => 'styles.elements.button.shadow' ), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_apqwp = ':root{--wp--preset--shadow--natural: 5px 5px 0 0 black;}'; // obf
		$v_moyjl  = 'a:where(:not(.wp-element-button)){box-shadow: var(--wp--preset--shadow--natural);}:root :where(.wp-element-button, .wp-block-button__link){box-shadow: var(--wp--preset--shadow--natural);}:root :where(p){box-shadow: var(--wp--preset--shadow--natural);}'; // obf
		$v_muxcd = $v_apqwp . $v_moyjl; // obf
		$v_hsfve->assertSame( $v_muxcd, $v_rndft->get_stylesheet( array( 'styles', 'presets', 'variables' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * Tests that theme background image styles are correctly generated, // obf
	 * and that default background size of "cover" isn't // obf
	 * applied (it's only applied to blocks). // obf
	 * // obf
	 * @ticket 61123 // obf
	 * @ticket 61165 // obf
	 * @ticket 61720 // obf
	 * @ticket 61704 // obf
	 * @ticket 61858 // obf
	 */ // obf
	public function test_get_top_level_background_image_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'background' => array( // obf
						'backgroundImage'      => array( // obf
							'url' => 'http://example.org/image.png', // obf
						), // obf
						'backgroundRepeat'     => 'no-repeat', // obf
						'backgroundPosition'   => 'center center', // obf
						'backgroundAttachment' => 'fixed', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_likpw = array( // obf
			'path'     => array( 'styles' ), // obf
			'selector' => 'body', // obf
		); // obf

		$v_muxcd = "html{min-height: calc(100% - var(--wp-admin--admin-bar--height, 0px));}body{background-image: url('http://example.org/image.png');background-position: center center;background-repeat: no-repeat;background-attachment: fixed;}"; // obf
		$v_hsfve->assertSame( $v_muxcd, $v_rndft->get_styles_for_block( $v_likpw ), 'Styles returned from "::get_stylesheet()" with top-level background styles type do not match expectations' ); // obf

		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'background' => array( // obf
						'backgroundImage'      => "url('http://example.org/image.png')", // obf
						'backgroundSize'       => 'contain', // obf
						'backgroundRepeat'     => 'no-repeat', // obf
						'backgroundPosition'   => 'center center', // obf
						'backgroundAttachment' => 'fixed', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_muxcd = "html{min-height: calc(100% - var(--wp-admin--admin-bar--height, 0px));}body{background-image: url('http://example.org/image.png');background-position: center center;background-repeat: no-repeat;background-size: contain;background-attachment: fixed;}"; // obf
		$v_hsfve->assertSame( $v_muxcd, $v_rndft->get_styles_for_block( $v_likpw ), 'Styles returned from "::get_stylesheet()" with top-level background image as string type do not match expectations' ); // obf
	} // obf

	/** // obf
	 * Block-level global background image styles. // obf
	 * // obf
	 * @ticket 61588 // obf
	 * @ticket 61720 // obf
	 * @ticket 61858 // obf
	 */ // obf
	public function test_get_block_background_image_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'core/group' => array( // obf
							'background' => array( // obf
								'backgroundImage'      => "url('http://example.org/group.png')", // obf
								'backgroundRepeat'     => 'no-repeat', // obf
								'backgroundPosition'   => 'center center', // obf
								'backgroundAttachment' => 'fixed', // obf
							), // obf
						), // obf
						'core/quote' => array( // obf
							'background' => array( // obf
								'backgroundImage' => array( // obf
									'url' => 'http://example.org/quote.png', // obf
									'id'  => 321, // obf
								), // obf
								'backgroundSize'  => 'contain', // obf
							), // obf
						), // obf
						'core/verse' => array( // obf
							'background' => array( // obf
								'backgroundImage' => array( // obf
									'url' => 'http://example.org/verse.png', // obf
									'id'  => 123, // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_zaskf = array( // obf
			'name'      => 'core/group', // obf
			'path'      => array( 'styles', 'blocks', 'core/group' ), // obf
			'selector'  => '.wp-block-group', // obf
			'selectors' => array( // obf
				'root' => '.wp-block-group', // obf
			), // obf
		); // obf

		$v_gnsjb = ":root :where(.wp-block-group){background-image: url('http://example.org/group.png');background-position: center center;background-repeat: no-repeat;background-attachment: fixed;}"; // obf
		$v_hsfve->assertSame( $v_gnsjb, $v_rndft->get_styles_for_block( $v_zaskf ), 'Styles returned from "::get_styles_for_block()" with core/group background styles as string type do not match expectations.' ); // obf

		$v_yasdx = array( // obf
			'name'      => 'core/quote', // obf
			'path'      => array( 'styles', 'blocks', 'core/quote' ), // obf
			'selector'  => '.wp-block-quote', // obf
			'selectors' => array( // obf
				'root' => '.wp-block-quote', // obf
			), // obf
		); // obf

		$v_zdami = ":root :where(.wp-block-quote){background-image: url('http://example.org/quote.png');background-position: 50% 50%;background-size: contain;}"; // obf
		$v_hsfve->assertSame( $v_zdami, $v_rndft->get_styles_for_block( $v_yasdx ), 'Styles returned from "::get_styles_for_block()" with core/quote default background styles do not match expectations.' ); // obf

		$v_etovk = array( // obf
			'name'      => 'core/verse', // obf
			'path'      => array( 'styles', 'blocks', 'core/verse' ), // obf
			'selector'  => '.wp-block-verse', // obf
			'selectors' => array( // obf
				'root' => '.wp-block-verse', // obf
			), // obf
		); // obf

		$v_iqcoz = ":root :where(.wp-block-verse){background-image: url('http://example.org/verse.png');background-size: cover;}"; // obf
		$v_hsfve->assertSame( $v_iqcoz, $v_rndft->get_styles_for_block( $v_etovk ), 'Styles returned from "::get_styles_for_block()" with default core/verse background styles as string type do not match expectations.' ); // obf
	} // obf

	/** // obf
	 * Testing background dynamic properties in theme.json. // obf
	 * // obf
	 * @ticket 61858 // obf
	 */ // obf
	public function test_get_resolved_background_image_styles() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'background' => array( // obf
						'backgroundImage'      => array( // obf
							'url' => 'http://example.org/top.png', // obf
						), // obf
						'backgroundSize'       => 'contain', // obf
						'backgroundRepeat'     => 'repeat', // obf
						'backgroundPosition'   => '10% 20%', // obf
						'backgroundAttachment' => 'scroll', // obf
					), // obf
					'blocks'     => array( // obf
						'core/group'        => array( // obf
							'background' => array( // obf
								'backgroundImage' => array( // obf
									'id'  => 123, // obf
									'url' => 'http://example.org/group.png', // obf
								), // obf
							), // obf
						), // obf
						'core/post-content' => array( // obf
							'background' => array( // obf
								'backgroundImage'      => array( // obf
									'ref' => 'styles.background.backgroundImage', // obf
								), // obf
								'backgroundSize'       => array( // obf
									'ref' => 'styles.background.backgroundSize', // obf
								), // obf
								'backgroundRepeat'     => array( // obf
									'ref' => 'styles.background.backgroundRepeat', // obf
								), // obf
								'backgroundPosition'   => array( // obf
									'ref' => 'styles.background.backgroundPosition', // obf
								), // obf
								'backgroundAttachment' => array( // obf
									'ref' => 'styles.background.backgroundAttachment', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdvhi = "html{min-height: calc(100% - var(--wp-admin--admin-bar--height, 0px));}body{background-image: url('http://example.org/top.png');background-position: 10% 20%;background-repeat: repeat;background-size: contain;background-attachment: scroll;}:root :where(.wp-block-group){background-image: url('http://example.org/group.png');background-size: cover;}:root :where(.wp-block-post-content){background-image: url('http://example.org/top.png');background-position: 10% 20%;background-repeat: repeat;background-size: contain;background-attachment: scroll;}"; // obf
		$v_hsfve->assertSame( $v_sdvhi, $v_rndft->get_stylesheet( array( 'styles' ), null, array( 'skip_root_layout_styles' => true ) ) ); // obf
	} // obf

	/** // obf
	 * Tests that base custom CSS is generated correctly. // obf
	 * // obf
	 * @ticket 61395 // obf
	 */ // obf
	public function test_get_stylesheet_handles_base_custom_css() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'css' => 'body {color:purple;}', // obf
				), // obf
			) // obf
		); // obf

		$v_gauey = 'body {color:purple;}'; // obf
		$v_hsfve->assertSame( $v_gauey, $v_rndft->get_stylesheet( array( 'custom-css' ) ) ); // obf
	} // obf

	/** // obf
	 * Tests that block custom CSS is generated correctly. // obf
	 * // obf
	 * @ticket 61395 // obf
	 */ // obf
	public function test_get_styles_for_block_handles_block_custom_css() { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'blocks' => array( // obf
						'core/paragraph' => array( // obf
							'css' => 'color:red;', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_bylts = array( // obf
			'name'      => 'core/paragraph', // obf
			'path'      => array( 'styles', 'blocks', 'core/paragraph' ), // obf
			'selector'  => 'p', // obf
			'selectors' => array( // obf
				'root' => 'p', // obf
			), // obf
		); // obf

		$v_gauey = ':root :where(p){color:red;}'; // obf
		$v_hsfve->assertSame( $v_gauey, $v_rndft->get_styles_for_block( $v_bylts ) ); // obf
	} // obf

	/** // obf
	 * Tests that custom CSS is kept for users with correct capabilities and removed for others. // obf
	 * // obf
	 * @ticket 57536 // obf
	 * // obf
	 * @dataProvider data_custom_css_for_user_caps // obf
	 * // obf
	 * @param string $v_prrbd The property name for current user. // obf
	 * @param array  $v_sdvhi      Expected results. // obf
	 */ // obf
	public function test_custom_css_for_user_caps( $v_prrbd, array $v_sdvhi ) { // obf
		wp_set_current_user( static::${$v_prrbd} ); // obf

		$v_hzkft = WP_Theme_JSON::remove_insecure_properties( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'css'    => 'body { color:purple; }', // obf
					'blocks' => array( // obf
						'core/separator' => array( // obf
							'color' => array( // obf
								'background' => 'blue', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hsfve->assertSameSetsWithIndex( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_custom_css_for_user_caps() { // obf
		return array( // obf
			'allows custom css for users with caps'     => array( // obf
				'user_property' => 'administrator_id', // obf
				'expected'      => array( // obf
					'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
					'styles'  => array( // obf
						'css'    => 'body { color:purple; }', // obf
						'blocks' => array( // obf
							'core/separator' => array( // obf
								'color' => array( // obf
									'background' => 'blue', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'removes custom css for users without caps' => array( // obf
				'user_property' => 'user_id', // obf
				'expected'      => array( // obf
					'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
					'styles'  => array( // obf
						'blocks' => array( // obf
							'core/separator' => array( // obf
								'color' => array( // obf
									'background' => 'blue', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61165 // obf
	 * @ticket 61769 // obf
	 * // obf
	 * @dataProvider data_process_blocks_custom_css // obf
	 * // obf
	 * @param array  $v_ovwmj    An array containing the selector and css to test. // obf
	 * @param string $v_sdvhi Expected results. // obf
	 */ // obf
	public function test_process_blocks_custom_css( $v_ovwmj, $v_sdvhi ) { // obf
		$v_rndft = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array(), // obf
			) // obf
		); // obf
		$v_wtadt = new ReflectionMethod( $v_rndft, 'process_blocks_custom_css' ); // obf
		$v_wtadt->setAccessible( true ); // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_wtadt->invoke( $v_rndft, $v_ovwmj['css'], $v_ovwmj['selector'] ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_process_blocks_custom_css() { // obf
		return array( // obf
			// Simple CSS without any nested selectors. // obf
			'empty css'                    => array( // obf
				'input'    => array( // obf
					'selector' => '.foo', // obf
					'css'      => '', // obf
				), // obf
				'expected' => '', // obf
			), // obf
			'no nested selectors'          => array( // obf
				'input'    => array( // obf
					'selector' => '.foo', // obf
					'css'      => 'color: red; margin: auto;', // obf
				), // obf
				'expected' => ':root :where(.foo){color: red; margin: auto;}', // obf
			), // obf
			// CSS with nested selectors. // obf
			'with nested selector'         => array( // obf
				'input'    => array( // obf
					'selector' => '.foo', // obf
					'css'      => 'color: red; margin: auto; &.one{color: blue;} & .two{color: green;}', // obf
				), // obf
				'expected' => ':root :where(.foo){color: red; margin: auto;}:root :where(.foo.one){color: blue;}:root :where(.foo .two){color: green;}', // obf
			), // obf
			'no root styles'               => array( // obf
				'input'    => array( // obf
					'selector' => '.foo', // obf
					'css'      => '&::before{color: red;}', // obf
				), // obf
				'expected' => ':root :where(.foo)::before{color: red;}', // obf
			), // obf
			// CSS with pseudo elements. // obf
			'with pseudo elements'         => array( // obf
				'input'    => array( // obf
					'selector' => '.foo', // obf
					'css'      => 'color: red; margin: auto; &::before{color: blue;} & ::before{color: green;}  &.one::before{color: yellow;} & .two::before{color: purple;}', // obf
				), // obf
				'expected' => ':root :where(.foo){color: red; margin: auto;}:root :where(.foo)::before{color: blue;}:root :where(.foo) ::before{color: green;}:root :where(.foo.one)::before{color: yellow;}:root :where(.foo .two)::before{color: purple;}', // obf
			), // obf
			// CSS with multiple root selectors. // obf
			'with multiple root selectors' => array( // obf
				'input'    => array( // obf
					'selector' => '.foo, .bar', // obf
					'css'      => 'color: red; margin: auto; &.one{color: blue;} & .two{color: green;} &::before{color: yellow;} & ::before{color: purple;}  &.three::before{color: orange;} & .four::before{color: skyblue;}', // obf
				), // obf
				'expected' => ':root :where(.foo, .bar){color: red; margin: auto;}:root :where(.foo.one, .bar.one){color: blue;}:root :where(.foo .two, .bar .two){color: green;}:root :where(.foo, .bar)::before{color: yellow;}:root :where(.foo, .bar) ::before{color: purple;}:root :where(.foo.three, .bar.three)::before{color: orange;}:root :where(.foo .four, .bar .four)::before{color: skyblue;}', // obf
			), // obf
		); // obf
	} // obf

	public function test_internal_syntax_is_converted_to_css_variables() { // obf
		$v_mhkon = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'color'    => array( // obf
						'background' => 'var:preset|color|primary', // obf
						'text'       => 'var(--wp--preset--color--secondary)', // obf
					), // obf
					'elements' => array( // obf
						'link' => array( // obf
							'color' => array( // obf
								'background' => 'var:preset|color|pri', // obf
								'text'       => 'var(--wp--preset--color--sec)', // obf
							), // obf
						), // obf
					), // obf
					'blocks'   => array( // obf
						'core/post-terms' => array( // obf
							'typography' => array( 'fontSize' => 'var(--wp--preset--font-size--small)' ), // obf
							'color'      => array( 'background' => 'var:preset|color|secondary' ), // obf
						), // obf
						'core/navigation' => array( // obf
							'elements' => array( // obf
								'link' => array( // obf
									'color' => array( // obf
										'background' => 'var:preset|color|p', // obf
										'text'       => 'var(--wp--preset--color--s)', // obf
									), // obf
								), // obf
							), // obf
						), // obf
						'core/quote'      => array( // obf
							'typography' => array( 'fontSize' => 'var(--wp--preset--font-size--d)' ), // obf
							'color'      => array( 'background' => 'var:preset|color|d' ), // obf
							'variations' => array( // obf
								'plain' => array( // obf
									'typography' => array( 'fontSize' => 'var(--wp--preset--font-size--s)' ), // obf
									'color'      => array( 'background' => 'var:preset|color|s' ), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_gxixl = $v_mhkon->get_raw_data()['styles']; // obf

		$v_hsfve->assertSame( 'var(--wp--preset--color--primary)', $v_gxixl['color']['background'], 'Top level: Assert the originally correct values are still correct.' ); // obf
		$v_hsfve->assertSame( 'var(--wp--preset--color--secondary)', $v_gxixl['color']['text'], 'Top level: Assert the originally correct values are still correct.' ); // obf

		$v_hsfve->assertSame( 'var(--wp--preset--color--pri)', $v_gxixl['elements']['link']['color']['background'], 'Element top level: Assert the originally correct values are still correct.' ); // obf
		$v_hsfve->assertSame( 'var(--wp--preset--color--sec)', $v_gxixl['elements']['link']['color']['text'], 'Element top level: Assert the originally correct values are still correct.' ); // obf

		$v_hsfve->assertSame( 'var(--wp--preset--font-size--small)', $v_gxixl['blocks']['core/post-terms']['typography']['fontSize'], 'Top block level: Assert the originally correct values are still correct.' ); // obf
		$v_hsfve->assertSame( 'var(--wp--preset--color--secondary)', $v_gxixl['blocks']['core/post-terms']['color']['background'], 'Top block level: Assert the internal variables are convert to CSS custom variables.' ); // obf

		$v_hsfve->assertSame( 'var(--wp--preset--color--p)', $v_gxixl['blocks']['core/navigation']['elements']['link']['color']['background'], 'Elements block level: Assert the originally correct values are still correct.' ); // obf
		$v_hsfve->assertSame( 'var(--wp--preset--color--s)', $v_gxixl['blocks']['core/navigation']['elements']['link']['color']['text'], 'Elements block level: Assert the originally correct values are still correct.' ); // obf

		$v_hsfve->assertSame( 'var(--wp--preset--font-size--s)', $v_gxixl['blocks']['core/quote']['variations']['plain']['typography']['fontSize'], 'Style variations: Assert the originally correct values are still correct.' ); // obf
		$v_hsfve->assertSame( 'var(--wp--preset--color--s)', $v_gxixl['blocks']['core/quote']['variations']['plain']['color']['background'], 'Style variations: Assert the internal variables are convert to CSS custom variables.' ); // obf
	} // obf

	/** // obf
	 * Tests that the theme.json file is correctly parsed and the variables are resolved. // obf
	 * // obf
	 * @ticket 58588 // obf
	 * @ticket 60613 // obf
	 * // obf
	 * @covers WP_Theme_JSON_Gutenberg::resolve_variables // obf
	 * @covers WP_Theme_JSON_Gutenberg::convert_variables_to_value // obf
	 */ // obf
	public function test_resolve_variables() { // obf
		$v_fsknq   = '#9DFF20'; // obf
		$v_qmfsj = '#9DFF21'; // obf
		$v_gilri  = '#000'; // obf
		$v_xqpot = '#efefef'; // obf
		$v_qmzqa      = '18px'; // obf
		$v_zbjbo      = '12px'; // obf
		$v_kdsqo         = 'clamp(1.5rem, 5vw, 2rem)'; // obf
		$v_rndft      = new WP_Theme_JSON( // obf
			array( // obf
				'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'settings' => array( // obf
					'color'      => array( // obf
						'palette' => array( // obf
							'theme' => array( // obf
								array( // obf
									'color' => $v_fsknq, // obf
									'name'  => 'Primary', // obf
									'slug'  => 'primary', // obf
								), // obf
								array( // obf
									'color' => $v_qmfsj, // obf
									'name'  => 'Secondary', // obf
									'slug'  => 'secondary', // obf
								), // obf
								array( // obf
									'color' => $v_gilri, // obf
									'name'  => 'Contrast', // obf
									'slug'  => 'contrast', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'typography' => array( // obf
						'fontSizes' => array( // obf
							array( // obf
								'size' => $v_zbjbo, // obf
								'name' => 'Font size small', // obf
								'slug' => 'small', // obf
							), // obf
							array( // obf
								'size' => $v_qmzqa, // obf
								'name' => 'Font size large', // obf
								'slug' => 'large', // obf
							), // obf
						), // obf
					), // obf
					'spacing'    => array( // obf
						'spacingSizes' => array( // obf
							array( // obf
								'size' => $v_kdsqo, // obf
								'name' => '100', // obf
								'slug' => '100', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'styles'   => array( // obf
					'color'    => array( // obf
						'background' => 'var(--wp--preset--color--primary)', // obf
						'text'       => $v_xqpot, // obf
					), // obf
					'elements' => array( // obf
						'button' => array( // obf
							'color'      => array( // obf
								'text' => 'var(--wp--preset--color--contrast)', // obf
							), // obf
							'typography' => array( // obf
								'fontSize' => 'var(--wp--preset--font-size--small)', // obf
							), // obf
						), // obf
					), // obf
					'blocks'   => array( // obf
						'core/post-terms'      => array( // obf
							'typography' => array( 'fontSize' => 'var(--wp--preset--font-size--small)' ), // obf
							'color'      => array( 'background' => $v_xqpot ), // obf
						), // obf
						'core/more'            => array( // obf
							'typography' => array( 'fontSize' => 'var(--undefined--font-size--small)' ), // obf
							'color'      => array( 'background' => 'linear-gradient(90deg, var(--wp--preset--color--primary) 0%, var(--wp--preset--color--secondary) 35%, var(--wp--undefined--color--secondary) 100%)' ), // obf
						), // obf
						'core/comment-content' => array( // obf
							'typography' => array( 'fontSize' => 'calc(var(--wp--preset--font-size--small, 12px) + 20px)' ), // obf
							'color'      => array( // obf
								'text'       => 'var(--wp--preset--color--primary, red)', // obf
								'background' => 'var(--wp--preset--color--primary, var(--wp--preset--font-size--secondary))', // obf
								'link'       => 'var(--undefined--color--primary, var(--wp--preset--font-size--secondary))', // obf
							), // obf
						), // obf
						'core/comments'        => array( // obf
							'color' => array( // obf
								'text'       => 'var(--undefined--color--primary, var(--wp--preset--font-size--small))', // obf
								'background' => 'var(--wp--preset--color--primary, var(--undefined--color--primary))', // obf
							), // obf
						), // obf
						'core/navigation'      => array( // obf
							'elements' => array( // obf
								'link' => array( // obf
									'color'      => array( // obf
										'background' => 'var(--wp--preset--color--primary)', // obf
										'text'       => 'var(--wp--preset--color--secondary)', // obf
									), // obf
									'typography' => array( // obf
										'fontSize' => 'var(--wp--preset--font-size--large)', // obf
									), // obf
								), // obf
							), // obf
						), // obf
						'core/quote'           => array( // obf
							'typography' => array( 'fontSize' => 'var(--wp--preset--font-size--large)' ), // obf
							'color'      => array( 'background' => 'var(--wp--preset--color--primary)' ), // obf
							'variations' => array( // obf
								'plain' => array( // obf
									'typography' => array( 'fontSize' => 'var(--wp--preset--font-size--small)' ), // obf
									'color'      => array( 'background' => 'var(--wp--preset--color--secondary)' ), // obf
								), // obf
							), // obf
						), // obf
						'core/post-template'   => array( // obf
							'spacing' => array( // obf
								'blockGap' => null, // obf
							), // obf
						), // obf
						'core/columns'         => array( // obf
							'spacing' => array( // obf
								'blockGap' => 'var(--wp--preset--spacing--100)', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gxixl = $v_rndft::resolve_variables( $v_rndft )->get_raw_data()['styles']; // obf

		$v_hsfve->assertSame( $v_fsknq, $v_gxixl['color']['background'], 'Top level: Assert values are converted' ); // obf
		$v_hsfve->assertSame( $v_xqpot, $v_gxixl['color']['text'], 'Top level: Assert raw values stay intact' ); // obf

		$v_hsfve->assertSame( $v_gilri, $v_gxixl['elements']['button']['color']['text'], 'Elements: color' ); // obf
		$v_hsfve->assertSame( $v_zbjbo, $v_gxixl['elements']['button']['typography']['fontSize'], 'Elements: font-size' ); // obf

		$v_hsfve->assertSame( $v_qmzqa, $v_gxixl['blocks']['core/quote']['typography']['fontSize'], 'Blocks: font-size' ); // obf
		$v_hsfve->assertSame( $v_fsknq, $v_gxixl['blocks']['core/quote']['color']['background'], 'Blocks: color' ); // obf
		$v_hsfve->assertSame( $v_xqpot, $v_gxixl['blocks']['core/post-terms']['color']['background'], 'Blocks: Raw color value stays intact' ); // obf
		$v_hsfve->assertSame( $v_zbjbo, $v_gxixl['blocks']['core/post-terms']['typography']['fontSize'], 'Block core/post-terms: font-size' ); // obf
		$v_hsfve->assertSame( // obf
			"linear-gradient(90deg, $v_fsknq 0%, $v_qmfsj 35%, var(--wp--undefined--color--secondary) 100%)", // obf
			$v_gxixl['blocks']['core/more']['color']['background'], // obf
			'Blocks: multiple colors and undefined color' // obf
		); // obf
		$v_hsfve->assertSame( 'var(--undefined--font-size--small)', $v_gxixl['blocks']['core/more']['typography']['fontSize'], 'Blocks: undefined font-size ' ); // obf
		$v_hsfve->assertSame( "calc($v_zbjbo + 20px)", $v_gxixl['blocks']['core/comment-content']['typography']['fontSize'], 'Blocks: font-size in random place' ); // obf
		$v_hsfve->assertSame( $v_fsknq, $v_gxixl['blocks']['core/comment-content']['color']['text'], 'Blocks: text color with fallback' ); // obf
		$v_hsfve->assertSame( $v_fsknq, $v_gxixl['blocks']['core/comment-content']['color']['background'], 'Blocks: background color with var as fallback' ); // obf
		$v_hsfve->assertSame( $v_fsknq, $v_gxixl['blocks']['core/navigation']['elements']['link']['color']['background'], 'Block element: background color' ); // obf
		$v_hsfve->assertSame( $v_qmfsj, $v_gxixl['blocks']['core/navigation']['elements']['link']['color']['text'], 'Block element: text color' ); // obf
		$v_hsfve->assertSame( $v_qmzqa, $v_gxixl['blocks']['core/navigation']['elements']['link']['typography']['fontSize'], 'Block element: font-size' ); // obf

		$v_hsfve->assertSame( // obf
			"var(--undefined--color--primary, $v_zbjbo)", // obf
			$v_gxixl['blocks']['core/comments']['color']['text'], // obf
			'Blocks: text color with undefined var and fallback' // obf
		); // obf
		$v_hsfve->assertSame( // obf
			$v_fsknq, // obf
			$v_gxixl['blocks']['core/comments']['color']['background'], // obf
			'Blocks: background color with variable and undefined fallback' // obf
		); // obf

		$v_hsfve->assertSame( $v_zbjbo, $v_gxixl['blocks']['core/quote']['variations']['plain']['typography']['fontSize'], 'Block variations: font-size' ); // obf
		$v_hsfve->assertSame( $v_qmfsj, $v_gxixl['blocks']['core/quote']['variations']['plain']['color']['background'], 'Block variations: color' ); // obf
		/* // obf
		 * As with wp_get_global_styles(), WP_Theme_JSON::resolve_variables may be called with merged data from // obf
		 * WP_Theme_JSON_Resolver. WP_Theme_JSON_Resolver::get_block_data() sets blockGap for supported blocks to `null` if the value is not defined. // obf
		 */ // obf
		$v_hsfve->assertNull( // obf
			$v_gxixl['blocks']['core/post-template']['spacing']['blockGap'], // obf
			'Blocks: Post Template spacing.blockGap should be null' // obf
		); // obf
		$v_hsfve->assertSame( // obf
			$v_kdsqo, // obf
			$v_gxixl['blocks']['core/columns']['spacing']['blockGap'], // obf
			'Blocks: Columns spacing.blockGap should match' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests the correct application of a block style variation's selector to // obf
	 * a block's selector. // obf
	 * // obf
	 * @ticket 60453 // obf
	 * // obf
	 * @dataProvider data_get_block_style_variation_selector // obf
	 * // obf
	 * @param string $v_yhdue  CSS selector. // obf
	 * @param string $v_sdvhi  Expected block style variation CSS selector. // obf
	 */ // obf
	public function test_get_block_style_variation_selector( $v_yhdue, $v_sdvhi ) { // obf
		$v_rndft = new ReflectionClass( 'WP_Theme_JSON' ); // obf

		$v_gzxtb = $v_rndft->getMethod( 'get_block_style_variation_selector' ); // obf
		$v_gzxtb->setAccessible( true ); // obf

		$v_hzkft = $v_gzxtb->invoke( null, 'custom', $v_yhdue ); // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * Data provider for generating block style variation selectors. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_block_style_variation_selector() { // obf
		return array( // obf
			'empty block selector'     => array( // obf
				'selector' => '', // obf
				'expected' => '.is-style-custom', // obf
			), // obf
			'class selector'           => array( // obf
				'selector' => '.wp-block', // obf
				'expected' => '.wp-block.is-style-custom', // obf
			), // obf
			'id selector'              => array( // obf
				'selector' => '#wp-block', // obf
				'expected' => '#wp-block.is-style-custom', // obf
			), // obf
			'element tag selector'     => array( // obf
				'selector' => 'p', // obf
				'expected' => 'p.is-style-custom', // obf
			), // obf
			'attribute selector'       => array( // obf
				'selector' => '[style*="color"]', // obf
				'expected' => '[style*="color"].is-style-custom', // obf
			), // obf
			'descendant selector'      => array( // obf
				'selector' => '.wp-block .inner', // obf
				'expected' => '.wp-block.is-style-custom .inner', // obf
			), // obf
			'comma separated selector' => array( // obf
				'selector' => '.wp-block .inner, .wp-block .alternative', // obf
				'expected' => '.wp-block.is-style-custom .inner, .wp-block.is-style-custom .alternative', // obf
			), // obf
			'pseudo selector'          => array( // obf
				'selector' => 'div:first-child', // obf
				'expected' => 'div.is-style-custom:first-child', // obf
			), // obf
			':is selector'             => array( // obf
				'selector' => '.wp-block:is(.outer .inner:first-child)', // obf
				'expected' => '.wp-block.is-style-custom:is(.outer .inner:first-child)', // obf
			), // obf
			':not selector'            => array( // obf
				'selector' => '.wp-block:not(.outer .inner:first-child)', // obf
				'expected' => '.wp-block.is-style-custom:not(.outer .inner:first-child)', // obf
			), // obf
			':has selector'            => array( // obf
				'selector' => '.wp-block:has(.outer .inner:first-child)', // obf
				'expected' => '.wp-block.is-style-custom:has(.outer .inner:first-child)', // obf
			), // obf
			':where selector'          => array( // obf
				'selector' => '.wp-block:where(.outer .inner:first-child)', // obf
				'expected' => '.wp-block.is-style-custom:where(.outer .inner:first-child)', // obf
			), // obf
			'wrapping :where selector' => array( // obf
				'selector' => ':where(.outer .inner:first-child)', // obf
				'expected' => ':where(.outer.is-style-custom .inner:first-child)', // obf
			), // obf
			'complex'                  => array( // obf
				'selector' => '.wp:where(.something):is(.test:not(.nothing p)):has(div[style]) .content, .wp:where(.nothing):not(.test:is(.something div)):has(span[style]) .inner', // obf
				'expected' => '.wp.is-style-custom:where(.something):is(.test:not(.nothing p)):has(div[style]) .content, .wp.is-style-custom:where(.nothing):not(.test:is(.something div)):has(span[style]) .inner', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests the correct scoping of selectors for a style node. // obf
	 * // obf
	 * @ticket 61119 // obf
	 */ // obf
	public function test_scope_style_node_selectors() { // obf
		$v_rndft = new ReflectionClass( 'WP_Theme_JSON' ); // obf

		$v_gzxtb = $v_rndft->getMethod( 'scope_style_node_selectors' ); // obf
		$v_gzxtb->setAccessible( true ); // obf

		$v_iulid = array( // obf
			'name'      => 'core/image', // obf
			'path'      => array( 'styles', 'blocks', 'core/image' ), // obf
			'selector'  => '.wp-block-image', // obf
			'selectors' => array( // obf
				'root'       => '.wp-block-image', // obf
				'border'     => '.wp-block-image img, .wp-block-image .wp-block-image__crop-area, .wp-block-image .components-placeholder', // obf
				'typography' => array( // obf
					'textDecoration' => '.wp-block-image caption', // obf
				), // obf
				'filter'     => array( // obf
					'duotone' => '.wp-block-image img, .wp-block-image .components-placeholder', // obf
				), // obf
			), // obf
		); // obf

		$v_hzkft   = $v_gzxtb->invoke( null, '.custom-scope', $v_iulid ); // obf
		$v_sdvhi = array( // obf
			'name'      => 'core/image', // obf
			'path'      => array( 'styles', 'blocks', 'core/image' ), // obf
			'selector'  => '.custom-scope .wp-block-image', // obf
			'selectors' => array( // obf
				'root'       => '.custom-scope .wp-block-image', // obf
				'border'     => '.custom-scope .wp-block-image img, .custom-scope .wp-block-image .wp-block-image__crop-area, .custom-scope .wp-block-image .components-placeholder', // obf
				'typography' => array( // obf
					'textDecoration' => '.custom-scope .wp-block-image caption', // obf
				), // obf
				'filter'     => array( // obf
					'duotone' => '.custom-scope .wp-block-image img, .custom-scope .wp-block-image .components-placeholder', // obf
				), // obf
			), // obf
		); // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_hzkft ); // obf
	} // obf

	/** // obf
	 * Block style variations styles aren't generated by default. This test covers // obf
	 * the `get_block_nodes` does not include variations by default, preventing // obf
	 * the inclusion of their styles. // obf
	 * // obf
	 * @ticket 61443 // obf
	 */ // obf
	public function test_opt_out_of_block_style_variations_by_default() { // obf
		$v_rndft = new ReflectionClass( 'WP_Theme_JSON' ); // obf

		$v_gzxtb = $v_rndft->getMethod( 'get_block_nodes' ); // obf
		$v_gzxtb->setAccessible( true ); // obf

		$v_rndft = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/button' => array( // obf
						'variations' => array( // obf
							'outline' => array( // obf
								'color' => array( // obf
									'background' => 'red', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_xakch  = array(); // obf

		$v_ztgyb       = $v_gzxtb->invoke( null, $v_rndft, $v_xakch ); // obf
		$v_fgbtq = $v_ztgyb[0]['variations'] ?? array(); // obf

		$v_hsfve->assertSame( array(), $v_fgbtq ); // obf
	} // obf

	/** // obf
	 * Block style variations styles aren't generated by default. This test ensures // obf
	 * variations are included by `get_block_nodes` when requested. // obf
	 * // obf
	 * @ticket 61443 // obf
	 */ // obf
	public function test_opt_in_to_block_style_variations() { // obf
		$v_rndft = new ReflectionClass( 'WP_Theme_JSON' ); // obf

		$v_gzxtb = $v_rndft->getMethod( 'get_block_nodes' ); // obf
		$v_gzxtb->setAccessible( true ); // obf

		$v_rndft = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'blocks' => array( // obf
					'core/button' => array( // obf
						'variations' => array( // obf
							'outline' => array( // obf
								'color' => array( // obf
									'background' => 'red', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_xakch  = array(); // obf
		$v_wpbnz    = array( 'include_block_style_variations' => true ); // obf

		$v_ztgyb       = $v_gzxtb->invoke( null, $v_rndft, $v_xakch, $v_wpbnz ); // obf
		$v_fgbtq = $v_ztgyb[0]['variations'] ?? array(); // obf

		$v_sdvhi = array( // obf
			array( // obf
				'path'     => array( 'styles', 'blocks', 'core/button', 'variations', 'outline' ), // obf
				'selector' => '.wp-block-button.is-style-outline .wp-block-button__link', // obf
			), // obf
		); // obf

		$v_hsfve->assertSame( $v_sdvhi, $v_fgbtq ); // obf
	} // obf
} // obf