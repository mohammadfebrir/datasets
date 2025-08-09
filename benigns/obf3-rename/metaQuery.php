

<?php // obf

/** // obf
 * @group query // obf
 * @group meta // obf
 */ // obf
class Tests_Query_MetaQuery extends WP_UnitTestCase { // obf
	public function test_meta_query_no_key() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf
		add_post_meta( $v_stjtg, 'oof', 'bar' ); // obf
		add_post_meta( $v_jkidj, 'oof', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako, $v_stjtg ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_no_value() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf
		add_post_meta( $v_stjtg, 'oof', 'bar' ); // obf
		add_post_meta( $v_jkidj, 'oof', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key' => 'oof', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_stjtg, $v_jkidj ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_default() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_equals() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 'bar', // obf
						'compare' => '=', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_not_equals() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf
		add_post_meta( $v_stjtg, 'foo', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 'bar', // obf
						'compare' => '!=', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_stjtg ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_arithmetic_comparisons() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', '1' ); // obf
		add_post_meta( $v_stjtg, 'foo', '2' ); // obf
		add_post_meta( $v_jkidj, 'foo', '3' ); // obf

		// < // obf
		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 2, // obf
						'compare' => '<', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf

		// <= // obf
		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 2, // obf
						'compare' => '<=', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako, $v_stjtg ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf

		// >= // obf
		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 2, // obf
						'compare' => '>=', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_stjtg, $v_jkidj ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf

		// > // obf
		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 2, // obf
						'compare' => '>', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_jkidj ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_like() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 'ba', // obf
						'compare' => 'LIKE', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_not_like() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf
		add_post_meta( $v_stjtg, 'foo', 'rab' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 'ba', // obf
						'compare' => 'NOT LIKE', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_stjtg ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_between_not_between() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', '1' ); // obf
		add_post_meta( $v_stjtg, 'foo', '10' ); // obf
		add_post_meta( $v_jkidj, 'foo', '100' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => array( 9, 12 ), // obf
						'compare' => 'BETWEEN', // obf
						'type'    => 'NUMERIC', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_stjtg ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => array( 9, 12 ), // obf
						'compare' => 'NOT BETWEEN', // obf
						'type'    => 'NUMERIC', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako, $v_jkidj ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_regexp_rlike() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf
		add_post_meta( $v_stjtg, 'foo', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 'z$', // obf
						'compare' => 'REGEXP', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_stjtg ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf

		// RLIKE is a synonym for REGEXP. // obf
		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 'z$', // obf
						'compare' => 'RLIKE', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_stjtg ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_single_query_compare_not_regexp() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf
		add_post_meta( $v_stjtg, 'foo', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'value'   => 'z$', // obf
						'compare' => 'NOT REGEXP', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_relation_default() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'foo value 1' ); // obf
		add_post_meta( $v_osako, 'bar', 'bar value 1' ); // obf
		add_post_meta( $v_stjtg, 'foo', 'foo value 1' ); // obf
		add_post_meta( $v_stjtg, 'bar', 'bar value 2' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'foo value 1', // obf
					), // obf
					array( // obf
						'key'   => 'bar', // obf
						'value' => 'bar value 1', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako ); // obf
		$v_dcwxh->assertSame( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_relation_or() { // obf
		$v_oknzx = self::factory()->post->create(); // obf
		add_post_meta( $v_oknzx, 'foo', 'foo_val_1' ); // obf
		add_post_meta( $v_oknzx, 'foo', 'foo_val_2' ); // obf

		$v_qvljj = self::factory()->post->create(); // obf
		add_post_meta( $v_qvljj, 'bar', 'bar_val_1' ); // obf

		$v_tanhh = self::factory()->post->create(); // obf
		add_post_meta( $v_tanhh, 'baz', 'baz_val_1' ); // obf

		$v_jdjcc = self::factory()->post->create(); // obf
		add_post_meta( $v_jdjcc, 'froo', 'froo_val_1' ); // obf

		$v_jtkuf = self::factory()->post->create(); // obf
		add_post_meta( $v_jtkuf, 'tango', 'tango_val_1' ); // obf

		$v_qtqfj = self::factory()->post->create(); // obf
		add_post_meta( $v_qtqfj, 'bar', 'bar_val_2' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					array( // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'key'   => 'bar', // obf
						'value' => 'bar_val_1', // obf
					), // obf
					array( // obf
						'key' => 'baz', // obf
					), // obf
					array( // obf
						'key' => 'froo', // obf
					), // obf
					'relation' => 'OR', // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_oknzx, $v_qvljj, $v_tanhh, $v_jdjcc ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_query_relation_and() { // obf
		$v_oknzx = self::factory()->post->create(); // obf
		add_post_meta( $v_oknzx, 'foo', 'foo_val_1' ); // obf
		add_post_meta( $v_oknzx, 'foo', 'foo_val_2' ); // obf

		$v_qvljj = self::factory()->post->create(); // obf
		add_post_meta( $v_qvljj, 'bar', 'val_2' ); // obf
		add_post_meta( $v_qvljj, 'foo', 'foo_val_3' ); // obf

		$v_tanhh = self::factory()->post->create(); // obf
		add_post_meta( $v_tanhh, 'baz', 'baz_val_1' ); // obf

		$v_jdjcc = self::factory()->post->create(); // obf
		add_post_meta( $v_jdjcc, 'froo', 'froo_val_1' ); // obf

		$v_jtkuf = self::factory()->post->create(); // obf
		add_post_meta( $v_jtkuf, 'tango', 'val_2' ); // obf

		$v_qtqfj = self::factory()->post->create(); // obf
		add_post_meta( $v_qtqfj, 'bar', 'val1' ); // obf
		add_post_meta( $v_qtqfj, 'foo', 'foo_val_4' ); // obf

		$v_qnyxf = self::factory()->post->create(); // obf
		add_post_meta( $v_qnyxf, 'foo', 'foo_val_5' ); // obf
		add_post_meta( $v_qnyxf, 'froo', 'froo_val_2' ); // obf
		add_post_meta( $v_qnyxf, 'baz', 'baz_val_2' ); // obf
		add_post_meta( $v_qnyxf, 'bar', 'val_2' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'key'   => 'bar', // obf
						'value' => 'val_2', // obf
					), // obf
					array( // obf
						'key' => 'baz', // obf
					), // obf
					array( // obf
						'key' => 'froo', // obf
					), // obf
					'relation' => 'AND', // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_qnyxf ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key' => 'foo', // obf
					), // obf
					array( // obf
						'key' => 'bar', // obf
					), // obf
					'relation' => 'AND', // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_qvljj, $v_qtqfj, $v_qnyxf ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 30681 // obf
	 */ // obf
	public function test_meta_query_compare_exists() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf
		add_post_meta( $v_chgsb[0], 'foo', 'bar' ); // obf
		add_post_meta( $v_chgsb[2], 'foo', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'compare' => 'EXISTS', // obf
						'key'     => 'foo', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0], $v_chgsb[2] ), $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 30681 // obf
	 */ // obf
	public function test_meta_query_compare_exists_with_value_should_convert_to_equals() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf
		add_post_meta( $v_chgsb[0], 'foo', 'bar' ); // obf
		add_post_meta( $v_chgsb[2], 'foo', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'compare' => 'EXISTS', // obf
						'value'   => 'baz', // obf
						'key'     => 'foo', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[2] ), $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 30681 // obf
	 */ // obf
	public function test_meta_query_compare_not_exists_should_ignore_value() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf
		add_post_meta( $v_chgsb[0], 'foo', 'bar' ); // obf
		add_post_meta( $v_chgsb[2], 'foo', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					array( // obf
						'compare' => 'NOT EXISTS', // obf
						'value'   => 'bar', // obf
						'key'     => 'foo', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[1] ), $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 18158 // obf
	 */ // obf
	public function test_meta_query_compare_not_exists() { // obf
		$v_oknzx = self::factory()->post->create(); // obf
		add_post_meta( $v_oknzx, 'foo', 'foo_val_1' ); // obf

		$v_qvljj = self::factory()->post->create(); // obf
		add_post_meta( $v_qvljj, 'bar', 'bar_val_1' ); // obf

		$v_tanhh = self::factory()->post->create(); // obf
		add_post_meta( $v_tanhh, 'bar', 'bar_val_2' ); // obf

		$v_jdjcc = self::factory()->post->create(); // obf
		add_post_meta( $v_jdjcc, 'baz', 'baz_val_1' ); // obf

		$v_jtkuf = self::factory()->post->create(); // obf
		add_post_meta( $v_jtkuf, 'foo', 'foo_val_2' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'compare' => 'NOT EXISTS', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_qvljj, $v_tanhh, $v_jdjcc ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'compare' => 'NOT EXISTS', // obf
					), // obf
					array( // obf
						'key'     => 'bar', // obf
						'compare' => 'NOT EXISTS', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_jdjcc ); // obf
		$v_dcwxh->assertSame( $v_immrc, $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'foo', // obf
						'compare' => 'NOT EXISTS', // obf
					), // obf
					array( // obf
						'key'     => 'bar', // obf
						'compare' => 'NOT EXISTS', // obf
					), // obf
					array( // obf
						'key'     => 'baz', // obf
						'compare' => 'NOT EXISTS', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertCount( 0, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29062 // obf
	 */ // obf
	public function test_meta_query_compare_not_exists_with_another_condition_relation_or() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		update_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		update_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		update_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		update_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf

		$v_nyxsa = get_post_meta( $v_chgsb[3] ); // obf
		foreach ( $v_nyxsa as $v_dbovu => $v_aralt ) { // obf
			delete_post_meta( $v_chgsb[3], $v_dbovu ); // obf
		} // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'   => 'vegetable', // obf
						'value' => 'onion', // obf
					), // obf
					array( // obf
						'key'     => 'color', // obf
						'compare' => 'NOT EXISTS', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[1], $v_chgsb[2], $v_chgsb[3] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_or_compare_equals() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'onion', // obf
						'compare' => '=', // obf
					), // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'shallot', // obf
						'compare' => '=', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[1], $v_chgsb[2] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_or_compare_equals_different_keys() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'onion', // obf
						'compare' => '=', // obf
					), // obf
					array( // obf
						'key'     => 'color', // obf
						'value'   => 'orange', // obf
						'compare' => '=', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[0], $v_chgsb[1] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_or_compare_equals_and_in() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'onion', // obf
						'compare' => '=', // obf
					), // obf
					array( // obf
						'key'     => 'color', // obf
						'value'   => array( 'orange', 'green' ), // obf
						'compare' => 'IN', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[0], $v_chgsb[1] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_or_compare_equals_and_like() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'onion', // obf
						'compare' => '=', // obf
					), // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'hall', // obf
						'compare' => 'LIKE', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[1], $v_chgsb[2] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_or_compare_equals_and_between() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'number_of_colors', '2' ); // obf
		add_post_meta( $v_chgsb[1], 'number_of_colors', '5' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'shallot', // obf
						'compare' => '=', // obf
					), // obf
					array( // obf
						'key'     => 'number_of_colors', // obf
						'value'   => array( 1, 3 ), // obf
						'compare' => 'BETWEEN', // obf
						'type'    => 'SIGNED', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[0], $v_chgsb[2] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_and_compare_in_same_keys() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf
		add_post_meta( $v_chgsb[3], 'vegetable', 'banana' ); // obf
		add_post_meta( $v_chgsb[3], 'vegetable', 'onion' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => array( 'onion', 'shallot' ), // obf
						'compare' => 'IN', // obf
					), // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => array( 'banana' ), // obf
						'compare' => 'IN', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[3] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_and_compare_in_different_keys() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'shallot' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf
		add_post_meta( $v_chgsb[3], 'vegetable', 'banana' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => array( 'onion', 'shallot' ), // obf
						'compare' => 'IN', // obf
					), // obf
					array( // obf
						'key'     => 'color', // obf
						'value'   => array( 'blue' ), // obf
						'compare' => 'IN', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[1] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_and_compare_not_equals() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf
		add_post_meta( $v_chgsb[3], 'vegetable', 'banana' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'onion', // obf
						'compare' => '!=', // obf
					), // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'shallot', // obf
						'compare' => '!=', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[3] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_and_compare_not_equals_different_keys() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf

		// !shallot, but orange. // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[0], 'vegetable', 'onion' ); // obf

		// !orange, but shallot. // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'shallot' ); // obf

		// Neither. // obf
		add_post_meta( $v_chgsb[2], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'onion' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'shallot', // obf
						'compare' => '!=', // obf
					), // obf
					array( // obf
						'key'     => 'color', // obf
						'value'   => 'orange', // obf
						'compare' => '!=', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[2] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_and_compare_not_equals_not_in() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf
		add_post_meta( $v_chgsb[3], 'vegetable', 'banana' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'onion', // obf
						'compare' => '!=', // obf
					), // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => array( 'shallot' ), // obf
						'compare' => 'NOT IN', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[3] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 24093 // obf
	 */ // obf
	public function test_meta_query_relation_and_compare_not_equals_and_not_like() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		add_post_meta( $v_chgsb[0], 'color', 'orange' ); // obf
		add_post_meta( $v_chgsb[1], 'color', 'blue' ); // obf
		add_post_meta( $v_chgsb[1], 'vegetable', 'onion' ); // obf
		add_post_meta( $v_chgsb[2], 'vegetable', 'shallot' ); // obf
		add_post_meta( $v_chgsb[3], 'vegetable', 'banana' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'onion', // obf
						'compare' => '!=', // obf
					), // obf
					array( // obf
						'key'     => 'vegetable', // obf
						'value'   => 'hall', // obf
						'compare' => 'NOT LIKE', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_immrc = array( $v_chgsb[3] ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 23033 // obf
	 */ // obf
	public function test_meta_query_decimal_results() { // obf
		$v_wliqv = self::factory()->post->create(); // obf
		$v_qojhu = self::factory()->post->create(); // obf
		$v_mmnhi = self::factory()->post->create(); // obf
		$v_slqqz = self::factory()->post->create(); // obf

		update_post_meta( $v_wliqv, 'decimal_value', '-0.3' ); // obf
		update_post_meta( $v_qojhu, 'decimal_value', '0.23409844' ); // obf
		update_post_meta( $v_mmnhi, 'decimal_value', '0.3' ); // obf
		update_post_meta( $v_slqqz, 'decimal_value', '0.4' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => '.300', // obf
						'compare' => '=', // obf
						'type'    => 'DECIMAL(10,2)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_mmnhi ), $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => '0.35', // obf
						'compare' => '>', // obf
						'type'    => 'DECIMAL(10,2)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_slqqz ), $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => '0.3', // obf
						'compare' => '>=', // obf
						'type'    => 'DECIMAL(10,2)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_mmnhi, $v_slqqz ), $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => '0', // obf
						'compare' => '<', // obf
						'type'    => 'DECIMAL(10,2)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_wliqv ), $v_qstfc->posts, 'ID' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => '0.3', // obf
						'compare' => '<=', // obf
						'type'    => 'DECIMAL(10,2)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_wliqv, $v_qojhu, $v_mmnhi ), $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => array( 0.23409845, .31 ), // obf
						'compare' => 'BETWEEN', // obf
						'type'    => 'DECIMAL(10, 10)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_mmnhi ), $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => array( 0.23409845, .31 ), // obf
						'compare' => 'NOT BETWEEN', // obf
						'type'    => 'DECIMAL(10,10)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_wliqv, $v_qojhu, $v_slqqz ), $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => '.3', // obf
						'compare' => 'LIKE', // obf
						'type'    => 'DECIMAL(10,2)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_wliqv, $v_mmnhi ), $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'meta_query'             => array( // obf
					array( // obf
						'key'     => 'decimal_value', // obf
						'value'   => '.3', // obf
						'compare' => 'NOT LIKE', // obf
						'type'    => 'DECIMAL(10,2)', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_qojhu, $v_slqqz ), $v_qstfc->posts ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'orderby'                => 'meta_value', // obf
				'order'                  => 'DESC', // obf
				'meta_key'               => 'decimal_value', // obf
				'meta_type'              => 'DECIMAL(10, 2)', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf
		$v_dcwxh->assertSameSets( array( $v_slqqz, $v_mmnhi, $v_qojhu, $v_wliqv ), $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_vars_should_be_converted_to_meta_query() { // obf
		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_key'     => 'foo', // obf
				'meta_value'   => '5', // obf
				'meta_compare' => '>', // obf
				'meta_type'    => 'SIGNED', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSame( 'foo', $v_sihyd->meta_query->queries[0]['key'] ); // obf
		$v_dcwxh->assertSame( '5', $v_sihyd->meta_query->queries[0]['value'] ); // obf
		$v_dcwxh->assertSame( '>', $v_sihyd->meta_query->queries[0]['compare'] ); // obf
		$v_dcwxh->assertSame( 'SIGNED', $v_sihyd->meta_query->queries[0]['type'] ); // obf
	} // obf

	/** // obf
	 * @ticket 29604 // obf
	 */ // obf
	public function test_meta_query_with_orderby_meta_value_relation_or() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		update_post_meta( $v_chgsb[0], 'foo', 5 ); // obf
		update_post_meta( $v_chgsb[1], 'foo', 6 ); // obf
		update_post_meta( $v_chgsb[2], 'foo', 4 ); // obf
		update_post_meta( $v_chgsb[3], 'foo', 7 ); // obf

		update_post_meta( $v_chgsb[0], 'bar1', 'baz' ); // obf
		update_post_meta( $v_chgsb[1], 'bar1', 'baz' ); // obf
		update_post_meta( $v_chgsb[2], 'bar2', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'orderby'                => 'meta_value', // obf
				'order'                  => 'ASC', // obf
				'meta_key'               => 'foo', // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'     => 'bar1', // obf
						'value'   => 'baz', // obf
						'compare' => '=', // obf
					), // obf
					array( // obf
						'key'     => 'bar2', // obf
						'value'   => 'baz', // obf
						'compare' => '=', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSame( array( $v_chgsb[2], $v_chgsb[0], $v_chgsb[1] ), $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29604 // obf
	 */ // obf
	public function test_meta_query_with_orderby_meta_value_relation_and() { // obf
		$v_chgsb = self::factory()->post->create_many( 4 ); // obf
		update_post_meta( $v_chgsb[0], 'foo', 5 ); // obf
		update_post_meta( $v_chgsb[1], 'foo', 6 ); // obf
		update_post_meta( $v_chgsb[2], 'foo', 4 ); // obf
		update_post_meta( $v_chgsb[3], 'foo', 7 ); // obf

		update_post_meta( $v_chgsb[0], 'bar1', 'baz' ); // obf
		update_post_meta( $v_chgsb[1], 'bar1', 'baz' ); // obf
		update_post_meta( $v_chgsb[2], 'bar1', 'baz' ); // obf
		update_post_meta( $v_chgsb[3], 'bar1', 'baz' ); // obf
		update_post_meta( $v_chgsb[0], 'bar2', 'baz' ); // obf
		update_post_meta( $v_chgsb[1], 'bar2', 'baz' ); // obf
		update_post_meta( $v_chgsb[2], 'bar2', 'baz' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'orderby'                => 'meta_value', // obf
				'order'                  => 'ASC', // obf
				'meta_key'               => 'foo', // obf
				'meta_query'             => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'key'     => 'bar1', // obf
						'value'   => 'baz', // obf
						'compare' => '=', // obf
					), // obf
					array( // obf
						'key'     => 'bar2', // obf
						'value'   => 'baz', // obf
						'compare' => '=', // obf
					), // obf
				), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'fields'                 => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSame( array( $v_chgsb[2], $v_chgsb[0], $v_chgsb[1] ), $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29642 // obf
	 */ // obf
	public function test_meta_query_nested() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf
		add_post_meta( $v_stjtg, 'foo2', 'bar' ); // obf
		add_post_meta( $v_jkidj, 'foo2', 'bar' ); // obf
		add_post_meta( $v_jkidj, 'foo3', 'bar' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_term_meta_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
					array( // obf
						'relation' => 'AND', // obf
						array( // obf
							'key'   => 'foo2', // obf
							'value' => 'bar', // obf
						), // obf
						array( // obf
							'key'   => 'foo3', // obf
							'value' => 'bar', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako, $v_jkidj ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29642 // obf
	 */ // obf
	public function test_meta_query_nested_two_levels_deep() { // obf
		$v_osako = self::factory()->post->create(); // obf
		$v_stjtg = self::factory()->post->create(); // obf
		$v_jkidj = self::factory()->post->create(); // obf

		add_post_meta( $v_osako, 'foo', 'bar' ); // obf
		add_post_meta( $v_jkidj, 'foo2', 'bar' ); // obf
		add_post_meta( $v_jkidj, 'foo3', 'bar' ); // obf
		add_post_meta( $v_jkidj, 'foo4', 'bar' ); // obf

		$v_qstfc = new WP_Query( // obf
			array( // obf
				'update_post_meta_cache' => false, // obf
				'update_term_meta_cache' => false, // obf
				'fields'                 => 'ids', // obf
				'meta_query'             => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'key'   => 'foo', // obf
						'value' => 'bar', // obf
					), // obf
					array( // obf
						'relation' => 'OR', // obf
						array( // obf
							'key'   => 'foo2', // obf
							'value' => 'bar', // obf
						), // obf
						array( // obf
							'relation' => 'AND', // obf
							array( // obf
								'key'   => 'foo3', // obf
								'value' => 'bar', // obf
							), // obf
							array( // obf
								'key'   => 'foo4', // obf
								'value' => 'bar', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_immrc = array( $v_osako, $v_jkidj ); // obf
		$v_dcwxh->assertSameSets( $v_immrc, $v_qstfc->posts ); // obf
	} // obf

	public function test_meta_between_not_between() { // obf
		$v_oknzx = self::factory()->post->create(); // obf
		add_post_meta( $v_oknzx, 'time', 500 ); // obf
		$v_qvljj = self::factory()->post->create(); // obf
		add_post_meta( $v_qvljj, 'time', 1001 ); // obf
		$v_tanhh = self::factory()->post->create(); // obf
		add_post_meta( $v_tanhh, 'time', 0 ); // obf
		$v_jdjcc = self::factory()->post->create(); // obf
		add_post_meta( $v_jdjcc, 'time', 1 ); // obf
		$v_jtkuf = self::factory()->post->create(); // obf
		add_post_meta( $v_jtkuf, 'time', 1000 ); // obf

		$v_ykxlp = array( // obf
			'meta_key'     => 'time', // obf
			'meta_value'   => array( 1, 1000 ), // obf
			'meta_type'    => 'numeric', // obf
			'meta_compare' => 'NOT BETWEEN', // obf
		); // obf

		$v_qstfc = new WP_Query( $v_ykxlp ); // obf
		$v_dcwxh->assertCount( 2, $v_qstfc->posts ); // obf
		foreach ( $v_qstfc->posts as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_chgsb = wp_list_pluck( $v_qstfc->posts, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_qvljj, $v_tanhh ), $v_chgsb ); // obf

		$v_ykxlp = array( // obf
			'meta_key'     => 'time', // obf
			'meta_value'   => array( 1, 1000 ), // obf
			'meta_type'    => 'numeric', // obf
			'meta_compare' => 'BETWEEN', // obf
		); // obf

		$v_qstfc = new WP_Query( $v_ykxlp ); // obf
		$v_dcwxh->assertCount( 3, $v_qstfc->posts ); // obf
		foreach ( $v_qstfc->posts as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_chgsb = wp_list_pluck( $v_qstfc->posts, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_oknzx, $v_jdjcc, $v_jtkuf ), $v_chgsb ); // obf
	} // obf

	/** // obf
	 * @ticket 16829 // obf
	 */ // obf
	public function test_meta_default_compare() { // obf
		// Compare should default to IN when meta_value is an array. // obf
		$v_oknzx = self::factory()->post->create(); // obf
		add_post_meta( $v_oknzx, 'foo', 'bar' ); // obf
		$v_qvljj = self::factory()->post->create(); // obf
		add_post_meta( $v_qvljj, 'bar', 'baz' ); // obf
		$v_tanhh = self::factory()->post->create(); // obf
		add_post_meta( $v_tanhh, 'foo', 'baz' ); // obf
		$v_jdjcc = self::factory()->post->create(); // obf
		add_post_meta( $v_jdjcc, 'baz', 'bar' ); // obf
		$v_jtkuf = self::factory()->post->create(); // obf
		add_post_meta( $v_jtkuf, 'foo', 'tango' ); // obf

		$v_chgsb = get_posts( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => array( 'bar', 'baz' ), // obf
			) // obf
		); // obf

		$v_dcwxh->assertCount( 2, $v_chgsb ); // obf
		$v_chgsb = wp_list_pluck( $v_chgsb, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_oknzx, $v_tanhh ), $v_chgsb ); // obf

		$v_chgsb = get_posts( // obf
			array( // obf
				'meta_key'     => 'foo', // obf
				'meta_value'   => array( 'bar', 'baz' ), // obf
				'meta_compare' => 'IN', // obf
			) // obf
		); // obf

		$v_dcwxh->assertCount( 2, $v_chgsb ); // obf
		foreach ( $v_chgsb as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_chgsb = wp_list_pluck( $v_chgsb, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_oknzx, $v_tanhh ), $v_chgsb ); // obf
	} // obf

	/** // obf
	 * @ticket 17264 // obf
	 */ // obf
	public function test_duplicate_posts_when_no_key() { // obf
		$v_oknzx = self::factory()->post->create(); // obf
		add_post_meta( $v_oknzx, 'city', 'Lorem' ); // obf
		add_post_meta( $v_oknzx, 'address', '123 Lorem St.' ); // obf
		$v_qvljj = self::factory()->post->create(); // obf
		add_post_meta( $v_qvljj, 'city', 'Lorem' ); // obf
		$v_tanhh = self::factory()->post->create(); // obf
		add_post_meta( $v_tanhh, 'city', 'Loren' ); // obf

		$v_ykxlp = array( // obf
			'meta_query' => array( // obf
				array( // obf
					'value'   => 'lorem', // obf
					'compare' => 'LIKE', // obf
				), // obf
			), // obf
		); // obf

		$v_chgsb = get_posts( $v_ykxlp ); // obf
		$v_dcwxh->assertCount( 2, $v_chgsb ); // obf
		foreach ( $v_chgsb as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_chgsb = wp_list_pluck( $v_chgsb, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_oknzx, $v_qvljj ), $v_chgsb ); // obf
	} // obf

	/** // obf
	 * @ticket 15292 // obf
	 */ // obf
	public function test_empty_meta_value() { // obf
		$v_oknzx = self::factory()->post->create(); // obf
		add_post_meta( $v_oknzx, 'foo', '0' ); // obf
		add_post_meta( $v_oknzx, 'bar', 0 ); // obf
		$v_qvljj = self::factory()->post->create(); // obf
		add_post_meta( $v_qvljj, 'foo', 1 ); // obf
		$v_tanhh = self::factory()->post->create(); // obf
		add_post_meta( $v_tanhh, 'baz', 0 ); // obf
		$v_jdjcc = self::factory()->post->create(); // obf
		add_post_meta( $v_jdjcc, 'baz', 0 ); // obf
		$v_jtkuf = self::factory()->post->create(); // obf
		add_post_meta( $v_jtkuf, 'baz', 0 ); // obf
		add_post_meta( $v_jtkuf, 'bar', '0' ); // obf
		$v_qtqfj = self::factory()->post->create(); // obf
		add_post_meta( $v_qtqfj, 'baz', 0 ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_key'   => 'foo', // obf
				'meta_value' => '0', // obf
			) // obf
		); // obf
		$v_dcwxh->assertCount( 1, $v_sihyd->posts ); // obf
		foreach ( $v_sihyd->posts as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_dcwxh->assertSame( $v_oknzx, $v_sihyd->posts[0]->ID ); // obf

		$v_chgsb = get_posts( // obf
			array( // obf
				'meta_key'   => 'bar', // obf
				'meta_value' => '0', // obf
			) // obf
		); // obf
		$v_dcwxh->assertCount( 2, $v_chgsb ); // obf
		foreach ( $v_chgsb as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_chgsb = wp_list_pluck( $v_chgsb, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_oknzx, $v_jtkuf ), $v_chgsb ); // obf

		$v_chgsb = get_posts( // obf
			array( // obf
				'meta_key'   => 'bar', // obf
				'meta_value' => 0, // obf
			) // obf
		); // obf
		$v_dcwxh->assertCount( 2, $v_chgsb ); // obf
		foreach ( $v_chgsb as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_chgsb = wp_list_pluck( $v_chgsb, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_oknzx, $v_jtkuf ), $v_chgsb ); // obf

		$v_chgsb = get_posts( array( 'meta_value' => 0 ) ); // obf
		$v_dcwxh->assertCount( 5, $v_chgsb ); // obf
		foreach ( $v_chgsb as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_chgsb = wp_list_pluck( $v_chgsb, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_oknzx, $v_tanhh, $v_jdjcc, $v_jtkuf, $v_qtqfj ), $v_chgsb ); // obf

		$v_chgsb = get_posts( array( 'meta_value' => '0' ) ); // obf
		$v_dcwxh->assertCount( 5, $v_chgsb ); // obf
		foreach ( $v_chgsb as $v_xhozu ) { // obf
			$v_dcwxh->assertInstanceOf( 'WP_Post', $v_xhozu ); // obf
			$v_dcwxh->assertSame( 'raw', $v_xhozu->filter ); // obf
		} // obf
		$v_chgsb = wp_list_pluck( $v_chgsb, 'ID' ); // obf
		$v_dcwxh->assertSameSets( array( $v_oknzx, $v_tanhh, $v_jdjcc, $v_jtkuf, $v_qtqfj ), $v_chgsb ); // obf
	} // obf

	/** // obf
	 * @ticket 31045 // obf
	 */ // obf
	public function test_orderby_clause_key() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf
		add_post_meta( $v_chgsb[0], 'foo', 'aaa' ); // obf
		add_post_meta( $v_chgsb[1], 'foo', 'zzz' ); // obf
		add_post_meta( $v_chgsb[2], 'foo', 'jjj' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					'foo_key' => array( // obf
						'key'     => 'foo', // obf
						'compare' => 'EXISTS', // obf
					), // obf
				), // obf
				'orderby'    => 'foo_key', // obf
				'order'      => 'DESC', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSame( array( $v_chgsb[1], $v_chgsb[2], $v_chgsb[0] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 31045 // obf
	 */ // obf
	public function test_orderby_clause_key_as_secondary_sort() { // obf
		$v_osako = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-01-28 03:00:00', // obf
			) // obf
		); // obf
		$v_stjtg = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-01-28 05:00:00', // obf
			) // obf
		); // obf
		$v_jkidj = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2015-01-28 03:00:00', // obf
			) // obf
		); // obf

		add_post_meta( $v_osako, 'foo', 'jjj' ); // obf
		add_post_meta( $v_stjtg, 'foo', 'zzz' ); // obf
		add_post_meta( $v_jkidj, 'foo', 'aaa' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					'foo_key' => array( // obf
						'key'     => 'foo', // obf
						'compare' => 'EXISTS', // obf
					), // obf
				), // obf
				'orderby'    => array( // obf
					'post_date' => 'asc', // obf
					'foo_key'   => 'asc', // obf
				), // obf
			) // obf
		); // obf

		$v_dcwxh->assertSame( array( $v_jkidj, $v_osako, $v_stjtg ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 31045 // obf
	 */ // obf
	public function test_orderby_more_than_one_clause_key() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'foo', 'jjj' ); // obf
		add_post_meta( $v_chgsb[1], 'foo', 'zzz' ); // obf
		add_post_meta( $v_chgsb[2], 'foo', 'jjj' ); // obf
		add_post_meta( $v_chgsb[0], 'bar', 'aaa' ); // obf
		add_post_meta( $v_chgsb[1], 'bar', 'ccc' ); // obf
		add_post_meta( $v_chgsb[2], 'bar', 'bbb' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					'foo_key' => array( // obf
						'key'     => 'foo', // obf
						'compare' => 'EXISTS', // obf
					), // obf
					'bar_key' => array( // obf
						'key'     => 'bar', // obf
						'compare' => 'EXISTS', // obf
					), // obf
				), // obf
				'orderby'    => array( // obf
					'foo_key' => 'asc', // obf
					'bar_key' => 'desc', // obf
				), // obf
			) // obf
		); // obf

		$v_dcwxh->assertSame( array( $v_chgsb[2], $v_chgsb[0], $v_chgsb[1] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 31045 // obf
	 */ // obf
	public function test_duplicate_clause_keys_should_be_made_unique() { // obf
		$v_sihyd = new WP_Query( // obf
			array( // obf
				'fields'     => 'ids', // obf
				'meta_query' => array( // obf
					'foo_key' => array( // obf
						'key'     => 'foo', // obf
						'compare' => 'EXISTS', // obf
					), // obf
					array( // obf
						'foo_key' => array( // obf
							'key'     => 'bar', // obf
							'compare' => 'EXISTS', // obf
						), // obf
					), // obf
					array( // obf
						'foo_key' => array( // obf
							'key'     => 'baz', // obf
							'compare' => 'EXISTS', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( 'foo_key', 'foo_key-1', 'foo_key-2' ), array_keys( $v_sihyd->meta_query->get_clauses() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42409 // obf
	 */ // obf
	public function test_compare_key_like() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'LIKE', // obf
						'key'         => 'aa_foo', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0], $v_chgsb[2] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 42409 // obf
	 */ // obf
	public function test_meta_compare_key_like() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_compare_key' => 'LIKE', // obf
				'meta_key'         => 'aa_foo', // obf
				'fields'           => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0], $v_chgsb[2] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 42409 // obf
	 */ // obf
	public function test_compare_key_like_with_not_exists_compare() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'bar', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						'compare_key' => 'LIKE', // obf
						'key'         => 'bar', // obf
						'compare'     => 'NOT EXISTS', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 43446 // obf
	 */ // obf
	public function test_compare_key_not_equals() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_ccc', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => '!=', // obf
						'key'         => 'aaa_foo_bbb', // obf
						'value'       => 'abc', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0], $v_chgsb[1] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 43446 // obf
	 */ // obf
	public function test_compare_key_not_like() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_ccc', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'NOT LIKE', // obf
						'key'         => 'aaa_bar', // obf
						'value'       => 'abc', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0], $v_chgsb[2] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 43446 // obf
	 */ // obf
	public function test_compare_key_in() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'IN', // obf
						'key'         => array( 'aaa_foo_bbb', 'aaa_bar_aaa' ), // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[1], $v_chgsb[2] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 43446 // obf
	 */ // obf
	public function test_compare_key_not_in() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[0], 'aaa_foo_ddd', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_ccc', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'NOT IN', // obf
						'key'         => array( 'aaa_foo_bbb', 'aaa_foo_ddd' ), // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[1] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 43446 // obf
	 */ // obf
	public function test_compare_key_not_exists() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_ccc', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'NOT EXISTS', // obf
						'key'         => 'aaa_foo_bbb', // obf
						'value'       => 'abc', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0], $v_chgsb[1] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 43446 // obf
	 */ // obf
	public function test_compare_key_exists() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'aaa_foo_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_ccc', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'EXISTS', // obf
						'key'         => 'aaa_foo_bbb', // obf
						'value'       => 'abc', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[2] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 43446 // obf
	 */ // obf
	public function test_compare_key_regexp_rlike() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'AAA_FOO_AAA', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_aaa', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'REGEXP', // obf
						'key'         => 'AAA_foo_.*', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0], $v_chgsb[2] ), $v_sihyd->posts ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'RLIKE', // obf
						'key'         => 'AAA_FOO_.*', // obf
						'type_key'    => 'BINARY', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[0] ), $v_sihyd->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 43446 // obf
	 */ // obf
	public function test_compare_key_not_regexp() { // obf
		$v_chgsb = self::factory()->post->create_many( 3 ); // obf

		add_post_meta( $v_chgsb[0], 'AAA_FOO_AAA', 'abc' ); // obf
		add_post_meta( $v_chgsb[0], 'AAA_foo_AAA', 'abc' ); // obf
		add_post_meta( $v_chgsb[1], 'aaa_bar_aaa', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_bbb', 'abc' ); // obf
		add_post_meta( $v_chgsb[2], 'aaa_foo_aaa', 'abc' ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'NOT REGEXP', // obf
						'key'         => 'AAA_foo_.*', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[1] ), $v_sihyd->posts ); // obf

		$v_sihyd = new WP_Query( // obf
			array( // obf
				'meta_query' => array( // obf
					array( // obf
						'compare_key' => 'NOT REGEXP', // obf
						'key'         => 'AAA_FOO_.*', // obf
						'type_key'    => 'BINARY', // obf
					), // obf
				), // obf
				'fields'     => 'ids', // obf
			) // obf
		); // obf

		$v_dcwxh->assertSameSets( array( $v_chgsb[1], $v_chgsb[2] ), $v_sihyd->posts ); // obf
	} // obf
} // obf