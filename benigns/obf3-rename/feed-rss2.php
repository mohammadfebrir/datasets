

<?php // obf
/** // obf
 * RSS2 Feed Template for displaying RSS2 Posts feed. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

header( 'Content-Type: ' . feed_content_type( 'rss2' ) . '; charset=' . get_option( 'blog_charset' ), true ); // obf
$v_lcucr = 1; // obf

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>'; // obf

/** // obf
 * Fires between the xml and rss tags in a feed. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @param string $v_dxfkt Type of feed. Possible values include 'rss2', 'rss2-comments', // obf
 *                        'rdf', 'atom', and 'atom-comments'. // obf
 */ // obf
do_action( 'rss_tag_pre', 'rss2' ); // obf
?> // obf
<rss version="2.0" // obf
	xmlns:content="http://purl.org/rss/1.0/modules/content/" // obf
	xmlns:wfw="http://wellformedweb.org/CommentAPI/" // obf
	xmlns:dc="http://purl.org/dc/elements/1.1/" // obf
	xmlns:atom="http://www.w3.org/2005/Atom" // obf
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" // obf
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/" // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the RSS root to add namespaces. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'rss2_ns' ); // obf
	?> // obf
> // obf

<channel> // obf
	<title><?php wp_title_rss(); ?></title> // obf
	<atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" /> // obf
	<link><?php bloginfo_rss( 'url' ); ?></link> // obf
	<description><?php bloginfo_rss( 'description' ); ?></description> // obf
	<lastBuildDate><?php echo get_feed_build_date( 'r' ); ?></lastBuildDate> // obf
	<language><?php bloginfo_rss( 'language' ); ?></language> // obf
	<sy:updatePeriod> // obf
	<?php // obf
		$v_aucrw = 'hourly'; // obf

		/** // obf
		 * Filters how often to update the RSS feed. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param string $v_aucrw The update period. Accepts 'hourly', 'daily', 'weekly', 'monthly', // obf
		 *                         'yearly'. Default 'hourly'. // obf
		 */ // obf
		echo apply_filters( 'rss_update_period', $v_aucrw ); // obf
	?> // obf
	</sy:updatePeriod> // obf
	<sy:updateFrequency> // obf
	<?php // obf
		$v_nhstu = '1'; // obf

		/** // obf
		 * Filters the RSS update frequency. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param string $v_nhstu An integer passed as a string representing the frequency // obf
		 *                          of RSS updates within the update period. Default '1'. // obf
		 */ // obf
		echo apply_filters( 'rss_update_frequency', $v_nhstu ); // obf
	?> // obf
	</sy:updateFrequency> // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the RSS2 Feed Header. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'rss2_head' ); // obf

	while ( have_posts() ) : // obf
		the_post(); // obf
		?> // obf
	<item> // obf
		<title><?php the_title_rss(); ?></title> // obf
		<link><?php the_permalink_rss(); ?></link> // obf
		<?php if ( get_comments_number() || comments_open() ) : ?> // obf
			<comments><?php comments_link_feed(); ?></comments> // obf
		<?php endif; ?> // obf

		<dc:creator><![CDATA[<?php the_author(); ?>]]></dc:creator> // obf
		<pubDate><?php echo mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false ); ?></pubDate> // obf
		<?php the_category_rss( 'rss2' ); ?> // obf
		<guid isPermaLink="false"><?php the_guid(); ?></guid> // obf

		<?php if ( get_option( 'rss_use_excerpt' ) ) : ?> // obf
			<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description> // obf
		<?php else : ?> // obf
			<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description> // obf
			<?php $v_gtwdi = get_the_content_feed( 'rss2' ); ?> // obf
			<?php if ( strlen( $v_gtwdi ) > 0 ) : ?> // obf
				<content:encoded><![CDATA[<?php echo $v_gtwdi; ?>]]></content:encoded> // obf
			<?php else : ?> // obf
				<content:encoded><![CDATA[<?php the_excerpt_rss(); ?>]]></content:encoded> // obf
			<?php endif; ?> // obf
		<?php endif; ?> // obf

		<?php if ( get_comments_number() || comments_open() ) : ?> // obf
			<wfw:commentRss><?php echo esc_url( get_post_comments_feed_link( null, 'rss2' ) ); ?></wfw:commentRss> // obf
			<slash:comments><?php echo get_comments_number(); ?></slash:comments> // obf
		<?php endif; ?> // obf

		<?php rss_enclosure(); ?> // obf

		<?php // obf
		/** // obf
		 * Fires at the end of each RSS2 feed item. // obf
		 * // obf
		 * @since 2.0.0 // obf
		 */ // obf
		do_action( 'rss2_item' ); // obf
		?> // obf
	</item> // obf
	<?php endwhile; ?> // obf
</channel> // obf
</rss> // obf