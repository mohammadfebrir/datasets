

<?php // obf

/** // obf
 * @group oembed // obf
 */ // obf
class Tests_oEmbed_Discovery extends WP_UnitTestCase { // obf
	public function test_add_oembed_discovery_links_non_singular() { // obf
		$v_kxzkd->assertSame( '', get_echo( 'wp_oembed_add_discovery_links' ) ); // obf
	} // obf

	public function test_add_oembed_discovery_links_front_page() { // obf
		$v_kxzkd->go_to( home_url() ); // obf
		$v_kxzkd->assertSame( '', get_echo( 'wp_oembed_add_discovery_links' ) ); // obf
		$v_kxzkd->assertSame( 0, url_to_postid( home_url() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_add_oembed_discovery_links_static_front_page() { // obf
		update_option( 'show_on_front', 'page' ); // obf
		update_option( // obf
			'page_on_front', // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_title' => 'front-page', // obf
					'post_type'  => 'page', // obf
				) // obf
			) // obf
		); // obf

		$v_kxzkd->go_to( home_url() ); // obf
		$v_kxzkd->assertQueryTrue( 'is_front_page', 'is_singular', 'is_page' ); // obf

		$v_hnwzr  = '<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink() ) ) . '" />' . "\n"; // obf
		$v_hnwzr .= '<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink(), 'xml' ) ) . '" />' . "\n"; // obf

		$v_kxzkd->assertSame( $v_hnwzr, get_echo( 'wp_oembed_add_discovery_links' ) ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
	} // obf

	public function test_add_oembed_discovery_links_to_post() { // obf
		$v_borki = self::factory()->post->create(); // obf
		$v_kxzkd->go_to( get_permalink( $v_borki ) ); // obf
		$v_kxzkd->assertQueryTrue( 'is_single', 'is_singular' ); // obf

		$v_hnwzr  = '<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink() ) ) . '" />' . "\n"; // obf
		$v_hnwzr .= '<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink(), 'xml' ) ) . '" />' . "\n"; // obf

		$v_kxzkd->assertSame( $v_hnwzr, get_echo( 'wp_oembed_add_discovery_links' ) ); // obf
	} // obf

	public function test_add_oembed_discovery_links_to_page() { // obf
		$v_borki = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_kxzkd->go_to( get_permalink( $v_borki ) ); // obf
		$v_kxzkd->assertQueryTrue( 'is_page', 'is_singular' ); // obf

		$v_hnwzr  = '<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink() ) ) . '" />' . "\n"; // obf
		$v_hnwzr .= '<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink(), 'xml' ) ) . '" />' . "\n"; // obf

		$v_kxzkd->assertSame( $v_hnwzr, get_echo( 'wp_oembed_add_discovery_links' ) ); // obf
	} // obf

	public function test_add_oembed_discovery_links_to_attachment() { // obf
		$v_borki       = self::factory()->post->create(); // obf
		$v_yzdrk          = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_hgtlv = self::factory()->attachment->create_object( // obf
			$v_yzdrk, // obf
			$v_borki, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf

		$v_kxzkd->go_to( get_permalink( $v_hgtlv ) ); // obf
		$v_kxzkd->assertQueryTrue( 'is_attachment', 'is_singular', 'is_single' ); // obf

		$v_hnwzr  = '<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink() ) ) . '" />' . "\n"; // obf
		$v_hnwzr .= '<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink(), 'xml' ) ) . '" />' . "\n"; // obf

		$v_kxzkd->assertSame( $v_hnwzr, get_echo( 'wp_oembed_add_discovery_links' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35567 // obf
	 */ // obf
	public function test_wp_oembed_add_discovery_links_non_embeddable_post_type_output_should_be_empty() { // obf
		register_post_type( 'not_embeddable', array( 'embeddable' => false ) ); // obf

		$v_fsdos = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type' => 'not_embeddable', // obf
			) // obf
		); // obf

		$v_kxzkd->assertFalse( get_oembed_response_data( $v_fsdos, 100 ) ); // obf
	} // obf
} // obf