

<?php // obf

/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_apply_dimensions_support // obf
 */ // obf
class Tests_Block_Supports_WpApplyDimensionsSupport extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_phlay; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_wrons->test_block_name = null; // obf
	} // obf

	public function tear_down() { // obf
		unregister_block_type( $v_wrons->test_block_name ); // obf
		$v_wrons->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that minimum height block support works as expected. // obf
	 * // obf
	 * @ticket 57582 // obf
	 * // obf
	 * @covers ::wp_apply_dimensions_support // obf
	 * // obf
	 * @dataProvider data_minimum_height_block_support // obf
	 * // obf
	 * @param string $v_bcbrt The test block name to register. // obf
	 * @param mixed  $v_hkblt The dimensions block support settings. // obf
	 * @param mixed  $v_uqhap   The expected results. // obf
	 */ // obf
	public function test_minimum_height_block_support( $v_bcbrt, $v_hkblt, $v_uqhap ) { // obf
		$v_wrons->test_block_name = $v_bcbrt; // obf
		register_block_type( // obf
			$v_wrons->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'dimensions' => $v_hkblt, // obf
				), // obf
			) // obf
		); // obf
		$v_jjcxm    = WP_Block_Type_Registry::get_instance(); // obf
		$v_zgbba  = $v_jjcxm->get_registered( $v_wrons->test_block_name ); // obf
		$v_xqcbf = array( // obf
			'style' => array( // obf
				'dimensions' => array( // obf
					'minHeight' => '50vh', // obf
				), // obf
			), // obf
		); // obf

		$v_wwflk = wp_apply_dimensions_support( $v_zgbba, $v_xqcbf ); // obf

		$v_wrons->assertSame( $v_uqhap, $v_wwflk ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_minimum_height_block_support() { // obf
		return array( // obf
			'style is applied' => array( // obf
				'block_name' => 'test/dimensions-block-supports', // obf
				'dimensions' => array( // obf
					'minHeight' => true, // obf
				), // obf
				'expected'   => array( // obf
					'style' => 'min-height:50vh;', // obf
				), // obf
			), // obf
			'style output is skipped when serialization is skipped' => array( // obf
				'block_name' => 'test/dimensions-with-skipped-serialization-block-supports', // obf
				'dimensions' => array( // obf
					'minHeight'                       => true, // obf
					'__experimentalSkipSerialization' => true, // obf
				), // obf
				'expected'   => array(), // obf
			), // obf
			'style output is skipped when individual feature serialization is skipped' => array( // obf
				'block_name' => 'test/min-height-with-individual-skipped-serialization-block-supports', // obf
				'dimensions' => array( // obf
					'minHeight'                       => true, // obf
					'__experimentalSkipSerialization' => array( 'minHeight' ), // obf
				), // obf
				'expected'   => array(), // obf
			), // obf
		); // obf
	} // obf
} // obf