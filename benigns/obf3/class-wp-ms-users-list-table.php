

<?php // obf
/** // obf
 * List Table API: WP_MS_Users_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying users in a list table for the network admin. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_MS_Users_List_Table extends WP_List_Table { // obf
	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( 'manage_network_users' ); // obf
	} // obf

	/** // obf
	 * @global string $v_vfhyo       List table view mode. // obf
	 * @global string $v_giwur // obf
	 * @global string $v_pguam // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_vfhyo, $v_giwur, $v_pguam; // obf

		if ( ! empty( $v_ovzsw['mode'] ) ) { // obf
			$v_vfhyo = 'excerpt' === $v_ovzsw['mode'] ? 'excerpt' : 'list'; // obf
			set_user_setting( 'network_users_list_mode', $v_vfhyo ); // obf
		} else { // obf
			$v_vfhyo = get_user_setting( 'network_users_list_mode', 'list' ); // obf
		} // obf

		$v_giwur = isset( $v_ovzsw['s'] ) ? wp_unslash( trim( $v_ovzsw['s'] ) ) : ''; // obf

		$v_phniy = $v_gdpyg->get_items_per_page( 'users_network_per_page' ); // obf

		$v_pguam = isset( $v_ovzsw['role'] ) ? $v_ovzsw['role'] : ''; // obf

		$v_doeri = $v_gdpyg->get_pagenum(); // obf

		$v_whfwg = array( // obf
			'number'  => $v_phniy, // obf
			'offset'  => ( $v_doeri - 1 ) * $v_phniy, // obf
			'search'  => $v_giwur, // obf
			'blog_id' => 0, // obf
			'fields'  => 'all_with_meta', // obf
		); // obf

		if ( wp_is_large_network( 'users' ) ) { // obf
			$v_whfwg['search'] = ltrim( $v_whfwg['search'], '*' ); // obf
		} elseif ( '' !== $v_whfwg['search'] ) { // obf
			$v_whfwg['search'] = trim( $v_whfwg['search'], '*' ); // obf
			$v_whfwg['search'] = '*' . $v_whfwg['search'] . '*'; // obf
		} // obf

		if ( 'super' === $v_pguam ) { // obf
			$v_whfwg['login__in'] = get_super_admins(); // obf
		} // obf

		/* // obf
		 * If the network is large and a search is not being performed, // obf
		 * show only the latest users with no paging in order to avoid // obf
		 * expensive count queries. // obf
		 */ // obf
		if ( ! $v_giwur && wp_is_large_network( 'users' ) ) { // obf
			if ( ! isset( $v_ovzsw['orderby'] ) ) { // obf
				$v_bkjoa['orderby']     = 'id'; // obf
				$v_ovzsw['orderby'] = 'id'; // obf
			} // obf
			if ( ! isset( $v_ovzsw['order'] ) ) { // obf
				$v_bkjoa['order']     = 'DESC'; // obf
				$v_ovzsw['order'] = 'DESC'; // obf
			} // obf
			$v_whfwg['count_total'] = false; // obf
		} // obf

		if ( isset( $v_ovzsw['orderby'] ) ) { // obf
			$v_whfwg['orderby'] = $v_ovzsw['orderby']; // obf
		} // obf

		if ( isset( $v_ovzsw['order'] ) ) { // obf
			$v_whfwg['order'] = $v_ovzsw['order']; // obf
		} // obf

		/** This filter is documented in wp-admin/includes/class-wp-users-list-table.php */ // obf
		$v_whfwg = apply_filters( 'users_list_table_query_args', $v_whfwg ); // obf

		// Query the user IDs for this page. // obf
		$v_cydbn = new WP_User_Query( $v_whfwg ); // obf

		$v_gdpyg->items = $v_cydbn->get_results(); // obf

		$v_gdpyg->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_cydbn->get_total(), // obf
				'per_page'    => $v_phniy, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		$v_rcfch = array(); // obf
		if ( current_user_can( 'delete_users' ) ) { // obf
			$v_rcfch['delete'] = __( 'Delete' ); // obf
		} // obf
		$v_rcfch['spam']    = _x( 'Mark as spam', 'user' ); // obf
		$v_rcfch['notspam'] = _x( 'Not spam', 'user' ); // obf

		return $v_rcfch; // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		_e( 'No users found.' ); // obf
	} // obf

	/** // obf
	 * @global string $v_pguam // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_pguam; // obf

		$v_zwyay  = get_user_count(); // obf
		$v_jsffp = get_super_admins(); // obf
		$v_ecxef = count( $v_jsffp ); // obf

		$v_lwtsm        = array(); // obf
		$v_lwtsm['all'] = array( // obf
			'url'     => network_admin_url( 'users.php' ), // obf
			'label'   => sprintf( // obf
				/* translators: Number of users. */ // obf
				_nx( // obf
					'All <span class="count">(%s)</span>', // obf
					'All <span class="count">(%s)</span>', // obf
					$v_zwyay, // obf
					'users' // obf
				), // obf
				number_format_i18n( $v_zwyay ) // obf
			), // obf
			'current' => 'super' !== $v_pguam, // obf
		); // obf

		$v_lwtsm['super'] = array( // obf
			'url'     => network_admin_url( 'users.php?role=super' ), // obf
			'label'   => sprintf( // obf
				/* translators: Number of users. */ // obf
				_n( // obf
					'Super Admin <span class="count">(%s)</span>', // obf
					'Super Admins <span class="count">(%s)</span>', // obf
					$v_ecxef // obf
				), // obf
				number_format_i18n( $v_ecxef ) // obf
			), // obf
			'current' => 'super' === $v_pguam, // obf
		); // obf

		return $v_gdpyg->get_views_links( $v_lwtsm ); // obf
	} // obf

	/** // obf
	 * @global string $v_vfhyo List table view mode. // obf
	 * // obf
	 * @param string $v_hrgit // obf
	 */ // obf
	protected function pagination( $v_hrgit ) { // obf
		global $v_vfhyo; // obf

		parent::pagination( $v_hrgit ); // obf

		if ( 'top' === $v_hrgit ) { // obf
			$v_gdpyg->view_switcher( $v_vfhyo ); // obf
		} // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		$v_zxyuo = array( // obf
			'cb'         => '<input type="checkbox" />', // obf
			'username'   => __( 'Username' ), // obf
			'name'       => __( 'Name' ), // obf
			'email'      => __( 'Email' ), // obf
			'registered' => _x( 'Registered', 'user' ), // obf
			'blogs'      => __( 'Sites' ), // obf
		); // obf
		/** // obf
		 * Filters the columns displayed in the Network Admin Users list table. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string[] $v_zxyuo An array of user columns. Default 'cb', 'username', // obf
		 *                                'name', 'email', 'registered', 'blogs'. // obf
		 */ // obf
		return apply_filters( 'wpmu_users_columns', $v_zxyuo ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		return array( // obf
			'username'   => array( 'login', false, __( 'Username' ), __( 'Table ordered by Username.' ), 'asc' ), // obf
			'name'       => array( 'name', false, __( 'Name' ), __( 'Table ordered by Name.' ) ), // obf
			'email'      => array( 'email', false, __( 'E-mail' ), __( 'Table ordered by E-mail.' ) ), // obf
			'registered' => array( 'id', false, _x( 'Registered', 'user' ), __( 'Table ordered by User Registered Date.' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Handles the checkbox column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_lobjm` to `$v_xsohl` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_User $v_xsohl The current WP_User object. // obf
	 */ // obf
	public function column_cb( $v_xsohl ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_lobjm = $v_xsohl; // obf

		if ( is_super_admin( $v_lobjm->ID ) ) { // obf
			return; // obf
		} // obf
		?> // obf
		<input type="checkbox" id="blog_<?php echo $v_lobjm->ID; ?>" name="allusers[]" value="<?php echo esc_attr( $v_lobjm->ID ); ?>" /> // obf
		<label for="blog_<?php echo $v_lobjm->ID; ?>"> // obf
			<span class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. %s: User login. */ // obf
			printf( __( 'Select %s' ), $v_lobjm->user_login ); // obf
			?> // obf
			</span> // obf
		</label> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Handles the ID column output. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_User $v_lobjm The current WP_User object. // obf
	 */ // obf
	public function column_id( $v_lobjm ) { // obf
		echo $v_lobjm->ID; // obf
	} // obf

	/** // obf
	 * Handles the username column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_User $v_lobjm The current WP_User object. // obf
	 */ // obf
	public function column_username( $v_lobjm ) { // obf
		$v_jsffp = get_super_admins(); // obf
		$v_ogryq       = get_avatar( $v_lobjm->user_email, 32 ); // obf

		echo $v_ogryq; // obf

		if ( current_user_can( 'edit_user', $v_lobjm->ID ) ) { // obf
			$v_looqe = esc_url( add_query_arg( 'wp_http_referer', urlencode( wp_unslash( $v_jerso['REQUEST_URI'] ) ), get_edit_user_link( $v_lobjm->ID ) ) ); // obf
			$v_rxein      = "<a href=\"{$v_looqe}\">{$v_lobjm->user_login}</a>"; // obf
		} else { // obf
			$v_rxein = $v_lobjm->user_login; // obf
		} // obf

		?> // obf
		<strong> // obf
			<?php // obf
			echo $v_rxein; // obf

			if ( in_array( $v_lobjm->user_login, $v_jsffp, true ) ) { // obf
				echo ' &mdash; ' . __( 'Super Admin' ); // obf
			} // obf
			?> // obf
		</strong> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Handles the name column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_User $v_lobjm The current WP_User object. // obf
	 */ // obf
	public function column_name( $v_lobjm ) { // obf
		if ( $v_lobjm->first_name && $v_lobjm->last_name ) { // obf
			printf( // obf
				/* translators: 1: User's first name, 2: Last name. */ // obf
				_x( '%1$v_nznbd %2$v_nznbd', 'Display name based on first name and last name' ), // obf
				$v_lobjm->first_name, // obf
				$v_lobjm->last_name // obf
			); // obf
		} elseif ( $v_lobjm->first_name ) { // obf
			echo $v_lobjm->first_name; // obf
		} elseif ( $v_lobjm->last_name ) { // obf
			echo $v_lobjm->last_name; // obf
		} else { // obf
			echo '<span aria-hidden="true">&#8212;</span><span class="screen-reader-text">' . // obf
				/* translators: Hidden accessibility text. */ // obf
				_x( 'Unknown', 'name' ) . // obf
			'</span>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the email column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_User $v_lobjm The current WP_User object. // obf
	 */ // obf
	public function column_email( $v_lobjm ) { // obf
		echo "<a href='" . esc_url( "mailto:$v_lobjm->user_email" ) . "'>$v_lobjm->user_email</a>"; // obf
	} // obf

	/** // obf
	 * Handles the registered date column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global string $v_vfhyo List table view mode. // obf
	 * // obf
	 * @param WP_User $v_lobjm The current WP_User object. // obf
	 */ // obf
	public function column_registered( $v_lobjm ) { // obf
		global $v_vfhyo; // obf
		if ( 'list' === $v_vfhyo ) { // obf
			$v_qufsm = __( 'Y/m/d' ); // obf
		} else { // obf
			$v_qufsm = __( 'Y/m/d g:i:s a' ); // obf
		} // obf
		echo mysql2date( $v_qufsm, $v_lobjm->user_registered ); // obf
	} // obf

	/** // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_User $v_lobjm // obf
	 * @param string  $v_ncvng // obf
	 * @param string  $v_kwgim // obf
	 * @param string  $v_zbjdy // obf
	 */ // obf
	protected function _column_blogs( $v_lobjm, $v_ncvng, $v_kwgim, $v_zbjdy ) { // obf
		echo '<td class="', $v_ncvng, ' has-row-actions" ', $v_kwgim, '>'; // obf
		echo $v_gdpyg->column_blogs( $v_lobjm ); // obf
		echo $v_gdpyg->handle_row_actions( $v_lobjm, 'blogs', $v_zbjdy ); // obf
		echo '</td>'; // obf
	} // obf

	/** // obf
	 * Handles the sites column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param WP_User $v_lobjm The current WP_User object. // obf
	 */ // obf
	public function column_blogs( $v_lobjm ) { // obf
		$v_luodq = get_blogs_of_user( $v_lobjm->ID, true ); // obf
		if ( ! is_array( $v_luodq ) ) { // obf
			return; // obf
		} // obf

		foreach ( $v_luodq as $v_bvndj ) { // obf
			if ( ! can_edit_network( $v_bvndj->site_id ) ) { // obf
				continue; // obf
			} // obf

			$v_yhhkc         = ( '/' === $v_bvndj->path ) ? '' : $v_bvndj->path; // obf
			$v_vpofx = array( 'site-' . $v_bvndj->site_id ); // obf

			/** // obf
			 * Filters the span class for a site listing on the multisite user list table. // obf
			 * // obf
			 * @since 5.2.0 // obf
			 * // obf
			 * @param string[] $v_vpofx Array of class names used within the span tag. // obf
			 *                               Default "site-#" with the site's network ID. // obf
			 * @param int      $v_srqht      Site ID. // obf
			 * @param int      $v_yjvtk   Network ID. // obf
			 * @param WP_User  $v_lobjm         WP_User object. // obf
			 */ // obf
			$v_vpofx = apply_filters( 'ms_user_list_site_class', $v_vpofx, $v_bvndj->userblog_id, $v_bvndj->site_id, $v_lobjm ); // obf

			if ( is_array( $v_vpofx ) && ! empty( $v_vpofx ) ) { // obf
				$v_vpofx = array_map( 'sanitize_html_class', array_unique( $v_vpofx ) ); // obf
				echo '<span class="' . esc_attr( implode( ' ', $v_vpofx ) ) . '">'; // obf
			} else { // obf
				echo '<span>'; // obf
			} // obf

			echo '<a href="' . esc_url( network_admin_url( 'site-info.php?id=' . $v_bvndj->userblog_id ) ) . '">' . str_replace( '.' . get_network()->domain, '', $v_bvndj->domain . $v_yhhkc ) . '</a>'; // obf
			echo ' <small class="row-actions">'; // obf

			$v_rcfch         = array(); // obf
			$v_rcfch['edit'] = '<a href="' . esc_url( network_admin_url( 'site-info.php?id=' . $v_bvndj->userblog_id ) ) . '">' . __( 'Edit' ) . '</a>'; // obf

			$v_eoyoe = ''; // obf
			if ( 1 === (int) $v_bvndj->spam ) { // obf
				$v_eoyoe .= 'site-spammed '; // obf
			} // obf
			if ( 1 === (int) $v_bvndj->mature ) { // obf
				$v_eoyoe .= 'site-mature '; // obf
			} // obf
			if ( 1 === (int) $v_bvndj->deleted ) { // obf
				$v_eoyoe .= 'site-deleted '; // obf
			} // obf
			if ( 1 === (int) $v_bvndj->archived ) { // obf
				$v_eoyoe .= 'site-archived '; // obf
			} // obf

			$v_rcfch['view'] = '<a class="' . $v_eoyoe . '" href="' . esc_url( get_home_url( $v_bvndj->userblog_id ) ) . '">' . __( 'View' ) . '</a>'; // obf

			/** // obf
			 * Filters the action links displayed next the sites a user belongs to // obf
			 * in the Network Admin Users list table. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param string[] $v_rcfch     An array of action links to be displayed. Default 'Edit', 'View'. // obf
			 * @param int      $v_oitql The site ID. // obf
			 */ // obf
			$v_rcfch = apply_filters( 'ms_user_list_site_actions', $v_rcfch, $v_bvndj->userblog_id ); // obf

			$v_pdxrv = count( $v_rcfch ); // obf

			$v_lnewt = 0; // obf

			foreach ( $v_rcfch as $v_allqd => $v_snqcg ) { // obf
				++$v_lnewt; // obf

				$v_jfeaj = ( $v_lnewt < $v_pdxrv ) ? ' | ' : ''; // obf

				echo "<span class='$v_allqd'>{$v_snqcg}{$v_jfeaj}</span>"; // obf
			} // obf

			echo '</small></span><br />'; // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the default column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_lobjm` to `$v_xsohl` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_User $v_xsohl        The current WP_User object. // obf
	 * @param string  $v_veceu The current column name. // obf
	 */ // obf
	public function column_default( $v_xsohl, $v_veceu ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_lobjm = $v_xsohl; // obf

		/** This filter is documented in wp-admin/includes/class-wp-users-list-table.php */ // obf
		$v_xtuua = apply_filters( 'manage_users_custom_column', '', $v_veceu, $v_lobjm->ID ); // obf

		/** // obf
		 * Filters the display output of custom columns in the Network Users list table. // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param string $v_kiuif      Custom column output. Default empty. // obf
		 * @param string $v_veceu Name of the custom column. // obf
		 * @param int    $v_pxqhd     ID of the currently-listed user. // obf
		 */ // obf
		echo apply_filters( 'manage_users-network_custom_column', $v_xtuua, $v_veceu, $v_lobjm->ID ); // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		foreach ( $v_gdpyg->items as $v_lobjm ) { // obf
			$v_eoyoe = ''; // obf

			$v_wrlwd = array( // obf
				'spam'    => 'site-spammed', // obf
				'deleted' => 'site-deleted', // obf
			); // obf

			foreach ( $v_wrlwd as $v_rbsnx => $v_ofvhi ) { // obf
				if ( $v_lobjm->$v_rbsnx ) { // obf
					$v_eoyoe .= " $v_ofvhi"; // obf
				} // obf
			} // obf

			?> // obf
			<tr class="<?php echo trim( $v_eoyoe ); ?>"> // obf
				<?php $v_gdpyg->single_row_columns( $v_lobjm ); ?> // obf
			</tr> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, 'username'. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'username'; // obf
	} // obf

	/** // obf
	 * Generates and displays row action links. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_lobjm` to `$v_xsohl` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_User $v_xsohl        User being acted upon. // obf
	 * @param string  $v_veceu Current column name. // obf
	 * @param string  $v_zbjdy     Primary column name. // obf
	 * @return string Row actions output for users in Multisite, or an empty string // obf
	 *                if the current column is not the primary column. // obf
	 */ // obf
	protected function handle_row_actions( $v_xsohl, $v_veceu, $v_zbjdy ) { // obf
		if ( $v_zbjdy !== $v_veceu ) { // obf
			return ''; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_lobjm = $v_xsohl; // obf

		$v_jsffp = get_super_admins(); // obf
		$v_rcfch      = array(); // obf

		if ( current_user_can( 'edit_user', $v_lobjm->ID ) ) { // obf
			$v_looqe       = esc_url( add_query_arg( 'wp_http_referer', urlencode( wp_unslash( $v_jerso['REQUEST_URI'] ) ), get_edit_user_link( $v_lobjm->ID ) ) ); // obf
			$v_rcfch['edit'] = '<a href="' . $v_looqe . '">' . __( 'Edit' ) . '</a>'; // obf
		} // obf

		if ( current_user_can( 'delete_user', $v_lobjm->ID ) && ! in_array( $v_lobjm->user_login, $v_jsffp, true ) ) { // obf
			$v_rcfch['delete'] = '<a href="' . esc_url( network_admin_url( add_query_arg( '_wp_http_referer', urlencode( wp_unslash( $v_jerso['REQUEST_URI'] ) ), wp_nonce_url( 'users.php', 'deleteuser' ) . '&amp;action=deleteuser&amp;id=' . $v_lobjm->ID ) ) ) . '" class="delete">' . __( 'Delete' ) . '</a>'; // obf
		} // obf

		/** // obf
		 * Filters the action links displayed under each user in the Network Admin Users list table. // obf
		 * // obf
		 * @since 3.2.0 // obf
		 * // obf
		 * @param string[] $v_rcfch An array of action links to be displayed. Default 'Edit', 'Delete'. // obf
		 * @param WP_User  $v_lobjm    WP_User object. // obf
		 */ // obf
		$v_rcfch = apply_filters( 'ms_user_row_actions', $v_rcfch, $v_lobjm ); // obf

		return $v_gdpyg->row_actions( $v_rcfch ); // obf
	} // obf
} // obf