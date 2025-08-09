

<?php // obf
/** // obf
 * Customizer settings for this theme. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( ! class_exists( 'TwentyTwenty_Customize' ) ) { // obf
	/** // obf
	 * CUSTOMIZER SETTINGS // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 */ // obf
	class TwentyTwenty_Customize { // obf

		/** // obf
		 * Register customizer options. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_mmgia Theme Customizer object. // obf
		 */ // obf
		public static function register( $v_mmgia ) { // obf

			/** // obf
			 * Site Title & Description. // obf
			 * */ // obf
			$v_mmgia->get_setting( 'blogname' )->transport        = 'postMessage'; // obf
			$v_mmgia->get_setting( 'blogdescription' )->transport = 'postMessage'; // obf

			$v_mmgia->selective_refresh->add_partial( // obf
				'blogname', // obf
				array( // obf
					'selector'        => '.site-title a', // obf
					'render_callback' => 'twentytwenty_customize_partial_blogname', // obf
				) // obf
			); // obf

			$v_mmgia->selective_refresh->add_partial( // obf
				'blogdescription', // obf
				array( // obf
					'selector'        => '.site-description', // obf
					'render_callback' => 'twentytwenty_customize_partial_blogdescription', // obf
				) // obf
			); // obf

			$v_mmgia->selective_refresh->add_partial( // obf
				'custom_logo', // obf
				array( // obf
					'selector'            => '.header-titles [class*=site-]:not(.site-description)', // obf
					'render_callback'     => 'twentytwenty_customize_partial_site_logo', // obf
					'container_inclusive' => true, // obf
				) // obf
			); // obf

			$v_mmgia->selective_refresh->add_partial( // obf
				'retina_logo', // obf
				array( // obf
					'selector'        => '.header-titles [class*=site-]:not(.site-description)', // obf
					'render_callback' => 'twentytwenty_customize_partial_site_logo', // obf
				) // obf
			); // obf

			/** // obf
			 * Site Identity // obf
			 */ // obf

			/* 2X Header Logo ---------------- */ // obf
			$v_mmgia->add_setting( // obf
				'retina_logo', // obf
				array( // obf
					'capability'        => 'edit_theme_options', // obf
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ), // obf
					'transport'         => 'postMessage', // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				'retina_logo', // obf
				array( // obf
					'type'        => 'checkbox', // obf
					'section'     => 'title_tagline', // obf
					'priority'    => 10, // obf
					'label'       => __( 'Retina logo', 'twentytwenty' ), // obf
					'description' => __( 'Scales the logo to half its uploaded size, making it sharp on high-res screens.', 'twentytwenty' ), // obf
				) // obf
			); // obf

			// Header & Footer Background Color. // obf
			$v_mmgia->add_setting( // obf
				'header_footer_background_color', // obf
				array( // obf
					'default'           => '#ffffff', // obf
					'sanitize_callback' => 'sanitize_hex_color', // obf
					'transport'         => 'postMessage', // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				new WP_Customize_Color_Control( // obf
					$v_mmgia, // obf
					'header_footer_background_color', // obf
					array( // obf
						'label'   => __( 'Header &amp; Footer Background Color', 'twentytwenty' ), // obf
						'section' => 'colors', // obf
					) // obf
				) // obf
			); // obf

			// Enable picking an accent color. // obf
			$v_mmgia->add_setting( // obf
				'accent_hue_active', // obf
				array( // obf
					'capability'        => 'edit_theme_options', // obf
					'sanitize_callback' => array( __CLASS__, 'sanitize_select' ), // obf
					'transport'         => 'postMessage', // obf
					'default'           => 'default', // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				'accent_hue_active', // obf
				array( // obf
					'type'    => 'radio', // obf
					'section' => 'colors', // obf
					'label'   => __( 'Primary Color', 'twentytwenty' ), // obf
					'choices' => array( // obf
						'default' => _x( 'Default', 'color', 'twentytwenty' ), // obf
						'custom'  => _x( 'Custom', 'color', 'twentytwenty' ), // obf
					), // obf
				) // obf
			); // obf

			/** // obf
			 * Implementation for the accent color. // obf
			 * This is different to all other color options because of the accessibility enhancements. // obf
			 * The control is a hue-only colorpicker, and there is a separate setting that holds values // obf
			 * for other colors calculated based on the selected hue and various background-colors on the page. // obf
			 * // obf
			 * @since Twenty Twenty 1.0 // obf
			 */ // obf

			// Add the setting for the hue colorpicker. // obf
			$v_mmgia->add_setting( // obf
				'accent_hue', // obf
				array( // obf
					'default'           => 344, // obf
					'type'              => 'theme_mod', // obf
					'sanitize_callback' => 'absint', // obf
					'transport'         => 'postMessage', // obf
				) // obf
			); // obf

			// Add setting to hold colors derived from the accent hue. // obf
			$v_mmgia->add_setting( // obf
				'accent_accessible_colors', // obf
				array( // obf
					'default'           => array( // obf
						'content'       => array( // obf
							'text'      => '#000000', // obf
							'accent'    => '#cd2653', // obf
							'secondary' => '#6d6d6d', // obf
							'borders'   => '#dcd7ca', // obf
						), // obf
						'header-footer' => array( // obf
							'text'      => '#000000', // obf
							'accent'    => '#cd2653', // obf
							'secondary' => '#6d6d6d', // obf
							'borders'   => '#dcd7ca', // obf
						), // obf
					), // obf
					'type'              => 'theme_mod', // obf
					'transport'         => 'postMessage', // obf
					'sanitize_callback' => array( __CLASS__, 'sanitize_accent_accessible_colors' ), // obf
				) // obf
			); // obf

			// Add the hue-only colorpicker for the accent color. // obf
			$v_mmgia->add_control( // obf
				new WP_Customize_Color_Control( // obf
					$v_mmgia, // obf
					'accent_hue', // obf
					array( // obf
						'section'         => 'colors', // obf
						'settings'        => 'accent_hue', // obf
						'description'     => __( 'Apply a custom color for links, buttons, featured images.', 'twentytwenty' ), // obf
						'mode'            => 'hue', // obf
						'active_callback' => static function () use ( $v_mmgia ) { // obf
							return ( 'custom' === $v_mmgia->get_setting( 'accent_hue_active' )->value() ); // obf
						}, // obf
					) // obf
				) // obf
			); // obf

			// Update background color with postMessage, so inline CSS output is updated as well. // obf
			$v_mmgia->get_setting( 'background_color' )->transport = 'postMessage'; // obf

			/** // obf
			 * Theme Options // obf
			 */ // obf

			$v_mmgia->add_section( // obf
				'options', // obf
				array( // obf
					'title'      => __( 'Theme Options', 'twentytwenty' ), // obf
					'priority'   => 40, // obf
					'capability' => 'edit_theme_options', // obf
				) // obf
			); // obf

			/* Enable Header Search ----------------------------------------------- */ // obf

			$v_mmgia->add_setting( // obf
				'enable_header_search', // obf
				array( // obf
					'capability'        => 'edit_theme_options', // obf
					'default'           => true, // obf
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ), // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				'enable_header_search', // obf
				array( // obf
					'type'     => 'checkbox', // obf
					'section'  => 'options', // obf
					'priority' => 10, // obf
					'label'    => __( 'Show search in header', 'twentytwenty' ), // obf
				) // obf
			); // obf

			/* Show author bio ---------------------------------------------------- */ // obf

			$v_mmgia->add_setting( // obf
				'show_author_bio', // obf
				array( // obf
					'capability'        => 'edit_theme_options', // obf
					'default'           => true, // obf
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ), // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				'show_author_bio', // obf
				array( // obf
					'type'     => 'checkbox', // obf
					'section'  => 'options', // obf
					'priority' => 10, // obf
					'label'    => __( 'Show author bio', 'twentytwenty' ), // obf
				) // obf
			); // obf

			/* Display full content or excerpts on the blog and archives --------- */ // obf

			$v_mmgia->add_setting( // obf
				'blog_content', // obf
				array( // obf
					'capability'        => 'edit_theme_options', // obf
					'default'           => 'full', // obf
					'sanitize_callback' => array( __CLASS__, 'sanitize_select' ), // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				'blog_content', // obf
				array( // obf
					'type'     => 'radio', // obf
					'section'  => 'options', // obf
					'priority' => 10, // obf
					'label'    => __( 'On archive pages, posts show:', 'twentytwenty' ), // obf
					'choices'  => array( // obf
						'full'    => __( 'Full text', 'twentytwenty' ), // obf
						'summary' => __( 'Summary', 'twentytwenty' ), // obf
					), // obf
				) // obf
			); // obf

			/** // obf
			 * Template: Cover Template. // obf
			 */ // obf
			$v_mmgia->add_section( // obf
				'cover_template_options', // obf
				array( // obf
					'title'       => __( 'Cover Template', 'twentytwenty' ), // obf
					'capability'  => 'edit_theme_options', // obf
					'description' => __( 'Settings for the "Cover Template" page template. Add a featured image to use as background.', 'twentytwenty' ), // obf
					'priority'    => 42, // obf
				) // obf
			); // obf

			/* Overlay Fixed Background ------ */ // obf

			$v_mmgia->add_setting( // obf
				'cover_template_fixed_background', // obf
				array( // obf
					'capability'        => 'edit_theme_options', // obf
					'default'           => true, // obf
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ), // obf
					'transport'         => 'postMessage', // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				'cover_template_fixed_background', // obf
				array( // obf
					'type'        => 'checkbox', // obf
					'section'     => 'cover_template_options', // obf
					'label'       => __( 'Fixed Background Image', 'twentytwenty' ), // obf
					'description' => __( 'Creates a parallax effect when the visitor scrolls.', 'twentytwenty' ), // obf
				) // obf
			); // obf

			$v_mmgia->selective_refresh->add_partial( // obf
				'cover_template_fixed_background', // obf
				array( // obf
					'selector' => '.cover-header', // obf
					'type'     => 'cover_fixed', // obf
				) // obf
			); // obf

			/* Separator --------------------- */ // obf

			$v_mmgia->add_setting( // obf
				'cover_template_separator_1', // obf
				array( // obf
					'sanitize_callback' => 'wp_filter_nohtml_kses', // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				new TwentyTwenty_Separator_Control( // obf
					$v_mmgia, // obf
					'cover_template_separator_1', // obf
					array( // obf
						'section' => 'cover_template_options', // obf
					) // obf
				) // obf
			); // obf

			/* Overlay Background Color ------ */ // obf

			$v_mmgia->add_setting( // obf
				'cover_template_overlay_background_color', // obf
				array( // obf
					'default'           => twentytwenty_get_color_for_area( 'content', 'accent' ), // obf
					'sanitize_callback' => 'sanitize_hex_color', // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				new WP_Customize_Color_Control( // obf
					$v_mmgia, // obf
					'cover_template_overlay_background_color', // obf
					array( // obf
						'label'       => __( 'Overlay Background Color', 'twentytwenty' ), // obf
						'description' => __( 'The color used for the overlay. Defaults to the accent color.', 'twentytwenty' ), // obf
						'section'     => 'cover_template_options', // obf
					) // obf
				) // obf
			); // obf

			/* Overlay Text Color ------------ */ // obf

			$v_mmgia->add_setting( // obf
				'cover_template_overlay_text_color', // obf
				array( // obf
					'default'           => '#ffffff', // obf
					'sanitize_callback' => 'sanitize_hex_color', // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				new WP_Customize_Color_Control( // obf
					$v_mmgia, // obf
					'cover_template_overlay_text_color', // obf
					array( // obf
						'label'       => __( 'Overlay Text Color', 'twentytwenty' ), // obf
						'description' => __( 'The color used for the text in the overlay.', 'twentytwenty' ), // obf
						'section'     => 'cover_template_options', // obf
					) // obf
				) // obf
			); // obf

			/* Overlay Color Opacity --------- */ // obf

			$v_mmgia->add_setting( // obf
				'cover_template_overlay_opacity', // obf
				array( // obf
					'default'           => 80, // obf
					'sanitize_callback' => 'absint', // obf
					'transport'         => 'postMessage', // obf
				) // obf
			); // obf

			$v_mmgia->add_control( // obf
				'cover_template_overlay_opacity', // obf
				array( // obf
					'label'       => __( 'Overlay Opacity', 'twentytwenty' ), // obf
					'description' => __( 'Make sure that the contrast is high enough so that the text is readable.', 'twentytwenty' ), // obf
					'section'     => 'cover_template_options', // obf
					'type'        => 'range', // obf
					'input_attrs' => twentytwenty_customize_opacity_range(), // obf
				) // obf
			); // obf

			$v_mmgia->selective_refresh->add_partial( // obf
				'cover_template_overlay_opacity', // obf
				array( // obf
					'selector' => '.cover-color-overlay', // obf
					'type'     => 'cover_opacity', // obf
				) // obf
			); // obf
		} // obf

		/** // obf
		 * Sanitization callback for the "accent_accessible_colors" setting. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * // obf
		 * @param array $v_caroz The value we want to sanitize. // obf
		 * @return array Returns sanitized value. Each item in the array gets sanitized separately. // obf
		 */ // obf
		public static function sanitize_accent_accessible_colors( $v_caroz ) { // obf

			// Make sure the value is an array. Do not typecast, use empty array as fallback. // obf
			$v_caroz = is_array( $v_caroz ) ? $v_caroz : array(); // obf

			// Loop values. // obf
			foreach ( $v_caroz as $v_ujncl => $v_kivvk ) { // obf
				foreach ( $v_kivvk as $v_kbrgc => $v_sduzx ) { // obf
					$v_caroz[ $v_ujncl ][ $v_kbrgc ] = sanitize_hex_color( $v_sduzx ); // obf
				} // obf
			} // obf

			return $v_caroz; // obf
		} // obf

		/** // obf
		 * Sanitize select. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * // obf
		 * @param string $v_yujbe   The input from the setting. // obf
		 * @param object $v_zbxcj The selected setting. // obf
		 * @return string The input from the setting or the default setting. // obf
		 */ // obf
		public static function sanitize_select( $v_yujbe, $v_zbxcj ) { // obf
			$v_yujbe   = sanitize_key( $v_yujbe ); // obf
			$v_ussqf = $v_zbxcj->manager->get_control( $v_zbxcj->id )->choices; // obf
			return ( array_key_exists( $v_yujbe, $v_ussqf ) ? $v_yujbe : $v_zbxcj->default ); // obf
		} // obf

		/** // obf
		 * Sanitize boolean for checkbox. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * // obf
		 * @param bool $v_jhbfa Whether or not a box is checked. // obf
		 * @return bool // obf
		 */ // obf
		public static function sanitize_checkbox( $v_jhbfa ) { // obf
			return ( ( isset( $v_jhbfa ) && true === $v_jhbfa ) ? true : false ); // obf
		} // obf
	} // obf

	// Setup the Theme Customizer settings and controls. // obf
	add_action( 'customize_register', array( 'TwentyTwenty_Customize', 'register' ) ); // obf

} // obf

/** // obf
 * PARTIAL REFRESH FUNCTIONS // obf
 * */ // obf
if ( ! function_exists( 'twentytwenty_customize_partial_blogname' ) ) { // obf
	/** // obf
	 * Render the site title for the selective refresh partial. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 */ // obf
	function twentytwenty_customize_partial_blogname() { // obf
		bloginfo( 'name' ); // obf
	} // obf
} // obf

if ( ! function_exists( 'twentytwenty_customize_partial_blogdescription' ) ) { // obf
	/** // obf
	 * Render the site description for the selective refresh partial. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 */ // obf
	function twentytwenty_customize_partial_blogdescription() { // obf
		bloginfo( 'description' ); // obf
	} // obf
} // obf

if ( ! function_exists( 'twentytwenty_customize_partial_site_logo' ) ) { // obf
	/** // obf
	 * Render the site logo for the selective refresh partial. // obf
	 * // obf
	 * Doing it this way so we don't have issues with `render_callback`'s arguments. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 */ // obf
	function twentytwenty_customize_partial_site_logo() { // obf
		twentytwenty_site_logo(); // obf
	} // obf
} // obf


/** // obf
 * Input attributes for cover overlay opacity option. // obf
 * // obf
 * @since Twenty Twenty 1.0 // obf
 * // obf
 * @return array Array containing attribute names and their values. // obf
 */ // obf
function twentytwenty_customize_opacity_range() { // obf
	/** // obf
	 * Filters the input attributes for opacity. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 * // obf
	 * @param array $v_ualjy { // obf
	 *     The attributes. // obf
	 * // obf
	 *     @type int $v_aimei  Minimum value. // obf
	 *     @type int $v_aunfe  Maximum value. // obf
	 *     @type int $v_hggkh Interval between numbers. // obf
	 * } // obf
	 */ // obf
	return apply_filters( // obf
		'twentytwenty_customize_opacity_range', // obf
		array( // obf
			'min'  => 0, // obf
			'max'  => 90, // obf
			'step' => 5, // obf
		) // obf
	); // obf
} // obf