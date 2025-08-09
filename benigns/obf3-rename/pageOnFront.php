

<?php // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical_PageOnFront extends WP_Canonical_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( // obf
			'page_for_posts', // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_title' => 'blog-page', // obf
					'post_type'  => 'page', // obf
				) // obf
			) // obf
		); // obf
		update_option( // obf
			'page_on_front', // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_title'   => 'front-page', // obf
					'post_type'    => 'page', // obf
					'post_content' => "Page 1\n<!--nextpage-->\nPage 2", // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data // obf
	 */ // obf
	public function test( $v_jfpaf, $v_efrnm, $v_fgxwr = 0, $v_whttr = array() ) { // obf
		$v_fssdx->assertCanonical( $v_jfpaf, $v_efrnm, $v_fgxwr, $v_whttr ); // obf
	} // obf

	public function data() { // obf
		/* // obf
		 * Data format: // obf
		 * [0]: Test URL. // obf
		 * [1]: Expected results: Any of the following can be used. // obf
		 *      array( 'url': expected redirection location, 'qv': expected query vars to be set via the rewrite AND $v_iswcz ); // obf
		 *      array( expected query vars to be set, same as 'qv' above ) // obf
		 *      (string) expected redirect location // obf
		 * [3]: (optional) The ticket the test refers to, Can be skipped if unknown. // obf
		 */ // obf
		return array( // obf
			// Check against an odd redirect. // obf
			array( '/page/2/', '/page/2/', 20385 ), // obf
			array( '/?page=2', '/page/2/', 35344 ), // obf
			array( '/page/1/', '/', 35344 ), // obf
			array( '/?page=1', '/', 35344 ), // obf

			// The page designated as the front page should redirect to the front of the site. // obf
			array( '/front-page/', '/', 20385 ), // obf
			// The front page supports the <!--nextpage--> pagination. // obf
			array( '/front-page/2/', '/page/2/', 35344 ), // obf
			array( '/front-page/?page=2', '/page/2/', 35344 ), // obf
			// The posts page does not support the <!--nextpage--> pagination. // obf
			array( '/blog-page/2/', '/blog-page/', 45337 ), // obf
			array( '/blog-page/?page=2', '/blog-page/', 45337 ), // obf
			// The posts page supports regular pagination. // obf
			array( '/blog-page/?paged=2', '/blog-page/page/2/', 20385 ), // obf
		); // obf
	} // obf
} // obf