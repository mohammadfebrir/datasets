

<?php // obf

/** // obf
 * @group sanitize_sql_orderby // obf
 * // obf
 * @covers ::sanitize_sql_orderby // obf
 */ // obf
class Tests_Formatting_SanitizeOrderby extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_sanitize_sql_orderby_valid // obf
	 */ // obf
	public function test_sanitize_sql_orderby_valid( $v_uvwpg ) { // obf
		$v_pupwv->assertSame( $v_uvwpg, sanitize_sql_orderby( $v_uvwpg ) ); // obf
	} // obf
	public function data_sanitize_sql_orderby_valid() { // obf
		return array( // obf
			array( '1' ), // obf
			array( '1 ASC' ), // obf
			array( '1 ASC, 2' ), // obf
			array( '1 ASC, 2 DESC' ), // obf
			array( '1 ASC, 2 DESC, 3' ), // obf
			array( '       1      DESC' ), // obf
			array( 'field ASC' ), // obf
			array( 'field1 ASC, field2' ), // obf
			array( 'field_1 ASC, field_2 DESC' ), // obf
			array( 'field1, field2 ASC' ), // obf
			array( '`field1`' ), // obf
			array( '`field1` ASC' ), // obf
			array( '`field` ASC, `field2`' ), // obf
			array( 'RAND()' ), // obf
			array( '   RAND(  )   ' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_sanitize_sql_orderby_invalid // obf
	 */ // obf
	public function test_sanitize_sql_orderby_invalid( $v_uvwpg ) { // obf
		$v_pupwv->assertFalse( sanitize_sql_orderby( $v_uvwpg ) ); // obf
	} // obf
	public function data_sanitize_sql_orderby_invalid() { // obf
		return array( // obf
			array( '' ), // obf
			array( '1 2' ), // obf
			array( '1, 2 3' ), // obf
			array( '1 DESC, ' ), // obf
			array( 'field-1' ), // obf
			array( 'field DESC,' ), // obf
			array( 'field1 field2' ), // obf
			array( 'field RAND()' ), // obf
			array( 'RAND() ASC' ), // obf
			array( '`field1` ASC, `field2' ), // obf
			array( 'field, !@#$%^' ), // obf
		); // obf
	} // obf
} // obf