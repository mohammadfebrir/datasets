
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Post Template Functions. // obf
 * // obf
 * Gets content for the current post in the loop. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 */ // obf

/** // obf
 * Displays the ID of the current item in the WordPress Loop. // obf
 * // obf
 * @since 0.71 // obf
 */ // obf
function the_ID() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	echo get_the_ID(); // obf
} // obf

/** // obf
 * Retrieves the ID of the current item in the WordPress Loop. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @return int|false The ID of the current item in the WordPress Loop. False if $v_zojea is not set. // obf
 */ // obf
function get_the_ID() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	$v_zojea = get_post(); // obf
	return ! empty( $v_zojea ) ? $v_zojea->ID : false; // obf
} // obf

/** // obf
 * Displays or retrieves the current post title with optional markup. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_aesem  Optional. Markup to prepend to the title. Default empty. // obf
 * @param string $v_txqhu   Optional. Markup to append to the title. Default empty. // obf
 * @param bool   $v_rsmzb Optional. Whether to echo or return the title. Default true for echo. // obf
 * @return void|string Void if `$v_rsmzb` argument is true or the title is empty, // obf
 *                     current post title if `$v_rsmzb` is false. // obf
 */ // obf
function the_title( $v_aesem = '', $v_txqhu = '', $v_rsmzb = true ) { // obf
	$v_qbnrf = get_the_title(); // obf

	if ( strlen( $v_qbnrf ) === 0 ) { // obf
		return; // obf
	} // obf

	$v_qbnrf = $v_aesem . $v_qbnrf . $v_txqhu; // obf

	if ( $v_rsmzb ) { // obf
		echo $v_qbnrf; // obf
	} else { // obf
		return $v_qbnrf; // obf
	} // obf
} // obf

/** // obf
 * Sanitizes the current title when retrieving or displaying. // obf
 * // obf
 * Works like the_title(), except the parameters can be in a string or // obf
 * an array. See the function for what can be override in the $v_bfjwb parameter. // obf
 * // obf
 * The title before it is displayed will have the tags stripped and esc_attr() // obf
 * before it is passed to the user or displayed. The default as with the_title(), // obf
 * is to display the title. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string|array $v_bfjwb { // obf
 *     Title attribute arguments. Optional. // obf
 * // obf
 *     @type string  $v_aesem Markup to prepend to the title. Default empty. // obf
 *     @type string  $v_txqhu  Markup to append to the title. Default empty. // obf
 *     @type bool    $v_ignhi   Whether to echo or return the title. Default true for echo. // obf
 *     @type WP_Post $v_zojea   Current post object to retrieve the title for. // obf
 * } // obf
 * @return void|string Void if 'echo' argument is true, the title attribute if 'echo' is false. // obf
 */ // obf
function the_title_attribute( $v_bfjwb = '' ) { // obf
	$v_asuvg    = array( // obf
		'before' => '', // obf
		'after'  => '', // obf
		'echo'   => true, // obf
		'post'   => get_post(), // obf
	); // obf
	$v_ciqax = wp_parse_args( $v_bfjwb, $v_asuvg ); // obf

	$v_qbnrf = get_the_title( $v_ciqax['post'] ); // obf

	if ( strlen( $v_qbnrf ) === 0 ) { // obf
		return; // obf
	} // obf

	$v_qbnrf = $v_ciqax['before'] . $v_qbnrf . $v_ciqax['after']; // obf
	$v_qbnrf = esc_attr( strip_tags( $v_qbnrf ) ); // obf

	if ( $v_ciqax['echo'] ) { // obf
		echo $v_qbnrf; // obf
	} else { // obf
		return $v_qbnrf; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the post title. // obf
 * // obf
 * If the post is protected and the visitor is not an admin, then "Protected" // obf
 * will be inserted before the post title. If the post is private, then // obf
 * "Private" will be inserted before the post title. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param int|WP_Post $v_zojea Optional. Post ID or WP_Post object. Default is global $v_zojea. // obf
 * @return string // obf
 */ // obf
function get_the_title( $v_zojea = 0 ) { // obf
	$v_zojea = get_post( $v_zojea ); // obf

	$v_xukwi = isset( $v_zojea->post_title ) ? $v_zojea->post_title : ''; // obf
	$v_emull    = isset( $v_zojea->ID ) ? $v_zojea->ID : 0; // obf

	if ( ! is_admin() ) { // obf
		if ( ! empty( $v_zojea->post_password ) ) { // obf

			/* translators: %s: Protected post title. */ // obf
			$v_qrmuc = __( 'Protected: %s' ); // obf

			/** // obf
			 * Filters the text prepended to the post title for protected posts. // obf
			 * // obf
			 * The filter is only applied on the front end. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param string  $v_qrmuc Text displayed before the post title. // obf
			 *                         Default 'Protected: %s'. // obf
			 * @param WP_Post $v_zojea    Current post object. // obf
			 */ // obf
			$v_thsky = apply_filters( 'protected_title_format', $v_qrmuc, $v_zojea ); // obf

			$v_xukwi = sprintf( $v_thsky, $v_xukwi ); // obf
		} elseif ( isset( $v_zojea->post_status ) && 'private' === $v_zojea->post_status ) { // obf

			/* translators: %s: Private post title. */ // obf
			$v_qrmuc = __( 'Private: %s' ); // obf

			/** // obf
			 * Filters the text prepended to the post title of private posts. // obf
			 * // obf
			 * The filter is only applied on the front end. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param string  $v_qrmuc Text displayed before the post title. // obf
			 *                         Default 'Private: %s'. // obf
			 * @param WP_Post $v_zojea    Current post object. // obf
			 */ // obf
			$v_ljbob = apply_filters( 'private_title_format', $v_qrmuc, $v_zojea ); // obf

			$v_xukwi = sprintf( $v_ljbob, $v_xukwi ); // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the post title. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_xukwi The post title. // obf
	 * @param int    $v_emull    The post ID. // obf
	 */ // obf
	return apply_filters( 'the_title', $v_xukwi, $v_emull ); // obf
} // obf

/** // obf
 * Displays the Post Global Unique Identifier (guid). // obf
 * // obf
 * The guid will appear to be a link, but should not be used as a link to the // obf
 * post. The reason you should not use it as a link, is because of moving the // obf
 * blog across domains. // obf
 * // obf
 * URL is escaped to make it XML-safe. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param int|WP_Post $v_zojea Optional. Post ID or post object. Default is global $v_zojea. // obf
 */ // obf
function the_guid( $v_zojea = 0 ) { // obf
	$v_zojea = get_post( $v_zojea ); // obf

	$v_feqnt = isset( $v_zojea->guid ) ? get_the_guid( $v_zojea ) : ''; // obf
	$v_emull   = isset( $v_zojea->ID ) ? $v_zojea->ID : 0; // obf

	/** // obf
	 * Filters the escaped Global Unique Identifier (guid) of the post. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @see get_the_guid() // obf
	 * // obf
	 * @param string $v_feqnt Escaped Global Unique Identifier (guid) of the post. // obf
	 * @param int    $v_emull   The post ID. // obf
	 */ // obf
	echo apply_filters( 'the_guid', $v_feqnt, $v_emull ); // obf
} // obf

/** // obf
 * Retrieves the Post Global Unique Identifier (guid). // obf
 * // obf
 * The guid will appear to be a link, but should not be used as an link to the // obf
 * post. The reason you should not use it as a link, is because of moving the // obf
 * blog across domains. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param int|WP_Post $v_zojea Optional. Post ID or post object. Default is global $v_zojea. // obf
 * @return string // obf
 */ // obf
function get_the_guid( $v_zojea = 0 ) { // obf
	$v_zojea = get_post( $v_zojea ); // obf

	$v_feqnt = isset( $v_zojea->guid ) ? $v_zojea->guid : ''; // obf
	$v_emull   = isset( $v_zojea->ID ) ? $v_zojea->ID : 0; // obf

	/** // obf
	 * Filters the Global Unique Identifier (guid) of the post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_feqnt Global Unique Identifier (guid) of the post. // obf
	 * @param int    $v_emull   The post ID. // obf
	 */ // obf
	return apply_filters( 'get_the_guid', $v_feqnt, $v_emull ); // obf
} // obf

/** // obf
 * Displays the post content. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_frbap Optional. Content for when there is more text. // obf
 * @param bool   $v_appni   Optional. Strip teaser content before the more text. Default false. // obf
 */ // obf
function the_content( $v_frbap = null, $v_appni = false ) { // obf
	$v_dtsrt = get_the_content( $v_frbap, $v_appni ); // obf

	/** // obf
	 * Filters the post content. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param string $v_dtsrt Content of the current post. // obf
	 */ // obf
	$v_dtsrt = apply_filters( 'the_content', $v_dtsrt ); // obf
	$v_dtsrt = str_replace( ']]>', ']]&gt;', $v_dtsrt ); // obf
	echo $v_dtsrt; // obf
} // obf

/** // obf
 * Retrieves the post content. // obf
 * // obf
 * @since 0.71 // obf
 * @since 5.2.0 Added the `$v_zojea` parameter. // obf
 * // obf
 * @global int   $v_gyrco      Page number of a single post/page. // obf
 * @global int   $v_qzclc      Boolean indicator for whether single post/page is being viewed. // obf
 * @global bool  $v_hdhnn   Whether post/page is in preview mode. // obf
 * @global array $v_evlmu     Array of all pages in post/page. Each array element contains // obf
 *                          part of the content separated by the `<!--nextpage-->` tag. // obf
 * @global int   $v_ityps Boolean indicator for whether multiple pages are in play. // obf
 * // obf
 * @param string             $v_frbap Optional. Content for when there is more text. // obf
 * @param bool               $v_appni   Optional. Strip teaser content before the more text. Default false. // obf
 * @param WP_Post|object|int $v_zojea           Optional. WP_Post instance or Post ID/object. Default null. // obf
 * @return string // obf
 */ // obf
function get_the_content( $v_frbap = null, $v_appni = false, $v_zojea = null ) { // obf
	global $v_gyrco, $v_qzclc, $v_hdhnn, $v_evlmu, $v_ityps; // obf

	$v_jaqto = get_post( $v_zojea ); // obf

	if ( ! ( $v_jaqto instanceof WP_Post ) ) { // obf
		return ''; // obf
	} // obf

	/* // obf
	 * Use the globals if the $v_zojea parameter was not specified, // obf
	 * but only after they have been set up in setup_postdata(). // obf
	 */ // obf
	if ( null === $v_zojea && did_action( 'the_post' ) ) { // obf
		$v_dfvml = compact( 'page', 'more', 'preview', 'pages', 'multipage' ); // obf
	} else { // obf
		$v_dfvml = generate_postdata( $v_jaqto ); // obf
	} // obf

	if ( null === $v_frbap ) { // obf
		$v_frbap = sprintf( // obf
			'<span aria-label="%1$v_nkgbz">%2$v_nkgbz</span>', // obf
			sprintf( // obf
				/* translators: %s: Post title. */ // obf
				__( 'Continue reading %s' ), // obf
				the_title_attribute( // obf
					array( // obf
						'echo' => false, // obf
						'post' => $v_jaqto, // obf
					) // obf
				) // obf
			), // obf
			__( '(more&hellip;)' ) // obf
		); // obf
	} // obf

	$v_fffxf     = ''; // obf
	$v_ccrym = false; // obf

	// If post password required and it doesn't match the cookie. // obf
	if ( post_password_required( $v_jaqto ) ) { // obf
		return get_the_password_form( $v_jaqto ); // obf
	} // obf

	// If the requested page doesn't exist. // obf
	if ( $v_dfvml['page'] > count( $v_dfvml['pages'] ) ) { // obf
		// Give them the highest numbered page that DOES exist. // obf
		$v_dfvml['page'] = count( $v_dfvml['pages'] ); // obf
	} // obf

	$v_jlgyl = $v_dfvml['page']; // obf
	$v_dtsrt = $v_dfvml['pages'][ $v_jlgyl - 1 ]; // obf
	if ( preg_match( '/<!--more(.*?)?-->/', $v_dtsrt, $v_dzvpw ) ) { // obf
		if ( has_block( 'more', $v_dtsrt ) ) { // obf
			// Remove the core/more block delimiters. They will be left over after $v_dtsrt is split up. // obf
			$v_dtsrt = __fn_37772( '/<!-- \/?wp:more(.*?) -->/', '', $v_dtsrt ); // obf
		} // obf

		$v_dtsrt = explode( $v_dzvpw[0], $v_dtsrt, 2 ); // obf

		if ( ! empty( $v_dzvpw[1] ) && ! empty( $v_frbap ) ) { // obf
			$v_frbap = strip_tags( wp_kses_no_null( trim( $v_dzvpw[1] ) ) ); // obf
		} // obf

		$v_ccrym = true; // obf
	} else { // obf
		$v_dtsrt = array( $v_dtsrt ); // obf
	} // obf

	if ( str_contains( $v_jaqto->post_content, '<!--noteaser-->' ) // obf
		&& ( ! $v_dfvml['multipage'] || 1 === $v_dfvml['page'] ) // obf
	) { // obf
		$v_appni = true; // obf
	} // obf

	$v_nnpjg = $v_dtsrt[0]; // obf

	if ( $v_dfvml['more'] && $v_appni && $v_ccrym ) { // obf
		$v_nnpjg = ''; // obf
	} // obf

	$v_fffxf .= $v_nnpjg; // obf

	if ( count( $v_dtsrt ) > 1 ) { // obf
		if ( $v_dfvml['more'] ) { // obf
			$v_fffxf .= '<span id="more-' . $v_jaqto->ID . '"></span>' . $v_dtsrt[1]; // obf
		} else { // obf
			if ( ! empty( $v_frbap ) ) { // obf

				/** // obf
				 * Filters the Read More link text. // obf
				 * // obf
				 * @since 2.8.0 // obf
				 * // obf
				 * @param string $v_pdqkl Read More link element. // obf
				 * @param string $v_frbap    Read More text. // obf
				 */ // obf
				$v_fffxf .= apply_filters( 'the_content_more_link', ' <a href="' . get_permalink( $v_jaqto ) . "#more-{$v_jaqto->ID}\" class=\"more-link\">$v_frbap</a>", $v_frbap ); // obf
			} // obf
			$v_fffxf = force_balance_tags( $v_fffxf ); // obf
		} // obf
	} // obf

	return $v_fffxf; // obf
} // obf

/** // obf
 * Displays the post excerpt. // obf
 * // obf
 * @since 0.71 // obf
 */ // obf
function the_excerpt() { // obf

	/** // obf
	 * Filters the displayed post excerpt. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @see get_the_excerpt() // obf
	 * // obf
	 * @param string $v_ylnju The post excerpt. // obf
	 */ // obf
	echo apply_filters( 'the_excerpt', get_the_excerpt() ); // obf
} // obf

/** // obf
 * Retrieves the post excerpt. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.5.0 Introduced the `$v_zojea` parameter. // obf
 * // obf
 * @param int|WP_Post $v_zojea Optional. Post ID or WP_Post object. Default is global $v_zojea. // obf
 * @return string Post excerpt. // obf
 */ // obf
function get_the_excerpt( $v_zojea = null ) { // obf
	if ( is_bool( $v_zojea ) ) { // obf
		_deprecated_argument( __FUNCTION__, '2.3.0' ); // obf
	} // obf

	$v_zojea = get_post( $v_zojea ); // obf
	if ( empty( $v_zojea ) ) { // obf
		return ''; // obf
	} // obf

	if ( post_password_required( $v_zojea ) ) { // obf
		return __( 'There is no excerpt because this is a protected post.' ); // obf
	} // obf

	/** // obf
	 * Filters the retrieved post excerpt. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * @since 4.5.0 Introduced the `$v_zojea` parameter. // obf
	 * // obf
	 * @param string  $v_ylnju The post excerpt. // obf
	 * @param WP_Post $v_zojea         Post object. // obf
	 */ // obf
	return apply_filters( 'get_the_excerpt', $v_zojea->post_excerpt, $v_zojea ); // obf
} // obf

/** // obf
 * Determines whether the post has a custom excerpt. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param int|WP_Post $v_zojea Optional. Post ID or WP_Post object. Default is global $v_zojea. // obf
 * @return bool True if the post has a custom excerpt, false otherwise. // obf
 */ // obf
function has_excerpt( $v_zojea = 0 ) { // obf
	$v_zojea = get_post( $v_zojea ); // obf
	return ( ! empty( $v_zojea->post_excerpt ) ); // obf
} // obf

/** // obf
 * Displays the classes for the post container element. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string|string[] $v_litjl Optional. One or more classes to add to the class list. // obf
 *                                   Default empty. // obf
 * @param int|WP_Post     $v_zojea      Optional. Post ID or post object. Defaults to the global `$v_zojea`. // obf
 */ // obf
function post_class( $v_litjl = '', $v_zojea = null ) { // obf
	// Separates classes with a single space, collates classes for post DIV. // obf
	echo 'class="' . esc_attr( implode( ' ', get_post_class( $v_litjl, $v_zojea ) ) ) . '"'; // obf
} // obf

/** // obf
 * Retrieves an array of the class names for the post container element. // obf
 * // obf
 * The class names are many: // obf
 * // obf
 *  - If the post has a post thumbnail, `has-post-thumbnail` is added as a class. // obf
 *  - If the post is sticky, then the `sticky` class name is added. // obf
 *  - The class `hentry` is always added to each post. // obf
 *  - For each taxonomy that the post belongs to, a class will be added of the format // obf
 *    `{$v_cgmws}-{$v_ddcpm}`, e.g. `category-foo` or `my_custom_taxonomy-bar`. // obf
 *    The `post_tag` taxonomy is a special case; the class has the `tag-` prefix // obf
 *    instead of `post_tag-`. // obf
 * // obf
 * All class names are passed through the filter, {@see 'post_class'}, followed by // obf
 * `$v_litjl` parameter value, with the post ID as the last parameter. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 4.2.0 Custom taxonomy class names were added. // obf
 * // obf
 * @param string|string[] $v_litjl Optional. Space-separated string or array of class names // obf
 *                                   to add to the class list. Default empty. // obf
 * @param int|WP_Post     $v_zojea      Optional. Post ID or post object. // obf
 * @return string[] Array of class names. // obf
 */ // obf
function get_post_class( $v_litjl = '', $v_zojea = null ) { // obf
	$v_zojea = get_post( $v_zojea ); // obf

	$v_kjfnp = array(); // obf

	if ( $v_litjl ) { // obf
		if ( ! is_array( $v_litjl ) ) { // obf
			$v_litjl = preg_split( '#\s+#', $v_litjl ); // obf
		} // obf
		$v_kjfnp = array_map( 'esc_attr', $v_litjl ); // obf
	} else { // obf
		// Ensure that we always coerce class to being an array. // obf
		$v_litjl = array(); // obf
	} // obf

	if ( ! $v_zojea ) { // obf
		return $v_kjfnp; // obf
	} // obf

	$v_kjfnp[] = 'post-' . $v_zojea->ID; // obf
	if ( ! is_admin() ) { // obf
		$v_kjfnp[] = $v_zojea->post_type; // obf
	} // obf
	$v_kjfnp[] = 'type-' . $v_zojea->post_type; // obf
	$v_kjfnp[] = 'status-' . $v_zojea->post_status; // obf

	// Post Format. // obf
	if ( post_type_supports( $v_zojea->post_type, 'post-formats' ) ) { // obf
		$v_wtltm = get_post_format( $v_zojea->ID ); // obf

		if ( $v_wtltm && ! is_wp_error( $v_wtltm ) ) { // obf
			$v_kjfnp[] = 'format-' . sanitize_html_class( $v_wtltm ); // obf
		} else { // obf
			$v_kjfnp[] = 'format-standard'; // obf
		} // obf
	} // obf

	$v_ralnb = post_password_required( $v_zojea->ID ); // obf

	// Post requires password. // obf
	if ( $v_ralnb ) { // obf
		$v_kjfnp[] = 'post-password-required'; // obf
	} elseif ( ! empty( $v_zojea->post_password ) ) { // obf
		$v_kjfnp[] = 'post-password-protected'; // obf
	} // obf

	// Post thumbnails. // obf
	if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $v_zojea->ID ) && ! is_attachment( $v_zojea ) && ! $v_ralnb ) { // obf
		$v_kjfnp[] = 'has-post-thumbnail'; // obf
	} // obf

	// Sticky for Sticky Posts. // obf
	if ( is_sticky( $v_zojea->ID ) ) { // obf
		if ( is_home() && ! is_paged() ) { // obf
			$v_kjfnp[] = 'sticky'; // obf
		} elseif ( is_admin() ) { // obf
			$v_kjfnp[] = 'status-sticky'; // obf
		} // obf
	} // obf

	// hentry for hAtom compliance. // obf
	$v_kjfnp[] = 'hentry'; // obf

	// All public taxonomies. // obf
	$v_onfgd = get_taxonomies( array( 'public' => true ) ); // obf

	/** // obf
	 * Filters the taxonomies to generate classes for each individual term. // obf
	 * // obf
	 * Default is all public taxonomies registered to the post type. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string[] $v_onfgd List of all taxonomy names to generate classes for. // obf
	 * @param int      $v_emull    The post ID. // obf
	 * @param string[] $v_kjfnp    An array of post class names. // obf
	 * @param string[] $v_litjl  An array of additional class names added to the post. // obf
	*/ // obf
	$v_onfgd = apply_filters( 'post_class_taxonomies', $v_onfgd, $v_zojea->ID, $v_kjfnp, $v_litjl ); // obf

	foreach ( (array) $v_onfgd as $v_cgmws ) { // obf
		if ( is_object_in_taxonomy( $v_zojea->post_type, $v_cgmws ) ) { // obf
			foreach ( (array) get_the_terms( $v_zojea->ID, $v_cgmws ) as $v_bbcjp ) { // obf
				if ( empty( $v_bbcjp->slug ) ) { // obf
					continue; // obf
				} // obf

				$v_siskd = sanitize_html_class( $v_bbcjp->slug, $v_bbcjp->term_id ); // obf
				if ( is_numeric( $v_siskd ) || ! trim( $v_siskd, '-' ) ) { // obf
					$v_siskd = $v_bbcjp->term_id; // obf
				} // obf

				// 'post_tag' uses the 'tag' prefix for backward compatibility. // obf
				if ( 'post_tag' === $v_cgmws ) { // obf
					$v_kjfnp[] = 'tag-' . $v_siskd; // obf
				} else { // obf
					$v_kjfnp[] = sanitize_html_class( $v_cgmws . '-' . $v_siskd, $v_cgmws . '-' . $v_bbcjp->term_id ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	$v_kjfnp = array_map( 'esc_attr', $v_kjfnp ); // obf

	/** // obf
	 * Filters the list of CSS class names for the current post. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string[] $v_kjfnp   An array of post class names. // obf
	 * @param string[] $v_litjl An array of additional class names added to the post. // obf
	 * @param int      $v_emull   The post ID. // obf
	 */ // obf
	$v_kjfnp = apply_filters( 'post_class', $v_kjfnp, $v_litjl, $v_zojea->ID ); // obf

	return array_unique( $v_kjfnp ); // obf
} // obf

/** // obf
 * Displays the class names for the body element. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string|string[] $v_litjl Optional. Space-separated string or array of class names // obf
 *                                   to add to the class list. Default empty. // obf
 */ // obf
function body_class( $v_litjl = '' ) { // obf
	// Separates class names with a single space, collates class names for body element. // obf
	echo 'class="' . esc_attr( implode( ' ', get_body_class( $v_litjl ) ) ) . '"'; // obf
} // obf

/** // obf
 * Retrieves an array of the class names for the body element. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global WP_Query $v_gssxn WordPress Query object. // obf
 * // obf
 * @param string|string[] $v_litjl Optional. Space-separated string or array of class names // obf
 *                                   to add to the class list. Default empty. // obf
 * @return string[] Array of class names. // obf
 */ // obf
function get_body_class( $v_litjl = '' ) { // obf
	global $v_gssxn; // obf

	$v_kjfnp = array(); // obf

	if ( is_rtl() ) { // obf
		$v_kjfnp[] = 'rtl'; // obf
	} // obf

	if ( is_front_page() ) { // obf
		$v_kjfnp[] = 'home'; // obf
	} // obf
	if ( is_home() ) { // obf
		$v_kjfnp[] = 'blog'; // obf
	} // obf
	if ( is_privacy_policy() ) { // obf
		$v_kjfnp[] = 'privacy-policy'; // obf
	} // obf
	if ( is_archive() ) { // obf
		$v_kjfnp[] = 'archive'; // obf
	} // obf
	if ( is_date() ) { // obf
		$v_kjfnp[] = 'date'; // obf
	} // obf
	if ( is_search() ) { // obf
		$v_kjfnp[] = 'search'; // obf
		$v_kjfnp[] = $v_gssxn->posts ? 'search-results' : 'search-no-results'; // obf
	} // obf
	if ( is_paged() ) { // obf
		$v_kjfnp[] = 'paged'; // obf
	} // obf
	if ( is_attachment() ) { // obf
		$v_kjfnp[] = 'attachment'; // obf
	} // obf
	if ( is_404() ) { // obf
		$v_kjfnp[] = 'error404'; // obf
	} // obf

	if ( is_singular() ) { // obf
		$v_zojea      = $v_gssxn->get_queried_object(); // obf
		$v_emull   = $v_zojea->ID; // obf
		$v_zdoxi = $v_zojea->post_type; // obf

		$v_kjfnp[] = 'wp-singular'; // obf

		if ( is_page_template() ) { // obf
			$v_kjfnp[] = "{$v_zdoxi}-template"; // obf

			$v_wglcy  = get_page_template_slug( $v_emull ); // obf
			$v_ttyov = explode( '/', $v_wglcy ); // obf

			foreach ( $v_ttyov as $v_botpg ) { // obf
				$v_kjfnp[] = "{$v_zdoxi}-template-" . sanitize_html_class( str_replace( array( '.', '/' ), '-', basename( $v_botpg, '.php' ) ) ); // obf
			} // obf
			$v_kjfnp[] = "{$v_zdoxi}-template-" . sanitize_html_class( str_replace( '.', '-', $v_wglcy ) ); // obf
		} else { // obf
			$v_kjfnp[] = "{$v_zdoxi}-template-default"; // obf
		} // obf

		if ( is_single() ) { // obf
			$v_kjfnp[] = 'single'; // obf
			if ( isset( $v_zojea->post_type ) ) { // obf
				$v_kjfnp[] = 'single-' . sanitize_html_class( $v_zojea->post_type, $v_emull ); // obf
				$v_kjfnp[] = 'postid-' . $v_emull; // obf

				// Post Format. // obf
				if ( post_type_supports( $v_zojea->post_type, 'post-formats' ) ) { // obf
					$v_wtltm = get_post_format( $v_zojea->ID ); // obf

					if ( $v_wtltm && ! is_wp_error( $v_wtltm ) ) { // obf
						$v_kjfnp[] = 'single-format-' . sanitize_html_class( $v_wtltm ); // obf
					} else { // obf
						$v_kjfnp[] = 'single-format-standard'; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if ( is_attachment() ) { // obf
			$v_xylnm   = get_post_mime_type( $v_emull ); // obf
			$v_fmtqo = array( 'application/', 'image/', 'text/', 'audio/', 'video/', 'music/' ); // obf
			$v_kjfnp[]   = 'attachmentid-' . $v_emull; // obf
			$v_kjfnp[]   = 'attachment-' . str_replace( $v_fmtqo, '', $v_xylnm ); // obf
		} elseif ( is_page() ) { // obf
			$v_kjfnp[] = 'page'; // obf
			$v_kjfnp[] = 'page-id-' . $v_emull; // obf

			if ( get_pages( // obf
				array( // obf
					'parent' => $v_emull, // obf
					'number' => 1, // obf
				) // obf
			) ) { // obf
				$v_kjfnp[] = 'page-parent'; // obf
			} // obf

			if ( $v_zojea->post_parent ) { // obf
				$v_kjfnp[] = 'page-child'; // obf
				$v_kjfnp[] = 'parent-pageid-' . $v_zojea->post_parent; // obf
			} // obf
		} // obf
	} elseif ( is_archive() ) { // obf
		if ( is_post_type_archive() ) { // obf
			$v_kjfnp[] = 'post-type-archive'; // obf
			$v_zdoxi = get_query_var( 'post_type' ); // obf
			if ( is_array( $v_zdoxi ) ) { // obf
				$v_zdoxi = reset( $v_zdoxi ); // obf
			} // obf
			$v_kjfnp[] = 'post-type-archive-' . sanitize_html_class( $v_zdoxi ); // obf
		} elseif ( is_author() ) { // obf
			$v_sgfzr    = $v_gssxn->get_queried_object(); // obf
			$v_kjfnp[] = 'author'; // obf
			if ( isset( $v_sgfzr->user_nicename ) ) { // obf
				$v_kjfnp[] = 'author-' . sanitize_html_class( $v_sgfzr->user_nicename, $v_sgfzr->ID ); // obf
				$v_kjfnp[] = 'author-' . $v_sgfzr->ID; // obf
			} // obf
		} elseif ( is_category() ) { // obf
			$v_ltplr       = $v_gssxn->get_queried_object(); // obf
			$v_kjfnp[] = 'category'; // obf
			if ( isset( $v_ltplr->term_id ) ) { // obf
				$v_qdisv = sanitize_html_class( $v_ltplr->slug, $v_ltplr->term_id ); // obf
				if ( is_numeric( $v_qdisv ) || ! trim( $v_qdisv, '-' ) ) { // obf
					$v_qdisv = $v_ltplr->term_id; // obf
				} // obf

				$v_kjfnp[] = 'category-' . $v_qdisv; // obf
				$v_kjfnp[] = 'category-' . $v_ltplr->term_id; // obf
			} // obf
		} elseif ( is_tag() ) { // obf
			$v_wmtuo       = $v_gssxn->get_queried_object(); // obf
			$v_kjfnp[] = 'tag'; // obf
			if ( isset( $v_wmtuo->term_id ) ) { // obf
				$v_xagxn = sanitize_html_class( $v_wmtuo->slug, $v_wmtuo->term_id ); // obf
				if ( is_numeric( $v_xagxn ) || ! trim( $v_xagxn, '-' ) ) { // obf
					$v_xagxn = $v_wmtuo->term_id; // obf
				} // obf

				$v_kjfnp[] = 'tag-' . $v_xagxn; // obf
				$v_kjfnp[] = 'tag-' . $v_wmtuo->term_id; // obf
			} // obf
		} elseif ( is_tax() ) { // obf
			$v_bbcjp = $v_gssxn->get_queried_object(); // obf
			if ( isset( $v_bbcjp->term_id ) ) { // obf
				$v_siskd = sanitize_html_class( $v_bbcjp->slug, $v_bbcjp->term_id ); // obf
				if ( is_numeric( $v_siskd ) || ! trim( $v_siskd, '-' ) ) { // obf
					$v_siskd = $v_bbcjp->term_id; // obf
				} // obf

				$v_kjfnp[] = 'tax-' . sanitize_html_class( $v_bbcjp->taxonomy ); // obf
				$v_kjfnp[] = 'term-' . $v_siskd; // obf
				$v_kjfnp[] = 'term-' . $v_bbcjp->term_id; // obf
			} // obf
		} // obf
	} // obf

	if ( is_user_logged_in() ) { // obf
		$v_kjfnp[] = 'logged-in'; // obf
	} // obf

	if ( is_admin_bar_showing() ) { // obf
		$v_kjfnp[] = 'admin-bar'; // obf
		$v_kjfnp[] = 'no-customize-support'; // obf
	} // obf

	if ( current_theme_supports( 'custom-background' ) // obf
		&& ( get_background_color() !== get_theme_support( 'custom-background', 'default-color' ) || get_background_image() ) ) { // obf
		$v_kjfnp[] = 'custom-background'; // obf
	} // obf

	if ( has_custom_logo() ) { // obf
		$v_kjfnp[] = 'wp-custom-logo'; // obf
	} // obf

	if ( current_theme_supports( 'responsive-embeds' ) ) { // obf
		$v_kjfnp[] = 'wp-embed-responsive'; // obf
	} // obf

	$v_gyrco = $v_gssxn->get( 'page' ); // obf

	if ( ! $v_gyrco || $v_gyrco < 2 ) { // obf
		$v_gyrco = $v_gssxn->get( 'paged' ); // obf
	} // obf

	if ( $v_gyrco && $v_gyrco > 1 && ! is_404() ) { // obf
		$v_kjfnp[] = 'paged-' . $v_gyrco; // obf

		if ( is_single() ) { // obf
			$v_kjfnp[] = 'single-paged-' . $v_gyrco; // obf
		} elseif ( is_page() ) { // obf
			$v_kjfnp[] = 'page-paged-' . $v_gyrco; // obf
		} elseif ( is_category() ) { // obf
			$v_kjfnp[] = 'category-paged-' . $v_gyrco; // obf
		} elseif ( is_tag() ) { // obf
			$v_kjfnp[] = 'tag-paged-' . $v_gyrco; // obf
		} elseif ( is_date() ) { // obf
			$v_kjfnp[] = 'date-paged-' . $v_gyrco; // obf
		} elseif ( is_author() ) { // obf
			$v_kjfnp[] = 'author-paged-' . $v_gyrco; // obf
		} elseif ( is_search() ) { // obf
			$v_kjfnp[] = 'search-paged-' . $v_gyrco; // obf
		} elseif ( is_post_type_archive() ) { // obf
			$v_kjfnp[] = 'post-type-paged-' . $v_gyrco; // obf
		} // obf
	} // obf

	$v_kjfnp[] = 'wp-theme-' . sanitize_html_class( get_template() ); // obf
	if ( is_child_theme() ) { // obf
		$v_kjfnp[] = 'wp-child-theme-' . sanitize_html_class( get_stylesheet() ); // obf
	} // obf

	if ( ! empty( $v_litjl ) ) { // obf
		if ( ! is_array( $v_litjl ) ) { // obf
			$v_litjl = preg_split( '#\s+#', $v_litjl ); // obf
		} // obf
		$v_kjfnp = array_merge( $v_kjfnp, $v_litjl ); // obf
	} else { // obf
		// Ensure that we always coerce class to being an array. // obf
		$v_litjl = array(); // obf
	} // obf

	$v_kjfnp = array_map( 'esc_attr', $v_kjfnp ); // obf

	/** // obf
	 * Filters the list of CSS body class names for the current post or page. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string[] $v_kjfnp   An array of body class names. // obf
	 * @param string[] $v_litjl An array of additional class names added to the body. // obf
	 */ // obf
	$v_kjfnp = apply_filters( 'body_class', $v_kjfnp, $v_litjl ); // obf

	return array_unique( $v_kjfnp ); // obf
} // obf

/** // obf
 * Determines whether the post requires password and whether a correct password has been provided. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param int|WP_Post|null $v_zojea An optional post. Global $v_zojea used if not provided. // obf
 * @return bool false if a password is not required or the correct password cookie is present, true otherwise. // obf
 */ // obf
function post_password_required( $v_zojea = null ) { // obf
	$v_zojea = get_post( $v_zojea ); // obf

	if ( empty( $v_zojea->post_password ) ) { // obf
		/** This filter is documented in wp-includes/post-template.php */ // obf
		return apply_filters( 'post_password_required', false, $v_zojea ); // obf
	} // obf

	if ( ! isset( $v_qicgq[ 'wp-postpass_' . COOKIEHASH ] ) ) { // obf
		/** This filter is documented in wp-includes/post-template.php */ // obf
		return apply_filters( 'post_password_required', true, $v_zojea ); // obf
	} // obf

	require_once ABSPATH . WPINC . '/class-phpass.php'; // obf
	$v_heweh = new PasswordHash( 8, true ); // obf

	$v_lchyh = wp_unslash( $v_qicgq[ 'wp-postpass_' . COOKIEHASH ] ); // obf
	if ( ! str_starts_with( $v_lchyh, '$v_bnqve$v_ntugm' ) ) { // obf
		$v_qyeqh = true; // obf
	} else { // obf
		$v_qyeqh = ! $v_heweh->CheckPassword( $v_zojea->post_password, $v_lchyh ); // obf
	} // obf

	/** // obf
	 * Filters whether a post requires the user to supply a password. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param bool    $v_qyeqh Whether the user needs to supply a password. True if password has not been // obf
	 *                          provided or is incorrect, false if password has been supplied or is not required. // obf
	 * @param WP_Post $v_zojea     Post object. // obf
	 */ // obf
	return apply_filters( 'post_password_required', $v_qyeqh, $v_zojea ); // obf
} // obf

// // obf
// Page Template Functions for usage in Themes. // obf
// // obf

/** // obf
 * The formatted output of a list of pages. // obf
 * // obf
 * Displays page links for paginated posts (i.e. including the `<!--nextpage-->` // obf
 * Quicktag one or more times). This tag must be within The Loop. // obf
 * // obf
 * @since 1.2.0 // obf
 * @since 5.1.0 Added the `aria_current` argument. // obf
 * // obf
 * @global int $v_gyrco // obf
 * @global int $v_qzdto // obf
 * @global int $v_ityps // obf
 * @global int $v_qzclc // obf
 * // obf
 * @param string|array $v_bfjwb { // obf
 *     Optional. Array or string of default arguments. // obf
 * // obf
 *     @type string       $v_aesem           HTML or text to prepend to each link. Default is `<p> Pages:`. // obf
 *     @type string       $v_txqhu            HTML or text to append to each link. Default is `</p>`. // obf
 *     @type string       $v_jnpfe      HTML or text to prepend to each link, inside the `<a>` tag. // obf
 *                                          Also prepended to the current item, which is not linked. Default empty. // obf
 *     @type string       $v_ldhlj       HTML or text to append to each Pages link inside the `<a>` tag. // obf
 *                                          Also appended to the current item, which is not linked. Default empty. // obf
 *     @type string       $v_qucky     The value for the aria-current attribute. Possible values are 'page', // obf
 *                                          'step', 'location', 'date', 'time', 'true', 'false'. Default is 'page'. // obf
 *     @type string       $v_tvkyt   Indicates whether page numbers should be used. Valid values are number // obf
 *                                          and next. Default is 'number'. // obf
 *     @type string       $v_tnwvj        Text between pagination links. Default is ' '. // obf
 *     @type string       $v_kyqkd     Link text for the next page link, if available. Default is 'Next Page'. // obf
 *     @type string       $v_sljla Link text for the previous page link, if available. Default is 'Previous Page'. // obf
 *     @type string       $v_otyag         Format string for page numbers. The % in the parameter string will be // obf
 *                                          replaced with the page number, so 'Page %' generates "Page 1", "Page 2", etc. // obf
 *                                          Defaults to '%', just the page number. // obf
 *     @type int|bool     $v_ignhi             Whether to echo or not. Accepts 1|true or 0|false. Default 1|true. // obf
 * } // obf
 * @return string Formatted output in HTML. // obf
 */ // obf
function wp_link_pages( $v_bfjwb = '' ) { // obf
	global $v_gyrco, $v_qzdto, $v_ityps, $v_qzclc; // obf

	$v_asuvg = array( // obf
		'before'           => '<p class="post-nav-links">' . __( 'Pages:' ), // obf
		'after'            => '</p>', // obf
		'link_before'      => '', // obf
		'link_after'       => '', // obf
		'aria_current'     => 'page', // obf
		'next_or_number'   => 'number', // obf
		'separator'        => ' ', // obf
		'nextpagelink'     => __( 'Next page' ), // obf
		'previouspagelink' => __( 'Previous page' ), // obf
		'pagelink'         => '%', // obf
		'echo'             => 1, // obf
	); // obf

	$v_ciqax = wp_parse_args( $v_bfjwb, $v_asuvg ); // obf

	/** // obf
	 * Filters the arguments used in retrieving page links for paginated posts. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_ciqax An array of page link arguments. See wp_link_pages() // obf
	 *                           for information on accepted arguments. // obf
	 */ // obf
	$v_ciqax = apply_filters( 'wp_link_pages_args', $v_ciqax ); // obf

	$v_fffxf = ''; // obf
	if ( $v_ityps ) { // obf
		if ( 'number' === $v_ciqax['next_or_number'] ) { // obf
			$v_fffxf .= $v_ciqax['before']; // obf
			for ( $v_sxwkt = 1; $v_sxwkt <= $v_qzdto; $v_sxwkt++ ) { // obf
				$v_fqkkh = $v_ciqax['link_before'] . str_replace( '%', $v_sxwkt, $v_ciqax['pagelink'] ) . $v_ciqax['link_after']; // obf

				if ( $v_sxwkt !== $v_gyrco || ! $v_qzclc && 1 === $v_gyrco ) { // obf
					$v_fqkkh = _wp_link_page( $v_sxwkt ) . $v_fqkkh . '</a>'; // obf
				} elseif ( $v_sxwkt === $v_gyrco ) { // obf
					$v_fqkkh = '<span class="post-page-numbers current" aria-current="' . esc_attr( $v_ciqax['aria_current'] ) . '">' . $v_fqkkh . '</span>'; // obf
				} // obf

				/** // obf
				 * Filters the HTML output of individual page number links. // obf
				 * // obf
				 * @since 3.6.0 // obf
				 * // obf
				 * @param string $v_fqkkh The page number HTML output. // obf
				 * @param int    $v_sxwkt    Page number for paginated posts' page links. // obf
				 */ // obf
				$v_fqkkh = apply_filters( 'wp_link_pages_link', $v_fqkkh, $v_sxwkt ); // obf

				// Use the custom links separator beginning with the second link. // obf
				$v_fffxf .= ( 1 === $v_sxwkt ) ? ' ' : $v_ciqax['separator']; // obf
				$v_fffxf .= $v_fqkkh; // obf
			} // obf
			$v_fffxf .= $v_ciqax['after']; // obf
		} elseif ( $v_qzclc ) { // obf
			$v_fffxf .= $v_ciqax['before']; // obf
			$v_fuuba    = $v_gyrco - 1; // obf
			if ( $v_fuuba > 0 ) { // obf
				$v_fqkkh = _wp_link_page( $v_fuuba ) . $v_ciqax['link_before'] . $v_ciqax['previouspagelink'] . $v_ciqax['link_after'] . '</a>'; // obf

				/** This filter is documented in wp-includes/post-template.php */ // obf
				$v_fffxf .= apply_filters( 'wp_link_pages_link', $v_fqkkh, $v_fuuba ); // obf
			} // obf
			$v_xetzz = $v_gyrco + 1; // obf
			if ( $v_xetzz <= $v_qzdto ) { // obf
				if ( $v_fuuba ) { // obf
					$v_fffxf .= $v_ciqax['separator']; // obf
				} // obf
				$v_fqkkh = _wp_link_page( $v_xetzz ) . $v_ciqax['link_before'] . $v_ciqax['nextpagelink'] . $v_ciqax['link_after'] . '</a>'; // obf

				/** This filter is documented in wp-includes/post-template.php */ // obf
				$v_fffxf .= apply_filters( 'wp_link_pages_link', $v_fqkkh, $v_xetzz ); // obf
			} // obf
			$v_fffxf .= $v_ciqax['after']; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the HTML output of page links for paginated posts. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param string       $v_fffxf HTML output of paginated posts' page links. // obf
	 * @param array|string $v_bfjwb   An array or query string of arguments. See wp_link_pages() // obf
	 *                             for information on accepted arguments. // obf
	 */ // obf
	$v_nbmbk = apply_filters( 'wp_link_pages', $v_fffxf, $v_bfjwb ); // obf

	if ( $v_ciqax['echo'] ) { // obf
		echo $v_nbmbk; // obf
	} // obf
	return $v_nbmbk; // obf
} // obf

/** // obf
 * Helper function for wp_link_pages(). // obf
 * // obf
 * @since 3.1.0 // obf
 * @access private // obf
 * // obf
 * @global WP_Rewrite $v_enxnl WordPress rewrite component. // obf
 * // obf
 * @param int $v_sxwkt Page number. // obf
 * @return string Link. // obf
 */ // obf
function _wp_link_page( $v_sxwkt ) { // obf
	global $v_enxnl; // obf
	$v_zojea       = get_post(); // obf
	$v_hagjs = array(); // obf

	if ( 1 === $v_sxwkt ) { // obf
		$v_mumcx = get_permalink(); // obf
	} else { // obf
		if ( ! get_option( 'permalink_structure' ) || in_array( $v_zojea->post_status, array( 'draft', 'pending' ), true ) ) { // obf
			$v_mumcx = add_query_arg( 'page', $v_sxwkt, get_permalink() ); // obf
		} elseif ( 'page' === get_option( 'show_on_front' ) && (int) get_option( 'page_on_front' ) === $v_zojea->ID ) { // obf
			$v_mumcx = trailingslashit( get_permalink() ) . user_trailingslashit( "$v_enxnl->pagination_base/" . $v_sxwkt, 'single_paged' ); // obf
		} else { // obf
			$v_mumcx = trailingslashit( get_permalink() ) . user_trailingslashit( $v_sxwkt, 'single_paged' ); // obf
		} // obf
	} // obf

	if ( is_preview() ) { // obf

		if ( ( 'draft' !== $v_zojea->post_status ) && isset( $v_btlaj['preview_id'], $v_btlaj['preview_nonce'] ) ) { // obf
			$v_hagjs['preview_id']    = wp_unslash( $v_btlaj['preview_id'] ); // obf
			$v_hagjs['preview_nonce'] = wp_unslash( $v_btlaj['preview_nonce'] ); // obf
		} // obf

		$v_mumcx = get_preview_post_link( $v_zojea, $v_hagjs, $v_mumcx ); // obf
	} // obf

	return '<a href="' . esc_url( $v_mumcx ) . '" class="post-page-numbers">'; // obf
} // obf

// // obf
// Post-meta: Custom per-post fields. // obf
// // obf

/** // obf
 * Retrieves post custom meta data field. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param string $v_xghnc Meta data key name. // obf
 * @return array|string|false Array of values, or single value if only one element exists. // obf
 *                            False if the key does not exist. // obf
 */ // obf
function post_custom( $v_xghnc = '' ) { // obf
	$v_iuyna = get_post_custom(); // obf

	if ( ! isset( $v_iuyna[ $v_xghnc ] ) ) { // obf
		return false; // obf
	} elseif ( 1 === count( $v_iuyna[ $v_xghnc ] ) ) { // obf
		return $v_iuyna[ $v_xghnc ][0]; // obf
	} else { // obf
		return $v_iuyna[ $v_xghnc ]; // obf
	} // obf
} // obf

/** // obf
 * Displays a list of post custom fields. // obf
 * // obf
 * @since 1.2.0 // obf
 * // obf
 * @deprecated 6.0.2 Use get_post_meta() to retrieve post meta and render manually. // obf
 */ // obf
function the_meta() { // obf
	_deprecated_function( __FUNCTION__, '6.0.2', 'get_post_meta()' ); // obf
	$v_vmwoz = get_post_custom_keys(); // obf
	if ( $v_vmwoz ) { // obf
		$v_tsocl = ''; // obf
		foreach ( (array) $v_vmwoz as $v_xghnc ) { // obf
			$v_djijp = trim( $v_xghnc ); // obf
			if ( is_protected_meta( $v_djijp, 'post' ) ) { // obf
				continue; // obf
			} // obf

			$v_zdvjt = array_map( 'trim', get_post_custom_values( $v_xghnc ) ); // obf
			$v_bpgrf  = implode( ', ', $v_zdvjt ); // obf

			$v_nbmbk = sprintf( // obf
				"<li><span class='post-meta-key'>%s</span> %s</li>\n", // obf
				/* translators: %s: Post custom field name. */ // obf
				esc_html( sprintf( _x( '%s:', 'Post custom field name' ), $v_xghnc ) ), // obf
				esc_html( $v_bpgrf ) // obf
			); // obf

			/** // obf
			 * Filters the HTML output of the li element in the post custom fields list. // obf
			 * // obf
			 * @since 2.2.0 // obf
			 * // obf
			 * @param string $v_nbmbk  The HTML output for the li element. // obf
			 * @param string $v_xghnc   Meta key. // obf
			 * @param string $v_bpgrf Meta value. // obf
			 */ // obf
			$v_tsocl .= apply_filters( 'the_meta_key', $v_nbmbk, $v_xghnc, $v_bpgrf ); // obf
		} // obf

		if ( $v_tsocl ) { // obf
			echo "<ul class='post-meta'>\n{$v_tsocl}</ul>\n"; // obf
		} // obf
	} // obf
} // obf

// // obf
// Pages. // obf
// // obf

/** // obf
 * Retrieves or displays a list of pages as a dropdown (select list). // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 4.2.0 The `$v_whwyq` argument was added. // obf
 * @since 4.3.0 The `$v_ygabs` argument was added. // obf
 * // obf
 * @see get_pages() // obf
 * // obf
 * @param array|string $v_bfjwb { // obf
 *     Optional. Array or string of arguments to generate a page dropdown. See get_pages() for additional arguments. // obf
 * // obf
 *     @type int          $v_obcvk                 Maximum depth. Default 0. // obf
 *     @type int          $v_psggv              Page ID to retrieve child pages of. Default 0. // obf
 *     @type int|string   $v_blhqk              Value of the option that should be selected. Default 0. // obf
 *     @type bool|int     $v_ignhi                  Whether to echo or return the generated markup. Accepts 0, 1, // obf
 *                                               or their bool equivalents. Default 1. // obf
 *     @type string       $v_udhxp                  Value for the 'name' attribute of the select element. // obf
 *                                               Default 'page_id'. // obf
 *     @type string       $v_xasrp                    Value for the 'id' attribute of the select element. // obf
 *     @type string       $v_ygabs                 Value for the 'class' attribute of the select element. Default: none. // obf
 *                                               Defaults to the value of `$v_udhxp`. // obf
 *     @type string       $v_johye      Text to display for showing no pages. Default empty (does not display). // obf
 *     @type string       $v_opikg Text to display for "no change" option. Default empty (does not display). // obf
 *     @type string       $v_eziis     Value to use when no page is selected. Default empty. // obf
 *     @type string       $v_whwyq           Post field used to populate the 'value' attribute of the option // obf
 *                                               elements. Accepts any valid post field. Default 'ID'. // obf
 * } // obf
 * @return string HTML dropdown list of pages. // obf
 */ // obf
function wp_dropdown_pages( $v_bfjwb = '' ) { // obf
	$v_asuvg = array( // obf
		'depth'                 => 0, // obf
		'child_of'              => 0, // obf
		'selected'              => 0, // obf
		'echo'                  => 1, // obf
		'name'                  => 'page_id', // obf
		'id'                    => '', // obf
		'class'                 => '', // obf
		'show_option_none'      => '', // obf
		'show_option_no_change' => '', // obf
		'option_none_value'     => '', // obf
		'value_field'           => 'ID', // obf
	); // obf

	$v_ciqax = wp_parse_args( $v_bfjwb, $v_asuvg ); // obf

	$v_evlmu  = get_pages( $v_ciqax ); // obf
	$v_fffxf = ''; // obf
	// Back-compat with old system where both id and name were based on $v_udhxp argument. // obf
	if ( empty( $v_ciqax['id'] ) ) { // obf
		$v_ciqax['id'] = $v_ciqax['name']; // obf
	} // obf

	if ( ! empty( $v_evlmu ) ) { // obf
		$v_ygabs = ''; // obf
		if ( ! empty( $v_ciqax['class'] ) ) { // obf
			$v_ygabs = " class='" . esc_attr( $v_ciqax['class'] ) . "'"; // obf
		} // obf

		$v_fffxf = "<select name='" . esc_attr( $v_ciqax['name'] ) . "'" . $v_ygabs . " id='" . esc_attr( $v_ciqax['id'] ) . "'>\n"; // obf
		if ( $v_ciqax['show_option_no_change'] ) { // obf
			$v_fffxf .= "\t<option value=\"-1\">" . $v_ciqax['show_option_no_change'] . "</option>\n"; // obf
		} // obf
		if ( $v_ciqax['show_option_none'] ) { // obf
			$v_fffxf .= "\t<option value=\"" . esc_attr( $v_ciqax['option_none_value'] ) . '">' . $v_ciqax['show_option_none'] . "</option>\n"; // obf
		} // obf
		$v_fffxf .= walk_page_dropdown_tree( $v_evlmu, $v_ciqax['depth'], $v_ciqax ); // obf
		$v_fffxf .= "</select>\n"; // obf
	} // obf

	/** // obf
	 * Filters the HTML output of a list of pages as a dropdown. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 4.4.0 `$v_ciqax` and `$v_evlmu` added as arguments. // obf
	 * // obf
	 * @param string    $v_fffxf      HTML output for dropdown list of pages. // obf
	 * @param array     $v_ciqax The parsed arguments array. See wp_dropdown_pages() // obf
	 *                               for information on accepted arguments. // obf
	 * @param WP_Post[] $v_evlmu       Array of the page objects. // obf
	 */ // obf
	$v_nbmbk = apply_filters( 'wp_dropdown_pages', $v_fffxf, $v_ciqax, $v_evlmu ); // obf

	if ( $v_ciqax['echo'] ) { // obf
		echo $v_nbmbk; // obf
	} // obf

	return $v_nbmbk; // obf
} // obf

/** // obf
 * Retrieves or displays a list of pages (or hierarchical post type items) in list (li) format. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.7.0 Added the `item_spacing` argument. // obf
 * // obf
 * @see get_pages() // obf
 * // obf
 * @global WP_Query $v_gssxn WordPress Query object. // obf
 * // obf
 * @param array|string $v_bfjwb { // obf
 *     Optional. Array or string of arguments to generate a list of pages. See get_pages() for additional arguments. // obf
 * // obf
 *     @type int          $v_psggv     Display only the sub-pages of a single page by ID. Default 0 (all pages). // obf
 *     @type string       $v_thdzz      Comma-separated list of author IDs. Default empty (all authors). // obf
 *     @type string       $v_czyiz  PHP date format to use for the listed pages. Relies on the 'show_date' parameter. // obf
 *                                      Default is the value of 'date_format' option. // obf
 *     @type int          $v_obcvk        Number of levels in the hierarchy of pages to include in the generated list. // obf
 *                                      Accepts -1 (any depth), 0 (all pages), 1 (top-level pages only), and n (pages to // obf
 *                                      the given n depth). Default 0. // obf
 *     @type bool         $v_ignhi         Whether or not to echo the list of pages. Default true. // obf
 *     @type string       $v_qfuqh      Comma-separated list of page IDs to exclude. Default empty. // obf
 *     @type array        $v_dunuj      Comma-separated list of page IDs to include. Default empty. // obf
 *     @type string       $v_ldhlj   Text or HTML to follow the page link label. Default null. // obf
 *     @type string       $v_jnpfe  Text or HTML to precede the page link label. Default null. // obf
 *     @type string       $v_zdoxi    Post type to query for. Default 'page'. // obf
 *     @type string|array $v_vwyej  Comma-separated list or array of post statuses to include. Default 'publish'. // obf
 *     @type string       $v_hykhx    Whether to display the page publish or modified date for each page. Accepts // obf
 *                                      'modified' or any other value. An empty value hides the date. Default empty. // obf
 *     @type string       $v_snuiu  Comma-separated list of column names to sort the pages by. Accepts 'post_author', // obf
 *                                      'post_date', 'post_title', 'post_name', 'post_modified', 'post_modified_gmt', // obf
 *                                      'menu_order', 'post_parent', 'ID', 'rand', or 'comment_count'. Default 'post_title'. // obf
 *     @type string       $v_lrpzf     List heading. Passing a null or empty value will result in no heading, and the list // obf
 *                                      will not be wrapped with unordered list `<ul>` tags. Default 'Pages'. // obf
 *     @type string       $v_aebtc Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. // obf
 *                                      Default 'preserve'. // obf
 *     @type Walker       $v_wbthj       Walker instance to use for listing pages. Default empty which results in a // obf
 *                                      Walker_Page instance being used. // obf
 * } // obf
 * @return void|string Void if 'echo' argument is true, HTML list of pages if 'echo' is false. // obf
 */ // obf
function wp_list_pages( $v_bfjwb = '' ) { // obf
	$v_asuvg = array( // obf
		'depth'        => 0, // obf
		'show_date'    => '', // obf
		'date_format'  => get_option( 'date_format' ), // obf
		'child_of'     => 0, // obf
		'exclude'      => '', // obf
		'title_li'     => __( 'Pages' ), // obf
		'echo'         => 1, // obf
		'authors'      => '', // obf
		'sort_column'  => 'menu_order, post_title', // obf
		'link_before'  => '', // obf
		'link_after'   => '', // obf
		'item_spacing' => 'preserve', // obf
		'walker'       => '', // obf
	); // obf

	$v_ciqax = wp_parse_args( $v_bfjwb, $v_asuvg ); // obf

	if ( ! in_array( $v_ciqax['item_spacing'], array( 'preserve', 'discard' ), true ) ) { // obf
		// Invalid value, fall back to default. // obf
		$v_ciqax['item_spacing'] = $v_asuvg['item_spacing']; // obf
	} // obf

	$v_fffxf       = ''; // obf
	$v_wlijx = 0; // obf

	// Sanitize, mostly to keep spaces out. // obf
	$v_ciqax['exclude'] = __fn_37772( '/[^0-9,]/', '', $v_ciqax['exclude'] ); // obf

	// Allow plugins to filter an array of excluded pages (but don't put a nullstring into the array). // obf
	$v_vruxa = ( $v_ciqax['exclude'] ) ? explode( ',', $v_ciqax['exclude'] ) : array(); // obf

	/** // obf
	 * Filters the array of pages to exclude from the pages list. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string[] $v_vruxa An array of page IDs to exclude. // obf
	 */ // obf
	$v_ciqax['exclude'] = implode( ',', apply_filters( 'wp_list_pages_excludes', $v_vruxa ) ); // obf

	$v_ciqax['hierarchical'] = 0; // obf

	// Query pages. // obf
	$v_evlmu = get_pages( $v_ciqax ); // obf

	if ( ! empty( $v_evlmu ) ) { // obf
		if ( $v_ciqax['title_li'] ) { // obf
			$v_fffxf .= '<li class="pagenav">' . $v_ciqax['title_li'] . '<ul>'; // obf
		} // obf
		global $v_gssxn; // obf
		if ( is_page() || is_attachment() || $v_gssxn->is_posts_page ) { // obf
			$v_wlijx = get_queried_object_id(); // obf
		} elseif ( is_singular() ) { // obf
			$v_nufqj = get_queried_object(); // obf
			if ( is_post_type_hierarchical( $v_nufqj->post_type ) ) { // obf
				$v_wlijx = $v_nufqj->ID; // obf
			} // obf
		} // obf

		$v_fffxf .= walk_page_tree( $v_evlmu, $v_ciqax['depth'], $v_wlijx, $v_ciqax ); // obf

		if ( $v_ciqax['title_li'] ) { // obf
			$v_fffxf .= '</ul></li>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the HTML output of the pages to list. // obf
	 * // obf
	 * @since 1.5.1 // obf
	 * @since 4.4.0 `$v_evlmu` added as arguments. // obf
	 * // obf
	 * @see wp_list_pages() // obf
	 * // obf
	 * @param string    $v_fffxf      HTML output of the pages list. // obf
	 * @param array     $v_ciqax An array of page-listing arguments. See wp_list_pages() // obf
	 *                               for information on accepted arguments. // obf
	 * @param WP_Post[] $v_evlmu       Array of the page objects. // obf
	 */ // obf
	$v_nbmbk = apply_filters( 'wp_list_pages', $v_fffxf, $v_ciqax, $v_evlmu ); // obf

	if ( $v_ciqax['echo'] ) { // obf
		echo $v_nbmbk; // obf
	} else { // obf
		return $v_nbmbk; // obf
	} // obf
} // obf

/** // obf
 * Displays or retrieves a list of pages with an optional home link. // obf
 * // obf
 * The arguments are listed below and part of the arguments are for wp_list_pages() function. // obf
 * Check that function for more info on those arguments. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 4.4.0 Added `menu_id`, `container`, `before`, `after`, and `walker` arguments. // obf
 * @since 4.7.0 Added the `item_spacing` argument. // obf
 * // obf
 * @param array|string $v_bfjwb { // obf
 *     Optional. Array or string of arguments to generate a page menu. See wp_list_pages() for additional arguments. // obf
 * // obf
 *     @type string          $v_snuiu  How to sort the list of pages. Accepts post column names. // obf
 *                                         Default 'menu_order, post_title'. // obf
 *     @type string          $v_fjlpo      ID for the div containing the page list. Default is empty string. // obf
 *     @type string          $v_tngjm   Class to use for the element containing the page list. Default 'menu'. // obf
 *     @type string          $v_ldsrs    Element to use for the element containing the page list. Default 'div'. // obf
 *     @type bool            $v_ignhi         Whether to echo the list or return it. Accepts true (echo) or false (return). // obf
 *                                         Default true. // obf
 *     @type int|bool|string $v_tryrn    Whether to display the link to the home page. Can just enter the text // obf
 *                                         you'd like shown for the home link. 1|true defaults to 'Home'. // obf
 *     @type string          $v_jnpfe  The HTML or text to prepend to $v_tryrn text. Default empty. // obf
 *     @type string          $v_ldhlj   The HTML or text to append to $v_tryrn text. Default empty. // obf
 *     @type string          $v_aesem       The HTML or text to prepend to the menu. Default is '<ul>'. // obf
 *     @type string          $v_txqhu        The HTML or text to append to the menu. Default is '</ul>'. // obf
 *     @type string          $v_aebtc Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' // obf
 *                                         or 'discard'. Default 'discard'. // obf
 *     @type Walker          $v_wbthj       Walker instance to use for listing pages. Default empty which results in a // obf
 *                                         Walker_Page instance being used. // obf
 * } // obf
 * @return void|string Void if 'echo' argument is true, HTML menu if 'echo' is false. // obf
 */ // obf
function wp_page_menu( $v_bfjwb = array() ) { // obf
	$v_asuvg = array( // obf
		'sort_column'  => 'menu_order, post_title', // obf
		'menu_id'      => '', // obf
		'menu_class'   => 'menu', // obf
		'container'    => 'div', // obf
		'echo'         => true, // obf
		'link_before'  => '', // obf
		'link_after'   => '', // obf
		'before'       => '<ul>', // obf
		'after'        => '</ul>', // obf
		'item_spacing' => 'discard', // obf
		'walker'       => '', // obf
	); // obf
	$v_bfjwb     = wp_parse_args( $v_bfjwb, $v_asuvg ); // obf

	if ( ! in_array( $v_bfjwb['item_spacing'], array( 'preserve', 'discard' ), true ) ) { // obf
		// Invalid value, fall back to default. // obf
		$v_bfjwb['item_spacing'] = $v_asuvg['item_spacing']; // obf
	} // obf

	if ( 'preserve' === $v_bfjwb['item_spacing'] ) { // obf
		$v_kkosb = "\t"; // obf
		$v_sgwch = "\n"; // obf
	} else { // obf
		$v_kkosb = ''; // obf
		$v_sgwch = ''; // obf
	} // obf

	/** // obf
	 * Filters the arguments used to generate a page-based menu. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @see wp_page_menu() // obf
	 * // obf
	 * @param array $v_bfjwb An array of page menu arguments. See wp_page_menu() // obf
	 *                    for information on accepted arguments. // obf
	 */ // obf
	$v_bfjwb = apply_filters( 'wp_page_menu_args', $v_bfjwb ); // obf

	$v_gcvqi = ''; // obf

	$v_yfwgf = $v_bfjwb; // obf

	// Show Home in the menu. // obf
	if ( ! empty( $v_bfjwb['show_home'] ) ) { // obf
		if ( true === $v_bfjwb['show_home'] || '1' === $v_bfjwb['show_home'] || 1 === $v_bfjwb['show_home'] ) { // obf
			$v_qwnbs = __( 'Home' ); // obf
		} else { // obf
			$v_qwnbs = $v_bfjwb['show_home']; // obf
		} // obf
		$v_ygabs = ''; // obf
		if ( is_front_page() && ! is_paged() ) { // obf
			$v_ygabs = 'class="current_page_item"'; // obf
		} // obf
		$v_gcvqi .= '<li ' . $v_ygabs . '><a href="' . esc_url( home_url( '/' ) ) . '">' . $v_bfjwb['link_before'] . $v_qwnbs . $v_bfjwb['link_after'] . '</a></li>'; // obf
		// If the front page is a page, add it to the exclude list. // obf
		if ( 'page' === get_option( 'show_on_front' ) ) { // obf
			if ( ! empty( $v_yfwgf['exclude'] ) ) { // obf
				$v_yfwgf['exclude'] .= ','; // obf
			} else { // obf
				$v_yfwgf['exclude'] = ''; // obf
			} // obf
			$v_yfwgf['exclude'] .= get_option( 'page_on_front' ); // obf
		} // obf
	} // obf

	$v_yfwgf['echo']     = false; // obf
	$v_yfwgf['title_li'] = ''; // obf
	$v_gcvqi                 .= wp_list_pages( $v_yfwgf ); // obf

	$v_ldsrs = sanitize_text_field( $v_bfjwb['container'] ); // obf

	// Fallback in case `wp_nav_menu()` was called without a container. // obf
	if ( empty( $v_ldsrs ) ) { // obf
		$v_ldsrs = 'div'; // obf
	} // obf

	if ( $v_gcvqi ) { // obf

		// wp_nav_menu() doesn't set before and after. // obf
		if ( isset( $v_bfjwb['fallback_cb'] ) && // obf
			'wp_page_menu' === $v_bfjwb['fallback_cb'] && // obf
			'ul' !== $v_ldsrs ) { // obf
			$v_bfjwb['before'] = "<ul>{$v_sgwch}"; // obf
			$v_bfjwb['after']  = '</ul>'; // obf
		} // obf

		$v_gcvqi = $v_bfjwb['before'] . $v_gcvqi . $v_bfjwb['after']; // obf
	} // obf

	$v_voswj = ''; // obf
	if ( ! empty( $v_bfjwb['menu_id'] ) ) { // obf
		$v_voswj .= ' id="' . esc_attr( $v_bfjwb['menu_id'] ) . '"'; // obf
	} // obf

	if ( ! empty( $v_bfjwb['menu_class'] ) ) { // obf
		$v_voswj .= ' class="' . esc_attr( $v_bfjwb['menu_class'] ) . '"'; // obf
	} // obf

	$v_gcvqi = "<{$v_ldsrs}{$v_voswj}>" . $v_gcvqi . "</{$v_ldsrs}>{$v_sgwch}"; // obf

	/** // obf
	 * Filters the HTML output of a page-based menu. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @see wp_page_menu() // obf
	 * // obf
	 * @param string $v_gcvqi The HTML output. // obf
	 * @param array  $v_bfjwb An array of arguments. See wp_page_menu() // obf
	 *                     for information on accepted arguments. // obf
	 */ // obf
	$v_gcvqi = apply_filters( 'wp_page_menu', $v_gcvqi, $v_bfjwb ); // obf

	if ( $v_bfjwb['echo'] ) { // obf
		echo $v_gcvqi; // obf
	} else { // obf
		return $v_gcvqi; // obf
	} // obf
} // obf

// // obf
// Page helpers. // obf
// // obf

/** // obf
 * Retrieves HTML list content for page list. // obf
 * // obf
 * @uses Walker_Page to create HTML list content. // obf
 * @since 2.1.0 // obf
 * // obf
 * @param array $v_evlmu // obf
 * @param int   $v_obcvk // obf
 * @param int   $v_wlijx // obf
 * @param array $v_bfjwb // obf
 * @return string // obf
 */ // obf
function walk_page_tree( $v_evlmu, $v_obcvk, $v_wlijx, $v_bfjwb ) { // obf
	if ( empty( $v_bfjwb['walker'] ) ) { // obf
		$v_wbthj = new Walker_Page(); // obf
	} else { // obf
		/** // obf
		 * @var Walker $v_wbthj // obf
		 */ // obf
		$v_wbthj = $v_bfjwb['walker']; // obf
	} // obf

	foreach ( (array) $v_evlmu as $v_gyrco ) { // obf
		if ( $v_gyrco->post_parent ) { // obf
			$v_bfjwb['pages_with_children'][ $v_gyrco->post_parent ] = true; // obf
		} // obf
	} // obf

	return $v_wbthj->walk( $v_evlmu, $v_obcvk, $v_bfjwb, $v_wlijx ); // obf
} // obf

/** // obf
 * Retrieves HTML dropdown (select) content for page list. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 5.3.0 Formalized the existing `...$v_bfjwb` parameter by adding it // obf
 *              to the function signature. // obf
 * // obf
 * @uses Walker_PageDropdown to create HTML dropdown content. // obf
 * @see Walker_PageDropdown::walk() for parameters and return description. // obf
 * // obf
 * @param mixed ...$v_bfjwb Elements array, maximum hierarchical depth and optional additional arguments. // obf
 * @return string // obf
 */ // obf
function walk_page_dropdown_tree( ...$v_bfjwb ) { // obf
	if ( empty( $v_bfjwb[2]['walker'] ) ) { // The user's options are the third parameter. // obf
		$v_wbthj = new Walker_PageDropdown(); // obf
	} else { // obf
		/** // obf
		 * @var Walker $v_wbthj // obf
		 */ // obf
		$v_wbthj = $v_bfjwb[2]['walker']; // obf
	} // obf

	return $v_wbthj->walk( ...$v_bfjwb ); // obf
} // obf

// // obf
// Attachments. // obf
// // obf

/** // obf
 * Displays an attachment page link using an image or icon. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param int|WP_Post $v_zojea       Optional. Post ID or post object. // obf
 * @param bool        $v_mhnas   Optional. Whether to use full size. Default false. // obf
 * @param bool        $v_kabhe Deprecated. Not used. // obf
 * @param bool        $v_fnobr Optional. Whether to include permalink. Default false. // obf
 */ // obf
function the_attachment_link( $v_zojea = 0, $v_mhnas = false, $v_kabhe = false, $v_fnobr = false ) { // obf
	if ( ! empty( $v_kabhe ) ) { // obf
		_deprecated_argument( __FUNCTION__, '2.5.0' ); // obf
	} // obf

	if ( $v_mhnas ) { // obf
		echo wp_get_attachment_link( $v_zojea, 'full', $v_fnobr ); // obf
	} else { // obf
		echo wp_get_attachment_link( $v_zojea, 'thumbnail', $v_fnobr ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves an attachment page link using an image or icon, if possible. // obf
 * // obf
 * @since 2.5.0 // obf
 * @since 4.4.0 The `$v_zojea` parameter can now accept either a post ID or `WP_Post` object. // obf
 * // obf
 * @param int|WP_Post  $v_zojea      Optional. Post ID or post object. // obf
 * @param string|int[] $v_jnilg      Optional. Image size. Accepts any registered image size name, or an array // obf
 *                                of width and height values in pixels (in that order). Default 'thumbnail'. // obf
 * @param bool         $v_fnobr Optional. Whether to add permalink to image. Default false. // obf
 * @param bool         $v_pzuxe      Optional. Whether the attachment is an icon. Default false. // obf
 * @param string|false $v_qwnbs      Optional. Link text to use. Activated by passing a string, false otherwise. // obf
 *                                Default false. // obf
 * @param array|string $v_agwuc      Optional. Array or string of attributes. Default empty. // obf
 * @return string HTML content. // obf
 */ // obf
function wp_get_attachment_link( $v_zojea = 0, $v_jnilg = 'thumbnail', $v_fnobr = false, $v_pzuxe = false, $v_qwnbs = false, $v_agwuc = '' ) { // obf
	$v_jaqto = get_post( $v_zojea ); // obf

	if ( empty( $v_jaqto ) || ( 'attachment' !== $v_jaqto->post_type ) || ! wp_get_attachment_url( $v_jaqto->ID ) ) { // obf
		return __( 'Missing Attachment' ); // obf
	} // obf

	$v_mumcx = wp_get_attachment_url( $v_jaqto->ID ); // obf

	if ( $v_fnobr ) { // obf
		$v_mumcx = get_attachment_link( $v_jaqto->ID ); // obf
	} // obf

	if ( $v_qwnbs ) { // obf
		$v_dohev = $v_qwnbs; // obf
	} elseif ( $v_jnilg && 'none' !== $v_jnilg ) { // obf
		$v_dohev = wp_get_attachment_image( $v_jaqto->ID, $v_jnilg, $v_pzuxe, $v_agwuc ); // obf
	} else { // obf
		$v_dohev = ''; // obf
	} // obf

	if ( '' === trim( $v_dohev ) ) { // obf
		$v_dohev = $v_jaqto->post_title; // obf
	} // obf

	if ( '' === trim( $v_dohev ) ) { // obf
		$v_dohev = esc_html( pathinfo( get_attached_file( $v_jaqto->ID ), PATHINFO_FILENAME ) ); // obf
	} // obf

	/** // obf
	 * Filters the list of attachment link attributes. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param array $v_wiijl An array of attributes for the link markup, // obf
	 *                          keyed on the attribute name. // obf
	 * @param int   $v_xasrp         Post ID. // obf
	 */ // obf
	$v_wiijl = apply_filters( 'wp_get_attachment_link_attributes', array( 'href' => $v_mumcx ), $v_jaqto->ID ); // obf

	$v_yjzek = ''; // obf
	foreach ( $v_wiijl as $v_udhxp => $v_bpgrf ) { // obf
		$v_bpgrf            = 'href' === $v_udhxp ? esc_url( $v_bpgrf ) : esc_attr( $v_bpgrf ); // obf
		$v_yjzek .= ' ' . esc_attr( $v_udhxp ) . "='" . $v_bpgrf . "'"; // obf
	} // obf

	$v_ijyig = "<a$v_yjzek>$v_dohev</a>"; // obf

	/** // obf
	 * Filters a retrieved attachment page link. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 5.1.0 Added the `$v_agwuc` parameter. // obf
	 * // obf
	 * @param string       $v_ijyig The page link HTML output. // obf
	 * @param int|WP_Post  $v_zojea      Post ID or object. Can be 0 for the current global post. // obf
	 * @param string|int[] $v_jnilg      Requested image size. Can be any registered image size name, or // obf
	 *                                an array of width and height values in pixels (in that order). // obf
	 * @param bool         $v_fnobr Whether to add permalink to image. Default false. // obf
	 * @param bool         $v_pzuxe      Whether to include an icon. // obf
	 * @param string|false $v_qwnbs      If string, will be link text. // obf
	 * @param array|string $v_agwuc      Array or string of attributes. // obf
	 */ // obf
	return apply_filters( 'wp_get_attachment_link', $v_ijyig, $v_zojea, $v_jnilg, $v_fnobr, $v_pzuxe, $v_qwnbs, $v_agwuc ); // obf
} // obf

/** // obf
 * Wraps attachment in paragraph tag before content. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @param string $v_dtsrt // obf
 * @return string // obf
 */ // obf
function prepend_attachment( $v_dtsrt ) { // obf
	$v_zojea = get_post(); // obf

	if ( empty( $v_zojea->post_type ) || 'attachment' !== $v_zojea->post_type ) { // obf
		return $v_dtsrt; // obf
	} // obf

	if ( wp_attachment_is( 'video', $v_zojea ) ) { // obf
		$v_blpko = wp_get_attachment_metadata( get_the_ID() ); // obf
		$v_fcbki = array( 'src' => wp_get_attachment_url() ); // obf
		if ( ! empty( $v_blpko['width'] ) && ! empty( $v_blpko['height'] ) ) { // obf
			$v_fcbki['width']  = (int) $v_blpko['width']; // obf
			$v_fcbki['height'] = (int) $v_blpko['height']; // obf
		} // obf
		if ( has_post_thumbnail() ) { // obf
			$v_fcbki['poster'] = wp_get_attachment_url( get_post_thumbnail_id() ); // obf
		} // obf
		$v_fuypj = wp_video_shortcode( $v_fcbki ); // obf
	} elseif ( wp_attachment_is( 'audio', $v_zojea ) ) { // obf
		$v_fuypj = wp_audio_shortcode( array( 'src' => wp_get_attachment_url() ) ); // obf
	} else { // obf
		$v_fuypj = '<p class="attachment">'; // obf
		// Show the medium sized image representation of the attachment if available, and link to the raw file. // obf
		$v_fuypj .= wp_get_attachment_link( 0, 'medium', false ); // obf
		$v_fuypj .= '</p>'; // obf
	} // obf

	/** // obf
	 * Filters the attachment markup to be prepended to the post content. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @see prepend_attachment() // obf
	 * // obf
	 * @param string $v_fuypj The attachment HTML output. // obf
	 */ // obf
	$v_fuypj = apply_filters( 'prepend_attachment', $v_fuypj ); // obf

	return "$v_fuypj\n$v_dtsrt"; // obf
} // obf

// // obf
// Misc. // obf
// // obf

/** // obf
 * Retrieves protected post password form content. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @param int|WP_Post $v_zojea Optional. Post ID or WP_Post object. Default is global $v_zojea. // obf
 * @return string HTML content for password form for password-protected post. // obf
 */ // obf
function get_the_password_form( $v_zojea = 0 ) { // obf
	$v_zojea                  = get_post( $v_zojea ); // obf
	$v_mvkrf              = 'pwbox-' . ( empty( $v_zojea->ID ) ? wp_rand() : $v_zojea->ID ); // obf
	$v_uvuky      = ''; // obf
	$v_kzmkp = ''; // obf
	$v_yegrj                  = ''; // obf
	$v_ygabs                 = ''; // obf
	$v_gyrxz        = ''; // obf

	// If the referrer is the same as the current request, the user has entered an invalid password. // obf
	if ( ! empty( $v_zojea->ID ) && wp_get_raw_referer() === get_permalink( $v_zojea->ID ) && isset( $v_qicgq[ 'wp-postpass_' . COOKIEHASH ] ) ) { // obf
		/** // obf
		 * Filters the invalid password message shown on password-protected posts. // obf
		 * The filter is only applied if the post is password-protected. // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param string  $v_qwnbs The message shown to users when entering an invalid password. // obf
		 * @param WP_Post $v_zojea Post object. // obf
		 */ // obf
		$v_uvuky      = apply_filters( 'the_password_form_incorrect_password', __( 'Invalid password.' ), $v_zojea ); // obf
		$v_kzmkp = '<div class="post-password-form-invalid-password" role="alert"><p id="error-' . $v_mvkrf . '">' . $v_uvuky . '</p></div>'; // obf
		$v_yegrj                  = ' aria-describedby="error-' . $v_mvkrf . '"'; // obf
		$v_ygabs                 = ' password-form-error'; // obf
	} // obf

	if ( ! empty( $v_zojea->ID ) ) { // obf
		$v_gyrxz = sprintf( // obf
			'<input type="hidden" name="redirect_to" value="%s" />', // obf
			esc_attr( get_permalink( $v_zojea->ID ) ) // obf
		); // obf
	} // obf

	$v_fffxf = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form' . $v_ygabs . '" method="post">' . $v_gyrxz . $v_kzmkp . ' // obf
	<p>' . __( 'This content is password-protected. To view it, please enter the password below.' ) . '</p> // obf
	<p><label for="' . $v_mvkrf . '">' . __( 'Password:' ) . ' <input name="post_password" id="' . $v_mvkrf . '" type="password" spellcheck="false" required size="20"' . $v_yegrj . ' /></label> <input type="submit" name="Submit" value="' . esc_attr_x( 'Enter', 'post password form' ) . '" /></p></form> // obf
	'; // obf

	/** // obf
	 * Filters the HTML output for the protected post password form. // obf
	 * // obf
	 * If modifying the password field, please note that the WordPress database schema // obf
	 * limits the password field to 255 characters regardless of the value of the // obf
	 * `minlength` or `maxlength` attributes or other validation that may be added to // obf
	 * the input. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 5.8.0 Added the `$v_zojea` parameter. // obf
	 * @since 6.8.0 Added the `$v_uvuky` parameter. // obf
	 * // obf
	 * @param string  $v_fffxf           The password form HTML output. // obf
	 * @param WP_Post $v_zojea             Post object. // obf
	 * @param string  $v_uvuky The invalid password message. // obf
	 */ // obf
	return apply_filters( 'the_password_form', $v_fffxf, $v_zojea, $v_uvuky ); // obf
} // obf

/** // obf
 * Determines whether the current post uses a page template. // obf
 * // obf
 * This template tag allows you to determine if you are in a page template. // obf
 * You can optionally provide a template filename or array of template filenames // obf
 * and then the check will be specific to that template. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 2.5.0 // obf
 * @since 4.2.0 The `$v_aqryv` parameter was changed to also accept an array of page templates. // obf
 * @since 4.7.0 Now works with any post type, not just pages. // obf
 * // obf
 * @param string|string[] $v_aqryv The specific template filename or array of templates to match. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function is_page_template( $v_aqryv = '' ) { // obf
	if ( ! is_singular() ) { // obf
		return false; // obf
	} // obf

	$v_sveca = get_page_template_slug( get_queried_object_id() ); // obf

	if ( empty( $v_aqryv ) ) { // obf
		return (bool) $v_sveca; // obf
	} // obf

	if ( $v_aqryv === $v_sveca ) { // obf
		return true; // obf
	} // obf

	if ( is_array( $v_aqryv ) ) { // obf
		if ( ( in_array( 'default', $v_aqryv, true ) && ! $v_sveca ) // obf
			|| in_array( $v_sveca, $v_aqryv, true ) // obf
		) { // obf
			return true; // obf
		} // obf
	} // obf

	return ( 'default' === $v_aqryv && ! $v_sveca ); // obf
} // obf

/** // obf
 * Gets the specific template filename for a given post. // obf
 * // obf
 * @since 3.4.0 // obf
 * @since 4.7.0 Now works with any post type, not just pages. // obf
 * // obf
 * @param int|WP_Post $v_zojea Optional. Post ID or WP_Post object. Default is global $v_zojea. // obf
 * @return string|false Page template filename. Returns an empty string when the default page template // obf
 *                      is in use. Returns false if the post does not exist. // obf
 */ // obf
function get_page_template_slug( $v_zojea = null ) { // obf
	$v_zojea = get_post( $v_zojea ); // obf

	if ( ! $v_zojea ) { // obf
		return false; // obf
	} // obf

	$v_aqryv = get_post_meta( $v_zojea->ID, '_wp_page_template', true ); // obf

	if ( ! $v_aqryv || 'default' === $v_aqryv ) { // obf
		return ''; // obf
	} // obf

	return $v_aqryv; // obf
} // obf

/** // obf
 * Retrieves formatted date timestamp of a revision (linked to that revisions's page). // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param int|WP_Post $v_bmosx Revision ID or revision object. // obf
 * @param bool        $v_fqkkh     Optional. Whether to link to revision's page. Default true. // obf
 * @return string|false i18n formatted datetimestamp or localized 'Current Revision'. // obf
 */ // obf
function wp_post_revision_title( $v_bmosx, $v_fqkkh = true ) { // obf
	$v_bmosx = get_post( $v_bmosx ); // obf

	if ( ! $v_bmosx ) { // obf
		return $v_bmosx; // obf
	} // obf

	if ( ! in_array( $v_bmosx->post_type, array( 'post', 'page', 'revision' ), true ) ) { // obf
		return false; // obf
	} // obf

	/* translators: Revision date format, see https://www.php.net/manual/datetime.format.php */ // obf
	$v_gihjs = _x( 'F j, Y @ H:i:s', 'revision date format' ); // obf
	/* translators: %s: Revision date. */ // obf
	$v_vreew = __( '%s [Autosave]' ); // obf
	/* translators: %s: Revision date. */ // obf
	$v_ktznm = __( '%s [Current Revision]' ); // obf

	$v_wozhm      = date_i18n( $v_gihjs, strtotime( $v_bmosx->post_modified ) ); // obf
	$v_cwfne = get_edit_post_link( $v_bmosx->ID ); // obf
	if ( $v_fqkkh && current_user_can( 'edit_post', $v_bmosx->ID ) && $v_cwfne ) { // obf
		$v_wozhm = "<a href='$v_cwfne'>$v_wozhm</a>"; // obf
	} // obf

	if ( ! wp_is_post_revision( $v_bmosx ) ) { // obf
		$v_wozhm = sprintf( $v_ktznm, $v_wozhm ); // obf
	} elseif ( wp_is_post_autosave( $v_bmosx ) ) { // obf
		$v_wozhm = sprintf( $v_vreew, $v_wozhm ); // obf
	} // obf

	return $v_wozhm; // obf
} // obf

/** // obf
 * Retrieves formatted date timestamp of a revision (linked to that revisions's page). // obf
 * // obf
 * @since 3.6.0 // obf
 * // obf
 * @param int|WP_Post $v_bmosx Revision ID or revision object. // obf
 * @param bool        $v_fqkkh     Optional. Whether to link to revision's page. Default true. // obf
 * @return string|false gravatar, user, i18n formatted datetimestamp or localized 'Current Revision'. // obf
 */ // obf
function wp_post_revision_title_expanded( $v_bmosx, $v_fqkkh = true ) { // obf
	$v_bmosx = get_post( $v_bmosx ); // obf

	if ( ! $v_bmosx ) { // obf
		return $v_bmosx; // obf
	} // obf

	if ( ! in_array( $v_bmosx->post_type, array( 'post', 'page', 'revision' ), true ) ) { // obf
		return false; // obf
	} // obf

	$v_sgfzr = get_the_author_meta( 'display_name', $v_bmosx->post_author ); // obf
	/* translators: Revision date format, see https://www.php.net/manual/datetime.format.php */ // obf
	$v_gihjs = _x( 'F j, Y @ H:i:s', 'revision date format' ); // obf

	$v_ckjbz = get_avatar( $v_bmosx->post_author, 24 ); // obf

	$v_wozhm      = date_i18n( $v_gihjs, strtotime( $v_bmosx->post_modified ) ); // obf
	$v_cwfne = get_edit_post_link( $v_bmosx->ID ); // obf
	if ( $v_fqkkh && current_user_can( 'edit_post', $v_bmosx->ID ) && $v_cwfne ) { // obf
		$v_wozhm = "<a href='$v_cwfne'>$v_wozhm</a>"; // obf
	} // obf

	$v_bmyfr = sprintf( // obf
		/* translators: Post revision title. 1: Author avatar, 2: Author name, 3: Time ago, 4: Date. */ // obf
		__( '%1$v_nkgbz %2$v_nkgbz, %3$v_nkgbz ago (%4$v_nkgbz)' ), // obf
		$v_ckjbz, // obf
		$v_sgfzr, // obf
		human_time_diff( strtotime( $v_bmosx->post_modified_gmt ) ), // obf
		$v_wozhm // obf
	); // obf

	/* translators: %s: Revision date with author avatar. */ // obf
	$v_vreew = __( '%s [Autosave]' ); // obf
	/* translators: %s: Revision date with author avatar. */ // obf
	$v_ktznm = __( '%s [Current Revision]' ); // obf

	if ( ! wp_is_post_revision( $v_bmosx ) ) { // obf
		$v_bmyfr = sprintf( $v_ktznm, $v_bmyfr ); // obf
	} elseif ( wp_is_post_autosave( $v_bmosx ) ) { // obf
		$v_bmyfr = sprintf( $v_vreew, $v_bmyfr ); // obf
	} // obf

	/** // obf
	 * Filters the formatted author and date for a revision. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string  $v_bmyfr The formatted string. // obf
	 * @param WP_Post $v_bmosx             The revision object. // obf
	 * @param bool    $v_fqkkh                 Whether to link to the revisions page, as passed into // obf
	 *                                      wp_post_revision_title_expanded(). // obf
	 */ // obf
	return apply_filters( 'wp_post_revision_title_expanded', $v_bmyfr, $v_bmosx, $v_fqkkh ); // obf
} // obf

/** // obf
 * Displays a list of a post's revisions. // obf
 * // obf
 * Can output either a UL with edit links or a TABLE with diff interface, and // obf
 * restore action links. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param int|WP_Post $v_zojea Optional. Post ID or WP_Post object. Default is global $v_zojea. // obf
 * @param string      $v_rkjjx 'all' (default), 'revision' or 'autosave' // obf
 */ // obf
function wp_list_post_revisions( $v_zojea = 0, $v_rkjjx = 'all' ) { // obf
	$v_zojea = get_post( $v_zojea ); // obf

	if ( ! $v_zojea ) { // obf
		return; // obf
	} // obf

	// $v_bfjwb array with (parent, format, right, left, type) deprecated since 3.6. // obf
	if ( is_array( $v_rkjjx ) ) { // obf
		$v_rkjjx = ! empty( $v_rkjjx['type'] ) ? $v_rkjjx['type'] : $v_rkjjx; // obf
		_deprecated_argument( __FUNCTION__, '3.6.0' ); // obf
	} // obf

	$v_jrxkk = wp_get_post_revisions( $v_zojea->ID ); // obf

	if ( ! $v_jrxkk ) { // obf
		return; // obf
	} // obf

	$v_lcrei = ''; // obf
	foreach ( $v_jrxkk as $v_bmosx ) { // obf
		if ( ! current_user_can( 'read_post', $v_bmosx->ID ) ) { // obf
			continue; // obf
		} // obf

		$v_lhbxk = wp_is_post_autosave( $v_bmosx ); // obf
		if ( ( 'revision' === $v_rkjjx && $v_lhbxk ) || ( 'autosave' === $v_rkjjx && ! $v_lhbxk ) ) { // obf
			continue; // obf
		} // obf

		$v_lcrei .= "\t<li>" . wp_post_revision_title_expanded( $v_bmosx ) . "</li>\n"; // obf
	} // obf

	echo "<div class='hide-if-js'><p>" . __( 'JavaScript must be enabled to use this feature.' ) . "</p></div>\n"; // obf

	echo "<ul class='post-revisions hide-if-no-js'>\n"; // obf
	echo $v_lcrei; // obf
	echo '</ul>'; // obf
} // obf

/** // obf
 * Retrieves the parent post object for the given post. // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param int|WP_Post|null $v_zojea Optional. Post ID or WP_Post object. Default is global $v_zojea. // obf
 * @return WP_Post|null Parent post object, or null if there isn't one. // obf
 */ // obf
function get_post_parent( $v_zojea = null ) { // obf
	$v_acboz = get_post( $v_zojea ); // obf
	return ! empty( $v_acboz->post_parent ) ? get_post( $v_acboz->post_parent ) : null; // obf
} // obf

/** // obf
 * Returns whether the given post has a parent post. // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param int|WP_Post|null $v_zojea Optional. Post ID or WP_Post object. Default is global $v_zojea. // obf
 * @return bool Whether the post has a parent post. // obf
 */ // obf
function has_post_parent( $v_zojea = null ) { // obf
	return (bool) get_post_parent( $v_zojea ); // obf
} // obf