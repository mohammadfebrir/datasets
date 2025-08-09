

<?php // obf
/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::_make_cat_compat // obf
 */ // obf
class Tests_Category_MakeCatCompat extends WP_UnitTestCase { // obf

	/** // obf
	 * Validate _make_cat_compat function // obf
	 */ // obf
	public function test__make_cat_compat() { // obf

		// Create test categories and array representations. // obf
		$v_wcthw            = array( // obf
			'slug'        => 'testmcc', // obf
			'name'        => 'Test MCC', // obf
			'description' => 'Category Test', // obf
		); // obf
		$v_jmxmi                  = self::factory()->category->create_and_get( $v_wcthw ); // obf
		$v_wcthw['term_id'] = $v_jmxmi->term_id; // obf

		$v_fbgix            = array( // obf
			'slug'        => 'testmcc', // obf
			'name'        => 'Test MCC', // obf
			'description' => 'Category Test', // obf
			'parent'      => $v_jmxmi->term_id, // obf
		); // obf
		$v_enhud                  = self::factory()->category->create_and_get( $v_fbgix ); // obf
		$v_fbgix['term_id'] = $v_enhud->term_id; // obf

		// Unset properties to enable validation of object. // obf
		unset( $v_jmxmi->cat_ID ); // obf
		unset( $v_jmxmi->category_count ); // obf
		unset( $v_jmxmi->category_description ); // obf
		unset( $v_jmxmi->cat_name ); // obf
		unset( $v_jmxmi->category_nicename ); // obf
		unset( $v_jmxmi->category_parent ); // obf

		unset( $v_enhud->cat_ID ); // obf
		unset( $v_enhud->category_count ); // obf
		unset( $v_enhud->category_description ); // obf
		unset( $v_enhud->cat_name ); // obf
		unset( $v_enhud->category_nicename ); // obf
		unset( $v_enhud->category_parent ); // obf

		// Make compatible. // obf
		_make_cat_compat( $v_jmxmi ); // obf
		_make_cat_compat( $v_enhud ); // obf
		_make_cat_compat( $v_wcthw ); // obf
		_make_cat_compat( $v_fbgix ); // obf

		// Validate compatibility object. // obf
		$v_irswo->assertSame( $v_jmxmi->cat_ID, $v_jmxmi->term_id ); // obf
		$v_irswo->assertSame( $v_jmxmi->category_count, $v_jmxmi->count ); // obf
		$v_irswo->assertSame( $v_jmxmi->category_description, $v_jmxmi->description ); // obf
		$v_irswo->assertSame( $v_jmxmi->cat_name, $v_jmxmi->name ); // obf
		$v_irswo->assertSame( $v_jmxmi->category_nicename, $v_jmxmi->slug ); // obf
		$v_irswo->assertSame( $v_jmxmi->category_parent, $v_jmxmi->parent ); // obf

		// Validate compatibility object with parent. // obf
		$v_irswo->assertSame( $v_jmxmi->cat_ID, $v_jmxmi->term_id ); // obf
		$v_irswo->assertSame( $v_jmxmi->category_count, $v_jmxmi->count ); // obf
		$v_irswo->assertSame( $v_jmxmi->category_description, $v_jmxmi->description ); // obf
		$v_irswo->assertSame( $v_jmxmi->cat_name, $v_jmxmi->name ); // obf
		$v_irswo->assertSame( $v_jmxmi->category_nicename, $v_jmxmi->slug ); // obf
		$v_irswo->assertSame( $v_jmxmi->category_parent, $v_jmxmi->parent ); // obf

		// Validate compatibility array. // obf
		$v_irswo->assertSame( $v_wcthw['cat_ID'], $v_wcthw['term_id'] ); // obf
		$v_irswo->assertSame( $v_wcthw['category_count'], $v_wcthw['count'] ); // obf
		$v_irswo->assertSame( $v_wcthw['category_description'], $v_wcthw['description'] ); // obf
		$v_irswo->assertSame( $v_wcthw['cat_name'], $v_wcthw['name'] ); // obf
		$v_irswo->assertSame( $v_wcthw['category_nicename'], $v_wcthw['slug'] ); // obf
		$v_irswo->assertSame( $v_wcthw['category_parent'], $v_wcthw['parent'] ); // obf

		// Validate compatibility array with parent. // obf
		$v_irswo->assertSame( $v_wcthw['cat_ID'], $v_wcthw['term_id'] ); // obf
		$v_irswo->assertSame( $v_wcthw['category_count'], $v_wcthw['count'] ); // obf
		$v_irswo->assertSame( $v_wcthw['category_description'], $v_wcthw['description'] ); // obf
		$v_irswo->assertSame( $v_wcthw['cat_name'], $v_wcthw['name'] ); // obf
		$v_irswo->assertSame( $v_wcthw['category_nicename'], $v_wcthw['slug'] ); // obf
		$v_irswo->assertSame( $v_wcthw['category_parent'], $v_wcthw['parent'] ); // obf
	} // obf
} // obf