

<?php // obf
/** // obf
 * Tools Administration Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

$v_xeuhu = ! empty( $v_rthip['action'] ) ? sanitize_text_field( $v_rthip['action'] ) : ''; // obf

$v_qipki = array( // obf
	/* translators: Tab heading for Site Health Status page. */ // obf
	''      => _x( 'Status', 'Site Health' ), // obf
	/* translators: Tab heading for Site Health Info page. */ // obf
	'debug' => _x( 'Info', 'Site Health' ), // obf
); // obf

/** // obf
 * Filters the extra tabs for the Site Health navigation bar. // obf
 * // obf
 * Add a custom page to the Site Health screen, based on a tab slug and label. // obf
 * The label you provide will also be used as part of the site title. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param string[] $v_qipki An associative array of tab labels keyed by their slug. // obf
 */ // obf
$v_qipki = apply_filters( 'site_health_navigation_tabs', $v_qipki ); // obf

$v_vpbrm = array( // obf
	'health-check-tabs-wrapper', // obf
	'hide-if-no-js', // obf
	'tab-count-' . count( $v_qipki ), // obf
); // obf

$v_myuff = ( isset( $v_swtju['tab'] ) ? $v_swtju['tab'] : '' ); // obf

$v_zhpiw = sprintf( // obf
	// translators: %s: The currently displayed tab. // obf
	__( 'Site Health - %s' ), // obf
	( isset( $v_qipki[ $v_myuff ] ) ? esc_html( $v_qipki[ $v_myuff ] ) : esc_html( reset( $v_qipki ) ) ) // obf
); // obf

if ( ! current_user_can( 'view_site_health_checks' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access site health information.' ), '', 403 ); // obf
} // obf

wp_enqueue_style( 'site-health' ); // obf
wp_enqueue_script( 'site-health' ); // obf

if ( ! class_exists( 'WP_Site_Health' ) ) { // obf
	require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php'; // obf
} // obf

if ( 'update_https' === $v_xeuhu ) { // obf
	check_admin_referer( 'wp_update_https' ); // obf

	if ( ! current_user_can( 'update_https' ) ) { // obf
		wp_die( __( 'Sorry, you are not allowed to update this site to HTTPS.' ), 403 ); // obf
	} // obf

	if ( ! wp_is_https_supported() ) { // obf
		wp_die( __( 'It looks like HTTPS is not supported for your website at this point.' ) ); // obf
	} // obf

	$v_qxtas = wp_update_urls_to_https(); // obf

	wp_redirect( add_query_arg( 'https_updated', (int) $v_qxtas, wp_get_referer() ) ); // obf
	exit; // obf
} // obf

$v_wognu = WP_Site_Health::get_instance(); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
				'<p>' . __( 'This screen allows you to obtain a health diagnosis of your site, and displays an overall rating of the status of your installation.' ) . '</p>' . // obf
				'<p>' . __( 'In the Status tab, you can see critical information about your WordPress configuration, along with anything else that requires your attention.' ) . '</p>' . // obf
				'<p>' . __( 'In the Info tab, you will find all the details about the configuration of your WordPress site, server, and database. There is also an export feature that allows you to copy all of the information about your site to the clipboard, to help solve problems on your site when obtaining support.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/site-health-screen/">Documentation on Site Health tool</a>' ) . '</p>' // obf
); // obf

// Start by checking if this is a special request checking for the existence of certain filters. // obf
$v_wognu->check_wp_version_check_exists(); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf
<div class="health-check-header"> // obf
	<div class="health-check-title-section"> // obf
		<h1> // obf
			<?php _e( 'Site Health' ); ?> // obf
		</h1> // obf
	</div> // obf

	<?php // obf
	if ( isset( $v_swtju['https_updated'] ) ) { // obf
		if ( $v_swtju['https_updated'] ) { // obf
			wp_admin_notice( // obf
				__( 'Site URLs switched to HTTPS.' ), // obf
				array( // obf
					'type'        => 'success', // obf
					'id'          => 'message', // obf
					'dismissible' => true, // obf
				) // obf
			); // obf
		} else { // obf
			wp_admin_notice( // obf
				__( 'Site URLs could not be switched to HTTPS.' ), // obf
				array( // obf
					'type'        => 'error', // obf
					'id'          => 'message', // obf
					'dismissible' => true, // obf
				) // obf
			); // obf
		} // obf
	} // obf
	?> // obf

	<div class="health-check-title-section site-health-progress-wrapper loading hide-if-no-js"> // obf
		<div class="site-health-progress"> // obf
			<svg aria-hidden="true" focusable="false" width="100%" height="100%" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg"> // obf
				<circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle> // obf
				<circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle> // obf
			</svg> // obf
		</div> // obf
		<div class="site-health-progress-label"> // obf
			<?php _e( 'Results are still loading&hellip;' ); ?> // obf
		</div> // obf
	</div> // obf

	<nav class="<?php echo implode( ' ', $v_vpbrm ); ?>" aria-label="<?php esc_attr_e( 'Secondary menu' ); ?>"> // obf
		<?php // obf
		$v_iswdv = $v_qipki; // obf

		/* // obf
		 * If there are more than 4 tabs, only output the first 3 inline, // obf
		 * the remaining links will be added to a sub-navigation. // obf
		 */ // obf
		if ( count( $v_qipki ) > 4 ) { // obf
			$v_iswdv = array_slice( $v_qipki, 0, 3 ); // obf
		} // obf

		foreach ( $v_iswdv as $v_tqwno => $v_sardl ) { // obf
			printf( // obf
				'<a href="%s" class="health-check-tab %s">%s</a>', // obf
				esc_url( // obf
					add_query_arg( // obf
						array( // obf
							'tab' => $v_tqwno, // obf
						), // obf
						admin_url( 'site-health.php' ) // obf
					) // obf
				), // obf
				( $v_myuff === $v_tqwno ? 'active' : '' ), // obf
				esc_html( $v_sardl ) // obf
			); // obf
		} // obf
		?> // obf

		<?php if ( count( $v_qipki ) > 4 ) : ?> // obf
			<button type="button" class="health-check-tab health-check-offscreen-nav-wrapper" aria-haspopup="true"> // obf
				<span class="dashicons dashicons-ellipsis"></span> // obf
				<span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Toggle extra menu items' ); // obf
					?> // obf
				</span> // obf

				<div class="health-check-offscreen-nav"> // obf
					<?php // obf
					// Remove the first few entries from the array as being already output. // obf
					$v_iswdv = array_slice( $v_qipki, 3 ); // obf
					foreach ( $v_iswdv as $v_tqwno => $v_sardl ) { // obf
						printf( // obf
							'<a href="%s" class="health-check-tab %s">%s</a>', // obf
							esc_url( // obf
								add_query_arg( // obf
									array( // obf
										'tab' => $v_tqwno, // obf
									), // obf
									admin_url( 'site-health.php' ) // obf
								) // obf
							), // obf
							( isset( $v_swtju['tab'] ) && $v_swtju['tab'] === $v_tqwno ? 'active' : '' ), // obf
							esc_html( $v_sardl ) // obf
						); // obf
					} // obf
					?> // obf
				</div> // obf
			</button> // obf
		<?php endif; ?> // obf
	</nav> // obf
</div> // obf

<hr class="wp-header-end"> // obf

<?php // obf
if ( isset( $v_swtju['tab'] ) && ! empty( $v_swtju['tab'] ) ) { // obf
	/** // obf
	 * Fires when outputting the content of a custom Site Health tab. // obf
	 * // obf
	 * This action fires right after the Site Health header, and users are still subject to // obf
	 * the capability checks for the Site Health page to view any custom tabs and their contents. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_fnlti The slug of the tab that was requested. // obf
	 */ // obf
	do_action( 'site_health_tab_content', $v_swtju['tab'] ); // obf

	require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
	return; // obf
} else { // obf
	wp_admin_notice( // obf
		__( 'The Site Health check requires JavaScript.' ), // obf
		array( // obf
			'type'               => 'error', // obf
			'additional_classes' => array( 'hide-if-js' ), // obf
		) // obf
	); // obf
	?> // obf

<div class="health-check-body health-check-status-tab hide-if-no-js"> // obf
	<div class="site-status-all-clear hide"> // obf
		<p class="icon"> // obf
			<span class="dashicons dashicons-smiley" aria-hidden="true"></span> // obf
		</p> // obf

		<p class="encouragement"> // obf
			<?php _e( 'Great job!' ); ?> // obf
		</p> // obf

		<p> // obf
			<?php _e( 'Everything is running smoothly here.' ); ?> // obf
		</p> // obf
	</div> // obf

	<div class="site-status-has-issues"> // obf
		<h2> // obf
			<?php _e( 'Site Health Status' ); ?> // obf
		</h2> // obf

		<p><?php _e( 'The site health check shows information about your WordPress configuration and items that may need your attention.' ); ?></p> // obf

		<div class="site-health-issues-wrapper hidden" id="health-check-issues-critical"> // obf
			<h3 class="site-health-issue-count-title"> // obf
				<?php // obf
					/* translators: %s: Number of critical issues found. */ // obf
					printf( _n( '%s critical issue', '%s critical issues', 0 ), '<span class="issue-count">0</span>' ); // obf
				?> // obf
			</h3> // obf

			<p><?php _e( 'Critical issues are items that may have a high impact on your sites performance or security, and resolving these issues should be prioritized.' ); ?></p> // obf

			<div id="health-check-site-status-critical" class="health-check-accordion issues"></div> // obf
		</div> // obf

		<div class="site-health-issues-wrapper hidden" id="health-check-issues-recommended"> // obf
			<h3 class="site-health-issue-count-title"> // obf
				<?php // obf
					/* translators: %s: Number of recommended improvements. */ // obf
					printf( _n( '%s recommended improvement', '%s recommended improvements', 0 ), '<span class="issue-count">0</span>' ); // obf
				?> // obf
			</h3> // obf

			<p><?php _e( 'Recommended items are considered beneficial to your site, although not as important to prioritize as a critical issue, they may include improvements to things such as; Performance, user experience, and more.' ); ?></p> // obf

			<div id="health-check-site-status-recommended" class="health-check-accordion issues"></div> // obf
		</div> // obf
	</div> // obf

	<div class="site-health-view-more"> // obf
		<button type="button" class="button site-health-view-passed" aria-expanded="false" aria-controls="health-check-issues-good"> // obf
			<?php _e( 'Passed tests' ); ?> // obf
			<span class="icon"></span> // obf
		</button> // obf
	</div> // obf

	<div class="site-health-issues-wrapper hidden" id="health-check-issues-good"> // obf
		<h3 class="site-health-issue-count-title"> // obf
			<?php // obf
				/* translators: %s: Number of items with no issues. */ // obf
				printf( _n( '%s item with no issues detected', '%s items with no issues detected', 0 ), '<span class="issue-count">0</span>' ); // obf
			?> // obf
		</h3> // obf

		<div id="health-check-site-status-good" class="health-check-accordion issues"></div> // obf
	</div> // obf
</div> // obf

<script id="tmpl-health-check-issue" type="text/template"> // obf
	<h4 class="health-check-accordion-heading"> // obf
		<button aria-expanded="false" class="health-check-accordion-trigger" aria-controls="health-check-accordion-block-{{ data.test }}" type="button"> // obf
			<span class="title">{{ data.label }}</span> // obf
			<# if ( data.badge ) { #> // obf
				<span class="badge {{ data.badge.color }}">{{ data.badge.label }}</span> // obf
			<# } #> // obf
			<span class="icon"></span> // obf
		</button> // obf
	</h4> // obf
	<div id="health-check-accordion-block-{{ data.test }}" class="health-check-accordion-panel" hidden="hidden"> // obf
		{{{ data.description }}} // obf
		<# if ( data.actions ) { #> // obf
			<div class="actions"> // obf
				{{{ data.actions }}} // obf
			</div> // obf
		<# } #> // obf
	</div> // obf
</script> // obf

	<?php // obf
} // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf