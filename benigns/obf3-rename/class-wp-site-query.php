
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Site API: WP_Site_Query class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sites // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for querying sites. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see WP_Site_Query::__construct() for accepted arguments. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Site_Query { // obf

	/** // obf
	 * SQL for database query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_demvn; // obf

	/** // obf
	 * SQL query clauses. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_vttsh = array( // obf
		'select'  => '', // obf
		'from'    => '', // obf
		'where'   => array(), // obf
		'groupby' => '', // obf
		'orderby' => '', // obf
		'limits'  => '', // obf
	); // obf

	/** // obf
	 * Metadata query container. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * @var WP_Meta_Query // obf
	 */ // obf
	public $v_xqncm = false; // obf

	/** // obf
	 * Metadata query clauses. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_dcsfq; // obf

	/** // obf
	 * Date query container. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var WP_Date_Query A date query instance. // obf
	 */ // obf
	public $v_nibpe = false; // obf

	/** // obf
	 * Query vars set by the user. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_uvotp; // obf

	/** // obf
	 * Default values for query vars. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_blsvl; // obf

	/** // obf
	 * List of sites located by the query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_lvgdl; // obf

	/** // obf
	 * The amount of found sites for the current query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_ymwun = 0; // obf

	/** // obf
	 * The number of pages. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_kwioc = 0; // obf

	/** // obf
	 * Sets up the site query, based on the query vars passed. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @since 4.8.0 Introduced the 'lang_id', 'lang__in', and 'lang__not_in' parameters. // obf
	 * @since 5.1.0 Introduced the 'update_site_meta_cache', 'meta_query', 'meta_key', // obf
	 *              'meta_compare_key', 'meta_value', 'meta_type', and 'meta_compare' parameters. // obf
	 * @since 5.3.0 Introduced the 'meta_type_key' parameter. // obf
	 * // obf
	 * @param string|array $v_hqovp { // obf
	 *     Optional. Array or query string of site query parameters. Default empty. // obf
	 * // obf
	 *     @type int[]           $v_holvg               Array of site IDs to include. Default empty. // obf
	 *     @type int[]           $v_jpqmb           Array of site IDs to exclude. Default empty. // obf
	 *     @type bool            $v_zxvge                  Whether to return a site count (true) or array of site objects. // obf
	 *                                                   Default false. // obf
	 *     @type array           $v_nibpe             Date query clauses to limit sites by. See WP_Date_Query. // obf
	 *                                                   Default null. // obf
	 *     @type string          $v_ectvn                 Site fields to return. Accepts 'ids' (returns an array of site IDs) // obf
	 *                                                   or empty (returns an array of complete site objects). Default empty. // obf
	 *     @type int             $v_oegto                     A site ID to only return that site. Default empty. // obf
	 *     @type int             $v_jkkoj                 Maximum number of sites to retrieve. Default 100. // obf
	 *     @type int             $v_wzhrn                 Number of sites to offset the query. Used to build LIMIT clause. // obf
	 *                                                   Default 0. // obf
	 *     @type bool            $v_qpyym          Whether to disable the `SQL_CALC_FOUND_ROWS` query. Default true. // obf
	 *     @type string|array    $v_hqwpp                Site status or array of statuses. Accepts: // obf
	 *                                                   - 'id' // obf
	 *                                                   - 'domain' // obf
	 *                                                   - 'path' // obf
	 *                                                   - 'network_id' // obf
	 *                                                   - 'last_updated' // obf
	 *                                                   - 'registered' // obf
	 *                                                   - 'domain_length' // obf
	 *                                                   - 'path_length' // obf
	 *                                                   - 'site__in' // obf
	 *                                                   - 'network__in' // obf
	 *                                                   - 'deleted' // obf
	 *                                                   - 'mature' // obf
	 *                                                   - 'spam' // obf
	 *                                                   - 'archived' // obf
	 *                                                   - 'public' // obf
	 *                                                   - false, an empty array, or 'none' to disable `ORDER BY` clause. // obf
	 *                                                   Default 'id'. // obf
	 *     @type string          $v_bnmaa                  How to order retrieved sites. Accepts 'ASC', 'DESC'. Default 'ASC'. // obf
	 *     @type int             $v_vcipe             Limit results to those affiliated with a given network ID. If 0, // obf
	 *                                                   include all networks. Default 0. // obf
	 *     @type int[]           $v_vzhxb            Array of network IDs to include affiliated sites for. Default empty. // obf
	 *     @type int[]           $v_iuezg        Array of network IDs to exclude affiliated sites for. Default empty. // obf
	 *     @type string          $v_kymyu                 Limit results to those affiliated with a given domain. Default empty. // obf
	 *     @type string[]        $v_gqzcg             Array of domains to include affiliated sites for. Default empty. // obf
	 *     @type string[]        $v_nuboj         Array of domains to exclude affiliated sites for. Default empty. // obf
	 *     @type string          $v_pkjmg                   Limit results to those affiliated with a given path. Default empty. // obf
	 *     @type string[]        $v_uarmn               Array of paths to include affiliated sites for. Default empty. // obf
	 *     @type string[]        $v_tjtuh           Array of paths to exclude affiliated sites for. Default empty. // obf
	 *     @type int             $v_mjpap                 Limit results to public sites. Accepts 1 or 0. Default empty. // obf
	 *     @type int             $v_gvasy               Limit results to archived sites. Accepts 1 or 0. Default empty. // obf
	 *     @type int             $v_gjvtr                 Limit results to mature sites. Accepts 1 or 0. Default empty. // obf
	 *     @type int             $v_aluor                   Limit results to spam sites. Accepts 1 or 0. Default empty. // obf
	 *     @type int             $v_xudjd                Limit results to deleted sites. Accepts 1 or 0. Default empty. // obf
	 *     @type int             $v_vlexj                Limit results to a language ID. Default empty. // obf
	 *     @type string[]        $v_biiug               Array of language IDs to include affiliated sites for. Default empty. // obf
	 *     @type string[]        $v_btdvx           Array of language IDs to exclude affiliated sites for. Default empty. // obf
	 *     @type string          $v_nmefu                 Search term(s) to retrieve matching sites for. Default empty. // obf
	 *     @type string[]        $v_qkatq         Array of column names to be searched. Accepts 'domain' and 'path'. // obf
	 *                                                   Default empty array. // obf
	 *     @type bool            $v_hnlja      Whether to prime the cache for found sites. Default true. // obf
	 *     @type bool            $v_nkefa Whether to prime the metadata cache for found sites. Default true. // obf
	 *     @type string|string[] $v_atsib               Meta key or keys to filter by. // obf
	 *     @type string|string[] $v_ikftu             Meta value or values to filter by. // obf
	 *     @type string          $v_mmftl           MySQL operator used for comparing the meta value. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_gnxde       MySQL operator used for comparing the meta key. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_uioqv              MySQL data type that the meta_value column will be CAST to for comparisons. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_fiwht          MySQL data type that the meta_key column will be CAST to for comparisons. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type array           $v_xqncm             An associative array of WP_Meta_Query arguments. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_hqovp = '' ) { // obf
		$v_onczn->query_var_defaults = array( // obf
			'fields'                 => '', // obf
			'ID'                     => '', // obf
			'site__in'               => '', // obf
			'site__not_in'           => '', // obf
			'number'                 => 100, // obf
			'offset'                 => '', // obf
			'no_found_rows'          => true, // obf
			'orderby'                => 'id', // obf
			'order'                  => 'ASC', // obf
			'network_id'             => 0, // obf
			'network__in'            => '', // obf
			'network__not_in'        => '', // obf
			'domain'                 => '', // obf
			'domain__in'             => '', // obf
			'domain__not_in'         => '', // obf
			'path'                   => '', // obf
			'path__in'               => '', // obf
			'path__not_in'           => '', // obf
			'public'                 => null, // obf
			'archived'               => null, // obf
			'mature'                 => null, // obf
			'spam'                   => null, // obf
			'deleted'                => null, // obf
			'lang_id'                => null, // obf
			'lang__in'               => '', // obf
			'lang__not_in'           => '', // obf
			'search'                 => '', // obf
			'search_columns'         => array(), // obf
			'count'                  => false, // obf
			'date_query'             => null, // See WP_Date_Query. // obf
			'update_site_cache'      => true, // obf
			'update_site_meta_cache' => true, // obf
			'meta_query'             => '', // obf
			'meta_key'               => '', // obf
			'meta_value'             => '', // obf
			'meta_type'              => '', // obf
			'meta_compare'           => '', // obf
		); // obf

		if ( ! empty( $v_hqovp ) ) { // obf
			$v_onczn->query( $v_hqovp ); // obf
		} // obf
	} // obf

	/** // obf
	 * Parses arguments passed to the site query with default query parameters. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @see WP_Site_Query::__construct() // obf
	 * // obf
	 * @param string|array $v_hqovp Array or string of WP_Site_Query arguments. See WP_Site_Query::__construct(). // obf
	 */ // obf
	public function parse_query( $v_hqovp = '' ) { // obf
		if ( empty( $v_hqovp ) ) { // obf
			$v_hqovp = $v_onczn->query_vars; // obf
		} // obf

		$v_onczn->query_vars = wp_parse_args( $v_hqovp, $v_onczn->query_var_defaults ); // obf

		/** // obf
		 * Fires after the site query vars have been parsed. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Site_Query $v_hqovp The WP_Site_Query instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'parse_site_query', array( &$v_onczn ) ); // obf
	} // obf

	/** // obf
	 * Sets up the WordPress query for retrieving sites. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string|array $v_hqovp Array or URL query string of parameters. // obf
	 * @return WP_Site[]|int[]|int List of WP_Site objects, a list of site IDs when 'fields' is set to 'ids', // obf
	 *                             or the number of sites when 'count' is passed as a query var. // obf
	 */ // obf
	public function query( $v_hqovp ) { // obf
		$v_onczn->query_vars = wp_parse_args( $v_hqovp ); // obf

		return $v_onczn->get_sites(); // obf
	} // obf

	/** // obf
	 * Retrieves a list of sites matching the query vars. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_pqxcq WordPress database abstraction object. // obf
	 * // obf
	 * @return WP_Site[]|int[]|int List of WP_Site objects, a list of site IDs when 'fields' is set to 'ids', // obf
	 *                             or the number of sites when 'count' is passed as a query var. // obf
	 */ // obf
	public function get_sites() { // obf
		global $v_pqxcq; // obf

		$v_onczn->parse_query(); // obf

		// Parse meta query. // obf
		$v_onczn->meta_query = new WP_Meta_Query(); // obf
		$v_onczn->meta_query->parse_query_vars( $v_onczn->query_vars ); // obf

		/** // obf
		 * Fires before sites are retrieved. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Site_Query $v_hqovp Current instance of WP_Site_Query (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'pre_get_sites', array( &$v_onczn ) ); // obf

		// Reparse query vars, in case they were modified in a 'pre_get_sites' callback. // obf
		$v_onczn->meta_query->parse_query_vars( $v_onczn->query_vars ); // obf
		if ( ! empty( $v_onczn->meta_query->queries ) ) { // obf
			$v_onczn->meta_query_clauses = $v_onczn->meta_query->get_sql( 'blog', $v_pqxcq->blogs, 'blog_id', $v_onczn ); // obf
		} // obf

		$v_umavx = null; // obf

		/** // obf
		 * Filters the site data before the get_sites query takes place. // obf
		 * // obf
		 * Return a non-null value to bypass WordPress' default site queries. // obf
		 * // obf
		 * The expected return type from this filter depends on the value passed // obf
		 * in the request query vars: // obf
		 * - When `$v_onczn->query_vars['count']` is set, the filter should return // obf
		 *   the site count as an integer. // obf
		 * - When `'ids' === $v_onczn->query_vars['fields']`, the filter should return // obf
		 *   an array of site IDs. // obf
		 * - Otherwise the filter should return an array of WP_Site objects. // obf
		 * // obf
		 * Note that if the filter returns an array of site data, it will be assigned // obf
		 * to the `sites` property of the current WP_Site_Query instance. // obf
		 * // obf
		 * Filtering functions that require pagination information are encouraged to set // obf
		 * the `found_sites` and `max_num_pages` properties of the WP_Site_Query object, // obf
		 * passed to the filter by reference. If WP_Site_Query does not perform a database // obf
		 * query, it will not have enough information to generate these values itself. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * @since 5.6.0 The returned array of site data is assigned to the `sites` property // obf
		 *              of the current WP_Site_Query instance. // obf
		 * // obf
		 * @param WP_Site[]|int[]|int|null $v_umavx Return an array of site data to short-circuit WP's site query, // obf
		 *                                            the site count as an integer if `$v_onczn->query_vars['count']` is set, // obf
		 *                                            or null to run the normal queries. // obf
		 * @param WP_Site_Query            $v_hqovp     The WP_Site_Query instance, passed by reference. // obf
		 */ // obf
		$v_umavx = apply_filters_ref_array( 'sites_pre_query', array( $v_umavx, &$v_onczn ) ); // obf

		if ( null !== $v_umavx ) { // obf
			if ( is_array( $v_umavx ) && ! $v_onczn->query_vars['count'] ) { // obf
				$v_onczn->sites = $v_umavx; // obf
			} // obf

			return $v_umavx; // obf
		} // obf

		// $v_xxmme can include anything. Only use the args defined in the query_var_defaults to compute the key. // obf
		$v_qdkfh = wp_array_slice_assoc( $v_onczn->query_vars, array_keys( $v_onczn->query_var_defaults ) ); // obf

		// Ignore the $v_ectvn, $v_hnlja, $v_nkefa argument as the queried result will be the same regardless. // obf
		unset( $v_qdkfh['fields'], $v_qdkfh['update_site_cache'], $v_qdkfh['update_site_meta_cache'] ); // obf

		$v_dwjpl          = md5( serialize( $v_qdkfh ) ); // obf
		$v_uupqt = wp_cache_get_last_changed( 'sites' ); // obf

		$v_teyzy   = "get_sites:$v_dwjpl:$v_uupqt"; // obf
		$v_twvhk = wp_cache_get( $v_teyzy, 'site-queries' ); // obf

		if ( false === $v_twvhk ) { // obf
			$v_rxaek = $v_onczn->get_site_ids(); // obf
			if ( $v_rxaek ) { // obf
				$v_onczn->set_found_sites(); // obf
			} // obf

			$v_twvhk = array( // obf
				'site_ids'    => $v_rxaek, // obf
				'found_sites' => $v_onczn->found_sites, // obf
			); // obf
			wp_cache_add( $v_teyzy, $v_twvhk, 'site-queries' ); // obf
		} else { // obf
			$v_rxaek          = $v_twvhk['site_ids']; // obf
			$v_onczn->found_sites = $v_twvhk['found_sites']; // obf
		} // obf

		if ( $v_onczn->found_sites && $v_onczn->query_vars['number'] ) { // obf
			$v_onczn->max_num_pages = (int) ceil( $v_onczn->found_sites / $v_onczn->query_vars['number'] ); // obf
		} // obf

		// If querying for a count only, there's nothing more to do. // obf
		if ( $v_onczn->query_vars['count'] ) { // obf
			// $v_rxaek is actually a count in this case. // obf
			return (int) $v_rxaek; // obf
		} // obf

		$v_rxaek = array_map( 'intval', $v_rxaek ); // obf

		if ( $v_onczn->query_vars['update_site_meta_cache'] ) { // obf
			wp_lazyload_site_meta( $v_rxaek ); // obf
		} // obf

		if ( 'ids' === $v_onczn->query_vars['fields'] ) { // obf
			$v_onczn->sites = $v_rxaek; // obf

			return $v_onczn->sites; // obf
		} // obf

		// Prime site network caches. // obf
		if ( $v_onczn->query_vars['update_site_cache'] ) { // obf
			_prime_site_caches( $v_rxaek, false ); // obf
		} // obf

		// Fetch full site objects from the primed cache. // obf
		$v_uvtqr = array(); // obf
		foreach ( $v_rxaek as $v_ysxcc ) { // obf
			$v_zmyfj = get_site( $v_ysxcc ); // obf
			if ( $v_zmyfj ) { // obf
				$v_uvtqr[] = $v_zmyfj; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the site query results. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Site[]     $v_uvtqr An array of WP_Site objects. // obf
		 * @param WP_Site_Query $v_hqovp  Current instance of WP_Site_Query (passed by reference). // obf
		 */ // obf
		$v_uvtqr = apply_filters_ref_array( 'the_sites', array( $v_uvtqr, &$v_onczn ) ); // obf

		// Convert to WP_Site instances. // obf
		$v_onczn->sites = array_map( 'get_site', $v_uvtqr ); // obf

		return $v_onczn->sites; // obf
	} // obf

	/** // obf
	 * Used internally to get a list of site IDs matching the query vars. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_pqxcq WordPress database abstraction object. // obf
	 * // obf
	 * @return int|array A single count of site IDs if a count query. An array of site IDs if a full query. // obf
	 */ // obf
	protected function get_site_ids() { // obf
		global $v_pqxcq; // obf

		$v_bnmaa = $v_onczn->parse_order( $v_onczn->query_vars['order'] ); // obf

		// Disable ORDER BY with 'none', an empty array, or boolean false. // obf
		if ( in_array( $v_onczn->query_vars['orderby'], array( 'none', array(), false ), true ) ) { // obf
			$v_hqwpp = ''; // obf
		} elseif ( ! empty( $v_onczn->query_vars['orderby'] ) ) { // obf
			$v_wygyx = is_array( $v_onczn->query_vars['orderby'] ) ? // obf
				$v_onczn->query_vars['orderby'] : // obf
				preg_split( '/[,\s]/', $v_onczn->query_vars['orderby'] ); // obf

			$v_rjwfj = array(); // obf
			foreach ( $v_wygyx as $v_otsjq => $v_xswzn ) { // obf
				if ( ! $v_xswzn ) { // obf
					continue; // obf
				} // obf

				if ( is_int( $v_otsjq ) ) { // obf
					$v_fuupp = $v_xswzn; // obf
					$v_hkfyv   = $v_bnmaa; // obf
				} else { // obf
					$v_fuupp = $v_otsjq; // obf
					$v_hkfyv   = $v_xswzn; // obf
				} // obf

				$v_visfo = $v_onczn->parse_orderby( $v_fuupp ); // obf

				if ( ! $v_visfo ) { // obf
					continue; // obf
				} // obf

				if ( 'site__in' === $v_fuupp || 'network__in' === $v_fuupp ) { // obf
					$v_rjwfj[] = $v_visfo; // obf
					continue; // obf
				} // obf

				$v_rjwfj[] = $v_visfo . ' ' . $v_onczn->parse_order( $v_hkfyv ); // obf
			} // obf

			$v_hqwpp = implode( ', ', $v_rjwfj ); // obf
		} else { // obf
			$v_hqwpp = "{$v_pqxcq->blogs}.blog_id $v_bnmaa"; // obf
		} // obf

		$v_jkkoj = absint( $v_onczn->query_vars['number'] ); // obf
		$v_wzhrn = absint( $v_onczn->query_vars['offset'] ); // obf
		$v_tbzbj = ''; // obf

		if ( ! empty( $v_jkkoj ) ) { // obf
			if ( $v_wzhrn ) { // obf
				$v_tbzbj = 'LIMIT ' . $v_wzhrn . ',' . $v_jkkoj; // obf
			} else { // obf
				$v_tbzbj = 'LIMIT ' . $v_jkkoj; // obf
			} // obf
		} // obf

		if ( $v_onczn->query_vars['count'] ) { // obf
			$v_ectvn = 'COUNT(*)'; // obf
		} else { // obf
			$v_ectvn = "{$v_pqxcq->blogs}.blog_id"; // obf
		} // obf

		// Parse site IDs for an IN clause. // obf
		$v_ysxcc = absint( $v_onczn->query_vars['ID'] ); // obf
		if ( ! empty( $v_ysxcc ) ) { // obf
			$v_onczn->sql_clauses['where']['ID'] = $v_pqxcq->prepare( "{$v_pqxcq->blogs}.blog_id = %d", $v_ysxcc ); // obf
		} // obf

		// Parse site IDs for an IN clause. // obf
		if ( ! empty( $v_onczn->query_vars['site__in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['site__in'] = "{$v_pqxcq->blogs}.blog_id IN ( " . implode( ',', wp_parse_id_list( $v_onczn->query_vars['site__in'] ) ) . ' )'; // obf
		} // obf

		// Parse site IDs for a NOT IN clause. // obf
		if ( ! empty( $v_onczn->query_vars['site__not_in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['site__not_in'] = "{$v_pqxcq->blogs}.blog_id NOT IN ( " . implode( ',', wp_parse_id_list( $v_onczn->query_vars['site__not_in'] ) ) . ' )'; // obf
		} // obf

		$v_vcipe = absint( $v_onczn->query_vars['network_id'] ); // obf

		if ( ! empty( $v_vcipe ) ) { // obf
			$v_onczn->sql_clauses['where']['network_id'] = $v_pqxcq->prepare( 'site_id = %d', $v_vcipe ); // obf
		} // obf

		// Parse site network IDs for an IN clause. // obf
		if ( ! empty( $v_onczn->query_vars['network__in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['network__in'] = 'site_id IN ( ' . implode( ',', wp_parse_id_list( $v_onczn->query_vars['network__in'] ) ) . ' )'; // obf
		} // obf

		// Parse site network IDs for a NOT IN clause. // obf
		if ( ! empty( $v_onczn->query_vars['network__not_in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['network__not_in'] = 'site_id NOT IN ( ' . implode( ',', wp_parse_id_list( $v_onczn->query_vars['network__not_in'] ) ) . ' )'; // obf
		} // obf

		if ( ! empty( $v_onczn->query_vars['domain'] ) ) { // obf
			$v_onczn->sql_clauses['where']['domain'] = $v_pqxcq->prepare( 'domain = %s', $v_onczn->query_vars['domain'] ); // obf
		} // obf

		// Parse site domain for an IN clause. // obf
		if ( is_array( $v_onczn->query_vars['domain__in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['domain__in'] = "domain IN ( '" . implode( "', '", $v_pqxcq->_escape( $v_onczn->query_vars['domain__in'] ) ) . "' )"; // obf
		} // obf

		// Parse site domain for a NOT IN clause. // obf
		if ( is_array( $v_onczn->query_vars['domain__not_in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['domain__not_in'] = "domain NOT IN ( '" . implode( "', '", $v_pqxcq->_escape( $v_onczn->query_vars['domain__not_in'] ) ) . "' )"; // obf
		} // obf

		if ( ! empty( $v_onczn->query_vars['path'] ) ) { // obf
			$v_onczn->sql_clauses['where']['path'] = $v_pqxcq->prepare( 'path = %s', $v_onczn->query_vars['path'] ); // obf
		} // obf

		// Parse site path for an IN clause. // obf
		if ( is_array( $v_onczn->query_vars['path__in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['path__in'] = "path IN ( '" . implode( "', '", $v_pqxcq->_escape( $v_onczn->query_vars['path__in'] ) ) . "' )"; // obf
		} // obf

		// Parse site path for a NOT IN clause. // obf
		if ( is_array( $v_onczn->query_vars['path__not_in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['path__not_in'] = "path NOT IN ( '" . implode( "', '", $v_pqxcq->_escape( $v_onczn->query_vars['path__not_in'] ) ) . "' )"; // obf
		} // obf

		if ( is_numeric( $v_onczn->query_vars['archived'] ) ) { // obf
			$v_gvasy                               = absint( $v_onczn->query_vars['archived'] ); // obf
			$v_onczn->sql_clauses['where']['archived'] = $v_pqxcq->prepare( 'archived = %s ', absint( $v_gvasy ) ); // obf
		} // obf

		if ( is_numeric( $v_onczn->query_vars['mature'] ) ) { // obf
			$v_gjvtr                               = absint( $v_onczn->query_vars['mature'] ); // obf
			$v_onczn->sql_clauses['where']['mature'] = $v_pqxcq->prepare( 'mature = %d ', $v_gjvtr ); // obf
		} // obf

		if ( is_numeric( $v_onczn->query_vars['spam'] ) ) { // obf
			$v_aluor                               = absint( $v_onczn->query_vars['spam'] ); // obf
			$v_onczn->sql_clauses['where']['spam'] = $v_pqxcq->prepare( 'spam = %d ', $v_aluor ); // obf
		} // obf

		if ( is_numeric( $v_onczn->query_vars['deleted'] ) ) { // obf
			$v_xudjd                               = absint( $v_onczn->query_vars['deleted'] ); // obf
			$v_onczn->sql_clauses['where']['deleted'] = $v_pqxcq->prepare( 'deleted = %d ', $v_xudjd ); // obf
		} // obf

		if ( is_numeric( $v_onczn->query_vars['public'] ) ) { // obf
			$v_mjpap                               = absint( $v_onczn->query_vars['public'] ); // obf
			$v_onczn->sql_clauses['where']['public'] = $v_pqxcq->prepare( 'public = %d ', $v_mjpap ); // obf
		} // obf

		if ( is_numeric( $v_onczn->query_vars['lang_id'] ) ) { // obf
			$v_vlexj                               = absint( $v_onczn->query_vars['lang_id'] ); // obf
			$v_onczn->sql_clauses['where']['lang_id'] = $v_pqxcq->prepare( 'lang_id = %d ', $v_vlexj ); // obf
		} // obf

		// Parse site language IDs for an IN clause. // obf
		if ( ! empty( $v_onczn->query_vars['lang__in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['lang__in'] = 'lang_id IN ( ' . implode( ',', wp_parse_id_list( $v_onczn->query_vars['lang__in'] ) ) . ' )'; // obf
		} // obf

		// Parse site language IDs for a NOT IN clause. // obf
		if ( ! empty( $v_onczn->query_vars['lang__not_in'] ) ) { // obf
			$v_onczn->sql_clauses['where']['lang__not_in'] = 'lang_id NOT IN ( ' . implode( ',', wp_parse_id_list( $v_onczn->query_vars['lang__not_in'] ) ) . ' )'; // obf
		} // obf

		// Falsey search strings are ignored. // obf
		if ( strlen( $v_onczn->query_vars['search'] ) ) { // obf
			$v_qkatq = array(); // obf

			if ( $v_onczn->query_vars['search_columns'] ) { // obf
				$v_qkatq = array_intersect( $v_onczn->query_vars['search_columns'], array( 'domain', 'path' ) ); // obf
			} // obf

			if ( ! $v_qkatq ) { // obf
				$v_qkatq = array( 'domain', 'path' ); // obf
			} // obf

			/** // obf
			 * Filters the columns to search in a WP_Site_Query search. // obf
			 * // obf
			 * The default columns include 'domain' and 'path. // obf
			 * // obf
			 * @since 4.6.0 // obf
			 * // obf
			 * @param string[]      $v_qkatq Array of column names to be searched. // obf
			 * @param string        $v_nmefu         Text being searched. // obf
			 * @param WP_Site_Query $v_hqovp          The current WP_Site_Query instance. // obf
			 */ // obf
			$v_qkatq = apply_filters( 'site_search_columns', $v_qkatq, $v_onczn->query_vars['search'], $v_onczn ); // obf

			$v_onczn->sql_clauses['where']['search'] = $v_onczn->get_search_sql( $v_onczn->query_vars['search'], $v_qkatq ); // obf
		} // obf

		$v_nibpe = $v_onczn->query_vars['date_query']; // obf
		if ( ! empty( $v_nibpe ) && is_array( $v_nibpe ) ) { // obf
			$v_onczn->date_query = new WP_Date_Query( $v_nibpe, 'registered' ); // obf

			// Strip leading 'AND'. // obf
			$v_onczn->sql_clauses['where']['date_query'] = __fn_37772( '/^\s*AND\s*/', '', $v_onczn->date_query->get_sql() ); // obf
		} // obf

		$v_xxrkk    = ''; // obf
		$v_ihmfw = ''; // obf

		if ( ! empty( $v_onczn->meta_query_clauses ) ) { // obf
			$v_xxrkk .= $v_onczn->meta_query_clauses['join']; // obf

			// Strip leading 'AND'. // obf
			$v_onczn->sql_clauses['where']['meta_query'] = __fn_37772( '/^\s*AND\s*/', '', $v_onczn->meta_query_clauses['where'] ); // obf

			if ( ! $v_onczn->query_vars['count'] ) { // obf
				$v_ihmfw = "{$v_pqxcq->blogs}.blog_id"; // obf
			} // obf
		} // obf

		$v_jyaze = implode( ' AND ', $v_onczn->sql_clauses['where'] ); // obf

		$v_kknqu = array( 'fields', 'join', 'where', 'orderby', 'limits', 'groupby' ); // obf

		/** // obf
		 * Filters the site query clauses. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param string[]      $v_ziuwq { // obf
		 *     Associative array of the clauses for the query. // obf
		 * // obf
		 *     @type string $v_ectvn   The SELECT clause of the query. // obf
		 *     @type string $v_xxrkk     The JOIN clause of the query. // obf
		 *     @type string $v_jyaze    The WHERE clause of the query. // obf
		 *     @type string $v_hqwpp  The ORDER BY clause of the query. // obf
		 *     @type string $v_tbzbj   The LIMIT clause of the query. // obf
		 *     @type string $v_ihmfw  The GROUP BY clause of the query. // obf
		 * } // obf
		 * @param WP_Site_Query $v_hqovp   Current instance of WP_Site_Query (passed by reference). // obf
		 */ // obf
		$v_ziuwq = apply_filters_ref_array( 'sites_clauses', array( compact( $v_kknqu ), &$v_onczn ) ); // obf

		$v_ectvn  = isset( $v_ziuwq['fields'] ) ? $v_ziuwq['fields'] : ''; // obf
		$v_xxrkk    = isset( $v_ziuwq['join'] ) ? $v_ziuwq['join'] : ''; // obf
		$v_jyaze   = isset( $v_ziuwq['where'] ) ? $v_ziuwq['where'] : ''; // obf
		$v_hqwpp = isset( $v_ziuwq['orderby'] ) ? $v_ziuwq['orderby'] : ''; // obf
		$v_tbzbj  = isset( $v_ziuwq['limits'] ) ? $v_ziuwq['limits'] : ''; // obf
		$v_ihmfw = isset( $v_ziuwq['groupby'] ) ? $v_ziuwq['groupby'] : ''; // obf

		if ( $v_jyaze ) { // obf
			$v_jyaze = 'WHERE ' . $v_jyaze; // obf
		} // obf

		if ( $v_ihmfw ) { // obf
			$v_ihmfw = 'GROUP BY ' . $v_ihmfw; // obf
		} // obf

		if ( $v_hqwpp ) { // obf
			$v_hqwpp = "ORDER BY $v_hqwpp"; // obf
		} // obf

		$v_ypraw = ''; // obf
		if ( ! $v_onczn->query_vars['no_found_rows'] ) { // obf
			$v_ypraw = 'SQL_CALC_FOUND_ROWS'; // obf
		} // obf

		$v_onczn->sql_clauses['select']  = "SELECT $v_ypraw $v_ectvn"; // obf
		$v_onczn->sql_clauses['from']    = "FROM $v_pqxcq->blogs $v_xxrkk"; // obf
		$v_onczn->sql_clauses['groupby'] = $v_ihmfw; // obf
		$v_onczn->sql_clauses['orderby'] = $v_hqwpp; // obf
		$v_onczn->sql_clauses['limits']  = $v_tbzbj; // obf

		// Beginning of the string is on a new line to prevent leading whitespace. See https://core.trac.wordpress.org/ticket/56841. // obf
		$v_onczn->request = // obf
			"{$v_onczn->sql_clauses['select']} // obf
			 {$v_onczn->sql_clauses['from']} // obf
			 {$v_jyaze} // obf
			 {$v_onczn->sql_clauses['groupby']} // obf
			 {$v_onczn->sql_clauses['orderby']} // obf
			 {$v_onczn->sql_clauses['limits']}"; // obf

		if ( $v_onczn->query_vars['count'] ) { // obf
			return (int) $v_pqxcq->get_var( $v_onczn->request ); // obf
		} // obf

		$v_rxaek = $v_pqxcq->get_col( $v_onczn->request ); // obf

		return array_map( 'intval', $v_rxaek ); // obf
	} // obf

	/** // obf
	 * Populates found_sites and max_num_pages properties for the current query // obf
	 * if the limit clause was used. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_pqxcq WordPress database abstraction object. // obf
	 */ // obf
	private function set_found_sites() { // obf
		global $v_pqxcq; // obf

		if ( $v_onczn->query_vars['number'] && ! $v_onczn->query_vars['no_found_rows'] ) { // obf
			/** // obf
			 * Filters the query used to retrieve found site count. // obf
			 * // obf
			 * @since 4.6.0 // obf
			 * // obf
			 * @param string        $v_xglqq SQL query. Default 'SELECT FOUND_ROWS()'. // obf
			 * @param WP_Site_Query $v_hlexm        The `WP_Site_Query` instance. // obf
			 */ // obf
			$v_xglqq = apply_filters( 'found_sites_query', 'SELECT FOUND_ROWS()', $v_onczn ); // obf

			$v_onczn->found_sites = (int) $v_pqxcq->get_var( $v_xglqq ); // obf
		} // obf
	} // obf

	/** // obf
	 * Used internally to generate an SQL string for searching across multiple columns. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_pqxcq WordPress database abstraction object. // obf
	 * // obf
	 * @param string   $v_nmefu  Search string. // obf
	 * @param string[] $v_ysnlq Array of columns to search. // obf
	 * @return string Search SQL. // obf
	 */ // obf
	protected function get_search_sql( $v_nmefu, $v_ysnlq ) { // obf
		global $v_pqxcq; // obf

		if ( str_contains( $v_nmefu, '*' ) ) { // obf
			$v_mjwrh = '%' . implode( '%', array_map( array( $v_pqxcq, 'esc_like' ), explode( '*', $v_nmefu ) ) ) . '%'; // obf
		} else { // obf
			$v_mjwrh = '%' . $v_pqxcq->esc_like( $v_nmefu ) . '%'; // obf
		} // obf

		$v_jkvyl = array(); // obf
		foreach ( $v_ysnlq as $v_ionmy ) { // obf
			$v_jkvyl[] = $v_pqxcq->prepare( "$v_ionmy LIKE %s", $v_mjwrh ); // obf
		} // obf

		return '(' . implode( ' OR ', $v_jkvyl ) . ')'; // obf
	} // obf

	/** // obf
	 * Parses and sanitizes 'orderby' keys passed to the site query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_pqxcq WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_hqwpp Alias for the field to order by. // obf
	 * @return string|false Value to used in the ORDER clause. False otherwise. // obf
	 */ // obf
	protected function parse_orderby( $v_hqwpp ) { // obf
		global $v_pqxcq; // obf

		$v_visfo = false; // obf

		switch ( $v_hqwpp ) { // obf
			case 'site__in': // obf
				$v_holvg = implode( ',', array_map( 'absint', $v_onczn->query_vars['site__in'] ) ); // obf
				$v_visfo   = "FIELD( {$v_pqxcq->blogs}.blog_id, $v_holvg )"; // obf
				break; // obf
			case 'network__in': // obf
				$v_vzhxb = implode( ',', array_map( 'absint', $v_onczn->query_vars['network__in'] ) ); // obf
				$v_visfo      = "FIELD( {$v_pqxcq->blogs}.site_id, $v_vzhxb )"; // obf
				break; // obf
			case 'domain': // obf
			case 'last_updated': // obf
			case 'path': // obf
			case 'registered': // obf
			case 'deleted': // obf
			case 'spam': // obf
			case 'mature': // obf
			case 'archived': // obf
			case 'public': // obf
				$v_visfo = $v_hqwpp; // obf
				break; // obf
			case 'network_id': // obf
				$v_visfo = 'site_id'; // obf
				break; // obf
			case 'domain_length': // obf
				$v_visfo = 'CHAR_LENGTH(domain)'; // obf
				break; // obf
			case 'path_length': // obf
				$v_visfo = 'CHAR_LENGTH(path)'; // obf
				break; // obf
			case 'id': // obf
				$v_visfo = "{$v_pqxcq->blogs}.blog_id"; // obf
				break; // obf
		} // obf

		if ( ! empty( $v_visfo ) || empty( $v_onczn->meta_query_clauses ) ) { // obf
			return $v_visfo; // obf
		} // obf

		$v_zxaxi = $v_onczn->meta_query->get_clauses(); // obf
		if ( empty( $v_zxaxi ) ) { // obf
			return $v_visfo; // obf
		} // obf

		$v_apqtw = reset( $v_zxaxi ); // obf
		if ( ! empty( $v_apqtw['key'] ) && $v_apqtw['key'] === $v_hqwpp ) { // obf
			$v_hqwpp = 'meta_value'; // obf
		} // obf

		switch ( $v_hqwpp ) { // obf
			case 'meta_value': // obf
				if ( ! empty( $v_apqtw['type'] ) ) { // obf
					$v_visfo = "CAST({$v_apqtw['alias']}.meta_value AS {$v_apqtw['cast']})"; // obf
				} else { // obf
					$v_visfo = "{$v_apqtw['alias']}.meta_value"; // obf
				} // obf
				break; // obf
			case 'meta_value_num': // obf
				$v_visfo = "{$v_apqtw['alias']}.meta_value+0"; // obf
				break; // obf
			default: // obf
				if ( isset( $v_zxaxi[ $v_hqwpp ] ) ) { // obf
					$v_fdfua = $v_zxaxi[ $v_hqwpp ]; // obf
					$v_visfo      = "CAST({$v_fdfua['alias']}.meta_value AS {$v_fdfua['cast']})"; // obf
				} // obf
		} // obf

		return $v_visfo; // obf
	} // obf

	/** // obf
	 * Parses an 'order' query variable and cast it to 'ASC' or 'DESC' as necessary. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_bnmaa The 'order' query variable. // obf
	 * @return string The sanitized 'order' query variable. // obf
	 */ // obf
	protected function parse_order( $v_bnmaa ) { // obf
		if ( ! is_string( $v_bnmaa ) || empty( $v_bnmaa ) ) { // obf
			return 'ASC'; // obf
		} // obf

		if ( 'ASC' === strtoupper( $v_bnmaa ) ) { // obf
			return 'ASC'; // obf
		} else { // obf
			return 'DESC'; // obf
		} // obf
	} // obf
} // obf