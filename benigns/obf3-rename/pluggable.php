
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * These functions can be replaced via plugins. If plugins do not redefine these // obf
 * functions, then these will be used instead. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

if ( ! function_exists( 'wp_set_current_user' ) ) : // obf
	/** // obf
	 * Changes the current user by ID or name. // obf
	 * // obf
	 * Set $v_dvodw to null and specify a name if you do not know a user's ID. // obf
	 * // obf
	 * Some WordPress functionality is based on the current user and not based on // obf
	 * the signed in user. Therefore, it opens the ability to edit and perform // obf
	 * actions on users who aren't signed in. // obf
	 * // obf
	 * @since 2.0.3 // obf
	 * // obf
	 * @global WP_User $v_jmqtz The current user object which holds the user data. // obf
	 * // obf
	 * @param int|null $v_dvodw   User ID. // obf
	 * @param string   $v_qcszk User's username. // obf
	 * @return WP_User Current user User object. // obf
	 */ // obf
	function wp_set_current_user( $v_dvodw, $v_qcszk = '' ) { // obf
		global $v_jmqtz; // obf

		// If `$v_dvodw` matches the current user, there is nothing to do. // obf
		if ( isset( $v_jmqtz ) // obf
		&& ( $v_jmqtz instanceof WP_User ) // obf
		&& ( $v_dvodw === $v_jmqtz->ID ) // obf
		&& ( null !== $v_dvodw ) // obf
		) { // obf
			return $v_jmqtz; // obf
		} // obf

		$v_jmqtz = new WP_User( $v_dvodw, $v_qcszk ); // obf

		setup_userdata( $v_jmqtz->ID ); // obf

		/** // obf
		 * Fires after the current user is set. // obf
		 * // obf
		 * @since 2.0.1 // obf
		 */ // obf
		do_action( 'set_current_user' ); // obf

		return $v_jmqtz; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_get_current_user' ) ) : // obf
	/** // obf
	 * Retrieves the current user object. // obf
	 * // obf
	 * Will set the current user, if the current user is not set. The current user // obf
	 * will be set to the logged-in person. If no user is logged-in, then it will // obf
	 * set the current user to 0, which is invalid and won't have any permissions. // obf
	 * // obf
	 * @since 2.0.3 // obf
	 * // obf
	 * @see _wp_get_current_user() // obf
	 * @global WP_User $v_jmqtz Checks if the current user is set. // obf
	 * // obf
	 * @return WP_User Current WP_User instance. // obf
	 */ // obf
	function wp_get_current_user() { // obf
		return _wp_get_current_user(); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'get_userdata' ) ) : // obf
	/** // obf
	 * Retrieves user info by user ID. // obf
	 * // obf
	 * @since 0.71 // obf
	 * // obf
	 * @param int $v_vfzvz User ID // obf
	 * @return WP_User|false WP_User object on success, false on failure. // obf
	 */ // obf
	function get_userdata( $v_vfzvz ) { // obf
		return get_user_by( 'id', $v_vfzvz ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'get_user_by' ) ) : // obf
	/** // obf
	 * Retrieves user info by a given field. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.4.0 Added 'ID' as an alias of 'id' for the `$v_jpmad` parameter. // obf
	 * // obf
	 * @global WP_User $v_jmqtz The current user object which holds the user data. // obf
	 * // obf
	 * @param string     $v_jpmad The field to retrieve the user with. id | ID | slug | email | login. // obf
	 * @param int|string $v_qvhdk A value for $v_jpmad. A user ID, slug, email address, or login name. // obf
	 * @return WP_User|false WP_User object on success, false on failure. // obf
	 */ // obf
	function get_user_by( $v_jpmad, $v_qvhdk ) { // obf
		$v_sizcu = WP_User::get_data_by( $v_jpmad, $v_qvhdk ); // obf

		if ( ! $v_sizcu ) { // obf
			return false; // obf
		} // obf

		$v_lkuag = new WP_User(); // obf
		$v_lkuag->init( $v_sizcu ); // obf

		return $v_lkuag; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'cache_users' ) ) : // obf
	/** // obf
	 * Retrieves info for user lists to prevent multiple queries by get_userdata(). // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @global wpdb $v_phbts WordPress database abstraction object. // obf
	 * // obf
	 * @param int[] $v_sqquv User ID numbers list // obf
	 */ // obf
	function cache_users( $v_sqquv ) { // obf
		global $v_phbts; // obf

		update_meta_cache( 'user', $v_sqquv ); // obf

		$v_pbjzj = _get_non_cached_ids( $v_sqquv, 'users' ); // obf

		if ( empty( $v_pbjzj ) ) { // obf
			return; // obf
		} // obf

		$v_jtzdo = implode( ',', $v_pbjzj ); // obf

		$v_tltok = $v_phbts->get_results( "SELECT * FROM $v_phbts->users WHERE ID IN ($v_jtzdo)" ); // obf

		foreach ( $v_tltok as $v_lkuag ) { // obf
			update_user_caches( $v_lkuag ); // obf
		} // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_mail' ) ) : // obf
	/** // obf
	 * Sends an email, similar to PHP's mail function. // obf
	 * // obf
	 * A true return value does not automatically mean that the user received the // obf
	 * email successfully. It just only means that the method used was able to // obf
	 * process the request without any errors. // obf
	 * // obf
	 * The default content type is `text/plain` which does not allow using HTML. // obf
	 * However, you can set the content type of the email by using the // obf
	 * {@see 'wp_mail_content_type'} filter. // obf
	 * // obf
	 * The default charset is based on the charset used on the blog. The charset can // obf
	 * be set using the {@see 'wp_mail_charset'} filter. // obf
	 * // obf
	 * @since 1.2.1 // obf
	 * @since 5.5.0 is_email() is used for email validation, // obf
	 *              instead of PHPMailer's default validator. // obf
	 * // obf
	 * @global PHPMailer\PHPMailer\PHPMailer $v_lbupa // obf
	 * // obf
	 * @param string|string[] $v_lnwyb          Array or comma-separated list of email addresses to send message. // obf
	 * @param string          $v_lzoqw     Email subject. // obf
	 * @param string          $v_mrmyy     Message contents. // obf
	 * @param string|string[] $v_yfhzo     Optional. Additional headers. // obf
	 * @param string|string[] $v_eoxop Optional. Paths to files to attach. // obf
	 * @return bool Whether the email was sent successfully. // obf
	 */ // obf
	function wp_mail( $v_lnwyb, $v_lzoqw, $v_mrmyy, $v_yfhzo = '', $v_eoxop = array() ) { // obf
		// Compact the input, apply the filters, and extract them back out. // obf

		/** // obf
		 * Filters the wp_mail() arguments. // obf
		 * // obf
		 * @since 2.2.0 // obf
		 * // obf
		 * @param array $v_zepuq { // obf
		 *     Array of the `wp_mail()` arguments. // obf
		 * // obf
		 *     @type string|string[] $v_lnwyb          Array or comma-separated list of email addresses to send message. // obf
		 *     @type string          $v_lzoqw     Email subject. // obf
		 *     @type string          $v_mrmyy     Message contents. // obf
		 *     @type string|string[] $v_yfhzo     Additional headers. // obf
		 *     @type string|string[] $v_eoxop Paths to files to attach. // obf
		 * } // obf
		 */ // obf
		$v_uljkh = apply_filters( 'wp_mail', compact( 'to', 'subject', 'message', 'headers', 'attachments' ) ); // obf

		/** // obf
		 * Filters whether to preempt sending an email. // obf
		 * // obf
		 * Returning a non-null value will short-circuit {@see wp_mail()}, returning // obf
		 * that value instead. A boolean return value should be used to indicate whether // obf
		 * the email was successfully sent. // obf
		 * // obf
		 * @since 5.7.0 // obf
		 * // obf
		 * @param null|bool $v_aholw Short-circuit return value. // obf
		 * @param array     $v_uljkh { // obf
		 *     Array of the `wp_mail()` arguments. // obf
		 * // obf
		 *     @type string|string[] $v_lnwyb          Array or comma-separated list of email addresses to send message. // obf
		 *     @type string          $v_lzoqw     Email subject. // obf
		 *     @type string          $v_mrmyy     Message contents. // obf
		 *     @type string|string[] $v_yfhzo     Additional headers. // obf
		 *     @type string|string[] $v_eoxop Paths to files to attach. // obf
		 * } // obf
		 */ // obf
		$v_dfezk = apply_filters( 'pre_wp_mail', null, $v_uljkh ); // obf

		if ( null !== $v_dfezk ) { // obf
			return $v_dfezk; // obf
		} // obf

		if ( isset( $v_uljkh['to'] ) ) { // obf
			$v_lnwyb = $v_uljkh['to']; // obf
		} // obf

		if ( ! is_array( $v_lnwyb ) ) { // obf
			$v_lnwyb = explode( ',', $v_lnwyb ); // obf
		} // obf

		if ( isset( $v_uljkh['subject'] ) ) { // obf
			$v_lzoqw = $v_uljkh['subject']; // obf
		} // obf

		if ( isset( $v_uljkh['message'] ) ) { // obf
			$v_mrmyy = $v_uljkh['message']; // obf
		} // obf

		if ( isset( $v_uljkh['headers'] ) ) { // obf
			$v_yfhzo = $v_uljkh['headers']; // obf
		} // obf

		if ( isset( $v_uljkh['attachments'] ) ) { // obf
			$v_eoxop = $v_uljkh['attachments']; // obf
		} // obf

		if ( ! is_array( $v_eoxop ) ) { // obf
			$v_eoxop = explode( "\n", str_replace( "\r\n", "\n", $v_eoxop ) ); // obf
		} // obf
		global $v_lbupa; // obf

		// (Re)create it, if it's gone missing. // obf
		if ( ! ( $v_lbupa instanceof PHPMailer\PHPMailer\PHPMailer ) ) { // obf
			require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php'; // obf
			require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php'; // obf
			require_once ABSPATH . WPINC . '/PHPMailer/Exception.php'; // obf
			require_once ABSPATH . WPINC . '/class-wp-phpmailer.php'; // obf
			$v_lbupa = new WP_PHPMailer( true ); // obf

			$v_lbupa::$v_biedv = static function ( $v_eozry ) { // obf
				return (bool) is_email( $v_eozry ); // obf
			}; // obf
		} // obf

		// Headers. // obf
		$v_ohzis       = array(); // obf
		$v_tqady      = array(); // obf
		$v_axfxh = array(); // obf

		if ( empty( $v_yfhzo ) ) { // obf
			$v_yfhzo = array(); // obf
		} else { // obf
			if ( ! is_array( $v_yfhzo ) ) { // obf
				/* // obf
				 * Explode the headers out, so this function can take // obf
				 * both string headers and an array of headers. // obf
				 */ // obf
				$v_iuvlf = explode( "\n", str_replace( "\r\n", "\n", $v_yfhzo ) ); // obf
			} else { // obf
				$v_iuvlf = $v_yfhzo; // obf
			} // obf
			$v_yfhzo = array(); // obf

			// If it's actually got contents. // obf
			if ( ! empty( $v_iuvlf ) ) { // obf
				// Iterate through the raw headers. // obf
				foreach ( (array) $v_iuvlf as $v_twspj ) { // obf
					if ( ! str_contains( $v_twspj, ':' ) ) { // obf
						if ( false !== stripos( $v_twspj, 'boundary=' ) ) { // obf
							$v_tvvzn    = preg_split( '/boundary=/i', trim( $v_twspj ) ); // obf
							$v_cseis = trim( str_replace( array( "'", '"' ), '', $v_tvvzn[1] ) ); // obf
						} // obf
						continue; // obf
					} // obf
					// Explode them out. // obf
					list( $v_qcszk, $v_bxpxt ) = explode( ':', trim( $v_twspj ), 2 ); // obf

					// Cleanup crew. // obf
					$v_qcszk    = trim( $v_qcszk ); // obf
					$v_bxpxt = trim( $v_bxpxt ); // obf

					switch ( strtolower( $v_qcszk ) ) { // obf
						// Mainly for legacy -- process a "From:" header if it's there. // obf
						case 'from': // obf
							$v_mpfpj = strpos( $v_bxpxt, '<' ); // obf
							if ( false !== $v_mpfpj ) { // obf
								// Text before the bracketed email is the "From" name. // obf
								if ( $v_mpfpj > 0 ) { // obf
									$v_gsbji = substr( $v_bxpxt, 0, $v_mpfpj ); // obf
									$v_gsbji = str_replace( '"', '', $v_gsbji ); // obf
									$v_gsbji = trim( $v_gsbji ); // obf
								} // obf

								$v_rtzpv = substr( $v_bxpxt, $v_mpfpj + 1 ); // obf
								$v_rtzpv = str_replace( '>', '', $v_rtzpv ); // obf
								$v_rtzpv = trim( $v_rtzpv ); // obf

								// Avoid setting an empty $v_rtzpv. // obf
							} elseif ( '' !== trim( $v_bxpxt ) ) { // obf
								$v_rtzpv = trim( $v_bxpxt ); // obf
							} // obf
							break; // obf
						case 'content-type': // obf
							if ( str_contains( $v_bxpxt, ';' ) ) { // obf
								list( $v_xjpdw, $v_likqg ) = explode( ';', $v_bxpxt ); // obf
								$v_dblwc                   = trim( $v_xjpdw ); // obf
								if ( false !== stripos( $v_likqg, 'charset=' ) ) { // obf
									$v_xbswi = trim( str_replace( array( 'charset=', '"' ), '', $v_likqg ) ); // obf
								} elseif ( false !== stripos( $v_likqg, 'boundary=' ) ) { // obf
									$v_cseis = trim( str_replace( array( 'BOUNDARY=', 'boundary=', '"' ), '', $v_likqg ) ); // obf
									$v_xbswi  = ''; // obf
								} // obf

								// Avoid setting an empty $v_dblwc. // obf
							} elseif ( '' !== trim( $v_bxpxt ) ) { // obf
								$v_dblwc = trim( $v_bxpxt ); // obf
							} // obf
							break; // obf
						case 'cc': // obf
							$v_ohzis = array_merge( (array) $v_ohzis, explode( ',', $v_bxpxt ) ); // obf
							break; // obf
						case 'bcc': // obf
							$v_tqady = array_merge( (array) $v_tqady, explode( ',', $v_bxpxt ) ); // obf
							break; // obf
						case 'reply-to': // obf
							$v_axfxh = array_merge( (array) $v_axfxh, explode( ',', $v_bxpxt ) ); // obf
							break; // obf
						default: // obf
							// Add it to our grand headers array. // obf
							$v_yfhzo[ trim( $v_qcszk ) ] = trim( $v_bxpxt ); // obf
							break; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		// Empty out the values that may be set. // obf
		$v_lbupa->clearAllRecipients(); // obf
		$v_lbupa->clearAttachments(); // obf
		$v_lbupa->clearCustomHeaders(); // obf
		$v_lbupa->clearReplyTos(); // obf
		$v_lbupa->Body    = ''; // obf
		$v_lbupa->AltBody = ''; // obf

		// Set "From" name and email. // obf

		// If we don't have a name from the input headers. // obf
		if ( ! isset( $v_gsbji ) ) { // obf
			$v_gsbji = 'WordPress'; // obf
		} // obf

		/* // obf
		 * If we don't have an email from the input headers, default to wordpress@$v_jaach // obf
		 * Some hosts will block outgoing mail from this address if it doesn't exist, // obf
		 * but there's no easy alternative. Defaulting to admin_email might appear to be // obf
		 * another option, but some hosts may refuse to relay mail from an unknown domain. // obf
		 * See https://core.trac.wordpress.org/ticket/5007. // obf
		 */ // obf
		if ( ! isset( $v_rtzpv ) ) { // obf
			// Get the site domain and get rid of www. // obf
			$v_jaach   = wp_parse_url( network_home_url(), PHP_URL_HOST ); // obf
			$v_rtzpv = 'wordpress@'; // obf

			if ( null !== $v_jaach ) { // obf
				if ( str_starts_with( $v_jaach, 'www.' ) ) { // obf
					$v_jaach = substr( $v_jaach, 4 ); // obf
				} // obf

				$v_rtzpv .= $v_jaach; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the email address to send from. // obf
		 * // obf
		 * @since 2.2.0 // obf
		 * // obf
		 * @param string $v_rtzpv Email address to send from. // obf
		 */ // obf
		$v_rtzpv = apply_filters( 'wp_mail_from', $v_rtzpv ); // obf

		/** // obf
		 * Filters the name to associate with the "from" email address. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param string $v_gsbji Name associated with the "from" email address. // obf
		 */ // obf
		$v_gsbji = apply_filters( 'wp_mail_from_name', $v_gsbji ); // obf

		try { // obf
			$v_lbupa->setFrom( $v_rtzpv, $v_gsbji, false ); // obf
		} catch ( PHPMailer\PHPMailer\Exception $v_vrtrd ) { // obf
			$v_kkvte                             = compact( 'to', 'subject', 'message', 'headers', 'attachments' ); // obf
			$v_kkvte['phpmailer_exception_code'] = $v_vrtrd->getCode(); // obf

			/** This filter is documented in wp-includes/pluggable.php */ // obf
			do_action( 'wp_mail_failed', new WP_Error( 'wp_mail_failed', $v_vrtrd->getMessage(), $v_kkvte ) ); // obf

			return false; // obf
		} // obf

		// Set mail's subject and body. // obf
		$v_lbupa->Subject = $v_lzoqw; // obf
		$v_lbupa->Body    = $v_mrmyy; // obf

		// Set destination addresses, using appropriate methods for handling addresses. // obf
		$v_kcndj = compact( 'to', 'cc', 'bcc', 'reply_to' ); // obf

		foreach ( $v_kcndj as $v_ypddv => $v_xrklk ) { // obf
			if ( empty( $v_xrklk ) ) { // obf
				continue; // obf
			} // obf

			foreach ( (array) $v_xrklk as $v_akljj ) { // obf
				try { // obf
					// Break $v_rsjpv into name and address parts if in the format "Foo <bar@baz.com>". // obf
					$v_ucbqe = ''; // obf

					if ( preg_match( '/(.*)<(.+)>/', $v_akljj, $v_pcsjy ) ) { // obf
						if ( count( $v_pcsjy ) === 3 ) { // obf
							$v_ucbqe = $v_pcsjy[1]; // obf
							$v_akljj        = $v_pcsjy[2]; // obf
						} // obf
					} // obf

					switch ( $v_ypddv ) { // obf
						case 'to': // obf
							$v_lbupa->addAddress( $v_akljj, $v_ucbqe ); // obf
							break; // obf
						case 'cc': // obf
							$v_lbupa->addCC( $v_akljj, $v_ucbqe ); // obf
							break; // obf
						case 'bcc': // obf
							$v_lbupa->addBCC( $v_akljj, $v_ucbqe ); // obf
							break; // obf
						case 'reply_to': // obf
							$v_lbupa->addReplyTo( $v_akljj, $v_ucbqe ); // obf
							break; // obf
					} // obf
				} catch ( PHPMailer\PHPMailer\Exception $v_vrtrd ) { // obf
					continue; // obf
				} // obf
			} // obf
		} // obf

		// Set to use PHP's mail(). // obf
		$v_lbupa->isMail(); // obf

		// Set Content-Type and charset. // obf

		// If we don't have a Content-Type from the input headers. // obf
		if ( ! isset( $v_dblwc ) ) { // obf
			$v_dblwc = 'text/plain'; // obf
		} // obf

		/** // obf
		 * Filters the wp_mail() content type. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param string $v_dblwc Default wp_mail() content type. // obf
		 */ // obf
		$v_dblwc = apply_filters( 'wp_mail_content_type', $v_dblwc ); // obf

		$v_lbupa->ContentType = $v_dblwc; // obf

		// Set whether it's plaintext, depending on $v_dblwc. // obf
		if ( 'text/html' === $v_dblwc ) { // obf
			$v_lbupa->isHTML( true ); // obf
		} // obf

		// If we don't have a charset from the input headers. // obf
		if ( ! isset( $v_xbswi ) ) { // obf
			$v_xbswi = get_bloginfo( 'charset' ); // obf
		} // obf

		/** // obf
		 * Filters the default wp_mail() charset. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param string $v_xbswi Default email charset. // obf
		 */ // obf
		$v_lbupa->CharSet = apply_filters( 'wp_mail_charset', $v_xbswi ); // obf

		// Set custom headers. // obf
		if ( ! empty( $v_yfhzo ) ) { // obf
			foreach ( (array) $v_yfhzo as $v_qcszk => $v_bxpxt ) { // obf
				// Only add custom headers not added automatically by PHPMailer. // obf
				if ( ! in_array( $v_qcszk, array( 'MIME-Version', 'X-Mailer' ), true ) ) { // obf
					try { // obf
						$v_lbupa->addCustomHeader( sprintf( '%1$v_cdksb: %2$v_cdksb', $v_qcszk, $v_bxpxt ) ); // obf
					} catch ( PHPMailer\PHPMailer\Exception $v_vrtrd ) { // obf
						continue; // obf
					} // obf
				} // obf
			} // obf

			if ( false !== stripos( $v_dblwc, 'multipart' ) && ! empty( $v_cseis ) ) { // obf
				$v_lbupa->addCustomHeader( sprintf( 'Content-Type: %s; boundary="%s"', $v_dblwc, $v_cseis ) ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_eoxop ) ) { // obf
			foreach ( $v_eoxop as $v_pgnvk => $v_byfsd ) { // obf
				$v_pgnvk = is_string( $v_pgnvk ) ? $v_pgnvk : ''; // obf

				try { // obf
					$v_lbupa->addAttachment( $v_byfsd, $v_pgnvk ); // obf
				} catch ( PHPMailer\PHPMailer\Exception $v_vrtrd ) { // obf
					continue; // obf
				} // obf
			} // obf
		} // obf

		/** // obf
		 * Fires after PHPMailer is initialized. // obf
		 * // obf
		 * @since 2.2.0 // obf
		 * // obf
		 * @param PHPMailer $v_lbupa The PHPMailer instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'phpmailer_init', array( &$v_lbupa ) ); // obf

		$v_jywbn = compact( 'to', 'subject', 'message', 'headers', 'attachments' ); // obf

		// Send! // obf
		try { // obf
			$v_ewuyr = $v_lbupa->send(); // obf

			/** // obf
			 * Fires after PHPMailer has successfully sent an email. // obf
			 * // obf
			 * The firing of this action does not necessarily mean that the recipient(s) received the // obf
			 * email successfully. It only means that the `send` method above was able to // obf
			 * process the request without any errors. // obf
			 * // obf
			 * @since 5.9.0 // obf
			 * // obf
			 * @param array $v_jywbn { // obf
			 *     An array containing the email recipient(s), subject, message, headers, and attachments. // obf
			 * // obf
			 *     @type string[] $v_lnwyb          Email addresses to send message. // obf
			 *     @type string   $v_lzoqw     Email subject. // obf
			 *     @type string   $v_mrmyy     Message contents. // obf
			 *     @type string[] $v_yfhzo     Additional headers. // obf
			 *     @type string[] $v_eoxop Paths to files to attach. // obf
			 * } // obf
			 */ // obf
			do_action( 'wp_mail_succeeded', $v_jywbn ); // obf

			return $v_ewuyr; // obf
		} catch ( PHPMailer\PHPMailer\Exception $v_vrtrd ) { // obf
			$v_jywbn['phpmailer_exception_code'] = $v_vrtrd->getCode(); // obf

			/** // obf
			 * Fires after a PHPMailer\PHPMailer\Exception is caught. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * // obf
			 * @param WP_Error $v_gszmk A WP_Error object with the PHPMailer\PHPMailer\Exception message, and an array // obf
			 *                        containing the mail recipient, subject, message, headers, and attachments. // obf
			 */ // obf
			do_action( 'wp_mail_failed', new WP_Error( 'wp_mail_failed', $v_vrtrd->getMessage(), $v_jywbn ) ); // obf

			return false; // obf
		} // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_authenticate' ) ) : // obf
	/** // obf
	 * Authenticates a user, confirming the login credentials are valid. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.5.0 `$v_mwnxt` now accepts an email address. // obf
	 * // obf
	 * @param string $v_mwnxt User's username or email address. // obf
	 * @param string $v_tkldz User's password. // obf
	 * @return WP_User|WP_Error WP_User object if the credentials are valid, // obf
	 *                          otherwise WP_Error. // obf
	 */ // obf
	function wp_authenticate( // obf
		$v_mwnxt, // obf
		#[\SensitiveParameter] // obf
		$v_tkldz // obf
	) { // obf
		$v_mwnxt = sanitize_user( $v_mwnxt ); // obf
		$v_tkldz = trim( $v_tkldz ); // obf

		/** // obf
		 * Filters whether a set of user login credentials are valid. // obf
		 * // obf
		 * A WP_User object is returned if the credentials authenticate a user. // obf
		 * WP_Error or null otherwise. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * @since 4.5.0 `$v_mwnxt` now accepts an email address. // obf
		 * // obf
		 * @param null|WP_User|WP_Error $v_lkuag     WP_User if the user is authenticated. // obf
		 *                                        WP_Error or null otherwise. // obf
		 * @param string                $v_mwnxt Username or email address. // obf
		 * @param string                $v_tkldz User password. // obf
		 */ // obf
		$v_lkuag = apply_filters( 'authenticate', null, $v_mwnxt, $v_tkldz ); // obf

		if ( null === $v_lkuag || false === $v_lkuag ) { // obf
			/* // obf
			 * TODO: What should the error message be? (Or would these even happen?) // obf
			 * Only needed if all authentication handlers fail to return anything. // obf
			 */ // obf
			$v_lkuag = new WP_Error( 'authentication_failed', __( '<strong>Error:</strong> Invalid username, email address or incorrect password.' ) ); // obf
		} // obf

		$v_bsnlh = array( 'empty_username', 'empty_password' ); // obf

		if ( is_wp_error( $v_lkuag ) && ! in_array( $v_lkuag->get_error_code(), $v_bsnlh, true ) ) { // obf
			$v_gszmk = $v_lkuag; // obf

			/** // obf
			 * Fires after a user login has failed. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * @since 4.5.0 The value of `$v_mwnxt` can now be an email address. // obf
			 * @since 5.4.0 The `$v_gszmk` parameter was added. // obf
			 * // obf
			 * @param string   $v_mwnxt Username or email address. // obf
			 * @param WP_Error $v_gszmk    A WP_Error object with the authentication failure details. // obf
			 */ // obf
			do_action( 'wp_login_failed', $v_mwnxt, $v_gszmk ); // obf
		} // obf

		return $v_lkuag; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_logout' ) ) : // obf
	/** // obf
	 * Logs the current user out. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	function wp_logout() { // obf
		$v_vfzvz = get_current_user_id(); // obf

		wp_destroy_current_session(); // obf
		wp_clear_auth_cookie(); // obf
		wp_set_current_user( 0 ); // obf

		/** // obf
		 * Fires after a user is logged out. // obf
		 * // obf
		 * @since 1.5.0 // obf
		 * @since 5.5.0 Added the `$v_vfzvz` parameter. // obf
		 * // obf
		 * @param int $v_vfzvz ID of the user that was logged out. // obf
		 */ // obf
		do_action( 'wp_logout', $v_vfzvz ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_validate_auth_cookie' ) ) : // obf
	/** // obf
	 * Validates authentication cookie. // obf
	 * // obf
	 * The checks include making sure that the authentication cookie is set and // obf
	 * pulling in the contents (if $v_ruyum is not used). // obf
	 * // obf
	 * Makes sure the cookie is not expired. Verifies the hash in cookie is what is // obf
	 * should be and compares the two. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @global int $v_lyzkl // obf
	 * // obf
	 * @param string $v_ruyum Optional. If used, will validate contents instead of cookie's. // obf
	 * @param string $v_rtrns Optional. The cookie scheme to use: 'auth', 'secure_auth', or 'logged_in'. // obf
	 *                       Note: This does *not* default to 'auth' like other cookie functions. // obf
	 * @return int|false User ID if valid cookie, false if invalid. // obf
	 */ // obf
	function wp_validate_auth_cookie( $v_ruyum = '', $v_rtrns = '' ) { // obf
		$v_jpyqh = wp_parse_auth_cookie( $v_ruyum, $v_rtrns ); // obf
		if ( ! $v_jpyqh ) { // obf
			/** // obf
			 * Fires if an authentication cookie is malformed. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * // obf
			 * @param string $v_ruyum Malformed auth cookie. // obf
			 * @param string $v_rtrns Authentication scheme. Values include 'auth', 'secure_auth', // obf
			 *                       or 'logged_in'. // obf
			 */ // obf
			do_action( 'auth_cookie_malformed', $v_ruyum, $v_rtrns ); // obf
			return false; // obf
		} // obf

		$v_rtrns     = $v_jpyqh['scheme']; // obf
		$v_mwnxt   = $v_jpyqh['username']; // obf
		$v_jgenk       = $v_jpyqh['hmac']; // obf
		$v_newrz      = $v_jpyqh['token']; // obf
		$v_yfnrf = $v_jpyqh['expiration']; // obf

		$v_zvpjl = (int) $v_yfnrf; // obf

		// Allow a grace period for POST and Ajax requests. // obf
		if ( wp_doing_ajax() || 'POST' === $v_yjwhu['REQUEST_METHOD'] ) { // obf
			$v_zvpjl += HOUR_IN_SECONDS; // obf
		} // obf

		// Quick check to see if an honest cookie has expired. // obf
		if ( $v_zvpjl < time() ) { // obf
			/** // obf
			 * Fires once an authentication cookie has expired. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * // obf
			 * @param string[] $v_jpyqh { // obf
			 *     Authentication cookie components. None of the components should be assumed // obf
			 *     to be valid as they come directly from a client-provided cookie value. // obf
			 * // obf
			 *     @type string $v_mwnxt   User's username. // obf
			 *     @type string $v_yfnrf The time the cookie expires as a UNIX timestamp. // obf
			 *     @type string $v_newrz      User's session token used. // obf
			 *     @type string $v_jgenk       The security hash for the cookie. // obf
			 *     @type string $v_rtrns     The cookie scheme to use. // obf
			 * } // obf
			 */ // obf
			do_action( 'auth_cookie_expired', $v_jpyqh ); // obf
			return false; // obf
		} // obf

		$v_lkuag = get_user_by( 'login', $v_mwnxt ); // obf
		if ( ! $v_lkuag ) { // obf
			/** // obf
			 * Fires if a bad username is entered in the user authentication process. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * // obf
			 * @param string[] $v_jpyqh { // obf
			 *     Authentication cookie components. None of the components should be assumed // obf
			 *     to be valid as they come directly from a client-provided cookie value. // obf
			 * // obf
			 *     @type string $v_mwnxt   User's username. // obf
			 *     @type string $v_yfnrf The time the cookie expires as a UNIX timestamp. // obf
			 *     @type string $v_newrz      User's session token used. // obf
			 *     @type string $v_jgenk       The security hash for the cookie. // obf
			 *     @type string $v_rtrns     The cookie scheme to use. // obf
			 * } // obf
			 */ // obf
			do_action( 'auth_cookie_bad_username', $v_jpyqh ); // obf
			return false; // obf
		} // obf

		if ( str_starts_with( $v_lkuag->user_pass, '$v_kyshe$' ) || str_starts_with( $v_lkuag->user_pass, '$2y$' ) ) { // obf
			// Retain previous behaviour of phpass or vanilla bcrypt hashed passwords. // obf
			$v_mnobu = substr( $v_lkuag->user_pass, 8, 4 ); // obf
		} else { // obf
			// Otherwise, use a substring from the end of the hash to avoid dealing with potentially long hash prefixes. // obf
			$v_mnobu = substr( $v_lkuag->user_pass, -4 ); // obf
		} // obf

		$v_chxma = wp_hash( $v_mwnxt . '|' . $v_mnobu . '|' . $v_yfnrf . '|' . $v_newrz, $v_rtrns ); // obf

		$v_usdcu = hash_hmac( 'sha256', $v_mwnxt . '|' . $v_yfnrf . '|' . $v_newrz, $v_chxma ); // obf

		if ( ! hash_equals( $v_usdcu, $v_jgenk ) ) { // obf
			/** // obf
			 * Fires if a bad authentication cookie hash is encountered. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * // obf
			 * @param string[] $v_jpyqh { // obf
			 *     Authentication cookie components. None of the components should be assumed // obf
			 *     to be valid as they come directly from a client-provided cookie value. // obf
			 * // obf
			 *     @type string $v_mwnxt   User's username. // obf
			 *     @type string $v_yfnrf The time the cookie expires as a UNIX timestamp. // obf
			 *     @type string $v_newrz      User's session token used. // obf
			 *     @type string $v_jgenk       The security hash for the cookie. // obf
			 *     @type string $v_rtrns     The cookie scheme to use. // obf
			 * } // obf
			 */ // obf
			do_action( 'auth_cookie_bad_hash', $v_jpyqh ); // obf
			return false; // obf
		} // obf

		$v_kplca = WP_Session_Tokens::get_instance( $v_lkuag->ID ); // obf
		if ( ! $v_kplca->verify( $v_newrz ) ) { // obf
			/** // obf
			 * Fires if a bad session token is encountered. // obf
			 * // obf
			 * @since 4.0.0 // obf
			 * // obf
			 * @param string[] $v_jpyqh { // obf
			 *     Authentication cookie components. None of the components should be assumed // obf
			 *     to be valid as they come directly from a client-provided cookie value. // obf
			 * // obf
			 *     @type string $v_mwnxt   User's username. // obf
			 *     @type string $v_yfnrf The time the cookie expires as a UNIX timestamp. // obf
			 *     @type string $v_newrz      User's session token used. // obf
			 *     @type string $v_jgenk       The security hash for the cookie. // obf
			 *     @type string $v_rtrns     The cookie scheme to use. // obf
			 * } // obf
			 */ // obf
			do_action( 'auth_cookie_bad_session_token', $v_jpyqh ); // obf
			return false; // obf
		} // obf

		// Ajax/POST grace period set above. // obf
		if ( $v_yfnrf < time() ) { // obf
			$v_lyhaz['login_grace_period'] = 1; // obf
		} // obf

		/** // obf
		 * Fires once an authentication cookie has been validated. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param string[] $v_jpyqh { // obf
		 *     Authentication cookie components. // obf
		 * // obf
		 *     @type string $v_mwnxt   User's username. // obf
		 *     @type string $v_yfnrf The time the cookie expires as a UNIX timestamp. // obf
		 *     @type string $v_newrz      User's session token used. // obf
		 *     @type string $v_jgenk       The security hash for the cookie. // obf
		 *     @type string $v_rtrns     The cookie scheme to use. // obf
		 * } // obf
		 * @param WP_User  $v_lkuag            User object. // obf
		 */ // obf
		do_action( 'auth_cookie_valid', $v_jpyqh, $v_lkuag ); // obf

		return $v_lkuag->ID; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_generate_auth_cookie' ) ) : // obf
	/** // obf
	 * Generates authentication cookie contents. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.0.0 The `$v_newrz` parameter was added. // obf
	 * // obf
	 * @param int    $v_vfzvz    User ID. // obf
	 * @param int    $v_yfnrf The time the cookie expires as a UNIX timestamp. // obf
	 * @param string $v_rtrns     Optional. The cookie scheme to use: 'auth', 'secure_auth', or 'logged_in'. // obf
	 *                           Default 'auth'. // obf
	 * @param string $v_newrz      User's session token to use for this cookie. // obf
	 * @return string Authentication cookie contents. Empty string if user does not exist. // obf
	 */ // obf
	function wp_generate_auth_cookie( $v_vfzvz, $v_yfnrf, $v_rtrns = 'auth', $v_newrz = '' ) { // obf
		$v_lkuag = get_userdata( $v_vfzvz ); // obf
		if ( ! $v_lkuag ) { // obf
			return ''; // obf
		} // obf

		if ( ! $v_newrz ) { // obf
			$v_kplca = WP_Session_Tokens::get_instance( $v_vfzvz ); // obf
			$v_newrz   = $v_kplca->create( $v_yfnrf ); // obf
		} // obf

		if ( str_starts_with( $v_lkuag->user_pass, '$v_kyshe$' ) || str_starts_with( $v_lkuag->user_pass, '$2y$' ) ) { // obf
			// Retain previous behaviour of phpass or vanilla bcrypt hashed passwords. // obf
			$v_mnobu = substr( $v_lkuag->user_pass, 8, 4 ); // obf
		} else { // obf
			// Otherwise, use a substring from the end of the hash to avoid dealing with potentially long hash prefixes. // obf
			$v_mnobu = substr( $v_lkuag->user_pass, -4 ); // obf
		} // obf

		$v_chxma = wp_hash( $v_lkuag->user_login . '|' . $v_mnobu . '|' . $v_yfnrf . '|' . $v_newrz, $v_rtrns ); // obf

		$v_usdcu = hash_hmac( 'sha256', $v_lkuag->user_login . '|' . $v_yfnrf . '|' . $v_newrz, $v_chxma ); // obf

		$v_ruyum = $v_lkuag->user_login . '|' . $v_yfnrf . '|' . $v_newrz . '|' . $v_usdcu; // obf

		/** // obf
		 * Filters the authentication cookie. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @since 4.0.0 The `$v_newrz` parameter was added. // obf
		 * // obf
		 * @param string $v_ruyum     Authentication cookie. // obf
		 * @param int    $v_vfzvz    User ID. // obf
		 * @param int    $v_yfnrf The time the cookie expires as a UNIX timestamp. // obf
		 * @param string $v_rtrns     Cookie scheme used. Accepts 'auth', 'secure_auth', or 'logged_in'. // obf
		 * @param string $v_newrz      User's session token used. // obf
		 */ // obf
		return apply_filters( 'auth_cookie', $v_ruyum, $v_vfzvz, $v_yfnrf, $v_rtrns, $v_newrz ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_parse_auth_cookie' ) ) : // obf
	/** // obf
	 * Parses a cookie into its components. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 4.0.0 The `$v_newrz` element was added to the return value. // obf
	 * // obf
	 * @param string $v_ruyum Authentication cookie. // obf
	 * @param string $v_rtrns Optional. The cookie scheme to use: 'auth', 'secure_auth', or 'logged_in'. // obf
	 * @return string[]|false { // obf
	 *     Authentication cookie components. None of the components should be assumed // obf
	 *     to be valid as they come directly from a client-provided cookie value. If // obf
	 *     the cookie value is malformed, false is returned. // obf
	 * // obf
	 *     @type string $v_mwnxt   User's username. // obf
	 *     @type string $v_yfnrf The time the cookie expires as a UNIX timestamp. // obf
	 *     @type string $v_newrz      User's session token used. // obf
	 *     @type string $v_jgenk       The security hash for the cookie. // obf
	 *     @type string $v_rtrns     The cookie scheme to use. // obf
	 * } // obf
	 */ // obf
	function wp_parse_auth_cookie( $v_ruyum = '', $v_rtrns = '' ) { // obf
		if ( empty( $v_ruyum ) ) { // obf
			switch ( $v_rtrns ) { // obf
				case 'auth': // obf
					$v_azuqy = AUTH_COOKIE; // obf
					break; // obf
				case 'secure_auth': // obf
					$v_azuqy = SECURE_AUTH_COOKIE; // obf
					break; // obf
				case 'logged_in': // obf
					$v_azuqy = LOGGED_IN_COOKIE; // obf
					break; // obf
				default: // obf
					if ( is_ssl() ) { // obf
						$v_azuqy = SECURE_AUTH_COOKIE; // obf
						$v_rtrns      = 'secure_auth'; // obf
					} else { // obf
						$v_azuqy = AUTH_COOKIE; // obf
						$v_rtrns      = 'auth'; // obf
					} // obf
			} // obf

			if ( empty( $v_llmdf[ $v_azuqy ] ) ) { // obf
				return false; // obf
			} // obf
			$v_ruyum = $v_llmdf[ $v_azuqy ]; // obf
		} // obf

		$v_jpyqh = explode( '|', $v_ruyum ); // obf
		if ( count( $v_jpyqh ) !== 4 ) { // obf
			return false; // obf
		} // obf

		list( $v_mwnxt, $v_yfnrf, $v_newrz, $v_jgenk ) = $v_jpyqh; // obf

		return compact( 'username', 'expiration', 'token', 'hmac', 'scheme' ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_set_auth_cookie' ) ) : // obf
	/** // obf
	 * Sets the authentication cookies based on user ID. // obf
	 * // obf
	 * The $v_zcyeu parameter increases the time that the cookie will be kept. The // obf
	 * default the cookie is kept without remembering is two days. When $v_zcyeu is // obf
	 * set, the cookies will be kept for 14 days or two weeks. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.3.0 Added the `$v_newrz` parameter. // obf
	 * // obf
	 * @param int         $v_vfzvz  User ID. // obf
	 * @param bool        $v_zcyeu Whether to remember the user. // obf
	 * @param bool|string $v_vgymb   Whether the auth cookie should only be sent over HTTPS. Default is an empty // obf
	 *                              string which means the value of `is_ssl()` will be used. // obf
	 * @param string      $v_newrz    Optional. User's session token to use for this cookie. // obf
	 */ // obf
	function wp_set_auth_cookie( $v_vfzvz, $v_zcyeu = false, $v_vgymb = '', $v_newrz = '' ) { // obf
		if ( $v_zcyeu ) { // obf
			/** // obf
			 * Filters the duration of the authentication cookie expiration period. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param int  $v_uycto   Duration of the expiration period in seconds. // obf
			 * @param int  $v_vfzvz  User ID. // obf
			 * @param bool $v_zcyeu Whether to remember the user login. Default false. // obf
			 */ // obf
			$v_yfnrf = time() + apply_filters( 'auth_cookie_expiration', 14 * DAY_IN_SECONDS, $v_vfzvz, $v_zcyeu ); // obf

			/* // obf
			 * Ensure the browser will continue to send the cookie after the expiration time is reached. // obf
			 * Needed for the login grace period in wp_validate_auth_cookie(). // obf
			 */ // obf
			$v_bcazr = $v_yfnrf + ( 12 * HOUR_IN_SECONDS ); // obf
		} else { // obf
			/** This filter is documented in wp-includes/pluggable.php */ // obf
			$v_yfnrf = time() + apply_filters( 'auth_cookie_expiration', 2 * DAY_IN_SECONDS, $v_vfzvz, $v_zcyeu ); // obf
			$v_bcazr     = 0; // obf
		} // obf

		if ( '' === $v_vgymb ) { // obf
			$v_vgymb = is_ssl(); // obf
		} // obf

		// Front-end cookie is secure when the auth cookie is secure and the site's home URL uses HTTPS. // obf
		$v_iieoo = $v_vgymb && 'https' === parse_url( get_option( 'home' ), PHP_URL_SCHEME ); // obf

		/** // obf
		 * Filters whether the auth cookie should only be sent over HTTPS. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param bool $v_vgymb  Whether the cookie should only be sent over HTTPS. // obf
		 * @param int  $v_vfzvz User ID. // obf
		 */ // obf
		$v_vgymb = apply_filters( 'secure_auth_cookie', $v_vgymb, $v_vfzvz ); // obf

		/** // obf
		 * Filters whether the logged in cookie should only be sent over HTTPS. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param bool $v_iieoo Whether the logged in cookie should only be sent over HTTPS. // obf
		 * @param int  $v_vfzvz                 User ID. // obf
		 * @param bool $v_vgymb                  Whether the auth cookie should only be sent over HTTPS. // obf
		 */ // obf
		$v_iieoo = apply_filters( 'secure_logged_in_cookie', $v_iieoo, $v_vfzvz, $v_vgymb ); // obf

		if ( $v_vgymb ) { // obf
			$v_ybaen = SECURE_AUTH_COOKIE; // obf
			$v_rtrns           = 'secure_auth'; // obf
		} else { // obf
			$v_ybaen = AUTH_COOKIE; // obf
			$v_rtrns           = 'auth'; // obf
		} // obf

		if ( '' === $v_newrz ) { // obf
			$v_kplca = WP_Session_Tokens::get_instance( $v_vfzvz ); // obf
			$v_newrz   = $v_kplca->create( $v_yfnrf ); // obf
		} // obf

		$v_iqevu      = wp_generate_auth_cookie( $v_vfzvz, $v_yfnrf, $v_rtrns, $v_newrz ); // obf
		$v_xzlco = wp_generate_auth_cookie( $v_vfzvz, $v_yfnrf, 'logged_in', $v_newrz ); // obf

		/** // obf
		 * Fires immediately before the authentication cookie is set. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @since 4.9.0 The `$v_newrz` parameter was added. // obf
		 * // obf
		 * @param string $v_iqevu Authentication cookie value. // obf
		 * @param int    $v_bcazr      The time the login grace period expires as a UNIX timestamp. // obf
		 *                            Default is 12 hours past the cookie's expiration time. // obf
		 * @param int    $v_yfnrf  The time when the authentication cookie expires as a UNIX timestamp. // obf
		 *                            Default is 14 days from now. // obf
		 * @param int    $v_vfzvz     User ID. // obf
		 * @param string $v_rtrns      Authentication scheme. Values include 'auth' or 'secure_auth'. // obf
		 * @param string $v_newrz       User's session token to use for this cookie. // obf
		 */ // obf
		do_action( 'set_auth_cookie', $v_iqevu, $v_bcazr, $v_yfnrf, $v_vfzvz, $v_rtrns, $v_newrz ); // obf

		/** // obf
		 * Fires immediately before the logged-in authentication cookie is set. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * @since 4.9.0 The `$v_newrz` parameter was added. // obf
		 * // obf
		 * @param string $v_xzlco The logged-in cookie value. // obf
		 * @param int    $v_bcazr           The time the login grace period expires as a UNIX timestamp. // obf
		 *                                 Default is 12 hours past the cookie's expiration time. // obf
		 * @param int    $v_yfnrf       The time when the logged-in authentication cookie expires as a UNIX timestamp. // obf
		 *                                 Default is 14 days from now. // obf
		 * @param int    $v_vfzvz          User ID. // obf
		 * @param string $v_rtrns           Authentication scheme. Default 'logged_in'. // obf
		 * @param string $v_newrz            User's session token to use for this cookie. // obf
		 */ // obf
		do_action( 'set_logged_in_cookie', $v_xzlco, $v_bcazr, $v_yfnrf, $v_vfzvz, 'logged_in', $v_newrz ); // obf

		/** // obf
		 * Allows preventing auth cookies from actually being sent to the client. // obf
		 * // obf
		 * @since 4.7.4 // obf
		 * @since 6.2.0 The `$v_bcazr`, `$v_yfnrf`, `$v_vfzvz`, `$v_rtrns`, and `$v_newrz` parameters were added. // obf
		 * // obf
		 * @param bool   $v_ewuyr       Whether to send auth cookies to the client. Default true. // obf
		 * @param int    $v_bcazr     The time the login grace period expires as a UNIX timestamp. // obf
		 *                           Default is 12 hours past the cookie's expiration time. Zero when clearing cookies. // obf
		 * @param int    $v_yfnrf The time when the logged-in authentication cookie expires as a UNIX timestamp. // obf
		 *                           Default is 14 days from now. Zero when clearing cookies. // obf
		 * @param int    $v_vfzvz    User ID. Zero when clearing cookies. // obf
		 * @param string $v_rtrns     Authentication scheme. Values include 'auth' or 'secure_auth'. // obf
		 *                           Empty string when clearing cookies. // obf
		 * @param string $v_newrz      User's session token to use for this cookie. Empty string when clearing cookies. // obf
		 */ // obf
		if ( ! apply_filters( 'send_auth_cookies', true, $v_bcazr, $v_yfnrf, $v_vfzvz, $v_rtrns, $v_newrz ) ) { // obf
			return; // obf
		} // obf

		setcookie( $v_ybaen, $v_iqevu, $v_bcazr, PLUGINS_COOKIE_PATH, COOKIE_DOMAIN, $v_vgymb, true ); // obf
		setcookie( $v_ybaen, $v_iqevu, $v_bcazr, ADMIN_COOKIE_PATH, COOKIE_DOMAIN, $v_vgymb, true ); // obf
		setcookie( LOGGED_IN_COOKIE, $v_xzlco, $v_bcazr, COOKIEPATH, COOKIE_DOMAIN, $v_iieoo, true ); // obf
		if ( COOKIEPATH !== SITECOOKIEPATH ) { // obf
			setcookie( LOGGED_IN_COOKIE, $v_xzlco, $v_bcazr, SITECOOKIEPATH, COOKIE_DOMAIN, $v_iieoo, true ); // obf
		} // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_clear_auth_cookie' ) ) : // obf
	/** // obf
	 * Removes all of the cookies associated with authentication. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	function wp_clear_auth_cookie() { // obf
		/** // obf
		 * Fires just before the authentication cookies are cleared. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 */ // obf
		do_action( 'clear_auth_cookie' ); // obf

		/** This filter is documented in wp-includes/pluggable.php */ // obf
		if ( ! apply_filters( 'send_auth_cookies', true, 0, 0, 0, '', '' ) ) { // obf
			return; // obf
		} // obf

		// Auth cookies. // obf
		setcookie( AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, ADMIN_COOKIE_PATH, COOKIE_DOMAIN ); // obf
		setcookie( SECURE_AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, ADMIN_COOKIE_PATH, COOKIE_DOMAIN ); // obf
		setcookie( AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, PLUGINS_COOKIE_PATH, COOKIE_DOMAIN ); // obf
		setcookie( SECURE_AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, PLUGINS_COOKIE_PATH, COOKIE_DOMAIN ); // obf
		setcookie( LOGGED_IN_COOKIE, ' ', time() - YEAR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN ); // obf
		setcookie( LOGGED_IN_COOKIE, ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH, COOKIE_DOMAIN ); // obf

		// Settings cookies. // obf
		setcookie( 'wp-settings-' . get_current_user_id(), ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH ); // obf
		setcookie( 'wp-settings-time-' . get_current_user_id(), ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH ); // obf

		// Old cookies. // obf
		setcookie( AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN ); // obf
		setcookie( AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH, COOKIE_DOMAIN ); // obf
		setcookie( SECURE_AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN ); // obf
		setcookie( SECURE_AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH, COOKIE_DOMAIN ); // obf

		// Even older cookies. // obf
		setcookie( USER_COOKIE, ' ', time() - YEAR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN ); // obf
		setcookie( PASS_COOKIE, ' ', time() - YEAR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN ); // obf
		setcookie( USER_COOKIE, ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH, COOKIE_DOMAIN ); // obf
		setcookie( PASS_COOKIE, ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH, COOKIE_DOMAIN ); // obf

		// Post password cookie. // obf
		setcookie( 'wp-postpass_' . COOKIEHASH, ' ', time() - YEAR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'is_user_logged_in' ) ) : // obf
	/** // obf
	 * Determines whether the current visitor is a logged in user. // obf
	 * // obf
	 * For more information on this and similar theme functions, check out // obf
	 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
	 * Conditional Tags} article in the Theme Developer Handbook. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @return bool True if user is logged in, false if not logged in. // obf
	 */ // obf
	function is_user_logged_in() { // obf
		$v_lkuag = wp_get_current_user(); // obf

		return $v_lkuag->exists(); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'auth_redirect' ) ) : // obf
	/** // obf
	 * Checks if a user is logged in, if not it redirects them to the login page. // obf
	 * // obf
	 * When this code is called from a page, it checks to see if the user viewing the page is logged in. // obf
	 * If the user is not logged in, they are redirected to the login page. The user is redirected // obf
	 * in such a way that, upon logging in, they will be sent directly to the page they were originally // obf
	 * trying to access. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	function auth_redirect() { // obf
		$v_vgymb = ( is_ssl() || force_ssl_admin() ); // obf

		/** // obf
		 * Filters whether to use a secure authentication redirect. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param bool $v_vgymb Whether to use a secure authentication redirect. Default false. // obf
		 */ // obf
		$v_vgymb = apply_filters( 'secure_auth_redirect', $v_vgymb ); // obf

		// If https is required and request is http, redirect. // obf
		if ( $v_vgymb && ! is_ssl() && str_contains( $v_yjwhu['REQUEST_URI'], 'wp-admin' ) ) { // obf
			if ( str_starts_with( $v_yjwhu['REQUEST_URI'], 'http' ) ) { // obf
				wp_redirect( set_url_scheme( $v_yjwhu['REQUEST_URI'], 'https' ) ); // obf
				exit; // obf
			} else { // obf
				wp_redirect( 'https://' . $v_yjwhu['HTTP_HOST'] . $v_yjwhu['REQUEST_URI'] ); // obf
				exit; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the authentication redirect scheme. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param string $v_rtrns Authentication redirect scheme. Default empty. // obf
		 */ // obf
		$v_rtrns = apply_filters( 'auth_redirect_scheme', '' ); // obf

		$v_vfzvz = wp_validate_auth_cookie( '', $v_rtrns ); // obf
		if ( $v_vfzvz ) { // obf
			/** // obf
			 * Fires before the authentication redirect. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param int $v_vfzvz User ID. // obf
			 */ // obf
			do_action( 'auth_redirect', $v_vfzvz ); // obf

			// If the user wants ssl but the session is not ssl, redirect. // obf
			if ( ! $v_vgymb && get_user_option( 'use_ssl', $v_vfzvz ) && str_contains( $v_yjwhu['REQUEST_URI'], 'wp-admin' ) ) { // obf
				if ( str_starts_with( $v_yjwhu['REQUEST_URI'], 'http' ) ) { // obf
					wp_redirect( set_url_scheme( $v_yjwhu['REQUEST_URI'], 'https' ) ); // obf
					exit; // obf
				} else { // obf
					wp_redirect( 'https://' . $v_yjwhu['HTTP_HOST'] . $v_yjwhu['REQUEST_URI'] ); // obf
					exit; // obf
				} // obf
			} // obf

			return; // The cookie is good, so we're done. // obf
		} // obf

		// The cookie is no good, so force login. // obf
		nocache_headers(); // obf

		if ( str_contains( $v_yjwhu['REQUEST_URI'], '/options.php' ) && wp_get_referer() ) { // obf
			$v_hkvtn = wp_get_referer(); // obf
		} else { // obf
			$v_hkvtn = set_url_scheme( 'http://' . $v_yjwhu['HTTP_HOST'] . $v_yjwhu['REQUEST_URI'] ); // obf
		} // obf

		$v_ihfxs = wp_login_url( $v_hkvtn, true ); // obf

		wp_redirect( $v_ihfxs ); // obf
		exit; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'check_admin_referer' ) ) : // obf
	/** // obf
	 * Ensures intent by verifying that a user was referred from another admin page with the correct security nonce. // obf
	 * // obf
	 * This function ensures the user intends to perform a given action, which helps protect against clickjacking style // obf
	 * attacks. It verifies intent, not authorization, therefore it does not verify the user's capabilities. This should // obf
	 * be performed with `current_user_can()` or similar. // obf
	 * // obf
	 * If the nonce value is invalid, the function will exit with an "Are You Sure?" style message. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * @since 2.5.0 The `$v_pxlhb` parameter was added. // obf
	 * // obf
	 * @param int|string $v_muboh    The nonce action. // obf
	 * @param string     $v_pxlhb Optional. Key to check for nonce in `$v_xxfma`. Default '_wpnonce'. // obf
	 * @return int|false 1 if the nonce is valid and generated between 0-12 hours ago, // obf
	 *                   2 if the nonce is valid and generated between 12-24 hours ago. // obf
	 *                   False if the nonce is invalid. // obf
	 */ // obf
	function check_admin_referer( $v_muboh = -1, $v_pxlhb = '_wpnonce' ) { // obf
		if ( -1 === $v_muboh ) { // obf
			_doing_it_wrong( __FUNCTION__, __( 'You should specify an action to be verified by using the first parameter.' ), '3.2.0' ); // obf
		} // obf

		$v_jxrbo = strtolower( admin_url() ); // obf
		$v_cbjyy  = strtolower( wp_get_referer() ); // obf
		$v_ymmtr   = isset( $v_xxfma[ $v_pxlhb ] ) ? wp_verify_nonce( $v_xxfma[ $v_pxlhb ], $v_muboh ) : false; // obf

		/** // obf
		 * Fires once the admin request has been validated or not. // obf
		 * // obf
		 * @since 1.5.1 // obf
		 * // obf
		 * @param string    $v_muboh The nonce action. // obf
		 * @param false|int $v_ymmtr False if the nonce is invalid, 1 if the nonce is valid and generated between // obf
		 *                          0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago. // obf
		 */ // obf
		do_action( 'check_admin_referer', $v_muboh, $v_ymmtr ); // obf

		if ( ! $v_ymmtr && ! ( -1 === $v_muboh && str_starts_with( $v_cbjyy, $v_jxrbo ) ) ) { // obf
			wp_nonce_ays( $v_muboh ); // obf
			die(); // obf
		} // obf

		return $v_ymmtr; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'check_ajax_referer' ) ) : // obf
	/** // obf
	 * Verifies the Ajax request to prevent processing requests external of the blog. // obf
	 * // obf
	 * @since 2.0.3 // obf
	 * // obf
	 * @param int|string   $v_muboh    Action nonce. // obf
	 * @param false|string $v_pxlhb Optional. Key to check for the nonce in `$v_xxfma` (since 2.5). If false, // obf
	 *                                `$v_xxfma` values will be evaluated for '_ajax_nonce', and '_wpnonce' // obf
	 *                                (in that order). Default false. // obf
	 * @param bool         $v_wcsjv      Optional. Whether to stop early when the nonce cannot be verified. // obf
	 *                                Default true. // obf
	 * @return int|false 1 if the nonce is valid and generated between 0-12 hours ago, // obf
	 *                   2 if the nonce is valid and generated between 12-24 hours ago. // obf
	 *                   False if the nonce is invalid. // obf
	 */ // obf
	function check_ajax_referer( $v_muboh = -1, $v_pxlhb = false, $v_wcsjv = true ) { // obf
		if ( -1 === $v_muboh ) { // obf
			_doing_it_wrong( __FUNCTION__, __( 'You should specify an action to be verified by using the first parameter.' ), '4.7.0' ); // obf
		} // obf

		$v_ryvts = ''; // obf

		if ( $v_pxlhb && isset( $v_xxfma[ $v_pxlhb ] ) ) { // obf
			$v_ryvts = $v_xxfma[ $v_pxlhb ]; // obf
		} elseif ( isset( $v_xxfma['_ajax_nonce'] ) ) { // obf
			$v_ryvts = $v_xxfma['_ajax_nonce']; // obf
		} elseif ( isset( $v_xxfma['_wpnonce'] ) ) { // obf
			$v_ryvts = $v_xxfma['_wpnonce']; // obf
		} // obf

		$v_ymmtr = wp_verify_nonce( $v_ryvts, $v_muboh ); // obf

		/** // obf
		 * Fires once the Ajax request has been validated or not. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param string    $v_muboh The Ajax nonce action. // obf
		 * @param false|int $v_ymmtr False if the nonce is invalid, 1 if the nonce is valid and generated between // obf
		 *                          0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago. // obf
		 */ // obf
		do_action( 'check_ajax_referer', $v_muboh, $v_ymmtr ); // obf

		if ( $v_wcsjv && false === $v_ymmtr ) { // obf
			if ( wp_doing_ajax() ) { // obf
				wp_die( -1, 403 ); // obf
			} else { // obf
				die( '-1' ); // obf
			} // obf
		} // obf

		return $v_ymmtr; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_redirect' ) ) : // obf
	/** // obf
	 * Redirects to another page. // obf
	 * // obf
	 * Note: wp_redirect() does not exit automatically, and should almost always be // obf
	 * followed by a call to `exit;`: // obf
	 * // obf
	 *     wp_redirect( $v_ntdlj ); // obf
	 *     exit; // obf
	 * // obf
	 * Exiting can also be selectively manipulated by using wp_redirect() as a conditional // obf
	 * in conjunction with the {@see 'wp_redirect'} and {@see 'wp_redirect_status'} filters: // obf
	 * // obf
	 *     if ( wp_redirect( $v_ntdlj ) ) { // obf
	 *         exit; // obf
	 *     } // obf
	 * // obf
	 * @since 1.5.1 // obf
	 * @since 5.1.0 The `$v_qwjqu` parameter was added. // obf
	 * @since 5.4.0 On invalid status codes, wp_die() is called. // obf
	 * // obf
	 * @global bool $v_orrqn // obf
	 * // obf
	 * @param string       $v_wtcwj      The path or URL to redirect to. // obf
	 * @param int          $v_knvgf        Optional. HTTP response status code to use. Default '302' (Moved Temporarily). // obf
	 * @param string|false $v_qwjqu Optional. The application doing the redirect or false to omit. Default 'WordPress'. // obf
	 * @return bool False if the redirect was canceled, true otherwise. // obf
	 */ // obf
	function wp_redirect( $v_wtcwj, $v_knvgf = 302, $v_qwjqu = 'WordPress' ) { // obf
		global $v_orrqn; // obf

		/** // obf
		 * Filters the redirect location. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param string $v_wtcwj The path or URL to redirect to. // obf
		 * @param int    $v_knvgf   The HTTP response status code to use. // obf
		 */ // obf
		$v_wtcwj = apply_filters( 'wp_redirect', $v_wtcwj, $v_knvgf ); // obf

		/** // obf
		 * Filters the redirect HTTP response status code to use. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param int    $v_knvgf   The HTTP response status code to use. // obf
		 * @param string $v_wtcwj The path or URL to redirect to. // obf
		 */ // obf
		$v_knvgf = apply_filters( 'wp_redirect_status', $v_knvgf, $v_wtcwj ); // obf

		if ( ! $v_wtcwj ) { // obf
			return false; // obf
		} // obf

		if ( $v_knvgf < 300 || 399 < $v_knvgf ) { // obf
			wp_die( __( 'HTTP redirect status code must be a redirection code, 3xx.' ) ); // obf
		} // obf

		$v_wtcwj = wp_sanitize_redirect( $v_wtcwj ); // obf

		if ( ! $v_orrqn && 'cgi-fcgi' !== PHP_SAPI ) { // obf
			status_header( $v_knvgf ); // This causes problems on IIS and some FastCGI setups. // obf
		} // obf

		/** // obf
		 * Filters the X-Redirect-By header. // obf
		 * // obf
		 * Allows applications to identify themselves when they're doing a redirect. // obf
		 * // obf
		 * @since 5.1.0 // obf
		 * // obf
		 * @param string|false $v_qwjqu The application doing the redirect or false to omit the header. // obf
		 * @param int          $v_knvgf        Status code to use. // obf
		 * @param string       $v_wtcwj      The path to redirect to. // obf
		 */ // obf
		$v_qwjqu = apply_filters( 'x_redirect_by', $v_qwjqu, $v_knvgf, $v_wtcwj ); // obf
		if ( is_string( $v_qwjqu ) ) { // obf
			header( "X-Redirect-By: $v_qwjqu" ); // obf
		} // obf

		header( "Location: $v_wtcwj", true, $v_knvgf ); // obf

		return true; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_sanitize_redirect' ) ) : // obf
	/** // obf
	 * Sanitizes a URL for use in a redirect. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_wtcwj The path to redirect to. // obf
	 * @return string Redirect-sanitized URL. // obf
	 */ // obf
	function wp_sanitize_redirect( $v_wtcwj ) { // obf
		// Encode spaces. // obf
		$v_wtcwj = str_replace( ' ', '%20', $v_wtcwj ); // obf

		$v_epfci    = '/ // obf
		( // obf
			(?: [\xC2-\xDF][\x80-\xBF]        # double-byte sequences   110xxxxx 10xxxxxx // obf
			|   \xE0[\xA0-\xBF][\x80-\xBF]    # triple-byte sequences   1110xxxx 10xxxxxx * 2 // obf
			|   [\xE1-\xEC][\x80-\xBF]{2} // obf
			|   \xED[\x80-\x9F][\x80-\xBF] // obf
			|   [\xEE-\xEF][\x80-\xBF]{2} // obf
			|   \xF0[\x90-\xBF][\x80-\xBF]{2} # four-byte sequences   11110xxx 10xxxxxx * 3 // obf
			|   [\xF1-\xF3][\x80-\xBF]{3} // obf
			|   \xF4[\x80-\x8F][\x80-\xBF]{2} // obf
		){1,40}                              # ...one or more times // obf
		)/x'; // obf
		$v_wtcwj = preg_replace_callback( $v_epfci, '_wp_sanitize_utf8_in_redirect', $v_wtcwj ); // obf
		$v_wtcwj = __fn_37772( '|[^a-z0-9-~+_.?#=&;,/:%!*\[\]()@]|i', '', $v_wtcwj ); // obf
		$v_wtcwj = wp_kses_no_null( $v_wtcwj ); // obf

		// Remove %0D and %0A from location. // obf
		$v_ajmeb = array( '%0d', '%0a', '%0D', '%0A' ); // obf
		return _deep_replace( $v_ajmeb, $v_wtcwj ); // obf
	} // obf

	/** // obf
	 * URL encodes UTF-8 characters in a URL. // obf
	 * // obf
	 * @ignore // obf
	 * @since 4.2.0 // obf
	 * @access private // obf
	 * // obf
	 * @see wp_sanitize_redirect() // obf
	 * // obf
	 * @param array $v_pcsjy RegEx matches against the redirect location. // obf
	 * @return string URL-encoded version of the first RegEx match. // obf
	 */ // obf
	function _wp_sanitize_utf8_in_redirect( $v_pcsjy ) { // obf
		return urlencode( $v_pcsjy[0] ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_safe_redirect' ) ) : // obf
	/** // obf
	 * Performs a safe (local) redirect, using wp_redirect(). // obf
	 * // obf
	 * Checks whether the $v_wtcwj is using an allowed host, if it has an absolute // obf
	 * path. A plugin can therefore set or remove allowed host(s) to or from the // obf
	 * list. // obf
	 * // obf
	 * If the host is not allowed, then the redirect defaults to wp-admin on the siteurl // obf
	 * instead. This prevents malicious redirects which redirect to another host, // obf
	 * but only used in a few places. // obf
	 * // obf
	 * Note: wp_safe_redirect() does not exit automatically, and should almost always be // obf
	 * followed by a call to `exit;`: // obf
	 * // obf
	 *     wp_safe_redirect( $v_ntdlj ); // obf
	 *     exit; // obf
	 * // obf
	 * Exiting can also be selectively manipulated by using wp_safe_redirect() as a conditional // obf
	 * in conjunction with the {@see 'wp_redirect'} and {@see 'wp_redirect_status'} filters: // obf
	 * // obf
	 *     if ( wp_safe_redirect( $v_ntdlj ) ) { // obf
	 *         exit; // obf
	 *     } // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * @since 5.1.0 The return value from wp_redirect() is now passed on, and the `$v_qwjqu` parameter was added. // obf
	 * // obf
	 * @param string       $v_wtcwj      The path or URL to redirect to. // obf
	 * @param int          $v_knvgf        Optional. HTTP response status code to use. Default '302' (Moved Temporarily). // obf
	 * @param string|false $v_qwjqu Optional. The application doing the redirect or false to omit. Default 'WordPress'. // obf
	 * @return bool False if the redirect was canceled, true otherwise. // obf
	 */ // obf
	function wp_safe_redirect( $v_wtcwj, $v_knvgf = 302, $v_qwjqu = 'WordPress' ) { // obf

		// Need to look at the URL the way it will end up in wp_redirect(). // obf
		$v_wtcwj = wp_sanitize_redirect( $v_wtcwj ); // obf

		/** // obf
		 * Filters the redirect fallback URL for when the provided redirect is not safe (local). // obf
		 * // obf
		 * @since 4.3.0 // obf
		 * // obf
		 * @param string $v_tkdui The fallback URL to use by default. // obf
		 * @param int    $v_knvgf       The HTTP response status code to use. // obf
		 */ // obf
		$v_tkdui = apply_filters( 'wp_safe_redirect_fallback', admin_url(), $v_knvgf ); // obf

		$v_wtcwj = wp_validate_redirect( $v_wtcwj, $v_tkdui ); // obf

		return wp_redirect( $v_wtcwj, $v_knvgf, $v_qwjqu ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_validate_redirect' ) ) : // obf
	/** // obf
	 * Validates a URL for use in a redirect. // obf
	 * // obf
	 * Checks whether the $v_wtcwj is using an allowed host, if it has an absolute // obf
	 * path. A plugin can therefore set or remove allowed host(s) to or from the // obf
	 * list. // obf
	 * // obf
	 * If the host is not allowed, then the redirect is to $v_tkdui supplied. // obf
	 * // obf
	 * @since 2.8.1 // obf
	 * // obf
	 * @param string $v_wtcwj     The redirect to validate. // obf
	 * @param string $v_tkdui The value to return if $v_wtcwj is not allowed. // obf
	 * @return string Redirect-sanitized URL. // obf
	 */ // obf
	function wp_validate_redirect( $v_wtcwj, $v_tkdui = '' ) { // obf
		$v_wtcwj = wp_sanitize_redirect( trim( $v_wtcwj, " \t\n\r\0\x08\x0B" ) ); // obf
		// Browsers will assume 'http' is your protocol, and will obey a redirect to a URL starting with '//'. // obf
		if ( str_starts_with( $v_wtcwj, '//' ) ) { // obf
			$v_wtcwj = 'http:' . $v_wtcwj; // obf
		} // obf

		/* // obf
		 * In PHP 5 parse_url() may fail if the URL query part contains 'http://'. // obf
		 * See https://bugs.php.net/bug.php?id=38143 // obf
		 */ // obf
		$v_ppepg  = strpos( $v_wtcwj, '?' ); // obf
		$v_jrkla = $v_ppepg ? substr( $v_wtcwj, 0, $v_ppepg ) : $v_wtcwj; // obf

		$v_wduzb = parse_url( $v_jrkla ); // obf

		// Give up if malformed URL. // obf
		if ( false === $v_wduzb ) { // obf
			return $v_tkdui; // obf
		} // obf

		// Allow only 'http' and 'https' schemes. No 'data:', etc. // obf
		if ( isset( $v_wduzb['scheme'] ) && ! ( 'http' === $v_wduzb['scheme'] || 'https' === $v_wduzb['scheme'] ) ) { // obf
			return $v_tkdui; // obf
		} // obf

		if ( ! isset( $v_wduzb['host'] ) && ! empty( $v_wduzb['path'] ) && '/' !== $v_wduzb['path'][0] ) { // obf
			$v_hrkft = ''; // obf
			if ( ! empty( $v_yjwhu['REQUEST_URI'] ) ) { // obf
				$v_hrkft = dirname( parse_url( 'http://placeholder' . $v_yjwhu['REQUEST_URI'], PHP_URL_PATH ) . '?' ); // obf
				$v_hrkft = wp_normalize_path( $v_hrkft ); // obf
			} // obf
			$v_wtcwj = '/' . ltrim( $v_hrkft . '/', '/' ) . $v_wtcwj; // obf
		} // obf

		/* // obf
		 * Reject if certain components are set but host is not. // obf
		 * This catches URLs like https:host.com for which parse_url() does not set the host field. // obf
		 */ // obf
		if ( ! isset( $v_wduzb['host'] ) && ( isset( $v_wduzb['scheme'] ) || isset( $v_wduzb['user'] ) || isset( $v_wduzb['pass'] ) || isset( $v_wduzb['port'] ) ) ) { // obf
			return $v_tkdui; // obf
		} // obf

		// Reject malformed components parse_url() can return on odd inputs. // obf
		foreach ( array( 'user', 'pass', 'host' ) as $v_dnpxe ) { // obf
			if ( isset( $v_wduzb[ $v_dnpxe ] ) && strpbrk( $v_wduzb[ $v_dnpxe ], ':/?#@' ) ) { // obf
				return $v_tkdui; // obf
			} // obf
		} // obf

		$v_pqbsq = parse_url( home_url() ); // obf

		/** // obf
		 * Filters the list of allowed hosts to redirect to. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param string[] $v_hktig An array of allowed host names. // obf
		 * @param string   $v_ajoqz  The host name of the redirect destination; empty string if not set. // obf
		 */ // obf
		$v_ahbjs = (array) apply_filters( 'allowed_redirect_hosts', array( $v_pqbsq['host'] ), isset( $v_wduzb['host'] ) ? $v_wduzb['host'] : '' ); // obf

		if ( isset( $v_wduzb['host'] ) && ( ! in_array( $v_wduzb['host'], $v_ahbjs, true ) && strtolower( $v_pqbsq['host'] ) !== $v_wduzb['host'] ) ) { // obf
			$v_wtcwj = $v_tkdui; // obf
		} // obf

		return $v_wtcwj; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_notify_postauthor' ) ) : // obf
	/** // obf
	 * Notifies an author (and/or others) of a comment/trackback/pingback on a post. // obf
	 * // obf
	 * @since 1.0.0 // obf
	 * // obf
	 * @param int|WP_Comment $v_fziyo Comment ID or WP_Comment object. // obf
	 * @param string         $v_miggx Not used. // obf
	 * @return bool True on completion. False if no email addresses were specified. // obf
	 */ // obf
	function wp_notify_postauthor( $v_fziyo, $v_miggx = null ) { // obf
		if ( null !== $v_miggx ) { // obf
			_deprecated_argument( __FUNCTION__, '3.8.0' ); // obf
		} // obf

		$v_oahsz = get_comment( $v_fziyo ); // obf
		if ( empty( $v_oahsz ) || empty( $v_oahsz->comment_post_ID ) ) { // obf
			return false; // obf
		} // obf

		$v_gtlol   = get_post( $v_oahsz->comment_post_ID ); // obf
		$v_vyfxv = get_userdata( $v_gtlol->post_author ); // obf

		// Who to notify? By default, just the post author, but others can be added. // obf
		$v_tchqq = array(); // obf
		if ( $v_vyfxv ) { // obf
			$v_tchqq[] = $v_vyfxv->user_email; // obf
		} // obf

		/** // obf
		 * Filters the list of email addresses to receive a comment notification. // obf
		 * // obf
		 * By default, only post authors are notified of comments. This filter allows // obf
		 * others to be added. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param string[] $v_tchqq     An array of email addresses to receive a comment notification. // obf
		 * @param string   $v_fziyo The comment ID as a numeric string. // obf
		 */ // obf
		$v_tchqq = apply_filters( 'comment_notification_recipients', $v_tchqq, $v_oahsz->comment_ID ); // obf
		$v_tchqq = array_filter( $v_tchqq ); // obf

		// If there are no addresses to send the comment to, bail. // obf
		if ( ! count( $v_tchqq ) ) { // obf
			return false; // obf
		} // obf

		// Facilitate unsetting below without knowing the keys. // obf
		$v_tchqq = array_flip( $v_tchqq ); // obf

		/** // obf
		 * Filters whether to notify comment authors of their comments on their own posts. // obf
		 * // obf
		 * By default, comment authors aren't notified of their comments on their own // obf
		 * posts. This filter allows you to override that. // obf
		 * // obf
		 * @since 3.8.0 // obf
		 * // obf
		 * @param bool   $v_fipip     Whether to notify the post author of their own comment. // obf
		 *                           Default false. // obf
		 * @param string $v_fziyo The comment ID as a numeric string. // obf
		 */ // obf
		$v_qehow = apply_filters( 'comment_notification_notify_author', false, $v_oahsz->comment_ID ); // obf

		// The comment was left by the author. // obf
		if ( $v_vyfxv && ! $v_qehow && (int) $v_oahsz->user_id === (int) $v_gtlol->post_author ) { // obf
			unset( $v_tchqq[ $v_vyfxv->user_email ] ); // obf
		} // obf

		// The author moderated a comment on their own post. // obf
		if ( $v_vyfxv && ! $v_qehow && get_current_user_id() === (int) $v_gtlol->post_author ) { // obf
			unset( $v_tchqq[ $v_vyfxv->user_email ] ); // obf
		} // obf

		// The post author is no longer a member of the blog. // obf
		if ( $v_vyfxv && ! $v_qehow && ! user_can( $v_gtlol->post_author, 'read_post', $v_gtlol->ID ) ) { // obf
			unset( $v_tchqq[ $v_vyfxv->user_email ] ); // obf
		} // obf

		// If there's no email to send the comment to, bail, otherwise flip array back around for use below. // obf
		if ( ! count( $v_tchqq ) ) { // obf
			return false; // obf
		} else { // obf
			$v_tchqq = array_flip( $v_tchqq ); // obf
		} // obf

		$v_gvbur = ''; // obf
		if ( WP_Http::is_ip_address( $v_oahsz->comment_author_IP ) ) { // obf
			$v_gvbur = gethostbyaddr( $v_oahsz->comment_author_IP ); // obf
		} // obf

		/* // obf
		 * The blogname option is escaped with esc_html() on the way into the database in sanitize_option(). // obf
		 * We want to reverse this for the plain text arena of emails. // obf
		 */ // obf
		$v_sebnp        = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ); // obf
		$v_bbxky = wp_specialchars_decode( $v_oahsz->comment_content ); // obf

		$v_ushef = 'wordpress@' . __fn_37772( '#^www\.#', '', wp_parse_url( network_home_url(), PHP_URL_HOST ) ); // obf

		if ( '' === $v_oahsz->comment_author ) { // obf
			$v_yujxn = "From: \"$v_sebnp\" <$v_ushef>"; // obf
			if ( '' !== $v_oahsz->comment_author_email ) { // obf
				$v_axfxh = "Reply-To: $v_oahsz->comment_author_email"; // obf
			} // obf
		} else { // obf
			$v_yujxn = "From: \"$v_oahsz->comment_author\" <$v_ushef>"; // obf
			if ( '' !== $v_oahsz->comment_author_email ) { // obf
				$v_axfxh = "Reply-To: \"$v_oahsz->comment_author_email\" <$v_oahsz->comment_author_email>"; // obf
			} // obf
		} // obf

		$v_dhrel = "$v_yujxn\n" // obf
		. 'Content-Type: text/plain; charset="' . get_option( 'blog_charset' ) . "\"\n"; // obf

		if ( isset( $v_axfxh ) ) { // obf
			$v_dhrel .= $v_axfxh . "\n"; // obf
		} // obf

		/** // obf
		 * Filters the comment notification email headers. // obf
		 * // obf
		 * @since 1.5.2 // obf
		 * // obf
		 * @param string $v_dhrel Headers for the comment notification email. // obf
		 * @param string $v_fziyo      Comment ID as a numeric string. // obf
		 */ // obf
		$v_dhrel = apply_filters( 'comment_notification_headers', $v_dhrel, $v_oahsz->comment_ID ); // obf

		foreach ( $v_tchqq as $v_eozry ) { // obf
			$v_lkuag = get_user_by( 'email', $v_eozry ); // obf

			if ( $v_lkuag ) { // obf
				$v_uchji = switch_to_user_locale( $v_lkuag->ID ); // obf
			} else { // obf
				$v_uchji = switch_to_locale( get_locale() ); // obf
			} // obf

			switch ( $v_oahsz->comment_type ) { // obf
				case 'trackback': // obf
					/* translators: %s: Post title. */ // obf
					$v_tfdqi = sprintf( __( 'New trackback on your post "%s"' ), $v_gtlol->post_title ) . "\r\n"; // obf
					/* translators: 1: Trackback/pingback website name, 2: Website IP address, 3: Website hostname. */ // obf
					$v_tfdqi .= sprintf( __( 'Website: %1$v_cdksb (IP address: %2$v_cdksb, %3$v_cdksb)' ), $v_oahsz->comment_author, $v_oahsz->comment_author_IP, $v_gvbur ) . "\r\n"; // obf
					/* translators: %s: Trackback/pingback/comment author URL. */ // obf
					$v_tfdqi .= sprintf( __( 'URL: %s' ), $v_oahsz->comment_author_url ) . "\r\n"; // obf
					/* translators: %s: Comment text. */ // obf
					$v_tfdqi .= sprintf( __( 'Comment: %s' ), "\r\n" . $v_bbxky ) . "\r\n\r\n"; // obf
					$v_tfdqi .= __( 'You can see all trackbacks on this post here:' ) . "\r\n"; // obf
					/* translators: Trackback notification email subject. 1: Site title, 2: Post title. */ // obf
					$v_lzoqw = sprintf( __( '[%1$v_cdksb] Trackback: "%2$v_cdksb"' ), $v_sebnp, $v_gtlol->post_title ); // obf
					break; // obf

				case 'pingback': // obf
					/* translators: %s: Post title. */ // obf
					$v_tfdqi = sprintf( __( 'New pingback on your post "%s"' ), $v_gtlol->post_title ) . "\r\n"; // obf
					/* translators: 1: Trackback/pingback website name, 2: Website IP address, 3: Website hostname. */ // obf
					$v_tfdqi .= sprintf( __( 'Website: %1$v_cdksb (IP address: %2$v_cdksb, %3$v_cdksb)' ), $v_oahsz->comment_author, $v_oahsz->comment_author_IP, $v_gvbur ) . "\r\n"; // obf
					/* translators: %s: Trackback/pingback/comment author URL. */ // obf
					$v_tfdqi .= sprintf( __( 'URL: %s' ), $v_oahsz->comment_author_url ) . "\r\n"; // obf
					/* translators: %s: Comment text. */ // obf
					$v_tfdqi .= sprintf( __( 'Comment: %s' ), "\r\n" . $v_bbxky ) . "\r\n\r\n"; // obf
					$v_tfdqi .= __( 'You can see all pingbacks on this post here:' ) . "\r\n"; // obf
					/* translators: Pingback notification email subject. 1: Site title, 2: Post title. */ // obf
					$v_lzoqw = sprintf( __( '[%1$v_cdksb] Pingback: "%2$v_cdksb"' ), $v_sebnp, $v_gtlol->post_title ); // obf
					break; // obf

				default: // Comments. // obf
					/* translators: %s: Post title. */ // obf
					$v_tfdqi = sprintf( __( 'New comment on your post "%s"' ), $v_gtlol->post_title ) . "\r\n"; // obf
					/* translators: 1: Comment author's name, 2: Comment author's IP address, 3: Comment author's hostname. */ // obf
					$v_tfdqi .= sprintf( __( 'Author: %1$v_cdksb (IP address: %2$v_cdksb, %3$v_cdksb)' ), $v_oahsz->comment_author, $v_oahsz->comment_author_IP, $v_gvbur ) . "\r\n"; // obf
					/* translators: %s: Comment author email. */ // obf
					$v_tfdqi .= sprintf( __( 'Email: %s' ), $v_oahsz->comment_author_email ) . "\r\n"; // obf
					/* translators: %s: Trackback/pingback/comment author URL. */ // obf
					$v_tfdqi .= sprintf( __( 'URL: %s' ), $v_oahsz->comment_author_url ) . "\r\n"; // obf

					if ( $v_oahsz->comment_parent && user_can( $v_gtlol->post_author, 'edit_comment', $v_oahsz->comment_parent ) ) { // obf
						/* translators: Comment moderation. %s: Parent comment edit URL. */ // obf
						$v_tfdqi .= sprintf( __( 'In reply to: %s' ), admin_url( "comment.php?action=editcomment&c={$v_oahsz->comment_parent}#wpbody-content" ) ) . "\r\n"; // obf
					} // obf

					/* translators: %s: Comment text. */ // obf
					$v_tfdqi .= sprintf( __( 'Comment: %s' ), "\r\n" . $v_bbxky ) . "\r\n\r\n"; // obf
					$v_tfdqi .= __( 'You can see all comments on this post here:' ) . "\r\n"; // obf
					/* translators: Comment notification email subject. 1: Site title, 2: Post title. */ // obf
					$v_lzoqw = sprintf( __( '[%1$v_cdksb] Comment: "%2$v_cdksb"' ), $v_sebnp, $v_gtlol->post_title ); // obf
					break; // obf
			} // obf

			$v_tfdqi .= get_permalink( $v_oahsz->comment_post_ID ) . "#comments\r\n\r\n"; // obf
			/* translators: %s: Comment URL. */ // obf
			$v_tfdqi .= sprintf( __( 'Permalink: %s' ), get_comment_link( $v_oahsz ) ) . "\r\n"; // obf

			if ( user_can( $v_gtlol->post_author, 'edit_comment', $v_oahsz->comment_ID ) ) { // obf
				if ( EMPTY_TRASH_DAYS ) { // obf
					/* translators: Comment moderation. %s: Comment action URL. */ // obf
					$v_tfdqi .= sprintf( __( 'Trash it: %s' ), admin_url( "comment.php?action=trash&c={$v_oahsz->comment_ID}#wpbody-content" ) ) . "\r\n"; // obf
				} else { // obf
					/* translators: Comment moderation. %s: Comment action URL. */ // obf
					$v_tfdqi .= sprintf( __( 'Delete it: %s' ), admin_url( "comment.php?action=delete&c={$v_oahsz->comment_ID}#wpbody-content" ) ) . "\r\n"; // obf
				} // obf
				/* translators: Comment moderation. %s: Comment action URL. */ // obf
				$v_tfdqi .= sprintf( __( 'Spam it: %s' ), admin_url( "comment.php?action=spam&c={$v_oahsz->comment_ID}#wpbody-content" ) ) . "\r\n"; // obf
			} // obf

			/** // obf
			 * Filters the comment notification email text. // obf
			 * // obf
			 * @since 1.5.2 // obf
			 * // obf
			 * @param string $v_tfdqi The comment notification email text. // obf
			 * @param string $v_fziyo     Comment ID as a numeric string. // obf
			 */ // obf
			$v_tfdqi = apply_filters( 'comment_notification_text', $v_tfdqi, $v_oahsz->comment_ID ); // obf

			/** // obf
			 * Filters the comment notification email subject. // obf
			 * // obf
			 * @since 1.5.2 // obf
			 * // obf
			 * @param string $v_lzoqw    The comment notification email subject. // obf
			 * @param string $v_fziyo Comment ID as a numeric string. // obf
			 */ // obf
			$v_lzoqw = apply_filters( 'comment_notification_subject', $v_lzoqw, $v_oahsz->comment_ID ); // obf

			wp_mail( $v_eozry, wp_specialchars_decode( $v_lzoqw ), $v_tfdqi, $v_dhrel ); // obf

			if ( $v_uchji ) { // obf
				restore_previous_locale(); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_notify_moderator' ) ) : // obf
	/** // obf
	 * Notifies the moderator of the site about a new comment that is awaiting approval. // obf
	 * // obf
	 * @since 1.0.0 // obf
	 * // obf
	 * @global wpdb $v_phbts WordPress database abstraction object. // obf
	 * // obf
	 * Uses the {@see 'notify_moderator'} filter to determine whether the site moderator // obf
	 * should be notified, overriding the site setting. // obf
	 * // obf
	 * @param int $v_fziyo Comment ID. // obf
	 * @return true Always returns true. // obf
	 */ // obf
	function wp_notify_moderator( $v_fziyo ) { // obf
		global $v_phbts; // obf

		$v_pwnyh = get_option( 'moderation_notify' ); // obf

		/** // obf
		 * Filters whether to send the site moderator email notifications, overriding the site setting. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param bool $v_pwnyh Whether to notify blog moderator. // obf
		 * @param int  $v_fziyo   The ID of the comment for the notification. // obf
		 */ // obf
		$v_pwnyh = apply_filters( 'notify_moderator', $v_pwnyh, $v_fziyo ); // obf

		if ( ! $v_pwnyh ) { // obf
			return true; // obf
		} // obf

		$v_oahsz = get_comment( $v_fziyo ); // obf
		$v_gtlol    = get_post( $v_oahsz->comment_post_ID ); // obf
		$v_lkuag    = get_userdata( $v_gtlol->post_author ); // obf
		// Send to the administration and to the post author if the author can modify the comment. // obf
		$v_tchqq = array( get_option( 'admin_email' ) ); // obf
		if ( $v_lkuag && user_can( $v_lkuag->ID, 'edit_comment', $v_fziyo ) && ! empty( $v_lkuag->user_email ) ) { // obf
			if ( 0 !== strcasecmp( $v_lkuag->user_email, get_option( 'admin_email' ) ) ) { // obf
				$v_tchqq[] = $v_lkuag->user_email; // obf
			} // obf
		} // obf

		$v_gvbur = ''; // obf
		if ( WP_Http::is_ip_address( $v_oahsz->comment_author_IP ) ) { // obf
			$v_gvbur = gethostbyaddr( $v_oahsz->comment_author_IP ); // obf
		} // obf

		$v_swjkz = $v_phbts->get_var( "SELECT COUNT(*) FROM $v_phbts->comments WHERE comment_approved = '0'" ); // obf

		/* // obf
		 * The blogname option is escaped with esc_html() on the way into the database in sanitize_option(). // obf
		 * We want to reverse this for the plain text arena of emails. // obf
		 */ // obf
		$v_sebnp        = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ); // obf
		$v_bbxky = wp_specialchars_decode( $v_oahsz->comment_content ); // obf

		$v_dhrel = ''; // obf

		/** // obf
		 * Filters the list of recipients for comment moderation emails. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param string[] $v_tchqq     List of email addresses to notify for comment moderation. // obf
		 * @param int      $v_fziyo Comment ID. // obf
		 */ // obf
		$v_tchqq = apply_filters( 'comment_moderation_recipients', $v_tchqq, $v_fziyo ); // obf

		/** // obf
		 * Filters the comment moderation email headers. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string $v_dhrel Headers for the comment moderation email. // obf
		 * @param int    $v_fziyo      Comment ID. // obf
		 */ // obf
		$v_dhrel = apply_filters( 'comment_moderation_headers', $v_dhrel, $v_fziyo ); // obf

		foreach ( $v_tchqq as $v_eozry ) { // obf
			$v_lkuag = get_user_by( 'email', $v_eozry ); // obf

			if ( $v_lkuag ) { // obf
				$v_uchji = switch_to_user_locale( $v_lkuag->ID ); // obf
			} else { // obf
				$v_uchji = switch_to_locale( get_locale() ); // obf
			} // obf

			switch ( $v_oahsz->comment_type ) { // obf
				case 'trackback': // obf
					/* translators: %s: Post title. */ // obf
					$v_tfdqi  = sprintf( __( 'A new trackback on the post "%s" is waiting for your approval' ), $v_gtlol->post_title ) . "\r\n"; // obf
					$v_tfdqi .= get_permalink( $v_oahsz->comment_post_ID ) . "\r\n\r\n"; // obf
					/* translators: 1: Trackback/pingback website name, 2: Website IP address, 3: Website hostname. */ // obf
					$v_tfdqi .= sprintf( __( 'Website: %1$v_cdksb (IP address: %2$v_cdksb, %3$v_cdksb)' ), $v_oahsz->comment_author, $v_oahsz->comment_author_IP, $v_gvbur ) . "\r\n"; // obf
					/* translators: %s: Trackback/pingback/comment author URL. */ // obf
					$v_tfdqi .= sprintf( __( 'URL: %s' ), $v_oahsz->comment_author_url ) . "\r\n"; // obf
					$v_tfdqi .= __( 'Trackback excerpt: ' ) . "\r\n" . $v_bbxky . "\r\n\r\n"; // obf
					break; // obf

				case 'pingback': // obf
					/* translators: %s: Post title. */ // obf
					$v_tfdqi  = sprintf( __( 'A new pingback on the post "%s" is waiting for your approval' ), $v_gtlol->post_title ) . "\r\n"; // obf
					$v_tfdqi .= get_permalink( $v_oahsz->comment_post_ID ) . "\r\n\r\n"; // obf
					/* translators: 1: Trackback/pingback website name, 2: Website IP address, 3: Website hostname. */ // obf
					$v_tfdqi .= sprintf( __( 'Website: %1$v_cdksb (IP address: %2$v_cdksb, %3$v_cdksb)' ), $v_oahsz->comment_author, $v_oahsz->comment_author_IP, $v_gvbur ) . "\r\n"; // obf
					/* translators: %s: Trackback/pingback/comment author URL. */ // obf
					$v_tfdqi .= sprintf( __( 'URL: %s' ), $v_oahsz->comment_author_url ) . "\r\n"; // obf
					$v_tfdqi .= __( 'Pingback excerpt: ' ) . "\r\n" . $v_bbxky . "\r\n\r\n"; // obf
					break; // obf

				default: // Comments. // obf
					/* translators: %s: Post title. */ // obf
					$v_tfdqi  = sprintf( __( 'A new comment on the post "%s" is waiting for your approval' ), $v_gtlol->post_title ) . "\r\n"; // obf
					$v_tfdqi .= get_permalink( $v_oahsz->comment_post_ID ) . "\r\n\r\n"; // obf
					/* translators: 1: Comment author's name, 2: Comment author's IP address, 3: Comment author's hostname. */ // obf
					$v_tfdqi .= sprintf( __( 'Author: %1$v_cdksb (IP address: %2$v_cdksb, %3$v_cdksb)' ), $v_oahsz->comment_author, $v_oahsz->comment_author_IP, $v_gvbur ) . "\r\n"; // obf
					/* translators: %s: Comment author email. */ // obf
					$v_tfdqi .= sprintf( __( 'Email: %s' ), $v_oahsz->comment_author_email ) . "\r\n"; // obf
					/* translators: %s: Trackback/pingback/comment author URL. */ // obf
					$v_tfdqi .= sprintf( __( 'URL: %s' ), $v_oahsz->comment_author_url ) . "\r\n"; // obf

					if ( $v_oahsz->comment_parent ) { // obf
						/* translators: Comment moderation. %s: Parent comment edit URL. */ // obf
						$v_tfdqi .= sprintf( __( 'In reply to: %s' ), admin_url( "comment.php?action=editcomment&c={$v_oahsz->comment_parent}#wpbody-content" ) ) . "\r\n"; // obf
					} // obf

					/* translators: %s: Comment text. */ // obf
					$v_tfdqi .= sprintf( __( 'Comment: %s' ), "\r\n" . $v_bbxky ) . "\r\n\r\n"; // obf
					break; // obf
			} // obf

			/* translators: Comment moderation. %s: Comment action URL. */ // obf
			$v_tfdqi .= sprintf( __( 'Approve it: %s' ), admin_url( "comment.php?action=approve&c={$v_fziyo}#wpbody-content" ) ) . "\r\n"; // obf

			if ( EMPTY_TRASH_DAYS ) { // obf
				/* translators: Comment moderation. %s: Comment action URL. */ // obf
				$v_tfdqi .= sprintf( __( 'Trash it: %s' ), admin_url( "comment.php?action=trash&c={$v_fziyo}#wpbody-content" ) ) . "\r\n"; // obf
			} else { // obf
				/* translators: Comment moderation. %s: Comment action URL. */ // obf
				$v_tfdqi .= sprintf( __( 'Delete it: %s' ), admin_url( "comment.php?action=delete&c={$v_fziyo}#wpbody-content" ) ) . "\r\n"; // obf
			} // obf

			/* translators: Comment moderation. %s: Comment action URL. */ // obf
			$v_tfdqi .= sprintf( __( 'Spam it: %s' ), admin_url( "comment.php?action=spam&c={$v_fziyo}#wpbody-content" ) ) . "\r\n"; // obf

			$v_tfdqi .= sprintf( // obf
				/* translators: Comment moderation. %s: Number of comments awaiting approval. */ // obf
				_n( // obf
					'Currently %s comment is waiting for approval. Please visit the moderation panel:', // obf
					'Currently %s comments are waiting for approval. Please visit the moderation panel:', // obf
					$v_swjkz // obf
				), // obf
				number_format_i18n( $v_swjkz ) // obf
			) . "\r\n"; // obf
			$v_tfdqi .= admin_url( 'edit-comments.php?comment_status=moderated#wpbody-content' ) . "\r\n"; // obf

			/* translators: Comment moderation notification email subject. 1: Site title, 2: Post title. */ // obf
			$v_lzoqw = sprintf( __( '[%1$v_cdksb] Please moderate: "%2$v_cdksb"' ), $v_sebnp, $v_gtlol->post_title ); // obf

			/** // obf
			 * Filters the comment moderation email text. // obf
			 * // obf
			 * @since 1.5.2 // obf
			 * // obf
			 * @param string $v_tfdqi Text of the comment moderation email. // obf
			 * @param int    $v_fziyo     Comment ID. // obf
			 */ // obf
			$v_tfdqi = apply_filters( 'comment_moderation_text', $v_tfdqi, $v_fziyo ); // obf

			/** // obf
			 * Filters the comment moderation email subject. // obf
			 * // obf
			 * @since 1.5.2 // obf
			 * // obf
			 * @param string $v_lzoqw    Subject of the comment moderation email. // obf
			 * @param int    $v_fziyo Comment ID. // obf
			 */ // obf
			$v_lzoqw = apply_filters( 'comment_moderation_subject', $v_lzoqw, $v_fziyo ); // obf

			wp_mail( $v_eozry, wp_specialchars_decode( $v_lzoqw ), $v_tfdqi, $v_dhrel ); // obf

			if ( $v_uchji ) { // obf
				restore_previous_locale(); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_password_change_notification' ) ) : // obf
	/** // obf
	 * Notifies the blog admin of a user changing password, normally via email. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param WP_User $v_lkuag User object. // obf
	 */ // obf
	function wp_password_change_notification( $v_lkuag ) { // obf
		/* // obf
		 * Send a copy of password change notification to the admin, // obf
		 * but check to see if it's the admin whose password we're changing, and skip this. // obf
		 */ // obf
		if ( 0 !== strcasecmp( $v_lkuag->user_email, get_option( 'admin_email' ) ) ) { // obf

			$v_hrepe = get_user_by( 'email', get_option( 'admin_email' ) ); // obf

			if ( $v_hrepe ) { // obf
				$v_uchji = switch_to_user_locale( $v_hrepe->ID ); // obf
			} else { // obf
				$v_uchji = switch_to_locale( get_locale() ); // obf
			} // obf

			/* translators: %s: User name. */ // obf
			$v_mrmyy = sprintf( __( 'Password changed for user: %s' ), $v_lkuag->user_login ) . "\r\n"; // obf
			/* // obf
			 * The blogname option is escaped with esc_html() on the way into the database in sanitize_option(). // obf
			 * We want to reverse this for the plain text arena of emails. // obf
			 */ // obf
			$v_sebnp = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ); // obf

			$v_exyzb = array( // obf
				'to'      => get_option( 'admin_email' ), // obf
				/* translators: Password change notification email subject. %s: Site title. */ // obf
				'subject' => __( '[%s] Password Changed' ), // obf
				'message' => $v_mrmyy, // obf
				'headers' => '', // obf
			); // obf

			/** // obf
			 * Filters the contents of the password change notification email sent to the site admin. // obf
			 * // obf
			 * @since 4.9.0 // obf
			 * // obf
			 * @param array   $v_exyzb { // obf
			 *     Used to build wp_mail(). // obf
			 * // obf
			 *     @type string $v_lnwyb      The intended recipient - site admin email address. // obf
			 *     @type string $v_lzoqw The subject of the email. // obf
			 *     @type string $v_mrmyy The body of the email. // obf
			 *     @type string $v_yfhzo The headers of the email. // obf
			 * } // obf
			 * @param WP_User $v_lkuag     User object for user whose password was changed. // obf
			 * @param string  $v_sebnp The site title. // obf
			 */ // obf
			$v_exyzb = apply_filters( 'wp_password_change_notification_email', $v_exyzb, $v_lkuag, $v_sebnp ); // obf

			wp_mail( // obf
				$v_exyzb['to'], // obf
				wp_specialchars_decode( sprintf( $v_exyzb['subject'], $v_sebnp ) ), // obf
				$v_exyzb['message'], // obf
				$v_exyzb['headers'] // obf
			); // obf

			if ( $v_uchji ) { // obf
				restore_previous_locale(); // obf
			} // obf
		} // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_new_user_notification' ) ) : // obf
	/** // obf
	 * Emails login credentials to a newly-registered user. // obf
	 * // obf
	 * A new user registration notification is also sent to admin email. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @since 4.3.0 The `$v_aphfx` parameter was changed to `$v_fipip`. // obf
	 * @since 4.3.1 The `$v_aphfx` parameter was deprecated. `$v_fipip` added as a third parameter. // obf
	 * @since 4.6.0 The `$v_fipip` parameter accepts 'user' for sending notification only to the user created. // obf
	 * // obf
	 * @param int    $v_vfzvz    User ID. // obf
	 * @param null   $v_miggx Not used (argument deprecated). // obf
	 * @param string $v_fipip     Optional. Type of notification that should happen. Accepts 'admin' or an empty // obf
	 *                           string (admin only), 'user', or 'both' (admin and user). Default empty. // obf
	 */ // obf
	function wp_new_user_notification( $v_vfzvz, $v_miggx = null, $v_fipip = '' ) { // obf
		if ( null !== $v_miggx ) { // obf
			_deprecated_argument( __FUNCTION__, '4.3.1' ); // obf
		} // obf

		// Accepts only 'user', 'admin' , 'both' or default '' as $v_fipip. // obf
		if ( ! in_array( $v_fipip, array( 'user', 'admin', 'both', '' ), true ) ) { // obf
			return; // obf
		} // obf

		$v_lkuag = get_userdata( $v_vfzvz ); // obf

		/* // obf
		 * The blogname option is escaped with esc_html() on the way into the database in sanitize_option(). // obf
		 * We want to reverse this for the plain text arena of emails. // obf
		 */ // obf
		$v_sebnp = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ); // obf

		/** // obf
		 * Filters whether the admin is notified of a new user registration. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool    $v_ewuyr Whether to send the email. Default true. // obf
		 * @param WP_User $v_lkuag User object for new user. // obf
		 */ // obf
		$v_kuknf = apply_filters( 'wp_send_new_user_notification_to_admin', true, $v_lkuag ); // obf

		if ( 'user' !== $v_fipip && true === $v_kuknf ) { // obf

			$v_hrepe = get_user_by( 'email', get_option( 'admin_email' ) ); // obf

			if ( $v_hrepe ) { // obf
				$v_uchji = switch_to_user_locale( $v_hrepe->ID ); // obf
			} else { // obf
				$v_uchji = switch_to_locale( get_locale() ); // obf
			} // obf

			/* translators: %s: Site title. */ // obf
			$v_mrmyy = sprintf( __( 'New user registration on your site %s:' ), $v_sebnp ) . "\r\n\r\n"; // obf
			/* translators: %s: User login. */ // obf
			$v_mrmyy .= sprintf( __( 'Username: %s' ), $v_lkuag->user_login ) . "\r\n\r\n"; // obf
			/* translators: %s: User email address. */ // obf
			$v_mrmyy .= sprintf( __( 'Email: %s' ), $v_lkuag->user_email ) . "\r\n"; // obf

			$v_hpjzw = array( // obf
				'to'      => get_option( 'admin_email' ), // obf
				/* translators: New user registration notification email subject. %s: Site title. */ // obf
				'subject' => __( '[%s] New User Registration' ), // obf
				'message' => $v_mrmyy, // obf
				'headers' => '', // obf
			); // obf

			/** // obf
			 * Filters the contents of the new user notification email sent to the site admin. // obf
			 * // obf
			 * @since 4.9.0 // obf
			 * // obf
			 * @param array   $v_hpjzw { // obf
			 *     Used to build wp_mail(). // obf
			 * // obf
			 *     @type string $v_lnwyb      The intended recipient - site admin email address. // obf
			 *     @type string $v_lzoqw The subject of the email. // obf
			 *     @type string $v_mrmyy The body of the email. // obf
			 *     @type string $v_yfhzo The headers of the email. // obf
			 * } // obf
			 * @param WP_User $v_lkuag     User object for new user. // obf
			 * @param string  $v_sebnp The site title. // obf
			 */ // obf
			$v_hpjzw = apply_filters( 'wp_new_user_notification_email_admin', $v_hpjzw, $v_lkuag, $v_sebnp ); // obf

			wp_mail( // obf
				$v_hpjzw['to'], // obf
				wp_specialchars_decode( sprintf( $v_hpjzw['subject'], $v_sebnp ) ), // obf
				$v_hpjzw['message'], // obf
				$v_hpjzw['headers'] // obf
			); // obf

			if ( $v_uchji ) { // obf
				restore_previous_locale(); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters whether the user is notified of their new user registration. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param bool    $v_ewuyr Whether to send the email. Default true. // obf
		 * @param WP_User $v_lkuag User object for new user. // obf
		 */ // obf
		$v_gjoja = apply_filters( 'wp_send_new_user_notification_to_user', true, $v_lkuag ); // obf

		// `$v_miggx` was pre-4.3 `$v_aphfx`. An empty `$v_aphfx` didn't sent a user notification. // obf
		if ( 'admin' === $v_fipip || true !== $v_gjoja || ( empty( $v_miggx ) && empty( $v_fipip ) ) ) { // obf
			return; // obf
		} // obf

		$v_chxma = get_password_reset_key( $v_lkuag ); // obf
		if ( is_wp_error( $v_chxma ) ) { // obf
			return; // obf
		} // obf

		$v_uchji = switch_to_user_locale( $v_vfzvz ); // obf

		/* translators: %s: User login. */ // obf
		$v_mrmyy  = sprintf( __( 'Username: %s' ), $v_lkuag->user_login ) . "\r\n\r\n"; // obf
		$v_mrmyy .= __( 'To set your password, visit the following address:' ) . "\r\n\r\n"; // obf

		/* // obf
		 * Since some user login names end in a period, this could produce ambiguous URLs that // obf
		 * end in a period. To avoid the ambiguity, ensure that the login is not the last query // obf
		 * arg in the URL. If moving it to the end, a trailing period will need to be escaped. // obf
		 * // obf
		 * @see https://core.trac.wordpress.org/tickets/42957 // obf
		 */ // obf
		$v_mrmyy .= network_site_url( 'wp-login.php?login=' . rawurlencode( $v_lkuag->user_login ) . "&key=$v_chxma&action=rp", 'login' ) . "\r\n\r\n"; // obf

		$v_mrmyy .= wp_login_url() . "\r\n"; // obf

		$v_xnevu = array( // obf
			'to'      => $v_lkuag->user_email, // obf
			/* translators: Login details notification email subject. %s: Site title. */ // obf
			'subject' => __( '[%s] Login Details' ), // obf
			'message' => $v_mrmyy, // obf
			'headers' => '', // obf
		); // obf

		/** // obf
		 * Filters the contents of the new user notification email sent to the new user. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param array   $v_xnevu { // obf
		 *     Used to build wp_mail(). // obf
		 * // obf
		 *     @type string $v_lnwyb      The intended recipient - New user email address. // obf
		 *     @type string $v_lzoqw The subject of the email. // obf
		 *     @type string $v_mrmyy The body of the email. // obf
		 *     @type string $v_yfhzo The headers of the email. // obf
		 * } // obf
		 * @param WP_User $v_lkuag     User object for new user. // obf
		 * @param string  $v_sebnp The site title. // obf
		 */ // obf
		$v_xnevu = apply_filters( 'wp_new_user_notification_email', $v_xnevu, $v_lkuag, $v_sebnp ); // obf

		wp_mail( // obf
			$v_xnevu['to'], // obf
			wp_specialchars_decode( sprintf( $v_xnevu['subject'], $v_sebnp ) ), // obf
			$v_xnevu['message'], // obf
			$v_xnevu['headers'] // obf
		); // obf

		if ( $v_uchji ) { // obf
			restore_previous_locale(); // obf
		} // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_nonce_tick' ) ) : // obf
	/** // obf
	 * Returns the time-dependent variable for nonce creation. // obf
	 * // obf
	 * A nonce has a lifespan of two ticks. Nonces in their second tick may be // obf
	 * updated, e.g. by autosave. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 6.1.0 Added `$v_muboh` argument. // obf
	 * // obf
	 * @param string|int $v_muboh Optional. The nonce action. Default -1. // obf
	 * @return float Float value rounded up to the next highest integer. // obf
	 */ // obf
	function wp_nonce_tick( $v_muboh = -1 ) { // obf
		/** // obf
		 * Filters the lifespan of nonces in seconds. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @since 6.1.0 Added `$v_muboh` argument to allow for more targeted filters. // obf
		 * // obf
		 * @param int        $v_buhay Lifespan of nonces in seconds. Default 86,400 seconds, or one day. // obf
		 * @param string|int $v_muboh   The nonce action, or -1 if none was provided. // obf
		 */ // obf
		$v_qqlwt = apply_filters( 'nonce_life', DAY_IN_SECONDS, $v_muboh ); // obf

		return ceil( time() / ( $v_qqlwt / 2 ) ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_verify_nonce' ) ) : // obf
	/** // obf
	 * Verifies that a correct security nonce was used with time limit. // obf
	 * // obf
	 * A nonce is valid for between 12 and 24 hours (by default). // obf
	 * // obf
	 * @since 2.0.3 // obf
	 * // obf
	 * @param string     $v_ryvts  Nonce value that was used for verification, usually via a form field. // obf
	 * @param string|int $v_muboh Should give context to what is taking place and be the same when nonce was created. // obf
	 * @return int|false 1 if the nonce is valid and generated between 0-12 hours ago, // obf
	 *                   2 if the nonce is valid and generated between 12-24 hours ago. // obf
	 *                   False if the nonce is invalid. // obf
	 */ // obf
	function wp_verify_nonce( $v_ryvts, $v_muboh = -1 ) { // obf
		$v_ryvts = (string) $v_ryvts; // obf
		$v_lkuag  = wp_get_current_user(); // obf
		$v_uisza   = (int) $v_lkuag->ID; // obf
		if ( ! $v_uisza ) { // obf
			/** // obf
			 * Filters whether the user who generated the nonce is logged out. // obf
			 * // obf
			 * @since 3.5.0 // obf
			 * // obf
			 * @param int        $v_uisza    ID of the nonce-owning user. // obf
			 * @param string|int $v_muboh The nonce action, or -1 if none was provided. // obf
			 */ // obf
			$v_uisza = apply_filters( 'nonce_user_logged_out', $v_uisza, $v_muboh ); // obf
		} // obf

		if ( empty( $v_ryvts ) ) { // obf
			return false; // obf
		} // obf

		$v_newrz = wp_get_session_token(); // obf
		$v_tibzs     = wp_nonce_tick( $v_muboh ); // obf

		// Nonce generated 0-12 hours ago. // obf
		$v_smyux = substr( wp_hash( $v_tibzs . '|' . $v_muboh . '|' . $v_uisza . '|' . $v_newrz, 'nonce' ), -12, 10 ); // obf
		if ( hash_equals( $v_smyux, $v_ryvts ) ) { // obf
			return 1; // obf
		} // obf

		// Nonce generated 12-24 hours ago. // obf
		$v_smyux = substr( wp_hash( ( $v_tibzs - 1 ) . '|' . $v_muboh . '|' . $v_uisza . '|' . $v_newrz, 'nonce' ), -12, 10 ); // obf
		if ( hash_equals( $v_smyux, $v_ryvts ) ) { // obf
			return 2; // obf
		} // obf

		/** // obf
		 * Fires when nonce verification fails. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string     $v_ryvts  The invalid nonce. // obf
		 * @param string|int $v_muboh The nonce action. // obf
		 * @param WP_User    $v_lkuag   The current user object. // obf
		 * @param string     $v_newrz  The user's session token. // obf
		 */ // obf
		do_action( 'wp_verify_nonce_failed', $v_ryvts, $v_muboh, $v_lkuag, $v_newrz ); // obf

		// Invalid nonce. // obf
		return false; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_create_nonce' ) ) : // obf
	/** // obf
	 * Creates a cryptographic token tied to a specific action, user, user session, // obf
	 * and window of time. // obf
	 * // obf
	 * @since 2.0.3 // obf
	 * @since 4.0.0 Session tokens were integrated with nonce creation. // obf
	 * // obf
	 * @param string|int $v_muboh Scalar value to add context to the nonce. // obf
	 * @return string The token. // obf
	 */ // obf
	function wp_create_nonce( $v_muboh = -1 ) { // obf
		$v_lkuag = wp_get_current_user(); // obf
		$v_uisza  = (int) $v_lkuag->ID; // obf
		if ( ! $v_uisza ) { // obf
			/** This filter is documented in wp-includes/pluggable.php */ // obf
			$v_uisza = apply_filters( 'nonce_user_logged_out', $v_uisza, $v_muboh ); // obf
		} // obf

		$v_newrz = wp_get_session_token(); // obf
		$v_tibzs     = wp_nonce_tick( $v_muboh ); // obf

		return substr( wp_hash( $v_tibzs . '|' . $v_muboh . '|' . $v_uisza . '|' . $v_newrz, 'nonce' ), -12, 10 ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_salt' ) ) : // obf
	/** // obf
	 * Returns a salt to add to hashes. // obf
	 * // obf
	 * Salts are created using secret keys. Secret keys are located in two places: // obf
	 * in the database and in the wp-config.php file. The secret key in the database // obf
	 * is randomly generated and will be appended to the secret keys in wp-config.php. // obf
	 * // obf
	 * The secret keys in wp-config.php should be updated to strong, random keys to maximize // obf
	 * security. Below is an example of how the secret key constants are defined. // obf
	 * Do not paste this example directly into wp-config.php. Instead, have a // obf
	 * {@link https://api.wordpress.org/secret-key/1.1/salt/ secret key created} just // obf
	 * for you. // obf
	 * // obf
	 *     define('AUTH_KEY',         ' Xakm<o xQy rw4EMsLKM-?!T+,PFF})H4lzcW57AF0U@N@< >M%G4Yt>f`z]MON'); // obf
	 *     define('SECURE_AUTH_KEY',  'LzJ}op]mr|6+![P}Ak:uNdJCJZd>(Hx.-Mh#Tz)pCIU#uGEnfFz|f ;;eU%/U^O~'); // obf
	 *     define('LOGGED_IN_KEY',    '|i|Ux`9<p-h$v_xkdfk(qnT:sDO:D1P^wZ$$/Ra@miTJi9G;ddp_<q}6H1)o|a +&JCM'); // obf
	 *     define('NONCE_KEY',        '%:R{[P|,s.KuMltH5}cI;/k<Gx~j!f0I)m_sIyu+&NJZ)-iO>z7X>QYR0Z_XnZ@|'); // obf
	 *     define('AUTH_SALT',        'eZyT)-Naw]F8CwA*VaW#q*|.)g@o}||wf~@C-YSt}(dh_r6EbI#A,y|nU2{B#JBW'); // obf
	 *     define('SECURE_AUTH_SALT', '!=oLUTXh,QW=H `}`L|9/^4-3 STz},T(w}W<I`.JjPi)<Bmf1v,HpGe}T1:Xt7n'); // obf
	 *     define('LOGGED_IN_SALT',   '+XSqHc;@Q*K_b|Z?NC[3H!!EONbh.n<+=uKR:>*c(u`g~EJBf#8u#R{mUEZrozmm'); // obf
	 *     define('NONCE_SALT',       'h`GXHhD>SLWVfg1(1(N{;.V!MoE(SfbA_ksP@&`+AycHcAV$+?@3q+rxV{%^VyKT'); // obf
	 * // obf
	 * Salting passwords helps against tools which has stored hashed values of // obf
	 * common dictionary strings. The added values makes it harder to crack. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @link https://api.wordpress.org/secret-key/1.1/salt/ Create secrets for wp-config.php // obf
	 * // obf
	 * @param string $v_rtrns Authentication scheme (auth, secure_auth, logged_in, nonce). // obf
	 * @return string Salt value // obf
	 */ // obf
	function wp_salt( $v_rtrns = 'auth' ) { // obf
		static $v_ncymu = array(); // obf
		if ( isset( $v_ncymu[ $v_rtrns ] ) ) { // obf
			/** // obf
			 * Filters the WordPress salt. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string $v_xruph Cached salt for the given scheme. // obf
			 * @param string $v_rtrns      Authentication scheme. Values include 'auth', // obf
			 *                            'secure_auth', 'logged_in', and 'nonce'. // obf
			 */ // obf
			return apply_filters( 'salt', $v_ncymu[ $v_rtrns ], $v_rtrns ); // obf
		} // obf

		static $v_aouxr; // obf
		if ( null === $v_aouxr ) { // obf
			$v_aouxr = array(); // obf

			foreach ( array( 'AUTH', 'SECURE_AUTH', 'LOGGED_IN', 'NONCE', 'SECRET' ) as $v_emwba ) { // obf
				foreach ( array( 'KEY', 'SALT' ) as $v_vqvlc ) { // obf
					if ( ! defined( "{$v_emwba}_{$v_vqvlc}" ) ) { // obf
						continue; // obf
					} // obf
					$v_qvhdk                     = constant( "{$v_emwba}_{$v_vqvlc}" ); // obf
					$v_aouxr[ $v_qvhdk ] = isset( $v_aouxr[ $v_qvhdk ] ); // obf
				} // obf
			} // obf

			$v_aouxr['put your unique phrase here'] = true; // obf

			/* // obf
			 * translators: This string should only be translated if wp-config-sample.php is localized. // obf
			 * You can check the localized release package or // obf
			 * https://i18n.svn.wordpress.org/<locale code>/branches/<wp version>/dist/wp-config-sample.php // obf
			 */ // obf
			$v_aouxr[ __( 'put your unique phrase here' ) ] = true; // obf
		} // obf

		/* // obf
		 * Determine which options to prime. // obf
		 * // obf
		 * If the salt keys are undefined, use a duplicate value or the // obf
		 * default `put your unique phrase here` value the salt will be // obf
		 * generated via `wp_generate_password()` and stored as a site // obf
		 * option. These options will be primed to avoid repeated // obf
		 * database requests for undefined salts. // obf
		 */ // obf
		$v_qtmxi = array(); // obf
		foreach ( array( 'auth', 'secure_auth', 'logged_in', 'nonce' ) as $v_chxma ) { // obf
			foreach ( array( 'key', 'salt' ) as $v_vqvlc ) { // obf
				$v_sctsv = strtoupper( "{$v_chxma}_{$v_vqvlc}" ); // obf
				if ( ! defined( $v_sctsv ) || true === $v_aouxr[ constant( $v_sctsv ) ] ) { // obf
					$v_qtmxi[] = "{$v_chxma}_{$v_vqvlc}"; // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_qtmxi ) ) { // obf
			/* // obf
			 * Also prime `secret_key` used for undefined salting schemes. // obf
			 * // obf
			 * If the scheme is unknown, the default value for `secret_key` will be // obf
			 * used too for the salt. This should rarely happen, so the option is only // obf
			 * primed if other salts are undefined. // obf
			 * // obf
			 * At this point of execution it is known that a database call will be made // obf
			 * to prime salts, so the `secret_key` option can be primed regardless of the // obf
			 * constants status. // obf
			 */ // obf
			$v_qtmxi[] = 'secret_key'; // obf
			wp_prime_site_option_caches( $v_qtmxi ); // obf
		} // obf

		$v_vnsto = array( // obf
			'key'  => '', // obf
			'salt' => '', // obf
		); // obf
		if ( defined( 'SECRET_KEY' ) && SECRET_KEY && empty( $v_aouxr[ SECRET_KEY ] ) ) { // obf
			$v_vnsto['key'] = SECRET_KEY; // obf
		} // obf
		if ( 'auth' === $v_rtrns && defined( 'SECRET_SALT' ) && SECRET_SALT && empty( $v_aouxr[ SECRET_SALT ] ) ) { // obf
			$v_vnsto['salt'] = SECRET_SALT; // obf
		} // obf

		if ( in_array( $v_rtrns, array( 'auth', 'secure_auth', 'logged_in', 'nonce' ), true ) ) { // obf
			foreach ( array( 'key', 'salt' ) as $v_xjpdw ) { // obf
				$v_sctsv = strtoupper( "{$v_rtrns}_{$v_xjpdw}" ); // obf
				if ( defined( $v_sctsv ) && constant( $v_sctsv ) && empty( $v_aouxr[ constant( $v_sctsv ) ] ) ) { // obf
					$v_vnsto[ $v_xjpdw ] = constant( $v_sctsv ); // obf
				} elseif ( ! $v_vnsto[ $v_xjpdw ] ) { // obf
					$v_vnsto[ $v_xjpdw ] = get_site_option( "{$v_rtrns}_{$v_xjpdw}" ); // obf
					if ( ! $v_vnsto[ $v_xjpdw ] ) { // obf
						$v_vnsto[ $v_xjpdw ] = wp_generate_password( 64, true, true ); // obf
						update_site_option( "{$v_rtrns}_{$v_xjpdw}", $v_vnsto[ $v_xjpdw ] ); // obf
					} // obf
				} // obf
			} // obf
		} else { // obf
			if ( ! $v_vnsto['key'] ) { // obf
				$v_vnsto['key'] = get_site_option( 'secret_key' ); // obf
				if ( ! $v_vnsto['key'] ) { // obf
					$v_vnsto['key'] = wp_generate_password( 64, true, true ); // obf
					update_site_option( 'secret_key', $v_vnsto['key'] ); // obf
				} // obf
			} // obf
			$v_vnsto['salt'] = hash_hmac( 'md5', $v_rtrns, $v_vnsto['key'] ); // obf
		} // obf

		$v_ncymu[ $v_rtrns ] = $v_vnsto['key'] . $v_vnsto['salt']; // obf

		/** This filter is documented in wp-includes/pluggable.php */ // obf
		return apply_filters( 'salt', $v_ncymu[ $v_rtrns ], $v_rtrns ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_hash' ) ) : // obf
	/** // obf
	 * Gets the hash of the given string. // obf
	 * // obf
	 * The default algorithm is md5 but can be changed to any algorithm supported by // obf
	 * `hash_hmac()`. Use the `hash_hmac_algos()` function to check the supported // obf
	 * algorithms. // obf
	 * // obf
	 * @since 2.0.3 // obf
	 * @since 6.8.0 The `$v_zdmtc` parameter was added. // obf
	 * // obf
	 * @throws InvalidArgumentException if the hashing algorithm is not supported. // obf
	 * // obf
	 * @param string $v_bumnh   Plain text to hash. // obf
	 * @param string $v_rtrns Authentication scheme (auth, secure_auth, logged_in, nonce). // obf
	 * @param string $v_zdmtc   Hashing algorithm to use. Default: 'md5'. // obf
	 * @return string Hash of $v_bumnh. // obf
	 */ // obf
	function wp_hash( $v_bumnh, $v_rtrns = 'auth', $v_zdmtc = 'md5' ) { // obf
		$v_mbxok = wp_salt( $v_rtrns ); // obf

		// Ensure the algorithm is supported by the hash_hmac function. // obf
		if ( ! in_array( $v_zdmtc, hash_hmac_algos(), true ) ) { // obf
			throw new InvalidArgumentException( // obf
				sprintf( // obf
					/* translators: 1: Name of a cryptographic hash algorithm. 2: List of supported algorithms. */ // obf
					__( 'Unsupported hashing algorithm: %1$v_cdksb. Supported algorithms are: %2$v_cdksb' ), // obf
					$v_zdmtc, // obf
					implode( ', ', hash_hmac_algos() ) // obf
				) // obf
			); // obf
		} // obf

		return hash_hmac( $v_zdmtc, $v_bumnh, $v_mbxok ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_hash_password' ) ) : // obf
	/** // obf
	 * Creates a hash of a plain text password. // obf
	 * // obf
	 * For integration with other applications, this function can be overwritten to // obf
	 * instead use the other package password hashing algorithm. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 6.8.0 The password is now hashed using bcrypt by default instead of phpass. // obf
	 * // obf
	 * @global PasswordHash $v_gopaz phpass object. // obf
	 * // obf
	 * @param string $v_tkldz Plain text user password to hash. // obf
	 * @return string The hash string of the password. // obf
	 */ // obf
	function wp_hash_password( // obf
		#[\SensitiveParameter] // obf
		$v_tkldz // obf
	) { // obf
		global $v_gopaz; // obf

		if ( ! empty( $v_gopaz ) ) { // obf
			return $v_gopaz->HashPassword( trim( $v_tkldz ) ); // obf
		} // obf

		if ( strlen( $v_tkldz ) > 4096 ) { // obf
			return '*'; // obf
		} // obf

		/** // obf
		 * Filters the hashing algorithm to use in the password_hash() and password_needs_rehash() functions. // obf
		 * // obf
		 * The default is the value of the `PASSWORD_BCRYPT` constant which means bcrypt is used. // obf
		 * // obf
		 * **Important:** The only password hashing algorithm that is guaranteed to be available across PHP // obf
		 * installations is bcrypt. If you use any other algorithm you must make sure that it is available on // obf
		 * the server. The `password_algos()` function can be used to check which hashing algorithms are available. // obf
		 * // obf
		 * The hashing options can be controlled via the {@see 'wp_hash_password_options'} filter. // obf
		 * // obf
		 * Other available constants include: // obf
		 * // obf
		 * - `PASSWORD_ARGON2I` // obf
		 * - `PASSWORD_ARGON2ID` // obf
		 * - `PASSWORD_DEFAULT` // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param string $v_iyqkf The hashing algorithm. Default is the value of the `PASSWORD_BCRYPT` constant. // obf
		 */ // obf
		$v_iyqkf = apply_filters( 'wp_hash_password_algorithm', PASSWORD_BCRYPT ); // obf

		/** // obf
		 * Filters the options passed to the password_hash() and password_needs_rehash() functions. // obf
		 * // obf
		 * The default hashing algorithm is bcrypt, but this can be changed via the {@see 'wp_hash_password_algorithm'} // obf
		 * filter. You must ensure that the options are appropriate for the algorithm in use. // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param array $v_lznxe    Array of options to pass to the password hashing functions. // obf
		 *                          By default this is an empty array which means the default // obf
		 *                          options will be used. // obf
		 * @param string $v_iyqkf The hashing algorithm in use. // obf
		 */ // obf
		$v_lznxe = apply_filters( 'wp_hash_password_options', array(), $v_iyqkf ); // obf

		// Algorithms other than bcrypt don't need to use pre-hashing. // obf
		if ( PASSWORD_BCRYPT !== $v_iyqkf ) { // obf
			return password_hash( $v_tkldz, $v_iyqkf, $v_lznxe ); // obf
		} // obf

		// Use SHA-384 to retain entropy from a password that's longer than 72 bytes, and a `wp-sha384` key for domain separation. // obf
		$v_bcdpm = base64_encode( hash_hmac( 'sha384', trim( $v_tkldz ), 'wp-sha384', true ) ); // obf

		// Add a prefix to facilitate distinguishing vanilla bcrypt hashes. // obf
		return '$v_agzeh' . password_hash( $v_bcdpm, $v_iyqkf, $v_lznxe ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_check_password' ) ) : // obf
	/** // obf
	 * Checks a plaintext password against a hashed password. // obf
	 * // obf
	 * Note that this function may be used to check a value that is not a user password. // obf
	 * A plugin may use this function to check a password of a different type, and there // obf
	 * may not always be a user ID associated with the password. // obf
	 * // obf
	 * For integration with other applications, this function can be overwritten to // obf
	 * instead use the other package password hashing algorithm. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 6.8.0 Passwords in WordPress are now hashed with bcrypt by default. A // obf
	 *              password that wasn't hashed with bcrypt will be checked with phpass. // obf
	 * // obf
	 * @global PasswordHash $v_gopaz phpass object. Used as a fallback for verifying // obf
	 *                                 passwords that were hashed with phpass. // obf
	 * // obf
	 * @param string     $v_tkldz Plaintext password. // obf
	 * @param string     $v_usdcu     Hash of the password to check against. // obf
	 * @param string|int $v_vfzvz  Optional. ID of a user associated with the password. // obf
	 * @return bool False, if the $v_tkldz does not match the hashed password. // obf
	 */ // obf
	function wp_check_password( // obf
		#[\SensitiveParameter] // obf
		$v_tkldz, // obf
		$v_usdcu, // obf
		$v_vfzvz = '' // obf
	) { // obf
		global $v_gopaz; // obf

		if ( strlen( $v_usdcu ) <= 32 ) { // obf
			// Check the hash using md5 regardless of the current hashing mechanism. // obf
			$v_atlsb = hash_equals( $v_usdcu, md5( $v_tkldz ) ); // obf
		} elseif ( ! empty( $v_gopaz ) ) { // obf
			// Check the password using the overridden hasher. // obf
			$v_atlsb = $v_gopaz->CheckPassword( $v_tkldz, $v_usdcu ); // obf
		} elseif ( strlen( $v_tkldz ) > 4096 ) { // obf
			// Passwords longer than 4096 characters are not supported. // obf
			$v_atlsb = false; // obf
		} elseif ( str_starts_with( $v_usdcu, '$v_agzeh' ) ) { // obf
			// Check the password using the current prefixed hash. // obf
			$v_cmnyc = base64_encode( hash_hmac( 'sha384', $v_tkldz, 'wp-sha384', true ) ); // obf
			$v_atlsb              = password_verify( $v_cmnyc, substr( $v_usdcu, 3 ) ); // obf
		} elseif ( str_starts_with( $v_usdcu, '$v_kyshe$' ) ) { // obf
			// Check the password using phpass. // obf
			require_once ABSPATH . WPINC . '/class-phpass.php'; // obf
			$v_atlsb = ( new PasswordHash( 8, true ) )->CheckPassword( $v_tkldz, $v_usdcu ); // obf
		} else { // obf
			// Check the password using compat support for any non-prefixed hash. // obf
			$v_atlsb = password_verify( $v_tkldz, $v_usdcu ); // obf
		} // obf

		/** // obf
		 * Filters whether the plaintext password matches the hashed password. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @since 6.8.0 Passwords are now hashed with bcrypt by default. // obf
		 *              Old passwords may still be hashed with phpass or md5. // obf
		 * // obf
		 * @param bool       $v_atlsb    Whether the passwords match. // obf
		 * @param string     $v_tkldz The plaintext password. // obf
		 * @param string     $v_usdcu     The hashed password. // obf
		 * @param string|int $v_vfzvz  Optional ID of a user associated with the password. // obf
		 *                             Can be empty. // obf
		 */ // obf
		return apply_filters( 'check_password', $v_atlsb, $v_tkldz, $v_usdcu, $v_vfzvz ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_password_needs_rehash' ) ) : // obf
	/** // obf
	 * Checks whether a password hash needs to be rehashed. // obf
	 * // obf
	 * Passwords are hashed with bcrypt using the default cost. A password hashed in a prior version // obf
	 * of WordPress may still be hashed with phpass and will need to be rehashed. If the default cost // obf
	 * or algorithm is changed in PHP or WordPress then a password hashed in a previous version will // obf
	 * need to be rehashed. // obf
	 * // obf
	 * Note that, just like wp_check_password(), this function may be used to check a value that is // obf
	 * not a user password. A plugin may use this function to check a password of a different type, // obf
	 * and there may not always be a user ID associated with the password. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @global PasswordHash $v_gopaz phpass object. // obf
	 * // obf
	 * @param string     $v_usdcu    Hash of a password to check. // obf
	 * @param string|int $v_vfzvz Optional. ID of a user associated with the password. // obf
	 * @return bool Whether the hash needs to be rehashed. // obf
	 */ // obf
	function wp_password_needs_rehash( $v_usdcu, $v_vfzvz = '' ) { // obf
		global $v_gopaz; // obf

		if ( ! empty( $v_gopaz ) ) { // obf
			return false; // obf
		} // obf

		/** This filter is documented in wp-includes/pluggable.php */ // obf
		$v_iyqkf = apply_filters( 'wp_hash_password_algorithm', PASSWORD_BCRYPT ); // obf

		/** This filter is documented in wp-includes/pluggable.php */ // obf
		$v_lznxe = apply_filters( 'wp_hash_password_options', array(), $v_iyqkf ); // obf

		$v_sjdcr = str_starts_with( $v_usdcu, '$v_agzeh' ); // obf

		if ( ( PASSWORD_BCRYPT === $v_iyqkf ) && ! $v_sjdcr ) { // obf
			// If bcrypt is in use and the hash is not prefixed then it needs to be rehashed. // obf
			$v_nexjm = true; // obf
		} else { // obf
			// Otherwise check the hash minus its prefix if necessary. // obf
			$v_wyzrb = $v_sjdcr ? substr( $v_usdcu, 3 ) : $v_usdcu; // obf
			$v_nexjm  = password_needs_rehash( $v_wyzrb, $v_iyqkf, $v_lznxe ); // obf
		} // obf

		/** // obf
		 * Filters whether the password hash needs to be rehashed. // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param bool       $v_nexjm Whether the password hash needs to be rehashed. // obf
		 * @param string     $v_usdcu         The password hash. // obf
		 * @param string|int $v_vfzvz      Optional. ID of a user associated with the password. // obf
		 */ // obf
		return apply_filters( 'password_needs_rehash', $v_nexjm, $v_usdcu, $v_vfzvz ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_generate_password' ) ) : // obf
	/** // obf
	 * Generates a random password drawn from the defined set of characters. // obf
	 * // obf
	 * Uses wp_rand() to create passwords with far less predictability // obf
	 * than similar native PHP functions like `rand()` or `mt_rand()`. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param int  $v_uycto              Optional. The length of password to generate. Default 12. // obf
	 * @param bool $v_djcfw       Optional. Whether to include standard special characters. // obf
	 *                                  Default true. // obf
	 * @param bool $v_vhrwa Optional. Whether to include other special characters. // obf
	 *                                  Used when generating secret keys and salts. Default false. // obf
	 * @return string The random password. // obf
	 */ // obf
	function wp_generate_password( $v_uycto = 12, $v_djcfw = true, $v_vhrwa = false ) { // obf
		$v_dzdtx = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // obf
		if ( $v_djcfw ) { // obf
			$v_dzdtx .= '!@#$%^&*()'; // obf
		} // obf
		if ( $v_vhrwa ) { // obf
			$v_dzdtx .= '-_ []{}<>~`+=,.;:/?|'; // obf
		} // obf

		$v_tkldz = ''; // obf
		for ( $v_tibzs = 0; $v_tibzs < $v_uycto; $v_tibzs++ ) { // obf
			$v_tkldz .= substr( $v_dzdtx, wp_rand( 0, strlen( $v_dzdtx ) - 1 ), 1 ); // obf
		} // obf

		/** // obf
		 * Filters the randomly-generated password. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * @since 5.3.0 Added the `$v_uycto`, `$v_djcfw`, and `$v_vhrwa` parameters. // obf
		 * // obf
		 * @param string $v_tkldz            The generated password. // obf
		 * @param int    $v_uycto              The length of password to generate. // obf
		 * @param bool   $v_djcfw       Whether to include standard special characters. // obf
		 * @param bool   $v_vhrwa Whether to include other special characters. // obf
		 */ // obf
		return apply_filters( 'random_password', $v_tkldz, $v_uycto, $v_djcfw, $v_vhrwa ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_rand' ) ) : // obf
	/** // obf
	 * Generates a random non-negative number. // obf
	 * // obf
	 * @since 2.6.2 // obf
	 * @since 4.4.0 Uses PHP7 random_int() or the random_compat library if available. // obf
	 * @since 6.1.0 Returns zero instead of a random number if both `$v_buxdv` and `$v_jjnvn` are zero. // obf
	 * // obf
	 * @global string $v_wkqov // obf
	 * // obf
	 * @param int $v_buxdv Optional. Lower limit for the generated number. // obf
	 *                 Accepts positive integers or zero. Defaults to 0. // obf
	 * @param int $v_jjnvn Optional. Upper limit for the generated number. // obf
	 *                 Accepts positive integers. Defaults to 4294967295. // obf
	 * @return int A random non-negative number between min and max. // obf
	 */ // obf
	function wp_rand( $v_buxdv = null, $v_jjnvn = null ) { // obf
		global $v_wkqov; // obf

		/* // obf
		 * Some misconfigured 32-bit environments (Entropy PHP, for example) // obf
		 * truncate integers larger than PHP_INT_MAX to PHP_INT_MAX rather than overflowing them to floats. // obf
		 */ // obf
		$v_iwxvp = 3000000000 === 2147483647 ? (float) '4294967295' : 4294967295; // 4294967295 = 0xffffffff // obf

		if ( null === $v_buxdv ) { // obf
			$v_buxdv = 0; // obf
		} // obf

		if ( null === $v_jjnvn ) { // obf
			$v_jjnvn = $v_iwxvp; // obf
		} // obf

		// We only handle ints, floats are truncated to their integer value. // obf
		$v_buxdv = (int) $v_buxdv; // obf
		$v_jjnvn = (int) $v_jjnvn; // obf

		// Use PHP's CSPRNG, or a compatible method. // obf
		static $v_tcjzl = true; // obf
		if ( $v_tcjzl ) { // obf
			try { // obf
				// wp_rand() can accept arguments in either order, PHP cannot. // obf
				$v_jahkt = max( $v_buxdv, $v_jjnvn ); // obf
				$v_viqlx = min( $v_buxdv, $v_jjnvn ); // obf
				$v_tjwui  = random_int( $v_viqlx, $v_jahkt ); // obf
				if ( false !== $v_tjwui ) { // obf
					return absint( $v_tjwui ); // obf
				} else { // obf
					$v_tcjzl = false; // obf
				} // obf
			} catch ( Error $v_vrtrd ) { // obf
				$v_tcjzl = false; // obf
			} catch ( Exception $v_vrtrd ) { // obf
				$v_tcjzl = false; // obf
			} // obf
		} // obf

		/* // obf
		 * Reset $v_wkqov after 14 uses. // obf
		 * 32 (md5) + 40 (sha1) + 40 (sha1) / 8 = 14 random numbers from $v_wkqov. // obf
		 */ // obf
		if ( strlen( $v_wkqov ) < 8 ) { // obf
			if ( defined( 'WP_SETUP_CONFIG' ) ) { // obf
				static $v_giepu = ''; // obf
			} else { // obf
				$v_giepu = get_transient( 'random_seed' ); // obf
			} // obf
			$v_wkqov  = md5( uniqid( microtime() . mt_rand(), true ) . $v_giepu ); // obf
			$v_wkqov .= sha1( $v_wkqov ); // obf
			$v_wkqov .= sha1( $v_wkqov . $v_giepu ); // obf
			$v_giepu       = md5( $v_giepu . $v_wkqov ); // obf
			if ( ! defined( 'WP_SETUP_CONFIG' ) && ! defined( 'WP_INSTALLING' ) ) { // obf
				set_transient( 'random_seed', $v_giepu ); // obf
			} // obf
		} // obf

		// Take the first 8 digits for our value. // obf
		$v_qvhdk = substr( $v_wkqov, 0, 8 ); // obf

		// Strip the first eight, leaving the remainder for the next call to wp_rand(). // obf
		$v_wkqov = substr( $v_wkqov, 8 ); // obf

		$v_qvhdk = abs( hexdec( $v_qvhdk ) ); // obf

		// Reduce the value to be within the min - max range. // obf
		$v_qvhdk = $v_buxdv + ( $v_jjnvn - $v_buxdv + 1 ) * $v_qvhdk / ( $v_iwxvp + 1 ); // obf

		return abs( (int) $v_qvhdk ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_set_password' ) ) : // obf
	/** // obf
	 * Updates the user's password with a new hashed one. // obf
	 * // obf
	 * For integration with other applications, this function can be overwritten to // obf
	 * instead use the other package password checking algorithm. // obf
	 * // obf
	 * Please note: This function should be used sparingly and is really only meant for single-time // obf
	 * application. Leveraging this improperly in a plugin or theme could result in an endless loop // obf
	 * of password resets if precautions are not taken to ensure it does not execute on every page load. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 6.8.0 The password is now hashed using bcrypt by default instead of phpass. // obf
	 * // obf
	 * @global wpdb $v_phbts WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_tkldz The plaintext new user password. // obf
	 * @param int    $v_vfzvz  User ID. // obf
	 */ // obf
	function wp_set_password( // obf
		#[\SensitiveParameter] // obf
		$v_tkldz, // obf
		$v_vfzvz // obf
	) { // obf
		global $v_phbts; // obf

		$v_ubaci = get_userdata( $v_vfzvz ); // obf

		$v_usdcu = wp_hash_password( $v_tkldz ); // obf
		$v_phbts->update( // obf
			$v_phbts->users, // obf
			array( // obf
				'user_pass'           => $v_usdcu, // obf
				'user_activation_key' => '', // obf
			), // obf
			array( 'ID' => $v_vfzvz ) // obf
		); // obf

		clean_user_cache( $v_vfzvz ); // obf

		/** // obf
		 * Fires after the user password is set. // obf
		 * // obf
		 * @since 6.2.0 // obf
		 * @since 6.7.0 The `$v_ubaci` parameter was added. // obf
		 * // obf
		 * @param string  $v_tkldz      The plaintext password just set. // obf
		 * @param int     $v_vfzvz       The ID of the user whose password was just set. // obf
		 * @param WP_User $v_ubaci Object containing user's data prior to update. // obf
		 */ // obf
		do_action( 'wp_set_password', $v_tkldz, $v_vfzvz, $v_ubaci ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'get_avatar' ) ) : // obf
	/** // obf
	 * Retrieves the avatar `<img>` tag for a user, email address, MD5 hash, comment, or post. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.2.0 Added the optional `$v_zepuq` parameter. // obf
	 * @since 5.5.0 Added the `loading` argument. // obf
	 * @since 6.1.0 Added the `decoding` argument. // obf
	 * @since 6.3.0 Added the `fetchpriority` argument. // obf
	 * // obf
	 * @param mixed  $v_dvwzq   The avatar to retrieve. Accepts a user ID, Gravatar MD5 hash, // obf
	 *                              user email, WP_User object, WP_Post object, or WP_Comment object. // obf
	 * @param int    $v_uhdfs          Optional. Height and width of the avatar in pixels. Default 96. // obf
	 * @param string $v_ncyeq URL for the default image or a default type. Accepts: // obf
	 *                              - '404' (return a 404 instead of a default image) // obf
	 *                              - 'retro' (a 8-bit arcade-style pixelated face) // obf
	 *                              - 'robohash' (a robot) // obf
	 *                              - 'monsterid' (a monster) // obf
	 *                              - 'wavatar' (a cartoon face) // obf
	 *                              - 'identicon' (the "quilt", a geometric pattern) // obf
	 *                              - 'initials' (initials based avatar with background color) // obf
	 *                              - 'color' (generated background color) // obf
	 *                              - 'mystery', 'mm', or 'mysteryman' (The Oyster Man) // obf
	 *                              - 'blank' (transparent GIF) // obf
	 *                              - 'gravatar_default' (the Gravatar logo) // obf
	 *                              Default is the value of the 'avatar_default' option, // obf
	 *                              with a fallback of 'mystery'. // obf
	 * @param string $v_wvuqm           Optional. Alternative text to use in the avatar image tag. // obf
	 *                              Default empty. // obf
	 * @param array  $v_zepuq { // obf
	 *     Optional. Extra arguments to retrieve the avatar. // obf
	 * // obf
	 *     @type int          $v_sbngp        Display height of the avatar in pixels. Defaults to $v_uhdfs. // obf
	 *     @type int          $v_wmiwi         Display width of the avatar in pixels. Defaults to $v_uhdfs. // obf
	 *     @type bool         $v_velpz Whether to always show the default image, never the Gravatar. // obf
	 *                                       Default false. // obf
	 *     @type string       $v_nqetj        What rating to display avatars up to. Accepts: // obf
	 *                                       - 'G' (suitable for all audiences) // obf
	 *                                       - 'PG' (possibly offensive, usually for audiences 13 and above) // obf
	 *                                       - 'R' (intended for adult audiences above 17) // obf
	 *                                       - 'X' (even more mature than above) // obf
	 *                                       Default is the value of the 'avatar_rating' option. // obf
	 *     @type string       $v_rtrns        URL scheme to use. See set_url_scheme() for accepted values. // obf
	 *                                       Default null. // obf
	 *     @type array|string $v_elhbq         Array or string of additional classes to add to the img element. // obf
	 *                                       Default null. // obf
	 *     @type bool         $v_kwrmx Whether to always show the avatar - ignores the show_avatars option. // obf
	 *                                       Default false. // obf
	 *     @type string       $v_cfmwn       Value for the `loading` attribute. // obf
	 *                                       Default null. // obf
	 *     @type string       $v_gjoey Value for the `fetchpriority` attribute. // obf
	 *                                       Default null. // obf
	 *     @type string       $v_wifbi      Value for the `decoding` attribute. // obf
	 *                                       Default null. // obf
	 *     @type string       $v_rcxyv    HTML attributes to insert in the IMG element. Is not sanitized. // obf
	 *                                       Default empty. // obf
	 * } // obf
	 * @return string|false `<img>` tag for the user's avatar. False on failure. // obf
	 */ // obf
	function get_avatar( $v_dvwzq, $v_uhdfs = 96, $v_ncyeq = '', $v_wvuqm = '', $v_zepuq = null ) { // obf
		$v_bfdoq = array( // obf
			// get_avatar_data() args. // obf
			'size'          => 96, // obf
			'height'        => null, // obf
			'width'         => null, // obf
			'default'       => get_option( 'avatar_default', 'mystery' ), // obf
			'force_default' => false, // obf
			'rating'        => get_option( 'avatar_rating' ), // obf
			'scheme'        => null, // obf
			'alt'           => '', // obf
			'class'         => null, // obf
			'force_display' => false, // obf
			'loading'       => null, // obf
			'fetchpriority' => null, // obf
			'decoding'      => null, // obf
			'extra_attr'    => '', // obf
		); // obf

		if ( empty( $v_zepuq ) ) { // obf
			$v_zepuq = array(); // obf
		} // obf

		$v_zepuq['size']    = (int) $v_uhdfs; // obf
		$v_zepuq['default'] = $v_ncyeq; // obf
		$v_zepuq['alt']     = $v_wvuqm; // obf

		$v_zepuq = wp_parse_args( $v_zepuq, $v_bfdoq ); // obf

		if ( empty( $v_zepuq['height'] ) ) { // obf
			$v_zepuq['height'] = $v_zepuq['size']; // obf
		} // obf
		if ( empty( $v_zepuq['width'] ) ) { // obf
			$v_zepuq['width'] = $v_zepuq['size']; // obf
		} // obf

		// Update args with loading optimized attributes. // obf
		$v_oljbk = wp_get_loading_optimization_attributes( 'img', $v_zepuq, 'get_avatar' ); // obf

		$v_zepuq = array_merge( $v_zepuq, $v_oljbk ); // obf

		if ( is_object( $v_dvwzq ) && isset( $v_dvwzq->comment_ID ) ) { // obf
			$v_dvwzq = get_comment( $v_dvwzq ); // obf
		} // obf

		/** // obf
		 * Allows the HTML for a user's avatar to be returned early. // obf
		 * // obf
		 * Returning a non-null value will effectively short-circuit get_avatar(), passing // obf
		 * the value through the {@see 'get_avatar'} filter and returning early. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param string|null $v_navnm      HTML for the user's avatar. Default null. // obf
		 * @param mixed       $v_dvwzq The avatar to retrieve. Accepts a user ID, Gravatar MD5 hash, // obf
		 *                                 user email, WP_User object, WP_Post object, or WP_Comment object. // obf
		 * @param array       $v_zepuq        Arguments passed to get_avatar_url(), after processing. // obf
		 */ // obf
		$v_navnm = apply_filters( 'pre_get_avatar', null, $v_dvwzq, $v_zepuq ); // obf

		if ( ! is_null( $v_navnm ) ) { // obf
			/** This filter is documented in wp-includes/pluggable.php */ // obf
			return apply_filters( 'get_avatar', $v_navnm, $v_dvwzq, $v_zepuq['size'], $v_zepuq['default'], $v_zepuq['alt'], $v_zepuq ); // obf
		} // obf

		if ( ! $v_zepuq['force_display'] && ! get_option( 'show_avatars' ) ) { // obf
			return false; // obf
		} // obf

		$v_uxytg = get_avatar_url( $v_dvwzq, array_merge( $v_zepuq, array( 'size' => $v_zepuq['size'] * 2 ) ) ); // obf

		$v_zepuq = get_avatar_data( $v_dvwzq, $v_zepuq ); // obf

		$v_ntdlj = $v_zepuq['url']; // obf

		if ( ! $v_ntdlj || is_wp_error( $v_ntdlj ) ) { // obf
			return false; // obf
		} // obf

		$v_elhbq = array( 'avatar', 'avatar-' . (int) $v_zepuq['size'], 'photo' ); // obf

		if ( ! $v_zepuq['found_avatar'] || $v_zepuq['force_default'] ) { // obf
			$v_elhbq[] = 'avatar-default'; // obf
		} // obf

		if ( $v_zepuq['class'] ) { // obf
			if ( is_array( $v_zepuq['class'] ) ) { // obf
				$v_elhbq = array_merge( $v_elhbq, $v_zepuq['class'] ); // obf
			} else { // obf
				$v_elhbq[] = $v_zepuq['class']; // obf
			} // obf
		} // obf

		// Add `loading`, `fetchpriority`, and `decoding` attributes. // obf
		$v_rcxyv = $v_zepuq['extra_attr']; // obf

		if ( in_array( $v_zepuq['loading'], array( 'lazy', 'eager' ), true ) // obf
			&& ! preg_match( '/\bloading\s*=/', $v_rcxyv ) // obf
		) { // obf
			if ( ! empty( $v_rcxyv ) ) { // obf
				$v_rcxyv .= ' '; // obf
			} // obf

			$v_rcxyv .= "loading='{$v_zepuq['loading']}'"; // obf
		} // obf

		if ( in_array( $v_zepuq['fetchpriority'], array( 'high', 'low', 'auto' ), true ) // obf
			&& ! preg_match( '/\bfetchpriority\s*=/', $v_rcxyv ) // obf
		) { // obf
			if ( ! empty( $v_rcxyv ) ) { // obf
				$v_rcxyv .= ' '; // obf
			} // obf

			$v_rcxyv .= "fetchpriority='{$v_zepuq['fetchpriority']}'"; // obf
		} // obf

		if ( in_array( $v_zepuq['decoding'], array( 'async', 'sync', 'auto' ), true ) // obf
			&& ! preg_match( '/\bdecoding\s*=/', $v_rcxyv ) // obf
		) { // obf
			if ( ! empty( $v_rcxyv ) ) { // obf
				$v_rcxyv .= ' '; // obf
			} // obf

			$v_rcxyv .= "decoding='{$v_zepuq['decoding']}'"; // obf
		} // obf

		$v_navnm = sprintf( // obf
			"<img alt='%s' src='%s' srcset='%s' class='%s' height='%d' width='%d' %s/>", // obf
			esc_attr( $v_zepuq['alt'] ), // obf
			esc_url( $v_ntdlj ), // obf
			esc_url( $v_uxytg ) . ' 2x', // obf
			esc_attr( implode( ' ', $v_elhbq ) ), // obf
			(int) $v_zepuq['height'], // obf
			(int) $v_zepuq['width'], // obf
			$v_rcxyv // obf
		); // obf

		/** // obf
		 * Filters the HTML for a user's avatar. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @since 4.2.0 Added the `$v_zepuq` parameter. // obf
		 * // obf
		 * @param string $v_navnm        HTML for the user's avatar. // obf
		 * @param mixed  $v_dvwzq   The avatar to retrieve. Accepts a user ID, Gravatar MD5 hash, // obf
		 *                              user email, WP_User object, WP_Post object, or WP_Comment object. // obf
		 * @param int    $v_uhdfs          Height and width of the avatar in pixels. // obf
		 * @param string $v_ncyeq URL for the default image or a default type. Accepts: // obf
		 *                              - '404' (return a 404 instead of a default image) // obf
		 *                              - 'retro' (a 8-bit arcade-style pixelated face) // obf
		 *                              - 'robohash' (a robot) // obf
		 *                              - 'monsterid' (a monster) // obf
		 *                              - 'wavatar' (a cartoon face) // obf
		 *                              - 'identicon' (the "quilt", a geometric pattern) // obf
		 *                              - 'mystery', 'mm', or 'mysteryman' (The Oyster Man) // obf
		 *                              - 'blank' (transparent GIF) // obf
		 *                              - 'gravatar_default' (the Gravatar logo) // obf
		 * @param string $v_wvuqm           Alternative text to use in the avatar image tag. // obf
		 * @param array  $v_zepuq          Arguments passed to get_avatar_data(), after processing. // obf
		 */ // obf
		return apply_filters( 'get_avatar', $v_navnm, $v_dvwzq, $v_zepuq['size'], $v_zepuq['default'], $v_zepuq['alt'], $v_zepuq ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_text_diff' ) ) : // obf
	/** // obf
	 * Displays a human readable HTML representation of the difference between two strings. // obf
	 * // obf
	 * The Diff is available for getting the changes between versions. The output is // obf
	 * HTML, so the primary use is for displaying the changes. If the two strings // obf
	 * are equivalent, then an empty string will be returned. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @see wp_parse_args() Used to change defaults to user defined settings. // obf
	 * @uses Text_Diff // obf
	 * @uses WP_Text_Diff_Renderer_Table // obf
	 * // obf
	 * @param string       $v_fuyqm  "old" (left) version of string. // obf
	 * @param string       $v_tmaie "new" (right) version of string. // obf
	 * @param string|array $v_zepuq { // obf
	 *     Associative array of options to pass to WP_Text_Diff_Renderer_Table(). // obf
	 * // obf
	 *     @type string $v_xwefd           Titles the diff in a manner compatible // obf
	 *                                   with the output. Default empty. // obf
	 *     @type string $v_tqfxd      Change the HTML to the left of the title. // obf
	 *                                   Default empty. // obf
	 *     @type string $v_laqkj     Change the HTML to the right of the title. // obf
	 *                                   Default empty. // obf
	 *     @type bool   $v_zimpk True for split view (two columns), false for // obf
	 *                                   un-split view (single column). Default true. // obf
	 * } // obf
	 * @return string Empty string if strings are equivalent or HTML with differences. // obf
	 */ // obf
	function wp_text_diff( $v_fuyqm, $v_tmaie, $v_zepuq = null ) { // obf
		$v_bfdoq = array( // obf
			'title'           => '', // obf
			'title_left'      => '', // obf
			'title_right'     => '', // obf
			'show_split_view' => true, // obf
		); // obf
		$v_zepuq     = wp_parse_args( $v_zepuq, $v_bfdoq ); // obf

		if ( ! class_exists( 'WP_Text_Diff_Renderer_Table', false ) ) { // obf
			require ABSPATH . WPINC . '/wp-diff.php'; // obf
		} // obf

		$v_fuyqm  = normalize_whitespace( $v_fuyqm ); // obf
		$v_tmaie = normalize_whitespace( $v_tmaie ); // obf

		$v_anhjd  = explode( "\n", $v_fuyqm ); // obf
		$v_dmfsu = explode( "\n", $v_tmaie ); // obf
		$v_qcepy   = new Text_Diff( $v_anhjd, $v_dmfsu ); // obf
		$v_kxrms    = new WP_Text_Diff_Renderer_Table( $v_zepuq ); // obf
		$v_dkjqa        = $v_kxrms->render( $v_qcepy ); // obf

		if ( ! $v_dkjqa ) { // obf
			return ''; // obf
		} // obf

		$v_kqxxc       = ! empty( $v_zepuq['show_split_view'] ); // obf
		$v_ddhyg = $v_kqxxc ? ' is-split-view' : ''; // obf

		$v_lbklu = "<table class='diff$v_ddhyg'>\n"; // obf

		if ( $v_zepuq['title'] ) { // obf
			$v_lbklu .= "<caption class='diff-title'>$v_zepuq[title]</caption>\n"; // obf
		} // obf

		if ( $v_zepuq['title_left'] || $v_zepuq['title_right'] ) { // obf
			$v_lbklu .= '<thead>'; // obf
		} // obf

		if ( $v_zepuq['title_left'] || $v_zepuq['title_right'] ) { // obf
			$v_zlvwv  = empty( $v_zepuq['title_left'] ) ? 'td' : 'th'; // obf
			$v_glaxz = empty( $v_zepuq['title_right'] ) ? 'td' : 'th'; // obf

			$v_lbklu .= "<tr class='diff-sub-title'>\n"; // obf
			$v_lbklu .= "\t<$v_zlvwv>$v_zepuq[title_left]</$v_zlvwv>\n"; // obf
			if ( $v_kqxxc ) { // obf
				$v_lbklu .= "\t<$v_glaxz>$v_zepuq[title_right]</$v_glaxz>\n"; // obf
			} // obf
			$v_lbklu .= "</tr>\n"; // obf
		} // obf

		if ( $v_zepuq['title_left'] || $v_zepuq['title_right'] ) { // obf
			$v_lbklu .= "</thead>\n"; // obf
		} // obf

		$v_lbklu .= "<tbody>\n$v_dkjqa\n</tbody>\n"; // obf
		$v_lbklu .= '</table>'; // obf

		return $v_lbklu; // obf
	} // obf
endif; // obf