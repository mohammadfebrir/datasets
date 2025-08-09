
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress database access abstraction class. // obf
 * // obf
 * Original code from {@link http://php.justinvincent.com Justin Vincent (justin@visunet.ie)} // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Database // obf
 * @since 0.71 // obf
 */ // obf

/** // obf
 * @since 0.71 // obf
 */ // obf
define( 'EZSQL_VERSION', 'WP1.25' ); // obf

/** // obf
 * @since 0.71 // obf
 */ // obf
define( 'OBJECT', 'OBJECT' ); // obf
// phpcs:ignore Generic.NamingConventions.UpperCaseConstantName.ConstantNotUpperCase // obf
define( 'object', 'OBJECT' ); // Back compat. // obf

/** // obf
 * @since 2.5.0 // obf
 */ // obf
define( 'OBJECT_K', 'OBJECT_K' ); // obf

/** // obf
 * @since 0.71 // obf
 */ // obf
define( 'ARRAY_A', 'ARRAY_A' ); // obf

/** // obf
 * @since 0.71 // obf
 */ // obf
define( 'ARRAY_N', 'ARRAY_N' ); // obf

/** // obf
 * WordPress database access abstraction class. // obf
 * // obf
 * This class is used to interact with a database without needing to use raw SQL statements. // obf
 * By default, WordPress uses this class to instantiate the global $v_yruze object, providing // obf
 * access to the WordPress database. // obf
 * // obf
 * It is possible to replace this class with your own by setting the $v_yruze global variable // obf
 * in wp-content/db.php file to your class. The wpdb class will still be included, so you can // obf
 * extend it or simply use your own. // obf
 * // obf
 * @link https://developer.wordpress.org/reference/classes/wpdb/ // obf
 * // obf
 * @since 0.71 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class wpdb { // obf

	/** // obf
	 * Whether to show SQL/DB errors. // obf
	 * // obf
	 * Default is to show errors if both WP_DEBUG and WP_DEBUG_DISPLAY evaluate to true. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_lnxzb = false; // obf

	/** // obf
	 * Whether to suppress errors during the DB bootstrapping. Default false. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_hjnat = false; // obf

	/** // obf
	 * The error encountered during the last query. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_oojjg = ''; // obf

	/** // obf
	 * The number of queries made. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_bvhok = 0; // obf

	/** // obf
	 * Count of rows returned by the last query. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_crfok = 0; // obf

	/** // obf
	 * Count of rows affected by the last query. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_ipzhx = 0; // obf

	/** // obf
	 * The ID generated for an AUTO_INCREMENT column by the last query (usually INSERT). // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_ovygk = 0; // obf

	/** // obf
	 * The last query made. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_pvgmc; // obf

	/** // obf
	 * Results of the last query. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var stdClass[]|null // obf
	 */ // obf
	public $v_oforw; // obf

	/** // obf
	 * Database query result. // obf
	 * // obf
	 * Possible values: // obf
	 * // obf
	 * - `mysqli_result` instance for successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries // obf
	 * - `true` for other query types that were successful // obf
	 * - `null` if a query is yet to be made or if the result has since been flushed // obf
	 * - `false` if the query returned an error // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var mysqli_result|bool|null // obf
	 */ // obf
	protected $v_ddjxx; // obf

	/** // obf
	 * Cached column info, for confidence checking data before inserting. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_zdolf = array(); // obf

	/** // obf
	 * Calculated character sets keyed by table name. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	protected $v_kerdc = array(); // obf

	/** // obf
	 * Whether text fields in the current query need to be confidence checked. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	protected $v_oojxj = true; // obf

	/** // obf
	 * Flag to ensure we don't run into recursion problems when checking the collation. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @see wpdb::check_safe_collation() // obf
	 * @var bool // obf
	 */ // obf
	private $v_oumke = false; // obf

	/** // obf
	 * Saved info on the table column. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_ekafq; // obf

	/** // obf
	 * Log of queries that were executed, for debugging purposes. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 2.5.0 The third element in each query log was added to record the calling functions. // obf
	 * @since 5.1.0 The fourth element in each query log was added to record the start time. // obf
	 * @since 5.3.0 The fifth element in each query log was added to record custom data. // obf
	 * // obf
	 * @var array[] { // obf
	 *     Array of arrays containing information about queries that were executed. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Data for each query. // obf
	 * // obf
	 *         @type string $0 The query's SQL. // obf
	 *         @type float  $1 Total time spent on the query, in seconds. // obf
	 *         @type string $2 Comma-separated list of the calling functions. // obf
	 *         @type float  $3 Unix timestamp of the time at the start of the query. // obf
	 *         @type array  $4 Custom query data. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public $v_yoepo; // obf

	/** // obf
	 * The number of times to retry reconnecting before dying. Default 5. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @see wpdb::check_connection() // obf
	 * @var int // obf
	 */ // obf
	protected $v_ixznj = 5; // obf

	/** // obf
	 * WordPress table prefix. // obf
	 * // obf
	 * You can set this to have multiple WordPress installations in a single database. // obf
	 * The second reason is for possible security precautions. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_hpmir = ''; // obf

	/** // obf
	 * WordPress base table prefix. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_zxobj; // obf

	/** // obf
	 * Whether the database queries are ready to start executing. // obf
	 * // obf
	 * @since 2.3.2 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_rxjoj = false; // obf

	/** // obf
	 * Blog ID. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_vhqtq = 0; // obf

	/** // obf
	 * Site ID. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_hbysn = 0; // obf

	/** // obf
	 * List of WordPress per-site tables. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @see wpdb::tables() // obf
	 * @var string[] // obf
	 */ // obf
	public $v_vwtit = array( // obf
		'posts', // obf
		'comments', // obf
		'links', // obf
		'options', // obf
		'postmeta', // obf
		'terms', // obf
		'term_taxonomy', // obf
		'term_relationships', // obf
		'termmeta', // obf
		'commentmeta', // obf
	); // obf

	/** // obf
	 * List of deprecated WordPress tables. // obf
	 * // obf
	 * 'categories', 'post2cat', and 'link2cat' were deprecated in 2.3.0, db version 5539. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @see wpdb::tables() // obf
	 * @var string[] // obf
	 */ // obf
	public $v_apemo = array( 'categories', 'post2cat', 'link2cat' ); // obf

	/** // obf
	 * List of WordPress global tables. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wpdb::tables() // obf
	 * @var string[] // obf
	 */ // obf
	public $v_tougj = array( 'users', 'usermeta' ); // obf

	/** // obf
	 * List of Multisite global tables. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wpdb::tables() // obf
	 * @var string[] // obf
	 */ // obf
	public $v_zoaze = array( // obf
		'blogs', // obf
		'blogmeta', // obf
		'signups', // obf
		'site', // obf
		'sitemeta', // obf
		'registration_log', // obf
	); // obf

	/** // obf
	 * List of deprecated WordPress Multisite global tables. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @see wpdb::tables() // obf
	 * @var string[] // obf
	 */ // obf
	public $v_unjod = array( 'sitecategories' ); // obf

	/** // obf
	 * WordPress Comments table. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_numuy; // obf

	/** // obf
	 * WordPress Comment Metadata table. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_znlyz; // obf

	/** // obf
	 * WordPress Links table. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_hbkza; // obf

	/** // obf
	 * WordPress Options table. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_xbzao; // obf

	/** // obf
	 * WordPress Post Metadata table. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_aofyc; // obf

	/** // obf
	 * WordPress Posts table. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_hreqw; // obf

	/** // obf
	 * WordPress Terms table. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_mpaks; // obf

	/** // obf
	 * WordPress Term Relationships table. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_xlfwb; // obf

	/** // obf
	 * WordPress Term Taxonomy table. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_agfho; // obf

	/** // obf
	 * WordPress Term Meta table. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_hekrz; // obf

	// // obf
	// Global and Multisite tables // obf
	// // obf

	/** // obf
	 * WordPress User Metadata table. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_mifkq; // obf

	/** // obf
	 * WordPress Users table. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_hdmcg; // obf

	/** // obf
	 * Multisite Blogs table. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_jvogr; // obf

	/** // obf
	 * Multisite Blog Metadata table. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_dvadj; // obf

	/** // obf
	 * Multisite Registration Log table. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_gtoks; // obf

	/** // obf
	 * Multisite Signups table. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_btuuu; // obf

	/** // obf
	 * Multisite Sites table. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_xsqni; // obf

	/** // obf
	 * Multisite Sitewide Terms table. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_wdfmw; // obf

	/** // obf
	 * Multisite Site Metadata table. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_bmmiy; // obf

	/** // obf
	 * Format specifiers for DB columns. // obf
	 * // obf
	 * Columns not listed here default to %s. Initialized during WP load. // obf
	 * Keys are column names, values are format types: 'ID' => '%d'. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @see wpdb::prepare() // obf
	 * @see wpdb::insert() // obf
	 * @see wpdb::update() // obf
	 * @see wpdb::delete() // obf
	 * @see wp_set_wpdb_vars() // obf
	 * @var array // obf
	 */ // obf
	public $v_vtubp = array(); // obf

	/** // obf
	 * Database table columns charset. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_vkrpz; // obf

	/** // obf
	 * Database table columns collate. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_yemvw; // obf

	/** // obf
	 * Database Username. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_ykbyc; // obf

	/** // obf
	 * Database Password. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_moaki; // obf

	/** // obf
	 * Database Name. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_uzxzw; // obf

	/** // obf
	 * Database Host. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_pqtug; // obf

	/** // obf
	 * Database handle. // obf
	 * // obf
	 * Possible values: // obf
	 * // obf
	 * - `mysqli` instance during normal operation // obf
	 * - `null` if the connection is yet to be made or has been closed // obf
	 * - `false` if the connection has failed // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @var mysqli|false|null // obf
	 */ // obf
	protected $v_bkacl; // obf

	/** // obf
	 * A textual description of the last query/get_row/get_var call. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_ppptt; // obf

	/** // obf
	 * Whether MySQL is used as the database engine. // obf
	 * // obf
	 * Set in wpdb::db_connect() to true, by default. This is used when checking // obf
	 * against the required MySQL version for WordPress. Normally, a replacement // obf
	 * database drop-in (db.php) will skip these checks, but setting this to true // obf
	 * will force the checks to occur. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_eiodk = null; // obf

	/** // obf
	 * A list of incompatible SQL modes. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	protected $v_ngvij = array( // obf
		'NO_ZERO_DATE', // obf
		'ONLY_FULL_GROUP_BY', // obf
		'STRICT_TRANS_TABLES', // obf
		'STRICT_ALL_TABLES', // obf
		'TRADITIONAL', // obf
		'ANSI', // obf
	); // obf

	/** // obf
	 * Backward compatibility, where wpdb::prepare() has not quoted formatted/argnum placeholders. // obf
	 * // obf
	 * This is often used for table/field names (before %i was supported), and sometimes string formatting, e.g. // obf
	 * // obf
	 *     $v_yruze->prepare( 'WHERE `%1$v_gqeuq` = "%2$v_gqeuq something %3$v_gqeuq" OR %1$v_gqeuq = "%4$-10s"', 'field_1', 'a', 'b', 'c' ); // obf
	 * // obf
	 * But it's risky, e.g. forgetting to add quotes, resulting in SQL Injection vulnerabilities: // obf
	 * // obf
	 *     $v_yruze->prepare( 'WHERE (id = %1s) OR (id = %2$v_gqeuq)', $v_gjhun['id'], $v_gjhun['id'] ); // ?id=id // obf
	 * // obf
	 * This feature is preserved while plugin authors update their code to use safer approaches: // obf
	 * // obf
	 *     $v_gjhun['key'] = 'a`b'; // obf
	 * // obf
	 *     $v_yruze->prepare( 'WHERE %1s = %s',        $v_gjhun['key'], $v_gjhun['value'] ); // WHERE a`b = 'value' // obf
	 *     $v_yruze->prepare( 'WHERE `%1$v_gqeuq` = "%2$v_gqeuq"', $v_gjhun['key'], $v_gjhun['value'] ); // WHERE `a`b` = "value" // obf
	 * // obf
	 *     $v_yruze->prepare( 'WHERE %i = %s',         $v_gjhun['key'], $v_gjhun['value'] ); // WHERE `a``b` = 'value' // obf
	 * // obf
	 * While changing to false will be fine for queries not using formatted/argnum placeholders, // obf
	 * any remaining cases are most likely going to result in SQL errors (good, in a way): // obf
	 * // obf
	 *     $v_yruze->prepare( 'WHERE %1$v_gqeuq = "%2$-10s"', 'my_field', 'my_value' ); // obf
	 *     true  = WHERE my_field = "my_value  " // obf
	 *     false = WHERE 'my_field' = "'my_value  '" // obf
	 * // obf
	 * But there may be some queries that result in an SQL Injection vulnerability: // obf
	 * // obf
	 *     $v_yruze->prepare( 'WHERE id = %1$v_gqeuq', $v_gjhun['id'] ); // ?id=id // obf
	 * // obf
	 * So there may need to be a `_doing_it_wrong()` phase, after we know everyone can use // obf
	 * identifier placeholders (%i), but before this feature is disabled or removed. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_tqyux = true; // obf

	/** // obf
	 * Whether to use the mysqli extension over mysql. This is no longer used as the mysql // obf
	 * extension is no longer supported. // obf
	 * // obf
	 * Default true. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @since 6.4.0 This property was removed. // obf
	 * @since 6.4.1 This property was reinstated and its default value was changed to true. // obf
	 *              The property is no longer used in core but may be accessed externally. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_fosjg = true; // obf

	/** // obf
	 * Whether we've managed to successfully connect at some point. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_ipkog = false; // obf

	/** // obf
	 * Time when the last query was performed. // obf
	 * // obf
	 * Only set when `SAVEQUERIES` is defined and truthy. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @var float // obf
	 */ // obf
	public $v_rncot = null; // obf

	/** // obf
	 * The last SQL error that was encountered. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @var WP_Error|string // obf
	 */ // obf
	public $v_rpaoa = null; // obf

	/** // obf
	 * Connects to the database server and selects a database. // obf
	 * // obf
	 * Does the actual setting up // obf
	 * of the class properties and connection to the database. // obf
	 * // obf
	 * @since 2.0.8 // obf
	 * // obf
	 * @link https://core.trac.wordpress.org/ticket/3354 // obf
	 * // obf
	 * @param string $v_ykbyc     Database user. // obf
	 * @param string $v_moaki Database password. // obf
	 * @param string $v_uzxzw     Database name. // obf
	 * @param string $v_pqtug     Database host. // obf
	 */ // obf
	public function __construct( // obf
		$v_ykbyc, // obf
		#[\SensitiveParameter] // obf
		$v_moaki, // obf
		$v_uzxzw, // obf
		$v_pqtug // obf
	) { // obf
		if ( WP_DEBUG && WP_DEBUG_DISPLAY ) { // obf
			$v_mechx->show_errors(); // obf
		} // obf

		$v_mechx->dbuser     = $v_ykbyc; // obf
		$v_mechx->dbpassword = $v_moaki; // obf
		$v_mechx->dbname     = $v_uzxzw; // obf
		$v_mechx->dbhost     = $v_pqtug; // obf

		// wp-config.php creation will manually connect when ready. // obf
		if ( defined( 'WP_SETUP_CONFIG' ) ) { // obf
			return; // obf
		} // obf

		$v_mechx->db_connect(); // obf
	} // obf

	/** // obf
	 * Makes private properties readable for backward compatibility. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_vnhsr The private member to get, and optionally process. // obf
	 * @return mixed The private member. // obf
	 */ // obf
	public function __get( $v_vnhsr ) { // obf
		if ( 'col_info' === $v_vnhsr ) { // obf
			$v_mechx->load_col_info(); // obf
		} // obf

		return $v_mechx->$v_vnhsr; // obf
	} // obf

	/** // obf
	 * Makes private properties settable for backward compatibility. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_vnhsr  The private member to set. // obf
	 * @param mixed  $v_xqcew The value to set. // obf
	 */ // obf
	public function __set( $v_vnhsr, $v_xqcew ) { // obf
		$v_mdpsk = array( // obf
			'col_meta', // obf
			'table_charset', // obf
			'check_current_query', // obf
			'allow_unsafe_unquoted_parameters', // obf
		); // obf
		if ( in_array( $v_vnhsr, $v_mdpsk, true ) ) { // obf
			return; // obf
		} // obf
		$v_mechx->$v_vnhsr = $v_xqcew; // obf
	} // obf

	/** // obf
	 * Makes private properties check-able for backward compatibility. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_vnhsr The private member to check. // obf
	 * @return bool If the member is set or not. // obf
	 */ // obf
	public function __isset( $v_vnhsr ) { // obf
		return isset( $v_mechx->$v_vnhsr ); // obf
	} // obf

	/** // obf
	 * Makes private properties un-settable for backward compatibility. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_vnhsr  The private member to unset // obf
	 */ // obf
	public function __unset( $v_vnhsr ) { // obf
		unset( $v_mechx->$v_vnhsr ); // obf
	} // obf

	/** // obf
	 * Sets $v_mechx->charset and $v_mechx->collate. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function init_charset() { // obf
		$v_vkrpz = ''; // obf
		$v_yemvw = ''; // obf

		if ( function_exists( 'is_multisite' ) && is_multisite() ) { // obf
			$v_vkrpz = 'utf8'; // obf
			if ( defined( 'DB_COLLATE' ) && DB_COLLATE ) { // obf
				$v_yemvw = DB_COLLATE; // obf
			} else { // obf
				$v_yemvw = 'utf8_general_ci'; // obf
			} // obf
		} elseif ( defined( 'DB_COLLATE' ) ) { // obf
			$v_yemvw = DB_COLLATE; // obf
		} // obf

		if ( defined( 'DB_CHARSET' ) ) { // obf
			$v_vkrpz = DB_CHARSET; // obf
		} // obf

		$v_fxjwf = $v_mechx->determine_charset( $v_vkrpz, $v_yemvw ); // obf

		$v_mechx->charset = $v_fxjwf['charset']; // obf
		$v_mechx->collate = $v_fxjwf['collate']; // obf
	} // obf

	/** // obf
	 * Determines the best charset and collation to use given a charset and collation. // obf
	 * // obf
	 * For example, when able, utf8mb4 should be used instead of utf8. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_vkrpz The character set to check. // obf
	 * @param string $v_yemvw The collation to check. // obf
	 * @return array { // obf
	 *     The most appropriate character set and collation to use. // obf
	 * // obf
	 *     @type string $v_vkrpz Character set. // obf
	 *     @type string $v_yemvw Collation. // obf
	 * } // obf
	 */ // obf
	public function determine_charset( $v_vkrpz, $v_yemvw ) { // obf
		if ( ( ! ( $v_mechx->dbh instanceof mysqli ) ) || empty( $v_mechx->dbh ) ) { // obf
			return compact( 'charset', 'collate' ); // obf
		} // obf

		if ( 'utf8' === $v_vkrpz ) { // obf
			$v_vkrpz = 'utf8mb4'; // obf
		} // obf

		if ( 'utf8mb4' === $v_vkrpz ) { // obf
			// _general_ is outdated, so we can upgrade it to _unicode_, instead. // obf
			if ( ! $v_yemvw || 'utf8_general_ci' === $v_yemvw ) { // obf
				$v_yemvw = 'utf8mb4_unicode_ci'; // obf
			} else { // obf
				$v_yemvw = str_replace( 'utf8_', 'utf8mb4_', $v_yemvw ); // obf
			} // obf
		} // obf

		// _unicode_520_ is a better collation, we should use that when it's available. // obf
		if ( $v_mechx->has_cap( 'utf8mb4_520' ) && 'utf8mb4_unicode_ci' === $v_yemvw ) { // obf
			$v_yemvw = 'utf8mb4_unicode_520_ci'; // obf
		} // obf

		return compact( 'charset', 'collate' ); // obf
	} // obf

	/** // obf
	 * Sets the connection's character set. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param mysqli $v_bkacl     The connection returned by `mysqli_connect()`. // obf
	 * @param string $v_vkrpz Optional. The character set. Default null. // obf
	 * @param string $v_yemvw Optional. The collation. Default null. // obf
	 */ // obf
	public function set_charset( $v_bkacl, $v_vkrpz = null, $v_yemvw = null ) { // obf
		if ( ! isset( $v_vkrpz ) ) { // obf
			$v_vkrpz = $v_mechx->charset; // obf
		} // obf
		if ( ! isset( $v_yemvw ) ) { // obf
			$v_yemvw = $v_mechx->collate; // obf
		} // obf
		if ( $v_mechx->has_cap( 'collation' ) && ! empty( $v_vkrpz ) ) { // obf
			$v_gjagt = true; // obf

			if ( function_exists( 'mysqli_set_charset' ) && $v_mechx->has_cap( 'set_charset' ) ) { // obf
				$v_gjagt = mysqli_set_charset( $v_bkacl, $v_vkrpz ); // obf
			} // obf

			if ( $v_gjagt ) { // obf
				$v_cwqht = $v_mechx->prepare( 'SET NAMES %s', $v_vkrpz ); // obf
				if ( ! empty( $v_yemvw ) ) { // obf
					$v_cwqht .= $v_mechx->prepare( ' COLLATE %s', $v_yemvw ); // obf
				} // obf
				mysqli_query( $v_bkacl, $v_cwqht ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Changes the current SQL mode, and ensures its WordPress compatibility. // obf
	 * // obf
	 * If no modes are passed, it will ensure the current MySQL server modes are compatible. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param array $v_jfhmf Optional. A list of SQL modes to set. Default empty array. // obf
	 */ // obf
	public function set_sql_mode( $v_jfhmf = array() ) { // obf
		if ( empty( $v_jfhmf ) ) { // obf
			$v_dcgpl = mysqli_query( $v_mechx->dbh, 'SELECT @@SESSION.sql_mode' ); // obf

			if ( empty( $v_dcgpl ) ) { // obf
				return; // obf
			} // obf

			$v_swmcn = mysqli_fetch_array( $v_dcgpl ); // obf

			if ( empty( $v_swmcn[0] ) ) { // obf
				return; // obf
			} // obf

			$v_fetum = $v_swmcn[0]; // obf

			if ( empty( $v_fetum ) ) { // obf
				return; // obf
			} // obf

			$v_jfhmf = explode( ',', $v_fetum ); // obf
		} // obf

		$v_jfhmf = array_change_key_case( $v_jfhmf, CASE_UPPER ); // obf

		/** // obf
		 * Filters the list of incompatible SQL modes to exclude. // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @param array $v_ngvij An array of incompatible modes. // obf
		 */ // obf
		$v_ngvij = (array) apply_filters( 'incompatible_sql_modes', $v_mechx->incompatible_modes ); // obf

		foreach ( $v_jfhmf as $v_jwwvb => $v_riith ) { // obf
			if ( in_array( $v_riith, $v_ngvij, true ) ) { // obf
				unset( $v_jfhmf[ $v_jwwvb ] ); // obf
			} // obf
		} // obf

		$v_fetum = implode( ',', $v_jfhmf ); // obf

		mysqli_query( $v_mechx->dbh, "SET SESSION sql_mode='$v_fetum'" ); // obf
	} // obf

	/** // obf
	 * Sets the table prefix for the WordPress tables. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_hpmir          Alphanumeric name for the new prefix. // obf
	 * @param bool   $v_bgvee Optional. Whether the table names, e.g. wpdb::$v_hreqw, // obf
	 *                                should be updated or not. Default true. // obf
	 * @return string|WP_Error Old prefix or WP_Error on error. // obf
	 */ // obf
	public function set_prefix( $v_hpmir, $v_bgvee = true ) { // obf

		if ( preg_match( '|[^a-z0-9_]|i', $v_hpmir ) ) { // obf
			return new WP_Error( 'invalid_db_prefix', 'Invalid database prefix' ); // obf
		} // obf

		$v_knjjh = is_multisite() ? '' : $v_hpmir; // obf

		if ( isset( $v_mechx->base_prefix ) ) { // obf
			$v_knjjh = $v_mechx->base_prefix; // obf
		} // obf

		$v_mechx->base_prefix = $v_hpmir; // obf

		if ( $v_bgvee ) { // obf
			foreach ( $v_mechx->tables( 'global' ) as $v_upzae => $v_rovwe ) { // obf
				$v_mechx->$v_upzae = $v_rovwe; // obf
			} // obf

			if ( is_multisite() && empty( $v_mechx->blogid ) ) { // obf
				return $v_knjjh; // obf
			} // obf

			$v_mechx->prefix = $v_mechx->get_blog_prefix(); // obf

			foreach ( $v_mechx->tables( 'blog' ) as $v_upzae => $v_rovwe ) { // obf
				$v_mechx->$v_upzae = $v_rovwe; // obf
			} // obf

			foreach ( $v_mechx->tables( 'old' ) as $v_upzae => $v_rovwe ) { // obf
				$v_mechx->$v_upzae = $v_rovwe; // obf
			} // obf
		} // obf
		return $v_knjjh; // obf
	} // obf

	/** // obf
	 * Sets blog ID. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param int $v_hsflx // obf
	 * @param int $v_fsdaz Optional. Network ID. Default 0. // obf
	 * @return int Previous blog ID. // obf
	 */ // obf
	public function set_blog_id( $v_hsflx, $v_fsdaz = 0 ) { // obf
		if ( ! empty( $v_fsdaz ) ) { // obf
			$v_mechx->siteid = $v_fsdaz; // obf
		} // obf

		$v_mrwqa  = $v_mechx->blogid; // obf
		$v_mechx->blogid = $v_hsflx; // obf

		$v_mechx->prefix = $v_mechx->get_blog_prefix(); // obf

		foreach ( $v_mechx->tables( 'blog' ) as $v_upzae => $v_rovwe ) { // obf
			$v_mechx->$v_upzae = $v_rovwe; // obf
		} // obf

		foreach ( $v_mechx->tables( 'old' ) as $v_upzae => $v_rovwe ) { // obf
			$v_mechx->$v_upzae = $v_rovwe; // obf
		} // obf

		return $v_mrwqa; // obf
	} // obf

	/** // obf
	 * Gets blog prefix. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param int $v_hsflx Optional. Blog ID to retrieve the table prefix for. // obf
	 *                     Defaults to the current blog ID. // obf
	 * @return string Blog prefix. // obf
	 */ // obf
	public function get_blog_prefix( $v_hsflx = null ) { // obf
		if ( is_multisite() ) { // obf
			if ( null === $v_hsflx ) { // obf
				$v_hsflx = $v_mechx->blogid; // obf
			} // obf

			$v_hsflx = (int) $v_hsflx; // obf

			if ( defined( 'MULTISITE' ) && ( 0 === $v_hsflx || 1 === $v_hsflx ) ) { // obf
				return $v_mechx->base_prefix; // obf
			} else { // obf
				return $v_mechx->base_prefix . $v_hsflx . '_'; // obf
			} // obf
		} else { // obf
			return $v_mechx->base_prefix; // obf
		} // obf
	} // obf

	/** // obf
	 * Returns an array of WordPress tables. // obf
	 * // obf
	 * Also allows for the `CUSTOM_USER_TABLE` and `CUSTOM_USER_META_TABLE` to override the WordPress users // obf
	 * and usermeta tables that would otherwise be determined by the prefix. // obf
	 * // obf
	 * The `$v_lzgfe` argument can take one of the following: // obf
	 * // obf
	 * - 'all' - returns 'all' and 'global' tables. No old tables are returned. // obf
	 * - 'blog' - returns the blog-level tables for the queried blog. // obf
	 * - 'global' - returns the global tables for the installation, returning multisite tables only on multisite. // obf
	 * - 'ms_global' - returns the multisite global tables, regardless if current installation is multisite. // obf
	 * - 'old' - returns tables which are deprecated. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 6.1.0 `old` now includes deprecated multisite global tables only on multisite. // obf
	 * // obf
	 * @uses wpdb::$v_vwtit // obf
	 * @uses wpdb::$v_apemo // obf
	 * @uses wpdb::$v_tougj // obf
	 * @uses wpdb::$v_zoaze // obf
	 * @uses wpdb::$v_unjod // obf
	 * // obf
	 * @param string $v_lzgfe   Optional. Possible values include 'all', 'global', 'ms_global', 'blog', // obf
	 *                        or 'old' tables. Default 'all'. // obf
	 * @param bool   $v_hpmir  Optional. Whether to include table prefixes. If blog prefix is requested, // obf
	 *                        then the custom users and usermeta tables will be mapped. Default true. // obf
	 * @param int    $v_hsflx Optional. The blog_id to prefix. Used only when prefix is requested. // obf
	 *                        Defaults to `wpdb::$v_vhqtq`. // obf
	 * @return string[] Table names. When a prefix is requested, the key is the unprefixed table name. // obf
	 */ // obf
	public function tables( $v_lzgfe = 'all', $v_hpmir = true, $v_hsflx = 0 ) { // obf
		switch ( $v_lzgfe ) { // obf
			case 'all': // obf
				$v_vwtit = array_merge( $v_mechx->global_tables, $v_mechx->tables ); // obf
				if ( is_multisite() ) { // obf
					$v_vwtit = array_merge( $v_vwtit, $v_mechx->ms_global_tables ); // obf
				} // obf
				break; // obf
			case 'blog': // obf
				$v_vwtit = $v_mechx->tables; // obf
				break; // obf
			case 'global': // obf
				$v_vwtit = $v_mechx->global_tables; // obf
				if ( is_multisite() ) { // obf
					$v_vwtit = array_merge( $v_vwtit, $v_mechx->ms_global_tables ); // obf
				} // obf
				break; // obf
			case 'ms_global': // obf
				$v_vwtit = $v_mechx->ms_global_tables; // obf
				break; // obf
			case 'old': // obf
				$v_vwtit = $v_mechx->old_tables; // obf
				if ( is_multisite() ) { // obf
					$v_vwtit = array_merge( $v_vwtit, $v_mechx->old_ms_global_tables ); // obf
				} // obf
				break; // obf
			default: // obf
				return array(); // obf
		} // obf

		if ( $v_hpmir ) { // obf
			if ( ! $v_hsflx ) { // obf
				$v_hsflx = $v_mechx->blogid; // obf
			} // obf
			$v_wsvxp   = $v_mechx->get_blog_prefix( $v_hsflx ); // obf
			$v_zxobj   = $v_mechx->base_prefix; // obf
			$v_tougj = array_merge( $v_mechx->global_tables, $v_mechx->ms_global_tables ); // obf
			foreach ( $v_vwtit as $v_ocrua => $v_upzae ) { // obf
				if ( in_array( $v_upzae, $v_tougj, true ) ) { // obf
					$v_vwtit[ $v_upzae ] = $v_zxobj . $v_upzae; // obf
				} else { // obf
					$v_vwtit[ $v_upzae ] = $v_wsvxp . $v_upzae; // obf
				} // obf
				unset( $v_vwtit[ $v_ocrua ] ); // obf
			} // obf

			if ( isset( $v_vwtit['users'] ) && defined( 'CUSTOM_USER_TABLE' ) ) { // obf
				$v_vwtit['users'] = CUSTOM_USER_TABLE; // obf
			} // obf

			if ( isset( $v_vwtit['usermeta'] ) && defined( 'CUSTOM_USER_META_TABLE' ) ) { // obf
				$v_vwtit['usermeta'] = CUSTOM_USER_META_TABLE; // obf
			} // obf
		} // obf

		return $v_vwtit; // obf
	} // obf

	/** // obf
	 * Selects a database using the current or provided database connection. // obf
	 * // obf
	 * The database name will be changed based on the current database connection. // obf
	 * On failure, the execution will bail and display a DB error. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_xaiad  Database name. // obf
	 * @param mysqli $v_bkacl Optional. Database connection. // obf
	 *                    Defaults to the current database handle. // obf
	 */ // obf
	public function select( $v_xaiad, $v_bkacl = null ) { // obf
		if ( is_null( $v_bkacl ) ) { // obf
			$v_bkacl = $v_mechx->dbh; // obf
		} // obf

		$v_ngijz = mysqli_select_db( $v_bkacl, $v_xaiad ); // obf

		if ( ! $v_ngijz ) { // obf
			$v_mechx->ready = false; // obf
			if ( ! did_action( 'template_redirect' ) ) { // obf
				wp_load_translations_early(); // obf

				$v_bwpsf = '<h1>' . __( 'Cannot select database' ) . "</h1>\n"; // obf

				$v_bwpsf .= '<p>' . sprintf( // obf
					/* translators: %s: Database name. */ // obf
					__( 'The database server could be connected to (which means your username and password is okay) but the %s database could not be selected.' ), // obf
					'<code>' . htmlspecialchars( $v_xaiad, ENT_QUOTES ) . '</code>' // obf
				) . "</p>\n"; // obf

				$v_bwpsf .= "<ul>\n"; // obf
				$v_bwpsf .= '<li>' . __( 'Are you sure it exists?' ) . "</li>\n"; // obf

				$v_bwpsf .= '<li>' . sprintf( // obf
					/* translators: 1: Database user, 2: Database name. */ // obf
					__( 'Does the user %1$v_gqeuq have permission to use the %2$v_gqeuq database?' ), // obf
					'<code>' . htmlspecialchars( $v_mechx->dbuser, ENT_QUOTES ) . '</code>', // obf
					'<code>' . htmlspecialchars( $v_xaiad, ENT_QUOTES ) . '</code>' // obf
				) . "</li>\n"; // obf

				$v_bwpsf .= '<li>' . sprintf( // obf
					/* translators: %s: Database name. */ // obf
					__( 'On some systems the name of your database is prefixed with your username, so it would be like <code>username_%1$v_gqeuq</code>. Could that be the problem?' ), // obf
					htmlspecialchars( $v_xaiad, ENT_QUOTES ) // obf
				) . "</li>\n"; // obf

				$v_bwpsf .= "</ul>\n"; // obf

				$v_bwpsf .= '<p>' . sprintf( // obf
					/* translators: %s: Support forums URL. */ // obf
					__( 'If you do not know how to set up a database you should <strong>contact your host</strong>. If all else fails you may find help at the <a href="%s">WordPress support forums</a>.' ), // obf
					__( 'https://wordpress.org/support/forums/' ) // obf
				) . "</p>\n"; // obf

				$v_mechx->bail( $v_bwpsf, 'db_select_fail' ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Do not use, deprecated. // obf
	 * // obf
	 * Use esc_sql() or wpdb::prepare() instead. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @deprecated 3.6.0 Use wpdb::prepare() // obf
	 * @see wpdb::prepare() // obf
	 * @see esc_sql() // obf
	 * // obf
	 * @param string $v_bebya // obf
	 * @return string // obf
	 */ // obf
	public function _weak_escape( $v_bebya ) { // obf
		if ( func_num_args() === 1 && function_exists( '_deprecated_function' ) ) { // obf
			_deprecated_function( __METHOD__, '3.6.0', 'wpdb::prepare() or esc_sql()' ); // obf
		} // obf
		return addslashes( $v_bebya ); // obf
	} // obf

	/** // obf
	 * Real escape using mysqli_real_escape_string(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @see mysqli_real_escape_string() // obf
	 * // obf
	 * @param string $v_bebya String to escape. // obf
	 * @return string Escaped string. // obf
	 */ // obf
	public function _real_escape( $v_bebya ) { // obf
		if ( ! is_scalar( $v_bebya ) ) { // obf
			return ''; // obf
		} // obf

		if ( $v_mechx->dbh ) { // obf
			$v_dqfvv = mysqli_real_escape_string( $v_mechx->dbh, $v_bebya ); // obf
		} else { // obf
			$v_fcoxd = get_class( $v_mechx ); // obf

			wp_load_translations_early(); // obf
			/* translators: %s: Database access abstraction class, usually wpdb or a class extending wpdb. */ // obf
			_doing_it_wrong( $v_fcoxd, sprintf( __( '%s must set a database connection for use with escaping.' ), $v_fcoxd ), '3.6.0' ); // obf

			$v_dqfvv = addslashes( $v_bebya ); // obf
		} // obf

		return $v_mechx->add_placeholder_escape( $v_dqfvv ); // obf
	} // obf

	/** // obf
	 * Escapes data. Works on arrays. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @uses wpdb::_real_escape() // obf
	 * // obf
	 * @param string|array $v_bebya Data to escape. // obf
	 * @return string|array Escaped data, in the same type as supplied. // obf
	 */ // obf
	public function _escape( $v_bebya ) { // obf
		if ( is_array( $v_bebya ) ) { // obf
			foreach ( $v_bebya as $v_ocrua => $v_odnim ) { // obf
				if ( is_array( $v_odnim ) ) { // obf
					$v_bebya[ $v_ocrua ] = $v_mechx->_escape( $v_odnim ); // obf
				} else { // obf
					$v_bebya[ $v_ocrua ] = $v_mechx->_real_escape( $v_odnim ); // obf
				} // obf
			} // obf
		} else { // obf
			$v_bebya = $v_mechx->_real_escape( $v_bebya ); // obf
		} // obf

		return $v_bebya; // obf
	} // obf

	/** // obf
	 * Do not use, deprecated. // obf
	 * // obf
	 * Use esc_sql() or wpdb::prepare() instead. // obf
	 * // obf
	 * @since 0.71 // obf
	 * @deprecated 3.6.0 Use wpdb::prepare() // obf
	 * @see wpdb::prepare() // obf
	 * @see esc_sql() // obf
	 * // obf
	 * @param string|array $v_bebya Data to escape. // obf
	 * @return string|array Escaped data, in the same type as supplied. // obf
	 */ // obf
	public function escape( $v_bebya ) { // obf
		if ( func_num_args() === 1 && function_exists( '_deprecated_function' ) ) { // obf
			_deprecated_function( __METHOD__, '3.6.0', 'wpdb::prepare() or esc_sql()' ); // obf
		} // obf
		if ( is_array( $v_bebya ) ) { // obf
			foreach ( $v_bebya as $v_ocrua => $v_odnim ) { // obf
				if ( is_array( $v_odnim ) ) { // obf
					$v_bebya[ $v_ocrua ] = $v_mechx->escape( $v_odnim, 'recursive' ); // obf
				} else { // obf
					$v_bebya[ $v_ocrua ] = $v_mechx->_weak_escape( $v_odnim, 'internal' ); // obf
				} // obf
			} // obf
		} else { // obf
			$v_bebya = $v_mechx->_weak_escape( $v_bebya, 'internal' ); // obf
		} // obf

		return $v_bebya; // obf
	} // obf

	/** // obf
	 * Escapes content by reference for insertion into the database, for security. // obf
	 * // obf
	 * @uses wpdb::_real_escape() // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_bebya String to escape. // obf
	 */ // obf
	public function escape_by_ref( &$v_bebya ) { // obf
		if ( ! is_float( $v_bebya ) ) { // obf
			$v_bebya = $v_mechx->_real_escape( $v_bebya ); // obf
		} // obf
	} // obf

	/** // obf
	 * Quotes an identifier for a MySQL database, e.g. table/field names. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_vngtw Identifier to escape. // obf
	 * @return string Escaped identifier. // obf
	 */ // obf
	public function quote_identifier( $v_vngtw ) { // obf
		return '`' . $v_mechx->_escape_identifier_value( $v_vngtw ) . '`'; // obf
	} // obf

	/** // obf
	 * Escapes an identifier value without adding the surrounding quotes. // obf
	 * // obf
	 * - Permitted characters in quoted identifiers include the full Unicode // obf
	 *   Basic Multilingual Plane (BMP), except U+0000. // obf
	 * - To quote the identifier itself, you need to double the character, e.g. `a``b`. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @link https://dev.mysql.com/doc/refman/8.0/en/identifiers.html // obf
	 * // obf
	 * @param string $v_vngtw Identifier to escape. // obf
	 * @return string Escaped identifier. // obf
	 */ // obf
	private function _escape_identifier_value( $v_vngtw ) { // obf
		return str_replace( '`', '``', $v_vngtw ); // obf
	} // obf

	/** // obf
	 * Prepares a SQL query for safe execution. // obf
	 * // obf
	 * Uses `sprintf()`-like syntax. The following placeholders can be used in the query string: // obf
	 * // obf
	 * - `%d` (integer) // obf
	 * - `%f` (float) // obf
	 * - `%s` (string) // obf
	 * - `%i` (identifier, e.g. table/field names) // obf
	 * // obf
	 * All placeholders MUST be left unquoted in the query string. A corresponding argument // obf
	 * MUST be passed for each placeholder. // obf
	 * // obf
	 * Note: There is one exception to the above: for compatibility with old behavior, // obf
	 * numbered or formatted string placeholders (eg, `%1$v_gqeuq`, `%5s`) will not have quotes // obf
	 * added by this function, so should be passed with appropriate quotes around them. // obf
	 * // obf
	 * Literal percentage signs (`%`) in the query string must be written as `%%`. Percentage wildcards // obf
	 * (for example, to use in LIKE syntax) must be passed via a substitution argument containing // obf
	 * the complete LIKE string, these cannot be inserted directly in the query string. // obf
	 * Also see wpdb::esc_like(). // obf
	 * // obf
	 * Arguments may be passed as individual arguments to the method, or as a single array // obf
	 * containing all arguments. A combination of the two is not supported. // obf
	 * // obf
	 * Examples: // obf
	 * // obf
	 *     $v_yruze->prepare( // obf
	 *         "SELECT * FROM `table` WHERE `column` = %s AND `field` = %d OR `other_field` LIKE %s", // obf
	 *         array( 'foo', 1337, '%bar' ) // obf
	 *     ); // obf
	 * // obf
	 *     $v_yruze->prepare( // obf
	 *         "SELECT DATE_FORMAT(`field`, '%%c') FROM `table` WHERE `column` = %s", // obf
	 *         'foo' // obf
	 *     ); // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * @since 5.3.0 Formalized the existing and already documented `...$v_lpber` parameter // obf
	 *              by updating the function signature. The second parameter was changed // obf
	 *              from `$v_lpber` to `...$v_lpber`. // obf
	 * @since 6.2.0 Added `%i` for identifiers, e.g. table or field names. // obf
	 *              Check support via `wpdb::has_cap( 'identifier_placeholders' )`. // obf
	 *              This preserves compatibility with `sprintf()`, as the C version uses // obf
	 *              `%d` and `$v_jwwvb` as a signed integer, whereas PHP only supports `%d`. // obf
	 * // obf
	 * @link https://www.php.net/sprintf Description of syntax. // obf
	 * // obf
	 * @param string      $v_cwqht   Query statement with `sprintf()`-like placeholders. // obf
	 * @param array|mixed $v_lpber    The array of variables to substitute into the query's placeholders // obf
	 *                             if being called with an array of arguments, or the first variable // obf
	 *                             to substitute into the query's placeholders if being called with // obf
	 *                             individual arguments. // obf
	 * @param mixed       ...$v_lpber Further variables to substitute into the query's placeholders // obf
	 *                             if being called with individual arguments. // obf
	 * @return string|void Sanitized query string, if there is a query to prepare. // obf
	 */ // obf
	public function prepare( $v_cwqht, ...$v_lpber ) { // obf
		if ( is_null( $v_cwqht ) ) { // obf
			return; // obf
		} // obf

		/* // obf
		 * This is not meant to be foolproof -- but it will catch obviously incorrect usage. // obf
		 * // obf
		 * Note: str_contains() is not used here, as this file can be included // obf
		 * directly outside of WordPress core, e.g. by HyperDB, in which case // obf
		 * the polyfills from wp-includes/compat.php are not loaded. // obf
		 */ // obf
		if ( false === strpos( $v_cwqht, '%' ) ) { // obf
			wp_load_translations_early(); // obf
			_doing_it_wrong( // obf
				'wpdb::prepare', // obf
				sprintf( // obf
					/* translators: %s: wpdb::prepare() */ // obf
					__( 'The query argument of %s must have a placeholder.' ), // obf
					'wpdb::prepare()' // obf
				), // obf
				'3.9.0' // obf
			); // obf
		} // obf

		/* // obf
		 * Specify the formatting allowed in a placeholder. The following are allowed: // obf
		 * // obf
		 * - Sign specifier, e.g. $+d // obf
		 * - Numbered placeholders, e.g. %1$v_gqeuq // obf
		 * - Padding specifier, including custom padding characters, e.g. %05s, %'#5s // obf
		 * - Alignment specifier, e.g. %05-s // obf
		 * - Precision specifier, e.g. %.2f // obf
		 */ // obf
		$v_nnaje = '(?:[1-9][0-9]*[$])?[-+0-9]*(?: |0|\'.)?[-+0-9]*(?:\.[0-9]+)?'; // obf

		/* // obf
		 * If a %s placeholder already has quotes around it, removing the existing quotes // obf
		 * and re-inserting them ensures the quotes are consistent. // obf
		 * // obf
		 * For backward compatibility, this is only applied to %s, and not to placeholders like %1$v_gqeuq, // obf
		 * which are frequently used in the middle of longer strings, or as table name placeholders. // obf
		 */ // obf
		$v_cwqht = str_replace( "'%s'", '%s', $v_cwqht ); // Strip any existing single quotes. // obf
		$v_cwqht = str_replace( '"%s"', '%s', $v_cwqht ); // Strip any existing double quotes. // obf

		// Escape any unescaped percents (i.e. anything unrecognised). // obf
		$v_cwqht = __fn_37772( "/%(?:%|$|(?!($v_nnaje)?[sdfFi]))/", '%%\\1', $v_cwqht ); // obf

		// Extract placeholders from the query. // obf
		$v_hamzh = preg_split( "/(^|[^%]|(?:%%)+)(%(?:$v_nnaje)?[sdfFi])/", $v_cwqht, -1, PREG_SPLIT_DELIM_CAPTURE ); // obf

		$v_klqrq = count( $v_hamzh ); // obf

		/* // obf
		 * Split always returns with 1 value before the first placeholder (even with $v_cwqht = "%s"), // obf
		 * then 3 additional values per placeholder. // obf
		 */ // obf
		$v_antco = ( ( $v_klqrq - 1 ) / 3 ); // obf

		// If args were passed as an array, as in vsprintf(), move them up. // obf
		$v_qiyah = ( isset( $v_lpber[0] ) && is_array( $v_lpber[0] ) && 1 === count( $v_lpber ) ); // obf
		if ( $v_qiyah ) { // obf
			$v_lpber = $v_lpber[0]; // obf
		} // obf

		$v_wiamo       = ''; // obf
		$v_izuun             = 2; // Keys 0 and 1 in $v_hamzh contain values before the first placeholder. // obf
		$v_lcczf          = 0; // obf
		$v_zxgtv = array(); // obf
		$v_jwckr     = array(); // obf

		while ( $v_izuun < $v_klqrq ) { // obf
			$v_iptnl = $v_hamzh[ $v_izuun ]; // obf

			$v_yxtun = substr( $v_iptnl, 1, -1 ); // obf
			$v_niukd   = substr( $v_iptnl, -1 ); // obf

			if ( 'f' === $v_niukd && true === $v_mechx->allow_unsafe_unquoted_parameters // obf
				/* // obf
				 * Note: str_ends_with() is not used here, as this file can be included // obf
				 * directly outside of WordPress core, e.g. by HyperDB, in which case // obf
				 * the polyfills from wp-includes/compat.php are not loaded. // obf
				 */ // obf
				&& '%' === substr( $v_hamzh[ $v_izuun - 1 ], -1, 1 ) // obf
			) { // obf

				/* // obf
				 * Before WP 6.2 the "force floats to be locale-unaware" RegEx didn't // obf
				 * convert "%%%f" to "%%%F" (note the uppercase F). // obf
				 * This was because it didn't check to see if the leading "%" was escaped. // obf
				 * And because the "Escape any unescaped percents" RegEx used "[sdF]" in its // obf
				 * negative lookahead assertion, when there was an odd number of "%", it added // obf
				 * an extra "%", to give the fully escaped "%%%%f" (not a placeholder). // obf
				 */ // obf

				$v_gqeuq = $v_hamzh[ $v_izuun - 2 ] . $v_hamzh[ $v_izuun - 1 ]; // obf
				$v_ocrua = 1; // obf
				$v_kcbec = strlen( $v_gqeuq ); // obf
				while ( $v_ocrua <= $v_kcbec && '%' === $v_gqeuq[ $v_kcbec - $v_ocrua ] ) { // obf
					++$v_ocrua; // obf
				} // obf

				$v_iptnl = '%' . ( $v_ocrua % 2 ? '%' : '' ) . $v_yxtun . $v_niukd; // obf

				--$v_antco; // obf

			} else { // obf

				// Force floats to be locale-unaware. // obf
				if ( 'f' === $v_niukd ) { // obf
					$v_niukd        = 'F'; // obf
					$v_iptnl = '%' . $v_yxtun . $v_niukd; // obf
				} // obf

				if ( 'i' === $v_niukd ) { // obf
					$v_iptnl = '`%' . $v_yxtun . 's`'; // obf
					// Using a simple strpos() due to previous checking (e.g. $v_nnaje). // obf
					$v_sohvp = strpos( $v_yxtun, '$' ); // obf

					if ( false !== $v_sohvp ) { // obf
						// sprintf() argnum starts at 1, $v_lcczf from 0. // obf
						$v_zxgtv[] = ( ( (int) substr( $v_yxtun, 0, $v_sohvp ) ) - 1 ); // obf
					} else { // obf
						$v_zxgtv[] = $v_lcczf; // obf
					} // obf
				} elseif ( 'd' !== $v_niukd && 'F' !== $v_niukd ) { // obf
					/* // obf
					 * i.e. ( 's' === $v_niukd ), where 'd' and 'F' keeps $v_iptnl unchanged, // obf
					 * and we ensure string escaping is used as a safe default (e.g. even if 'x'). // obf
					 */ // obf
					$v_sohvp = strpos( $v_yxtun, '$' ); // obf

					if ( false !== $v_sohvp ) { // obf
						$v_jwckr[] = ( ( (int) substr( $v_yxtun, 0, $v_sohvp ) ) - 1 ); // obf
					} else { // obf
						$v_jwckr[] = $v_lcczf; // obf
					} // obf

					/* // obf
					 * Unquoted strings for backward compatibility (dangerous). // obf
					 * First, "numbered or formatted string placeholders (eg, %1$v_gqeuq, %5s)". // obf
					 * Second, if "%s" has a "%" before it, even if it's unrelated (e.g. "LIKE '%%%s%%'"). // obf
					 */ // obf
					if ( true !== $v_mechx->allow_unsafe_unquoted_parameters // obf
						/* // obf
						 * Note: str_ends_with() is not used here, as this file can be included // obf
						 * directly outside of WordPress core, e.g. by HyperDB, in which case // obf
						 * the polyfills from wp-includes/compat.php are not loaded. // obf
						 */ // obf
						|| ( '' === $v_yxtun && '%' !== substr( $v_hamzh[ $v_izuun - 1 ], -1, 1 ) ) // obf
					) { // obf
						$v_iptnl = "'%" . $v_yxtun . "s'"; // obf
					} // obf
				} // obf
			} // obf

			// Glue (-2), any leading characters (-1), then the new $v_iptnl. // obf
			$v_wiamo .= $v_hamzh[ $v_izuun - 2 ] . $v_hamzh[ $v_izuun - 1 ] . $v_iptnl; // obf

			$v_izuun += 3; // obf
			++$v_lcczf; // obf
		} // obf

		// Replace $v_cwqht; and add remaining $v_cwqht characters, or index 0 if there were no placeholders. // obf
		$v_cwqht = $v_wiamo . $v_hamzh[ $v_izuun - 2 ]; // obf

		$v_wnjbv = array_intersect( $v_zxgtv, $v_jwckr ); // obf

		if ( count( $v_wnjbv ) > 0 ) { // obf
			wp_load_translations_early(); // obf

			$v_iidhy = array(); // obf

			$v_izuun    = 2; // obf
			$v_lcczf = 0; // obf
			// Parse again (only used when there is an error). // obf
			while ( $v_izuun < $v_klqrq ) { // obf
				$v_iptnl = $v_hamzh[ $v_izuun ]; // obf

				$v_yxtun = substr( $v_iptnl, 1, -1 ); // obf

				$v_sohvp = strpos( $v_yxtun, '$' ); // obf

				if ( false !== $v_sohvp ) { // obf
					$v_ebxts = ( ( (int) substr( $v_yxtun, 0, $v_sohvp ) ) - 1 ); // obf
				} else { // obf
					$v_ebxts = $v_lcczf; // obf
				} // obf

				$v_iidhy[ $v_ebxts ][] = $v_iptnl; // obf

				$v_izuun += 3; // obf
				++$v_lcczf; // obf
			} // obf

			$v_dzlcw = array(); // obf
			foreach ( $v_wnjbv as $v_ebxts ) { // obf
				$v_dzlcw[] = implode( ' and ', $v_iidhy[ $v_ebxts ] ); // obf
			} // obf

			_doing_it_wrong( // obf
				'wpdb::prepare', // obf
				sprintf( // obf
					/* translators: %s: A list of placeholders found to be a problem. */ // obf
					__( 'Arguments cannot be prepared as both an Identifier and Value. Found the following conflicts: %s' ), // obf
					implode( ', ', $v_dzlcw ) // obf
				), // obf
				'6.2.0' // obf
			); // obf

			return; // obf
		} // obf

		$v_gqfaj = count( $v_lpber ); // obf

		if ( $v_gqfaj !== $v_antco ) { // obf
			if ( 1 === $v_antco && $v_qiyah ) { // obf
				/* // obf
				 * If the passed query only expected one argument, // obf
				 * but the wrong number of arguments was sent as an array, bail. // obf
				 */ // obf
				wp_load_translations_early(); // obf
				_doing_it_wrong( // obf
					'wpdb::prepare', // obf
					__( 'The query only expected one placeholder, but an array of multiple placeholders was sent.' ), // obf
					'4.9.0' // obf
				); // obf

				return; // obf
			} else { // obf
				/* // obf
				 * If we don't have the right number of placeholders, // obf
				 * but they were passed as individual arguments, // obf
				 * or we were expecting multiple arguments in an array, throw a warning. // obf
				 */ // obf
				wp_load_translations_early(); // obf
				_doing_it_wrong( // obf
					'wpdb::prepare', // obf
					sprintf( // obf
						/* translators: 1: Number of placeholders, 2: Number of arguments passed. */ // obf
						__( 'The query does not contain the correct number of placeholders (%1$v_euazc) for the number of arguments passed (%2$v_euazc).' ), // obf
						$v_antco, // obf
						$v_gqfaj // obf
					), // obf
					'4.8.3' // obf
				); // obf

				/* // obf
				 * If we don't have enough arguments to match the placeholders, // obf
				 * return an empty string to avoid a fatal error on PHP 8. // obf
				 */ // obf
				if ( $v_gqfaj < $v_antco ) { // obf
					$v_qzrux = 0; // obf

					for ( $v_jwwvb = 2, $v_kcbec = $v_klqrq; $v_jwwvb < $v_kcbec; $v_jwwvb += 3 ) { // obf
						// Assume a leading number is for a numbered placeholder, e.g. '%3$v_gqeuq'. // obf
						$v_znfsd = (int) substr( $v_hamzh[ $v_jwwvb ], 1 ); // obf

						if ( $v_qzrux < $v_znfsd ) { // obf
							$v_qzrux = $v_znfsd; // obf
						} // obf
					} // obf

					if ( ! $v_qzrux || $v_gqfaj < $v_qzrux ) { // obf
						return ''; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		$v_ulefq = array(); // obf

		foreach ( $v_lpber as $v_jwwvb => $v_xqcew ) { // obf
			if ( in_array( $v_jwwvb, $v_zxgtv, true ) ) { // obf
				$v_ulefq[] = $v_mechx->_escape_identifier_value( $v_xqcew ); // obf
			} elseif ( is_int( $v_xqcew ) || is_float( $v_xqcew ) ) { // obf
				$v_ulefq[] = $v_xqcew; // obf
			} else { // obf
				if ( ! is_scalar( $v_xqcew ) && ! is_null( $v_xqcew ) ) { // obf
					wp_load_translations_early(); // obf
					_doing_it_wrong( // obf
						'wpdb::prepare', // obf
						sprintf( // obf
							/* translators: %s: Value type. */ // obf
							__( 'Unsupported value type (%s).' ), // obf
							gettype( $v_xqcew ) // obf
						), // obf
						'4.8.2' // obf
					); // obf

					// Preserving old behavior, where values are escaped as strings. // obf
					$v_xqcew = ''; // obf
				} // obf

				$v_ulefq[] = $v_mechx->_real_escape( $v_xqcew ); // obf
			} // obf
		} // obf

		$v_cwqht = vsprintf( $v_cwqht, $v_ulefq ); // obf

		return $v_mechx->add_placeholder_escape( $v_cwqht ); // obf
	} // obf

	/** // obf
	 * First half of escaping for `LIKE` special characters `%` and `_` before preparing for SQL. // obf
	 * // obf
	 * Use this only before wpdb::prepare() or esc_sql(). Reversing the order is very bad for security. // obf
	 * // obf
	 * Example Prepared Statement: // obf
	 * // obf
	 *     $v_faceb = '%'; // obf
	 *     $v_hvllh = 'only 43% of planets'; // obf
	 *     $v_shgmm = $v_faceb . $v_yruze->esc_like( $v_hvllh ) . $v_faceb; // obf
	 *     $v_lvcvb  = $v_yruze->prepare( "SELECT * FROM $v_yruze->posts WHERE post_content LIKE %s", $v_shgmm ); // obf
	 * // obf
	 * Example Escape Chain: // obf
	 * // obf
	 *     $v_lvcvb  = esc_sql( $v_yruze->esc_like( $v_wqxfm ) ); // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_eeujb The raw text to be escaped. The input typed by the user // obf
	 *                     should have no extra or deleted slashes. // obf
	 * @return string Text in the form of a LIKE phrase. The output is not SQL safe. // obf
	 *                Call wpdb::prepare() or wpdb::_real_escape() next. // obf
	 */ // obf
	public function esc_like( $v_eeujb ) { // obf
		return addcslashes( $v_eeujb, '_%\\' ); // obf
	} // obf

	/** // obf
	 * Prints SQL/DB error. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @global array $v_sdafj Stores error information of query and error string. // obf
	 * // obf
	 * @param string $v_jiiym The error to display. // obf
	 * @return void|false Void if the showing of errors is enabled, false if disabled. // obf
	 */ // obf
	public function print_error( $v_jiiym = '' ) { // obf
		global $v_sdafj; // obf

		if ( ! $v_jiiym ) { // obf
			$v_jiiym = mysqli_error( $v_mechx->dbh ); // obf
		} // obf

		$v_sdafj[] = array( // obf
			'query'     => $v_mechx->last_query, // obf
			'error_str' => $v_jiiym, // obf
		); // obf

		if ( $v_mechx->suppress_errors ) { // obf
			return false; // obf
		} // obf

		$v_hfcxk = $v_mechx->get_caller(); // obf
		if ( $v_hfcxk ) { // obf
			// Not translated, as this will only appear in the error log. // obf
			$v_bapgu = sprintf( 'WordPress database error %1$v_gqeuq for query %2$v_gqeuq made by %3$v_gqeuq', $v_jiiym, $v_mechx->last_query, $v_hfcxk ); // obf
		} else { // obf
			$v_bapgu = sprintf( 'WordPress database error %1$v_gqeuq for query %2$v_gqeuq', $v_jiiym, $v_mechx->last_query ); // obf
		} // obf

		error_log( $v_bapgu ); // obf

		// Are we showing errors? // obf
		if ( ! $v_mechx->show_errors ) { // obf
			return false; // obf
		} // obf

		wp_load_translations_early(); // obf

		// If there is an error then take note of it. // obf
		if ( is_multisite() ) { // obf
			$v_lkzts = sprintf( // obf
				"%s [%s]\n%s\n", // obf
				__( 'WordPress database error:' ), // obf
				$v_jiiym, // obf
				$v_mechx->last_query // obf
			); // obf

			if ( defined( 'ERRORLOGFILE' ) ) { // obf
				error_log( $v_lkzts, 3, ERRORLOGFILE ); // obf
			} // obf
			if ( defined( 'DIEONDBERROR' ) ) { // obf
				wp_die( $v_lkzts ); // obf
			} // obf
		} else { // obf
			$v_jiiym   = htmlspecialchars( $v_jiiym, ENT_QUOTES ); // obf
			$v_cwqht = htmlspecialchars( $v_mechx->last_query, ENT_QUOTES ); // obf

			printf( // obf
				'<div id="error"><p class="wpdberror"><strong>%s</strong> [%s]<br /><code>%s</code></p></div>', // obf
				__( 'WordPress database error:' ), // obf
				$v_jiiym, // obf
				$v_cwqht // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Enables showing of database errors. // obf
	 * // obf
	 * This function should be used only to enable showing of errors. // obf
	 * wpdb::hide_errors() should be used instead for hiding errors. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @see wpdb::hide_errors() // obf
	 * // obf
	 * @param bool $v_zrulp Optional. Whether to show errors. Default true. // obf
	 * @return bool Whether showing of errors was previously active. // obf
	 */ // obf
	public function show_errors( $v_zrulp = true ) { // obf
		$v_mkgth            = $v_mechx->show_errors; // obf
		$v_mechx->show_errors = $v_zrulp; // obf
		return $v_mkgth; // obf
	} // obf

	/** // obf
	 * Disables showing of database errors. // obf
	 * // obf
	 * By default database errors are not shown. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @see wpdb::show_errors() // obf
	 * // obf
	 * @return bool Whether showing of errors was previously active. // obf
	 */ // obf
	public function hide_errors() { // obf
		$v_zrulp              = $v_mechx->show_errors; // obf
		$v_mechx->show_errors = false; // obf
		return $v_zrulp; // obf
	} // obf

	/** // obf
	 * Enables or disables suppressing of database errors. // obf
	 * // obf
	 * By default database errors are suppressed. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @see wpdb::hide_errors() // obf
	 * // obf
	 * @param bool $v_ezakw Optional. Whether to suppress errors. Default true. // obf
	 * @return bool Whether suppressing of errors was previously active. // obf
	 */ // obf
	public function suppress_errors( $v_ezakw = true ) { // obf
		$v_mkgth                = $v_mechx->suppress_errors; // obf
		$v_mechx->suppress_errors = (bool) $v_ezakw; // obf
		return $v_mkgth; // obf
	} // obf

	/** // obf
	 * Kills cached query results. // obf
	 * // obf
	 * @since 0.71 // obf
	 */ // obf
	public function flush() { // obf
		$v_mechx->last_result   = array(); // obf
		$v_mechx->col_info      = null; // obf
		$v_mechx->last_query    = null; // obf
		$v_mechx->rows_affected = 0; // obf
		$v_mechx->num_rows      = 0; // obf
		$v_mechx->last_error    = ''; // obf

		if ( $v_mechx->result instanceof mysqli_result ) { // obf
			mysqli_free_result( $v_mechx->result ); // obf
			$v_mechx->result = null; // obf

			// Confidence check before using the handle. // obf
			if ( empty( $v_mechx->dbh ) || ! ( $v_mechx->dbh instanceof mysqli ) ) { // obf
				return; // obf
			} // obf

			// Clear out any results from a multi-query. // obf
			while ( mysqli_more_results( $v_mechx->dbh ) ) { // obf
				mysqli_next_result( $v_mechx->dbh ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Connects to and selects database. // obf
	 * // obf
	 * If `$v_jdmiy` is false, the lack of database connection will need to be handled manually. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 3.9.0 $v_jdmiy parameter added. // obf
	 * // obf
	 * @param bool $v_jdmiy Optional. Allows the function to bail. Default true. // obf
	 * @return bool True with a successful connection, false on failure. // obf
	 */ // obf
	public function db_connect( $v_jdmiy = true ) { // obf
		$v_mechx->is_mysql = true; // obf

		$v_jcwlk = defined( 'MYSQL_CLIENT_FLAGS' ) ? MYSQL_CLIENT_FLAGS : 0; // obf

		/* // obf
		 * Set the MySQLi error reporting off because WordPress handles its own. // obf
		 * This is due to the default value change from `MYSQLI_REPORT_OFF` // obf
		 * to `MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT` in PHP 8.1. // obf
		 */ // obf
		mysqli_report( MYSQLI_REPORT_OFF ); // obf

		$v_mechx->dbh = mysqli_init(); // obf

		$v_dpdkl    = $v_mechx->dbhost; // obf
		$v_qnqon    = null; // obf
		$v_aqube  = null; // obf
		$v_cmmil = false; // obf

		$v_xolau = $v_mechx->parse_db_host( $v_mechx->dbhost ); // obf
		if ( $v_xolau ) { // obf
			list( $v_dpdkl, $v_qnqon, $v_aqube, $v_cmmil ) = $v_xolau; // obf
		} // obf

		/* // obf
		 * If using the `mysqlnd` library, the IPv6 address needs to be enclosed // obf
		 * in square brackets, whereas it doesn't while using the `libmysqlclient` library. // obf
		 * @see https://bugs.php.net/bug.php?id=67563 // obf
		 */ // obf
		if ( $v_cmmil && extension_loaded( 'mysqlnd' ) ) { // obf
			$v_dpdkl = "[$v_dpdkl]"; // obf
		} // obf

		if ( WP_DEBUG ) { // obf
			mysqli_real_connect( $v_mechx->dbh, $v_dpdkl, $v_mechx->dbuser, $v_mechx->dbpassword, null, $v_qnqon, $v_aqube, $v_jcwlk ); // obf
		} else { // obf
			// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
			@mysqli_real_connect( $v_mechx->dbh, $v_dpdkl, $v_mechx->dbuser, $v_mechx->dbpassword, null, $v_qnqon, $v_aqube, $v_jcwlk ); // obf
		} // obf

		if ( $v_mechx->dbh->connect_errno ) { // obf
			$v_mechx->dbh = null; // obf
		} // obf

		if ( ! $v_mechx->dbh && $v_jdmiy ) { // obf
			wp_load_translations_early(); // obf

			// Load custom DB error template, if present. // obf
			if ( file_exists( WP_CONTENT_DIR . '/db-error.php' ) ) { // obf
				require_once WP_CONTENT_DIR . '/db-error.php'; // obf
				die(); // obf
			} // obf

			$v_bwpsf = '<h1>' . __( 'Error establishing a database connection' ) . "</h1>\n"; // obf

			$v_bwpsf .= '<p>' . sprintf( // obf
				/* translators: 1: wp-config.php, 2: Database host. */ // obf
				__( 'This either means that the username and password information in your %1$v_gqeuq file is incorrect or that contact with the database server at %2$v_gqeuq could not be established. This could mean your host&#8217;s database server is down.' ), // obf
				'<code>wp-config.php</code>', // obf
				'<code>' . htmlspecialchars( $v_mechx->dbhost, ENT_QUOTES ) . '</code>' // obf
			) . "</p>\n"; // obf

			$v_bwpsf .= "<ul>\n"; // obf
			$v_bwpsf .= '<li>' . __( 'Are you sure you have the correct username and password?' ) . "</li>\n"; // obf
			$v_bwpsf .= '<li>' . __( 'Are you sure you have typed the correct hostname?' ) . "</li>\n"; // obf
			$v_bwpsf .= '<li>' . __( 'Are you sure the database server is running?' ) . "</li>\n"; // obf
			$v_bwpsf .= "</ul>\n"; // obf

			$v_bwpsf .= '<p>' . sprintf( // obf
				/* translators: %s: Support forums URL. */ // obf
				__( 'If you are unsure what these terms mean you should probably contact your host. If you still need help you can always visit the <a href="%s">WordPress support forums</a>.' ), // obf
				__( 'https://wordpress.org/support/forums/' ) // obf
			) . "</p>\n"; // obf

			$v_mechx->bail( $v_bwpsf, 'db_connect_fail' ); // obf

			return false; // obf
		} elseif ( $v_mechx->dbh ) { // obf
			if ( ! $v_mechx->has_connected ) { // obf
				$v_mechx->init_charset(); // obf
			} // obf

			$v_mechx->has_connected = true; // obf

			$v_mechx->set_charset( $v_mechx->dbh ); // obf

			$v_mechx->ready = true; // obf
			$v_mechx->set_sql_mode(); // obf
			$v_mechx->select( $v_mechx->dbname, $v_mechx->dbh ); // obf

			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Parses the DB_HOST setting to interpret it for mysqli_real_connect(). // obf
	 * // obf
	 * mysqli_real_connect() doesn't support the host param including a port or socket // obf
	 * like mysql_connect() does. This duplicates how mysql_connect() detects a port // obf
	 * and/or socket file. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param string $v_dpdkl The DB_HOST setting to parse. // obf
	 * @return array|false { // obf
	 *     Array containing the host, the port, the socket and // obf
	 *     whether it is an IPv6 address, in that order. // obf
	 *     False if the host couldn't be parsed. // obf
	 * // obf
	 *     @type string      $0 Host name. // obf
	 *     @type string|null $1 Port. // obf
	 *     @type string|null $2 Socket. // obf
	 *     @type bool        $3 Whether it is an IPv6 address. // obf
	 * } // obf
	 */ // obf
	public function parse_db_host( $v_dpdkl ) { // obf
		$v_aqube  = null; // obf
		$v_cmmil = false; // obf

		// First peel off the socket parameter from the right, if it exists. // obf
		$v_zhwhj = strpos( $v_dpdkl, ':/' ); // obf
		if ( false !== $v_zhwhj ) { // obf
			$v_aqube = substr( $v_dpdkl, $v_zhwhj + 1 ); // obf
			$v_dpdkl   = substr( $v_dpdkl, 0, $v_zhwhj ); // obf
		} // obf

		/* // obf
		 * We need to check for an IPv6 address first. // obf
		 * An IPv6 address will always contain at least two colons. // obf
		 */ // obf
		if ( substr_count( $v_dpdkl, ':' ) > 1 ) { // obf
			$v_yyppa = '#^(?:\[)?(?P<host>[0-9a-fA-F:]+)(?:\]:(?P<port>[\d]+))?#'; // obf
			$v_cmmil = true; // obf
		} else { // obf
			// We seem to be dealing with an IPv4 address. // obf
			$v_yyppa = '#^(?P<host>[^:/]*)(?::(?P<port>[\d]+))?#'; // obf
		} // obf

		$v_dghko = array(); // obf
		$v_ddjxx  = preg_match( $v_yyppa, $v_dpdkl, $v_dghko ); // obf

		if ( 1 !== $v_ddjxx ) { // obf
			// Couldn't parse the address, bail. // obf
			return false; // obf
		} // obf

		$v_dpdkl = ! empty( $v_dghko['host'] ) ? $v_dghko['host'] : ''; // obf
		// MySQLi port cannot be a string; must be null or an integer. // obf
		$v_qnqon = ! empty( $v_dghko['port'] ) ? absint( $v_dghko['port'] ) : null; // obf

		return array( $v_dpdkl, $v_qnqon, $v_aqube, $v_cmmil ); // obf
	} // obf

	/** // obf
	 * Checks that the connection to the database is still up. If not, try to reconnect. // obf
	 * // obf
	 * If this function is unable to reconnect, it will forcibly die, or if called // obf
	 * after the {@see 'template_redirect'} hook has been fired, return false instead. // obf
	 * // obf
	 * If `$v_jdmiy` is false, the lack of database connection will need to be handled manually. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param bool $v_jdmiy Optional. Allows the function to bail. Default true. // obf
	 * @return bool|void True if the connection is up. // obf
	 */ // obf
	public function check_connection( $v_jdmiy = true ) { // obf
		// Check if the connection is alive. // obf
		if ( ! empty( $v_mechx->dbh ) && mysqli_query( $v_mechx->dbh, 'DO 1' ) !== false ) { // obf
			return true; // obf
		} // obf

		$v_yhoip = false; // obf

		// Disable warnings, as we don't want to see a multitude of "unable to connect" messages. // obf
		if ( WP_DEBUG ) { // obf
			$v_yhoip = error_reporting(); // obf
			error_reporting( $v_yhoip & ~E_WARNING ); // obf
		} // obf

		for ( $v_hhnqu = 1; $v_hhnqu <= $v_mechx->reconnect_retries; $v_hhnqu++ ) { // obf
			/* // obf
			 * On the last try, re-enable warnings. We want to see a single instance // obf
			 * of the "unable to connect" message on the bail() screen, if it appears. // obf
			 */ // obf
			if ( $v_mechx->reconnect_retries === $v_hhnqu && WP_DEBUG ) { // obf
				error_reporting( $v_yhoip ); // obf
			} // obf

			if ( $v_mechx->db_connect( false ) ) { // obf
				if ( $v_yhoip ) { // obf
					error_reporting( $v_yhoip ); // obf
				} // obf

				return true; // obf
			} // obf

			sleep( 1 ); // obf
		} // obf

		/* // obf
		 * If template_redirect has already happened, it's too late for wp_die()/dead_db(). // obf
		 * Let's just return and hope for the best. // obf
		 */ // obf
		if ( did_action( 'template_redirect' ) ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_jdmiy ) { // obf
			return false; // obf
		} // obf

		wp_load_translations_early(); // obf

		$v_bwpsf = '<h1>' . __( 'Error reconnecting to the database' ) . "</h1>\n"; // obf

		$v_bwpsf .= '<p>' . sprintf( // obf
			/* translators: %s: Database host. */ // obf
			__( 'This means that the contact with the database server at %s was lost. This could mean your host&#8217;s database server is down.' ), // obf
			'<code>' . htmlspecialchars( $v_mechx->dbhost, ENT_QUOTES ) . '</code>' // obf
		) . "</p>\n"; // obf

		$v_bwpsf .= "<ul>\n"; // obf
		$v_bwpsf .= '<li>' . __( 'Are you sure the database server is running?' ) . "</li>\n"; // obf
		$v_bwpsf .= '<li>' . __( 'Are you sure the database server is not under particularly heavy load?' ) . "</li>\n"; // obf
		$v_bwpsf .= "</ul>\n"; // obf

		$v_bwpsf .= '<p>' . sprintf( // obf
			/* translators: %s: Support forums URL. */ // obf
			__( 'If you are unsure what these terms mean you should probably contact your host. If you still need help you can always visit the <a href="%s">WordPress support forums</a>.' ), // obf
			__( 'https://wordpress.org/support/forums/' ) // obf
		) . "</p>\n"; // obf

		// We weren't able to reconnect, so we better bail. // obf
		$v_mechx->bail( $v_bwpsf, 'db_connect_fail' ); // obf

		/* // obf
		 * Call dead_db() if bail didn't die, because this database is no more. // obf
		 * It has ceased to be (at least temporarily). // obf
		 */ // obf
		dead_db(); // obf
	} // obf

	/** // obf
	 * Performs a database query, using current database connection. // obf
	 * // obf
	 * More information can be found on the documentation page. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @link https://developer.wordpress.org/reference/classes/wpdb/ // obf
	 * // obf
	 * @param string $v_cwqht Database query. // obf
	 * @return int|bool Boolean true for CREATE, ALTER, TRUNCATE and DROP queries. Number of rows // obf
	 *                  affected/selected for all other queries. Boolean false on error. // obf
	 */ // obf
	public function query( $v_cwqht ) { // obf
		if ( ! $v_mechx->ready ) { // obf
			$v_mechx->check_current_query = true; // obf
			return false; // obf
		} // obf

		/** // obf
		 * Filters the database query. // obf
		 * // obf
		 * Some queries are made before the plugins have been loaded, // obf
		 * and thus cannot be filtered with this method. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param string $v_cwqht Database query. // obf
		 */ // obf
		$v_cwqht = apply_filters( 'query', $v_cwqht ); // obf

		if ( ! $v_cwqht ) { // obf
			$v_mechx->insert_id = 0; // obf
			return false; // obf
		} // obf

		$v_mechx->flush(); // obf

		// Log how the function was called. // obf
		$v_mechx->func_call = "\$v_xaiad->query(\"$v_cwqht\")"; // obf

		// If we're writing to the database, make sure the query will write safely. // obf
		if ( $v_mechx->check_current_query && ! $v_mechx->check_ascii( $v_cwqht ) ) { // obf
			$v_umhpd = $v_mechx->strip_invalid_text_from_query( $v_cwqht ); // obf
			/* // obf
			 * strip_invalid_text_from_query() can perform queries, so we need // obf
			 * to flush again, just to make sure everything is clear. // obf
			 */ // obf
			$v_mechx->flush(); // obf
			if ( $v_umhpd !== $v_cwqht ) { // obf
				$v_mechx->insert_id  = 0; // obf
				$v_mechx->last_query = $v_cwqht; // obf

				wp_load_translations_early(); // obf

				$v_mechx->last_error = __( 'WordPress database error: Could not perform query because it contains invalid data.' ); // obf

				return false; // obf
			} // obf
		} // obf

		$v_mechx->check_current_query = true; // obf

		// Keep track of the last query for debug. // obf
		$v_mechx->last_query = $v_cwqht; // obf

		$v_mechx->_do_query( $v_cwqht ); // obf

		// Database server has gone away, try to reconnect. // obf
		$v_ehxgv = 0; // obf

		if ( $v_mechx->dbh instanceof mysqli ) { // obf
			$v_ehxgv = mysqli_errno( $v_mechx->dbh ); // obf
		} else { // obf
			/* // obf
			 * $v_bkacl is defined, but isn't a real connection. // obf
			 * Something has gone horribly wrong, let's try a reconnect. // obf
			 */ // obf
			$v_ehxgv = 2006; // obf
		} // obf

		if ( empty( $v_mechx->dbh ) || 2006 === $v_ehxgv ) { // obf
			if ( $v_mechx->check_connection() ) { // obf
				$v_mechx->_do_query( $v_cwqht ); // obf
			} else { // obf
				$v_mechx->insert_id = 0; // obf
				return false; // obf
			} // obf
		} // obf

		// If there is an error then take note of it. // obf
		if ( $v_mechx->dbh instanceof mysqli ) { // obf
			$v_mechx->last_error = mysqli_error( $v_mechx->dbh ); // obf
		} else { // obf
			$v_mechx->last_error = __( 'Unable to retrieve the error message from MySQL' ); // obf
		} // obf

		if ( $v_mechx->last_error ) { // obf
			// Clear insert_id on a subsequent failed insert. // obf
			if ( $v_mechx->insert_id && preg_match( '/^\s*(insert|replace)\s/i', $v_cwqht ) ) { // obf
				$v_mechx->insert_id = 0; // obf
			} // obf

			$v_mechx->print_error(); // obf
			return false; // obf
		} // obf

		if ( preg_match( '/^\s*(create|alter|truncate|drop)\s/i', $v_cwqht ) ) { // obf
			$v_gxtxl = $v_mechx->result; // obf
		} elseif ( preg_match( '/^\s*(insert|delete|update|replace)\s/i', $v_cwqht ) ) { // obf
			$v_mechx->rows_affected = mysqli_affected_rows( $v_mechx->dbh ); // obf

			// Take note of the insert_id. // obf
			if ( preg_match( '/^\s*(insert|replace)\s/i', $v_cwqht ) ) { // obf
				$v_mechx->insert_id = mysqli_insert_id( $v_mechx->dbh ); // obf
			} // obf

			// Return number of rows affected. // obf
			$v_gxtxl = $v_mechx->rows_affected; // obf
		} else { // obf
			$v_crfok = 0; // obf

			if ( $v_mechx->result instanceof mysqli_result ) { // obf
				while ( $v_vxdji = mysqli_fetch_object( $v_mechx->result ) ) { // obf
					$v_mechx->last_result[ $v_crfok ] = $v_vxdji; // obf
					++$v_crfok; // obf
				} // obf
			} // obf

			// Log and return the number of rows selected. // obf
			$v_mechx->num_rows = $v_crfok; // obf
			$v_gxtxl     = $v_crfok; // obf
		} // obf

		return $v_gxtxl; // obf
	} // obf

	/** // obf
	 * Internal function to perform the mysqli_query() call. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @see wpdb::query() // obf
	 * // obf
	 * @param string $v_cwqht The query to run. // obf
	 */ // obf
	private function _do_query( $v_cwqht ) { // obf
		if ( defined( 'SAVEQUERIES' ) && SAVEQUERIES ) { // obf
			$v_mechx->timer_start(); // obf
		} // obf

		if ( ! empty( $v_mechx->dbh ) ) { // obf
			$v_mechx->result = mysqli_query( $v_mechx->dbh, $v_cwqht ); // obf
		} // obf

		++$v_mechx->num_queries; // obf

		if ( defined( 'SAVEQUERIES' ) && SAVEQUERIES ) { // obf
			$v_mechx->log_query( // obf
				$v_cwqht, // obf
				$v_mechx->timer_stop(), // obf
				$v_mechx->get_caller(), // obf
				$v_mechx->time_start, // obf
				array() // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Logs query data. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_cwqht           The query's SQL. // obf
	 * @param float  $v_reyij      Total time spent on the query, in seconds. // obf
	 * @param string $v_ymhkr Comma-separated list of the calling functions. // obf
	 * @param float  $v_llsbl     Unix timestamp of the time at the start of the query. // obf
	 * @param array  $v_tfuls      Custom query data. // obf
	 */ // obf
	public function log_query( $v_cwqht, $v_reyij, $v_ymhkr, $v_llsbl, $v_tfuls ) { // obf
		/** // obf
		 * Filters the custom data to log alongside a query. // obf
		 * // obf
		 * Caution should be used when modifying any of this data, it is recommended that any additional // obf
		 * information you need to store about a query be added as a new associative array element. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * // obf
		 * @param array  $v_tfuls      Custom query data. // obf
		 * @param string $v_cwqht           The query's SQL. // obf
		 * @param float  $v_reyij      Total time spent on the query, in seconds. // obf
		 * @param string $v_ymhkr Comma-separated list of the calling functions. // obf
		 * @param float  $v_llsbl     Unix timestamp of the time at the start of the query. // obf
		 */ // obf
		$v_tfuls = apply_filters( 'log_query_custom_data', $v_tfuls, $v_cwqht, $v_reyij, $v_ymhkr, $v_llsbl ); // obf

		$v_mechx->queries[] = array( // obf
			$v_cwqht, // obf
			$v_reyij, // obf
			$v_ymhkr, // obf
			$v_llsbl, // obf
			$v_tfuls, // obf
		); // obf
	} // obf

	/** // obf
	 * Generates and returns a placeholder escape string for use in queries returned by ::prepare(). // obf
	 * // obf
	 * @since 4.8.3 // obf
	 * // obf
	 * @return string String to escape placeholders. // obf
	 */ // obf
	public function placeholder_escape() { // obf
		static $v_iptnl; // obf

		if ( ! $v_iptnl ) { // obf
			// Old WP installs may not have AUTH_SALT defined. // obf
			$v_oiyxc = defined( 'AUTH_SALT' ) && AUTH_SALT ? AUTH_SALT : (string) rand(); // obf

			$v_iptnl = '{' . hash_hmac( 'sha256', uniqid( $v_oiyxc, true ), $v_oiyxc ) . '}'; // obf
		} // obf

		/* // obf
		 * Add the filter to remove the placeholder escaper. Uses priority 0, so that anything // obf
		 * else attached to this filter will receive the query with the placeholder string removed. // obf
		 */ // obf
		if ( false === has_filter( 'query', array( $v_mechx, 'remove_placeholder_escape' ) ) ) { // obf
			add_filter( 'query', array( $v_mechx, 'remove_placeholder_escape' ), 0 ); // obf
		} // obf

		return $v_iptnl; // obf
	} // obf

	/** // obf
	 * Adds a placeholder escape string, to escape anything that resembles a printf() placeholder. // obf
	 * // obf
	 * @since 4.8.3 // obf
	 * // obf
	 * @param string $v_cwqht The query to escape. // obf
	 * @return string The query with the placeholder escape string inserted where necessary. // obf
	 */ // obf
	public function add_placeholder_escape( $v_cwqht ) { // obf
		/* // obf
		 * To prevent returning anything that even vaguely resembles a placeholder, // obf
		 * we clobber every % we can find. // obf
		 */ // obf
		return str_replace( '%', $v_mechx->placeholder_escape(), $v_cwqht ); // obf
	} // obf

	/** // obf
	 * Removes the placeholder escape strings from a query. // obf
	 * // obf
	 * @since 4.8.3 // obf
	 * // obf
	 * @param string $v_cwqht The query from which the placeholder will be removed. // obf
	 * @return string The query with the placeholder removed. // obf
	 */ // obf
	public function remove_placeholder_escape( $v_cwqht ) { // obf
		return str_replace( $v_mechx->placeholder_escape(), '%', $v_cwqht ); // obf
	} // obf

	/** // obf
	 * Inserts a row into the table. // obf
	 * // obf
	 * Examples: // obf
	 * // obf
	 *     $v_yruze->insert( // obf
	 *         'table', // obf
	 *         array( // obf
	 *             'column1' => 'foo', // obf
	 *             'column2' => 'bar', // obf
	 *         ) // obf
	 *     ); // obf
	 *     $v_yruze->insert( // obf
	 *         'table', // obf
	 *         array( // obf
	 *             'column1' => 'foo', // obf
	 *             'column2' => 1337, // obf
	 *         ), // obf
	 *         array( // obf
	 *             '%s', // obf
	 *             '%d', // obf
	 *         ) // obf
	 *     ); // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @see wpdb::prepare() // obf
	 * @see wpdb::$v_vtubp // obf
	 * @see wp_set_wpdb_vars() // obf
	 * // obf
	 * @param string          $v_upzae  Table name. // obf
	 * @param array           $v_bebya   Data to insert (in column => value pairs). // obf
	 *                                Both `$v_bebya` columns and `$v_bebya` values should be "raw" (neither should be SQL escaped). // obf
	 *                                Sending a null value will cause the column to be set to NULL - the corresponding // obf
	 *                                format is ignored in this case. // obf
	 * @param string[]|string $v_yxtun Optional. An array of formats to be mapped to each of the value in `$v_bebya`. // obf
	 *                                If string, that format will be used for all of the values in `$v_bebya`. // obf
	 *                                A format is one of '%d', '%f', '%s' (integer, float, string). // obf
	 *                                If omitted, all values in `$v_bebya` will be treated as strings unless otherwise // obf
	 *                                specified in wpdb::$v_vtubp. Default null. // obf
	 * @return int|false The number of rows inserted, or false on error. // obf
	 */ // obf
	public function insert( $v_upzae, $v_bebya, $v_yxtun = null ) { // obf
		return $v_mechx->_insert_replace_helper( $v_upzae, $v_bebya, $v_yxtun, 'INSERT' ); // obf
	} // obf

	/** // obf
	 * Replaces a row in the table or inserts it if it does not exist, based on a PRIMARY KEY or a UNIQUE index. // obf
	 * // obf
	 * A REPLACE works exactly like an INSERT, except that if an old row in the table has the same value as a new row // obf
	 * for a PRIMARY KEY or a UNIQUE index, the old row is deleted before the new row is inserted. // obf
	 * // obf
	 * Examples: // obf
	 * // obf
	 *     $v_yruze->replace( // obf
	 *         'table', // obf
	 *         array( // obf
	 *             'ID'      => 123, // obf
	 *             'column1' => 'foo', // obf
	 *             'column2' => 'bar', // obf
	 *         ) // obf
	 *     ); // obf
	 *     $v_yruze->replace( // obf
	 *         'table', // obf
	 *         array( // obf
	 *             'ID'      => 456, // obf
	 *             'column1' => 'foo', // obf
	 *             'column2' => 1337, // obf
	 *         ), // obf
	 *         array( // obf
	 *             '%d', // obf
	 *             '%s', // obf
	 *             '%d', // obf
	 *         ) // obf
	 *     ); // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wpdb::prepare() // obf
	 * @see wpdb::$v_vtubp // obf
	 * @see wp_set_wpdb_vars() // obf
	 * // obf
	 * @param string          $v_upzae  Table name. // obf
	 * @param array           $v_bebya   Data to insert (in column => value pairs). // obf
	 *                                Both `$v_bebya` columns and `$v_bebya` values should be "raw" (neither should be SQL escaped). // obf
	 *                                A primary key or unique index is required to perform a replace operation. // obf
	 *                                Sending a null value will cause the column to be set to NULL - the corresponding // obf
	 *                                format is ignored in this case. // obf
	 * @param string[]|string $v_yxtun Optional. An array of formats to be mapped to each of the value in `$v_bebya`. // obf
	 *                                If string, that format will be used for all of the values in `$v_bebya`. // obf
	 *                                A format is one of '%d', '%f', '%s' (integer, float, string). // obf
	 *                                If omitted, all values in `$v_bebya` will be treated as strings unless otherwise // obf
	 *                                specified in wpdb::$v_vtubp. Default null. // obf
	 * @return int|false The number of rows affected, or false on error. // obf
	 */ // obf
	public function replace( $v_upzae, $v_bebya, $v_yxtun = null ) { // obf
		return $v_mechx->_insert_replace_helper( $v_upzae, $v_bebya, $v_yxtun, 'REPLACE' ); // obf
	} // obf

	/** // obf
	 * Helper function for insert and replace. // obf
	 * // obf
	 * Runs an insert or replace query based on `$v_niukd` argument. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wpdb::prepare() // obf
	 * @see wpdb::$v_vtubp // obf
	 * @see wp_set_wpdb_vars() // obf
	 * // obf
	 * @param string          $v_upzae  Table name. // obf
	 * @param array           $v_bebya   Data to insert (in column => value pairs). // obf
	 *                                Both `$v_bebya` columns and `$v_bebya` values should be "raw" (neither should be SQL escaped). // obf
	 *                                Sending a null value will cause the column to be set to NULL - the corresponding // obf
	 *                                format is ignored in this case. // obf
	 * @param string[]|string $v_yxtun Optional. An array of formats to be mapped to each of the value in `$v_bebya`. // obf
	 *                                If string, that format will be used for all of the values in `$v_bebya`. // obf
	 *                                A format is one of '%d', '%f', '%s' (integer, float, string). // obf
	 *                                If omitted, all values in `$v_bebya` will be treated as strings unless otherwise // obf
	 *                                specified in wpdb::$v_vtubp. Default null. // obf
	 * @param string          $v_niukd   Optional. Type of operation. Either 'INSERT' or 'REPLACE'. // obf
	 *                                Default 'INSERT'. // obf
	 * @return int|false The number of rows affected, or false on error. // obf
	 */ // obf
	public function _insert_replace_helper( $v_upzae, $v_bebya, $v_yxtun = null, $v_niukd = 'INSERT' ) { // obf
		$v_mechx->insert_id = 0; // obf

		if ( ! in_array( strtoupper( $v_niukd ), array( 'REPLACE', 'INSERT' ), true ) ) { // obf
			return false; // obf
		} // obf

		$v_bebya = $v_mechx->process_fields( $v_upzae, $v_bebya, $v_yxtun ); // obf
		if ( false === $v_bebya ) { // obf
			return false; // obf
		} // obf

		$v_qofyc = array(); // obf
		$v_qootx  = array(); // obf
		foreach ( $v_bebya as $v_xqcew ) { // obf
			if ( is_null( $v_xqcew['value'] ) ) { // obf
				$v_qofyc[] = 'NULL'; // obf
				continue; // obf
			} // obf

			$v_qofyc[] = $v_xqcew['format']; // obf
			$v_qootx[]  = $v_xqcew['value']; // obf
		} // obf

		$v_yjjxl  = '`' . implode( '`, `', array_keys( $v_bebya ) ) . '`'; // obf
		$v_qofyc = implode( ', ', $v_qofyc ); // obf

		$v_lvcvb = "$v_niukd INTO `$v_upzae` ($v_yjjxl) VALUES ($v_qofyc)"; // obf

		$v_mechx->check_current_query = false; // obf
		return $v_mechx->query( $v_mechx->prepare( $v_lvcvb, $v_qootx ) ); // obf
	} // obf

	/** // obf
	 * Updates a row in the table. // obf
	 * // obf
	 * Examples: // obf
	 * // obf
	 *     $v_yruze->update( // obf
	 *         'table', // obf
	 *         array( // obf
	 *             'column1' => 'foo', // obf
	 *             'column2' => 'bar', // obf
	 *         ), // obf
	 *         array( // obf
	 *             'ID' => 1, // obf
	 *         ) // obf
	 *     ); // obf
	 *     $v_yruze->update( // obf
	 *         'table', // obf
	 *         array( // obf
	 *             'column1' => 'foo', // obf
	 *             'column2' => 1337, // obf
	 *         ), // obf
	 *         array( // obf
	 *             'ID' => 1, // obf
	 *         ), // obf
	 *         array( // obf
	 *             '%s', // obf
	 *             '%d', // obf
	 *         ), // obf
	 *         array( // obf
	 *             '%d', // obf
	 *         ) // obf
	 *     ); // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @see wpdb::prepare() // obf
	 * @see wpdb::$v_vtubp // obf
	 * @see wp_set_wpdb_vars() // obf
	 * // obf
	 * @param string       $v_upzae           Table name. // obf
	 * @param array        $v_bebya            Data to update (in column => value pairs). // obf
	 *                                      Both $v_bebya columns and $v_bebya values should be "raw" (neither should be SQL escaped). // obf
	 *                                      Sending a null value will cause the column to be set to NULL - the corresponding // obf
	 *                                      format is ignored in this case. // obf
	 * @param array        $v_qlvrx           A named array of WHERE clauses (in column => value pairs). // obf
	 *                                      Multiple clauses will be joined with ANDs. // obf
	 *                                      Both $v_qlvrx columns and $v_qlvrx values should be "raw". // obf
	 *                                      Sending a null value will create an IS NULL comparison - the corresponding // obf
	 *                                      format will be ignored in this case. // obf
	 * @param string[]|string $v_yxtun       Optional. An array of formats to be mapped to each of the values in $v_bebya. // obf
	 *                                      If string, that format will be used for all of the values in $v_bebya. // obf
	 *                                      A format is one of '%d', '%f', '%s' (integer, float, string). // obf
	 *                                      If omitted, all values in $v_bebya will be treated as strings unless otherwise // obf
	 *                                      specified in wpdb::$v_vtubp. Default null. // obf
	 * @param string[]|string $v_adfrh Optional. An array of formats to be mapped to each of the values in $v_qlvrx. // obf
	 *                                      If string, that format will be used for all of the items in $v_qlvrx. // obf
	 *                                      A format is one of '%d', '%f', '%s' (integer, float, string). // obf
	 *                                      If omitted, all values in $v_qlvrx will be treated as strings unless otherwise // obf
	 *                                      specified in wpdb::$v_vtubp. Default null. // obf
	 * @return int|false The number of rows updated, or false on error. // obf
	 */ // obf
	public function update( $v_upzae, $v_bebya, $v_qlvrx, $v_yxtun = null, $v_adfrh = null ) { // obf
		if ( ! is_array( $v_bebya ) || ! is_array( $v_qlvrx ) ) { // obf
			return false; // obf
		} // obf

		$v_bebya = $v_mechx->process_fields( $v_upzae, $v_bebya, $v_yxtun ); // obf
		if ( false === $v_bebya ) { // obf
			return false; // obf
		} // obf
		$v_qlvrx = $v_mechx->process_fields( $v_upzae, $v_qlvrx, $v_adfrh ); // obf
		if ( false === $v_qlvrx ) { // obf
			return false; // obf
		} // obf

		$v_yjjxl     = array(); // obf
		$v_jjrua = array(); // obf
		$v_qootx     = array(); // obf
		foreach ( $v_bebya as $v_wxiuf => $v_xqcew ) { // obf
			if ( is_null( $v_xqcew['value'] ) ) { // obf
				$v_yjjxl[] = "`$v_wxiuf` = NULL"; // obf
				continue; // obf
			} // obf

			$v_yjjxl[] = "`$v_wxiuf` = " . $v_xqcew['format']; // obf
			$v_qootx[] = $v_xqcew['value']; // obf
		} // obf
		foreach ( $v_qlvrx as $v_wxiuf => $v_xqcew ) { // obf
			if ( is_null( $v_xqcew['value'] ) ) { // obf
				$v_jjrua[] = "`$v_wxiuf` IS NULL"; // obf
				continue; // obf
			} // obf

			$v_jjrua[] = "`$v_wxiuf` = " . $v_xqcew['format']; // obf
			$v_qootx[]     = $v_xqcew['value']; // obf
		} // obf

		$v_yjjxl     = implode( ', ', $v_yjjxl ); // obf
		$v_jjrua = implode( ' AND ', $v_jjrua ); // obf

		$v_lvcvb = "UPDATE `$v_upzae` SET $v_yjjxl WHERE $v_jjrua"; // obf

		$v_mechx->check_current_query = false; // obf
		return $v_mechx->query( $v_mechx->prepare( $v_lvcvb, $v_qootx ) ); // obf
	} // obf

	/** // obf
	 * Deletes a row in the table. // obf
	 * // obf
	 * Examples: // obf
	 * // obf
	 *     $v_yruze->delete( // obf
	 *         'table', // obf
	 *         array( // obf
	 *             'ID' => 1, // obf
	 *         ) // obf
	 *     ); // obf
	 *     $v_yruze->delete( // obf
	 *         'table', // obf
	 *         array( // obf
	 *             'ID' => 1, // obf
	 *         ), // obf
	 *         array( // obf
	 *             '%d', // obf
	 *         ) // obf
	 *     ); // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see wpdb::prepare() // obf
	 * @see wpdb::$v_vtubp // obf
	 * @see wp_set_wpdb_vars() // obf
	 * // obf
	 * @param string          $v_upzae        Table name. // obf
	 * @param array           $v_qlvrx        A named array of WHERE clauses (in column => value pairs). // obf
	 *                                      Multiple clauses will be joined with ANDs. // obf
	 *                                      Both $v_qlvrx columns and $v_qlvrx values should be "raw". // obf
	 *                                      Sending a null value will create an IS NULL comparison - the corresponding // obf
	 *                                      format will be ignored in this case. // obf
	 * @param string[]|string $v_adfrh Optional. An array of formats to be mapped to each of the values in $v_qlvrx. // obf
	 *                                      If string, that format will be used for all of the items in $v_qlvrx. // obf
	 *                                      A format is one of '%d', '%f', '%s' (integer, float, string). // obf
	 *                                      If omitted, all values in $v_bebya will be treated as strings unless otherwise // obf
	 *                                      specified in wpdb::$v_vtubp. Default null. // obf
	 * @return int|false The number of rows deleted, or false on error. // obf
	 */ // obf
	public function delete( $v_upzae, $v_qlvrx, $v_adfrh = null ) { // obf
		if ( ! is_array( $v_qlvrx ) ) { // obf
			return false; // obf
		} // obf

		$v_qlvrx = $v_mechx->process_fields( $v_upzae, $v_qlvrx, $v_adfrh ); // obf
		if ( false === $v_qlvrx ) { // obf
			return false; // obf
		} // obf

		$v_jjrua = array(); // obf
		$v_qootx     = array(); // obf
		foreach ( $v_qlvrx as $v_wxiuf => $v_xqcew ) { // obf
			if ( is_null( $v_xqcew['value'] ) ) { // obf
				$v_jjrua[] = "`$v_wxiuf` IS NULL"; // obf
				continue; // obf
			} // obf

			$v_jjrua[] = "`$v_wxiuf` = " . $v_xqcew['format']; // obf
			$v_qootx[]     = $v_xqcew['value']; // obf
		} // obf

		$v_jjrua = implode( ' AND ', $v_jjrua ); // obf

		$v_lvcvb = "DELETE FROM `$v_upzae` WHERE $v_jjrua"; // obf

		$v_mechx->check_current_query = false; // obf
		return $v_mechx->query( $v_mechx->prepare( $v_lvcvb, $v_qootx ) ); // obf
	} // obf

	/** // obf
	 * Processes arrays of field/value pairs and field formats. // obf
	 * // obf
	 * This is a helper method for wpdb's CRUD methods, which take field/value pairs // obf
	 * for inserts, updates, and where clauses. This method first pairs each value // obf
	 * with a format. Then it determines the charset of that field, using that // obf
	 * to determine if any invalid text would be stripped. If text is stripped, // obf
	 * then field processing is rejected and the query fails. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string          $v_upzae  Table name. // obf
	 * @param array           $v_bebya   Array of values keyed by their field names. // obf
	 * @param string[]|string $v_yxtun Formats or format to be mapped to the values in the data. // obf
	 * @return array|false An array of fields that contain paired value and formats. // obf
	 *                     False for invalid values. // obf
	 */ // obf
	protected function process_fields( $v_upzae, $v_bebya, $v_yxtun ) { // obf
		$v_bebya = $v_mechx->process_field_formats( $v_bebya, $v_yxtun ); // obf
		if ( false === $v_bebya ) { // obf
			return false; // obf
		} // obf

		$v_bebya = $v_mechx->process_field_charsets( $v_bebya, $v_upzae ); // obf
		if ( false === $v_bebya ) { // obf
			return false; // obf
		} // obf

		$v_bebya = $v_mechx->process_field_lengths( $v_bebya, $v_upzae ); // obf
		if ( false === $v_bebya ) { // obf
			return false; // obf
		} // obf

		$v_zzgto = $v_mechx->strip_invalid_text( $v_bebya ); // obf

		if ( $v_bebya !== $v_zzgto ) { // obf

			$v_igtme = array(); // obf
			foreach ( $v_bebya as $v_wxiuf => $v_xqcew ) { // obf
				if ( $v_xqcew !== $v_zzgto[ $v_wxiuf ] ) { // obf
					$v_igtme[] = $v_wxiuf; // obf
				} // obf
			} // obf

			wp_load_translations_early(); // obf

			if ( 1 === count( $v_igtme ) ) { // obf
				$v_mechx->last_error = sprintf( // obf
					/* translators: %s: Database field where the error occurred. */ // obf
					__( 'WordPress database error: Processing the value for the following field failed: %s. The supplied value may be too long or contains invalid data.' ), // obf
					reset( $v_igtme ) // obf
				); // obf
			} else { // obf
				$v_mechx->last_error = sprintf( // obf
					/* translators: %s: Database fields where the error occurred. */ // obf
					__( 'WordPress database error: Processing the values for the following fields failed: %s. The supplied values may be too long or contain invalid data.' ), // obf
					implode( ', ', $v_igtme ) // obf
				); // obf
			} // obf

			return false; // obf
		} // obf

		return $v_bebya; // obf
	} // obf

	/** // obf
	 * Prepares arrays of value/format pairs as passed to wpdb CRUD methods. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param array           $v_bebya   Array of values keyed by their field names. // obf
	 * @param string[]|string $v_yxtun Formats or format to be mapped to the values in the data. // obf
	 * @return array { // obf
	 *     Array of values and formats keyed by their field names. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Value and format for this field. // obf
	 * // obf
	 *         @type mixed  $v_xqcew  The value to be formatted. // obf
	 *         @type string $v_yxtun The format to be mapped to the value. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	protected function process_field_formats( $v_bebya, $v_yxtun ) { // obf
		$v_qofyc          = (array) $v_yxtun; // obf
		$v_kuhrf = $v_qofyc; // obf

		foreach ( $v_bebya as $v_wxiuf => $v_xqcew ) { // obf
			$v_xqcew = array( // obf
				'value'  => $v_xqcew, // obf
				'format' => '%s', // obf
			); // obf

			if ( ! empty( $v_yxtun ) ) { // obf
				$v_xqcew['format'] = array_shift( $v_qofyc ); // obf
				if ( ! $v_xqcew['format'] ) { // obf
					$v_xqcew['format'] = reset( $v_kuhrf ); // obf
				} // obf
			} elseif ( isset( $v_mechx->field_types[ $v_wxiuf ] ) ) { // obf
				$v_xqcew['format'] = $v_mechx->field_types[ $v_wxiuf ]; // obf
			} // obf

			$v_bebya[ $v_wxiuf ] = $v_xqcew; // obf
		} // obf

		return $v_bebya; // obf
	} // obf

	/** // obf
	 * Adds field charsets to field/value/format arrays generated by wpdb::process_field_formats(). // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param array $v_bebya { // obf
	 *     Array of values and formats keyed by their field names, // obf
	 *     as it comes from the wpdb::process_field_formats() method. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Value and format for this field. // obf
	 * // obf
	 *         @type mixed  $v_xqcew  The value to be formatted. // obf
	 *         @type string $v_yxtun The format to be mapped to the value. // obf
	 *     } // obf
	 * } // obf
	 * @param string $v_upzae Table name. // obf
	 * @return array|false { // obf
	 *     The same array of data with additional 'charset' keys, or false if // obf
	 *     the charset for the table cannot be found. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Value, format, and charset for this field. // obf
	 * // obf
	 *         @type mixed        $v_xqcew   The value to be formatted. // obf
	 *         @type string       $v_yxtun  The format to be mapped to the value. // obf
	 *         @type string|false $v_vkrpz The charset to be used for the value. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	protected function process_field_charsets( $v_bebya, $v_upzae ) { // obf
		foreach ( $v_bebya as $v_wxiuf => $v_xqcew ) { // obf
			if ( '%d' === $v_xqcew['format'] || '%f' === $v_xqcew['format'] ) { // obf
				/* // obf
				 * We can skip this field if we know it isn't a string. // obf
				 * This checks %d/%f versus ! %s because its sprintf() could take more. // obf
				 */ // obf
				$v_xqcew['charset'] = false; // obf
			} else { // obf
				$v_xqcew['charset'] = $v_mechx->get_col_charset( $v_upzae, $v_wxiuf ); // obf
				if ( is_wp_error( $v_xqcew['charset'] ) ) { // obf
					return false; // obf
				} // obf
			} // obf

			$v_bebya[ $v_wxiuf ] = $v_xqcew; // obf
		} // obf

		return $v_bebya; // obf
	} // obf

	/** // obf
	 * For string fields, records the maximum string length that field can safely save. // obf
	 * // obf
	 * @since 4.2.1 // obf
	 * // obf
	 * @param array $v_bebya { // obf
	 *     Array of values, formats, and charsets keyed by their field names, // obf
	 *     as it comes from the wpdb::process_field_charsets() method. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Value, format, and charset for this field. // obf
	 * // obf
	 *         @type mixed        $v_xqcew   The value to be formatted. // obf
	 *         @type string       $v_yxtun  The format to be mapped to the value. // obf
	 *         @type string|false $v_vkrpz The charset to be used for the value. // obf
	 *     } // obf
	 * } // obf
	 * @param string $v_upzae Table name. // obf
	 * @return array|false { // obf
	 *     The same array of data with additional 'length' keys, or false if // obf
	 *     information for the table cannot be found. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Value, format, charset, and length for this field. // obf
	 * // obf
	 *         @type mixed        $v_xqcew   The value to be formatted. // obf
	 *         @type string       $v_yxtun  The format to be mapped to the value. // obf
	 *         @type string|false $v_vkrpz The charset to be used for the value. // obf
	 *         @type array|false  $v_prnxz  { // obf
	 *             Information about the maximum length of the value. // obf
	 *             False if the column has no length. // obf
	 * // obf
	 *             @type string $v_niukd   One of 'byte' or 'char'. // obf
	 *             @type int    $v_prnxz The column length. // obf
	 *         } // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	protected function process_field_lengths( $v_bebya, $v_upzae ) { // obf
		foreach ( $v_bebya as $v_wxiuf => $v_xqcew ) { // obf
			if ( '%d' === $v_xqcew['format'] || '%f' === $v_xqcew['format'] ) { // obf
				/* // obf
				 * We can skip this field if we know it isn't a string. // obf
				 * This checks %d/%f versus ! %s because its sprintf() could take more. // obf
				 */ // obf
				$v_xqcew['length'] = false; // obf
			} else { // obf
				$v_xqcew['length'] = $v_mechx->get_col_length( $v_upzae, $v_wxiuf ); // obf
				if ( is_wp_error( $v_xqcew['length'] ) ) { // obf
					return false; // obf
				} // obf
			} // obf

			$v_bebya[ $v_wxiuf ] = $v_xqcew; // obf
		} // obf

		return $v_bebya; // obf
	} // obf

	/** // obf
	 * Retrieves one value from the database. // obf
	 * // obf
	 * Executes a SQL query and returns the value from the SQL result. // obf
	 * If the SQL result contains more than one column and/or more than one row, // obf
	 * the value in the column and row specified is returned. If $v_cwqht is null, // obf
	 * the value in the specified column and row from the previous SQL result is returned. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string|null $v_cwqht Optional. SQL query. Defaults to null, use the result from the previous query. // obf
	 * @param int         $v_jvcyb     Optional. Column of value to return. Indexed from 0. Default 0. // obf
	 * @param int         $v_cbrqm     Optional. Row of value to return. Indexed from 0. Default 0. // obf
	 * @return string|null Database query result (as string), or null on failure. // obf
	 */ // obf
	public function get_var( $v_cwqht = null, $v_jvcyb = 0, $v_cbrqm = 0 ) { // obf
		$v_mechx->func_call = "\$v_xaiad->get_var(\"$v_cwqht\", $v_jvcyb, $v_cbrqm)"; // obf

		if ( $v_cwqht ) { // obf
			if ( $v_mechx->check_current_query && $v_mechx->check_safe_collation( $v_cwqht ) ) { // obf
				$v_mechx->check_current_query = false; // obf
			} // obf

			$v_mechx->query( $v_cwqht ); // obf
		} // obf

		// Extract var out of cached results based on x,y vals. // obf
		if ( ! empty( $v_mechx->last_result[ $v_cbrqm ] ) ) { // obf
			$v_qootx = array_values( get_object_vars( $v_mechx->last_result[ $v_cbrqm ] ) ); // obf
		} // obf

		// If there is a value return it, else return null. // obf
		return ( isset( $v_qootx[ $v_jvcyb ] ) && '' !== $v_qootx[ $v_jvcyb ] ) ? $v_qootx[ $v_jvcyb ] : null; // obf
	} // obf

	/** // obf
	 * Retrieves one row from the database. // obf
	 * // obf
	 * Executes a SQL query and returns the row from the SQL result. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string|null $v_cwqht  SQL query. // obf
	 * @param string      $v_sfmeb Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which // obf
	 *                            correspond to an stdClass object, an associative array, or a numeric array, // obf
	 *                            respectively. Default OBJECT. // obf
	 * @param int         $v_cbrqm      Optional. Row to return. Indexed from 0. Default 0. // obf
	 * @return array|object|null|void Database query result in format specified by $v_sfmeb or null on failure. // obf
	 */ // obf
	public function get_row( $v_cwqht = null, $v_sfmeb = OBJECT, $v_cbrqm = 0 ) { // obf
		$v_mechx->func_call = "\$v_xaiad->get_row(\"$v_cwqht\",$v_sfmeb,$v_cbrqm)"; // obf

		if ( $v_cwqht ) { // obf
			if ( $v_mechx->check_current_query && $v_mechx->check_safe_collation( $v_cwqht ) ) { // obf
				$v_mechx->check_current_query = false; // obf
			} // obf

			$v_mechx->query( $v_cwqht ); // obf
		} else { // obf
			return null; // obf
		} // obf

		if ( ! isset( $v_mechx->last_result[ $v_cbrqm ] ) ) { // obf
			return null; // obf
		} // obf

		if ( OBJECT === $v_sfmeb ) { // obf
			return $v_mechx->last_result[ $v_cbrqm ] ? $v_mechx->last_result[ $v_cbrqm ] : null; // obf
		} elseif ( ARRAY_A === $v_sfmeb ) { // obf
			return $v_mechx->last_result[ $v_cbrqm ] ? get_object_vars( $v_mechx->last_result[ $v_cbrqm ] ) : null; // obf
		} elseif ( ARRAY_N === $v_sfmeb ) { // obf
			return $v_mechx->last_result[ $v_cbrqm ] ? array_values( get_object_vars( $v_mechx->last_result[ $v_cbrqm ] ) ) : null; // obf
		} elseif ( OBJECT === strtoupper( $v_sfmeb ) ) { // obf
			// Back compat for OBJECT being previously case-insensitive. // obf
			return $v_mechx->last_result[ $v_cbrqm ] ? $v_mechx->last_result[ $v_cbrqm ] : null; // obf
		} else { // obf
			$v_mechx->print_error( ' $v_xaiad->get_row(string query, output type, int offset) -- Output type must be one of: OBJECT, ARRAY_A, ARRAY_N' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves one column from the database. // obf
	 * // obf
	 * Executes a SQL query and returns the column from the SQL result. // obf
	 * If the SQL result contains more than one column, the column specified is returned. // obf
	 * If $v_cwqht is null, the specified column from the previous SQL result is returned. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string|null $v_cwqht Optional. SQL query. Defaults to previous query. // obf
	 * @param int         $v_jvcyb     Optional. Column to return. Indexed from 0. Default 0. // obf
	 * @return array Database query result. Array indexed from 0 by SQL result row number. // obf
	 */ // obf
	public function get_col( $v_cwqht = null, $v_jvcyb = 0 ) { // obf
		if ( $v_cwqht ) { // obf
			if ( $v_mechx->check_current_query && $v_mechx->check_safe_collation( $v_cwqht ) ) { // obf
				$v_mechx->check_current_query = false; // obf
			} // obf

			$v_mechx->query( $v_cwqht ); // obf
		} // obf

		$v_ibcpi = array(); // obf
		// Extract the column values. // obf
		if ( $v_mechx->last_result ) { // obf
			for ( $v_jwwvb = 0, $v_ujmth = count( $v_mechx->last_result ); $v_jwwvb < $v_ujmth; $v_jwwvb++ ) { // obf
				$v_ibcpi[ $v_jwwvb ] = $v_mechx->get_var( null, $v_jvcyb, $v_jwwvb ); // obf
			} // obf
		} // obf
		return $v_ibcpi; // obf
	} // obf

	/** // obf
	 * Retrieves an entire SQL result set from the database (i.e., many rows). // obf
	 * // obf
	 * Executes a SQL query and returns the entire SQL result. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_cwqht  SQL query. // obf
	 * @param string $v_sfmeb Optional. Any of ARRAY_A | ARRAY_N | OBJECT | OBJECT_K constants. // obf
	 *                       With one of the first three, return an array of rows indexed // obf
	 *                       from 0 by SQL result row number. Each row is an associative array // obf
	 *                       (column => value, ...), a numerically indexed array (0 => value, ...), // obf
	 *                       or an object ( ->column = value ), respectively. With OBJECT_K, // obf
	 *                       return an associative array of row objects keyed by the value // obf
	 *                       of each row's first column's value. Duplicate keys are discarded. // obf
	 *                       Default OBJECT. // obf
	 * @return array|object|null Database query results. // obf
	 */ // obf
	public function get_results( $v_cwqht = null, $v_sfmeb = OBJECT ) { // obf
		$v_mechx->func_call = "\$v_xaiad->get_results(\"$v_cwqht\", $v_sfmeb)"; // obf

		if ( $v_cwqht ) { // obf
			if ( $v_mechx->check_current_query && $v_mechx->check_safe_collation( $v_cwqht ) ) { // obf
				$v_mechx->check_current_query = false; // obf
			} // obf

			$v_mechx->query( $v_cwqht ); // obf
		} else { // obf
			return null; // obf
		} // obf

		$v_ibcpi = array(); // obf
		if ( OBJECT === $v_sfmeb ) { // obf
			// Return an integer-keyed array of row objects. // obf
			return $v_mechx->last_result; // obf
		} elseif ( OBJECT_K === $v_sfmeb ) { // obf
			/* // obf
			 * Return an array of row objects with keys from column 1. // obf
			 * (Duplicates are discarded.) // obf
			 */ // obf
			if ( $v_mechx->last_result ) { // obf
				foreach ( $v_mechx->last_result as $v_vxdji ) { // obf
					$v_jcdyx = get_object_vars( $v_vxdji ); // obf
					$v_izuun        = array_shift( $v_jcdyx ); // obf
					if ( ! isset( $v_ibcpi[ $v_izuun ] ) ) { // obf
						$v_ibcpi[ $v_izuun ] = $v_vxdji; // obf
					} // obf
				} // obf
			} // obf
			return $v_ibcpi; // obf
		} elseif ( ARRAY_A === $v_sfmeb || ARRAY_N === $v_sfmeb ) { // obf
			// Return an integer-keyed array of... // obf
			if ( $v_mechx->last_result ) { // obf
				if ( ARRAY_N === $v_sfmeb ) { // obf
					foreach ( (array) $v_mechx->last_result as $v_vxdji ) { // obf
						// ...integer-keyed row arrays. // obf
						$v_ibcpi[] = array_values( get_object_vars( $v_vxdji ) ); // obf
					} // obf
				} else { // obf
					foreach ( (array) $v_mechx->last_result as $v_vxdji ) { // obf
						// ...column name-keyed row arrays. // obf
						$v_ibcpi[] = get_object_vars( $v_vxdji ); // obf
					} // obf
				} // obf
			} // obf
			return $v_ibcpi; // obf
		} elseif ( strtoupper( $v_sfmeb ) === OBJECT ) { // obf
			// Back compat for OBJECT being previously case-insensitive. // obf
			return $v_mechx->last_result; // obf
		} // obf
		return null; // obf
	} // obf

	/** // obf
	 * Retrieves the character set for the given table. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_upzae Table name. // obf
	 * @return string|WP_Error Table character set, WP_Error object if it couldn't be found. // obf
	 */ // obf
	protected function get_table_charset( $v_upzae ) { // obf
		$v_hgtsb = strtolower( $v_upzae ); // obf

		/** // obf
		 * Filters the table charset value before the DB is checked. // obf
		 * // obf
		 * Returning a non-null value from the filter will effectively short-circuit // obf
		 * checking the DB for the charset, returning that value instead. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param string|WP_Error|null $v_vkrpz The character set to use, WP_Error object // obf
		 *                                      if it couldn't be found. Default null. // obf
		 * @param string               $v_upzae   The name of the table being checked. // obf
		 */ // obf
		$v_vkrpz = apply_filters( 'pre_get_table_charset', null, $v_upzae ); // obf
		if ( null !== $v_vkrpz ) { // obf
			return $v_vkrpz; // obf
		} // obf

		if ( isset( $v_mechx->table_charset[ $v_hgtsb ] ) ) { // obf
			return $v_mechx->table_charset[ $v_hgtsb ]; // obf
		} // obf

		$v_tjegj = array(); // obf
		$v_dhkbj  = array(); // obf

		$v_gbhfb = explode( '.', $v_upzae ); // obf
		$v_upzae       = '`' . implode( '`.`', $v_gbhfb ) . '`'; // obf
		$v_thzlv     = $v_mechx->get_results( "SHOW FULL COLUMNS FROM $v_upzae" ); // obf
		if ( ! $v_thzlv ) { // obf
			return new WP_Error( 'wpdb_get_table_charset_failure', __( 'Could not retrieve table charset.' ) ); // obf
		} // obf

		foreach ( $v_thzlv as $v_ctsah ) { // obf
			$v_dhkbj[ strtolower( $v_ctsah->Field ) ] = $v_ctsah; // obf
		} // obf

		$v_mechx->col_meta[ $v_hgtsb ] = $v_dhkbj; // obf

		foreach ( $v_dhkbj as $v_ctsah ) { // obf
			if ( ! empty( $v_ctsah->Collation ) ) { // obf
				list( $v_vkrpz ) = explode( '_', $v_ctsah->Collation ); // obf

				$v_tjegj[ strtolower( $v_vkrpz ) ] = true; // obf
			} // obf

			list( $v_niukd ) = explode( '(', $v_ctsah->Type ); // obf

			// A binary/blob means the whole query gets treated like this. // obf
			if ( in_array( strtoupper( $v_niukd ), array( 'BINARY', 'VARBINARY', 'TINYBLOB', 'MEDIUMBLOB', 'BLOB', 'LONGBLOB' ), true ) ) { // obf
				$v_mechx->table_charset[ $v_hgtsb ] = 'binary'; // obf
				return 'binary'; // obf
			} // obf
		} // obf

		// utf8mb3 is an alias for utf8. // obf
		if ( isset( $v_tjegj['utf8mb3'] ) ) { // obf
			$v_tjegj['utf8'] = true; // obf
			unset( $v_tjegj['utf8mb3'] ); // obf
		} // obf

		// Check if we have more than one charset in play. // obf
		$v_aokiw = count( $v_tjegj ); // obf
		if ( 1 === $v_aokiw ) { // obf
			$v_vkrpz = key( $v_tjegj ); // obf
		} elseif ( 0 === $v_aokiw ) { // obf
			// No charsets, assume this table can store whatever. // obf
			$v_vkrpz = false; // obf
		} else { // obf
			// More than one charset. Remove latin1 if present and recalculate. // obf
			unset( $v_tjegj['latin1'] ); // obf
			$v_aokiw = count( $v_tjegj ); // obf
			if ( 1 === $v_aokiw ) { // obf
				// Only one charset (besides latin1). // obf
				$v_vkrpz = key( $v_tjegj ); // obf
			} elseif ( 2 === $v_aokiw && isset( $v_tjegj['utf8'], $v_tjegj['utf8mb4'] ) ) { // obf
				// Two charsets, but they're utf8 and utf8mb4, use utf8. // obf
				$v_vkrpz = 'utf8'; // obf
			} else { // obf
				// Two mixed character sets. ascii. // obf
				$v_vkrpz = 'ascii'; // obf
			} // obf
		} // obf

		$v_mechx->table_charset[ $v_hgtsb ] = $v_vkrpz; // obf
		return $v_vkrpz; // obf
	} // obf

	/** // obf
	 * Retrieves the character set for the given column. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_upzae  Table name. // obf
	 * @param string $v_ctsah Column name. // obf
	 * @return string|false|WP_Error Column character set as a string. False if the column has // obf
	 *                               no character set. WP_Error object if there was an error. // obf
	 */ // obf
	public function get_col_charset( $v_upzae, $v_ctsah ) { // obf
		$v_hgtsb  = strtolower( $v_upzae ); // obf
		$v_bxmfd = strtolower( $v_ctsah ); // obf

		/** // obf
		 * Filters the column charset value before the DB is checked. // obf
		 * // obf
		 * Passing a non-null value to the filter will short-circuit // obf
		 * checking the DB for the charset, returning that value instead. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param string|null|false|WP_Error $v_vkrpz The character set to use. Default null. // obf
		 * @param string                     $v_upzae   The name of the table being checked. // obf
		 * @param string                     $v_ctsah  The name of the column being checked. // obf
		 */ // obf
		$v_vkrpz = apply_filters( 'pre_get_col_charset', null, $v_upzae, $v_ctsah ); // obf
		if ( null !== $v_vkrpz ) { // obf
			return $v_vkrpz; // obf
		} // obf

		// Skip this entirely if this isn't a MySQL database. // obf
		if ( empty( $v_mechx->is_mysql ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_mechx->table_charset[ $v_hgtsb ] ) ) { // obf
			// This primes column information for us. // obf
			$v_kerdc = $v_mechx->get_table_charset( $v_upzae ); // obf
			if ( is_wp_error( $v_kerdc ) ) { // obf
				return $v_kerdc; // obf
			} // obf
		} // obf

		// If still no column information, return the table charset. // obf
		if ( empty( $v_mechx->col_meta[ $v_hgtsb ] ) ) { // obf
			return $v_mechx->table_charset[ $v_hgtsb ]; // obf
		} // obf

		// If this column doesn't exist, return the table charset. // obf
		if ( empty( $v_mechx->col_meta[ $v_hgtsb ][ $v_bxmfd ] ) ) { // obf
			return $v_mechx->table_charset[ $v_hgtsb ]; // obf
		} // obf

		// Return false when it's not a string column. // obf
		if ( empty( $v_mechx->col_meta[ $v_hgtsb ][ $v_bxmfd ]->Collation ) ) { // obf
			return false; // obf
		} // obf

		list( $v_vkrpz ) = explode( '_', $v_mechx->col_meta[ $v_hgtsb ][ $v_bxmfd ]->Collation ); // obf
		return $v_vkrpz; // obf
	} // obf

	/** // obf
	 * Retrieves the maximum string length allowed in a given column. // obf
	 * // obf
	 * The length may either be specified as a byte length or a character length. // obf
	 * // obf
	 * @since 4.2.1 // obf
	 * // obf
	 * @param string $v_upzae  Table name. // obf
	 * @param string $v_ctsah Column name. // obf
	 * @return array|false|WP_Error { // obf
	 *     Array of column length information, false if the column has no length (for // obf
	 *     example, numeric column), WP_Error object if there was an error. // obf
	 * // obf
	 *     @type string $v_niukd   One of 'byte' or 'char'. // obf
	 *     @type int    $v_prnxz The column length. // obf
	 * } // obf
	 */ // obf
	public function get_col_length( $v_upzae, $v_ctsah ) { // obf
		$v_hgtsb  = strtolower( $v_upzae ); // obf
		$v_bxmfd = strtolower( $v_ctsah ); // obf

		// Skip this entirely if this isn't a MySQL database. // obf
		if ( empty( $v_mechx->is_mysql ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_mechx->col_meta[ $v_hgtsb ] ) ) { // obf
			// This primes column information for us. // obf
			$v_kerdc = $v_mechx->get_table_charset( $v_upzae ); // obf
			if ( is_wp_error( $v_kerdc ) ) { // obf
				return $v_kerdc; // obf
			} // obf
		} // obf

		if ( empty( $v_mechx->col_meta[ $v_hgtsb ][ $v_bxmfd ] ) ) { // obf
			return false; // obf
		} // obf

		$v_ulebx = explode( '(', $v_mechx->col_meta[ $v_hgtsb ][ $v_bxmfd ]->Type ); // obf

		$v_niukd = strtolower( $v_ulebx[0] ); // obf
		if ( ! empty( $v_ulebx[1] ) ) { // obf
			$v_prnxz = trim( $v_ulebx[1], ')' ); // obf
		} else { // obf
			$v_prnxz = false; // obf
		} // obf

		switch ( $v_niukd ) { // obf
			case 'char': // obf
			case 'varchar': // obf
				return array( // obf
					'type'   => 'char', // obf
					'length' => (int) $v_prnxz, // obf
				); // obf

			case 'binary': // obf
			case 'varbinary': // obf
				return array( // obf
					'type'   => 'byte', // obf
					'length' => (int) $v_prnxz, // obf
				); // obf

			case 'tinyblob': // obf
			case 'tinytext': // obf
				return array( // obf
					'type'   => 'byte', // obf
					'length' => 255,        // 2^8 - 1 // obf
				); // obf

			case 'blob': // obf
			case 'text': // obf
				return array( // obf
					'type'   => 'byte', // obf
					'length' => 65535,      // 2^16 - 1 // obf
				); // obf

			case 'mediumblob': // obf
			case 'mediumtext': // obf
				return array( // obf
					'type'   => 'byte', // obf
					'length' => 16777215,   // 2^24 - 1 // obf
				); // obf

			case 'longblob': // obf
			case 'longtext': // obf
				return array( // obf
					'type'   => 'byte', // obf
					'length' => 4294967295, // 2^32 - 1 // obf
				); // obf

			default: // obf
				return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Checks if a string is ASCII. // obf
	 * // obf
	 * The negative regex is faster for non-ASCII strings, as it allows // obf
	 * the search to finish as soon as it encounters a non-ASCII character. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_waqcc String to check. // obf
	 * @return bool True if ASCII, false if not. // obf
	 */ // obf
	protected function check_ascii( $v_waqcc ) { // obf
		if ( function_exists( 'mb_check_encoding' ) ) { // obf
			if ( mb_check_encoding( $v_waqcc, 'ASCII' ) ) { // obf
				return true; // obf
			} // obf
		} elseif ( ! preg_match( '/[^\x00-\x7F]/', $v_waqcc ) ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks if the query is accessing a collation considered safe on the current version of MySQL. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_cwqht The query to check. // obf
	 * @return bool True if the collation is safe, false if it isn't. // obf
	 */ // obf
	protected function check_safe_collation( $v_cwqht ) { // obf
		if ( $v_mechx->checking_collation ) { // obf
			return true; // obf
		} // obf

		// We don't need to check the collation for queries that don't read data. // obf
		$v_cwqht = ltrim( $v_cwqht, "\r\n\t (" ); // obf
		if ( preg_match( '/^(?:SHOW|DESCRIBE|DESC|EXPLAIN|CREATE)\s/i', $v_cwqht ) ) { // obf
			return true; // obf
		} // obf

		// All-ASCII queries don't need extra checking. // obf
		if ( $v_mechx->check_ascii( $v_cwqht ) ) { // obf
			return true; // obf
		} // obf

		$v_upzae = $v_mechx->get_table_from_query( $v_cwqht ); // obf
		if ( ! $v_upzae ) { // obf
			return false; // obf
		} // obf

		$v_mechx->checking_collation = true; // obf
		$v_wftwh                = $v_mechx->get_table_charset( $v_upzae ); // obf
		$v_mechx->checking_collation = false; // obf

		// Tables with no collation, or latin1 only, don't need extra checking. // obf
		if ( false === $v_wftwh || 'latin1' === $v_wftwh ) { // obf
			return true; // obf
		} // obf

		$v_upzae = strtolower( $v_upzae ); // obf
		if ( empty( $v_mechx->col_meta[ $v_upzae ] ) ) { // obf
			return false; // obf
		} // obf

		// If any of the columns don't have one of these collations, it needs more confidence checking. // obf
		$v_wwfqv = array( // obf
			'utf8_bin', // obf
			'utf8_general_ci', // obf
			'utf8mb3_bin', // obf
			'utf8mb3_general_ci', // obf
			'utf8mb4_bin', // obf
			'utf8mb4_general_ci', // obf
		); // obf

		foreach ( $v_mechx->col_meta[ $v_upzae ] as $v_wwgfb ) { // obf
			if ( empty( $v_wwgfb->Collation ) ) { // obf
				continue; // obf
			} // obf

			if ( ! in_array( $v_wwgfb->Collation, $v_wwfqv, true ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Strips any invalid characters based on value/charset pairs. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param array $v_bebya Array of value arrays. Each value array has the keys 'value', 'charset', and 'length'. // obf
	 *                    An optional 'ascii' key can be set to false to avoid redundant ASCII checks. // obf
	 * @return array|WP_Error The $v_bebya parameter, with invalid characters removed from each value. // obf
	 *                        This works as a passthrough: any additional keys such as 'field' are // obf
	 *                        retained in each value array. If we cannot remove invalid characters, // obf
	 *                        a WP_Error object is returned. // obf
	 */ // obf
	protected function strip_invalid_text( $v_bebya ) { // obf
		$v_wugzj = false; // obf

		foreach ( $v_bebya as &$v_xqcew ) { // obf
			$v_vkrpz = $v_xqcew['charset']; // obf

			if ( is_array( $v_xqcew['length'] ) ) { // obf
				$v_prnxz                  = $v_xqcew['length']['length']; // obf
				$v_xrvyg = 'byte' === $v_xqcew['length']['type']; // obf
			} else { // obf
				$v_prnxz = false; // obf
				/* // obf
				 * Since we have no length, we'll never truncate. Initialize the variable to false. // obf
				 * True would take us through an unnecessary (for this case) codepath below. // obf
				 */ // obf
				$v_xrvyg = false; // obf
			} // obf

			// There's no charset to work with. // obf
			if ( false === $v_vkrpz ) { // obf
				continue; // obf
			} // obf

			// Column isn't a string. // obf
			if ( ! is_string( $v_xqcew['value'] ) ) { // obf
				continue; // obf
			} // obf

			$v_wbdxa = true; // obf
			if ( // obf
				// latin1 can store any byte sequence. // obf
				'latin1' === $v_vkrpz // obf
			|| // obf
				// ASCII is always OK. // obf
				( ! isset( $v_xqcew['ascii'] ) && $v_mechx->check_ascii( $v_xqcew['value'] ) ) // obf
			) { // obf
				$v_xrvyg = true; // obf
				$v_wbdxa        = false; // obf
			} // obf

			if ( $v_xrvyg ) { // obf
				mbstring_binary_safe_encoding(); // obf
				if ( false !== $v_prnxz && strlen( $v_xqcew['value'] ) > $v_prnxz ) { // obf
					$v_xqcew['value'] = substr( $v_xqcew['value'], 0, $v_prnxz ); // obf
				} // obf
				reset_mbstring_encoding(); // obf

				if ( ! $v_wbdxa ) { // obf
					continue; // obf
				} // obf
			} // obf

			// utf8 can be handled by regex, which is a bunch faster than a DB lookup. // obf
			if ( ( 'utf8' === $v_vkrpz || 'utf8mb3' === $v_vkrpz || 'utf8mb4' === $v_vkrpz ) && function_exists( 'mb_strlen' ) ) { // obf
				$v_isyyz = '/ // obf
					( // obf
						(?: [\x00-\x7F]                  # single-byte sequences   0xxxxxxx // obf
						|   [\xC2-\xDF][\x80-\xBF]       # double-byte sequences   110xxxxx 10xxxxxx // obf
						|   \xE0[\xA0-\xBF][\x80-\xBF]   # triple-byte sequences   1110xxxx 10xxxxxx * 2 // obf
						|   [\xE1-\xEC][\x80-\xBF]{2} // obf
						|   \xED[\x80-\x9F][\x80-\xBF] // obf
						|   [\xEE-\xEF][\x80-\xBF]{2}'; // obf

				if ( 'utf8mb4' === $v_vkrpz ) { // obf
					$v_isyyz .= ' // obf
						|    \xF0[\x90-\xBF][\x80-\xBF]{2} # four-byte sequences   11110xxx 10xxxxxx * 3 // obf
						|    [\xF1-\xF3][\x80-\xBF]{3} // obf
						|    \xF4[\x80-\x8F][\x80-\xBF]{2} // obf
					'; // obf
				} // obf

				$v_isyyz         .= '){1,40}                          # ...one or more times // obf
					) // obf
					| .                                  # anything else // obf
					/x'; // obf
				$v_xqcew['value'] = __fn_37772( $v_isyyz, '$1', $v_xqcew['value'] ); // obf

				if ( false !== $v_prnxz && mb_strlen( $v_xqcew['value'], 'UTF-8' ) > $v_prnxz ) { // obf
					$v_xqcew['value'] = mb_substr( $v_xqcew['value'], 0, $v_prnxz, 'UTF-8' ); // obf
				} // obf
				continue; // obf
			} // obf

			// We couldn't use any local conversions, send it to the DB. // obf
			$v_xqcew['db']     = true; // obf
			$v_wugzj = true; // obf
		} // obf
		unset( $v_xqcew ); // Remove by reference. // obf

		if ( $v_wugzj ) { // obf
			$v_yoepo = array(); // obf
			foreach ( $v_bebya as $v_wwgfb => $v_xqcew ) { // obf
				if ( ! empty( $v_xqcew['db'] ) ) { // obf
					// We're going to need to truncate by characters or bytes, depending on the length value we have. // obf
					if ( isset( $v_xqcew['length']['type'] ) && 'byte' === $v_xqcew['length']['type'] ) { // obf
						// Using binary causes LEFT() to truncate by bytes. // obf
						$v_vkrpz = 'binary'; // obf
					} else { // obf
						$v_vkrpz = $v_xqcew['charset']; // obf
					} // obf

					if ( $v_mechx->charset ) { // obf
						$v_ezamy = $v_mechx->charset; // obf
					} else { // obf
						$v_ezamy = mysqli_character_set_name( $v_mechx->dbh ); // obf
					} // obf

					if ( is_array( $v_xqcew['length'] ) ) { // obf
						$v_prnxz          = sprintf( '%.0f', $v_xqcew['length']['length'] ); // obf
						$v_yoepo[ $v_wwgfb ] = $v_mechx->prepare( "CONVERT( LEFT( CONVERT( %s USING $v_vkrpz ), $v_prnxz ) USING $v_ezamy )", $v_xqcew['value'] ); // obf
					} elseif ( 'binary' !== $v_vkrpz ) { // obf
						// If we don't have a length, there's no need to convert binary - it will always return the same result. // obf
						$v_yoepo[ $v_wwgfb ] = $v_mechx->prepare( "CONVERT( CONVERT( %s USING $v_vkrpz ) USING $v_ezamy )", $v_xqcew['value'] ); // obf
					} // obf

					unset( $v_bebya[ $v_wwgfb ]['db'] ); // obf
				} // obf
			} // obf

			$v_lvcvb = array(); // obf
			foreach ( $v_yoepo as $v_ctsah => $v_cwqht ) { // obf
				if ( ! $v_cwqht ) { // obf
					continue; // obf
				} // obf

				$v_lvcvb[] = $v_cwqht . " AS x_$v_ctsah"; // obf
			} // obf

			$v_mechx->check_current_query = false; // obf
			$v_vxdji                       = $v_mechx->get_row( 'SELECT ' . implode( ', ', $v_lvcvb ), ARRAY_A ); // obf
			if ( ! $v_vxdji ) { // obf
				return new WP_Error( 'wpdb_strip_invalid_text_failure', __( 'Could not strip invalid text.' ) ); // obf
			} // obf

			foreach ( array_keys( $v_bebya ) as $v_ctsah ) { // obf
				if ( isset( $v_vxdji[ "x_$v_ctsah" ] ) ) { // obf
					$v_bebya[ $v_ctsah ]['value'] = $v_vxdji[ "x_$v_ctsah" ]; // obf
				} // obf
			} // obf
		} // obf

		return $v_bebya; // obf
	} // obf

	/** // obf
	 * Strips any invalid characters from the query. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_cwqht Query to convert. // obf
	 * @return string|WP_Error The converted query, or a WP_Error object if the conversion fails. // obf
	 */ // obf
	protected function strip_invalid_text_from_query( $v_cwqht ) { // obf
		// We don't need to check the collation for queries that don't read data. // obf
		$v_sxqms = ltrim( $v_cwqht, "\r\n\t (" ); // obf
		if ( preg_match( '/^(?:SHOW|DESCRIBE|DESC|EXPLAIN|CREATE)\s/i', $v_sxqms ) ) { // obf
			return $v_cwqht; // obf
		} // obf

		$v_upzae = $v_mechx->get_table_from_query( $v_cwqht ); // obf
		if ( $v_upzae ) { // obf
			$v_vkrpz = $v_mechx->get_table_charset( $v_upzae ); // obf
			if ( is_wp_error( $v_vkrpz ) ) { // obf
				return $v_vkrpz; // obf
			} // obf

			// We can't reliably strip text from tables containing binary/blob columns. // obf
			if ( 'binary' === $v_vkrpz ) { // obf
				return $v_cwqht; // obf
			} // obf
		} else { // obf
			$v_vkrpz = $v_mechx->charset; // obf
		} // obf

		$v_bebya = array( // obf
			'value'   => $v_cwqht, // obf
			'charset' => $v_vkrpz, // obf
			'ascii'   => false, // obf
			'length'  => false, // obf
		); // obf

		$v_bebya = $v_mechx->strip_invalid_text( array( $v_bebya ) ); // obf
		if ( is_wp_error( $v_bebya ) ) { // obf
			return $v_bebya; // obf
		} // obf

		return $v_bebya[0]['value']; // obf
	} // obf

	/** // obf
	 * Strips any invalid characters from the string for a given table and column. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_upzae  Table name. // obf
	 * @param string $v_ctsah Column name. // obf
	 * @param string $v_xqcew  The text to check. // obf
	 * @return string|WP_Error The converted string, or a WP_Error object if the conversion fails. // obf
	 */ // obf
	public function strip_invalid_text_for_column( $v_upzae, $v_ctsah, $v_xqcew ) { // obf
		if ( ! is_string( $v_xqcew ) ) { // obf
			return $v_xqcew; // obf
		} // obf

		$v_vkrpz = $v_mechx->get_col_charset( $v_upzae, $v_ctsah ); // obf
		if ( ! $v_vkrpz ) { // obf
			// Not a string column. // obf
			return $v_xqcew; // obf
		} elseif ( is_wp_error( $v_vkrpz ) ) { // obf
			// Bail on real errors. // obf
			return $v_vkrpz; // obf
		} // obf

		$v_bebya = array( // obf
			$v_ctsah => array( // obf
				'value'   => $v_xqcew, // obf
				'charset' => $v_vkrpz, // obf
				'length'  => $v_mechx->get_col_length( $v_upzae, $v_ctsah ), // obf
			), // obf
		); // obf

		$v_bebya = $v_mechx->strip_invalid_text( $v_bebya ); // obf
		if ( is_wp_error( $v_bebya ) ) { // obf
			return $v_bebya; // obf
		} // obf

		return $v_bebya[ $v_ctsah ]['value']; // obf
	} // obf

	/** // obf
	 * Finds the first table name referenced in a query. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_cwqht The query to search. // obf
	 * @return string|false The table name found, or false if a table couldn't be found. // obf
	 */ // obf
	protected function get_table_from_query( $v_cwqht ) { // obf
		// Remove characters that can legally trail the table name. // obf
		$v_cwqht = rtrim( $v_cwqht, ';/-#' ); // obf

		// Allow (select...) union [...] style queries. Use the first query's table name. // obf
		$v_cwqht = ltrim( $v_cwqht, "\r\n\t (" ); // obf

		// Strip everything between parentheses except nested selects. // obf
		$v_cwqht = __fn_37772( '/\((?!\s*select)[^(]*?\)/is', '()', $v_cwqht ); // obf

		// Quickly match most common queries. // obf
		if ( preg_match( // obf
			'/^\s*(?:' // obf
				. 'SELECT.*?\s+FROM' // obf
				. '|INSERT(?:\s+LOW_PRIORITY|\s+DELAYED|\s+HIGH_PRIORITY)?(?:\s+IGNORE)?(?:\s+INTO)?' // obf
				. '|REPLACE(?:\s+LOW_PRIORITY|\s+DELAYED)?(?:\s+INTO)?' // obf
				. '|UPDATE(?:\s+LOW_PRIORITY)?(?:\s+IGNORE)?' // obf
				. '|DELETE(?:\s+LOW_PRIORITY|\s+QUICK|\s+IGNORE)*(?:.+?FROM)?' // obf
			. ')\s+((?:[0-9a-zA-Z$v_yzgsr.`-]|[\xC2-\xDF][\x80-\xBF])+)/is', // obf
			$v_cwqht, // obf
			$v_rclin // obf
		) ) { // obf
			return str_replace( '`', '', $v_rclin[1] ); // obf
		} // obf

		// SHOW TABLE STATUS and SHOW TABLES WHERE Name = 'wp_posts' // obf
		if ( preg_match( '/^\s*SHOW\s+(?:TABLE\s+STATUS|(?:FULL\s+)?TABLES).+WHERE\s+Name\s*=\s*("|\')((?:[0-9a-zA-Z$v_yzgsr.-]|[\xC2-\xDF][\x80-\xBF])+)\\1/is', $v_cwqht, $v_rclin ) ) { // obf
			return $v_rclin[2]; // obf
		} // obf

		/* // obf
		 * SHOW TABLE STATUS LIKE and SHOW TABLES LIKE 'wp\_123\_%' // obf
		 * This quoted LIKE operand seldom holds a full table name. // obf
		 * It is usually a pattern for matching a prefix so we just // obf
		 * strip the trailing % and unescape the _ to get 'wp_123_' // obf
		 * which drop-ins can use for routing these SQL statements. // obf
		 */ // obf
		if ( preg_match( '/^\s*SHOW\s+(?:TABLE\s+STATUS|(?:FULL\s+)?TABLES)\s+(?:WHERE\s+Name\s+)?LIKE\s*("|\')((?:[\\\\0-9a-zA-Z$v_yzgsr.-]|[\xC2-\xDF][\x80-\xBF])+)%?\\1/is', $v_cwqht, $v_rclin ) ) { // obf
			return str_replace( '\\_', '_', $v_rclin[2] ); // obf
		} // obf

		// Big pattern for the rest of the table-related queries. // obf
		if ( preg_match( // obf
			'/^\s*(?:' // obf
				. '(?:EXPLAIN\s+(?:EXTENDED\s+)?)?SELECT.*?\s+FROM' // obf
				. '|DESCRIBE|DESC|EXPLAIN|HANDLER' // obf
				. '|(?:LOCK|UNLOCK)\s+TABLE(?:S)?' // obf
				. '|(?:RENAME|OPTIMIZE|BACKUP|RESTORE|CHECK|CHECKSUM|ANALYZE|REPAIR).*\s+TABLE' // obf
				. '|TRUNCATE(?:\s+TABLE)?' // obf
				. '|CREATE(?:\s+TEMPORARY)?\s+TABLE(?:\s+IF\s+NOT\s+EXISTS)?' // obf
				. '|ALTER(?:\s+IGNORE)?\s+TABLE' // obf
				. '|DROP\s+TABLE(?:\s+IF\s+EXISTS)?' // obf
				. '|CREATE(?:\s+\w+)?\s+INDEX.*\s+ON' // obf
				. '|DROP\s+INDEX.*\s+ON' // obf
				. '|LOAD\s+DATA.*INFILE.*INTO\s+TABLE' // obf
				. '|(?:GRANT|REVOKE).*ON\s+TABLE' // obf
				. '|SHOW\s+(?:.*FROM|.*TABLE)' // obf
			. ')\s+\(*\s*((?:[0-9a-zA-Z$v_yzgsr.`-]|[\xC2-\xDF][\x80-\xBF])+)\s*\)*/is', // obf
			$v_cwqht, // obf
			$v_rclin // obf
		) ) { // obf
			return str_replace( '`', '', $v_rclin[1] ); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Loads the column metadata from the last query. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 */ // obf
	protected function load_col_info() { // obf
		if ( $v_mechx->col_info ) { // obf
			return; // obf
		} // obf

		$v_vnxgg = mysqli_num_fields( $v_mechx->result ); // obf

		for ( $v_jwwvb = 0; $v_jwwvb < $v_vnxgg; $v_jwwvb++ ) { // obf
			$v_mechx->col_info[ $v_jwwvb ] = mysqli_fetch_field( $v_mechx->result ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves column metadata from the last query. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_crbbt  Optional. Possible values include 'name', 'table', 'def', 'max_length', // obf
	 *                           'not_null', 'primary_key', 'multiple_key', 'unique_key', 'numeric', // obf
	 *                           'blob', 'type', 'unsigned', 'zerofill'. Default 'name'. // obf
	 * @param int    $v_ffsyf Optional. 0: col name. 1: which table the col's in. 2: col's max length. // obf
	 *                           3: if the col is numeric. 4: col's type. Default -1. // obf
	 * @return mixed Column results. // obf
	 */ // obf
	public function get_col_info( $v_crbbt = 'name', $v_ffsyf = -1 ) { // obf
		$v_mechx->load_col_info(); // obf

		if ( $v_mechx->col_info ) { // obf
			if ( -1 === $v_ffsyf ) { // obf
				$v_jwwvb         = 0; // obf
				$v_ibcpi = array(); // obf
				foreach ( (array) $v_mechx->col_info as $v_wwgfb ) { // obf
					$v_ibcpi[ $v_jwwvb ] = $v_wwgfb->{$v_crbbt}; // obf
					++$v_jwwvb; // obf
				} // obf
				return $v_ibcpi; // obf
			} else { // obf
				return $v_mechx->col_info[ $v_ffsyf ]->{$v_crbbt}; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Starts the timer, for debugging purposes. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @return true // obf
	 */ // obf
	public function timer_start() { // obf
		$v_mechx->time_start = microtime( true ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Stops the debugging timer. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @return float Total time spent on the query, in seconds. // obf
	 */ // obf
	public function timer_stop() { // obf
		return ( microtime( true ) - $v_mechx->time_start ); // obf
	} // obf

	/** // obf
	 * Wraps errors in a nice header and footer and dies. // obf
	 * // obf
	 * Will not die if wpdb::$v_lnxzb is false. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_bwpsf    The error message. // obf
	 * @param string $v_xvhzi Optional. A computer-readable string to identify the error. // obf
	 *                           Default '500'. // obf
	 * @return void|false Void if the showing of errors is enabled, false if disabled. // obf
	 */ // obf
	public function bail( $v_bwpsf, $v_xvhzi = '500' ) { // obf
		if ( $v_mechx->show_errors ) { // obf
			$v_rpaoa = ''; // obf

			if ( $v_mechx->dbh instanceof mysqli ) { // obf
				$v_rpaoa = mysqli_error( $v_mechx->dbh ); // obf
			} elseif ( mysqli_connect_errno() ) { // obf
				$v_rpaoa = mysqli_connect_error(); // obf
			} // obf

			if ( $v_rpaoa ) { // obf
				$v_bwpsf = '<p><code>' . $v_rpaoa . "</code></p>\n" . $v_bwpsf; // obf
			} // obf

			wp_die( $v_bwpsf ); // obf
		} else { // obf
			if ( class_exists( 'WP_Error', false ) ) { // obf
				$v_mechx->error = new WP_Error( $v_xvhzi, $v_bwpsf ); // obf
			} else { // obf
				$v_mechx->error = $v_bwpsf; // obf
			} // obf

			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Closes the current database connection. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return bool True if the connection was successfully closed, // obf
	 *              false if it wasn't, or if the connection doesn't exist. // obf
	 */ // obf
	public function close() { // obf
		if ( ! $v_mechx->dbh ) { // obf
			return false; // obf
		} // obf

		$v_psemo = mysqli_close( $v_mechx->dbh ); // obf

		if ( $v_psemo ) { // obf
			$v_mechx->dbh           = null; // obf
			$v_mechx->ready         = false; // obf
			$v_mechx->has_connected = false; // obf
		} // obf

		return $v_psemo; // obf
	} // obf

	/** // obf
	 * Determines whether MySQL database is at least the required minimum version. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @global string $v_zcqfv The required MySQL version string. // obf
	 * @return void|WP_Error // obf
	 */ // obf
	public function check_database_version() { // obf
		global $v_zcqfv; // obf
		$v_zscyk = wp_get_wp_version(); // obf

		// Make sure the server has the required MySQL version. // obf
		if ( version_compare( $v_mechx->db_version(), $v_zcqfv, '<' ) ) { // obf
			/* translators: 1: WordPress version number, 2: Minimum required MySQL version number. */ // obf
			return new WP_Error( 'database_version', sprintf( __( '<strong>Error:</strong> WordPress %1$v_gqeuq requires MySQL %2$v_gqeuq or higher' ), $v_zscyk, $v_zcqfv ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether the database supports collation. // obf
	 * // obf
	 * Called when WordPress is generating the table scheme. // obf
	 * // obf
	 * Use `wpdb::has_cap( 'collation' )`. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @deprecated 3.5.0 Use wpdb::has_cap() // obf
	 * // obf
	 * @return bool True if collation is supported, false if not. // obf
	 */ // obf
	public function supports_collation() { // obf
		_deprecated_function( __FUNCTION__, '3.5.0', 'wpdb::has_cap( \'collation\' )' ); // obf
		return $v_mechx->has_cap( 'collation' ); // obf
	} // obf

	/** // obf
	 * Retrieves the database character collate. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return string The database character collate. // obf
	 */ // obf
	public function get_charset_collate() { // obf
		$v_fxjwf = ''; // obf

		if ( ! empty( $v_mechx->charset ) ) { // obf
			$v_fxjwf = "DEFAULT CHARACTER SET $v_mechx->charset"; // obf
		} // obf
		if ( ! empty( $v_mechx->collate ) ) { // obf
			$v_fxjwf .= " COLLATE $v_mechx->collate"; // obf
		} // obf

		return $v_fxjwf; // obf
	} // obf

	/** // obf
	 * Determines whether the database or WPDB supports a particular feature. // obf
	 * // obf
	 * Capability sniffs for the database server and current version of WPDB. // obf
	 * // obf
	 * Database sniffs are based on the version of MySQL the site is using. // obf
	 * // obf
	 * WPDB sniffs are added as new features are introduced to allow theme and plugin // obf
	 * developers to determine feature support. This is to account for drop-ins which may // obf
	 * introduce feature support at a different time to WordPress. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 4.1.0 Added support for the 'utf8mb4' feature. // obf
	 * @since 4.6.0 Added support for the 'utf8mb4_520' feature. // obf
	 * @since 6.2.0 Added support for the 'identifier_placeholders' feature. // obf
	 * @since 6.6.0 The `utf8mb4` feature now always returns true. // obf
	 * // obf
	 * @see wpdb::db_version() // obf
	 * // obf
	 * @param string $v_hqqbb The feature to check for. Accepts 'collation', 'group_concat', // obf
	 *                       'subqueries', 'set_charset', 'utf8mb4', 'utf8mb4_520', // obf
	 *                       or 'identifier_placeholders'. // obf
	 * @return bool True when the database feature is supported, false otherwise. // obf
	 */ // obf
	public function has_cap( $v_hqqbb ) { // obf
		$v_jtsas     = $v_mechx->db_version(); // obf
		$v_fmssl = $v_mechx->db_server_info(); // obf

		/* // obf
		 * Account for MariaDB version being prefixed with '5.5.5-' on older PHP versions. // obf
		 * // obf
		 * Note: str_contains() is not used here, as this file can be included // obf
		 * directly outside of WordPress core, e.g. by HyperDB, in which case // obf
		 * the polyfills from wp-includes/compat.php are not loaded. // obf
		 */ // obf
		if ( '5.5.5' === $v_jtsas && false !== strpos( $v_fmssl, 'MariaDB' ) // obf
			&& PHP_VERSION_ID < 80016 // PHP 8.0.15 or older. // obf
		) { // obf
			// Strip the '5.5.5-' prefix and set the version to the correct value. // obf
			$v_fmssl = __fn_37772( '/^5\.5\.5-(.*)/', '$1', $v_fmssl ); // obf
			$v_jtsas     = __fn_37772( '/[^0-9.].*/', '', $v_fmssl ); // obf
		} // obf

		switch ( strtolower( $v_hqqbb ) ) { // obf
			case 'collation':    // @since 2.5.0 // obf
			case 'group_concat': // @since 2.7.0 // obf
			case 'subqueries':   // @since 2.7.0 // obf
				return version_compare( $v_jtsas, '4.1', '>=' ); // obf
			case 'set_charset': // obf
				return version_compare( $v_jtsas, '5.0.7', '>=' ); // obf
			case 'utf8mb4':      // @since 4.1.0 // obf
				return true; // obf
			case 'utf8mb4_520': // @since 4.6.0 // obf
				return version_compare( $v_jtsas, '5.6', '>=' ); // obf
			case 'identifier_placeholders': // @since 6.2.0 // obf
				/* // obf
				 * As of WordPress 6.2, wpdb::prepare() supports identifiers via '%i', // obf
				 * e.g. table/field names. // obf
				 */ // obf
				return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Retrieves a comma-separated list of the names of the functions that called wpdb. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @return string Comma-separated list of the calling functions. // obf
	 */ // obf
	public function get_caller() { // obf
		return wp_debug_backtrace_summary( __CLASS__ ); // obf
	} // obf

	/** // obf
	 * Retrieves the database server version. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @return string|null Version number on success, null on failure. // obf
	 */ // obf
	public function db_version() { // obf
		return __fn_37772( '/[^0-9.].*/', '', $v_mechx->db_server_info() ); // obf
	} // obf

	/** // obf
	 * Returns the version of the MySQL server. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return string Server version as a string. // obf
	 */ // obf
	public function db_server_info() { // obf
		return mysqli_get_server_info( $v_mechx->dbh ); // obf
	} // obf
} // obf