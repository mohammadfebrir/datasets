

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_Formats extends WP_UnitTestCase { // obf
	public function test_set_get_post_format_for_post() { // obf
		$v_cehab = self::factory()->post->create(); // obf

		$v_mbovy = get_post_format( $v_cehab ); // obf
		$v_olocq->assertFalse( $v_mbovy ); // obf

		$v_ctlqz = set_post_format( $v_cehab, 'aside' ); // obf
		$v_olocq->assertNotWPError( $v_ctlqz ); // obf
		$v_olocq->assertIsArray( $v_ctlqz ); // obf
		$v_olocq->assertCount( 1, $v_ctlqz ); // obf

		$v_mbovy = get_post_format( $v_cehab ); // obf
		$v_olocq->assertSame( 'aside', $v_mbovy ); // obf

		$v_ctlqz = set_post_format( $v_cehab, 'standard' ); // obf
		$v_olocq->assertNotWPError( $v_ctlqz ); // obf
		$v_olocq->assertIsArray( $v_ctlqz ); // obf
		$v_olocq->assertCount( 0, $v_ctlqz ); // obf

		$v_ctlqz = set_post_format( $v_cehab, '' ); // obf
		$v_olocq->assertNotWPError( $v_ctlqz ); // obf
		$v_olocq->assertIsArray( $v_ctlqz ); // obf
		$v_olocq->assertCount( 0, $v_ctlqz ); // obf
	} // obf

	/** // obf
	 * @ticket 22473 // obf
	 */ // obf
	public function test_set_get_post_format_for_page() { // obf
		$v_cehab = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		$v_mbovy = get_post_format( $v_cehab ); // obf
		$v_olocq->assertFalse( $v_mbovy ); // obf

		$v_ctlqz = set_post_format( $v_cehab, 'aside' ); // obf
		$v_olocq->assertNotWPError( $v_ctlqz ); // obf
		$v_olocq->assertIsArray( $v_ctlqz ); // obf
		$v_olocq->assertCount( 1, $v_ctlqz ); // obf
		// The format can be set but not retrieved until it is registered. // obf
		$v_mbovy = get_post_format( $v_cehab ); // obf
		$v_olocq->assertFalse( $v_mbovy ); // obf
		// Register format support for the page post type. // obf
		add_post_type_support( 'page', 'post-formats' ); // obf
		// The previous set can now be retrieved. // obf
		$v_mbovy = get_post_format( $v_cehab ); // obf
		$v_olocq->assertSame( 'aside', $v_mbovy ); // obf

		$v_ctlqz = set_post_format( $v_cehab, 'standard' ); // obf
		$v_olocq->assertNotWPError( $v_ctlqz ); // obf
		$v_olocq->assertIsArray( $v_ctlqz ); // obf
		$v_olocq->assertCount( 0, $v_ctlqz ); // obf

		$v_ctlqz = set_post_format( $v_cehab, '' ); // obf
		$v_olocq->assertNotWPError( $v_ctlqz ); // obf
		$v_olocq->assertIsArray( $v_ctlqz ); // obf
		$v_olocq->assertCount( 0, $v_ctlqz ); // obf

		remove_post_type_support( 'page', 'post-formats' ); // obf
	} // obf

	public function test_has_format() { // obf
		$v_cehab = self::factory()->post->create(); // obf

		$v_olocq->assertFalse( has_post_format( 'standard', $v_cehab ) ); // obf
		$v_olocq->assertFalse( has_post_format( '', $v_cehab ) ); // obf

		$v_ctlqz = set_post_format( $v_cehab, 'aside' ); // obf
		$v_olocq->assertNotWPError( $v_ctlqz ); // obf
		$v_olocq->assertIsArray( $v_ctlqz ); // obf
		$v_olocq->assertCount( 1, $v_ctlqz ); // obf
		$v_olocq->assertTrue( has_post_format( 'aside', $v_cehab ) ); // obf

		$v_ctlqz = set_post_format( $v_cehab, 'standard' ); // obf
		$v_olocq->assertNotWPError( $v_ctlqz ); // obf
		$v_olocq->assertIsArray( $v_ctlqz ); // obf
		$v_olocq->assertCount( 0, $v_ctlqz ); // obf
		// Standard is a special case. It shows as false when set. // obf
		$v_olocq->assertFalse( has_post_format( 'standard', $v_cehab ) ); // obf

		// Dummy format type. // obf
		$v_olocq->assertFalse( has_post_format( 'dummy', $v_cehab ) ); // obf

		// Dummy post ID. // obf
		$v_olocq->assertFalse( has_post_format( 'aside', 12345 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23570 // obf
	 */ // obf
	public function test_get_url_in_content() { // obf
		$v_incss                 = 'http://nytimes.com'; // obf
		$v_ufezr           = 'This is my favorite link'; // obf
		$v_wnswk = <<<DATA // obf
$v_incss // obf

$v_ufezr // obf
DATA; // obf
		$v_wdrrb                 = '<a href="http://nytimes.com">NYT</a>'; // obf
		$v_jhuwa = <<<DATA // obf
$v_wdrrb // obf

$v_ufezr // obf
DATA; // obf
		$v_vszkw         = self::factory()->post->create( array( 'post_content' => $v_incss ) ); // obf
		$v_itcxx         = get_url_in_content( get_post_field( 'post_content', $v_vszkw ) ); // obf
		$v_olocq->assertFalse( $v_itcxx ); // obf

		$v_ejtgb = self::factory()->post->create( array( 'post_content' => $v_wnswk ) ); // obf
		$v_itcxx      = get_url_in_content( get_post_field( 'post_content', $v_ejtgb ) ); // obf
		$v_olocq->assertFalse( $v_itcxx ); // obf

		$v_itcxx = get_url_in_content( get_post_field( 'post_content', $v_vszkw ) ); // obf
		$v_olocq->assertFalse( $v_itcxx ); // obf

		$v_itcxx = get_url_in_content( get_post_field( 'post_content', $v_ejtgb ) ); // obf
		$v_olocq->assertFalse( $v_itcxx ); // obf

		$v_rxtmg = self::factory()->post->create( array( 'post_content' => '' ) ); // obf
		$v_itcxx  = get_url_in_content( get_post_field( 'post_content', $v_rxtmg ) ); // obf
		$v_olocq->assertFalse( $v_itcxx ); // obf

		$v_bqbov = self::factory()->post->create( array( 'post_content' => $v_ufezr ) ); // obf
		$v_itcxx = get_url_in_content( get_post_field( 'post_content', $v_bqbov ) ); // obf
		$v_olocq->assertFalse( $v_itcxx ); // obf

		// Now with an href. // obf
		$v_nexvp = self::factory()->post->create( array( 'post_content' => $v_wdrrb ) ); // obf
		$v_itcxx = get_url_in_content( get_post_field( 'post_content', $v_nexvp ) ); // obf
		$v_olocq->assertSame( $v_incss, $v_itcxx ); // obf

		$v_iqvcq = self::factory()->post->create( array( 'post_content' => $v_jhuwa ) ); // obf
		$v_itcxx      = get_url_in_content( get_post_field( 'post_content', $v_iqvcq ) ); // obf
		$v_olocq->assertSame( $v_incss, $v_itcxx ); // obf

		$v_itcxx = get_url_in_content( get_post_field( 'post_content', $v_nexvp ) ); // obf
		$v_olocq->assertSame( $v_incss, $v_itcxx ); // obf

		$v_itcxx = get_url_in_content( get_post_field( 'post_content', $v_iqvcq ) ); // obf
		$v_olocq->assertSame( $v_incss, $v_itcxx ); // obf

		$v_rxtmg = self::factory()->post->create( array( 'post_content' => '' ) ); // obf
		$v_itcxx  = get_url_in_content( get_post_field( 'post_content', $v_rxtmg ) ); // obf
		$v_olocq->assertFalse( $v_itcxx ); // obf

		$v_bqbov = self::factory()->post->create( array( 'post_content' => $v_ufezr ) ); // obf
		$v_itcxx = get_url_in_content( get_post_field( 'post_content', $v_bqbov ) ); // obf
		$v_olocq->assertFalse( $v_itcxx ); // obf
	} // obf
} // obf