

<?php // obf
/** // obf
 * Comment API: WP_Comment class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Comments // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to organize comments as instantiated objects with defined members. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Comment { // obf

	/** // obf
	 * Comment ID. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ajwsa; // obf

	/** // obf
	 * ID of the post the comment is associated with. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ebrvz = '0'; // obf

	/** // obf
	 * Comment author name. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fzxtw = ''; // obf

	/** // obf
	 * Comment author email address. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gyfbc = ''; // obf

	/** // obf
	 * Comment author URL. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_cxpyw = ''; // obf

	/** // obf
	 * Comment author IP address (IPv4 format). // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_dteks = ''; // obf

	/** // obf
	 * Comment date in YYYY-MM-DD HH:MM:SS format. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_czaam = '0000-00-00 00:00:00'; // obf

	/** // obf
	 * Comment GMT date in YYYY-MM-DD HH::MM:SS format. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rrrbm = '0000-00-00 00:00:00'; // obf

	/** // obf
	 * Comment content. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_makwg; // obf

	/** // obf
	 * Comment karma count. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_mppws = '0'; // obf

	/** // obf
	 * Comment approval status. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ifvwi = '1'; // obf

	/** // obf
	 * Comment author HTTP user agent. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fbsuo = ''; // obf

	/** // obf
	 * Comment type. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 5.5.0 Default value changed to `comment`. // obf
	 * @var string // obf
	 */ // obf
	public $v_jehod = 'comment'; // obf

	/** // obf
	 * Parent comment ID. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gfhjk = '0'; // obf

	/** // obf
	 * Comment author ID. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ewekk = '0'; // obf

	/** // obf
	 * Comment children. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_gxqmk; // obf

	/** // obf
	 * Whether children have been populated for this comment object. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_cfonf = false; // obf

	/** // obf
	 * Post fields. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_yvymz = array( 'post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_excerpt', 'post_status', 'comment_status', 'ping_status', 'post_name', 'to_ping', 'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 'menu_order', 'post_type', 'post_mime_type', 'comment_count' ); // obf

	/** // obf
	 * Retrieves a WP_Comment instance. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global wpdb $v_qclgs WordPress database abstraction object. // obf
	 * // obf
	 * @param int $v_xoimi Comment ID. // obf
	 * @return WP_Comment|false Comment object, otherwise false. // obf
	 */ // obf
	public static function get_instance( $v_xoimi ) { // obf
		global $v_qclgs; // obf

		$v_aubbe = (int) $v_xoimi; // obf
		if ( ! $v_aubbe ) { // obf
			return false; // obf
		} // obf

		$v_wybde = wp_cache_get( $v_aubbe, 'comment' ); // obf

		if ( ! $v_wybde ) { // obf
			$v_wybde = $v_qclgs->get_row( $v_qclgs->prepare( "SELECT * FROM $v_qclgs->comments WHERE comment_ID = %d LIMIT 1", $v_aubbe ) ); // obf

			if ( ! $v_wybde ) { // obf
				return false; // obf
			} // obf

			wp_cache_add( $v_wybde->comment_ID, $v_wybde, 'comment' ); // obf
		} // obf

		return new WP_Comment( $v_wybde ); // obf
	} // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Populates properties with object vars. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_Comment $v_ndoel Comment object. // obf
	 */ // obf
	public function __construct( $v_ndoel ) { // obf
		foreach ( get_object_vars( $v_ndoel ) as $v_igvmq => $v_zpnac ) { // obf
			$v_xownz->$v_igvmq = $v_zpnac; // obf
		} // obf
	} // obf

	/** // obf
	 * Converts object to array. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Object as array. // obf
	 */ // obf
	public function to_array() { // obf
		return get_object_vars( $v_xownz ); // obf
	} // obf

	/** // obf
	 * Gets the children of a comment. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_otjxl { // obf
	 *     Array of arguments used to pass to get_comments() and determine format. // obf
	 * // obf
	 *     @type string $v_bqhqs        Return value format. 'tree' for a hierarchical tree, 'flat' for a flattened array. // obf
	 *                                 Default 'tree'. // obf
	 *     @type string $v_egpax        Comment status to limit results by. Accepts 'hold' (`comment_status=0`), // obf
	 *                                 'approve' (`comment_status=1`), 'all', or a custom comment status. // obf
	 *                                 Default 'all'. // obf
	 *     @type string $v_ejzrv  Whether to include comment descendants in the results. // obf
	 *                                 'threaded' returns a tree, with each comment's children // obf
	 *                                 stored in a `children` property on the `WP_Comment` object. // obf
	 *                                 'flat' returns a flat array of found comments plus their children. // obf
	 *                                 Pass `false` to leave out descendants. // obf
	 *                                 The parameter is ignored (forced to `false`) when `$v_qdoyq` is 'ids' or 'counts'. // obf
	 *                                 Accepts 'threaded', 'flat', or false. Default: 'threaded'. // obf
	 *     @type string|array $v_ewwnl Comment status or array of statuses. To use 'meta_value' // obf
	 *                                 or 'meta_value_num', `$v_rbttc` must also be defined. // obf
	 *                                 To sort by a specific `$v_jccdw` clause, use that // obf
	 *                                 clause's array key. Accepts 'comment_agent', // obf
	 *                                 'comment_approved', 'comment_author', // obf
	 *                                 'comment_author_email', 'comment_author_IP', // obf
	 *                                 'comment_author_url', 'comment_content', 'comment_date', // obf
	 *                                 'comment_date_gmt', 'comment_ID', 'comment_karma', // obf
	 *                                 'comment_parent', 'comment_post_ID', 'comment_type', // obf
	 *                                 'user_id', 'comment__in', 'meta_value', 'meta_value_num', // obf
	 *                                 the value of $v_rbttc, and the array keys of // obf
	 *                                 `$v_jccdw`. Also accepts false, an empty array, or // obf
	 *                                 'none' to disable `ORDER BY` clause. // obf
	 * } // obf
	 * @return WP_Comment[] Array of `WP_Comment` objects. // obf
	 */ // obf
	public function get_children( $v_otjxl = array() ) { // obf
		$v_pmjrj = array( // obf
			'format'       => 'tree', // obf
			'status'       => 'all', // obf
			'hierarchical' => 'threaded', // obf
			'orderby'      => '', // obf
		); // obf

		$v_wxvug           = wp_parse_args( $v_otjxl, $v_pmjrj ); // obf
		$v_wxvug['parent'] = $v_xownz->comment_ID; // obf

		if ( is_null( $v_xownz->children ) ) { // obf
			if ( $v_xownz->populated_children ) { // obf
				$v_xownz->children = array(); // obf
			} else { // obf
				$v_xownz->children = get_comments( $v_wxvug ); // obf
			} // obf
		} // obf

		if ( 'flat' === $v_wxvug['format'] ) { // obf
			$v_gxqmk = array(); // obf
			foreach ( $v_xownz->children as $v_psrxy ) { // obf
				$v_poten           = $v_wxvug; // obf
				$v_poten['format'] = 'flat'; // obf
				// get_children() resets this value automatically. // obf
				unset( $v_poten['parent'] ); // obf

				$v_gxqmk = array_merge( $v_gxqmk, array( $v_psrxy ), $v_psrxy->get_children( $v_poten ) ); // obf
			} // obf
		} else { // obf
			$v_gxqmk = $v_xownz->children; // obf
		} // obf

		return $v_gxqmk; // obf
	} // obf

	/** // obf
	 * Adds a child to the comment. // obf
	 * // obf
	 * Used by `WP_Comment_Query` when bulk-filling descendants. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_Comment $v_psrxy Child comment. // obf
	 */ // obf
	public function add_child( WP_Comment $v_psrxy ) { // obf
		$v_xownz->children[ $v_psrxy->comment_ID ] = $v_psrxy; // obf
	} // obf

	/** // obf
	 * Gets a child comment by ID. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param int $v_lnaaj ID of the child. // obf
	 * @return WP_Comment|false Returns the comment object if found, otherwise false. // obf
	 */ // obf
	public function get_child( $v_lnaaj ) { // obf
		if ( isset( $v_xownz->children[ $v_lnaaj ] ) ) { // obf
			return $v_xownz->children[ $v_lnaaj ]; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Sets the 'populated_children' flag. // obf
	 * // obf
	 * This flag is important for ensuring that calling `get_children()` on a childless comment will not trigger // obf
	 * unneeded database queries. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param bool $v_btoca Whether the comment's children have already been populated. // obf
	 */ // obf
	public function populated_children( $v_btoca ) { // obf
		$v_xownz->populated_children = (bool) $v_btoca; // obf
	} // obf

	/** // obf
	 * Determines whether a non-public property is set. // obf
	 * // obf
	 * If `$v_snmof` matches a post field, the comment post will be loaded and the post's value checked. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_snmof Property to check if set. // obf
	 * @return bool Whether the property is set. // obf
	 */ // obf
	public function __isset( $v_snmof ) { // obf
		if ( in_array( $v_snmof, $v_xownz->post_fields, true ) && 0 !== (int) $v_xownz->comment_post_ID ) { // obf
			$v_gwkqw = get_post( $v_xownz->comment_post_ID ); // obf
			return property_exists( $v_gwkqw, $v_snmof ); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Magic getter. // obf
	 * // obf
	 * If `$v_snmof` matches a post field, the comment post will be loaded and the post's value returned. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_snmof Property name. // obf
	 * @return mixed // obf
	 */ // obf
	public function __get( $v_snmof ) { // obf
		if ( in_array( $v_snmof, $v_xownz->post_fields, true ) ) { // obf
			$v_gwkqw = get_post( $v_xownz->comment_post_ID ); // obf
			return $v_gwkqw->$v_snmof; // obf
		} // obf
	} // obf
} // obf