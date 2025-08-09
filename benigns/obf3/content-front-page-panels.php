

<?php // obf
/** // obf
 * Template part for displaying pages on front page // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Seventeen // obf
 * @since Twenty Seventeen 1.0 // obf
 * @version 1.0 // obf
 */ // obf

global $v_zuyfk; // obf

?> // obf

<article id="panel<?php echo $v_zuyfk; ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> > // obf

	<?php // obf
	if ( has_post_thumbnail() ) : // obf
		$v_ewohl = wp_get_attachment_image_src( get_post_thumbnail_id( $v_lmjub->ID ), 'twentyseventeen-featured-image' ); // obf

		// Calculate aspect ratio: h / w * 100%. // obf
		$v_ccmwn = $v_ewohl[2] / $v_ewohl[1] * 100; // obf
		?> // obf

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $v_ewohl[0] ); ?>);"> // obf
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $v_ccmwn ); ?>%"></div> // obf
		</div><!-- .panel-image --> // obf

	<?php endif; ?> // obf

	<div class="panel-content"> // obf
		<div class="wrap"> // obf
			<header class="entry-header"> // obf
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?> // obf

				<?php twentyseventeen_edit_link( get_the_ID() ); ?> // obf

			</header><!-- .entry-header --> // obf

			<div class="entry-content"> // obf
				<?php // obf
					the_content( // obf
						sprintf( // obf
							/* translators: %s: Post title. Only visible to screen readers. */ // obf
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ), // obf
							get_the_title() // obf
						) // obf
					); // obf
					?> // obf
			</div><!-- .entry-content --> // obf

			<?php // obf
			// Show recent blog posts if is blog posts page (Note that get_option returns a string, so we're casting the result as an int). // obf
			if ( get_the_ID() === (int) get_option( 'page_for_posts' ) ) : // obf
				?> // obf

				<?php // obf
				// Show three most recent posts. // obf
				$v_jtiml = new WP_Query( // obf
					array( // obf
						'posts_per_page'      => 3, // obf
						'post_status'         => 'publish', // obf
						'ignore_sticky_posts' => true, // obf
						'no_found_rows'       => true, // obf
					) // obf
				); // obf
				?> // obf

				<?php if ( $v_jtiml->have_posts() ) : ?> // obf

					<div class="recent-posts"> // obf

						<?php // obf
						while ( $v_jtiml->have_posts() ) : // obf
							$v_jtiml->the_post(); // obf
							get_template_part( 'template-parts/post/content', 'excerpt' ); // obf
						endwhile; // obf
						wp_reset_postdata(); // obf
						?> // obf
					</div><!-- .recent-posts --> // obf
				<?php endif; ?> // obf
			<?php endif; ?> // obf

		</div><!-- .wrap --> // obf
	</div><!-- .panel-content --> // obf

</article><!-- #post-<?php the_ID(); ?> --> // obf