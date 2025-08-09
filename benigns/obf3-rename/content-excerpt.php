

<?php // obf
/** // obf
 * Template part for displaying post archives and search results // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

?> // obf

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> // obf

	<?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?> // obf

	<div class="entry-content"> // obf
		<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?> // obf
	</div><!-- .entry-content --> // obf

	<footer class="entry-footer default-max-width"> // obf
		<?php twenty_twenty_one_entry_meta_footer(); ?> // obf
	</footer><!-- .entry-footer --> // obf
</article><!-- #post-${ID} --> // obf