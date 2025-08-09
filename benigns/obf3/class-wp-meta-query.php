
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Meta API: WP_Meta_Query class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Meta // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement meta queries for the Meta API. // obf
 * // obf
 * Used for generating SQL clauses that filter a primary query according to metadata keys and values. // obf
 * // obf
 * WP_Meta_Query is a helper that allows primary query classes, such as WP_Query and WP_User_Query, // obf
 * // obf
 * to filter their results by object metadata, by generating `JOIN` and `WHERE` subclauses to be attached // obf
 * to the primary SQL query string. // obf
 * // obf
 * @since 3.2.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Meta_Query { // obf
	/** // obf
	 * Array of metadata queries. // obf
	 * // obf
	 * See WP_Meta_Query::__construct() for information on meta query arguments. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_pkgpy = array(); // obf

	/** // obf
	 * The relation between the queries. Can be one of 'AND' or 'OR'. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_cjfal; // obf

	/** // obf
	 * Database table to query for the metadata. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tiedv; // obf

	/** // obf
	 * Column in meta_table that represents the ID of the object the metadata belongs to. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_dmyfm; // obf

	/** // obf
	 * Database table that where the metadata's objects are stored (eg $v_zegqh->users). // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_bjzbi; // obf

	/** // obf
	 * Column in primary_table that represents the ID of the object. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ccxft; // obf

	/** // obf
	 * A flat list of table aliases used in JOIN clauses. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_bqvuz = array(); // obf

	/** // obf
	 * A flat list of clauses, keyed by clause 'name'. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_dxaxh = array(); // obf

	/** // obf
	 * Whether the query contains any OR relations. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_wpafb = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @since 4.2.0 Introduced support for naming query clauses by associative array keys. // obf
	 * @since 5.1.0 Introduced `$v_rfpjk` clause parameter, which enables LIKE key matches. // obf
	 * @since 5.3.0 Increased the number of operators available to `$v_rfpjk`. Introduced `$v_lvdfr`, // obf
	 *              which enables the `$v_rdwvq` to be cast to a new data type for comparisons. // obf
	 * // obf
	 * @param array $v_eelfh { // obf
	 *     Array of meta query clauses. When first-order clauses or sub-clauses use strings as // obf
	 *     their array keys, they may be referenced in the 'orderby' parameter of the parent query. // obf
	 * // obf
	 *     @type string $v_cjfal Optional. The MySQL keyword used to join the clauses of the query. // obf
	 *                            Accepts 'AND' or 'OR'. Default 'AND'. // obf
	 *     @type array  ...$0 { // obf
	 *         Optional. An array of first-order clause parameters, or another fully-formed meta query. // obf
	 * // obf
	 *         @type string|string[] $v_rdwvq         Meta key or keys to filter by. // obf
	 *         @type string          $v_rfpjk MySQL operator used for comparing the $v_rdwvq. Accepts: // obf
	 *                                            - '=' // obf
	 *                                            - '!=' // obf
	 *                                            - 'LIKE' // obf
	 *                                            - 'NOT LIKE' // obf
	 *                                            - 'IN' // obf
	 *                                            - 'NOT IN' // obf
	 *                                            - 'REGEXP' // obf
	 *                                            - 'NOT REGEXP' // obf
	 *                                            - 'RLIKE' // obf
	 *                                            - 'EXISTS' (alias of '=') // obf
	 *                                            - 'NOT EXISTS' (alias of '!=') // obf
	 *                                            Default is 'IN' when `$v_rdwvq` is an array, '=' otherwise. // obf
	 *         @type string          $v_lvdfr    MySQL data type that the meta_key column will be CAST to for // obf
	 *                                            comparisons. Accepts 'BINARY' for case-sensitive regular expression // obf
	 *                                            comparisons. Default is ''. // obf
	 *         @type string|string[] $v_nsijt       Meta value or values to filter by. // obf
	 *         @type string          $v_cmgkr     MySQL operator used for comparing the $v_nsijt. Accepts: // obf
	 *                                            - '=' // obf
	 *                                            - '!=' // obf
	 *                                            - '>' // obf
	 *                                            - '>=' // obf
	 *                                            - '<' // obf
	 *                                            - '<=' // obf
	 *                                            - 'LIKE' // obf
	 *                                            - 'NOT LIKE' // obf
	 *                                            - 'IN' // obf
	 *                                            - 'NOT IN' // obf
	 *                                            - 'BETWEEN' // obf
	 *                                            - 'NOT BETWEEN' // obf
	 *                                            - 'REGEXP' // obf
	 *                                            - 'NOT REGEXP' // obf
	 *                                            - 'RLIKE' // obf
	 *                                            - 'EXISTS' // obf
	 *                                            - 'NOT EXISTS' // obf
	 *                                            Default is 'IN' when `$v_nsijt` is an array, '=' otherwise. // obf
	 *         @type string          $v_fttqy        MySQL data type that the meta_value column will be CAST to for // obf
	 *                                            comparisons. Accepts: // obf
	 *                                            - 'NUMERIC' // obf
	 *                                            - 'BINARY' // obf
	 *                                            - 'CHAR' // obf
	 *                                            - 'DATE' // obf
	 *                                            - 'DATETIME' // obf
	 *                                            - 'DECIMAL' // obf
	 *                                            - 'SIGNED' // obf
	 *                                            - 'TIME' // obf
	 *                                            - 'UNSIGNED' // obf
	 *                                            Default is 'CHAR'. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_eelfh = array() ) { // obf
		if ( ! $v_eelfh ) { // obf
			return; // obf
		} // obf

		if ( isset( $v_eelfh['relation'] ) && 'OR' === strtoupper( $v_eelfh['relation'] ) ) { // obf
			$v_kwqhu->relation = 'OR'; // obf
		} else { // obf
			$v_kwqhu->relation = 'AND'; // obf
		} // obf

		$v_kwqhu->queries = $v_kwqhu->sanitize_query( $v_eelfh ); // obf
	} // obf

	/** // obf
	 * Ensures the 'meta_query' argument passed to the class constructor is well-formed. // obf
	 * // obf
	 * Eliminates empty items and ensures that a 'relation' is set. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_pkgpy Array of query clauses. // obf
	 * @return array Sanitized array of query clauses. // obf
	 */ // obf
	public function sanitize_query( $v_pkgpy ) { // obf
		$v_tbynf = array(); // obf

		if ( ! is_array( $v_pkgpy ) ) { // obf
			return $v_tbynf; // obf
		} // obf

		foreach ( $v_pkgpy as $v_rdwvq => $v_ljwcp ) { // obf
			if ( 'relation' === $v_rdwvq ) { // obf
				$v_cjfal = $v_ljwcp; // obf

			} elseif ( ! is_array( $v_ljwcp ) ) { // obf
				continue; // obf

				// First-order clause. // obf
			} elseif ( $v_kwqhu->is_first_order_clause( $v_ljwcp ) ) { // obf
				if ( isset( $v_ljwcp['value'] ) && array() === $v_ljwcp['value'] ) { // obf
					unset( $v_ljwcp['value'] ); // obf
				} // obf

				$v_tbynf[ $v_rdwvq ] = $v_ljwcp; // obf

				// Otherwise, it's a nested query, so we recurse. // obf
			} else { // obf
				$v_jqber = $v_kwqhu->sanitize_query( $v_ljwcp ); // obf

				if ( ! empty( $v_jqber ) ) { // obf
					$v_tbynf[ $v_rdwvq ] = $v_jqber; // obf
				} // obf
			} // obf
		} // obf

		if ( empty( $v_tbynf ) ) { // obf
			return $v_tbynf; // obf
		} // obf

		// Sanitize the 'relation' key provided in the query. // obf
		if ( isset( $v_cjfal ) && 'OR' === strtoupper( $v_cjfal ) ) { // obf
			$v_tbynf['relation'] = 'OR'; // obf
			$v_kwqhu->has_or_relation     = true; // obf

			/* // obf
			* If there is only a single clause, call the relation 'OR'. // obf
			* This value will not actually be used to join clauses, but it // obf
			* simplifies the logic around combining key-only queries. // obf
			*/ // obf
		} elseif ( 1 === count( $v_tbynf ) ) { // obf
			$v_tbynf['relation'] = 'OR'; // obf

			// Default to AND. // obf
		} else { // obf
			$v_tbynf['relation'] = 'AND'; // obf
		} // obf

		return $v_tbynf; // obf
	} // obf

	/** // obf
	 * Determines whether a query clause is first-order. // obf
	 * // obf
	 * A first-order meta query clause is one that has either a 'key' or // obf
	 * a 'value' array key. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_ljwcp Meta query arguments. // obf
	 * @return bool Whether the query clause is a first-order clause. // obf
	 */ // obf
	protected function is_first_order_clause( $v_ljwcp ) { // obf
		return isset( $v_ljwcp['key'] ) || isset( $v_ljwcp['value'] ); // obf
	} // obf

	/** // obf
	 * Constructs a meta query based on 'meta_*' query vars // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @param array $v_xilhn The query variables. // obf
	 */ // obf
	public function parse_query_vars( $v_xilhn ) { // obf
		$v_eelfh = array(); // obf

		/* // obf
		 * For orderby=meta_value to work correctly, simple query needs to be // obf
		 * first (so that its table join is against an unaliased meta table) and // obf
		 * needs to be its own clause (so it doesn't interfere with the logic of // obf
		 * the rest of the meta_query). // obf
		 */ // obf
		$v_fusoc = array(); // obf
		foreach ( array( 'key', 'compare', 'type', 'compare_key', 'type_key' ) as $v_rdwvq ) { // obf
			if ( ! empty( $v_xilhn[ "meta_$v_rdwvq" ] ) ) { // obf
				$v_fusoc[ $v_rdwvq ] = $v_xilhn[ "meta_$v_rdwvq" ]; // obf
			} // obf
		} // obf

		// WP_Query sets 'meta_value' = '' by default. // obf
		if ( isset( $v_xilhn['meta_value'] ) && '' !== $v_xilhn['meta_value'] && ( ! is_array( $v_xilhn['meta_value'] ) || $v_xilhn['meta_value'] ) ) { // obf
			$v_fusoc['value'] = $v_xilhn['meta_value']; // obf
		} // obf

		$v_wxslk = isset( $v_xilhn['meta_query'] ) && is_array( $v_xilhn['meta_query'] ) ? $v_xilhn['meta_query'] : array(); // obf

		if ( ! empty( $v_fusoc ) && ! empty( $v_wxslk ) ) { // obf
			$v_eelfh = array( // obf
				'relation' => 'AND', // obf
				$v_fusoc, // obf
				$v_wxslk, // obf
			); // obf
		} elseif ( ! empty( $v_fusoc ) ) { // obf
			$v_eelfh = array( // obf
				$v_fusoc, // obf
			); // obf
		} elseif ( ! empty( $v_wxslk ) ) { // obf
			$v_eelfh = $v_wxslk; // obf
		} // obf

		$v_kwqhu->__construct( $v_eelfh ); // obf
	} // obf

	/** // obf
	 * Returns the appropriate alias for the given meta type if applicable. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string $v_fttqy MySQL type to cast meta_value. // obf
	 * @return string MySQL type. // obf
	 */ // obf
	public function get_cast_for_type( $v_fttqy = '' ) { // obf
		if ( empty( $v_fttqy ) ) { // obf
			return 'CHAR'; // obf
		} // obf

		$v_hxzgr = strtoupper( $v_fttqy ); // obf

		if ( ! preg_match( '/^(?:BINARY|CHAR|DATE|DATETIME|SIGNED|UNSIGNED|TIME|NUMERIC(?:\(\d+(?:,\s?\d+)?\))?|DECIMAL(?:\(\d+(?:,\s?\d+)?\))?)$/', $v_hxzgr ) ) { // obf
			return 'CHAR'; // obf
		} // obf

		if ( 'NUMERIC' === $v_hxzgr ) { // obf
			$v_hxzgr = 'SIGNED'; // obf
		} // obf

		return $v_hxzgr; // obf
	} // obf

	/** // obf
	 * Generates SQL clauses to be appended to a main query. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @param string $v_fttqy              Type of meta. Possible values include but are not limited // obf
	 *                                  to 'post', 'comment', 'blog', 'term', and 'user'. // obf
	 * @param string $v_bjzbi     Database table where the object being filtered is stored (eg wp_users). // obf
	 * @param string $v_ccxft ID column for the filtered object in $v_bjzbi. // obf
	 * @param object $v_wtpzk           Optional. The main query object that corresponds to the type, for // obf
	 *                                  example a `WP_Query`, `WP_User_Query`, or `WP_Site_Query`. // obf
	 *                                  Default null. // obf
	 * @return string[]|false { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to the main query, // obf
	 *     or false if no table exists for the requested meta type. // obf
	 * // obf
	 *     @type string $v_cbeai  SQL fragment to append to the main JOIN clause. // obf
	 *     @type string $v_vjnry SQL fragment to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	public function get_sql( $v_fttqy, $v_bjzbi, $v_ccxft, $v_wtpzk = null ) { // obf
		$v_tiedv = _get_meta_table( $v_fttqy ); // obf
		if ( ! $v_tiedv ) { // obf
			return false; // obf
		} // obf

		$v_kwqhu->table_aliases = array(); // obf

		$v_kwqhu->meta_table     = $v_tiedv; // obf
		$v_kwqhu->meta_id_column = sanitize_key( $v_fttqy . '_id' ); // obf

		$v_kwqhu->primary_table     = $v_bjzbi; // obf
		$v_kwqhu->primary_id_column = $v_ccxft; // obf

		$v_zcfua = $v_kwqhu->get_sql_clauses(); // obf

		/* // obf
		 * If any JOINs are LEFT JOINs (as in the case of NOT EXISTS), then all JOINs should // obf
		 * be LEFT. Otherwise posts with no metadata will be excluded from results. // obf
		 */ // obf
		if ( str_contains( $v_zcfua['join'], 'LEFT JOIN' ) ) { // obf
			$v_zcfua['join'] = str_replace( 'INNER JOIN', 'LEFT JOIN', $v_zcfua['join'] ); // obf
		} // obf

		/** // obf
		 * Filters the meta query's generated SQL. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[] $v_zcfua               Array containing the query's JOIN and WHERE clauses. // obf
		 * @param array    $v_pkgpy           Array of meta queries. // obf
		 * @param string   $v_fttqy              Type of meta. Possible values include but are not limited // obf
		 *                                    to 'post', 'comment', 'blog', 'term', and 'user'. // obf
		 * @param string   $v_bjzbi     Primary table. // obf
		 * @param string   $v_ccxft Primary column ID. // obf
		 * @param object   $v_wtpzk           The main query object that corresponds to the type, for // obf
		 *                                    example a `WP_Query`, `WP_User_Query`, or `WP_Site_Query`. // obf
		 */ // obf
		return apply_filters_ref_array( 'get_meta_sql', array( $v_zcfua, $v_kwqhu->queries, $v_fttqy, $v_bjzbi, $v_ccxft, $v_wtpzk ) ); // obf
	} // obf

	/** // obf
	 * Generates SQL clauses to be appended to a main query. // obf
	 * // obf
	 * Called by the public WP_Meta_Query::get_sql(), this method is abstracted // obf
	 * out to maintain parity with the other Query classes. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return string[] { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to the main query. // obf
	 * // obf
	 *     @type string $v_cbeai  SQL fragment to append to the main JOIN clause. // obf
	 *     @type string $v_vjnry SQL fragment to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	protected function get_sql_clauses() { // obf
		/* // obf
		 * $v_pkgpy are passed by reference to get_sql_for_query() for recursion. // obf
		 * To keep $v_kwqhu->queries unaltered, pass a copy. // obf
		 */ // obf
		$v_pkgpy = $v_kwqhu->queries; // obf
		$v_zcfua     = $v_kwqhu->get_sql_for_query( $v_pkgpy ); // obf

		if ( ! empty( $v_zcfua['where'] ) ) { // obf
			$v_zcfua['where'] = ' AND ' . $v_zcfua['where']; // obf
		} // obf

		return $v_zcfua; // obf
	} // obf

	/** // obf
	 * Generates SQL clauses for a single query array. // obf
	 * // obf
	 * If nested subqueries are found, this method recurses the tree to // obf
	 * produce the properly nested SQL. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_ljwcp Query to parse (passed by reference). // obf
	 * @param int   $v_cxtdp Optional. Number of tree levels deep we currently are. // obf
	 *                     Used to calculate indentation. Default 0. // obf
	 * @return string[] { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to a single query array. // obf
	 * // obf
	 *     @type string $v_cbeai  SQL fragment to append to the main JOIN clause. // obf
	 *     @type string $v_vjnry SQL fragment to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	protected function get_sql_for_query( &$v_ljwcp, $v_cxtdp = 0 ) { // obf
		$v_djtoh = array( // obf
			'join'  => array(), // obf
			'where' => array(), // obf
		); // obf

		$v_zcfua = array( // obf
			'join'  => '', // obf
			'where' => '', // obf
		); // obf

		$v_ilesn = ''; // obf
		for ( $v_zumvq = 0; $v_zumvq < $v_cxtdp; $v_zumvq++ ) { // obf
			$v_ilesn .= '  '; // obf
		} // obf

		foreach ( $v_ljwcp as $v_rdwvq => &$v_ejiff ) { // obf
			if ( 'relation' === $v_rdwvq ) { // obf
				$v_cjfal = $v_ljwcp['relation']; // obf
			} elseif ( is_array( $v_ejiff ) ) { // obf

				// This is a first-order clause. // obf
				if ( $v_kwqhu->is_first_order_clause( $v_ejiff ) ) { // obf
					$v_rlyue = $v_kwqhu->get_sql_for_clause( $v_ejiff, $v_ljwcp, $v_rdwvq ); // obf

					$v_zsjzy = count( $v_rlyue['where'] ); // obf
					if ( ! $v_zsjzy ) { // obf
						$v_djtoh['where'][] = ''; // obf
					} elseif ( 1 === $v_zsjzy ) { // obf
						$v_djtoh['where'][] = $v_rlyue['where'][0]; // obf
					} else { // obf
						$v_djtoh['where'][] = '( ' . implode( ' AND ', $v_rlyue['where'] ) . ' )'; // obf
					} // obf

					$v_djtoh['join'] = array_merge( $v_djtoh['join'], $v_rlyue['join'] ); // obf
					// This is a subquery, so we recurse. // obf
				} else { // obf
					$v_rlyue = $v_kwqhu->get_sql_for_query( $v_ejiff, $v_cxtdp + 1 ); // obf

					$v_djtoh['where'][] = $v_rlyue['where']; // obf
					$v_djtoh['join'][]  = $v_rlyue['join']; // obf
				} // obf
			} // obf
		} // obf

		// Filter to remove empties. // obf
		$v_djtoh['join']  = array_filter( $v_djtoh['join'] ); // obf
		$v_djtoh['where'] = array_filter( $v_djtoh['where'] ); // obf

		if ( empty( $v_cjfal ) ) { // obf
			$v_cjfal = 'AND'; // obf
		} // obf

		// Filter duplicate JOIN clauses and combine into a single string. // obf
		if ( ! empty( $v_djtoh['join'] ) ) { // obf
			$v_zcfua['join'] = implode( ' ', array_unique( $v_djtoh['join'] ) ); // obf
		} // obf

		// Generate a single WHERE clause with proper brackets and indentation. // obf
		if ( ! empty( $v_djtoh['where'] ) ) { // obf
			$v_zcfua['where'] = '( ' . "\n  " . $v_ilesn . implode( ' ' . "\n  " . $v_ilesn . $v_cjfal . ' ' . "\n  " . $v_ilesn, $v_djtoh['where'] ) . "\n" . $v_ilesn . ')'; // obf
		} // obf

		return $v_zcfua; // obf
	} // obf

	/** // obf
	 * Generates SQL JOIN and WHERE clauses for a first-order query clause. // obf
	 * // obf
	 * "First-order" means that it's an array with a 'key' or 'value'. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @global wpdb $v_zegqh WordPress database abstraction object. // obf
	 * // obf
	 * @param array  $v_ejiff       Query clause (passed by reference). // obf
	 * @param array  $v_vszej Parent query array. // obf
	 * @param string $v_blnhp   Optional. The array key used to name the clause in the original `$v_eelfh` // obf
	 *                             parameters. If not provided, a key will be generated automatically. // obf
	 *                             Default empty string. // obf
	 * @return array { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to a first-order query. // obf
	 * // obf
	 *     @type string[] $v_cbeai  Array of SQL fragments to append to the main JOIN clause. // obf
	 *     @type string[] $v_vjnry Array of SQL fragments to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	public function get_sql_for_clause( &$v_ejiff, $v_vszej, $v_blnhp = '' ) { // obf
		global $v_zegqh; // obf

		$v_djtoh = array( // obf
			'where' => array(), // obf
			'join'  => array(), // obf
		); // obf

		if ( isset( $v_ejiff['compare'] ) ) { // obf
			$v_ejiff['compare'] = strtoupper( $v_ejiff['compare'] ); // obf
		} else { // obf
			$v_ejiff['compare'] = isset( $v_ejiff['value'] ) && is_array( $v_ejiff['value'] ) ? 'IN' : '='; // obf
		} // obf

		$v_voptw = array( // obf
			'=', // obf
			'!=', // obf
			'LIKE', // obf
			'NOT LIKE', // obf
			'IN', // obf
			'NOT IN', // obf
			'EXISTS', // obf
			'NOT EXISTS', // obf
			'RLIKE', // obf
			'REGEXP', // obf
			'NOT REGEXP', // obf
		); // obf

		$v_plzgc = array( // obf
			'>', // obf
			'>=', // obf
			'<', // obf
			'<=', // obf
			'BETWEEN', // obf
			'NOT BETWEEN', // obf
		); // obf

		if ( ! in_array( $v_ejiff['compare'], $v_voptw, true ) && ! in_array( $v_ejiff['compare'], $v_plzgc, true ) ) { // obf
			$v_ejiff['compare'] = '='; // obf
		} // obf

		if ( isset( $v_ejiff['compare_key'] ) ) { // obf
			$v_ejiff['compare_key'] = strtoupper( $v_ejiff['compare_key'] ); // obf
		} else { // obf
			$v_ejiff['compare_key'] = isset( $v_ejiff['key'] ) && is_array( $v_ejiff['key'] ) ? 'IN' : '='; // obf
		} // obf

		if ( ! in_array( $v_ejiff['compare_key'], $v_voptw, true ) ) { // obf
			$v_ejiff['compare_key'] = '='; // obf
		} // obf

		$v_lezwn     = $v_ejiff['compare']; // obf
		$v_txvvj = $v_ejiff['compare_key']; // obf

		// First build the JOIN clause, if one is required. // obf
		$v_cbeai = ''; // obf

		// We prefer to avoid joins if possible. Look for an existing join compatible with this clause. // obf
		$v_flmqm = $v_kwqhu->find_compatible_table_alias( $v_ejiff, $v_vszej ); // obf
		if ( false === $v_flmqm ) { // obf
			$v_zumvq     = count( $v_kwqhu->table_aliases ); // obf
			$v_flmqm = $v_zumvq ? 'mt' . $v_zumvq : $v_kwqhu->meta_table; // obf

			// JOIN clauses for NOT EXISTS have their own syntax. // obf
			if ( 'NOT EXISTS' === $v_lezwn ) { // obf
				$v_cbeai .= " LEFT JOIN $v_kwqhu->meta_table"; // obf
				$v_cbeai .= $v_zumvq ? " AS $v_flmqm" : ''; // obf

				if ( 'LIKE' === $v_txvvj ) { // obf
					$v_cbeai .= $v_zegqh->prepare( " ON ( $v_kwqhu->primary_table.$v_kwqhu->primary_id_column = $v_flmqm.$v_kwqhu->meta_id_column AND $v_flmqm.meta_key LIKE %s )", '%' . $v_zegqh->esc_like( $v_ejiff['key'] ) . '%' ); // obf
				} else { // obf
					$v_cbeai .= $v_zegqh->prepare( " ON ( $v_kwqhu->primary_table.$v_kwqhu->primary_id_column = $v_flmqm.$v_kwqhu->meta_id_column AND $v_flmqm.meta_key = %s )", $v_ejiff['key'] ); // obf
				} // obf

				// All other JOIN clauses. // obf
			} else { // obf
				$v_cbeai .= " INNER JOIN $v_kwqhu->meta_table"; // obf
				$v_cbeai .= $v_zumvq ? " AS $v_flmqm" : ''; // obf
				$v_cbeai .= " ON ( $v_kwqhu->primary_table.$v_kwqhu->primary_id_column = $v_flmqm.$v_kwqhu->meta_id_column )"; // obf
			} // obf

			$v_kwqhu->table_aliases[] = $v_flmqm; // obf
			$v_djtoh['join'][]  = $v_cbeai; // obf
		} // obf

		// Save the alias to this clause, for future siblings to find. // obf
		$v_ejiff['alias'] = $v_flmqm; // obf

		// Determine the data type. // obf
		$v_hdzai     = isset( $v_ejiff['type'] ) ? $v_ejiff['type'] : ''; // obf
		$v_hxzgr      = $v_kwqhu->get_cast_for_type( $v_hdzai ); // obf
		$v_ejiff['cast'] = $v_hxzgr; // obf

		// Fallback for clause keys is the table alias. Key must be a string. // obf
		if ( is_int( $v_blnhp ) || ! $v_blnhp ) { // obf
			$v_blnhp = $v_ejiff['alias']; // obf
		} // obf

		// Ensure unique clause keys, so none are overwritten. // obf
		$v_sxrmv        = 1; // obf
		$v_rjwdm = $v_blnhp; // obf
		while ( isset( $v_kwqhu->clauses[ $v_blnhp ] ) ) { // obf
			$v_blnhp = $v_rjwdm . '-' . $v_sxrmv; // obf
			++$v_sxrmv; // obf
		} // obf

		// Store the clause in our flat array. // obf
		$v_kwqhu->clauses[ $v_blnhp ] =& $v_ejiff; // obf

		// Next, build the WHERE clause. // obf

		// meta_key. // obf
		if ( array_key_exists( 'key', $v_ejiff ) ) { // obf
			if ( 'NOT EXISTS' === $v_lezwn ) { // obf
				$v_djtoh['where'][] = $v_flmqm . '.' . $v_kwqhu->meta_id_column . ' IS NULL'; // obf
			} else { // obf
				/** // obf
				 * In joined clauses negative operators have to be nested into a // obf
				 * NOT EXISTS clause and flipped, to avoid returning records with // obf
				 * matching post IDs but different meta keys. Here we prepare the // obf
				 * nested clause. // obf
				 */ // obf
				if ( in_array( $v_txvvj, array( '!=', 'NOT IN', 'NOT LIKE', 'NOT EXISTS', 'NOT REGEXP' ), true ) ) { // obf
					// Negative clauses may be reused. // obf
					$v_zumvq                     = count( $v_kwqhu->table_aliases ); // obf
					$v_ljcop        = $v_zumvq ? 'mt' . $v_zumvq : $v_kwqhu->meta_table; // obf
					$v_kwqhu->table_aliases[] = $v_ljcop; // obf

					$v_zsjkm  = 'NOT EXISTS ('; // obf
					$v_zsjkm .= "SELECT 1 FROM $v_zegqh->postmeta $v_ljcop "; // obf
					$v_zsjkm .= "WHERE $v_ljcop.post_ID = $v_flmqm.post_ID "; // obf
					$v_xkjsd    = 'LIMIT 1'; // obf
					$v_xkjsd   .= ')'; // obf
				} // obf

				switch ( $v_txvvj ) { // obf
					case '=': // obf
					case 'EXISTS': // obf
						$v_vjnry = $v_zegqh->prepare( "$v_flmqm.meta_key = %s", trim( $v_ejiff['key'] ) ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
						break; // obf
					case 'LIKE': // obf
						$v_nafne = '%' . $v_zegqh->esc_like( trim( $v_ejiff['key'] ) ) . '%'; // obf
						$v_vjnry              = $v_zegqh->prepare( "$v_flmqm.meta_key LIKE %s", $v_nafne ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
						break; // obf
					case 'IN': // obf
						$v_kdttw = "$v_flmqm.meta_key IN (" . substr( str_repeat( ',%s', count( $v_ejiff['key'] ) ), 1 ) . ')'; // obf
						$v_vjnry               = $v_zegqh->prepare( $v_kdttw, $v_ejiff['key'] ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
						break; // obf
					case 'RLIKE': // obf
					case 'REGEXP': // obf
						$v_phjjc = $v_txvvj; // obf
						if ( isset( $v_ejiff['type_key'] ) && 'BINARY' === strtoupper( $v_ejiff['type_key'] ) ) { // obf
							$v_mnvbs     = 'BINARY'; // obf
							$v_yghxp = "CAST($v_flmqm.meta_key AS BINARY)"; // obf
						} else { // obf
							$v_mnvbs     = ''; // obf
							$v_yghxp = "$v_flmqm.meta_key"; // obf
						} // obf
						$v_vjnry = $v_zegqh->prepare( "$v_yghxp $v_phjjc $v_mnvbs %s", trim( $v_ejiff['key'] ) ); // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
						break; // obf

					case '!=': // obf
					case 'NOT EXISTS': // obf
						$v_kdttw = $v_zsjkm . "AND $v_ljcop.meta_key = %s " . $v_xkjsd; // obf
						$v_vjnry               = $v_zegqh->prepare( $v_kdttw, $v_ejiff['key'] ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
						break; // obf
					case 'NOT LIKE': // obf
						$v_kdttw = $v_zsjkm . "AND $v_ljcop.meta_key LIKE %s " . $v_xkjsd; // obf

						$v_nafne = '%' . $v_zegqh->esc_like( trim( $v_ejiff['key'] ) ) . '%'; // obf
						$v_vjnry              = $v_zegqh->prepare( $v_kdttw, $v_nafne ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
						break; // obf
					case 'NOT IN': // obf
						$v_jpyuq     = '(' . substr( str_repeat( ',%s', count( $v_ejiff['key'] ) ), 1 ) . ') '; // obf
						$v_kdttw = $v_zsjkm . "AND $v_ljcop.meta_key IN " . $v_jpyuq . $v_xkjsd; // obf
						$v_vjnry               = $v_zegqh->prepare( $v_kdttw, $v_ejiff['key'] ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
						break; // obf
					case 'NOT REGEXP': // obf
						$v_phjjc = $v_txvvj; // obf
						if ( isset( $v_ejiff['type_key'] ) && 'BINARY' === strtoupper( $v_ejiff['type_key'] ) ) { // obf
							$v_mnvbs     = 'BINARY'; // obf
							$v_yghxp = "CAST($v_ljcop.meta_key AS BINARY)"; // obf
						} else { // obf
							$v_mnvbs     = ''; // obf
							$v_yghxp = "$v_ljcop.meta_key"; // obf
						} // obf

						$v_kdttw = $v_zsjkm . "AND $v_yghxp REGEXP $v_mnvbs %s " . $v_xkjsd; // obf
						$v_vjnry               = $v_zegqh->prepare( $v_kdttw, $v_ejiff['key'] ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
						break; // obf
				} // obf

				$v_djtoh['where'][] = $v_vjnry; // obf
			} // obf
		} // obf

		// meta_value. // obf
		if ( array_key_exists( 'value', $v_ejiff ) ) { // obf
			$v_eygxd = $v_ejiff['value']; // obf

			if ( in_array( $v_lezwn, array( 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN' ), true ) ) { // obf
				if ( ! is_array( $v_eygxd ) ) { // obf
					$v_eygxd = preg_split( '/[,\s]+/', $v_eygxd ); // obf
				} // obf
			} elseif ( is_string( $v_eygxd ) ) { // obf
				$v_eygxd = trim( $v_eygxd ); // obf
			} // obf

			switch ( $v_lezwn ) { // obf
				case 'IN': // obf
				case 'NOT IN': // obf
					$v_kdttw = '(' . substr( str_repeat( ',%s', count( $v_eygxd ) ), 1 ) . ')'; // obf
					$v_vjnry               = $v_zegqh->prepare( $v_kdttw, $v_eygxd ); // obf
					break; // obf

				case 'BETWEEN': // obf
				case 'NOT BETWEEN': // obf
					$v_vjnry = $v_zegqh->prepare( '%s AND %s', $v_eygxd[0], $v_eygxd[1] ); // obf
					break; // obf

				case 'LIKE': // obf
				case 'NOT LIKE': // obf
					$v_eygxd = '%' . $v_zegqh->esc_like( $v_eygxd ) . '%'; // obf
					$v_vjnry      = $v_zegqh->prepare( '%s', $v_eygxd ); // obf
					break; // obf

				// EXISTS with a value is interpreted as '='. // obf
				case 'EXISTS': // obf
					$v_lezwn = '='; // obf
					$v_vjnry        = $v_zegqh->prepare( '%s', $v_eygxd ); // obf
					break; // obf

				// 'value' is ignored for NOT EXISTS. // obf
				case 'NOT EXISTS': // obf
					$v_vjnry = ''; // obf
					break; // obf

				default: // obf
					$v_vjnry = $v_zegqh->prepare( '%s', $v_eygxd ); // obf
					break; // obf

			} // obf

			if ( $v_vjnry ) { // obf
				if ( 'CHAR' === $v_hxzgr ) { // obf
					$v_djtoh['where'][] = "$v_flmqm.meta_value {$v_lezwn} {$v_vjnry}"; // obf
				} else { // obf
					$v_djtoh['where'][] = "CAST($v_flmqm.meta_value AS {$v_hxzgr}) {$v_lezwn} {$v_vjnry}"; // obf
				} // obf
			} // obf
		} // obf

		/* // obf
		 * Multiple WHERE clauses (for meta_key and meta_value) should // obf
		 * be joined in parentheses. // obf
		 */ // obf
		if ( 1 < count( $v_djtoh['where'] ) ) { // obf
			$v_djtoh['where'] = array( '( ' . implode( ' AND ', $v_djtoh['where'] ) . ' )' ); // obf
		} // obf

		return $v_djtoh; // obf
	} // obf

	/** // obf
	 * Gets a flattened list of sanitized meta clauses. // obf
	 * // obf
	 * This array should be used for clause lookup, as when the table alias and CAST type must be determined for // obf
	 * a value of 'orderby' corresponding to a meta clause. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @return array Meta clauses. // obf
	 */ // obf
	public function get_clauses() { // obf
		return $v_kwqhu->clauses; // obf
	} // obf

	/** // obf
	 * Identifies an existing table alias that is compatible with the current // obf
	 * query clause. // obf
	 * // obf
	 * We avoid unnecessary table joins by allowing each clause to look for // obf
	 * an existing table alias that is compatible with the query that it // obf
	 * needs to perform. // obf
	 * // obf
	 * An existing alias is compatible if (a) it is a sibling of `$v_ejiff` // obf
	 * (ie, it's under the scope of the same relation), and (b) the combination // obf
	 * of operator and relation between the clauses allows for a shared table join. // obf
	 * In the case of WP_Meta_Query, this only applies to 'IN' clauses that are // obf
	 * connected by the relation 'OR'. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_ejiff       Query clause. // obf
	 * @param array $v_vszej Parent query of $v_ejiff. // obf
	 * @return string|false Table alias if found, otherwise false. // obf
	 */ // obf
	protected function find_compatible_table_alias( $v_ejiff, $v_vszej ) { // obf
		$v_flmqm = false; // obf

		foreach ( $v_vszej as $v_fqvkl ) { // obf
			// If the sibling has no alias yet, there's nothing to check. // obf
			if ( empty( $v_fqvkl['alias'] ) ) { // obf
				continue; // obf
			} // obf

			// We're only interested in siblings that are first-order clauses. // obf
			if ( ! is_array( $v_fqvkl ) || ! $v_kwqhu->is_first_order_clause( $v_fqvkl ) ) { // obf
				continue; // obf
			} // obf

			$v_zlcsv = array(); // obf

			// Clauses connected by OR can share joins as long as they have "positive" operators. // obf
			if ( 'OR' === $v_vszej['relation'] ) { // obf
				$v_zlcsv = array( '=', 'IN', 'BETWEEN', 'LIKE', 'REGEXP', 'RLIKE', '>', '>=', '<', '<=' ); // obf

				// Clauses joined by AND with "negative" operators share a join only if they also share a key. // obf
			} elseif ( isset( $v_fqvkl['key'] ) && isset( $v_ejiff['key'] ) && $v_fqvkl['key'] === $v_ejiff['key'] ) { // obf
				$v_zlcsv = array( '!=', 'NOT IN', 'NOT LIKE' ); // obf
			} // obf

			$v_occrt  = strtoupper( $v_ejiff['compare'] ); // obf
			$v_qnqmd = strtoupper( $v_fqvkl['compare'] ); // obf
			if ( in_array( $v_occrt, $v_zlcsv, true ) && in_array( $v_qnqmd, $v_zlcsv, true ) ) { // obf
				$v_flmqm = __fn_37772( '/\W/', '_', $v_fqvkl['alias'] ); // obf
				break; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the table alias identified as compatible with the current clause. // obf
		 * // obf
		 * @since 4.1.0 // obf
		 * // obf
		 * @param string|false  $v_flmqm        Table alias, or false if none was found. // obf
		 * @param array         $v_ejiff       First-order query clause. // obf
		 * @param array         $v_vszej Parent of $v_ejiff. // obf
		 * @param WP_Meta_Query $v_ljwcp        WP_Meta_Query object. // obf
		 */ // obf
		return apply_filters( 'meta_query_find_compatible_table_alias', $v_flmqm, $v_ejiff, $v_vszej, $v_kwqhu ); // obf
	} // obf

	/** // obf
	 * Checks whether the current query has any OR relations. // obf
	 * // obf
	 * In some cases, the presence of an OR relation somewhere in the query will require // obf
	 * the use of a `DISTINCT` or `GROUP BY` keyword in the `SELECT` clause. The current // obf
	 * method can be used in these cases to determine whether such a clause is necessary. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return bool True if the query contains any `OR` relations, otherwise false. // obf
	 */ // obf
	public function has_or_relation() { // obf
		return $v_kwqhu->has_or_relation; // obf
	} // obf
} // obf