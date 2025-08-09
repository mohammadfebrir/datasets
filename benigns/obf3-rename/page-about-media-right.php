

<?php // obf
/** // obf
 * About page with media on the right // obf
 */ // obf
return array( // obf
	'title'      => __( 'About page with media on the right', 'twentytwentytwo' ), // obf
	'categories' => array( 'twentytwentytwo_pages' ), // obf
	'content'    => '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-black.jpg","mediaType":"image","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background"} --> // obf
				<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile has-background-color has-foreground-background-color has-text-color has-background has-link-color"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/bird-on-black.jpg" alt="' . esc_attr__( 'An image of a bird flying', 'twentytwentytwo' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":32} --> // obf
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
					<!-- wp:site-logo {"width":60} /--> // obf

					<!-- wp:group {"style":{"spacing":{"padding":{"right":"min(8rem, 5vw)","top":"min(20rem, 20vw)"}}}} --> // obf
					<div class="wp-block-group" style="padding-top:min(20rem, 20vw);padding-right:min(8rem, 5vw)"><!-- wp:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} --> // obf
					<h2 style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em>' . wp_kses_post( __( 'Emery<br>Driscoll', 'twentytwentytwo' ) ) . '</em></h2> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} --> // obf
					<p style="line-height:1.6">' . esc_html__( 'Oh hello. My name’s Emery, and you’ve found your way to my website. I’m an avid bird watcher, and I also broadcast my own radio show on Tuesday evenings at 11PM EDT.', 'twentytwentytwo' ) . '</p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:spacer {"height":40} --> // obf
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--wp--preset--color--background)"} --> // obf
					<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"wordpress"} /--> // obf

					<!-- wp:social-link {"url":"#","service":"twitter"} /--> // obf

					<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul> // obf
					<!-- /wp:social-links --></div> // obf
					<!-- /wp:group --></div> // obf

					<!-- wp:spacer {"height":32} --> // obf
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --></div> // obf
					<!-- /wp:media-text -->', // obf
); // obf