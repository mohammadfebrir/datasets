

<?php // obf
/** // obf
 * List Table API: WP_MS_Sites_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying sites in a list table for the network admin. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_MS_Sites_List_Table extends WP_List_Table { // obf

	/** // obf
	 * Site status list. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_yqplg; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @param array $v_wljpw An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_wljpw = array() ) { // obf
		$v_xzvnb->status_list = array( // obf
			'archived' => array( 'site-archived', __( 'Archived' ) ), // obf
			'spam'     => array( 'site-spammed', _x( 'Spam', 'site' ) ), // obf
			'deleted'  => array( 'site-deleted', __( 'Deleted' ) ), // obf
			'mature'   => array( 'site-mature', __( 'Mature' ) ), // obf
		); // obf

		parent::__construct( // obf
			array( // obf
				'plural' => 'sites', // obf
				'screen' => isset( $v_wljpw['screen'] ) ? $v_wljpw['screen'] : null, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		return current_user_can( 'manage_sites' ); // obf
	} // obf

	/** // obf
	 * Prepares the list of sites for display. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global string $v_cvqpt List table view mode. // obf
	 * @global string $v_yrgfr // obf
	 * @global wpdb   $v_ghjki WordPress database abstraction object. // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_cvqpt, $v_yrgfr, $v_ghjki; // obf

		if ( ! empty( $v_cmkai['mode'] ) ) { // obf
			$v_cvqpt = 'excerpt' === $v_cmkai['mode'] ? 'excerpt' : 'list'; // obf
			set_user_setting( 'sites_list_mode', $v_cvqpt ); // obf
		} else { // obf
			$v_cvqpt = get_user_setting( 'sites_list_mode', 'list' ); // obf
		} // obf

		$v_qjgbi = $v_xzvnb->get_items_per_page( 'sites_network_per_page' ); // obf

		$v_ueaes = $v_xzvnb->get_pagenum(); // obf

		$v_yrgfr    = isset( $v_cmkai['s'] ) ? wp_unslash( trim( $v_cmkai['s'] ) ) : ''; // obf
		$v_emwdj = ''; // obf
		if ( str_contains( $v_yrgfr, '*' ) ) { // obf
			$v_emwdj = '*'; // obf
			$v_yrgfr    = trim( $v_yrgfr, '*' ); // obf
		} // obf

		/* // obf
		 * If the network is large and a search is not being performed, show only // obf
		 * the latest sites with no paging in order to avoid expensive count queries. // obf
		 */ // obf
		if ( ! $v_yrgfr && wp_is_large_network() ) { // obf
			if ( ! isset( $v_cmkai['orderby'] ) ) { // obf
				$v_brozj['orderby']     = ''; // obf
				$v_cmkai['orderby'] = ''; // obf
			} // obf
			if ( ! isset( $v_cmkai['order'] ) ) { // obf
				$v_brozj['order']     = 'DESC'; // obf
				$v_cmkai['order'] = 'DESC'; // obf
			} // obf
		} // obf

		$v_wljpw = array( // obf
			'number'     => (int) $v_qjgbi, // obf
			'offset'     => (int) ( ( $v_ueaes - 1 ) * $v_qjgbi ), // obf
			'network_id' => get_current_network_id(), // obf
		); // obf

		if ( empty( $v_yrgfr ) ) { // obf
			// Nothing to do. // obf
		} elseif ( preg_match( '/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $v_yrgfr ) // obf
			|| preg_match( '/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.?$/', $v_yrgfr ) // obf
			|| preg_match( '/^[0-9]{1,3}\.[0-9]{1,3}\.?$/', $v_yrgfr ) // obf
			|| preg_match( '/^[0-9]{1,3}\.$/', $v_yrgfr ) // obf
		) { // obf
			// IPv4 address. // obf
			$v_kzfge = $v_ghjki->get_col( // obf
				$v_ghjki->prepare( // obf
					"SELECT blog_id FROM {$v_ghjki->registration_log} WHERE {$v_ghjki->registration_log}.IP LIKE %s", // obf
					$v_ghjki->esc_like( $v_yrgfr ) . ( ! empty( $v_emwdj ) ? '%' : '' ) // obf
				) // obf
			); // obf

			if ( $v_kzfge ) { // obf
				$v_wljpw['site__in'] = $v_kzfge; // obf
			} // obf
		} elseif ( is_numeric( $v_yrgfr ) && empty( $v_emwdj ) ) { // obf
			$v_wljpw['ID'] = $v_yrgfr; // obf
		} else { // obf
			$v_wljpw['search'] = $v_yrgfr; // obf

			if ( ! is_subdomain_install() ) { // obf
				$v_wljpw['search_columns'] = array( 'path' ); // obf
			} // obf
		} // obf

		$v_yhulp = isset( $v_cmkai['orderby'] ) ? $v_cmkai['orderby'] : ''; // obf
		if ( 'registered' === $v_yhulp ) { // obf
			// 'registered' is a valid field name. // obf
		} elseif ( 'lastupdated' === $v_yhulp ) { // obf
			$v_yhulp = 'last_updated'; // obf
		} elseif ( 'blogname' === $v_yhulp ) { // obf
			if ( is_subdomain_install() ) { // obf
				$v_yhulp = 'domain'; // obf
			} else { // obf
				$v_yhulp = 'path'; // obf
			} // obf
		} elseif ( 'blog_id' === $v_yhulp ) { // obf
			$v_yhulp = 'id'; // obf
		} elseif ( ! $v_yhulp ) { // obf
			$v_yhulp = false; // obf
		} // obf

		$v_wljpw['orderby'] = $v_yhulp; // obf

		if ( $v_yhulp ) { // obf
			$v_wljpw['order'] = ( isset( $v_cmkai['order'] ) && 'DESC' === strtoupper( $v_cmkai['order'] ) ) ? 'DESC' : 'ASC'; // obf
		} // obf

		if ( wp_is_large_network() ) { // obf
			$v_wljpw['no_found_rows'] = true; // obf
		} else { // obf
			$v_wljpw['no_found_rows'] = false; // obf
		} // obf

		// Take into account the role the user has selected. // obf
		$v_xptdx = isset( $v_cmkai['status'] ) ? wp_unslash( trim( $v_cmkai['status'] ) ) : ''; // obf
		if ( in_array( $v_xptdx, array( 'public', 'archived', 'mature', 'spam', 'deleted' ), true ) ) { // obf
			$v_wljpw[ $v_xptdx ] = 1; // obf
		} // obf

		/** // obf
		 * Filters the arguments for the site query in the sites list table. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param array $v_wljpw An array of get_sites() arguments. // obf
		 */ // obf
		$v_wljpw = apply_filters( 'ms_sites_list_table_query_args', $v_wljpw ); // obf

		$v_bavxh = get_sites( $v_wljpw ); // obf
		if ( is_array( $v_bavxh ) ) { // obf
			update_site_cache( $v_bavxh ); // obf

			$v_xzvnb->items = array_slice( $v_bavxh, 0, $v_qjgbi ); // obf
		} // obf

		$v_eilgt = get_sites( // obf
			array_merge( // obf
				$v_wljpw, // obf
				array( // obf
					'count'  => true, // obf
					'offset' => 0, // obf
					'number' => 0, // obf
				) // obf
			) // obf
		); // obf

		$v_xzvnb->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_eilgt, // obf
				'per_page'    => $v_qjgbi, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 */ // obf
	public function no_items() { // obf
		_e( 'No sites found.' ); // obf
	} // obf

	/** // obf
	 * Gets links to filter sites by status. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_views() { // obf
		$v_cxotv = wp_count_sites(); // obf

		$v_ikiuq = array( // obf
			/* translators: %s: Number of sites. */ // obf
			'all'      => _nx_noop( // obf
				'All <span class="count">(%s)</span>', // obf
				'All <span class="count">(%s)</span>', // obf
				'sites' // obf
			), // obf

			/* translators: %s: Number of sites. */ // obf
			'public'   => _n_noop( // obf
				'Public <span class="count">(%s)</span>', // obf
				'Public <span class="count">(%s)</span>' // obf
			), // obf

			/* translators: %s: Number of sites. */ // obf
			'archived' => _n_noop( // obf
				'Archived <span class="count">(%s)</span>', // obf
				'Archived <span class="count">(%s)</span>' // obf
			), // obf

			/* translators: %s: Number of sites. */ // obf
			'mature'   => _n_noop( // obf
				'Mature <span class="count">(%s)</span>', // obf
				'Mature <span class="count">(%s)</span>' // obf
			), // obf

			/* translators: %s: Number of sites. */ // obf
			'spam'     => _nx_noop( // obf
				'Spam <span class="count">(%s)</span>', // obf
				'Spam <span class="count">(%s)</span>', // obf
				'sites' // obf
			), // obf

			/* translators: %s: Number of sites. */ // obf
			'deleted'  => _n_noop( // obf
				'Deleted <span class="count">(%s)</span>', // obf
				'Deleted <span class="count">(%s)</span>' // obf
			), // obf
		); // obf

		$v_rkgut       = array(); // obf
		$v_bqddc = isset( $v_cmkai['status'] ) ? wp_unslash( trim( $v_cmkai['status'] ) ) : ''; // obf
		$v_xulfm              = 'sites.php'; // obf

		foreach ( $v_ikiuq as $v_xptdx => $v_tswuk ) { // obf
			if ( (int) $v_cxotv[ $v_xptdx ] > 0 ) { // obf
				$v_knsmg = sprintf( // obf
					translate_nooped_plural( $v_tswuk, $v_cxotv[ $v_xptdx ] ), // obf
					number_format_i18n( $v_cxotv[ $v_xptdx ] ) // obf
				); // obf

				$v_gkres = 'all' === $v_xptdx ? $v_xulfm : add_query_arg( 'status', $v_xptdx, $v_xulfm ); // obf

				$v_rkgut[ $v_xptdx ] = array( // obf
					'url'     => esc_url( $v_gkres ), // obf
					'label'   => $v_knsmg, // obf
					'current' => $v_bqddc === $v_xptdx || ( '' === $v_bqddc && 'all' === $v_xptdx ), // obf
				); // obf
			} // obf
		} // obf

		return $v_xzvnb->get_views_links( $v_rkgut ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		$v_ubnhc = array(); // obf
		if ( current_user_can( 'delete_sites' ) ) { // obf
			$v_ubnhc['delete'] = __( 'Delete' ); // obf
		} // obf
		$v_ubnhc['spam']    = _x( 'Mark as spam', 'site' ); // obf
		$v_ubnhc['notspam'] = _x( 'Not spam', 'site' ); // obf

		return $v_ubnhc; // obf
	} // obf

	/** // obf
	 * @global string $v_cvqpt List table view mode. // obf
	 * // obf
	 * @param string $v_fnlnf The location of the pagination nav markup: Either 'top' or 'bottom'. // obf
	 */ // obf
	protected function pagination( $v_fnlnf ) { // obf
		global $v_cvqpt; // obf

		parent::pagination( $v_fnlnf ); // obf

		if ( 'top' === $v_fnlnf ) { // obf
			$v_xzvnb->view_switcher( $v_cvqpt ); // obf
		} // obf
	} // obf

	/** // obf
	 * Displays extra controls between bulk actions and pagination. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_fnlnf The location of the extra table nav markup: Either 'top' or 'bottom'. // obf
	 */ // obf
	protected function extra_tablenav( $v_fnlnf ) { // obf
		?> // obf
		<div class="alignleft actions"> // obf
		<?php // obf
		if ( 'top' === $v_fnlnf ) { // obf
			ob_start(); // obf

			/** // obf
			 * Fires before the Filter button on the MS sites list table. // obf
			 * // obf
			 * @since 5.3.0 // obf
			 * // obf
			 * @param string $v_fnlnf The location of the extra table nav markup: Either 'top' or 'bottom'. // obf
			 */ // obf
			do_action( 'restrict_manage_sites', $v_fnlnf ); // obf

			$v_huycy = ob_get_clean(); // obf

			if ( ! empty( $v_huycy ) ) { // obf
				echo $v_huycy; // obf
				submit_button( __( 'Filter' ), '', 'filter_action', false, array( 'id' => 'site-query-submit' ) ); // obf
			} // obf
		} // obf
		?> // obf
		</div> // obf
		<?php // obf
		/** // obf
		 * Fires immediately following the closing "actions" div in the tablenav for the // obf
		 * MS sites list table. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * // obf
		 * @param string $v_fnlnf The location of the extra table nav markup: Either 'top' or 'bottom'. // obf
		 */ // obf
		do_action( 'manage_sites_extra_tablenav', $v_fnlnf ); // obf
	} // obf

	/** // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		$v_zktzc = array( // obf
			'cb'          => '<input type="checkbox" />', // obf
			'blogname'    => __( 'URL' ), // obf
			'lastupdated' => __( 'Last Updated' ), // obf
			'registered'  => _x( 'Registered', 'site' ), // obf
			'users'       => __( 'Users' ), // obf
		); // obf

		if ( has_filter( 'wpmublogsaction' ) ) { // obf
			$v_zktzc['plugins'] = __( 'Actions' ); // obf
		} // obf

		/** // obf
		 * Filters the displayed site columns in Sites list table. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string[] $v_zktzc An array of displayed site columns. Default 'cb', // obf
		 *                               'blogname', 'lastupdated', 'registered', 'users'. // obf
		 */ // obf
		return apply_filters( 'wpmu_blogs_columns', $v_zktzc ); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	protected function get_sortable_columns() { // obf

		if ( is_subdomain_install() ) { // obf
			$v_qxbsq         = __( 'Domain' ); // obf
			$v_foekv = __( 'Table ordered by Site Domain Name.' ); // obf
		} else { // obf
			$v_qxbsq         = __( 'Path' ); // obf
			$v_foekv = __( 'Table ordered by Site Path.' ); // obf
		} // obf

		return array( // obf
			'blogname'    => array( 'blogname', false, $v_qxbsq, $v_foekv ), // obf
			'lastupdated' => array( 'lastupdated', true, __( 'Last Updated' ), __( 'Table ordered by Last Updated.' ) ), // obf
			'registered'  => array( 'blog_id', true, _x( 'Registered', 'site' ), __( 'Table ordered by Site Registered Date.' ), 'desc' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Handles the checkbox column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_wodvs` to `$v_wbytk` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param array $v_wbytk Current site. // obf
	 */ // obf
	public function column_cb( $v_wbytk ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_wodvs = $v_wbytk; // obf

		if ( ! is_main_site( $v_wodvs['blog_id'] ) ) : // obf
			$v_xaqvg = untrailingslashit( $v_wodvs['domain'] . $v_wodvs['path'] ); // obf
			?> // obf
			<input type="checkbox" id="blog_<?php echo $v_wodvs['blog_id']; ?>" name="allblogs[]" value="<?php echo esc_attr( $v_wodvs['blog_id'] ); ?>" /> // obf
			<label for="blog_<?php echo $v_wodvs['blog_id']; ?>"> // obf
				<span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: %s: Site URL. */ // obf
				printf( __( 'Select %s' ), $v_xaqvg ); // obf
				?> // obf
				</span> // obf
			</label> // obf
			<?php // obf
		endif; // obf
	} // obf

	/** // obf
	 * Handles the ID column output. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_wodvs Current site. // obf
	 */ // obf
	public function column_id( $v_wodvs ) { // obf
		echo $v_wodvs['blog_id']; // obf
	} // obf

	/** // obf
	 * Handles the site name column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global string $v_cvqpt List table view mode. // obf
	 * // obf
	 * @param array $v_wodvs Current site. // obf
	 */ // obf
	public function column_blogname( $v_wodvs ) { // obf
		global $v_cvqpt; // obf

		$v_xaqvg = untrailingslashit( $v_wodvs['domain'] . $v_wodvs['path'] ); // obf

		?> // obf
		<strong> // obf
			<?php // obf
			printf( // obf
				'<a href="%1$v_yrgfr" class="edit">%2$v_yrgfr</a>', // obf
				esc_url( network_admin_url( 'site-info.php?id=' . $v_wodvs['blog_id'] ) ), // obf
				$v_xaqvg // obf
			); // obf

			$v_xzvnb->site_states( $v_wodvs ); // obf
			?> // obf
		</strong> // obf
		<?php // obf
		if ( 'list' !== $v_cvqpt ) { // obf
			switch_to_blog( $v_wodvs['blog_id'] ); // obf
			echo '<p>'; // obf
			printf( // obf
				/* translators: 1: Site title, 2: Site tagline. */ // obf
				__( '%1$v_yrgfr &#8211; %2$v_yrgfr' ), // obf
				get_option( 'blogname' ), // obf
				'<em>' . get_option( 'blogdescription' ) . '</em>' // obf
			); // obf
			echo '</p>'; // obf
			restore_current_blog(); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the lastupdated column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global string $v_cvqpt List table view mode. // obf
	 * // obf
	 * @param array $v_wodvs Current site. // obf
	 */ // obf
	public function column_lastupdated( $v_wodvs ) { // obf
		global $v_cvqpt; // obf

		if ( 'list' === $v_cvqpt ) { // obf
			$v_dyitd = __( 'Y/m/d' ); // obf
		} else { // obf
			$v_dyitd = __( 'Y/m/d g:i:s a' ); // obf
		} // obf

		if ( '0000-00-00 00:00:00' === $v_wodvs['last_updated'] ) { // obf
			_e( 'Never' ); // obf
		} else { // obf
			echo mysql2date( $v_dyitd, $v_wodvs['last_updated'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the registered column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @global string $v_cvqpt List table view mode. // obf
	 * // obf
	 * @param array $v_wodvs Current site. // obf
	 */ // obf
	public function column_registered( $v_wodvs ) { // obf
		global $v_cvqpt; // obf

		if ( 'list' === $v_cvqpt ) { // obf
			$v_dyitd = __( 'Y/m/d' ); // obf
		} else { // obf
			$v_dyitd = __( 'Y/m/d g:i:s a' ); // obf
		} // obf

		if ( '0000-00-00 00:00:00' === $v_wodvs['registered'] ) { // obf
			echo '&#x2014;'; // obf
		} else { // obf
			echo mysql2date( $v_dyitd, $v_wodvs['registered'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles the users column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array $v_wodvs Current site. // obf
	 */ // obf
	public function column_users( $v_wodvs ) { // obf
		$v_nwbsm = wp_cache_get( $v_wodvs['blog_id'] . '_user_count', 'blog-details' ); // obf
		if ( ! $v_nwbsm ) { // obf
			$v_ytvlc = new WP_User_Query( // obf
				array( // obf
					'blog_id'     => $v_wodvs['blog_id'], // obf
					'fields'      => 'ID', // obf
					'number'      => 1, // obf
					'count_total' => true, // obf
				) // obf
			); // obf
			$v_nwbsm = $v_ytvlc->get_total(); // obf
			wp_cache_set( $v_wodvs['blog_id'] . '_user_count', $v_nwbsm, 'blog-details', 12 * HOUR_IN_SECONDS ); // obf
		} // obf

		printf( // obf
			'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
			esc_url( network_admin_url( 'site-users.php?id=' . $v_wodvs['blog_id'] ) ), // obf
			number_format_i18n( $v_nwbsm ) // obf
		); // obf
	} // obf

	/** // obf
	 * Handles the plugins column output. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array $v_wodvs Current site. // obf
	 */ // obf
	public function column_plugins( $v_wodvs ) { // obf
		if ( has_filter( 'wpmublogsaction' ) ) { // obf
			/** // obf
			 * Fires inside the auxiliary 'Actions' column of the Sites list table. // obf
			 * // obf
			 * By default this column is hidden unless something is hooked to the action. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param int $v_qosvj The site ID. // obf
			 */ // obf
			do_action( 'wpmublogsaction', $v_wodvs['blog_id'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Handles output for the default column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_wodvs` to `$v_wbytk` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param array  $v_wbytk        Current site. // obf
	 * @param string $v_gufub Current column name. // obf
	 */ // obf
	public function column_default( $v_wbytk, $v_gufub ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_wodvs = $v_wbytk; // obf

		/** // obf
		 * Fires for each registered custom column in the Sites list table. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string $v_gufub The name of the column to display. // obf
		 * @param int    $v_qosvj     The site ID. // obf
		 */ // obf
		do_action( 'manage_sites_custom_column', $v_gufub, $v_wodvs['blog_id'] ); // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		foreach ( $v_xzvnb->items as $v_wodvs ) { // obf
			$v_wodvs  = $v_wodvs->to_array(); // obf
			$v_ruyij = ''; // obf
			reset( $v_xzvnb->status_list ); // obf

			foreach ( $v_xzvnb->status_list as $v_xptdx => $v_jamfy ) { // obf
				if ( '1' === $v_wodvs[ $v_xptdx ] ) { // obf
					$v_ruyij = " class='{$v_jamfy[0]}'"; // obf
				} // obf
			} // obf

			echo "<tr{$v_ruyij}>"; // obf

			$v_xzvnb->single_row_columns( $v_wodvs ); // obf

			echo '</tr>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether to output comma-separated site states. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param array $v_ohhjm // obf
	 */ // obf
	protected function site_states( $v_ohhjm ) { // obf
		$v_ckzjf = array(); // obf

		// $v_ohhjm is still an array, so get the object. // obf
		$v_cpmga = WP_Site::get_instance( $v_ohhjm['blog_id'] ); // obf

		if ( is_main_site( $v_cpmga->id ) ) { // obf
			$v_ckzjf['main'] = __( 'Main' ); // obf
		} // obf

		reset( $v_xzvnb->status_list ); // obf

		$v_zptbp = isset( $v_cmkai['status'] ) ? wp_unslash( trim( $v_cmkai['status'] ) ) : ''; // obf
		foreach ( $v_xzvnb->status_list as $v_xptdx => $v_jamfy ) { // obf
			if ( '1' === $v_cpmga->{$v_xptdx} && $v_zptbp !== $v_xptdx ) { // obf
				$v_ckzjf[ $v_jamfy[0] ] = $v_jamfy[1]; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the default site display states for items in the Sites list table. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * // obf
		 * @param string[] $v_ckzjf An array of site states. Default 'Main', // obf
		 *                              'Archived', 'Mature', 'Spam', 'Deleted'. // obf
		 * @param WP_Site  $v_ohhjm        The current site object. // obf
		 */ // obf
		$v_ckzjf = apply_filters( 'display_site_states', $v_ckzjf, $v_cpmga ); // obf

		if ( ! empty( $v_ckzjf ) ) { // obf
			$v_kozkh = count( $v_ckzjf ); // obf

			$v_mvvla = 0; // obf

			echo ' &mdash; '; // obf

			foreach ( $v_ckzjf as $v_tqnxa ) { // obf
				++$v_mvvla; // obf

				$v_smjjy = ( $v_mvvla < $v_kozkh ) ? ', ' : ''; // obf

				echo "<span class='post-state'>{$v_tqnxa}{$v_smjjy}</span>"; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Gets the name of the default primary column. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return string Name of the default primary column, in this case, 'blogname'. // obf
	 */ // obf
	protected function get_default_primary_column_name() { // obf
		return 'blogname'; // obf
	} // obf

	/** // obf
	 * Generates and displays row action links. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 5.9.0 Renamed `$v_wodvs` to `$v_wbytk` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param array  $v_wbytk        Site being acted upon. // obf
	 * @param string $v_gufub Current column name. // obf
	 * @param string $v_vgafg     Primary column name. // obf
	 * @return string Row actions output for sites in Multisite, or an empty string // obf
	 *                if the current column is not the primary column. // obf
	 */ // obf
	protected function handle_row_actions( $v_wbytk, $v_gufub, $v_vgafg ) { // obf
		if ( $v_vgafg !== $v_gufub ) { // obf
			return ''; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_wodvs = $v_wbytk; // obf

		$v_xaqvg = untrailingslashit( $v_wodvs['domain'] . $v_wodvs['path'] ); // obf

		// Preordered. // obf
		$v_ubnhc = array( // obf
			'edit'       => '', // obf
			'backend'    => '', // obf
			'activate'   => '', // obf
			'deactivate' => '', // obf
			'archive'    => '', // obf
			'unarchive'  => '', // obf
			'spam'       => '', // obf
			'unspam'     => '', // obf
			'delete'     => '', // obf
			'visit'      => '', // obf
		); // obf

		$v_ubnhc['edit'] = sprintf( // obf
			'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
			esc_url( network_admin_url( 'site-info.php?id=' . $v_wodvs['blog_id'] ) ), // obf
			__( 'Edit' ) // obf
		); // obf

		$v_ubnhc['backend'] = sprintf( // obf
			'<a href="%1$v_yrgfr" class="edit">%2$v_yrgfr</a>', // obf
			esc_url( get_admin_url( $v_wodvs['blog_id'] ) ), // obf
			__( 'Dashboard' ) // obf
		); // obf

		if ( ! is_main_site( $v_wodvs['blog_id'] ) ) { // obf
			if ( '1' === $v_wodvs['deleted'] ) { // obf
				$v_ubnhc['activate'] = sprintf( // obf
					'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
					esc_url( // obf
						wp_nonce_url( // obf
							network_admin_url( 'sites.php?action=confirm&amp;action2=activateblog&amp;id=' . $v_wodvs['blog_id'] ), // obf
							'activateblog_' . $v_wodvs['blog_id'] // obf
						) // obf
					), // obf
					_x( 'Activate', 'site' ) // obf
				); // obf
			} else { // obf
				$v_ubnhc['deactivate'] = sprintf( // obf
					'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
					esc_url( // obf
						wp_nonce_url( // obf
							network_admin_url( 'sites.php?action=confirm&amp;action2=deactivateblog&amp;id=' . $v_wodvs['blog_id'] ), // obf
							'deactivateblog_' . $v_wodvs['blog_id'] // obf
						) // obf
					), // obf
					__( 'Deactivate' ) // obf
				); // obf
			} // obf

			if ( '1' === $v_wodvs['archived'] ) { // obf
				$v_ubnhc['unarchive'] = sprintf( // obf
					'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
					esc_url( // obf
						wp_nonce_url( // obf
							network_admin_url( 'sites.php?action=confirm&amp;action2=unarchiveblog&amp;id=' . $v_wodvs['blog_id'] ), // obf
							'unarchiveblog_' . $v_wodvs['blog_id'] // obf
						) // obf
					), // obf
					__( 'Unarchive' ) // obf
				); // obf
			} else { // obf
				$v_ubnhc['archive'] = sprintf( // obf
					'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
					esc_url( // obf
						wp_nonce_url( // obf
							network_admin_url( 'sites.php?action=confirm&amp;action2=archiveblog&amp;id=' . $v_wodvs['blog_id'] ), // obf
							'archiveblog_' . $v_wodvs['blog_id'] // obf
						) // obf
					), // obf
					_x( 'Archive', 'verb; site' ) // obf
				); // obf
			} // obf

			if ( '1' === $v_wodvs['spam'] ) { // obf
				$v_ubnhc['unspam'] = sprintf( // obf
					'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
					esc_url( // obf
						wp_nonce_url( // obf
							network_admin_url( 'sites.php?action=confirm&amp;action2=unspamblog&amp;id=' . $v_wodvs['blog_id'] ), // obf
							'unspamblog_' . $v_wodvs['blog_id'] // obf
						) // obf
					), // obf
					_x( 'Not Spam', 'site' ) // obf
				); // obf
			} else { // obf
				$v_ubnhc['spam'] = sprintf( // obf
					'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
					esc_url( // obf
						wp_nonce_url( // obf
							network_admin_url( 'sites.php?action=confirm&amp;action2=spamblog&amp;id=' . $v_wodvs['blog_id'] ), // obf
							'spamblog_' . $v_wodvs['blog_id'] // obf
						) // obf
					), // obf
					_x( 'Spam', 'site' ) // obf
				); // obf
			} // obf

			if ( current_user_can( 'delete_site', $v_wodvs['blog_id'] ) ) { // obf
				$v_ubnhc['delete'] = sprintf( // obf
					'<a href="%1$v_yrgfr">%2$v_yrgfr</a>', // obf
					esc_url( // obf
						wp_nonce_url( // obf
							network_admin_url( 'sites.php?action=confirm&amp;action2=deleteblog&amp;id=' . $v_wodvs['blog_id'] ), // obf
							'deleteblog_' . $v_wodvs['blog_id'] // obf
						) // obf
					), // obf
					__( 'Delete' ) // obf
				); // obf
			} // obf
		} // obf

		$v_ubnhc['visit'] = sprintf( // obf
			'<a href="%1$v_yrgfr" rel="bookmark">%2$v_yrgfr</a>', // obf
			esc_url( get_home_url( $v_wodvs['blog_id'], '/' ) ), // obf
			__( 'Visit' ) // obf
		); // obf

		/** // obf
		 * Filters the action links displayed for each site in the Sites list table. // obf
		 * // obf
		 * The 'Edit', 'Dashboard', 'Delete', and 'Visit' links are displayed by // obf
		 * default for each site. The site's status determines whether to show the // obf
		 * 'Activate' or 'Deactivate' link, 'Unarchive' or 'Archive' links, and // obf
		 * 'Not Spam' or 'Spam' link for each site. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[] $v_ubnhc  An array of action links to be displayed. // obf
		 * @param int      $v_qosvj  The site ID. // obf
		 * @param string   $v_xaqvg Site path, formatted depending on whether it is a sub-domain // obf
		 *                           or subdirectory multisite installation. // obf
		 */ // obf
		$v_ubnhc = apply_filters( 'manage_sites_action_links', array_filter( $v_ubnhc ), $v_wodvs['blog_id'], $v_xaqvg ); // obf

		return $v_xzvnb->row_actions( $v_ubnhc ); // obf
	} // obf
} // obf