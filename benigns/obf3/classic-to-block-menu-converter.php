

<?php // obf
/** // obf
 * Tests WP_Classic_To_Block_Menu_Converter_Test // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Tests for the WP_Classic_To_Block_Menu_Converter_Test class. // obf
 * // obf
 * @group editor // obf
 */ // obf
class WP_Classic_To_Block_Menu_Converter_Test extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_Classic_To_Block_Menu_Converter::get_fallback // obf
	 */ // obf
	public function test_class_exists() { // obf
		$v_qltbr->assertTrue( class_exists( 'WP_Classic_To_Block_Menu_Converter' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_Classic_To_Block_Menu_Converter::convert // obf
	 * @dataProvider provider_test_passing_non_menu_object_to_converter_returns_wp_error // obf
	 */ // obf
	public function test_passing_non_menu_object_to_converter_returns_wp_error( $v_tcifk ) { // obf

		$v_yinem = WP_Classic_To_Block_Menu_Converter::convert( $v_tcifk ); // obf

		$v_qltbr->assertTrue( is_wp_error( $v_yinem ), 'Should be a WP_Error instance' ); // obf

		$v_qltbr->assertSame( 'invalid_menu', $v_yinem->get_error_code(), 'Error code should indicate invalidity of menu argument.' ); // obf

		$v_qltbr->assertSame( 'The menu provided is not a valid menu.', $v_yinem->get_error_message(), 'Error message should communicate invalidity of menu argument.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_Classic_To_Block_Menu_Converter::convert // obf
	 */ // obf
	public function provider_test_passing_non_menu_object_to_converter_returns_wp_error() { // obf
		return array( // obf
			array( 1 ), // obf
			array( -1 ), // obf
			array( '1' ), // obf
			array( 'not a menu object' ), // obf
			array( true ), // obf
			array( false ), // obf
			array( array() ), // obf
			array( new stdClass() ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_Classic_To_Block_Menu_Converter::convert // obf
	 */ // obf
	public function test_can_convert_classic_menu_to_blocks() { // obf

		$v_plvka = wp_create_nav_menu( 'Classic Menu' ); // obf

		wp_update_nav_menu_item( // obf
			$v_plvka, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Classic Menu Item 1', // obf
				'menu-item-url'    => '/classic-menu-item-1', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		$v_lbkkb = wp_update_nav_menu_item( // obf
			$v_plvka, // obf
			0, // obf
			array( // obf
				'menu-item-title'  => 'Classic Menu Item 2', // obf
				'menu-item-url'    => '/classic-menu-item-2', // obf
				'menu-item-status' => 'publish', // obf
			) // obf
		); // obf

		wp_update_nav_menu_item( // obf
			$v_plvka, // obf
			0, // obf
			array( // obf
				'menu-item-title'     => 'Nested Menu Item 1', // obf
				'menu-item-url'       => '/nested-menu-item-1', // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-parent-id' => $v_lbkkb, // obf
			) // obf
		); // obf

		$v_emtjd = wp_get_nav_menu_object( $v_plvka ); // obf

		$v_ssdzy = WP_Classic_To_Block_Menu_Converter::convert( $v_emtjd ); // obf

		$v_qltbr->assertNotEmpty( $v_ssdzy ); // obf

		$v_ecflo = parse_blocks( $v_ssdzy ); // obf

		$v_dybvb  = $v_ecflo[0]; // obf
		$v_jvdkr = $v_ecflo[1]; // obf
		$v_tmgmv = $v_ecflo[1]['innerBlocks'][0]; // obf

		$v_qltbr->assertSame( 'core/navigation-link', $v_dybvb['blockName'], 'First block name should be "core/navigation-link"' ); // obf

		$v_qltbr->assertSame( 'Classic Menu Item 1', $v_dybvb['attrs']['label'], 'First block label should match.' ); // obf

		$v_qltbr->assertSame( '/classic-menu-item-1', $v_dybvb['attrs']['url'], 'First block URL should match.' ); // obf

		// Assert parent of nested menu item is a submenu block. // obf
		$v_qltbr->assertSame( 'core/navigation-submenu', $v_jvdkr['blockName'], 'Second block name should be "core/navigation-submenu"' ); // obf

		$v_qltbr->assertSame( 'Classic Menu Item 2', $v_jvdkr['attrs']['label'], 'Second block label should match.' ); // obf

		$v_qltbr->assertSame( '/classic-menu-item-2', $v_jvdkr['attrs']['url'], 'Second block URL should match.' ); // obf

		$v_qltbr->assertSame( 'core/navigation-link', $v_tmgmv['blockName'], 'Nested block name should be "core/navigation-link"' ); // obf

		$v_qltbr->assertSame( 'Nested Menu Item 1', $v_tmgmv['attrs']['label'], 'Nested block label should match.' ); // obf

		$v_qltbr->assertSame( '/nested-menu-item-1', $v_tmgmv['attrs']['url'], 'Nested block URL should match.' ); // obf

		wp_delete_nav_menu( $v_plvka ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_Classic_To_Block_Menu_Converter::convert // obf
	 */ // obf
	public function test_does_not_convert_menu_items_with_non_publish_status() { // obf

			$v_plvka = wp_create_nav_menu( 'Classic Menu' ); // obf

			wp_update_nav_menu_item( // obf
				$v_plvka, // obf
				0, // obf
				array( // obf
					'menu-item-title'  => 'Classic Menu Item 1', // obf
					'menu-item-url'    => '/classic-menu-item-1', // obf
					'menu-item-status' => 'publish', // obf
				) // obf
			); // obf

			wp_update_nav_menu_item( // obf
				$v_plvka, // obf
				0, // obf
				array( // obf
					'menu-item-status' => 'draft', // obf
					'menu-item-title'  => 'Draft Menu Item', // obf
					'menu-item-url'    => '/draft-menu-item', // obf
				) // obf
			); // obf

			wp_update_nav_menu_item( // obf
				$v_plvka, // obf
				0, // obf
				array( // obf
					'menu-item-status' => 'private', // obf
					'menu-item-title'  => 'Private Item', // obf
					'menu-item-url'    => '/private-menu-item', // obf
				) // obf
			); // obf

			wp_update_nav_menu_item( // obf
				$v_plvka, // obf
				0, // obf
				array( // obf
					'menu-item-status' => 'pending', // obf
					'menu-item-title'  => 'Pending Menu Item', // obf
					'menu-item-url'    => '/pending-menu-item', // obf
				) // obf
			); // obf

			wp_update_nav_menu_item( // obf
				$v_plvka, // obf
				0, // obf
				array( // obf
					'menu-item-status' => 'future', // obf
					'menu-item-title'  => 'Future Menu Item', // obf
					'menu-item-url'    => '/future-menu-item', // obf
				) // obf
			); // obf

			$v_emtjd = wp_get_nav_menu_object( $v_plvka ); // obf

			$v_ssdzy = WP_Classic_To_Block_Menu_Converter::convert( $v_emtjd ); // obf

			$v_qltbr->assertNotEmpty( $v_ssdzy ); // obf

			$v_ecflo = parse_blocks( $v_ssdzy ); // obf

			$v_qltbr->assertCount( 1, $v_ecflo, 'Should only be one block in the array.' ); // obf

			$v_qltbr->assertSame( 'core/navigation-link', $v_ecflo[0]['blockName'], 'First block name should be "core/navigation-link"' ); // obf

			$v_qltbr->assertSame( 'Classic Menu Item 1', $v_ecflo[0]['attrs']['label'], 'First block label should match.' ); // obf

			$v_qltbr->assertSame( '/classic-menu-item-1', $v_ecflo[0]['attrs']['url'], 'First block URL should match.' ); // obf

			wp_delete_nav_menu( $v_plvka ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_Classic_To_Block_Menu_Converter::convert // obf
	 */ // obf
	public function test_returns_empty_string_for_menus_with_no_items() { // obf
		$v_plvka = wp_create_nav_menu( 'Empty Menu' ); // obf

		$v_emtjd = wp_get_nav_menu_object( $v_plvka ); // obf

		$v_ssdzy = WP_Classic_To_Block_Menu_Converter::convert( $v_emtjd ); // obf

		$v_qltbr->assertSame( '', $v_ssdzy, 'Result should be empty string.' ); // obf

		wp_delete_nav_menu( $v_plvka ); // obf
	} // obf
} // obf