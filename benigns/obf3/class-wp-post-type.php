

<?php // obf
/** // obf
 * Post API: WP_Post_Type class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Post // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used for interacting with post types. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see register_post_type() // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Post_Type { // obf
	/** // obf
	 * Post type key. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string $v_ixzdx // obf
	 */ // obf
	public $v_ixzdx; // obf

	/** // obf
	 * Name of the post type shown in the menu. Usually plural. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string $v_tszql // obf
	 */ // obf
	public $v_tszql; // obf

	/** // obf
	 * Labels object for this post type. // obf
	 * // obf
	 * If not set, post labels are inherited for non-hierarchical types // obf
	 * and page labels for hierarchical ones. // obf
	 * // obf
	 * @see get_post_type_labels() // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var stdClass $v_eskmn // obf
	 */ // obf
	public $v_eskmn; // obf

	/** // obf
	 * Default labels. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var (string|null)[][] $v_wbffq // obf
	 */ // obf
	protected static $v_wbffq = array(); // obf

	/** // obf
	 * A short descriptive summary of what the post type is. // obf
	 * // obf
	 * Default empty. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string $v_jwnnz // obf
	 */ // obf
	public $v_jwnnz = ''; // obf

	/** // obf
	 * Whether a post type is intended for use publicly either via the admin interface or by front-end users. // obf
	 * // obf
	 * While the default settings of $v_gusnm, $v_eaxrl, $v_rgkfz, and $v_sxnxx // obf
	 * are inherited from public, each does not rely on this relationship and controls a very specific intention. // obf
	 * // obf
	 * Default false. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_qvibf // obf
	 */ // obf
	public $v_qvibf = false; // obf

	/** // obf
	 * Whether the post type is hierarchical (e.g. page). // obf
	 * // obf
	 * Default false. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_xcfbl // obf
	 */ // obf
	public $v_xcfbl = false; // obf

	/** // obf
	 * Whether to exclude posts with this post type from front end search // obf
	 * results. // obf
	 * // obf
	 * Default is the opposite value of $v_qvibf. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_gusnm // obf
	 */ // obf
	public $v_gusnm = null; // obf

	/** // obf
	 * Whether queries can be performed on the front end for the post type as part of `parse_request()`. // obf
	 * // obf
	 * Endpoints would include: // obf
	 * // obf
	 * - `?post_type={post_type_key}` // obf
	 * - `?{post_type_key}={single_post_slug}` // obf
	 * - `?{post_type_query_var}={single_post_slug}` // obf
	 * // obf
	 * Default is the value of $v_qvibf. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_eaxrl // obf
	 */ // obf
	public $v_eaxrl = null; // obf

	/** // obf
	 * Whether this post type is embeddable. // obf
	 * // obf
	 * Default is the value of $v_qvibf. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @var bool $v_evvzq // obf
	 */ // obf
	public $v_evvzq = null; // obf

	/** // obf
	 * Whether to generate and allow a UI for managing this post type in the admin. // obf
	 * // obf
	 * Default is the value of $v_qvibf. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_rgkfz // obf
	 */ // obf
	public $v_rgkfz = null; // obf

	/** // obf
	 * Where to show the post type in the admin menu. // obf
	 * // obf
	 * To work, $v_rgkfz must be true. If true, the post type is shown in its own top level menu. If false, no menu is // obf
	 * shown. If a string of an existing top level menu ('tools.php' or 'edit.php?post_type=page', for example), the // obf
	 * post type will be placed as a sub-menu of that. // obf
	 * // obf
	 * Default is the value of $v_rgkfz. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool|string $v_lujfs // obf
	 */ // obf
	public $v_lujfs = null; // obf

	/** // obf
	 * Makes this post type available for selection in navigation menus. // obf
	 * // obf
	 * Default is the value $v_qvibf. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_sxnxx // obf
	 */ // obf
	public $v_sxnxx = null; // obf

	/** // obf
	 * Makes this post type available via the admin bar. // obf
	 * // obf
	 * Default is the value of $v_lujfs. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_hkwkq // obf
	 */ // obf
	public $v_hkwkq = null; // obf

	/** // obf
	 * The position in the menu order the post type should appear. // obf
	 * // obf
	 * To work, $v_lujfs must be true. Default null (at the bottom). // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var int $v_txfoe // obf
	 */ // obf
	public $v_txfoe = null; // obf

	/** // obf
	 * The URL or reference to the icon to be used for this menu. // obf
	 * // obf
	 * Pass a base64-encoded SVG using a data URI, which will be colored to match the color scheme. // obf
	 * This should begin with 'data:image/svg+xml;base64,'. Pass the name of a Dashicons helper class // obf
	 * to use a font icon, e.g. 'dashicons-chart-pie'. Pass 'none' to leave div.wp-menu-image empty // obf
	 * so an icon can be added via CSS. // obf
	 * // obf
	 * Defaults to use the posts icon. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string $v_kwwkx // obf
	 */ // obf
	public $v_kwwkx = null; // obf

	/** // obf
	 * The string to use to build the read, edit, and delete capabilities. // obf
	 * // obf
	 * May be passed as an array to allow for alternative plurals when using // obf
	 * this argument as a base to construct the capabilities, e.g. // obf
	 * array( 'story', 'stories' ). Default 'post'. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string $v_miazp // obf
	 */ // obf
	public $v_miazp = 'post'; // obf

	/** // obf
	 * Whether to use the internal default meta capability handling. // obf
	 * // obf
	 * Default false. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_xxzew // obf
	 */ // obf
	public $v_xxzew = false; // obf

	/** // obf
	 * Provide a callback function that sets up the meta boxes for the edit form. // obf
	 * // obf
	 * Do `remove_meta_box()` and `add_meta_box()` calls in the callback. Default null. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var callable $v_griko // obf
	 */ // obf
	public $v_griko = null; // obf

	/** // obf
	 * An array of taxonomy identifiers that will be registered for the post type. // obf
	 * // obf
	 * Taxonomies can be registered later with `register_taxonomy()` or `register_taxonomy_for_object_type()`. // obf
	 * // obf
	 * Default empty array. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string[] $v_xnysg // obf
	 */ // obf
	public $v_xnysg = array(); // obf

	/** // obf
	 * Whether there should be post type archives, or if a string, the archive slug to use. // obf
	 * // obf
	 * Will generate the proper rewrite rules if $v_yijlv is enabled. Default false. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool|string $v_ypzzk // obf
	 */ // obf
	public $v_ypzzk = false; // obf

	/** // obf
	 * Sets the query_var key for this post type. // obf
	 * // obf
	 * Defaults to $v_dqlkr key. If false, a post type cannot be loaded at `?{query_var}={post_slug}`. // obf
	 * If specified as a string, the query `?{query_var_string}={post_slug}` will be valid. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string|bool $v_lvtms // obf
	 */ // obf
	public $v_lvtms; // obf

	/** // obf
	 * Whether to allow this post type to be exported. // obf
	 * // obf
	 * Default true. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_gusok // obf
	 */ // obf
	public $v_gusok = true; // obf

	/** // obf
	 * Whether to delete posts of this type when deleting a user. // obf
	 * // obf
	 * - If true, posts of this type belonging to the user will be moved to Trash when the user is deleted. // obf
	 * - If false, posts of this type belonging to the user will *not* be trashed or deleted. // obf
	 * - If not set (the default), posts are trashed if post type supports the 'author' feature. // obf
	 *   Otherwise posts are not trashed or deleted. // obf
	 * // obf
	 * Default null. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_iglss // obf
	 */ // obf
	public $v_iglss = null; // obf

	/** // obf
	 * Array of blocks to use as the default initial state for an editor session. // obf
	 * // obf
	 * Each item should be an array containing block name and optional attributes. // obf
	 * // obf
	 * Default empty array. // obf
	 * // obf
	 * @link https://developer.wordpress.org/block-editor/developers/block-api/block-templates/ // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var array[] $v_wycmo // obf
	 */ // obf
	public $v_wycmo = array(); // obf

	/** // obf
	 * Whether the block template should be locked if $v_wycmo is set. // obf
	 * // obf
	 * - If set to 'all', the user is unable to insert new blocks, move existing blocks // obf
	 *   and delete blocks. // obf
	 * - If set to 'insert', the user is able to move existing blocks but is unable to insert // obf
	 *   new blocks and delete blocks. // obf
	 * // obf
	 * Default false. // obf
	 * // obf
	 * @link https://developer.wordpress.org/block-editor/developers/block-api/block-templates/ // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string|false $v_sauvk // obf
	 */ // obf
	public $v_sauvk = false; // obf

	/** // obf
	 * Whether this post type is a native or "built-in" post_type. // obf
	 * // obf
	 * Default false. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var bool $v_yehlc // obf
	 */ // obf
	public $v_yehlc = false; // obf

	/** // obf
	 * URL segment to use for edit link of this post type. // obf
	 * // obf
	 * Default 'post.php?post=%d'. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string $v_gdlgy // obf
	 */ // obf
	public $v_gdlgy = 'post.php?post=%d'; // obf

	/** // obf
	 * Post type capabilities. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var stdClass $v_zcziw // obf
	 */ // obf
	public $v_zcziw; // obf

	/** // obf
	 * Triggers the handling of rewrites for this post type. // obf
	 * // obf
	 * Defaults to true, using $v_dqlkr as slug. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array|false $v_yijlv // obf
	 */ // obf
	public $v_yijlv; // obf

	/** // obf
	 * The features supported by the post type. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var array|bool $v_husww // obf
	 */ // obf
	public $v_husww; // obf

	/** // obf
	 * Whether this post type should appear in the REST API. // obf
	 * // obf
	 * Default false. If true, standard endpoints will be registered with // obf
	 * respect to $v_kqupc and $v_zdqcy. // obf
	 * // obf
	 * @since 4.7.4 // obf
	 * @var bool $v_mprzz // obf
	 */ // obf
	public $v_mprzz; // obf

	/** // obf
	 * The base path for this post type's REST API endpoints. // obf
	 * // obf
	 * @since 4.7.4 // obf
	 * @var string|bool $v_kqupc // obf
	 */ // obf
	public $v_kqupc; // obf

	/** // obf
	 * The namespace for this post type's REST API endpoints. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var string|bool $v_pnkai // obf
	 */ // obf
	public $v_pnkai; // obf

	/** // obf
	 * The controller for this post type's REST API endpoints. // obf
	 * // obf
	 * Custom controllers must extend WP_REST_Controller. // obf
	 * // obf
	 * @since 4.7.4 // obf
	 * @var string|bool $v_zdqcy // obf
	 */ // obf
	public $v_zdqcy; // obf

	/** // obf
	 * The controller instance for this post type's REST API endpoints. // obf
	 * // obf
	 * Lazily computed. Should be accessed using {@see WP_Post_Type::get_rest_controller()}. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * @var WP_REST_Controller $v_dphjv // obf
	 */ // obf
	public $v_dphjv; // obf

	/** // obf
	 * The controller for this post type's revisions REST API endpoints. // obf
	 * // obf
	 * Custom controllers must extend WP_REST_Controller. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string|bool $v_tcvou // obf
	 */ // obf
	public $v_tcvou; // obf

	/** // obf
	 * The controller instance for this post type's revisions REST API endpoints. // obf
	 * // obf
	 * Lazily computed. Should be accessed using {@see WP_Post_Type::get_revisions_rest_controller()}. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var WP_REST_Controller $v_tqhmh // obf
	 */ // obf
	public $v_tqhmh; // obf

	/** // obf
	 * The controller for this post type's autosave REST API endpoints. // obf
	 * // obf
	 * Custom controllers must extend WP_REST_Controller. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string|bool $v_ocolg // obf
	 */ // obf
	public $v_ocolg; // obf

	/** // obf
	 * The controller instance for this post type's autosave REST API endpoints. // obf
	 * // obf
	 * Lazily computed. Should be accessed using {@see WP_Post_Type::get_autosave_rest_controller()}. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var WP_REST_Controller $v_pslrg // obf
	 */ // obf
	public $v_pslrg; // obf

	/** // obf
	 * A flag to register the post type REST API controller after its associated autosave / revisions controllers, instead of before. Registration order affects route matching priority. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var bool $v_zkbdp // obf
	 */ // obf
	public $v_zkbdp; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * See the register_post_type() function for accepted arguments for `$v_ubcxq`. // obf
	 * // obf
	 * Will populate object properties from the provided arguments and assign other // obf
	 * default properties based on that information. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @see register_post_type() // obf
	 * // obf
	 * @param string       $v_dqlkr Post type key. // obf
	 * @param array|string $v_ubcxq      Optional. Array or string of arguments for registering a post type. // obf
	 *                                See register_post_type() for information on accepted arguments. // obf
	 *                                Default empty array. // obf
	 */ // obf
	public function __construct( $v_dqlkr, $v_ubcxq = array() ) { // obf
		$v_kmpma->name = $v_dqlkr; // obf

		$v_kmpma->set_props( $v_ubcxq ); // obf
	} // obf

	/** // obf
	 * Sets post type properties. // obf
	 * // obf
	 * See the register_post_type() function for accepted arguments for `$v_ubcxq`. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param array|string $v_ubcxq Array or string of arguments for registering a post type. // obf
	 */ // obf
	public function set_props( $v_ubcxq ) { // obf
		$v_ubcxq = wp_parse_args( $v_ubcxq ); // obf

		/** // obf
		 * Filters the arguments for registering a post type. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array  $v_ubcxq      Array of arguments for registering a post type. // obf
		 *                          See the register_post_type() function for accepted arguments. // obf
		 * @param string $v_dqlkr Post type key. // obf
		 */ // obf
		$v_ubcxq = apply_filters( 'register_post_type_args', $v_ubcxq, $v_kmpma->name ); // obf

		$v_dqlkr = $v_kmpma->name; // obf

		/** // obf
		 * Filters the arguments for registering a specific post type. // obf
		 * // obf
		 * The dynamic portion of the filter name, `$v_dqlkr`, refers to the post type key. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `register_post_post_type_args` // obf
		 *  - `register_page_post_type_args` // obf
		 * // obf
		 * @since 6.0.0 // obf
		 * @since 6.4.0 Added `late_route_registration`, `autosave_rest_controller_class` and `revisions_rest_controller_class` arguments. // obf
		 * // obf
		 * @param array  $v_ubcxq      Array of arguments for registering a post type. // obf
		 *                          See the register_post_type() function for accepted arguments. // obf
		 * @param string $v_dqlkr Post type key. // obf
		 */ // obf
		$v_ubcxq = apply_filters( "register_{$v_dqlkr}_post_type_args", $v_ubcxq, $v_kmpma->name ); // obf

		$v_zqycv = ! empty( $v_ubcxq['_edit_link'] ); // obf

		// Args prefixed with an underscore are reserved for internal use. // obf
		$v_qugki = array( // obf
			'labels'                          => array(), // obf
			'description'                     => '', // obf
			'public'                          => false, // obf
			'hierarchical'                    => false, // obf
			'exclude_from_search'             => null, // obf
			'publicly_queryable'              => null, // obf
			'embeddable'                      => null, // obf
			'show_ui'                         => null, // obf
			'show_in_menu'                    => null, // obf
			'show_in_nav_menus'               => null, // obf
			'show_in_admin_bar'               => null, // obf
			'menu_position'                   => null, // obf
			'menu_icon'                       => null, // obf
			'capability_type'                 => 'post', // obf
			'capabilities'                    => array(), // obf
			'map_meta_cap'                    => null, // obf
			'supports'                        => array(), // obf
			'register_meta_box_cb'            => null, // obf
			'taxonomies'                      => array(), // obf
			'has_archive'                     => false, // obf
			'rewrite'                         => true, // obf
			'query_var'                       => true, // obf
			'can_export'                      => true, // obf
			'delete_with_user'                => null, // obf
			'show_in_rest'                    => false, // obf
			'rest_base'                       => false, // obf
			'rest_namespace'                  => false, // obf
			'rest_controller_class'           => false, // obf
			'autosave_rest_controller_class'  => false, // obf
			'revisions_rest_controller_class' => false, // obf
			'late_route_registration'         => false, // obf
			'template'                        => array(), // obf
			'template_lock'                   => false, // obf
			'_builtin'                        => false, // obf
			'_edit_link'                      => 'post.php?post=%d', // obf
		); // obf

		$v_ubcxq = array_merge( $v_qugki, $v_ubcxq ); // obf

		$v_ubcxq['name'] = $v_kmpma->name; // obf

		// If not set, default to the setting for 'public'. // obf
		if ( null === $v_ubcxq['publicly_queryable'] ) { // obf
			$v_ubcxq['publicly_queryable'] = $v_ubcxq['public']; // obf
		} // obf

		// If not set, default to the setting for 'public'. // obf
		if ( null === $v_ubcxq['show_ui'] ) { // obf
			$v_ubcxq['show_ui'] = $v_ubcxq['public']; // obf
		} // obf

		// If not set, default to the setting for 'public'. // obf
		if ( null === $v_ubcxq['embeddable'] ) { // obf
			$v_ubcxq['embeddable'] = $v_ubcxq['public']; // obf
		} // obf

		// If not set, default rest_namespace to wp/v2 if show_in_rest is true. // obf
		if ( false === $v_ubcxq['rest_namespace'] && ! empty( $v_ubcxq['show_in_rest'] ) ) { // obf
			$v_ubcxq['rest_namespace'] = 'wp/v2'; // obf
		} // obf

		// If not set, default to the setting for 'show_ui'. // obf
		if ( null === $v_ubcxq['show_in_menu'] || ! $v_ubcxq['show_ui'] ) { // obf
			$v_ubcxq['show_in_menu'] = $v_ubcxq['show_ui']; // obf
		} // obf

		// If not set, default to the setting for 'show_in_menu'. // obf
		if ( null === $v_ubcxq['show_in_admin_bar'] ) { // obf
			$v_ubcxq['show_in_admin_bar'] = (bool) $v_ubcxq['show_in_menu']; // obf
		} // obf

		// If not set, default to the setting for 'public'. // obf
		if ( null === $v_ubcxq['show_in_nav_menus'] ) { // obf
			$v_ubcxq['show_in_nav_menus'] = $v_ubcxq['public']; // obf
		} // obf

		// If not set, default to true if not public, false if public. // obf
		if ( null === $v_ubcxq['exclude_from_search'] ) { // obf
			$v_ubcxq['exclude_from_search'] = ! $v_ubcxq['public']; // obf
		} // obf

		// Back compat with quirky handling in version 3.0. #14122. // obf
		if ( empty( $v_ubcxq['capabilities'] ) // obf
			&& null === $v_ubcxq['map_meta_cap'] && in_array( $v_ubcxq['capability_type'], array( 'post', 'page' ), true ) // obf
		) { // obf
			$v_ubcxq['map_meta_cap'] = true; // obf
		} // obf

		// If not set, default to false. // obf
		if ( null === $v_ubcxq['map_meta_cap'] ) { // obf
			$v_ubcxq['map_meta_cap'] = false; // obf
		} // obf

		// If there's no specified edit link and no UI, remove the edit link. // obf
		if ( ! $v_ubcxq['show_ui'] && ! $v_zqycv ) { // obf
			$v_ubcxq['_edit_link'] = ''; // obf
		} // obf

		$v_kmpma->cap = get_post_type_capabilities( (object) $v_ubcxq ); // obf
		unset( $v_ubcxq['capabilities'] ); // obf

		if ( is_array( $v_ubcxq['capability_type'] ) ) { // obf
			$v_ubcxq['capability_type'] = $v_ubcxq['capability_type'][0]; // obf
		} // obf

		if ( false !== $v_ubcxq['query_var'] ) { // obf
			if ( true === $v_ubcxq['query_var'] ) { // obf
				$v_ubcxq['query_var'] = $v_kmpma->name; // obf
			} else { // obf
				$v_ubcxq['query_var'] = sanitize_title_with_dashes( $v_ubcxq['query_var'] ); // obf
			} // obf
		} // obf

		if ( false !== $v_ubcxq['rewrite'] && ( is_admin() || get_option( 'permalink_structure' ) ) ) { // obf
			if ( ! is_array( $v_ubcxq['rewrite'] ) ) { // obf
				$v_ubcxq['rewrite'] = array(); // obf
			} // obf
			if ( empty( $v_ubcxq['rewrite']['slug'] ) ) { // obf
				$v_ubcxq['rewrite']['slug'] = $v_kmpma->name; // obf
			} // obf
			if ( ! isset( $v_ubcxq['rewrite']['with_front'] ) ) { // obf
				$v_ubcxq['rewrite']['with_front'] = true; // obf
			} // obf
			if ( ! isset( $v_ubcxq['rewrite']['pages'] ) ) { // obf
				$v_ubcxq['rewrite']['pages'] = true; // obf
			} // obf
			if ( ! isset( $v_ubcxq['rewrite']['feeds'] ) || ! $v_ubcxq['has_archive'] ) { // obf
				$v_ubcxq['rewrite']['feeds'] = (bool) $v_ubcxq['has_archive']; // obf
			} // obf
			if ( ! isset( $v_ubcxq['rewrite']['ep_mask'] ) ) { // obf
				if ( isset( $v_ubcxq['permalink_epmask'] ) ) { // obf
					$v_ubcxq['rewrite']['ep_mask'] = $v_ubcxq['permalink_epmask']; // obf
				} else { // obf
					$v_ubcxq['rewrite']['ep_mask'] = EP_PERMALINK; // obf
				} // obf
			} // obf
		} // obf

		foreach ( $v_ubcxq as $v_tttlm => $v_kshzz ) { // obf
			$v_kmpma->$v_tttlm = $v_kshzz; // obf
		} // obf

		$v_kmpma->labels = get_post_type_labels( $v_kmpma ); // obf
		$v_kmpma->label  = $v_kmpma->labels->name; // obf
	} // obf

	/** // obf
	 * Sets the features support for the post type. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function add_supports() { // obf
		if ( ! empty( $v_kmpma->supports ) ) { // obf
			foreach ( $v_kmpma->supports as $v_brufn => $v_ubcxq ) { // obf
				if ( is_array( $v_ubcxq ) ) { // obf
					add_post_type_support( $v_kmpma->name, $v_brufn, $v_ubcxq ); // obf
				} else { // obf
					add_post_type_support( $v_kmpma->name, $v_ubcxq ); // obf
				} // obf
			} // obf
			unset( $v_kmpma->supports ); // obf

			/* // obf
			 * 'editor' support implies 'autosave' support for backward compatibility. // obf
			 * 'autosave' support needs to be explicitly removed if not desired. // obf
			 */ // obf
			if ( // obf
				post_type_supports( $v_kmpma->name, 'editor' ) && // obf
				! post_type_supports( $v_kmpma->name, 'autosave' ) // obf
			) { // obf
				add_post_type_support( $v_kmpma->name, 'autosave' ); // obf
			} // obf
		} elseif ( false !== $v_kmpma->supports ) { // obf
			// Add default features. // obf
			add_post_type_support( $v_kmpma->name, array( 'title', 'editor', 'autosave' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds the necessary rewrite rules for the post type. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global WP_Rewrite $v_nalyc WordPress rewrite component. // obf
	 * @global WP         $v_vjlwk         Current WordPress environment instance. // obf
	 */ // obf
	public function add_rewrite_rules() { // obf
		global $v_nalyc, $v_vjlwk; // obf

		if ( false !== $v_kmpma->query_var && $v_vjlwk && is_post_type_viewable( $v_kmpma ) ) { // obf
			$v_vjlwk->add_query_var( $v_kmpma->query_var ); // obf
		} // obf

		if ( false !== $v_kmpma->rewrite && ( is_admin() || get_option( 'permalink_structure' ) ) ) { // obf
			if ( $v_kmpma->hierarchical ) { // obf
				add_rewrite_tag( "%$v_kmpma->name%", '(.+?)', $v_kmpma->query_var ? "{$v_kmpma->query_var}=" : "post_type=$v_kmpma->name&pagename=" ); // obf
			} else { // obf
				add_rewrite_tag( "%$v_kmpma->name%", '([^/]+)', $v_kmpma->query_var ? "{$v_kmpma->query_var}=" : "post_type=$v_kmpma->name&name=" ); // obf
			} // obf

			if ( $v_kmpma->has_archive ) { // obf
				$v_dmxzm = true === $v_kmpma->has_archive ? $v_kmpma->rewrite['slug'] : $v_kmpma->has_archive; // obf
				if ( $v_kmpma->rewrite['with_front'] ) { // obf
					$v_dmxzm = substr( $v_nalyc->front, 1 ) . $v_dmxzm; // obf
				} else { // obf
					$v_dmxzm = $v_nalyc->root . $v_dmxzm; // obf
				} // obf

				add_rewrite_rule( "{$v_dmxzm}/?$", "index.php?post_type=$v_kmpma->name", 'top' ); // obf
				if ( $v_kmpma->rewrite['feeds'] && $v_nalyc->feeds ) { // obf
					$v_fcegh = '(' . trim( implode( '|', $v_nalyc->feeds ) ) . ')'; // obf
					add_rewrite_rule( "{$v_dmxzm}/feed/$v_fcegh/?$", "index.php?post_type=$v_kmpma->name" . '&feed=$v_ngexq[1]', 'top' ); // obf
					add_rewrite_rule( "{$v_dmxzm}/$v_fcegh/?$", "index.php?post_type=$v_kmpma->name" . '&feed=$v_ngexq[1]', 'top' ); // obf
				} // obf
				if ( $v_kmpma->rewrite['pages'] ) { // obf
					add_rewrite_rule( "{$v_dmxzm}/{$v_nalyc->pagination_base}/([0-9]{1,})/?$", "index.php?post_type=$v_kmpma->name" . '&paged=$v_ngexq[1]', 'top' ); // obf
				} // obf
			} // obf

			$v_cqbyv         = $v_kmpma->rewrite; // obf
			$v_cqbyv['feed'] = $v_cqbyv['feeds']; // obf
			add_permastruct( $v_kmpma->name, "{$v_kmpma->rewrite['slug']}/%$v_kmpma->name%", $v_cqbyv ); // obf
		} // obf
	} // obf

	/** // obf
	 * Registers the post type meta box if a custom callback was specified. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function register_meta_boxes() { // obf
		if ( $v_kmpma->register_meta_box_cb ) { // obf
			add_action( 'add_meta_boxes_' . $v_kmpma->name, $v_kmpma->register_meta_box_cb, 10, 1 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds the future post hook action for the post type. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function add_hooks() { // obf
		add_action( 'future_' . $v_kmpma->name, '_future_post_hook', 5, 2 ); // obf
	} // obf

	/** // obf
	 * Registers the taxonomies for the post type. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function register_taxonomies() { // obf
		foreach ( $v_kmpma->taxonomies as $v_zllij ) { // obf
			register_taxonomy_for_object_type( $v_zllij, $v_kmpma->name ); // obf
		} // obf
	} // obf

	/** // obf
	 * Removes the features support for the post type. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global array $v_wunim Post type features. // obf
	 */ // obf
	public function remove_supports() { // obf
		global $v_wunim; // obf

		unset( $v_wunim[ $v_kmpma->name ] ); // obf
	} // obf

	/** // obf
	 * Removes any rewrite rules, permastructs, and rules for the post type. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @global WP_Rewrite $v_nalyc          WordPress rewrite component. // obf
	 * @global WP         $v_vjlwk                  Current WordPress environment instance. // obf
	 * @global array      $v_bpjln Used to remove meta capabilities. // obf
	 */ // obf
	public function remove_rewrite_rules() { // obf
		global $v_vjlwk, $v_nalyc, $v_bpjln; // obf

		// Remove query var. // obf
		if ( false !== $v_kmpma->query_var ) { // obf
			$v_vjlwk->remove_query_var( $v_kmpma->query_var ); // obf
		} // obf

		// Remove any rewrite rules, permastructs, and rules. // obf
		if ( false !== $v_kmpma->rewrite ) { // obf
			remove_rewrite_tag( "%$v_kmpma->name%" ); // obf
			remove_permastruct( $v_kmpma->name ); // obf
			foreach ( $v_nalyc->extra_rules_top as $v_flqmt => $v_tzqug ) { // obf
				if ( str_contains( $v_tzqug, "index.php?post_type=$v_kmpma->name" ) ) { // obf
					unset( $v_nalyc->extra_rules_top[ $v_flqmt ] ); // obf
				} // obf
			} // obf
		} // obf

		// Remove registered custom meta capabilities. // obf
		foreach ( $v_kmpma->cap as $v_zcziw ) { // obf
			unset( $v_bpjln[ $v_zcziw ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Unregisters the post type meta box if a custom callback was specified. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function unregister_meta_boxes() { // obf
		if ( $v_kmpma->register_meta_box_cb ) { // obf
			remove_action( 'add_meta_boxes_' . $v_kmpma->name, $v_kmpma->register_meta_box_cb, 10 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Removes the post type from all taxonomies. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function unregister_taxonomies() { // obf
		foreach ( get_object_taxonomies( $v_kmpma->name ) as $v_zllij ) { // obf
			unregister_taxonomy_for_object_type( $v_zllij, $v_kmpma->name ); // obf
		} // obf
	} // obf

	/** // obf
	 * Removes the future post hook action for the post type. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 */ // obf
	public function remove_hooks() { // obf
		remove_action( 'future_' . $v_kmpma->name, '_future_post_hook', 5 ); // obf
	} // obf

	/** // obf
	 * Gets the REST API controller for this post type. // obf
	 * // obf
	 * Will only instantiate the controller class once per request. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return WP_REST_Controller|null The controller instance, or null if the post type // obf
	 *                                 is set not to show in rest. // obf
	 */ // obf
	public function get_rest_controller() { // obf
		if ( ! $v_kmpma->show_in_rest ) { // obf
			return null; // obf
		} // obf

		$v_golrf = $v_kmpma->rest_controller_class ? $v_kmpma->rest_controller_class : WP_REST_Posts_Controller::class; // obf

		if ( ! class_exists( $v_golrf ) ) { // obf
			return null; // obf
		} // obf

		if ( ! is_subclass_of( $v_golrf, WP_REST_Controller::class ) ) { // obf
			return null; // obf
		} // obf

		if ( ! $v_kmpma->rest_controller ) { // obf
			$v_kmpma->rest_controller = new $v_golrf( $v_kmpma->name ); // obf
		} // obf

		if ( ! ( $v_kmpma->rest_controller instanceof $v_golrf ) ) { // obf
			return null; // obf
		} // obf

		return $v_kmpma->rest_controller; // obf
	} // obf

	/** // obf
	 * Gets the REST API revisions controller for this post type. // obf
	 * // obf
	 * Will only instantiate the controller class once per request. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return WP_REST_Controller|null The controller instance, or null if the post type // obf
	 *                                 is set not to show in rest. // obf
	 */ // obf
	public function get_revisions_rest_controller() { // obf
		if ( ! $v_kmpma->show_in_rest ) { // obf
			return null; // obf
		} // obf

		if ( ! post_type_supports( $v_kmpma->name, 'revisions' ) ) { // obf
			return null; // obf
		} // obf

		$v_golrf = $v_kmpma->revisions_rest_controller_class ? $v_kmpma->revisions_rest_controller_class : WP_REST_Revisions_Controller::class; // obf
		if ( ! class_exists( $v_golrf ) ) { // obf
			return null; // obf
		} // obf

		if ( ! is_subclass_of( $v_golrf, WP_REST_Controller::class ) ) { // obf
			return null; // obf
		} // obf

		if ( ! $v_kmpma->revisions_rest_controller ) { // obf
			$v_kmpma->revisions_rest_controller = new $v_golrf( $v_kmpma->name ); // obf
		} // obf

		if ( ! ( $v_kmpma->revisions_rest_controller instanceof $v_golrf ) ) { // obf
			return null; // obf
		} // obf

		return $v_kmpma->revisions_rest_controller; // obf
	} // obf

	/** // obf
	 * Gets the REST API autosave controller for this post type. // obf
	 * // obf
	 * Will only instantiate the controller class once per request. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return WP_REST_Controller|null The controller instance, or null if the post type // obf
	 *                                 is set not to show in rest. // obf
	 */ // obf
	public function get_autosave_rest_controller() { // obf
		if ( ! $v_kmpma->show_in_rest ) { // obf
			return null; // obf
		} // obf

		if ( ! post_type_supports( $v_kmpma->name, 'autosave' ) ) { // obf
			return null; // obf
		} // obf

		$v_golrf = $v_kmpma->autosave_rest_controller_class ? $v_kmpma->autosave_rest_controller_class : WP_REST_Autosaves_Controller::class; // obf

		if ( ! class_exists( $v_golrf ) ) { // obf
			return null; // obf
		} // obf

		if ( ! is_subclass_of( $v_golrf, WP_REST_Controller::class ) ) { // obf
			return null; // obf
		} // obf

		if ( ! $v_kmpma->autosave_rest_controller ) { // obf
			$v_kmpma->autosave_rest_controller = new $v_golrf( $v_kmpma->name ); // obf
		} // obf

		if ( ! ( $v_kmpma->autosave_rest_controller instanceof $v_golrf ) ) { // obf
			return null; // obf
		} // obf

		return $v_kmpma->autosave_rest_controller; // obf
	} // obf

	/** // obf
	 * Returns the default labels for post types. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @return (string|null)[][] The default labels for post types. // obf
	 */ // obf
	public static function get_default_labels() { // obf
		if ( ! empty( self::$v_wbffq ) ) { // obf
			return self::$v_wbffq; // obf
		} // obf

		self::$v_wbffq = array( // obf
			'name'                     => array( _x( 'Posts', 'post type general name' ), _x( 'Pages', 'post type general name' ) ), // obf
			'singular_name'            => array( _x( 'Post', 'post type singular name' ), _x( 'Page', 'post type singular name' ) ), // obf
			'add_new'                  => array( __( 'Add' ), __( 'Add' ) ), // obf
			'add_new_item'             => array( __( 'Add Post' ), __( 'Add Page' ) ), // obf
			'edit_item'                => array( __( 'Edit Post' ), __( 'Edit Page' ) ), // obf
			'new_item'                 => array( __( 'New Post' ), __( 'New Page' ) ), // obf
			'view_item'                => array( __( 'View Post' ), __( 'View Page' ) ), // obf
			'view_items'               => array( __( 'View Posts' ), __( 'View Pages' ) ), // obf
			'search_items'             => array( __( 'Search Posts' ), __( 'Search Pages' ) ), // obf
			'not_found'                => array( __( 'No posts found.' ), __( 'No pages found.' ) ), // obf
			'not_found_in_trash'       => array( __( 'No posts found in Trash.' ), __( 'No pages found in Trash.' ) ), // obf
			'parent_item_colon'        => array( null, __( 'Parent Page:' ) ), // obf
			'all_items'                => array( __( 'All Posts' ), __( 'All Pages' ) ), // obf
			'archives'                 => array( __( 'Post Archives' ), __( 'Page Archives' ) ), // obf
			'attributes'               => array( __( 'Post Attributes' ), __( 'Page Attributes' ) ), // obf
			'insert_into_item'         => array( __( 'Insert into post' ), __( 'Insert into page' ) ), // obf
			'uploaded_to_this_item'    => array( __( 'Uploaded to this post' ), __( 'Uploaded to this page' ) ), // obf
			'featured_image'           => array( _x( 'Featured image', 'post' ), _x( 'Featured image', 'page' ) ), // obf
			'set_featured_image'       => array( _x( 'Set featured image', 'post' ), _x( 'Set featured image', 'page' ) ), // obf
			'remove_featured_image'    => array( _x( 'Remove featured image', 'post' ), _x( 'Remove featured image', 'page' ) ), // obf
			'use_featured_image'       => array( _x( 'Use as featured image', 'post' ), _x( 'Use as featured image', 'page' ) ), // obf
			'filter_items_list'        => array( __( 'Filter posts list' ), __( 'Filter pages list' ) ), // obf
			'filter_by_date'           => array( __( 'Filter by date' ), __( 'Filter by date' ) ), // obf
			'items_list_navigation'    => array( __( 'Posts list navigation' ), __( 'Pages list navigation' ) ), // obf
			'items_list'               => array( __( 'Posts list' ), __( 'Pages list' ) ), // obf
			'item_published'           => array( __( 'Post published.' ), __( 'Page published.' ) ), // obf
			'item_published_privately' => array( __( 'Post published privately.' ), __( 'Page published privately.' ) ), // obf
			'item_reverted_to_draft'   => array( __( 'Post reverted to draft.' ), __( 'Page reverted to draft.' ) ), // obf
			'item_trashed'             => array( __( 'Post trashed.' ), __( 'Page trashed.' ) ), // obf
			'item_scheduled'           => array( __( 'Post scheduled.' ), __( 'Page scheduled.' ) ), // obf
			'item_updated'             => array( __( 'Post updated.' ), __( 'Page updated.' ) ), // obf
			'item_link'                => array( // obf
				_x( 'Post Link', 'navigation link block title' ), // obf
				_x( 'Page Link', 'navigation link block title' ), // obf
			), // obf
			'item_link_description'    => array( // obf
				_x( 'A link to a post.', 'navigation link block description' ), // obf
				_x( 'A link to a page.', 'navigation link block description' ), // obf
			), // obf
		); // obf

		return self::$v_wbffq; // obf
	} // obf

	/** // obf
	 * Resets the cache for the default labels. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 */ // obf
	public static function reset_default_labels() { // obf
		self::$v_wbffq = array(); // obf
	} // obf
} // obf