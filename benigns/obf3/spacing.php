

<?php // obf
/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_apply_spacing_support // obf
 */ // obf
class Tests_Block_Supports_Spacing extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_flkqq; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_jlnkw->test_block_name = null; // obf
	} // obf

	public function tear_down() { // obf
		unregister_block_type( $v_jlnkw->test_block_name ); // obf
		$v_jlnkw->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_spacing_style_is_applied() { // obf
		$v_jlnkw->test_block_name = 'test/spacing-style-is-applied'; // obf
		register_block_type( // obf
			$v_jlnkw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'spacing' => array( // obf
						'margin'   => true, // obf
						'padding'  => true, // obf
						'blockGap' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_kpfit   = WP_Block_Type_Registry::get_instance(); // obf
		$v_fnjwc = $v_kpfit->get_registered( $v_jlnkw->test_block_name ); // obf
		$v_ylvnf = array( // obf
			'style' => array( // obf
				'spacing' => array( // obf
					'margin'   => array( // obf
						'top'    => '1px', // obf
						'right'  => '2px', // obf
						'bottom' => '3px', // obf
						'left'   => '4px', // obf
					), // obf
					'padding'  => '111px', // obf
					'blockGap' => '2em', // obf
				), // obf
			), // obf
		); // obf

		$v_uejeg   = wp_apply_spacing_support( $v_fnjwc, $v_ylvnf ); // obf
		$v_irkeq = array( // obf
			'style' => 'padding:111px;margin-top:1px;margin-right:2px;margin-bottom:3px;margin-left:4px;', // obf
		); // obf

		$v_jlnkw->assertSame( $v_irkeq, $v_uejeg ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_spacing_with_skipped_serialization_block_supports() { // obf
		$v_jlnkw->test_block_name = 'test/spacing-with-skipped-serialization-block-supports'; // obf
		register_block_type( // obf
			$v_jlnkw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'spacing' => array( // obf
						'margin'                          => true, // obf
						'padding'                         => true, // obf
						'blockGap'                        => true, // obf
						'__experimentalSkipSerialization' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_kpfit   = WP_Block_Type_Registry::get_instance(); // obf
		$v_fnjwc = $v_kpfit->get_registered( $v_jlnkw->test_block_name ); // obf
		$v_ylvnf = array( // obf
			'style' => array( // obf
				'spacing' => array( // obf
					'margin'   => array( // obf
						'top'    => '1px', // obf
						'right'  => '2px', // obf
						'bottom' => '3px', // obf
						'left'   => '4px', // obf
					), // obf
					'padding'  => '111px', // obf
					'blockGap' => '2em', // obf
				), // obf
			), // obf
		); // obf

		$v_uejeg   = wp_apply_spacing_support( $v_fnjwc, $v_ylvnf ); // obf
		$v_irkeq = array(); // obf

		$v_jlnkw->assertSame( $v_irkeq, $v_uejeg ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_margin_with_individual_skipped_serialization_block_supports() { // obf
		$v_jlnkw->test_block_name = 'test/margin-with-individual-skipped-serialization-block-supports'; // obf
		register_block_type( // obf
			$v_jlnkw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'spacing' => array( // obf
						'margin'                          => true, // obf
						'padding'                         => true, // obf
						'blockGap'                        => true, // obf
						'__experimentalSkipSerialization' => array( 'margin' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_kpfit   = WP_Block_Type_Registry::get_instance(); // obf
		$v_fnjwc = $v_kpfit->get_registered( $v_jlnkw->test_block_name ); // obf
		$v_ylvnf = array( // obf
			'style' => array( // obf
				'spacing' => array( // obf
					'padding'  => array( // obf
						'top'    => '1px', // obf
						'right'  => '2px', // obf
						'bottom' => '3px', // obf
						'left'   => '4px', // obf
					), // obf
					'margin'   => '111px', // obf
					'blockGap' => '2em', // obf
				), // obf
			), // obf
		); // obf

		$v_uejeg   = wp_apply_spacing_support( $v_fnjwc, $v_ylvnf ); // obf
		$v_irkeq = array( // obf
			'style' => 'padding-top:1px;padding-right:2px;padding-bottom:3px;padding-left:4px;', // obf
		); // obf

		$v_jlnkw->assertSame( $v_irkeq, $v_uejeg ); // obf
	} // obf
} // obf