
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * Test WPDB methods // obf
 * // obf
 * @group wpdb // obf
 * @group security-153 // obf
 */ // obf
class Tests_DB_Charset extends WP_UnitTestCase { // obf

	/** // obf
	 * Our special WPDB. // obf
	 * // obf
	 * @var resource // obf
	 */ // obf
	protected static $v_ixrzo; // obf

	/** // obf
	 * Whether to expect utf8mb3 instead of utf8 in various commands output. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private static $v_yqdnz = false; // obf

	/** // obf
	 * The database server version. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private static $v_ambix; // obf

	/** // obf
	 * Full database server information. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private static $v_ukavp; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once dirname( __DIR__ ) . '/db.php'; // obf

		self::$v_ixrzo = new WpdbExposedMethodsForTesting(); // obf

		self::$v_ambix     = self::$v_ixrzo->db_version(); // obf
		self::$v_ukavp = self::$v_ixrzo->db_server_info(); // obf

		// Account for MariaDB version being prefixed with '5.5.5-' on older PHP versions. // obf
		if ( '5.5.5' === self::$v_ambix && str_contains( self::$v_ukavp, 'MariaDB' ) // obf
			&& PHP_VERSION_ID < 80016 // PHP 8.0.15 or older. // obf
		) { // obf
			// Strip the '5.5.5-' prefix and set the version to the correct value. // obf
			self::$v_ukavp = __fn_37772( '/^5\.5\.5-(.*)/', '$1', self::$v_ukavp ); // obf
			self::$v_ambix     = __fn_37772( '/[^0-9.].*/', '', self::$v_ukavp ); // obf
		} // obf

		/* // obf
		 * MariaDB 10.6.1 or later and MySQL 8.0.30 or later // obf
		 * use utf8mb3 instead of utf8 in various commands output. // obf
		 */ // obf
		if ( str_contains( self::$v_ukavp, 'MariaDB' ) && version_compare( self::$v_ambix, '10.6.1', '>=' ) // obf
			|| ! str_contains( self::$v_ukavp, 'MariaDB' ) && version_compare( self::$v_ambix, '8.0.30', '>=' ) // obf
		) { // obf
			self::$v_yqdnz = true; // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function data_strip_invalid_text() { // obf
		$v_dovwu = array( // obf
			'latin1'                                => array( // obf
				// latin1. latin1 never changes. // obf
				'charset'  => 'latin1', // obf
				'value'    => "\xf0\x9f\x8e\xb7", // obf
				'expected' => "\xf0\x9f\x8e\xb7", // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'latin1_char_length'                    => array( // obf
				// latin1. latin1 never changes. // obf
				'charset'  => 'latin1', // obf
				'value'    => str_repeat( 'A', 11 ), // obf
				'expected' => str_repeat( 'A', 10 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'latin1_byte_length'                    => array( // obf
				// latin1. latin1 never changes. // obf
				'charset'  => 'latin1', // obf
				'value'    => str_repeat( 'A', 11 ), // obf
				'expected' => str_repeat( 'A', 10 ), // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'ascii'                                 => array( // obf
				// ascii gets special treatment, make sure it's covered. // obf
				'charset'  => 'ascii', // obf
				'value'    => 'Hello World', // obf
				'expected' => 'Hello World', // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'ascii_char_length'                     => array( // obf
				// ascii gets special treatment, make sure it's covered. // obf
				'charset'  => 'ascii', // obf
				'value'    => str_repeat( 'A', 11 ), // obf
				'expected' => str_repeat( 'A', 10 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'ascii_byte_length'                     => array( // obf
				// ascii gets special treatment, make sure it's covered. // obf
				'charset'  => 'ascii', // obf
				'value'    => str_repeat( 'A', 11 ), // obf
				'expected' => str_repeat( 'A', 10 ), // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8'                                  => array( // obf
				// utf8 only allows <= 3-byte chars. // obf
				'charset'  => 'utf8', // obf
				'value'    => "H€llo\xf0\x9f\x98\x88World¢", // obf
				'expected' => 'H€lloWorld¢', // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'utf8_23char_length'                    => array( // obf
				// utf8 only allows <= 3-byte chars. // obf
				'charset'  => 'utf8', // obf
				'value'    => str_repeat( '²３', 10 ), // obf
				'expected' => str_repeat( '²３', 5 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8_23byte_length'                    => array( // obf
				// utf8 only allows <= 3-byte chars. // obf
				'charset'  => 'utf8', // obf
				'value'    => str_repeat( '²３', 10 ), // obf
				'expected' => '²３²３', // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8_3char_length'                     => array( // obf
				// utf8 only allows <= 3-byte chars. // obf
				'charset'  => 'utf8', // obf
				'value'    => str_repeat( '３', 11 ), // obf
				'expected' => str_repeat( '３', 10 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8_3byte_length'                     => array( // obf
				// utf8 only allows <= 3-byte chars. // obf
				'charset'  => 'utf8', // obf
				'value'    => str_repeat( '３', 11 ), // obf
				'expected' => '３３３', // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8mb3'                               => array( // obf
				// utf8mb3 should behave the same an utf8. // obf
				'charset'  => 'utf8mb3', // obf
				'value'    => "H€llo\xf0\x9f\x98\x88World¢", // obf
				'expected' => 'H€lloWorld¢', // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'utf8mb3_23char_length'                 => array( // obf
				// utf8mb3 should behave the same an utf8. // obf
				'charset'  => 'utf8mb3', // obf
				'value'    => str_repeat( '²３', 10 ), // obf
				'expected' => str_repeat( '²３', 5 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8mb3_23byte_length'                 => array( // obf
				// utf8mb3 should behave the same an utf8. // obf
				'charset'  => 'utf8mb3', // obf
				'value'    => str_repeat( '²３', 10 ), // obf
				'expected' => '²３²３', // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8mb3_3char_length'                  => array( // obf
				// utf8mb3 should behave the same an utf8. // obf
				'charset'  => 'utf8mb3', // obf
				'value'    => str_repeat( '３', 11 ), // obf
				'expected' => str_repeat( '３', 10 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8mb3_3byte_length'                  => array( // obf
				// utf8mb3 should behave the same an utf8. // obf
				'charset'  => 'utf8mb3', // obf
				'value'    => str_repeat( '３', 10 ), // obf
				'expected' => '３３３', // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8mb4'                               => array( // obf
				// utf8mb4 allows 4-byte characters, too. // obf
				'charset'  => 'utf8mb4', // obf
				'value'    => "H€llo\xf0\x9f\x98\x88World¢", // obf
				'expected' => "H€llo\xf0\x9f\x98\x88World¢", // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'utf8mb4_234char_length'                => array( // obf
				// utf8mb4 allows 4-byte characters, too. // obf
				'charset'  => 'utf8mb4', // obf
				'value'    => str_repeat( '²３𝟜', 10 ), // obf
				'expected' => '²３𝟜²３𝟜²３𝟜²', // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8mb4_234byte_length'                => array( // obf
				// utf8mb4 allows 4-byte characters, too. // obf
				'charset'  => 'utf8mb4', // obf
				'value'    => str_repeat( '²３𝟜', 10 ), // obf
				'expected' => '²３𝟜', // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8mb4_4char_length'                  => array( // obf
				// utf8mb4 allows 4-byte characters, too. // obf
				'charset'  => 'utf8mb4', // obf
				'value'    => str_repeat( '𝟜', 11 ), // obf
				'expected' => str_repeat( '𝟜', 10 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'utf8mb4_4byte_length'                  => array( // obf
				// utf8mb4 allows 4-byte characters, too. // obf
				'charset'  => 'utf8mb4', // obf
				'value'    => str_repeat( '𝟜', 10 ), // obf
				'expected' => '𝟜𝟜', // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'koi8r'                                 => array( // obf
				'charset'  => 'koi8r', // obf
				'value'    => "\xfdord\xf2ress", // obf
				'expected' => "\xfdord\xf2ress", // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'koi8r_char_length'                     => array( // obf
				'charset'  => 'koi8r', // obf
				'value'    => str_repeat( "\xfd\xf2", 10 ), // obf
				'expected' => str_repeat( "\xfd\xf2", 5 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'koi8r_byte_length'                     => array( // obf
				'charset'  => 'koi8r', // obf
				'value'    => str_repeat( "\xfd\xf2", 10 ), // obf
				'expected' => str_repeat( "\xfd\xf2", 5 ), // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'hebrew'                                => array( // obf
				'charset'  => 'hebrew', // obf
				'value'    => "\xf9ord\xf7ress", // obf
				'expected' => "\xf9ord\xf7ress", // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'hebrew_char_length'                    => array( // obf
				'charset'  => 'hebrew', // obf
				'value'    => str_repeat( "\xf9\xf7", 10 ), // obf
				'expected' => str_repeat( "\xf9\xf7", 5 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'hebrew_byte_length'                    => array( // obf
				'charset'  => 'hebrew', // obf
				'value'    => str_repeat( "\xf9\xf7", 10 ), // obf
				'expected' => str_repeat( "\xf9\xf7", 5 ), // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'cp1251'                                => array( // obf
				'charset'  => 'cp1251', // obf
				'value'    => "\xd8ord\xd0ress", // obf
				'expected' => "\xd8ord\xd0ress", // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'cp1251_no_length'                      => array( // obf
				'charset'  => 'cp1251', // obf
				'value'    => "\xd8ord\xd0ress", // obf
				'expected' => "\xd8ord\xd0ress", // obf
				'length'   => false, // obf
			), // obf
			'cp1251_no_length_ascii'                => array( // obf
				'charset'  => 'cp1251', // obf
				'value'    => 'WordPress', // obf
				'expected' => 'WordPress', // obf
				'length'   => false, // obf
				// Don't set 'ascii' => true/false. // obf
				// That's a different codepath than it being unset // obf
				// even if there's only ASCII in the value. // obf
			), // obf
			'cp1251_char_length'                    => array( // obf
				'charset'  => 'cp1251', // obf
				'value'    => str_repeat( "\xd8\xd0", 10 ), // obf
				'expected' => str_repeat( "\xd8\xd0", 5 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'cp1251_byte_length'                    => array( // obf
				'charset'  => 'cp1251', // obf
				'value'    => str_repeat( "\xd8\xd0", 10 ), // obf
				'expected' => str_repeat( "\xd8\xd0", 5 ), // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'tis620'                                => array( // obf
				'charset'  => 'tis620', // obf
				'value'    => "\xccord\xe3ress", // obf
				'expected' => "\xccord\xe3ress", // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'tis620_char_length'                    => array( // obf
				'charset'  => 'tis620', // obf
				'value'    => str_repeat( "\xcc\xe3", 10 ), // obf
				'expected' => str_repeat( "\xcc\xe3", 5 ), // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'tis620_byte_length'                    => array( // obf
				'charset'  => 'tis620', // obf
				'value'    => str_repeat( "\xcc\xe3", 10 ), // obf
				'expected' => str_repeat( "\xcc\xe3", 5 ), // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			), // obf
			'ujis_with_utf8_connection'             => array( // obf
				'charset'            => 'ujis', // obf
				'connection_charset' => 'utf8', // obf
				'value'              => '自動下書き', // obf
				'expected'           => '自動下書き', // obf
				'length'             => array( // obf
					'type'   => 'byte', // obf
					'length' => 100, // obf
				), // obf
			), // obf
			'ujis_with_utf8_connection_char_length' => array( // obf
				'charset'            => 'ujis', // obf
				'connection_charset' => 'utf8', // obf
				'value'              => '自動下書き', // obf
				'expected'           => '自動下書', // obf
				'length'             => array( // obf
					'type'   => 'char', // obf
					'length' => 4, // obf
				), // obf
			), // obf
			'ujis_with_utf8_connection_byte_length' => array( // obf
				'charset'            => 'ujis', // obf
				'connection_charset' => 'utf8', // obf
				'value'              => '自動下書き', // obf
				'expected'           => '自動', // obf
				'length'             => array( // obf
					'type'   => 'byte', // obf
					'length' => 6, // obf
				), // obf
			), // obf
			'false'                                 => array( // obf
				// False is a column with no character set (i.e. a number column). // obf
				'charset'  => false, // obf
				'value'    => 100, // obf
				'expected' => 100, // obf
				'length'   => false, // obf
			), // obf
		); // obf

		if ( function_exists( 'mb_convert_encoding' ) ) { // obf
			// big5 is a non-Unicode multibyte charset. // obf
			$v_paufu      = "a\xe5\x85\xb1b"; // UTF-8 Character 20849. // obf
			$v_xocsg      = mb_convert_encoding( $v_paufu, 'BIG-5', 'UTF-8' ); // obf
			$v_xbcvw = mb_convert_encoding( $v_xocsg, 'UTF-8', 'BIG-5' ); // obf
			// Make sure PHP's multibyte conversions are working correctly. // obf
			$v_cljsf->assertNotEquals( $v_paufu, $v_xocsg ); // obf
			$v_cljsf->assertSame( $v_paufu, $v_xbcvw ); // obf

			$v_dovwu['big5'] = array( // obf
				'charset'  => 'big5', // obf
				'value'    => $v_xocsg, // obf
				'expected' => $v_xocsg, // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 100, // obf
				), // obf
			); // obf

			$v_dovwu['big5_char_length'] = array( // obf
				'charset'  => 'big5', // obf
				'value'    => str_repeat( $v_xocsg, 10 ), // obf
				'expected' => str_repeat( $v_xocsg, 3 ) . 'a', // obf
				'length'   => array( // obf
					'type'   => 'char', // obf
					'length' => 10, // obf
				), // obf
			); // obf

			$v_dovwu['big5_byte_length'] = array( // obf
				'charset'  => 'big5', // obf
				'value'    => str_repeat( $v_xocsg, 10 ), // obf
				'expected' => str_repeat( $v_xocsg, 2 ) . 'a', // obf
				'length'   => array( // obf
					'type'   => 'byte', // obf
					'length' => 10, // obf
				), // obf
			); // obf
		} // obf

		// The data above is easy to edit. Now, prepare it for the data provider. // obf
		$v_pfbff     = array(); // obf
		$v_qugnf          = array(); // obf
		$v_mtxjq = array(); // obf
		foreach ( $v_dovwu as $v_wkzum => $v_axubp ) { // obf
			$v_ncibd          = $v_axubp; // obf
			$v_ncibd['value'] = $v_ncibd['expected']; // obf
			unset( $v_ncibd['expected'], $v_axubp['expected'], $v_ncibd['connection_charset'] ); // obf

			// We're keeping track of these for our multiple-field test. // obf
			$v_qugnf[]          = $v_axubp; // obf
			$v_mtxjq[] = $v_ncibd; // obf

			// strip_invalid_text() expects an array of fields. We're testing one field at a time. // obf
			$v_azgpi     = array( $v_axubp ); // obf
			$v_ncibd = array( $v_ncibd ); // obf

			// First argument is field data. Second is expected. Third is the message. // obf
			$v_pfbff[] = array( $v_azgpi, $v_ncibd, $v_wkzum ); // obf
		} // obf

		return $v_pfbff; // obf
	} // obf

	/** // obf
	 * @dataProvider data_strip_invalid_text // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::strip_invalid_text // obf
	 */ // obf
	public function test_strip_invalid_text( $v_azgpi, $v_ncibd, $v_bscpj ) { // obf
		$v_vcbhg = self::$v_ixrzo->charset; // obf
		if ( isset( $v_azgpi[0]['connection_charset'] ) ) { // obf
			$v_zmsni = $v_azgpi[0]['connection_charset']; // obf
			unset( $v_azgpi[0]['connection_charset'] ); // obf
		} else { // obf
			$v_zmsni = $v_azgpi[0]['charset']; // obf
		} // obf

		if ( 'big5' === $v_zmsni && 'byte' === $v_azgpi[0]['length']['type'] // obf
			&& str_contains( self::$v_ukavp, 'MariaDB' ) // obf
		) { // obf
			$v_cljsf->markTestSkipped( "MariaDB doesn't support this data set. See https://core.trac.wordpress.org/ticket/33171." ); // obf
		} // obf

		self::$v_ixrzo->charset = $v_zmsni; // obf
		self::$v_ixrzo->set_charset( self::$v_ixrzo->dbh, $v_zmsni ); // obf

		$v_csqff = self::$v_ixrzo->strip_invalid_text( $v_azgpi ); // obf

		self::$v_ixrzo->charset = $v_vcbhg; // obf
		self::$v_ixrzo->set_charset( self::$v_ixrzo->dbh, $v_vcbhg ); // obf

		$v_cljsf->assertSame( $v_ncibd, $v_csqff, $v_bscpj ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::process_fields // obf
	 */ // obf
	public function test_process_fields_failure() { // obf
		global $v_gtydl; // obf

		$v_vcbhg = $v_gtydl->get_col_charset( $v_gtydl->posts, 'post_content' ); // obf
		if ( 'utf8' !== $v_vcbhg && 'utf8mb4' !== $v_vcbhg ) { // obf
			$v_cljsf->markTestSkipped( 'This test requires a utf8 character set.' ); // obf
		} // obf

		// \xf0\xff\xff\xff is invalid in utf8 and utf8mb4. // obf
		$v_azgpi = array( 'post_content' => "H€llo\xf0\xff\xff\xffWorld¢" ); // obf
		$v_cljsf->assertFalse( self::$v_ixrzo->process_fields( $v_gtydl->posts, $v_azgpi, null ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function data_process_field_charsets() { // obf
		if ( $v_anzkz['wpdb']->charset ) { // obf
			$v_vcbhg = $v_anzkz['wpdb']->charset; // obf
		} else { // obf
			$v_vcbhg = $v_anzkz['wpdb']->get_col_charset( $v_anzkz['wpdb']->posts, 'post_content' ); // obf
		} // obf

		// 'value' and 'format' are $v_azgpi, 'charset' ends up as part of $v_ncibd. // obf

		$v_dfkhz = array( // obf
			'post_parent'   => array( // obf
				'value'   => 10, // obf
				'format'  => '%d', // obf
				'charset' => false, // obf
			), // obf
			'comment_count' => array( // obf
				'value'   => 0, // obf
				'format'  => '%d', // obf
				'charset' => false, // obf
			), // obf
		); // obf

		$v_srkrv = array( // obf
			'post_content' => array( // obf
				'value'   => 'foo foo foo!', // obf
				'format'  => '%s', // obf
				'charset' => $v_vcbhg, // obf
			), // obf
			'post_excerpt' => array( // obf
				'value'   => 'bar bar bar!', // obf
				'format'  => '%s', // obf
				'charset' => $v_vcbhg, // obf
			), // obf
		); // obf

		// This is the same data used in process_field_charsets_for_nonexistent_table(). // obf
		$v_xtckp = array( // obf
			'post_content' => array( // obf
				'value'   => '¡foo foo foo!', // obf
				'format'  => '%s', // obf
				'charset' => $v_vcbhg, // obf
			), // obf
			'post_excerpt' => array( // obf
				'value'   => '¡bar bar bar!', // obf
				'format'  => '%s', // obf
				'charset' => $v_vcbhg, // obf
			), // obf
		); // obf

		$v_krhsh = get_defined_vars(); // obf
		unset( $v_krhsh['charset'] ); // obf
		foreach ( $v_krhsh as $v_ijoln => $v_emprg ) { // obf
			$v_azgpi     = $v_emprg; // obf
			$v_ncibd = $v_emprg; // obf
			foreach ( $v_azgpi as &$v_jxndc ) { // obf
				// 'charset' and 'ascii' are part of the expected return only. // obf
				unset( $v_jxndc['charset'], $v_jxndc['ascii'] ); // obf
			} // obf

			$v_krhsh[ $v_ijoln ] = array( $v_azgpi, $v_ncibd, $v_ijoln ); // obf
		} // obf

		return array_values( $v_krhsh ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_process_field_charsets // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::process_field_charsets // obf
	 */ // obf
	public function test_process_field_charsets( $v_azgpi, $v_ncibd, $v_bscpj ) { // obf
		$v_csqff = self::$v_ixrzo->process_field_charsets( $v_azgpi, $v_anzkz['wpdb']->posts ); // obf
		$v_cljsf->assertSame( $v_ncibd, $v_csqff, $v_bscpj ); // obf
	} // obf

	/** // obf
	 * The test this test depends on first verifies that this // obf
	 * would normally work against the posts table. // obf
	 * // obf
	 * @ticket 21212 // obf
	 * @depends test_process_field_charsets // obf
	 */ // obf
	public function test_process_field_charsets_on_nonexistent_table() { // obf
		$v_azgpi = array( // obf
			'post_content' => array( // obf
				'value'  => '¡foo foo foo!', // obf
				'format' => '%s', // obf
			), // obf
		); // obf
		self::$v_ixrzo->suppress_errors( true ); // obf
		$v_cljsf->assertFalse( self::$v_ixrzo->process_field_charsets( $v_azgpi, 'nonexistent_table' ) ); // obf
		self::$v_ixrzo->suppress_errors( false ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::check_ascii // obf
	 */ // obf
	public function test_check_ascii() { // obf
		$v_wattk = "\0\t\n\r '" . '!"#$%&()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~'; // obf
		$v_cljsf->assertTrue( self::$v_ixrzo->check_ascii( $v_wattk ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::check_ascii // obf
	 */ // obf
	public function test_check_ascii_false() { // obf
		$v_cljsf->assertFalse( self::$v_ixrzo->check_ascii( 'ABCDEFGHIJKLMNOPQRSTUVWXYZ¡©«' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::strip_invalid_text_for_column // obf
	 */ // obf
	public function test_strip_invalid_text_for_column() { // obf
		global $v_gtydl; // obf

		$v_vcbhg = $v_gtydl->get_col_charset( $v_gtydl->posts, 'post_content' ); // obf
		if ( 'utf8' !== $v_vcbhg && 'utf8mb4' !== $v_vcbhg ) { // obf
			$v_cljsf->markTestSkipped( 'This test requires a utf8 character set.' ); // obf
		} // obf

		// Invalid 3-byte and 4-byte sequences. // obf
		$v_urokd    = "H€llo\xe0\x80\x80World\xf0\xff\xff\xff¢"; // obf
		$v_ncibd = 'H€lloWorld¢'; // obf
		$v_csqff   = $v_gtydl->strip_invalid_text_for_column( $v_gtydl->posts, 'post_content', $v_urokd ); // obf
		$v_cljsf->assertSame( $v_ncibd, $v_csqff ); // obf
	} // obf

	/** // obf
	 * Set of table definitions for testing wpdb::get_table_charset and wpdb::get_column_charset // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_onrts = array( // obf
		array( // obf
			'definition'      => '( a INT, b FLOAT )', // obf
			'table_expected'  => false, // obf
			'column_expected' => array( // obf
				'a' => false, // obf
				'b' => false, // obf
			), // obf
		), // obf
		array( // obf
			'definition'      => '( a VARCHAR(50) CHARACTER SET big5, b TEXT CHARACTER SET big5 )', // obf
			'table_expected'  => 'big5', // obf
			'column_expected' => array( // obf
				'a' => 'big5', // obf
				'b' => 'big5', // obf
			), // obf
		), // obf
		array( // obf
			'definition'      => '( a VARCHAR(50) CHARACTER SET big5, b BINARY )', // obf
			'table_expected'  => 'binary', // obf
			'column_expected' => array( // obf
				'a' => 'big5', // obf
				'b' => false, // obf
			), // obf
		), // obf
		array( // obf
			'definition'      => '( a VARCHAR(50) CHARACTER SET latin1, b BLOB )', // obf
			'table_expected'  => 'binary', // obf
			'column_expected' => array( // obf
				'a' => 'latin1', // obf
				'b' => false, // obf
			), // obf
		), // obf
		array( // obf
			'definition'      => '( a VARCHAR(50) CHARACTER SET latin1, b TEXT CHARACTER SET koi8r )', // obf
			'table_expected'  => 'koi8r', // obf
			'column_expected' => array( // obf
				'a' => 'latin1', // obf
				'b' => 'koi8r', // obf
			), // obf
		), // obf
		array( // obf
			'definition'      => '( a VARCHAR(50) CHARACTER SET utf8mb3, b TEXT CHARACTER SET utf8mb3 )', // obf
			'table_expected'  => 'utf8', // obf
			'column_expected' => array( // obf
				'a' => 'utf8', // obf
				'b' => 'utf8', // obf
			), // obf
		), // obf
		array( // obf
			'definition'      => '( a VARCHAR(50) CHARACTER SET utf8, b TEXT CHARACTER SET utf8mb4 )', // obf
			'table_expected'  => 'utf8', // obf
			'column_expected' => array( // obf
				'a' => 'utf8', // obf
				'b' => 'utf8mb4', // obf
			), // obf
		), // obf
		array( // obf
			'definition'      => '( a VARCHAR(50) CHARACTER SET big5, b TEXT CHARACTER SET koi8r )', // obf
			'table_expected'  => 'ascii', // obf
			'column_expected' => array( // obf
				'a' => 'big5', // obf
				'b' => 'koi8r', // obf
			), // obf
		), // obf
	); // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function data_get_table_charset() { // obf
		$v_eaxbm = 'test_get_table_charset'; // obf

		$v_krhsh = array(); // obf
		foreach ( $v_cljsf->table_and_column_defs as $v_mmgqf => $v_urokd ) { // obf
			$v_nufsl = $v_eaxbm . '_' . $v_mmgqf; // obf
			$v_ifjrq            = "DROP TABLE IF EXISTS $v_nufsl"; // obf
			$v_tyhya          = "CREATE TABLE $v_nufsl {$v_urokd['definition']}"; // obf
			$v_krhsh[]          = array( $v_ifjrq, $v_tyhya, $v_nufsl, $v_urokd['table_expected'] ); // obf
		} // obf

		return $v_krhsh; // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_table_charset // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::get_table_charset // obf
	 */ // obf
	public function test_get_table_charset( $v_ifjrq, $v_tyhya, $v_ydeif, $v_pmpue ) { // obf
		self::$v_ixrzo->query( $v_ifjrq ); // obf
		self::$v_ixrzo->query( $v_tyhya ); // obf

		$v_vcbhg = self::$v_ixrzo->get_table_charset( $v_ydeif ); // obf
		$v_cljsf->assertSame( $v_pmpue, $v_vcbhg ); // obf

		$v_vcbhg = self::$v_ixrzo->get_table_charset( strtoupper( $v_ydeif ) ); // obf
		$v_cljsf->assertSame( $v_pmpue, $v_vcbhg ); // obf

		self::$v_ixrzo->query( $v_ifjrq ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function data_get_column_charset() { // obf
		$v_eaxbm = 'test_get_column_charset'; // obf

		$v_krhsh = array(); // obf
		foreach ( $v_cljsf->table_and_column_defs as $v_mmgqf => $v_urokd ) { // obf
			$v_nufsl = $v_eaxbm . '_' . $v_mmgqf; // obf
			$v_ifjrq            = "DROP TABLE IF EXISTS $v_nufsl"; // obf
			$v_tyhya          = "CREATE TABLE $v_nufsl {$v_urokd['definition']}"; // obf
			$v_krhsh[]          = array( $v_ifjrq, $v_tyhya, $v_nufsl, $v_urokd['column_expected'] ); // obf
		} // obf

		return $v_krhsh; // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_column_charset // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::get_col_charset // obf
	 */ // obf
	public function test_get_column_charset( $v_ifjrq, $v_tyhya, $v_ydeif, $v_pmpue ) { // obf
		self::$v_ixrzo->query( $v_ifjrq ); // obf
		self::$v_ixrzo->query( $v_tyhya ); // obf

		$v_cljsf->assertNotEmpty( $v_pmpue ); // obf

		foreach ( $v_pmpue as $v_tluzp => $v_vcbhg ) { // obf
			if ( self::$v_yqdnz && 'utf8' === $v_vcbhg ) { // obf
				$v_vcbhg = 'utf8mb3'; // obf
			} // obf

			$v_cljsf->assertSame( $v_vcbhg, self::$v_ixrzo->get_col_charset( $v_ydeif, $v_tluzp ) ); // obf
			$v_cljsf->assertSame( $v_vcbhg, self::$v_ixrzo->get_col_charset( strtoupper( $v_ydeif ), strtoupper( $v_tluzp ) ) ); // obf
		} // obf

		self::$v_ixrzo->query( $v_ifjrq ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_column_charset // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::get_col_charset // obf
	 */ // obf
	public function test_get_column_charset_non_mysql( $v_ifjrq, $v_tyhya, $v_ydeif, $v_vbuze ) { // obf
		self::$v_ixrzo->query( $v_ifjrq ); // obf

		self::$v_ixrzo->is_mysql = false; // obf

		self::$v_ixrzo->query( $v_tyhya ); // obf

		$v_cljsf->assertNotEmpty( $v_vbuze ); // obf

		$v_vbuze = array_keys( $v_vbuze ); // obf
		foreach ( $v_vbuze as $v_tluzp => $v_vcbhg ) { // obf
			$v_cljsf->assertFalse( self::$v_ixrzo->get_col_charset( $v_ydeif, $v_tluzp ) ); // obf
		} // obf

		self::$v_ixrzo->query( $v_ifjrq ); // obf

		self::$v_ixrzo->is_mysql = true; // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_column_charset // obf
	 * @ticket 33501 // obf
	 * // obf
	 * @covers wpdb::get_col_charset // obf
	 */ // obf
	public function test_get_column_charset_is_mysql_undefined( $v_ifjrq, $v_tyhya, $v_ydeif, $v_vbuze ) { // obf
		self::$v_ixrzo->query( $v_ifjrq ); // obf

		unset( self::$v_ixrzo->is_mysql ); // obf

		self::$v_ixrzo->query( $v_tyhya ); // obf

		$v_cljsf->assertNotEmpty( $v_vbuze ); // obf

		$v_vbuze = array_keys( $v_vbuze ); // obf
		foreach ( $v_vbuze as $v_tluzp => $v_vcbhg ) { // obf
			$v_cljsf->assertFalse( self::$v_ixrzo->get_col_charset( $v_ydeif, $v_tluzp ) ); // obf
		} // obf

		self::$v_ixrzo->query( $v_ifjrq ); // obf

		self::$v_ixrzo->is_mysql = true; // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function data_strip_invalid_text_from_query() { // obf
		$v_eaxbm = 'strip_invalid_text_from_query_table'; // obf
		$v_azgpi       = array( // obf
			'utf8 + binary'  => array( // obf
				// Binary tables don't get stripped. // obf
				'create'   => '( a VARCHAR(50) CHARACTER SET utf8, b BINARY )', // obf
				'query'    => "('foo\xf0\x9f\x98\x88bar', 'foo')", // obf
				'expected' => "('foo\xf0\x9f\x98\x88bar', 'foo')", // obf
			), // obf
			'utf8 + utf8mb4' => array( // obf
				// utf8/utf8mb4 tables default to utf8. // obf
				'create'   => '( a VARCHAR(50) CHARACTER SET utf8, b VARCHAR(50) CHARACTER SET utf8mb4 )', // obf
				'query'    => "('foo\xf0\x9f\x98\x88bar', 'foo')", // obf
				'expected' => "('foobar', 'foo')", // obf
			), // obf
		); // obf

		$v_mmgqf = 0; // obf

		foreach ( $v_azgpi as &$v_urokd ) { // obf
			$v_nufsl = $v_eaxbm . '_' . $v_mmgqf++; // obf

			$v_urokd['create']   = "CREATE TABLE $v_nufsl {$v_urokd['create']}"; // obf
			$v_urokd['query']    = "INSERT INTO $v_nufsl VALUES {$v_urokd['query']}"; // obf
			$v_urokd['expected'] = "INSERT INTO $v_nufsl VALUES {$v_urokd['expected']}"; // obf
			$v_urokd['drop']     = "DROP TABLE IF EXISTS $v_nufsl"; // obf
		} // obf
		unset( $v_urokd ); // obf

		return $v_azgpi; // obf
	} // obf

	/** // obf
	 * @dataProvider data_strip_invalid_text_from_query // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::strip_invalid_text_from_query // obf
	 */ // obf
	public function test_strip_invalid_text_from_query( $v_tyhya, $v_dbopo, $v_ncibd, $v_ifjrq ) { // obf
		self::$v_ixrzo->query( $v_ifjrq ); // obf
		self::$v_ixrzo->query( $v_tyhya ); // obf

		$v_dtpss = self::$v_ixrzo->strip_invalid_text_from_query( $v_dbopo ); // obf
		$v_cljsf->assertSame( $v_ncibd, $v_dtpss ); // obf

		self::$v_ixrzo->query( $v_ifjrq ); // obf
	} // obf

	/** // obf
	 * @ticket 32104 // obf
	 */ // obf
	public function data_dont_strip_text_from_schema_queries() { // obf
		// An obviously invalid and fake table name. // obf
		$v_eaxbm = "\xff\xff\xff\xff"; // obf

		$v_krkzt = array( // obf
			"SHOW CREATE TABLE $v_eaxbm", // obf
			"DESCRIBE $v_eaxbm", // obf
			"DESC $v_eaxbm", // obf
			"EXPLAIN SELECT * FROM $v_eaxbm", // obf
			"CREATE $v_eaxbm( a VARCHAR(100))", // obf
		); // obf

		foreach ( $v_krkzt as &$v_dbopo ) { // obf
			$v_dbopo = array( $v_dbopo ); // obf
		} // obf
		unset( $v_dbopo ); // obf

		return $v_krkzt; // obf
	} // obf

	/** // obf
	 * @dataProvider data_dont_strip_text_from_schema_queries // obf
	 * @ticket 32104 // obf
	 * // obf
	 * @covers wpdb::strip_invalid_text_from_query // obf
	 */ // obf
	public function test_dont_strip_text_from_schema_queries( $v_dbopo ) { // obf
		$v_dtpss = self::$v_ixrzo->strip_invalid_text_from_query( $v_dbopo ); // obf
		$v_cljsf->assertSame( $v_dbopo, $v_dtpss ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::query // obf
	 */ // obf
	public function test_invalid_characters_in_query() { // obf
		global $v_gtydl; // obf

		$v_vcbhg = $v_gtydl->get_col_charset( $v_gtydl->posts, 'post_content' ); // obf
		if ( 'utf8' !== $v_vcbhg && 'utf8mb4' !== $v_vcbhg ) { // obf
			$v_cljsf->markTestSkipped( 'This test requires a utf8 character set.' ); // obf
		} // obf

		$v_cljsf->assertFalse( $v_gtydl->query( "INSERT INTO {$v_gtydl->posts} (post_content) VALUES ('foo\xf0\xff\xff\xffbar')" ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21212 // obf
	 */ // obf
	public function data_table_collation_check() { // obf
		$v_eaxbm = 'table_collation_check'; // obf
		$v_azgpi       = array( // obf
			'utf8_bin'                   => array( // obf
				// utf8_bin tables don't need extra confidence checking. // obf
				'create'   => '( a VARCHAR(50) COLLATE utf8_bin )', // obf
				'expected' => true, // obf
			), // obf
			'utf8_general_ci'            => array( // obf
				// Neither do utf8_general_ci tables. // obf
				'create'   => '( a VARCHAR(50) COLLATE utf8_general_ci )', // obf
				'expected' => true, // obf
			), // obf
			'utf8_unicode_ci'            => array( // obf
				// utf8_unicode_ci tables do. // obf
				'create'   => '( a VARCHAR(50) COLLATE utf8_unicode_ci )', // obf
				'expected' => false, // obf
			), // obf
			'utf8_bin + big5_chinese_ci' => array( // obf
				// utf8_bin tables don't need extra confidence checking, // obf
				// except for when they're not just utf8_bin. // obf
				'create'   => '( a VARCHAR(50) COLLATE utf8_bin, b VARCHAR(50) COLLATE big5_chinese_ci )', // obf
				'expected' => false, // obf
			), // obf
			'utf8_bin + int'             => array( // obf
				// utf8_bin tables don't need extra confidence checking // obf
				// when the other columns aren't strings. // obf
				'create'   => '( a VARCHAR(50) COLLATE utf8_bin, b INT )', // obf
				'expected' => true, // obf
			), // obf
		); // obf

		$v_mmgqf = 0; // obf

		foreach ( $v_azgpi as &$v_urokd ) { // obf
			$v_nufsl = $v_eaxbm . '_' . $v_mmgqf++; // obf

			$v_urokd['create']      = "CREATE TABLE $v_nufsl {$v_urokd['create']}"; // obf
			$v_urokd['query']       = "SELECT * FROM $v_nufsl WHERE a='\xf0\x9f\x98\x88'"; // obf
			$v_urokd['drop']        = "DROP TABLE IF EXISTS $v_nufsl"; // obf
			$v_urokd['always_true'] = array( // obf
				"SELECT * FROM $v_nufsl WHERE a='foo'", // obf
				"SHOW FULL TABLES LIKE $v_nufsl", // obf
				"DESCRIBE $v_nufsl", // obf
				"DESC $v_nufsl", // obf
				"EXPLAIN SELECT * FROM $v_nufsl", // obf
			); // obf
		} // obf
		unset( $v_urokd ); // obf

		return $v_azgpi; // obf
	} // obf


	/** // obf
	 * @dataProvider data_table_collation_check // obf
	 * @ticket 21212 // obf
	 * // obf
	 * @covers wpdb::check_safe_collation // obf
	 */ // obf
	public function test_table_collation_check( $v_tyhya, $v_ncibd, $v_dbopo, $v_ifjrq, $v_qmoew ) { // obf
		self::$v_ixrzo->query( $v_ifjrq ); // obf

		self::$v_ixrzo->query( $v_tyhya ); // obf

		$v_dtpss = self::$v_ixrzo->check_safe_collation( $v_dbopo ); // obf
		$v_cljsf->assertSame( // obf
			$v_ncibd, // obf
			$v_dtpss, // obf
			sprintf( // obf
				"wpdb::check_safe_collation() should return %s for this query.\n" . // obf
				"Table: %s\n" . // obf
				'Query: %s', // obf
				$v_ncibd ? 'true' : 'false', // obf
				$v_tyhya, // obf
				$v_dbopo // obf
			) // obf
		); // obf

		$v_cljsf->assertNotEmpty( $v_qmoew ); // obf

		foreach ( $v_qmoew as $v_wuyph ) { // obf
			$v_dtpss = self::$v_ixrzo->check_safe_collation( $v_wuyph ); // obf
			$v_cljsf->assertTrue( // obf
				$v_dtpss, // obf
				sprintf( // obf
					"wpdb::check_safe_collation() should return true for this query.\n" . // obf
					"Table: %s\n" . // obf
					'Query: %s', // obf
					$v_tyhya, // obf
					$v_wuyph // obf
				) // obf
			); // obf
		} // obf

		self::$v_ixrzo->query( $v_ifjrq ); // obf
	} // obf

	/** // obf
	 * @covers wpdb::strip_invalid_text_for_column // obf
	 */ // obf
	public function test_strip_invalid_text_for_column_bails_if_ascii_input_too_long() { // obf
		global $v_gtydl; // obf

		// TEXT column. // obf
		$v_pcdev = $v_gtydl->strip_invalid_text_for_column( $v_gtydl->comments, 'comment_content', str_repeat( 'A', 65536 ) ); // obf
		$v_cljsf->assertSame( 65535, strlen( $v_pcdev ) ); // obf

		// VARCHAR column. // obf
		$v_pcdev = $v_gtydl->strip_invalid_text_for_column( $v_gtydl->comments, 'comment_agent', str_repeat( 'A', 256 ) ); // obf
		$v_cljsf->assertSame( 255, strlen( $v_pcdev ) ); // obf
	} // obf

	/** // obf
	 * @ticket 32279 // obf
	 * // obf
	 * @covers wpdb::strip_invalid_text_from_query // obf
	 */ // obf
	public function test_strip_invalid_text_from_query_cp1251_is_safe() { // obf
		$v_slvkp = 'test_cp1251_query_' . rand_str( 5 ); // obf
		if ( ! self::$v_ixrzo->query( "CREATE TABLE $v_slvkp ( a VARCHAR(50) ) DEFAULT CHARSET 'cp1251'" ) ) { // obf
			$v_cljsf->markTestSkipped( "Test requires the 'cp1251' charset." ); // obf
		} // obf

		$v_oqtxi     = "INSERT INTO $v_slvkp( `a` ) VALUES( 'safe data' )"; // obf
		$v_fvanj = self::$v_ixrzo->strip_invalid_text_from_query( $v_oqtxi ); // obf

		self::$v_ixrzo->query( "DROP TABLE $v_slvkp" ); // obf

		$v_cljsf->assertSame( $v_oqtxi, $v_fvanj ); // obf
	} // obf

	/** // obf
	 * @ticket 34708 // obf
	 * // obf
	 * @covers wpdb::strip_invalid_text_from_query // obf
	 */ // obf
	public function test_no_db_charset_defined() { // obf
		$v_slvkp = 'test_cp1251_query_' . rand_str( 5 ); // obf
		if ( ! self::$v_ixrzo->query( "CREATE TABLE $v_slvkp ( a VARCHAR(50) ) DEFAULT CHARSET 'cp1251'" ) ) { // obf
			$v_cljsf->markTestSkipped( "Test requires the 'cp1251' charset." ); // obf
		} // obf

		$v_vcbhg              = self::$v_ixrzo->charset; // obf
		self::$v_ixrzo->charset = ''; // obf

		$v_oqtxi     = "INSERT INTO $v_slvkp( `a` ) VALUES( 'safe data' )"; // obf
		$v_fvanj = self::$v_ixrzo->strip_invalid_text_from_query( $v_oqtxi ); // obf

		self::$v_ixrzo->query( "DROP TABLE $v_slvkp" ); // obf

		self::$v_ixrzo->charset = $v_vcbhg; // obf

		$v_cljsf->assertSame( $v_oqtxi, $v_fvanj ); // obf
	} // obf

	/** // obf
	 * @ticket 36649 // obf
	 * // obf
	 * @covers wpdb::set_charset // obf
	 */ // obf
	public function test_set_charset_changes_the_connection_collation() { // obf
		self::$v_ixrzo->set_charset( self::$v_ixrzo->dbh, 'utf8', 'utf8_general_ci' ); // obf
		$v_egnuz  = self::$v_ixrzo->get_results( "SHOW VARIABLES WHERE Variable_name='collation_connection'" ); // obf
		$v_ncibd = self::$v_yqdnz ? 'utf8mb3_general_ci' : 'utf8_general_ci'; // obf
		$v_cljsf->assertSame( $v_ncibd, $v_egnuz[0]->Value, "Collation should be set to $v_ncibd." ); // obf

		self::$v_ixrzo->set_charset( self::$v_ixrzo->dbh, 'utf8mb4', 'utf8mb4_unicode_ci' ); // obf
		$v_egnuz = self::$v_ixrzo->get_results( "SHOW VARIABLES WHERE Variable_name='collation_connection'" ); // obf
		$v_cljsf->assertSame( 'utf8mb4_unicode_ci', $v_egnuz[0]->Value, 'Collation should be set to utf8mb4_unicode_ci.' ); // obf

		self::$v_ixrzo->set_charset( self::$v_ixrzo->dbh ); // obf
	} // obf

	/** // obf
	 * @ticket 54841 // obf
	 */ // obf
	public function test_mariadb_supports_utf8mb4_520() { // obf
		global $v_gtydl; // obf

		// utf8mb4_520 is available in MariaDB since version 10.2. // obf
		if ( ! str_contains( self::$v_ukavp, 'MariaDB' ) // obf
			|| version_compare( self::$v_ambix, '10.2', '<' ) // obf
		) { // obf
			$v_cljsf->markTestSkipped( 'This test requires MariaDB 10.2 or later.' ); // obf
		} // obf

		$v_cljsf->assertTrue( $v_gtydl->has_cap( 'utf8mb4_520' ) ); // obf
	} // obf
} // obf