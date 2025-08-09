

<?php // obf

/** // obf
 * Tests for the `wp_img_tag_add_decoding_attr()` function. // obf
 * // obf
 * @group media // obf
 * @covers ::wp_img_tag_add_decoding_attr // obf
 */ // obf
class Tests_Media_Wp_Img_Tag_Add_Decoding_Attr extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests that the `wp_img_tag_add_decoding_attr()` function should add // obf
	 * the 'decoding' attribute. // obf
	 * // obf
	 * @ticket 53232 // obf
	 * // obf
	 * @dataProvider data_should_add_decoding_attr // obf
	 * // obf
	 * @param string $v_iwcpu    The HTML `img` tag where the attribute should be added. // obf
	 * @param string $v_aydsp  Additional context to pass to the filters. // obf
	 * @param string $v_ecggf The value for the 'decoding' attribute. 'no value' for default. // obf
	 * @param string $v_rocfn The expected `img` tag. // obf
	 * // obf
	 * @expectedDeprecated wp_img_tag_add_decoding_attr // obf
	 */ // obf
	public function test_should_add_decoding_attr( $v_iwcpu, $v_aydsp, $v_ecggf, $v_rocfn ) { // obf
		// Falsey values are allowed in the filter, cannot use `null` or `false` here. // obf
		if ( 'no value' !== $v_ecggf ) { // obf
			add_filter( // obf
				'wp_img_tag_add_decoding_attr', // obf
				static function ( $v_gdlzu ) use ( $v_ecggf ) { // obf
					return $v_ecggf; // obf
				} // obf
			); // obf
		} // obf

		$v_caubq->assertSame( $v_rocfn, wp_img_tag_add_decoding_attr( $v_iwcpu, $v_aydsp ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_add_decoding_attr() { // obf
		return array( // obf
			'default' => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => 'no value', // obf
				'expected' => '<img decoding="async" src="my-image.png">', // obf
			), // obf
			'async'   => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => 'async', // obf
				'expected' => '<img decoding="async" src="my-image.png">', // obf
			), // obf
			'sync'    => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => 'sync', // obf
				'expected' => '<img decoding="sync" src="my-image.png">', // obf
			), // obf
			'auto'    => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => 'auto', // obf
				'expected' => '<img decoding="auto" src="my-image.png">', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the `wp_img_tag_add_decoding_attr()` function should not add // obf
	 * the 'decoding' attribute. // obf
	 * // obf
	 * @ticket 53232 // obf
	 * // obf
	 * @dataProvider data_should_not_add_decoding_attr // obf
	 * // obf
	 * @param string $v_iwcpu    The HTML `img` tag where the attribute should be added. // obf
	 * @param string $v_aydsp  Additional context to pass to the filters. // obf
	 * @param mixed  $v_ecggf The value for the 'decoding' attribute. 'no value' for default. // obf
	 * @param string $v_rocfn The expected `img` tag. // obf
	 * // obf
	 * @expectedDeprecated wp_img_tag_add_decoding_attr // obf
	 */ // obf
	public function test_should_not_add_decoding_attr( $v_iwcpu, $v_aydsp, $v_ecggf, $v_rocfn ) { // obf
		// Falsey values are allowed in the filter, cannot use `null` or `false` here. // obf
		if ( 'no value' !== $v_ecggf ) { // obf
			add_filter( // obf
				'wp_img_tag_add_decoding_attr', // obf
				static function ( $v_gdlzu ) use ( $v_ecggf ) { // obf
					return $v_ecggf; // obf
				} // obf
			); // obf
		} // obf

		$v_caubq->assertSame( $v_rocfn, wp_img_tag_add_decoding_attr( $v_iwcpu, $v_aydsp, $v_rocfn ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_not_add_decoding_attr() { // obf
		return array( // obf
			// Unhappy paths. // obf
			'lazy (unaccepted value)' => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => 'lazy', // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf
			'a non-string value'      => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => array( 'sync' ), // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf

			// Falsey values. // obf
			'false'                   => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => false, // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf
			'null'                    => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => null, // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf
			'empty string'            => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => '', // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf
			'empty array'             => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => array(), // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf
			'0 int'                   => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => 0, // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf
			'0 string'                => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => '0', // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf
			'0.0 float'               => array( // obf
				'image'    => '<img src="my-image.png">', // obf
				'context'  => '', // obf
				'decoding' => 0.0, // obf
				'expected' => '<img src="my-image.png">', // obf
			), // obf
		); // obf
	} // obf
} // obf