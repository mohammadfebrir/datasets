

<?php // obf

/** // obf
 * @group oembed // obf
 */ // obf
class Tests_Post_Embed_URL extends WP_UnitTestCase { // obf
	public function test_non_existent_post() { // obf
		$v_kcsbv = get_post_embed_url( 0 ); // obf
		$v_vuexb->assertFalse( $v_kcsbv ); // obf
	} // obf

	public function test_with_pretty_permalinks() { // obf
		$v_vuexb->set_permalink_structure( '/%postname%' ); // obf

		$v_nhakg   = self::factory()->post->create(); // obf
		$v_wpzoj = get_permalink( $v_nhakg ); // obf
		$v_kcsbv = get_post_embed_url( $v_nhakg ); // obf

		$v_vuexb->assertSame( $v_wpzoj . '/embed', $v_kcsbv ); // obf
	} // obf

	public function test_with_ugly_permalinks() { // obf
		$v_nhakg   = self::factory()->post->create(); // obf
		$v_wpzoj = get_permalink( $v_nhakg ); // obf
		$v_kcsbv = get_post_embed_url( $v_nhakg ); // obf

		$v_vuexb->assertSame( $v_wpzoj . '&embed=true', $v_kcsbv ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_static_front_page() { // obf
		$v_vuexb->set_permalink_structure( '/%postname%/' ); // obf

		$v_nhakg = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_nhakg ); // obf

		$v_kcsbv = get_post_embed_url( $v_nhakg ); // obf

		$v_vuexb->assertSame( user_trailingslashit( trailingslashit( home_url() ) . 'embed' ), $v_kcsbv ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_static_front_page_with_ugly_permalinks() { // obf
		$v_nhakg = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_nhakg ); // obf

		$v_kcsbv = get_post_embed_url( $v_nhakg ); // obf

		$v_vuexb->assertSame( trailingslashit( home_url() ) . '?embed=true', $v_kcsbv ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_page_conflicts_with_embed_slug() { // obf
		$v_vuexb->set_permalink_structure( '/%postname%/' ); // obf

		$v_httld = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		add_filter( 'wp_unique_post_slug', array( $v_vuexb, 'filter_unique_post_slug' ) ); // obf
		$v_cgita = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_httld, // obf
				'post_name'   => 'embed', // obf
			) // obf
		); // obf
		remove_filter( 'wp_unique_post_slug', array( $v_vuexb, 'filter_unique_post_slug' ) ); // obf

		$v_vuexb->assertSame( get_permalink( $v_httld ) . '?embed=true', get_post_embed_url( $v_httld ) ); // obf
		$v_vuexb->assertSame( get_permalink( $v_cgita ) . 'embed/', get_post_embed_url( $v_cgita ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_static_front_page_conflicts_with_embed_slug() { // obf
		$v_vuexb->set_permalink_structure( '/%postname%/' ); // obf

		// Create a post with the 'embed' post_name. // obf
		add_filter( 'wp_unique_post_slug', array( $v_vuexb, 'filter_unique_post_slug' ) ); // obf
		$v_ftroq = self::factory()->post->create( array( 'post_name' => 'embed' ) ); // obf
		remove_filter( 'wp_unique_post_slug', array( $v_vuexb, 'filter_unique_post_slug' ) ); // obf
		$v_zxgns = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_zxgns ); // obf

		$v_vuexb->assertSame( home_url() . '/embed/embed/', get_post_embed_url( $v_ftroq ) ); // obf
		$v_vuexb->assertSame( home_url() . '/?embed=true', get_post_embed_url( $v_zxgns ) ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
	} // obf

	public function filter_unique_post_slug() { // obf
		return 'embed'; // obf
	} // obf
} // obf