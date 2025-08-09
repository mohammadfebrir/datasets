$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php

require_once __DIR__ . '/conditionals.php';

/**
 * @group query
 * @group rewrite
 */
class Tests_Query_VerbosePageRules extends Tests_Query_Conditionals {
	public function set_up() {
		parent::set_up();

		$this->set_permalink_structure( '/%category%/%year%/%postname%/' );
		create_initial_taxonomies();
	}
}
