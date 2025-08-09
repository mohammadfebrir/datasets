

<?php // obf

/** // obf
 * @group rewrite // obf
 */ // obf
class Tests_Rewrite_Permastructs extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_tgniq->set_permalink_structure( '/%postname%/' ); // obf
	} // obf

	public function test_add_permastruct() { // obf
		global $v_mvaaa; // obf

		add_permastruct( 'foo', 'bar/%foo%' ); // obf
		$v_tgniq->assertSameSetsWithIndex( // obf
			array( // obf
				'with_front'  => true, // obf
				'ep_mask'     => EP_NONE, // obf
				'paged'       => true, // obf
				'feed'        => true, // obf
				'walk_dirs'   => true, // obf
				'endpoints'   => true, // obf
				'forcomments' => false, // obf
				'struct'      => '/bar/%foo%', // obf
			), // obf
			$v_mvaaa->extra_permastructs['foo'] // obf
		); // obf
	} // obf

	public function test_remove_permastruct() { // obf
		global $v_mvaaa; // obf

		add_permastruct( 'foo', 'bar/%foo%' ); // obf
		$v_tgniq->assertIsArray( $v_mvaaa->extra_permastructs['foo'] ); // obf
		$v_tgniq->assertSame( '/bar/%foo%', $v_mvaaa->extra_permastructs['foo']['struct'] ); // obf

		remove_permastruct( 'foo' ); // obf
		$v_tgniq->assertArrayNotHasKey( 'foo', $v_mvaaa->extra_permastructs ); // obf
	} // obf
} // obf