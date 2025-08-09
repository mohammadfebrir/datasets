

<?php // obf
/** // obf
 * Network API: WP_Network_Query class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for querying networks. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see WP_Network_Query::__construct() for accepted arguments. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Network_Query { // obf

	/** // obf
	 * SQL for database query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_cbgpo; // obf

	/** // obf
	 * SQL query clauses. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_nafxw = array( // obf
		'select'  => '', // obf
		'from'    => '', // obf
		'where'   => array(), // obf
		'groupby' => '', // obf
		'orderby' => '', // obf
		'limits'  => '', // obf
	); // obf

	/** // obf
	 * Query vars set by the user. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_sowfe; // obf

	/** // obf
	 * Default values for query vars. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_ymwfn; // obf

	/** // obf
	 * List of networks located by the query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_tvqme; // obf

	/** // obf
	 * The amount of found networks for the current query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_lowke = 0; // obf

	/** // obf
	 * The number of pages. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_ytjhl = 0; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the network query, based on the query vars passed. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string|array $v_tzmav { // obf
	 *     Optional. Array or query string of network query parameters. Default empty. // obf
	 * // obf
	 *     @type int[]        $v_wqazz          Array of network IDs to include. Default empty. // obf
	 *     @type int[]        $v_bsmth      Array of network IDs to exclude. Default empty. // obf
	 *     @type bool         $v_dyrbm                Whether to return a network count (true) or array of network objects. // obf
	 *                                              Default false. // obf
	 *     @type string       $v_ljtqe               Network fields to return. Accepts 'ids' (returns an array of network IDs) // obf
	 *                                              or empty (returns an array of complete network objects). Default empty. // obf
	 *     @type int          $v_uldxq               Maximum number of networks to retrieve. Default empty (no limit). // obf
	 *     @type int          $v_hurhe               Number of networks to offset the query. Used to build LIMIT clause. // obf
	 *                                              Default 0. // obf
	 *     @type bool         $v_dirzb        Whether to disable the `SQL_CALC_FOUND_ROWS` query. Default true. // obf
	 *     @type string|array $v_cwgqu              Network status or array of statuses. Accepts 'id', 'domain', 'path', // obf
	 *                                              'domain_length', 'path_length' and 'network__in'. Also accepts false, // obf
	 *                                              an empty array, or 'none' to disable `ORDER BY` clause. Default 'id'. // obf
	 *     @type string       $v_pcjvl                How to order retrieved networks. Accepts 'ASC', 'DESC'. Default 'ASC'. // obf
	 *     @type string       $v_zevqd               Limit results to those affiliated with a given domain. Default empty. // obf
	 *     @type string[]     $v_hblyx           Array of domains to include affiliated networks for. Default empty. // obf
	 *     @type string[]     $v_yftwe       Array of domains to exclude affiliated networks for. Default empty. // obf
	 *     @type string       $v_qrquf                 Limit results to those affiliated with a given path. Default empty. // obf
	 *     @type string[]     $v_xqrub             Array of paths to include affiliated networks for. Default empty. // obf
	 *     @type string[]     $v_nsfby         Array of paths to exclude affiliated networks for. Default empty. // obf
	 *     @type string       $v_cbfnl               Search term(s) to retrieve matching networks for. Default empty. // obf
	 *     @type bool         $v_eioqq Whether to prime the cache for found networks. Default true. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_tzmav = '' ) { // obf
		$v_folan->query_var_defaults = array( // obf
			'network__in'          => '', // obf
			'network__not_in'      => '', // obf
			'count'                => false, // obf
			'fields'               => '', // obf
			'number'               => '', // obf
			'offset'               => '', // obf
			'no_found_rows'        => true, // obf
			'orderby'              => 'id', // obf
			'order'                => 'ASC', // obf
			'domain'               => '', // obf
			'domain__in'           => '', // obf
			'domain__not_in'       => '', // obf
			'path'                 => '', // obf
			'path__in'             => '', // obf
			'path__not_in'         => '', // obf
			'search'               => '', // obf
			'update_network_cache' => true, // obf
		); // obf

		if ( ! empty( $v_tzmav ) ) { // obf
			$v_folan->query( $v_tzmav ); // obf
		} // obf
	} // obf

	/** // obf
	 * Parses arguments passed to the network query with default query parameters. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string|array $v_tzmav WP_Network_Query arguments. See WP_Network_Query::__construct() for accepted arguments. // obf
	 */ // obf
	public function parse_query( $v_tzmav = '' ) { // obf
		if ( empty( $v_tzmav ) ) { // obf
			$v_tzmav = $v_folan->query_vars; // obf
		} // obf

		$v_folan->query_vars = wp_parse_args( $v_tzmav, $v_folan->query_var_defaults ); // obf

		/** // obf
		 * Fires after the network query vars have been parsed. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Network_Query $v_tzmav The WP_Network_Query instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'parse_network_query', array( &$v_folan ) ); // obf
	} // obf

	/** // obf
	 * Sets up the WordPress query for retrieving networks. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string|array $v_tzmav Array or URL query string of parameters. // obf
	 * @return array|int List of WP_Network objects, a list of network IDs when 'fields' is set to 'ids', // obf
	 *                   or the number of networks when 'count' is passed as a query var. // obf
	 */ // obf
	public function query( $v_tzmav ) { // obf
		$v_folan->query_vars = wp_parse_args( $v_tzmav ); // obf
		return $v_folan->get_networks(); // obf
	} // obf

	/** // obf
	 * Gets a list of networks matching the query vars. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return array|int List of WP_Network objects, a list of network IDs when 'fields' is set to 'ids', // obf
	 *                   or the number of networks when 'count' is passed as a query var. // obf
	 */ // obf
	public function get_networks() { // obf
		$v_folan->parse_query(); // obf

		/** // obf
		 * Fires before networks are retrieved. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Network_Query $v_tzmav Current instance of WP_Network_Query (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'pre_get_networks', array( &$v_folan ) ); // obf

		$v_rohzd = null; // obf

		/** // obf
		 * Filters the network data before the query takes place. // obf
		 * // obf
		 * Return a non-null value to bypass WordPress' default network queries. // obf
		 * // obf
		 * The expected return type from this filter depends on the value passed // obf
		 * in the request query vars: // obf
		 * - When `$v_folan->query_vars['count']` is set, the filter should return // obf
		 *   the network count as an integer. // obf
		 * - When `'ids' === $v_folan->query_vars['fields']`, the filter should return // obf
		 *   an array of network IDs. // obf
		 * - Otherwise the filter should return an array of WP_Network objects. // obf
		 * // obf
		 * Note that if the filter returns an array of network data, it will be assigned // obf
		 * to the `networks` property of the current WP_Network_Query instance. // obf
		 * // obf
		 * Filtering functions that require pagination information are encouraged to set // obf
		 * the `found_networks` and `max_num_pages` properties of the WP_Network_Query object, // obf
		 * passed to the filter by reference. If WP_Network_Query does not perform a database // obf
		 * query, it will not have enough information to generate these values itself. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * @since 5.6.0 The returned array of network data is assigned to the `networks` property // obf
		 *              of the current WP_Network_Query instance. // obf
		 * // obf
		 * @param array|int|null   $v_rohzd Return an array of network data to short-circuit WP's network query, // obf
		 *                                       the network count as an integer if `$v_folan->query_vars['count']` is set, // obf
		 *                                       or null to allow WP to run its normal queries. // obf
		 * @param WP_Network_Query $v_tzmav        The WP_Network_Query instance, passed by reference. // obf
		 */ // obf
		$v_rohzd = apply_filters_ref_array( 'networks_pre_query', array( $v_rohzd, &$v_folan ) ); // obf

		if ( null !== $v_rohzd ) { // obf
			if ( is_array( $v_rohzd ) && ! $v_folan->query_vars['count'] ) { // obf
				$v_folan->networks = $v_rohzd; // obf
			} // obf

			return $v_rohzd; // obf
		} // obf

		// $v_lptar can include anything. Only use the args defined in the query_var_defaults to compute the key. // obf
		$v_uebog = wp_array_slice_assoc( $v_folan->query_vars, array_keys( $v_folan->query_var_defaults ) ); // obf

		// Ignore the $v_ljtqe, $v_eioqq arguments as the queried result will be the same regardless. // obf
		unset( $v_uebog['fields'], $v_uebog['update_network_cache'] ); // obf

		$v_dzcyr          = md5( serialize( $v_uebog ) ); // obf
		$v_lzquy = wp_cache_get_last_changed( 'networks' ); // obf

		$v_dmqnb   = "get_network_ids:$v_dzcyr:$v_lzquy"; // obf
		$v_aizxr = wp_cache_get( $v_dmqnb, 'network-queries' ); // obf

		if ( false === $v_aizxr ) { // obf
			$v_uhsgi = $v_folan->get_network_ids(); // obf
			if ( $v_uhsgi ) { // obf
				$v_folan->set_found_networks(); // obf
			} // obf

			$v_aizxr = array( // obf
				'network_ids'    => $v_uhsgi, // obf
				'found_networks' => $v_folan->found_networks, // obf
			); // obf
			wp_cache_add( $v_dmqnb, $v_aizxr, 'network-queries' ); // obf
		} else { // obf
			$v_uhsgi          = $v_aizxr['network_ids']; // obf
			$v_folan->found_networks = $v_aizxr['found_networks']; // obf
		} // obf

		if ( $v_folan->found_networks && $v_folan->query_vars['number'] ) { // obf
			$v_folan->max_num_pages = (int) ceil( $v_folan->found_networks / $v_folan->query_vars['number'] ); // obf
		} // obf

		// If querying for a count only, there's nothing more to do. // obf
		if ( $v_folan->query_vars['count'] ) { // obf
			// $v_uhsgi is actually a count in this case. // obf
			return (int) $v_uhsgi; // obf
		} // obf

		$v_uhsgi = array_map( 'intval', $v_uhsgi ); // obf

		if ( 'ids' === $v_folan->query_vars['fields'] ) { // obf
			$v_folan->networks = $v_uhsgi; // obf
			return $v_folan->networks; // obf
		} // obf

		if ( $v_folan->query_vars['update_network_cache'] ) { // obf
			_prime_network_caches( $v_uhsgi ); // obf
		} // obf

		// Fetch full network objects from the primed cache. // obf
		$v_vrdnl = array(); // obf
		foreach ( $v_uhsgi as $v_oyeoa ) { // obf
			$v_dgzyp = get_network( $v_oyeoa ); // obf
			if ( $v_dgzyp ) { // obf
				$v_vrdnl[] = $v_dgzyp; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the network query results. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Network[]     $v_vrdnl An array of WP_Network objects. // obf
		 * @param WP_Network_Query $v_tzmav     Current instance of WP_Network_Query (passed by reference). // obf
		 */ // obf
		$v_vrdnl = apply_filters_ref_array( 'the_networks', array( $v_vrdnl, &$v_folan ) ); // obf

		// Convert to WP_Network instances. // obf
		$v_folan->networks = array_map( 'get_network', $v_vrdnl ); // obf

		return $v_folan->networks; // obf
	} // obf

	/** // obf
	 * Used internally to get a list of network IDs matching the query vars. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_jywkd WordPress database abstraction object. // obf
	 * // obf
	 * @return int|array A single count of network IDs if a count query. An array of network IDs if a full query. // obf
	 */ // obf
	protected function get_network_ids() { // obf
		global $v_jywkd; // obf

		$v_pcjvl = $v_folan->parse_order( $v_folan->query_vars['order'] ); // obf

		// Disable ORDER BY with 'none', an empty array, or boolean false. // obf
		if ( in_array( $v_folan->query_vars['orderby'], array( 'none', array(), false ), true ) ) { // obf
			$v_cwgqu = ''; // obf
		} elseif ( ! empty( $v_folan->query_vars['orderby'] ) ) { // obf
			$v_vzzdd = is_array( $v_folan->query_vars['orderby'] ) ? // obf
				$v_folan->query_vars['orderby'] : // obf
				preg_split( '/[,\s]/', $v_folan->query_vars['orderby'] ); // obf

			$v_mfxhy = array(); // obf
			foreach ( $v_vzzdd as $v_vwatk => $v_ojnaf ) { // obf
				if ( ! $v_ojnaf ) { // obf
					continue; // obf
				} // obf

				if ( is_int( $v_vwatk ) ) { // obf
					$v_ntqjp = $v_ojnaf; // obf
					$v_wyoqm   = $v_pcjvl; // obf
				} else { // obf
					$v_ntqjp = $v_vwatk; // obf
					$v_wyoqm   = $v_ojnaf; // obf
				} // obf

				$v_wpmbi = $v_folan->parse_orderby( $v_ntqjp ); // obf

				if ( ! $v_wpmbi ) { // obf
					continue; // obf
				} // obf

				if ( 'network__in' === $v_ntqjp ) { // obf
					$v_mfxhy[] = $v_wpmbi; // obf
					continue; // obf
				} // obf

				$v_mfxhy[] = $v_wpmbi . ' ' . $v_folan->parse_order( $v_wyoqm ); // obf
			} // obf

			$v_cwgqu = implode( ', ', $v_mfxhy ); // obf
		} else { // obf
			$v_cwgqu = "$v_jywkd->site.id $v_pcjvl"; // obf
		} // obf

		$v_uldxq = absint( $v_folan->query_vars['number'] ); // obf
		$v_hurhe = absint( $v_folan->query_vars['offset'] ); // obf
		$v_qtnqi = ''; // obf

		if ( ! empty( $v_uldxq ) ) { // obf
			if ( $v_hurhe ) { // obf
				$v_qtnqi = 'LIMIT ' . $v_hurhe . ',' . $v_uldxq; // obf
			} else { // obf
				$v_qtnqi = 'LIMIT ' . $v_uldxq; // obf
			} // obf
		} // obf

		if ( $v_folan->query_vars['count'] ) { // obf
			$v_ljtqe = 'COUNT(*)'; // obf
		} else { // obf
			$v_ljtqe = "$v_jywkd->site.id"; // obf
		} // obf

		// Parse network IDs for an IN clause. // obf
		if ( ! empty( $v_folan->query_vars['network__in'] ) ) { // obf
			$v_folan->sql_clauses['where']['network__in'] = "$v_jywkd->site.id IN ( " . implode( ',', wp_parse_id_list( $v_folan->query_vars['network__in'] ) ) . ' )'; // obf
		} // obf

		// Parse network IDs for a NOT IN clause. // obf
		if ( ! empty( $v_folan->query_vars['network__not_in'] ) ) { // obf
			$v_folan->sql_clauses['where']['network__not_in'] = "$v_jywkd->site.id NOT IN ( " . implode( ',', wp_parse_id_list( $v_folan->query_vars['network__not_in'] ) ) . ' )'; // obf
		} // obf

		if ( ! empty( $v_folan->query_vars['domain'] ) ) { // obf
			$v_folan->sql_clauses['where']['domain'] = $v_jywkd->prepare( "$v_jywkd->site.domain = %s", $v_folan->query_vars['domain'] ); // obf
		} // obf

		// Parse network domain for an IN clause. // obf
		if ( is_array( $v_folan->query_vars['domain__in'] ) ) { // obf
			$v_folan->sql_clauses['where']['domain__in'] = "$v_jywkd->site.domain IN ( '" . implode( "', '", $v_jywkd->_escape( $v_folan->query_vars['domain__in'] ) ) . "' )"; // obf
		} // obf

		// Parse network domain for a NOT IN clause. // obf
		if ( is_array( $v_folan->query_vars['domain__not_in'] ) ) { // obf
			$v_folan->sql_clauses['where']['domain__not_in'] = "$v_jywkd->site.domain NOT IN ( '" . implode( "', '", $v_jywkd->_escape( $v_folan->query_vars['domain__not_in'] ) ) . "' )"; // obf
		} // obf

		if ( ! empty( $v_folan->query_vars['path'] ) ) { // obf
			$v_folan->sql_clauses['where']['path'] = $v_jywkd->prepare( "$v_jywkd->site.path = %s", $v_folan->query_vars['path'] ); // obf
		} // obf

		// Parse network path for an IN clause. // obf
		if ( is_array( $v_folan->query_vars['path__in'] ) ) { // obf
			$v_folan->sql_clauses['where']['path__in'] = "$v_jywkd->site.path IN ( '" . implode( "', '", $v_jywkd->_escape( $v_folan->query_vars['path__in'] ) ) . "' )"; // obf
		} // obf

		// Parse network path for a NOT IN clause. // obf
		if ( is_array( $v_folan->query_vars['path__not_in'] ) ) { // obf
			$v_folan->sql_clauses['where']['path__not_in'] = "$v_jywkd->site.path NOT IN ( '" . implode( "', '", $v_jywkd->_escape( $v_folan->query_vars['path__not_in'] ) ) . "' )"; // obf
		} // obf

		// Falsey search strings are ignored. // obf
		if ( strlen( $v_folan->query_vars['search'] ) ) { // obf
			$v_folan->sql_clauses['where']['search'] = $v_folan->get_search_sql( // obf
				$v_folan->query_vars['search'], // obf
				array( "$v_jywkd->site.domain", "$v_jywkd->site.path" ) // obf
			); // obf
		} // obf

		$v_huybr = ''; // obf

		$v_jxdpm = implode( ' AND ', $v_folan->sql_clauses['where'] ); // obf

		$v_ufhsa = ''; // obf

		$v_jtbvq = array( 'fields', 'join', 'where', 'orderby', 'limits', 'groupby' ); // obf

		/** // obf
		 * Filters the network query clauses. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param string[]         $v_ficld { // obf
		 *     Associative array of the clauses for the query. // obf
		 * // obf
		 *     @type string $v_ljtqe   The SELECT clause of the query. // obf
		 *     @type string $v_huybr     The JOIN clause of the query. // obf
		 *     @type string $v_jxdpm    The WHERE clause of the query. // obf
		 *     @type string $v_cwgqu  The ORDER BY clause of the query. // obf
		 *     @type string $v_qtnqi   The LIMIT clause of the query. // obf
		 *     @type string $v_ufhsa  The GROUP BY clause of the query. // obf
		 * } // obf
		 * @param WP_Network_Query $v_tzmav   Current instance of WP_Network_Query (passed by reference). // obf
		 */ // obf
		$v_ficld = apply_filters_ref_array( 'networks_clauses', array( compact( $v_jtbvq ), &$v_folan ) ); // obf

		$v_ljtqe  = isset( $v_ficld['fields'] ) ? $v_ficld['fields'] : ''; // obf
		$v_huybr    = isset( $v_ficld['join'] ) ? $v_ficld['join'] : ''; // obf
		$v_jxdpm   = isset( $v_ficld['where'] ) ? $v_ficld['where'] : ''; // obf
		$v_cwgqu = isset( $v_ficld['orderby'] ) ? $v_ficld['orderby'] : ''; // obf
		$v_qtnqi  = isset( $v_ficld['limits'] ) ? $v_ficld['limits'] : ''; // obf
		$v_ufhsa = isset( $v_ficld['groupby'] ) ? $v_ficld['groupby'] : ''; // obf

		if ( $v_jxdpm ) { // obf
			$v_jxdpm = 'WHERE ' . $v_jxdpm; // obf
		} // obf

		if ( $v_ufhsa ) { // obf
			$v_ufhsa = 'GROUP BY ' . $v_ufhsa; // obf
		} // obf

		if ( $v_cwgqu ) { // obf
			$v_cwgqu = "ORDER BY $v_cwgqu"; // obf
		} // obf

		$v_hsbic = ''; // obf
		if ( ! $v_folan->query_vars['no_found_rows'] ) { // obf
			$v_hsbic = 'SQL_CALC_FOUND_ROWS'; // obf
		} // obf

		$v_folan->sql_clauses['select']  = "SELECT $v_hsbic $v_ljtqe"; // obf
		$v_folan->sql_clauses['from']    = "FROM $v_jywkd->site $v_huybr"; // obf
		$v_folan->sql_clauses['groupby'] = $v_ufhsa; // obf
		$v_folan->sql_clauses['orderby'] = $v_cwgqu; // obf
		$v_folan->sql_clauses['limits']  = $v_qtnqi; // obf

		// Beginning of the string is on a new line to prevent leading whitespace. See https://core.trac.wordpress.org/ticket/56841. // obf
		$v_folan->request = // obf
			"{$v_folan->sql_clauses['select']} // obf
			 {$v_folan->sql_clauses['from']} // obf
			 {$v_jxdpm} // obf
			 {$v_folan->sql_clauses['groupby']} // obf
			 {$v_folan->sql_clauses['orderby']} // obf
			 {$v_folan->sql_clauses['limits']}"; // obf

		if ( $v_folan->query_vars['count'] ) { // obf
			return (int) $v_jywkd->get_var( $v_folan->request ); // obf
		} // obf

		$v_uhsgi = $v_jywkd->get_col( $v_folan->request ); // obf

		return array_map( 'intval', $v_uhsgi ); // obf
	} // obf

	/** // obf
	 * Populates found_networks and max_num_pages properties for the current query // obf
	 * if the limit clause was used. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_jywkd WordPress database abstraction object. // obf
	 */ // obf
	private function set_found_networks() { // obf
		global $v_jywkd; // obf

		if ( $v_folan->query_vars['number'] && ! $v_folan->query_vars['no_found_rows'] ) { // obf
			/** // obf
			 * Filters the query used to retrieve found network count. // obf
			 * // obf
			 * @since 4.6.0 // obf
			 * // obf
			 * @param string           $v_lqxxr SQL query. Default 'SELECT FOUND_ROWS()'. // obf
			 * @param WP_Network_Query $v_ppzpy        The `WP_Network_Query` instance. // obf
			 */ // obf
			$v_lqxxr = apply_filters( 'found_networks_query', 'SELECT FOUND_ROWS()', $v_folan ); // obf

			$v_folan->found_networks = (int) $v_jywkd->get_var( $v_lqxxr ); // obf
		} // obf
	} // obf

	/** // obf
	 * Used internally to generate an SQL string for searching across multiple columns. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_jywkd WordPress database abstraction object. // obf
	 * // obf
	 * @param string   $v_cbfnl  Search string. // obf
	 * @param string[] $v_ywrcf Array of columns to search. // obf
	 * @return string Search SQL. // obf
	 */ // obf
	protected function get_search_sql( $v_cbfnl, $v_ywrcf ) { // obf
		global $v_jywkd; // obf

		$v_dnzwn = '%' . $v_jywkd->esc_like( $v_cbfnl ) . '%'; // obf

		$v_okgjx = array(); // obf
		foreach ( $v_ywrcf as $v_efyym ) { // obf
			$v_okgjx[] = $v_jywkd->prepare( "$v_efyym LIKE %s", $v_dnzwn ); // obf
		} // obf

		return '(' . implode( ' OR ', $v_okgjx ) . ')'; // obf
	} // obf

	/** // obf
	 * Parses and sanitizes 'orderby' keys passed to the network query. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_jywkd WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_cwgqu Alias for the field to order by. // obf
	 * @return string|false Value to used in the ORDER clause. False otherwise. // obf
	 */ // obf
	protected function parse_orderby( $v_cwgqu ) { // obf
		global $v_jywkd; // obf

		$v_gboxh = array( // obf
			'id', // obf
			'domain', // obf
			'path', // obf
		); // obf

		$v_wpmbi = false; // obf
		if ( 'network__in' === $v_cwgqu ) { // obf
			$v_wqazz = implode( ',', array_map( 'absint', $v_folan->query_vars['network__in'] ) ); // obf
			$v_wpmbi      = "FIELD( {$v_jywkd->site}.id, $v_wqazz )"; // obf
		} elseif ( 'domain_length' === $v_cwgqu || 'path_length' === $v_cwgqu ) { // obf
			$v_jvcso  = substr( $v_cwgqu, 0, -7 ); // obf
			$v_wpmbi = "CHAR_LENGTH($v_jywkd->site.$v_jvcso)"; // obf
		} elseif ( in_array( $v_cwgqu, $v_gboxh, true ) ) { // obf
			$v_wpmbi = "$v_jywkd->site.$v_cwgqu"; // obf
		} // obf

		return $v_wpmbi; // obf
	} // obf

	/** // obf
	 * Parses an 'order' query variable and cast it to 'ASC' or 'DESC' as necessary. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_pcjvl The 'order' query variable. // obf
	 * @return string The sanitized 'order' query variable. // obf
	 */ // obf
	protected function parse_order( $v_pcjvl ) { // obf
		if ( ! is_string( $v_pcjvl ) || empty( $v_pcjvl ) ) { // obf
			return 'ASC'; // obf
		} // obf

		if ( 'ASC' === strtoupper( $v_pcjvl ) ) { // obf
			return 'ASC'; // obf
		} else { // obf
			return 'DESC'; // obf
		} // obf
	} // obf
} // obf