

<?php // obf
/** // obf
 * User API: WP_User class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Users // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the WP_User object. // obf
 * // obf
 * @since 2.0.0 // obf
 * @since 6.8.0 The `user_pass` property is now hashed using bcrypt by default instead of phpass. // obf
 *              Existing passwords may still be hashed using phpass. // obf
 * // obf
 * @property string $v_pdlwj // obf
 * @property string $v_gokkc // obf
 * @property string $v_qzren // obf
 * @property string $v_aqlqf // obf
 * @property string $v_jsgmw // obf
 * @property string $v_cifxk // obf
 * @property string $v_yjycd // obf
 * @property string $v_jnwub // obf
 * @property string $v_esdcr // obf
 * @property string $v_exudm // obf
 * @property string $v_jizjp // obf
 * @property string $v_cplhe // obf
 * @property string $v_atnzl // obf
 * @property string $v_ysmps // obf
 * @property string $v_lajlh // obf
 * @property int    $v_zuzon // obf
 * @property string $v_ktxez // obf
 * @property string $v_htisl // obf
 * @property string $v_aymco // obf
 * @property string $v_hhzex // obf
 * @property string $v_xklin // obf
 * @property string $v_feygj // obf
 * @property string $v_sihri // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_User { // obf
	/** // obf
	 * User data container. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var stdClass // obf
	 */ // obf
	public $v_dsdph; // obf

	/** // obf
	 * The user's ID. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_cvfvy = 0; // obf

	/** // obf
	 * Capabilities that the individual user has been granted outside of those inherited from their role. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var bool[] Array of key/value pairs where keys represent a capability name // obf
	 *             and boolean values represent whether the user has that capability. // obf
	 */ // obf
	public $v_nzqpl = array(); // obf

	/** // obf
	 * User metadata option name. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fayeq; // obf

	/** // obf
	 * The roles the user is part of. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_gwtse = array(); // obf

	/** // obf
	 * All capabilities the user has, including individual and role based. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var bool[] Array of key/value pairs where keys represent a capability name // obf
	 *             and boolean values represent whether the user has that capability. // obf
	 */ // obf
	public $v_wnirm = array(); // obf

	/** // obf
	 * The filter context applied to user data fields. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tkitn = null; // obf

	/** // obf
	 * The site ID the capabilities of this user are initialized for. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var int // obf
	 */ // obf
	private $v_rsvzr = 0; // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * @var array // obf
	 */ // obf
	private static $v_pifvn; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Retrieves the userdata and passes it to WP_User::init(). // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @global wpdb $v_bnyeh WordPress database abstraction object. // obf
	 * // obf
	 * @param int|string|stdClass|WP_User $v_eswhi      User's ID, a WP_User object, or a user object from the DB. // obf
	 * @param string                      $v_aztxm    Optional. User's username // obf
	 * @param int                         $v_rsvzr Optional Site ID, defaults to current site. // obf
	 */ // obf
	public function __construct( $v_eswhi = 0, $v_aztxm = '', $v_rsvzr = 0 ) { // obf
		global $v_bnyeh; // obf

		if ( ! isset( self::$v_pifvn ) ) { // obf
			$v_cxejv = $v_bnyeh->prefix; // obf

			self::$v_pifvn = array( // obf
				'user_firstname'             => 'first_name', // obf
				'user_lastname'              => 'last_name', // obf
				'user_description'           => 'description', // obf
				'user_level'                 => $v_cxejv . 'user_level', // obf
				$v_cxejv . 'usersettings'     => $v_cxejv . 'user-settings', // obf
				$v_cxejv . 'usersettingstime' => $v_cxejv . 'user-settings-time', // obf
			); // obf
		} // obf

		if ( $v_eswhi instanceof WP_User ) { // obf
			$v_basko->init( $v_eswhi->data, $v_rsvzr ); // obf
			return; // obf
		} elseif ( is_object( $v_eswhi ) ) { // obf
			$v_basko->init( $v_eswhi, $v_rsvzr ); // obf
			return; // obf
		} // obf

		if ( ! empty( $v_eswhi ) && ! is_numeric( $v_eswhi ) ) { // obf
			$v_aztxm = $v_eswhi; // obf
			$v_eswhi   = 0; // obf
		} // obf

		if ( $v_eswhi ) { // obf
			$v_dsdph = self::get_data_by( 'id', $v_eswhi ); // obf
		} else { // obf
			$v_dsdph = self::get_data_by( 'login', $v_aztxm ); // obf
		} // obf

		if ( $v_dsdph ) { // obf
			$v_basko->init( $v_dsdph, $v_rsvzr ); // obf
		} else { // obf
			$v_basko->data = new stdClass(); // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up object properties, including capabilities. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param object $v_dsdph    User DB row object. // obf
	 * @param int    $v_rsvzr Optional. The site ID to initialize for. // obf
	 */ // obf
	public function init( $v_dsdph, $v_rsvzr = 0 ) { // obf
		if ( ! isset( $v_dsdph->ID ) ) { // obf
			$v_dsdph->ID = 0; // obf
		} // obf
		$v_basko->data = $v_dsdph; // obf
		$v_basko->ID   = (int) $v_dsdph->ID; // obf

		$v_basko->for_site( $v_rsvzr ); // obf
	} // obf

	/** // obf
	 * Returns only the main user fields. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @since 4.4.0 Added 'ID' as an alias of 'id' for the `$v_lumir` parameter. // obf
	 * // obf
	 * @global wpdb $v_bnyeh WordPress database abstraction object. // obf
	 * // obf
	 * @param string     $v_lumir The field to query against: Accepts 'id', 'ID', 'slug', 'email' or 'login'. // obf
	 * @param string|int $v_rzozv The field value. // obf
	 * @return object|false Raw user object. // obf
	 */ // obf
	public static function get_data_by( $v_lumir, $v_rzozv ) { // obf
		global $v_bnyeh; // obf

		// 'ID' is an alias of 'id'. // obf
		if ( 'ID' === $v_lumir ) { // obf
			$v_lumir = 'id'; // obf
		} // obf

		if ( 'id' === $v_lumir ) { // obf
			// Make sure the value is numeric to avoid casting objects, for example, to int 1. // obf
			if ( ! is_numeric( $v_rzozv ) ) { // obf
				return false; // obf
			} // obf
			$v_rzozv = (int) $v_rzozv; // obf
			if ( $v_rzozv < 1 ) { // obf
				return false; // obf
			} // obf
		} else { // obf
			$v_rzozv = trim( $v_rzozv ); // obf
		} // obf

		if ( ! $v_rzozv ) { // obf
			return false; // obf
		} // obf

		switch ( $v_lumir ) { // obf
			case 'id': // obf
				$v_tqxpv  = $v_rzozv; // obf
				$v_rzwus = 'ID'; // obf
				break; // obf
			case 'slug': // obf
				$v_tqxpv  = wp_cache_get( $v_rzozv, 'userslugs' ); // obf
				$v_rzwus = 'user_nicename'; // obf
				break; // obf
			case 'email': // obf
				$v_tqxpv  = wp_cache_get( $v_rzozv, 'useremail' ); // obf
				$v_rzwus = 'user_email'; // obf
				break; // obf
			case 'login': // obf
				$v_rzozv    = sanitize_user( $v_rzozv ); // obf
				$v_tqxpv  = wp_cache_get( $v_rzozv, 'userlogins' ); // obf
				$v_rzwus = 'user_login'; // obf
				break; // obf
			default: // obf
				return false; // obf
		} // obf

		if ( false !== $v_tqxpv ) { // obf
			$v_thmrq = wp_cache_get( $v_tqxpv, 'users' ); // obf
			if ( $v_thmrq ) { // obf
				return $v_thmrq; // obf
			} // obf
		} // obf

		$v_thmrq = $v_bnyeh->get_row( // obf
			$v_bnyeh->prepare( // obf
				"SELECT * FROM $v_bnyeh->users WHERE $v_rzwus = %s LIMIT 1", // obf
				$v_rzozv // obf
			) // obf
		); // obf
		if ( ! $v_thmrq ) { // obf
			return false; // obf
		} // obf

		update_user_caches( $v_thmrq ); // obf

		return $v_thmrq; // obf
	} // obf

	/** // obf
	 * Magic method for checking the existence of a certain custom field. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_gkxqc User meta key to check if set. // obf
	 * @return bool Whether the given user meta key is set. // obf
	 */ // obf
	public function __isset( $v_gkxqc ) { // obf
		if ( 'id' === $v_gkxqc ) { // obf
			_deprecated_argument( // obf
				'WP_User->id', // obf
				'2.1.0', // obf
				sprintf( // obf
					/* translators: %s: WP_User->ID */ // obf
					__( 'Use %s instead.' ), // obf
					'<code>WP_User->ID</code>' // obf
				) // obf
			); // obf
			$v_gkxqc = 'ID'; // obf
		} // obf

		if ( isset( $v_basko->data->$v_gkxqc ) ) { // obf
			return true; // obf
		} // obf

		if ( isset( self::$v_pifvn[ $v_gkxqc ] ) ) { // obf
			$v_gkxqc = self::$v_pifvn[ $v_gkxqc ]; // obf
		} // obf

		return metadata_exists( 'user', $v_basko->ID, $v_gkxqc ); // obf
	} // obf

	/** // obf
	 * Magic method for accessing custom fields. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_gkxqc User meta key to retrieve. // obf
	 * @return mixed Value of the given user meta key (if set). If `$v_gkxqc` is 'id', the user ID. // obf
	 */ // obf
	public function __get( $v_gkxqc ) { // obf
		if ( 'id' === $v_gkxqc ) { // obf
			_deprecated_argument( // obf
				'WP_User->id', // obf
				'2.1.0', // obf
				sprintf( // obf
					/* translators: %s: WP_User->ID */ // obf
					__( 'Use %s instead.' ), // obf
					'<code>WP_User->ID</code>' // obf
				) // obf
			); // obf
			return $v_basko->ID; // obf
		} // obf

		if ( isset( $v_basko->data->$v_gkxqc ) ) { // obf
			$v_rzozv = $v_basko->data->$v_gkxqc; // obf
		} else { // obf
			if ( isset( self::$v_pifvn[ $v_gkxqc ] ) ) { // obf
				$v_gkxqc = self::$v_pifvn[ $v_gkxqc ]; // obf
			} // obf
			$v_rzozv = get_user_meta( $v_basko->ID, $v_gkxqc, true ); // obf
		} // obf

		if ( $v_basko->filter ) { // obf
			$v_rzozv = sanitize_user_field( $v_gkxqc, $v_rzozv, $v_basko->ID, $v_basko->filter ); // obf
		} // obf

		return $v_rzozv; // obf
	} // obf

	/** // obf
	 * Magic method for setting custom user fields. // obf
	 * // obf
	 * This method does not update custom fields in the database. It only stores // obf
	 * the value on the WP_User instance. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_gkxqc   User meta key. // obf
	 * @param mixed  $v_rzozv User meta value. // obf
	 */ // obf
	public function __set( $v_gkxqc, $v_rzozv ) { // obf
		if ( 'id' === $v_gkxqc ) { // obf
			_deprecated_argument( // obf
				'WP_User->id', // obf
				'2.1.0', // obf
				sprintf( // obf
					/* translators: %s: WP_User->ID */ // obf
					__( 'Use %s instead.' ), // obf
					'<code>WP_User->ID</code>' // obf
				) // obf
			); // obf
			$v_basko->ID = $v_rzozv; // obf
			return; // obf
		} // obf

		$v_basko->data->$v_gkxqc = $v_rzozv; // obf
	} // obf

	/** // obf
	 * Magic method for unsetting a certain custom field. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_gkxqc User meta key to unset. // obf
	 */ // obf
	public function __unset( $v_gkxqc ) { // obf
		if ( 'id' === $v_gkxqc ) { // obf
			_deprecated_argument( // obf
				'WP_User->id', // obf
				'2.1.0', // obf
				sprintf( // obf
					/* translators: %s: WP_User->ID */ // obf
					__( 'Use %s instead.' ), // obf
					'<code>WP_User->ID</code>' // obf
				) // obf
			); // obf
		} // obf

		if ( isset( $v_basko->data->$v_gkxqc ) ) { // obf
			unset( $v_basko->data->$v_gkxqc ); // obf
		} // obf

		if ( isset( self::$v_pifvn[ $v_gkxqc ] ) ) { // obf
			unset( self::$v_pifvn[ $v_gkxqc ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether the user exists in the database. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return bool True if user exists in the database, false if not. // obf
	 */ // obf
	public function exists() { // obf
		return ! empty( $v_basko->ID ); // obf
	} // obf

	/** // obf
	 * Retrieves the value of a property or meta key. // obf
	 * // obf
	 * Retrieves from the users and usermeta table. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_gkxqc Property // obf
	 * @return mixed // obf
	 */ // obf
	public function get( $v_gkxqc ) { // obf
		return $v_basko->__get( $v_gkxqc ); // obf
	} // obf

	/** // obf
	 * Determines whether a property or meta key is set. // obf
	 * // obf
	 * Consults the users and usermeta tables. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_gkxqc Property. // obf
	 * @return bool // obf
	 */ // obf
	public function has_prop( $v_gkxqc ) { // obf
		return $v_basko->__isset( $v_gkxqc ); // obf
	} // obf

	/** // obf
	 * Returns an array representation. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return array Array representation. // obf
	 */ // obf
	public function to_array() { // obf
		return get_object_vars( $v_basko->data ); // obf
	} // obf

	/** // obf
	 * Makes private/protected methods readable for backward compatibility. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param string $v_aztxm      Method to call. // obf
	 * @param array  $v_dfbhw Arguments to pass when calling. // obf
	 * @return mixed|false Return value of the callback, false otherwise. // obf
	 */ // obf
	public function __call( $v_aztxm, $v_dfbhw ) { // obf
		if ( '_init_caps' === $v_aztxm ) { // obf
			return $v_basko->_init_caps( ...$v_dfbhw ); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Sets up capability object properties. // obf
	 * // obf
	 * Will set the value for the 'cap_key' property to current database table // obf
	 * prefix, followed by 'capabilities'. Will then check to see if the // obf
	 * property matching the 'cap_key' exists and is an array. If so, it will be // obf
	 * used. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @deprecated 4.9.0 Use WP_User::for_site() // obf
	 * // obf
	 * @global wpdb $v_bnyeh WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_fayeq Optional capability key // obf
	 */ // obf
	protected function _init_caps( $v_fayeq = '' ) { // obf
		global $v_bnyeh; // obf

		_deprecated_function( __METHOD__, '4.9.0', 'WP_User::for_site()' ); // obf

		if ( empty( $v_fayeq ) ) { // obf
			$v_basko->cap_key = $v_bnyeh->get_blog_prefix( $v_basko->site_id ) . 'capabilities'; // obf
		} else { // obf
			$v_basko->cap_key = $v_fayeq; // obf
		} // obf

		$v_basko->caps = $v_basko->get_caps_data(); // obf

		$v_basko->get_role_caps(); // obf
	} // obf

	/** // obf
	 * Retrieves all of the capabilities of the user's roles, and merges them with // obf
	 * individual user capabilities. // obf
	 * // obf
	 * All of the capabilities of the user's roles are merged with the user's individual // obf
	 * capabilities. This means that the user can be denied specific capabilities that // obf
	 * their role might have, but the user is specifically denied. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @return bool[] Array of key/value pairs where keys represent a capability name // obf
	 *                and boolean values represent whether the user has that capability. // obf
	 */ // obf
	public function get_role_caps() { // obf
		$v_wxlkb = false; // obf
		if ( is_multisite() && get_current_blog_id() !== $v_basko->site_id ) { // obf
			$v_wxlkb = true; // obf

			switch_to_blog( $v_basko->site_id ); // obf
		} // obf

		$v_yclla = wp_roles(); // obf

		// Filter out caps that are not role names and assign to $v_basko->roles. // obf
		if ( is_array( $v_basko->caps ) ) { // obf
			$v_basko->roles = array_filter( array_keys( $v_basko->caps ), array( $v_yclla, 'is_role' ) ); // obf
		} // obf

		// Build $v_wnirm from role caps, overlay user's $v_nzqpl. // obf
		$v_basko->allcaps = array(); // obf
		foreach ( (array) $v_basko->roles as $v_bzzcb ) { // obf
			$v_pdgnn      = $v_yclla->get_role( $v_bzzcb ); // obf
			$v_basko->allcaps = array_merge( (array) $v_basko->allcaps, (array) $v_pdgnn->capabilities ); // obf
		} // obf
		$v_basko->allcaps = array_merge( (array) $v_basko->allcaps, (array) $v_basko->caps ); // obf

		if ( $v_wxlkb ) { // obf
			restore_current_blog(); // obf
		} // obf

		return $v_basko->allcaps; // obf
	} // obf

	/** // obf
	 * Adds role to user. // obf
	 * // obf
	 * Updates the user's meta data option with capabilities and roles. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_bzzcb Role name. // obf
	 */ // obf
	public function add_role( $v_bzzcb ) { // obf
		if ( empty( $v_bzzcb ) ) { // obf
			return; // obf
		} // obf

		if ( in_array( $v_bzzcb, $v_basko->roles, true ) ) { // obf
			return; // obf
		} // obf

		$v_basko->caps[ $v_bzzcb ] = true; // obf
		update_user_meta( $v_basko->ID, $v_basko->cap_key, $v_basko->caps ); // obf
		$v_basko->get_role_caps(); // obf
		$v_basko->update_user_level_from_caps(); // obf

		/** // obf
		 * Fires immediately after the user has been given a new role. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @param int    $v_tqxpv The user ID. // obf
		 * @param string $v_bzzcb    The new role. // obf
		 */ // obf
		do_action( 'add_user_role', $v_basko->ID, $v_bzzcb ); // obf
	} // obf

	/** // obf
	 * Removes role from user. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_bzzcb Role name. // obf
	 */ // obf
	public function remove_role( $v_bzzcb ) { // obf
		if ( ! in_array( $v_bzzcb, $v_basko->roles, true ) ) { // obf
			return; // obf
		} // obf

		unset( $v_basko->caps[ $v_bzzcb ] ); // obf
		update_user_meta( $v_basko->ID, $v_basko->cap_key, $v_basko->caps ); // obf
		$v_basko->get_role_caps(); // obf
		$v_basko->update_user_level_from_caps(); // obf

		/** // obf
		 * Fires immediately after a role as been removed from a user. // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @param int    $v_tqxpv The user ID. // obf
		 * @param string $v_bzzcb    The removed role. // obf
		 */ // obf
		do_action( 'remove_user_role', $v_basko->ID, $v_bzzcb ); // obf
	} // obf

	/** // obf
	 * Sets the role of the user. // obf
	 * // obf
	 * This will remove the previous roles of the user and assign the user the // obf
	 * new one. You can set the role to an empty string and it will remove all // obf
	 * of the roles from the user. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_bzzcb Role name. // obf
	 */ // obf
	public function set_role( $v_bzzcb ) { // obf
		if ( 1 === count( $v_basko->roles ) && current( $v_basko->roles ) === $v_bzzcb ) { // obf
			return; // obf
		} // obf

		foreach ( (array) $v_basko->roles as $v_mfnsx ) { // obf
			unset( $v_basko->caps[ $v_mfnsx ] ); // obf
		} // obf

		$v_hgcjc = $v_basko->roles; // obf

		if ( ! empty( $v_bzzcb ) ) { // obf
			$v_basko->caps[ $v_bzzcb ] = true; // obf
			$v_basko->roles         = array( $v_bzzcb => true ); // obf
		} else { // obf
			$v_basko->roles = array(); // obf
		} // obf

		update_user_meta( $v_basko->ID, $v_basko->cap_key, $v_basko->caps ); // obf
		$v_basko->get_role_caps(); // obf
		$v_basko->update_user_level_from_caps(); // obf

		foreach ( $v_hgcjc as $v_wvydd ) { // obf
			if ( ! $v_wvydd || $v_wvydd === $v_bzzcb ) { // obf
				continue; // obf
			} // obf

			/** This action is documented in wp-includes/class-wp-user.php */ // obf
			do_action( 'remove_user_role', $v_basko->ID, $v_wvydd ); // obf
		} // obf

		if ( $v_bzzcb && ! in_array( $v_bzzcb, $v_hgcjc, true ) ) { // obf
			/** This action is documented in wp-includes/class-wp-user.php */ // obf
			do_action( 'add_user_role', $v_basko->ID, $v_bzzcb ); // obf
		} // obf

		/** // obf
		 * Fires after the user's role has changed. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * @since 3.6.0 Added $v_hgcjc to include an array of the user's previous roles. // obf
		 * // obf
		 * @param int      $v_tqxpv   The user ID. // obf
		 * @param string   $v_bzzcb      The new role. // obf
		 * @param string[] $v_hgcjc An array of the user's previous roles. // obf
		 */ // obf
		do_action( 'set_user_role', $v_basko->ID, $v_bzzcb, $v_hgcjc ); // obf
	} // obf

	/** // obf
	 * Chooses the maximum level the user has. // obf
	 * // obf
	 * Will compare the level from the $v_mmpfp parameter against the $v_qxpjj // obf
	 * parameter. If the item is incorrect, then just the $v_qxpjj parameter value // obf
	 * will be returned. // obf
	 * // obf
	 * Used to get the max level based on the capabilities the user has. This // obf
	 * is also based on roles, so if the user is assigned the Administrator role // obf
	 * then the capability 'level_10' will exist and the user will get that // obf
	 * value. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param int    $v_qxpjj  Max level of user. // obf
	 * @param string $v_mmpfp Level capability name. // obf
	 * @return int Max Level. // obf
	 */ // obf
	public function level_reduction( $v_qxpjj, $v_mmpfp ) { // obf
		if ( preg_match( '/^level_(10|[0-9])$/i', $v_mmpfp, $v_vsxdx ) ) { // obf
			$v_kcvik = (int) $v_vsxdx[1]; // obf
			return max( $v_qxpjj, $v_kcvik ); // obf
		} else { // obf
			return $v_qxpjj; // obf
		} // obf
	} // obf

	/** // obf
	 * Updates the maximum user level for the user. // obf
	 * // obf
	 * Updates the 'user_level' user metadata (includes prefix that is the // obf
	 * database table prefix) with the maximum user level. Gets the value from // obf
	 * the all of the capabilities that the user has. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @global wpdb $v_bnyeh WordPress database abstraction object. // obf
	 */ // obf
	public function update_user_level_from_caps() { // obf
		global $v_bnyeh; // obf
		$v_basko->user_level = array_reduce( array_keys( $v_basko->allcaps ), array( $v_basko, 'level_reduction' ), 0 ); // obf
		update_user_meta( $v_basko->ID, $v_bnyeh->get_blog_prefix() . 'user_level', $v_basko->user_level ); // obf
	} // obf

	/** // obf
	 * Adds capability and grant or deny access to capability. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_iydky   Capability name. // obf
	 * @param bool   $v_kwxzv Whether to grant capability to user. // obf
	 */ // obf
	public function add_cap( $v_iydky, $v_kwxzv = true ) { // obf
		$v_basko->caps[ $v_iydky ] = $v_kwxzv; // obf
		update_user_meta( $v_basko->ID, $v_basko->cap_key, $v_basko->caps ); // obf
		$v_basko->get_role_caps(); // obf
		$v_basko->update_user_level_from_caps(); // obf
	} // obf

	/** // obf
	 * Removes capability from user. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string $v_iydky Capability name. // obf
	 */ // obf
	public function remove_cap( $v_iydky ) { // obf
		if ( ! isset( $v_basko->caps[ $v_iydky ] ) ) { // obf
			return; // obf
		} // obf
		unset( $v_basko->caps[ $v_iydky ] ); // obf
		update_user_meta( $v_basko->ID, $v_basko->cap_key, $v_basko->caps ); // obf
		$v_basko->get_role_caps(); // obf
		$v_basko->update_user_level_from_caps(); // obf
	} // obf

	/** // obf
	 * Removes all of the capabilities of the user. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @global wpdb $v_bnyeh WordPress database abstraction object. // obf
	 */ // obf
	public function remove_all_caps() { // obf
		global $v_bnyeh; // obf
		$v_basko->caps = array(); // obf
		delete_user_meta( $v_basko->ID, $v_basko->cap_key ); // obf
		delete_user_meta( $v_basko->ID, $v_bnyeh->get_blog_prefix() . 'user_level' ); // obf
		$v_basko->get_role_caps(); // obf
	} // obf

	/** // obf
	 * Returns whether the user has the specified capability. // obf
	 * // obf
	 * This function also accepts an ID of an object to check against if the capability is a meta capability. Meta // obf
	 * capabilities such as `edit_post` and `edit_user` are capabilities used by the `map_meta_cap()` function to // obf
	 * map to primitive capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`. // obf
	 * // obf
	 * Example usage: // obf
	 * // obf
	 *     $v_thmrq->has_cap( 'edit_posts' ); // obf
	 *     $v_thmrq->has_cap( 'edit_post', $v_fvlwx->ID ); // obf
	 *     $v_thmrq->has_cap( 'edit_post_meta', $v_fvlwx->ID, $v_lmqyl ); // obf
	 * // obf
	 * While checking against a role in place of a capability is supported in part, this practice is discouraged as it // obf
	 * may produce unreliable results. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @since 5.3.0 Formalized the existing and already documented `...$v_psjwx` parameter // obf
	 *              by adding it to the function signature. // obf
	 * // obf
	 * @see map_meta_cap() // obf
	 * // obf
	 * @param string $v_iydky     Capability name. // obf
	 * @param mixed  ...$v_psjwx Optional further parameters, typically starting with an object ID. // obf
	 * @return bool Whether the user has the given capability, or, if an object ID is passed, whether the user has // obf
	 *              the given capability for that object. // obf
	 */ // obf
	public function has_cap( $v_iydky, ...$v_psjwx ) { // obf
		if ( is_numeric( $v_iydky ) ) { // obf
			_deprecated_argument( __FUNCTION__, '2.0.0', __( 'Usage of user levels is deprecated. Use capabilities instead.' ) ); // obf
			$v_iydky = $v_basko->translate_level_to_cap( $v_iydky ); // obf
		} // obf

		$v_nzqpl = map_meta_cap( $v_iydky, $v_basko->ID, ...$v_psjwx ); // obf

		// Multisite super admin has all caps by definition, Unless specifically denied. // obf
		if ( is_multisite() && is_super_admin( $v_basko->ID ) ) { // obf
			if ( in_array( 'do_not_allow', $v_nzqpl, true ) ) { // obf
				return false; // obf
			} // obf
			return true; // obf
		} // obf

		// Maintain BC for the argument passed to the "user_has_cap" filter. // obf
		$v_psjwx = array_merge( array( $v_iydky, $v_basko->ID ), $v_psjwx ); // obf

		/** // obf
		 * Dynamically filter a user's capabilities. // obf
		 * // obf
		 * @since 2.0.0 // obf
		 * @since 3.7.0 Added the `$v_thmrq` parameter. // obf
		 * // obf
		 * @param bool[]   $v_wnirm Array of key/value pairs where keys represent a capability name // obf
		 *                          and boolean values represent whether the user has that capability. // obf
		 * @param string[] $v_nzqpl    Required primitive capabilities for the requested capability. // obf
		 * @param array    $v_psjwx { // obf
		 *     Arguments that accompany the requested capability check. // obf
		 * // obf
		 *     @type string    $0 Requested capability. // obf
		 *     @type int       $1 Concerned user ID. // obf
		 *     @type mixed  ...$2 Optional second and further parameters, typically object ID. // obf
		 * } // obf
		 * @param WP_User  $v_thmrq    The user object. // obf
		 */ // obf
		$v_zcndw = apply_filters( 'user_has_cap', $v_basko->allcaps, $v_nzqpl, $v_psjwx, $v_basko ); // obf

		// Everyone is allowed to exist. // obf
		$v_zcndw['exist'] = true; // obf

		// Nobody is allowed to do things they are not allowed to do. // obf
		unset( $v_zcndw['do_not_allow'] ); // obf

		// Must have ALL requested caps. // obf
		foreach ( (array) $v_nzqpl as $v_iydky ) { // obf
			if ( empty( $v_zcndw[ $v_iydky ] ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Converts numeric level to level capability name. // obf
	 * // obf
	 * Prepends 'level_' to level number. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param int $v_kcvik Level number, 1 to 10. // obf
	 * @return string // obf
	 */ // obf
	public function translate_level_to_cap( $v_kcvik ) { // obf
		return 'level_' . $v_kcvik; // obf
	} // obf

	/** // obf
	 * Sets the site to operate on. Defaults to the current site. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @deprecated 4.9.0 Use WP_User::for_site() // obf
	 * // obf
	 * @param int $v_ymofr Optional. Site ID, defaults to current site. // obf
	 */ // obf
	public function for_blog( $v_ymofr = 0 ) { // obf
		_deprecated_function( __METHOD__, '4.9.0', 'WP_User::for_site()' ); // obf

		$v_basko->for_site( $v_ymofr ); // obf
	} // obf

	/** // obf
	 * Sets the site to operate on. Defaults to the current site. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @global wpdb $v_bnyeh WordPress database abstraction object. // obf
	 * // obf
	 * @param int $v_rsvzr Site ID to initialize user capabilities for. Default is the current site. // obf
	 */ // obf
	public function for_site( $v_rsvzr = 0 ) { // obf
		global $v_bnyeh; // obf

		if ( ! empty( $v_rsvzr ) ) { // obf
			$v_basko->site_id = absint( $v_rsvzr ); // obf
		} else { // obf
			$v_basko->site_id = get_current_blog_id(); // obf
		} // obf

		$v_basko->cap_key = $v_bnyeh->get_blog_prefix( $v_basko->site_id ) . 'capabilities'; // obf

		$v_basko->caps = $v_basko->get_caps_data(); // obf

		$v_basko->get_role_caps(); // obf
	} // obf

	/** // obf
	 * Gets the ID of the site for which the user's capabilities are currently initialized. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @return int Site ID. // obf
	 */ // obf
	public function get_site_id() { // obf
		return $v_basko->site_id; // obf
	} // obf

	/** // obf
	 * Gets the available user capabilities data. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @return bool[] List of capabilities keyed by the capability name, // obf
	 *                e.g. `array( 'edit_posts' => true, 'delete_posts' => false )`. // obf
	 */ // obf
	private function get_caps_data() { // obf
		$v_nzqpl = get_user_meta( $v_basko->ID, $v_basko->cap_key, true ); // obf

		if ( ! is_array( $v_nzqpl ) ) { // obf
			return array(); // obf
		} // obf

		return $v_nzqpl; // obf
	} // obf
} // obf