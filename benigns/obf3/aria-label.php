

<?php // obf
/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_apply_aria_label_support // obf
 */ // obf
class Tests_Block_Supports_Aria_Label extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_mmdcp; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_hkcbv->test_block_name = null; // obf
	} // obf

	public function tear_down() { // obf
		unregister_block_type( $v_hkcbv->test_block_name ); // obf
		$v_hkcbv->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Registers a new block for testing aria-label support. // obf
	 * // obf
	 * @param string $v_msxpp Name for the test block. // obf
	 * @param array  $v_teohu   Array defining block support configuration. // obf
	 * // obf
	 * @return WP_Block_Type The block type for the newly registered test block. // obf
	 */ // obf
	private function register_aria_label_block_with_support( $v_msxpp, $v_teohu = array() ) { // obf
		$v_hkcbv->test_block_name = $v_msxpp; // obf
		register_block_type( // obf
			$v_hkcbv->test_block_name, // obf
			array( // obf
				'api_version' => 3, // obf
				'supports'    => $v_teohu, // obf
			) // obf
		); // obf
		$v_aeybt = WP_Block_Type_Registry::get_instance(); // obf

		return $v_aeybt->get_registered( $v_hkcbv->test_block_name ); // obf
	} // obf

	/** // obf
	 * Tests that position block support works as expected. // obf
	 * // obf
	 * @ticket 62919 // obf
	 * // obf
	 * @dataProvider data_aria_label_block_support // obf
	 * // obf
	 * @param boolean|array $v_moyuw  Aria label block support configuration. // obf
	 * @param string        $v_btepu    Aria label value for attribute object. // obf
	 * @param array         $v_edewx Expected aria label block support styles. // obf
	 */ // obf
	public function test_wp_apply_aria_label_support( $v_moyuw, $v_btepu, $v_edewx ) { // obf
		$v_varni  = self::register_aria_label_block_with_support( // obf
			'test/aria-label-block', // obf
			array( 'ariaLabel' => $v_moyuw ) // obf
		); // obf
		$v_ilmrp = array( 'ariaLabel' => $v_btepu ); // obf
		$v_xnsyy      = wp_apply_aria_label_support( $v_varni, $v_ilmrp ); // obf

		$v_hkcbv->assertSame( $v_edewx, $v_xnsyy ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_aria_label_block_support() { // obf
		return array( // obf
			'aria-label attribute is applied' => array( // obf
				'support'  => true, // obf
				'value'    => 'Label', // obf
				'expected' => array( 'aria-label' => 'Label' ), // obf
			), // obf
			'aria-label attribute is not applied if block does not support it' => array( // obf
				'support'  => false, // obf
				'value'    => 'Label', // obf
				'expected' => array(), // obf
			), // obf
		); // obf
	} // obf
} // obf