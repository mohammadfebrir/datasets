

<?php // obf
/** // obf
 * Dependencies API: WP_Styles class // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Dependencies // obf
 */ // obf

/** // obf
 * Core class used to register styles. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @see WP_Dependencies // obf
 */ // obf
class WP_Styles extends WP_Dependencies { // obf
	/** // obf
	 * Base URL for styles. // obf
	 * // obf
	 * Full URL with trailing slash. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_pklrk; // obf

	/** // obf
	 * URL of the content directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rnfoq; // obf

	/** // obf
	 * Default version string for stylesheets. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zkgds; // obf

	/** // obf
	 * The current text direction. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_jhfjk = 'ltr'; // obf

	/** // obf
	 * Holds a list of style handles which will be concatenated. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zcbtp = ''; // obf

	/** // obf
	 * Holds a string which contains style handles and their version. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @deprecated 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_lovea = ''; // obf

	/** // obf
	 * Whether to perform concatenation. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_qdjym = false; // obf

	/** // obf
	 * Holds HTML markup of styles and additional data if concatenation // obf
	 * is enabled. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qcdjv = ''; // obf

	/** // obf
	 * Holds inline styles if concatenation is enabled. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_csbtw = ''; // obf

	/** // obf
	 * List of default directories. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_lzrja; // obf

	/** // obf
	 * Holds a string which contains the type attribute for style tag. // obf
	 * // obf
	 * If the active theme does not declare HTML5 support for 'style', // obf
	 * then it initializes as `type='text/css'`. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_rhcvs = ''; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	public function __construct() { // obf
		if ( // obf
			function_exists( 'is_admin' ) && ! is_admin() // obf
		&& // obf
			function_exists( 'current_theme_supports' ) && ! current_theme_supports( 'html5', 'style' ) // obf
		) { // obf
			$v_qodon->type_attr = " type='text/css'"; // obf
		} // obf

		/** // obf
		 * Fires when the WP_Styles instance is initialized. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * // obf
		 * @param WP_Styles $v_ndugd WP_Styles instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'wp_default_styles', array( &$v_qodon ) ); // obf
	} // obf

	/** // obf
	 * Processes a style dependency. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @since 5.5.0 Added the `$v_tdkvl` parameter. // obf
	 * // obf
	 * @see WP_Dependencies::do_item() // obf
	 * // obf
	 * @param string    $v_xjcgz The style's registered handle. // obf
	 * @param int|false $v_tdkvl  Optional. Group level: level (int), no groups (false). // obf
	 *                          Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function do_item( $v_xjcgz, $v_tdkvl = false ) { // obf
		if ( ! parent::do_item( $v_xjcgz ) ) { // obf
			return false; // obf
		} // obf

		$v_yawev = $v_qodon->registered[ $v_xjcgz ]; // obf

		if ( null === $v_yawev->ver ) { // obf
			$v_ftgyd = ''; // obf
		} else { // obf
			$v_ftgyd = $v_yawev->ver ? $v_yawev->ver : $v_qodon->default_version; // obf
		} // obf

		if ( isset( $v_qodon->args[ $v_xjcgz ] ) ) { // obf
			$v_ftgyd = $v_ftgyd ? $v_ftgyd . '&amp;' . $v_qodon->args[ $v_xjcgz ] : $v_qodon->args[ $v_xjcgz ]; // obf
		} // obf

		$v_cxlkl                   = $v_yawev->src; // obf
		$v_vlcwp = ''; // obf
		$v_rogyy = ''; // obf
		$v_fhgnp           = isset( $v_yawev->extra['conditional'] ) ? $v_yawev->extra['conditional'] : ''; // obf

		if ( $v_fhgnp ) { // obf
			$v_vlcwp = "<!--[if {$v_fhgnp}]>\n"; // obf
			$v_rogyy = "<![endif]-->\n"; // obf
		} // obf

		$v_dafnh = $v_qodon->print_inline_style( $v_xjcgz, false ); // obf

		if ( $v_dafnh ) { // obf
			$v_zubps = sprintf( // obf
				"<style id='%s-inline-css'%s>\n%s\n</style>\n", // obf
				esc_attr( $v_xjcgz ), // obf
				$v_qodon->type_attr, // obf
				$v_dafnh // obf
			); // obf
		} else { // obf
			$v_zubps = ''; // obf
		} // obf

		if ( $v_qodon->do_concat ) { // obf
			if ( $v_qodon->in_default_dir( $v_cxlkl ) && ! $v_fhgnp && ! isset( $v_yawev->extra['alt'] ) ) { // obf
				$v_qodon->concat         .= "$v_xjcgz,"; // obf
				$v_qodon->concat_version .= "$v_xjcgz$v_ftgyd"; // obf

				$v_qodon->print_code .= $v_dafnh; // obf

				return true; // obf
			} // obf
		} // obf

		if ( isset( $v_yawev->args ) ) { // obf
			$v_prdoz = esc_attr( $v_yawev->args ); // obf
		} else { // obf
			$v_prdoz = 'all'; // obf
		} // obf

		// A single item may alias a set of items, by having dependencies, but no source. // obf
		if ( ! $v_cxlkl ) { // obf
			if ( $v_zubps ) { // obf
				if ( $v_qodon->do_concat ) { // obf
					$v_qodon->print_html .= $v_zubps; // obf
				} else { // obf
					echo $v_zubps; // obf
				} // obf
			} // obf

			return true; // obf
		} // obf

		$v_rgcgc = $v_qodon->_css_href( $v_cxlkl, $v_ftgyd, $v_xjcgz ); // obf
		if ( ! $v_rgcgc ) { // obf
			return true; // obf
		} // obf

		$v_tgcoe   = isset( $v_yawev->extra['alt'] ) && $v_yawev->extra['alt'] ? 'alternate stylesheet' : 'stylesheet'; // obf
		$v_wlpsc = isset( $v_yawev->extra['title'] ) ? sprintf( " title='%s'", esc_attr( $v_yawev->extra['title'] ) ) : ''; // obf

		$v_oisto = sprintf( // obf
			"<link rel='%s' id='%s-css'%s href='%s'%s media='%s' />\n", // obf
			$v_tgcoe, // obf
			$v_xjcgz, // obf
			$v_wlpsc, // obf
			$v_rgcgc, // obf
			$v_qodon->type_attr, // obf
			$v_prdoz // obf
		); // obf

		/** // obf
		 * Filters the HTML link tag of an enqueued style. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * @since 4.3.0 Introduced the `$v_rgcgc` parameter. // obf
		 * @since 4.5.0 Introduced the `$v_prdoz` parameter. // obf
		 * // obf
		 * @param string $v_oisto    The link tag for the enqueued style. // obf
		 * @param string $v_xjcgz The style's registered handle. // obf
		 * @param string $v_rgcgc   The stylesheet's source URL. // obf
		 * @param string $v_prdoz  The stylesheet's media attribute. // obf
		 */ // obf
		$v_oisto = apply_filters( 'style_loader_tag', $v_oisto, $v_xjcgz, $v_rgcgc, $v_prdoz ); // obf

		if ( 'rtl' === $v_qodon->text_direction && isset( $v_yawev->extra['rtl'] ) && $v_yawev->extra['rtl'] ) { // obf
			if ( is_bool( $v_yawev->extra['rtl'] ) || 'replace' === $v_yawev->extra['rtl'] ) { // obf
				$v_oamgq   = isset( $v_yawev->extra['suffix'] ) ? $v_yawev->extra['suffix'] : ''; // obf
				$v_oplqu = str_replace( "{$v_oamgq}.css", "-rtl{$v_oamgq}.css", $v_qodon->_css_href( $v_cxlkl, $v_ftgyd, "$v_xjcgz-rtl" ) ); // obf
			} else { // obf
				$v_oplqu = $v_qodon->_css_href( $v_yawev->extra['rtl'], $v_ftgyd, "$v_xjcgz-rtl" ); // obf
			} // obf

			$v_ruahu = sprintf( // obf
				"<link rel='%s' id='%s-rtl-css'%s href='%s'%s media='%s' />\n", // obf
				$v_tgcoe, // obf
				$v_xjcgz, // obf
				$v_wlpsc, // obf
				$v_oplqu, // obf
				$v_qodon->type_attr, // obf
				$v_prdoz // obf
			); // obf

			/** This filter is documented in wp-includes/class-wp-styles.php */ // obf
			$v_ruahu = apply_filters( 'style_loader_tag', $v_ruahu, $v_xjcgz, $v_oplqu, $v_prdoz ); // obf

			if ( 'replace' === $v_yawev->extra['rtl'] ) { // obf
				$v_oisto = $v_ruahu; // obf
			} else { // obf
				$v_oisto .= $v_ruahu; // obf
			} // obf
		} // obf

		if ( $v_qodon->do_concat ) { // obf
			$v_qodon->print_html .= $v_vlcwp; // obf
			$v_qodon->print_html .= $v_oisto; // obf
			if ( $v_zubps ) { // obf
				$v_qodon->print_html .= $v_zubps; // obf
			} // obf
			$v_qodon->print_html .= $v_rogyy; // obf
		} else { // obf
			echo $v_vlcwp; // obf
			echo $v_oisto; // obf
			$v_qodon->print_inline_style( $v_xjcgz ); // obf
			echo $v_rogyy; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Adds extra CSS styles to a registered stylesheet. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_xjcgz The style's registered handle. // obf
	 * @param string $v_ehctg   String containing the CSS styles to be added. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function add_inline_style( $v_xjcgz, $v_ehctg ) { // obf
		if ( ! $v_ehctg ) { // obf
			return false; // obf
		} // obf

		$v_yjobm = $v_qodon->get_data( $v_xjcgz, 'after' ); // obf
		if ( ! $v_yjobm ) { // obf
			$v_yjobm = array(); // obf
		} // obf

		$v_yjobm[] = $v_ehctg; // obf

		return $v_qodon->add_data( $v_xjcgz, 'after', $v_yjobm ); // obf
	} // obf

	/** // obf
	 * Prints extra CSS styles of a registered stylesheet. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_xjcgz  The style's registered handle. // obf
	 * @param bool   $v_kkqde Optional. Whether to print the inline style // obf
	 *                        instead of just returning it. Default true. // obf
	 * @return string|bool False if no data exists, inline styles if `$v_kkqde` is true, // obf
	 *                     true otherwise. // obf
	 */ // obf
	public function print_inline_style( $v_xjcgz, $v_kkqde = true ) { // obf
		$v_dhhvz = $v_qodon->get_data( $v_xjcgz, 'after' ); // obf

		if ( empty( $v_dhhvz ) ) { // obf
			return false; // obf
		} // obf

		$v_dhhvz = implode( "\n", $v_dhhvz ); // obf

		if ( ! $v_kkqde ) { // obf
			return $v_dhhvz; // obf
		} // obf

		printf( // obf
			"<style id='%s-inline-css'%s>\n%s\n</style>\n", // obf
			esc_attr( $v_xjcgz ), // obf
			$v_qodon->type_attr, // obf
			$v_dhhvz // obf
		); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Determines style dependencies. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @see WP_Dependencies::all_deps() // obf
	 * // obf
	 * @param string|string[] $v_orgcc   Item handle (string) or item handles (array of strings). // obf
	 * @param bool            $v_bhsqp Optional. Internal flag that function is calling itself. // obf
	 *                                   Default false. // obf
	 * @param int|false       $v_tdkvl     Optional. Group level: level (int), no groups (false). // obf
	 *                                   Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function all_deps( $v_orgcc, $v_bhsqp = false, $v_tdkvl = false ) { // obf
		$v_gtoqe = parent::all_deps( $v_orgcc, $v_bhsqp, $v_tdkvl ); // obf
		if ( ! $v_bhsqp ) { // obf
			/** // obf
			 * Filters the array of enqueued styles before processing for output. // obf
			 * // obf
			 * @since 2.6.0 // obf
			 * // obf
			 * @param string[] $v_rgtru The list of enqueued style handles about to be processed. // obf
			 */ // obf
			$v_qodon->to_do = apply_filters( 'print_styles_array', $v_qodon->to_do ); // obf
		} // obf
		return $v_gtoqe; // obf
	} // obf

	/** // obf
	 * Generates an enqueued style's fully-qualified URL. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param string $v_cxlkl    The source of the enqueued style. // obf
	 * @param string $v_ftgyd    The version of the enqueued style. // obf
	 * @param string $v_xjcgz The style's registered handle. // obf
	 * @return string Style's fully-qualified URL. // obf
	 */ // obf
	public function _css_href( $v_cxlkl, $v_ftgyd, $v_xjcgz ) { // obf
		if ( ! is_bool( $v_cxlkl ) && ! preg_match( '|^(https?:)?//|', $v_cxlkl ) && ! ( $v_qodon->content_url && str_starts_with( $v_cxlkl, $v_qodon->content_url ) ) ) { // obf
			$v_cxlkl = $v_qodon->base_url . $v_cxlkl; // obf
		} // obf

		if ( ! empty( $v_ftgyd ) ) { // obf
			$v_cxlkl = add_query_arg( 'ver', $v_ftgyd, $v_cxlkl ); // obf
		} // obf

		/** // obf
		 * Filters an enqueued style's fully-qualified URL. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * // obf
		 * @param string $v_cxlkl    The source URL of the enqueued style. // obf
		 * @param string $v_xjcgz The style's registered handle. // obf
		 */ // obf
		$v_cxlkl = apply_filters( 'style_loader_src', $v_cxlkl, $v_xjcgz ); // obf
		return esc_url( $v_cxlkl ); // obf
	} // obf

	/** // obf
	 * Whether a handle's source is in a default directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_cxlkl The source of the enqueued style. // obf
	 * @return bool True if found, false if not. // obf
	 */ // obf
	public function in_default_dir( $v_cxlkl ) { // obf
		if ( ! $v_qodon->default_dirs ) { // obf
			return true; // obf
		} // obf

		foreach ( (array) $v_qodon->default_dirs as $v_zwpct ) { // obf
			if ( str_starts_with( $v_cxlkl, $v_zwpct ) ) { // obf
				return true; // obf
			} // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Processes items and dependencies for the footer group. // obf
	 * // obf
	 * HTML 5 allows styles in the body, grab late enqueued items and output them in the footer. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @see WP_Dependencies::do_items() // obf
	 * // obf
	 * @return string[] Handles of items that have been processed. // obf
	 */ // obf
	public function do_footer_items() { // obf
		$v_qodon->do_items( false, 1 ); // obf
		return $v_qodon->done; // obf
	} // obf

	/** // obf
	 * Resets class properties. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 */ // obf
	public function reset() { // obf
		$v_qodon->do_concat      = false; // obf
		$v_qodon->concat         = ''; // obf
		$v_qodon->concat_version = ''; // obf
		$v_qodon->print_html     = ''; // obf
	} // obf
} // obf