

<?php // obf
/** // obf
 * WordPress Administration Privacy Tools API. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Resend an existing request and return the result. // obf
 * // obf
 * @since 4.9.6 // obf
 * @access private // obf
 * // obf
 * @param int $v_wswje Request ID. // obf
 * @return true|WP_Error Returns true if sending the email was successful, or a WP_Error object. // obf
 */ // obf
function _wp_privacy_resend_request( $v_wswje ) { // obf
	$v_wswje = absint( $v_wswje ); // obf
	$v_hrmyp    = get_post( $v_wswje ); // obf

	if ( ! $v_hrmyp || 'user_request' !== $v_hrmyp->post_type ) { // obf
		return new WP_Error( 'privacy_request_error', __( 'Invalid personal data request.' ) ); // obf
	} // obf

	$v_agoid = wp_send_user_request( $v_wswje ); // obf

	if ( is_wp_error( $v_agoid ) ) { // obf
		return $v_agoid; // obf
	} elseif ( ! $v_agoid ) { // obf
		return new WP_Error( 'privacy_request_error', __( 'Unable to initiate confirmation for personal data request.' ) ); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Marks a request as completed by the admin and logs the current timestamp. // obf
 * // obf
 * @since 4.9.6 // obf
 * @access private // obf
 * // obf
 * @param int $v_wswje Request ID. // obf
 * @return int|WP_Error Request ID on success, or a WP_Error on failure. // obf
 */ // obf
function _wp_privacy_completed_request( $v_wswje ) { // obf
	// Get the request. // obf
	$v_wswje = absint( $v_wswje ); // obf
	$v_hrmyp    = wp_get_user_request( $v_wswje ); // obf

	if ( ! $v_hrmyp ) { // obf
		return new WP_Error( 'privacy_request_error', __( 'Invalid personal data request.' ) ); // obf
	} // obf

	update_post_meta( $v_wswje, '_wp_user_request_completed_timestamp', time() ); // obf

	$v_agoid = wp_update_post( // obf
		array( // obf
			'ID'          => $v_wswje, // obf
			'post_status' => 'request-completed', // obf
		) // obf
	); // obf

	return $v_agoid; // obf
} // obf

/** // obf
 * Handle list table actions. // obf
 * // obf
 * @since 4.9.6 // obf
 * @access private // obf
 */ // obf
function _wp_personal_data_handle_actions() { // obf
	if ( isset( $v_jlfow['privacy_action_email_retry'] ) ) { // obf
		check_admin_referer( 'bulk-privacy_requests' ); // obf

		$v_wswje = absint( current( array_keys( (array) wp_unslash( $v_jlfow['privacy_action_email_retry'] ) ) ) ); // obf
		$v_agoid     = _wp_privacy_resend_request( $v_wswje ); // obf

		if ( is_wp_error( $v_agoid ) ) { // obf
			add_settings_error( // obf
				'privacy_action_email_retry', // obf
				'privacy_action_email_retry', // obf
				$v_agoid->get_error_message(), // obf
				'error' // obf
			); // obf
		} else { // obf
			add_settings_error( // obf
				'privacy_action_email_retry', // obf
				'privacy_action_email_retry', // obf
				__( 'Confirmation request sent again successfully.' ), // obf
				'success' // obf
			); // obf
		} // obf
	} elseif ( isset( $v_jlfow['action'] ) ) { // obf
		$v_ebycm = ! empty( $v_jlfow['action'] ) ? sanitize_key( wp_unslash( $v_jlfow['action'] ) ) : ''; // obf

		switch ( $v_ebycm ) { // obf
			case 'add_export_personal_data_request': // obf
			case 'add_remove_personal_data_request': // obf
				check_admin_referer( 'personal-data-request' ); // obf

				if ( ! isset( $v_jlfow['type_of_action'], $v_jlfow['username_or_email_for_privacy_request'] ) ) { // obf
					add_settings_error( // obf
						'action_type', // obf
						'action_type', // obf
						__( 'Invalid personal data action.' ), // obf
						'error' // obf
					); // obf
				} // obf
				$v_dpviq               = sanitize_text_field( wp_unslash( $v_jlfow['type_of_action'] ) ); // obf
				$v_xyidg = sanitize_text_field( wp_unslash( $v_jlfow['username_or_email_for_privacy_request'] ) ); // obf
				$v_anjxx             = ''; // obf
				$v_dundq                    = 'pending'; // obf

				if ( ! isset( $v_jlfow['send_confirmation_email'] ) ) { // obf
					$v_dundq = 'confirmed'; // obf
				} // obf

				if ( ! in_array( $v_dpviq, _wp_privacy_action_request_types(), true ) ) { // obf
					add_settings_error( // obf
						'action_type', // obf
						'action_type', // obf
						__( 'Invalid personal data action.' ), // obf
						'error' // obf
					); // obf
				} // obf

				if ( ! is_email( $v_xyidg ) ) { // obf
					$v_rzqcr = get_user_by( 'login', $v_xyidg ); // obf
					if ( ! $v_rzqcr instanceof WP_User ) { // obf
						add_settings_error( // obf
							'username_or_email_for_privacy_request', // obf
							'username_or_email_for_privacy_request', // obf
							__( 'Unable to add this request. A valid email address or username must be supplied.' ), // obf
							'error' // obf
						); // obf
					} else { // obf
						$v_anjxx = $v_rzqcr->user_email; // obf
					} // obf
				} else { // obf
					$v_anjxx = $v_xyidg; // obf
				} // obf

				if ( empty( $v_anjxx ) ) { // obf
					break; // obf
				} // obf

				$v_wswje = wp_create_user_request( $v_anjxx, $v_dpviq, array(), $v_dundq ); // obf
				$v_rxqif    = ''; // obf

				if ( is_wp_error( $v_wswje ) ) { // obf
					$v_rxqif = $v_wswje->get_error_message(); // obf
				} elseif ( ! $v_wswje ) { // obf
					$v_rxqif = __( 'Unable to initiate confirmation request.' ); // obf
				} // obf

				if ( $v_rxqif ) { // obf
					add_settings_error( // obf
						'username_or_email_for_privacy_request', // obf
						'username_or_email_for_privacy_request', // obf
						$v_rxqif, // obf
						'error' // obf
					); // obf
					break; // obf
				} // obf

				if ( 'pending' === $v_dundq ) { // obf
					wp_send_user_request( $v_wswje ); // obf

					$v_rxqif = __( 'Confirmation request initiated successfully.' ); // obf
				} elseif ( 'confirmed' === $v_dundq ) { // obf
					$v_rxqif = __( 'Request added successfully.' ); // obf
				} // obf

				if ( $v_rxqif ) { // obf
					add_settings_error( // obf
						'username_or_email_for_privacy_request', // obf
						'username_or_email_for_privacy_request', // obf
						$v_rxqif, // obf
						'success' // obf
					); // obf
					break; // obf
				} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Cleans up failed and expired requests before displaying the list table. // obf
 * // obf
 * @since 4.9.6 // obf
 * @access private // obf
 */ // obf
function _wp_personal_data_cleanup_requests() { // obf
	/** This filter is documented in wp-includes/user.php */ // obf
	$v_aorgk = (int) apply_filters( 'user_request_key_expiration', DAY_IN_SECONDS ); // obf

	$v_gmtlf = new WP_Query( // obf
		array( // obf
			'post_type'      => 'user_request', // obf
			'posts_per_page' => -1, // obf
			'post_status'    => 'request-pending', // obf
			'fields'         => 'ids', // obf
			'date_query'     => array( // obf
				array( // obf
					'column' => 'post_modified_gmt', // obf
					'before' => $v_aorgk . ' seconds ago', // obf
				), // obf
			), // obf
		) // obf
	); // obf

	$v_upomm = $v_gmtlf->posts; // obf

	foreach ( $v_upomm as $v_wswje ) { // obf
		wp_update_post( // obf
			array( // obf
				'ID'            => $v_wswje, // obf
				'post_status'   => 'request-failed', // obf
				'post_password' => '', // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Generate a single group for the personal data export report. // obf
 * // obf
 * @since 4.9.6 // obf
 * @since 5.4.0 Added the `$v_haqam` and `$v_hsoyi` parameters. // obf
 * // obf
 * @param array  $v_lqkyp { // obf
 *     The group data to render. // obf
 * // obf
 *     @type string $v_ogkvl  The user-facing heading for the group, e.g. 'Comments'. // obf
 *     @type array  $v_wvzov        { // obf
 *         An array of group items. // obf
 * // obf
 *         @type array  $v_hhebm  { // obf
 *             An array of name-value pairs for the item. // obf
 * // obf
 *             @type string $v_glsqm   The user-facing name of an item name-value pair, e.g. 'IP Address'. // obf
 *             @type string $v_ntihc  The user-facing value of an item data pair, e.g. '50.60.70.0'. // obf
 *         } // obf
 *     } // obf
 * } // obf
 * @param string $v_haqam     The group identifier. // obf
 * @param int    $v_hsoyi The number of all groups // obf
 * @return string The HTML for this group and its items. // obf
 */ // obf
function wp_privacy_generate_personal_data_export_group_html( $v_lqkyp, $v_haqam = '', $v_hsoyi = 1 ) { // obf
	$v_ivyfo = sanitize_title_with_dashes( $v_lqkyp['group_label'] . '-' . $v_haqam ); // obf

	$v_edsqd  = '<h2 id="' . esc_attr( $v_ivyfo ) . '">'; // obf
	$v_edsqd .= esc_html( $v_lqkyp['group_label'] ); // obf

	$v_fsxjr = count( (array) $v_lqkyp['items'] ); // obf
	if ( $v_fsxjr > 1 ) { // obf
		$v_edsqd .= sprintf( ' <span class="count">(%d)</span>', $v_fsxjr ); // obf
	} // obf

	$v_edsqd .= '</h2>'; // obf

	if ( ! empty( $v_lqkyp['group_description'] ) ) { // obf
		$v_edsqd .= '<p>' . esc_html( $v_lqkyp['group_description'] ) . '</p>'; // obf
	} // obf

	$v_edsqd .= '<div>'; // obf

	foreach ( (array) $v_lqkyp['items'] as $v_rqzac => $v_hhebm ) { // obf
		$v_edsqd .= '<table>'; // obf
		$v_edsqd .= '<tbody>'; // obf

		foreach ( (array) $v_hhebm as $v_ozvez ) { // obf
			$v_ntihc = $v_ozvez['value']; // obf
			// If it looks like a link, make it a link. // obf
			if ( ! str_contains( $v_ntihc, ' ' ) && ( str_starts_with( $v_ntihc, 'http://' ) || str_starts_with( $v_ntihc, 'https://' ) ) ) { // obf
				$v_ntihc = '<a href="' . esc_url( $v_ntihc ) . '">' . esc_html( $v_ntihc ) . '</a>'; // obf
			} // obf

			$v_edsqd .= '<tr>'; // obf
			$v_edsqd .= '<th>' . esc_html( $v_ozvez['name'] ) . '</th>'; // obf
			$v_edsqd .= '<td>' . wp_kses( $v_ntihc, 'personal_data_export' ) . '</td>'; // obf
			$v_edsqd .= '</tr>'; // obf
		} // obf

		$v_edsqd .= '</tbody>'; // obf
		$v_edsqd .= '</table>'; // obf
	} // obf

	if ( $v_hsoyi > 1 ) { // obf
		$v_edsqd .= '<div class="return-to-top">'; // obf
		$v_edsqd .= '<a href="#top"><span aria-hidden="true">&uarr; </span> ' . esc_html__( 'Go to top' ) . '</a>'; // obf
		$v_edsqd .= '</div>'; // obf
	} // obf

	$v_edsqd .= '</div>'; // obf

	return $v_edsqd; // obf
} // obf

/** // obf
 * Generate the personal data export file. // obf
 * // obf
 * @since 4.9.6 // obf
 * // obf
 * @param int $v_wswje The export request ID. // obf
 */ // obf
function wp_privacy_generate_personal_data_export_file( $v_wswje ) { // obf
	if ( ! class_exists( 'ZipArchive' ) ) { // obf
		wp_send_json_error( __( 'Unable to generate personal data export file. ZipArchive not available.' ) ); // obf
	} // obf

	// Get the request. // obf
	$v_hrmyp = wp_get_user_request( $v_wswje ); // obf

	if ( ! $v_hrmyp || 'export_personal_data' !== $v_hrmyp->action_name ) { // obf
		wp_send_json_error( __( 'Invalid request ID when generating personal data export file.' ) ); // obf
	} // obf

	$v_anjxx = $v_hrmyp->email; // obf

	if ( ! is_email( $v_anjxx ) ) { // obf
		wp_send_json_error( __( 'Invalid email address when generating personal data export file.' ) ); // obf
	} // obf

	// Create the exports folder if needed. // obf
	$v_orrai = wp_privacy_exports_dir(); // obf
	$v_nlqvv = wp_privacy_exports_url(); // obf

	if ( ! wp_mkdir_p( $v_orrai ) ) { // obf
		wp_send_json_error( __( 'Unable to create personal data export folder.' ) ); // obf
	} // obf

	// Protect export folder from browsing. // obf
	$v_btzeo = $v_orrai . 'index.php'; // obf
	if ( ! file_exists( $v_btzeo ) ) { // obf
		$v_oxcvz = fopen( $v_btzeo, 'w' ); // obf
		if ( false === $v_oxcvz ) { // obf
			wp_send_json_error( __( 'Unable to protect personal data export folder from browsing.' ) ); // obf
		} // obf
		fwrite( $v_oxcvz, "<?php\n// Silence is golden.\n" ); // obf
		fclose( $v_oxcvz ); // obf
	} // obf

	$v_wiadt              = wp_generate_password( 32, false, false ); // obf
	$v_grunk        = 'wp-personal-data-file-' . $v_wiadt; // obf
	$v_zkwno = wp_unique_filename( $v_orrai, $v_grunk . '.html' ); // obf
	$v_djwkg = wp_normalize_path( $v_orrai . $v_zkwno ); // obf
	$v_hsgdk = $v_grunk . '.json'; // obf
	$v_gtkjt = wp_normalize_path( $v_orrai . $v_hsgdk ); // obf

	/* // obf
	 * Gather general data needed. // obf
	 */ // obf

	// Title. // obf
	$v_qhlwb = sprintf( // obf
		/* translators: %s: User's email address. */ // obf
		__( 'Personal Data Export for %s' ), // obf
		$v_anjxx // obf
	); // obf

	// First, build an "About" group on the fly for this report. // obf
	$v_ikqho = array( // obf
		/* translators: Header for the About section in a personal data export. */ // obf
		'group_label'       => _x( 'About', 'personal data group label' ), // obf
		/* translators: Description for the About section in a personal data export. */ // obf
		'group_description' => _x( 'Overview of export report.', 'personal data group description' ), // obf
		'items'             => array( // obf
			'about-1' => array( // obf
				array( // obf
					'name'  => _x( 'Report generated for', 'email address' ), // obf
					'value' => $v_anjxx, // obf
				), // obf
				array( // obf
					'name'  => _x( 'For site', 'website name' ), // obf
					'value' => get_bloginfo( 'name' ), // obf
				), // obf
				array( // obf
					'name'  => _x( 'At URL', 'website URL' ), // obf
					'value' => get_bloginfo( 'url' ), // obf
				), // obf
				array( // obf
					'name'  => _x( 'On', 'date/time' ), // obf
					'value' => current_time( 'mysql' ), // obf
				), // obf
			), // obf
		), // obf
	); // obf

	// And now, all the Groups. // obf
	$v_fqqkk = get_post_meta( $v_wswje, '_export_data_grouped', true ); // obf
	if ( is_array( $v_fqqkk ) ) { // obf
		// Merge in the special "About" group. // obf
		$v_fqqkk       = array_merge( array( 'about' => $v_ikqho ), $v_fqqkk ); // obf
		$v_hsoyi = count( $v_fqqkk ); // obf
	} else { // obf
		if ( false !== $v_fqqkk ) { // obf
			_doing_it_wrong( // obf
				__FUNCTION__, // obf
				/* translators: %s: Post meta key. */ // obf
				sprintf( __( 'The %s post meta must be an array.' ), '<code>_export_data_grouped</code>' ), // obf
				'5.8.0' // obf
			); // obf
		} // obf

		$v_fqqkk       = null; // obf
		$v_hsoyi = 0; // obf
	} // obf

	// Convert the groups to JSON format. // obf
	$v_guksw = wp_json_encode( $v_fqqkk ); // obf

	if ( false === $v_guksw ) { // obf
		$v_qnfzs = sprintf( // obf
			/* translators: %s: Error message. */ // obf
			__( 'Unable to encode the personal data for export. Error: %s' ), // obf
			json_last_error_msg() // obf
		); // obf

		wp_send_json_error( $v_qnfzs ); // obf
	} // obf

	/* // obf
	 * Handle the JSON export. // obf
	 */ // obf
	$v_oxcvz = fopen( $v_gtkjt, 'w' ); // obf

	if ( false === $v_oxcvz ) { // obf
		wp_send_json_error( __( 'Unable to open personal data export file (JSON report) for writing.' ) ); // obf
	} // obf

	fwrite( $v_oxcvz, '{' ); // obf
	fwrite( $v_oxcvz, '"' . $v_qhlwb . '":' ); // obf
	fwrite( $v_oxcvz, $v_guksw ); // obf
	fwrite( $v_oxcvz, '}' ); // obf
	fclose( $v_oxcvz ); // obf

	/* // obf
	 * Handle the HTML export. // obf
	 */ // obf
	$v_oxcvz = fopen( $v_djwkg, 'w' ); // obf

	if ( false === $v_oxcvz ) { // obf
		wp_send_json_error( __( 'Unable to open personal data export (HTML report) for writing.' ) ); // obf
	} // obf

	fwrite( $v_oxcvz, "<!DOCTYPE html>\n" ); // obf
	fwrite( $v_oxcvz, "<html>\n" ); // obf
	fwrite( $v_oxcvz, "<head>\n" ); // obf
	fwrite( $v_oxcvz, "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n" ); // obf
	fwrite( $v_oxcvz, "<style type='text/css'>" ); // obf
	fwrite( $v_oxcvz, 'body { color: black; font-family: Arial, sans-serif; font-size: 11pt; margin: 15px auto; width: 860px; }' ); // obf
	fwrite( $v_oxcvz, 'table { background: #f0f0f0; border: 1px solid #ddd; margin-bottom: 20px; width: 100%; }' ); // obf
	fwrite( $v_oxcvz, 'th { padding: 5px; text-align: left; width: 20%; }' ); // obf
	fwrite( $v_oxcvz, 'td { padding: 5px; }' ); // obf
	fwrite( $v_oxcvz, 'tr:nth-child(odd) { background-color: #fafafa; }' ); // obf
	fwrite( $v_oxcvz, '.return-to-top { text-align: right; }' ); // obf
	fwrite( $v_oxcvz, '</style>' ); // obf
	fwrite( $v_oxcvz, '<title>' ); // obf
	fwrite( $v_oxcvz, esc_html( $v_qhlwb ) ); // obf
	fwrite( $v_oxcvz, '</title>' ); // obf
	fwrite( $v_oxcvz, "</head>\n" ); // obf
	fwrite( $v_oxcvz, "<body>\n" ); // obf
	fwrite( $v_oxcvz, '<h1 id="top">' . esc_html__( 'Personal Data Export' ) . '</h1>' ); // obf

	// Create TOC. // obf
	if ( $v_hsoyi > 1 ) { // obf
		fwrite( $v_oxcvz, '<div id="table_of_contents">' ); // obf
		fwrite( $v_oxcvz, '<h2>' . esc_html__( 'Table of Contents' ) . '</h2>' ); // obf
		fwrite( $v_oxcvz, '<ul>' ); // obf
		foreach ( (array) $v_fqqkk as $v_haqam => $v_lqkyp ) { // obf
			$v_ogkvl       = esc_html( $v_lqkyp['group_label'] ); // obf
			$v_ivyfo     = sanitize_title_with_dashes( $v_lqkyp['group_label'] . '-' . $v_haqam ); // obf
			$v_euaps = count( (array) $v_lqkyp['items'] ); // obf
			if ( $v_euaps > 1 ) { // obf
				$v_ogkvl .= sprintf( ' <span class="count">(%d)</span>', $v_euaps ); // obf
			} // obf
			fwrite( $v_oxcvz, '<li>' ); // obf
			fwrite( $v_oxcvz, '<a href="#' . esc_attr( $v_ivyfo ) . '">' . $v_ogkvl . '</a>' ); // obf
			fwrite( $v_oxcvz, '</li>' ); // obf
		} // obf
		fwrite( $v_oxcvz, '</ul>' ); // obf
		fwrite( $v_oxcvz, '</div>' ); // obf
	} // obf

	// Now, iterate over every group in $v_fqqkk and have the formatter render it in HTML. // obf
	foreach ( (array) $v_fqqkk as $v_haqam => $v_lqkyp ) { // obf
		fwrite( $v_oxcvz, wp_privacy_generate_personal_data_export_group_html( $v_lqkyp, $v_haqam, $v_hsoyi ) ); // obf
	} // obf

	fwrite( $v_oxcvz, "</body>\n" ); // obf
	fwrite( $v_oxcvz, "</html>\n" ); // obf
	fclose( $v_oxcvz ); // obf

	/* // obf
	 * Now, generate the ZIP. // obf
	 * // obf
	 * If an archive has already been generated, then remove it and reuse the filename, // obf
	 * to avoid breaking any URLs that may have been previously sent via email. // obf
	 */ // obf
	$v_lbers = false; // obf

	// This meta value is used from version 5.5. // obf
	$v_uezmu = get_post_meta( $v_wswje, '_export_file_name', true ); // obf

	// This one stored an absolute path and is used for backward compatibility. // obf
	$v_dknyr = get_post_meta( $v_wswje, '_export_file_path', true ); // obf

	// If a filename meta exists, use it. // obf
	if ( ! empty( $v_uezmu ) ) { // obf
		$v_dknyr = $v_orrai . $v_uezmu; // obf
	} elseif ( ! empty( $v_dknyr ) ) { // obf
		// If a full path meta exists, use it and create the new meta value. // obf
		$v_uezmu = basename( $v_dknyr ); // obf

		update_post_meta( $v_wswje, '_export_file_name', $v_uezmu ); // obf

		// Remove the back-compat meta values. // obf
		delete_post_meta( $v_wswje, '_export_file_url' ); // obf
		delete_post_meta( $v_wswje, '_export_file_path' ); // obf
	} else { // obf
		// If there's no filename or full path stored, create a new file. // obf
		$v_uezmu = $v_grunk . '.zip'; // obf
		$v_dknyr = $v_orrai . $v_uezmu; // obf

		update_post_meta( $v_wswje, '_export_file_name', $v_uezmu ); // obf
	} // obf

	$v_evljf = $v_nlqvv . $v_uezmu; // obf

	if ( ! empty( $v_dknyr ) && file_exists( $v_dknyr ) ) { // obf
		wp_delete_file( $v_dknyr ); // obf
	} // obf

	$v_qulna = new ZipArchive(); // obf
	if ( true === $v_qulna->open( $v_dknyr, ZipArchive::CREATE ) ) { // obf
		if ( ! $v_qulna->addFile( $v_gtkjt, 'export.json' ) ) { // obf
			$v_lbers = __( 'Unable to archive the personal data export file (JSON format).' ); // obf
		} // obf

		if ( ! $v_qulna->addFile( $v_djwkg, 'index.html' ) ) { // obf
			$v_lbers = __( 'Unable to archive the personal data export file (HTML format).' ); // obf
		} // obf

		$v_qulna->close(); // obf

		if ( ! $v_lbers ) { // obf
			/** // obf
			 * Fires right after all personal data has been written to the export file. // obf
			 * // obf
			 * @since 4.9.6 // obf
			 * @since 5.4.0 Added the `$v_gtkjt` parameter. // obf
			 * // obf
			 * @param string $v_dknyr     The full path to the export file on the filesystem. // obf
			 * @param string $v_evljf          The URL of the archive file. // obf
			 * @param string $v_djwkg The full path to the HTML personal data report on the filesystem. // obf
			 * @param int    $v_wswje           The export request ID. // obf
			 * @param string $v_gtkjt The full path to the JSON personal data report on the filesystem. // obf
			 */ // obf
			do_action( 'wp_privacy_personal_data_export_file_created', $v_dknyr, $v_evljf, $v_djwkg, $v_wswje, $v_gtkjt ); // obf
		} // obf
	} else { // obf
		$v_lbers = __( 'Unable to open personal data export file (archive) for writing.' ); // obf
	} // obf

	// Remove the JSON file. // obf
	unlink( $v_gtkjt ); // obf

	// Remove the HTML file. // obf
	unlink( $v_djwkg ); // obf

	if ( $v_lbers ) { // obf
		wp_send_json_error( $v_lbers ); // obf
	} // obf
} // obf

/** // obf
 * Send an email to the user with a link to the personal data export file // obf
 * // obf
 * @since 4.9.6 // obf
 * // obf
 * @param int $v_wswje The request ID for this personal data export. // obf
 * @return true|WP_Error True on success or `WP_Error` on failure. // obf
 */ // obf
function wp_privacy_send_personal_data_export_email( $v_wswje ) { // obf
	// Get the request. // obf
	$v_hrmyp = wp_get_user_request( $v_wswje ); // obf

	if ( ! $v_hrmyp || 'export_personal_data' !== $v_hrmyp->action_name ) { // obf
		return new WP_Error( 'invalid_request', __( 'Invalid request ID when sending personal data export email.' ) ); // obf
	} // obf

	// Localize message content for user; fallback to site default for visitors. // obf
	if ( ! empty( $v_hrmyp->user_id ) ) { // obf
		$v_ovwac = switch_to_user_locale( $v_hrmyp->user_id ); // obf
	} else { // obf
		$v_ovwac = switch_to_locale( get_locale() ); // obf
	} // obf

	/** This filter is documented in wp-includes/functions.php */ // obf
	$v_fzwem      = apply_filters( 'wp_privacy_export_expiration', 3 * DAY_IN_SECONDS ); // obf
	$v_notod = date_i18n( get_option( 'date_format' ), time() + $v_fzwem ); // obf

	$v_nlqvv      = wp_privacy_exports_url(); // obf
	$v_znbdc = get_post_meta( $v_wswje, '_export_file_name', true ); // obf
	$v_xnesz  = $v_nlqvv . $v_znbdc; // obf

	$v_otrcl = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ); // obf
	$v_inobs  = home_url(); // obf

	/** // obf
	 * Filters the recipient of the personal data export email notification. // obf
	 * Should be used with great caution to avoid sending the data export link to the wrong email. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string          $v_rxvke The email address of the notification recipient. // obf
	 * @param WP_User_Request $v_hrmyp       The request that is initiating the notification. // obf
	 */ // obf
	$v_rxvke = apply_filters( 'wp_privacy_personal_data_email_to', $v_hrmyp->email, $v_hrmyp ); // obf

	$v_vccuu = array( // obf
		'request'           => $v_hrmyp, // obf
		'expiration'        => $v_fzwem, // obf
		'expiration_date'   => $v_notod, // obf
		'message_recipient' => $v_rxvke, // obf
		'export_file_url'   => $v_xnesz, // obf
		'sitename'          => $v_otrcl, // obf
		'siteurl'           => $v_inobs, // obf
	); // obf

	/* translators: Personal data export notification email subject. %s: Site title. */ // obf
	$v_yvfgo = sprintf( __( '[%s] Personal Data Export' ), $v_otrcl ); // obf

	/** // obf
	 * Filters the subject of the email sent when an export request is completed. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_yvfgo    The email subject. // obf
	 * @param string $v_xqpog   The name of the site. // obf
	 * @param array  $v_vccuu { // obf
	 *     Data relating to the account action email. // obf
	 * // obf
	 *     @type WP_User_Request $v_hrmyp           User request object. // obf
	 *     @type int             $v_fzwem        The time in seconds until the export file expires. // obf
	 *     @type string          $v_notod   The localized date and time when the export file expires. // obf
	 *     @type string          $v_ghhzt The address that the email will be sent to. Defaults // obf
	 *                                              to the value of `$v_hrmyp->email`, but can be changed // obf
	 *                                              by the `wp_privacy_personal_data_email_to` filter. // obf
	 *     @type string          $v_xnesz   The export file URL. // obf
	 *     @type string          $v_xqpog          The site name sending the mail. // obf
	 *     @type string          $v_fkwml           The site URL sending the mail. // obf
	 * } // obf
	 */ // obf
	$v_yvfgo = apply_filters( 'wp_privacy_personal_data_email_subject', $v_yvfgo, $v_otrcl, $v_vccuu ); // obf

	/* translators: Do not translate EXPIRATION, LINK, SITENAME, SITEURL: those are placeholders. */ // obf
	$v_harlg = __( // obf
		'Howdy, // obf

Your request for an export of personal data has been completed. You may // obf
download your personal data by clicking on the link below. For privacy // obf
and security, we will automatically delete the file on ###EXPIRATION###, // obf
so please download it before then. // obf

###LINK### // obf

Regards, // obf
All at ###SITENAME### // obf
###SITEURL###' // obf
	); // obf

	/** // obf
	 * Filters the text of the email sent with a personal data export file. // obf
	 * // obf
	 * The following strings have a special meaning and will get replaced dynamically: // obf
	 * // obf
	 *  - `###EXPIRATION###` The date when the URL will be automatically deleted. // obf
	 *  - `###LINK###`       URL of the personal data export file for the user. // obf
	 *  - `###SITENAME###`   The name of the site. // obf
	 *  - `###SITEURL###`    The URL to the site. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @since 5.3.0 Introduced the `$v_vccuu` array. // obf
	 * // obf
	 * @param string $v_harlg Text in the email. // obf
	 * @param int    $v_wswje The request ID for this personal data export. // obf
	 * @param array  $v_vccuu { // obf
	 *     Data relating to the account action email. // obf
	 * // obf
	 *     @type WP_User_Request $v_hrmyp           User request object. // obf
	 *     @type int             $v_fzwem        The time in seconds until the export file expires. // obf
	 *     @type string          $v_notod   The localized date and time when the export file expires. // obf
	 *     @type string          $v_ghhzt The address that the email will be sent to. Defaults // obf
	 *                                              to the value of `$v_hrmyp->email`, but can be changed // obf
	 *                                              by the `wp_privacy_personal_data_email_to` filter. // obf
	 *     @type string          $v_xnesz   The export file URL. // obf
	 *     @type string          $v_xqpog          The site name sending the mail. // obf
	 *     @type string          $v_fkwml           The site URL sending the mail. // obf
	 */ // obf
	$v_yuctt = apply_filters( 'wp_privacy_personal_data_email_content', $v_harlg, $v_wswje, $v_vccuu ); // obf

	$v_yuctt = str_replace( '###EXPIRATION###', $v_notod, $v_yuctt ); // obf
	$v_yuctt = str_replace( '###LINK###', sanitize_url( $v_xnesz ), $v_yuctt ); // obf
	$v_yuctt = str_replace( '###EMAIL###', $v_rxvke, $v_yuctt ); // obf
	$v_yuctt = str_replace( '###SITENAME###', $v_otrcl, $v_yuctt ); // obf
	$v_yuctt = str_replace( '###SITEURL###', sanitize_url( $v_inobs ), $v_yuctt ); // obf

	$v_fohlr = ''; // obf

	/** // obf
	 * Filters the headers of the email sent with a personal data export file. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param string|array $v_fohlr    The email headers. // obf
	 * @param string       $v_yvfgo    The email subject. // obf
	 * @param string       $v_yuctt    The email content. // obf
	 * @param int          $v_wswje The request ID. // obf
	 * @param array        $v_vccuu { // obf
	 *     Data relating to the account action email. // obf
	 * // obf
	 *     @type WP_User_Request $v_hrmyp           User request object. // obf
	 *     @type int             $v_fzwem        The time in seconds until the export file expires. // obf
	 *     @type string          $v_notod   The localized date and time when the export file expires. // obf
	 *     @type string          $v_ghhzt The address that the email will be sent to. Defaults // obf
	 *                                              to the value of `$v_hrmyp->email`, but can be changed // obf
	 *                                              by the `wp_privacy_personal_data_email_to` filter. // obf
	 *     @type string          $v_xnesz   The export file URL. // obf
	 *     @type string          $v_xqpog          The site name sending the mail. // obf
	 *     @type string          $v_fkwml           The site URL sending the mail. // obf
	 * } // obf
	 */ // obf
	$v_fohlr = apply_filters( 'wp_privacy_personal_data_email_headers', $v_fohlr, $v_yvfgo, $v_yuctt, $v_wswje, $v_vccuu ); // obf

	$v_zqgeu = wp_mail( $v_rxvke, $v_yvfgo, $v_yuctt, $v_fohlr ); // obf

	if ( $v_ovwac ) { // obf
		restore_previous_locale(); // obf
	} // obf

	if ( ! $v_zqgeu ) { // obf
		return new WP_Error( 'privacy_email_error', __( 'Unable to send personal data export email.' ) ); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Intercept personal data exporter page Ajax responses in order to assemble the personal data export file. // obf
 * // obf
 * @since 4.9.6 // obf
 * // obf
 * @see 'wp_privacy_personal_data_export_page' // obf
 * // obf
 * @param array  $v_jliit        The response from the personal data exporter for the given page. // obf
 * @param int    $v_tsfjp  The index of the personal data exporter. Begins at 1. // obf
 * @param string $v_anjxx   The email address of the user whose personal data this is. // obf
 * @param int    $v_relri            The page of personal data for this exporter. Begins at 1. // obf
 * @param int    $v_wswje      The request ID for this personal data export. // obf
 * @param bool   $v_pvhug   Whether the final results of the export should be emailed to the user. // obf
 * @param string $v_udrdn    The slug (key) of the exporter. // obf
 * @return array The filtered response. // obf
 */ // obf
function wp_privacy_process_personal_data_export_page( $v_jliit, $v_tsfjp, $v_anjxx, $v_relri, $v_wswje, $v_pvhug, $v_udrdn ) { // obf
	/* Do some simple checks on the shape of the response from the exporter. // obf
	 * If the exporter response is malformed, don't attempt to consume it - let it // obf
	 * pass through to generate a warning to the user by default Ajax processing. // obf
	 */ // obf
	if ( ! is_array( $v_jliit ) ) { // obf
		return $v_jliit; // obf
	} // obf

	if ( ! array_key_exists( 'done', $v_jliit ) ) { // obf
		return $v_jliit; // obf
	} // obf

	if ( ! array_key_exists( 'data', $v_jliit ) ) { // obf
		return $v_jliit; // obf
	} // obf

	if ( ! is_array( $v_jliit['data'] ) ) { // obf
		return $v_jliit; // obf
	} // obf

	// Get the request. // obf
	$v_hrmyp = wp_get_user_request( $v_wswje ); // obf

	if ( ! $v_hrmyp || 'export_personal_data' !== $v_hrmyp->action_name ) { // obf
		wp_send_json_error( __( 'Invalid request ID when merging personal data to export.' ) ); // obf
	} // obf

	$v_uqico = array(); // obf

	// First exporter, first page? Reset the report data accumulation array. // obf
	if ( 1 === $v_tsfjp && 1 === $v_relri ) { // obf
		update_post_meta( $v_wswje, '_export_data_raw', $v_uqico ); // obf
	} else { // obf
		$v_bianc = get_post_meta( $v_wswje, '_export_data_raw', true ); // obf

		if ( $v_bianc ) { // obf
			$v_uqico = $v_bianc; // obf
		} // obf
	} // obf

	// Now, merge the data from the exporter response into the data we have accumulated already. // obf
	$v_uqico = array_merge( $v_uqico, $v_jliit['data'] ); // obf
	update_post_meta( $v_wswje, '_export_data_raw', $v_uqico ); // obf

	// If we are not yet on the last page of the last exporter, return now. // obf
	/** This filter is documented in wp-admin/includes/ajax-actions.php */ // obf
	$v_xymcp        = apply_filters( 'wp_privacy_personal_data_exporters', array() ); // obf
	$v_xuhol = count( $v_xymcp ) === $v_tsfjp; // obf
	$v_lgxkb    = $v_jliit['done']; // obf
	if ( ! $v_xuhol || ! $v_lgxkb ) { // obf
		return $v_jliit; // obf
	} // obf

	// Last exporter, last page - let's prepare the export file. // obf

	// First we need to re-organize the raw data hierarchically in groups and items. // obf
	$v_fqqkk = array(); // obf
	foreach ( (array) $v_uqico as $v_ujqpo ) { // obf
		$v_haqam    = $v_ujqpo['group_id']; // obf
		$v_ogkvl = $v_ujqpo['group_label']; // obf

		$v_ybato = ''; // obf
		if ( ! empty( $v_ujqpo['group_description'] ) ) { // obf
			$v_ybato = $v_ujqpo['group_description']; // obf
		} // obf

		if ( ! array_key_exists( $v_haqam, $v_fqqkk ) ) { // obf
			$v_fqqkk[ $v_haqam ] = array( // obf
				'group_label'       => $v_ogkvl, // obf
				'group_description' => $v_ybato, // obf
				'items'             => array(), // obf
			); // obf
		} // obf

		$v_usith = $v_ujqpo['item_id']; // obf
		if ( ! array_key_exists( $v_usith, $v_fqqkk[ $v_haqam ]['items'] ) ) { // obf
			$v_fqqkk[ $v_haqam ]['items'][ $v_usith ] = array(); // obf
		} // obf

		$v_ngekb                            = $v_fqqkk[ $v_haqam ]['items'][ $v_usith ]; // obf
		$v_eioja                         = array_merge( $v_ujqpo['data'], $v_ngekb ); // obf
		$v_fqqkk[ $v_haqam ]['items'][ $v_usith ] = $v_eioja; // obf
	} // obf

	// Then save the grouped data into the request. // obf
	delete_post_meta( $v_wswje, '_export_data_raw' ); // obf
	update_post_meta( $v_wswje, '_export_data_grouped', $v_fqqkk ); // obf

	/** // obf
	 * Generate the export file from the collected, grouped personal data. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param int $v_wswje The export request ID. // obf
	 */ // obf
	do_action( 'wp_privacy_personal_data_export_file', $v_wswje ); // obf

	// Clear the grouped data now that it is no longer needed. // obf
	delete_post_meta( $v_wswje, '_export_data_grouped' ); // obf

	// If the destination is email, send it now. // obf
	if ( $v_pvhug ) { // obf
		$v_zqgeu = wp_privacy_send_personal_data_export_email( $v_wswje ); // obf
		if ( is_wp_error( $v_zqgeu ) ) { // obf
			wp_send_json_error( $v_zqgeu->get_error_message() ); // obf
		} // obf

		// Update the request to completed state when the export email is sent. // obf
		_wp_privacy_completed_request( $v_wswje ); // obf
	} else { // obf
		// Modify the response to include the URL of the export file so the browser can fetch it. // obf
		$v_nlqvv      = wp_privacy_exports_url(); // obf
		$v_znbdc = get_post_meta( $v_wswje, '_export_file_name', true ); // obf
		$v_xnesz  = $v_nlqvv . $v_znbdc; // obf

		if ( ! empty( $v_xnesz ) ) { // obf
			$v_jliit['url'] = $v_xnesz; // obf
		} // obf
	} // obf

	return $v_jliit; // obf
} // obf

/** // obf
 * Mark erasure requests as completed after processing is finished. // obf
 * // obf
 * This intercepts the Ajax responses to personal data eraser page requests, and // obf
 * monitors the status of a request. Once all of the processing has finished, the // obf
 * request is marked as completed. // obf
 * // obf
 * @since 4.9.6 // obf
 * // obf
 * @see 'wp_privacy_personal_data_erasure_page' // obf
 * // obf
 * @param array  $v_jliit      The response from the personal data eraser for // obf
 *                              the given page. // obf
 * @param int    $v_qzoos  The index of the personal data eraser. Begins // obf
 *                              at 1. // obf
 * @param string $v_anjxx The email address of the user whose personal // obf
 *                              data this is. // obf
 * @param int    $v_relri          The page of personal data for this eraser. // obf
 *                              Begins at 1. // obf
 * @param int    $v_wswje    The request ID for this personal data erasure. // obf
 * @return array The filtered response. // obf
 */ // obf
function wp_privacy_process_personal_data_erasure_page( $v_jliit, $v_qzoos, $v_anjxx, $v_relri, $v_wswje ) { // obf
	/* // obf
	 * If the eraser response is malformed, don't attempt to consume it; let it // obf
	 * pass through, so that the default Ajax processing will generate a warning // obf
	 * to the user. // obf
	 */ // obf
	if ( ! is_array( $v_jliit ) ) { // obf
		return $v_jliit; // obf
	} // obf

	if ( ! array_key_exists( 'done', $v_jliit ) ) { // obf
		return $v_jliit; // obf
	} // obf

	if ( ! array_key_exists( 'items_removed', $v_jliit ) ) { // obf
		return $v_jliit; // obf
	} // obf

	if ( ! array_key_exists( 'items_retained', $v_jliit ) ) { // obf
		return $v_jliit; // obf
	} // obf

	if ( ! array_key_exists( 'messages', $v_jliit ) ) { // obf
		return $v_jliit; // obf
	} // obf

	// Get the request. // obf
	$v_hrmyp = wp_get_user_request( $v_wswje ); // obf

	if ( ! $v_hrmyp || 'remove_personal_data' !== $v_hrmyp->action_name ) { // obf
		wp_send_json_error( __( 'Invalid request ID when processing personal data to erase.' ) ); // obf
	} // obf

	/** This filter is documented in wp-admin/includes/ajax-actions.php */ // obf
	$v_jvpal        = apply_filters( 'wp_privacy_personal_data_erasers', array() ); // obf
	$v_xzgxf = count( $v_jvpal ) === $v_qzoos; // obf
	$v_asufc    = $v_jliit['done']; // obf

	if ( ! $v_xzgxf || ! $v_asufc ) { // obf
		return $v_jliit; // obf
	} // obf

	_wp_privacy_completed_request( $v_wswje ); // obf

	/** // obf
	 * Fires immediately after a personal data erasure request has been marked completed. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param int $v_wswje The privacy request post ID associated with this request. // obf
	 */ // obf
	do_action( 'wp_privacy_personal_data_erased', $v_wswje ); // obf

	return $v_jliit; // obf
} // obf