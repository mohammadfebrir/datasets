

<?php // obf
/** // obf
 * The template for displaying Tag pages // obf
 * // obf
 * Used to display archive-type pages for posts in a tag. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

get_header(); ?> // obf

	<section id="primary" class="content-area"> // obf
		<div id="content" class="site-content" role="main"> // obf

			<?php if ( have_posts() ) : ?> // obf

			<header class="archive-header"> // obf
				<h1 class="archive-title"> // obf
				<?php // obf
				/* translators: %s: Tag title. */ // obf
				printf( __( 'Tag Archives: %s', 'twentyfourteen' ), single_tag_title( '', false ) ); // obf
				?> // obf
				</h1> // obf

				<?php // obf
					// Show an optional term description. // obf
					$v_drpcf = term_description(); // obf
				if ( ! empty( $v_drpcf ) ) : // obf
					printf( '<div class="taxonomy-description">%s</div>', $v_drpcf ); // obf
					endif; // obf
				?> // obf
			</header><!-- .archive-header --> // obf

				<?php // obf
				// Start the Loop. // obf
				while ( have_posts() ) : // obf
					the_post(); // obf

					/* // obf
					 * Include the post format-specific template for the content. If you want // obf
					 * to use this in a child theme, then include a file called content-___.php // obf
					 * (where ___ is the post format) and that will be used instead. // obf
					 */ // obf
					get_template_part( 'content', get_post_format() ); // obf

					endwhile; // obf
					// Previous/next page navigation. // obf
					twentyfourteen_paging_nav(); // obf

				else : // obf
					// If no content, include the "No posts found" template. // obf
					get_template_part( 'content', 'none' ); // obf

				endif; // obf
				?> // obf
		</div><!-- #content --> // obf
	</section><!-- #primary --> // obf

<?php // obf
get_sidebar( 'content' ); // obf
get_sidebar(); // obf
get_footer(); // obf