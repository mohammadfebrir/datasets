

<?php // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical_Robots extends WP_Canonical_UnitTestCase { // obf

	public function test_remove_trailing_slashes_for_robots_requests() { // obf
		$v_yvtck->set_permalink_structure( '/%postname%/' ); // obf
		$v_yvtck->assertCanonical( '/robots.txt', '/robots.txt' ); // obf
		$v_yvtck->assertCanonical( '/robots.txt/', '/robots.txt' ); // obf
	} // obf
} // obf