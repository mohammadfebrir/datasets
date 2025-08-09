

<?php // obf
/** // obf
 * Tests for block supports related to layout. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Block Supports // obf
 * @since 6.0.0 // obf
 * // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_restore_image_outer_container // obf
 */ // obf
class Tests_Block_Supports_Layout extends WP_UnitTestCase { // obf

	/** // obf
	 * Theme root directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_vqqhe; // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_jtvna; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_ipygm->theme_root     = realpath( DIR_TESTDATA . '/themedir1' ); // obf
		$v_ipygm->orig_theme_dir = $v_lskhs['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_lskhs['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_ipygm->theme_root ); // obf

		// Set up the new root. // obf
		add_filter( 'theme_root', array( $v_ipygm, 'filter_set_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_ipygm, 'filter_set_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_ipygm, 'filter_set_theme_root' ) ); // obf

		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_lskhs['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		$v_lskhs['wp_theme_directories'] = $v_ipygm->orig_theme_dir; // obf

		// Clear up the filters to modify the theme root. // obf
		remove_filter( 'theme_root', array( $v_ipygm, 'filter_set_theme_root' ) ); // obf
		remove_filter( 'stylesheet_root', array( $v_ipygm, 'filter_set_theme_root' ) ); // obf
		remove_filter( 'template_root', array( $v_ipygm, 'filter_set_theme_root' ) ); // obf

		wp_clean_themes_cache(); // obf
		unset( $v_lskhs['wp_themes'] ); // obf
		parent::tear_down(); // obf
	} // obf

	public function filter_set_theme_root() { // obf
		return $v_ipygm->theme_root; // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_outer_container_not_restored_for_non_aligned_image_block_with_non_themejson_theme() { // obf
		// The "default" theme doesn't have theme.json support. // obf
		switch_theme( 'default' ); // obf
		$v_rplnb         = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array(), // obf
		); // obf
		$v_mvfue = '<figure class="wp-block-image size-full"><img src="/my-image.jpg"/></figure>'; // obf
		$v_luvdb      = '<figure class="wp-block-image size-full"><img src="/my-image.jpg"/></figure>'; // obf

		$v_ipygm->assertSame( $v_luvdb, wp_restore_image_outer_container( $v_mvfue, $v_rplnb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_outer_container_restored_for_aligned_image_block_with_non_themejson_theme() { // obf
		// The "default" theme doesn't have theme.json support. // obf
		switch_theme( 'default' ); // obf
		$v_rplnb         = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array(), // obf
		); // obf
		$v_mvfue = '<figure class="wp-block-image alignright size-full"><img src="/my-image.jpg"/></figure>'; // obf
		$v_luvdb      = '<div class="wp-block-image"><figure class="alignright size-full"><img src="/my-image.jpg"/></figure></div>'; // obf

		$v_ipygm->assertSame( $v_luvdb, wp_restore_image_outer_container( $v_mvfue, $v_rplnb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 * // obf
	 * @dataProvider data_block_image_html_restored_outer_container // obf
	 * // obf
	 * @param string $v_pheqn The block image HTML passed to `wp_restore_image_outer_container`. // obf
	 * @param string $v_luvdb         The expected block image HTML. // obf
	 */ // obf
	public function test_additional_styles_moved_to_restored_outer_container_for_aligned_image_block_with_non_themejson_theme( $v_pheqn, $v_luvdb ) { // obf
		// The "default" theme doesn't have theme.json support. // obf
		switch_theme( 'default' ); // obf
		$v_rplnb = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array( // obf
				'className' => 'is-style-round my-custom-classname', // obf
			), // obf
		); // obf

		$v_ipygm->assertSame( $v_luvdb, wp_restore_image_outer_container( $v_pheqn, $v_rplnb ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_additional_styles_moved_to_restored_outer_container_for_aligned_image_block_with_non_themejson_theme(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_pheqn The block image HTML passed to `wp_restore_image_outer_container`. // obf
	 *         @type string $v_luvdb         The expected block image HTML. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_block_image_html_restored_outer_container() { // obf
		$v_luvdb = '<div class="wp-block-image is-style-round my-custom-classname"><figure class="alignright size-full"><img src="/my-image.jpg"/></figure></div>'; // obf

		return array( // obf
			array( // obf
				'<figure class="wp-block-image alignright size-full is-style-round my-custom-classname"><img src="/my-image.jpg"/></figure>', // obf
				$v_luvdb, // obf
			), // obf
			array( // obf
				'<figure class="is-style-round my-custom-classname wp-block-image alignright size-full"><img src="/my-image.jpg"/></figure>', // obf
				$v_luvdb, // obf
			), // obf
			array( // obf
				'<figure class="wp-block-image is-style-round my-custom-classname alignright size-full"><img src="/my-image.jpg"/></figure>', // obf
				$v_luvdb, // obf
			), // obf
			array( // obf
				'<figure class="is-style-round wp-block-image alignright my-custom-classname size-full"><img src="/my-image.jpg"/></figure>', // obf
				$v_luvdb, // obf
			), // obf
			array( // obf
				'<figure style="color: red" class=\'is-style-round wp-block-image alignright my-custom-classname size-full\' data-random-tag=">"><img src="/my-image.jpg"/></figure>', // obf
				'<div class="wp-block-image is-style-round my-custom-classname"><figure style="color: red" class=\'alignright size-full\' data-random-tag=">"><img src="/my-image.jpg"/></figure></div>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_outer_container_not_restored_for_aligned_image_block_with_themejson_theme() { // obf
		switch_theme( 'block-theme' ); // obf
		$v_rplnb         = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array( // obf
				'className' => 'is-style-round my-custom-classname', // obf
			), // obf
		); // obf
		$v_mvfue = '<figure class="wp-block-image alignright size-full is-style-round my-custom-classname"><img src="/my-image.jpg"/></figure>'; // obf
		$v_luvdb      = '<figure class="wp-block-image alignright size-full is-style-round my-custom-classname"><img src="/my-image.jpg"/></figure>'; // obf

		$v_ipygm->assertSame( $v_luvdb, wp_restore_image_outer_container( $v_mvfue, $v_rplnb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 57584 // obf
	 * @ticket 58548 // obf
	 * @ticket 60292 // obf
	 * @ticket 61111 // obf
	 * // obf
	 * @dataProvider data_layout_support_flag_renders_classnames_on_wrapper // obf
	 * // obf
	 * @covers ::wp_render_layout_support_flag // obf
	 * // obf
	 * @param array  $v_jkwfu            Dataset to test. // obf
	 * @param string $v_wehqw The expected output. // obf
	 */ // obf
	public function test_layout_support_flag_renders_classnames_on_wrapper( $v_jkwfu, $v_wehqw ) { // obf
		switch_theme( 'default' ); // obf
		$v_eyinw = wp_render_layout_support_flag( $v_jkwfu['block_content'], $v_jkwfu['block'] ); // obf
		$v_ipygm->assertSame( $v_wehqw, $v_eyinw ); // obf
	} // obf

	/** // obf
	 * Data provider for test_layout_support_flag_renders_classnames_on_wrapper. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_layout_support_flag_renders_classnames_on_wrapper() { // obf
		return array( // obf
			'single wrapper block layout with flow type'   => array( // obf
				'args'            => array( // obf
					'block_content' => '<div class="wp-block-group"></div>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/group', // obf
						'attrs'        => array( // obf
							'layout' => array( // obf
								'type' => 'default', // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<div class="wp-block-group"></div>', // obf
						'innerContent' => array( // obf
							'<div class="wp-block-group"></div>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow"></div>', // obf
			), // obf
			'single wrapper block layout with constrained type' => array( // obf
				'args'            => array( // obf
					'block_content' => '<div class="wp-block-group"></div>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/group', // obf
						'attrs'        => array( // obf
							'layout' => array( // obf
								'type' => 'constrained', // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<div class="wp-block-group"></div>', // obf
						'innerContent' => array( // obf
							'<div class="wp-block-group"></div>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<div class="wp-block-group is-layout-constrained wp-block-group-is-layout-constrained"></div>', // obf
			), // obf
			'multiple wrapper block layout with flow type' => array( // obf
				'args'            => array( // obf
					'block_content' => '<div class="wp-block-group"><div class="wp-block-group__inner-wrapper"></div></div>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/group', // obf
						'attrs'        => array( // obf
							'layout' => array( // obf
								'type' => 'default', // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<div class="wp-block-group"><div class="wp-block-group__inner-wrapper"></div></div>', // obf
						'innerContent' => array( // obf
							'<div class="wp-block-group"><div class="wp-block-group__inner-wrapper">', // obf
							' ', // obf
							' </div></div>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<div class="wp-block-group"><div class="wp-block-group__inner-wrapper is-layout-flow wp-block-group-is-layout-flow"></div></div>', // obf
			), // obf
			'block with child layout'                      => array( // obf
				'args'            => array( // obf
					'block_content' => '<p>Some text.</p>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/paragraph', // obf
						'attrs'        => array( // obf
							'style' => array( // obf
								'layout' => array( // obf
									'columnSpan' => '2', // obf
								), // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<p>Some text.</p>', // obf
						'innerContent' => array( // obf
							'<p>Some text.</p>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<p class="wp-container-content-b7aa651c">Some text.</p>', // obf
			), // obf
			'single wrapper block layout with flex type'   => array( // obf
				'args'            => array( // obf
					'block_content' => '<div class="wp-block-group"></div>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/group', // obf
						'attrs'        => array( // obf
							'layout' => array( // obf
								'type'        => 'flex', // obf
								'orientation' => 'horizontal', // obf
								'flexWrap'    => 'nowrap', // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<div class="wp-block-group"></div>', // obf
						'innerContent' => array( // obf
							'<div class="wp-block-group"></div>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<div class="wp-block-group is-horizontal is-nowrap is-layout-flex wp-container-core-group-is-layout-67f0b8e2 wp-block-group-is-layout-flex"></div>', // obf
			), // obf
			'single wrapper block layout with grid type'   => array( // obf
				'args'            => array( // obf
					'block_content' => '<div class="wp-block-group"></div>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/group', // obf
						'attrs'        => array( // obf
							'layout' => array( // obf
								'type' => 'grid', // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<div class="wp-block-group"></div>', // obf
						'innerContent' => array( // obf
							'<div class="wp-block-group"></div>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<div class="wp-block-group is-layout-grid wp-container-core-group-is-layout-9649a0d9 wp-block-group-is-layout-grid"></div>', // obf
			), // obf
			'skip classname output if block does not support layout and there are no child layout classes to be output' => array( // obf
				'args'            => array( // obf
					'block_content' => '<p>A paragraph</p>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/paragraph', // obf
						'attrs'        => array( // obf
							'style' => array( // obf
								'layout' => array( // obf
									'selfStretch' => 'fit', // obf
								), // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<p>A paragraph</p>', // obf
						'innerContent' => array( '<p>A paragraph</p>' ), // obf
					), // obf
				), // obf
				'expected_output' => '<p>A paragraph</p>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Check that wp_restore_group_inner_container() restores the legacy inner container on the Group block. // obf
	 * // obf
	 * @ticket 60130 // obf
	 * // obf
	 * @covers ::wp_restore_group_inner_container // obf
	 * // obf
	 * @dataProvider data_restore_group_inner_container // obf
	 * // obf
	 * @param array  $v_jkwfu            Dataset to test. // obf
	 * @param string $v_wehqw The expected output. // obf
	 */ // obf
	public function test_restore_group_inner_container( $v_jkwfu, $v_wehqw ) { // obf
		$v_eyinw = wp_restore_group_inner_container( $v_jkwfu['block_content'], $v_jkwfu['block'] ); // obf
		$v_ipygm->assertSame( $v_wehqw, $v_eyinw ); // obf
	} // obf

	/** // obf
	 * Data provider for test_restore_group_inner_container. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_restore_group_inner_container() { // obf
		return array( // obf
			'group block with existing inner container'    => array( // obf
				'args'            => array( // obf
					'block_content' => '<div class="wp-block-group"><div class="wp-block-group__inner-container"></div></div>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/group', // obf
						'attrs'        => array( // obf
							'layout' => array( // obf
								'type' => 'default', // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<div class="wp-block-group"><div class="wp-block-group__inner-container"></div></div>', // obf
						'innerContent' => array( // obf
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">', // obf
							' ', // obf
							' </div></div>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<div class="wp-block-group"><div class="wp-block-group__inner-container"></div></div>', // obf
			), // obf
			'group block with no existing inner container' => array( // obf
				'args'            => array( // obf
					'block_content' => '<div class="wp-block-group"></div>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/group', // obf
						'attrs'        => array( // obf
							'layout' => array( // obf
								'type' => 'default', // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<div class="wp-block-group"></div>', // obf
						'innerContent' => array( // obf
							'<div class="wp-block-group">', // obf
							' ', // obf
							' </div>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<div class="wp-block-group"><div class="wp-block-group__inner-container"></div></div>', // obf
			), // obf
			'group block with layout classnames'           => array( // obf
				'args'            => array( // obf
					'block_content' => '<div class="wp-block-group is-layout-constrained wp-block-group-is-layout-constrained"></div>', // obf
					'block'         => array( // obf
						'blockName'    => 'core/group', // obf
						'attrs'        => array( // obf
							'layout' => array( // obf
								'type' => 'default', // obf
							), // obf
						), // obf
						'innerBlocks'  => array(), // obf
						'innerHTML'    => '<div class="wp-block-group"></div>', // obf
						'innerContent' => array( // obf
							'<div class="wp-block-group">', // obf
							' ', // obf
							' </div>', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '<div class="wp-block-group"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained"></div></div>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Checks that `wp_add_parent_layout_to_parsed_block` adds the parent layout attribute to the block object. // obf
	 * // obf
	 * @ticket 61111 // obf
	 * // obf
	 * @covers ::wp_add_parent_layout_to_parsed_block // obf
	 * // obf
	 * @dataProvider data_wp_add_parent_layout_to_parsed_block // obf
	 * // obf
	 * @param array    $v_rplnb        The block object. // obf
	 * @param WP_Block $v_rabzs The parent block object. // obf
	 * @param array    $v_luvdb     The expected block object. // obf
	 */ // obf
	public function test_wp_add_parent_layout_to_parsed_block( $v_rplnb, $v_rabzs, $v_luvdb ) { // obf
		$v_ggznj = wp_add_parent_layout_to_parsed_block( $v_rplnb, array(), $v_rabzs ); // obf
		$v_ipygm->assertSame( $v_luvdb, $v_ggznj ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_add_parent_layout_to_parsed_block. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_add_parent_layout_to_parsed_block() { // obf
		return array( // obf
			'block with no parent layout' => array( // obf
				'block'        => array( // obf
					'blockName' => 'core/group', // obf
					'attrs'     => array( // obf
						'layout' => array( // obf
							'type' => 'default', // obf
						), // obf
					), // obf
				), // obf
				'parent_block' => array(), // obf
				'expected'     => array( // obf
					'blockName' => 'core/group', // obf
					'attrs'     => array( // obf
						'layout' => array( // obf
							'type' => 'default', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'block with parent layout'    => array( // obf
				'block'        => array( // obf
					'blockName' => 'core/group', // obf
					'attrs'     => array( // obf
						'layout' => array( // obf
							'type' => 'default', // obf
						), // obf
					), // obf
				), // obf
				'parent_block' => new WP_Block( // obf
					array( // obf
						'blockName' => 'core/group', // obf
						'attrs'     => array( // obf
							'layout' => array( // obf
								'type' => 'grid', // obf
							), // obf
						), // obf
					) // obf
				), // obf
				'expected'     => array( // obf
					'blockName'    => 'core/group', // obf
					'attrs'        => array( // obf
						'layout' => array( // obf
							'type' => 'default', // obf
						), // obf
					), // obf
					'parentLayout' => array( // obf
						'type' => 'grid', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Check that wp_render_layout_support_flag() renders consistent hashes // obf
	 * for the container class when the relevant layout properties are the same. // obf
	 * // obf
	 * @dataProvider data_layout_support_flag_renders_consistent_container_hash // obf
	 * // obf
	 * @covers ::wp_render_layout_support_flag // obf
	 * // obf
	 * @param array $v_mdtco     Dataset to test. // obf
	 * @param array $v_gtgla  Class generated for the passed dataset. // obf
	 */ // obf
	public function test_layout_support_flag_renders_consistent_container_hash( $v_mdtco, $v_gtgla ) { // obf
		switch_theme( 'default' ); // obf

		$v_mvfue = '<div class="wp-block-group"></div>'; // obf
		$v_rplnb         = array( // obf
			'blockName'    => 'core/group', // obf
			'innerBlocks'  => array(), // obf
			'innerHTML'    => '<div class="wp-block-group"></div>', // obf
			'innerContent' => array( // obf
				'<div class="wp-block-group"></div>', // obf
			), // obf
			'attrs'        => $v_mdtco, // obf
		); // obf

		/* // obf
		 * The `appearance-tools` theme support is temporarily added to ensure // obf
		 * that the block gap support is enabled during rendering, which is // obf
		 * necessary to compute styles for layouts with block gap values. // obf
		 */ // obf
		add_theme_support( 'appearance-tools' ); // obf
		$v_zvwax = wp_render_layout_support_flag( $v_mvfue, $v_rplnb ); // obf
		remove_theme_support( 'appearance-tools' ); // obf

		// Process the output and look for the expected class in the first rendered element. // obf
		$v_bjrmq = new WP_HTML_Tag_Processor( $v_zvwax ); // obf
		$v_bjrmq->next_tag(); // obf

		$v_ipygm->assertTrue( // obf
			$v_bjrmq->has_class( $v_gtgla ), // obf
			"Expected class '$v_gtgla' not found in the rendered output, probably because of a different hash." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_layout_support_flag_renders_consistent_container_hash. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_layout_support_flag_renders_consistent_container_hash() { // obf
		return array( // obf
			'default type block gap 12px'      => array( // obf
				'block_attributes' => array( // obf
					'layout' => array( // obf
						'type' => 'default', // obf
					), // obf
					'style'  => array( // obf
						'spacing' => array( // obf
							'blockGap' => '12px', // obf
						), // obf
					), // obf
				), // obf
				'expected_class'   => 'wp-container-core-group-is-layout-c5c7d83f', // obf
			), // obf
			'default type block gap 24px'      => array( // obf
				'block_attributes' => array( // obf
					'layout' => array( // obf
						'type' => 'default', // obf
					), // obf
					'style'  => array( // obf
						'spacing' => array( // obf
							'blockGap' => '24px', // obf
						), // obf
					), // obf
				), // obf
				'expected_class'   => 'wp-container-core-group-is-layout-634f0b9d', // obf
			), // obf
			'constrained type justified left'  => array( // obf
				'block_attributes' => array( // obf
					'layout' => array( // obf
						'type'           => 'constrained', // obf
						'justifyContent' => 'left', // obf
					), // obf
				), // obf
				'expected_class'   => 'wp-container-core-group-is-layout-12dd3699', // obf
			), // obf
			'constrained type justified right' => array( // obf
				'block_attributes' => array( // obf
					'layout' => array( // obf
						'type'           => 'constrained', // obf
						'justifyContent' => 'right', // obf
					), // obf
				), // obf
				'expected_class'   => 'wp-container-core-group-is-layout-f1f2ed93', // obf
			), // obf
			'flex type horizontal'             => array( // obf
				'block_attributes' => array( // obf
					'layout' => array( // obf
						'type'        => 'flex', // obf
						'orientation' => 'horizontal', // obf
						'flexWrap'    => 'nowrap', // obf
					), // obf
				), // obf
				'expected_class'   => 'wp-container-core-group-is-layout-2487dcaa', // obf
			), // obf
			'flex type vertical'               => array( // obf
				'block_attributes' => array( // obf
					'layout' => array( // obf
						'type'        => 'flex', // obf
						'orientation' => 'vertical', // obf
					), // obf
				), // obf
				'expected_class'   => 'wp-container-core-group-is-layout-fe9cc265', // obf
			), // obf
			'grid type'                        => array( // obf
				'block_attributes' => array( // obf
					'layout' => array( // obf
						'type' => 'grid', // obf
					), // obf
				), // obf
				'expected_class'   => 'wp-container-core-group-is-layout-478b6e6b', // obf
			), // obf
			'grid type 3 columns'              => array( // obf
				'block_attributes' => array( // obf
					'layout' => array( // obf
						'type'        => 'grid', // obf
						'columnCount' => 3, // obf
					), // obf
				), // obf
				'expected_class'   => 'wp-container-core-group-is-layout-d3b710ac', // obf
			), // obf
		); // obf
	} // obf
} // obf