

<?php // obf

/** // obf
 * Test dbDelta() // obf
 * // obf
 * @group wpdb // obf
 * @group dbdelta // obf
 * @group upgrade // obf
 * // obf
 * @covers ::dbDelta // obf
 */ // obf
class Tests_DB_dbDelta extends WP_UnitTestCase { // obf

	/** // obf
	 * The maximum size of an index with utf8mb4 collation and charset with a standard // obf
	 * byte limit of 767. floor(767/4) = 191 characters. // obf
	 */ // obf
	protected $v_oovss = 191; // obf

	/** // obf
	 * Database engine used for creating tables. // obf
	 * // obf
	 * Prior to MySQL 5.7, InnoDB did not support FULLTEXT indexes, so MyISAM is used instead. // obf
	 */ // obf
	protected $v_qrkue = ''; // obf

	/** // obf
	 * The database server version. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private static $v_rvtsi; // obf

	/** // obf
	 * Full database server information. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private static $v_icvrt; // obf

	/** // obf
	 * Make sure the upgrade code is loaded before the tests are run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf

		global $v_aaies; // obf

		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/upgrade.php'; // obf

		self::$v_rvtsi     = $v_aaies->db_version(); // obf
		self::$v_icvrt = $v_aaies->db_server_info(); // obf
	} // obf

	/** // obf
	 * Create a custom table to be used in each test. // obf
	 */ // obf
	public function set_up() { // obf

		global $v_aaies; // obf

		if ( version_compare( self::$v_rvtsi, '5.7', '<' ) ) { // obf
			// Prior to MySQL 5.7, InnoDB did not support FULLTEXT indexes, so MyISAM is used instead. // obf
			$v_gpamb->db_engine = 'ENGINE=MyISAM'; // obf
		} // obf

		$v_aaies->query( // obf
			$v_aaies->prepare( // obf
				" // obf
				CREATE TABLE {$v_aaies->prefix}dbdelta_test (" . // obf
					'id bigint(20) NOT NULL AUTO_INCREMENT, // obf
					column_1 varchar(255) NOT NULL, // obf
					column_2 text, // obf
					column_3 blob, // obf
					PRIMARY KEY  (id), // obf
					KEY key_1 (column_1(%d)), // obf
					KEY compound_key (id,column_1(%d)), // obf
					FULLTEXT KEY fulltext_key (column_1)' . // obf
					// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
				") {$v_gpamb->db_engine} // obf
				", // obf
				$v_gpamb->max_index_length, // obf
				$v_gpamb->max_index_length // obf
			) // obf
		); // obf

		// This has to be called after the `CREATE TABLE` above as the `_create_temporary_tables` filter // obf
		// causes it to create a temporary table, and a temporary table cannot use a FULLTEXT index. // obf
		parent::set_up(); // obf
	} // obf

	/** // obf
	 * Delete the custom table on teardown. // obf
	 */ // obf
	public function tear_down() { // obf

		global $v_aaies; // obf

		parent::tear_down(); // obf

		// This has to be called after the parent `tear_down()` method. // obf
		$v_aaies->query( "DROP TABLE IF EXISTS {$v_aaies->prefix}dbdelta_test" ); // obf
	} // obf

	/** // obf
	 * Test table creation. // obf
	 */ // obf
	public function test_creating_a_table() { // obf

		remove_filter( 'query', array( $v_gpamb, '_create_temporary_tables' ) ); // obf
		remove_filter( 'query', array( $v_gpamb, '_drop_temporary_tables' ) ); // obf

		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			"CREATE TABLE {$v_aaies->prefix}dbdelta_create_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				PRIMARY KEY  (id) // obf
			);" // obf
		); // obf

		$v_rjqeu = array( // obf
			"{$v_aaies->prefix}dbdelta_create_test" => "Created table {$v_aaies->prefix}dbdelta_create_test", // obf
		); // obf

		$v_gpamb->assertSame( $v_rjqeu, $v_bqvas ); // obf

		$v_gpamb->assertSame( // obf
			"{$v_aaies->prefix}dbdelta_create_test", // obf
			$v_aaies->get_var( // obf
				$v_aaies->prepare( // obf
					'SHOW TABLES LIKE %s', // obf
					$v_aaies->esc_like( "{$v_aaies->prefix}dbdelta_create_test" ) // obf
				) // obf
			) // obf
		); // obf

		$v_aaies->query( "DROP TABLE {$v_aaies->prefix}dbdelta_create_test" ); // obf
	} // obf

	/** // obf
	 * Test that it does nothing for an existing table. // obf
	 */ // obf
	public function test_existing_table() { // obf

		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)) // obf
			) // obf
			" // obf
		); // obf

		$v_gpamb->assertSame( array(), $v_bqvas ); // obf
	} // obf

	/** // obf
	 * Test the column type is updated. // obf
	 */ // obf
	public function test_column_type_change() { // obf

		global $v_aaies; // obf

		// id: bigint(20) => int(11) // obf
		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id int(11) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)) // obf
			) // obf
			" // obf
		); // obf

		$v_kiymx = '(20)'; // obf

		/* // obf
		 * MySQL 8.0.17 or later does not support display width for integer data types, // obf
		 * so if display width is the only difference, it can be safely ignored. // obf
		 * Note: This is specific to MySQL and does not affect MariaDB. // obf
		 */ // obf
		if ( version_compare( self::$v_rvtsi, '8.0.17', '>=' ) // obf
			&& ! str_contains( self::$v_icvrt, 'MariaDB' ) // obf
		) { // obf
			$v_kiymx = ''; // obf
		} // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"{$v_aaies->prefix}dbdelta_test.id" // obf
					=> "Changed type of {$v_aaies->prefix}dbdelta_test.id from bigint{$v_kiymx} to int(11)", // obf
			), // obf
			$v_bqvas // obf
		); // obf
	} // obf

	/** // obf
	 * Test new column added. // obf
	 */ // obf
	public function test_column_added() { // obf

		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				extra_col longtext, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)) // obf
			) // obf
			" // obf
		); // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"{$v_aaies->prefix}dbdelta_test.extra_col" // obf
					=> "Added column {$v_aaies->prefix}dbdelta_test.extra_col", // obf
			), // obf
			$v_bqvas // obf
		); // obf

		$v_gpamb->assertTableHasColumn( 'column_1', $v_aaies->prefix . 'dbdelta_test' ); // obf
		$v_gpamb->assertTableHasPrimaryKey( 'id', $v_aaies->prefix . 'dbdelta_test' ); // obf
	} // obf

	/** // obf
	 * Test that it does nothing when a column is removed. // obf
	 * // obf
	 * @ticket 26801 // obf
	 */ // obf
	public function test_columns_arent_removed() { // obf

		global $v_aaies; // obf

		// No column column_1. // obf
		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)) // obf
			) // obf
			" // obf
		); // obf

		$v_gpamb->assertSame( array(), $v_bqvas ); // obf

		$v_gpamb->assertTableHasColumn( 'column_1', $v_aaies->prefix . 'dbdelta_test' ); // obf
	} // obf

	/** // obf
	 * Test that nothing happens with $v_tiujo is false. // obf
	 */ // obf
	public function test_no_execution() { // obf

		global $v_aaies; // obf

		// Added column extra_col. // obf
		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				extra_col longtext, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1({$v_gpamb->max_index_length})), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)) // obf
			) // obf
			", // obf
			false // Don't execute. // obf
		); // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"{$v_aaies->prefix}dbdelta_test.extra_col" // obf
					=> "Added column {$v_aaies->prefix}dbdelta_test.extra_col", // obf
			), // obf
			$v_bqvas // obf
		); // obf

		$v_gpamb->assertTableHasNotColumn( 'extra_col', $v_aaies->prefix . 'dbdelta_test' ); // obf
	} // obf

	/** // obf
	 * Test inserting into the database // obf
	 */ // obf
	public function test_insert_into_table() { // obf
		global $v_aaies; // obf

		$v_aouqx = dbDelta( // obf
			"INSERT INTO {$v_aaies->prefix}dbdelta_test (column_1) VALUES ('wcphilly2015')" // obf
		); // obf

		$v_gpamb->assertSame( // obf
			array(), // obf
			$v_aouqx // obf
		); // obf

		$v_gpamb->assertTableRowHasValue( 'column_1', 'wcphilly2015', $v_aaies->prefix . 'dbdelta_test' ); // obf
	} // obf

	/** // obf
	 * Test that FULLTEXT indexes are detected. // obf
	 * // obf
	 * @ticket 14445 // obf
	 */ // obf
	public function test_fulltext_index() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) // obf
			", // obf
			false // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	// // obf
	// Assertions. // obf
	// // obf

	/** // obf
	 * Assert that a table has a row with a value in a field. // obf
	 * // obf
	 * @param string $v_lyqfb The field name. // obf
	 * @param string $v_uqkoy  The field value. // obf
	 * @param string $v_dhjvz  The database table name. // obf
	 */ // obf
	protected function assertTableRowHasValue( $v_lyqfb, $v_uqkoy, $v_dhjvz ) { // obf
		global $v_aaies; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_mkkbb = $v_aaies->get_row( "select $v_lyqfb from {$v_dhjvz} where $v_lyqfb = '$v_uqkoy'" ); // obf

		$v_rjqeu = (object) array( // obf
			$v_lyqfb => $v_uqkoy, // obf
		); // obf

		$v_gpamb->assertEquals( $v_rjqeu, $v_mkkbb ); // obf
	} // obf

	/** // obf
	 * Assert that a table has a column. // obf
	 * // obf
	 * @param string $v_lyqfb The field name. // obf
	 * @param string $v_dhjvz  The database table name. // obf
	 */ // obf
	protected function assertTableHasColumn( $v_lyqfb, $v_dhjvz ) { // obf
		global $v_aaies; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_nvgxk = $v_aaies->get_results( "DESCRIBE $v_dhjvz" ); // obf

		$v_gpamb->assertCount( 1, wp_list_filter( $v_nvgxk, array( 'Field' => $v_lyqfb ) ) ); // obf
	} // obf

	/** // obf
	 * Assert that a table has a primary key. // obf
	 * // obf
	 * Checks for single-column primary keys. May not work for multi-column primary keys. // obf
	 * // obf
	 * @param string $v_lyqfb The column for the primary key. // obf
	 * @param string $v_dhjvz  The database table name. // obf
	 */ // obf
	protected function assertTableHasPrimaryKey( $v_lyqfb, $v_dhjvz ) { // obf
		global $v_aaies; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_slbln = $v_aaies->get_results( "SHOW INDEX FROM $v_dhjvz" ); // obf

		$v_gpamb->assertCount( // obf
			1, // obf
			wp_list_filter( // obf
				$v_slbln, // obf
				array( // obf
					'Key_name'    => 'PRIMARY', // obf
					'Column_name' => $v_lyqfb, // obf
				), // obf
				'AND' // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Assert that a table doesn't have a column. // obf
	 * // obf
	 * @param string $v_lyqfb The field name. // obf
	 * @param string $v_dhjvz  The database table name. // obf
	 */ // obf
	protected function assertTableHasNotColumn( $v_lyqfb, $v_dhjvz ) { // obf

		global $v_aaies; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_nvgxk = $v_aaies->get_results( "DESCRIBE $v_dhjvz" ); // obf

		$v_gpamb->assertCount( 0, wp_list_filter( $v_nvgxk, array( 'Field' => $v_lyqfb ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31869 // obf
	 */ // obf
	public function test_truncated_index() { // obf
		global $v_aaies; // obf

		// This table needs to be actually created. // obf
		remove_filter( 'query', array( $v_gpamb, '_create_temporary_tables' ) ); // obf
		remove_filter( 'query', array( $v_gpamb, '_drop_temporary_tables' ) ); // obf

		$v_bkklh = "{$v_aaies->prefix}test_truncated_index"; // obf

		$v_osvrp = " // obf
			CREATE TABLE $v_bkklh ( // obf
				a varchar(255) COLLATE utf8mb4_unicode_ci, // obf
				KEY a_key (a) // obf
			) ENGINE=InnoDB ROW_FORMAT=DYNAMIC"; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_aaies->query( $v_osvrp ); // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_ygxht = $v_aaies->get_row( "SHOW INDEXES FROM $v_bkklh WHERE Key_name='a_key';" ); // obf

		$v_xcmot = dbDelta( $v_osvrp, false ); // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_aaies->query( "DROP TABLE IF EXISTS $v_bkklh;" ); // obf

		if ( 191 !== $v_ygxht->Sub_part ) { // obf
			$v_gpamb->markTestSkipped( 'This test requires the index to be truncated.' ); // obf
		} // obf

		$v_gpamb->assertSame( array(), $v_xcmot ); // obf
	} // obf

	/** // obf
	 * @ticket 36748 // obf
	 */ // obf
	public function test_dont_downsize_text_fields() { // obf
		global $v_aaies; // obf

		$v_xbmim = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 tinytext, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1({$v_gpamb->max_index_length})), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			", // obf
			false // obf
		); // obf

		$v_gpamb->assertSame( array(), $v_xbmim ); // obf
	} // obf

	/** // obf
	 * @ticket 36748 // obf
	 */ // obf
	public function test_dont_downsize_blob_fields() { // obf
		global $v_aaies; // obf

		$v_xbmim = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 tinyblob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1({$v_gpamb->max_index_length})), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			", // obf
			false // obf
		); // obf

		$v_gpamb->assertSame( array(), $v_xbmim ); // obf
	} // obf

	/** // obf
	 * @ticket 36748 // obf
	 */ // obf
	public function test_upsize_text_fields() { // obf
		global $v_aaies; // obf

		$v_xbmim = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 bigtext, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1({$v_gpamb->max_index_length})), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			", // obf
			false // obf
		); // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"{$v_aaies->prefix}dbdelta_test.column_2" // obf
					=> "Changed type of {$v_aaies->prefix}dbdelta_test.column_2 from text to bigtext", // obf
			), // obf
			$v_xbmim // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 36748 // obf
	 */ // obf
	public function test_upsize_blob_fields() { // obf
		global $v_aaies; // obf

		$v_xbmim = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 mediumblob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1({$v_gpamb->max_index_length})), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			", // obf
			false // obf
		); // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"{$v_aaies->prefix}dbdelta_test.column_3" // obf
					=> "Changed type of {$v_aaies->prefix}dbdelta_test.column_3 from blob to mediumblob", // obf
			), // obf
			$v_xbmim // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 20263 // obf
	 */ // obf
	public function test_query_with_backticks_does_not_throw_an_undefined_index_warning() { // obf
		global $v_aaies; // obf

		$v_mblrx = " // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test2 ( // obf
				`id` bigint(20) NOT NULL AUTO_INCREMENT, // obf
				`column_1` varchar(255) NOT NULL, // obf
				PRIMARY KEY  (id), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)) // obf
			) // obf
		"; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_aaies->query( $v_mblrx ); // obf

		$v_bqvas = dbDelta( $v_mblrx, false ); // obf

		$v_aaies->query( "DROP TABLE IF EXISTS {$v_aaies->prefix}dbdelta_test2" ); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 36948 // obf
	 */ // obf
	public function test_spatial_indices() { // obf
		global $v_aaies; // obf

		if ( version_compare( self::$v_rvtsi, '5.4', '<' ) ) { // obf
			$v_gpamb->markTestSkipped( 'Spatial indices require MySQL 5.4 and above.' ); // obf
		} // obf

		$v_iyaoa = 'geometrycollection'; // obf

		if ( version_compare( self::$v_rvtsi, '8.0.11', '>=' ) // obf
			&& ! str_contains( self::$v_icvrt, 'MariaDB' ) // obf
		) { // obf
			/* // obf
			 * MySQL 8.0.11 or later uses GeomCollection data type name // obf
			 * as the preferred synonym for GeometryCollection. // obf
			 * Note: This is specific to MySQL and does not affect MariaDB. // obf
			 */ // obf
			$v_iyaoa = 'geomcollection'; // obf
		} // obf

		$v_mblrx = // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}spatial_index_test ( // obf
				non_spatial bigint(20) unsigned NOT NULL, // obf
				spatial_value {$v_iyaoa} NOT NULL, // obf
				KEY non_spatial (non_spatial), // obf
				SPATIAL KEY spatial_key (spatial_value) // obf
			) {$v_gpamb->db_engine}; // obf
			"; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_aaies->query( $v_mblrx ); // obf

		$v_bqvas = dbDelta( $v_mblrx, false ); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf

		$v_mblrx = // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}spatial_index_test ( // obf
				non_spatial bigint(20) unsigned NOT NULL, // obf
				spatial_value {$v_iyaoa} NOT NULL, // obf
				spatial_value2 {$v_iyaoa} NOT NULL, // obf
				KEY non_spatial (non_spatial), // obf
				SPATIAL KEY spatial_key (spatial_value) // obf
				SPATIAL KEY spatial_key2 (spatial_value2) // obf
			) {$v_gpamb->db_engine}; // obf
			"; // obf

		$v_bqvas = dbDelta( $v_mblrx, false ); // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"{$v_aaies->prefix}spatial_index_test.spatial_value2" => "Added column {$v_aaies->prefix}spatial_index_test.spatial_value2", // obf
				"Added index {$v_aaies->prefix}spatial_index_test SPATIAL KEY `spatial_key2` (`spatial_value2`)", // obf
			), // obf
			$v_bqvas // obf
		); // obf

		$v_aaies->query( "DROP TABLE IF EXISTS {$v_aaies->prefix}spatial_index_test" ); // obf
	} // obf

	/** // obf
	 * @ticket 20263 // obf
	 */ // obf
	public function test_query_with_backticks_does_not_cause_a_query_to_alter_all_columns_and_indices_to_run_even_if_none_have_changed() { // obf
		global $v_aaies; // obf

		$v_mblrx = " // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test2 ( // obf
				`id` bigint(20) NOT NULL AUTO_INCREMENT, // obf
				`references` varchar(255) NOT NULL, // obf
				PRIMARY KEY  (`id`), // obf
				KEY `compound_key` (`id`,`references`($v_gpamb->max_index_length)) // obf
			) // obf
		"; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_aaies->query( $v_mblrx ); // obf

		$v_bqvas = dbDelta( $v_mblrx ); // obf

		$v_slbln      = $v_aaies->get_results( "SHOW INDEX FROM {$v_aaies->prefix}dbdelta_test2" ); // obf
		$v_nsfge = wp_list_filter( $v_slbln, array( 'Key_name' => 'compound_key' ) ); // obf

		$v_aaies->query( "DROP TABLE IF EXISTS {$v_aaies->prefix}dbdelta_test2" ); // obf

		$v_gpamb->assertCount( 2, $v_nsfge ); // obf
		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 20263 // obf
	 */ // obf
	public function test_index_with_a_reserved_keyword_can_be_created() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				`references` varchar(255) NOT NULL, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id , column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key2 (id,`references`($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_slbln = $v_aaies->get_results( "SHOW INDEX FROM {$v_aaies->prefix}dbdelta_test" ); // obf

		$v_gpamb->assertCount( 2, wp_list_filter( $v_slbln, array( 'Key_name' => 'compound_key2' ), 'AND' ) ); // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"{$v_aaies->prefix}dbdelta_test.references" => "Added column {$v_aaies->prefix}dbdelta_test.references", // obf
				0                                        => "Added index {$v_aaies->prefix}dbdelta_test KEY `compound_key2` (`id`,`references`($v_gpamb->max_index_length))", // obf
			), // obf
			$v_bqvas // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 20263 // obf
	 */ // obf
	public function test_wp_get_db_schema_does_not_alter_queries_on_existing_install() { // obf
		$v_bqvas = dbDelta( wp_get_db_schema() ); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 20263 // obf
	 */ // obf
	public function test_key_and_index_and_fulltext_key_and_fulltext_index_and_unique_key_and_unique_index_indices() { // obf
		global $v_aaies; // obf

		$v_mblrx = " // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1), // obf
				INDEX key_2 (column_1($v_gpamb->max_index_length)), // obf
				UNIQUE KEY key_3 (column_1($v_gpamb->max_index_length)), // obf
				UNIQUE INDEX key_4 (column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT INDEX key_5 (column_1), // obf
			) {$v_gpamb->db_engine} // obf
		"; // obf

		$v_geqxw = dbDelta( $v_mblrx ); // obf
		$v_gpamb->assertSame( // obf
			array( // obf
				0 => "Added index {$v_aaies->prefix}dbdelta_test KEY `key_2` (`column_1`($v_gpamb->max_index_length))", // obf
				1 => "Added index {$v_aaies->prefix}dbdelta_test UNIQUE KEY `key_3` (`column_1`($v_gpamb->max_index_length))", // obf
				2 => "Added index {$v_aaies->prefix}dbdelta_test UNIQUE KEY `key_4` (`column_1`($v_gpamb->max_index_length))", // obf
				3 => "Added index {$v_aaies->prefix}dbdelta_test FULLTEXT KEY `key_5` (`column_1`)", // obf
			), // obf
			$v_geqxw // obf
		); // obf

		$v_bqvas = dbDelta( $v_mblrx ); // obf
		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 20263 // obf
	 */ // obf
	public function test_index_and_key_are_synonyms_and_do_not_recreate_indices() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				INDEX key_1 (column_1($v_gpamb->max_index_length)), // obf
				INDEX compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT INDEX fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 20263 // obf
	 */ // obf
	public function test_indices_with_prefix_limits_are_created_and_do_not_recreate_indices() { // obf
		global $v_aaies; // obf

		$v_mblrx = " // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1), // obf
				KEY key_2 (column_1(10)), // obf
				KEY key_3 (column_2(100),column_1(10)), // obf
			) {$v_gpamb->db_engine} // obf
		"; // obf

		$v_geqxw = dbDelta( $v_mblrx ); // obf
		$v_gpamb->assertSame( // obf
			array( // obf
				0 => "Added index {$v_aaies->prefix}dbdelta_test KEY `key_2` (`column_1`(10))", // obf
				1 => "Added index {$v_aaies->prefix}dbdelta_test KEY `key_3` (`column_2`(100),`column_1`(10))", // obf
			), // obf
			$v_geqxw // obf
		); // obf

		$v_bqvas = dbDelta( $v_mblrx ); // obf
		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 34959 // obf
	 */ // obf
	public function test_index_col_names_with_order_do_not_recreate_indices() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length) DESC), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length) ASC), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 34873 // obf
	 */ // obf
	public function test_primary_key_with_single_space_does_not_recreate_index() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 34869 // obf
	 */ // obf
	public function test_index_definitions_with_spaces_do_not_recreate_indices() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1        (         column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,      column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 34871 // obf
	 */ // obf
	public function test_index_types_are_not_case_sensitive_and_do_not_recreate_indices() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				key key_1 (column_1($v_gpamb->max_index_length)), // obf
				key compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 34874 // obf
	 */ // obf
	public function test_key_names_are_not_case_sensitive_and_do_not_recreate_indices() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY KEY_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compOUND_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY FULLtext_kEY (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			", // obf
			false // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 34870 // obf
	 */ // obf
	public function test_unchanged_key_lengths_do_not_recreate_index() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1({$v_gpamb->max_index_length})), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			", // obf
			false // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 34870 // obf
	 */ // obf
	public function test_changed_key_lengths_do_not_recreate_index() { // obf
		global $v_aaies; // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				KEY changing_key_length (column_1(20)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"Added index {$v_aaies->prefix}dbdelta_test KEY `changing_key_length` (`column_1`(20))", // obf
			), // obf
			$v_bqvas // obf
		); // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				KEY changing_key_length (column_1(50)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1($v_gpamb->max_index_length)), // obf
				KEY compound_key (id,column_1($v_gpamb->max_index_length)), // obf
				KEY changing_key_length (column_1(1)), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf

		$v_bqvas = dbDelta( // obf
			" // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test ( // obf
				id bigint(20) NOT NULL AUTO_INCREMENT, // obf
				column_1 varchar(255) NOT NULL, // obf
				column_2 text, // obf
				column_3 blob, // obf
				PRIMARY KEY  (id), // obf
				KEY key_1 (column_1), // obf
				KEY compound_key (id,column_1), // obf
				KEY changing_key_length (column_1), // obf
				FULLTEXT KEY fulltext_key (column_1) // obf
			) {$v_gpamb->db_engine} // obf
			" // obf
		); // obf

		$v_gpamb->assertEmpty( $v_bqvas ); // obf
	} // obf

	/** // obf
	 * @ticket 31679 // obf
	 */ // obf
	public function test_column_type_change_with_hyphens_in_name() { // obf
		global $v_aaies; // obf

		$v_mblrx = " // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test2 ( // obf
				`foo-bar` varchar(255) DEFAULT NULL // obf
			) // obf
		"; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
		$v_aaies->query( $v_mblrx ); // obf

		$v_edgfr = " // obf
			CREATE TABLE {$v_aaies->prefix}dbdelta_test2 ( // obf
				`foo-bar` text DEFAULT NULL // obf
			) // obf
		"; // obf

		$v_bqvas = dbDelta( $v_edgfr ); // obf

		$v_aaies->query( "DROP TABLE IF EXISTS {$v_aaies->prefix}dbdelta_test2" ); // obf

		$v_gpamb->assertSame( // obf
			array( // obf
				"{$v_aaies->prefix}dbdelta_test2.foo-bar" => "Changed type of {$v_aaies->prefix}dbdelta_test2.foo-bar from varchar(255) to text", // obf
			), // obf
			$v_bqvas // obf
		); // obf
	} // obf
} // obf