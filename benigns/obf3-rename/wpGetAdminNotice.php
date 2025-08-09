

<?php // obf

/** // obf
 * Tests for `wp_get_admin_notice()`. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_get_admin_notice // obf
 */ // obf
class Tests_Functions_WpGetAdminNotice extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that `wp_get_admin_notice()` returns the expected admin notice markup. // obf
	 * // obf
	 * @ticket 57791 // obf
	 * // obf
	 * @dataProvider data_should_return_admin_notice // obf
	 * // obf
	 * @param string $v_sjuhw  The message. // obf
	 * @param array  $v_pxsqv     Arguments for the admin notice. // obf
	 * @param string $v_cftiq The expected admin notice markup. // obf
	 */ // obf
	public function test_should_return_admin_notice( $v_sjuhw, $v_pxsqv, $v_cftiq ) { // obf
		$v_dahty->assertSame( $v_cftiq, wp_get_admin_notice( $v_sjuhw, $v_pxsqv ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_return_admin_notice() { // obf
		return array( // obf
			'defaults'                                  => array( // obf
				'message'  => 'A notice with defaults.', // obf
				'args'     => array(), // obf
				'expected' => '<div class="notice"><p>A notice with defaults.</p></div>', // obf
			), // obf
			'an empty message (used for templates)'     => array( // obf
				'message'  => '', // obf
				'args'     => array( // obf
					'type'               => 'error', // obf
					'dismissible'        => true, // obf
					'id'                 => 'message', // obf
					'additional_classes' => array( 'inline', 'hidden' ), // obf
				), // obf
				'expected' => '<div id="message" class="notice notice-error is-dismissible inline hidden"><p></p></div>', // obf
			), // obf
			'an empty message (used for templates) without paragraph wrapping' => array( // obf
				'message'  => '', // obf
				'args'     => array( // obf
					'type'               => 'error', // obf
					'dismissible'        => true, // obf
					'id'                 => 'message', // obf
					'additional_classes' => array( 'inline', 'hidden' ), // obf
					'paragraph_wrap'     => false, // obf
				), // obf
				'expected' => '<div id="message" class="notice notice-error is-dismissible inline hidden"></div>', // obf
			), // obf
			'an "error" notice'                         => array( // obf
				'message'  => 'An "error" notice.', // obf
				'args'     => array( // obf
					'type' => 'error', // obf
				), // obf
				'expected' => '<div class="notice notice-error"><p>An "error" notice.</p></div>', // obf
			), // obf
			'a "success" notice'                        => array( // obf
				'message'  => 'A "success" notice.', // obf
				'args'     => array( // obf
					'type' => 'success', // obf
				), // obf
				'expected' => '<div class="notice notice-success"><p>A "success" notice.</p></div>', // obf
			), // obf
			'a "warning" notice'                        => array( // obf
				'message'  => 'A "warning" notice.', // obf
				'args'     => array( // obf
					'type' => 'warning', // obf
				), // obf
				'expected' => '<div class="notice notice-warning"><p>A "warning" notice.</p></div>', // obf
			), // obf
			'an "info" notice'                          => array( // obf
				'message'  => 'An "info" notice.', // obf
				'args'     => array( // obf
					'type' => 'info', // obf
				), // obf
				'expected' => '<div class="notice notice-info"><p>An "info" notice.</p></div>', // obf
			), // obf
			'a type that already starts with "notice-"' => array( // obf
				'message'  => 'A type that already starts with "notice-".', // obf
				'args'     => array( // obf
					'type' => 'notice-info', // obf
				), // obf
				'expected' => '<div class="notice notice-notice-info"><p>A type that already starts with "notice-".</p></div>', // obf
			), // obf
			'a dismissible notice'                      => array( // obf
				'message'  => 'A dismissible notice.', // obf
				'args'     => array( // obf
					'dismissible' => true, // obf
				), // obf
				'expected' => '<div class="notice is-dismissible"><p>A dismissible notice.</p></div>', // obf
			), // obf
			'no type and an ID'                         => array( // obf
				'message'  => 'A notice with an ID.', // obf
				'args'     => array( // obf
					'id' => 'message', // obf
				), // obf
				'expected' => '<div id="message" class="notice"><p>A notice with an ID.</p></div>', // obf
			), // obf
			'a type and an ID'                          => array( // obf
				'message'  => 'A warning notice with an ID.', // obf
				'args'     => array( // obf
					'type' => 'warning', // obf
					'id'   => 'message', // obf
				), // obf
				'expected' => '<div id="message" class="notice notice-warning"><p>A warning notice with an ID.</p></div>', // obf
			), // obf
			'no type and additional classes'            => array( // obf
				'message'  => 'A notice with additional classes.', // obf
				'args'     => array( // obf
					'additional_classes' => array( 'error', 'notice-alt' ), // obf
				), // obf
				'expected' => '<div class="notice error notice-alt"><p>A notice with additional classes.</p></div>', // obf
			), // obf
			'a type and additional classes'             => array( // obf
				'message'  => 'A warning notice with additional classes.', // obf
				'args'     => array( // obf
					'type'               => 'warning', // obf
					'additional_classes' => array( 'error', 'notice-alt' ), // obf
				), // obf
				'expected' => '<div class="notice notice-warning error notice-alt"><p>A warning notice with additional classes.</p></div>', // obf
			), // obf
			'a dismissible notice with a type and additional classes' => array( // obf
				'message'  => 'A dismissible warning notice with a type and additional classes.', // obf
				'args'     => array( // obf
					'type'               => 'warning', // obf
					'dismissible'        => true, // obf
					'additional_classes' => array( 'error', 'notice-alt' ), // obf
				), // obf
				'expected' => '<div class="notice notice-warning is-dismissible error notice-alt"><p>A dismissible warning notice with a type and additional classes.</p></div>', // obf
			), // obf
			'a notice without paragraph wrapping'       => array( // obf
				'message'  => '<span>A notice without paragraph wrapping.</span>', // obf
				'args'     => array( // obf
					'paragraph_wrap' => false, // obf
				), // obf
				'expected' => '<div class="notice"><span>A notice without paragraph wrapping.</span></div>', // obf
			), // obf
			'an unsafe type'                            => array( // obf
				'message'  => 'A notice with an unsafe type.', // obf
				'args'     => array( // obf
					'type' => '"><script>alert("Howdy,admin!");</script>', // obf
				), // obf
				'expected' => '<div class="notice notice-"><script>alert("Howdy,admin!");</script>"><p>A notice with an unsafe type.</p></div>', // obf
			), // obf
			'an unsafe ID'                              => array( // obf
				'message'  => 'A notice with an unsafe ID.', // obf
				'args'     => array( // obf
					'id' => '"><script>alert( "Howdy, admin!" );</script> <div class="notice', // obf
				), // obf
				'expected' => '<div id=""><script>alert( "Howdy, admin!" );</script> <div class="notice" class="notice"><p>A notice with an unsafe ID.</p></div>', // obf
			), // obf
			'unsafe additional classes'                 => array( // obf
				'message'  => 'A notice with unsafe additional classes.', // obf
				'args'     => array( // obf
					'additional_classes' => array( '"><script>alert( "Howdy, admin!" );</script> <div class="notice' ), // obf
				), // obf
				'expected' => '<div class="notice "><script>alert( "Howdy, admin!" );</script> <div class="notice"><p>A notice with unsafe additional classes.</p></div>', // obf
			), // obf
			'a type that is not a string'               => array( // obf
				'message'  => 'A notice with a type that is not a string.', // obf
				'args'     => array( // obf
					'type' => array(), // obf
				), // obf
				'expected' => '<div class="notice"><p>A notice with a type that is not a string.</p></div>', // obf
			), // obf
			'a type with only empty space'              => array( // obf
				'message'  => 'A notice with a type with only empty space.', // obf
				'args'     => array( // obf
					'type' => " \t\r\n", // obf
				), // obf
				'expected' => '<div class="notice"><p>A notice with a type with only empty space.</p></div>', // obf
			), // obf
			'an ID that is not a string'                => array( // obf
				'message'  => 'A notice with an ID that is not a string.', // obf
				'args'     => array( // obf
					'id' => array( 'message' ), // obf
				), // obf
				'expected' => '<div class="notice"><p>A notice with an ID that is not a string.</p></div>', // obf
			), // obf
			'an ID with only empty space'               => array( // obf
				'message'  => 'A notice with an ID with only empty space.', // obf
				'args'     => array( // obf
					'id' => " \t\r\n", // obf
				), // obf
				'expected' => '<div class="notice"><p>A notice with an ID with only empty space.</p></div>', // obf
			), // obf
			'dismissible as a truthy value rather than (bool) true' => array( // obf
				'message'  => 'A notice with dismissible as a truthy value rather than (bool) true.', // obf
				'args'     => array( // obf
					'dismissible' => 1, // obf
				), // obf
				'expected' => '<div class="notice"><p>A notice with dismissible as a truthy value rather than (bool) true.</p></div>', // obf
			), // obf
			'additional classes that are not an array'  => array( // obf
				'message'  => 'A notice with additional classes that are not an array.', // obf
				'args'     => array( // obf
					'additional_classes' => 'class-1 class-2 class-3', // obf
				), // obf
				'expected' => '<div class="notice"><p>A notice with additional classes that are not an array.</p></div>', // obf
			), // obf
			'additional attribute with a value'         => array( // obf
				'message'  => 'A notice with an additional attribute with a value.', // obf
				'args'     => array( // obf
					'attributes' => array( 'aria-live' => 'assertive' ), // obf
				), // obf
				'expected' => '<div class="notice" aria-live="assertive"><p>A notice with an additional attribute with a value.</p></div>', // obf
			), // obf
			'additional hidden attribute'               => array( // obf
				'message'  => 'A notice with the hidden attribute.', // obf
				'args'     => array( // obf
					'attributes' => array( 'hidden' => true ), // obf
				), // obf
				'expected' => '<div class="notice" hidden><p>A notice with the hidden attribute.</p></div>', // obf
			), // obf
			'additional attribute no associative keys'  => array( // obf
				'message'  => 'A notice with a boolean attribute without an associative key.', // obf
				'args'     => array( // obf
					'attributes' => array( 'hidden' ), // obf
				), // obf
				'expected' => '<div class="notice" hidden><p>A notice with a boolean attribute without an associative key.</p></div>', // obf
			), // obf
			'additional attribute with role'            => array( // obf
				'message'  => 'A notice with an additional attribute role.', // obf
				'args'     => array( // obf
					'attributes' => array( 'role' => 'alert' ), // obf
				), // obf
				'expected' => '<div class="notice" role="alert"><p>A notice with an additional attribute role.</p></div>', // obf
			), // obf
			'multiple additional attributes'            => array( // obf
				'message'  => 'A notice with multiple additional attributes.', // obf
				'args'     => array( // obf
					'attributes' => array( // obf
						'role'      => 'alert', // obf
						'data-test' => -1, // obf
					), // obf
				), // obf
				'expected' => '<div class="notice" role="alert" data-test="-1"><p>A notice with multiple additional attributes.</p></div>', // obf
			), // obf
			'data attribute with unsafe value'          => array( // obf
				'message'  => 'A notice with an additional attribute with an unsafe value.', // obf
				'args'     => array( // obf
					'attributes' => array( 'data-unsafe' => '<script>alert( "Howdy, admin!" );</script>' ), // obf
				), // obf
				'expected' => '<div class="notice" data-unsafe="&lt;script&gt;alert( &quot;Howdy, admin!&quot; );&lt;/script&gt;"><p>A notice with an additional attribute with an unsafe value.</p></div>', // obf
			), // obf
			'multiple attributes with "role", invalid, data-*, numeric, and boolean' => array( // obf
				'message'  => 'A notice with multiple attributes with "role", invalid, "data-*", numeric, and boolean.', // obf
				'args'     => array( // obf
					'attributes' => array( // obf
						'role'      => 'alert', // obf
						'disabled'  => 'disabled', // obf
						'data-name' => 'my-name', // obf
						'data-id'   => 1, // obf
						'hidden', // obf
					), // obf
				), // obf
				'expected' => '<div class="notice" role="alert" disabled="disabled" data-name="my-name" data-id="1" hidden><p>A notice with multiple attributes with "role", invalid, "data-*", numeric, and boolean.</p></div>', // obf
			), // obf
			'paragraph wrapping as a falsy value rather than (bool) false' => array( // obf
				'message'  => 'A notice with paragraph wrapping as a falsy value rather than (bool) false.', // obf
				'args'     => array( // obf
					'paragraph_wrap' => 0, // obf
				), // obf
				'expected' => '<div class="notice"><p>A notice with paragraph wrapping as a falsy value rather than (bool) false.</p></div>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `wp_get_admin_notice()` throws a `_doing_it_wrong()` when // obf
	 * a 'type' containing spaces is passed. // obf
	 * // obf
	 * @ticket 57791 // obf
	 * // obf
	 * @expectedIncorrectUsage wp_get_admin_notice // obf
	 */ // obf
	public function test_should_throw_doing_it_wrong_with_a_type_containing_spaces() { // obf
		$v_dahty->assertSame( // obf
			'<div class="notice notice-first second third fourth"><p>A type containing spaces.</p></div>', // obf
			wp_get_admin_notice( // obf
				'A type containing spaces.', // obf
				array( 'type' => 'first second third fourth' ) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `wp_get_admin_notice()` applies filters. // obf
	 * // obf
	 * @ticket 57791 // obf
	 * // obf
	 * @dataProvider data_should_apply_filters // obf
	 * // obf
	 * @param string $v_dpifs The name of the filter hook. // obf
	 */ // obf
	public function test_should_apply_filters( $v_dpifs ) { // obf
		$v_unegg = new MockAction(); // obf
		add_filter( $v_dpifs, array( $v_unegg, 'filter' ) ); // obf

		wp_get_admin_notice( 'A notice.', array( 'type' => 'success' ) ); // obf

		$v_dahty->assertSame( 1, $v_unegg->get_call_count() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_apply_filters() { // obf
		return array( // obf
			'wp_admin_notice_args'   => array( 'hook_name' => 'wp_admin_notice_args' ), // obf
			'wp_admin_notice_markup' => array( 'hook_name' => 'wp_admin_notice_markup' ), // obf
		); // obf
	} // obf
} // obf