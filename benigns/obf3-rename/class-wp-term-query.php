
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * Taxonomy API: WP_Term_Query class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Taxonomy // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Class used for querying terms. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see WP_Term_Query::__construct() for accepted arguments. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Term_Query { // obf

	/** // obf
	 * SQL string used to perform database query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_twbuq; // obf

	/** // obf
	 * Metadata query container. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var WP_Meta_Query A meta query instance. // obf
	 */ // obf
	public $v_bubfc = false; // obf

	/** // obf
	 * Metadata query clauses. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_zatae; // obf

	/** // obf
	 * SQL query clauses. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_xtxqk = array( // obf
		'select'  => '', // obf
		'from'    => '', // obf
		'where'   => array(), // obf
		'orderby' => '', // obf
		'limits'  => '', // obf
	); // obf

	/** // obf
	 * Query vars set by the user. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_xnxlo; // obf

	/** // obf
	 * Default values for query vars. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_qtlpf; // obf

	/** // obf
	 * List of terms located by the query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_htatn; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the term query, based on the query vars passed. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @since 4.6.0 Introduced 'term_taxonomy_id' parameter. // obf
	 * @since 4.7.0 Introduced 'object_ids' parameter. // obf
	 * @since 4.9.0 Added 'slug__in' support for 'orderby'. // obf
	 * @since 5.1.0 Introduced the 'meta_compare_key' parameter. // obf
	 * @since 5.3.0 Introduced the 'meta_type_key' parameter. // obf
	 * @since 6.4.0 Introduced the 'cache_results' parameter. // obf
	 * // obf
	 * @param string|array $v_fmvwz { // obf
	 *     Optional. Array or query string of term query parameters. Default empty. // obf
	 * // obf
	 *     @type string|string[] $v_luthe               Taxonomy name, or array of taxonomy names, to which results // obf
	 *                                                   should be limited. // obf
	 *     @type int|int[]       $v_tbxqd             Object ID, or array of object IDs. Results will be // obf
	 *                                                   limited to terms associated with these objects. // obf
	 *     @type string          $v_unkvr                Field(s) to order terms by. Accepts: // obf
	 *                                                   - Term fields ('name', 'slug', 'term_group', 'term_id', 'id', // obf
	 *                                                     'description', 'parent', 'term_order'). Unless `$v_tbxqd` // obf
	 *                                                     is not empty, 'term_order' is treated the same as 'term_id'. // obf
	 *                                                   - 'count' to use the number of objects associated with the term. // obf
	 *                                                   - 'include' to match the 'order' of the `$v_onlsj` param. // obf
	 *                                                   - 'slug__in' to match the 'order' of the `$v_dahmg` param. // obf
	 *                                                   - 'meta_value' // obf
	 *                                                   - 'meta_value_num'. // obf
	 *                                                   - The value of `$v_wilvm`. // obf
	 *                                                   - The array keys of `$v_bubfc`. // obf
	 *                                                   - 'none' to omit the ORDER BY clause. // obf
	 *                                                   Default 'name'. // obf
	 *     @type string          $v_srswa                  Whether to order terms in ascending or descending order. // obf
	 *                                                   Accepts 'ASC' (ascending) or 'DESC' (descending). // obf
	 *                                                   Default 'ASC'. // obf
	 *     @type bool|int        $v_agliu             Whether to hide terms not assigned to any posts. Accepts // obf
	 *                                                   1|true or 0|false. Default 1|true. // obf
	 *     @type int[]|string    $v_onlsj                Array or comma/space-separated string of term IDs to include. // obf
	 *                                                   Default empty array. // obf
	 *     @type int[]|string    $v_xsyie                Array or comma/space-separated string of term IDs to exclude. // obf
	 *                                                   If `$v_onlsj` is non-empty, `$v_xsyie` is ignored. // obf
	 *                                                   Default empty array. // obf
	 *     @type int[]|string    $v_runam           Array or comma/space-separated string of term IDs to exclude // obf
	 *                                                   along with all of their descendant terms. If `$v_onlsj` is // obf
	 *                                                   non-empty, `$v_runam` is ignored. Default empty array. // obf
	 *     @type int|string      $v_vapoz                 Maximum number of terms to return. Accepts ''|0 (all) or any // obf
	 *                                                   positive number. Default ''|0 (all). Note that `$v_vapoz` may // obf
	 *                                                   not return accurate results when coupled with `$v_tbxqd`. // obf
	 *                                                   See #41796 for details. // obf
	 *     @type int             $v_egfoc                 The number by which to offset the terms query. Default empty. // obf
	 *     @type string          $v_sphdj                 Term fields to query for. Accepts: // obf
	 *                                                   - 'all' Returns an array of complete term objects (`WP_Term[]`). // obf
	 *                                                   - 'all_with_object_id' Returns an array of term objects // obf
	 *                                                     with the 'object_id' param (`WP_Term[]`). Works only // obf
	 *                                                     when the `$v_tbxqd` parameter is populated. // obf
	 *                                                   - 'ids' Returns an array of term IDs (`int[]`). // obf
	 *                                                   - 'tt_ids' Returns an array of term taxonomy IDs (`int[]`). // obf
	 *                                                   - 'names' Returns an array of term names (`string[]`). // obf
	 *                                                   - 'slugs' Returns an array of term slugs (`string[]`). // obf
	 *                                                   - 'count' Returns the number of matching terms (`int`). // obf
	 *                                                   - 'id=>parent' Returns an associative array of parent term IDs, // obf
	 *                                                      keyed by term ID (`int[]`). // obf
	 *                                                   - 'id=>name' Returns an associative array of term names, // obf
	 *                                                      keyed by term ID (`string[]`). // obf
	 *                                                   - 'id=>slug' Returns an associative array of term slugs, // obf
	 *                                                      keyed by term ID (`string[]`). // obf
	 *                                                   Default 'all'. // obf
	 *     @type string|string[] $v_fmfrl                   Name or array of names to return term(s) for. // obf
	 *                                                   Default empty. // obf
	 *     @type string|string[] $v_dahmg                   Slug or array of slugs to return term(s) for. // obf
	 *                                                   Default empty. // obf
	 *     @type int|int[]       $v_illve       Term taxonomy ID, or array of term taxonomy IDs, // obf
	 *                                                   to match when querying terms. // obf
	 *     @type bool            $v_paxxa           Whether to include terms that have non-empty descendants // obf
	 *                                                   (even if `$v_agliu` is set to true). Default true. // obf
	 *     @type string          $v_xgypn                 Search criteria to match terms. Will be SQL-formatted with // obf
	 *                                                   wildcards before and after. Default empty. // obf
	 *     @type string          $v_fechk             Retrieve terms with criteria by which a term is LIKE // obf
	 *                                                   `$v_fechk`. Default empty. // obf
	 *     @type string          $v_zgltu      Retrieve terms where the description is LIKE // obf
	 *                                                   `$v_zgltu`. Default empty. // obf
	 *     @type bool            $v_npqra             Whether to pad the quantity of a term's children in the // obf
	 *                                                   quantity of each term's "count" object variable. // obf
	 *                                                   Default false. // obf
	 *     @type string          $v_dchwb                    Whether to return terms regardless of ancestry or whether the // obf
	 *                                                   terms are empty. Accepts 'all' or '' (disabled). // obf
	 *                                                   Default ''. // obf
	 *     @type int             $v_gsqdq               Term ID to retrieve child terms of. If multiple taxonomies // obf
	 *                                                   are passed, `$v_gsqdq` is ignored. Default 0. // obf
	 *     @type int             $v_hrybm                 Parent term ID to retrieve direct-child terms of. // obf
	 *                                                   Default empty. // obf
	 *     @type bool            $v_mhwuo              True to limit results to terms that have no children. // obf
	 *                                                   This parameter has no effect on non-hierarchical taxonomies. // obf
	 *                                                   Default false. // obf
	 *     @type string          $v_gghje           Unique cache key to be produced when this query is stored in // obf
	 *                                                   an object cache. Default 'core'. // obf
	 *     @type bool            $v_kmphx          Whether to cache term information. Default true. // obf
	 *     @type bool            $v_barkv Whether to prime meta caches for matched terms. Default true. // obf
	 *     @type string|string[] $v_wilvm               Meta key or keys to filter by. // obf
	 *     @type string|string[] $v_qgpfe             Meta value or values to filter by. // obf
	 *     @type string          $v_cvdwc           MySQL operator used for comparing the meta value. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_vsrrc       MySQL operator used for comparing the meta key. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_mobch              MySQL data type that the meta_value column will be CAST to for comparisons. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_lirhx          MySQL data type that the meta_key column will be CAST to for comparisons. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type array           $v_bubfc             An associative array of WP_Meta_Query arguments. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_fmvwz = '' ) { // obf
		$v_ctsph->query_var_defaults = array( // obf
			'taxonomy'               => null, // obf
			'object_ids'             => null, // obf
			'orderby'                => 'name', // obf
			'order'                  => 'ASC', // obf
			'hide_empty'             => true, // obf
			'include'                => array(), // obf
			'exclude'                => array(), // obf
			'exclude_tree'           => array(), // obf
			'number'                 => '', // obf
			'offset'                 => '', // obf
			'fields'                 => 'all', // obf
			'name'                   => '', // obf
			'slug'                   => '', // obf
			'term_taxonomy_id'       => '', // obf
			'hierarchical'           => true, // obf
			'search'                 => '', // obf
			'name__like'             => '', // obf
			'description__like'      => '', // obf
			'pad_counts'             => false, // obf
			'get'                    => '', // obf
			'child_of'               => 0, // obf
			'parent'                 => '', // obf
			'childless'              => false, // obf
			'cache_domain'           => 'core', // obf
			'cache_results'          => true, // obf
			'update_term_meta_cache' => true, // obf
			'meta_query'             => '', // obf
			'meta_key'               => '', // obf
			'meta_value'             => '', // obf
			'meta_type'              => '', // obf
			'meta_compare'           => '', // obf
		); // obf

		if ( ! empty( $v_fmvwz ) ) { // obf
			$v_ctsph->query( $v_fmvwz ); // obf
		} // obf
	} // obf

	/** // obf
	 * Parse arguments passed to the term query with default query parameters. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string|array $v_fmvwz WP_Term_Query arguments. See WP_Term_Query::__construct() for accepted arguments. // obf
	 */ // obf
	public function parse_query( $v_fmvwz = '' ) { // obf
		if ( empty( $v_fmvwz ) ) { // obf
			$v_fmvwz = $v_ctsph->query_vars; // obf
		} // obf

		$v_wqgft = isset( $v_fmvwz['taxonomy'] ) ? (array) $v_fmvwz['taxonomy'] : null; // obf

		/** // obf
		 * Filters the terms query default arguments. // obf
		 * // obf
		 * Use {@see 'get_terms_args'} to filter the passed arguments. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array    $v_tihwr   An array of default get_terms() arguments. // obf
		 * @param string[] $v_wqgft An array of taxonomy names. // obf
		 */ // obf
		$v_ctsph->query_var_defaults = apply_filters( 'get_terms_defaults', $v_ctsph->query_var_defaults, $v_wqgft ); // obf

		$v_fmvwz = wp_parse_args( $v_fmvwz, $v_ctsph->query_var_defaults ); // obf

		$v_fmvwz['number'] = absint( $v_fmvwz['number'] ); // obf
		$v_fmvwz['offset'] = absint( $v_fmvwz['offset'] ); // obf

		// 'parent' overrides 'child_of'. // obf
		if ( 0 < (int) $v_fmvwz['parent'] ) { // obf
			$v_fmvwz['child_of'] = false; // obf
		} // obf

		if ( 'all' === $v_fmvwz['get'] ) { // obf
			$v_fmvwz['childless']    = false; // obf
			$v_fmvwz['child_of']     = 0; // obf
			$v_fmvwz['hide_empty']   = 0; // obf
			$v_fmvwz['hierarchical'] = false; // obf
			$v_fmvwz['pad_counts']   = false; // obf
		} // obf

		$v_fmvwz['taxonomy'] = $v_wqgft; // obf

		$v_ctsph->query_vars = $v_fmvwz; // obf

		/** // obf
		 * Fires after term query vars have been parsed. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Term_Query $v_fmvwz Current instance of WP_Term_Query. // obf
		 */ // obf
		do_action( 'parse_term_query', $v_ctsph ); // obf
	} // obf

	/** // obf
	 * Sets up the query and retrieves the results. // obf
	 * // obf
	 * The return type varies depending on the value passed to `$v_qlwnv['fields']`. See // obf
	 * WP_Term_Query::get_terms() for details. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string|array $v_fmvwz Array or URL query string of parameters. // obf
	 * @return WP_Term[]|int[]|string[]|string Array of terms, or number of terms as numeric string // obf
	 *                                         when 'count' is passed to `$v_qlwnv['fields']`. // obf
	 */ // obf
	public function query( $v_fmvwz ) { // obf
		$v_ctsph->query_vars = wp_parse_args( $v_fmvwz ); // obf
		return $v_ctsph->get_terms(); // obf
	} // obf

	/** // obf
	 * Retrieves the query results. // obf
	 * // obf
	 * The return type varies depending on the value passed to `$v_qlwnv['fields']`. // obf
	 * // obf
	 * The following will result in an array of `WP_Term` objects being returned: // obf
	 * // obf
	 *   - 'all' // obf
	 *   - 'all_with_object_id' // obf
	 * // obf
	 * The following will result in a numeric string being returned: // obf
	 * // obf
	 *   - 'count' // obf
	 * // obf
	 * The following will result in an array of text strings being returned: // obf
	 * // obf
	 *   - 'id=>name' // obf
	 *   - 'id=>slug' // obf
	 *   - 'names' // obf
	 *   - 'slugs' // obf
	 * // obf
	 * The following will result in an array of numeric strings being returned: // obf
	 * // obf
	 *   - 'id=>parent' // obf
	 * // obf
	 * The following will result in an array of integers being returned: // obf
	 * // obf
	 *   - 'ids' // obf
	 *   - 'tt_ids' // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_jodor WordPress database abstraction object. // obf
	 * // obf
	 * @return WP_Term[]|int[]|string[]|string Array of terms, or number of terms as numeric string // obf
	 *                                         when 'count' is passed to `$v_qlwnv['fields']`. // obf
	 */ // obf
	public function get_terms() { // obf
		global $v_jodor; // obf

		$v_ctsph->parse_query( $v_ctsph->query_vars ); // obf
		$v_qlwnv = &$v_ctsph->query_vars; // obf

		// Set up meta_query so it's available to 'pre_get_terms'. // obf
		$v_ctsph->meta_query = new WP_Meta_Query(); // obf
		$v_ctsph->meta_query->parse_query_vars( $v_qlwnv ); // obf

		/** // obf
		 * Fires before terms are retrieved. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Term_Query $v_fmvwz Current instance of WP_Term_Query (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'pre_get_terms', array( &$v_ctsph ) ); // obf

		$v_wqgft = (array) $v_qlwnv['taxonomy']; // obf

		// Save queries by not crawling the tree in the case of multiple taxes or a flat tax. // obf
		$v_tabqc = false; // obf
		if ( $v_wqgft ) { // obf
			foreach ( $v_wqgft as $v_cbrjq ) { // obf
				if ( is_taxonomy_hierarchical( $v_cbrjq ) ) { // obf
					$v_tabqc = true; // obf
				} // obf
			} // obf
		} else { // obf
			// When no taxonomies are provided, assume we have to descend the tree. // obf
			$v_tabqc = true; // obf
		} // obf

		if ( ! $v_tabqc ) { // obf
			$v_qlwnv['hierarchical'] = false; // obf
			$v_qlwnv['pad_counts']   = false; // obf
		} // obf

		// 'parent' overrides 'child_of'. // obf
		if ( 0 < (int) $v_qlwnv['parent'] ) { // obf
			$v_qlwnv['child_of'] = false; // obf
		} // obf

		if ( 'all' === $v_qlwnv['get'] ) { // obf
			$v_qlwnv['childless']    = false; // obf
			$v_qlwnv['child_of']     = 0; // obf
			$v_qlwnv['hide_empty']   = 0; // obf
			$v_qlwnv['hierarchical'] = false; // obf
			$v_qlwnv['pad_counts']   = false; // obf
		} // obf

		/** // obf
		 * Filters the terms query arguments. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param array    $v_qlwnv       An array of get_terms() arguments. // obf
		 * @param string[] $v_wqgft An array of taxonomy names. // obf
		 */ // obf
		$v_qlwnv = apply_filters( 'get_terms_args', $v_qlwnv, $v_wqgft ); // obf

		// Avoid the query if the queried parent/child_of term has no descendants. // obf
		$v_gsqdq = $v_qlwnv['child_of']; // obf
		$v_hrybm   = $v_qlwnv['parent']; // obf

		if ( $v_gsqdq ) { // obf
			$v_earih = $v_gsqdq; // obf
		} elseif ( $v_hrybm ) { // obf
			$v_earih = $v_hrybm; // obf
		} else { // obf
			$v_earih = false; // obf
		} // obf

		if ( $v_earih ) { // obf
			$v_qkyjz = false; // obf
			foreach ( $v_wqgft as $v_cbrjq ) { // obf
				$v_kgvqn = _get_term_hierarchy( $v_cbrjq ); // obf

				if ( isset( $v_kgvqn[ $v_earih ] ) ) { // obf
					$v_qkyjz = true; // obf
				} // obf
			} // obf

			if ( ! $v_qkyjz ) { // obf
				if ( 'count' === $v_qlwnv['fields'] ) { // obf
					return 0; // obf
				} else { // obf
					$v_ctsph->terms = array(); // obf
					return $v_ctsph->terms; // obf
				} // obf
			} // obf
		} // obf

		// 'term_order' is a legal sort order only when joining the relationship table. // obf
		$v_lhunw = $v_ctsph->query_vars['orderby']; // obf
		if ( 'term_order' === $v_lhunw && empty( $v_ctsph->query_vars['object_ids'] ) ) { // obf
			$v_lhunw = 'term_id'; // obf
		} // obf

		$v_unkvr = $v_ctsph->parse_orderby( $v_lhunw ); // obf

		if ( $v_unkvr ) { // obf
			$v_unkvr = "ORDER BY $v_unkvr"; // obf
		} // obf

		$v_srswa = $v_ctsph->parse_order( $v_ctsph->query_vars['order'] ); // obf

		if ( $v_wqgft ) { // obf
			$v_ctsph->sql_clauses['where']['taxonomy'] = // obf
				"tt.taxonomy IN ('" . implode( "', '", array_map( 'esc_sql', $v_wqgft ) ) . "')"; // obf
		} // obf

		if ( empty( $v_qlwnv['exclude'] ) ) { // obf
			$v_qlwnv['exclude'] = array(); // obf
		} // obf

		if ( empty( $v_qlwnv['include'] ) ) { // obf
			$v_qlwnv['include'] = array(); // obf
		} // obf

		$v_xsyie      = $v_qlwnv['exclude']; // obf
		$v_runam = $v_qlwnv['exclude_tree']; // obf
		$v_onlsj      = $v_qlwnv['include']; // obf

		$v_cdkrv = ''; // obf
		if ( ! empty( $v_onlsj ) ) { // obf
			$v_xsyie      = ''; // obf
			$v_runam = ''; // obf
			$v_cdkrv   = implode( ',', wp_parse_id_list( $v_onlsj ) ); // obf
		} // obf

		if ( ! empty( $v_cdkrv ) ) { // obf
			$v_ctsph->sql_clauses['where']['inclusions'] = 't.term_id IN ( ' . $v_cdkrv . ' )'; // obf
		} // obf

		$v_wqhut = array(); // obf
		if ( ! empty( $v_runam ) ) { // obf
			$v_runam      = wp_parse_id_list( $v_runam ); // obf
			$v_pvteh = $v_runam; // obf

			foreach ( $v_runam as $v_bbrrk ) { // obf
				$v_pvteh = array_merge( // obf
					$v_pvteh, // obf
					(array) get_terms( // obf
						array( // obf
							'taxonomy'   => reset( $v_wqgft ), // obf
							'child_of'   => (int) $v_bbrrk, // obf
							'fields'     => 'ids', // obf
							'hide_empty' => 0, // obf
						) // obf
					) // obf
				); // obf
			} // obf

			$v_wqhut = array_merge( $v_pvteh, $v_wqhut ); // obf
		} // obf

		if ( ! empty( $v_xsyie ) ) { // obf
			$v_wqhut = array_merge( wp_parse_id_list( $v_xsyie ), $v_wqhut ); // obf
		} // obf

		// 'childless' terms are those without an entry in the flattened term hierarchy. // obf
		$v_mhwuo = (bool) $v_qlwnv['childless']; // obf
		if ( $v_mhwuo ) { // obf
			foreach ( $v_wqgft as $v_cbrjq ) { // obf
				$v_xczlq = _get_term_hierarchy( $v_cbrjq ); // obf
				$v_wqhut     = array_merge( array_keys( $v_xczlq ), $v_wqhut ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_wqhut ) ) { // obf
			$v_wqhut = 't.term_id NOT IN (' . implode( ',', array_map( 'intval', $v_wqhut ) ) . ')'; // obf
		} else { // obf
			$v_wqhut = ''; // obf
		} // obf

		/** // obf
		 * Filters the terms to exclude from the terms query. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param string   $v_wqhut `NOT IN` clause of the terms query. // obf
		 * @param array    $v_qlwnv       An array of terms query arguments. // obf
		 * @param string[] $v_wqgft An array of taxonomy names. // obf
		 */ // obf
		$v_wqhut = apply_filters( 'list_terms_exclusions', $v_wqhut, $v_qlwnv, $v_wqgft ); // obf

		if ( ! empty( $v_wqhut ) ) { // obf
			// Strip leading 'AND'. Must do string manipulation here for backward compatibility with filter. // obf
			$v_ctsph->sql_clauses['where']['exclusions'] = __fn_37772( '/^\s*AND\s*/', '', $v_wqhut ); // obf
		} // obf

		if ( '' === $v_qlwnv['name'] ) { // obf
			$v_qlwnv['name'] = array(); // obf
		} else { // obf
			$v_qlwnv['name'] = (array) $v_qlwnv['name']; // obf
		} // obf

		if ( ! empty( $v_qlwnv['name'] ) ) { // obf
			$v_fyzaz = $v_qlwnv['name']; // obf

			foreach ( $v_fyzaz as &$v_bemkm ) { // obf
				// `sanitize_term_field()` returns slashed data. // obf
				$v_bemkm = stripslashes( sanitize_term_field( 'name', $v_bemkm, 0, reset( $v_wqgft ), 'db' ) ); // obf
			} // obf

			$v_ctsph->sql_clauses['where']['name'] = "t.name IN ('" . implode( "', '", array_map( 'esc_sql', $v_fyzaz ) ) . "')"; // obf
		} // obf

		if ( '' === $v_qlwnv['slug'] ) { // obf
			$v_qlwnv['slug'] = array(); // obf
		} else { // obf
			$v_qlwnv['slug'] = array_map( 'sanitize_title', (array) $v_qlwnv['slug'] ); // obf
		} // obf

		if ( ! empty( $v_qlwnv['slug'] ) ) { // obf
			$v_dahmg = implode( "', '", $v_qlwnv['slug'] ); // obf

			$v_ctsph->sql_clauses['where']['slug'] = "t.slug IN ('" . $v_dahmg . "')"; // obf
		} // obf

		if ( '' === $v_qlwnv['term_taxonomy_id'] ) { // obf
			$v_qlwnv['term_taxonomy_id'] = array(); // obf
		} else { // obf
			$v_qlwnv['term_taxonomy_id'] = array_map( 'intval', (array) $v_qlwnv['term_taxonomy_id'] ); // obf
		} // obf

		if ( ! empty( $v_qlwnv['term_taxonomy_id'] ) ) { // obf
			$v_csklo = implode( ',', $v_qlwnv['term_taxonomy_id'] ); // obf

			$v_ctsph->sql_clauses['where']['term_taxonomy_id'] = "tt.term_taxonomy_id IN ({$v_csklo})"; // obf
		} // obf

		if ( ! empty( $v_qlwnv['name__like'] ) ) { // obf
			$v_ctsph->sql_clauses['where']['name__like'] = $v_jodor->prepare( // obf
				't.name LIKE %s', // obf
				'%' . $v_jodor->esc_like( $v_qlwnv['name__like'] ) . '%' // obf
			); // obf
		} // obf

		if ( ! empty( $v_qlwnv['description__like'] ) ) { // obf
			$v_ctsph->sql_clauses['where']['description__like'] = $v_jodor->prepare( // obf
				'tt.description LIKE %s', // obf
				'%' . $v_jodor->esc_like( $v_qlwnv['description__like'] ) . '%' // obf
			); // obf
		} // obf

		if ( '' === $v_qlwnv['object_ids'] ) { // obf
			$v_qlwnv['object_ids'] = array(); // obf
		} else { // obf
			$v_qlwnv['object_ids'] = array_map( 'intval', (array) $v_qlwnv['object_ids'] ); // obf
		} // obf

		if ( ! empty( $v_qlwnv['object_ids'] ) ) { // obf
			$v_tbxqd = implode( ', ', $v_qlwnv['object_ids'] ); // obf

			$v_ctsph->sql_clauses['where']['object_ids'] = "tr.object_id IN ($v_tbxqd)"; // obf
		} // obf

		/* // obf
		 * When querying for object relationships, the 'count > 0' check // obf
		 * added by 'hide_empty' is superfluous. // obf
		 */ // obf
		if ( ! empty( $v_qlwnv['object_ids'] ) ) { // obf
			$v_qlwnv['hide_empty'] = false; // obf
		} // obf

		if ( '' !== $v_hrybm ) { // obf
			$v_hrybm                               = (int) $v_hrybm; // obf
			$v_ctsph->sql_clauses['where']['parent'] = "tt.parent = '$v_hrybm'"; // obf
		} // obf

		$v_paxxa = $v_qlwnv['hierarchical']; // obf
		if ( 'count' === $v_qlwnv['fields'] ) { // obf
			$v_paxxa = false; // obf
		} // obf
		if ( $v_qlwnv['hide_empty'] && ! $v_paxxa ) { // obf
			$v_ctsph->sql_clauses['where']['count'] = 'tt.count > 0'; // obf
		} // obf

		$v_vapoz = $v_qlwnv['number']; // obf
		$v_egfoc = $v_qlwnv['offset']; // obf

		// Don't limit the query results when we have to descend the family tree. // obf
		if ( $v_vapoz && ! $v_paxxa && ! $v_gsqdq && '' === $v_hrybm ) { // obf
			if ( $v_egfoc ) { // obf
				$v_jdung = 'LIMIT ' . $v_egfoc . ',' . $v_vapoz; // obf
			} else { // obf
				$v_jdung = 'LIMIT ' . $v_vapoz; // obf
			} // obf
		} else { // obf
			$v_jdung = ''; // obf
		} // obf

		if ( ! empty( $v_qlwnv['search'] ) ) { // obf
			$v_ctsph->sql_clauses['where']['search'] = $v_ctsph->get_search_sql( $v_qlwnv['search'] ); // obf
		} // obf

		// Meta query support. // obf
		$v_tzztk     = ''; // obf
		$v_vzovw = ''; // obf

		// Reparse meta_query query_vars, in case they were modified in a 'pre_get_terms' callback. // obf
		$v_ctsph->meta_query->parse_query_vars( $v_ctsph->query_vars ); // obf
		$v_wzxfm       = $v_ctsph->meta_query->get_sql( 'term', 't', 'term_id' ); // obf
		$v_wemdh = $v_ctsph->meta_query->get_clauses(); // obf

		if ( ! empty( $v_wemdh ) ) { // obf
			$v_tzztk .= $v_wzxfm['join']; // obf

			// Strip leading 'AND'. // obf
			$v_ctsph->sql_clauses['where']['meta_query'] = __fn_37772( '/^\s*AND\s*/', '', $v_wzxfm['where'] ); // obf

			$v_vzovw .= 'DISTINCT'; // obf

		} // obf

		$v_mcxrc = array(); // obf
		switch ( $v_qlwnv['fields'] ) { // obf
			case 'count': // obf
				$v_unkvr = ''; // obf
				$v_srswa   = ''; // obf
				$v_mcxrc = array( 'COUNT(*)' ); // obf
				break; // obf
			default: // obf
				$v_mcxrc = array( 't.term_id' ); // obf
				if ( 'all_with_object_id' === $v_qlwnv['fields'] && ! empty( $v_qlwnv['object_ids'] ) ) { // obf
					$v_mcxrc[] = 'tr.object_id'; // obf
				} // obf
				break; // obf
		} // obf

		$v_btmmu = $v_qlwnv['fields']; // obf

		/** // obf
		 * Filters the fields to select in the terms query. // obf
		 * // obf
		 * Field lists modified using this filter will only modify the term fields returned // obf
		 * by the function when the `$v_sphdj` parameter set to 'count' or 'all'. In all other // obf
		 * cases, the term fields in the results array will be determined by the `$v_sphdj` // obf
		 * parameter alone. // obf
		 * // obf
		 * Use of this filter can result in unpredictable behavior, and is not recommended. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string[] $v_mcxrc    An array of fields to select for the terms query. // obf
		 * @param array    $v_qlwnv       An array of term query arguments. // obf
		 * @param string[] $v_wqgft An array of taxonomy names. // obf
		 */ // obf
		$v_sphdj = implode( ', ', apply_filters( 'get_terms_fields', $v_mcxrc, $v_qlwnv, $v_wqgft ) ); // obf

		$v_tzztk .= " INNER JOIN $v_jodor->term_taxonomy AS tt ON t.term_id = tt.term_id"; // obf

		if ( ! empty( $v_ctsph->query_vars['object_ids'] ) ) { // obf
			$v_tzztk    .= " INNER JOIN {$v_jodor->term_relationships} AS tr ON tr.term_taxonomy_id = tt.term_taxonomy_id"; // obf
			$v_vzovw = 'DISTINCT'; // obf
		} // obf

		$v_fpfly = implode( ' AND ', $v_ctsph->sql_clauses['where'] ); // obf

		$v_tmjuu = array( 'fields', 'join', 'where', 'distinct', 'orderby', 'order', 'limits' ); // obf

		/** // obf
		 * Filters the terms query SQL clauses. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[] $v_hmgwe { // obf
		 *     Associative array of the clauses for the query. // obf
		 * // obf
		 *     @type string $v_sphdj   The SELECT clause of the query. // obf
		 *     @type string $v_tzztk     The JOIN clause of the query. // obf
		 *     @type string $v_fpfly    The WHERE clause of the query. // obf
		 *     @type string $v_vzovw The DISTINCT clause of the query. // obf
		 *     @type string $v_unkvr  The ORDER BY clause of the query. // obf
		 *     @type string $v_srswa    The ORDER clause of the query. // obf
		 *     @type string $v_jdung   The LIMIT clause of the query. // obf
		 * } // obf
		 * @param string[] $v_wqgft An array of taxonomy names. // obf
		 * @param array    $v_qlwnv       An array of term query arguments. // obf
		 */ // obf
		$v_hmgwe = apply_filters( 'terms_clauses', compact( $v_tmjuu ), $v_wqgft, $v_qlwnv ); // obf

		$v_sphdj   = isset( $v_hmgwe['fields'] ) ? $v_hmgwe['fields'] : ''; // obf
		$v_tzztk     = isset( $v_hmgwe['join'] ) ? $v_hmgwe['join'] : ''; // obf
		$v_fpfly    = isset( $v_hmgwe['where'] ) ? $v_hmgwe['where'] : ''; // obf
		$v_vzovw = isset( $v_hmgwe['distinct'] ) ? $v_hmgwe['distinct'] : ''; // obf
		$v_unkvr  = isset( $v_hmgwe['orderby'] ) ? $v_hmgwe['orderby'] : ''; // obf
		$v_srswa    = isset( $v_hmgwe['order'] ) ? $v_hmgwe['order'] : ''; // obf
		$v_jdung   = isset( $v_hmgwe['limits'] ) ? $v_hmgwe['limits'] : ''; // obf

		$v_lsvep = implode( ', ', $v_mcxrc ) !== $v_sphdj; // obf

		if ( $v_fpfly ) { // obf
			$v_fpfly = "WHERE $v_fpfly"; // obf
		} // obf

		$v_ctsph->sql_clauses['select']  = "SELECT $v_vzovw $v_sphdj"; // obf
		$v_ctsph->sql_clauses['from']    = "FROM $v_jodor->terms AS t $v_tzztk"; // obf
		$v_ctsph->sql_clauses['orderby'] = $v_unkvr ? "$v_unkvr $v_srswa" : ''; // obf
		$v_ctsph->sql_clauses['limits']  = $v_jdung; // obf

		// Beginning of the string is on a new line to prevent leading whitespace. See https://core.trac.wordpress.org/ticket/56841. // obf
		$v_ctsph->request = // obf
			"{$v_ctsph->sql_clauses['select']} // obf
			 {$v_ctsph->sql_clauses['from']} // obf
			 {$v_fpfly} // obf
			 {$v_ctsph->sql_clauses['orderby']} // obf
			 {$v_ctsph->sql_clauses['limits']}"; // obf

		$v_ctsph->terms = null; // obf

		/** // obf
		 * Filters the terms array before the query takes place. // obf
		 * // obf
		 * Return a non-null value to bypass WordPress' default term queries. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * // obf
		 * @param array|null    $v_htatn Return an array of term data to short-circuit WP's term query, // obf
		 *                             or null to allow WP queries to run normally. // obf
		 * @param WP_Term_Query $v_fmvwz The WP_Term_Query instance, passed by reference. // obf
		 */ // obf
		$v_ctsph->terms = apply_filters_ref_array( 'terms_pre_query', array( $v_ctsph->terms, &$v_ctsph ) ); // obf

		if ( null !== $v_ctsph->terms ) { // obf
			return $v_ctsph->terms; // obf
		} // obf

		if ( $v_qlwnv['cache_results'] ) { // obf
			$v_fhech = $v_ctsph->generate_cache_key( $v_qlwnv, $v_ctsph->request ); // obf
			$v_sfbec     = wp_cache_get( $v_fhech, 'term-queries' ); // obf

			if ( false !== $v_sfbec ) { // obf
				if ( 'ids' === $v_btmmu ) { // obf
					$v_sfbec = array_map( 'intval', $v_sfbec ); // obf
				} elseif ( 'count' !== $v_btmmu ) { // obf
					if ( ( 'all_with_object_id' === $v_btmmu && ! empty( $v_qlwnv['object_ids'] ) ) // obf
					|| ( 'all' === $v_btmmu && $v_qlwnv['pad_counts'] || $v_lsvep ) // obf
					) { // obf
						$v_uvpel = wp_list_pluck( $v_sfbec, 'term_id' ); // obf
					} else { // obf
						$v_uvpel = array_map( 'intval', $v_sfbec ); // obf
					} // obf

					_prime_term_caches( $v_uvpel, $v_qlwnv['update_term_meta_cache'] ); // obf

					$v_kwual = $v_ctsph->populate_terms( $v_sfbec ); // obf
					$v_sfbec        = $v_ctsph->format_terms( $v_kwual, $v_btmmu ); // obf
				} // obf

				$v_ctsph->terms = $v_sfbec; // obf
				return $v_ctsph->terms; // obf
			} // obf
		} // obf

		if ( 'count' === $v_btmmu ) { // obf
			$v_fouji = $v_jodor->get_var( $v_ctsph->request ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
			if ( $v_qlwnv['cache_results'] ) { // obf
				wp_cache_set( $v_fhech, $v_fouji, 'term-queries' ); // obf
			} // obf
			return $v_fouji; // obf
		} // obf

		$v_htatn = $v_jodor->get_results( $v_ctsph->request ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf

		if ( empty( $v_htatn ) ) { // obf
			if ( $v_qlwnv['cache_results'] ) { // obf
				wp_cache_add( $v_fhech, array(), 'term-queries' ); // obf
			} // obf
			return array(); // obf
		} // obf

		$v_uvpel = wp_list_pluck( $v_htatn, 'term_id' ); // obf
		_prime_term_caches( $v_uvpel, false ); // obf
		$v_kwual = $v_ctsph->populate_terms( $v_htatn ); // obf

		if ( $v_gsqdq ) { // obf
			foreach ( $v_wqgft as $v_cbrjq ) { // obf
				$v_araru = _get_term_hierarchy( $v_cbrjq ); // obf
				if ( ! empty( $v_araru ) ) { // obf
					$v_kwual = _get_term_children( $v_gsqdq, $v_kwual, $v_cbrjq ); // obf
				} // obf
			} // obf
		} // obf

		// Update term counts to include children. // obf
		if ( $v_qlwnv['pad_counts'] && 'all' === $v_btmmu ) { // obf
			foreach ( $v_wqgft as $v_cbrjq ) { // obf
				_pad_term_counts( $v_kwual, $v_cbrjq ); // obf
			} // obf
		} // obf

		// Make sure we show empty categories that have children. // obf
		if ( $v_paxxa && $v_qlwnv['hide_empty'] && is_array( $v_kwual ) ) { // obf
			foreach ( $v_kwual as $v_zfkuv => $v_axlno ) { // obf
				if ( ! $v_axlno->count ) { // obf
					$v_araru = get_term_children( $v_axlno->term_id, $v_axlno->taxonomy ); // obf

					if ( is_array( $v_araru ) ) { // obf
						foreach ( $v_araru as $v_hqrtw ) { // obf
							$v_ywmqn = get_term( $v_hqrtw, $v_axlno->taxonomy ); // obf
							if ( $v_ywmqn->count ) { // obf
								continue 2; // obf
							} // obf
						} // obf
					} // obf

					// It really is empty. // obf
					unset( $v_kwual[ $v_zfkuv ] ); // obf
				} // obf
			} // obf
		} // obf

		// Hierarchical queries are not limited, so 'offset' and 'number' must be handled now. // obf
		if ( $v_paxxa && $v_vapoz && is_array( $v_kwual ) ) { // obf
			if ( $v_egfoc >= count( $v_kwual ) ) { // obf
				$v_kwual = array(); // obf
			} else { // obf
				$v_kwual = array_slice( $v_kwual, $v_egfoc, $v_vapoz, true ); // obf
			} // obf
		} // obf

		// Prime termmeta cache. // obf
		if ( $v_qlwnv['update_term_meta_cache'] ) { // obf
			$v_uvpel = wp_list_pluck( $v_kwual, 'term_id' ); // obf
			wp_lazyload_term_meta( $v_uvpel ); // obf
		} // obf

		if ( 'all_with_object_id' === $v_btmmu && ! empty( $v_qlwnv['object_ids'] ) ) { // obf
			$v_hyaoo = array(); // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_cnssu            = new stdClass(); // obf
				$v_cnssu->term_id   = $v_axlno->term_id; // obf
				$v_cnssu->object_id = $v_axlno->object_id; // obf
				$v_hyaoo[]      = $v_cnssu; // obf
			} // obf
		} elseif ( 'all' === $v_btmmu && $v_qlwnv['pad_counts'] ) { // obf
			$v_hyaoo = array(); // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_cnssu          = new stdClass(); // obf
				$v_cnssu->term_id = $v_axlno->term_id; // obf
				$v_cnssu->count   = $v_axlno->count; // obf
				$v_hyaoo[]    = $v_cnssu; // obf
			} // obf
		} elseif ( $v_lsvep ) { // obf
			$v_hyaoo = $v_kwual; // obf
		} else { // obf
			$v_hyaoo = wp_list_pluck( $v_kwual, 'term_id' ); // obf
		} // obf

		if ( $v_qlwnv['cache_results'] ) { // obf
			wp_cache_add( $v_fhech, $v_hyaoo, 'term-queries' ); // obf
		} // obf

		$v_ctsph->terms = $v_ctsph->format_terms( $v_kwual, $v_btmmu ); // obf

		return $v_ctsph->terms; // obf
	} // obf

	/** // obf
	 * Parse and sanitize 'orderby' keys passed to the term query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_mahau Alias for the field to order by. // obf
	 * @return string|false Value to used in the ORDER clause. False otherwise. // obf
	 */ // obf
	protected function parse_orderby( $v_mahau ) { // obf
		$v_lhunw           = strtolower( $v_mahau ); // obf
		$v_ocfuf = false; // obf

		if ( in_array( $v_lhunw, array( 'term_id', 'name', 'slug', 'term_group' ), true ) ) { // obf
			$v_unkvr = "t.$v_lhunw"; // obf
		} elseif ( in_array( $v_lhunw, array( 'count', 'parent', 'taxonomy', 'term_taxonomy_id', 'description' ), true ) ) { // obf
			$v_unkvr = "tt.$v_lhunw"; // obf
		} elseif ( 'term_order' === $v_lhunw ) { // obf
			$v_unkvr = 'tr.term_order'; // obf
		} elseif ( 'include' === $v_lhunw && ! empty( $v_ctsph->query_vars['include'] ) ) { // obf
			$v_onlsj = implode( ',', wp_parse_id_list( $v_ctsph->query_vars['include'] ) ); // obf
			$v_unkvr = "FIELD( t.term_id, $v_onlsj )"; // obf
		} elseif ( 'slug__in' === $v_lhunw && ! empty( $v_ctsph->query_vars['slug'] ) && is_array( $v_ctsph->query_vars['slug'] ) ) { // obf
			$v_mrntq   = implode( "', '", array_map( 'sanitize_title_for_query', $v_ctsph->query_vars['slug'] ) ); // obf
			$v_unkvr = "FIELD( t.slug, '" . $v_mrntq . "')"; // obf
		} elseif ( 'none' === $v_lhunw ) { // obf
			$v_unkvr = ''; // obf
		} elseif ( empty( $v_lhunw ) || 'id' === $v_lhunw || 'term_id' === $v_lhunw ) { // obf
			$v_unkvr = 't.term_id'; // obf
		} else { // obf
			$v_unkvr = 't.name'; // obf

			// This may be a value of orderby related to meta. // obf
			$v_ocfuf = true; // obf
		} // obf

		/** // obf
		 * Filters the ORDERBY clause of the terms query. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string   $v_unkvr    `ORDERBY` clause of the terms query. // obf
		 * @param array    $v_qlwnv       An array of term query arguments. // obf
		 * @param string[] $v_wqgft An array of taxonomy names. // obf
		 */ // obf
		$v_unkvr = apply_filters( 'get_terms_orderby', $v_unkvr, $v_ctsph->query_vars, $v_ctsph->query_vars['taxonomy'] ); // obf

		// Run after the 'get_terms_orderby' filter for backward compatibility. // obf
		if ( $v_ocfuf ) { // obf
			$v_ocfuf = $v_ctsph->parse_orderby_meta( $v_lhunw ); // obf
			if ( $v_ocfuf ) { // obf
				$v_unkvr = $v_ocfuf; // obf
			} // obf
		} // obf

		return $v_unkvr; // obf
	} // obf

	/** // obf
	 * Format response depending on field requested. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param WP_Term[] $v_kwual Array of term objects. // obf
	 * @param string    $v_btmmu      Field to format. // obf
	 * // obf
	 * @return WP_Term[]|int[]|string[] Array of terms / strings / ints depending on field requested. // obf
	 */ // obf
	protected function format_terms( $v_kwual, $v_btmmu ) { // obf
		$v_npdks = array(); // obf
		if ( 'id=>parent' === $v_btmmu ) { // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_npdks[ $v_axlno->term_id ] = $v_axlno->parent; // obf
			} // obf
		} elseif ( 'ids' === $v_btmmu ) { // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_npdks[] = (int) $v_axlno->term_id; // obf
			} // obf
		} elseif ( 'tt_ids' === $v_btmmu ) { // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_npdks[] = (int) $v_axlno->term_taxonomy_id; // obf
			} // obf
		} elseif ( 'names' === $v_btmmu ) { // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_npdks[] = $v_axlno->name; // obf
			} // obf
		} elseif ( 'slugs' === $v_btmmu ) { // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_npdks[] = $v_axlno->slug; // obf
			} // obf
		} elseif ( 'id=>name' === $v_btmmu ) { // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_npdks[ $v_axlno->term_id ] = $v_axlno->name; // obf
			} // obf
		} elseif ( 'id=>slug' === $v_btmmu ) { // obf
			foreach ( $v_kwual as $v_axlno ) { // obf
				$v_npdks[ $v_axlno->term_id ] = $v_axlno->slug; // obf
			} // obf
		} elseif ( 'all' === $v_btmmu || 'all_with_object_id' === $v_btmmu ) { // obf
			$v_npdks = $v_kwual; // obf
		} // obf

		return $v_npdks; // obf
	} // obf

	/** // obf
	 * Generate the ORDER BY clause for an 'orderby' param that is potentially related to a meta query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_mahau Raw 'orderby' value passed to WP_Term_Query. // obf
	 * @return string ORDER BY clause. // obf
	 */ // obf
	protected function parse_orderby_meta( $v_mahau ) { // obf
		$v_unkvr = ''; // obf

		// Tell the meta query to generate its SQL, so we have access to table aliases. // obf
		$v_ctsph->meta_query->get_sql( 'term', 't', 'term_id' ); // obf
		$v_wemdh = $v_ctsph->meta_query->get_clauses(); // obf
		if ( ! $v_wemdh || ! $v_mahau ) { // obf
			return $v_unkvr; // obf
		} // obf

		$v_pacdc       = array(); // obf
		$v_krpwr   = null; // obf
		$v_eprkp = reset( $v_wemdh ); // obf
		if ( ! empty( $v_eprkp['key'] ) ) { // obf
			$v_krpwr = $v_eprkp['key']; // obf
			$v_pacdc[]   = $v_krpwr; // obf
		} // obf
		$v_pacdc[] = 'meta_value'; // obf
		$v_pacdc[] = 'meta_value_num'; // obf
		$v_pacdc   = array_merge( $v_pacdc, array_keys( $v_wemdh ) ); // obf

		if ( ! in_array( $v_mahau, $v_pacdc, true ) ) { // obf
			return $v_unkvr; // obf
		} // obf

		switch ( $v_mahau ) { // obf
			case $v_krpwr: // obf
			case 'meta_value': // obf
				if ( ! empty( $v_eprkp['type'] ) ) { // obf
					$v_unkvr = "CAST({$v_eprkp['alias']}.meta_value AS {$v_eprkp['cast']})"; // obf
				} else { // obf
					$v_unkvr = "{$v_eprkp['alias']}.meta_value"; // obf
				} // obf
				break; // obf

			case 'meta_value_num': // obf
				$v_unkvr = "{$v_eprkp['alias']}.meta_value+0"; // obf
				break; // obf

			default: // obf
				if ( array_key_exists( $v_mahau, $v_wemdh ) ) { // obf
					// $v_unkvr corresponds to a meta_query clause. // obf
					$v_ebvzh = $v_wemdh[ $v_mahau ]; // obf
					$v_unkvr     = "CAST({$v_ebvzh['alias']}.meta_value AS {$v_ebvzh['cast']})"; // obf
				} // obf
				break; // obf
		} // obf

		return $v_unkvr; // obf
	} // obf

	/** // obf
	 * Parse an 'order' query variable and cast it to ASC or DESC as necessary. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_srswa The 'order' query variable. // obf
	 * @return string The sanitized 'order' query variable. // obf
	 */ // obf
	protected function parse_order( $v_srswa ) { // obf
		if ( ! is_string( $v_srswa ) || empty( $v_srswa ) ) { // obf
			return 'DESC'; // obf
		} // obf

		if ( 'ASC' === strtoupper( $v_srswa ) ) { // obf
			return 'ASC'; // obf
		} else { // obf
			return 'DESC'; // obf
		} // obf
	} // obf

	/** // obf
	 * Used internally to generate a SQL string related to the 'search' parameter. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_jodor WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_xgypn Search string. // obf
	 * @return string Search SQL. // obf
	 */ // obf
	protected function get_search_sql( $v_xgypn ) { // obf
		global $v_jodor; // obf

		$v_uvcaa = '%' . $v_jodor->esc_like( $v_xgypn ) . '%'; // obf

		return $v_jodor->prepare( '((t.name LIKE %s) OR (t.slug LIKE %s))', $v_uvcaa, $v_uvcaa ); // obf
	} // obf

	/** // obf
	 * Creates an array of term objects from an array of term IDs. // obf
	 * // obf
	 * Also discards invalid term objects. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @param Object[]|int[] $v_htatn List of objects or term ids. // obf
	 * @return WP_Term[] Array of `WP_Term` objects. // obf
	 */ // obf
	protected function populate_terms( $v_htatn ) { // obf
		$v_kwual = array(); // obf
		if ( ! is_array( $v_htatn ) ) { // obf
			return $v_kwual; // obf
		} // obf

		foreach ( $v_htatn as $v_cuqav => $v_xmlct ) { // obf
			if ( is_object( $v_xmlct ) && property_exists( $v_xmlct, 'term_id' ) ) { // obf
				$v_axlno = get_term( $v_xmlct->term_id ); // obf
				if ( property_exists( $v_xmlct, 'object_id' ) ) { // obf
					$v_axlno->object_id = (int) $v_xmlct->object_id; // obf
				} // obf
				if ( property_exists( $v_xmlct, 'count' ) ) { // obf
					$v_axlno->count = (int) $v_xmlct->count; // obf
				} // obf
			} else { // obf
				$v_axlno = get_term( $v_xmlct ); // obf
			} // obf

			if ( $v_axlno instanceof WP_Term ) { // obf
				$v_kwual[ $v_cuqav ] = $v_axlno; // obf
			} // obf
		} // obf

		return $v_kwual; // obf
	} // obf

	/** // obf
	 * Generate cache key. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @global wpdb $v_jodor WordPress database abstraction object. // obf
	 * // obf
	 * @param array  $v_qlwnv WP_Term_Query arguments. // obf
	 * @param string $v_yxuob  SQL statement. // obf
	 * // obf
	 * @return string Cache key. // obf
	 */ // obf
	protected function generate_cache_key( array $v_qlwnv, $v_yxuob ) { // obf
		global $v_jodor; // obf
		// $v_qlwnv can be anything. Only use the args defined in defaults to compute the key. // obf
		$v_esfoo = wp_array_slice_assoc( $v_qlwnv, array_keys( $v_ctsph->query_var_defaults ) ); // obf

		unset( $v_esfoo['cache_results'], $v_esfoo['update_term_meta_cache'] ); // obf

		if ( 'count' !== $v_qlwnv['fields'] && 'all_with_object_id' !== $v_qlwnv['fields'] ) { // obf
			$v_esfoo['fields'] = 'all'; // obf
		} // obf

		// Replace wpdb placeholder in the SQL statement used by the cache key. // obf
		$v_yxuob = $v_jodor->remove_placeholder_escape( $v_yxuob ); // obf

		$v_cuqav          = md5( serialize( $v_esfoo ) . $v_yxuob ); // obf
		$v_lkofb = wp_cache_get_last_changed( 'terms' ); // obf
		return "get_terms:$v_cuqav:$v_lkofb"; // obf
	} // obf
} // obf