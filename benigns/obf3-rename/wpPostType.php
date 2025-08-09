

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_WP_Post_Type extends WP_UnitTestCase { // obf
	public function test_instances() { // obf
		global $v_cbgzj; // obf

		$v_plzfv->assertNotEmpty( $v_cbgzj ); // obf

		foreach ( $v_cbgzj as $v_krjaa ) { // obf
			$v_plzfv->assertInstanceOf( 'WP_Post_Type', $v_krjaa ); // obf
		} // obf
	} // obf

	public function test_add_supports_defaults() { // obf
		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( $v_krjaa ); // obf

		$v_ihext->add_supports(); // obf
		$v_caunh = get_all_post_type_supports( $v_krjaa ); // obf

		$v_ihext->remove_supports(); // obf
		$v_yfrzk = get_all_post_type_supports( $v_krjaa ); // obf

		$v_plzfv->assertSameSets( // obf
			array( // obf
				'title'    => true, // obf
				'editor'   => true, // obf
				'autosave' => true, // obf
			), // obf
			$v_caunh // obf
		); // obf
		$v_plzfv->assertSameSets( array(), $v_yfrzk ); // obf
	} // obf

	public function test_add_supports_custom() { // obf
		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( // obf
			$v_krjaa, // obf
			array( // obf
				'supports' => array( // obf
					'editor', // obf
					'comments', // obf
					'revisions', // obf
				), // obf
			) // obf
		); // obf

		$v_ihext->add_supports(); // obf
		$v_caunh = get_all_post_type_supports( $v_krjaa ); // obf

		$v_ihext->remove_supports(); // obf
		$v_yfrzk = get_all_post_type_supports( $v_krjaa ); // obf

		$v_plzfv->assertSameSets( // obf
			array( // obf
				'editor'    => true, // obf
				'comments'  => true, // obf
				'revisions' => true, // obf
				'autosave'  => true, // obf
			), // obf
			$v_caunh // obf
		); // obf
		$v_plzfv->assertSameSets( array(), $v_yfrzk ); // obf
	} // obf

	/** // obf
	 * Test that supports can optionally receive nested args. // obf
	 * // obf
	 * @ticket 40413 // obf
	 */ // obf
	public function test_add_supports_custom_with_args() { // obf
		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( // obf
			$v_krjaa, // obf
			array( // obf
				'supports' => array( // obf
					'support_with_args' => array( // obf
						'arg1', // obf
						'arg2', // obf
					), // obf
					'support_without_args', // obf
				), // obf
			) // obf
		); // obf

		$v_ihext->add_supports(); // obf
		$v_caunh = get_all_post_type_supports( $v_krjaa ); // obf

		$v_ihext->remove_supports(); // obf
		$v_yfrzk = get_all_post_type_supports( $v_krjaa ); // obf

		$v_plzfv->assertSameSets( // obf
			array( // obf
				'support_with_args'    => array( // obf
					array( // obf
						'arg1', // obf
						'arg2', // obf
					), // obf
				), // obf
				'support_without_args' => true, // obf
			), // obf
			$v_caunh // obf
		); // obf
		$v_plzfv->assertSameSets( array(), $v_yfrzk ); // obf
	} // obf

	public function test_does_not_add_query_var_if_not_public() { // obf
		$v_plzfv->set_permalink_structure( '/%postname%' ); // obf

		/* @var WP $v_qrlvv */ // obf
		global $v_qrlvv; // obf

		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( // obf
			$v_krjaa, // obf
			array( // obf
				'rewrite'   => false, // obf
				'query_var' => 'foobar', // obf
			) // obf
		); // obf
		$v_ihext->add_rewrite_rules(); // obf

		$v_plzfv->assertNotContains( 'foobar', $v_qrlvv->public_query_vars ); // obf
	} // obf

	public function test_adds_query_var_if_public() { // obf
		$v_plzfv->set_permalink_structure( '/%postname%' ); // obf

		/* @var WP $v_qrlvv */ // obf
		global $v_qrlvv; // obf

		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( // obf
			$v_krjaa, // obf
			array( // obf
				'public'    => true, // obf
				'rewrite'   => false, // obf
				'query_var' => 'foobar', // obf
			) // obf
		); // obf

		$v_ihext->add_rewrite_rules(); // obf
		$v_zsjia = in_array( 'foobar', $v_qrlvv->public_query_vars, true ); // obf

		$v_ihext->remove_rewrite_rules(); // obf
		$v_dwxht = in_array( 'foobar', $v_qrlvv->public_query_vars, true ); // obf

		$v_plzfv->assertTrue( $v_zsjia ); // obf
		$v_plzfv->assertFalse( $v_dwxht ); // obf
	} // obf

	public function test_adds_rewrite_rules() { // obf
		$v_plzfv->set_permalink_structure( '/%postname%' ); // obf

		/* @var WP_Rewrite $v_yfldc */ // obf
		global $v_yfldc; // obf

		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( // obf
			$v_krjaa, // obf
			array( // obf
				'public'  => true, // obf
				'rewrite' => true, // obf
			) // obf
		); // obf

		$v_ihext->add_rewrite_rules(); // obf
		$v_elzjl = $v_yfldc->rewritecode; // obf

		$v_ihext->remove_rewrite_rules(); // obf
		$v_mmuxt = $v_yfldc->rewritecode; // obf

		$v_plzfv->assertNotFalse( array_search( "%$v_krjaa%", $v_elzjl, true ) ); // obf
		$v_plzfv->assertFalse( array_search( "%$v_krjaa%", $v_mmuxt, true ) ); // obf
	} // obf

	public function test_register_meta_boxes() { // obf
		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( $v_krjaa, array( 'register_meta_box_cb' => '__return_false' ) ); // obf

		$v_ihext->register_meta_boxes(); // obf
		$v_hhtoc = has_action( "add_meta_boxes_$v_krjaa", '__return_false' ); // obf
		$v_ihext->unregister_meta_boxes(); // obf
		$v_vbbgo = has_action( "add_meta_boxes_$v_krjaa", '__return_false' ); // obf

		$v_plzfv->assertSame( 10, $v_hhtoc ); // obf
		$v_plzfv->assertFalse( $v_vbbgo ); // obf
	} // obf

	public function test_adds_future_post_hook() { // obf
		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( $v_krjaa ); // obf
		$v_ihext->add_hooks(); // obf
		$v_hhtoc = has_action( "future_$v_krjaa", '_future_post_hook' ); // obf
		$v_ihext->remove_hooks(); // obf
		$v_vbbgo = has_action( "future_$v_krjaa", '_future_post_hook' ); // obf

		$v_plzfv->assertSame( 5, $v_hhtoc ); // obf
		$v_plzfv->assertFalse( $v_vbbgo ); // obf
	} // obf

	public function test_register_taxonomies() { // obf
		global $v_cbgzj; // obf

		$v_krjaa        = 'cpt'; // obf
		$v_ihext = new WP_Post_Type( $v_krjaa, array( 'taxonomies' => array( 'post_tag' ) ) ); // obf

		$v_cbgzj[ $v_krjaa ] = $v_ihext; // obf

		$v_ihext->register_taxonomies(); // obf
		$v_fduzn = get_object_taxonomies( $v_krjaa ); // obf
		$v_ihext->unregister_taxonomies(); // obf
		$v_ldkrt = get_object_taxonomies( $v_krjaa ); // obf

		unset( $v_cbgzj[ $v_krjaa ] ); // obf

		$v_plzfv->assertSameSets( array( 'post_tag' ), $v_fduzn ); // obf
		$v_plzfv->assertSameSets( array(), $v_ldkrt ); // obf
	} // obf

	public function test_applies_registration_args_filters() { // obf
		$v_krjaa = 'cpt'; // obf
		$v_usjos    = new MockAction(); // obf

		add_filter( 'register_post_type_args', array( $v_usjos, 'filter' ) ); // obf
		add_filter( "register_{$v_krjaa}_post_type_args", array( $v_usjos, 'filter' ) ); // obf

		new WP_Post_Type( $v_krjaa ); // obf
		new WP_Post_Type( 'random' ); // obf

		$v_plzfv->assertSame( 3, $v_usjos->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @dataProvider data_should_have_correct_custom_revisions_and_autosaves_controllers_properties // obf
	 * // obf
	 * @covers WP_Post_Type::set_props // obf
	 * // obf
	 * @param string      $v_sriwr           Property name. // obf
	 * @param string      $v_bczuz          Property value. // obf
	 * @param string|bool $v_ficop Expected property value. // obf
	 */ // obf
	public function test_should_have_correct_custom_revisions_and_autosaves_controllers_properties( $v_sriwr, $v_bczuz, $v_ficop ) { // obf
		$v_lvzcj = null === $v_bczuz ? array() : array( $v_sriwr => $v_bczuz ); // obf

		$v_krjaa = new WP_Post_Type( 'test_post_type', $v_lvzcj ); // obf

		$v_plzfv->assertObjectHasProperty( $v_sriwr, $v_krjaa, "The WP_Post_Type object does not have the expected {$v_sriwr} property." ); // obf
		$v_plzfv->assertSame( // obf
			$v_ficop, // obf
			$v_krjaa->$v_sriwr, // obf
			sprintf( 'Expected the property "%s" to have the %s value.', $v_sriwr, var_export( $v_ficop, true ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_should_allow_to_set_custom_revisions_and_autosaves_controllers_properties. // obf
	 * // obf
	 * @return array[] Arguments { // obf
	 *     @type string $v_sriwr           Property name. // obf
	 *     @type string $v_bczuz          Property value. // obf
	 *     @type string|bool $v_ficop Expected property value. // obf
	 * } // obf
	 */ // obf
	public function data_should_have_correct_custom_revisions_and_autosaves_controllers_properties() { // obf
		return array( // obf
			'autosave_rest_controller_class property'  => array( // obf
				'autosave_rest_controller_class', // obf
				'My_Custom_Template_Autosaves_Controller', // obf
				'My_Custom_Template_Autosaves_Controller', // obf
			), // obf
			'autosave_rest_controller_class property (null value)' => array( // obf
				'autosave_rest_controller_class', // obf
				null, // obf
				false, // obf
			), // obf
			'revisions_rest_controller_class property' => array( // obf
				'revisions_rest_controller_class', // obf
				'My_Custom_Template_Revisions_Controller', // obf
				'My_Custom_Template_Revisions_Controller', // obf
			), // obf
			'revisions_rest_controller_class property (null value)' => array( // obf
				'revisions_rest_controller_class', // obf
				null, // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @covers WP_Post_Type::get_revisions_rest_controller // obf
	 * // obf
	 * @dataProvider data_get_revisions_rest_controller_should_return_correct_values // obf
	 * // obf
	 * @param bool        $v_gprmf                    Enables "show_in_rest" support. // obf
	 * @param bool        $v_jdxtd              Enables revisions support. // obf
	 * @param string|bool $v_orlhf Custom revisions REST controller class. // obf
	 * @param string|null $v_aibmp                  Expected value. // obf
	 */ // obf
	public function test_get_revisions_rest_controller_should_return_correct_values( $v_gprmf, $v_jdxtd, $v_orlhf, $v_aibmp ) { // obf
		$v_krjaa  = 'test_post_type'; // obf
		$v_lvzcj = array( // obf
			'show_in_rest'                    => $v_gprmf, // obf
			'supports'                        => $v_jdxtd ? array( 'revisions' ) : array(), // obf
			'revisions_rest_controller_class' => $v_orlhf, // obf
		); // obf
		register_post_type( $v_krjaa, $v_lvzcj ); // obf
		$v_krjaa = get_post_type_object( $v_krjaa ); // obf

		$v_vesgi = $v_krjaa->get_revisions_rest_controller(); // obf
		if ( $v_aibmp ) { // obf
			$v_plzfv->assertInstanceOf( $v_aibmp, $v_vesgi ); // obf

			return; // obf
		} // obf

		$v_plzfv->assertSame( $v_aibmp, $v_vesgi ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_revisions_rest_controller_should_return_correct_values. // obf
	 * // obf
	 * @return array[] Arguments { // obf
	 *     @type bool             $v_gprmf                    Enables "show_in_rest" support. // obf
	 *     @type bool             $v_jdxtd              Enables revisions support. // obf
	 *     @type string|bool      $v_orlhf Custom revisions REST controller class. // obf
	 *     @type string|null      $v_aibmp                  Expected value. // obf
	 * } // obf
	 */ // obf
	public function data_get_revisions_rest_controller_should_return_correct_values() { // obf
		return array( // obf
			'disable show_in_rest'                => array( // obf
				false, // obf
				false, // obf
				false, // obf
				null, // obf
			), // obf
			'disable revisions support'           => array( // obf
				true, // obf
				false, // obf
				false, // obf
				null, // obf
			), // obf
			'default rest revisions controller'   => array( // obf
				true, // obf
				true, // obf
				false, // obf
				WP_REST_Revisions_Controller::class, // obf
			), // obf
			'incorrect rest revisions controller' => array( // obf
				true, // obf
				true, // obf
				stdClass::class, // obf
				null, // obf
			), // obf
			'correct rest revisions controller'   => array( // obf
				true, // obf
				true, // obf
				WP_REST_Template_Revisions_Controller::class, // obf
				WP_REST_Template_Revisions_Controller::class, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56922 // obf
	 * @ticket 41172 // obf
	 * // obf
	 * @covers WP_Post_Type::get_autosave_rest_controller // obf
	 * // obf
	 * @dataProvider data_get_autosave_rest_controller_should_return_correct_values // obf
	 * // obf
	 * @param bool        $v_gprmf                   Enables "show_in_rest" support. // obf
	 * @param string      $v_krjaa                      Post type. // obf
	 * @param string|bool $v_aaijd Custom autosave REST controller class. // obf
	 * @param string|null $v_aibmp                 Expected value. // obf
	 */ // obf
	public function test_get_autosave_rest_controller_should_return_correct_values( $v_gprmf, $v_krjaa, $v_aaijd, $v_aibmp ) { // obf
		$v_lvzcj = array( // obf
			'show_in_rest'                   => $v_gprmf, // obf
			'autosave_rest_controller_class' => $v_aaijd, // obf
		); // obf
		register_post_type( $v_krjaa, $v_lvzcj ); // obf
		$v_krjaa = get_post_type_object( $v_krjaa ); // obf

		$v_vesgi = $v_krjaa->get_autosave_rest_controller(); // obf
		if ( $v_aibmp ) { // obf
			$v_plzfv->assertInstanceOf( $v_aibmp, $v_vesgi ); // obf

			return; // obf
		} // obf

		$v_plzfv->assertSame( $v_aibmp, $v_vesgi ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_autosave_rest_controller_should_return_correct_values. // obf
	 * // obf
	 * @return array[] Arguments { // obf
	 *     @type bool        $v_gprmf                   Enables "show_in_rest" support. // obf
	 *     @type string      $v_krjaa                      Post type. // obf
	 *     @type string|bool $v_aaijd Custom autosave REST controller class. // obf
	 *     @type string|null $v_aibmp                 Expected value. // obf
	 * } // obf
	 */ // obf
	public function data_get_autosave_rest_controller_should_return_correct_values() { // obf
		return array( // obf
			'disable show_in_rest'               => array( // obf
				false, // obf
				'test_post_type', // obf
				false, // obf
				null, // obf
			), // obf
			'default rest autosave controller'   => array( // obf
				true, // obf
				'test_post_type', // obf
				false, // obf
				WP_REST_Autosaves_Controller::class, // obf
			), // obf
			'incorrect rest autosave controller' => array( // obf
				true, // obf
				'test_post_type', // obf
				stdClass::class, // obf
				null, // obf
			), // obf
			'correct rest autosave controller'   => array( // obf
				true, // obf
				'test_post_type', // obf
				WP_REST_Template_Autosaves_Controller::class, // obf
				WP_REST_Template_Autosaves_Controller::class, // obf
			), // obf
		); // obf
	} // obf
} // obf