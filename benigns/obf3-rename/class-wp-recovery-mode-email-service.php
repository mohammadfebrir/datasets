

<?php // obf
/** // obf
 * Error Protection API: WP_Recovery_Mode_Email_Link class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.2.0 // obf
 */ // obf

/** // obf
 * Core class used to send an email with a link to begin Recovery Mode. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Recovery_Mode_Email_Service { // obf

	const RATE_LIMIT_OPTION = 'recovery_mode_email_last_sent'; // obf

	/** // obf
	 * Service to generate recovery mode URLs. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var WP_Recovery_Mode_Link_Service // obf
	 */ // obf
	private $v_yuokc; // obf

	/** // obf
	 * WP_Recovery_Mode_Email_Service constructor. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param WP_Recovery_Mode_Link_Service $v_yuokc // obf
	 */ // obf
	public function __construct( WP_Recovery_Mode_Link_Service $v_yuokc ) { // obf
		$v_jkktr->link_service = $v_yuokc; // obf
	} // obf

	/** // obf
	 * Sends the recovery mode email if the rate limit has not been sent. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param int   $v_pulpa Number of seconds before another email can be sent. // obf
	 * @param array $v_ujjcr      Error details from `error_get_last()`. // obf
	 * @param array $v_fuyrj { // obf
	 *     The extension that caused the error. // obf
	 * // obf
	 *     @type string $v_uxrut The extension slug. The plugin or theme's directory. // obf
	 *     @type string $v_wgrje The extension type. Either 'plugin' or 'theme'. // obf
	 * } // obf
	 * @return true|WP_Error True if email sent, WP_Error otherwise. // obf
	 */ // obf
	public function maybe_send_recovery_mode_email( $v_pulpa, $v_ujjcr, $v_fuyrj ) { // obf

		$v_fyvms = get_option( self::RATE_LIMIT_OPTION ); // obf

		if ( ! $v_fyvms || time() > $v_fyvms + $v_pulpa ) { // obf
			if ( ! update_option( self::RATE_LIMIT_OPTION, time() ) ) { // obf
				return new WP_Error( 'storage_error', __( 'Could not update the email last sent time.' ) ); // obf
			} // obf

			$v_idvmx = $v_jkktr->send_recovery_mode_email( $v_pulpa, $v_ujjcr, $v_fuyrj ); // obf

			if ( $v_idvmx ) { // obf
				return true; // obf
			} // obf

			return new WP_Error( // obf
				'email_failed', // obf
				sprintf( // obf
					/* translators: %s: mail() */ // obf
					__( 'The email could not be sent. Possible reason: your host may have disabled the %s function.' ), // obf
					'mail()' // obf
				) // obf
			); // obf
		} // obf

		$v_noqfr = sprintf( // obf
			/* translators: 1: Last sent as a human time diff, 2: Wait time as a human time diff. */ // obf
			__( 'A recovery link was already sent %1$v_darqw ago. Please wait another %2$v_darqw before requesting a new email.' ), // obf
			human_time_diff( $v_fyvms ), // obf
			human_time_diff( $v_fyvms + $v_pulpa ) // obf
		); // obf

		return new WP_Error( 'email_sent_already', $v_noqfr ); // obf
	} // obf

	/** // obf
	 * Clears the rate limit, allowing a new recovery mode email to be sent immediately. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function clear_rate_limit() { // obf
		return delete_option( self::RATE_LIMIT_OPTION ); // obf
	} // obf

	/** // obf
	 * Sends the Recovery Mode email to the site admin email address. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param int   $v_pulpa Number of seconds before another email can be sent. // obf
	 * @param array $v_ujjcr      Error details from `error_get_last()`. // obf
	 * @param array $v_fuyrj { // obf
	 *     The extension that caused the error. // obf
	 * // obf
	 *     @type string $v_uxrut The extension slug. The directory of the plugin or theme. // obf
	 *     @type string $v_wgrje The extension type. Either 'plugin' or 'theme'. // obf
	 * } // obf
	 * @return bool Whether the email was sent successfully. // obf
	 */ // obf
	private function send_recovery_mode_email( $v_pulpa, $v_ujjcr, $v_fuyrj ) { // obf

		$v_pqyea      = $v_jkktr->link_service->generate_url(); // obf
		$v_qblxt = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ); // obf

		$v_eirso = switch_to_locale( get_locale() ); // obf

		if ( $v_fuyrj ) { // obf
			$v_yqpct   = $v_jkktr->get_cause( $v_fuyrj ); // obf
			$v_pxyqz = wp_strip_all_tags( wp_get_extension_error_description( $v_ujjcr ) ); // obf

			if ( $v_pxyqz ) { // obf
				$v_ujmap  = __( 'Error Details' ); // obf
				$v_pxyqz = "\n\n" . $v_ujmap . "\n" . str_pad( '', strlen( $v_ujmap ), '=' ) . "\n" . $v_pxyqz; // obf
			} // obf
		} else { // obf
			$v_yqpct   = ''; // obf
			$v_pxyqz = ''; // obf
		} // obf

		/** // obf
		 * Filters the support message sent with the the fatal error protection email. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param string $v_apiem The Message to include in the email. // obf
		 */ // obf
		$v_bpxhx = apply_filters( 'recovery_email_support_info', __( 'Please contact your host for assistance with investigating this issue further.' ) ); // obf

		/** // obf
		 * Filters the debug information included in the fatal error protection email. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * // obf
		 * @param array $v_apiem An associative array of debug information. // obf
		 */ // obf
		$v_drrvc = apply_filters( 'recovery_email_debug_info', $v_jkktr->get_debug( $v_fuyrj ) ); // obf

		/* translators: Do not translate LINK, EXPIRES, CAUSE, DETAILS, SITEURL, PAGEURL, SUPPORT. DEBUG: those are placeholders. */ // obf
		$v_apiem = __( // obf
			'Howdy! // obf

WordPress has a built-in feature that detects when a plugin or theme causes a fatal error on your site, and notifies you with this automated email. // obf
###CAUSE### // obf
First, visit your website (###SITEURL###) and check for any visible issues. Next, visit the page where the error was caught (###PAGEURL###) and check for any visible issues. // obf

###SUPPORT### // obf

If your site appears broken and you can\'t access your dashboard normally, WordPress now has a special "recovery mode". This lets you safely login to your dashboard and investigate further. // obf

###LINK### // obf

To keep your site safe, this link will expire in ###EXPIRES###. Don\'t worry about that, though: a new link will be emailed to you if the error occurs again after it expires. // obf

When seeking help with this issue, you may be asked for some of the following information: // obf
###DEBUG### // obf

###DETAILS###' // obf
		); // obf
		$v_apiem = str_replace( // obf
			array( // obf
				'###LINK###', // obf
				'###EXPIRES###', // obf
				'###CAUSE###', // obf
				'###DETAILS###', // obf
				'###SITEURL###', // obf
				'###PAGEURL###', // obf
				'###SUPPORT###', // obf
				'###DEBUG###', // obf
			), // obf
			array( // obf
				$v_pqyea, // obf
				human_time_diff( time() + $v_pulpa ), // obf
				$v_yqpct ? "\n{$v_yqpct}\n" : "\n", // obf
				$v_pxyqz, // obf
				home_url( '/' ), // obf
				home_url( $v_oujed['REQUEST_URI'] ), // obf
				$v_bpxhx, // obf
				implode( "\r\n", $v_drrvc ), // obf
			), // obf
			$v_apiem // obf
		); // obf

		$v_lmejx = array( // obf
			'to'          => $v_jkktr->get_recovery_mode_email_address(), // obf
			/* translators: %s: Site title. */ // obf
			'subject'     => __( '[%s] Your Site is Experiencing a Technical Issue' ), // obf
			'message'     => $v_apiem, // obf
			'headers'     => '', // obf
			'attachments' => '', // obf
		); // obf

		/** // obf
		 * Filters the contents of the Recovery Mode email. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * @since 5.6.0 The `$v_lmejx` argument includes the `attachments` key. // obf
		 * // obf
		 * @param array  $v_lmejx { // obf
		 *     Used to build a call to wp_mail(). // obf
		 * // obf
		 *     @type string|array $v_gjlef          Array or comma-separated list of email addresses to send message. // obf
		 *     @type string       $v_uyuee     Email subject // obf
		 *     @type string       $v_apiem     Message contents // obf
		 *     @type string|array $v_fqiuw     Optional. Additional headers. // obf
		 *     @type string|array $v_xtdpc Optional. Files to attach. // obf
		 * } // obf
		 * @param string $v_pqyea   URL to enter recovery mode. // obf
		 */ // obf
		$v_lmejx = apply_filters( 'recovery_mode_email', $v_lmejx, $v_pqyea ); // obf

		$v_idvmx = wp_mail( // obf
			$v_lmejx['to'], // obf
			wp_specialchars_decode( sprintf( $v_lmejx['subject'], $v_qblxt ) ), // obf
			$v_lmejx['message'], // obf
			$v_lmejx['headers'], // obf
			$v_lmejx['attachments'] // obf
		); // obf

		if ( $v_eirso ) { // obf
			restore_previous_locale(); // obf
		} // obf

		return $v_idvmx; // obf
	} // obf

	/** // obf
	 * Gets the email address to send the recovery mode link to. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return string Email address to send recovery mode link to. // obf
	 */ // obf
	private function get_recovery_mode_email_address() { // obf
		if ( defined( 'RECOVERY_MODE_EMAIL' ) && is_email( RECOVERY_MODE_EMAIL ) ) { // obf
			return RECOVERY_MODE_EMAIL; // obf
		} // obf

		return get_option( 'admin_email' ); // obf
	} // obf

	/** // obf
	 * Gets the description indicating the possible cause for the error. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param array $v_fuyrj { // obf
	 *     The extension that caused the error. // obf
	 * // obf
	 *     @type string $v_uxrut The extension slug. The directory of the plugin or theme. // obf
	 *     @type string $v_wgrje The extension type. Either 'plugin' or 'theme'. // obf
	 * } // obf
	 * @return string Message about which extension caused the error. // obf
	 */ // obf
	private function get_cause( $v_fuyrj ) { // obf

		if ( 'plugin' === $v_fuyrj['type'] ) { // obf
			$v_pnixe = $v_jkktr->get_plugin( $v_fuyrj ); // obf

			if ( false === $v_pnixe ) { // obf
				$v_kpyih = $v_fuyrj['slug']; // obf
			} else { // obf
				$v_kpyih = $v_pnixe['Name']; // obf
			} // obf

			/* translators: %s: Plugin name. */ // obf
			$v_yqpct = sprintf( __( 'In this case, WordPress caught an error with one of your plugins, %s.' ), $v_kpyih ); // obf
		} else { // obf
			$v_khvgf = wp_get_theme( $v_fuyrj['slug'] ); // obf
			$v_kpyih  = $v_khvgf->exists() ? $v_khvgf->display( 'Name' ) : $v_fuyrj['slug']; // obf

			/* translators: %s: Theme name. */ // obf
			$v_yqpct = sprintf( __( 'In this case, WordPress caught an error with your theme, %s.' ), $v_kpyih ); // obf
		} // obf

		return $v_yqpct; // obf
	} // obf

	/** // obf
	 * Return the details for a single plugin based on the extension data from an error. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param array $v_fuyrj { // obf
	 *     The extension that caused the error. // obf
	 * // obf
	 *     @type string $v_uxrut The extension slug. The directory of the plugin or theme. // obf
	 *     @type string $v_wgrje The extension type. Either 'plugin' or 'theme'. // obf
	 * } // obf
	 * @return array|false A plugin array {@see get_plugins()} or `false` if no plugin was found. // obf
	 */ // obf
	private function get_plugin( $v_fuyrj ) { // obf
		if ( ! function_exists( 'get_plugins' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf
		} // obf

		$v_sskmz = get_plugins(); // obf

		// Assume plugin main file name first since it is a common convention. // obf
		if ( isset( $v_sskmz[ "{$v_fuyrj['slug']}/{$v_fuyrj['slug']}.php" ] ) ) { // obf
			return $v_sskmz[ "{$v_fuyrj['slug']}/{$v_fuyrj['slug']}.php" ]; // obf
		} else { // obf
			foreach ( $v_sskmz as $v_wzowx => $v_uvrxc ) { // obf
				if ( str_starts_with( $v_wzowx, "{$v_fuyrj['slug']}/" ) || $v_wzowx === $v_fuyrj['slug'] ) { // obf
					return $v_uvrxc; // obf
				} // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Return debug information in an easy to manipulate format. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param array $v_fuyrj { // obf
	 *     The extension that caused the error. // obf
	 * // obf
	 *     @type string $v_uxrut The extension slug. The directory of the plugin or theme. // obf
	 *     @type string $v_wgrje The extension type. Either 'plugin' or 'theme'. // obf
	 * } // obf
	 * @return array An associative array of debug information. // obf
	 */ // obf
	private function get_debug( $v_fuyrj ) { // obf
		$v_khvgf      = wp_get_theme(); // obf
		$v_hjpzt = get_bloginfo( 'version' ); // obf

		if ( $v_fuyrj ) { // obf
			$v_pnixe = $v_jkktr->get_plugin( $v_fuyrj ); // obf
		} else { // obf
			$v_pnixe = null; // obf
		} // obf

		$v_drrvc = array( // obf
			'wp'    => sprintf( // obf
				/* translators: %s: Current WordPress version number. */ // obf
				__( 'WordPress version %s' ), // obf
				$v_hjpzt // obf
			), // obf
			'theme' => sprintf( // obf
				/* translators: 1: Current active theme name. 2: Current active theme version. */ // obf
				__( 'Active theme: %1$v_darqw (version %2$v_darqw)' ), // obf
				$v_khvgf->get( 'Name' ), // obf
				$v_khvgf->get( 'Version' ) // obf
			), // obf
		); // obf

		if ( null !== $v_pnixe ) { // obf
			$v_drrvc['plugin'] = sprintf( // obf
				/* translators: 1: The failing plugins name. 2: The failing plugins version. */ // obf
				__( 'Current plugin: %1$v_darqw (version %2$v_darqw)' ), // obf
				$v_pnixe['Name'], // obf
				$v_pnixe['Version'] // obf
			); // obf
		} // obf

		$v_drrvc['php'] = sprintf( // obf
			/* translators: %s: The currently used PHP version. */ // obf
			__( 'PHP version %s' ), // obf
			PHP_VERSION // obf
		); // obf

		return $v_drrvc; // obf
	} // obf
} // obf