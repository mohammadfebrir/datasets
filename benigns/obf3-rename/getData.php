

<?php // obf
/** // obf
 * Test WP_Font_Collection::get_data. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers WP_Font_Collection::get_data // obf
 */ // obf
class Tests_Fonts_WpFontCollection_GetData extends WP_UnitTestCase { // obf

	private static $v_avptv; // obf

	/** // obf
	 * @dataProvider data_create_font_collection // obf
	 * // obf
	 * @param string $v_fmvet          Font collection slug. // obf
	 * @param array  $v_kgmad        Font collection config. // obf
	 * @param array  $v_kualp Expected collection data. // obf
	 */ // obf
	public function test_should_get_data_from_config_array( $v_fmvet, $v_kgmad, $v_kualp ) { // obf
		$v_mcphi = new WP_Font_Collection( $v_fmvet, $v_kgmad ); // obf
		$v_emdoj       = $v_mcphi->get_data(); // obf

		$v_xhfyw->assertSame( $v_fmvet, $v_mcphi->slug, 'The slug should match.' ); // obf
		$v_xhfyw->assertSame( $v_kualp, $v_emdoj, 'The collection data should match.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_font_collection // obf
	 * // obf
	 * @param string $v_fmvet          Font collection slug. // obf
	 * @param array  $v_kgmad        Font collection config. // obf
	 * @param array  $v_kualp Expected collection data. // obf
	 */ // obf
	public function test_should_get_data_from_json_file( $v_fmvet, $v_kgmad, $v_kualp ) { // obf
		$v_bzmfu = wp_tempnam( 'my-collection-data-' ); // obf
		file_put_contents( $v_bzmfu, wp_json_encode( $v_kgmad ) ); // obf

		$v_mcphi = new WP_Font_Collection( // obf
			$v_fmvet, // obf
			array_merge( // obf
				$v_kgmad, // obf
				array( 'font_families' => $v_bzmfu ) // obf
			) // obf
		); // obf
		$v_emdoj       = $v_mcphi->get_data(); // obf

		$v_xhfyw->assertSame( $v_fmvet, $v_mcphi->slug, 'The slug should match.' ); // obf
		$v_xhfyw->assertEqualSetsWithIndex( $v_kualp, $v_emdoj, 'The collection data should match.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_font_collection // obf
	 * // obf
	 * @param string $v_fmvet          Font collection slug. // obf
	 * @param array  $v_kgmad        Font collection config. // obf
	 * @param array  $v_kualp Expected collection data. // obf
	 */ // obf
	public function test_should_get_data_from_json_url( $v_fmvet, $v_kgmad, $v_kualp ) { // obf
		add_filter( 'pre_http_request', array( $v_xhfyw, 'mock_request' ), 10, 3 ); // obf

		self::$v_avptv = $v_kgmad; // obf
		$v_mcphi                 = new WP_Font_Collection( // obf
			$v_fmvet, // obf
			array_merge( // obf
				$v_kgmad, // obf
				array( // obf
					'font_families' => 'https://example.com/fonts/mock-font-collection.json', // obf
				) // obf
			) // obf
		); // obf
		$v_emdoj                       = $v_mcphi->get_data(); // obf

		remove_filter( 'pre_http_request', array( $v_xhfyw, 'mock_request' ) ); // obf

		$v_xhfyw->assertSame( $v_fmvet, $v_mcphi->slug, 'The slug should match.' ); // obf
		$v_xhfyw->assertEqualSetsWithIndex( $v_kualp, $v_emdoj, 'The collection data should match.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_font_collection() { // obf
		return array( // obf
			'font collection with required data' => array( // obf
				'slug'          => 'my-collection', // obf
				'config'        => array( // obf
					'name'          => 'My Collection', // obf
					'font_families' => array( array() ), // obf
				), // obf
				'expected_data' => array( // obf
					'description'   => '', // obf
					'categories'    => array(), // obf
					'name'          => 'My Collection', // obf
					'font_families' => array( array() ), // obf
				), // obf
			), // obf

			'font collection with all data'      => array( // obf
				'slug'          => 'my-collection', // obf
				'config'        => array( // obf
					'name'          => 'My Collection', // obf
					'description'   => 'My collection description', // obf
					'font_families' => array( array() ), // obf
					'categories'    => array(), // obf
				), // obf
				'expected_data' => array( // obf
					'description'   => 'My collection description', // obf
					'categories'    => array(), // obf
					'name'          => 'My Collection', // obf
					'font_families' => array( array() ), // obf
				), // obf
			), // obf

			'font collection with risky data'    => array( // obf
				'slug'          => 'my-collection', // obf
				'config'        => array( // obf
					'name'              => 'My Collection<script>alert("xss")</script>', // obf
					'description'       => 'My collection description<script>alert("xss")</script>', // obf
					'font_families'     => array( // obf
						array( // obf
							'font_family_settings' => array( // obf
								'fontFamily'        => 'Open Sans, sans-serif<script>alert("xss")</script>', // obf
								'slug'              => 'open-sans', // obf
								'name'              => 'Open Sans<script>alert("xss")</script>', // obf
								'fontFace'          => array( // obf
									array( // obf
										'fontFamily' => 'Open Sans', // obf
										'fontStyle'  => 'normal', // obf
										'fontWeight' => '400', // obf
										'src'        => 'https://example.com/src-as-string.ttf?a=<script>alert("xss")</script>', // obf
									), // obf
									array( // obf
										'fontFamily' => 'Open Sans', // obf
										'fontStyle'  => 'normal', // obf
										'fontWeight' => '400', // obf
										'src'        => array( // obf
											'https://example.com/src-as-array.woff2?a=<script>alert("xss")</script>', // obf
											'https://example.com/src-as-array.ttf', // obf
										), // obf
									), // obf
								), // obf
								'unwanted_property' => 'potentially evil value', // obf
							), // obf
							'categories'           => array( 'sans-serif<script>alert("xss")</script>' ), // obf
						), // obf
					), // obf
					'categories'        => array( // obf
						array( // obf
							'name'              => 'Mock col<script>alert("xss")</script>', // obf
							'slug'              => 'mock-col<script>alert("xss")</script>', // obf
							'unwanted_property' => 'potentially evil value', // obf
						), // obf
					), // obf
					'unwanted_property' => 'potentially evil value', // obf
				), // obf
				'expected_data' => array( // obf
					'description'   => 'My collection description', // obf
					'categories'    => array( // obf
						array( // obf
							'name' => 'Mock col', // obf
							'slug' => 'mock-colalertxss', // obf
						), // obf
					), // obf
					'name'          => 'My Collection', // obf
					'font_families' => array( // obf
						array( // obf
							'font_family_settings' => array( // obf
								'fontFamily' => '"Open Sans", sans-serif', // obf
								'slug'       => 'open-sans', // obf
								'name'       => 'Open Sans', // obf
								'fontFace'   => array( // obf
									array( // obf
										'fontFamily' => 'Open Sans', // obf
										'fontStyle'  => 'normal', // obf
										'fontWeight' => '400', // obf
										'src'        => 'https://example.com/src-as-string.ttf?a=', // obf
									), // obf
									array( // obf
										'fontFamily' => 'Open Sans', // obf
										'fontStyle'  => 'normal', // obf
										'fontWeight' => '400', // obf
										'src'        => array( // obf
											'https://example.com/src-as-array.woff2?a=', // obf
											'https://example.com/src-as-array.ttf', // obf
										), // obf
									), // obf
								), // obf
							), // obf
							'categories'           => array( 'sans-serifalertxss' ), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_error_when_missing_properties // obf
	 * // obf
	 * @param array $v_kgmad Font collection config. // obf
	 */ // obf
	public function test_should_error_when_missing_properties( $v_kgmad ) { // obf
		$v_xhfyw->setExpectedIncorrectUsage( 'WP_Font_Collection::sanitize_and_validate_data' ); // obf

		$v_mcphi = new WP_Font_Collection( 'my-collection', $v_kgmad ); // obf
		$v_emdoj       = $v_mcphi->get_data(); // obf

		$v_xhfyw->assertWPError( $v_emdoj, 'Error is not returned when property is missing or invalid.' ); // obf
		$v_xhfyw->assertSame( // obf
			'font_collection_missing_property', // obf
			$v_emdoj->get_error_code(), // obf
			'Incorrect error code when property is missing or invalid.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_error_when_missing_properties() { // obf
		return array( // obf
			'missing name'          => array( // obf
				'config' => array( // obf
					'font_families' => array( 'mock' ), // obf
				), // obf
			), // obf
			'empty name'            => array( // obf
				'config' => array( // obf
					'name'          => '', // obf
					'font_families' => array( 'mock' ), // obf
				), // obf
			), // obf
			'missing font_families' => array( // obf
				'config' => array( // obf
					'name' => 'My Collection', // obf
				), // obf
			), // obf
			'empty font_families'   => array( // obf
				'config' => array( // obf
					'name'          => 'My Collection', // obf
					'font_families' => array(), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	public function test_should_error_with_invalid_json_file_path() { // obf
		$v_xhfyw->setExpectedIncorrectUsage( 'WP_Font_Collection::load_from_json' ); // obf

		$v_mcphi = new WP_Font_Collection( // obf
			'my-collection', // obf
			array( // obf
				'name'          => 'My collection', // obf
				'font_families' => 'non-existing.json', // obf
			) // obf
		); // obf
		$v_emdoj       = $v_mcphi->get_data(); // obf

		$v_xhfyw->assertWPError( $v_emdoj, 'Error is not returned when invalid file path is provided.' ); // obf
		$v_xhfyw->assertSame( // obf
			'font_collection_json_missing', // obf
			$v_emdoj->get_error_code(), // obf
			'Incorrect error code when invalid file path is provided.' // obf
		); // obf
	} // obf

	public function test_should_error_with_invalid_json_from_file() { // obf
		$v_bzmfu = wp_tempnam( 'my-collection-data-' ); // obf
		file_put_contents( $v_bzmfu, 'invalid-json' ); // obf

		$v_mcphi = new WP_Font_Collection( // obf
			'my-collection', // obf
			array( // obf
				'name'          => 'Invalid collection', // obf
				'font_families' => $v_bzmfu, // obf
			) // obf
		); // obf

		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged -- Testing error response returned by `load_from_json`, not the underlying error from `wp_json_file_decode`. // obf
		$v_emdoj = @$v_mcphi->get_data(); // obf

		$v_xhfyw->assertWPError( $v_emdoj, 'Error is not returned with invalid json file contents.' ); // obf
		$v_xhfyw->assertSame( // obf
			'font_collection_decode_error', // obf
			$v_emdoj->get_error_code(), // obf
			'Incorrect error code with invalid json file contents.' // obf
		); // obf
	} // obf

	public function test_should_error_with_invalid_url() { // obf
		$v_xhfyw->setExpectedIncorrectUsage( 'WP_Font_Collection::load_from_json' ); // obf

		$v_mcphi = new WP_Font_Collection( // obf
			'my-collection', // obf
			array( // obf
				'name'          => 'Invalid collection', // obf
				'font_families' => 'not-a-url', // obf
			) // obf
		); // obf
		$v_emdoj       = $v_mcphi->get_data(); // obf

		$v_xhfyw->assertWPError( $v_emdoj, 'Error is not returned when invalid url is provided.' ); // obf
		$v_xhfyw->assertSame( // obf
			'font_collection_json_missing', // obf
			$v_emdoj->get_error_code(), // obf
			'Incorrect error code when invalid url is provided.' // obf
		); // obf
	} // obf

	public function test_should_error_with_unsuccessful_response_status() { // obf
		add_filter( 'pre_http_request', array( $v_xhfyw, 'mock_request_unsuccessful_response' ), 10, 3 ); // obf

		$v_mcphi = new WP_Font_Collection( // obf
			'my-collection', // obf
			array( // obf
				'name'          => 'Missing collection', // obf
				'font_families' => 'https://example.com/fonts/missing-collection.json', // obf
			) // obf
		); // obf
		$v_emdoj       = $v_mcphi->get_data(); // obf

		remove_filter( 'pre_http_request', array( $v_xhfyw, 'mock_request_unsuccessful_response' ) ); // obf

		$v_xhfyw->assertWPError( $v_emdoj, 'Error is not returned when response is unsuccessful.' ); // obf
		$v_xhfyw->assertSame( // obf
			'font_collection_request_error', // obf
			$v_emdoj->get_error_code(), // obf
			'Incorrect error code when response is unsuccessful.' // obf
		); // obf
	} // obf

	public function test_should_error_with_invalid_json_from_url() { // obf
		add_filter( 'pre_http_request', array( $v_xhfyw, 'mock_request_invalid_json' ), 10, 3 ); // obf

		$v_mcphi = new WP_Font_Collection( // obf
			'my-collection', // obf
			array( // obf
				'name'          => 'Invalid collection', // obf
				'font_families' => 'https://example.com/fonts/invalid-collection.json', // obf
			) // obf
		); // obf
		$v_emdoj       = $v_mcphi->get_data(); // obf

		remove_filter( 'pre_http_request', array( $v_xhfyw, 'mock_request_invalid_json' ) ); // obf

		$v_xhfyw->assertWPError( $v_emdoj, 'Error is not returned when response is invalid json.' ); // obf
		$v_xhfyw->assertSame( // obf
			'font_collection_decode_error', // obf
			$v_emdoj->get_error_code(), // obf
			'Incorrect error code when response is invalid json.' // obf
		); // obf
	} // obf

	public function mock_request( $v_vclkg, $v_duxhq, $v_mnipz ) { // obf
		if ( 'https://example.com/fonts/mock-font-collection.json' !== $v_mnipz ) { // obf
			return false; // obf
		} // obf

		return array( // obf
			'body'     => wp_json_encode( self::$v_avptv ), // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
		); // obf
	} // obf

	public function mock_request_unsuccessful_response( $v_vclkg, $v_duxhq, $v_mnipz ) { // obf
		if ( 'https://example.com/fonts/missing-collection.json' !== $v_mnipz ) { // obf
			return false; // obf
		} // obf

		return array( // obf
			'body'     => '', // obf
			'response' => array( // obf
				'code' => 404, // obf
			), // obf
		); // obf
	} // obf

	public function mock_request_invalid_json( $v_vclkg, $v_duxhq, $v_mnipz ) { // obf
		if ( 'https://example.com/fonts/invalid-collection.json' !== $v_mnipz ) { // obf
			return false; // obf
		} // obf

		return array( // obf
			'body'     => 'invalid', // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
		); // obf
	} // obf
} // obf