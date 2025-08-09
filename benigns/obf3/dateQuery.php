

<?php // obf

/** // obf
 * Tests to make sure querying posts based on various date parameters using "date_query" works as expected. // obf
 * // obf
 * @ticket 18694 // obf
 * // obf
 * @group query // obf
 * @group date // obf
 * @group datequery // obf
 */ // obf
class Tests_Query_DateQuery extends WP_UnitTestCase { // obf

	public $v_oxpnk; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		unset( $v_tigqx->q ); // obf
		$v_tigqx->q = new WP_Query(); // obf
	} // obf

	public function _get_query_result( $v_fnjpa = array() ) { // obf
		$v_fnjpa = wp_parse_args( // obf
			$v_fnjpa, // obf
			array( // obf
				'post_status'            => 'any', // For the future post. // obf
				'posts_per_page'         => '-1',  // To make sure results are accurate. // obf
				'orderby'                => 'ID',  // Same order they were created. // obf
				'order'                  => 'ASC', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
			) // obf
		); // obf

		return $v_tigqx->q->query( $v_fnjpa ); // obf
	} // obf

	public function test_date_query_before_array() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2007-09-24 07:17:23' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2008-03-29 07:17:23' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2008-07-15 07:17:23' ) ); // obf
		$v_yjzol = self::factory()->post->create( array( 'post_date' => '2009-06-11 07:17:23' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'before' => array( // obf
							'year'  => 2008, // obf
							'month' => 6, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * Specifically tests to make sure values are defaulting to // obf
	 * their minimum values when being used with "before". // obf
	 */ // obf
	public function test_date_query_before_array_test_defaulting() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2007-09-24 07:17:23' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2008-03-29 07:17:23' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'before' => array( // obf
							'year' => 2008, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_before_string() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2007-09-24 07:17:23' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2008-03-29 07:17:23' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2008-07-15 07:17:23' ) ); // obf
		$v_yjzol = self::factory()->post->create( array( 'post_date' => '2009-06-11 07:17:23' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'before' => 'May 4th, 2008', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn, $v_xhpgi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_after_array() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2009-10-18 10:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2009-12-18 10:42:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2010-06-11 07:17:23' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'after' => array( // obf
							'year'  => 2009, // obf
							'month' => 12, // obf
							'day'   => 31, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_hmbdi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * Specifically tests to make sure values are defaulting to // obf
	 * their maximum values when being used with "after". // obf
	 */ // obf
	public function test_date_query_after_array_test_defaulting() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2008-12-18 10:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2009-01-18 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'after' => array( // obf
							'year' => 2008, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_after_string() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2009-12-18 09:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2009-12-18 10:42:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2009-12-19 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'after' => '2009-12-18 10:42:29', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_hmbdi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_after_string_inclusive() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2009-12-18 09:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2009-12-18 10:42:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2009-12-19 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'after'     => '2009-12-18 10:42:29', // obf
						'inclusive' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi, $v_hmbdi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26653 // obf
	 */ // obf
	public function test_date_query_inclusive_between_dates() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2006-12-18 09:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2007-01-18 10:42:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2007-12-19 10:42:29' ) ); // obf
		$v_yjzol = self::factory()->post->create( array( 'post_date' => '2008-12-19 10:42:29' ) ); // obf
		$v_fvjrv = self::factory()->post->create( array( 'post_date' => '2009-12-19 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					'after'     => array( // obf
						'year'  => 2007, // obf
						'month' => 1, // obf
					), // obf
					'before'    => array( // obf
						'year'  => 2008, // obf
						'month' => 12, // obf
					), // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi, $v_hmbdi, $v_yjzol ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_Y() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 13:00:00', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2007-05-07 13:00:00', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before' => '2008', // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after' => '2007', // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSame( array( $v_isefn ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_Y_inclusive() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 13:00:00', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2007-05-07 13:00:00', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before'    => '2008', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after'     => '2007', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_Ym() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 13:00:00', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-04-07 13:00:00', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before' => '2008-05', // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after' => '2008-04', // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSame( array( $v_isefn ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_Ym_inclusive() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 13:00:00', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-04-07 13:00:00', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before'    => '2008-05', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after'     => '2008-04', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_Ymd() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 13:00:00', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-05 13:00:00', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before' => '2008-05-06', // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after' => '2008-05-05', // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSame( array( $v_isefn ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_Ymd_inclusive() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 13:00:00', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-05 13:00:00', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before'    => '2008-05-06', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after'     => '2008-05-05', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_YmdHi() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:05:00', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:04:00', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before' => '2008-05-06 14:05', // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after' => '2008-05-06 14:04', // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSame( array( $v_isefn ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_YmdHi_inclusive() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:05:00', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:04:00', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before'    => '2008-05-06 14:05', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after'     => '2008-05-06 14:04', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_YmdHis() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:05:15', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:05:14', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before' => '2008-05-06 14:05:15', // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after' => '2008-05-06 14:05:14', // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSame( array( $v_isefn ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_YmdHis_inclusive() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:04:15', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:04:14', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before'    => '2008-05-06 14:04:15', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after'     => '2008-05-06 14:04:14', // obf
					'inclusive' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_rraek ); // obf
		$v_tigqx->assertSameSets( array( $v_isefn, $v_xhpgi ), $v_jomjd ); // obf
	} // obf

	/** // obf
	 * @ticket 29908 // obf
	 */ // obf
	public function test_beforeafter_with_date_string_non_parseable() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:05:15', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2008-05-06 14:05:14', // obf
			) // obf
		); // obf

		$v_rraek = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'before' => 'June 12, 2008', // obf
				), // obf
			) // obf
		); // obf

		$v_jomjd = $v_tigqx->_get_query_result( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'date_query'             => array( // obf
					'after' => 'June 12, 2007', // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn, $v_xhpgi ), $v_rraek ); // obf
	} // obf

	public function test_date_query_year() { // obf
		$v_isefn    = self::factory()->post->create( array( 'post_date' => '2009-12-19 10:42:29' ) ); // obf
		$v_xhpgi    = self::factory()->post->create( array( 'post_date' => '2010-12-19 10:42:29' ) ); // obf
		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'year' => 2009, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_month() { // obf
		$v_isefn    = self::factory()->post->create( array( 'post_date' => '2009-12-19 10:42:29' ) ); // obf
		$v_xhpgi    = self::factory()->post->create( array( 'post_date' => '2010-11-19 10:42:29' ) ); // obf
		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'month' => 12, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_week() { // obf
		$v_isefn    = self::factory()->post->create( array( 'post_date' => '2009-01-02 10:42:29' ) ); // obf
		$v_xhpgi    = self::factory()->post->create( array( 'post_date' => '2010-03-19 10:42:29' ) ); // obf
		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'week' => 1, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_day() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2009-01-17 10:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2009-01-18 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'day' => 17, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_dayofweek() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2014-10-21 10:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2014-10-20 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'dayofweek' => 3, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28063 // obf
	 */ // obf
	public function test_date_query_dayofweek_iso() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2014-10-31 10:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2014-10-30 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'dayofweek_iso' => 5, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_hour() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2014-10-21 13:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2014-10-21 12:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'hour' => 13, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34228 // obf
	 */ // obf
	public function test_date_query_hour_should_not_ignore_0() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2014-10-21 00:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2014-10-21 01:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'year'     => 2014, // obf
				'monthnum' => 10, // obf
				'day'      => 21, // obf
				'hour'     => 0, // obf
				'minute'   => 42, // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_minute() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2014-10-21 10:56:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2014-10-21 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'minute' => 56, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_second() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2014-10-21 10:42:21' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2014-10-21 10:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'second' => 21, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_between_two_times() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2005-12-18 08:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2006-12-18 09:00:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2007-12-18 10:42:29' ) ); // obf
		$v_yjzol = self::factory()->post->create( array( 'post_date' => '2008-12-18 17:00:29' ) ); // obf
		$v_fvjrv = self::factory()->post->create( array( 'post_date' => '2009-12-18 18:42:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'hour'    => 9, // obf
						'minute'  => 0, // obf
						'compare' => '>=', // obf
					), // obf
					array( // obf
						'hour'    => '17', // obf
						'minute'  => '0', // obf
						'compare' => '<=', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSameSets( array( $v_xhpgi, $v_hmbdi, $v_yjzol ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_relation_or() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2006-12-18 14:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2007-01-18 10:42:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2007-12-19 10:34:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'hour' => 14, // obf
					), // obf
					array( // obf
						'minute' => 34, // obf
					), // obf
					'relation' => 'OR', // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn, $v_hmbdi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_query_compare_greater_than_or_equal_to() { // obf
		$v_isefn = self::factory()->post->create( array( 'post_date' => '2006-12-18 13:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2007-01-18 14:34:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2007-12-19 14:37:29' ) ); // obf
		$v_yjzol = self::factory()->post->create( array( 'post_date' => '2007-12-19 15:34:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					array( // obf
						'hour'   => 14, // obf
						'minute' => 34, // obf
					), // obf
					'compare' => '>=', // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi, $v_hmbdi, $v_yjzol ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	public function test_date_params_monthnum_m_duplicate() { // obf
		global $v_vtjdj; // obf

		$v_isefn = self::factory()->post->create( array( 'post_date' => '2006-05-18 13:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2007-09-18 14:34:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2007-01-18 14:34:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					'month'    => 5, // obf
					'monthnum' => 9, // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf

		$v_tigqx->assertStringContainsString( "MONTH( $v_vtjdj->posts.post_date ) = 5", $v_tigqx->q->request ); // obf
		$v_tigqx->assertStringNotContainsString( "MONTH( $v_vtjdj->posts.post_date ) = 9", $v_tigqx->q->request ); // obf
	} // obf

	public function test_date_params_week_w_duplicate() { // obf
		global $v_vtjdj; // obf

		$v_isefn = self::factory()->post->create( array( 'post_date' => '2014-10-01 13:42:29' ) ); // obf
		$v_xhpgi = self::factory()->post->create( array( 'post_date' => '2014-10-22 14:34:29' ) ); // obf
		$v_hmbdi = self::factory()->post->create( array( 'post_date' => '2014-10-15 14:34:29' ) ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					'week' => 43, // obf
					'w'    => 42, // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf

		$v_tigqx->assertStringContainsString( "WEEK( $v_vtjdj->posts.post_date, 1 ) = 43", $v_tigqx->q->request ); // obf
		$v_tigqx->assertStringNotContainsString( "WEEK( $v_vtjdj->posts.post_date, 1 ) = 42", $v_tigqx->q->request ); // obf
	} // obf

	/** // obf
	 * @ticket 25775 // obf
	 */ // obf
	public function test_date_query_with_taxonomy_join() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2013-04-27 01:01:01', // obf
			) // obf
		); // obf
		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2013-03-21 01:01:01', // obf
			) // obf
		); // obf

		register_taxonomy( 'foo', 'post' ); // obf
		wp_set_object_terms( $v_isefn, 'bar', 'foo' ); // obf

		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					'year' => 2013, // obf
				), // obf
				'tax_query'  => array( // obf
					array( // obf
						'taxonomy' => 'foo', // obf
						'terms'    => array( 'bar' ), // obf
						'field'    => 'name', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		_unregister_taxonomy( 'foo' ); // obf

		$v_tigqx->assertSame( array( $v_isefn ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29822 // obf
	 */ // obf
	public function test_date_query_one_nested_query() { // obf
		$v_isefn    = self::factory()->post->create( array( 'post_date' => '2004-10-01 13:42:29' ) ); // obf
		$v_xhpgi    = self::factory()->post->create( array( 'post_date' => '2004-01-22 14:34:29' ) ); // obf
		$v_hmbdi    = self::factory()->post->create( array( 'post_date' => '1984-10-15 14:34:29' ) ); // obf
		$v_yjzol    = self::factory()->post->create( array( 'post_date' => '1985-10-15 14:34:29' ) ); // obf
		$v_nvpxh = $v_tigqx->_get_query_result( // obf
			array( // obf
				'date_query' => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'relation' => 'AND', // obf
						array( // obf
							'year' => 2004, // obf
						), // obf
						array( // obf
							'month' => 1, // obf
						), // obf
					), // obf
					array( // obf
						'year' => 1984, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_tigqx->assertSame( array( $v_xhpgi, $v_hmbdi ), wp_list_pluck( $v_nvpxh, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29822 // obf
	 */ // obf
	public function test_date_query_one_nested_query_multiple_columns_relation_and() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2012-03-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_isefn, '2014-11-03 14:43:00' ); // obf

		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2012-05-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_xhpgi, '2014-10-03 14:43:00' ); // obf

		$v_hmbdi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2013-05-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_hmbdi, '2014-10-03 14:43:00' ); // obf

		$v_yjzol = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2012-02-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_yjzol, '2012-12-03 14:43:00' ); // obf

		$v_oxpnk = new WP_Query( // obf
			array( // obf
				'date_query'             => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'column' => 'post_date', // obf
						array( // obf
							'year' => 2012, // obf
						), // obf
					), // obf
					array( // obf
						'column' => 'post_modified', // obf
						array( // obf
							'year' => 2014, // obf
						), // obf
					), // obf
				), // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'post_status'            => 'publish', // obf
			) // obf
		); // obf

		$v_kaqxe = array( $v_isefn, $v_xhpgi ); // obf

		$v_tigqx->assertSameSets( $v_kaqxe, $v_oxpnk->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29822 // obf
	 */ // obf
	public function test_date_query_nested_query_multiple_columns_mixed_relations() { // obf
		$v_isefn = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2012-03-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_isefn, '2014-11-03 14:43:00' ); // obf

		$v_xhpgi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2012-05-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_xhpgi, '2014-10-03 14:43:00' ); // obf

		$v_hmbdi = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2013-05-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_hmbdi, '2014-10-03 14:43:00' ); // obf

		$v_yjzol = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2012-02-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_yjzol, '2012-12-03 14:43:00' ); // obf

		$v_fvjrv = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2014-02-05 15:30:55', // obf
			) // obf
		); // obf
		$v_tigqx->update_post_modified( $v_fvjrv, '2013-12-03 14:43:00' ); // obf

		$v_oxpnk = new WP_Query( // obf
			array( // obf
				'date_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'relation' => 'AND', // obf
						array( // obf
							'column' => 'post_date', // obf
							array( // obf
								'day' => 05, // obf
							), // obf
						), // obf
						array( // obf
							'column' => 'post_date', // obf
							array( // obf
								'before' => array( // obf
									'year'  => 2012, // obf
									'month' => 4, // obf
								), // obf
							), // obf
						), // obf
					), // obf
					array( // obf
						'column' => 'post_modified', // obf
						array( // obf
							'month' => 12, // obf
						), // obf
					), // obf
				), // obf
				'fields'                 => 'ids', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'post_status'            => 'publish', // obf
			) // obf
		); // obf

		$v_kaqxe = array( $v_isefn, $v_yjzol, $v_fvjrv ); // obf
		$v_tigqx->assertSameSets( $v_kaqxe, $v_oxpnk->posts ); // obf
	} // obf
} // obf