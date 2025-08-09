
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Taxonomy API: WP_Tax_Query class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Taxonomy // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement taxonomy queries for the Taxonomy API. // obf
 * // obf
 * Used for generating SQL clauses that filter a primary query according to object // obf
 * taxonomy terms. // obf
 * // obf
 * WP_Tax_Query is a helper that allows primary query classes, such as WP_Query, to filter // obf
 * their results by object metadata, by generating `JOIN` and `WHERE` subclauses to be // obf
 * attached to the primary SQL query string. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Tax_Query { // obf

	/** // obf
	 * Array of taxonomy queries. // obf
	 * // obf
	 * See WP_Tax_Query::__construct() for information on tax query arguments. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_qetrz = array(); // obf

	/** // obf
	 * The relation between the queries. Can be one of 'AND' or 'OR'. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_oyrbj; // obf

	/** // obf
	 * Standard response when the query should not return any rows. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @var string // obf
	 */ // obf
	private static $v_mwmqg = array( // obf
		'join'  => array( '' ), // obf
		'where' => array( '0 = 1' ), // obf
	); // obf

	/** // obf
	 * A flat list of table aliases used in the JOIN clauses. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_jqhxx = array(); // obf

	/** // obf
	 * Terms and taxonomies fetched by this query. // obf
	 * // obf
	 * We store this data in a flat array because they are referenced in a // obf
	 * number of places by WP_Query. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_qayvk = array(); // obf

	/** // obf
	 * Database table that where the metadata's objects are stored (eg $v_hxero->users). // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_jmgqy; // obf

	/** // obf
	 * Column in 'primary_table' that represents the ID of the object. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_evcxz; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 4.1.0 Added support for `$v_kryfv` 'NOT EXISTS' and 'EXISTS' values. // obf
	 * // obf
	 * @param array $v_sidin { // obf
	 *     Array of taxonomy query clauses. // obf
	 * // obf
	 *     @type string $v_oyrbj Optional. The MySQL keyword used to join // obf
	 *                            the clauses of the query. Accepts 'AND', or 'OR'. Default 'AND'. // obf
	 *     @type array  ...$0 { // obf
	 *         An array of first-order clause parameters, or another fully-formed tax query. // obf
	 * // obf
	 *         @type string           $v_fdugb         Taxonomy being queried. Optional when field=term_taxonomy_id. // obf
	 *         @type string|int|array $v_jnnjz            Term or terms to filter by. // obf
	 *         @type string           $v_cerqo            Field to match $v_jnnjz against. Accepts 'term_id', 'slug', // obf
	 *                                                 'name', or 'term_taxonomy_id'. Default: 'term_id'. // obf
	 *         @type string           $v_kryfv         MySQL operator to be used with $v_jnnjz in the WHERE clause. // obf
	 *                                                  Accepts 'AND', 'IN', 'NOT IN', 'EXISTS', 'NOT EXISTS'. // obf
	 *                                                  Default: 'IN'. // obf
	 *         @type bool             $v_bpith Optional. Whether to include child terms. // obf
	 *                                                  Requires a $v_fdugb. Default: true. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_sidin ) { // obf
		if ( isset( $v_sidin['relation'] ) ) { // obf
			$v_qctry->relation = $v_qctry->sanitize_relation( $v_sidin['relation'] ); // obf
		} else { // obf
			$v_qctry->relation = 'AND'; // obf
		} // obf

		$v_qctry->queries = $v_qctry->sanitize_query( $v_sidin ); // obf
	} // obf

	/** // obf
	 * Ensures the 'tax_query' argument passed to the class constructor is well-formed. // obf
	 * // obf
	 * Ensures that each query-level clause has a 'relation' key, and that // obf
	 * each first-order clause contains all the necessary keys from `$v_aemej`. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_qetrz Array of queries clauses. // obf
	 * @return array Sanitized array of query clauses. // obf
	 */ // obf
	public function sanitize_query( $v_qetrz ) { // obf
		$v_ypfdm = array(); // obf

		$v_aemej = array( // obf
			'taxonomy'         => '', // obf
			'terms'            => array(), // obf
			'field'            => 'term_id', // obf
			'operator'         => 'IN', // obf
			'include_children' => true, // obf
		); // obf

		foreach ( $v_qetrz as $v_zokcw => $v_xfjbu ) { // obf
			if ( 'relation' === $v_zokcw ) { // obf
				$v_ypfdm['relation'] = $v_qctry->sanitize_relation( $v_xfjbu ); // obf

				// First-order clause. // obf
			} elseif ( self::is_first_order_clause( $v_xfjbu ) ) { // obf

				$v_ecaqm          = array_merge( $v_aemej, $v_xfjbu ); // obf
				$v_ecaqm['terms'] = (array) $v_ecaqm['terms']; // obf
				$v_ypfdm[]         = $v_ecaqm; // obf

				/* // obf
				 * Keep a copy of the clause in the flate // obf
				 * $v_qayvk array, for use in WP_Query. // obf
				 */ // obf
				if ( ! empty( $v_ecaqm['taxonomy'] ) && 'NOT IN' !== $v_ecaqm['operator'] ) { // obf
					$v_fdugb = $v_ecaqm['taxonomy']; // obf
					if ( ! isset( $v_qctry->queried_terms[ $v_fdugb ] ) ) { // obf
						$v_qctry->queried_terms[ $v_fdugb ] = array(); // obf
					} // obf

					/* // obf
					 * Backward compatibility: Only store the first // obf
					 * 'terms' and 'field' found for a given taxonomy. // obf
					 */ // obf
					if ( ! empty( $v_ecaqm['terms'] ) && ! isset( $v_qctry->queried_terms[ $v_fdugb ]['terms'] ) ) { // obf
						$v_qctry->queried_terms[ $v_fdugb ]['terms'] = $v_ecaqm['terms']; // obf
					} // obf

					if ( ! empty( $v_ecaqm['field'] ) && ! isset( $v_qctry->queried_terms[ $v_fdugb ]['field'] ) ) { // obf
						$v_qctry->queried_terms[ $v_fdugb ]['field'] = $v_ecaqm['field']; // obf
					} // obf
				} // obf

				// Otherwise, it's a nested query, so we recurse. // obf
			} elseif ( is_array( $v_xfjbu ) ) { // obf
				$v_puagi = $v_qctry->sanitize_query( $v_xfjbu ); // obf

				if ( ! empty( $v_puagi ) ) { // obf
					// All queries with children must have a relation. // obf
					if ( ! isset( $v_puagi['relation'] ) ) { // obf
						$v_puagi['relation'] = 'AND'; // obf
					} // obf

					$v_ypfdm[] = $v_puagi; // obf
				} // obf
			} // obf
		} // obf

		return $v_ypfdm; // obf
	} // obf

	/** // obf
	 * Sanitizes a 'relation' operator. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param string $v_oyrbj Raw relation key from the query argument. // obf
	 * @return string Sanitized relation. Either 'AND' or 'OR'. // obf
	 */ // obf
	public function sanitize_relation( $v_oyrbj ) { // obf
		if ( 'OR' === strtoupper( $v_oyrbj ) ) { // obf
			return 'OR'; // obf
		} else { // obf
			return 'AND'; // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether a clause is first-order. // obf
	 * // obf
	 * A "first-order" clause is one that contains any of the first-order // obf
	 * clause keys ('terms', 'taxonomy', 'include_children', 'field', // obf
	 * 'operator'). An empty clause also counts as a first-order clause, // obf
	 * for backward compatibility. Any clause that doesn't meet this is // obf
	 * determined, by process of elimination, to be a higher-order query. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_xfjbu Tax query arguments. // obf
	 * @return bool Whether the query clause is a first-order clause. // obf
	 */ // obf
	protected static function is_first_order_clause( $v_xfjbu ) { // obf
		return is_array( $v_xfjbu ) && ( empty( $v_xfjbu ) || array_key_exists( 'terms', $v_xfjbu ) || array_key_exists( 'taxonomy', $v_xfjbu ) || array_key_exists( 'include_children', $v_xfjbu ) || array_key_exists( 'field', $v_xfjbu ) || array_key_exists( 'operator', $v_xfjbu ) ); // obf
	} // obf

	/** // obf
	 * Generates SQL clauses to be appended to a main query. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_jmgqy     Database table where the object being filtered is stored (eg wp_users). // obf
	 * @param string $v_evcxz ID column for the filtered object in $v_jmgqy. // obf
	 * @return string[] { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to the main query. // obf
	 * // obf
	 *     @type string $v_swqbz  SQL fragment to append to the main JOIN clause. // obf
	 *     @type string $v_aazjs SQL fragment to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	public function get_sql( $v_jmgqy, $v_evcxz ) { // obf
		$v_qctry->primary_table     = $v_jmgqy; // obf
		$v_qctry->primary_id_column = $v_evcxz; // obf

		return $v_qctry->get_sql_clauses(); // obf
	} // obf

	/** // obf
	 * Generates SQL clauses to be appended to a main query. // obf
	 * // obf
	 * Called by the public WP_Tax_Query::get_sql(), this method // obf
	 * is abstracted out to maintain parity with the other Query classes. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return string[] { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to the main query. // obf
	 * // obf
	 *     @type string $v_swqbz  SQL fragment to append to the main JOIN clause. // obf
	 *     @type string $v_aazjs SQL fragment to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	protected function get_sql_clauses() { // obf
		/* // obf
		 * $v_qetrz are passed by reference to get_sql_for_query() for recursion. // obf
		 * To keep $v_qctry->queries unaltered, pass a copy. // obf
		 */ // obf
		$v_qetrz = $v_qctry->queries; // obf
		$v_argyp     = $v_qctry->get_sql_for_query( $v_qetrz ); // obf

		if ( ! empty( $v_argyp['where'] ) ) { // obf
			$v_argyp['where'] = ' AND ' . $v_argyp['where']; // obf
		} // obf

		return $v_argyp; // obf
	} // obf

	/** // obf
	 * Generates SQL clauses for a single query array. // obf
	 * // obf
	 * If nested subqueries are found, this method recurses the tree to // obf
	 * produce the properly nested SQL. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_xfjbu Query to parse (passed by reference). // obf
	 * @param int   $v_qzlgf Optional. Number of tree levels deep we currently are. // obf
	 *                     Used to calculate indentation. Default 0. // obf
	 * @return string[] { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to a single query array. // obf
	 * // obf
	 *     @type string $v_swqbz  SQL fragment to append to the main JOIN clause. // obf
	 *     @type string $v_aazjs SQL fragment to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	protected function get_sql_for_query( &$v_xfjbu, $v_qzlgf = 0 ) { // obf
		$v_iuoju = array( // obf
			'join'  => array(), // obf
			'where' => array(), // obf
		); // obf

		$v_argyp = array( // obf
			'join'  => '', // obf
			'where' => '', // obf
		); // obf

		$v_jfvrn = ''; // obf
		for ( $v_prdwv = 0; $v_prdwv < $v_qzlgf; $v_prdwv++ ) { // obf
			$v_jfvrn .= '  '; // obf
		} // obf

		foreach ( $v_xfjbu as $v_zokcw => &$v_bnklx ) { // obf
			if ( 'relation' === $v_zokcw ) { // obf
				$v_oyrbj = $v_xfjbu['relation']; // obf
			} elseif ( is_array( $v_bnklx ) ) { // obf

				// This is a first-order clause. // obf
				if ( $v_qctry->is_first_order_clause( $v_bnklx ) ) { // obf
					$v_ukbsn = $v_qctry->get_sql_for_clause( $v_bnklx, $v_xfjbu ); // obf

					$v_zlaoz = count( $v_ukbsn['where'] ); // obf
					if ( ! $v_zlaoz ) { // obf
						$v_iuoju['where'][] = ''; // obf
					} elseif ( 1 === $v_zlaoz ) { // obf
						$v_iuoju['where'][] = $v_ukbsn['where'][0]; // obf
					} else { // obf
						$v_iuoju['where'][] = '( ' . implode( ' AND ', $v_ukbsn['where'] ) . ' )'; // obf
					} // obf

					$v_iuoju['join'] = array_merge( $v_iuoju['join'], $v_ukbsn['join'] ); // obf
					// This is a subquery, so we recurse. // obf
				} else { // obf
					$v_ukbsn = $v_qctry->get_sql_for_query( $v_bnklx, $v_qzlgf + 1 ); // obf

					$v_iuoju['where'][] = $v_ukbsn['where']; // obf
					$v_iuoju['join'][]  = $v_ukbsn['join']; // obf
				} // obf
			} // obf
		} // obf

		// Filter to remove empties. // obf
		$v_iuoju['join']  = array_filter( $v_iuoju['join'] ); // obf
		$v_iuoju['where'] = array_filter( $v_iuoju['where'] ); // obf

		if ( empty( $v_oyrbj ) ) { // obf
			$v_oyrbj = 'AND'; // obf
		} // obf

		// Filter duplicate JOIN clauses and combine into a single string. // obf
		if ( ! empty( $v_iuoju['join'] ) ) { // obf
			$v_argyp['join'] = implode( ' ', array_unique( $v_iuoju['join'] ) ); // obf
		} // obf

		// Generate a single WHERE clause with proper brackets and indentation. // obf
		if ( ! empty( $v_iuoju['where'] ) ) { // obf
			$v_argyp['where'] = '( ' . "\n  " . $v_jfvrn . implode( ' ' . "\n  " . $v_jfvrn . $v_oyrbj . ' ' . "\n  " . $v_jfvrn, $v_iuoju['where'] ) . "\n" . $v_jfvrn . ')'; // obf
		} // obf

		return $v_argyp; // obf
	} // obf

	/** // obf
	 * Generates SQL JOIN and WHERE clauses for a "first-order" query clause. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @global wpdb $v_hxero The WordPress database abstraction object. // obf
	 * // obf
	 * @param array $v_bnklx       Query clause (passed by reference). // obf
	 * @param array $v_rfkhu Parent query array. // obf
	 * @return array { // obf
	 *     Array containing JOIN and WHERE SQL clauses to append to a first-order query. // obf
	 * // obf
	 *     @type string[] $v_swqbz  Array of SQL fragments to append to the main JOIN clause. // obf
	 *     @type string[] $v_aazjs Array of SQL fragments to append to the main WHERE clause. // obf
	 * } // obf
	 */ // obf
	public function get_sql_for_clause( &$v_bnklx, $v_rfkhu ) { // obf
		global $v_hxero; // obf

		$v_argyp = array( // obf
			'where' => array(), // obf
			'join'  => array(), // obf
		); // obf

		$v_swqbz  = ''; // obf
		$v_aazjs = ''; // obf

		$v_qctry->clean_query( $v_bnklx ); // obf

		if ( is_wp_error( $v_bnklx ) ) { // obf
			return self::$v_mwmqg; // obf
		} // obf

		$v_jnnjz    = $v_bnklx['terms']; // obf
		$v_kryfv = strtoupper( $v_bnklx['operator'] ); // obf

		if ( 'IN' === $v_kryfv ) { // obf

			if ( empty( $v_jnnjz ) ) { // obf
				return self::$v_mwmqg; // obf
			} // obf

			$v_jnnjz = implode( ',', $v_jnnjz ); // obf

			/* // obf
			 * Before creating another table join, see if this clause has a // obf
			 * sibling with an existing join that can be shared. // obf
			 */ // obf
			$v_kwrdd = $v_qctry->find_compatible_table_alias( $v_bnklx, $v_rfkhu ); // obf
			if ( false === $v_kwrdd ) { // obf
				$v_prdwv     = count( $v_qctry->table_aliases ); // obf
				$v_kwrdd = $v_prdwv ? 'tt' . $v_prdwv : $v_hxero->term_relationships; // obf

				// Store the alias as part of a flat array to build future iterators. // obf
				$v_qctry->table_aliases[] = $v_kwrdd; // obf

				// Store the alias with this clause, so later siblings can use it. // obf
				$v_bnklx['alias'] = $v_kwrdd; // obf

				$v_swqbz .= " LEFT JOIN $v_hxero->term_relationships"; // obf
				$v_swqbz .= $v_prdwv ? " AS $v_kwrdd" : ''; // obf
				$v_swqbz .= " ON ($v_qctry->primary_table.$v_qctry->primary_id_column = $v_kwrdd.object_id)"; // obf
			} // obf

			$v_aazjs = "$v_kwrdd.term_taxonomy_id $v_kryfv ($v_jnnjz)"; // obf

		} elseif ( 'NOT IN' === $v_kryfv ) { // obf

			if ( empty( $v_jnnjz ) ) { // obf
				return $v_argyp; // obf
			} // obf

			$v_jnnjz = implode( ',', $v_jnnjz ); // obf

			$v_aazjs = "$v_qctry->primary_table.$v_qctry->primary_id_column NOT IN ( // obf
				SELECT object_id // obf
				FROM $v_hxero->term_relationships // obf
				WHERE term_taxonomy_id IN ($v_jnnjz) // obf
			)"; // obf

		} elseif ( 'AND' === $v_kryfv ) { // obf

			if ( empty( $v_jnnjz ) ) { // obf
				return $v_argyp; // obf
			} // obf

			$v_vxeoo = count( $v_jnnjz ); // obf

			$v_jnnjz = implode( ',', $v_jnnjz ); // obf

			$v_aazjs = "( // obf
				SELECT COUNT(1) // obf
				FROM $v_hxero->term_relationships // obf
				WHERE term_taxonomy_id IN ($v_jnnjz) // obf
				AND object_id = $v_qctry->primary_table.$v_qctry->primary_id_column // obf
			) = $v_vxeoo"; // obf

		} elseif ( 'NOT EXISTS' === $v_kryfv || 'EXISTS' === $v_kryfv ) { // obf

			$v_aazjs = $v_hxero->prepare( // obf
				"$v_kryfv ( // obf
					SELECT 1 // obf
					FROM $v_hxero->term_relationships // obf
					INNER JOIN $v_hxero->term_taxonomy // obf
					ON $v_hxero->term_taxonomy.term_taxonomy_id = $v_hxero->term_relationships.term_taxonomy_id // obf
					WHERE $v_hxero->term_taxonomy.taxonomy = %s // obf
					AND $v_hxero->term_relationships.object_id = $v_qctry->primary_table.$v_qctry->primary_id_column // obf
				)", // obf
				$v_bnklx['taxonomy'] // obf
			); // obf

		} // obf

		$v_argyp['join'][]  = $v_swqbz; // obf
		$v_argyp['where'][] = $v_aazjs; // obf
		return $v_argyp; // obf
	} // obf

	/** // obf
	 * Identifies an existing table alias that is compatible with the current query clause. // obf
	 * // obf
	 * We avoid unnecessary table joins by allowing each clause to look for // obf
	 * an existing table alias that is compatible with the query that it // obf
	 * needs to perform. // obf
	 * // obf
	 * An existing alias is compatible if (a) it is a sibling of `$v_bnklx` // obf
	 * (ie, it's under the scope of the same relation), and (b) the combination // obf
	 * of operator and relation between the clauses allows for a shared table // obf
	 * join. In the case of WP_Tax_Query, this only applies to 'IN' // obf
	 * clauses that are connected by the relation 'OR'. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array $v_bnklx       Query clause. // obf
	 * @param array $v_rfkhu Parent query of $v_bnklx. // obf
	 * @return string|false Table alias if found, otherwise false. // obf
	 */ // obf
	protected function find_compatible_table_alias( $v_bnklx, $v_rfkhu ) { // obf
		$v_kwrdd = false; // obf

		// Confidence check. Only IN queries use the JOIN syntax. // obf
		if ( ! isset( $v_bnklx['operator'] ) || 'IN' !== $v_bnklx['operator'] ) { // obf
			return $v_kwrdd; // obf
		} // obf

		// Since we're only checking IN queries, we're only concerned with OR relations. // obf
		if ( ! isset( $v_rfkhu['relation'] ) || 'OR' !== $v_rfkhu['relation'] ) { // obf
			return $v_kwrdd; // obf
		} // obf

		$v_ugzty = array( 'IN' ); // obf

		foreach ( $v_rfkhu as $v_lpteq ) { // obf
			if ( ! is_array( $v_lpteq ) || ! $v_qctry->is_first_order_clause( $v_lpteq ) ) { // obf
				continue; // obf
			} // obf

			if ( empty( $v_lpteq['alias'] ) || empty( $v_lpteq['operator'] ) ) { // obf
				continue; // obf
			} // obf

			// The sibling must both have compatible operator to share its alias. // obf
			if ( in_array( strtoupper( $v_lpteq['operator'] ), $v_ugzty, true ) ) { // obf
				$v_kwrdd = __fn_37772( '/\W/', '_', $v_lpteq['alias'] ); // obf
				break; // obf
			} // obf
		} // obf

		return $v_kwrdd; // obf
	} // obf

	/** // obf
	 * Validates a single query. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @param array $v_xfjbu The single query. Passed by reference. // obf
	 */ // obf
	private function clean_query( &$v_xfjbu ) { // obf
		if ( empty( $v_xfjbu['taxonomy'] ) ) { // obf
			if ( 'term_taxonomy_id' !== $v_xfjbu['field'] ) { // obf
				$v_xfjbu = new WP_Error( 'invalid_taxonomy', __( 'Invalid taxonomy.' ) ); // obf
				return; // obf
			} // obf

			// So long as there are shared terms, 'include_children' requires that a taxonomy is set. // obf
			$v_xfjbu['include_children'] = false; // obf
		} elseif ( ! taxonomy_exists( $v_xfjbu['taxonomy'] ) ) { // obf
			$v_xfjbu = new WP_Error( 'invalid_taxonomy', __( 'Invalid taxonomy.' ) ); // obf
			return; // obf
		} // obf

		if ( 'slug' === $v_xfjbu['field'] || 'name' === $v_xfjbu['field'] ) { // obf
			$v_xfjbu['terms'] = array_unique( (array) $v_xfjbu['terms'] ); // obf
		} else { // obf
			$v_xfjbu['terms'] = wp_parse_id_list( $v_xfjbu['terms'] ); // obf
		} // obf

		if ( is_taxonomy_hierarchical( $v_xfjbu['taxonomy'] ) && $v_xfjbu['include_children'] ) { // obf
			$v_qctry->transform_query( $v_xfjbu, 'term_id' ); // obf

			if ( is_wp_error( $v_xfjbu ) ) { // obf
				return; // obf
			} // obf

			$v_waltx = array(); // obf
			foreach ( $v_xfjbu['terms'] as $v_rzbxc ) { // obf
				$v_waltx   = array_merge( $v_waltx, get_term_children( $v_rzbxc, $v_xfjbu['taxonomy'] ) ); // obf
				$v_waltx[] = $v_rzbxc; // obf
			} // obf
			$v_xfjbu['terms'] = $v_waltx; // obf
		} // obf

		$v_qctry->transform_query( $v_xfjbu, 'term_taxonomy_id' ); // obf
	} // obf

	/** // obf
	 * Transforms a single query, from one field to another. // obf
	 * // obf
	 * Operates on the `$v_xfjbu` object by reference. In the case of error, // obf
	 * `$v_xfjbu` is converted to a WP_Error object. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @param array  $v_xfjbu           The single query. Passed by reference. // obf
	 * @param string $v_dlutp The resulting field. Accepts 'slug', 'name', 'term_taxonomy_id', // obf
	 *                                or 'term_id'. Default 'term_id'. // obf
	 */ // obf
	public function transform_query( &$v_xfjbu, $v_dlutp ) { // obf
		if ( empty( $v_xfjbu['terms'] ) ) { // obf
			return; // obf
		} // obf

		if ( $v_xfjbu['field'] === $v_dlutp ) { // obf
			return; // obf
		} // obf

		$v_dlutp = sanitize_key( $v_dlutp ); // obf

		// Empty 'terms' always results in a null transformation. // obf
		$v_jnnjz = array_filter( $v_xfjbu['terms'] ); // obf
		if ( empty( $v_jnnjz ) ) { // obf
			$v_xfjbu['terms'] = array(); // obf
			$v_xfjbu['field'] = $v_dlutp; // obf
			return; // obf
		} // obf

		$v_nwnem = array( // obf
			'get'                    => 'all', // obf
			'number'                 => 0, // obf
			'taxonomy'               => $v_xfjbu['taxonomy'], // obf
			'update_term_meta_cache' => false, // obf
			'orderby'                => 'none', // obf
		); // obf

		// Term query parameter name depends on the 'field' being searched on. // obf
		switch ( $v_xfjbu['field'] ) { // obf
			case 'slug': // obf
				$v_nwnem['slug'] = $v_jnnjz; // obf
				break; // obf
			case 'name': // obf
				$v_nwnem['name'] = $v_jnnjz; // obf
				break; // obf
			case 'term_taxonomy_id': // obf
				$v_nwnem['term_taxonomy_id'] = $v_jnnjz; // obf
				break; // obf
			default: // obf
				$v_nwnem['include'] = wp_parse_id_list( $v_jnnjz ); // obf
				break; // obf
		} // obf

		if ( ! is_taxonomy_hierarchical( $v_xfjbu['taxonomy'] ) ) { // obf
			$v_nwnem['number'] = count( $v_jnnjz ); // obf
		} // obf

		$v_zvilf = new WP_Term_Query(); // obf
		$v_fbges  = $v_zvilf->query( $v_nwnem ); // obf

		if ( is_wp_error( $v_fbges ) ) { // obf
			$v_xfjbu = $v_fbges; // obf
			return; // obf
		} // obf

		if ( 'AND' === $v_xfjbu['operator'] && count( $v_fbges ) < count( $v_xfjbu['terms'] ) ) { // obf
			$v_xfjbu = new WP_Error( 'inexistent_terms', __( 'Inexistent terms.' ) ); // obf
			return; // obf
		} // obf

		$v_xfjbu['terms'] = wp_list_pluck( $v_fbges, $v_dlutp ); // obf
		$v_xfjbu['field'] = $v_dlutp; // obf
	} // obf
} // obf