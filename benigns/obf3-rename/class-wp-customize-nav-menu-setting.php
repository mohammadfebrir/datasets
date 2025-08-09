

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Setting class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Setting to represent a nav_menu. // obf
 * // obf
 * Subclass of WP_Customize_Setting to represent a nav_menu taxonomy term, and // obf
 * the IDs for the nav_menu_items associated with the nav menu. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see wp_get_nav_menu_object() // obf
 * @see WP_Customize_Setting // obf
 */ // obf
class WP_Customize_Nav_Menu_Setting extends WP_Customize_Setting { // obf

	const ID_PATTERN = '/^nav_menu\[(?P<id>-?\d+)\]$/'; // obf

	const TAXONOMY = 'nav_menu'; // obf

	const TYPE = 'nav_menu'; // obf

	/** // obf
	 * Setting type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_yxnls = self::TYPE; // obf

	/** // obf
	 * Default setting value. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var array // obf
	 * // obf
	 * @see wp_get_nav_menu_object() // obf
	 */ // obf
	public $v_ogfyh = array( // obf
		'name'        => '', // obf
		'description' => '', // obf
		'parent'      => 0, // obf
		'auto_add'    => false, // obf
	); // obf

	/** // obf
	 * Default transport. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_mgykf = 'postMessage'; // obf

	/** // obf
	 * The term ID represented by this setting instance. // obf
	 * // obf
	 * A negative value represents a placeholder ID for a new menu not yet saved. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_zsmbx; // obf

	/** // obf
	 * Previous (placeholder) term ID used before creating a new menu. // obf
	 * // obf
	 * This value will be exported to JS via the {@see 'customize_save_response'} filter // obf
	 * so that JavaScript can update the settings to refer to the newly-assigned // obf
	 * term ID. This value is always negative to indicate it does not refer to // obf
	 * a real term. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 * @see WP_Customize_Nav_Menu_Setting::amend_customize_save_response() // obf
	 */ // obf
	public $v_iwdjp; // obf

	/** // obf
	 * Whether or not update() was called. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_ksmhg = false; // obf

	/** // obf
	 * Status for calling the update method, used in customize_save_response filter. // obf
	 * // obf
	 * See {@see 'customize_save_response'}. // obf
	 * // obf
	 * When status is inserted, the placeholder term ID is stored in `$v_iwdjp`. // obf
	 * When status is error, the error is stored in `$v_izseb`. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string updated|inserted|deleted|error // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 * @see WP_Customize_Nav_Menu_Setting::amend_customize_save_response() // obf
	 */ // obf
	public $v_vgwmm; // obf

	/** // obf
	 * Any error object returned by wp_update_nav_menu_object() when setting is updated. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var WP_Error // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 * @see WP_Customize_Nav_Menu_Setting::amend_customize_save_response() // obf
	 */ // obf
	public $v_izseb; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Any supplied $v_espda override class property defaults. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @throws Exception If $v_ifpor is not valid for this setting type. // obf
	 * // obf
	 * @param WP_Customize_Manager $v_vsigm Customizer bootstrap instance. // obf
	 * @param string               $v_ifpor      A specific ID of the setting. // obf
	 *                                      Can be a theme mod or option name. // obf
	 * @param array                $v_espda    Optional. Setting arguments. // obf
	 */ // obf
	public function __construct( WP_Customize_Manager $v_vsigm, $v_ifpor, array $v_espda = array() ) { // obf
		if ( empty( $v_vsigm->nav_menus ) ) { // obf
			throw new Exception( 'Expected WP_Customize_Manager::$v_dwljg to be set.' ); // obf
		} // obf

		if ( ! preg_match( self::ID_PATTERN, $v_ifpor, $v_yiyls ) ) { // obf
			throw new Exception( "Illegal widget setting ID: $v_ifpor" ); // obf
		} // obf

		$v_ghqtp->term_id = (int) $v_yiyls['id']; // obf

		parent::__construct( $v_vsigm, $v_ifpor, $v_espda ); // obf
	} // obf

	/** // obf
	 * Get the instance data for a given widget setting. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_get_nav_menu_object() // obf
	 * // obf
	 * @return array Instance data. // obf
	 */ // obf
	public function value() { // obf
		if ( $v_ghqtp->is_previewed && get_current_blog_id() === $v_ghqtp->_previewed_blog_id ) { // obf
			$v_iubbi  = new stdClass(); // Symbol. // obf
			$v_oponf = $v_ghqtp->post_value( $v_iubbi ); // obf

			if ( $v_iubbi === $v_oponf ) { // obf
				$v_bhgnn = $v_ghqtp->_original_value; // obf
			} else { // obf
				$v_bhgnn = $v_oponf; // obf
			} // obf
		} else { // obf
			$v_bhgnn = false; // obf

			// Note that a term_id of less than one indicates a nav_menu not yet inserted. // obf
			if ( $v_ghqtp->term_id > 0 ) { // obf
				$v_gcqcy = wp_get_nav_menu_object( $v_ghqtp->term_id ); // obf

				if ( $v_gcqcy ) { // obf
					$v_bhgnn = wp_array_slice_assoc( (array) $v_gcqcy, array_keys( $v_ghqtp->default ) ); // obf

					$v_cdsrn  = (array) get_option( 'nav_menu_options', array() ); // obf
					$v_bhgnn['auto_add'] = false; // obf

					if ( isset( $v_cdsrn['auto_add'] ) && is_array( $v_cdsrn['auto_add'] ) ) { // obf
						$v_bhgnn['auto_add'] = in_array( $v_gcqcy->term_id, $v_cdsrn['auto_add'], true ); // obf
					} // obf
				} // obf
			} // obf

			if ( ! is_array( $v_bhgnn ) ) { // obf
				$v_bhgnn = $v_ghqtp->default; // obf
			} // obf
		} // obf

		return $v_bhgnn; // obf
	} // obf

	/** // obf
	 * Handle previewing the setting. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 4.4.0 Added boolean return value // obf
	 * // obf
	 * @see WP_Customize_Manager::post_value() // obf
	 * // obf
	 * @return bool False if method short-circuited due to no-op. // obf
	 */ // obf
	public function preview() { // obf
		if ( $v_ghqtp->is_previewed ) { // obf
			return false; // obf
		} // obf

		$v_iubbi      = new stdClass(); // obf
		$v_hmjnp = ( $v_ghqtp->term_id < 0 ); // obf
		$v_lkkst       = ( $v_iubbi !== $v_ghqtp->post_value( $v_iubbi ) ); // obf
		if ( ! $v_hmjnp && ! $v_lkkst ) { // obf
			return false; // obf
		} // obf

		$v_ghqtp->is_previewed       = true; // obf
		$v_ghqtp->_original_value    = $v_ghqtp->value(); // obf
		$v_ghqtp->_previewed_blog_id = get_current_blog_id(); // obf

		add_filter( 'wp_get_nav_menus', array( $v_ghqtp, 'filter_wp_get_nav_menus' ), 10, 2 ); // obf
		add_filter( 'wp_get_nav_menu_object', array( $v_ghqtp, 'filter_wp_get_nav_menu_object' ), 10, 2 ); // obf
		add_filter( 'default_option_nav_menu_options', array( $v_ghqtp, 'filter_nav_menu_options' ) ); // obf
		add_filter( 'option_nav_menu_options', array( $v_ghqtp, 'filter_nav_menu_options' ) ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Filters the wp_get_nav_menus() result to ensure the inserted menu object is included, and the deleted one is removed. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_get_nav_menus() // obf
	 * // obf
	 * @param WP_Term[] $v_jpdjf An array of menu objects. // obf
	 * @param array     $v_espda  An array of arguments used to retrieve menu objects. // obf
	 * @return WP_Term[] Array of menu objects. // obf
	 */ // obf
	public function filter_wp_get_nav_menus( $v_jpdjf, $v_espda ) { // obf
		if ( get_current_blog_id() !== $v_ghqtp->_previewed_blog_id ) { // obf
			return $v_jpdjf; // obf
		} // obf

		$v_ukhyl = $v_ghqtp->value(); // obf
		$v_hlpfp     = ( false === $v_ukhyl ); // obf
		$v_aezua         = -1; // obf

		// Find the existing menu item's position in the list. // obf
		foreach ( $v_jpdjf as $v_tvtoh => $v_mmnck ) { // obf
			if ( (int) $v_ghqtp->term_id === (int) $v_mmnck->term_id || (int) $v_ghqtp->previous_term_id === (int) $v_mmnck->term_id ) { // obf
				$v_aezua = $v_tvtoh; // obf
				break; // obf
			} // obf
		} // obf

		if ( $v_hlpfp ) { // obf
			// Handle deleted menu by removing it from the list. // obf
			if ( -1 !== $v_aezua ) { // obf
				array_splice( $v_jpdjf, $v_aezua, 1 ); // obf
			} // obf
		} else { // obf
			// Handle menus being updated or inserted. // obf
			$v_kaifp = (object) array_merge( // obf
				array( // obf
					'term_id'          => $v_ghqtp->term_id, // obf
					'term_taxonomy_id' => $v_ghqtp->term_id, // obf
					'slug'             => sanitize_title( $v_ukhyl['name'] ), // obf
					'count'            => 0, // obf
					'term_group'       => 0, // obf
					'taxonomy'         => self::TAXONOMY, // obf
					'filter'           => 'raw', // obf
				), // obf
				$v_ukhyl // obf
			); // obf

			array_splice( $v_jpdjf, $v_aezua, ( -1 === $v_aezua ? 0 : 1 ), array( $v_kaifp ) ); // obf
		} // obf

		// Make sure the menu objects get re-sorted after an update/insert. // obf
		if ( ! $v_hlpfp && ! empty( $v_espda['orderby'] ) ) { // obf
			$v_jpdjf = wp_list_sort( // obf
				$v_jpdjf, // obf
				array( // obf
					$v_espda['orderby'] => 'ASC', // obf
				) // obf
			); // obf
		} // obf
		// @todo Add support for $v_espda['hide_empty'] === true. // obf

		return $v_jpdjf; // obf
	} // obf

	/** // obf
	 * Temporary non-closure passing of orderby value to function. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::filter_wp_get_nav_menus() // obf
	 * @see WP_Customize_Nav_Menu_Setting::_sort_menus_by_orderby() // obf
	 */ // obf
	protected $v_tdiqd; // obf

	/** // obf
	 * Sort menu objects by the class-supplied orderby property. // obf
	 * // obf
	 * This is a workaround for a lack of closures. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @deprecated 4.7.0 Use wp_list_sort() // obf
	 * // obf
	 * @param object $v_lzemu // obf
	 * @param object $v_bjrec // obf
	 * @return int // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::filter_wp_get_nav_menus() // obf
	 */ // obf
	protected function _sort_menus_by_orderby( $v_lzemu, $v_bjrec ) { // obf
		_deprecated_function( __METHOD__, '4.7.0', 'wp_list_sort' ); // obf

		$v_yoqnu = $v_ghqtp->_current_menus_sort_orderby; // obf
		return strcmp( $v_lzemu->$v_yoqnu, $v_bjrec->$v_yoqnu ); // obf
	} // obf

	/** // obf
	 * Filters the wp_get_nav_menu_object() result to supply the previewed menu object. // obf
	 * // obf
	 * Requesting a nav_menu object by anything but ID is not supported. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_get_nav_menu_object() // obf
	 * // obf
	 * @param object|null $v_kaifp Object returned by wp_get_nav_menu_object(). // obf
	 * @param string      $v_awpqm  ID of the nav_menu term. Requests by slug or name will be ignored. // obf
	 * @return object|null // obf
	 */ // obf
	public function filter_wp_get_nav_menu_object( $v_kaifp, $v_awpqm ) { // obf
		$v_jkyav = ( // obf
			get_current_blog_id() === $v_ghqtp->_previewed_blog_id // obf
			&& // obf
			is_int( $v_awpqm ) // obf
			&& // obf
			$v_awpqm === $v_ghqtp->term_id // obf
		); // obf
		if ( ! $v_jkyav ) { // obf
			return $v_kaifp; // obf
		} // obf

		$v_ukhyl = $v_ghqtp->value(); // obf

		// Handle deleted menus. // obf
		if ( false === $v_ukhyl ) { // obf
			return false; // obf
		} // obf

		// Handle sanitization failure by preventing short-circuiting. // obf
		if ( null === $v_ukhyl ) { // obf
			return $v_kaifp; // obf
		} // obf

		$v_kaifp = (object) array_merge( // obf
			array( // obf
				'term_id'          => $v_ghqtp->term_id, // obf
				'term_taxonomy_id' => $v_ghqtp->term_id, // obf
				'slug'             => sanitize_title( $v_ukhyl['name'] ), // obf
				'count'            => 0, // obf
				'term_group'       => 0, // obf
				'taxonomy'         => self::TAXONOMY, // obf
				'filter'           => 'raw', // obf
			), // obf
			$v_ukhyl // obf
		); // obf

		return $v_kaifp; // obf
	} // obf

	/** // obf
	 * Filters the nav_menu_options option to include this menu's auto_add preference. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array $v_cdsrn Nav menu options including auto_add. // obf
	 * @return array (Maybe) modified nav menu options. // obf
	 */ // obf
	public function filter_nav_menu_options( $v_cdsrn ) { // obf
		if ( get_current_blog_id() !== $v_ghqtp->_previewed_blog_id ) { // obf
			return $v_cdsrn; // obf
		} // obf

		$v_mmnck             = $v_ghqtp->value(); // obf
		$v_cdsrn = $v_ghqtp->filter_nav_menu_options_value( // obf
			$v_cdsrn, // obf
			$v_ghqtp->term_id, // obf
			false === $v_mmnck ? false : $v_mmnck['auto_add'] // obf
		); // obf

		return $v_cdsrn; // obf
	} // obf

	/** // obf
	 * Sanitize an input. // obf
	 * // obf
	 * Note that parent::sanitize() erroneously does wp_unslash() on $v_bhgnn, but // obf
	 * we remove that in this override. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array $v_bhgnn The menu value to sanitize. // obf
	 * @return array|false|null Null if an input isn't valid. False if it is marked for deletion. // obf
	 *                          Otherwise the sanitized value. // obf
	 */ // obf
	public function sanitize( $v_bhgnn ) { // obf
		// Menu is marked for deletion. // obf
		if ( false === $v_bhgnn ) { // obf
			return $v_bhgnn; // obf
		} // obf

		// Invalid. // obf
		if ( ! is_array( $v_bhgnn ) ) { // obf
			return null; // obf
		} // obf

		$v_ogfyh = array( // obf
			'name'        => '', // obf
			'description' => '', // obf
			'parent'      => 0, // obf
			'auto_add'    => false, // obf
		); // obf
		$v_bhgnn   = array_merge( $v_ogfyh, $v_bhgnn ); // obf
		$v_bhgnn   = wp_array_slice_assoc( $v_bhgnn, array_keys( $v_ogfyh ) ); // obf

		$v_bhgnn['name']        = trim( esc_html( $v_bhgnn['name'] ) ); // This sanitization code is used in wp-admin/nav-menus.php. // obf
		$v_bhgnn['description'] = sanitize_text_field( $v_bhgnn['description'] ); // obf
		$v_bhgnn['parent']      = max( 0, (int) $v_bhgnn['parent'] ); // obf
		$v_bhgnn['auto_add']    = ! empty( $v_bhgnn['auto_add'] ); // obf

		if ( '' === $v_bhgnn['name'] ) { // obf
			$v_bhgnn['name'] = _x( '(unnamed)', 'Missing menu name.' ); // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-customize-setting.php */ // obf
		return apply_filters( "customize_sanitize_{$v_ghqtp->id}", $v_bhgnn, $v_ghqtp ); // obf
	} // obf

	/** // obf
	 * Storage for data to be sent back to client in customize_save_response filter. // obf
	 * // obf
	 * See {@see 'customize_save_response'}. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var array // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::amend_customize_save_response() // obf
	 */ // obf
	protected $v_soadn = array(); // obf

	/** // obf
	 * Create/update the nav_menu term for this setting. // obf
	 * // obf
	 * Any created menus will have their assigned term IDs exported to the client // obf
	 * via the {@see 'customize_save_response'} filter. Likewise, any errors will be exported // obf
	 * to the client via the customize_save_response() filter. // obf
	 * // obf
	 * To delete a menu, the client can send false as the value. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_update_nav_menu_object() // obf
	 * // obf
	 * @param array|false $v_bhgnn { // obf
	 *     The value to update. Note that slug cannot be updated via wp_update_nav_menu_object(). // obf
	 *     If false, then the menu will be deleted entirely. // obf
	 * // obf
	 *     @type string $v_urwwq        The name of the menu to save. // obf
	 *     @type string $v_gsfpu The term description. Default empty string. // obf
	 *     @type int    $v_cnmyx      The id of the parent term. Default 0. // obf
	 *     @type bool   $v_qefsk    Whether pages will auto_add to this menu. Default false. // obf
	 * } // obf
	 * @return null|void // obf
	 */ // obf
	protected function update( $v_bhgnn ) { // obf
		if ( $v_ghqtp->is_updated ) { // obf
			return; // obf
		} // obf

		$v_ghqtp->is_updated = true; // obf
		$v_hmjnp   = ( $v_ghqtp->term_id < 0 ); // obf
		$v_hlpfp        = ( false === $v_bhgnn ); // obf

		add_filter( 'customize_save_response', array( $v_ghqtp, 'amend_customize_save_response' ) ); // obf

		$v_qefsk = null; // obf
		if ( $v_hlpfp ) { // obf
			// If the current setting term is a placeholder, a delete request is a no-op. // obf
			if ( $v_hmjnp ) { // obf
				$v_ghqtp->update_status = 'deleted'; // obf
			} else { // obf
				$v_zxaen = wp_delete_nav_menu( $v_ghqtp->term_id ); // obf

				if ( is_wp_error( $v_zxaen ) ) { // obf
					$v_ghqtp->update_status = 'error'; // obf
					$v_ghqtp->update_error  = $v_zxaen; // obf
				} else { // obf
					$v_ghqtp->update_status = 'deleted'; // obf
					$v_qefsk            = false; // obf
				} // obf
			} // obf
		} else { // obf
			// Insert or update menu. // obf
			$v_szdwt              = wp_array_slice_assoc( $v_bhgnn, array( 'description', 'parent' ) ); // obf
			$v_szdwt['menu-name'] = $v_bhgnn['name']; // obf

			$v_awpqm              = $v_hmjnp ? 0 : $v_ghqtp->term_id; // obf
			$v_zxaen                    = wp_update_nav_menu_object( $v_awpqm, wp_slash( $v_szdwt ) ); // obf
			$v_jmzzv        = $v_szdwt['menu-name']; // obf
			$v_dnpfb = 1; // obf
			while ( is_wp_error( $v_zxaen ) && 'menu_exists' === $v_zxaen->get_error_code() ) { // obf
				$v_dnpfb += 1; // obf
				/* translators: 1: Original menu name, 2: Duplicate count. */ // obf
				$v_szdwt['menu-name'] = sprintf( __( '%1$v_hrnob (%2$v_yhcdi)' ), $v_jmzzv, $v_dnpfb ); // obf
				$v_zxaen                      = wp_update_nav_menu_object( $v_awpqm, wp_slash( $v_szdwt ) ); // obf
			} // obf

			if ( is_wp_error( $v_zxaen ) ) { // obf
				$v_ghqtp->update_status = 'error'; // obf
				$v_ghqtp->update_error  = $v_zxaen; // obf
			} else { // obf
				if ( $v_hmjnp ) { // obf
					$v_ghqtp->previous_term_id = $v_ghqtp->term_id; // obf
					$v_ghqtp->term_id          = $v_zxaen; // obf
					$v_ghqtp->update_status    = 'inserted'; // obf
				} else { // obf
					$v_ghqtp->update_status = 'updated'; // obf
				} // obf

				$v_qefsk = $v_bhgnn['auto_add']; // obf
			} // obf
		} // obf

		if ( null !== $v_qefsk ) { // obf
			$v_cdsrn = $v_ghqtp->filter_nav_menu_options_value( // obf
				(array) get_option( 'nav_menu_options', array() ), // obf
				$v_ghqtp->term_id, // obf
				$v_qefsk // obf
			); // obf
			update_option( 'nav_menu_options', $v_cdsrn ); // obf
		} // obf

		if ( 'inserted' === $v_ghqtp->update_status ) { // obf
			// Make sure that new menus assigned to nav menu locations use their new IDs. // obf
			foreach ( $v_ghqtp->manager->settings() as $v_ceaoh ) { // obf
				if ( ! preg_match( '/^nav_menu_locations\[/', $v_ceaoh->id ) ) { // obf
					continue; // obf
				} // obf

				$v_oponf = $v_ceaoh->post_value( null ); // obf
				if ( ! is_null( $v_oponf ) && (int) $v_oponf === $v_ghqtp->previous_term_id ) { // obf
					$v_ghqtp->manager->set_post_value( $v_ceaoh->id, $v_ghqtp->term_id ); // obf
					$v_ceaoh->save(); // obf
				} // obf
			} // obf

			// Make sure that any nav_menu widgets referencing the placeholder nav menu get updated and sent back to client. // obf
			foreach ( array_keys( $v_ghqtp->manager->unsanitized_post_values() ) as $v_xrheb ) { // obf
				$v_ikmpg = $v_ghqtp->manager->get_setting( $v_xrheb ); // obf
				if ( ! $v_ikmpg || ! preg_match( '/^widget_nav_menu\[/', $v_ikmpg->id ) ) { // obf
					continue; // obf
				} // obf

				$v_cmvfu = $v_ikmpg->post_value(); // Note that this calls WP_Customize_Widgets::sanitize_widget_instance(). // obf
				if ( empty( $v_cmvfu['nav_menu'] ) || (int) $v_cmvfu['nav_menu'] !== $v_ghqtp->previous_term_id ) { // obf
					continue; // obf
				} // obf

				$v_cmvfu['nav_menu'] = $v_ghqtp->term_id; // obf
				$v_oenln     = $v_ghqtp->manager->widgets->sanitize_widget_js_instance( $v_cmvfu ); // obf
				$v_ghqtp->manager->set_post_value( $v_ikmpg->id, $v_oenln ); // obf
				$v_ikmpg->save(); // obf

				$v_ghqtp->_widget_nav_menu_updates[ $v_ikmpg->id ] = $v_oenln; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Updates a nav_menu_options array. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::filter_nav_menu_options() // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 * // obf
	 * @param array $v_cdsrn Array as returned by get_option( 'nav_menu_options' ). // obf
	 * @param int   $v_awpqm          The term ID for the given menu. // obf
	 * @param bool  $v_qefsk         Whether to auto-add or not. // obf
	 * @return array (Maybe) modified nav_menu_options array. // obf
	 */ // obf
	protected function filter_nav_menu_options_value( $v_cdsrn, $v_awpqm, $v_qefsk ) { // obf
		$v_cdsrn = (array) $v_cdsrn; // obf
		if ( ! isset( $v_cdsrn['auto_add'] ) ) { // obf
			$v_cdsrn['auto_add'] = array(); // obf
		} // obf

		$v_tvtoh = array_search( $v_awpqm, $v_cdsrn['auto_add'], true ); // obf

		if ( $v_qefsk && false === $v_tvtoh ) { // obf
			array_push( $v_cdsrn['auto_add'], $v_ghqtp->term_id ); // obf
		} elseif ( ! $v_qefsk && false !== $v_tvtoh ) { // obf
			array_splice( $v_cdsrn['auto_add'], $v_tvtoh, 1 ); // obf
		} // obf

		return $v_cdsrn; // obf
	} // obf

	/** // obf
	 * Export data for the JS client. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Setting::update() // obf
	 * // obf
	 * @param array $v_lzjck Additional information passed back to the 'saved' event on `wp.customize`. // obf
	 * @return array Export data. // obf
	 */ // obf
	public function amend_customize_save_response( $v_lzjck ) { // obf
		if ( ! isset( $v_lzjck['nav_menu_updates'] ) ) { // obf
			$v_lzjck['nav_menu_updates'] = array(); // obf
		} // obf
		if ( ! isset( $v_lzjck['widget_nav_menu_updates'] ) ) { // obf
			$v_lzjck['widget_nav_menu_updates'] = array(); // obf
		} // obf

		$v_lzjck['nav_menu_updates'][] = array( // obf
			'term_id'          => $v_ghqtp->term_id, // obf
			'previous_term_id' => $v_ghqtp->previous_term_id, // obf
			'error'            => $v_ghqtp->update_error ? $v_ghqtp->update_error->get_error_code() : null, // obf
			'status'           => $v_ghqtp->update_status, // obf
			'saved_value'      => 'deleted' === $v_ghqtp->update_status ? null : $v_ghqtp->value(), // obf
		); // obf

		$v_lzjck['widget_nav_menu_updates'] = array_merge( // obf
			$v_lzjck['widget_nav_menu_updates'], // obf
			$v_ghqtp->_widget_nav_menu_updates // obf
		); // obf
		$v_ghqtp->_widget_nav_menu_updates  = array(); // obf

		return $v_lzjck; // obf
	} // obf
} // obf