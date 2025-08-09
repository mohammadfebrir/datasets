

<?php // obf
/** // obf
 * RSS 0.92 Feed Template for displaying RSS 0.92 Posts feed. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

header( 'Content-Type: ' . feed_content_type( 'rss' ) . '; charset=' . get_option( 'blog_charset' ), true ); // obf
$v_phznc = 1; // obf

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>'; ?> // obf
<rss version="0.92"> // obf
<channel> // obf
	<title><?php wp_title_rss(); ?></title> // obf
	<link><?php bloginfo_rss( 'url' ); ?></link> // obf
	<description><?php bloginfo_rss( 'description' ); ?></description> // obf
	<lastBuildDate><?php echo get_feed_build_date( 'D, d M Y H:i:s +0000' ); ?></lastBuildDate> // obf
	<docs>http://backend.userland.com/rss092</docs> // obf
	<language><?php bloginfo_rss( 'language' ); ?></language> // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the RSS Feed Header. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'rss_head' ); // obf
	?> // obf

<?php // obf
while ( have_posts() ) : // obf
	the_post(); // obf
	?> // obf
	<item> // obf
		<title><?php the_title_rss(); ?></title> // obf
		<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description> // obf
		<link><?php the_permalink_rss(); ?></link> // obf
		<?php // obf
		/** // obf
		 * Fires at the end of each RSS feed item. // obf
		 * // obf
		 * @since 2.0.0 // obf
		 */ // obf
		do_action( 'rss_item' ); // obf
		?> // obf
	</item> // obf
<?php endwhile; ?> // obf
</channel> // obf
</rss> // obf