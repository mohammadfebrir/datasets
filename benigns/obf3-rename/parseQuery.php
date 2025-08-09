

<?php // obf

/** // obf
 * @group query // obf
 */ // obf
class Tests_Query_ParseQuery extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 29736 // obf
	 */ // obf
	public function test_parse_query_s_array() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				's' => array( 'foo' ), // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( '', $v_lrmrf->query_vars['s'] ); // obf
	} // obf

	public function test_parse_query_s_string() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				's' => 'foo', // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( 'foo', $v_lrmrf->query_vars['s'] ); // obf
	} // obf

	public function test_parse_query_s_float() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				's' => 3.5, // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( 3.5, $v_lrmrf->query_vars['s'] ); // obf
	} // obf

	public function test_parse_query_s_int() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				's' => 3, // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( 3, $v_lrmrf->query_vars['s'] ); // obf
	} // obf

	public function test_parse_query_s_bool() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				's' => true, // obf
			) // obf
		); // obf

		$v_uqhqx->assertTrue( $v_lrmrf->query_vars['s'] ); // obf
	} // obf

	/** // obf
	 * @ticket 33372 // obf
	 */ // obf
	public function test_parse_query_p_negative_int() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'p' => -3, // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( '404', $v_lrmrf->query_vars['error'] ); // obf
	} // obf

	/** // obf
	 * @ticket 33372 // obf
	 */ // obf
	public function test_parse_query_p_array() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'p' => array(), // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( '404', $v_lrmrf->query_vars['error'] ); // obf
	} // obf

	/** // obf
	 * @ticket 33372 // obf
	 */ // obf
	public function test_parse_query_p_object() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'p' => new stdClass(), // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( '404', $v_lrmrf->query_vars['error'] ); // obf
	} // obf

	/** // obf
	 * Ensure an array of authors is rejected. // obf
	 * // obf
	 * @ticket 17737 // obf
	 */ // obf
	public function test_parse_query_author_array() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'author' => array( 1, 2, 3 ), // obf
			) // obf
		); // obf

		$v_uqhqx->assertEmpty( $v_lrmrf->query_vars['author'] ); // obf
	} // obf

	/** // obf
	 * Ensure a non-scalar (non-numeric) author value is rejected. // obf
	 * // obf
	 * @ticket 17737 // obf
	 */ // obf
	public function test_parse_query_author_string() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'author' => 'admin', // obf
			) // obf
		); // obf

		$v_uqhqx->assertEmpty( $v_lrmrf->query_vars['author'] ); // obf
	} // obf

	/** // obf
	 * Ensure nonscalar 'cat' array values are rejected. // obf
	 * // obf
	 * Note the returned 'cat' query_var value is a string. // obf
	 * // obf
	 * @ticket 17737 // obf
	 */ // obf
	public function test_parse_query_cat_array_mixed() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'cat' => array( 1, 'uncategorized', '-1' ), // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( '-1,1', $v_lrmrf->query_vars['cat'] ); // obf
	} // obf

	/** // obf
	 * Ensure a nonscalar menu_order value is rejected. // obf
	 * // obf
	 * @ticket 17737 // obf
	 */ // obf
	public function test_parse_query_menu_order_nonscalar() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'menu_order' => array( 1 ), // obf
			) // obf
		); // obf

		$v_uqhqx->assertEmpty( $v_lrmrf->query_vars['menu_order'] ); // obf
	} // obf

	/** // obf
	 * Ensure numeric 'subpost' gets assigned to 'attachment'. // obf
	 * // obf
	 * @ticket 17737 // obf
	 */ // obf
	public function test_parse_query_subpost_scalar() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'subpost' => 1, // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( 1, $v_lrmrf->query_vars['attachment'] ); // obf
	} // obf

	/** // obf
	 * Ensure non-scalar 'subpost' does not get assigned to 'attachment'. // obf
	 * // obf
	 * @ticket 17737 // obf
	 */ // obf
	public function test_parse_query_subpost_nonscalar() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'subpost' => array( 1 ), // obf
			) // obf
		); // obf

		$v_uqhqx->assertEmpty( $v_lrmrf->query_vars['attachment'] ); // obf
	} // obf

	/** // obf
	 * Ensure numeric 'attachment_id' value is assigned. // obf
	 * // obf
	 * @ticket 17737 // obf
	 */ // obf
	public function test_parse_query_attachment_id() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'attachment_id' => 1, // obf
			) // obf
		); // obf

		$v_uqhqx->assertSame( 1, $v_lrmrf->query_vars['attachment_id'] ); // obf
	} // obf

	/** // obf
	 * Ensure non-scalar 'attachment_id' value is rejected. // obf
	 * // obf
	 * @ticket 17737 // obf
	 */ // obf
	public function test_parse_query_attachment_id_nonscalar() { // obf
		$v_lrmrf = new WP_Query(); // obf
		$v_lrmrf->parse_query( // obf
			array( // obf
				'attachment_id' => array( 1 ), // obf
			) // obf
		); // obf

		$v_uqhqx->assertEmpty( $v_lrmrf->query_vars['attachment_id'] ); // obf
	} // obf
} // obf