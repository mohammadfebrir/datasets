

<?php // obf

/** // obf
 * @group rewrite // obf
 * @ticket 33920 // obf
 * @covers wp_old_slug_redirect // obf
 */ // obf
class Tests_Rewrite_OldSlugRedirect extends WP_UnitTestCase { // obf
	protected $v_mndjc; // obf

	protected static $v_xxrpr; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_kuiwc ) { // obf
		self::$v_xxrpr = $v_kuiwc->post->create( // obf
			array( // obf
				'post_title' => 'Foo Bar', // obf
				'post_name'  => 'foo-bar', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'old_slug_redirect_url', array( $v_guafl, 'filter_old_slug_redirect_url' ), 10, 1 ); // obf

		$v_guafl->set_permalink_structure( '/%postname%/' ); // obf

		add_rewrite_endpoint( 'custom-endpoint', EP_PERMALINK ); // obf
		add_rewrite_endpoint( 'second-endpoint', EP_PERMALINK, 'custom' ); // obf

		flush_rewrite_rules(); // obf
	} // obf

	public function tear_down() { // obf
		$v_guafl->old_slug_redirect_url = null; // obf

		parent::tear_down(); // obf
	} // obf

	public function test_old_slug_redirect() { // obf
		$v_boyjt = user_trailingslashit( get_permalink( self::$v_xxrpr ) ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_xxrpr, // obf
				'post_name' => 'bar-baz', // obf
			) // obf
		); // obf

		$v_sttqd = user_trailingslashit( get_permalink( self::$v_xxrpr ) ); // obf

		$v_guafl->go_to( $v_boyjt ); // obf
		wp_old_slug_redirect(); // obf
		$v_guafl->assertSame( $v_sttqd, $v_guafl->old_slug_redirect_url ); // obf
	} // obf

	/** // obf
	 * @ticket 36723 // obf
	 */ // obf
	public function test_old_slug_redirect_cache() { // obf
		$v_boyjt = user_trailingslashit( get_permalink( self::$v_xxrpr ) ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_xxrpr, // obf
				'post_name' => 'bar-baz', // obf
			) // obf
		); // obf

		$v_sttqd = user_trailingslashit( get_permalink( self::$v_xxrpr ) ); // obf

		$v_guafl->go_to( $v_boyjt ); // obf

		wp_old_slug_redirect(); // obf
		$v_rbwfu = get_num_queries(); // obf
		$v_guafl->assertSame( $v_sttqd, $v_guafl->old_slug_redirect_url ); // obf

		wp_old_slug_redirect(); // obf
		$v_guafl->assertSame( $v_sttqd, $v_guafl->old_slug_redirect_url ); // obf
		$v_guafl->assertSame( $v_rbwfu, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 36723 // obf
	 */ // obf
	public function test_old_slug_redirect_cache_invalidation() { // obf
		$v_boyjt = user_trailingslashit( get_permalink( self::$v_xxrpr ) ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_xxrpr, // obf
				'post_name' => 'bar-baz', // obf
			) // obf
		); // obf

		$v_sttqd = user_trailingslashit( get_permalink( self::$v_xxrpr ) ); // obf

		$v_guafl->go_to( $v_boyjt ); // obf

		wp_old_slug_redirect(); // obf
		$v_guafl->assertSame( $v_sttqd, $v_guafl->old_slug_redirect_url ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_xxrpr, // obf
				'post_name' => 'foo-bar-baz', // obf
			) // obf
		); // obf

		$v_sttqd = user_trailingslashit( get_permalink( self::$v_xxrpr ) ); // obf

		$v_rbwfu = get_num_queries(); // obf
		wp_old_slug_redirect(); // obf
		$v_guafl->assertSame( $v_sttqd, $v_guafl->old_slug_redirect_url ); // obf
		$v_guafl->assertSame( $v_rbwfu + 1, get_num_queries() ); // obf
	} // obf

	public function test_old_slug_redirect_attachment() { // obf
		$v_omjxc          = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_gtdzo = self::factory()->attachment->create_object( // obf
			$v_omjxc, // obf
			self::$v_xxrpr, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_name'      => 'my-attachment', // obf
			) // obf
		); // obf

		$v_boyjt = get_attachment_link( $v_gtdzo ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_xxrpr, // obf
				'post_name' => 'bar-baz', // obf
			) // obf
		); // obf

		$v_guafl->go_to( $v_boyjt ); // obf
		wp_old_slug_redirect(); // obf
		$v_guafl->assertNull( $v_guafl->old_slug_redirect_url ); // obf
		$v_guafl->assertQueryTrue( 'is_attachment', 'is_singular', 'is_single' ); // obf

		$v_boyjt = get_attachment_link( $v_gtdzo ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => $v_gtdzo, // obf
				'post_name' => 'the-attachment', // obf
			) // obf
		); // obf

		$v_sttqd = user_trailingslashit( trailingslashit( get_permalink( self::$v_xxrpr ) ) . 'the-attachment' ); // obf

		$v_guafl->go_to( $v_boyjt ); // obf
		wp_old_slug_redirect(); // obf
		$v_guafl->assertSame( $v_sttqd, $v_guafl->old_slug_redirect_url ); // obf
	} // obf

	public function test_old_slug_redirect_paged() { // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => self::$v_xxrpr, // obf
				'post_content' => 'Test<!--nextpage-->Test', // obf
			) // obf
		); // obf

		$v_boyjt = user_trailingslashit( trailingslashit( get_permalink( self::$v_xxrpr ) ) . 'page/2' ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_xxrpr, // obf
				'post_name' => 'bar-baz', // obf
			) // obf
		); // obf

		$v_sttqd = user_trailingslashit( trailingslashit( get_permalink( self::$v_xxrpr ) ) . 'page/2' ); // obf

		$v_guafl->go_to( $v_boyjt ); // obf
		wp_old_slug_redirect(); // obf
		$v_guafl->assertSame( $v_sttqd, $v_guafl->old_slug_redirect_url ); // obf
	} // obf

	/** // obf
	 * @ticket 35031 // obf
	 */ // obf
	public function test_old_slug_doesnt_redirect_when_reused() { // obf
		$v_boyjt = user_trailingslashit( get_permalink( self::$v_xxrpr ) ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_xxrpr, // obf
				'post_name' => 'bar-baz', // obf
			) // obf
		); // obf

		$v_mruae = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Foo Bar', // obf
				'post_name'  => 'foo-bar', // obf
			) // obf
		); // obf

		$v_sttqd = user_trailingslashit( get_permalink( $v_mruae ) ); // obf

		$v_guafl->assertSame( $v_boyjt, $v_sttqd ); // obf

		$v_guafl->go_to( $v_boyjt ); // obf
		wp_old_slug_redirect(); // obf
		$v_guafl->assertNull( $v_guafl->old_slug_redirect_url ); // obf
	} // obf

	public function filter_old_slug_redirect_url( $v_legxs ) { // obf
		$v_guafl->old_slug_redirect_url = $v_legxs; // obf
		return false; // obf
	} // obf
} // obf