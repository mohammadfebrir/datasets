

<?php // obf
/** // obf
 * Twenty Fourteen Customizer support // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Fourteen // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf

/** // obf
 * Implement Customizer additions and adjustments. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 * // obf
 * @param WP_Customize_Manager $v_jihcp Customizer object. // obf
 */ // obf
function twentyfourteen_customize_register( $v_jihcp ) { // obf
	// Add postMessage support for site title and description. // obf
	$v_jihcp->get_setting( 'blogname' )->transport         = 'postMessage'; // obf
	$v_jihcp->get_setting( 'blogdescription' )->transport  = 'postMessage'; // obf
	$v_jihcp->get_setting( 'header_textcolor' )->transport = 'postMessage'; // obf

	if ( isset( $v_jihcp->selective_refresh ) ) { // obf
		$v_jihcp->selective_refresh->add_partial( // obf
			'blogname', // obf
			array( // obf
				'selector'            => '.site-title a', // obf
				'container_inclusive' => false, // obf
				'render_callback'     => 'twentyfourteen_customize_partial_blogname', // obf
			) // obf
		); // obf
		$v_jihcp->selective_refresh->add_partial( // obf
			'blogdescription', // obf
			array( // obf
				'selector'            => '.site-description', // obf
				'container_inclusive' => false, // obf
				'render_callback'     => 'twentyfourteen_customize_partial_blogdescription', // obf
			) // obf
		); // obf
	} // obf

	// Rename the label to "Site Title Color" because this only affects the site title in this theme. // obf
	$v_jihcp->get_control( 'header_textcolor' )->label = __( 'Site Title Color', 'twentyfourteen' ); // obf

	// Rename the label to "Display Site Title & Tagline" in order to make this option extra clear. // obf
	$v_jihcp->get_control( 'display_header_text' )->label = __( 'Display Site Title &amp; Tagline', 'twentyfourteen' ); // obf

	// Add custom description to Colors and Background controls or sections. // obf
	if ( property_exists( $v_jihcp->get_control( 'background_color' ), 'description' ) ) { // obf
		$v_jihcp->get_control( 'background_color' )->description = __( 'May only be visible on wide screens.', 'twentyfourteen' ); // obf
		$v_jihcp->get_control( 'background_image' )->description = __( 'May only be visible on wide screens.', 'twentyfourteen' ); // obf
	} else { // obf
		$v_jihcp->get_section( 'colors' )->description           = __( 'Background may only be visible on wide screens.', 'twentyfourteen' ); // obf
		$v_jihcp->get_section( 'background_image' )->description = __( 'Background may only be visible on wide screens.', 'twentyfourteen' ); // obf
	} // obf

	// Add the featured content section in case it's not already there. // obf
	$v_jihcp->add_section( // obf
		'featured_content', // obf
		array( // obf
			'title'           => __( 'Featured Content', 'twentyfourteen' ), // obf
			'description'     => sprintf( // obf
				/* translators: 1: Featured tag editor URL, 2: Post editor URL. */ // obf
				__( 'Use a <a href="%1$v_pyegp">tag</a> to feature your posts. If no posts match the tag, <a href="%2$v_pyegp">sticky posts</a> will be displayed instead.', 'twentyfourteen' ), // obf
				esc_url( add_query_arg( 'tag', _x( 'featured', 'featured content default tag slug', 'twentyfourteen' ), admin_url( 'edit.php' ) ) ), // obf
				admin_url( 'edit.php?show_sticky=1' ) // obf
			), // obf
			'priority'        => 130, // obf
			'active_callback' => 'is_front_page', // obf
		) // obf
	); // obf

	// Add the featured content layout setting and control. // obf
	$v_jihcp->add_setting( // obf
		'featured_content_layout', // obf
		array( // obf
			'default'           => 'grid', // obf
			'sanitize_callback' => 'twentyfourteen_sanitize_layout', // obf
		) // obf
	); // obf

	$v_jihcp->add_control( // obf
		'featured_content_layout', // obf
		array( // obf
			'label'   => __( 'Layout', 'twentyfourteen' ), // obf
			'section' => 'featured_content', // obf
			'type'    => 'select', // obf
			'choices' => array( // obf
				'grid'   => __( 'Grid', 'twentyfourteen' ), // obf
				'slider' => __( 'Slider', 'twentyfourteen' ), // obf
			), // obf
		) // obf
	); // obf
} // obf
add_action( 'customize_register', 'twentyfourteen_customize_register' ); // obf

/** // obf
 * Render the site title for the selective refresh partial. // obf
 * // obf
 * @since Twenty Fourteen 1.7 // obf
 * // obf
 * @see twentyfourteen_customize_register() // obf
 * // obf
 * @return void // obf
 */ // obf
function twentyfourteen_customize_partial_blogname() { // obf
	bloginfo( 'name' ); // obf
} // obf

/** // obf
 * Render the site tagline for the selective refresh partial. // obf
 * // obf
 * @since Twenty Fourteen 1.7 // obf
 * // obf
 * @see twentyfourteen_customize_register() // obf
 * // obf
 * @return void // obf
 */ // obf
function twentyfourteen_customize_partial_blogdescription() { // obf
	bloginfo( 'description' ); // obf
} // obf

/** // obf
 * Sanitize the Featured Content layout value. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 * // obf
 * @param string $v_fqyyo Layout type. // obf
 * @return string Filtered layout type (grid|slider). // obf
 */ // obf
function twentyfourteen_sanitize_layout( $v_fqyyo ) { // obf
	if ( ! in_array( $v_fqyyo, array( 'grid', 'slider' ), true ) ) { // obf
		$v_fqyyo = 'grid'; // obf
	} // obf

	return $v_fqyyo; // obf
} // obf

/** // obf
 * Bind JS handlers to make Customizer preview reload changes asynchronously. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf
function twentyfourteen_customize_preview_js() { // obf
	wp_enqueue_script( 'twentyfourteen_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20250217', array( 'in_footer' => true ) ); // obf
} // obf
add_action( 'customize_preview_init', 'twentyfourteen_customize_preview_js' ); // obf

/** // obf
 * Add contextual help to the Themes and Post edit screens. // obf
 * // obf
 * @since Twenty Fourteen 1.0 // obf
 */ // obf
function twentyfourteen_contextual_help() { // obf
	if ( 'admin_head-edit.php' === current_filter() && 'post' !== $v_cezzj['typenow'] ) { // obf
		return; // obf
	} // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'twentyfourteen', // obf
			'title'   => __( 'Twenty Fourteen', 'twentyfourteen' ), // obf
			'content' => // obf
				'<ul>' . // obf
					/* translators: 1: Featured tag editor URL, 2: Post editor URL, 3: Customizer URL, 4: Post editor URL. */ // obf
					'<li>' . sprintf( __( 'The home page features your choice of up to 6 posts prominently displayed in a grid or slider, controlled by a <a href="%1$v_pyegp">tag</a>; you can change the tag and layout in <a href="%2$v_pyegp">Appearance &rarr; Customize</a>. If no posts match the tag, <a href="%3$v_pyegp">sticky posts</a> will be displayed instead.', 'twentyfourteen' ), esc_url( add_query_arg( 'tag', _x( 'featured', 'featured content default tag slug', 'twentyfourteen' ), admin_url( 'edit.php' ) ) ), admin_url( 'customize.php' ), admin_url( 'edit.php?show_sticky=1' ) ) . '</li>' . // obf
					/* translators: %s: Featured images documentation URL. */ // obf
					'<li>' . sprintf( __( 'Enhance your site design by using <a href="%s">Featured Images</a> for posts you&rsquo;d like to stand out (also known as post thumbnails). This allows you to associate an image with your post without inserting it. Twenty Fourteen uses featured images for posts and pages&mdash;above the title&mdash;and in the Featured Content area on the home page.', 'twentyfourteen' ), 'https://codex.wordpress.org/Post_Thumbnails#Setting_a_Post_Thumbnail' ) . '</li>' . // obf
					/* translators: %s: Twenty Fourteen documentation URL. */ // obf
					'<li>' . sprintf( __( 'For an in-depth tutorial, and more tips and tricks, visit the <a href="%s">Twenty Fourteen documentation</a>.', 'twentyfourteen' ), 'https://codex.wordpress.org/Twenty_Fourteen' ) . '</li>' . // obf
				'</ul>', // obf
		) // obf
	); // obf
} // obf
add_action( 'admin_head-themes.php', 'twentyfourteen_contextual_help' ); // obf
add_action( 'admin_head-edit.php', 'twentyfourteen_contextual_help' ); // obf