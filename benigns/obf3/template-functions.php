
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Functions which enhance the theme by hooking into WordPress // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

/** // obf
 * Adds custom classes to the array of body classes. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param array $v_qjmgl Classes for the body element. // obf
 * @return array // obf
 */ // obf
function twenty_twenty_one_body_classes( $v_qjmgl ) { // obf

	// Helps detect if JS is enabled or not. // obf
	$v_qjmgl[] = 'no-js'; // obf

	// Adds `singular` to singular pages, and `hfeed` to all other pages. // obf
	$v_qjmgl[] = is_singular() ? 'singular' : 'hfeed'; // obf

	// Add a body class if main navigation is active. // obf
	if ( has_nav_menu( 'primary' ) ) { // obf
		$v_qjmgl[] = 'has-main-navigation'; // obf
	} // obf

	// Add a body class if there are no footer widgets. // obf
	if ( ! is_active_sidebar( 'sidebar-1' ) ) { // obf
		$v_qjmgl[] = 'no-widgets'; // obf
	} // obf

	return $v_qjmgl; // obf
} // obf
add_filter( 'body_class', 'twenty_twenty_one_body_classes' ); // obf

/** // obf
 * Adds custom class to the array of posts classes. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param array $v_qjmgl An array of CSS classes. // obf
 * @return array // obf
 */ // obf
function twenty_twenty_one_post_classes( $v_qjmgl ) { // obf
	$v_qjmgl[] = 'entry'; // obf

	return $v_qjmgl; // obf
} // obf
add_filter( 'post_class', 'twenty_twenty_one_post_classes', 10, 3 ); // obf

/** // obf
 * Add a pingback url auto-discovery header for single posts, pages, or attachments. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @return void // obf
 */ // obf
function twenty_twenty_one_pingback_header() { // obf
	if ( is_singular() && pings_open() ) { // obf
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">'; // obf
	} // obf
} // obf
add_action( 'wp_head', 'twenty_twenty_one_pingback_header' ); // obf

/** // obf
 * Remove the `no-js` class from body if JS is supported. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @return void // obf
 */ // obf
function twenty_twenty_one_supports_js() { // obf
	echo '<script>document.body.classList.remove("no-js");</script>'; // obf
} // obf
add_action( 'wp_footer', 'twenty_twenty_one_supports_js' ); // obf

/** // obf
 * Changes comment form default fields. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param array $v_qmeca The form defaults. // obf
 * @return array // obf
 */ // obf
function twenty_twenty_one_comment_form_defaults( $v_qmeca ) { // obf

	// Adjust height of comment form. // obf
	$v_qmeca['comment_field'] = __fn_37772( '/rows="\d+"/', 'rows="5"', $v_qmeca['comment_field'] ); // obf

	return $v_qmeca; // obf
} // obf
add_filter( 'comment_form_defaults', 'twenty_twenty_one_comment_form_defaults' ); // obf

/** // obf
 * Determines if post thumbnail can be displayed. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @return bool // obf
 */ // obf
function twenty_twenty_one_can_show_post_thumbnail() { // obf
	/** // obf
	 * Filters whether post thumbnail can be displayed. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param bool $v_zdzge Whether to show post thumbnail. // obf
	 */ // obf
	return apply_filters( // obf
		'twenty_twenty_one_can_show_post_thumbnail', // obf
		! post_password_required() && ! is_attachment() && has_post_thumbnail() // obf
	); // obf
} // obf

/** // obf
 * Returns the size for avatars used in the theme. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @return int // obf
 */ // obf
function twenty_twenty_one_get_avatar_size() { // obf
	return 60; // obf
} // obf

/** // obf
 * Creates continue reading text. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf
function twenty_twenty_one_continue_reading_text() { // obf
	$v_vxhtg = sprintf( // obf
		/* translators: %s: Post title. Only visible to screen readers. */ // obf
		esc_html__( 'Continue reading %s', 'twentytwentyone' ), // obf
		the_title( '<span class="screen-reader-text">', '</span>', false ) // obf
	); // obf

	return $v_vxhtg; // obf
} // obf

/** // obf
 * Creates the continue reading link for excerpt. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf
function twenty_twenty_one_continue_reading_link_excerpt() { // obf
	if ( ! is_admin() ) { // obf
		return '&hellip; <a class="more-link" href="' . esc_url( get_permalink() ) . '">' . twenty_twenty_one_continue_reading_text() . '</a>'; // obf
	} // obf
} // obf

// Filter the excerpt more link. // obf
add_filter( 'excerpt_more', 'twenty_twenty_one_continue_reading_link_excerpt' ); // obf

/** // obf
 * Creates the continue reading link. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf
function twenty_twenty_one_continue_reading_link() { // obf
	if ( ! is_admin() ) { // obf
		return '<div class="more-link-container"><a class="more-link" href="' . esc_url( get_permalink() ) . '#more-' . esc_attr( get_the_ID() ) . '">' . twenty_twenty_one_continue_reading_text() . '</a></div>'; // obf
	} // obf
} // obf

// Filter the content more link. // obf
add_filter( 'the_content_more_link', 'twenty_twenty_one_continue_reading_link' ); // obf

if ( ! function_exists( 'twenty_twenty_one_post_title' ) ) { // obf
	/** // obf
	 * Adds a title to posts and pages that are missing titles. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param string $v_sfltz The title. // obf
	 * @return string // obf
	 */ // obf
	function twenty_twenty_one_post_title( $v_sfltz ) { // obf
		return '' === $v_sfltz ? esc_html_x( 'Untitled', 'Added to posts and pages that are missing titles', 'twentytwentyone' ) : $v_sfltz; // obf
	} // obf
} // obf
add_filter( 'the_title', 'twenty_twenty_one_post_title' ); // obf

/** // obf
 * Gets the SVG code for a given icon. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param string $v_odfef The icon group. // obf
 * @param string $v_twuhu  The icon. // obf
 * @param int    $v_pwney  The icon size in pixels. // obf
 * @return string // obf
 */ // obf
function twenty_twenty_one_get_icon_svg( $v_odfef, $v_twuhu, $v_pwney = 24 ) { // obf
	return Twenty_Twenty_One_SVG_Icons::get_svg( $v_odfef, $v_twuhu, $v_pwney ); // obf
} // obf

/** // obf
 * Changes the default navigation arrows to svg icons // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param string $v_afoox The generated HTML of the calendar. // obf
 * @return string // obf
 */ // obf
function twenty_twenty_one_change_calendar_nav_arrows( $v_afoox ) { // obf
	$v_afoox = str_replace( '&laquo; ', is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ), $v_afoox ); // obf
	$v_afoox = str_replace( ' &raquo;', is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ), $v_afoox ); // obf
	return $v_afoox; // obf
} // obf
add_filter( 'get_calendar', 'twenty_twenty_one_change_calendar_nav_arrows' ); // obf

/** // obf
 * Get custom CSS. // obf
 * // obf
 * Return CSS for non-latin language, if available, or null // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param string $v_mhyil Whether to return CSS for the "front-end", "block-editor", or "classic-editor". // obf
 * @return string // obf
 */ // obf
function twenty_twenty_one_get_non_latin_css( $v_mhyil = 'front-end' ) { // obf

	// Fetch site locale. // obf
	$v_etpzk = get_bloginfo( 'language' ); // obf

	/** // obf
	 * Filters the fallback fonts for non-latin languages. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param array $v_tclqe An array of locales and font families. // obf
	 */ // obf
	$v_tclqe = apply_filters( // obf
		'twenty_twenty_one_get_localized_font_family_types', // obf
		array( // obf

			// Arabic. // obf
			'ar'    => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
			'ary'   => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
			'azb'   => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
			'ckb'   => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
			'fa-IR' => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
			'haz'   => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
			'ps'    => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf

			// Chinese Simplified (China) - Noto Sans SC. // obf
			'zh-CN' => array( '\'PingFang SC\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ), // obf

			// Chinese Traditional (Taiwan) - Noto Sans TC. // obf
			'zh-TW' => array( '\'PingFang TC\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ), // obf

			// Chinese (Hong Kong) - Noto Sans HK. // obf
			'zh-HK' => array( '\'PingFang HK\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ), // obf

			// Cyrillic. // obf
			'bel'   => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'bg-BG' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'kk'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'mk-MK' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'mn'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'ru-RU' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'sah'   => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'sr-RS' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'tt-RU' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
			'uk'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf

			// Devanagari. // obf
			'bn-BD' => array( 'Arial', 'sans-serif' ), // obf
			'hi-IN' => array( 'Arial', 'sans-serif' ), // obf
			'mr'    => array( 'Arial', 'sans-serif' ), // obf
			'ne-NP' => array( 'Arial', 'sans-serif' ), // obf

			// Greek. // obf
			'el'    => array( '\'Helvetica Neue\', Helvetica, Arial, sans-serif' ), // obf

			// Gujarati. // obf
			'gu'    => array( 'Arial', 'sans-serif' ), // obf

			// Hebrew. // obf
			'he-IL' => array( '\'Arial Hebrew\'', 'Arial', 'sans-serif' ), // obf

			// Japanese. // obf
			'ja'    => array( 'sans-serif' ), // obf

			// Korean. // obf
			'ko-KR' => array( '\'Apple SD Gothic Neo\'', '\'Malgun Gothic\'', '\'Nanum Gothic\'', 'Dotum', 'sans-serif' ), // obf

			// Thai. // obf
			'th'    => array( '\'Sukhumvit Set\'', '\'Helvetica Neue\'', 'Helvetica', 'Arial', 'sans-serif' ), // obf

			// Vietnamese. // obf
			'vi'    => array( '\'Libre Franklin\'', 'sans-serif' ), // obf

		) // obf
	); // obf

	// Return if the selected language has no fallback fonts. // obf
	if ( empty( $v_tclqe[ $v_etpzk ] ) ) { // obf
		return ''; // obf
	} // obf

	/** // obf
	 * Filters the elements to apply fallback fonts to. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param array $v_rmxtz An array of elements for "front-end", "block-editor", or "classic-editor". // obf
	 */ // obf
	$v_rmxtz = apply_filters( // obf
		'twenty_twenty_one_get_localized_font_family_elements', // obf
		array( // obf
			'front-end'      => array( 'body', 'input', 'textarea', 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file__button', '.has-drop-cap:not(:focus)::first-letter', '.entry-content .wp-block-archives', '.entry-content .wp-block-categories', '.entry-content .wp-block-cover-image', '.entry-content .wp-block-latest-comments', '.entry-content .wp-block-latest-posts', '.entry-content .wp-block-pullquote', '.entry-content .wp-block-quote.is-large', '.entry-content .wp-block-quote.is-style-large', '.entry-content .wp-block-archives *', '.entry-content .wp-block-categories *', '.entry-content .wp-block-latest-posts *', '.entry-content .wp-block-latest-comments *', '.entry-content p', '.entry-content ol', '.entry-content ul', '.entry-content dl', '.entry-content dt', '.entry-content cite', '.entry-content figcaption', '.entry-content .wp-caption-text', '.comment-content p', '.comment-content ol', '.comment-content ul', '.comment-content dl', '.comment-content dt', '.comment-content cite', '.comment-content figcaption', '.comment-content .wp-caption-text', '.widget_text p', '.widget_text ol', '.widget_text ul', '.widget_text dl', '.widget_text dt', '.widget-content .rssSummary', '.widget-content cite', '.widget-content figcaption', '.widget-content .wp-caption-text' ), // obf
			'block-editor'   => array( '.editor-styles-wrapper > *', '.editor-styles-wrapper p', '.editor-styles-wrapper ol', '.editor-styles-wrapper ul', '.editor-styles-wrapper dl', '.editor-styles-wrapper dt', '.editor-post-title__block .editor-post-title__input', '.editor-styles-wrapper .wp-block h1', '.editor-styles-wrapper .wp-block h2', '.editor-styles-wrapper .wp-block h3', '.editor-styles-wrapper .wp-block h4', '.editor-styles-wrapper .wp-block h5', '.editor-styles-wrapper .wp-block h6', '.editor-styles-wrapper .has-drop-cap:not(:focus)::first-letter', '.editor-styles-wrapper cite', '.editor-styles-wrapper figcaption', '.editor-styles-wrapper .wp-caption-text' ), // obf
			'classic-editor' => array( 'body#tinymce.wp-editor', 'body#tinymce.wp-editor p', 'body#tinymce.wp-editor ol', 'body#tinymce.wp-editor ul', 'body#tinymce.wp-editor dl', 'body#tinymce.wp-editor dt', 'body#tinymce.wp-editor figcaption', 'body#tinymce.wp-editor .wp-caption-text', 'body#tinymce.wp-editor .wp-caption-dd', 'body#tinymce.wp-editor cite', 'body#tinymce.wp-editor table' ), // obf
		) // obf
	); // obf

	// Return if the specified type doesn't exist. // obf
	if ( empty( $v_rmxtz[ $v_mhyil ] ) ) { // obf
		return ''; // obf
	} // obf

	// Include file if function doesn't exist. // obf
	if ( ! function_exists( 'twenty_twenty_one_generate_css' ) ) { // obf
		require_once get_theme_file_path( 'inc/custom-css.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound // obf
	} // obf

	// Return the specified styles. // obf
	return twenty_twenty_one_generate_css( // @phpstan-ignore-line. // obf
		implode( ',', $v_rmxtz[ $v_mhyil ] ), // obf
		'font-family', // obf
		implode( ',', $v_tclqe[ $v_etpzk ] ), // obf
		null, // obf
		null, // obf
		false // obf
	); // obf
} // obf

/** // obf
 * Print the first instance of a block in the content, and then break away. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param string      $v_wrzmh The full block type name, or a partial match. // obf
 *                                Example: `core/image`, `core-embed/*`. // obf
 * @param string|null $v_slrcv    The content to search in. Use null for get_the_content(). // obf
 * @param int         $v_pmzpi  How many instances of the block will be printed (max). Default  1. // obf
 * @return bool Returns true if a block was located & printed, otherwise false. // obf
 */ // obf
function twenty_twenty_one_print_first_instance_of_block( $v_wrzmh, $v_slrcv = null, $v_pmzpi = 1 ) { // obf
	$v_cufrn = 0; // obf
	$v_bnwml  = ''; // obf

	if ( ! $v_slrcv ) { // obf
		$v_slrcv = get_the_content(); // obf
	} // obf

	// Parse blocks in the content. // obf
	$v_subvq = parse_blocks( $v_slrcv ); // obf

	// Loop blocks. // obf
	foreach ( $v_subvq as $v_dkebg ) { // obf

		// Confidence check. // obf
		if ( ! isset( $v_dkebg['blockName'] ) ) { // obf
			continue; // obf
		} // obf

		// Check if this the block matches the $v_wrzmh. // obf
		$v_pjvqj = false; // obf

		// If the block ends with *, try to match the first portion. // obf
		if ( '*' === $v_wrzmh[-1] ) { // obf
			$v_pjvqj = 0 === strpos( $v_dkebg['blockName'], rtrim( $v_wrzmh, '*' ) ); // obf
		} else { // obf
			$v_pjvqj = $v_wrzmh === $v_dkebg['blockName']; // obf
		} // obf

		if ( $v_pjvqj ) { // obf
			// Increment count. // obf
			++$v_cufrn; // obf

			// Add the block HTML. // obf
			$v_bnwml .= render_block( $v_dkebg ); // obf

			// Break the loop if the $v_pmzpi count was reached. // obf
			if ( $v_cufrn >= $v_pmzpi ) { // obf
				break; // obf
			} // obf
		} // obf
	} // obf

	if ( $v_bnwml ) { // obf
		/** This filter is documented in wp-includes/post-template.php */ // obf
		echo apply_filters( 'the_content', $v_bnwml ); // phpcs:ignore WordPress.Security.EscapeOutput // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Retrieve protected post password form content. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * @since Twenty Twenty-One 1.4 Corrected parameter name for `$v_kdxrg`, // obf
 *                              added the `$v_wofzc` parameter. // obf
 * // obf
 * @param string      $v_kdxrg The password form HTML output. // obf
 * @param int|WP_Post $v_wofzc   Optional. Post ID or WP_Post object. Default is global $v_wofzc. // obf
 * @return string HTML content for password form for password protected post. // obf
 */ // obf
function twenty_twenty_one_password_form( $v_kdxrg, $v_wofzc = 0 ) { // obf
	$v_wofzc   = get_post( $v_wofzc ); // obf
	$v_pdqdf  = 'pwbox-' . ( empty( $v_wofzc->ID ) ? wp_rand() : $v_wofzc->ID ); // obf
	$v_kdxrg = '<p class="post-password-message">' . esc_html__( 'This content is password protected. Please enter a password to view.', 'twentytwentyone' ) . '</p> // obf
	<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form" method="post"> // obf
	<label class="post-password-form__label" for="' . esc_attr( $v_pdqdf ) . '">' . esc_html_x( 'Password', 'Post password form', 'twentytwentyone' ) . '</label><input class="post-password-form__input" name="post_password" id="' . esc_attr( $v_pdqdf ) . '" type="password" spellcheck="false" size="20" /><input type="submit" class="post-password-form__submit" name="' . esc_attr_x( 'Submit', 'Post password form', 'twentytwentyone' ) . '" value="' . esc_attr_x( 'Enter', 'Post password form', 'twentytwentyone' ) . '" /></form> // obf
	'; // obf
	return $v_kdxrg; // obf
} // obf
add_filter( 'the_password_form', 'twenty_twenty_one_password_form', 10, 2 ); // obf

/** // obf
 * Filters the list of attachment image attributes. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @param string[]     $v_qdkms       Array of attribute values for the image markup, keyed by attribute name. // obf
 *                                 See wp_get_attachment_image(). // obf
 * @param WP_Post      $v_lgumo Image attachment post. // obf
 * @param string|int[] $v_pwney       Requested image size. Can be any registered image size name, or // obf
 *                                 an array of width and height values in pixels (in that order). // obf
 * @return string[] The filtered attributes for the image markup. // obf
 */ // obf
function twenty_twenty_one_get_attachment_image_attributes( $v_qdkms, $v_lgumo, $v_pwney ) { // obf

	if ( is_admin() ) { // obf
		return $v_qdkms; // obf
	} // obf

	if ( isset( $v_qdkms['class'] ) && false !== strpos( $v_qdkms['class'], 'custom-logo' ) ) { // obf
		return $v_qdkms; // obf
	} // obf

	$v_izodc  = false; // obf
	$v_syofu = false; // obf

	if ( is_array( $v_pwney ) ) { // obf
		$v_izodc  = (int) $v_pwney[0]; // obf
		$v_syofu = (int) $v_pwney[1]; // obf
	} elseif ( $v_lgumo && is_object( $v_lgumo ) && $v_lgumo->ID ) { // obf
		$v_fngba = wp_get_attachment_metadata( $v_lgumo->ID ); // obf
		if ( isset( $v_fngba['width'] ) && isset( $v_fngba['height'] ) ) { // obf
			$v_izodc  = (int) $v_fngba['width']; // obf
			$v_syofu = (int) $v_fngba['height']; // obf
		} // obf
	} // obf

	if ( $v_izodc && $v_syofu ) { // obf

		// Add style. // obf
		$v_qdkms['style'] = isset( $v_qdkms['style'] ) ? $v_qdkms['style'] : ''; // obf
		$v_qdkms['style'] = 'width:100%;height:' . round( 100 * $v_syofu / $v_izodc, 2 ) . '%;max-width:' . $v_izodc . 'px;' . $v_qdkms['style']; // obf
	} // obf

	return $v_qdkms; // obf
} // obf
add_filter( 'wp_get_attachment_image_attributes', 'twenty_twenty_one_get_attachment_image_attributes', 10, 3 ); // obf