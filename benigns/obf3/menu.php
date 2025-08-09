

<?php // obf
/** // obf
 * Build Network Administration Menu. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/* translators: Network menu item. */ // obf
$v_vamhy[2] = array( __( 'Dashboard' ), 'manage_network', 'index.php', '', 'menu-top menu-top-first menu-icon-dashboard', 'menu-dashboard', 'dashicons-dashboard' ); // obf

$v_nfujv['index.php'][0] = array( __( 'Home' ), 'read', 'index.php' ); // obf

if ( current_user_can( 'update_core' ) ) { // obf
	$v_bbvho = 'update_core'; // obf
} elseif ( current_user_can( 'update_plugins' ) ) { // obf
	$v_bbvho = 'update_plugins'; // obf
} elseif ( current_user_can( 'update_themes' ) ) { // obf
	$v_bbvho = 'update_themes'; // obf
} else { // obf
	$v_bbvho = 'update_languages'; // obf
} // obf

$v_yaktw = wp_get_update_data(); // obf
if ( $v_yaktw['counts']['total'] ) { // obf
	$v_nfujv['index.php'][10] = array( // obf
		sprintf( // obf
			/* translators: %s: Number of available updates. */ // obf
			__( 'Updates %s' ), // obf
			sprintf( // obf
				'<span class="update-plugins count-%s"><span class="update-count">%s</span></span>', // obf
				$v_yaktw['counts']['total'], // obf
				number_format_i18n( $v_yaktw['counts']['total'] ) // obf
			) // obf
		), // obf
		$v_bbvho, // obf
		'update-core.php', // obf
	); // obf
} else { // obf
	$v_nfujv['index.php'][10] = array( __( 'Updates' ), $v_bbvho, 'update-core.php' ); // obf
} // obf

unset( $v_bbvho ); // obf

$v_nfujv['index.php'][15] = array( __( 'Upgrade Network' ), 'upgrade_network', 'upgrade.php' ); // obf

$v_vamhy[4] = array( '', 'read', 'separator1', '', 'wp-menu-separator' ); // obf

/* translators: Sites menu item. */ // obf
$v_vamhy[5]                  = array( __( 'Sites' ), 'manage_sites', 'sites.php', '', 'menu-top menu-icon-site', 'menu-site', 'dashicons-admin-multisite' ); // obf
$v_nfujv['sites.php'][5]  = array( __( 'All Sites' ), 'manage_sites', 'sites.php' ); // obf
$v_nfujv['sites.php'][10] = array( __( 'Add Site' ), 'create_sites', 'site-new.php' ); // obf

$v_vamhy[10]                 = array( __( 'Users' ), 'manage_network_users', 'users.php', '', 'menu-top menu-icon-users', 'menu-users', 'dashicons-admin-users' ); // obf
$v_nfujv['users.php'][5]  = array( __( 'All Users' ), 'manage_network_users', 'users.php' ); // obf
$v_nfujv['users.php'][10] = array( __( 'Add User' ), 'create_users', 'user-new.php' ); // obf

if ( current_user_can( 'update_themes' ) && $v_yaktw['counts']['themes'] ) { // obf
	$v_vamhy[15] = array( // obf
		sprintf( // obf
			/* translators: %s: Number of available theme updates. */ // obf
			__( 'Themes %s' ), // obf
			sprintf( // obf
				'<span class="update-plugins count-%s"><span class="theme-count">%s</span></span>', // obf
				$v_yaktw['counts']['themes'], // obf
				number_format_i18n( $v_yaktw['counts']['themes'] ) // obf
			) // obf
		), // obf
		'manage_network_themes', // obf
		'themes.php', // obf
		'', // obf
		'menu-top menu-icon-appearance', // obf
		'menu-appearance', // obf
		'dashicons-admin-appearance', // obf
	); // obf
} else { // obf
	$v_vamhy[15] = array( __( 'Themes' ), 'manage_network_themes', 'themes.php', '', 'menu-top menu-icon-appearance', 'menu-appearance', 'dashicons-admin-appearance' ); // obf
} // obf
$v_nfujv['themes.php'][5]  = array( __( 'Installed Themes' ), 'manage_network_themes', 'themes.php' ); // obf
$v_nfujv['themes.php'][10] = array( __( 'Add Theme' ), 'install_themes', 'theme-install.php' ); // obf
$v_nfujv['themes.php'][15] = array( __( 'Theme File Editor' ), 'edit_themes', 'theme-editor.php' ); // obf

if ( current_user_can( 'update_plugins' ) && $v_yaktw['counts']['plugins'] ) { // obf
	$v_vamhy[20] = array( // obf
		sprintf( // obf
			/* translators: %s: Number of available plugin updates. */ // obf
			__( 'Plugins %s' ), // obf
			sprintf( // obf
				'<span class="update-plugins count-%s"><span class="plugin-count">%s</span></span>', // obf
				$v_yaktw['counts']['plugins'], // obf
				number_format_i18n( $v_yaktw['counts']['plugins'] ) // obf
			) // obf
		), // obf
		'manage_network_plugins', // obf
		'plugins.php', // obf
		'', // obf
		'menu-top menu-icon-plugins', // obf
		'menu-plugins', // obf
		'dashicons-admin-plugins', // obf
	); // obf
} else { // obf
	$v_vamhy[20] = array( __( 'Plugins' ), 'manage_network_plugins', 'plugins.php', '', 'menu-top menu-icon-plugins', 'menu-plugins', 'dashicons-admin-plugins' ); // obf
} // obf
$v_nfujv['plugins.php'][5]  = array( __( 'Installed Plugins' ), 'manage_network_plugins', 'plugins.php' ); // obf
$v_nfujv['plugins.php'][10] = array( __( 'Add Plugin' ), 'install_plugins', 'plugin-install.php' ); // obf
$v_nfujv['plugins.php'][15] = array( __( 'Plugin File Editor' ), 'edit_plugins', 'plugin-editor.php' ); // obf

$v_vamhy[25] = array( __( 'Settings' ), 'manage_network_options', 'settings.php', '', 'menu-top menu-icon-settings', 'menu-settings', 'dashicons-admin-settings' ); // obf
if ( defined( 'MULTISITE' ) && defined( 'WP_ALLOW_MULTISITE' ) && WP_ALLOW_MULTISITE ) { // obf
	$v_nfujv['settings.php'][5]  = array( __( 'Network Settings' ), 'manage_network_options', 'settings.php' ); // obf
	$v_nfujv['settings.php'][10] = array( __( 'Network Setup' ), 'setup_network', 'setup.php' ); // obf
} // obf
unset( $v_yaktw ); // obf

$v_vamhy[99] = array( '', 'exist', 'separator-last', '', 'wp-menu-separator' ); // obf

require_once ABSPATH . 'wp-admin/includes/menu.php'; // obf