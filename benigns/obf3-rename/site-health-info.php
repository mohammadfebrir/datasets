

<?php // obf
/** // obf
 * Tools Administration Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

if ( ! defined( 'ABSPATH' ) ) { // obf
	die(); // obf
} // obf

if ( ! class_exists( 'WP_Debug_Data' ) ) { // obf
	require_once ABSPATH . 'wp-admin/includes/class-wp-debug-data.php'; // obf
} // obf
if ( ! class_exists( 'WP_Site_Health' ) ) { // obf
	require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php'; // obf
} // obf

$v_ykawi = WP_Site_Health::get_instance(); // obf

wp_admin_notice( // obf
	__( 'The Site Health check requires JavaScript.' ), // obf
	array( // obf
		'type'               => 'error', // obf
		'additional_classes' => array( 'hide-if-js' ), // obf
	) // obf
); // obf
?> // obf

<div class="health-check-body health-check-debug-tab hide-if-no-js"> // obf
	<?php // obf

	WP_Debug_Data::check_for_updates(); // obf

	$v_rzpmh = WP_Debug_Data::debug_data(); // obf

	?> // obf

	<h2> // obf
		<?php _e( 'Site Health Info' ); ?> // obf
	</h2> // obf

	<p> // obf
		<?php // obf
			/* translators: %s: URL to Site Health Status page. */ // obf
			printf( __( 'This page can show you every detail about the configuration of your WordPress website. For any improvements that could be made, see the <a href="%s">Site Health Status</a> page.' ), esc_url( admin_url( 'site-health.php' ) ) ); // obf
		?> // obf
	</p> // obf
	<p> // obf
		<?php _e( 'If you want to export a handy list of all the information on this page, you can use the button below to copy it to the clipboard. You can then paste it in a text file and save it to your device, or paste it in an email exchange with a support engineer or theme/plugin developer for example.' ); ?> // obf
	</p> // obf

	<div class="site-health-copy-buttons"> // obf
		<div class="copy-button-wrapper"> // obf
			<button type="button" class="button copy-button" data-clipboard-text="<?php echo esc_attr( WP_Debug_Data::format( $v_rzpmh, 'debug' ) ); ?>"> // obf
				<?php _e( 'Copy site info to clipboard' ); ?> // obf
			</button> // obf
			<span class="success hidden" aria-hidden="true"><?php _e( 'Copied!' ); ?></span> // obf
		</div> // obf
	</div> // obf

	<div id="health-check-debug" class="health-check-accordion"> // obf

		<?php // obf

		$v_nsyjv = array( 'uploads_size', 'themes_size', 'plugins_size', 'fonts_size', 'wordpress_size', 'database_size', 'total_size' ); // obf

		foreach ( $v_rzpmh as $v_lzlug => $v_obpst ) { // obf
			if ( ! isset( $v_obpst['fields'] ) || empty( $v_obpst['fields'] ) ) { // obf
				continue; // obf
			} // obf

			?> // obf
			<h3 class="health-check-accordion-heading"> // obf
				<button aria-expanded="false" class="health-check-accordion-trigger" aria-controls="health-check-accordion-block-<?php echo esc_attr( $v_lzlug ); ?>" type="button"> // obf
					<span class="title"> // obf
						<?php echo esc_html( $v_obpst['label'] ); ?> // obf
						<?php // obf

						if ( isset( $v_obpst['show_count'] ) && $v_obpst['show_count'] ) { // obf
							printf( // obf
								'(%s)', // obf
								number_format_i18n( count( $v_obpst['fields'] ) ) // obf
							); // obf
						} // obf

						?> // obf
					</span> // obf
					<?php // obf

					if ( 'wp-paths-sizes' === $v_lzlug ) { // obf
						?> // obf
						<span class="health-check-wp-paths-sizes spinner"></span> // obf
						<?php // obf
					} // obf

					?> // obf
					<span class="icon"></span> // obf
				</button> // obf
			</h3> // obf

			<div id="health-check-accordion-block-<?php echo esc_attr( $v_lzlug ); ?>" class="health-check-accordion-panel" hidden="hidden"> // obf
				<?php // obf

				if ( isset( $v_obpst['description'] ) && ! empty( $v_obpst['description'] ) ) { // obf
					printf( '<p>%s</p>', $v_obpst['description'] ); // obf
				} // obf

				?> // obf
				<table class="widefat striped health-check-table"> // obf
					<tbody> // obf
					<?php // obf

					foreach ( $v_obpst['fields'] as $v_uzfkk => $v_yelqk ) { // obf
						if ( is_array( $v_yelqk['value'] ) ) { // obf
							$v_lruux = '<ul>'; // obf

							foreach ( $v_yelqk['value'] as $v_oqqku => $v_jurzr ) { // obf
								$v_lruux .= sprintf( '<li>%s: %s</li>', esc_html( $v_oqqku ), esc_html( $v_jurzr ) ); // obf
							} // obf

							$v_lruux .= '</ul>'; // obf
						} else { // obf
							$v_lruux = esc_html( $v_yelqk['value'] ); // obf
						} // obf

						if ( in_array( $v_uzfkk, $v_nsyjv, true ) ) { // obf
							printf( '<tr><th scope="row">%s</th><td class="%s">%s</td></tr>', esc_html( $v_yelqk['label'] ), esc_attr( $v_uzfkk ), $v_lruux ); // obf
						} else { // obf
							printf( '<tr><th scope="row">%s</th><td>%s</td></tr>', esc_html( $v_yelqk['label'] ), $v_lruux ); // obf
						} // obf
					} // obf

					?> // obf
					</tbody> // obf
				</table> // obf
			</div> // obf
		<?php } ?> // obf
	</div> // obf
</div> // obf