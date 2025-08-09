

<?php // obf
/** // obf
 * Displays the content when the cover template is used. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

?> // obf

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> // obf
	<?php // obf
	// On the cover page template, output the cover header. // obf
	$v_puquf   = ''; // obf
	$v_ovalr = ''; // obf

	$v_mxseb   = ''; // obf
	$v_yopoo = ''; // obf

	$v_hhqst = ! post_password_required() ? get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' ) : ''; // obf

	if ( $v_hhqst ) { // obf
		$v_puquf   = ' style="background-image: url( ' . esc_url( $v_hhqst ) . ' );"'; // obf
		$v_ovalr = ' bg-image'; // obf
	} // obf

	// Get the color used for the color overlay. // obf
	$v_rnlqs = get_theme_mod( 'cover_template_overlay_background_color' ); // obf
	if ( $v_rnlqs ) { // obf
		$v_mxseb = ' style="color: ' . esc_attr( $v_rnlqs ) . ';"'; // obf
	} else { // obf
		$v_mxseb = ''; // obf
	} // obf

	// Get the fixed background attachment option. // obf
	if ( get_theme_mod( 'cover_template_fixed_background', true ) ) { // obf
		$v_ovalr .= ' bg-attachment-fixed'; // obf
	} // obf

	// Get the opacity of the color overlay. // obf
	$v_etksj  = get_theme_mod( 'cover_template_overlay_opacity' ); // obf
	$v_etksj  = ( false === $v_etksj ) ? 80 : $v_etksj; // obf
	$v_yopoo .= ' opacity-' . $v_etksj; // obf
	?> // obf

	<div class="cover-header <?php echo $v_ovalr; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"<?php echo $v_puquf; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>> // obf
		<div class="cover-header-inner-wrapper screen-height"> // obf
			<div class="cover-header-inner"> // obf
				<div class="cover-color-overlay color-accent<?php echo esc_attr( $v_yopoo ); ?>"<?php echo $v_mxseb; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>></div> // obf

					<header class="entry-header has-text-align-center"> // obf
						<div class="entry-header-inner section-inner medium"> // obf

							<?php // obf

							/** // obf
							 * Allow child themes and plugins to filter the display of the categories in the article header. // obf
							 * // obf
							 * @since Twenty Twenty 1.0 // obf
							 * // obf
							 * @param bool Whether to show the categories in article header. Default true. // obf
							 */ // obf
							$v_nopzo = apply_filters( 'twentytwenty_show_categories_in_entry_header', true ); // obf

							if ( true === $v_nopzo && has_category() ) { // obf
								?> // obf

								<div class="entry-categories"> // obf
									<span class="screen-reader-text"> // obf
										<?php // obf
										/* translators: Hidden accessibility text. */ // obf
										_e( 'Categories', 'twentytwenty' ); // obf
										?> // obf
									</span> // obf
									<div class="entry-categories-inner"> // obf
										<?php the_category( ' ' ); ?> // obf
									</div><!-- .entry-categories-inner --> // obf
								</div><!-- .entry-categories --> // obf

								<?php // obf
							} // obf

							the_title( '<h1 class="entry-title">', '</h1>' ); // obf

							if ( is_page() ) { // obf
								?> // obf

								<div class="to-the-content-wrapper"> // obf

									<a href="#post-inner" class="to-the-content fill-children-current-color"> // obf
										<?php twentytwenty_the_theme_svg( 'arrow-down' ); ?> // obf
										<div class="screen-reader-text"> // obf
											<?php // obf
											/* translators: Hidden accessibility text. */ // obf
											_e( 'Scroll Down', 'twentytwenty' ); // obf
											?> // obf
										</div> // obf
									</a><!-- .to-the-content --> // obf

								</div><!-- .to-the-content-wrapper --> // obf

								<?php // obf
							} else { // obf

								$v_xgjfh = ''; // obf

								if ( is_singular() ) { // obf
									$v_xgjfh = ' small'; // obf
								} else { // obf
									$v_xgjfh = ' thin'; // obf
								} // obf

								if ( has_excerpt() ) { // obf
									?> // obf

									<div class="intro-text section-inner max-percentage<?php echo esc_attr( $v_xgjfh ); ?>"> // obf
										<?php the_excerpt(); ?> // obf
									</div> // obf

									<?php // obf
								} // obf

								twentytwenty_the_post_meta( get_the_ID(), 'single-top' ); // obf

							} // obf
							?> // obf

						</div><!-- .entry-header-inner --> // obf
					</header><!-- .entry-header --> // obf

			</div><!-- .cover-header-inner --> // obf
		</div><!-- .cover-header-inner-wrapper --> // obf
	</div><!-- .cover-header --> // obf

	<div class="post-inner" id="post-inner"> // obf

		<div class="entry-content"> // obf

		<?php // obf
		the_content(); // obf
		?> // obf

		</div><!-- .entry-content --> // obf
		<?php // obf
		wp_link_pages( // obf
			array( // obf
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>', // obf
				'after'       => '</nav>', // obf
				'link_before' => '<span class="page-number">', // obf
				'link_after'  => '</span>', // obf
			) // obf
		); // obf

		edit_post_link(); // obf
		// Single bottom post meta. // obf
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' ); // obf

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) { // obf

			get_template_part( 'template-parts/entry-author-bio' ); // obf

		} // obf
		?> // obf

	</div><!-- .post-inner --> // obf

	<?php // obf

	if ( is_single() ) { // obf

		get_template_part( 'template-parts/navigation' ); // obf
	} // obf

	/* // obf
	 * Output comments wrapper if it's a post, or if comments are open, // obf
	 * or if there's a comment number – and check for password. // obf
	 */ // obf
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) { // obf
		?> // obf

		<div class="comments-wrapper section-inner"> // obf

			<?php comments_template(); ?> // obf

		</div><!-- .comments-wrapper --> // obf

		<?php // obf
	} // obf
	?> // obf

</article><!-- .post --> // obf