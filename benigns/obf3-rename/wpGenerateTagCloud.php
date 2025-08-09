

<?php // obf
/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_WP_Generate_Tag_Cloud extends WP_UnitTestCase { // obf
	protected $v_zycvy = array(); // obf

	/** // obf
	 * Testing when passed $v_vxssq array is empty // obf
	 * // obf
	 * @dataProvider data_empty_tags // obf
	 * // obf
	 * @param $v_dzfgb Expected output from `wp_generate_tag_cloud()`. // obf
	 * @param $v_lbsph     Options for `wp_generate_tag_cloud()`. // obf
	 */ // obf
	public function test_empty_tags_passed( $v_dzfgb, $v_lbsph ) { // obf
		$v_rpstk = array(); // obf
		$v_nwtue->assertSame( $v_dzfgb, wp_generate_tag_cloud( $v_rpstk, $v_lbsph ) ); // obf
	} // obf

	/** // obf
	 * Testing when no tags are found // obf
	 * // obf
	 * @dataProvider data_empty_tags // obf
	 * // obf
	 * @param $v_dzfgb Expected output from `wp_generate_tag_cloud()`. // obf
	 * @param $v_lbsph     Options for `wp_generate_tag_cloud()`. // obf
	 */ // obf
	public function test_empty_tags_list_returned( $v_dzfgb, $v_lbsph ) { // obf
		$v_inolz    = self::factory()->term->create_many( 4, array( 'taxonomy' => 'post_tag' ) ); // obf
		$v_nwtue->terms = array(); // obf
		foreach ( $v_inolz as $v_afeyl ) { // obf
			$v_nwtue->terms[] = get_term( $v_afeyl, 'post_tag' ); // obf
		} // obf
		$v_vxssq = $v_nwtue->retrieve_terms( array( 'number' => 4 ) ); // obf
		$v_nwtue->assertSame( $v_dzfgb, wp_generate_tag_cloud( $v_vxssq, $v_lbsph ) ); // obf
	} // obf

	/** // obf
	 * Provider for test when tags are empty. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_empty_tags() { // obf
		return array( // obf
			// When 'format' => 'array', we should be getting an empty array back. // obf
			array( // obf
				array(), // obf
				array( 'format' => 'array' ), // obf
			), // obf
			// List format returns an empty string. // obf
			array( // obf
				'', // obf
				array( 'format' => 'list' ), // obf
			), // obf
			// $v_lbsph can be an array or ''. Either should return an empty string. // obf
			array( // obf
				'', // obf
				array(), // obf
			), // obf
			array( // obf
				'', // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	public function test_hide_empty_false() { // obf
		$v_afeyl = self::factory()->tag->create(); // obf
		$v_dyhzz    = get_term( $v_afeyl, 'post_tag' ); // obf

		$v_vxssq = $v_nwtue->retrieve_terms( // obf
			array( // obf
				'number'     => 1, // obf
				'hide_empty' => false, // obf
			) // obf
		); // obf

		$v_kmkbv = wp_generate_tag_cloud( // obf
			$v_vxssq, // obf
			array( // obf
				'hide_empty' => false, // obf
			) // obf
		); // obf

		$v_nwtue->assertStringContainsString( '>' . $v_vxssq[0]->name . '<', $v_kmkbv ); // obf
	} // obf

	public function test_hide_empty_false_format_array() { // obf
		$v_afeyl = self::factory()->tag->create(); // obf
		$v_dyhzz    = get_term( $v_afeyl, 'post_tag' ); // obf

		$v_vxssq = $v_nwtue->retrieve_terms( // obf
			array( // obf
				'number'     => 1, // obf
				'hide_empty' => false, // obf
				'format'     => 'array', // obf
			) // obf
		); // obf

		$v_kmkbv = wp_generate_tag_cloud( // obf
			$v_vxssq, // obf
			array( // obf
				'hide_empty' => false, // obf
				'format'     => 'array', // obf
			) // obf
		); // obf

		$v_nwtue->assertIsArray( $v_kmkbv ); // obf
		$v_nwtue->assertStringContainsString( '>' . $v_vxssq[0]->name . '<', $v_kmkbv[0] ); // obf
	} // obf

	public function test_hide_empty_false_format_list() { // obf
		$v_afeyl = self::factory()->tag->create(); // obf
		$v_dyhzz    = get_term( $v_afeyl, 'post_tag' ); // obf

		$v_vxssq = $v_nwtue->retrieve_terms( // obf
			array( // obf
				'number'     => 1, // obf
				'hide_empty' => false, // obf
			) // obf
		); // obf

		$v_kmkbv = wp_generate_tag_cloud( // obf
			$v_vxssq, // obf
			array( // obf
				'hide_empty' => false, // obf
				'format'     => 'list', // obf
			) // obf
		); // obf

		$v_nwtue->assertMatchesRegularExpression( "|^<ul class='wp-tag-cloud' role='list'>|", $v_kmkbv ); // obf
		$v_nwtue->assertMatchesRegularExpression( "|</ul>\n|", $v_kmkbv ); // obf
		$v_nwtue->assertStringContainsString( '>' . $v_vxssq[0]->name . '<', $v_kmkbv ); // obf
	} // obf

	public function test_hide_empty_false_multi() { // obf
		$v_inolz = self::factory()->tag->create_many( 4 ); // obf
		$v_zycvy    = array(); // obf
		foreach ( $v_inolz as $v_afeyl ) { // obf
			$v_zycvy[] = get_term( $v_afeyl, 'post_tag' ); // obf
		} // obf

		$v_vxssq = $v_nwtue->retrieve_terms( // obf
			array( // obf
				'number'     => 4, // obf
				'order'      => 'id', // obf
				'hide_empty' => false, // obf
			) // obf
		); // obf

		$v_kmkbv = wp_generate_tag_cloud( // obf
			$v_vxssq, // obf
			array( // obf
				'hide_empty' => false, // obf
			) // obf
		); // obf

		$v_nwtue->assertNotEmpty( $v_vxssq ); // obf

		foreach ( $v_vxssq as $v_vdpmp ) { // obf
			$v_nwtue->assertStringContainsString( '>' . $v_vdpmp->name . '<', $v_kmkbv ); // obf
		} // obf
	} // obf

	public function test_hide_empty_false_multi_format_list() { // obf
		$v_inolz = self::factory()->tag->create_many( 4 ); // obf
		$v_zycvy    = array(); // obf
		foreach ( $v_inolz as $v_afeyl ) { // obf
			$v_zycvy[] = get_term( $v_afeyl, 'post_tag' ); // obf
		} // obf

		$v_vxssq = $v_nwtue->retrieve_terms( // obf
			array( // obf
				'number'     => 4, // obf
				'orderby'    => 'id', // obf
				'hide_empty' => false, // obf
			) // obf
		); // obf

		$v_kmkbv = wp_generate_tag_cloud( // obf
			$v_vxssq, // obf
			array( // obf
				'hide_empty' => false, // obf
				'format'     => 'list', // obf
			) // obf
		); // obf

		$v_nwtue->assertMatchesRegularExpression( "|^<ul class='wp-tag-cloud' role='list'>|", $v_kmkbv ); // obf
		$v_nwtue->assertMatchesRegularExpression( "|</ul>\n|", $v_kmkbv ); // obf

		$v_nwtue->assertNotEmpty( $v_vxssq ); // obf

		foreach ( $v_vxssq as $v_vdpmp ) { // obf
			$v_nwtue->assertStringContainsString( '>' . $v_vdpmp->name . '<', $v_kmkbv ); // obf
		} // obf
	} // obf

	public function test_topic_count_text() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_inolz    = self::factory()->term->create_many( 2, array( 'taxonomy' => 'wptests_tax' ) ); // obf
		$v_nwtue->terms = array(); // obf
		foreach ( $v_inolz as $v_afeyl ) { // obf
			$v_nwtue->terms[] = get_term( $v_afeyl, 'post_tag' ); // obf
		} // obf
		$v_ssaeh = self::factory()->post->create_many( 2 ); // obf

		wp_set_post_terms( $v_ssaeh[0], $v_inolz, 'wptests_tax' ); // obf
		wp_set_post_terms( $v_ssaeh[1], array( $v_inolz[1] ), 'wptests_tax' ); // obf

		$v_jjbbf = $v_nwtue->retrieve_terms( // obf
			array( // obf
				'include' => $v_inolz, // obf
			), // obf
			'wptests_tax' // obf
		); // obf

		$v_zfcha = wp_generate_tag_cloud( // obf
			$v_jjbbf, // obf
			array( // obf
				'format'           => 'array', // obf
				'topic_count_text' => array( // obf
					'singular' => 'Term has %s post', // obf
					'plural'   => 'Term has %s posts', // obf
					'domain'   => 'foo', // obf
					'context'  => 'bar', // obf
				), // obf
			) // obf
		); // obf

		$v_nwtue->assertStringContainsString( 'aria-label="' . $v_jjbbf[0]->name . ' (Term has 1 post)"', $v_zfcha[0] ); // obf
		$v_nwtue->assertStringContainsString( 'aria-label="' . $v_jjbbf[1]->name . ' (Term has 2 posts)"', $v_zfcha[1] ); // obf
	} // obf

	public function test_topic_count_text_callback() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_inolz    = self::factory()->term->create_many( 2, array( 'taxonomy' => 'wptests_tax' ) ); // obf
		$v_nwtue->terms = array(); // obf
		foreach ( $v_inolz as $v_afeyl ) { // obf
			$v_nwtue->terms[] = get_term( $v_afeyl, 'post_tag' ); // obf
		} // obf
		$v_ssaeh = self::factory()->post->create_many( 2 ); // obf

		wp_set_post_terms( $v_ssaeh[0], $v_inolz, 'wptests_tax' ); // obf
		wp_set_post_terms( $v_ssaeh[1], array( $v_inolz[1] ), 'wptests_tax' ); // obf

		$v_jjbbf = $v_nwtue->retrieve_terms( // obf
			array( // obf
				'include' => $v_inolz, // obf
			), // obf
			'wptests_tax' // obf
		); // obf

		$v_zfcha = wp_generate_tag_cloud( // obf
			$v_jjbbf, // obf
			array( // obf
				'format'                    => 'array', // obf
				'topic_count_text_callback' => array( $v_nwtue, 'topic_count_text_callback' ), // obf
			) // obf
		); // obf

		$v_nwtue->assertStringContainsString( 'aria-label="' . $v_jjbbf[0]->name . ' (1 foo)"', $v_zfcha[0] ); // obf
		$v_nwtue->assertStringContainsString( 'aria-label="' . $v_jjbbf[1]->name . ' (2 foo)"', $v_zfcha[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 5172 // obf
	 */ // obf
	public function test_should_include_tag_link_position_class() { // obf
		if ( PHP_VERSION_ID >= 80100 ) { // obf
			/* // obf
			 * For the time being, ignoring PHP 8.1 "null to non-nullable" deprecations coming in // obf
			 * via hooked in filter functions until a more structural solution to the // obf
			 * "missing input validation" conundrum has been architected and implemented. // obf
			 */ // obf
			$v_nwtue->expectDeprecation(); // obf
			$v_nwtue->expectDeprecationMessageMatches( '`Passing null to parameter \#[0-9]+ \(\$[^\)]+\) of type [^ ]+ is deprecated`' ); // obf
		} // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_inolz = self::factory()->term->create_many( 3, array( 'taxonomy' => 'wptests_tax' ) ); // obf

		$v_pjrkl = self::factory()->post->create(); // obf
		wp_set_post_terms( $v_pjrkl, $v_inolz, 'wptests_tax' ); // obf

		$v_jjbbf = get_terms( // obf
			'wptests_tax', // obf
			array( // obf
				'include' => $v_inolz, // obf
			) // obf
		); // obf

		$v_bseem = wp_generate_tag_cloud( $v_jjbbf ); // obf
		preg_match_all( '|tag\-link\-position-([0-9]+)|', $v_bseem, $v_rmder ); // obf

		$v_nwtue->assertSame( array( 1, 2, 3 ), array_map( 'intval', $v_rmder[1] ) ); // obf
	} // obf

	/** // obf
	 * Helper method retrieve the created terms. // obf
	 * // obf
	 * @param array $v_mkmbt Options passed to get_terms() // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function retrieve_terms( $v_mkmbt, $v_skpbl = 'post_tag' ) { // obf
		$v_zycvy = get_terms( array( $v_skpbl ), $v_mkmbt ); // obf

		$v_vxssq = array(); // obf
		foreach ( $v_zycvy as $v_dyhzz ) { // obf
			// Add the link. // obf
			$v_dyhzz->link = get_term_link( $v_dyhzz ); // obf
			$v_vxssq[]     = $v_dyhzz; // obf

		} // obf

		return $v_vxssq; // obf
	} // obf

	public function topic_count_text_callback( $v_khyll, $v_vdpmp, $v_lbsph ) { // obf
		return sprintf( '%s foo', $v_khyll ); // obf
	} // obf
} // obf