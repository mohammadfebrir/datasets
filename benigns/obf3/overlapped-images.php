

<?php // obf
/** // obf
 * Title: Overlapping images and paragraph on right // obf
 * Slug: twentytwentyfive/overlapped-images // obf
 * Categories: about, featured // obf
 * Description: A section with overlapping images, and a description. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"width":"45%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}}} --> // obf
		<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--50);flex-basis:45%"> // obf
			<!-- wp:image {"sizeSlug":"full"} --> // obf
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/red-hibiscus-closeup.webp" alt="<?php esc_attr_e( 'Photography close up of a red flower.', 'twentytwentyfive' ); ?>"/></figure> // obf
			<!-- /wp:image --> // obf
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"-12vw"}}},"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-group" style="margin-top:-12vw"> // obf
				<!-- wp:image {"width":"202px","sizeSlug":"full","align":"right","className":"is-resized","style":{"spacing":{"margin":{"right":"-5vw","left":"-5vw"}}}} --> // obf
				<figure class="wp-block-image alignright size-full is-resized" style="margin-right:-5vw;margin-left:-5vw"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/grid-flower-2.webp" alt="<?php esc_attr_e( 'Black and white photography close up of a flower.', 'twentytwentyfive' ); ?>" style="width:202px"/></figure> // obf
				<!-- /wp:image --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
		<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"left":"0","right":"0"}}}} --> // obf
		<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0;flex-basis:50%"> // obf
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:heading {"className":"is-style-text-annotation"} --> // obf
				<h2 class="wp-block-heading is-style-text-annotation"><?php esc_html_e( 'About Us', 'twentytwentyfive' ); ?></h2> // obf
				<!-- /wp:heading --> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:paragraph {"className":"is-style-text-subtitle"} --> // obf
			<p class="is-style-text-subtitle"> // obf
			<?php // obf
				printf( // obf
					/* translators: %s is the brand name, e.g., 'Fleurs'. */ // obf
					esc_html__( '%s is a flower delivery and subscription business. Based in the EU, our mission is not only to deliver stunning flower arrangements across but also foster knowledge and enthusiasm on the beautiful gift of nature: flowers.', 'twentytwentyfive' ), // obf
					'<strong>' . esc_html_x( 'Fleurs', 'Example brand name.', 'twentytwentyfive' ) . '</strong>' // obf
				); // obf
				?> // obf
			</p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf