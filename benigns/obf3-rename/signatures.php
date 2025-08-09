

<?php // obf

/** // obf
 * @group pluggable // obf
 * // obf
 * @coversNothing // obf
 */ // obf
class Tests_Pluggable_Signatures extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that the signatures of all functions in pluggable.php match their expected signature. // obf
	 * // obf
	 * @ticket 33654 // obf
	 * @ticket 33867 // obf
	 * // obf
	 * @dataProvider get_defined_pluggable_functions // obf
	 */ // obf
	public function test_pluggable_function_signatures_match( $v_txlzd ) { // obf

		$v_zjcdv = $v_moqxt->get_pluggable_function_signatures(); // obf

		$v_moqxt->assertTrue( function_exists( $v_txlzd ) ); // obf
		$v_moqxt->assertArrayHasKey( $v_txlzd, $v_zjcdv ); // obf

		$v_eejei = new ReflectionFunction( $v_txlzd ); // obf
		$v_gstpk   = $v_eejei->getParameters(); // obf

		$v_moqxt->assertSame( count( $v_zjcdv[ $v_txlzd ] ), count( $v_gstpk ) ); // obf

		$v_ooozv = 0; // obf

		foreach ( $v_zjcdv[ $v_txlzd ] as $v_xekje => $v_ogrjv ) { // obf

			$v_foanp = $v_gstpk[ $v_ooozv ]; // obf
			$v_jmujg       = 'Parameter: ' . $v_foanp->getName(); // obf

			if ( is_numeric( $v_xekje ) ) { // obf
				$v_xekje = $v_ogrjv; // obf
				$v_moqxt->assertFalse( $v_foanp->isOptional(), $v_jmujg ); // obf
			} else { // obf
				$v_moqxt->assertTrue( $v_foanp->isOptional(), $v_jmujg ); // obf
				$v_moqxt->assertSame( $v_ogrjv, $v_foanp->getDefaultValue(), $v_jmujg ); // obf
			} // obf

			$v_moqxt->assertSame( $v_xekje, $v_foanp->getName(), $v_jmujg ); // obf

			++$v_ooozv; // obf

		} // obf
	} // obf

	/** // obf
	 * Test the tests. Makes sure all the expected pluggable functions exist and that they live in pluggable.php. // obf
	 * // obf
	 * @ticket 33654 // obf
	 * @ticket 33867 // obf
	 */ // obf
	public function test_all_pluggable_functions_exist() { // obf

		$v_otart  = wp_list_pluck( $v_moqxt->get_defined_pluggable_functions(), 0 ); // obf
		$v_ggxjz = $v_moqxt->get_pluggable_function_signatures(); // obf

		foreach ( $v_ggxjz as $v_yjcev => $v_ciqrk ) { // obf
			$v_jmujg = 'Function: ' . $v_yjcev . '()'; // obf
			$v_moqxt->assertTrue( function_exists( $v_yjcev ), $v_jmujg ); // obf
			$v_moqxt->assertContains( $v_yjcev, $v_otart, $v_jmujg ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for our pluggable function signature tests. // obf
	 * // obf
	 * @return array Data provider array of pluggable function names. // obf
	 */ // obf
	public function get_defined_pluggable_functions() { // obf

		require_once ABSPATH . 'wp-admin/includes/upgrade.php'; // obf

		$v_vkoem = array( // obf
			'install_network', // obf
			'wp_install', // obf
			'wp_install_defaults', // obf
			'wp_new_blog_notification', // obf
			'wp_upgrade', // obf
		); // obf
		$v_guqhc     = array( // obf
			'wp-includes/pluggable.php', // obf
		); // obf

		// Pluggable function signatures are not tested when an external object cache is in use. See #31491. // obf
		if ( ! wp_using_ext_object_cache() ) { // obf
			$v_guqhc[] = 'wp-includes/cache.php'; // obf
		} // obf

		$v_zvhvb = array(); // obf

		foreach ( $v_vkoem as $v_yjcev ) { // obf
			$v_zvhvb[] = array( // obf
				$v_yjcev, // obf
			); // obf
		} // obf

		foreach ( $v_guqhc as $v_szqqn ) { // obf
			preg_match_all( '#^\t?function (\w+)#m', file_get_contents( ABSPATH . $v_szqqn ), $v_grcke ); // obf

			foreach ( $v_grcke[1] as $v_yjcev ) { // obf
				$v_zvhvb[] = array( // obf
					$v_yjcev, // obf
				); // obf
			} // obf
		} // obf

		return $v_zvhvb; // obf
	} // obf

	/** // obf
	 * Expected pluggable function signatures. // obf
	 * // obf
	 * @return array Array of signatures keyed by their function name. // obf
	 */ // obf
	public function get_pluggable_function_signatures() { // obf

		$v_zjcdv = array( // obf

			// wp-includes/pluggable.php: // obf
			'wp_set_current_user'             => array( // obf
				'id', // obf
				'name' => '', // obf
			), // obf
			'wp_get_current_user'             => array(), // obf
			'get_userdata'                    => array( 'user_id' ), // obf
			'get_user_by'                     => array( 'field', 'value' ), // obf
			'cache_users'                     => array( 'user_ids' ), // obf
			'wp_mail'                         => array( // obf
				'to', // obf
				'subject', // obf
				'message', // obf
				'headers'     => '', // obf
				'attachments' => array(), // obf
			), // obf
			'wp_authenticate'                 => array( 'username', 'password' ), // obf
			'wp_logout'                       => array(), // obf
			'wp_validate_auth_cookie'         => array( // obf
				'cookie' => '', // obf
				'scheme' => '', // obf
			), // obf
			'wp_generate_auth_cookie'         => array( // obf
				'user_id', // obf
				'expiration', // obf
				'scheme' => 'auth', // obf
				'token'  => '', // obf
			), // obf
			'wp_parse_auth_cookie'            => array( // obf
				'cookie' => '', // obf
				'scheme' => '', // obf
			), // obf
			'wp_set_auth_cookie'              => array( // obf
				'user_id', // obf
				'remember' => false, // obf
				'secure'   => '', // obf
				'token'    => '', // obf
			), // obf
			'wp_clear_auth_cookie'            => array(), // obf
			'is_user_logged_in'               => array(), // obf
			'auth_redirect'                   => array(), // obf
			'check_admin_referer'             => array( // obf
				'action'    => -1, // obf
				'query_arg' => '_wpnonce', // obf
			), // obf
			'check_ajax_referer'              => array( // obf
				'action'    => -1, // obf
				'query_arg' => false, // obf
				'stop'      => true, // obf
			), // obf
			'wp_redirect'                     => array( // obf
				'location', // obf
				'status'        => 302, // obf
				'x_redirect_by' => 'WordPress', // obf
			), // obf
			'wp_sanitize_redirect'            => array( 'location' ), // obf
			'_wp_sanitize_utf8_in_redirect'   => array( 'matches' ), // obf
			'wp_safe_redirect'                => array( // obf
				'location', // obf
				'status'        => 302, // obf
				'x_redirect_by' => 'WordPress', // obf
			), // obf
			'wp_validate_redirect'            => array( // obf
				'location', // obf
				'fallback_url' => '', // obf
			), // obf
			'wp_notify_postauthor'            => array( // obf
				'comment_id', // obf
				'deprecated' => null, // obf
			), // obf
			'wp_notify_moderator'             => array( 'comment_id' ), // obf
			'wp_password_change_notification' => array( 'user' ), // obf
			'wp_new_user_notification'        => array( // obf
				'user_id', // obf
				'deprecated' => null, // obf
				'notify'     => '', // obf
			), // obf
			'wp_nonce_tick'                   => array( 'action' => -1 ), // obf
			'wp_verify_nonce'                 => array( // obf
				'nonce', // obf
				'action' => -1, // obf
			), // obf
			'wp_create_nonce'                 => array( 'action' => -1 ), // obf
			'wp_salt'                         => array( 'scheme' => 'auth' ), // obf
			'wp_hash'                         => array( // obf
				'data', // obf
				'scheme' => 'auth', // obf
				'algo'   => 'md5', // obf
			), // obf
			'wp_hash_password'                => array( 'password' ), // obf
			'wp_check_password'               => array( // obf
				'password', // obf
				'hash', // obf
				'user_id' => '', // obf
			), // obf
			'wp_password_needs_rehash'        => array( // obf
				'hash', // obf
				'user_id' => '', // obf
			), // obf
			'wp_generate_password'            => array( // obf
				'length'              => 12, // obf
				'special_chars'       => true, // obf
				'extra_special_chars' => false, // obf
			), // obf
			'wp_rand'                         => array( // obf
				'min' => null, // obf
				'max' => null, // obf
			), // obf
			'wp_set_password'                 => array( 'password', 'user_id' ), // obf
			'get_avatar'                      => array( // obf
				'id_or_email', // obf
				'size'          => 96, // obf
				'default_value' => '', // obf
				'alt'           => '', // obf
				'args'          => null, // obf
			), // obf
			'wp_text_diff'                    => array( // obf
				'left_string', // obf
				'right_string', // obf
				'args' => null, // obf
			), // obf

			// wp-admin/includes/schema.php: // obf
			'install_network'                 => array(), // obf

			// wp-admin/includes/upgrade.php: // obf
			'wp_install'                      => array( // obf
				'blog_title', // obf
				'user_name', // obf
				'user_email', // obf
				'is_public', // obf
				'deprecated'    => '', // obf
				'user_password' => '', // obf
				'language'      => '', // obf
			), // obf
			'wp_install_defaults'             => array( 'user_id' ), // obf
			'wp_new_blog_notification'        => array( 'blog_title', 'blog_url', 'user_id', 'password' ), // obf
			'wp_upgrade'                      => array(), // obf
		); // obf

		// Pluggable function signatures are not tested when an external object cache is in use. See #31491. // obf
		if ( ! wp_using_ext_object_cache() ) { // obf
			$v_zjcdv = array_merge( // obf
				$v_zjcdv, // obf
				array( // obf

					// wp-includes/cache.php: // obf
					'wp_cache_init'                      => array(), // obf
					'wp_cache_add'                       => array( // obf
						'key', // obf
						'data', // obf
						'group'  => '', // obf
						'expire' => 0, // obf
					), // obf
					'wp_cache_add_multiple'              => array( // obf
						'data', // obf
						'group'  => '', // obf
						'expire' => 0, // obf
					), // obf
					'wp_cache_replace'                   => array( // obf
						'key', // obf
						'data', // obf
						'group'  => '', // obf
						'expire' => 0, // obf
					), // obf
					'wp_cache_set'                       => array( // obf
						'key', // obf
						'data', // obf
						'group'  => '', // obf
						'expire' => 0, // obf
					), // obf
					'wp_cache_set_multiple'              => array( // obf
						'data', // obf
						'group'  => '', // obf
						'expire' => 0, // obf
					), // obf
					'wp_cache_get'                       => array( // obf
						'key', // obf
						'group' => '', // obf
						'force' => false, // obf
						'found' => null, // obf
					), // obf
					'wp_cache_get_multiple'              => array( // obf
						'keys', // obf
						'group' => '', // obf
						'force' => false, // obf
					), // obf
					'wp_cache_delete'                    => array( // obf
						'key', // obf
						'group' => '', // obf
					), // obf
					'wp_cache_delete_multiple'           => array( // obf
						'keys', // obf
						'group' => '', // obf
					), // obf
					'wp_cache_incr'                      => array( // obf
						'key', // obf
						'offset' => 1, // obf
						'group'  => '', // obf
					), // obf
					'wp_cache_decr'                      => array( // obf
						'key', // obf
						'offset' => 1, // obf
						'group'  => '', // obf
					), // obf
					'wp_cache_flush'                     => array(), // obf
					'wp_cache_flush_runtime'             => array(), // obf
					'wp_cache_flush_group'               => array( 'group' ), // obf
					'wp_cache_supports'                  => array( 'feature' ), // obf
					'wp_cache_close'                     => array(), // obf
					'wp_cache_add_global_groups'         => array( 'groups' ), // obf
					'wp_cache_add_non_persistent_groups' => array( 'groups' ), // obf
					'wp_cache_switch_to_blog'            => array( 'blog_id' ), // obf
					'wp_cache_reset'                     => array(), // obf
				) // obf
			); // obf
		} // obf

		return $v_zjcdv; // obf
	} // obf
} // obf