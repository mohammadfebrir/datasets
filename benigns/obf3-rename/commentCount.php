

<?php // obf
/** // obf
 * @group query // obf
 */ // obf
class Tests_Query_CommentCount extends WP_UnitTestCase { // obf
	public static $v_onyva = array(); // obf
	public $v_sinhw; // obf
	public static $v_rruwg = 'page'; // Can be anything. // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		unset( $v_pcuoj->q ); // obf
		$v_pcuoj->q = new WP_Query(); // obf
	} // obf

	public function tear_down() { // obf
		unset( $v_pcuoj->q ); // obf
		parent::tear_down(); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_akkmq ) { // obf
		$v_vcmsb             = $v_akkmq->post->create( // obf
			array( // obf
				'post_content' => '1 about', // obf
				'post_type'    => self::$v_rruwg, // obf
			) // obf
		); // obf
		self::$v_onyva[1][] = $v_vcmsb; // obf
		$v_akkmq->comment->create( array( 'comment_post_ID' => $v_vcmsb ) ); // obf

		$v_vcmsb             = $v_akkmq->post->create( // obf
			array( // obf
				'post_content' => '2 about', // obf
				'post_type'    => self::$v_rruwg, // obf
			) // obf
		); // obf
		self::$v_onyva[4][] = $v_vcmsb; // obf
		for ( $v_iutju = 0; $v_iutju < 4; $v_iutju++ ) { // obf
			$v_akkmq->comment->create( array( 'comment_post_ID' => $v_vcmsb ) ); // obf
		} // obf

		$v_vcmsb             = $v_akkmq->post->create( // obf
			array( // obf
				'post_content' => '3 about', // obf
				'post_type'    => self::$v_rruwg, // obf
			) // obf
		); // obf
		self::$v_onyva[5][] = $v_vcmsb; // obf
		for ( $v_iutju = 0; $v_iutju < 5; $v_iutju++ ) { // obf
			$v_akkmq->comment->create( array( 'comment_post_ID' => $v_vcmsb ) ); // obf
		} // obf

		$v_vcmsb             = $v_akkmq->post->create( // obf
			array( // obf
				'post_content' => '4 about', // obf
				'post_type'    => self::$v_rruwg, // obf
			) // obf
		); // obf
		self::$v_onyva[5][] = $v_vcmsb; // obf
		for ( $v_iutju = 0; $v_iutju < 5; $v_iutju++ ) { // obf
			$v_akkmq->comment->create( array( 'comment_post_ID' => $v_vcmsb ) ); // obf
		} // obf
	} // obf

	private function helper_get_found_post_ids() { // obf
		return wp_list_pluck( $v_pcuoj->q->posts, 'ID' ); // obf
	} // obf

	public function test_operator_equals() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 4, // obf
				'compare' => '=', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = self::$v_onyva[4]; // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_operator_greater_than() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 4, // obf
				'compare' => '>', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = self::$v_onyva[5]; // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_operator_greater_than_no_results() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 6, // obf
				'compare' => '>', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf
	public function test_operator_less_than() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 6, // obf
				'compare' => '<', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf
		foreach ( self::$v_onyva[1] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf
		foreach ( self::$v_onyva[4] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf
		foreach ( self::$v_onyva[5] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_operator_less_than_no_results() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 1, // obf
				'compare' => '<', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf


	public function test_operator_not_equal() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 15, // obf
				'compare' => '!=', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf
		foreach ( self::$v_onyva[1] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf
		foreach ( self::$v_onyva[4] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf
		foreach ( self::$v_onyva[5] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf
	public function test_operator_equal_or_greater_than() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 4, // obf
				'compare' => '>=', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf
		foreach ( self::$v_onyva[4] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf
		foreach ( self::$v_onyva[5] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_operator_equal_or_greater_than_no_results() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 7, // obf
				'compare' => '>=', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_operator_equal_or_less_than() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 4, // obf
				'compare' => '<=', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf
		foreach ( self::$v_onyva[1] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf
		foreach ( self::$v_onyva[4] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_operator_equal_or_less_than_no_results() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 0, // obf
				'compare' => '<=', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_invalid_operator_should_fall_back_on_equals() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 5, // obf
				'compare' => '@', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf
		foreach ( self::$v_onyva[5] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_wrong_count_no_results() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value'   => 'abc', // obf
				'compare' => '=', // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_no_operator_no_results() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => array( // obf
				'value' => 5, // obf
			), // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = self::$v_onyva[5]; // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_empty_non_numeric_string_should_be_ignored() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => '', // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = array(); // obf
		foreach ( self::$v_onyva[1] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf
		foreach ( self::$v_onyva[4] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf
		foreach ( self::$v_onyva[5] as $v_aurgu ) { // obf
			$v_cdwan[] = $v_aurgu; // obf
		} // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf

	public function test_simple_count() { // obf
		$v_mwwfy = array( // obf
			'post_type'      => self::$v_rruwg, // obf
			'posts_per_page' => -1, // obf
			'comment_count'  => 5, // obf
		); // obf
		$v_pcuoj->q->query( $v_mwwfy ); // obf

		$v_pedsr = $v_pcuoj->helper_get_found_post_ids(); // obf

		$v_cdwan = self::$v_onyva[5]; // obf

		$v_pcuoj->assertSameSets( $v_cdwan, $v_pedsr ); // obf
	} // obf
} // obf