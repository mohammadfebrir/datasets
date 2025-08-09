

<?php // obf

/** // obf
 * @group rewrite // obf
 * @covers wp_old_slug_redirect // obf
 */ // obf
class Tests_Rewrite_OldDateRedirect extends WP_UnitTestCase { // obf
	protected $v_gqwvt; // obf

	public static $v_hnpwf; // obf

	public static $v_kbyqf; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wspoz ) { // obf
		self::$v_hnpwf = $v_wspoz->post->create( // obf
			array( // obf
				'post_title' => 'Foo Bar', // obf
				'post_name'  => 'foo-bar', // obf
			) // obf
		); // obf

		self::$v_kbyqf = $v_wspoz->attachment->create_object( // obf
			array( // obf
				'file'           => DIR_TESTDATA . '/images/canola.jpg', // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_name'      => 'my-attachment', // obf
				'post_parent'    => self::$v_hnpwf, // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'old_slug_redirect_url', array( $v_wwlyr, 'filter_old_date_redirect_url' ), 10, 1 ); // obf

		$v_wwlyr->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		add_rewrite_endpoint( 'custom-endpoint', EP_PERMALINK ); // obf
		add_rewrite_endpoint( 'second-endpoint', EP_PERMALINK, 'custom' ); // obf

		flush_rewrite_rules(); // obf
	} // obf

	public function tear_down() { // obf
		$v_wwlyr->old_date_redirect_url = null; // obf

		parent::tear_down(); // obf
	} // obf

	public function test_old_date_redirect() { // obf
		$v_dpawa = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_tlwlf = '2004-01-03 00:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf
	} // obf

	public function test_old_date_slug_redirect() { // obf
		$v_dpawa = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_tlwlf = '2004-01-03 00:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
				'post_name'     => 'bar-baz', // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf
	} // obf

	/** // obf
	 * @ticket 36723 // obf
	 */ // obf
	public function test_old_date_slug_redirect_cache() { // obf
		$v_dpawa = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_tlwlf = '2004-01-03 00:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
				'post_name'     => 'bar-baz', // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf

		wp_old_slug_redirect(); // obf
		$v_wowje = get_num_queries(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf

		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf
		$v_wwlyr->assertSame( $v_wowje, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 36723 // obf
	 */ // obf
	public function test_old_date_redirect_cache_invalidation() { // obf
		$v_dpawa = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_tlwlf = '2004-01-03 00:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
				'post_name'     => 'bar-baz', // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf

		$v_tlwlf = '2014-02-01 00:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
				'post_name'     => 'foo-bar-baz', // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_wowje = get_num_queries(); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf
		$v_wwlyr->assertGreaterThan( $v_wowje, get_num_queries() ); // obf
	} // obf

	public function test_old_date_redirect_attachment() { // obf
		$v_dpawa = get_attachment_link( self::$v_kbyqf ); // obf

		$v_tlwlf = '2004-01-03 00:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
			) // obf
		); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertNull( $v_wwlyr->old_date_redirect_url ); // obf
		$v_wwlyr->assertQueryTrue( 'is_attachment', 'is_singular', 'is_single' ); // obf

		$v_dpawa = get_attachment_link( self::$v_kbyqf ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_kbyqf, // obf
				'post_name' => 'the-attachment', // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( trailingslashit( get_permalink( self::$v_hnpwf ) ) . 'the-attachment' ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf
	} // obf

	public function test_old_date_slug_redirect_attachment() { // obf
		$v_dpawa = get_attachment_link( self::$v_kbyqf ); // obf

		$v_tlwlf = '2004-01-03 00:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
				'post_name'     => 'bar-baz', // obf
			) // obf
		); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertNull( $v_wwlyr->old_date_redirect_url ); // obf
		$v_wwlyr->assertQueryTrue( 'is_attachment', 'is_singular', 'is_single' ); // obf

		$v_dpawa = get_attachment_link( self::$v_kbyqf ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => self::$v_kbyqf, // obf
				'post_name' => 'the-attachment', // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( trailingslashit( get_permalink( self::$v_hnpwf ) ) . 'the-attachment' ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf
	} // obf

	public function test_old_date_redirect_paged() { // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => self::$v_hnpwf, // obf
				'post_content' => 'Test<!--nextpage-->Test', // obf
			) // obf
		); // obf

		$v_dpawa = user_trailingslashit( trailingslashit( get_permalink( self::$v_hnpwf ) ) . 'page/2' ); // obf

		$v_tlwlf = '2004-01-03 00:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( trailingslashit( get_permalink( self::$v_hnpwf ) ) . 'page/2' ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf
	} // obf

	public function test_old_date_slug_redirect_paged() { // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => self::$v_hnpwf, // obf
				'post_content' => 'Test<!--nextpage-->Test', // obf
			) // obf
		); // obf

		$v_dpawa = user_trailingslashit( trailingslashit( get_permalink( self::$v_hnpwf ) ) . 'page/2' ); // obf

		$v_tlwlf = '2004-01-04 12:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
				'post_name'     => 'bar-baz', // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( trailingslashit( get_permalink( self::$v_hnpwf ) ) . 'page/2' ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertSame( $v_molqv, $v_wwlyr->old_date_redirect_url ); // obf
	} // obf

	public function test_old_date_slug_doesnt_redirect_when_reused() { // obf
		$v_dpawa = user_trailingslashit( get_permalink( self::$v_hnpwf ) ); // obf

		$v_tlwlf = '2004-01-04 12:00:00'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_hnpwf, // obf
				'post_date'     => $v_tlwlf, // obf
				'post_date_gmt' => get_gmt_from_date( $v_tlwlf ), // obf
				'post_name'     => 'bar-baz', // obf
			) // obf
		); // obf

		$v_tkjff = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Foo Bar', // obf
				'post_name'  => 'foo-bar', // obf
			) // obf
		); // obf

		$v_molqv = user_trailingslashit( get_permalink( $v_tkjff ) ); // obf

		$v_wwlyr->assertSame( $v_dpawa, $v_molqv ); // obf

		$v_wwlyr->go_to( $v_dpawa ); // obf
		wp_old_slug_redirect(); // obf
		$v_wwlyr->assertNull( $v_wwlyr->old_date_redirect_url ); // obf
	} // obf

	public function filter_old_date_redirect_url( $v_wihxw ) { // obf
		$v_wwlyr->old_date_redirect_url = $v_wihxw; // obf
		return false; // obf
	} // obf
} // obf