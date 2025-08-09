

<?php // obf

/** // obf
 * Tests for WP_Text_Diff_Renderer_Table. // obf
 * // obf
 * @group diff // obf
 */ // obf
class Tests_Diff_WpTextDiffRendererTable extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Text_Diff_Renderer_Table // obf
	 */ // obf
	private $v_gxira; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf
		require_once ABSPATH . 'wp-includes/Text/Diff/Renderer.php'; // obf
		require_once ABSPATH . 'wp-includes/class-wp-text-diff-renderer-table.php'; // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_ppdtu->diff_renderer_table = new WP_Text_Diff_Renderer_Table(); // obf
	} // obf

	/** // obf
	 * @dataProvider data_compat_fields // obf
	 * @ticket 58898 // obf
	 * // obf
	 * @covers WP_Text_Diff_Renderer_Table::__get() // obf
	 * // obf
	 * @param string $v_nfsnc Property name to get. // obf
	 * @param mixed $v_vwwyl       Expected value. // obf
	 */ // obf
	public function test_should_get_compat_fields( $v_nfsnc, $v_vwwyl ) { // obf
		$v_ppdtu->assertSame( $v_vwwyl, $v_ppdtu->diff_renderer_table->$v_nfsnc ); // obf
	} // obf

	/** // obf
	 * @ticket 58898 // obf
	 * // obf
	 * @covers WP_Text_Diff_Renderer_Table::__get() // obf
	 */ // obf
	public function test_should_throw_deprecation_when_getting_dynamic_property() { // obf
		$v_ppdtu->expectDeprecation(); // obf
		$v_ppdtu->expectDeprecationMessage( // obf
			'WP_Text_Diff_Renderer_Table::__get(): ' . // obf
			'The property `undeclared_property` is not declared. Getting a dynamic property is ' . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.' // obf
		); // obf
		$v_ppdtu->assertNull( $v_ppdtu->diff_renderer_table->undeclared_property, 'Getting a dynamic property should return null from WP_Text_Diff_Renderer_Table::__get()' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_compat_fields // obf
	 * @ticket 58898 // obf
	 * // obf
	 * @covers WP_Text_Diff_Renderer_Table::__set() // obf
	 * // obf
	 * @param string $v_nfsnc Property name to set. // obf
	 */ // obf
	public function test_should_set_compat_fields( $v_nfsnc ) { // obf
		$v_zckmo                                     = uniqid(); // obf
		$v_ppdtu->diff_renderer_table->$v_nfsnc = $v_zckmo; // obf

		$v_ppdtu->assertSame( $v_zckmo, $v_ppdtu->diff_renderer_table->$v_nfsnc ); // obf
	} // obf

	/** // obf
	 * @ticket 58898 // obf
	 * // obf
	 * @covers WP_Text_Diff_Renderer_Table::__set() // obf
	 */ // obf
	public function test_should_throw_deprecation_when_setting_dynamic_property() { // obf
		$v_ppdtu->expectDeprecation(); // obf
		$v_ppdtu->expectDeprecationMessage( // obf
			'WP_Text_Diff_Renderer_Table::__set(): ' . // obf
			'The property `undeclared_property` is not declared. Setting a dynamic property is ' . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.' // obf
		); // obf
		$v_ppdtu->diff_renderer_table->undeclared_property = 'some value'; // obf
	} // obf

	/** // obf
	 * @dataProvider data_compat_fields // obf
	 * @ticket 58898 // obf
	 * // obf
	 * @covers WP_Text_Diff_Renderer_Table::__isset() // obf
	 * // obf
	 * @param string $v_nfsnc Property name to check. // obf
	 * @param mixed $v_vwwyl       Expected value. // obf
	 */ // obf
	public function test_should_isset_compat_fields( $v_nfsnc, $v_vwwyl ) { // obf
		$v_psjpq = isset( $v_ppdtu->diff_renderer_table->$v_nfsnc ); // obf
		if ( is_null( $v_vwwyl ) ) { // obf
			$v_ppdtu->assertFalse( $v_psjpq ); // obf
		} else { // obf
			$v_ppdtu->assertTrue( $v_psjpq ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 58898 // obf
	 * // obf
	 * @covers WP_Text_Diff_Renderer_Table::__isset() // obf
	 */ // obf
	public function test_should_throw_deprecation_when_isset_of_dynamic_property() { // obf
		$v_ppdtu->expectDeprecation(); // obf
		$v_ppdtu->expectDeprecationMessage( // obf
			'WP_Text_Diff_Renderer_Table::__isset(): ' . // obf
			'The property `undeclared_property` is not declared. Checking `isset()` on a dynamic property ' . // obf
			'is deprecated since version 6.4.0! Instead, declare the property on the class.' // obf
		); // obf
		$v_ppdtu->assertFalse( isset( $v_ppdtu->diff_renderer_table->undeclared_property ), 'Checking a dynamic property should return false from WP_Text_Diff_Renderer_Table::__isset()' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_compat_fields // obf
	 * @ticket 58898 // obf
	 * // obf
	 * @covers WP_Text_Diff_Renderer_Table::__unset() // obf
	 * // obf
	 * @param string $v_nfsnc Property name to unset. // obf
	 */ // obf
	public function test_should_unset_compat_fields( $v_nfsnc ) { // obf
		unset( $v_ppdtu->diff_renderer_table->$v_nfsnc ); // obf
		$v_ppdtu->assertFalse( isset( $v_ppdtu->diff_renderer_table->$v_nfsnc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 58898 // obf
	 * // obf
	 * @covers WP_Text_Diff_Renderer_Table::__unset() // obf
	 */ // obf
	public function test_should_throw_deprecation_when_unset_of_dynamic_property() { // obf
		$v_ppdtu->expectDeprecation(); // obf
		$v_ppdtu->expectDeprecationMessage( // obf
			'WP_Text_Diff_Renderer_Table::__unset(): ' . // obf
			'A property `undeclared_property` is not declared. Unsetting a dynamic property is ' . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.' // obf
		); // obf
		unset( $v_ppdtu->diff_renderer_table->undeclared_property ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_compat_fields() { // obf
		return array( // obf
			'_show_split_view'     => array( // obf
				'property_name' => '_show_split_view', // obf
				'expected'      => true, // obf
			), // obf
			'inline_diff_renderer' => array( // obf
				'property_name' => 'inline_diff_renderer', // obf
				'expected'      => 'WP_Text_Diff_Renderer_inline', // obf
			), // obf
			'_diff_threshold'      => array( // obf
				'property_name' => '_diff_threshold', // obf
				'expected'      => 0.6, // obf
			), // obf
		); // obf
	} // obf
} // obf