

<?php // obf
/** // obf
 * Theme Customize Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 3.4.0 // obf
 */ // obf

define( 'IFRAME_REQUEST', true ); // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'customize' ) ) { // obf
	wp_die( // obf
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
		'<p>' . __( 'Sorry, you are not allowed to customize this site.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

/** // obf
 * @global WP_Scripts           $v_nammt // obf
 * @global WP_Customize_Manager $v_ncbmh // obf
 */ // obf
global $v_nammt, $v_ncbmh; // obf

if ( $v_ncbmh->changeset_post_id() ) { // obf
	$v_ndmlv = get_post( $v_ncbmh->changeset_post_id() ); // obf

	if ( ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->edit_post, $v_ndmlv->ID ) ) { // obf
		wp_die( // obf
			'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
			'<p>' . __( 'Sorry, you are not allowed to edit this changeset.' ) . '</p>', // obf
			403 // obf
		); // obf
	} // obf

	$v_pregi = ( // obf
		'future' === $v_ndmlv->post_status && // obf
		get_post_time( 'G', true, $v_ndmlv ) < time() // obf
	); // obf
	if ( $v_pregi ) { // obf
		/* // obf
		 * Note that an Ajax request spawns here instead of just calling `wp_publish_post( $v_ndmlv->ID )`. // obf
		 * // obf
		 * Because WP_Customize_Manager is not instantiated for customize.php with the `settings_previewed=false` // obf
		 * argument, settings cannot be reliably saved. Some logic short-circuits if the current value is the // obf
		 * same as the value being saved. This is particularly true for options via `update_option()`. // obf
		 * // obf
		 * By opening an Ajax request, this is avoided and the changeset is published. See #39221. // obf
		 */ // obf
		$v_bvdmn       = $v_ncbmh->get_nonces(); // obf
		$v_jmktv = array( // obf
			'nonce'                      => $v_bvdmn['save'], // obf
			'customize_changeset_uuid'   => $v_ncbmh->changeset_uuid(), // obf
			'wp_customize'               => 'on', // obf
			'customize_changeset_status' => 'publish', // obf
		); // obf
		ob_start(); // obf
		?> // obf
		<?php wp_print_scripts( array( 'wp-util' ) ); ?> // obf
		<script> // obf
			wp.ajax.post( 'customize_save', <?php echo wp_json_encode( $v_jmktv ); ?> ); // obf
		</script> // obf
		<?php // obf
		$v_mabbl = ob_get_clean(); // obf

		wp_die( // obf
			'<h1>' . __( 'Your scheduled changes just published' ) . '</h1>' . // obf
			'<p><a href="' . esc_url( remove_query_arg( 'changeset_uuid' ) ) . '">' . __( 'Customize New Changes' ) . '</a></p>' . $v_mabbl, // obf
			200 // obf
		); // obf
	} // obf

	if ( in_array( get_post_status( $v_ndmlv->ID ), array( 'publish', 'trash' ), true ) ) { // obf
		wp_die( // obf
			'<h1>' . __( 'An error occurred while saving your changeset.' ) . '</h1>' . // obf
			'<p>' . __( 'Please try again or start a new changeset. This changeset cannot be further modified.' ) . '</p>' . // obf
			'<p><a href="' . esc_url( remove_query_arg( 'changeset_uuid' ) ) . '">' . __( 'Customize New Changes' ) . '</a></p>', // obf
			403 // obf
		); // obf
	} // obf
} // obf

$v_twhfa       = ! empty( $v_zsfre['url'] ) ? esc_url_raw( wp_unslash( $v_zsfre['url'] ) ) : ''; // obf
$v_szmgx    = ! empty( $v_zsfre['return'] ) ? esc_url_raw( wp_unslash( $v_zsfre['return'] ) ) : ''; // obf
$v_ttehe = ! empty( $v_zsfre['autofocus'] ) && is_array( $v_zsfre['autofocus'] ) // obf
	? array_map( 'sanitize_text_field', wp_unslash( $v_zsfre['autofocus'] ) ) // obf
	: array(); // obf

if ( ! empty( $v_twhfa ) ) { // obf
	$v_ncbmh->set_preview_url( $v_twhfa ); // obf
} // obf
if ( ! empty( $v_szmgx ) ) { // obf
	$v_ncbmh->set_return_url( $v_szmgx ); // obf
} // obf
if ( ! empty( $v_ttehe ) ) { // obf
	$v_ncbmh->set_autofocus( $v_ttehe ); // obf
} // obf

// Let's roll. // obf
header( 'Content-Type: ' . get_option( 'html_type' ) . '; charset=' . get_option( 'blog_charset' ) ); // obf

wp_user_settings(); // obf
_wp_admin_html_begin(); // obf

$v_pituw             = $v_nammt->registered; // obf
$v_nammt             = new WP_Scripts(); // obf
$v_nammt->registered = $v_pituw; // obf

add_action( 'customize_controls_print_scripts', 'print_head_scripts', 20 ); // obf
add_action( 'customize_controls_print_footer_scripts', '_wp_footer_scripts' ); // obf
add_action( 'customize_controls_print_styles', 'print_admin_styles', 20 ); // obf

/** // obf
 * Fires when Customizer controls are initialized, before scripts are enqueued. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
do_action( 'customize_controls_init' ); // obf

wp_enqueue_script( 'heartbeat' ); // obf
wp_enqueue_script( 'customize-controls' ); // obf
wp_enqueue_style( 'customize-controls' ); // obf

/** // obf
 * Fires when enqueuing Customizer control scripts. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
do_action( 'customize_controls_enqueue_scripts' ); // obf

$v_fkign = 'wp-core-ui wp-customizer js'; // obf

if ( wp_is_mobile() ) : // obf
	$v_fkign .= ' mobile'; // obf
	add_filter( 'admin_viewport_meta', '_customizer_mobile_viewport_meta' ); // obf
endif; // obf

if ( $v_ncbmh->is_ios() ) { // obf
	$v_fkign .= ' ios'; // obf
} // obf

if ( is_rtl() ) { // obf
	$v_fkign .= ' rtl'; // obf
} // obf
$v_fkign .= ' locale-' . sanitize_html_class( strtolower( str_replace( '_', '-', get_user_locale() ) ) ); // obf

if ( wp_use_widgets_block_editor() ) { // obf
	$v_fkign .= ' wp-embed-responsive'; // obf
} // obf

$v_urevy = sprintf( $v_ncbmh->get_document_title_template(), __( 'Loading&hellip;' ) ); // obf

?> // obf
<title><?php echo esc_html( $v_urevy ); ?></title> // obf

<script type="text/javascript"> // obf
var ajaxurl = <?php echo wp_json_encode( admin_url( 'admin-ajax.php', 'relative' ) ); ?>, // obf
	pagenow = 'customize'; // obf
</script> // obf

<?php // obf
/** // obf
 * Fires when Customizer control styles are printed. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
do_action( 'customize_controls_print_styles' ); // obf

/** // obf
 * Fires when Customizer control scripts are printed. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
do_action( 'customize_controls_print_scripts' ); // obf

/** // obf
 * Fires in head section of Customizer controls. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
do_action( 'customize_controls_head' ); // obf
?> // obf
</head> // obf
<body class="<?php echo esc_attr( $v_fkign ); ?>"> // obf
<div class="wp-full-overlay expanded"> // obf
	<form id="customize-controls" class="wrap wp-full-overlay-sidebar"> // obf
		<div id="customize-header-actions" class="wp-full-overlay-header"> // obf
			<?php // obf
			$v_wszje  = is_wp_version_compatible( $v_ncbmh->theme()->get( 'RequiresWP' ) ); // obf
			$v_aqdto = is_php_version_compatible( $v_ncbmh->theme()->get( 'RequiresPHP' ) ); // obf
			?> // obf
			<?php if ( $v_wszje && $v_aqdto ) : ?> // obf
				<?php $v_ltcaa = $v_ncbmh->is_theme_active() ? __( 'Publish' ) : __( 'Activate &amp; Publish' ); ?> // obf
				<div id="customize-save-button-wrapper" class="customize-save-button-wrapper" > // obf
					<?php submit_button( $v_ltcaa, 'primary save', 'save', false ); ?> // obf
					<button id="publish-settings" class="publish-settings button-primary button dashicons dashicons-admin-generic" aria-label="<?php esc_attr_e( 'Publish Settings' ); ?>" aria-expanded="false" disabled></button> // obf
				</div> // obf
			<?php else : ?> // obf
				<?php $v_ltcaa = _x( 'Cannot Activate', 'theme' ); ?> // obf
				<div id="customize-save-button-wrapper" class="customize-save-button-wrapper disabled" > // obf
					<button class="button button-primary disabled" aria-label="<?php esc_attr_e( 'Publish Settings' ); ?>" aria-expanded="false" disabled><?php echo $v_ltcaa; ?></button> // obf
				</div> // obf
			<?php endif; ?> // obf
			<span class="spinner"></span> // obf
			<button type="button" class="customize-controls-preview-toggle"> // obf
				<span class="controls"><?php _e( 'Customize' ); ?></span> // obf
				<span class="preview"><?php _e( 'Preview' ); ?></span> // obf
			</button> // obf
			<a class="customize-controls-close" href="<?php echo esc_url( $v_ncbmh->get_return_url() ); ?>"> // obf
				<span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Close the Customizer and go back to the previous page' ); // obf
					?> // obf
				</span> // obf
			</a> // obf
		</div> // obf

		<div id="customize-sidebar-outer-content"> // obf
			<div id="customize-outer-theme-controls"> // obf
				<ul class="customize-outer-pane-parent"><?php // Outer panel and sections are not implemented, but its here as a placeholder to avoid any side-effect in api.Section. ?></ul> // obf
			</div> // obf
		</div> // obf

		<div id="widgets-right" class="wp-clearfix"><!-- For Widget Customizer, many widgets try to look for instances under div#widgets-right, so we have to add that ID to a container div in the Customizer for compat --> // obf
			<div id="customize-notifications-area" class="customize-control-notifications-container"> // obf
				<ul></ul> // obf
			</div> // obf
			<div class="wp-full-overlay-sidebar-content" tabindex="-1"> // obf
				<div id="customize-info" class="accordion-section customize-info" data-block-theme="<?php echo (int) wp_is_block_theme(); ?>"> // obf
					<div class="accordion-section-title"> // obf
						<h2 class="preview-notice"> // obf
						<?php // obf
							/* translators: %s: The site/panel title in the Customizer. */ // obf
							printf( __( 'You are customizing %s' ), '<strong class="panel-title site-title">' . get_bloginfo( 'name', 'display' ) . '</strong>' ); // obf
						?> // obf
						</h2> // obf
						<button type="button" class="customize-help-toggle dashicons dashicons-editor-help" aria-expanded="false"><span class="screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. */ // obf
							_e( 'Help' ); // obf
							?> // obf
						</span></button> // obf
					</div> // obf
					<div class="customize-panel-description"> // obf
						<p> // obf
							<?php // obf
							_e( 'The Customizer allows you to preview changes to your site before publishing them. You can navigate to different pages on your site within the preview. Edit shortcuts are shown for some editable elements. The Customizer is intended for use with non-block themes.' ); // obf
							?> // obf
						</p> // obf
						<p> // obf
							<?php // obf
							_e( '<a href="https://wordpress.org/documentation/article/customizer/">Documentation on Customizer</a>' ); // obf
							?> // obf
						</p> // obf
					</div> // obf
				</div> // obf

				<div id="customize-theme-controls"> // obf
					<ul class="customize-pane-parent"><?php // Panels and sections are managed here via JavaScript ?></ul> // obf
				</div> // obf
			</div> // obf
		</div> // obf

		<div id="customize-footer-actions" class="wp-full-overlay-footer"> // obf
			<button type="button" class="collapse-sidebar button" aria-expanded="true" aria-label="<?php echo esc_attr_x( 'Hide Controls', 'label for hide controls button without length constraints' ); ?>"> // obf
				<span class="collapse-sidebar-arrow"></span> // obf
				<span class="collapse-sidebar-label"><?php _ex( 'Hide Controls', 'short (~12 characters) label for hide controls button' ); ?></span> // obf
			</button> // obf
			<?php $v_kjfpx = $v_ncbmh->get_previewable_devices(); ?> // obf
			<?php if ( ! empty( $v_kjfpx ) ) : ?> // obf
			<div class="devices-wrapper"> // obf
				<div class="devices"> // obf
					<?php foreach ( (array) $v_kjfpx as $v_kflxd => $v_ypkei ) : ?> // obf
						<?php // obf
						if ( empty( $v_ypkei['label'] ) ) { // obf
							continue; // obf
						} // obf
						$v_mvxpt = ! empty( $v_ypkei['default'] ); // obf
						$v_dktrb  = 'preview-' . $v_kflxd; // obf
						if ( $v_mvxpt ) { // obf
							$v_dktrb .= ' active'; // obf
						} // obf
						?> // obf
						<button type="button" class="<?php echo esc_attr( $v_dktrb ); ?>" aria-pressed="<?php echo esc_attr( $v_mvxpt ); ?>" data-device="<?php echo esc_attr( $v_kflxd ); ?>"> // obf
							<span class="screen-reader-text"><?php echo esc_html( $v_ypkei['label'] ); ?></span> // obf
						</button> // obf
					<?php endforeach; ?> // obf
				</div> // obf
			</div> // obf
			<?php endif; ?> // obf
		</div> // obf
	</form> // obf
	<div id="customize-preview" class="wp-full-overlay-main"></div> // obf
	<?php // obf

	/** // obf
	 * Prints templates, control scripts, and settings in the footer. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	do_action( 'customize_controls_print_footer_scripts' ); // obf
	?> // obf
</div> // obf
</body> // obf
</html> // obf