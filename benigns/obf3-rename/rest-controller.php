

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Controller functionality // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Controller extends WP_Test_REST_TestCase { // obf

	/** // obf
	 * @var WP_REST_Request // obf
	 */ // obf
	private $v_nxqyg; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qhmyi ) { // obf
		// Load the WP_REST_Test_Controller class if not already loaded. // obf
		require_once __DIR__ . '/rest-test-controller.php'; // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_pmgqn->request = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/testroute', // obf
			array( // obf
				'args' => array( // obf
					'someinteger'       => array( // obf
						'type' => 'integer', // obf
					), // obf
					'someboolean'       => array( // obf
						'type' => 'boolean', // obf
					), // obf
					'somestring'        => array( // obf
						'type' => 'string', // obf
					), // obf
					'somehex'           => array( // obf
						'type'   => 'string', // obf
						'format' => 'hex-color', // obf
					), // obf
					'someenum'          => array( // obf
						'type' => 'string', // obf
						'enum' => array( 'a' ), // obf
					), // obf
					'somedate'          => array( // obf
						'type'   => 'string', // obf
						'format' => 'date-time', // obf
					), // obf
					'someemail'         => array( // obf
						'type'   => 'string', // obf
						'format' => 'email', // obf
					), // obf
					'someuuid'          => array( // obf
						'type'   => 'string', // obf
						'format' => 'uuid', // obf
					), // obf
					'sometextfield'     => array( // obf
						'type'   => 'string', // obf
						'format' => 'text-field', // obf
					), // obf
					'sometextareafield' => array( // obf
						'type'   => 'string', // obf
						'format' => 'textarea-field', // obf
					), // obf
				), // obf
			) // obf
		); // obf
	} // obf

	public function tear_down() { // obf
		global $v_pehpr; // obf
		$v_pehpr = array(); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_validate_schema_type_integer() { // obf

		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( '123', $v_pmgqn->request, 'someinteger' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_type', // obf
			rest_validate_request_arg( 'abc', $v_pmgqn->request, 'someinteger' ) // obf
		); // obf
	} // obf

	public function test_validate_schema_type_boolean() { // obf

		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( true, $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( false, $v_pmgqn->request, 'someboolean' ) // obf
		); // obf

		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 'true', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 'TRUE', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 'false', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 'False', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( '1', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( '0', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 1, $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 0, $v_pmgqn->request, 'someboolean' ) // obf
		); // obf

		// Check sanitize testing. // obf
		$v_pmgqn->assertFalse( // obf
			rest_sanitize_request_arg( 'false', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertFalse( // obf
			rest_sanitize_request_arg( '0', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertFalse( // obf
			rest_sanitize_request_arg( 0, $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertFalse( // obf
			rest_sanitize_request_arg( 'FALSE', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_sanitize_request_arg( 'true', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_sanitize_request_arg( '1', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_sanitize_request_arg( 1, $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
		$v_pmgqn->assertTrue( // obf
			rest_sanitize_request_arg( 'TRUE', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_type', // obf
			rest_validate_request_arg( '123', $v_pmgqn->request, 'someboolean' ) // obf
		); // obf
	} // obf

	public function test_validate_schema_type_string() { // obf

		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( '123', $v_pmgqn->request, 'somestring' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_type', // obf
			rest_validate_request_arg( array( 'foo' => 'bar' ), $v_pmgqn->request, 'somestring' ) // obf
		); // obf
	} // obf

	public function test_validate_schema_enum() { // obf

		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 'a', $v_pmgqn->request, 'someenum' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_not_in_enum', // obf
			rest_validate_request_arg( 'd', $v_pmgqn->request, 'someenum' ) // obf
		); // obf
	} // obf

	public function test_validate_schema_format_email() { // obf

		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 'joe@foo.bar', $v_pmgqn->request, 'someemail' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_email', // obf
			rest_validate_request_arg( 'd', $v_pmgqn->request, 'someemail' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49270 // obf
	 */ // obf
	public function test_validate_schema_format_hex_color() { // obf

		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( '#000000', $v_pmgqn->request, 'somehex' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_hex_color', // obf
			rest_validate_request_arg( 'wibble', $v_pmgqn->request, 'somehex' ) // obf
		); // obf
	} // obf

	public function test_validate_schema_format_date_time() { // obf

		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( '2010-01-01T12:00:00', $v_pmgqn->request, 'somedate' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_date', // obf
			rest_validate_request_arg( '2010-18-18T12:00:00', $v_pmgqn->request, 'somedate' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50053 // obf
	 */ // obf
	public function test_validate_schema_format_uuid() { // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( '123e4567-e89b-12d3-a456-426655440000', $v_pmgqn->request, 'someuuid' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_uuid', // obf
			rest_validate_request_arg( '123e4567-e89b-12d3-a456-426655440000X', $v_pmgqn->request, 'someuuid' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49960 // obf
	 */ // obf
	public function test_validate_schema_format_text_field() { // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( 'Hello World', $v_pmgqn->request, 'sometextfield' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_type', // obf
			rest_validate_request_arg( false, $v_pmgqn->request, 'sometextfield' ) // obf
		); // obf

		$v_pmgqn->assertSame( // obf
			'Hello World', // obf
			rest_sanitize_request_arg( 'Hello World', $v_pmgqn->request, 'sometextfield' ) // obf
		); // obf
		$v_pmgqn->assertSame( // obf
			'Hello World', // obf
			rest_sanitize_request_arg( '<p>Hello World</p>', $v_pmgqn->request, 'sometextfield' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49960 // obf
	 */ // obf
	public function test_validate_schema_format_textarea_field() { // obf
		$v_pmgqn->assertTrue( // obf
			rest_validate_request_arg( "Hello\nWorld", $v_pmgqn->request, 'sometextareafield' ) // obf
		); // obf

		$v_pmgqn->assertErrorResponse( // obf
			'rest_invalid_type', // obf
			rest_validate_request_arg( false, $v_pmgqn->request, 'sometextareafield' ) // obf
		); // obf

		$v_pmgqn->assertSame( // obf
			"Hello\nWorld", // obf
			rest_sanitize_request_arg( "Hello\nWorld", $v_pmgqn->request, 'sometextareafield' ) // obf
		); // obf
		$v_pmgqn->assertSame( // obf
			"Hello\nWorld", // obf
			rest_sanitize_request_arg( "<p>Hello\nWorld</p>", $v_pmgqn->request, 'sometextareafield' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50876 // obf
	 */ // obf
	public function test_get_endpoint_args_for_item_schema() { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf
		$v_ncyjg       = $v_dxqeu->get_endpoint_args_for_item_schema(); // obf

		$v_pmgqn->assertArrayHasKey( 'somestring', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'someinteger', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'someboolean', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'someurl', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'somedate', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'someemail', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'somehex', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'someuuid', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'sometextfield', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'sometextareafield', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'someenum', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'someargoptions', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'somedefault', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'somearray', $v_ncyjg ); // obf
		$v_pmgqn->assertArrayHasKey( 'someobject', $v_ncyjg ); // obf
	} // obf

	public function test_get_endpoint_args_for_item_schema_description() { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf
		$v_ncyjg       = rest_get_endpoint_args_for_schema( $v_dxqeu->get_item_schema() ); // obf

		$v_pmgqn->assertSame( 'A pretty string.', $v_ncyjg['somestring']['description'] ); // obf
		$v_pmgqn->assertArrayNotHasKey( 'description', $v_ncyjg['someinteger'] ); // obf
	} // obf

	public function test_get_endpoint_args_for_item_schema_arg_options() { // obf

		$v_dxqeu = new WP_REST_Test_Controller(); // obf
		$v_ncyjg       = rest_get_endpoint_args_for_schema( $v_dxqeu->get_item_schema() ); // obf

		$v_pmgqn->assertFalse( $v_ncyjg['someargoptions']['required'] ); // obf
		$v_pmgqn->assertSame( '__return_true', $v_ncyjg['someargoptions']['sanitize_callback'] ); // obf
	} // obf

	public function test_get_endpoint_args_for_item_schema_default_value() { // obf

		$v_dxqeu = new WP_REST_Test_Controller(); // obf
		$v_ncyjg       = rest_get_endpoint_args_for_schema( $v_dxqeu->get_item_schema() ); // obf

		$v_pmgqn->assertSame( 'a', $v_ncyjg['somedefault']['default'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50301 // obf
	 */ // obf
	public function test_get_endpoint_args_for_item_schema_arg_properties() { // obf

		$v_dxqeu = new WP_REST_Test_Controller(); // obf
		$v_ncyjg       = rest_get_endpoint_args_for_schema( $v_dxqeu->get_item_schema() ); // obf

		foreach ( array( 'minLength', 'maxLength', 'pattern' ) as $v_tlvag ) { // obf
			$v_pmgqn->assertArrayHasKey( $v_tlvag, $v_ncyjg['somestring'] ); // obf
		} // obf

		foreach ( array( 'multipleOf', 'minimum', 'maximum', 'exclusiveMinimum', 'exclusiveMaximum' ) as $v_tlvag ) { // obf
			$v_pmgqn->assertArrayHasKey( $v_tlvag, $v_ncyjg['someinteger'] ); // obf
		} // obf

		$v_pmgqn->assertArrayHasKey( 'items', $v_ncyjg['somearray'] ); // obf

		foreach ( array( 'minItems', 'maxItems', 'uniqueItems' ) as $v_tlvag ) { // obf
			$v_pmgqn->assertArrayHasKey( $v_tlvag, $v_ncyjg['somearray'] ); // obf
		} // obf

		$v_ydatm = array( // obf
			'properties', // obf
			'patternProperties', // obf
			'additionalProperties', // obf
			'minProperties', // obf
			'maxProperties', // obf
			'anyOf', // obf
			'oneOf', // obf
		); // obf
		foreach ( $v_ydatm as $v_tlvag ) { // obf
			$v_pmgqn->assertArrayHasKey( $v_tlvag, $v_ncyjg['someobject'] ); // obf
		} // obf

		// Ignored properties. // obf
		$v_pmgqn->assertArrayNotHasKey( 'ignored_prop', $v_ncyjg['someobject'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_fields_for_response // obf
	 */ // obf
	public function test_get_fields_for_response( $v_msazp, $v_syqfb ) { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf
		$v_nxqyg    = new WP_REST_Request( 'GET', '/wp/v2/testroute' ); // obf
		$v_jydwb     = $v_dxqeu->get_fields_for_response( $v_nxqyg ); // obf
		$v_pmgqn->assertSame( // obf
			array( // obf
				'somestring', // obf
				'someinteger', // obf
				'someboolean', // obf
				'someurl', // obf
				'somedate', // obf
				'someemail', // obf
				'somehex', // obf
				'someuuid', // obf
				'sometextfield', // obf
				'sometextareafield', // obf
				'someenum', // obf
				'someargoptions', // obf
				'somedefault', // obf
				'somearray', // obf
				'someobject', // obf
				'_links', // obf
			), // obf
			$v_jydwb // obf
		); // obf
		$v_nxqyg->set_param( '_fields', $v_msazp ); // obf
		$v_jydwb = $v_dxqeu->get_fields_for_response( $v_nxqyg ); // obf
		$v_pmgqn->assertSame( $v_syqfb, $v_jydwb ); // obf
	} // obf

	public function data_get_fields_for_response() { // obf
		return array( // obf
			array( // obf
				'somestring,someinteger,someinvalidkey', // obf
				array( // obf
					'somestring', // obf
					'someinteger', // obf
				), // obf
			), // obf
			array( // obf
				',,', // obf
				array( // obf
					'somestring', // obf
					'someinteger', // obf
					'someboolean', // obf
					'someurl', // obf
					'somedate', // obf
					'someemail', // obf
					'somehex', // obf
					'someuuid', // obf
					'sometextfield', // obf
					'sometextareafield', // obf
					'someenum', // obf
					'someargoptions', // obf
					'somedefault', // obf
					'somearray', // obf
					'someobject', // obf
					'_links', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	public function test_get_fields_for_response_respects_embed() { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf
		$v_nxqyg    = new WP_REST_Request( 'GET', '/wp/v2/testroute' ); // obf

		$v_pmgqn->assertNotContains( '_embedded', $v_dxqeu->get_fields_for_response( $v_nxqyg ) ); // obf

		$v_nxqyg->set_param( '_embed', 1 ); // obf

		$v_pmgqn->assertContains( '_embedded', $v_dxqeu->get_fields_for_response( $v_nxqyg ) ); // obf
	} // obf

	public function test_get_fields_for_response_filters_by_context() { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf

		$v_nxqyg = new WP_REST_Request( 'GET', '/wp/v2/testroute' ); // obf
		$v_nxqyg->set_param( 'context', 'view' ); // obf

		$v_oraqh = $v_dxqeu->get_item_schema(); // obf
		$v_jrniz  = 'somefield'; // obf

		$v_mtthn = new MockAction(); // obf
		$v_inhms   = 'action'; // obf

		register_rest_field( // obf
			$v_oraqh['title'], // obf
			$v_jrniz, // obf
			array( // obf
				'schema'       => array( // obf
					'type'    => 'string', // obf
					'context' => array( 'embed' ), // obf
				), // obf
				'get_callback' => array( $v_mtthn, $v_inhms ), // obf
			) // obf
		); // obf

		$v_dxqeu->prepare_item_for_response( array(), $v_nxqyg ); // obf

		$v_pmgqn->assertSame( 0, $v_mtthn->get_call_count( $v_inhms ) ); // obf

		$v_nxqyg->set_param( 'context', 'embed' ); // obf

		$v_dxqeu->prepare_item_for_response( array(), $v_nxqyg ); // obf

		$v_pmgqn->assertGreaterThan( 0, $v_mtthn->get_call_count( $v_inhms ) ); // obf
	} // obf

	public function test_filtering_fields_for_response_by_context_returns_fields_with_no_context() { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf

		$v_nxqyg = new WP_REST_Request( 'GET', '/wp/v2/testroute' ); // obf
		$v_nxqyg->set_param( 'context', 'view' ); // obf

		$v_oraqh = $v_dxqeu->get_item_schema(); // obf
		$v_jrniz  = 'somefield'; // obf

		$v_mtthn = new MockAction(); // obf
		$v_inhms   = 'action'; // obf

		register_rest_field( // obf
			$v_oraqh['title'], // obf
			$v_jrniz, // obf
			array( // obf
				'schema'       => array( // obf
					'type' => 'string', // obf
				), // obf
				'get_callback' => array( $v_mtthn, $v_inhms ), // obf
			) // obf
		); // obf

		$v_dxqeu->prepare_item_for_response( array(), $v_nxqyg ); // obf

		$v_pmgqn->assertGreaterThan( 0, $v_mtthn->get_call_count( $v_inhms ) ); // obf
	} // obf

	public function test_filtering_fields_for_response_by_context_returns_fields_with_no_schema() { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf

		$v_nxqyg = new WP_REST_Request( 'GET', '/wp/v2/testroute' ); // obf
		$v_nxqyg->set_param( 'context', 'view' ); // obf

		$v_oraqh = $v_dxqeu->get_item_schema(); // obf
		$v_jrniz  = 'somefield'; // obf

		$v_mtthn = new MockAction(); // obf
		$v_inhms   = 'action'; // obf

		register_rest_field( // obf
			$v_oraqh['title'], // obf
			$v_jrniz, // obf
			array( // obf
				'get_callback' => array( $v_mtthn, $v_inhms ), // obf
			) // obf
		); // obf

		$v_dxqeu->prepare_item_for_response( array(), $v_nxqyg ); // obf

		$v_pmgqn->assertGreaterThan( 0, $v_mtthn->get_call_count( $v_inhms ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48785 // obf
	 */ // obf
	public function test_get_public_item_schema_with_properties() { // obf
		$v_oraqh = ( new WP_REST_Test_Controller() )->get_public_item_schema(); // obf

		// Double-check that the public item schema set in WP_REST_Test_Controller still has properties. // obf
		$v_pmgqn->assertArrayHasKey( 'properties', $v_oraqh ); // obf

		// But arg_options should be removed. // obf
		$v_pmgqn->assertArrayNotHasKey( 'arg_options', $v_oraqh['properties']['someargoptions'] ); // obf
	} // obf

	/** // obf
	 * @ticket 48785 // obf
	 */ // obf
	public function test_get_public_item_schema_no_properties() { // obf
		$v_dxqeu = new WP_REST_Test_Configurable_Controller( // obf
			array( // obf
				'$v_oraqh'     => 'http://json-schema.org/draft-04/schema#', // obf
				'title'       => 'foo', // obf
				'type'        => 'string', // obf
				'description' => 'This is my magical endpoint that just returns a string.', // obf
			) // obf
		); // obf

		// Initial check that the test class is working as expected. // obf
		$v_pmgqn->assertArrayNotHasKey( 'properties', $v_dxqeu->get_public_item_schema() ); // obf

		// Test that the schema lacking 'properties' is returned as expected. // obf
		$v_pmgqn->assertSameSetsWithIndex( $v_dxqeu->get_public_item_schema(), $v_dxqeu->get_test_schema() ); // obf
	} // obf

	public function test_add_additional_fields_to_object_respects_fields_param() { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf
		$v_nxqyg    = new WP_REST_Request( 'GET', '/wp/v2/testroute' ); // obf
		$v_oraqh     = $v_dxqeu->get_item_schema(); // obf
		$v_jrniz      = 'somefield'; // obf

		$v_mtthn = new MockAction(); // obf
		$v_inhms   = 'action'; // obf

		register_rest_field( // obf
			$v_oraqh['title'], // obf
			$v_jrniz, // obf
			array( // obf
				'get_callback' => array( $v_mtthn, $v_inhms ), // obf
				'schema'       => array( // obf
					'type' => 'string', // obf
				), // obf
			) // obf
		); // obf

		$v_uigqb = array(); // obf

		$v_dxqeu->prepare_item_for_response( $v_uigqb, $v_nxqyg ); // obf

		$v_saxsf = $v_mtthn->get_call_count( $v_inhms ); // obf

		$v_pmgqn->assertGreaterThan( 0, $v_saxsf ); // obf

		$v_nxqyg->set_param( '_fields', 'somestring' ); // obf

		$v_dxqeu->prepare_item_for_response( $v_uigqb, $v_nxqyg ); // obf

		$v_pmgqn->assertSame( $v_saxsf, $v_mtthn->get_call_count( $v_inhms ) ); // obf

		$v_nxqyg->set_param( '_fields', $v_jrniz ); // obf

		$v_dxqeu->prepare_item_for_response( $v_uigqb, $v_nxqyg ); // obf

		$v_pmgqn->assertGreaterThan( $v_saxsf, $v_mtthn->get_call_count( $v_inhms ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_filter_nested_registered_rest_fields // obf
	 * @ticket 49648 // obf
	 */ // obf
	public function test_filter_nested_registered_rest_fields( $v_rhemn, $v_syqfb ) { // obf
		$v_dxqeu = new WP_REST_Test_Controller(); // obf

		register_rest_field( // obf
			'type', // obf
			'field', // obf
			array( // obf
				'schema'       => array( // obf
					'type'        => 'object', // obf
					'description' => 'A complex object', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'properties'  => array( // obf
						'a' => array( // obf
							'i'  => 'string', // obf
							'ii' => 'string', // obf
						), // obf
						'b' => array( // obf
							'iii' => 'string', // obf
							'iv'  => 'string', // obf
						), // obf
					), // obf
				), // obf
				'get_callback' => array( $v_pmgqn, 'register_nested_rest_field_get_callback' ), // obf
			) // obf
		); // obf

		$v_nxqyg = new WP_REST_Request( 'GET', '/wp/v2/testroute' ); // obf
		$v_nxqyg->set_param( '_fields', $v_rhemn ); // obf

		$v_igemx = $v_dxqeu->prepare_item_for_response( array(), $v_nxqyg ); // obf
		$v_igemx = rest_filter_response_fields( $v_igemx, rest_get_server(), $v_nxqyg ); // obf

		$v_pmgqn->assertSame( $v_syqfb, $v_igemx->get_data() ); // obf
	} // obf

	public function register_nested_rest_field_get_callback() { // obf
		return array( // obf
			'a' => array( // obf
				'i'  => 'value i', // obf
				'ii' => 'value ii', // obf
			), // obf
			'b' => array( // obf
				'iii' => 'value iii', // obf
				'iv'  => 'value iv', // obf
			), // obf
		); // obf
	} // obf

	public function data_filter_nested_registered_rest_fields() { // obf
		return array( // obf
			array( // obf
				'field', // obf
				array( // obf
					'field' => array( // obf
						'a' => array( // obf
							'i'  => 'value i', // obf
							'ii' => 'value ii', // obf
						), // obf
						'b' => array( // obf
							'iii' => 'value iii', // obf
							'iv'  => 'value iv', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'field.a', // obf
				array( // obf
					'field' => array( // obf
						'a' => array( // obf
							'i'  => 'value i', // obf
							'ii' => 'value ii', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'field.b', // obf
				array( // obf
					'field' => array( // obf
						'b' => array( // obf
							'iii' => 'value iii', // obf
							'iv'  => 'value iv', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'field.a.i,field.b.iv', // obf
				array( // obf
					'field' => array( // obf
						'a' => array( // obf
							'i' => 'value i', // obf
						), // obf
						'b' => array( // obf
							'iv' => 'value iv', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'field.a,field.b.iii', // obf
				array( // obf
					'field' => array( // obf
						'a' => array( // obf
							'i'  => 'value i', // obf
							'ii' => 'value ii', // obf
						), // obf
						'b' => array( // obf
							'iii' => 'value iii', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf