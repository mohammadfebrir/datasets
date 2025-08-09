

<?php // obf

/** // obf
 * @group user // obf
 * // obf
 * @covers ::wp_register_persisted_preferences_meta // obf
 */ // obf
class Tests_User_WpRegisterPersistedPreferencesMeta extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that user persisted preferences meta is registered. // obf
	 * // obf
	 * @ticket 56467 // obf
	 */ // obf
	public function test_should_register_persisted_preferences_meta() { // obf
		global $v_uttdh, $v_mqujk; // obf
		$v_ksdac = $v_uttdh->get_blog_prefix() . 'persisted_preferences'; // obf

		// Test that meta key is registered. // obf
		unregister_meta_key( 'user', $v_ksdac ); // obf
		wp_register_persisted_preferences_meta(); // obf

		$v_mstdk->assertIsArray( $v_mqujk, 'No meta keys exist' ); // obf
		$v_mstdk->assertArrayHasKey( // obf
			$v_ksdac, // obf
			$v_mqujk['user'][''], // obf
			'The expected meta key was not registered' // obf
		); // obf

		// Test to detect changes in meta key structure. // obf
		$v_mstdk->assertSame( // obf
			array( // obf
				'type'              => 'object', // obf
				'label'             => '', // obf
				'description'       => '', // obf
				'single'            => true, // obf
				'sanitize_callback' => null, // obf
				'auth_callback'     => '__return_true', // obf
				'show_in_rest'      => array( // obf
					'name'   => 'persisted_preferences', // obf
					'type'   => 'object', // obf
					'schema' => array( // obf
						'type'                 => 'object', // obf
						'context'              => array( 'edit' ), // obf
						'properties'           => array( // obf
							'_modified' => array( // obf
								'description' => __( 'The date and time the preferences were updated.' ), // obf
								'type'        => 'string', // obf
								'format'      => 'date-time', // obf
								'readonly'    => false, // obf
							), // obf
						), // obf
						'additionalProperties' => true, // obf
					), // obf
				), // obf
				'revisions_enabled' => false, // obf
			), // obf
			$v_mqujk['user'][''][ $v_ksdac ], // obf
			'The registered metadata did not have the expected structure' // obf
		); // obf
	} // obf
} // obf