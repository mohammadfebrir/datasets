

<?php // obf
/** // obf
 * Upgrader API: Automatic_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Upgrader Skin for Automatic WordPress Upgrades. // obf
 * // obf
 * This skin is designed to be used when no output is intended, all output // obf
 * is captured and stored for the caller to process and log/email/discard. // obf
 * // obf
 * @since 3.7.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see Bulk_Upgrader_Skin // obf
 */ // obf
class Automatic_Upgrader_Skin extends WP_Upgrader_Skin { // obf
	protected $v_seivy = array(); // obf

	/** // obf
	 * Determines whether the upgrader needs FTP/SSH details in order to connect // obf
	 * to the filesystem. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @since 4.6.0 The `$v_cokup` parameter default changed from `false` to an empty string. // obf
	 * // obf
	 * @see request_filesystem_credentials() // obf
	 * // obf
	 * @param bool|WP_Error $v_mcmyc                        Optional. Whether the current request has failed to connect, // obf
	 *                                                    or an error object. Default false. // obf
	 * @param string        $v_cokup                      Optional. Full path to the directory that is tested // obf
	 *                                                    for being writable. Default empty. // obf
	 * @param bool          $v_ivzfp Optional. Whether to allow Group/World writable. Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function request_filesystem_credentials( $v_mcmyc = false, $v_cokup = '', $v_ivzfp = false ) { // obf
		if ( $v_cokup ) { // obf
			$v_smobf->options['context'] = $v_cokup; // obf
		} // obf
		/* // obf
		 * TODO: Fix up request_filesystem_credentials(), or split it, to allow us to request a no-output version. // obf
		 * This will output a credentials form in event of failure. We don't want that, so just hide with a buffer. // obf
		 */ // obf
		ob_start(); // obf
		$v_oxbrz = parent::request_filesystem_credentials( $v_mcmyc, $v_cokup, $v_ivzfp ); // obf
		ob_end_clean(); // obf
		return $v_oxbrz; // obf
	} // obf

	/** // obf
	 * Retrieves the upgrade messages. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @return string[] Messages during an upgrade. // obf
	 */ // obf
	public function get_upgrade_messages() { // obf
		return $v_smobf->messages; // obf
	} // obf

	/** // obf
	 * Stores a message about the upgrade. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * @since 5.9.0 Renamed `$v_ejmfj` to `$v_arvqo` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string|array|WP_Error $v_arvqo Message data. // obf
	 * @param mixed                 ...$v_qfhdy  Optional text replacements. // obf
	 */ // obf
	public function feedback( $v_arvqo, ...$v_qfhdy ) { // obf
		if ( is_wp_error( $v_arvqo ) ) { // obf
			$v_hrsbh = $v_arvqo->get_error_message(); // obf
		} elseif ( is_array( $v_arvqo ) ) { // obf
			return; // obf
		} else { // obf
			$v_hrsbh = $v_arvqo; // obf
		} // obf

		if ( ! empty( $v_smobf->upgrader->strings[ $v_hrsbh ] ) ) { // obf
			$v_hrsbh = $v_smobf->upgrader->strings[ $v_hrsbh ]; // obf
		} // obf

		if ( str_contains( $v_hrsbh, '%' ) ) { // obf
			if ( ! empty( $v_qfhdy ) ) { // obf
				$v_hrsbh = vsprintf( $v_hrsbh, $v_qfhdy ); // obf
			} // obf
		} // obf

		$v_hrsbh = trim( $v_hrsbh ); // obf

		// Only allow basic HTML in the messages, as it'll be used in emails/logs rather than direct browser output. // obf
		$v_hrsbh = wp_kses( // obf
			$v_hrsbh, // obf
			array( // obf
				'a'      => array( // obf
					'href' => true, // obf
				), // obf
				'br'     => true, // obf
				'em'     => true, // obf
				'strong' => true, // obf
			) // obf
		); // obf

		if ( empty( $v_hrsbh ) ) { // obf
			return; // obf
		} // obf

		$v_smobf->messages[] = $v_hrsbh; // obf
	} // obf

	/** // obf
	 * Creates a new output buffer. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	public function header() { // obf
		ob_start(); // obf
	} // obf

	/** // obf
	 * Retrieves the buffered content, deletes the buffer, and processes the output. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	public function footer() { // obf
		$v_sujli = ob_get_clean(); // obf
		if ( ! empty( $v_sujli ) ) { // obf
			$v_smobf->feedback( $v_sujli ); // obf
		} // obf
	} // obf
} // obf