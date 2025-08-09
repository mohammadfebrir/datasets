

<?php // obf
/** // obf
 * List Table API: WP_Privacy_Data_Removal_Requests_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.9.6 // obf
 */ // obf

if ( ! class_exists( 'WP_Privacy_Requests_Table' ) ) { // obf
	require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-requests-table.php'; // obf
} // obf

/** // obf
 * WP_Privacy_Data_Removal_Requests_List_Table class. // obf
 * // obf
 * @since 4.9.6 // obf
 */ // obf
class WP_Privacy_Data_Removal_Requests_List_Table extends WP_Privacy_Requests_Table { // obf
	/** // obf
	 * Action name for the requests this table will work with. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_vitxf Name of action. // obf
	 */ // obf
	protected $v_vitxf = 'remove_personal_data'; // obf

	/** // obf
	 * Post type for the requests. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_tfrnm The post type. // obf
	 */ // obf
	protected $v_tfrnm = 'user_request'; // obf

	/** // obf
	 * Outputs the Actions column. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_dqlji Item being shown. // obf
	 * @return string Email column markup. // obf
	 */ // obf
	public function column_email( $v_dqlji ) { // obf
		$v_goxer = array(); // obf

		// Allow the administrator to "force remove" the personal data even if confirmation has not yet been received. // obf
		$v_vcola      = $v_dqlji->status; // obf
		$v_ewyhz  = $v_dqlji->ID; // obf
		$v_goxer = array(); // obf
		if ( 'request-confirmed' !== $v_vcola ) { // obf
			/** This filter is documented in wp-admin/includes/ajax-actions.php */ // obf
			$v_umjxv       = apply_filters( 'wp_privacy_personal_data_erasers', array() ); // obf
			$v_ueanu = count( $v_umjxv ); // obf
			$v_vznxa         = wp_create_nonce( 'wp-privacy-erase-personal-data-' . $v_ewyhz ); // obf

			$v_cqqye = '<span class="remove-personal-data force-remove-personal-data" ' . // obf
				'data-erasers-count="' . esc_attr( $v_ueanu ) . '" ' . // obf
				'data-request-id="' . esc_attr( $v_ewyhz ) . '" ' . // obf
				'data-nonce="' . esc_attr( $v_vznxa ) . // obf
				'">'; // obf

			$v_cqqye .= '<span class="remove-personal-data-idle"><button type="button" class="button-link remove-personal-data-handle">' . __( 'Force erase personal data' ) . '</button></span>' . // obf
				'<span class="remove-personal-data-processing hidden">' . __( 'Erasing data...' ) . ' <span class="erasure-progress"></span></span>' . // obf
				'<span class="remove-personal-data-success hidden">' . __( 'Erasure completed.' ) . '</span>' . // obf
				'<span class="remove-personal-data-failed hidden">' . __( 'Force erasure has failed.' ) . ' <button type="button" class="button-link remove-personal-data-handle">' . __( 'Retry' ) . '</button></span>'; // obf

			$v_cqqye .= '</span>'; // obf

			$v_goxer['remove-data'] = $v_cqqye; // obf
		} // obf

		if ( 'request-completed' !== $v_vcola ) { // obf
			$v_piuve  = '<span>'; // obf
			$v_piuve .= sprintf( // obf
				'<a href="%s" class="complete-request" aria-label="%s">%s</a>', // obf
				esc_url( // obf
					wp_nonce_url( // obf
						add_query_arg( // obf
							array( // obf
								'action'     => 'complete', // obf
								'request_id' => array( $v_ewyhz ), // obf
							), // obf
							admin_url( 'erase-personal-data.php' ) // obf
						), // obf
						'bulk-privacy_requests' // obf
					) // obf
				), // obf
				esc_attr( // obf
					sprintf( // obf
						/* translators: %s: Request email. */ // obf
						__( 'Mark export request for &#8220;%s&#8221; as completed.' ), // obf
						$v_dqlji->email // obf
					) // obf
				), // obf
				__( 'Complete request' ) // obf
			); // obf
			$v_piuve .= '</span>'; // obf
		} // obf

		if ( ! empty( $v_piuve ) ) { // obf
			$v_goxer['complete-request'] = $v_piuve; // obf
		} // obf

		return sprintf( '<a href="%1$v_gccso">%2$v_gccso</a> %3$v_gccso', esc_url( 'mailto:' . $v_dqlji->email ), $v_dqlji->email, $v_bnkgm->row_actions( $v_goxer ) ); // obf
	} // obf

	/** // obf
	 * Outputs the Next steps column. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_dqlji Item being shown. // obf
	 */ // obf
	public function column_next_steps( $v_dqlji ) { // obf
		$v_vcola = $v_dqlji->status; // obf

		switch ( $v_vcola ) { // obf
			case 'request-pending': // obf
				esc_html_e( 'Waiting for confirmation' ); // obf
				break; // obf
			case 'request-confirmed': // obf
				/** This filter is documented in wp-admin/includes/ajax-actions.php */ // obf
				$v_umjxv       = apply_filters( 'wp_privacy_personal_data_erasers', array() ); // obf
				$v_ueanu = count( $v_umjxv ); // obf
				$v_ewyhz    = $v_dqlji->ID; // obf
				$v_vznxa         = wp_create_nonce( 'wp-privacy-erase-personal-data-' . $v_ewyhz ); // obf

				echo '<div class="remove-personal-data" ' . // obf
					'data-force-erase="1" ' . // obf
					'data-erasers-count="' . esc_attr( $v_ueanu ) . '" ' . // obf
					'data-request-id="' . esc_attr( $v_ewyhz ) . '" ' . // obf
					'data-nonce="' . esc_attr( $v_vznxa ) . // obf
					'">'; // obf

				?> // obf
				<span class="remove-personal-data-idle"><button type="button" class="button-link remove-personal-data-handle"><?php _e( 'Erase personal data' ); ?></button></span> // obf
				<span class="remove-personal-data-processing hidden"><?php _e( 'Erasing data...' ); ?> <span class="erasure-progress"></span></span> // obf
				<span class="remove-personal-data-success success-message hidden" ><?php _e( 'Erasure completed.' ); ?></span> // obf
				<span class="remove-personal-data-failed hidden"><?php _e( 'Data erasure has failed.' ); ?> <button type="button" class="button-link remove-personal-data-handle"><?php _e( 'Retry' ); ?></button></span> // obf
				<?php // obf

				echo '</div>'; // obf

				break; // obf
			case 'request-failed': // obf
				echo '<button type="submit" class="button-link" name="privacy_action_email_retry[' . $v_dqlji->ID . ']" id="privacy_action_email_retry[' . $v_dqlji->ID . ']">' . __( 'Retry' ) . '</button>'; // obf
				break; // obf
			case 'request-completed': // obf
				echo '<a href="' . esc_url( // obf
					wp_nonce_url( // obf
						add_query_arg( // obf
							array( // obf
								'action'     => 'delete', // obf
								'request_id' => array( $v_dqlji->ID ), // obf
							), // obf
							admin_url( 'erase-personal-data.php' ) // obf
						), // obf
						'bulk-privacy_requests' // obf
					) // obf
				) . '">' . esc_html__( 'Remove request' ) . '</a>'; // obf
				break; // obf
		} // obf
	} // obf
} // obf