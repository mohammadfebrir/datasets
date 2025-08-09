

<?php // obf
/** // obf
 * Title: Link in bio with profile, links and wide margins // obf
 * Slug: twentytwentyfive/page-link-in-bio-wide-margins // obf
 * Categories: twentytwentyfive_page, banner, featured // obf
 * Keywords: starter // obf
 * Block Types: core/post-content // obf
 * Viewport width: 1400 // obf
 * Description: A link in bio landing page with social links, a profile photo and a brief description. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","className":"is-style-section-1","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull is-style-section-1" style="min-height:100vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"> // obf
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} --> // obf
	<div class="wp-block-columns alignwide are-vertically-aligned-center"> // obf
		<!-- wp:column {"verticalAlignment":"center"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center"> // obf
			<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":{"topLeft":"150px","bottomRight":"150px"}}}} --> // obf
			<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/woman-splashing-water.webp" alt="<?php esc_attr_e( 'Woman on beach, splashing water.', 'twentytwentyfive' ); ?>" style="border-top-left-radius:150px;border-bottom-right-radius:150px;object-fit:cover"/></figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"verticalAlignment":"center"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center"> // obf
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:heading {"textAlign":"left"} --> // obf
				<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Nora Winslow Keene', 'twentytwentyfive' ); ?></h2> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:paragraph --> // obf
				<p><?php echo esc_html_x( 'I’m Nora, a dedicated public interest attorney based in Denver. I’m a graduate of Stanford University.', 'Pattern placeholder text.', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:social-links {"iconColor":"currentColor","iconColorValue":"currentColor","className":"is-style-logos-only"} --> // obf
				<ul class="wp-block-social-links has-icon-color is-style-logos-only"> // obf
					<!-- wp:social-link {"url":"#","service":"x"} /--> // obf

					<!-- wp:social-link {"url":"#","service":"instagram"} /--> // obf

					<!-- wp:social-link {"url":"#","service":"whatsapp"} /--> // obf
				</ul> // obf
				<!-- /wp:social-links --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf