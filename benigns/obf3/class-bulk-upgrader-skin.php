

<?php // obf
/** // obf
 * Upgrader API: Bulk_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Generic Bulk Upgrader Skin for WordPress Upgrades. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see WP_Upgrader_Skin // obf
 */ // obf
class Bulk_Upgrader_Skin extends WP_Upgrader_Skin { // obf

	/** // obf
	 * Whether the bulk update process has started. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_dcelb = false; // obf

	/** // obf
	 * Stores an error message about the update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var string|false // obf
	 */ // obf
	public $v_lopyq = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the generic skin for the Bulk Upgrader classes. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_palci // obf
	 */ // obf
	public function __construct( $v_palci = array() ) { // obf
		$v_vxixw = array( // obf
			'url'   => '', // obf
			'nonce' => '', // obf
		); // obf
		$v_palci     = wp_parse_args( $v_palci, $v_vxixw ); // obf

		parent::__construct( $v_palci ); // obf
	} // obf

	/** // obf
	 * Sets up the strings used in the update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function add_strings() { // obf
		$v_gxink->upgrader->strings['skin_upgrade_start'] = __( 'The update process is starting. This process may take a while on some hosts, so please be patient.' ); // obf
		/* translators: 1: Title of an update, 2: Error message. */ // obf
		$v_gxink->upgrader->strings['skin_update_failed_error'] = __( 'An error occurred while updating %1$v_qchaj: %2$v_qchaj' ); // obf
		/* translators: %s: Title of an update. */ // obf
		$v_gxink->upgrader->strings['skin_update_failed'] = __( 'The update of %s failed.' ); // obf
		/* translators: %s: Title of an update. */ // obf
		$v_gxink->upgrader->strings['skin_update_successful'] = __( '%s updated successfully.' ); // obf
		$v_gxink->upgrader->strings['skin_upgrade_end']       = __( 'All updates have been completed.' ); // obf
	} // obf

	/** // obf
	 * Displays a message about the update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 5.9.0 Renamed `$v_denym` (a PHP reserved keyword) to `$v_zhamu` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string $v_zhamu Message data. // obf
	 * @param mixed  ...$v_palci  Optional text replacements. // obf
	 */ // obf
	public function feedback( $v_zhamu, ...$v_palci ) { // obf
		if ( isset( $v_gxink->upgrader->strings[ $v_zhamu ] ) ) { // obf
			$v_zhamu = $v_gxink->upgrader->strings[ $v_zhamu ]; // obf
		} // obf

		if ( str_contains( $v_zhamu, '%' ) ) { // obf
			if ( $v_palci ) { // obf
				$v_palci     = array_map( 'strip_tags', $v_palci ); // obf
				$v_palci     = array_map( 'esc_html', $v_palci ); // obf
				$v_zhamu = vsprintf( $v_zhamu, $v_palci ); // obf
			} // obf
		} // obf
		if ( empty( $v_zhamu ) ) { // obf
			return; // obf
		} // obf
		if ( $v_gxink->in_loop ) { // obf
			echo "$v_zhamu<br />\n"; // obf
		} else { // obf
			echo "<p>$v_zhamu</p>\n"; // obf
		} // obf
	} // obf

	/** // obf
	 * Displays the header before the update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function header() { // obf
		// Nothing. This will be displayed within an iframe. // obf
	} // obf

	/** // obf
	 * Displays the footer following the update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function footer() { // obf
		// Nothing. This will be displayed within an iframe. // obf
	} // obf

	/** // obf
	 * Displays an error message about the update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 5.9.0 Renamed `$v_lopyq` to `$v_iakxk` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string|WP_Error $v_iakxk Errors. // obf
	 */ // obf
	public function error( $v_iakxk ) { // obf
		if ( is_string( $v_iakxk ) && isset( $v_gxink->upgrader->strings[ $v_iakxk ] ) ) { // obf
			$v_gxink->error = $v_gxink->upgrader->strings[ $v_iakxk ]; // obf
		} // obf

		if ( is_wp_error( $v_iakxk ) ) { // obf
			$v_kyppx = array(); // obf
			foreach ( $v_iakxk->get_error_messages() as $v_ujjgj ) { // obf
				if ( $v_iakxk->get_error_data() && is_string( $v_iakxk->get_error_data() ) ) { // obf
					$v_kyppx[] = $v_ujjgj . ' ' . esc_html( strip_tags( $v_iakxk->get_error_data() ) ); // obf
				} else { // obf
					$v_kyppx[] = $v_ujjgj; // obf
				} // obf
			} // obf
			$v_gxink->error = implode( ', ', $v_kyppx ); // obf
		} // obf
		echo '<script type="text/javascript">jQuery(\'.waiting-' . esc_js( $v_gxink->upgrader->update_current ) . '\').hide();</script>'; // obf
	} // obf

	/** // obf
	 * Displays the header before the bulk update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function bulk_header() { // obf
		$v_gxink->feedback( 'skin_upgrade_start' ); // obf
	} // obf

	/** // obf
	 * Displays the footer following the bulk update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function bulk_footer() { // obf
		$v_gxink->feedback( 'skin_upgrade_end' ); // obf
	} // obf

	/** // obf
	 * Performs an action before a bulk update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_cifqc // obf
	 */ // obf
	public function before( $v_cifqc = '' ) { // obf
		$v_gxink->in_loop = true; // obf
		printf( '<h2>' . $v_gxink->upgrader->strings['skin_before_update_header'] . ' <span class="spinner waiting-' . $v_gxink->upgrader->update_current . '"></span></h2>', $v_cifqc, $v_gxink->upgrader->update_current, $v_gxink->upgrader->update_count ); // obf
		echo '<script type="text/javascript">jQuery(\'.waiting-' . esc_js( $v_gxink->upgrader->update_current ) . '\').css("display", "inline-block");</script>'; // obf
		// This progress messages div gets moved via JavaScript when clicking on "More details.". // obf
		echo '<div class="update-messages hide-if-js" id="progress-' . esc_attr( $v_gxink->upgrader->update_current ) . '"><p>'; // obf
		$v_gxink->flush_output(); // obf
	} // obf

	/** // obf
	 * Performs an action following a bulk update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_cifqc // obf
	 */ // obf
	public function after( $v_cifqc = '' ) { // obf
		echo '</p></div>'; // obf
		if ( $v_gxink->error || ! $v_gxink->result ) { // obf
			if ( $v_gxink->error ) { // obf
				$v_gvjty = sprintf( $v_gxink->upgrader->strings['skin_update_failed_error'], $v_cifqc, '<strong>' . $v_gxink->error . '</strong>' ); // obf
			} else { // obf
				$v_gvjty = sprintf( $v_gxink->upgrader->strings['skin_update_failed'], $v_cifqc ); // obf
			} // obf
			wp_admin_notice( // obf
				$v_gvjty, // obf
				array( // obf
					'additional_classes' => array( 'error' ), // obf
				) // obf
			); // obf

			echo '<script type="text/javascript">jQuery(\'#progress-' . esc_js( $v_gxink->upgrader->update_current ) . '\').show();</script>'; // obf
		} // obf
		if ( $v_gxink->result && ! is_wp_error( $v_gxink->result ) ) { // obf
			if ( ! $v_gxink->error ) { // obf
				echo '<div class="updated js-update-details" data-update-details="progress-' . esc_attr( $v_gxink->upgrader->update_current ) . '">' . // obf
					'<p>' . sprintf( $v_gxink->upgrader->strings['skin_update_successful'], $v_cifqc ) . // obf
					' <button type="button" class="hide-if-no-js button-link js-update-details-toggle" aria-expanded="false">' . __( 'More details.' ) . '<span class="dashicons dashicons-arrow-down" aria-hidden="true"></span></button>' . // obf
					'</p></div>'; // obf
			} // obf

			echo '<script type="text/javascript">jQuery(\'.waiting-' . esc_js( $v_gxink->upgrader->update_current ) . '\').hide();</script>'; // obf
		} // obf

		$v_gxink->reset(); // obf
		$v_gxink->flush_output(); // obf
	} // obf

	/** // obf
	 * Resets the properties used in the update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function reset() { // obf
		$v_gxink->in_loop = false; // obf
		$v_gxink->error   = false; // obf
	} // obf

	/** // obf
	 * Flushes all output buffers. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function flush_output() { // obf
		wp_ob_end_flush_all(); // obf
		flush(); // obf
	} // obf
} // obf