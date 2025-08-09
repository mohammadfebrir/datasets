

<?php // obf
/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_apply_colors_support // obf
 */ // obf
class Tests_Block_Supports_Colors extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_afidb; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_oksny->test_block_name = null; // obf
	} // obf

	public function tear_down() { // obf
		unregister_block_type( $v_oksny->test_block_name ); // obf
		$v_oksny->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 54337 // obf
	 */ // obf
	public function test_color_slugs_with_numbers_are_kebab_cased_properly() { // obf
		$v_oksny->test_block_name = 'test/color-slug-with-numbers'; // obf
		register_block_type( // obf
			$v_oksny->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'textColor'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'backgroundColor' => array( // obf
						'type' => 'string', // obf
					), // obf
					'gradient'        => array( // obf
						'type' => 'string', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'color' => array( // obf
						'text'       => true, // obf
						'background' => true, // obf
						'gradients'  => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_kxgls   = WP_Block_Type_Registry::get_instance(); // obf
		$v_chfyt = $v_kxgls->get_registered( $v_oksny->test_block_name ); // obf

		$v_bklqj = array( // obf
			'textColor'       => 'fg1', // obf
			'backgroundColor' => 'bg2', // obf
			'gradient'        => 'gr3', // obf
		); // obf

		$v_rsbgb   = wp_apply_colors_support( $v_chfyt, $v_bklqj ); // obf
		$v_bgfty = array( 'class' => 'has-text-color has-fg-1-color has-background has-bg-2-background-color has-gr-3-gradient-background' ); // obf

		$v_oksny->assertSame( $v_bgfty, $v_rsbgb ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_color_with_skipped_serialization_block_supports() { // obf
		$v_oksny->test_block_name = 'test/color-with-skipped-serialization-block-supports'; // obf
		register_block_type( // obf
			$v_oksny->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'color' => array( // obf
						'text'                            => true, // obf
						'gradients'                       => true, // obf
						'__experimentalSkipSerialization' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kxgls   = WP_Block_Type_Registry::get_instance(); // obf
		$v_chfyt = $v_kxgls->get_registered( $v_oksny->test_block_name ); // obf
		$v_bklqj = array( // obf
			'style' => array( // obf
				'color' => array( // obf
					'text'     => '#d92828', // obf
					'gradient' => 'linear-gradient(135deg,rgb(6,147,227) 0%,rgb(223,13,13) 46%,rgb(155,81,224) 100%)', // obf
				), // obf
			), // obf
		); // obf

		$v_rsbgb   = wp_apply_colors_support( $v_chfyt, $v_bklqj ); // obf
		$v_bgfty = array(); // obf

		$v_oksny->assertSame( $v_bgfty, $v_rsbgb ); // obf
	} // obf

	/** // obf
	 * @ticket 55505 // obf
	 */ // obf
	public function test_gradient_with_individual_skipped_serialization_block_supports() { // obf
		$v_oksny->test_block_name = 'test/gradient-with-individual-skipped-serialization-block-support'; // obf
		register_block_type( // obf
			$v_oksny->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'color' => array( // obf
						'text'                            => true, // obf
						'gradients'                       => true, // obf
						'__experimentalSkipSerialization' => array( 'gradients' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kxgls   = WP_Block_Type_Registry::get_instance(); // obf
		$v_chfyt = $v_kxgls->get_registered( $v_oksny->test_block_name ); // obf
		$v_bklqj = array( // obf
			'style' => array( // obf
				'color' => array( // obf
					'text' => '#d92828', // obf
				), // obf
			), // obf
		); // obf

		$v_rsbgb   = wp_apply_colors_support( $v_chfyt, $v_bklqj ); // obf
		$v_bgfty = array( // obf
			'class' => 'has-text-color', // obf
			'style' => 'color:#d92828;', // obf
		); // obf

		$v_oksny->assertSame( $v_bgfty, $v_rsbgb ); // obf
	} // obf
} // obf