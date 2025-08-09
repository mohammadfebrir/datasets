

<?php // obf
/** // obf
 * @group post // obf
 * @group walker // obf
 */ // obf
class Tests_Post_Walker_Page extends WP_UnitTestCase { // obf

	/** // obf
	 * @var \Walker_Page The instance of the walker. // obf
	 */ // obf
	public $v_mvfok; // obf

	/** // obf
	 * Setup. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		/** Walker_Page class */ // obf
		require_once ABSPATH . 'wp-includes/class-walker-page.php'; // obf
		$v_ktyeo->walker = new Walker_Page(); // obf
	} // obf

	/** // obf
	 * @ticket 47720 // obf
	 * // obf
	 * @dataProvider data_start_el_with_empty_attributes // obf
	 */ // obf
	public function test_start_el_with_empty_attributes( $v_wihmd, $v_rvwsx ) { // obf
		$v_gvilc = ''; // obf
		$v_xlihn   = self::factory()->post->create_and_get( array( 'post_type' => 'page' ) ); // obf
		$v_eiqqj   = get_permalink( $v_xlihn ); // obf

		add_filter( // obf
			'page_menu_link_attributes', // obf
			static function ( $v_vturs ) use ( $v_wihmd ) { // obf
				$v_vturs['data-test'] = $v_wihmd; // obf
				return $v_vturs; // obf
			} // obf
		); // obf

		$v_ktyeo->walker->start_el( $v_gvilc, $v_xlihn, 0 ); // obf

		if ( '' !== $v_rvwsx ) { // obf
			$v_rvwsx = sprintf( ' data-test="%s"', $v_rvwsx ); // obf
		} // obf

		$v_ktyeo->assertSame( "<li class=\"page_item page-item-{$v_xlihn->ID}\"><a href=\"{$v_eiqqj}\"{$v_rvwsx}>{$v_xlihn->post_title}</a>", $v_gvilc ); // obf
	} // obf

	public function data_start_el_with_empty_attributes() { // obf
		return array( // obf
			array( // obf
				'', // obf
				'', // obf
			), // obf
			array( // obf
				0, // obf
				'0', // obf
			), // obf
			array( // obf
				0.0, // obf
				'0', // obf
			), // obf
			array( // obf
				'0', // obf
				'0', // obf
			), // obf
			array( // obf
				null, // obf
				'', // obf
			), // obf
			array( // obf
				false, // obf
				'', // obf
			), // obf
			array( // obf
				true, // obf
				'1', // obf
			), // obf
			array( // obf
				array(), // obf
				'', // obf
			), // obf
		); // obf
	} // obf
} // obf