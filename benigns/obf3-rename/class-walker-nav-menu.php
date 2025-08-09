

<?php // obf
/** // obf
 * Nav Menu API: Walker_Nav_Menu class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Nav_Menus // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core class used to implement an HTML list of nav menu items. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @see Walker // obf
 */ // obf
class Walker_Nav_Menu extends Walker { // obf
	/** // obf
	 * What the class handles. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var string // obf
	 * // obf
	 * @see Walker::$v_etafq // obf
	 */ // obf
	public $v_etafq = array( 'post_type', 'taxonomy', 'custom' ); // obf

	/** // obf
	 * Database fields to use. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @todo Decouple this. // obf
	 * @var string[] // obf
	 * // obf
	 * @see Walker::$v_sffwv // obf
	 */ // obf
	public $v_sffwv = array( // obf
		'parent' => 'menu_item_parent', // obf
		'id'     => 'db_id', // obf
	); // obf

	/** // obf
	 * The URL to the privacy policy page. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_hutii; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_zyhll->privacy_policy_url = get_privacy_policy_url(); // obf
	} // obf

	/** // obf
	 * Starts the list before the elements are added. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see Walker::start_lvl() // obf
	 * // obf
	 * @param string   $v_egteu Used to append additional content (passed by reference). // obf
	 * @param int      $v_zkbfp  Depth of menu item. Used for padding. // obf
	 * @param stdClass $v_fcobj   An object of wp_nav_menu() arguments. // obf
	 */ // obf
	public function start_lvl( &$v_egteu, $v_zkbfp = 0, $v_fcobj = null ) { // obf
		if ( isset( $v_fcobj->item_spacing ) && 'discard' === $v_fcobj->item_spacing ) { // obf
			$v_qhpem = ''; // obf
			$v_fdyfk = ''; // obf
		} else { // obf
			$v_qhpem = "\t"; // obf
			$v_fdyfk = "\n"; // obf
		} // obf
		$v_mrmxb = str_repeat( $v_qhpem, $v_zkbfp ); // obf

		// Default class. // obf
		$v_qrmnl = array( 'sub-menu' ); // obf

		/** // obf
		 * Filters the CSS class(es) applied to a menu list element. // obf
		 * // obf
		 * @since 4.8.0 // obf
		 * // obf
		 * @param string[] $v_qrmnl Array of the CSS classes that are applied to the menu `<ul>` element. // obf
		 * @param stdClass $v_fcobj    An object of `wp_nav_menu()` arguments. // obf
		 * @param int      $v_zkbfp   Depth of menu item. Used for padding. // obf
		 */ // obf
		$v_kdrnd = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $v_qrmnl, $v_fcobj, $v_zkbfp ) ); // obf

		$v_qeedo          = array(); // obf
		$v_qeedo['class'] = ! empty( $v_kdrnd ) ? $v_kdrnd : ''; // obf

		/** // obf
		 * Filters the HTML attributes applied to a menu list element. // obf
		 * // obf
		 * @since 6.3.0 // obf
		 * // obf
		 * @param array $v_qeedo { // obf
		 *     The HTML attributes applied to the `<ul>` element, empty strings are ignored. // obf
		 * // obf
		 *     @type string $v_hmiqs    HTML CSS class attribute. // obf
		 * } // obf
		 * @param stdClass $v_fcobj      An object of `wp_nav_menu()` arguments. // obf
		 * @param int      $v_zkbfp     Depth of menu item. Used for padding. // obf
		 */ // obf
		$v_qeedo       = apply_filters( 'nav_menu_submenu_attributes', $v_qeedo, $v_fcobj, $v_zkbfp ); // obf
		$v_qtkxg = $v_zyhll->build_atts( $v_qeedo ); // obf

		$v_egteu .= "{$v_fdyfk}{$v_mrmxb}<ul{$v_qtkxg}>{$v_fdyfk}"; // obf
	} // obf

	/** // obf
	 * Ends the list of after the elements are added. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see Walker::end_lvl() // obf
	 * // obf
	 * @param string   $v_egteu Used to append additional content (passed by reference). // obf
	 * @param int      $v_zkbfp  Depth of menu item. Used for padding. // obf
	 * @param stdClass $v_fcobj   An object of wp_nav_menu() arguments. // obf
	 */ // obf
	public function end_lvl( &$v_egteu, $v_zkbfp = 0, $v_fcobj = null ) { // obf
		if ( isset( $v_fcobj->item_spacing ) && 'discard' === $v_fcobj->item_spacing ) { // obf
			$v_qhpem = ''; // obf
			$v_fdyfk = ''; // obf
		} else { // obf
			$v_qhpem = "\t"; // obf
			$v_fdyfk = "\n"; // obf
		} // obf
		$v_mrmxb  = str_repeat( $v_qhpem, $v_zkbfp ); // obf
		$v_egteu .= "$v_mrmxb</ul>{$v_fdyfk}"; // obf
	} // obf

	/** // obf
	 * Starts the element output. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added. // obf
	 * @since 5.9.0 Renamed `$v_xtaoe` to `$v_uzpiu` and `$v_howwa` to `$v_rgnzv` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * @since 6.7.0 Removed redundant title attributes. // obf
	 * // obf
	 * @see Walker::start_el() // obf
	 * // obf
	 * @param string   $v_egteu            Used to append additional content (passed by reference). // obf
	 * @param WP_Post  $v_uzpiu       Menu item data object. // obf
	 * @param int      $v_zkbfp             Depth of menu item. Used for padding. // obf
	 * @param stdClass $v_fcobj              An object of wp_nav_menu() arguments. // obf
	 * @param int      $v_rgnzv Optional. ID of the current menu item. Default 0. // obf
	 */ // obf
	public function start_el( &$v_egteu, $v_uzpiu, $v_zkbfp = 0, $v_fcobj = null, $v_rgnzv = 0 ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_pykrj = $v_uzpiu; // obf

		if ( isset( $v_fcobj->item_spacing ) && 'discard' === $v_fcobj->item_spacing ) { // obf
			$v_qhpem = ''; // obf
			$v_fdyfk = ''; // obf
		} else { // obf
			$v_qhpem = "\t"; // obf
			$v_fdyfk = "\n"; // obf
		} // obf
		$v_mrmxb = ( $v_zkbfp ) ? str_repeat( $v_qhpem, $v_zkbfp ) : ''; // obf

		$v_qrmnl   = empty( $v_pykrj->classes ) ? array() : (array) $v_pykrj->classes; // obf
		$v_qrmnl[] = 'menu-item-' . $v_pykrj->ID; // obf

		/** // obf
		 * Filters the arguments for a single nav menu item. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param stdClass $v_fcobj      An object of wp_nav_menu() arguments. // obf
		 * @param WP_Post  $v_pykrj Menu item data object. // obf
		 * @param int      $v_zkbfp     Depth of menu item. Used for padding. // obf
		 */ // obf
		$v_fcobj = apply_filters( 'nav_menu_item_args', $v_fcobj, $v_pykrj, $v_zkbfp ); // obf

		/** // obf
		 * Filters the CSS classes applied to a menu item's list item element. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * @since 4.1.0 The `$v_zkbfp` parameter was added. // obf
		 * // obf
		 * @param string[] $v_qrmnl   Array of the CSS classes that are applied to the menu item's `<li>` element. // obf
		 * @param WP_Post  $v_pykrj The current menu item object. // obf
		 * @param stdClass $v_fcobj      An object of wp_nav_menu() arguments. // obf
		 * @param int      $v_zkbfp     Depth of menu item. Used for padding. // obf
		 */ // obf
		$v_kdrnd = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $v_qrmnl ), $v_pykrj, $v_fcobj, $v_zkbfp ) ); // obf

		/** // obf
		 * Filters the ID attribute applied to a menu item's list item element. // obf
		 * // obf
		 * @since 3.0.1 // obf
		 * @since 4.1.0 The `$v_zkbfp` parameter was added. // obf
		 * // obf
		 * @param string   $v_lfuwa The ID attribute applied to the menu item's `<li>` element. // obf
		 * @param WP_Post  $v_pykrj    The current menu item. // obf
		 * @param stdClass $v_fcobj         An object of wp_nav_menu() arguments. // obf
		 * @param int      $v_zkbfp        Depth of menu item. Used for padding. // obf
		 */ // obf
		$v_howwa = apply_filters( 'nav_menu_item_id', 'menu-item-' . $v_pykrj->ID, $v_pykrj, $v_fcobj, $v_zkbfp ); // obf

		$v_yivoz          = array(); // obf
		$v_yivoz['id']    = ! empty( $v_howwa ) ? $v_howwa : ''; // obf
		$v_yivoz['class'] = ! empty( $v_kdrnd ) ? $v_kdrnd : ''; // obf

		/** // obf
		 * Filters the HTML attributes applied to a menu's list item element. // obf
		 * // obf
		 * @since 6.3.0 // obf
		 * // obf
		 * @param array $v_yivoz { // obf
		 *     The HTML attributes applied to the menu item's `<li>` element, empty strings are ignored. // obf
		 * // obf
		 *     @type string $v_hmiqs        HTML CSS class attribute. // obf
		 *     @type string $v_howwa           HTML id attribute. // obf
		 * } // obf
		 * @param WP_Post  $v_pykrj The current menu item object. // obf
		 * @param stdClass $v_fcobj      An object of wp_nav_menu() arguments. // obf
		 * @param int      $v_zkbfp     Depth of menu item. Used for padding. // obf
		 */ // obf
		$v_yivoz       = apply_filters( 'nav_menu_item_attributes', $v_yivoz, $v_pykrj, $v_fcobj, $v_zkbfp ); // obf
		$v_mpwhm = $v_zyhll->build_atts( $v_yivoz ); // obf

		$v_egteu .= $v_mrmxb . '<li' . $v_mpwhm . '>'; // obf

		/** This filter is documented in wp-includes/post-template.php */ // obf
		$v_fwptj = apply_filters( 'the_title', $v_pykrj->title, $v_pykrj->ID ); // obf

		// Save filtered value before filtering again. // obf
		$v_ugsec = $v_fwptj; // obf

		/** // obf
		 * Filters a menu item's title. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string   $v_fwptj     The menu item's title. // obf
		 * @param WP_Post  $v_pykrj The current menu item object. // obf
		 * @param stdClass $v_fcobj      An object of wp_nav_menu() arguments. // obf
		 * @param int      $v_zkbfp     Depth of menu item. Used for padding. // obf
		 */ // obf
		$v_fwptj = apply_filters( 'nav_menu_item_title', $v_fwptj, $v_pykrj, $v_fcobj, $v_zkbfp ); // obf

		$v_qeedo           = array(); // obf
		$v_qeedo['target'] = ! empty( $v_pykrj->target ) ? $v_pykrj->target : ''; // obf
		$v_qeedo['rel']    = ! empty( $v_pykrj->xfn ) ? $v_pykrj->xfn : ''; // obf

		if ( ! empty( $v_pykrj->url ) ) { // obf
			if ( $v_zyhll->privacy_policy_url === $v_pykrj->url ) { // obf
				$v_qeedo['rel'] = empty( $v_qeedo['rel'] ) ? 'privacy-policy' : $v_qeedo['rel'] . ' privacy-policy'; // obf
			} // obf

			$v_qeedo['href'] = $v_pykrj->url; // obf
		} else { // obf
			$v_qeedo['href'] = ''; // obf
		} // obf

		$v_qeedo['aria-current'] = $v_pykrj->current ? 'page' : ''; // obf

		// Add title attribute only if it does not match the link text (before or after filtering). // obf
		if ( ! empty( $v_pykrj->attr_title ) // obf
			&& trim( strtolower( $v_pykrj->attr_title ) ) !== trim( strtolower( $v_pykrj->title ) ) // obf
			&& trim( strtolower( $v_pykrj->attr_title ) ) !== trim( strtolower( $v_ugsec ) ) // obf
			&& trim( strtolower( $v_pykrj->attr_title ) ) !== trim( strtolower( $v_fwptj ) ) // obf
		) { // obf
			$v_qeedo['title'] = $v_pykrj->attr_title; // obf
		} else { // obf
			$v_qeedo['title'] = ''; // obf
		} // obf

		/** // obf
		 * Filters the HTML attributes applied to a menu item's anchor element. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * @since 4.1.0 The `$v_zkbfp` parameter was added. // obf
		 * // obf
		 * @param array $v_qeedo { // obf
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored. // obf
		 * // obf
		 *     @type string $v_fwptj        Title attribute. // obf
		 *     @type string $v_crdrv       Target attribute. // obf
		 *     @type string $v_btjfp          The rel attribute. // obf
		 *     @type string $v_wmzbd         The href attribute. // obf
		 *     @type string $v_xmvil-current The aria-current attribute. // obf
		 * } // obf
		 * @param WP_Post  $v_pykrj The current menu item object. // obf
		 * @param stdClass $v_fcobj      An object of wp_nav_menu() arguments. // obf
		 * @param int      $v_zkbfp     Depth of menu item. Used for padding. // obf
		 */ // obf
		$v_qeedo       = apply_filters( 'nav_menu_link_attributes', $v_qeedo, $v_pykrj, $v_fcobj, $v_zkbfp ); // obf
		$v_qtkxg = $v_zyhll->build_atts( $v_qeedo ); // obf

		$v_gjwqr  = $v_fcobj->before; // obf
		$v_gjwqr .= '<a' . $v_qtkxg . '>'; // obf
		$v_gjwqr .= $v_fcobj->link_before . $v_fwptj . $v_fcobj->link_after; // obf
		$v_gjwqr .= '</a>'; // obf
		$v_gjwqr .= $v_fcobj->after; // obf

		/** // obf
		 * Filters a menu item's starting output. // obf
		 * // obf
		 * The menu item's starting output only includes `$v_fcobj->before`, the opening `<a>`, // obf
		 * the menu item's title, the closing `</a>`, and `$v_fcobj->after`. Currently, there is // obf
		 * no filter for modifying the opening and closing `<li>` for a menu item. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string   $v_gjwqr The menu item's starting HTML output. // obf
		 * @param WP_Post  $v_pykrj   Menu item data object. // obf
		 * @param int      $v_zkbfp       Depth of menu item. Used for padding. // obf
		 * @param stdClass $v_fcobj        An object of wp_nav_menu() arguments. // obf
		 */ // obf
		$v_egteu .= apply_filters( 'walker_nav_menu_start_el', $v_gjwqr, $v_pykrj, $v_zkbfp, $v_fcobj ); // obf
	} // obf

	/** // obf
	 * Ends the element output, if needed. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 5.9.0 Renamed `$v_xtaoe` to `$v_uzpiu` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @see Walker::end_el() // obf
	 * // obf
	 * @param string   $v_egteu      Used to append additional content (passed by reference). // obf
	 * @param WP_Post  $v_uzpiu Menu item data object. Not used. // obf
	 * @param int      $v_zkbfp       Depth of page. Not Used. // obf
	 * @param stdClass $v_fcobj        An object of wp_nav_menu() arguments. // obf
	 */ // obf
	public function end_el( &$v_egteu, $v_uzpiu, $v_zkbfp = 0, $v_fcobj = null ) { // obf
		if ( isset( $v_fcobj->item_spacing ) && 'discard' === $v_fcobj->item_spacing ) { // obf
			$v_qhpem = ''; // obf
			$v_fdyfk = ''; // obf
		} else { // obf
			$v_qhpem = "\t"; // obf
			$v_fdyfk = "\n"; // obf
		} // obf
		$v_egteu .= "</li>{$v_fdyfk}"; // obf
	} // obf

	/** // obf
	 * Builds a string of HTML attributes from an array of key/value pairs. // obf
	 * Empty values are ignored. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param  array $v_qeedo Optional. An array of HTML attribute key/value pairs. Default empty array. // obf
	 * @return string A string of HTML attributes. // obf
	 */ // obf
	protected function build_atts( $v_qeedo = array() ) { // obf
		$v_aduhs = ''; // obf
		foreach ( $v_qeedo as $v_qlcmh => $v_dqnum ) { // obf
			if ( false !== $v_dqnum && '' !== $v_dqnum && is_scalar( $v_dqnum ) ) { // obf
				$v_dqnum             = ( 'href' === $v_qlcmh ) ? esc_url( $v_dqnum ) : esc_attr( $v_dqnum ); // obf
				$v_aduhs .= ' ' . $v_qlcmh . '="' . $v_dqnum . '"'; // obf
			} // obf
		} // obf
		return $v_aduhs; // obf
	} // obf
} // obf