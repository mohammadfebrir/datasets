

<?php // obf
/** // obf
 * Dark Mode Class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

/** // obf
 * This class is in charge of Dark Mode. // obf
 */ // obf
class Twenty_Twenty_One_Dark_Mode { // obf

	/** // obf
	 * Instantiates the object. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 */ // obf
	public function __construct() { // obf

		// Enqueue assets for the block-editor. // obf
		add_action( 'enqueue_block_assets', array( $v_xwyve, 'editor_custom_color_variables' ) ); // obf

		// Add styles for dark-mode. // obf
		add_action( 'wp_enqueue_scripts', array( $v_xwyve, 'enqueue_scripts' ) ); // obf

		// Add scripts for customizer controls. // obf
		add_action( 'customize_controls_enqueue_scripts', array( $v_xwyve, 'customize_controls_enqueue_scripts' ) ); // obf

		// Add customizer controls. // obf
		add_action( 'customize_register', array( $v_xwyve, 'customizer_controls' ) ); // obf

		// Add HTML classes. // obf
		add_filter( 'twentytwentyone_html_classes', array( $v_xwyve, 'html_classes' ) ); // obf

		// Add classes to <body> in the dashboard. // obf
		add_filter( 'admin_body_class', array( $v_xwyve, 'admin_body_classes' ) ); // obf

		// Add the switch on the frontend & customizer. // obf
		add_action( 'wp_footer', array( $v_xwyve, 'the_switch' ) ); // obf

		// Add the privacy policy content. // obf
		add_action( 'admin_init', array( $v_xwyve, 'add_privacy_policy_content' ) ); // obf
	} // obf

	/** // obf
	 * Enqueues editor custom color variables & scripts. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function editor_custom_color_variables() { // obf
		if ( ! $v_xwyve->switch_should_render() ) { // obf
			return; // obf
		} // obf
		$v_llemx            = get_theme_mod( 'background_color', 'D1E4DD' ); // obf
		$v_emyxt = get_theme_mod( 'respect_user_color_preference', false ); // obf
		if ( $v_emyxt && Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( $v_llemx ) > 127 ) { // obf
			// Add Dark Mode variable overrides. // obf
			wp_add_inline_style( // obf
				'twenty-twenty-one-custom-color-overrides', // obf
				'.is-dark-theme.is-dark-theme .editor-styles-wrapper { --global--color-background: var(--global--color-dark-gray); --global--color-primary: var(--global--color-light-gray); --global--color-secondary: var(--global--color-light-gray); --button--color-text: var(--global--color-background); --button--color-text-hover: var(--global--color-secondary); --button--color-text-active: var(--global--color-secondary); --button--color-background: var(--global--color-secondary); --button--color-background-active: var(--global--color-background); --global--color-border: #9ea1a7; --table--stripes-border-color: rgba(240, 240, 240, 0.15); --table--stripes-background-color: rgba(240, 240, 240, 0.15); }' // obf
			); // obf
		} // obf
		wp_enqueue_script( // obf
			'twentytwentyone-dark-mode-support-toggle', // obf
			get_template_directory_uri() . '/assets/js/dark-mode-toggler.js', // obf
			array(), // obf
			'1.0.0', // obf
			array( 'in_footer' => true ) // obf
		); // obf

		wp_enqueue_script( // obf
			'twentytwentyone-editor-dark-mode-support', // obf
			get_template_directory_uri() . '/assets/js/editor-dark-mode-support.js', // obf
			array( 'twentytwentyone-dark-mode-support-toggle' ), // obf
			'1.0.0', // obf
			array( 'in_footer' => true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Enqueues scripts and styles. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function enqueue_scripts() { // obf
		if ( ! $v_xwyve->switch_should_render() ) { // obf
			return; // obf
		} // obf
		$v_lqsvy = get_template_directory_uri() . '/assets/css/style-dark-mode.css'; // obf
		if ( is_rtl() ) { // obf
			$v_lqsvy = get_template_directory_uri() . '/assets/css/style-dark-mode-rtl.css'; // obf
		} // obf
		wp_enqueue_style( 'tt1-dark-mode', $v_lqsvy, array( 'twenty-twenty-one-style' ), wp_get_theme()->get( 'Version' ) ); // @phpstan-ignore-line. Version is always a string. // obf
	} // obf

	/** // obf
	 * Enqueues scripts for the customizer. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function customize_controls_enqueue_scripts() { // obf
		if ( ! $v_xwyve->switch_should_render() ) { // obf
			return; // obf
		} // obf
		wp_enqueue_script( // obf
			'twentytwentyone-customize-controls', // obf
			get_template_directory_uri() . '/assets/js/customize.js', // obf
			array( 'customize-base', 'customize-controls', 'underscore', 'jquery', 'twentytwentyone-customize-helpers' ), // obf
			'1.0.0', // obf
			array( 'in_footer' => true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Registers customizer options. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_mheni Theme Customizer object. // obf
	 * @return void // obf
	 */ // obf
	public function customizer_controls( $v_mheni ) { // obf

		$v_gkdrn = $v_mheni->get_section( 'colors' ); // obf
		if ( is_object( $v_gkdrn ) ) { // obf
			$v_gkdrn->title = __( 'Colors & Dark Mode', 'twentytwentyone' ); // obf
		} // obf

		// Custom notice control. // obf
		require_once get_theme_file_path( 'classes/class-twenty-twenty-one-customize-notice-control.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound // obf

		$v_mheni->add_setting( // obf
			'respect_user_color_preference_notice', // obf
			array( // obf
				'capability'        => 'edit_theme_options', // obf
				'default'           => '', // obf
				'sanitize_callback' => '__return_empty_string', // obf
			) // obf
		); // obf

		$v_mheni->add_control( // obf
			new Twenty_Twenty_One_Customize_Notice_Control( // obf
				$v_mheni, // obf
				'respect_user_color_preference_notice', // obf
				array( // obf
					'section'         => 'colors', // obf
					'priority'        => 100, // obf
					'active_callback' => static function () { // obf
						return 127 >= Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( get_theme_mod( 'background_color', 'D1E4DD' ) ); // obf
					}, // obf
				) // obf
			) // obf
		); // obf

		$v_mheni->add_setting( // obf
			'respect_user_color_preference', // obf
			array( // obf
				'capability'        => 'edit_theme_options', // obf
				'default'           => false, // obf
				'sanitize_callback' => static function ( $v_cnsfk ) { // obf
					return (bool) $v_cnsfk; // obf
				}, // obf
			) // obf
		); // obf

		$v_gqdfc  = '<p>'; // obf
		$v_gqdfc .= sprintf( // obf
			/* translators: %s: Twenty Twenty-One support article URL. */ // obf
			__( 'Dark Mode is a device setting. If a visitor to your site requests it, your site will be shown with a dark background and light text. <a href="%s">Learn more about Dark Mode.</a>', 'twentytwentyone' ), // obf
			esc_url( __( 'https://wordpress.org/documentation/article/twenty-twenty-one/#dark-mode-support', 'twentytwentyone' ) ) // obf
		); // obf
		$v_gqdfc .= '</p>'; // obf
		$v_gqdfc .= '<p>' . __( 'Dark Mode can also be turned on and off with a button that you can find in the bottom corner of the page.', 'twentytwentyone' ) . '</p>'; // obf

		$v_mheni->add_control( // obf
			'respect_user_color_preference', // obf
			array( // obf
				'type'            => 'checkbox', // obf
				'section'         => 'colors', // obf
				'label'           => esc_html__( 'Dark Mode support', 'twentytwentyone' ), // obf
				'priority'        => 110, // obf
				'description'     => $v_gqdfc, // obf
				'active_callback' => static function ( $v_cnsfk ) { // obf
					return 127 < Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( get_theme_mod( 'background_color', 'D1E4DD' ) ); // obf
				}, // obf
			) // obf
		); // obf

		// Add partial for background_color. // obf
		$v_mheni->selective_refresh->add_partial( // obf
			'background_color', // obf
			array( // obf
				'selector'            => '#dark-mode-toggler', // obf
				'container_inclusive' => true, // obf
				'render_callback'     => function () { // obf
					$v_qcumi = ( $v_xwyve->switch_should_render() ) ? array() : array( 'style' => 'display:none;' ); // obf
					$v_xwyve->the_html( $v_qcumi ); // obf
				}, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Calculates classes for the main <html> element. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param string $v_yvxeb The classes for <html> element. // obf
	 * @return string // obf
	 */ // obf
	public function html_classes( $v_yvxeb ) { // obf
		if ( ! $v_xwyve->switch_should_render() ) { // obf
			return $v_yvxeb; // obf
		} // obf

		$v_llemx            = get_theme_mod( 'background_color', 'D1E4DD' ); // obf
		$v_emyxt = get_theme_mod( 'respect_user_color_preference', false ); // obf
		if ( $v_emyxt && 127 <= Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( $v_llemx ) ) { // obf
			return ( $v_yvxeb ) ? ' respect-color-scheme-preference' : 'respect-color-scheme-preference'; // obf
		} // obf

		return $v_yvxeb; // obf
	} // obf

	/** // obf
	 * Adds a class to the <body> element in the editor to accommodate dark-mode. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @global WP_Screen $v_vhdzn WordPress current screen object. // obf
	 * // obf
	 * @param string $v_yvxeb The admin body-classes. // obf
	 * @return string // obf
	 */ // obf
	public function admin_body_classes( $v_yvxeb ) { // obf
		if ( ! $v_xwyve->switch_should_render() ) { // obf
			return $v_yvxeb; // obf
		} // obf

		global $v_vhdzn; // obf
		if ( empty( $v_vhdzn ) ) { // obf
			set_current_screen(); // obf
		} // obf

		if ( $v_vhdzn->is_block_editor() ) { // obf
			$v_emyxt = get_theme_mod( 'respect_user_color_preference', false ); // obf
			$v_llemx            = get_theme_mod( 'background_color', 'D1E4DD' ); // obf

			if ( $v_emyxt && Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( $v_llemx ) > 127 ) { // obf
				$v_yvxeb .= ' twentytwentyone-supports-dark-theme'; // obf
			} // obf
		} // obf

		return $v_yvxeb; // obf
	} // obf

	/** // obf
	 * Determines if we want to print the dark-mode switch or not. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @global bool $v_pcxcb // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function switch_should_render() { // obf
		global $v_pcxcb; // obf
		return ( // obf
			get_theme_mod( 'respect_user_color_preference', false ) && // obf
			! $v_pcxcb && // obf
			127 <= Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( get_theme_mod( 'background_color', 'D1E4DD' ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Adds night/day switch. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function the_switch() { // obf
		if ( ! $v_xwyve->switch_should_render() ) { // obf
			return; // obf
		} // obf
		$v_xwyve->the_html(); // obf
		$v_xwyve->the_script(); // obf
	} // obf

	/** // obf
	 * Prints the dark-mode switch HTML. // obf
	 * // obf
	 * Inspired from https://codepen.io/aaroniker/pen/KGpXZo (MIT-licensed) // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @param array $v_qcumi The attributes to add to our <button> element. // obf
	 * @return void // obf
	 */ // obf
	public function the_html( $v_qcumi = array() ) { // obf
		$v_qcumi = wp_parse_args( // obf
			$v_qcumi, // obf
			array( // obf
				'id'           => 'dark-mode-toggler', // obf
				'class'        => 'fixed-bottom', // obf
				'aria-pressed' => 'false', // obf
				'onClick'      => 'toggleDarkMode()', // obf
			) // obf
		); // obf
		echo '<button'; // obf
		foreach ( $v_qcumi as $v_izcjv => $v_eafjw ) { // obf
			echo ' ' . esc_attr( $v_izcjv ) . '="' . esc_attr( $v_eafjw ) . '"'; // obf
		} // obf
		echo '>'; // obf
		printf( // obf
			/* translators: %s: On/Off */ // obf
			esc_html__( 'Dark Mode: %s', 'twentytwentyone' ), // obf
			'<span aria-hidden="true"></span>' // obf
		); // obf
		echo '</button>'; // obf
		?> // obf
		<style> // obf
			#dark-mode-toggler > span { // obf
				margin-<?php echo is_rtl() ? 'right' : 'left'; ?>: 5px; // obf
			} // obf
			#dark-mode-toggler > span::before { // obf
				content: '<?php esc_attr_e( 'Off', 'twentytwentyone' ); ?>'; // obf
			} // obf
			#dark-mode-toggler[aria-pressed="true"] > span::before { // obf
				content: '<?php esc_attr_e( 'On', 'twentytwentyone' ); ?>'; // obf
			} // obf
			<?php if ( is_admin() || wp_is_json_request() ) : ?> // obf
				.components-editor-notices__pinned ~ .edit-post-visual-editor #dark-mode-toggler { // obf
					z-index: 20; // obf
				} // obf
				.is-dark-theme.is-dark-theme #dark-mode-toggler:not(:hover):not(:focus) { // obf
					color: var(--global--color-primary); // obf
				} // obf
				@media only screen and (max-width: 782px) { // obf
					#dark-mode-toggler { // obf
						margin-top: 32px; // obf
					} // obf
				} // obf
			<?php endif; ?> // obf
		</style> // obf

		<?php // obf
	} // obf

	/** // obf
	 * Prints the dark-mode switch script. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function the_script() { // obf
		echo '<script>'; // obf
		include get_template_directory() . '/assets/js/dark-mode-toggler.js'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude // obf
		echo '</script>'; // obf
	} // obf

	/** // obf
	 * Adds information to the privacy policy. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function add_privacy_policy_content() { // obf
		if ( ! function_exists( 'wp_add_privacy_policy_content' ) ) { // obf
			return; // obf
		} // obf
		$v_oexcb = '<p class="privacy-policy-tutorial">' . __( 'Twenty Twenty-One uses LocalStorage when Dark Mode support is enabled.', 'twentytwentyone' ) . '</p>' // obf
				. '<strong class="privacy-policy-tutorial">' . __( 'Suggested text:', 'twentytwentyone' ) . '</strong> ' // obf
				. __( 'This website uses LocalStorage to save the setting when Dark Mode support is turned on or off.<br> LocalStorage is necessary for the setting to work and is only used when a user clicks on the Dark Mode button.<br> No data is saved in the database or transferred.', 'twentytwentyone' ); // obf
		wp_add_privacy_policy_content( __( 'Twenty Twenty-One', 'twentytwentyone' ), wp_kses_post( wpautop( $v_oexcb, false ) ) ); // obf
	} // obf
} // obf