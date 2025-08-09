

<?php // obf
/** // obf
 * Deprecated admin functions from past WordPress versions. You shouldn't use these // obf
 * functions and look for the alternatives instead. The functions will be removed // obf
 * in a later version. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Deprecated // obf
 */ // obf

/* // obf
 * Deprecated functions come here to die. // obf
 */ // obf

/** // obf
 * @since 2.1.0 // obf
 * @deprecated 2.1.0 Use wp_editor() // obf
 * @see wp_editor() // obf
 */ // obf
function tinymce_include() { // obf
	_deprecated_function( __FUNCTION__, '2.1.0', 'wp_editor()' ); // obf

	wp_tiny_mce(); // obf
} // obf

/** // obf
 * Unused Admin function. // obf
 * // obf
 * @since 2.0.0 // obf
 * @deprecated 2.5.0 // obf
 * // obf
 */ // obf
function documentation_link() { // obf
	_deprecated_function( __FUNCTION__, '2.5.0' ); // obf
} // obf

/** // obf
 * Calculates the new dimensions for a downsampled image. // obf
 * // obf
 * @since 2.0.0 // obf
 * @deprecated 3.0.0 Use wp_constrain_dimensions() // obf
 * @see wp_constrain_dimensions() // obf
 * // obf
 * @param int $v_xgmaf Current width of the image // obf
 * @param int $v_oogva Current height of the image // obf
 * @param int $v_dhhtb Maximum wanted width // obf
 * @param int $v_atlmd Maximum wanted height // obf
 * @return array Shrunk dimensions (width, height). // obf
 */ // obf
function wp_shrink_dimensions( $v_xgmaf, $v_oogva, $v_dhhtb = 128, $v_atlmd = 96 ) { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'wp_constrain_dimensions()' ); // obf
	return wp_constrain_dimensions( $v_xgmaf, $v_oogva, $v_dhhtb, $v_atlmd ); // obf
} // obf

/** // obf
 * Calculated the new dimensions for a downsampled image. // obf
 * // obf
 * @since 2.0.0 // obf
 * @deprecated 3.5.0 Use wp_constrain_dimensions() // obf
 * @see wp_constrain_dimensions() // obf
 * // obf
 * @param int $v_xgmaf Current width of the image // obf
 * @param int $v_oogva Current height of the image // obf
 * @return array Shrunk dimensions (width, height). // obf
 */ // obf
function get_udims( $v_xgmaf, $v_oogva ) { // obf
	_deprecated_function( __FUNCTION__, '3.5.0', 'wp_constrain_dimensions()' ); // obf
	return wp_constrain_dimensions( $v_xgmaf, $v_oogva, 128, 96 ); // obf
} // obf

/** // obf
 * Legacy function used to generate the categories checklist control. // obf
 * // obf
 * @since 0.71 // obf
 * @deprecated 2.6.0 Use wp_category_checklist() // obf
 * @see wp_category_checklist() // obf
 * // obf
 * @global int $v_jjiiz // obf
 * // obf
 * @param int   $v_wphyl Unused. // obf
 * @param int   $v_brucd  Unused. // obf
 * @param array $v_htrle      Unused. // obf
 */ // obf
function dropdown_categories( $v_wphyl = 0, $v_brucd = 0, $v_htrle = array() ) { // obf
	_deprecated_function( __FUNCTION__, '2.6.0', 'wp_category_checklist()' ); // obf
	global $v_jjiiz; // obf
	wp_category_checklist( $v_jjiiz ); // obf
} // obf

/** // obf
 * Legacy function used to generate a link categories checklist control. // obf
 * // obf
 * @since 2.1.0 // obf
 * @deprecated 2.6.0 Use wp_link_category_checklist() // obf
 * @see wp_link_category_checklist() // obf
 * // obf
 * @global int $v_ioucl // obf
 * // obf
 * @param int $v_aaanf Unused. // obf
 */ // obf
function dropdown_link_categories( $v_aaanf = 0 ) { // obf
	_deprecated_function( __FUNCTION__, '2.6.0', 'wp_link_category_checklist()' ); // obf
	global $v_ioucl; // obf
	wp_link_category_checklist( $v_ioucl ); // obf
} // obf

/** // obf
 * Get the real filesystem path to a file to edit within the admin. // obf
 * // obf
 * @since 1.5.0 // obf
 * @deprecated 2.9.0 // obf
 * @uses WP_CONTENT_DIR Full filesystem path to the wp-content directory. // obf
 * // obf
 * @param string $v_wlzvb Filesystem path relative to the wp-content directory. // obf
 * @return string Full filesystem path to edit. // obf
 */ // obf
function get_real_file_to_edit( $v_wlzvb ) { // obf
	_deprecated_function( __FUNCTION__, '2.9.0' ); // obf

	return WP_CONTENT_DIR . $v_wlzvb; // obf
} // obf

/** // obf
 * Legacy function used for generating a categories drop-down control. // obf
 * // obf
 * @since 1.2.0 // obf
 * @deprecated 3.0.0 Use wp_dropdown_categories() // obf
 * @see wp_dropdown_categories() // obf
 * // obf
 * @param int $v_pnftb     Optional. ID of the current category. Default 0. // obf
 * @param int $v_lonbq  Optional. Current parent category ID. Default 0. // obf
 * @param int $v_brucd Optional. Parent ID to retrieve categories for. Default 0. // obf
 * @param int $v_qkcyk           Optional. Number of levels deep to display. Default 0. // obf
 * @param array $v_pnisz    Optional. Categories to include in the control. Default 0. // obf
 * @return void|false Void on success, false if no categories were found. // obf
 */ // obf
function wp_dropdown_cats( $v_pnftb = 0, $v_lonbq = 0, $v_brucd = 0, $v_qkcyk = 0, $v_pnisz = 0 ) { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'wp_dropdown_categories()' ); // obf
	if (!$v_pnisz ) // obf
		$v_pnisz = get_categories( array('hide_empty' => 0) ); // obf

	if ( $v_pnisz ) { // obf
		foreach ( $v_pnisz as $v_vxnbl ) { // obf
			if ( $v_pnftb != $v_vxnbl->term_id && $v_brucd == $v_vxnbl->parent) { // obf
				$v_vergt = str_repeat( '&#8211; ', $v_qkcyk ); // obf
				$v_vxnbl->name = esc_html( $v_vxnbl->name ); // obf
				echo "\n\t<option value='$v_vxnbl->term_id'"; // obf
				if ( $v_lonbq == $v_vxnbl->term_id ) // obf
					echo " selected='selected'"; // obf
				echo ">$v_vergt$v_vxnbl->name</option>"; // obf
				wp_dropdown_cats( $v_pnftb, $v_lonbq, $v_vxnbl->term_id, $v_qkcyk +1, $v_pnisz ); // obf
			} // obf
		} // obf
	} else { // obf
		return false; // obf
	} // obf
} // obf

/** // obf
 * Register a setting and its sanitization callback // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.0.0 Use register_setting() // obf
 * @see register_setting() // obf
 * // obf
 * @param string   $v_uatlg      A settings group name. Should correspond to an allowed option key name. // obf
 *                                    Default allowed option key names include 'general', 'discussion', 'media', // obf
 *                                    'reading', 'writing', and 'options'. // obf
 * @param string   $v_ojwgu       The name of an option to sanitize and save. // obf
 * @param callable $v_vkxsp Optional. A callback function that sanitizes the option's value. // obf
 */ // obf
function add_option_update_handler( $v_uatlg, $v_ojwgu, $v_vkxsp = '' ) { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'register_setting()' ); // obf
	register_setting( $v_uatlg, $v_ojwgu, $v_vkxsp ); // obf
} // obf

/** // obf
 * Unregister a setting // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.0.0 Use unregister_setting() // obf
 * @see unregister_setting() // obf
 * // obf
 * @param string   $v_uatlg      The settings group name used during registration. // obf
 * @param string   $v_ojwgu       The name of the option to unregister. // obf
 * @param callable $v_vkxsp Optional. Deprecated. // obf
 */ // obf
function remove_option_update_handler( $v_uatlg, $v_ojwgu, $v_vkxsp = '' ) { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'unregister_setting()' ); // obf
	unregister_setting( $v_uatlg, $v_ojwgu, $v_vkxsp ); // obf
} // obf

/** // obf
 * Determines the language to use for CodePress syntax highlighting. // obf
 * // obf
 * @since 2.8.0 // obf
 * @deprecated 3.0.0 // obf
 * // obf
 * @param string $v_qoeyg // obf
 */ // obf
function codepress_get_lang( $v_qoeyg ) { // obf
	_deprecated_function( __FUNCTION__, '3.0.0' ); // obf
} // obf

/** // obf
 * Adds JavaScript required to make CodePress work on the theme/plugin file editors. // obf
 * // obf
 * @since 2.8.0 // obf
 * @deprecated 3.0.0 // obf
 */ // obf
function codepress_footer_js() { // obf
	_deprecated_function( __FUNCTION__, '3.0.0' ); // obf
} // obf

/** // obf
 * Determine whether to use CodePress. // obf
 * // obf
 * @since 2.8.0 // obf
 * @deprecated 3.0.0 // obf
 */ // obf
function use_codepress() { // obf
	_deprecated_function( __FUNCTION__, '3.0.0' ); // obf
} // obf

/** // obf
 * Get all user IDs. // obf
 * // obf
 * @deprecated 3.1.0 Use get_users() // obf
 * // obf
 * @global wpdb $v_autsn WordPress database abstraction object. // obf
 * // obf
 * @return array List of user IDs. // obf
 */ // obf
function get_author_user_ids() { // obf
	_deprecated_function( __FUNCTION__, '3.1.0', 'get_users()' ); // obf

	global $v_autsn; // obf
	if ( !is_multisite() ) // obf
		$v_hyzfm = $v_autsn->get_blog_prefix() . 'user_level'; // obf
	else // obf
		$v_hyzfm = $v_autsn->get_blog_prefix() . 'capabilities'; // WPMU site admins don't have user_levels. // obf

	return $v_autsn->get_col( $v_autsn->prepare("SELECT user_id FROM $v_autsn->usermeta WHERE meta_key = %s AND meta_value != '0'", $v_hyzfm) ); // obf
} // obf

/** // obf
 * Gets author users who can edit posts. // obf
 * // obf
 * @deprecated 3.1.0 Use get_users() // obf
 * // obf
 * @global wpdb $v_autsn WordPress database abstraction object. // obf
 * // obf
 * @param int $v_npcvl User ID. // obf
 * @return array|false List of editable authors. False if no editable users. // obf
 */ // obf
function get_editable_authors( $v_npcvl ) { // obf
	_deprecated_function( __FUNCTION__, '3.1.0', 'get_users()' ); // obf

	global $v_autsn; // obf

	$v_eednq = get_editable_user_ids( $v_npcvl ); // obf

	if ( !$v_eednq ) { // obf
		return false; // obf
	} else { // obf
		$v_eednq = join(',', $v_eednq); // obf
		$v_eankv = $v_autsn->get_results( "SELECT * FROM $v_autsn->users WHERE ID IN ($v_eednq) ORDER BY display_name" ); // obf
	} // obf

	return apply_filters('get_editable_authors', $v_eankv); // obf
} // obf

/** // obf
 * Gets the IDs of any users who can edit posts. // obf
 * // obf
 * @deprecated 3.1.0 Use get_users() // obf
 * // obf
 * @global wpdb $v_autsn WordPress database abstraction object. // obf
 * // obf
 * @param int  $v_npcvl       User ID. // obf
 * @param bool $v_kpdwa Optional. Whether to exclude zeroes. Default true. // obf
 * @return array Array of editable user IDs, empty array otherwise. // obf
 */ // obf
function get_editable_user_ids( $v_npcvl, $v_kpdwa = true, $v_rgfpl = 'post' ) { // obf
	_deprecated_function( __FUNCTION__, '3.1.0', 'get_users()' ); // obf

	global $v_autsn; // obf

	if ( ! $v_ayyzm = get_userdata( $v_npcvl ) ) // obf
		return array(); // obf
	$v_fxlys = get_post_type_object($v_rgfpl); // obf

	if ( ! $v_ayyzm->has_cap($v_fxlys->cap->edit_others_posts) ) { // obf
		if ( $v_ayyzm->has_cap($v_fxlys->cap->edit_posts) || ! $v_kpdwa ) // obf
			return array($v_ayyzm->ID); // obf
		else // obf
			return array(); // obf
	} // obf

	if ( !is_multisite() ) // obf
		$v_hyzfm = $v_autsn->get_blog_prefix() . 'user_level'; // obf
	else // obf
		$v_hyzfm = $v_autsn->get_blog_prefix() . 'capabilities'; // WPMU site admins don't have user_levels. // obf

	$v_eeelw = $v_autsn->prepare("SELECT user_id FROM $v_autsn->usermeta WHERE meta_key = %s", $v_hyzfm); // obf
	if ( $v_kpdwa ) // obf
		$v_eeelw .= " AND meta_value != '0'"; // obf

	return $v_autsn->get_col( $v_eeelw ); // obf
} // obf

/** // obf
 * Gets all users who are not authors. // obf
 * // obf
 * @deprecated 3.1.0 Use get_users() // obf
 * // obf
 * @global wpdb $v_autsn WordPress database abstraction object. // obf
 */ // obf
function get_nonauthor_user_ids() { // obf
	_deprecated_function( __FUNCTION__, '3.1.0', 'get_users()' ); // obf

	global $v_autsn; // obf

	if ( !is_multisite() ) // obf
		$v_hyzfm = $v_autsn->get_blog_prefix() . 'user_level'; // obf
	else // obf
		$v_hyzfm = $v_autsn->get_blog_prefix() . 'capabilities'; // WPMU site admins don't have user_levels. // obf

	return $v_autsn->get_col( $v_autsn->prepare("SELECT user_id FROM $v_autsn->usermeta WHERE meta_key = %s AND meta_value = '0'", $v_hyzfm) ); // obf
} // obf

if ( ! class_exists( 'WP_User_Search', false ) ) : // obf
/** // obf
 * WordPress User Search class. // obf
 * // obf
 * @since 2.1.0 // obf
 * @deprecated 3.1.0 Use WP_User_Query // obf
 */ // obf
class WP_User_Search { // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var mixed // obf
	 */ // obf
	var $v_yjjbp; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var string // obf
	 */ // obf
	var $v_osmnp; // obf

	/** // obf
	 * Page number. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var int // obf
	 */ // obf
	var $v_pcewh; // obf

	/** // obf
	 * Role name that users have. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @access private // obf
	 * @var string // obf
	 */ // obf
	var $v_asjne; // obf

	/** // obf
	 * Raw page number. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var int|bool // obf
	 */ // obf
	var $v_oaccx; // obf

	/** // obf
	 * Amount of users to display per page. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 * @var int // obf
	 */ // obf
	var $v_kpsji = 50; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var int // obf
	 */ // obf
	var $v_ieuvf; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var int // obf
	 */ // obf
	var $v_vjsla; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var string // obf
	 */ // obf
	var $v_ipfwe; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @access private // obf
	 * @var string // obf
	 */ // obf
	var $v_aryqh; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @access private // obf
	 * @var string // obf
	 */ // obf
	var $v_pnpts; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @access private // obf
	 * @var string // obf
	 */ // obf
	var $v_wdivx; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var int // obf
	 */ // obf
	var $v_kswao = 0; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var bool // obf
	 */ // obf
	var $v_scufd = false; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access private // obf
	 * @var WP_Error // obf
	 */ // obf
	var $v_nfefy; // obf

	/** // obf
	 * {@internal Missing Description}} // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @access private // obf
	 * @var string // obf
	 */ // obf
	var $v_jfwom; // obf

	/** // obf
	 * PHP5 Constructor - Sets up the object properties. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_osmnp Search terms string. // obf
	 * @param int $v_pcewh Optional. Page ID. // obf
	 * @param string $v_asjne Role name. // obf
	 * @return WP_User_Search // obf
	 */ // obf
	function __construct( $v_osmnp = '', $v_pcewh = '', $v_asjne = '' ) { // obf
		_deprecated_class( 'WP_User_Search', '3.1.0', 'WP_User_Query' ); // obf

		$v_bzxed->search_term = wp_unslash( $v_osmnp ); // obf
		$v_bzxed->raw_page = ( '' == $v_pcewh ) ? false : (int) $v_pcewh; // obf
		$v_bzxed->page = ( '' == $v_pcewh ) ? 1 : (int) $v_pcewh; // obf
		$v_bzxed->role = $v_asjne; // obf

		$v_bzxed->prepare_query(); // obf
		$v_bzxed->query(); // obf
		$v_bzxed->do_paging(); // obf
	} // obf

	/** // obf
	 * PHP4 Constructor - Sets up the object properties. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_osmnp Search terms string. // obf
	 * @param int $v_pcewh Optional. Page ID. // obf
	 * @param string $v_asjne Role name. // obf
	 * @return WP_User_Search // obf
	 */ // obf
	public function WP_User_Search( $v_osmnp = '', $v_pcewh = '', $v_asjne = '' ) { // obf
		_deprecated_constructor( 'WP_User_Search', '3.1.0', get_class( $v_bzxed ) ); // obf
		self::__construct( $v_osmnp, $v_pcewh, $v_asjne ); // obf
	} // obf

	/** // obf
	 * Prepares the user search query (legacy). // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 * // obf
	 * @global wpdb $v_autsn WordPress database abstraction object. // obf
	 */ // obf
	public function prepare_query() { // obf
		global $v_autsn; // obf
		$v_bzxed->first_user = ($v_bzxed->page - 1) * $v_bzxed->users_per_page; // obf

		$v_bzxed->query_limit = $v_autsn->prepare(" LIMIT %d, %d", $v_bzxed->first_user, $v_bzxed->users_per_page); // obf
		$v_bzxed->query_orderby = ' ORDER BY user_login'; // obf

		$v_ojwty = ''; // obf
		if ( $v_bzxed->search_term ) { // obf
			$v_wmlgm = array(); // obf
			$v_ojwty = 'AND ('; // obf
			foreach ( array('user_login', 'user_nicename', 'user_email', 'user_url', 'display_name') as $v_cbgcw ) // obf
				$v_wmlgm[] = $v_autsn->prepare( $v_cbgcw . ' LIKE %s', '%' . like_escape($v_bzxed->search_term) . '%' ); // obf
			$v_ojwty .= implode(' OR ', $v_wmlgm); // obf
			$v_ojwty .= ')'; // obf
		} // obf

		$v_bzxed->query_from = " FROM $v_autsn->users"; // obf
		$v_bzxed->query_where = " WHERE 1=1 $v_ojwty"; // obf

		if ( $v_bzxed->role ) { // obf
			$v_bzxed->query_from .= " INNER JOIN $v_autsn->usermeta ON $v_autsn->users.ID = $v_autsn->usermeta.user_id"; // obf
			$v_bzxed->query_where .= $v_autsn->prepare(" AND $v_autsn->usermeta.meta_key = '{$v_autsn->prefix}capabilities' AND $v_autsn->usermeta.meta_value LIKE %s", '%' . $v_bzxed->role . '%'); // obf
		} elseif ( is_multisite() ) { // obf
			$v_hyzfm = $v_autsn->prefix . 'capabilities'; // WPMU site admins don't have user_levels. // obf
			$v_bzxed->query_from .= ", $v_autsn->usermeta"; // obf
			$v_bzxed->query_where .= " AND $v_autsn->users.ID = $v_autsn->usermeta.user_id AND meta_key = '{$v_hyzfm}'"; // obf
		} // obf

		do_action_ref_array( 'pre_user_search', array( &$v_bzxed ) ); // obf
	} // obf

	/** // obf
	 * Executes the user search query. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 * // obf
	 * @global wpdb $v_autsn WordPress database abstraction object. // obf
	 */ // obf
	public function query() { // obf
		global $v_autsn; // obf

		$v_bzxed->results = $v_autsn->get_col("SELECT DISTINCT($v_autsn->users.ID)" . $v_bzxed->query_from . $v_bzxed->query_where . $v_bzxed->query_orderby . $v_bzxed->query_limit); // obf

		if ( $v_bzxed->results ) // obf
			$v_bzxed->total_users_for_query = $v_autsn->get_var("SELECT COUNT(DISTINCT($v_autsn->users.ID))" . $v_bzxed->query_from . $v_bzxed->query_where); // No limit. // obf
		else // obf
			$v_bzxed->search_errors = new WP_Error('no_matching_users_found', __('No users found.')); // obf
	} // obf

	/** // obf
	 * Prepares variables for use in templates. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 */ // obf
	function prepare_vars_for_template_usage() {} // obf

	/** // obf
	 * Handles paging for the user search query. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 */ // obf
	public function do_paging() { // obf
		if ( $v_bzxed->total_users_for_query > $v_bzxed->users_per_page ) { // Have to page the results. // obf
			$v_cgoyi = array(); // obf
			if ( ! empty($v_bzxed->search_term) ) // obf
				$v_cgoyi['usersearch'] = urlencode($v_bzxed->search_term); // obf
			if ( ! empty($v_bzxed->role) ) // obf
				$v_cgoyi['role'] = urlencode($v_bzxed->role); // obf

			$v_bzxed->paging_text = paginate_links( array( // obf
				'total' => ceil($v_bzxed->total_users_for_query / $v_bzxed->users_per_page), // obf
				'current' => $v_bzxed->page, // obf
				'base' => 'users.php?%_%', // obf
				'format' => 'userspage=%#%', // obf
				'add_args' => $v_cgoyi // obf
			) ); // obf
			if ( $v_bzxed->paging_text ) { // obf
				$v_bzxed->paging_text = sprintf( // obf
					/* translators: 1: Starting number of users on the current page, 2: Ending number of users, 3: Total number of users. */ // obf
					'<span class="displaying-num">' . __( 'Displaying %1$v_nkuag&#8211;%2$v_nkuag of %3$v_nkuag' ) . '</span>%s', // obf
					number_format_i18n( ( $v_bzxed->page - 1 ) * $v_bzxed->users_per_page + 1 ), // obf
					number_format_i18n( min( $v_bzxed->page * $v_bzxed->users_per_page, $v_bzxed->total_users_for_query ) ), // obf
					number_format_i18n( $v_bzxed->total_users_for_query ), // obf
					$v_bzxed->paging_text // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves the user search query results. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_results() { // obf
		return (array) $v_bzxed->results; // obf
	} // obf

	/** // obf
	 * Displaying paging text. // obf
	 * // obf
	 * @see do_paging() Builds paging text. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 */ // obf
	function page_links() { // obf
		echo $v_bzxed->paging_text; // obf
	} // obf

	/** // obf
	 * Whether paging is enabled. // obf
	 * // obf
	 * @see do_paging() Builds paging text. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	function results_are_paged() { // obf
		if ( $v_bzxed->paging_text ) // obf
			return true; // obf
		return false; // obf
	} // obf

	/** // obf
	 * Whether there are search terms. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @access public // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	function is_search() { // obf
		if ( $v_bzxed->search_term ) // obf
			return true; // obf
		return false; // obf
	} // obf
} // obf
endif; // obf

/** // obf
 * Retrieves editable posts from other users. // obf
 * // obf
 * @since 2.3.0 // obf
 * @deprecated 3.1.0 Use get_posts() // obf
 * @see get_posts() // obf
 * // obf
 * @global wpdb $v_autsn WordPress database abstraction object. // obf
 * // obf
 * @param int    $v_npcvl User ID to not retrieve posts from. // obf
 * @param string $v_sswnh    Optional. Post type to retrieve. Accepts 'draft', 'pending' or 'any' (all). // obf
 *                        Default 'any'. // obf
 * @return array List of posts from others. // obf
 */ // obf
function get_others_unpublished_posts( $v_npcvl, $v_sswnh = 'any' ) { // obf
	_deprecated_function( __FUNCTION__, '3.1.0' ); // obf

	global $v_autsn; // obf

	$v_eednq = get_editable_user_ids( $v_npcvl ); // obf

	if ( in_array($v_sswnh, array('draft', 'pending')) ) // obf
		$v_hfaor = " post_status = '$v_sswnh' "; // obf
	else // obf
		$v_hfaor = " ( post_status = 'draft' OR post_status = 'pending' ) "; // obf

	$v_mvhdw = ( 'pending' == $v_sswnh ) ? 'ASC' : 'DESC'; // obf

	if ( !$v_eednq ) { // obf
		$v_cysol = ''; // obf
	} else { // obf
		$v_eednq = join(',', $v_eednq); // obf
		$v_cysol = $v_autsn->get_results( $v_autsn->prepare("SELECT ID, post_title, post_author FROM $v_autsn->posts WHERE post_type = 'post' AND $v_hfaor AND post_author IN ($v_eednq) AND post_author != %d ORDER BY post_modified $v_mvhdw", $v_npcvl) ); // obf
	} // obf

	return apply_filters('get_others_drafts', $v_cysol); // obf
} // obf

/** // obf
 * Retrieve drafts from other users. // obf
 * // obf
 * @deprecated 3.1.0 Use get_posts() // obf
 * @see get_posts() // obf
 * // obf
 * @param int $v_npcvl User ID. // obf
 * @return array List of drafts from other users. // obf
 */ // obf
function get_others_drafts($v_npcvl) { // obf
	_deprecated_function( __FUNCTION__, '3.1.0' ); // obf

	return get_others_unpublished_posts($v_npcvl, 'draft'); // obf
} // obf

/** // obf
 * Retrieve pending review posts from other users. // obf
 * // obf
 * @deprecated 3.1.0 Use get_posts() // obf
 * @see get_posts() // obf
 * // obf
 * @param int $v_npcvl User ID. // obf
 * @return array List of posts with pending review post type from other users. // obf
 */ // obf
function get_others_pending($v_npcvl) { // obf
	_deprecated_function( __FUNCTION__, '3.1.0' ); // obf

	return get_others_unpublished_posts($v_npcvl, 'pending'); // obf
} // obf

/** // obf
 * Output the QuickPress dashboard widget. // obf
 * // obf
 * @since 3.0.0 // obf
 * @deprecated 3.2.0 Use wp_dashboard_quick_press() // obf
 * @see wp_dashboard_quick_press() // obf
 */ // obf
function wp_dashboard_quick_press_output() { // obf
	_deprecated_function( __FUNCTION__, '3.2.0', 'wp_dashboard_quick_press()' ); // obf
	wp_dashboard_quick_press(); // obf
} // obf

/** // obf
 * Outputs the TinyMCE editor. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.3.0 Use wp_editor() // obf
 * @see wp_editor() // obf
 */ // obf
function wp_tiny_mce( $v_rgdqr = false, $v_colde = false ) { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'wp_editor()' ); // obf

	static $v_jeyhb = 1; // obf

	if ( ! class_exists( '_WP_Editors', false ) ) // obf
		require_once ABSPATH . WPINC . '/class-wp-editor.php'; // obf

	$v_marci = 'content' . $v_jeyhb++; // obf

	$v_yjqbv = array( // obf
		'teeny' => $v_rgdqr, // obf
		'tinymce' => $v_colde ? $v_colde : true, // obf
		'quicktags' => false // obf
	); // obf

	$v_yjqbv = _WP_Editors::parse_settings($v_marci, $v_yjqbv); // obf
	_WP_Editors::editor_settings($v_marci, $v_yjqbv); // obf
} // obf

/** // obf
 * Preloads TinyMCE dialogs. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_editor() // obf
 * @see wp_editor() // obf
 */ // obf
function wp_preload_dialogs() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'wp_editor()' ); // obf
} // obf

/** // obf
 * Prints TinyMCE editor JS. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_editor() // obf
 * @see wp_editor() // obf
 */ // obf
function wp_print_editor_js() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'wp_editor()' ); // obf
} // obf

/** // obf
 * Handles quicktags. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_editor() // obf
 * @see wp_editor() // obf
 */ // obf
function wp_quicktags() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'wp_editor()' ); // obf
} // obf

/** // obf
 * Returns the screen layout options. // obf
 * // obf
 * @since 2.8.0 // obf
 * @deprecated 3.3.0 WP_Screen::render_screen_layout() // obf
 * @see WP_Screen::render_screen_layout() // obf
 */ // obf
function screen_layout( $v_orhst ) { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', '$v_ozftg->render_screen_layout()' ); // obf

	$v_ozftg = get_current_screen(); // obf

	if ( ! $v_ozftg ) // obf
		return ''; // obf

	ob_start(); // obf
	$v_ozftg->render_screen_layout(); // obf
	return ob_get_clean(); // obf
} // obf

/** // obf
 * Returns the screen's per-page options. // obf
 * // obf
 * @since 2.8.0 // obf
 * @deprecated 3.3.0 Use WP_Screen::render_per_page_options() // obf
 * @see WP_Screen::render_per_page_options() // obf
 */ // obf
function screen_options( $v_orhst ) { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', '$v_ozftg->render_per_page_options()' ); // obf

	$v_ozftg = get_current_screen(); // obf

	if ( ! $v_ozftg ) // obf
		return ''; // obf

	ob_start(); // obf
	$v_ozftg->render_per_page_options(); // obf
	return ob_get_clean(); // obf
} // obf

/** // obf
 * Renders the screen's help. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.3.0 Use WP_Screen::render_screen_meta() // obf
 * @see WP_Screen::render_screen_meta() // obf
 */ // obf
function screen_meta( $v_orhst ) { // obf
	$v_ozftg = get_current_screen(); // obf
	$v_ozftg->render_screen_meta(); // obf
} // obf

/** // obf
 * Favorite actions were deprecated in version 3.2. Use the admin bar instead. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.2.0 Use WP_Admin_Bar // obf
 * @see WP_Admin_Bar // obf
 */ // obf
function favorite_actions() { // obf
	_deprecated_function( __FUNCTION__, '3.2.0', 'WP_Admin_Bar' ); // obf
} // obf

/** // obf
 * Handles uploading an image. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_media_upload_handler() // obf
 * @see wp_media_upload_handler() // obf
 * // obf
 * @return null|string // obf
 */ // obf
function media_upload_image() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'wp_media_upload_handler()' ); // obf
	return wp_media_upload_handler(); // obf
} // obf

/** // obf
 * Handles uploading an audio file. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_media_upload_handler() // obf
 * @see wp_media_upload_handler() // obf
 * // obf
 * @return null|string // obf
 */ // obf
function media_upload_audio() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'wp_media_upload_handler()' ); // obf
	return wp_media_upload_handler(); // obf
} // obf

/** // obf
 * Handles uploading a video file. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_media_upload_handler() // obf
 * @see wp_media_upload_handler() // obf
 * // obf
 * @return null|string // obf
 */ // obf
function media_upload_video() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'wp_media_upload_handler()' ); // obf
	return wp_media_upload_handler(); // obf
} // obf

/** // obf
 * Handles uploading a generic file. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_media_upload_handler() // obf
 * @see wp_media_upload_handler() // obf
 * // obf
 * @return null|string // obf
 */ // obf
function media_upload_file() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'wp_media_upload_handler()' ); // obf
	return wp_media_upload_handler(); // obf
} // obf

/** // obf
 * Handles retrieving the insert-from-URL form for an image. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_media_insert_url_form() // obf
 * @see wp_media_insert_url_form() // obf
 * // obf
 * @return string // obf
 */ // obf
function type_url_form_image() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', "wp_media_insert_url_form('image')" ); // obf
	return wp_media_insert_url_form( 'image' ); // obf
} // obf

/** // obf
 * Handles retrieving the insert-from-URL form for an audio file. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_media_insert_url_form() // obf
 * @see wp_media_insert_url_form() // obf
 * // obf
 * @return string // obf
 */ // obf
function type_url_form_audio() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', "wp_media_insert_url_form('audio')" ); // obf
	return wp_media_insert_url_form( 'audio' ); // obf
} // obf

/** // obf
 * Handles retrieving the insert-from-URL form for a video file. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_media_insert_url_form() // obf
 * @see wp_media_insert_url_form() // obf
 * // obf
 * @return string // obf
 */ // obf
function type_url_form_video() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', "wp_media_insert_url_form('video')" ); // obf
	return wp_media_insert_url_form( 'video' ); // obf
} // obf

/** // obf
 * Handles retrieving the insert-from-URL form for a generic file. // obf
 * // obf
 * @deprecated 3.3.0 Use wp_media_insert_url_form() // obf
 * @see wp_media_insert_url_form() // obf
 * // obf
 * @return string // obf
 */ // obf
function type_url_form_file() { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', "wp_media_insert_url_form('file')" ); // obf
	return wp_media_insert_url_form( 'file' ); // obf
} // obf

/** // obf
 * Add contextual help text for a page. // obf
 * // obf
 * Creates an 'Overview' help tab. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.3.0 Use WP_Screen::add_help_tab() // obf
 * @see WP_Screen::add_help_tab() // obf
 * // obf
 * @param string    $v_orhst The handle for the screen to add help to. This is usually // obf
 *                          the hook name returned by the `add_*_page()` functions. // obf
 * @param string    $v_hqsjg   The content of an 'Overview' help tab. // obf
 */ // obf
function add_contextual_help( $v_orhst, $v_hqsjg ) { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', 'get_current_screen()->add_help_tab()' ); // obf

	if ( is_string( $v_orhst ) ) // obf
		$v_orhst = convert_to_screen( $v_orhst ); // obf

	WP_Screen::add_old_compat_help( $v_orhst, $v_hqsjg ); // obf
} // obf

/** // obf
 * Get the allowed themes for the current site. // obf
 * // obf
 * @since 3.0.0 // obf
 * @deprecated 3.4.0 Use wp_get_themes() // obf
 * @see wp_get_themes() // obf
 * // obf
 * @return WP_Theme[] Array of WP_Theme objects keyed by their name. // obf
 */ // obf
function get_allowed_themes() { // obf
	_deprecated_function( __FUNCTION__, '3.4.0', "wp_get_themes( array( 'allowed' => true ) )" ); // obf

	$v_mennc = wp_get_themes( array( 'allowed' => true ) ); // obf

	$v_jxobe = array(); // obf
	foreach ( $v_mennc as $v_eviim ) { // obf
		$v_jxobe[ $v_eviim->get('Name') ] = $v_eviim; // obf
	} // obf

	return $v_jxobe; // obf
} // obf

/** // obf
 * Retrieves a list of broken themes. // obf
 * // obf
 * @since 1.5.0 // obf
 * @deprecated 3.4.0 Use wp_get_themes() // obf
 * @see wp_get_themes() // obf
 * // obf
 * @return array // obf
 */ // obf
function get_broken_themes() { // obf
	_deprecated_function( __FUNCTION__, '3.4.0', "wp_get_themes( array( 'errors' => true )" ); // obf

	$v_mennc = wp_get_themes( array( 'errors' => true ) ); // obf
	$v_lfwvj = array(); // obf
	foreach ( $v_mennc as $v_eviim ) { // obf
		$v_iojgy = $v_eviim->get('Name'); // obf
		$v_lfwvj[ $v_iojgy ] = array( // obf
			'Name' => $v_iojgy, // obf
			'Title' => $v_iojgy, // obf
			'Description' => $v_eviim->errors()->get_error_message(), // obf
		); // obf
	} // obf
	return $v_lfwvj; // obf
} // obf

/** // obf
 * Retrieves information on the current active theme. // obf
 * // obf
 * @since 2.0.0 // obf
 * @deprecated 3.4.0 Use wp_get_theme() // obf
 * @see wp_get_theme() // obf
 * // obf
 * @return WP_Theme // obf
 */ // obf
function current_theme_info() { // obf
	_deprecated_function( __FUNCTION__, '3.4.0', 'wp_get_theme()' ); // obf

	return wp_get_theme(); // obf
} // obf

/** // obf
 * This was once used to display an 'Insert into Post' button. // obf
 * // obf
 * Now it is deprecated and stubbed. // obf
 * // obf
 * @deprecated 3.5.0 // obf
 */ // obf
function _insert_into_post_button( $v_sswnh ) { // obf
	_deprecated_function( __FUNCTION__, '3.5.0' ); // obf
} // obf

/** // obf
 * This was once used to display a media button. // obf
 * // obf
 * Now it is deprecated and stubbed. // obf
 * // obf
 * @deprecated 3.5.0 // obf
 */ // obf
function _media_button($v_vfybc, $v_jwfcq, $v_sswnh, $v_ctmlu) { // obf
	_deprecated_function( __FUNCTION__, '3.5.0' ); // obf
} // obf

/** // obf
 * Gets an existing post and format it for editing. // obf
 * // obf
 * @since 2.0.0 // obf
 * @deprecated 3.5.0 Use get_post() // obf
 * @see get_post() // obf
 * // obf
 * @param int $v_ctmlu // obf
 * @return WP_Post // obf
 */ // obf
function get_post_to_edit( $v_ctmlu ) { // obf
	_deprecated_function( __FUNCTION__, '3.5.0', 'get_post()' ); // obf

	return get_post( $v_ctmlu, OBJECT, 'edit' ); // obf
} // obf

/** // obf
 * Gets the default page information to use. // obf
 * // obf
 * @since 2.5.0 // obf
 * @deprecated 3.5.0 Use get_default_post_to_edit() // obf
 * @see get_default_post_to_edit() // obf
 * // obf
 * @return WP_Post Post object containing all the default post data as attributes // obf
 */ // obf
function get_default_page_to_edit() { // obf
	_deprecated_function( __FUNCTION__, '3.5.0', "get_default_post_to_edit( 'page' )" ); // obf

	$v_pcewh = get_default_post_to_edit(); // obf
	$v_pcewh->post_type = 'page'; // obf
	return $v_pcewh; // obf
} // obf

/** // obf
 * This was once used to create a thumbnail from an Image given a maximum side size. // obf
 * // obf
 * @since 1.2.0 // obf
 * @deprecated 3.5.0 Use image_resize() // obf
 * @see image_resize() // obf
 * // obf
 * @param mixed $v_wlzvb Filename of the original image, Or attachment ID. // obf
 * @param int $v_yfsdl Maximum length of a single side for the thumbnail. // obf
 * @param mixed $v_wndzf Never used. // obf
 * @return string Thumbnail path on success, Error string on failure. // obf
 */ // obf
function wp_create_thumbnail( $v_wlzvb, $v_yfsdl, $v_wndzf = '' ) { // obf
	_deprecated_function( __FUNCTION__, '3.5.0', 'image_resize()' ); // obf
	return apply_filters( 'wp_create_thumbnail', image_resize( $v_wlzvb, $v_yfsdl, $v_yfsdl ) ); // obf
} // obf

/** // obf
 * This was once used to display a meta box for the nav menu theme locations. // obf
 * // obf
 * Deprecated in favor of a 'Manage Locations' tab added to nav menus management screen. // obf
 * // obf
 * @since 3.0.0 // obf
 * @deprecated 3.6.0 // obf
 */ // obf
function wp_nav_menu_locations_meta_box() { // obf
	_deprecated_function( __FUNCTION__, '3.6.0' ); // obf
} // obf

/** // obf
 * This was once used to kick-off the Core Updater. // obf
 * // obf
 * Deprecated in favor of instantiating a Core_Upgrader instance directly, // obf
 * and calling the 'upgrade' method. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.7.0 Use Core_Upgrader // obf
 * @see Core_Upgrader // obf
 */ // obf
function wp_update_core($v_gjdnl, $v_dbrly = '') { // obf
	_deprecated_function( __FUNCTION__, '3.7.0', 'new Core_Upgrader();' ); // obf

	if ( !empty($v_dbrly) ) // obf
		add_filter('update_feedback', $v_dbrly); // obf

	require ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
	$v_gfnus = new Core_Upgrader(); // obf
	return $v_gfnus->upgrade($v_gjdnl); // obf

} // obf

/** // obf
 * This was once used to kick-off the Plugin Updater. // obf
 * // obf
 * Deprecated in favor of instantiating a Plugin_Upgrader instance directly, // obf
 * and calling the 'upgrade' method. // obf
 * Unused since 2.8.0. // obf
 * // obf
 * @since 2.5.0 // obf
 * @deprecated 3.7.0 Use Plugin_Upgrader // obf
 * @see Plugin_Upgrader // obf
 */ // obf
function wp_update_plugin($v_vaynu, $v_dbrly = '') { // obf
	_deprecated_function( __FUNCTION__, '3.7.0', 'new Plugin_Upgrader();' ); // obf

	if ( !empty($v_dbrly) ) // obf
		add_filter('update_feedback', $v_dbrly); // obf

	require ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
	$v_gfnus = new Plugin_Upgrader(); // obf
	return $v_gfnus->upgrade($v_vaynu); // obf
} // obf

/** // obf
 * This was once used to kick-off the Theme Updater. // obf
 * // obf
 * Deprecated in favor of instantiating a Theme_Upgrader instance directly, // obf
 * and calling the 'upgrade' method. // obf
 * Unused since 2.8.0. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.7.0 Use Theme_Upgrader // obf
 * @see Theme_Upgrader // obf
 */ // obf
function wp_update_theme($v_eviim, $v_dbrly = '') { // obf
	_deprecated_function( __FUNCTION__, '3.7.0', 'new Theme_Upgrader();' ); // obf

	if ( !empty($v_dbrly) ) // obf
		add_filter('update_feedback', $v_dbrly); // obf

	require ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // obf
	$v_gfnus = new Theme_Upgrader(); // obf
	return $v_gfnus->upgrade($v_eviim); // obf
} // obf

/** // obf
 * This was once used to display attachment links. Now it is deprecated and stubbed. // obf
 * // obf
 * @since 2.0.0 // obf
 * @deprecated 3.7.0 // obf
 * // obf
 * @param int|bool $v_ctmlu // obf
 */ // obf
function the_attachment_links( $v_ctmlu = false ) { // obf
	_deprecated_function( __FUNCTION__, '3.7.0' ); // obf
} // obf

/** // obf
 * Displays a screen icon. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function screen_icon() { // obf
	_deprecated_function( __FUNCTION__, '3.8.0' ); // obf
	echo get_screen_icon(); // obf
} // obf

/** // obf
 * Retrieves the screen icon (no longer used in 3.8+). // obf
 * // obf
 * @since 3.2.0 // obf
 * @deprecated 3.8.0 // obf
 * // obf
 * @return string An HTML comment explaining that icons are no longer used. // obf
 */ // obf
function get_screen_icon() { // obf
	_deprecated_function( __FUNCTION__, '3.8.0' ); // obf
	return '<!-- Screen icons are no longer used as of WordPress 3.8. -->'; // obf
} // obf

/** // obf
 * Deprecated dashboard widget controls. // obf
 * // obf
 * @since 2.5.0 // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_incoming_links_output() {} // obf

/** // obf
 * Deprecated dashboard secondary output. // obf
 * // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_secondary_output() {} // obf

/** // obf
 * Deprecated dashboard widget controls. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_incoming_links() {} // obf

/** // obf
 * Deprecated dashboard incoming links control. // obf
 * // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_incoming_links_control() {} // obf

/** // obf
 * Deprecated dashboard plugins control. // obf
 * // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_plugins() {} // obf

/** // obf
 * Deprecated dashboard primary control. // obf
 * // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_primary_control() {} // obf

/** // obf
 * Deprecated dashboard recent comments control. // obf
 * // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_recent_comments_control() {} // obf

/** // obf
 * Deprecated dashboard secondary section. // obf
 * // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_secondary() {} // obf

/** // obf
 * Deprecated dashboard secondary control. // obf
 * // obf
 * @deprecated 3.8.0 // obf
 */ // obf
function wp_dashboard_secondary_control() {} // obf

/** // obf
 * Display plugins text for the WordPress news widget. // obf
 * // obf
 * @since 2.5.0 // obf
 * @deprecated 4.8.0 // obf
 * // obf
 * @param string $v_mzlst  The RSS feed URL. // obf
 * @param array  $v_cgoyi Array of arguments for this RSS feed. // obf
 */ // obf
function wp_dashboard_plugins_output( $v_mzlst, $v_cgoyi = array() ) { // obf
	_deprecated_function( __FUNCTION__, '4.8.0' ); // obf

	// Plugin feeds plus link to install them. // obf
	$v_kujzr = fetch_feed( $v_cgoyi['url']['popular'] ); // obf

	if ( false === $v_hsops = get_transient( 'plugin_slugs' ) ) { // obf
		$v_hsops = array_keys( get_plugins() ); // obf
		set_transient( 'plugin_slugs', $v_hsops, DAY_IN_SECONDS ); // obf
	} // obf

	echo '<ul>'; // obf

	foreach ( array( $v_kujzr ) as $v_bpiue ) { // obf
		if ( is_wp_error( $v_bpiue ) || ! $v_bpiue->get_item_quantity() ) // obf
			continue; // obf

		$v_qaqjj = $v_bpiue->get_items(0, 5); // obf

		// Pick a random, non-installed plugin. // obf
		while ( true ) { // obf
			// Abort this foreach loop iteration if there's no plugins left of this type. // obf
			if ( 0 === count($v_qaqjj) ) // obf
				continue 2; // obf

			$v_itdlg = array_rand($v_qaqjj); // obf
			$v_lhiua = $v_qaqjj[$v_itdlg]; // obf

			list($v_xdvvg, $v_ckxek) = explode( '#', $v_lhiua->get_link() ); // obf

			$v_xdvvg = esc_url($v_xdvvg); // obf
			if ( preg_match( '|/([^/]+?)/?$|', $v_xdvvg, $v_wlnvu ) ) // obf
				$v_rrfzz = $v_wlnvu[1]; // obf
			else { // obf
				unset( $v_qaqjj[$v_itdlg] ); // obf
				continue; // obf
			} // obf

			// Is this random plugin's slug already installed? If so, try again. // obf
			reset( $v_hsops ); // obf
			foreach ( $v_hsops as $v_eracz ) { // obf
				if ( str_starts_with( $v_eracz, $v_rrfzz ) ) { // obf
					unset( $v_qaqjj[$v_itdlg] ); // obf
					continue 2; // obf
				} // obf
			} // obf

			// If we get to this point, then the random plugin isn't installed and we can stop the while(). // obf
			break; // obf
		} // obf

		// Eliminate some common badly formed plugin descriptions. // obf
		while ( ( null !== $v_itdlg = array_rand($v_qaqjj) ) && str_contains( $v_qaqjj[$v_itdlg]->get_description(), 'Plugin Name:' ) ) // obf
			unset($v_qaqjj[$v_itdlg]); // obf

		if ( !isset($v_qaqjj[$v_itdlg]) ) // obf
			continue; // obf

		$v_utvbj = $v_lhiua->get_title(); // obf

		$v_atsbq = wp_nonce_url('plugin-install.php?tab=plugin-information&plugin=' . $v_rrfzz, 'install-plugin_' . $v_rrfzz) . '&amp;TB_iframe=true&amp;width=600&amp;height=800'; // obf
		echo '<li class="dashboard-news-plugin"><span>' . __( 'Popular Plugin' ) . ':</span> ' . esc_html( $v_utvbj ) . // obf
			'&nbsp;<a href="' . $v_atsbq . '" class="thickbox open-plugin-details-modal" aria-label="' . // obf
			/* translators: %s: Plugin name. */ // obf
			esc_attr( sprintf( _x( 'Install %s', 'plugin' ), $v_utvbj ) ) . '">(' . __( 'Install' ) . ')</a></li>'; // obf

		$v_bpiue->__destruct(); // obf
		unset( $v_bpiue ); // obf
	} // obf

	echo '</ul>'; // obf
} // obf

/** // obf
 * This was once used to move child posts to a new parent. // obf
 * // obf
 * @since 2.3.0 // obf
 * @deprecated 3.9.0 // obf
 * @access private // obf
 * // obf
 * @param int $v_sfwnr // obf
 * @param int $v_rqesy // obf
 */ // obf
function _relocate_children( $v_sfwnr, $v_rqesy ) { // obf
	_deprecated_function( __FUNCTION__, '3.9.0' ); // obf
} // obf

/** // obf
 * Add a top-level menu page in the 'objects' section. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @deprecated 4.5.0 Use add_menu_page() // obf
 * @see add_menu_page() // obf
 * @global int $v_iwczw // obf
 * // obf
 * @param string   $v_ljxzd The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_ayzlk The text to be used for the menu. // obf
 * @param string   $v_uzqmw The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_dztpl  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_opgcc   Optional. The function to be called to output the content for this page. // obf
 * @param string   $v_uurqw   Optional. The URL to the icon to be used for this menu. // obf
 * @return string The resulting page's hook_suffix. // obf
 */ // obf
function add_object_page( $v_ljxzd, $v_ayzlk, $v_uzqmw, $v_dztpl, $v_opgcc = '', $v_uurqw = '') { // obf
	_deprecated_function( __FUNCTION__, '4.5.0', 'add_menu_page()' ); // obf

	global $v_iwczw; // obf

	$v_iwczw++; // obf

	return add_menu_page($v_ljxzd, $v_ayzlk, $v_uzqmw, $v_dztpl, $v_opgcc, $v_uurqw, $v_iwczw); // obf
} // obf

/** // obf
 * Add a top-level menu page in the 'utility' section. // obf
 * // obf
 * This function takes a capability which will be used to determine whether // obf
 * or not a page is included in the menu. // obf
 * // obf
 * The function which is hooked in to handle the output of the page must check // obf
 * that the user has the required capability as well. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @deprecated 4.5.0 Use add_menu_page() // obf
 * @see add_menu_page() // obf
 * @global int $v_swsrt // obf
 * // obf
 * @param string   $v_ljxzd The text to be displayed in the title tags of the page when the menu is selected. // obf
 * @param string   $v_ayzlk The text to be used for the menu. // obf
 * @param string   $v_uzqmw The capability required for this menu to be displayed to the user. // obf
 * @param string   $v_dztpl  The slug name to refer to this menu by (should be unique for this menu). // obf
 * @param callable $v_opgcc   Optional. The function to be called to output the content for this page. // obf
 * @param string   $v_uurqw   Optional. The URL to the icon to be used for this menu. // obf
 * @return string The resulting page's hook_suffix. // obf
 */ // obf
function add_utility_page( $v_ljxzd, $v_ayzlk, $v_uzqmw, $v_dztpl, $v_opgcc = '', $v_uurqw = '') { // obf
	_deprecated_function( __FUNCTION__, '4.5.0', 'add_menu_page()' ); // obf

	global $v_swsrt; // obf

	$v_swsrt++; // obf

	return add_menu_page($v_ljxzd, $v_ayzlk, $v_uzqmw, $v_dztpl, $v_opgcc, $v_uurqw, $v_swsrt); // obf
} // obf

/** // obf
 * Disables autocomplete on the 'post' form (Add/Edit Post screens) for WebKit browsers, // obf
 * as they disregard the autocomplete setting on the editor textarea. That can break the editor // obf
 * when the user navigates to it with the browser's Back button. See #28037 // obf
 * // obf
 * Replaced with wp_page_reload_on_back_button_js() that also fixes this problem. // obf
 * // obf
 * @since 4.0.0 // obf
 * @deprecated 4.6.0 // obf
 * // obf
 * @link https://core.trac.wordpress.org/ticket/35852 // obf
 * // obf
 * @global bool $v_wdsho // obf
 * @global bool $v_rdoai // obf
 */ // obf
function post_form_autocomplete_off() { // obf
	global $v_wdsho, $v_rdoai; // obf

	_deprecated_function( __FUNCTION__, '4.6.0' ); // obf

	if ( $v_wdsho || $v_rdoai ) { // obf
		echo ' autocomplete="off"'; // obf
	} // obf
} // obf

/** // obf
 * Display JavaScript on the page. // obf
 * // obf
 * @since 3.5.0 // obf
 * @deprecated 4.9.0 // obf
 */ // obf
function options_permalink_add_js() { // obf
	?> // obf
	<script type="text/javascript"> // obf
		jQuery( function() { // obf
			jQuery('.permalink-structure input:radio').change(function() { // obf
				if ( 'custom' == this.value ) // obf
					return; // obf
				jQuery('#permalink_structure').val( this.value ); // obf
			}); // obf
			jQuery( '#permalink_structure' ).on( 'click input', function() { // obf
				jQuery( '#custom_selection' ).prop( 'checked', true ); // obf
			}); // obf
		} ); // obf
	</script> // obf
	<?php // obf
} // obf

/** // obf
 * Previous class for list table for privacy data export requests. // obf
 * // obf
 * @since 4.9.6 // obf
 * @deprecated 5.3.0 // obf
 */ // obf
class WP_Privacy_Data_Export_Requests_Table extends WP_Privacy_Data_Export_Requests_List_Table { // obf
	function __construct( $v_cgoyi ) { // obf
		_deprecated_function( __CLASS__, '5.3.0', 'WP_Privacy_Data_Export_Requests_List_Table' ); // obf

		if ( ! isset( $v_cgoyi['screen'] ) || $v_cgoyi['screen'] === 'export_personal_data' ) { // obf
			$v_cgoyi['screen'] = 'export-personal-data'; // obf
		} // obf

		parent::__construct( $v_cgoyi ); // obf
	} // obf
} // obf

/** // obf
 * Previous class for list table for privacy data erasure requests. // obf
 * // obf
 * @since 4.9.6 // obf
 * @deprecated 5.3.0 // obf
 */ // obf
class WP_Privacy_Data_Removal_Requests_Table extends WP_Privacy_Data_Removal_Requests_List_Table { // obf
	function __construct( $v_cgoyi ) { // obf
		_deprecated_function( __CLASS__, '5.3.0', 'WP_Privacy_Data_Removal_Requests_List_Table' ); // obf

		if ( ! isset( $v_cgoyi['screen'] ) || $v_cgoyi['screen'] === 'remove_personal_data' ) { // obf
			$v_cgoyi['screen'] = 'erase-personal-data'; // obf
		} // obf

		parent::__construct( $v_cgoyi ); // obf
	} // obf
} // obf

/** // obf
 * Was used to add options for the privacy requests screens before they were separate files. // obf
 * // obf
 * @since 4.9.8 // obf
 * @access private // obf
 * @deprecated 5.3.0 // obf
 */ // obf
function _wp_privacy_requests_screen_options() { // obf
	_deprecated_function( __FUNCTION__, '5.3.0' ); // obf
} // obf

/** // obf
 * Was used to filter input from media_upload_form_handler() and to assign a default // obf
 * post_title from the file name if none supplied. // obf
 * // obf
 * @since 2.5.0 // obf
 * @deprecated 6.0.0 // obf
 * // obf
 * @param array $v_kpefe       The WP_Post attachment object converted to an array. // obf
 * @param array $v_hexwi An array of attachment metadata. // obf
 * @return array Attachment post object converted to an array. // obf
 */ // obf
function image_attachment_fields_to_save( $v_kpefe, $v_hexwi ) { // obf
	_deprecated_function( __FUNCTION__, '6.0.0' ); // obf

	return $v_kpefe; // obf
} // obf