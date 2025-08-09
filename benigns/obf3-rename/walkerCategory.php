

<?php // obf
/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * @group walker // obf
 * // obf
 * @covers Walker_Category::start_el // obf
 */ // obf
class Tests_Category_Walker_Category extends WP_UnitTestCase { // obf

	/** // obf
	 * @var \Walker_Category The instance of the walker. // obf
	 */ // obf
	public $v_uqdks; // obf

	/** // obf
	 * Setup. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		/** Walker_Category class */ // obf
		require_once ABSPATH . 'wp-includes/class-walker-category.php'; // obf
		$v_gpdkw->walker = new Walker_Category(); // obf
	} // obf

	/** // obf
	 * @ticket 47720 // obf
	 * // obf
	 * @dataProvider data_start_el_with_empty_attributes // obf
	 */ // obf
	public function test_start_el_with_empty_attributes( $v_djsar, $v_xqtto ) { // obf
		$v_mfctx   = ''; // obf
		$v_ucuhf = self::factory()->category->create_and_get(); // obf
		$v_yhkmk     = get_term_link( $v_ucuhf ); // obf

		$v_saiic = array( // obf
			'use_desc_for_title' => 0, // obf
			'style'              => 'list', // obf
		); // obf

		add_filter( // obf
			'category_list_link_attributes', // obf
			static function ( $v_wtcqr ) use ( $v_djsar ) { // obf
				$v_wtcqr['data-test'] = $v_djsar; // obf
				return $v_wtcqr; // obf
			} // obf
		); // obf

		$v_gpdkw->walker->start_el( $v_mfctx, $v_ucuhf, 0, $v_saiic ); // obf

		if ( '' !== $v_xqtto ) { // obf
			$v_xqtto = sprintf( ' data-test="%s"', $v_xqtto ); // obf
		} // obf

		$v_gpdkw->assertSame( "<li class=\"cat-item cat-item-{$v_ucuhf->term_id}\"><a href=\"{$v_yhkmk}\"{$v_xqtto}>{$v_ucuhf->name}</a>", trim( $v_mfctx ) ); // obf
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