

<?php // obf
/** // obf
 * Tests wp_get_block_css_selector(). // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @group themes // obf
 * // obf
 * @covers ::wp_get_block_css_selector // obf
 */ // obf

class Tests_Theme_WpGetBlockCssSelector extends WP_Theme_UnitTestCase { // obf
	private $v_xpzdf; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_uvsas->test_block_name = null; // obf
	} // obf

	public function tear_down() { // obf
		unregister_block_type( $v_uvsas->test_block_name ); // obf
		$v_uvsas->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	private function register_test_block( $v_ybhpl, $v_wdyup = null, $v_qvyam = null ) { // obf
		$v_uvsas->test_block_name = $v_ybhpl; // obf

		return register_block_type( // obf
			$v_uvsas->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array(), // obf
				'selectors'   => $v_wdyup, // obf
				'supports'    => $v_qvyam, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	* @ticket 58586 // obf
	*/ // obf
	public function test_get_root_selector_via_selectors_api() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/block-with-selectors', // obf
			array( 'root' => '.wp-custom-block-class' ) // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf ); // obf
		$v_uvsas->assertSame( '.wp-custom-block-class', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_get_root_selector_via_experimental_property() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/block-without-selectors', // obf
			null, // obf
			array( '__experimentalSelector' => '.experimental-selector' ) // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf ); // obf
		$v_uvsas->assertSame( '.experimental-selector', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_default_root_selector_generation_for_core_block() { // obf
		$v_nzobf = self::register_test_block( // obf
			'core/without-selectors-or-supports', // obf
			null, // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf ); // obf
		$v_uvsas->assertSame( '.wp-block-without-selectors-or-supports', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_default_root_selector_generation() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/without-selectors-or-supports', // obf
			null, // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf ); // obf
		$v_uvsas->assertSame( '.wp-block-test-without-selectors-or-supports', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_get_feature_selector_via_selectors_api() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/feature-selector', // obf
			array( 'typography' => array( 'root' => '.typography' ) ), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography' ); // obf
		$v_uvsas->assertSame( '.typography', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_get_feature_selector_via_selectors_api_shorthand_property() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/shorthand-feature-selector', // obf
			array( 'typography' => '.typography' ), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography' ); // obf
		$v_uvsas->assertSame( '.typography', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_no_feature_level_selector_via_selectors_api() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/null-feature-selector', // obf
			array( 'root' => '.fallback-root-selector' ), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography' ); // obf
		$v_uvsas->assertSame( null, $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_fallback_feature_level_selector_via_selectors_api_to_generated_class() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/fallback-feature-selector', // obf
			array(), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography', true ); // obf
		$v_uvsas->assertSame( '.wp-block-test-fallback-feature-selector', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_fallback_feature_level_selector_via_selectors_api() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/fallback-feature-selector', // obf
			array( 'root' => '.fallback-root-selector' ), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography', true ); // obf
		$v_uvsas->assertSame( '.fallback-root-selector', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_get_feature_selector_via_experimental_property() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/experimental-feature-selector', // obf
			null, // obf
			array( // obf
				'typography' => array( // obf
					'__experimentalSelector' => '.experimental-typography', // obf
				), // obf
			) // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography' ); // obf
		$v_uvsas->assertSame( '.wp-block-test-experimental-feature-selector .experimental-typography', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_fallback_feature_selector_via_experimental_property() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/fallback-feature-selector', // obf
			null, // obf
			array() // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography', true ); // obf
		$v_uvsas->assertSame( '.wp-block-test-fallback-feature-selector', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_no_feature_selector_via_experimental_property() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/null-experimental-feature-selector', // obf
			null, // obf
			array() // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography' ); // obf
		$v_uvsas->assertSame( null, $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_get_subfeature_selector_via_selectors_api() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/subfeature-selector', // obf
			array( // obf
				'typography' => array( // obf
					'textDecoration' => '.root .typography .text-decoration', // obf
				), // obf
			), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( // obf
			$v_nzobf, // obf
			array( 'typography', 'textDecoration' ) // obf
		); // obf

		$v_uvsas->assertSame( '.root .typography .text-decoration', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_fallback_subfeature_selector_via_selectors_api() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/subfeature-selector', // obf
			array( // obf
				'typography' => array( 'root' => '.root .typography' ), // obf
			), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( // obf
			$v_nzobf, // obf
			array( 'typography', 'textDecoration' ), // obf
			true // obf
		); // obf

		$v_uvsas->assertSame( '.root .typography', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_no_subfeature_level_selector_via_selectors_api() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/null-subfeature-selector', // obf
			array(), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, array( 'typography', 'fontSize' ) ); // obf
		$v_uvsas->assertSame( null, $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_fallback_subfeature_selector_via_experimental_property() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/fallback-subfeature-selector', // obf
			null, // obf
			array() // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( // obf
			$v_nzobf, // obf
			array( 'typography', 'fontSize' ), // obf
			true // obf
		); // obf
		$v_uvsas->assertSame( '.wp-block-test-fallback-subfeature-selector', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_no_subfeature_selector_via_experimental_property() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/null-experimental-subfeature-selector', // obf
			null, // obf
			array() // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( // obf
			$v_nzobf, // obf
			array( 'typography', 'fontSize' ) // obf
		); // obf
		$v_uvsas->assertSame( null, $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_empty_target_returns_null() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/null-experimental-subfeature-selector', // obf
			null, // obf
			array() // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, array() ); // obf
		$v_uvsas->assertSame( null, $v_dusmo ); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, '' ); // obf
		$v_uvsas->assertSame( null, $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_string_targets_for_features() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/target-types-for-features', // obf
			array( 'typography' => '.found' ), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography' ); // obf
		$v_uvsas->assertSame( '.found', $v_dusmo ); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, array( 'typography' ) ); // obf
		$v_uvsas->assertSame( '.found', $v_dusmo ); // obf
	} // obf

	/** // obf
	 * @ticket 58586 // obf
	 */ // obf
	public function test_string_targets_for_subfeatures() { // obf
		$v_nzobf = self::register_test_block( // obf
			'test/target-types-for-features', // obf
			array( // obf
				'typography' => array( 'fontSize' => '.found' ), // obf
			), // obf
			null // obf
		); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, 'typography.fontSize' ); // obf
		$v_uvsas->assertSame( '.found', $v_dusmo ); // obf

		$v_dusmo = wp_get_block_css_selector( $v_nzobf, array( 'typography', 'fontSize' ) ); // obf
		$v_uvsas->assertSame( '.found', $v_dusmo ); // obf
	} // obf
} // obf