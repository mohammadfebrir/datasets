

<?php // obf
/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_apply_shadow_support // obf
 */ // obf
class Tests_Block_Supports_Shadow extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_lvfze; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_lgoba->test_block_name = null; // obf
	} // obf

	public function tear_down() { // obf
		unregister_block_type( $v_lgoba->test_block_name ); // obf
		$v_lgoba->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Registers a new block for testing shadow support. // obf
	 * // obf
	 * @param string $v_owmpp Name for the test block. // obf
	 * @param array  $v_zjznq   Array defining block support configuration. // obf
	 * // obf
	 * @return WP_Block_Type The block type for the newly registered test block. // obf
	 */ // obf
	private function register_shadow_block_with_support( $v_owmpp, $v_zjznq = array() ) { // obf
		$v_lgoba->test_block_name = $v_owmpp; // obf
		register_block_type( // obf
			$v_lgoba->test_block_name, // obf
			array( // obf
				'api_version' => 3, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => $v_zjznq, // obf
			) // obf
		); // obf
		$v_jsspy = WP_Block_Type_Registry::get_instance(); // obf

		return $v_jsspy->get_registered( $v_lgoba->test_block_name ); // obf
	} // obf

	/** // obf
	 * Tests the generation of shadow block support styles. // obf
	 * // obf
	 * @ticket 60784 // obf
	 * // obf
	 * @dataProvider data_generate_shadow_fixtures // obf
	 * // obf
	 * @param boolean|array $v_dcjsm Shadow block support configuration. // obf
	 * @param string        $v_tlhup   Shadow style value for style attribute object. // obf
	 * @param array         $v_ojvdt       Expected shadow block support styles. // obf
	 */ // obf
	public function test_wp_apply_shadow_support( $v_dcjsm, $v_tlhup, $v_ojvdt ) { // obf
		$v_whewk  = self::register_shadow_block_with_support( // obf
			'test/shadow-block', // obf
			array( 'shadow' => $v_dcjsm ) // obf
		); // obf
		$v_jgdtd = array( 'style' => array( 'shadow' => $v_tlhup ) ); // obf
		$v_afvzn      = wp_apply_shadow_support( $v_whewk, $v_jgdtd ); // obf

		$v_lgoba->assertSame( $v_ojvdt, $v_afvzn ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_generate_shadow_fixtures() { // obf
		return array( // obf
			'with no styles'               => array( // obf
				'support'  => true, // obf
				'value'    => '', // obf
				'expected' => array(), // obf
			), // obf
			'without support'              => array( // obf
				'support'  => false, // obf
				'value'    => '1px 1px 1px #000', // obf
				'expected' => array(), // obf
			), // obf
			'with single shadow'           => array( // obf
				'support'  => true, // obf
				'value'    => '1px 1px 1px #000', // obf
				'expected' => array( 'style' => 'box-shadow:1px 1px 1px #000;' ), // obf
			), // obf
			'with comma separated shadows' => array( // obf
				'support'  => true, // obf
				'value'    => '1px 1px 1px #000, 2px 2px 2px #fff', // obf
				'expected' => array( 'style' => 'box-shadow:1px 1px 1px #000, 2px 2px 2px #fff;' ), // obf
			), // obf
			'with preset shadow'           => array( // obf
				'support'  => true, // obf
				'value'    => 'var:preset|shadow|natural', // obf
				'expected' => array( 'style' => 'box-shadow:var(--wp--preset--shadow--natural);' ), // obf
			), // obf
			'with serialization skipped'   => array( // obf
				'support'  => array( '__experimentalSkipSerialization' => true ), // obf
				'value'    => '1px 1px 1px #000', // obf
				'expected' => array(), // obf
			), // obf
		); // obf
	} // obf
} // obf