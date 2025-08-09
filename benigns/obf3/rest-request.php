

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Request functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_Request extends WP_UnitTestCase { // obf
	public $v_pxbxt; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_hfpqy->request = new WP_REST_Request(); // obf
	} // obf

	/** // obf
	 * Called before setting up all tests. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		// Require files that need to load once. // obf
		require_once DIR_TESTROOT . '/includes/mock-invokable.php'; // obf
	} // obf

	public function test_header() { // obf
		$v_nmjbr = 'application/x-wp-example'; // obf

		$v_hfpqy->request->set_header( 'Content-Type', $v_nmjbr ); // obf

		$v_hfpqy->assertSame( $v_nmjbr, $v_hfpqy->request->get_header( 'Content-Type' ) ); // obf
	} // obf

	public function test_header_missing() { // obf
		$v_hfpqy->assertNull( $v_hfpqy->request->get_header( 'missing' ) ); // obf
		$v_hfpqy->assertNull( $v_hfpqy->request->get_header_as_array( 'missing' ) ); // obf
	} // obf

	public function test_remove_header() { // obf
		$v_hfpqy->request->add_header( 'Test-Header', 'value' ); // obf
		$v_hfpqy->assertSame( 'value', $v_hfpqy->request->get_header( 'Test-Header' ) ); // obf

		$v_hfpqy->request->remove_header( 'Test-Header' ); // obf
		$v_hfpqy->assertNull( $v_hfpqy->request->get_header( 'Test-Header' ) ); // obf
	} // obf

	public function test_header_multiple() { // obf
		$v_okgrd = 'application/x-wp-example-1'; // obf
		$v_yjukk = 'application/x-wp-example-2'; // obf
		$v_hfpqy->request->add_header( 'Accept', $v_okgrd ); // obf
		$v_hfpqy->request->add_header( 'Accept', $v_yjukk ); // obf

		$v_hfpqy->assertSame( $v_okgrd . ',' . $v_yjukk, $v_hfpqy->request->get_header( 'Accept' ) ); // obf
		$v_hfpqy->assertSame( array( $v_okgrd, $v_yjukk ), $v_hfpqy->request->get_header_as_array( 'Accept' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_header_canonicalization // obf
	 * @param string $v_paeks Original header key. // obf
	 * @param string $v_nigvp Expected canonicalized version. // obf
	 */ // obf
	public function test_header_canonicalization( $v_paeks, $v_nigvp ) { // obf
		$v_hfpqy->assertSame( $v_nigvp, $v_hfpqy->request->canonicalize_header_name( $v_paeks ) ); // obf
	} // obf

	public static function data_header_canonicalization() { // obf
		return array( // obf
			array( 'Test', 'test' ), // obf
			array( 'TEST', 'test' ), // obf
			array( 'Test-Header', 'test_header' ), // obf
			array( 'test-header', 'test_header' ), // obf
			array( 'Test_Header', 'test_header' ), // obf
			array( 'test_header', 'test_header' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_content_type_parsing // obf
	 * // obf
	 * @param string $v_apvcs     Header value. // obf
	 * @param string $v_nmjbr      Full type value. // obf
	 * @param string $v_sgwbb       Main type (application, text, etc). // obf
	 * @param string $v_byqpr    Subtype (json, etc). // obf
	 * @param string $v_tddzi Parameters (charset=utf-8, etc). // obf
	 */ // obf
	public function test_content_type_parsing( $v_apvcs, $v_nmjbr, $v_sgwbb, $v_byqpr, $v_tddzi ) { // obf
		// Check we start with nothing. // obf
		$v_hfpqy->assertEmpty( $v_hfpqy->request->get_content_type() ); // obf

		$v_hfpqy->request->set_header( 'Content-Type', $v_apvcs ); // obf
		$v_hftnn = $v_hfpqy->request->get_content_type(); // obf

		$v_hfpqy->assertSame( $v_nmjbr, $v_hftnn['value'] ); // obf
		$v_hfpqy->assertSame( $v_sgwbb, $v_hftnn['type'] ); // obf
		$v_hfpqy->assertSame( $v_byqpr, $v_hftnn['subtype'] ); // obf
		$v_hfpqy->assertSame( $v_tddzi, $v_hftnn['parameters'] ); // obf
	} // obf

	public static function data_content_type_parsing() { // obf
		return array( // obf
			// Check basic parsing. // obf
			array( 'application/x-wp-example', 'application/x-wp-example', 'application', 'x-wp-example', '' ), // obf
			array( 'application/x-wp-example; charset=utf-8', 'application/x-wp-example', 'application', 'x-wp-example', 'charset=utf-8' ), // obf

			// Check case insensitivity. // obf
			array( 'APPLICATION/x-WP-Example', 'application/x-wp-example', 'application', 'x-wp-example', '' ), // obf
		); // obf
	} // obf

	protected function request_with_parameters() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'source'         => 'url', // obf
				'has_url_params' => true, // obf
			) // obf
		); // obf
		$v_hfpqy->request->set_query_params( // obf
			array( // obf
				'source'           => 'query', // obf
				'has_query_params' => true, // obf
			) // obf
		); // obf
		$v_hfpqy->request->set_body_params( // obf
			array( // obf
				'source'          => 'body', // obf
				'has_body_params' => true, // obf
			) // obf
		); // obf

		$v_wbebd = wp_json_encode( // obf
			array( // obf
				'source'          => 'json', // obf
				'has_json_params' => true, // obf
			) // obf
		); // obf
		$v_hfpqy->request->set_body( $v_wbebd ); // obf

		$v_hfpqy->request->set_default_params( // obf
			array( // obf
				'source'             => 'defaults', // obf
				'has_default_params' => true, // obf
			) // obf
		); // obf
	} // obf

	public function test_parameter_order() { // obf
		$v_hfpqy->request_with_parameters(); // obf

		$v_hfpqy->request->set_method( 'GET' ); // obf

		// Check that query takes precedence. // obf
		$v_hfpqy->assertSame( 'query', $v_hfpqy->request->get_param( 'source' ) ); // obf

		// Check that the correct arguments are parsed (and that falling through // obf
		// the stack works). // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_url_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_query_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_default_params' ) ); // obf

		// POST and JSON parameters shouldn't be parsed. // obf
		$v_hfpqy->assertEmpty( $v_hfpqy->request->get_param( 'has_body_params' ) ); // obf
		$v_hfpqy->assertEmpty( $v_hfpqy->request->get_param( 'has_json_params' ) ); // obf
	} // obf

	public function test_parameter_order_post() { // obf
		$v_hfpqy->request_with_parameters(); // obf

		$v_hfpqy->request->set_method( 'POST' ); // obf
		$v_hfpqy->request->set_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_hfpqy->request->set_attributes( array( 'accept_json' => true ) ); // obf

		// Check that POST takes precedence. // obf
		$v_hfpqy->assertSame( 'body', $v_hfpqy->request->get_param( 'source' ) ); // obf

		// Check that the correct arguments are parsed (and that falling through // obf
		// the stack works). // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_url_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_query_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_body_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_default_params' ) ); // obf

		// JSON shouldn't be parsed. // obf
		$v_hfpqy->assertEmpty( $v_hfpqy->request->get_param( 'has_json_params' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49404 // obf
	 * @dataProvider data_alternate_json_content_type // obf
	 * // obf
	 * @param string $v_kpkvb The Content-Type header. // obf
	 * @param string $v_ufbix       The source value. // obf
	 * @param bool   $v_mnuot  The accept_json value. // obf
	 */ // obf
	public function test_alternate_json_content_type( $v_kpkvb, $v_ufbix, $v_mnuot ) { // obf
		$v_hfpqy->request_with_parameters(); // obf

		$v_hfpqy->request->set_method( 'POST' ); // obf
		$v_hfpqy->request->set_header( 'Content-Type', $v_kpkvb ); // obf
		$v_hfpqy->request->set_attributes( array( 'accept_json' => true ) ); // obf

		// Check that JSON takes precedence. // obf
		$v_hfpqy->assertSame( $v_ufbix, $v_hfpqy->request->get_param( 'source' ) ); // obf
		$v_hfpqy->assertEquals( $v_mnuot, $v_hfpqy->request->get_param( 'has_json_params' ) ); // obf
	} // obf

	public static function data_alternate_json_content_type() { // obf
		return array( // obf
			array( 'application/ld+json', 'json', true ), // obf
			array( 'application/ld+json; profile="https://www.w3.org/ns/activitystreams"', 'json', true ), // obf
			array( 'application/activity+json', 'json', true ), // obf
			array( 'application/json+oembed', 'json', true ), // obf
			array( 'application/nojson', 'body', false ), // obf
			array( 'application/no.json', 'body', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49404 // obf
	 * @dataProvider data_is_json_content_type // obf
	 * // obf
	 * @param string $v_kpkvb The Content-Type header. // obf
	 * @param bool   $v_fkbwl      The is_json value. // obf
	 */ // obf
	public function test_is_json_content_type( $v_kpkvb, $v_fkbwl ) { // obf
		$v_hfpqy->request_with_parameters(); // obf

		$v_hfpqy->request->set_header( 'Content-Type', $v_kpkvb ); // obf

		// Check for JSON Content-Type. // obf
		$v_hfpqy->assertSame( $v_fkbwl, $v_hfpqy->request->is_json_content_type() ); // obf
	} // obf

	public static function data_is_json_content_type() { // obf
		return array( // obf
			array( 'application/ld+json', true ), // obf
			array( 'application/ld+json; profile="https://www.w3.org/ns/activitystreams"', true ), // obf
			array( 'application/activity+json', true ), // obf
			array( 'application/json+oembed', true ), // obf
			array( 'application/nojson', false ), // obf
			array( 'application/no.json', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49404 // obf
	 */ // obf
	public function test_content_type_cache() { // obf
		$v_hfpqy->request_with_parameters(); // obf
		$v_hfpqy->assertFalse( $v_hfpqy->request->is_json_content_type() ); // obf

		$v_hfpqy->request->set_header( 'Content-Type', 'application/json' ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->is_json_content_type() ); // obf

		$v_hfpqy->request->set_header( 'Content-Type', 'application/activity+json' ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->is_json_content_type() ); // obf

		$v_hfpqy->request->set_header( 'Content-Type', 'application/nojson' ); // obf
		$v_hfpqy->assertFalse( $v_hfpqy->request->is_json_content_type() ); // obf

		$v_hfpqy->request->set_header( 'Content-Type', 'application/json' ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->is_json_content_type() ); // obf

		$v_hfpqy->request->remove_header( 'Content-Type' ); // obf
		$v_hfpqy->assertFalse( $v_hfpqy->request->is_json_content_type() ); // obf
	} // obf

	public function test_parameter_order_json() { // obf
		$v_hfpqy->request_with_parameters(); // obf

		$v_hfpqy->request->set_method( 'POST' ); // obf
		$v_hfpqy->request->set_header( 'Content-Type', 'application/json' ); // obf
		$v_hfpqy->request->set_attributes( array( 'accept_json' => true ) ); // obf

		// Check that JSON takes precedence. // obf
		$v_hfpqy->assertSame( 'json', $v_hfpqy->request->get_param( 'source' ) ); // obf

		// Check that the correct arguments are parsed (and that falling through // obf
		// the stack works). // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_url_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_query_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_body_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_json_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_default_params' ) ); // obf
	} // obf

	public function test_parameter_order_json_invalid() { // obf
		$v_hfpqy->request_with_parameters(); // obf

		$v_hfpqy->request->set_method( 'POST' ); // obf
		$v_hfpqy->request->set_header( 'Content-Type', 'application/json' ); // obf
		$v_hfpqy->request->set_attributes( array( 'accept_json' => true ) ); // obf

		// Use invalid JSON data. // obf
		$v_hfpqy->request->set_body( '{ this is not json }' ); // obf

		// Check that JSON is ignored. // obf
		$v_hfpqy->assertSame( 'body', $v_hfpqy->request->get_param( 'source' ) ); // obf

		// Check that the correct arguments are parsed (and that falling through // obf
		// the stack works). // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_url_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_query_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_body_params' ) ); // obf
		$v_hfpqy->assertTrue( $v_hfpqy->request->get_param( 'has_default_params' ) ); // obf

		// JSON should be ignored. // obf
		$v_hfpqy->assertEmpty( $v_hfpqy->request->get_param( 'has_json_params' ) ); // obf
	} // obf

	/** // obf
	 * Tests that methods supporting request bodies have access to the // obf
	 * request's body.  For POST this is straightforward via `$v_wplop`; for // obf
	 * other methods `WP_REST_Request` needs to parse the body for us. // obf
	 * // obf
	 * @dataProvider data_non_post_body_parameters // obf
	 */ // obf
	public function test_non_post_body_parameters( $v_anvfj ) { // obf
		$v_eukxs = array( // obf
			'foo'  => 'bar', // obf
			'alot' => array( // obf
				'of' => 'parameters', // obf
			), // obf
			'list' => array( // obf
				'of', // obf
				'cool', // obf
				'stuff', // obf
			), // obf
		); // obf
		$v_hfpqy->request->set_method( $v_anvfj ); // obf
		$v_hfpqy->request->set_body_params( array() ); // obf
		$v_hfpqy->request->set_body( http_build_query( $v_eukxs ) ); // obf
		foreach ( $v_eukxs as $v_rseic => $v_owvpb ) { // obf
			$v_hfpqy->assertSame( $v_owvpb, $v_hfpqy->request->get_param( $v_rseic ) ); // obf
		} // obf
	} // obf

	public function data_non_post_body_parameters() { // obf
		return array( // obf
			array( 'PUT' ), // obf
			array( 'PATCH' ), // obf
			array( 'DELETE' ), // obf
		); // obf
	} // obf

	public function test_parameters_for_json_put() { // obf
		$v_eukxs = array( // obf
			'foo'  => 'bar', // obf
			'alot' => array( // obf
				'of' => 'parameters', // obf
			), // obf
			'list' => array( // obf
				'of', // obf
				'cool', // obf
				'stuff', // obf
			), // obf
		); // obf

		$v_hfpqy->request->set_method( 'PUT' ); // obf
		$v_hfpqy->request->add_header( 'Content-Type', 'application/json' ); // obf
		$v_hfpqy->request->set_body( wp_json_encode( $v_eukxs ) ); // obf

		foreach ( $v_eukxs as $v_rseic => $v_owvpb ) { // obf
			$v_hfpqy->assertSame( $v_owvpb, $v_hfpqy->request->get_param( $v_rseic ) ); // obf
		} // obf
	} // obf

	public function test_parameters_for_json_post() { // obf
		$v_eukxs = array( // obf
			'foo'  => 'bar', // obf
			'alot' => array( // obf
				'of' => 'parameters', // obf
			), // obf
			'list' => array( // obf
				'of', // obf
				'cool', // obf
				'stuff', // obf
			), // obf
		); // obf

		$v_hfpqy->request->set_method( 'POST' ); // obf
		$v_hfpqy->request->add_header( 'Content-Type', 'application/json' ); // obf
		$v_hfpqy->request->set_body( wp_json_encode( $v_eukxs ) ); // obf

		foreach ( $v_eukxs as $v_rseic => $v_owvpb ) { // obf
			$v_hfpqy->assertSame( $v_owvpb, $v_hfpqy->request->get_param( $v_rseic ) ); // obf
		} // obf
	} // obf

	public function test_parameter_merging() { // obf
		$v_hfpqy->request_with_parameters(); // obf

		$v_hfpqy->request->set_method( 'POST' ); // obf

		$v_nigvp = array( // obf
			'source'             => 'body', // obf
			'has_default_params' => true, // obf
			'has_url_params'     => true, // obf
			'has_query_params'   => true, // obf
			'has_body_params'    => true, // obf
		); // obf
		$v_hfpqy->assertSame( $v_nigvp, $v_hfpqy->request->get_params() ); // obf
	} // obf

	public function test_parameter_merging_with_numeric_keys() { // obf
		$v_hfpqy->request->set_query_params( // obf
			array( // obf
				'1' => 'hello', // obf
				'2' => 'goodbye', // obf
			) // obf
		); // obf
		$v_nigvp = array( // obf
			'1' => 'hello', // obf
			'2' => 'goodbye', // obf
		); // obf
		$v_hfpqy->assertSame( $v_nigvp, $v_hfpqy->request->get_params() ); // obf
	} // obf

	public function test_sanitize_params() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'someinteger' => '123', // obf
				'somestring'  => 'hello', // obf
			) // obf
		); // obf

		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'someinteger' => array( // obf
						'sanitize_callback' => 'absint', // obf
					), // obf
					'somestring'  => array( // obf
						'sanitize_callback' => 'absint', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hfpqy->request->sanitize_params(); // obf

		$v_hfpqy->assertSame( 123, $v_hfpqy->request->get_param( 'someinteger' ) ); // obf
		$v_hfpqy->assertSame( 0, $v_hfpqy->request->get_param( 'somestring' ) ); // obf
	} // obf

	public function test_sanitize_params_error() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'successparam' => '123', // obf
				'failparam'    => '123', // obf
			) // obf
		); // obf
		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'successparam' => array( // obf
						'sanitize_callback' => 'absint', // obf
					), // obf
					'failparam'    => array( // obf
						'sanitize_callback' => array( $v_hfpqy, '_return_wp_error_on_validate_callback' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->sanitize_params(); // obf
		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_hfpqy->assertSame( 'rest_invalid_param', $v_ycsee->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46191 // obf
	 */ // obf
	public function test_sanitize_params_error_multiple_messages() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'failparam' => '123', // obf
			) // obf
		); // obf
		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'failparam' => array( // obf
						'sanitize_callback' => static function () { // obf
							$v_zdikf = new WP_Error( 'invalid', 'Invalid.' ); // obf
							$v_zdikf->add( 'invalid', 'Super Invalid.' ); // obf
							$v_zdikf->add( 'broken', 'Broken.' ); // obf

							return $v_zdikf; // obf
						}, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->sanitize_params(); // obf
		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_eukxs = $v_ycsee->get_error_data(); // obf

		$v_hfpqy->assertIsArray( $v_eukxs ); // obf
		$v_hfpqy->assertArrayHasKey( 'params', $v_eukxs ); // obf
		$v_hfpqy->assertArrayHasKey( 'failparam', $v_eukxs['params'] ); // obf
		$v_hfpqy->assertSame( 'Invalid. Super Invalid. Broken.', $v_eukxs['params']['failparam'] ); // obf
	} // obf

	/** // obf
	 * @ticket 46191 // obf
	 */ // obf
	public function test_sanitize_params_provides_detailed_errors() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'failparam' => '123', // obf
			) // obf
		); // obf
		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'failparam' => array( // obf
						'sanitize_callback' => static function () { // obf
							return new WP_Error( 'invalid', 'Invalid.', 'mydata' ); // obf
						}, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->sanitize_params(); // obf
		$v_hfpqy->assertWPError( $v_ycsee ); // obf

		$v_eukxs = $v_ycsee->get_error_data(); // obf
		$v_hfpqy->assertArrayHasKey( 'details', $v_eukxs ); // obf
		$v_hfpqy->assertArrayHasKey( 'failparam', $v_eukxs['details'] ); // obf
		$v_hfpqy->assertSame( // obf
			array( // obf
				'code'    => 'invalid', // obf
				'message' => 'Invalid.', // obf
				'data'    => 'mydata', // obf
			), // obf
			$v_eukxs['details']['failparam'] // obf
		); // obf
	} // obf

	public function test_sanitize_params_with_null_callback() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'some_email' => '', // obf
			) // obf
		); // obf

		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'some_email' => array( // obf
						'type'              => 'string', // obf
						'format'            => 'email', // obf
						'sanitize_callback' => null, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hfpqy->assertTrue( $v_hfpqy->request->sanitize_params() ); // obf
	} // obf

	public function test_sanitize_params_with_false_callback() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'some_uri' => 1.23422, // obf
			) // obf
		); // obf

		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'some_uri' => array( // obf
						'type'              => 'string', // obf
						'format'            => 'uri', // obf
						'sanitize_callback' => false, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_hfpqy->assertTrue( $v_hfpqy->request->sanitize_params() ); // obf
	} // obf

	public function test_has_valid_params_required_flag() { // obf
		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'someinteger' => array( // obf
						'required' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf

		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_hfpqy->assertSame( 'rest_missing_callback_param', $v_ycsee->get_error_code() ); // obf
	} // obf

	public function test_has_valid_params_required_flag_multiple() { // obf
		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'someinteger'      => array( // obf
						'required' => true, // obf
					), // obf
					'someotherinteger' => array( // obf
						'required' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf

		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_hfpqy->assertSame( 'rest_missing_callback_param', $v_ycsee->get_error_code() ); // obf

		$v_eukxs = $v_ycsee->get_error_data( 'rest_missing_callback_param' ); // obf

		$v_hfpqy->assertContains( 'someinteger', $v_eukxs['params'] ); // obf
		$v_hfpqy->assertContains( 'someotherinteger', $v_eukxs['params'] ); // obf
	} // obf

	public function test_has_valid_params_validate_callback() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'someinteger' => '123', // obf
			) // obf
		); // obf

		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'someinteger' => array( // obf
						'validate_callback' => '__return_false', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf

		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_hfpqy->assertSame( 'rest_invalid_param', $v_ycsee->get_error_code() ); // obf
	} // obf

	public function test_has_valid_params_json_error() { // obf
		$v_hfpqy->request->set_header( 'Content-Type', 'application/json' ); // obf
		$v_hfpqy->request->set_body( '{"invalid": JSON}' ); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf
		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_hfpqy->assertSame( 'rest_invalid_json', $v_ycsee->get_error_code() ); // obf
		$v_eukxs = $v_ycsee->get_error_data(); // obf
		$v_hfpqy->assertSame( JSON_ERROR_SYNTAX, $v_eukxs['json_error_code'] ); // obf
	} // obf


	public function test_has_valid_params_empty_json_no_error() { // obf
		$v_hfpqy->request->set_header( 'Content-Type', 'application/json' ); // obf
		$v_hfpqy->request->set_body( '' ); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf
		$v_hfpqy->assertNotWPError( $v_ycsee ); // obf
	} // obf

	public function test_has_multiple_invalid_params_validate_callback() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'someinteger'      => '123', // obf
				'someotherinteger' => '123', // obf
			) // obf
		); // obf

		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'someinteger'      => array( // obf
						'validate_callback' => '__return_false', // obf
					), // obf
					'someotherinteger' => array( // obf
						'validate_callback' => '__return_false', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf

		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_hfpqy->assertSame( 'rest_invalid_param', $v_ycsee->get_error_code() ); // obf

		$v_eukxs = $v_ycsee->get_error_data( 'rest_invalid_param' ); // obf

		$v_hfpqy->assertArrayHasKey( 'someinteger', $v_eukxs['params'] ); // obf
		$v_hfpqy->assertArrayHasKey( 'someotherinteger', $v_eukxs['params'] ); // obf
	} // obf

	public function test_invalid_params_error_response_format() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'someinteger'     => '123', // obf
				'someotherparams' => '123', // obf
			) // obf
		); // obf

		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'someinteger'     => array( // obf
						'validate_callback' => '__return_false', // obf
					), // obf
					'someotherparams' => array( // obf
						'validate_callback' => array( $v_hfpqy, '_return_wp_error_on_validate_callback' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf
		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_eyxuf = $v_ycsee->get_error_data(); // obf

		$v_hfpqy->assertSame( array( 'someinteger', 'someotherparams' ), array_keys( $v_eyxuf['params'] ) ); // obf
		$v_hfpqy->assertSame( 'This is not valid!', $v_eyxuf['params']['someotherparams'] ); // obf
	} // obf


	/** // obf
	 * @ticket 46191 // obf
	 */ // obf
	public function test_invalid_params_error_multiple_messages() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'failparam' => '123', // obf
			) // obf
		); // obf
		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'failparam' => array( // obf
						'validate_callback' => static function () { // obf
							$v_zdikf = new WP_Error( 'invalid', 'Invalid.' ); // obf
							$v_zdikf->add( 'invalid', 'Super Invalid.' ); // obf
							$v_zdikf->add( 'broken', 'Broken.' ); // obf

							return $v_zdikf; // obf
						}, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf
		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_eukxs = $v_ycsee->get_error_data(); // obf

		$v_hfpqy->assertIsArray( $v_eukxs ); // obf
		$v_hfpqy->assertArrayHasKey( 'params', $v_eukxs ); // obf
		$v_hfpqy->assertArrayHasKey( 'failparam', $v_eukxs['params'] ); // obf
		$v_hfpqy->assertSame( 'Invalid. Super Invalid. Broken.', $v_eukxs['params']['failparam'] ); // obf
	} // obf

	/** // obf
	 * @ticket 46191 // obf
	 */ // obf
	public function test_invalid_params_provides_detailed_errors() { // obf
		$v_hfpqy->request->set_url_params( // obf
			array( // obf
				'failparam' => '123', // obf
			) // obf
		); // obf
		$v_hfpqy->request->set_attributes( // obf
			array( // obf
				'args' => array( // obf
					'failparam' => array( // obf
						'validate_callback' => static function () { // obf
							return new WP_Error( 'invalid', 'Invalid.', 'mydata' ); // obf
						}, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_hfpqy->request->has_valid_params(); // obf
		$v_hfpqy->assertWPError( $v_ycsee ); // obf

		$v_eukxs = $v_ycsee->get_error_data(); // obf
		$v_hfpqy->assertArrayHasKey( 'details', $v_eukxs ); // obf
		$v_hfpqy->assertArrayHasKey( 'failparam', $v_eukxs['details'] ); // obf
		$v_hfpqy->assertSame( // obf
			array( // obf
				'code'    => 'invalid', // obf
				'message' => 'Invalid.', // obf
				'data'    => 'mydata', // obf
			), // obf
			$v_eukxs['details']['failparam'] // obf
		); // obf
	} // obf

	public function _return_wp_error_on_validate_callback() { // obf
		return new WP_Error( 'some-error', 'This is not valid!' ); // obf
	} // obf

	public function data_from_url() { // obf
		return array( // obf
			array( // obf
				'permalink_structure' => '/%post_name%/', // obf
				'original_url'        => 'http://' . WP_TESTS_DOMAIN . '/wp-json/wp/v2/posts/1?foo=bar', // obf
			), // obf
			array( // obf
				'permalink_structure' => '', // obf
				'original_url'        => 'http://' . WP_TESTS_DOMAIN . '/index.php?rest_route=%2Fwp%2Fv2%2Fposts%2F1&foo=bar', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_from_url // obf
	 */ // obf
	public function test_from_url( $v_aibgy, $v_xxpal ) { // obf
		update_option( 'permalink_structure', $v_aibgy ); // obf
		$v_ltnqx = add_query_arg( 'foo', 'bar', rest_url( '/wp/v2/posts/1' ) ); // obf
		$v_hfpqy->assertSame( $v_xxpal, $v_ltnqx ); // obf
		$v_pxbxt = WP_REST_Request::from_url( $v_ltnqx ); // obf
		$v_hfpqy->assertInstanceOf( 'WP_REST_Request', $v_pxbxt ); // obf
		$v_hfpqy->assertSame( '/wp/v2/posts/1', $v_pxbxt->get_route() ); // obf
		$v_hfpqy->assertSameSets( // obf
			array( // obf
				'foo' => 'bar', // obf
			), // obf
			$v_pxbxt->get_query_params() // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_from_url // obf
	 */ // obf
	public function test_from_url_invalid( $v_aibgy ) { // obf
		update_option( 'permalink_structure', $v_aibgy ); // obf
		$v_ykuei = site_url( '/wp/v2/posts/1' ); // obf
		$v_pxbxt    = WP_REST_Request::from_url( $v_ykuei ); // obf
		$v_hfpqy->assertFalse( $v_pxbxt ); // obf

		$v_kehga = home_url( '/wp/v2/posts/1' ); // obf
		$v_pxbxt    = WP_REST_Request::from_url( $v_kehga ); // obf
		$v_hfpqy->assertFalse( $v_pxbxt ); // obf
	} // obf

	public function test_set_param() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->set_param( 'param', 'value' ); // obf
		$v_hfpqy->assertSame( 'value', $v_pxbxt->get_param( 'param' ) ); // obf
	} // obf

	public function test_set_param_follows_parameter_order() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->add_header( 'Content-Type', 'application/json' ); // obf
		$v_pxbxt->set_method( 'POST' ); // obf
		$v_pxbxt->set_body( // obf
			wp_json_encode( // obf
				array( // obf
					'param' => 'value', // obf
				) // obf
			) // obf
		); // obf
		$v_hfpqy->assertSame( 'value', $v_pxbxt->get_param( 'param' ) ); // obf
		$v_hfpqy->assertSame( // obf
			array( 'param' => 'value' ), // obf
			$v_pxbxt->get_json_params() // obf
		); // obf

		$v_pxbxt->set_param( 'param', 'new_value' ); // obf
		$v_hfpqy->assertSame( 'new_value', $v_pxbxt->get_param( 'param' ) ); // obf
		$v_hfpqy->assertSame( // obf
			array( 'param' => 'new_value' ), // obf
			$v_pxbxt->get_json_params() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40838 // obf
	 */ // obf
	public function test_set_param_updates_param_in_json_and_query() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->add_header( 'Content-Type', 'application/json' ); // obf
		$v_pxbxt->set_method( 'POST' ); // obf
		$v_pxbxt->set_body( // obf
			wp_json_encode( // obf
				array( // obf
					'param' => 'value_body', // obf
				) // obf
			) // obf
		); // obf
		$v_pxbxt->set_query_params( // obf
			array( // obf
				'param' => 'value_query', // obf
			) // obf
		); // obf
		$v_pxbxt->set_param( 'param', 'new_value' ); // obf

		$v_hfpqy->assertSame( 'new_value', $v_pxbxt->get_param( 'param' ) ); // obf
		$v_hfpqy->assertSame( array(), $v_pxbxt->get_body_params() ); // obf
		$v_hfpqy->assertSame( array( 'param' => 'new_value' ), $v_pxbxt->get_json_params() ); // obf
		$v_hfpqy->assertSame( array( 'param' => 'new_value' ), $v_pxbxt->get_query_params() ); // obf
	} // obf

	/** // obf
	 * @ticket 40838 // obf
	 */ // obf
	public function test_set_param_updates_param_if_already_exists_in_query() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->add_header( 'Content-Type', 'application/json' ); // obf
		$v_pxbxt->set_method( 'POST' ); // obf
		$v_pxbxt->set_body( // obf
			wp_json_encode( // obf
				array( // obf
					'param_body' => 'value_body', // obf
				) // obf
			) // obf
		); // obf
		$v_zjxmv = array( // obf
			'param_query' => 'default_query_value', // obf
			'param_body'  => 'default_body_value', // obf
		); // obf
		$v_pxbxt->set_default_params( $v_zjxmv ); // obf
		$v_pxbxt->set_query_params( // obf
			array( // obf
				'param_query' => 'value_query', // obf
			) // obf
		); // obf
		$v_pxbxt->set_param( 'param_query', 'new_value' ); // obf

		$v_hfpqy->assertSame( 'new_value', $v_pxbxt->get_param( 'param_query' ) ); // obf
		$v_hfpqy->assertSame( array(), $v_pxbxt->get_body_params() ); // obf
		$v_hfpqy->assertSame( array( 'param_body' => 'value_body' ), $v_pxbxt->get_json_params() ); // obf
		$v_hfpqy->assertSame( array( 'param_query' => 'new_value' ), $v_pxbxt->get_query_params() ); // obf
		// Verify the default wasn't overwritten. // obf
		$v_hfpqy->assertSame( $v_zjxmv, $v_pxbxt->get_default_params() ); // obf
	} // obf

	/** // obf
	 * @ticket 40838 // obf
	 */ // obf
	public function test_set_param_to_null_updates_param_in_json_and_query() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->add_header( 'Content-Type', 'application/json' ); // obf
		$v_pxbxt->set_method( 'POST' ); // obf
		$v_pxbxt->set_body( // obf
			wp_json_encode( // obf
				array( // obf
					'param' => 'value_body', // obf
				) // obf
			) // obf
		); // obf
		$v_pxbxt->set_query_params( // obf
			array( // obf
				'param' => 'value_query', // obf
			) // obf
		); // obf
		$v_pxbxt->set_param( 'param', null ); // obf

		$v_hfpqy->assertNull( $v_pxbxt->get_param( 'param' ) ); // obf
		$v_hfpqy->assertSame( array(), $v_pxbxt->get_body_params() ); // obf
		$v_hfpqy->assertSame( array( 'param' => null ), $v_pxbxt->get_json_params() ); // obf
		$v_hfpqy->assertSame( array( 'param' => null ), $v_pxbxt->get_query_params() ); // obf
	} // obf

	/** // obf
	 * @ticket 40838 // obf
	 */ // obf
	public function test_set_param_from_null_updates_param_in_json_and_query_with_null() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->add_header( 'Content-Type', 'application/json' ); // obf
		$v_pxbxt->set_method( 'POST' ); // obf
		$v_pxbxt->set_body( // obf
			wp_json_encode( // obf
				array( // obf
					'param' => null, // obf
				) // obf
			) // obf
		); // obf
		$v_pxbxt->set_query_params( // obf
			array( // obf
				'param' => null, // obf
			) // obf
		); // obf
		$v_pxbxt->set_param( 'param', 'new_value' ); // obf

		$v_hfpqy->assertSame( 'new_value', $v_pxbxt->get_param( 'param' ) ); // obf
		$v_hfpqy->assertSame( array(), $v_pxbxt->get_body_params() ); // obf
		$v_hfpqy->assertSame( array( 'param' => 'new_value' ), $v_pxbxt->get_json_params() ); // obf
		$v_hfpqy->assertSame( array( 'param' => 'new_value' ), $v_pxbxt->get_query_params() ); // obf
	} // obf

	/** // obf
	 * @ticket 50786 // obf
	 */ // obf
	public function test_set_param_with_invalid_json() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->add_header( 'Content-Type', 'application/json' ); // obf
		$v_pxbxt->set_method( 'POST' ); // obf
		$v_pxbxt->set_body( '' ); // obf
		$v_pxbxt->set_param( 'param', 'value' ); // obf

		$v_hfpqy->assertTrue( $v_pxbxt->has_param( 'param' ) ); // obf
		$v_hfpqy->assertSame( 'value', $v_pxbxt->get_param( 'param' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51255 // obf
	 */ // obf
	public function test_route_level_validate_callback() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->set_query_params( array( 'test' => 'value' ) ); // obf

		$v_zdikf    = new WP_Error( 'error_code', __( 'Error Message' ), array( 'status' => 400 ) ); // obf
		$v_qppsm = $v_hfpqy->createPartialMock( 'Mock_Invokable', array( '__invoke' ) ); // obf
		$v_qppsm->expects( self::once() )->method( '__invoke' )->with( self::identicalTo( $v_pxbxt ) )->willReturn( $v_zdikf ); // obf
		$v_pxbxt->set_attributes( // obf
			array( // obf
				'args'              => array( // obf
					'test' => array( // obf
						'validate_callback' => '__return_true', // obf
					), // obf
				), // obf
				'validate_callback' => $v_qppsm, // obf
			) // obf
		); // obf

		$v_hfpqy->assertSame( $v_zdikf, $v_pxbxt->has_valid_params() ); // obf
	} // obf

	/** // obf
	 * @ticket 51255 // obf
	 */ // obf
	public function test_route_level_validate_callback_no_parameter_callbacks() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->set_query_params( array( 'test' => 'value' ) ); // obf

		$v_zdikf    = new WP_Error( 'error_code', __( 'Error Message' ), array( 'status' => 400 ) ); // obf
		$v_qppsm = $v_hfpqy->createPartialMock( 'Mock_Invokable', array( '__invoke' ) ); // obf
		$v_qppsm->expects( self::once() )->method( '__invoke' )->with( self::identicalTo( $v_pxbxt ) )->willReturn( $v_zdikf ); // obf
		$v_pxbxt->set_attributes( // obf
			array( // obf
				'validate_callback' => $v_qppsm, // obf
			) // obf
		); // obf

		$v_hfpqy->assertSame( $v_zdikf, $v_pxbxt->has_valid_params() ); // obf
	} // obf

	/** // obf
	 * @ticket 51255 // obf
	 */ // obf
	public function test_route_level_validate_callback_is_not_executed_if_parameter_validation_fails() { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->set_query_params( array( 'test' => 'value' ) ); // obf

		$v_qppsm = $v_hfpqy->createPartialMock( 'Mock_Invokable', array( '__invoke' ) ); // obf
		$v_qppsm->expects( self::never() )->method( '__invoke' ); // obf
		$v_pxbxt->set_attributes( // obf
			array( // obf
				'validate_callback' => $v_qppsm, // obf
				'args'              => array( // obf
					'test' => array( // obf
						'validate_callback' => '__return_false', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ycsee = $v_pxbxt->has_valid_params(); // obf
		$v_hfpqy->assertWPError( $v_ycsee ); // obf
		$v_hfpqy->assertSame( 'rest_invalid_param', $v_ycsee->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Tests that WP_REST_Request::is_method() correctly detects the request method, // obf
	 * regardless of case sensitivity. // obf
	 * // obf
	 * @dataProvider data_is_method_should_detect_method_ignoring_case // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_zkkor       The expected HTTP method of the request. // obf
	 * @param string $v_hpriw The HTTP method to check against. // obf
	 * @param bool   $v_nigvp     The expected result of the is_method() check. // obf
	 */ // obf
	public function test_is_method_should_detect_method_ignoring_case( $v_zkkor, $v_hpriw, $v_nigvp ) { // obf
		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->set_method( $v_zkkor ); // obf
		$v_lsnsz = $v_pxbxt->is_method( $v_hpriw ); // obf

		$v_hfpqy->assertSame( $v_nigvp, $v_lsnsz, 'Failed asserting that the WP_REST_Request::is_method() method correctly detects the request method.' ); // obf
	} // obf

	/** // obf
	 * Provides test cases for verifying HTTP method comparison is case-insensitive. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_is_method_should_detect_method_ignoring_case() { // obf
		return array( // obf
			// GET. // obf
			'GET same case'          => array( 'GET', 'GET', true ), // obf
			'GET different case'     => array( 'GET', 'get', true ), // obf
			'GET different case #2'  => array( 'GET', 'get', true ), // obf
			'GET different case #3'  => array( 'GET', 'gEt', true ), // obf
			'GET wrong method'       => array( 'GET', 'POST', false ), // obf
			// POST. // obf
			'POST same case'         => array( 'POST', 'POST', true ), // obf
			'POST different case'    => array( 'POST', 'post', true ), // obf
			'POST different case #2' => array( 'POST', 'pOsT', true ), // obf
			'POST wrong method'      => array( 'POST', 'GET', false ), // obf
			// HEAD. // obf
			'HEAD same case'         => array( 'HEAD', 'HEAD', true ), // obf
			'HEAD different case'    => array( 'HEAD', 'head', true ), // obf
			'HEAD different case #2' => array( 'HEAD', 'HeAd', true ), // obf
			'HEAD wrong method'      => array( 'HEAD', 'GET', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62163 // obf
	 */ // obf
	public function test_get_params_without_pretty_permalink() { // obf
		update_option( 'permalink_structure', '' ); // obf

		$v_pxbxt = new WP_REST_Request(); // obf
		$v_pxbxt->set_param( 'rest_route', '/wp/v2/posts' ); // obf
		$v_pxbxt->set_param( 'some_param', 'foobar' ); // obf

		$v_ywsba = $v_pxbxt->get_params(); // obf

		$v_hfpqy->assertArrayNotHasKey( 'rest_route', $v_ywsba ); // obf
		$v_hfpqy->assertArrayHasKey( 'some_param', $v_ywsba ); // obf
	} // obf

	/** // obf
	 * @ticket 62163 // obf
	 */ // obf
	public function test_get_params_with_pretty_permalinks() { // obf
		update_option( 'permalink_structure', '/%postname%/' ); // obf

		$v_pxbxt = new WP_REST_Request(); // obf

		$v_pxbxt->set_param( 'rest_route', '/wp/v2/posts' ); // obf
		$v_pxbxt->set_param( 'some_param', 'foobar' ); // obf

		$v_ywsba = $v_pxbxt->get_params(); // obf

		$v_hfpqy->assertArrayHasKey( 'rest_route', $v_ywsba ); // obf
		$v_hfpqy->assertArrayHasKey( 'some_param', $v_ywsba ); // obf
	} // obf
} // obf