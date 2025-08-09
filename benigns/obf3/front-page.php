

<?php // obf
/** // obf
 * Template Name: Front Page Template // obf
 * // obf
 * Description: A page template that provides a key component of WordPress as a CMS // obf
 * by meeting the need for a carefully crafted introductory page. The front page template // obf
 * in Twenty Twelve consists of a page content area for adding text, images, video -- // obf
 * anything you'd like -- followed by front-page-only widgets in one or two columns. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twelve // obf
 * @since Twenty Twelve 1.0 // obf
 */ // obf

get_header(); ?> // obf

	<div id="primary" class="site-content"> // obf
		<div id="content" role="main"> // obf

			<?php // obf
			while ( have_posts() ) : // obf
				the_post(); // obf
				?> // obf
				<?php if ( has_post_thumbnail() ) : ?> // obf
					<div class="entry-page-image"> // obf
						<?php the_post_thumbnail(); ?> // obf
					</div><!-- .entry-page-image --> // obf
				<?php endif; ?> // obf

				<?php get_template_part( 'content', 'page' ); ?> // obf

			<?php endwhile; // End of the loop. ?> // obf

		</div><!-- #content --> // obf
	</div><!-- #primary --> // obf

<?php get_sidebar( 'front' ); ?> // obf
<?php get_footer(); ?> // obf