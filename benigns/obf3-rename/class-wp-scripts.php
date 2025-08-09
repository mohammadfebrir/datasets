

<?php // obf
/** // obf
 * Dependencies API: WP_Scripts class // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Dependencies // obf
 */ // obf

/** // obf
 * Core class used to register scripts. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @see WP_Dependencies // obf
 */ // obf
class WP_Scripts extends WP_Dependencies { // obf
	/** // obf
	 * Base URL for scripts. // obf
	 * // obf
	 * Full URL with trailing slash. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fyfcu; // obf

	/** // obf
	 * URL of the content directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ivlmq; // obf

	/** // obf
	 * Default version string for scripts. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_lsooa; // obf

	/** // obf
	 * Holds handles of scripts which are enqueued in footer. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_lbypm = array(); // obf

	/** // obf
	 * Holds a list of script handles which will be concatenated. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_kwqmq = ''; // obf

	/** // obf
	 * Holds a string which contains script handles and their version. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @deprecated 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tfbpj = ''; // obf

	/** // obf
	 * Whether to perform concatenation. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_ocnkr = false; // obf

	/** // obf
	 * Holds HTML markup of scripts and additional data if concatenation // obf
	 * is enabled. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gurue = ''; // obf

	/** // obf
	 * Holds inline code if concatenation is enabled. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_xlytj = ''; // obf

	/** // obf
	 * Holds a list of script handles which are not in the default directory // obf
	 * if concatenation is enabled. // obf
	 * // obf
	 * Unused in core. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_jtayh = ''; // obf

	/** // obf
	 * Holds a string which contains handles and versions of scripts which // obf
	 * are not in the default directory if concatenation is enabled. // obf
	 * // obf
	 * Unused in core. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rtfrb = ''; // obf

	/** // obf
	 * List of default directories. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_wgsud; // obf

	/** // obf
	 * Holds a mapping of dependents (as handles) for a given script handle. // obf
	 * Used to optimize recursive dependency tree checks. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_eopek = array(); // obf

	/** // obf
	 * Holds a reference to the delayed (non-blocking) script loading strategies. // obf
	 * Used by methods that validate loading strategies. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_iprxm = array( 'defer', 'async' ); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_fwkau->init(); // obf
		add_action( 'init', array( $v_fwkau, 'init' ), 0 ); // obf
	} // obf

	/** // obf
	 * Initialize the class. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function init() { // obf
		/** // obf
		 * Fires when the WP_Scripts instance is initialized. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * // obf
		 * @param WP_Scripts $v_ssagy WP_Scripts instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'wp_default_scripts', array( &$v_fwkau ) ); // obf
	} // obf

	/** // obf
	 * Prints scripts. // obf
	 * // obf
	 * Prints the scripts passed to it or the print queue. Also prints all necessary dependencies. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.8.0 Added the `$v_lozxc` parameter. // obf
	 * // obf
	 * @param string|string[]|false $v_bioob Optional. Scripts to be printed: queue (false), // obf
	 *                                       single script (string), or multiple scripts (array of strings). // obf
	 *                                       Default false. // obf
	 * @param int|false             $v_lozxc   Optional. Group level: level (int), no groups (false). // obf
	 *                                       Default false. // obf
	 * @return string[] Handles of scripts that have been printed. // obf
	 */ // obf
	public function print_scripts( $v_bioob = false, $v_lozxc = false ) { // obf
		return $v_fwkau->do_items( $v_bioob, $v_lozxc ); // obf
	} // obf

	/** // obf
	 * Prints extra scripts of a registered script. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 2.8.0 Added the `$v_nklfw` parameter. // obf
	 * @deprecated 3.3.0 // obf
	 * // obf
	 * @see print_extra_script() // obf
	 * // obf
	 * @param string $v_kcwre  The script's registered handle. // obf
	 * @param bool   $v_nklfw Optional. Whether to print the extra script // obf
	 *                        instead of just returning it. Default true. // obf
	 * @return bool|string|void Void if no data exists, extra scripts if `$v_nklfw` is true, // obf
	 *                          true otherwise. // obf
	 */ // obf
	public function print_scripts_l10n( $v_kcwre, $v_nklfw = true ) { // obf
		_deprecated_function( __FUNCTION__, '3.3.0', 'WP_Scripts::print_extra_script()' ); // obf
		return $v_fwkau->print_extra_script( $v_kcwre, $v_nklfw ); // obf
	} // obf

	/** // obf
	 * Prints extra scripts of a registered script. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_kcwre  The script's registered handle. // obf
	 * @param bool   $v_nklfw Optional. Whether to print the extra script // obf
	 *                        instead of just returning it. Default true. // obf
	 * @return bool|string|void Void if no data exists, extra scripts if `$v_nklfw` is true, // obf
	 *                          true otherwise. // obf
	 */ // obf
	public function print_extra_script( $v_kcwre, $v_nklfw = true ) { // obf
		$v_vqdkr = $v_fwkau->get_data( $v_kcwre, 'data' ); // obf
		if ( ! $v_vqdkr ) { // obf
			return; // obf
		} // obf

		if ( ! $v_nklfw ) { // obf
			return $v_vqdkr; // obf
		} // obf

		wp_print_inline_script_tag( $v_vqdkr, array( 'id' => "{$v_kcwre}-js-extra" ) ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks whether all dependents of a given handle are in the footer. // obf
	 * // obf
	 * If there are no dependents, this is considered the same as if all dependents were in the footer. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_kcwre Script handle. // obf
	 * @return bool Whether all dependents are in the footer. // obf
	 */ // obf
	private function are_all_dependents_in_footer( $v_kcwre ) { // obf
		foreach ( $v_fwkau->get_dependents( $v_kcwre ) as $v_eycmb ) { // obf
			if ( isset( $v_fwkau->groups[ $v_eycmb ] ) && 0 === $v_fwkau->groups[ $v_eycmb ] ) { // obf
				return false; // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * Processes a script dependency. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @since 2.8.0 Added the `$v_lozxc` parameter. // obf
	 * // obf
	 * @see WP_Dependencies::do_item() // obf
	 * // obf
	 * @param string    $v_kcwre The script's registered handle. // obf
	 * @param int|false $v_lozxc  Optional. Group level: level (int), no groups (false). // obf
	 *                          Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function do_item( $v_kcwre, $v_lozxc = false ) { // obf
		if ( ! parent::do_item( $v_kcwre ) ) { // obf
			return false; // obf
		} // obf

		if ( 0 === $v_lozxc && $v_fwkau->groups[ $v_kcwre ] > 0 ) { // obf
			$v_fwkau->in_footer[] = $v_kcwre; // obf
			return false; // obf
		} // obf

		if ( false === $v_lozxc && in_array( $v_kcwre, $v_fwkau->in_footer, true ) ) { // obf
			$v_fwkau->in_footer = array_diff( $v_fwkau->in_footer, (array) $v_kcwre ); // obf
		} // obf

		$v_suqok = $v_fwkau->registered[ $v_kcwre ]; // obf

		if ( null === $v_suqok->ver ) { // obf
			$v_mapgs = ''; // obf
		} else { // obf
			$v_mapgs = $v_suqok->ver ? $v_suqok->ver : $v_fwkau->default_version; // obf
		} // obf

		if ( isset( $v_fwkau->args[ $v_kcwre ] ) ) { // obf
			$v_mapgs = $v_mapgs ? $v_mapgs . '&amp;' . $v_fwkau->args[ $v_kcwre ] : $v_fwkau->args[ $v_kcwre ]; // obf
		} // obf

		$v_uscik                   = $v_suqok->src; // obf
		$v_jezio              = $v_fwkau->get_eligible_loading_strategy( $v_kcwre ); // obf
		$v_prozr     = (string) $v_fwkau->get_data( $v_kcwre, 'strategy' ); // obf
		$v_zdlbg = ''; // obf
		$v_jbjci = ''; // obf
		$v_xkxkj           = isset( $v_suqok->extra['conditional'] ) ? $v_suqok->extra['conditional'] : ''; // obf

		if ( ! $v_fwkau->is_delayed_strategy( $v_prozr ) ) { // obf
			$v_prozr = ''; // obf
		} // obf

		/* // obf
		 * Move this script to the footer if: // obf
		 * 1. The script is in the header group. // obf
		 * 2. The current output is the header. // obf
		 * 3. The intended strategy is delayed. // obf
		 * 4. The actual strategy is not delayed. // obf
		 * 5. All dependent scripts are in the footer. // obf
		 */ // obf
		if ( // obf
			0 === $v_lozxc && // obf
			0 === $v_fwkau->groups[ $v_kcwre ] && // obf
			$v_prozr && // obf
			! $v_fwkau->is_delayed_strategy( $v_jezio ) && // obf
			$v_fwkau->are_all_dependents_in_footer( $v_kcwre ) // obf
		) { // obf
			$v_fwkau->in_footer[] = $v_kcwre; // obf
			return false; // obf
		} // obf

		if ( $v_xkxkj ) { // obf
			$v_zdlbg = "<!--[if {$v_xkxkj}]>\n"; // obf
			$v_jbjci = "<![endif]-->\n"; // obf
		} // obf

		$v_eyaxy = $v_fwkau->get_inline_script_tag( $v_kcwre, 'before' ); // obf
		$v_xqfuq  = $v_fwkau->get_inline_script_tag( $v_kcwre, 'after' ); // obf

		if ( $v_eyaxy || $v_xqfuq ) { // obf
			$v_aamdn = $v_zdlbg . $v_eyaxy . $v_xqfuq . $v_jbjci; // obf
		} else { // obf
			$v_aamdn = ''; // obf
		} // obf

		/* // obf
		 * Prevent concatenation of scripts if the text domain is defined // obf
		 * to ensure the dependency order is respected. // obf
		 */ // obf
		$v_ibwbk = ! empty( $v_suqok->textdomain ); // obf

		$v_tujrj = $v_fwkau->print_translations( $v_kcwre, false ); // obf
		if ( $v_tujrj ) { // obf
			$v_tujrj = wp_get_inline_script_tag( $v_tujrj, array( 'id' => "{$v_kcwre}-js-translations" ) ); // obf
		} // obf

		if ( $v_fwkau->do_concat ) { // obf
			/** // obf
			 * Filters the script loader source. // obf
			 * // obf
			 * @since 2.2.0 // obf
			 * // obf
			 * @param string $v_uscik    Script loader source path. // obf
			 * @param string $v_kcwre Script handle. // obf
			 */ // obf
			$v_lvury = apply_filters( 'script_loader_src', $v_uscik, $v_kcwre ); // obf

			if ( // obf
				$v_fwkau->in_default_dir( $v_lvury ) // obf
				&& ( $v_eyaxy || $v_xqfuq || $v_ibwbk || $v_fwkau->is_delayed_strategy( $v_jezio ) ) // obf
			) { // obf
				$v_fwkau->do_concat = false; // obf

				// Have to print the so-far concatenated scripts right away to maintain the right order. // obf
				_print_scripts(); // obf
				$v_fwkau->reset(); // obf
			} elseif ( $v_fwkau->in_default_dir( $v_lvury ) && ! $v_xkxkj ) { // obf
				$v_fwkau->print_code     .= $v_fwkau->print_extra_script( $v_kcwre, false ); // obf
				$v_fwkau->concat         .= "$v_kcwre,"; // obf
				$v_fwkau->concat_version .= "$v_kcwre$v_mapgs"; // obf
				return true; // obf
			} else { // obf
				$v_fwkau->ext_handles .= "$v_kcwre,"; // obf
				$v_fwkau->ext_version .= "$v_kcwre$v_mapgs"; // obf
			} // obf
		} // obf

		$v_dziwn = $v_xkxkj && $v_fwkau->get_data( $v_kcwre, 'data' ); // obf

		if ( $v_dziwn ) { // obf
			echo $v_zdlbg; // obf
		} // obf

		$v_fwkau->print_extra_script( $v_kcwre ); // obf

		if ( $v_dziwn ) { // obf
			echo $v_jbjci; // obf
		} // obf

		// A single item may alias a set of items, by having dependencies, but no source. // obf
		if ( ! $v_uscik ) { // obf
			if ( $v_aamdn ) { // obf
				if ( $v_fwkau->do_concat ) { // obf
					$v_fwkau->print_html .= $v_aamdn; // obf
				} else { // obf
					echo $v_aamdn; // obf
				} // obf
			} // obf

			return true; // obf
		} // obf

		if ( ! preg_match( '|^(https?:)?//|', $v_uscik ) && ! ( $v_fwkau->content_url && str_starts_with( $v_uscik, $v_fwkau->content_url ) ) ) { // obf
			$v_uscik = $v_fwkau->base_url . $v_uscik; // obf
		} // obf

		if ( ! empty( $v_mapgs ) ) { // obf
			$v_uscik = add_query_arg( 'ver', $v_mapgs, $v_uscik ); // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-scripts.php */ // obf
		$v_uscik = esc_url_raw( apply_filters( 'script_loader_src', $v_uscik, $v_kcwre ) ); // obf

		if ( ! $v_uscik ) { // obf
			return true; // obf
		} // obf

		$v_ikbyg = array( // obf
			'src' => $v_uscik, // obf
			'id'  => "{$v_kcwre}-js", // obf
		); // obf
		if ( $v_jezio ) { // obf
			$v_ikbyg[ $v_jezio ] = true; // obf
		} // obf
		if ( $v_prozr ) { // obf
			$v_ikbyg['data-wp-strategy'] = $v_prozr; // obf
		} // obf
		$v_kbnrp  = $v_tujrj . $v_zdlbg . $v_eyaxy; // obf
		$v_kbnrp .= wp_get_script_tag( $v_ikbyg ); // obf
		$v_kbnrp .= $v_xqfuq . $v_jbjci; // obf

		/** // obf
		 * Filters the HTML script tag of an enqueued script. // obf
		 * // obf
		 * @since 4.1.0 // obf
		 * // obf
		 * @param string $v_kbnrp    The `<script>` tag for the enqueued script. // obf
		 * @param string $v_kcwre The script's registered handle. // obf
		 * @param string $v_uscik    The script's source URL. // obf
		 */ // obf
		$v_kbnrp = apply_filters( 'script_loader_tag', $v_kbnrp, $v_kcwre, $v_uscik ); // obf

		if ( $v_fwkau->do_concat ) { // obf
			$v_fwkau->print_html .= $v_kbnrp; // obf
		} else { // obf
			echo $v_kbnrp; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Adds extra code to a registered script. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_kcwre   Name of the script to add the inline script to. // obf
	 *                         Must be lowercase. // obf
	 * @param string $v_huokd     String containing the JavaScript to be added. // obf
	 * @param string $v_wyoue Optional. Whether to add the inline script // obf
	 *                         before the handle or after. Default 'after'. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function add_inline_script( $v_kcwre, $v_huokd, $v_wyoue = 'after' ) { // obf
		if ( ! $v_huokd ) { // obf
			return false; // obf
		} // obf

		if ( 'after' !== $v_wyoue ) { // obf
			$v_wyoue = 'before'; // obf
		} // obf

		$v_tfwrj   = (array) $v_fwkau->get_data( $v_kcwre, $v_wyoue ); // obf
		$v_tfwrj[] = $v_huokd; // obf

		return $v_fwkau->add_data( $v_kcwre, $v_wyoue, $v_tfwrj ); // obf
	} // obf

	/** // obf
	 * Prints inline scripts registered for a specific handle. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @deprecated 6.3.0 Use methods get_inline_script_tag() or get_inline_script_data() instead. // obf
	 * // obf
	 * @param string $v_kcwre   Name of the script to print inline scripts for. // obf
	 *                         Must be lowercase. // obf
	 * @param string $v_wyoue Optional. Whether to add the inline script // obf
	 *                         before the handle or after. Default 'after'. // obf
	 * @param bool   $v_nklfw  Optional. Whether to print the script tag // obf
	 *                         instead of just returning the script data. Default true. // obf
	 * @return string|false Script data on success, false otherwise. // obf
	 */ // obf
	public function print_inline_script( $v_kcwre, $v_wyoue = 'after', $v_nklfw = true ) { // obf
		_deprecated_function( __METHOD__, '6.3.0', 'WP_Scripts::get_inline_script_data() or WP_Scripts::get_inline_script_tag()' ); // obf

		$v_vqdkr = $v_fwkau->get_inline_script_data( $v_kcwre, $v_wyoue ); // obf
		if ( empty( $v_vqdkr ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_nklfw ) { // obf
			echo $v_fwkau->get_inline_script_tag( $v_kcwre, $v_wyoue ); // obf
		} // obf
		return $v_vqdkr; // obf
	} // obf

	/** // obf
	 * Gets data for inline scripts registered for a specific handle. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_kcwre   Name of the script to get data for. // obf
	 *                         Must be lowercase. // obf
	 * @param string $v_wyoue Optional. Whether to add the inline script // obf
	 *                         before the handle or after. Default 'after'. // obf
	 * @return string Inline script, which may be empty string. // obf
	 */ // obf
	public function get_inline_script_data( $v_kcwre, $v_wyoue = 'after' ) { // obf
		$v_huokd = $v_fwkau->get_data( $v_kcwre, $v_wyoue ); // obf
		if ( empty( $v_huokd ) || ! is_array( $v_huokd ) ) { // obf
			return ''; // obf
		} // obf

		return trim( implode( "\n", $v_huokd ), "\n" ); // obf
	} // obf

	/** // obf
	 * Gets tags for inline scripts registered for a specific handle. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_kcwre   Name of the script to get associated inline script tag for. // obf
	 *                         Must be lowercase. // obf
	 * @param string $v_wyoue Optional. Whether to get tag for inline // obf
	 *                         scripts in the before or after position. Default 'after'. // obf
	 * @return string Inline script, which may be empty string. // obf
	 */ // obf
	public function get_inline_script_tag( $v_kcwre, $v_wyoue = 'after' ) { // obf
		$v_wikva = $v_fwkau->get_inline_script_data( $v_kcwre, $v_wyoue ); // obf
		if ( empty( $v_wikva ) ) { // obf
			return ''; // obf
		} // obf

		$v_edppw = "{$v_kcwre}-js-{$v_wyoue}"; // obf

		return wp_get_inline_script_tag( $v_wikva, compact( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Localizes a script, only if the script has already been added. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_kcwre      Name of the script to attach data to. // obf
	 * @param string $v_jaflb Name of the variable that will contain the data. // obf
	 * @param array  $v_fxdgr        Array of data to localize. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function localize( $v_kcwre, $v_jaflb, $v_fxdgr ) { // obf
		if ( 'jquery' === $v_kcwre ) { // obf
			$v_kcwre = 'jquery-core'; // obf
		} // obf

		if ( is_array( $v_fxdgr ) && isset( $v_fxdgr['l10n_print_after'] ) ) { // back compat, preserve the code in 'l10n_print_after' if present. // obf
			$v_ffbdy = $v_fxdgr['l10n_print_after']; // obf
			unset( $v_fxdgr['l10n_print_after'] ); // obf
		} // obf

		if ( ! is_array( $v_fxdgr ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: 1: $v_fxdgr, 2: wp_add_inline_script() */ // obf
					__( 'The %1$v_ufnkw parameter must be an array. To pass arbitrary data to scripts, use the %2$v_ufnkw function instead.' ), // obf
					'<code>$v_fxdgr</code>', // obf
					'<code>wp_add_inline_script()</code>' // obf
				), // obf
				'5.7.0' // obf
			); // obf

			if ( false === $v_fxdgr ) { // obf
				// This should really not be needed, but is necessary for backward compatibility. // obf
				$v_fxdgr = array( $v_fxdgr ); // obf
			} // obf
		} // obf

		if ( is_string( $v_fxdgr ) ) { // obf
			$v_fxdgr = html_entity_decode( $v_fxdgr, ENT_QUOTES, 'UTF-8' ); // obf
		} elseif ( is_array( $v_fxdgr ) ) { // obf
			foreach ( $v_fxdgr as $v_twhzk => $v_lkwof ) { // obf
				if ( ! is_scalar( $v_lkwof ) ) { // obf
					continue; // obf
				} // obf

				$v_fxdgr[ $v_twhzk ] = html_entity_decode( (string) $v_lkwof, ENT_QUOTES, 'UTF-8' ); // obf
			} // obf
		} // obf

		$v_tfwrj = "var $v_jaflb = " . wp_json_encode( $v_fxdgr ) . ';'; // obf

		if ( ! empty( $v_ffbdy ) ) { // obf
			$v_tfwrj .= "\n$v_ffbdy;"; // obf
		} // obf

		$v_huokd = $v_fwkau->get_data( $v_kcwre, 'data' ); // obf

		if ( ! empty( $v_huokd ) ) { // obf
			$v_tfwrj = "$v_huokd\n$v_tfwrj"; // obf
		} // obf

		return $v_fwkau->add_data( $v_kcwre, 'data', $v_tfwrj ); // obf
	} // obf

	/** // obf
	 * Sets handle group. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @see WP_Dependencies::set_group() // obf
	 * // obf
	 * @param string    $v_kcwre    Name of the item. Should be unique. // obf
	 * @param bool      $v_grugo Internal flag that calling function was called recursively. // obf
	 * @param int|false $v_lozxc     Optional. Group level: level (int), no groups (false). // obf
	 *                             Default false. // obf
	 * @return bool Not already in the group or a lower group. // obf
	 */ // obf
	public function set_group( $v_kcwre, $v_grugo, $v_lozxc = false ) { // obf
		if ( isset( $v_fwkau->registered[ $v_kcwre ]->args ) && 1 === $v_fwkau->registered[ $v_kcwre ]->args ) { // obf
			$v_uapkb = 1; // obf
		} else { // obf
			$v_uapkb = (int) $v_fwkau->get_data( $v_kcwre, 'group' ); // obf
		} // obf

		if ( false !== $v_lozxc && $v_uapkb > $v_lozxc ) { // obf
			$v_uapkb = $v_lozxc; // obf
		} // obf

		return parent::set_group( $v_kcwre, $v_grugo, $v_uapkb ); // obf
	} // obf

	/** // obf
	 * Sets a translation textdomain. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 5.1.0 The `$v_rsgfh` parameter was made optional. // obf
	 * // obf
	 * @param string $v_kcwre Name of the script to register a translation domain to. // obf
	 * @param string $v_rsgfh Optional. Text domain. Default 'default'. // obf
	 * @param string $v_qnban   Optional. The full file path to the directory containing translation files. // obf
	 * @return bool True if the text domain was registered, false if not. // obf
	 */ // obf
	public function set_translations( $v_kcwre, $v_rsgfh = 'default', $v_qnban = '' ) { // obf
		if ( ! isset( $v_fwkau->registered[ $v_kcwre ] ) ) { // obf
			return false; // obf
		} // obf

		/** @var \_WP_Dependency $v_suqok */ // obf
		$v_suqok = $v_fwkau->registered[ $v_kcwre ]; // obf

		if ( ! in_array( 'wp-i18n', $v_suqok->deps, true ) ) { // obf
			$v_suqok->deps[] = 'wp-i18n'; // obf
		} // obf

		return $v_suqok->set_translations( $v_rsgfh, $v_qnban ); // obf
	} // obf

	/** // obf
	 * Prints translations set for a specific handle. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_kcwre  Name of the script to add the inline script to. // obf
	 *                        Must be lowercase. // obf
	 * @param bool   $v_nklfw Optional. Whether to print the script // obf
	 *                        instead of just returning it. Default true. // obf
	 * @return string|false Script on success, false otherwise. // obf
	 */ // obf
	public function print_translations( $v_kcwre, $v_nklfw = true ) { // obf
		if ( ! isset( $v_fwkau->registered[ $v_kcwre ] ) || empty( $v_fwkau->registered[ $v_kcwre ]->textdomain ) ) { // obf
			return false; // obf
		} // obf

		$v_rsgfh = $v_fwkau->registered[ $v_kcwre ]->textdomain; // obf
		$v_qnban   = ''; // obf

		if ( isset( $v_fwkau->registered[ $v_kcwre ]->translations_path ) ) { // obf
			$v_qnban = $v_fwkau->registered[ $v_kcwre ]->translations_path; // obf
		} // obf

		$v_yfbce = load_script_textdomain( $v_kcwre, $v_rsgfh, $v_qnban ); // obf

		if ( ! $v_yfbce ) { // obf
			return false; // obf
		} // obf

		$v_vqdkr = <<<JS // obf
( function( domain, translations ) { // obf
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages; // obf
	localeData[""].domain = domain; // obf
	wp.i18n.setLocaleData( localeData, domain ); // obf
} )( "{$v_rsgfh}", {$v_yfbce} ); // obf
JS; // obf

		if ( $v_nklfw ) { // obf
			wp_print_inline_script_tag( $v_vqdkr, array( 'id' => "{$v_kcwre}-js-translations" ) ); // obf
		} // obf

		return $v_vqdkr; // obf
	} // obf

	/** // obf
	 * Determines script dependencies. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @see WP_Dependencies::all_deps() // obf
	 * // obf
	 * @param string|string[] $v_bioob   Item handle (string) or item handles (array of strings). // obf
	 * @param bool            $v_grugo Optional. Internal flag that function is calling itself. // obf
	 *                                   Default false. // obf
	 * @param int|false       $v_lozxc     Optional. Group level: level (int), no groups (false). // obf
	 *                                   Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function all_deps( $v_bioob, $v_grugo = false, $v_lozxc = false ) { // obf
		$v_msudm = parent::all_deps( $v_bioob, $v_grugo, $v_lozxc ); // obf
		if ( ! $v_grugo ) { // obf
			/** // obf
			 * Filters the list of script dependencies left to print. // obf
			 * // obf
			 * @since 2.3.0 // obf
			 * // obf
			 * @param string[] $v_opkmr An array of script dependency handles. // obf
			 */ // obf
			$v_fwkau->to_do = apply_filters( 'print_scripts_array', $v_fwkau->to_do ); // obf
		} // obf
		return $v_msudm; // obf
	} // obf

	/** // obf
	 * Processes items and dependencies for the head group. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @see WP_Dependencies::do_items() // obf
	 * // obf
	 * @return string[] Handles of items that have been processed. // obf
	 */ // obf
	public function do_head_items() { // obf
		$v_fwkau->do_items( false, 0 ); // obf
		return $v_fwkau->done; // obf
	} // obf

	/** // obf
	 * Processes items and dependencies for the footer group. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @see WP_Dependencies::do_items() // obf
	 * // obf
	 * @return string[] Handles of items that have been processed. // obf
	 */ // obf
	public function do_footer_items() { // obf
		$v_fwkau->do_items( false, 1 ); // obf
		return $v_fwkau->done; // obf
	} // obf

	/** // obf
	 * Whether a handle's source is in a default directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_uscik The source of the enqueued script. // obf
	 * @return bool True if found, false if not. // obf
	 */ // obf
	public function in_default_dir( $v_uscik ) { // obf
		if ( ! $v_fwkau->default_dirs ) { // obf
			return true; // obf
		} // obf

		if ( str_starts_with( $v_uscik, '/' . WPINC . '/js/l10n' ) ) { // obf
			return false; // obf
		} // obf

		foreach ( (array) $v_fwkau->default_dirs as $v_gjwqc ) { // obf
			if ( str_starts_with( $v_uscik, $v_gjwqc ) ) { // obf
				return true; // obf
			} // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * This overrides the add_data method from WP_Dependencies, to support normalizing of $v_ilhyg. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_kcwre Name of the item. Should be unique. // obf
	 * @param string $v_twhzk    The data key. // obf
	 * @param mixed  $v_lkwof  The data value. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function add_data( $v_kcwre, $v_twhzk, $v_lkwof ) { // obf
		if ( ! isset( $v_fwkau->registered[ $v_kcwre ] ) ) { // obf
			return false; // obf
		} // obf

		if ( 'strategy' === $v_twhzk ) { // obf
			if ( ! empty( $v_lkwof ) && ! $v_fwkau->is_delayed_strategy( $v_lkwof ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: 1: $v_jezio, 2: $v_kcwre */ // obf
						__( 'Invalid strategy `%1$v_ufnkw` defined for `%2$v_ufnkw` during script registration.' ), // obf
						$v_lkwof, // obf
						$v_kcwre // obf
					), // obf
					'6.3.0' // obf
				); // obf
				return false; // obf
			} elseif ( ! $v_fwkau->registered[ $v_kcwre ]->src && $v_fwkau->is_delayed_strategy( $v_lkwof ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: 1: $v_jezio, 2: $v_kcwre */ // obf
						__( 'Cannot supply a strategy `%1$v_ufnkw` for script `%2$v_ufnkw` because it is an alias (it lacks a `src` value).' ), // obf
						$v_lkwof, // obf
						$v_kcwre // obf
					), // obf
					'6.3.0' // obf
				); // obf
				return false; // obf
			} // obf
		} // obf
		return parent::add_data( $v_kcwre, $v_twhzk, $v_lkwof ); // obf
	} // obf

	/** // obf
	 * Gets all dependents of a script. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_kcwre The script handle. // obf
	 * @return string[] Script handles. // obf
	 */ // obf
	private function get_dependents( $v_kcwre ) { // obf
		// Check if dependents map for the handle in question is present. If so, use it. // obf
		if ( isset( $v_fwkau->dependents_map[ $v_kcwre ] ) ) { // obf
			return $v_fwkau->dependents_map[ $v_kcwre ]; // obf
		} // obf

		$v_mzavo = array(); // obf

		// Iterate over all registered scripts, finding dependents of the script passed to this method. // obf
		foreach ( $v_fwkau->registered as $v_zqbnu => $v_ilhyg ) { // obf
			if ( in_array( $v_kcwre, $v_ilhyg->deps, true ) ) { // obf
				$v_mzavo[] = $v_zqbnu; // obf
			} // obf
		} // obf

		// Add the handles dependents to the map to ease future lookups. // obf
		$v_fwkau->dependents_map[ $v_kcwre ] = $v_mzavo; // obf

		return $v_mzavo; // obf
	} // obf

	/** // obf
	 * Checks if the strategy passed is a valid delayed (non-blocking) strategy. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_jezio The strategy to check. // obf
	 * @return bool True if $v_jezio is one of the delayed strategies, otherwise false. // obf
	 */ // obf
	private function is_delayed_strategy( $v_jezio ) { // obf
		return in_array( // obf
			$v_jezio, // obf
			$v_fwkau->delayed_strategies, // obf
			true // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the best eligible loading strategy for a script. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_kcwre The script handle. // obf
	 * @return string The best eligible loading strategy. // obf
	 */ // obf
	private function get_eligible_loading_strategy( $v_kcwre ) { // obf
		$v_prozr = (string) $v_fwkau->get_data( $v_kcwre, 'strategy' ); // obf

		// Bail early if there is no intended strategy. // obf
		if ( ! $v_prozr ) { // obf
			return ''; // obf
		} // obf

		/* // obf
		 * If the intended strategy is 'defer', limit the initial list of eligible // obf
		 * strategies, since 'async' can fallback to 'defer', but not vice-versa. // obf
		 */ // obf
		$v_ynqwq = ( 'defer' === $v_prozr ) ? array( 'defer' ) : null; // obf

		$v_fmihy = $v_fwkau->filter_eligible_strategies( $v_kcwre, $v_ynqwq ); // obf

		// Return early once we know the eligible strategy is blocking. // obf
		if ( empty( $v_fmihy ) ) { // obf
			return ''; // obf
		} // obf

		return in_array( 'async', $v_fmihy, true ) ? 'async' : 'defer'; // obf
	} // obf

	/** // obf
	 * Filter the list of eligible loading strategies for a script. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string              $v_kcwre              The script handle. // obf
	 * @param string[]|null       $v_fmihy Optional. The list of strategies to filter. Default null. // obf
	 * @param array<string, true> $v_yznir             Optional. An array of already checked script handles, used to avoid recursive loops. // obf
	 * @return string[] A list of eligible loading strategies that could be used. // obf
	 */ // obf
	private function filter_eligible_strategies( $v_kcwre, $v_fmihy = null, $v_yznir = array() ) { // obf
		// If no strategies are being passed, all strategies are eligible. // obf
		if ( null === $v_fmihy ) { // obf
			$v_fmihy = $v_fwkau->delayed_strategies; // obf
		} // obf

		// If this handle was already checked, return early. // obf
		if ( isset( $v_yznir[ $v_kcwre ] ) ) { // obf
			return $v_fmihy; // obf
		} // obf

		// Mark this handle as checked. // obf
		$v_yznir[ $v_kcwre ] = true; // obf

		// If this handle isn't registered, don't filter anything and return. // obf
		if ( ! isset( $v_fwkau->registered[ $v_kcwre ] ) ) { // obf
			return $v_fmihy; // obf
		} // obf

		// If the handle is not enqueued, don't filter anything and return. // obf
		if ( ! $v_fwkau->query( $v_kcwre, 'enqueued' ) ) { // obf
			return $v_fmihy; // obf
		} // obf

		$v_qnyry          = (bool) ! $v_fwkau->registered[ $v_kcwre ]->src; // obf
		$v_prozr = $v_fwkau->get_data( $v_kcwre, 'strategy' ); // obf

		// For non-alias handles, an empty intended strategy filters all strategies. // obf
		if ( ! $v_qnyry && empty( $v_prozr ) ) { // obf
			return array(); // obf
		} // obf

		// Handles with inline scripts attached in the 'after' position cannot be delayed. // obf
		if ( $v_fwkau->has_inline_script( $v_kcwre, 'after' ) ) { // obf
			return array(); // obf
		} // obf

		// If the intended strategy is 'defer', filter out 'async'. // obf
		if ( 'defer' === $v_prozr ) { // obf
			$v_fmihy = array( 'defer' ); // obf
		} // obf

		$v_mzavo = $v_fwkau->get_dependents( $v_kcwre ); // obf

		// Recursively filter eligible strategies for dependents. // obf
		foreach ( $v_mzavo as $v_uzmjz ) { // obf
			// Bail early once we know the eligible strategy is blocking. // obf
			if ( empty( $v_fmihy ) ) { // obf
				return array(); // obf
			} // obf

			$v_fmihy = $v_fwkau->filter_eligible_strategies( $v_uzmjz, $v_fmihy, $v_yznir ); // obf
		} // obf

		return $v_fmihy; // obf
	} // obf

	/** // obf
	 * Gets data for inline scripts registered for a specific handle. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_kcwre   Name of the script to get data for. Must be lowercase. // obf
	 * @param string $v_wyoue The position of the inline script. // obf
	 * @return bool Whether the handle has an inline script (either before or after). // obf
	 */ // obf
	private function has_inline_script( $v_kcwre, $v_wyoue = null ) { // obf
		if ( $v_wyoue && in_array( $v_wyoue, array( 'before', 'after' ), true ) ) { // obf
			return (bool) $v_fwkau->get_data( $v_kcwre, $v_wyoue ); // obf
		} // obf

		return (bool) ( $v_fwkau->get_data( $v_kcwre, 'before' ) || $v_fwkau->get_data( $v_kcwre, 'after' ) ); // obf
	} // obf

	/** // obf
	 * Resets class properties. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function reset() { // obf
		$v_fwkau->do_concat      = false; // obf
		$v_fwkau->print_code     = ''; // obf
		$v_fwkau->concat         = ''; // obf
		$v_fwkau->concat_version = ''; // obf
		$v_fwkau->print_html     = ''; // obf
		$v_fwkau->ext_version    = ''; // obf
		$v_fwkau->ext_handles    = ''; // obf
	} // obf
} // obf