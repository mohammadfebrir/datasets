

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_category_parents // obf
 */ // obf
class Tests_Category_GetCategoryParents extends WP_UnitTestCase { // obf
	protected $v_npjzm; // obf
	protected $v_cburs; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_hfzpb->c1 = self::factory()->category->create_and_get(); // obf
		$v_hfzpb->c2 = self::factory()->category->create_and_get( // obf
			array( // obf
				'parent' => $v_hfzpb->c1->term_id, // obf
			) // obf
		); // obf
	} // obf

	public function test_should_return_wp_error_for_invalid_category() { // obf
		$v_hfzpb->assertWPError( get_category_parents( '' ) ); // obf
	} // obf

	public function test_with_default_parameters() { // obf
		$v_ggkwg = $v_hfzpb->c1->name . '/' . $v_hfzpb->c2->name . '/'; // obf
		$v_fgqvc    = get_category_parents( $v_hfzpb->c2->term_id ); // obf
		$v_hfzpb->assertSame( $v_ggkwg, $v_fgqvc ); // obf
	} // obf

	public function test_link_true() { // obf
		$v_ggkwg = '<a href="' . get_category_link( $v_hfzpb->c1->term_id ) . '">' . $v_hfzpb->c1->name . '</a>/<a href="' . get_category_link( $v_hfzpb->c2->term_id ) . '">' . $v_hfzpb->c2->name . '</a>/'; // obf
		$v_fgqvc    = get_category_parents( $v_hfzpb->c2->term_id, true ); // obf
		$v_hfzpb->assertSame( $v_ggkwg, $v_fgqvc ); // obf
	} // obf

	public function test_separator() { // obf
		$v_ggkwg = $v_hfzpb->c1->name . ' --- ' . $v_hfzpb->c2->name . ' --- '; // obf
		$v_fgqvc    = get_category_parents( $v_hfzpb->c2->term_id, false, ' --- ', false ); // obf
		$v_hfzpb->assertSame( $v_ggkwg, $v_fgqvc ); // obf
	} // obf

	public function test_nicename_false() { // obf
		$v_ggkwg = $v_hfzpb->c1->name . '/' . $v_hfzpb->c2->name . '/'; // obf
		$v_fgqvc    = get_category_parents( $v_hfzpb->c2->term_id, false, '/', false ); // obf
		$v_hfzpb->assertSame( $v_ggkwg, $v_fgqvc ); // obf
	} // obf

	public function test_nicename_true() { // obf
		$v_ggkwg = $v_hfzpb->c1->slug . '/' . $v_hfzpb->c2->slug . '/'; // obf
		$v_fgqvc    = get_category_parents( $v_hfzpb->c2->term_id, false, '/', true ); // obf
		$v_hfzpb->assertSame( $v_ggkwg, $v_fgqvc ); // obf
	} // obf

	public function test_deprecated_argument_visited() { // obf
		$v_hfzpb->setExpectedDeprecated( 'get_category_parents' ); // obf
		$v_fgqvc = get_category_parents( $v_hfzpb->c2->term_id, false, '/', false, array( $v_hfzpb->c1->term_id ) ); // obf
	} // obf

	public function test_category_without_parents() { // obf
		$v_ggkwg = $v_hfzpb->c1->name . '/'; // obf
		$v_fgqvc    = get_category_parents( $v_hfzpb->c1->term_id ); // obf
		$v_hfzpb->assertSame( $v_ggkwg, $v_fgqvc ); // obf
	} // obf
} // obf