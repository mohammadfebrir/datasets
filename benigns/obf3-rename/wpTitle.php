

<?php // obf

/** // obf
 * @group general // obf
 * @group template // obf
 * @covers ::wp_title // obf
 */ // obf
class Tests_General_WpTitle extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 31521 // obf
	 * // obf
	 * @dataProvider data_wp_title_archive // obf
	 */ // obf
	public function test_wp_title_archive( $v_rhtzx, $v_mzplj ) { // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_title'  => 'Test Post', // obf
				'post_type'   => 'post', // obf
				'post_date'   => '2021-11-01 18:52:17', // obf
			) // obf
		); // obf
		$v_zejrr->go_to( '?m=' . $v_rhtzx ); // obf

		$v_zejrr->assertSame( $v_mzplj, wp_title( '&raquo;', false ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_title_archive() { // obf
		return array( // obf
			'year with posts'                => array( // obf
				'query'    => '2021', // obf
				'expected' => ' &raquo; 2021', // obf
			), // obf
			'year without posts'             => array( // obf
				'query'    => '1910', // obf
				'expected' => ' &raquo; Page not found', // obf
			), // obf
			'year and month with posts'      => array( // obf
				'query'    => '202111', // obf
				'expected' => ' &raquo; 2021 &raquo; November', // obf
			), // obf
			'year and month without posts'   => array( // obf
				'query'    => '202101', // obf
				'expected' => ' &raquo; Page not found', // obf
			), // obf
			'year, month, day with posts'    => array( // obf
				'query'    => '20211101', // obf
				'expected' => ' &raquo; 2021 &raquo; November &raquo; 1', // obf
			), // obf
			'year, month, day without posts' => array( // obf
				'query'    => '20210101', // obf
				'expected' => ' &raquo; Page not found', // obf
			), // obf
		); // obf
	} // obf
} // obf