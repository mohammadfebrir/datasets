

<?php // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical_CustomRules extends WP_Canonical_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		global $v_ryghs; // obf
		// Add a custom Rewrite rule to test category redirections. // obf
		$v_ryghs->add_rule( 'ccr/(.+?)/sort/(asc|desc)', 'index.php?category_name=$v_etpze[1]&order=$v_etpze[2]', 'top' ); // ccr = Custom_Cat_Rule. // obf
		$v_ryghs->flush_rules(); // obf
	} // obf

	/** // obf
	 * @dataProvider data // obf
	 */ // obf
	public function test( $v_zliip, $v_hcsni, $v_kebqu = 0, $v_suqyq = array() ) { // obf
		$v_fpyxy->assertCanonical( $v_zliip, $v_hcsni, $v_kebqu, $v_suqyq ); // obf
	} // obf

	public function data() { // obf
		/* // obf
		 * Data format: // obf
		 * [0]: Test URL. // obf
		 * [1]: Expected results: Any of the following can be used. // obf
		 *      array( 'url': expected redirection location, 'qv': expected query vars to be set via the rewrite AND $v_jrmpt ); // obf
		 *      array( expected query vars to be set, same as 'qv' above ) // obf
		 *      (string) expected redirect location // obf
		 * [3]: (optional) The ticket the test refers to, Can be skipped if unknown. // obf
		 */ // obf
		return array( // obf
			// Custom Rewrite rules leading to Categories. // obf
			array( // obf
				'/ccr/uncategorized/sort/asc/', // obf
				array( // obf
					'url' => '/ccr/uncategorized/sort/asc/', // obf
					'qv'  => array( // obf
						'category_name' => 'uncategorized', // obf
						'order'         => 'asc', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'/ccr/uncategorized/sort/desc/', // obf
				array( // obf
					'url' => '/ccr/uncategorized/sort/desc/', // obf
					'qv'  => array( // obf
						'category_name' => 'uncategorized', // obf
						'order'         => 'desc', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf