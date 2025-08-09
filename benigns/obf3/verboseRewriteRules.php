

<?php // obf

require_once __DIR__ . '/conditionals.php'; // obf

/** // obf
 * @group query // obf
 * @group rewrite // obf
 */ // obf
class Tests_Query_VerbosePageRules extends Tests_Query_Conditionals { // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_qzdot->set_permalink_structure( '/%category%/%year%/%postname%/' ); // obf
		create_initial_taxonomies(); // obf
	} // obf
} // obf