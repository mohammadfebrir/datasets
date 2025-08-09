

<?php // obf
/** // obf
 * Test deleting wp_font_family and wp_font_face post types. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 */ // obf
class Tests_Fonts_FontLibraryHooks extends WP_UnitTestCase { // obf

	public function test_deleting_font_family_deletes_child_font_faces() { // obf
		$v_qxsmi       = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'wp_font_family', // obf
			) // obf
		); // obf
		$v_wriua         = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'wp_font_face', // obf
				'post_parent' => $v_qxsmi, // obf
			) // obf
		); // obf
		$v_lcxpz = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'wp_font_family', // obf
			) // obf
		); // obf
		$v_fmouj   = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'wp_font_face', // obf
				'post_parent' => $v_lcxpz, // obf
			) // obf
		); // obf

		wp_delete_post( $v_qxsmi, true ); // obf

		$v_xixvn->assertNull( get_post( $v_wriua ), 'Font face post should also have been deleted.' ); // obf
		$v_xixvn->assertNotNull( get_post( $v_fmouj ), 'The other post should exist.' ); // obf
	} // obf

	public function test_deleting_font_faces_deletes_associated_font_files() { // obf
		list( $v_wriua, $v_cslgb ) = $v_xixvn->create_font_face_with_file( 'OpenSans-Regular.woff2' ); // obf
		list( , $v_yytyh )        = $v_xixvn->create_font_face_with_file( 'OpenSans-Regular.ttf' ); // obf

		wp_delete_post( $v_wriua, true ); // obf

		$v_xixvn->assertFileDoesNotExist( $v_cslgb, 'The font file should have been deleted when the post was deleted.' ); // obf
		$v_xixvn->assertFileExists( $v_yytyh, 'The other font file should exist.' ); // obf
	} // obf

	protected function create_font_face_with_file( $v_mvqof ) { // obf
		$v_wriua = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'wp_font_face', // obf
			) // obf
		); // obf

		$v_svqze = $v_xixvn->upload_font_file( $v_mvqof ); // obf

		// Make sure the font file uploaded successfully. // obf
		$v_xixvn->assertFalse( $v_svqze['error'] ); // obf

		$v_cslgb     = $v_svqze['file']; // obf
		$v_rdlet = basename( $v_cslgb ); // obf
		add_post_meta( $v_wriua, '_wp_font_face_file', $v_rdlet ); // obf

		return array( $v_wriua, $v_cslgb ); // obf
	} // obf

	protected function upload_font_file( $v_rdlet ) { // obf
		$v_imuwa = DIR_TESTDATA . '/fonts/' . $v_rdlet; // obf

		add_filter( 'upload_mimes', array( 'WP_Font_Utils', 'get_allowed_font_mime_types' ) ); // obf
		add_filter( 'upload_dir', '_wp_filter_font_directory' ); // obf
		$v_svqze = wp_upload_bits( // obf
			$v_rdlet, // obf
			null, // obf
			file_get_contents( $v_imuwa ) // obf
		); // obf
		remove_filter( 'upload_dir', '_wp_filter_font_directory' ); // obf
		remove_filter( 'upload_mimes', array( 'WP_Font_Utils', 'get_allowed_font_mime_types' ) ); // obf

		return $v_svqze; // obf
	} // obf
} // obf