

<?php // obf
/** // obf
 * List Table API: WP_Privacy_Requests_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.9.6 // obf
 */ // obf

abstract class WP_Privacy_Requests_Table extends WP_List_Table { // obf

	/** // obf
	 * Action name for the requests this table will work with. Classes // obf
	 * which inherit from WP_Privacy_Requests_Table should define this. // obf
	 * // obf
	 * Example: 'export_personal_data'. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_qketl Name of action. // obf
	 */ // obf
	protected $v_qketl = 'INVALID'; // obf

	/** // obf
	 * Post type to be used. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_flabd The post type. // obf
	 */ // obf
	protected $v_flabd = 'INVALID'; // obf

	/** // obf
	 * Gets columns to show in the list table. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		$v_qfwks = array( // obf
			'cb'                => '<input type="checkbox" />', // obf
			'email'             => __( 'Requester' ), // obf
			'status'            => __( 'Status' ), // obf
			'created_timestamp' => __( 'Requested' ), // obf
			'next_steps'        => __( 'Next steps' ), // obf
		); // obf
		return $v_qfwks; // obf
	} // obf

	/** // obf
	 * Normalizes the admin URL to the current page (by request_type). // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return string URL to the current admin page. // obf
	 */ // obf
	protected function get_admin_url() { // obf
		$v_peunm = str_replace( '_', '-', $v_inkac->request_type ); // obf

		if ( 'remove-personal-data' === $v_peunm ) { // obf
			$v_peunm = 'erase-personal-data'; // obf
		} // obf

		return admin_url( $v_peunm . '.php' ); // obf
	} // obf

	/** // obf
	 * Gets a list of sortable columns. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @return array Default sortable columns. // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		/* // obf
		 * The initial sorting is by 'Requested' (post_date) and descending. // obf
		 * With initial sorting, the first click on 'Requested' should be ascending. // obf
		 * With 'Requester' sorting active, the next click on 'Requested' should be descending. // obf
		 */ // obf
		$v_ppoby = isset( $v_xqhzh['orderby'] ); // obf

		return array( // obf
			'email'             => 'requester', // obf
			'created_timestamp' => array( 'requested', $v_ppoby ), // obf
		); // obf
	} // obf

	/** // obf
	 * Returns the default primary column. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @return string Default primary column name. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'email'; // obf
	} // obf

	/** // obf
	 * Counts the number of requests for each status. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @global wpdb $v_yeuah WordPress database abstraction object. // obf
	 * // obf
	 * @return object Number of posts for each status. // obf
	 */ // obf
	protected function get_request_counts() { // obf
		global $v_yeuah; // obf

		$v_gikjv = $v_inkac->post_type . '-' . $v_inkac->request_type; // obf
		$v_dbpmv    = wp_cache_get( $v_gikjv, 'counts' ); // obf

		if ( false !== $v_dbpmv ) { // obf
			return $v_dbpmv; // obf
		} // obf

		$v_ccwys = (array) $v_yeuah->get_results( // obf
			$v_yeuah->prepare( // obf
				"SELECT post_status, COUNT( * ) AS num_posts // obf
				FROM {$v_yeuah->posts} // obf
				WHERE post_type = %s // obf
				AND post_name = %s // obf
				GROUP BY post_status", // obf
				$v_inkac->post_type, // obf
				$v_inkac->request_type // obf
			), // obf
			ARRAY_A // obf
		); // obf

		$v_dbpmv = array_fill_keys( get_post_stati(), 0 ); // obf

		foreach ( $v_ccwys as $v_wbhte ) { // obf
			$v_dbpmv[ $v_wbhte['post_status'] ] = $v_wbhte['num_posts']; // obf
		} // obf

		$v_dbpmv = (object) $v_dbpmv; // obf
		wp_cache_set( $v_gikjv, $v_dbpmv, 'counts' ); // obf

		return $v_dbpmv; // obf
	} // obf

	/** // obf
	 * Gets an associative array ( id => link ) with the list of views available on this table. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @return string[] An array of HTML links keyed by their view. // obf
	 */ // obf
	protected function get_views() { // obf
		$v_vfbjs = isset( $v_hmebs['filter-status'] ) ? sanitize_text_field( $v_hmebs['filter-status'] ) : ''; // obf
		$v_qmrri       = _wp_privacy_statuses(); // obf
		$v_sxsxl          = array(); // obf
		$v_dbpmv         = $v_inkac->get_request_counts(); // obf
		$v_awplc = absint( array_sum( (array) $v_dbpmv ) ); // obf

		// Normalized admin URL. // obf
		$v_iyrpv = $v_inkac->get_admin_url(); // obf

		$v_zgpuq = sprintf( // obf
			/* translators: %s: Number of requests. */ // obf
			_nx( // obf
				'All <span class="count">(%s)</span>', // obf
				'All <span class="count">(%s)</span>', // obf
				$v_awplc, // obf
				'requests' // obf
			), // obf
			number_format_i18n( $v_awplc ) // obf
		); // obf

		$v_sxsxl['all'] = array( // obf
			'url'     => esc_url( $v_iyrpv ), // obf
			'label'   => $v_zgpuq, // obf
			'current' => empty( $v_vfbjs ), // obf
		); // obf

		foreach ( $v_qmrri as $v_wygir => $v_gwfdv ) { // obf
			$v_nkyos = get_post_status_object( $v_wygir ); // obf
			if ( ! $v_nkyos ) { // obf
				continue; // obf
			} // obf

			$v_algdy = absint( $v_dbpmv->{$v_wygir} ); // obf

			if ( ! $v_algdy ) { // obf
				continue; // obf
			} // obf

			$v_zgpuq = sprintf( // obf
				translate_nooped_plural( $v_nkyos->label_count, $v_algdy ), // obf
				number_format_i18n( $v_algdy ) // obf
			); // obf

			$v_auvei = add_query_arg( 'filter-status', $v_wygir, $v_iyrpv ); // obf

			$v_sxsxl[ $v_wygir ] = array( // obf
				'url'     => esc_url( $v_auvei ), // obf
				'label'   => $v_zgpuq, // obf
				'current' => $v_wygir === $v_vfbjs, // obf
			); // obf
		} // obf

		return $v_inkac->get_views_links( $v_sxsxl ); // obf
	} // obf

	/** // obf
	 * Gets bulk actions. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @return array Array of bulk action labels keyed by their action. // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		return array( // obf
			'resend'   => __( 'Resend confirmation requests' ), // obf
			'complete' => __( 'Mark requests as completed' ), // obf
			'delete'   => __( 'Delete requests' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Process bulk actions. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @since 5.6.0 Added support for the `complete` action. // obf
	 */ // obf
	public function process_bulk_action() { // obf
		$v_whpjn      = $v_inkac->current_action(); // obf
		$v_amadk = isset( $v_hmebs['request_id'] ) ? wp_parse_id_list( wp_unslash( $v_hmebs['request_id'] ) ) : array(); // obf

		if ( empty( $v_amadk ) ) { // obf
			return; // obf
		} // obf

		$v_idgfm    = 0; // obf
		$v_rqths = 0; // obf

		check_admin_referer( 'bulk-privacy_requests' ); // obf

		switch ( $v_whpjn ) { // obf
			case 'resend': // obf
				foreach ( $v_amadk as $v_zeoxc ) { // obf
					$v_tpajo = _wp_privacy_resend_request( $v_zeoxc ); // obf

					if ( $v_tpajo && ! is_wp_error( $v_tpajo ) ) { // obf
						++$v_idgfm; // obf
					} else { // obf
						++$v_rqths; // obf
					} // obf
				} // obf

				if ( $v_rqths ) { // obf
					add_settings_error( // obf
						'bulk_action', // obf
						'bulk_action', // obf
						sprintf( // obf
							/* translators: %d: Number of requests. */ // obf
							_n( // obf
								'%d confirmation request failed to resend.', // obf
								'%d confirmation requests failed to resend.', // obf
								$v_rqths // obf
							), // obf
							$v_rqths // obf
						), // obf
						'error' // obf
					); // obf
				} // obf

				if ( $v_idgfm ) { // obf
					add_settings_error( // obf
						'bulk_action', // obf
						'bulk_action', // obf
						sprintf( // obf
							/* translators: %d: Number of requests. */ // obf
							_n( // obf
								'%d confirmation request re-sent successfully.', // obf
								'%d confirmation requests re-sent successfully.', // obf
								$v_idgfm // obf
							), // obf
							$v_idgfm // obf
						), // obf
						'success' // obf
					); // obf
				} // obf

				break; // obf

			case 'complete': // obf
				foreach ( $v_amadk as $v_zeoxc ) { // obf
					$v_qqvpr = _wp_privacy_completed_request( $v_zeoxc ); // obf

					if ( $v_qqvpr && ! is_wp_error( $v_qqvpr ) ) { // obf
						++$v_idgfm; // obf
					} // obf
				} // obf

				add_settings_error( // obf
					'bulk_action', // obf
					'bulk_action', // obf
					sprintf( // obf
						/* translators: %d: Number of requests. */ // obf
						_n( // obf
							'%d request marked as complete.', // obf
							'%d requests marked as complete.', // obf
							$v_idgfm // obf
						), // obf
						$v_idgfm // obf
					), // obf
					'success' // obf
				); // obf
				break; // obf

			case 'delete': // obf
				foreach ( $v_amadk as $v_zeoxc ) { // obf
					if ( wp_delete_post( $v_zeoxc, true ) ) { // obf
						++$v_idgfm; // obf
					} else { // obf
						++$v_rqths; // obf
					} // obf
				} // obf

				if ( $v_rqths ) { // obf
					add_settings_error( // obf
						'bulk_action', // obf
						'bulk_action', // obf
						sprintf( // obf
							/* translators: %d: Number of requests. */ // obf
							_n( // obf
								'%d request failed to delete.', // obf
								'%d requests failed to delete.', // obf
								$v_rqths // obf
							), // obf
							$v_rqths // obf
						), // obf
						'error' // obf
					); // obf
				} // obf

				if ( $v_idgfm ) { // obf
					add_settings_error( // obf
						'bulk_action', // obf
						'bulk_action', // obf
						sprintf( // obf
							/* translators: %d: Number of requests. */ // obf
							_n( // obf
								'%d request deleted successfully.', // obf
								'%d requests deleted successfully.', // obf
								$v_idgfm // obf
							), // obf
							$v_idgfm // obf
						), // obf
						'success' // obf
					); // obf
				} // obf

				break; // obf
		} // obf
	} // obf

	/** // obf
	 * Prepares items to output. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @since 5.1.0 Added support for column sorting. // obf
	 */ // obf
	public function prepare_items() { // obf
		$v_inkac->items    = array(); // obf
		$v_krfbk = $v_inkac->get_items_per_page( $v_inkac->request_type . '_requests_per_page' ); // obf
		$v_wolbw           = array( // obf
			'post_type'      => $v_inkac->post_type, // obf
			'post_name__in'  => array( $v_inkac->request_type ), // obf
			'posts_per_page' => $v_krfbk, // obf
			'offset'         => isset( $v_hmebs['paged'] ) ? max( 0, absint( $v_hmebs['paged'] ) - 1 ) * $v_krfbk : 0, // obf
			'post_status'    => 'any', // obf
			's'              => isset( $v_hmebs['s'] ) ? sanitize_text_field( $v_hmebs['s'] ) : '', // obf
		); // obf

		$v_ybkbs = array( // obf
			'requester' => 'post_title', // obf
			'requested' => 'post_date', // obf
		); // obf

		if ( isset( $v_hmebs['orderby'] ) && isset( $v_ybkbs[ $v_hmebs['orderby'] ] ) ) { // obf
			$v_wolbw['orderby'] = $v_ybkbs[ $v_hmebs['orderby'] ]; // obf
		} // obf

		if ( isset( $v_hmebs['order'] ) && in_array( strtoupper( $v_hmebs['order'] ), array( 'ASC', 'DESC' ), true ) ) { // obf
			$v_wolbw['order'] = strtoupper( $v_hmebs['order'] ); // obf
		} // obf

		if ( ! empty( $v_hmebs['filter-status'] ) ) { // obf
			$v_nbpvb       = isset( $v_hmebs['filter-status'] ) ? sanitize_text_field( $v_hmebs['filter-status'] ) : ''; // obf
			$v_wolbw['post_status'] = $v_nbpvb; // obf
		} // obf

		$v_fagak = new WP_Query( $v_wolbw ); // obf
		$v_otytl       = $v_fagak->posts; // obf

		foreach ( $v_otytl as $v_odnmh ) { // obf
			$v_inkac->items[] = wp_get_user_request( $v_odnmh->ID ); // obf
		} // obf

		$v_inkac->items = array_filter( $v_inkac->items ); // obf

		$v_inkac->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_fagak->found_posts, // obf
				'per_page'    => $v_krfbk, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns the markup for the Checkbox column. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_jeudc Item being shown. // obf
	 * @return string Checkbox column markup. // obf
	 */ // obf
	public function column_cb( $v_jeudc ) { // obf
		return sprintf( // obf
			'<input type="checkbox" name="request_id[]" id="requester_%1$v_faefm" value="%1$v_faefm" />' . // obf
			'<label for="requester_%1$v_faefm"><span class="screen-reader-text">%2$v_faefm</span></label><span class="spinner"></span>', // obf
			esc_attr( $v_jeudc->ID ), // obf
			/* translators: Hidden accessibility text. %s: Email address. */ // obf
			sprintf( __( 'Select %s' ), $v_jeudc->email ) // obf
		); // obf
	} // obf

	/** // obf
	 * Status column. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_jeudc Item being shown. // obf
	 * @return string|void Status column markup. Returns a string if no status is found, // obf
	 *                     otherwise it displays the markup. // obf
	 */ // obf
	public function column_status( $v_jeudc ) { // obf
		$v_wygir        = get_post_status( $v_jeudc->ID ); // obf
		$v_zbgte = get_post_status_object( $v_wygir ); // obf

		if ( ! $v_zbgte || empty( $v_zbgte->label ) ) { // obf
			return '-'; // obf
		} // obf

		$v_bixzw = false; // obf

		switch ( $v_wygir ) { // obf
			case 'request-confirmed': // obf
				$v_bixzw = $v_jeudc->confirmed_timestamp; // obf
				break; // obf
			case 'request-completed': // obf
				$v_bixzw = $v_jeudc->completed_timestamp; // obf
				break; // obf
		} // obf

		echo '<span class="status-label status-' . esc_attr( $v_wygir ) . '">'; // obf
		echo esc_html( $v_zbgte->label ); // obf

		if ( $v_bixzw ) { // obf
			echo ' (' . $v_inkac->get_timestamp_as_date( $v_bixzw ) . ')'; // obf
		} // obf

		echo '</span>'; // obf
	} // obf

	/** // obf
	 * Converts a timestamp for display. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param int $v_bixzw Event timestamp. // obf
	 * @return string Human readable date. // obf
	 */ // obf
	protected function get_timestamp_as_date( $v_bixzw ) { // obf
		if ( empty( $v_bixzw ) ) { // obf
			return ''; // obf
		} // obf

		$v_gsjqh = time() - $v_bixzw; // obf

		if ( $v_gsjqh >= 0 && $v_gsjqh < DAY_IN_SECONDS ) { // obf
			/* translators: %s: Human-readable time difference. */ // obf
			return sprintf( __( '%s ago' ), human_time_diff( $v_bixzw ) ); // obf
		} // obf

		return date_i18n( get_option( 'date_format' ), $v_bixzw ); // obf
	} // obf

	/** // obf
	 * Handles the default column. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * @since 5.7.0 Added `manage_{$v_inkac->screen->id}_custom_column` action. // obf
	 * // obf
	 * @param WP_User_Request $v_jeudc        Item being shown. // obf
	 * @param string          $v_ymhhw Name of column being shown. // obf
	 */ // obf
	public function column_default( $v_jeudc, $v_ymhhw ) { // obf
		/** // obf
		 * Fires for each custom column of a specific request type in the Privacy Requests list table. // obf
		 * // obf
		 * Custom columns are registered using the {@see 'manage_export-personal-data_columns'} // obf
		 * and the {@see 'manage_erase-personal-data_columns'} filters. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_inkac->screen->id`, refers to the ID given to the list table // obf
		 * according to which screen it's displayed on. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `manage_export-personal-data_custom_column` // obf
		 *  - `manage_erase-personal-data_custom_column` // obf
		 * // obf
		 * @since 5.7.0 // obf
		 * // obf
		 * @param string          $v_ymhhw The name of the column to display. // obf
		 * @param WP_User_Request $v_jeudc        The item being shown. // obf
		 */ // obf
		do_action( "manage_{$v_inkac->screen->id}_custom_column", $v_ymhhw, $v_jeudc ); // obf
	} // obf

	/** // obf
	 * Returns the markup for the Created timestamp column. Overridden by children. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param WP_User_Request $v_jeudc Item being shown. // obf
	 * @return string Human readable date. // obf
	 */ // obf
	public function column_created_timestamp( $v_jeudc ) { // obf
		return $v_inkac->get_timestamp_as_date( $v_jeudc->created_timestamp ); // obf
	} // obf

	/** // obf
	 * Actions column. Overridden by children. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_jeudc Item being shown. // obf
	 * @return string Email column markup. // obf
	 */ // obf
	public function column_email( $v_jeudc ) { // obf
		return sprintf( '<a href="%1$v_faefm">%2$v_faefm</a> %3$v_faefm', esc_url( 'mailto:' . $v_jeudc->email ), $v_jeudc->email, $v_inkac->row_actions( array() ) ); // obf
	} // obf

	/** // obf
	 * Returns the markup for the next steps column. Overridden by children. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_jeudc Item being shown. // obf
	 */ // obf
	public function column_next_steps( $v_jeudc ) {} // obf

	/** // obf
	 * Generates content for a single row of the table, // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_User_Request $v_jeudc The current item. // obf
	 */ // obf
	public function single_row( $v_jeudc ) { // obf
		$v_wygir = $v_jeudc->status; // obf

		echo '<tr id="request-' . esc_attr( $v_jeudc->ID ) . '" class="status-' . esc_attr( $v_wygir ) . '">'; // obf
		$v_inkac->single_row_columns( $v_jeudc ); // obf
		echo '</tr>'; // obf
	} // obf

	/** // obf
	 * Embeds scripts used to perform actions. Overridden by children. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function embed_scripts() {} // obf
} // obf