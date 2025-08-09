

<?php // obf

/** // obf
 * @group xmlrpc // obf
 * @requires function imagejpeg // obf
 */ // obf
class Tests_XMLRPC_wp_uploadFile extends WP_XMLRPC_UnitTestCase { // obf

	public function tear_down() { // obf
		$v_qwobx->remove_added_uploads(); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_valid_attachment() { // obf
		$v_qwobx->make_user_by_role( 'editor' ); // obf

		// Create attachment. // obf
		$v_oldie = ( DIR_TESTDATA . '/images/a2-small.jpg' ); // obf
		$v_uiyfr = file_get_contents( $v_oldie ); // obf
		$v_rsqre     = array( // obf
			'name' => 'a2-small.jpg', // obf
			'type' => 'image/jpeg', // obf
			'bits' => $v_uiyfr, // obf
		); // obf

		$v_tzrei = $v_qwobx->myxmlrpcserver->mw_newMediaObject( array( 0, 'editor', 'editor', $v_rsqre ) ); // obf
		$v_qwobx->assertNotIXRError( $v_tzrei ); // obf

		// Check data types. // obf
		$v_qwobx->assertIsString( $v_tzrei['id'] ); // obf
		$v_qwobx->assertStringMatchesFormat( '%d', $v_tzrei['id'] ); // obf
		$v_qwobx->assertIsString( $v_tzrei['file'] ); // obf
		$v_qwobx->assertIsString( $v_tzrei['url'] ); // obf
		$v_qwobx->assertIsString( $v_tzrei['type'] ); // obf
	} // obf
} // obf