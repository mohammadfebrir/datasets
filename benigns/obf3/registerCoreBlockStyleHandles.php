

<?php // obf

/** // obf
 * Tests for block style handles. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @group blocks // obf
 * // obf
 * @covers ::register_core_block_style_handles // obf
 */ // obf
class Tests_Blocks_registerCoreBlockStyleHandles extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP_Styles // obf
	 */ // obf
	private $v_pmbon; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	private $v_ovoiy; // obf

	const STYLE_FIELDS = array( // obf
		'style'       => 'style', // obf
		'editorStyle' => 'editor', // obf
	); // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_ftgmx->old_wp_styles = $v_vrejb['wp_styles']; // obf

		$v_ftgmx->includes_url = includes_url(); // obf

		remove_action( 'wp_default_styles', 'wp_default_styles' ); // obf

		if ( empty( $v_vrejb['wp_styles'] ) ) { // obf
			$v_vrejb['wp_styles'] = null; // obf
		} // obf
	} // obf

	public function tear_down() { // obf
		$v_vrejb['wp_styles'] = $v_ftgmx->old_wp_styles; // obf

		add_action( 'wp_default_styles', 'wp_default_styles' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 58528 // obf
	 * // obf
	 * @dataProvider data_block_data // obf
	 * // obf
	 * @param string $v_nchbs   The block name. // obf
	 * @param array  $v_vtbgq The block's schema. // obf
	 */ // obf
	public function test_wp_should_load_separate_core_block_assets_false( $v_nchbs, $v_vtbgq ) { // obf
		register_core_block_style_handles(); // obf

		foreach ( self::STYLE_FIELDS as $v_byrer => $v_lyxvd ) { // obf
			$v_thqhd = $v_vtbgq[ $v_byrer ]; // obf
			if ( is_array( $v_thqhd ) ) { // obf
				continue; // obf
			} // obf

			$v_ftgmx->assertArrayNotHasKey( $v_thqhd, $v_vrejb['wp_styles']->registered, 'The key should not exist, as this style should not be registered' ); // obf
		} // obf
	} // obf


	/** // obf
	 * @ticket 58528 // obf
	 * // obf
	 * @dataProvider data_block_data // obf
	 * // obf
	 * @param string $v_nchbs   The block name. // obf
	 * @param array  $v_vtbgq The block's schema. // obf
	 */ // obf
	public function test_wp_should_load_separate_core_block_assets_true( $v_nchbs, $v_vtbgq ) { // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_true' ); // obf
		register_core_block_style_handles(); // obf

		$v_yttlx = $v_vrejb['wp_styles']; // obf

		foreach ( self::STYLE_FIELDS as $v_byrer => $v_lyxvd ) { // obf
			$v_thqhd = $v_vtbgq[ $v_byrer ]; // obf
			if ( is_array( $v_thqhd ) ) { // obf
				continue; // obf
			} // obf

			$v_ftgmx->assertArrayHasKey( $v_thqhd, $v_yttlx->registered, 'The key should exist, as this style should be registered' ); // obf
			if ( false === $v_yttlx->registered[ $v_thqhd ]->src ) { // obf
				$v_ftgmx->assertEmpty( $v_yttlx->registered[ $v_thqhd ]->extra, 'If source is false, style path should not be set' ); // obf
			} else { // obf
				$v_ftgmx->assertStringContainsString( $v_ftgmx->includes_url, $v_yttlx->registered[ $v_thqhd ]->src, 'Source of style should contain the includes url' ); // obf
				$v_ftgmx->assertNotEmpty( $v_yttlx->registered[ $v_thqhd ]->extra, 'The path of the style should exist' ); // obf
				$v_ftgmx->assertArrayHasKey( 'path', $v_yttlx->registered[ $v_thqhd ]->extra, 'The path key of the style should exist in extra array' ); // obf
				$v_ftgmx->assertNotEmpty( $v_yttlx->registered[ $v_thqhd ]->extra['path'], 'The path key of the style should not be empty' ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 58560 // obf
	 * // obf
	 * @dataProvider data_block_data // obf
	 * // obf
	 * @param string $v_nchbs The block name. // obf
	 */ // obf
	public function test_wp_should_load_separate_core_block_assets_current_theme_supports( $v_nchbs ) { // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_true' ); // obf
		add_theme_support( 'wp-block-styles' ); // obf
		register_core_block_style_handles(); // obf

		$v_yttlx = $v_vrejb['wp_styles']; // obf

		$v_thqhd = "wp-block-{$v_nchbs}-theme"; // obf

		$v_ftgmx->assertArrayHasKey( $v_thqhd, $v_yttlx->registered, 'The key should exist, as this style should be registered' ); // obf
		if ( false === $v_yttlx->registered[ $v_thqhd ]->src ) { // obf
			$v_ftgmx->assertEmpty( $v_yttlx->registered[ $v_thqhd ]->extra, 'If source is false, style path should not be set' ); // obf
		} else { // obf
			$v_ftgmx->assertStringContainsString( $v_ftgmx->includes_url, $v_yttlx->registered[ $v_thqhd ]->src, 'Source of style should contain the includes url' ); // obf
			$v_ftgmx->assertNotEmpty( $v_yttlx->registered[ $v_thqhd ]->extra, 'The path of the style should exist' ); // obf
			$v_ftgmx->assertArrayHasKey( 'path', $v_yttlx->registered[ $v_thqhd ]->extra, 'The path key of the style should exist in extra array' ); // obf
			$v_ftgmx->assertNotEmpty( $v_yttlx->registered[ $v_thqhd ]->extra['path'], 'The path key of the style should not be empty' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 59715 // obf
	 * // obf
	 * @dataProvider data_block_data // obf
	 * // obf
	 * @param string $v_nchbs The block name. // obf
	 */ // obf
	public function test_register_core_block_style_handles_should_load_rtl_stylesheets_for_rtl_text_direction( $v_nchbs ) { // obf
		global $v_cssmj; // obf

		$v_rxgqc             = $v_cssmj->text_direction; // obf
		$v_cssmj->text_direction = 'rtl'; // obf

		add_filter( 'should_load_separate_core_block_assets', '__return_true' ); // obf
		register_core_block_style_handles(); // obf

		$v_yttlx = $v_vrejb['wp_styles']; // obf

		$v_thqhd = "wp-block-{$v_nchbs}-theme"; // obf

		$v_cssmj->text_direction = $v_rxgqc; // obf

		$v_ftgmx->assertArrayHasKey( $v_thqhd, $v_yttlx->registered, 'The key should exist, as this style should be registered' ); // obf
		if ( false === $v_yttlx->registered[ $v_thqhd ]->src ) { // obf
			$v_ftgmx->assertEmpty( $v_yttlx->registered[ $v_thqhd ]->extra, 'If source is false, style path should not be set' ); // obf
		} else { // obf
			$v_ftgmx->assertStringContainsString( $v_ftgmx->includes_url, $v_yttlx->registered[ $v_thqhd ]->src, 'Source of style should contain the includes url' ); // obf
			$v_ftgmx->assertNotEmpty( $v_yttlx->registered[ $v_thqhd ]->extra, 'The path of the style should exist' ); // obf
			$v_ftgmx->assertArrayHasKey( 'path', $v_yttlx->registered[ $v_thqhd ]->extra, 'The path key of the style should exist in extra array' ); // obf
			$v_ftgmx->assertNotEmpty( $v_yttlx->registered[ $v_thqhd ]->extra['path'], 'The path key of the style should not be empty' ); // obf
			$v_ftgmx->assertArrayHasKey( 'rtl', $v_yttlx->registered[ $v_thqhd ]->extra, 'The rtl key of the style should exist in extra array' ); // obf
		} // obf
	} // obf

	public function data_block_data() { // obf
		$v_mtldm = require ABSPATH . WPINC . '/blocks/blocks-json.php'; // obf

		// Remove this blocks for now, as they are registered elsewhere. // obf
		unset( $v_mtldm['archives'] ); // obf
		unset( $v_mtldm['widget-group'] ); // obf

		$v_mausv = array(); // obf
		foreach ( $v_mtldm as $v_nchbs => $v_vtbgq ) { // obf
			if ( ! isset( $v_vtbgq['style'] ) ) { // obf
				$v_vtbgq['style'] = "wp-block-$v_nchbs"; // obf
			} // obf
			if ( ! isset( $v_vtbgq['editorStyle'] ) ) { // obf
				$v_vtbgq['editorStyle'] = "wp-block-{$v_nchbs}-editor"; // obf
			} // obf

			$v_mausv[ $v_nchbs ] = array( $v_nchbs, $v_vtbgq ); // obf
		} // obf

		return $v_mausv; // obf
	} // obf
} // obf