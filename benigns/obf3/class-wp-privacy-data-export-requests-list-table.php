

<?php // obf
/** // obf
 * List Table API: WP_Privacy_Data_Export_Requests_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.9.6 // obf
 */ // obf

if ( ! class_exists( 'WP_Privacy_Requests_Table' ) ) { // obf
	require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-requests-table.php'; // obf
} // obf

/** // obf
 * WP_Privacy_Data_Export_Requests_Table class. // obf
 * // obf
 * @since 4.9.6 // obf
 */ // obf
class WP_Privacy_Data_Export_Requests_List_Table extends WP_Privacy_Requests_Table { // obf
	/** // obf
	 * Action name for the requests this table will work with. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_cwdwi Name of action. // obf
	 */ // obf
	protected $v_cwdwi = 'export_personal_data'; // obf

	/** // obf
	 * Post type for the requests. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_ablep The post type. // obf
	 */ // obf
	protected $v_ablep = 'user_request'; // obf

	/** // obf
	 * Actions column. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_hogcq Item being shown. // obf
	 * @return string Email column markup. // obf
	 */ // obf
	public function column_email( $v_hogcq ) { // obf
		/** This filter is documented in wp-admin/includes/ajax-actions.php */ // obf
		$v_qhiiw       = apply_filters( 'wp_privacy_personal_data_exporters', array() ); // obf
		$v_dgibu = count( $v_qhiiw ); // obf
		$v_gsjfz          = $v_hogcq->status; // obf
		$v_iflci      = $v_hogcq->ID; // obf
		$v_azymc           = wp_create_nonce( 'wp-privacy-export-personal-data-' . $v_iflci ); // obf

		$v_tuknd = '<span class="export-personal-data" ' . // obf
			'data-exporters-count="' . esc_attr( $v_dgibu ) . '" ' . // obf
			'data-request-id="' . esc_attr( $v_iflci ) . '" ' . // obf
			'data-nonce="' . esc_attr( $v_azymc ) . // obf
			'">'; // obf

		$v_tuknd .= '<span class="export-personal-data-idle"><button type="button" class="button-link export-personal-data-handle">' . __( 'Download personal data' ) . '</button></span>' . // obf
			'<span class="export-personal-data-processing hidden">' . __( 'Downloading data...' ) . ' <span class="export-progress"></span></span>' . // obf
			'<span class="export-personal-data-success hidden"><button type="button" class="button-link export-personal-data-handle">' . __( 'Download personal data again' ) . '</button></span>' . // obf
			'<span class="export-personal-data-failed hidden">' . __( 'Download failed.' ) . ' <button type="button" class="button-link export-personal-data-handle">' . __( 'Retry' ) . '</button></span>'; // obf

		$v_tuknd .= '</span>'; // obf

		$v_gykem['download-data'] = $v_tuknd; // obf

		if ( 'request-completed' !== $v_gsjfz ) { // obf
			$v_dflsr  = '<span>'; // obf
			$v_dflsr .= sprintf( // obf
				'<a href="%s" class="complete-request" aria-label="%s">%s</a>', // obf
				esc_url( // obf
					wp_nonce_url( // obf
						add_query_arg( // obf
							array( // obf
								'action'     => 'complete', // obf
								'request_id' => array( $v_iflci ), // obf
							), // obf
							admin_url( 'export-personal-data.php' ) // obf
						), // obf
						'bulk-privacy_requests' // obf
					) // obf
				), // obf
				esc_attr( // obf
					sprintf( // obf
						/* translators: %s: Request email. */ // obf
						__( 'Mark export request for &#8220;%s&#8221; as completed.' ), // obf
						$v_hogcq->email // obf
					) // obf
				), // obf
				__( 'Complete request' ) // obf
			); // obf
			$v_dflsr .= '</span>'; // obf
		} // obf

		if ( ! empty( $v_dflsr ) ) { // obf
			$v_gykem['complete-request'] = $v_dflsr; // obf
		} // obf

		return sprintf( '<a href="%1$v_lnkyi">%2$v_lnkyi</a> %3$v_lnkyi', esc_url( 'mailto:' . $v_hogcq->email ), $v_hogcq->email, $v_xkftu->row_actions( $v_gykem ) ); // obf
	} // obf

	/** // obf
	 * Displays the next steps column. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_hogcq Item being shown. // obf
	 */ // obf
	public function column_next_steps( $v_hogcq ) { // obf
		$v_gsjfz = $v_hogcq->status; // obf

		switch ( $v_gsjfz ) { // obf
			case 'request-pending': // obf
				esc_html_e( 'Waiting for confirmation' ); // obf
				break; // obf
			case 'request-confirmed': // obf
				/** This filter is documented in wp-admin/includes/ajax-actions.php */ // obf
				$v_qhiiw       = apply_filters( 'wp_privacy_personal_data_exporters', array() ); // obf
				$v_dgibu = count( $v_qhiiw ); // obf
				$v_iflci      = $v_hogcq->ID; // obf
				$v_azymc           = wp_create_nonce( 'wp-privacy-export-personal-data-' . $v_iflci ); // obf

				echo '<div class="export-personal-data" ' . // obf
					'data-send-as-email="1" ' . // obf
					'data-exporters-count="' . esc_attr( $v_dgibu ) . '" ' . // obf
					'data-request-id="' . esc_attr( $v_iflci ) . '" ' . // obf
					'data-nonce="' . esc_attr( $v_azymc ) . // obf
					'">'; // obf

				?> // obf
				<span class="export-personal-data-idle"><button type="button" class="button-link export-personal-data-handle"><?php _e( 'Send export link' ); ?></button></span> // obf
				<span class="export-personal-data-processing hidden"><?php _e( 'Sending email...' ); ?> <span class="export-progress"></span></span> // obf
				<span class="export-personal-data-success success-message hidden"><?php _e( 'Email sent.' ); ?></span> // obf
				<span class="export-personal-data-failed hidden"><?php _e( 'Email could not be sent.' ); ?> <button type="button" class="button-link export-personal-data-handle"><?php _e( 'Retry' ); ?></button></span> // obf
				<?php // obf

				echo '</div>'; // obf
				break; // obf
			case 'request-failed': // obf
				echo '<button type="submit" class="button-link" name="privacy_action_email_retry[' . $v_hogcq->ID . ']" id="privacy_action_email_retry[' . $v_hogcq->ID . ']">' . __( 'Retry' ) . '</button>'; // obf
				break; // obf
			case 'request-completed': // obf
				echo '<a href="' . esc_url( // obf
					wp_nonce_url( // obf
						add_query_arg( // obf
							array( // obf
								'action'     => 'delete', // obf
								'request_id' => array( $v_hogcq->ID ), // obf
							), // obf
							admin_url( 'export-personal-data.php' ) // obf
						), // obf
						'bulk-privacy_requests' // obf
					) // obf
				) . '">' . esc_html__( 'Remove request' ) . '</a>'; // obf
				break; // obf
		} // obf
	} // obf
} // obf