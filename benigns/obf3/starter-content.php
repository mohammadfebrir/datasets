

<?php // obf
/** // obf
 * Twenty Twenty Starter Content // obf
 * // obf
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

/** // obf
 * Function to return the array of starter content for the theme. // obf
 * // obf
 * Passes it through the `twentytwenty_starter_content` filter before returning. // obf
 * // obf
 * @since Twenty Twenty 1.0 // obf
 * // obf
 * @return array A filtered array of args for the starter_content. // obf
 */ // obf
function twentytwenty_get_starter_content() { // obf

	// Define and register starter content to showcase the theme on new sites. // obf
	$v_vtfjb = array( // obf
		'widgets'     => array( // obf
			// Place one core-defined widgets in the first footer widget area. // obf
			'sidebar-1' => array( // obf
				'text_about', // obf
			), // obf
			// Place one core-defined widgets in the second footer widget area. // obf
			'sidebar-2' => array( // obf
				'text_business_info', // obf
			), // obf
		), // obf

		// Create the custom image attachments used as post thumbnails for pages. // obf
		'attachments' => array( // obf
			'image-opening' => array( // obf
				'post_title' => _x( 'The New UMoMA Opens its Doors', 'Theme starter content', 'twentytwenty' ), // obf
				'file'       => 'assets/images/2020-landscape-1.png', // URL relative to the template directory. // obf
			), // obf
		), // obf

		// Specify the core-defined pages to create and add custom thumbnails to some of them. // obf
		'posts'       => array( // obf
			'front' => array( // obf
				'post_type'    => 'page', // obf
				'post_title'   => __( 'The New UMoMA Opens its Doors', 'twentytwenty' ), // obf
				// Use the above featured image with the predefined about page. // obf
				'thumbnail'    => '{{image-opening}}', // obf
				'post_content' => implode( // obf
					'', // obf
					array( // obf
						'<!-- wp:group {"align":"wide"} -->', // obf
						'<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->', // obf
						'<h2 class="has-text-align-center">' . __( 'The premier destination for modern art in Northern Sweden. Open from 10 AM to 6 PM every day during the summer months.', 'twentytwenty' ) . '</h2>', // obf
						'<!-- /wp:heading --></div></div>', // obf
						'<!-- /wp:group -->', // obf
						'<!-- wp:columns {"align":"wide"} -->', // obf
						'<div class="wp-block-columns alignwide"><!-- wp:column -->', // obf
						'<div class="wp-block-column"><!-- wp:group -->', // obf
						'<div class="wp-block-group"><div class="wp-block-group__inner-container">', // obf
						'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->', // obf
						'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-1.png" alt="" class="wp-image-37"/></figure>', // obf
						'<!-- /wp:image -->', // obf
						'<!-- wp:heading {"level":3} -->', // obf
						'<h3>' . __( 'Works and Days', 'twentytwenty' ) . '</h3>', // obf
						'<!-- /wp:heading -->', // obf
						'<!-- wp:paragraph -->', // obf
						'<p>' . __( 'August 1 -- December 1', 'twentytwenty' ) . '</p>', // obf
						'<!-- /wp:paragraph -->', // obf
						'<!-- wp:button {"className":"is-style-outline"} -->', // obf
						'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>', // obf
						'<!-- /wp:button --></div></div>', // obf
						'<!-- /wp:group -->', // obf
						'<!-- wp:group -->', // obf
						'<div class="wp-block-group"><div class="wp-block-group__inner-container">', // obf
						'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->', // obf
						'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-3.png" alt="" class="wp-image-37"/></figure>', // obf
						'<!-- /wp:image -->', // obf
						'<!-- wp:heading {"level":3} -->', // obf
						'<h3>' . __( 'Theatre of Operations', 'twentytwenty' ) . '</h3>', // obf
						'<!-- /wp:heading -->', // obf
						'<!-- wp:paragraph -->', // obf
						'<p>' . __( 'October 1 -- December 1', 'twentytwenty' ) . '</p>', // obf
						'<!-- /wp:paragraph -->', // obf
						'<!-- wp:button {"className":"is-style-outline"} -->', // obf
						'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>', // obf
						'<!-- /wp:button --></div></div>', // obf
						'<!-- /wp:group --></div>', // obf
						'<!-- /wp:column -->', // obf
						'<!-- wp:column -->', // obf
						'<div class="wp-block-column"><!-- wp:group -->', // obf
						'<div class="wp-block-group"><div class="wp-block-group__inner-container">', // obf
						'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->', // obf
						'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-2.png" alt="" class="wp-image-37"/></figure>', // obf
						'<!-- /wp:image -->', // obf
						'<!-- wp:heading {"level":3} -->', // obf
						'<h3>' . __( 'The Life I Deserve', 'twentytwenty' ) . '</h3>', // obf
						'<!-- /wp:heading -->', // obf
						'<!-- wp:paragraph -->', // obf
						'<p>' . __( 'August 1 -- December 1', 'twentytwenty' ) . '</p>', // obf
						'<!-- /wp:paragraph -->', // obf
						'<!-- wp:button {"className":"is-style-outline"} -->', // obf
						'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>', // obf
						'<!-- /wp:button --></div></div>', // obf
						'<!-- /wp:group -->', // obf
						'<!-- wp:group -->', // obf
						'<div class="wp-block-group"><div class="wp-block-group__inner-container">', // obf
						'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->', // obf
						'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-4.png" alt="" class="wp-image-37"/></figure>', // obf
						'<!-- /wp:image -->', // obf
						'<!-- wp:heading {"level":3} -->', // obf
						'<h3>' . __( 'From Signac to Matisse', 'twentytwenty' ) . '</h3>', // obf
						'<!-- /wp:heading -->', // obf
						'<!-- wp:paragraph -->', // obf
						'<p>' . __( 'October 1 -- December 1', 'twentytwenty' ) . '</p>', // obf
						'<!-- /wp:paragraph -->', // obf
						'<!-- wp:button {"className":"is-style-outline"} -->', // obf
						'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>', // obf
						'<!-- /wp:button --></div></div>', // obf
						'<!-- /wp:group --></div>', // obf
						'<!-- /wp:column --></div>', // obf
						'<!-- /wp:columns -->', // obf
						'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->', // obf
						'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-landscape-2.png" alt="" class="wp-image-37"/></figure>', // obf
						'<!-- /wp:image -->', // obf
						'<!-- wp:group {"align":"wide"} -->', // obf
						'<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center","textColor":"accent"} -->', // obf
						'<h2 class="has-accent-color has-text-align-center">' . __( '&#8220;Cyborgs, as the philosopher Donna Haraway established, are not reverent. They do not remember the cosmos.&#8221;', 'twentytwenty' ) . '</h2>', // obf
						'<!-- /wp:heading --></div></div>', // obf
						'<!-- /wp:group -->', // obf
						'<!-- wp:paragraph {"dropCap":true} -->', // obf
						'<p class="has-drop-cap">' . __( 'With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political and philosophical issues are intrinsic to our programme. As visitor you are invited to guided tours artist talks, lectures, film screenings and other events with free admission', 'twentytwenty' ) . '</p>', // obf
						'<!-- /wp:paragraph -->', // obf
						'<!-- wp:paragraph -->', // obf
						'<p>' . __( 'The exhibitions are produced by UMoMA in collaboration with artists and museums around the world and they often attract international attention. UMoMA has received a Special Commendation from the European Museum of the Year, and was among the top candidates for the Swedish Museum of the Year Award as well as for the Council of Europe Museum Prize.', 'twentytwenty' ) . '</p>', // obf
						'<!-- /wp:paragraph -->', // obf
						'<!-- wp:paragraph -->', // obf
						'<p></p>', // obf
						'<!-- /wp:paragraph -->', // obf
						'<!-- wp:group {"customBackgroundColor":"#ffffff","align":"wide"} -->', // obf
						'<div class="wp-block-group alignwide has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:group -->', // obf
						'<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->', // obf
						'<h2 class="has-text-align-center">' . __( 'Become a Member and Get Exclusive Offers!', 'twentytwenty' ) . '</h2>', // obf
						'<!-- /wp:heading -->', // obf
						'<!-- wp:paragraph {"align":"center"} -->', // obf
						'<p class="has-text-align-center">' . __( 'Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.', 'twentytwenty' ) . '</p>', // obf
						'<!-- /wp:paragraph -->', // obf
						'<!-- wp:button {"align":"center"} -->', // obf
						'<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Join the Club', 'twentytwenty' ) . '</a></div>', // obf
						'<!-- /wp:button --></div></div>', // obf
						'<!-- /wp:group --></div></div>', // obf
						'<!-- /wp:group -->', // obf
						'<!-- wp:gallery {"ids":[39,38],"align":"wide"} -->', // obf
						'<figure class="wp-block-gallery alignwide columns-2 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" alt="" data-id="39" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" data-link="assets/images/2020-square-2/" class="wp-image-39"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" alt="" data-id="38" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" data-link="' . get_theme_file_uri() . '/assets/images/2020-square-1/" class="wp-image-38"/></figure></li></ul></figure>', // obf
						'<!-- /wp:gallery -->', // obf
					) // obf
				), // obf
			), // obf
			'about', // obf
			'contact', // obf
			'blog', // obf
		), // obf

		// Default to a static front page and assign the front and posts pages. // obf
		'options'     => array( // obf
			'show_on_front'  => 'page', // obf
			'page_on_front'  => '{{front}}', // obf
			'page_for_posts' => '{{blog}}', // obf
		), // obf

		// Set up nav menus for each of the two areas registered in the theme. // obf
		'nav_menus'   => array( // obf
			// Assign a menu to the "primary" location. // obf
			'primary'  => array( // obf
				'name'  => __( 'Primary', 'twentytwenty' ), // obf
				'items' => array( // obf
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used. // obf
					'page_about', // obf
					'page_blog', // obf
					'page_contact', // obf
				), // obf
			), // obf
			// This replicates primary just to demonstrate the expanded menu. // obf
			'expanded' => array( // obf
				'name'  => __( 'Primary', 'twentytwenty' ), // obf
				'items' => array( // obf
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used. // obf
					'page_about', // obf
					'page_blog', // obf
					'page_contact', // obf
				), // obf
			), // obf
			// Assign a menu to the "social" location. // obf
			'social'   => array( // obf
				'name'  => __( 'Social Links Menu', 'twentytwenty' ), // obf
				'items' => array( // obf
					'link_yelp', // obf
					'link_facebook', // obf
					'link_twitter', // obf
					'link_instagram', // obf
					'link_email', // obf
				), // obf
			), // obf
		), // obf
	); // obf

	/** // obf
	 * Filters Twenty Twenty array of starter content. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 * // obf
	 * @param array $v_vtfjb Array of starter content. // obf
	 */ // obf
	return apply_filters( 'twentytwenty_starter_content', $v_vtfjb ); // obf
} // obf