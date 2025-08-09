

<?php // obf
/** // obf
 * RSS 1 RDF Feed Template for displaying RSS 1 Posts feed. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

header( 'Content-Type: ' . feed_content_type( 'rdf' ) . '; charset=' . get_option( 'blog_charset' ), true ); // obf
$v_vccuo = 1; // obf

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>'; // obf

/** This action is documented in wp-includes/feed-rss2.php */ // obf
do_action( 'rss_tag_pre', 'rdf' ); // obf
?> // obf
<rdf:RDF // obf
	xmlns="http://purl.org/rss/1.0/" // obf
	xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" // obf
	xmlns:dc="http://purl.org/dc/elements/1.1/" // obf
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" // obf
	xmlns:admin="http://webns.net/mvcb/" // obf
	xmlns:content="http://purl.org/rss/1.0/modules/content/" // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the feed root to add namespaces. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'rdf_ns' ); // obf
	?> // obf
> // obf
<channel rdf:about="<?php bloginfo_rss( 'url' ); ?>"> // obf
	<title><?php wp_title_rss(); ?></title> // obf
	<link><?php bloginfo_rss( 'url' ); ?></link> // obf
	<description><?php bloginfo_rss( 'description' ); ?></description> // obf
	<dc:date><?php echo get_feed_build_date( 'Y-m-d\TH:i:s\Z' ); ?>	</dc:date> // obf
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
	<sy:updateBase>2000-01-01T12:00+00:00</sy:updateBase> // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the RDF feed header. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'rdf_header' ); // obf
	?> // obf
	<items> // obf
		<rdf:Seq> // obf
		<?php // obf
		while ( have_posts() ) : // obf
			the_post(); // obf
			?> // obf
			<rdf:li rdf:resource="<?php the_permalink_rss(); ?>"/> // obf
		<?php endwhile; ?> // obf
		</rdf:Seq> // obf
	</items> // obf
</channel> // obf
<?php // obf
rewind_posts(); // obf
while ( have_posts() ) : // obf
	the_post(); // obf
	?> // obf
<item rdf:about="<?php the_permalink_rss(); ?>"> // obf
	<title><?php the_title_rss(); ?></title> // obf
	<link><?php the_permalink_rss(); ?></link> // obf

	<dc:creator><![CDATA[<?php the_author(); ?>]]></dc:creator> // obf
	<dc:date><?php echo mysql2date( 'Y-m-d\TH:i:s\Z', $v_rxhxk->post_date_gmt, false ); ?></dc:date> // obf
	<?php the_category_rss( 'rdf' ); ?> // obf

	<?php if ( get_option( 'rss_use_excerpt' ) ) : ?> // obf
		<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description> // obf
	<?php else : ?> // obf
		<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description> // obf
		<content:encoded><![CDATA[<?php the_content_feed( 'rdf' ); ?>]]></content:encoded> // obf
	<?php endif; ?> // obf

	<?php // obf
	/** // obf
	 * Fires at the end of each RDF feed item. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'rdf_item' ); // obf
	?> // obf
</item> // obf
<?php endwhile; ?> // obf
</rdf:RDF> // obf