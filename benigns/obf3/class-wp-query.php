
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Query API: WP_Query class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Query // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * The WordPress Query class. // obf
 * // obf
 * @link https://developer.wordpress.org/reference/classes/wp_query/ // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.5.0 Removed the `$v_gbrcx` property. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Query { // obf

	/** // obf
	 * Query vars set by the user. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_kjouc; // obf

	/** // obf
	 * Query vars, after parsing. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_unelh = array(); // obf

	/** // obf
	 * Taxonomy query, as passed to get_tax_sql(). // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var WP_Tax_Query|null A taxonomy query instance. // obf
	 */ // obf
	public $v_pvuln; // obf

	/** // obf
	 * Metadata query container. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @var WP_Meta_Query A meta query instance. // obf
	 */ // obf
	public $v_tmxxv = false; // obf

	/** // obf
	 * Date query container. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var WP_Date_Query A date query instance. // obf
	 */ // obf
	public $v_irpjk = false; // obf

	/** // obf
	 * Holds the data for a single object that is queried. // obf
	 * // obf
	 * Holds the contents of a post, page, category, attachment. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var WP_Term|WP_Post_Type|WP_Post|WP_User|null // obf
	 */ // obf
	public $v_hnvpx; // obf

	/** // obf
	 * The ID of the queried object. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_yakyh; // obf

	/** // obf
	 * SQL for the database query. // obf
	 * // obf
	 * @since 2.0.1 // obf
	 * @var string // obf
	 */ // obf
	public $v_xgbji; // obf

	/** // obf
	 * Array of post objects or post IDs. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var WP_Post[]|int[] // obf
	 */ // obf
	public $v_dcjmz; // obf

	/** // obf
	 * The number of posts for the current query. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_dzhgj = 0; // obf

	/** // obf
	 * Index of the current item in the loop. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_acqst = -1; // obf

	/** // obf
	 * Whether the caller is before the loop. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_xhlql = true; // obf

	/** // obf
	 * Whether the loop has started and the caller is in the loop. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_snlaa = false; // obf

	/** // obf
	 * The current post. // obf
	 * // obf
	 * This property does not get populated when the `fields` argument is set to // obf
	 * `ids` or `id=>parent`. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var WP_Post|null // obf
	 */ // obf
	public $v_dybha; // obf

	/** // obf
	 * The list of comments for current post. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * @var WP_Comment[] // obf
	 */ // obf
	public $v_ysvhm; // obf

	/** // obf
	 * The number of comments for the posts. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_uqbig = 0; // obf

	/** // obf
	 * The index of the comment in the comment loop. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_mymph = -1; // obf

	/** // obf
	 * Current comment object. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * @var WP_Comment // obf
	 */ // obf
	public $v_hjisg; // obf

	/** // obf
	 * The number of found posts for the current query. // obf
	 * // obf
	 * If limit clause was not used, equals $v_dzhgj. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_olgol = 0; // obf

	/** // obf
	 * The number of pages. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_ysuhr = 0; // obf

	/** // obf
	 * The number of comment pages. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_apqqc = 0; // obf

	/** // obf
	 * Signifies whether the current query is for a single post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_nueyl = false; // obf

	/** // obf
	 * Signifies whether the current query is for a preview. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_xoewu = false; // obf

	/** // obf
	 * Signifies whether the current query is for a page. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_ksdcf = false; // obf

	/** // obf
	 * Signifies whether the current query is for an archive. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_zjunq = false; // obf

	/** // obf
	 * Signifies whether the current query is for a date archive. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_btycg = false; // obf

	/** // obf
	 * Signifies whether the current query is for a year archive. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_eegcy = false; // obf

	/** // obf
	 * Signifies whether the current query is for a month archive. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_luhqo = false; // obf

	/** // obf
	 * Signifies whether the current query is for a day archive. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_qrdax = false; // obf

	/** // obf
	 * Signifies whether the current query is for a specific time. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_nbhit = false; // obf

	/** // obf
	 * Signifies whether the current query is for an author archive. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_kyxcj = false; // obf

	/** // obf
	 * Signifies whether the current query is for a category archive. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_jzkuz = false; // obf

	/** // obf
	 * Signifies whether the current query is for a tag archive. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_eigpe = false; // obf

	/** // obf
	 * Signifies whether the current query is for a taxonomy archive. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_yptyl = false; // obf

	/** // obf
	 * Signifies whether the current query is for a search. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_gmtvi = false; // obf

	/** // obf
	 * Signifies whether the current query is for a feed. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_rwear = false; // obf

	/** // obf
	 * Signifies whether the current query is for a comment feed. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_gsvsa = false; // obf

	/** // obf
	 * Signifies whether the current query is for trackback endpoint call. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_chhek = false; // obf

	/** // obf
	 * Signifies whether the current query is for the site homepage. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_midij = false; // obf

	/** // obf
	 * Signifies whether the current query is for the Privacy Policy page. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_ccslh = false; // obf

	/** // obf
	 * Signifies whether the current query couldn't find anything. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_yhbpu = false; // obf

	/** // obf
	 * Signifies whether the current query is for an embed. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_obipq = false; // obf

	/** // obf
	 * Signifies whether the current query is for a paged result and not for the first page. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_mxznx = false; // obf

	/** // obf
	 * Signifies whether the current query is for an administrative interface page. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_eoanb = false; // obf

	/** // obf
	 * Signifies whether the current query is for an attachment page. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_iteqx = false; // obf

	/** // obf
	 * Signifies whether the current query is for an existing single post of any post type // obf
	 * (post, attachment, page, custom post types). // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_zqizz = false; // obf

	/** // obf
	 * Signifies whether the current query is for the robots.txt file. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_lxzyk = false; // obf

	/** // obf
	 * Signifies whether the current query is for the favicon.ico file. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_vkluf = false; // obf

	/** // obf
	 * Signifies whether the current query is for the page_for_posts page. // obf
	 * // obf
	 * Basically, the homepage if the option isn't set for the static homepage. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_wlaay = false; // obf

	/** // obf
	 * Signifies whether the current query is for a post type archive. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_juzdq = false; // obf

	/** // obf
	 * Stores the ->query_vars state like md5(serialize( $v_iierc->query_vars ) ) so we know // obf
	 * whether we have to re-parse because something has changed // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var bool|string // obf
	 */ // obf
	private $v_yzrsf = false; // obf

	/** // obf
	 * Whether query vars have changed since the initial parse_query() call. Used to catch modifications to query vars made // obf
	 * via pre_get_posts hooks. // obf
	 * // obf
	 * @since 3.1.1 // obf
	 * @var bool // obf
	 */ // obf
	private $v_cgbex = true; // obf

	/** // obf
	 * Set if post thumbnails are cached // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_ecjjb = false; // obf

	/** // obf
	 * Controls whether an attachment query should include filenames or not. // obf
	 * // obf
	 * @since 6.0.3 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_ulbfr = false; // obf

	/** // obf
	 * Cached list of search stopwords. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_ccjxq; // obf

	private $v_tzpfy = array( 'query_vars_hash', 'query_vars_changed' ); // obf

	private $v_aroku = array( 'init_query_flags', 'parse_tax_query' ); // obf

	/** // obf
	 * The cache key generated by the query. // obf
	 * // obf
	 * The cache key is generated by the method ::generate_cache_key() after the // obf
	 * query has been normalized. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_trmuc = ''; // obf

	/** // obf
	 * Resets query flags to false. // obf
	 * // obf
	 * The query flags are what page info WordPress was able to figure out. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	private function init_query_flags() { // obf
		$v_iierc->is_single            = false; // obf
		$v_iierc->is_preview           = false; // obf
		$v_iierc->is_page              = false; // obf
		$v_iierc->is_archive           = false; // obf
		$v_iierc->is_date              = false; // obf
		$v_iierc->is_year              = false; // obf
		$v_iierc->is_month             = false; // obf
		$v_iierc->is_day               = false; // obf
		$v_iierc->is_time              = false; // obf
		$v_iierc->is_author            = false; // obf
		$v_iierc->is_category          = false; // obf
		$v_iierc->is_tag               = false; // obf
		$v_iierc->is_tax               = false; // obf
		$v_iierc->is_search            = false; // obf
		$v_iierc->is_feed              = false; // obf
		$v_iierc->is_comment_feed      = false; // obf
		$v_iierc->is_trackback         = false; // obf
		$v_iierc->is_home              = false; // obf
		$v_iierc->is_privacy_policy    = false; // obf
		$v_iierc->is_404               = false; // obf
		$v_iierc->is_paged             = false; // obf
		$v_iierc->is_admin             = false; // obf
		$v_iierc->is_attachment        = false; // obf
		$v_iierc->is_singular          = false; // obf
		$v_iierc->is_robots            = false; // obf
		$v_iierc->is_favicon           = false; // obf
		$v_iierc->is_posts_page        = false; // obf
		$v_iierc->is_post_type_archive = false; // obf
	} // obf

	/** // obf
	 * Initiates object properties and sets default values. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	public function init() { // obf
		unset( $v_iierc->posts ); // obf
		unset( $v_iierc->query ); // obf
		$v_iierc->query_vars = array(); // obf
		unset( $v_iierc->queried_object ); // obf
		unset( $v_iierc->queried_object_id ); // obf
		$v_iierc->post_count   = 0; // obf
		$v_iierc->current_post = -1; // obf
		$v_iierc->in_the_loop  = false; // obf
		$v_iierc->before_loop  = true; // obf
		unset( $v_iierc->request ); // obf
		unset( $v_iierc->post ); // obf
		unset( $v_iierc->comments ); // obf
		unset( $v_iierc->comment ); // obf
		$v_iierc->comment_count         = 0; // obf
		$v_iierc->current_comment       = -1; // obf
		$v_iierc->found_posts           = 0; // obf
		$v_iierc->max_num_pages         = 0; // obf
		$v_iierc->max_num_comment_pages = 0; // obf

		$v_iierc->init_query_flags(); // obf
	} // obf

	/** // obf
	 * Reparses the query vars. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	public function parse_query_vars() { // obf
		$v_iierc->parse_query(); // obf
	} // obf

	/** // obf
	 * Fills in the query variables, which do not exist within the parameter. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 4.5.0 Removed the `comments_popup` public query variable. // obf
	 * // obf
	 * @param array $v_unelh Defined query variables. // obf
	 * @return array Complete query variables with undefined ones filled in empty. // obf
	 */ // obf
	public function fill_query_vars( $v_unelh ) { // obf
		$v_icqbz = array( // obf
			'error', // obf
			'm', // obf
			'p', // obf
			'post_parent', // obf
			'subpost', // obf
			'subpost_id', // obf
			'attachment', // obf
			'attachment_id', // obf
			'name', // obf
			'pagename', // obf
			'page_id', // obf
			'second', // obf
			'minute', // obf
			'hour', // obf
			'day', // obf
			'monthnum', // obf
			'year', // obf
			'w', // obf
			'category_name', // obf
			'tag', // obf
			'cat', // obf
			'tag_id', // obf
			'author', // obf
			'author_name', // obf
			'feed', // obf
			'tb', // obf
			'paged', // obf
			'meta_key', // obf
			'meta_value', // obf
			'preview', // obf
			's', // obf
			'sentence', // obf
			'title', // obf
			'fields', // obf
			'menu_order', // obf
			'embed', // obf
		); // obf

		foreach ( $v_icqbz as $v_hwvhb ) { // obf
			if ( ! isset( $v_unelh[ $v_hwvhb ] ) ) { // obf
				$v_unelh[ $v_hwvhb ] = ''; // obf
			} // obf
		} // obf

		$v_colpt = array( // obf
			'category__in', // obf
			'category__not_in', // obf
			'category__and', // obf
			'post__in', // obf
			'post__not_in', // obf
			'post_name__in', // obf
			'tag__in', // obf
			'tag__not_in', // obf
			'tag__and', // obf
			'tag_slug__in', // obf
			'tag_slug__and', // obf
			'post_parent__in', // obf
			'post_parent__not_in', // obf
			'author__in', // obf
			'author__not_in', // obf
			'search_columns', // obf
		); // obf

		foreach ( $v_colpt as $v_hwvhb ) { // obf
			if ( ! isset( $v_unelh[ $v_hwvhb ] ) ) { // obf
				$v_unelh[ $v_hwvhb ] = array(); // obf
			} // obf
		} // obf

		return $v_unelh; // obf
	} // obf

	/** // obf
	 * Parses a query string and sets query type booleans. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.2.0 Introduced the ability to order by specific clauses of a `$v_tmxxv`, by passing the clause's // obf
	 *              array key to `$v_aqqcx`. // obf
	 * @since 4.4.0 Introduced `$v_bjmiz` and `$v_bawcf` parameters. `$v_hqgwz` was updated to support excluded // obf
	 *              search terms, by prepending a hyphen. // obf
	 * @since 4.5.0 Removed the `$v_gbrcx` parameter. // obf
	 *              Introduced the `$v_gghiv` and `$v_nvprs` parameters. // obf
	 *              Introduced `RAND(x)` syntax for `$v_aqqcx`, which allows an integer seed value to random sorts. // obf
	 * @since 4.6.0 Added 'post_name__in' support for `$v_aqqcx`. Introduced the `$v_cgidj` argument. // obf
	 * @since 4.9.0 Introduced the `$v_uqbig` parameter. // obf
	 * @since 5.1.0 Introduced the `$v_matrh` parameter. // obf
	 * @since 5.3.0 Introduced the `$v_admbh` parameter. // obf
	 * @since 6.1.0 Introduced the `$v_uxvgr` parameter. // obf
	 * @since 6.2.0 Introduced the `$v_wkyka` parameter. // obf
	 * // obf
	 * @param string|array $v_kjouc { // obf
	 *     Optional. Array or string of Query parameters. // obf
	 * // obf
	 *     @type int             $v_djjtw          Attachment post ID. Used for 'attachment' post_type. // obf
	 *     @type int|string      $v_zakne                 Author ID, or comma-separated list of IDs. // obf
	 *     @type string          $v_bqzhk            User 'user_nicename'. // obf
	 *     @type int[]           $v_tkovz             An array of author IDs to query from. // obf
	 *     @type int[]           $v_omfdk         An array of author IDs not to query from. // obf
	 *     @type bool            $v_wjhjj          Whether to cache post information. Default true. // obf
	 *     @type int|string      $v_lmvyh                    Category ID or comma-separated list of IDs (this or any children). // obf
	 *     @type int[]           $v_domka          An array of category IDs (AND in). // obf
	 *     @type int[]           $v_focmh           An array of category IDs (OR in, no children). // obf
	 *     @type int[]           $v_evnox       An array of category IDs (NOT in). // obf
	 *     @type string          $v_yhtps          Use category slug (not name, this or any children). // obf
	 *     @type array|int       $v_uqbig          Filter results by comment count. Provide an integer to match // obf
	 *                                                   comment count exactly. Provide an array with integer 'value' // obf
	 *                                                   and 'compare' operator ('=', '!=', '>', '>=', '<', '<=' ) to // obf
	 *                                                   compare against comment_count in a specific way. // obf
	 *     @type string          $v_gghiv         Comment status. // obf
	 *     @type int             $v_gjulh      The number of comments to return per page. // obf
	 *                                                   Default 'comments_per_page' option. // obf
	 *     @type array           $v_irpjk             An associative array of WP_Date_Query arguments. // obf
	 *                                                   See WP_Date_Query::__construct(). // obf
	 *     @type int             $v_sqcio                    Day of the month. Default empty. Accepts numbers 1-31. // obf
	 *     @type bool            $v_eisfi                  Whether to search by exact keyword. Default false. // obf
	 *     @type string          $v_dahmg                 Post fields to query for. Accepts: // obf
	 *                                                   - '' Returns an array of complete post objects (`WP_Post[]`). // obf
	 *                                                   - 'ids' Returns an array of post IDs (`int[]`). // obf
	 *                                                   - 'id=>parent' Returns an associative array of parent post IDs, // obf
	 *                                                     keyed by post ID (`int[]`). // obf
	 *                                                   Default ''. // obf
	 *     @type int             $v_xrwqj                   Hour of the day. Default empty. Accepts numbers 0-23. // obf
	 *     @type int|bool        $v_dxpkj    Whether to ignore sticky posts or not. Setting this to false // obf
	 *                                                   excludes stickies from 'post__in'. Accepts 1|true, 0|false. // obf
	 *                                                   Default false. // obf
	 *     @type int             $v_uxjtb                      Combination YearMonth. Accepts any four-digit year and month // obf
	 *                                                   numbers 01-12. Default empty. // obf
	 *     @type string|string[] $v_wtvmp               Meta key or keys to filter by. // obf
	 *     @type string|string[] $v_oymwf             Meta value or values to filter by. // obf
	 *     @type string          $v_xiptt           MySQL operator used for comparing the meta value. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_matrh       MySQL operator used for comparing the meta key. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_fqove              MySQL data type that the meta_value column will be CAST to for comparisons. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type string          $v_admbh          MySQL data type that the meta_key column will be CAST to for comparisons. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values and default value. // obf
	 *     @type array           $v_tmxxv             An associative array of WP_Meta_Query arguments. // obf
	 *                                                   See WP_Meta_Query::__construct() for accepted values. // obf
	 *     @type int             $v_wwbjd             The menu order of the posts. // obf
	 *     @type int             $v_uvays                 Minute of the hour. Default empty. Accepts numbers 0-59. // obf
	 *     @type int             $v_hpxmb               The two-digit month. Default empty. Accepts numbers 1-12. // obf
	 *     @type string          $v_jnlwp                   Post slug. // obf
	 *     @type bool            $v_sqlrt               Show all posts (true) or paginate (false). Default false. // obf
	 *     @type bool            $v_pgdas          Whether to skip counting the total rows found. Enabling can improve // obf
	 *                                                   performance. Default false. // obf
	 *     @type int             $v_uipzr                 The number of posts to offset before retrieval. // obf
	 *     @type string          $v_waoyh                  Designates ascending or descending order of posts. Default 'DESC'. // obf
	 *                                                   Accepts 'ASC', 'DESC'. // obf
	 *     @type string|array    $v_aqqcx                Sort retrieved posts by parameter. One or more options may be passed. // obf
	 *                                                   To use 'meta_value', or 'meta_value_num', 'meta_key=keyname' must be // obf
	 *                                                   also be defined. To sort by a specific `$v_tmxxv` clause, use that // obf
	 *                                                   clause's array key. Accepts: // obf
	 *                                                   - 'none' // obf
	 *                                                   - 'name' // obf
	 *                                                   - 'author' // obf
	 *                                                   - 'date' // obf
	 *                                                   - 'title' // obf
	 *                                                   - 'modified' // obf
	 *                                                   - 'menu_order' // obf
	 *                                                   - 'parent' // obf
	 *                                                   - 'ID' // obf
	 *                                                   - 'rand' // obf
	 *                                                   - 'relevance' // obf
	 *                                                   - 'RAND(x)' (where 'x' is an integer seed value) // obf
	 *                                                   - 'comment_count' // obf
	 *                                                   - 'meta_value' // obf
	 *                                                   - 'meta_value_num' // obf
	 *                                                   - 'post__in' // obf
	 *                                                   - 'post_name__in' // obf
	 *                                                   - 'post_parent__in' // obf
	 *                                                   - The array keys of `$v_tmxxv`. // obf
	 *                                                   Default is 'date', except when a search is being performed, when // obf
	 *                                                   the default is 'relevance'. // obf
	 *     @type int             $v_gncbl                      Post ID. // obf
	 *     @type int             $v_rrckl                   Show the number of posts that would show up on page X of a // obf
	 *                                                   static front page. // obf
	 *     @type int             $v_hofro                  The number of the current page. // obf
	 *     @type int             $v_ugheb                Page ID. // obf
	 *     @type string          $v_evyje               Page slug. // obf
	 *     @type string          $v_rnkhs                   Show posts if user has the appropriate capability. // obf
	 *     @type string          $v_nvprs            Ping status. // obf
	 *     @type int[]           $v_dmcgq               An array of post IDs to retrieve, sticky posts will be included. // obf
	 *     @type int[]           $v_qhhjl           An array of post IDs not to retrieve. Note: a string of comma- // obf
	 *                                                   separated IDs will NOT work. // obf
	 *     @type string          $v_xqmcd         The mime type of the post. Used for 'attachment' post_type. // obf
	 *     @type string[]        $v_bjmiz          An array of post slugs that results must match. // obf
	 *     @type int             $v_rbspt            Page ID to retrieve child pages for. Use 0 to only retrieve // obf
	 *                                                   top-level pages. // obf
	 *     @type int[]           $v_etrnw        An array containing parent page IDs to query child pages from. // obf
	 *     @type int[]           $v_vipko    An array containing parent page IDs not to query child pages from. // obf
	 *     @type string|string[] $v_qkzpe              A post type slug (string) or array of post type slugs. // obf
	 *                                                   Default 'any' if using 'tax_query'. // obf
	 *     @type string|string[] $v_kwhpj            A post status (string) or array of post statuses. // obf
	 *     @type int             $v_nqyzl         The number of posts to query for. Use -1 to request all posts. // obf
	 *     @type int             $v_hrncm The number of posts to query for by archive page. Overrides // obf
	 *                                                   'posts_per_page' when is_archive(), or is_search() are true. // obf
	 *     @type string          $v_hqgwz                      Search keyword(s). Prepending a term with a hyphen will // obf
	 *                                                   exclude posts matching that term. Eg, 'pillow -sofa' will // obf
	 *                                                   return posts containing 'pillow' but not 'sofa'. The // obf
	 *                                                   character used for exclusion can be modified using the // obf
	 *                                                   the 'wp_query_search_exclusion_prefix' filter. // obf
	 *     @type string[]        $v_wkyka         Array of column names to be searched. Accepts 'post_title', // obf
	 *                                                   'post_excerpt' and 'post_content'. Default empty array. // obf
	 *     @type int             $v_okgcq                 Second of the minute. Default empty. Accepts numbers 0-59. // obf
	 *     @type bool            $v_yxpun               Whether to search by phrase. Default false. // obf
	 *     @type bool            $v_lwixk       Whether to suppress filters. Default false. // obf
	 *     @type string          $v_fwqsx                    Tag slug. Comma-separated (either), Plus-separated (all). // obf
	 *     @type int[]           $v_dvvtx               An array of tag IDs (AND in). // obf
	 *     @type int[]           $v_xwdqb                An array of tag IDs (OR in). // obf
	 *     @type int[]           $v_ftrqx            An array of tag IDs (NOT in). // obf
	 *     @type int             $v_ffczn                 Tag id or comma-separated list of IDs. // obf
	 *     @type string[]        $v_klncw          An array of tag slugs (AND in). // obf
	 *     @type string[]        $v_nvcwu           An array of tag slugs (OR in). unless 'ignore_sticky_posts' is // obf
	 *                                                   true. Note: a string of comma-separated IDs will NOT work. // obf
	 *     @type array           $v_pvuln              An associative array of WP_Tax_Query arguments. // obf
	 *                                                   See WP_Tax_Query::__construct(). // obf
	 *     @type string          $v_bawcf                  Post title. // obf
	 *     @type bool            $v_bymwg Whether to update the post meta cache. Default true. // obf
	 *     @type bool            $v_hjllg Whether to update the post term cache. Default true. // obf
	 *     @type bool            $v_uxvgr Whether to update the menu item cache. Default false. // obf
	 *     @type bool            $v_cgidj    Whether to lazy-load term meta. Setting to false will // obf
	 *                                                   disable cache priming for term meta, so that each // obf
	 *                                                   get_term_meta() call will hit the database. // obf
	 *                                                   Defaults to the value of `$v_hjllg`. // obf
	 *     @type int             $v_uqcbv                      The week number of the year. Default empty. Accepts numbers 0-53. // obf
	 *     @type int             $v_oiclr                   The four-digit year. Default empty. Accepts any four-digit year. // obf
	 * } // obf
	 */ // obf
	public function parse_query( $v_kjouc = '' ) { // obf
		if ( ! empty( $v_kjouc ) ) { // obf
			$v_iierc->init(); // obf
			$v_iierc->query      = wp_parse_args( $v_kjouc ); // obf
			$v_iierc->query_vars = $v_iierc->query; // obf
		} elseif ( ! isset( $v_iierc->query ) ) { // obf
			$v_iierc->query = $v_iierc->query_vars; // obf
		} // obf

		$v_iierc->query_vars         = $v_iierc->fill_query_vars( $v_iierc->query_vars ); // obf
		$v_lvixi                       = &$v_iierc->query_vars; // obf
		$v_iierc->query_vars_changed = true; // obf

		if ( ! empty( $v_lvixi['robots'] ) ) { // obf
			$v_iierc->is_robots = true; // obf
		} elseif ( ! empty( $v_lvixi['favicon'] ) ) { // obf
			$v_iierc->is_favicon = true; // obf
		} // obf

		if ( ! is_scalar( $v_lvixi['p'] ) || (int) $v_lvixi['p'] < 0 ) { // obf
			$v_lvixi['p']     = 0; // obf
			$v_lvixi['error'] = '404'; // obf
		} else { // obf
			$v_lvixi['p'] = (int) $v_lvixi['p']; // obf
		} // obf

		$v_lvixi['page_id']  = is_scalar( $v_lvixi['page_id'] ) ? absint( $v_lvixi['page_id'] ) : 0; // obf
		$v_lvixi['year']     = is_scalar( $v_lvixi['year'] ) ? absint( $v_lvixi['year'] ) : 0; // obf
		$v_lvixi['monthnum'] = is_scalar( $v_lvixi['monthnum'] ) ? absint( $v_lvixi['monthnum'] ) : 0; // obf
		$v_lvixi['day']      = is_scalar( $v_lvixi['day'] ) ? absint( $v_lvixi['day'] ) : 0; // obf
		$v_lvixi['w']        = is_scalar( $v_lvixi['w'] ) ? absint( $v_lvixi['w'] ) : 0; // obf
		$v_lvixi['m']        = is_scalar( $v_lvixi['m'] ) ? __fn_37772( '|[^0-9]|', '', $v_lvixi['m'] ) : ''; // obf
		$v_lvixi['paged']    = is_scalar( $v_lvixi['paged'] ) ? absint( $v_lvixi['paged'] ) : 0; // obf
		$v_lvixi['cat']      = __fn_37772( '|[^0-9,-]|', '', $v_lvixi['cat'] ); // Array or comma-separated list of positive or negative integers. // obf
		$v_lvixi['author']   = is_scalar( $v_lvixi['author'] ) ? __fn_37772( '|[^0-9,-]|', '', $v_lvixi['author'] ) : ''; // Comma-separated list of positive or negative integers. // obf
		$v_lvixi['pagename'] = is_scalar( $v_lvixi['pagename'] ) ? trim( $v_lvixi['pagename'] ) : ''; // obf
		$v_lvixi['name']     = is_scalar( $v_lvixi['name'] ) ? trim( $v_lvixi['name'] ) : ''; // obf
		$v_lvixi['title']    = is_scalar( $v_lvixi['title'] ) ? trim( $v_lvixi['title'] ) : ''; // obf

		if ( is_scalar( $v_lvixi['hour'] ) && '' !== $v_lvixi['hour'] ) { // obf
			$v_lvixi['hour'] = absint( $v_lvixi['hour'] ); // obf
		} else { // obf
			$v_lvixi['hour'] = ''; // obf
		} // obf

		if ( is_scalar( $v_lvixi['minute'] ) && '' !== $v_lvixi['minute'] ) { // obf
			$v_lvixi['minute'] = absint( $v_lvixi['minute'] ); // obf
		} else { // obf
			$v_lvixi['minute'] = ''; // obf
		} // obf

		if ( is_scalar( $v_lvixi['second'] ) && '' !== $v_lvixi['second'] ) { // obf
			$v_lvixi['second'] = absint( $v_lvixi['second'] ); // obf
		} else { // obf
			$v_lvixi['second'] = ''; // obf
		} // obf

		if ( is_scalar( $v_lvixi['menu_order'] ) && '' !== $v_lvixi['menu_order'] ) { // obf
			$v_lvixi['menu_order'] = absint( $v_lvixi['menu_order'] ); // obf
		} else { // obf
			$v_lvixi['menu_order'] = ''; // obf
		} // obf

		// Fairly large, potentially too large, upper bound for search string lengths. // obf
		if ( ! is_scalar( $v_lvixi['s'] ) || ( ! empty( $v_lvixi['s'] ) && strlen( $v_lvixi['s'] ) > 1600 ) ) { // obf
			$v_lvixi['s'] = ''; // obf
		} // obf

		// Compat. Map subpost to attachment. // obf
		if ( is_scalar( $v_lvixi['subpost'] ) && '' != $v_lvixi['subpost'] ) { // obf
			$v_lvixi['attachment'] = $v_lvixi['subpost']; // obf
		} // obf
		if ( is_scalar( $v_lvixi['subpost_id'] ) && '' != $v_lvixi['subpost_id'] ) { // obf
			$v_lvixi['attachment_id'] = $v_lvixi['subpost_id']; // obf
		} // obf

		$v_lvixi['attachment_id'] = is_scalar( $v_lvixi['attachment_id'] ) ? absint( $v_lvixi['attachment_id'] ) : 0; // obf

		if ( ( '' !== $v_lvixi['attachment'] ) || ! empty( $v_lvixi['attachment_id'] ) ) { // obf
			$v_iierc->is_single     = true; // obf
			$v_iierc->is_attachment = true; // obf
		} elseif ( '' !== $v_lvixi['name'] ) { // obf
			$v_iierc->is_single = true; // obf
		} elseif ( $v_lvixi['p'] ) { // obf
			$v_iierc->is_single = true; // obf
		} elseif ( '' !== $v_lvixi['pagename'] || ! empty( $v_lvixi['page_id'] ) ) { // obf
			$v_iierc->is_page   = true; // obf
			$v_iierc->is_single = false; // obf
		} else { // obf
			// Look for archive queries. Dates, categories, authors, search, post type archives. // obf

			if ( isset( $v_iierc->query['s'] ) ) { // obf
				$v_iierc->is_search = true; // obf
			} // obf

			if ( '' !== $v_lvixi['second'] ) { // obf
				$v_iierc->is_time = true; // obf
				$v_iierc->is_date = true; // obf
			} // obf

			if ( '' !== $v_lvixi['minute'] ) { // obf
				$v_iierc->is_time = true; // obf
				$v_iierc->is_date = true; // obf
			} // obf

			if ( '' !== $v_lvixi['hour'] ) { // obf
				$v_iierc->is_time = true; // obf
				$v_iierc->is_date = true; // obf
			} // obf

			if ( $v_lvixi['day'] ) { // obf
				if ( ! $v_iierc->is_date ) { // obf
					$v_wuccd = sprintf( '%04d-%02d-%02d', $v_lvixi['year'], $v_lvixi['monthnum'], $v_lvixi['day'] ); // obf
					if ( $v_lvixi['monthnum'] && $v_lvixi['year'] && ! wp_checkdate( $v_lvixi['monthnum'], $v_lvixi['day'], $v_lvixi['year'], $v_wuccd ) ) { // obf
						$v_lvixi['error'] = '404'; // obf
					} else { // obf
						$v_iierc->is_day  = true; // obf
						$v_iierc->is_date = true; // obf
					} // obf
				} // obf
			} // obf

			if ( $v_lvixi['monthnum'] ) { // obf
				if ( ! $v_iierc->is_date ) { // obf
					if ( 12 < $v_lvixi['monthnum'] ) { // obf
						$v_lvixi['error'] = '404'; // obf
					} else { // obf
						$v_iierc->is_month = true; // obf
						$v_iierc->is_date  = true; // obf
					} // obf
				} // obf
			} // obf

			if ( $v_lvixi['year'] ) { // obf
				if ( ! $v_iierc->is_date ) { // obf
					$v_iierc->is_year = true; // obf
					$v_iierc->is_date = true; // obf
				} // obf
			} // obf

			if ( $v_lvixi['m'] ) { // obf
				$v_iierc->is_date = true; // obf
				if ( strlen( $v_lvixi['m'] ) > 9 ) { // obf
					$v_iierc->is_time = true; // obf
				} elseif ( strlen( $v_lvixi['m'] ) > 7 ) { // obf
					$v_iierc->is_day = true; // obf
				} elseif ( strlen( $v_lvixi['m'] ) > 5 ) { // obf
					$v_iierc->is_month = true; // obf
				} else { // obf
					$v_iierc->is_year = true; // obf
				} // obf
			} // obf

			if ( $v_lvixi['w'] ) { // obf
				$v_iierc->is_date = true; // obf
			} // obf

			$v_iierc->query_vars_hash = false; // obf
			$v_iierc->parse_tax_query( $v_lvixi ); // obf

			foreach ( $v_iierc->tax_query->queries as $v_pvuln ) { // obf
				if ( ! is_array( $v_pvuln ) ) { // obf
					continue; // obf
				} // obf

				if ( isset( $v_pvuln['operator'] ) && 'NOT IN' !== $v_pvuln['operator'] ) { // obf
					switch ( $v_pvuln['taxonomy'] ) { // obf
						case 'category': // obf
							$v_iierc->is_category = true; // obf
							break; // obf
						case 'post_tag': // obf
							$v_iierc->is_tag = true; // obf
							break; // obf
						default: // obf
							$v_iierc->is_tax = true; // obf
					} // obf
				} // obf
			} // obf
			unset( $v_pvuln ); // obf

			if ( empty( $v_lvixi['author'] ) || ( '0' == $v_lvixi['author'] ) ) { // obf
				$v_iierc->is_author = false; // obf
			} else { // obf
				$v_iierc->is_author = true; // obf
			} // obf

			if ( '' !== $v_lvixi['author_name'] ) { // obf
				$v_iierc->is_author = true; // obf
			} // obf

			if ( ! empty( $v_lvixi['post_type'] ) && ! is_array( $v_lvixi['post_type'] ) ) { // obf
				$v_ctdlj = get_post_type_object( $v_lvixi['post_type'] ); // obf
				if ( ! empty( $v_ctdlj->has_archive ) ) { // obf
					$v_iierc->is_post_type_archive = true; // obf
				} // obf
			} // obf

			if ( $v_iierc->is_post_type_archive || $v_iierc->is_date || $v_iierc->is_author || $v_iierc->is_category || $v_iierc->is_tag || $v_iierc->is_tax ) { // obf
				$v_iierc->is_archive = true; // obf
			} // obf
		} // obf

		if ( '' != $v_lvixi['feed'] ) { // obf
			$v_iierc->is_feed = true; // obf
		} // obf

		if ( '' != $v_lvixi['embed'] ) { // obf
			$v_iierc->is_embed = true; // obf
		} // obf

		if ( '' != $v_lvixi['tb'] ) { // obf
			$v_iierc->is_trackback = true; // obf
		} // obf

		if ( '' != $v_lvixi['paged'] && ( (int) $v_lvixi['paged'] > 1 ) ) { // obf
			$v_iierc->is_paged = true; // obf
		} // obf

		// If we're previewing inside the write screen. // obf
		if ( '' != $v_lvixi['preview'] ) { // obf
			$v_iierc->is_preview = true; // obf
		} // obf

		if ( is_admin() ) { // obf
			$v_iierc->is_admin = true; // obf
		} // obf

		if ( str_contains( $v_lvixi['feed'], 'comments-' ) ) { // obf
			$v_lvixi['feed']         = str_replace( 'comments-', '', $v_lvixi['feed'] ); // obf
			$v_lvixi['withcomments'] = 1; // obf
		} // obf

		$v_iierc->is_singular = $v_iierc->is_single || $v_iierc->is_page || $v_iierc->is_attachment; // obf

		if ( $v_iierc->is_feed && ( ! empty( $v_lvixi['withcomments'] ) || ( empty( $v_lvixi['withoutcomments'] ) && $v_iierc->is_singular ) ) ) { // obf
			$v_iierc->is_comment_feed = true; // obf
		} // obf

		if ( ! ( $v_iierc->is_singular || $v_iierc->is_archive || $v_iierc->is_search || $v_iierc->is_feed // obf
				|| ( wp_is_serving_rest_request() && $v_iierc->is_main_query() ) // obf
				|| $v_iierc->is_trackback || $v_iierc->is_404 || $v_iierc->is_admin || $v_iierc->is_robots || $v_iierc->is_favicon ) ) { // obf
			$v_iierc->is_home = true; // obf
		} // obf

		// Correct `is_*` for 'page_on_front' and 'page_for_posts'. // obf
		if ( $v_iierc->is_home && 'page' === get_option( 'show_on_front' ) && get_option( 'page_on_front' ) ) { // obf
			$v_xicte = wp_parse_args( $v_iierc->query ); // obf
			// 'pagename' can be set and empty depending on matched rewrite rules. Ignore an empty 'pagename'. // obf
			if ( isset( $v_xicte['pagename'] ) && '' === $v_xicte['pagename'] ) { // obf
				unset( $v_xicte['pagename'] ); // obf
			} // obf

			unset( $v_xicte['embed'] ); // obf

			if ( empty( $v_xicte ) || ! array_diff( array_keys( $v_xicte ), array( 'preview', 'page', 'paged', 'cpage' ) ) ) { // obf
				$v_iierc->is_page = true; // obf
				$v_iierc->is_home = false; // obf
				$v_lvixi['page_id'] = get_option( 'page_on_front' ); // obf
				// Correct <!--nextpage--> for 'page_on_front'. // obf
				if ( ! empty( $v_lvixi['paged'] ) ) { // obf
					$v_lvixi['page'] = $v_lvixi['paged']; // obf
					unset( $v_lvixi['paged'] ); // obf
				} // obf
			} // obf
		} // obf

		if ( '' !== $v_lvixi['pagename'] ) { // obf
			$v_iierc->queried_object = get_page_by_path( $v_lvixi['pagename'] ); // obf

			if ( $v_iierc->queried_object && 'attachment' === $v_iierc->queried_object->post_type ) { // obf
				if ( preg_match( '/^[^%]*%(?:postname)%/', get_option( 'permalink_structure' ) ) ) { // obf
					// See if we also have a post with the same slug. // obf
					$v_dybha = get_page_by_path( $v_lvixi['pagename'], OBJECT, 'post' ); // obf
					if ( $v_dybha ) { // obf
						$v_iierc->queried_object = $v_dybha; // obf
						$v_iierc->is_page        = false; // obf
						$v_iierc->is_single      = true; // obf
					} // obf
				} // obf
			} // obf

			if ( ! empty( $v_iierc->queried_object ) ) { // obf
				$v_iierc->queried_object_id = (int) $v_iierc->queried_object->ID; // obf
			} else { // obf
				unset( $v_iierc->queried_object ); // obf
			} // obf

			if ( 'page' === get_option( 'show_on_front' ) && isset( $v_iierc->queried_object_id ) && get_option( 'page_for_posts' ) == $v_iierc->queried_object_id ) { // obf
				$v_iierc->is_page       = false; // obf
				$v_iierc->is_home       = true; // obf
				$v_iierc->is_posts_page = true; // obf
			} // obf

			if ( isset( $v_iierc->queried_object_id ) && get_option( 'wp_page_for_privacy_policy' ) == $v_iierc->queried_object_id ) { // obf
				$v_iierc->is_privacy_policy = true; // obf
			} // obf
		} // obf

		if ( $v_lvixi['page_id'] ) { // obf
			if ( 'page' === get_option( 'show_on_front' ) && get_option( 'page_for_posts' ) == $v_lvixi['page_id'] ) { // obf
				$v_iierc->is_page       = false; // obf
				$v_iierc->is_home       = true; // obf
				$v_iierc->is_posts_page = true; // obf
			} // obf

			if ( get_option( 'wp_page_for_privacy_policy' ) == $v_lvixi['page_id'] ) { // obf
				$v_iierc->is_privacy_policy = true; // obf
			} // obf
		} // obf

		if ( ! empty( $v_lvixi['post_type'] ) ) { // obf
			if ( is_array( $v_lvixi['post_type'] ) ) { // obf
				$v_lvixi['post_type'] = array_map( 'sanitize_key', array_unique( $v_lvixi['post_type'] ) ); // obf
				sort( $v_lvixi['post_type'] ); // obf
			} else { // obf
				$v_lvixi['post_type'] = sanitize_key( $v_lvixi['post_type'] ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_lvixi['post_status'] ) ) { // obf
			if ( is_array( $v_lvixi['post_status'] ) ) { // obf
				$v_lvixi['post_status'] = array_map( 'sanitize_key', array_unique( $v_lvixi['post_status'] ) ); // obf
				sort( $v_lvixi['post_status'] ); // obf
			} else { // obf
				$v_lvixi['post_status'] = __fn_37772( '|[^a-z0-9_,-]|', '', $v_lvixi['post_status'] ); // obf
			} // obf
		} // obf

		if ( $v_iierc->is_posts_page && ( ! isset( $v_lvixi['withcomments'] ) || ! $v_lvixi['withcomments'] ) ) { // obf
			$v_iierc->is_comment_feed = false; // obf
		} // obf

		$v_iierc->is_singular = $v_iierc->is_single || $v_iierc->is_page || $v_iierc->is_attachment; // obf
		// Done correcting `is_*` for 'page_on_front' and 'page_for_posts'. // obf

		if ( '404' == $v_lvixi['error'] ) { // obf
			$v_iierc->set_404(); // obf
		} // obf

		$v_iierc->is_embed = $v_iierc->is_embed && ( $v_iierc->is_singular || $v_iierc->is_404 ); // obf

		$v_iierc->query_vars_hash    = md5( serialize( $v_iierc->query_vars ) ); // obf
		$v_iierc->query_vars_changed = false; // obf

		/** // obf
		 * Fires after the main query vars have been parsed. // obf
		 * // obf
		 * @since 1.5.0 // obf
		 * // obf
		 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'parse_query', array( &$v_iierc ) ); // obf
	} // obf

	/** // obf
	 * Parses various taxonomy related query vars. // obf
	 * // obf
	 * For BC, this method is not marked as protected. See [28987]. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param array $v_ybhgc The query variables. Passed by reference. // obf
	 */ // obf
	public function parse_tax_query( &$v_ybhgc ) { // obf
		if ( ! empty( $v_ybhgc['tax_query'] ) && is_array( $v_ybhgc['tax_query'] ) ) { // obf
			$v_pvuln = $v_ybhgc['tax_query']; // obf
		} else { // obf
			$v_pvuln = array(); // obf
		} // obf

		if ( ! empty( $v_ybhgc['taxonomy'] ) && ! empty( $v_ybhgc['term'] ) ) { // obf
			$v_pvuln[] = array( // obf
				'taxonomy' => $v_ybhgc['taxonomy'], // obf
				'terms'    => array( $v_ybhgc['term'] ), // obf
				'field'    => 'slug', // obf
			); // obf
		} // obf

		foreach ( get_taxonomies( array(), 'objects' ) as $v_aojgh => $v_xbqns ) { // obf
			if ( 'post_tag' === $v_aojgh ) { // obf
				continue; // Handled further down in the $v_ybhgc['tag'] block. // obf
			} // obf

			if ( $v_xbqns->query_var && ! empty( $v_ybhgc[ $v_xbqns->query_var ] ) ) { // obf
				$v_leile = array( // obf
					'taxonomy' => $v_aojgh, // obf
					'field'    => 'slug', // obf
				); // obf

				if ( ! empty( $v_xbqns->rewrite['hierarchical'] ) ) { // obf
					$v_ybhgc[ $v_xbqns->query_var ] = wp_basename( $v_ybhgc[ $v_xbqns->query_var ] ); // obf
				} // obf

				$v_sdajs = $v_ybhgc[ $v_xbqns->query_var ]; // obf

				if ( ! is_array( $v_sdajs ) ) { // obf
					$v_sdajs = explode( ',', $v_sdajs ); // obf
					$v_sdajs = array_map( 'trim', $v_sdajs ); // obf
				} // obf
				sort( $v_sdajs ); // obf
				$v_sdajs = implode( ',', $v_sdajs ); // obf

				if ( str_contains( $v_sdajs, '+' ) ) { // obf
					$v_rnubd = preg_split( '/[+]+/', $v_sdajs ); // obf
					foreach ( $v_rnubd as $v_sdajs ) { // obf
						$v_pvuln[] = array_merge( // obf
							$v_leile, // obf
							array( // obf
								'terms' => array( $v_sdajs ), // obf
							) // obf
						); // obf
					} // obf
				} else { // obf
					$v_pvuln[] = array_merge( // obf
						$v_leile, // obf
						array( // obf
							'terms' => preg_split( '/[,]+/', $v_sdajs ), // obf
						) // obf
					); // obf
				} // obf
			} // obf
		} // obf

		// If query string 'cat' is an array, implode it. // obf
		if ( is_array( $v_ybhgc['cat'] ) ) { // obf
			$v_ybhgc['cat'] = implode( ',', $v_ybhgc['cat'] ); // obf
		} // obf

		// Category stuff. // obf

		if ( ! empty( $v_ybhgc['cat'] ) && ! $v_iierc->is_singular ) { // obf
			$v_vphdp     = array(); // obf
			$v_ekvxu = array(); // obf

			$v_uysod = preg_split( '/[,\s]+/', urldecode( $v_ybhgc['cat'] ) ); // obf
			$v_uysod = array_map( 'intval', $v_uysod ); // obf
			sort( $v_uysod ); // obf
			$v_ybhgc['cat'] = implode( ',', $v_uysod ); // obf

			foreach ( $v_uysod as $v_lmvyh ) { // obf
				if ( $v_lmvyh > 0 ) { // obf
					$v_vphdp[] = $v_lmvyh; // obf
				} elseif ( $v_lmvyh < 0 ) { // obf
					$v_ekvxu[] = abs( $v_lmvyh ); // obf
				} // obf
			} // obf

			if ( ! empty( $v_vphdp ) ) { // obf
				$v_pvuln[] = array( // obf
					'taxonomy'         => 'category', // obf
					'terms'            => $v_vphdp, // obf
					'field'            => 'term_id', // obf
					'include_children' => true, // obf
				); // obf
			} // obf

			if ( ! empty( $v_ekvxu ) ) { // obf
				$v_pvuln[] = array( // obf
					'taxonomy'         => 'category', // obf
					'terms'            => $v_ekvxu, // obf
					'field'            => 'term_id', // obf
					'operator'         => 'NOT IN', // obf
					'include_children' => true, // obf
				); // obf
			} // obf
			unset( $v_uysod, $v_vphdp, $v_ekvxu ); // obf
		} // obf

		if ( ! empty( $v_ybhgc['category__and'] ) && 1 === count( (array) $v_ybhgc['category__and'] ) ) { // obf
			$v_ybhgc['category__and'] = (array) $v_ybhgc['category__and']; // obf
			if ( ! isset( $v_ybhgc['category__in'] ) ) { // obf
				$v_ybhgc['category__in'] = array(); // obf
			} // obf
			$v_ybhgc['category__in'][] = absint( reset( $v_ybhgc['category__and'] ) ); // obf
			unset( $v_ybhgc['category__and'] ); // obf
		} // obf

		if ( ! empty( $v_ybhgc['category__in'] ) ) { // obf
			$v_ybhgc['category__in'] = array_map( 'absint', array_unique( (array) $v_ybhgc['category__in'] ) ); // obf
			sort( $v_ybhgc['category__in'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy'         => 'category', // obf
				'terms'            => $v_ybhgc['category__in'], // obf
				'field'            => 'term_id', // obf
				'include_children' => false, // obf
			); // obf
		} // obf

		if ( ! empty( $v_ybhgc['category__not_in'] ) ) { // obf
			$v_ybhgc['category__not_in'] = array_map( 'absint', array_unique( (array) $v_ybhgc['category__not_in'] ) ); // obf
			sort( $v_ybhgc['category__not_in'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy'         => 'category', // obf
				'terms'            => $v_ybhgc['category__not_in'], // obf
				'operator'         => 'NOT IN', // obf
				'include_children' => false, // obf
			); // obf
		} // obf

		if ( ! empty( $v_ybhgc['category__and'] ) ) { // obf
			$v_ybhgc['category__and'] = array_map( 'absint', array_unique( (array) $v_ybhgc['category__and'] ) ); // obf
			sort( $v_ybhgc['category__and'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy'         => 'category', // obf
				'terms'            => $v_ybhgc['category__and'], // obf
				'field'            => 'term_id', // obf
				'operator'         => 'AND', // obf
				'include_children' => false, // obf
			); // obf
		} // obf

		// If query string 'tag' is array, implode it. // obf
		if ( is_array( $v_ybhgc['tag'] ) ) { // obf
			$v_ybhgc['tag'] = implode( ',', $v_ybhgc['tag'] ); // obf
		} // obf

		// Tag stuff. // obf

		if ( '' !== $v_ybhgc['tag'] && ! $v_iierc->is_singular && $v_iierc->query_vars_changed ) { // obf
			if ( str_contains( $v_ybhgc['tag'], ',' ) ) { // obf
				// @todo Handle normalizing `tag` query string. // obf
				$v_hwjcb = preg_split( '/[,\r\n\t ]+/', $v_ybhgc['tag'] ); // obf
				foreach ( (array) $v_hwjcb as $v_fwqsx ) { // obf
					$v_fwqsx                 = sanitize_term_field( 'slug', $v_fwqsx, 0, 'post_tag', 'db' ); // obf
					$v_ybhgc['tag_slug__in'][] = $v_fwqsx; // obf
					sort( $v_ybhgc['tag_slug__in'] ); // obf
				} // obf
			} elseif ( preg_match( '/[+\r\n\t ]+/', $v_ybhgc['tag'] ) || ! empty( $v_ybhgc['cat'] ) ) { // obf
				$v_hwjcb = preg_split( '/[+\r\n\t ]+/', $v_ybhgc['tag'] ); // obf
				foreach ( (array) $v_hwjcb as $v_fwqsx ) { // obf
					$v_fwqsx                  = sanitize_term_field( 'slug', $v_fwqsx, 0, 'post_tag', 'db' ); // obf
					$v_ybhgc['tag_slug__and'][] = $v_fwqsx; // obf
				} // obf
			} else { // obf
				$v_ybhgc['tag']            = sanitize_term_field( 'slug', $v_ybhgc['tag'], 0, 'post_tag', 'db' ); // obf
				$v_ybhgc['tag_slug__in'][] = $v_ybhgc['tag']; // obf
				sort( $v_ybhgc['tag_slug__in'] ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_ybhgc['tag_id'] ) ) { // obf
			$v_ybhgc['tag_id'] = absint( $v_ybhgc['tag_id'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy' => 'post_tag', // obf
				'terms'    => $v_ybhgc['tag_id'], // obf
			); // obf
		} // obf

		if ( ! empty( $v_ybhgc['tag__in'] ) ) { // obf
			$v_ybhgc['tag__in'] = array_map( 'absint', array_unique( (array) $v_ybhgc['tag__in'] ) ); // obf
			sort( $v_ybhgc['tag__in'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy' => 'post_tag', // obf
				'terms'    => $v_ybhgc['tag__in'], // obf
			); // obf
		} // obf

		if ( ! empty( $v_ybhgc['tag__not_in'] ) ) { // obf
			$v_ybhgc['tag__not_in'] = array_map( 'absint', array_unique( (array) $v_ybhgc['tag__not_in'] ) ); // obf
			sort( $v_ybhgc['tag__not_in'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy' => 'post_tag', // obf
				'terms'    => $v_ybhgc['tag__not_in'], // obf
				'operator' => 'NOT IN', // obf
			); // obf
		} // obf

		if ( ! empty( $v_ybhgc['tag__and'] ) ) { // obf
			$v_ybhgc['tag__and'] = array_map( 'absint', array_unique( (array) $v_ybhgc['tag__and'] ) ); // obf
			sort( $v_ybhgc['tag__and'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy' => 'post_tag', // obf
				'terms'    => $v_ybhgc['tag__and'], // obf
				'operator' => 'AND', // obf
			); // obf
		} // obf

		if ( ! empty( $v_ybhgc['tag_slug__in'] ) ) { // obf
			$v_ybhgc['tag_slug__in'] = array_map( 'sanitize_title_for_query', array_unique( (array) $v_ybhgc['tag_slug__in'] ) ); // obf
			sort( $v_ybhgc['tag_slug__in'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy' => 'post_tag', // obf
				'terms'    => $v_ybhgc['tag_slug__in'], // obf
				'field'    => 'slug', // obf
			); // obf
		} // obf

		if ( ! empty( $v_ybhgc['tag_slug__and'] ) ) { // obf
			$v_ybhgc['tag_slug__and'] = array_map( 'sanitize_title_for_query', array_unique( (array) $v_ybhgc['tag_slug__and'] ) ); // obf
			sort( $v_ybhgc['tag_slug__and'] ); // obf
			$v_pvuln[] = array( // obf
				'taxonomy' => 'post_tag', // obf
				'terms'    => $v_ybhgc['tag_slug__and'], // obf
				'field'    => 'slug', // obf
				'operator' => 'AND', // obf
			); // obf
		} // obf

		$v_iierc->tax_query = new WP_Tax_Query( $v_pvuln ); // obf

		/** // obf
		 * Fires after taxonomy-related query vars have been parsed. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param WP_Query $v_kjouc The WP_Query instance. // obf
		 */ // obf
		do_action( 'parse_tax_query', $v_iierc ); // obf
	} // obf

	/** // obf
	 * Generates SQL for the WHERE clause based on passed search terms. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global wpdb $v_vulkv WordPress database abstraction object. // obf
	 * // obf
	 * @param array $v_ybhgc Query variables. // obf
	 * @return string WHERE clause. // obf
	 */ // obf
	protected function parse_search( &$v_ybhgc ) { // obf
		global $v_vulkv; // obf

		$v_kkllx = ''; // obf

		// Added slashes screw with quote grouping when done early, so done later. // obf
		$v_ybhgc['s'] = stripslashes( $v_ybhgc['s'] ); // obf
		if ( empty( $v_akljc['s'] ) && $v_iierc->is_main_query() ) { // obf
			$v_ybhgc['s'] = urldecode( $v_ybhgc['s'] ); // obf
		} // obf
		// There are no line breaks in <input /> fields. // obf
		$v_ybhgc['s']                  = str_replace( array( "\r", "\n" ), '', $v_ybhgc['s'] ); // obf
		$v_ybhgc['search_terms_count'] = 1; // obf
		if ( ! empty( $v_ybhgc['sentence'] ) ) { // obf
			$v_ybhgc['search_terms'] = array( $v_ybhgc['s'] ); // obf
		} else { // obf
			if ( preg_match_all( '/".*?("|$)|((?<=[\t ",+])|^)[^\t ",+]+/', $v_ybhgc['s'], $v_hgoez ) ) { // obf
				$v_ybhgc['search_terms_count'] = count( $v_hgoez[0] ); // obf
				$v_ybhgc['search_terms']       = $v_iierc->parse_search_terms( $v_hgoez[0] ); // obf
				// If the search string has only short terms or stopwords, or is 10+ terms long, match it as sentence. // obf
				if ( empty( $v_ybhgc['search_terms'] ) || count( $v_ybhgc['search_terms'] ) > 9 ) { // obf
					$v_ybhgc['search_terms'] = array( $v_ybhgc['s'] ); // obf
				} // obf
			} else { // obf
				$v_ybhgc['search_terms'] = array( $v_ybhgc['s'] ); // obf
			} // obf
		} // obf

		$v_xjttf                         = ! empty( $v_ybhgc['exact'] ) ? '' : '%'; // obf
		$v_ponvf                 = ''; // obf
		$v_ybhgc['search_orderby_title'] = array(); // obf

		$v_swzsb = array( 'post_title', 'post_excerpt', 'post_content' ); // obf
		$v_wkyka         = ! empty( $v_ybhgc['search_columns'] ) ? $v_ybhgc['search_columns'] : $v_swzsb; // obf
		if ( ! is_array( $v_wkyka ) ) { // obf
			$v_wkyka = array( $v_wkyka ); // obf
		} // obf

		/** // obf
		 * Filters the columns to search in a WP_Query search. // obf
		 * // obf
		 * The supported columns are `post_title`, `post_excerpt` and `post_content`. // obf
		 * They are all included by default. // obf
		 * // obf
		 * @since 6.2.0 // obf
		 * // obf
		 * @param string[] $v_wkyka Array of column names to be searched. // obf
		 * @param string   $v_kkllx         Text being searched. // obf
		 * @param WP_Query $v_kjouc          The current WP_Query instance. // obf
		 */ // obf
		$v_wkyka = (array) apply_filters( 'post_search_columns', $v_wkyka, $v_ybhgc['s'], $v_iierc ); // obf

		// Use only supported search columns. // obf
		$v_wkyka = array_intersect( $v_wkyka, $v_swzsb ); // obf
		if ( empty( $v_wkyka ) ) { // obf
			$v_wkyka = $v_swzsb; // obf
		} // obf

		/** // obf
		 * Filters the prefix that indicates that a search term should be excluded from results. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param string $v_ngzgs The prefix. Default '-'. Returning // obf
		 *                                 an empty value disables exclusions. // obf
		 */ // obf
		$v_ngzgs = apply_filters( 'wp_query_search_exclusion_prefix', '-' ); // obf

		foreach ( $v_ybhgc['search_terms'] as $v_sdajs ) { // obf
			// If there is an $v_ngzgs, terms prefixed with it should be excluded. // obf
			$v_yyshi = $v_ngzgs && str_starts_with( $v_sdajs, $v_ngzgs ); // obf
			if ( $v_yyshi ) { // obf
				$v_gkeat  = 'NOT LIKE'; // obf
				$v_xzpxk = 'AND'; // obf
				$v_sdajs     = substr( $v_sdajs, 1 ); // obf
			} else { // obf
				$v_gkeat  = 'LIKE'; // obf
				$v_xzpxk = 'OR'; // obf
			} // obf

			if ( $v_xjttf && ! $v_yyshi ) { // obf
				$v_usvza                        = '%' . $v_vulkv->esc_like( $v_sdajs ) . '%'; // obf
				$v_ybhgc['search_orderby_title'][] = $v_vulkv->prepare( "{$v_vulkv->posts}.post_title LIKE %s", $v_usvza ); // obf
			} // obf

			$v_usvza = $v_xjttf . $v_vulkv->esc_like( $v_sdajs ) . $v_xjttf; // obf

			$v_fwczq = array(); // obf
			foreach ( $v_wkyka as $v_ldpqw ) { // obf
				$v_fwczq[ $v_ldpqw ] = $v_vulkv->prepare( "({$v_vulkv->posts}.$v_ldpqw $v_gkeat %s)", $v_usvza ); // obf
			} // obf

			if ( ! empty( $v_iierc->allow_query_attachment_by_filename ) ) { // obf
				$v_fwczq['attachment'] = $v_vulkv->prepare( "(sq1.meta_value $v_gkeat %s)", $v_usvza ); // obf
			} // obf

			$v_kkllx .= "$v_ponvf(" . implode( " $v_xzpxk ", $v_fwczq ) . ')'; // obf

			$v_ponvf = ' AND '; // obf
		} // obf

		if ( ! empty( $v_kkllx ) ) { // obf
			$v_kkllx = " AND ({$v_kkllx}) "; // obf
			if ( ! is_user_logged_in() ) { // obf
				$v_kkllx .= " AND ({$v_vulkv->posts}.post_password = '') "; // obf
			} // obf
		} // obf

		return $v_kkllx; // obf
	} // obf

	/** // obf
	 * Checks if the terms are suitable for searching. // obf
	 * // obf
	 * Uses an array of stopwords (terms) that are excluded from the separate // obf
	 * term matching when searching for posts. The list of English stopwords is // obf
	 * the approximate search engines list, and is translatable. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string[] $v_rnubd Array of terms to check. // obf
	 * @return string[] Terms that are not stopwords. // obf
	 */ // obf
	protected function parse_search_terms( $v_rnubd ) { // obf
		$v_kmhnw = function_exists( 'mb_strtolower' ) ? 'mb_strtolower' : 'strtolower'; // obf
		$v_fobvl    = array(); // obf

		$v_ccjxq = $v_iierc->get_search_stopwords(); // obf

		foreach ( $v_rnubd as $v_sdajs ) { // obf
			// Keep before/after spaces when term is for exact match. // obf
			if ( preg_match( '/^".+"$/', $v_sdajs ) ) { // obf
				$v_sdajs = trim( $v_sdajs, "\"'" ); // obf
			} else { // obf
				$v_sdajs = trim( $v_sdajs, "\"' " ); // obf
			} // obf

			// Avoid single A-Z and single dashes. // obf
			if ( ! $v_sdajs || ( 1 === strlen( $v_sdajs ) && preg_match( '/^[a-z\-]$/i', $v_sdajs ) ) ) { // obf
				continue; // obf
			} // obf

			if ( in_array( call_user_func( $v_kmhnw, $v_sdajs ), $v_ccjxq, true ) ) { // obf
				continue; // obf
			} // obf

			$v_fobvl[] = $v_sdajs; // obf
		} // obf

		return $v_fobvl; // obf
	} // obf

	/** // obf
	 * Retrieves stopwords used when parsing search terms. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @return string[] Stopwords. // obf
	 */ // obf
	protected function get_search_stopwords() { // obf
		if ( isset( $v_iierc->stopwords ) ) { // obf
			return $v_iierc->stopwords; // obf
		} // obf

		/* // obf
		 * translators: This is a comma-separated list of very common words that should be excluded from a search, // obf
		 * like a, an, and the. These are usually called "stopwords". You should not simply translate these individual // obf
		 * words into your language. Instead, look for and provide commonly accepted stopwords in your language. // obf
		 */ // obf
		$v_egctm = explode( // obf
			',', // obf
			_x( // obf
				'about,an,are,as,at,be,by,com,for,from,how,in,is,it,of,on,or,that,the,this,to,was,what,when,where,who,will,with,www', // obf
				'Comma-separated list of search stopwords in your language' // obf
			) // obf
		); // obf

		$v_ccjxq = array(); // obf
		foreach ( $v_egctm as $v_itpzl ) { // obf
			$v_itpzl = trim( $v_itpzl, "\r\n\t " ); // obf
			if ( $v_itpzl ) { // obf
				$v_ccjxq[] = $v_itpzl; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters stopwords used when parsing search terms. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param string[] $v_ccjxq Array of stopwords. // obf
		 */ // obf
		$v_iierc->stopwords = apply_filters( 'wp_search_stopwords', $v_ccjxq ); // obf
		return $v_iierc->stopwords; // obf
	} // obf

	/** // obf
	 * Generates SQL for the ORDER BY condition based on passed search terms. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global wpdb $v_vulkv WordPress database abstraction object. // obf
	 * // obf
	 * @param array $v_ybhgc Query variables. // obf
	 * @return string ORDER BY clause. // obf
	 */ // obf
	protected function parse_search_order( &$v_ybhgc ) { // obf
		global $v_vulkv; // obf

		if ( $v_ybhgc['search_terms_count'] > 1 ) { // obf
			$v_fajsn = count( $v_ybhgc['search_orderby_title'] ); // obf

			// If the search terms contain negative queries, don't bother ordering by sentence matches. // obf
			$v_usvza = ''; // obf
			if ( ! preg_match( '/(?:\s|^)\-/', $v_ybhgc['s'] ) ) { // obf
				$v_usvza = '%' . $v_vulkv->esc_like( $v_ybhgc['s'] ) . '%'; // obf
			} // obf

			$v_twzph = ''; // obf

			// Sentence match in 'post_title'. // obf
			if ( $v_usvza ) { // obf
				$v_twzph .= $v_vulkv->prepare( "WHEN {$v_vulkv->posts}.post_title LIKE %s THEN 1 ", $v_usvza ); // obf
			} // obf

			/* // obf
			 * Sanity limit, sort as sentence when more than 6 terms // obf
			 * (few searches are longer than 6 terms and most titles are not). // obf
			 */ // obf
			if ( $v_fajsn < 7 ) { // obf
				// All words in title. // obf
				$v_twzph .= 'WHEN ' . implode( ' AND ', $v_ybhgc['search_orderby_title'] ) . ' THEN 2 '; // obf
				// Any word in title, not needed when $v_fajsn == 1. // obf
				if ( $v_fajsn > 1 ) { // obf
					$v_twzph .= 'WHEN ' . implode( ' OR ', $v_ybhgc['search_orderby_title'] ) . ' THEN 3 '; // obf
				} // obf
			} // obf

			// Sentence match in 'post_content' and 'post_excerpt'. // obf
			if ( $v_usvza ) { // obf
				$v_twzph .= $v_vulkv->prepare( "WHEN {$v_vulkv->posts}.post_excerpt LIKE %s THEN 4 ", $v_usvza ); // obf
				$v_twzph .= $v_vulkv->prepare( "WHEN {$v_vulkv->posts}.post_content LIKE %s THEN 5 ", $v_usvza ); // obf
			} // obf

			if ( $v_twzph ) { // obf
				$v_twzph = '(CASE ' . $v_twzph . 'ELSE 6 END)'; // obf
			} // obf
		} else { // obf
			// Single word or sentence search. // obf
			$v_twzph = reset( $v_ybhgc['search_orderby_title'] ) . ' DESC'; // obf
		} // obf

		return $v_twzph; // obf
	} // obf

	/** // obf
	 * Converts the given orderby alias (if allowed) to a properly-prefixed value. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @global wpdb $v_vulkv WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_aqqcx Alias for the field to order by. // obf
	 * @return string|false Table-prefixed value to used in the ORDER clause. False otherwise. // obf
	 */ // obf
	protected function parse_orderby( $v_aqqcx ) { // obf
		global $v_vulkv; // obf

		// Used to filter values. // obf
		$v_zcuzt = array( // obf
			'post_name', // obf
			'post_author', // obf
			'post_date', // obf
			'post_title', // obf
			'post_modified', // obf
			'post_parent', // obf
			'post_type', // obf
			'name', // obf
			'author', // obf
			'date', // obf
			'title', // obf
			'modified', // obf
			'parent', // obf
			'type', // obf
			'ID', // obf
			'menu_order', // obf
			'comment_count', // obf
			'rand', // obf
			'post__in', // obf
			'post_parent__in', // obf
			'post_name__in', // obf
		); // obf

		$v_ssasc   = ''; // obf
		$v_ceooa = false; // obf
		$v_vdlay       = $v_iierc->meta_query->get_clauses(); // obf
		if ( ! empty( $v_vdlay ) ) { // obf
			$v_ceooa = reset( $v_vdlay ); // obf

			if ( ! empty( $v_ceooa['key'] ) ) { // obf
				$v_ssasc = $v_ceooa['key']; // obf
				$v_zcuzt[]   = $v_ssasc; // obf
			} // obf

			$v_zcuzt[] = 'meta_value'; // obf
			$v_zcuzt[] = 'meta_value_num'; // obf
			$v_zcuzt   = array_merge( $v_zcuzt, array_keys( $v_vdlay ) ); // obf
		} // obf

		// If RAND() contains a seed value, sanitize and add to allowed keys. // obf
		$v_xeyox = false; // obf
		if ( preg_match( '/RAND\(([0-9]+)\)/i', $v_aqqcx, $v_hgoez ) ) { // obf
			$v_aqqcx        = sprintf( 'RAND(%s)', (int) $v_hgoez[1] ); // obf
			$v_zcuzt[] = $v_aqqcx; // obf
			$v_xeyox = true; // obf
		} // obf

		if ( ! in_array( $v_aqqcx, $v_zcuzt, true ) ) { // obf
			return false; // obf
		} // obf

		$v_qejjz = ''; // obf

		switch ( $v_aqqcx ) { // obf
			case 'post_name': // obf
			case 'post_author': // obf
			case 'post_date': // obf
			case 'post_title': // obf
			case 'post_modified': // obf
			case 'post_parent': // obf
			case 'post_type': // obf
			case 'ID': // obf
			case 'menu_order': // obf
			case 'comment_count': // obf
				$v_qejjz = "{$v_vulkv->posts}.{$v_aqqcx}"; // obf
				break; // obf
			case 'rand': // obf
				$v_qejjz = 'RAND()'; // obf
				break; // obf
			case $v_ssasc: // obf
			case 'meta_value': // obf
				if ( ! empty( $v_ceooa['type'] ) ) { // obf
					$v_qejjz = "CAST({$v_ceooa['alias']}.meta_value AS {$v_ceooa['cast']})"; // obf
				} else { // obf
					$v_qejjz = "{$v_ceooa['alias']}.meta_value"; // obf
				} // obf
				break; // obf
			case 'meta_value_num': // obf
				$v_qejjz = "{$v_ceooa['alias']}.meta_value+0"; // obf
				break; // obf
			case 'post__in': // obf
				if ( ! empty( $v_iierc->query_vars['post__in'] ) ) { // obf
					$v_qejjz = "FIELD({$v_vulkv->posts}.ID," . implode( ',', array_map( 'absint', $v_iierc->query_vars['post__in'] ) ) . ')'; // obf
				} // obf
				break; // obf
			case 'post_parent__in': // obf
				if ( ! empty( $v_iierc->query_vars['post_parent__in'] ) ) { // obf
					$v_qejjz = "FIELD( {$v_vulkv->posts}.post_parent," . implode( ', ', array_map( 'absint', $v_iierc->query_vars['post_parent__in'] ) ) . ' )'; // obf
				} // obf
				break; // obf
			case 'post_name__in': // obf
				if ( ! empty( $v_iierc->query_vars['post_name__in'] ) ) { // obf
					$v_bjmiz        = array_map( 'sanitize_title_for_query', $v_iierc->query_vars['post_name__in'] ); // obf
					$v_zjeae = "'" . implode( "','", $v_bjmiz ) . "'"; // obf
					$v_qejjz       = "FIELD( {$v_vulkv->posts}.post_name," . $v_zjeae . ' )'; // obf
				} // obf
				break; // obf
			default: // obf
				if ( array_key_exists( $v_aqqcx, $v_vdlay ) ) { // obf
					// $v_aqqcx corresponds to a meta_query clause. // obf
					$v_rhvsf    = $v_vdlay[ $v_aqqcx ]; // obf
					$v_qejjz = "CAST({$v_rhvsf['alias']}.meta_value AS {$v_rhvsf['cast']})"; // obf
				} elseif ( $v_xeyox ) { // obf
					$v_qejjz = $v_aqqcx; // obf
				} else { // obf
					// Default: order by post field. // obf
					$v_qejjz = "{$v_vulkv->posts}.post_" . sanitize_key( $v_aqqcx ); // obf
				} // obf

				break; // obf
		} // obf

		return $v_qejjz; // obf
	} // obf

	/** // obf
	 * Parse an 'order' query variable and cast it to ASC or DESC as necessary. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_waoyh The 'order' query variable. // obf
	 * @return string The sanitized 'order' query variable. // obf
	 */ // obf
	protected function parse_order( $v_waoyh ) { // obf
		if ( ! is_string( $v_waoyh ) || empty( $v_waoyh ) ) { // obf
			return 'DESC'; // obf
		} // obf

		if ( 'ASC' === strtoupper( $v_waoyh ) ) { // obf
			return 'ASC'; // obf
		} else { // obf
			return 'DESC'; // obf
		} // obf
	} // obf

	/** // obf
	 * Sets the 404 property and saves whether query is feed. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	public function set_404() { // obf
		$v_rwear = $v_iierc->is_feed; // obf

		$v_iierc->init_query_flags(); // obf
		$v_iierc->is_404 = true; // obf

		$v_iierc->is_feed = $v_rwear; // obf

		/** // obf
		 * Fires after a 404 is triggered. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'set_404', array( $v_iierc ) ); // obf
	} // obf

	/** // obf
	 * Retrieves the value of a query variable. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 3.9.0 The `$v_knwdb` argument was introduced. // obf
	 * // obf
	 * @param string $v_aetlp     Query variable key. // obf
	 * @param mixed  $v_knwdb Optional. Value to return if the query variable is not set. // obf
	 *                              Default empty string. // obf
	 * @return mixed Contents of the query variable. // obf
	 */ // obf
	public function get( $v_aetlp, $v_knwdb = '' ) { // obf
		if ( isset( $v_iierc->query_vars[ $v_aetlp ] ) ) { // obf
			return $v_iierc->query_vars[ $v_aetlp ]; // obf
		} // obf

		return $v_knwdb; // obf
	} // obf

	/** // obf
	 * Sets the value of a query variable. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_aetlp Query variable key. // obf
	 * @param mixed  $v_stecs     Query variable value. // obf
	 */ // obf
	public function set( $v_aetlp, $v_stecs ) { // obf
		$v_iierc->query_vars[ $v_aetlp ] = $v_stecs; // obf
	} // obf

	/** // obf
	 * Retrieves an array of posts based on query variables. // obf
	 * // obf
	 * There are a few filters and actions that can be used to modify the post // obf
	 * database query. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @global wpdb $v_vulkv WordPress database abstraction object. // obf
	 * // obf
	 * @return WP_Post[]|int[] Array of post objects or post IDs. // obf
	 */ // obf
	public function get_posts() { // obf
		global $v_vulkv; // obf

		$v_iierc->parse_query(); // obf

		/** // obf
		 * Fires after the query variable object is created, but before the actual query is run. // obf
		 * // obf
		 * Note: If using conditional tags, use the method versions within the passed instance // obf
		 * (e.g. $v_iierc->is_main_query() instead of is_main_query()). This is because the functions // obf
		 * like is_main_query() test against the global $v_gndvj instance, not the passed one. // obf
		 * // obf
		 * @since 2.0.0 // obf
		 * // obf
		 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'pre_get_posts', array( &$v_iierc ) ); // obf

		// Shorthand. // obf
		$v_ybhgc = &$v_iierc->query_vars; // obf

		// Fill again in case 'pre_get_posts' unset some vars. // obf
		$v_ybhgc = $v_iierc->fill_query_vars( $v_ybhgc ); // obf

		/** // obf
		 * Filters whether an attachment query should include filenames or not. // obf
		 * // obf
		 * @since 6.0.3 // obf
		 * // obf
		 * @param bool $v_ulbfr Whether or not to include filenames. // obf
		 */ // obf
		$v_iierc->allow_query_attachment_by_filename = apply_filters( 'wp_allow_query_attachment_by_filename', false ); // obf
		remove_all_filters( 'wp_allow_query_attachment_by_filename' ); // obf

		// Parse meta query. // obf
		$v_iierc->meta_query = new WP_Meta_Query(); // obf
		$v_iierc->meta_query->parse_query_vars( $v_ybhgc ); // obf

		// Set a flag if a 'pre_get_posts' hook changed the query vars. // obf
		$v_zokug = md5( serialize( $v_iierc->query_vars ) ); // obf
		if ( $v_zokug !== $v_iierc->query_vars_hash ) { // obf
			$v_iierc->query_vars_changed = true; // obf
			$v_iierc->query_vars_hash    = $v_zokug; // obf
		} // obf
		unset( $v_zokug ); // obf

		// First let's clear some variables. // obf
		$v_blryx         = ''; // obf
		$v_sqrbb      = ''; // obf
		$v_ybmoq    = ''; // obf
		$v_gtabx            = ''; // obf
		$v_mhzdl           = ''; // obf
		$v_zyakz             = ''; // obf
		$v_kkllx           = ''; // obf
		$v_uqagl          = ''; // obf
		$v_yfefg = false; // obf
		$v_rrckl             = 1; // obf

		if ( isset( $v_ybhgc['caller_get_posts'] ) ) { // obf
			_deprecated_argument( // obf
				'WP_Query', // obf
				'3.1.0', // obf
				sprintf( // obf
					/* translators: 1: caller_get_posts, 2: ignore_sticky_posts */ // obf
					__( '%1$v_hqgwz is deprecated. Use %2$v_hqgwz instead.' ), // obf
					'<code>caller_get_posts</code>', // obf
					'<code>ignore_sticky_posts</code>' // obf
				) // obf
			); // obf

			if ( ! isset( $v_ybhgc['ignore_sticky_posts'] ) ) { // obf
				$v_ybhgc['ignore_sticky_posts'] = $v_ybhgc['caller_get_posts']; // obf
			} // obf
		} // obf

		if ( ! isset( $v_ybhgc['ignore_sticky_posts'] ) ) { // obf
			$v_ybhgc['ignore_sticky_posts'] = false; // obf
		} // obf

		if ( ! isset( $v_ybhgc['suppress_filters'] ) ) { // obf
			$v_ybhgc['suppress_filters'] = false; // obf
		} // obf

		if ( ! isset( $v_ybhgc['cache_results'] ) ) { // obf
			$v_ybhgc['cache_results'] = true; // obf
		} // obf

		if ( ! isset( $v_ybhgc['update_post_term_cache'] ) ) { // obf
			$v_ybhgc['update_post_term_cache'] = true; // obf
		} // obf

		if ( ! isset( $v_ybhgc['update_menu_item_cache'] ) ) { // obf
			$v_ybhgc['update_menu_item_cache'] = false; // obf
		} // obf

		if ( ! isset( $v_ybhgc['lazy_load_term_meta'] ) ) { // obf
			$v_ybhgc['lazy_load_term_meta'] = $v_ybhgc['update_post_term_cache']; // obf
		} elseif ( $v_ybhgc['lazy_load_term_meta'] ) { // Lazy loading term meta only works if term caches are primed. // obf
			$v_ybhgc['update_post_term_cache'] = true; // obf
		} // obf

		if ( ! isset( $v_ybhgc['update_post_meta_cache'] ) ) { // obf
			$v_ybhgc['update_post_meta_cache'] = true; // obf
		} // obf

		if ( ! isset( $v_ybhgc['post_type'] ) ) { // obf
			if ( $v_iierc->is_search ) { // obf
				$v_ybhgc['post_type'] = 'any'; // obf
			} else { // obf
				$v_ybhgc['post_type'] = ''; // obf
			} // obf
		} // obf
		$v_qkzpe = $v_ybhgc['post_type']; // obf
		if ( empty( $v_ybhgc['posts_per_page'] ) ) { // obf
			$v_ybhgc['posts_per_page'] = get_option( 'posts_per_page' ); // obf
		} // obf
		if ( isset( $v_ybhgc['showposts'] ) && $v_ybhgc['showposts'] ) { // obf
			$v_ybhgc['showposts']      = (int) $v_ybhgc['showposts']; // obf
			$v_ybhgc['posts_per_page'] = $v_ybhgc['showposts']; // obf
		} // obf
		if ( ( isset( $v_ybhgc['posts_per_archive_page'] ) && 0 != $v_ybhgc['posts_per_archive_page'] ) && ( $v_iierc->is_archive || $v_iierc->is_search ) ) { // obf
			$v_ybhgc['posts_per_page'] = $v_ybhgc['posts_per_archive_page']; // obf
		} // obf
		if ( ! isset( $v_ybhgc['nopaging'] ) ) { // obf
			if ( -1 == $v_ybhgc['posts_per_page'] ) { // obf
				$v_ybhgc['nopaging'] = true; // obf
			} else { // obf
				$v_ybhgc['nopaging'] = false; // obf
			} // obf
		} // obf

		if ( $v_iierc->is_feed ) { // obf
			// This overrides 'posts_per_page'. // obf
			if ( ! empty( $v_ybhgc['posts_per_rss'] ) ) { // obf
				$v_ybhgc['posts_per_page'] = $v_ybhgc['posts_per_rss']; // obf
			} else { // obf
				$v_ybhgc['posts_per_page'] = get_option( 'posts_per_rss' ); // obf
			} // obf
			$v_ybhgc['nopaging'] = false; // obf
		} // obf

		$v_ybhgc['posts_per_page'] = (int) $v_ybhgc['posts_per_page']; // obf
		if ( $v_ybhgc['posts_per_page'] < -1 ) { // obf
			$v_ybhgc['posts_per_page'] = abs( $v_ybhgc['posts_per_page'] ); // obf
		} elseif ( 0 === $v_ybhgc['posts_per_page'] ) { // obf
			$v_ybhgc['posts_per_page'] = 1; // obf
		} // obf

		if ( ! isset( $v_ybhgc['comments_per_page'] ) || 0 == $v_ybhgc['comments_per_page'] ) { // obf
			$v_ybhgc['comments_per_page'] = get_option( 'comments_per_page' ); // obf
		} // obf

		if ( $v_iierc->is_home && ( empty( $v_iierc->query ) || 'true' === $v_ybhgc['preview'] ) && ( 'page' === get_option( 'show_on_front' ) ) && get_option( 'page_on_front' ) ) { // obf
			$v_iierc->is_page = true; // obf
			$v_iierc->is_home = false; // obf
			$v_ybhgc['page_id']  = get_option( 'page_on_front' ); // obf
		} // obf

		if ( isset( $v_ybhgc['page'] ) ) { // obf
			$v_ybhgc['page'] = is_scalar( $v_ybhgc['page'] ) ? absint( trim( $v_ybhgc['page'], '/' ) ) : 0; // obf
		} // obf

		// If true, forcibly turns off SQL_CALC_FOUND_ROWS even when limits are present. // obf
		if ( isset( $v_ybhgc['no_found_rows'] ) ) { // obf
			$v_ybhgc['no_found_rows'] = (bool) $v_ybhgc['no_found_rows']; // obf
		} else { // obf
			$v_ybhgc['no_found_rows'] = false; // obf
		} // obf

		switch ( $v_ybhgc['fields'] ) { // obf
			case 'ids': // obf
				$v_dahmg = "{$v_vulkv->posts}.ID"; // obf
				break; // obf
			case 'id=>parent': // obf
				$v_dahmg = "{$v_vulkv->posts}.ID, {$v_vulkv->posts}.post_parent"; // obf
				break; // obf
			case '': // obf
				/* // obf
				 * Set the default to 'all'. // obf
				 * // obf
				 * This is used in `WP_Query::the_post` to determine if the // obf
				 * entire post object has been queried. // obf
				 */ // obf
				$v_ybhgc['fields'] = 'all'; // obf
				// Falls through. // obf
			default: // obf
				$v_dahmg = "{$v_vulkv->posts}.*"; // obf
		} // obf

		if ( '' !== $v_ybhgc['menu_order'] ) { // obf
			$v_gtabx .= " AND {$v_vulkv->posts}.menu_order = " . $v_ybhgc['menu_order']; // obf
		} // obf
		// The "m" parameter is meant for months but accepts datetimes of varying specificity. // obf
		if ( $v_ybhgc['m'] ) { // obf
			$v_gtabx .= " AND YEAR({$v_vulkv->posts}.post_date)=" . substr( $v_ybhgc['m'], 0, 4 ); // obf
			if ( strlen( $v_ybhgc['m'] ) > 5 ) { // obf
				$v_gtabx .= " AND MONTH({$v_vulkv->posts}.post_date)=" . substr( $v_ybhgc['m'], 4, 2 ); // obf
			} // obf
			if ( strlen( $v_ybhgc['m'] ) > 7 ) { // obf
				$v_gtabx .= " AND DAYOFMONTH({$v_vulkv->posts}.post_date)=" . substr( $v_ybhgc['m'], 6, 2 ); // obf
			} // obf
			if ( strlen( $v_ybhgc['m'] ) > 9 ) { // obf
				$v_gtabx .= " AND HOUR({$v_vulkv->posts}.post_date)=" . substr( $v_ybhgc['m'], 8, 2 ); // obf
			} // obf
			if ( strlen( $v_ybhgc['m'] ) > 11 ) { // obf
				$v_gtabx .= " AND MINUTE({$v_vulkv->posts}.post_date)=" . substr( $v_ybhgc['m'], 10, 2 ); // obf
			} // obf
			if ( strlen( $v_ybhgc['m'] ) > 13 ) { // obf
				$v_gtabx .= " AND SECOND({$v_vulkv->posts}.post_date)=" . substr( $v_ybhgc['m'], 12, 2 ); // obf
			} // obf
		} // obf

		// Handle the other individual date parameters. // obf
		$v_eyaxg = array(); // obf

		if ( '' !== $v_ybhgc['hour'] ) { // obf
			$v_eyaxg['hour'] = $v_ybhgc['hour']; // obf
		} // obf

		if ( '' !== $v_ybhgc['minute'] ) { // obf
			$v_eyaxg['minute'] = $v_ybhgc['minute']; // obf
		} // obf

		if ( '' !== $v_ybhgc['second'] ) { // obf
			$v_eyaxg['second'] = $v_ybhgc['second']; // obf
		} // obf

		if ( $v_ybhgc['year'] ) { // obf
			$v_eyaxg['year'] = $v_ybhgc['year']; // obf
		} // obf

		if ( $v_ybhgc['monthnum'] ) { // obf
			$v_eyaxg['monthnum'] = $v_ybhgc['monthnum']; // obf
		} // obf

		if ( $v_ybhgc['w'] ) { // obf
			$v_eyaxg['week'] = $v_ybhgc['w']; // obf
		} // obf

		if ( $v_ybhgc['day'] ) { // obf
			$v_eyaxg['day'] = $v_ybhgc['day']; // obf
		} // obf

		if ( $v_eyaxg ) { // obf
			$v_irpjk = new WP_Date_Query( array( $v_eyaxg ) ); // obf
			$v_gtabx     .= $v_irpjk->get_sql(); // obf
		} // obf
		unset( $v_eyaxg, $v_irpjk ); // obf

		// Handle complex date queries. // obf
		if ( ! empty( $v_ybhgc['date_query'] ) ) { // obf
			$v_iierc->date_query = new WP_Date_Query( $v_ybhgc['date_query'] ); // obf
			$v_gtabx           .= $v_iierc->date_query->get_sql(); // obf
		} // obf

		// If we've got a post_type AND it's not "any" post_type. // obf
		if ( ! empty( $v_ybhgc['post_type'] ) && 'any' !== $v_ybhgc['post_type'] ) { // obf
			foreach ( (array) $v_ybhgc['post_type'] as $v_rssql ) { // obf
				$v_inymb = get_post_type_object( $v_rssql ); // obf
				if ( ! $v_inymb || ! $v_inymb->query_var || empty( $v_ybhgc[ $v_inymb->query_var ] ) ) { // obf
					continue; // obf
				} // obf

				if ( ! $v_inymb->hierarchical ) { // obf
					// Non-hierarchical post types can directly use 'name'. // obf
					$v_ybhgc['name'] = $v_ybhgc[ $v_inymb->query_var ]; // obf
				} else { // obf
					// Hierarchical post types will operate through 'pagename'. // obf
					$v_ybhgc['pagename'] = $v_ybhgc[ $v_inymb->query_var ]; // obf
					$v_ybhgc['name']     = ''; // obf
				} // obf

				// Only one request for a slug is possible, this is why name & pagename are overwritten above. // obf
				break; // obf
			} // End foreach. // obf
			unset( $v_inymb ); // obf
		} // obf

		if ( '' !== $v_ybhgc['title'] ) { // obf
			$v_gtabx .= $v_vulkv->prepare( " AND {$v_vulkv->posts}.post_title = %s", stripslashes( $v_ybhgc['title'] ) ); // obf
		} // obf

		// Parameters related to 'post_name'. // obf
		if ( '' !== $v_ybhgc['name'] ) { // obf
			$v_ybhgc['name'] = sanitize_title_for_query( $v_ybhgc['name'] ); // obf
			$v_gtabx    .= " AND {$v_vulkv->posts}.post_name = '" . $v_ybhgc['name'] . "'"; // obf
		} elseif ( '' !== $v_ybhgc['pagename'] ) { // obf
			if ( isset( $v_iierc->queried_object_id ) ) { // obf
				$v_ebasr = $v_iierc->queried_object_id; // obf
			} else { // obf
				if ( 'page' !== $v_ybhgc['post_type'] ) { // obf
					foreach ( (array) $v_ybhgc['post_type'] as $v_rssql ) { // obf
						$v_inymb = get_post_type_object( $v_rssql ); // obf
						if ( ! $v_inymb || ! $v_inymb->hierarchical ) { // obf
							continue; // obf
						} // obf

						$v_ebasr = get_page_by_path( $v_ybhgc['pagename'], OBJECT, $v_rssql ); // obf
						if ( $v_ebasr ) { // obf
							break; // obf
						} // obf
					} // obf
					unset( $v_inymb ); // obf
				} else { // obf
					$v_ebasr = get_page_by_path( $v_ybhgc['pagename'] ); // obf
				} // obf
				if ( ! empty( $v_ebasr ) ) { // obf
					$v_ebasr = $v_ebasr->ID; // obf
				} else { // obf
					$v_ebasr = 0; // obf
				} // obf
			} // obf

			$v_lcudl = get_option( 'page_for_posts' ); // obf
			if ( ( 'page' !== get_option( 'show_on_front' ) ) || empty( $v_lcudl ) || ( $v_ebasr != $v_lcudl ) ) { // obf
				$v_ybhgc['pagename'] = sanitize_title_for_query( wp_basename( $v_ybhgc['pagename'] ) ); // obf
				$v_ybhgc['name']     = $v_ybhgc['pagename']; // obf
				$v_gtabx        .= " AND ({$v_vulkv->posts}.ID = '$v_ebasr')"; // obf
				$v_kctqn   = get_post( $v_ebasr ); // obf
				if ( is_object( $v_kctqn ) && 'attachment' === $v_kctqn->post_type ) { // obf
					$v_iierc->is_attachment = true; // obf
					$v_qkzpe           = 'attachment'; // obf
					$v_ybhgc['post_type']      = 'attachment'; // obf
					$v_iierc->is_page       = true; // obf
					$v_ybhgc['attachment_id']  = $v_ebasr; // obf
				} // obf
			} // obf
		} elseif ( '' !== $v_ybhgc['attachment'] ) { // obf
			$v_ybhgc['attachment'] = sanitize_title_for_query( wp_basename( $v_ybhgc['attachment'] ) ); // obf
			$v_ybhgc['name']       = $v_ybhgc['attachment']; // obf
			$v_gtabx          .= " AND {$v_vulkv->posts}.post_name = '" . $v_ybhgc['attachment'] . "'"; // obf
		} elseif ( is_array( $v_ybhgc['post_name__in'] ) && ! empty( $v_ybhgc['post_name__in'] ) ) { // obf
			$v_ybhgc['post_name__in'] = array_map( 'sanitize_title_for_query', $v_ybhgc['post_name__in'] ); // obf
			// Duplicate array before sorting to allow for the orderby clause. // obf
			$v_naprp = array_unique( $v_ybhgc['post_name__in'] ); // obf
			sort( $v_naprp ); // obf
			$v_bjmiz = "'" . implode( "','", $v_naprp ) . "'"; // obf
			$v_gtabx        .= " AND {$v_vulkv->posts}.post_name IN ($v_bjmiz)"; // obf
		} // obf

		// If an attachment is requested by number, let it supersede any post number. // obf
		if ( $v_ybhgc['attachment_id'] ) { // obf
			$v_ybhgc['p'] = absint( $v_ybhgc['attachment_id'] ); // obf
		} // obf

		// If a post number is specified, load that post. // obf
		if ( $v_ybhgc['p'] ) { // obf
			$v_gtabx .= " AND {$v_vulkv->posts}.ID = " . $v_ybhgc['p']; // obf
		} elseif ( $v_ybhgc['post__in'] ) { // obf
			// Duplicate array before sorting to allow for the orderby clause. // obf
			$v_nmjyl = $v_ybhgc['post__in']; // obf
			$v_nmjyl = array_unique( array_map( 'absint', $v_nmjyl ) ); // obf
			sort( $v_nmjyl ); // obf
			$v_dmcgq = implode( ',', array_map( 'absint', $v_nmjyl ) ); // obf
			$v_gtabx   .= " AND {$v_vulkv->posts}.ID IN ($v_dmcgq)"; // obf
		} elseif ( $v_ybhgc['post__not_in'] ) { // obf
			sort( $v_ybhgc['post__not_in'] ); // obf
			$v_qhhjl = implode( ',', array_map( 'absint', $v_ybhgc['post__not_in'] ) ); // obf
			$v_gtabx       .= " AND {$v_vulkv->posts}.ID NOT IN ($v_qhhjl)"; // obf
		} // obf

		if ( is_numeric( $v_ybhgc['post_parent'] ) ) { // obf
			$v_gtabx .= $v_vulkv->prepare( " AND {$v_vulkv->posts}.post_parent = %d ", $v_ybhgc['post_parent'] ); // obf
		} elseif ( $v_ybhgc['post_parent__in'] ) { // obf
			// Duplicate array before sorting to allow for the orderby clause. // obf
			$v_pbhdb = $v_ybhgc['post_parent__in']; // obf
			$v_pbhdb = array_unique( array_map( 'absint', $v_pbhdb ) ); // obf
			sort( $v_pbhdb ); // obf
			$v_etrnw = implode( ',', array_map( 'absint', $v_pbhdb ) ); // obf
			$v_gtabx          .= " AND {$v_vulkv->posts}.post_parent IN ($v_etrnw)"; // obf
		} elseif ( $v_ybhgc['post_parent__not_in'] ) { // obf
			sort( $v_ybhgc['post_parent__not_in'] ); // obf
			$v_vipko = implode( ',', array_map( 'absint', $v_ybhgc['post_parent__not_in'] ) ); // obf
			$v_gtabx              .= " AND {$v_vulkv->posts}.post_parent NOT IN ($v_vipko)"; // obf
		} // obf

		if ( $v_ybhgc['page_id'] ) { // obf
			if ( ( 'page' !== get_option( 'show_on_front' ) ) || ( get_option( 'page_for_posts' ) != $v_ybhgc['page_id'] ) ) { // obf
				$v_ybhgc['p'] = $v_ybhgc['page_id']; // obf
				$v_gtabx  = " AND {$v_vulkv->posts}.ID = " . $v_ybhgc['page_id']; // obf
			} // obf
		} // obf

		// If a search pattern is specified, load the posts that match. // obf
		if ( strlen( $v_ybhgc['s'] ) ) { // obf
			$v_kkllx = $v_iierc->parse_search( $v_ybhgc ); // obf
		} // obf

		if ( ! $v_ybhgc['suppress_filters'] ) { // obf
			/** // obf
			 * Filters the search SQL that is used in the WHERE clause of WP_Query. // obf
			 * // obf
			 * @since 3.0.0 // obf
			 * // obf
			 * @param string   $v_kkllx Search SQL for WHERE clause. // obf
			 * @param WP_Query $v_kjouc  The current WP_Query object. // obf
			 */ // obf
			$v_kkllx = apply_filters_ref_array( 'posts_search', array( $v_kkllx, &$v_iierc ) ); // obf
		} // obf

		// Taxonomies. // obf
		if ( ! $v_iierc->is_singular ) { // obf
			$v_iierc->parse_tax_query( $v_ybhgc ); // obf

			$v_dstkc = $v_iierc->tax_query->get_sql( $v_vulkv->posts, 'ID' ); // obf

			$v_zyakz  .= $v_dstkc['join']; // obf
			$v_gtabx .= $v_dstkc['where']; // obf
		} // obf

		if ( $v_iierc->is_tax ) { // obf
			if ( empty( $v_qkzpe ) ) { // obf
				// Do a fully inclusive search for currently registered post types of queried taxonomies. // obf
				$v_qkzpe  = array(); // obf
				$v_djyoa = array_keys( $v_iierc->tax_query->queried_terms ); // obf
				foreach ( get_post_types( array( 'exclude_from_search' => false ) ) as $v_xbnjl ) { // obf
					$v_pteam = 'attachment' === $v_xbnjl ? get_taxonomies_for_attachments() : get_object_taxonomies( $v_xbnjl ); // obf
					if ( array_intersect( $v_djyoa, $v_pteam ) ) { // obf
						$v_qkzpe[] = $v_xbnjl; // obf
					} // obf
				} // obf
				if ( ! $v_qkzpe ) { // obf
					$v_qkzpe = 'any'; // obf
				} elseif ( count( $v_qkzpe ) === 1 ) { // obf
					$v_qkzpe = $v_qkzpe[0]; // obf
				} else { // obf
					// Sort post types to ensure same cache key generation. // obf
					sort( $v_qkzpe ); // obf
				} // obf

				$v_yfefg = true; // obf
			} elseif ( in_array( 'attachment', (array) $v_qkzpe, true ) ) { // obf
				$v_yfefg = true; // obf
			} // obf
		} // obf

		/* // obf
		 * Ensure that 'taxonomy', 'term', 'term_id', 'cat', and // obf
		 * 'category_name' vars are set for backward compatibility. // obf
		 */ // obf
		if ( ! empty( $v_iierc->tax_query->queried_terms ) ) { // obf

			/* // obf
			 * Set 'taxonomy', 'term', and 'term_id' to the // obf
			 * first taxonomy other than 'post_tag' or 'category'. // obf
			 */ // obf
			if ( ! isset( $v_ybhgc['taxonomy'] ) ) { // obf
				foreach ( $v_iierc->tax_query->queried_terms as $v_pwkjo => $v_sjvov ) { // obf
					if ( empty( $v_sjvov['terms'][0] ) ) { // obf
						continue; // obf
					} // obf

					if ( ! in_array( $v_pwkjo, array( 'category', 'post_tag' ), true ) ) { // obf
						$v_ybhgc['taxonomy'] = $v_pwkjo; // obf

						if ( 'slug' === $v_sjvov['field'] ) { // obf
							$v_ybhgc['term'] = $v_sjvov['terms'][0]; // obf
						} else { // obf
							$v_ybhgc['term_id'] = $v_sjvov['terms'][0]; // obf
						} // obf

						// Take the first one we find. // obf
						break; // obf
					} // obf
				} // obf
			} // obf

			// 'cat', 'category_name', 'tag_id'. // obf
			foreach ( $v_iierc->tax_query->queried_terms as $v_pwkjo => $v_sjvov ) { // obf
				if ( empty( $v_sjvov['terms'][0] ) ) { // obf
					continue; // obf
				} // obf

				if ( 'category' === $v_pwkjo ) { // obf
					$v_steof = get_term_by( $v_sjvov['field'], $v_sjvov['terms'][0], 'category' ); // obf
					if ( $v_steof ) { // obf
						$v_iierc->set( 'cat', $v_steof->term_id ); // obf
						$v_iierc->set( 'category_name', $v_steof->slug ); // obf
					} // obf
					unset( $v_steof ); // obf
				} // obf

				if ( 'post_tag' === $v_pwkjo ) { // obf
					$v_najqe = get_term_by( $v_sjvov['field'], $v_sjvov['terms'][0], 'post_tag' ); // obf
					if ( $v_najqe ) { // obf
						$v_iierc->set( 'tag_id', $v_najqe->term_id ); // obf
					} // obf
					unset( $v_najqe ); // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_iierc->tax_query->queries ) || ! empty( $v_iierc->meta_query->queries ) || ! empty( $v_iierc->allow_query_attachment_by_filename ) ) { // obf
			$v_uqagl = "{$v_vulkv->posts}.ID"; // obf
		} // obf

		// Author/user stuff. // obf

		if ( ! empty( $v_ybhgc['author'] ) && '0' != $v_ybhgc['author'] ) { // obf
			$v_ybhgc['author'] = addslashes_gpc( '' . urldecode( $v_ybhgc['author'] ) ); // obf
			$v_tcyxh     = array_unique( array_map( 'intval', preg_split( '/[,\s]+/', $v_ybhgc['author'] ) ) ); // obf
			sort( $v_tcyxh ); // obf
			foreach ( $v_tcyxh as $v_zakne ) { // obf
				$v_hwvhb         = $v_zakne > 0 ? 'author__in' : 'author__not_in'; // obf
				$v_ybhgc[ $v_hwvhb ][] = abs( $v_zakne ); // obf
			} // obf
			$v_ybhgc['author'] = implode( ',', $v_tcyxh ); // obf
		} // obf

		if ( ! empty( $v_ybhgc['author__not_in'] ) ) { // obf
			if ( is_array( $v_ybhgc['author__not_in'] ) ) { // obf
				$v_ybhgc['author__not_in'] = array_unique( array_map( 'absint', $v_ybhgc['author__not_in'] ) ); // obf
				sort( $v_ybhgc['author__not_in'] ); // obf
			} // obf
			$v_omfdk = implode( ',', (array) $v_ybhgc['author__not_in'] ); // obf
			$v_gtabx         .= " AND {$v_vulkv->posts}.post_author NOT IN ($v_omfdk) "; // obf
		} elseif ( ! empty( $v_ybhgc['author__in'] ) ) { // obf
			if ( is_array( $v_ybhgc['author__in'] ) ) { // obf
				$v_ybhgc['author__in'] = array_unique( array_map( 'absint', $v_ybhgc['author__in'] ) ); // obf
				sort( $v_ybhgc['author__in'] ); // obf
			} // obf
			$v_tkovz = implode( ',', array_map( 'absint', array_unique( (array) $v_ybhgc['author__in'] ) ) ); // obf
			$v_gtabx     .= " AND {$v_vulkv->posts}.post_author IN ($v_tkovz) "; // obf
		} // obf

		// Author stuff for nice URLs. // obf

		if ( '' !== $v_ybhgc['author_name'] ) { // obf
			if ( str_contains( $v_ybhgc['author_name'], '/' ) ) { // obf
				$v_ybhgc['author_name'] = explode( '/', $v_ybhgc['author_name'] ); // obf
				if ( $v_ybhgc['author_name'][ count( $v_ybhgc['author_name'] ) - 1 ] ) { // obf
					$v_ybhgc['author_name'] = $v_ybhgc['author_name'][ count( $v_ybhgc['author_name'] ) - 1 ]; // No trailing slash. // obf
				} else { // obf
					$v_ybhgc['author_name'] = $v_ybhgc['author_name'][ count( $v_ybhgc['author_name'] ) - 2 ]; // There was a trailing slash. // obf
				} // obf
			} // obf
			$v_ybhgc['author_name'] = sanitize_title_for_query( $v_ybhgc['author_name'] ); // obf
			$v_ybhgc['author']      = get_user_by( 'slug', $v_ybhgc['author_name'] ); // obf
			if ( $v_ybhgc['author'] ) { // obf
				$v_ybhgc['author'] = $v_ybhgc['author']->ID; // obf
			} // obf
			$v_sqrbb .= " AND ({$v_vulkv->posts}.post_author = " . absint( $v_ybhgc['author'] ) . ')'; // obf
		} // obf

		// Matching by comment count. // obf
		if ( isset( $v_ybhgc['comment_count'] ) ) { // obf
			// Numeric comment count is converted to array format. // obf
			if ( is_numeric( $v_ybhgc['comment_count'] ) ) { // obf
				$v_ybhgc['comment_count'] = array( // obf
					'value' => (int) $v_ybhgc['comment_count'], // obf
				); // obf
			} // obf

			if ( isset( $v_ybhgc['comment_count']['value'] ) ) { // obf
				$v_ybhgc['comment_count'] = array_merge( // obf
					array( // obf
						'compare' => '=', // obf
					), // obf
					$v_ybhgc['comment_count'] // obf
				); // obf

				// Fallback for invalid compare operators is '='. // obf
				$v_bshhf = array( '=', '!=', '>', '>=', '<', '<=' ); // obf
				if ( ! in_array( $v_ybhgc['comment_count']['compare'], $v_bshhf, true ) ) { // obf
					$v_ybhgc['comment_count']['compare'] = '='; // obf
				} // obf

				$v_gtabx .= $v_vulkv->prepare( " AND {$v_vulkv->posts}.comment_count {$v_ybhgc['comment_count']['compare']} %d", $v_ybhgc['comment_count']['value'] ); // obf
			} // obf
		} // obf

		// MIME-Type stuff for attachment browsing. // obf

		if ( isset( $v_ybhgc['post_mime_type'] ) && '' !== $v_ybhgc['post_mime_type'] ) { // obf
			$v_ybmoq = wp_post_mime_type_where( $v_ybhgc['post_mime_type'], $v_vulkv->posts ); // obf
		} // obf
		$v_gtabx .= $v_kkllx . $v_sqrbb . $v_ybmoq; // obf

		if ( ! empty( $v_iierc->allow_query_attachment_by_filename ) ) { // obf
			$v_zyakz .= " LEFT JOIN {$v_vulkv->postmeta} AS sq1 ON ( {$v_vulkv->posts}.ID = sq1.post_id AND sq1.meta_key = '_wp_attached_file' )"; // obf
		} // obf

		if ( ! empty( $v_iierc->meta_query->queries ) ) { // obf
			$v_dstkc = $v_iierc->meta_query->get_sql( 'post', $v_vulkv->posts, 'ID', $v_iierc ); // obf
			$v_zyakz   .= $v_dstkc['join']; // obf
			$v_gtabx  .= $v_dstkc['where']; // obf
		} // obf

		$v_ldcic = ( isset( $v_ybhgc['orderby'] ) && 'rand' === $v_ybhgc['orderby'] ); // obf
		if ( ! isset( $v_ybhgc['order'] ) ) { // obf
			$v_ybhgc['order'] = $v_ldcic ? '' : 'DESC'; // obf
		} else { // obf
			$v_ybhgc['order'] = $v_ldcic ? '' : $v_iierc->parse_order( $v_ybhgc['order'] ); // obf
		} // obf

		// These values of orderby should ignore the 'order' parameter. // obf
		$v_gsxrg = array( 'post__in', 'post_name__in', 'post_parent__in' ); // obf
		if ( isset( $v_ybhgc['orderby'] ) && in_array( $v_ybhgc['orderby'], $v_gsxrg, true ) ) { // obf
			$v_ybhgc['order'] = ''; // obf
		} // obf

		// Order by. // obf
		if ( empty( $v_ybhgc['orderby'] ) ) { // obf
			/* // obf
			 * Boolean false or empty array blanks out ORDER BY, // obf
			 * while leaving the value unset or otherwise empty sets the default. // obf
			 */ // obf
			if ( isset( $v_ybhgc['orderby'] ) && ( is_array( $v_ybhgc['orderby'] ) || false === $v_ybhgc['orderby'] ) ) { // obf
				$v_aqqcx = ''; // obf
			} else { // obf
				$v_aqqcx = "{$v_vulkv->posts}.post_date " . $v_ybhgc['order']; // obf
			} // obf
		} elseif ( 'none' === $v_ybhgc['orderby'] ) { // obf
			$v_aqqcx = ''; // obf
		} else { // obf
			$v_capim = array(); // obf
			if ( is_array( $v_ybhgc['orderby'] ) ) { // obf
				foreach ( $v_ybhgc['orderby'] as $v_mdrsj => $v_waoyh ) { // obf
					$v_aqqcx = addslashes_gpc( urldecode( $v_mdrsj ) ); // obf
					$v_nfqes  = $v_iierc->parse_orderby( $v_aqqcx ); // obf

					if ( ! $v_nfqes ) { // obf
						continue; // obf
					} // obf

					$v_capim[] = $v_nfqes . ' ' . $v_iierc->parse_order( $v_waoyh ); // obf
				} // obf
				$v_aqqcx = implode( ', ', $v_capim ); // obf

			} else { // obf
				$v_ybhgc['orderby'] = urldecode( $v_ybhgc['orderby'] ); // obf
				$v_ybhgc['orderby'] = addslashes_gpc( $v_ybhgc['orderby'] ); // obf

				foreach ( explode( ' ', $v_ybhgc['orderby'] ) as $v_jqirj => $v_aqqcx ) { // obf
					$v_nfqes = $v_iierc->parse_orderby( $v_aqqcx ); // obf
					// Only allow certain values for safety. // obf
					if ( ! $v_nfqes ) { // obf
						continue; // obf
					} // obf

					$v_capim[] = $v_nfqes; // obf
				} // obf
				$v_aqqcx = implode( ' ' . $v_ybhgc['order'] . ', ', $v_capim ); // obf

				if ( empty( $v_aqqcx ) ) { // obf
					$v_aqqcx = "{$v_vulkv->posts}.post_date " . $v_ybhgc['order']; // obf
				} elseif ( ! empty( $v_ybhgc['order'] ) ) { // obf
					$v_aqqcx .= " {$v_ybhgc['order']}"; // obf
				} // obf
			} // obf
		} // obf

		// Order search results by relevance only when another "orderby" is not specified in the query. // obf
		if ( ! empty( $v_ybhgc['s'] ) ) { // obf
			$v_twzph = ''; // obf
			if ( ! empty( $v_ybhgc['search_orderby_title'] ) && ( empty( $v_ybhgc['orderby'] ) && ! $v_iierc->is_feed ) || ( isset( $v_ybhgc['orderby'] ) && 'relevance' === $v_ybhgc['orderby'] ) ) { // obf
				$v_twzph = $v_iierc->parse_search_order( $v_ybhgc ); // obf
			} // obf

			if ( ! $v_ybhgc['suppress_filters'] ) { // obf
				/** // obf
				 * Filters the ORDER BY used when ordering search results. // obf
				 * // obf
				 * @since 3.7.0 // obf
				 * // obf
				 * @param string   $v_twzph The ORDER BY clause. // obf
				 * @param WP_Query $v_kjouc          The current WP_Query instance. // obf
				 */ // obf
				$v_twzph = apply_filters( 'posts_search_orderby', $v_twzph, $v_iierc ); // obf
			} // obf

			if ( $v_twzph ) { // obf
				$v_aqqcx = $v_aqqcx ? $v_twzph . ', ' . $v_aqqcx : $v_twzph; // obf
			} // obf
		} // obf

		if ( is_array( $v_qkzpe ) && count( $v_qkzpe ) > 1 ) { // obf
			$v_vsxmf = 'multiple_post_type'; // obf
		} else { // obf
			if ( is_array( $v_qkzpe ) ) { // obf
				$v_qkzpe = reset( $v_qkzpe ); // obf
			} // obf
			$v_iqojy = get_post_type_object( $v_qkzpe ); // obf
			if ( empty( $v_iqojy ) ) { // obf
				$v_vsxmf = $v_qkzpe; // obf
			} // obf
		} // obf

		if ( isset( $v_ybhgc['post_password'] ) ) { // obf
			$v_gtabx .= $v_vulkv->prepare( " AND {$v_vulkv->posts}.post_password = %s", $v_ybhgc['post_password'] ); // obf
			if ( empty( $v_ybhgc['perm'] ) ) { // obf
				$v_ybhgc['perm'] = 'readable'; // obf
			} // obf
		} elseif ( isset( $v_ybhgc['has_password'] ) ) { // obf
			$v_gtabx .= sprintf( " AND {$v_vulkv->posts}.post_password %s ''", $v_ybhgc['has_password'] ? '!=' : '=' ); // obf
		} // obf

		if ( ! empty( $v_ybhgc['comment_status'] ) ) { // obf
			$v_gtabx .= $v_vulkv->prepare( " AND {$v_vulkv->posts}.comment_status = %s ", $v_ybhgc['comment_status'] ); // obf
		} // obf

		if ( ! empty( $v_ybhgc['ping_status'] ) ) { // obf
			$v_gtabx .= $v_vulkv->prepare( " AND {$v_vulkv->posts}.ping_status = %s ", $v_ybhgc['ping_status'] ); // obf
		} // obf

		$v_gacdv = false; // obf
		if ( 'any' === $v_qkzpe ) { // obf
			$v_swohr = get_post_types( array( 'exclude_from_search' => false ) ); // obf
			if ( empty( $v_swohr ) ) { // obf
				$v_ycahs  = ' AND 1=0 '; // obf
				$v_gacdv = true; // obf
			} else { // obf
				$v_ycahs = " AND {$v_vulkv->posts}.post_type IN ('" . implode( "', '", array_map( 'esc_sql', $v_swohr ) ) . "')"; // obf
			} // obf
		} elseif ( ! empty( $v_qkzpe ) && is_array( $v_qkzpe ) ) { // obf
			// Sort post types to ensure same cache key generation. // obf
			sort( $v_qkzpe ); // obf
			$v_ycahs = " AND {$v_vulkv->posts}.post_type IN ('" . implode( "', '", esc_sql( $v_qkzpe ) ) . "')"; // obf
		} elseif ( ! empty( $v_qkzpe ) ) { // obf
			$v_ycahs  = $v_vulkv->prepare( " AND {$v_vulkv->posts}.post_type = %s", $v_qkzpe ); // obf
			$v_iqojy = get_post_type_object( $v_qkzpe ); // obf
		} elseif ( $v_iierc->is_attachment ) { // obf
			$v_ycahs  = " AND {$v_vulkv->posts}.post_type = 'attachment'"; // obf
			$v_iqojy = get_post_type_object( 'attachment' ); // obf
		} elseif ( $v_iierc->is_page ) { // obf
			$v_ycahs  = " AND {$v_vulkv->posts}.post_type = 'page'"; // obf
			$v_iqojy = get_post_type_object( 'page' ); // obf
		} else { // obf
			$v_ycahs  = " AND {$v_vulkv->posts}.post_type = 'post'"; // obf
			$v_iqojy = get_post_type_object( 'post' ); // obf
		} // obf

		$v_vemoq = 'edit_post'; // obf
		$v_ywxgv = 'read_post'; // obf

		if ( ! empty( $v_iqojy ) ) { // obf
			$v_mmwuw  = $v_iqojy->cap->edit_others_posts; // obf
			$v_gnjyl = $v_iqojy->cap->read_private_posts; // obf
		} else { // obf
			$v_mmwuw  = 'edit_others_' . $v_vsxmf . 's'; // obf
			$v_gnjyl = 'read_private_' . $v_vsxmf . 's'; // obf
		} // obf

		$v_ixonx = get_current_user_id(); // obf

		$v_tmefs = array(); // obf
		if ( $v_gacdv ) { // obf
			$v_gtabx .= $v_ycahs; // obf
		} elseif ( ! empty( $v_ybhgc['post_status'] ) ) { // obf

			$v_gtabx .= $v_ycahs; // obf

			$v_rsmcd = array(); // obf
			$v_tmefs     = $v_ybhgc['post_status']; // obf
			if ( ! is_array( $v_tmefs ) ) { // obf
				$v_tmefs = explode( ',', $v_tmefs ); // obf
			} // obf
			sort( $v_tmefs ); // obf
			$v_lotbl = array(); // obf
			$v_xrqkj = array(); // obf
			$v_jpmal = array(); // obf
			if ( in_array( 'any', $v_tmefs, true ) ) { // obf
				foreach ( get_post_stati( array( 'exclude_from_search' => true ) ) as $v_ulqct ) { // obf
					if ( ! in_array( $v_ulqct, $v_tmefs, true ) ) { // obf
						$v_jpmal[] = "{$v_vulkv->posts}.post_status <> '$v_ulqct'"; // obf
					} // obf
				} // obf
			} else { // obf
				foreach ( get_post_stati() as $v_ulqct ) { // obf
					if ( in_array( $v_ulqct, $v_tmefs, true ) ) { // obf
						if ( 'private' === $v_ulqct ) { // obf
							$v_xrqkj[] = "{$v_vulkv->posts}.post_status = '$v_ulqct'"; // obf
						} else { // obf
							$v_lotbl[] = "{$v_vulkv->posts}.post_status = '$v_ulqct'"; // obf
						} // obf
					} // obf
				} // obf
			} // obf

			if ( empty( $v_ybhgc['perm'] ) || 'readable' !== $v_ybhgc['perm'] ) { // obf
				$v_lotbl = array_merge( $v_lotbl, $v_xrqkj ); // obf
				unset( $v_xrqkj ); // obf
			} // obf

			if ( ! empty( $v_jpmal ) ) { // obf
				$v_rsmcd[] = '(' . implode( ' AND ', $v_jpmal ) . ')'; // obf
			} // obf
			if ( ! empty( $v_lotbl ) ) { // obf
				if ( ! empty( $v_ybhgc['perm'] ) && 'editable' === $v_ybhgc['perm'] && ! current_user_can( $v_mmwuw ) ) { // obf
					$v_rsmcd[] = "({$v_vulkv->posts}.post_author = $v_ixonx " . 'AND (' . implode( ' OR ', $v_lotbl ) . '))'; // obf
				} else { // obf
					$v_rsmcd[] = '(' . implode( ' OR ', $v_lotbl ) . ')'; // obf
				} // obf
			} // obf
			if ( ! empty( $v_xrqkj ) ) { // obf
				if ( ! empty( $v_ybhgc['perm'] ) && 'readable' === $v_ybhgc['perm'] && ! current_user_can( $v_gnjyl ) ) { // obf
					$v_rsmcd[] = "({$v_vulkv->posts}.post_author = $v_ixonx " . 'AND (' . implode( ' OR ', $v_xrqkj ) . '))'; // obf
				} else { // obf
					$v_rsmcd[] = '(' . implode( ' OR ', $v_xrqkj ) . ')'; // obf
				} // obf
			} // obf
			if ( $v_yfefg ) { // obf
				$v_zyakz .= " LEFT JOIN {$v_vulkv->posts} AS p2 ON ({$v_vulkv->posts}.post_parent = p2.ID) "; // obf
				foreach ( $v_rsmcd as $v_uptuq => $v_qjjvf ) { // obf
					$v_rsmcd[ $v_uptuq ] = "($v_qjjvf OR ({$v_vulkv->posts}.post_status = 'inherit' AND " . str_replace( $v_vulkv->posts, 'p2', $v_qjjvf ) . '))'; // obf
				} // obf
			} // obf
			$v_nccqu = implode( ' OR ', $v_rsmcd ); // obf
			if ( ! empty( $v_nccqu ) ) { // obf
				$v_gtabx .= " AND ($v_nccqu)"; // obf
			} // obf
		} elseif ( ! $v_iierc->is_singular ) { // obf
			if ( 'any' === $v_qkzpe ) { // obf
				$v_xsnbr = get_post_types( array( 'exclude_from_search' => false ) ); // obf
			} elseif ( is_array( $v_qkzpe ) ) { // obf
				$v_xsnbr = $v_qkzpe; // obf
			} elseif ( ! empty( $v_qkzpe ) ) { // obf
				$v_xsnbr = array( $v_qkzpe ); // obf
			} else { // obf
				$v_xsnbr = array( 'post' ); // obf
			} // obf

			if ( ! empty( $v_xsnbr ) ) { // obf
				sort( $v_xsnbr ); // obf
				$v_wvatc = array(); // obf

				foreach ( $v_xsnbr as $v_ngyuy ) { // obf

					$v_uhyyu = get_post_type_object( $v_ngyuy ); // obf

					$v_zthqb = '(' . $v_vulkv->prepare( "{$v_vulkv->posts}.post_type = %s AND (", $v_ngyuy ); // obf

					// Public statuses. // obf
					$v_ghusa = get_post_stati( array( 'public' => true ) ); // obf
					$v_ocvmy  = array(); // obf
					foreach ( $v_ghusa as $v_oztzc ) { // obf
						$v_ocvmy[] = "{$v_vulkv->posts}.post_status = '$v_oztzc'"; // obf
					} // obf
					$v_zthqb .= implode( ' OR ', $v_ocvmy ); // obf

					// Add protected states that should show in the admin all list. // obf
					if ( $v_iierc->is_admin ) { // obf
						$v_drtnd = get_post_stati( // obf
							array( // obf
								'protected'              => true, // obf
								'show_in_admin_all_list' => true, // obf
							) // obf
						); // obf
						foreach ( $v_drtnd as $v_zdxmm ) { // obf
							$v_zthqb .= " OR {$v_vulkv->posts}.post_status = '$v_zdxmm'"; // obf
						} // obf
					} // obf

					// Add private states that are visible to current user. // obf
					if ( is_user_logged_in() && $v_uhyyu instanceof WP_Post_Type ) { // obf
						$v_gnjyl = $v_uhyyu->cap->read_private_posts; // obf
						$v_jogto = get_post_stati( array( 'private' => true ) ); // obf
						foreach ( $v_jogto as $v_gdefx ) { // obf
							$v_zthqb .= current_user_can( $v_gnjyl ) ? " \nOR {$v_vulkv->posts}.post_status = '$v_gdefx'" : " \nOR ({$v_vulkv->posts}.post_author = $v_ixonx AND {$v_vulkv->posts}.post_status = '$v_gdefx')"; // obf
						} // obf
					} // obf

					$v_zthqb .= '))'; // obf

					$v_wvatc[] = $v_zthqb; // obf
				} // obf

				if ( ! empty( $v_wvatc ) ) { // obf
					$v_gtabx .= ' AND (' . implode( ' OR ', $v_wvatc ) . ')'; // obf
				} // obf
			} else { // obf
				$v_gtabx .= ' AND 1=0 '; // obf
			} // obf
		} else { // obf
			$v_gtabx .= $v_ycahs; // obf
		} // obf

		/* // obf
		 * Apply filters on where and join prior to paging so that any // obf
		 * manipulations to them are reflected in the paging by day queries. // obf
		 */ // obf
		if ( ! $v_ybhgc['suppress_filters'] ) { // obf
			/** // obf
			 * Filters the WHERE clause of the query. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * // obf
			 * @param string   $v_gtabx The WHERE clause of the query. // obf
			 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_gtabx = apply_filters_ref_array( 'posts_where', array( $v_gtabx, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the JOIN clause of the query. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * // obf
			 * @param string   $v_zyakz  The JOIN clause of the query. // obf
			 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_zyakz = apply_filters_ref_array( 'posts_join', array( $v_zyakz, &$v_iierc ) ); // obf
		} // obf

		// Paging. // obf
		if ( empty( $v_ybhgc['nopaging'] ) && ! $v_iierc->is_singular ) { // obf
			$v_rrckl = absint( $v_ybhgc['paged'] ); // obf
			if ( ! $v_rrckl ) { // obf
				$v_rrckl = 1; // obf
			} // obf

			// If 'offset' is provided, it takes precedence over 'paged'. // obf
			if ( isset( $v_ybhgc['offset'] ) && is_numeric( $v_ybhgc['offset'] ) ) { // obf
				$v_ybhgc['offset'] = absint( $v_ybhgc['offset'] ); // obf
				$v_ygsmn      = $v_ybhgc['offset'] . ', '; // obf
			} else { // obf
				$v_ygsmn = absint( ( $v_rrckl - 1 ) * $v_ybhgc['posts_per_page'] ) . ', '; // obf
			} // obf
			$v_mhzdl = 'LIMIT ' . $v_ygsmn . $v_ybhgc['posts_per_page']; // obf
		} // obf

		// Comments feeds. // obf
		if ( $v_iierc->is_comment_feed && ! $v_iierc->is_singular ) { // obf
			if ( $v_iierc->is_archive || $v_iierc->is_search ) { // obf
				$v_sqfjl    = "JOIN {$v_vulkv->posts} ON ( {$v_vulkv->comments}.comment_post_ID = {$v_vulkv->posts}.ID ) $v_zyakz "; // obf
				$v_bpkzt   = "WHERE comment_approved = '1' $v_gtabx"; // obf
				$v_egysw = "{$v_vulkv->comments}.comment_id"; // obf
			} else { // Other non-singular, e.g. front. // obf
				$v_sqfjl    = "JOIN {$v_vulkv->posts} ON ( {$v_vulkv->comments}.comment_post_ID = {$v_vulkv->posts}.ID )"; // obf
				$v_bpkzt   = "WHERE ( post_status = 'publish' OR ( post_status = 'inherit' AND post_type = 'attachment' ) ) AND comment_approved = '1'"; // obf
				$v_egysw = ''; // obf
			} // obf

			if ( ! $v_ybhgc['suppress_filters'] ) { // obf
				/** // obf
				 * Filters the JOIN clause of the comments feed query before sending. // obf
				 * // obf
				 * @since 2.2.0 // obf
				 * // obf
				 * @param string   $v_sqfjl The JOIN clause of the query. // obf
				 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
				 */ // obf
				$v_sqfjl = apply_filters_ref_array( 'comment_feed_join', array( $v_sqfjl, &$v_iierc ) ); // obf

				/** // obf
				 * Filters the WHERE clause of the comments feed query before sending. // obf
				 * // obf
				 * @since 2.2.0 // obf
				 * // obf
				 * @param string   $v_bpkzt The WHERE clause of the query. // obf
				 * @param WP_Query $v_kjouc  The WP_Query instance (passed by reference). // obf
				 */ // obf
				$v_bpkzt = apply_filters_ref_array( 'comment_feed_where', array( $v_bpkzt, &$v_iierc ) ); // obf

				/** // obf
				 * Filters the GROUP BY clause of the comments feed query before sending. // obf
				 * // obf
				 * @since 2.2.0 // obf
				 * // obf
				 * @param string   $v_egysw The GROUP BY clause of the query. // obf
				 * @param WP_Query $v_kjouc    The WP_Query instance (passed by reference). // obf
				 */ // obf
				$v_egysw = apply_filters_ref_array( 'comment_feed_groupby', array( $v_egysw, &$v_iierc ) ); // obf

				/** // obf
				 * Filters the ORDER BY clause of the comments feed query before sending. // obf
				 * // obf
				 * @since 2.8.0 // obf
				 * // obf
				 * @param string   $v_kuesn The ORDER BY clause of the query. // obf
				 * @param WP_Query $v_kjouc    The WP_Query instance (passed by reference). // obf
				 */ // obf
				$v_kuesn = apply_filters_ref_array( 'comment_feed_orderby', array( 'comment_date_gmt DESC', &$v_iierc ) ); // obf

				/** // obf
				 * Filters the LIMIT clause of the comments feed query before sending. // obf
				 * // obf
				 * @since 2.8.0 // obf
				 * // obf
				 * @param string   $v_mrvdr The JOIN clause of the query. // obf
				 * @param WP_Query $v_kjouc   The WP_Query instance (passed by reference). // obf
				 */ // obf
				$v_mrvdr = apply_filters_ref_array( 'comment_feed_limits', array( 'LIMIT ' . get_option( 'posts_per_rss' ), &$v_iierc ) ); // obf
			} // obf

			$v_egysw = ( ! empty( $v_egysw ) ) ? 'GROUP BY ' . $v_egysw : ''; // obf
			$v_kuesn = ( ! empty( $v_kuesn ) ) ? 'ORDER BY ' . $v_kuesn : ''; // obf
			$v_mrvdr  = ( ! empty( $v_mrvdr ) ) ? $v_mrvdr : ''; // obf

			$v_dpore = "SELECT $v_blryx {$v_vulkv->comments}.comment_ID FROM {$v_vulkv->comments} $v_sqfjl $v_bpkzt $v_egysw $v_kuesn $v_mrvdr"; // obf

			$v_hwvhb          = md5( $v_dpore ); // obf
			$v_spdpn = wp_cache_get_last_changed( 'comment' ) . ':' . wp_cache_get_last_changed( 'posts' ); // obf

			$v_ctntw   = "comment_feed:$v_hwvhb:$v_spdpn"; // obf
			$v_mfkfa = wp_cache_get( $v_ctntw, 'comment-queries' ); // obf
			if ( false === $v_mfkfa ) { // obf
				$v_mfkfa = $v_vulkv->get_col( $v_dpore ); // obf
				wp_cache_add( $v_ctntw, $v_mfkfa, 'comment-queries' ); // obf
			} // obf
			_prime_comment_caches( $v_mfkfa ); // obf

			// Convert to WP_Comment. // obf
			/** @var WP_Comment[] */ // obf
			$v_iierc->comments      = array_map( 'get_comment', $v_mfkfa ); // obf
			$v_iierc->comment_count = count( $v_iierc->comments ); // obf

			$v_emopk = array(); // obf

			foreach ( $v_iierc->comments as $v_hjisg ) { // obf
				$v_emopk[] = (int) $v_hjisg->comment_post_ID; // obf
			} // obf

			$v_emopk = implode( ',', $v_emopk ); // obf
			$v_zyakz     = ''; // obf
			if ( $v_emopk ) { // obf
				$v_gtabx = "AND {$v_vulkv->posts}.ID IN ($v_emopk) "; // obf
			} else { // obf
				$v_gtabx = 'AND 0'; // obf
			} // obf
		} // obf

		$v_hlbgr = array( 'where', 'groupby', 'join', 'orderby', 'distinct', 'fields', 'limits' ); // obf

		/* // obf
		 * Apply post-paging filters on where and join. Only plugins that // obf
		 * manipulate paging queries should use these hooks. // obf
		 */ // obf
		if ( ! $v_ybhgc['suppress_filters'] ) { // obf
			/** // obf
			 * Filters the WHERE clause of the query. // obf
			 * // obf
			 * Specifically for manipulating paging queries. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * // obf
			 * @param string   $v_gtabx The WHERE clause of the query. // obf
			 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_gtabx = apply_filters_ref_array( 'posts_where_paged', array( $v_gtabx, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the GROUP BY clause of the query. // obf
			 * // obf
			 * @since 2.0.0 // obf
			 * // obf
			 * @param string   $v_uqagl The GROUP BY clause of the query. // obf
			 * @param WP_Query $v_kjouc   The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_uqagl = apply_filters_ref_array( 'posts_groupby', array( $v_uqagl, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the JOIN clause of the query. // obf
			 * // obf
			 * Specifically for manipulating paging queries. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * // obf
			 * @param string   $v_zyakz  The JOIN clause of the query. // obf
			 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_zyakz = apply_filters_ref_array( 'posts_join_paged', array( $v_zyakz, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the ORDER BY clause of the query. // obf
			 * // obf
			 * @since 1.5.1 // obf
			 * // obf
			 * @param string   $v_aqqcx The ORDER BY clause of the query. // obf
			 * @param WP_Query $v_kjouc   The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_aqqcx = apply_filters_ref_array( 'posts_orderby', array( $v_aqqcx, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the DISTINCT clause of the query. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 * // obf
			 * @param string   $v_blryx The DISTINCT clause of the query. // obf
			 * @param WP_Query $v_kjouc    The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_blryx = apply_filters_ref_array( 'posts_distinct', array( $v_blryx, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the LIMIT clause of the query. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 * // obf
			 * @param string   $v_mhzdl The LIMIT clause of the query. // obf
			 * @param WP_Query $v_kjouc  The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_mhzdl = apply_filters_ref_array( 'post_limits', array( $v_mhzdl, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the SELECT clause of the query. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 * // obf
			 * @param string   $v_dahmg The SELECT clause of the query. // obf
			 * @param WP_Query $v_kjouc  The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_dahmg = apply_filters_ref_array( 'posts_fields', array( $v_dahmg, &$v_iierc ) ); // obf

			/** // obf
			 * Filters all query clauses at once, for convenience. // obf
			 * // obf
			 * Covers the WHERE, GROUP BY, JOIN, ORDER BY, DISTINCT, // obf
			 * fields (SELECT), and LIMIT clauses. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param string[] $v_dstkc { // obf
			 *     Associative array of the clauses for the query. // obf
			 * // obf
			 *     @type string $v_gtabx    The WHERE clause of the query. // obf
			 *     @type string $v_uqagl  The GROUP BY clause of the query. // obf
			 *     @type string $v_zyakz     The JOIN clause of the query. // obf
			 *     @type string $v_aqqcx  The ORDER BY clause of the query. // obf
			 *     @type string $v_blryx The DISTINCT clause of the query. // obf
			 *     @type string $v_dahmg   The SELECT clause of the query. // obf
			 *     @type string $v_mhzdl   The LIMIT clause of the query. // obf
			 * } // obf
			 * @param WP_Query $v_kjouc   The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_dstkc = (array) apply_filters_ref_array( 'posts_clauses', array( compact( $v_hlbgr ), &$v_iierc ) ); // obf

			$v_gtabx    = isset( $v_dstkc['where'] ) ? $v_dstkc['where'] : ''; // obf
			$v_uqagl  = isset( $v_dstkc['groupby'] ) ? $v_dstkc['groupby'] : ''; // obf
			$v_zyakz     = isset( $v_dstkc['join'] ) ? $v_dstkc['join'] : ''; // obf
			$v_aqqcx  = isset( $v_dstkc['orderby'] ) ? $v_dstkc['orderby'] : ''; // obf
			$v_blryx = isset( $v_dstkc['distinct'] ) ? $v_dstkc['distinct'] : ''; // obf
			$v_dahmg   = isset( $v_dstkc['fields'] ) ? $v_dstkc['fields'] : ''; // obf
			$v_mhzdl   = isset( $v_dstkc['limits'] ) ? $v_dstkc['limits'] : ''; // obf
		} // obf

		/** // obf
		 * Fires to announce the query's current selection parameters. // obf
		 * // obf
		 * For use by caching plugins. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param string $v_jyvqd The assembled selection query. // obf
		 */ // obf
		do_action( 'posts_selection', $v_gtabx . $v_uqagl . $v_aqqcx . $v_mhzdl . $v_zyakz ); // obf

		/* // obf
		 * Filters again for the benefit of caching plugins. // obf
		 * Regular plugins should use the hooks above. // obf
		 */ // obf
		if ( ! $v_ybhgc['suppress_filters'] ) { // obf
			/** // obf
			 * Filters the WHERE clause of the query. // obf
			 * // obf
			 * For use by caching plugins. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string   $v_gtabx The WHERE clause of the query. // obf
			 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_gtabx = apply_filters_ref_array( 'posts_where_request', array( $v_gtabx, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the GROUP BY clause of the query. // obf
			 * // obf
			 * For use by caching plugins. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string   $v_uqagl The GROUP BY clause of the query. // obf
			 * @param WP_Query $v_kjouc   The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_uqagl = apply_filters_ref_array( 'posts_groupby_request', array( $v_uqagl, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the JOIN clause of the query. // obf
			 * // obf
			 * For use by caching plugins. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string   $v_zyakz  The JOIN clause of the query. // obf
			 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_zyakz = apply_filters_ref_array( 'posts_join_request', array( $v_zyakz, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the ORDER BY clause of the query. // obf
			 * // obf
			 * For use by caching plugins. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string   $v_aqqcx The ORDER BY clause of the query. // obf
			 * @param WP_Query $v_kjouc   The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_aqqcx = apply_filters_ref_array( 'posts_orderby_request', array( $v_aqqcx, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the DISTINCT clause of the query. // obf
			 * // obf
			 * For use by caching plugins. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string   $v_blryx The DISTINCT clause of the query. // obf
			 * @param WP_Query $v_kjouc    The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_blryx = apply_filters_ref_array( 'posts_distinct_request', array( $v_blryx, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the SELECT clause of the query. // obf
			 * // obf
			 * For use by caching plugins. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string   $v_dahmg The SELECT clause of the query. // obf
			 * @param WP_Query $v_kjouc  The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_dahmg = apply_filters_ref_array( 'posts_fields_request', array( $v_dahmg, &$v_iierc ) ); // obf

			/** // obf
			 * Filters the LIMIT clause of the query. // obf
			 * // obf
			 * For use by caching plugins. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string   $v_mhzdl The LIMIT clause of the query. // obf
			 * @param WP_Query $v_kjouc  The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_mhzdl = apply_filters_ref_array( 'post_limits_request', array( $v_mhzdl, &$v_iierc ) ); // obf

			/** // obf
			 * Filters all query clauses at once, for convenience. // obf
			 * // obf
			 * For use by caching plugins. // obf
			 * // obf
			 * Covers the WHERE, GROUP BY, JOIN, ORDER BY, DISTINCT, // obf
			 * fields (SELECT), and LIMIT clauses. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param string[] $v_dstkc { // obf
			 *     Associative array of the clauses for the query. // obf
			 * // obf
			 *     @type string $v_gtabx    The WHERE clause of the query. // obf
			 *     @type string $v_uqagl  The GROUP BY clause of the query. // obf
			 *     @type string $v_zyakz     The JOIN clause of the query. // obf
			 *     @type string $v_aqqcx  The ORDER BY clause of the query. // obf
			 *     @type string $v_blryx The DISTINCT clause of the query. // obf
			 *     @type string $v_dahmg   The SELECT clause of the query. // obf
			 *     @type string $v_mhzdl   The LIMIT clause of the query. // obf
			 * } // obf
			 * @param WP_Query $v_kjouc  The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_dstkc = (array) apply_filters_ref_array( 'posts_clauses_request', array( compact( $v_hlbgr ), &$v_iierc ) ); // obf

			$v_gtabx    = isset( $v_dstkc['where'] ) ? $v_dstkc['where'] : ''; // obf
			$v_uqagl  = isset( $v_dstkc['groupby'] ) ? $v_dstkc['groupby'] : ''; // obf
			$v_zyakz     = isset( $v_dstkc['join'] ) ? $v_dstkc['join'] : ''; // obf
			$v_aqqcx  = isset( $v_dstkc['orderby'] ) ? $v_dstkc['orderby'] : ''; // obf
			$v_blryx = isset( $v_dstkc['distinct'] ) ? $v_dstkc['distinct'] : ''; // obf
			$v_dahmg   = isset( $v_dstkc['fields'] ) ? $v_dstkc['fields'] : ''; // obf
			$v_mhzdl   = isset( $v_dstkc['limits'] ) ? $v_dstkc['limits'] : ''; // obf
		} // obf

		if ( ! empty( $v_uqagl ) ) { // obf
			$v_uqagl = 'GROUP BY ' . $v_uqagl; // obf
		} // obf
		if ( ! empty( $v_aqqcx ) ) { // obf
			$v_aqqcx = 'ORDER BY ' . $v_aqqcx; // obf
		} // obf

		$v_tfaut = ''; // obf
		if ( ! $v_ybhgc['no_found_rows'] && ! empty( $v_mhzdl ) ) { // obf
			$v_tfaut = 'SQL_CALC_FOUND_ROWS'; // obf
		} // obf

		/* // obf
		 * Beginning of the string is on a new line to prevent leading whitespace. // obf
		 * // obf
		 * The additional indentation of subsequent lines is to ensure the SQL // obf
		 * queries are identical to those generated when splitting queries. This // obf
		 * improves caching of the query by ensuring the same cache key is // obf
		 * generated for the same database queries functionally. // obf
		 * // obf
		 * See https://core.trac.wordpress.org/ticket/56841. // obf
		 * See https://github.com/WordPress/wordpress-develop/pull/6393#issuecomment-2088217429 // obf
		 */ // obf
		$v_jldsw = // obf
			"SELECT $v_tfaut $v_blryx $v_dahmg // obf
					 FROM {$v_vulkv->posts} $v_zyakz // obf
					 WHERE 1=1 $v_gtabx // obf
					 $v_uqagl // obf
					 $v_aqqcx // obf
					 $v_mhzdl"; // obf

		$v_iierc->request = $v_jldsw; // obf

		if ( ! $v_ybhgc['suppress_filters'] ) { // obf
			/** // obf
			 * Filters the completed SQL query before sending. // obf
			 * // obf
			 * @since 2.0.0 // obf
			 * // obf
			 * @param string   $v_xgbji The complete SQL query. // obf
			 * @param WP_Query $v_kjouc   The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_iierc->request = apply_filters_ref_array( 'posts_request', array( $v_iierc->request, &$v_iierc ) ); // obf
		} // obf

		/** // obf
		 * Filters the posts array before the query takes place. // obf
		 * // obf
		 * Return a non-null value to bypass WordPress' default post queries. // obf
		 * // obf
		 * Filtering functions that require pagination information are encouraged to set // obf
		 * the `found_posts` and `max_num_pages` properties of the WP_Query object, // obf
		 * passed to the filter by reference. If WP_Query does not perform a database // obf
		 * query, it will not have enough information to generate these values itself. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Post[]|int[]|null $v_dcjmz Return an array of post data to short-circuit WP's query, // obf
		 *                                    or null to allow WP to run its normal queries. // obf
		 * @param WP_Query             $v_kjouc The WP_Query instance (passed by reference). // obf
		 */ // obf
		$v_iierc->posts = apply_filters_ref_array( 'posts_pre_query', array( null, &$v_iierc ) ); // obf

		/* // obf
		 * Ensure the ID database query is able to be cached. // obf
		 * // obf
		 * Random queries are expected to have unpredictable results and // obf
		 * cannot be cached. Note the space before `RAND` in the string // obf
		 * search, that to ensure against a collision with another // obf
		 * function. // obf
		 * // obf
		 * If `$v_dahmg` has been modified by the `posts_fields`, // obf
		 * `posts_fields_request`, `post_clauses` or `posts_clauses_request` // obf
		 * filters, then caching is disabled to prevent caching collisions. // obf
		 */ // obf
		$v_dbufl = ! str_contains( strtoupper( $v_aqqcx ), ' RAND(' ); // obf

		$v_xacor = array( // obf
			"{$v_vulkv->posts}.*", // obf
			"{$v_vulkv->posts}.ID, {$v_vulkv->posts}.post_parent", // obf
			"{$v_vulkv->posts}.ID", // obf
		); // obf

		if ( ! in_array( $v_dahmg, $v_xacor, true ) ) { // obf
			$v_dbufl = false; // obf
		} // obf

		if ( $v_ybhgc['cache_results'] && $v_dbufl ) { // obf
			$v_nexmn = str_replace( $v_dahmg, "{$v_vulkv->posts}.*", $v_iierc->request ); // obf
			$v_ctntw   = $v_iierc->generate_cache_key( $v_ybhgc, $v_nexmn ); // obf

			$v_epodk = false; // obf
			if ( null === $v_iierc->posts ) { // obf
				$v_kvzac = wp_cache_get( $v_ctntw, 'post-queries', false, $v_epodk ); // obf

				if ( $v_kvzac ) { // obf
					/** @var int[] */ // obf
					$v_emopk = array_map( 'intval', $v_kvzac['posts'] ); // obf

					$v_iierc->post_count    = count( $v_emopk ); // obf
					$v_iierc->found_posts   = $v_kvzac['found_posts']; // obf
					$v_iierc->max_num_pages = $v_kvzac['max_num_pages']; // obf

					if ( 'ids' === $v_ybhgc['fields'] ) { // obf
						$v_iierc->posts = $v_emopk; // obf

						return $v_iierc->posts; // obf
					} elseif ( 'id=>parent' === $v_ybhgc['fields'] ) { // obf
						_prime_post_parent_id_caches( $v_emopk ); // obf

						$v_zcedy = array(); // obf
						foreach ( $v_emopk as $v_jbzyc ) { // obf
							$v_zcedy[] = 'post_parent:' . (string) $v_jbzyc; // obf
						} // obf

						/** @var int[] */ // obf
						$v_zfakn = wp_cache_get_multiple( $v_zcedy, 'posts' ); // obf

						foreach ( $v_zfakn as $v_ctntw => $v_rbspt ) { // obf
							$v_nlytu              = new stdClass(); // obf
							$v_nlytu->ID          = (int) str_replace( 'post_parent:', '', $v_ctntw ); // obf
							$v_nlytu->post_parent = (int) $v_rbspt; // obf

							$v_iierc->posts[] = $v_nlytu; // obf
						} // obf

						return $v_zfakn; // obf
					} else { // obf
						_prime_post_caches( $v_emopk, $v_ybhgc['update_post_term_cache'], $v_ybhgc['update_post_meta_cache'] ); // obf
						/** @var WP_Post[] */ // obf
						$v_iierc->posts = array_map( 'get_post', $v_emopk ); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if ( 'ids' === $v_ybhgc['fields'] ) { // obf
			if ( null === $v_iierc->posts ) { // obf
				$v_iierc->posts = $v_vulkv->get_col( $v_iierc->request ); // obf
			} // obf

			/** @var int[] */ // obf
			$v_iierc->posts      = array_map( 'intval', $v_iierc->posts ); // obf
			$v_iierc->post_count = count( $v_iierc->posts ); // obf
			$v_iierc->set_found_posts( $v_ybhgc, $v_mhzdl ); // obf

			if ( $v_ybhgc['cache_results'] && $v_dbufl ) { // obf
				$v_pwnbf = array( // obf
					'posts'         => $v_iierc->posts, // obf
					'found_posts'   => $v_iierc->found_posts, // obf
					'max_num_pages' => $v_iierc->max_num_pages, // obf
				); // obf

				wp_cache_set( $v_ctntw, $v_pwnbf, 'post-queries' ); // obf
			} // obf

			return $v_iierc->posts; // obf
		} // obf

		if ( 'id=>parent' === $v_ybhgc['fields'] ) { // obf
			if ( null === $v_iierc->posts ) { // obf
				$v_iierc->posts = $v_vulkv->get_results( $v_iierc->request ); // obf
			} // obf

			$v_iierc->post_count = count( $v_iierc->posts ); // obf
			$v_iierc->set_found_posts( $v_ybhgc, $v_mhzdl ); // obf

			/** @var int[] */ // obf
			$v_zfakn       = array(); // obf
			$v_emopk           = array(); // obf
			$v_nfdxa = array(); // obf

			foreach ( $v_iierc->posts as $v_hwvhb => $v_dybha ) { // obf
				$v_iierc->posts[ $v_hwvhb ]->ID          = (int) $v_dybha->ID; // obf
				$v_iierc->posts[ $v_hwvhb ]->post_parent = (int) $v_dybha->post_parent; // obf

				$v_zfakn[ (int) $v_dybha->ID ] = (int) $v_dybha->post_parent; // obf
				$v_emopk[]                      = (int) $v_dybha->ID; // obf

				$v_nfdxa[ 'post_parent:' . (string) $v_dybha->ID ] = (int) $v_dybha->post_parent; // obf
			} // obf
			// Prime post parent caches, so that on second run, there is not another database query. // obf
			wp_cache_add_multiple( $v_nfdxa, 'posts' ); // obf

			if ( $v_ybhgc['cache_results'] && $v_dbufl ) { // obf
				$v_pwnbf = array( // obf
					'posts'         => $v_emopk, // obf
					'found_posts'   => $v_iierc->found_posts, // obf
					'max_num_pages' => $v_iierc->max_num_pages, // obf
				); // obf

				wp_cache_set( $v_ctntw, $v_pwnbf, 'post-queries' ); // obf
			} // obf

			return $v_zfakn; // obf
		} // obf

		$v_vomkw = $v_jldsw === $v_iierc->request && "{$v_vulkv->posts}.*" === $v_dahmg; // obf

		if ( null === $v_iierc->posts ) { // obf
			$v_uvhfr = ( // obf
				$v_vomkw // obf
				&& ( // obf
					wp_using_ext_object_cache() // obf
					|| ( ! empty( $v_mhzdl ) && $v_ybhgc['posts_per_page'] < 500 ) // obf
				) // obf
			); // obf

			/** // obf
			 * Filters whether to split the query. // obf
			 * // obf
			 * Splitting the query will cause it to fetch just the IDs of the found posts // obf
			 * (and then individually fetch each post by ID), rather than fetching every // obf
			 * complete row at once. One massive result vs. many small results. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * @since 6.6.0 Added the `$v_jldsw` and `$v_dstkc` parameters. // obf
			 * // obf
			 * @param bool     $v_uvhfr Whether or not to split the query. // obf
			 * @param WP_Query $v_kjouc           The WP_Query instance. // obf
			 * @param string   $v_jldsw     The complete SQL query before filtering. // obf
			 * @param string[] $v_dstkc { // obf
			 *     Associative array of the clauses for the query. // obf
			 * // obf
			 *     @type string $v_gtabx    The WHERE clause of the query. // obf
			 *     @type string $v_uqagl  The GROUP BY clause of the query. // obf
			 *     @type string $v_zyakz     The JOIN clause of the query. // obf
			 *     @type string $v_aqqcx  The ORDER BY clause of the query. // obf
			 *     @type string $v_blryx The DISTINCT clause of the query. // obf
			 *     @type string $v_dahmg   The SELECT clause of the query. // obf
			 *     @type string $v_mhzdl   The LIMIT clause of the query. // obf
			 * } // obf
			 */ // obf
			$v_uvhfr = apply_filters( 'split_the_query', $v_uvhfr, $v_iierc, $v_jldsw, compact( $v_hlbgr ) ); // obf

			if ( $v_uvhfr ) { // obf
				// First get the IDs and then fill in the objects. // obf

				// Beginning of the string is on a new line to prevent leading whitespace. See https://core.trac.wordpress.org/ticket/56841. // obf
				$v_iierc->request = // obf
					"SELECT $v_tfaut $v_blryx {$v_vulkv->posts}.ID // obf
					 FROM {$v_vulkv->posts} $v_zyakz // obf
					 WHERE 1=1 $v_gtabx // obf
					 $v_uqagl // obf
					 $v_aqqcx // obf
					 $v_mhzdl"; // obf

				/** // obf
				 * Filters the Post IDs SQL request before sending. // obf
				 * // obf
				 * @since 3.4.0 // obf
				 * // obf
				 * @param string   $v_xgbji The post ID request. // obf
				 * @param WP_Query $v_kjouc   The WP_Query instance. // obf
				 */ // obf
				$v_iierc->request = apply_filters( 'posts_request_ids', $v_iierc->request, $v_iierc ); // obf

				$v_emopk = $v_vulkv->get_col( $v_iierc->request ); // obf

				if ( $v_emopk ) { // obf
					$v_iierc->posts = $v_emopk; // obf
					$v_iierc->set_found_posts( $v_ybhgc, $v_mhzdl ); // obf
					_prime_post_caches( $v_emopk, $v_ybhgc['update_post_term_cache'], $v_ybhgc['update_post_meta_cache'] ); // obf
				} else { // obf
					$v_iierc->posts = array(); // obf
				} // obf
			} else { // obf
				$v_iierc->posts = $v_vulkv->get_results( $v_iierc->request ); // obf
				$v_iierc->set_found_posts( $v_ybhgc, $v_mhzdl ); // obf
			} // obf
		} // obf

		// Convert to WP_Post objects. // obf
		if ( $v_iierc->posts ) { // obf
			/** @var WP_Post[] */ // obf
			$v_iierc->posts = array_map( 'get_post', $v_iierc->posts ); // obf
		} // obf

		$v_coivr = $v_iierc->posts; // obf

		if ( $v_ybhgc['cache_results'] && $v_dbufl && ! $v_epodk ) { // obf
			$v_emopk = wp_list_pluck( $v_iierc->posts, 'ID' ); // obf

			$v_pwnbf = array( // obf
				'posts'         => $v_emopk, // obf
				'found_posts'   => $v_iierc->found_posts, // obf
				'max_num_pages' => $v_iierc->max_num_pages, // obf
			); // obf

			wp_cache_set( $v_ctntw, $v_pwnbf, 'post-queries' ); // obf
		} // obf

		if ( ! $v_ybhgc['suppress_filters'] ) { // obf
			/** // obf
			 * Filters the raw post results array, prior to status checks. // obf
			 * // obf
			 * @since 2.3.0 // obf
			 * // obf
			 * @param WP_Post[] $v_dcjmz Array of post objects. // obf
			 * @param WP_Query  $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_iierc->posts = apply_filters_ref_array( 'posts_results', array( $v_iierc->posts, &$v_iierc ) ); // obf
		} // obf

		if ( ! empty( $v_iierc->posts ) && $v_iierc->is_comment_feed && $v_iierc->is_singular ) { // obf
			/** This filter is documented in wp-includes/query.php */ // obf
			$v_sqfjl = apply_filters_ref_array( 'comment_feed_join', array( '', &$v_iierc ) ); // obf

			/** This filter is documented in wp-includes/query.php */ // obf
			$v_bpkzt = apply_filters_ref_array( 'comment_feed_where', array( "WHERE comment_post_ID = '{$v_iierc->posts[0]->ID}' AND comment_approved = '1'", &$v_iierc ) ); // obf

			/** This filter is documented in wp-includes/query.php */ // obf
			$v_egysw = apply_filters_ref_array( 'comment_feed_groupby', array( '', &$v_iierc ) ); // obf
			$v_egysw = ( ! empty( $v_egysw ) ) ? 'GROUP BY ' . $v_egysw : ''; // obf

			/** This filter is documented in wp-includes/query.php */ // obf
			$v_kuesn = apply_filters_ref_array( 'comment_feed_orderby', array( 'comment_date_gmt DESC', &$v_iierc ) ); // obf
			$v_kuesn = ( ! empty( $v_kuesn ) ) ? 'ORDER BY ' . $v_kuesn : ''; // obf

			/** This filter is documented in wp-includes/query.php */ // obf
			$v_mrvdr = apply_filters_ref_array( 'comment_feed_limits', array( 'LIMIT ' . get_option( 'posts_per_rss' ), &$v_iierc ) ); // obf

			$v_dpore = "SELECT {$v_vulkv->comments}.comment_ID FROM {$v_vulkv->comments} $v_sqfjl $v_bpkzt $v_egysw $v_kuesn $v_mrvdr"; // obf

			$v_kxaos          = md5( $v_dpore ); // obf
			$v_qwjya = wp_cache_get_last_changed( 'comment' ); // obf

			$v_ujzus = "comment_feed:$v_kxaos:$v_qwjya"; // obf
			$v_mfkfa       = wp_cache_get( $v_ujzus, 'comment-queries' ); // obf
			if ( false === $v_mfkfa ) { // obf
				$v_mfkfa = $v_vulkv->get_col( $v_dpore ); // obf
				wp_cache_add( $v_ujzus, $v_mfkfa, 'comment-queries' ); // obf
			} // obf
			_prime_comment_caches( $v_mfkfa ); // obf

			// Convert to WP_Comment. // obf
			/** @var WP_Comment[] */ // obf
			$v_iierc->comments      = array_map( 'get_comment', $v_mfkfa ); // obf
			$v_iierc->comment_count = count( $v_iierc->comments ); // obf
		} // obf

		// Check post status to determine if post should be displayed. // obf
		if ( ! empty( $v_iierc->posts ) && ( $v_iierc->is_single || $v_iierc->is_page ) ) { // obf
			$v_ulqct = get_post_status( $v_iierc->posts[0] ); // obf

			if ( 'attachment' === $v_iierc->posts[0]->post_type && 0 === (int) $v_iierc->posts[0]->post_parent ) { // obf
				$v_iierc->is_page       = false; // obf
				$v_iierc->is_single     = true; // obf
				$v_iierc->is_attachment = true; // obf
			} // obf

			// If the post_status was specifically requested, let it pass through. // obf
			if ( ! in_array( $v_ulqct, $v_tmefs, true ) ) { // obf
				$v_qyovk = get_post_status_object( $v_ulqct ); // obf

				if ( $v_qyovk && ! $v_qyovk->public ) { // obf
					if ( ! is_user_logged_in() ) { // obf
						// User must be logged in to view unpublished posts. // obf
						$v_iierc->posts = array(); // obf
					} else { // obf
						if ( $v_qyovk->protected ) { // obf
							// User must have edit permissions on the draft to preview. // obf
							if ( ! current_user_can( $v_vemoq, $v_iierc->posts[0]->ID ) ) { // obf
								$v_iierc->posts = array(); // obf
							} else { // obf
								$v_iierc->is_preview = true; // obf
								if ( 'future' !== $v_ulqct ) { // obf
									$v_iierc->posts[0]->post_date = current_time( 'mysql' ); // obf
								} // obf
							} // obf
						} elseif ( $v_qyovk->private ) { // obf
							if ( ! current_user_can( $v_ywxgv, $v_iierc->posts[0]->ID ) ) { // obf
								$v_iierc->posts = array(); // obf
							} // obf
						} else { // obf
							$v_iierc->posts = array(); // obf
						} // obf
					} // obf
				} elseif ( ! $v_qyovk ) { // obf
					// Post status is not registered, assume it's not public. // obf
					if ( ! current_user_can( $v_vemoq, $v_iierc->posts[0]->ID ) ) { // obf
						$v_iierc->posts = array(); // obf
					} // obf
				} // obf
			} // obf

			if ( $v_iierc->is_preview && $v_iierc->posts && current_user_can( $v_vemoq, $v_iierc->posts[0]->ID ) ) { // obf
				/** // obf
				 * Filters the single post for preview mode. // obf
				 * // obf
				 * @since 2.7.0 // obf
				 * // obf
				 * @param WP_Post  $v_htlro  The Post object. // obf
				 * @param WP_Query $v_kjouc         The WP_Query instance (passed by reference). // obf
				 */ // obf
				$v_iierc->posts[0] = get_post( apply_filters_ref_array( 'the_preview', array( $v_iierc->posts[0], &$v_iierc ) ) ); // obf
			} // obf
		} // obf

		// Put sticky posts at the top of the posts array. // obf
		$v_hropm = get_option( 'sticky_posts' ); // obf
		if ( $v_iierc->is_home && $v_rrckl <= 1 && is_array( $v_hropm ) && ! empty( $v_hropm ) && ! $v_ybhgc['ignore_sticky_posts'] ) { // obf
			$v_thamc     = count( $v_iierc->posts ); // obf
			$v_iwttp = 0; // obf
			// Loop over posts and relocate stickies to the front. // obf
			for ( $v_jqirj = 0; $v_jqirj < $v_thamc; $v_jqirj++ ) { // obf
				if ( in_array( $v_iierc->posts[ $v_jqirj ]->ID, $v_hropm, true ) ) { // obf
					$v_shxrf = $v_iierc->posts[ $v_jqirj ]; // obf
					// Remove sticky from current position. // obf
					array_splice( $v_iierc->posts, $v_jqirj, 1 ); // obf
					// Move to front, after other stickies. // obf
					array_splice( $v_iierc->posts, $v_iwttp, 0, array( $v_shxrf ) ); // obf
					// Increment the sticky offset. The next sticky will be placed at this offset. // obf
					++$v_iwttp; // obf
					// Remove post from sticky posts array. // obf
					$v_uipzr = array_search( $v_shxrf->ID, $v_hropm, true ); // obf
					unset( $v_hropm[ $v_uipzr ] ); // obf
				} // obf
			} // obf

			// If any posts have been excluded specifically, Ignore those that are sticky. // obf
			if ( ! empty( $v_hropm ) && ! empty( $v_ybhgc['post__not_in'] ) ) { // obf
				$v_hropm = array_diff( $v_hropm, $v_ybhgc['post__not_in'] ); // obf
			} // obf

			// Fetch sticky posts that weren't in the query results. // obf
			if ( ! empty( $v_hropm ) ) { // obf
				$v_oatma = get_posts( // obf
					array( // obf
						'post__in'               => $v_hropm, // obf
						'post_type'              => $v_qkzpe, // obf
						'post_status'            => 'publish', // obf
						'posts_per_page'         => count( $v_hropm ), // obf
						'suppress_filters'       => $v_ybhgc['suppress_filters'], // obf
						'cache_results'          => $v_ybhgc['cache_results'], // obf
						'update_post_meta_cache' => $v_ybhgc['update_post_meta_cache'], // obf
						'update_post_term_cache' => $v_ybhgc['update_post_term_cache'], // obf
						'lazy_load_term_meta'    => $v_ybhgc['lazy_load_term_meta'], // obf
					) // obf
				); // obf

				foreach ( $v_oatma as $v_shxrf ) { // obf
					array_splice( $v_iierc->posts, $v_iwttp, 0, array( $v_shxrf ) ); // obf
					++$v_iwttp; // obf
				} // obf
			} // obf
		} // obf

		if ( ! $v_ybhgc['suppress_filters'] ) { // obf
			/** // obf
			 * Filters the array of retrieved posts after they've been fetched and // obf
			 * internally processed. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * // obf
			 * @param WP_Post[] $v_dcjmz Array of post objects. // obf
			 * @param WP_Query  $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_iierc->posts = apply_filters_ref_array( 'the_posts', array( $v_iierc->posts, &$v_iierc ) ); // obf
		} // obf

		/* // obf
		 * Ensure that any posts added/modified via one of the filters above are // obf
		 * of the type WP_Post and are filtered. // obf
		 */ // obf
		if ( $v_iierc->posts ) { // obf
			$v_iierc->post_count = count( $v_iierc->posts ); // obf

			/** @var WP_Post[] */ // obf
			$v_iierc->posts = array_map( 'get_post', $v_iierc->posts ); // obf

			if ( $v_ybhgc['cache_results'] ) { // obf
				if ( $v_vomkw && $v_coivr === $v_iierc->posts ) { // obf
					update_post_caches( $v_iierc->posts, $v_qkzpe, $v_ybhgc['update_post_term_cache'], $v_ybhgc['update_post_meta_cache'] ); // obf
				} else { // obf
					$v_emopk = wp_list_pluck( $v_iierc->posts, 'ID' ); // obf
					_prime_post_caches( $v_emopk, $v_ybhgc['update_post_term_cache'], $v_ybhgc['update_post_meta_cache'] ); // obf
				} // obf
			} // obf

			/** @var WP_Post */ // obf
			$v_iierc->post = reset( $v_iierc->posts ); // obf
		} else { // obf
			$v_iierc->post_count = 0; // obf
			$v_iierc->posts      = array(); // obf
		} // obf

		if ( ! empty( $v_iierc->posts ) && $v_ybhgc['update_menu_item_cache'] ) { // obf
			update_menu_item_cache( $v_iierc->posts ); // obf
		} // obf

		if ( $v_ybhgc['lazy_load_term_meta'] ) { // obf
			wp_queue_posts_for_term_meta_lazyload( $v_iierc->posts ); // obf
		} // obf

		return $v_iierc->posts; // obf
	} // obf

	/** // obf
	 * Sets up the amount of found posts and the number of pages (if limit clause was used) // obf
	 * for the current query. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @global wpdb $v_vulkv WordPress database abstraction object. // obf
	 * // obf
	 * @param array  $v_ybhgc      Query variables. // obf
	 * @param string $v_mhzdl LIMIT clauses of the query. // obf
	 */ // obf
	private function set_found_posts( $v_ybhgc, $v_mhzdl ) { // obf
		global $v_vulkv; // obf

		/* // obf
		 * Bail if posts is an empty array. Continue if posts is an empty string, // obf
		 * null, or false to accommodate caching plugins that fill posts later. // obf
		 */ // obf
		if ( $v_ybhgc['no_found_rows'] || ( is_array( $v_iierc->posts ) && ! $v_iierc->posts ) ) { // obf
			return; // obf
		} // obf

		if ( ! empty( $v_mhzdl ) ) { // obf
			/** // obf
			 * Filters the query to run for retrieving the found posts. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 * // obf
			 * @param string   $v_ihyzi The query to run to find the found posts. // obf
			 * @param WP_Query $v_kjouc             The WP_Query instance (passed by reference). // obf
			 */ // obf
			$v_ihyzi = apply_filters_ref_array( 'found_posts_query', array( 'SELECT FOUND_ROWS()', &$v_iierc ) ); // obf

			$v_iierc->found_posts = (int) $v_vulkv->get_var( $v_ihyzi ); // obf
		} else { // obf
			if ( is_array( $v_iierc->posts ) ) { // obf
				$v_iierc->found_posts = count( $v_iierc->posts ); // obf
			} else { // obf
				if ( null === $v_iierc->posts ) { // obf
					$v_iierc->found_posts = 0; // obf
				} else { // obf
					$v_iierc->found_posts = 1; // obf
				} // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the number of found posts for the query. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param int      $v_olgol The number of posts found. // obf
		 * @param WP_Query $v_kjouc       The WP_Query instance (passed by reference). // obf
		 */ // obf
		$v_iierc->found_posts = (int) apply_filters_ref_array( 'found_posts', array( $v_iierc->found_posts, &$v_iierc ) ); // obf

		if ( ! empty( $v_mhzdl ) ) { // obf
			$v_iierc->max_num_pages = (int) ceil( $v_iierc->found_posts / $v_ybhgc['posts_per_page'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up the next post and iterate current post index. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @return WP_Post Next post. // obf
	 */ // obf
	public function next_post() { // obf

		++$v_iierc->current_post; // obf

		/** @var WP_Post */ // obf
		$v_iierc->post = $v_iierc->posts[ $v_iierc->current_post ]; // obf
		return $v_iierc->post; // obf
	} // obf

	/** // obf
	 * Sets up the current post. // obf
	 * // obf
	 * Retrieves the next post, sets up the post, sets the 'in the loop' // obf
	 * property to true. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @global WP_Post $v_dybha Global post object. // obf
	 */ // obf
	public function the_post() { // obf
		global $v_dybha; // obf

		if ( ! $v_iierc->in_the_loop ) { // obf
			if ( 'all' === $v_iierc->query_vars['fields'] ) { // obf
				// Full post objects queried. // obf
				$v_ibbwd = $v_iierc->posts; // obf
			} else { // obf
				if ( 'ids' === $v_iierc->query_vars['fields'] ) { // obf
					// Post IDs queried. // obf
					$v_emopk = $v_iierc->posts; // obf
				} else { // obf
					// Only partial objects queried, need to prime the cache for the loop. // obf
					$v_emopk = array_reduce( // obf
						$v_iierc->posts, // obf
						function ( $v_sbret, $v_dybha ) { // obf
							if ( isset( $v_dybha->ID ) ) { // obf
								$v_sbret[] = $v_dybha->ID; // obf
							} // obf

							return $v_sbret; // obf
						}, // obf
						array() // obf
					); // obf
				} // obf
				_prime_post_caches( $v_emopk, $v_iierc->query_vars['update_post_term_cache'], $v_iierc->query_vars['update_post_meta_cache'] ); // obf
				$v_ibbwd = array_map( 'get_post', $v_emopk ); // obf
			} // obf
			update_post_author_caches( $v_ibbwd ); // obf
		} // obf

		$v_iierc->in_the_loop = true; // obf
		$v_iierc->before_loop = false; // obf

		if ( -1 === $v_iierc->current_post ) { // Loop has just started. // obf
			/** // obf
			 * Fires once the loop is started. // obf
			 * // obf
			 * @since 2.0.0 // obf
			 * // obf
			 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			do_action_ref_array( 'loop_start', array( &$v_iierc ) ); // obf
		} // obf

		$v_dybha = $v_iierc->next_post(); // obf

		// Ensure a full post object is available. // obf
		if ( 'all' !== $v_iierc->query_vars['fields'] ) { // obf
			if ( 'ids' === $v_iierc->query_vars['fields'] ) { // obf
				// Post IDs queried. // obf
				$v_dybha = get_post( $v_dybha ); // obf
			} elseif ( isset( $v_dybha->ID ) ) { // obf
				/* // obf
				 * Partial objecct queried. // obf
				 * // obf
				 * The post object was queried with a partial set of // obf
				 * fields, populate the entire object for the loop. // obf
				 */ // obf
				$v_dybha = get_post( $v_dybha->ID ); // obf
			} // obf
		} // obf

		// Set up the global post object for the loop. // obf
		$v_iierc->setup_postdata( $v_dybha ); // obf
	} // obf

	/** // obf
	 * Determines whether there are more posts available in the loop. // obf
	 * // obf
	 * Calls the {@see 'loop_end'} action when the loop is complete. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @return bool True if posts are available, false if end of the loop. // obf
	 */ // obf
	public function have_posts() { // obf
		if ( $v_iierc->current_post + 1 < $v_iierc->post_count ) { // obf
			return true; // obf
		} elseif ( $v_iierc->current_post + 1 === $v_iierc->post_count && $v_iierc->post_count > 0 ) { // obf
			/** // obf
			 * Fires once the loop has ended. // obf
			 * // obf
			 * @since 2.0.0 // obf
			 * // obf
			 * @param WP_Query $v_kjouc The WP_Query instance (passed by reference). // obf
			 */ // obf
			do_action_ref_array( 'loop_end', array( &$v_iierc ) ); // obf

			// Do some cleaning up after the loop. // obf
			$v_iierc->rewind_posts(); // obf
		} elseif ( 0 === $v_iierc->post_count ) { // obf
			$v_iierc->before_loop = false; // obf

			/** // obf
			 * Fires if no results are found in a post query. // obf
			 * // obf
			 * @since 4.9.0 // obf
			 * // obf
			 * @param WP_Query $v_kjouc The WP_Query instance. // obf
			 */ // obf
			do_action( 'loop_no_results', $v_iierc ); // obf
		} // obf

		$v_iierc->in_the_loop = false; // obf
		return false; // obf
	} // obf

	/** // obf
	 * Rewinds the posts and resets post index. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	public function rewind_posts() { // obf
		$v_iierc->current_post = -1; // obf
		if ( $v_iierc->post_count > 0 ) { // obf
			$v_iierc->post = $v_iierc->posts[0]; // obf
		} // obf
	} // obf

	/** // obf
	 * Iterates current comment index and returns WP_Comment object. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @return WP_Comment Comment object. // obf
	 */ // obf
	public function next_comment() { // obf
		++$v_iierc->current_comment; // obf

		/** @var WP_Comment */ // obf
		$v_iierc->comment = $v_iierc->comments[ $v_iierc->current_comment ]; // obf
		return $v_iierc->comment; // obf
	} // obf

	/** // obf
	 * Sets up the current comment. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @global WP_Comment $v_hjisg Global comment object. // obf
	 */ // obf
	public function the_comment() { // obf
		global $v_hjisg; // obf

		$v_hjisg = $v_iierc->next_comment(); // obf

		if ( 0 === $v_iierc->current_comment ) { // obf
			/** // obf
			 * Fires once the comment loop is started. // obf
			 * // obf
			 * @since 2.2.0 // obf
			 */ // obf
			do_action( 'comment_loop_start' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether there are more comments available. // obf
	 * // obf
	 * Automatically rewinds comments when finished. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @return bool True if comments are available, false if no more comments. // obf
	 */ // obf
	public function have_comments() { // obf
		if ( $v_iierc->current_comment + 1 < $v_iierc->comment_count ) { // obf
			return true; // obf
		} elseif ( $v_iierc->current_comment + 1 === $v_iierc->comment_count ) { // obf
			$v_iierc->rewind_comments(); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Rewinds the comments, resets the comment index and comment to first. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 */ // obf
	public function rewind_comments() { // obf
		$v_iierc->current_comment = -1; // obf
		if ( $v_iierc->comment_count > 0 ) { // obf
			$v_iierc->comment = $v_iierc->comments[0]; // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up the WordPress query by parsing query string. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @see WP_Query::parse_query() for all available arguments. // obf
	 * // obf
	 * @param string|array $v_kjouc URL query string or array of query arguments. // obf
	 * @return WP_Post[]|int[] Array of post objects or post IDs. // obf
	 */ // obf
	public function query( $v_kjouc ) { // obf
		$v_iierc->init(); // obf
		$v_iierc->query      = wp_parse_args( $v_kjouc ); // obf
		$v_iierc->query_vars = $v_iierc->query; // obf
		return $v_iierc->get_posts(); // obf
	} // obf

	/** // obf
	 * Retrieves the currently queried object. // obf
	 * // obf
	 * If queried object is not set, then the queried object will be set from // obf
	 * the category, tag, taxonomy, posts page, single post, page, or author // obf
	 * query variable. After it is set up, it will be returned. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @return WP_Term|WP_Post_Type|WP_Post|WP_User|null The queried object. // obf
	 */ // obf
	public function get_queried_object() { // obf
		if ( isset( $v_iierc->queried_object ) ) { // obf
			return $v_iierc->queried_object; // obf
		} // obf

		$v_iierc->queried_object    = null; // obf
		$v_iierc->queried_object_id = null; // obf

		if ( $v_iierc->is_category || $v_iierc->is_tag || $v_iierc->is_tax ) { // obf
			if ( $v_iierc->is_category ) { // obf
				$v_lmvyh           = $v_iierc->get( 'cat' ); // obf
				$v_yhtps = $v_iierc->get( 'category_name' ); // obf

				if ( $v_lmvyh ) { // obf
					$v_sdajs = get_term( $v_lmvyh, 'category' ); // obf
				} elseif ( $v_yhtps ) { // obf
					$v_sdajs = get_term_by( 'slug', $v_yhtps, 'category' ); // obf
				} // obf
			} elseif ( $v_iierc->is_tag ) { // obf
				$v_ffczn = $v_iierc->get( 'tag_id' ); // obf
				$v_fwqsx    = $v_iierc->get( 'tag' ); // obf

				if ( $v_ffczn ) { // obf
					$v_sdajs = get_term( $v_ffczn, 'post_tag' ); // obf
				} elseif ( $v_fwqsx ) { // obf
					$v_sdajs = get_term_by( 'slug', $v_fwqsx, 'post_tag' ); // obf
				} // obf
			} else { // obf
				// For other tax queries, grab the first term from the first clause. // obf
				if ( ! empty( $v_iierc->tax_query->queried_terms ) ) { // obf
					$v_tdonx = array_keys( $v_iierc->tax_query->queried_terms ); // obf
					$v_usate   = reset( $v_tdonx ); // obf
					$v_kjouc              = $v_iierc->tax_query->queried_terms[ $v_usate ]; // obf

					if ( ! empty( $v_kjouc['terms'] ) ) { // obf
						if ( 'term_id' === $v_kjouc['field'] ) { // obf
							$v_sdajs = get_term( reset( $v_kjouc['terms'] ), $v_usate ); // obf
						} else { // obf
							$v_sdajs = get_term_by( $v_kjouc['field'], reset( $v_kjouc['terms'] ), $v_usate ); // obf
						} // obf
					} // obf
				} // obf
			} // obf

			if ( ! empty( $v_sdajs ) && ! is_wp_error( $v_sdajs ) ) { // obf
				$v_iierc->queried_object    = $v_sdajs; // obf
				$v_iierc->queried_object_id = (int) $v_sdajs->term_id; // obf

				if ( $v_iierc->is_category && 'category' === $v_iierc->queried_object->taxonomy ) { // obf
					_make_cat_compat( $v_iierc->queried_object ); // obf
				} // obf
			} // obf
		} elseif ( $v_iierc->is_post_type_archive ) { // obf
			$v_qkzpe = $v_iierc->get( 'post_type' ); // obf

			if ( is_array( $v_qkzpe ) ) { // obf
				$v_qkzpe = reset( $v_qkzpe ); // obf
			} // obf

			$v_iierc->queried_object = get_post_type_object( $v_qkzpe ); // obf
		} elseif ( $v_iierc->is_posts_page ) { // obf
			$v_lcudl = get_option( 'page_for_posts' ); // obf

			$v_iierc->queried_object    = get_post( $v_lcudl ); // obf
			$v_iierc->queried_object_id = (int) $v_iierc->queried_object->ID; // obf
		} elseif ( $v_iierc->is_singular && ! empty( $v_iierc->post ) ) { // obf
			$v_iierc->queried_object    = $v_iierc->post; // obf
			$v_iierc->queried_object_id = (int) $v_iierc->post->ID; // obf
		} elseif ( $v_iierc->is_author ) { // obf
			$v_zakne      = (int) $v_iierc->get( 'author' ); // obf
			$v_bqzhk = $v_iierc->get( 'author_name' ); // obf

			if ( $v_zakne ) { // obf
				$v_iierc->queried_object_id = $v_zakne; // obf
			} elseif ( $v_bqzhk ) { // obf
				$v_codmu = get_user_by( 'slug', $v_bqzhk ); // obf

				if ( $v_codmu ) { // obf
					$v_iierc->queried_object_id = $v_codmu->ID; // obf
				} // obf
			} // obf

			$v_iierc->queried_object = get_userdata( $v_iierc->queried_object_id ); // obf
		} // obf

		return $v_iierc->queried_object; // obf
	} // obf

	/** // obf
	 * Retrieves the ID of the currently queried object. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public function get_queried_object_id() { // obf
		$v_iierc->get_queried_object(); // obf

		if ( isset( $v_iierc->queried_object_id ) ) { // obf
			return $v_iierc->queried_object_id; // obf
		} // obf

		return 0; // obf
	} // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the WordPress query, if parameter is not empty. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @see WP_Query::parse_query() for all available arguments. // obf
	 * // obf
	 * @param string|array $v_kjouc URL query string or array of vars. // obf
	 */ // obf
	public function __construct( $v_kjouc = '' ) { // obf
		if ( ! empty( $v_kjouc ) ) { // obf
			$v_iierc->query( $v_kjouc ); // obf
		} // obf
	} // obf

	/** // obf
	 * Makes private properties readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_jnlwp Property to get. // obf
	 * @return mixed Property. // obf
	 */ // obf
	public function __get( $v_jnlwp ) { // obf
		if ( in_array( $v_jnlwp, $v_iierc->compat_fields, true ) ) { // obf
			return $v_iierc->$v_jnlwp; // obf
		} // obf
	} // obf

	/** // obf
	 * Makes private properties checkable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_jnlwp Property to check if set. // obf
	 * @return bool Whether the property is set. // obf
	 */ // obf
	public function __isset( $v_jnlwp ) { // obf
		if ( in_array( $v_jnlwp, $v_iierc->compat_fields, true ) ) { // obf
			return isset( $v_iierc->$v_jnlwp ); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Makes private/protected methods readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_jnlwp      Method to call. // obf
	 * @param array  $v_gggvc Arguments to pass when calling. // obf
	 * @return mixed|false Return value of the callback, false otherwise. // obf
	 */ // obf
	public function __call( $v_jnlwp, $v_gggvc ) { // obf
		if ( in_array( $v_jnlwp, $v_iierc->compat_methods, true ) ) { // obf
			return $v_iierc->$v_jnlwp( ...$v_gggvc ); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing archive page. // obf
	 * // obf
	 * Archive pages include category, tag, author, date, custom post type, // obf
	 * and custom taxonomy based archives. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_Query::is_category() // obf
	 * @see WP_Query::is_tag() // obf
	 * @see WP_Query::is_author() // obf
	 * @see WP_Query::is_date() // obf
	 * @see WP_Query::is_post_type_archive() // obf
	 * @see WP_Query::is_tax() // obf
	 * // obf
	 * @return bool Whether the query is for an existing archive page. // obf
	 */ // obf
	public function is_archive() { // obf
		return (bool) $v_iierc->is_archive; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing post type archive page. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string|string[] $v_xwnzk Optional. Post type or array of posts types // obf
	 *                                    to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing post type archive page. // obf
	 */ // obf
	public function is_post_type_archive( $v_xwnzk = '' ) { // obf
		if ( empty( $v_xwnzk ) || ! $v_iierc->is_post_type_archive ) { // obf
			return (bool) $v_iierc->is_post_type_archive; // obf
		} // obf

		$v_qkzpe = $v_iierc->get( 'post_type' ); // obf
		if ( is_array( $v_qkzpe ) ) { // obf
			$v_qkzpe = reset( $v_qkzpe ); // obf
		} // obf
		$v_iqojy = get_post_type_object( $v_qkzpe ); // obf

		if ( ! $v_iqojy ) { // obf
			return false; // obf
		} // obf

		return in_array( $v_iqojy->name, (array) $v_xwnzk, true ); // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing attachment page. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param int|string|int[]|string[] $v_cttpf Optional. Attachment ID, title, slug, or array of such // obf
	 *                                              to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing attachment page. // obf
	 */ // obf
	public function is_attachment( $v_cttpf = '' ) { // obf
		if ( ! $v_iierc->is_attachment ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_cttpf ) ) { // obf
			return true; // obf
		} // obf

		$v_cttpf = array_map( 'strval', (array) $v_cttpf ); // obf

		$v_fobuq = $v_iierc->get_queried_object(); // obf
		if ( ! $v_fobuq ) { // obf
			return false; // obf
		} // obf

		if ( in_array( (string) $v_fobuq->ID, $v_cttpf, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_fobuq->post_title, $v_cttpf, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_fobuq->post_name, $v_cttpf, true ) ) { // obf
			return true; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing author archive page. // obf
	 * // obf
	 * If the $v_zakne parameter is specified, this function will additionally // obf
	 * check if the query is for one of the authors specified. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param int|string|int[]|string[] $v_zakne Optional. User ID, nickname, nicename, or array of such // obf
	 *                                          to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing author archive page. // obf
	 */ // obf
	public function is_author( $v_zakne = '' ) { // obf
		if ( ! $v_iierc->is_author ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_zakne ) ) { // obf
			return true; // obf
		} // obf

		$v_mthkb = $v_iierc->get_queried_object(); // obf
		if ( ! $v_mthkb ) { // obf
			return false; // obf
		} // obf

		$v_zakne = array_map( 'strval', (array) $v_zakne ); // obf

		if ( in_array( (string) $v_mthkb->ID, $v_zakne, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_mthkb->nickname, $v_zakne, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_mthkb->user_nicename, $v_zakne, true ) ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing category archive page. // obf
	 * // obf
	 * If the $v_wbrnz parameter is specified, this function will additionally // obf
	 * check if the query is for one of the categories specified. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param int|string|int[]|string[] $v_wbrnz Optional. Category ID, name, slug, or array of such // obf
	 *                                            to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing category archive page. // obf
	 */ // obf
	public function is_category( $v_wbrnz = '' ) { // obf
		if ( ! $v_iierc->is_category ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_wbrnz ) ) { // obf
			return true; // obf
		} // obf

		$v_cgmyi = $v_iierc->get_queried_object(); // obf
		if ( ! $v_cgmyi ) { // obf
			return false; // obf
		} // obf

		$v_wbrnz = array_map( 'strval', (array) $v_wbrnz ); // obf

		if ( in_array( (string) $v_cgmyi->term_id, $v_wbrnz, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_cgmyi->name, $v_wbrnz, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_cgmyi->slug, $v_wbrnz, true ) ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing tag archive page. // obf
	 * // obf
	 * If the $v_fwqsx parameter is specified, this function will additionally // obf
	 * check if the query is for one of the tags specified. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param int|string|int[]|string[] $v_fwqsx Optional. Tag ID, name, slug, or array of such // obf
	 *                                       to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing tag archive page. // obf
	 */ // obf
	public function is_tag( $v_fwqsx = '' ) { // obf
		if ( ! $v_iierc->is_tag ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_fwqsx ) ) { // obf
			return true; // obf
		} // obf

		$v_hfmvy = $v_iierc->get_queried_object(); // obf
		if ( ! $v_hfmvy ) { // obf
			return false; // obf
		} // obf

		$v_fwqsx = array_map( 'strval', (array) $v_fwqsx ); // obf

		if ( in_array( (string) $v_hfmvy->term_id, $v_fwqsx, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_hfmvy->name, $v_fwqsx, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_hfmvy->slug, $v_fwqsx, true ) ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing custom taxonomy archive page. // obf
	 * // obf
	 * If the $v_aojgh parameter is specified, this function will additionally // obf
	 * check if the query is for that specific $v_aojgh. // obf
	 * // obf
	 * If the $v_sdajs parameter is specified in addition to the $v_aojgh parameter, // obf
	 * this function will additionally check if the query is for one of the terms // obf
	 * specified. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global WP_Taxonomy[] $v_aedsx Registered taxonomies. // obf
	 * // obf
	 * @param string|string[]           $v_aojgh Optional. Taxonomy slug or slugs to check against. // obf
	 *                                            Default empty. // obf
	 * @param int|string|int[]|string[] $v_sdajs     Optional. Term ID, name, slug, or array of such // obf
	 *                                            to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing custom taxonomy archive page. // obf
	 *              True for custom taxonomy archive pages, false for built-in taxonomies // obf
	 *              (category and tag archives). // obf
	 */ // obf
	public function is_tax( $v_aojgh = '', $v_sdajs = '' ) { // obf
		global $v_aedsx; // obf

		if ( ! $v_iierc->is_tax ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_aojgh ) ) { // obf
			return true; // obf
		} // obf

		$v_hnvpx = $v_iierc->get_queried_object(); // obf
		$v_vnlqz      = array_intersect( array_keys( $v_aedsx ), (array) $v_aojgh ); // obf
		$v_zxcqm     = (array) $v_sdajs; // obf

		// Check that the taxonomy matches. // obf
		if ( ! ( isset( $v_hnvpx->taxonomy ) && count( $v_vnlqz ) && in_array( $v_hnvpx->taxonomy, $v_vnlqz, true ) ) ) { // obf
			return false; // obf
		} // obf

		// Only a taxonomy provided. // obf
		if ( empty( $v_sdajs ) ) { // obf
			return true; // obf
		} // obf

		return isset( $v_hnvpx->term_id ) && // obf
			count( // obf
				array_intersect( // obf
					array( $v_hnvpx->term_id, $v_hnvpx->name, $v_hnvpx->slug ), // obf
					$v_zxcqm // obf
				) // obf
			); // obf
	} // obf

	/** // obf
	 * Determines whether the current URL is within the comments popup window. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @deprecated 4.5.0 // obf
	 * // obf
	 * @return false Always returns false. // obf
	 */ // obf
	public function is_comments_popup() { // obf
		_deprecated_function( __FUNCTION__, '4.5.0' ); // obf

		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing date archive. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for an existing date archive. // obf
	 */ // obf
	public function is_date() { // obf
		return (bool) $v_iierc->is_date; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing day archive. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for an existing day archive. // obf
	 */ // obf
	public function is_day() { // obf
		return (bool) $v_iierc->is_day; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for a feed. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string|string[] $v_ujmpy Optional. Feed type or array of feed types // obf
	 *                                         to check against. Default empty. // obf
	 * @return bool Whether the query is for a feed. // obf
	 */ // obf
	public function is_feed( $v_ujmpy = '' ) { // obf
		if ( empty( $v_ujmpy ) || ! $v_iierc->is_feed ) { // obf
			return (bool) $v_iierc->is_feed; // obf
		} // obf

		$v_lvixi = $v_iierc->get( 'feed' ); // obf
		if ( 'feed' === $v_lvixi ) { // obf
			$v_lvixi = get_default_feed(); // obf
		} // obf

		return in_array( $v_lvixi, (array) $v_ujmpy, true ); // obf
	} // obf

	/** // obf
	 * Determines whether the query is for a comments feed. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for a comments feed. // obf
	 */ // obf
	public function is_comment_feed() { // obf
		return (bool) $v_iierc->is_comment_feed; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for the front page of the site. // obf
	 * // obf
	 * This is for what is displayed at your site's main URL. // obf
	 * // obf
	 * Depends on the site's "Front page displays" Reading Settings 'show_on_front' and 'page_on_front'. // obf
	 * // obf
	 * If you set a static page for the front page of your site, this function will return // obf
	 * true when viewing that page. // obf
	 * // obf
	 * Otherwise the same as {@see WP_Query::is_home()}. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for the front page of the site. // obf
	 */ // obf
	public function is_front_page() { // obf
		// Most likely case. // obf
		if ( 'posts' === get_option( 'show_on_front' ) && $v_iierc->is_home() ) { // obf
			return true; // obf
		} elseif ( 'page' === get_option( 'show_on_front' ) && get_option( 'page_on_front' ) // obf
			&& $v_iierc->is_page( get_option( 'page_on_front' ) ) // obf
		) { // obf
			return true; // obf
		} else { // obf
			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether the query is for the blog homepage. // obf
	 * // obf
	 * This is the page which shows the time based blog content of your site. // obf
	 * // obf
	 * Depends on the site's "Front page displays" Reading Settings 'show_on_front' and 'page_for_posts'. // obf
	 * // obf
	 * If you set a static page for the front page of your site, this function will return // obf
	 * true only on the page you set as the "Posts page". // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_Query::is_front_page() // obf
	 * // obf
	 * @return bool Whether the query is for the blog homepage. // obf
	 */ // obf
	public function is_home() { // obf
		return (bool) $v_iierc->is_home; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for the Privacy Policy page. // obf
	 * // obf
	 * This is the page which shows the Privacy Policy content of your site. // obf
	 * // obf
	 * Depends on the site's "Change your Privacy Policy page" Privacy Settings 'wp_page_for_privacy_policy'. // obf
	 * // obf
	 * This function will return true only on the page you set as the "Privacy Policy page". // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool Whether the query is for the Privacy Policy page. // obf
	 */ // obf
	public function is_privacy_policy() { // obf
		if ( get_option( 'wp_page_for_privacy_policy' ) // obf
			&& $v_iierc->is_page( get_option( 'wp_page_for_privacy_policy' ) ) // obf
		) { // obf
			return true; // obf
		} else { // obf
			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing month archive. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for an existing month archive. // obf
	 */ // obf
	public function is_month() { // obf
		return (bool) $v_iierc->is_month; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing single page. // obf
	 * // obf
	 * If the $v_rrckl parameter is specified, this function will additionally // obf
	 * check if the query is for one of the pages specified. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_Query::is_single() // obf
	 * @see WP_Query::is_singular() // obf
	 * // obf
	 * @param int|string|int[]|string[] $v_rrckl Optional. Page ID, title, slug, path, or array of such // obf
	 *                                        to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing single page. // obf
	 */ // obf
	public function is_page( $v_rrckl = '' ) { // obf
		if ( ! $v_iierc->is_page ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_rrckl ) ) { // obf
			return true; // obf
		} // obf

		$v_wfcda = $v_iierc->get_queried_object(); // obf
		if ( ! $v_wfcda ) { // obf
			return false; // obf
		} // obf

		$v_rrckl = array_map( 'strval', (array) $v_rrckl ); // obf

		if ( in_array( (string) $v_wfcda->ID, $v_rrckl, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_wfcda->post_title, $v_rrckl, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_wfcda->post_name, $v_rrckl, true ) ) { // obf
			return true; // obf
		} else { // obf
			foreach ( $v_rrckl as $v_huxpc ) { // obf
				if ( ! strpos( $v_huxpc, '/' ) ) { // obf
					continue; // obf
				} // obf

				$v_xtiwf = get_page_by_path( $v_huxpc ); // obf

				if ( $v_xtiwf && ( $v_xtiwf->ID === $v_wfcda->ID ) ) { // obf
					return true; // obf
				} // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for a paged result and not for the first page. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for a paged result. // obf
	 */ // obf
	public function is_paged() { // obf
		return (bool) $v_iierc->is_paged; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for a post or page preview. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for a post or page preview. // obf
	 */ // obf
	public function is_preview() { // obf
		return (bool) $v_iierc->is_preview; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for the robots.txt file. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for the robots.txt file. // obf
	 */ // obf
	public function is_robots() { // obf
		return (bool) $v_iierc->is_robots; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for the favicon.ico file. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @return bool Whether the query is for the favicon.ico file. // obf
	 */ // obf
	public function is_favicon() { // obf
		return (bool) $v_iierc->is_favicon; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for a search. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for a search. // obf
	 */ // obf
	public function is_search() { // obf
		return (bool) $v_iierc->is_search; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing single post. // obf
	 * // obf
	 * Works for any post type excluding pages. // obf
	 * // obf
	 * If the $v_dybha parameter is specified, this function will additionally // obf
	 * check if the query is for one of the Posts specified. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_Query::is_page() // obf
	 * @see WP_Query::is_singular() // obf
	 * // obf
	 * @param int|string|int[]|string[] $v_dybha Optional. Post ID, title, slug, path, or array of such // obf
	 *                                        to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing single post. // obf
	 */ // obf
	public function is_single( $v_dybha = '' ) { // obf
		if ( ! $v_iierc->is_single ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_dybha ) ) { // obf
			return true; // obf
		} // obf

		$v_fobuq = $v_iierc->get_queried_object(); // obf
		if ( ! $v_fobuq ) { // obf
			return false; // obf
		} // obf

		$v_dybha = array_map( 'strval', (array) $v_dybha ); // obf

		if ( in_array( (string) $v_fobuq->ID, $v_dybha, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_fobuq->post_title, $v_dybha, true ) ) { // obf
			return true; // obf
		} elseif ( in_array( $v_fobuq->post_name, $v_dybha, true ) ) { // obf
			return true; // obf
		} else { // obf
			foreach ( $v_dybha as $v_vahrz ) { // obf
				if ( ! strpos( $v_vahrz, '/' ) ) { // obf
					continue; // obf
				} // obf

				$v_rzbfv = get_page_by_path( $v_vahrz, OBJECT, $v_fobuq->post_type ); // obf

				if ( $v_rzbfv && ( $v_rzbfv->ID === $v_fobuq->ID ) ) { // obf
					return true; // obf
				} // obf
			} // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing single post of any post type // obf
	 * (post, attachment, page, custom post types). // obf
	 * // obf
	 * If the $v_xwnzk parameter is specified, this function will additionally // obf
	 * check if the query is for one of the Posts Types specified. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_Query::is_page() // obf
	 * @see WP_Query::is_single() // obf
	 * // obf
	 * @param string|string[] $v_xwnzk Optional. Post type or array of post types // obf
	 *                                    to check against. Default empty. // obf
	 * @return bool Whether the query is for an existing single post // obf
	 *              or any of the given post types. // obf
	 */ // obf
	public function is_singular( $v_xwnzk = '' ) { // obf
		if ( empty( $v_xwnzk ) || ! $v_iierc->is_singular ) { // obf
			return (bool) $v_iierc->is_singular; // obf
		} // obf

		$v_fobuq = $v_iierc->get_queried_object(); // obf
		if ( ! $v_fobuq ) { // obf
			return false; // obf
		} // obf

		return in_array( $v_fobuq->post_type, (array) $v_xwnzk, true ); // obf
	} // obf

	/** // obf
	 * Determines whether the query is for a specific time. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for a specific time. // obf
	 */ // obf
	public function is_time() { // obf
		return (bool) $v_iierc->is_time; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for a trackback endpoint call. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for a trackback endpoint call. // obf
	 */ // obf
	public function is_trackback() { // obf
		return (bool) $v_iierc->is_trackback; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an existing year archive. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is for an existing year archive. // obf
	 */ // obf
	public function is_year() { // obf
		return (bool) $v_iierc->is_year; // obf
	} // obf

	/** // obf
	 * Determines whether the query is a 404 (returns no results). // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool Whether the query is a 404 error. // obf
	 */ // obf
	public function is_404() { // obf
		return (bool) $v_iierc->is_404; // obf
	} // obf

	/** // obf
	 * Determines whether the query is for an embedded post. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return bool Whether the query is for an embedded post. // obf
	 */ // obf
	public function is_embed() { // obf
		return (bool) $v_iierc->is_embed; // obf
	} // obf

	/** // obf
	 * Determines whether the query is the main query. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @global WP_Query $v_wacnh WordPress Query object. // obf
	 * // obf
	 * @return bool Whether the query is the main query. // obf
	 */ // obf
	public function is_main_query() { // obf
		global $v_wacnh; // obf
		return $v_wacnh === $v_iierc; // obf
	} // obf

	/** // obf
	 * Sets up global post data. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @since 4.4.0 Added the ability to pass a post ID to `$v_dybha`. // obf
	 * // obf
	 * @global int     $v_rziwm // obf
	 * @global WP_User $v_xjcue // obf
	 * @global string  $v_mlqse // obf
	 * @global string  $v_rvyxg // obf
	 * @global int     $v_rrckl // obf
	 * @global array   $v_fvdes // obf
	 * @global int     $v_jmncx // obf
	 * @global int     $v_ezpto // obf
	 * @global int     $v_valsm // obf
	 * // obf
	 * @param WP_Post|object|int $v_dybha WP_Post instance or Post ID/object. // obf
	 * @return true True when finished. // obf
	 */ // obf
	public function setup_postdata( $v_dybha ) { // obf
		global $v_rziwm, $v_xjcue, $v_mlqse, $v_rvyxg, $v_rrckl, $v_fvdes, $v_jmncx, $v_ezpto, $v_valsm; // obf

		if ( ! ( $v_dybha instanceof WP_Post ) ) { // obf
			$v_dybha = get_post( $v_dybha ); // obf
		} // obf

		if ( ! $v_dybha ) { // obf
			return; // obf
		} // obf

		$v_vcupm = $v_iierc->generate_postdata( $v_dybha ); // obf
		if ( false === $v_vcupm ) { // obf
			return; // obf
		} // obf

		$v_rziwm           = $v_vcupm['id']; // obf
		$v_xjcue   = $v_vcupm['authordata']; // obf
		$v_mlqse   = $v_vcupm['currentday']; // obf
		$v_rvyxg = $v_vcupm['currentmonth']; // obf
		$v_rrckl         = $v_vcupm['page']; // obf
		$v_fvdes        = $v_vcupm['pages']; // obf
		$v_jmncx    = $v_vcupm['multipage']; // obf
		$v_ezpto         = $v_vcupm['more']; // obf
		$v_valsm     = $v_vcupm['numpages']; // obf

		/** // obf
		 * Fires once the post data has been set up. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * @since 4.1.0 Introduced `$v_kjouc` parameter. // obf
		 * // obf
		 * @param WP_Post  $v_dybha  The Post object (passed by reference). // obf
		 * @param WP_Query $v_kjouc The current Query object (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'the_post', array( &$v_dybha, &$v_iierc ) ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Generates post data. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param WP_Post|object|int $v_dybha WP_Post instance or Post ID/object. // obf
	 * @return array|false Elements of post or false on failure. // obf
	 */ // obf
	public function generate_postdata( $v_dybha ) { // obf

		if ( ! ( $v_dybha instanceof WP_Post ) ) { // obf
			$v_dybha = get_post( $v_dybha ); // obf
		} // obf

		if ( ! $v_dybha ) { // obf
			return false; // obf
		} // obf

		$v_rziwm = (int) $v_dybha->ID; // obf

		$v_xjcue = get_userdata( $v_dybha->post_author ); // obf

		$v_mlqse   = false; // obf
		$v_rvyxg = false; // obf

		$v_hkzfk = $v_dybha->post_date; // obf
		if ( ! empty( $v_hkzfk ) && '0000-00-00 00:00:00' !== $v_hkzfk ) { // obf
			// Avoid using mysql2date for performance reasons. // obf
			$v_rvyxg = substr( $v_hkzfk, 5, 2 ); // obf
			$v_sqcio          = substr( $v_hkzfk, 8, 2 ); // obf
			$v_oiclr         = substr( $v_hkzfk, 2, 2 ); // obf

			$v_mlqse = sprintf( '%s.%s.%s', $v_sqcio, $v_rvyxg, $v_oiclr ); // obf
		} // obf

		$v_valsm  = 1; // obf
		$v_jmncx = 0; // obf
		$v_rrckl      = $v_iierc->get( 'page' ); // obf
		if ( ! $v_rrckl ) { // obf
			$v_rrckl = 1; // obf
		} // obf

		/* // obf
		 * Force full post content when viewing the permalink for the $v_dybha, // obf
		 * or when on an RSS feed. Otherwise respect the 'more' tag. // obf
		 */ // obf
		if ( get_queried_object_id() === $v_dybha->ID && ( $v_iierc->is_page() || $v_iierc->is_single() ) ) { // obf
			$v_ezpto = 1; // obf
		} elseif ( $v_iierc->is_feed() ) { // obf
			$v_ezpto = 1; // obf
		} else { // obf
			$v_ezpto = 0; // obf
		} // obf

		$v_ictpv = $v_dybha->post_content; // obf
		if ( str_contains( $v_ictpv, '<!--nextpage-->' ) ) { // obf
			$v_ictpv = str_replace( "\n<!--nextpage-->\n", '<!--nextpage-->', $v_ictpv ); // obf
			$v_ictpv = str_replace( "\n<!--nextpage-->", '<!--nextpage-->', $v_ictpv ); // obf
			$v_ictpv = str_replace( "<!--nextpage-->\n", '<!--nextpage-->', $v_ictpv ); // obf

			// Remove the nextpage block delimiters, to avoid invalid block structures in the split content. // obf
			$v_ictpv = str_replace( '<!-- wp:nextpage -->', '', $v_ictpv ); // obf
			$v_ictpv = str_replace( '<!-- /wp:nextpage -->', '', $v_ictpv ); // obf

			// Ignore nextpage at the beginning of the content. // obf
			if ( str_starts_with( $v_ictpv, '<!--nextpage-->' ) ) { // obf
				$v_ictpv = substr( $v_ictpv, 15 ); // obf
			} // obf

			$v_fvdes = explode( '<!--nextpage-->', $v_ictpv ); // obf
		} else { // obf
			$v_fvdes = array( $v_dybha->post_content ); // obf
		} // obf

		/** // obf
		 * Filters the "pages" derived from splitting the post content. // obf
		 * // obf
		 * "Pages" are determined by splitting the post content based on the presence // obf
		 * of `<!-- nextpage -->` tags. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string[] $v_fvdes Array of "pages" from the post content split by `<!-- nextpage -->` tags. // obf
		 * @param WP_Post  $v_dybha  Current post object. // obf
		 */ // obf
		$v_fvdes = apply_filters( 'content_pagination', $v_fvdes, $v_dybha ); // obf

		$v_valsm = count( $v_fvdes ); // obf

		if ( $v_valsm > 1 ) { // obf
			if ( $v_rrckl > 1 ) { // obf
				$v_ezpto = 1; // obf
			} // obf
			$v_jmncx = 1; // obf
		} else { // obf
			$v_jmncx = 0; // obf
		} // obf

		$v_vcupm = compact( 'id', 'authordata', 'currentday', 'currentmonth', 'page', 'pages', 'multipage', 'more', 'numpages' ); // obf

		return $v_vcupm; // obf
	} // obf

	/** // obf
	 * Generates cache key. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @global wpdb $v_vulkv WordPress database abstraction object. // obf
	 * // obf
	 * @param array  $v_mxstg Query arguments. // obf
	 * @param string $v_geqfx  SQL statement. // obf
	 * @return string Cache key. // obf
	 */ // obf
	protected function generate_cache_key( array $v_mxstg, $v_geqfx ) { // obf
		global $v_vulkv; // obf

		unset( // obf
			$v_mxstg['cache_results'], // obf
			$v_mxstg['fields'], // obf
			$v_mxstg['lazy_load_term_meta'], // obf
			$v_mxstg['update_post_meta_cache'], // obf
			$v_mxstg['update_post_term_cache'], // obf
			$v_mxstg['update_menu_item_cache'], // obf
			$v_mxstg['suppress_filters'] // obf
		); // obf

		if ( empty( $v_mxstg['post_type'] ) ) { // obf
			if ( $v_iierc->is_attachment ) { // obf
				$v_mxstg['post_type'] = 'attachment'; // obf
			} elseif ( $v_iierc->is_page ) { // obf
				$v_mxstg['post_type'] = 'page'; // obf
			} else { // obf
				$v_mxstg['post_type'] = 'post'; // obf
			} // obf
		} elseif ( 'any' === $v_mxstg['post_type'] ) { // obf
			$v_mxstg['post_type'] = array_values( get_post_types( array( 'exclude_from_search' => false ) ) ); // obf
		} // obf
		$v_mxstg['post_type'] = (array) $v_mxstg['post_type']; // obf
		// Sort post types to ensure same cache key generation. // obf
		sort( $v_mxstg['post_type'] ); // obf

		/* // obf
		 * Sort arrays that can be used for ordering prior to cache key generation. // obf
		 * // obf
		 * These arrays are sorted in the query generator for the purposes of the // obf
		 * WHERE clause but the arguments are not modified as they can be used for // obf
		 * the orderby clase. // obf
		 * // obf
		 * Their use in the orderby clause will generate a different SQL query so // obf
		 * they can be sorted for the cache key generation. // obf
		 */ // obf
		$v_hdjqq = array( // obf
			'post__in', // obf
			'post_parent__in', // obf
		); // obf
		foreach ( $v_hdjqq as $v_hwvhb ) { // obf
			if ( isset( $v_mxstg[ $v_hwvhb ] ) && is_array( $v_mxstg[ $v_hwvhb ] ) ) { // obf
				$v_mxstg[ $v_hwvhb ] = array_unique( array_map( 'absint', $v_mxstg[ $v_hwvhb ] ) ); // obf
				sort( $v_mxstg[ $v_hwvhb ] ); // obf
			} // obf
		} // obf

		// Sort and unique the 'post_name__in' for cache key generation. // obf
		if ( isset( $v_mxstg['post_name__in'] ) && is_array( $v_mxstg['post_name__in'] ) ) { // obf
			$v_mxstg['post_name__in'] = array_unique( $v_mxstg['post_name__in'] ); // obf
			sort( $v_mxstg['post_name__in'] ); // obf
		} // obf

		if ( isset( $v_mxstg['post_status'] ) ) { // obf
			$v_mxstg['post_status'] = (array) $v_mxstg['post_status']; // obf
			// Sort post status to ensure same cache key generation. // obf
			sort( $v_mxstg['post_status'] ); // obf
		} // obf

		// Add a default orderby value of date to ensure same cache key generation. // obf
		if ( ! isset( $v_ybhgc['orderby'] ) ) { // obf
			$v_mxstg['orderby'] = 'date'; // obf
		} // obf

		$v_qgttf = $v_vulkv->placeholder_escape(); // obf
		array_walk_recursive( // obf
			$v_mxstg, // obf
			/* // obf
			 * Replace wpdb placeholders with the string used in the database // obf
			 * query to avoid unreachable cache keys. This is necessary because // obf
			 * the placeholder is randomly generated in each request. // obf
			 * // obf
			 * $v_stecs is passed by reference to allow it to be modified. // obf
			 * array_walk_recursive() does not return an array. // obf
			 */ // obf
			static function ( &$v_stecs ) use ( $v_vulkv, $v_qgttf ) { // obf
				if ( is_string( $v_stecs ) && str_contains( $v_stecs, $v_qgttf ) ) { // obf
					$v_stecs = $v_vulkv->remove_placeholder_escape( $v_stecs ); // obf
				} // obf
			} // obf
		); // obf

		ksort( $v_mxstg ); // obf

		// Replace wpdb placeholder in the SQL statement used by the cache key. // obf
		$v_geqfx = $v_vulkv->remove_placeholder_escape( $v_geqfx ); // obf
		$v_hwvhb = md5( serialize( $v_mxstg ) . $v_geqfx ); // obf

		$v_spdpn = wp_cache_get_last_changed( 'posts' ); // obf
		if ( ! empty( $v_iierc->tax_query->queries ) ) { // obf
			$v_spdpn .= wp_cache_get_last_changed( 'terms' ); // obf
		} // obf

		$v_iierc->query_cache_key = "wp_query:$v_hwvhb:$v_spdpn"; // obf
		return $v_iierc->query_cache_key; // obf
	} // obf

	/** // obf
	 * After looping through a nested query, this function // obf
	 * restores the $v_dybha global to the current post in this query. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @global WP_Post $v_dybha Global post object. // obf
	 */ // obf
	public function reset_postdata() { // obf
		if ( ! empty( $v_iierc->post ) ) { // obf
			$v_ubryn['post'] = $v_iierc->post; // obf
			$v_iierc->setup_postdata( $v_iierc->post ); // obf
		} // obf
	} // obf

	/** // obf
	 * Lazyloads term meta for posts in the loop. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @deprecated 4.5.0 See wp_queue_posts_for_term_meta_lazyload(). // obf
	 * // obf
	 * @param mixed $v_niook // obf
	 * @param int   $v_nawmd // obf
	 * @return mixed // obf
	 */ // obf
	public function lazyload_term_meta( $v_niook, $v_nawmd ) { // obf
		_deprecated_function( __METHOD__, '4.5.0' ); // obf
		return $v_niook; // obf
	} // obf

	/** // obf
	 * Lazyloads comment meta for comments in the loop. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @deprecated 4.5.0 See wp_lazyload_comment_meta(). // obf
	 * // obf
	 * @param mixed $v_niook // obf
	 * @param int   $v_dvxtw // obf
	 * @return mixed // obf
	 */ // obf
	public function lazyload_comment_meta( $v_niook, $v_dvxtw ) { // obf
		_deprecated_function( __METHOD__, '4.5.0' ); // obf
		return $v_niook; // obf
	} // obf
} // obf