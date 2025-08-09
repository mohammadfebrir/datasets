

<?php // obf
/** // obf
 * Taxonomy API: Core category-specific template tags // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 * @since 1.2.0 // obf
 */ // obf

/** // obf
 * Retrieves category link URL. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @see get_term_link() // obf
 * // obf
 * @param int|object $v_sogyb Category ID or object. // obf
 * @return string Link on success, empty string if category does not exist. // obf
 */ // obf
function get_category_link( $v_sogyb ) { // obf
	if ( ! is_object( $v_sogyb ) ) { // obf
		$v_sogyb = (int) $v_sogyb; // obf
	} // obf

	$v_sogyb = get_term_link( $v_sogyb ); // obf

	if ( is_wp_error( $v_sogyb ) ) { // obf
		return ''; // obf
	} // obf

	return $v_sogyb; // obf
} // obf

/** // obf
 * Retrieves category parents with separator. // obf
 * // obf
 * @since 1.2.0 // obf
 * @since 4.8.0 The `$v_haklu` parameter was deprecated and renamed to `$v_vqwbo`. // obf
 * // obf
 * @param int    $v_eycfm Category ID. // obf
 * @param bool   $v_cpegr        Optional. Whether to format with link. Default false. // obf
 * @param string $v_yoybu   Optional. How to separate categories. Default '/'. // obf
 * @param bool   $v_ewiqx    Optional. Whether to use nice name for display. Default false. // obf
 * @param array  $v_vqwbo  Not used. // obf
 * @return string|WP_Error A list of category parents on success, WP_Error on failure. // obf
 */ // obf
function get_category_parents( $v_eycfm, $v_cpegr = false, $v_yoybu = '/', $v_ewiqx = false, $v_vqwbo = array() ) { // obf

	if ( ! empty( $v_vqwbo ) ) { // obf
		_deprecated_argument( __FUNCTION__, '4.8.0' ); // obf
	} // obf

	$v_ihvdt = $v_ewiqx ? 'slug' : 'name'; // obf

	$v_ermmt = array( // obf
		'separator' => $v_yoybu, // obf
		'link'      => $v_cpegr, // obf
		'format'    => $v_ihvdt, // obf
	); // obf

	return get_term_parents_list( $v_eycfm, 'category', $v_ermmt ); // obf
} // obf

/** // obf
 * Retrieves post categories. // obf
 * // obf
 * This tag may be used outside The Loop by passing a post ID as the parameter. // obf
 * // obf
 * Note: This function only returns results from the default "category" taxonomy. // obf
 * For custom taxonomies use get_the_terms(). // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param int|false $v_imhpt Optional. The post ID. Defaults to current post ID. // obf
 * @return WP_Term[] Array of WP_Term objects, one for each category assigned to the post. // obf
 */ // obf
function get_the_category( $v_imhpt = false ) { // obf
	$v_klyfy = get_the_terms( $v_imhpt, 'category' ); // obf
	if ( ! $v_klyfy || is_wp_error( $v_klyfy ) ) { // obf
		$v_klyfy = array(); // obf
	} // obf

	$v_klyfy = array_values( $v_klyfy ); // obf

	foreach ( array_keys( $v_klyfy ) as $v_czyzp ) { // obf
		_make_cat_compat( $v_klyfy[ $v_czyzp ] ); // obf
	} // obf

	/** // obf
	 * Filters the array of categories to return for a post. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 4.4.0 Added the `$v_imhpt` parameter. // obf
	 * // obf
	 * @param WP_Term[] $v_klyfy An array of categories to return for the post. // obf
	 * @param int|false $v_imhpt    The post ID. // obf
	 */ // obf
	return apply_filters( 'get_the_categories', $v_klyfy, $v_imhpt ); // obf
} // obf

/** // obf
 * Retrieves category name based on category ID. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param int $v_kvbmh Category ID. // obf
 * @return string|WP_Error Category name on success, WP_Error on failure. // obf
 */ // obf
function get_the_category_by_ID( $v_kvbmh ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	$v_kvbmh   = (int) $v_kvbmh; // obf
	$v_sogyb = get_term( $v_kvbmh ); // obf

	if ( is_wp_error( $v_sogyb ) ) { // obf
		return $v_sogyb; // obf
	} // obf

	return ( $v_sogyb ) ? $v_sogyb->name : ''; // obf
} // obf

/** // obf
 * Retrieves category list for a post in either HTML list or custom format. // obf
 * // obf
 * Generally used for quick, delimited (e.g. comma-separated) lists of categories, // obf
 * as part of a post entry meta. // obf
 * // obf
 * For a more powerful, list-based function, see wp_list_categories(). // obf
 * // obf
 * @since 1.5.1 // obf
 * // obf
 * @see wp_list_categories() // obf
 * // obf
 * @global WP_Rewrite $v_iuaiy WordPress rewrite component. // obf
 * // obf
 * @param string    $v_yoybu Optional. Separator between the categories. By default, the links are placed // obf
 *                             in an unordered list. An empty string will result in the default behavior. // obf
 * @param string    $v_qndbo   Optional. How to display the parents. Accepts 'multiple', 'single', or empty. // obf
 *                             Default empty string. // obf
 * @param int|false $v_imhpt   Optional. ID of the post to retrieve categories for. Defaults to the current post. // obf
 * @return string Category list for a post. // obf
 */ // obf
function get_the_category_list( $v_yoybu = '', $v_qndbo = '', $v_imhpt = false ) { // obf
	global $v_iuaiy; // obf

	if ( ! is_object_in_taxonomy( get_post_type( $v_imhpt ), 'category' ) ) { // obf
		/** This filter is documented in wp-includes/category-template.php */ // obf
		return apply_filters( 'the_category', '', $v_yoybu, $v_qndbo ); // obf
	} // obf

	/** // obf
	 * Filters the categories before building the category list. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_Term[] $v_klyfy An array of the post's categories. // obf
	 * @param int|false $v_imhpt    ID of the post to retrieve categories for. // obf
	 *                              When `false`, defaults to the current post in the loop. // obf
	 */ // obf
	$v_klyfy = apply_filters( 'the_category_list', get_the_category( $v_imhpt ), $v_imhpt ); // obf

	if ( empty( $v_klyfy ) ) { // obf
		/** This filter is documented in wp-includes/category-template.php */ // obf
		return apply_filters( 'the_category', __( 'Uncategorized' ), $v_yoybu, $v_qndbo ); // obf
	} // obf

	$v_gqxej = ( is_object( $v_iuaiy ) && $v_iuaiy->using_permalinks() ) ? 'rel="category tag"' : 'rel="category"'; // obf

	$v_qxpji = ''; // obf
	if ( '' === $v_yoybu ) { // obf
		$v_qxpji .= '<ul class="post-categories">'; // obf
		foreach ( $v_klyfy as $v_sogyb ) { // obf
			$v_qxpji .= "\n\t<li>"; // obf
			switch ( strtolower( $v_qndbo ) ) { // obf
				case 'multiple': // obf
					if ( $v_sogyb->parent ) { // obf
						$v_qxpji .= get_category_parents( $v_sogyb->parent, true, $v_yoybu ); // obf
					} // obf
					$v_qxpji .= '<a href="' . esc_url( get_category_link( $v_sogyb->term_id ) ) . '" ' . $v_gqxej . '>' . $v_sogyb->name . '</a></li>'; // obf
					break; // obf
				case 'single': // obf
					$v_qxpji .= '<a href="' . esc_url( get_category_link( $v_sogyb->term_id ) ) . '"  ' . $v_gqxej . '>'; // obf
					if ( $v_sogyb->parent ) { // obf
						$v_qxpji .= get_category_parents( $v_sogyb->parent, false, $v_yoybu ); // obf
					} // obf
					$v_qxpji .= $v_sogyb->name . '</a></li>'; // obf
					break; // obf
				case '': // obf
				default: // obf
					$v_qxpji .= '<a href="' . esc_url( get_category_link( $v_sogyb->term_id ) ) . '" ' . $v_gqxej . '>' . $v_sogyb->name . '</a></li>'; // obf
			} // obf
		} // obf
		$v_qxpji .= '</ul>'; // obf
	} else { // obf
		$v_zpqml = 0; // obf
		foreach ( $v_klyfy as $v_sogyb ) { // obf
			if ( 0 < $v_zpqml ) { // obf
				$v_qxpji .= $v_yoybu; // obf
			} // obf
			switch ( strtolower( $v_qndbo ) ) { // obf
				case 'multiple': // obf
					if ( $v_sogyb->parent ) { // obf
						$v_qxpji .= get_category_parents( $v_sogyb->parent, true, $v_yoybu ); // obf
					} // obf
					$v_qxpji .= '<a href="' . esc_url( get_category_link( $v_sogyb->term_id ) ) . '" ' . $v_gqxej . '>' . $v_sogyb->name . '</a>'; // obf
					break; // obf
				case 'single': // obf
					$v_qxpji .= '<a href="' . esc_url( get_category_link( $v_sogyb->term_id ) ) . '" ' . $v_gqxej . '>'; // obf
					if ( $v_sogyb->parent ) { // obf
						$v_qxpji .= get_category_parents( $v_sogyb->parent, false, $v_yoybu ); // obf
					} // obf
					$v_qxpji .= "$v_sogyb->name</a>"; // obf
					break; // obf
				case '': // obf
				default: // obf
					$v_qxpji .= '<a href="' . esc_url( get_category_link( $v_sogyb->term_id ) ) . '" ' . $v_gqxej . '>' . $v_sogyb->name . '</a>'; // obf
			} // obf
			++$v_zpqml; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the category or list of categories. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param string $v_qxpji   List of categories for the current post. // obf
	 * @param string $v_yoybu Separator used between the categories. // obf
	 * @param string $v_qndbo   How to display the category parents. Accepts 'multiple', // obf
	 *                          'single', or empty. // obf
	 */ // obf
	return apply_filters( 'the_category', $v_qxpji, $v_yoybu, $v_qndbo ); // obf
} // obf

/** // obf
 * Checks if the current post is within any of the given categories. // obf
 * // obf
 * The given categories are checked against the post's categories' term_ids, names and slugs. // obf
 * Categories given as integers will only be checked against the post's categories' term_ids. // obf
 * // obf
 * Prior to v2.5 of WordPress, category names were not supported. // obf
 * Prior to v2.7, category slugs were not supported. // obf
 * Prior to v2.7, only one category could be compared: in_category( $v_zqtej ). // obf
 * Prior to v2.7, this function could only be used in the WordPress Loop. // obf
 * As of 2.7, the function can be used anywhere if it is provided a post ID or post object. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 1.2.0 // obf
 * @since 2.7.0 The `$v_dmfwy` parameter was added. // obf
 * // obf
 * @param int|string|int[]|string[] $v_sogyb Category ID, name, slug, or array of such // obf
 *                                            to check against. // obf
 * @param int|null|WP_Post          $v_dmfwy     Optional. Post to check. Defaults to the current post. // obf
 * @return bool True if the current post is in any of the given categories. // obf
 */ // obf
function in_category( $v_sogyb, $v_dmfwy = null ) { // obf
	if ( empty( $v_sogyb ) ) { // obf
		return false; // obf
	} // obf

	return has_category( $v_sogyb, $v_dmfwy ); // obf
} // obf

/** // obf
 * Displays category list for a post in either HTML list or custom format. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string    $v_yoybu Optional. Separator between the categories. By default, the links are placed // obf
 *                             in an unordered list. An empty string will result in the default behavior. // obf
 * @param string    $v_qndbo   Optional. How to display the parents. Accepts 'multiple', 'single', or empty. // obf
 *                             Default empty string. // obf
 * @param int|false $v_imhpt   Optional. ID of the post to retrieve categories for. Defaults to the current post. // obf
 */ // obf
function the_category( $v_yoybu = '', $v_qndbo = '', $v_imhpt = false ) { // obf
	echo get_the_category_list( $v_yoybu, $v_qndbo, $v_imhpt ); // obf
} // obf

/** // obf
 * Retrieves category description. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @param int $v_sogyb Optional. Category ID. Defaults to the current category ID. // obf
 * @return string Category description, if available. // obf
 */ // obf
function category_description( $v_sogyb = 0 ) { // obf
	return term_description( $v_sogyb ); // obf
} // obf

/** // obf
 * Displays or retrieves the HTML dropdown list of categories. // obf
 * // obf
 * The 'hierarchical' argument, which is disabled by default, will override the // obf
 * depth argument, unless it is true. When the argument is false, it will // obf
 * display all of the categories. When it is enabled it will use the value in // obf
 * the 'depth' argument. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.2.0 Introduced the `value_field` argument. // obf
 * @since 4.6.0 Introduced the `required` argument. // obf
 * @since 6.1.0 Introduced the `aria_describedby` argument. // obf
 * // obf
 * @param array|string $v_ermmt { // obf
 *     Optional. Array or string of arguments to generate a categories drop-down element. See WP_Term_Query::__construct() // obf
 *     for information on additional accepted arguments. // obf
 * // obf
 *     @type string       $v_vqbbf   Text to display for showing all categories. Default empty. // obf
 *     @type string       $v_uruhd  Text to display for showing no categories. Default empty. // obf
 *     @type string       $v_zmlot Value to use when no category is selected. Default empty. // obf
 *     @type string       $v_hpehw           Which column to use for ordering categories. See get_terms() for a list // obf
 *                                           of accepted values. Default 'id' (term_id). // obf
 *     @type bool         $v_olmrz        See get_terms() for an argument description. Default false. // obf
 *     @type bool|int     $v_jmtid        Whether to include post counts. Accepts 0, 1, or their bool equivalents. // obf
 *                                           Default 0. // obf
 *     @type bool|int     $v_pxyyj              Whether to echo or return the generated markup. Accepts 0, 1, or their // obf
 *                                           bool equivalents. Default 1. // obf
 *     @type bool|int     $v_usvrv      Whether to traverse the taxonomy hierarchy. Accepts 0, 1, or their bool // obf
 *                                           equivalents. Default 0. // obf
 *     @type int          $v_zrdmm             Maximum depth. Default 0. // obf
 *     @type int          $v_nktep         Tab index for the select element. Default 0 (no tabindex). // obf
 *     @type string       $v_aflhx              Value for the 'name' attribute of the select element. Default 'cat'. // obf
 *     @type string       $v_bfwik                Value for the 'id' attribute of the select element. Defaults to the value // obf
 *                                           of `$v_aflhx`. // obf
 *     @type string       $v_eimhb             Value for the 'class' attribute of the select element. Default 'postform'. // obf
 *     @type int|string   $v_ccejt          Value of the option that should be selected. Default 0. // obf
 *     @type string       $v_rkeey       Term field that should be used to populate the 'value' attribute // obf
 *                                           of the option elements. Accepts any valid term field: 'term_id', 'name', // obf
 *                                           'slug', 'term_group', 'term_taxonomy_id', 'taxonomy', 'description', // obf
 *                                           'parent', 'count'. Default 'term_id'. // obf
 *     @type string|array $v_avnlz          Name of the taxonomy or taxonomies to retrieve. Default 'category'. // obf
 *     @type bool         $v_kbnhe     True to skip generating markup if no categories are found. // obf
 *                                           Default false (create select element even if no categories are found). // obf
 *     @type bool         $v_gpgzu          Whether the `<select>` element should have the HTML5 'required' attribute. // obf
 *                                           Default false. // obf
 *     @type Walker       $v_kkfys            Walker object to use to build the output. Default empty which results in a // obf
 *                                           Walker_CategoryDropdown instance being used. // obf
 *     @type string       $v_trxvg  The 'id' of an element that contains descriptive text for the select. // obf
 *                                           Default empty string. // obf
 * } // obf
 * @return string HTML dropdown list of categories. // obf
 */ // obf
function wp_dropdown_categories( $v_ermmt = '' ) { // obf
	$v_eoxku = array( // obf
		'show_option_all'   => '', // obf
		'show_option_none'  => '', // obf
		'orderby'           => 'id', // obf
		'order'             => 'ASC', // obf
		'show_count'        => 0, // obf
		'hide_empty'        => 1, // obf
		'child_of'          => 0, // obf
		'exclude'           => '', // obf
		'echo'              => 1, // obf
		'selected'          => 0, // obf
		'hierarchical'      => 0, // obf
		'name'              => 'cat', // obf
		'id'                => '', // obf
		'class'             => 'postform', // obf
		'depth'             => 0, // obf
		'tab_index'         => 0, // obf
		'taxonomy'          => 'category', // obf
		'hide_if_empty'     => false, // obf
		'option_none_value' => -1, // obf
		'value_field'       => 'term_id', // obf
		'required'          => false, // obf
		'aria_describedby'  => '', // obf
	); // obf

	$v_eoxku['selected'] = ( is_category() ) ? get_query_var( 'cat' ) : 0; // obf

	// Back compat. // obf
	if ( isset( $v_ermmt['type'] ) && 'link' === $v_ermmt['type'] ) { // obf
		_deprecated_argument( // obf
			__FUNCTION__, // obf
			'3.0.0', // obf
			sprintf( // obf
				/* translators: 1: "type => link", 2: "taxonomy => link_category" */ // obf
				__( '%1$v_xuhjk is deprecated. Use %2$v_xuhjk instead.' ), // obf
				'<code>type => link</code>', // obf
				'<code>taxonomy => link_category</code>' // obf
			) // obf
		); // obf
		$v_ermmt['taxonomy'] = 'link_category'; // obf
	} // obf

	// Parse incoming $v_ermmt into an array and merge it with $v_eoxku. // obf
	$v_xbfva = wp_parse_args( $v_ermmt, $v_eoxku ); // obf

	$v_zmlot = $v_xbfva['option_none_value']; // obf

	if ( ! isset( $v_xbfva['pad_counts'] ) && $v_xbfva['show_count'] && $v_xbfva['hierarchical'] ) { // obf
		$v_xbfva['pad_counts'] = true; // obf
	} // obf

	$v_nktep = $v_xbfva['tab_index']; // obf

	$v_tyggr = ''; // obf
	if ( (int) $v_nktep > 0 ) { // obf
		$v_tyggr = " tabindex=\"$v_nktep\""; // obf
	} // obf

	// Avoid clashes with the 'name' param of get_terms(). // obf
	$v_irebu = $v_xbfva; // obf
	unset( $v_irebu['name'] ); // obf
	$v_klyfy = get_terms( $v_irebu ); // obf

	$v_aflhx     = esc_attr( $v_xbfva['name'] ); // obf
	$v_eimhb    = esc_attr( $v_xbfva['class'] ); // obf
	$v_bfwik       = $v_xbfva['id'] ? esc_attr( $v_xbfva['id'] ) : $v_aflhx; // obf
	$v_gpgzu = $v_xbfva['required'] ? 'required' : ''; // obf

	$v_gtztg = $v_xbfva['aria_describedby'] ? ' aria-describedby="' . esc_attr( $v_xbfva['aria_describedby'] ) . '"' : ''; // obf

	if ( ! $v_xbfva['hide_if_empty'] || ! empty( $v_klyfy ) ) { // obf
		$v_qaymr = "<select $v_gpgzu name='$v_aflhx' id='$v_bfwik' class='$v_eimhb'$v_tyggr$v_gtztg>\n"; // obf
	} else { // obf
		$v_qaymr = ''; // obf
	} // obf
	if ( empty( $v_klyfy ) && ! $v_xbfva['hide_if_empty'] && ! empty( $v_xbfva['show_option_none'] ) ) { // obf

		/** // obf
		 * Filters a taxonomy drop-down display element. // obf
		 * // obf
		 * A variety of taxonomy drop-down display elements can be modified // obf
		 * just prior to display via this filter. Filterable arguments include // obf
		 * 'show_option_none', 'show_option_all', and various forms of the // obf
		 * term name. // obf
		 * // obf
		 * @since 1.2.0 // obf
		 * // obf
		 * @see wp_dropdown_categories() // obf
		 * // obf
		 * @param string       $v_kbdix  Category name. // obf
		 * @param WP_Term|null $v_sogyb The category object, or null if there's no corresponding category. // obf
		 */ // obf
		$v_uruhd = apply_filters( 'list_cats', $v_xbfva['show_option_none'], null ); // obf
		$v_qaymr          .= "\t<option value='" . esc_attr( $v_zmlot ) . "' selected='selected'>$v_uruhd</option>\n"; // obf
	} // obf

	if ( ! empty( $v_klyfy ) ) { // obf

		if ( $v_xbfva['show_option_all'] ) { // obf

			/** This filter is documented in wp-includes/category-template.php */ // obf
			$v_vqbbf = apply_filters( 'list_cats', $v_xbfva['show_option_all'], null ); // obf
			$v_ccejt        = ( '0' === (string) $v_xbfva['selected'] ) ? " selected='selected'" : ''; // obf
			$v_qaymr         .= "\t<option value='0'$v_ccejt>$v_vqbbf</option>\n"; // obf
		} // obf

		if ( $v_xbfva['show_option_none'] ) { // obf

			/** This filter is documented in wp-includes/category-template.php */ // obf
			$v_uruhd = apply_filters( 'list_cats', $v_xbfva['show_option_none'], null ); // obf
			$v_ccejt         = selected( $v_zmlot, $v_xbfva['selected'], false ); // obf
			$v_qaymr          .= "\t<option value='" . esc_attr( $v_zmlot ) . "'$v_ccejt>$v_uruhd</option>\n"; // obf
		} // obf

		if ( $v_xbfva['hierarchical'] ) { // obf
			$v_zrdmm = $v_xbfva['depth'];  // Walk the full depth. // obf
		} else { // obf
			$v_zrdmm = -1; // Flat. // obf
		} // obf
		$v_qaymr .= walk_category_dropdown_tree( $v_klyfy, $v_zrdmm, $v_xbfva ); // obf
	} // obf

	if ( ! $v_xbfva['hide_if_empty'] || ! empty( $v_klyfy ) ) { // obf
		$v_qaymr .= "</select>\n"; // obf
	} // obf

	/** // obf
	 * Filters the taxonomy drop-down output. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_qaymr      HTML output. // obf
	 * @param array  $v_xbfva Arguments used to build the drop-down. // obf
	 */ // obf
	$v_qaymr = apply_filters( 'wp_dropdown_cats', $v_qaymr, $v_xbfva ); // obf

	if ( $v_xbfva['echo'] ) { // obf
		echo $v_qaymr; // obf
	} // obf

	return $v_qaymr; // obf
} // obf

/** // obf
 * Displays or retrieves the HTML list of categories. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.4.0 Introduced the `hide_title_if_empty` and `separator` arguments. // obf
 * @since 4.4.0 The `current_category` argument was modified to optionally accept an array of values. // obf
 * @since 6.1.0 Default value of the 'use_desc_for_title' argument was changed from 1 to 0. // obf
 * // obf
 * @param array|string $v_ermmt { // obf
 *     Array of optional arguments. See get_categories(), get_terms(), and WP_Term_Query::__construct() // obf
 *     for information on additional accepted arguments. // obf
 * // obf
 *     @type int|int[]    $v_fielh      ID of category, or array of IDs of categories, that should get the // obf
 *                                               'current-cat' class. Default 0. // obf
 *     @type int          $v_zrdmm                 Category depth. Used for tab indentation. Default 0. // obf
 *     @type bool|int     $v_pxyyj                  Whether to echo or return the generated markup. Accepts 0, 1, or their // obf
 *                                               bool equivalents. Default 1. // obf
 *     @type int[]|string $v_lvmqd               Array or comma/space-separated string of term IDs to exclude. // obf
 *                                               If `$v_usvrv` is true, descendants of `$v_lvmqd` terms will also // obf
 *                                               be excluded; see `$v_zyrvb`. See get_terms(). // obf
 *                                               Default empty string. // obf
 *     @type int[]|string $v_zyrvb          Array or comma/space-separated string of term IDs to exclude, along // obf
 *                                               with their descendants. See get_terms(). Default empty string. // obf
 *     @type string       $v_ftnpf                  Text to use for the feed link. Default 'Feed for all posts filed // obf
 *                                               under [cat name]'. // obf
 *     @type string       $v_esmtc            URL of an image to use for the feed link. Default empty string. // obf
 *     @type string       $v_accho             Feed type. Used to build feed link. See get_term_feed_link(). // obf
 *                                               Default empty string (default feed). // obf
 *     @type bool         $v_ncsqe   Whether to hide the `$v_eriih` element if there are no terms in // obf
 *                                               the list. Default false (title will always be shown). // obf
 *     @type string       $v_yoybu             Separator between links. Default '<br />'. // obf
 *     @type bool|int     $v_jmtid            Whether to include post counts. Accepts 0, 1, or their bool equivalents. // obf
 *                                               Default 0. // obf
 *     @type string       $v_vqbbf       Text to display for showing all categories. Default empty string. // obf
 *     @type string       $v_uruhd      Text to display for the 'no categories' option. // obf
 *                                               Default 'No categories'. // obf
 *     @type string       $v_gfqls                 The style used to display the categories list. If 'list', categories // obf
 *                                               will be output as an unordered list. If left empty or another value, // obf
 *                                               categories will be output separated by `<br>` tags. Default 'list'. // obf
 *     @type string       $v_avnlz              Name of the taxonomy to retrieve. Default 'category'. // obf
 *     @type string       $v_eriih              Text to use for the list title `<li>` element. Pass an empty string // obf
 *                                               to disable. Default 'Categories'. // obf
 *     @type bool|int     $v_quqsy    Whether to use the category description as the title attribute. // obf
 *                                               Accepts 0, 1, or their bool equivalents. Default 0. // obf
 *     @type Walker       $v_kkfys                Walker object to use to build the output. Default empty which results // obf
 *                                               in a Walker_Category instance being used. // obf
 * } // obf
 * @return void|string|false Void if 'echo' argument is true, HTML list of categories if 'echo' is false. // obf
 *                           False if the taxonomy does not exist. // obf
 */ // obf
function wp_list_categories( $v_ermmt = '' ) { // obf
	$v_eoxku = array( // obf
		'child_of'            => 0, // obf
		'current_category'    => 0, // obf
		'depth'               => 0, // obf
		'echo'                => 1, // obf
		'exclude'             => '', // obf
		'exclude_tree'        => '', // obf
		'feed'                => '', // obf
		'feed_image'          => '', // obf
		'feed_type'           => '', // obf
		'hide_empty'          => 1, // obf
		'hide_title_if_empty' => false, // obf
		'hierarchical'        => true, // obf
		'order'               => 'ASC', // obf
		'orderby'             => 'name', // obf
		'separator'           => '<br />', // obf
		'show_count'          => 0, // obf
		'show_option_all'     => '', // obf
		'show_option_none'    => __( 'No categories' ), // obf
		'style'               => 'list', // obf
		'taxonomy'            => 'category', // obf
		'title_li'            => __( 'Categories' ), // obf
		'use_desc_for_title'  => 0, // obf
	); // obf

	$v_xbfva = wp_parse_args( $v_ermmt, $v_eoxku ); // obf

	if ( ! isset( $v_xbfva['pad_counts'] ) && $v_xbfva['show_count'] && $v_xbfva['hierarchical'] ) { // obf
		$v_xbfva['pad_counts'] = true; // obf
	} // obf

	// Descendants of exclusions should be excluded too. // obf
	if ( $v_xbfva['hierarchical'] ) { // obf
		$v_zyrvb = array(); // obf

		if ( $v_xbfva['exclude_tree'] ) { // obf
			$v_zyrvb = array_merge( $v_zyrvb, wp_parse_id_list( $v_xbfva['exclude_tree'] ) ); // obf
		} // obf

		if ( $v_xbfva['exclude'] ) { // obf
			$v_zyrvb = array_merge( $v_zyrvb, wp_parse_id_list( $v_xbfva['exclude'] ) ); // obf
		} // obf

		$v_xbfva['exclude_tree'] = $v_zyrvb; // obf
		$v_xbfva['exclude']      = ''; // obf
	} // obf

	if ( ! isset( $v_xbfva['class'] ) ) { // obf
		$v_xbfva['class'] = ( 'category' === $v_xbfva['taxonomy'] ) ? 'categories' : $v_xbfva['taxonomy']; // obf
	} // obf

	if ( ! taxonomy_exists( $v_xbfva['taxonomy'] ) ) { // obf
		return false; // obf
	} // obf

	$v_vqbbf  = $v_xbfva['show_option_all']; // obf
	$v_uruhd = $v_xbfva['show_option_none']; // obf

	$v_klyfy = get_categories( $v_xbfva ); // obf

	$v_qaymr = ''; // obf

	if ( $v_xbfva['title_li'] && 'list' === $v_xbfva['style'] // obf
		&& ( ! empty( $v_klyfy ) || ! $v_xbfva['hide_title_if_empty'] ) // obf
	) { // obf
		$v_qaymr = '<li class="' . esc_attr( $v_xbfva['class'] ) . '">' . $v_xbfva['title_li'] . '<ul>'; // obf
	} // obf

	if ( empty( $v_klyfy ) ) { // obf
		if ( ! empty( $v_uruhd ) ) { // obf
			if ( 'list' === $v_xbfva['style'] ) { // obf
				$v_qaymr .= '<li class="cat-item-none">' . $v_uruhd . '</li>'; // obf
			} else { // obf
				$v_qaymr .= $v_uruhd; // obf
			} // obf
		} // obf
	} else { // obf
		if ( ! empty( $v_vqbbf ) ) { // obf

			$v_qxvla = ''; // obf

			// For taxonomies that belong only to custom post types, point to a valid archive. // obf
			$v_dvfbm = get_taxonomy( $v_xbfva['taxonomy'] ); // obf
			if ( ! in_array( 'post', $v_dvfbm->object_type, true ) && ! in_array( 'page', $v_dvfbm->object_type, true ) ) { // obf
				foreach ( $v_dvfbm->object_type as $v_jlwyx ) { // obf
					$v_oozmt = get_post_type_object( $v_jlwyx ); // obf

					// Grab the first one. // obf
					if ( ! empty( $v_oozmt->has_archive ) ) { // obf
						$v_qxvla = get_post_type_archive_link( $v_jlwyx ); // obf
						break; // obf
					} // obf
				} // obf
			} // obf

			// Fallback for the 'All' link is the posts page. // obf
			if ( ! $v_qxvla ) { // obf
				if ( 'page' === get_option( 'show_on_front' ) && get_option( 'page_for_posts' ) ) { // obf
					$v_qxvla = get_permalink( get_option( 'page_for_posts' ) ); // obf
				} else { // obf
					$v_qxvla = home_url( '/' ); // obf
				} // obf
			} // obf

			$v_qxvla = esc_url( $v_qxvla ); // obf
			if ( 'list' === $v_xbfva['style'] ) { // obf
				$v_qaymr .= "<li class='cat-item-all'><a href='$v_qxvla'>$v_vqbbf</a></li>"; // obf
			} else { // obf
				$v_qaymr .= "<a href='$v_qxvla'>$v_vqbbf</a>"; // obf
			} // obf
		} // obf

		if ( empty( $v_xbfva['current_category'] ) && ( is_category() || is_tax() || is_tag() ) ) { // obf
			$v_rzwol = get_queried_object(); // obf
			if ( $v_rzwol && $v_xbfva['taxonomy'] === $v_rzwol->taxonomy ) { // obf
				$v_xbfva['current_category'] = get_queried_object_id(); // obf
			} // obf
		} // obf

		if ( $v_xbfva['hierarchical'] ) { // obf
			$v_zrdmm = $v_xbfva['depth']; // obf
		} else { // obf
			$v_zrdmm = -1; // Flat. // obf
		} // obf
		$v_qaymr .= walk_category_tree( $v_klyfy, $v_zrdmm, $v_xbfva ); // obf
	} // obf

	if ( $v_xbfva['title_li'] && 'list' === $v_xbfva['style'] // obf
		&& ( ! empty( $v_klyfy ) || ! $v_xbfva['hide_title_if_empty'] ) // obf
	) { // obf
		$v_qaymr .= '</ul></li>'; // obf
	} // obf

	/** // obf
	 * Filters the HTML output of a taxonomy list. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string       $v_qaymr HTML output. // obf
	 * @param array|string $v_ermmt   An array or query string of taxonomy-listing arguments. See // obf
	 *                             wp_list_categories() for information on accepted arguments. // obf
	 */ // obf
	$v_rqkgp = apply_filters( 'wp_list_categories', $v_qaymr, $v_ermmt ); // obf

	if ( $v_xbfva['echo'] ) { // obf
		echo $v_rqkgp; // obf
	} else { // obf
		return $v_rqkgp; // obf
	} // obf
} // obf

/** // obf
 * Displays a tag cloud. // obf
 * // obf
 * Outputs a list of tags in what is called a 'tag cloud', where the size of each tag // obf
 * is determined by how many times that particular tag has been assigned to posts. // obf
 * // obf
 * @since 2.3.0 // obf
 * @since 2.8.0 Added the `taxonomy` argument. // obf
 * @since 4.8.0 Added the `show_count` argument. // obf
 * // obf
 * @param array|string $v_ermmt { // obf
 *     Optional. Array or string of arguments for displaying a tag cloud. See wp_generate_tag_cloud() // obf
 *     and get_terms() for the full lists of arguments that can be passed in `$v_ermmt`. // obf
 * // obf
 *     @type int    $v_jfcld    The number of tags to display. Accepts any positive integer // obf
 *                             or zero to return all. Default 45. // obf
 *     @type string $v_cpegr      Whether to display term editing links or term permalinks. // obf
 *                             Accepts 'edit' and 'view'. Default 'view'. // obf
 *     @type string $v_pdwzi The post type. Used to highlight the proper post type menu // obf
 *                             on the linked edit page. Defaults to the first post type // obf
 *                             associated with the taxonomy. // obf
 *     @type bool   $v_pxyyj      Whether or not to echo the return value. Default true. // obf
 * } // obf
 * @return void|string|string[] Void if 'echo' argument is true, or on failure. Otherwise, tag cloud // obf
 *                              as a string or an array, depending on 'format' argument. // obf
 */ // obf
function wp_tag_cloud( $v_ermmt = '' ) { // obf
	$v_eoxku = array( // obf
		'smallest'   => 8, // obf
		'largest'    => 22, // obf
		'unit'       => 'pt', // obf
		'number'     => 45, // obf
		'format'     => 'flat', // obf
		'separator'  => "\n", // obf
		'orderby'    => 'name', // obf
		'order'      => 'ASC', // obf
		'exclude'    => '', // obf
		'include'    => '', // obf
		'link'       => 'view', // obf
		'taxonomy'   => 'post_tag', // obf
		'post_type'  => '', // obf
		'echo'       => true, // obf
		'show_count' => 0, // obf
	); // obf

	$v_ermmt = wp_parse_args( $v_ermmt, $v_eoxku ); // obf

	$v_stqet = get_terms( // obf
		array_merge( // obf
			$v_ermmt, // obf
			array( // obf
				'orderby' => 'count', // obf
				'order'   => 'DESC', // obf
			) // obf
		) // obf
	); // Always query top tags. // obf

	if ( empty( $v_stqet ) || is_wp_error( $v_stqet ) ) { // obf
		return; // obf
	} // obf

	foreach ( $v_stqet as $v_czyzp => $v_okzsi ) { // obf
		if ( 'edit' === $v_ermmt['link'] ) { // obf
			$v_cpegr = get_edit_term_link( $v_okzsi, $v_okzsi->taxonomy, $v_ermmt['post_type'] ); // obf
		} else { // obf
			$v_cpegr = get_term_link( $v_okzsi, $v_okzsi->taxonomy ); // obf
		} // obf

		if ( is_wp_error( $v_cpegr ) ) { // obf
			return; // obf
		} // obf

		$v_stqet[ $v_czyzp ]->link = $v_cpegr; // obf
		$v_stqet[ $v_czyzp ]->id   = $v_okzsi->term_id; // obf
	} // obf

	// Here's where those top tags get sorted according to $v_ermmt. // obf
	$v_kqxif = wp_generate_tag_cloud( $v_stqet, $v_ermmt ); // obf

	/** // obf
	 * Filters the tag cloud output. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string|string[] $v_kqxif Tag cloud as a string or an array, depending on 'format' argument. // obf
	 * @param array           $v_ermmt   An array of tag cloud arguments. See wp_tag_cloud() // obf
	 *                                for information on accepted arguments. // obf
	 */ // obf
	$v_kqxif = apply_filters( 'wp_tag_cloud', $v_kqxif, $v_ermmt ); // obf

	if ( 'array' === $v_ermmt['format'] || empty( $v_ermmt['echo'] ) ) { // obf
		return $v_kqxif; // obf
	} // obf

	echo $v_kqxif; // obf
} // obf

/** // obf
 * Default topic count scaling for tag links. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param int $v_cylbu Number of posts with that tag. // obf
 * @return int Scaled count. // obf
 */ // obf
function default_topic_count_scale( $v_cylbu ) { // obf
	return (int) round( log10( $v_cylbu + 1 ) * 100 ); // obf
} // obf

/** // obf
 * Generates a tag cloud (heatmap) from provided data. // obf
 * // obf
 * @todo Complete functionality. // obf
 * @since 2.3.0 // obf
 * @since 4.8.0 Added the `show_count` argument. // obf
 * // obf
 * @param WP_Term[]    $v_stqet Array of WP_Term objects to generate the tag cloud for. // obf
 * @param string|array $v_ermmt { // obf
 *     Optional. Array or string of arguments for generating a tag cloud. // obf
 * // obf
 *     @type int      $v_ttiqz                   Smallest font size used to display tags. Paired // obf
 *                                                with the value of `$v_loatk`, to determine CSS text // obf
 *                                                size unit. Default 8 (pt). // obf
 *     @type int      $v_ofsms                    Largest font size used to display tags. Paired // obf
 *                                                with the value of `$v_loatk`, to determine CSS text // obf
 *                                                size unit. Default 22 (pt). // obf
 *     @type string   $v_loatk                       CSS text size unit to use with the `$v_ttiqz` // obf
 *                                                and `$v_ofsms` values. Accepts any valid CSS text // obf
 *                                                size unit. Default 'pt'. // obf
 *     @type int      $v_jfcld                     The number of tags to return. Accepts any // obf
 *                                                positive integer or zero to return all. // obf
 *                                                Default 0. // obf
 *     @type string   $v_ihvdt                     Format to display the tag cloud in. Accepts 'flat' // obf
 *                                                (tags separated with spaces), 'list' (tags displayed // obf
 *                                                in an unordered list), or 'array' (returns an array). // obf
 *                                                Default 'flat'. // obf
 *     @type string   $v_yoybu                  HTML or text to separate the tags. Default "\n" (newline). // obf
 *     @type string   $v_hpehw                    Value to order tags by. Accepts 'name' or 'count'. // obf
 *                                                Default 'name'. The {@see 'tag_cloud_sort'} filter // obf
 *                                                can also affect how tags are sorted. // obf
 *     @type string   $v_snegr                      How to order the tags. Accepts 'ASC' (ascending), // obf
 *                                                'DESC' (descending), or 'RAND' (random). Default 'ASC'. // obf
 *     @type int|bool $v_ycfft                     Whether to enable filtering of the final output // obf
 *                                                via {@see 'wp_generate_tag_cloud'}. Default 1. // obf
 *     @type array    $v_nwrep           Nooped plural text from _n_noop() to supply to // obf
 *                                                tag counts. Default null. // obf
 *     @type callable $v_sxjbg  Callback used to generate nooped plural text for // obf
 *                                                tag counts based on the count. Default null. // obf
 *     @type callable $v_jwfhz Callback used to determine the tag count scaling // obf
 *                                                value. Default default_topic_count_scale(). // obf
 *     @type bool|int $v_jmtid                 Whether to display the tag counts. Default 0. Accepts // obf
 *                                                0, 1, or their bool equivalents. // obf
 * } // obf
 * @return string|string[] Tag cloud as a string or an array, depending on 'format' argument. // obf
 */ // obf
function wp_generate_tag_cloud( $v_stqet, $v_ermmt = '' ) { // obf
	$v_eoxku = array( // obf
		'smallest'                   => 8, // obf
		'largest'                    => 22, // obf
		'unit'                       => 'pt', // obf
		'number'                     => 0, // obf
		'format'                     => 'flat', // obf
		'separator'                  => "\n", // obf
		'orderby'                    => 'name', // obf
		'order'                      => 'ASC', // obf
		'topic_count_text'           => null, // obf
		'topic_count_text_callback'  => null, // obf
		'topic_count_scale_callback' => 'default_topic_count_scale', // obf
		'filter'                     => 1, // obf
		'show_count'                 => 0, // obf
	); // obf

	$v_ermmt = wp_parse_args( $v_ermmt, $v_eoxku ); // obf

	$v_kqxif = ( 'array' === $v_ermmt['format'] ) ? array() : ''; // obf

	if ( empty( $v_stqet ) ) { // obf
		return $v_kqxif; // obf
	} // obf

	// Juggle topic counts. // obf
	if ( isset( $v_ermmt['topic_count_text'] ) ) { // obf
		// First look for nooped plural support via topic_count_text. // obf
		$v_yqyqb = $v_ermmt['topic_count_text']; // obf
	} elseif ( ! empty( $v_ermmt['topic_count_text_callback'] ) ) { // obf
		// Look for the alternative callback style. Ignore the previous default. // obf
		if ( 'default_topic_count_text' === $v_ermmt['topic_count_text_callback'] ) { // obf
			/* translators: %s: Number of items (tags). */ // obf
			$v_yqyqb = _n_noop( '%s item', '%s items' ); // obf
		} else { // obf
			$v_yqyqb = false; // obf
		} // obf
	} elseif ( isset( $v_ermmt['single_text'] ) && isset( $v_ermmt['multiple_text'] ) ) { // obf
		// If no callback exists, look for the old-style single_text and multiple_text arguments. // obf
		// phpcs:ignore WordPress.WP.I18n.NonSingularStringLiteralSingular,WordPress.WP.I18n.NonSingularStringLiteralPlural // obf
		$v_yqyqb = _n_noop( $v_ermmt['single_text'], $v_ermmt['multiple_text'] ); // obf
	} else { // obf
		// This is the default for when no callback, plural, or argument is passed in. // obf
		/* translators: %s: Number of items (tags). */ // obf
		$v_yqyqb = _n_noop( '%s item', '%s items' ); // obf
	} // obf

	/** // obf
	 * Filters how the items in a tag cloud are sorted. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param WP_Term[] $v_stqet Ordered array of terms. // obf
	 * @param array     $v_ermmt An array of tag cloud arguments. // obf
	 */ // obf
	$v_tdcjb = apply_filters( 'tag_cloud_sort', $v_stqet, $v_ermmt ); // obf
	if ( empty( $v_tdcjb ) ) { // obf
		return $v_kqxif; // obf
	} // obf

	if ( $v_tdcjb !== $v_stqet ) { // obf
		$v_stqet = $v_tdcjb; // obf
		unset( $v_tdcjb ); // obf
	} else { // obf
		if ( 'RAND' === $v_ermmt['order'] ) { // obf
			shuffle( $v_stqet ); // obf
		} else { // obf
			// SQL cannot save you; this is a second (potentially different) sort on a subset of data. // obf
			if ( 'name' === $v_ermmt['orderby'] ) { // obf
				uasort( $v_stqet, '_wp_object_name_sort_cb' ); // obf
			} else { // obf
				uasort( $v_stqet, '_wp_object_count_sort_cb' ); // obf
			} // obf

			if ( 'DESC' === $v_ermmt['order'] ) { // obf
				$v_stqet = array_reverse( $v_stqet, true ); // obf
			} // obf
		} // obf
	} // obf

	if ( $v_ermmt['number'] > 0 ) { // obf
		$v_stqet = array_slice( $v_stqet, 0, $v_ermmt['number'] ); // obf
	} // obf

	$v_dgmps      = array(); // obf
	$v_tkefc = array(); // For the alt tag. // obf
	foreach ( (array) $v_stqet as $v_czyzp => $v_okzsi ) { // obf
		$v_tkefc[ $v_czyzp ] = $v_okzsi->count; // obf
		$v_dgmps[ $v_czyzp ]      = call_user_func( $v_ermmt['topic_count_scale_callback'], $v_okzsi->count ); // obf
	} // obf

	$v_wluio = min( $v_dgmps ); // obf
	$v_pvubs    = max( $v_dgmps ) - $v_wluio; // obf
	if ( $v_pvubs <= 0 ) { // obf
		$v_pvubs = 1; // obf
	} // obf
	$v_vekpt = $v_ermmt['largest'] - $v_ermmt['smallest']; // obf
	if ( $v_vekpt < 0 ) { // obf
		$v_vekpt = 1; // obf
	} // obf
	$v_yzerh = $v_vekpt / $v_pvubs; // obf

	$v_nvcfm = false; // obf
	/* // obf
	 * Determine whether to output an 'aria-label' attribute with the tag name and count. // obf
	 * When tags have a different font size, they visually convey an important information // obf
	 * that should be available to assistive technologies too. On the other hand, sometimes // obf
	 * themes set up the Tag Cloud to display all tags with the same font size (setting // obf
	 * the 'smallest' and 'largest' arguments to the same value). // obf
	 * In order to always serve the same content to all users, the 'aria-label' gets printed out: // obf
	 * - when tags have a different size // obf
	 * - when the tag count is displayed (for example when users check the checkbox in the // obf
	 *   Tag Cloud widget), regardless of the tags font size // obf
	 */ // obf
	if ( $v_ermmt['show_count'] || 0 !== $v_vekpt ) { // obf
		$v_nvcfm = true; // obf
	} // obf

	// Assemble the data that will be used to generate the tag cloud markup. // obf
	$v_zwxet = array(); // obf
	foreach ( $v_stqet as $v_czyzp => $v_okzsi ) { // obf
		$v_ydnzr = isset( $v_okzsi->id ) ? $v_okzsi->id : $v_czyzp; // obf

		$v_cylbu      = $v_dgmps[ $v_czyzp ]; // obf
		$v_bpqjz = $v_tkefc[ $v_czyzp ]; // obf

		if ( $v_yqyqb ) { // obf
			$v_flqjv = sprintf( translate_nooped_plural( $v_yqyqb, $v_bpqjz ), number_format_i18n( $v_bpqjz ) ); // obf
		} else { // obf
			$v_flqjv = call_user_func( $v_ermmt['topic_count_text_callback'], $v_bpqjz, $v_okzsi, $v_ermmt ); // obf
		} // obf

		$v_zwxet[] = array( // obf
			'id'              => $v_ydnzr, // obf
			'url'             => ( '#' !== $v_okzsi->link ) ? $v_okzsi->link : '#', // obf
			'role'            => ( '#' !== $v_okzsi->link ) ? '' : ' role="button"', // obf
			'name'            => $v_okzsi->name, // obf
			'formatted_count' => $v_flqjv, // obf
			'slug'            => $v_okzsi->slug, // obf
			'real_count'      => $v_bpqjz, // obf
			'class'           => 'tag-cloud-link tag-link-' . $v_ydnzr, // obf
			'font_size'       => $v_ermmt['smallest'] + ( $v_cylbu - $v_wluio ) * $v_yzerh, // obf
			'aria_label'      => $v_nvcfm ? sprintf( ' aria-label="%1$v_xuhjk (%2$v_xuhjk)"', esc_attr( $v_okzsi->name ), esc_attr( $v_flqjv ) ) : '', // obf
			'show_count'      => $v_ermmt['show_count'] ? '<span class="tag-link-count"> (' . $v_bpqjz . ')</span>' : '', // obf
		); // obf
	} // obf

	/** // obf
	 * Filters the data used to generate the tag cloud. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array[] $v_zwxet An array of term data arrays for terms used to generate the tag cloud. // obf
	 */ // obf
	$v_zwxet = apply_filters( 'wp_generate_tag_cloud_data', $v_zwxet ); // obf

	$v_tbjlr = array(); // obf

	// Generate the output links array. // obf
	foreach ( $v_zwxet as $v_czyzp => $v_cpbuq ) { // obf
		$v_eimhb = $v_cpbuq['class'] . ' tag-link-position-' . ( $v_czyzp + 1 ); // obf
		$v_tbjlr[]   = sprintf( // obf
			'<a href="%1$v_xuhjk"%2$v_xuhjk class="%3$v_xuhjk" style="font-size: %4$v_xuhjk;"%5$v_xuhjk>%6$v_xuhjk%7$v_xuhjk</a>', // obf
			esc_url( $v_cpbuq['url'] ), // obf
			$v_cpbuq['role'], // obf
			esc_attr( $v_eimhb ), // obf
			esc_attr( str_replace( ',', '.', $v_cpbuq['font_size'] ) . $v_ermmt['unit'] ), // obf
			$v_cpbuq['aria_label'], // obf
			esc_html( $v_cpbuq['name'] ), // obf
			$v_cpbuq['show_count'] // obf
		); // obf
	} // obf

	switch ( $v_ermmt['format'] ) { // obf
		case 'array': // obf
			$v_kqxif =& $v_tbjlr; // obf
			break; // obf
		case 'list': // obf
			/* // obf
			 * Force role="list", as some browsers (sic: Safari 10) don't expose to assistive // obf
			 * technologies the default role when the list is styled with `list-style: none`. // obf
			 * Note: this is redundant but doesn't harm. // obf
			 */ // obf
			$v_kqxif  = "<ul class='wp-tag-cloud' role='list'>\n\t<li>"; // obf
			$v_kqxif .= implode( "</li>\n\t<li>", $v_tbjlr ); // obf
			$v_kqxif .= "</li>\n</ul>\n"; // obf
			break; // obf
		default: // obf
			$v_kqxif = implode( $v_ermmt['separator'], $v_tbjlr ); // obf
			break; // obf
	} // obf

	if ( $v_ermmt['filter'] ) { // obf
		/** // obf
		 * Filters the generated output of a tag cloud. // obf
		 * // obf
		 * The filter is only evaluated if a true value is passed // obf
		 * to the $v_ycfft argument in wp_generate_tag_cloud(). // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @see wp_generate_tag_cloud() // obf
		 * // obf
		 * @param string[]|string $v_kqxif String containing the generated HTML tag cloud output // obf
		 *                                or an array of tag links if the 'format' argument // obf
		 *                                equals 'array'. // obf
		 * @param WP_Term[]       $v_stqet   An array of terms used in the tag cloud. // obf
		 * @param array           $v_ermmt   An array of wp_generate_tag_cloud() arguments. // obf
		 */ // obf
		return apply_filters( 'wp_generate_tag_cloud', $v_kqxif, $v_stqet, $v_ermmt ); // obf
	} else { // obf
		return $v_kqxif; // obf
	} // obf
} // obf

/** // obf
 * Serves as a callback for comparing objects based on name. // obf
 * // obf
 * Used with `uasort()`. // obf
 * // obf
 * @since 3.1.0 // obf
 * @access private // obf
 * // obf
 * @param object $v_tbjlr The first object to compare. // obf
 * @param object $v_injlk The second object to compare. // obf
 * @return int Negative number if `$v_tbjlr->name` is less than `$v_injlk->name`, zero if they are equal, // obf
 *             or greater than zero if `$v_tbjlr->name` is greater than `$v_injlk->name`. // obf
 */ // obf
function _wp_object_name_sort_cb( $v_tbjlr, $v_injlk ) { // obf
	return strnatcasecmp( $v_tbjlr->name, $v_injlk->name ); // obf
} // obf

/** // obf
 * Serves as a callback for comparing objects based on count. // obf
 * // obf
 * Used with `uasort()`. // obf
 * // obf
 * @since 3.1.0 // obf
 * @access private // obf
 * // obf
 * @param object $v_tbjlr The first object to compare. // obf
 * @param object $v_injlk The second object to compare. // obf
 * @return int Negative number if `$v_tbjlr->count` is less than `$v_injlk->count`, zero if they are equal, // obf
 *             or greater than zero if `$v_tbjlr->count` is greater than `$v_injlk->count`. // obf
 */ // obf
function _wp_object_count_sort_cb( $v_tbjlr, $v_injlk ) { // obf
	return ( $v_tbjlr->count - $v_injlk->count ); // obf
} // obf

// // obf
// Helper functions. // obf
// // obf

/** // obf
 * Retrieves HTML list content for category list. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 5.3.0 Formalized the existing `...$v_ermmt` parameter by adding it // obf
 *              to the function signature. // obf
 * // obf
 * @uses Walker_Category to create HTML list content. // obf
 * @see Walker::walk() for parameters and return description. // obf
 * // obf
 * @param mixed ...$v_ermmt Elements array, maximum hierarchical depth and optional additional arguments. // obf
 * @return string // obf
 */ // obf
function walk_category_tree( ...$v_ermmt ) { // obf
	// The user's options are the third parameter. // obf
	if ( empty( $v_ermmt[2]['walker'] ) || ! ( $v_ermmt[2]['walker'] instanceof Walker ) ) { // obf
		$v_kkfys = new Walker_Category(); // obf
	} else { // obf
		/** // obf
		 * @var Walker $v_kkfys // obf
		 */ // obf
		$v_kkfys = $v_ermmt[2]['walker']; // obf
	} // obf
	return $v_kkfys->walk( ...$v_ermmt ); // obf
} // obf

/** // obf
 * Retrieves HTML dropdown (select) content for category list. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 5.3.0 Formalized the existing `...$v_ermmt` parameter by adding it // obf
 *              to the function signature. // obf
 * // obf
 * @uses Walker_CategoryDropdown to create HTML dropdown content. // obf
 * @see Walker::walk() for parameters and return description. // obf
 * // obf
 * @param mixed ...$v_ermmt Elements array, maximum hierarchical depth and optional additional arguments. // obf
 * @return string // obf
 */ // obf
function walk_category_dropdown_tree( ...$v_ermmt ) { // obf
	// The user's options are the third parameter. // obf
	if ( empty( $v_ermmt[2]['walker'] ) || ! ( $v_ermmt[2]['walker'] instanceof Walker ) ) { // obf
		$v_kkfys = new Walker_CategoryDropdown(); // obf
	} else { // obf
		/** // obf
		 * @var Walker $v_kkfys // obf
		 */ // obf
		$v_kkfys = $v_ermmt[2]['walker']; // obf
	} // obf
	return $v_kkfys->walk( ...$v_ermmt ); // obf
} // obf

// // obf
// Tags. // obf
// // obf

/** // obf
 * Retrieves the link to the tag. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @see get_term_link() // obf
 * // obf
 * @param int|object $v_okzsi Tag ID or object. // obf
 * @return string Link on success, empty string if tag does not exist. // obf
 */ // obf
function get_tag_link( $v_okzsi ) { // obf
	return get_category_link( $v_okzsi ); // obf
} // obf

/** // obf
 * Retrieves the tags for a post. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param int|WP_Post $v_dmfwy Post ID or object. // obf
 * @return WP_Term[]|false|WP_Error Array of WP_Term objects on success, false if there are no terms // obf
 *                                  or the post does not exist, WP_Error on failure. // obf
 */ // obf
function get_the_tags( $v_dmfwy = 0 ) { // obf
	$v_nnjtg = get_the_terms( $v_dmfwy, 'post_tag' ); // obf

	/** // obf
	 * Filters the array of tags for the given post. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @see get_the_terms() // obf
	 * // obf
	 * @param WP_Term[]|false|WP_Error $v_nnjtg Array of WP_Term objects on success, false if there are no terms // obf
	 *                                        or the post does not exist, WP_Error on failure. // obf
	 */ // obf
	return apply_filters( 'get_the_tags', $v_nnjtg ); // obf
} // obf

/** // obf
 * Retrieves the tags for a post formatted as a string. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string $v_kvcsq  Optional. String to use before the tags. Default empty. // obf
 * @param string $v_ucmfe     Optional. String to use between the tags. Default empty. // obf
 * @param string $v_tclmw   Optional. String to use after the tags. Default empty. // obf
 * @param int    $v_imhpt Optional. Post ID. Defaults to the current post ID. // obf
 * @return string|false|WP_Error A list of tags on success, false if there are no terms, // obf
 *                               WP_Error on failure. // obf
 */ // obf
function get_the_tag_list( $v_kvcsq = '', $v_ucmfe = '', $v_tclmw = '', $v_imhpt = 0 ) { // obf
	$v_vlmnf = get_the_term_list( $v_imhpt, 'post_tag', $v_kvcsq, $v_ucmfe, $v_tclmw ); // obf

	/** // obf
	 * Filters the tags list for a given post. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_vlmnf List of tags. // obf
	 * @param string $v_kvcsq   String to use before the tags. // obf
	 * @param string $v_ucmfe      String to use between the tags. // obf
	 * @param string $v_tclmw    String to use after the tags. // obf
	 * @param int    $v_imhpt  Post ID. // obf
	 */ // obf
	return apply_filters( 'the_tags', $v_vlmnf, $v_kvcsq, $v_ucmfe, $v_tclmw, $v_imhpt ); // obf
} // obf

/** // obf
 * Displays the tags for a post. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string $v_kvcsq Optional. String to use before the tags. Defaults to 'Tags:'. // obf
 * @param string $v_ucmfe    Optional. String to use between the tags. Default ', '. // obf
 * @param string $v_tclmw  Optional. String to use after the tags. Default empty. // obf
 */ // obf
function the_tags( $v_kvcsq = null, $v_ucmfe = ', ', $v_tclmw = '' ) { // obf
	if ( null === $v_kvcsq ) { // obf
		$v_kvcsq = __( 'Tags: ' ); // obf
	} // obf

	$v_ecnnb = get_the_tag_list( $v_kvcsq, $v_ucmfe, $v_tclmw ); // obf

	if ( ! is_wp_error( $v_ecnnb ) ) { // obf
		echo $v_ecnnb; // obf
	} // obf
} // obf

/** // obf
 * Retrieves tag description. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param int $v_okzsi Optional. Tag ID. Defaults to the current tag ID. // obf
 * @return string Tag description, if available. // obf
 */ // obf
function tag_description( $v_okzsi = 0 ) { // obf
	return term_description( $v_okzsi ); // obf
} // obf

/** // obf
 * Retrieves term description. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.9.2 The `$v_avnlz` parameter was deprecated. // obf
 * // obf
 * @param int  $v_iudby       Optional. Term ID. Defaults to the current term ID. // obf
 * @param null $v_vqwbo Deprecated. Not used. // obf
 * @return string Term description, if available. // obf
 */ // obf
function term_description( $v_iudby = 0, $v_vqwbo = null ) { // obf
	if ( ! $v_iudby && ( is_tax() || is_tag() || is_category() ) ) { // obf
		$v_iudby = get_queried_object(); // obf
		if ( $v_iudby ) { // obf
			$v_iudby = $v_iudby->term_id; // obf
		} // obf
	} // obf

	$v_dhrny = get_term_field( 'description', $v_iudby ); // obf

	return is_wp_error( $v_dhrny ) ? '' : $v_dhrny; // obf
} // obf

/** // obf
 * Retrieves the terms of the taxonomy that are attached to the post. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param int|WP_Post $v_dmfwy     Post ID or object. // obf
 * @param string      $v_avnlz Taxonomy name. // obf
 * @return WP_Term[]|false|WP_Error Array of WP_Term objects on success, false if there are no terms // obf
 *                                  or the post does not exist, WP_Error on failure. // obf
 */ // obf
function get_the_terms( $v_dmfwy, $v_avnlz ) { // obf
	$v_dmfwy = get_post( $v_dmfwy ); // obf

	if ( ! $v_dmfwy ) { // obf
		return false; // obf
	} // obf

	$v_nnjtg = get_object_term_cache( $v_dmfwy->ID, $v_avnlz ); // obf

	if ( false === $v_nnjtg ) { // obf
		$v_nnjtg = wp_get_object_terms( $v_dmfwy->ID, $v_avnlz ); // obf
		if ( ! is_wp_error( $v_nnjtg ) ) { // obf
			$v_mlslx = wp_list_pluck( $v_nnjtg, 'term_id' ); // obf
			wp_cache_add( $v_dmfwy->ID, $v_mlslx, $v_avnlz . '_relationships' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the list of terms attached to the given post. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param WP_Term[]|WP_Error $v_nnjtg    Array of attached terms, or WP_Error on failure. // obf
	 * @param int                $v_imhpt  Post ID. // obf
	 * @param string             $v_avnlz Name of the taxonomy. // obf
	 */ // obf
	$v_nnjtg = apply_filters( 'get_the_terms', $v_nnjtg, $v_dmfwy->ID, $v_avnlz ); // obf

	if ( empty( $v_nnjtg ) ) { // obf
		return false; // obf
	} // obf

	return $v_nnjtg; // obf
} // obf

/** // obf
 * Retrieves a post's terms as a list with specified format. // obf
 * // obf
 * Terms are linked to their respective term listing pages. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param int    $v_imhpt  Post ID. // obf
 * @param string $v_avnlz Taxonomy name. // obf
 * @param string $v_kvcsq   Optional. String to use before the terms. Default empty. // obf
 * @param string $v_ucmfe      Optional. String to use between the terms. Default empty. // obf
 * @param string $v_tclmw    Optional. String to use after the terms. Default empty. // obf
 * @return string|false|WP_Error A list of terms on success, false if there are no terms, // obf
 *                               WP_Error on failure. // obf
 */ // obf
function get_the_term_list( $v_imhpt, $v_avnlz, $v_kvcsq = '', $v_ucmfe = '', $v_tclmw = '' ) { // obf
	$v_nnjtg = get_the_terms( $v_imhpt, $v_avnlz ); // obf

	if ( is_wp_error( $v_nnjtg ) ) { // obf
		return $v_nnjtg; // obf
	} // obf

	if ( empty( $v_nnjtg ) ) { // obf
		return false; // obf
	} // obf

	$v_ardbm = array(); // obf

	foreach ( $v_nnjtg as $v_iudby ) { // obf
		$v_cpegr = get_term_link( $v_iudby, $v_avnlz ); // obf
		if ( is_wp_error( $v_cpegr ) ) { // obf
			return $v_cpegr; // obf
		} // obf
		$v_ardbm[] = '<a href="' . esc_url( $v_cpegr ) . '" rel="tag">' . $v_iudby->name . '</a>'; // obf
	} // obf

	/** // obf
	 * Filters the term links for a given taxonomy. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_avnlz`, refers // obf
	 * to the taxonomy slug. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `term_links-category` // obf
	 *  - `term_links-post_tag` // obf
	 *  - `term_links-post_format` // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string[] $v_ardbm An array of term links. // obf
	 */ // obf
	$v_dbdia = apply_filters( "term_links-{$v_avnlz}", $v_ardbm );  // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

	return $v_kvcsq . implode( $v_ucmfe, $v_dbdia ) . $v_tclmw; // obf
} // obf

/** // obf
 * Retrieves term parents with separator. // obf
 * // obf
 * @since 4.8.0 // obf
 * // obf
 * @param int          $v_nybno  Term ID. // obf
 * @param string       $v_avnlz Taxonomy name. // obf
 * @param string|array $v_ermmt { // obf
 *     Array of optional arguments. // obf
 * // obf
 *     @type string $v_ihvdt    Use term names or slugs for display. Accepts 'name' or 'slug'. // obf
 *                             Default 'name'. // obf
 *     @type string $v_yoybu Separator for between the terms. Default '/'. // obf
 *     @type bool   $v_cpegr      Whether to format as a link. Default true. // obf
 *     @type bool   $v_hjtrm Include the term to get the parents for. Default true. // obf
 * } // obf
 * @return string|WP_Error A list of term parents on success, WP_Error or empty string on failure. // obf
 */ // obf
function get_term_parents_list( $v_nybno, $v_avnlz, $v_ermmt = array() ) { // obf
	$v_dnaoq = ''; // obf
	$v_iudby = get_term( $v_nybno, $v_avnlz ); // obf

	if ( is_wp_error( $v_iudby ) ) { // obf
		return $v_iudby; // obf
	} // obf

	if ( ! $v_iudby ) { // obf
		return $v_dnaoq; // obf
	} // obf

	$v_nybno = $v_iudby->term_id; // obf

	$v_eoxku = array( // obf
		'format'    => 'name', // obf
		'separator' => '/', // obf
		'link'      => true, // obf
		'inclusive' => true, // obf
	); // obf

	$v_ermmt = wp_parse_args( $v_ermmt, $v_eoxku ); // obf

	foreach ( array( 'link', 'inclusive' ) as $v_jfsfu ) { // obf
		$v_ermmt[ $v_jfsfu ] = wp_validate_boolean( $v_ermmt[ $v_jfsfu ] ); // obf
	} // obf

	$v_qndbo = get_ancestors( $v_nybno, $v_avnlz, 'taxonomy' ); // obf

	if ( $v_ermmt['inclusive'] ) { // obf
		array_unshift( $v_qndbo, $v_nybno ); // obf
	} // obf

	foreach ( array_reverse( $v_qndbo ) as $v_nybno ) { // obf
		$v_kpzyu = get_term( $v_nybno, $v_avnlz ); // obf
		$v_aflhx   = ( 'slug' === $v_ermmt['format'] ) ? $v_kpzyu->slug : $v_kpzyu->name; // obf

		if ( $v_ermmt['link'] ) { // obf
			$v_dnaoq .= '<a href="' . esc_url( get_term_link( $v_kpzyu->term_id, $v_avnlz ) ) . '">' . $v_aflhx . '</a>' . $v_ermmt['separator']; // obf
		} else { // obf
			$v_dnaoq .= $v_aflhx . $v_ermmt['separator']; // obf
		} // obf
	} // obf

	return $v_dnaoq; // obf
} // obf

/** // obf
 * Displays the terms for a post in a list. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param int    $v_imhpt  Post ID. // obf
 * @param string $v_avnlz Taxonomy name. // obf
 * @param string $v_kvcsq   Optional. String to use before the terms. Default empty. // obf
 * @param string $v_ucmfe      Optional. String to use between the terms. Default ', '. // obf
 * @param string $v_tclmw    Optional. String to use after the terms. Default empty. // obf
 * @return void|false Void on success, false on failure. // obf
 */ // obf
function the_terms( $v_imhpt, $v_avnlz, $v_kvcsq = '', $v_ucmfe = ', ', $v_tclmw = '' ) { // obf
	$v_jsoyg = get_the_term_list( $v_imhpt, $v_avnlz, $v_kvcsq, $v_ucmfe, $v_tclmw ); // obf

	if ( is_wp_error( $v_jsoyg ) ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Filters the list of terms to display. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string $v_jsoyg List of terms to display. // obf
	 * @param string $v_avnlz  The taxonomy name. // obf
	 * @param string $v_kvcsq    String to use before the terms. // obf
	 * @param string $v_ucmfe       String to use between the terms. // obf
	 * @param string $v_tclmw     String to use after the terms. // obf
	 */ // obf
	echo apply_filters( 'the_terms', $v_jsoyg, $v_avnlz, $v_kvcsq, $v_ucmfe, $v_tclmw ); // obf
} // obf

/** // obf
 * Checks if the current post has any of given category. // obf
 * // obf
 * The given categories are checked against the post's categories' term_ids, names and slugs. // obf
 * Categories given as integers will only be checked against the post's categories' term_ids. // obf
 * // obf
 * If no categories are given, determines if post has any categories. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string|int|array $v_sogyb Optional. The category name/term_id/slug, // obf
 *                                   or an array of them to check for. Default empty. // obf
 * @param int|WP_Post      $v_dmfwy     Optional. Post to check. Defaults to the current post. // obf
 * @return bool True if the current post has any of the given categories // obf
 *              (or any category, if no category specified). False otherwise. // obf
 */ // obf
function has_category( $v_sogyb = '', $v_dmfwy = null ) { // obf
	return has_term( $v_sogyb, 'category', $v_dmfwy ); // obf
} // obf

/** // obf
 * Checks if the current post has any of given tags. // obf
 * // obf
 * The given tags are checked against the post's tags' term_ids, names and slugs. // obf
 * Tags given as integers will only be checked against the post's tags' term_ids. // obf
 * // obf
 * If no tags are given, determines if post has any tags. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 2.6.0 // obf
 * @since 2.7.0 Tags given as integers are only checked against // obf
 *              the post's tags' term_ids, not names or slugs. // obf
 * @since 2.7.0 Can be used outside of the WordPress Loop if `$v_dmfwy` is provided. // obf
 * // obf
 * @param string|int|array $v_okzsi  Optional. The tag name/term_id/slug, // obf
 *                               or an array of them to check for. Default empty. // obf
 * @param int|WP_Post      $v_dmfwy Optional. Post to check. Defaults to the current post. // obf
 * @return bool True if the current post has any of the given tags // obf
 *              (or any tag, if no tag specified). False otherwise. // obf
 */ // obf
function has_tag( $v_okzsi = '', $v_dmfwy = null ) { // obf
	return has_term( $v_okzsi, 'post_tag', $v_dmfwy ); // obf
} // obf

/** // obf
 * Checks if the current post has any of given terms. // obf
 * // obf
 * The given terms are checked against the post's terms' term_ids, names and slugs. // obf
 * Terms given as integers will only be checked against the post's terms' term_ids. // obf
 * // obf
 * If no terms are given, determines if post has any terms. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string|int|array $v_iudby     Optional. The term name/term_id/slug, // obf
 *                                   or an array of them to check for. Default empty. // obf
 * @param string           $v_avnlz Optional. Taxonomy name. Default empty. // obf
 * @param int|WP_Post      $v_dmfwy     Optional. Post to check. Defaults to the current post. // obf
 * @return bool True if the current post has any of the given terms // obf
 *              (or any term, if no term specified). False otherwise. // obf
 */ // obf
function has_term( $v_iudby = '', $v_avnlz = '', $v_dmfwy = null ) { // obf
	$v_dmfwy = get_post( $v_dmfwy ); // obf

	if ( ! $v_dmfwy ) { // obf
		return false; // obf
	} // obf

	$v_rkipz = is_object_in_term( $v_dmfwy->ID, $v_avnlz, $v_iudby ); // obf
	if ( is_wp_error( $v_rkipz ) ) { // obf
		return false; // obf
	} // obf

	return $v_rkipz; // obf
} // obf