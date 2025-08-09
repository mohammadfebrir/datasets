

<?php // obf
/** // obf
 * List Table API: WP_Users_List_Table class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Core class used to implement displaying users in a list table. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @see WP_List_Table // obf
 */ // obf
class WP_Users_List_Table extends WP_List_Table { // obf

	/** // obf
	 * Site ID to generate the Users list table for. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_pwovo; // obf

	/** // obf
	 * Whether or not the current Users list table is for Multisite. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_adley; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @see WP_List_Table::__construct() for more information on default arguments. // obf
	 * // obf
	 * @param array $v_gatfi An associative array of arguments. // obf
	 */ // obf
	public function __construct( $v_gatfi = array() ) { // obf
		parent::__construct( // obf
			array( // obf
				'singular' => 'user', // obf
				'plural'   => 'users', // obf
				'screen'   => isset( $v_gatfi['screen'] ) ? $v_gatfi['screen'] : null, // obf
			) // obf
		); // obf

		$v_wktlr->is_site_users = 'site-users-network' === $v_wktlr->screen->id; // obf

		if ( $v_wktlr->is_site_users ) { // obf
			$v_wktlr->site_id = isset( $v_cyglw['id'] ) ? (int) $v_cyglw['id'] : 0; // obf
		} // obf
	} // obf

	/** // obf
	 * Checks the current user's permissions. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function ajax_user_can() { // obf
		if ( $v_wktlr->is_site_users ) { // obf
			return current_user_can( 'manage_sites' ); // obf
		} else { // obf
			return current_user_can( 'list_users' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Prepares the users list for display. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global string $v_kwshl // obf
	 * @global string $v_kkngu // obf
	 */ // obf
	public function prepare_items() { // obf
		global $v_kwshl, $v_kkngu; // obf

		$v_kkngu = isset( $v_cyglw['s'] ) ? wp_unslash( trim( $v_cyglw['s'] ) ) : ''; // obf

		$v_kwshl = isset( $v_cyglw['role'] ) ? $v_cyglw['role'] : ''; // obf

		$v_jtecl       = ( $v_wktlr->is_site_users ) ? 'site_users_network_per_page' : 'users_per_page'; // obf
		$v_ikwjo = $v_wktlr->get_items_per_page( $v_jtecl ); // obf

		$v_iqqip = $v_wktlr->get_pagenum(); // obf

		if ( 'none' === $v_kwshl ) { // obf
			$v_gatfi = array( // obf
				'number'  => $v_ikwjo, // obf
				'offset'  => ( $v_iqqip - 1 ) * $v_ikwjo, // obf
				'include' => wp_get_users_with_no_role( $v_wktlr->site_id ), // obf
				'search'  => $v_kkngu, // obf
				'fields'  => 'all_with_meta', // obf
			); // obf
		} else { // obf
			$v_gatfi = array( // obf
				'number' => $v_ikwjo, // obf
				'offset' => ( $v_iqqip - 1 ) * $v_ikwjo, // obf
				'role'   => $v_kwshl, // obf
				'search' => $v_kkngu, // obf
				'fields' => 'all_with_meta', // obf
			); // obf
		} // obf

		if ( '' !== $v_gatfi['search'] ) { // obf
			$v_gatfi['search'] = '*' . $v_gatfi['search'] . '*'; // obf
		} // obf

		if ( $v_wktlr->is_site_users ) { // obf
			$v_gatfi['blog_id'] = $v_wktlr->site_id; // obf
		} // obf

		if ( isset( $v_cyglw['orderby'] ) ) { // obf
			$v_gatfi['orderby'] = $v_cyglw['orderby']; // obf
		} // obf

		if ( isset( $v_cyglw['order'] ) ) { // obf
			$v_gatfi['order'] = $v_cyglw['order']; // obf
		} // obf

		/** // obf
		 * Filters the query arguments used to retrieve users for the current users list table. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array $v_gatfi Arguments passed to WP_User_Query to retrieve items for the current // obf
		 *                    users list table. // obf
		 */ // obf
		$v_gatfi = apply_filters( 'users_list_table_query_args', $v_gatfi ); // obf

		// Query the user IDs for this page. // obf
		$v_zszri = new WP_User_Query( $v_gatfi ); // obf

		$v_wktlr->items = $v_zszri->get_results(); // obf

		$v_wktlr->set_pagination_args( // obf
			array( // obf
				'total_items' => $v_zszri->get_total(), // obf
				'per_page'    => $v_ikwjo, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Outputs 'no users' message. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function no_items() { // obf
		_e( 'No users found.' ); // obf
	} // obf

	/** // obf
	 * Returns an associative array listing all the views that can be used // obf
	 * with this table. // obf
	 * // obf
	 * Provides a list of roles and user count for that role for easy // obf
	 * filtering of the user table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @global string $v_kwshl // obf
	 * // obf
	 * @return string[] An array of HTML links keyed by their view. // obf
	 */ // obf
	protected function get_views() { // obf
		global $v_kwshl; // obf

		$v_lrxxz = wp_roles(); // obf

		$v_kjcix = ! wp_is_large_user_count(); // obf

		if ( $v_wktlr->is_site_users ) { // obf
			$v_mmzmx = 'site-users.php?id=' . $v_wktlr->site_id; // obf
		} else { // obf
			$v_mmzmx = 'users.php'; // obf
		} // obf

		$v_cputv  = array(); // obf
		$v_bbqws = array(); // obf
		$v_grvht    = __( 'All' ); // obf

		if ( $v_kjcix ) { // obf
			if ( $v_wktlr->is_site_users ) { // obf
				switch_to_blog( $v_wktlr->site_id ); // obf
				$v_ezxyc = count_users( 'time', $v_wktlr->site_id ); // obf
				restore_current_blog(); // obf
			} else { // obf
				$v_ezxyc = count_users(); // obf
			} // obf

			$v_bnpsf = $v_ezxyc['total_users']; // obf
			$v_bbqws =& $v_ezxyc['avail_roles']; // obf
			unset( $v_ezxyc ); // obf

			$v_grvht = sprintf( // obf
				/* translators: %s: Number of users. */ // obf
				_nx( // obf
					'All <span class="count">(%s)</span>', // obf
					'All <span class="count">(%s)</span>', // obf
					$v_bnpsf, // obf
					'users' // obf
				), // obf
				number_format_i18n( $v_bnpsf ) // obf
			); // obf
		} // obf

		$v_cputv['all'] = array( // obf
			'url'     => $v_mmzmx, // obf
			'label'   => $v_grvht, // obf
			'current' => empty( $v_kwshl ), // obf
		); // obf

		foreach ( $v_lrxxz->get_names() as $v_qjyqb => $v_afjrv ) { // obf
			if ( $v_kjcix && ! isset( $v_bbqws[ $v_qjyqb ] ) ) { // obf
				continue; // obf
			} // obf

			$v_afjrv = translate_user_role( $v_afjrv ); // obf
			if ( $v_kjcix ) { // obf
				$v_afjrv = sprintf( // obf
					/* translators: 1: User role name, 2: Number of users. */ // obf
					__( '%1$v_pwfcs <span class="count">(%2$v_pwfcs)</span>' ), // obf
					$v_afjrv, // obf
					number_format_i18n( $v_bbqws[ $v_qjyqb ] ) // obf
				); // obf
			} // obf

			$v_cputv[ $v_qjyqb ] = array( // obf
				'url'     => esc_url( add_query_arg( 'role', $v_qjyqb, $v_mmzmx ) ), // obf
				'label'   => $v_afjrv, // obf
				'current' => $v_qjyqb === $v_kwshl, // obf
			); // obf
		} // obf

		if ( ! empty( $v_bbqws['none'] ) ) { // obf

			$v_afjrv = __( 'No role' ); // obf
			$v_afjrv = sprintf( // obf
				/* translators: 1: User role name, 2: Number of users. */ // obf
				__( '%1$v_pwfcs <span class="count">(%2$v_pwfcs)</span>' ), // obf
				$v_afjrv, // obf
				number_format_i18n( $v_bbqws['none'] ) // obf
			); // obf

			$v_cputv['none'] = array( // obf
				'url'     => esc_url( add_query_arg( 'role', 'none', $v_mmzmx ) ), // obf
				'label'   => $v_afjrv, // obf
				'current' => 'none' === $v_kwshl, // obf
			); // obf
		} // obf

		return $v_wktlr->get_views_links( $v_cputv ); // obf
	} // obf

	/** // obf
	 * Retrieves an associative array of bulk actions available on this table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return array Array of bulk action labels keyed by their action. // obf
	 */ // obf
	protected function get_bulk_actions() { // obf
		$v_wzoco = array(); // obf

		if ( is_multisite() ) { // obf
			if ( current_user_can( 'remove_users' ) ) { // obf
				$v_wzoco['remove'] = __( 'Remove' ); // obf
			} // obf
		} else { // obf
			if ( current_user_can( 'delete_users' ) ) { // obf
				$v_wzoco['delete'] = __( 'Delete' ); // obf
			} // obf
		} // obf

		// Add a password reset link to the bulk actions dropdown. // obf
		if ( current_user_can( 'edit_users' ) ) { // obf
			$v_wzoco['resetpassword'] = __( 'Send password reset' ); // obf
		} // obf

		return $v_wzoco; // obf
	} // obf

	/** // obf
	 * Outputs the controls to allow user roles to be changed in bulk. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_iruaa Whether this is being invoked above ("top") // obf
	 *                      or below the table ("bottom"). // obf
	 */ // obf
	protected function extra_tablenav( $v_iruaa ) { // obf
		$v_gvimv        = 'bottom' === $v_iruaa ? 'new_role2' : 'new_role'; // obf
		$v_nfgdk = 'bottom' === $v_iruaa ? 'changeit2' : 'changeit'; // obf
		?> // obf
	<div class="alignleft actions"> // obf
		<?php if ( current_user_can( 'promote_users' ) && $v_wktlr->has_items() ) : ?> // obf
		<label class="screen-reader-text" for="<?php echo $v_gvimv; ?>"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Change role to&hellip;' ); // obf
			?> // obf
		</label> // obf
		<select name="<?php echo $v_gvimv; ?>" id="<?php echo $v_gvimv; ?>"> // obf
			<option value=""><?php _e( 'Change role to&hellip;' ); ?></option> // obf
			<?php wp_dropdown_roles(); ?> // obf
			<option value="none"><?php _e( '&mdash; No role for this site &mdash;' ); ?></option> // obf
		</select> // obf
			<?php // obf
			submit_button( __( 'Change' ), '', $v_nfgdk, false ); // obf
		endif; // obf

		/** // obf
		 * Fires just before the closing div containing the bulk role-change controls // obf
		 * in the Users list table. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * @since 4.6.0 The `$v_iruaa` parameter was added. // obf
		 * // obf
		 * @param string $v_iruaa The location of the extra table nav markup: 'top' or 'bottom'. // obf
		 */ // obf
		do_action( 'restrict_manage_users', $v_iruaa ); // obf
		?> // obf
		</div> // obf
		<?php // obf
		/** // obf
		 * Fires immediately following the closing "actions" div in the tablenav for the users // obf
		 * list table. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param string $v_iruaa The location of the extra table nav markup: 'top' or 'bottom'. // obf
		 */ // obf
		do_action( 'manage_users_extra_tablenav', $v_iruaa ); // obf
	} // obf

	/** // obf
	 * Captures the bulk action required, and return it. // obf
	 * // obf
	 * Overridden from the base class implementation to capture // obf
	 * the role change drop-down. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return string The bulk action required. // obf
	 */ // obf
	public function current_action() { // obf
		if ( isset( $v_cyglw['changeit'] ) ) { // obf
			return 'promote'; // obf
		} // obf

		return parent::current_action(); // obf
	} // obf

	/** // obf
	 * Gets a list of columns for the list table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return string[] Array of column titles keyed by their column name. // obf
	 */ // obf
	public function get_columns() { // obf
		$v_urdux = array( // obf
			'cb'       => '<input type="checkbox" />', // obf
			'username' => __( 'Username' ), // obf
			'name'     => __( 'Name' ), // obf
			'email'    => __( 'Email' ), // obf
			'role'     => __( 'Role' ), // obf
			'posts'    => _x( 'Posts', 'post type general name' ), // obf
		); // obf

		if ( $v_wktlr->is_site_users ) { // obf
			unset( $v_urdux['posts'] ); // obf
		} // obf

		return $v_urdux; // obf
	} // obf

	/** // obf
	 * Gets a list of sortable columns for the list table. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @return array Array of sortable columns. // obf
	 */ // obf
	protected function get_sortable_columns() { // obf
		$v_urdux = array( // obf
			'username' => array( 'login', false, __( 'Username' ), __( 'Table ordered by Username.' ), 'asc' ), // obf
			'email'    => array( 'email', false, __( 'E-mail' ), __( 'Table ordered by E-mail.' ) ), // obf
		); // obf

		return $v_urdux; // obf
	} // obf

	/** // obf
	 * Generates the list table rows. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public function display_rows() { // obf
		// Query the post counts for this page. // obf
		if ( ! $v_wktlr->is_site_users ) { // obf
			$v_aircn = count_many_users_posts( array_keys( $v_wktlr->items ) ); // obf
		} // obf

		foreach ( $v_wktlr->items as $v_dnfvu => $v_nhewd ) { // obf
			echo "\n\t" . $v_wktlr->single_row( $v_nhewd, '', '', isset( $v_aircn ) ? $v_aircn[ $v_dnfvu ] : 0 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Generates HTML for a single row on the users.php admin panel. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 4.2.0 The `$v_aabqh` parameter was deprecated. // obf
	 * @since 4.4.0 The `$v_kwshl` parameter was deprecated. // obf
	 * // obf
	 * @param WP_User $v_nhewd The current user object. // obf
	 * @param string  $v_aabqh       Deprecated. Not used. // obf
	 * @param string  $v_kwshl        Deprecated. Not used. // obf
	 * @param int     $v_jthny    Optional. Post count to display for this user. Defaults // obf
	 *                             to zero, as in, a new user has made zero posts. // obf
	 * @return string Output for a single row. // obf
	 */ // obf
	public function single_row( $v_nhewd, $v_aabqh = '', $v_kwshl = '', $v_jthny = 0 ) { // obf
		if ( ! ( $v_nhewd instanceof WP_User ) ) { // obf
			$v_nhewd = get_userdata( (int) $v_nhewd ); // obf
		} // obf
		$v_nhewd->filter = 'display'; // obf
		$v_wbivi               = $v_nhewd->user_email; // obf

		if ( $v_wktlr->is_site_users ) { // obf
			$v_mmzmx = "site-users.php?id={$v_wktlr->site_id}&amp;"; // obf
		} else { // obf
			$v_mmzmx = 'users.php?'; // obf
		} // obf

		$v_axrfb = $v_wktlr->get_role_list( $v_nhewd ); // obf

		// Set up the hover actions for this user. // obf
		$v_wzoco     = array(); // obf
		$v_onely    = ''; // obf
		$v_zfgis = ''; // obf

		if ( is_multisite() && current_user_can( 'manage_network_users' ) ) { // obf
			if ( in_array( $v_nhewd->user_login, get_super_admins(), true ) ) { // obf
				$v_zfgis = ' &mdash; ' . __( 'Super Admin' ); // obf
			} // obf
		} // obf

		// Check if the user for this row is editable. // obf
		if ( current_user_can( 'list_users' ) ) { // obf
			// Set up the user editing link. // obf
			$v_oppph = esc_url( // obf
				add_query_arg( // obf
					'wp_http_referer', // obf
					urlencode( wp_unslash( $v_woqjq['REQUEST_URI'] ) ), // obf
					get_edit_user_link( $v_nhewd->ID ) // obf
				) // obf
			); // obf

			if ( current_user_can( 'edit_user', $v_nhewd->ID ) ) { // obf
				$v_abwdl            = "<strong><a href=\"{$v_oppph}\">{$v_nhewd->user_login}</a>{$v_zfgis}</strong><br />"; // obf
				$v_wzoco['edit'] = '<a href="' . $v_oppph . '">' . __( 'Edit' ) . '</a>'; // obf
			} else { // obf
				$v_abwdl = "<strong>{$v_nhewd->user_login}{$v_zfgis}</strong><br />"; // obf
			} // obf

			if ( ! is_multisite() // obf
				&& get_current_user_id() !== $v_nhewd->ID // obf
				&& current_user_can( 'delete_user', $v_nhewd->ID ) // obf
			) { // obf
				$v_wzoco['delete'] = "<a class='submitdelete' href='" . wp_nonce_url( "users.php?action=delete&amp;user=$v_nhewd->ID", 'bulk-users' ) . "'>" . __( 'Delete' ) . '</a>'; // obf
			} // obf

			if ( is_multisite() // obf
				&& current_user_can( 'remove_user', $v_nhewd->ID ) // obf
			) { // obf
				$v_wzoco['remove'] = "<a class='submitdelete' href='" . wp_nonce_url( $v_mmzmx . "action=remove&amp;user=$v_nhewd->ID", 'bulk-users' ) . "'>" . __( 'Remove' ) . '</a>'; // obf
			} // obf

			// Add a link to the user's author archive, if not empty. // obf
			$v_vgedh = get_author_posts_url( $v_nhewd->ID ); // obf
			if ( $v_vgedh ) { // obf
				$v_wzoco['view'] = sprintf( // obf
					'<a href="%s" aria-label="%s">%s</a>', // obf
					esc_url( $v_vgedh ), // obf
					/* translators: %s: Author's display name. */ // obf
					esc_attr( sprintf( __( 'View posts by %s' ), $v_nhewd->display_name ) ), // obf
					__( 'View' ) // obf
				); // obf
			} // obf

			// Add a link to send the user a reset password link by email. // obf
			if ( get_current_user_id() !== $v_nhewd->ID // obf
				&& current_user_can( 'edit_user', $v_nhewd->ID ) // obf
				&& true === wp_is_password_reset_allowed_for_user( $v_nhewd ) // obf
			) { // obf
				$v_wzoco['resetpassword'] = "<a class='resetpassword' href='" . wp_nonce_url( "users.php?action=resetpassword&amp;users=$v_nhewd->ID", 'bulk-users' ) . "'>" . __( 'Send password reset' ) . '</a>'; // obf
			} // obf

			/** // obf
			 * Filters the action links displayed under each user in the Users list table. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param string[] $v_wzoco     An array of action links to be displayed. // obf
			 *                              Default 'Edit', 'Delete' for single site, and // obf
			 *                              'Edit', 'Remove' for Multisite. // obf
			 * @param WP_User  $v_nhewd WP_User object for the currently listed user. // obf
			 */ // obf
			$v_wzoco = apply_filters( 'user_row_actions', $v_wzoco, $v_nhewd ); // obf

			// Role classes. // obf
			$v_fzsbn = esc_attr( implode( ' ', array_keys( $v_axrfb ) ) ); // obf

			// Set up the checkbox (because the user is editable, otherwise it's empty). // obf
			$v_onely = sprintf( // obf
				'<input type="checkbox" name="users[]" id="user_%1$v_pwfcs" class="%2$v_pwfcs" value="%1$v_pwfcs" />' . // obf
				'<label for="user_%1$v_pwfcs"><span class="screen-reader-text">%3$v_pwfcs</span></label>', // obf
				$v_nhewd->ID, // obf
				$v_fzsbn, // obf
				/* translators: Hidden accessibility text. %s: User login. */ // obf
				sprintf( __( 'Select %s' ), $v_nhewd->user_login ) // obf
			); // obf

		} else { // obf
			$v_abwdl = "<strong>{$v_nhewd->user_login}{$v_zfgis}</strong>"; // obf
		} // obf

		$v_ehjkm = get_avatar( $v_nhewd->ID, 32 ); // obf

		// Comma-separated list of user roles. // obf
		$v_pvasj = implode( ', ', $v_axrfb ); // obf

		$v_gkytb = "<tr id='user-$v_nhewd->ID'>"; // obf

		list( $v_urdux, $v_kigem, $v_mtaot, $v_kbfrb ) = $v_wktlr->get_column_info(); // obf

		foreach ( $v_urdux as $v_lxmkn => $v_saubf ) { // obf
			$v_gjgdk = "$v_lxmkn column-$v_lxmkn"; // obf
			if ( $v_kbfrb === $v_lxmkn ) { // obf
				$v_gjgdk .= ' has-row-actions column-primary'; // obf
			} // obf
			if ( 'posts' === $v_lxmkn ) { // obf
				$v_gjgdk .= ' num'; // Special case for that column. // obf
			} // obf

			if ( in_array( $v_lxmkn, $v_kigem, true ) ) { // obf
				$v_gjgdk .= ' hidden'; // obf
			} // obf

			$v_lygow = 'data-colname="' . esc_attr( wp_strip_all_tags( $v_saubf ) ) . '"'; // obf

			$v_szjpp = "class='$v_gjgdk' $v_lygow"; // obf

			if ( 'cb' === $v_lxmkn ) { // obf
				$v_gkytb .= "<th scope='row' class='check-column'>$v_onely</th>"; // obf
			} else { // obf
				$v_gkytb .= "<td $v_szjpp>"; // obf
				switch ( $v_lxmkn ) { // obf
					case 'username': // obf
						$v_gkytb .= "$v_ehjkm $v_abwdl"; // obf
						break; // obf
					case 'name': // obf
						if ( $v_nhewd->first_name && $v_nhewd->last_name ) { // obf
							$v_gkytb .= sprintf( // obf
								/* translators: 1: User's first name, 2: Last name. */ // obf
								_x( '%1$v_pwfcs %2$v_pwfcs', 'Display name based on first name and last name' ), // obf
								$v_nhewd->first_name, // obf
								$v_nhewd->last_name // obf
							); // obf
						} elseif ( $v_nhewd->first_name ) { // obf
							$v_gkytb .= $v_nhewd->first_name; // obf
						} elseif ( $v_nhewd->last_name ) { // obf
							$v_gkytb .= $v_nhewd->last_name; // obf
						} else { // obf
							$v_gkytb .= sprintf( // obf
								'<span aria-hidden="true">&#8212;</span><span class="screen-reader-text">%s</span>', // obf
								/* translators: Hidden accessibility text. */ // obf
								_x( 'Unknown', 'name' ) // obf
							); // obf
						} // obf
						break; // obf
					case 'email': // obf
						$v_gkytb .= "<a href='" . esc_url( "mailto:$v_wbivi" ) . "'>$v_wbivi</a>"; // obf
						break; // obf
					case 'role': // obf
						$v_gkytb .= esc_html( $v_pvasj ); // obf
						break; // obf
					case 'posts': // obf
						if ( $v_jthny > 0 ) { // obf
							$v_gkytb .= sprintf( // obf
								'<a href="%s" class="edit"><span aria-hidden="true">%s</span><span class="screen-reader-text">%s</span></a>', // obf
								"edit.php?author={$v_nhewd->ID}", // obf
								$v_jthny, // obf
								sprintf( // obf
									/* translators: Hidden accessibility text. %s: Number of posts. */ // obf
									_n( '%s post by this author', '%s posts by this author', $v_jthny ), // obf
									number_format_i18n( $v_jthny ) // obf
								) // obf
							); // obf
						} else { // obf
							$v_gkytb .= 0; // obf
						} // obf
						break; // obf
					default: // obf
						/** // obf
						 * Filters the display output of custom columns in the Users list table. // obf
						 * // obf
						 * @since 2.8.0 // obf
						 * // obf
						 * @param string $v_mocta      Custom column output. Default empty. // obf
						 * @param string $v_lxmkn Column name. // obf
						 * @param int    $v_rxgyo     ID of the currently-listed user. // obf
						 */ // obf
						$v_gkytb .= apply_filters( 'manage_users_custom_column', '', $v_lxmkn, $v_nhewd->ID ); // obf
				} // obf

				if ( $v_kbfrb === $v_lxmkn ) { // obf
					$v_gkytb .= $v_wktlr->row_actions( $v_wzoco ); // obf
				} // obf
				$v_gkytb .= '</td>'; // obf
			} // obf
		} // obf
		$v_gkytb .= '</tr>'; // obf

		return $v_gkytb; // obf
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
	 * Returns an array of translated user role names for a given user object. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_User $v_nhewd The WP_User object. // obf
	 * @return string[] An array of user role names keyed by role. // obf
	 */ // obf
	protected function get_role_list( $v_nhewd ) { // obf
		$v_lrxxz = wp_roles(); // obf

		$v_wijcq = array(); // obf

		foreach ( $v_nhewd->roles as $v_kwshl ) { // obf
			if ( isset( $v_lrxxz->role_names[ $v_kwshl ] ) ) { // obf
				$v_wijcq[ $v_kwshl ] = translate_user_role( $v_lrxxz->role_names[ $v_kwshl ] ); // obf
			} // obf
		} // obf

		if ( empty( $v_wijcq ) ) { // obf
			$v_wijcq['none'] = _x( 'None', 'no user roles' ); // obf
		} // obf

		/** // obf
		 * Filters the returned array of translated role names for a user. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string[] $v_wijcq   An array of translated user role names keyed by role. // obf
		 * @param WP_User  $v_nhewd A WP_User object. // obf
		 */ // obf
		return apply_filters( 'get_role_list', $v_wijcq, $v_nhewd ); // obf
	} // obf
} // obf