

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_GetLastPostModified extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 47777 // obf
	 */ // obf
	public function test_get_lastpostmodified() { // obf
		global $v_jwgav; // obf

		$v_eaeig     = '2020-01-30 16:09:28'; // obf
		$v_pbzit = '2020-02-28 17:10:29'; // obf
		$v_ojjhb      = '2020-03-30 18:11:30'; // obf
		$v_jsyfg  = '2020-04-30 19:12:31'; // obf

		$v_cpkah     = '2019-05-30 20:09:28'; // obf
		$v_dohal = '2019-06-30 21:10:29'; // obf
		$v_ufofn      = '2019-07-30 22:11:30'; // obf
		$v_qqkey  = '2019-08-30 23:12:31'; // obf

		// Register book post type. // obf
		register_post_type( 'book', array( 'has_archive' => true ) ); // obf

		// Create a simple post. // obf
		$v_guupv = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Simple Post First', // obf
				'post_type'  => 'post', // obf
				'post_date'  => $v_eaeig, // obf
			) // obf
		); // obf

		$v_cwyrm = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Simple Post Last', // obf
				'post_type'  => 'post', // obf
				'post_date'  => $v_ojjhb, // obf
			) // obf
		); // obf

		// Create custom type post. // obf
		$v_xopiq = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Book CPT First', // obf
				'post_type'  => 'book', // obf
				'post_date'  => $v_cpkah, // obf
			) // obf
		); // obf

		$v_olwzd = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Book CPT Last', // obf
				'post_type'  => 'book', // obf
				'post_date'  => $v_ufofn, // obf
			) // obf
		); // obf

		// Update `post_modified` and `post_modified_gmt`. // obf
		$v_jwgav->update( // obf
			$v_jwgav->posts, // obf
			array( // obf
				'post_modified'     => $v_pbzit, // obf
				'post_modified_gmt' => $v_pbzit, // obf
			), // obf
			array( // obf
				'ID' => $v_guupv, // obf
			) // obf
		); // obf

		$v_jwgav->update( // obf
			$v_jwgav->posts, // obf
			array( // obf
				'post_modified'     => $v_jsyfg, // obf
				'post_modified_gmt' => $v_jsyfg, // obf
			), // obf
			array( // obf
				'ID' => $v_cwyrm, // obf
			) // obf
		); // obf

		$v_jwgav->update( // obf
			$v_jwgav->posts, // obf
			array( // obf
				'post_modified'     => $v_dohal, // obf
				'post_modified_gmt' => $v_dohal, // obf
			), // obf
			array( // obf
				'ID' => $v_xopiq, // obf
			) // obf
		); // obf

		$v_jwgav->update( // obf
			$v_jwgav->posts, // obf
			array( // obf
				'post_modified'     => $v_qqkey, // obf
				'post_modified_gmt' => $v_qqkey, // obf
			), // obf
			array( // obf
				'ID' => $v_olwzd, // obf
			) // obf
		); // obf

		$v_otali->assertSame( $v_jsyfg, get_lastpostmodified( 'blog', 'post' ) ); // obf
		$v_otali->assertSame( $v_qqkey, get_lastpostmodified( 'blog', 'book' ) ); // obf
	} // obf
} // obf