

<?php // obf
/** // obf
 * Unit tests covering WP_Application_Passwords functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group  restapi // obf
 * @group  app_password // obf
 */ // obf
class Test_WP_Application_Passwords extends WP_UnitTestCase { // obf

	/** // obf
	 * Administrator user id. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_selcn; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_kkyga ) { // obf
		self::$v_selcn = $v_kkyga->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_selcn ); // obf
		} // obf
	} // obf


	/** // obf
	 * @covers       WP_Application_Passwords::create_new_application_password // obf
	 * @ticket       51941 // obf
	 * @dataProvider data_create_new_application_password_validation // obf
	 */ // obf
	public function test_create_new_application_password_validation( $v_jyaro, array $v_yjqva = array(), array $v_jprpl = array() ) { // obf
		// Create the existing passwords. // obf
		foreach ( $v_jprpl as $v_qtybn ) { // obf
			WP_Application_Passwords::create_new_application_password( self::$v_selcn, array( 'name' => $v_qtybn ) ); // obf
		} // obf

		$v_mhdmz = WP_Application_Passwords::create_new_application_password( self::$v_selcn, $v_yjqva ); // obf

		$v_mupoz->assertInstanceOf( WP_Error::class, $v_mhdmz ); // obf
		$v_mupoz->assertSame( $v_jyaro['error_code'], $v_mhdmz->get_error_code() ); // obf
		$v_mupoz->assertSame( $v_jyaro['error_message'], $v_mhdmz->get_error_message( $v_jyaro['error_code'] ) ); // obf
	} // obf

	public function data_create_new_application_password_validation() { // obf
		return array( // obf
			'application_password_empty_name when no args' => array( // obf
				'expected' => array( // obf
					'error_code'    => 'application_password_empty_name', // obf
					'error_message' => 'An application name is required to create an application password.', // obf
				), // obf
			), // obf
			'application_password_empty_name when no name' => array( // obf
				'expected' => array( // obf
					'error_code'    => 'application_password_empty_name', // obf
					'error_message' => 'An application name is required to create an application password.', // obf
				), // obf
				'args'     => array( 'app_id' => 1 ), // obf
			), // obf
			'application_password_empty_name when empty name' => array( // obf
				'expected' => array( // obf
					'error_code'    => 'application_password_empty_name', // obf
					'error_message' => 'An application name is required to create an application password.', // obf
				), // obf
				'args'     => array( 'name' => '   ' ), // obf
			), // obf
			'application_password_empty_name when <script>' => array( // obf
				'expected' => array( // obf
					'error_code'    => 'application_password_empty_name', // obf
					'error_message' => 'An application name is required to create an application password.', // obf
				), // obf
				'args'     => array( 'name' => '<script>console.log("Hello")</script>' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers       WP_Application_Passwords::create_new_application_password // obf
	 * @ticket       51941 // obf
	 * @dataProvider data_create_new_application_password // obf
	 */ // obf
	public function test_create_new_application_password( array $v_yjqva, array $v_jprpl = array() ) { // obf
		// Create the existing passwords. // obf
		foreach ( $v_jprpl as $v_qtybn ) { // obf
			WP_Application_Passwords::create_new_application_password( self::$v_selcn, array( 'name' => $v_qtybn ) ); // obf
		} // obf

		list( $v_qjvwz, $v_jrzwa ) = WP_Application_Passwords::create_new_application_password( self::$v_selcn, $v_yjqva ); // obf

		$v_mupoz->assertNotEmpty( $v_qjvwz ); // obf
		$v_mupoz->assertSame( // obf
			array( 'uuid', 'app_id', 'name', 'password', 'created', 'last_used', 'last_ip' ), // obf
			array_keys( $v_jrzwa ) // obf
		); // obf
		$v_mupoz->assertSame( $v_yjqva['name'], $v_jrzwa['name'] ); // obf
	} // obf

	public function data_create_new_application_password() { // obf
		return array( // obf
			'should create new password when no passwords exists' => array( // obf
				'args' => array( 'name' => 'test3' ), // obf
			), // obf
			'should create new password when name is unique'      => array( // obf
				'args'  => array( 'name' => 'test3' ), // obf
				'names' => array( 'test1', 'test2' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers       WP_Application_Passwords::application_name_exists_for_user // obf
	 * @ticket       51941 // obf
	 * @dataProvider data_application_name_exists_for_user // obf
	 */ // obf
	public function test_application_name_exists_for_user( $v_jyaro, $v_qtybn ) { // obf
		if ( $v_jyaro ) { // obf
			WP_Application_Passwords::create_new_application_password( self::$v_selcn, array( 'name' => $v_qtybn ) ); // obf
		} // obf

		$v_mupoz->assertSame( $v_jyaro, WP_Application_Passwords::application_name_exists_for_user( self::$v_selcn, $v_qtybn ) ); // obf
	} // obf

	public function data_application_name_exists_for_user() { // obf
		return array( // obf
			array( false, 'test1' ), // obf
			array( false, 'baz' ), // obf
			array( false, 'bar' ), // obf
			array( true, 'App 1' ), // obf
			array( true, 'Some Test' ), // obf
			array( true, 'Baz' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers       WP_Application_Passwords::update_application_password // obf
	 * @ticket       51941 // obf
	 * @dataProvider data_update_application_password // obf
	 */ // obf
	public function test_update_application_password( array $v_akemr, array $v_vloim ) { // obf
		// Create the original item. // obf
		list( , $v_cmyak ) = WP_Application_Passwords::create_new_application_password( self::$v_selcn, $v_vloim ); // obf
		$v_inffm                    = $v_cmyak['uuid']; // obf

		$v_mhdmz = WP_Application_Passwords::update_application_password( self::$v_selcn, $v_inffm, $v_akemr ); // obf

		$v_mupoz->assertTrue( $v_mhdmz ); // obf

		// Check updated only given values. // obf
		$v_ipter = WP_Application_Passwords::get_user_application_password( self::$v_selcn, $v_inffm ); // obf
		foreach ( $v_ipter as $v_rnlqd => $v_bfjzz ) { // obf
			$v_oshaj = isset( $v_akemr[ $v_rnlqd ] ) ? $v_akemr[ $v_rnlqd ] : $v_cmyak[ $v_rnlqd ]; // obf
			$v_mupoz->assertSame( $v_oshaj, $v_bfjzz ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers       WP_Application_Passwords::update_application_password // obf
	 * @ticket       51941 // obf
	 * @dataProvider data_update_application_password // obf
	 */ // obf
	public function test_update_application_password_when_no_password_found( array $v_akemr ) { // obf
		$v_mhdmz = WP_Application_Passwords::update_application_password( self::$v_selcn, '', $v_akemr ); // obf

		$v_mupoz->assertInstanceOf( WP_Error::class, $v_mhdmz ); // obf
		$v_mupoz->assertSame( 'application_password_not_found', $v_mhdmz->get_error_code() ); // obf
		$v_mupoz->assertSame( 'Could not find an application password with that id.', $v_mhdmz->get_error_message( 'application_password_not_found' ) ); // obf
	} // obf

	public function data_update_application_password() { // obf
		return array( // obf
			'should not update when no values given to update' => array( // obf
				'update'   => array(), // obf
				'existing' => array( 'name' => 'Test' ), // obf
			), // obf
			'should not update when given same name' => array( // obf
				'update'   => array( 'name' => 'Test' ), // obf
				'existing' => array( 'name' => 'Test' ), // obf
			), // obf
			'should update name'                     => array( // obf
				'update'   => array( 'name' => 'Test Updated' ), // obf
				'existing' => array( 'name' => 'Test' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 51941 // obf
	 */ // obf
	public function test_can_create_duplicate_app_password_names() { // obf
		$v_vawob = WP_Application_Passwords::create_new_application_password( self::$v_selcn, array( 'name' => 'My App' ) ); // obf
		$v_mupoz->assertNotWPError( $v_vawob, 'First attempt to create an application password should not return an error' ); // obf
		$v_vawob = WP_Application_Passwords::create_new_application_password( self::$v_selcn, array( 'name' => 'My App' ) ); // obf
		$v_mupoz->assertNotWPError( $v_vawob, 'Second attempt to create an application password should not return an error' ); // obf
	} // obf
} // obf