

<?php // obf
/** // obf
 * Test the block style variations block support. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Block Supports // obf
 * @since 6.6.0 // obf
 * // obf
 * @group block-supports // obf
 */ // obf
class WP_Block_Supports_Block_Style_Variations_Test extends WP_UnitTestCase { // obf
	/** // obf
	 * Theme root directory. // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	private $v_rcmif; // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var array|null // obf
	 */ // obf
	private $v_nzhqy; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_tlcbt->theme_root = realpath( DIR_TESTDATA . '/themedir1' ); // obf

		$v_tlcbt->orig_theme_dir = $v_ptmew['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_ptmew['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_tlcbt->theme_root ); // obf

		add_filter( 'theme_root', array( $v_tlcbt, 'filter_set_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_tlcbt, 'filter_set_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_tlcbt, 'filter_set_theme_root' ) ); // obf

		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_ptmew['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		$v_ptmew['wp_theme_directories'] = $v_tlcbt->orig_theme_dir; // obf
		wp_clean_themes_cache(); // obf
		unset( $v_ptmew['wp_themes'] ); // obf

		// Reset data between tests. // obf
		wp_clean_theme_json_cache(); // obf
		parent::tear_down(); // obf
	} // obf

	public function filter_set_theme_root() { // obf
		return $v_tlcbt->theme_root; // obf
	} // obf

	/** // obf
	 * Tests that block style variations registered via either // obf
	 * `register_block_style` with a style object, or a standalone block style // obf
	 * variation file within `/styles`, are added to the theme data. // obf
	 * // obf
	 * @ticket 61312 // obf
	 * @ticket 61440 // obf
	 * @ticket 61451 // obf
	 */ // obf
	public function test_add_registered_block_styles_to_theme_data() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_wtrib = array( // obf
			'color'    => array( // obf
				'background' => 'darkslateblue', // obf
				'text'       => 'lavender', // obf
			), // obf
			'blocks'   => array( // obf
				'core/heading' => array( // obf
					'color' => array( // obf
						'text' => 'violet', // obf
					), // obf
				), // obf
			), // obf
			'elements' => array( // obf
				'link' => array( // obf
					'color'  => array( // obf
						'text' => 'fuchsia', // obf
					), // obf
					':hover' => array( // obf
						'color' => array( // obf
							'text' => 'deeppink', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		/* // obf
		 * This style is to be deliberately overwritten by the theme.json partial // obf
		 * See `tests/phpunit/data/themedir1/block-theme/styles/block-style-variation-with-slug.json`. // obf
		 */ // obf
		register_block_style( // obf
			'core/group', // obf
			array( // obf
				'name'       => 'WithSlug', // obf
				'style_data' => array( // obf
					'color' => array( // obf
						'background' => 'whitesmoke', // obf
						'text'       => 'black', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		register_block_style( // obf
			'core/group', // obf
			array( // obf
				'name'       => 'my-variation', // obf
				'style_data' => $v_wtrib, // obf
			) // obf
		); // obf

		$v_mtwcx   = WP_Theme_JSON_Resolver::get_theme_data()->get_raw_data(); // obf
		$v_hixhc = $v_mtwcx['styles']['blocks']['core/group'] ?? array(); // obf
		$v_wkfmf     = array( // obf
			'variations' => array( // obf

				/* // obf
				 * The following block style variations are registered // obf
				 * automatically from their respective JSON files within the // obf
				 * theme's `/styles` directory. // obf
				 */ // obf
				'block-style-variation-a' => array( // obf
					'color' => array( // obf
						'background' => 'indigo', // obf
						'text'       => 'plum', // obf
					), // obf
				), // obf
				'block-style-variation-b' => array( // obf
					'color' => array( // obf
						'background' => 'midnightblue', // obf
						'text'       => 'lightblue', // obf
					), // obf
				), // obf

				/* // obf
				 * Manually registered variations. // obf
				 * @ticket 61440 // obf
				 */ // obf
				'WithSlug'                => array( // obf
					'color' => array( // obf
						'background' => 'aliceblue', // obf
						'text'       => 'midnightblue', // obf
					), // obf
				), // obf
				'my-variation'            => $v_wtrib, // obf
			), // obf
		); // obf

		unregister_block_style( 'core/group', 'my-variation' ); // obf
		unregister_block_style( 'core/group', 'WithSlug' ); // obf

		$v_tlcbt->assertSameSetsWithIndex( $v_wkfmf, $v_hixhc, 'Variation data does not match' ); // obf
	} // obf

	/** // obf
	 * Tests that block style variations resolve any `ref` values when generating styles. // obf
	 * // obf
	 * @ticket 61589 // obf
	 */ // obf
	public function test_block_style_variation_ref_values() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_cygsj = array( // obf
			'color'    => array( // obf
				'text'       => array( // obf
					'ref' => 'styles.does-not-exist', // obf
				), // obf
				'background' => array( // obf
					'ref' => 'styles.blocks.core/group.variations.block-style-variation-a.color.text', // obf
				), // obf
			), // obf
			'blocks'   => array( // obf
				'core/heading' => array( // obf
					'color' => array( // obf
						'text'       => array( // obf
							'ref' => 'styles.blocks.core/group.variations.block-style-variation-a.color.background', // obf
						), // obf
						'background' => array( // obf
							'ref' => '', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'elements' => array( // obf
				'link' => array( // obf
					'color'  => array( // obf
						'text'       => array( // obf
							'ref' => 'styles.blocks.core/group.variations.block-style-variation-b.color.text', // obf
						), // obf
						'background' => array( // obf
							'ref' => null, // obf
						), // obf
					), // obf
					':hover' => array( // obf
						'color' => array( // obf
							'text' => array( // obf
								'ref' => 'styles.blocks.core/group.variations.block-style-variation-b.color.background', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_mtwcx = WP_Theme_JSON_Resolver::get_theme_data()->get_raw_data(); // obf

		wp_resolve_block_style_variation_ref_values( $v_cygsj, $v_mtwcx ); // obf

		$v_wkfmf = array( // obf
			'color'    => array( 'background' => 'plum' ), // obf
			'blocks'   => array( // obf
				'core/heading' => array( // obf
					'color' => array( 'text' => 'indigo' ), // obf
				), // obf
			), // obf
			'elements' => array( // obf
				'link' => array( // obf
					'color'  => array( 'text' => 'lightblue' ), // obf
					':hover' => array( // obf
						'color' => array( 'text' => 'midnightblue' ), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_tlcbt->assertSameSetsWithIndex( $v_wkfmf, $v_cygsj, 'Variation data with resolved ref values does not match' ); // obf
	} // obf
} // obf