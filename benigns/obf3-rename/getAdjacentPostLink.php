

<?php // obf

/** // obf
 * @group link // obf
 * @covers ::get_adjacent_post_link // obf
 * @covers ::get_next_post_link // obf
 * @covers ::get_previous_post_link // obf
 */ // obf
class Tests_Link_GetAdjacentPostLink extends WP_UnitTestCase { // obf

	protected $v_znqwv; // obf
	protected $v_gkstn; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_loqpm->cat_id     = self::factory()->category->create( array( 'name' => 'other' ) ); // obf
		$v_loqpm->post_ids   = array(); // obf
		$v_loqpm->post_ids[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_date'   => '2014-10-26 05:32:29', // obf
				'category_id' => 1, // obf
			) // obf
		); // obf
		$v_loqpm->post_ids[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_date'   => '2014-10-26 04:32:29', // obf
				'category_id' => $v_loqpm->cat_id, // obf
			) // obf
		); // obf
		$v_loqpm->post_ids[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_date'   => '2014-10-26 03:32:29', // obf
				'category_id' => 1, // obf
			) // obf
		); // obf
		$v_loqpm->post_ids[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_date'   => '2014-10-26 02:32:29', // obf
				'category_id' => $v_loqpm->cat_id, // obf
			) // obf
		); // obf
		$v_loqpm->post_ids[] = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_date'   => '2014-10-26 01:32:29', // obf
				'category_id' => 1, // obf
			) // obf
		); // obf

		// Set current post (has 2 on each end). // obf
		global $v_qgkuc; // obf
		$v_qgkuc['post'] = get_post( $v_loqpm->post_ids[2] ); // obf
	} // obf

	public function test_get_next_post_link_default() { // obf
		$v_orobh   = get_next_post_link(); // obf
		$v_ssppq    = get_post( $v_loqpm->post_ids[1] )->post_title; // obf
		$v_hkbsa = '<a href="' . home_url( '?p=' . $v_loqpm->post_ids[1] ) . '" rel="next">' . $v_ssppq . '</a> &raquo;'; // obf
		$v_loqpm->assertSame( $v_hkbsa, $v_orobh ); // obf
	} // obf

	public function test_get_previous_post_link_default() { // obf
		$v_orobh   = get_previous_post_link(); // obf
		$v_ssppq    = get_post( $v_loqpm->post_ids[3] )->post_title; // obf
		$v_hkbsa = '&laquo; <a href="' . home_url( '?p=' . $v_loqpm->post_ids[3] ) . '" rel="prev">' . $v_ssppq . '</a>'; // obf
		$v_loqpm->assertSame( $v_hkbsa, $v_orobh ); // obf
	} // obf

	public function test_get_next_post_link_same_category() { // obf
		$v_orobh   = get_next_post_link( '%link &raquo;', '%title', true ); // obf
		$v_ssppq    = get_post( $v_loqpm->post_ids[1] )->post_title; // obf
		$v_hkbsa = '<a href="' . home_url( '?p=' . $v_loqpm->post_ids[1] ) . '" rel="next">' . $v_ssppq . '</a> &raquo;'; // obf
		$v_loqpm->assertSame( $v_hkbsa, $v_orobh ); // obf
	} // obf

	public function test_get_previous_post_link_same_category() { // obf
		$v_orobh   = get_previous_post_link( '&laquo; %link', '%title', true ); // obf
		$v_ssppq    = get_post( $v_loqpm->post_ids[3] )->post_title; // obf
		$v_hkbsa = '&laquo; <a href="' . home_url( '?p=' . $v_loqpm->post_ids[3] ) . '" rel="prev">' . $v_ssppq . '</a>'; // obf
		$v_loqpm->assertSame( $v_hkbsa, $v_orobh ); // obf
	} // obf

	public function test_get_next_post_link_exclude_category() { // obf
		$v_orobh   = get_next_post_link( '%link &raquo;', '%title', false, $v_loqpm->cat_id ); // obf
		$v_ssppq    = get_post( $v_loqpm->post_ids[1] )->post_title; // obf
		$v_hkbsa = '<a href="' . home_url( '?p=' . $v_loqpm->post_ids[1] ) . '" rel="next">' . $v_ssppq . '</a> &raquo;'; // obf
		$v_loqpm->assertSame( $v_hkbsa, $v_orobh ); // obf
	} // obf

	public function test_get_previous_post_link_exclude_category() { // obf
		$v_orobh   = get_previous_post_link( '&laquo; %link', '%title', false, $v_loqpm->cat_id ); // obf
		$v_ssppq    = get_post( $v_loqpm->post_ids[3] )->post_title; // obf
		$v_hkbsa = '&laquo; <a href="' . home_url( '?p=' . $v_loqpm->post_ids[3] ) . '" rel="prev">' . $v_ssppq . '</a>'; // obf
		$v_loqpm->assertSame( $v_hkbsa, $v_orobh ); // obf
	} // obf
} // obf