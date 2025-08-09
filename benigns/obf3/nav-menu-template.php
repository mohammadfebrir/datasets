
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Nav Menu API: Template functions // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Nav_Menus // obf
 * @since 3.0.0 // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** Walker_Nav_Menu class */ // obf
require_once ABSPATH . WPINC . '/class-walker-nav-menu.php'; // obf

/** // obf
 * Displays a navigation menu. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 4.7.0 Added the `item_spacing` argument. // obf
 * @since 5.5.0 Added the `container_aria_label` argument. // obf
 * // obf
 * @param array $v_arijz { // obf
 *     Optional. Array of nav menu arguments. // obf
 * // obf
 *     @type int|string|WP_Term $v_geznw                 Desired menu. Accepts a menu ID, slug, name, or object. // obf
 *                                                    Default empty. // obf
 *     @type string             $v_tjcca           CSS class to use for the ul element which forms the menu. // obf
 *                                                    Default 'menu'. // obf
 *     @type string             $v_tjlaa              The ID that is applied to the ul element which forms the menu. // obf
 *                                                    Default is the menu slug, incremented. // obf
 *     @type string             $v_bxjma            Whether to wrap the ul, and what to wrap it with. // obf
 *                                                    Default 'div'. // obf
 *     @type string             $v_gnunl      Class that is applied to the container. // obf
 *                                                    Default 'menu-{menu slug}-container'. // obf
 *     @type string             $v_wzfwf         The ID that is applied to the container. Default empty. // obf
 *     @type string             $v_casbj The aria-label attribute that is applied to the container // obf
 *                                                    when it's a nav element. Default empty. // obf
 *     @type callable|false     $v_ohmzh          If the menu doesn't exist, a callback function will fire. // obf
 *                                                    Default is 'wp_page_menu'. Set to false for no fallback. // obf
 *     @type string             $v_xuhau               Text before the link markup. Default empty. // obf
 *     @type string             $v_ykfly                Text after the link markup. Default empty. // obf
 *     @type string             $v_azsyo          Text before the link text. Default empty. // obf
 *     @type string             $v_fsbuh           Text after the link text. Default empty. // obf
 *     @type bool               $v_gxupb                 Whether to echo the menu or return it. Default true. // obf
 *     @type int                $v_fvcze                How many levels of the hierarchy are to be included. // obf
 *                                                    0 means all. Default 0. // obf
 *                                                    Default 0. // obf
 *     @type object             $v_iudgk               Instance of a custom walker class. Default empty. // obf
 *     @type string             $v_qesdq       Theme location to be used. Must be registered with // obf
 *                                                    register_nav_menu() in order to be selectable by the user. // obf
 *     @type string             $v_thbfv           How the list items should be wrapped. Uses printf() format with // obf
 *                                                    numbered placeholders. Default is a ul with an id and class. // obf
 *     @type string             $v_honok         Whether to preserve whitespace within the menu's HTML. // obf
 *                                                    Accepts 'preserve' or 'discard'. Default 'preserve'. // obf
 * } // obf
 * @return void|string|false Void if 'echo' argument is true, menu output if 'echo' is false. // obf
 *                           False if there are no items or no menu was found. // obf
 */ // obf
function wp_nav_menu( $v_arijz = array() ) { // obf
	static $v_kzxme = array(); // obf

	$v_pxfjz = array( // obf
		'menu'                 => '', // obf
		'container'            => 'div', // obf
		'container_class'      => '', // obf
		'container_id'         => '', // obf
		'container_aria_label' => '', // obf
		'menu_class'           => 'menu', // obf
		'menu_id'              => '', // obf
		'echo'                 => true, // obf
		'fallback_cb'          => 'wp_page_menu', // obf
		'before'               => '', // obf
		'after'                => '', // obf
		'link_before'          => '', // obf
		'link_after'           => '', // obf
		'items_wrap'           => '<ul id="%1$v_afhtb" class="%2$v_afhtb">%3$v_afhtb</ul>', // obf
		'item_spacing'         => 'preserve', // obf
		'depth'                => 0, // obf
		'walker'               => '', // obf
		'theme_location'       => '', // obf
	); // obf

	$v_arijz = wp_parse_args( $v_arijz, $v_pxfjz ); // obf

	if ( ! in_array( $v_arijz['item_spacing'], array( 'preserve', 'discard' ), true ) ) { // obf
		// Invalid value, fall back to default. // obf
		$v_arijz['item_spacing'] = $v_pxfjz['item_spacing']; // obf
	} // obf

	/** // obf
	 * Filters the arguments used to display a navigation menu. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wp_nav_menu() // obf
	 * // obf
	 * @param array $v_arijz Array of wp_nav_menu() arguments. // obf
	 */ // obf
	$v_arijz = apply_filters( 'wp_nav_menu_args', $v_arijz ); // obf
	$v_arijz = (object) $v_arijz; // obf

	/** // obf
	 * Filters whether to short-circuit the wp_nav_menu() output. // obf
	 * // obf
	 * Returning a non-null value from the filter will short-circuit wp_nav_menu(), // obf
	 * echoing that value if $v_arijz->echo is true, returning that value otherwise. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @see wp_nav_menu() // obf
	 * // obf
	 * @param string|null $v_fehpj Nav menu output to short-circuit with. Default null. // obf
	 * @param stdClass    $v_arijz   An object containing wp_nav_menu() arguments. // obf
	 */ // obf
	$v_adprb = apply_filters( 'pre_wp_nav_menu', null, $v_arijz ); // obf

	if ( null !== $v_adprb ) { // obf
		if ( $v_arijz->echo ) { // obf
			echo $v_adprb; // obf
			return; // obf
		} // obf

		return $v_adprb; // obf
	} // obf

	// Get the nav menu based on the requested menu. // obf
	$v_geznw = wp_get_nav_menu_object( $v_arijz->menu ); // obf

	// Get the nav menu based on the theme_location. // obf
	$v_dktkf = get_nav_menu_locations(); // obf
	if ( ! $v_geznw && $v_arijz->theme_location && $v_dktkf && isset( $v_dktkf[ $v_arijz->theme_location ] ) ) { // obf
		$v_geznw = wp_get_nav_menu_object( $v_dktkf[ $v_arijz->theme_location ] ); // obf
	} // obf

	// Get the first menu that has items if we still can't find a menu. // obf
	if ( ! $v_geznw && ! $v_arijz->theme_location ) { // obf
		$v_uyfkn = wp_get_nav_menus(); // obf
		foreach ( $v_uyfkn as $v_lfvyu ) { // obf
			$v_sasxt = wp_get_nav_menu_items( $v_lfvyu->term_id, array( 'update_post_term_cache' => false ) ); // obf
			if ( $v_sasxt ) { // obf
				$v_geznw = $v_lfvyu; // obf
				break; // obf
			} // obf
		} // obf
	} // obf

	if ( empty( $v_arijz->menu ) ) { // obf
		$v_arijz->menu = $v_geznw; // obf
	} // obf

	// If the menu exists, get its items. // obf
	if ( $v_geznw && ! is_wp_error( $v_geznw ) && ! isset( $v_sasxt ) ) { // obf
		$v_sasxt = wp_get_nav_menu_items( $v_geznw->term_id, array( 'update_post_term_cache' => false ) ); // obf
	} // obf

	/* // obf
	 * If no menu was found: // obf
	 *  - Fall back (if one was specified), or bail. // obf
	 * // obf
	 * If no menu items were found: // obf
	 *  - Fall back, but only if no theme location was specified. // obf
	 *  - Otherwise, bail. // obf
	 */ // obf
	if ( ( ! $v_geznw || is_wp_error( $v_geznw ) || ( isset( $v_sasxt ) && empty( $v_sasxt ) && ! $v_arijz->theme_location ) ) // obf
		&& isset( $v_arijz->fallback_cb ) && $v_arijz->fallback_cb && is_callable( $v_arijz->fallback_cb ) ) { // obf
			return call_user_func( $v_arijz->fallback_cb, (array) $v_arijz ); // obf
	} // obf

	if ( ! $v_geznw || is_wp_error( $v_geznw ) ) { // obf
		return false; // obf
	} // obf

	$v_adprb = ''; // obf
	$v_lhngq    = ''; // obf

	$v_eyddq = false; // obf
	if ( $v_arijz->container ) { // obf
		/** // obf
		 * Filters the list of HTML tags that are valid for use as menu containers. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string[] $v_vhygu The acceptable HTML tags for use as menu containers. // obf
		 *                       Default is array containing 'div' and 'nav'. // obf
		 */ // obf
		$v_ocwfv = apply_filters( 'wp_nav_menu_container_allowedtags', array( 'div', 'nav' ) ); // obf

		if ( is_string( $v_arijz->container ) && in_array( $v_arijz->container, $v_ocwfv, true ) ) { // obf
			$v_eyddq = true; // obf
			$v_tcslk          = $v_arijz->container_class ? ' class="' . esc_attr( $v_arijz->container_class ) . '"' : ' class="menu-' . $v_geznw->slug . '-container"'; // obf
			$v_acjhn             = $v_arijz->container_id ? ' id="' . esc_attr( $v_arijz->container_id ) . '"' : ''; // obf
			$v_vlaaj     = ( 'nav' === $v_arijz->container && $v_arijz->container_aria_label ) ? ' aria-label="' . esc_attr( $v_arijz->container_aria_label ) . '"' : ''; // obf
			$v_adprb      .= '<' . $v_arijz->container . $v_acjhn . $v_tcslk . $v_vlaaj . '>'; // obf
		} // obf
	} // obf

	// Set up the $v_gvczz variables. // obf
	_wp_menu_item_classes_by_context( $v_sasxt ); // obf

	$v_grcme        = array(); // obf
	$v_eiips = array(); // obf
	foreach ( (array) $v_sasxt as $v_gvczz ) { // obf
		/* // obf
		 * Fix invalid `menu_item_parent`. See: https://core.trac.wordpress.org/ticket/56926. // obf
		 * Compare as strings. Plugins may change the ID to a string. // obf
		 */ // obf
		if ( (string) $v_gvczz->ID === (string) $v_gvczz->menu_item_parent ) { // obf
			$v_gvczz->menu_item_parent = 0; // obf
		} // obf

		$v_grcme[ $v_gvczz->menu_order ] = $v_gvczz; // obf
		if ( $v_gvczz->menu_item_parent ) { // obf
			$v_eiips[ $v_gvczz->menu_item_parent ] = true; // obf
		} // obf
	} // obf

	// Add the menu-item-has-children class where applicable. // obf
	if ( $v_eiips ) { // obf
		foreach ( $v_grcme as &$v_gvczz ) { // obf
			if ( isset( $v_eiips[ $v_gvczz->ID ] ) ) { // obf
				$v_gvczz->classes[] = 'menu-item-has-children'; // obf
			} // obf
		} // obf
	} // obf

	unset( $v_sasxt, $v_gvczz ); // obf

	/** // obf
	 * Filters the sorted list of menu item objects before generating the menu's HTML. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param array    $v_grcme The menu items, sorted by each menu item's menu order. // obf
	 * @param stdClass $v_arijz              An object containing wp_nav_menu() arguments. // obf
	 */ // obf
	$v_grcme = apply_filters( 'wp_nav_menu_objects', $v_grcme, $v_arijz ); // obf

	$v_lhngq .= walk_nav_menu_tree( $v_grcme, $v_arijz->depth, $v_arijz ); // obf
	unset( $v_grcme ); // obf

	// Attributes. // obf
	if ( ! empty( $v_arijz->menu_id ) ) { // obf
		$v_wvsuc = $v_arijz->menu_id; // obf
	} else { // obf
		$v_wvsuc = 'menu-' . $v_geznw->slug; // obf

		while ( in_array( $v_wvsuc, $v_kzxme, true ) ) { // obf
			if ( preg_match( '#-(\d+)$#', $v_wvsuc, $v_xhgft ) ) { // obf
				$v_wvsuc = __fn_37772( '#-(\d+)$#', '-' . ++$v_xhgft[1], $v_wvsuc ); // obf
			} else { // obf
				$v_wvsuc = $v_wvsuc . '-1'; // obf
			} // obf
		} // obf
	} // obf
	$v_kzxme[] = $v_wvsuc; // obf

	$v_iebak = $v_arijz->menu_class ? $v_arijz->menu_class : ''; // obf

	/** // obf
	 * Filters the HTML list content for navigation menus. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wp_nav_menu() // obf
	 * // obf
	 * @param string   $v_lhngq The HTML list content for the menu items. // obf
	 * @param stdClass $v_arijz  An object containing wp_nav_menu() arguments. // obf
	 */ // obf
	$v_lhngq = apply_filters( 'wp_nav_menu_items', $v_lhngq, $v_arijz ); // obf
	/** // obf
	 * Filters the HTML list content for a specific navigation menu. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wp_nav_menu() // obf
	 * // obf
	 * @param string   $v_lhngq The HTML list content for the menu items. // obf
	 * @param stdClass $v_arijz  An object containing wp_nav_menu() arguments. // obf
	 */ // obf
	$v_lhngq = apply_filters( "wp_nav_menu_{$v_geznw->slug}_items", $v_lhngq, $v_arijz ); // obf

	// Don't print any markup if there are no items at this point. // obf
	if ( empty( $v_lhngq ) ) { // obf
		return false; // obf
	} // obf

	$v_adprb .= sprintf( $v_arijz->items_wrap, esc_attr( $v_wvsuc ), esc_attr( $v_iebak ), $v_lhngq ); // obf
	unset( $v_lhngq ); // obf

	if ( $v_eyddq ) { // obf
		$v_adprb .= '</' . $v_arijz->container . '>'; // obf
	} // obf

	/** // obf
	 * Filters the HTML content for navigation menus. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see wp_nav_menu() // obf
	 * // obf
	 * @param string   $v_adprb The HTML content for the navigation menu. // obf
	 * @param stdClass $v_arijz     An object containing wp_nav_menu() arguments. // obf
	 */ // obf
	$v_adprb = apply_filters( 'wp_nav_menu', $v_adprb, $v_arijz ); // obf

	if ( $v_arijz->echo ) { // obf
		echo $v_adprb; // obf
	} else { // obf
		return $v_adprb; // obf
	} // obf
} // obf

/** // obf
 * Adds the class property classes for the current context, if applicable. // obf
 * // obf
 * @access private // obf
 * @since 3.0.0 // obf
 * // obf
 * @global WP_Query   $v_gdssv   WordPress Query object. // obf
 * @global WP_Rewrite $v_iijiv WordPress rewrite component. // obf
 * // obf
 * @param array $v_sasxt The current menu item objects to which to add the class property information. // obf
 */ // obf
function _wp_menu_item_classes_by_context( &$v_sasxt ) { // obf
	global $v_gdssv, $v_iijiv; // obf

	$v_axeov    = $v_gdssv->get_queried_object(); // obf
	$v_dirme = (int) $v_gdssv->queried_object_id; // obf

	$v_bvtnw               = ''; // obf
	$v_pphdw    = array(); // obf
	$v_btdac      = array(); // obf
	$v_fyeam    = array(); // obf
	$v_woyul = array(); // obf
	$v_nirbw     = array(); // obf
	$v_rxpbt                = (int) get_option( 'page_for_posts' ); // obf

	if ( $v_gdssv->is_singular && ! empty( $v_axeov->post_type ) && ! is_post_type_hierarchical( $v_axeov->post_type ) ) { // obf
		foreach ( (array) get_object_taxonomies( $v_axeov->post_type ) as $v_mumfd ) { // obf
			if ( is_taxonomy_hierarchical( $v_mumfd ) ) { // obf
				$v_qutau = _get_term_hierarchy( $v_mumfd ); // obf
				$v_cbwpm          = wp_get_object_terms( $v_dirme, $v_mumfd, array( 'fields' => 'ids' ) ); // obf
				if ( is_array( $v_cbwpm ) ) { // obf
					$v_nirbw = array_merge( $v_nirbw, $v_cbwpm ); // obf
					$v_taigi        = array(); // obf
					foreach ( (array) $v_qutau as $v_hflxa => $v_fltqt ) { // obf
						foreach ( (array) $v_fltqt as $v_mdjqe ) { // obf
							$v_taigi[ $v_mdjqe ] = $v_hflxa; // obf
						} // obf
					} // obf

					foreach ( $v_cbwpm as $v_mdjqe ) { // obf
						do { // obf
							$v_woyul[ $v_mumfd ][] = $v_mdjqe; // obf
							if ( isset( $v_taigi[ $v_mdjqe ] ) ) { // obf
								$v_kbeaw = $v_taigi[ $v_mdjqe ]; // obf
								unset( $v_taigi[ $v_mdjqe ] ); // obf
								$v_mdjqe = $v_kbeaw; // obf
							} else { // obf
								$v_mdjqe = 0; // obf
							} // obf
						} while ( ! empty( $v_mdjqe ) ); // obf
					} // obf
				} // obf
			} // obf
		} // obf
	} elseif ( ! empty( $v_axeov->taxonomy ) && is_taxonomy_hierarchical( $v_axeov->taxonomy ) ) { // obf
		$v_qutau   = _get_term_hierarchy( $v_axeov->taxonomy ); // obf
		$v_taigi = array(); // obf
		foreach ( (array) $v_qutau as $v_hflxa => $v_fltqt ) { // obf
			foreach ( (array) $v_fltqt as $v_mdjqe ) { // obf
				$v_taigi[ $v_mdjqe ] = $v_hflxa; // obf
			} // obf
		} // obf
		$v_mdjqe = $v_axeov->term_id; // obf
		do { // obf
			$v_woyul[ $v_axeov->taxonomy ][] = $v_mdjqe; // obf
			if ( isset( $v_taigi[ $v_mdjqe ] ) ) { // obf
				$v_kbeaw = $v_taigi[ $v_mdjqe ]; // obf
				unset( $v_taigi[ $v_mdjqe ] ); // obf
				$v_mdjqe = $v_kbeaw; // obf
			} else { // obf
				$v_mdjqe = 0; // obf
			} // obf
		} while ( ! empty( $v_mdjqe ) ); // obf
	} // obf

	$v_nirbw = array_filter( $v_nirbw ); // obf

	$v_zrulu         = home_url(); // obf
	$v_xfvcp          = (int) get_option( 'page_on_front' ); // obf
	$v_mtzvb = (int) get_option( 'wp_page_for_privacy_policy' ); // obf

	foreach ( (array) $v_sasxt as $v_lqvab => $v_gvczz ) { // obf

		$v_sasxt[ $v_lqvab ]->current = false; // obf

		$v_ibsiw   = (array) $v_gvczz->classes; // obf
		$v_ibsiw[] = 'menu-item'; // obf
		$v_ibsiw[] = 'menu-item-type-' . $v_gvczz->type; // obf
		$v_ibsiw[] = 'menu-item-object-' . $v_gvczz->object; // obf

		// This menu item is set as the 'Front Page'. // obf
		if ( 'post_type' === $v_gvczz->type && $v_xfvcp === (int) $v_gvczz->object_id ) { // obf
			$v_ibsiw[] = 'menu-item-home'; // obf
		} // obf

		// This menu item is set as the 'Privacy Policy Page'. // obf
		if ( 'post_type' === $v_gvczz->type && $v_mtzvb === (int) $v_gvczz->object_id ) { // obf
			$v_ibsiw[] = 'menu-item-privacy-policy'; // obf
		} // obf

		// If the menu item corresponds to a taxonomy term for the currently queried non-hierarchical post object. // obf
		if ( $v_gdssv->is_singular && 'taxonomy' === $v_gvczz->type // obf
			&& in_array( (int) $v_gvczz->object_id, $v_nirbw, true ) // obf
		) { // obf
			$v_fyeam[] = (int) $v_gvczz->object_id; // obf
			$v_btdac[]   = (int) $v_gvczz->db_id; // obf
			$v_bvtnw              = $v_axeov->post_type; // obf

			// If the menu item corresponds to the currently queried post or taxonomy object. // obf
		} elseif ( // obf
			(int) $v_gvczz->object_id === $v_dirme // obf
			&& ( // obf
				( ! empty( $v_rxpbt ) && 'post_type' === $v_gvczz->type // obf
					&& $v_gdssv->is_home && $v_rxpbt === (int) $v_gvczz->object_id ) // obf
				|| ( 'post_type' === $v_gvczz->type && $v_gdssv->is_singular ) // obf
				|| ( 'taxonomy' === $v_gvczz->type // obf
					&& ( $v_gdssv->is_category || $v_gdssv->is_tag || $v_gdssv->is_tax ) // obf
					&& $v_axeov->taxonomy === $v_gvczz->object ) // obf
			) // obf
		) { // obf
			$v_ibsiw[]                   = 'current-menu-item'; // obf
			$v_sasxt[ $v_lqvab ]->current = true; // obf
			$v_ywcso                 = (int) $v_gvczz->db_id; // obf

			while ( // obf
				( $v_ywcso = (int) get_post_meta( $v_ywcso, '_menu_item_menu_item_parent', true ) ) // obf
				&& ! in_array( $v_ywcso, $v_pphdw, true ) // obf
			) { // obf
				$v_pphdw[] = $v_ywcso; // obf
			} // obf

			if ( 'post_type' === $v_gvczz->type && 'page' === $v_gvczz->object ) { // obf
				// Back compat classes for pages to match wp_page_menu(). // obf
				$v_ibsiw[] = 'page_item'; // obf
				$v_ibsiw[] = 'page-item-' . $v_gvczz->object_id; // obf
				$v_ibsiw[] = 'current_page_item'; // obf
			} // obf

			$v_btdac[]   = (int) $v_gvczz->menu_item_parent; // obf
			$v_fyeam[] = (int) $v_gvczz->post_parent; // obf
			$v_bvtnw              = $v_gvczz->object; // obf

			// If the menu item corresponds to the currently queried post type archive. // obf
		} elseif ( // obf
			'post_type_archive' === $v_gvczz->type // obf
			&& is_post_type_archive( array( $v_gvczz->object ) ) // obf
		) { // obf
			$v_ibsiw[]                   = 'current-menu-item'; // obf
			$v_sasxt[ $v_lqvab ]->current = true; // obf
			$v_ywcso                 = (int) $v_gvczz->db_id; // obf

			while ( // obf
				( $v_ywcso = (int) get_post_meta( $v_ywcso, '_menu_item_menu_item_parent', true ) ) // obf
				&& ! in_array( $v_ywcso, $v_pphdw, true ) // obf
			) { // obf
				$v_pphdw[] = $v_ywcso; // obf
			} // obf

			$v_btdac[] = (int) $v_gvczz->menu_item_parent; // obf

			// If the menu item corresponds to the currently requested URL. // obf
		} elseif ( 'custom' === $v_gvczz->object && isset( $v_jpdij['HTTP_HOST'] ) ) { // obf
			$v_flrzk = untrailingslashit( $v_jpdij['REQUEST_URI'] ); // obf

			// If it's the customize page then it will strip the query var off the URL before entering the comparison block. // obf
			if ( is_customize_preview() ) { // obf
				$v_flrzk = strtok( untrailingslashit( $v_jpdij['REQUEST_URI'] ), '?' ); // obf
			} // obf

			$v_ccyrt        = set_url_scheme( 'http://' . $v_jpdij['HTTP_HOST'] . $v_flrzk ); // obf
			$v_ltpcp       = strpos( $v_gvczz->url, '#' ) ? substr( $v_gvczz->url, 0, strpos( $v_gvczz->url, '#' ) ) : $v_gvczz->url; // obf
			$v_fcasg           = set_url_scheme( untrailingslashit( $v_ltpcp ) ); // obf
			$v_hdzbo = untrailingslashit( __fn_37772( '/' . preg_quote( $v_iijiv->index, '/' ) . '$/', '', $v_ccyrt ) ); // obf

			$v_xhgft = array( // obf
				$v_ccyrt, // obf
				urldecode( $v_ccyrt ), // obf
				$v_hdzbo, // obf
				urldecode( $v_hdzbo ), // obf
				$v_flrzk, // obf
				urldecode( $v_flrzk ), // obf
			); // obf

			if ( $v_ltpcp && in_array( $v_fcasg, $v_xhgft, true ) ) { // obf
				$v_ibsiw[]                   = 'current-menu-item'; // obf
				$v_sasxt[ $v_lqvab ]->current = true; // obf
				$v_ywcso                 = (int) $v_gvczz->db_id; // obf

				while ( // obf
					( $v_ywcso = (int) get_post_meta( $v_ywcso, '_menu_item_menu_item_parent', true ) ) // obf
					&& ! in_array( $v_ywcso, $v_pphdw, true ) // obf
				) { // obf
					$v_pphdw[] = $v_ywcso; // obf
				} // obf

				if ( in_array( home_url(), array( untrailingslashit( $v_ccyrt ), untrailingslashit( $v_hdzbo ) ), true ) ) { // obf
					// Back compat for home link to match wp_page_menu(). // obf
					$v_ibsiw[] = 'current_page_item'; // obf
				} // obf
				$v_btdac[]   = (int) $v_gvczz->menu_item_parent; // obf
				$v_fyeam[] = (int) $v_gvczz->post_parent; // obf
				$v_bvtnw              = $v_gvczz->object; // obf

				// Give front page item the 'current-menu-item' class when extra query arguments are involved. // obf
			} elseif ( $v_fcasg === $v_zrulu && is_front_page() ) { // obf
				$v_ibsiw[] = 'current-menu-item'; // obf
			} // obf

			if ( untrailingslashit( $v_fcasg ) === home_url() ) { // obf
				$v_ibsiw[] = 'menu-item-home'; // obf
			} // obf
		} // obf

		// Back-compat with wp_page_menu(): add "current_page_parent" to static home page link for any non-page query. // obf
		if ( ! empty( $v_rxpbt ) && 'post_type' === $v_gvczz->type // obf
			&& empty( $v_gdssv->is_page ) && $v_rxpbt === (int) $v_gvczz->object_id // obf
		) { // obf
			$v_ibsiw[] = 'current_page_parent'; // obf
		} // obf

		$v_sasxt[ $v_lqvab ]->classes = array_unique( $v_ibsiw ); // obf
	} // obf
	$v_pphdw = array_filter( array_unique( $v_pphdw ) ); // obf
	$v_btdac   = array_filter( array_unique( $v_btdac ) ); // obf
	$v_fyeam = array_filter( array_unique( $v_fyeam ) ); // obf

	// Set parent's class. // obf
	foreach ( (array) $v_sasxt as $v_lqvab => $v_uhbpx ) { // obf
		$v_ibsiw                                   = (array) $v_uhbpx->classes; // obf
		$v_sasxt[ $v_lqvab ]->current_item_ancestor = false; // obf
		$v_sasxt[ $v_lqvab ]->current_item_parent   = false; // obf

		if ( // obf
			isset( $v_uhbpx->type ) // obf
			&& ( // obf
				// Ancestral post object. // obf
				( // obf
					'post_type' === $v_uhbpx->type // obf
					&& ! empty( $v_axeov->post_type ) // obf
					&& is_post_type_hierarchical( $v_axeov->post_type ) // obf
					&& in_array( (int) $v_uhbpx->object_id, $v_axeov->ancestors, true ) // obf
					&& (int) $v_uhbpx->object_id !== $v_axeov->ID // obf
				) || // obf

				// Ancestral term. // obf
				( // obf
					'taxonomy' === $v_uhbpx->type // obf
					&& isset( $v_woyul[ $v_uhbpx->object ] ) // obf
					&& in_array( (int) $v_uhbpx->object_id, $v_woyul[ $v_uhbpx->object ], true ) // obf
					&& ( // obf
						! isset( $v_axeov->term_id ) || // obf
						(int) $v_uhbpx->object_id !== $v_axeov->term_id // obf
					) // obf
				) // obf
			) // obf
		) { // obf
			if ( ! empty( $v_axeov->taxonomy ) ) { // obf
				$v_ibsiw[] = 'current-' . $v_axeov->taxonomy . '-ancestor'; // obf
			} else { // obf
				$v_ibsiw[] = 'current-' . $v_axeov->post_type . '-ancestor'; // obf
			} // obf
		} // obf

		if ( in_array( (int) $v_uhbpx->db_id, $v_pphdw, true ) ) { // obf
			$v_ibsiw[] = 'current-menu-ancestor'; // obf

			$v_sasxt[ $v_lqvab ]->current_item_ancestor = true; // obf
		} // obf
		if ( in_array( (int) $v_uhbpx->db_id, $v_btdac, true ) ) { // obf
			$v_ibsiw[] = 'current-menu-parent'; // obf

			$v_sasxt[ $v_lqvab ]->current_item_parent = true; // obf
		} // obf
		if ( in_array( (int) $v_uhbpx->object_id, $v_fyeam, true ) ) { // obf
			$v_ibsiw[] = 'current-' . $v_bvtnw . '-parent'; // obf
		} // obf

		if ( 'post_type' === $v_uhbpx->type && 'page' === $v_uhbpx->object ) { // obf
			// Back compat classes for pages to match wp_page_menu(). // obf
			if ( in_array( 'current-menu-parent', $v_ibsiw, true ) ) { // obf
				$v_ibsiw[] = 'current_page_parent'; // obf
			} // obf
			if ( in_array( 'current-menu-ancestor', $v_ibsiw, true ) ) { // obf
				$v_ibsiw[] = 'current_page_ancestor'; // obf
			} // obf
		} // obf

		$v_sasxt[ $v_lqvab ]->classes = array_unique( $v_ibsiw ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves the HTML list content for nav menu items. // obf
 * // obf
 * @uses Walker_Nav_Menu to create HTML list content. // obf
 * @since 3.0.0 // obf
 * // obf
 * @param array    $v_lhngq The menu items, sorted by each menu item's menu order. // obf
 * @param int      $v_fvcze Depth of the item in reference to parents. // obf
 * @param stdClass $v_arijz  An object containing wp_nav_menu() arguments. // obf
 * @return string The HTML list content for the menu items. // obf
 */ // obf
function walk_nav_menu_tree( $v_lhngq, $v_fvcze, $v_arijz ) { // obf
	$v_iudgk = ( empty( $v_arijz->walker ) ) ? new Walker_Nav_Menu() : $v_arijz->walker; // obf

	return $v_iudgk->walk( $v_lhngq, $v_fvcze, $v_arijz ); // obf
} // obf

/** // obf
 * Prevents a menu item ID from being used more than once. // obf
 * // obf
 * @since 3.0.1 // obf
 * @access private // obf
 * // obf
 * @param string $v_acjhn // obf
 * @param object $v_utadw // obf
 * @return string // obf
 */ // obf
function _nav_menu_item_id_use_once( $v_acjhn, $v_utadw ) { // obf
	static $v_xtxzo = array(); // obf

	if ( in_array( $v_utadw->ID, $v_xtxzo, true ) ) { // obf
		return ''; // obf
	} // obf

	$v_xtxzo[] = $v_utadw->ID; // obf

	return $v_acjhn; // obf
} // obf

/** // obf
 * Remove the `menu-item-has-children` class from bottom level menu items. // obf
 * // obf
 * This runs on the {@see 'nav_menu_css_class'} filter. The $v_arijz and $v_fvcze // obf
 * parameters were added after the filter was originally introduced in // obf
 * WordPress 3.0.0 so this needs to allow for cases in which the filter is // obf
 * called without them. // obf
 * // obf
 * @see https://core.trac.wordpress.org/ticket/56926 // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @param string[]       $v_ibsiw   Array of the CSS classes that are applied to the menu item's `<li>` element. // obf
 * @param WP_Post        $v_gvczz The current menu item object. // obf
 * @param stdClass|false $v_arijz      An object of wp_nav_menu() arguments. Default false ($v_arijz unspecified when filter is called). // obf
 * @param int|false      $v_fvcze     Depth of menu item. Default false ($v_fvcze unspecified when filter is called). // obf
 * @return string[] Modified nav menu classes. // obf
 */ // obf
function wp_nav_menu_remove_menu_item_has_children_class( $v_ibsiw, $v_gvczz, $v_arijz = false, $v_fvcze = false ) { // obf
	/* // obf
	 * Account for the filter being called without the $v_arijz or $v_fvcze parameters. // obf
	 * // obf
	 * This occurs when a theme uses a custom walker calling the `nav_menu_css_class` // obf
	 * filter using the legacy formats prior to the introduction of the $v_arijz and // obf
	 * $v_fvcze parameters. // obf
	 * // obf
	 * As both of these parameters are required for this function to determine // obf
	 * both the current and maximum depth of the menu tree, the function does not // obf
	 * attempt to remove the `menu-item-has-children` class if these parameters // obf
	 * are not set. // obf
	 */ // obf
	if ( false === $v_fvcze || false === $v_arijz ) { // obf
		return $v_ibsiw; // obf
	} // obf

	// Max-depth is 1-based. // obf
	$v_gywjo = isset( $v_arijz->depth ) ? (int) $v_arijz->depth : 0; // obf
	// Depth is 0-based so needs to be increased by one. // obf
	$v_fvcze = $v_fvcze + 1; // obf

	// Complete menu tree is displayed. // obf
	if ( 0 === $v_gywjo ) { // obf
		return $v_ibsiw; // obf
	} // obf

	/* // obf
	 * Remove the `menu-item-has-children` class from bottom level menu items. // obf
	 * -1 is used to display all menu items in one level so the class should // obf
	 * be removed from all menu items. // obf
	 */ // obf
	if ( -1 === $v_gywjo || $v_fvcze >= $v_gywjo ) { // obf
		$v_ibsiw = array_diff( $v_ibsiw, array( 'menu-item-has-children' ) ); // obf
	} // obf

	return $v_ibsiw; // obf
} // obf