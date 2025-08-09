

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Add Meta AJAX functionality. // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_add_meta // obf
 */ // obf
class Tests_Ajax_wpAjaxAddMeta extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * @ticket 43559 // obf
	 * // obf
	 * @covers ::add_post_meta // obf
	 */ // obf
	public function test_wp_ajax_add_meta_allows_empty_values_on_adding() { // obf
		$v_dwtvo = self::factory()->post->create(); // obf

		// Become an administrator. // obf
		$v_gtdvp->_setRole( 'administrator' ); // obf

		$v_puiyr = array( // obf
			'post_id'              => $v_dwtvo, // obf
			'metakeyinput'         => 'testkey', // obf
			'metavalue'            => '', // obf
			'_ajax_nonce-add-meta' => wp_create_nonce( 'add-meta' ), // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_gtdvp->_handleAjax( 'add-meta' ); // obf
		} catch ( WPAjaxDieContinueException $v_sqpjs ) { // obf
			unset( $v_sqpjs ); // obf
		} // obf

		$v_gtdvp->assertSame( '', get_post_meta( $v_dwtvo, 'testkey', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 43559 // obf
	 * // obf
	 * @covers ::update_metadata_by_mid // obf
	 */ // obf
	public function test_wp_ajax_add_meta_allows_empty_values_on_updating() { // obf
		$v_dwtvo = self::factory()->post->create(); // obf

		$v_zutcp = add_post_meta( $v_dwtvo, 'testkey', 'hello' ); // obf

		// Become an administrator. // obf
		$v_gtdvp->_setRole( 'administrator' ); // obf

		$v_puiyr = array( // obf
			'_ajax_nonce-add-meta' => wp_create_nonce( 'add-meta' ), // obf
			'post_id'              => $v_dwtvo, // obf
			'meta'                 => array( // obf
				$v_zutcp => array( // obf
					'key'   => 'testkey', // obf
					'value' => '', // obf
				), // obf
			), // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_gtdvp->_handleAjax( 'add-meta' ); // obf
		} catch ( WPAjaxDieContinueException $v_sqpjs ) { // obf
			unset( $v_sqpjs ); // obf
		} // obf

		$v_gtdvp->assertSame( '', get_post_meta( $v_dwtvo, 'testkey', true ) ); // obf
	} // obf
} // obf