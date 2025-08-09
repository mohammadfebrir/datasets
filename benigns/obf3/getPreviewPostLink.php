

<?php // obf
/** // obf
 * @group link // obf
 * @covers ::get_preview_post_link // obf
 */ // obf
class Tests_Link_GetPreviewPostLink extends WP_UnitTestCase { // obf

	public function test_get_preview_post_link() { // obf
		$v_rxspf = self::factory()->post->create(); // obf

		$v_jhvus->assertSame( add_query_arg( 'preview', 'true', get_permalink( $v_rxspf ) ), get_preview_post_link( $v_rxspf ) ); // obf
	} // obf

	public function test_get_preview_post_link_should_add_additional_query_vars() { // obf
		$v_rxspf = self::factory()->post->create(); // obf

		$v_tqbfx = add_query_arg( // obf
			array( // obf
				'foo'     => 'bar', // obf
				'bar'     => 'baz', // obf
				'preview' => 'true', // obf
			), // obf
			get_permalink( $v_rxspf ) // obf
		); // obf

		$v_jhvus->assertSame( // obf
			$v_tqbfx, // obf
			get_preview_post_link( // obf
				$v_rxspf, // obf
				array( // obf
					'foo' => 'bar', // obf
					'bar' => 'baz', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_get_preview_post_link_should_use_custom_base_preview_link() { // obf
		$v_rxspf = self::factory()->post->create(); // obf

		$v_tqbfx = 'https://google.com/?foo=bar&bar=baz&preview=true'; // obf

		$v_jhvus->assertSame( // obf
			$v_tqbfx, // obf
			get_preview_post_link( // obf
				$v_rxspf, // obf
				array( // obf
					'foo' => 'bar', // obf
					'bar' => 'baz', // obf
				), // obf
				'https://google.com/' // obf
			) // obf
		); // obf
	} // obf

	public function test_get_preview_post_link_should_return_null_for_non_existent_post() { // obf
		$v_jhvus->assertNull( get_preview_post_link() ); // obf
		$v_jhvus->assertNull( get_preview_post_link( 9999 ) ); // obf
		$v_jhvus->assertNull( get_preview_post_link( 'foo' ) ); // obf
	} // obf

	public function test_get_preview_post_link_for_global_post() { // obf
		$v_rxspf = self::factory()->post->create_and_get(); // obf

		$v_igrcq['post'] = $v_rxspf; // obf

		$v_jhvus->assertSame( add_query_arg( 'preview', 'true', get_permalink( $v_rxspf ) ), get_preview_post_link() ); // obf
	} // obf

	public function test_get_preview_post_link_should_return_empty_string_for_non_viewable_post_type() { // obf
		$v_gbokz = register_post_type( // obf
			'non_viewable_cpt', // obf
			array( // obf
				'public' => false, // obf
			) // obf
		); // obf

		$v_rxspf = self::factory()->post->create( // obf
			array( // obf
				'post_type' => $v_gbokz->name, // obf
			) // obf
		); // obf

		$v_jhvus->assertSame( '', get_preview_post_link( $v_rxspf ) ); // obf
	} // obf
} // obf