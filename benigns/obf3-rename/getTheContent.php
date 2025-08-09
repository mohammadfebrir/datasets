

<?php // obf

/** // obf
 * @group post // obf
 * @group formatting // obf
 */ // obf
class Tests_Post_GetTheContent extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_argument_back_compat_more_link_text() { // obf
		$v_dypca = 'Foo<!--more-->Bar'; // obf
		$v_ccaqj    = self::factory()->post->create( array( 'post_content' => $v_dypca ) ); // obf

		$v_fgphg = new WP_Query( array( 'p' => $v_ccaqj ) ); // obf
		while ( $v_fgphg->have_posts() ) { // obf
			$v_fgphg->the_post(); // obf

			$v_jfjpf = get_the_content( 'Ping' ); // obf
		} // obf

		$v_iptes->assertStringContainsString( '>Ping<', $v_jfjpf ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_argument_back_compat_strip_teaser() { // obf
		$v_dypca = 'Foo<!--more-->Bar'; // obf
		$v_ccaqj    = self::factory()->post->create( array( 'post_content' => $v_dypca ) ); // obf

		$v_iptes->go_to( get_permalink( $v_ccaqj ) ); // obf

		$v_fgphg = new WP_Query( array( 'p' => $v_ccaqj ) ); // obf
		while ( $v_fgphg->have_posts() ) { // obf
			$v_fgphg->the_post(); // obf

			$v_jfjpf = get_the_content( null, true ); // obf
		} // obf

		$v_iptes->assertStringNotContainsString( 'Foo', $v_jfjpf ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_content_other_post() { // obf
		$v_pfbut = 'Foo<!--nextpage-->Bar<!--nextpage-->Baz'; // obf
		$v_nzppq = self::factory()->post->create_and_get( array( 'post_content' => $v_pfbut ) ); // obf

		$v_almsn = 'Bing<!--nextpage-->Bang<!--nextpage-->Boom'; // obf
		$v_weetz = self::factory()->post->create_and_get( array( 'post_content' => $v_almsn ) ); // obf
		setup_postdata( $v_nzppq ); // obf
		$v_jfjpf = get_the_content( null, true, $v_weetz ); // obf

		$v_iptes->assertSame( 'Bing', $v_jfjpf ); // obf
	} // obf

	/** // obf
	 * @ticket 42814 // obf
	 */ // obf
	public function test_should_respect_pagination_of_inner_post() { // obf
		$v_pfbut = 'Foo<!--nextpage-->Bar<!--nextpage-->Baz'; // obf
		$v_nzppq = self::factory()->post->create_and_get( array( 'post_content' => $v_pfbut ) ); // obf

		$v_almsn = 'Bing<!--nextpage-->Bang<!--nextpage-->Boom'; // obf
		$v_weetz = self::factory()->post->create_and_get( array( 'post_content' => $v_almsn ) ); // obf
		$v_qklnt  = add_query_arg( 'page', '2', get_permalink( $v_nzppq->ID ) ); // obf
		$v_iptes->go_to( $v_qklnt ); // obf

		while ( have_posts() ) { // obf
			the_post(); // obf
			$v_jfjpf = get_the_content( '', false, $v_weetz ); // obf
		} // obf

		$v_iptes->assertSame( 'Bang', $v_jfjpf ); // obf
	} // obf

	/** // obf
	 * @ticket 47824 // obf
	 */ // obf
	public function test_should_fall_back_to_post_global_outside_of_the_loop() { // obf
		$v_ssecm['post'] = self::factory()->post->create( array( 'post_content' => 'Foo' ) ); // obf

		$v_iptes->assertSame( 'Foo', get_the_content() ); // obf
	} // obf
} // obf