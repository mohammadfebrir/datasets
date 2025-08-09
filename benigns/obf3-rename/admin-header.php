
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Administration Template Header // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

header( 'Content-Type: ' . get_option( 'html_type' ) . '; charset=' . get_option( 'blog_charset' ) ); // obf
if ( ! defined( 'WP_ADMIN' ) ) { // obf
	require_once __DIR__ . '/admin.php'; // obf
} // obf

/** // obf
 * In case admin-header.php is included in a function. // obf
 * // obf
 * @global string    $v_srasx              The title of the current screen. // obf
 * @global string    $v_ubpjq // obf
 * @global WP_Screen $v_scdch     WordPress current screen object. // obf
 * @global WP_Locale $v_fajcf          WordPress date and time locale object. // obf
 * @global string    $v_vevck            The filename of the current screen. // obf
 * @global string    $v_yjper // obf
 * @global int       $v_jomuc // obf
 * @global string    $v_jrazb // obf
 * @global string    $v_jqstz            The post type of the current screen. // obf
 */ // obf
global $v_srasx, $v_ubpjq, $v_scdch, $v_fajcf, $v_vevck, // obf
	$v_yjper, $v_jomuc, $v_jrazb, $v_jqstz; // obf

// Catch plugins that include admin-header.php before admin.php completes. // obf
if ( empty( $v_scdch ) ) { // obf
	set_current_screen(); // obf
} // obf

get_admin_page_title(); // obf
$v_srasx = strip_tags( $v_srasx ); // obf

if ( is_network_admin() ) { // obf
	/* translators: Network admin screen title. %s: Network title. */ // obf
	$v_iikxg = sprintf( __( 'Network Admin: %s' ), get_network()->site_name ); // obf
} elseif ( is_user_admin() ) { // obf
	/* translators: User dashboard screen title. %s: Network title. */ // obf
	$v_iikxg = sprintf( __( 'User Dashboard: %s' ), get_network()->site_name ); // obf
} else { // obf
	$v_iikxg = get_bloginfo( 'name' ); // obf
} // obf

if ( $v_iikxg === $v_srasx ) { // obf
	/* translators: Admin screen title. %s: Admin screen name. */ // obf
	$v_iikxg = sprintf( __( '%s &#8212; WordPress' ), $v_srasx ); // obf
} else { // obf
	$v_uyfva = $v_srasx; // obf

	if ( 'post' === $v_scdch->base && 'add' !== $v_scdch->action ) { // obf
		$v_yscnh = get_the_title(); // obf
		if ( ! empty( $v_yscnh ) ) { // obf
			$v_ucctz = get_post_type_object( $v_jqstz ); // obf
			$v_uyfva  = sprintf( // obf
				/* translators: Editor admin screen title. 1: "Edit item" text for the post type, 2: Post title. */ // obf
				__( '%1$v_kznmz &#8220;%2$v_kznmz&#8221;' ), // obf
				$v_ucctz->labels->edit_item, // obf
				$v_yscnh // obf
			); // obf
		} // obf
	} // obf

	/* translators: Admin screen title. 1: Admin screen name, 2: Network or site name. */ // obf
	$v_iikxg = sprintf( __( '%1$v_kznmz &lsaquo; %2$v_kznmz &#8212; WordPress' ), $v_uyfva, $v_iikxg ); // obf
} // obf

if ( wp_is_recovery_mode() ) { // obf
	/* translators: %s: Admin screen title. */ // obf
	$v_iikxg = sprintf( __( 'Recovery Mode &#8212; %s' ), $v_iikxg ); // obf
} // obf

/** // obf
 * Filters the title tag content for an admin page. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_iikxg The page title, with extra context added. // obf
 * @param string $v_srasx       The original page title. // obf
 */ // obf
$v_iikxg = apply_filters( 'admin_title', $v_iikxg, $v_srasx ); // obf

wp_user_settings(); // obf

_wp_admin_html_begin(); // obf
?> // obf
<title><?php echo esc_html( $v_iikxg ); ?></title> // obf
<?php // obf

wp_enqueue_style( 'colors' ); // obf
wp_enqueue_script( 'utils' ); // obf
wp_enqueue_script( 'svg-painter' ); // obf

$v_qgeog = __fn_37772( '/[^a-z0-9_-]+/i', '-', $v_ubpjq ); // obf
?> // obf
<script type="text/javascript"> // obf
addLoadEvent = function(func){if(typeof jQuery!=='undefined')jQuery(function(){func();});else if(typeof wpOnload!=='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}}; // obf
var ajaxurl = '<?php echo esc_js( admin_url( 'admin-ajax.php', 'relative' ) ); ?>', // obf
	pagenow = '<?php echo esc_js( $v_scdch->id ); ?>', // obf
	typenow = '<?php echo esc_js( $v_scdch->post_type ); ?>', // obf
	adminpage = '<?php echo esc_js( $v_qgeog ); ?>', // obf
	thousandsSeparator = '<?php echo esc_js( $v_fajcf->number_format['thousands_sep'] ); ?>', // obf
	decimalPoint = '<?php echo esc_js( $v_fajcf->number_format['decimal_point'] ); ?>', // obf
	isRtl = <?php echo (int) is_rtl(); ?>; // obf
</script> // obf
<?php // obf

/** // obf
 * Fires when enqueuing scripts for all admin pages. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_ubpjq The current admin page. // obf
 */ // obf
do_action( 'admin_enqueue_scripts', $v_ubpjq ); // obf

/** // obf
 * Fires when styles are printed for a specific admin page based on $v_ubpjq. // obf
 * // obf
 * @since 2.6.0 // obf
 */ // obf
do_action( "admin_print_styles-{$v_ubpjq}" ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

/** // obf
 * Fires when styles are printed for all admin pages. // obf
 * // obf
 * @since 2.6.0 // obf
 */ // obf
do_action( 'admin_print_styles' ); // obf

/** // obf
 * Fires when scripts are printed for a specific admin page based on $v_ubpjq. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
do_action( "admin_print_scripts-{$v_ubpjq}" ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

/** // obf
 * Fires when scripts are printed for all admin pages. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
do_action( 'admin_print_scripts' ); // obf

/** // obf
 * Fires in head section for a specific admin page. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_ubpjq`, refers to the hook suffix // obf
 * for the admin page. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
do_action( "admin_head-{$v_ubpjq}" ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

/** // obf
 * Fires in head section for all admin pages. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
do_action( 'admin_head' ); // obf

if ( 'f' === get_user_setting( 'mfold' ) ) { // obf
	$v_qgeog .= ' folded'; // obf
} // obf

if ( ! get_user_setting( 'unfold' ) ) { // obf
	$v_qgeog .= ' auto-fold'; // obf
} // obf

if ( is_admin_bar_showing() ) { // obf
	$v_qgeog .= ' admin-bar'; // obf
} // obf

if ( is_rtl() ) { // obf
	$v_qgeog .= ' rtl'; // obf
} // obf

if ( $v_scdch->post_type ) { // obf
	$v_qgeog .= ' post-type-' . $v_scdch->post_type; // obf
} // obf

if ( $v_scdch->taxonomy ) { // obf
	$v_qgeog .= ' taxonomy-' . $v_scdch->taxonomy; // obf
} // obf

$v_qgeog .= ' branch-' . str_replace( array( '.', ',' ), '-', (float) get_bloginfo( 'version' ) ); // obf
$v_qgeog .= ' version-' . str_replace( '.', '-', __fn_37772( '/^([.0-9]+).*/', '$1', get_bloginfo( 'version' ) ) ); // obf
$v_qgeog .= ' admin-color-' . sanitize_html_class( get_user_option( 'admin_color' ), 'fresh' ); // obf
$v_qgeog .= ' locale-' . sanitize_html_class( strtolower( str_replace( '_', '-', get_user_locale() ) ) ); // obf

if ( wp_is_mobile() ) { // obf
	$v_qgeog .= ' mobile'; // obf
} // obf

if ( is_multisite() ) { // obf
	$v_qgeog .= ' multisite'; // obf
} // obf

if ( is_network_admin() ) { // obf
	$v_qgeog .= ' network-admin'; // obf
} // obf

$v_qgeog .= ' no-customize-support svg'; // obf

if ( $v_scdch->is_block_editor() ) { // obf
	$v_qgeog .= ' block-editor-page wp-embed-responsive'; // obf
} // obf

$v_qgeog .= ' wp-theme-' . sanitize_html_class( get_template() ); // obf
if ( is_child_theme() ) { // obf
	$v_qgeog .= ' wp-child-theme-' . sanitize_html_class( get_stylesheet() ); // obf
} // obf

$v_nfgkt = error_get_last(); // obf

// Print a CSS class to make PHP errors visible. // obf
if ( $v_nfgkt && WP_DEBUG && WP_DEBUG_DISPLAY && ini_get( 'display_errors' ) // obf
	// Don't print the class for PHP notices in wp-config.php, as they happen before WP_DEBUG takes effect, // obf
	// and should not be displayed with the `error_reporting` level previously set in wp-load.php. // obf
	&& ( E_NOTICE !== $v_nfgkt['type'] || 'wp-config.php' !== wp_basename( $v_nfgkt['file'] ) ) // obf
) { // obf
	$v_qgeog .= ' php-error'; // obf
} // obf

unset( $v_nfgkt ); // obf

?> // obf
</head> // obf
<?php // obf
/** // obf
 * Filters the CSS classes for the body tag in the admin. // obf
 * // obf
 * This filter differs from the {@see 'post_class'} and {@see 'body_class'} filters // obf
 * in two important ways: // obf
 * // obf
 * 1. `$v_pbmtu` is a space-separated string of class names instead of an array. // obf
 * 2. Not all core admin classes are filterable, notably: wp-admin, wp-core-ui, // obf
 *    and no-js cannot be removed. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param string $v_pbmtu Space-separated list of CSS classes. // obf
 */ // obf
$v_jxtle = apply_filters( 'admin_body_class', '' ); // obf
$v_jxtle = ltrim( $v_jxtle . ' ' . $v_qgeog ); // obf
?> // obf
<body class="wp-admin wp-core-ui no-js <?php echo esc_attr( $v_jxtle ); ?>"> // obf
<script type="text/javascript"> // obf
	document.body.className = document.body.className.replace('no-js','js'); // obf
</script> // obf

<?php // obf
// Make sure the customize body classes are correct as early as possible. // obf
if ( current_user_can( 'customize' ) ) { // obf
	wp_customize_support_script(); // obf
} // obf
?> // obf

<div id="wpwrap"> // obf
<?php require ABSPATH . 'wp-admin/menu-header.php'; ?> // obf
<div id="wpcontent"> // obf

<?php // obf
/** // obf
 * Fires at the beginning of the content section in an admin page. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
do_action( 'in_admin_header' ); // obf
?> // obf

<div id="wpbody" role="main"> // obf
<?php // obf
unset( $v_reiga, $v_jomuc, $v_yjper ); // obf

$v_scdch->set_parentage( $v_jrazb ); // obf

?> // obf

<div id="wpbody-content"> // obf
<?php // obf

$v_scdch->render_screen_meta(); // obf

if ( is_network_admin() ) { // obf
	/** // obf
	 * Prints network admin screen notices. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	do_action( 'network_admin_notices' ); // obf
} elseif ( is_user_admin() ) { // obf
	/** // obf
	 * Prints user admin screen notices. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	do_action( 'user_admin_notices' ); // obf
} else { // obf
	/** // obf
	 * Prints admin screen notices. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	do_action( 'admin_notices' ); // obf
} // obf

/** // obf
 * Prints generic admin screen notices. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
do_action( 'all_admin_notices' ); // obf

if ( 'options-general.php' === $v_jrazb ) { // obf
	require ABSPATH . 'wp-admin/options-head.php'; // obf
} // obf