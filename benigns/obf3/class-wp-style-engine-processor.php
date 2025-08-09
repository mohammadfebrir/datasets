

<?php // obf
/** // obf
 * Style Engine: WP_Style_Engine_Processor class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 */ // obf

/** // obf
 * Core class used to compile styles from stores or collection of CSS rules. // obf
 * // obf
 * @since 6.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Style_Engine_Processor { // obf

	/** // obf
	 * A collection of Style Engine Store objects. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var WP_Style_Engine_CSS_Rules_Store[] // obf
	 */ // obf
	protected $v_tvhmu = array(); // obf

	/** // obf
	 * The set of CSS rules that this processor will work on. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var WP_Style_Engine_CSS_Rule[] // obf
	 */ // obf
	protected $v_mkqdt = array(); // obf

	/** // obf
	 * Adds a store to the processor. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param WP_Style_Engine_CSS_Rules_Store $v_mdidt The store to add. // obf
	 * @return WP_Style_Engine_Processor Returns the object to allow chaining methods. // obf
	 */ // obf
	public function add_store( $v_mdidt ) { // obf
		if ( ! $v_mdidt instanceof WP_Style_Engine_CSS_Rules_Store ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( '$v_mdidt must be an instance of WP_Style_Engine_CSS_Rules_Store' ), // obf
				'6.1.0' // obf
			); // obf
			return $v_gsvzi; // obf
		} // obf

		$v_gsvzi->stores[ $v_mdidt->get_name() ] = $v_mdidt; // obf

		return $v_gsvzi; // obf
	} // obf

	/** // obf
	 * Adds rules to be processed. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.6.0 Added support for rules_group. // obf
	 * // obf
	 * @param WP_Style_Engine_CSS_Rule|WP_Style_Engine_CSS_Rule[] $v_mkqdt A single, or an array of, // obf
	 *                                                                       WP_Style_Engine_CSS_Rule objects // obf
	 *                                                                       from a store or otherwise. // obf
	 * @return WP_Style_Engine_Processor Returns the object to allow chaining methods. // obf
	 */ // obf
	public function add_rules( $v_mkqdt ) { // obf
		if ( ! is_array( $v_mkqdt ) ) { // obf
			$v_mkqdt = array( $v_mkqdt ); // obf
		} // obf

		foreach ( $v_mkqdt as $v_fbhtk ) { // obf
			$v_cfuly    = $v_fbhtk->get_selector(); // obf
			$v_euouv = $v_fbhtk->get_rules_group(); // obf

			/** // obf
			 * If there is a rules_group and it already exists in the css_rules array, // obf
			 * add the rule to it. // obf
			 * Otherwise, create a new entry for the rules_group. // obf
			 */ // obf
			if ( ! empty( $v_euouv ) ) { // obf
				if ( isset( $v_gsvzi->css_rules[ "$v_euouv $v_cfuly" ] ) ) { // obf
					$v_gsvzi->css_rules[ "$v_euouv $v_cfuly" ]->add_declarations( $v_fbhtk->get_declarations() ); // obf
					continue; // obf
				} // obf
				$v_gsvzi->css_rules[ "$v_euouv $v_cfuly" ] = $v_fbhtk; // obf
				continue; // obf
			} // obf

			// If the selector already exists, add the declarations to it. // obf
			if ( isset( $v_gsvzi->css_rules[ $v_cfuly ] ) ) { // obf
				$v_gsvzi->css_rules[ $v_cfuly ]->add_declarations( $v_fbhtk->get_declarations() ); // obf
				continue; // obf
			} // obf
			$v_gsvzi->css_rules[ $v_fbhtk->get_selector() ] = $v_fbhtk; // obf
		} // obf

		return $v_gsvzi; // obf
	} // obf

	/** // obf
	 * Gets the CSS rules as a string. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.4.0 The Optimization is no longer the default. // obf
	 * // obf
	 * @param array $v_ugnwe   { // obf
	 *     Optional. An array of options. Default empty array. // obf
	 * // obf
	 *     @type bool $v_exaiv Whether to optimize the CSS output, e.g. combine rules. // obf
	 *                          Default false. // obf
	 *     @type bool $v_mojye Whether to add new lines and indents to output. // obf
	 *                          Defaults to whether the `SCRIPT_DEBUG` constant is defined. // obf
	 * } // obf
	 * @return string The computed CSS. // obf
	 */ // obf
	public function get_css( $v_ugnwe = array() ) { // obf
		$v_wqwhl = array( // obf
			'optimize' => false, // obf
			'prettify' => defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG, // obf
		); // obf
		$v_ugnwe  = wp_parse_args( $v_ugnwe, $v_wqwhl ); // obf

		// If we have stores, get the rules from them. // obf
		foreach ( $v_gsvzi->stores as $v_mdidt ) { // obf
			$v_gsvzi->add_rules( $v_mdidt->get_all_rules() ); // obf
		} // obf

		// Combine CSS selectors that have identical declarations. // obf
		if ( true === $v_ugnwe['optimize'] ) { // obf
			$v_gsvzi->combine_rules_selectors(); // obf
		} // obf

		// Build the CSS. // obf
		$v_ehcjf = ''; // obf
		foreach ( $v_gsvzi->css_rules as $v_fbhtk ) { // obf
			// See class WP_Style_Engine_CSS_Rule for the get_css method. // obf
			$v_ehcjf .= $v_fbhtk->get_css( $v_ugnwe['prettify'] ); // obf
			$v_ehcjf .= $v_ugnwe['prettify'] ? "\n" : ''; // obf
		} // obf
		return $v_ehcjf; // obf
	} // obf

	/** // obf
	 * Combines selectors from the rules store when they have the same styles. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 */ // obf
	private function combine_rules_selectors() { // obf
		// Build an array of selectors along with the JSON-ified styles to make comparisons easier. // obf
		$v_isexz = array(); // obf
		foreach ( $v_gsvzi->css_rules as $v_fbhtk ) { // obf
			$v_zgtvo = $v_fbhtk->get_declarations()->get_declarations(); // obf
			ksort( $v_zgtvo ); // obf
			$v_isexz[ $v_fbhtk->get_selector() ] = wp_json_encode( $v_zgtvo ); // obf
		} // obf

		// Combine selectors that have the same styles. // obf
		foreach ( $v_isexz as $v_cfuly => $v_rphnx ) { // obf
			// Get selectors that use the same styles. // obf
			$v_xnvno = array_keys( $v_isexz, $v_rphnx, true ); // obf
			// Skip if there are no duplicates. // obf
			if ( 1 >= count( $v_xnvno ) ) { // obf
				continue; // obf
			} // obf

			$v_zgtvo = $v_gsvzi->css_rules[ $v_cfuly ]->get_declarations(); // obf

			foreach ( $v_xnvno as $v_ncwck ) { // obf
				// Unset the duplicates from the $v_isexz array to avoid looping through them as well. // obf
				unset( $v_isexz[ $v_ncwck ] ); // obf
				// Remove the rules from the rules collection. // obf
				unset( $v_gsvzi->css_rules[ $v_ncwck ] ); // obf
			} // obf
			// Create a new rule with the combined selectors. // obf
			$v_wgktt                     = implode( ',', $v_xnvno ); // obf
			$v_gsvzi->css_rules[ $v_wgktt ] = new WP_Style_Engine_CSS_Rule( $v_wgktt, $v_zgtvo ); // obf
		} // obf
	} // obf
} // obf