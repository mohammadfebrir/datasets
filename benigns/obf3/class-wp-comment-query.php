
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Comment API: WP_Comment_Query class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Comments // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used for querying comments. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_Comment_Query::__construct() for accepted arguments. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Comment_Query { // obf

	/** // obf
	 * SQL for database query. // obf
	 * // obf
	 * @since 4.0.1 // obf
	 * @var string // obf
	 */ // obf
	public $v_uzakn; // obf

	/** // obf
	 * Metadata query container // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var WP_Meta_Query A meta query instance. // obf
	 */ // obf
	public $v_neipq = false; // obf

	/** // obf
	 * Metadata query clauses. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_lrqiz; // obf

	/** // obf
	 * SQL query clauses. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_yuxxk = array( // obf
		'select'  => '', // obf
		'from'    => '', // obf
		'where'   => array(), // obf
		'groupby' => '', // obf
		'orderby' => '', // obf
		'limits'  => '', // obf
	); // obf

	/** // obf
	 * SQL WHERE clause. // obf
	 * // obf
	 * Stored after the {@see 'comments_clauses'} filter is run on the compiled WHERE sub-clauses. // obf
	 * // obf
	 * @since 4.4.2 // obf
	 * @var string // obf
	 */ // obf
	protected $v_agnbm; // obf

	/** // obf
	 * Date query container // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var WP_Date_Query A date query instance. // obf
	 */ // obf
	public $v_pkzbu = false; // obf

	/** // obf
	 * Query vars set by the user. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_quiit; // obf

	/** // obf
	 * Default values for query vars. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_bxfhi; // obf

	/** // obf
	 * List of comments located by the query. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var int[]|WP_Comment[] // obf
	 */ // obf
	public $v_znctb; // obf

	/** // obf
	 * The amount of found comments for the current query. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_uztzb = 0; // obf

	/** // obf
	 * The number of pages. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_ocjzv = 0; // obf

	/** // obf
	 * Make private/protected methods readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_fadqp      Method to call. // obf
	 * @param array  $v_oyndg Arguments to pass when calling. // obf
	 * @return mixed|false Return value of the callback, false otherwise. // obf
	 */ // obf
	public function __call( $v_fadqp, $v_oyndg ) { // obf
		if ( 'get_search_sql' === $v_fadqp ) { // obf
			return $v_ikagn->get_search_sql( ...$v_oyndg ); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the comment query, based on the query vars passed. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @since 4.4.0 `$v_inwbc` and `$v_flsri` were added. // obf
	 * @since 4.4.0 Order by `comment__in` was added. `$v_nsxfl`, `$v_vgdvs`, // obf
	 *              `$v_fcdat`, and `$v_dtxwo` were added. // obf
	 * @since 4.5.0 Introduced the `$v_hzuof` argument. // obf
	 * @since 4.6.0 Introduced the `$v_wbedu` argument. // obf
	 * @since 4.9.0 Introduced the `$v_fjeby` argument. // obf
	 * @since 5.1.0 Introduced the `$v_fnqaz` argument. // obf
	 * @since 5.3.0 Introduced the `$v_sjpuw` argument. // obf
	 * // obf
	 * @param string|array $v_bypev { // obf
	 *     Optional. Array or query string of comment query parameters. Default empty. // obf
	 * // obf
	 *     @type string          $v_szcco              Comment author email address. Default empty. // obf
	 *     @type string          $v_hzuof                Comment author URL. Default empty. // obf
	 *     @type int[]           $v_wcfds                Array of author IDs to include comments for. Default empty. // obf
	 *     @type int[]           $v_iccnq            Array of author IDs to exclude comments for. Default empty. // obf
	 *     @type int[]           $v_zetrx               Array of comment IDs to include. Default empty. // obf
	 *     @type int[]           $v_qwnie           Array of comment IDs to exclude. Default empty. // obf
	 *     @type bool            $v_dodng                     Whether to return a comment count (true) or array of // obf
	 *                                                      comment objects (false). Default false. // obf
	 *     @type array           $v_pkzbu                Date query clauses to limit comments by. See WP_Date_Query. // obf
	 *                                                      Default null. // obf
	 *     @type string          $v_ewskj                    Comment fields to return. Accepts 'ids' for comment IDs // obf
	 *                                                      only or empty for all fields. Default empty. // obf
	 *     @type array           $v_dwajb        Array of IDs or email addresses of users whose unapproved // obf
	 *                                                      comments will be returned by the query regardless of // obf
	 *                                                      `$v_heljh`. Default empty. // obf
	 *     @type int             $v_obyyu                     Karma score to retrieve matching comments for. // obf
	 *                                                      Default empty. // obf
	 *     @type string|string[] $v_dknty                  Meta key or keys to filter by. // obf
	 *     @type string|string[] $v_lpydt                Meta value or values to filter by. // obf
	 *     @type string          $v_abbzt              MySQL operator used for comparing the meta value. // obf
	 *                                                      See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_fnqaz          MySQL operator used for comparing the meta key. // obf
	 *                                                      See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_pjxnn                 MySQL data type that the meta_value column will be CAST to for comparisons. // obf
	 *                                                      See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_sjpuw             MySQL data type that the meta_key column will be CAST to for comparisons. // obf
	 *                                                      See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type array           $v_neipq                An associative array of WP_Meta_Query arguments. // obf
	 *                                                      See WP_Meta_Query::__construct() for accepted values. // obf
	 *     @type int             $v_qjeyh                    Maximum number of comments to retrieve. // obf
	 *                                                      Default empty (no limit). // obf
	 *     @type int             $v_fjeby                     When used with `$v_qjeyh`, defines the page of results to return. // obf
	 *                                                      When used with `$v_kpeni`, `$v_kpeni` takes precedence. Default 1. // obf
	 *     @type int             $v_kpeni                    Number of comments to offset the query. Used to build // obf
	 *                                                      LIMIT clause. Default 0. // obf
	 *     @type bool            $v_vgdvs             Whether to disable the `SQL_CALC_FOUND_ROWS` query. // obf
	 *                                                      Default: true. // obf
	 *     @type string|array    $v_tlpff                   Comment status or array of statuses. To use 'meta_value' // obf
	 *                                                      or 'meta_value_num', `$v_dknty` must also be defined. // obf
	 *                                                      To sort by a specific `$v_neipq` clause, use that // obf
	 *                                                      clause's array key. Accepts: // obf
	 *                                                      - 'comment_agent' // obf
	 *                                                      - 'comment_approved' // obf
	 *                                                      - 'comment_author' // obf
	 *                                                      - 'comment_author_email' // obf
	 *                                                      - 'comment_author_IP' // obf
	 *                                                      - 'comment_author_url' // obf
	 *                                                      - 'comment_content' // obf
	 *                                                      - 'comment_date' // obf
	 *                                                      - 'comment_date_gmt' // obf
	 *                                                      - 'comment_ID' // obf
	 *                                                      - 'comment_karma' // obf
	 *                                                      - 'comment_parent' // obf
	 *                                                      - 'comment_post_ID' // obf
	 *                                                      - 'comment_type' // obf
	 *                                                      - 'user_id' // obf
	 *                                                      - 'comment__in' // obf
	 *                                                      - 'meta_value' // obf
	 *                                                      - 'meta_value_num' // obf
	 *                                                      - The value of `$v_dknty` // obf
	 *                                                      - The array keys of `$v_neipq` // obf
	 *                                                      - false, an empty array, or 'none' to disable `ORDER BY` clause. // obf
	 *                                                      Default: 'comment_date_gmt'. // obf
	 *     @type string          $v_svsdc                     How to order retrieved comments. Accepts 'ASC', 'DESC'. // obf
	 *                                                      Default: 'DESC'. // obf
	 *     @type int             $v_zugoq                    Parent ID of comment to retrieve children of. // obf
	 *                                                      Default empty. // obf
	 *     @type int[]           $v_inwbc                Array of parent IDs of comments to retrieve children for. // obf
	 *                                                      Default empty. // obf
	 *     @type int[]           $v_flsri            Array of parent IDs of comments *not* to retrieve // obf
	 *                                                      children for. Default empty. // obf
	 *     @type int[]           $v_hjxyv           Array of author IDs to retrieve comments for. // obf
	 *                                                      Default empty. // obf
	 *     @type int[]           $v_bkyiu       Array of author IDs *not* to retrieve comments for. // obf
	 *                                                      Default empty. // obf
	 *     @type int             $v_vozns                   Limit results to those affiliated with a given post ID. // obf
	 *                                                      Default 0. // obf
	 *     @type int[]           $v_zkszu                  Array of post IDs to include affiliated comments for. // obf
	 *                                                      Default empty. // obf
	 *     @type int[]           $v_bfwkc              Array of post IDs to exclude affiliated comments for. // obf
	 *                                                      Default empty. // obf
	 *     @type int             $v_tylzg               Post author ID to limit results by. Default empty. // obf
	 *     @type string|string[] $v_uwtgt               Post status or array of post statuses to retrieve // obf
	 *                                                      affiliated comments for. Pass 'any' to match any value. // obf
	 *                                                      Default empty. // obf
	 *     @type string|string[] $v_zwjwz                 Post type or array of post types to retrieve affiliated // obf
	 *                                                      comments for. Pass 'any' to match any value. Default empty. // obf
	 *     @type string          $v_cejmq                 Post name to retrieve affiliated comments for. // obf
	 *                                                      Default empty. // obf
	 *     @type int             $v_hcock               Post parent ID to retrieve affiliated comments for. // obf
	 *                                                      Default empty. // obf
	 *     @type string          $v_rtiff                    Search term(s) to retrieve matching comments for. // obf
	 *                                                      Default empty. // obf
	 *     @type string|array    $v_heljh                    Comment statuses to limit results by. Accepts an array // obf
	 *                                                      or space/comma-separated list of 'hold' (`comment_status=0`), // obf
	 *                                                      'approve' (`comment_status=1`), 'all', or a custom // obf
	 *                                                      comment status. Default 'all'. // obf
	 *     @type string|string[] $v_jicis                      Include comments of a given type, or array of types. // obf
	 *                                                      Accepts 'comment', 'pings' (includes 'pingback' and // obf
	 *                                                      'trackback'), or any custom type string. Default empty. // obf
	 *     @type string[]        $v_ufdfy                  Include comments from a given array of comment types. // obf
	 *                                                      Default empty. // obf
	 *     @type string[]        $v_koddw              Exclude comments from a given array of comment types. // obf
	 *                                                      Default empty. // obf
	 *     @type int             $v_kadwj                   Include comments for a specific user ID. Default empty. // obf
	 *     @type bool|string     $v_fcdat              Whether to include comment descendants in the results. // obf
	 *                                                      - 'threaded' returns a tree, with each comment's children // obf
	 *                                                        stored in a `children` property on the `WP_Comment` object. // obf
	 *                                                      - 'flat' returns a flat array of found comments plus // obf
	 *                                                        their children. // obf
	 *                                                      - Boolean `false` leaves out descendants. // obf
	 *                                                      The parameter is ignored (forced to `false`) when // obf
	 *                                                      `$v_ewskj` is 'ids' or 'counts'. Accepts 'threaded', // obf
	 *                                                      'flat', or false. Default: false. // obf
	 *     @type string          $v_wbedu              Unique cache key to be produced when this query is stored in // obf
	 *                                                      an object cache. Default is 'core'. // obf
	 *     @type bool            $v_nsxfl Whether to prime the metadata cache for found comments. // obf
	 *                                                      Default true. // obf
	 *     @type bool            $v_dtxwo Whether to prime the cache for comment posts. // obf
	 *                                                      Default false. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_bypev = '' ) { // obf
		$v_ikagn->query_var_defaults = array( // obf
			'author_email'              => '', // obf
			'author_url'                => '', // obf
			'author__in'                => '', // obf
			'author__not_in'            => '', // obf
			'include_unapproved'        => '', // obf
			'fields'                    => '', // obf
			'ID'                        => '', // obf
			'comment__in'               => '', // obf
			'comment__not_in'           => '', // obf
			'karma'                     => '', // obf
			'number'                    => '', // obf
			'offset'                    => '', // obf
			'no_found_rows'             => true, // obf
			'orderby'                   => '', // obf
			'order'                     => 'DESC', // obf
			'paged'                     => 1, // obf
			'parent'                    => '', // obf
			'parent__in'                => '', // obf
			'parent__not_in'            => '', // obf
			'post_author__in'           => '', // obf
			'post_author__not_in'       => '', // obf
			'post_ID'                   => '', // obf
			'post_id'                   => 0, // obf
			'post__in'                  => '', // obf
			'post__not_in'              => '', // obf
			'post_author'               => '', // obf
			'post_name'                 => '', // obf
			'post_parent'               => '', // obf
			'post_status'               => '', // obf
			'post_type'                 => '', // obf
			'status'                    => 'all', // obf
			'type'                      => '', // obf
			'type__in'                  => '', // obf
			'type__not_in'              => '', // obf
			'user_id'                   => '', // obf
			'search'                    => '', // obf
			'count'                     => false, // obf
			'meta_key'                  => '', // obf
			'meta_value'                => '', // obf
			'meta_query'                => '', // obf
			'date_query'                => null, // See WP_Date_Query. // obf
			'hierarchical'              => false, // obf
			'cache_domain'              => 'core', // obf
			'update_comment_meta_cache' => true, // obf
			'update_comment_post_cache' => false, // obf
		); // obf

		if ( ! empty( $v_bypev ) ) { // obf
			$v_ikagn->query( $v_bypev ); // obf
		} // obf
	} // obf

	/** // obf
	 * Parse arguments passed to the comment query with default query parameters. // obf
	 * // obf
	 * @since 4.2.0 Extracted from WP_Comment_Query::query(). // obf
	 * // obf
	 * @param string|array $v_bypev WP_Comment_Query arguments. See WP_Comment_Query::__construct() for accepted arguments. // obf
	 */ // obf
	public function parse_query( $v_bypev = '' ) { // obf
		if ( empty( $v_bypev ) ) { // obf
			$v_bypev = $v_ikagn->query_vars; // obf
		} // obf

		$v_ikagn->query_vars = wp_parse_args( $v_bypev, $v_ikagn->query_var_defaults ); // obf

		/** // obf
		 * Fires after the comment query vars have been parsed. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param WP_Comment_Query $v_bypev The WP_Comment_Query instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'parse_comment_query', array( &$v_ikagn ) ); // obf
	} // obf

	/** // obf
	 * Sets up the WordPress query for retrieving comments. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 4.1.0 Introduced 'comment__in', 'comment__not_in', 'post_author__in', // obf
	 *              'post_author__not_in', 'author__in', 'author__not_in', 'post__in', // obf
	 *              'post__not_in', 'include_unapproved', 'type__in', and 'type__not_in' // obf
	 *              arguments to $v_quiit. // obf
	 * @since 4.2.0 Moved parsing to WP_Comment_Query::parse_query(). // obf
	 * // obf
	 * @param string|array $v_bypev Array or URL query string of parameters. // obf
	 * @return array|int List of comments, or number of comments when 'count' is passed as a query var. // obf
	 */ // obf
	public function query( $v_bypev ) { // obf
		$v_ikagn->query_vars = wp_parse_args( $v_bypev ); // obf
		return $v_ikagn->get_comments(); // obf
	} // obf

	/** // obf
	 * Get a list of comments matching the query vars. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @global wpdb $v_gmgid WordPress database abstraction object. // obf
	 * // obf
	 * @return int|int[]|WP_Comment[] List of comments or number of found comments if `$v_dodng` argument is true. // obf
	 */ // obf
	public function get_comments() { // obf
		global $v_gmgid; // obf

		$v_ikagn->parse_query(); // obf

		// Parse meta query. // obf
		$v_ikagn->meta_query = new WP_Meta_Query(); // obf
		$v_ikagn->meta_query->parse_query_vars( $v_ikagn->query_vars ); // obf

		/** // obf
		 * Fires before comments are retrieved. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param WP_Comment_Query $v_bypev Current instance of WP_Comment_Query (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'pre_get_comments', array( &$v_ikagn ) ); // obf

		// Reparse query vars, in case they were modified in a 'pre_get_comments' callback. // obf
		$v_ikagn->meta_query->parse_query_vars( $v_ikagn->query_vars ); // obf
		if ( ! empty( $v_ikagn->meta_query->queries ) ) { // obf
			$v_ikagn->meta_query_clauses = $v_ikagn->meta_query->get_sql( 'comment', $v_gmgid->comments, 'comment_ID', $v_ikagn ); // obf
		} // obf

		$v_hunzv = null; // obf

		/** // obf
		 * Filters the comments data before the query takes place. // obf
		 * // obf
		 * Return a non-null value to bypass WordPress' default comment queries. // obf
		 * // obf
		 * The expected return type from this filter depends on the value passed // obf
		 * in the request query vars: // obf
		 * - When `$v_ikagn->query_vars['count']` is set, the filter should return // obf
		 *   the comment count as an integer. // obf
		 * - When `'ids' === $v_ikagn->query_vars['fields']`, the filter should return // obf
		 *   an array of comment IDs. // obf
		 * - Otherwise the filter should return an array of WP_Comment objects. // obf
		 * // obf
		 * Note that if the filter returns an array of comment data, it will be assigned // obf
		 * to the `comments` property of the current WP_Comment_Query instance. // obf
		 * // obf
		 * Filtering functions that require pagination information are encouraged to set // obf
		 * the `found_comments` and `max_num_pages` properties of the WP_Comment_Query object, // obf
		 * passed to the filter by reference. If WP_Comment_Query does not perform a database // obf
		 * query, it will not have enough information to generate these values itself. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * @since 5.6.0 The returned array of comment data is assigned to the `comments` property // obf
		 *              of the current WP_Comment_Query instance. // obf
		 * // obf
		 * @param array|int|null   $v_hunzv Return an array of comment data to short-circuit WP's comment query, // obf
		 *                                       the comment count as an integer if `$v_ikagn->query_vars['count']` is set, // obf
		 *                                       or null to allow WP to run its normal queries. // obf
		 * @param WP_Comment_Query $v_bypev        The WP_Comment_Query instance, passed by reference. // obf
		 */ // obf
		$v_hunzv = apply_filters_ref_array( 'comments_pre_query', array( $v_hunzv, &$v_ikagn ) ); // obf

		if ( null !== $v_hunzv ) { // obf
			if ( is_array( $v_hunzv ) && ! $v_ikagn->query_vars['count'] ) { // obf
				$v_ikagn->comments = $v_hunzv; // obf
			} // obf

			return $v_hunzv; // obf
		} // obf

		/* // obf
		 * Only use the args defined in the query_var_defaults to compute the key, // obf
		 * but ignore 'fields', 'update_comment_meta_cache', 'update_comment_post_cache' which does not affect query results. // obf
		 */ // obf
		$v_vhupr = wp_array_slice_assoc( $v_ikagn->query_vars, array_keys( $v_ikagn->query_var_defaults ) ); // obf
		unset( $v_vhupr['fields'], $v_vhupr['update_comment_meta_cache'], $v_vhupr['update_comment_post_cache'] ); // obf

		$v_anawb          = md5( serialize( $v_vhupr ) ); // obf
		$v_jwjfi = wp_cache_get_last_changed( 'comment' ); // obf

		$v_lxjbq   = "get_comments:$v_anawb:$v_jwjfi"; // obf
		$v_vjwns = wp_cache_get( $v_lxjbq, 'comment-queries' ); // obf
		if ( false === $v_vjwns ) { // obf
			$v_kmudb = $v_ikagn->get_comment_ids(); // obf
			if ( $v_kmudb ) { // obf
				$v_ikagn->set_found_comments(); // obf
			} // obf

			$v_vjwns = array( // obf
				'comment_ids'    => $v_kmudb, // obf
				'found_comments' => $v_ikagn->found_comments, // obf
			); // obf
			wp_cache_add( $v_lxjbq, $v_vjwns, 'comment-queries' ); // obf
		} else { // obf
			$v_kmudb          = $v_vjwns['comment_ids']; // obf
			$v_ikagn->found_comments = $v_vjwns['found_comments']; // obf
		} // obf

		if ( $v_ikagn->found_comments && $v_ikagn->query_vars['number'] ) { // obf
			$v_ikagn->max_num_pages = (int) ceil( $v_ikagn->found_comments / $v_ikagn->query_vars['number'] ); // obf
		} // obf

		// If querying for a count only, there's nothing more to do. // obf
		if ( $v_ikagn->query_vars['count'] ) { // obf
			// $v_kmudb is actually a count in this case. // obf
			return (int) $v_kmudb; // obf
		} // obf

		$v_kmudb = array_map( 'intval', $v_kmudb ); // obf

		if ( $v_ikagn->query_vars['update_comment_meta_cache'] ) { // obf
			wp_lazyload_comment_meta( $v_kmudb ); // obf
		} // obf

		if ( 'ids' === $v_ikagn->query_vars['fields'] ) { // obf
			$v_ikagn->comments = $v_kmudb; // obf
			return $v_ikagn->comments; // obf
		} // obf

		_prime_comment_caches( $v_kmudb, false ); // obf

		// Fetch full comment objects from the primed cache. // obf
		$v_kyajk = array(); // obf
		foreach ( $v_kmudb as $v_yewus ) { // obf
			$v_stusf = get_comment( $v_yewus ); // obf
			if ( $v_stusf ) { // obf
				$v_kyajk[] = $v_stusf; // obf
			} // obf
		} // obf

		// Prime comment post caches. // obf
		if ( $v_ikagn->query_vars['update_comment_post_cache'] ) { // obf
			$v_qedny = array(); // obf
			foreach ( $v_kyajk as $v_stusf ) { // obf
				$v_qedny[] = $v_stusf->comment_post_ID; // obf
			} // obf

			_prime_post_caches( $v_qedny, false, false ); // obf
		} // obf

		/** // obf
		 * Filters the comment query results. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param WP_Comment[]     $v_kyajk An array of comments. // obf
		 * @param WP_Comment_Query $v_bypev     Current instance of WP_Comment_Query (passed by reference). // obf
		 */ // obf
		$v_kyajk = apply_filters_ref_array( 'the_comments', array( $v_kyajk, &$v_ikagn ) ); // obf

		// Convert to WP_Comment instances. // obf
		$v_znctb = array_map( 'get_comment', $v_kyajk ); // obf

		if ( $v_ikagn->query_vars['hierarchical'] ) { // obf
			$v_znctb = $v_ikagn->fill_descendants( $v_znctb ); // obf
		} // obf

		$v_ikagn->comments = $v_znctb; // obf
		return $v_ikagn->comments; // obf
	} // obf

	/** // obf
	 * Used internally to get a list of comment IDs matching the query vars. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global wpdb $v_gmgid WordPress database abstraction object. // obf
	 * // obf
	 * @return int|array A single count of comment IDs if a count query. An array of comment IDs if a full query. // obf
	 */ // obf
	protected function get_comment_ids() { // obf
		global $v_gmgid; // obf

		// Assemble clauses related to 'comment_approved'. // obf
		$v_tgzzm = array(); // obf

		// 'status' accepts an array or a comma-separated string. // obf
		$v_basko = array(); // obf
		$v_dtnko       = wp_parse_list( $v_ikagn->query_vars['status'] ); // obf

		// Empty 'status' should be interpreted as 'all'. // obf
		if ( empty( $v_dtnko ) ) { // obf
			$v_dtnko = array( 'all' ); // obf
		} // obf

		// 'any' overrides other statuses. // obf
		if ( ! in_array( 'any', $v_dtnko, true ) ) { // obf
			foreach ( $v_dtnko as $v_heljh ) { // obf
				switch ( $v_heljh ) { // obf
					case 'hold': // obf
						$v_basko[] = "comment_approved = '0'"; // obf
						break; // obf

					case 'approve': // obf
						$v_basko[] = "comment_approved = '1'"; // obf
						break; // obf

					case 'all': // obf
					case '': // obf
						$v_basko[] = "( comment_approved = '0' OR comment_approved = '1' )"; // obf
						break; // obf

					default: // obf
						$v_basko[] = $v_gmgid->prepare( 'comment_approved = %s', $v_heljh ); // obf
						break; // obf
				} // obf
			} // obf

			$v_tgzzm[] = '( ' . implode( ' OR ', $v_basko ) . ' )'; // obf
		} // obf

		// User IDs or emails whose unapproved comments are included, regardless of $v_heljh. // obf
		if ( ! empty( $v_ikagn->query_vars['include_unapproved'] ) ) { // obf
			$v_dwajb = wp_parse_list( $v_ikagn->query_vars['include_unapproved'] ); // obf

			foreach ( $v_dwajb as $v_rwnfa ) { // obf
				// Numeric values are assumed to be user IDs. // obf
				if ( is_numeric( $v_rwnfa ) ) { // obf
					$v_tgzzm[] = $v_gmgid->prepare( "( user_id = %d AND comment_approved = '0' )", $v_rwnfa ); // obf
				} else { // obf
					// Otherwise we match against email addresses. // obf
					if ( ! empty( $v_rpbwu['unapproved'] ) && ! empty( $v_rpbwu['moderation-hash'] ) ) { // obf
						// Only include requested comment. // obf
						$v_tgzzm[] = $v_gmgid->prepare( "( comment_author_email = %s AND comment_approved = '0' AND {$v_gmgid->comments}.comment_ID = %d )", $v_rwnfa, (int) $v_rpbwu['unapproved'] ); // obf
					} else { // obf
						// Include all of the author's unapproved comments. // obf
						$v_tgzzm[] = $v_gmgid->prepare( "( comment_author_email = %s AND comment_approved = '0' )", $v_rwnfa ); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		// Collapse comment_approved clauses into a single OR-separated clause. // obf
		if ( ! empty( $v_tgzzm ) ) { // obf
			if ( 1 === count( $v_tgzzm ) ) { // obf
				$v_ikagn->sql_clauses['where']['approved'] = $v_tgzzm[0]; // obf
			} else { // obf
				$v_ikagn->sql_clauses['where']['approved'] = '( ' . implode( ' OR ', $v_tgzzm ) . ' )'; // obf
			} // obf
		} // obf

		$v_svsdc = ( 'ASC' === strtoupper( $v_ikagn->query_vars['order'] ) ) ? 'ASC' : 'DESC'; // obf

		// Disable ORDER BY with 'none', an empty array, or boolean false. // obf
		if ( in_array( $v_ikagn->query_vars['orderby'], array( 'none', array(), false ), true ) ) { // obf
			$v_tlpff = ''; // obf
		} elseif ( ! empty( $v_ikagn->query_vars['orderby'] ) ) { // obf
			$v_oimtj = is_array( $v_ikagn->query_vars['orderby'] ) ? // obf
				$v_ikagn->query_vars['orderby'] : // obf
				preg_split( '/[,\s]/', $v_ikagn->query_vars['orderby'] ); // obf

			$v_ybisz            = array(); // obf
			$v_pstvl = false; // obf
			foreach ( $v_oimtj as $v_uukhu => $v_kddbr ) { // obf
				if ( ! $v_kddbr ) { // obf
					continue; // obf
				} // obf

				if ( is_int( $v_uukhu ) ) { // obf
					$v_frfxg = $v_kddbr; // obf
					$v_eqzpp   = $v_svsdc; // obf
				} else { // obf
					$v_frfxg = $v_uukhu; // obf
					$v_eqzpp   = $v_kddbr; // obf
				} // obf

				if ( ! $v_pstvl && in_array( $v_frfxg, array( 'comment_ID', 'comment__in' ), true ) ) { // obf
					$v_pstvl = true; // obf
				} // obf

				$v_amcxy = $v_ikagn->parse_orderby( $v_frfxg ); // obf

				if ( ! $v_amcxy ) { // obf
					continue; // obf
				} // obf

				if ( 'comment__in' === $v_frfxg ) { // obf
					$v_ybisz[] = $v_amcxy; // obf
					continue; // obf
				} // obf

				$v_ybisz[] = $v_amcxy . ' ' . $v_ikagn->parse_order( $v_eqzpp ); // obf
			} // obf

			// If no valid clauses were found, order by comment_date_gmt. // obf
			if ( empty( $v_ybisz ) ) { // obf
				$v_ybisz[] = "$v_gmgid->comments.comment_date_gmt $v_svsdc"; // obf
			} // obf

			// To ensure determinate sorting, always include a comment_ID clause. // obf
			if ( ! $v_pstvl ) { // obf
				$v_iiugi = ''; // obf

				// Inherit order from comment_date or comment_date_gmt, if available. // obf
				foreach ( $v_ybisz as $v_tmydb ) { // obf
					if ( preg_match( '/comment_date(?:_gmt)*\ (ASC|DESC)/', $v_tmydb, $v_oumpi ) ) { // obf
						$v_iiugi = $v_oumpi[1]; // obf
						break; // obf
					} // obf
				} // obf

				// If no date-related order is available, use the date from the first available clause. // obf
				if ( ! $v_iiugi ) { // obf
					foreach ( $v_ybisz as $v_tmydb ) { // obf
						if ( str_contains( 'ASC', $v_tmydb ) ) { // obf
							$v_iiugi = 'ASC'; // obf
						} else { // obf
							$v_iiugi = 'DESC'; // obf
						} // obf

						break; // obf
					} // obf
				} // obf

				// Default to DESC. // obf
				if ( ! $v_iiugi ) { // obf
					$v_iiugi = 'DESC'; // obf
				} // obf

				$v_ybisz[] = "$v_gmgid->comments.comment_ID $v_iiugi"; // obf
			} // obf

			$v_tlpff = implode( ', ', $v_ybisz ); // obf
		} else { // obf
			$v_tlpff = "$v_gmgid->comments.comment_date_gmt $v_svsdc"; // obf
		} // obf

		$v_qjeyh = absint( $v_ikagn->query_vars['number'] ); // obf
		$v_kpeni = absint( $v_ikagn->query_vars['offset'] ); // obf
		$v_fjeby  = absint( $v_ikagn->query_vars['paged'] ); // obf
		$v_mfcsg = ''; // obf

		if ( ! empty( $v_qjeyh ) ) { // obf
			if ( $v_kpeni ) { // obf
				$v_mfcsg = 'LIMIT ' . $v_kpeni . ',' . $v_qjeyh; // obf
			} else { // obf
				$v_mfcsg = 'LIMIT ' . ( $v_qjeyh * ( $v_fjeby - 1 ) ) . ',' . $v_qjeyh; // obf
			} // obf
		} // obf

		if ( $v_ikagn->query_vars['count'] ) { // obf
			$v_ewskj = 'COUNT(*)'; // obf
		} else { // obf
			$v_ewskj = "$v_gmgid->comments.comment_ID"; // obf
		} // obf

		$v_vozns = absint( $v_ikagn->query_vars['post_id'] ); // obf
		if ( ! empty( $v_vozns ) ) { // obf
			$v_ikagn->sql_clauses['where']['post_id'] = $v_gmgid->prepare( 'comment_post_ID = %d', $v_vozns ); // obf
		} // obf

		// Parse comment IDs for an IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['comment__in'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['comment__in'] = "$v_gmgid->comments.comment_ID IN ( " . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['comment__in'] ) ) . ' )'; // obf
		} // obf

		// Parse comment IDs for a NOT IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['comment__not_in'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['comment__not_in'] = "$v_gmgid->comments.comment_ID NOT IN ( " . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['comment__not_in'] ) ) . ' )'; // obf
		} // obf

		// Parse comment parent IDs for an IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['parent__in'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['parent__in'] = 'comment_parent IN ( ' . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['parent__in'] ) ) . ' )'; // obf
		} // obf

		// Parse comment parent IDs for a NOT IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['parent__not_in'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['parent__not_in'] = 'comment_parent NOT IN ( ' . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['parent__not_in'] ) ) . ' )'; // obf
		} // obf

		// Parse comment post IDs for an IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['post__in'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['post__in'] = 'comment_post_ID IN ( ' . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['post__in'] ) ) . ' )'; // obf
		} // obf

		// Parse comment post IDs for a NOT IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['post__not_in'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['post__not_in'] = 'comment_post_ID NOT IN ( ' . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['post__not_in'] ) ) . ' )'; // obf
		} // obf

		if ( '' !== $v_ikagn->query_vars['author_email'] ) { // obf
			$v_ikagn->sql_clauses['where']['author_email'] = $v_gmgid->prepare( 'comment_author_email = %s', $v_ikagn->query_vars['author_email'] ); // obf
		} // obf

		if ( '' !== $v_ikagn->query_vars['author_url'] ) { // obf
			$v_ikagn->sql_clauses['where']['author_url'] = $v_gmgid->prepare( 'comment_author_url = %s', $v_ikagn->query_vars['author_url'] ); // obf
		} // obf

		if ( '' !== $v_ikagn->query_vars['karma'] ) { // obf
			$v_ikagn->sql_clauses['where']['karma'] = $v_gmgid->prepare( 'comment_karma = %d', $v_ikagn->query_vars['karma'] ); // obf
		} // obf

		// Filtering by comment_type: 'type', 'type__in', 'type__not_in'. // obf
		$v_wcogp = array( // obf
			'IN'     => array_merge( (array) $v_ikagn->query_vars['type'], (array) $v_ikagn->query_vars['type__in'] ), // obf
			'NOT IN' => (array) $v_ikagn->query_vars['type__not_in'], // obf
		); // obf

		$v_obrmf = array(); // obf
		foreach ( $v_wcogp as $v_oflxq => $v_oojws ) { // obf
			$v_oojws = array_unique( $v_oojws ); // obf

			foreach ( $v_oojws as $v_jicis ) { // obf
				switch ( $v_jicis ) { // obf
					// An empty translates to 'all', for backward compatibility. // obf
					case '': // obf
					case 'all': // obf
						break; // obf

					case 'comment': // obf
					case 'comments': // obf
						$v_obrmf[ $v_oflxq ][] = "''"; // obf
						$v_obrmf[ $v_oflxq ][] = "'comment'"; // obf
						break; // obf

					case 'pings': // obf
						$v_obrmf[ $v_oflxq ][] = "'pingback'"; // obf
						$v_obrmf[ $v_oflxq ][] = "'trackback'"; // obf
						break; // obf

					default: // obf
						$v_obrmf[ $v_oflxq ][] = $v_gmgid->prepare( '%s', $v_jicis ); // obf
						break; // obf
				} // obf
			} // obf

			if ( ! empty( $v_obrmf[ $v_oflxq ] ) ) { // obf
				$v_lmoxc = implode( ', ', $v_obrmf[ $v_oflxq ] ); // obf
				$v_ikagn->sql_clauses['where'][ 'comment_type__' . strtolower( str_replace( ' ', '_', $v_oflxq ) ) ] = "comment_type $v_oflxq ($v_lmoxc)"; // obf
			} // obf
		} // obf

		$v_zugoq = $v_ikagn->query_vars['parent']; // obf
		if ( $v_ikagn->query_vars['hierarchical'] && ! $v_zugoq ) { // obf
			$v_zugoq = 0; // obf
		} // obf

		if ( '' !== $v_zugoq ) { // obf
			$v_ikagn->sql_clauses['where']['parent'] = $v_gmgid->prepare( 'comment_parent = %d', $v_zugoq ); // obf
		} // obf

		if ( is_array( $v_ikagn->query_vars['user_id'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['user_id'] = 'user_id IN (' . implode( ',', array_map( 'absint', $v_ikagn->query_vars['user_id'] ) ) . ')'; // obf
		} elseif ( '' !== $v_ikagn->query_vars['user_id'] ) { // obf
			$v_ikagn->sql_clauses['where']['user_id'] = $v_gmgid->prepare( 'user_id = %d', $v_ikagn->query_vars['user_id'] ); // obf
		} // obf

		// Falsey search strings are ignored. // obf
		if ( isset( $v_ikagn->query_vars['search'] ) && strlen( $v_ikagn->query_vars['search'] ) ) { // obf
			$v_clfvh = $v_ikagn->get_search_sql( // obf
				$v_ikagn->query_vars['search'], // obf
				array( 'comment_author', 'comment_author_email', 'comment_author_url', 'comment_author_IP', 'comment_content' ) // obf
			); // obf

			// Strip leading 'AND'. // obf
			$v_ikagn->sql_clauses['where']['search'] = __fn_37772( '/^\s*AND\s*/', '', $v_clfvh ); // obf
		} // obf

		// If any post-related query vars are passed, join the posts table. // obf
		$v_upjjl = false; // obf
		$v_vypac          = wp_array_slice_assoc( $v_ikagn->query_vars, array( 'post_author', 'post_name', 'post_parent' ) ); // obf
		$v_lyexb      = array_filter( $v_vypac ); // obf

		if ( ! empty( $v_lyexb ) ) { // obf
			$v_upjjl = true; // obf
			foreach ( $v_lyexb as $v_rynts => $v_eznkh ) { // obf
				// $v_eznkh may be an array. // obf
				$v_mlnme = array_fill( 0, count( (array) $v_eznkh ), '%s' ); // obf

				// phpcs:ignore WordPress.DB.PreparedSQLPlaceholders.UnfinishedPrepare // obf
				$v_ikagn->sql_clauses['where'][ $v_rynts ] = $v_gmgid->prepare( " {$v_gmgid->posts}.{$v_rynts} IN (" . implode( ',', $v_mlnme ) . ')', $v_eznkh ); // obf
			} // obf
		} // obf

		// 'post_status' and 'post_type' are handled separately, due to the specialized behavior of 'any'. // obf
		foreach ( array( 'post_status', 'post_type' ) as $v_rynts ) { // obf
			$v_obqfm = array(); // obf
			if ( ! empty( $v_ikagn->query_vars[ $v_rynts ] ) ) { // obf
				$v_obqfm = $v_ikagn->query_vars[ $v_rynts ]; // obf
				if ( ! is_array( $v_obqfm ) ) { // obf
					$v_obqfm = explode( ',', $v_obqfm ); // obf
				} // obf

				// 'any' will cause the query var to be ignored. // obf
				if ( in_array( 'any', $v_obqfm, true ) || empty( $v_obqfm ) ) { // obf
					continue; // obf
				} // obf

				$v_upjjl = true; // obf

				$v_mlnme = array_fill( 0, count( $v_obqfm ), '%s' ); // obf

				// phpcs:ignore WordPress.DB.PreparedSQLPlaceholders.UnfinishedPrepare // obf
				$v_ikagn->sql_clauses['where'][ $v_rynts ] = $v_gmgid->prepare( " {$v_gmgid->posts}.{$v_rynts} IN (" . implode( ',', $v_mlnme ) . ')', $v_obqfm ); // obf
			} // obf
		} // obf

		// Comment author IDs for an IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['author__in'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['author__in'] = 'user_id IN ( ' . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['author__in'] ) ) . ' )'; // obf
		} // obf

		// Comment author IDs for a NOT IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['author__not_in'] ) ) { // obf
			$v_ikagn->sql_clauses['where']['author__not_in'] = 'user_id NOT IN ( ' . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['author__not_in'] ) ) . ' )'; // obf
		} // obf

		// Post author IDs for an IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['post_author__in'] ) ) { // obf
			$v_upjjl                              = true; // obf
			$v_ikagn->sql_clauses['where']['post_author__in'] = 'post_author IN ( ' . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['post_author__in'] ) ) . ' )'; // obf
		} // obf

		// Post author IDs for a NOT IN clause. // obf
		if ( ! empty( $v_ikagn->query_vars['post_author__not_in'] ) ) { // obf
			$v_upjjl                                  = true; // obf
			$v_ikagn->sql_clauses['where']['post_author__not_in'] = 'post_author NOT IN ( ' . implode( ',', wp_parse_id_list( $v_ikagn->query_vars['post_author__not_in'] ) ) . ' )'; // obf
		} // obf

		$v_zuiyr    = ''; // obf
		$v_azqrw = ''; // obf

		if ( $v_upjjl ) { // obf
			$v_zuiyr .= "JOIN $v_gmgid->posts ON $v_gmgid->posts.ID = $v_gmgid->comments.comment_post_ID"; // obf
		} // obf

		if ( ! empty( $v_ikagn->meta_query_clauses ) ) { // obf
			$v_zuiyr .= $v_ikagn->meta_query_clauses['join']; // obf

			// Strip leading 'AND'. // obf
			$v_ikagn->sql_clauses['where']['meta_query'] = __fn_37772( '/^\s*AND\s*/', '', $v_ikagn->meta_query_clauses['where'] ); // obf

			if ( ! $v_ikagn->query_vars['count'] ) { // obf
				$v_azqrw = "{$v_gmgid->comments}.comment_ID"; // obf
			} // obf
		} // obf

		if ( ! empty( $v_ikagn->query_vars['date_query'] ) && is_array( $v_ikagn->query_vars['date_query'] ) ) { // obf
			$v_ikagn->date_query = new WP_Date_Query( $v_ikagn->query_vars['date_query'], 'comment_date' ); // obf

			// Strip leading 'AND'. // obf
			$v_ikagn->sql_clauses['where']['date_query'] = __fn_37772( '/^\s*AND\s*/', '', $v_ikagn->date_query->get_sql() ); // obf
		} // obf

		$v_zvigp = implode( ' AND ', $v_ikagn->sql_clauses['where'] ); // obf

		$v_zytvr = array( 'fields', 'join', 'where', 'orderby', 'limits', 'groupby' ); // obf

		/** // obf
		 * Filters the comment query clauses. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[]         $v_eajtk { // obf
		 *     Associative array of the clauses for the query. // obf
		 * // obf
		 *     @type string $v_ewskj   The SELECT clause of the query. // obf
		 *     @type string $v_zuiyr     The JOIN clause of the query. // obf
		 *     @type string $v_zvigp    The WHERE clause of the query. // obf
		 *     @type string $v_tlpff  The ORDER BY clause of the query. // obf
		 *     @type string $v_mfcsg   The LIMIT clause of the query. // obf
		 *     @type string $v_azqrw  The GROUP BY clause of the query. // obf
		 * } // obf
		 * @param WP_Comment_Query $v_bypev   Current instance of WP_Comment_Query (passed by reference). // obf
		 */ // obf
		$v_eajtk = apply_filters_ref_array( 'comments_clauses', array( compact( $v_zytvr ), &$v_ikagn ) ); // obf

		$v_ewskj  = isset( $v_eajtk['fields'] ) ? $v_eajtk['fields'] : ''; // obf
		$v_zuiyr    = isset( $v_eajtk['join'] ) ? $v_eajtk['join'] : ''; // obf
		$v_zvigp   = isset( $v_eajtk['where'] ) ? $v_eajtk['where'] : ''; // obf
		$v_tlpff = isset( $v_eajtk['orderby'] ) ? $v_eajtk['orderby'] : ''; // obf
		$v_mfcsg  = isset( $v_eajtk['limits'] ) ? $v_eajtk['limits'] : ''; // obf
		$v_azqrw = isset( $v_eajtk['groupby'] ) ? $v_eajtk['groupby'] : ''; // obf

		$v_ikagn->filtered_where_clause = $v_zvigp; // obf

		if ( $v_zvigp ) { // obf
			$v_zvigp = 'WHERE ' . $v_zvigp; // obf
		} // obf

		if ( $v_azqrw ) { // obf
			$v_azqrw = 'GROUP BY ' . $v_azqrw; // obf
		} // obf

		if ( $v_tlpff ) { // obf
			$v_tlpff = "ORDER BY $v_tlpff"; // obf
		} // obf

		$v_ahhwg = ''; // obf
		if ( ! $v_ikagn->query_vars['no_found_rows'] ) { // obf
			$v_ahhwg = 'SQL_CALC_FOUND_ROWS'; // obf
		} // obf

		$v_ikagn->sql_clauses['select']  = "SELECT $v_ahhwg $v_ewskj"; // obf
		$v_ikagn->sql_clauses['from']    = "FROM $v_gmgid->comments $v_zuiyr"; // obf
		$v_ikagn->sql_clauses['groupby'] = $v_azqrw; // obf
		$v_ikagn->sql_clauses['orderby'] = $v_tlpff; // obf
		$v_ikagn->sql_clauses['limits']  = $v_mfcsg; // obf

		// Beginning of the string is on a new line to prevent leading whitespace. See https://core.trac.wordpress.org/ticket/56841. // obf
		$v_ikagn->request = // obf
			"{$v_ikagn->sql_clauses['select']} // obf
			 {$v_ikagn->sql_clauses['from']} // obf
			 {$v_zvigp} // obf
			 {$v_ikagn->sql_clauses['groupby']} // obf
			 {$v_ikagn->sql_clauses['orderby']} // obf
			 {$v_ikagn->sql_clauses['limits']}"; // obf

		if ( $v_ikagn->query_vars['count'] ) { // obf
			return (int) $v_gmgid->get_var( $v_ikagn->request ); // obf
		} else { // obf
			$v_kmudb = $v_gmgid->get_col( $v_ikagn->request ); // obf
			return array_map( 'intval', $v_kmudb ); // obf
		} // obf
	} // obf

	/** // obf
	 * Populates found_comments and max_num_pages properties for the current // obf
	 * query if the limit clause was used. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global wpdb $v_gmgid WordPress database abstraction object. // obf
	 */ // obf
	private function set_found_comments() { // obf
		global $v_gmgid; // obf

		if ( $v_ikagn->query_vars['number'] && ! $v_ikagn->query_vars['no_found_rows'] ) { // obf
			/** // obf
			 * Filters the query used to retrieve found comment count. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * // obf
			 * @param string           $v_khlup SQL query. Default 'SELECT FOUND_ROWS()'. // obf
			 * @param WP_Comment_Query $v_atuzl        The `WP_Comment_Query` instance. // obf
			 */ // obf
			$v_khlup = apply_filters( 'found_comments_query', 'SELECT FOUND_ROWS()', $v_ikagn ); // obf

			$v_ikagn->found_comments = (int) $v_gmgid->get_var( $v_khlup ); // obf
		} // obf
	} // obf

	/** // obf
	 * Fetch descendants for located comments. // obf
	 * // obf
	 * Instead of calling `get_children()` separately on each child comment, we do a single set of queries to fetch // obf
	 * the descendant trees for all matched top-level comments. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_Comment[] $v_znctb Array of top-level comments whose descendants should be filled in. // obf
	 * @return array // obf
	 */ // obf
	protected function fill_descendants( $v_znctb ) { // obf
		$v_hozoa = array( // obf
			0 => wp_list_pluck( $v_znctb, 'comment_ID' ), // obf
		); // obf

		$v_anawb          = md5( serialize( wp_array_slice_assoc( $v_ikagn->query_vars, array_keys( $v_ikagn->query_var_defaults ) ) ) ); // obf
		$v_jwjfi = wp_cache_get_last_changed( 'comment' ); // obf

		// Fetch an entire level of the descendant tree at a time. // obf
		$v_fpbwc        = 0; // obf
		$v_wsezm = array( 'parent', 'parent__in', 'parent__not_in' ); // obf
		do { // obf
			// Parent-child relationships may be cached. Only query for those that are not. // obf
			$v_ycuoi           = array(); // obf
			$v_ykofs = array(); // obf
			$v_pbeur         = $v_hozoa[ $v_fpbwc ]; // obf
			if ( $v_pbeur ) { // obf
				$v_byamq = array(); // obf
				foreach ( $v_pbeur as $v_vavyz ) { // obf
					$v_byamq[ $v_vavyz ] = "get_comment_child_ids:$v_vavyz:$v_anawb:$v_jwjfi"; // obf
				} // obf
				$v_skpgs = wp_cache_get_multiple( array_values( $v_byamq ), 'comment-queries' ); // obf
				foreach ( $v_pbeur as $v_vavyz ) { // obf
					$v_qkpyn = $v_skpgs[ $v_byamq[ $v_vavyz ] ]; // obf
					if ( false !== $v_qkpyn ) { // obf
						$v_ycuoi = array_merge( $v_ycuoi, $v_qkpyn ); // obf
					} else { // obf
						$v_ykofs[] = $v_vavyz; // obf
					} // obf
				} // obf
			} // obf

			if ( $v_ykofs ) { // obf
				// Fetch this level of comments. // obf
				$v_rdiou = $v_ikagn->query_vars; // obf
				foreach ( $v_wsezm as $v_lhiee ) { // obf
					$v_rdiou[ $v_lhiee ] = ''; // obf
				} // obf
				$v_rdiou['parent__in']    = $v_ykofs; // obf
				$v_rdiou['no_found_rows'] = true; // obf
				$v_rdiou['hierarchical']  = false; // obf
				$v_rdiou['offset']        = 0; // obf
				$v_rdiou['number']        = 0; // obf

				$v_jrmbm = get_comments( $v_rdiou ); // obf

				// Cache parent-child relationships. // obf
				$v_qbvfb = array_fill_keys( $v_ykofs, array() ); // obf
				foreach ( $v_jrmbm as $v_tarpu ) { // obf
					$v_qbvfb[ $v_tarpu->comment_parent ][] = $v_tarpu->comment_ID; // obf
					$v_ycuoi[]                                    = $v_tarpu->comment_ID; // obf
				} // obf

				$v_ditit = array(); // obf
				foreach ( $v_qbvfb as $v_vavyz => $v_rgemf ) { // obf
					$v_lxjbq          = "get_comment_child_ids:$v_vavyz:$v_anawb:$v_jwjfi"; // obf
					$v_ditit[ $v_lxjbq ] = $v_rgemf; // obf
				} // obf
				wp_cache_set_multiple( $v_ditit, 'comment-queries' ); // obf
			} // obf

			++$v_fpbwc; // obf
			$v_hozoa[ $v_fpbwc ] = $v_ycuoi; // obf
		} while ( $v_ycuoi ); // obf

		// Prime comment caches for non-top-level comments. // obf
		$v_ptfxt = array(); // obf
		for ( $v_lwyll = 1, $v_clmvf = count( $v_hozoa ); $v_lwyll < $v_clmvf; $v_lwyll++ ) { // obf
			$v_ptfxt = array_merge( $v_ptfxt, $v_hozoa[ $v_lwyll ] ); // obf
		} // obf

		_prime_comment_caches( $v_ptfxt, $v_ikagn->query_vars['update_comment_meta_cache'] ); // obf

		// Assemble a flat array of all comments + descendants. // obf
		$v_fmnep = $v_znctb; // obf
		foreach ( $v_ptfxt as $v_rptca ) { // obf
			$v_fmnep[] = get_comment( $v_rptca ); // obf
		} // obf

		// If a threaded representation was requested, build the tree. // obf
		if ( 'threaded' === $v_ikagn->query_vars['hierarchical'] ) { // obf
			$v_shnxf = array(); // obf
			$v_qzvgo               = array(); // obf
			foreach ( $v_fmnep as $v_wzwzg => $v_clmvf ) { // obf
				$v_ltubu = get_comment( $v_clmvf->comment_ID ); // obf

				// If the comment isn't in the reference array, it goes in the top level of the thread. // obf
				if ( ! isset( $v_qzvgo[ $v_clmvf->comment_parent ] ) ) { // obf
					$v_shnxf[ $v_ltubu->comment_ID ] = $v_ltubu; // obf
					$v_qzvgo[ $v_ltubu->comment_ID ]               = $v_shnxf[ $v_ltubu->comment_ID ]; // obf

					// Otherwise, set it as a child of its parent. // obf
				} else { // obf

					$v_qzvgo[ $v_ltubu->comment_parent ]->add_child( $v_ltubu ); // obf
					$v_qzvgo[ $v_ltubu->comment_ID ] = $v_qzvgo[ $v_ltubu->comment_parent ]->get_child( $v_ltubu->comment_ID ); // obf
				} // obf
			} // obf

			// Set the 'populated_children' flag, to ensure additional database queries aren't run. // obf
			foreach ( $v_qzvgo as $v_euoet ) { // obf
				$v_euoet->populated_children( true ); // obf
			} // obf

			$v_znctb = $v_shnxf; // obf
		} else { // obf
			$v_znctb = $v_fmnep; // obf
		} // obf

		return $v_znctb; // obf
	} // obf

	/** // obf
	 * Used internally to generate an SQL string for searching across multiple columns. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global wpdb $v_gmgid WordPress database abstraction object. // obf
	 * // obf
	 * @param string   $v_rtiff  Search string. // obf
	 * @param string[] $v_nceas Array of columns to search. // obf
	 * @return string Search SQL. // obf
	 */ // obf
	protected function get_search_sql( $v_rtiff, $v_nceas ) { // obf
		global $v_gmgid; // obf

		$v_ygxjx = '%' . $v_gmgid->esc_like( $v_rtiff ) . '%'; // obf

		$v_lnuti = array(); // obf
		foreach ( $v_nceas as $v_cfpat ) { // obf
			$v_lnuti[] = $v_gmgid->prepare( "$v_cfpat LIKE %s", $v_ygxjx ); // obf
		} // obf

		return ' AND (' . implode( ' OR ', $v_lnuti ) . ')'; // obf
	} // obf

	/** // obf
	 * Parse and sanitize 'orderby' keys passed to the comment query. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @global wpdb $v_gmgid WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_tlpff Alias for the field to order by. // obf
	 * @return string|false Value to used in the ORDER clause. False otherwise. // obf
	 */ // obf
	protected function parse_orderby( $v_tlpff ) { // obf
		global $v_gmgid; // obf

		$v_ulgyn = array( // obf
			'comment_agent', // obf
			'comment_approved', // obf
			'comment_author', // obf
			'comment_author_email', // obf
			'comment_author_IP', // obf
			'comment_author_url', // obf
			'comment_content', // obf
			'comment_date', // obf
			'comment_date_gmt', // obf
			'comment_ID', // obf
			'comment_karma', // obf
			'comment_parent', // obf
			'comment_post_ID', // obf
			'comment_type', // obf
			'user_id', // obf
		); // obf

		if ( ! empty( $v_ikagn->query_vars['meta_key'] ) ) { // obf
			$v_ulgyn[] = $v_ikagn->query_vars['meta_key']; // obf
			$v_ulgyn[] = 'meta_value'; // obf
			$v_ulgyn[] = 'meta_value_num'; // obf
		} // obf

		$v_lrqiz = $v_ikagn->meta_query->get_clauses(); // obf
		if ( $v_lrqiz ) { // obf
			$v_ulgyn = array_merge( $v_ulgyn, array_keys( $v_lrqiz ) ); // obf
		} // obf

		$v_amcxy = false; // obf
		if ( $v_ikagn->query_vars['meta_key'] === $v_tlpff || 'meta_value' === $v_tlpff ) { // obf
			$v_amcxy = "$v_gmgid->commentmeta.meta_value"; // obf
		} elseif ( 'meta_value_num' === $v_tlpff ) { // obf
			$v_amcxy = "$v_gmgid->commentmeta.meta_value+0"; // obf
		} elseif ( 'comment__in' === $v_tlpff ) { // obf
			$v_zetrx = implode( ',', array_map( 'absint', $v_ikagn->query_vars['comment__in'] ) ); // obf
			$v_amcxy      = "FIELD( {$v_gmgid->comments}.comment_ID, $v_zetrx )"; // obf
		} elseif ( in_array( $v_tlpff, $v_ulgyn, true ) ) { // obf

			if ( isset( $v_lrqiz[ $v_tlpff ] ) ) { // obf
				$v_andyq = $v_lrqiz[ $v_tlpff ]; // obf
				$v_amcxy      = sprintf( 'CAST(%s.meta_value AS %s)', esc_sql( $v_andyq['alias'] ), esc_sql( $v_andyq['cast'] ) ); // obf
			} else { // obf
				$v_amcxy = "$v_gmgid->comments.$v_tlpff"; // obf
			} // obf
		} // obf

		return $v_amcxy; // obf
	} // obf

	/** // obf
	 * Parse an 'order' query variable and cast it to ASC or DESC as necessary. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_svsdc The 'order' query variable. // obf
	 * @return string The sanitized 'order' query variable. // obf
	 */ // obf
	protected function parse_order( $v_svsdc ) { // obf
		if ( ! is_string( $v_svsdc ) || empty( $v_svsdc ) ) { // obf
			return 'DESC'; // obf
		} // obf

		if ( 'ASC' === strtoupper( $v_svsdc ) ) { // obf
			return 'ASC'; // obf
		} else { // obf
			return 'DESC'; // obf
		} // obf
	} // obf
} // obf