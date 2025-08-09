

<?php // obf

/** // obf
 * @group kses // obf
 * // obf
 * @covers ::wp_filter_global_styles_post // obf
 */ // obf
class Tests_Kses_WpFilterGlobalStylesPost extends WP_UnitTestCase { // obf

	/** // obf
	 * Theme data. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_vagwh = array( // obf
		'isGlobalStylesUserThemeJSON' => 1, // obf
		'version'                     => 1, // obf
		'styles'                      => array( // obf
			'blocks' => array( // obf
				'core/button' => array( // obf
					'border' => array( // obf
						'radius' => '0', // obf
					), // obf
				), // obf
			), // obf
		), // obf
	); // obf

	/** // obf
	 * @dataProvider data_should_not_remove_safe_global_style_rules // obf
	 * @ticket       56266 // obf
	 * // obf
	 * @param string $v_nzstg A rule to test. // obf
	 */ // obf
	public function test_should_not_remove_safe_global_style_rules( $v_nzstg ) { // obf
		$v_dkcmf               = wp_parse_args( $v_jnahp->user_theme_data, array( $v_nzstg => 'someValue' ) ); // obf
		$v_syfvz = $v_jnahp->filter_global_styles( $v_dkcmf ); // obf
		$v_djcda               = array_keys( $v_dkcmf ); // obf
		foreach ( $v_djcda as $v_lvaap ) { // obf
			$v_jnahp->assertArrayHasKey( $v_lvaap, $v_syfvz, sprintf( 'wp_filter_global_styles_post() must not remove the "%s" rule as it\'s considered safe.', $v_lvaap ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_not_remove_safe_global_style_rules() { // obf
		$v_jhjcr = array(); // obf
		foreach ( WP_Theme_JSON::VALID_TOP_LEVEL_KEYS as $v_lvaap ) { // obf
			$v_jhjcr[ $v_lvaap ] = array( $v_lvaap ); // obf
		} // obf

		// Settings always get removed. // obf
		unset( $v_jhjcr['settings'] ); // obf

		return $v_jhjcr; // obf
	} // obf

	/** // obf
	 * @ticket 56266 // obf
	 */ // obf
	public function test_should_remove_unsafe_global_style_rules() { // obf
		$v_syfvz = $v_jnahp->filter_global_styles( $v_jnahp->user_theme_data ); // obf
		$v_jnahp->assertArrayNotHasKey( 'nonSchemaRule', $v_syfvz, 'Filtered json data must not contain unsafe global style rules.' ); // obf
	} // obf

	/** // obf
	 * This is a helper method. // obf
	 * It filters JSON theme data and returns it as an array. // obf
	 * // obf
	 * @param array $v_dkcmf Theme data to filter. // obf
	 * // obf
	 * @return array Filtered theme data. // obf
	 */ // obf
	private function filter_global_styles( $v_dkcmf ) { // obf
		$v_smhio          = wp_slash( wp_json_encode( $v_dkcmf ) ); // obf
		$v_syfvz = wp_filter_global_styles_post( $v_smhio ); // obf

		return json_decode( wp_unslash( $v_syfvz ), true ); // obf
	} // obf
} // obf