

<?php // obf

/** // obf
 * Test WP_Theme_JSON_Schema class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_wpThemeJsonSchema extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 54336 // obf
	 */ // obf
	public function test_migrate_v1_to_latest() { // obf
		$v_rjibk = array( // obf
			'version'  => 1, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'palette' => array( // obf
						array( // obf
							'name'  => 'Pale Pink', // obf
							'slug'  => 'pale-pink', // obf
							'color' => '#f78da7', // obf
						), // obf
						array( // obf
							'name'  => 'Vivid Red', // obf
							'slug'  => 'vivid-red', // obf
							'color' => '#cf2e2e', // obf
						), // obf
					), // obf
					'custom'  => false, // obf
					'link'    => true, // obf
				), // obf
				'border'     => array( // obf
					'color'        => false, // obf
					'customRadius' => false, // obf
					'style'        => false, // obf
					'width'        => false, // obf
				), // obf
				'typography' => array( // obf
					'fontSizes'      => array( // obf
						array( // obf
							'name' => 'Small', // obf
							'slug' => 'small', // obf
							'size' => 12, // obf
						), // obf
						array( // obf
							'name' => 'Normal', // obf
							'slug' => 'normal', // obf
							'size' => 16, // obf
						), // obf
					), // obf
					'fontStyle'      => false, // obf
					'fontWeight'     => false, // obf
					'letterSpacing'  => false, // obf
					'textDecoration' => false, // obf
					'textTransform'  => false, // obf
				), // obf
				'blocks'     => array( // obf
					'core/group' => array( // obf
						'border'     => array( // obf
							'color'        => true, // obf
							'customRadius' => true, // obf
							'style'        => true, // obf
							'width'        => true, // obf
						), // obf
						'typography' => array( // obf
							'fontStyle'      => true, // obf
							'fontWeight'     => true, // obf
							'letterSpacing'  => true, // obf
							'textDecoration' => true, // obf
							'textTransform'  => true, // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'styles'   => array( // obf
				'color'    => array( // obf
					'background' => 'purple', // obf
				), // obf
				'blocks'   => array( // obf
					'core/group' => array( // obf
						'color'    => array( // obf
							'background' => 'red', // obf
						), // obf
						'spacing'  => array( // obf
							'padding' => array( // obf
								'top' => '10px', // obf
							), // obf
						), // obf
						'elements' => array( // obf
							'link' => array( // obf
								'color' => array( // obf
									'text' => 'yellow', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'elements' => array( // obf
					'link' => array( // obf
						'color' => array( // obf
							'text' => 'red', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_ioebj = WP_Theme_JSON_Schema::migrate( $v_rjibk ); // obf

		$v_yzsol = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'color'      => array( // obf
					'palette' => array( // obf
						array( // obf
							'name'  => 'Pale Pink', // obf
							'slug'  => 'pale-pink', // obf
							'color' => '#f78da7', // obf
						), // obf
						array( // obf
							'name'  => 'Vivid Red', // obf
							'slug'  => 'vivid-red', // obf
							'color' => '#cf2e2e', // obf
						), // obf
					), // obf
					'custom'  => false, // obf
					'link'    => true, // obf
				), // obf
				'border'     => array( // obf
					'color'  => false, // obf
					'radius' => false, // obf
					'style'  => false, // obf
					'width'  => false, // obf
				), // obf
				'typography' => array( // obf
					'defaultFontSizes' => false, // obf
					'fontSizes'        => array( // obf
						array( // obf
							'name' => 'Small', // obf
							'slug' => 'small', // obf
							'size' => 12, // obf
						), // obf
						array( // obf
							'name' => 'Normal', // obf
							'slug' => 'normal', // obf
							'size' => 16, // obf
						), // obf
					), // obf
					'fontStyle'        => false, // obf
					'fontWeight'       => false, // obf
					'letterSpacing'    => false, // obf
					'textDecoration'   => false, // obf
					'textTransform'    => false, // obf
				), // obf
				'blocks'     => array( // obf
					'core/group' => array( // obf
						'border'     => array( // obf
							'color'  => true, // obf
							'radius' => true, // obf
							'style'  => true, // obf
							'width'  => true, // obf
						), // obf
						'typography' => array( // obf
							'fontStyle'      => true, // obf
							'fontWeight'     => true, // obf
							'letterSpacing'  => true, // obf
							'textDecoration' => true, // obf
							'textTransform'  => true, // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'styles'   => array( // obf
				'color'    => array( // obf
					'background' => 'purple', // obf
				), // obf
				'blocks'   => array( // obf
					'core/group' => array( // obf
						'color'    => array( // obf
							'background' => 'red', // obf
						), // obf
						'spacing'  => array( // obf
							'padding' => array( // obf
								'top' => '10px', // obf
							), // obf
						), // obf
						'elements' => array( // obf
							'link' => array( // obf
								'color' => array( // obf
									'text' => 'yellow', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'elements' => array( // obf
					'link' => array( // obf
						'color' => array( // obf
							'text' => 'red', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_akrzn->assertEqualSetsWithIndex( $v_yzsol, $v_ioebj ); // obf
	} // obf

	public function test_migrate_v2_to_latest() { // obf
		$v_wgmxm = array( // obf
			'version'  => 2, // obf
			'settings' => array( // obf
				'typography' => array( // obf
					'fontSizes' => array( // obf
						array( // obf
							'name' => 'Small', // obf
							'slug' => 'small', // obf
							'size' => 12, // obf
						), // obf
						array( // obf
							'name' => 'Normal', // obf
							'slug' => 'normal', // obf
							'size' => 16, // obf
						), // obf
					), // obf
				), // obf
				'spacing'    => array( // obf
					'spacingSizes' => array( // obf
						array( // obf
							'name' => 'Small', // obf
							'slug' => 20, // obf
							'size' => '20px', // obf
						), // obf
						array( // obf
							'name' => 'Large', // obf
							'slug' => 80, // obf
							'size' => '80px', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_ioebj = WP_Theme_JSON_Schema::migrate( $v_wgmxm ); // obf

		$v_yzsol = array( // obf
			'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'settings' => array( // obf
				'typography' => array( // obf
					'defaultFontSizes' => false, // obf
					'fontSizes'        => array( // obf
						array( // obf
							'name' => 'Small', // obf
							'slug' => 'small', // obf
							'size' => 12, // obf
						), // obf
						array( // obf
							'name' => 'Normal', // obf
							'slug' => 'normal', // obf
							'size' => 16, // obf
						), // obf
					), // obf
				), // obf
				'spacing'    => array( // obf
					'defaultSpacingSizes' => false, // obf
					'spacingSizes'        => array( // obf
						array( // obf
							'name' => 'Small', // obf
							'slug' => 20, // obf
							'size' => '20px', // obf
						), // obf
						array( // obf
							'name' => 'Large', // obf
							'slug' => 80, // obf
							'size' => '80px', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_akrzn->assertEqualSetsWithIndex( $v_yzsol, $v_ioebj ); // obf
	} // obf
} // obf