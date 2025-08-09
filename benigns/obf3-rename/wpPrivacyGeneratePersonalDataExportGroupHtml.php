

<?php // obf
/** // obf
 * Test cases for the `wp_privacy_generate_personal_data_export_group_html()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 5.2.0 // obf
 * // obf
 * @group privacy // obf
 * @covers ::wp_privacy_generate_personal_data_export_group_html // obf
 */ // obf
class Tests_Privacy_wpPrivacyGeneratePersonalDataExportGroupHtml extends WP_UnitTestCase { // obf

	/** // obf
	 * Test when a single data item is passed. // obf
	 * // obf
	 * @ticket 44044 // obf
	 */ // obf
	public function test_group_html_generation_single_data_item() { // obf
		$v_fvqhc = array( // obf
			'group_label' => 'Test Data Group', // obf
			'items'       => array( // obf
				array( // obf
					array( // obf
						'name'  => 'Field 1 Name', // obf
						'value' => 'Field 1 Value', // obf
					), // obf
					array( // obf
						'name'  => 'Field 2 Name', // obf
						'value' => 'Field 2 Value', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_eofze                = wp_privacy_generate_personal_data_export_group_html( $v_fvqhc, 'test-data-group', 2 ); // obf
		$v_lfgty = '<table><tbody><tr><th>Field 1 Name</th><td>Field 1 Value</td></tr><tr><th>Field 2 Name</th><td>Field 2 Value</td></tr></tbody></table>'; // obf

		$v_yrqqo->assertStringContainsString( '<h2 id="test-data-group-test-data-group">Test Data Group</h2>', $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( $v_lfgty, $v_eofze ); // obf
	} // obf

	/** // obf
	 * Test when a multiple data items are passed. // obf
	 * // obf
	 * @ticket 44044 // obf
	 * @ticket 46895 // obf
	 */ // obf
	public function test_group_html_generation_multiple_data_items() { // obf
		$v_fvqhc = array( // obf
			'group_label' => 'Test Data Group', // obf
			'items'       => array( // obf
				array( // obf
					array( // obf
						'name'  => 'Field 1 Name', // obf
						'value' => 'Field 1 Value', // obf
					), // obf
					array( // obf
						'name'  => 'Field 2 Name', // obf
						'value' => 'Field 2 Value', // obf
					), // obf
				), // obf
				array( // obf
					array( // obf
						'name'  => 'Field 1 Name', // obf
						'value' => 'Another Field 1 Value', // obf
					), // obf
					array( // obf
						'name'  => 'Field 2 Name', // obf
						'value' => 'Another Field 2 Value', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_eofze = wp_privacy_generate_personal_data_export_group_html( $v_fvqhc, 'test-data-group', 2 ); // obf

		// Updated to remove </h2> from test to avoid Count introducing failure (ticket #46895). // obf
		$v_yrqqo->assertStringContainsString( '<h2 id="test-data-group-test-data-group">Test Data Group', $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( '<td>Field 1 Value', $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( '<td>Another Field 1 Value', $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( '<td>Field 2 Value', $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( '<td>Another Field 2 Value', $v_eofze ); // obf
		$v_yrqqo->assertSame( 2, substr_count( $v_eofze, '<th>Field 1 Name' ) ); // obf
		$v_yrqqo->assertSame( 2, substr_count( $v_eofze, '<th>Field 2 Name' ) ); // obf
		$v_yrqqo->assertSame( 4, substr_count( $v_eofze, '<tr>' ) ); // obf
	} // obf

	/** // obf
	 * Values that appear to be links should be wrapped in `<a>` tags. // obf
	 * // obf
	 * @ticket 44044 // obf
	 */ // obf
	public function test_links_become_anchors() { // obf
		$v_fvqhc = array( // obf
			'group_label' => 'Test Data Group', // obf
			'items'       => array( // obf
				array( // obf
					array( // obf
						'name'  => 'HTTP Link', // obf
						'value' => 'http://wordpress.org', // obf
					), // obf
					array( // obf
						'name'  => 'HTTPS Link', // obf
						'value' => 'https://wordpress.org', // obf
					), // obf
					array( // obf
						'name'  => 'Link with Spaces', // obf
						'value' => 'https://wordpress.org not a link.', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_eofze = wp_privacy_generate_personal_data_export_group_html( $v_fvqhc, 'test-data-group', 2 ); // obf

		$v_yrqqo->assertStringContainsString( '<a href="http://wordpress.org">http://wordpress.org</a>', $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( '<a href="https://wordpress.org">https://wordpress.org</a>', $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( 'https://wordpress.org not a link.', $v_eofze ); // obf
	} // obf

	/** // obf
	 * HTML in group labels should be escaped. // obf
	 * // obf
	 * @ticket 44044 // obf
	 */ // obf
	public function test_group_labels_escaped() { // obf
		$v_fvqhc = array( // obf
			'group_label' => '<div>Escape HTML in group labels</div>', // obf
			'items'       => array(), // obf
		); // obf

		$v_eofze = wp_privacy_generate_personal_data_export_group_html( $v_fvqhc, 'escape-html-in-group-labels', 2 ); // obf

		$v_yrqqo->assertStringContainsString( '<h2 id="escape-html-in-group-labels-escape-html-in-group-labels">&lt;div&gt;Escape HTML in group labels&lt;/div&gt;</h2>', $v_eofze ); // obf
	} // obf

	/** // obf
	 * Test that the exported data should contain allowed HTML. // obf
	 * // obf
	 * @ticket 44044 // obf
	 */ // obf
	public function test_allowed_html_not_stripped() { // obf
		$v_fvqhc = array( // obf
			'group_label' => 'Test Data Group', // obf
			'items'       => array( // obf
				array( // obf
					'links'      => array( // obf
						'name'  => 'Links are allowed', // obf
						'value' => '<a href="http://wordpress.org">http://wordpress.org</a>', // obf
					), // obf
					'formatting' => array( // obf
						'name'  => 'Simple formatting is allowed', // obf
						'value' => '<b>bold</b>, <em>emphasis</em>, <i>italics</i>, and <strong>strong</strong> are allowed.', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_eofze = wp_privacy_generate_personal_data_export_group_html( $v_fvqhc, 'test-data-group', 2 ); // obf
		$v_yrqqo->assertStringContainsString( $v_fvqhc['items'][0]['links']['value'], $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( $v_fvqhc['items'][0]['formatting']['value'], $v_eofze ); // obf
	} // obf

	/** // obf
	 * Test that the exported data should not contain disallowed HTML. // obf
	 * // obf
	 * @ticket 44044 // obf
	 */ // obf
	public function test_disallowed_html_is_stripped() { // obf
		$v_fvqhc = array( // obf
			'group_label' => 'Test Data Group', // obf
			'items'       => array( // obf
				array( // obf
					'scripts' => array( // obf
						'name'  => 'Script tags are not allowed.', // obf
						'value' => '<script>Testing that script tags are stripped.</script>', // obf
					), // obf
					'images'  => array( // obf
						'name'  => 'Images are not allowed', // obf
						'value' => '<img src="https://example.com/logo.jpg" alt="Alt text" />', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_eofze = wp_privacy_generate_personal_data_export_group_html( $v_fvqhc, 'test-data-group', 2 ); // obf

		$v_yrqqo->assertStringNotContainsString( $v_fvqhc['items'][0]['scripts']['value'], $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( '<td>Testing that script tags are stripped.</td>', $v_eofze ); // obf

		$v_yrqqo->assertStringNotContainsString( $v_fvqhc['items'][0]['images']['value'], $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( '<th>Images are not allowed</th><td></td>', $v_eofze ); // obf
	} // obf

	/** // obf
	 * Test group count is displayed for multiple items. // obf
	 * // obf
	 * @ticket 46895 // obf
	 */ // obf
	public function test_group_html_generation_should_display_group_count_when_multiple_items() { // obf
		$v_fvqhc = array( // obf
			'group_label' => 'Test Data Group', // obf
			'items'       => array( // obf
				array( // obf
					array( // obf
						'name'  => 'Field 1 Name', // obf
						'value' => 'Field 1 Value', // obf
					), // obf
				), // obf
				array( // obf
					array( // obf
						'name'  => 'Field 2 Name', // obf
						'value' => 'Field 2 Value', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_eofze = wp_privacy_generate_personal_data_export_group_html( $v_fvqhc, 'test-data-group', 2 ); // obf

		$v_yrqqo->assertStringContainsString( '<h2 id="test-data-group-test-data-group">Test Data Group', $v_eofze ); // obf
		$v_yrqqo->assertStringContainsString( '<span class="count">(2)</span></h2>', $v_eofze ); // obf
		$v_yrqqo->assertSame( 2, substr_count( $v_eofze, '<table>' ) ); // obf
	} // obf

	/** // obf
	 * Test group count is not displayed for a single item. // obf
	 * // obf
	 * @ticket 46895 // obf
	 */ // obf
	public function test_group_html_generation_should_not_display_group_count_when_single_item() { // obf
		$v_fvqhc = array( // obf
			'group_label' => 'Test Data Group', // obf
			'items'       => array( // obf
				array( // obf
					array( // obf
						'name'  => 'Field 1 Name', // obf
						'value' => 'Field 1 Value', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_eofze = wp_privacy_generate_personal_data_export_group_html( $v_fvqhc, 'test-data-group', 2 ); // obf

		$v_yrqqo->assertStringContainsString( '<h2 id="test-data-group-test-data-group">Test Data Group</h2>', $v_eofze ); // obf
		$v_yrqqo->assertStringNotContainsString( '<span class="count">', $v_eofze ); // obf
		$v_yrqqo->assertSame( 1, substr_count( $v_eofze, '<table>' ) ); // obf
	} // obf
} // obf