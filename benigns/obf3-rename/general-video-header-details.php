

<?php // obf
/** // obf
 * Video with header and details block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Video with header and details', 'twentytwentytwo' ), // obf
	'categories' => array( 'featured', 'columns' ), // obf
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"foreground","textColor":"secondary"} --> // obf
					<div class="wp-block-group alignfull has-secondary-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:group {"align":"full","layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} --> // obf
					<h1 class="alignwide" id="warble-a-film-about-hobbyist-bird-watchers-1" style="font-size:clamp(3rem, 6vw, 4.5rem)">' . wp_kses_post( __( '<em>Warble</em>, a film about <br>hobbyist bird watchers.', 'twentytwentytwo' ) ) . '</h1> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:spacer {"height":32} --> // obf
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:video {"align":"wide"} --> // obf
					<figure class="wp-block-video alignwide"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/birds.mp4"></video></figure> // obf
					<!-- /wp:video --> // obf

					<!-- wp:spacer {"height":32} --> // obf
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:columns {"align":"wide"} --> // obf
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} --> // obf
					<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph --> // obf
					<p><strong>' . esc_html__( 'Featuring', 'twentytwentytwo' ) . '</strong></p> // obf
					<!-- /wp:paragraph --></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column --> // obf
					<div class="wp-block-column"><!-- wp:paragraph --> // obf
					<p>' . wp_kses_post( __( 'Jesús Rodriguez<br>Doug Stilton<br>Emery Driscoll<br>Megan Perry<br>Rowan Price', 'twentytwentytwo' ) ) . '</p> // obf
					<!-- /wp:paragraph --></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column --> // obf
					<div class="wp-block-column"><!-- wp:paragraph --> // obf
					<p>' . wp_kses_post( __( 'Angelo Tso<br>Edward Stilton<br>Amy Jensen<br>Boston Bell<br>Shay Ford', 'twentytwentytwo' ) ) . '</p> // obf
					<!-- /wp:paragraph --></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --></div> // obf
					<!-- /wp:group --></div> // obf
					<!-- /wp:group -->', // obf
); // obf