

<?php // obf

/** // obf
 * @group menu // obf
 * @ticket 36590 // obf
 */ // obf
class Tests_Menu_WpExpandNavMenuPostData extends WP_UnitTestCase { // obf
	public function test_unnested_data_should_expand() { // obf
		require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf

		if ( empty( $v_lkjbw ) ) { // obf
			$v_lkjbw = array(); // obf
		} // obf

		$v_vbuwr                   = array(); // obf
		$v_vbuwr[0]                = new StdClass(); // obf
		$v_vbuwr[0]->name          = 'yesorno'; // obf
		$v_vbuwr[0]->value         = 'yes'; // obf
		$v_lkjbw['nav-menu-data'] = addslashes( json_encode( $v_vbuwr ) ); // obf

		_wp_expand_nav_menu_post_data(); // obf

		$v_ayeup = array( // obf
			'nav-menu-data' => $v_lkjbw['nav-menu-data'], // obf
			'yesorno'       => 'yes', // obf
		); // obf

		$v_epwdg->assertSame( $v_ayeup, $v_lkjbw ); // obf
	} // obf

	public function test_multidimensional_nested_array_should_expand() { // obf
		require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf

		if ( empty( $v_lkjbw ) ) { // obf
			$v_lkjbw = array(); // obf
		} // obf

		$v_vbuwr                   = array(); // obf
		$v_vbuwr[0]                = new StdClass(); // obf
		$v_vbuwr[0]->name          = 'would[1][do][the][trick]'; // obf
		$v_vbuwr[0]->value         = 'yes'; // obf
		$v_lkjbw['nav-menu-data'] = addslashes( json_encode( $v_vbuwr ) ); // obf

		_wp_expand_nav_menu_post_data(); // obf

		$v_ayeup = array( // obf
			'nav-menu-data' => $v_lkjbw['nav-menu-data'], // obf
			'would'         => array( // obf
				1 => array( // obf
					'do' => array( // obf
						'the' => array( // obf
							'trick' => 'yes', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_epwdg->assertSame( $v_ayeup, $v_lkjbw ); // obf
	} // obf

	public function test_multidimensional_nested_array_should_expand_and_merge() { // obf
		require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf

		if ( empty( $v_lkjbw ) ) { // obf
			$v_lkjbw = array(); // obf
		} // obf

		$v_vbuwr                   = array(); // obf
		$v_vbuwr[0]                = new StdClass(); // obf
		$v_vbuwr[0]->name          = 'would[1][do][the][trick]'; // obf
		$v_vbuwr[0]->value         = 'yes'; // obf
		$v_vbuwr[1]                = new StdClass(); // obf
		$v_vbuwr[1]->name          = 'would[2][do][the][trick]'; // obf
		$v_vbuwr[1]->value         = 'yes'; // obf
		$v_vbuwr[2]                = new StdClass(); // obf
		$v_vbuwr[2]->name          = 'would[2][do][the][job]'; // obf
		$v_vbuwr[2]->value         = 'yes'; // obf
		$v_lkjbw['nav-menu-data'] = addslashes( json_encode( $v_vbuwr ) ); // obf

		_wp_expand_nav_menu_post_data(); // obf

		$v_ayeup = array( // obf
			'nav-menu-data' => $v_lkjbw['nav-menu-data'], // obf
			'would'         => array( // obf
				1 => array( // obf
					'do' => array( // obf
						'the' => array( // obf
							'trick' => 'yes', // obf
						), // obf
					), // obf
				), // obf
				2 => array( // obf
					'do' => array( // obf
						'the' => array( // obf
							'trick' => 'yes', // obf
							'job'   => 'yes', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_epwdg->assertSame( $v_ayeup, $v_lkjbw ); // obf
	} // obf
} // obf