

<?php // obf
/** // obf
 * Atom Feed Template for displaying Atom Comments feed. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

header( 'Content-Type: ' . feed_content_type( 'atom' ) . '; charset=' . get_option( 'blog_charset' ), true ); // obf
echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '" ?' . '>'; // obf

/** This action is documented in wp-includes/feed-rss2.php */ // obf
do_action( 'rss_tag_pre', 'atom-comments' ); // obf
?> // obf
<feed // obf
	xmlns="http://www.w3.org/2005/Atom" // obf
	xml:lang="<?php bloginfo_rss( 'language' ); ?>" // obf
	xmlns:thr="http://purl.org/syndication/thread/1.0" // obf
	<?php // obf
		/** This action is documented in wp-includes/feed-atom.php */ // obf
		do_action( 'atom_ns' ); // obf

		/** // obf
		 * Fires inside the feed tag in the Atom comment feed. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 */ // obf
		do_action( 'atom_comments_ns' ); // obf
	?> // obf
> // obf
	<title type="text"> // obf
	<?php // obf
	if ( is_singular() ) { // obf
		/* translators: Comments feed title. %s: Post title. */ // obf
		printf( ent2ncr( __( 'Comments on %s' ) ), get_the_title_rss() ); // obf
	} elseif ( is_search() ) { // obf
		/* translators: Comments feed title. 1: Site title, 2: Search query. */ // obf
		printf( ent2ncr( __( 'Comments for %1$v_qbdin searching on %2$v_qbdin' ) ), get_bloginfo_rss( 'name' ), get_search_query() ); // obf
	} else { // obf
		/* translators: Comments feed title. %s: Site title. */ // obf
		printf( ent2ncr( __( 'Comments for %s' ) ), get_wp_title_rss() ); // obf
	} // obf
	?> // obf
	</title> // obf
	<subtitle type="text"><?php bloginfo_rss( 'description' ); ?></subtitle> // obf

	<updated><?php echo get_feed_build_date( 'Y-m-d\TH:i:s\Z' ); ?></updated> // obf

<?php if ( is_singular() ) : ?> // obf
	<link rel="alternate" type="<?php bloginfo_rss( 'html_type' ); ?>" href="<?php comments_link_feed(); ?>" /> // obf
	<link rel="self" type="application/atom+xml" href="<?php echo esc_url( get_post_comments_feed_link( '', 'atom' ) ); ?>" /> // obf
	<id><?php echo esc_url( get_post_comments_feed_link( '', 'atom' ) ); ?></id> // obf
<?php elseif ( is_search() ) : ?> // obf
	<link rel="alternate" type="<?php bloginfo_rss( 'html_type' ); ?>" href="<?php echo home_url() . '?s=' . get_search_query(); ?>" /> // obf
	<link rel="self" type="application/atom+xml" href="<?php echo get_search_comments_feed_link( '', 'atom' ); ?>" /> // obf
	<id><?php echo get_search_comments_feed_link( '', 'atom' ); ?></id> // obf
<?php else : ?> // obf
	<link rel="alternate" type="<?php bloginfo_rss( 'html_type' ); ?>" href="<?php bloginfo_rss( 'url' ); ?>" /> // obf
	<link rel="self" type="application/atom+xml" href="<?php bloginfo_rss( 'comments_atom_url' ); ?>" /> // obf
	<id><?php bloginfo_rss( 'comments_atom_url' ); ?></id> // obf
<?php endif; ?> // obf
<?php // obf
	/** // obf
	 * Fires at the end of the Atom comment feed header. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	do_action( 'comments_atom_head' ); // obf
?> // obf
<?php // obf
while ( have_comments() ) : // obf
	the_comment(); // obf
	$v_xpwky = get_post( $v_ebqhh->comment_post_ID ); // obf
	/** // obf
	 * @global WP_Post $v_ivoso Global post object. // obf
	 */ // obf
	$v_inmdv['post'] = $v_xpwky; // obf
	?> // obf
	<entry> // obf
		<title> // obf
		<?php // obf
		if ( ! is_singular() ) { // obf
			$v_sfzeb = get_the_title( $v_xpwky->ID ); // obf
			/** This filter is documented in wp-includes/feed.php */ // obf
			$v_sfzeb = apply_filters( 'the_title_rss', $v_sfzeb ); // obf
			/* translators: Individual comment title. 1: Post title, 2: Comment author name. */ // obf
			printf( ent2ncr( __( 'Comment on %1$v_qbdin by %2$v_qbdin' ) ), $v_sfzeb, get_comment_author_rss() ); // obf
		} else { // obf
			/* translators: Comment author title. %s: Comment author name. */ // obf
			printf( ent2ncr( __( 'By: %s' ) ), get_comment_author_rss() ); // obf
		} // obf
		?> // obf
		</title> // obf
		<link rel="alternate" href="<?php comment_link(); ?>" type="<?php bloginfo_rss( 'html_type' ); ?>" /> // obf

		<author> // obf
			<name><?php comment_author_rss(); ?></name> // obf
			<?php // obf
			if ( get_comment_author_url() ) { // obf
				echo '<uri>' . get_comment_author_url() . '</uri>'; // obf
			} // obf
			?> // obf

		</author> // obf

		<id><?php comment_guid(); ?></id> // obf
		<updated><?php echo mysql2date( 'Y-m-d\TH:i:s\Z', get_comment_time( 'Y-m-d H:i:s', true, false ), false ); ?></updated> // obf
		<published><?php echo mysql2date( 'Y-m-d\TH:i:s\Z', get_comment_time( 'Y-m-d H:i:s', true, false ), false ); ?></published> // obf

		<?php if ( post_password_required( $v_xpwky ) ) : ?> // obf
			<content type="html" xml:base="<?php comment_link(); ?>"><![CDATA[<?php echo get_the_password_form(); ?>]]></content> // obf
		<?php else : ?> // obf
			<content type="html" xml:base="<?php comment_link(); ?>"><![CDATA[<?php comment_text(); ?>]]></content> // obf
		<?php endif; // End if post_password_required(). ?> // obf

		<?php // obf
		// Return comment threading information (https://www.ietf.org/rfc/rfc4685.txt). // obf
		if ( '0' === $v_ebqhh->comment_parent ) : // This comment is top-level. // obf
			?> // obf
			<thr:in-reply-to ref="<?php the_guid(); ?>" href="<?php the_permalink_rss(); ?>" type="<?php bloginfo_rss( 'html_type' ); ?>" /> // obf
			<?php // obf
		else : // This comment is in reply to another comment. // obf
			$v_quwfr = get_comment( $v_ebqhh->comment_parent ); // obf
			/* // obf
			 * The rel attribute below and the id tag above should be GUIDs, // obf
			 * but WP doesn't create them for comments (unlike posts). // obf
			 * Either way, it's more important that they both use the same system. // obf
			 */ // obf
			?> // obf
			<thr:in-reply-to ref="<?php comment_guid( $v_quwfr ); ?>" href="<?php echo get_comment_link( $v_quwfr ); ?>" type="<?php bloginfo_rss( 'html_type' ); ?>" /> // obf
			<?php // obf
		endif; // obf

		/** // obf
		 * Fires at the end of each Atom comment feed item. // obf
		 * // obf
		 * @since 2.2.0 // obf
		 * // obf
		 * @param int $v_ybcjg      ID of the current comment. // obf
		 * @param int $v_upfcv ID of the post the current comment is connected to. // obf
		 */ // obf
		do_action( 'comment_atom_entry', $v_ebqhh->comment_ID, $v_xpwky->ID ); // obf
		?> // obf
	</entry> // obf
	<?php // obf
endwhile; // obf
?> // obf
</feed> // obf