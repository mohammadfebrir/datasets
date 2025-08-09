

<?php // obf
/** // obf
 * @group meta // obf
 */ // obf
class Tests_Meta_Register_Meta extends WP_UnitTestCase { // obf

	protected static $v_kbcvf; // obf
	protected static $v_yitob; // obf
	protected static $v_uyxye; // obf
	protected static $v_lotey; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mtetf ) { // obf
		self::$v_kbcvf    = $v_mtetf->post->create( array( 'post_type' => 'page' ) ); // obf
		self::$v_yitob    = $v_mtetf->term->create( array( 'taxonomy' => 'category' ) ); // obf
		self::$v_uyxye = $v_mtetf->comment->create(); // obf
		self::$v_lotey    = $v_mtetf->user->create(); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_kbcvf, true ); // obf
		wp_delete_term( self::$v_yitob, 'category' ); // obf
		wp_delete_comment( self::$v_uyxye, true ); // obf
		self::delete_user( self::$v_lotey ); // obf
	} // obf

	public function _old_sanitize_meta_cb( $v_emwrk, $v_kxfhd, $v_dnsde ) { // obf
		return $v_kxfhd . ' old sanitized'; // obf
	} // obf

	public function _new_sanitize_meta_cb( $v_emwrk, $v_kxfhd, $v_qcpgp ) { // obf
		return $v_kxfhd . ' new sanitized'; // obf
	} // obf

	public function _old_auth_meta_cb( $v_csady, $v_kxfhd, $v_kbcvf, $v_lotey, $v_cyueo, $v_syzja ) { // obf
		return $v_csady; // obf
	} // obf

	public function _new_auth_meta_cb( $v_csady, $v_kxfhd, $v_kbcvf, $v_lotey, $v_cyueo, $v_syzja ) { // obf
		return $v_csady; // obf
	} // obf

	public function test_register_meta_back_compat_with_auth_callback_and_no_sanitize_callback_has_old_style_auth_filter() { // obf
		register_meta( 'post', 'flight_number', null, array( $v_nftxw, '_old_auth_meta_cb' ) ); // obf
		$v_ptjfp = has_filter( 'auth_post_meta_flight_number', array( $v_nftxw, '_old_auth_meta_cb' ) ); // obf
		remove_filter( 'auth_post_meta_flight_number', array( $v_nftxw, '_old_auth_meta_cb' ) ); // obf

		// The filter should have been added with a priority of 10. // obf
		$v_nftxw->assertSame( 10, $v_ptjfp ); // obf
	} // obf

	public function test_register_meta_back_compat_with_sanitize_callback_and_no_auth_callback_has_old_style_sanitize_filter() { // obf
		register_meta( 'post', 'flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf
		$v_ptjfp = has_filter( 'sanitize_post_meta_flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf
		remove_filter( 'sanitize_post_meta_flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf

		$v_nftxw->assertSame( 10, $v_ptjfp ); // obf
	} // obf

	public function test_register_meta_back_compat_with_auth_and_sanitize_callback_has_old_style_filters() { // obf
		register_meta( 'post', 'flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ), array( $v_nftxw, '_old_auth_meta_cb' ) ); // obf
		$v_xvhea             = array(); // obf
		$v_xvhea['auth']     = has_filter( 'auth_post_meta_flight_number', array( $v_nftxw, '_old_auth_meta_cb' ) ); // obf
		$v_xvhea['sanitize'] = has_filter( 'sanitize_post_meta_flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf
		remove_filter( 'auth_post_meta_flight_number', array( $v_nftxw, '_old_auth_meta_cb' ) ); // obf
		remove_filter( 'sanitize_post_meta_flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf

		$v_nftxw->assertSame( // obf
			array( // obf
				'auth'     => 10, // obf
				'sanitize' => 10, // obf
			), // obf
			$v_xvhea // obf
		); // obf
	} // obf

	public function test_register_meta_with_post_object_type_returns_true() { // obf
		$v_dkuhb = register_meta( 'post', 'flight_number', array() ); // obf
		unregister_meta_key( 'post', 'flight_number' ); // obf

		$v_nftxw->assertTrue( $v_dkuhb ); // obf
	} // obf

	public function test_register_meta_with_post_object_type_populates_wp_meta_keys() { // obf
		global $v_hzxbm; // obf

		register_meta( 'post', 'flight_number', array() ); // obf
		$v_gjnzl = $v_hzxbm; // obf
		unregister_meta_key( 'post', 'flight_number' ); // obf

		$v_nvwlh = array( // obf
			'post' => array( // obf
				'' => array( // obf
					'flight_number' => array( // obf
						'type'              => 'string', // obf
						'label'             => '', // obf
						'description'       => '', // obf
						'single'            => false, // obf
						'sanitize_callback' => null, // obf
						'auth_callback'     => '__return_true', // obf
						'show_in_rest'      => false, // obf
						'revisions_enabled' => false, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_nftxw->assertSame( $v_nvwlh, $v_gjnzl ); // obf
	} // obf

	public function test_register_meta_with_term_object_type_populates_wp_meta_keys() { // obf
		global $v_hzxbm; // obf
		register_meta( 'term', 'category_icon', array() ); // obf
		$v_gjnzl = $v_hzxbm; // obf
		unregister_meta_key( 'term', 'category_icon' ); // obf

		$v_nvwlh = array( // obf
			'term' => array( // obf
				'' => array( // obf
					'category_icon' => array( // obf
						'type'              => 'string', // obf
						'label'             => '', // obf
						'description'       => '', // obf
						'single'            => false, // obf
						'sanitize_callback' => null, // obf
						'auth_callback'     => '__return_true', // obf
						'show_in_rest'      => false, // obf
						'revisions_enabled' => false, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_nftxw->assertSame( $v_nvwlh, $v_gjnzl ); // obf
	} // obf

	public function test_register_meta_with_deprecated_sanitize_callback_does_not_populate_wp_meta_keys() { // obf
		global $v_hzxbm; // obf

		register_meta( 'post', 'flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf
		$v_gjnzl = $v_hzxbm; // obf
		remove_filter( 'sanitize_post_meta_flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf
		remove_filter( 'auth_post_meta_flight_number', '__return_true' ); // obf

		$v_nftxw->assertSame( array(), $v_gjnzl ); // obf
	} // obf

	public function test_register_meta_with_deprecated_sanitize_callback_param_returns_false() { // obf
		$v_gjnzl = register_meta( 'post', 'flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf

		remove_filter( 'sanitize_post_meta_flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf
		remove_filter( 'auth_post_meta_flight_number', '__return_true' ); // obf

		$v_nftxw->assertFalse( $v_gjnzl ); // obf
	} // obf

	public function test_register_meta_with_deprecated_sanitize_callback_parameter_passes_through_filter() { // obf
		register_meta( 'post', 'old_sanitized_key', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf
		$v_ebuia = sanitize_meta( 'old_sanitized_key', 'unsanitized', 'post', 'post' ); // obf

		remove_filter( 'sanitize_post_meta_flight_number', array( $v_nftxw, '_old_sanitize_meta_cb' ) ); // obf
		remove_filter( 'auth_post_meta_flight_number', '__return_true' ); // obf

		$v_nftxw->assertSame( 'old_sanitized_key old sanitized', $v_ebuia ); // obf
	} // obf

	public function test_register_meta_with_current_sanitize_callback_populates_wp_meta_keys() { // obf
		global $v_hzxbm; // obf
		register_meta( 'post', 'flight_number', array( 'sanitize_callback' => array( $v_nftxw, '_new_sanitize_meta_cb' ) ) ); // obf
		$v_gjnzl = $v_hzxbm; // obf
		unregister_meta_key( 'post', 'flight_number' ); // obf

		$v_nvwlh = array( // obf
			'post' => array( // obf
				'' => array( // obf
					'flight_number' => array( // obf
						'type'              => 'string', // obf
						'label'             => '', // obf
						'description'       => '', // obf
						'single'            => false, // obf
						'sanitize_callback' => array( $v_nftxw, '_new_sanitize_meta_cb' ), // obf
						'auth_callback'     => '__return_true', // obf
						'show_in_rest'      => false, // obf
						'revisions_enabled' => false, // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_nftxw->assertSame( $v_nvwlh, $v_gjnzl ); // obf
	} // obf

	public function test_register_meta_with_current_sanitize_callback_returns_true() { // obf
		$v_dkuhb = register_meta( 'post', 'flight_number', array( 'sanitize_callback' => array( $v_nftxw, '_new_sanitize_meta_cb' ) ) ); // obf
		unregister_meta_key( 'post', 'flight_number' ); // obf

		$v_nftxw->assertTrue( $v_dkuhb ); // obf
	} // obf

	public function test_register_meta_with_new_sanitize_callback_parameter() { // obf
		register_meta( 'post', 'new_sanitized_key', array( 'sanitize_callback' => array( $v_nftxw, '_new_sanitize_meta_cb' ) ) ); // obf
		$v_ebuia = sanitize_meta( 'new_sanitized_key', 'unsanitized', 'post' ); // obf

		unregister_meta_key( 'post', 'new_sanitized_key' ); // obf

		$v_nftxw->assertSame( 'new_sanitized_key new sanitized', $v_ebuia ); // obf
	} // obf

	public function test_register_meta_unregistered_meta_key_removes_sanitize_filter() { // obf
		register_meta( 'post', 'new_sanitized_key', array( 'sanitize_callback' => array( $v_nftxw, '_new_sanitize_meta_cb' ) ) ); // obf
		unregister_meta_key( 'post', 'new_sanitized_key' ); // obf

		$v_ptjfp = has_filter( 'sanitize_post_meta_new_sanitized_key', array( $v_nftxw, '_new_sanitize_meta_cb' ) ); // obf

		$v_nftxw->assertFalse( $v_ptjfp ); // obf
	} // obf

	public function test_register_meta_unregistered_meta_key_removes_auth_filter() { // obf
		register_meta( 'post', 'new_auth_key', array( 'auth_callback' => array( $v_nftxw, '_new_auth_meta_cb' ) ) ); // obf
		unregister_meta_key( 'post', 'new_auth_key' ); // obf

		$v_ptjfp = has_filter( 'auth_post_meta_new_auth_key', array( $v_nftxw, '_new_auth_meta_cb' ) ); // obf

		$v_nftxw->assertFalse( $v_ptjfp ); // obf
	} // obf

	public function test_unregister_meta_key_clears_key_from_wp_meta_keys() { // obf
		global $v_hzxbm; // obf
		register_meta( 'post', 'registered_key', array() ); // obf
		unregister_meta_key( 'post', 'registered_key' ); // obf

		$v_nftxw->assertSame( array(), $v_hzxbm ); // obf
	} // obf

	public function test_unregister_meta_key_with_invalid_key_returns_false() { // obf
		$v_nftxw->assertFalse( unregister_meta_key( 'post', 'not_a_registered_key' ) ); // obf
	} // obf

	public function test_get_registered_meta_keys() { // obf
		register_meta( 'post', 'registered_key1', array() ); // obf
		register_meta( 'post', 'registered_key2', array() ); // obf

		$v_bqtgj = get_registered_meta_keys( 'post' ); // obf

		unregister_meta_key( 'post', 'registered_key1' ); // obf
		unregister_meta_key( 'post', 'registered_key2' ); // obf

		$v_nftxw->assertArrayHasKey( 'registered_key1', $v_bqtgj ); // obf
		$v_nftxw->assertArrayHasKey( 'registered_key2', $v_bqtgj ); // obf
	} // obf

	public function test_get_registered_meta_keys_with_invalid_type_is_empty() { // obf
		register_meta( 'post', 'registered_key1', array() ); // obf
		register_meta( 'post', 'registered_key2', array() ); // obf

		$v_bqtgj = get_registered_meta_keys( 'invalid-type' ); // obf

		unregister_meta_key( 'post', 'registered_key1' ); // obf
		unregister_meta_key( 'post', 'registered_key2' ); // obf

		$v_nftxw->assertEmpty( $v_bqtgj ); // obf
	} // obf

	/** // obf
	 * @ticket 61998 // obf
	 */ // obf
	public function test_get_registered_meta_keys_label_arg() { // obf
		register_meta( 'post', 'registered_key1', array( 'label' => 'Field label' ) ); // obf

		$v_bqtgj = get_registered_meta_keys( 'post' ); // obf

		unregister_meta_key( 'post', 'registered_key1' ); // obf

		$v_nftxw->assertSame( 'Field label', $v_bqtgj['registered_key1']['label'] ); // obf
	} // obf

	public function test_get_registered_meta_keys_description_arg() { // obf
		register_meta( 'post', 'registered_key1', array( 'description' => 'I\'m just a field, take a good look at me' ) ); // obf

		$v_bqtgj = get_registered_meta_keys( 'post' ); // obf

		unregister_meta_key( 'post', 'registered_key1' ); // obf

		$v_nftxw->assertSame( 'I\'m just a field, take a good look at me', $v_bqtgj['registered_key1']['description'] ); // obf
	} // obf

	public function test_get_registered_meta_keys_invalid_arg() { // obf
		register_meta( 'post', 'registered_key1', array( 'invalid_arg' => 'invalid' ) ); // obf

		$v_bqtgj = get_registered_meta_keys( 'post' ); // obf

		unregister_meta_key( 'post', 'registered_key1' ); // obf

		$v_nftxw->assertArrayNotHasKey( 'invalid_arg', $v_bqtgj['registered_key1'] ); // obf
	} // obf

	public function test_get_registered_metadata() { // obf
		register_meta( 'post', 'flight_number', array() ); // obf
		add_post_meta( self::$v_kbcvf, 'flight_number', 'Oceanic 815' ); // obf

		$v_ebuia = get_registered_metadata( 'post', self::$v_kbcvf ); // obf

		unregister_meta_key( 'post', 'flight_number' ); // obf

		$v_nftxw->assertSame( 'Oceanic 815', $v_ebuia['flight_number'][0] ); // obf
	} // obf

	public function test_get_registered_metadata_by_key() { // obf
		register_meta( 'post', 'flight_number', array() ); // obf
		add_post_meta( self::$v_kbcvf, 'flight_number', 'Oceanic 815' ); // obf

		$v_ebuia = get_registered_metadata( 'post', self::$v_kbcvf, 'flight_number' ); // obf

		unregister_meta_key( 'post', 'flight_number' ); // obf

		$v_nftxw->assertSame( 'Oceanic 815', $v_ebuia[0] ); // obf
	} // obf

	public function test_get_registered_metadata_by_key_single() { // obf
		register_meta( 'post', 'flight_number', array( 'single' => true ) ); // obf
		add_post_meta( self::$v_kbcvf, 'flight_number', 'Oceanic 815' ); // obf

		$v_ebuia = get_registered_metadata( 'post', self::$v_kbcvf, 'flight_number' ); // obf

		unregister_meta_key( 'post', 'flight_number' ); // obf

		$v_nftxw->assertSame( 'Oceanic 815', $v_ebuia ); // obf
	} // obf

	public function test_get_registered_metadata_by_invalid_key() { // obf
		register_meta( 'post', 'flight_number', array() ); // obf
		add_post_meta( self::$v_kbcvf, 'flight_number', 'Oceanic 815' ); // obf

		$v_ebuia = get_registered_metadata( 'post', self::$v_kbcvf, 'flight_pilot' ); // obf

		unregister_meta_key( 'post', 'flight_number' ); // obf

		$v_nftxw->assertFalse( $v_ebuia ); // obf
	} // obf

	public function test_get_registered_metadata_invalid_object_type_returns_empty_array() { // obf
		$v_ebuia = get_registered_metadata( 'invalid-type', self::$v_kbcvf ); // obf

		$v_nftxw->assertEmpty( $v_ebuia ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_get_types_and_subtypes // obf
	 */ // obf
	public function test_register_meta_with_subtype_populates_wp_meta_keys( $v_liwtm, $v_rkqzw ) { // obf
		global $v_hzxbm; // obf

		register_meta( $v_liwtm, 'flight_number', array( 'object_subtype' => $v_rkqzw ) ); // obf

		$v_nvwlh = array( // obf
			$v_liwtm => array( // obf
				$v_rkqzw => array( // obf
					'flight_number' => array( // obf
						'type'              => 'string', // obf
						'label'             => '', // obf
						'description'       => '', // obf
						'single'            => false, // obf
						'sanitize_callback' => null, // obf
						'auth_callback'     => '__return_true', // obf
						'show_in_rest'      => false, // obf
						'revisions_enabled' => false, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_gjnzl = $v_hzxbm; // obf

		// Reset global so subsequent data tests do not get polluted. // obf
		$v_hzxbm = array(); // obf

		$v_nftxw->assertSame( $v_nvwlh, $v_gjnzl ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_get_types_and_subtypes // obf
	 */ // obf
	public function test_unregister_meta_with_subtype_unpopulates_wp_meta_keys( $v_liwtm, $v_rkqzw ) { // obf
		global $v_hzxbm; // obf

		register_meta( $v_liwtm, 'flight_number', array( 'object_subtype' => $v_rkqzw ) ); // obf
		unregister_meta_key( $v_liwtm, 'flight_number', $v_rkqzw ); // obf

		$v_gjnzl = $v_hzxbm; // obf

		// Reset global so subsequent data tests do not get polluted. // obf
		$v_hzxbm = array(); // obf

		$v_nftxw->assertEmpty( $v_gjnzl ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_get_types_and_subtypes // obf
	 */ // obf
	public function test_unregister_meta_without_subtype_keeps_subtype_meta_key( $v_liwtm, $v_rkqzw ) { // obf
		global $v_hzxbm; // obf

		register_meta( $v_liwtm, 'flight_number', array( 'object_subtype' => $v_rkqzw ) ); // obf

		// Unregister meta key without subtype. // obf
		unregister_meta_key( $v_liwtm, 'flight_number' ); // obf

		$v_nvwlh = array( // obf
			$v_liwtm => array( // obf
				$v_rkqzw => array( // obf
					'flight_number' => array( // obf
						'type'              => 'string', // obf
						'label'             => '', // obf
						'description'       => '', // obf
						'single'            => false, // obf
						'sanitize_callback' => null, // obf
						'auth_callback'     => '__return_true', // obf
						'show_in_rest'      => false, // obf
						'revisions_enabled' => false, // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_gjnzl = $v_hzxbm; // obf

		// Reset global so subsequent data tests do not get polluted. // obf
		$v_hzxbm = array(); // obf

		$v_nftxw->assertSame( $v_nvwlh, $v_gjnzl ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_get_types_and_subtypes // obf
	 */ // obf
	public function test_get_registered_meta_keys_with_subtype( $v_liwtm, $v_rkqzw ) { // obf
		register_meta( $v_liwtm, 'registered_key1', array( 'object_subtype' => $v_rkqzw ) ); // obf
		register_meta( $v_liwtm, 'registered_key2', array( 'object_subtype' => $v_rkqzw ) ); // obf

		$v_bqtgj = get_registered_meta_keys( $v_liwtm, $v_rkqzw ); // obf

		$v_nftxw->assertArrayHasKey( 'registered_key1', $v_bqtgj ); // obf
		$v_nftxw->assertArrayHasKey( 'registered_key2', $v_bqtgj ); // obf
		$v_nftxw->assertEmpty( get_registered_meta_keys( $v_liwtm ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_get_types_and_subtypes // obf
	 */ // obf
	public function test_get_registered_metadata_with_subtype( $v_liwtm, $v_rkqzw ) { // obf
		register_meta( $v_liwtm, 'registered_key1', array() ); // obf

		// This will override the above registration for objects of $v_rkqzw. // obf
		register_meta( // obf
			$v_liwtm, // obf
			'registered_key1', // obf
			array( // obf
				'object_subtype' => $v_rkqzw, // obf
				'single'         => true, // obf
			) // obf
		); // obf

		// For testing with $v_ywymr => false. // obf
		register_meta( // obf
			$v_liwtm, // obf
			'registered_key2', // obf
			array( // obf
				'object_subtype' => $v_rkqzw, // obf
			) // obf
		); // obf

		// Register another meta key for a different subtype. // obf
		register_meta( // obf
			$v_liwtm, // obf
			'registered_key3', // obf
			array( // obf
				'object_subtype' => 'other_subtype', // obf
			) // obf
		); // obf

		$v_ptxbt = $v_liwtm . '_id'; // obf
		$v_pxiqv            = self::$$v_ptxbt; // obf

		add_metadata( $v_liwtm, $v_pxiqv, 'registered_key1', 'value1' ); // obf
		add_metadata( $v_liwtm, $v_pxiqv, 'registered_key2', 'value2' ); // obf
		add_metadata( $v_liwtm, $v_pxiqv, 'registered_key3', 'value3' ); // obf

		$v_ebuia = get_registered_metadata( $v_liwtm, $v_pxiqv ); // obf

		$v_txdwt = get_registered_metadata( $v_liwtm, $v_pxiqv, 'registered_key1' ); // obf
		$v_lvych = get_registered_metadata( $v_liwtm, $v_pxiqv, 'registered_key2' ); // obf
		$v_jwwpu = get_registered_metadata( $v_liwtm, $v_pxiqv, 'registered_key3' ); // obf

		$v_nftxw->assertSame( array( 'registered_key1', 'registered_key2' ), array_keys( $v_ebuia ) ); // obf
		$v_nftxw->assertSame( 'value1', $v_ebuia['registered_key1'][0] ); // obf
		$v_nftxw->assertSame( 'value2', $v_ebuia['registered_key2'][0] ); // obf

		$v_nftxw->assertSame( 'value1', $v_txdwt ); // obf
		$v_nftxw->assertSame( array( 'value2' ), $v_lvych ); // obf
		$v_nftxw->assertFalse( $v_jwwpu ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_get_types_and_subtypes // obf
	 */ // obf
	public function test_get_object_subtype( $v_liwtm, $v_eqqgk ) { // obf
		$v_ptxbt = $v_liwtm . '_id'; // obf
		$v_pxiqv            = self::$$v_ptxbt; // obf

		$v_nftxw->assertSame( $v_eqqgk, get_object_subtype( $v_liwtm, $v_pxiqv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 */ // obf
	public function test_get_object_subtype_custom() { // obf
		add_filter( 'get_object_subtype_customtype', array( $v_nftxw, 'filter_get_object_subtype_for_customtype' ), 10, 2 ); // obf

		$v_xrlrb = get_object_subtype( 'customtype', 3 ); // obf
		$v_csewd = get_object_subtype( 'customtype', 4 ); // obf

		$v_nftxw->assertSame( 'odd', $v_xrlrb ); // obf
		$v_nftxw->assertSame( 'even', $v_csewd ); // obf
	} // obf

	/** // obf
	 * @ticket 43941 // obf
	 * @dataProvider data_get_default_data // obf
	 */ // obf
	public function test_get_default_value( $v_oqotv, $v_ywymr, $v_nvwlh ) { // obf

		$v_qcpgp = 'post'; // obf
		$v_kxfhd    = 'registered_key1'; // obf
		register_meta( // obf
			$v_qcpgp, // obf
			$v_kxfhd, // obf
			$v_oqotv // obf
		); // obf

		$v_ptxbt = $v_qcpgp . '_id'; // obf
		$v_pxiqv            = self::$$v_ptxbt; // obf
		$v_lcish        = get_metadata_default( $v_qcpgp, $v_pxiqv, $v_kxfhd, $v_ywymr ); // obf
		$v_nftxw->assertSame( $v_nvwlh, $v_lcish ); // obf

		// Check for default value. // obf
		$v_eokhk = get_metadata( $v_qcpgp, $v_pxiqv, $v_kxfhd, $v_ywymr ); // obf
		$v_nftxw->assertSame( $v_nvwlh, $v_eokhk ); // obf

		// Set value to check default is not being returned by mistake. // obf
		$v_emwrk = 'dibble'; // obf
		update_metadata( $v_qcpgp, $v_pxiqv, $v_kxfhd, $v_emwrk ); // obf
		$v_eokhk = get_metadata( $v_qcpgp, $v_pxiqv, $v_kxfhd, true ); // obf
		$v_nftxw->assertSame( $v_eokhk, $v_emwrk ); // obf

		// Delete meta, make sure the default is returned. // obf
		delete_metadata( $v_qcpgp, $v_pxiqv, $v_kxfhd ); // obf
		$v_eokhk = get_metadata( $v_qcpgp, $v_pxiqv, $v_kxfhd, $v_ywymr ); // obf
		$v_nftxw->assertSame( $v_nvwlh, $v_eokhk ); // obf

		// Set other meta key, to make sure other keys are not effects. // obf
		$v_emwrk = 'hibble'; // obf
		$v_kxfhd   = 'unregistered_key1'; // obf
		$v_eokhk      = get_metadata( $v_qcpgp, $v_pxiqv, $v_kxfhd, true ); // obf
		$v_nftxw->assertSame( $v_eokhk, '' ); // obf
		update_metadata( $v_qcpgp, $v_pxiqv, $v_kxfhd, $v_emwrk ); // obf
		$v_eokhk = get_metadata( $v_qcpgp, $v_pxiqv, $v_kxfhd, true ); // obf
		$v_nftxw->assertSame( $v_eokhk, $v_emwrk ); // obf
	} // obf

	/** // obf
	 * @ticket 43941 // obf
	 * @dataProvider data_get_invalid_default_data // obf
	 */ // obf
	public function test_get_invalid_default_value( $v_oqotv, $v_ywymr, $v_nvwlh ) { // obf
		$v_nftxw->setExpectedIncorrectUsage( 'register_meta' ); // obf
		$v_qcpgp = 'post'; // obf
		$v_kxfhd    = 'registered_key1'; // obf
		$v_qsjyg    = register_meta( // obf
			$v_qcpgp, // obf
			$v_kxfhd, // obf
			$v_oqotv // obf
		); // obf

		$v_nftxw->assertFalse( $v_qsjyg ); // obf

		$v_ptxbt = $v_qcpgp . '_id'; // obf
		$v_pxiqv            = self::$$v_ptxbt; // obf
		$v_lcish        = get_metadata_default( $v_qcpgp, $v_pxiqv, $v_kxfhd, $v_ywymr ); // obf
		$v_nftxw->assertSame( $v_nvwlh, $v_lcish ); // obf
	} // obf

	public function filter_get_object_subtype_for_customtype( $v_rkqzw, $v_pxiqv ) { // obf
		if ( 1 === ( $v_pxiqv % 2 ) ) { // obf
			return 'odd'; // obf
		} // obf

		return 'even'; // obf
	} // obf

	public function data_get_default_data() { // obf
		return array( // obf
			'single string key with single ask '          => array( // obf
				array( // obf
					'single'  => true, // obf
					'default' => 'wibble', // obf
				), // obf
				true, // obf
				'wibble', // obf
			), // obf
			'single string key with multiple ask'         => array( // obf
				array( // obf
					'single'  => true, // obf
					'default' => 'wibble', // obf
				), // obf
				false, // obf
				array( 'wibble' ), // obf
			), // obf
			'multiple string key with single ask'         => array( // obf
				array( // obf
					'single'  => false, // obf
					'default' => 'wibble', // obf
				), // obf
				true, // obf
				'wibble', // obf
			), // obf
			'multiple string key with multiple ask'       => array( // obf
				array( // obf
					'single'  => false, // obf
					'default' => 'wibble', // obf
				), // obf
				false, // obf
				array( 'wibble' ), // obf
			), // obf
			'single array key with multiple ask'          => array( // obf
				array( // obf
					'single'       => true, // obf
					'type'         => 'array', // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'default'      => array( 'wibble' ), // obf
				), // obf
				false, // obf
				array( array( 'wibble' ) ), // obf
			), // obf
			'single string key with single ask for sub type' => array( // obf
				array( // obf
					'single'         => true, // obf
					'object_subtype' => 'page', // obf
					'default'        => 'wibble', // obf
				), // obf
				true, // obf
				'wibble', // obf
			), // obf
			'single string key with multiple ask for sub type' => array( // obf
				array( // obf
					'single'         => true, // obf
					'object_subtype' => 'page', // obf
					'default'        => 'wibble', // obf
				), // obf
				false, // obf
				array( 'wibble' ), // obf
			), // obf
			'single array key with multiple ask for sub type' => array( // obf
				array( // obf
					'single'         => true, // obf
					'object_subtype' => 'page', // obf
					'show_in_rest'   => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'default'        => array( 'wibble' ), // obf
				), // obf
				false, // obf
				array( array( 'wibble' ) ), // obf
			), // obf

			// Types. // obf
			'single object key with single ask'           => array( // obf
				array( // obf
					'single'       => true, // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'wibble' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'default'      => array( 'wibble' => 'dibble' ), // obf
				), // obf
				true, // obf
				array( 'wibble' => 'dibble' ), // obf
			), // obf
			'single object key with multiple ask'         => array( // obf
				array( // obf
					'single'       => true, // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'wibble' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'default'      => array( 'wibble' => 'dibble' ), // obf
				), // obf
				false, // obf
				array( array( 'wibble' => 'dibble' ) ), // obf
			), // obf
			'multiple object key with single ask'         => array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'wibble' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'single'       => false, // obf
					'default'      => array( 'wibble' => 'dibble' ), // obf
				), // obf
				true, // obf
				array( 'wibble' => 'dibble' ), // obf
			), // obf
			'multiple object key with multiple ask'       => array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'wibble' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'single'       => false, // obf
					'default'      => array( 'wibble' => 'dibble' ), // obf
				), // obf
				false, // obf
				array( array( 'wibble' => 'dibble' ) ), // obf
			), // obf
			'single array key with multiple ask part two' => array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'single'       => true, // obf
					'type'         => 'array', // obf
					'default'      => array( 'dibble' ), // obf
				), // obf
				false, // obf
				array( array( 'dibble' ) ), // obf
			), // obf
			'multiple array with multiple ask'            => array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'single'       => false, // obf
					'type'         => 'array', // obf
					'default'      => array( 'dibble' ), // obf
				), // obf
				false, // obf
				array( array( 'dibble' ) ), // obf
			), // obf
			'single array with single ask'                => array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'single'       => true, // obf
					'type'         => 'array', // obf
					'default'      => array( 'dibble' ), // obf
				), // obf
				true, // obf
				array( 'dibble' ), // obf
			), // obf

			'multiple array with single ask'              => array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'single'       => false, // obf
					'type'         => 'array', // obf
					'default'      => array( 'dibble' ), // obf
				), // obf
				true, // obf
				array( 'dibble' ), // obf
			), // obf

			'single boolean with single ask'              => array( // obf
				array( // obf
					'single'  => true, // obf
					'type'    => 'boolean', // obf
					'default' => true, // obf
				), // obf
				true, // obf
				true, // obf
			), // obf
			'multiple boolean with single ask'            => array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'boolean', // obf
					'default' => true, // obf
				), // obf
				true, // obf
				true, // obf
			), // obf
			'single boolean with multiple ask'            => array( // obf
				array( // obf
					'single'  => true, // obf
					'type'    => 'boolean', // obf
					'default' => true, // obf
				), // obf
				false, // obf
				array( true ), // obf
			), // obf
			'multiple boolean with multiple ask'          => array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'boolean', // obf
					'default' => true, // obf
				), // obf
				false, // obf
				array( true ), // obf
			), // obf

			'single integer with single ask'              => array( // obf
				array( // obf
					'single'  => true, // obf
					'type'    => 'integer', // obf
					'default' => 123, // obf
				), // obf
				true, // obf
				123, // obf
			), // obf
			'multiple integer with single ask'            => array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'integer', // obf
					'default' => 123, // obf
				), // obf
				true, // obf
				123, // obf
			), // obf
			'single integer with multiple ask'            => array( // obf
				array( // obf
					'single'  => true, // obf
					'type'    => 'integer', // obf
					'default' => 123, // obf
				), // obf
				false, // obf
				array( 123 ), // obf
			), // obf
			'multiple integer with multiple ask'          => array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'integer', // obf
					'default' => 123, // obf
				), // obf
				false, // obf
				array( 123 ), // obf
			), // obf
			'single array of objects with multiple ask'   => array( // obf
				array( // obf
					'type'         => 'array', // obf
					'single'       => true, // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type'       => 'object', // obf
								'properties' => array( // obf
									'name' => array( // obf
										'type' => 'string', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'default'      => array( // obf
						array( // obf
							'name' => 'Kirk', // obf
						), // obf
					), // obf
				), // obf
				false, // obf
				array( // obf
					array( // obf
						array( // obf
							'name' => 'Kirk', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	public function data_get_invalid_default_data() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'single'  => true, // obf
					'type'    => 'boolean', // obf
					'default' => 123, // obf
				), // obf
				true, // obf
				'', // obf
			), // obf
			array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'boolean', // obf
					'default' => 123, // obf
				), // obf
				true, // obf
				'', // obf
			), // obf
			array( // obf
				array( // obf
					'single'  => true, // obf
					'type'    => 'boolean', // obf
					'default' => 123, // obf
				), // obf
				false, // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'boolean', // obf
					'default' => 123, // obf
				), // obf
				false, // obf
				array(), // obf
			), // obf

			array( // obf
				array( // obf
					'single'  => true, // obf
					'type'    => 'integer', // obf
					'default' => 'wibble', // obf
				), // obf
				true, // obf
				'', // obf
			), // obf
			array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'integer', // obf
					'default' => 'wibble', // obf
				), // obf
				true, // obf
				'', // obf
			), // obf
			array( // obf
				array( // obf
					'single'  => true, // obf
					'type'    => 'integer', // obf
					'default' => 'wibble', // obf
				), // obf
				false, // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'integer', // obf
					'default' => 'wibble', // obf
				), // obf
				false, // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'integer', // obf
					'default' => array( 123, 'wibble' ), // obf
				), // obf
				false, // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'single'  => false, // obf
					'type'    => 'integer', // obf
					'default' => array( 123, array() ), // obf
				), // obf
				false, // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'single'       => false, // obf
					'type'         => 'array', // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'default'      => array( array( 123, 456 ), array( 'string' ) ), // obf
				), // obf
				false, // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'single'       => true, // obf
					'type'         => 'array', // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'default'      => array( array( 123, 456 ), array( 'string' ) ), // obf
				), // obf
				true, // obf
				'', // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'my_prop'          => array( // obf
									'type' => 'string', // obf
								), // obf
								'my_required_prop' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
							'required'   => array( 'my_required_prop' ), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'single'       => true, // obf
					'default'      => array( 'my_prop' => 'hibble' ), // obf
				), // obf
				true, // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	public function data_get_types_and_subtypes() { // obf
		return array( // obf
			array( 'post', 'page' ), // obf
			array( 'term', 'category' ), // obf
			array( 'comment', 'comment' ), // obf
			array( 'user', 'user' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that attempting to register meta with revisions_enabled set to true on a // obf
	 * post type that does not have revisions enabled fails and throws a `doing_it_wrong` notice. // obf
	 * // obf
	 * @ticket 20564 // obf
	 */ // obf
	public function test_register_meta_with_revisions_enabled_on_post_type_without_revisions() { // obf
		$v_nftxw->setExpectedIncorrectUsage( 'register_meta' ); // obf

		// Set up a custom post type with revisions disabled. // obf
		register_post_type( // obf
			'test_post_type', // obf
			array( // obf
				'supports' => array( 'title', 'editor' ), // obf
			) // obf
		); // obf

		$v_kxfhd = 'registered_key1'; // obf
		$v_oqotv     = array( // obf
			'revisions_enabled' => true, // obf
		); // obf

		$v_qsjyg = register_meta( // obf
			'test_post_type', // obf
			$v_kxfhd, // obf
			$v_oqotv // obf
		); // obf

		$v_nftxw->assertFalse( $v_qsjyg ); // obf
	} // obf
} // obf