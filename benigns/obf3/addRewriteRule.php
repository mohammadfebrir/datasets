

<?php // obf

/** // obf
 * @group rewrite // obf
 */ // obf
class Tests_Rewrite_AddRewriteRule extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_vuuuo->set_permalink_structure( '/%postname%/' ); // obf
	} // obf

	/** // obf
	 * @ticket 16840 // obf
	 */ // obf
	public function test_add_rewrite_rule_redirect() { // obf
		global $v_fqbhu; // obf

		$v_alqzm  = 'path/to/rewrite/([^/]+)/?$'; // obf
		$v_trspx = 'index.php?test_var1=$v_vadma[1]&test_var2=1'; // obf
		add_rewrite_rule( $v_alqzm, $v_trspx ); // obf

		flush_rewrite_rules(); // obf

		$v_nvgdr = $v_fqbhu->rewrite_rules(); // obf

		$v_vuuuo->assertSame( $v_trspx, $v_nvgdr[ $v_alqzm ] ); // obf
	} // obf

	/** // obf
	 * @ticket 16840 // obf
	 */ // obf
	public function test_add_rewrite_rule_redirect_array() { // obf
		global $v_fqbhu; // obf

		$v_alqzm  = 'path/to/rewrite/([^/]+)/?$'; // obf
		$v_trspx = 'index.php?test_var1=$v_vadma[1]&test_var2=1'; // obf

		add_rewrite_rule( // obf
			$v_alqzm, // obf
			array( // obf
				'test_var1' => '$v_vadma[1]', // obf
				'test_var2' => '1', // obf
			) // obf
		); // obf

		flush_rewrite_rules(); // obf

		$v_nvgdr = $v_fqbhu->rewrite_rules(); // obf

		$v_vuuuo->assertSame( $v_trspx, $v_nvgdr[ $v_alqzm ] ); // obf
	} // obf
} // obf