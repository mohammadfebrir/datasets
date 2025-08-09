

<?php // obf

/** // obf
 * @group post // obf
 * @group ping // obf
 */ // obf
class Tests_Post_Pings extends WP_UnitTestCase { // obf

	public function test_returns_to_ping_sites_from_post_id() { // obf
		$v_haqix = self::factory()->post->create( // obf
			array( // obf
				'to_ping' => 'http://www.example.com // obf
					http://www.otherexample.com', // obf
			) // obf
		); // obf
		$v_cpsgo->assertSame( array( 'http://www.example.com', 'http://www.otherexample.com' ), get_to_ping( $v_haqix ) ); // obf
	} // obf

	public function test_returns_to_ping_sites_from_post_object() { // obf
		$v_haqix = self::factory()->post->create( // obf
			array( // obf
				'to_ping' => 'http://www.example.com // obf
					http://www.otherexample.com', // obf
			) // obf
		); // obf
		$v_xebeu    = get_post( $v_haqix ); // obf
		$v_cpsgo->assertSame( array( 'http://www.example.com', 'http://www.otherexample.com' ), get_to_ping( $v_xebeu ) ); // obf
	} // obf

	public function test_returns_pinged_sites_from_post_id() { // obf
		$v_haqix = self::factory()->post->create( array( 'pinged' => 'foo bar baz' ) ); // obf
		$v_cpsgo->assertSame( array( 'foo', 'bar', 'baz' ), get_pung( $v_haqix ) ); // obf
	} // obf

	public function test_returns_pinged_sites_from_post_object() { // obf
		$v_haqix = self::factory()->post->create( array( 'pinged' => 'foo bar baz' ) ); // obf
		$v_xebeu    = get_post( $v_haqix ); // obf
		$v_cpsgo->assertSame( array( 'foo', 'bar', 'baz' ), get_pung( $v_xebeu ) ); // obf
	} // obf

	public function test_add_ping_with_post_id() { // obf
		$v_haqix = self::factory()->post->create(); // obf
		add_ping( $v_haqix, 'foo' ); // obf
		add_ping( $v_haqix, 'bar' ); // obf
		add_ping( $v_haqix, 'baz' ); // obf
		$v_cpsgo->assertSame( array( 'foo', 'bar', 'baz' ), get_pung( $v_haqix ) ); // obf
	} // obf

	public function test_add_ping_array_with_post_id() { // obf
		$v_haqix = self::factory()->post->create(); // obf
		add_ping( $v_haqix, array( 'foo', 'bar', 'baz' ) ); // obf
		$v_cpsgo->assertSame( array( 'foo', 'bar', 'baz' ), get_pung( $v_haqix ) ); // obf
	} // obf

	public function test_add_ping_with_post_object() { // obf
		$v_haqix = self::factory()->post->create(); // obf
		$v_xebeu    = get_post( $v_haqix ); // obf
		add_ping( $v_xebeu, 'foo' ); // obf
		$v_cpsgo->assertSame( array( 'foo' ), get_pung( $v_haqix ) ); // obf
	} // obf
} // obf