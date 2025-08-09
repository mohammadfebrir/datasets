

<?php // obf
/** // obf
 * User API: WP_Roles class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Users // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a user roles API. // obf
 * // obf
 * The role option is simple, the structure is organized by role name that store // obf
 * the name in value of the 'name' key. The capabilities are stored as an array // obf
 * in the value of the 'capability' key. // obf
 * // obf
 *     array ( // obf
 *          'rolename' => array ( // obf
 *              'name' => 'rolename', // obf
 *              'capabilities' => array() // obf
 *          ) // obf
 *     ) // obf
 * // obf
 * @since 2.0.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Roles { // obf
	/** // obf
	 * List of roles and capabilities. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var array[] // obf
	 */ // obf
	public $v_ptokb; // obf

	/** // obf
	 * List of the role objects. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var WP_Role[] // obf
	 */ // obf
	public $v_ptgvb = array(); // obf

	/** // obf
	 * List of role names. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_qoypq = array(); // obf

	/** // obf
	 * Option name for storing role list. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_aduft; // obf

	/** // obf
	 * Whether to use the database for retrieval and storage. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_vqwyo = true; // obf

	/** // obf
	 * The site ID the roles are initialized for. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var int // obf
	 */ // obf
	protected $v_yzffu = 0; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @since 4.9.0 The `$v_yzffu` argument was added. // obf
	 * // obf
	 * @global array $v_pfskc Used to set the 'roles' property value. // obf
	 * // obf
	 * @param int $v_yzffu Site ID to initialize roles for. Default is the current site. // obf
	 */ // obf
	public function __construct( $v_yzffu = null ) { // obf
		global $v_pfskc; // obf

		$v_arnse->use_db = empty( $v_pfskc ); // obf

		$v_arnse->for_site( $v_yzffu ); // obf
	} // obf

	/** // obf
	 * Makes private/protected methods readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_cqmmu      Method to call. // obf
	 * @param array  $v_qhsst Arguments to pass when calling. // obf
	 * @return mixed|false Return value of the callback, false otherwise. // obf
	 */ // obf
	public function __call( $v_cqmmu, $v_qhsst ) { // obf
		if ( '_init' === $v_cqmmu ) { // obf
			return $v_arnse->_init( ...$v_qhsst ); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Sets up the object properties. // obf
	 * // obf
	 * The role key is set to the current prefix for the $v_qboye object with // obf
	 * 'user_roles' appended. If the $v_pfskc global is set, then it will // obf
	 * be used and the role option will not be updated or used. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @deprecated 4.9.0 Use WP_Roles::for_site() // obf
	 */ // obf
	protected function _init() { // obf
		_deprecated_function( __METHOD__, '4.9.0', 'WP_Roles::for_site()' ); // obf

		$v_arnse->for_site(); // obf
	} // obf

	/** // obf
	 * Reinitializes the object. // obf
	 * // obf
	 * Recreates the role objects. This is typically called only by switch_to_blog() // obf
	 * after switching wpdb to a new site ID. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @deprecated 4.7.0 Use WP_Roles::for_site() // obf
	 */ // obf
	public function reinit() { // obf
		_deprecated_function( __METHOD__, '4.7.0', 'WP_Roles::for_site()' ); // obf

		$v_arnse->for_site(); // obf
	} // obf

	/** // obf
	 * Adds a role name with capabilities to the list. // obf
	 * // obf
	 * Updates the list of roles, if the role doesn't already exist. // obf
	 * // obf
	 * The capabilities are defined in the following format: `array( 'read' => true )`. // obf
	 * To explicitly deny the role a capability, set the value for that capability to false. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_fsrsi         Role name. // obf
	 * @param string $v_yizjd Role display name. // obf
	 * @param bool[] $v_ztdea Optional. List of capabilities keyed by the capability name, // obf
	 *                             e.g. `array( 'edit_posts' => true, 'delete_posts' => false )`. // obf
	 *                             Default empty array. // obf
	 * @return WP_Role|void WP_Role object, if the role is added. // obf
	 */ // obf
	public function add_role( $v_fsrsi, $v_yizjd, $v_ztdea = array() ) { // obf
		if ( empty( $v_fsrsi ) || isset( $v_arnse->roles[ $v_fsrsi ] ) ) { // obf
			return; // obf
		} // obf

		$v_arnse->roles[ $v_fsrsi ] = array( // obf
			'name'         => $v_yizjd, // obf
			'capabilities' => $v_ztdea, // obf
		); // obf
		if ( $v_arnse->use_db ) { // obf
			update_option( $v_arnse->role_key, $v_arnse->roles, true ); // obf
		} // obf
		$v_arnse->role_objects[ $v_fsrsi ] = new WP_Role( $v_fsrsi, $v_ztdea ); // obf
		$v_arnse->role_names[ $v_fsrsi ]   = $v_yizjd; // obf
		return $v_arnse->role_objects[ $v_fsrsi ]; // obf
	} // obf

	/** // obf
	 * Removes a role by name. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_fsrsi Role name. // obf
	 */ // obf
	public function remove_role( $v_fsrsi ) { // obf
		if ( ! isset( $v_arnse->role_objects[ $v_fsrsi ] ) ) { // obf
			return; // obf
		} // obf

		unset( $v_arnse->role_objects[ $v_fsrsi ] ); // obf
		unset( $v_arnse->role_names[ $v_fsrsi ] ); // obf
		unset( $v_arnse->roles[ $v_fsrsi ] ); // obf

		if ( $v_arnse->use_db ) { // obf
			update_option( $v_arnse->role_key, $v_arnse->roles ); // obf
		} // obf

		if ( get_option( 'default_role' ) === $v_fsrsi ) { // obf
			update_option( 'default_role', 'subscriber' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds a capability to role. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_fsrsi  Role name. // obf
	 * @param string $v_bffdx   Capability name. // obf
	 * @param bool   $v_tktel Optional. Whether role is capable of performing capability. // obf
	 *                      Default true. // obf
	 */ // obf
	public function add_cap( $v_fsrsi, $v_bffdx, $v_tktel = true ) { // obf
		if ( ! isset( $v_arnse->roles[ $v_fsrsi ] ) ) { // obf
			return; // obf
		} // obf

		$v_arnse->roles[ $v_fsrsi ]['capabilities'][ $v_bffdx ] = $v_tktel; // obf
		if ( $v_arnse->use_db ) { // obf
			update_option( $v_arnse->role_key, $v_arnse->roles ); // obf
		} // obf
	} // obf

	/** // obf
	 * Removes a capability from role. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_fsrsi Role name. // obf
	 * @param string $v_bffdx  Capability name. // obf
	 */ // obf
	public function remove_cap( $v_fsrsi, $v_bffdx ) { // obf
		if ( ! isset( $v_arnse->roles[ $v_fsrsi ] ) ) { // obf
			return; // obf
		} // obf

		unset( $v_arnse->roles[ $v_fsrsi ]['capabilities'][ $v_bffdx ] ); // obf
		if ( $v_arnse->use_db ) { // obf
			update_option( $v_arnse->role_key, $v_arnse->roles ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves a role object by name. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_fsrsi Role name. // obf
	 * @return WP_Role|null WP_Role object if found, null if the role does not exist. // obf
	 */ // obf
	public function get_role( $v_fsrsi ) { // obf
		if ( isset( $v_arnse->role_objects[ $v_fsrsi ] ) ) { // obf
			return $v_arnse->role_objects[ $v_fsrsi ]; // obf
		} else { // obf
			return null; // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves a list of role names. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @return string[] List of role names. // obf
	 */ // obf
	public function get_names() { // obf
		return $v_arnse->role_names; // obf
	} // obf

	/** // obf
	 * Determines whether a role name is currently in the list of available roles. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_fsrsi Role name to look up. // obf
	 * @return bool // obf
	 */ // obf
	public function is_role( $v_fsrsi ) { // obf
		return isset( $v_arnse->role_names[ $v_fsrsi ] ); // obf
	} // obf

	/** // obf
	 * Initializes all of the available roles. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function init_roles() { // obf
		if ( empty( $v_arnse->roles ) ) { // obf
			return; // obf
		} // obf

		$v_arnse->role_objects = array(); // obf
		$v_arnse->role_names   = array(); // obf
		foreach ( array_keys( $v_arnse->roles ) as $v_fsrsi ) { // obf
			$v_arnse->role_objects[ $v_fsrsi ] = new WP_Role( $v_fsrsi, $v_arnse->roles[ $v_fsrsi ]['capabilities'] ); // obf
			$v_arnse->role_names[ $v_fsrsi ]   = $v_arnse->roles[ $v_fsrsi ]['name']; // obf
		} // obf

		/** // obf
		 * Fires after the roles have been initialized, allowing plugins to add their own roles. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Roles $v_hzgzs A reference to the WP_Roles object. // obf
		 */ // obf
		do_action( 'wp_roles_init', $v_arnse ); // obf
	} // obf

	/** // obf
	 * Sets the site to operate on. Defaults to the current site. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @global wpdb $v_qboye WordPress database abstraction object. // obf
	 * // obf
	 * @param int $v_yzffu Site ID to initialize roles for. Default is the current site. // obf
	 */ // obf
	public function for_site( $v_yzffu = null ) { // obf
		global $v_qboye; // obf

		if ( ! empty( $v_yzffu ) ) { // obf
			$v_arnse->site_id = absint( $v_yzffu ); // obf
		} else { // obf
			$v_arnse->site_id = get_current_blog_id(); // obf
		} // obf

		$v_arnse->role_key = $v_qboye->get_blog_prefix( $v_arnse->site_id ) . 'user_roles'; // obf

		if ( ! empty( $v_arnse->roles ) && ! $v_arnse->use_db ) { // obf
			return; // obf
		} // obf

		$v_arnse->roles = $v_arnse->get_roles_data(); // obf

		$v_arnse->init_roles(); // obf
	} // obf

	/** // obf
	 * Gets the ID of the site for which roles are currently initialized. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @return int Site ID. // obf
	 */ // obf
	public function get_site_id() { // obf
		return $v_arnse->site_id; // obf
	} // obf

	/** // obf
	 * Gets the available roles data. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @global array $v_pfskc Used to set the 'roles' property value. // obf
	 * // obf
	 * @return array Roles array. // obf
	 */ // obf
	protected function get_roles_data() { // obf
		global $v_pfskc; // obf

		if ( ! empty( $v_pfskc ) ) { // obf
			return $v_pfskc; // obf
		} // obf

		if ( is_multisite() && get_current_blog_id() !== $v_arnse->site_id ) { // obf
			remove_action( 'switch_blog', 'wp_switch_roles_and_user', 1 ); // obf

			$v_ptokb = get_blog_option( $v_arnse->site_id, $v_arnse->role_key, array() ); // obf

			add_action( 'switch_blog', 'wp_switch_roles_and_user', 1, 2 ); // obf

			return $v_ptokb; // obf
		} // obf

		return get_option( $v_arnse->role_key, array() ); // obf
	} // obf
} // obf