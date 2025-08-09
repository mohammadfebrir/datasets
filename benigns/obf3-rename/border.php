

<?php // obf
/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_apply_border_support // obf
 */ // obf
class Tests_Block_Supports_Border extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_jeldu; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_uhzgi->test_block_name = null; // obf
	} // obf

	public function tear_down() { // obf
		unregister_block_type( $v_uhzgi->test_block_name ); // obf
		$v_uhzgi->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_border_color_slug_with_numbers_is_kebab_cased_properly() { // obf
		$v_uhzgi->test_block_name = 'test/border-color-slug-with-numbers-is-kebab-cased-properly'; // obf
		register_block_type( // obf
			$v_uhzgi->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'borderColor' => array( // obf
						'type' => 'string', // obf
					), // obf
					'style'       => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'__experimentalBorder' => array( // obf
						'color'  => true, // obf
						'radius' => true, // obf
						'width'  => true, // obf
						'style'  => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_oesgs   = WP_Block_Type_Registry::get_instance(); // obf
		$v_eqwlu = $v_oesgs->get_registered( $v_uhzgi->test_block_name ); // obf
		$v_ugmmb = array( // obf
			'borderColor' => 'red', // obf
			'style'       => array( // obf
				'border' => array( // obf
					'radius' => '10px', // obf
					'width'  => '1px', // obf
					'style'  => 'dashed', // obf
				), // obf
			), // obf
		); // obf

		$v_rcyjq   = wp_apply_border_support( $v_eqwlu, $v_ugmmb ); // obf
		$v_oxhit = array( // obf
			'class' => 'has-border-color has-red-border-color', // obf
			'style' => 'border-radius:10px;border-style:dashed;border-width:1px;', // obf
		); // obf

		$v_uhzgi->assertSame( $v_oxhit, $v_rcyjq ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_border_with_skipped_serialization_block_supports() { // obf
		$v_uhzgi->test_block_name = 'test/border-with-skipped-serialization-block-supports'; // obf
		register_block_type( // obf
			$v_uhzgi->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'__experimentalBorder' => array( // obf
						'color'                           => true, // obf
						'radius'                          => true, // obf
						'width'                           => true, // obf
						'style'                           => true, // obf
						'__experimentalSkipSerialization' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_oesgs   = WP_Block_Type_Registry::get_instance(); // obf
		$v_eqwlu = $v_oesgs->get_registered( $v_uhzgi->test_block_name ); // obf
		$v_ugmmb = array( // obf
			'style' => array( // obf
				'border' => array( // obf
					'color'  => '#eeeeee', // obf
					'width'  => '1px', // obf
					'style'  => 'dotted', // obf
					'radius' => '10px', // obf
				), // obf
			), // obf
		); // obf

		$v_rcyjq   = wp_apply_border_support( $v_eqwlu, $v_ugmmb ); // obf
		$v_oxhit = array(); // obf

		$v_uhzgi->assertSame( $v_oxhit, $v_rcyjq ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_radius_with_individual_skipped_serialization_block_supports() { // obf
		$v_uhzgi->test_block_name = 'test/radius-with-individual-skipped-serialization-block-supports'; // obf
		register_block_type( // obf
			$v_uhzgi->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'__experimentalBorder' => array( // obf
						'color'                           => true, // obf
						'radius'                          => true, // obf
						'width'                           => true, // obf
						'style'                           => true, // obf
						'__experimentalSkipSerialization' => array( 'radius', 'color' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_oesgs   = WP_Block_Type_Registry::get_instance(); // obf
		$v_eqwlu = $v_oesgs->get_registered( $v_uhzgi->test_block_name ); // obf
		$v_ugmmb = array( // obf
			'style' => array( // obf
				'border' => array( // obf
					'color'  => '#eeeeee', // obf
					'width'  => '1px', // obf
					'style'  => 'dotted', // obf
					'radius' => '10px', // obf
				), // obf
			), // obf
		); // obf

		$v_rcyjq   = wp_apply_border_support( $v_eqwlu, $v_ugmmb ); // obf
		$v_oxhit = array( // obf
			'style' => 'border-style:dotted;border-width:1px;', // obf
		); // obf

		$v_uhzgi->assertSame( $v_oxhit, $v_rcyjq ); // obf
	} // obf
} // obf