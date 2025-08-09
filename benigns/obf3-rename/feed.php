

<?php // obf
/** // obf
 * WordPress Feed API // obf
 * // obf
 * Many of the functions used in here belong in The Loop, or The Loop for the // obf
 * Feeds. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Feed // obf
 * @since 2.1.0 // obf
 */ // obf

/** // obf
 * Retrieves RSS container for the bloginfo function. // obf
 * // obf
 * You can retrieve anything that you can using the get_bloginfo() function. // obf
 * Everything will be stripped of tags and characters converted, when the values // obf
 * are retrieved for use in the feeds. // obf
 * // obf
 * @since 1.5.1 // obf
 * // obf
 * @see get_bloginfo() For the list of possible values to display. // obf
 * // obf
 * @param string $v_bkyrc See get_bloginfo() for possible values. // obf
 * @return string // obf
 */ // obf
function get_bloginfo_rss( $v_bkyrc = '' ) { // obf
	$v_babtp = strip_tags( get_bloginfo( $v_bkyrc ) ); // obf
	/** // obf
	 * Filters the bloginfo for use in RSS feeds. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @see convert_chars() // obf
	 * @see get_bloginfo() // obf
	 * // obf
	 * @param string $v_babtp Converted string value of the blog information. // obf
	 * @param string $v_bkyrc The type of blog information to retrieve. // obf
	 */ // obf
	return apply_filters( 'get_bloginfo_rss', convert_chars( $v_babtp ), $v_bkyrc ); // obf
} // obf

/** // obf
 * Displays RSS container for the bloginfo function. // obf
 * // obf
 * You can retrieve anything that you can using the get_bloginfo() function. // obf
 * Everything will be stripped of tags and characters converted, when the values // obf
 * are retrieved for use in the feeds. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @see get_bloginfo() For the list of possible values to display. // obf
 * // obf
 * @param string $v_bkyrc See get_bloginfo() for possible values. // obf
 */ // obf
function bloginfo_rss( $v_bkyrc = '' ) { // obf
	/** // obf
	 * Filters the bloginfo for display in RSS feeds. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @see get_bloginfo() // obf
	 * // obf
	 * @param string $v_nxkkj RSS container for the blog information. // obf
	 * @param string $v_bkyrc          The type of blog information to retrieve. // obf
	 */ // obf
	echo apply_filters( 'bloginfo_rss', get_bloginfo_rss( $v_bkyrc ), $v_bkyrc ); // obf
} // obf

/** // obf
 * Retrieves the default feed. // obf
 * // obf
 * The default feed is 'rss2', unless a plugin changes it through the // obf
 * {@see 'default_feed'} filter. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @return string Default feed, or for example 'rss2', 'atom', etc. // obf
 */ // obf
function get_default_feed() { // obf
	/** // obf
	 * Filters the default feed type. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_zdmdy Type of default feed. Possible values include 'rss2', 'atom'. // obf
	 *                          Default 'rss2'. // obf
	 */ // obf
	$v_ddkja = apply_filters( 'default_feed', 'rss2' ); // obf

	return ( 'rss' === $v_ddkja ) ? 'rss2' : $v_ddkja; // obf
} // obf

/** // obf
 * Retrieves the blog title for the feed title. // obf
 * // obf
 * @since 2.2.0 // obf
 * @since 4.4.0 The optional `$v_mhiik` parameter was deprecated and renamed to `$v_ozjal`. // obf
 * // obf
 * @param string $v_ozjal Unused. // obf
 * @return string The document title. // obf
 */ // obf
function get_wp_title_rss( $v_ozjal = '&#8211;' ) { // obf
	if ( '&#8211;' !== $v_ozjal ) { // obf
		/* translators: %s: 'document_title_separator' filter name. */ // obf
		_deprecated_argument( __FUNCTION__, '4.4.0', sprintf( __( 'Use the %s filter instead.' ), '<code>document_title_separator</code>' ) ); // obf
	} // obf

	/** // obf
	 * Filters the blog title for use as the feed title. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * @since 4.4.0 The `$v_mhiik` parameter was deprecated and renamed to `$v_ozjal`. // obf
	 * // obf
	 * @param string $v_bjten      The current blog title. // obf
	 * @param string $v_ozjal Unused. // obf
	 */ // obf
	return apply_filters( 'get_wp_title_rss', wp_get_document_title(), $v_ozjal ); // obf
} // obf

/** // obf
 * Displays the blog title for display of the feed title. // obf
 * // obf
 * @since 2.2.0 // obf
 * @since 4.4.0 The optional `$v_mhiik` parameter was deprecated and renamed to `$v_ozjal`. // obf
 * // obf
 * @param string $v_ozjal Unused. // obf
 */ // obf
function wp_title_rss( $v_ozjal = '&#8211;' ) { // obf
	if ( '&#8211;' !== $v_ozjal ) { // obf
		/* translators: %s: 'document_title_separator' filter name. */ // obf
		_deprecated_argument( __FUNCTION__, '4.4.0', sprintf( __( 'Use the %s filter instead.' ), '<code>document_title_separator</code>' ) ); // obf
	} // obf

	/** // obf
	 * Filters the blog title for display of the feed title. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * @since 4.4.0 The `$v_mhiik` parameter was deprecated and renamed to `$v_ozjal`. // obf
	 * // obf
	 * @see get_wp_title_rss() // obf
	 * // obf
	 * @param string $v_mahtf The current blog title. // obf
	 * @param string $v_ozjal   Unused. // obf
	 */ // obf
	echo apply_filters( 'wp_title_rss', get_wp_title_rss(), $v_ozjal ); // obf
} // obf

/** // obf
 * Retrieves the current post title for the feed. // obf
 * // obf
 * @since 2.0.0 // obf
 * @since 6.6.0 Added the `$v_qsssf` parameter. // obf
 * // obf
 * @param int|WP_Post $v_qsssf Optional. Post ID or WP_Post object. Default is global $v_qsssf. // obf
 * @return string Current post title. // obf
 */ // obf
function get_the_title_rss( $v_qsssf = 0 ) { // obf
	$v_bjten = get_the_title( $v_qsssf ); // obf

	/** // obf
	 * Filters the post title for use in a feed. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param string $v_bjten The current post title. // obf
	 */ // obf
	return apply_filters( 'the_title_rss', $v_bjten ); // obf
} // obf

/** // obf
 * Displays the post title in the feed. // obf
 * // obf
 * @since 0.71 // obf
 */ // obf
function the_title_rss() { // obf
	echo get_the_title_rss(); // obf
} // obf

/** // obf
 * Retrieves the post content for feeds. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @see get_the_content() // obf
 * // obf
 * @param string $v_zdmdy The type of feed. rss2 | atom | rss | rdf // obf
 * @return string The filtered content. // obf
 */ // obf
function get_the_content_feed( $v_zdmdy = null ) { // obf
	if ( ! $v_zdmdy ) { // obf
		$v_zdmdy = get_default_feed(); // obf
	} // obf

	/** This filter is documented in wp-includes/post-template.php */ // obf
	$v_rellz = apply_filters( 'the_content', get_the_content() ); // obf
	$v_rellz = str_replace( ']]>', ']]&gt;', $v_rellz ); // obf

	/** // obf
	 * Filters the post content for use in feeds. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string $v_rellz   The current post content. // obf
	 * @param string $v_zdmdy Type of feed. Possible values include 'rss2', 'atom'. // obf
	 *                          Default 'rss2'. // obf
	 */ // obf
	return apply_filters( 'the_content_feed', $v_rellz, $v_zdmdy ); // obf
} // obf

/** // obf
 * Displays the post content for feeds. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param string $v_zdmdy The type of feed. rss2 | atom | rss | rdf // obf
 */ // obf
function the_content_feed( $v_zdmdy = null ) { // obf
	echo get_the_content_feed( $v_zdmdy ); // obf
} // obf

/** // obf
 * Displays the post excerpt for the feed. // obf
 * // obf
 * @since 0.71 // obf
 */ // obf
function the_excerpt_rss() { // obf
	$v_ewwva = get_the_excerpt(); // obf
	/** // obf
	 * Filters the post excerpt for a feed. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param string $v_ewwva The current post excerpt. // obf
	 */ // obf
	echo apply_filters( 'the_excerpt_rss', $v_ewwva ); // obf
} // obf

/** // obf
 * Displays the permalink to the post for use in feeds. // obf
 * // obf
 * @since 2.3.0 // obf
 */ // obf
function the_permalink_rss() { // obf
	/** // obf
	 * Filters the permalink to the post for use in feeds. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_vqfin The current post permalink. // obf
	 */ // obf
	echo esc_url( apply_filters( 'the_permalink_rss', get_permalink() ) ); // obf
} // obf

/** // obf
 * Outputs the link to the comments for the current post in an XML safe way. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function comments_link_feed() { // obf
	/** // obf
	 * Filters the comments permalink for the current post. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param string $v_qmhdh The current comment permalink with // obf
	 *                                  '#comments' appended. // obf
	 */ // obf
	echo esc_url( apply_filters( 'comments_link_feed', get_comments_link() ) ); // obf
} // obf

/** // obf
 * Displays the feed GUID for the current comment. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param int|WP_Comment $v_ollzm Optional comment object or ID. Defaults to global comment object. // obf
 */ // obf
function comment_guid( $v_ollzm = null ) { // obf
	echo esc_url( get_comment_guid( $v_ollzm ) ); // obf
} // obf

/** // obf
 * Retrieves the feed GUID for the current comment. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param int|WP_Comment $v_ollzm Optional comment object or ID. Defaults to global comment object. // obf
 * @return string|false GUID for comment on success, false on failure. // obf
 */ // obf
function get_comment_guid( $v_ollzm = null ) { // obf
	$v_qvpnh = get_comment( $v_ollzm ); // obf

	if ( ! is_object( $v_qvpnh ) ) { // obf
		return false; // obf
	} // obf

	return get_the_guid( $v_qvpnh->comment_post_ID ) . '#comment-' . $v_qvpnh->comment_ID; // obf
} // obf

/** // obf
 * Displays the link to the comments. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 4.4.0 Introduced the `$v_qvpnh` argument. // obf
 * // obf
 * @param int|WP_Comment $v_qvpnh Optional. Comment object or ID. Defaults to global comment object. // obf
 */ // obf
function comment_link( $v_qvpnh = null ) { // obf
	/** // obf
	 * Filters the current comment's permalink. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @see get_comment_link() // obf
	 * // obf
	 * @param string $v_qmhdh The current comment permalink. // obf
	 */ // obf
	echo esc_url( apply_filters( 'comment_link', get_comment_link( $v_qvpnh ) ) ); // obf
} // obf

/** // obf
 * Retrieves the current comment author for use in the feeds. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @return string Comment Author. // obf
 */ // obf
function get_comment_author_rss() { // obf
	/** // obf
	 * Filters the current comment author for use in a feed. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @see get_comment_author() // obf
	 * // obf
	 * @param string $v_ghpry The current comment author. // obf
	 */ // obf
	return apply_filters( 'comment_author_rss', get_comment_author() ); // obf
} // obf

/** // obf
 * Displays the current comment author in the feed. // obf
 * // obf
 * @since 1.0.0 // obf
 */ // obf
function comment_author_rss() { // obf
	echo get_comment_author_rss(); // obf
} // obf

/** // obf
 * Displays the current comment content for use in the feeds. // obf
 * // obf
 * @since 1.0.0 // obf
 */ // obf
function comment_text_rss() { // obf
	$v_lbaaf = get_comment_text(); // obf
	/** // obf
	 * Filters the current comment content for use in a feed. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_lbaaf The content of the current comment. // obf
	 */ // obf
	$v_lbaaf = apply_filters( 'comment_text_rss', $v_lbaaf ); // obf
	echo $v_lbaaf; // obf
} // obf

/** // obf
 * Retrieves all of the post categories, formatted for use in feeds. // obf
 * // obf
 * All of the categories for the current post in the feed loop, will be // obf
 * retrieved and have feed markup added, so that they can easily be added to the // obf
 * RSS2, Atom, or RSS1 and RSS0.91 RDF feeds. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param string $v_tyyja Optional, default is the type returned by get_default_feed(). // obf
 * @return string All of the post categories for displaying in the feed. // obf
 */ // obf
function get_the_category_rss( $v_tyyja = null ) { // obf
	if ( empty( $v_tyyja ) ) { // obf
		$v_tyyja = get_default_feed(); // obf
	} // obf
	$v_exvgv = get_the_category(); // obf
	$v_tzhlx       = get_the_tags(); // obf
	$v_ekcor   = ''; // obf
	$v_njpwd  = array(); // obf

	$v_pmjox = 'rss'; // obf
	if ( 'atom' === $v_tyyja ) { // obf
		$v_pmjox = 'raw'; // obf
	} // obf

	if ( ! empty( $v_exvgv ) ) { // obf
		foreach ( (array) $v_exvgv as $v_yevws ) { // obf
			$v_njpwd[] = sanitize_term_field( 'name', $v_yevws->name, $v_yevws->term_id, 'category', $v_pmjox ); // obf
		} // obf
	} // obf

	if ( ! empty( $v_tzhlx ) ) { // obf
		foreach ( (array) $v_tzhlx as $v_kxlef ) { // obf
			$v_njpwd[] = sanitize_term_field( 'name', $v_kxlef->name, $v_kxlef->term_id, 'post_tag', $v_pmjox ); // obf
		} // obf
	} // obf

	$v_njpwd = array_unique( $v_njpwd ); // obf

	foreach ( $v_njpwd as $v_gxtzu ) { // obf
		if ( 'rdf' === $v_tyyja ) { // obf
			$v_ekcor .= "\t\t<dc:subject><![CDATA[$v_gxtzu]]></dc:subject>\n"; // obf
		} elseif ( 'atom' === $v_tyyja ) { // obf
			$v_ekcor .= sprintf( '<category scheme="%1$v_ynhjt" term="%2$v_ynhjt" />', esc_attr( get_bloginfo_rss( 'url' ) ), esc_attr( $v_gxtzu ) ); // obf
		} else { // obf
			$v_ekcor .= "\t\t<category><![CDATA[" . html_entity_decode( $v_gxtzu, ENT_COMPAT, get_option( 'blog_charset' ) ) . "]]></category>\n"; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters all of the post categories for display in a feed. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param string $v_ekcor All of the RSS post categories. // obf
	 * @param string $v_tyyja     Type of feed. Possible values include 'rss2', 'atom'. // obf
	 *                         Default 'rss2'. // obf
	 */ // obf
	return apply_filters( 'the_category_rss', $v_ekcor, $v_tyyja ); // obf
} // obf

/** // obf
 * Displays the post categories in the feed. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @see get_the_category_rss() For better explanation. // obf
 * // obf
 * @param string $v_tyyja Optional, default is the type returned by get_default_feed(). // obf
 */ // obf
function the_category_rss( $v_tyyja = null ) { // obf
	echo get_the_category_rss( $v_tyyja ); // obf
} // obf

/** // obf
 * Displays the HTML type based on the blog setting. // obf
 * // obf
 * The two possible values are either 'xhtml' or 'html'. // obf
 * // obf
 * @since 2.2.0 // obf
 */ // obf
function html_type_rss() { // obf
	$v_tyyja = get_bloginfo( 'html_type' ); // obf
	if ( str_contains( $v_tyyja, 'xhtml' ) ) { // obf
		$v_tyyja = 'xhtml'; // obf
	} else { // obf
		$v_tyyja = 'html'; // obf
	} // obf
	echo $v_tyyja; // obf
} // obf

/** // obf
 * Displays the rss enclosure for the current post. // obf
 * // obf
 * Uses the global $v_qsssf to check whether the post requires a password and if // obf
 * the user has the password for the post. If not then it will return before // obf
 * displaying. // obf
 * // obf
 * Also uses the function get_post_custom() to get the post's 'enclosure' // obf
 * metadata field and parses the value to display the enclosure(s). The // obf
 * enclosure(s) consist of enclosure HTML tag(s) with a URI and other // obf
 * attributes. // obf
 * // obf
 * @since 1.5.0 // obf
 */ // obf
function rss_enclosure() { // obf
	if ( post_password_required() ) { // obf
		return; // obf
	} // obf

	foreach ( (array) get_post_custom() as $v_wwwyu => $v_fcoof ) { // obf
		if ( 'enclosure' === $v_wwwyu ) { // obf
			foreach ( (array) $v_fcoof as $v_hdapy ) { // obf
				$v_qoxws = explode( "\n", $v_hdapy ); // obf

				if ( count( $v_qoxws ) < 3 ) { // obf
					continue; // obf
				} // obf

				// Only get the first element, e.g. 'audio/mpeg' from 'audio/mpeg mpga mp2 mp3'. // obf
				$v_lziob    = preg_split( '/[ \t]/', trim( $v_qoxws[2] ) ); // obf
				$v_tyyja = $v_lziob[0]; // obf

				/** // obf
				 * Filters the RSS enclosure HTML link tag for the current post. // obf
				 * // obf
				 * @since 2.2.0 // obf
				 * // obf
				 * @param string $v_ogyqj The HTML link tag with a URI and other attributes. // obf
				 */ // obf
				echo apply_filters( 'rss_enclosure', '<enclosure url="' . esc_url( trim( $v_qoxws[0] ) ) . '" length="' . absint( trim( $v_qoxws[1] ) ) . '" type="' . esc_attr( $v_tyyja ) . '" />' . "\n" ); // obf
			} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Displays the atom enclosure for the current post. // obf
 * // obf
 * Uses the global $v_qsssf to check whether the post requires a password and if // obf
 * the user has the password for the post. If not then it will return before // obf
 * displaying. // obf
 * // obf
 * Also uses the function get_post_custom() to get the post's 'enclosure' // obf
 * metadata field and parses the value to display the enclosure(s). The // obf
 * enclosure(s) consist of link HTML tag(s) with a URI and other attributes. // obf
 * // obf
 * @since 2.2.0 // obf
 */ // obf
function atom_enclosure() { // obf
	if ( post_password_required() ) { // obf
		return; // obf
	} // obf

	foreach ( (array) get_post_custom() as $v_wwwyu => $v_fcoof ) { // obf
		if ( 'enclosure' === $v_wwwyu ) { // obf
			foreach ( (array) $v_fcoof as $v_hdapy ) { // obf
				$v_qoxws = explode( "\n", $v_hdapy ); // obf

				$v_fkxev    = ''; // obf
				$v_tyyja   = ''; // obf
				$v_bcofl = 0; // obf

				$v_qkxmj = get_allowed_mime_types(); // obf

				// Parse URL. // obf
				if ( isset( $v_qoxws[0] ) && is_string( $v_qoxws[0] ) ) { // obf
					$v_fkxev = trim( $v_qoxws[0] ); // obf
				} // obf

				// Parse length and type. // obf
				for ( $v_jkqbi = 1; $v_jkqbi <= 2; $v_jkqbi++ ) { // obf
					if ( isset( $v_qoxws[ $v_jkqbi ] ) ) { // obf
						if ( is_numeric( $v_qoxws[ $v_jkqbi ] ) ) { // obf
							$v_bcofl = trim( $v_qoxws[ $v_jkqbi ] ); // obf
						} elseif ( in_array( $v_qoxws[ $v_jkqbi ], $v_qkxmj, true ) ) { // obf
							$v_tyyja = trim( $v_qoxws[ $v_jkqbi ] ); // obf
						} // obf
					} // obf
				} // obf

				$v_ogyqj = sprintf( // obf
					"<link href=\"%s\" rel=\"enclosure\" length=\"%d\" type=\"%s\" />\n", // obf
					esc_url( $v_fkxev ), // obf
					esc_attr( $v_bcofl ), // obf
					esc_attr( $v_tyyja ) // obf
				); // obf

				/** // obf
				 * Filters the atom enclosure HTML link tag for the current post. // obf
				 * // obf
				 * @since 2.2.0 // obf
				 * // obf
				 * @param string $v_ogyqj The HTML link tag with a URI and other attributes. // obf
				 */ // obf
				echo apply_filters( 'atom_enclosure', $v_ogyqj ); // obf
			} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Determines the type of a string of data with the data formatted. // obf
 * // obf
 * Tell whether the type is text, HTML, or XHTML, per RFC 4287 section 3.1. // obf
 * // obf
 * In the case of WordPress, text is defined as containing no markup, // obf
 * XHTML is defined as "well formed", and HTML as tag soup (i.e., the rest). // obf
 * // obf
 * Container div tags are added to XHTML values, per section 3.1.1.3. // obf
 * // obf
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#rfc.section.3.1 // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_afpbk Input string. // obf
 * @return array array(type, value) // obf
 */ // obf
function prep_atom_text_construct( $v_afpbk ) { // obf
	if ( ! str_contains( $v_afpbk, '<' ) && ! str_contains( $v_afpbk, '&' ) ) { // obf
		return array( 'text', $v_afpbk ); // obf
	} // obf

	if ( ! function_exists( 'xml_parser_create' ) ) { // obf
		wp_trigger_error( '', __( "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ) ); // obf

		return array( 'html', "<![CDATA[$v_afpbk]]>" ); // obf
	} // obf

	$v_tzxpb = xml_parser_create(); // obf
	xml_parse( $v_tzxpb, '<div>' . $v_afpbk . '</div>', true ); // obf
	$v_wwpvh = xml_get_error_code( $v_tzxpb ); // obf
	xml_parser_free( $v_tzxpb ); // obf
	unset( $v_tzxpb ); // obf

	if ( ! $v_wwpvh ) { // obf
		if ( ! str_contains( $v_afpbk, '<' ) ) { // obf
			return array( 'text', $v_afpbk ); // obf
		} else { // obf
			$v_afpbk = "<div xmlns='http://www.w3.org/1999/xhtml'>$v_afpbk</div>"; // obf
			return array( 'xhtml', $v_afpbk ); // obf
		} // obf
	} // obf

	if ( ! str_contains( $v_afpbk, ']]>' ) ) { // obf
		return array( 'html', "<![CDATA[$v_afpbk]]>" ); // obf
	} else { // obf
		return array( 'html', htmlspecialchars( $v_afpbk ) ); // obf
	} // obf
} // obf

/** // obf
 * Displays Site Icon in atom feeds. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see get_site_icon_url() // obf
 */ // obf
function atom_site_icon() { // obf
	$v_fkxev = get_site_icon_url( 32 ); // obf
	if ( $v_fkxev ) { // obf
		echo '<icon>' . convert_chars( $v_fkxev ) . "</icon>\n"; // obf
	} // obf
} // obf

/** // obf
 * Displays Site Icon in RSS2. // obf
 * // obf
 * @since 4.3.0 // obf
 */ // obf
function rss2_site_icon() { // obf
	$v_lrcyx = get_wp_title_rss(); // obf
	if ( empty( $v_lrcyx ) ) { // obf
		$v_lrcyx = get_bloginfo_rss( 'name' ); // obf
	} // obf

	$v_fkxev = get_site_icon_url( 32 ); // obf
	if ( $v_fkxev ) { // obf
		echo ' // obf
<image> // obf
	<url>' . convert_chars( $v_fkxev ) . '</url> // obf
	<title>' . $v_lrcyx . '</title> // obf
	<link>' . get_bloginfo_rss( 'url' ) . '</link> // obf
	<width>32</width> // obf
	<height>32</height> // obf
</image> ' . "\n"; // obf
	} // obf
} // obf

/** // obf
 * Returns the link for the currently displayed feed. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @return string Correct link for the atom:self element. // obf
 */ // obf
function get_self_link() { // obf
	$v_tzmqt = parse_url( home_url() ); // obf

	$v_mjwtc = $v_tzmqt['host']; // obf
	if ( isset( $v_tzmqt['port'] ) ) { // obf
		$v_mjwtc .= ':' . $v_tzmqt['port']; // obf
	} // obf

	return set_url_scheme( 'http://' . $v_mjwtc . wp_unslash( $v_pehdh['REQUEST_URI'] ) ); // obf
} // obf

/** // obf
 * Displays the link for the currently displayed feed in a XSS safe way. // obf
 * // obf
 * Generate a correct link for the atom:self element. // obf
 * // obf
 * @since 2.5.0 // obf
 */ // obf
function self_link() { // obf
	/** // obf
	 * Filters the current feed URL. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @see set_url_scheme() // obf
	 * @see wp_unslash() // obf
	 * // obf
	 * @param string $v_frnas The link for the feed with set URL scheme. // obf
	 */ // obf
	echo esc_url( apply_filters( 'self_link', get_self_link() ) ); // obf
} // obf

/** // obf
 * Gets the UTC time of the most recently modified post from WP_Query. // obf
 * // obf
 * If viewing a comment feed, the time of the most recently modified // obf
 * comment will be returned. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @global WP_Query $v_dnuja WordPress Query object. // obf
 * // obf
 * @param string $v_xeold Date format string to return the time in. // obf
 * @return string|false The time in requested format, or false on failure. // obf
 */ // obf
function get_feed_build_date( $v_xeold ) { // obf
	global $v_dnuja; // obf

	$v_omeko          = false; // obf
	$v_yxysc = false; // obf
	$v_ufdxa               = new DateTimeZone( 'UTC' ); // obf

	if ( ! empty( $v_dnuja ) && $v_dnuja->have_posts() ) { // obf
		// Extract the post modified times from the posts. // obf
		$v_aelos = wp_list_pluck( $v_dnuja->posts, 'post_modified_gmt' ); // obf

		// If this is a comment feed, check those objects too. // obf
		if ( $v_dnuja->is_comment_feed() && $v_dnuja->comment_count ) { // obf
			// Extract the comment modified times from the comments. // obf
			$v_muziz = wp_list_pluck( $v_dnuja->comments, 'comment_date_gmt' ); // obf

			// Add the comment times to the post times for comparison. // obf
			$v_aelos = array_merge( $v_aelos, $v_muziz ); // obf
		} // obf

		// Determine the maximum modified time. // obf
		$v_omeko = date_create_immutable_from_format( 'Y-m-d H:i:s', max( $v_aelos ), $v_ufdxa ); // obf
	} // obf

	if ( false === $v_omeko ) { // obf
		// Fall back to last time any post was modified or published. // obf
		$v_omeko = date_create_immutable_from_format( 'Y-m-d H:i:s', get_lastpostmodified( 'GMT' ), $v_ufdxa ); // obf
	} // obf

	if ( false !== $v_omeko ) { // obf
		$v_yxysc = $v_omeko->format( $v_xeold ); // obf
	} // obf

	/** // obf
	 * Filters the date the last post or comment in the query was modified. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string|false $v_yxysc Date the last post or comment was modified in the query, in UTC. // obf
	 *                                        False on failure. // obf
	 * @param string       $v_xeold            The date format requested in get_feed_build_date(). // obf
	 */ // obf
	return apply_filters( 'get_feed_build_date', $v_yxysc, $v_xeold ); // obf
} // obf

/** // obf
 * Returns the content type for specified feed type. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_tyyja Type of feed. Possible values include 'rss', rss2', 'atom', and 'rdf'. // obf
 * @return string Content type for specified feed type. // obf
 */ // obf
function feed_content_type( $v_tyyja = '' ) { // obf
	if ( empty( $v_tyyja ) ) { // obf
		$v_tyyja = get_default_feed(); // obf
	} // obf

	$v_npusg = array( // obf
		'rss'      => 'application/rss+xml', // obf
		'rss2'     => 'application/rss+xml', // obf
		'rss-http' => 'text/xml', // obf
		'atom'     => 'application/atom+xml', // obf
		'rdf'      => 'application/rdf+xml', // obf
	); // obf

	$v_gamlr = ( ! empty( $v_npusg[ $v_tyyja ] ) ) ? $v_npusg[ $v_tyyja ] : 'application/octet-stream'; // obf

	/** // obf
	 * Filters the content type for a specific feed type. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_gamlr Content type indicating the type of data that a feed contains. // obf
	 * @param string $v_tyyja         Type of feed. Possible values include 'rss', rss2', 'atom', and 'rdf'. // obf
	 */ // obf
	return apply_filters( 'feed_content_type', $v_gamlr, $v_tyyja ); // obf
} // obf

/** // obf
 * Builds SimplePie object based on RSS or Atom feed from URL. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string|string[] $v_fkxev URL of feed to retrieve. If an array of URLs, the feeds are merged // obf
 *                             using SimplePie's multifeed feature. // obf
 *                             See also {@link http://simplepie.org/wiki/faq/typical_multifeed_gotchas} // obf
 * @return SimplePie\SimplePie|WP_Error SimplePie object on success or WP_Error object on failure. // obf
 */ // obf
function fetch_feed( $v_fkxev ) { // obf
	if ( ! class_exists( 'SimplePie\SimplePie', false ) ) { // obf
		require_once ABSPATH . WPINC . '/class-simplepie.php'; // obf
	} // obf

	require_once ABSPATH . WPINC . '/class-wp-feed-cache-transient.php'; // obf
	require_once ABSPATH . WPINC . '/class-wp-simplepie-file.php'; // obf
	require_once ABSPATH . WPINC . '/class-wp-simplepie-sanitize-kses.php'; // obf

	$v_inxvt = new SimplePie\SimplePie(); // obf

	$v_inxvt->set_sanitize_class( 'WP_SimplePie_Sanitize_KSES' ); // obf
	/* // obf
	 * We must manually overwrite $v_inxvt->sanitize because SimplePie's constructor // obf
	 * sets it before we have a chance to set the sanitization class. // obf
	 */ // obf
	$v_inxvt->sanitize = new WP_SimplePie_Sanitize_KSES(); // obf

	// Register the cache handler using the recommended method for SimplePie 1.3 or later. // obf
	if ( method_exists( 'SimplePie_Cache', 'register' ) ) { // obf
		SimplePie_Cache::register( 'wp_transient', 'WP_Feed_Cache_Transient' ); // obf
		$v_inxvt->set_cache_location( 'wp_transient' ); // obf
	} else { // obf
		// Back-compat for SimplePie 1.2.x. // obf
		require_once ABSPATH . WPINC . '/class-wp-feed-cache.php'; // obf
		$v_inxvt->set_cache_class( 'WP_Feed_Cache' ); // obf
	} // obf

	$v_inxvt->set_file_class( 'WP_SimplePie_File' ); // obf

	$v_inxvt->set_feed_url( $v_fkxev ); // obf
	/** This filter is documented in wp-includes/class-wp-feed-cache-transient.php */ // obf
	$v_inxvt->set_cache_duration( apply_filters( 'wp_feed_cache_transient_lifetime', 12 * HOUR_IN_SECONDS, $v_fkxev ) ); // obf

	/** // obf
	 * Fires just before processing the SimplePie feed object. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param SimplePie\SimplePie $v_inxvt SimplePie feed object (passed by reference). // obf
	 * @param string|string[]     $v_fkxev  URL of feed or array of URLs of feeds to retrieve. // obf
	 */ // obf
	do_action_ref_array( 'wp_feed_options', array( &$v_inxvt, $v_fkxev ) ); // obf

	$v_inxvt->init(); // obf
	$v_inxvt->set_output_encoding( get_bloginfo( 'charset' ) ); // obf

	if ( $v_inxvt->error() ) { // obf
		return new WP_Error( 'simplepie-error', $v_inxvt->error() ); // obf
	} // obf

	return $v_inxvt; // obf
} // obf