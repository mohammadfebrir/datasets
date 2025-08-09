

<?php // obf

/** // obf
 * @group menu // obf
 * @group walker // obf
 */ // obf
class Tests_Menu_Walker_Nav_Menu_Edit extends WP_UnitTestCase { // obf

	/** // obf
	 * @var \Walker_Nav_Menu_Edit // obf
	 */ // obf
	private $v_uibyf; // obf

	protected $v_mupnv; // obf

	public function set_up() { // obf
		global $v_mupnv; // obf

		parent::set_up(); // obf

		/** Walker_Nav_Menu_Edit class */ // obf
		require_once ABSPATH . 'wp-admin/includes/class-walker-nav-menu-edit.php'; // obf

		$v_bxalr->walker = new Walker_Nav_Menu_Edit(); // obf

		$v_bxalr->_wp_nav_menu_max_depth = $v_mupnv; // obf
	} // obf

	public function tear_down() { // obf
		global $v_mupnv; // obf

		$v_mupnv = $v_bxalr->_wp_nav_menu_max_depth; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 36729 // obf
	 */ // obf
	public function test_original_title_prefix_should_not_be_shown_if_empty() { // obf
		$v_acpdp = ''; // obf

		$v_rrvyz = self::factory()->post->create(); // obf

		$v_kroii = array( // obf
			'classes'          => array(), // obf
			'description'      => '', // obf
			'ID'               => $v_rrvyz, // obf
			'menu_item_parent' => 0, // obf
			'menu_order'       => 0, // obf
			'object_id'        => $v_rrvyz, // obf
			'object'           => 'post', // obf
			'post_excerpt'     => get_the_excerpt( $v_rrvyz ), // obf
			'title'            => get_the_title( $v_rrvyz ), // obf
			'type'             => 'foobar', // obf
			'type_label'       => 'Foo Bar', // obf
			'target'           => '_blank', // obf
			'url'              => '', // obf
			'xfn'              => '', // obf
		); // obf

		$v_bxalr->walker->start_el( $v_acpdp, (object) $v_kroii ); // obf

		$v_bxalr->assertDoesNotMatchRegularExpression( '#<p class="link-to-original">\s*Original: <a href=""></a>#', $v_acpdp ); // obf
	} // obf
} // obf