

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Item_Setting class // obf
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
 * @see WP_Customize_Setting // obf
 */ // obf
class WP_Customize_Nav_Menu_Item_Setting extends WP_Customize_Setting { // obf

	const ID_PATTERN = '/^nav_menu_item\[(?P<id>-?\d+)\]$/'; // obf

	const POST_TYPE = 'nav_menu_item'; // obf

	const TYPE = 'nav_menu_item'; // obf

	/** // obf
	 * Setting type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_opvbn = self::TYPE; // obf

	/** // obf
	 * Default setting value. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var array // obf
	 * // obf
	 * @see wp_setup_nav_menu_item() // obf
	 */ // obf
	public $v_drrvk = array( // obf
		// The $v_eiker for wp_update_nav_menu_item(). // obf
		'object_id'        => 0, // obf
		'object'           => '', // Taxonomy name. // obf
		'menu_item_parent' => 0, // A.K.A. menu-item-parent-id; note that post_parent is different, and not included. // obf
		'position'         => 0, // A.K.A. menu_order. // obf
		'type'             => 'custom', // Note that type_label is not included here. // obf
		'title'            => '', // obf
		'url'              => '', // obf
		'target'           => '', // obf
		'attr_title'       => '', // obf
		'description'      => '', // obf
		'classes'          => '', // obf
		'xfn'              => '', // obf
		'status'           => 'publish', // obf
		'original_title'   => '', // obf
		'nav_menu_term_id' => 0, // This will be supplied as the $v_qayqh arg for wp_update_nav_menu_item(). // obf
		'_invalid'         => false, // obf
	); // obf

	/** // obf
	 * Default transport. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 4.5.0 Default changed to 'refresh' // obf
	 * @var string // obf
	 */ // obf
	public $v_ingsh = 'refresh'; // obf

	/** // obf
	 * The post ID represented by this setting instance. This is the db_id. // obf
	 * // obf
	 * A negative value represents a placeholder ID for a new menu not yet saved. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_ujrmm; // obf

	/** // obf
	 * Storage of pre-setup menu item to prevent wasted calls to wp_setup_nav_menu_item(). // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var array|null // obf
	 */ // obf
	protected $v_movke; // obf

	/** // obf
	 * Previous (placeholder) post ID used before creating a new menu item. // obf
	 * // obf
	 * This value will be exported to JS via the customize_save_response filter // obf
	 * so that JavaScript can update the settings to refer to the newly-assigned // obf
	 * post ID. This value is always negative to indicate it does not refer to // obf
	 * a real post. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::update() // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::amend_customize_save_response() // obf
	 */ // obf
	public $v_younp; // obf

	/** // obf
	 * When previewing or updating a menu item, this stores the previous nav_menu_term_id // obf
	 * which ensures that we can apply the proper filters. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_btxhx; // obf

	/** // obf
	 * Whether or not update() was called. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_yuekb = false; // obf

	/** // obf
	 * Status for calling the update method, used in customize_save_response filter. // obf
	 * // obf
	 * See {@see 'customize_save_response'}. // obf
	 * // obf
	 * When status is inserted, the placeholder post ID is stored in $v_younp. // obf
	 * When status is error, the error is stored in $v_hddzh. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string updated|inserted|deleted|error // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::update() // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::amend_customize_save_response() // obf
	 */ // obf
	public $v_gfikc; // obf

	/** // obf
	 * Any error object returned by wp_update_nav_menu_item() when setting is updated. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var WP_Error // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::update() // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::amend_customize_save_response() // obf
	 */ // obf
	public $v_hddzh; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Any supplied $v_vsfax override class property defaults. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @throws Exception If $v_pblah is not valid for this setting type. // obf
	 * // obf
	 * @param WP_Customize_Manager $v_zuqnz Customizer bootstrap instance. // obf
	 * @param string               $v_pblah      A specific ID of the setting. // obf
	 *                                      Can be a theme mod or option name. // obf
	 * @param array                $v_vsfax    Optional. Setting arguments. // obf
	 */ // obf
	public function __construct( WP_Customize_Manager $v_zuqnz, $v_pblah, array $v_vsfax = array() ) { // obf
		if ( empty( $v_zuqnz->nav_menus ) ) { // obf
			throw new Exception( 'Expected WP_Customize_Manager::$v_oplwy to be set.' ); // obf
		} // obf

		if ( ! preg_match( self::ID_PATTERN, $v_pblah, $v_qsvns ) ) { // obf
			throw new Exception( "Illegal widget setting ID: $v_pblah" ); // obf
		} // obf

		$v_zyqug->post_id = (int) $v_qsvns['id']; // obf
		add_action( 'wp_update_nav_menu_item', array( $v_zyqug, 'flush_cached_value' ), 10, 2 ); // obf

		parent::__construct( $v_zuqnz, $v_pblah, $v_vsfax ); // obf

		// Ensure that an initially-supplied value is valid. // obf
		if ( isset( $v_zyqug->value ) ) { // obf
			$v_zyqug->populate_value(); // obf
			foreach ( array_diff( array_keys( $v_zyqug->default ), array_keys( $v_zyqug->value ) ) as $v_hmrub ) { // obf
				throw new Exception( "Supplied nav_menu_item value missing property: $v_hmrub" ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Clear the cached value when this nav menu item is updated. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param int $v_qayqh       The term ID for the menu. // obf
	 * @param int $v_rdega  The post ID for the menu item. // obf
	 */ // obf
	public function flush_cached_value( $v_qayqh, $v_rdega ) { // obf
		unset( $v_qayqh ); // obf
		if ( $v_rdega === $v_zyqug->post_id ) { // obf
			$v_zyqug->value = null; // obf
		} // obf
	} // obf

	/** // obf
	 * Get the instance data for a given nav_menu_item setting. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_setup_nav_menu_item() // obf
	 * // obf
	 * @return array|false Instance data array, or false if the item is marked for deletion. // obf
	 */ // obf
	public function value() { // obf
		if ( $v_zyqug->is_previewed && get_current_blog_id() === $v_zyqug->_previewed_blog_id ) { // obf
			$v_nmfyj  = new stdClass(); // Symbol. // obf
			$v_jdiea = $v_zyqug->post_value( $v_nmfyj ); // obf

			if ( $v_nmfyj === $v_jdiea ) { // obf
				$v_movke = $v_zyqug->_original_value; // obf
			} else { // obf
				$v_movke = $v_jdiea; // obf
			} // obf
			if ( ! empty( $v_movke ) && empty( $v_movke['original_title'] ) ) { // obf
				$v_movke['original_title'] = $v_zyqug->get_original_title( (object) $v_movke ); // obf
			} // obf
		} elseif ( isset( $v_zyqug->value ) ) { // obf
			$v_movke = $v_zyqug->value; // obf
		} else { // obf
			$v_movke = false; // obf

			// Note that an ID of less than one indicates a nav_menu not yet inserted. // obf
			if ( $v_zyqug->post_id > 0 ) { // obf
				$v_fsgfq = get_post( $v_zyqug->post_id ); // obf
				if ( $v_fsgfq && self::POST_TYPE === $v_fsgfq->post_type ) { // obf
					$v_otpwi = empty( $v_fsgfq->post_title ); // obf
					$v_movke          = (array) wp_setup_nav_menu_item( $v_fsgfq ); // obf
					if ( $v_otpwi ) { // obf
						$v_movke['title'] = ''; // obf
					} // obf
				} // obf
			} // obf

			if ( ! is_array( $v_movke ) ) { // obf
				$v_movke = $v_zyqug->default; // obf
			} // obf

			// Cache the value for future calls to avoid having to re-call wp_setup_nav_menu_item(). // obf
			$v_zyqug->value = $v_movke; // obf
			$v_zyqug->populate_value(); // obf
			$v_movke = $v_zyqug->value; // obf
		} // obf

		if ( ! empty( $v_movke ) && empty( $v_movke['type_label'] ) ) { // obf
			$v_movke['type_label'] = $v_zyqug->get_type_label( (object) $v_movke ); // obf
		} // obf

		return $v_movke; // obf
	} // obf

	/** // obf
	 * Get original title. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param object $v_erhup Nav menu item. // obf
	 * @return string The original title. // obf
	 */ // obf
	protected function get_original_title( $v_erhup ) { // obf
		$v_vnbgh = ''; // obf
		if ( 'post_type' === $v_erhup->type && ! empty( $v_erhup->object_id ) ) { // obf
			$v_eermb = get_post( $v_erhup->object_id ); // obf
			if ( $v_eermb ) { // obf
				/** This filter is documented in wp-includes/post-template.php */ // obf
				$v_vnbgh = apply_filters( 'the_title', $v_eermb->post_title, $v_eermb->ID ); // obf

				if ( '' === $v_vnbgh ) { // obf
					/* translators: %d: ID of a post. */ // obf
					$v_vnbgh = sprintf( __( '#%d (no title)' ), $v_eermb->ID ); // obf
				} // obf
			} // obf
		} elseif ( 'taxonomy' === $v_erhup->type && ! empty( $v_erhup->object_id ) ) { // obf
			$v_uaiid = get_term_field( 'name', $v_erhup->object_id, $v_erhup->object, 'raw' ); // obf
			if ( ! is_wp_error( $v_uaiid ) ) { // obf
				$v_vnbgh = $v_uaiid; // obf
			} // obf
		} elseif ( 'post_type_archive' === $v_erhup->type ) { // obf
			$v_eermb = get_post_type_object( $v_erhup->object ); // obf
			if ( $v_eermb ) { // obf
				$v_vnbgh = $v_eermb->labels->archives; // obf
			} // obf
		} // obf
		$v_vnbgh = html_entity_decode( $v_vnbgh, ENT_QUOTES, get_bloginfo( 'charset' ) ); // obf
		return $v_vnbgh; // obf
	} // obf

	/** // obf
	 * Get type label. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param object $v_erhup Nav menu item. // obf
	 * @return string The type label. // obf
	 */ // obf
	protected function get_type_label( $v_erhup ) { // obf
		if ( 'post_type' === $v_erhup->type ) { // obf
			$v_crbvm = get_post_type_object( $v_erhup->object ); // obf
			if ( $v_crbvm ) { // obf
				$v_xshrm = $v_crbvm->labels->singular_name; // obf
			} else { // obf
				$v_xshrm = $v_erhup->object; // obf
			} // obf
		} elseif ( 'taxonomy' === $v_erhup->type ) { // obf
			$v_crbvm = get_taxonomy( $v_erhup->object ); // obf
			if ( $v_crbvm ) { // obf
				$v_xshrm = $v_crbvm->labels->singular_name; // obf
			} else { // obf
				$v_xshrm = $v_erhup->object; // obf
			} // obf
		} elseif ( 'post_type_archive' === $v_erhup->type ) { // obf
			$v_xshrm = __( 'Post Type Archive' ); // obf
		} else { // obf
			$v_xshrm = __( 'Custom Link' ); // obf
		} // obf
		return $v_xshrm; // obf
	} // obf

	/** // obf
	 * Ensure that the value is fully populated with the necessary properties. // obf
	 * // obf
	 * Translates some properties added by wp_setup_nav_menu_item() and removes others. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::value() // obf
	 */ // obf
	protected function populate_value() { // obf
		if ( ! is_array( $v_zyqug->value ) ) { // obf
			return; // obf
		} // obf

		if ( isset( $v_zyqug->value['menu_order'] ) ) { // obf
			$v_zyqug->value['position'] = $v_zyqug->value['menu_order']; // obf
			unset( $v_zyqug->value['menu_order'] ); // obf
		} // obf
		if ( isset( $v_zyqug->value['post_status'] ) ) { // obf
			$v_zyqug->value['status'] = $v_zyqug->value['post_status']; // obf
			unset( $v_zyqug->value['post_status'] ); // obf
		} // obf

		if ( ! isset( $v_zyqug->value['original_title'] ) ) { // obf
			$v_zyqug->value['original_title'] = $v_zyqug->get_original_title( (object) $v_zyqug->value ); // obf
		} // obf

		if ( ! isset( $v_zyqug->value['nav_menu_term_id'] ) && $v_zyqug->post_id > 0 ) { // obf
			$v_dyayn = wp_get_post_terms( // obf
				$v_zyqug->post_id, // obf
				WP_Customize_Nav_Menu_Setting::TAXONOMY, // obf
				array( // obf
					'fields' => 'ids', // obf
				) // obf
			); // obf
			if ( ! empty( $v_dyayn ) ) { // obf
				$v_zyqug->value['nav_menu_term_id'] = array_shift( $v_dyayn ); // obf
			} else { // obf
				$v_zyqug->value['nav_menu_term_id'] = 0; // obf
			} // obf
		} // obf

		foreach ( array( 'object_id', 'menu_item_parent', 'nav_menu_term_id' ) as $v_mezyx ) { // obf
			if ( ! is_int( $v_zyqug->value[ $v_mezyx ] ) ) { // obf
				$v_zyqug->value[ $v_mezyx ] = (int) $v_zyqug->value[ $v_mezyx ]; // obf
			} // obf
		} // obf
		foreach ( array( 'classes', 'xfn' ) as $v_mezyx ) { // obf
			if ( is_array( $v_zyqug->value[ $v_mezyx ] ) ) { // obf
				$v_zyqug->value[ $v_mezyx ] = implode( ' ', $v_zyqug->value[ $v_mezyx ] ); // obf
			} // obf
		} // obf

		if ( ! isset( $v_zyqug->value['title'] ) ) { // obf
			$v_zyqug->value['title'] = ''; // obf
		} // obf

		if ( ! isset( $v_zyqug->value['_invalid'] ) ) { // obf
			$v_zyqug->value['_invalid'] = false; // obf
			$v_ohywk        = ( // obf
				( ( 'post_type' === $v_zyqug->value['type'] || 'post_type_archive' === $v_zyqug->value['type'] ) && ! post_type_exists( $v_zyqug->value['object'] ) ) // obf
				|| // obf
				( 'taxonomy' === $v_zyqug->value['type'] && ! taxonomy_exists( $v_zyqug->value['object'] ) ) // obf
			); // obf
			if ( $v_ohywk ) { // obf
				$v_zyqug->value['_invalid'] = true; // obf
			} // obf
		} // obf

		// Remove remaining properties available on a setup nav_menu_item post object which aren't relevant to the setting value. // obf
		$v_vrjfk = array( // obf
			'ID', // obf
			'comment_count', // obf
			'comment_status', // obf
			'db_id', // obf
			'filter', // obf
			'guid', // obf
			'ping_status', // obf
			'pinged', // obf
			'post_author', // obf
			'post_content', // obf
			'post_content_filtered', // obf
			'post_date', // obf
			'post_date_gmt', // obf
			'post_excerpt', // obf
			'post_mime_type', // obf
			'post_modified', // obf
			'post_modified_gmt', // obf
			'post_name', // obf
			'post_parent', // obf
			'post_password', // obf
			'post_title', // obf
			'post_type', // obf
			'to_ping', // obf
		); // obf
		foreach ( $v_vrjfk as $v_gjhzu ) { // obf
			unset( $v_zyqug->value[ $v_gjhzu ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handle previewing the setting. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 4.4.0 Added boolean return value. // obf
	 * // obf
	 * @see WP_Customize_Manager::post_value() // obf
	 * // obf
	 * @return bool False if method short-circuited due to no-op. // obf
	 */ // obf
	public function preview() { // obf
		if ( $v_zyqug->is_previewed ) { // obf
			return false; // obf
		} // obf

		$v_nmfyj      = new stdClass(); // obf
		$v_bdrdt = ( $v_zyqug->post_id < 0 ); // obf
		$v_bxlwd       = ( $v_nmfyj !== $v_zyqug->post_value( $v_nmfyj ) ); // obf
		if ( ! $v_bdrdt && ! $v_bxlwd ) { // obf
			return false; // obf
		} // obf

		$v_zyqug->is_previewed              = true; // obf
		$v_zyqug->_original_value           = $v_zyqug->value(); // obf
		$v_zyqug->original_nav_menu_term_id = $v_zyqug->_original_value['nav_menu_term_id']; // obf
		$v_zyqug->_previewed_blog_id        = get_current_blog_id(); // obf

		add_filter( 'wp_get_nav_menu_items', array( $v_zyqug, 'filter_wp_get_nav_menu_items' ), 10, 3 ); // obf

		$v_sizwo = array( __CLASS__, 'sort_wp_get_nav_menu_items' ); // obf
		if ( ! has_filter( 'wp_get_nav_menu_items', $v_sizwo ) ) { // obf
			add_filter( 'wp_get_nav_menu_items', array( __CLASS__, 'sort_wp_get_nav_menu_items' ), 1000, 3 ); // obf
		} // obf

		// @todo Add get_post_metadata filters for plugins to add their data. // obf

		return true; // obf
	} // obf

	/** // obf
	 * Filters the wp_get_nav_menu_items() result to supply the previewed menu items. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_get_nav_menu_items() // obf
	 * // obf
	 * @param WP_Post[] $v_smpmy An array of menu item post objects. // obf
	 * @param WP_Term   $v_wedzh  The menu object. // obf
	 * @param array     $v_vsfax  An array of arguments used to retrieve menu item objects. // obf
	 * @return WP_Post[] Array of menu item objects. // obf
	 */ // obf
	public function filter_wp_get_nav_menu_items( $v_smpmy, $v_wedzh, $v_vsfax ) { // obf
		$v_mcorx                = $v_zyqug->value(); // obf
		$v_zcpvw = null; // obf
		if ( isset( $v_mcorx['nav_menu_term_id'] ) ) { // obf
			$v_zcpvw = $v_mcorx['nav_menu_term_id']; // obf
			unset( $v_mcorx['nav_menu_term_id'] ); // obf
		} // obf

		$v_zvgmw = ( // obf
			$v_wedzh->term_id === $v_zyqug->original_nav_menu_term_id // obf
			|| // obf
			$v_wedzh->term_id === $v_zcpvw // obf
		); // obf
		if ( ! $v_zvgmw ) { // obf
			return $v_smpmy; // obf
		} // obf

		// Handle deleted menu item, or menu item moved to another menu. // obf
		$v_cgwyw = ( // obf
			false === $v_mcorx // obf
			|| // obf
			( isset( $v_mcorx['_invalid'] ) && true === $v_mcorx['_invalid'] ) // obf
			|| // obf
			( // obf
				$v_zyqug->original_nav_menu_term_id === $v_wedzh->term_id // obf
				&& // obf
				$v_zcpvw !== $v_zyqug->original_nav_menu_term_id // obf
			) // obf
		); // obf
		if ( $v_cgwyw ) { // obf
			$v_bipgt = array(); // obf
			foreach ( $v_smpmy as $v_erhup ) { // obf
				if ( $v_erhup->db_id !== $v_zyqug->post_id ) { // obf
					$v_bipgt[] = $v_erhup; // obf
				} // obf
			} // obf
			return $v_bipgt; // obf
		} // obf

		$v_wrmhc       = false; // obf
		$v_qrylw = ( // obf
			is_array( $v_mcorx ) // obf
			&& // obf
			$v_zcpvw === $v_wedzh->term_id // obf
		); // obf
		if ( $v_qrylw ) { // obf
			foreach ( $v_smpmy as $v_erhup ) { // obf
				if ( $v_erhup->db_id === $v_zyqug->post_id ) { // obf
					foreach ( get_object_vars( $v_zyqug->value_as_wp_post_nav_menu_item() ) as $v_mezyx => $v_movke ) { // obf
						$v_erhup->$v_mezyx = $v_movke; // obf
					} // obf
					$v_wrmhc = true; // obf
				} // obf
			} // obf

			// Not found so we have to append it.. // obf
			if ( ! $v_wrmhc ) { // obf
				$v_smpmy[] = $v_zyqug->value_as_wp_post_nav_menu_item(); // obf
			} // obf
		} // obf

		return $v_smpmy; // obf
	} // obf

	/** // obf
	 * Re-apply the tail logic also applied on $v_smpmy by wp_get_nav_menu_items(). // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_get_nav_menu_items() // obf
	 * // obf
	 * @param WP_Post[] $v_smpmy An array of menu item post objects. // obf
	 * @param WP_Term   $v_wedzh  The menu object. // obf
	 * @param array     $v_vsfax  An array of arguments used to retrieve menu item objects. // obf
	 * @return WP_Post[] Array of menu item objects. // obf
	 */ // obf
	public static function sort_wp_get_nav_menu_items( $v_smpmy, $v_wedzh, $v_vsfax ) { // obf
		// @todo We should probably re-apply some constraints imposed by $v_vsfax. // obf
		unset( $v_vsfax['include'] ); // obf

		// Remove invalid items only in front end. // obf
		if ( ! is_admin() ) { // obf
			$v_smpmy = array_filter( $v_smpmy, '_is_valid_nav_menu_item' ); // obf
		} // obf

		if ( ARRAY_A === $v_vsfax['output'] ) { // obf
			$v_smpmy = wp_list_sort( // obf
				$v_smpmy, // obf
				array( // obf
					$v_vsfax['output_key'] => 'ASC', // obf
				) // obf
			); // obf
			$v_cuauw     = 1; // obf

			foreach ( $v_smpmy as $v_mgewh => $v_erhup ) { // obf
				$v_smpmy[ $v_mgewh ]->{$v_vsfax['output_key']} = $v_cuauw++; // obf
			} // obf
		} // obf

		return $v_smpmy; // obf
	} // obf

	/** // obf
	 * Get the value emulated into a WP_Post and set up as a nav_menu_item. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return WP_Post With wp_setup_nav_menu_item() applied. // obf
	 */ // obf
	public function value_as_wp_post_nav_menu_item() { // obf
		$v_erhup = (object) $v_zyqug->value(); // obf
		unset( $v_erhup->nav_menu_term_id ); // obf

		$v_erhup->post_status = $v_erhup->status; // obf
		unset( $v_erhup->status ); // obf

		$v_erhup->post_type  = 'nav_menu_item'; // obf
		$v_erhup->menu_order = $v_erhup->position; // obf
		unset( $v_erhup->position ); // obf

		if ( empty( $v_erhup->original_title ) ) { // obf
			$v_erhup->original_title = $v_zyqug->get_original_title( $v_erhup ); // obf
		} // obf
		if ( empty( $v_erhup->title ) && ! empty( $v_erhup->original_title ) ) { // obf
			$v_erhup->title = $v_erhup->original_title; // obf
		} // obf
		if ( $v_erhup->title ) { // obf
			$v_erhup->post_title = $v_erhup->title; // obf
		} // obf

		// 'classes' should be an array, as in wp_setup_nav_menu_item(). // obf
		if ( isset( $v_erhup->classes ) && is_scalar( $v_erhup->classes ) ) { // obf
			$v_erhup->classes = explode( ' ', $v_erhup->classes ); // obf
		} // obf

		$v_erhup->ID    = $v_zyqug->post_id; // obf
		$v_erhup->db_id = $v_zyqug->post_id; // obf
		$v_fsgfq        = new WP_Post( (object) $v_erhup ); // obf

		if ( empty( $v_fsgfq->post_author ) ) { // obf
			$v_fsgfq->post_author = get_current_user_id(); // obf
		} // obf

		if ( ! isset( $v_fsgfq->type_label ) ) { // obf
			$v_fsgfq->type_label = $v_zyqug->get_type_label( $v_fsgfq ); // obf
		} // obf

		// Ensure nav menu item URL is set according to linked object. // obf
		if ( 'post_type' === $v_fsgfq->type && ! empty( $v_fsgfq->object_id ) ) { // obf
			$v_fsgfq->url = get_permalink( $v_fsgfq->object_id ); // obf
		} elseif ( 'taxonomy' === $v_fsgfq->type && ! empty( $v_fsgfq->object ) && ! empty( $v_fsgfq->object_id ) ) { // obf
			$v_fsgfq->url = get_term_link( (int) $v_fsgfq->object_id, $v_fsgfq->object ); // obf
		} elseif ( 'post_type_archive' === $v_fsgfq->type && ! empty( $v_fsgfq->object ) ) { // obf
			$v_fsgfq->url = get_post_type_archive_link( $v_fsgfq->object ); // obf
		} // obf
		if ( is_wp_error( $v_fsgfq->url ) ) { // obf
			$v_fsgfq->url = ''; // obf
		} // obf

		/** This filter is documented in wp-includes/nav-menu.php */ // obf
		$v_fsgfq->attr_title = apply_filters( 'nav_menu_attr_title', $v_fsgfq->attr_title ); // obf

		/** This filter is documented in wp-includes/nav-menu.php */ // obf
		$v_fsgfq->description = apply_filters( 'nav_menu_description', wp_trim_words( $v_fsgfq->description, 200 ) ); // obf

		/** This filter is documented in wp-includes/nav-menu.php */ // obf
		$v_fsgfq = apply_filters( 'wp_setup_nav_menu_item', $v_fsgfq ); // obf

		return $v_fsgfq; // obf
	} // obf

	/** // obf
	 * Sanitize an input. // obf
	 * // obf
	 * Note that parent::sanitize() erroneously does wp_unslash() on $v_movke, but // obf
	 * we remove that in this override. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_kvsov` to `$v_movke` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param array $v_movke The menu item value to sanitize. // obf
	 * @return array|false|null|WP_Error Null or WP_Error if an input isn't valid. False if it is marked for deletion. // obf
	 *                                   Otherwise the sanitized value. // obf
	 */ // obf
	public function sanitize( $v_movke ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_kvsov = $v_movke; // obf

		// Menu is marked for deletion. // obf
		if ( false === $v_kvsov ) { // obf
			return $v_kvsov; // obf
		} // obf

		// Invalid. // obf
		if ( ! is_array( $v_kvsov ) ) { // obf
			return null; // obf
		} // obf

		$v_drrvk                     = array( // obf
			'object_id'        => 0, // obf
			'object'           => '', // obf
			'menu_item_parent' => 0, // obf
			'position'         => 0, // obf
			'type'             => 'custom', // obf
			'title'            => '', // obf
			'url'              => '', // obf
			'target'           => '', // obf
			'attr_title'       => '', // obf
			'description'      => '', // obf
			'classes'          => '', // obf
			'xfn'              => '', // obf
			'status'           => 'publish', // obf
			'original_title'   => '', // obf
			'nav_menu_term_id' => 0, // obf
			'_invalid'         => false, // obf
		); // obf
		$v_kvsov             = array_merge( $v_drrvk, $v_kvsov ); // obf
		$v_kvsov             = wp_array_slice_assoc( $v_kvsov, array_keys( $v_drrvk ) ); // obf
		$v_kvsov['position'] = (int) $v_kvsov['position']; // obf

		foreach ( array( 'object_id', 'menu_item_parent', 'nav_menu_term_id' ) as $v_mezyx ) { // obf
			// Note we need to allow negative-integer IDs for previewed objects not inserted yet. // obf
			$v_kvsov[ $v_mezyx ] = (int) $v_kvsov[ $v_mezyx ]; // obf
		} // obf

		foreach ( array( 'type', 'object', 'target' ) as $v_mezyx ) { // obf
			$v_kvsov[ $v_mezyx ] = sanitize_key( $v_kvsov[ $v_mezyx ] ); // obf
		} // obf

		foreach ( array( 'xfn', 'classes' ) as $v_mezyx ) { // obf
			$v_movke = $v_kvsov[ $v_mezyx ]; // obf
			if ( ! is_array( $v_movke ) ) { // obf
				$v_movke = explode( ' ', $v_movke ); // obf
			} // obf
			$v_kvsov[ $v_mezyx ] = implode( ' ', array_map( 'sanitize_html_class', $v_movke ) ); // obf
		} // obf

		$v_kvsov['original_title'] = sanitize_text_field( $v_kvsov['original_title'] ); // obf

		// Apply the same filters as when calling wp_insert_post(). // obf

		/** This filter is documented in wp-includes/post.php */ // obf
		$v_kvsov['title'] = wp_unslash( apply_filters( 'title_save_pre', wp_slash( $v_kvsov['title'] ) ) ); // obf

		/** This filter is documented in wp-includes/post.php */ // obf
		$v_kvsov['attr_title'] = wp_unslash( apply_filters( 'excerpt_save_pre', wp_slash( $v_kvsov['attr_title'] ) ) ); // obf

		/** This filter is documented in wp-includes/post.php */ // obf
		$v_kvsov['description'] = wp_unslash( apply_filters( 'content_save_pre', wp_slash( $v_kvsov['description'] ) ) ); // obf

		if ( '' !== $v_kvsov['url'] ) { // obf
			$v_kvsov['url'] = sanitize_url( $v_kvsov['url'] ); // obf
			if ( '' === $v_kvsov['url'] ) { // obf
				return new WP_Error( 'invalid_url', __( 'Invalid URL.' ) ); // Fail sanitization if URL is invalid. // obf
			} // obf
		} // obf
		if ( 'publish' !== $v_kvsov['status'] ) { // obf
			$v_kvsov['status'] = 'draft'; // obf
		} // obf

		$v_kvsov['_invalid'] = (bool) $v_kvsov['_invalid']; // obf

		/** This filter is documented in wp-includes/class-wp-customize-setting.php */ // obf
		return apply_filters( "customize_sanitize_{$v_zyqug->id}", $v_kvsov, $v_zyqug ); // obf
	} // obf

	/** // obf
	 * Creates/updates the nav_menu_item post for this setting. // obf
	 * // obf
	 * Any created menu items will have their assigned post IDs exported to the client // obf
	 * via the {@see 'customize_save_response'} filter. Likewise, any errors will be // obf
	 * exported to the client via the customize_save_response() filter. // obf
	 * // obf
	 * To delete a menu, the client can send false as the value. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see wp_update_nav_menu_item() // obf
	 * // obf
	 * @param array|false $v_movke The menu item array to update. If false, then the menu item will be deleted // obf
	 *                           entirely. See WP_Customize_Nav_Menu_Item_Setting::$v_drrvk for what the value // obf
	 *                           should consist of. // obf
	 * @return null|void // obf
	 */ // obf
	protected function update( $v_movke ) { // obf
		if ( $v_zyqug->is_updated ) { // obf
			return; // obf
		} // obf

		$v_zyqug->is_updated = true; // obf
		$v_bdrdt   = ( $v_zyqug->post_id < 0 ); // obf
		$v_qknhm        = ( false === $v_movke ); // obf

		// Update the cached value. // obf
		$v_zyqug->value = $v_movke; // obf

		add_filter( 'customize_save_response', array( $v_zyqug, 'amend_customize_save_response' ) ); // obf

		if ( $v_qknhm ) { // obf
			// If the current setting post is a placeholder, a delete request is a no-op. // obf
			if ( $v_bdrdt ) { // obf
				$v_zyqug->update_status = 'deleted'; // obf
			} else { // obf
				$v_fghtl = wp_delete_post( $v_zyqug->post_id, true ); // obf

				if ( false === $v_fghtl ) { // obf
					$v_zyqug->update_error  = new WP_Error( 'delete_failure' ); // obf
					$v_zyqug->update_status = 'error'; // obf
				} else { // obf
					$v_zyqug->update_status = 'deleted'; // obf
				} // obf
				// @todo send back the IDs for all associated nav menu items deleted, so these settings (and controls) can be removed from Customizer? // obf
			} // obf
		} else { // obf

			// Handle saving menu items for menus that are being newly-created. // obf
			if ( $v_movke['nav_menu_term_id'] < 0 ) { // obf
				$v_hvrht = sprintf( 'nav_menu[%s]', $v_movke['nav_menu_term_id'] ); // obf
				$v_exazu    = $v_zyqug->manager->get_setting( $v_hvrht ); // obf

				if ( ! $v_exazu || ! ( $v_exazu instanceof WP_Customize_Nav_Menu_Setting ) ) { // obf
					$v_zyqug->update_status = 'error'; // obf
					$v_zyqug->update_error  = new WP_Error( 'unexpected_nav_menu_setting' ); // obf
					return; // obf
				} // obf

				if ( false === $v_exazu->save() ) { // obf
					$v_zyqug->update_status = 'error'; // obf
					$v_zyqug->update_error  = new WP_Error( 'nav_menu_setting_failure' ); // obf
					return; // obf
				} // obf

				if ( (int) $v_movke['nav_menu_term_id'] !== $v_exazu->previous_term_id ) { // obf
					$v_zyqug->update_status = 'error'; // obf
					$v_zyqug->update_error  = new WP_Error( 'unexpected_previous_term_id' ); // obf
					return; // obf
				} // obf

				$v_movke['nav_menu_term_id'] = $v_exazu->term_id; // obf
			} // obf

			// Handle saving a nav menu item that is a child of a nav menu item being newly-created. // obf
			if ( $v_movke['menu_item_parent'] < 0 ) { // obf
				$v_ctdlc = sprintf( 'nav_menu_item[%s]', $v_movke['menu_item_parent'] ); // obf
				$v_rutmg    = $v_zyqug->manager->get_setting( $v_ctdlc ); // obf

				if ( ! $v_rutmg || ! ( $v_rutmg instanceof WP_Customize_Nav_Menu_Item_Setting ) ) { // obf
					$v_zyqug->update_status = 'error'; // obf
					$v_zyqug->update_error  = new WP_Error( 'unexpected_nav_menu_item_setting' ); // obf
					return; // obf
				} // obf

				if ( false === $v_rutmg->save() ) { // obf
					$v_zyqug->update_status = 'error'; // obf
					$v_zyqug->update_error  = new WP_Error( 'nav_menu_item_setting_failure' ); // obf
					return; // obf
				} // obf

				if ( (int) $v_movke['menu_item_parent'] !== $v_rutmg->previous_post_id ) { // obf
					$v_zyqug->update_status = 'error'; // obf
					$v_zyqug->update_error  = new WP_Error( 'unexpected_previous_post_id' ); // obf
					return; // obf
				} // obf

				$v_movke['menu_item_parent'] = $v_rutmg->post_id; // obf
			} // obf

			// Insert or update menu. // obf
			$v_eiker = array( // obf
				'menu-item-object-id'   => $v_movke['object_id'], // obf
				'menu-item-object'      => $v_movke['object'], // obf
				'menu-item-parent-id'   => $v_movke['menu_item_parent'], // obf
				'menu-item-position'    => $v_movke['position'], // obf
				'menu-item-type'        => $v_movke['type'], // obf
				'menu-item-title'       => $v_movke['title'], // obf
				'menu-item-url'         => $v_movke['url'], // obf
				'menu-item-description' => $v_movke['description'], // obf
				'menu-item-attr-title'  => $v_movke['attr_title'], // obf
				'menu-item-target'      => $v_movke['target'], // obf
				'menu-item-classes'     => $v_movke['classes'], // obf
				'menu-item-xfn'         => $v_movke['xfn'], // obf
				'menu-item-status'      => $v_movke['status'], // obf
			); // obf

			$v_fghtl = wp_update_nav_menu_item( // obf
				$v_movke['nav_menu_term_id'], // obf
				$v_bdrdt ? 0 : $v_zyqug->post_id, // obf
				wp_slash( $v_eiker ) // obf
			); // obf

			if ( is_wp_error( $v_fghtl ) ) { // obf
				$v_zyqug->update_status = 'error'; // obf
				$v_zyqug->update_error  = $v_fghtl; // obf
			} else { // obf
				if ( $v_bdrdt ) { // obf
					$v_zyqug->previous_post_id = $v_zyqug->post_id; // obf
					$v_zyqug->post_id          = $v_fghtl; // obf
					$v_zyqug->update_status    = 'inserted'; // obf
				} else { // obf
					$v_zyqug->update_status = 'updated'; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Export data for the JS client. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Nav_Menu_Item_Setting::update() // obf
	 * // obf
	 * @param array $v_idjfh Additional information passed back to the 'saved' event on `wp.customize`. // obf
	 * @return array Save response data. // obf
	 */ // obf
	public function amend_customize_save_response( $v_idjfh ) { // obf
		if ( ! isset( $v_idjfh['nav_menu_item_updates'] ) ) { // obf
			$v_idjfh['nav_menu_item_updates'] = array(); // obf
		} // obf

		$v_idjfh['nav_menu_item_updates'][] = array( // obf
			'post_id'          => $v_zyqug->post_id, // obf
			'previous_post_id' => $v_zyqug->previous_post_id, // obf
			'error'            => $v_zyqug->update_error ? $v_zyqug->update_error->get_error_code() : null, // obf
			'status'           => $v_zyqug->update_status, // obf
		); // obf
		return $v_idjfh; // obf
	} // obf
} // obf