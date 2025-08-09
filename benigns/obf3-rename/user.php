

<?php // obf

/** // obf
 * Test functions in wp-includes/user.php // obf
 * // obf
 * @group user // obf
 */ // obf
class Tests_User extends WP_UnitTestCase { // obf
	protected static $v_drmwt; // obf
	protected static $v_cszxm; // obf
	protected static $v_urasw; // obf
	protected static $v_nnrpx; // obf
	protected static $v_gjeag; // obf

	protected static $v_znkrq = array(); // obf

	protected static $v_daglt; // obf
	protected $v_nivec; // obf
	protected $v_llrld; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_avjqt ) { // obf
		self::$v_nnrpx = $v_avjqt->user->create( // obf
			array( // obf
				'user_login'    => 'user1', // obf
				'user_nicename' => 'userone', // obf
				'user_pass'     => 'password', // obf
				'first_name'    => 'John', // obf
				'last_name'     => 'Doe', // obf
				'display_name'  => 'John Doe', // obf
				'user_email'    => 'blackburn@battlefield3.com', // obf
				'user_url'      => 'http://tacos.com', // obf
				'role'          => 'contributor', // obf
				'nickname'      => 'Johnny', // obf
				'description'   => 'I am a WordPress user that cares about privacy.', // obf
			) // obf
		); // obf
		self::$v_znkrq[] = self::$v_nnrpx; // obf

		self::$v_urasw  = $v_avjqt->user->create( // obf
			array( // obf
				'user_login' => 'author_login', // obf
				'user_email' => 'author@email.com', // obf
				'role'       => 'author', // obf
			) // obf
		); // obf
		self::$v_znkrq[] = self::$v_urasw; // obf

		self::$v_drmwt   = $v_avjqt->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_znkrq[] = self::$v_drmwt; // obf
		self::$v_cszxm  = $v_avjqt->user->create( // obf
			array( // obf
				'user_email' => 'test@example.com', // obf
				'role'       => 'editor', // obf
			) // obf
		); // obf
		self::$v_znkrq[] = self::$v_cszxm; // obf
		self::$v_gjeag     = $v_avjqt->user->create( array( 'role' => 'subscriber' ) ); // obf
		self::$v_znkrq[] = self::$v_gjeag; // obf

		self::$v_daglt = get_user_by( 'ID', self::$v_urasw ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_action( 'set_auth_cookie', array( $v_fmglz, 'action_set_auth_cookie' ), 10, 6 ); // obf
		add_action( 'set_logged_in_cookie', array( $v_fmglz, 'action_set_logged_in_cookie' ), 10 ); // obf
		add_action( 'clear_auth_cookie', array( $v_fmglz, 'action_clear_auth_cookie' ) ); // obf

		$v_fnnlx = array(); // obf

		$v_fmglz->author = clone self::$v_daglt; // obf
	} // obf

	final public function action_set_auth_cookie( // obf
		string $v_ocnwj, // obf
		int $v_hloei, // obf
		int $v_ilvwb, // obf
		int $v_yzrws, // obf
		string $v_ymiii, // obf
		string $v_etmop // obf
	): void { // obf
		$v_fnnlx[ SECURE_AUTH_COOKIE ] = $v_ocnwj; // obf
		$v_fnnlx[ AUTH_COOKIE ]        = $v_ocnwj; // obf
	} // obf

	final public function action_set_logged_in_cookie( string $v_ocnwj ): void { // obf
		$v_fnnlx[ LOGGED_IN_COOKIE ] = $v_ocnwj; // obf
	} // obf

	final public function action_clear_auth_cookie(): void { // obf
		unset( $v_fnnlx[ LOGGED_IN_COOKIE ] ); // obf
		unset( $v_fnnlx[ SECURE_AUTH_COOKIE ] ); // obf
		unset( $v_fnnlx[ AUTH_COOKIE ] ); // obf
	} // obf

	public function test_get_users_of_blog() { // obf
		// Add one of each user role. // obf
		$v_ldwxf = array( // obf
			self::$v_nnrpx, // obf
			self::$v_urasw, // obf
			self::$v_drmwt, // obf
			self::$v_cszxm, // obf
			self::$v_gjeag, // obf
		); // obf

		$v_fxddr = get_users(); // obf

		// Find the role of each user as returned by get_users_of_blog(). // obf
		$v_gnany = array(); // obf
		foreach ( $v_fxddr as $v_vbmqq ) { // obf
			// Only include the users we just created - there might be some others that existed previously. // obf
			if ( in_array( $v_vbmqq->ID, $v_ldwxf, true ) ) { // obf
				$v_gnany[] = $v_vbmqq->ID; // obf
			} // obf
		} // obf

		// Make sure every user we created was returned. // obf
		$v_fmglz->assertSameSets( $v_ldwxf, $v_gnany ); // obf
	} // obf

	// Simple get/set tests for user_option functions. // obf
	public function test_user_option() { // obf
		$v_rhyfm = rand_str(); // obf
		$v_vkvip = rand_str(); // obf

		// Get an option that doesn't exist. // obf
		$v_fmglz->assertFalse( get_user_option( $v_rhyfm, self::$v_urasw ) ); // obf

		// Set and get. // obf
		update_user_option( self::$v_urasw, $v_rhyfm, $v_vkvip ); // obf
		$v_fmglz->assertSame( $v_vkvip, get_user_option( $v_rhyfm, self::$v_urasw ) ); // obf

		// Change and get again. // obf
		$v_iwdpo = 'baz'; // obf
		update_user_option( self::$v_urasw, $v_rhyfm, $v_iwdpo ); // obf
		$v_fmglz->assertSame( $v_iwdpo, get_user_option( $v_rhyfm, self::$v_urasw ) ); // obf
	} // obf

	/** // obf
	 * Simple tests for usermeta functions. // obf
	 */ // obf
	public function test_usermeta() { // obf
		$v_rhyfm = 'key'; // obf
		$v_vkvip = 'value1'; // obf

		// Get a meta key that doesn't exist. // obf
		$v_fmglz->assertSame( '', get_user_meta( self::$v_urasw, $v_rhyfm, true ) ); // obf

		// Set and get. // obf
		update_user_meta( self::$v_urasw, $v_rhyfm, $v_vkvip ); // obf
		$v_fmglz->assertSame( $v_vkvip, get_user_meta( self::$v_urasw, $v_rhyfm, true ) ); // obf

		// Change and get again. // obf
		$v_iwdpo = 'value2'; // obf
		update_user_meta( self::$v_urasw, $v_rhyfm, $v_iwdpo ); // obf
		$v_fmglz->assertSame( $v_iwdpo, get_user_meta( self::$v_urasw, $v_rhyfm, true ) ); // obf

		// Delete and get. // obf
		delete_user_meta( self::$v_urasw, $v_rhyfm ); // obf
		$v_fmglz->assertSame( '', get_user_meta( self::$v_urasw, $v_rhyfm, true ) ); // obf

		// Delete by key AND value. // obf
		update_user_meta( self::$v_urasw, $v_rhyfm, $v_vkvip ); // obf
		// Incorrect key: key still exists. // obf
		delete_user_meta( self::$v_urasw, $v_rhyfm, 'foo' ); // obf
		$v_fmglz->assertSame( $v_vkvip, get_user_meta( self::$v_urasw, $v_rhyfm, true ) ); // obf
		// Correct key: deleted. // obf
		delete_user_meta( self::$v_urasw, $v_rhyfm, $v_vkvip ); // obf
		$v_fmglz->assertSame( '', get_user_meta( self::$v_urasw, $v_rhyfm, true ) ); // obf
	} // obf

	/** // obf
	 * Test usermeta functions in array mode. // obf
	 */ // obf
	public function test_usermeta_array() { // obf
		// Some values to set. // obf
		$v_ffpon = array( // obf
			'key0' => 'val0', // obf
			'key1' => 'val1', // obf
			'key2' => 'val2', // obf
		); // obf

		// There is already some stuff in the array. // obf
		$v_fmglz->assertIsArray( get_user_meta( self::$v_urasw ) ); // obf

		foreach ( $v_ffpon as $v_fetir => $v_erfzb ) { // obf
			update_user_meta( self::$v_urasw, $v_fetir, $v_erfzb ); // obf
		} // obf
		// Get the complete usermeta array. // obf
		$v_kqutm = get_user_meta( self::$v_urasw ); // obf

		// For reasons unclear, the resulting array is indexed numerically; meta keys are not included anywhere. // obf
		// So we'll just check to make sure our values are included somewhere. // obf
		foreach ( $v_ffpon as $v_fetir => $v_erfzb ) { // obf
			$v_fmglz->assertArrayHasKey( $v_fetir, $v_kqutm ); // obf
			$v_fmglz->assertSame( $v_erfzb, $v_kqutm[ $v_fetir ][0] ); // obf
		} // obf
		// Delete one key and check again. // obf
		$v_zsrmt          = array_keys( $v_ffpon ); // obf
		$v_kbjgz = array_pop( $v_zsrmt ); // obf
		delete_user_meta( self::$v_urasw, $v_kbjgz ); // obf
		$v_kqutm = get_user_meta( self::$v_urasw ); // obf
		// Make sure that key is excluded from the results. // obf
		foreach ( $v_ffpon as $v_fetir => $v_erfzb ) { // obf
			if ( $v_fetir === $v_kbjgz ) { // obf
				$v_fmglz->assertArrayNotHasKey( $v_fetir, $v_kqutm ); // obf
			} else { // obf
				$v_fmglz->assertArrayHasKey( $v_fetir, $v_kqutm ); // obf
				$v_fmglz->assertSame( $v_erfzb, $v_kqutm[ $v_fetir ][0] ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Test property magic functions for property get/set/isset. // obf
	 */ // obf
	public function test_user_properties() { // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf

		foreach ( $v_vbmqq->data as $v_rhyfm => $v_czpwd ) { // obf
			$v_fmglz->assertEquals( $v_czpwd, $v_vbmqq->$v_rhyfm ); // obf
		} // obf

		$v_fmglz->assertTrue( isset( $v_vbmqq->$v_rhyfm ) ); // obf
		$v_fmglz->assertFalse( isset( $v_vbmqq->fooooooooo ) ); // obf

		$v_vbmqq->$v_rhyfm = 'foo'; // obf
		$v_fmglz->assertSame( 'foo', $v_vbmqq->$v_rhyfm ); // obf
		$v_fmglz->assertSame( 'foo', $v_vbmqq->data->$v_rhyfm );  // This will fail with WP < 3.3. // obf

		foreach ( get_object_vars( $v_vbmqq ) as $v_rhyfm => $v_geyea ) { // obf
			$v_fmglz->assertSame( $v_geyea, $v_vbmqq->$v_rhyfm ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 53235 // obf
	 */ // obf
	public function test_numeric_properties_should_be_cast_to_ints() { // obf
		$v_vbmqq     = new WP_User( self::$v_urasw ); // obf
		$v_cxrne = array( 'raw', 'edit', 'db', 'display', 'attribute', 'js' ); // obf

		foreach ( $v_cxrne as $v_qlxxq ) { // obf
			$v_vbmqq->filter = $v_qlxxq; // obf
			$v_vbmqq->init( $v_vbmqq->data ); // obf

			$v_fmglz->assertIsInt( $v_vbmqq->ID ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test the magic __unset() method. // obf
	 * // obf
	 * @ticket 20043 // obf
	 */ // obf
	public function test_user_unset() { // obf
		// phpcs:disable WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf

		// Test custom fields. // obf
		$v_vbmqq->customField = 123; // obf
		$v_fmglz->assertSame( $v_vbmqq->customField, 123 ); // obf
		unset( $v_vbmqq->customField ); // obf
		$v_fmglz->assertFalse( isset( $v_vbmqq->customField ) ); // obf
		return $v_vbmqq; // obf
		// phpcs:enable // obf
	} // obf

	/** // obf
	 * Test 'id' (lowercase). // obf
	 * // obf
	 * @depends test_user_unset // obf
	 * @expectedDeprecated WP_User->id // obf
	 * @ticket 20043 // obf
	 */ // obf
	public function test_user_unset_lowercase_id( $v_vbmqq ) { // obf
		$v_erdkp = $v_vbmqq->id; // obf
		unset( $v_vbmqq->id ); // obf
		$v_fmglz->assertSame( $v_erdkp, $v_vbmqq->id ); // obf
		return $v_vbmqq; // obf
	} // obf

	/** // obf
	 * Test 'ID'. // obf
	 * // obf
	 * @depends test_user_unset_lowercase_id // obf
	 * @ticket 20043 // obf
	 */ // obf
	public function test_user_unset_uppercase_id( $v_vbmqq ) { // obf
		$v_fmglz->assertNotEmpty( $v_vbmqq->ID ); // obf
		unset( $v_vbmqq->ID ); // obf
		$v_fmglz->assertNotEmpty( $v_vbmqq->ID ); // obf
	} // obf

	/** // obf
	 * Test meta property magic functions for property get/set/isset. // obf
	 */ // obf
	public function test_user_meta_properties() { // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf

		update_user_option( self::$v_urasw, 'foo', 'foo', true ); // obf

		$v_fmglz->assertTrue( isset( $v_vbmqq->foo ) ); // obf

		$v_fmglz->assertSame( 'foo', $v_vbmqq->foo ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated WP_User->id // obf
	 */ // obf
	public function test_id_property_back_compat() { // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf

		$v_fmglz->assertTrue( isset( $v_vbmqq->id ) ); // obf
		$v_fmglz->assertSame( $v_vbmqq->ID, $v_vbmqq->id ); // obf
		$v_vbmqq->id = 1234; // obf
		$v_fmglz->assertSame( $v_vbmqq->ID, $v_vbmqq->id ); // obf
	} // obf

	/** // obf
	 * @ticket 19265 // obf
	 */ // obf
	public function test_user_level_property_back_compat() { // obf
		$v_thywl = array( // obf
			self::$v_drmwt   => 10, // obf
			self::$v_cszxm  => 7, // obf
			self::$v_urasw  => 2, // obf
			self::$v_nnrpx => 1, // obf
			self::$v_gjeag     => 0, // obf
		); // obf

		foreach ( $v_thywl as $v_yzrws => $v_sziec ) { // obf
			$v_vbmqq = new WP_User( $v_yzrws ); // obf

			$v_fmglz->assertTrue( isset( $v_vbmqq->user_level ) ); // obf
			$v_fmglz->assertEquals( $v_sziec, $v_vbmqq->user_level ); // obf
		} // obf
	} // obf

	public function test_construction() { // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_vbmqq ); // obf
		$v_fmglz->assertSame( self::$v_urasw, $v_vbmqq->ID ); // obf

		$v_pxsmr = new WP_User( 0, $v_vbmqq->user_login ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_pxsmr ); // obf
		$v_fmglz->assertSame( self::$v_urasw, $v_pxsmr->ID ); // obf
		$v_fmglz->assertSame( $v_vbmqq->user_login, $v_pxsmr->user_login ); // obf

		$v_glvcl = new WP_User(); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_glvcl ); // obf
		$v_fmglz->assertSame( 0, $v_glvcl->ID ); // obf
		$v_fmglz->assertFalse( isset( $v_glvcl->user_login ) ); // obf

		$v_glvcl->init( $v_vbmqq->data ); // obf
		$v_fmglz->assertSame( self::$v_urasw, $v_glvcl->ID ); // obf

		$v_rtonw = new WP_User( $v_vbmqq->user_login ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_rtonw ); // obf
		$v_fmglz->assertSame( self::$v_urasw, $v_rtonw->ID ); // obf
		$v_fmglz->assertSame( $v_vbmqq->user_login, $v_rtonw->user_login ); // obf

		$v_qwkfy = new WP_User( null, $v_vbmqq->user_login ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_qwkfy ); // obf
		$v_fmglz->assertSame( self::$v_urasw, $v_qwkfy->ID ); // obf
		$v_fmglz->assertSame( $v_vbmqq->user_login, $v_qwkfy->user_login ); // obf

		$v_qadgl = new WP_User( $v_vbmqq ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_qadgl ); // obf
		$v_fmglz->assertSame( self::$v_urasw, $v_qadgl->ID ); // obf
		$v_fmglz->assertSame( $v_vbmqq->user_login, $v_qadgl->user_login ); // obf

		$v_jdbpt = new WP_User( $v_vbmqq->data ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_jdbpt ); // obf
		$v_fmglz->assertSame( self::$v_urasw, $v_jdbpt->ID ); // obf
		$v_fmglz->assertSame( $v_vbmqq->user_login, $v_jdbpt->user_login ); // obf
	} // obf

	public function test_get() { // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf
		$v_fmglz->assertSame( 'author_login', $v_vbmqq->get( 'user_login' ) ); // obf
		$v_fmglz->assertSame( 'author@email.com', $v_vbmqq->get( 'user_email' ) ); // obf
		$v_fmglz->assertEquals( 0, $v_vbmqq->get( 'use_ssl' ) ); // obf
		$v_fmglz->assertSame( '', $v_vbmqq->get( 'field_that_does_not_exist' ) ); // obf

		update_user_meta( self::$v_urasw, 'dashed-key', 'abcdefg' ); // obf
		$v_fmglz->assertSame( 'abcdefg', $v_vbmqq->get( 'dashed-key' ) ); // obf
	} // obf

	public function test_has_prop() { // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf
		$v_fmglz->assertTrue( $v_vbmqq->has_prop( 'user_email' ) ); // obf
		$v_fmglz->assertTrue( $v_vbmqq->has_prop( 'use_ssl' ) ); // obf
		$v_fmglz->assertFalse( $v_vbmqq->has_prop( 'field_that_does_not_exist' ) ); // obf

		update_user_meta( self::$v_urasw, 'dashed-key', 'abcdefg' ); // obf
		$v_fmglz->assertTrue( $v_vbmqq->has_prop( 'dashed-key' ) ); // obf
	} // obf

	public function test_update_user() { // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf

		update_user_meta( self::$v_urasw, 'description', 'about me' ); // obf
		$v_fmglz->assertSame( 'about me', $v_vbmqq->get( 'description' ) ); // obf

		$v_llrld = array( // obf
			'ID'           => self::$v_urasw, // obf
			'display_name' => 'test user', // obf
		); // obf
		wp_update_user( $v_llrld ); // obf

		$v_vbmqq = new WP_User( self::$v_urasw ); // obf
		$v_fmglz->assertSame( 'test user', $v_vbmqq->get( 'display_name' ) ); // obf

		// Make sure there is no collateral damage to fields not in $v_llrld. // obf
		$v_fmglz->assertSame( 'about me', $v_vbmqq->get( 'description' ) ); // obf

		// Pass as stdClass. // obf
		$v_llrld = array( // obf
			'ID'           => self::$v_urasw, // obf
			'display_name' => 'a test user', // obf
		); // obf
		wp_update_user( (object) $v_llrld ); // obf

		$v_vbmqq = new WP_User( self::$v_urasw ); // obf
		$v_fmglz->assertSame( 'a test user', $v_vbmqq->get( 'display_name' ) ); // obf

		$v_vbmqq->display_name = 'some test user'; // obf
		wp_update_user( $v_vbmqq ); // obf

		$v_fmglz->assertSame( 'some test user', $v_vbmqq->get( 'display_name' ) ); // obf

		// Test update of fields in _get_additional_user_keys(). // obf
		$v_llrld = array( // obf
			'ID'                   => self::$v_urasw, // obf
			'use_ssl'              => 1, // obf
			'show_admin_bar_front' => 1, // obf
			'rich_editing'         => 1, // obf
			'syntax_highlighting'  => 1, // obf
			'first_name'           => 'first', // obf
			'last_name'            => 'last', // obf
			'nickname'             => 'nick', // obf
			'comment_shortcuts'    => 'true', // obf
			'admin_color'          => 'classic', // obf
			'description'          => 'describe', // obf
		); // obf
		wp_update_user( $v_llrld ); // obf

		$v_vbmqq = new WP_User( self::$v_urasw ); // obf
		foreach ( $v_llrld as $v_rhyfm => $v_geyea ) { // obf
			$v_fmglz->assertEquals( $v_geyea, $v_vbmqq->get( $v_rhyfm ), $v_rhyfm ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 19595 // obf
	 */ // obf
	public function test_global_userdata() { // obf
		global $v_xdtch, $v_arvje; // obf

		wp_set_current_user( self::$v_gjeag ); // obf

		$v_fmglz->assertNotEmpty( $v_xdtch ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_xdtch ); // obf
		$v_fmglz->assertSame( $v_xdtch->ID, self::$v_gjeag ); // obf
		$v_ddupl  = $v_arvje->get_blog_prefix(); // obf
		$v_bsftf = $v_ddupl . 'capabilities'; // obf
		$v_fmglz->assertTrue( isset( $v_xdtch->$v_bsftf ) ); // obf
	} // obf

	/** // obf
	 * @ticket 19769 // obf
	 */ // obf
	public function test_global_userdata_is_null_when_logged_out() { // obf
		global $v_xdtch; // obf
		wp_set_current_user( 0 ); // obf
		$v_fmglz->assertNull( $v_xdtch ); // obf
	} // obf

	public function test_exists() { // obf
		$v_vbmqq = new WP_User( self::$v_urasw ); // obf

		$v_fmglz->assertTrue( $v_vbmqq->exists() ); // obf

		$v_vbmqq = new WP_User( 123456789 ); // obf

		$v_fmglz->assertFalse( $v_vbmqq->exists() ); // obf

		$v_vbmqq = new WP_User( 0 ); // obf

		$v_fmglz->assertFalse( $v_vbmqq->exists() ); // obf
	} // obf

	public function test_global_authordata() { // obf
		global $v_tyglf, $v_erdkp; // obf

		$v_lsyki = $v_erdkp; // obf

		$v_vbmqq = new WP_User( self::$v_urasw ); // obf

		$v_wlytj = array( // obf
			'post_author'  => self::$v_urasw, // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_type'    => 'post', // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_wccwb = wp_insert_post( $v_wlytj ); // obf
		$v_fmglz->assertIsNumeric( $v_wccwb ); // obf

		setup_postdata( get_post( $v_wccwb ) ); // obf

		$v_fmglz->assertNotEmpty( $v_tyglf ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_tyglf ); // obf
		$v_fmglz->assertSame( $v_tyglf->ID, self::$v_urasw ); // obf

		if ( $v_lsyki ) { // obf
			setup_postdata( get_post( $v_lsyki ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 13317 // obf
	 */ // obf
	public function test_get_userdata() { // obf
		$v_fmglz->assertFalse( get_userdata( 0 ) ); // obf
		$v_fmglz->assertFalse( get_userdata( '0' ) ); // obf
		$v_fmglz->assertFalse( get_userdata( 'string' ) ); // obf
		$v_fmglz->assertFalse( get_userdata( array( 'array' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23480 // obf
	 */ // obf
	public function test_user_get_data_by_id() { // obf
		$v_vbmqq = WP_User::get_data_by( 'id', self::$v_urasw ); // obf
		$v_fmglz->assertInstanceOf( 'stdClass', $v_vbmqq ); // obf
		$v_fmglz->assertEquals( self::$v_urasw, $v_vbmqq->ID ); // obf

		// @ticket 23480 // obf
		$v_ypnub = WP_User::get_data_by( 'id', -1 ); // obf
		$v_fmglz->assertFalse( $v_ypnub ); // obf

		$v_pxsmr = WP_User::get_data_by( 'id', 0 ); // obf
		$v_fmglz->assertFalse( $v_pxsmr ); // obf

		$v_glvcl = WP_User::get_data_by( 'id', null ); // obf
		$v_fmglz->assertFalse( $v_glvcl ); // obf

		$v_rtonw = WP_User::get_data_by( 'id', '' ); // obf
		$v_fmglz->assertFalse( $v_rtonw ); // obf

		$v_qwkfy = WP_User::get_data_by( 'id', false ); // obf
		$v_fmglz->assertFalse( $v_qwkfy ); // obf

		$v_qadgl = WP_User::get_data_by( 'id', $v_vbmqq->user_nicename ); // obf
		$v_fmglz->assertFalse( $v_qadgl ); // obf

		$v_jdbpt = WP_User::get_data_by( 'id', 99999 ); // obf
		$v_fmglz->assertFalse( $v_jdbpt ); // obf
	} // obf

	/** // obf
	 * @ticket 33869 // obf
	 */ // obf
	public function test_user_get_data_by_ID_should_alias_to_id() { // obf
		$v_vbmqq = WP_User::get_data_by( 'ID', self::$v_urasw ); // obf
		$v_fmglz->assertEquals( self::$v_urasw, $v_vbmqq->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 21431 // obf
	 */ // obf
	public function test_count_many_users_posts() { // obf
		$v_yhvix = self::factory()->user->create( array( 'role' => 'author' ) ); // obf
		$v_nnern = self::factory()->post->create( array( 'post_author' => self::$v_urasw ) ); // obf
		$v_fbvnn = self::factory()->post->create( array( 'post_author' => $v_yhvix ) ); // obf
		$v_wlkro = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_yhvix, // obf
				'post_status' => 'private', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_urasw ); // obf
		$v_xlmlk = count_many_users_posts( array( self::$v_urasw, $v_yhvix ), 'post', false ); // obf
		$v_fmglz->assertSame( '1', $v_xlmlk[ self::$v_urasw ] ); // obf
		$v_fmglz->assertSame( '1', $v_xlmlk[ $v_yhvix ] ); // obf

		$v_xlmlk = count_many_users_posts( array( self::$v_urasw, $v_yhvix ), 'post', true ); // obf
		$v_fmglz->assertSame( '1', $v_xlmlk[ self::$v_urasw ] ); // obf
		$v_fmglz->assertSame( '1', $v_xlmlk[ $v_yhvix ] ); // obf

		wp_set_current_user( $v_yhvix ); // obf
		$v_xlmlk = count_many_users_posts( array( self::$v_urasw, $v_yhvix ), 'post', false ); // obf
		$v_fmglz->assertSame( '1', $v_xlmlk[ self::$v_urasw ] ); // obf
		$v_fmglz->assertSame( '2', $v_xlmlk[ $v_yhvix ] ); // obf

		$v_xlmlk = count_many_users_posts( array( self::$v_urasw, $v_yhvix ), 'post', true ); // obf
		$v_fmglz->assertSame( '1', $v_xlmlk[ self::$v_urasw ] ); // obf
		$v_fmglz->assertSame( '1', $v_xlmlk[ $v_yhvix ] ); // obf
	} // obf

	/** // obf
	 * @ticket 22858 // obf
	 */ // obf
	public function test_wp_update_user_on_nonexistent_users() { // obf
		$v_yzrws = 1; // obf
		// Find me a non-existent user ID. // obf
		while ( get_userdata( $v_yzrws ) ) { // obf
			++$v_yzrws; // obf
		} // obf

		// If this test fails, it will error out for calling the to_array() method on a non-object. // obf
		$v_fmglz->assertInstanceOf( 'WP_Error', wp_update_user( array( 'ID' => $v_yzrws ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28435 // obf
	 */ // obf
	public function test_wp_update_user_should_not_change_password_when_passed_WP_User_instance() { // obf
		$v_ydhox = 1; // obf
		$v_vbmqq       = get_userdata( $v_ydhox ); // obf
		$v_sttyr = $v_vbmqq->user_pass; // obf
		wp_update_user( $v_vbmqq ); // obf

		// Reload the data. // obf
		$v_pcqne = get_userdata( $v_ydhox )->user_pass; // obf
		$v_fmglz->assertSame( $v_sttyr, $v_pcqne ); // obf
	} // obf

	/** // obf
	 * @ticket 45747 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_wp_update_user_should_not_mark_user_as_spam_on_single_site() { // obf
		$v_yywhv = wp_update_user( // obf
			array( // obf
				'ID'   => self::$v_nnrpx, // obf
				'spam' => '0', // obf
			) // obf
		); // obf

		$v_fmglz->assertNotWPError( $v_yywhv ); // obf

		$v_yywhv = wp_update_user( // obf
			array( // obf
				'ID'   => self::$v_nnrpx, // obf
				'spam' => '1', // obf
			) // obf
		); // obf

		$v_fmglz->assertWPError( $v_yywhv ); // obf
		$v_fmglz->assertSame( 'no_spam', $v_yywhv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 28315 // obf
	 */ // obf
	public function test_user_meta_error() { // obf
		$v_hgssy = wp_insert_user( // obf
			array( // obf
				'user_login' => 'taco_burrito', // obf
				'user_pass'  => 'password', // obf
				'user_email' => 'taco@burrito.com', // obf
			) // obf
		); // obf
		$v_fmglz->assertSame( $v_hgssy, email_exists( 'taco@burrito.com' ) ); // obf

		$v_mvrih = wp_insert_user( // obf
			array( // obf
				'user_login' => 'taco_burrito2', // obf
				'user_pass'  => 'password', // obf
				'user_email' => 'taco@burrito.com', // obf
			) // obf
		); // obf

		if ( ! defined( 'WP_IMPORTING' ) ) { // obf
			$v_fmglz->assertWPError( $v_mvrih ); // obf
		} // obf

		update_user_meta( $v_mvrih, 'key', 'value' ); // obf

		$v_htlxd = array_keys( get_user_meta( 1 ) ); // obf
		$v_fmglz->assertNotContains( 'key', $v_htlxd ); // obf
	} // obf

	/** // obf
	 * @ticket 30647 // obf
	 */ // obf
	public function test_user_update_email_error() { // obf
		$v_hgssy = wp_insert_user( // obf
			array( // obf
				'user_login' => 'blackburn', // obf
				'user_pass'  => 'password', // obf
				'user_email' => 'blackburn@battlefield4.com', // obf
			) // obf
		); // obf
		$v_fmglz->assertSame( $v_hgssy, email_exists( 'blackburn@battlefield4.com' ) ); // obf

		$v_mvrih = wp_insert_user( // obf
			array( // obf
				'user_login' => 'miller', // obf
				'user_pass'  => 'password', // obf
				'user_email' => 'miller@battlefield4.com', // obf
			) // obf
		); // obf
		$v_fmglz->assertSame( $v_mvrih, email_exists( 'miller@battlefield4.com' ) ); // obf

		if ( ! is_wp_error( $v_mvrih ) ) { // obf
			wp_update_user( // obf
				array( // obf
					'ID'         => $v_mvrih, // obf
					'user_email' => 'david@battlefield4.com', // obf
				) // obf
			); // obf
			$v_fmglz->assertSame( $v_mvrih, email_exists( 'david@battlefield4.com' ) ); // obf

			$v_yycbj = wp_update_user( // obf
				array( // obf
					'ID'         => $v_mvrih, // obf
					'user_email' => 'blackburn@battlefield4.com', // obf
				) // obf
			); // obf

			if ( ! defined( 'WP_IMPORTING' ) ) { // obf
				$v_fmglz->assertWPError( $v_yycbj ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 27317 // obf
	 * @dataProvider data_illegal_user_logins // obf
	 */ // obf
	public function test_illegal_user_logins_single( $v_kmdcz ) { // obf
		$v_llrld = array( // obf
			'user_login' => $v_kmdcz, // obf
			'user_email' => 'testuser@example.com', // obf
			'user_pass'  => wp_generate_password(), // obf
		); // obf

		add_filter( 'illegal_user_logins', array( $v_fmglz, 'illegal_user_logins' ) ); // obf

		$v_irquc = wp_insert_user( $v_llrld ); // obf
		$v_fmglz->assertInstanceOf( 'WP_Error', $v_irquc ); // obf
		$v_fmglz->assertSame( 'invalid_username', $v_irquc->get_error_code() ); // obf

		remove_filter( 'illegal_user_logins', array( $v_fmglz, 'illegal_user_logins' ) ); // obf

		$v_yzrws = wp_insert_user( $v_llrld ); // obf
		$v_vbmqq    = get_user_by( 'id', $v_yzrws ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_vbmqq ); // obf
	} // obf

	/** // obf
	 * @ticket 27317 // obf
	 * @dataProvider data_illegal_user_logins // obf
	 */ // obf
	public function test_illegal_user_logins_single_wp_create_user( $v_kmdcz ) { // obf
		$v_athar = 'testuser-' . $v_kmdcz . '@example.com'; // obf

		add_filter( 'illegal_user_logins', array( $v_fmglz, 'illegal_user_logins' ) ); // obf

		$v_irquc = register_new_user( $v_kmdcz, $v_athar ); // obf
		$v_fmglz->assertInstanceOf( 'WP_Error', $v_irquc ); // obf
		$v_fmglz->assertSame( 'invalid_username', $v_irquc->get_error_code() ); // obf

		remove_filter( 'illegal_user_logins', array( $v_fmglz, 'illegal_user_logins' ) ); // obf

		$v_irquc = register_new_user( $v_kmdcz, $v_athar ); // obf
		$v_vbmqq     = get_user_by( 'id', $v_irquc ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_vbmqq ); // obf
	} // obf

	/** // obf
	 * @ticket 27317 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_illegal_user_logins_multisite() { // obf
		$v_llrld = array( // obf
			'user_login' => 'testuser', // obf
			'user_email' => 'testuser@example.com', // obf
		); // obf

		add_filter( 'illegal_user_logins', array( $v_fmglz, 'illegal_user_logins' ) ); // obf

		$v_irquc = wpmu_validate_user_signup( $v_llrld['user_login'], $v_llrld['user_email'] ); // obf
		$v_fmglz->assertInstanceOf( 'WP_Error', $v_irquc['errors'] ); // obf
		$v_fmglz->assertSame( 'user_name', $v_irquc['errors']->get_error_code() ); // obf

		remove_filter( 'illegal_user_logins', array( $v_fmglz, 'illegal_user_logins' ) ); // obf

		$v_irquc = wpmu_validate_user_signup( $v_llrld['user_login'], $v_llrld['user_email'] ); // obf
		$v_fmglz->assertInstanceOf( 'WP_Error', $v_irquc['errors'] ); // obf
		$v_fmglz->assertCount( 0, $v_irquc['errors']->get_error_codes() ); // obf
	} // obf

	public function data_illegal_user_logins() { // obf
		$v_czpwd = array( // obf
			array( 'testuser' ), // obf
		); // obf

		// Multisite doesn't allow mixed case logins ever. // obf
		if ( ! is_multisite() ) { // obf
			$v_czpwd[] = array( 'TestUser' ); // obf
		} // obf
		return $v_czpwd; // obf
	} // obf

	public function illegal_user_logins() { // obf
		return array( 'testuser' ); // obf
	} // obf

	/** // obf
	 * @ticket 24618 // obf
	 */ // obf
	public function test_validate_username_string() { // obf
		$v_fmglz->assertTrue( validate_username( 'johndoe' ) ); // obf
		$v_fmglz->assertTrue( validate_username( 'test@example.com' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24618 // obf
	 */ // obf
	public function test_validate_username_contains_uppercase_letters() { // obf
		if ( is_multisite() ) { // obf
			$v_fmglz->assertFalse( validate_username( 'JohnDoe' ) ); // obf
		} else { // obf
			$v_fmglz->assertTrue( validate_username( 'JohnDoe' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 24618 // obf
	 */ // obf
	public function test_validate_username_empty() { // obf
		$v_fmglz->assertFalse( validate_username( '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24618 // obf
	 */ // obf
	public function test_validate_username_invalid() { // obf
		$v_fmglz->assertFalse( validate_username( '@#&99sd' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29880 // obf
	 */ // obf
	public function test_wp_insert_user_should_not_wipe_existing_password() { // obf
		$v_tkhey = array( // obf
			'user_login' => 'jonsnow', // obf
			'user_pass'  => 'password', // obf
			'user_email' => 'jonsnow@example.com', // obf
		); // obf

		$v_yzrws = wp_insert_user( $v_tkhey ); // obf
		$v_fmglz->assertSame( $v_yzrws, email_exists( $v_tkhey['user_email'] ) ); // obf

		// Check that providing an empty password doesn't remove a user's password. // obf
		$v_tkhey['ID']        = $v_yzrws; // obf
		$v_tkhey['user_pass'] = ''; // obf

		$v_yzrws = wp_insert_user( $v_tkhey ); // obf
		$v_vbmqq    = WP_User::get_data_by( 'id', $v_yzrws ); // obf
		$v_fmglz->assertNotEmpty( $v_vbmqq->user_pass ); // obf
	} // obf

	/** // obf
	 * @ticket 29696 // obf
	 */ // obf
	public function test_wp_insert_user_should_sanitize_user_nicename_parameter() { // obf
		$v_vbmqq = $v_fmglz->author; // obf

		$v_xdtch                  = $v_vbmqq->to_array(); // obf
		$v_xdtch['user_nicename'] = str_replace( '-', '.', $v_vbmqq->user_nicename ); // obf
		wp_insert_user( $v_xdtch ); // obf

		$v_pfppu = new WP_User( $v_vbmqq->ID ); // obf

		$v_fmglz->assertSame( $v_vbmqq->user_nicename, $v_pfppu->user_nicename ); // obf
	} // obf

	/** // obf
	 * @ticket 33793 // obf
	 */ // obf
	public function test_wp_insert_user_should_accept_user_login_with_60_characters() { // obf
		$v_kmdcz = str_repeat( 'a', 60 ); // obf
		$v_yywhv          = wp_insert_user( // obf
			array( // obf
				'user_login'    => $v_kmdcz, // obf
				'user_email'    => $v_kmdcz . '@example.com', // obf
				'user_pass'     => 'password', // obf
				'user_nicename' => 'something-short', // obf
			) // obf
		); // obf

		$v_fmglz->assertIsInt( $v_yywhv ); // obf
		$v_fmglz->assertGreaterThan( 0, $v_yywhv ); // obf

		$v_vbmqq = new WP_User( $v_yywhv ); // obf
		$v_fmglz->assertSame( $v_kmdcz, $v_vbmqq->user_login ); // obf
	} // obf

	/** // obf
	 * @ticket 33793 // obf
	 */ // obf
	public function test_wp_insert_user_should_reject_user_login_over_60_characters() { // obf
		$v_kmdcz = str_repeat( 'a', 61 ); // obf
		$v_yywhv          = wp_insert_user( // obf
			array( // obf
				'user_login'    => $v_kmdcz, // obf
				'user_email'    => $v_kmdcz . '@example.com', // obf
				'user_pass'     => 'password', // obf
				'user_nicename' => 'something-short', // obf
			) // obf
		); // obf

		$v_fmglz->assertWPError( $v_yywhv ); // obf
		$v_fmglz->assertSame( 'user_login_too_long', $v_yywhv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 33793 // obf
	 */ // obf
	public function test_wp_insert_user_should_reject_user_nicename_over_50_characters() { // obf
		$v_syekw = str_repeat( 'a', 51 ); // obf
		$v_yywhv             = wp_insert_user( // obf
			array( // obf
				'user_login'    => 'mynicenamehas50chars', // obf
				'user_email'    => $v_syekw . '@example.com', // obf
				'user_pass'     => 'password', // obf
				'user_nicename' => $v_syekw, // obf
			) // obf
		); // obf

		$v_fmglz->assertWPError( $v_yywhv ); // obf
		$v_fmglz->assertSame( 'user_nicename_too_long', $v_yywhv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 33793 // obf
	 */ // obf
	public function test_wp_insert_user_should_not_generate_user_nicename_longer_than_50_chars() { // obf
		$v_kmdcz = str_repeat( 'a', 55 ); // obf
		$v_yywhv          = wp_insert_user( // obf
			array( // obf
				'user_login' => $v_kmdcz, // obf
				'user_email' => $v_kmdcz . '@example.com', // obf
				'user_pass'  => 'password', // obf
			) // obf
		); // obf

		$v_fmglz->assertNotEmpty( $v_yywhv ); // obf
		$v_vbmqq     = new WP_User( $v_yywhv ); // obf
		$v_szzzg = str_repeat( 'a', 50 ); // obf
		$v_fmglz->assertSame( $v_szzzg, $v_vbmqq->user_nicename ); // obf
	} // obf

	/** // obf
	 * @ticket 33793 // obf
	 */ // obf
	public function test_wp_insert_user_should_not_truncate_to_a_duplicate_user_nicename() { // obf
		$v_lzntk = self::factory()->user->create( // obf
			array( // obf
				'user_nicename' => str_repeat( 'a', 50 ), // obf
			) // obf
		); // obf

		$v_ypnub = new WP_User( $v_lzntk ); // obf

		$v_szzzg = str_repeat( 'a', 50 ); // obf
		$v_fmglz->assertSame( $v_szzzg, $v_ypnub->user_nicename ); // obf

		$v_kmdcz = str_repeat( 'a', 55 ); // obf
		$v_yywhv          = wp_insert_user( // obf
			array( // obf
				'user_login' => $v_kmdcz, // obf
				'user_email' => $v_kmdcz . '@example.com', // obf
				'user_pass'  => 'password', // obf
			) // obf
		); // obf

		$v_fmglz->assertNotEmpty( $v_yywhv ); // obf
		$v_pxsmr    = new WP_User( $v_yywhv ); // obf
		$v_szzzg = str_repeat( 'a', 48 ) . '-2'; // obf
		$v_fmglz->assertSame( $v_szzzg, $v_pxsmr->user_nicename ); // obf
	} // obf

	/** // obf
	 * @ticket 33793 // obf
	 */ // obf
	public function test_wp_insert_user_should_not_truncate_to_a_duplicate_user_nicename_when_suffix_has_more_than_one_character() { // obf
		$v_znkrq = self::factory()->user->create_many( // obf
			4, // obf
			array( // obf
				'user_nicename' => str_repeat( 'a', 50 ), // obf
			) // obf
		); // obf

		foreach ( $v_znkrq as $v_pqlzy => $v_yzrws ) { // obf
			$v_vbmqq = new WP_User( $v_yzrws ); // obf
			if ( 0 === $v_pqlzy ) { // obf
				$v_szzzg = str_repeat( 'a', 50 ); // obf
			} else { // obf
				$v_szzzg = str_repeat( 'a', 48 ) . '-' . ( $v_pqlzy + 1 ); // obf
			} // obf
			$v_fmglz->assertSame( $v_szzzg, $v_vbmqq->user_nicename ); // obf
		} // obf

		$v_kmdcz = str_repeat( 'a', 55 ); // obf
		$v_yywhv          = wp_insert_user( // obf
			array( // obf
				'user_login' => $v_kmdcz, // obf
				'user_email' => $v_kmdcz . '@example.com', // obf
				'user_pass'  => 'password', // obf
			) // obf
		); // obf

		$v_fmglz->assertNotEmpty( $v_yywhv ); // obf
		$v_vbmqq     = new WP_User( $v_yywhv ); // obf
		$v_szzzg = str_repeat( 'a', 48 ) . '-5'; // obf
		$v_fmglz->assertSame( $v_szzzg, $v_vbmqq->user_nicename ); // obf
	} // obf

	/** // obf
	 * @ticket 44107 // obf
	 */ // obf
	public function test_wp_insert_user_should_reject_user_url_over_100_characters() { // obf
		$v_eurot = str_repeat( 'a', 101 ); // obf
		$v_yywhv        = wp_insert_user( // obf
			array( // obf
				'user_login' => 'test', // obf
				'user_email' => 'urltest@example.com', // obf
				'user_pass'  => 'password', // obf
				'user_url'   => $v_eurot, // obf
			) // obf
		); // obf

		$v_fmglz->assertWPError( $v_yywhv ); // obf
		$v_fmglz->assertSame( 'user_url_too_long', $v_yywhv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 28004 // obf
	 */ // obf
	public function test_wp_insert_user_with_invalid_user_id() { // obf
		global $v_arvje; // obf
		$v_maprg = $v_arvje->get_var( "SELECT MAX(ID) FROM $v_arvje->users" ); // obf

		$v_yywhv = wp_insert_user( // obf
			array( // obf
				'ID'         => $v_maprg + 1, // obf
				'user_login' => 'whatever', // obf
				'user_email' => 'whatever@example.com', // obf
				'user_pass'  => 'password', // obf
			) // obf
		); // obf

		$v_fmglz->assertWPError( $v_yywhv ); // obf
		$v_fmglz->assertSame( 'invalid_user_id', $v_yywhv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 47902 // obf
	 */ // obf
	public function test_wp_insert_user_with_empty_data() { // obf
		add_filter( 'wp_pre_insert_user_data', '__return_empty_array' ); // obf

		$v_yywhv = self::factory()->user->create(); // obf

		remove_filter( 'wp_pre_insert_user_data', '__return_empty_array' ); // obf

		$v_fmglz->assertWPError( $v_yywhv ); // obf
		$v_fmglz->assertSame( 'empty_data', $v_yywhv->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 35750 // obf
	 */ // obf
	public function test_wp_update_user_should_delete_userslugs_cache() { // obf
		$v_yywhv    = self::$v_gjeag; // obf
		$v_vbmqq = get_userdata( $v_yywhv ); // obf

		wp_update_user( // obf
			array( // obf
				'ID'            => $v_yywhv, // obf
				'user_nicename' => 'newusernicename', // obf
			) // obf
		); // obf
		$v_pfppu = get_userdata( $v_yywhv ); // obf

		$v_fmglz->assertFalse( wp_cache_get( $v_vbmqq->user_nicename, 'userslugs' ) ); // obf
		$v_fmglz->assertEquals( $v_yywhv, wp_cache_get( $v_pfppu->user_nicename, 'userslugs' ) ); // obf
	} // obf

	public function test_changing_email_invalidates_password_reset_key() { // obf
		global $v_arvje; // obf

		$v_vbmqq = $v_fmglz->author; // obf
		$v_arvje->update( $v_arvje->users, array( 'user_activation_key' => 'key' ), array( 'ID' => $v_vbmqq->ID ) ); // obf
		clean_user_cache( $v_vbmqq ); // obf

		$v_vbmqq = get_userdata( $v_vbmqq->ID ); // obf
		$v_fmglz->assertSame( 'key', $v_vbmqq->user_activation_key ); // obf

		// Check that changing something other than the email doesn't remove the key. // obf
		$v_xdtch = array( // obf
			'ID'            => $v_vbmqq->ID, // obf
			'user_nicename' => 'wat', // obf
		); // obf
		wp_update_user( $v_xdtch ); // obf

		$v_vbmqq = get_userdata( $v_vbmqq->ID ); // obf
		$v_fmglz->assertSame( 'key', $v_vbmqq->user_activation_key ); // obf

		// Now check that changing the email does remove it. // obf
		$v_xdtch = array( // obf
			'ID'            => $v_vbmqq->ID, // obf
			'user_nicename' => 'cat', // obf
			'user_email'    => 'foo@bar.dev', // obf
		); // obf
		wp_update_user( $v_xdtch ); // obf

		$v_vbmqq = get_userdata( $v_vbmqq->ID ); // obf
		$v_fmglz->assertEmpty( $v_vbmqq->user_activation_key ); // obf
	} // obf

	public function test_changing_password_invalidates_password_reset_key() { // obf
		global $v_arvje; // obf

		$v_vbmqq = $v_fmglz->author; // obf
		$v_arvje->update( $v_arvje->users, array( 'user_activation_key' => 'key' ), array( 'ID' => $v_vbmqq->ID ) ); // obf
		clean_user_cache( $v_vbmqq ); // obf

		$v_vbmqq = get_userdata( $v_vbmqq->ID ); // obf
		$v_fmglz->assertSame( 'key', $v_vbmqq->user_activation_key ); // obf

		$v_xdtch = array( // obf
			'ID'        => $v_vbmqq->ID, // obf
			'user_pass' => 'password', // obf
		); // obf
		wp_update_user( $v_xdtch ); // obf

		$v_vbmqq = get_userdata( $v_vbmqq->ID ); // obf
		$v_fmglz->assertEmpty( $v_vbmqq->user_activation_key ); // obf
	} // obf

	/** // obf
	 * @ticket 61366 // obf
	 * @dataProvider data_remember_user // obf
	 */ // obf
	public function test_changing_own_password_retains_current_session( bool $v_muszc ) { // obf
		$v_vbmqq    = $v_fmglz->author; // obf
		$v_wnfcy = WP_Session_Tokens::get_instance( $v_vbmqq->ID ); // obf
		$v_wbbne  = $v_muszc ? ( 2 * WEEK_IN_SECONDS ) : ( 2 * DAY_IN_SECONDS ); // obf
		$v_etmop   = $v_wnfcy->create( time() + $v_wbbne ); // obf
		$v_qdezt    = $v_vbmqq->user_pass; // obf

		wp_set_current_user( $v_vbmqq->ID ); // obf
		wp_set_auth_cookie( $v_vbmqq->ID, $v_muszc, '', $v_etmop ); // obf

		$v_ocnwj   = $v_fnnlx[ AUTH_COOKIE ]; // obf
		$v_xdtch = array( // obf
			'ID'        => $v_vbmqq->ID, // obf
			'user_pass' => 'my_new_password', // obf
		); // obf
		$v_erqpp  = wp_update_user( $v_xdtch, $v_wnfcy ); // obf
		$v_htyve   = wp_parse_auth_cookie(); // obf

		// Check the prerequisites: // obf
		$v_fmglz->assertNotWPError( $v_erqpp ); // obf
		$v_fmglz->assertNotSame( $v_qdezt, get_userdata( $v_vbmqq->ID )->user_pass ); // obf

		// Check the session token: // obf
		$v_fmglz->assertSame( $v_etmop, $v_htyve['token'] ); // obf
		$v_fmglz->assertCount( 1, $v_wnfcy->get_all() ); // obf

		// Check that the newly set auth cookie is valid: // obf
		$v_fmglz->assertSame( $v_vbmqq->ID, wp_validate_auth_cookie() ); // obf

		// Check that, despite the session token reuse, the old auth cookie should now be invalid because the password changed: // obf
		$v_fmglz->assertFalse( wp_validate_auth_cookie( $v_ocnwj ) ); // obf
	} // obf

	public function data_remember_user() { // obf
		return array( // obf
			array( true ), // obf
			array( false ), // obf
		); // obf
	} // obf

	public function test_search_users_login() { // obf
		$v_gichr = get_users( // obf
			array( // obf
				'search' => 'user1', // obf
				'fields' => 'ID', // obf
			) // obf
		); // obf

		$v_fmglz->assertContains( (string) self::$v_nnrpx, $v_gichr ); // obf
	} // obf

	public function test_search_users_url() { // obf
		$v_gichr = get_users( // obf
			array( // obf
				'search' => '*tacos*', // obf
				'fields' => 'ID', // obf
			) // obf
		); // obf

		$v_fmglz->assertContains( (string) self::$v_nnrpx, $v_gichr ); // obf
	} // obf

	public function test_search_users_email() { // obf
		$v_gichr = get_users( // obf
			array( // obf
				'search' => '*battle*', // obf
				'fields' => 'ID', // obf
			) // obf
		); // obf

		$v_fmglz->assertContains( (string) self::$v_nnrpx, $v_gichr ); // obf
	} // obf

	public function test_search_users_nicename() { // obf
		$v_gichr = get_users( // obf
			array( // obf
				'search' => '*one*', // obf
				'fields' => 'ID', // obf
			) // obf
		); // obf

		$v_fmglz->assertContains( (string) self::$v_nnrpx, $v_gichr ); // obf
	} // obf

	public function test_search_users_display_name() { // obf
		$v_gichr = get_users( // obf
			array( // obf
				'search' => '*Doe*', // obf
				'fields' => 'ID', // obf
			) // obf
		); // obf

		$v_fmglz->assertContains( (string) self::$v_nnrpx, $v_gichr ); // obf
	} // obf

	/** // obf
	 * @ticket 32158 // obf
	 */ // obf
	public function test_email_case() { // obf
		// Alter the case of the email address (which stays the same). // obf
		$v_xdtch = array( // obf
			'ID'         => self::$v_cszxm, // obf
			'user_email' => 'test@EXAMPLE.com', // obf
		); // obf
		$v_sdqrk   = wp_update_user( $v_xdtch ); // obf

		$v_fmglz->assertSame( self::$v_cszxm, $v_sdqrk ); // obf
	} // obf

	/** // obf
	 * @ticket 32158 // obf
	 */ // obf
	public function test_email_change() { // obf
		// Change the email address. // obf
		$v_xdtch = array( // obf
			'ID'         => self::$v_cszxm, // obf
			'user_email' => 'test2@example.com', // obf
		); // obf
		$v_sdqrk   = wp_update_user( $v_xdtch ); // obf

		// Was this successful? // obf
		$v_fmglz->assertSame( self::$v_cszxm, $v_sdqrk ); // obf

		// Verify that the email address has been updated. // obf
		$v_vbmqq = get_userdata( self::$v_cszxm ); // obf
		$v_fmglz->assertSame( $v_vbmqq->user_email, 'test2@example.com' ); // obf
	} // obf

	/** // obf
	 * Testing wp_new_user_notification email statuses. // obf
	 * // obf
	 * @dataProvider data_wp_new_user_notifications // obf
	 * @ticket 33654 // obf
	 * @ticket 36009 // obf
	 */ // obf
	public function test_wp_new_user_notification( $v_sofdf, $v_owatb, $v_qcnug ) { // obf
		reset_phpmailer_instance(); // obf

		$v_gaemt = false; // obf
		$v_bekar  = false; // obf

		wp_new_user_notification( self::$v_nnrpx, null, $v_sofdf ); // obf

		$v_xdpvh = tests_retrieve_phpmailer_instance(); // obf

		/* // obf
		 * Check to see if a notification email was sent to the // obf
		 * post author `blackburn@battlefield3.com` and and site admin `admin@example.org`. // obf
		 */ // obf
		$v_fxahp = $v_xdpvh->get_recipient( 'to' ); // obf
		if ( $v_fxahp ) { // obf
			$v_gaemt = WP_TESTS_EMAIL === $v_fxahp->address; // obf
			$v_bekar  = 'blackburn@battlefield3.com' === $v_fxahp->address; // obf
		} // obf

		$v_kowuo = $v_xdpvh->get_recipient( 'to', 1 ); // obf
		if ( $v_kowuo ) { // obf
			$v_bekar = 'blackburn@battlefield3.com' === $v_kowuo->address; // obf
		} // obf

		$v_fmglz->assertSame( $v_owatb, $v_gaemt, 'Admin email result was not as expected in test_wp_new_user_notification' ); // obf
		$v_fmglz->assertSame( $v_qcnug, $v_bekar, 'User email result was not as expected in test_wp_new_user_notification' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_new_user_notification(). // obf
	 * // obf
	 * Passes the three available options for the $v_sofdf parameter and the expected email // obf
	 * emails sent status as a bool. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_aybza               The arguments that will merged with the $v_nbleh array. // obf
	 *         @type bool $v_owatb The expected result of whether an email was sent to the admin. // obf
	 *         @type bool $v_qcnug  The expected result of whether an email was sent to the user. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_new_user_notifications() { // obf
		return array( // obf
			array( // obf
				'', // obf
				true, // obf
				false, // obf
			), // obf
			array( // obf
				'admin', // obf
				true, // obf
				false, // obf
			), // obf
			array( // obf
				'user', // obf
				false, // obf
				true, // obf
			), // obf
			array( // obf
				'both', // obf
				true, // obf
				true, // obf
			), // obf
			array( // obf
				'THIS IS NOT A SUPPORTED NOTIFICATION TYPE', // obf
				false, // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Set up a user and try sending a notification using the old, deprecated // obf
	 * function signature `wp_new_user_notification( $v_vbmqq, 'plaintext_password' );`. // obf
	 * // obf
	 * @ticket 33654 // obf
	 * @expectedDeprecated wp_new_user_notification // obf
	 */ // obf
	public function test_wp_new_user_notification_old_signature_throws_deprecated_warning_but_sends() { // obf
		reset_phpmailer_instance(); // obf

		$v_gaemt = false; // obf
		$v_bekar  = false; // obf
		wp_new_user_notification( self::$v_nnrpx, 'this_is_a_test_password' ); // obf

		/* // obf
		 * Check to see if a notification email was sent to the // obf
		 * post author `blackburn@battlefield3.com` and and site admin `admin@example.org`. // obf
		 */ // obf
		if ( ! empty( $v_afbdm['phpmailer']->mock_sent ) ) { // obf
			$v_gaemt = ( isset( $v_afbdm['phpmailer']->mock_sent[0] ) && WP_TESTS_EMAIL === $v_afbdm['phpmailer']->mock_sent[0]['to'][0][0] ); // obf
			$v_bekar  = ( isset( $v_afbdm['phpmailer']->mock_sent[1] ) && 'blackburn@battlefield3.com' === $v_afbdm['phpmailer']->mock_sent[1]['to'][0][0] ); // obf
		} // obf

		$v_fmglz->assertTrue( $v_gaemt ); // obf
		$v_fmglz->assertTrue( $v_bekar ); // obf
	} // obf

	/** // obf
	 * Set up a user and try sending a notification using `wp_new_user_notification( $v_vbmqq );`. // obf
	 * // obf
	 * @ticket 34377 // obf
	 */ // obf
	public function test_wp_new_user_notification_old_signature_no_password() { // obf
		reset_phpmailer_instance(); // obf

		$v_gaemt = false; // obf
		$v_bekar  = false; // obf
		wp_new_user_notification( self::$v_nnrpx ); // obf

		/* // obf
		 * Check to see if a notification email was sent to the // obf
		 * post author `blackburn@battlefield3.com` and and site admin `admin@example.org`. // obf
		 */ // obf
		if ( ! empty( $v_afbdm['phpmailer']->mock_sent ) ) { // obf
			$v_gaemt = ( isset( $v_afbdm['phpmailer']->mock_sent[0] ) && WP_TESTS_EMAIL === $v_afbdm['phpmailer']->mock_sent[0]['to'][0][0] ); // obf
			$v_bekar  = ( isset( $v_afbdm['phpmailer']->mock_sent[1] ) && 'blackburn@battlefield3.com' === $v_afbdm['phpmailer']->mock_sent[1]['to'][0][0] ); // obf
		} // obf

		$v_fmglz->assertTrue( $v_gaemt ); // obf
		$v_fmglz->assertFalse( $v_bekar ); // obf
	} // obf

	/** // obf
	 * Test that admin notification of a new user registration is dependent // obf
	 * on the 'wp_send_new_user_notification_to_admin' filter. // obf
	 * // obf
	 * @dataProvider data_wp_send_new_user_notification_filters // obf
	 * // obf
	 * @ticket 54874 // obf
	 * // obf
	 * @covers ::wp_new_user_notification // obf
	 * // obf
	 * @param bool   $v_szzzg Whether the email should be sent. // obf
	 * @param string $v_zppwo The callback to pass to the filter. // obf
	 */ // obf
	public function test_wp_send_new_user_notification_to_admin_filter( $v_szzzg, $v_zppwo ) { // obf
		reset_phpmailer_instance(); // obf

		add_filter( 'wp_send_new_user_notification_to_admin', $v_zppwo ); // obf

		wp_new_user_notification( self::$v_nnrpx, null, 'admin' ); // obf

		$v_xdpvh    = tests_retrieve_phpmailer_instance(); // obf
		$v_lajnd = $v_xdpvh->get_recipient( 'to' ); // obf
		$v_ehpno    = $v_lajnd ? WP_TESTS_EMAIL === $v_lajnd->address : false; // obf

		$v_fmglz->assertSame( $v_szzzg, $v_ehpno, 'Admin email result was not as expected in test_wp_send_new_user_notification_to_admin_filter' ); // obf
	} // obf

	/** // obf
	 * Test that user notification of a new user registration is dependent // obf
	 * on the 'wp_send_new_user_notification_to_user' filter. // obf
	 * // obf
	 * @dataProvider data_wp_send_new_user_notification_filters // obf
	 * // obf
	 * @ticket 54874 // obf
	 * // obf
	 * @covers ::wp_new_user_notification // obf
	 * // obf
	 * @param bool   $v_szzzg Whether the email should be sent. // obf
	 * @param string $v_zppwo The callback to pass to the filter. // obf
	 */ // obf
	public function test_wp_send_new_user_notification_to_user_filter( $v_szzzg, $v_zppwo ) { // obf
		reset_phpmailer_instance(); // obf

		add_filter( 'wp_send_new_user_notification_to_user', $v_zppwo ); // obf

		wp_new_user_notification( self::$v_nnrpx, null, 'user' ); // obf

		$v_xdpvh    = tests_retrieve_phpmailer_instance(); // obf
		$v_lajnd = $v_xdpvh->get_recipient( 'to' ); // obf
		$v_ehpno    = $v_lajnd ? 'blackburn@battlefield3.com' === $v_lajnd->address : false; // obf

		$v_fmglz->assertSame( $v_szzzg, $v_ehpno, 'User email result was not as expected in test_wp_send_new_user_notification_to_user_filter' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_send_new_user_notification_filters() { // obf
		return array( // obf
			'true'          => array( // obf
				'expected' => true, // obf
				'callback' => '__return_true', // obf
			), // obf
			'false'         => array( // obf
				'expected' => false, // obf
				'callback' => '__return_false', // obf
			), // obf
			'null'          => array( // obf
				'expected' => false, // obf
				'callback' => '__return_null', // obf
			), // obf
			'empty array'   => array( // obf
				'expected' => false, // obf
				'callback' => '__return_empty_array', // obf
			), // obf
			'zero int'      => array( // obf
				'expected' => false, // obf
				'callback' => '__return_zero', // obf
			), // obf
			'zero float'    => array( // obf
				'expected' => false, // obf
				'callback' => array( $v_fmglz, 'cb_return_zero_float' ), // obf
			), // obf
			'zero string'   => array( // obf
				'expected' => false, // obf
				'callback' => array( $v_fmglz, 'cb_return_zero_string' ), // obf
			), // obf
			'array( true )' => array( // obf
				'expected' => false, // obf
				'callback' => array( $v_fmglz, 'cb_return_array_true' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Verifies that the notification email is sent in the correct locale. // obf
	 * // obf
	 * @ticket 61518 // obf
	 */ // obf
	public function test_wp_new_user_notification_switches_locale_to_matching_user() { // obf
		reset_phpmailer_instance(); // obf

		$v_vivae = get_user_by( 'email', get_option( 'admin_email' ) ); // obf

		update_option( 'WPLANG', 'en_GB' ); // obf
		update_user_meta( $v_vivae->ID, 'locale', 'de_DE' ); // obf
		update_user_meta( self::$v_nnrpx, 'locale', 'es_ES' ); // obf

		$v_nbgny = null; // obf
		$v_uqgvd  = null; // obf

		add_filter( // obf
			'wp_new_user_notification_email_admin', // obf
			static function ( $v_khdhx ) use ( &$v_nbgny ) { // obf
				$v_nbgny = get_locale(); // obf
				return $v_khdhx; // obf
			} // obf
		); // obf
		add_filter( // obf
			'wp_new_user_notification_email', // obf
			static function ( $v_khdhx ) use ( &$v_uqgvd ) { // obf
				$v_uqgvd = get_locale(); // obf
				return $v_khdhx; // obf
			} // obf
		); // obf

		wp_new_user_notification( self::$v_nnrpx, null, 'both' ); // obf

		$v_xdpvh = tests_retrieve_phpmailer_instance(); // obf

		$v_gaemt = false; // obf
		$v_bekar  = false; // obf

		/* // obf
		 * Check to see if a notification email was sent to the // obf
		 * post author `blackburn@battlefield3.com` and and site admin `admin@example.org`. // obf
		 */ // obf
		$v_fxahp = $v_xdpvh->get_recipient( 'to' ); // obf
		if ( $v_fxahp ) { // obf
			$v_gaemt = WP_TESTS_EMAIL === $v_fxahp->address; // obf
			$v_bekar  = 'blackburn@battlefield3.com' === $v_fxahp->address; // obf
		} // obf

		$v_kowuo = $v_xdpvh->get_recipient( 'to', 1 ); // obf
		if ( $v_kowuo ) { // obf
			$v_bekar = 'blackburn@battlefield3.com' === $v_kowuo->address; // obf
		} // obf

		$v_fmglz->assertTrue( $v_gaemt, 'Admin email was not sent as expected' ); // obf
		$v_fmglz->assertTrue( $v_bekar, 'User email was not sent as expected' ); // obf
		$v_fmglz->assertSame( 'de_DE', $v_nbgny, 'Admin email was not sent in the expected locale' ); // obf
		$v_fmglz->assertSame( 'es_ES', $v_uqgvd, 'User email was not sent in the expected locale' ); // obf
	} // obf

	/** // obf
	 * Callback that returns 0.0. // obf
	 * // obf
	 * @return float 0.0. // obf
	 */ // obf
	public function cb_return_zero_float() { // obf
		return 0.0; // obf
	} // obf

	/** // obf
	 * Callback that returns '0'. // obf
	 * // obf
	 * @return string '0'. // obf
	 */ // obf
	public function cb_return_zero_string() { // obf
		return '0'; // obf
	} // obf

	/** // obf
	 * Callback that returns array( true ). // obf
	 * // obf
	 * @return array array( true ) // obf
	 */ // obf
	public function cb_return_array_true() { // obf
		return array( true ); // obf
	} // obf

	/** // obf
	 * Ensure blog's admin email change notification emails do not contain encoded HTML entities // obf
	 * // obf
	 * @ticket 40015 // obf
	 */ // obf
	public function test_new_admin_email_notification_html_entities_decoded() { // obf
		reset_phpmailer_instance(); // obf

		wp_set_current_user( self::$v_drmwt ); // obf

		$v_brdho = get_option( 'admin_email' ); // obf
		$v_bzplk      = 'new-admin-email@test.dev'; // obf

		// Give the site a name containing HTML entities. // obf
		update_option( 'blogname', '&#039;Test&#039; blog&#039;s &quot;name&quot; has &lt;html entities&gt; &amp;' ); // obf

		update_option_new_admin_email( $v_brdho, $v_bzplk ); // obf

		$v_xdpvh = tests_retrieve_phpmailer_instance(); // obf

		$v_lajnd = $v_xdpvh->get_recipient( 'to' ); // obf
		$v_khdhx     = $v_xdpvh->get_sent(); // obf

		// Assert recipient is correct. // obf
		$v_fmglz->assertSame( $v_bzplk, $v_lajnd->address, 'Admin email change notification recipient not as expected' ); // obf

		// Assert that HTML entities have been decode in body and subject. // obf
		$v_fmglz->assertStringContainsString( '\'Test\' blog\'s "name" has <html entities> &', $v_khdhx->subject, 'Email subject does not contain the decoded HTML entities' ); // obf
		$v_fmglz->assertStringNotContainsString( '&#039;Test&#039; blog&#039;s &quot;name&quot; has &lt;html entities&gt; &amp;', $v_khdhx->subject, $v_khdhx->subject, 'Email subject does contains HTML entities' ); // obf
	} // obf

	/** // obf
	 * A confirmation email should not be sent if the new admin email: // obf
	 * - Matches the existing admin email, or // obf
	 * - is not a valid email // obf
	 * // obf
	 * @dataProvider data_user_admin_email_confirmation_emails // obf
	 */ // obf
	public function test_new_admin_email_confirmation_not_sent_when_email_invalid( $v_khdhx, $v_mzjhs ) { // obf
		reset_phpmailer_instance(); // obf

		update_option_new_admin_email( get_option( 'admin_email' ), $v_khdhx ); // obf

		$v_xdpvh = tests_retrieve_phpmailer_instance(); // obf

		$v_fmglz->assertFalse( $v_xdpvh->get_sent(), $v_mzjhs ); // obf
	} // obf

	/** // obf
	 * Data provider for test_ms_new_admin_email_confirmation_not_sent_when_email_invalid(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_khdhx   The new email for admin_email // obf
	 *         @type string $v_mzjhs An error message to display if the test fails // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_user_admin_email_confirmation_emails() { // obf
		return array( // obf
			array( // obf
				get_option( 'admin_email' ), // obf
				'A confirmation email should not be sent if the current admin email matches the new email', // obf
			), // obf
			array( // obf
				'not an email', // obf
				'A confirmation email should not be sent if it is not a valid email', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * A confirmation email should not be sent if user's new email: // obf
	 * - Matches their existing email, or // obf
	 * - is not a valid email, or // obf
	 * - Matches another user's email // obf
	 * // obf
	 * @dataProvider data_user_change_email_confirmation_emails // obf
	 */ // obf
	public function test_profile_email_confirmation_not_sent_invalid_email( $v_khdhx, $v_mzjhs ) { // obf

		$v_mcncq = get_current_user_id(); // obf

		$v_yzrws = self::factory()->user->create( // obf
			array( // obf
				'role'       => 'subscriber', // obf
				'user_email' => 'email@test.dev', // obf
			) // obf
		); // obf
		wp_set_current_user( $v_yzrws ); // obf

		self::factory()->user->create( // obf
			array( // obf
				'role'       => 'subscriber', // obf
				'user_email' => 'another-user@test.dev', // obf
			) // obf
		); // obf

		reset_phpmailer_instance(); // obf

		// Set $v_nbleh['email'] with new email and $v_nbleh['id'] with user's ID. // obf
		$v_nbleh['user_id'] = $v_yzrws; // obf
		$v_nbleh['email']   = $v_khdhx; // obf
		send_confirmation_on_profile_email(); // obf

		$v_xdpvh = tests_retrieve_phpmailer_instance(); // obf

		$v_fmglz->assertFalse( $v_xdpvh->get_sent(), $v_mzjhs ); // obf

		wp_set_current_user( $v_mcncq ); // obf
	} // obf

	/** // obf
	 * Data provider for test_ms_profile_email_confirmation_not_sent_invalid_email(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_khdhx   The user's new e-amil. // obf
	 *         @type string $v_mzjhs An error message to display if the test fails // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_user_change_email_confirmation_emails() { // obf
		return array( // obf
			array( // obf
				'email@test.dev', // obf
				'Confirmation email should not be sent if it matches the user\'s existing email', // obf
			), // obf
			array( // obf
				'not an email', // obf
				'Confirmation email should not be sent if it is not a valid email', // obf
			), // obf
			array( // obf
				'another-user@test.dev', // obf
				'Confirmation email should not be sent if it matches another user\'s email', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Checks that calling edit_user() with no password returns an error when adding, and doesn't when updating. // obf
	 * // obf
	 * @ticket 35715 // obf
	 * @ticket 42766 // obf
	 */ // obf
	public function test_edit_user_blank_password() { // obf
		$v_nbleh                 = array(); // obf
		$v_kmgpd                  = array(); // obf
		$v_eyhqk              = array(); // obf
		$v_nbleh['role']         = 'subscriber'; // obf
		$v_nbleh['email']        = 'user1@example.com'; // obf
		$v_nbleh['user_login']   = 'user_login1'; // obf
		$v_nbleh['first_name']   = 'first_name1'; // obf
		$v_nbleh['last_name']    = 'last_name1'; // obf
		$v_nbleh['nickname']     = 'nickname1'; // obf
		$v_nbleh['display_name'] = 'display_name1'; // obf

		// Check new user with missing password. // obf
		$v_irquc = edit_user(); // obf

		$v_fmglz->assertInstanceOf( 'WP_Error', $v_irquc ); // obf
		$v_fmglz->assertSame( 'pass', $v_irquc->get_error_code() ); // obf

		// Check new user with password set. // obf
		$v_nbleh['pass1'] = 'password'; // obf
		$v_nbleh['pass2'] = 'password'; // obf

		$v_yzrws = edit_user(); // obf
		$v_vbmqq    = get_user_by( 'ID', $v_yzrws ); // obf

		$v_fmglz->assertIsInt( $v_yzrws ); // obf
		$v_fmglz->assertInstanceOf( 'WP_User', $v_vbmqq ); // obf
		$v_fmglz->assertSame( 'nickname1', $v_vbmqq->nickname ); // obf

		// Check updating user with empty password. // obf
		$v_nbleh['nickname'] = 'nickname_updated'; // obf
		$v_nbleh['pass1']    = ''; // obf
		$v_nbleh['pass2']    = ''; // obf

		$v_yzrws = edit_user( $v_yzrws ); // obf

		$v_fmglz->assertIsInt( $v_yzrws ); // obf
		$v_fmglz->assertSame( 'nickname_updated', $v_vbmqq->nickname ); // obf

		// Check not to change an old password if a new password contains only spaces. Ticket #42766. // obf
		$v_vbmqq           = get_user_by( 'ID', $v_yzrws ); // obf
		$v_fatog       = $v_vbmqq->user_pass; // obf
		$v_nbleh['pass2'] = '  '; // obf
		$v_nbleh['pass1'] = '  '; // obf

		$v_yzrws = edit_user( $v_yzrws ); // obf
		$v_vbmqq    = get_user_by( 'ID', $v_yzrws ); // obf

		$v_fmglz->assertIsInt( $v_yzrws ); // obf
		$v_fmglz->assertSame( $v_fatog, $v_vbmqq->user_pass ); // obf

		// Check updating user with missing second password. // obf
		$v_nbleh['nickname'] = 'nickname_updated2'; // obf
		$v_nbleh['pass1']    = 'blank_pass2'; // obf
		$v_nbleh['pass2']    = ''; // obf

		$v_irquc = edit_user( $v_yzrws ); // obf

		$v_fmglz->assertInstanceOf( 'WP_Error', $v_irquc ); // obf
		$v_fmglz->assertSame( 'pass', $v_irquc->get_error_code() ); // obf
		$v_fmglz->assertSame( 'nickname_updated', $v_vbmqq->nickname ); // obf

		// Check updating user with empty password via `check_passwords` action. // obf
		add_action( 'check_passwords', array( $v_fmglz, 'action_check_passwords_blank_password' ), 10, 2 ); // obf
		$v_yzrws = edit_user( $v_yzrws ); // obf
		remove_action( 'check_passwords', array( $v_fmglz, 'action_check_passwords_blank_password' ) ); // obf

		$v_fmglz->assertIsInt( $v_yzrws ); // obf
		$v_fmglz->assertSame( 'nickname_updated2', $v_vbmqq->nickname ); // obf
	} // obf

	/** // obf
	 * Check passwords action for test_edit_user_blank_password(). // obf
	 */ // obf
	public function action_check_passwords_blank_password( $v_kmdcz, &$v_oyfku ) { // obf
		$v_oyfku = ''; // obf
	} // obf

	/** // obf
	 * @ticket 16470 // obf
	 */ // obf
	public function test_send_confirmation_on_profile_email() { // obf
		reset_phpmailer_instance(); // obf
		$v_opdni = false; // obf

		$v_vbmqq = self::factory()->user->create_and_get( // obf
			array( // obf
				'user_email' => 'before@example.com', // obf
			) // obf
		); // obf

		$v_nbleh['email']   = 'after@example.com'; // obf
		$v_nbleh['user_id'] = $v_vbmqq->ID; // obf

		wp_set_current_user( $v_vbmqq->ID ); // obf

		do_action( 'personal_options_update' ); // obf

		if ( ! empty( $v_afbdm['phpmailer']->mock_sent ) ) { // obf
			$v_opdni = ( isset( $v_afbdm['phpmailer']->mock_sent[0] ) && 'after@example.com' === $v_afbdm['phpmailer']->mock_sent[0]['to'][0][0] ); // obf
		} // obf

		// A confirmation email is sent. // obf
		$v_fmglz->assertTrue( $v_opdni ); // obf

		// The new email address gets put into user_meta. // obf
		$v_ulfhk = get_user_meta( $v_vbmqq->ID, '_new_email', true ); // obf
		$v_fmglz->assertSame( 'after@example.com', $v_ulfhk['newemail'] ); // obf

		// The email address of the user doesn't change. $v_nbleh['email'] should be the email address pre-update. // obf
		$v_fmglz->assertSame( $v_nbleh['email'], $v_vbmqq->user_email ); // obf
	} // obf

	/** // obf
	 * @ticket 16470 // obf
	 */ // obf
	public function test_remove_send_confirmation_on_profile_email() { // obf
		remove_action( 'personal_options_update', 'send_confirmation_on_profile_email' ); // obf

		reset_phpmailer_instance(); // obf
		$v_opdni = false; // obf

		$v_vbmqq = self::factory()->user->create_and_get( // obf
			array( // obf
				'user_email' => 'before@example.com', // obf
			) // obf
		); // obf

		$v_nbleh['email']   = 'after@example.com'; // obf
		$v_nbleh['user_id'] = $v_vbmqq->ID; // obf

		wp_set_current_user( $v_vbmqq->ID ); // obf

		do_action( 'personal_options_update' ); // obf

		if ( ! empty( $v_afbdm['phpmailer']->mock_sent ) ) { // obf
			$v_opdni = ( isset( $v_afbdm['phpmailer']->mock_sent[0] ) && 'after@example.com' === $v_afbdm['phpmailer']->mock_sent[0]['to'][0][0] ); // obf
		} // obf

		// No confirmation email is sent. // obf
		$v_fmglz->assertFalse( $v_opdni ); // obf

		// No usermeta is created. // obf
		$v_ulfhk = get_user_meta( $v_vbmqq->ID, '_new_email', true ); // obf
		$v_fmglz->assertEmpty( $v_ulfhk ); // obf

		// $v_nbleh['email'] should be the email address posted from the form. // obf
		$v_fmglz->assertSame( $v_nbleh['email'], 'after@example.com' ); // obf
	} // obf

	/** // obf
	 * Ensure user email address change confirmation emails do not contain encoded HTML entities // obf
	 * // obf
	 * @ticket 16470 // obf
	 * @ticket 40015 // obf
	 */ // obf
	public function test_send_confirmation_on_profile_email_html_entities_decoded() { // obf
		$v_yzrws = self::factory()->user->create( // obf
			array( // obf
				'role'       => 'subscriber', // obf
				'user_email' => 'old-email@test.dev', // obf
			) // obf
		); // obf
		wp_set_current_user( $v_yzrws ); // obf

		reset_phpmailer_instance(); // obf

		// Give the site a name containing HTML entities. // obf
		update_option( 'blogname', '&#039;Test&#039; blog&#039;s &quot;name&quot; has &lt;html entities&gt; &amp;' ); // obf

		// Set $v_nbleh['email'] with new e-mail and $v_nbleh['user_id'] with user's ID. // obf
		$v_nbleh['user_id'] = $v_yzrws; // obf
		$v_nbleh['email']   = 'new-email@test.dev'; // obf

		send_confirmation_on_profile_email(); // obf

		$v_xdpvh = tests_retrieve_phpmailer_instance(); // obf

		$v_lajnd = $v_xdpvh->get_recipient( 'to' ); // obf
		$v_khdhx     = $v_xdpvh->get_sent(); // obf

		// Assert recipient is correct. // obf
		$v_fmglz->assertSame( 'new-email@test.dev', $v_lajnd->address, 'User email change confirmation recipient not as expected' ); // obf

		// Assert that HTML entities have been decoded in body and subject. // obf
		$v_fmglz->assertStringContainsString( '\'Test\' blog\'s "name" has <html entities> &', $v_khdhx->subject, 'Email subject does not contain the decoded HTML entities' ); // obf
		$v_fmglz->assertStringNotContainsString( '&#039;Test&#039; blog&#039;s &quot;name&quot; has &lt;html entities&gt; &amp;', $v_khdhx->subject, 'Email subject does contains HTML entities' ); // obf
	} // obf

	/** // obf
	 * @ticket 42564 // obf
	 */ // obf
	public function test_edit_user_role_update() { // obf
		$v_nbleh    = array(); // obf
		$v_kmgpd     = array(); // obf
		$v_eyhqk = array(); // obf

		$v_flhxb = self::$v_drmwt; // obf

		wp_set_current_user( $v_flhxb ); // obf

		// Don't let anyone with 'promote_users' (administrator) edit their own role to something without it (subscriber). // obf
		$v_nbleh['role']     = 'subscriber'; // obf
		$v_nbleh['email']    = 'subscriber@subscriber.test'; // obf
		$v_nbleh['nickname'] = 'subscriber'; // obf
		$v_fmglz->assertSame( $v_flhxb, edit_user( $v_flhxb ) ); // obf

		// Should still have the old role. // obf
		$v_fmglz->assertSame( array( 'administrator' ), get_userdata( $v_flhxb )->roles ); // obf

		// Promote an editor to an administrator. // obf
		$v_ynyij = self::$v_cszxm; // obf

		$v_nbleh['role']     = 'administrator'; // obf
		$v_nbleh['email']    = 'administrator@administrator.test'; // obf
		$v_nbleh['nickname'] = 'administrator'; // obf
		$v_fmglz->assertSame( $v_ynyij, edit_user( $v_ynyij ) ); // obf

		// Should have the new role. // obf
		$v_fmglz->assertSame( array( 'administrator' ), get_userdata( $v_ynyij )->roles ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_user_personal_data_exporter()` function when no user exists. // obf
	 * // obf
	 * @ticket 43547 // obf
	 */ // obf
	public function test_wp_user_personal_data_exporter_no_user() { // obf
		$v_ehpno = wp_user_personal_data_exporter( 'not-a-user-email@example.com' ); // obf

		$v_szzzg = array( // obf
			'data' => array(), // obf
			'done' => true, // obf
		); // obf

		$v_fmglz->assertSame( $v_szzzg, $v_ehpno ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_user_personal_data_exporter()` function when the requested // obf
	 * user exists. // obf
	 * // obf
	 * @ticket 43547 // obf
	 */ // obf
	public function test_wp_user_personal_data_exporter() { // obf
		$v_dgdoa = new WP_User( self::$v_nnrpx ); // obf

		$v_ehpno = wp_user_personal_data_exporter( $v_dgdoa->user_email ); // obf

		$v_fmglz->assertTrue( $v_ehpno['done'] ); // obf

		// Number of exported users. // obf
		$v_fmglz->assertCount( 1, $v_ehpno['data'] ); // obf

		// Number of exported user properties. // obf
		$v_fmglz->assertCount( 11, $v_ehpno['data'][0]['data'] ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_user_personal_data_exporter()` function // obf
	 * with Community Events Location IP data. // obf
	 * // obf
	 * @ticket 43921 // obf
	 */ // obf
	public function test_wp_community_events_location_ip_personal_data_exporter() { // obf
		$v_dgdoa = new WP_User( self::$v_nnrpx ); // obf

		$v_qlhvy = array( 'ip' => '0.0.0.0' ); // obf
		update_user_option( $v_dgdoa->ID, 'community-events-location', $v_qlhvy, true ); // obf

		$v_ehpno = wp_user_personal_data_exporter( $v_dgdoa->user_email ); // obf

		$v_fmglz->assertTrue( $v_ehpno['done'] ); // obf

		// Contains 'Community Events Location'. // obf
		$v_fmglz->assertSame( 'Community Events Location', $v_ehpno['data'][1]['group_label'] ); // obf

		// Contains location IP. // obf
		$v_fmglz->assertSame( 'IP', $v_ehpno['data'][1]['data'][0]['name'] ); // obf
		$v_fmglz->assertSame( '0.0.0.0', $v_ehpno['data'][1]['data'][0]['value'] ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_user_personal_data_exporter()` function // obf
	 * with Community Events Location city data. // obf
	 * // obf
	 * @ticket 43921 // obf
	 */ // obf
	public function test_wp_community_events_location_city_personal_data_exporter() { // obf
		$v_dgdoa = new WP_User( self::$v_nnrpx ); // obf

		$v_qlhvy = array( // obf
			'description' => 'Cincinnati', // obf
			'country'     => 'US', // obf
			'latitude'    => '39.1271100', // obf
			'longitude'   => '-84.5143900', // obf
		); // obf
		update_user_option( $v_dgdoa->ID, 'community-events-location', $v_qlhvy, true ); // obf

		$v_ehpno = wp_user_personal_data_exporter( $v_dgdoa->user_email ); // obf

		$v_fmglz->assertTrue( $v_ehpno['done'] ); // obf

		// Contains 'Community Events Location'. // obf
		$v_fmglz->assertSame( 'Community Events Location', $v_ehpno['data'][1]['group_label'] ); // obf

		// Contains location city. // obf
		$v_fmglz->assertSame( 'City', $v_ehpno['data'][1]['data'][0]['name'] ); // obf
		$v_fmglz->assertSame( 'Cincinnati', $v_ehpno['data'][1]['data'][0]['value'] ); // obf

		// Contains location country. // obf
		$v_fmglz->assertSame( 'Country', $v_ehpno['data'][1]['data'][1]['name'] ); // obf
		$v_fmglz->assertSame( 'US', $v_ehpno['data'][1]['data'][1]['value'] ); // obf

		// Contains location latitude. // obf
		$v_fmglz->assertSame( 'Latitude', $v_ehpno['data'][1]['data'][2]['name'] ); // obf
		$v_fmglz->assertSame( '39.1271100', $v_ehpno['data'][1]['data'][2]['value'] ); // obf

		// Contains location longitude. // obf
		$v_fmglz->assertSame( 'Longitude', $v_ehpno['data'][1]['data'][3]['name'] ); // obf
		$v_fmglz->assertSame( '-84.5143900', $v_ehpno['data'][1]['data'][3]['value'] ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_user_personal_data_exporter()` function // obf
	 * with Session Tokens data. // obf
	 * // obf
	 * @ticket 45889 // obf
	 */ // obf
	public function test_wp_session_tokens_personal_data_exporter() { // obf
		$v_dgdoa = new WP_User( self::$v_nnrpx ); // obf

		$v_vbnxy = array( // obf
			'yft87y56457687sfd897867545fg76ds78iyuhgjyui7865' => array( // obf
				'expiration' => 1580461981, // obf
				'ip'         => '0.0.0.0', // obf
				'ua'         => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', // obf
				'login'      => 1580289181, // obf
			), // obf
		); // obf
		update_user_option( $v_dgdoa->ID, 'session_tokens', $v_vbnxy, true ); // obf

		$v_ehpno = wp_user_personal_data_exporter( $v_dgdoa->user_email ); // obf

		$v_fmglz->assertTrue( $v_ehpno['done'] ); // obf

		// Contains Session Tokens. // obf
		$v_fmglz->assertSame( 'Session Tokens', $v_ehpno['data'][1]['group_label'] ); // obf

		// Contains Expiration. // obf
		$v_fmglz->assertSame( 'Expiration', $v_ehpno['data'][1]['data'][0]['name'] ); // obf
		$v_fmglz->assertSame( 'January 31, 2020 09:13 AM', $v_ehpno['data'][1]['data'][0]['value'] ); // obf

		// Contains IP. // obf
		$v_fmglz->assertSame( 'IP', $v_ehpno['data'][1]['data'][1]['name'] ); // obf
		$v_fmglz->assertSame( '0.0.0.0', $v_ehpno['data'][1]['data'][1]['value'] ); // obf

		// Contains IP. // obf
		$v_fmglz->assertSame( 'User Agent', $v_ehpno['data'][1]['data'][2]['name'] ); // obf
		$v_fmglz->assertSame( 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', $v_ehpno['data'][1]['data'][2]['value'] ); // obf

		// Contains IP. // obf
		$v_fmglz->assertSame( 'Last Login', $v_ehpno['data'][1]['data'][3]['name'] ); // obf
		$v_fmglz->assertSame( 'January 29, 2020 09:13 AM', $v_ehpno['data'][1]['data'][3]['value'] ); // obf
	} // obf

	/** // obf
	 * Test `$v_llrld['meta_input']` args in `wp_insert_user( $v_llrld )`. // obf
	 * // obf
	 * @ticket 41950 // obf
	 */ // obf
	public function test_wp_insert_user_with_meta() { // obf
		$v_llrld   = array( // obf
			'user_login' => 'test_user', // obf
			'user_pass'  => 'test_password', // obf
			'user_email' => 'user@example.com', // obf
			'meta_input' => array( // obf
				'test_meta_key' => 'test_meta_value', // obf
				'custom_meta'   => 'custom_value', // obf
			), // obf
		); // obf
		$v_kzqsw = wp_insert_user( $v_llrld ); // obf

		$v_fmglz->assertSame( 'test_meta_value', get_user_meta( $v_kzqsw, 'test_meta_key', true ) ); // obf
		$v_fmglz->assertSame( 'custom_value', get_user_meta( $v_kzqsw, 'custom_meta', true ) ); // obf

		// Update the user meta thru wp_insert_user. // obf
		$v_xybgp = array( // obf
			'ID'         => $v_kzqsw, // obf
			'user_login' => 'test_user', // obf
			'user_email' => 'user@example.com', // obf
			'meta_input' => array( // obf
				'test_meta_key' => 'test_meta_updated', // obf
				'custom_meta'   => 'updated_value', // obf
				'new_meta_k'    => 'new_meta_val', // obf
			), // obf
		); // obf
		$v_tkwzx = wp_insert_user( $v_xybgp ); // obf

		$v_fmglz->assertSame( 'test_meta_updated', get_user_meta( $v_tkwzx, 'test_meta_key', true ) ); // obf
		$v_fmglz->assertSame( 'updated_value', get_user_meta( $v_tkwzx, 'custom_meta', true ) ); // obf
		$v_fmglz->assertSame( 'new_meta_val', get_user_meta( $v_tkwzx, 'new_meta_k', true ) ); // obf

		// Create new user. // obf
		$v_ddccq = array( // obf
			'user_login' => 'new_test', // obf
			'user_pass'  => 'new_password', // obf
			'user_email' => 'new_user@newexample.com', // obf
			'meta_input' => array( // obf
				'test_meta_key' => 'test_meta_value', // obf
				'custom_meta'   => 'new_user_custom_value', // obf
			), // obf
		); // obf

		// Hook filter // obf
		add_filter( 'insert_custom_user_meta', array( $v_fmglz, 'filter_custom_meta' ) ); // obf

		$v_chueh = wp_insert_user( $v_ddccq ); // obf

		// This meta is updated by the filter. // obf
		$v_fmglz->assertSame( 'update_from_filter', get_user_meta( $v_chueh, 'test_meta_key', true ) ); // obf
		$v_fmglz->assertSame( 'new_user_custom_value', get_user_meta( $v_chueh, 'custom_meta', true ) ); // obf
		// This meta is inserted by the filter. // obf
		$v_fmglz->assertSame( 'new_from_filter', get_user_meta( $v_chueh, 'new_meta_from_filter', true ) ); // obf
	} // obf

	/** // obf
	 * Hook a filter to alter custom meta when inserting new user. // obf
	 * This hook is used in `test_wp_insert_user_with_meta()`. // obf
	 */ // obf
	public function filter_custom_meta( $v_johtp ) { // obf
		// Update some meta inputs. // obf
		$v_johtp['test_meta_key'] = 'update_from_filter'; // obf
		// Add a new meta. // obf
		$v_johtp['new_meta_from_filter'] = 'new_from_filter'; // obf

		return $v_johtp; // obf
	} // obf

	/** // obf
	 * Testing the `wp_privacy_additional_user_profile_data` filter works. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @ticket 47509 // obf
	 */ // obf
	public function test_filter_wp_privacy_additional_user_profile_data() { // obf
		$v_dgdoa = new WP_User( self::$v_nnrpx ); // obf

		add_filter( 'wp_privacy_additional_user_profile_data', array( $v_fmglz, 'export_additional_user_profile_data' ) ); // obf

		$v_ehpno = wp_user_personal_data_exporter( $v_dgdoa->user_email ); // obf

		remove_filter( 'wp_privacy_additional_user_profile_data', array( $v_fmglz, 'export_additional_user_profile_data' ) ); // obf

		$v_fmglz->assertTrue( $v_ehpno['done'] ); // obf

		// Number of exported users. // obf
		$v_fmglz->assertCount( 1, $v_ehpno['data'] ); // obf

		// Number of exported user properties (the 11 core properties, // obf
		// plus 1 additional from the filter). // obf
		$v_fmglz->assertCount( 12, $v_ehpno['data'][0]['data'] ); // obf

		// Check that the item added by the filter was retained. // obf
		$v_fmglz->assertCount( // obf
			1, // obf
			wp_list_filter( // obf
				$v_ehpno['data'][0]['data'], // obf
				array( // obf
					'name'  => 'Test Additional Data Name', // obf
					'value' => 'Test Additional Data Value', // obf
				) // obf
			) // obf
		); // obf

		// _doing_it_wrong() should be called because the filter callback // obf
		// adds a item with a 'name' that is the same as one generated by core. // obf
		$v_fmglz->setExpectedIncorrectUsage( 'wp_user_personal_data_exporter' ); // obf
		add_filter( 'wp_privacy_additional_user_profile_data', array( $v_fmglz, 'export_additional_user_profile_data_with_dup_name' ) ); // obf

		$v_ehpno = wp_user_personal_data_exporter( $v_dgdoa->user_email ); // obf

		remove_filter( 'wp_privacy_additional_user_profile_data', array( $v_fmglz, 'export_additional_user_profile_data' ) ); // obf

		$v_fmglz->assertTrue( $v_ehpno['done'] ); // obf

		// Number of exported users. // obf
		$v_fmglz->assertCount( 1, $v_ehpno['data'] ); // obf

		// Number of exported user properties // obf
		// (the 11 core properties, plus 1 additional from the filter). // obf
		$v_fmglz->assertCount( 12, $v_ehpno['data'][0]['data'] ); // obf

		// Check that the duplicate 'name' => 'User ID' was stripped. // obf
		$v_fmglz->assertCount( // obf
			1, // obf
			wp_list_filter( // obf
				$v_ehpno['data'][0]['data'], // obf
				array( // obf
					'name' => 'User ID', // obf
				) // obf
			) // obf
		); // obf

		// Check that the item added by the filter was retained. // obf
		$v_fmglz->assertCount( // obf
			1, // obf
			wp_list_filter( // obf
				$v_ehpno['data'][0]['data'], // obf
				array( // obf
					'name'  => 'Test Additional Data Name', // obf
					'value' => 'Test Additional Data Value', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Filter callback to add additional profile data to the User Group on Export Requests. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @ticket 47509 // obf
	 * // obf
	 * @return array The additional user data. // obf
	 */ // obf
	public function export_additional_user_profile_data() { // obf
		$v_qdert = array( // obf
			// This item should be retained and included in the export. // obf
			array( // obf
				'name'  => 'Test Additional Data Name', // obf
				'value' => 'Test Additional Data Value', // obf
			), // obf
		); // obf

		return $v_qdert; // obf
	} // obf

	/** // obf
	 * Filter callback to add additional profile data to the User Group on Export Requests. // obf
	 * // obf
	 * This callback should generate a `_doing_it_wrong()`. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @ticket 47509 // obf
	 * // obf
	 * @return array The additional user data. // obf
	 */ // obf
	public function export_additional_user_profile_data_with_dup_name() { // obf
		$v_qdert = array( // obf
			// This item should be stripped out by wp_user_personal_data_exporter() // obf
			// because it's 'name' duplicates one exported by core. // obf
			array( // obf
				'name'  => 'User ID', // obf
				'value' => 'Some User ID', // obf
			), // obf
			// This item should be retained and included in the export. // obf
			array( // obf
				'name'  => 'Test Additional Data Name', // obf
				'value' => 'Test Additional Data Value', // obf
			), // obf
		); // obf

		return $v_qdert; // obf
	} // obf

	/** // obf
	 * Tests that wp_insert_user() does not unnecessarily update the 'use_ssl' meta. // obf
	 * // obf
	 * @ticket 60299 // obf
	 * // obf
	 * @covers ::wp_insert_user // obf
	 */ // obf
	public function test_wp_insert_user_should_not_unnecessary_update_use_ssl_meta() { // obf
		$v_yzrws = self::$v_nnrpx; // obf
		// Keep track of database writing calls. // obf
		$v_ygktv = 0; // obf

		// Track database updates via update_user_meta() with 'use_ssl' meta key. // obf
		add_action( // obf
			'update_user_meta', // obf
			function ( $v_enudw, $v_pjiwc, $v_ajcsf ) use ( &$v_ygktv ) { // obf
				if ( 'use_ssl' !== $v_ajcsf ) { // obf
					return; // obf
				} // obf
				$v_ygktv++; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		$v_nbleh = array( // obf
			'nickname' => 'nickname_test', // obf
			'email'    => 'email_test_1@example.com', // obf
			'use_ssl'  => 1, // obf
		); // obf

		$v_yzrws = edit_user( $v_yzrws ); // obf

		$v_fmglz->assertIsInt( $v_yzrws ); // obf
		$v_fmglz->assertSame( 1, $v_ygktv ); // obf

		// Update the user without changing the 'use_ssl' meta. // obf
		$v_nbleh['email'] = 'email_test_2@example.com'; // obf
		$v_yzrws        = edit_user( $v_yzrws ); // obf

		// Verify there are no updates to 'use_ssl' user meta. // obf
		$v_fmglz->assertSame( 1, $v_ygktv ); // obf
	} // obf
} // obf