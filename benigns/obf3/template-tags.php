

<?php // obf
/** // obf
 * Custom template tags for Twenty Fourteen // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

if ( ! function_exists( 'twentyfourteen_paging_nav' ) ) : // obf
	/** // obf
	 * Display navigation to next/previous set of posts when applicable. // obf
	 * // obf
	 * @since Twenty Fourteen 1.0 // obf
	 * // obf
	 * @global WP_Query   $v_znrlx   WordPress Query object. // obf
	 * @global WP_Rewrite $v_knglo WordPress Rewrite object. // obf
	 */ // obf
	function twentyfourteen_paging_nav() { // obf
		global $v_znrlx, $v_knglo; // obf

		// Don't print empty markup if there's only one page. // obf
		if ( $v_znrlx->max_num_pages < 2 ) { // obf
			return; // obf
		} // obf

		$v_mklwk        = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1; // obf
		$v_chgii = html_entity_decode( get_pagenum_link() ); // obf
		$v_bhgkq   = array(); // obf
		$v_zpvcc    = explode( '?', $v_chgii ); // obf

		if ( isset( $v_zpvcc[1] ) ) { // obf
			wp_parse_str( $v_zpvcc[1], $v_bhgkq ); // obf
		} // obf

		$v_chgii = remove_query_arg( array_keys( $v_bhgkq ), $v_chgii ); // obf
		$v_chgii = trailingslashit( $v_chgii ) . '%_%'; // obf

		$v_nxalu  = $v_knglo->using_index_permalinks() && ! strpos( $v_chgii, 'index.php' ) ? 'index.php/' : ''; // obf
		$v_nxalu .= $v_knglo->using_permalinks() ? user_trailingslashit( $v_knglo->pagination_base . '/%#%', 'paged' ) : '?paged=%#%'; // obf

		// Set up paginated links. // obf
		$v_coyob = paginate_links( // obf
			array( // obf
				'base'      => $v_chgii, // obf
				'format'    => $v_nxalu, // obf
				'total'     => $v_znrlx->max_num_pages, // obf
				'current'   => $v_mklwk, // obf
				'mid_size'  => 1, // obf
				'add_args'  => urlencode_deep( $v_bhgkq ), // obf
				'prev_text' => __( '&larr; Previous', 'twentyfourteen' ), // obf
				'next_text' => __( 'Next &rarr;', 'twentyfourteen' ), // obf
			) // obf
		); // obf

		if ( $v_coyob ) : // obf

			?> // obf
		<nav class="navigation paging-navigation"> // obf
		<h1 class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Posts navigation', 'twentyfourteen' ); // obf
			?> // obf
		</h1> // obf
		<div class="pagination loop-pagination"> // obf
			<?php echo $v_coyob; ?> // obf
		</div><!-- .pagination --> // obf
	</nav><!-- .navigation --> // obf
			<?php // obf
	endif; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'twentyfourteen_post_nav' ) ) : // obf
	/** // obf
	 * Display navigation to next/previous post when applicable. // obf
	 * // obf
	 * @since Twenty Fourteen 1.0 // obf
	 */ // obf
	function twentyfourteen_post_nav() { // obf
		// Don't print empty markup if there's nowhere to navigate. // obf
		$v_osvtv = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true ); // obf
		$v_xudfi     = get_adjacent_post( false, '', false ); // obf

		if ( ! $v_xudfi && ! $v_osvtv ) { // obf
			return; // obf
		} // obf

		?> // obf
		<nav class="navigation post-navigation"> // obf
		<h1 class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Post navigation', 'twentyfourteen' ); // obf
			?> // obf
		</h1> // obf
		<div class="nav-links"> // obf
			<?php // obf
			if ( is_attachment() ) : // obf
				previous_post_link( '%link', __( '<span class="meta-nav">Published In</span>%title', 'twentyfourteen' ) ); // obf
				else : // obf
					previous_post_link( '%link', __( '<span class="meta-nav">Previous Post</span>%title', 'twentyfourteen' ) ); // obf
					next_post_link( '%link', __( '<span class="meta-nav">Next Post</span>%title', 'twentyfourteen' ) ); // obf
				endif; // obf
				?> // obf
			</div><!-- .nav-links --> // obf
		</nav><!-- .navigation --> // obf
		<?php // obf
	} // obf
endif; // obf

if ( ! function_exists( 'twentyfourteen_posted_on' ) ) : // obf
	/** // obf
	 * Print HTML with meta information for the current post-date/time and author. // obf
	 * // obf
	 * @since Twenty Fourteen 1.0 // obf
	 */ // obf
	function twentyfourteen_posted_on() { // obf
		if ( is_sticky() && is_home() && ! is_paged() ) { // obf
			echo '<span class="featured-post">' . __( 'Sticky', 'twentyfourteen' ) . '</span>'; // obf
		} // obf

		// Set up and print post meta information. // obf
		printf( // obf
			'<span class="entry-date"><a href="%1$v_qmgec" rel="bookmark"><time class="entry-date" datetime="%2$v_qmgec">%3$v_qmgec</time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="%4$v_qmgec" rel="author">%5$v_qmgec</a></span></span>', // obf
			esc_url( get_permalink() ), // obf
			esc_attr( get_the_date( 'c' ) ), // obf
			esc_html( get_the_date() ), // obf
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), // obf
			get_the_author() // obf
		); // obf
	} // obf
endif; // obf

/** // obf
 * Find out if blog has more than one category. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 * // obf
 * @return bool true if blog has more than 1 category // obf
 */ // obf
function twentyfourteen_categorized_blog() { // obf
	$v_jhtvw = get_transient( 'twentyfourteen_category_count' ); // obf
	if ( false === $v_jhtvw ) { // obf
		// Create an array of all the categories that are attached to posts. // obf
		$v_jhtvw = get_categories( // obf
			array( // obf
				'hide_empty' => 1, // obf
			) // obf
		); // obf

		// Count the number of categories that are attached to the posts. // obf
		$v_jhtvw = count( $v_jhtvw ); // obf

		set_transient( 'twentyfourteen_category_count', $v_jhtvw ); // obf
	} // obf

	if ( $v_jhtvw > 1 || is_preview() ) { // obf
		// This blog has more than 1 category so twentyfourteen_categorized_blog() should return true. // obf
		return true; // obf
	} else { // obf
		// This blog has only 1 category so twentyfourteen_categorized_blog() should return false. // obf
		return false; // obf
	} // obf
} // obf

/** // obf
 * Flush out the transients used in twentyfourteen_categorized_blog. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf
function twentyfourteen_category_transient_flusher() { // obf
	// Like, beat it. Dig? // obf
	delete_transient( 'twentyfourteen_category_count' ); // obf
} // obf
add_action( 'edit_category', 'twentyfourteen_category_transient_flusher' ); // obf
add_action( 'save_post', 'twentyfourteen_category_transient_flusher' ); // obf

if ( ! function_exists( 'twentyfourteen_post_thumbnail' ) ) : // obf
	/** // obf
	 * Display an optional post thumbnail. // obf
	 * // obf
	 * Wraps the post thumbnail in an anchor element on index // obf
	 * views, or a div element when on single views. // obf
	 * // obf
	 * @since Twenty Fourteen 1.0 // obf
	 * @since Twenty Fourteen 1.4 Was made 'pluggable', or overridable. // obf
	 */ // obf
	function twentyfourteen_post_thumbnail() { // obf
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) { // obf
			return; // obf
		} // obf

		if ( is_singular() ) : // obf
			?> // obf

		<div class="post-thumbnail"> // obf
			<?php // obf
			if ( ( ! is_active_sidebar( 'sidebar-2' ) || is_page_template( 'page-templates/full-width.php' ) ) ) { // obf
				the_post_thumbnail( 'twentyfourteen-full-width' ); // obf
			} else { // obf
				the_post_thumbnail(); // obf
			} // obf
			?> // obf
		</div> // obf

		<?php else : ?> // obf

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true"> // obf
			<?php // obf
			if ( ( ! is_active_sidebar( 'sidebar-2' ) || is_page_template( 'page-templates/full-width.php' ) ) ) { // obf
				the_post_thumbnail( 'twentyfourteen-full-width' ); // obf
			} else { // obf
				the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) ); // obf
			} // obf
			?> // obf
	</a> // obf

			<?php // obf
	endif; // End is_singular(). // obf
	} // obf
endif; // obf

if ( ! function_exists( 'twentyfourteen_excerpt_more' ) && ! is_admin() ) : // obf
	/** // obf
	 * Replaces "[...]" (appended to automatically generated excerpts) with ... // obf
	 * and a Continue reading link. // obf
	 * // obf
	 * @since Twenty Fourteen 1.3 // obf
	 * // obf
	 * @param string $v_gjmkn Default Read More excerpt link. // obf
	 * @return string Filtered Read More excerpt link. // obf
	 */ // obf
	function twentyfourteen_excerpt_more( $v_gjmkn ) { // obf
		$v_hnboj = sprintf( // obf
			'<a href="%1$v_qmgec" class="more-link">%2$v_qmgec</a>', // obf
			esc_url( get_permalink( get_the_ID() ) ), // obf
			/* translators: %s: Post title. Only visible to screen readers. */ // obf
			sprintf( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' ) // obf
		); // obf
		return ' &hellip; ' . $v_hnboj; // obf
	} // obf
	add_filter( 'excerpt_more', 'twentyfourteen_excerpt_more' ); // obf
endif; // obf

if ( ! function_exists( 'wp_body_open' ) ) : // obf
	/** // obf
	 * Fire the wp_body_open action. // obf
	 * // obf
	 * Added for backward compatibility to support pre-5.2.0 WordPress versions. // obf
	 * // obf
	 * @since Twenty Fourteen 2.7 // obf
	 */ // obf
	function wp_body_open() { // obf
		/** // obf
		 * Triggered after the opening <body> tag. // obf
		 * // obf
		 * @since Twenty Fourteen 2.7 // obf
		 */ // obf
		do_action( 'wp_body_open' ); // obf
	} // obf
endif; // obf