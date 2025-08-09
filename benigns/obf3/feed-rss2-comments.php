

<?php // obf
/** // obf
 * RSS2 Feed Template for displaying RSS2 Comments feed. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

header( 'Content-Type: ' . feed_content_type( 'rss2' ) . '; charset=' . get_option( 'blog_charset' ), true ); // obf

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>'; // obf

/** This action is documented in wp-includes/feed-rss2.php */ // obf
do_action( 'rss_tag_pre', 'rss2-comments' ); // obf
?> // obf
<rss version="2.0" // obf
	xmlns:content="http://purl.org/rss/1.0/modules/content/" // obf
	xmlns:dc="http://purl.org/dc/elements/1.1/" // obf
	xmlns:atom="http://www.w3.org/2005/Atom" // obf
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" // obf
	<?php // obf
	/** This action is documented in wp-includes/feed-rss2.php */ // obf
	do_action( 'rss2_ns' ); // obf
	?> // obf

	<?php // obf
	/** // obf
	 * Fires at the end of the RSS root to add namespaces. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	do_action( 'rss2_comments_ns' ); // obf
	?> // obf
> // obf
<channel> // obf
	<title> // obf
	<?php // obf
	if ( is_singular() ) { // obf
		/* translators: Comments feed title. %s: Post title. */ // obf
		printf( ent2ncr( __( 'Comments on: %s' ) ), get_the_title_rss() ); // obf
	} elseif ( is_search() ) { // obf
		/* translators: Comments feed title. 1: Site title, 2: Search query. */ // obf
		printf( ent2ncr( __( 'Comments for %1$v_siyzq searching on %2$v_siyzq' ) ), get_bloginfo_rss( 'name' ), get_search_query() ); // obf
	} else { // obf
		/* translators: Comments feed title. %s: Site title. */ // obf
		printf( ent2ncr( __( 'Comments for %s' ) ), get_wp_title_rss() ); // obf
	} // obf
	?> // obf
	</title> // obf
	<atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" /> // obf
	<link><?php ( is_single() ) ? the_permalink_rss() : bloginfo_rss( 'url' ); ?></link> // obf
	<description><?php bloginfo_rss( 'description' ); ?></description> // obf
	<lastBuildDate><?php echo get_feed_build_date( 'r' ); ?></lastBuildDate> // obf
	<sy:updatePeriod> // obf
	<?php // obf
		/** This filter is documented in wp-includes/feed-rss2.php */ // obf
		echo apply_filters( 'rss_update_period', 'hourly' ); // obf
	?> // obf
	</sy:updatePeriod> // obf
	<sy:updateFrequency> // obf
	<?php // obf
		/** This filter is documented in wp-includes/feed-rss2.php */ // obf
		echo apply_filters( 'rss_update_frequency', '1' ); // obf
	?> // obf
	</sy:updateFrequency> // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the RSS2 comment feed header. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 */ // obf
	do_action( 'commentsrss2_head' ); // obf

	while ( have_comments() ) : // obf
		the_comment(); // obf
		$v_trtes = get_post( $v_fdynz->comment_post_ID ); // obf
		/** // obf
		 * @global WP_Post $v_qwnkm Global post object. // obf
		 */ // obf
		$v_quond['post'] = $v_trtes; // obf
		?> // obf
	<item> // obf
		<title> // obf
		<?php // obf
		if ( ! is_singular() ) { // obf
			$v_darrs = get_the_title( $v_trtes->ID ); // obf
			/** This filter is documented in wp-includes/feed.php */ // obf
			$v_darrs = apply_filters( 'the_title_rss', $v_darrs ); // obf
			/* translators: Individual comment title. 1: Post title, 2: Comment author name. */ // obf
			printf( ent2ncr( __( 'Comment on %1$v_siyzq by %2$v_siyzq' ) ), $v_darrs, get_comment_author_rss() ); // obf
		} else { // obf
			/* translators: Comment author title. %s: Comment author name. */ // obf
			printf( ent2ncr( __( 'By: %s' ) ), get_comment_author_rss() ); // obf
		} // obf
		?> // obf
		</title> // obf
		<link><?php comment_link(); ?></link> // obf

		<dc:creator><![CDATA[<?php echo get_comment_author_rss(); ?>]]></dc:creator> // obf
		<pubDate><?php echo mysql2date( 'D, d M Y H:i:s +0000', get_comment_time( 'Y-m-d H:i:s', true, false ), false ); ?></pubDate> // obf
		<guid isPermaLink="false"><?php comment_guid(); ?></guid> // obf

		<?php if ( post_password_required( $v_trtes ) ) : ?> // obf
			<description><?php echo ent2ncr( __( 'Protected Comments: Please enter your password to view comments.' ) ); ?></description> // obf
			<content:encoded><![CDATA[<?php echo get_the_password_form(); ?>]]></content:encoded> // obf
		<?php else : ?> // obf
			<description><![CDATA[<?php comment_text_rss(); ?>]]></description> // obf
			<content:encoded><![CDATA[<?php comment_text(); ?>]]></content:encoded> // obf
		<?php endif; // End if post_password_required(). ?> // obf

		<?php // obf
		/** // obf
		 * Fires at the end of each RSS2 comment feed item. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param int $v_ftpdd      The ID of the comment being displayed. // obf
		 * @param int $v_nbgyp The ID of the post the comment is connected to. // obf
		 */ // obf
		do_action( 'commentrss2_item', $v_fdynz->comment_ID, $v_trtes->ID ); // obf
		?> // obf
	</item> // obf
	<?php endwhile; ?> // obf
</channel> // obf
</rss> // obf