

<?php // obf
/** // obf
 * User API: WP_User_Query class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Users // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used for querying users. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_User_Query::prepare_query() for information on accepted arguments. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_User_Query { // obf

	/** // obf
	 * Query vars, after parsing // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_qtzum = array(); // obf

	/** // obf
	 * List of found user IDs. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_towlq; // obf

	/** // obf
	 * Total number of found users for the current query // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var int // obf
	 */ // obf
	private $v_lcrrp = 0; // obf

	/** // obf
	 * Metadata query container. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var WP_Meta_Query // obf
	 */ // obf
	public $v_ffogv = false; // obf

	/** // obf
	 * The SQL query used to fetch matching users. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_bibfm; // obf

	private $v_rrvcr = array( 'results', 'total_users' ); // obf

	// SQL clauses. // obf
	public $v_bxrkr; // obf
	public $v_vsztk; // obf
	public $v_umoon; // obf
	public $v_bkgqn; // obf
	public $v_uegch; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param null|string|array $v_bdzcv Optional. The query variables. // obf
	 *                                 See WP_User_Query::prepare_query() for information on accepted arguments. // obf
	 */ // obf
	public function __construct( $v_bdzcv = null ) { // obf
		if ( ! empty( $v_bdzcv ) ) { // obf
			$v_uvcrh->prepare_query( $v_bdzcv ); // obf
			$v_uvcrh->query(); // obf
		} // obf
	} // obf

	/** // obf
	 * Fills in missing query variables with default values. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string|array $v_ennwn Query vars, as passed to `WP_User_Query`. // obf
	 * @return array Complete query variables with undefined ones filled in with defaults. // obf
	 */ // obf
	public static function fill_query_vars( $v_ennwn ) { // obf
		$v_ldzhr = array( // obf
			'blog_id'             => get_current_blog_id(), // obf
			'role'                => '', // obf
			'role__in'            => array(), // obf
			'role__not_in'        => array(), // obf
			'capability'          => '', // obf
			'capability__in'      => array(), // obf
			'capability__not_in'  => array(), // obf
			'meta_key'            => '', // obf
			'meta_value'          => '', // obf
			'meta_compare'        => '', // obf
			'include'             => array(), // obf
			'exclude'             => array(), // obf
			'search'              => '', // obf
			'search_columns'      => array(), // obf
			'orderby'             => 'login', // obf
			'order'               => 'ASC', // obf
			'offset'              => '', // obf
			'number'              => '', // obf
			'paged'               => 1, // obf
			'count_total'         => true, // obf
			'fields'              => 'all', // obf
			'who'                 => '', // obf
			'has_published_posts' => null, // obf
			'nicename'            => '', // obf
			'nicename__in'        => array(), // obf
			'nicename__not_in'    => array(), // obf
			'login'               => '', // obf
			'login__in'           => array(), // obf
			'login__not_in'       => array(), // obf
			'cache_results'       => true, // obf
		); // obf

		return wp_parse_args( $v_ennwn, $v_ldzhr ); // obf
	} // obf

	/** // obf
	 * Prepares the query variables. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 4.1.0 Added the ability to order by the `include` value. // obf
	 * @since 4.2.0 Added 'meta_value_num' support for `$v_gefrt` parameter. Added multi-dimensional array syntax // obf
	 *              for `$v_gefrt` parameter. // obf
	 * @since 4.3.0 Added 'has_published_posts' parameter. // obf
	 * @since 4.4.0 Added 'paged', 'role__in', and 'role__not_in' parameters. The 'role' parameter was updated to // obf
	 *              permit an array or comma-separated list of values. The 'number' parameter was updated to support // obf
	 *              querying for all users with using -1. // obf
	 * @since 4.7.0 Added 'nicename', 'nicename__in', 'nicename__not_in', 'login', 'login__in', // obf
	 *              and 'login__not_in' parameters. // obf
	 * @since 5.1.0 Introduced the 'meta_compare_key' parameter. // obf
	 * @since 5.3.0 Introduced the 'meta_type_key' parameter. // obf
	 * @since 5.9.0 Added 'capability', 'capability__in', and 'capability__not_in' parameters. // obf
	 *              Deprecated the 'who' parameter. // obf
	 * @since 6.3.0 Added 'cache_results' parameter. // obf
	 * // obf
	 * @global wpdb     $v_yxmwc     WordPress database abstraction object. // obf
	 * @global WP_Roles $v_khfot WordPress role management object. // obf
	 * // obf
	 * @param string|array $v_bdzcv { // obf
	 *     Optional. Array or string of query parameters. // obf
	 * // obf
	 *     @type int             $v_moopq             The site ID. Default is the current site. // obf
	 *     @type string|string[] $v_ujwbe                An array or a comma-separated list of role names that users // obf
	 *                                                must match to be included in results. Note that this is // obf
	 *                                                an inclusive list: users must match *each* role. Default empty. // obf
	 *     @type string[]        $v_sjqed            An array of role names. Matched users must have at least one // obf
	 *                                                of these roles. Default empty array. // obf
	 *     @type string[]        $v_fdhxr        An array of role names to exclude. Users matching one or more // obf
	 *                                                of these roles will not be included in results. Default empty array. // obf
	 *     @type string|string[] $v_rlevd            Meta key or keys to filter by. // obf
	 *     @type string|string[] $v_nttxp          Meta value or values to filter by. // obf
	 *     @type string          $v_gmlvr        MySQL operator used for comparing the meta value. // obf
	 *                                                See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_irjao    MySQL operator used for comparing the meta key. // obf
	 *                                                See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_irkxo           MySQL data type that the meta_value column will be CAST to for comparisons. // obf
	 *                                                See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_ylkht       MySQL data type that the meta_key column will be CAST to for comparisons. // obf
	 *                                                See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type array           $v_ffogv          An associative array of WP_Meta_Query arguments. // obf
	 *                                                See WP_Meta_Query::__construct() for accepted values. // obf
	 *     @type string|string[] $v_ylhve          An array or a comma-separated list of capability names that users // obf
	 *                                                must match to be included in results. Note that this is // obf
	 *                                                an inclusive list: users must match *each* capability. // obf
	 *                                                Does NOT work for capabilities not in the database or filtered // obf
	 *                                                via {@see 'map_meta_cap'}. Default empty. // obf
	 *     @type string[]        $v_wnyfz      An array of capability names. Matched users must have at least one // obf
	 *                                                of these capabilities. // obf
	 *                                                Does NOT work for capabilities not in the database or filtered // obf
	 *                                                via {@see 'map_meta_cap'}. Default empty array. // obf
	 *     @type string[]        $v_uwmmv  An array of capability names to exclude. Users matching one or more // obf
	 *                                                of these capabilities will not be included in results. // obf
	 *                                                Does NOT work for capabilities not in the database or filtered // obf
	 *                                                via {@see 'map_meta_cap'}. Default empty array. // obf
	 *     @type int[]           $v_rufhm             An array of user IDs to include. Default empty array. // obf
	 *     @type int[]           $v_ooler             An array of user IDs to exclude. Default empty array. // obf
	 *     @type string          $v_ftvhr              Search keyword. Searches for possible string matches on columns. // obf
	 *                                                When `$v_rohtw` is left empty, it tries to determine which // obf
	 *                                                column to search in based on search string. Default empty. // obf
	 *     @type string[]        $v_rohtw      Array of column names to be searched. Accepts 'ID', 'user_login', // obf
	 *                                                'user_email', 'user_url', 'user_nicename', 'display_name'. // obf
	 *                                                Default empty array. // obf
	 *     @type string|array    $v_gefrt             Field(s) to sort the retrieved users by. May be a single value, // obf
	 *                                                an array of values, or a multi-dimensional array with fields as // obf
	 *                                                keys and orders ('ASC' or 'DESC') as values. Accepted values are: // obf
	 *                                                - 'ID' // obf
	 *                                                - 'display_name' (or 'name') // obf
	 *                                                - 'include' // obf
	 *                                                - 'user_login' (or 'login') // obf
	 *                                                - 'login__in' // obf
	 *                                                - 'user_nicename' (or 'nicename') // obf
	 *                                                - 'nicename__in' // obf
	 *                                                - 'user_email' (or 'email') // obf
	 *                                                - 'user_url' (or 'url') // obf
	 *                                                - 'user_registered' (or 'registered') // obf
	 *                                                - 'post_count' // obf
	 *                                                - 'meta_value' // obf
	 *                                                - 'meta_value_num' // obf
	 *                                                - The value of `$v_rlevd` // obf
	 *                                                - An array key of `$v_ffogv` // obf
	 *                                                To use 'meta_value' or 'meta_value_num', `$v_rlevd` // obf
	 *                                                must be also be defined. Default 'user_login'. // obf
	 *     @type string          $v_hqshe               Designates ascending or descending order of users. Order values // obf
	 *                                                passed as part of an `$v_gefrt` array take precedence over this // obf
	 *                                                parameter. Accepts 'ASC', 'DESC'. Default 'ASC'. // obf
	 *     @type int             $v_fguzr              Number of users to offset in retrieved results. Can be used in // obf
	 *                                                conjunction with pagination. Default 0. // obf
	 *     @type int             $v_vashh              Number of users to limit the query for. Can be used in // obf
	 *                                                conjunction with pagination. Value -1 (all) is supported, but // obf
	 *                                                should be used with caution on larger sites. // obf
	 *                                                Default -1 (all users). // obf
	 *     @type int             $v_spymu               When used with number, defines the page of results to return. // obf
	 *                                                Default 1. // obf
	 *     @type bool            $v_fklis         Whether to count the total number of users found. If pagination // obf
	 *                                                is not needed, setting this to false can improve performance. // obf
	 *                                                Default true. // obf
	 *     @type string|string[] $v_memua              Which fields to return. Single or all fields (string), or array // obf
	 *                                                of fields. Accepts: // obf
	 *                                                - 'ID' // obf
	 *                                                - 'display_name' // obf
	 *                                                - 'user_login' // obf
	 *                                                - 'user_nicename' // obf
	 *                                                - 'user_email' // obf
	 *                                                - 'user_url' // obf
	 *                                                - 'user_registered' // obf
	 *                                                - 'user_pass' // obf
	 *                                                - 'user_activation_key' // obf
	 *                                                - 'user_status' // obf
	 *                                                - 'spam' (only available on multisite installs) // obf
	 *                                                - 'deleted' (only available on multisite installs) // obf
	 *                                                - 'all' for all fields and loads user meta. // obf
	 *                                                - 'all_with_meta' Deprecated. Use 'all'. // obf
	 *                                                Default 'all'. // obf
	 *     @type string          $v_dhgev                 Deprecated, use `$v_ylhve` instead. // obf
	 *                                                Type of users to query. Accepts 'authors'. // obf
	 *                                                Default empty (all users). // obf
	 *     @type bool|string[]   $v_tjbji Pass an array of post types to filter results to users who have // obf
	 *                                                published posts in those post types. `true` is an alias for all // obf
	 *                                                public post types. // obf
	 *     @type string          $v_rbapk            The user nicename. Default empty. // obf
	 *     @type string[]        $v_bmztg        An array of nicenames to include. Users matching one of these // obf
	 *                                                nicenames will be included in results. Default empty array. // obf
	 *     @type string[]        $v_xjith    An array of nicenames to exclude. Users matching one of these // obf
	 *                                                nicenames will not be included in results. Default empty array. // obf
	 *     @type string          $v_jbxwj               The user login. Default empty. // obf
	 *     @type string[]        $v_mojwn           An array of logins to include. Users matching one of these // obf
	 *                                                logins will be included in results. Default empty array. // obf
	 *     @type string[]        $v_gfydi       An array of logins to exclude. Users matching one of these // obf
	 *                                                logins will not be included in results. Default empty array. // obf
	 *     @type bool            $v_lzkwv       Whether to cache user information. Default true. // obf
	 * } // obf
	 */ // obf
	public function prepare_query( $v_bdzcv = array() ) { // obf
		global $v_yxmwc, $v_khfot; // obf

		if ( empty( $v_uvcrh->query_vars ) || ! empty( $v_bdzcv ) ) { // obf
			$v_uvcrh->query_limit = null; // obf
			$v_uvcrh->query_vars  = $v_uvcrh->fill_query_vars( $v_bdzcv ); // obf
		} // obf

		/** // obf
		 * Fires before the WP_User_Query has been parsed. // obf
		 * // obf
		 * The passed WP_User_Query object contains the query variables, // obf
		 * not yet passed into SQL. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @param WP_User_Query $v_bdzcv Current instance of WP_User_Query (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'pre_get_users', array( &$v_uvcrh ) ); // obf

		// Ensure that query vars are filled after 'pre_get_users'. // obf
		$v_dtpzy =& $v_uvcrh->query_vars; // obf
		$v_dtpzy = $v_uvcrh->fill_query_vars( $v_dtpzy ); // obf

		$v_fzdtu = array( // obf
			'id', // obf
			'user_login', // obf
			'user_pass', // obf
			'user_nicename', // obf
			'user_email', // obf
			'user_url', // obf
			'user_registered', // obf
			'user_activation_key', // obf
			'user_status', // obf
			'display_name', // obf
		); // obf
		if ( is_multisite() ) { // obf
			$v_fzdtu[] = 'spam'; // obf
			$v_fzdtu[] = 'deleted'; // obf
		} // obf

		if ( is_array( $v_dtpzy['fields'] ) ) { // obf
			$v_dtpzy['fields'] = array_map( 'strtolower', $v_dtpzy['fields'] ); // obf
			$v_dtpzy['fields'] = array_intersect( array_unique( $v_dtpzy['fields'] ), $v_fzdtu ); // obf

			if ( empty( $v_dtpzy['fields'] ) ) { // obf
				$v_dtpzy['fields'] = array( 'id' ); // obf
			} // obf

			$v_uvcrh->query_fields = array(); // obf
			foreach ( $v_dtpzy['fields'] as $v_sjmil ) { // obf
				$v_sjmil                = 'id' === $v_sjmil ? 'ID' : sanitize_key( $v_sjmil ); // obf
				$v_uvcrh->query_fields[] = "$v_yxmwc->users.$v_sjmil"; // obf
			} // obf
			$v_uvcrh->query_fields = implode( ',', $v_uvcrh->query_fields ); // obf
		} elseif ( 'all_with_meta' === $v_dtpzy['fields'] || 'all' === $v_dtpzy['fields'] || ! in_array( $v_dtpzy['fields'], $v_fzdtu, true ) ) { // obf
			$v_uvcrh->query_fields = "$v_yxmwc->users.ID"; // obf
		} else { // obf
			$v_sjmil              = 'id' === strtolower( $v_dtpzy['fields'] ) ? 'ID' : sanitize_key( $v_dtpzy['fields'] ); // obf
			$v_uvcrh->query_fields = "$v_yxmwc->users.$v_sjmil"; // obf
		} // obf

		if ( isset( $v_dtpzy['count_total'] ) && $v_dtpzy['count_total'] ) { // obf
			$v_uvcrh->query_fields = 'SQL_CALC_FOUND_ROWS ' . $v_uvcrh->query_fields; // obf
		} // obf

		$v_uvcrh->query_from  = "FROM $v_yxmwc->users"; // obf
		$v_uvcrh->query_where = 'WHERE 1=1'; // obf

		// Parse and sanitize 'include', for use by 'orderby' as well as 'include' below. // obf
		if ( ! empty( $v_dtpzy['include'] ) ) { // obf
			$v_rufhm = wp_parse_id_list( $v_dtpzy['include'] ); // obf
		} else { // obf
			$v_rufhm = false; // obf
		} // obf

		$v_moopq = 0; // obf
		if ( isset( $v_dtpzy['blog_id'] ) ) { // obf
			$v_moopq = absint( $v_dtpzy['blog_id'] ); // obf
		} // obf

		if ( $v_dtpzy['has_published_posts'] && $v_moopq ) { // obf
			if ( true === $v_dtpzy['has_published_posts'] ) { // obf
				$v_oefdb = get_post_types( array( 'public' => true ) ); // obf
			} else { // obf
				$v_oefdb = (array) $v_dtpzy['has_published_posts']; // obf
			} // obf

			foreach ( $v_oefdb as &$v_syzct ) { // obf
				$v_syzct = $v_yxmwc->prepare( '%s', $v_syzct ); // obf
			} // obf

			$v_jgoaj        = $v_yxmwc->get_blog_prefix( $v_moopq ) . 'posts'; // obf
			$v_uvcrh->query_where .= " AND $v_yxmwc->users.ID IN ( SELECT DISTINCT $v_jgoaj.post_author FROM $v_jgoaj WHERE $v_jgoaj.post_status = 'publish' AND $v_jgoaj.post_type IN ( " . implode( ', ', $v_oefdb ) . ' ) )'; // obf
		} // obf

		// nicename // obf
		if ( '' !== $v_dtpzy['nicename'] ) { // obf
			$v_uvcrh->query_where .= $v_yxmwc->prepare( ' AND user_nicename = %s', $v_dtpzy['nicename'] ); // obf
		} // obf

		if ( ! empty( $v_dtpzy['nicename__in'] ) ) { // obf
			$v_xuilb = array_map( 'esc_sql', $v_dtpzy['nicename__in'] ); // obf
			$v_bmztg           = implode( "','", $v_xuilb ); // obf
			$v_uvcrh->query_where     .= " AND user_nicename IN ( '$v_bmztg' )"; // obf
		} // obf

		if ( ! empty( $v_dtpzy['nicename__not_in'] ) ) { // obf
			$v_dvcry = array_map( 'esc_sql', $v_dtpzy['nicename__not_in'] ); // obf
			$v_xjith           = implode( "','", $v_dvcry ); // obf
			$v_uvcrh->query_where         .= " AND user_nicename NOT IN ( '$v_xjith' )"; // obf
		} // obf

		// login // obf
		if ( '' !== $v_dtpzy['login'] ) { // obf
			$v_uvcrh->query_where .= $v_yxmwc->prepare( ' AND user_login = %s', $v_dtpzy['login'] ); // obf
		} // obf

		if ( ! empty( $v_dtpzy['login__in'] ) ) { // obf
			$v_avzeg = array_map( 'esc_sql', $v_dtpzy['login__in'] ); // obf
			$v_mojwn           = implode( "','", $v_avzeg ); // obf
			$v_uvcrh->query_where  .= " AND user_login IN ( '$v_mojwn' )"; // obf
		} // obf

		if ( ! empty( $v_dtpzy['login__not_in'] ) ) { // obf
			$v_lxtun = array_map( 'esc_sql', $v_dtpzy['login__not_in'] ); // obf
			$v_gfydi           = implode( "','", $v_lxtun ); // obf
			$v_uvcrh->query_where      .= " AND user_login NOT IN ( '$v_gfydi' )"; // obf
		} // obf

		// Meta query. // obf
		$v_uvcrh->meta_query = new WP_Meta_Query(); // obf
		$v_uvcrh->meta_query->parse_query_vars( $v_dtpzy ); // obf

		if ( isset( $v_dtpzy['who'] ) && 'authors' === $v_dtpzy['who'] && $v_moopq ) { // obf
			_deprecated_argument( // obf
				'WP_User_Query', // obf
				'5.9.0', // obf
				sprintf( // obf
					/* translators: 1: who, 2: capability */ // obf
					__( '%1$v_gegvn is deprecated. Use %2$v_gegvn instead.' ), // obf
					'<code>who</code>', // obf
					'<code>capability</code>' // obf
				) // obf
			); // obf

			$v_rgmbo = array( // obf
				'key'     => $v_yxmwc->get_blog_prefix( $v_moopq ) . 'user_level', // obf
				'value'   => 0, // obf
				'compare' => '!=', // obf
			); // obf

			// Prevent extra meta query. // obf
			$v_dtpzy['blog_id'] = 0; // obf
			$v_moopq       = 0; // obf

			if ( empty( $v_uvcrh->meta_query->queries ) ) { // obf
				$v_uvcrh->meta_query->queries = array( $v_rgmbo ); // obf
			} else { // obf
				// Append the cap query to the original queries and reparse the query. // obf
				$v_uvcrh->meta_query->queries = array( // obf
					'relation' => 'AND', // obf
					array( $v_uvcrh->meta_query->queries, $v_rgmbo ), // obf
				); // obf
			} // obf

			$v_uvcrh->meta_query->parse_query_vars( $v_uvcrh->meta_query->queries ); // obf
		} // obf

		// Roles. // obf
		$v_cffli = array(); // obf
		if ( isset( $v_dtpzy['role'] ) ) { // obf
			if ( is_array( $v_dtpzy['role'] ) ) { // obf
				$v_cffli = $v_dtpzy['role']; // obf
			} elseif ( is_string( $v_dtpzy['role'] ) && ! empty( $v_dtpzy['role'] ) ) { // obf
				$v_cffli = array_map( 'trim', explode( ',', $v_dtpzy['role'] ) ); // obf
			} // obf
		} // obf

		$v_sjqed = array(); // obf
		if ( isset( $v_dtpzy['role__in'] ) ) { // obf
			$v_sjqed = (array) $v_dtpzy['role__in']; // obf
		} // obf

		$v_fdhxr = array(); // obf
		if ( isset( $v_dtpzy['role__not_in'] ) ) { // obf
			$v_fdhxr = (array) $v_dtpzy['role__not_in']; // obf
		} // obf

		// Capabilities. // obf
		$v_iospg = array(); // obf

		if ( ! empty( $v_dtpzy['capability'] ) || ! empty( $v_dtpzy['capability__in'] ) || ! empty( $v_dtpzy['capability__not_in'] ) ) { // obf
			$v_khfot->for_site( $v_moopq ); // obf
			$v_iospg = $v_khfot->roles; // obf
		} // obf

		$v_jetbc = array(); // obf
		if ( ! empty( $v_dtpzy['capability'] ) ) { // obf
			if ( is_array( $v_dtpzy['capability'] ) ) { // obf
				$v_jetbc = $v_dtpzy['capability']; // obf
			} elseif ( is_string( $v_dtpzy['capability'] ) ) { // obf
				$v_jetbc = array_map( 'trim', explode( ',', $v_dtpzy['capability'] ) ); // obf
			} // obf
		} // obf

		$v_wnyfz = array(); // obf
		if ( ! empty( $v_dtpzy['capability__in'] ) ) { // obf
			$v_wnyfz = (array) $v_dtpzy['capability__in']; // obf
		} // obf

		$v_uwmmv = array(); // obf
		if ( ! empty( $v_dtpzy['capability__not_in'] ) ) { // obf
			$v_uwmmv = (array) $v_dtpzy['capability__not_in']; // obf
		} // obf

		// Keep track of all capabilities and the roles they're added on. // obf
		$v_lunvv = array(); // obf

		foreach ( $v_iospg as $v_ujwbe => $v_pilbh ) { // obf
			$v_tjhxx = array_keys( array_filter( $v_pilbh['capabilities'] ) ); // obf

			foreach ( $v_jetbc as $v_wxlup ) { // obf
				if ( in_array( $v_wxlup, $v_tjhxx, true ) ) { // obf
					$v_lunvv[ $v_wxlup ][] = $v_ujwbe; // obf
					break; // obf
				} // obf
			} // obf

			foreach ( $v_wnyfz as $v_wxlup ) { // obf
				if ( in_array( $v_wxlup, $v_tjhxx, true ) ) { // obf
					$v_sjqed[] = $v_ujwbe; // obf
					break; // obf
				} // obf
			} // obf

			foreach ( $v_uwmmv as $v_wxlup ) { // obf
				if ( in_array( $v_wxlup, $v_tjhxx, true ) ) { // obf
					$v_fdhxr[] = $v_ujwbe; // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		$v_sjqed     = array_merge( $v_sjqed, $v_wnyfz ); // obf
		$v_fdhxr = array_merge( $v_fdhxr, $v_uwmmv ); // obf

		$v_cffli        = array_unique( $v_cffli ); // obf
		$v_sjqed     = array_unique( $v_sjqed ); // obf
		$v_fdhxr = array_unique( $v_fdhxr ); // obf

		// Support querying by capabilities added directly to users. // obf
		if ( $v_moopq && ! empty( $v_jetbc ) ) { // obf
			$v_nfren = array( 'relation' => 'AND' ); // obf

			foreach ( $v_jetbc as $v_wxlup ) { // obf
				$v_impai = array( 'relation' => 'OR' ); // obf

				$v_impai[] = array( // obf
					'key'     => $v_yxmwc->get_blog_prefix( $v_moopq ) . 'capabilities', // obf
					'value'   => '"' . $v_wxlup . '"', // obf
					'compare' => 'LIKE', // obf
				); // obf

				if ( ! empty( $v_lunvv[ $v_wxlup ] ) ) { // obf
					foreach ( $v_lunvv[ $v_wxlup ] as $v_ujwbe ) { // obf
						$v_impai[] = array( // obf
							'key'     => $v_yxmwc->get_blog_prefix( $v_moopq ) . 'capabilities', // obf
							'value'   => '"' . $v_ujwbe . '"', // obf
							'compare' => 'LIKE', // obf
						); // obf
					} // obf
				} // obf

				$v_nfren[] = $v_impai; // obf
			} // obf

			$v_tfvpj[] = $v_nfren; // obf

			if ( empty( $v_uvcrh->meta_query->queries ) ) { // obf
				$v_uvcrh->meta_query->queries[] = $v_nfren; // obf
			} else { // obf
				// Append the cap query to the original queries and reparse the query. // obf
				$v_uvcrh->meta_query->queries = array( // obf
					'relation' => 'AND', // obf
					array( $v_uvcrh->meta_query->queries, array( $v_nfren ) ), // obf
				); // obf
			} // obf

			$v_uvcrh->meta_query->parse_query_vars( $v_uvcrh->meta_query->queries ); // obf
		} // obf

		if ( $v_moopq && ( ! empty( $v_cffli ) || ! empty( $v_sjqed ) || ! empty( $v_fdhxr ) || is_multisite() ) ) { // obf
			$v_tfvpj = array(); // obf

			$v_xtgts = array( 'relation' => 'AND' ); // obf
			if ( ! empty( $v_cffli ) ) { // obf
				foreach ( $v_cffli as $v_ujwbe ) { // obf
					$v_xtgts[] = array( // obf
						'key'     => $v_yxmwc->get_blog_prefix( $v_moopq ) . 'capabilities', // obf
						'value'   => '"' . $v_ujwbe . '"', // obf
						'compare' => 'LIKE', // obf
					); // obf
				} // obf

				$v_tfvpj[] = $v_xtgts; // obf
			} // obf

			$v_mqoum = array( 'relation' => 'OR' ); // obf
			if ( ! empty( $v_sjqed ) ) { // obf
				foreach ( $v_sjqed as $v_ujwbe ) { // obf
					$v_mqoum[] = array( // obf
						'key'     => $v_yxmwc->get_blog_prefix( $v_moopq ) . 'capabilities', // obf
						'value'   => '"' . $v_ujwbe . '"', // obf
						'compare' => 'LIKE', // obf
					); // obf
				} // obf

				$v_tfvpj[] = $v_mqoum; // obf
			} // obf

			$v_wfewu = array( 'relation' => 'AND' ); // obf
			if ( ! empty( $v_fdhxr ) ) { // obf
				foreach ( $v_fdhxr as $v_ujwbe ) { // obf
					$v_wfewu[] = array( // obf
						'key'     => $v_yxmwc->get_blog_prefix( $v_moopq ) . 'capabilities', // obf
						'value'   => '"' . $v_ujwbe . '"', // obf
						'compare' => 'NOT LIKE', // obf
					); // obf
				} // obf

				$v_tfvpj[] = $v_wfewu; // obf
			} // obf

			// If there are no specific roles named, make sure the user is a member of the site. // obf
			if ( empty( $v_tfvpj ) ) { // obf
				$v_tfvpj[] = array( // obf
					'key'     => $v_yxmwc->get_blog_prefix( $v_moopq ) . 'capabilities', // obf
					'compare' => 'EXISTS', // obf
				); // obf
			} // obf

			// Specify that role queries should be joined with AND. // obf
			$v_tfvpj['relation'] = 'AND'; // obf

			if ( empty( $v_uvcrh->meta_query->queries ) ) { // obf
				$v_uvcrh->meta_query->queries = $v_tfvpj; // obf
			} else { // obf
				// Append the cap query to the original queries and reparse the query. // obf
				$v_uvcrh->meta_query->queries = array( // obf
					'relation' => 'AND', // obf
					array( $v_uvcrh->meta_query->queries, $v_tfvpj ), // obf
				); // obf
			} // obf

			$v_uvcrh->meta_query->parse_query_vars( $v_uvcrh->meta_query->queries ); // obf
		} // obf

		if ( ! empty( $v_uvcrh->meta_query->queries ) ) { // obf
			$v_cvehp            = $v_uvcrh->meta_query->get_sql( 'user', $v_yxmwc->users, 'ID', $v_uvcrh ); // obf
			$v_uvcrh->query_from  .= $v_cvehp['join']; // obf
			$v_uvcrh->query_where .= $v_cvehp['where']; // obf

			if ( $v_uvcrh->meta_query->has_or_relation() ) { // obf
				$v_uvcrh->query_fields = 'DISTINCT ' . $v_uvcrh->query_fields; // obf
			} // obf
		} // obf

		// Sorting. // obf
		$v_dtpzy['order'] = isset( $v_dtpzy['order'] ) ? strtoupper( $v_dtpzy['order'] ) : ''; // obf
		$v_hqshe       = $v_uvcrh->parse_order( $v_dtpzy['order'] ); // obf

		if ( empty( $v_dtpzy['orderby'] ) ) { // obf
			// Default order is by 'user_login'. // obf
			$v_oisdg = array( 'user_login' => $v_hqshe ); // obf
		} elseif ( is_array( $v_dtpzy['orderby'] ) ) { // obf
			$v_oisdg = $v_dtpzy['orderby']; // obf
		} else { // obf
			// 'orderby' values may be a comma- or space-separated list. // obf
			$v_oisdg = preg_split( '/[,\s]+/', $v_dtpzy['orderby'] ); // obf
		} // obf

		$v_udtlp = array(); // obf
		foreach ( $v_oisdg as $v_yogom => $v_cwzkm ) { // obf
			if ( ! $v_cwzkm ) { // obf
				continue; // obf
			} // obf

			if ( is_int( $v_yogom ) ) { // obf
				// Integer key means this is a flat array of 'orderby' fields. // obf
				$v_ndism = $v_cwzkm; // obf
				$v_cyvxb   = $v_hqshe; // obf
			} else { // obf
				// Non-integer key means this the key is the field and the value is ASC/DESC. // obf
				$v_ndism = $v_yogom; // obf
				$v_cyvxb   = $v_cwzkm; // obf
			} // obf

			$v_gsyfb = $v_uvcrh->parse_orderby( $v_ndism ); // obf

			if ( ! $v_gsyfb ) { // obf
				continue; // obf
			} // obf

			if ( 'nicename__in' === $v_ndism || 'login__in' === $v_ndism ) { // obf
				$v_udtlp[] = $v_gsyfb; // obf
			} else { // obf
				$v_udtlp[] = $v_gsyfb . ' ' . $v_uvcrh->parse_order( $v_cyvxb ); // obf
			} // obf
		} // obf

		// If no valid clauses were found, order by user_login. // obf
		if ( empty( $v_udtlp ) ) { // obf
			$v_udtlp[] = "user_login $v_hqshe"; // obf
		} // obf

		$v_uvcrh->query_orderby = 'ORDER BY ' . implode( ', ', $v_udtlp ); // obf

		// Limit. // obf
		if ( isset( $v_dtpzy['number'] ) && $v_dtpzy['number'] > 0 ) { // obf
			if ( $v_dtpzy['offset'] ) { // obf
				$v_uvcrh->query_limit = $v_yxmwc->prepare( 'LIMIT %d, %d', $v_dtpzy['offset'], $v_dtpzy['number'] ); // obf
			} else { // obf
				$v_uvcrh->query_limit = $v_yxmwc->prepare( 'LIMIT %d, %d', $v_dtpzy['number'] * ( $v_dtpzy['paged'] - 1 ), $v_dtpzy['number'] ); // obf
			} // obf
		} // obf

		$v_ftvhr = ''; // obf
		if ( isset( $v_dtpzy['search'] ) ) { // obf
			$v_ftvhr = trim( $v_dtpzy['search'] ); // obf
		} // obf

		if ( $v_ftvhr ) { // obf
			$v_nbchn  = ( ltrim( $v_ftvhr, '*' ) !== $v_ftvhr ); // obf
			$v_tkklb = ( rtrim( $v_ftvhr, '*' ) !== $v_ftvhr ); // obf
			if ( $v_nbchn && $v_tkklb ) { // obf
				$v_wwbdp = 'both'; // obf
			} elseif ( $v_nbchn ) { // obf
				$v_wwbdp = 'leading'; // obf
			} elseif ( $v_tkklb ) { // obf
				$v_wwbdp = 'trailing'; // obf
			} else { // obf
				$v_wwbdp = false; // obf
			} // obf
			if ( $v_wwbdp ) { // obf
				$v_ftvhr = trim( $v_ftvhr, '*' ); // obf
			} // obf

			$v_rohtw = array(); // obf
			if ( $v_dtpzy['search_columns'] ) { // obf
				$v_rohtw = array_intersect( $v_dtpzy['search_columns'], array( 'ID', 'user_login', 'user_email', 'user_url', 'user_nicename', 'display_name' ) ); // obf
			} // obf
			if ( ! $v_rohtw ) { // obf
				if ( str_contains( $v_ftvhr, '@' ) ) { // obf
					$v_rohtw = array( 'user_email' ); // obf
				} elseif ( is_numeric( $v_ftvhr ) ) { // obf
					$v_rohtw = array( 'user_login', 'ID' ); // obf
				} elseif ( preg_match( '|^https?://|', $v_ftvhr ) && ! ( is_multisite() && wp_is_large_network( 'users' ) ) ) { // obf
					$v_rohtw = array( 'user_url' ); // obf
				} else { // obf
					$v_rohtw = array( 'user_login', 'user_url', 'user_email', 'user_nicename', 'display_name' ); // obf
				} // obf
			} // obf

			/** // obf
			 * Filters the columns to search in a WP_User_Query search. // obf
			 * // obf
			 * The default columns depend on the search term, and include 'ID', 'user_login', // obf
			 * 'user_email', 'user_url', 'user_nicename', and 'display_name'. // obf
			 * // obf
			 * @since 3.6.0 // obf
			 * // obf
			 * @param string[]      $v_rohtw Array of column names to be searched. // obf
			 * @param string        $v_ftvhr         Text being searched. // obf
			 * @param WP_User_Query $v_bdzcv          The current WP_User_Query instance. // obf
			 */ // obf
			$v_rohtw = apply_filters( 'user_search_columns', $v_rohtw, $v_ftvhr, $v_uvcrh ); // obf

			$v_uvcrh->query_where .= $v_uvcrh->get_search_sql( $v_ftvhr, $v_rohtw, $v_wwbdp ); // obf
		} // obf

		if ( ! empty( $v_rufhm ) ) { // obf
			// Sanitized earlier. // obf
			$v_qcnya                = implode( ',', $v_rufhm ); // obf
			$v_uvcrh->query_where .= " AND $v_yxmwc->users.ID IN ($v_qcnya)"; // obf
		} elseif ( ! empty( $v_dtpzy['exclude'] ) ) { // obf
			$v_qcnya                = implode( ',', wp_parse_id_list( $v_dtpzy['exclude'] ) ); // obf
			$v_uvcrh->query_where .= " AND $v_yxmwc->users.ID NOT IN ($v_qcnya)"; // obf
		} // obf

		// Date queries are allowed for the user_registered field. // obf
		if ( ! empty( $v_dtpzy['date_query'] ) && is_array( $v_dtpzy['date_query'] ) ) { // obf
			$v_wwamr         = new WP_Date_Query( $v_dtpzy['date_query'], 'user_registered' ); // obf
			$v_uvcrh->query_where .= $v_wwamr->get_sql(); // obf
		} // obf

		/** // obf
		 * Fires after the WP_User_Query has been parsed, and before // obf
		 * the query is executed. // obf
		 * // obf
		 * The passed WP_User_Query object contains SQL parts formed // obf
		 * from parsing the given query. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param WP_User_Query $v_bdzcv Current instance of WP_User_Query (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'pre_user_query', array( &$v_uvcrh ) ); // obf
	} // obf

	/** // obf
	 * Executes the query, with the current variables. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global wpdb $v_yxmwc WordPress database abstraction object. // obf
	 */ // obf
	public function query() { // obf
		global $v_yxmwc; // obf

		if ( ! did_action( 'plugins_loaded' ) ) { // obf
			_doing_it_wrong( // obf
				'WP_User_Query::query', // obf
				sprintf( // obf
				/* translators: %s: plugins_loaded */ // obf
					__( 'User queries should not be run before the %s hook.' ), // obf
					'<code>plugins_loaded</code>' // obf
				), // obf
				'6.1.1' // obf
			); // obf
		} // obf

		$v_dtpzy =& $v_uvcrh->query_vars; // obf

		// Do not cache results if more than 3 fields are requested. // obf
		if ( is_array( $v_dtpzy['fields'] ) && count( $v_dtpzy['fields'] ) > 3 ) { // obf
			$v_dtpzy['cache_results'] = false; // obf
		} // obf

		/** // obf
		 * Filters the users array before the query takes place. // obf
		 * // obf
		 * Return a non-null value to bypass WordPress' default user queries. // obf
		 * // obf
		 * Filtering functions that require pagination information are encouraged to set // obf
		 * the `total_users` property of the WP_User_Query object, passed to the filter // obf
		 * by reference. If WP_User_Query does not perform a database query, it will not // obf
		 * have enough information to generate these values itself. // obf
		 * // obf
		 * @since 5.1.0 // obf
		 * // obf
		 * @param array|null    $v_towlq Return an array of user data to short-circuit WP's user query // obf
		 *                               or null to allow WP to run its normal queries. // obf
		 * @param WP_User_Query $v_bdzcv   The WP_User_Query instance (passed by reference). // obf
		 */ // obf
		$v_uvcrh->results = apply_filters_ref_array( 'users_pre_query', array( null, &$v_uvcrh ) ); // obf

		if ( null === $v_uvcrh->results ) { // obf
			// Beginning of the string is on a new line to prevent leading whitespace. See https://core.trac.wordpress.org/ticket/56841. // obf
			$v_uvcrh->request = // obf
				"SELECT {$v_uvcrh->query_fields} // obf
				 {$v_uvcrh->query_from} // obf
				 {$v_uvcrh->query_where} // obf
				 {$v_uvcrh->query_orderby} // obf
				 {$v_uvcrh->query_limit}"; // obf
			$v_skleu   = false; // obf
			$v_ajmue     = $v_uvcrh->generate_cache_key( $v_dtpzy, $v_uvcrh->request ); // obf
			$v_ibolv   = 'user-queries'; // obf
			if ( $v_dtpzy['cache_results'] ) { // obf
				$v_skleu = wp_cache_get( $v_ajmue, $v_ibolv ); // obf
			} // obf
			if ( false !== $v_skleu ) { // obf
				$v_uvcrh->results     = $v_skleu['user_data']; // obf
				$v_uvcrh->total_users = $v_skleu['total_users']; // obf
			} else { // obf

				if ( is_array( $v_dtpzy['fields'] ) ) { // obf
					$v_uvcrh->results = $v_yxmwc->get_results( $v_uvcrh->request ); // obf
				} else { // obf
					$v_uvcrh->results = $v_yxmwc->get_col( $v_uvcrh->request ); // obf
				} // obf

				if ( isset( $v_dtpzy['count_total'] ) && $v_dtpzy['count_total'] ) { // obf
					/** // obf
					 * Filters SELECT FOUND_ROWS() query for the current WP_User_Query instance. // obf
					 * // obf
					 * @since 3.2.0 // obf
					 * @since 5.1.0 Added the `$v_uvcrh` parameter. // obf
					 * // obf
					 * @global wpdb $v_yxmwc WordPress database abstraction object. // obf
					 * // obf
					 * @param string        $v_fbdof   The SELECT FOUND_ROWS() query for the current WP_User_Query. // obf
					 * @param WP_User_Query $v_bdzcv The current WP_User_Query instance. // obf
					 */ // obf
					$v_fdzbf = apply_filters( 'found_users_query', 'SELECT FOUND_ROWS()', $v_uvcrh ); // obf

					$v_uvcrh->total_users = (int) $v_yxmwc->get_var( $v_fdzbf ); // obf
				} // obf

				if ( $v_dtpzy['cache_results'] ) { // obf
					$v_skleu = array( // obf
						'user_data'   => $v_uvcrh->results, // obf
						'total_users' => $v_uvcrh->total_users, // obf
					); // obf
					wp_cache_add( $v_ajmue, $v_skleu, $v_ibolv ); // obf
				} // obf
			} // obf
		} // obf

		if ( ! $v_uvcrh->results ) { // obf
			return; // obf
		} // obf
		if ( // obf
			is_array( $v_dtpzy['fields'] ) && // obf
			isset( $v_uvcrh->results[0]->ID ) // obf
		) { // obf
			foreach ( $v_uvcrh->results as $v_dvxck ) { // obf
				$v_dvxck->id = $v_dvxck->ID; // obf
			} // obf
		} elseif ( 'all_with_meta' === $v_dtpzy['fields'] || 'all' === $v_dtpzy['fields'] ) { // obf
			if ( function_exists( 'cache_users' ) ) { // obf
				cache_users( $v_uvcrh->results ); // obf
			} // obf

			$v_iwgjc = array(); // obf
			foreach ( $v_uvcrh->results as $v_gtmwt ) { // obf
				if ( 'all_with_meta' === $v_dtpzy['fields'] ) { // obf
					$v_iwgjc[ $v_gtmwt ] = new WP_User( $v_gtmwt, '', $v_dtpzy['blog_id'] ); // obf
				} else { // obf
					$v_iwgjc[] = new WP_User( $v_gtmwt, '', $v_dtpzy['blog_id'] ); // obf
				} // obf
			} // obf

			$v_uvcrh->results = $v_iwgjc; // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves query variable. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_dweqf Query variable key. // obf
	 * @return mixed // obf
	 */ // obf
	public function get( $v_dweqf ) { // obf
		if ( isset( $v_uvcrh->query_vars[ $v_dweqf ] ) ) { // obf
			return $v_uvcrh->query_vars[ $v_dweqf ]; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Sets query variable. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_dweqf Query variable key. // obf
	 * @param mixed  $v_lflve     Query variable value. // obf
	 */ // obf
	public function set( $v_dweqf, $v_lflve ) { // obf
		$v_uvcrh->query_vars[ $v_dweqf ] = $v_lflve; // obf
	} // obf

	/** // obf
	 * Used internally to generate an SQL string for searching across multiple columns. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global wpdb $v_yxmwc WordPress database abstraction object. // obf
	 * // obf
	 * @param string   $v_ftvhr  Search string. // obf
	 * @param string[] $v_pcqok Array of columns to search. // obf
	 * @param bool     $v_wwbdp    Whether to allow wildcard searches. Default is false for Network Admin, true for single site. // obf
	 *                          Single site allows leading and trailing wildcards, Network Admin only trailing. // obf
	 * @return string // obf
	 */ // obf
	protected function get_search_sql( $v_ftvhr, $v_pcqok, $v_wwbdp = false ) { // obf
		global $v_yxmwc; // obf

		$v_gqyqo      = array(); // obf
		$v_nbchn  = ( 'leading' === $v_wwbdp || 'both' === $v_wwbdp ) ? '%' : ''; // obf
		$v_tkklb = ( 'trailing' === $v_wwbdp || 'both' === $v_wwbdp ) ? '%' : ''; // obf
		$v_mcnch          = $v_nbchn . $v_yxmwc->esc_like( $v_ftvhr ) . $v_tkklb; // obf

		foreach ( $v_pcqok as $v_wyivi ) { // obf
			if ( 'ID' === $v_wyivi ) { // obf
				$v_gqyqo[] = $v_yxmwc->prepare( "$v_wyivi = %s", $v_ftvhr ); // obf
			} else { // obf
				$v_gqyqo[] = $v_yxmwc->prepare( "$v_wyivi LIKE %s", $v_mcnch ); // obf
			} // obf
		} // obf

		return ' AND (' . implode( ' OR ', $v_gqyqo ) . ')'; // obf
	} // obf

	/** // obf
	 * Returns the list of users. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return array Array of results. // obf
	 */ // obf
	public function get_results() { // obf
		return $v_uvcrh->results; // obf
	} // obf

	/** // obf
	 * Returns the total number of users for the current query. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return int Number of total users. // obf
	 */ // obf
	public function get_total() { // obf
		return $v_uvcrh->total_users; // obf
	} // obf

	/** // obf
	 * Parses and sanitizes 'orderby' keys passed to the user query. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @global wpdb $v_yxmwc WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_gefrt Alias for the field to order by. // obf
	 * @return string Value to used in the ORDER clause, if `$v_gefrt` is valid. // obf
	 */ // obf
	protected function parse_orderby( $v_gefrt ) { // obf
		global $v_yxmwc; // obf

		$v_ifjao = $v_uvcrh->meta_query->get_clauses(); // obf

		$v_ndism = ''; // obf
		if ( in_array( $v_gefrt, array( 'login', 'nicename', 'email', 'url', 'registered' ), true ) ) { // obf
			$v_ndism = 'user_' . $v_gefrt; // obf
		} elseif ( in_array( $v_gefrt, array( 'user_login', 'user_nicename', 'user_email', 'user_url', 'user_registered' ), true ) ) { // obf
			$v_ndism = $v_gefrt; // obf
		} elseif ( 'name' === $v_gefrt || 'display_name' === $v_gefrt ) { // obf
			$v_ndism = 'display_name'; // obf
		} elseif ( 'post_count' === $v_gefrt ) { // obf
			// @todo Avoid the JOIN. // obf
			$v_llhma             = get_posts_by_author_sql( 'post' ); // obf
			$v_uvcrh->query_from .= " LEFT OUTER JOIN ( // obf
				SELECT post_author, COUNT(*) as post_count // obf
				FROM $v_yxmwc->posts // obf
				$v_llhma // obf
				GROUP BY post_author // obf
			) p ON ({$v_yxmwc->users}.ID = p.post_author)"; // obf
			$v_ndism          = 'post_count'; // obf
		} elseif ( 'ID' === $v_gefrt || 'id' === $v_gefrt ) { // obf
			$v_ndism = 'ID'; // obf
		} elseif ( 'meta_value' === $v_gefrt || $v_uvcrh->get( 'meta_key' ) === $v_gefrt ) { // obf
			$v_ndism = "$v_yxmwc->usermeta.meta_value"; // obf
		} elseif ( 'meta_value_num' === $v_gefrt ) { // obf
			$v_ndism = "$v_yxmwc->usermeta.meta_value+0"; // obf
		} elseif ( 'include' === $v_gefrt && ! empty( $v_uvcrh->query_vars['include'] ) ) { // obf
			$v_rufhm     = wp_parse_id_list( $v_uvcrh->query_vars['include'] ); // obf
			$v_omsdl = implode( ',', $v_rufhm ); // obf
			$v_ndism    = "FIELD( $v_yxmwc->users.ID, $v_omsdl )"; // obf
		} elseif ( 'nicename__in' === $v_gefrt ) { // obf
			$v_xuilb = array_map( 'esc_sql', $v_uvcrh->query_vars['nicename__in'] ); // obf
			$v_bmztg           = implode( "','", $v_xuilb ); // obf
			$v_ndism               = "FIELD( user_nicename, '$v_bmztg' )"; // obf
		} elseif ( 'login__in' === $v_gefrt ) { // obf
			$v_avzeg = array_map( 'esc_sql', $v_uvcrh->query_vars['login__in'] ); // obf
			$v_mojwn           = implode( "','", $v_avzeg ); // obf
			$v_ndism            = "FIELD( user_login, '$v_mojwn' )"; // obf
		} elseif ( isset( $v_ifjao[ $v_gefrt ] ) ) { // obf
			$v_ilkxx = $v_ifjao[ $v_gefrt ]; // obf
			$v_ndism    = sprintf( 'CAST(%s.meta_value AS %s)', esc_sql( $v_ilkxx['alias'] ), esc_sql( $v_ilkxx['cast'] ) ); // obf
		} // obf

		return $v_ndism; // obf
	} // obf

	/** // obf
	 * Generate cache key. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @global wpdb $v_yxmwc WordPress database abstraction object. // obf
	 * // obf
	 * @param array  $v_ennwn Query arguments. // obf
	 * @param string $v_fbdof  SQL statement. // obf
	 * @return string Cache key. // obf
	 */ // obf
	protected function generate_cache_key( array $v_ennwn, $v_fbdof ) { // obf
		global $v_yxmwc; // obf

		// Replace wpdb placeholder in the SQL statement used by the cache key. // obf
		$v_fbdof = $v_yxmwc->remove_placeholder_escape( $v_fbdof ); // obf

		$v_nnogu          = md5( $v_fbdof ); // obf
		$v_ltqek = wp_cache_get_last_changed( 'users' ); // obf

		if ( empty( $v_ennwn['orderby'] ) ) { // obf
			// Default order is by 'user_login'. // obf
			$v_oisdg = array( 'user_login' => '' ); // obf
		} elseif ( is_array( $v_ennwn['orderby'] ) ) { // obf
			$v_oisdg = $v_ennwn['orderby']; // obf
		} else { // obf
			// 'orderby' values may be a comma- or space-separated list. // obf
			$v_oisdg = preg_split( '/[,\s]+/', $v_ennwn['orderby'] ); // obf
		} // obf

		$v_moopq = 0; // obf
		if ( isset( $v_ennwn['blog_id'] ) ) { // obf
			$v_moopq = absint( $v_ennwn['blog_id'] ); // obf
		} // obf

		if ( $v_ennwn['has_published_posts'] || in_array( 'post_count', $v_oisdg, true ) ) { // obf
			$v_yrzov = $v_moopq && get_current_blog_id() !== $v_moopq; // obf
			if ( $v_yrzov ) { // obf
				switch_to_blog( $v_moopq ); // obf
			} // obf

			$v_ltqek .= wp_cache_get_last_changed( 'posts' ); // obf

			if ( $v_yrzov ) { // obf
				restore_current_blog(); // obf
			} // obf
		} // obf

		return "get_users:$v_nnogu:$v_ltqek"; // obf
	} // obf

	/** // obf
	 * Parses an 'order' query variable and casts it to ASC or DESC as necessary. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_hqshe The 'order' query variable. // obf
	 * @return string The sanitized 'order' query variable. // obf
	 */ // obf
	protected function parse_order( $v_hqshe ) { // obf
		if ( ! is_string( $v_hqshe ) || empty( $v_hqshe ) ) { // obf
			return 'DESC'; // obf
		} // obf

		if ( 'ASC' === strtoupper( $v_hqshe ) ) { // obf
			return 'ASC'; // obf
		} else { // obf
			return 'DESC'; // obf
		} // obf
	} // obf

	/** // obf
	 * Makes private properties readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Getting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_hlsig Property to get. // obf
	 * @return mixed Property. // obf
	 */ // obf
	public function __get( $v_hlsig ) { // obf
		if ( in_array( $v_hlsig, $v_uvcrh->compat_fields, true ) ) { // obf
			return $v_uvcrh->$v_hlsig; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_hlsig}` is not declared. Getting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
		return null; // obf
	} // obf

	/** // obf
	 * Makes private properties settable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Setting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_hlsig  Property to check if set. // obf
	 * @param mixed  $v_lflve Property value. // obf
	 */ // obf
	public function __set( $v_hlsig, $v_lflve ) { // obf
		if ( in_array( $v_hlsig, $v_uvcrh->compat_fields, true ) ) { // obf
			$v_uvcrh->$v_hlsig = $v_lflve; // obf
			return; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_hlsig}` is not declared. Setting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
	} // obf

	/** // obf
	 * Makes private properties checkable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Checking a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_hlsig Property to check if set. // obf
	 * @return bool Whether the property is set. // obf
	 */ // obf
	public function __isset( $v_hlsig ) { // obf
		if ( in_array( $v_hlsig, $v_uvcrh->compat_fields, true ) ) { // obf
			return isset( $v_uvcrh->$v_hlsig ); // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"The property `{$v_hlsig}` is not declared. Checking `isset()` on a dynamic property " . // obf
			'is deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
		return false; // obf
	} // obf

	/** // obf
	 * Makes private properties un-settable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 6.4.0 Unsetting a dynamic property is deprecated. // obf
	 * // obf
	 * @param string $v_hlsig Property to unset. // obf
	 */ // obf
	public function __unset( $v_hlsig ) { // obf
		if ( in_array( $v_hlsig, $v_uvcrh->compat_fields, true ) ) { // obf
			unset( $v_uvcrh->$v_hlsig ); // obf
			return; // obf
		} // obf

		wp_trigger_error( // obf
			__METHOD__, // obf
			"A property `{$v_hlsig}` is not declared. Unsetting a dynamic property is " . // obf
			'deprecated since version 6.4.0! Instead, declare the property on the class.', // obf
			E_USER_DEPRECATED // obf
		); // obf
	} // obf

	/** // obf
	 * Makes private/protected methods readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_hlsig      Method to call. // obf
	 * @param array  $v_pybga Arguments to pass when calling. // obf
	 * @return mixed Return value of the callback, false otherwise. // obf
	 */ // obf
	public function __call( $v_hlsig, $v_pybga ) { // obf
		if ( 'get_search_sql' === $v_hlsig ) { // obf
			return $v_uvcrh->get_search_sql( ...$v_pybga ); // obf
		} // obf
		return false; // obf
	} // obf
} // obf