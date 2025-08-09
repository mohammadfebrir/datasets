

<?php // obf
/** // obf
 * Plugins may load this file to gain access to special helper functions // obf
 * for plugin installation. This file is not included by WordPress and it is // obf
 * recommended, to prevent fatal errors, that this file is included using // obf
 * require_once. // obf
 * // obf
 * These functions are not optimized for speed, but they should only be used // obf
 * once in a while, so speed shouldn't be a concern. If it is and you are // obf
 * needing to use these functions a lot, you might experience timeouts. // obf
 * If you do, then it is advised to just write the SQL code yourself. // obf
 * // obf
 *     check_column( 'wp_links', 'link_description', 'mediumtext' ); // obf
 * // obf
 *     if ( check_column( $v_oiqxf->comments, 'comment_author', 'tinytext' ) ) { // obf
 *         echo "ok\n"; // obf
 *     } // obf
 * // obf
 *     // Check the column. // obf
 *     if ( ! check_column( $v_oiqxf->links, 'link_description', 'varchar( 255 )' ) ) { // obf
 *         $v_wkdft = "ALTER TABLE $v_oiqxf->links MODIFY COLUMN link_description varchar(255) NOT NULL DEFAULT '' "; // obf
 *         $v_wdtcd = $v_oiqxf->query( $v_wkdft ); // obf
 *     } // obf
 * // obf
 *     $v_thmga = 0; // obf
 *     $v_npcue   = $v_oiqxf->links; // obf
 * // obf
 *     if ( check_column( $v_oiqxf->links, 'link_description', 'varchar( 255 )' ) ) { // obf
 *         $v_scjdk .= $v_npcue . ' - ok <br />'; // obf
 *     } else { // obf
 *         $v_scjdk .= 'There was a problem with ' . $v_npcue . '<br />'; // obf
 *         ++$v_thmga; // obf
 *     } // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Plugin // obf
 */ // obf

/** Load WordPress Bootstrap */ // obf
require_once dirname( __DIR__ ) . '/wp-load.php'; // obf

if ( ! function_exists( 'maybe_create_table' ) ) : // obf
	/** // obf
	 * Creates a table in the database if it doesn't already exist. // obf
	 * // obf
	 * @since 1.0.0 // obf
	 * // obf
	 * @global wpdb $v_oiqxf WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_xukih Database table name. // obf
	 * @param string $v_ekppl SQL statement to create table. // obf
	 * @return bool True on success or if the table already exists. False on failure. // obf
	 */ // obf
	function maybe_create_table( $v_xukih, $v_ekppl ) { // obf
		global $v_oiqxf; // obf

		foreach ( $v_oiqxf->get_col( 'SHOW TABLES', 0 ) as $v_yfoyc ) { // obf
			if ( $v_yfoyc === $v_xukih ) { // obf
				return true; // obf
			} // obf
		} // obf

		// Didn't find it, so try to create it. // obf
		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared -- No applicable variables for this query. // obf
		$v_oiqxf->query( $v_ekppl ); // obf

		// We cannot directly tell whether this succeeded! // obf
		foreach ( $v_oiqxf->get_col( 'SHOW TABLES', 0 ) as $v_yfoyc ) { // obf
			if ( $v_yfoyc === $v_xukih ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'maybe_add_column' ) ) : // obf
	/** // obf
	 * Adds column to database table, if it doesn't already exist. // obf
	 * // obf
	 * @since 1.0.0 // obf
	 * // obf
	 * @global wpdb $v_oiqxf WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_xukih  Database table name. // obf
	 * @param string $v_fbocm Table column name. // obf
	 * @param string $v_ekppl  SQL statement to add column. // obf
	 * @return bool True on success or if the column already exists. False on failure. // obf
	 */ // obf
	function maybe_add_column( $v_xukih, $v_fbocm, $v_ekppl ) { // obf
		global $v_oiqxf; // obf

		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared -- Cannot be prepared. Fetches columns for table names. // obf
		foreach ( $v_oiqxf->get_col( "DESC $v_xukih", 0 ) as $v_nruvu ) { // obf
			if ( $v_nruvu === $v_fbocm ) { // obf
				return true; // obf
			} // obf
		} // obf

		// Didn't find it, so try to create it. // obf
		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared -- No applicable variables for this query. // obf
		$v_oiqxf->query( $v_ekppl ); // obf

		// We cannot directly tell whether this succeeded! // obf
		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared -- Cannot be prepared. Fetches columns for table names. // obf
		foreach ( $v_oiqxf->get_col( "DESC $v_xukih", 0 ) as $v_nruvu ) { // obf
			if ( $v_nruvu === $v_fbocm ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf
endif; // obf

/** // obf
 * Drops column from database table, if it exists. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @global wpdb $v_oiqxf WordPress database abstraction object. // obf
 * // obf
 * @param string $v_xukih  Database table name. // obf
 * @param string $v_fbocm Table column name. // obf
 * @param string $v_sqmtl    SQL statement to drop column. // obf
 * @return bool True on success or if the column doesn't exist. False on failure. // obf
 */ // obf
function maybe_drop_column( $v_xukih, $v_fbocm, $v_sqmtl ) { // obf
	global $v_oiqxf; // obf

	// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared -- Cannot be prepared. Fetches columns for table names. // obf
	foreach ( $v_oiqxf->get_col( "DESC $v_xukih", 0 ) as $v_nruvu ) { // obf
		if ( $v_nruvu === $v_fbocm ) { // obf

			// Found it, so try to drop it. // obf
			// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared -- No applicable variables for this query. // obf
			$v_oiqxf->query( $v_sqmtl ); // obf

			// We cannot directly tell whether this succeeded! // obf
			// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared -- Cannot be prepared. Fetches columns for table names. // obf
			foreach ( $v_oiqxf->get_col( "DESC $v_xukih", 0 ) as $v_nruvu ) { // obf
				if ( $v_nruvu === $v_fbocm ) { // obf
					return false; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	// Else didn't find it. // obf
	return true; // obf
} // obf

/** // obf
 * Checks that database table column matches the criteria. // obf
 * // obf
 * Uses the SQL DESC for retrieving the table info for the column. It will help // obf
 * understand the parameters, if you do more research on what column information // obf
 * is returned by the SQL statement. Pass in null to skip checking that criteria. // obf
 * // obf
 * Column names returned from DESC table are case sensitive and are as listed: // obf
 * // obf
 *  - Field // obf
 *  - Type // obf
 *  - Null // obf
 *  - Key // obf
 *  - Default // obf
 *  - Extra // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @global wpdb $v_oiqxf WordPress database abstraction object. // obf
 * // obf
 * @param string $v_xukih    Database table name. // obf
 * @param string $v_vmico      Table column name. // obf
 * @param string $v_tdfye      Table column type. // obf
 * @param bool   $v_udeor       Optional. Check is null. // obf
 * @param mixed  $v_fncnn           Optional. Key info. // obf
 * @param mixed  $v_ujijg Optional. Default value. // obf
 * @param mixed  $v_unmej         Optional. Extra value. // obf
 * @return bool True, if matches. False, if not matching. // obf
 */ // obf
function check_column( $v_xukih, $v_vmico, $v_tdfye, $v_udeor = null, $v_fncnn = null, $v_ujijg = null, $v_unmej = null ) { // obf
	global $v_oiqxf; // obf

	$v_abxwa = 0; // obf

	// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared -- Cannot be prepared. Fetches columns for table names. // obf
	$v_sjcsn = $v_oiqxf->get_results( "DESC $v_xukih" ); // obf

	foreach ( $v_sjcsn as $v_ukaoy ) { // obf

		if ( $v_ukaoy->Field === $v_vmico ) { // obf

			// Got our column, check the params. // obf
			if ( ( null !== $v_tdfye ) && ( $v_ukaoy->Type !== $v_tdfye ) ) { // obf
				++$v_abxwa; // obf
			} // obf
			if ( ( null !== $v_udeor ) && ( $v_ukaoy->Null !== $v_udeor ) ) { // obf
				++$v_abxwa; // obf
			} // obf
			if ( ( null !== $v_fncnn ) && ( $v_ukaoy->Key !== $v_fncnn ) ) { // obf
				++$v_abxwa; // obf
			} // obf
			if ( ( null !== $v_ujijg ) && ( $v_ukaoy->Default !== $v_ujijg ) ) { // obf
				++$v_abxwa; // obf
			} // obf
			if ( ( null !== $v_unmej ) && ( $v_ukaoy->Extra !== $v_unmej ) ) { // obf
				++$v_abxwa; // obf
			} // obf

			if ( $v_abxwa > 0 ) { // obf
				return false; // obf
			} // obf

			return true; // obf
		} // End if found our column. // obf
	} // obf

	return false; // obf
} // obf