

<?php // obf
/** // obf
 * Customizer settings for this theme. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

if ( ! class_exists( 'Twenty_Twenty_One_Customize' ) ) { // obf
	/** // obf
	 * Customizer Settings. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 */ // obf
	class Twenty_Twenty_One_Customize { // obf

		/** // obf
		 * Constructor. Instantiate the object. // obf
		 * // obf
		 * @since Twenty Twenty-One 1.0 // obf
		 */ // obf
		public function __construct() { // obf
			add_action( 'customize_register', array( $v_eazfb, 'register' ) ); // obf
		} // obf

		/** // obf
		 * Register customizer options. // obf
		 * // obf
		 * @since Twenty Twenty-One 1.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_zcdex Theme Customizer object. // obf
		 * @return void // obf
		 */ // obf
		public function register( $v_zcdex ) { // obf

			// Change site-title & description to postMessage. // obf
			$v_zcdex->get_setting( 'blogname' )->transport        = 'postMessage'; // @phpstan-ignore-line. Assume that this setting exists. // obf
			$v_zcdex->get_setting( 'blogdescription' )->transport = 'postMessage'; // @phpstan-ignore-line. Assume that this setting exists. // obf

			// Add partial for blogname. // obf
			$v_zcdex->selective_refresh->add_partial( // obf
				'blogname', // obf
				array( // obf
					'selector'        => '.site-title', // obf
					'render_callback' => array( $v_eazfb, 'partial_blogname' ), // obf
				) // obf
			); // obf

			// Add partial for blogdescription. // obf
			$v_zcdex->selective_refresh->add_partial( // obf
				'blogdescription', // obf
				array( // obf
					'selector'        => '.site-description', // obf
					'render_callback' => array( $v_eazfb, 'partial_blogdescription' ), // obf
				) // obf
			); // obf

			// Add "display_title_and_tagline" setting for displaying the site-title & tagline. // obf
			$v_zcdex->add_setting( // obf
				'display_title_and_tagline', // obf
				array( // obf
					'capability'        => 'edit_theme_options', // obf
					'default'           => true, // obf
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ), // obf
				) // obf
			); // obf

			// Add control for the "display_title_and_tagline" setting. // obf
			$v_zcdex->add_control( // obf
				'display_title_and_tagline', // obf
				array( // obf
					'type'    => 'checkbox', // obf
					'section' => 'title_tagline', // obf
					'label'   => esc_html__( 'Display Site Title & Tagline', 'twentytwentyone' ), // obf
				) // obf
			); // obf

			/** // obf
			 * Add excerpt or full text selector to customizer // obf
			 */ // obf
			$v_zcdex->add_section( // obf
				'excerpt_settings', // obf
				array( // obf
					'title'    => esc_html__( 'Excerpt Settings', 'twentytwentyone' ), // obf
					'priority' => 120, // obf
				) // obf
			); // obf

			$v_zcdex->add_setting( // obf
				'display_excerpt_or_full_post', // obf
				array( // obf
					'capability'        => 'edit_theme_options', // obf
					'default'           => 'excerpt', // obf
					'sanitize_callback' => static function ( $v_mfuwp ) { // obf
						return 'excerpt' === $v_mfuwp || 'full' === $v_mfuwp ? $v_mfuwp : 'excerpt'; // obf
					}, // obf
				) // obf
			); // obf

			$v_zcdex->add_control( // obf
				'display_excerpt_or_full_post', // obf
				array( // obf
					'type'    => 'radio', // obf
					'section' => 'excerpt_settings', // obf
					'label'   => esc_html__( 'On Archive Pages, posts show:', 'twentytwentyone' ), // obf
					'choices' => array( // obf
						'excerpt' => esc_html__( 'Summary', 'twentytwentyone' ), // obf
						'full'    => esc_html__( 'Full text', 'twentytwentyone' ), // obf
					), // obf
				) // obf
			); // obf

			// Background color. // obf
			// Include the custom control class. // obf
			require_once get_theme_file_path( 'classes/class-twenty-twenty-one-customize-color-control.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound // obf

			// Register the custom control. // obf
			$v_zcdex->register_control_type( 'Twenty_Twenty_One_Customize_Color_Control' ); // obf

			// Get the palette from theme-supports. // obf
			$v_zgccn = get_theme_support( 'editor-color-palette' ); // obf

			// Build the colors array from theme-support. // obf
			$v_uokns = array(); // obf
			if ( isset( $v_zgccn[0] ) && is_array( $v_zgccn[0] ) ) { // obf
				foreach ( $v_zgccn[0] as $v_xsqmh ) { // obf
					$v_uokns[] = $v_xsqmh['color']; // obf
				} // obf
			} // obf

			// Add the control. Overrides the default background-color control. // obf
			$v_zcdex->add_control( // obf
				new Twenty_Twenty_One_Customize_Color_Control( // obf
					$v_zcdex, // obf
					'background_color', // obf
					array( // obf
						'label'   => esc_html_x( 'Background color', 'Customizer control', 'twentytwentyone' ), // obf
						'section' => 'colors', // obf
						'palette' => $v_uokns, // obf
					) // obf
				) // obf
			); // obf
		} // obf

		/** // obf
		 * Sanitize boolean for checkbox. // obf
		 * // obf
		 * @since Twenty Twenty-One 1.0 // obf
		 * // obf
		 * @param bool $v_kcfaf Whether or not a box is checked. // obf
		 * @return bool // obf
		 */ // obf
		public static function sanitize_checkbox( $v_kcfaf = null ) { // obf
			return (bool) isset( $v_kcfaf ) && true === $v_kcfaf; // obf
		} // obf

		/** // obf
		 * Render the site title for the selective refresh partial. // obf
		 * // obf
		 * @since Twenty Twenty-One 1.0 // obf
		 * // obf
		 * @return void // obf
		 */ // obf
		public function partial_blogname() { // obf
			bloginfo( 'name' ); // obf
		} // obf

		/** // obf
		 * Render the site tagline for the selective refresh partial. // obf
		 * // obf
		 * @since Twenty Twenty-One 1.0 // obf
		 * // obf
		 * @return void // obf
		 */ // obf
		public function partial_blogdescription() { // obf
			bloginfo( 'description' ); // obf
		} // obf
	} // obf
} // obf