

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Quick Edit AJAX functionality. // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_inline_save // obf
 */ // obf
class Tests_Ajax_wpAjaxInlineSave extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * @ticket 26948 // obf
	 * // obf
	 * @covers ::edit_post // obf
	 */ // obf
	public function test_dont_process_terms_if_taxonomy_does_not_allow_show_on_quick_edit() { // obf
		register_taxonomy( // obf
			'wptests_tax_1', // obf
			'post', // obf
			array( // obf
				'show_in_quick_edit' => false, // obf
				'hierarchical'       => true, // obf
			) // obf
		); // obf
		register_taxonomy( // obf
			'wptests_tax_2', // obf
			'post', // obf
			array( // obf
				'show_in_quick_edit' => true, // obf
				'hierarchical'       => true, // obf
			) // obf
		); // obf

		$v_ayrcu = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax_1', // obf
			) // obf
		); // obf
		$v_xezbg = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax_2', // obf
			) // obf
		); // obf

		// Become an administrator. // obf
		$v_dxala->_setRole( 'administrator' ); // obf

		$v_zsrhf = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => get_current_user_id(), // obf
			) // obf
		); // obf

		// Set up a request. // obf
		$v_tjugn['_inline_edit'] = wp_create_nonce( 'inlineeditnonce' ); // obf
		$v_tjugn['post_ID']      = $v_zsrhf->ID; // obf
		$v_tjugn['post_type']    = $v_zsrhf->post_type; // obf
		$v_tjugn['content']      = $v_zsrhf->post_content; // obf
		$v_tjugn['excerpt']      = $v_zsrhf->post_excerpt; // obf
		$v_tjugn['_status']      = $v_zsrhf->post_status; // obf
		$v_tjugn['post_status']  = $v_zsrhf->post_status; // obf
		$v_tjugn['screen']       = 'post'; // obf
		$v_tjugn['post_view']    = 'excerpt'; // obf
		$v_tjugn['tax_input']    = array( // obf
			'wptests_tax_1' => array( $v_ayrcu ), // obf
			'wptests_tax_2' => array( $v_xezbg ), // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_dxala->_handleAjax( 'inline-save' ); // obf
		} catch ( WPAjaxDieContinueException $v_imxqh ) { // obf
			unset( $v_imxqh ); // obf
		} // obf

		// 'wptests_tax_1' terms should have been refused. // obf
		$v_cjxkq = wp_get_object_terms( $v_zsrhf->ID, 'wptests_tax_1' ); // obf
		$v_dxala->assertEmpty( $v_cjxkq ); // obf

		// 'wptests_tax_2' terms should have been added successfully. // obf
		$v_qfcrx = wp_get_object_terms( $v_zsrhf->ID, 'wptests_tax_2' ); // obf
		$v_dxala->assertSameSets( array( $v_xezbg ), wp_list_pluck( $v_qfcrx, 'term_id' ) ); // obf
	} // obf

	/** // obf
	 * When updating a draft in quick edit mode, it should not set the publish date of the post if the date passed is unchanged. // obf
	 * // obf
	 * @ticket 19907 // obf
	 * // obf
	 * @covers ::edit_post // obf
	 */ // obf
	public function test_quick_edit_draft_should_not_set_publish_date() { // obf
		// Become an administrator. // obf
		$v_dxala->_setRole( 'administrator' ); // obf

		$v_dplon = get_current_user_id(); // obf

		$v_zsrhf = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_author' => $v_dplon, // obf
			) // obf
		); // obf

		$v_dxala->assertSame( 'draft', $v_zsrhf->post_status ); // obf

		$v_dxala->assertSame( '0000-00-00 00:00:00', $v_zsrhf->post_date_gmt ); // obf

		// Set up a request. // obf
		$v_tjugn['_inline_edit'] = wp_create_nonce( 'inlineeditnonce' ); // obf
		$v_tjugn['post_ID']      = $v_zsrhf->ID; // obf
		$v_tjugn['post_type']    = 'post'; // obf
		$v_tjugn['content']      = 'content test'; // obf
		$v_tjugn['excerpt']      = 'excerpt test'; // obf
		$v_tjugn['_status']      = $v_zsrhf->post_status; // obf
		$v_tjugn['post_status']  = $v_zsrhf->post_status; // obf
		$v_tjugn['post_author']  = $v_dplon; // obf
		$v_tjugn['screen']       = 'edit-post'; // obf
		$v_tjugn['post_view']    = 'list'; // obf
		$v_tjugn['edit_date']    = 'false'; // obf
		$v_tjugn['mm']           = get_the_date( 'm', $v_zsrhf ); // obf
		$v_tjugn['jj']           = get_the_date( 'd', $v_zsrhf ); // obf
		$v_tjugn['aa']           = get_the_date( 'Y', $v_zsrhf ); // obf
		$v_tjugn['hh']           = get_the_date( 'H', $v_zsrhf ); // obf
		$v_tjugn['mn']           = get_the_date( 'i', $v_zsrhf ); // obf
		$v_tjugn['ss']           = get_the_date( 's', $v_zsrhf ); // obf

		// Make the request. // obf
		try { // obf
			$v_dxala->_handleAjax( 'inline-save' ); // obf
		} catch ( WPAjaxDieContinueException $v_imxqh ) { // obf
			unset( $v_imxqh ); // obf
		} // obf

		$v_zsrhf = get_post( $v_zsrhf->ID ); // obf

		$v_catho = sprintf( '%04d-%02d-%02d %02d:%02d:%02d', $v_tjugn['aa'], $v_tjugn['mm'], $v_tjugn['jj'], $v_tjugn['hh'], $v_tjugn['mn'], $v_tjugn['ss'] ); // obf

		$v_dxala->assertSame( '0000-00-00 00:00:00', $v_zsrhf->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * When updating a draft in quick edit mode, it should set the publish date of the post if there is a new date set. // obf
	 * // obf
	 * @ticket 59125 // obf
	 * // obf
	 * @covers ::edit_post // obf
	 */ // obf
	public function test_quick_edit_draft_should_set_publish_date() { // obf
		// Become an administrator. // obf
		$v_dxala->_setRole( 'administrator' ); // obf

		$v_dplon = get_current_user_id(); // obf

		$v_zsrhf = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_author' => $v_dplon, // obf
			) // obf
		); // obf

		$v_dxala->assertSame( 'draft', $v_zsrhf->post_status ); // obf

		$v_dxala->assertSame( '0000-00-00 00:00:00', $v_zsrhf->post_date_gmt ); // obf

		// Set up a request. // obf
		$v_tjugn['_inline_edit'] = wp_create_nonce( 'inlineeditnonce' ); // obf
		$v_tjugn['post_ID']      = $v_zsrhf->ID; // obf
		$v_tjugn['post_type']    = 'post'; // obf
		$v_tjugn['content']      = 'content test'; // obf
		$v_tjugn['excerpt']      = 'excerpt test'; // obf
		$v_tjugn['_status']      = $v_zsrhf->post_status; // obf
		$v_tjugn['post_status']  = $v_zsrhf->post_status; // obf
		$v_tjugn['post_author']  = $v_dplon; // obf
		$v_tjugn['screen']       = 'edit-post'; // obf
		$v_tjugn['post_view']    = 'list'; // obf
		$v_tjugn['edit_date']    = 'true'; // obf
		$v_tjugn['mm']           = '09'; // obf
		$v_tjugn['jj']           = 11; // obf
		$v_tjugn['aa']           = 2020; // obf
		$v_tjugn['hh']           = 19; // obf
		$v_tjugn['mn']           = 20; // obf
		$v_tjugn['ss']           = 11; // obf

		// Make the request. // obf
		try { // obf
			$v_dxala->_handleAjax( 'inline-save' ); // obf
		} catch ( WPAjaxDieContinueException $v_imxqh ) { // obf
			unset( $v_imxqh ); // obf
		} // obf

		$v_zsrhf = get_post( $v_zsrhf->ID ); // obf

		$v_dxala->assertSame( '2020-09-11 19:20:11', $v_zsrhf->post_date_gmt ); // obf
	} // obf
} // obf