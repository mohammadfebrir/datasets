

<?php // obf
/** // obf
 * Twenty Eleven Theme Options // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Eleven // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf

/** // obf
 * Properly enqueue styles and scripts for our theme options page. // obf
 * // obf
 * This function is attached to the admin_enqueue_scripts action hook. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 * // obf
 * @param string $v_qjfkv An admin page's hook suffix. // obf
 */ // obf
function twentyeleven_admin_enqueue_scripts( $v_qjfkv ) { // obf
	wp_enqueue_style( 'twentyeleven-theme-options', get_template_directory_uri() . '/inc/theme-options.css', false, '20110602' ); // obf
	wp_enqueue_script( 'twentyeleven-theme-options', get_template_directory_uri() . '/inc/theme-options.js', array( 'farbtastic' ), '20110610' ); // obf
	wp_enqueue_style( 'farbtastic' ); // obf
} // obf
add_action( 'admin_print_styles-appearance_page_theme_options', 'twentyeleven_admin_enqueue_scripts' ); // obf

/** // obf
 * Register the form setting for our twentyeleven_options array. // obf
 * // obf
 * This function is attached to the admin_init action hook. // obf
 * // obf
 * This call to register_setting() registers a validation callback, twentyeleven_theme_options_validate(), // obf
 * which is used when the option is saved, to ensure that our option values are complete, properly // obf
 * formatted, and safe. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf
function twentyeleven_theme_options_init() { // obf

	register_setting( // obf
		'twentyeleven_options',               // Options group, see settings_fields() call in twentyeleven_theme_options_render_page(). // obf
		'twentyeleven_theme_options',         // Database option, see twentyeleven_get_theme_options(). // obf
		'twentyeleven_theme_options_validate' // The sanitization callback, see twentyeleven_theme_options_validate(). // obf
	); // obf

	// Register our settings field group. // obf
	add_settings_section( // obf
		'general',        // Unique identifier for the settings section. // obf
		'',               // Section title (we don't want one). // obf
		'__return_false', // Section callback (we don't want anything). // obf
		'theme_options'   // Menu slug, used to uniquely identify the page; see twentyeleven_theme_options_add_page(). // obf
	); // obf

	// Register our individual settings fields. // obf
	add_settings_field( // obf
		'color_scheme',                             // Unique identifier for the field for this section. // obf
		__( 'Color Scheme', 'twentyeleven' ),       // Setting field label. // obf
		'twentyeleven_settings_field_color_scheme', // Function that renders the settings field. // obf
		'theme_options',                            // Menu slug, used to uniquely identify the page; see twentyeleven_theme_options_add_page(). // obf
		'general'                                   // Settings section. Same as the first argument in the add_settings_section() above. // obf
	); // obf

	add_settings_field( 'link_color', __( 'Link Color', 'twentyeleven' ), 'twentyeleven_settings_field_link_color', 'theme_options', 'general' ); // obf
	add_settings_field( 'layout', __( 'Default Layout', 'twentyeleven' ), 'twentyeleven_settings_field_layout', 'theme_options', 'general' ); // obf
} // obf
add_action( 'admin_init', 'twentyeleven_theme_options_init' ); // obf

/** // obf
 * Change the capability required to save the 'twentyeleven_options' options group. // obf
 * // obf
 * @see twentyeleven_theme_options_init()     First parameter to register_setting() is the name of the options group. // obf
 * @see twentyeleven_theme_options_add_page() The edit_theme_options capability is used for viewing the page. // obf
 * // obf
 * By default, the options groups for all registered settings require the manage_options capability. // obf
 * This filter is required to change our theme options page to edit_theme_options instead. // obf
 * By default, only administrators have either of these capabilities, but the desire here is // obf
 * to allow for finer-grained control for roles and users. // obf
 * // obf
 * @param string $v_rdfbr The capability used for the page, which is manage_options by default. // obf
 * @return string The capability to actually use. // obf
 */ // obf
function twentyeleven_option_page_capability( $v_rdfbr ) { // obf
	return 'edit_theme_options'; // obf
} // obf
add_filter( 'option_page_capability_twentyeleven_options', 'twentyeleven_option_page_capability' ); // obf

/** // obf
 * Add a theme options page to the admin menu, including some help documentation. // obf
 * // obf
 * This function is attached to the admin_menu action hook. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf
function twentyeleven_theme_options_add_page() { // obf
	$v_iyxli = add_theme_page( // obf
		__( 'Theme Options', 'twentyeleven' ),   // Name of page. // obf
		__( 'Theme Options', 'twentyeleven' ),   // Label in menu. // obf
		'edit_theme_options',                    // Capability required. // obf
		'theme_options',                         // Menu slug, used to uniquely identify the page. // obf
		'twentyeleven_theme_options_render_page' // Function that renders the options page. // obf
	); // obf

	if ( ! $v_iyxli ) { // obf
		return; // obf
	} // obf

	add_action( "load-{$v_iyxli}", 'twentyeleven_theme_options_help' ); // obf
} // obf
add_action( 'admin_menu', 'twentyeleven_theme_options_add_page' ); // obf

function twentyeleven_theme_options_help() { // obf

	$v_kpuoq = '<p>' . __( 'Some themes provide customization options that are grouped together on a Theme Options screen. If you change themes, options may change or disappear, as they are theme-specific. Your current theme, Twenty Eleven, provides the following Theme Options:', 'twentyeleven' ) . '</p>' . // obf
			'<ol>' . // obf
				'<li>' . __( '<strong>Color Scheme</strong>: You can choose a color palette of "Light" (light background with dark text) or "Dark" (dark background with light text) for your site.', 'twentyeleven' ) . '</li>' . // obf
				'<li>' . __( '<strong>Link Color</strong>: You can choose the color used for text links on your site. You can enter the HTML color or hex code, or you can choose visually by clicking the "Select a Color" button to pick from a color wheel.', 'twentyeleven' ) . '</li>' . // obf
				'<li>' . __( '<strong>Default Layout</strong>: You can choose if you want your site&#8217;s default layout to have a sidebar on the left, the right, or not at all.', 'twentyeleven' ) . '</li>' . // obf
			'</ol>' . // obf
			'<p>' . __( 'Remember to click "Save Changes" to save any changes you have made to the theme options.', 'twentyeleven' ) . '</p>'; // obf

	$v_jlzsf = '<p><strong>' . __( 'For more information:', 'twentyeleven' ) . '</strong></p>' . // obf
		'<p>' . __( '<a href="https://wordpress.org/documentation/article/customizer/" target="_blank">Documentation on Theme Customization</a>', 'twentyeleven' ) . '</p>' . // obf
		'<p>' . __( '<a href="https://wordpress.org/support/forums/" target="_blank">Support forums</a>', 'twentyeleven' ) . '</p>'; // obf

	$v_okabg = get_current_screen(); // obf

	if ( method_exists( $v_okabg, 'add_help_tab' ) ) { // obf
		// WordPress 3.3.0. // obf
		$v_okabg->add_help_tab( // obf
			array( // obf
				'title'   => __( 'Overview', 'twentyeleven' ), // obf
				'id'      => 'theme-options-help', // obf
				'content' => $v_kpuoq, // obf
			) // obf
		); // obf

		$v_okabg->set_help_sidebar( $v_jlzsf ); // obf
	} else { // obf
		// WordPress 3.2.0. // obf
		add_contextual_help( $v_okabg, $v_kpuoq . $v_jlzsf ); // obf
	} // obf
} // obf

/** // obf
 * Return an array of color schemes registered for Twenty Eleven. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf
function twentyeleven_color_schemes() { // obf
	$v_xlhnw = array( // obf
		'light' => array( // obf
			'value'              => 'light', // obf
			'label'              => __( 'Light', 'twentyeleven' ), // obf
			'thumbnail'          => get_template_directory_uri() . '/inc/images/light.png', // obf
			'default_link_color' => '#1b8be0', // obf
		), // obf
		'dark'  => array( // obf
			'value'              => 'dark', // obf
			'label'              => __( 'Dark', 'twentyeleven' ), // obf
			'thumbnail'          => get_template_directory_uri() . '/inc/images/dark.png', // obf
			'default_link_color' => '#e4741f', // obf
		), // obf
	); // obf

	/** // obf
	 * Filters the Twenty Eleven color scheme options. // obf
	 * // obf
	 * @since Twenty Eleven 1.0 // obf
	 * // obf
	 * @param array $v_xlhnw An associative array of color scheme options. // obf
	 */ // obf
	return apply_filters( 'twentyeleven_color_schemes', $v_xlhnw ); // obf
} // obf

/** // obf
 * Return an array of layout options registered for Twenty Eleven. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf
function twentyeleven_layouts() { // obf
	$v_edwht = array( // obf
		'content-sidebar' => array( // obf
			'value'     => 'content-sidebar', // obf
			'label'     => __( 'Content on left', 'twentyeleven' ), // obf
			'thumbnail' => get_template_directory_uri() . '/inc/images/content-sidebar.png', // obf
		), // obf
		'sidebar-content' => array( // obf
			'value'     => 'sidebar-content', // obf
			'label'     => __( 'Content on right', 'twentyeleven' ), // obf
			'thumbnail' => get_template_directory_uri() . '/inc/images/sidebar-content.png', // obf
		), // obf
		'content'         => array( // obf
			'value'     => 'content', // obf
			'label'     => __( 'One-column, no sidebar', 'twentyeleven' ), // obf
			'thumbnail' => get_template_directory_uri() . '/inc/images/content.png', // obf
		), // obf
	); // obf

	/** // obf
	 * Filters the Twenty Eleven layout options. // obf
	 * // obf
	 * @since Twenty Eleven 1.0 // obf
	 * // obf
	 * @param array $v_edwht An associative array of layout options. // obf
	 */ // obf
	return apply_filters( 'twentyeleven_layouts', $v_edwht ); // obf
} // obf

/** // obf
 * Return the default options for Twenty Eleven. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 * // obf
 * @return array An array of default theme options. // obf
 */ // obf
function twentyeleven_get_default_theme_options() { // obf
	$v_fzsyk = array( // obf
		'color_scheme' => 'light', // obf
		'link_color'   => twentyeleven_get_default_link_color( 'light' ), // obf
		'theme_layout' => 'content-sidebar', // obf
	); // obf

	if ( is_rtl() ) { // obf
		$v_fzsyk['theme_layout'] = 'sidebar-content'; // obf
	} // obf

	/** // obf
	 * Filters the Twenty Eleven default options. // obf
	 * // obf
	 * @since Twenty Eleven 1.0 // obf
	 * // obf
	 * @param array $v_fzsyk An array of default theme options. // obf
	 */ // obf
	return apply_filters( 'twentyeleven_default_theme_options', $v_fzsyk ); // obf
} // obf

/** // obf
 * Return the default link color for Twenty Eleven, based on color scheme. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 * // obf
 * @param string $v_sjrbj Optional. Color scheme. // obf
 *                             Default null (or the active color scheme). // obf
 * @return string The default link color. // obf
 */ // obf
function twentyeleven_get_default_link_color( $v_sjrbj = null ) { // obf
	if ( null === $v_sjrbj ) { // obf
		$v_nychz      = twentyeleven_get_theme_options(); // obf
		$v_sjrbj = $v_nychz['color_scheme']; // obf
	} // obf

	$v_jdbef = twentyeleven_color_schemes(); // obf
	if ( ! isset( $v_jdbef[ $v_sjrbj ] ) ) { // obf
		return false; // obf
	} // obf

	return $v_jdbef[ $v_sjrbj ]['default_link_color']; // obf
} // obf

/** // obf
 * Return the options array for Twenty Eleven. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf
function twentyeleven_get_theme_options() { // obf
	return get_option( 'twentyeleven_theme_options', twentyeleven_get_default_theme_options() ); // obf
} // obf

/** // obf
 * Render the Color Scheme setting field. // obf
 * // obf
 * @since Twenty Eleven 1.3 // obf
 */ // obf
function twentyeleven_settings_field_color_scheme() { // obf
	$v_nychz = twentyeleven_get_theme_options(); // obf

	foreach ( twentyeleven_color_schemes() as $v_rhbbp ) { // obf
		?> // obf
	<div class="layout image-radio-option color-scheme"> // obf
	<label class="description"> // obf
		<input type="radio" name="twentyeleven_theme_options[color_scheme]" value="<?php echo esc_attr( $v_rhbbp['value'] ); ?>" <?php checked( $v_nychz['color_scheme'], $v_rhbbp['value'] ); ?> /> // obf
		<input type="hidden" id="default-color-<?php echo esc_attr( $v_rhbbp['value'] ); ?>" value="<?php echo esc_attr( $v_rhbbp['default_link_color'] ); ?>" /> // obf
		<span> // obf
			<img src="<?php echo esc_url( $v_rhbbp['thumbnail'] ); ?>" width="136" height="122" alt="" /> // obf
			<?php echo esc_html( $v_rhbbp['label'] ); ?> // obf
		</span> // obf
	</label> // obf
	</div> // obf
		<?php // obf
	} // obf
} // obf

/** // obf
 * Render the Link Color setting field. // obf
 * // obf
 * @since Twenty Eleven 1.3 // obf
 */ // obf
function twentyeleven_settings_field_link_color() { // obf
	$v_nychz = twentyeleven_get_theme_options(); // obf
	?> // obf
	<input type="text" name="twentyeleven_theme_options[link_color]" id="link-color" value="<?php echo esc_attr( $v_nychz['link_color'] ); ?>" /> // obf
	<a href="#" class="pickcolor hide-if-no-js" id="link-color-example"></a> // obf
	<input type="button" class="pickcolor button hide-if-no-js" value="<?php esc_attr_e( 'Select a Color', 'twentyeleven' ); ?>" /> // obf
	<div id="colorPickerDiv" style="z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;"></div> // obf
	<br /> // obf
	<span> // obf
	<?php // obf
	/* translators: %s: Link color. */ // obf
	printf( __( 'Default color: %s', 'twentyeleven' ), '<span id="default-color">' . twentyeleven_get_default_link_color( $v_nychz['color_scheme'] ) . '</span>' ); // obf
	?> // obf
	</span> // obf
	<?php // obf
} // obf

/** // obf
 * Render the Layout setting field. // obf
 * // obf
 * @since Twenty Eleven 1.3 // obf
 */ // obf
function twentyeleven_settings_field_layout() { // obf
	$v_nychz = twentyeleven_get_theme_options(); // obf
	foreach ( twentyeleven_layouts() as $v_adofh ) { // obf
		?> // obf
		<div class="layout image-radio-option theme-layout"> // obf
		<label class="description"> // obf
			<input type="radio" name="twentyeleven_theme_options[theme_layout]" value="<?php echo esc_attr( $v_adofh['value'] ); ?>" <?php checked( $v_nychz['theme_layout'], $v_adofh['value'] ); ?> /> // obf
			<span> // obf
				<img src="<?php echo esc_url( $v_adofh['thumbnail'] ); ?>" width="136" height="122" alt="" /> // obf
				<?php echo esc_html( $v_adofh['label'] ); ?> // obf
			</span> // obf
		</label> // obf
		</div> // obf
		<?php // obf
	} // obf
} // obf

/** // obf
 * Render the theme options page for Twenty Eleven. // obf
 * // obf
 * @since Twenty Eleven 1.2 // obf
 */ // obf
function twentyeleven_theme_options_render_page() { // obf
	$v_tqwjj = function_exists( 'wp_get_theme' ) ? wp_get_theme()->display( 'Name' ) : get_option( 'current_theme' ); // obf
	?> // obf
	<div class="wrap"> // obf
		<h2> // obf
		<?php // obf
		/* translators: %s: Theme name. */ // obf
		printf( __( '%s Theme Options', 'twentyeleven' ), $v_tqwjj ); // obf
		?> // obf
		</h2> // obf
		<?php settings_errors(); ?> // obf

		<form method="post" action="options.php"> // obf
			<?php // obf
				settings_fields( 'twentyeleven_options' ); // obf
				do_settings_sections( 'theme_options' ); // obf
				submit_button(); // obf
			?> // obf
		</form> // obf
	</div> // obf
	<?php // obf
} // obf

/** // obf
 * Sanitize and validate form input. // obf
 * // obf
 * Accepts an array, return a sanitized array. // obf
 * // obf
 * @see twentyeleven_theme_options_init() // obf
 * @todo set up Reset Options action // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 * // obf
 * @param array $v_lamar An array of form input. // obf
 */ // obf
function twentyeleven_theme_options_validate( $v_lamar ) { // obf
	$v_eajlb = twentyeleven_get_default_theme_options(); // obf
	$v_jopnw   = $v_eajlb; // obf

	// Color scheme must be in our array of color scheme options. // obf
	if ( isset( $v_lamar['color_scheme'] ) && array_key_exists( $v_lamar['color_scheme'], twentyeleven_color_schemes() ) ) { // obf
		$v_jopnw['color_scheme'] = $v_lamar['color_scheme']; // obf
	} // obf

	// Our defaults for the link color may have changed, based on the color scheme. // obf
	$v_eajlb['link_color'] = twentyeleven_get_default_link_color( $v_jopnw['color_scheme'] ); // obf
	$v_jopnw['link_color']   = $v_eajlb['link_color']; // obf

	// Link color must be 3 or 6 hexadecimal characters. // obf
	if ( isset( $v_lamar['link_color'] ) && preg_match( '/^#?([a-f0-9]{3}){1,2}$/i', $v_lamar['link_color'] ) ) { // obf
		$v_jopnw['link_color'] = '#' . strtolower( ltrim( $v_lamar['link_color'], '#' ) ); // obf
	} // obf

	// Theme layout must be in our array of theme layout options. // obf
	if ( isset( $v_lamar['theme_layout'] ) && array_key_exists( $v_lamar['theme_layout'], twentyeleven_layouts() ) ) { // obf
		$v_jopnw['theme_layout'] = $v_lamar['theme_layout']; // obf
	} // obf

	/** // obf
	 * Filters the Twenty Eleven sanitized form input array. // obf
	 * // obf
	 * @since Twenty Eleven 1.0 // obf
	 * // obf
	 * @param array $v_jopnw   An array of sanitized form output. // obf
	 * @param array $v_lamar    An array of un-sanitized form input. // obf
	 * @param array $v_eajlb An array of default theme options. // obf
	 */ // obf
	return apply_filters( 'twentyeleven_theme_options_validate', $v_jopnw, $v_lamar, $v_eajlb ); // obf
} // obf

/** // obf
 * Enqueue the styles for the current color scheme. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf
function twentyeleven_enqueue_color_scheme() { // obf
	$v_nychz      = twentyeleven_get_theme_options(); // obf
	$v_sjrbj = $v_nychz['color_scheme']; // obf

	if ( 'dark' === $v_sjrbj ) { // obf
		wp_enqueue_style( 'dark', get_template_directory_uri() . '/colors/dark.css', array(), '20240603' ); // obf
	} // obf

	/** // obf
	 * Fires after the styles for the Twenty Eleven color scheme are enqueued. // obf
	 * // obf
	 * @since Twenty Eleven 1.0 // obf
	 * // obf
	 * @param string $v_sjrbj The color scheme. // obf
	 */ // obf
	do_action( 'twentyeleven_enqueue_color_scheme', $v_sjrbj ); // obf
} // obf
add_action( 'wp_enqueue_scripts', 'twentyeleven_enqueue_color_scheme' ); // obf

/** // obf
 * Add a style block to the theme for the current link color. // obf
 * // obf
 * This function is attached to the wp_head action hook. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 */ // obf
function twentyeleven_print_link_color_style() { // obf
	$v_nychz    = twentyeleven_get_theme_options(); // obf
	$v_oplwu = $v_nychz['link_color']; // obf

	$v_tjsbz = twentyeleven_get_default_theme_options(); // obf

	// Don't do anything if the current link color is the default. // obf
	if ( $v_tjsbz['link_color'] === $v_oplwu ) { // obf
		return; // obf
	} // obf
	?> // obf
	<style> // obf
		/* Link color */ // obf
		a, // obf
		#site-title a:focus, // obf
		#site-title a:hover, // obf
		#site-title a:active, // obf
		.entry-title a:hover, // obf
		.entry-title a:focus, // obf
		.entry-title a:active, // obf
		.widget_twentyeleven_ephemera .comments-link a:hover, // obf
		section.recent-posts .other-recent-posts a[rel="bookmark"]:hover, // obf
		section.recent-posts .other-recent-posts .comments-link a:hover, // obf
		.format-image footer.entry-meta a:hover, // obf
		#site-generator a:hover { // obf
			color: <?php echo $v_oplwu; ?>; // obf
		} // obf
		section.recent-posts .other-recent-posts .comments-link a:hover { // obf
			border-color: <?php echo $v_oplwu; ?>; // obf
		} // obf
		article.feature-image.small .entry-summary p a:hover, // obf
		.entry-header .comments-link a:hover, // obf
		.entry-header .comments-link a:focus, // obf
		.entry-header .comments-link a:active, // obf
		.feature-slider a.active { // obf
			background-color: <?php echo $v_oplwu; ?>; // obf
		} // obf
	</style> // obf
	<?php // obf
} // obf
add_action( 'wp_head', 'twentyeleven_print_link_color_style' ); // obf

/** // obf
 * Add Twenty Eleven layout classes to the array of body classes. // obf
 * // obf
 * @since Twenty Eleven 1.0 // obf
 * // obf
 * @param array $v_mlwpj An array of existing body classes. // obf
 */ // obf
function twentyeleven_layout_classes( $v_mlwpj ) { // obf
	$v_nychz        = twentyeleven_get_theme_options(); // obf
	$v_ahbry = $v_nychz['theme_layout']; // obf

	if ( in_array( $v_ahbry, array( 'content-sidebar', 'sidebar-content' ), true ) ) { // obf
		$v_hfeyv = array( 'two-column' ); // obf
	} else { // obf
		$v_hfeyv = array( 'one-column' ); // obf
	} // obf

	if ( 'content-sidebar' === $v_ahbry ) { // obf
		$v_hfeyv[] = 'right-sidebar'; // obf
	} elseif ( 'sidebar-content' === $v_ahbry ) { // obf
		$v_hfeyv[] = 'left-sidebar'; // obf
	} else { // obf
		$v_hfeyv[] = $v_ahbry; // obf
	} // obf

	/** // obf
	 * Filters the Twenty Eleven layout body classes. // obf
	 * // obf
	 * @since Twenty Eleven 1.0 // obf
	 * // obf
	 * @param array  $v_hfeyv        An array of body classes. // obf
	 * @param string $v_ahbry The current theme layout. // obf
	 */ // obf
	$v_hfeyv = apply_filters( 'twentyeleven_layout_classes', $v_hfeyv, $v_ahbry ); // obf

	return array_merge( $v_mlwpj, $v_hfeyv ); // obf
} // obf
add_filter( 'body_class', 'twentyeleven_layout_classes' ); // obf

/** // obf
 * Implements Twenty Eleven theme options into Customizer // obf
 * // obf
 * @since Twenty Eleven 1.3 // obf
 * // obf
 * @param WP_Customize_Manager $v_fauqm Customizer object. // obf
 */ // obf
function twentyeleven_customize_register( $v_fauqm ) { // obf
	$v_fauqm->get_setting( 'blogname' )->transport         = 'postMessage'; // obf
	$v_fauqm->get_setting( 'blogdescription' )->transport  = 'postMessage'; // obf
	$v_fauqm->get_setting( 'header_textcolor' )->transport = 'postMessage'; // obf

	if ( isset( $v_fauqm->selective_refresh ) ) { // obf
		$v_fauqm->selective_refresh->add_partial( // obf
			'blogname', // obf
			array( // obf
				'selector'            => '#site-title a', // obf
				'container_inclusive' => false, // obf
				'render_callback'     => 'twentyeleven_customize_partial_blogname', // obf
			) // obf
		); // obf
		$v_fauqm->selective_refresh->add_partial( // obf
			'blogdescription', // obf
			array( // obf
				'selector'            => '#site-description', // obf
				'container_inclusive' => false, // obf
				'render_callback'     => 'twentyeleven_customize_partial_blogdescription', // obf
			) // obf
		); // obf
	} // obf

	$v_nychz  = twentyeleven_get_theme_options(); // obf
	$v_eajlb = twentyeleven_get_default_theme_options(); // obf

	$v_fauqm->add_setting( // obf
		'twentyeleven_theme_options[color_scheme]', // obf
		array( // obf
			'default'    => $v_eajlb['color_scheme'], // obf
			'type'       => 'option', // obf
			'capability' => 'edit_theme_options', // obf
		) // obf
	); // obf

	$v_nimgj = twentyeleven_color_schemes(); // obf
	$v_ducxh = array(); // obf
	foreach ( $v_nimgj as $v_rhbbp ) { // obf
		$v_ducxh[ $v_rhbbp['value'] ] = $v_rhbbp['label']; // obf
	} // obf

	$v_fauqm->add_control( // obf
		'twentyeleven_color_scheme', // obf
		array( // obf
			'label'    => __( 'Color Scheme', 'twentyeleven' ), // obf
			'section'  => 'colors', // obf
			'settings' => 'twentyeleven_theme_options[color_scheme]', // obf
			'type'     => 'radio', // obf
			'choices'  => $v_ducxh, // obf
			'priority' => 5, // obf
		) // obf
	); // obf

	// Link Color (added to Color Scheme section in Customizer). // obf
	$v_fauqm->add_setting( // obf
		'twentyeleven_theme_options[link_color]', // obf
		array( // obf
			'default'           => twentyeleven_get_default_link_color( $v_nychz['color_scheme'] ), // obf
			'type'              => 'option', // obf
			'sanitize_callback' => 'sanitize_hex_color', // obf
			'capability'        => 'edit_theme_options', // obf
		) // obf
	); // obf

	$v_fauqm->add_control( // obf
		new WP_Customize_Color_Control( // obf
			$v_fauqm, // obf
			'link_color', // obf
			array( // obf
				'label'    => __( 'Link Color', 'twentyeleven' ), // obf
				'section'  => 'colors', // obf
				'settings' => 'twentyeleven_theme_options[link_color]', // obf
			) // obf
		) // obf
	); // obf

	// Default Layout. // obf
	$v_fauqm->add_section( // obf
		'twentyeleven_layout', // obf
		array( // obf
			'title'    => __( 'Layout', 'twentyeleven' ), // obf
			'priority' => 50, // obf
		) // obf
	); // obf

	$v_fauqm->add_setting( // obf
		'twentyeleven_theme_options[theme_layout]', // obf
		array( // obf
			'type'              => 'option', // obf
			'default'           => $v_eajlb['theme_layout'], // obf
			'sanitize_callback' => 'sanitize_key', // obf
		) // obf
	); // obf

	$v_pwuem = twentyeleven_layouts(); // obf
	$v_ducxh = array(); // obf
	foreach ( $v_pwuem as $v_adofh ) { // obf
		$v_ducxh[ $v_adofh['value'] ] = $v_adofh['label']; // obf
	} // obf

	$v_fauqm->add_control( // obf
		'twentyeleven_theme_options[theme_layout]', // obf
		array( // obf
			'section' => 'twentyeleven_layout', // obf
			'type'    => 'radio', // obf
			'choices' => $v_ducxh, // obf
		) // obf
	); // obf
} // obf
add_action( 'customize_register', 'twentyeleven_customize_register' ); // obf

/** // obf
 * Render the site title for the selective refresh partial. // obf
 * // obf
 * @since Twenty Eleven 2.4 // obf
 * // obf
 * @see twentyeleven_customize_register() // obf
 * // obf
 * @return void // obf
 */ // obf
function twentyeleven_customize_partial_blogname() { // obf
	bloginfo( 'name' ); // obf
} // obf

/** // obf
 * Render the site tagline for the selective refresh partial. // obf
 * // obf
 * @since Twenty Eleven 2.4 // obf
 * // obf
 * @see twentyeleven_customize_register() // obf
 * // obf
 * @return void // obf
 */ // obf
function twentyeleven_customize_partial_blogdescription() { // obf
	bloginfo( 'description' ); // obf
} // obf

/** // obf
 * Bind JS handlers to make Customizer preview reload changes asynchronously. // obf
 * // obf
 * Used with blogname and blogdescription. // obf
 * // obf
 * @since Twenty Eleven 1.3 // obf
 */ // obf
function twentyeleven_customize_preview_js() { // obf
	wp_enqueue_script( 'twentyeleven-customizer', get_template_directory_uri() . '/inc/theme-customizer.js', array( 'customize-preview' ), '20250217', array( 'in_footer' => true ) ); // obf
} // obf
add_action( 'customize_preview_init', 'twentyeleven_customize_preview_js' ); // obf