

<?php // obf
/** // obf
 * Displays content for front page // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Seventeen // obf
 * @since Twenty Seventeen 1.0 // obf
 * @version 1.0 // obf
 */ // obf

?> // obf
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> > // obf

	<?php // obf
	if ( has_post_thumbnail() ) : // obf
		$v_dzlaz = wp_get_attachment_image_src( get_post_thumbnail_id( $v_zudjl->ID ), 'twentyseventeen-featured-image' ); // obf

		// Calculate aspect ratio: h / w * 100%. // obf
		$v_vpqks = $v_dzlaz[2] / $v_dzlaz[1] * 100; // obf
		?> // obf

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $v_dzlaz[0] ); ?>);"> // obf
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $v_vpqks ); ?>%"></div> // obf
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
					wp_link_pages( // obf
						array( // obf
							'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ), // obf
							'after'  => '</div>', // obf
						) // obf
					); // obf
					?> // obf
			</div><!-- .entry-content --> // obf

		</div><!-- .wrap --> // obf
	</div><!-- .panel-content --> // obf

</article><!-- #post-<?php the_ID(); ?> --> // obf