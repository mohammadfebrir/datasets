

<?php // obf
/** // obf
 * Server-side rendering of the `core/latest-posts` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * The excerpt length set by the Latest Posts core block // obf
 * set at render time and used by the block itself. // obf
 * // obf
 * @var int // obf
 */ // obf
global $v_ynnzl; // obf
$v_ynnzl = 0; // obf

/** // obf
 * Callback for the excerpt_length filter used by // obf
 * the Latest Posts block at render time. // obf
 * // obf
 * @since 5.4.0 // obf
 * // obf
 * @return int Returns the global $v_ynnzl variable // obf
 *             to allow the excerpt_length filter respect the Latest Block setting. // obf
 */ // obf
function block_core_latest_posts_get_excerpt_length() { // obf
	global $v_ynnzl; // obf
	return $v_ynnzl; // obf
} // obf

/** // obf
 * Renders the `core/latest-posts` block on server. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param array $v_wwzuj The block attributes. // obf
 * // obf
 * @return string Returns the post content with latest posts added. // obf
 */ // obf
function render_block_core_latest_posts( $v_wwzuj ) { // obf
	global $v_qmxuc, $v_ynnzl; // obf

	$v_oczey = array( // obf
		'posts_per_page'      => $v_wwzuj['postsToShow'], // obf
		'post_status'         => 'publish', // obf
		'order'               => $v_wwzuj['order'], // obf
		'orderby'             => $v_wwzuj['orderBy'], // obf
		'ignore_sticky_posts' => true, // obf
		'no_found_rows'       => true, // obf
	); // obf

	$v_ynnzl = $v_wwzuj['excerptLength']; // obf
	add_filter( 'excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20 ); // obf

	if ( ! empty( $v_wwzuj['categories'] ) ) { // obf
		$v_oczey['category__in'] = array_column( $v_wwzuj['categories'], 'id' ); // obf
	} // obf
	if ( isset( $v_wwzuj['selectedAuthor'] ) ) { // obf
		$v_oczey['author'] = $v_wwzuj['selectedAuthor']; // obf
	} // obf

	$v_fxjvd        = new WP_Query(); // obf
	$v_vxrhl = $v_fxjvd->query( $v_oczey ); // obf

	if ( isset( $v_wwzuj['displayFeaturedImage'] ) && $v_wwzuj['displayFeaturedImage'] ) { // obf
		update_post_thumbnail_cache( $v_fxjvd ); // obf
	} // obf

	$v_jvfxl = ''; // obf

	foreach ( $v_vxrhl as $v_qmxuc ) { // obf
		$v_nrhyr = esc_url( get_permalink( $v_qmxuc ) ); // obf
		$v_hbgsy     = get_the_title( $v_qmxuc ); // obf

		if ( ! $v_hbgsy ) { // obf
			$v_hbgsy = __( '(no title)' ); // obf
		} // obf

		$v_jvfxl .= '<li>'; // obf

		if ( $v_wwzuj['displayFeaturedImage'] && has_post_thumbnail( $v_qmxuc ) ) { // obf
			$v_vkazr = ''; // obf
			if ( isset( $v_wwzuj['featuredImageSizeWidth'] ) ) { // obf
				$v_vkazr .= sprintf( 'max-width:%spx;', $v_wwzuj['featuredImageSizeWidth'] ); // obf
			} // obf
			if ( isset( $v_wwzuj['featuredImageSizeHeight'] ) ) { // obf
				$v_vkazr .= sprintf( 'max-height:%spx;', $v_wwzuj['featuredImageSizeHeight'] ); // obf
			} // obf

			$v_xdiky = 'wp-block-latest-posts__featured-image'; // obf
			if ( isset( $v_wwzuj['featuredImageAlign'] ) ) { // obf
				$v_xdiky .= ' align' . $v_wwzuj['featuredImageAlign']; // obf
			} // obf

			$v_xwugv = get_the_post_thumbnail( // obf
				$v_qmxuc, // obf
				$v_wwzuj['featuredImageSizeSlug'], // obf
				array( // obf
					'style' => esc_attr( $v_vkazr ), // obf
				) // obf
			); // obf
			if ( $v_wwzuj['addLinkToFeaturedImage'] ) { // obf
				$v_xwugv = sprintf( // obf
					'<a href="%1$v_aaltr" aria-label="%2$v_aaltr">%3$v_aaltr</a>', // obf
					esc_url( $v_nrhyr ), // obf
					esc_attr( $v_hbgsy ), // obf
					$v_xwugv // obf
				); // obf
			} // obf
			$v_jvfxl .= sprintf( // obf
				'<div class="%1$v_aaltr">%2$v_aaltr</div>', // obf
				esc_attr( $v_xdiky ), // obf
				$v_xwugv // obf
			); // obf
		} // obf

		$v_jvfxl .= sprintf( // obf
			'<a class="wp-block-latest-posts__post-title" href="%1$v_aaltr">%2$v_aaltr</a>', // obf
			esc_url( $v_nrhyr ), // obf
			$v_hbgsy // obf
		); // obf

		if ( isset( $v_wwzuj['displayAuthor'] ) && $v_wwzuj['displayAuthor'] ) { // obf
			$v_ugajq = get_the_author_meta( 'display_name', $v_qmxuc->post_author ); // obf

			/* translators: byline. %s: author. */ // obf
			$v_anxvq = sprintf( __( 'by %s' ), $v_ugajq ); // obf

			if ( ! empty( $v_ugajq ) ) { // obf
				$v_jvfxl .= sprintf( // obf
					'<div class="wp-block-latest-posts__post-author">%1$v_aaltr</div>', // obf
					$v_anxvq // obf
				); // obf
			} // obf
		} // obf

		if ( isset( $v_wwzuj['displayPostDate'] ) && $v_wwzuj['displayPostDate'] ) { // obf
			$v_jvfxl .= sprintf( // obf
				'<time datetime="%1$v_aaltr" class="wp-block-latest-posts__post-date">%2$v_aaltr</time>', // obf
				esc_attr( get_the_date( 'c', $v_qmxuc ) ), // obf
				get_the_date( '', $v_qmxuc ) // obf
			); // obf
		} // obf

		if ( isset( $v_wwzuj['displayPostContent'] ) && $v_wwzuj['displayPostContent'] // obf
			&& isset( $v_wwzuj['displayPostContentRadio'] ) && 'excerpt' === $v_wwzuj['displayPostContentRadio'] ) { // obf

			$v_iywyg = get_the_excerpt( $v_qmxuc ); // obf

			/* // obf
			 * Adds a "Read more" link with screen reader text. // obf
			 * [&hellip;] is the default excerpt ending from wp_trim_excerpt() in Core. // obf
			 */ // obf
			if ( str_ends_with( $v_iywyg, ' [&hellip;]' ) ) { // obf
				/** This filter is documented in wp-includes/formatting.php */ // obf
				$v_bofqo = (int) apply_filters( 'excerpt_length', $v_ynnzl ); // obf
				if ( $v_bofqo <= $v_ynnzl ) { // obf
					$v_iywyg  = substr( $v_iywyg, 0, -11 ); // obf
					$v_iywyg .= sprintf( // obf
						/* translators: 1: A URL to a post, 2: Hidden accessibility text: Post title */ // obf
						__( '… <a class="wp-block-latest-posts__read-more" href="%1$v_aaltr" rel="noopener noreferrer">Read more<span class="screen-reader-text">: %2$v_aaltr</span></a>' ), // obf
						esc_url( $v_nrhyr ), // obf
						esc_html( $v_hbgsy ) // obf
					); // obf
				} // obf
			} // obf

			if ( post_password_required( $v_qmxuc ) ) { // obf
				$v_iywyg = __( 'This content is password protected.' ); // obf
			} // obf

			$v_jvfxl .= sprintf( // obf
				'<div class="wp-block-latest-posts__post-excerpt">%1$v_aaltr</div>', // obf
				$v_iywyg // obf
			); // obf
		} // obf

		if ( isset( $v_wwzuj['displayPostContent'] ) && $v_wwzuj['displayPostContent'] // obf
			&& isset( $v_wwzuj['displayPostContentRadio'] ) && 'full_post' === $v_wwzuj['displayPostContentRadio'] ) { // obf

			$v_shtlf = html_entity_decode( $v_qmxuc->post_content, ENT_QUOTES, get_option( 'blog_charset' ) ); // obf

			if ( post_password_required( $v_qmxuc ) ) { // obf
				$v_shtlf = __( 'This content is password protected.' ); // obf
			} // obf

			$v_jvfxl .= sprintf( // obf
				'<div class="wp-block-latest-posts__post-full-content">%1$v_aaltr</div>', // obf
				wp_kses_post( $v_shtlf ) // obf
			); // obf
		} // obf

		$v_jvfxl .= "</li>\n"; // obf
	} // obf

	remove_filter( 'excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20 ); // obf

	$v_aeolr = array( 'wp-block-latest-posts__list' ); // obf
	if ( isset( $v_wwzuj['postLayout'] ) && 'grid' === $v_wwzuj['postLayout'] ) { // obf
		$v_aeolr[] = 'is-grid'; // obf
	} // obf
	if ( isset( $v_wwzuj['columns'] ) && 'grid' === $v_wwzuj['postLayout'] ) { // obf
		$v_aeolr[] = 'columns-' . $v_wwzuj['columns']; // obf
	} // obf
	if ( isset( $v_wwzuj['displayPostDate'] ) && $v_wwzuj['displayPostDate'] ) { // obf
		$v_aeolr[] = 'has-dates'; // obf
	} // obf
	if ( isset( $v_wwzuj['displayAuthor'] ) && $v_wwzuj['displayAuthor'] ) { // obf
		$v_aeolr[] = 'has-author'; // obf
	} // obf
	if ( isset( $v_wwzuj['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_aeolr[] = 'has-link-color'; // obf
	} // obf

	$v_cczwh = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_aeolr ) ) ); // obf

	return sprintf( // obf
		'<ul %1$v_aaltr>%2$v_aaltr</ul>', // obf
		$v_cczwh, // obf
		$v_jvfxl // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/latest-posts` block on server. // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
function register_block_core_latest_posts() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/latest-posts', // obf
		array( // obf
			'render_callback' => 'render_block_core_latest_posts', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_latest_posts' ); // obf

/** // obf
 * Handles outdated versions of the `core/latest-posts` block by converting // obf
 * attribute `categories` from a numeric string to an array with key `id`. // obf
 * // obf
 * This is done to accommodate the changes introduced in #20781 that sought to // obf
 * add support for multiple categories to the block. However, given that this // obf
 * block is dynamic, the usual provisions for block migration are insufficient, // obf
 * as they only act when a block is loaded in the editor. // obf
 * // obf
 * TODO: Remove when and if the bottom client-side deprecation for this block // obf
 * is removed. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param array $v_binwv A single parsed block object. // obf
 * // obf
 * @return array The migrated block object. // obf
 */ // obf
function block_core_latest_posts_migrate_categories( $v_binwv ) { // obf
	if ( // obf
		'core/latest-posts' === $v_binwv['blockName'] && // obf
		! empty( $v_binwv['attrs']['categories'] ) && // obf
		is_string( $v_binwv['attrs']['categories'] ) // obf
	) { // obf
		$v_binwv['attrs']['categories'] = array( // obf
			array( 'id' => absint( $v_binwv['attrs']['categories'] ) ), // obf
		); // obf
	} // obf

	return $v_binwv; // obf
} // obf
add_filter( 'render_block_data', 'block_core_latest_posts_migrate_categories' ); // obf