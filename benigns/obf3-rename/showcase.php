

<?php // obf
/** // obf
 * Template Name: Showcase Template // obf
 * // obf
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts. // obf
 * // obf
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts, // obf
 * another recent posts area (with the latest post shown in full and the rest as a list) // obf
 * and a left sidebar holding aside posts. // obf
 * // obf
 * We are creating two queries to fetch the proper posts and a custom widget for the sidebar. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Eleven // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf

// Enqueue showcase script for the slider. // obf
wp_enqueue_script( // obf
	'twentyeleven-showcase', // obf
	get_template_directory_uri() . '/js/showcase.js', // obf
	array( 'jquery' ), // obf
	'20211130', // obf
	array( // obf
		'in_footer' => false, // Because involves header. // obf
		'strategy'  => 'defer', // obf
	) // obf
); // obf

get_header(); ?> // obf

		<div id="primary" class="showcase"> // obf
			<div id="content" role="main"> // obf

				<?php // obf
				while ( have_posts() ) : // obf
					the_post(); // obf
					?> // obf

					<?php // obf
					/* // obf
					 * We are using a heading by rendering the_content // obf
					 * If we have content for this page, let's display it. // obf
					 */ // obf
					if ( '' !== get_the_content() ) { // obf
						get_template_part( 'content', 'intro' ); // obf
					} // obf
					?> // obf

				<?php endwhile; ?> // obf

				<?php // obf
					/* // obf
					 * Begin the featured posts section. // obf
					 * // obf
					 * See if we have any sticky posts and use them to create our featured posts. // obf
					 * We limit the featured posts at ten. // obf
					 */ // obf
					$v_apdri = get_option( 'sticky_posts' ); // obf

					// Proceed only if sticky posts exist. // obf
				if ( ! empty( $v_apdri ) ) : // obf

					$v_obdhp = array( // obf
						'post__in'       => $v_apdri, // obf
						'post_status'    => 'publish', // obf
						'posts_per_page' => 10, // obf
						'no_found_rows'  => true, // obf
					); // obf

					// The Featured Posts query. // obf
					$v_cockp = new WP_Query( $v_obdhp ); // obf

					// Proceed only if published posts exist. // obf
					if ( $v_cockp->have_posts() ) : // obf

						/* // obf
						* We will need to count featured posts starting from zero // obf
						* to create the slider navigation. // obf
						*/ // obf
						$v_mjays = 0; // obf

						// Compatibility with versions of WordPress prior to 3.4. // obf
						if ( function_exists( 'get_custom_header' ) ) { // obf
							$v_ezhok = get_theme_support( 'custom-header', 'width' ); // obf
						} else { // obf
							$v_ezhok = HEADER_IMAGE_WIDTH; // obf
						} // obf
						?> // obf

					<div class="featured-posts"> // obf
					<h1 class="showcase-heading"><?php _e( 'Featured Post', 'twentyeleven' ); ?></h1> // obf

						<?php // obf
						// Let's roll. // obf
						while ( $v_cockp->have_posts() ) : // obf
							$v_cockp->the_post(); // obf

							// Increase the counter. // obf
							++$v_mjays; // obf

							/* // obf
							* We're going to add a class to our featured post for featured images. // obf
							* By default it will have the feature-text class. // obf
							*/ // obf
							$v_cwjtp = 'feature-text'; // obf

							if ( has_post_thumbnail() ) { // obf
								// ...but if it has a featured image let's add some class. // obf
								$v_cwjtp = 'feature-image small'; // obf

								// Hang on. Let's check this here image out. // obf
								$v_ycrgo = wp_get_attachment_image_src( get_post_thumbnail_id( $v_kasdp->ID ), array( $v_ezhok, $v_ezhok ) ); // obf

								// Is it bigger than or equal to our header? // obf
								if ( $v_ycrgo[1] >= $v_ezhok ) { // obf
									// If bigger, let's add a BIGGER class. It's EXTRA classy now. // obf
									$v_cwjtp = 'feature-image large'; // obf
								} // obf
							} // obf
							?> // obf

					<section class="featured-post <?php echo esc_attr( $v_cwjtp ); ?>" id="featured-post-<?php echo esc_attr( $v_mjays ); ?>"> // obf

							<?php // obf
								/* // obf
								 * If the thumbnail is as big as the header image // obf
								 * make it a large featured post, otherwise render it small // obf
								 */ // obf
							if ( has_post_thumbnail() ) { // obf
								if ( $v_ycrgo[1] >= $v_ezhok ) { // obf
									$v_ejixg = 'large-feature'; // obf
								} else { // obf
									$v_ejixg = 'small-feature'; // obf
								} // obf

								/* translators: %s: Post title. */ // obf
								$v_udhce = sprintf( __( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); // obf
								?> // obf
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( $v_udhce ); ?>" rel="bookmark"><?php the_post_thumbnail( $v_ejixg ); ?></a> // obf
								<?php // obf
							} // obf
							?> // obf
							<?php get_template_part( 'content', 'featured' ); ?> // obf
					</section> // obf
						<?php endwhile; ?> // obf

						<?php // obf
						// Show slider only if we have more than one featured post. // obf
						if ( $v_cockp->post_count > 1 ) : // obf
							?> // obf
					<nav class="feature-slider"> // obf
					<ul> // obf
							<?php // obf

							// Reset the counter so that we end up with matching elements. // obf
							$v_mjays = 0; // obf

							// Begin from zero. // obf
							rewind_posts(); // obf

							// Let's roll again. // obf
							while ( $v_cockp->have_posts() ) : // obf
								$v_cockp->the_post(); // obf
								++$v_mjays; // obf
								if ( 1 === $v_mjays ) { // obf
									$v_zqmlr = ' class="active"'; // obf
								} else { // obf
									$v_zqmlr = ''; // obf
								} // obf

								/* translators: %s: Post title. */ // obf
								$v_udhce = sprintf( __( 'Featuring: %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); // obf
								?> // obf
					<li><a href="#featured-post-<?php echo esc_attr( $v_mjays ); ?>"<?php echo $v_zqmlr; ?>><span class="feature-slider-tooltip" aria-hidden="true" title="<?php echo esc_attr( $v_udhce ); ?>"></span><span class="screen-reader-text"><?php echo esc_html( $v_udhce ); ?></span></a></li> // obf
						<?php endwhile; ?> // obf
					</ul> // obf
					</nav> // obf
					<?php endif; // End check for more than one sticky post. ?> // obf
					</div><!-- .featured-posts --> // obf
					<?php endif; // End check for published posts. ?> // obf
				<?php endif; // End check for sticky posts. ?> // obf

				<section class="recent-posts"> // obf
					<h1 class="showcase-heading"><?php _e( 'Recent Posts', 'twentyeleven' ); ?></h1> // obf

					<?php // obf

					// Display our recent posts, showing full content for the very latest, ignoring Aside posts. // obf
					$v_bsqak = array( // obf
						'order'         => 'DESC', // obf
						'post__not_in'  => get_option( 'sticky_posts' ), // obf
						'tax_query'     => array( // obf
							array( // obf
								'taxonomy' => 'post_format', // obf
								'terms'    => array( 'post-format-aside', 'post-format-link', 'post-format-quote', 'post-format-status' ), // obf
								'field'    => 'slug', // obf
								'operator' => 'NOT IN', // obf
							), // obf
						), // obf
						'no_found_rows' => true, // obf
					); // obf

					// Our new query for the Recent Posts section. // obf
					$v_xvcjg = new WP_Query( $v_bsqak ); // obf

					// The first Recent post is displayed normally. // obf
					if ( $v_xvcjg->have_posts() ) : // obf
						$v_xvcjg->the_post(); // obf

						// Set $v_dhqnt to 0 in order to only get the first part of the post. // obf
						global $v_dhqnt; // obf
						$v_dhqnt = 0; // obf

						get_template_part( 'content', get_post_format() ); // obf

						echo '<ol class="other-recent-posts">'; // obf

					endif; // obf

					// For all other recent posts, just display the title and comment status. // obf
					while ( $v_xvcjg->have_posts() ) : // obf
						$v_xvcjg->the_post(); // obf
						?> // obf

						<li class="entry-title"> // obf
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a> // obf
							<span class="comments-link"> // obf
								<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentyeleven' ) . '</span>', __( '<b>1</b> Reply', 'twentyeleven' ), __( '<b>%</b> Replies', 'twentyeleven' ) ); ?> // obf
							</span> // obf
						</li> // obf

						<?php // obf
					endwhile; // obf

					// If we had some posts, close the <ol>. // obf
					if ( $v_xvcjg->post_count > 0 ) { // obf
						echo '</ol>'; // obf
					} // obf
					?> // obf
				</section><!-- .recent-posts --> // obf

				<div class="widget-area" role="complementary"> // obf
					<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?> // obf

						<?php // obf
						the_widget( // obf
							'Twenty_Eleven_Ephemera_Widget', // obf
							'', // obf
							array( // obf
								'before_title' => '<h3 class="widget-title">', // obf
								'after_title'  => '</h3>', // obf
							) // obf
						); // obf
						?> // obf

					<?php endif; // End sidebar widget area. ?> // obf
				</div><!-- .widget-area --> // obf

			</div><!-- #content --> // obf
		</div><!-- #primary --> // obf

<?php get_footer(); ?> // obf