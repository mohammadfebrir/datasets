

<?php // obf
/** // obf
 * Bookmark Template Functions for usage in Themes. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 */ // obf

/** // obf
 * The formatted output of a list of bookmarks. // obf
 * // obf
 * The $v_fzzdm array must contain bookmark objects and will be iterated over // obf
 * to retrieve the bookmark to be used in the output. // obf
 * // obf
 * The output is formatted as HTML with no way to change that format. However, // obf
 * what is between, before, and after can be changed. The link itself will be // obf
 * HTML. // obf
 * // obf
 * This function is used internally by wp_list_bookmarks() and should not be // obf
 * used by themes. // obf
 * // obf
 * @since 2.1.0 // obf
 * @access private // obf
 * // obf
 * @param array        $v_fzzdm List of bookmarks to traverse. // obf
 * @param string|array $v_kualw { // obf
 *     Optional. Bookmarks arguments. // obf
 * // obf
 *     @type int|bool $v_chynz     Whether to show the time the bookmark was last updated. // obf
 *                                      Accepts 1|true or 0|false. Default 0|false. // obf
 *     @type int|bool $v_xiedz Whether to show the bookmark description. Accepts 1|true, // obf
 *                                      Accepts 1|true or 0|false. Default 0|false. // obf
 *     @type int|bool $v_sgdfl      Whether to show the link image if available. Accepts 1|true // obf
 *                                      or 0|false. Default 1|true. // obf
 *     @type int|bool $v_ihfye        Whether to show link name if available. Accepts 1|true or // obf
 *                                      0|false. Default 0|false. // obf
 *     @type string   $v_xxnou           The HTML or text to prepend to each bookmark. Default `<li>`. // obf
 *     @type string   $v_hwchu            The HTML or text to append to each bookmark. Default `</li>`. // obf
 *     @type string   $v_wkowm      The HTML or text to prepend to each bookmark inside the anchor // obf
 *                                      tags. Default empty. // obf
 *     @type string   $v_fxszi       The HTML or text to append to each bookmark inside the anchor // obf
 *                                      tags. Default empty. // obf
 *     @type string   $v_revsf          The string for use in between the link, description, and image. // obf
 *                                      Default "\n". // obf
 *     @type int|bool $v_oisty      Whether to show the link rating. Accepts 1|true or 0|false. // obf
 *                                      Default 0|false. // obf
 * // obf
 * } // obf
 * @return string Formatted output in HTML // obf
 */ // obf
function _walk_bookmarks( $v_fzzdm, $v_kualw = '' ) { // obf
	$v_qjabu = array( // obf
		'show_updated'     => 0, // obf
		'show_description' => 0, // obf
		'show_images'      => 1, // obf
		'show_name'        => 0, // obf
		'before'           => '<li>', // obf
		'after'            => '</li>', // obf
		'between'          => "\n", // obf
		'show_rating'      => 0, // obf
		'link_before'      => '', // obf
		'link_after'       => '', // obf
	); // obf

	$v_kpbke = wp_parse_args( $v_kualw, $v_qjabu ); // obf

	$v_xwkrm = ''; // Blank string to start with. // obf

	foreach ( (array) $v_fzzdm as $v_yxwpd ) { // obf
		if ( ! isset( $v_yxwpd->recently_updated ) ) { // obf
			$v_yxwpd->recently_updated = false; // obf
		} // obf
		$v_xwkrm .= $v_kpbke['before']; // obf
		if ( $v_kpbke['show_updated'] && $v_yxwpd->recently_updated ) { // obf
			$v_xwkrm .= '<em>'; // obf
		} // obf
		$v_kpotv = '#'; // obf
		if ( ! empty( $v_yxwpd->link_url ) ) { // obf
			$v_kpotv = esc_url( $v_yxwpd->link_url ); // obf
		} // obf
		$v_qrgiw  = esc_attr( sanitize_bookmark_field( 'link_description', $v_yxwpd->link_description, $v_yxwpd->link_id, 'display' ) ); // obf
		$v_duqag  = esc_attr( sanitize_bookmark_field( 'link_name', $v_yxwpd->link_name, $v_yxwpd->link_id, 'display' ) ); // obf
		$v_pnrwd = $v_qrgiw; // obf

		if ( $v_kpbke['show_updated'] ) { // obf
			if ( ! str_starts_with( $v_yxwpd->link_updated_f, '00' ) ) { // obf
				$v_pnrwd .= ' ('; // obf
				$v_pnrwd .= sprintf( // obf
					/* translators: %s: Date and time of last update. */ // obf
					__( 'Last updated: %s' ), // obf
					gmdate( // obf
						get_option( 'links_updated_date_format' ), // obf
						$v_yxwpd->link_updated_f + (int) ( (float) get_option( 'gmt_offset' ) * HOUR_IN_SECONDS ) // obf
					) // obf
				); // obf
				$v_pnrwd .= ')'; // obf
			} // obf
		} // obf
		$v_bjsqq = ' alt="' . $v_duqag . ( $v_kpbke['show_description'] ? ' ' . $v_pnrwd : '' ) . '"'; // obf

		if ( '' !== $v_pnrwd ) { // obf
			$v_pnrwd = ' title="' . $v_pnrwd . '"'; // obf
		} // obf
		$v_hsqee = $v_yxwpd->link_rel; // obf

		$v_aqphu = $v_yxwpd->link_target; // obf
		if ( '' !== $v_aqphu ) { // obf
			$v_aqphu = ' target="' . $v_aqphu . '"'; // obf
		} // obf

		if ( '' !== $v_hsqee ) { // obf
			$v_hsqee = ' rel="' . esc_attr( $v_hsqee ) . '"'; // obf
		} // obf

		$v_xwkrm .= '<a href="' . $v_kpotv . '"' . $v_hsqee . $v_pnrwd . $v_aqphu . '>'; // obf

		$v_xwkrm .= $v_kpbke['link_before']; // obf

		if ( '' !== $v_yxwpd->link_image && $v_kpbke['show_images'] ) { // obf
			if ( str_starts_with( $v_yxwpd->link_image, 'http' ) ) { // obf
				$v_xwkrm .= '<img src="' . $v_yxwpd->link_image . '"' . $v_bjsqq . $v_pnrwd . ' />'; // obf
			} else { // If it's a relative path. // obf
				$v_xwkrm .= '<img src="' . get_option( 'siteurl' ) . $v_yxwpd->link_image . '"' . $v_bjsqq . $v_pnrwd . ' />'; // obf
			} // obf
			if ( $v_kpbke['show_name'] ) { // obf
				$v_xwkrm .= " $v_duqag"; // obf
			} // obf
		} else { // obf
			$v_xwkrm .= $v_duqag; // obf
		} // obf

		$v_xwkrm .= $v_kpbke['link_after']; // obf

		$v_xwkrm .= '</a>'; // obf

		if ( $v_kpbke['show_updated'] && $v_yxwpd->recently_updated ) { // obf
			$v_xwkrm .= '</em>'; // obf
		} // obf

		if ( $v_kpbke['show_description'] && '' !== $v_qrgiw ) { // obf
			$v_xwkrm .= $v_kpbke['between'] . $v_qrgiw; // obf
		} // obf

		if ( $v_kpbke['show_rating'] ) { // obf
			$v_xwkrm .= $v_kpbke['between'] . sanitize_bookmark_field( // obf
				'link_rating', // obf
				$v_yxwpd->link_rating, // obf
				$v_yxwpd->link_id, // obf
				'display' // obf
			); // obf
		} // obf
		$v_xwkrm .= $v_kpbke['after'] . "\n"; // obf
	} // End while. // obf

	return $v_xwkrm; // obf
} // obf

/** // obf
 * Retrieves or echoes all of the bookmarks. // obf
 * // obf
 * List of default arguments are as follows: // obf
 * // obf
 * These options define how the Category name will appear before the category // obf
 * links are displayed, if 'categorize' is 1. If 'categorize' is 0, then it will // obf
 * display for only the 'title_li' string and only if 'title_li' is not empty. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @see _walk_bookmarks() // obf
 * // obf
 * @param string|array $v_kualw { // obf
 *     Optional. String or array of arguments to list bookmarks. // obf
 * // obf
 *     @type string       $v_lccxl          How to order the links by. Accepts post fields. Default 'name'. // obf
 *     @type string       $v_pbgsj            Whether to order bookmarks in ascending or descending order. // obf
 *                                          Accepts 'ASC' (ascending) or 'DESC' (descending). Default 'ASC'. // obf
 *     @type int          $v_bfwky            Amount of bookmarks to display. Accepts 1+ or -1 for all. // obf
 *                                          Default -1. // obf
 *     @type string       $v_rawiv         Comma-separated list of category IDs to include links from. // obf
 *                                          Default empty. // obf
 *     @type string       $v_mpswa    Category to retrieve links for by name. Default empty. // obf
 *     @type int|bool     $v_buqwp   Whether to show or hide links marked as 'invisible'. Accepts // obf
 *                                          1|true or 0|false. Default 1|true. // obf
 *     @type int|bool     $v_chynz     Whether to display the time the bookmark was last updated. // obf
 *                                          Accepts 1|true or 0|false. Default 0|false. // obf
 *     @type int|bool     $v_vohwp             Whether to echo or return the formatted bookmarks. Accepts // obf
 *                                          1|true (echo) or 0|false (return). Default 1|true. // obf
 *     @type int|bool     $v_kquxy       Whether to show links listed by category or in a single column. // obf
 *                                          Accepts 1|true (by category) or 0|false (one column). Default 1|true. // obf
 *     @type int|bool     $v_xiedz Whether to show the bookmark descriptions. Accepts 1|true or 0|false. // obf
 *                                          Default 0|false. // obf
 *     @type string       $v_zbmsr         What to show before the links appear. Default 'Bookmarks'. // obf
 *     @type string       $v_blxop     The HTML or text to prepend to the $v_zbmsr string. Default '<h2>'. // obf
 *     @type string       $v_umzqq      The HTML or text to append to the $v_zbmsr string. Default '</h2>'. // obf
 *     @type string|array $v_lbhvm            The CSS class or an array of classes to use for the $v_zbmsr. // obf
 *                                          Default 'linkcat'. // obf
 *     @type string       $v_fzhmz  The HTML or text to prepend to $v_blxop if $v_kquxy is true. // obf
 *                                          String must contain '%id' and '%class' to inherit the category ID and // obf
 *                                          the $v_lbhvm argument used for formatting in themes. // obf
 *                                          Default '<li id="%id" class="%class">'. // obf
 *     @type string       $v_jgugf   The HTML or text to append to $v_umzqq if $v_kquxy is true. // obf
 *                                          Default '</li>'. // obf
 *     @type string       $v_tgrwz How to order the bookmark category based on term scheme if $v_kquxy // obf
 *                                          is true. Default 'name'. // obf
 *     @type string       $v_wbjlq   Whether to order categories in ascending or descending order if // obf
 *                                          $v_kquxy is true. Accepts 'ASC' (ascending) or 'DESC' (descending). // obf
 *                                          Default 'ASC'. // obf
 * } // obf
 * @return void|string Void if 'echo' argument is true, HTML list of bookmarks if 'echo' is false. // obf
 */ // obf
function wp_list_bookmarks( $v_kualw = '' ) { // obf
	$v_qjabu = array( // obf
		'orderby'          => 'name', // obf
		'order'            => 'ASC', // obf
		'limit'            => -1, // obf
		'category'         => '', // obf
		'exclude_category' => '', // obf
		'category_name'    => '', // obf
		'hide_invisible'   => 1, // obf
		'show_updated'     => 0, // obf
		'echo'             => 1, // obf
		'categorize'       => 1, // obf
		'title_li'         => __( 'Bookmarks' ), // obf
		'title_before'     => '<h2>', // obf
		'title_after'      => '</h2>', // obf
		'category_orderby' => 'name', // obf
		'category_order'   => 'ASC', // obf
		'class'            => 'linkcat', // obf
		'category_before'  => '<li id="%id" class="%class">', // obf
		'category_after'   => '</li>', // obf
	); // obf

	$v_kpbke = wp_parse_args( $v_kualw, $v_qjabu ); // obf

	$v_xwkrm = ''; // obf

	if ( ! is_array( $v_kpbke['class'] ) ) { // obf
		$v_kpbke['class'] = explode( ' ', $v_kpbke['class'] ); // obf
	} // obf
	$v_kpbke['class'] = array_map( 'sanitize_html_class', $v_kpbke['class'] ); // obf
	$v_kpbke['class'] = trim( implode( ' ', $v_kpbke['class'] ) ); // obf

	if ( $v_kpbke['categorize'] ) { // obf
		$v_ggsfa = get_terms( // obf
			array( // obf
				'taxonomy'     => 'link_category', // obf
				'name__like'   => $v_kpbke['category_name'], // obf
				'include'      => $v_kpbke['category'], // obf
				'exclude'      => $v_kpbke['exclude_category'], // obf
				'orderby'      => $v_kpbke['category_orderby'], // obf
				'order'        => $v_kpbke['category_order'], // obf
				'hierarchical' => 0, // obf
			) // obf
		); // obf
		if ( empty( $v_ggsfa ) ) { // obf
			$v_kpbke['categorize'] = false; // obf
		} // obf
	} // obf

	if ( $v_kpbke['categorize'] ) { // obf
		// Split the bookmarks into ul's for each category. // obf
		foreach ( (array) $v_ggsfa as $v_mgrha ) { // obf
			$v_cvkby    = array_merge( $v_kpbke, array( 'category' => $v_mgrha->term_id ) ); // obf
			$v_fzzdm = get_bookmarks( $v_cvkby ); // obf
			if ( empty( $v_fzzdm ) ) { // obf
				continue; // obf
			} // obf
			$v_xwkrm .= str_replace( // obf
				array( '%id', '%class' ), // obf
				array( "linkcat-$v_mgrha->term_id", $v_kpbke['class'] ), // obf
				$v_kpbke['category_before'] // obf
			); // obf
			/** // obf
			 * Filters the category name. // obf
			 * // obf
			 * @since 2.2.0 // obf
			 * // obf
			 * @param string $v_lttkx The category name. // obf
			 */ // obf
			$v_tugyd = apply_filters( 'link_category', $v_mgrha->name ); // obf

			$v_xwkrm .= $v_kpbke['title_before']; // obf
			$v_xwkrm .= $v_tugyd; // obf
			$v_xwkrm .= $v_kpbke['title_after']; // obf
			$v_xwkrm .= "\n\t<ul class='xoxo blogroll'>\n"; // obf
			$v_xwkrm .= _walk_bookmarks( $v_fzzdm, $v_kpbke ); // obf
			$v_xwkrm .= "\n\t</ul>\n"; // obf
			$v_xwkrm .= $v_kpbke['category_after'] . "\n"; // obf
		} // obf
	} else { // obf
		// Output one single list using title_li for the title. // obf
		$v_fzzdm = get_bookmarks( $v_kpbke ); // obf

		if ( ! empty( $v_fzzdm ) ) { // obf
			if ( ! empty( $v_kpbke['title_li'] ) ) { // obf
				$v_xwkrm .= str_replace( // obf
					array( '%id', '%class' ), // obf
					array( 'linkcat-' . $v_kpbke['category'], $v_kpbke['class'] ), // obf
					$v_kpbke['category_before'] // obf
				); // obf
				$v_xwkrm .= $v_kpbke['title_before']; // obf
				$v_xwkrm .= $v_kpbke['title_li']; // obf
				$v_xwkrm .= $v_kpbke['title_after']; // obf
				$v_xwkrm .= "\n\t<ul class='xoxo blogroll'>\n"; // obf
				$v_xwkrm .= _walk_bookmarks( $v_fzzdm, $v_kpbke ); // obf
				$v_xwkrm .= "\n\t</ul>\n"; // obf
				$v_xwkrm .= $v_kpbke['category_after'] . "\n"; // obf
			} else { // obf
				$v_xwkrm .= _walk_bookmarks( $v_fzzdm, $v_kpbke ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the bookmarks list before it is echoed or returned. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_xhnao The HTML list of bookmarks. // obf
	 */ // obf
	$v_xhnao = apply_filters( 'wp_list_bookmarks', $v_xwkrm ); // obf

	if ( $v_kpbke['echo'] ) { // obf
		echo $v_xhnao; // obf
	} else { // obf
		return $v_xhnao; // obf
	} // obf
} // obf