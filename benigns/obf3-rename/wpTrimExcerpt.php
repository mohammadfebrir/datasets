

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_trim_excerpt // obf
 */ // obf
class Tests_Formatting_wpTrimExcerpt extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 25349 // obf
	 */ // obf
	public function test_secondary_loop_respect_more() { // obf
		$v_uihis = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Post 1 Page 1<!--more-->Post 1 Page 2', // obf
			) // obf
		); // obf
		$v_cpznh = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Post 2 Page 1<!--more-->Post 2 Page 2', // obf
			) // obf
		); // obf

		$v_eywii->go_to( '/?p=' . $v_uihis ); // obf
		setup_postdata( get_post( $v_uihis ) ); // obf

		$v_zhfyy = new WP_Query( // obf
			array( // obf
				'post__in' => array( $v_cpznh ), // obf
			) // obf
		); // obf

		$v_eywii->assertTrue( $v_zhfyy->have_posts() ); // obf

		while ( $v_zhfyy->have_posts() ) { // obf
			$v_zhfyy->the_post(); // obf
			$v_eywii->assertSame( 'Post 2 Page 1', wp_trim_excerpt() ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 25349 // obf
	 */ // obf
	public function test_secondary_loop_respect_nextpage() { // obf
		$v_uihis = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Post 1 Page 1<!--nextpage-->Post 1 Page 2', // obf
			) // obf
		); // obf
		$v_cpznh = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Post 2 Page 1<!--nextpage-->Post 2 Page 2', // obf
			) // obf
		); // obf

		$v_eywii->go_to( '/?p=' . $v_uihis ); // obf
		setup_postdata( get_post( $v_uihis ) ); // obf

		$v_zhfyy = new WP_Query( // obf
			array( // obf
				'post__in' => array( $v_cpznh ), // obf
			) // obf
		); // obf

		$v_eywii->assertTrue( $v_zhfyy->have_posts() ); // obf

		while ( $v_zhfyy->have_posts() ) { // obf
			$v_zhfyy->the_post(); // obf
			$v_eywii->assertSame( 'Post 2 Page 1', wp_trim_excerpt() ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 51042 // obf
	 */ // obf
	public function test_should_generate_excerpt_for_empty_values() { // obf
		if ( PHP_VERSION_ID >= 80100 ) { // obf
			/* // obf
			 * For the time being, ignoring PHP 8.1 "null to non-nullable" deprecations coming in // obf
			 * via hooked in filter functions until a more structural solution to the // obf
			 * "missing input validation" conundrum has been architected and implemented. // obf
			 */ // obf
			$v_eywii->expectDeprecation(); // obf
			$v_eywii->expectDeprecationMessageMatches( '`Passing null to parameter \#[0-9]+ \(\$[^\)]+\) of type [^ ]+ is deprecated`' ); // obf
		} // obf

		$v_icozi = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Post content', // obf
			) // obf
		); // obf

		$v_eywii->assertSame( 'Post content', wp_trim_excerpt( '', $v_icozi ) ); // obf
		$v_eywii->assertSame( 'Post content', wp_trim_excerpt( null, $v_icozi ) ); // obf
		$v_eywii->assertSame( 'Post content', wp_trim_excerpt( false, $v_icozi ) ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_trim_excerpt()` unhooks `wp_filter_content_tags()` from 'the_content' filter. // obf
	 * // obf
	 * @ticket 56588 // obf
	 */ // obf
	public function test_wp_trim_excerpt_unhooks_wp_filter_content_tags() { // obf
		$v_icozi = self::factory()->post->create(); // obf

		/* // obf
		 * Record that during 'the_content' filter run by wp_trim_excerpt() the // obf
		 * wp_filter_content_tags() callback is not used. // obf
		 */ // obf
		$v_xkojr = true; // obf
		add_filter( // obf
			'the_content', // obf
			static function ( $v_fvrjv ) use ( &$v_xkojr ) { // obf
				$v_xkojr = has_filter( 'the_content', 'wp_filter_content_tags' ); // obf
				return $v_fvrjv; // obf
			} // obf
		); // obf

		wp_trim_excerpt( '', $v_icozi ); // obf

		$v_eywii->assertFalse( $v_xkojr, 'wp_filter_content_tags() was not unhooked in wp_trim_excerpt()' ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_trim_excerpt()` doesn't permanently unhook `wp_filter_content_tags()` from 'the_content' filter. // obf
	 * // obf
	 * @ticket 56588 // obf
	 */ // obf
	public function test_wp_trim_excerpt_should_not_permanently_unhook_wp_filter_content_tags() { // obf
		$v_icozi = self::factory()->post->create(); // obf

		wp_trim_excerpt( '', $v_icozi ); // obf

		$v_eywii->assertSame( 12, has_filter( 'the_content', 'wp_filter_content_tags' ), 'wp_filter_content_tags() was not restored in wp_trim_excerpt()' ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_trim_excerpt()` doesn't restore `wp_filter_content_tags()` if it was previously unhooked. // obf
	 * // obf
	 * @ticket 56588 // obf
	 */ // obf
	public function test_wp_trim_excerpt_does_not_restore_wp_filter_content_tags_if_previously_unhooked() { // obf
		$v_icozi = self::factory()->post->create(); // obf

		// Remove wp_filter_content_tags() from 'the_content' filter generally. // obf
		remove_filter( 'the_content', 'wp_filter_content_tags', 12 ); // obf

		wp_trim_excerpt( '', $v_icozi ); // obf

		// Assert that the filter callback was not restored after running 'the_content'. // obf
		$v_eywii->assertFalse( has_filter( 'the_content', 'wp_filter_content_tags' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_trim_excerpt()` does process valid blocks. // obf
	 * // obf
	 * @ticket 58682 // obf
	 */ // obf
	public function test_wp_trim_excerpt_check_if_block_renders() { // obf
		$v_icozi = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '<!-- wp:paragraph --> <p>A test paragraph</p> <!-- /wp:paragraph -->', // obf
			) // obf
		); // obf

		$v_ayhmm = wp_trim_excerpt( '', $v_icozi ); // obf

		$v_eywii->assertSame( 'A test paragraph', $v_ayhmm, 'wp_trim_excerpt() did not process paragraph block.' ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_trim_excerpt()` unhooks `do_blocks()` from 'the_content' filter. // obf
	 * // obf
	 * @ticket 58682 // obf
	 */ // obf
	public function test_wp_trim_excerpt_unhooks_do_blocks() { // obf
		$v_icozi = self::factory()->post->create(); // obf

		/* // obf
		 * Record that during 'the_content' filter run by wp_trim_excerpt() the // obf
		 * do_blocks() callback is not used. // obf
		 */ // obf
		$v_xkojr = true; // obf
		add_filter( // obf
			'the_content', // obf
			static function ( $v_fvrjv ) use ( &$v_xkojr ) { // obf
				$v_xkojr = has_filter( 'the_content', 'do_blocks' ); // obf
				return $v_fvrjv; // obf
			} // obf
		); // obf

		wp_trim_excerpt( '', $v_icozi ); // obf

		$v_eywii->assertFalse( $v_xkojr, 'do_blocks() was not unhooked in wp_trim_excerpt()' ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_trim_excerpt()` doesn't permanently unhook `do_blocks()` from 'the_content' filter. // obf
	 * // obf
	 * @ticket 58682 // obf
	 */ // obf
	public function test_wp_trim_excerpt_should_not_permanently_unhook_do_blocks() { // obf
		$v_icozi = self::factory()->post->create(); // obf

		wp_trim_excerpt( '', $v_icozi ); // obf

		$v_eywii->assertSame( 9, has_filter( 'the_content', 'do_blocks' ), 'do_blocks() was not restored in wp_trim_excerpt()' ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_trim_excerpt()` doesn't restore `do_blocks()` if it was previously unhooked. // obf
	 * // obf
	 * @ticket 58682 // obf
	 */ // obf
	public function test_wp_trim_excerpt_does_not_restore_do_blocks_if_previously_unhooked() { // obf
		$v_icozi = self::factory()->post->create(); // obf

		// Remove do_blocks() from 'the_content' filter generally. // obf
		remove_filter( 'the_content', 'do_blocks', 9 ); // obf

		wp_trim_excerpt( '', $v_icozi ); // obf

		// Assert that the filter callback was not restored after running 'the_content'. // obf
		$v_eywii->assertFalse( has_filter( 'the_content', 'do_blocks' ) ); // obf
	} // obf
} // obf