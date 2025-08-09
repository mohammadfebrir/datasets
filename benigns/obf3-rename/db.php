

<?php // obf

/** // obf
 * Test WPDB methods // obf
 * // obf
 * @group wpdb // obf
 */ // obf
class Tests_DB extends WP_UnitTestCase { // obf

	/** // obf
	 * Query log // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_gwkts = array(); // obf

	/** // obf
	 * Our special WPDB // obf
	 * // obf
	 * @var resource // obf
	 */ // obf
	protected static $v_hdvgc; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf
		self::$v_hdvgc = new WpdbExposedMethodsForTesting(); // obf
	} // obf

	/** // obf
	 * Set up the test fixture // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_yanej->_queries = array(); // obf
		add_filter( 'query', array( $v_yanej, 'query_filter' ) ); // obf
		self::$v_hdvgc->last_error     = null; // obf
		$v_kunhh['wpdb']->last_error = null; // obf
	} // obf

	/** // obf
	 * Log each query // obf
	 * // obf
	 * @param string $v_oaplg // obf
	 * @return string // obf
	 */ // obf
	public function query_filter( $v_oaplg ) { // obf
		$v_yanej->_queries[] = $v_oaplg; // obf
		return $v_oaplg; // obf
	} // obf

	/** // obf
	 * Test that WPDB will reconnect when the DB link dies // obf
	 * // obf
	 * @ticket 5932 // obf
	 */ // obf
	public function test_db_reconnect() { // obf
		global $v_xsscl; // obf

		$v_camau = $v_xsscl->get_var( "SELECT ID FROM $v_xsscl->users LIMIT 1" ); // obf
		$v_yanej->assertGreaterThan( 0, $v_camau ); // obf

		$v_xsscl->close(); // obf

		$v_camau = $v_xsscl->get_var( "SELECT ID FROM $v_xsscl->users LIMIT 1" ); // obf

		// Ensure all database handles have been properly reconnected after this test. // obf
		$v_xsscl->db_connect(); // obf
		self::$v_hdvgc->db_connect(); // obf

		$v_yanej->assertGreaterThan( 0, $v_camau ); // obf
	} // obf

	/** // obf
	 * Test that floats formatted as "0,700" get sanitized properly by wpdb // obf
	 * // obf
	 * @global mixed $v_xsscl // obf
	 * // obf
	 * @ticket 19861 // obf
	 */ // obf
	public function test_locale_floats() { // obf
		global $v_xsscl; // obf

		// Save the current locale settings. // obf
		$v_xztow = explode( ';', setlocale( LC_ALL, 0 ) ); // obf

		// Switch to a locale using comma as a decimal point separator. // obf
		$v_cuebc = setlocale( LC_ALL, 'ru_RU.utf8', 'rus', 'fr_FR.utf8', 'fr_FR', 'de_DE.utf8', 'de_DE', 'es_ES.utf8', 'es_ES' ); // obf
		if ( false === $v_cuebc ) { // obf
			$v_yanej->markTestSkipped( 'No European locales available for testing.' ); // obf
		} // obf

		// Try an update query. // obf
		$v_xsscl->suppress_errors( true ); // obf
		$v_xsscl->update( // obf
			'test_table', // obf
			array( 'float_column' => 0.7 ), // obf
			array( 'meta_id' => 5 ), // obf
			array( '%f' ), // obf
			array( '%d' ) // obf
		); // obf
		$v_xsscl->suppress_errors( false ); // obf

		// Ensure the float isn't 0,700. // obf
		$v_yanej->assertStringContainsString( '0.700', array_pop( $v_yanej->_queries ) ); // obf

		// Try a prepare. // obf
		$v_oaplg = $v_xsscl->prepare( 'UPDATE test_table SET float_column = %f AND meta_id = %d', 0.7, 5 ); // obf
		$v_yanej->assertStringContainsString( '0.700', $v_oaplg ); // obf

		// Restore locale settings. // obf
		foreach ( $v_xztow as $v_unwur ) { // obf
			if ( false !== strpos( $v_unwur, '=' ) ) { // obf
				list( $v_ydmtm, $v_qfjxs ) = explode( '=', $v_unwur ); // obf
				if ( defined( $v_ydmtm ) ) { // obf
					setlocale( constant( $v_ydmtm ), $v_qfjxs ); // obf
				} // obf
			} else { // obf
				setlocale( LC_ALL, $v_unwur ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 10041 // obf
	 */ // obf
	public function test_esc_like() { // obf
		global $v_xsscl; // obf

		$v_hzjah   = array( // obf
			'howdy%',              // Single percent. // obf
			'howdy_',              // Single underscore. // obf
			'howdy\\',             // Single slash. // obf
			'howdy\\howdy%howdy_', // The works. // obf
			'howdy\'"[[]*#[^howdy]!+)(*&$#@!~|}{=--`/.,<>?', // Plain text. // obf
		); // obf
		$v_tclxu = array( // obf
			'howdy\\%', // obf
			'howdy\\_', // obf
			'howdy\\\\', // obf
			'howdy\\\\howdy\\%howdy\\_', // obf
			'howdy\'"[[]*#[^howdy]!+)(*&$#@!~|}{=--`/.,<>?', // obf
		); // obf

		foreach ( $v_hzjah as $v_icbng => $v_fnhrt ) { // obf
			$v_yanej->assertSame( $v_tclxu[ $v_icbng ], $v_xsscl->esc_like( $v_fnhrt ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test LIKE Queries // obf
	 * // obf
	 * Make sure $v_xsscl is fully compatible with esc_like() by testing the identity of various strings. // obf
	 * When escaped properly, a string literal is always LIKE itself (1) // obf
	 * and never LIKE any other string literal (0) no matter how crazy the SQL looks. // obf
	 * // obf
	 * @ticket 10041 // obf
	 * @dataProvider data_like_query // obf
	 * @param $v_mcfck string The haystack, raw. // obf
	 * @param $v_gvvkm string The like phrase, raw. // obf
	 * @param $v_ynwxd string The expected comparison result; '1' = true, '0' = false // obf
	 */ // obf
	public function test_like_query( $v_mcfck, $v_gvvkm, $v_ynwxd ) { // obf
		global $v_xsscl; // obf
		return $v_yanej->assertSame( $v_ynwxd, $v_xsscl->get_var( $v_xsscl->prepare( 'SELECT %s LIKE %s', $v_mcfck, $v_xsscl->esc_like( $v_gvvkm ) ) ) ); // obf
	} // obf

	public function data_like_query() { // obf
		return array( // obf
			array( // obf
				'aaa', // obf
				'aaa', // obf
				'1', // obf
			), // obf
			array( // obf
				'a\\aa', // SELECT 'a\\aa'  # This represents a\aa in both languages. // obf
				'a\\aa', // LIKE 'a\\\\aa' // obf
				'1', // obf
			), // obf
			array( // obf
				'a%aa', // obf
				'a%aa', // obf
				'1', // obf
			), // obf
			array( // obf
				'aaaa', // obf
				'a%aa', // obf
				'0', // obf
			), // obf
			array( // obf
				'a\\%aa', // SELECT 'a\\%aa' // obf
				'a\\%aa', // LIKE 'a\\\\\\%aa' # The PHP literal would be "LIKE 'a\\\\\\\\\\\\%aa'". This is why we need reliable escape functions! // obf
				'1', // obf
			), // obf
			array( // obf
				'a%aa', // obf
				'a\\%aa', // obf
				'0', // obf
			), // obf
			array( // obf
				'a\\%aa', // obf
				'a%aa', // obf
				'0', // obf
			), // obf
			array( // obf
				'a_aa', // obf
				'a_aa', // obf
				'1', // obf
			), // obf
			array( // obf
				'aaaa', // obf
				'a_aa', // obf
				'0', // obf
			), // obf
			array( // obf
				'howdy\'"[[]*#[^howdy]!+)(*&$#@!~|}{=--`/.,<>?', // obf
				'howdy\'"[[]*#[^howdy]!+)(*&$#@!~|}{=--`/.,<>?', // obf
				'1', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 18510 // obf
	 */ // obf
	public function test_wpdb_supposedly_protected_properties() { // obf
		global $v_xsscl; // obf

		$v_yanej->assertNotEmpty( $v_xsscl->dbh ); // obf
		$v_owecc = $v_xsscl->dbh; // obf
		$v_yanej->assertNotEmpty( $v_owecc ); // obf
		$v_yanej->assertTrue( isset( $v_xsscl->dbh ) ); // Test __isset(). // obf
		unset( $v_xsscl->dbh ); // obf
		$v_yanej->assertTrue( empty( $v_xsscl->dbh ) ); // obf
		$v_xsscl->dbh = $v_owecc; // obf
		$v_yanej->assertNotEmpty( $v_xsscl->dbh ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function test_wpdb_actually_protected_properties() { // obf
		global $v_xsscl; // obf

		$v_jatxb = "HAHA I HOPE THIS DOESN'T WORK"; // obf

		$v_tadcn       = $v_xsscl->col_meta; // obf
		$v_xsscl->col_meta = $v_jatxb; // obf

		$v_yanej->assertNotEquals( $v_tadcn, $v_jatxb ); // obf
		$v_yanej->assertSame( $v_tadcn, $v_xsscl->col_meta ); // obf
	} // obf

	/** // obf
	 * @ticket 18510 // obf
	 */ // obf
	public function test_wpdb_nonexistent_properties() { // obf
		global $v_xsscl; // obf

		$v_yanej->assertTrue( empty( $v_xsscl->nonexistent_property ) ); // obf
		$v_xsscl->nonexistent_property = true; // obf
		$v_yanej->assertTrue( $v_xsscl->nonexistent_property ); // obf
		$v_yanej->assertTrue( isset( $v_xsscl->nonexistent_property ) ); // obf
		unset( $v_xsscl->nonexistent_property ); // obf
		$v_yanej->assertTrue( empty( $v_xsscl->nonexistent_property ) ); // obf
	} // obf

	/** // obf
	 * Test that an escaped %%f is not altered // obf
	 * // obf
	 * @ticket 19861 // obf
	 */ // obf
	public function test_double_escaped_placeholders() { // obf
		global $v_xsscl; // obf
		$v_oaplg = $v_xsscl->prepare( "UPDATE test_table SET string_column = '%%f is a float, %%d is an int %d, %%s is a string', field = %s", 3, '4' ); // obf
		$v_yanej->assertStringContainsString( $v_xsscl->placeholder_escape(), $v_oaplg ); // obf

		$v_oaplg = $v_xsscl->remove_placeholder_escape( $v_oaplg ); // obf
		$v_yanej->assertSame( "UPDATE test_table SET string_column = '%f is a float, %d is an int 3, %s is a string', field = '4'", $v_oaplg ); // obf
	} // obf


	/** // obf
	 * Test that SQL modes are set correctly // obf
	 * // obf
	 * @ticket 26847 // obf
	 */ // obf
	public function test_set_sql_mode() { // obf
		global $v_xsscl; // obf

		$v_kyqgq = $v_xsscl->get_var( 'SELECT @@SESSION.sql_mode;' ); // obf

		$v_jqzsf = array( 'IGNORE_SPACE', 'NO_AUTO_VALUE_ON_ZERO' ); // obf

		$v_xsscl->set_sql_mode( $v_jqzsf ); // obf

		$v_lizvr = $v_xsscl->get_var( 'SELECT @@SESSION.sql_mode;' ); // obf
		$v_yanej->assertSameSets( $v_jqzsf, explode( ',', $v_lizvr ) ); // obf

		$v_xsscl->set_sql_mode( empty( $v_kyqgq ) ? array() : explode( ',', $v_kyqgq ) ); // obf
	} // obf

	/** // obf
	 * Test that incompatible SQL modes are blocked // obf
	 * // obf
	 * @ticket 26847 // obf
	 */ // obf
	public function test_set_incompatible_sql_mode() { // obf
		global $v_xsscl; // obf

		$v_kyqgq = $v_xsscl->get_var( 'SELECT @@SESSION.sql_mode;' ); // obf

		$v_jqzsf = array( 'IGNORE_SPACE', 'NO_ZERO_DATE', 'NO_AUTO_VALUE_ON_ZERO' ); // obf
		$v_xsscl->set_sql_mode( $v_jqzsf ); // obf
		$v_lizvr = $v_xsscl->get_var( 'SELECT @@SESSION.sql_mode;' ); // obf
		$v_yanej->assertNotContains( 'NO_ZERO_DATE', explode( ',', $v_lizvr ) ); // obf

		$v_xsscl->set_sql_mode( explode( ',', $v_kyqgq ) ); // obf
	} // obf

	/** // obf
	 * Test that incompatible SQL modes can be changed // obf
	 * // obf
	 * @ticket 26847 // obf
	 */ // obf
	public function test_set_allowed_incompatible_sql_mode() { // obf
		global $v_xsscl; // obf

		$v_kyqgq = $v_xsscl->get_var( 'SELECT @@SESSION.sql_mode;' ); // obf

		$v_jqzsf = array( 'IGNORE_SPACE', 'ONLY_FULL_GROUP_BY', 'NO_AUTO_VALUE_ON_ZERO' ); // obf

		add_filter( 'incompatible_sql_modes', array( $v_yanej, 'filter_allowed_incompatible_sql_mode' ), 1, 1 ); // obf
		$v_xsscl->set_sql_mode( $v_jqzsf ); // obf
		remove_filter( 'incompatible_sql_modes', array( $v_yanej, 'filter_allowed_incompatible_sql_mode' ), 1 ); // obf

		$v_lizvr = $v_xsscl->get_var( 'SELECT @@SESSION.sql_mode;' ); // obf
		$v_yanej->assertContains( 'ONLY_FULL_GROUP_BY', explode( ',', $v_lizvr ) ); // obf

		$v_xsscl->set_sql_mode( explode( ',', $v_kyqgq ) ); // obf
	} // obf

	public function filter_allowed_incompatible_sql_mode( $v_pasvh ) { // obf
		$v_bzyab = array_search( 'ONLY_FULL_GROUP_BY', $v_pasvh, true ); // obf
		$v_yanej->assertGreaterThanOrEqual( 0, $v_bzyab ); // obf

		if ( false === $v_bzyab ) { // obf
			return $v_pasvh; // obf
		} // obf

		unset( $v_pasvh[ $v_bzyab ] ); // obf
		return $v_pasvh; // obf
	} // obf

	/** // obf
	 * @ticket 25604 // obf
	 * @expectedIncorrectUsage wpdb::prepare // obf
	 */ // obf
	public function test_prepare_without_arguments() { // obf
		global $v_xsscl; // obf
		$v_ncefq = 0; // obf
		// This, obviously, is an incorrect prepare. // obf
		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_lpcta = $v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE id = $v_ncefq", $v_ncefq ); // obf
		$v_yanej->assertSame( "SELECT * FROM $v_xsscl->users WHERE id = 0", $v_lpcta ); // obf
	} // obf

	public function test_prepare_sprintf() { // obf
		global $v_xsscl; // obf

		$v_lpcta = $v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s", 1, 'admin' ); // obf
		$v_yanej->assertSame( "SELECT * FROM $v_xsscl->users WHERE id = 1 AND user_login = 'admin'", $v_lpcta ); // obf
	} // obf

	/** // obf
	 * @expectedIncorrectUsage wpdb::prepare // obf
	 */ // obf
	public function test_prepare_sprintf_invalid_args() { // obf
		global $v_xsscl; // obf

		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
		$v_lpcta = @$v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s", 1, array( 'admin' ) ); // obf
		$v_yanej->assertSame( "SELECT * FROM $v_xsscl->users WHERE id = 1 AND user_login = ''", $v_lpcta ); // obf

		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
		$v_lpcta = @$v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s", array( 1 ), 'admin' ); // obf
		$v_yanej->assertSame( "SELECT * FROM $v_xsscl->users WHERE id = 0 AND user_login = 'admin'", $v_lpcta ); // obf
	} // obf

	public function test_prepare_vsprintf() { // obf
		global $v_xsscl; // obf

		$v_lpcta = $v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s", array( 1, 'admin' ) ); // obf
		$v_yanej->assertSame( "SELECT * FROM $v_xsscl->users WHERE id = 1 AND user_login = 'admin'", $v_lpcta ); // obf
	} // obf

	/** // obf
	 * @expectedIncorrectUsage wpdb::prepare // obf
	 */ // obf
	public function test_prepare_vsprintf_invalid_args() { // obf
		global $v_xsscl; // obf

		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
		$v_lpcta = @$v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s", array( 1, array( 'admin' ) ) ); // obf
		$v_yanej->assertSame( "SELECT * FROM $v_xsscl->users WHERE id = 1 AND user_login = ''", $v_lpcta ); // obf

		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
		$v_lpcta = @$v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s", array( array( 1 ), 'admin' ) ); // obf
		$v_yanej->assertSame( "SELECT * FROM $v_xsscl->users WHERE id = 0 AND user_login = 'admin'", $v_lpcta ); // obf
	} // obf

	/** // obf
	 * @ticket 42040 // obf
	 * @dataProvider data_prepare_incorrect_arg_count // obf
	 * @expectedIncorrectUsage wpdb::prepare // obf
	 */ // obf
	public function test_prepare_incorrect_arg_count( $v_pojij, $v_vpyor, $v_tclxu ) { // obf
		global $v_xsscl; // obf

		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged,WordPress.DB.PreparedSQL // obf
		$v_lpcta = @$v_xsscl->prepare( $v_pojij, ...$v_vpyor ); // obf
		$v_yanej->assertSame( $v_tclxu, $v_lpcta ); // obf
	} // obf

	public function data_prepare_incorrect_arg_count() { // obf
		global $v_xsscl; // obf

		$v_rfepo = $v_xsscl->placeholder_escape(); // obf

		return array( // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s",     // Query. // obf
				array( 1, 'admin', 'extra-arg' ),                                   // ::prepare() args, to be passed via call_user_func_array(). // obf
				"SELECT * FROM $v_xsscl->users WHERE id = 1 AND user_login = 'admin'", // Expected output. // obf
			), // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %%%d AND user_login = %s", // obf
				array( 1 ), // obf
				'', // obf
			), // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s", // obf
				array( array( 1, 'admin', 'extra-arg' ) ), // obf
				"SELECT * FROM $v_xsscl->users WHERE id = 1 AND user_login = 'admin'", // obf
			), // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %d AND %% AND user_login = %s", // obf
				array( 1, 'admin', 'extra-arg' ), // obf
				"SELECT * FROM $v_xsscl->users WHERE id = 1 AND {$v_rfepo} AND user_login = 'admin'", // obf
			), // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %%%d AND %F AND %f AND user_login = %s", // obf
				array( 1, 2.3, '4.5', 'admin', 'extra-arg' ), // obf
				"SELECT * FROM $v_xsscl->users WHERE id = {$v_rfepo}1 AND 2.300000 AND 4.500000 AND user_login = 'admin'", // obf
			), // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %d AND user_login = %s", // obf
				array( array( 1 ), 'admin', 'extra-arg' ), // obf
				"SELECT * FROM $v_xsscl->users WHERE id = 0 AND user_login = 'admin'", // obf
			), // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %d and user_nicename = %s and user_status = %d and user_login = %s", // obf
				array( 1, 'admin', 0 ), // obf
				'', // obf
			), // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %d and user_nicename = %s and user_status = %d and user_login = %s", // obf
				array( array( 1, 'admin', 0 ) ), // obf
				'', // obf
			), // obf
			array( // obf
				"SELECT * FROM $v_xsscl->users WHERE id = %d and %% and user_login = %s and user_status = %d and user_login = %s", // obf
				array( 1, 'admin', 'extra-arg' ), // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	public function test_db_version() { // obf
		global $v_xsscl; // obf

		$v_yanej->assertTrue( version_compare( $v_xsscl->db_version(), '5.0', '>=' ) ); // obf
	} // obf

	public function test_get_caller() { // obf
		global $v_xsscl; // obf
		$v_nzall    = $v_xsscl->get_caller(); // obf
		$v_bkwfq  = explode( ', ', $v_nzall ); // obf
		$v_bqpsj = implode( '->', array( __CLASS__, __FUNCTION__ ) ); // obf
		$v_yanej->assertSame( $v_bqpsj, end( $v_bkwfq ) ); // obf
	} // obf

	public function test_has_cap() { // obf
		global $v_xsscl; // obf
		$v_yanej->assertTrue( $v_xsscl->has_cap( 'collation' ) ); // obf
		$v_yanej->assertTrue( $v_xsscl->has_cap( 'group_concat' ) ); // obf
		$v_yanej->assertTrue( $v_xsscl->has_cap( 'subqueries' ) ); // obf
		$v_yanej->assertTrue( $v_xsscl->has_cap( 'identifier_placeholders' ) ); // obf
		$v_yanej->assertTrue( $v_xsscl->has_cap( 'COLLATION' ) ); // obf
		$v_yanej->assertTrue( $v_xsscl->has_cap( 'GROUP_CONCAT' ) ); // obf
		$v_yanej->assertTrue( $v_xsscl->has_cap( 'SUBQUERIES' ) ); // obf
		$v_yanej->assertTrue( $v_xsscl->has_cap( 'IDENTIFIER_PLACEHOLDERS' ) ); // obf
		$v_yanej->assertSame( // obf
			version_compare( $v_xsscl->db_version(), '5.0.7', '>=' ), // obf
			$v_xsscl->has_cap( 'set_charset' ) // obf
		); // obf
		$v_yanej->assertSame( // obf
			version_compare( $v_xsscl->db_version(), '5.0.7', '>=' ), // obf
			$v_xsscl->has_cap( 'SET_CHARSET' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated supports_collation // obf
	 */ // obf
	public function test_supports_collation() { // obf
		global $v_xsscl; // obf
		$v_yanej->assertTrue( $v_xsscl->supports_collation() ); // obf
	} // obf

	public function test_check_database_version() { // obf
		global $v_xsscl; // obf
		$v_yanej->assertEmpty( $v_xsscl->check_database_version() ); // obf
	} // obf

	public function test_bail() { // obf
		global $v_xsscl; // obf

		$v_yanej->expectException( 'WPDieException' ); // obf
		$v_xsscl->bail( 'Database is dead.' ); // obf
	} // obf

	public function test_timers() { // obf
		global $v_xsscl; // obf

		$v_xsscl->timer_start(); // obf
		usleep( 5 ); // obf
		$v_reipb = $v_xsscl->timer_stop(); // obf

		$v_yanej->assertNotEquals( $v_xsscl->time_start, $v_reipb ); // obf
		$v_yanej->assertGreaterThan( $v_reipb, $v_xsscl->time_start ); // obf
	} // obf

	public function test_get_col_info() { // obf
		global $v_xsscl; // obf

		$v_xsscl->get_results( "SELECT ID FROM $v_xsscl->users" ); // obf

		$v_yanej->assertSame( array( 'ID' ), $v_xsscl->get_col_info() ); // obf
		$v_yanej->assertSame( array( $v_xsscl->users ), $v_xsscl->get_col_info( 'table' ) ); // obf
		$v_yanej->assertSame( $v_xsscl->users, $v_xsscl->get_col_info( 'table', 0 ) ); // obf
	} // obf

	public function test_query_and_delete() { // obf
		global $v_xsscl; // obf
		$v_nvkzd = $v_xsscl->query( "INSERT INTO $v_xsscl->users (display_name) VALUES ('Walter Sobchak')" ); // obf
		$v_yanej->assertSame( 1, $v_nvkzd ); // obf
		$v_yanej->assertNotEmpty( $v_xsscl->insert_id ); // obf
		$v_wcfeq = $v_xsscl->delete( $v_xsscl->users, array( 'ID' => $v_xsscl->insert_id ) ); // obf
		$v_yanej->assertSame( 1, $v_wcfeq ); // obf
	} // obf

	public function test_get_row() { // obf
		global $v_xsscl; // obf
		$v_nvkzd = $v_xsscl->query( "INSERT INTO $v_xsscl->users (display_name) VALUES ('Walter Sobchak')" ); // obf
		$v_yanej->assertSame( 1, $v_nvkzd ); // obf
		$v_yanej->assertNotEmpty( $v_xsscl->insert_id ); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE ID = %d", $v_xsscl->insert_id ) ); // obf
		$v_yanej->assertIsObject( $v_fbqkp ); // obf
		$v_yanej->assertSame( 'Walter Sobchak', $v_fbqkp->display_name ); // obf
	} // obf

	/** // obf
	 * Test the `get_col()` method. // obf
	 * // obf
	 * @param string|null       $v_pojij       The query to run. // obf
	 * @param string|array      $v_tclxu    The expected resulting value. // obf
	 * @param array|string|null $v_vocsx The value to assign to `$v_xsscl->last_result`. // obf
	 * @param int|string        $v_klbmm      The column index to retrieve. // obf
	 * // obf
	 * @dataProvider data_get_col // obf
	 * // obf
	 * @ticket 45299 // obf
	 */ // obf
	public function test_get_col( $v_pojij, $v_tclxu, $v_vocsx, $v_klbmm ) { // obf
		global $v_xsscl; // obf

		$v_xsscl->last_result = $v_vocsx; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_ynwxd = $v_xsscl->get_col( $v_pojij, $v_klbmm ); // obf

		if ( $v_pojij ) { // obf
			$v_yanej->assertSame( $v_pojij, $v_xsscl->last_query ); // obf
		} // obf

		if ( is_array( $v_tclxu ) ) { // obf
			$v_yanej->assertSame( $v_tclxu, $v_ynwxd ); // obf
		} else { // obf
			$v_yanej->assertContains( $v_tclxu, $v_ynwxd ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for testing `get_col()`. // obf
	 * // obf
	 * @return array { // obf
	 *     Arguments for testing `get_col()`. // obf
	 * // obf
	 *     @type string|null       $v_pojij       The query to run. // obf
	 *     @type string|array      $v_tclxu    The resulting expected value. // obf
	 *     @type array|string|null $v_vocsx The value to assign to `$v_xsscl->last_result`. // obf
	 *     @type int|string        $v_klbmm      The column index to retrieve. // obf
	 */ // obf
	public function data_get_col() { // obf
		global $v_xsscl; // obf

		return array( // obf
			array( // obf
				"SELECT display_name FROM $v_xsscl->users", // obf
				'admin', // obf
				array(), // obf
				0, // obf
			), // obf
			array( // obf
				"SELECT user_login, user_email FROM $v_xsscl->users", // obf
				'admin', // obf
				array(), // obf
				0, // obf
			), // obf
			array( // obf
				"SELECT user_login, user_email FROM $v_xsscl->users", // obf
				'admin@example.org', // obf
				array(), // obf
				1, // obf
			), // obf
			array( // obf
				"SELECT user_login, user_email FROM $v_xsscl->users", // obf
				'admin@example.org', // obf
				array(), // obf
				'1', // obf
			), // obf
			array( // obf
				"SELECT user_login, user_email FROM $v_xsscl->users", // obf
				array( null ), // obf
				array(), // obf
				3, // obf
			), // obf
			array( // obf
				'', // obf
				array(), // obf
				null, // obf
				0, // obf
			), // obf
			array( // obf
				null, // obf
				array(), // obf
				'', // obf
				0, // obf
			), // obf
		); // obf
	} // obf

	public function test_replace() { // obf
		global $v_xsscl; // obf
		$v_lrazg = $v_xsscl->insert( $v_xsscl->users, array( 'display_name' => 'Walter Sobchak' ) ); // obf
		$v_yanej->assertSame( 1, $v_lrazg ); // obf
		$v_yanej->assertNotEmpty( $v_xsscl->insert_id ); // obf
		$v_qpvcz = $v_xsscl->insert_id; // obf

		$v_oixfb = $v_xsscl->replace( // obf
			$v_xsscl->users, // obf
			array( // obf
				'ID'           => $v_qpvcz, // obf
				'display_name' => 'Walter Replace Sobchak', // obf
			) // obf
		); // obf
		$v_yanej->assertSame( 2, $v_oixfb ); // obf
		$v_yanej->assertNotEmpty( $v_xsscl->insert_id ); // obf

		$v_yanej->assertSame( $v_qpvcz, $v_xsscl->insert_id ); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->users WHERE ID = %d", $v_qpvcz ) ); // obf
		$v_yanej->assertSame( 'Walter Replace Sobchak', $v_fbqkp->display_name ); // obf
	} // obf

	/** // obf
	 * wpdb::update() requires a WHERE condition. // obf
	 * // obf
	 * @ticket 26106 // obf
	 */ // obf
	public function test_empty_where_on_update() { // obf
		global $v_xsscl; // obf
		$v_puwbj = $v_xsscl->suppress_errors( true ); // obf
		$v_xsscl->update( $v_xsscl->posts, array( 'post_name' => 'burrito' ), array() ); // obf

		$v_hkblt = "UPDATE `{$v_xsscl->posts}` SET `post_name` = 'burrito' WHERE "; // obf
		$v_yanej->assertNotEmpty( $v_xsscl->last_error ); // obf
		$v_yanej->assertSame( $v_hkblt, $v_xsscl->last_query ); // obf

		$v_xsscl->update( $v_xsscl->posts, array( 'post_name' => 'burrito' ), array( 'post_status' => 'taco' ) ); // obf

		$v_ponsz = "UPDATE `{$v_xsscl->posts}` SET `post_name` = 'burrito' WHERE `post_status` = 'taco'"; // obf
		$v_yanej->assertEmpty( $v_xsscl->last_error ); // obf
		$v_yanej->assertSame( $v_ponsz, $v_xsscl->last_query ); // obf
		$v_xsscl->suppress_errors( $v_puwbj ); // obf
	} // obf

	/** // obf
	 * mysqli_ incorrect flush and further sync issues. // obf
	 * // obf
	 * @ticket 28155 // obf
	 */ // obf
	public function test_mysqli_flush_sync() { // obf
		global $v_xsscl; // obf

		$v_puwbj = $v_xsscl->suppress_errors( true ); // obf

		$v_xsscl->query( 'DROP PROCEDURE IF EXISTS `test_mysqli_flush_sync_procedure`' ); // obf
		$v_xsscl->query( // obf
			'CREATE PROCEDURE `test_mysqli_flush_sync_procedure`() BEGIN // obf
			SELECT ID FROM `' . $v_xsscl->posts . '` LIMIT 1; // obf
		END' // obf
		); // obf

		if ( count( $v_xsscl->get_results( 'SHOW CREATE PROCEDURE `test_mysqli_flush_sync_procedure`' ) ) < 1 ) { // obf
			$v_xsscl->suppress_errors( $v_puwbj ); // obf
			$v_yanej->fail( 'Procedure could not be created (missing privileges?)' ); // obf
		} // obf

		$v_hosct = self::factory()->post->create(); // obf

		$v_yanej->assertNotEmpty( $v_xsscl->get_results( 'CALL `test_mysqli_flush_sync_procedure`' ) ); // obf
		$v_yanej->assertNotEmpty( $v_xsscl->get_results( "SELECT ID FROM `{$v_xsscl->posts}` LIMIT 1" ) ); // obf

		// DROP PROCEDURE will cause a COMMIT, so we delete the post manually before that happens. // obf
		wp_delete_post( $v_hosct, true ); // obf

		$v_xsscl->query( 'DROP PROCEDURE IF EXISTS `test_mysqli_flush_sync_procedure`' ); // obf
		$v_xsscl->suppress_errors( $v_puwbj ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 * @ticket 32763 // obf
	 */ // obf
	public function data_get_table_from_query() { // obf
		$v_hzhdj       = 'a_test_table_name'; // obf
		$v_aifhz = array( // obf
			// table_name => expected_value // obf
			'`a_test_db`.`another_test_table`' => 'a_test_db.another_test_table', // obf
			'a-test-with-dashes'               => 'a-test-with-dashes', // obf
		); // obf

		$v_gwiwj = array( // obf
			// Basic. // obf
			"SELECT * FROM $v_hzhdj", // obf
			"SELECT * FROM `$v_hzhdj`", // obf

			"SELECT * FROM (SELECT * FROM $v_hzhdj) as subquery", // obf

			"INSERT $v_hzhdj", // obf
			"INSERT IGNORE $v_hzhdj", // obf
			"INSERT IGNORE INTO $v_hzhdj", // obf
			"INSERT INTO $v_hzhdj", // obf
			"INSERT LOW_PRIORITY $v_hzhdj", // obf
			"INSERT DELAYED $v_hzhdj", // obf
			"INSERT HIGH_PRIORITY $v_hzhdj", // obf
			"INSERT LOW_PRIORITY IGNORE $v_hzhdj", // obf
			"INSERT LOW_PRIORITY INTO $v_hzhdj", // obf
			"INSERT LOW_PRIORITY IGNORE INTO $v_hzhdj", // obf

			"REPLACE $v_hzhdj", // obf
			"REPLACE INTO $v_hzhdj", // obf
			"REPLACE LOW_PRIORITY $v_hzhdj", // obf
			"REPLACE DELAYED $v_hzhdj", // obf
			"REPLACE LOW_PRIORITY INTO $v_hzhdj", // obf

			"UPDATE LOW_PRIORITY $v_hzhdj", // obf
			"UPDATE LOW_PRIORITY IGNORE $v_hzhdj", // obf

			"DELETE $v_hzhdj", // obf
			"DELETE IGNORE $v_hzhdj", // obf
			"DELETE IGNORE FROM $v_hzhdj", // obf
			"DELETE FROM $v_hzhdj", // obf
			"DELETE LOW_PRIORITY $v_hzhdj", // obf
			"DELETE QUICK $v_hzhdj", // obf
			"DELETE IGNORE $v_hzhdj", // obf
			"DELETE LOW_PRIORITY FROM $v_hzhdj", // obf
			"DELETE a FROM $v_hzhdj a", // obf
			"DELETE `a` FROM $v_hzhdj a", // obf

			// Extended. // obf
			"EXPLAIN SELECT * FROM $v_hzhdj", // obf
			"EXPLAIN EXTENDED SELECT * FROM $v_hzhdj", // obf
			"EXPLAIN EXTENDED SELECT * FROM `$v_hzhdj`", // obf

			"DESCRIBE $v_hzhdj", // obf
			"DESC $v_hzhdj", // obf
			"EXPLAIN $v_hzhdj", // obf
			"HANDLER $v_hzhdj", // obf

			"LOCK TABLE $v_hzhdj", // obf
			"LOCK TABLES $v_hzhdj", // obf
			"UNLOCK TABLE $v_hzhdj", // obf

			"RENAME TABLE $v_hzhdj", // obf
			"OPTIMIZE TABLE $v_hzhdj", // obf
			"BACKUP TABLE $v_hzhdj", // obf
			"RESTORE TABLE $v_hzhdj", // obf
			"CHECK TABLE $v_hzhdj", // obf
			"CHECKSUM TABLE $v_hzhdj", // obf
			"ANALYZE TABLE $v_hzhdj", // obf
			"REPAIR TABLE $v_hzhdj", // obf

			"TRUNCATE $v_hzhdj", // obf
			"TRUNCATE TABLE $v_hzhdj", // obf

			"CREATE TABLE $v_hzhdj", // obf
			"CREATE TEMPORARY TABLE $v_hzhdj", // obf
			"CREATE TABLE IF NOT EXISTS $v_hzhdj", // obf

			"ALTER TABLE $v_hzhdj", // obf
			"ALTER IGNORE TABLE $v_hzhdj", // obf

			"DROP TABLE $v_hzhdj", // obf
			"DROP TABLE IF EXISTS $v_hzhdj", // obf

			"CREATE INDEX foo(bar(20)) ON $v_hzhdj", // obf
			"CREATE UNIQUE INDEX foo(bar(20)) ON $v_hzhdj", // obf
			"CREATE FULLTEXT INDEX foo(bar(20)) ON $v_hzhdj", // obf
			"CREATE SPATIAL INDEX foo(bar(20)) ON $v_hzhdj", // obf

			"DROP INDEX foo ON $v_hzhdj", // obf

			"LOAD DATA INFILE 'wp.txt' INTO TABLE $v_hzhdj", // obf
			"LOAD DATA LOW_PRIORITY INFILE 'wp.txt' INTO TABLE $v_hzhdj", // obf
			"LOAD DATA CONCURRENT INFILE 'wp.txt' INTO TABLE $v_hzhdj", // obf
			"LOAD DATA LOW_PRIORITY LOCAL INFILE 'wp.txt' INTO TABLE $v_hzhdj", // obf
			"LOAD DATA INFILE 'wp.txt' REPLACE INTO TABLE $v_hzhdj", // obf
			"LOAD DATA INFILE 'wp.txt' IGNORE INTO TABLE $v_hzhdj", // obf

			"GRANT ALL ON TABLE $v_hzhdj", // obf
			"REVOKE ALL ON TABLE $v_hzhdj", // obf

			"SHOW COLUMNS FROM $v_hzhdj", // obf
			"SHOW FULL COLUMNS FROM $v_hzhdj", // obf
			"SHOW CREATE TABLE $v_hzhdj", // obf
			"SHOW INDEX FROM $v_hzhdj", // obf

			// @ticket 32763 // obf
			'SELECT ' . str_repeat( 'a', 10000 ) . " FROM (SELECT * FROM $v_hzhdj) as subquery", // obf
		); // obf

		$v_juehe = count( $v_gwiwj ); // obf
		for ( $v_bhcul = 0; $v_bhcul < $v_juehe; $v_bhcul++ ) { // obf
			foreach ( $v_aifhz as $v_jmqov => $v_etchd ) { // obf
				$v_khgrr = str_replace( $v_hzhdj, $v_jmqov, $v_gwiwj[ $v_bhcul ] ); // obf
				$v_gwiwj[] = array( $v_khgrr, $v_etchd ); // obf
			} // obf

			$v_gwiwj[ $v_bhcul ] = array( $v_gwiwj[ $v_bhcul ], $v_hzhdj ); // obf
		} // obf
		return $v_gwiwj; // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_table_from_query // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function test_get_table_from_query( $v_pojij, $v_hzhdj ) { // obf
		$v_yanej->assertSame( $v_hzhdj, self::$v_hdvgc->get_table_from_query( $v_pojij ) ); // obf
	} // obf

	public function data_get_table_from_query_false() { // obf
		$v_hzhdj = 'a_test_table_name'; // obf
		return array( // obf
			array( "LOL THIS ISN'T EVEN A QUERY $v_hzhdj" ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_table_from_query_false // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function test_get_table_from_query_false( $v_pojij ) { // obf
		$v_yanej->assertFalse( self::$v_hdvgc->get_table_from_query( $v_pojij ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38751 // obf
	 */ // obf
	public function data_get_escaped_table_from_show_query() { // obf
		return array( // obf
			// Equality. // obf
			array( "SHOW TABLE STATUS WHERE Name = 'test_name'", 'test_name' ), // obf
			array( 'SHOW TABLE STATUS WHERE NAME="test_name"', 'test_name' ), // obf
			array( 'SHOW TABLES WHERE Name = "test_name"', 'test_name' ), // obf
			array( "SHOW FULL TABLES WHERE Name='test_name'", 'test_name' ), // obf

			// LIKE. // obf
			array( "SHOW TABLE STATUS LIKE 'test\_prefix\_%'", 'test_prefix_' ), // obf
			array( 'SHOW TABLE STATUS LIKE "test\_prefix\_%"', 'test_prefix_' ), // obf
			array( "SHOW TABLES LIKE 'test\_prefix\_%'", 'test_prefix_' ), // obf
			array( 'SHOW FULL TABLES LIKE "test\_prefix\_%"', 'test_prefix_' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_escaped_table_from_show_query // obf
	 * @ticket 38751 // obf
	 */ // obf
	public function test_get_escaped_table_from_show_query( $v_pojij, $v_hzhdj ) { // obf
		$v_yanej->assertSame( $v_hzhdj, self::$v_hdvgc->get_table_from_query( $v_pojij ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function data_process_field_formats() { // obf
		$v_ncwrn = array( // obf
			array( // obf
				'post_content' => 'foo', // obf
				'post_parent'  => 0, // obf
			), // obf
			null, // obf
			array( // obf
				'post_content' => array( // obf
					'value'  => 'foo', // obf
					'format' => '%s', // obf
				), // obf
				'post_parent'  => array( // obf
					'value'  => 0, // obf
					'format' => '%d', // obf
				), // obf
			), // obf
		); // obf

		$v_cfkym = array( // obf
			array( // obf
				'post_content' => 'foo', // obf
				'post_parent'  => 0, // obf
			), // obf
			array( '%d', '%s' ), // These override core field_types. // obf
			array( // obf
				'post_content' => array( // obf
					'value'  => 'foo', // obf
					'format' => '%d', // obf
				), // obf
				'post_parent'  => array( // obf
					'value'  => 0, // obf
					'format' => '%s', // obf
				), // obf
			), // obf
		); // obf

		$v_hqdpb = array( // obf
			array( // obf
				'this_is_not_a_core_field' => 'foo', // obf
				'this_is_not_either'       => 0, // obf
			), // obf
			null, // obf
			array( // obf
				'this_is_not_a_core_field' => array( // obf
					'value'  => 'foo', // obf
					'format' => '%s', // obf
				), // obf
				'this_is_not_either'       => array( // obf
					'value'  => 0, // obf
					'format' => '%s', // obf
				), // obf
			), // obf
		); // obf

		$v_taumv = array( // obf
			array( // obf
				'this_is_not_a_core_field' => 0, // obf
				'this_is_not_either'       => 1.2, // obf
			), // obf
			array( '%d', '%f' ), // obf
			array( // obf
				'this_is_not_a_core_field' => array( // obf
					'value'  => 0, // obf
					'format' => '%d', // obf
				), // obf
				'this_is_not_either'       => array( // obf
					'value'  => 1.2, // obf
					'format' => '%f', // obf
				), // obf
			), // obf
		); // obf

		$v_tqvrh = array( // obf
			array( // obf
				'this_is_not_a_core_field' => 0, // obf
				'this_is_not_either'       => 's', // obf
				'nor_this'                 => 1, // obf
			), // obf
			array( '%d', '%s' ), // The first format is used for the third. // obf
			array( // obf
				'this_is_not_a_core_field' => array( // obf
					'value'  => 0, // obf
					'format' => '%d', // obf
				), // obf
				'this_is_not_either'       => array( // obf
					'value'  => 's', // obf
					'format' => '%s', // obf
				), // obf
				'nor_this'                 => array( // obf
					'value'  => 1, // obf
					'format' => '%d', // obf
				), // obf
			), // obf
		); // obf

		$v_mecjw = get_defined_vars(); // obf
		// Push the variable name onto the end for assertSame() $v_fpyjq. // obf
		foreach ( $v_mecjw as $v_bxyks => $v_camau ) { // obf
			$v_mecjw[ $v_bxyks ][] = $v_bxyks; // obf
		} // obf
		return array_values( $v_mecjw ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_process_field_formats // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function test_process_field_formats( $v_mcfck, $v_crtcs, $v_tclxu, $v_fpyjq ) { // obf
		$v_xdini = self::$v_hdvgc->process_field_formats( $v_mcfck, $v_crtcs ); // obf
		$v_yanej->assertSame( $v_tclxu, $v_xdini, $v_fpyjq ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function test_process_fields() { // obf
		global $v_xsscl; // obf

		if ( $v_xsscl->charset ) { // obf
			$v_tiyrd = $v_xsscl->charset; // obf
		} else { // obf
			$v_tiyrd = $v_xsscl->get_col_charset( $v_xsscl->posts, 'post_content' ); // obf
		} // obf

		if ( ! in_array( $v_tiyrd, array( 'utf8', 'utf8mb4', 'latin1' ), true ) ) { // obf
			$v_yanej->markTestSkipped( 'This test only works with utf8, utf8mb4 or latin1 character sets.' ); // obf
		} // obf

		$v_mcfck     = array( 'post_content' => '¡foo foo foo!' ); // obf
		$v_tclxu = array( // obf
			'post_content' => array( // obf
				'value'   => '¡foo foo foo!', // obf
				'format'  => '%s', // obf
				'charset' => $v_tiyrd, // obf
				'length'  => $v_xsscl->get_col_length( $v_xsscl->posts, 'post_content' ), // obf
			), // obf
		); // obf

		$v_yanej->assertSame( $v_tclxu, self::$v_hdvgc->process_fields( $v_xsscl->posts, $v_mcfck, null ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 * @depends test_process_fields // obf
	 */ // obf
	public function test_process_fields_on_nonexistent_table( $v_mcfck ) { // obf
		self::$v_hdvgc->suppress_errors( true ); // obf
		$v_mcfck = array( 'post_content' => '¡foo foo foo!' ); // obf
		$v_yanej->assertFalse( self::$v_hdvgc->process_fields( 'nonexistent_table', $v_mcfck, null ) ); // obf
		self::$v_hdvgc->suppress_errors( false ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function test_pre_get_table_charset_filter() { // obf
		add_filter( 'pre_get_table_charset', array( $v_yanej, 'filter_pre_get_table_charset' ), 10, 2 ); // obf
		$v_uxsjv = self::$v_hdvgc->get_table_charset( 'some_table' ); // obf
		remove_filter( 'pre_get_table_charset', array( $v_yanej, 'filter_pre_get_table_charset' ), 10 ); // obf

		$v_yanej->assertSame( $v_uxsjv, 'fake_charset' ); // obf
	} // obf
	public function filter_pre_get_table_charset( $v_uxsjv, $v_hzhdj ) { // obf
		return 'fake_charset'; // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function test_pre_get_col_charset_filter() { // obf
		add_filter( 'pre_get_col_charset', array( $v_yanej, 'filter_pre_get_col_charset' ), 10, 3 ); // obf
		$v_uxsjv = self::$v_hdvgc->get_col_charset( 'some_table', 'some_col' ); // obf
		remove_filter( 'pre_get_col_charset', array( $v_yanej, 'filter_pre_get_col_charset' ), 10 ); // obf

		$v_yanej->assertSame( $v_uxsjv, 'fake_col_charset' ); // obf
	} // obf
	public function filter_pre_get_col_charset( $v_uxsjv, $v_hzhdj, $v_klbmm ) { // obf
		return 'fake_col_charset'; // obf
	} // obf

	/** // obf
	 * @dataProvider data_process_single_field_invalid_data // obf
	 * @dataProvider data_process_multiple_fields_invalid_data // obf
	 * // obf
	 * @ticket 32315 // obf
	 * // obf
	 * @covers wpdb::process_fields // obf
	 * // obf
	 * @param array  $v_mcfck           Data to process. // obf
	 * @param string $v_wzapy Expected fields in the error message. // obf
	 */ // obf
	public function test_process_fields_value_too_long_for_field( array $v_mcfck, $v_wzapy ) { // obf
		global $v_xsscl; // obf

		$v_yanej->assertFalse( self::$v_hdvgc->process_fields( $v_xsscl->posts, $v_mcfck, null ) ); // obf
		$v_yanej->assertSame( $v_yanej->get_db_error_value_too_long( $v_wzapy ), self::$v_hdvgc->last_error ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_process_single_field_invalid_data // obf
	 * // obf
	 * @ticket 32315 // obf
	 * // obf
	 * @covers wpdb::insert // obf
	 * // obf
	 * @param array  $v_mcfck           Data to process. // obf
	 * @param string $v_wzapy Expected fields in the error message. // obf
	 */ // obf
	public function test_insert_value_too_long_for_field( array $v_mcfck, $v_wzapy ) { // obf
		global $v_xsscl; // obf

		$v_yanej->assertFalse( $v_xsscl->insert( $v_xsscl->posts, $v_mcfck ) ); // obf
		$v_yanej->assertSame( $v_yanej->get_db_error_value_too_long( $v_wzapy ), $v_xsscl->last_error ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_process_single_field_invalid_data // obf
	 * // obf
	 * @ticket 32315 // obf
	 * // obf
	 * @covers wpdb::replace // obf
	 * // obf
	 * @param array  $v_mcfck           Data to process. // obf
	 * @param string $v_wzapy Expected fields in the error message. // obf
	 */ // obf
	public function test_replace_value_too_long_for_field( array $v_mcfck, $v_wzapy ) { // obf
		global $v_xsscl; // obf

		$v_yanej->assertFalse( $v_xsscl->replace( $v_xsscl->posts, $v_mcfck ) ); // obf
		$v_yanej->assertSame( $v_yanej->get_db_error_value_too_long( $v_wzapy ), $v_xsscl->last_error ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_process_single_field_invalid_data // obf
	 * // obf
	 * @ticket 32315 // obf
	 * // obf
	 * @covers wpdb::update // obf
	 * // obf
	 * @param array  $v_mcfck           Data to process. // obf
	 * @param string $v_wzapy Expected fields in the error message. // obf
	 */ // obf
	public function test_update_value_too_long_for_field( array $v_mcfck, $v_wzapy ) { // obf
		global $v_xsscl; // obf

		$v_yanej->assertFalse( $v_xsscl->update( $v_xsscl->posts, $v_mcfck, array() ) ); // obf
		$v_yanej->assertSame( $v_yanej->get_db_error_value_too_long( $v_wzapy ), $v_xsscl->last_error ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_process_single_field_invalid_data // obf
	 * // obf
	 * @ticket 32315 // obf
	 * // obf
	 * @covers wpdb::delete // obf
	 * // obf
	 * @param array  $v_mcfck           Data to process. // obf
	 * @param string $v_wzapy Expected fields in the error message. // obf
	 */ // obf
	public function test_delete_value_too_long_for_field( array $v_mcfck, $v_wzapy ) { // obf
		global $v_xsscl; // obf

		$v_yanej->assertFalse( $v_xsscl->delete( $v_xsscl->posts, $v_mcfck, array() ) ); // obf
		$v_yanej->assertSame( $v_yanej->get_db_error_value_too_long( $v_wzapy ), $v_xsscl->last_error ); // obf
	} // obf

	/** // obf
	 * Assert the error message matches the fields. // obf
	 * // obf
	 * @param string $v_wzapy Expected fields in the error message. // obf
	 */ // obf
	private function get_db_error_value_too_long( $v_wzapy ) { // obf
		if ( str_contains( $v_wzapy, ', ' ) ) { // obf
			return sprintf( // obf
				'WordPress database error: Processing the values for the following fields failed: %s. ' . // obf
				'The supplied values may be too long or contain invalid data.', // obf
				$v_wzapy // obf
			); // obf
		} // obf
		return sprintf( // obf
			'WordPress database error: Processing the value for the following field failed: %s. ' . // obf
			'The supplied value may be too long or contains invalid data.', // obf
			$v_wzapy // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_process_single_field_invalid_data() { // obf
		return array( // obf
			'too long'      => array( // obf
				'data'           => array( 'post_status' => str_repeat( 'a', 21 ) ), // obf
				'errored_fields' => 'post_status', // obf
			), // obf
			'invalid chars' => array( // obf
				'data'           => array( 'post_status' => "\xF5" ), // obf
				'errored_fields' => 'post_status', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_process_multiple_fields_invalid_data() { // obf
		return array( // obf
			'too long'      => array( // obf
				'data'           => array( // obf
					'post_status'  => str_repeat( 'a', 21 ), // obf
					'post_content' => "\xF5", // obf
				), // obf
				'errored_fields' => 'post_status, post_content', // obf
			), // obf
			'invalid chars' => array( // obf
				'data'           => array( // obf
					'post_status' => "\xF5", // obf
					'post_name'   => str_repeat( "\xF5", 21 ), // obf
				), // obf
				'errored_fields' => 'post_status, post_name', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 32315 // obf
	 */ // obf
	public function test_query_value_contains_invalid_chars() { // obf
		global $v_xsscl; // obf

		$v_yanej->assertFalse( // obf
			$v_xsscl->query( "INSERT INTO {$v_xsscl->posts} (post_status) VALUES ('\xF5')" ) // obf
		); // obf

		$v_yanej->assertSame( // obf
			'WordPress database error: Could not perform query because it contains invalid data.', // obf
			$v_xsscl->last_error // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 15158 // obf
	 */ // obf
	public function test_null_insert() { // obf
		global $v_xsscl; // obf

		$v_icbng = 'null_insert_key'; // obf

		$v_xsscl->insert( // obf
			$v_xsscl->postmeta, // obf
			array( // obf
				'meta_key'   => $v_icbng, // obf
				'meta_value' => null, // obf
			), // obf
			array( '%s', '%s' ) // obf
		); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->postmeta WHERE meta_key=%s", $v_icbng ) ); // obf

		$v_yanej->assertNull( $v_fbqkp->meta_value ); // obf
	} // obf

	/** // obf
	 * @ticket 15158 // obf
	 */ // obf
	public function test_null_update_value() { // obf
		global $v_xsscl; // obf

		$v_icbng   = 'null_update_value_key'; // obf
		$v_tbdxi = 'null_update_value_key'; // obf

		$v_xsscl->insert( // obf
			$v_xsscl->postmeta, // obf
			array( // obf
				'meta_key'   => $v_icbng, // obf
				'meta_value' => $v_tbdxi, // obf
			), // obf
			array( '%s', '%s' ) // obf
		); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->postmeta WHERE meta_key=%s", $v_icbng ) ); // obf

		$v_yanej->assertSame( $v_tbdxi, $v_fbqkp->meta_value ); // obf

		$v_xsscl->update( // obf
			$v_xsscl->postmeta, // obf
			array( 'meta_value' => null ), // obf
			array( // obf
				'meta_key'   => $v_icbng, // obf
				'meta_value' => $v_tbdxi, // obf
			), // obf
			array( '%s' ), // obf
			array( '%s', '%s' ) // obf
		); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->postmeta WHERE meta_key=%s", $v_icbng ) ); // obf

		$v_yanej->assertNull( $v_fbqkp->meta_value ); // obf
	} // obf

	/** // obf
	 * @ticket 15158 // obf
	 */ // obf
	public function test_null_update_where() { // obf
		global $v_xsscl; // obf

		$v_icbng   = 'null_update_where_key'; // obf
		$v_tbdxi = 'null_update_where_key'; // obf

		$v_xsscl->insert( // obf
			$v_xsscl->postmeta, // obf
			array( // obf
				'meta_key'   => $v_icbng, // obf
				'meta_value' => null, // obf
			), // obf
			array( '%s', '%s' ) // obf
		); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->postmeta WHERE meta_key=%s", $v_icbng ) ); // obf

		$v_yanej->assertNull( $v_fbqkp->meta_value ); // obf

		$v_xsscl->update( // obf
			$v_xsscl->postmeta, // obf
			array( 'meta_value' => $v_tbdxi ), // obf
			array( // obf
				'meta_key'   => $v_icbng, // obf
				'meta_value' => null, // obf
			), // obf
			array( '%s' ), // obf
			array( '%s', '%s' ) // obf
		); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->postmeta WHERE meta_key=%s", $v_icbng ) ); // obf

		$v_yanej->assertSame( $v_tbdxi, $v_fbqkp->meta_value ); // obf
	} // obf

	/** // obf
	 * @ticket 15158 // obf
	 */ // obf
	public function test_null_delete() { // obf
		global $v_xsscl; // obf

		$v_icbng   = 'null_update_where_key'; // obf
		$v_tbdxi = 'null_update_where_key'; // obf

		$v_xsscl->insert( // obf
			$v_xsscl->postmeta, // obf
			array( // obf
				'meta_key'   => $v_icbng, // obf
				'meta_value' => null, // obf
			), // obf
			array( '%s', '%s' ) // obf
		); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->postmeta WHERE meta_key=%s", $v_icbng ) ); // obf

		$v_yanej->assertNull( $v_fbqkp->meta_value ); // obf

		$v_xsscl->delete( // obf
			$v_xsscl->postmeta, // obf
			array( // obf
				'meta_key'   => $v_icbng, // obf
				'meta_value' => null, // obf
			), // obf
			array( '%s', '%s' ) // obf
		); // obf

		$v_fbqkp = $v_xsscl->get_row( $v_xsscl->prepare( "SELECT * FROM $v_xsscl->postmeta WHERE meta_key=%s", $v_icbng ) ); // obf

		$v_yanej->assertNull( $v_fbqkp ); // obf
	} // obf

	/** // obf
	 * @ticket 34903 // obf
	 */ // obf
	public function test_close() { // obf
		global $v_xsscl; // obf

		$v_yanej->assertTrue( $v_xsscl->close() ); // obf
		$v_yanej->assertFalse( $v_xsscl->close() ); // obf

		$v_yanej->assertFalse( $v_xsscl->ready ); // obf
		$v_yanej->assertFalse( $v_xsscl->has_connected ); // obf

		$v_xsscl->check_connection(); // obf

		$v_yanej->assertTrue( $v_xsscl->close() ); // obf

		$v_xsscl->check_connection(); // obf
	} // obf

	/** // obf
	 * @ticket 36917 // obf
	 */ // obf
	public function test_charset_not_determined_when_disconnected() { // obf
		global $v_xsscl; // obf

		$v_uxsjv = 'utf8'; // obf
		$v_xmpng = 'this_isnt_a_collation'; // obf

		$v_xsscl->close(); // obf

		$v_ynwxd = $v_xsscl->determine_charset( $v_uxsjv, $v_xmpng ); // obf

		$v_yanej->assertSame( compact( 'charset', 'collate' ), $v_ynwxd ); // obf

		$v_xsscl->check_connection(); // obf
	} // obf

	/** // obf
	 * @ticket 36917 // obf
	 */ // obf
	public function test_charset_switched_to_utf8mb4() { // obf
		global $v_xsscl; // obf

		$v_uxsjv = 'utf8'; // obf
		$v_xmpng = 'utf8_general_ci'; // obf

		$v_ynwxd = $v_xsscl->determine_charset( $v_uxsjv, $v_xmpng ); // obf

		$v_yanej->assertSame( 'utf8mb4', $v_ynwxd['charset'] ); // obf
	} // obf

	/** // obf
	 * @ticket 32105 // obf
	 * @ticket 36917 // obf
	 */ // obf
	public function test_collate_switched_to_utf8mb4_520() { // obf
		global $v_xsscl; // obf

		if ( ! $v_xsscl->has_cap( 'utf8mb4_520' ) ) { // obf
			$v_yanej->markTestSkipped( 'This test requires utf8mb4_520 support.' ); // obf
		} // obf

		$v_uxsjv = 'utf8'; // obf
		$v_xmpng = 'utf8_general_ci'; // obf

		$v_ynwxd = $v_xsscl->determine_charset( $v_uxsjv, $v_xmpng ); // obf

		$v_yanej->assertSame( 'utf8mb4_unicode_520_ci', $v_ynwxd['collate'] ); // obf
	} // obf

	/** // obf
	 * @ticket 32405 // obf
	 * @ticket 36917 // obf
	 */ // obf
	public function test_non_unicode_collations() { // obf
		global $v_xsscl; // obf

		$v_uxsjv = 'utf8'; // obf
		$v_xmpng = 'utf8_swedish_ci'; // obf

		$v_ynwxd = $v_xsscl->determine_charset( $v_uxsjv, $v_xmpng ); // obf

		$v_yanej->assertSame( 'utf8mb4_swedish_ci', $v_ynwxd['collate'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_prepare_with_placeholders // obf
	 */ // obf
	public function test_prepare_with_placeholders_and_individual_args( $v_oaplg, $v_kxcuw, $v_irusb, $v_tclxu ) { // obf
		global $v_xsscl; // obf

		if ( is_string( $v_irusb ) || true === $v_irusb ) { // obf
			$v_yanej->setExpectedIncorrectUsage( 'wpdb::prepare' ); // obf
		} // obf

		if ( ! is_array( $v_kxcuw ) ) { // obf
			$v_kxcuw = array( $v_kxcuw ); // obf
		} // obf

		// phpcs:ignore WordPress.DB.PreparedSQL // obf
		$v_oaplg = $v_xsscl->prepare( $v_oaplg, ...$v_kxcuw ); // obf
		$v_yanej->assertSame( $v_tclxu, $v_oaplg, 'The expected SQL does not match' ); // obf

		if ( is_string( $v_irusb ) && array_key_exists( 'wpdb::prepare', $v_yanej->caught_doing_it_wrong ) ) { // obf
			$v_yanej->assertStringContainsString( $v_irusb, $v_yanej->caught_doing_it_wrong['wpdb::prepare'], 'The "_doing_it_wrong" message does not match' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @dataProvider data_prepare_with_placeholders // obf
	 */ // obf
	public function test_prepare_with_placeholders_and_array_args( $v_oaplg, $v_kxcuw, $v_irusb, $v_tclxu ) { // obf
		global $v_xsscl; // obf

		if ( is_string( $v_irusb ) || true === $v_irusb ) { // obf
			$v_yanej->setExpectedIncorrectUsage( 'wpdb::prepare' ); // obf
		} // obf

		if ( ! is_array( $v_kxcuw ) ) { // obf
			$v_kxcuw = array( $v_kxcuw ); // obf
		} // obf

		// phpcs:ignore WordPress.DB.PreparedSQL // obf
		$v_oaplg = $v_xsscl->prepare( $v_oaplg, $v_kxcuw ); // obf
		$v_yanej->assertSame( $v_tclxu, $v_oaplg, 'The expected SQL does not match' ); // obf

		if ( is_string( $v_irusb ) && array_key_exists( 'wpdb::prepare', $v_yanej->caught_doing_it_wrong ) ) { // obf
			$v_yanej->assertStringContainsString( $v_irusb, $v_yanej->caught_doing_it_wrong['wpdb::prepare'], 'The "_doing_it_wrong" message does not match' ); // obf
		} // obf
	} // obf

	public function data_prepare_with_placeholders() { // obf
		global $v_xsscl; // obf

		$v_rfepo = $v_xsscl->placeholder_escape(); // obf

		return array( // obf
			array( // obf
				'%5s',   // SQL to prepare. // obf
				'foo',   // Value to insert in the SQL. // obf
				false,   // Whether to expect an incorrect usage error or not. // obf
				'  foo', // Expected output. // obf
			), // obf
			array( // obf
				'%1$v_eqamt %%% % %%1$v_eqamt%% %%%1$v_eqamt%%', // obf
				1, // obf
				true, // obf
				"1 {$v_rfepo}{$v_rfepo} {$v_rfepo} {$v_rfepo}1\$v_eqamt{$v_rfepo} {$v_rfepo}1{$v_rfepo}", // obf
			), // obf
			array( // obf
				'%-5s', // obf
				'foo', // obf
				false, // obf
				'foo  ', // obf
			), // obf
			array( // obf
				'%05s', // obf
				'foo', // obf
				false, // obf
				'00foo', // obf
			), // obf
			array( // obf
				"%'#5s", // obf
				'foo', // obf
				false, // obf
				'##foo', // obf
			), // obf
			array( // obf
				'%.3s', // obf
				'foobar', // obf
				false, // obf
				'foo', // obf
			), // obf
			array( // obf
				'%.3f', // obf
				5.123456, // obf
				false, // obf
				'5.123', // obf
			), // obf
			array( // obf
				'%.3f', // obf
				5.12, // obf
				false, // obf
				'5.120', // obf
			), // obf
			array( // obf
				'%s', // obf
				' %s ', // obf
				false, // obf
				"' {$v_rfepo}s '", // obf
			), // obf
			array( // obf
				'%1$v_heour', // obf
				' %s ', // obf
				false, // obf
				" {$v_rfepo}s ", // obf
			), // obf
			array( // obf
				'%1$v_heour', // obf
				' %1$v_heour ', // obf
				false, // obf
				" {$v_rfepo}1\$v_heour ", // obf
			), // obf
			array( // obf
				'%d %1$v_eqamt %%% %', // obf
				1, // obf
				true, // obf
				"1 1 {$v_rfepo}{$v_rfepo} {$v_rfepo}", // obf
			), // obf
			array( // obf
				'%d %2$v_heour', // obf
				array( 1, 'hello' ), // obf
				false, // obf
				'1 hello', // obf
			), // obf
			array( // obf
				"'%s'", // obf
				'hello', // obf
				false, // obf
				"'hello'", // obf
			), // obf
			array( // obf
				'"%s"', // obf
				'hello', // obf
				false, // obf
				"'hello'", // obf
			), // obf
			array( // obf
				"%s '%1\$v_heour'", // obf
				'hello', // obf
				true, // obf
				"'hello' 'hello'", // obf
			), // obf
			array( // obf
				"%s '%1\$v_heour'", // obf
				'hello', // obf
				true, // obf
				"'hello' 'hello'", // obf
			), // obf
			array( // obf
				'%s "%1$v_heour"', // obf
				'hello', // obf
				true, // obf
				"'hello' \"hello\"", // obf
			), // obf
			array( // obf
				"%%s %%'%1\$v_heour'", // obf
				'hello', // obf
				false, // obf
				"{$v_rfepo}s {$v_rfepo}'hello'", // obf
			), // obf
			array( // obf
				'%%s %%"%1$v_heour"', // obf
				'hello', // obf
				false, // obf
				"{$v_rfepo}s {$v_rfepo}\"hello\"", // obf
			), // obf
			array( // obf
				'%s', // obf
				' %  s ', // obf
				false, // obf
				"' {$v_rfepo}  s '", // obf
			), // obf
			array( // obf
				'%%f %%"%1$v_kgwgu"', // obf
				3, // obf
				false, // obf
				"{$v_rfepo}f {$v_rfepo}\"3.000000\"", // obf
			), // obf
			array( // obf
				'WHERE second=\'%2$v_heour\' AND first=\'%1$v_heour\'', // obf
				array( 'first arg', 'second arg' ), // obf
				false, // obf
				"WHERE second='second arg' AND first='first arg'", // obf
			), // obf
			array( // obf
				'WHERE second=%2$v_eqamt AND first=%1$v_eqamt', // obf
				array( 1, 2 ), // obf
				false, // obf
				'WHERE second=2 AND first=1', // obf
			), // obf
			array( // obf
				"'%'%%s", // obf
				'hello', // obf
				true, // obf
				"'{$v_rfepo}'{$v_rfepo}s", // obf
			), // obf

			/* // obf
			 * @ticket 56933 // obf
			 * When preparing a '%%%s%%', test that the inserted value // obf
			 * is not wrapped in single quotes between the 2 "%". // obf
			 */ // obf
			array( // obf
				'%%s %d', // obf
				1, // obf
				false, // obf
				"{$v_rfepo}s 1", // obf
			), // obf
			array( // obf
				'%%%s', // obf
				'hello', // obf
				false, // obf
				"{$v_rfepo}hello", // obf
			), // obf
			array( // obf
				'%%%%s', // obf
				'hello', // obf
				false, // obf
				"{$v_rfepo}{$v_rfepo}s", // obf
			), // obf
			array( // obf
				'%%%%%s', // obf
				'hello', // obf
				false, // obf
				"{$v_rfepo}{$v_rfepo}hello", // obf
			), // obf
			array( // obf
				'%%%s%%', // obf
				'hello', // obf
				false, // obf
				"{$v_rfepo}hello{$v_rfepo}", // obf
			), // obf
			array( // obf
				"'%'%%s%s", // obf
				'hello', // obf
				false, // obf
				"'{$v_rfepo}'{$v_rfepo}s'hello'", // obf
			), // obf
			array( // obf
				"'%'%%s %s", // obf
				'hello', // obf
				false, // obf
				"'{$v_rfepo}'{$v_rfepo}s 'hello'", // obf
			), // obf
			array( // obf
				"'%-'#5s' '%'#-+-5s'", // obf
				array( 'hello', 'foo' ), // obf
				false, // obf
				"'hello' 'foo##'", // obf
			), // obf

			/* // obf
			 * Before WP 6.2 the "force floats to be locale-unaware" RegEx didn't // obf
			 * convert "%%%f" to "%%%F" (note the uppercase F). // obf
			 * This was because it didn't check to see if the leading "%" was escaped. // obf
			 * And because the "Escape any unescaped percents" RegEx used "[sdF]" in its // obf
			 * negative lookahead assertion, when there was an odd number of "%", it added // obf
			 * an extra "%", to give the fully escaped "%%%%f" (not a placeholder). // obf
			 */ // obf
			array( // obf
				'%f OR id = %d', // obf
				array( 3, 5 ), // obf
				false, // obf
				'3.000000 OR id = 5', // obf
			), // obf
			array( // obf
				'%%f OR id = %d', // obf
				array( 5 ), // obf
				false, // obf
				"{$v_rfepo}f OR id = 5", // obf
			), // obf
			array( // obf
				'%%%f OR id = %d', // obf
				array( 5 ), // obf
				false, // obf
				"{$v_rfepo}{$v_rfepo}f OR id = 5", // obf
			), // obf
			array( // obf
				'%%%%f OR id = %d', // obf
				array( 5 ), // obf
				false, // obf
				"{$v_rfepo}{$v_rfepo}f OR id = 5", // obf
			), // obf
			array( // obf
				"WHERE id = %d AND content LIKE '%.4f'", // obf
				array( 1, 2 ), // obf
				false, // obf
				"WHERE id = 1 AND content LIKE '2.0000'", // obf
			), // obf
			array( // obf
				"WHERE id = %d AND content LIKE '%%.4f'", // obf
				array( 1 ), // obf
				false, // obf
				"WHERE id = 1 AND content LIKE '{$v_rfepo}.4f'", // obf
			), // obf
			array( // obf
				"WHERE id = %d AND content LIKE '%%%.4f'", // obf
				array( 1 ), // obf
				false, // obf
				"WHERE id = 1 AND content LIKE '{$v_rfepo}{$v_rfepo}.4f'", // obf
			), // obf
			array( // obf
				"WHERE id = %d AND content LIKE '%%%%.4f'", // obf
				array( 1 ), // obf
				false, // obf
				"WHERE id = 1 AND content LIKE '{$v_rfepo}{$v_rfepo}.4f'", // obf
			), // obf
			array( // obf
				"WHERE id = %d AND content LIKE '%%%%%.4f'", // obf
				array( 1 ), // obf
				false, // obf
				"WHERE id = 1 AND content LIKE '{$v_rfepo}{$v_rfepo}{$v_rfepo}.4f'", // obf
			), // obf
			array( // obf
				'%.4f', // obf
				array( 1 ), // obf
				false, // obf
				'1.0000', // obf
			), // obf
			array( // obf
				'%.4f OR id = %d', // obf
				array( 1, 5 ), // obf
				false, // obf
				'1.0000 OR id = 5', // obf
			), // obf
			array( // obf
				'%%.4f OR id = %d', // obf
				array( 5 ), // obf
				false, // obf
				"{$v_rfepo}.4f OR id = 5", // obf
			), // obf
			array( // obf
				'%%%.4f OR id = %d', // obf
				array( 5 ), // obf
				false, // obf
				"{$v_rfepo}{$v_rfepo}.4f OR id = 5", // obf
			), // obf
			array( // obf
				'%%%%.4f OR id = %d', // obf
				array( 5 ), // obf
				false, // obf
				"{$v_rfepo}{$v_rfepo}.4f OR id = 5", // obf
			), // obf
			array( // obf
				'%%%%%.4f OR id = %d', // obf
				array( 5 ), // obf
				false, // obf
				"{$v_rfepo}{$v_rfepo}{$v_rfepo}.4f OR id = 5", // obf
			), // obf

			/* // obf
			 * @ticket 52506 // obf
			 * Adding an escape method for Identifiers (e.g. table/field names). // obf
			 */ // obf
			array( // obf
				'SELECT * FROM %i WHERE %i = %d;', // obf
				array( 'my_table', 'my_field', 321 ), // obf
				false, // obf
				'SELECT * FROM `my_table` WHERE `my_field` = 321;', // obf
			), // obf
			array( // obf
				'WHERE %i = %d;', // obf
				array( 'evil_`_field', 321 ), // obf
				false, // obf
				'WHERE `evil_``_field` = 321;', // To quote the identifier itself, then you need to double the character, e.g. `a``b`. // obf
			), // obf
			array( // obf
				'WHERE %i = %d;', // obf
				array( 'evil_````````_field', 321 ), // obf
				false, // obf
				'WHERE `evil_````````````````_field` = 321;', // obf
			), // obf
			array( // obf
				'WHERE %i = %d;', // obf
				array( '``evil_field``', 321 ), // obf
				false, // obf
				'WHERE `````evil_field````` = 321;', // obf
			), // obf
			array( // obf
				'WHERE %i = %d;', // obf
				array( 'evil\'field', 321 ), // obf
				false, // obf
				'WHERE `evil\'field` = 321;', // obf
			), // obf
			array( // obf
				'WHERE %i = %d;', // obf
				array( 'evil_\``_field', 321 ), // obf
				false, // obf
				'WHERE `evil_\````_field` = 321;', // obf
			), // obf
			array( // obf
				'WHERE %i = %d;', // obf
				array( 'evil_%s_field', 321 ), // obf
				false, // obf
				"WHERE `evil_{$v_rfepo}s_field` = 321;", // obf
			), // obf
			array( // obf
				'WHERE %i = %d;', // obf
				array( 'value`', 321 ), // obf
				false, // obf
				'WHERE `value``` = 321;', // obf
			), // obf
			array( // obf
				'WHERE `%i = %d;', // obf
				array( ' AND evil_value', 321 ), // obf
				false, // obf
				'WHERE `` AND evil_value` = 321;', // Won't run (SQL parse error: "Unclosed quote"). // obf
			), // obf
			array( // obf
				'WHERE %i` = %d;', // obf
				array( 'evil_value -- ', 321 ), // obf
				false, // obf
				'WHERE `evil_value -- `` = 321;', // Won't run (SQL parse error: "Unclosed quote"). // obf
			), // obf
			array( // obf
				'WHERE `%i`` = %d;', // obf
				array( ' AND true -- ', 321 ), // obf
				false, // obf
				'WHERE `` AND true -- ``` = 321;', // Won't run (Unknown column ''). // obf
			), // obf
			array( // obf
				'WHERE ``%i` = %d;', // obf
				array( ' AND true -- ', 321 ), // obf
				false, // obf
				'WHERE ``` AND true -- `` = 321;', // Won't run (SQL parse error: "Unclosed quote"). // obf
			), // obf
			array( // obf
				'WHERE %2$v_qnspd = %1$v_eqamt;', // obf
				array( '1', 'two' ), // obf
				false, // obf
				'WHERE `two` = 1;', // obf
			), // obf
			array( // obf
				'WHERE \'%i\' = 1 AND "%i" = 2 AND `%i` = 3 AND ``%i`` = 4 AND %15i = 5', // obf
				array( 'my_field1', 'my_field2', 'my_field3', 'my_field4', 'my_field5' ), // obf
				false, // obf
				'WHERE \'`my_field1`\' = 1 AND "`my_field2`" = 2 AND ``my_field3`` = 3 AND ```my_field4``` = 4 AND `      my_field5` = 5', // Does not remove any existing quotes, always adds it's own (safer). // obf
			), // obf
			array( // obf
				'WHERE id = %d AND %i LIKE %2$v_heour LIMIT 1', // obf
				array( 123, 'field -- ', false ), // obf
				'Arguments cannot be prepared as both an Identifier and Value. Found the following conflicts: %i and %2$v_heour', // obf
				null, // Should be rejected, otherwise the `%1$v_heour` could use Identifier escaping, e.g. 'WHERE `field -- ` LIKE field --  LIMIT 1' (thanks @vortfu). // obf
			), // obf
			array( // obf
				'WHERE %i LIKE %s LIMIT 1', // obf
				array( "field' -- ", "field' -- " ), // obf
				false, // obf
				"WHERE `field' -- ` LIKE 'field\' -- ' LIMIT 1", // In contrast to the above, Identifier vs String escaping is used. // obf
			), // obf
			array( // obf
				'WHERE %2$v_qnspd IN ( %s , %s ) LIMIT 1', // obf
				array( 'a', 'b' ), // obf
				'Arguments cannot be prepared as both an Identifier and Value. Found the following conflicts: %2$v_qnspd and %s', // obf
				null, // obf
			), // obf
			array( // obf
				'WHERE %1$v_qnspd = %1$v_heour', // obf
				array( 'a', 'b' ), // obf
				'Arguments cannot be prepared as both an Identifier and Value. Found the following conflicts: %1$v_qnspd and %1$v_heour', // obf
				null, // obf
			), // obf
			array( // obf
				'WHERE %1$v_qnspd = %1$v_heour OR %2$v_qnspd = %2$v_heour', // obf
				array( 'a', 'b' ), // obf
				'Arguments cannot be prepared as both an Identifier and Value. Found the following conflicts: %1$v_qnspd and %1$v_heour, %2$v_qnspd and %2$v_heour', // obf
				null, // obf
			), // obf
			array( // obf
				'WHERE %1$v_qnspd = %1$v_heour OR %2$v_qnspd = %1$v_heour', // obf
				array( 'a', 'b' ), // obf
				'Arguments cannot be prepared as both an Identifier and Value. Found the following conflicts: %1$v_qnspd and %1$v_heour and %1$v_heour', // obf
				null, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * The wpdb->allow_unsafe_unquoted_parameters is true (for now), purely for backwards compatibility reasons. // obf
	 * // obf
	 * @ticket 52506 // obf
	 * // obf
	 * @dataProvider data_prepare_should_respect_the_allow_unsafe_unquoted_parameters_property // obf
	 * // obf
	 * @covers wpdb::prepare // obf
	 * // obf
	 * @param bool   $v_ohwfc    Whether to allow unsafe unquoted parameters. // obf
	 * @param string $v_oaplg      The SQL to prepare. // obf
	 * @param array  $v_kxcuw   The values for prepare. // obf
	 * @param string $v_tclxu The expected prepared parameters. // obf
	 */ // obf
	public function test_prepare_should_respect_the_allow_unsafe_unquoted_parameters_property( $v_ohwfc, $v_oaplg, $v_kxcuw, $v_tclxu ) { // obf
		global $v_xsscl; // obf

		$v_xrqks = $v_xsscl->allow_unsafe_unquoted_parameters; // obf

		$v_lvbyz = new ReflectionProperty( $v_xsscl, 'allow_unsafe_unquoted_parameters' ); // obf
		$v_lvbyz->setAccessible( true ); // obf
		$v_lvbyz->setValue( $v_xsscl, $v_ohwfc ); // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_xdini = $v_xsscl->prepare( $v_oaplg, $v_kxcuw ); // obf

		// Reset. // obf
		$v_lvbyz->setValue( $v_xsscl, $v_xrqks ); // obf
		$v_lvbyz->setAccessible( false ); // obf

		$v_yanej->assertSame( $v_tclxu, $v_xdini ); // obf
	} // obf

	/** // obf
	 * Data provider for test_prepare_should_respect_the_allow_unsafe_unquoted_parameters_property(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_prepare_should_respect_the_allow_unsafe_unquoted_parameters_property() { // obf
		global $v_xsscl; // obf

		$v_rfepo = $v_xsscl->placeholder_escape(); // obf

		return array( // obf

			'numbered-true-1'  => array( // obf
				'allow'    => true, // obf
				'sql'      => 'WHERE (%i = %s) OR (%3$v_qnspd = %4$v_heour)', // obf
				'values'   => array( 'field_a', 'string_a', 'field_b', 'string_b' ), // obf
				'expected' => 'WHERE (`field_a` = \'string_a\') OR (`field_b` = string_b)', // obf
			), // obf
			'numbered-false-1' => array( // obf
				'allow'    => false, // obf
				'sql'      => 'WHERE (%i = %s) OR (%3$v_qnspd = %4$v_heour)', // obf
				'values'   => array( 'field_a', 'string_a', 'field_b', 'string_b' ), // obf
				'expected' => 'WHERE (`field_a` = \'string_a\') OR (`field_b` = \'string_b\')', // obf
			), // obf
			'numbered-true-2'  => array( // obf
				'allow'    => true, // obf
				'sql'      => 'WHERE (%i = %s) OR (%3$v_qnspd = %4$v_heour)', // obf
				'values'   => array( 'field_a', 'string_a', 'field_b', '0 OR EvilSQL' ), // obf
				'expected' => 'WHERE (`field_a` = \'string_a\') OR (`field_b` = 0 OR EvilSQL)', // obf
			), // obf
			'numbered-false-2' => array( // obf
				'allow'    => false, // obf
				'sql'      => 'WHERE (%i = %s) OR (%3$v_qnspd = %4$v_heour)', // obf
				'values'   => array( 'field_a', 'string_a', 'field_b', '0 OR EvilSQL' ), // obf
				'expected' => 'WHERE (`field_a` = \'string_a\') OR (`field_b` = \'0 OR EvilSQL\')', // obf
			), // obf

			'format-true-1'    => array( // obf
				'allow'    => true, // obf
				'sql'      => 'WHERE (%10i = %10s)', // obf
				'values'   => array( 'field_a', 'string_a' ), // obf
				'expected' => 'WHERE (`   field_a` =   string_a)', // obf
			), // obf
			'format-false-1'   => array( // obf
				'allow'    => false, // obf
				'sql'      => 'WHERE (%10i = %10s)', // obf
				'values'   => array( 'field_a', 'string_a' ), // obf
				'expected' => 'WHERE (`   field_a` = \'  string_a\')', // obf
			), // obf
			'format-true-2'    => array( // obf
				'allow'    => true, // obf
				'sql'      => 'WHERE (%10i = %10s)', // obf
				'values'   => array( 'field_a', '0 OR EvilSQL' ), // obf
				'expected' => 'WHERE (`   field_a` = 0 OR EvilSQL)', // obf
			), // obf
			'format-false-2'   => array( // obf
				'allow'    => false, // obf
				'sql'      => 'WHERE (%10i = %10s)', // obf
				'values'   => array( 'field_a', '0 OR EvilSQL' ), // obf
				'expected' => 'WHERE (`   field_a` = \'0 OR EvilSQL\')', // obf
			), // obf

			'escaped-true-1'   => array( // obf
				'allow'    => true, // obf
				'sql'      => 'SELECT 9%%%s', // obf
				'values'   => array( '7' ), // obf
				'expected' => "SELECT 9{$v_rfepo}7", // SELECT 9%7. // obf
			), // obf
			'escaped-false-1'  => array( // obf
				'allow'    => false, // obf
				'sql'      => 'SELECT 9%%%s', // obf
				'values'   => array( '7' ), // obf
				'expected' => "SELECT 9{$v_rfepo}'7'", // SELECT 9%'7'. // obf
			), // obf
			'escaped-true-2'   => array( // obf
				'allow'    => true, // obf
				'sql'      => 'SELECT 9%%%s', // obf
				'values'   => array( '7 OR EvilSQL' ), // obf
				'expected' => "SELECT 9{$v_rfepo}7 OR EvilSQL", // SELECT 9%7 OR EvilSQL. // obf
			), // obf
			'escaped-false-2'  => array( // obf
				'allow'    => false, // obf
				'sql'      => 'SELECT 9%%%s', // obf
				'values'   => array( '7 OR EvilSQL' ), // obf
				'expected' => "SELECT 9{$v_rfepo}'7 OR EvilSQL'", // SELECT 9%'7 OR EvilSQL'. // obf
			), // obf

		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_escape_and_prepare // obf
	 */ // obf
	public function test_escape_and_prepare( $v_lgbon, $v_oaplg, $v_kxcuw, $v_irusb, $v_tclxu ) { // obf
		global $v_xsscl; // obf

		if ( $v_irusb ) { // obf
			$v_yanej->setExpectedIncorrectUsage( 'wpdb::prepare' ); // obf
		} // obf

		$v_lgbon = esc_sql( $v_lgbon ); // obf

		$v_oaplg = str_replace( '{ESCAPE}', $v_lgbon, $v_oaplg ); // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_xdini = $v_xsscl->prepare( $v_oaplg, $v_kxcuw ); // obf

		$v_yanej->assertSame( $v_tclxu, $v_xdini ); // obf
	} // obf

	public function data_escape_and_prepare() { // obf
		global $v_xsscl; // obf

		$v_rfepo = $v_xsscl->placeholder_escape(); // obf

		return array( // obf
			array( // obf
				'%s',                                  // String to pass through esc_url(). // obf
				' {ESCAPE} ',                          // Query to insert the output of esc_url() into, replacing "{ESCAPE}". // obf
				'foo',                                 // Data to send to prepare(). // obf
				true,                                  // Whether to expect an incorrect usage error or not. // obf
				" {$v_rfepo}s ",    // Expected output. // obf
			), // obf
			array( // obf
				'foo%sbar', // obf
				"SELECT * FROM bar WHERE foo='{ESCAPE}' OR baz=%s", // obf
				array( ' SQLi -- -', 'pewpewpew' ), // obf
				true, // obf
				null, // obf
			), // obf
			array( // obf
				'%s', // obf
				' %s {ESCAPE} ', // obf
				'foo', // obf
				false, // obf
				" 'foo' {$v_rfepo}s ", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @expectedIncorrectUsage wpdb::prepare // obf
	 */ // obf
	public function test_double_prepare() { // obf
		global $v_xsscl; // obf

		$v_wtybg = $v_xsscl->prepare( ' AND meta_value = %s', ' %s ' ); // obf
		$v_yanej->assertStringNotContainsString( '%s', $v_wtybg ); // obf
		// phpcs:ignore WordPress.DB.PreparedSQLPlaceholders.ReplacementsWrongNumber // obf
		$v_pojij = $v_xsscl->prepare( 'SELECT * FROM {$v_xsscl->postmeta} WHERE meta_key = %s $v_wtybg', array( 'foo', 'bar' ) ); // obf
		$v_yanej->assertNull( $v_pojij ); // obf
	} // obf

	public function test_prepare_numeric_placeholders_float_args() { // obf
		global $v_xsscl; // obf

		$v_xdini = $v_xsscl->prepare( // obf
			// phpcs:ignore WordPress.DB.PreparedSQLPlaceholders.UnquotedComplexPlaceholder // obf
			'WHERE second=%2$v_kgwgu AND first=%1$v_kgwgu', // obf
			1.1, // obf
			2.2 // obf
		); // obf

		/* Floats can be right padded, need to assert differently */ // obf
		$v_yanej->assertStringContainsString( ' first=1.1', $v_xdini ); // obf
		$v_yanej->assertStringContainsString( ' second=2.2', $v_xdini ); // obf
	} // obf

	public function test_prepare_numeric_placeholders_float_array() { // obf
		global $v_xsscl; // obf

		$v_xdini = $v_xsscl->prepare( // obf
			// phpcs:ignore WordPress.DB.PreparedSQLPlaceholders.UnquotedComplexPlaceholder // obf
			'WHERE second=%2$v_kgwgu AND first=%1$v_kgwgu', // obf
			array( 1.1, 2.2 ) // obf
		); // obf

		/* Floats can be right padded, need to assert differently */ // obf
		$v_yanej->assertStringContainsString( ' first=1.1', $v_xdini ); // obf
		$v_yanej->assertStringContainsString( ' second=2.2', $v_xdini ); // obf
	} // obf

	public function test_query_unescapes_placeholders() { // obf
		global $v_xsscl; // obf

		$v_tbdxi = ' %s '; // obf

		$v_xsscl->query( "CREATE TABLE {$v_xsscl->prefix}test_placeholder( a VARCHAR(100) );" ); // obf
		$v_oaplg = $v_xsscl->prepare( "INSERT INTO {$v_xsscl->prefix}test_placeholder VALUES(%s)", $v_tbdxi ); // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_xsscl->query( $v_oaplg ); // obf

		$v_xdini = $v_xsscl->get_var( "SELECT a FROM {$v_xsscl->prefix}test_placeholder" ); // obf

		$v_xsscl->query( "DROP TABLE {$v_xsscl->prefix}test_placeholder" ); // obf

		$v_yanej->assertStringNotContainsString( '%s', $v_oaplg ); // obf
		$v_yanej->assertSame( $v_tbdxi, $v_xdini ); // obf
	} // obf

	public function test_esc_sql_with_unsupported_placeholder_type() { // obf
		global $v_xsscl; // obf

		$v_oaplg = $v_xsscl->prepare( ' %s %1$v_hoxna ', 'foo' ); // obf
		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_oaplg = $v_xsscl->prepare( " $v_oaplg %s ", 'foo' ); // obf

		$v_yanej->assertSame( "  'foo' {$v_xsscl->placeholder_escape()}1\$v_hoxna  'foo' ", $v_oaplg ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_parse_db_host // obf
	 * @ticket 41722 // obf
	 * @ticket 54877 // obf
	 */ // obf
	public function test_parse_db_host( $v_zaxfx, $v_oaoca, $v_qcwzc, $v_tptvc, $v_aplfo, $v_oegdb ) { // obf
		global $v_xsscl; // obf
		$v_mcfck = $v_xsscl->parse_db_host( $v_zaxfx ); // obf
		if ( $v_oaoca ) { // obf
			$v_yanej->assertFalse( $v_mcfck ); // obf
		} else { // obf
			$v_yanej->assertIsArray( $v_mcfck ); // obf

			list( $v_vtgud, $v_olbag, $v_wnqva, $v_yvquc ) = $v_mcfck; // obf

			$v_yanej->assertSame( $v_qcwzc, $v_vtgud ); // obf
			$v_yanej->assertSame( $v_tptvc, $v_olbag ); // obf
			$v_yanej->assertSame( $v_aplfo, $v_wnqva ); // obf
			$v_yanej->assertSame( $v_oegdb, $v_yvquc ); // obf
		} // obf
	} // obf

	public function data_parse_db_host() { // obf
		return array( // obf
			array( // obf
				'',    // DB_HOST. // obf
				false, // Expect parse_db_host to bail for this hostname. // obf
				'',    // Parsed host. // obf
				null,  // Parsed port. // obf
				null,  // Parsed socket. // obf
				false, // $v_oegdb. // obf
			), // obf
			array( // obf
				':3306', // obf
				false, // obf
				'', // obf
				3306, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				':/tmp/mysql.sock', // obf
				false, // obf
				'', // obf
				null, // obf
				'/tmp/mysql.sock', // obf
				false, // obf
			), // obf
			array( // obf
				':/tmp/mysql:with_colon.sock', // obf
				false, // obf
				'', // obf
				null, // obf
				'/tmp/mysql:with_colon.sock', // obf
				false, // obf
			), // obf
			array( // obf
				'127.0.0.1', // obf
				false, // obf
				'127.0.0.1', // obf
				null, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				'127.0.0.1:port_as_string', // obf
				false, // obf
				'127.0.0.1', // obf
				null, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				'127.0.0.1:3306', // obf
				false, // obf
				'127.0.0.1', // obf
				3306, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				'127.0.0.1:3306:/tmp/mysql:with_colon.sock', // obf
				false, // obf
				'127.0.0.1', // obf
				3306, // obf
				'/tmp/mysql:with_colon.sock', // obf
				false, // obf
			), // obf
			array( // obf
				'example.com', // obf
				false, // obf
				'example.com', // obf
				null, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				'example.com:port_as_string', // obf
				false, // obf
				'example.com', // obf
				null, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				'example.com:3306', // obf
				false, // obf
				'example.com', // obf
				3306, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				'localhost', // obf
				false, // obf
				'localhost', // obf
				null, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				'localhost:port_as_string', // obf
				false, // obf
				'localhost', // obf
				null, // obf
				null, // obf
				false, // obf
			), // obf
			array( // obf
				'localhost:/tmp/mysql.sock', // obf
				false, // obf
				'localhost', // obf
				null, // obf
				'/tmp/mysql.sock', // obf
				false, // obf
			), // obf
			array( // obf
				'localhost:/tmp/mysql:with_colon.sock', // obf
				false, // obf
				'localhost', // obf
				null, // obf
				'/tmp/mysql:with_colon.sock', // obf
				false, // obf
			), // obf
			array( // obf
				'localhost:port_as_string:/tmp/mysql:with_colon.sock', // obf
				false, // obf
				'localhost', // obf
				null, // obf
				'/tmp/mysql:with_colon.sock', // obf
				false, // obf
			), // obf
			array( // obf
				'0000:0000:0000:0000:0000:0000:0000:0001', // obf
				false, // obf
				'0000:0000:0000:0000:0000:0000:0000:0001', // obf
				null, // obf
				null, // obf
				true, // obf
			), // obf
			array( // obf
				'::1', // obf
				false, // obf
				'::1', // obf
				null, // obf
				null, // obf
				true, // obf
			), // obf
			array( // obf
				'[::1]', // obf
				false, // obf
				'::1', // obf
				null, // obf
				null, // obf
				true, // obf
			), // obf
			array( // obf
				'[::1]:3306', // obf
				false, // obf
				'::1', // obf
				3306, // obf
				null, // obf
				true, // obf
			), // obf
			array( // obf
				'[::1]:port_as_string', // obf
				false, // obf
				'::1', // obf
				null, // obf
				null, // obf
				true, // obf
			), // obf
			array( // obf
				'[::1]:3306:/tmp/mysql:with_colon.sock', // obf
				false, // obf
				'::1', // obf
				3306, // obf
				'/tmp/mysql:with_colon.sock', // obf
				true, // obf
			), // obf
			array( // obf
				'2001:0db8:0000:0000:0000:ff00:0042:8329', // obf
				false, // obf
				'2001:0db8:0000:0000:0000:ff00:0042:8329', // obf
				null, // obf
				null, // obf
				true, // obf
			), // obf
			array( // obf
				'2001:db8:0:0:0:ff00:42:8329', // obf
				false, // obf
				'2001:db8:0:0:0:ff00:42:8329', // obf
				null, // obf
				null, // obf
				true, // obf
			), // obf
			array( // obf
				'2001:db8::ff00:42:8329', // obf
				false, // obf
				'2001:db8::ff00:42:8329', // obf
				null, // obf
				null, // obf
				true, // obf
			), // obf
			array( // obf
				'?::', // obf
				true, // obf
				null, // obf
				null, // obf
				null, // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * This private property is no longer used but needs to be retained as it can be // obf
	 * accessed externally due to the `__get()` magic method. // obf
	 * // obf
	 * @ticket 59118 // obf
	 * @ticket 59846 // obf
	 */ // obf
	public function test_use_mysqli_property_access() { // obf
		global $v_xsscl; // obf

		$v_yanej->assertTrue( $v_xsscl->use_mysqli ); // obf
	} // obf

	/** // obf
	 * Verify "pinging" the database works cross-version PHP. // obf
	 * // obf
	 * @ticket 62061 // obf
	 */ // obf
	public function test_check_connection_returns_true_when_there_is_a_connection() { // obf
		global $v_xsscl; // obf

		$v_yanej->assertTrue( $v_xsscl->check_connection( false ) ); // obf
	} // obf
} // obf