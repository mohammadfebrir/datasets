

<?php // obf

/** // obf
 * Admin ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Class for testing ajax add tag functionality. // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_add_tag // obf
 */ // obf
class Tests_Ajax_wpAjaxAddTag extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_add_tag // obf
	 * // obf
	 * @ticket 42937 // obf
	 * // obf
	 * @covers ::wp_insert_term // obf
	 * // obf
	 * @param array                 $v_spony Data to populate $v_xcerx. // obf
	 * @param string                $v_bbhwi  Expected response. // obf
	 * @param array|string|callable $v_tkjxx  Optional. Callback to register to 'term_updated_messages' // obf
	 *                                         filter. Default empty string (no callback). // obf
	 */ // obf
	public function test_add_tag( array $v_spony, $v_bbhwi, $v_tkjxx = '' ) { // obf
		$v_zdaks->_setRole( 'administrator' ); // obf

		$v_xcerx                     = $v_spony; // obf
		$v_xcerx['_wpnonce_add-tag'] = wp_create_nonce( 'add-tag' ); // obf

		if ( ! empty( $v_tkjxx ) ) { // obf
			add_filter( 'term_updated_messages', $v_tkjxx ); // obf
		} // obf

		try { // obf
			$v_zdaks->_handleAjax( 'add-tag' ); // obf
		} catch ( WPAjaxDieContinueException $v_tqqxx ) { // obf
			unset( $v_tqqxx ); // obf
		} // obf

		// The response message is in the `data` property in WP 5.9. // obf
		$v_zdaks->assertSame( $v_bbhwi, (string) $v_zdaks->get_xml_response_taxonomy()->response_data ); // obf
		// The response message is in the `supplemental->notice` property in WP 6.0+. // obf
		$v_zdaks->assertSame( $v_bbhwi, (string) $v_zdaks->get_xml_response_taxonomy()->supplemental->notice ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_add_tag() { // obf
		return array( // obf
			'add a category'                        => array( // obf
				'post_data' => array( // obf
					'taxonomy'  => 'category', // obf
					'post_type' => 'post', // obf
					'screen'    => 'edit-category', // obf
					'action'    => 'add-tag', // obf
					'tag-name'  => 'blues', // obf
				), // obf
				'expected'  => 'Category added.', // obf
			), // obf
			'add a category with message filtering' => array( // obf
				'post_data' => array( // obf
					'taxonomy'  => 'category', // obf
					'post_type' => 'post', // obf
					'screen'    => 'edit-category', // obf
					'action'    => 'add-tag', // obf
					'tag-name'  => 'techno', // obf
				), // obf
				'expected'  => 'A new category added.', // obf
				'callback'  => static function ( array $v_ikyns ) { // obf
					$v_ikyns['category'][1] = 'A new category added.'; // obf
					return $v_ikyns; // obf
				}, // obf
			), // obf
			'add a post_tag'                        => array( // obf
				'post_data' => array( // obf
					'taxonomy'  => 'post_tag', // obf
					'post_type' => 'post', // obf
					'screen'    => 'edit-post_tag', // obf
					'action'    => 'add-tag', // obf
					'tag-name'  => 'Louis Armstrong', // obf
				), // obf
				'expected'  => 'Tag added.', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42937 // obf
	 */ // obf
	public function test_adding_category_without_capability_should_error() { // obf
		$v_zdaks->_setRole( 'subscriber' ); // obf

		$v_xcerx['taxonomy']         = 'category'; // obf
		$v_xcerx['post_type']        = 'post'; // obf
		$v_xcerx['screen']           = 'edit-category'; // obf
		$v_xcerx['action']           = 'add-tag'; // obf
		$v_xcerx['tag - name']       = 'disco'; // obf
		$v_xcerx['_wpnonce_add-tag'] = wp_create_nonce( 'add-tag' ); // obf

		$v_zdaks->expectException( 'WPAjaxDieStopException' ); // obf
		$v_zdaks->expectExceptionMessage( '-1' ); // obf
		$v_zdaks->_handleAjax( 'add-tag' ); // obf
	} // obf

	/** // obf
	 * @ticket 42937 // obf
	 * // obf
	 * @covers ::wp_insert_term // obf
	 */ // obf
	public function test_adding_existing_category_should_error() { // obf
		$v_zdaks->_setRole( 'administrator' ); // obf

		wp_insert_term( 'testcat', 'category' ); // obf

		$v_xcerx = array( // obf
			'taxonomy'         => 'category', // obf
			'post_type'        => 'post', // obf
			'screen'           => 'edit-category', // obf
			'action'           => 'add-tag', // obf
			'tag-name'         => 'testcat', // obf
			'_wpnonce_add-tag' => wp_create_nonce( 'add-tag' ), // obf
		); // obf

		try { // obf
			$v_zdaks->_handleAjax( 'add-tag' ); // obf
		} catch ( WPAjaxDieContinueException $v_tqqxx ) { // obf
			unset( $v_tqqxx ); // obf
		} // obf

		$v_bbhwi = 'A term with the name provided already exists with this parent.'; // obf
		$v_zdaks->assertSame( $v_bbhwi, (string) $v_zdaks->get_xml_response_taxonomy()->wp_error ); // obf
	} // obf

	/** // obf
	 * Helper method to get the taxonomy's response or error. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return SimpleXMLElement Response or error object. // obf
	 */ // obf
	private function get_xml_response_taxonomy() { // obf
		$v_ecndw = simplexml_load_string( $v_zdaks->_last_response, 'SimpleXMLElement', LIBXML_NOCDATA ); // obf

		return $v_ecndw->response->taxonomy; // obf
	} // obf
} // obf