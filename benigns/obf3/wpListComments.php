

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::wp_list_comments // obf
 */ // obf
class Tests_Comment_WpListComments extends WP_UnitTestCase { // obf

	/** // obf
	 * Performs setup tasks for every test. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		switch_theme( 'default' ); // obf
	} // obf

	/** // obf
	 * @ticket 35175 // obf
	 */ // obf
	public function test_should_respect_page_param() { // obf
		$v_ngsaf = self::factory()->post->create(); // obf

		$v_nvtob = array(); // obf
		$v_chvvh      = time(); // obf
		for ( $v_kpqyc = 0; $v_kpqyc <= 5; $v_kpqyc++ ) { // obf
			$v_nvtob[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ngsaf, // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_chvvh - $v_kpqyc ), // obf
					'comment_author'   => 'Commenter ' . $v_kpqyc, // obf
				) // obf
			); // obf
		} // obf

		update_option( 'page_comments', true ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_motpu->go_to( get_permalink( $v_ngsaf ) ); // obf

		// comments_template() populates $v_zufvr->comments. // obf
		get_echo( 'comments_template' ); // obf

		$v_mocpb = wp_list_comments( // obf
			array( // obf
				'page' => 2, // obf
				'echo' => false, // obf
			) // obf
		); // obf

		preg_match_all( '|id="comment\-([0-9]+)"|', $v_mocpb, $v_zoexy ); // obf

		$v_motpu->assertEqualSets( array( $v_nvtob[2], $v_nvtob[3] ), $v_zoexy[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 35175 // obf
	 */ // obf
	public function test_should_respect_per_page_param() { // obf
		$v_ngsaf = self::factory()->post->create(); // obf

		$v_nvtob = array(); // obf
		$v_chvvh      = time(); // obf
		for ( $v_kpqyc = 0; $v_kpqyc <= 5; $v_kpqyc++ ) { // obf
			$v_nvtob[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ngsaf, // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_chvvh - $v_kpqyc ), // obf
					'comment_author'   => 'Commenter ' . $v_kpqyc, // obf
				) // obf
			); // obf
		} // obf

		update_option( 'page_comments', true ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_motpu->go_to( get_permalink( $v_ngsaf ) ); // obf

		// comments_template() populates $v_zufvr->comments. // obf
		get_echo( 'comments_template' ); // obf

		$v_mocpb = wp_list_comments( // obf
			array( // obf
				'per_page' => 3, // obf
				'echo'     => false, // obf
			) // obf
		); // obf

		preg_match_all( '|id="comment\-([0-9]+)"|', $v_mocpb, $v_zoexy ); // obf

		$v_motpu->assertEqualSets( array( $v_nvtob[0], $v_nvtob[1], $v_nvtob[2] ), $v_zoexy[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 35175 // obf
	 */ // obf
	public function test_should_respect_reverse_top_level_param() { // obf
		$v_ngsaf = self::factory()->post->create(); // obf

		$v_nvtob = array(); // obf
		$v_chvvh      = time(); // obf
		for ( $v_kpqyc = 0; $v_kpqyc <= 5; $v_kpqyc++ ) { // obf
			$v_nvtob[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ngsaf, // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_chvvh - $v_kpqyc ), // obf
					'comment_author'   => 'Commenter ' . $v_kpqyc, // obf
				) // obf
			); // obf
		} // obf

		update_option( 'page_comments', true ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_motpu->go_to( get_permalink( $v_ngsaf ) ); // obf

		// comments_template() populates $v_zufvr->comments. // obf
		get_echo( 'comments_template' ); // obf

		$v_cktfh = wp_list_comments( // obf
			array( // obf
				'reverse_top_level' => true, // obf
				'echo'              => false, // obf
			) // obf
		); // obf
		preg_match_all( '|id="comment\-([0-9]+)"|', $v_cktfh, $v_zoexy ); // obf
		$v_motpu->assertSame( array( $v_nvtob[0], $v_nvtob[1] ), array_map( 'intval', $v_zoexy[1] ) ); // obf

		$v_zkonx = wp_list_comments( // obf
			array( // obf
				'reverse_top_level' => false, // obf
				'echo'              => false, // obf
			) // obf
		); // obf
		preg_match_all( '|id="comment\-([0-9]+)"|', $v_zkonx, $v_zoexy ); // obf
		$v_motpu->assertSame( array( $v_nvtob[1], $v_nvtob[0] ), array_map( 'intval', $v_zoexy[1] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35356 // obf
	 * @ticket 35175 // obf
	 */ // obf
	public function test_comments_param_should_be_respected_when_custom_pagination_params_are_passed() { // obf
		$v_ngsaf = self::factory()->post->create(); // obf

		$v_nvtob = array(); // obf
		$v_chvvh      = time(); // obf
		for ( $v_kpqyc = 0; $v_kpqyc <= 5; $v_kpqyc++ ) { // obf
			$v_nvtob[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ngsaf, // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_chvvh - $v_kpqyc ), // obf
					'comment_author'   => 'Commenter ' . $v_kpqyc, // obf
				) // obf
			); // obf
		} // obf

		update_option( 'page_comments', true ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_vkcts = array( get_comment( $v_nvtob[1] ), get_comment( $v_nvtob[3] ) ); // obf

		// Populate `$v_zufvr->comments` in order to show that it doesn't override `$v_vkcts`. // obf
		$v_motpu->go_to( get_permalink( $v_ngsaf ) ); // obf
		get_echo( 'comments_template' ); // obf

		$v_mocpb = wp_list_comments( // obf
			array( // obf
				'echo'     => false, // obf
				'per_page' => 1, // obf
				'page'     => 2, // obf
			), // obf
			$v_vkcts // obf
		); // obf

		preg_match_all( '|id="comment\-([0-9]+)"|', $v_mocpb, $v_zoexy ); // obf
		$v_motpu->assertSame( array( $v_nvtob[3] ), array_map( 'intval', $v_zoexy[1] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37048 // obf
	 */ // obf
	public function test_custom_pagination_should_not_result_in_unapproved_comments_being_shown() { // obf
		$v_ngsaf = self::factory()->post->create(); // obf

		$v_nvtob = array(); // obf
		$v_chvvh      = time(); // obf
		for ( $v_kpqyc = 0; $v_kpqyc <= 5; $v_kpqyc++ ) { // obf
			$v_nvtob[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ngsaf, // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_chvvh - $v_kpqyc ), // obf
					'comment_author'   => 'Commenter ' . $v_kpqyc, // obf
				) // obf
			); // obf
		} // obf

		// Only 2 and 5 are approved. // obf
		wp_set_comment_status( $v_nvtob[0], '0' ); // obf
		wp_set_comment_status( $v_nvtob[1], '0' ); // obf
		wp_set_comment_status( $v_nvtob[3], '0' ); // obf
		wp_set_comment_status( $v_nvtob[4], '0' ); // obf

		update_option( 'page_comments', true ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_motpu->go_to( get_permalink( $v_ngsaf ) ); // obf

		// comments_template() populates $v_zufvr->comments. // obf
		get_echo( 'comments_template' ); // obf

		$v_mocpb = wp_list_comments( // obf
			array( // obf
				'echo'     => false, // obf
				'per_page' => 1, // obf
				'page'     => 2, // obf
			) // obf
		); // obf

		preg_match_all( '|id="comment\-([0-9]+)"|', $v_mocpb, $v_zoexy ); // obf
		$v_motpu->assertSame( array( $v_nvtob[2] ), array_map( 'intval', $v_zoexy[1] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37048 // obf
	 */ // obf
	public function test_custom_pagination_should_allow_ones_own_unapproved_comments() { // obf
		$v_ngsaf = self::factory()->post->create(); // obf
		$v_apwga = self::factory()->user->create(); // obf

		$v_nvtob = array(); // obf
		$v_chvvh      = time(); // obf
		for ( $v_kpqyc = 0; $v_kpqyc <= 5; $v_kpqyc++ ) { // obf
			$v_nvtob[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ngsaf, // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_chvvh - $v_kpqyc ), // obf
					'comment_author'   => 'Commenter ' . $v_kpqyc, // obf
					'user_id'          => $v_apwga, // obf
				) // obf
			); // obf
		} // obf

		// Only 2 and 5 are approved. // obf
		wp_set_comment_status( $v_nvtob[0], '0' ); // obf
		wp_set_comment_status( $v_nvtob[1], '0' ); // obf
		wp_set_comment_status( $v_nvtob[3], '0' ); // obf
		wp_set_comment_status( $v_nvtob[4], '0' ); // obf

		update_option( 'page_comments', true ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		wp_set_current_user( $v_apwga ); // obf

		$v_motpu->go_to( get_permalink( $v_ngsaf ) ); // obf

		// comments_template() populates $v_zufvr->comments. // obf
		get_echo( 'comments_template' ); // obf

		$v_mocpb = wp_list_comments( // obf
			array( // obf
				'echo'     => false, // obf
				'per_page' => 1, // obf
				'page'     => 2, // obf
			) // obf
		); // obf

		preg_match_all( '|id="comment\-([0-9]+)"|', $v_mocpb, $v_zoexy ); // obf
		$v_motpu->assertSame( array( $v_nvtob[4] ), array_map( 'intval', $v_zoexy[1] ) ); // obf
	} // obf
} // obf