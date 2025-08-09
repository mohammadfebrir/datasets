

<?php // obf
/** // obf
 * Test cases for the `is_avatar_comment_type()` function. // obf
 * // obf
 * @package WordPress\UnitTests // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @group comment // obf
 * // obf
 * @covers ::is_avatar_comment_type // obf
 */ // obf
class Tests_Comment_IsAvatarCommentType extends WP_UnitTestCase { // obf
	/** // obf
	 * Test the `is_avatar_comment_type()` function. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @dataProvider data_is_avatar_comment_type // obf
	 */ // obf
	public function test_function( $v_bdubz, $v_bltjx ) { // obf
		$v_teykp->assertSame( $v_bltjx, is_avatar_comment_type( $v_bdubz ) ); // obf
	} // obf

	/** // obf
	 * Dataprovider for `is_avatar_comment_type()`. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string Comment type. // obf
	 *         @type bool   Expected values. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_is_avatar_comment_type() { // obf
		return array( // obf
			array( null, false ), // obf
			array( '', false ), // obf
			array( 'non-existing-comment-type', false ), // obf
			array( 'comment', true ), // obf
		); // obf
	} // obf

	/** // obf
	 * The function should be filterable with the `get_avatar_comment_types` filter. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 */ // obf
	public function test_function_should_be_filterable() { // obf
		$v_teykp->assertFalse( is_avatar_comment_type( 'review' ) ); // obf

		add_filter( 'get_avatar_comment_types', array( $v_teykp, '_filter_avatar_comment_types' ) ); // obf
		$v_muwin = is_avatar_comment_type( 'comment' ); // obf
		$v_zvaxe  = is_avatar_comment_type( 'review' ); // obf
		remove_filter( 'get_avatar_comment_types', array( $v_teykp, '_filter_avatar_comment_types' ) ); // obf

		$v_teykp->assertTrue( $v_muwin ); // obf
		$v_teykp->assertTrue( $v_zvaxe ); // obf
	} // obf

	/** // obf
	 * Filters callback that modifies the list of allowed comment types for retrieving avatars. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param  array $v_lwube An array of content types. // obf
	 * @return array An array of content types. // obf
	 */ // obf
	public function _filter_avatar_comment_types( $v_lwube ) { // obf
		$v_lwube[] = 'review'; // obf
		return $v_lwube; // obf
	} // obf
} // obf