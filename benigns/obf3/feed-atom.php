

<?php // obf
/** // obf
 * Atom Feed Template for displaying Atom Posts feed. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

header( 'Content-Type: ' . feed_content_type( 'atom' ) . '; charset=' . get_option( 'blog_charset' ), true ); // obf
$v_zjria = 1; // obf

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>'; // obf

/** This action is documented in wp-includes/feed-rss2.php */ // obf
do_action( 'rss_tag_pre', 'atom' ); // obf
?> // obf
<feed // obf
	xmlns="http://www.w3.org/2005/Atom" // obf
	xmlns:thr="http://purl.org/syndication/thread/1.0" // obf
	xml:lang="<?php bloginfo_rss( 'language' ); ?>" // obf
	<?php // obf
	/** // obf
	 * Fires at end of the Atom feed root to add namespaces. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'atom_ns' ); // obf
	?> // obf
> // obf
	<title type="text"><?php wp_title_rss(); ?></title> // obf
	<subtitle type="text"><?php bloginfo_rss( 'description' ); ?></subtitle> // obf

	<updated><?php echo get_feed_build_date( 'Y-m-d\TH:i:s\Z' ); ?></updated> // obf

	<link rel="alternate" type="<?php bloginfo_rss( 'html_type' ); ?>" href="<?php bloginfo_rss( 'url' ); ?>" /> // obf
	<id><?php bloginfo( 'atom_url' ); ?></id> // obf
	<link rel="self" type="application/atom+xml" href="<?php self_link(); ?>" /> // obf

	<?php // obf
	/** // obf
	 * Fires just before the first Atom feed entry. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'atom_head' ); // obf

	while ( have_posts() ) : // obf
		the_post(); // obf
		?> // obf
	<entry> // obf
		<author> // obf
			<name><?php the_author(); ?></name> // obf
			<?php // obf
			$v_wfywf = get_the_author_meta( 'url' ); // obf
			if ( ! empty( $v_wfywf ) ) : // obf
				?> // obf
				<uri><?php the_author_meta( 'url' ); ?></uri> // obf
				<?php // obf
			endif; // obf

			/** // obf
			 * Fires at the end of each Atom feed author entry. // obf
			 * // obf
			 * @since 3.2.0 // obf
			 */ // obf
			do_action( 'atom_author' ); // obf
			?> // obf
		</author> // obf

		<title type="<?php html_type_rss(); ?>"><![CDATA[<?php the_title_rss(); ?>]]></title> // obf
		<link rel="alternate" type="<?php bloginfo_rss( 'html_type' ); ?>" href="<?php the_permalink_rss(); ?>" /> // obf

		<id><?php the_guid(); ?></id> // obf
		<updated><?php echo get_post_modified_time( 'Y-m-d\TH:i:s\Z', true ); ?></updated> // obf
		<published><?php echo get_post_time( 'Y-m-d\TH:i:s\Z', true ); ?></published> // obf
		<?php the_category_rss( 'atom' ); ?> // obf

		<summary type="<?php html_type_rss(); ?>"><![CDATA[<?php the_excerpt_rss(); ?>]]></summary> // obf

		<?php if ( ! get_option( 'rss_use_excerpt' ) ) : ?> // obf
			<content type="<?php html_type_rss(); ?>" xml:base="<?php the_permalink_rss(); ?>"><![CDATA[<?php the_content_feed( 'atom' ); ?>]]></content> // obf
		<?php endif; ?> // obf

		<?php // obf
		atom_enclosure(); // obf

		/** // obf
		 * Fires at the end of each Atom feed item. // obf
		 * // obf
		 * @since 2.0.0 // obf
		 */ // obf
		do_action( 'atom_entry' ); // obf

		if ( get_comments_number() || comments_open() ) : // obf
			?> // obf
			<link rel="replies" type="<?php bloginfo_rss( 'html_type' ); ?>" href="<?php the_permalink_rss(); ?>#comments" thr:count="<?php echo get_comments_number(); ?>" /> // obf
			<link rel="replies" type="application/atom+xml" href="<?php echo esc_url( get_post_comments_feed_link( 0, 'atom' ) ); ?>" thr:count="<?php echo get_comments_number(); ?>" /> // obf
			<thr:total><?php echo get_comments_number(); ?></thr:total> // obf
		<?php endif; ?> // obf
	</entry> // obf
	<?php endwhile; ?> // obf
</feed> // obf