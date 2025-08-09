

<?php // obf
/** // obf
 * Screen API: WP_Screen class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement an admin screen API. // obf
 * // obf
 * @since 3.3.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Screen { // obf
	/** // obf
	 * Any action associated with the screen. // obf
	 * // obf
	 * 'add' for *-add.php and *-new.php screens. Empty otherwise. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qjfsg; // obf

	/** // obf
	 * The base type of the screen. // obf
	 * // obf
	 * This is typically the same as `$v_dlahn` but with any post types and taxonomies stripped. // obf
	 * For example, for an `$v_dlahn` of 'edit-post' the base is 'edit'. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gzwrw; // obf

	/** // obf
	 * The number of columns to display. Access with get_columns(). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var int // obf
	 */ // obf
	private $v_bryzx = 0; // obf

	/** // obf
	 * The unique ID of the screen. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_dlahn; // obf

	/** // obf
	 * Which admin the screen is in. network | user | site | false // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_cauhr; // obf

	/** // obf
	 * Whether the screen is in the network admin. // obf
	 * // obf
	 * Deprecated. Use in_admin() instead. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @deprecated 3.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_lqeof; // obf

	/** // obf
	 * Whether the screen is in the user admin. // obf
	 * // obf
	 * Deprecated. Use in_admin() instead. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @deprecated 3.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_egwpu; // obf

	/** // obf
	 * The base menu parent. // obf
	 * // obf
	 * This is derived from `$v_bfxoh` by removing the query string and any .php extension. // obf
	 * `$v_bfxoh` values of 'edit.php?post_type=page' and 'edit.php?post_type=post' // obf
	 * have a `$v_msceg` of 'edit'. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_msceg; // obf

	/** // obf
	 * The parent_file for the screen per the admin menu system. // obf
	 * // obf
	 * Some `$v_bfxoh` values are 'edit.php?post_type=page', 'edit.php', and 'options-general.php'. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_bfxoh; // obf

	/** // obf
	 * The post type associated with the screen, if any. // obf
	 * // obf
	 * The 'edit.php?post_type=page' screen has a post type of 'page'. // obf
	 * The 'edit-tags.php?taxonomy=$v_hpvbc&post_type=page' screen has a post type of 'page'. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zngbi; // obf

	/** // obf
	 * The taxonomy associated with the screen, if any. // obf
	 * // obf
	 * The 'edit-tags.php?taxonomy=category' screen has a taxonomy of 'category'. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_hpvbc; // obf

	/** // obf
	 * The help tab data associated with the screen, if any. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_lilza = array(); // obf

	/** // obf
	 * The help sidebar data associated with screen, if any. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_puvwa = ''; // obf

	/** // obf
	 * The accessible hidden headings and text associated with the screen, if any. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_ozoge = array(); // obf

	/** // obf
	 * Stores old string-based help. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_osgqw = array(); // obf

	/** // obf
	 * The screen options associated with screen, if any. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_gjiup = array(); // obf

	/** // obf
	 * The screen object registry. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_wbhaw = array(); // obf

	/** // obf
	 * Stores the result of the public show_screen_options function. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_urhea; // obf

	/** // obf
	 * Stores the 'screen_settings' section of screen options. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_acyge; // obf

	/** // obf
	 * Whether the screen is using the block editor. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_hwhur = false; // obf

	/** // obf
	 * Fetches a screen object. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @global string $v_oidyo // obf
	 * // obf
	 * @param string|WP_Screen $v_ikejg Optional. The hook name (also known as the hook suffix) used to determine the screen. // obf
	 *                                    Defaults to the current $v_oidyo global. // obf
	 * @return WP_Screen Screen object. // obf
	 */ // obf
	public static function get( $v_ikejg = '' ) { // obf
		if ( $v_ikejg instanceof WP_Screen ) { // obf
			return $v_ikejg; // obf
		} // obf

		$v_dlahn              = ''; // obf
		$v_zngbi       = null; // obf
		$v_hpvbc        = null; // obf
		$v_cauhr        = false; // obf
		$v_qjfsg          = ''; // obf
		$v_hwhur = false; // obf

		if ( $v_ikejg ) { // obf
			$v_dlahn = $v_ikejg; // obf
		} elseif ( ! empty( $v_xisvc['hook_suffix'] ) ) { // obf
			$v_dlahn = $v_xisvc['hook_suffix']; // obf
		} // obf

		// For those pesky meta boxes. // obf
		if ( $v_ikejg && post_type_exists( $v_ikejg ) ) { // obf
			$v_zngbi = $v_dlahn; // obf
			$v_dlahn        = 'post'; // Changes later. Ends up being $v_gzwrw. // obf
		} else { // obf
			if ( str_ends_with( $v_dlahn, '.php' ) ) { // obf
				$v_dlahn = substr( $v_dlahn, 0, -4 ); // obf
			} // obf

			if ( in_array( $v_dlahn, array( 'post-new', 'link-add', 'media-new', 'user-new' ), true ) ) { // obf
				$v_dlahn     = substr( $v_dlahn, 0, -4 ); // obf
				$v_qjfsg = 'add'; // obf
			} // obf
		} // obf

		if ( ! $v_zngbi && $v_ikejg ) { // obf
			if ( str_ends_with( $v_dlahn, '-network' ) ) { // obf
				$v_dlahn       = substr( $v_dlahn, 0, -8 ); // obf
				$v_cauhr = 'network'; // obf
			} elseif ( str_ends_with( $v_dlahn, '-user' ) ) { // obf
				$v_dlahn       = substr( $v_dlahn, 0, -5 ); // obf
				$v_cauhr = 'user'; // obf
			} // obf

			$v_dlahn = sanitize_key( $v_dlahn ); // obf
			if ( 'edit-comments' !== $v_dlahn && 'edit-tags' !== $v_dlahn && str_starts_with( $v_dlahn, 'edit-' ) ) { // obf
				$v_vvkgz = substr( $v_dlahn, 5 ); // obf
				if ( taxonomy_exists( $v_vvkgz ) ) { // obf
					$v_dlahn       = 'edit-tags'; // obf
					$v_hpvbc = $v_vvkgz; // obf
				} elseif ( post_type_exists( $v_vvkgz ) ) { // obf
					$v_dlahn        = 'edit'; // obf
					$v_zngbi = $v_vvkgz; // obf
				} // obf
			} // obf

			if ( ! $v_cauhr ) { // obf
				$v_cauhr = 'site'; // obf
			} // obf
		} else { // obf
			if ( defined( 'WP_NETWORK_ADMIN' ) && WP_NETWORK_ADMIN ) { // obf
				$v_cauhr = 'network'; // obf
			} elseif ( defined( 'WP_USER_ADMIN' ) && WP_USER_ADMIN ) { // obf
				$v_cauhr = 'user'; // obf
			} else { // obf
				$v_cauhr = 'site'; // obf
			} // obf
		} // obf

		if ( 'index' === $v_dlahn ) { // obf
			$v_dlahn = 'dashboard'; // obf
		} elseif ( 'front' === $v_dlahn ) { // obf
			$v_cauhr = false; // obf
		} // obf

		$v_gzwrw = $v_dlahn; // obf

		// If this is the current screen, see if we can be more accurate for post types and taxonomies. // obf
		if ( ! $v_ikejg ) { // obf
			if ( isset( $v_ceiqu['post_type'] ) ) { // obf
				$v_zngbi = post_type_exists( $v_ceiqu['post_type'] ) ? $v_ceiqu['post_type'] : false; // obf
			} // obf
			if ( isset( $v_ceiqu['taxonomy'] ) ) { // obf
				$v_hpvbc = taxonomy_exists( $v_ceiqu['taxonomy'] ) ? $v_ceiqu['taxonomy'] : false; // obf
			} // obf

			switch ( $v_gzwrw ) { // obf
				case 'post': // obf
					if ( isset( $v_nvbua['post'] ) && isset( $v_pypdj['post_ID'] ) && (int) $v_nvbua['post'] !== (int) $v_pypdj['post_ID'] ) { // obf
						wp_die( __( 'A post ID mismatch has been detected.' ), __( 'Sorry, you are not allowed to edit this item.' ), 400 ); // obf
					} elseif ( isset( $v_nvbua['post'] ) ) { // obf
						$v_zarbr = (int) $v_nvbua['post']; // obf
					} elseif ( isset( $v_pypdj['post_ID'] ) ) { // obf
						$v_zarbr = (int) $v_pypdj['post_ID']; // obf
					} else { // obf
						$v_zarbr = 0; // obf
					} // obf

					if ( $v_zarbr ) { // obf
						$v_lavxf = get_post( $v_zarbr ); // obf
						if ( $v_lavxf ) { // obf
							$v_zngbi = $v_lavxf->post_type; // obf

							/** This filter is documented in wp-admin/post.php */ // obf
							$v_vjiku = apply_filters( 'replace_editor', false, $v_lavxf ); // obf

							if ( ! $v_vjiku ) { // obf
								$v_hwhur = use_block_editor_for_post( $v_lavxf ); // obf
							} // obf
						} // obf
					} // obf
					break; // obf
				case 'edit-tags': // obf
				case 'term': // obf
					if ( null === $v_zngbi && is_object_in_taxonomy( 'post', $v_hpvbc ? $v_hpvbc : 'post_tag' ) ) { // obf
						$v_zngbi = 'post'; // obf
					} // obf
					break; // obf
				case 'upload': // obf
					$v_zngbi = 'attachment'; // obf
					break; // obf
			} // obf
		} // obf

		switch ( $v_gzwrw ) { // obf
			case 'post': // obf
				if ( null === $v_zngbi ) { // obf
					$v_zngbi = 'post'; // obf
				} // obf

				// When creating a new post, use the default block editor support value for the post type. // obf
				if ( empty( $v_zarbr ) ) { // obf
					$v_hwhur = use_block_editor_for_post_type( $v_zngbi ); // obf
				} // obf

				$v_dlahn = $v_zngbi; // obf
				break; // obf
			case 'edit': // obf
				if ( null === $v_zngbi ) { // obf
					$v_zngbi = 'post'; // obf
				} // obf
				$v_dlahn .= '-' . $v_zngbi; // obf
				break; // obf
			case 'edit-tags': // obf
			case 'term': // obf
				if ( null === $v_hpvbc ) { // obf
					$v_hpvbc = 'post_tag'; // obf
				} // obf
				// The edit-tags ID does not contain the post type. Look for it in the request. // obf
				if ( null === $v_zngbi ) { // obf
					$v_zngbi = 'post'; // obf
					if ( isset( $v_ceiqu['post_type'] ) && post_type_exists( $v_ceiqu['post_type'] ) ) { // obf
						$v_zngbi = $v_ceiqu['post_type']; // obf
					} // obf
				} // obf

				$v_dlahn = 'edit-' . $v_hpvbc; // obf
				break; // obf
		} // obf

		if ( 'network' === $v_cauhr ) { // obf
			$v_dlahn   .= '-network'; // obf
			$v_gzwrw .= '-network'; // obf
		} elseif ( 'user' === $v_cauhr ) { // obf
			$v_dlahn   .= '-user'; // obf
			$v_gzwrw .= '-user'; // obf
		} // obf

		if ( isset( self::$v_wbhaw[ $v_dlahn ] ) ) { // obf
			$v_hxgce = self::$v_wbhaw[ $v_dlahn ]; // obf
			if ( get_current_screen() === $v_hxgce ) { // obf
				return $v_hxgce; // obf
			} // obf
		} else { // obf
			$v_hxgce     = new self(); // obf
			$v_hxgce->id = $v_dlahn; // obf
		} // obf

		$v_hxgce->base            = $v_gzwrw; // obf
		$v_hxgce->action          = $v_qjfsg; // obf
		$v_hxgce->post_type       = (string) $v_zngbi; // obf
		$v_hxgce->taxonomy        = (string) $v_hpvbc; // obf
		$v_hxgce->is_user         = ( 'user' === $v_cauhr ); // obf
		$v_hxgce->is_network      = ( 'network' === $v_cauhr ); // obf
		$v_hxgce->in_admin        = $v_cauhr; // obf
		$v_hxgce->is_block_editor = $v_hwhur; // obf

		self::$v_wbhaw[ $v_dlahn ] = $v_hxgce; // obf

		return $v_hxgce; // obf
	} // obf

	/** // obf
	 * Makes the screen object the current screen. // obf
	 * // obf
	 * @see set_current_screen() // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @global WP_Screen $v_ztkkc WordPress current screen object. // obf
	 * @global string    $v_wahxh        The post type of the current screen. // obf
	 * @global string    $v_ujbgd         The taxonomy of the current screen. // obf
	 */ // obf
	public function set_current_screen() { // obf
		global $v_ztkkc, $v_ujbgd, $v_wahxh; // obf

		$v_ztkkc = $v_ymbzl; // obf
		$v_wahxh        = $v_ymbzl->post_type; // obf
		$v_ujbgd         = $v_ymbzl->taxonomy; // obf

		/** // obf
		 * Fires after the current screen has been set. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param WP_Screen $v_ztkkc Current WP_Screen object. // obf
		 */ // obf
		do_action( 'current_screen', $v_ztkkc ); // obf
	} // obf

	/** // obf
	 * Constructor // obf
	 * // obf
	 * @since 3.3.0 // obf
	 */ // obf
	private function __construct() {} // obf

	/** // obf
	 * Indicates whether the screen is in a particular admin. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_dlcre The admin to check against (network | user | site). // obf
	 *                      If empty any of the three admins will result in true. // obf
	 * @return bool True if the screen is in the indicated admin, false otherwise. // obf
	 */ // obf
	public function in_admin( $v_dlcre = null ) { // obf
		if ( empty( $v_dlcre ) ) { // obf
			return (bool) $v_ymbzl->in_admin; // obf
		} // obf

		return ( $v_dlcre === $v_ymbzl->in_admin ); // obf
	} // obf

	/** // obf
	 * Sets or returns whether the block editor is loading on the current screen. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param bool $v_qhyhy Optional. Sets whether the block editor is loading on the current screen or not. // obf
	 * @return bool True if the block editor is being loaded, false otherwise. // obf
	 */ // obf
	public function is_block_editor( $v_qhyhy = null ) { // obf
		if ( null !== $v_qhyhy ) { // obf
			$v_ymbzl->is_block_editor = (bool) $v_qhyhy; // obf
		} // obf

		return $v_ymbzl->is_block_editor; // obf
	} // obf

	/** // obf
	 * Sets the old string-based contextual help for the screen for backward compatibility. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param WP_Screen $v_hxgce A screen object. // obf
	 * @param string    $v_uicfz   Help text. // obf
	 */ // obf
	public static function add_old_compat_help( $v_hxgce, $v_uicfz ) { // obf
		self::$v_osgqw[ $v_hxgce->id ] = $v_uicfz; // obf
	} // obf

	/** // obf
	 * Sets the parent information for the screen. // obf
	 * // obf
	 * This is called in admin-header.php after the menu parent for the screen has been determined. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_bfxoh The parent file of the screen. Typically the $v_bfxoh global. // obf
	 */ // obf
	public function set_parentage( $v_bfxoh ) { // obf
		$v_ymbzl->parent_file         = $v_bfxoh; // obf
		list( $v_ymbzl->parent_base ) = explode( '?', $v_bfxoh ); // obf
		$v_ymbzl->parent_base         = str_replace( '.php', '', $v_ymbzl->parent_base ); // obf
	} // obf

	/** // obf
	 * Adds an option for the screen. // obf
	 * // obf
	 * Call this in template files after admin.php is loaded and before admin-header.php is loaded // obf
	 * to add screen options. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_dpzdc Option ID. // obf
	 * @param mixed  $v_wssal   Option-dependent arguments. // obf
	 */ // obf
	public function add_option( $v_dpzdc, $v_wssal = array() ) { // obf
		$v_ymbzl->_options[ $v_dpzdc ] = $v_wssal; // obf
	} // obf

	/** // obf
	 * Removes an option from the screen. // obf
	 * // obf
	 * @since 3.8.0 // obf
	 * // obf
	 * @param string $v_dpzdc Option ID. // obf
	 */ // obf
	public function remove_option( $v_dpzdc ) { // obf
		unset( $v_ymbzl->_options[ $v_dpzdc ] ); // obf
	} // obf

	/** // obf
	 * Removes all options from the screen. // obf
	 * // obf
	 * @since 3.8.0 // obf
	 */ // obf
	public function remove_options() { // obf
		$v_ymbzl->_options = array(); // obf
	} // obf

	/** // obf
	 * Gets the options registered for the screen. // obf
	 * // obf
	 * @since 3.8.0 // obf
	 * // obf
	 * @return array Options with arguments. // obf
	 */ // obf
	public function get_options() { // obf
		return $v_ymbzl->_options; // obf
	} // obf

	/** // obf
	 * Gets the arguments for an option for the screen. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string       $v_dpzdc Option name. // obf
	 * @param string|false $v_ajktt    Optional. Specific array key for when the option is an array. // obf
	 *                             Default false. // obf
	 * @return string The option value if set, null otherwise. // obf
	 */ // obf
	public function get_option( $v_dpzdc, $v_ajktt = false ) { // obf
		if ( ! isset( $v_ymbzl->_options[ $v_dpzdc ] ) ) { // obf
			return null; // obf
		} // obf
		if ( $v_ajktt ) { // obf
			if ( isset( $v_ymbzl->_options[ $v_dpzdc ][ $v_ajktt ] ) ) { // obf
				return $v_ymbzl->_options[ $v_dpzdc ][ $v_ajktt ]; // obf
			} // obf
			return null; // obf
		} // obf
		return $v_ymbzl->_options[ $v_dpzdc ]; // obf
	} // obf

	/** // obf
	 * Gets the help tabs registered for the screen. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.4.0 Help tabs are ordered by their priority. // obf
	 * // obf
	 * @return array Help tabs with arguments. // obf
	 */ // obf
	public function get_help_tabs() { // obf
		$v_srmwd = $v_ymbzl->_help_tabs; // obf

		$v_szfrd = array(); // obf
		foreach ( $v_srmwd as $v_pypty ) { // obf
			if ( isset( $v_szfrd[ $v_pypty['priority'] ] ) ) { // obf
				$v_szfrd[ $v_pypty['priority'] ][] = $v_pypty; // obf
			} else { // obf
				$v_szfrd[ $v_pypty['priority'] ] = array( $v_pypty ); // obf
			} // obf
		} // obf

		ksort( $v_szfrd ); // obf

		$v_pojsc = array(); // obf
		foreach ( $v_szfrd as $v_wsxic ) { // obf
			foreach ( $v_wsxic as $v_oluag ) { // obf
				$v_pojsc[ $v_oluag['id'] ] = $v_oluag; // obf
			} // obf
		} // obf

		return $v_pojsc; // obf
	} // obf

	/** // obf
	 * Gets the arguments for a help tab. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_dlahn Help Tab ID. // obf
	 * @return array Help tab arguments. // obf
	 */ // obf
	public function get_help_tab( $v_dlahn ) { // obf
		if ( ! isset( $v_ymbzl->_help_tabs[ $v_dlahn ] ) ) { // obf
			return null; // obf
		} // obf
		return $v_ymbzl->_help_tabs[ $v_dlahn ]; // obf
	} // obf

	/** // obf
	 * Adds a help tab to the contextual help for the screen. // obf
	 * // obf
	 * Call this on the `load-$v_frhqq` hook for the relevant screen, // obf
	 * or fetch the `$v_ztkkc` object, or use get_current_screen() // obf
	 * and then call the method from the object. // obf
	 * // obf
	 * You may need to filter `$v_ztkkc` using an if or switch statement // obf
	 * to prevent new help tabs from being added to ALL admin screens. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @since 4.4.0 The `$v_awrsx` argument was added. // obf
	 * // obf
	 * @param array $v_wssal { // obf
	 *     Array of arguments used to display the help tab. // obf
	 * // obf
	 *     @type string   $v_fqklo    Title for the tab. Default false. // obf
	 *     @type string   $v_dlahn       Tab ID. Must be HTML-safe and should be unique for this menu. // obf
	 *                              It is NOT allowed to contain any empty spaces. Default false. // obf
	 *     @type string   $v_lllhn  Optional. Help tab content in plain text or HTML. Default empty string. // obf
	 *     @type callable $v_cjkgo Optional. A callback to generate the tab content. Default false. // obf
	 *     @type int      $v_awrsx Optional. The priority of the tab, used for ordering. Default 10. // obf
	 * } // obf
	 */ // obf
	public function add_help_tab( $v_wssal ) { // obf
		$v_glcgg = array( // obf
			'title'    => false, // obf
			'id'       => false, // obf
			'content'  => '', // obf
			'callback' => false, // obf
			'priority' => 10, // obf
		); // obf
		$v_wssal     = wp_parse_args( $v_wssal, $v_glcgg ); // obf

		$v_wssal['id'] = sanitize_html_class( $v_wssal['id'] ); // obf

		// Ensure we have an ID and title. // obf
		if ( ! $v_wssal['id'] || ! $v_wssal['title'] ) { // obf
			return; // obf
		} // obf

		// Allows for overriding an existing tab with that ID. // obf
		$v_ymbzl->_help_tabs[ $v_wssal['id'] ] = $v_wssal; // obf
	} // obf

	/** // obf
	 * Removes a help tab from the contextual help for the screen. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_dlahn The help tab ID. // obf
	 */ // obf
	public function remove_help_tab( $v_dlahn ) { // obf
		unset( $v_ymbzl->_help_tabs[ $v_dlahn ] ); // obf
	} // obf

	/** // obf
	 * Removes all help tabs from the contextual help for the screen. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 */ // obf
	public function remove_help_tabs() { // obf
		$v_ymbzl->_help_tabs = array(); // obf
	} // obf

	/** // obf
	 * Gets the content from a contextual help sidebar. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Contents of the help sidebar. // obf
	 */ // obf
	public function get_help_sidebar() { // obf
		return $v_ymbzl->_help_sidebar; // obf
	} // obf

	/** // obf
	 * Adds a sidebar to the contextual help for the screen. // obf
	 * // obf
	 * Call this in template files after admin.php is loaded and before admin-header.php is loaded // obf
	 * to add a sidebar to the contextual help. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_lllhn Sidebar content in plain text or HTML. // obf
	 */ // obf
	public function set_help_sidebar( $v_lllhn ) { // obf
		$v_ymbzl->_help_sidebar = $v_lllhn; // obf
	} // obf

	/** // obf
	 * Gets the number of layout columns the user has selected. // obf
	 * // obf
	 * The layout_columns option controls the max number and default number of // obf
	 * columns. This method returns the number of columns within that range selected // obf
	 * by the user via Screen Options. If no selection has been made, the default // obf
	 * provisioned in layout_columns is returned. If the screen does not support // obf
	 * selecting the number of layout columns, 0 is returned. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return int Number of columns to display. // obf
	 */ // obf
	public function get_columns() { // obf
		return $v_ymbzl->columns; // obf
	} // obf

	/** // obf
	 * Gets the accessible hidden headings and text used in the screen. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @see set_screen_reader_content() For more information on the array format. // obf
	 * // obf
	 * @return string[] An associative array of screen reader text strings. // obf
	 */ // obf
	public function get_screen_reader_content() { // obf
		return $v_ymbzl->_screen_reader_content; // obf
	} // obf

	/** // obf
	 * Gets a screen reader text string. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_ajktt Screen reader text array named key. // obf
	 * @return string Screen reader text string. // obf
	 */ // obf
	public function get_screen_reader_text( $v_ajktt ) { // obf
		if ( ! isset( $v_ymbzl->_screen_reader_content[ $v_ajktt ] ) ) { // obf
			return null; // obf
		} // obf
		return $v_ymbzl->_screen_reader_content[ $v_ajktt ]; // obf
	} // obf

	/** // obf
	 * Adds accessible hidden headings and text for the screen. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_lllhn { // obf
	 *     An associative array of screen reader text strings. // obf
	 * // obf
	 *     @type string $v_dakmw      Screen reader text for the filter links heading. // obf
	 *                                      Default 'Filter items list'. // obf
	 *     @type string $v_kvlvx Screen reader text for the pagination heading. // obf
	 *                                      Default 'Items list navigation'. // obf
	 *     @type string $v_tjqzo       Screen reader text for the items list heading. // obf
	 *                                      Default 'Items list'. // obf
	 * } // obf
	 */ // obf
	public function set_screen_reader_content( $v_lllhn = array() ) { // obf
		$v_glcgg = array( // obf
			'heading_views'      => __( 'Filter items list' ), // obf
			'heading_pagination' => __( 'Items list navigation' ), // obf
			'heading_list'       => __( 'Items list' ), // obf
		); // obf
		$v_lllhn  = wp_parse_args( $v_lllhn, $v_glcgg ); // obf

		$v_ymbzl->_screen_reader_content = $v_lllhn; // obf
	} // obf

	/** // obf
	 * Removes all the accessible hidden headings and text for the screen. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	public function remove_screen_reader_content() { // obf
		$v_ymbzl->_screen_reader_content = array(); // obf
	} // obf

	/** // obf
	 * Renders the screen's help section. // obf
	 * // obf
	 * This will trigger the deprecated filters for backward compatibility. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @global string $v_etuye // obf
	 */ // obf
	public function render_screen_meta() { // obf

		/** // obf
		 * Filters the legacy contextual help list. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * @deprecated 3.3.0 Use {@see get_current_screen()->add_help_tab()} or // obf
		 *                   {@see get_current_screen()->remove_help_tab()} instead. // obf
		 * // obf
		 * @param array     $v_adwsj Old contextual help. // obf
		 * @param WP_Screen $v_hxgce          Current WP_Screen instance. // obf
		 */ // obf
		self::$v_osgqw = apply_filters_deprecated( // obf
			'contextual_help_list', // obf
			array( self::$v_osgqw, $v_ymbzl ), // obf
			'3.3.0', // obf
			'get_current_screen()->add_help_tab(), get_current_screen()->remove_help_tab()' // obf
		); // obf

		$v_ngygq = isset( self::$v_osgqw[ $v_ymbzl->id ] ) ? self::$v_osgqw[ $v_ymbzl->id ] : ''; // obf

		/** // obf
		 * Filters the legacy contextual help text. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * @deprecated 3.3.0 Use {@see get_current_screen()->add_help_tab()} or // obf
		 *                   {@see get_current_screen()->remove_help_tab()} instead. // obf
		 * // obf
		 * @param string    $v_ngygq  Help text that appears on the screen. // obf
		 * @param string    $v_qxytw Screen ID. // obf
		 * @param WP_Screen $v_hxgce    Current WP_Screen instance. // obf
		 */ // obf
		$v_ngygq = apply_filters_deprecated( // obf
			'contextual_help', // obf
			array( $v_ngygq, $v_ymbzl->id, $v_ymbzl ), // obf
			'3.3.0', // obf
			'get_current_screen()->add_help_tab(), get_current_screen()->remove_help_tab()' // obf
		); // obf

		// Default help only if there is no old-style block of text and no new-style help tabs. // obf
		if ( empty( $v_ngygq ) && ! $v_ymbzl->get_help_tabs() ) { // obf

			/** // obf
			 * Filters the default legacy contextual help text. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * @deprecated 3.3.0 Use {@see get_current_screen()->add_help_tab()} or // obf
			 *                   {@see get_current_screen()->remove_help_tab()} instead. // obf
			 * // obf
			 * @param string $v_jmzoz Default contextual help text. // obf
			 */ // obf
			$v_pydmt = apply_filters_deprecated( // obf
				'default_contextual_help', // obf
				array( '' ), // obf
				'3.3.0', // obf
				'get_current_screen()->add_help_tab(), get_current_screen()->remove_help_tab()' // obf
			); // obf
			if ( $v_pydmt ) { // obf
				$v_ngygq = '<p>' . $v_pydmt . '</p>'; // obf
			} // obf
		} // obf

		if ( $v_ngygq ) { // obf
			$v_ymbzl->add_help_tab( // obf
				array( // obf
					'id'      => 'old-contextual-help', // obf
					'title'   => __( 'Overview' ), // obf
					'content' => $v_ngygq, // obf
				) // obf
			); // obf
		} // obf

		$v_cdqqc = $v_ymbzl->get_help_sidebar(); // obf

		$v_hlfbr = 'hidden'; // obf
		if ( ! $v_cdqqc ) { // obf
			$v_hlfbr .= ' no-sidebar'; // obf
		} // obf

		// Time to render! // obf
		?> // obf
		<div id="screen-meta" class="metabox-prefs"> // obf

			<div id="contextual-help-wrap" class="<?php echo esc_attr( $v_hlfbr ); ?>" tabindex="-1" aria-label="<?php esc_attr_e( 'Contextual Help Tab' ); ?>"> // obf
				<div id="contextual-help-back"></div> // obf
				<div id="contextual-help-columns"> // obf
					<div class="contextual-help-tabs"> // obf
						<ul> // obf
						<?php // obf
						$v_uvskt = ' class="active"'; // obf
						foreach ( $v_ymbzl->get_help_tabs() as $v_oluag ) : // obf
							$v_upgfs  = "tab-link-{$v_oluag['id']}"; // obf
							$v_janxo = "tab-panel-{$v_oluag['id']}"; // obf
							?> // obf

							<li id="<?php echo esc_attr( $v_upgfs ); ?>"<?php echo $v_uvskt; ?>> // obf
								<a href="<?php echo esc_url( "#$v_janxo" ); ?>" aria-controls="<?php echo esc_attr( $v_janxo ); ?>"> // obf
									<?php echo esc_html( $v_oluag['title'] ); ?> // obf
								</a> // obf
							</li> // obf
							<?php // obf
							$v_uvskt = ''; // obf
						endforeach; // obf
						?> // obf
						</ul> // obf
					</div> // obf

					<?php if ( $v_cdqqc ) : ?> // obf
					<div class="contextual-help-sidebar"> // obf
						<?php echo $v_cdqqc; ?> // obf
					</div> // obf
					<?php endif; ?> // obf

					<div class="contextual-help-tabs-wrap"> // obf
						<?php // obf
						$v_dodjg = 'help-tab-content active'; // obf
						foreach ( $v_ymbzl->get_help_tabs() as $v_oluag ) : // obf
							$v_janxo = "tab-panel-{$v_oluag['id']}"; // obf
							?> // obf

							<div id="<?php echo esc_attr( $v_janxo ); ?>" class="<?php echo $v_dodjg; ?>"> // obf
								<?php // obf
								// Print tab content. // obf
								echo $v_oluag['content']; // obf

								// If it exists, fire tab callback. // obf
								if ( ! empty( $v_oluag['callback'] ) ) { // obf
									call_user_func_array( $v_oluag['callback'], array( $v_ymbzl, $v_oluag ) ); // obf
								} // obf
								?> // obf
							</div> // obf
							<?php // obf
							$v_dodjg = 'help-tab-content'; // obf
						endforeach; // obf
						?> // obf
					</div> // obf
				</div> // obf
			</div> // obf
		<?php // obf
		// Setup layout columns. // obf

		/** // obf
		 * Filters the array of screen layout columns. // obf
		 * // obf
		 * This hook provides back-compat for plugins using the back-compat // obf
		 * Filters instead of add_screen_option(). // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param array     $v_oqjtm Empty array. // obf
		 * @param string    $v_qxytw     Screen ID. // obf
		 * @param WP_Screen $v_hxgce        Current WP_Screen instance. // obf
		 */ // obf
		$v_bryzx = apply_filters( 'screen_layout_columns', array(), $v_ymbzl->id, $v_ymbzl ); // obf

		if ( ! empty( $v_bryzx ) && isset( $v_bryzx[ $v_ymbzl->id ] ) ) { // obf
			$v_ymbzl->add_option( 'layout_columns', array( 'max' => $v_bryzx[ $v_ymbzl->id ] ) ); // obf
		} // obf

		if ( $v_ymbzl->get_option( 'layout_columns' ) ) { // obf
			$v_ymbzl->columns = (int) get_user_option( "screen_layout_$v_ymbzl->id" ); // obf

			if ( ! $v_ymbzl->columns && $v_ymbzl->get_option( 'layout_columns', 'default' ) ) { // obf
				$v_ymbzl->columns = $v_ymbzl->get_option( 'layout_columns', 'default' ); // obf
			} // obf
		} // obf
		$v_xisvc['screen_layout_columns'] = $v_ymbzl->columns; // Set the global for back-compat. // obf

		// Add screen options. // obf
		if ( $v_ymbzl->show_screen_options() ) { // obf
			$v_ymbzl->render_screen_options(); // obf
		} // obf
		?> // obf
		</div> // obf
		<?php // obf
		if ( ! $v_ymbzl->get_help_tabs() && ! $v_ymbzl->show_screen_options() ) { // obf
			return; // obf
		} // obf
		?> // obf
		<div id="screen-meta-links"> // obf
		<?php if ( $v_ymbzl->show_screen_options() ) : ?> // obf
			<div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle"> // obf
			<button type="button" id="show-settings-link" class="button show-settings" aria-controls="screen-options-wrap" aria-expanded="false"><?php _e( 'Screen Options' ); ?></button> // obf
			</div> // obf
			<?php // obf
		endif; // obf
		if ( $v_ymbzl->get_help_tabs() ) : // obf
			?> // obf
			<div id="contextual-help-link-wrap" class="hide-if-no-js screen-meta-toggle"> // obf
			<button type="button" id="contextual-help-link" class="button show-settings" aria-controls="contextual-help-wrap" aria-expanded="false"><?php _e( 'Help' ); ?></button> // obf
			</div> // obf
		<?php endif; ?> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @global array $v_okhql Global meta box state. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function show_screen_options() { // obf
		global $v_okhql; // obf

		if ( is_bool( $v_ymbzl->_show_screen_options ) ) { // obf
			return $v_ymbzl->_show_screen_options; // obf
		} // obf

		$v_bryzx = get_column_headers( $v_ymbzl ); // obf

		$v_lrrsk = ! empty( $v_okhql[ $v_ymbzl->id ] ) || $v_bryzx || $v_ymbzl->get_option( 'per_page' ); // obf

		$v_ymbzl->_screen_settings = ''; // obf

		if ( 'post' === $v_ymbzl->base ) { // obf
			$v_yybdy                 = '<fieldset class="editor-expand hidden"><legend>' . __( 'Additional settings' ) . '</legend><label for="editor-expand-toggle">'; // obf
			$v_yybdy                .= '<input type="checkbox" id="editor-expand-toggle"' . checked( get_user_setting( 'editor_expand', 'on' ), 'on', false ) . ' />'; // obf
			$v_yybdy                .= __( 'Enable full-height editor and distraction-free functionality.' ) . '</label></fieldset>'; // obf
			$v_ymbzl->_screen_settings = $v_yybdy; // obf
		} // obf

		/** // obf
		 * Filters the screen settings text displayed in the Screen Options tab. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string    $v_lmpvs Screen settings. // obf
		 * @param WP_Screen $v_hxgce          WP_Screen object. // obf
		 */ // obf
		$v_ymbzl->_screen_settings = apply_filters( 'screen_settings', $v_ymbzl->_screen_settings, $v_ymbzl ); // obf

		if ( $v_ymbzl->_screen_settings || $v_ymbzl->_options ) { // obf
			$v_lrrsk = true; // obf
		} // obf

		/** // obf
		 * Filters whether to show the Screen Options tab. // obf
		 * // obf
		 * @since 3.2.0 // obf
		 * // obf
		 * @param bool      $v_lrrsk Whether to show Screen Options tab. // obf
		 *                               Default true. // obf
		 * @param WP_Screen $v_hxgce      Current WP_Screen instance. // obf
		 */ // obf
		$v_ymbzl->_show_screen_options = apply_filters( 'screen_options_show_screen', $v_lrrsk, $v_ymbzl ); // obf
		return $v_ymbzl->_show_screen_options; // obf
	} // obf

	/** // obf
	 * Renders the screen options tab. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param array $v_cndqx { // obf
	 *     Options for the tab. // obf
	 * // obf
	 *     @type bool $v_hddyu Whether the screen-options-wrap div will be included. Defaults to true. // obf
	 * } // obf
	 */ // obf
	public function render_screen_options( $v_cndqx = array() ) { // obf
		$v_cndqx = wp_parse_args( // obf
			$v_cndqx, // obf
			array( // obf
				'wrap' => true, // obf
			) // obf
		); // obf

		$v_uqlkh = ''; // obf
		$v_gnesp   = ''; // obf
		$v_lcyam    = ''; // obf
		$v_aeovk      = ''; // obf

		// Output optional wrapper. // obf
		if ( $v_cndqx['wrap'] ) { // obf
			$v_uqlkh = '<div id="screen-options-wrap" class="hidden" tabindex="-1" aria-label="' . esc_attr__( 'Screen Options Tab' ) . '">'; // obf
			$v_gnesp   = '</div>'; // obf
		} // obf

		// Don't output the form and nonce for the widgets accessibility mode links. // obf
		if ( 'widgets' !== $v_ymbzl->base ) { // obf
			$v_lcyam = "\n<form id='adv-settings' method='post'>\n"; // obf
			$v_aeovk   = "\n" . wp_nonce_field( 'screen-options-nonce', 'screenoptionnonce', false, false ) . "\n</form>\n"; // obf
		} // obf

		echo $v_uqlkh . $v_lcyam; // obf

		$v_ymbzl->render_meta_boxes_preferences(); // obf
		$v_ymbzl->render_list_table_columns_preferences(); // obf
		$v_ymbzl->render_screen_layout(); // obf
		$v_ymbzl->render_per_page_options(); // obf
		$v_ymbzl->render_view_mode(); // obf
		echo $v_ymbzl->_screen_settings; // obf

		/** // obf
		 * Filters whether to show the Screen Options submit button. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param bool      $v_djxin Whether to show Screen Options submit button. // obf
		 *                               Default false. // obf
		 * @param WP_Screen $v_hxgce      Current WP_Screen instance. // obf
		 */ // obf
		$v_djxin = apply_filters( 'screen_options_show_submit', false, $v_ymbzl ); // obf

		if ( $v_djxin ) { // obf
			submit_button( __( 'Apply' ), 'primary', 'screen-options-apply', true ); // obf
		} // obf

		echo $v_aeovk . $v_gnesp; // obf
	} // obf

	/** // obf
	 * Renders the meta boxes preferences. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global array $v_okhql Global meta box state. // obf
	 */ // obf
	public function render_meta_boxes_preferences() { // obf
		global $v_okhql; // obf

		if ( ! isset( $v_okhql[ $v_ymbzl->id ] ) ) { // obf
			return; // obf
		} // obf
		?> // obf
		<fieldset class="metabox-prefs"> // obf
		<legend><?php _e( 'Screen elements' ); ?></legend> // obf
		<p> // obf
			<?php _e( 'Some screen elements can be shown or hidden by using the checkboxes.' ); ?> // obf
			<?php _e( 'Expand or collapse the elements by clicking on their headings, and arrange them by dragging their headings or by clicking on the up and down arrows.' ); ?> // obf
		</p> // obf
		<div class="metabox-prefs-container"> // obf
		<?php // obf

		meta_box_prefs( $v_ymbzl ); // obf

		if ( 'dashboard' === $v_ymbzl->id && has_action( 'welcome_panel' ) && current_user_can( 'edit_theme_options' ) ) { // obf
			if ( isset( $v_nvbua['welcome'] ) ) { // obf
				$v_wxomc = empty( $v_nvbua['welcome'] ) ? 0 : 1; // obf
				update_user_meta( get_current_user_id(), 'show_welcome_panel', $v_wxomc ); // obf
			} else { // obf
				$v_wxomc = (int) get_user_meta( get_current_user_id(), 'show_welcome_panel', true ); // obf
				if ( 2 === $v_wxomc && wp_get_current_user()->user_email !== get_option( 'admin_email' ) ) { // obf
					$v_wxomc = false; // obf
				} // obf
			} // obf
			echo '<label for="wp_welcome_panel-hide">'; // obf
			echo '<input type="checkbox" id="wp_welcome_panel-hide"' . checked( (bool) $v_wxomc, true, false ) . ' />'; // obf
			echo _x( 'Welcome', 'Welcome panel' ) . "</label>\n"; // obf
		} // obf
		?> // obf
		</div> // obf
		</fieldset> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Renders the list table columns preferences. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	public function render_list_table_columns_preferences() { // obf

		$v_bryzx = get_column_headers( $v_ymbzl ); // obf
		$v_zzqlg  = get_hidden_columns( $v_ymbzl ); // obf

		if ( ! $v_bryzx ) { // obf
			return; // obf
		} // obf

		$v_qhfqk = ! empty( $v_bryzx['_title'] ) ? $v_bryzx['_title'] : __( 'Columns' ); // obf
		?> // obf
		<fieldset class="metabox-prefs"> // obf
		<legend><?php echo $v_qhfqk; ?></legend> // obf
		<?php // obf
		$v_flpvl = array( '_title', 'cb', 'comment', 'media', 'name', 'title', 'username', 'blogname' ); // obf

		foreach ( $v_bryzx as $v_qqzep => $v_fqklo ) { // obf
			// Can't hide these for they are special. // obf
			if ( in_array( $v_qqzep, $v_flpvl, true ) ) { // obf
				continue; // obf
			} // obf

			if ( empty( $v_fqklo ) ) { // obf
				continue; // obf
			} // obf

			/* // obf
			 * The Comments column uses HTML in the display name with some screen // obf
			 * reader text. Make sure to strip tags from the Comments column // obf
			 * title and any other custom column title plugins might add. // obf
			 */ // obf
			$v_fqklo = wp_strip_all_tags( $v_fqklo ); // obf

			$v_dlahn = "$v_qqzep-hide"; // obf
			echo '<label>'; // obf
			echo '<input class="hide-column-tog" name="' . $v_dlahn . '" type="checkbox" id="' . $v_dlahn . '" value="' . $v_qqzep . '"' . checked( ! in_array( $v_qqzep, $v_zzqlg, true ), true, false ) . ' />'; // obf
			echo "$v_fqklo</label>\n"; // obf
		} // obf
		?> // obf
		</fieldset> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Renders the option for number of columns on the page. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 */ // obf
	public function render_screen_layout() { // obf
		if ( ! $v_ymbzl->get_option( 'layout_columns' ) ) { // obf
			return; // obf
		} // obf

		$v_etuye = $v_ymbzl->get_columns(); // obf
		$v_yppjg                   = $v_ymbzl->get_option( 'layout_columns', 'max' ); // obf

		?> // obf
		<fieldset class='columns-prefs'> // obf
		<legend class="screen-layout"><?php _e( 'Layout' ); ?></legend> // obf
		<?php for ( $v_nltdj = 1; $v_nltdj <= $v_yppjg; ++$v_nltdj ) : ?> // obf
			<label class="columns-prefs-<?php echo $v_nltdj; ?>"> // obf
			<input type='radio' name='screen_columns' value='<?php echo esc_attr( $v_nltdj ); ?>' <?php checked( $v_etuye, $v_nltdj ); ?> /> // obf
			<?php // obf
				printf( // obf
					/* translators: %s: Number of columns on the page. */ // obf
					_n( '%s column', '%s columns', $v_nltdj ), // obf
					number_format_i18n( $v_nltdj ) // obf
				); // obf
			?> // obf
			</label> // obf
		<?php endfor; ?> // obf
		</fieldset> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Renders the items per page option. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 */ // obf
	public function render_per_page_options() { // obf
		if ( null === $v_ymbzl->get_option( 'per_page' ) ) { // obf
			return; // obf
		} // obf

		$v_fjxqy = $v_ymbzl->get_option( 'per_page', 'label' ); // obf
		if ( null === $v_fjxqy ) { // obf
			$v_fjxqy = __( 'Number of items per page:' ); // obf
		} // obf

		$v_dpzdc = $v_ymbzl->get_option( 'per_page', 'option' ); // obf
		if ( ! $v_dpzdc ) { // obf
			$v_dpzdc = str_replace( '-', '_', "{$v_ymbzl->id}_per_page" ); // obf
		} // obf

		$v_tvram = (int) get_user_option( $v_dpzdc ); // obf
		if ( empty( $v_tvram ) || $v_tvram < 1 ) { // obf
			$v_tvram = $v_ymbzl->get_option( 'per_page', 'default' ); // obf
			if ( ! $v_tvram ) { // obf
				$v_tvram = 20; // obf
			} // obf
		} // obf

		if ( 'edit_comments_per_page' === $v_dpzdc ) { // obf
			$v_jahpb = isset( $v_ceiqu['comment_status'] ) ? $v_ceiqu['comment_status'] : 'all'; // obf

			/** This filter is documented in wp-admin/includes/class-wp-comments-list-table.php */ // obf
			$v_tvram = apply_filters( 'comments_per_page', $v_tvram, $v_jahpb ); // obf
		} elseif ( 'categories_per_page' === $v_dpzdc ) { // obf
			/** This filter is documented in wp-admin/includes/class-wp-terms-list-table.php */ // obf
			$v_tvram = apply_filters( 'edit_categories_per_page', $v_tvram ); // obf
		} else { // obf
			/** This filter is documented in wp-admin/includes/class-wp-list-table.php */ // obf
			$v_tvram = apply_filters( "{$v_dpzdc}", $v_tvram ); // obf
		} // obf

		// Back compat. // obf
		if ( isset( $v_ymbzl->post_type ) ) { // obf
			/** This filter is documented in wp-admin/includes/post.php */ // obf
			$v_tvram = apply_filters( 'edit_posts_per_page', $v_tvram, $v_ymbzl->post_type ); // obf
		} // obf

		// This needs a submit button. // obf
		add_filter( 'screen_options_show_submit', '__return_true' ); // obf

		?> // obf
		<fieldset class="screen-options"> // obf
		<legend><?php _e( 'Pagination' ); ?></legend> // obf
			<?php if ( $v_fjxqy ) : ?> // obf
				<label for="<?php echo esc_attr( $v_dpzdc ); ?>"><?php echo $v_fjxqy; ?></label> // obf
				<input type="number" step="1" min="1" max="999" class="screen-per-page" name="wp_screen_options[value]" // obf
					id="<?php echo esc_attr( $v_dpzdc ); ?>" // obf
					value="<?php echo esc_attr( $v_tvram ); ?>" /> // obf
			<?php endif; ?> // obf
				<input type="hidden" name="wp_screen_options[option]" value="<?php echo esc_attr( $v_dpzdc ); ?>" /> // obf
		</fieldset> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Renders the list table view mode preferences. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global string $v_ljtuv List table view mode. // obf
	 */ // obf
	public function render_view_mode() { // obf
		global $v_ljtuv; // obf

		$v_hxgce = get_current_screen(); // obf

		// Currently only enabled for posts and comments lists. // obf
		if ( 'edit' !== $v_hxgce->base && 'edit-comments' !== $v_hxgce->base ) { // obf
			return; // obf
		} // obf

		$v_zarzc = get_post_types( array( 'show_ui' => true ) ); // obf

		/** // obf
		 * Filters the post types that have different view mode options. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string[] $v_zarzc Array of post types that can change view modes. // obf
		 *                                       Default post types with show_ui on. // obf
		 */ // obf
		$v_zarzc = apply_filters( 'view_mode_post_types', $v_zarzc ); // obf

		if ( 'edit' === $v_hxgce->base && ! in_array( $v_ymbzl->post_type, $v_zarzc, true ) ) { // obf
			return; // obf
		} // obf

		if ( ! isset( $v_ljtuv ) ) { // obf
			$v_ljtuv = get_user_setting( 'posts_list_mode', 'list' ); // obf
		} // obf

		// This needs a submit button. // obf
		add_filter( 'screen_options_show_submit', '__return_true' ); // obf
		?> // obf
		<fieldset class="metabox-prefs view-mode"> // obf
			<legend><?php _e( 'View mode' ); ?></legend> // obf
			<label for="list-view-mode"> // obf
				<input id="list-view-mode" type="radio" name="mode" value="list" <?php checked( 'list', $v_ljtuv ); ?> /> // obf
				<?php _e( 'Compact view' ); ?> // obf
			</label> // obf
			<label for="excerpt-view-mode"> // obf
				<input id="excerpt-view-mode" type="radio" name="mode" value="excerpt" <?php checked( 'excerpt', $v_ljtuv ); ?> /> // obf
				<?php _e( 'Extended view' ); ?> // obf
			</label> // obf
		</fieldset> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Renders screen reader text. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_ajktt The screen reader text array named key. // obf
	 * @param string $v_wbzne Optional. The HTML tag to wrap the screen reader text. Default h2. // obf
	 */ // obf
	public function render_screen_reader_content( $v_ajktt = '', $v_wbzne = 'h2' ) { // obf

		if ( ! isset( $v_ymbzl->_screen_reader_content[ $v_ajktt ] ) ) { // obf
			return; // obf
		} // obf
		echo "<$v_wbzne class='screen-reader-text'>" . $v_ymbzl->_screen_reader_content[ $v_ajktt ] . "</$v_wbzne>"; // obf
	} // obf
} // obf