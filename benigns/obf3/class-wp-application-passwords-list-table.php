

<?php // obf
/** // obf
 * List Table API: WP_Application_Passwords_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 5.6.0 // obf
 */ // obf

/** // obf
 * Class for displaying the list of application password items. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Application_Passwords_List_Table extends WP_List_Table { // obf

	/** // obf
	 * Gets the list of columns. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		return array( // obf
			'name'      => __( 'Name' ), // obf
			'created'   => __( 'Created' ), // obf
			'last_used' => __( 'Last Used' ), // obf
			'last_ip'   => __( 'Last IP' ), // obf
			'revoke'    => __( 'Revoke' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares the list of items for displaying. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @global int $v_sqheq User ID. // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_sqheq; // obf
		$v_qeoqo->items = array_reverse( WP_Application_Passwords::get_user_application_passwords( $v_sqheq ) ); // obf
	} // obf

	/** // obf
	 * Handles the name column output. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_jymuu The current application password item. // obf
	 */ // obf
	public function column_name( $v_jymuu ) { // obf
		echo esc_html( $v_jymuu['name'] ); // obf
	} // obf

	/** // obf
	 * Handles the created column output. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_jymuu The current application password item. // obf
	 */ // obf
	public function column_created( $v_jymuu ) { // obf
		if ( empty( $v_jymuu['created'] ) ) { // obf
			echo '&mdash;'; // obf
		} else { // obf
			echo date_i18n( __( 'F j, Y' ), $v_jymuu['created'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the last used column output. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_jymuu The current application password item. // obf
	 */ // obf
	public function column_last_used( $v_jymuu ) { // obf
		if ( empty( $v_jymuu['last_used'] ) ) { // obf
			echo '&mdash;'; // obf
		} else { // obf
			echo date_i18n( __( 'F j, Y' ), $v_jymuu['last_used'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the last ip column output. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_jymuu The current application password item. // obf
	 */ // obf
	public function column_last_ip( $v_jymuu ) { // obf
		if ( empty( $v_jymuu['last_ip'] ) ) { // obf
			echo '&mdash;'; // obf
		} else { // obf
			echo $v_jymuu['last_ip']; // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the revoke column output. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_jymuu The current application password item. // obf
	 */ // obf
	public function column_revoke( $v_jymuu ) { // obf
		$v_iynka = 'revoke-application-password-' . $v_jymuu['uuid']; // obf
		printf( // obf
			'<button type="button" name="%1$v_udgnd" id="%1$v_udgnd" class="button delete" aria-label="%2$v_udgnd">%3$v_udgnd</button>', // obf
			esc_attr( $v_iynka ), // obf
			/* translators: %s: the application password's given name. */ // obf
			esc_attr( sprintf( __( 'Revoke "%s"' ), $v_jymuu['name'] ) ), // obf
			__( 'Revoke' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Generates content for a single row of the table // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array  $v_jymuu        The current item. // obf
	 * @param string $v_lhylw The current column name. // obf
	 */ // obf
	protected function column_default( $v_jymuu, $v_lhylw ) { // obf
		/** // obf
		 * Fires for each custom column in the Application Passwords list table. // obf
		 * // obf
		 * Custom columns are registered using the {@see 'manage_application-passwords-user_columns'} filter. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param string $v_lhylw Name of the custom column. // obf
		 * @param array  $v_jymuu        The application password item. // obf
		 */ // obf
		do_action( "manage_{$v_qeoqo->screen->id}_custom_column", $v_lhylw, $v_jymuu ); // obf
	} // obf

	/** // obf
	 * Generates custom table navigation to prevent conflicting nonces. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param string $v_nvhsz The location of the bulk actions: Either 'top' or 'bottom'. // obf
	 */ // obf
	protected function display_tablenav( $v_nvhsz ) { // obf
		?> // obf
		<div class="tablenav <?php echo esc_attr( $v_nvhsz ); ?>"> // obf
			<?php if ( 'bottom' === $v_nvhsz ) : ?> // obf
				<div class="alignright"> // obf
					<button type="button" name="revoke-all-application-passwords" id="revoke-all-application-passwords" class="button delete"><?php _e( 'Revoke all application passwords' ); ?></button> // obf
				</div> // obf
			<?php endif; ?> // obf
			<div class="alignleft actions bulkactions"> // obf
				<?php $v_qeoqo->bulk_actions( $v_nvhsz ); ?> // obf
			</div> // obf
			<?php // obf
			$v_qeoqo->extra_tablenav( $v_nvhsz ); // obf
			$v_qeoqo->pagination( $v_nvhsz ); // obf
			?> // obf
			<br class="clear" /> // obf
		</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Generates content for a single row of the table. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_jymuu The current item. // obf
	 */ // obf
	public function single_row( $v_jymuu ) { // obf
		echo '<tr data-uuid="' . esc_attr( $v_jymuu['uuid'] ) . '">'; // obf
		$v_qeoqo->single_row_columns( $v_jymuu ); // obf
		echo '</tr>'; // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, 'name'. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'name'; // obf
	} // obf

	/** // obf
	 * Prints the JavaScript template for the new row item. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	public function print_js_template_row() { // obf
		list( $v_uqrah, $v_cjltc, , $v_jikjb ) = $v_qeoqo->get_column_info(); // obf

		echo '<tr data-uuid="{{ data.uuid }}">'; // obf

		foreach ( $v_uqrah as $v_lhylw => $v_kkiqf ) { // obf
			$v_hofeo = $v_jikjb === $v_lhylw; // obf
			$v_jobiv    = "{$v_lhylw} column-{$v_lhylw}"; // obf

			if ( $v_hofeo ) { // obf
				$v_jobiv .= ' has-row-actions column-primary'; // obf
			} // obf

			if ( in_array( $v_lhylw, $v_cjltc, true ) ) { // obf
				$v_jobiv .= ' hidden'; // obf
			} // obf

			printf( '<td class="%s" data-colname="%s">', esc_attr( $v_jobiv ), esc_attr( wp_strip_all_tags( $v_kkiqf ) ) ); // obf

			switch ( $v_lhylw ) { // obf
				case 'name': // obf
					echo '{{ data.name }}'; // obf
					break; // obf
				case 'created': // obf
					// JSON encoding automatically doubles backslashes to ensure they don't get lost when printing the inline JS. // obf
					echo '<# print( wp.date.dateI18n( ' . wp_json_encode( __( 'F j, Y' ) ) . ', data.created ) ) #>'; // obf
					break; // obf
				case 'last_used': // obf
					echo '<# print( data.last_used !== null ? wp.date.dateI18n( ' . wp_json_encode( __( 'F j, Y' ) ) . ", data.last_used ) : '—' ) #>"; // obf
					break; // obf
				case 'last_ip': // obf
					echo "{{ data.last_ip || '—' }}"; // obf
					break; // obf
				case 'revoke': // obf
					printf( // obf
						'<button type="button" class="button delete" aria-label="%1$v_udgnd">%2$v_udgnd</button>', // obf
						/* translators: %s: the application password's given name. */ // obf
						esc_attr( sprintf( __( 'Revoke "%s"' ), '{{ data.name }}' ) ), // obf
						esc_html__( 'Revoke' ) // obf
					); // obf
					break; // obf
				default: // obf
					/** // obf
					 * Fires in the JavaScript row template for each custom column in the Application Passwords list table. // obf
					 * // obf
					 * Custom columns are registered using the {@see 'manage_application-passwords-user_columns'} filter. // obf
					 * // obf
					 * @since 5.6.0 // obf
					 * // obf
					 * @param string $v_lhylw Name of the custom column. // obf
					 */ // obf
					do_action( "manage_{$v_qeoqo->screen->id}_custom_column_js_template", $v_lhylw ); // obf
					break; // obf
			} // obf

			if ( $v_hofeo ) { // obf
				echo '<button type="button" class="toggle-row"><span class="screen-reader-text">' . // obf
					/* translators: Hidden accessibility text. */ // obf
					__( 'Show more details' ) . // obf
				'</span></button>'; // obf
			} // obf

			echo '</td>'; // obf
		} // obf

		echo '</tr>'; // obf
	} // obf
} // obf