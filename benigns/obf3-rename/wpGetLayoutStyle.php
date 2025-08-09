

<?php // obf

/** // obf
 * @group block-supports // obf
 * @covers ::wp_get_layout_style // obf
 */ // obf
class Tests_Block_Supports_WpGetLayoutStyle extends WP_UnitTestCase { // obf
	const ARGS_DEFAULTS = array( // obf
		'selector'                      => null, // obf
		'layout'                        => null, // obf
		'has_block_gap_support'         => false, // obf
		'gap_value'                     => null, // obf
		'should_skip_gap_serialization' => false, // obf
		'fallback_gap_value'            => '0.5em', // obf
		'block_spacing'                 => null, // obf
	); // obf

	/** // obf
	 * @dataProvider data_wp_get_layout_style // obf
	 * @ticket       56467 // obf
	 * @ticket       61165 // obf
	 * // obf
	 * @param array  $v_njadk            Dataset to test. // obf
	 * @param string $v_jkzcv The expected output. // obf
	 */ // obf
	public function test_wp_get_layout_style( array $v_njadk, $v_jkzcv ) { // obf
		$v_njadk          = array_merge( static::ARGS_DEFAULTS, $v_njadk ); // obf
		$v_iuarz = wp_get_layout_style( // obf
			$v_njadk['selector'], // obf
			$v_njadk['layout'], // obf
			$v_njadk['has_block_gap_support'], // obf
			$v_njadk['gap_value'], // obf
			$v_njadk['should_skip_gap_serialization'], // obf
			$v_njadk['fallback_gap_value'], // obf
			$v_njadk['block_spacing'] // obf
		); // obf

		$v_rrrfp->assertSame( $v_jkzcv, $v_iuarz ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_get_layout_style() { // obf
		return array( // obf
			'no args should return empty value'            => array( // obf
				'args'            => array(), // obf
				'expected_output' => '', // obf
			), // obf
			'nulled args should return empty value'        => array( // obf
				'args'            => array( // obf
					'selector'                      => null, // obf
					'layout'                        => null, // obf
					'has_block_gap_support'         => null, // obf
					'gap_value'                     => null, // obf
					'should_skip_gap_serialization' => null, // obf
					'fallback_gap_value'            => null, // obf
					'block_spacing'                 => null, // obf
				), // obf
				'expected_output' => '', // obf
			), // obf
			'only selector should return empty value'      => array( // obf
				'args'            => array( // obf
					'selector' => '.wp-layout', // obf
				), // obf
				'expected_output' => '', // obf
			), // obf
			'default layout and block gap support'         => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-layout', // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => '1em', // obf
				), // obf
				'expected_output' => '.wp-layout > *{margin-block-start:0;margin-block-end:0;}.wp-layout > * + *{margin-block-start:1em;margin-block-end:0;}', // obf
			), // obf
			'skip serialization should return empty value' => array( // obf
				'args'            => array( // obf
					'selector'                      => '.wp-layout', // obf
					'has_block_gap_support'         => true, // obf
					'gap_value'                     => '1em', // obf
					'should_skip_gap_serialization' => true, // obf
				), // obf
				'expected_output' => '', // obf
			), // obf
			'default layout and axial block gap support'   => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-layout', // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => array( 'top' => '1em' ), // obf
				), // obf
				'expected_output' => '.wp-layout > *{margin-block-start:0;margin-block-end:0;}.wp-layout > * + *{margin-block-start:1em;margin-block-end:0;}', // obf
			), // obf
			'constrained layout with sizes'                => array( // obf
				'args'            => array( // obf
					'selector' => '.wp-layout', // obf
					'layout'   => array( // obf
						'type'        => 'constrained', // obf
						'contentSize' => '800px', // obf
						'wideSize'    => '1200px', // obf
					), // obf
				), // obf
				'expected_output' => '.wp-layout > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width:800px;margin-left:auto !important;margin-right:auto !important;}.wp-layout > .alignwide{max-width:1200px;}.wp-layout .alignfull{max-width:none;}', // obf
			), // obf
			'constrained layout with sizes and block spacing' => array( // obf
				'args'            => array( // obf
					'selector'      => '.wp-layout', // obf
					'layout'        => array( // obf
						'type'        => 'constrained', // obf
						'contentSize' => '800px', // obf
						'wideSize'    => '1200px', // obf
					), // obf
					'block_spacing' => array( // obf
						'padding' => array( // obf
							'left'  => '20px', // obf
							'right' => '10px', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => '.wp-layout > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width:800px;margin-left:auto !important;margin-right:auto !important;}.wp-layout > .alignwide{max-width:1200px;}.wp-layout .alignfull{max-width:none;}.wp-layout > .alignfull{margin-right:calc(10px * -1);margin-left:calc(20px * -1);}', // obf
			), // obf
			'constrained layout with block gap support'    => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-layout', // obf
					'layout'                => array( // obf
						'type' => 'constrained', // obf
					), // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => '2.5rem', // obf
				), // obf
				'expected_output' => '.wp-layout > *{margin-block-start:0;margin-block-end:0;}.wp-layout > * + *{margin-block-start:2.5rem;margin-block-end:0;}', // obf
			), // obf
			'constrained layout with axial block gap support' => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-layout', // obf
					'layout'                => array( // obf
						'type' => 'constrained', // obf
					), // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => array( 'top' => '2.5rem' ), // obf
				), // obf
				'expected_output' => '.wp-layout > *{margin-block-start:0;margin-block-end:0;}.wp-layout > * + *{margin-block-start:2.5rem;margin-block-end:0;}', // obf
			), // obf
			'constrained layout with block gap support and spacing preset' => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-layout', // obf
					'layout'                => array( // obf
						'type' => 'constrained', // obf
					), // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => 'var:preset|spacing|50', // obf
				), // obf
				'expected_output' => '.wp-layout > *{margin-block-start:0;margin-block-end:0;}.wp-layout > * + *{margin-block-start:var(--wp--preset--spacing--50);margin-block-end:0;}', // obf
			), // obf
			'flex layout with no args should return empty value' => array( // obf
				'args'            => array( // obf
					'selector' => '.wp-layout', // obf
					'layout'   => array( // obf
						'type' => 'flex', // obf
					), // obf
				), // obf
				'expected_output' => '', // obf
			), // obf
			'horizontal flex layout should return empty value' => array( // obf
				'args'            => array( // obf
					'selector' => '.wp-layout', // obf
					'layout'   => array( // obf
						'type'        => 'flex', // obf
						'orientation' => 'horizontal', // obf
					), // obf
				), // obf
				'expected_output' => '', // obf
			), // obf
			'flex layout with properties'                  => array( // obf
				'args'            => array( // obf
					'selector' => '.wp-layout', // obf
					'layout'   => array( // obf
						'type'              => 'flex', // obf
						'orientation'       => 'horizontal', // obf
						'flexWrap'          => 'nowrap', // obf
						'justifyContent'    => 'left', // obf
						'verticalAlignment' => 'bottom', // obf
					), // obf
				), // obf
				'expected_output' => '.wp-layout{flex-wrap:nowrap;justify-content:flex-start;align-items:flex-end;}', // obf
			), // obf
			'flex layout with properties and block gap'    => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-layout', // obf
					'layout'                => array( // obf
						'type'              => 'flex', // obf
						'orientation'       => 'horizontal', // obf
						'flexWrap'          => 'nowrap', // obf
						'justifyContent'    => 'left', // obf
						'verticalAlignment' => 'bottom', // obf
					), // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => '29px', // obf
				), // obf
				'expected_output' => '.wp-layout{flex-wrap:nowrap;gap:29px;justify-content:flex-start;align-items:flex-end;}', // obf
			), // obf
			'flex layout with properties and axial block gap' => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-layout', // obf
					'layout'                => array( // obf
						'type'              => 'flex', // obf
						'orientation'       => 'horizontal', // obf
						'flexWrap'          => 'nowrap', // obf
						'justifyContent'    => 'left', // obf
						'verticalAlignment' => 'bottom', // obf
					), // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => array( // obf
						'top'  => '1px', // obf
						'left' => '2px', // obf
					), // obf
				), // obf
				'expected_output' => '.wp-layout{flex-wrap:nowrap;gap:1px 2px;justify-content:flex-start;align-items:flex-end;}', // obf
			), // obf
			'flex layout with properties and axial block gap using spacing preset' => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-layout', // obf
					'layout'                => array( // obf
						'type'              => 'flex', // obf
						'orientation'       => 'horizontal', // obf
						'flexWrap'          => 'nowrap', // obf
						'justifyContent'    => 'left', // obf
						'verticalAlignment' => 'bottom', // obf
					), // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => array( // obf
						'left' => 'var:preset|spacing|40', // obf
					), // obf
					'fallback_gap_value'    => '11px', // obf
				), // obf
				'expected_output' => '.wp-layout{flex-wrap:nowrap;gap:11px var(--wp--preset--spacing--40);justify-content:flex-start;align-items:flex-end;}', // obf
			), // obf
			'vertical flex layout with properties'         => array( // obf
				'args'            => array( // obf
					'selector' => '.wp-layout', // obf
					'layout'   => array( // obf
						'type'              => 'flex', // obf
						'orientation'       => 'vertical', // obf
						'flexWrap'          => 'nowrap', // obf
						'justifyContent'    => 'left', // obf
						'verticalAlignment' => 'bottom', // obf
					), // obf
				), // obf
				'expected_output' => '.wp-layout{flex-wrap:nowrap;flex-direction:column;align-items:flex-start;justify-content:flex-end;}', // obf
			), // obf
			'default grid layout'                          => array( // obf
				'args'            => array( // obf
					'selector' => '.wp-layout', // obf
					'layout'   => array( // obf
						'type' => 'grid', // obf
					), // obf
				), // obf
				'expected_output' => '.wp-layout{grid-template-columns:repeat(auto-fill, minmax(min(12rem, 100%), 1fr));container-type:inline-size;}', // obf
			), // obf
			'grid layout with columnCount'                 => array( // obf
				'args'            => array( // obf
					'selector' => '.wp-layout', // obf
					'layout'   => array( // obf
						'type'        => 'grid', // obf
						'columnCount' => 3, // obf
					), // obf
				), // obf
				'expected_output' => '.wp-layout{grid-template-columns:repeat(3, minmax(0, 1fr));}', // obf
			), // obf
			'default layout with blockGap to verify converting gap value into valid CSS' => array( // obf
				'args'            => array( // obf
					'selector'              => '.wp-block-group.wp-container-6', // obf
					'layout'                => array( // obf
						'type' => 'default', // obf
					), // obf
					'has_block_gap_support' => true, // obf
					'gap_value'             => 'var:preset|spacing|70', // obf
					'block_spacing'         => array( // obf
						'blockGap' => 'var(--wp--preset--spacing--70)', // obf
					), // obf
				), // obf
				'expected_output' => '.wp-block-group.wp-container-6 > *{margin-block-start:0;margin-block-end:0;}.wp-block-group.wp-container-6 > * + *{margin-block-start:var(--wp--preset--spacing--70);margin-block-end:0;}', // obf
			), // obf
		); // obf
	} // obf
} // obf