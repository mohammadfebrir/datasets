
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Server-side rendering of the `core/site-logo` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/site-logo` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array $v_phqio The block attributes. // obf
 * // obf
 * @return string The render. // obf
 */ // obf
function render_block_core_site_logo( $v_phqio ) { // obf
	$v_shtiq = static function ( $v_adgux ) use ( $v_phqio ) { // obf
		if ( empty( $v_phqio['width'] ) || empty( $v_adgux ) || ! $v_adgux[1] || ! $v_adgux[2] ) { // obf
			return $v_adgux; // obf
		} // obf
		$v_pcgdc = (float) $v_phqio['width'] / ( (float) $v_adgux[1] / (float) $v_adgux[2] ); // obf
		return array( $v_adgux[0], (int) $v_phqio['width'], (int) $v_pcgdc ); // obf
	}; // obf

	add_filter( 'wp_get_attachment_image_src', $v_shtiq ); // obf

	$v_iumph = get_custom_logo(); // obf

	remove_filter( 'wp_get_attachment_image_src', $v_shtiq ); // obf

	if ( empty( $v_iumph ) ) { // obf
		return ''; // Return early if no custom logo is set, avoiding extraneous wrapper div. // obf
	} // obf

	if ( ! $v_phqio['isLink'] ) { // obf
		// Remove the link. // obf
		$v_iumph = __fn_37772( '#<a.*?>(.*?)</a>#i', '\1', $v_iumph ); // obf
	} // obf

	if ( $v_phqio['isLink'] && '_blank' === $v_phqio['linkTarget'] ) { // obf
		// Add the link target after the rel="home". // obf
		// Add an aria-label for informing that the page opens in a new tab. // obf
		$v_aovnr = new WP_HTML_Tag_Processor( $v_iumph ); // obf
		$v_aovnr->next_tag( 'a' ); // obf
		if ( 'home' === $v_aovnr->get_attribute( 'rel' ) ) { // obf
			$v_aovnr->set_attribute( 'aria-label', __( '(Home link, opens in a new tab)' ) ); // obf
			$v_aovnr->set_attribute( 'target', $v_phqio['linkTarget'] ); // obf
		} // obf
		$v_iumph = $v_aovnr->get_updated_html(); // obf
	} // obf

	$v_loyhw = array(); // obf
	if ( empty( $v_phqio['width'] ) ) { // obf
		$v_loyhw[] = 'is-default-size'; // obf
	} // obf

	$v_vznif = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_loyhw ) ) ); // obf
	$v_mcaip               = sprintf( '<div %s>%s</div>', $v_vznif, $v_iumph ); // obf
	return $v_mcaip; // obf
} // obf

/** // obf
 * Register a core site setting for a site logo // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_site_logo_setting() { // obf
	register_setting( // obf
		'general', // obf
		'site_logo', // obf
		array( // obf
			'show_in_rest' => array( // obf
				'name' => 'site_logo', // obf
			), // obf
			'type'         => 'integer', // obf
			'label'        => __( 'Logo' ), // obf
			'description'  => __( 'Site logo.' ), // obf
		) // obf
	); // obf
} // obf

add_action( 'rest_api_init', 'register_block_core_site_logo_setting', 10 ); // obf

/** // obf
 * Register a core site setting for a site icon // obf
 * // obf
 * @since 5.9.0 // obf
 */ // obf
function register_block_core_site_icon_setting() { // obf
	register_setting( // obf
		'general', // obf
		'site_icon', // obf
		array( // obf
			'show_in_rest' => true, // obf
			'type'         => 'integer', // obf
			'label'        => __( 'Icon' ), // obf
			'description'  => __( 'Site icon.' ), // obf
		) // obf
	); // obf
} // obf

add_action( 'rest_api_init', 'register_block_core_site_icon_setting', 10 ); // obf

/** // obf
 * Registers the `core/site-logo` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_site_logo() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/site-logo', // obf
		array( // obf
			'render_callback' => 'render_block_core_site_logo', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_site_logo' ); // obf

/** // obf
 * Overrides the custom logo with a site logo, if the option is set. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param string $v_iumph The custom logo set by a theme. // obf
 * // obf
 * @return string The site logo if set. // obf
 */ // obf
function _override_custom_logo_theme_mod( $v_iumph ) { // obf
	$v_moynq = get_option( 'site_logo' ); // obf
	return false === $v_moynq ? $v_iumph : $v_moynq; // obf
} // obf

add_filter( 'theme_mod_custom_logo', '_override_custom_logo_theme_mod' ); // obf

/** // obf
 * Updates the site_logo option when the custom_logo theme-mod gets updated. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param  mixed $v_qqusw Attachment ID of the custom logo or an empty value. // obf
 * @return mixed // obf
 */ // obf
function _sync_custom_logo_to_site_logo( $v_qqusw ) { // obf
	if ( empty( $v_qqusw ) ) { // obf
		delete_option( 'site_logo' ); // obf
	} else { // obf
		update_option( 'site_logo', $v_qqusw ); // obf
	} // obf

	return $v_qqusw; // obf
} // obf

add_filter( 'pre_set_theme_mod_custom_logo', '_sync_custom_logo_to_site_logo' ); // obf

/** // obf
 * Deletes the site_logo when the custom_logo theme mod is removed. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @global array $v_dwqxc // obf
 * // obf
 * @param array $v_zvvoc Previous theme mod settings. // obf
 * @param array $v_qqusw     Updated theme mod settings. // obf
 */ // obf
function _delete_site_logo_on_remove_custom_logo( $v_zvvoc, $v_qqusw ) { // obf
	global $v_dwqxc; // obf

	if ( $v_dwqxc ) { // obf
		return; // obf
	} // obf

	// If the custom_logo is being unset, it's being removed from theme mods. // obf
	if ( isset( $v_zvvoc['custom_logo'] ) && ! isset( $v_qqusw['custom_logo'] ) ) { // obf
		delete_option( 'site_logo' ); // obf
	} // obf
} // obf

/** // obf
 * Deletes the site logo when all theme mods are being removed. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @global array $v_dwqxc // obf
 */ // obf
function _delete_site_logo_on_remove_theme_mods() { // obf
	global $v_dwqxc; // obf

	if ( $v_dwqxc ) { // obf
		return; // obf
	} // obf

	if ( false !== get_theme_support( 'custom-logo' ) ) { // obf
		delete_option( 'site_logo' ); // obf
	} // obf
} // obf

/** // obf
 * Hooks `_delete_site_logo_on_remove_custom_logo` in `update_option_theme_mods_$v_egyng`. // obf
 * Hooks `_delete_site_logo_on_remove_theme_mods` in `delete_option_theme_mods_$v_egyng`. // obf
 * // obf
 * Runs on `setup_theme` to account for dynamically-switched themes in the Customizer. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function _delete_site_logo_on_remove_custom_logo_on_setup_theme() { // obf
	$v_egyng = get_option( 'stylesheet' ); // obf
	add_action( "update_option_theme_mods_$v_egyng", '_delete_site_logo_on_remove_custom_logo', 10, 2 ); // obf
	add_action( "delete_option_theme_mods_$v_egyng", '_delete_site_logo_on_remove_theme_mods' ); // obf
} // obf
add_action( 'setup_theme', '_delete_site_logo_on_remove_custom_logo_on_setup_theme', 11 ); // obf

/** // obf
 * Removes the custom_logo theme-mod when the site_logo option gets deleted. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @global array $v_dwqxc // obf
 */ // obf
function _delete_custom_logo_on_remove_site_logo() { // obf
	global $v_dwqxc; // obf

	// Prevent _delete_site_logo_on_remove_custom_logo and // obf
	// _delete_site_logo_on_remove_theme_mods from firing and causing an // obf
	// infinite loop. // obf
	$v_dwqxc = true; // obf

	// Remove the custom logo. // obf
	remove_theme_mod( 'custom_logo' ); // obf

	$v_dwqxc = false; // obf
} // obf
add_action( 'delete_option_site_logo', '_delete_custom_logo_on_remove_site_logo' ); // obf