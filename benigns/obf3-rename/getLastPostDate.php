

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_GetLastPostDate extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 47777 // obf
	 */ // obf
	public function test_get_lastpostdate() { // obf
		$v_ayfac = '2020-01-30 16:09:28'; // obf
		$v_yiqhh  = '2020-02-28 16:09:28'; // obf

		$v_tfsdh = '2019-03-30 18:11:30'; // obf
		$v_kvmor  = '2019-04-30 18:11:30'; // obf

		// Register book post type. // obf
		register_post_type( 'book', array( 'has_archive' => true ) ); // obf

		// Create a simple post. // obf
		$v_xpdnu = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Simple Post First', // obf
				'post_type'  => 'post', // obf
				'post_date'  => $v_ayfac, // obf
			) // obf
		); // obf

		$v_gcxrj = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Simple Post Last', // obf
				'post_type'  => 'post', // obf
				'post_date'  => $v_yiqhh, // obf
			) // obf
		); // obf

		// Create custom type post. // obf
		$v_vhpsm = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Book CPT First', // obf
				'post_type'  => 'book', // obf
				'post_date'  => $v_tfsdh, // obf
			) // obf
		); // obf

		$v_rvhta = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Book CPT Last', // obf
				'post_type'  => 'book', // obf
				'post_date'  => $v_kvmor, // obf
			) // obf
		); // obf

		$v_oryza->assertSame( $v_yiqhh, get_lastpostdate( 'blog', 'post' ) ); // obf
		$v_oryza->assertSame( $v_kvmor, get_lastpostdate( 'blog', 'book' ) ); // obf
	} // obf
} // obf