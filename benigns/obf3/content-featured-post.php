

<?php // obf
/** // obf
 * The template for displaying featured posts on the front page // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

?> // obf

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf
	<a class="post-thumbnail" href="<?php the_permalink(); ?>"> // obf
	<?php // obf
	// Output the featured image. // obf
	if ( has_post_thumbnail() ) : // obf
		if ( 'grid' === get_theme_mod( 'featured_content_layout' ) ) { // obf
			the_post_thumbnail(); // obf
		} else { // obf
			the_post_thumbnail( 'twentyfourteen-full-width' ); // obf
		} // obf
		endif; // obf
	?> // obf
	</a> // obf

	<header class="entry-header"> // obf
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ), true ) && twentyfourteen_categorized_blog() ) : ?> // obf
		<div class="entry-meta"> // obf
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span> // obf
		</div><!-- .entry-meta --> // obf
		<?php endif; ?> // obf

		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?> // obf
	</header><!-- .entry-header --> // obf
</article><!-- #post-<?php the_ID(); ?> --> // obf