
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Comment template functions // obf
 * // obf
 * These functions are meant to live inside of the WordPress loop. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 */ // obf

/** // obf
 * Retrieves the author of the current comment. // obf
 * // obf
 * If the comment has an empty comment_author field, then 'Anonymous' person is // obf
 * assumed. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to retrieve the author. // obf
 *                                   Default current comment. // obf
 * @return string The comment author // obf
 */ // obf
function get_comment_author( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	if ( ! empty( $v_rzerl->comment_ID ) ) { // obf
		$v_fogbd = $v_rzerl->comment_ID; // obf
	} elseif ( is_scalar( $v_fogbd ) ) { // obf
		$v_fogbd = (string) $v_fogbd; // obf
	} else { // obf
		$v_fogbd = '0'; // obf
	} // obf

	if ( empty( $v_rzerl->comment_author ) ) { // obf
		$v_tohmh = ! empty( $v_rzerl->user_id ) ? get_userdata( $v_rzerl->user_id ) : false; // obf
		if ( $v_tohmh ) { // obf
			$v_cyynn = $v_tohmh->display_name; // obf
		} else { // obf
			$v_cyynn = __( 'Anonymous' ); // obf
		} // obf
	} else { // obf
		$v_cyynn = $v_rzerl->comment_author; // obf
	} // obf

	/** // obf
	 * Filters the returned comment author name. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.1.0 The `$v_fogbd` and `$v_rzerl` parameters were added. // obf
	 * // obf
	 * @param string     $v_cyynn The comment author's username. // obf
	 * @param string     $v_fogbd     The comment ID as a numeric string. // obf
	 * @param WP_Comment $v_rzerl        The comment object. // obf
	 */ // obf
	return apply_filters( 'get_comment_author', $v_cyynn, $v_fogbd, $v_rzerl ); // obf
} // obf

/** // obf
 * Displays the author of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to print the author. // obf
 *                                   Default current comment. // obf
 */ // obf
function comment_author( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	$v_cyynn = get_comment_author( $v_rzerl ); // obf

	/** // obf
	 * Filters the comment author's name for display. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * @since 4.1.0 The `$v_fogbd` parameter was added. // obf
	 * // obf
	 * @param string $v_cyynn The comment author's username. // obf
	 * @param string $v_fogbd     The comment ID as a numeric string. // obf
	 */ // obf
	echo apply_filters( 'comment_author', $v_cyynn, $v_rzerl->comment_ID ); // obf
} // obf

/** // obf
 * Retrieves the email of the author of the current comment. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to get the author's email. // obf
 *                                   Default current comment. // obf
 * @return string The current comment author's email // obf
 */ // obf
function get_comment_author_email( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	/** // obf
	 * Filters the comment author's returned email address. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.1.0 The `$v_fogbd` and `$v_rzerl` parameters were added. // obf
	 * // obf
	 * @param string     $v_gzyqv The comment author's email address. // obf
	 * @param string     $v_fogbd           The comment ID as a numeric string. // obf
	 * @param WP_Comment $v_rzerl              The comment object. // obf
	 */ // obf
	return apply_filters( 'get_comment_author_email', $v_rzerl->comment_author_email, $v_rzerl->comment_ID, $v_rzerl ); // obf
} // obf

/** // obf
 * Displays the email of the author of the current global $v_rzerl. // obf
 * // obf
 * Care should be taken to protect the email address and assure that email // obf
 * harvesters do not capture your commenter's email address. Most assume that // obf
 * their email address will not appear in raw form on the site. Doing so will // obf
 * enable anyone, including those that people don't want to get the email // obf
 * address and use it for their own means good and bad. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to print the author's email. // obf
 *                                   Default current comment. // obf
 */ // obf
function comment_author_email( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	$v_gzyqv = get_comment_author_email( $v_rzerl ); // obf

	/** // obf
	 * Filters the comment author's email for display. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * @since 4.1.0 The `$v_fogbd` parameter was added. // obf
	 * // obf
	 * @param string $v_gzyqv The comment author's email address. // obf
	 * @param string $v_fogbd           The comment ID as a numeric string. // obf
	 */ // obf
	echo apply_filters( 'author_email', $v_gzyqv, $v_rzerl->comment_ID ); // obf
} // obf

/** // obf
 * Displays the HTML email link to the author of the current comment. // obf
 * // obf
 * Care should be taken to protect the email address and assure that email // obf
 * harvesters do not capture your commenter's email address. Most assume that // obf
 * their email address will not appear in raw form on the site. Doing so will // obf
 * enable anyone, including those that people don't want to get the email // obf
 * address and use it for their own means good and bad. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.6.0 Added the `$v_rzerl` parameter. // obf
 * // obf
 * @param string         $v_bespq Optional. Text to display instead of the comment author's email address. // obf
 *                                  Default empty. // obf
 * @param string         $v_baygy    Optional. Text or HTML to display before the email link. Default empty. // obf
 * @param string         $v_kqsyq     Optional. Text or HTML to display after the email link. Default empty. // obf
 * @param int|WP_Comment $v_rzerl   Optional. Comment ID or WP_Comment object. Default is the current comment. // obf
 */ // obf
function comment_author_email_link( $v_bespq = '', $v_baygy = '', $v_kqsyq = '', $v_rzerl = null ) { // obf
	$v_wpwrk = get_comment_author_email_link( $v_bespq, $v_baygy, $v_kqsyq, $v_rzerl ); // obf
	if ( $v_wpwrk ) { // obf
		echo $v_wpwrk; // obf
	} // obf
} // obf

/** // obf
 * Returns the HTML email link to the author of the current comment. // obf
 * // obf
 * Care should be taken to protect the email address and assure that email // obf
 * harvesters do not capture your commenter's email address. Most assume that // obf
 * their email address will not appear in raw form on the site. Doing so will // obf
 * enable anyone, including those that people don't want to get the email // obf
 * address and use it for their own means good and bad. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 4.6.0 Added the `$v_rzerl` parameter. // obf
 * // obf
 * @param string         $v_bespq Optional. Text to display instead of the comment author's email address. // obf
 *                                  Default empty. // obf
 * @param string         $v_baygy    Optional. Text or HTML to display before the email link. Default empty. // obf
 * @param string         $v_kqsyq     Optional. Text or HTML to display after the email link. Default empty. // obf
 * @param int|WP_Comment $v_rzerl   Optional. Comment ID or WP_Comment object. Default is the current comment. // obf
 * @return string HTML markup for the comment author email link. By default, the email address is obfuscated // obf
 *                via the {@see 'comment_email'} filter with antispambot(). // obf
 */ // obf
function get_comment_author_email_link( $v_bespq = '', $v_baygy = '', $v_kqsyq = '', $v_rzerl = null ) { // obf
	$v_rzerl = get_comment( $v_rzerl ); // obf

	/** // obf
	 * Filters the comment author's email for display. // obf
	 * // obf
	 * Care should be taken to protect the email address and assure that email // obf
	 * harvesters do not capture your commenter's email address. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * @since 4.1.0 The `$v_rzerl` parameter was added. // obf
	 * // obf
	 * @param string     $v_gzyqv The comment author's email address. // obf
	 * @param WP_Comment $v_rzerl              The comment object. // obf
	 */ // obf
	$v_gzyqv = apply_filters( 'comment_email', $v_rzerl->comment_author_email, $v_rzerl ); // obf

	if ( ( ! empty( $v_gzyqv ) ) && ( '@' !== $v_gzyqv ) ) { // obf
		$v_etnfz = ( '' !== $v_bespq ) ? $v_bespq : $v_gzyqv; // obf

		$v_knvuf = $v_baygy . sprintf( // obf
			'<a href="%1$v_euhxw">%2$v_euhxw</a>', // obf
			esc_url( 'mailto:' . $v_gzyqv ), // obf
			esc_html( $v_etnfz ) // obf
		) . $v_kqsyq; // obf

		return $v_knvuf; // obf
	} else { // obf
		return ''; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the HTML link to the URL of the author of the current comment. // obf
 * // obf
 * Both get_comment_author_url() and get_comment_author() rely on get_comment(), // obf
 * which falls back to the global comment variable if the $v_fogbd argument is empty. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to get the author's link. // obf
 *                                   Default current comment. // obf
 * @return string The comment author name or HTML link for author's URL. // obf
 */ // obf
function get_comment_author_link( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	if ( ! empty( $v_rzerl->comment_ID ) ) { // obf
		$v_fogbd = $v_rzerl->comment_ID; // obf
	} elseif ( is_scalar( $v_fogbd ) ) { // obf
		$v_fogbd = (string) $v_fogbd; // obf
	} else { // obf
		$v_fogbd = '0'; // obf
	} // obf

	$v_qmekf = get_comment_author_url( $v_rzerl ); // obf
	$v_cyynn     = get_comment_author( $v_rzerl ); // obf

	if ( empty( $v_qmekf ) || 'http://' === $v_qmekf ) { // obf
		$v_aijtn = $v_cyynn; // obf
	} else { // obf
		$v_ruysz = array( 'ugc' ); // obf
		if ( ! wp_is_internal_link( $v_qmekf ) ) { // obf
			$v_ruysz = array_merge( // obf
				$v_ruysz, // obf
				array( 'external', 'nofollow' ) // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the rel attributes of the comment author's link. // obf
		 * // obf
		 * @since 6.2.0 // obf
		 * // obf
		 * @param string[]   $v_ruysz An array of strings representing the rel tags // obf
		 *                              which will be joined into the anchor's rel attribute. // obf
		 * @param WP_Comment $v_rzerl   The comment object. // obf
		 */ // obf
		$v_ruysz = apply_filters( 'comment_author_link_rel', $v_ruysz, $v_rzerl ); // obf

		$v_qogei = implode( ' ', $v_ruysz ); // obf
		$v_qogei = esc_attr( $v_qogei ); // obf
		// Empty space before 'rel' is necessary for later sprintf(). // obf
		$v_qogei = ! empty( $v_qogei ) ? sprintf( ' rel="%s"', $v_qogei ) : ''; // obf

		$v_aijtn = sprintf( // obf
			'<a href="%1$v_euhxw" class="url"%2$v_euhxw>%3$v_euhxw</a>', // obf
			$v_qmekf, // obf
			$v_qogei, // obf
			$v_cyynn // obf
		); // obf
	} // obf

	/** // obf
	 * Filters the comment author's link for display. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.1.0 The `$v_cyynn` and `$v_fogbd` parameters were added. // obf
	 * // obf
	 * @param string $v_aijtn The HTML-formatted comment author link. // obf
	 *                                    Empty for an invalid URL. // obf
	 * @param string $v_cyynn      The comment author's username. // obf
	 * @param string $v_fogbd          The comment ID as a numeric string. // obf
	 */ // obf
	return apply_filters( 'get_comment_author_link', $v_aijtn, $v_cyynn, $v_fogbd ); // obf
} // obf

/** // obf
 * Displays the HTML link to the URL of the author of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to print the author's link. // obf
 *                                   Default current comment. // obf
 */ // obf
function comment_author_link( $v_fogbd = 0 ) { // obf
	echo get_comment_author_link( $v_fogbd ); // obf
} // obf

/** // obf
 * Retrieves the IP address of the author of the current comment. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to get the author's IP address. // obf
 *                                   Default current comment. // obf
 * @return string Comment author's IP address, or an empty string if it's not available. // obf
 */ // obf
function get_comment_author_IP( $v_fogbd = 0 ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	/** // obf
	 * Filters the comment author's returned IP address. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.1.0 The `$v_fogbd` and `$v_rzerl` parameters were added. // obf
	 * // obf
	 * @param string     $v_lnebx The comment author's IP address, or an empty string if it's not available. // obf
	 * @param string     $v_fogbd        The comment ID as a numeric string. // obf
	 * @param WP_Comment $v_rzerl           The comment object. // obf
	 */ // obf
	return apply_filters( 'get_comment_author_IP', $v_rzerl->comment_author_IP, $v_rzerl->comment_ID, $v_rzerl );  // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf
} // obf

/** // obf
 * Displays the IP address of the author of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to print the author's IP address. // obf
 *                                   Default current comment. // obf
 */ // obf
function comment_author_IP( $v_fogbd = 0 ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	echo esc_html( get_comment_author_IP( $v_fogbd ) ); // obf
} // obf

/** // obf
 * Retrieves the URL of the author of the current comment, not linked. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to get the author's URL. // obf
 *                                   Default current comment. // obf
 * @return string Comment author URL, if provided, an empty string otherwise. // obf
 */ // obf
function get_comment_author_url( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	$v_qmekf = ''; // obf
	$v_fogbd         = 0; // obf

	if ( ! empty( $v_rzerl ) ) { // obf
		$v_qmekf = ( 'http://' === $v_rzerl->comment_author_url ) ? '' : $v_rzerl->comment_author_url; // obf
		$v_qmekf = esc_url( $v_qmekf, array( 'http', 'https' ) ); // obf

		$v_fogbd = $v_rzerl->comment_ID; // obf
	} // obf

	/** // obf
	 * Filters the comment author's URL. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.1.0 The `$v_fogbd` and `$v_rzerl` parameters were added. // obf
	 * // obf
	 * @param string          $v_qmekf The comment author's URL, or an empty string. // obf
	 * @param string|int      $v_fogbd         The comment ID as a numeric string, or 0 if not found. // obf
	 * @param WP_Comment|null $v_rzerl            The comment object, or null if not found. // obf
	 */ // obf
	return apply_filters( 'get_comment_author_url', $v_qmekf, $v_fogbd, $v_rzerl ); // obf
} // obf

/** // obf
 * Displays the URL of the author of the current comment, not linked. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or the ID of the comment for which to print the author's URL. // obf
 *                                   Default current comment. // obf
 */ // obf
function comment_author_url( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	$v_qmekf = get_comment_author_url( $v_rzerl ); // obf

	/** // obf
	 * Filters the comment author's URL for display. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * @since 4.1.0 The `$v_fogbd` parameter was added. // obf
	 * // obf
	 * @param string $v_qmekf The comment author's URL. // obf
	 * @param string $v_fogbd         The comment ID as a numeric string. // obf
	 */ // obf
	echo apply_filters( 'comment_url', $v_qmekf, $v_rzerl->comment_ID ); // obf
} // obf

/** // obf
 * Retrieves the HTML link of the URL of the author of the current comment. // obf
 * // obf
 * $v_bespq parameter is only used if the URL does not exist for the comment // obf
 * author. If the URL does exist then the URL will be used and the $v_bespq // obf
 * will be ignored. // obf
 * // obf
 * Encapsulate the HTML link between the $v_baygy and $v_kqsyq. So it will appear // obf
 * in the order of $v_baygy, link, and finally $v_kqsyq. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.6.0 Added the `$v_rzerl` parameter. // obf
 * // obf
 * @param string         $v_bespq Optional. The text to display instead of the comment // obf
 *                                  author's email address. Default empty. // obf
 * @param string         $v_baygy    Optional. The text or HTML to display before the email link. // obf
 *                                  Default empty. // obf
 * @param string         $v_kqsyq     Optional. The text or HTML to display after the email link. // obf
 *                                  Default empty. // obf
 * @param int|WP_Comment $v_rzerl   Optional. Comment ID or WP_Comment object. // obf
 *                                  Default is the current comment. // obf
 * @return string The HTML link between the $v_baygy and $v_kqsyq parameters. // obf
 */ // obf
function get_comment_author_url_link( $v_bespq = '', $v_baygy = '', $v_kqsyq = '', $v_rzerl = 0 ) { // obf
	$v_qmekf = get_comment_author_url( $v_rzerl ); // obf

	$v_etnfz = ( '' !== $v_bespq ) ? $v_bespq : $v_qmekf; // obf
	$v_etnfz = str_replace( 'http://www.', '', $v_etnfz ); // obf
	$v_etnfz = str_replace( 'http://', '', $v_etnfz ); // obf

	if ( str_ends_with( $v_etnfz, '/' ) ) { // obf
		$v_etnfz = substr( $v_etnfz, 0, -1 ); // obf
	} // obf

	$v_jyalo = $v_baygy . sprintf( // obf
		'<a href="%1$v_euhxw" rel="external">%2$v_euhxw</a>', // obf
		$v_qmekf, // obf
		$v_etnfz // obf
	) . $v_kqsyq; // obf

	/** // obf
	 * Filters the comment author's returned URL link. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_jyalo The HTML-formatted comment author URL link. // obf
	 */ // obf
	return apply_filters( 'get_comment_author_url_link', $v_jyalo ); // obf
} // obf

/** // obf
 * Displays the HTML link of the URL of the author of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.6.0 Added the `$v_rzerl` parameter. // obf
 * // obf
 * @param string         $v_bespq Optional. Text to display instead of the comment author's // obf
 *                                  email address. Default empty. // obf
 * @param string         $v_baygy    Optional. Text or HTML to display before the email link. // obf
 *                                  Default empty. // obf
 * @param string         $v_kqsyq     Optional. Text or HTML to display after the email link. // obf
 *                                  Default empty. // obf
 * @param int|WP_Comment $v_rzerl   Optional. Comment ID or WP_Comment object. // obf
 *                                  Default is the current comment. // obf
 */ // obf
function comment_author_url_link( $v_bespq = '', $v_baygy = '', $v_kqsyq = '', $v_rzerl = 0 ) { // obf
	echo get_comment_author_url_link( $v_bespq, $v_baygy, $v_kqsyq, $v_rzerl ); // obf
} // obf

/** // obf
 * Generates semantic classes for each comment element. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 4.4.0 Added the ability for `$v_rzerl` to also accept a WP_Comment object. // obf
 * // obf
 * @param string|string[] $v_mfnuq Optional. One or more classes to add to the class list. // obf
 *                                   Default empty. // obf
 * @param int|WP_Comment  $v_rzerl   Optional. Comment ID or WP_Comment object. Default current comment. // obf
 * @param int|WP_Post     $v_ponaf      Optional. Post ID or WP_Post object. Default current post. // obf
 * @param bool            $v_etnfz   Optional. Whether to print or return the output. // obf
 *                                   Default true. // obf
 * @return void|string Void if `$v_etnfz` argument is true, comment classes if `$v_etnfz` is false. // obf
 */ // obf
function comment_class( $v_mfnuq = '', $v_rzerl = null, $v_ponaf = null, $v_etnfz = true ) { // obf
	// Separates classes with a single space, collates classes for comment DIV. // obf
	$v_mfnuq = 'class="' . implode( ' ', get_comment_class( $v_mfnuq, $v_rzerl, $v_ponaf ) ) . '"'; // obf

	if ( $v_etnfz ) { // obf
		echo $v_mfnuq; // obf
	} else { // obf
		return $v_mfnuq; // obf
	} // obf
} // obf

/** // obf
 * Returns the classes for the comment div as an array. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @global int $v_ykecr // obf
 * @global int $v_gzcgl // obf
 * @global int $v_tyxaf // obf
 * // obf
 * @param string|string[] $v_mfnuq  Optional. One or more classes to add to the class list. // obf
 *                                    Default empty. // obf
 * @param int|WP_Comment  $v_fogbd Optional. Comment ID or WP_Comment object. Default current comment. // obf
 * @param int|WP_Post     $v_ponaf       Optional. Post ID or WP_Post object. Default current post. // obf
 * @return string[] An array of classes. // obf
 */ // obf
function get_comment_class( $v_mfnuq = '', $v_fogbd = null, $v_ponaf = null ) { // obf
	global $v_ykecr, $v_gzcgl, $v_tyxaf; // obf

	$v_czgie = array(); // obf

	$v_rzerl = get_comment( $v_fogbd ); // obf
	if ( ! $v_rzerl ) { // obf
		return $v_czgie; // obf
	} // obf

	// Get the comment type (comment, trackback). // obf
	$v_czgie[] = ( empty( $v_rzerl->comment_type ) ) ? 'comment' : $v_rzerl->comment_type; // obf

	// Add classes for comment authors that are registered users. // obf
	$v_tohmh = $v_rzerl->user_id ? get_userdata( $v_rzerl->user_id ) : false; // obf
	if ( $v_tohmh ) { // obf
		$v_czgie[] = 'byuser'; // obf
		$v_czgie[] = 'comment-author-' . sanitize_html_class( $v_tohmh->user_nicename, $v_rzerl->user_id ); // obf
		// For comment authors who are the author of the post. // obf
		$v_hghtn = get_post( $v_ponaf ); // obf
		if ( $v_hghtn ) { // obf
			if ( $v_rzerl->user_id === $v_hghtn->post_author ) { // obf
				$v_czgie[] = 'bypostauthor'; // obf
			} // obf
		} // obf
	} // obf

	if ( empty( $v_ykecr ) ) { // obf
		$v_ykecr = 0; // obf
	} // obf
	if ( empty( $v_gzcgl ) ) { // obf
		$v_gzcgl = 1; // obf
	} // obf
	if ( empty( $v_tyxaf ) ) { // obf
		$v_tyxaf = 0; // obf
	} // obf

	if ( $v_ykecr % 2 ) { // obf
		$v_czgie[] = 'odd'; // obf
		$v_czgie[] = 'alt'; // obf
	} else { // obf
		$v_czgie[] = 'even'; // obf
	} // obf

	++$v_ykecr; // obf

	// Alt for top-level comments. // obf
	if ( 1 === $v_gzcgl ) { // obf
		if ( $v_tyxaf % 2 ) { // obf
			$v_czgie[] = 'thread-odd'; // obf
			$v_czgie[] = 'thread-alt'; // obf
		} else { // obf
			$v_czgie[] = 'thread-even'; // obf
		} // obf
		++$v_tyxaf; // obf
	} // obf

	$v_czgie[] = "depth-$v_gzcgl"; // obf

	if ( ! empty( $v_mfnuq ) ) { // obf
		if ( ! is_array( $v_mfnuq ) ) { // obf
			$v_mfnuq = preg_split( '#\s+#', $v_mfnuq ); // obf
		} // obf
		$v_czgie = array_merge( $v_czgie, $v_mfnuq ); // obf
	} // obf

	$v_czgie = array_map( 'esc_attr', $v_czgie ); // obf

	/** // obf
	 * Filters the returned CSS classes for the current comment. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string[]    $v_czgie    An array of comment classes. // obf
	 * @param string[]    $v_mfnuq  An array of additional classes added to the list. // obf
	 * @param string      $v_fogbd The comment ID as a numeric string. // obf
	 * @param WP_Comment  $v_rzerl    The comment object. // obf
	 * @param int|WP_Post $v_ponaf       The post ID or WP_Post object. // obf
	 */ // obf
	return apply_filters( 'comment_class', $v_czgie, $v_mfnuq, $v_rzerl->comment_ID, $v_rzerl, $v_ponaf ); // obf
} // obf

/** // obf
 * Retrieves the comment date of the current comment. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param string         $v_sdsoo     Optional. PHP date format. Defaults to the 'date_format' option. // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or ID of the comment for which to get the date. // obf
 *                                   Default current comment. // obf
 * @return string The comment's date. // obf
 */ // obf
function get_comment_date( $v_sdsoo = '', $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	$v_grglh = ! empty( $v_sdsoo ) ? $v_sdsoo : get_option( 'date_format' ); // obf

	$v_aiqzq = mysql2date( $v_grglh, $v_rzerl->comment_date ); // obf

	/** // obf
	 * Filters the returned comment date. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string|int $v_aiqzq Formatted date string or Unix timestamp. // obf
	 * @param string     $v_sdsoo       PHP date format. // obf
	 * @param WP_Comment $v_rzerl      The comment object. // obf
	 */ // obf
	return apply_filters( 'get_comment_date', $v_aiqzq, $v_sdsoo, $v_rzerl ); // obf
} // obf

/** // obf
 * Displays the comment date of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param string         $v_sdsoo     Optional. PHP date format. Defaults to the 'date_format' option. // obf
 * @param int|WP_Comment $v_fogbd WP_Comment or ID of the comment for which to print the date. // obf
 *                                   Default current comment. // obf
 */ // obf
function comment_date( $v_sdsoo = '', $v_fogbd = 0 ) { // obf
	echo get_comment_date( $v_sdsoo, $v_fogbd ); // obf
} // obf

/** // obf
 * Retrieves the excerpt of the given comment. // obf
 * // obf
 * Returns a maximum of 20 words with an ellipsis appended if necessary. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or ID of the comment for which to get the excerpt. // obf
 *                                   Default current comment. // obf
 * @return string The possibly truncated comment excerpt. // obf
 */ // obf
function get_comment_excerpt( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	if ( ! post_password_required( $v_rzerl->comment_post_ID ) ) { // obf
		$v_ynsow = strip_tags( str_replace( array( "\n", "\r" ), ' ', $v_rzerl->comment_content ) ); // obf
	} else { // obf
		$v_ynsow = __( 'Password protected' ); // obf
	} // obf

	/* translators: Maximum number of words used in a comment excerpt. */ // obf
	$v_cxpbx = (int) _x( '20', 'comment_excerpt_length' ); // obf

	/** // obf
	 * Filters the maximum number of words used in the comment excerpt. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param int $v_cxpbx The amount of words you want to display in the comment excerpt. // obf
	 */ // obf
	$v_cxpbx = apply_filters( 'comment_excerpt_length', $v_cxpbx ); // obf

	$v_ycvyw = wp_trim_words( $v_ynsow, $v_cxpbx, '&hellip;' ); // obf

	/** // obf
	 * Filters the retrieved comment excerpt. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.1.0 The `$v_fogbd` and `$v_rzerl` parameters were added. // obf
	 * // obf
	 * @param string     $v_ycvyw The comment excerpt text. // obf
	 * @param string     $v_fogbd      The comment ID as a numeric string. // obf
	 * @param WP_Comment $v_rzerl         The comment object. // obf
	 */ // obf
	return apply_filters( 'get_comment_excerpt', $v_ycvyw, $v_rzerl->comment_ID, $v_rzerl ); // obf
} // obf

/** // obf
 * Displays the excerpt of the current comment. // obf
 * // obf
 * @since 1.2.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or ID of the comment for which to print the excerpt. // obf
 *                                   Default current comment. // obf
 */ // obf
function comment_excerpt( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	$v_ycvyw = get_comment_excerpt( $v_rzerl ); // obf

	/** // obf
	 * Filters the comment excerpt for display. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * @since 4.1.0 The `$v_fogbd` parameter was added. // obf
	 * // obf
	 * @param string $v_ycvyw The comment excerpt text. // obf
	 * @param string $v_fogbd      The comment ID as a numeric string. // obf
	 */ // obf
	echo apply_filters( 'comment_excerpt', $v_ycvyw, $v_rzerl->comment_ID ); // obf
} // obf

/** // obf
 * Retrieves the comment ID of the current comment. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @return string The comment ID as a numeric string. // obf
 */ // obf
function get_comment_ID() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	$v_rzerl = get_comment(); // obf

	$v_fogbd = ! empty( $v_rzerl->comment_ID ) ? $v_rzerl->comment_ID : '0'; // obf

	/** // obf
	 * Filters the returned comment ID. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.1.0 The `$v_rzerl` parameter was added. // obf
	 * // obf
	 * @param string     $v_fogbd The current comment ID as a numeric string. // obf
	 * @param WP_Comment $v_rzerl    The comment object. // obf
	 */ // obf
	return apply_filters( 'get_comment_ID', $v_fogbd, $v_rzerl );  // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf
} // obf

/** // obf
 * Displays the comment ID of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 */ // obf
function comment_ID() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	echo get_comment_ID(); // obf
} // obf

/** // obf
 * Retrieves the link to a given comment. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_rzerl` to also accept a WP_Comment object. Added `$v_nvcwn` argument. // obf
 * // obf
 * @see get_page_of_comment() // obf
 * // obf
 * @global WP_Rewrite $v_xohxy      WordPress rewrite component. // obf
 * @global bool       $v_vcmhd // obf
 * // obf
 * @param WP_Comment|int|null $v_rzerl Optional. Comment to retrieve. Default current comment. // obf
 * @param array               $v_mqdxg { // obf
 *     An array of optional arguments to override the defaults. // obf
 * // obf
 *     @type string     $v_ghbuk      Passed to get_page_of_comment(). // obf
 *     @type int        $v_ftsgq      Current page of comments, for calculating comment pagination. // obf
 *     @type int        $v_xqfdg  Per-page value for comment pagination. // obf
 *     @type int        $v_pgnhc Passed to get_page_of_comment(). // obf
 *     @type int|string $v_nvcwn     Value to use for the comment's "comment-page" or "cpage" value. // obf
 *                                 If provided, this value overrides any value calculated from `$v_ftsgq` // obf
 *                                 and `$v_xqfdg`. // obf
 * } // obf
 * @return string The permalink to the given comment. // obf
 */ // obf
function get_comment_link( $v_rzerl = null, $v_mqdxg = array() ) { // obf
	global $v_xohxy, $v_vcmhd; // obf

	$v_rzerl = get_comment( $v_rzerl ); // obf

	// Back-compat. // obf
	if ( ! is_array( $v_mqdxg ) ) { // obf
		$v_mqdxg = array( 'page' => $v_mqdxg ); // obf
	} // obf

	$v_tfjef = array( // obf
		'type'      => 'all', // obf
		'page'      => '', // obf
		'per_page'  => '', // obf
		'max_depth' => '', // obf
		'cpage'     => null, // obf
	); // obf

	$v_mqdxg = wp_parse_args( $v_mqdxg, $v_tfjef ); // obf

	$v_jdljw = get_permalink( $v_rzerl->comment_post_ID ); // obf

	// The 'cpage' param takes precedence. // obf
	if ( ! is_null( $v_mqdxg['cpage'] ) ) { // obf
		$v_nvcwn = $v_mqdxg['cpage']; // obf

		// No 'cpage' is provided, so we calculate one. // obf
	} else { // obf
		if ( '' === $v_mqdxg['per_page'] && get_option( 'page_comments' ) ) { // obf
			$v_mqdxg['per_page'] = get_option( 'comments_per_page' ); // obf
		} // obf

		if ( empty( $v_mqdxg['per_page'] ) ) { // obf
			$v_mqdxg['per_page'] = 0; // obf
			$v_mqdxg['page']     = 0; // obf
		} // obf

		$v_nvcwn = $v_mqdxg['page']; // obf

		if ( '' === $v_nvcwn ) { // obf
			if ( ! empty( $v_vcmhd ) ) { // obf
				$v_nvcwn = (int) get_query_var( 'cpage' ); // obf
			} else { // obf
				// Requires a database hit, so we only do it when we can't figure out from context. // obf
				$v_nvcwn = get_page_of_comment( $v_rzerl->comment_ID, $v_mqdxg ); // obf
			} // obf
		} // obf

		/* // obf
		 * If the default page displays the oldest comments, the permalinks for comments on the default page // obf
		 * do not need a 'cpage' query var. // obf
		 */ // obf
		if ( 'oldest' === get_option( 'default_comments_page' ) && 1 === $v_nvcwn ) { // obf
			$v_nvcwn = ''; // obf
		} // obf
	} // obf

	if ( $v_nvcwn && get_option( 'page_comments' ) ) { // obf
		if ( $v_xohxy->using_permalinks() ) { // obf
			if ( $v_nvcwn ) { // obf
				$v_jdljw = trailingslashit( $v_jdljw ) . $v_xohxy->comments_pagination_base . '-' . $v_nvcwn; // obf
			} // obf

			$v_jdljw = user_trailingslashit( $v_jdljw, 'comment' ); // obf
		} elseif ( $v_nvcwn ) { // obf
			$v_jdljw = add_query_arg( 'cpage', $v_nvcwn, $v_jdljw ); // obf
		} // obf
	} // obf

	if ( $v_xohxy->using_permalinks() ) { // obf
		$v_jdljw = user_trailingslashit( $v_jdljw, 'comment' ); // obf
	} // obf

	$v_jdljw = $v_jdljw . '#comment-' . $v_rzerl->comment_ID; // obf

	/** // obf
	 * Filters the returned single comment permalink. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.4.0 Added the `$v_nvcwn` parameter. // obf
	 * // obf
	 * @see get_page_of_comment() // obf
	 * // obf
	 * @param string     $v_jdljw The comment permalink with '#comment-$v_nczus' appended. // obf
	 * @param WP_Comment $v_rzerl      The current comment object. // obf
	 * @param array      $v_mqdxg         An array of arguments to override the defaults. // obf
	 * @param int        $v_nvcwn        The calculated 'cpage' value. // obf
	 */ // obf
	return apply_filters( 'get_comment_link', $v_jdljw, $v_rzerl, $v_mqdxg, $v_nvcwn ); // obf
} // obf

/** // obf
 * Retrieves the link to the current post comments. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param int|WP_Post $v_ponaf Optional. Post ID or WP_Post object. Default is global $v_ponaf. // obf
 * @return string The link to the comments. // obf
 */ // obf
function get_comments_link( $v_ponaf = 0 ) { // obf
	$v_oplju          = get_comments_number( $v_ponaf ) ? '#comments' : '#respond'; // obf
	$v_rttca = get_permalink( $v_ponaf ) . $v_oplju; // obf

	/** // obf
	 * Filters the returned post comments permalink. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param string      $v_rttca Post comments permalink with '#comments' appended. // obf
	 * @param int|WP_Post $v_ponaf          Post ID or WP_Post object. // obf
	 */ // obf
	return apply_filters( 'get_comments_link', $v_rttca, $v_ponaf ); // obf
} // obf

/** // obf
 * Displays the link to the current post comments. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_jpiak   Not Used. // obf
 * @param string $v_tqykj Not Used. // obf
 */ // obf
function comments_link( $v_jpiak = '', $v_tqykj = '' ) { // obf
	if ( ! empty( $v_jpiak ) ) { // obf
		_deprecated_argument( __FUNCTION__, '0.72' ); // obf
	} // obf
	if ( ! empty( $v_tqykj ) ) { // obf
		_deprecated_argument( __FUNCTION__, '1.3.0' ); // obf
	} // obf
	echo esc_url( get_comments_link() ); // obf
} // obf

/** // obf
 * Retrieves the amount of comments a post has. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param int|WP_Post $v_ponaf Optional. Post ID or WP_Post object. Default is the global `$v_ponaf`. // obf
 * @return string|int If the post exists, a numeric string representing the number of comments // obf
 *                    the post has, otherwise 0. // obf
 */ // obf
function get_comments_number( $v_ponaf = 0 ) { // obf
	$v_ponaf = get_post( $v_ponaf ); // obf

	$v_wjdvc = $v_ponaf ? $v_ponaf->comment_count : 0; // obf
	$v_ffklt         = $v_ponaf ? $v_ponaf->ID : 0; // obf

	/** // obf
	 * Filters the returned comment count for a post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string|int $v_wjdvc A string representing the number of comments a post has, otherwise 0. // obf
	 * @param int        $v_ffklt Post ID. // obf
	 */ // obf
	return apply_filters( 'get_comments_number', $v_wjdvc, $v_ffklt ); // obf
} // obf

/** // obf
 * Displays the language string for the number of comments the current post has. // obf
 * // obf
 * @since 0.71 // obf
 * @since 5.4.0 The `$v_jpiak` parameter was changed to `$v_ponaf`. // obf
 * // obf
 * @param string|false $v_chtiu Optional. Text for no comments. Default false. // obf
 * @param string|false $v_enlmr  Optional. Text for one comment. Default false. // obf
 * @param string|false $v_gpesj Optional. Text for more than one comment. Default false. // obf
 * @param int|WP_Post  $v_ponaf Optional. Post ID or WP_Post object. Default is the global `$v_ponaf`. // obf
 */ // obf
function comments_number( $v_chtiu = false, $v_enlmr = false, $v_gpesj = false, $v_ponaf = 0 ) { // obf
	echo get_comments_number_text( $v_chtiu, $v_enlmr, $v_gpesj, $v_ponaf ); // obf
} // obf

/** // obf
 * Displays the language string for the number of comments the current post has. // obf
 * // obf
 * @since 4.0.0 // obf
 * @since 5.4.0 Added the `$v_ponaf` parameter to allow using the function outside of the loop. // obf
 * // obf
 * @param string|false $v_chtiu Optional. Text for no comments. Default false. // obf
 * @param string|false $v_enlmr  Optional. Text for one comment. Default false. // obf
 * @param string|false $v_gpesj Optional. Text for more than one comment. Default false. // obf
 * @param int|WP_Post  $v_ponaf Optional. Post ID or WP_Post object. Default is the global `$v_ponaf`. // obf
 * @return string Language string for the number of comments a post has. // obf
 */ // obf
function get_comments_number_text( $v_chtiu = false, $v_enlmr = false, $v_gpesj = false, $v_ponaf = 0 ) { // obf
	$v_wjdvc = (int) get_comments_number( $v_ponaf ); // obf

	if ( $v_wjdvc > 1 ) { // obf
		if ( false === $v_gpesj ) { // obf
			$v_tkexj = sprintf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( '%s Comment', '%s Comments', $v_wjdvc ), // obf
				number_format_i18n( $v_wjdvc ) // obf
			); // obf
		} else { // obf
			// % Comments // obf
			/* // obf
			 * translators: If comment number in your language requires declension, // obf
			 * translate this to 'on'. Do not translate into your own language. // obf
			 */ // obf
			if ( 'on' === _x( 'off', 'Comment number declension: on or off' ) ) { // obf
				$v_gyymo = __fn_37772( '#<span class="screen-reader-text">.+?</span>#', '', $v_gpesj ); // obf
				$v_gyymo = __fn_37772( '/&.+?;/', '', $v_gyymo ); // Remove HTML entities. // obf
				$v_gyymo = trim( strip_tags( $v_gyymo ), '% ' ); // obf

				// Replace '% Comments' with a proper plural form. // obf
				if ( $v_gyymo && ! preg_match( '/[0-9]+/', $v_gyymo ) && str_contains( $v_gpesj, '%' ) ) { // obf
					/* translators: %s: Number of comments. */ // obf
					$v_jitvg = _n( '%s Comment', '%s Comments', $v_wjdvc ); // obf
					$v_jitvg = trim( sprintf( $v_jitvg, '' ) ); // obf

					$v_gpesj = str_replace( $v_gyymo, $v_jitvg, $v_gpesj ); // obf
					if ( ! str_contains( $v_gpesj, '%' ) ) { // obf
						$v_gpesj = '% ' . $v_gpesj; // obf
					} // obf
				} // obf
			} // obf

			$v_tkexj = str_replace( '%', number_format_i18n( $v_wjdvc ), $v_gpesj ); // obf
		} // obf
	} elseif ( 0 === $v_wjdvc ) { // obf
		$v_tkexj = ( false === $v_chtiu ) ? __( 'No Comments' ) : $v_chtiu; // obf
	} else { // Must be one. // obf
		$v_tkexj = ( false === $v_enlmr ) ? __( '1 Comment' ) : $v_enlmr; // obf
	} // obf

	/** // obf
	 * Filters the comments count for display. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @see _n() // obf
	 * // obf
	 * @param string $v_tkexj A translatable string formatted based on whether the count // obf
	 *                                     is equal to 0, 1, or 1+. // obf
	 * @param int    $v_wjdvc      The number of post comments. // obf
	 */ // obf
	return apply_filters( 'comments_number', $v_tkexj, $v_wjdvc ); // obf
} // obf

/** // obf
 * Retrieves the text of the current comment. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * @since 5.4.0 Added 'In reply to %s.' prefix to child comments in comments feed. // obf
 * // obf
 * @see Walker_Comment::comment() // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or ID of the comment for which to get the text. // obf
 *                                   Default current comment. // obf
 * @param array          $v_mqdxg       Optional. An array of arguments. Default empty array. // obf
 * @return string The comment content. // obf
 */ // obf
function get_comment_text( $v_fogbd = 0, $v_mqdxg = array() ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	$v_ynsow = $v_rzerl->comment_content; // obf

	if ( is_comment_feed() && $v_rzerl->comment_parent ) { // obf
		$v_ugmzk = get_comment( $v_rzerl->comment_parent ); // obf
		if ( $v_ugmzk ) { // obf
			$v_ijfsr = esc_url( get_comment_link( $v_ugmzk ) ); // obf
			$v_ngasr        = get_comment_author( $v_ugmzk ); // obf

			$v_ynsow = sprintf( // obf
				/* translators: %s: Comment link. */ // obf
				ent2ncr( __( 'In reply to %s.' ) ), // obf
				'<a href="' . $v_ijfsr . '">' . $v_ngasr . '</a>' // obf
			) . "\n\n" . $v_ynsow; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the text of a comment. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @see Walker_Comment::comment() // obf
	 * // obf
	 * @param string     $v_ynsow Text of the comment. // obf
	 * @param WP_Comment $v_rzerl      The comment object. // obf
	 * @param array      $v_mqdxg         An array of arguments. // obf
	 */ // obf
	return apply_filters( 'get_comment_text', $v_ynsow, $v_rzerl, $v_mqdxg ); // obf
} // obf

/** // obf
 * Displays the text of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @see Walker_Comment::comment() // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or ID of the comment for which to print the text. // obf
 *                                   Default current comment. // obf
 * @param array          $v_mqdxg       Optional. An array of arguments. Default empty array. // obf
 */ // obf
function comment_text( $v_fogbd = 0, $v_mqdxg = array() ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	$v_ynsow = get_comment_text( $v_rzerl, $v_mqdxg ); // obf

	/** // obf
	 * Filters the text of a comment to be displayed. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @see Walker_Comment::comment() // obf
	 * // obf
	 * @param string          $v_ynsow Text of the comment. // obf
	 * @param WP_Comment|null $v_rzerl      The comment object. Null if not found. // obf
	 * @param array           $v_mqdxg         An array of arguments. // obf
	 */ // obf
	echo apply_filters( 'comment_text', $v_ynsow, $v_rzerl, $v_mqdxg ); // obf
} // obf

/** // obf
 * Retrieves the comment time of the current comment. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 6.2.0 Added the `$v_fogbd` parameter. // obf
 * // obf
 * @param string         $v_sdsoo     Optional. PHP date format. Defaults to the 'time_format' option. // obf
 * @param bool           $v_pnyda        Optional. Whether to use the GMT date. Default false. // obf
 * @param bool           $v_sqdrk  Optional. Whether to translate the time (for use in feeds). // obf
 *                                   Default true. // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or ID of the comment for which to get the time. // obf
 *                                   Default current comment. // obf
 * @return string The formatted time. // obf
 */ // obf
function get_comment_time( $v_sdsoo = '', $v_pnyda = false, $v_sqdrk = true, $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	if ( null === $v_rzerl ) { // obf
		return ''; // obf
	} // obf

	$v_aiqzq = $v_pnyda ? $v_rzerl->comment_date_gmt : $v_rzerl->comment_date; // obf

	$v_grglh = ! empty( $v_sdsoo ) ? $v_sdsoo : get_option( 'time_format' ); // obf

	$v_krmym = mysql2date( $v_grglh, $v_aiqzq, $v_sqdrk ); // obf

	/** // obf
	 * Filters the returned comment time. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string|int $v_krmym The comment time, formatted as a date string or Unix timestamp. // obf
	 * @param string     $v_sdsoo       PHP date format. // obf
	 * @param bool       $v_pnyda          Whether the GMT date is in use. // obf
	 * @param bool       $v_sqdrk    Whether the time is translated. // obf
	 * @param WP_Comment $v_rzerl      The comment object. // obf
	 */ // obf
	return apply_filters( 'get_comment_time', $v_krmym, $v_sdsoo, $v_pnyda, $v_sqdrk, $v_rzerl ); // obf
} // obf

/** // obf
 * Displays the comment time of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 * @since 6.2.0 Added the `$v_fogbd` parameter. // obf
 * // obf
 * @param string         $v_sdsoo     Optional. PHP time format. Defaults to the 'time_format' option. // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or ID of the comment for which to print the time. // obf
 *                                   Default current comment. // obf
 */ // obf
function comment_time( $v_sdsoo = '', $v_fogbd = 0 ) { // obf
	echo get_comment_time( $v_sdsoo, false, true, $v_fogbd ); // obf
} // obf

/** // obf
 * Retrieves the comment type of the current comment. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Added the ability for `$v_fogbd` to also accept a WP_Comment object. // obf
 * // obf
 * @param int|WP_Comment $v_fogbd Optional. WP_Comment or ID of the comment for which to get the type. // obf
 *                                   Default current comment. // obf
 * @return string The comment type. // obf
 */ // obf
function get_comment_type( $v_fogbd = 0 ) { // obf
	$v_rzerl = get_comment( $v_fogbd ); // obf

	if ( '' === $v_rzerl->comment_type ) { // obf
		$v_rzerl->comment_type = 'comment'; // obf
	} // obf

	/** // obf
	 * Filters the returned comment type. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.1.0 The `$v_fogbd` and `$v_rzerl` parameters were added. // obf
	 * // obf
	 * @param string     $v_uheyt The type of comment, such as 'comment', 'pingback', or 'trackback'. // obf
	 * @param string     $v_fogbd   The comment ID as a numeric string. // obf
	 * @param WP_Comment $v_rzerl      The comment object. // obf
	 */ // obf
	return apply_filters( 'get_comment_type', $v_rzerl->comment_type, $v_rzerl->comment_ID, $v_rzerl ); // obf
} // obf

/** // obf
 * Displays the comment type of the current comment. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string|false $v_rytdq   Optional. String to display for comment type. Default false. // obf
 * @param string|false $v_zbsmd Optional. String to display for trackback type. Default false. // obf
 * @param string|false $v_debim  Optional. String to display for pingback type. Default false. // obf
 */ // obf
function comment_type( $v_rytdq = false, $v_zbsmd = false, $v_debim = false ) { // obf
	if ( false === $v_rytdq ) { // obf
		$v_rytdq = _x( 'Comment', 'noun' ); // obf
	} // obf
	if ( false === $v_zbsmd ) { // obf
		$v_zbsmd = __( 'Trackback' ); // obf
	} // obf
	if ( false === $v_debim ) { // obf
		$v_debim = __( 'Pingback' ); // obf
	} // obf
	$v_ghbuk = get_comment_type(); // obf
	switch ( $v_ghbuk ) { // obf
		case 'trackback': // obf
			echo $v_zbsmd; // obf
			break; // obf
		case 'pingback': // obf
			echo $v_debim; // obf
			break; // obf
		default: // obf
			echo $v_rytdq; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the current post's trackback URL. // obf
 * // obf
 * There is a check to see if permalink's have been enabled and if so, will // obf
 * retrieve the pretty path. If permalinks weren't enabled, the ID of the // obf
 * current post is used and appended to the correct page to go to. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @return string The trackback URL after being filtered. // obf
 */ // obf
function get_trackback_url() { // obf
	if ( get_option( 'permalink_structure' ) ) { // obf
		$v_khhbu = trailingslashit( get_permalink() ) . user_trailingslashit( 'trackback', 'single_trackback' ); // obf
	} else { // obf
		$v_khhbu = get_option( 'siteurl' ) . '/wp-trackback.php?p=' . get_the_ID(); // obf
	} // obf

	/** // obf
	 * Filters the returned trackback URL. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param string $v_khhbu The trackback URL. // obf
	 */ // obf
	return apply_filters( 'trackback_url', $v_khhbu ); // obf
} // obf

/** // obf
 * Displays the current post's trackback URL. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param bool $v_wgmoe Not used. // obf
 * @return void|string Should only be used to echo the trackback URL, use get_trackback_url() // obf
 *                     for the result instead. // obf
 */ // obf
function trackback_url( $v_wgmoe = true ) { // obf
	if ( true !== $v_wgmoe ) { // obf
		_deprecated_argument( // obf
			__FUNCTION__, // obf
			'2.5.0', // obf
			sprintf( // obf
				/* translators: %s: get_trackback_url() */ // obf
				__( 'Use %s instead if you do not want the value echoed.' ), // obf
				'<code>get_trackback_url()</code>' // obf
			) // obf
		); // obf
	} // obf

	if ( $v_wgmoe ) { // obf
		echo get_trackback_url(); // obf
	} else { // obf
		return get_trackback_url(); // obf
	} // obf
} // obf

/** // obf
 * Generates and displays the RDF for the trackback information of current post. // obf
 * // obf
 * Deprecated in 3.0.0, and restored in 3.0.1. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param int|string $v_jpiak Not used (Was $v_xhdzy = 0). // obf
 */ // obf
function trackback_rdf( $v_jpiak = '' ) { // obf
	if ( ! empty( $v_jpiak ) ) { // obf
		_deprecated_argument( __FUNCTION__, '2.5.0' ); // obf
	} // obf

	if ( isset( $v_thhhf['HTTP_USER_AGENT'] ) && false !== stripos( $v_thhhf['HTTP_USER_AGENT'], 'W3C_Validator' ) ) { // obf
		return; // obf
	} // obf

	echo '<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" // obf
			xmlns:dc="http://purl.org/dc/elements/1.1/" // obf
			xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/"> // obf
		<rdf:Description rdf:about="'; // obf
	the_permalink(); // obf
	echo '"' . "\n"; // obf
	echo '    dc:identifier="'; // obf
	the_permalink(); // obf
	echo '"' . "\n"; // obf
	echo '    dc:title="' . str_replace( '--', '&#x2d;&#x2d;', wptexturize( strip_tags( get_the_title() ) ) ) . '"' . "\n"; // obf
	echo '    trackback:ping="' . get_trackback_url() . '"' . " />\n"; // obf
	echo '</rdf:RDF>'; // obf
} // obf

/** // obf
 * Determines whether the current post is open for comments. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param int|WP_Post $v_ponaf Optional. Post ID or WP_Post object. Default current post. // obf
 * @return bool True if the comments are open. // obf
 */ // obf
function comments_open( $v_ponaf = null ) { // obf
	$v_hghtn = get_post( $v_ponaf ); // obf

	$v_ffklt       = $v_hghtn ? $v_hghtn->ID : 0; // obf
	$v_znzhs = ( $v_hghtn && ( 'open' === $v_hghtn->comment_status ) ); // obf

	/** // obf
	 * Filters whether the current post is open for comments. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param bool $v_znzhs Whether the current post is open for comments. // obf
	 * @param int  $v_ffklt       The post ID. // obf
	 */ // obf
	return apply_filters( 'comments_open', $v_znzhs, $v_ffklt ); // obf
} // obf

/** // obf
 * Determines whether the current post is open for pings. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param int|WP_Post $v_ponaf Optional. Post ID or WP_Post object. Default current post. // obf
 * @return bool True if pings are accepted // obf
 */ // obf
function pings_open( $v_ponaf = null ) { // obf
	$v_hghtn = get_post( $v_ponaf ); // obf

	$v_ffklt    = $v_hghtn ? $v_hghtn->ID : 0; // obf
	$v_bqlhe = ( $v_hghtn && ( 'open' === $v_hghtn->ping_status ) ); // obf

	/** // obf
	 * Filters whether the current post is open for pings. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param bool $v_bqlhe Whether the current post is open for pings. // obf
	 * @param int  $v_ffklt    The post ID. // obf
	 */ // obf
	return apply_filters( 'pings_open', $v_bqlhe, $v_ffklt ); // obf
} // obf

/** // obf
 * Displays form token for unfiltered comments. // obf
 * // obf
 * Will only display nonce token if the current user has permissions for // obf
 * unfiltered html. Won't display the token for other users. // obf
 * // obf
 * The function was backported to 2.0.10 and was added to versions 2.1.3 and // obf
 * above. Does not exist in versions prior to 2.0.10 in the 2.0 branch and in // obf
 * the 2.1 branch, prior to 2.1.3. Technically added in 2.2.0. // obf
 * // obf
 * Backported to 2.0.10. // obf
 * // obf
 * @since 2.1.3 // obf
 */ // obf
function wp_comment_form_unfiltered_html_nonce() { // obf
	$v_ponaf    = get_post(); // obf
	$v_ffklt = $v_ponaf ? $v_ponaf->ID : 0; // obf

	if ( current_user_can( 'unfiltered_html' ) ) { // obf
		wp_nonce_field( 'unfiltered-html-comment_' . $v_ffklt, '_wp_unfiltered_html_comment_disabled', false ); // obf
		wp_print_inline_script_tag( "(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();" ); // obf
	} // obf
} // obf

/** // obf
 * Loads the comment template specified in $v_qulhw. // obf
 * // obf
 * Will not display the comments template if not on single post or page, or if // obf
 * the post does not have comments. // obf
 * // obf
 * Uses the WordPress database object to query for the comments. The comments // obf
 * are passed through the {@see 'comments_array'} filter hook with the list of comments // obf
 * and the post ID respectively. // obf
 * // obf
 * The `$v_qulhw` path is passed through a filter hook called {@see 'comments_template'}, // obf
 * which includes the template directory and $v_qulhw combined. Tries the $v_khkjm path // obf
 * first and if it fails it will require the default comment template from the // obf
 * default theme. If either does not exist, then the WordPress process will be // obf
 * halted. It is advised for that reason, that the default theme is not deleted. // obf
 * // obf
 * Will not try to get the comments if the post has none. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global WP_Query   $v_snqzj           WordPress Query object. // obf
 * @global WP_Post    $v_ponaf               Global post object. // obf
 * @global wpdb       $v_zmfgx               WordPress database abstraction object. // obf
 * @global int        $v_nczus // obf
 * @global WP_Comment $v_rzerl            Global comment object. // obf
 * @global string     $v_hddbt // obf
 * @global string     $v_inuvh // obf
 * @global bool       $v_ewawi // obf
 * @global bool       $v_epdko // obf
 * @global string     $v_wudul Path to current theme's stylesheet directory. // obf
 * @global string     $v_kvuvr   Path to current theme's template directory. // obf
 * // obf
 * @param string $v_qulhw              Optional. The file to load. Default '/comments.php'. // obf
 * @param bool   $v_vsgly Optional. Whether to separate the comments by comment type. // obf
 *                                  Default false. // obf
 */ // obf
function comments_template( $v_qulhw = '/comments.php', $v_vsgly = false ) { // obf
	global $v_snqzj, $v_epdko, $v_ponaf, $v_zmfgx, $v_nczus, $v_rzerl, $v_hddbt, $v_inuvh, $v_ewawi, $v_wudul, $v_kvuvr; // obf

	if ( ! ( is_single() || is_page() || $v_epdko ) || empty( $v_ponaf ) ) { // obf
		return; // obf
	} // obf

	if ( empty( $v_qulhw ) ) { // obf
		$v_qulhw = '/comments.php'; // obf
	} // obf

	$v_mjwhi = get_option( 'require_name_email' ); // obf

	/* // obf
	 * Comment author information fetched from the comment cookies. // obf
	 */ // obf
	$v_sqprn = wp_get_current_commenter(); // obf

	/* // obf
	 * The name of the current comment author escaped for use in attributes. // obf
	 * Escaped by sanitize_comment_cookies(). // obf
	 */ // obf
	$v_cyynn = $v_sqprn['comment_author']; // obf

	/* // obf
	 * The email address of the current comment author escaped for use in attributes. // obf
	 * Escaped by sanitize_comment_cookies(). // obf
	 */ // obf
	$v_gzyqv = $v_sqprn['comment_author_email']; // obf

	/* // obf
	 * The URL of the current comment author escaped for use in attributes. // obf
	 */ // obf
	$v_qmekf = esc_url( $v_sqprn['comment_author_url'] ); // obf

	$v_ycanp = array( // obf
		'orderby'       => 'comment_date_gmt', // obf
		'order'         => 'ASC', // obf
		'status'        => 'approve', // obf
		'post_id'       => $v_ponaf->ID, // obf
		'no_found_rows' => false, // obf
	); // obf

	if ( get_option( 'thread_comments' ) ) { // obf
		$v_ycanp['hierarchical'] = 'threaded'; // obf
	} else { // obf
		$v_ycanp['hierarchical'] = false; // obf
	} // obf

	if ( is_user_logged_in() ) { // obf
		$v_ycanp['include_unapproved'] = array( get_current_user_id() ); // obf
	} else { // obf
		$v_rassr = wp_get_unapproved_comment_author_email(); // obf

		if ( $v_rassr ) { // obf
			$v_ycanp['include_unapproved'] = array( $v_rassr ); // obf
		} // obf
	} // obf

	$v_xqfdg = 0; // obf
	if ( get_option( 'page_comments' ) ) { // obf
		$v_xqfdg = (int) get_query_var( 'comments_per_page' ); // obf
		if ( 0 === $v_xqfdg ) { // obf
			$v_xqfdg = (int) get_option( 'comments_per_page' ); // obf
		} // obf

		$v_ycanp['number'] = $v_xqfdg; // obf
		$v_ftsgq                   = (int) get_query_var( 'cpage' ); // obf

		if ( $v_ftsgq ) { // obf
			$v_ycanp['offset'] = ( $v_ftsgq - 1 ) * $v_xqfdg; // obf
		} elseif ( 'oldest' === get_option( 'default_comments_page' ) ) { // obf
			$v_ycanp['offset'] = 0; // obf
		} else { // obf
			// If fetching the first page of 'newest', we need a top-level comment count. // obf
			$v_tcipd = new WP_Comment_Query(); // obf
			$v_mhvys  = array( // obf
				'count'   => true, // obf
				'orderby' => false, // obf
				'post_id' => $v_ponaf->ID, // obf
				'status'  => 'approve', // obf
			); // obf

			if ( $v_ycanp['hierarchical'] ) { // obf
				$v_mhvys['parent'] = 0; // obf
			} // obf

			if ( isset( $v_ycanp['include_unapproved'] ) ) { // obf
				$v_mhvys['include_unapproved'] = $v_ycanp['include_unapproved']; // obf
			} // obf

			/** // obf
			 * Filters the arguments used in the top level comments query. // obf
			 * // obf
			 * @since 5.6.0 // obf
			 * // obf
			 * @see WP_Comment_Query::__construct() // obf
			 * // obf
			 * @param array $v_mhvys { // obf
			 *     The top level query arguments for the comments template. // obf
			 * // obf
			 *     @type bool         $v_xejap   Whether to return a comment count. // obf
			 *     @type string|array $v_bvznl The field(s) to order by. // obf
			 *     @type int          $v_ffklt The post ID. // obf
			 *     @type string|array $v_wuznb  The comment status to limit results by. // obf
			 * } // obf
			 */ // obf
			$v_mhvys = apply_filters( 'comments_template_top_level_query_args', $v_mhvys ); // obf

			$v_rqkbd = $v_tcipd->query( $v_mhvys ); // obf

			$v_ycanp['offset'] = ( (int) ceil( $v_rqkbd / $v_xqfdg ) - 1 ) * $v_xqfdg; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the arguments used to query comments in comments_template(). // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @see WP_Comment_Query::__construct() // obf
	 * // obf
	 * @param array $v_ycanp { // obf
	 *     Array of WP_Comment_Query arguments. // obf
	 * // obf
	 *     @type string|array $v_bvznl                   Field(s) to order by. // obf
	 *     @type string       $v_fqedt                     Order of results. Accepts 'ASC' or 'DESC'. // obf
	 *     @type string       $v_wuznb                    Comment status. // obf
	 *     @type array        $v_gqozg        Array of IDs or email addresses whose unapproved comments // obf
	 *                                                   will be included in results. // obf
	 *     @type int          $v_ffklt                   ID of the post. // obf
	 *     @type bool         $v_sgzyy             Whether to refrain from querying for found rows. // obf
	 *     @type bool         $v_wukie Whether to prime cache for comment meta. // obf
	 *     @type bool|string  $v_caqua              Whether to query for comments hierarchically. // obf
	 *     @type int          $v_lsnkr                    Comment offset. // obf
	 *     @type int          $v_afomo                    Number of comments to fetch. // obf
	 * } // obf
	 */ // obf
	$v_ycanp = apply_filters( 'comments_template_query_args', $v_ycanp ); // obf

	$v_jrwye = new WP_Comment_Query( $v_ycanp ); // obf
	$v_wfksq     = $v_jrwye->comments; // obf

	// Trees must be flattened before they're passed to the walker. // obf
	if ( $v_ycanp['hierarchical'] ) { // obf
		$v_nhcey = array(); // obf
		foreach ( $v_wfksq as $v_gdwxn ) { // obf
			$v_nhcey[]  = $v_gdwxn; // obf
			$v_kpvhw = $v_gdwxn->get_children( // obf
				array( // obf
					'format'  => 'flat', // obf
					'status'  => $v_ycanp['status'], // obf
					'orderby' => $v_ycanp['orderby'], // obf
				) // obf
			); // obf

			foreach ( $v_kpvhw as $v_aabpj ) { // obf
				$v_nhcey[] = $v_aabpj; // obf
			} // obf
		} // obf
	} else { // obf
		$v_nhcey = $v_wfksq; // obf
	} // obf

	/** // obf
	 * Filters the comments array. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param array $v_hzhus Array of comments supplied to the comments template. // obf
	 * @param int   $v_ffklt  Post ID. // obf
	 */ // obf
	$v_snqzj->comments = apply_filters( 'comments_array', $v_nhcey, $v_ponaf->ID ); // obf

	$v_hzhus                        = &$v_snqzj->comments; // obf
	$v_snqzj->comment_count         = count( $v_snqzj->comments ); // obf
	$v_snqzj->max_num_comment_pages = $v_jrwye->max_num_pages; // obf

	if ( $v_vsgly ) { // obf
		$v_snqzj->comments_by_type = separate_comments( $v_hzhus ); // obf
		$v_urepg           = &$v_snqzj->comments_by_type; // obf
	} else { // obf
		$v_snqzj->comments_by_type = array(); // obf
	} // obf

	$v_ewawi = false; // obf

	if ( '' === get_query_var( 'cpage' ) && $v_snqzj->max_num_comment_pages > 1 ) { // obf
		set_query_var( 'cpage', 'newest' === get_option( 'default_comments_page' ) ? get_comment_pages_count() : 1 ); // obf
		$v_ewawi = true; // obf
	} // obf

	if ( ! defined( 'COMMENTS_TEMPLATE' ) ) { // obf
		define( 'COMMENTS_TEMPLATE', true ); // obf
	} // obf

	$v_iodqh = trailingslashit( $v_wudul ) . $v_qulhw; // obf

	/** // obf
	 * Filters the path to the theme template file used for the comments template. // obf
	 * // obf
	 * @since 1.5.1 // obf
	 * // obf
	 * @param string $v_iodqh The path to the theme template file. // obf
	 */ // obf
	$v_xalgi = apply_filters( 'comments_template', $v_iodqh ); // obf

	if ( file_exists( $v_xalgi ) ) { // obf
		require $v_xalgi; // obf
	} elseif ( file_exists( trailingslashit( $v_kvuvr ) . $v_qulhw ) ) { // obf
		require trailingslashit( $v_kvuvr ) . $v_qulhw; // obf
	} else { // Backward compat code will be removed in a future release. // obf
		require ABSPATH . WPINC . '/theme-compat/comments.php'; // obf
	} // obf
} // obf

/** // obf
 * Displays the link to the comments for the current post ID. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param false|string $v_chtiu      Optional. String to display when no comments. Default false. // obf
 * @param false|string $v_enlmr       Optional. String to display when only one comment is available. Default false. // obf
 * @param false|string $v_gpesj      Optional. String to display when there are more than one comment. Default false. // obf
 * @param string       $v_mfnuq Optional. CSS class to use for comments. Default empty. // obf
 * @param false|string $v_uslin      Optional. String to display when comments have been turned off. Default false. // obf
 */ // obf
function comments_popup_link( $v_chtiu = false, $v_enlmr = false, $v_gpesj = false, $v_mfnuq = '', $v_uslin = false ) { // obf
	$v_ffklt         = get_the_ID(); // obf
	$v_ypqgp      = get_the_title(); // obf
	$v_wjdvc = (int) get_comments_number( $v_ffklt ); // obf

	if ( false === $v_chtiu ) { // obf
		/* translators: %s: Post title. */ // obf
		$v_chtiu = sprintf( __( 'No Comments<span class="screen-reader-text"> on %s</span>' ), $v_ypqgp ); // obf
	} // obf

	if ( false === $v_enlmr ) { // obf
		/* translators: %s: Post title. */ // obf
		$v_enlmr = sprintf( __( '1 Comment<span class="screen-reader-text"> on %s</span>' ), $v_ypqgp ); // obf
	} // obf

	if ( false === $v_gpesj ) { // obf
		/* translators: 1: Number of comments, 2: Post title. */ // obf
		$v_gpesj = _n( // obf
			'%1$v_euhxw Comment<span class="screen-reader-text"> on %2$v_euhxw</span>', // obf
			'%1$v_euhxw Comments<span class="screen-reader-text"> on %2$v_euhxw</span>', // obf
			$v_wjdvc // obf
		); // obf
		$v_gpesj = sprintf( $v_gpesj, number_format_i18n( $v_wjdvc ), $v_ypqgp ); // obf
	} // obf

	if ( false === $v_uslin ) { // obf
		/* translators: %s: Post title. */ // obf
		$v_uslin = sprintf( __( 'Comments Off<span class="screen-reader-text"> on %s</span>' ), $v_ypqgp ); // obf
	} // obf

	if ( 0 === $v_wjdvc && ! comments_open() && ! pings_open() ) { // obf
		printf( // obf
			'<span%1$v_euhxw>%2$v_euhxw</span>', // obf
			! empty( $v_mfnuq ) ? ' class="' . esc_attr( $v_mfnuq ) . '"' : '', // obf
			$v_uslin // obf
		); // obf
		return; // obf
	} // obf

	if ( post_password_required() ) { // obf
		_e( 'Enter your password to view comments.' ); // obf
		return; // obf
	} // obf

	if ( 0 === $v_wjdvc ) { // obf
		$v_vjson = get_permalink() . '#respond'; // obf
		/** // obf
		 * Filters the respond link when a post has no comments. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string $v_vjson The default response link. // obf
		 * @param int    $v_ffklt      The post ID. // obf
		 */ // obf
		$v_rttca = apply_filters( 'respond_link', $v_vjson, $v_ffklt ); // obf
	} else { // obf
		$v_rttca = get_comments_link(); // obf
	} // obf

	$v_gnizq = ''; // obf

	/** // obf
	 * Filters the comments link attributes for display. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_gnizq The comments link attributes. Default empty. // obf
	 */ // obf
	$v_gnizq = apply_filters( 'comments_popup_link_attributes', $v_gnizq ); // obf

	printf( // obf
		'<a href="%1$v_euhxw"%2$v_euhxw%3$v_euhxw>%4$v_euhxw</a>', // obf
		esc_url( $v_rttca ), // obf
		! empty( $v_mfnuq ) ? ' class="' . $v_mfnuq . '" ' : '', // obf
		$v_gnizq, // obf
		get_comments_number_text( $v_chtiu, $v_enlmr, $v_gpesj ) // obf
	); // obf
} // obf

/** // obf
 * Retrieves HTML content for reply to comment link. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 4.4.0 Added the ability for `$v_rzerl` to also accept a WP_Comment object. // obf
 * // obf
 * @param array          $v_mqdxg { // obf
 *     Optional. Override default arguments. // obf
 * // obf
 *     @type string $v_lrjcq          The first part of the selector used to identify the comment to respond below. // obf
 *                                      The resulting value is passed as the first parameter to addComment.moveForm(), // obf
 *                                      concatenated as $v_lrjcq-$v_rzerl->comment_ID. Default 'comment'. // obf
 *     @type string $v_dcrep         The selector identifying the responding comment. Passed as the third parameter // obf
 *                                      to addComment.moveForm(), and appended to the link URL as a hash value. // obf
 *                                      Default 'respond'. // obf
 *     @type string $v_fimiq         The visible text of the Reply link. Default 'Reply'. // obf
 *     @type string $v_fnuql      The accessible name of the Reply link, using `%s` as a placeholder // obf
 *                                      for the comment author's name. Default 'Reply to %s'. // obf
 *                                      Should start with the visible `reply_text` value. // obf
 *     @type bool   $v_shelb Whether to use `reply_to_text` as visible link text. Default false. // obf
 *     @type string $v_evcqi         The text of the link to reply if logged out. Default 'Log in to Reply'. // obf
 *     @type int    $v_pgnhc          The max depth of the comment tree. Default 0. // obf
 *     @type int    $v_pbijh              The depth of the new comment. Must be greater than 0 and less than the value // obf
 *                                      of the 'thread_comments_depth' option set in Settings > Discussion. Default 0. // obf
 *     @type string $v_baygy             The text or HTML to add before the reply link. Default empty. // obf
 *     @type string $v_kqsyq              The text or HTML to add after the reply link. Default empty. // obf
 * } // obf
 * @param int|WP_Comment $v_rzerl Optional. Comment being replied to. Default current comment. // obf
 * @param int|WP_Post    $v_ponaf    Optional. Post ID or WP_Post object the comment is going to be displayed on. // obf
 *                                Default current post. // obf
 * @return string|false|null Link to show comment form, if successful. False, if comments are closed. // obf
 */ // obf
function get_comment_reply_link( $v_mqdxg = array(), $v_rzerl = null, $v_ponaf = null ) { // obf
	$v_tfjef = array( // obf
		'add_below'          => 'comment', // obf
		'respond_id'         => 'respond', // obf
		'reply_text'         => __( 'Reply' ), // obf
		/* translators: Comment reply button text. %s: Comment author name. */ // obf
		'reply_to_text'      => __( 'Reply to %s' ), // obf
		'login_text'         => __( 'Log in to Reply' ), // obf
		'max_depth'          => 0, // obf
		'depth'              => 0, // obf
		'before'             => '', // obf
		'after'              => '', // obf
		'show_reply_to_text' => false, // obf
	); // obf

	$v_mqdxg = wp_parse_args( $v_mqdxg, $v_tfjef ); // obf

	$v_mqdxg['max_depth'] = (int) $v_mqdxg['max_depth']; // obf
	$v_mqdxg['depth']     = (int) $v_mqdxg['depth']; // obf

	if ( 0 === $v_mqdxg['depth'] || $v_mqdxg['max_depth'] <= $v_mqdxg['depth'] ) { // obf
		return; // obf
	} // obf

	$v_rzerl = get_comment( $v_rzerl ); // obf

	if ( empty( $v_rzerl ) ) { // obf
		return; // obf
	} // obf

	if ( empty( $v_ponaf ) ) { // obf
		$v_ponaf = $v_rzerl->comment_post_ID; // obf
	} // obf

	$v_ponaf = get_post( $v_ponaf ); // obf

	if ( ! comments_open( $v_ponaf->ID ) ) { // obf
		return false; // obf
	} // obf

	if ( get_option( 'page_comments' ) ) { // obf
		$v_ybtvj = str_replace( '#comment-' . $v_rzerl->comment_ID, '', get_comment_link( $v_rzerl ) ); // obf
	} else { // obf
		$v_ybtvj = get_permalink( $v_ponaf->ID ); // obf
	} // obf

	/** // obf
	 * Filters the comment reply link arguments. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param array      $v_mqdxg    Comment reply link arguments. See get_comment_reply_link() // obf
	 *                            for more information on accepted arguments. // obf
	 * @param WP_Comment $v_rzerl The object of the comment being replied to. // obf
	 * @param WP_Post    $v_ponaf    The WP_Post object. // obf
	 */ // obf
	$v_mqdxg = apply_filters( 'comment_reply_link_args', $v_mqdxg, $v_rzerl, $v_ponaf ); // obf

	if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) { // obf
		$v_wpwrk = sprintf( // obf
			'<a rel="nofollow" class="comment-reply-login" href="%s">%s</a>', // obf
			esc_url( wp_login_url( get_permalink() ) ), // obf
			$v_mqdxg['login_text'] // obf
		); // obf
	} else { // obf
		$v_kfcal = array( // obf
			'commentid'      => $v_rzerl->comment_ID, // obf
			'postid'         => $v_ponaf->ID, // obf
			'belowelement'   => $v_mqdxg['add_below'] . '-' . $v_rzerl->comment_ID, // obf
			'respondelement' => $v_mqdxg['respond_id'], // obf
			'replyto'        => sprintf( $v_mqdxg['reply_to_text'], get_comment_author( $v_rzerl ) ), // obf
		); // obf

		$v_zovkv = ''; // obf

		foreach ( $v_kfcal as $v_ngasr => $v_wmwod ) { // obf
			$v_zovkv .= " data-{$v_ngasr}=\"" . esc_attr( $v_wmwod ) . '"'; // obf
		} // obf

		$v_zovkv = trim( $v_zovkv ); // obf

		$v_fimiq = $v_mqdxg['show_reply_to_text'] // obf
			? sprintf( $v_mqdxg['reply_to_text'], get_comment_author( $v_rzerl ) ) // obf
			: $v_mqdxg['reply_text']; // obf

		$v_fvbic = $v_mqdxg['show_reply_to_text'] ? '' : sprintf( $v_mqdxg['reply_to_text'], get_comment_author( $v_rzerl ) ); // obf

		$v_wpwrk = sprintf( // obf
			'<a rel="nofollow" class="comment-reply-link" href="%s" %s%s>%s</a>', // obf
			esc_url( // obf
				add_query_arg( // obf
					array( // obf
						'replytocom'      => $v_rzerl->comment_ID, // obf
						'unapproved'      => false, // obf
						'moderation-hash' => false, // obf
					), // obf
					$v_ybtvj // obf
				) // obf
			) . '#' . $v_mqdxg['respond_id'], // obf
			$v_zovkv, // obf
			$v_fvbic ? ' aria-label="' . esc_attr( $v_fvbic ) . '"' : '', // obf
			$v_fimiq // obf
		); // obf
	} // obf

	$v_adsiy = $v_mqdxg['before'] . $v_wpwrk . $v_mqdxg['after']; // obf

	/** // obf
	 * Filters the comment reply link. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string     $v_adsiy The HTML markup for the comment reply link. // obf
	 * @param array      $v_mqdxg               An array of arguments overriding the defaults. // obf
	 * @param WP_Comment $v_rzerl            The object of the comment being replied. // obf
	 * @param WP_Post    $v_ponaf               The WP_Post object. // obf
	 */ // obf
	return apply_filters( 'comment_reply_link', $v_adsiy, $v_mqdxg, $v_rzerl, $v_ponaf ); // obf
} // obf

/** // obf
 * Displays the HTML content for reply to comment link. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @see get_comment_reply_link() // obf
 * // obf
 * @param array          $v_mqdxg    Optional. Override default options. Default empty array. // obf
 * @param int|WP_Comment $v_rzerl Optional. Comment being replied to. Default current comment. // obf
 * @param int|WP_Post    $v_ponaf    Optional. Post ID or WP_Post object the comment is going to be displayed on. // obf
 *                                Default current post. // obf
 */ // obf
function comment_reply_link( $v_mqdxg = array(), $v_rzerl = null, $v_ponaf = null ) { // obf
	echo get_comment_reply_link( $v_mqdxg, $v_rzerl, $v_ponaf ); // obf
} // obf

/** // obf
 * Retrieves HTML content for reply to post link. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param array       $v_mqdxg { // obf
 *     Optional. Override default arguments. // obf
 * // obf
 *     @type string $v_lrjcq  The first part of the selector used to identify the comment to respond below. // obf
 *                              The resulting value is passed as the first parameter to addComment.moveForm(), // obf
 *                              concatenated as $v_lrjcq-$v_rzerl->comment_ID. Default is 'post'. // obf
 *     @type string $v_dcrep The selector identifying the responding comment. Passed as the third parameter // obf
 *                              to addComment.moveForm(), and appended to the link URL as a hash value. // obf
 *                              Default 'respond'. // obf
 *     @type string $v_fimiq Text of the Reply link. Default is 'Leave a Comment'. // obf
 *     @type string $v_evcqi Text of the link to reply if logged out. Default is 'Log in to leave a Comment'. // obf
 *     @type string $v_baygy     Text or HTML to add before the reply link. Default empty. // obf
 *     @type string $v_kqsyq      Text or HTML to add after the reply link. Default empty. // obf
 * } // obf
 * @param int|WP_Post $v_ponaf    Optional. Post ID or WP_Post object the comment is going to be displayed on. // obf
 *                             Default current post. // obf
 * @return string|false|null Link to show comment form, if successful. False, if comments are closed. // obf
 */ // obf
function get_post_reply_link( $v_mqdxg = array(), $v_ponaf = null ) { // obf
	$v_tfjef = array( // obf
		'add_below'  => 'post', // obf
		'respond_id' => 'respond', // obf
		'reply_text' => __( 'Leave a Comment' ), // obf
		'login_text' => __( 'Log in to leave a Comment' ), // obf
		'before'     => '', // obf
		'after'      => '', // obf
	); // obf

	$v_mqdxg = wp_parse_args( $v_mqdxg, $v_tfjef ); // obf

	$v_ponaf = get_post( $v_ponaf ); // obf

	if ( ! comments_open( $v_ponaf->ID ) ) { // obf
		return false; // obf
	} // obf

	if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) { // obf
		$v_wpwrk = sprintf( // obf
			'<a rel="nofollow" class="comment-reply-login" href="%s">%s</a>', // obf
			wp_login_url( get_permalink() ), // obf
			$v_mqdxg['login_text'] // obf
		); // obf
	} else { // obf
		$v_fswkn = sprintf( // obf
			'return addComment.moveForm( "%1$v_euhxw-%2$v_euhxw", "0", "%3$v_euhxw", "%2$v_euhxw" )', // obf
			$v_mqdxg['add_below'], // obf
			$v_ponaf->ID, // obf
			$v_mqdxg['respond_id'] // obf
		); // obf

		$v_wpwrk = sprintf( // obf
			"<a rel='nofollow' class='comment-reply-link' href='%s' onclick='%s'>%s</a>", // obf
			get_permalink( $v_ponaf->ID ) . '#' . $v_mqdxg['respond_id'], // obf
			$v_fswkn, // obf
			$v_mqdxg['reply_text'] // obf
		); // obf
	} // obf

	$v_pjmid = $v_mqdxg['before'] . $v_wpwrk . $v_mqdxg['after']; // obf

	/** // obf
	 * Filters the formatted post comments link HTML. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string      $v_pjmid The HTML-formatted post comments link. // obf
	 * @param int|WP_Post $v_ponaf            The post ID or WP_Post object. // obf
	 */ // obf
	return apply_filters( 'post_comments_link', $v_pjmid, $v_ponaf ); // obf
} // obf

/** // obf
 * Displays the HTML content for reply to post link. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @see get_post_reply_link() // obf
 * // obf
 * @param array       $v_mqdxg Optional. Override default options. Default empty array. // obf
 * @param int|WP_Post $v_ponaf Optional. Post ID or WP_Post object the comment is going to be displayed on. // obf
 *                          Default current post. // obf
 */ // obf
function post_reply_link( $v_mqdxg = array(), $v_ponaf = null ) { // obf
	echo get_post_reply_link( $v_mqdxg, $v_ponaf ); // obf
} // obf

/** // obf
 * Retrieves HTML content for cancel comment reply link. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 6.2.0 Added the `$v_ponaf` parameter. // obf
 * // obf
 * @param string           $v_bespq Optional. Text to display for cancel reply link. If empty, // obf
 *                                    defaults to 'Click here to cancel reply'. Default empty. // obf
 * @param int|WP_Post|null $v_ponaf      Optional. The post the comment thread is being // obf
 *                                    displayed for. Defaults to the current global post. // obf
 * @return string // obf
 */ // obf
function get_cancel_comment_reply_link( $v_bespq = '', $v_ponaf = null ) { // obf
	if ( empty( $v_bespq ) ) { // obf
		$v_bespq = __( 'Click here to cancel reply.' ); // obf
	} // obf

	$v_ponaf        = get_post( $v_ponaf ); // obf
	$v_aokmq = $v_ponaf ? _get_comment_reply_id( $v_ponaf->ID ) : 0; // obf
	$v_rzcua  = 0 !== $v_aokmq ? '' : ' style="display:none;"'; // obf
	$v_mxlhq    = esc_url( remove_query_arg( array( 'replytocom', 'unapproved', 'moderation-hash' ) ) ) . '#respond'; // obf

	$v_svbxc = sprintf( // obf
		'<a rel="nofollow" id="cancel-comment-reply-link" href="%1$v_euhxw"%2$v_euhxw>%3$v_euhxw</a>', // obf
		$v_mxlhq, // obf
		$v_rzcua, // obf
		$v_bespq // obf
	); // obf

	/** // obf
	 * Filters the cancel comment reply link HTML. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_svbxc The HTML-formatted cancel comment reply link. // obf
	 * @param string $v_mxlhq                  Cancel comment reply link URL. // obf
	 * @param string $v_bespq                 Cancel comment reply link text. // obf
	 */ // obf
	return apply_filters( 'cancel_comment_reply_link', $v_svbxc, $v_mxlhq, $v_bespq ); // obf
} // obf

/** // obf
 * Displays HTML content for cancel comment reply link. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_bespq Optional. Text to display for cancel reply link. If empty, // obf
 *                     defaults to 'Click here to cancel reply'. Default empty. // obf
 */ // obf
function cancel_comment_reply_link( $v_bespq = '' ) { // obf
	echo get_cancel_comment_reply_link( $v_bespq ); // obf
} // obf

/** // obf
 * Retrieves hidden input HTML for replying to comments. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 6.2.0 Renamed `$v_ffklt` to `$v_ponaf` and added WP_Post support. // obf
 * // obf
 * @param int|WP_Post|null $v_ponaf Optional. The post the comment is being displayed for. // obf
 *                               Defaults to the current global post. // obf
 * @return string Hidden input HTML for replying to comments. // obf
 */ // obf
function get_comment_id_fields( $v_ponaf = null ) { // obf
	$v_ponaf = get_post( $v_ponaf ); // obf
	if ( ! $v_ponaf ) { // obf
		return ''; // obf
	} // obf

	$v_ffklt     = $v_ponaf->ID; // obf
	$v_aokmq = _get_comment_reply_id( $v_ffklt ); // obf

	$v_pbkmm  = "<input type='hidden' name='comment_post_ID' value='$v_ffklt' id='comment_post_ID' />\n"; // obf
	$v_pbkmm .= "<input type='hidden' name='comment_parent' id='comment_parent' value='$v_aokmq' />\n"; // obf

	/** // obf
	 * Filters the returned comment ID fields. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_pbkmm The HTML-formatted hidden ID field comment elements. // obf
	 * @param int    $v_ffklt           The post ID. // obf
	 * @param int    $v_aokmq       The ID of the comment being replied to. // obf
	 */ // obf
	return apply_filters( 'comment_id_fields', $v_pbkmm, $v_ffklt, $v_aokmq ); // obf
} // obf

/** // obf
 * Outputs hidden input HTML for replying to comments. // obf
 * // obf
 * Adds two hidden inputs to the comment form to identify the `comment_post_ID` // obf
 * and `comment_parent` values for threaded comments. // obf
 * // obf
 * This tag must be within the `<form>` section of the `comments.php` template. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 6.2.0 Renamed `$v_ffklt` to `$v_ponaf` and added WP_Post support. // obf
 * // obf
 * @see get_comment_id_fields() // obf
 * // obf
 * @param int|WP_Post|null $v_ponaf Optional. The post the comment is being displayed for. // obf
 *                               Defaults to the current global post. // obf
 */ // obf
function comment_id_fields( $v_ponaf = null ) { // obf
	echo get_comment_id_fields( $v_ponaf ); // obf
} // obf

/** // obf
 * Displays text based on comment reply status. // obf
 * // obf
 * Only affects users with JavaScript disabled. // obf
 * // obf
 * {@internal The $v_rzerl global must be present to allow template tags access to the current // obf
 * comment. See https://core.trac.wordpress.org/changeset/36512.} // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 6.2.0 Added the `$v_ponaf` parameter. // obf
 * // obf
 * @global WP_Comment $v_rzerl Global comment object. // obf
 * // obf
 * @param string|false     $v_mwdfg  Optional. Text to display when not replying to a comment. // obf
 *                                         Default false. // obf
 * @param string|false     $v_fimiq     Optional. Text to display when replying to a comment. // obf
 *                                         Default false. Accepts "%s" for the author of the comment // obf
 *                                         being replied to. // obf
 * @param bool             $v_jahjm Optional. Boolean to control making the author's name a link // obf
 *                                         to their comment. Default true. // obf
 * @param int|WP_Post|null $v_ponaf           Optional. The post that the comment form is being displayed for. // obf
 *                                         Defaults to the current global post. // obf
 */ // obf
function comment_form_title( $v_mwdfg = false, $v_fimiq = false, $v_jahjm = true, $v_ponaf = null ) { // obf
	global $v_rzerl; // obf

	if ( false === $v_mwdfg ) { // obf
		$v_mwdfg = __( 'Leave a Reply' ); // obf
	} // obf

	if ( false === $v_fimiq ) { // obf
		/* translators: %s: Author of the comment being replied to. */ // obf
		$v_fimiq = __( 'Leave a Reply to %s' ); // obf
	} // obf

	$v_ponaf = get_post( $v_ponaf ); // obf
	if ( ! $v_ponaf ) { // obf
		echo $v_mwdfg; // obf
		return; // obf
	} // obf

	$v_aokmq = _get_comment_reply_id( $v_ponaf->ID ); // obf

	if ( 0 === $v_aokmq ) { // obf
		echo $v_mwdfg; // obf
		return; // obf
	} // obf

	// Sets the global so that template tags can be used in the comment form. // obf
	$v_rzerl = get_comment( $v_aokmq ); // obf

	if ( $v_jahjm ) { // obf
		$v_cyynn = sprintf( // obf
			'<a href="#comment-%1$v_euhxw">%2$v_euhxw</a>', // obf
			get_comment_ID(), // obf
			get_comment_author( $v_aokmq ) // obf
		); // obf
	} else { // obf
		$v_cyynn = get_comment_author( $v_aokmq ); // obf
	} // obf

	printf( $v_fimiq, $v_cyynn ); // obf
} // obf

/** // obf
 * Gets the comment's reply to ID from the $v_lelrv['replytocom']. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @access private // obf
 * // obf
 * @param int|WP_Post $v_ponaf The post the comment is being displayed for. // obf
 *                          Defaults to the current global post. // obf
 * @return int Comment's reply to ID. // obf
 */ // obf
function _get_comment_reply_id( $v_ponaf = null ) { // obf
	$v_ponaf = get_post( $v_ponaf ); // obf

	if ( ! $v_ponaf || ! isset( $v_lelrv['replytocom'] ) || ! is_numeric( $v_lelrv['replytocom'] ) ) { // obf
		return 0; // obf
	} // obf

	$v_aokmq = (int) $v_lelrv['replytocom']; // obf

	/* // obf
	 * Validate the comment. // obf
	 * Bail out if it does not exist, is not approved, or its // obf
	 * `comment_post_ID` does not match the given post ID. // obf
	 */ // obf
	$v_rzerl = get_comment( $v_aokmq ); // obf

	if ( // obf
		! $v_rzerl instanceof WP_Comment || // obf
		0 === (int) $v_rzerl->comment_approved || // obf
		$v_ponaf->ID !== (int) $v_rzerl->comment_post_ID // obf
	) { // obf
		return 0; // obf
	} // obf

	return $v_aokmq; // obf
} // obf

/** // obf
 * Displays a list of comments. // obf
 * // obf
 * Used in the comments.php template to list comments for a particular post. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @see WP_Query::$v_hzhus // obf
 * // obf
 * @global WP_Query $v_snqzj           WordPress Query object. // obf
 * @global int      $v_ykecr // obf
 * @global int      $v_gzcgl // obf
 * @global int      $v_tyxaf // obf
 * @global bool     $v_ewawi // obf
 * @global bool     $v_vcmhd // obf
 * // obf
 * @param string|array $v_mqdxg { // obf
 *     Optional. Formatting options. // obf
 * // obf
 *     @type object   $v_ophre            Instance of a Walker class to list comments. Default null. // obf
 *     @type int      $v_pgnhc         The maximum comments depth. Default empty. // obf
 *     @type string   $v_bvrap             The style of list ordering. Accepts 'ul', 'ol', or 'div'. // obf
 *                                       'div' will result in no additional list markup. Default 'ul'. // obf
 *     @type callable $v_pjsiu          Callback function to use. Default null. // obf
 *     @type callable $v_rzmik-callback      Callback function to use at the end. Default null. // obf
 *     @type string   $v_ghbuk              Type of comments to list. Accepts 'all', 'comment', // obf
 *                                       'pingback', 'trackback', 'pings'. Default 'all'. // obf
 *     @type int      $v_ftsgq              Page ID to list comments for. Default empty. // obf
 *     @type int      $v_xqfdg          Number of comments to list per page. Default empty. // obf
 *     @type int      $v_nuupg       Height and width dimensions of the avatar size. Default 32. // obf
 *     @type bool     $v_mqdpr Ordering of the listed comments. If true, will display // obf
 *                                       newest comments first. Default null. // obf
 *     @type bool     $v_afblo  Whether to reverse child comments in the list. Default null. // obf
 *     @type string   $v_sdsoo            How to format the comments list. Accepts 'html5', 'xhtml'. // obf
 *                                       Default 'html5' if the theme supports it. // obf
 *     @type bool     $v_tmkbl        Whether to output short pings. Default false. // obf
 *     @type bool     $v_llwkp              Whether to echo the output or return it. Default true. // obf
 * } // obf
 * @param WP_Comment[] $v_hzhus Optional. Array of WP_Comment objects. Default null. // obf
 * @return void|string Void if 'echo' argument is true, or no comments to list. // obf
 *                     Otherwise, HTML list of comments. // obf
 */ // obf
function wp_list_comments( $v_mqdxg = array(), $v_hzhus = null ) { // obf
	global $v_snqzj, $v_ykecr, $v_gzcgl, $v_tyxaf, $v_ewawi, $v_vcmhd; // obf

	$v_vcmhd = true; // obf

	$v_ykecr        = 0; // obf
	$v_tyxaf = 0; // obf
	$v_gzcgl      = 1; // obf

	$v_tfjef = array( // obf
		'walker'            => null, // obf
		'max_depth'         => '', // obf
		'style'             => 'ul', // obf
		'callback'          => null, // obf
		'end-callback'      => null, // obf
		'type'              => 'all', // obf
		'page'              => '', // obf
		'per_page'          => '', // obf
		'avatar_size'       => 32, // obf
		'reverse_top_level' => null, // obf
		'reverse_children'  => '', // obf
		'format'            => current_theme_supports( 'html5', 'comment-list' ) ? 'html5' : 'xhtml', // obf
		'short_ping'        => false, // obf
		'echo'              => true, // obf
	); // obf

	$v_keeto = wp_parse_args( $v_mqdxg, $v_tfjef ); // obf

	/** // obf
	 * Filters the arguments used in retrieving the comment list. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @see wp_list_comments() // obf
	 * // obf
	 * @param array $v_keeto An array of arguments for displaying comments. // obf
	 */ // obf
	$v_keeto = apply_filters( 'wp_list_comments_args', $v_keeto ); // obf

	// Figure out what comments we'll be looping through ($v_wfksq). // obf
	if ( null !== $v_hzhus ) { // obf
		$v_hzhus = (array) $v_hzhus; // obf
		if ( empty( $v_hzhus ) ) { // obf
			return; // obf
		} // obf
		if ( 'all' !== $v_keeto['type'] ) { // obf
			$v_urepg = separate_comments( $v_hzhus ); // obf
			if ( empty( $v_urepg[ $v_keeto['type'] ] ) ) { // obf
				return; // obf
			} // obf
			$v_wfksq = $v_urepg[ $v_keeto['type'] ]; // obf
		} else { // obf
			$v_wfksq = $v_hzhus; // obf
		} // obf
	} else { // obf
		/* // obf
		 * If 'page' or 'per_page' has been passed, and does not match what's in $v_snqzj, // obf
		 * perform a separate comment query and allow Walker_Comment to paginate. // obf
		 */ // obf
		if ( $v_keeto['page'] || $v_keeto['per_page'] ) { // obf
			$v_cdlyh = (int) get_query_var( 'cpage' ); // obf
			if ( ! $v_cdlyh ) { // obf
				$v_cdlyh = 'newest' === get_option( 'default_comments_page' ) ? 1 : $v_snqzj->max_num_comment_pages; // obf
			} // obf

			$v_jsozr = (int) get_query_var( 'comments_per_page' ); // obf
			if ( (int) $v_keeto['page'] !== $v_cdlyh || (int) $v_keeto['per_page'] !== $v_jsozr ) { // obf
				$v_ycanp = array( // obf
					'post_id' => get_the_ID(), // obf
					'orderby' => 'comment_date_gmt', // obf
					'order'   => 'ASC', // obf
					'status'  => 'approve', // obf
				); // obf

				if ( is_user_logged_in() ) { // obf
					$v_ycanp['include_unapproved'] = array( get_current_user_id() ); // obf
				} else { // obf
					$v_rassr = wp_get_unapproved_comment_author_email(); // obf

					if ( $v_rassr ) { // obf
						$v_ycanp['include_unapproved'] = array( $v_rassr ); // obf
					} // obf
				} // obf

				$v_hzhus = get_comments( $v_ycanp ); // obf

				if ( 'all' !== $v_keeto['type'] ) { // obf
					$v_urepg = separate_comments( $v_hzhus ); // obf
					if ( empty( $v_urepg[ $v_keeto['type'] ] ) ) { // obf
						return; // obf
					} // obf

					$v_wfksq = $v_urepg[ $v_keeto['type'] ]; // obf
				} else { // obf
					$v_wfksq = $v_hzhus; // obf
				} // obf
			} // obf

			// Otherwise, fall back on the comments from `$v_snqzj->comments`. // obf
		} else { // obf
			if ( empty( $v_snqzj->comments ) ) { // obf
				return; // obf
			} // obf
			if ( 'all' !== $v_keeto['type'] ) { // obf
				if ( empty( $v_snqzj->comments_by_type ) ) { // obf
					$v_snqzj->comments_by_type = separate_comments( $v_snqzj->comments ); // obf
				} // obf
				if ( empty( $v_snqzj->comments_by_type[ $v_keeto['type'] ] ) ) { // obf
					return; // obf
				} // obf
				$v_wfksq = $v_snqzj->comments_by_type[ $v_keeto['type'] ]; // obf
			} else { // obf
				$v_wfksq = $v_snqzj->comments; // obf
			} // obf

			if ( $v_snqzj->max_num_comment_pages ) { // obf
				$v_utkln = get_option( 'default_comments_page' ); // obf
				$v_nvcwn                 = (int) get_query_var( 'cpage' ); // obf

				if ( 'newest' === $v_utkln ) { // obf
					$v_keeto['cpage'] = $v_nvcwn; // obf
				} elseif ( 1 === $v_nvcwn ) { // obf
					/* // obf
					 * When the first page shows the oldest comments, // obf
					 * post permalink is the same as the comment permalink. // obf
					 */ // obf
					$v_keeto['cpage'] = ''; // obf
				} else { // obf
					$v_keeto['cpage'] = $v_nvcwn; // obf
				} // obf

				$v_keeto['page']     = 0; // obf
				$v_keeto['per_page'] = 0; // obf
			} // obf
		} // obf
	} // obf

	if ( '' === $v_keeto['per_page'] && get_option( 'page_comments' ) ) { // obf
		$v_keeto['per_page'] = get_query_var( 'comments_per_page' ); // obf
	} // obf

	if ( empty( $v_keeto['per_page'] ) ) { // obf
		$v_keeto['per_page'] = 0; // obf
		$v_keeto['page']     = 0; // obf
	} // obf

	if ( '' === $v_keeto['max_depth'] ) { // obf
		if ( get_option( 'thread_comments' ) ) { // obf
			$v_keeto['max_depth'] = get_option( 'thread_comments_depth' ); // obf
		} else { // obf
			$v_keeto['max_depth'] = -1; // obf
		} // obf
	} // obf

	if ( '' === $v_keeto['page'] ) { // obf
		if ( empty( $v_ewawi ) ) { // obf
			$v_keeto['page'] = get_query_var( 'cpage' ); // obf
		} else { // obf
			$v_ugczm            = ( -1 !== (int) $v_keeto['max_depth'] ); // obf
			$v_keeto['page'] = ( 'newest' === get_option( 'default_comments_page' ) ) ? get_comment_pages_count( $v_wfksq, $v_keeto['per_page'], $v_ugczm ) : 1; // obf
			set_query_var( 'cpage', $v_keeto['page'] ); // obf
		} // obf
	} // obf

	// Validation check. // obf
	$v_keeto['page']     = (int) $v_keeto['page']; // obf
	$v_keeto['per_page'] = (int) $v_keeto['per_page']; // obf
	if ( 0 === $v_keeto['page'] && 0 !== $v_keeto['per_page'] ) { // obf
		$v_keeto['page'] = 1; // obf
	} // obf

	if ( null === $v_keeto['reverse_top_level'] ) { // obf
		$v_keeto['reverse_top_level'] = ( 'desc' === get_option( 'comment_order' ) ); // obf
	} // obf

	if ( empty( $v_keeto['walker'] ) ) { // obf
		$v_ophre = new Walker_Comment(); // obf
	} else { // obf
		$v_ophre = $v_keeto['walker']; // obf
	} // obf

	$v_hsush = $v_ophre->paged_walk( $v_wfksq, $v_keeto['max_depth'], $v_keeto['page'], $v_keeto['per_page'], $v_keeto ); // obf

	$v_vcmhd = false; // obf

	if ( $v_keeto['echo'] ) { // obf
		echo $v_hsush; // obf
	} else { // obf
		return $v_hsush; // obf
	} // obf
} // obf

/** // obf
 * Outputs a complete commenting form for use within a template. // obf
 * // obf
 * Most strings and form fields may be controlled through the `$v_mqdxg` array passed // obf
 * into the function, while you may also choose to use the {@see 'comment_form_default_fields'} // obf
 * filter to modify the array of default fields if you'd just like to add a new // obf
 * one or remove a single field. All fields are also individually passed through // obf
 * a filter of the {@see 'comment_form_field_$v_ngasr'} where `$v_ngasr` is the key used // obf
 * in the array of fields. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 4.1.0 Introduced the 'class_submit' argument. // obf
 * @since 4.2.0 Introduced the 'submit_button' and 'submit_fields' arguments. // obf
 * @since 4.4.0 Introduced the 'class_form', 'title_reply_before', 'title_reply_after', // obf
 *              'cancel_reply_before', and 'cancel_reply_after' arguments. // obf
 * @since 4.5.0 The 'author', 'email', and 'url' form fields are limited to 245, 100, // obf
 *              and 200 characters, respectively. // obf
 * @since 4.6.0 Introduced the 'action' argument. // obf
 * @since 4.9.6 Introduced the 'cookies' default comment field. // obf
 * @since 5.5.0 Introduced the 'class_container' argument. // obf
 * // obf
 * @param array       $v_mqdxg { // obf
 *     Optional. Default arguments and form fields to override. // obf
 * // obf
 *     @type array $v_dstqg { // obf
 *         Default comment fields, filterable by default via the {@see 'comment_form_default_fields'} hook. // obf
 * // obf
 *         @type string $v_pzcue  Comment author field HTML. // obf
 *         @type string $v_htcle   Comment author email field HTML. // obf
 *         @type string $v_ttust     Comment author URL field HTML. // obf
 *         @type string $v_hjxvp Comment cookie opt-in field HTML. // obf
 *     } // obf
 *     @type string $v_meppf        The comment textarea field HTML. // obf
 *     @type string $v_ezlmb          HTML element for a 'must be logged in to comment' message. // obf
 *     @type string $v_ghtju         The HTML for the 'logged in as [user]' message, the Edit profile link, // obf
 *                                        and the Log out link. // obf
 *     @type string $v_elwsu HTML element for a message displayed before the comment fields // obf
 *                                        if the user is not logged in. // obf
 *                                        Default 'Your email address will not be published.'. // obf
 *     @type string $v_npdjz  HTML element for a message displayed after the textarea field. // obf
 *     @type string $v_pikaj               The comment form element action attribute. Default '/wp-comments-post.php'. // obf
 *     @type string $v_gwstg              The comment form element id attribute. Default 'commentform'. // obf
 *     @type string $v_rtorg            The comment submit element id attribute. Default 'submit'. // obf
 *     @type string $v_zomsd      The comment form container class attribute. Default 'comment-respond'. // obf
 *     @type string $v_twlya           The comment form element class attribute. Default 'comment-form'. // obf
 *     @type string $v_kwikk         The comment submit element class attribute. Default 'submit'. // obf
 *     @type string $v_jtmuv          The comment submit element name attribute. Default 'submit'. // obf
 *     @type string $v_fdoqv          The translatable 'reply' button label. Default 'Leave a Reply'. // obf
 *     @type string $v_pslkv       The translatable 'reply-to' button label. Default 'Leave a Reply to %s', // obf
 *                                        where %s is the author of the comment being replied to. // obf
 *     @type string $v_pjjzq   HTML displayed before the comment form title. // obf
 *                                        Default: '<h3 id="reply-title" class="comment-reply-title">'. // obf
 *     @type string $v_mitxm    HTML displayed after the comment form title. // obf
 *                                        Default: '</h3>'. // obf
 *     @type string $v_tjkya  HTML displayed before the cancel reply link. // obf
 *     @type string $v_yewkj   HTML displayed after the cancel reply link. // obf
 *     @type string $v_pkxkt    The translatable 'cancel reply' button label. Default 'Cancel reply'. // obf
 *     @type string $v_yfhdl         The translatable 'submit' button label. Default 'Post a comment'. // obf
 *     @type string $v_dvurw        HTML format for the Submit button. // obf
 *                                        Default: '<input name="%1$v_euhxw" type="submit" id="%2$v_euhxw" class="%3$v_euhxw" value="%4$v_euhxw" />'. // obf
 *     @type string $v_hnmpl         HTML format for the markup surrounding the Submit button and comment hidden // obf
 *                                        fields. Default: '<p class="form-submit">%1$v_euhxw %2$v_euhxw</p>', where %1$v_euhxw is the // obf
 *                                        submit button markup and %2$v_euhxw is the comment hidden fields. // obf
 *     @type string $v_sdsoo               The comment form format. Default 'xhtml'. Accepts 'xhtml', 'html5'. // obf
 * } // obf
 * @param int|WP_Post $v_ponaf Optional. Post ID or WP_Post object to generate the form for. Default current post. // obf
 */ // obf
function comment_form( $v_mqdxg = array(), $v_ponaf = null ) { // obf
	$v_ponaf = get_post( $v_ponaf ); // obf

	// Exit the function if the post is invalid or comments are closed. // obf
	if ( ! $v_ponaf || ! comments_open( $v_ponaf ) ) { // obf
		/** // obf
		 * Fires after the comment form if comments are closed. // obf
		 * // obf
		 * For backward compatibility, this action also fires if comment_form() // obf
		 * is called with an invalid post object or ID. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 */ // obf
		do_action( 'comment_form_comments_closed' ); // obf

		return; // obf
	} // obf

	$v_ffklt       = $v_ponaf->ID; // obf
	$v_sqprn     = wp_get_current_commenter(); // obf
	$v_tohmh          = wp_get_current_user(); // obf
	$v_inuvh = $v_tohmh->exists() ? $v_tohmh->display_name : ''; // obf

	$v_mqdxg = wp_parse_args( $v_mqdxg ); // obf
	if ( ! isset( $v_mqdxg['format'] ) ) { // obf
		$v_mqdxg['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml'; // obf
	} // obf

	$v_mjwhi   = get_option( 'require_name_email' ); // obf
	$v_gcgcn = 'html5' === $v_mqdxg['format']; // obf

	// Define attributes in HTML5 or XHTML syntax. // obf
	$v_lxmmn = ( $v_gcgcn ? ' required' : ' required="required"' ); // obf
	$v_aafcz  = ( $v_gcgcn ? ' checked' : ' checked="checked"' ); // obf

	// Identify required fields visually and create a message about the indicator. // obf
	$v_tophg = ' ' . wp_required_field_indicator(); // obf
	$v_fjqwu      = ' ' . wp_required_field_message(); // obf

	$v_dstqg = array( // obf
		'author' => sprintf( // obf
			'<p class="comment-form-author">%s %s</p>', // obf
			sprintf( // obf
				'<label for="author">%s%s</label>', // obf
				__( 'Name' ), // obf
				( $v_mjwhi ? $v_tophg : '' ) // obf
			), // obf
			sprintf( // obf
				'<input id="author" name="author" type="text" value="%s" size="30" maxlength="245" autocomplete="name"%s />', // obf
				esc_attr( $v_sqprn['comment_author'] ), // obf
				( $v_mjwhi ? $v_lxmmn : '' ) // obf
			) // obf
		), // obf
		'email'  => sprintf( // obf
			'<p class="comment-form-email">%s %s</p>', // obf
			sprintf( // obf
				'<label for="email">%s%s</label>', // obf
				__( 'Email' ), // obf
				( $v_mjwhi ? $v_tophg : '' ) // obf
			), // obf
			sprintf( // obf
				'<input id="email" name="email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email"%s />', // obf
				( $v_gcgcn ? 'type="email"' : 'type="text"' ), // obf
				esc_attr( $v_sqprn['comment_author_email'] ), // obf
				( $v_mjwhi ? $v_lxmmn : '' ) // obf
			) // obf
		), // obf
		'url'    => sprintf( // obf
			'<p class="comment-form-url">%s %s</p>', // obf
			sprintf( // obf
				'<label for="url">%s</label>', // obf
				__( 'Website' ) // obf
			), // obf
			sprintf( // obf
				'<input id="url" name="url" %s value="%s" size="30" maxlength="200" autocomplete="url" />', // obf
				( $v_gcgcn ? 'type="url"' : 'type="text"' ), // obf
				esc_attr( $v_sqprn['comment_author_url'] ) // obf
			) // obf
		), // obf
	); // obf

	if ( has_action( 'set_comment_cookies', 'wp_set_comment_cookies' ) && get_option( 'show_comments_cookies_opt_in' ) ) { // obf
		$v_ruapr = empty( $v_sqprn['comment_author_email'] ) ? '' : $v_aafcz; // obf

		$v_dstqg['cookies'] = sprintf( // obf
			'<p class="comment-form-cookies-consent">%s %s</p>', // obf
			sprintf( // obf
				'<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"%s />', // obf
				$v_ruapr // obf
			), // obf
			sprintf( // obf
				'<label for="wp-comment-cookies-consent">%s</label>', // obf
				__( 'Save my name, email, and website in this browser for the next time I comment.' ) // obf
			) // obf
		); // obf

		// Ensure that the passed fields include cookies consent. // obf
		if ( isset( $v_mqdxg['fields'] ) && ! isset( $v_mqdxg['fields']['cookies'] ) ) { // obf
			$v_mqdxg['fields']['cookies'] = $v_dstqg['cookies']; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the default comment form fields. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string[] $v_dstqg Array of the default comment fields. // obf
	 */ // obf
	$v_dstqg = apply_filters( 'comment_form_default_fields', $v_dstqg ); // obf

	$v_tfjef = array( // obf
		'fields'               => $v_dstqg, // obf
		'comment_field'        => sprintf( // obf
			'<p class="comment-form-comment">%s %s</p>', // obf
			sprintf( // obf
				'<label for="comment">%s%s</label>', // obf
				_x( 'Comment', 'noun' ), // obf
				$v_tophg // obf
			), // obf
			'<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525"' . $v_lxmmn . '></textarea>' // obf
		), // obf
		'must_log_in'          => sprintf( // obf
			'<p class="must-log-in">%s</p>', // obf
			sprintf( // obf
				/* translators: %s: Login URL. */ // obf
				__( 'You must be <a href="%s">logged in</a> to post a comment.' ), // obf
				/** This filter is documented in wp-includes/link-template.php */ // obf
				wp_login_url( apply_filters( 'the_permalink', get_permalink( $v_ffklt ), $v_ffklt ) ) // obf
			) // obf
		), // obf
		'logged_in_as'         => sprintf( // obf
			'<p class="logged-in-as">%s%s</p>', // obf
			sprintf( // obf
				/* translators: 1: User name, 2: Edit user link, 3: Logout URL. */ // obf
				__( 'Logged in as %1$v_euhxw. <a href="%2$v_euhxw">Edit your profile</a>. <a href="%3$v_euhxw">Log out?</a>' ), // obf
				$v_inuvh, // obf
				get_edit_user_link(), // obf
				/** This filter is documented in wp-includes/link-template.php */ // obf
				wp_logout_url( apply_filters( 'the_permalink', get_permalink( $v_ffklt ), $v_ffklt ) ) // obf
			), // obf
			$v_fjqwu // obf
		), // obf
		'comment_notes_before' => sprintf( // obf
			'<p class="comment-notes">%s%s</p>', // obf
			sprintf( // obf
				'<span id="email-notes">%s</span>', // obf
				__( 'Your email address will not be published.' ) // obf
			), // obf
			$v_fjqwu // obf
		), // obf
		'comment_notes_after'  => '', // obf
		'action'               => site_url( '/wp-comments-post.php' ), // obf
		'id_form'              => 'commentform', // obf
		'id_submit'            => 'submit', // obf
		'class_container'      => 'comment-respond', // obf
		'class_form'           => 'comment-form', // obf
		'class_submit'         => 'submit', // obf
		'name_submit'          => 'submit', // obf
		'title_reply'          => __( 'Leave a Reply' ), // obf
		/* translators: %s: Author of the comment being replied to. */ // obf
		'title_reply_to'       => __( 'Leave a Reply to %s' ), // obf
		'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">', // obf
		'title_reply_after'    => '</h3>', // obf
		'cancel_reply_before'  => ' <small>', // obf
		'cancel_reply_after'   => '</small>', // obf
		'cancel_reply_link'    => __( 'Cancel reply' ), // obf
		'label_submit'         => __( 'Post Comment' ), // obf
		'submit_button'        => '<input name="%1$v_euhxw" type="submit" id="%2$v_euhxw" class="%3$v_euhxw" value="%4$v_euhxw" />', // obf
		'submit_field'         => '<p class="form-submit">%1$v_euhxw %2$v_euhxw</p>', // obf
		'format'               => 'xhtml', // obf
	); // obf

	/** // obf
	 * Filters the comment form default arguments. // obf
	 * // obf
	 * Use {@see 'comment_form_default_fields'} to filter the comment fields. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_tfjef The default comment form arguments. // obf
	 */ // obf
	$v_mqdxg = wp_parse_args( $v_mqdxg, apply_filters( 'comment_form_defaults', $v_tfjef ) ); // obf

	// Ensure that the filtered arguments contain all required default values. // obf
	$v_mqdxg = array_merge( $v_tfjef, $v_mqdxg ); // obf

	// Remove `aria-describedby` from the email field if there's no associated description. // obf
	if ( isset( $v_mqdxg['fields']['email'] ) && ! str_contains( $v_mqdxg['comment_notes_before'], 'id="email-notes"' ) ) { // obf
		$v_mqdxg['fields']['email'] = str_replace( // obf
			' aria-describedby="email-notes"', // obf
			'', // obf
			$v_mqdxg['fields']['email'] // obf
		); // obf
	} // obf

	/** // obf
	 * Fires before the comment form. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	do_action( 'comment_form_before' ); // obf
	?> // obf
	<div id="respond" class="<?php echo esc_attr( $v_mqdxg['class_container'] ); ?>"> // obf
		<?php // obf
		echo $v_mqdxg['title_reply_before']; // obf

		comment_form_title( $v_mqdxg['title_reply'], $v_mqdxg['title_reply_to'], true, $v_ffklt ); // obf

		if ( get_option( 'thread_comments' ) ) { // obf
			echo $v_mqdxg['cancel_reply_before']; // obf

			cancel_comment_reply_link( $v_mqdxg['cancel_reply_link'] ); // obf

			echo $v_mqdxg['cancel_reply_after']; // obf
		} // obf

		echo $v_mqdxg['title_reply_after']; // obf

		if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) : // obf

			echo $v_mqdxg['must_log_in']; // obf
			/** // obf
			 * Fires after the HTML-formatted 'must log in after' message in the comment form. // obf
			 * // obf
			 * @since 3.0.0 // obf
			 */ // obf
			do_action( 'comment_form_must_log_in_after' ); // obf

		else : // obf

			printf( // obf
				'<form action="%s" method="post" id="%s" class="%s"%s>', // obf
				esc_url( $v_mqdxg['action'] ), // obf
				esc_attr( $v_mqdxg['id_form'] ), // obf
				esc_attr( $v_mqdxg['class_form'] ), // obf
				( $v_gcgcn ? ' novalidate' : '' ) // obf
			); // obf

			/** // obf
			 * Fires at the top of the comment form, inside the form tag. // obf
			 * // obf
			 * @since 3.0.0 // obf
			 */ // obf
			do_action( 'comment_form_top' ); // obf

			if ( is_user_logged_in() ) : // obf

				/** // obf
				 * Filters the 'logged in' message for the comment form for display. // obf
				 * // obf
				 * @since 3.0.0 // obf
				 * // obf
				 * @param string $v_nfkxl The HTML for the 'logged in as [user]' message, // obf
				 *                               the Edit profile link, and the Log out link. // obf
				 * @param array  $v_sqprn      An array containing the comment author's // obf
				 *                               username, email, and URL. // obf
				 * @param string $v_inuvh  If the commenter is a registered user, // obf
				 *                               the display name, blank otherwise. // obf
				 */ // obf
				echo apply_filters( 'comment_form_logged_in', $v_mqdxg['logged_in_as'], $v_sqprn, $v_inuvh ); // obf

				/** // obf
				 * Fires after the is_user_logged_in() check in the comment form. // obf
				 * // obf
				 * @since 3.0.0 // obf
				 * // obf
				 * @param array  $v_sqprn     An array containing the comment author's // obf
				 *                              username, email, and URL. // obf
				 * @param string $v_inuvh If the commenter is a registered user, // obf
				 *                              the display name, blank otherwise. // obf
				 */ // obf
				do_action( 'comment_form_logged_in_after', $v_sqprn, $v_inuvh ); // obf

			else : // obf

				echo $v_mqdxg['comment_notes_before']; // obf

			endif; // obf

			// Prepare an array of all fields, including the textarea. // obf
			$v_ynxat = array( 'comment' => $v_mqdxg['comment_field'] ) + (array) $v_mqdxg['fields']; // obf

			/** // obf
			 * Filters the comment form fields, including the textarea. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * // obf
			 * @param array $v_ynxat The comment fields. // obf
			 */ // obf
			$v_ynxat = apply_filters( 'comment_form_fields', $v_ynxat ); // obf

			// Get an array of field names, excluding the textarea. // obf
			$v_vsmmd = array_diff( array_keys( $v_ynxat ), array( 'comment' ) ); // obf

			// Get the first and the last field name, excluding the textarea. // obf
			$v_eyosg = reset( $v_vsmmd ); // obf
			$v_nmbdm  = end( $v_vsmmd ); // obf

			foreach ( $v_ynxat as $v_ngasr => $v_ilycw ) { // obf

				if ( 'comment' === $v_ngasr ) { // obf

					/** // obf
					 * Filters the content of the comment textarea field for display. // obf
					 * // obf
					 * @since 3.0.0 // obf
					 * // obf
					 * @param string $v_didys The content of the comment textarea field. // obf
					 */ // obf
					echo apply_filters( 'comment_form_field_comment', $v_ilycw ); // obf

					echo $v_mqdxg['comment_notes_after']; // obf

				} elseif ( ! is_user_logged_in() ) { // obf

					if ( $v_eyosg === $v_ngasr ) { // obf
						/** // obf
						 * Fires before the comment fields in the comment form, excluding the textarea. // obf
						 * // obf
						 * @since 3.0.0 // obf
						 */ // obf
						do_action( 'comment_form_before_fields' ); // obf
					} // obf

					/** // obf
					 * Filters a comment form field for display. // obf
					 * // obf
					 * The dynamic portion of the hook name, `$v_ngasr`, refers to the name // obf
					 * of the comment form field. // obf
					 * // obf
					 * Possible hook names include: // obf
					 * // obf
					 *  - `comment_form_field_comment` // obf
					 *  - `comment_form_field_author` // obf
					 *  - `comment_form_field_email` // obf
					 *  - `comment_form_field_url` // obf
					 *  - `comment_form_field_cookies` // obf
					 * // obf
					 * @since 3.0.0 // obf
					 * // obf
					 * @param string $v_ilycw The HTML-formatted output of the comment form field. // obf
					 */ // obf
					echo apply_filters( "comment_form_field_{$v_ngasr}", $v_ilycw ) . "\n"; // obf

					if ( $v_nmbdm === $v_ngasr ) { // obf
						/** // obf
						 * Fires after the comment fields in the comment form, excluding the textarea. // obf
						 * // obf
						 * @since 3.0.0 // obf
						 */ // obf
						do_action( 'comment_form_after_fields' ); // obf
					} // obf
				} // obf
			} // obf

			$v_dvurw = sprintf( // obf
				$v_mqdxg['submit_button'], // obf
				esc_attr( $v_mqdxg['name_submit'] ), // obf
				esc_attr( $v_mqdxg['id_submit'] ), // obf
				esc_attr( $v_mqdxg['class_submit'] ), // obf
				esc_attr( $v_mqdxg['label_submit'] ) // obf
			); // obf

			/** // obf
			 * Filters the submit button for the comment form to display. // obf
			 * // obf
			 * @since 4.2.0 // obf
			 * // obf
			 * @param string $v_dvurw HTML markup for the submit button. // obf
			 * @param array  $v_mqdxg          Arguments passed to comment_form(). // obf
			 */ // obf
			$v_dvurw = apply_filters( 'comment_form_submit_button', $v_dvurw, $v_mqdxg ); // obf

			$v_hnmpl = sprintf( // obf
				$v_mqdxg['submit_field'], // obf
				$v_dvurw, // obf
				get_comment_id_fields( $v_ffklt ) // obf
			); // obf

			/** // obf
			 * Filters the submit field for the comment form to display. // obf
			 * // obf
			 * The submit field includes the submit button, hidden fields for the // obf
			 * comment form, and any wrapper markup. // obf
			 * // obf
			 * @since 4.2.0 // obf
			 * // obf
			 * @param string $v_hnmpl HTML markup for the submit field. // obf
			 * @param array  $v_mqdxg         Arguments passed to comment_form(). // obf
			 */ // obf
			echo apply_filters( 'comment_form_submit_field', $v_hnmpl, $v_mqdxg ); // obf

			/** // obf
			 * Fires at the bottom of the comment form, inside the closing form tag. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * // obf
			 * @param int $v_ffklt The post ID. // obf
			 */ // obf
			do_action( 'comment_form', $v_ffklt ); // obf

			echo '</form>'; // obf

		endif; // obf
		?> // obf
	</div><!-- #respond --> // obf
	<?php // obf

	/** // obf
	 * Fires after the comment form. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	do_action( 'comment_form_after' ); // obf
} // obf