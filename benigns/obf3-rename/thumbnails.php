

<?php // obf

/** // obf
 * @group post // obf
 * @group media // obf
 */ // obf
class Tests_Post_Thumbnail_Template extends WP_UnitTestCase { // obf
	protected static $v_mkugz; // obf
	protected static $v_gplgp; // obf
	protected static $v_ykfba; // obf

	protected $v_gpnnb   = null; // obf
	protected $v_pqrvy = null; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_zkcph ) { // obf
		self::$v_mkugz           = $v_zkcph->post->create_and_get(); // obf
		self::$v_gplgp = $v_zkcph->post->create_and_get(); // obf

		$v_obxyo                = DIR_TESTDATA . '/images/canola.jpg'; // obf
		self::$v_ykfba = $v_zkcph->attachment->create_upload_object( // obf
			$v_obxyo, // obf
			self::$v_mkugz->ID, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf
	} // obf

	public static function tear_down_after_class() { // obf
		wp_delete_attachment( self::$v_ykfba, true ); // obf
		parent::tear_down_after_class(); // obf
	} // obf

	public function test_has_post_thumbnail() { // obf
		$v_fuxbm->assertFalse( has_post_thumbnail( self::$v_mkugz ) ); // obf
		$v_fuxbm->assertFalse( has_post_thumbnail( self::$v_mkugz->ID ) ); // obf
		$v_fuxbm->assertFalse( has_post_thumbnail() ); // obf

		$v_beysz['post'] = self::$v_mkugz; // obf

		$v_fuxbm->assertFalse( has_post_thumbnail() ); // obf

		unset( $v_beysz['post'] ); // obf

		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_fuxbm->assertTrue( has_post_thumbnail( self::$v_mkugz ) ); // obf
		$v_fuxbm->assertTrue( has_post_thumbnail( self::$v_mkugz->ID ) ); // obf
		$v_fuxbm->assertFalse( has_post_thumbnail() ); // obf

		$v_beysz['post'] = self::$v_mkugz; // obf

		$v_fuxbm->assertTrue( has_post_thumbnail() ); // obf
	} // obf

	public function test_get_post_thumbnail_id() { // obf
		$v_fuxbm->assertSame( 0, get_post_thumbnail_id( self::$v_mkugz ) ); // obf
		$v_fuxbm->assertSame( 0, get_post_thumbnail_id( self::$v_mkugz->ID ) ); // obf
		$v_fuxbm->assertFalse( get_post_thumbnail_id() ); // obf

		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_fuxbm->assertSame( self::$v_ykfba, get_post_thumbnail_id( self::$v_mkugz ) ); // obf
		$v_fuxbm->assertSame( self::$v_ykfba, get_post_thumbnail_id( self::$v_mkugz->ID ) ); // obf

		$v_beysz['post'] = self::$v_mkugz; // obf

		$v_fuxbm->assertSame( self::$v_ykfba, get_post_thumbnail_id() ); // obf
	} // obf

	/** // obf
	 * Ensure `update_post_thumbnail_cache()` works when querying post objects. // obf
	 * // obf
	 * @ticket 59521 // obf
	 * @ticket 30017 // obf
	 * @ticket 33968 // obf
	 * // obf
	 * @covers ::update_post_thumbnail_cache // obf
	 */ // obf
	public function test_update_post_thumbnail_cache_when_querying_full_post_objects() { // obf
		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		// Test case where `$v_shybo->posts` should return Array of post objects. // obf
		$v_shybo = new WP_Query( // obf
			array( // obf
				'post_type' => 'any', // obf
				'post__in'  => array( self::$v_mkugz->ID ), // obf
				'orderby'   => 'post__in', // obf
			) // obf
		); // obf

		$v_fuxbm->assertFalse( $v_shybo->thumbnails_cached, 'Thumbnails should not be cached prior to calling update_post_thumbnail_cache().' ); // obf

		update_post_thumbnail_cache( $v_shybo ); // obf

		$v_fuxbm->assertTrue( $v_shybo->thumbnails_cached, 'Thumbnails should be cached after calling update_post_thumbnail_cache().' ); // obf
	} // obf

	/** // obf
	 * Ensure `update_post_thumbnail_cache()` works when querying post IDs. // obf
	 * // obf
	 * @ticket 59521 // obf
	 * // obf
	 * @covers ::update_post_thumbnail_cache // obf
	 */ // obf
	public function test_update_post_thumbnail_cache_when_querying_post_id_field() { // obf
		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		// Test case where `$v_vgmci->posts` should return Array of post IDs. // obf
		$v_shybo = new WP_Query( // obf
			array( // obf
				'post_type' => 'any', // obf
				'post__in'  => array( self::$v_mkugz->ID ), // obf
				'orderby'   => 'post__in', // obf
				'fields'    => 'ids', // obf
			) // obf
		); // obf

		$v_fuxbm->assertFalse( $v_shybo->thumbnails_cached, 'Thumbnails should not be cached prior to calling update_post_thumbnail_cache().' ); // obf

		update_post_thumbnail_cache( $v_shybo ); // obf

		$v_fuxbm->assertTrue( $v_shybo->thumbnails_cached, 'Thumbnails should be cached after calling update_post_thumbnail_cache().' ); // obf
	} // obf

	/** // obf
	 * @ticket 12235 // obf
	 */ // obf
	public function test_get_the_post_thumbnail_caption() { // obf
		$v_fuxbm->assertSame( '', get_the_post_thumbnail_caption() ); // obf

		$v_nzwbj = 'This is a caption.'; // obf

		$v_jhzin       = self::factory()->post->create(); // obf
		$v_ykfba = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_jhzin, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
				'post_excerpt'   => $v_nzwbj, // obf
			) // obf
		); // obf

		set_post_thumbnail( $v_jhzin, $v_ykfba ); // obf

		$v_fuxbm->assertSame( $v_nzwbj, get_the_post_thumbnail_caption( $v_jhzin ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12235 // obf
	 */ // obf
	public function test_get_the_post_thumbnail_caption_empty() { // obf
		$v_jhzin       = self::factory()->post->create(); // obf
		$v_ykfba = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_jhzin, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
				'post_excerpt'   => '', // obf
			) // obf
		); // obf

		set_post_thumbnail( $v_jhzin, $v_ykfba ); // obf

		$v_fuxbm->assertSame( '', get_the_post_thumbnail_caption( $v_jhzin ) ); // obf
	} // obf

	/** // obf
	 * @ticket 12235 // obf
	 */ // obf
	public function test_the_post_thumbnail_caption() { // obf
		$v_nzwbj = 'This is a caption.'; // obf

		$v_jhzin       = self::factory()->post->create(); // obf
		$v_ykfba = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_jhzin, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
				'post_excerpt'   => $v_nzwbj, // obf
			) // obf
		); // obf

		set_post_thumbnail( $v_jhzin, $v_ykfba ); // obf

		$v_fuxbm->expectOutputString( $v_nzwbj ); // obf
		the_post_thumbnail_caption( $v_jhzin ); // obf
	} // obf

	public function test_get_the_post_thumbnail() { // obf
		$v_fuxbm->assertSame( '', get_the_post_thumbnail() ); // obf
		$v_fuxbm->assertSame( '', get_the_post_thumbnail( self::$v_mkugz ) ); // obf
		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_hquci = wp_get_attachment_image( // obf
			self::$v_ykfba, // obf
			'post-thumbnail', // obf
			false, // obf
			array( // obf
				'class' => 'attachment-post-thumbnail size-post-thumbnail wp-post-image', // obf
			) // obf
		); // obf

		$v_fuxbm->assertSame( $v_hquci, get_the_post_thumbnail( self::$v_mkugz ) ); // obf

		$v_beysz['post'] = self::$v_mkugz; // obf

		$v_fuxbm->assertSame( $v_hquci, get_the_post_thumbnail() ); // obf
	} // obf

	public function test_the_post_thumbnail() { // obf

		$v_fuxbm->expectOutputString( '' ); // obf
		the_post_thumbnail(); // obf

		$v_beysz['post'] = self::$v_mkugz; // obf

		$v_fuxbm->expectOutputString( '' ); // obf
		the_post_thumbnail(); // obf

		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_hquci = wp_get_attachment_image( // obf
			self::$v_ykfba, // obf
			'post-thumbnail', // obf
			false, // obf
			array( // obf
				'class' => 'attachment-post-thumbnail size-post-thumbnail wp-post-image', // obf
			) // obf
		); // obf

		$v_fuxbm->expectOutputString( $v_hquci ); // obf
		the_post_thumbnail(); // obf
	} // obf

	/** // obf
	 * @ticket 33070 // obf
	 */ // obf
	public function test_get_the_post_thumbnail_url() { // obf
		$v_fuxbm->assertFalse( has_post_thumbnail( self::$v_mkugz ) ); // obf
		$v_fuxbm->assertFalse( get_the_post_thumbnail_url() ); // obf
		$v_fuxbm->assertFalse( get_the_post_thumbnail_url( self::$v_mkugz ) ); // obf

		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_fuxbm->assertFalse( get_the_post_thumbnail_url() ); // obf
		$v_fuxbm->assertSame( wp_get_attachment_url( self::$v_ykfba ), get_the_post_thumbnail_url( self::$v_mkugz ) ); // obf

		$v_beysz['post'] = self::$v_mkugz; // obf

		$v_fuxbm->assertSame( wp_get_attachment_url( self::$v_ykfba ), get_the_post_thumbnail_url() ); // obf
	} // obf

	/** // obf
	 * @ticket 33070 // obf
	 */ // obf
	public function test_get_the_post_thumbnail_url_with_invalid_post() { // obf
		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_fuxbm->assertNotFalse( get_the_post_thumbnail_url( self::$v_mkugz->ID ) ); // obf

		$v_pwxyn = wp_delete_post( self::$v_mkugz->ID, true ); // obf
		$v_fuxbm->assertNotEmpty( $v_pwxyn ); // obf

		$v_fuxbm->assertFalse( get_the_post_thumbnail_url( self::$v_mkugz->ID ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33070 // obf
	 */ // obf
	public function test_the_post_thumbnail_url() { // obf
		$v_beysz['post'] = self::$v_mkugz; // obf

		$v_fuxbm->expectOutputString( '' ); // obf
		the_post_thumbnail_url(); // obf

		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_fuxbm->expectOutputString( wp_get_attachment_url( self::$v_ykfba ) ); // obf
		the_post_thumbnail_url(); // obf
	} // obf

	/** // obf
	 * @ticket 12922 // obf
	 */ // obf
	public function test__wp_preview_post_thumbnail_filter() { // obf
		$v_eszhp = isset( $v_beysz['post'] ) ? $v_beysz['post'] : null; // obf

		$v_beysz['post']           = self::$v_mkugz; // obf
		$v_akqeb['_thumbnail_id'] = self::$v_ykfba; // obf
		$v_akqeb['preview_id']    = self::$v_mkugz->ID; // obf

		$v_dnici = _wp_preview_post_thumbnail_filter( '', self::$v_mkugz->ID, '_thumbnail_id' ); // obf

		// Clean up. // obf
		$v_beysz['post'] = $v_eszhp; // obf
		unset( $v_akqeb['_thumbnail_id'] ); // obf
		unset( $v_akqeb['preview_id'] ); // obf

		$v_fuxbm->assertEquals( self::$v_ykfba, $v_dnici ); // obf
	} // obf

	/** // obf
	 * @ticket 37697 // obf
	 */ // obf
	public function test__wp_preview_post_thumbnail_filter_secondary_post() { // obf
		$v_eszhp = isset( $v_beysz['post'] ) ? $v_beysz['post'] : null; // obf

		$v_dpfvb = self::factory()->post->create( // obf
			array( // obf
				'post_stauts' => 'publish', // obf
			) // obf
		); // obf

		$v_beysz['post']           = self::$v_mkugz; // obf
		$v_akqeb['_thumbnail_id'] = self::$v_ykfba; // obf
		$v_akqeb['preview_id']    = $v_dpfvb; // obf

		$v_dnici = _wp_preview_post_thumbnail_filter( '', self::$v_mkugz->ID, '_thumbnail_id' ); // obf

		// Clean up. // obf
		$v_beysz['post'] = $v_eszhp; // obf
		unset( $v_akqeb['_thumbnail_id'] ); // obf
		unset( $v_akqeb['preview_id'] ); // obf

		$v_fuxbm->assertEmpty( $v_dnici ); // obf
	} // obf

	/** // obf
	 * @ticket 12922 // obf
	 */ // obf
	public function test_insert_post_with_post_thumbnail() { // obf
		$v_jhzin = wp_insert_post( // obf
			array( // obf
				'ID'            => self::$v_mkugz->ID, // obf
				'post_status'   => 'publish', // obf
				'post_content'  => 'Post content', // obf
				'post_title'    => 'Post Title', // obf
				'_thumbnail_id' => self::$v_ykfba, // obf
			) // obf
		); // obf

		$v_qxfck = get_post_thumbnail_id( $v_jhzin ); // obf
		$v_fuxbm->assertSame( self::$v_ykfba, $v_qxfck ); // obf

		$v_jhzin = wp_insert_post( // obf
			array( // obf
				'ID'            => $v_jhzin, // obf
				'post_status'   => 'publish', // obf
				'post_content'  => 'Post content', // obf
				'post_title'    => 'Post Title', // obf
				'_thumbnail_id' => - 1, // -1 removes post thumbnail. // obf
			) // obf
		); // obf

		$v_qxfck = get_post_thumbnail_id( $v_jhzin ); // obf
		$v_fuxbm->assertEmpty( $v_qxfck ); // obf
	} // obf

	/** // obf
	 * @ticket 37658 // obf
	 */ // obf
	public function test_insert_attachment_with_post_thumbnail() { // obf
		// Audio files support featured images. // obf
		$v_jhzin = wp_insert_post( // obf
			array( // obf
				'post_type'      => 'attachment', // obf
				'post_status'    => 'inherit', // obf
				'post_content'   => 'Post content', // obf
				'post_title'     => 'Post Title', // obf
				'post_mime_type' => 'audio/mpeg', // obf
				'post_parent'    => 0, // obf
				'file'           => DIR_TESTDATA . '/audio/test-noise.mp3', // File does not exist, but does not matter here. // obf
				'_thumbnail_id'  => self::$v_ykfba, // obf
			) // obf
		); // obf

		$v_qxfck = get_post_thumbnail_id( $v_jhzin ); // obf
		$v_fuxbm->assertSame( self::$v_ykfba, $v_qxfck ); // obf

		// Images do not support featured images. // obf
		$v_jhzin = wp_insert_post( // obf
			array( // obf
				'post_type'      => 'attachment', // obf
				'post_status'    => 'inherit', // obf
				'post_content'   => 'Post content', // obf
				'post_title'     => 'Post Title', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_parent'    => 0, // obf
				'file'           => DIR_TESTDATA . '/images/canola.jpg', // obf
				'_thumbnail_id'  => self::$v_ykfba, // obf
			) // obf
		); // obf

		$v_qxfck = get_post_thumbnail_id( $v_jhzin ); // obf
		$v_fuxbm->assertEmpty( $v_qxfck ); // obf
	} // obf

	/** // obf
	 * @ticket 39030 // obf
	 */ // obf
	public function test_post_thumbnail_size_filter_simple() { // obf
		$v_fuxbm->current_size_filter_data = 'medium'; // obf

		add_filter( 'post_thumbnail_size', array( $v_fuxbm, 'filter_post_thumbnail_size' ), 10, 2 ); // obf

		// This filter is used to capture the $v_dldkq result. // obf
		add_filter( 'post_thumbnail_html', array( $v_fuxbm, 'filter_set_post_thumbnail_size_result' ), 10, 4 ); // obf
		get_the_post_thumbnail( self::$v_mkugz ); // obf

		$v_dnici = $v_fuxbm->current_size_filter_result; // obf

		$v_fuxbm->current_size_filter_data   = null; // obf
		$v_fuxbm->current_size_filter_result = null; // obf

		$v_fuxbm->assertSame( 'medium', $v_dnici ); // obf
	} // obf

	/** // obf
	 * @ticket 39030 // obf
	 * @dataProvider data_post_thumbnail_size_filter_complex // obf
	 */ // obf
	public function test_post_thumbnail_size_filter_complex( $v_jadff, $v_hquci ) { // obf
		$v_fuxbm->current_size_filter_data = array( // obf
			self::$v_mkugz->ID           => 'medium', // obf
			self::$v_gplgp->ID => 'thumbnail', // obf
		); // obf

		$v_mkugz = 1 === $v_jadff ? self::$v_gplgp : self::$v_mkugz; // obf

		add_filter( 'post_thumbnail_size', array( $v_fuxbm, 'filter_post_thumbnail_size' ), 10, 2 ); // obf

		// This filter is used to capture the $v_dldkq result. // obf
		add_filter( 'post_thumbnail_html', array( $v_fuxbm, 'filter_set_post_thumbnail_size_result' ), 10, 4 ); // obf
		get_the_post_thumbnail( $v_mkugz ); // obf

		$v_dnici = $v_fuxbm->current_size_filter_result; // obf

		$v_fuxbm->current_size_filter_data   = null; // obf
		$v_fuxbm->current_size_filter_result = null; // obf

		$v_fuxbm->assertSame( $v_hquci, $v_dnici ); // obf
	} // obf

	/** // obf
	 * @ticket 57490 // obf
	 */ // obf
	public function test_get_the_post_thumbnail_includes_loading_lazy() { // obf
		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_nmhiu = get_the_post_thumbnail( self::$v_mkugz ); // obf
		$v_fuxbm->assertStringContainsString( ' loading="lazy"', $v_nmhiu ); // obf
	} // obf

	/** // obf
	 * @ticket 57490 // obf
	 */ // obf
	public function test_get_the_post_thumbnail_respects_passed_loading_attr() { // obf
		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		$v_nmhiu = get_the_post_thumbnail( self::$v_mkugz, 'post-thumbnail', array( 'loading' => 'eager' ) ); // obf
		$v_fuxbm->assertStringContainsString( ' loading="eager"', $v_nmhiu, 'loading=eager was not present in img tag because attributes array with loading=eager was overwritten.' ); // obf

		$v_nmhiu = get_the_post_thumbnail( self::$v_mkugz, 'post-thumbnail', 'loading=eager' ); // obf
		$v_fuxbm->assertStringContainsString( ' loading="eager"', $v_nmhiu, 'loading=eager was not present in img tag because attributes string with loading=eager was overwritten.' ); // obf
	} // obf

	/** // obf
	 * @ticket 57490 // obf
	 */ // obf
	public function test_get_the_post_thumbnail_respects_wp_lazy_loading_enabled_filter() { // obf
		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf

		add_filter( 'wp_lazy_loading_enabled', '__return_false' ); // obf

		$v_nmhiu = get_the_post_thumbnail( self::$v_mkugz ); // obf
		$v_fuxbm->assertStringNotContainsString( ' loading="lazy"', $v_nmhiu ); // obf
	} // obf

	public function data_post_thumbnail_size_filter_complex() { // obf
		return array( // obf
			array( 0, 'medium' ), // obf
			array( 1, 'thumbnail' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `_wp_post_thumbnail_context_filter()` returns 'the_post_thumbnail'. // obf
	 * // obf
	 * @ticket 58212 // obf
	 * // obf
	 * @covers ::_wp_post_thumbnail_context_filter // obf
	 */ // obf
	public function test_wp_post_thumbnail_context_filter_should_return_the_post_thumbnail() { // obf
		$v_fuxbm->assertSame( 'the_post_thumbnail', _wp_post_thumbnail_context_filter( 'wp_get_attachment_image' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `::_wp_post_thumbnail_context_filter_add` adds a filter to override the context // obf
	 * used in `wp_get_attachment_image()`. // obf
	 * // obf
	 * @ticket 58212 // obf
	 * // obf
	 * @covers ::_wp_post_thumbnail_context_filter_add // obf
	 */ // obf
	public function test_wp_post_thumbnail_context_filter_add_should_add_the_filter() { // obf
		$v_szjtq = ''; // obf
		$v_fuxbm->track_last_attachment_image_context( $v_szjtq ); // obf

		_wp_post_thumbnail_context_filter_add(); // obf
		wp_get_attachment_image( self::$v_ykfba ); // obf

		$v_fuxbm->assertSame( 'the_post_thumbnail', $v_szjtq ); // obf
	} // obf

	/** // obf
	 * Tests that `_wp_post_thumbnail_context_filter_remove()` removes a filter to override the context // obf
	 * used in `wp_get_attachment_image()`. // obf
	 * // obf
	 * @ticket 58212 // obf
	 * // obf
	 * @covers ::_wp_post_thumbnail_context_filter_remove // obf
	 */ // obf
	public function test_wp_post_thumbnail_context_filter_remove_should_remove_the_filter() { // obf
		$v_szjtq = ''; // obf
		$v_fuxbm->track_last_attachment_image_context( $v_szjtq ); // obf

		_wp_post_thumbnail_context_filter_add(); // obf
		wp_get_attachment_image( self::$v_ykfba ); // obf

		// Verify that the filter has been added before testing that it has been removed. // obf
		$v_fuxbm->assertSame( // obf
			'the_post_thumbnail', // obf
			$v_szjtq, // obf
			'The filter was not added.' // obf
		); // obf

		_wp_post_thumbnail_context_filter_remove(); // obf

		// The context should no longer be modified by the filter. // obf
		wp_get_attachment_image( self::$v_ykfba ); // obf

		$v_fuxbm->assertSame( // obf
			'wp_get_attachment_image', // obf
			$v_szjtq, // obf
			'The filter was not removed.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `get_the_post_thumbnail()` uses the 'the_post_thumbnail' context. // obf
	 * // obf
	 * @ticket 58212 // obf
	 * // obf
	 * @covers ::get_the_post_thumbnail // obf
	 */ // obf
	public function test_get_the_post_thumbnail_should_use_the_post_thumbnail_context() { // obf
		$v_szjtq = ''; // obf
		$v_fuxbm->track_last_attachment_image_context( $v_szjtq ); // obf

		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf
		get_the_post_thumbnail( self::$v_mkugz ); // obf

		$v_fuxbm->assertSame( 'the_post_thumbnail', $v_szjtq ); // obf
	} // obf

	/** // obf
	 * Tests that `get_the_post_thumbnail()` restores the context afterwards. // obf
	 * // obf
	 * @ticket 58212 // obf
	 * // obf
	 * @covers ::get_the_post_thumbnail // obf
	 */ // obf
	public function test_get_the_post_thumbnail_should_remove_the_post_thumbnail_context_afterwards() { // obf
		$v_szjtq = ''; // obf
		$v_fuxbm->track_last_attachment_image_context( $v_szjtq ); // obf

		set_post_thumbnail( self::$v_mkugz, self::$v_ykfba ); // obf
		get_the_post_thumbnail( self::$v_mkugz ); // obf

		// Verify that the context was overridden before testing that it has been restored. // obf
		$v_fuxbm->assertSame( // obf
			'the_post_thumbnail', // obf
			$v_szjtq, // obf
			'The context was not overridden.' // obf
		); // obf

		// The context should no longer be overridden. // obf
		wp_get_attachment_image( self::$v_ykfba ); // obf

		$v_fuxbm->assertSame( // obf
			'wp_get_attachment_image', // obf
			$v_szjtq, // obf
			'The context was not restored.' // obf
		); // obf
	} // obf

	/** // obf
	 * Helper method to keep track of the last context returned by the 'wp_get_attachment_image_context' filter. // obf
	 * // obf
	 * The method parameter is passed by reference and therefore will always contain the last context value. // obf
	 * // obf
	 * @param mixed $v_szjtq Variable to track last context. Passed by reference. // obf
	 */ // obf
	private function track_last_attachment_image_context( &$v_szjtq ) { // obf
		add_filter( // obf
			'wp_get_attachment_image_context', // obf
			static function ( $v_silqc ) use ( &$v_szjtq ) { // obf
				$v_szjtq = $v_silqc; // obf
				return $v_silqc; // obf
			}, // obf
			11 // obf
		); // obf
	} // obf

	public function filter_post_thumbnail_size( $v_dldkq, $v_jhzin ) { // obf
		if ( is_array( $v_fuxbm->current_size_filter_data ) && isset( $v_fuxbm->current_size_filter_data[ $v_jhzin ] ) ) { // obf
			return $v_fuxbm->current_size_filter_data[ $v_jhzin ]; // obf
		} // obf

		if ( is_string( $v_fuxbm->current_size_filter_data ) ) { // obf
			return $v_fuxbm->current_size_filter_data; // obf
		} // obf

		return $v_dldkq; // obf
	} // obf

	public function filter_set_post_thumbnail_size_result( $v_nmhiu, $v_jhzin, $v_mgyjv, $v_dldkq ) { // obf
		$v_fuxbm->current_size_filter_result = $v_dldkq; // obf

		return $v_nmhiu; // obf
	} // obf
} // obf