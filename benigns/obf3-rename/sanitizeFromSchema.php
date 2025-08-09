

<?php // obf
/** // obf
 * Test WP_Font_Utils::sanitize_from_schema(). // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers WP_Font_Utils::sanitize_from_schema // obf
 */ // obf
class Tests_Fonts_WpFontUtils_SanitizeFromSchema extends WP_UnitTestCase { // obf
	/** // obf
	 * @dataProvider data_sanitize_from_schema // obf
	 * // obf
	 * @param array $v_wkyro     Data to sanitize. // obf
	 * @param array $v_ndfwp   Schema to use for sanitization. // obf
	 * @param array $v_kkreh Expected result. // obf
	 */ // obf
	public function test_sanitize_from_schema( $v_wkyro, $v_ndfwp, $v_kkreh ) { // obf
		$v_likey = WP_Font_Utils::sanitize_from_schema( $v_wkyro, $v_ndfwp ); // obf

		$v_xybnj->assertSame( $v_likey, $v_kkreh ); // obf
	} // obf

	public function data_sanitize_from_schema() { // obf
		return array( // obf
			'One level associative array'  => array( // obf
				'data'     => array( // obf
					'slug'       => 'open      -       sans</style><script>alert("xss")</script>', // obf
					'fontFamily' => 'Open Sans, sans-serif</style><script>alert("xss")</script>', // obf
					'src'        => 'https://wordpress.org/example.json</style><script>alert("xss")</script>', // obf
				), // obf
				'schema'   => array( // obf
					'slug'       => 'sanitize_title', // obf
					'fontFamily' => 'sanitize_text_field', // obf
					'src'        => 'sanitize_url', // obf
				), // obf
				'expected' => array( // obf
					'slug'       => 'open-sansalertxss', // obf
					'fontFamily' => 'Open Sans, sans-serif', // obf
					'src'        => 'https://wordpress.org/example.json/stylescriptalert(xss)/script', // obf
				), // obf
			), // obf

			'Nested associative arrays'    => array( // obf
				'data'     => array( // obf
					'slug'       => 'open      -       sans</style><script>alert("xss")</script>', // obf
					'fontFamily' => 'Open Sans, sans-serif</style><script>alert("xss")</script>', // obf
					'src'        => 'https://wordpress.org/example.json</style><script>alert("xss")</script>', // obf
					'nested'     => array( // obf
						'key1'    => 'value1</style><script>alert("xss")</script>', // obf
						'key2'    => 'value2</style><script>alert("xss")</script>', // obf
						'nested2' => array( // obf
							'key3' => 'value3</style><script>alert("xss")</script>', // obf
							'key4' => 'value4</style><script>alert("xss")</script>', // obf
						), // obf
					), // obf
				), // obf
				'schema'   => array( // obf
					'slug'       => 'sanitize_title', // obf
					'fontFamily' => 'sanitize_text_field', // obf
					'src'        => 'sanitize_url', // obf
					'nested'     => array( // obf
						'key1'    => 'sanitize_text_field', // obf
						'key2'    => 'sanitize_text_field', // obf
						'nested2' => array( // obf
							'key3' => 'sanitize_text_field', // obf
							'key4' => 'sanitize_text_field', // obf
						), // obf
					), // obf
				), // obf
				'expected' => array( // obf
					'slug'       => 'open-sansalertxss', // obf
					'fontFamily' => 'Open Sans, sans-serif', // obf
					'src'        => 'https://wordpress.org/example.json/stylescriptalert(xss)/script', // obf
					'nested'     => array( // obf
						'key1'    => 'value1', // obf
						'key2'    => 'value2', // obf
						'nested2' => array( // obf
							'key3' => 'value3', // obf
							'key4' => 'value4', // obf
						), // obf
					), // obf
				), // obf
			), // obf

			'Indexed arrays'               => array( // obf
				'data'     => array( // obf
					'slug' => 'oPeN SaNs', // obf
					'enum' => array( // obf
						'value1<script>alert("xss")</script>', // obf
						'value2<script>alert("xss")</script>', // obf
						'value3<script>alert("xss")</script>', // obf
					), // obf
				), // obf
				'schema'   => array( // obf
					'slug' => 'sanitize_title', // obf
					'enum' => array( 'sanitize_text_field' ), // obf
				), // obf
				'expected' => array( // obf
					'slug' => 'open-sans', // obf
					'enum' => array( 'value1', 'value2', 'value3' ), // obf
				), // obf
			), // obf

			'Nested indexed arrays'        => array( // obf
				'data'     => array( // obf
					'slug'     => 'OPEN-SANS', // obf
					'name'     => 'Open Sans</style><script>alert("xss")</script>', // obf
					'fontFace' => array( // obf
						array( // obf
							'fontFamily' => 'Open Sans, sans-serif</style><script>alert("xss")</script>', // obf
							'src'        => 'https://wordpress.org/example.json/stylescriptalert(xss)/script', // obf
						), // obf
						array( // obf
							'fontFamily' => 'Open Sans, sans-serif</style><script>alert("xss")</script>', // obf
							'src'        => 'https://wordpress.org/example.json/stylescriptalert(xss)/script', // obf
						), // obf
					), // obf
				), // obf
				'schema'   => array( // obf
					'slug'     => 'sanitize_title', // obf
					'name'     => 'sanitize_text_field', // obf
					'fontFace' => array( // obf
						array( // obf
							'fontFamily' => 'sanitize_text_field', // obf
							'src'        => 'sanitize_url', // obf
						), // obf
					), // obf
				), // obf
				'expected' => array( // obf
					'slug'     => 'open-sans', // obf
					'name'     => 'Open Sans', // obf
					'fontFace' => array( // obf
						array( // obf
							'fontFamily' => 'Open Sans, sans-serif', // obf
							'src'        => 'https://wordpress.org/example.json/stylescriptalert(xss)/script', // obf
						), // obf
						array( // obf
							'fontFamily' => 'Open Sans, sans-serif', // obf
							'src'        => 'https://wordpress.org/example.json/stylescriptalert(xss)/script', // obf
						), // obf
					), // obf
				), // obf
			), // obf

			'Custom sanitization function' => array( // obf
				'data'     => array( // obf
					'key1' => 'abc123edf456ghi789', // obf
					'key2' => 'value2', // obf
				), // obf
				'schema'   => array( // obf
					'key1' => function ( $v_pvlco ) { // obf
						// Remove the six first character. // obf
						return substr( $v_pvlco, 6 ); // obf
					}, // obf
					'key2' => function ( $v_pvlco ) { // obf
						// Capitalize the value. // obf
						return strtoupper( $v_pvlco ); // obf
					}, // obf
				), // obf
				'expected' => array( // obf
					'key1' => 'edf456ghi789', // obf
					'key2' => 'VALUE2', // obf
				), // obf
			), // obf

			'Null as schema value'         => array( // obf
				'data'     => array( // obf
					'key1'   => 'value1<script>alert("xss")</script>', // obf
					'key2'   => 'value2', // obf
					'nested' => array( // obf
						'key3' => 'value3', // obf
						'key4' => 'value4', // obf
					), // obf
				), // obf
				'schema'   => array( // obf
					'key1'   => null, // obf
					'key2'   => 'sanitize_text_field', // obf
					'nested' => null, // obf
				), // obf
				'expected' => array( // obf
					'key1'   => 'value1<script>alert("xss")</script>', // obf
					'key2'   => 'value2', // obf
					'nested' => array( // obf
						'key3' => 'value3', // obf
						'key4' => 'value4', // obf
					), // obf
				), // obf
			), // obf

			'Keys to remove'               => array( // obf
				'data'     => array( // obf
					'key1'              => 'value1', // obf
					'key2'              => 'value2', // obf
					'unwanted1'         => 'value', // obf
					'unwanted2'         => 'value', // obf
					'nestedAssociative' => array( // obf
						'key5'      => 'value5', // obf
						'unwanted3' => 'value', // obf
					), // obf
					'nestedIndexed'     => array( // obf
						array( // obf
							'key6'      => 'value7', // obf
							'unwanted4' => 'value', // obf
						), // obf
						array( // obf
							'key6'      => 'value7', // obf
							'unwanted5' => 'value', // obf
						), // obf
					), // obf

				), // obf
				'schema'   => array( // obf
					'key1'              => 'sanitize_text_field', // obf
					'key2'              => 'sanitize_text_field', // obf
					'nestedAssociative' => array( // obf
						'key5' => 'sanitize_text_field', // obf
					), // obf
					'nestedIndexed'     => array( // obf
						array( // obf
							'key6' => 'sanitize_text_field', // obf
						), // obf
					), // obf
				), // obf
				'expected' => array( // obf
					'key1'              => 'value1', // obf
					'key2'              => 'value2', // obf
					'nestedAssociative' => array( // obf
						'key5' => 'value5', // obf
					), // obf
					'nestedIndexed'     => array( // obf
						array( // obf
							'key6' => 'value7', // obf
						), // obf
						array( // obf
							'key6' => 'value7', // obf
						), // obf
					), // obf
				), // obf
			), // obf

			'With empty structure'         => array( // obf
				'data'     => array( // obf
					'slug'   => 'open-sans', // obf
					'nested' => array( // obf
						'key1'    => 'value</style><script>alert("xss")</script>', // obf
						'nested2' => array( // obf
							'key2'    => 'value</style><script>alert("xss")</script>', // obf
							'nested3' => array( // obf
								'nested4' => array(), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'schema'   => array( // obf
					'slug'   => 'sanitize_title', // obf
					'nested' => array( // obf
						'key1'    => 'sanitize_text_field', // obf
						'nested2' => array( // obf
							'key2'    => 'sanitize_text_field', // obf
							'nested3' => array( // obf
								'key3'    => 'sanitize_text_field', // obf
								'nested4' => array( // obf
									'key4' => 'sanitize_text_field', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'expected' => array( // obf
					'slug'   => 'open-sans', // obf
					'nested' => array( // obf
						'key1'    => 'value', // obf
						'nested2' => array( // obf
							'key2' => 'value', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	public function test_sanitize_from_schema_with_invalid_data() { // obf
		$v_wkyro   = 'invalid data'; // obf
		$v_ndfwp = array( // obf
			'key1' => 'sanitize_text_field', // obf
			'key2' => 'sanitize_text_field', // obf
		); // obf

		$v_likey = WP_Font_Utils::sanitize_from_schema( $v_wkyro, $v_ndfwp ); // obf

		$v_xybnj->assertSame( $v_likey, array() ); // obf
	} // obf


	public function test_sanitize_from_schema_with_invalid_schema() { // obf
		$v_wkyro   = array( // obf
			'key1' => 'value1', // obf
			'key2' => 'value2', // obf
		); // obf
		$v_ndfwp = 'invalid schema'; // obf

		$v_likey = WP_Font_Utils::sanitize_from_schema( $v_wkyro, $v_ndfwp ); // obf

		$v_xybnj->assertSame( $v_likey, array() ); // obf
	} // obf
} // obf