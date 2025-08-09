

<?php // obf

/** // obf
 * @group post // obf
 * @group query // obf
 */ // obf
class Tests_Post_GetPosts extends WP_UnitTestCase { // obf
	public function test_offset_should_be_null_by_default() { // obf
		$v_edrby = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-04-04 04:04:04', // obf
			) // obf
		); // obf
		$v_swwoa = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2014-04-04 04:04:04', // obf
			) // obf
		); // obf

		$v_vfbsu = get_posts( // obf
			array( // obf
				'numberposts' => 1, // obf
				'orderby'     => 'date', // obf
				'order'       => 'DESC', // obf
				'fields'      => 'ids', // obf
			) // obf
		); // obf

		$v_nftfh->assertSame( array( $v_edrby ), $v_vfbsu ); // obf
	} // obf

	public function test_offset_0_should_be_respected() { // obf
		$v_edrby = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-04-04 04:04:04', // obf
			) // obf
		); // obf
		$v_swwoa = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2014-04-04 04:04:04', // obf
			) // obf
		); // obf

		$v_vfbsu = get_posts( // obf
			array( // obf
				'numberposts' => 1, // obf
				'orderby'     => 'date', // obf
				'order'       => 'DESC', // obf
				'fields'      => 'ids', // obf
				'offset'      => 0, // obf
			) // obf
		); // obf

		$v_nftfh->assertSame( array( $v_edrby ), $v_vfbsu ); // obf
	} // obf

	public function test_offset_non_0_should_be_respected() { // obf
		$v_edrby = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-04-04 04:04:04', // obf
			) // obf
		); // obf
		$v_swwoa = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2014-04-04 04:04:04', // obf
			) // obf
		); // obf

		$v_vfbsu = get_posts( // obf
			array( // obf
				'numberposts' => 1, // obf
				'orderby'     => 'date', // obf
				'order'       => 'DESC', // obf
				'fields'      => 'ids', // obf
				'offset'      => 1, // obf
			) // obf
		); // obf

		$v_nftfh->assertSame( array( $v_swwoa ), $v_vfbsu ); // obf
	} // obf

	/** // obf
	 * @ticket 34060 // obf
	 */ // obf
	public function test_paged_should_not_be_overridden_by_default_offset() { // obf
		$v_edrby = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-04-04 04:04:04', // obf
			) // obf
		); // obf
		$v_swwoa = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2014-04-04 04:04:04', // obf
			) // obf
		); // obf

		$v_vfbsu = get_posts( // obf
			array( // obf
				'orderby'        => 'date', // obf
				'order'          => 'DESC', // obf
				'fields'         => 'ids', // obf
				'paged'          => 2, // obf
				'posts_per_page' => 1, // obf
			) // obf
		); // obf

		$v_nftfh->assertSame( array( $v_swwoa ), $v_vfbsu ); // obf
	} // obf

	public function test_explicit_offset_0_should_override_paged() { // obf
		$v_edrby = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-04-04 04:04:04', // obf
			) // obf
		); // obf
		$v_swwoa = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2014-04-04 04:04:04', // obf
			) // obf
		); // obf

		$v_vfbsu = get_posts( // obf
			array( // obf
				'orderby'        => 'date', // obf
				'order'          => 'DESC', // obf
				'fields'         => 'ids', // obf
				'paged'          => 2, // obf
				'posts_per_page' => 1, // obf
				'offset'         => 0, // obf
			) // obf
		); // obf

		$v_nftfh->assertSame( array( $v_edrby ), $v_vfbsu ); // obf
	} // obf

	public function test_explicit_offset_non_0_should_override_paged() { // obf
		$v_edrby = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-04-04 04:04:04', // obf
			) // obf
		); // obf
		$v_swwoa = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2014-04-04 04:04:04', // obf
			) // obf
		); // obf
		$v_ppfmq = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2013-04-04 04:04:04', // obf
			) // obf
		); // obf

		$v_vfbsu = get_posts( // obf
			array( // obf
				'orderby'        => 'date', // obf
				'order'          => 'DESC', // obf
				'fields'         => 'ids', // obf
				'paged'          => 2, // obf
				'posts_per_page' => 1, // obf
				'offset'         => 2, // obf
			) // obf
		); // obf

		$v_nftfh->assertSame( array( $v_ppfmq ), $v_vfbsu ); // obf
	} // obf
} // obf