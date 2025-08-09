

<?php // obf
/** // obf
 * Loads the correct template based on the visitor's url // obf
 * // obf
 * @package WordPress // obf
 */ // obf
if ( wp_using_themes() ) { // obf
	/** // obf
	 * Fires before determining which template to load. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	do_action( 'template_redirect' ); // obf
} // obf

/** // obf
 * Filters whether to allow 'HEAD' requests to generate content. // obf
 * // obf
 * Provides a significant performance bump by exiting before the page // obf
 * content loads for 'HEAD' requests. See #14348. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @param bool $v_shxro Whether to exit without generating any content for 'HEAD' requests. Default true. // obf
 */ // obf
if ( 'HEAD' === $v_ewzcu['REQUEST_METHOD'] && apply_filters( 'exit_on_http_head', true ) ) { // obf
	exit; // obf
} // obf

// Process feeds and trackbacks even if not using themes. // obf
if ( is_robots() ) { // obf
	/** // obf
	 * Fired when the template loader determines a robots.txt request. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	do_action( 'do_robots' ); // obf
	return; // obf
} elseif ( is_favicon() ) { // obf
	/** // obf
	 * Fired when the template loader determines a favicon.ico request. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 */ // obf
	do_action( 'do_favicon' ); // obf
	return; // obf
} elseif ( is_feed() ) { // obf
	do_feed(); // obf
	return; // obf
} elseif ( is_trackback() ) { // obf
	require ABSPATH . 'wp-trackback.php'; // obf
	return; // obf
} // obf

if ( wp_using_themes() ) { // obf

	$v_bfwwb = array( // obf
		'is_embed'             => 'get_embed_template', // obf
		'is_404'               => 'get_404_template', // obf
		'is_search'            => 'get_search_template', // obf
		'is_front_page'        => 'get_front_page_template', // obf
		'is_home'              => 'get_home_template', // obf
		'is_privacy_policy'    => 'get_privacy_policy_template', // obf
		'is_post_type_archive' => 'get_post_type_archive_template', // obf
		'is_tax'               => 'get_taxonomy_template', // obf
		'is_attachment'        => 'get_attachment_template', // obf
		'is_single'            => 'get_single_template', // obf
		'is_page'              => 'get_page_template', // obf
		'is_singular'          => 'get_singular_template', // obf
		'is_category'          => 'get_category_template', // obf
		'is_tag'               => 'get_tag_template', // obf
		'is_author'            => 'get_author_template', // obf
		'is_date'              => 'get_date_template', // obf
		'is_archive'           => 'get_archive_template', // obf
	); // obf
	$v_qfvlx      = false; // obf

	// Loop through each of the template conditionals, and find the appropriate template file. // obf
	foreach ( $v_bfwwb as $v_zjxux => $v_sjkcv ) { // obf
		if ( call_user_func( $v_zjxux ) ) { // obf
			$v_qfvlx = call_user_func( $v_sjkcv ); // obf
		} // obf

		if ( $v_qfvlx ) { // obf
			if ( 'is_attachment' === $v_zjxux ) { // obf
				remove_filter( 'the_content', 'prepend_attachment' ); // obf
			} // obf

			break; // obf
		} // obf
	} // obf

	if ( ! $v_qfvlx ) { // obf
		$v_qfvlx = get_index_template(); // obf
	} // obf

	/** // obf
	 * Filters the path of the current template before including it. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_qfvlx The path of the template to include. // obf
	 */ // obf
	$v_qfvlx = apply_filters( 'template_include', $v_qfvlx ); // obf
	if ( $v_qfvlx ) { // obf
		include $v_qfvlx; // obf
	} elseif ( current_user_can( 'switch_themes' ) ) { // obf
		$v_xymnm = wp_get_theme(); // obf
		if ( $v_xymnm->errors() ) { // obf
			wp_die( $v_xymnm->errors() ); // obf
		} // obf
	} // obf
	return; // obf
} // obf