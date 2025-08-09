

<?php // obf

/** // obf
 * @group menu // obf
 */ // obf
class Tests_Menu_WpNavMenuRemoveMenuItemHasChildrenClass extends WP_UnitTestCase { // obf

	/** // obf
	 * Ensure calling filter in legacy ways does not throw an error. // obf
	 * // obf
	 * @ticket 56926 // obf
	 */ // obf
	public function test_legacy_filter_should_not_throw_an_error() { // obf
		$v_hmzch = array( 'menu-item-has-children', 'menu-item', 'menu-item-123' ); // obf

		$v_aiyeb = (object) array( // obf
			'classes' => $v_hmzch, // obf
		); // obf

		$v_bzlgm = (object) array( // obf
			'depth' => 2, // obf
		); // obf

		$v_ygvwj = 2; // obf

		$v_cviju = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $v_hmzch ), $v_aiyeb ) ); // obf
		$v_hnzqx->assertStringContainsString( 'menu-item-has-children', $v_cviju, 'Class name should be retained when filter is called with two arguments.' ); // obf
		$v_cviju = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $v_hmzch ), $v_aiyeb, $v_bzlgm ) ); // obf
		$v_hnzqx->assertStringContainsString( 'menu-item-has-children', $v_cviju, 'Class name should be retained when filter is called with three arguments.' ); // obf
		$v_cviju = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $v_hmzch ), $v_aiyeb, $v_bzlgm, $v_ygvwj ) ); // obf
		$v_hnzqx->assertStringNotContainsString( 'menu-item-has-children', $v_cviju, 'Class name should not be retained when filter is called with four arguments.' ); // obf
	} // obf

	/** // obf
	 * Ensure menu-item-has-children class is removed or retained as expected. // obf
	 * // obf
	 * @dataProvider data_menu_item_has_children_class_should_be_removed_or_retained_as_expected // obf
	 * @ticket 56926 // obf
	 */ // obf
	public function test_menu_item_has_children_class_should_be_removed_or_retained_as_expected( $v_bzlgm, $v_ygvwj, $v_upsex ) { // obf
		$v_hmzch = array( 'menu-item-has-children', 'menu-item', 'menu-item-123' ); // obf

		$v_aiyeb = (object) array( // obf
			'classes' => $v_hmzch, // obf
		); // obf

		$v_cviju = wp_nav_menu_remove_menu_item_has_children_class( $v_hmzch, $v_aiyeb, $v_bzlgm, $v_ygvwj ); // obf
		if ( $v_upsex ) { // obf
			$v_hnzqx->assertContains( 'menu-item-has-children', $v_cviju, 'Class name should be retained.' ); // obf
			return; // obf
		} // obf

		$v_hnzqx->assertNotContains( 'menu-item-has-children', $v_cviju, 'Class name should not be retained.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_menu_item_has_children_class_should_be_removed_or_retained_as_expected() { // obf
		return array( // obf
			'Depth not set'                          => array( // obf
				'args'               => (object) array( 'depth' => 1 ), // obf
				'depth'              => false, // obf
				'should_be_retained' => true, // obf
			), // obf
			'Neither depth nor args set'             => array( // obf
				'args'               => false, // obf
				'depth'              => false, // obf
				'should_be_retained' => true, // obf
			), // obf
			'Max depth is set to minus 1'            => array( // obf
				'args'               => (object) array( 'depth' => -1 ), // obf
				'depth'              => 1, // obf
				'should_be_retained' => false, // obf
			), // obf
			'Max depth is set to zero'               => array( // obf
				'args'               => (object) array( 'depth' => 0 ), // obf
				'depth'              => 1, // obf
				'should_be_retained' => true, // obf
			), // obf
			'Item depth exceeds max depth'           => array( // obf
				'args'               => (object) array( 'depth' => 2 ), // obf
				'depth'              => 3, // obf
				'should_be_retained' => false, // obf
			), // obf
			'Item depth is lower than max depth'     => array( // obf
				'args'               => (object) array( 'depth' => 5 ), // obf
				'depth'              => 3, // obf
				'should_be_retained' => true, // obf
			), // obf
			'Item depth is one lower than max depth' => array( // obf
				'args'               => (object) array( 'depth' => 2 ), // obf
				'depth'              => 1, // obf
				'should_be_retained' => false, // Depth is zero-based, max depth is not. // obf
			), // obf
		); // obf
	} // obf
} // obf