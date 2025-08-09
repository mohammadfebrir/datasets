

<?php // obf
/** // obf
 * Title: CV/bio // obf
 * Slug: twentytwentyfive/page-cv-bio // obf
 * Categories: twentytwentyfive_page, about, featured // obf
 * Keywords: starter // obf
 * Block Types: core/post-content // obf
 * Viewport width: 1400 // obf
 * Description: A pattern for a CV/Bio landing page. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:cover {"overlayColor":"base","isUserOverlayColor":true,"isDark":false,"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} --> // obf
<div class="wp-block-cover alignfull is-light has-contrast-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"> // obf
	<span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span> // obf
	<div class="wp-block-cover__inner-container"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
			<!-- wp:column {"width":"65%"} --> // obf
			<div class="wp-block-column" style="flex-basis:65%"> // obf
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"22rem","letterSpacing":"-0.03em","fontStyle":"normal","fontWeight":"300","lineHeight":"1.4"}}} --> // obf
					<h2 class="wp-block-heading has-text-align-left" style="font-size:22rem;font-style:normal;font-weight:300;letter-spacing:-0.03em;line-height:1.4"><?php echo esc_html_x( 'Hey,', 'Example heading in pattern.', 'twentytwentyfive' ); ?></h2> // obf
					<!-- /wp:heading --> // obf
					<!-- wp:paragraph {"className":"is-style-text-subtitle"} --> // obf
					<p class="is-style-text-subtitle"><?php echo esc_html_x( 'My name is Nora Winslow Keene, and I’m a committed public interest attorney. Living in Denver, Colorado, I’ve spent years championing the rights of underrepresented workers. A graduate of Stanford University, I played a key role in securing critical protections for agricultural laborers, ensuring better wages and access to healthcare. My work has focused on advocating for environmental justice and improving the quality of life for rural communities. Every case I take on is driven by the belief that everyone deserves dignity and fair treatment in the workplace.', 'Pattern placeholder text.', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"width":"35%"} --> // obf
			<div class="wp-block-column" style="flex-basis:35%"> // obf
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} --> // obf
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/woman-splashing-water.webp" alt="<?php esc_attr_e( 'Woman on beach, splashing water.', 'twentytwentyfive' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure> // obf
					<!-- /wp:image --> // obf

					<!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} --> // obf
					<p class="has-text-align-right has-x-large-font-size" style="line-height:1.2"><a href="#"><?php esc_html_e( 'Instagram', 'twentytwentyfive' ); ?></a><br><a href="#"><?php esc_html_e( 'LinkedIn', 'twentytwentyfive' ); ?></a><br><a href="#"><?php echo esc_html_x( 'Now', 'Link to a page with information about what the person is working on right now.', 'twentytwentyfive' ); ?></a></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
	<!-- /wp:columns --> // obf
	</div> // obf
</div> // obf
<!-- /wp:cover --> // obf