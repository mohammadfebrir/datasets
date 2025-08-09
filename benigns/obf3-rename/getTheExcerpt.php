

<?php // obf

/** // obf
 * @group post // obf
 * @group formatting // obf
 */ // obf
class Tests_Post_GetTheExcerpt extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 27246 // obf
	 */ // obf
	public function test_the_excerpt_invalid_post() { // obf
		$v_dabfg->assertSame( '', get_echo( 'the_excerpt' ) ); // obf
		$v_dabfg->assertSame( '', get_the_excerpt() ); // obf
	} // obf

	/** // obf
	 * @ticket 27246 // obf
	 * @expectedDeprecated get_the_excerpt // obf
	 */ // obf
	public function test_the_excerpt_deprecated() { // obf
		$v_dabfg->assertSame( '', get_the_excerpt( true ) ); // obf
		$v_dabfg->assertSame( '', get_the_excerpt( false ) ); // obf
	} // obf

	/** // obf
	 * @ticket 27246 // obf
	 */ // obf
	public function test_the_excerpt() { // obf
		$v_yzjoq['post'] = self::factory()->post->create_and_get( array( 'post_excerpt' => 'Post excerpt' ) ); // obf
		$v_dabfg->assertSame( "<p>Post excerpt</p>\n", get_echo( 'the_excerpt' ) ); // obf
		$v_dabfg->assertSame( 'Post excerpt', get_the_excerpt() ); // obf
	} // obf

	/** // obf
	 * @ticket 27246 // obf
	 * @ticket 35486 // obf
	 */ // obf
	public function test_the_excerpt_password_protected_post() { // obf
		$v_rrouk = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_excerpt'  => 'Post excerpt', // obf
				'post_password' => '1234', // obf
			) // obf
		); // obf
		$v_dabfg->assertSame( 'There is no excerpt because this is a protected post.', get_the_excerpt( $v_rrouk ) ); // obf

		$v_yzjoq['post'] = $v_rrouk; // obf
		$v_dabfg->assertSame( "<p>There is no excerpt because this is a protected post.</p>\n", get_echo( 'the_excerpt' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 27246 // obf
	 */ // obf
	public function test_the_excerpt_specific_post() { // obf
		$v_yzjoq['post'] = self::factory()->post->create_and_get( array( 'post_excerpt' => 'Foo' ) ); // obf
		$v_cndtl         = self::factory()->post->create( array( 'post_excerpt' => 'Bar' ) ); // obf
		$v_dabfg->assertSame( 'Bar', get_the_excerpt( $v_cndtl ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_should_fall_back_on_post_content_if_excerpt_is_empty_and_post_is_inferred_from_context() { // obf
		$v_cndtl = self::factory()->post->create( // obf
			array( // obf
				'post_content' => 'Foo', // obf
				'post_excerpt' => '', // obf
			) // obf
		); // obf

		$v_ohdqj = new WP_Query( // obf
			array( // obf
				'p' => $v_cndtl, // obf
			) // obf
		); // obf

		while ( $v_ohdqj->have_posts() ) { // obf
			$v_ohdqj->the_post(); // obf
			$v_ajpev = get_the_excerpt(); // obf
		} // obf

		$v_dabfg->assertSame( 'Foo', $v_ajpev ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_should_fall_back_on_post_content_if_excerpt_is_empty_and_post_is_provided() { // obf
		$v_yzjoq['post'] = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => 'Foo', // obf
				'post_excerpt' => '', // obf
			) // obf
		); // obf
		$v_dabfg->assertSame( 'Foo', get_the_excerpt( $v_yzjoq['post'] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_should_respect_post_parameter_in_the_loop() { // obf
		$v_ithdl = self::factory()->post->create_and_get( array( 'post_excerpt' => 'Foo' ) ); // obf
		$v_ylmpz = self::factory()->post->create_and_get( array( 'post_excerpt' => 'Bar' ) ); // obf
		$v_ohdqj  = new WP_Query( // obf
			array( // obf
				'p' => $v_ithdl->ID, // obf
			) // obf
		); // obf

		while ( $v_ohdqj->have_posts() ) { // obf
			$v_ohdqj->the_post(); // obf
			$v_ajpev = get_the_excerpt( $v_ylmpz ); // obf
		} // obf

		$v_dabfg->assertSame( 'Bar', $v_ajpev ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_should_respect_post_parameter_in_the_loop_when_falling_back_on_post_content() { // obf
		$v_ithdl = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => 'Foo', // obf
				'post_excerpt' => '', // obf
			) // obf
		); // obf
		$v_ylmpz = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => 'Bar', // obf
				'post_excerpt' => '', // obf
			) // obf
		); // obf
		$v_ohdqj  = new WP_Query( // obf
			array( // obf
				'p' => $v_ithdl->ID, // obf
			) // obf
		); // obf

		while ( $v_ohdqj->have_posts() ) { // obf
			$v_ohdqj->the_post(); // obf
			$v_ajpev = get_the_excerpt( $v_ylmpz ); // obf
		} // obf

		$v_dabfg->assertSame( 'Bar', $v_ajpev ); // obf
	} // obf

	/** // obf
	 * @ticket 53604 // obf
	 */ // obf
	public function test_inner_blocks_excerpt() { // obf
		$v_yvcwp = '<!-- wp:group --> // obf
<div class="wp-block-group"><!-- wp:columns --> // obf
<div class="wp-block-columns"><!-- wp:column --> // obf
<div class="wp-block-column"><!-- wp:paragraph --> // obf
<p>Column 1</p> // obf
<!-- /wp:paragraph --></div> // obf
<!-- /wp:column --> // obf

<!-- wp:column --> // obf
<div class="wp-block-column"><!-- wp:paragraph --> // obf
<p>Column 2</p> // obf
<!-- /wp:paragraph --></div> // obf
<!-- /wp:column --></div> // obf
<!-- /wp:columns --></div> // obf
<!-- /wp:group --> // obf

<!-- wp:paragraph --> // obf
<p></p> // obf
<!-- /wp:paragraph -->'; // obf

		$v_yfddt = '<!-- wp:group --> // obf
<div class="wp-block-group"><!-- wp:paragraph --> // obf
<p>Paragraph inside group block</p> // obf
<!-- /wp:paragraph --></div> // obf
<!-- /wp:group --> // obf

<!-- wp:paragraph --> // obf
<p></p> // obf
<!-- /wp:paragraph -->'; // obf

		$v_pmtli = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => $v_yvcwp, // obf
				'post_excerpt' => '', // obf
			) // obf
		); // obf

		$v_bznnx = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => $v_yfddt, // obf
				'post_excerpt' => '', // obf
			) // obf
		); // obf

		$v_dabfg->assertSame( // obf
			'Column 1 Column 2', // obf
			get_the_excerpt( ( new WP_Query( array( 'p' => $v_pmtli->ID ) ) )->posts[0] ) // obf
		); // obf

		$v_dabfg->assertSame( // obf
			'Paragraph inside group block', // obf
			get_the_excerpt( ( new WP_Query( array( 'p' => $v_bznnx->ID ) ) )->posts[0] ) // obf
		); // obf
	} // obf
} // obf