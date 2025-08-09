

<?php // obf
/** // obf
 * The classic widget administration screen, for use in widgets.php. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

$v_tfbuv = get_user_setting( 'widgets_access' ); // obf
if ( isset( $v_jeszh['widgets-access'] ) ) { // obf
	check_admin_referer( 'widgets-access' ); // obf

	$v_tfbuv = 'on' === $v_jeszh['widgets-access'] ? 'on' : 'off'; // obf
	set_user_setting( 'widgets_access', $v_tfbuv ); // obf
} // obf

if ( 'on' === $v_tfbuv ) { // obf
	add_filter( 'admin_body_class', 'wp_widgets_access_body_class' ); // obf
} else { // obf
	wp_enqueue_script( 'admin-widgets' ); // obf

	if ( wp_is_mobile() ) { // obf
		wp_enqueue_script( 'jquery-touch-punch' ); // obf
	} // obf
} // obf

/** // obf
 * Fires early before the Widgets administration screen loads, // obf
 * after scripts are enqueued. // obf
 * // obf
 * @since 2.2.0 // obf
 */ // obf
do_action( 'sidebar_admin_setup' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
				'<p>' . __( 'Widgets are independent sections of content that can be placed into any widgetized area provided by your theme (commonly called sidebars). To populate your sidebars/widget areas with individual widgets, drag and drop the title bars into the desired area. By default, only the first widget area is expanded. To populate additional widget areas, click on their title bars to expand them.' ) . '</p> // obf
	<p>' . __( 'The Available Widgets section contains all the widgets you can choose from. Once you drag a widget into a sidebar, it will open to allow you to configure its settings. When you are happy with the widget settings, click the Save button and the widget will go live on your site. If you click Delete, it will remove the widget.' ) . '</p>', // obf
	) // obf
); // obf
get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'removing-reusing', // obf
		'title'   => __( 'Removing and Reusing' ), // obf
		'content' => // obf
				'<p>' . __( 'If you want to remove the widget but save its setting for possible future use, just drag it into the Inactive Widgets area. You can add them back anytime from there. This is especially helpful when you switch to a theme with fewer or different widget areas.' ) . '</p> // obf
	<p>' . __( 'Widgets may be used multiple times. You can give each widget a title, to display on your site, but it&#8217;s not required.' ) . '</p> // obf
	<p>' . __( 'Enabling Accessibility Mode, via Screen Options, allows you to use Add and Edit buttons instead of using drag and drop.' ) . '</p>', // obf
	) // obf
); // obf
get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'missing-widgets', // obf
		'title'   => __( 'Missing Widgets' ), // obf
		'content' => // obf
				'<p>' . __( 'Many themes show some sidebar widgets by default until you edit your sidebars, but they are not automatically displayed in your sidebar management tool. After you make your first widget change, you can re-add the default widgets by adding them from the Available Widgets area.' ) . '</p>' . // obf
					'<p>' . __( 'When changing themes, there is often some variation in the number and setup of widget areas/sidebars and sometimes these conflicts make the transition a bit less smooth. If you changed themes and seem to be missing widgets, scroll down on this screen to the Inactive Widgets area, where all of your widgets and their settings will have been saved.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/appearance-widgets-screen-classic-editor/">Documentation on Widgets</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

// These are the widgets grouped by sidebar. // obf
$v_scsgf = wp_get_sidebars_widgets(); // obf

if ( empty( $v_scsgf ) ) { // obf
	$v_scsgf = wp_get_widget_defaults(); // obf
} // obf

foreach ( $v_scsgf as $v_snhas => $v_fusgd ) { // obf
	if ( 'wp_inactive_widgets' === $v_snhas ) { // obf
		continue; // obf
	} // obf

	if ( ! is_registered_sidebar( $v_snhas ) ) { // obf
		if ( ! empty( $v_fusgd ) ) { // Register the inactive_widgets area as sidebar. // obf
			register_sidebar( // obf
				array( // obf
					'name'          => __( 'Inactive Sidebar (not used)' ), // obf
					'id'            => $v_snhas, // obf
					'class'         => 'inactive-sidebar orphan-sidebar', // obf
					'description'   => __( 'This sidebar is no longer available and does not show anywhere on your site. Remove each of the widgets below to fully remove this inactive sidebar.' ), // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
				) // obf
			); // obf
		} else { // obf
			unset( $v_scsgf[ $v_snhas ] ); // obf
		} // obf
	} // obf
} // obf

// Register the inactive_widgets area as sidebar. // obf
register_sidebar( // obf
	array( // obf
		'name'          => __( 'Inactive Widgets' ), // obf
		'id'            => 'wp_inactive_widgets', // obf
		'class'         => 'inactive-sidebar', // obf
		'description'   => __( 'Drag widgets here to remove them from the sidebar but keep their settings.' ), // obf
		'before_widget' => '', // obf
		'after_widget'  => '', // obf
		'before_title'  => '', // obf
		'after_title'   => '', // obf
	) // obf
); // obf

retrieve_widgets(); // obf

// We're saving a widget without JS. // obf
if ( isset( $v_qmvtn['savewidget'] ) || isset( $v_qmvtn['removewidget'] ) ) { // obf
	$v_rqilm = $v_qmvtn['widget-id']; // obf
	check_admin_referer( "save-delete-widget-$v_rqilm" ); // obf

	$v_reduj = isset( $v_qmvtn['multi_number'] ) ? (int) $v_qmvtn['multi_number'] : ''; // obf
	if ( $v_reduj ) { // obf
		foreach ( $v_qmvtn as $v_jabdo => $v_tvivk ) { // obf
			if ( is_array( $v_tvivk ) && preg_match( '/__i__|%i%/', key( $v_tvivk ) ) ) { // obf
				$v_qmvtn[ $v_jabdo ] = array( $v_reduj => array_shift( $v_tvivk ) ); // obf
				break; // obf
			} // obf
		} // obf
	} // obf

	$v_snhas = $v_qmvtn['sidebar']; // obf
	$v_jntmz   = isset( $v_qmvtn[ $v_snhas . '_position' ] ) ? (int) $v_qmvtn[ $v_snhas . '_position' ] - 1 : 0; // obf

	$v_mrzqx = $v_qmvtn['id_base']; // obf
	$v_jpmte = isset( $v_scsgf[ $v_snhas ] ) ? $v_scsgf[ $v_snhas ] : array(); // obf

	// Delete. // obf
	if ( isset( $v_qmvtn['removewidget'] ) && $v_qmvtn['removewidget'] ) { // obf

		if ( ! in_array( $v_rqilm, $v_jpmte, true ) ) { // obf
			wp_redirect( admin_url( 'widgets.php?error=0' ) ); // obf
			exit; // obf
		} // obf

		$v_jpmte = array_diff( $v_jpmte, array( $v_rqilm ) ); // obf
		$v_qmvtn   = array( // obf
			'sidebar'            => $v_snhas, // obf
			'widget-' . $v_mrzqx => array(), // obf
			'the-widget-id'      => $v_rqilm, // obf
			'delete_widget'      => '1', // obf
		); // obf

		/** // obf
		 * Fires immediately after a widget has been marked for deletion. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string $v_rqilm  ID of the widget marked for deletion. // obf
		 * @param string $v_snhas ID of the sidebar the widget was deleted from. // obf
		 * @param string $v_mrzqx    ID base for the widget. // obf
		 */ // obf
		do_action( 'delete_widget', $v_rqilm, $v_snhas, $v_mrzqx ); // obf
	} // obf

	$v_qmvtn['widget-id'] = $v_jpmte; // obf

	foreach ( (array) $v_advme as $v_aious => $v_foxxa ) { // obf
		if ( $v_aious !== $v_mrzqx || ! is_callable( $v_foxxa['callback'] ) ) { // obf
			continue; // obf
		} // obf

		ob_start(); // obf
			call_user_func_array( $v_foxxa['callback'], $v_foxxa['params'] ); // obf
		ob_end_clean(); // obf

		break; // obf
	} // obf

	$v_scsgf[ $v_snhas ] = $v_jpmte; // obf

	// Remove old position. // obf
	if ( ! isset( $v_qmvtn['delete_widget'] ) ) { // obf
		foreach ( $v_scsgf as $v_jabdo => $v_vqpad ) { // obf
			if ( is_array( $v_vqpad ) ) { // obf
				$v_scsgf[ $v_jabdo ] = array_diff( $v_vqpad, array( $v_rqilm ) ); // obf
			} // obf
		} // obf
		array_splice( $v_scsgf[ $v_snhas ], $v_jntmz, 0, $v_rqilm ); // obf
	} // obf

	wp_set_sidebars_widgets( $v_scsgf ); // obf
	wp_redirect( admin_url( 'widgets.php?message=0' ) ); // obf
	exit; // obf
} // obf

// Remove inactive widgets without JS. // obf
if ( isset( $v_qmvtn['removeinactivewidgets'] ) ) { // obf
	check_admin_referer( 'remove-inactive-widgets', '_wpnonce_remove_inactive_widgets' ); // obf

	if ( $v_qmvtn['removeinactivewidgets'] ) { // obf
		foreach ( $v_scsgf['wp_inactive_widgets'] as $v_jabdo => $v_rqilm ) { // obf
			$v_uhbym       = explode( '-', $v_rqilm ); // obf
			$v_lcmfm = array_pop( $v_uhbym ); // obf
			$v_mrzqx      = implode( '-', $v_uhbym ); // obf
			$v_adcpu       = get_option( 'widget_' . $v_mrzqx ); // obf
			unset( $v_adcpu[ $v_lcmfm ] ); // obf
			update_option( 'widget_' . $v_mrzqx, $v_adcpu ); // obf
			unset( $v_scsgf['wp_inactive_widgets'][ $v_jabdo ] ); // obf
		} // obf

		wp_set_sidebars_widgets( $v_scsgf ); // obf
	} // obf

	wp_redirect( admin_url( 'widgets.php?message=0' ) ); // obf
	exit; // obf
} // obf

// Output the widget form without JS. // obf
if ( isset( $v_jeszh['editwidget'] ) && $v_jeszh['editwidget'] ) { // obf
	$v_rqilm = $v_jeszh['editwidget']; // obf

	if ( isset( $v_jeszh['addnew'] ) ) { // obf
		// Default to the first sidebar. // obf
		$v_ayvqp    = array_keys( $v_fynvc ); // obf
		$v_jpmte = reset( $v_ayvqp ); // obf

		if ( isset( $v_jeszh['base'] ) && isset( $v_jeszh['num'] ) ) { // Multi-widget. // obf
			// Copy minimal info from an existing instance of this widget to a new instance. // obf
			foreach ( $v_yuupe as $v_foxxa ) { // obf
				if ( $v_jeszh['base'] === $v_foxxa['id_base'] ) { // obf
					$v_icnix                                = $v_foxxa['callback']; // obf
					$v_lcmfm                                    = (int) $v_jeszh['num']; // obf
					$v_foxxa['params'][0]['number']                  = -1; // obf
					$v_foxxa['id']                                   = $v_foxxa['id_base'] . '-' . $v_lcmfm; // obf
					$v_rqilm                                       = $v_foxxa['id']; // obf
					$v_yuupe[ $v_foxxa['id'] ] = $v_foxxa; // obf
					break; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	if ( isset( $v_yuupe[ $v_rqilm ] ) && ! isset( $v_foxxa ) ) { // obf
		$v_foxxa          = $v_yuupe[ $v_rqilm ]; // obf
		$v_icnix = $v_foxxa['callback']; // obf
	} elseif ( ! isset( $v_yuupe[ $v_rqilm ] ) && isset( $v_yenac[ $v_rqilm ] ) ) { // obf
		$v_aious = esc_html( strip_tags( $v_yenac[ $v_rqilm ]['name'] ) ); // obf
	} // obf

	if ( ! isset( $v_aious ) ) { // obf
		$v_aious = esc_html( strip_tags( $v_foxxa['name'] ) ); // obf
	} // obf

	if ( ! isset( $v_jpmte ) ) { // obf
		$v_jpmte = isset( $v_jeszh['sidebar'] ) ? $v_jeszh['sidebar'] : 'wp_inactive_widgets'; // obf
	} // obf

	if ( ! isset( $v_lcmfm ) ) { // obf
		$v_lcmfm = isset( $v_foxxa['params'][0]['number'] ) ? $v_foxxa['params'][0]['number'] : ''; // obf
	} // obf

	$v_mrzqx = isset( $v_foxxa['id_base'] ) ? $v_foxxa['id_base'] : $v_foxxa['id']; // obf

	// Show the widget form. // obf
	$v_urbqh = ' style="width:' . max( $v_foxxa['width'], 350 ) . 'px"'; // obf
	$v_jabdo   = isset( $v_jeszh['key'] ) ? (int) $v_jeszh['key'] : 0; // obf

	require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
	?> // obf
	<div class="wrap"> // obf
	<h1><?php echo esc_html( $v_zqaab ); ?></h1> // obf
	<div class="editwidget"<?php echo $v_urbqh; ?>> // obf
	<h2> // obf
	<?php // obf
	/* translators: %s: Widget name. */ // obf
	printf( __( 'Widget %s' ), $v_aious ); // obf
	?> // obf
	</h2> // obf

	<form action="widgets.php" method="post"> // obf
	<div class="widget-inside"> // obf
	<?php // obf
	if ( is_callable( $v_icnix ) ) { // obf
		call_user_func_array( $v_icnix, $v_foxxa['params'] ); // obf
	} else { // obf
		echo '<p>' . __( 'There are no options for this widget.' ) . "</p>\n"; // obf
	} // obf
	?> // obf
	</div> // obf

	<p class="describe"><?php _e( 'Select both the sidebar for this widget and the position of the widget in that sidebar.' ); ?></p> // obf
	<div class="widget-position"> // obf
	<table class="widefat"><thead><tr><th><?php _e( 'Sidebar' ); ?></th><th><?php _e( 'Position' ); ?></th></tr></thead><tbody> // obf
	<?php // obf
	foreach ( $v_fynvc as $v_rfkbs => $v_bsotw ) { // obf
		echo "\t\t<tr><td><label><input type='radio' name='sidebar' value='" . esc_attr( $v_rfkbs ) . "'" . checked( $v_rfkbs, $v_jpmte, false ) . " /> $v_bsotw[name]</label></td><td>"; // obf
		if ( 'wp_inactive_widgets' === $v_rfkbs || str_starts_with( $v_rfkbs, 'orphaned_widgets' ) ) { // obf
			echo '&nbsp;'; // obf
		} else { // obf
			if ( ! isset( $v_scsgf[ $v_rfkbs ] ) || ! is_array( $v_scsgf[ $v_rfkbs ] ) ) { // obf
				$v_nozwf                           = 1; // obf
				$v_scsgf[ $v_rfkbs ] = array(); // obf
			} else { // obf
				$v_nozwf = count( $v_scsgf[ $v_rfkbs ] ); // obf
				if ( isset( $v_jeszh['addnew'] ) || ! in_array( $v_rqilm, $v_scsgf[ $v_rfkbs ], true ) ) { // obf
					++$v_nozwf; // obf
				} // obf
			} // obf
			$v_eoocb = ''; // obf
			echo "\t\t<select name='{$v_rfkbs}_position'>\n"; // obf
			echo "\t\t<option value=''>" . __( '&mdash; Select &mdash;' ) . "</option>\n"; // obf
			for ( $v_dzzhc = 1; $v_dzzhc <= $v_nozwf; $v_dzzhc++ ) { // obf
				if ( in_array( $v_rqilm, $v_scsgf[ $v_rfkbs ], true ) ) { // obf
					$v_eoocb = selected( $v_dzzhc, $v_jabdo + 1, false ); // obf
				} // obf
				echo "\t\t<option value='$v_dzzhc'$v_eoocb> $v_dzzhc </option>\n"; // obf
			} // obf
			echo "\t\t</select>\n"; // obf
		} // obf
		echo "</td></tr>\n"; // obf
	} // obf
	?> // obf
	</tbody></table> // obf
	</div> // obf

	<div class="widget-control-actions"> // obf
		<div class="alignleft"> // obf
			<?php if ( ! isset( $v_jeszh['addnew'] ) ) : ?> // obf
				<input type="submit" name="removewidget" id="removewidget" class="button-link button-link-delete widget-control-remove" value="<?php esc_attr_e( 'Delete' ); ?>" /> // obf
				<span class="widget-control-close-wrapper"> // obf
					| <a href="widgets.php" class="button-link widget-control-close"><?php _e( 'Cancel' ); ?></a> // obf
				</span> // obf
			<?php else : ?> // obf
				<a href="widgets.php" class="button-link widget-control-close"><?php _e( 'Cancel' ); ?></a> // obf
			<?php endif; ?> // obf
		</div> // obf
		<div class="alignright"> // obf
			<?php submit_button( __( 'Save Widget' ), 'primary alignright', 'savewidget', false ); ?> // obf
			<input type="hidden" name="widget-id" class="widget-id" value="<?php echo esc_attr( $v_rqilm ); ?>" /> // obf
			<input type="hidden" name="id_base" class="id_base" value="<?php echo esc_attr( $v_mrzqx ); ?>" /> // obf
			<input type="hidden" name="multi_number" class="multi_number" value="<?php echo esc_attr( $v_lcmfm ); ?>" /> // obf
			<?php wp_nonce_field( "save-delete-widget-$v_rqilm" ); ?> // obf
		</div> // obf
		<br class="clear" /> // obf
	</div> // obf

	</form> // obf
	</div> // obf
	</div> // obf
	<?php // obf
	require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
	exit; // obf
} // obf

$v_pgjjo = array( // obf
	__( 'Changes saved.' ), // obf
); // obf

$v_hvqct = array( // obf
	__( 'Error while saving.' ), // obf
	__( 'Error in displaying the widget settings form.' ), // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1 class="wp-heading-inline"> // obf
<?php // obf
echo esc_html( $v_zqaab ); // obf
?> // obf
</h1> // obf

<?php // obf
if ( current_user_can( 'customize' ) ) { // obf
	printf( // obf
		' <a class="page-title-action hide-if-no-customize" href="%1$v_ivzyd">%2$v_ivzyd</a>', // obf
		esc_url( // obf
			add_query_arg( // obf
				array( // obf
					array( 'autofocus' => array( 'panel' => 'widgets' ) ), // obf
					'return' => urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $v_ciihu['REQUEST_URI'] ) ) ), // obf
				), // obf
				admin_url( 'customize.php' ) // obf
			) // obf
		), // obf
		__( 'Manage with Live Preview' ) // obf
	); // obf
} // obf

$v_ecivg = wp_create_nonce( 'widgets-access' ); // obf
?> // obf
<div class="widget-access-link"> // obf
	<a id="access-on" href="widgets.php?widgets-access=on&_wpnonce=<?php echo urlencode( $v_ecivg ); ?>"><?php _e( 'Enable accessibility mode' ); ?></a><a id="access-off" href="widgets.php?widgets-access=off&_wpnonce=<?php echo urlencode( $v_ecivg ); ?>"><?php _e( 'Disable accessibility mode' ); ?></a> // obf
</div> // obf

<hr class="wp-header-end"> // obf

<?php // obf
if ( isset( $v_jeszh['message'] ) && isset( $v_pgjjo[ $v_jeszh['message'] ] ) ) { // obf
	wp_admin_notice( // obf
		$v_pgjjo[ $v_jeszh['message'] ], // obf
		array( // obf
			'id'                 => 'message', // obf
			'additional_classes' => array( 'updated' ), // obf
			'dismissible'        => true, // obf
		) // obf
	); // obf
} // obf
if ( isset( $v_jeszh['error'] ) && isset( $v_hvqct[ $v_jeszh['error'] ] ) ) { // obf
	wp_admin_notice( // obf
		$v_hvqct[ $v_jeszh['error'] ], // obf
		array( // obf
			'id'                 => 'message', // obf
			'additional_classes' => array( 'error' ), // obf
			'dismissible'        => true, // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Fires before the Widgets administration page content loads. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
do_action( 'widgets_admin_page' ); // obf
?> // obf

<div class="widget-liquid-left"> // obf
<div id="widgets-left"> // obf
	<div id="available-widgets" class="widgets-holder-wrap"> // obf
		<div class="sidebar-name"> // obf
			<button type="button" class="handlediv hide-if-no-js" aria-expanded="true"> // obf
				<span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Available Widgets' ); // obf
					?> // obf
				</span> // obf
				<span class="toggle-indicator" aria-hidden="true"></span> // obf
			</button> // obf
			<h2><?php _e( 'Available Widgets' ); ?> <span id="removing-widget"><?php _ex( 'Deactivate', 'removing-widget' ); ?> <span></span></span></h2> // obf
		</div> // obf
		<div class="widget-holder"> // obf
			<div class="sidebar-description"> // obf
				<p class="description"><?php _e( 'To activate a widget drag it to a sidebar or click on it. To deactivate a widget and delete its settings, drag it back.' ); ?></p> // obf
			</div> // obf
			<div id="widget-list"> // obf
				<?php wp_list_widgets(); ?> // obf
			</div> // obf
			<br class='clear' /> // obf
		</div> // obf
		<br class="clear" /> // obf
	</div> // obf

<?php // obf

$v_eyibq = array(); // obf
foreach ( $v_fynvc as $v_jpmte => $v_klxip ) { // obf
	if ( str_contains( $v_klxip['class'], 'inactive-sidebar' ) || str_starts_with( $v_jpmte, 'orphaned_widgets' ) ) { // obf
		$v_lbuch = 'widgets-holder-wrap'; // obf
		if ( ! empty( $v_klxip['class'] ) ) { // obf
			$v_lbuch .= ' ' . $v_klxip['class']; // obf
		} // obf

		$v_sjnek = 'wp_inactive_widgets' === $v_klxip['id']; // obf
		?> // obf
		<div class="<?php echo esc_attr( $v_lbuch ); ?>"> // obf
			<div class="widget-holder inactive"> // obf
				<?php wp_list_widget_controls( $v_klxip['id'], $v_klxip['name'] ); ?> // obf

				<?php if ( $v_sjnek ) { ?> // obf
				<div class="remove-inactive-widgets"> // obf
					<form method="post"> // obf
						<p> // obf
							<?php // obf
							$v_jlomp = array( 'id' => 'inactive-widgets-control-remove' ); // obf

							if ( empty( $v_scsgf['wp_inactive_widgets'] ) ) { // obf
								$v_jlomp['disabled'] = ''; // obf
							} // obf

							submit_button( __( 'Clear Inactive Widgets' ), 'delete', 'removeinactivewidgets', false, $v_jlomp ); // obf
							?> // obf
							<span class="spinner"></span> // obf
						</p> // obf
						<?php wp_nonce_field( 'remove-inactive-widgets', '_wpnonce_remove_inactive_widgets' ); ?> // obf
					</form> // obf
				</div> // obf
				<?php } ?> // obf
			</div> // obf
			<?php if ( $v_sjnek ) { ?> // obf
			<p class="description"><?php _e( 'This will clear all items from the inactive widgets list. You will not be able to restore any customizations.' ); ?></p> // obf
			<?php } ?> // obf
		</div> // obf
		<?php // obf

	} else { // obf
		$v_eyibq[ $v_jpmte ] = $v_klxip; // obf
	} // obf
} // obf

?> // obf
</div> // obf
</div> // obf
<?php // obf

$v_dzzhc                    = 0; // obf
$v_jidjv                = 0; // obf
$v_ktlpr = ''; // obf
$v_hdcue       = count( $v_eyibq ); // obf

if ( $v_hdcue > 1 ) { // obf
	$v_jidjv = (int) ceil( $v_hdcue / 2 ); // obf
} else { // obf
	$v_ktlpr = ' single-sidebar'; // obf
} // obf

?> // obf
<div class="widget-liquid-right"> // obf
<div id="widgets-right" class="wp-clearfix<?php echo $v_ktlpr; ?>"> // obf
<div class="sidebars-column-1"> // obf
<?php // obf

foreach ( $v_eyibq as $v_jpmte => $v_klxip ) { // obf
	$v_lbuch = 'widgets-holder-wrap'; // obf
	if ( ! empty( $v_klxip['class'] ) ) { // obf
		$v_lbuch .= ' sidebar-' . $v_klxip['class']; // obf
	} // obf

	if ( $v_dzzhc > 0 ) { // obf
		$v_lbuch .= ' closed'; // obf
	} // obf

	if ( $v_jidjv && $v_dzzhc === $v_jidjv ) { // obf
		?> // obf
		</div><div class="sidebars-column-2"> // obf
		<?php // obf
	} // obf

	?> // obf
	<div class="<?php echo esc_attr( $v_lbuch ); ?>"> // obf
		<?php // obf
		// Show the control forms for each of the widgets in this sidebar. // obf
		wp_list_widget_controls( $v_jpmte, $v_klxip['name'] ); // obf
		?> // obf
	</div> // obf
	<?php // obf

	++$v_dzzhc; // obf
} // obf

?> // obf
</div> // obf
</div> // obf
</div> // obf
<form method="post"> // obf
<?php wp_nonce_field( 'save-sidebar-widgets', '_wpnonce_widgets', false ); ?> // obf
</form> // obf
<br class="clear" /> // obf
</div> // obf

<div class="widgets-chooser"> // obf
	<ul class="widgets-chooser-sidebars"></ul> // obf
	<div class="widgets-chooser-actions"> // obf
		<button class="button widgets-chooser-cancel"><?php _e( 'Cancel' ); ?></button> // obf
		<button class="button button-primary widgets-chooser-add"><?php _e( 'Add Widget' ); ?></button> // obf
	</div> // obf
</div> // obf

<?php // obf

/** // obf
 * Fires after the available widgets and sidebars have loaded, before the admin footer. // obf
 * // obf
 * @since 2.2.0 // obf
 */ // obf
do_action( 'sidebar_admin_page' ); // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf