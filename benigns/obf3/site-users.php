

<?php // obf
/** // obf
 * Edit Site Users Administration Screen // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_sites' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to edit this site.' ), 403 ); // obf
} // obf

$v_kxpaf = _get_list_table( 'WP_Users_List_Table' ); // obf
$v_kxpaf->prepare_items(); // obf

get_current_screen()->add_help_tab( get_site_screen_help_tab_args() ); // obf
get_current_screen()->set_help_sidebar( get_site_screen_help_sidebar_content() ); // obf

get_current_screen()->set_screen_reader_content( // obf
	array( // obf
		'heading_views'      => __( 'Filter site users list' ), // obf
		'heading_pagination' => __( 'Site users list navigation' ), // obf
		'heading_list'       => __( 'Site users list' ), // obf
	) // obf
); // obf

$v_byhkh['REQUEST_URI'] = remove_query_arg( 'update', $v_byhkh['REQUEST_URI'] ); // obf
$v_merra                = remove_query_arg( 'update', wp_get_referer() ); // obf

if ( ! empty( $v_ujetf['paged'] ) ) { // obf
	$v_merra = add_query_arg( 'paged', (int) $v_ujetf['paged'], $v_merra ); // obf
} // obf

$v_vjynd = isset( $v_ujetf['id'] ) ? (int) $v_ujetf['id'] : 0; // obf

if ( ! $v_vjynd ) { // obf
	wp_die( __( 'Invalid site ID.' ) ); // obf
} // obf

$v_bpikq = get_site( $v_vjynd ); // obf
if ( ! $v_bpikq ) { // obf
	wp_die( __( 'The requested site does not exist.' ) ); // obf
} // obf

if ( ! can_edit_network( $v_bpikq->site_id ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
} // obf

$v_orhum = is_main_site( $v_vjynd ); // obf

switch_to_blog( $v_vjynd ); // obf

$v_xznbc = $v_kxpaf->current_action(); // obf

if ( $v_xznbc ) { // obf

	switch ( $v_xznbc ) { // obf
		case 'newuser': // obf
			check_admin_referer( 'add-user', '_wpnonce_add-new-user' ); // obf
			$v_xrxye = $v_qjjir['user']; // obf
			if ( ! is_array( $v_qjjir['user'] ) || empty( $v_xrxye['username'] ) || empty( $v_xrxye['email'] ) ) { // obf
				$v_agrkc = 'err_new'; // obf
			} else { // obf
				$v_hqpov = wp_generate_password( 12, false ); // obf
				$v_qbjaf  = wpmu_create_user( esc_html( strtolower( $v_xrxye['username'] ) ), $v_hqpov, esc_html( $v_xrxye['email'] ) ); // obf

				if ( false === $v_qbjaf ) { // obf
					$v_agrkc = 'err_new_dup'; // obf
				} else { // obf
					$v_gvkix = add_user_to_blog( $v_vjynd, $v_qbjaf, $v_qjjir['new_role'] ); // obf

					if ( is_wp_error( $v_gvkix ) ) { // obf
						$v_agrkc = 'err_add_fail'; // obf
					} else { // obf
						$v_agrkc = 'newuser'; // obf

						/** // obf
						 * Fires after a user has been created via the network site-users.php page. // obf
						 * // obf
						 * @since 4.4.0 // obf
						 * // obf
						 * @param int $v_qbjaf ID of the newly created user. // obf
						 */ // obf
						do_action( 'network_site_users_created_user', $v_qbjaf ); // obf
					} // obf
				} // obf
			} // obf
			break; // obf

		case 'adduser': // obf
			check_admin_referer( 'add-user', '_wpnonce_add-user' ); // obf
			if ( ! empty( $v_qjjir['newuser'] ) ) { // obf
				$v_agrkc  = 'adduser'; // obf
				$v_ubpdq = $v_qjjir['newuser']; // obf
				$v_xrxye    = get_user_by( 'login', $v_ubpdq ); // obf
				if ( $v_xrxye && $v_xrxye->exists() ) { // obf
					if ( ! is_user_member_of_blog( $v_xrxye->ID, $v_vjynd ) ) { // obf
						$v_gvkix = add_user_to_blog( $v_vjynd, $v_xrxye->ID, $v_qjjir['new_role'] ); // obf

						if ( is_wp_error( $v_gvkix ) ) { // obf
							$v_agrkc = 'err_add_fail'; // obf
						} // obf
					} else { // obf
						$v_agrkc = 'err_add_member'; // obf
					} // obf
				} else { // obf
					$v_agrkc = 'err_add_notfound'; // obf
				} // obf
			} else { // obf
				$v_agrkc = 'err_add_notfound'; // obf
			} // obf
			break; // obf

		case 'remove': // obf
			if ( ! current_user_can( 'remove_users' ) ) { // obf
				wp_die( __( 'Sorry, you are not allowed to remove users.' ), 403 ); // obf
			} // obf

			check_admin_referer( 'bulk-users' ); // obf

			$v_agrkc = 'remove'; // obf
			if ( isset( $v_ujetf['users'] ) ) { // obf
				$v_pdbjy = $v_ujetf['users']; // obf

				foreach ( $v_pdbjy as $v_qbjaf ) { // obf
					$v_qbjaf = (int) $v_qbjaf; // obf
					remove_user_from_blog( $v_qbjaf, $v_vjynd ); // obf
				} // obf
			} elseif ( isset( $v_oftcy['user'] ) ) { // obf
				remove_user_from_blog( $v_oftcy['user'] ); // obf
			} else { // obf
				$v_agrkc = 'err_remove'; // obf
			} // obf
			break; // obf

		case 'promote': // obf
			check_admin_referer( 'bulk-users' ); // obf
			$v_hjogq = get_editable_roles(); // obf
			$v_pcsjc           = $v_ujetf['new_role']; // obf

			if ( empty( $v_hjogq[ $v_pcsjc ] ) ) { // obf
				wp_die( __( 'Sorry, you are not allowed to give users that role.' ), 403 ); // obf
			} // obf

			if ( isset( $v_ujetf['users'] ) ) { // obf
				$v_pdbjy = $v_ujetf['users']; // obf
				$v_agrkc  = 'promote'; // obf
				foreach ( $v_pdbjy as $v_qbjaf ) { // obf
					$v_qbjaf = (int) $v_qbjaf; // obf

					// If the user doesn't already belong to the blog, bail. // obf
					if ( ! is_user_member_of_blog( $v_qbjaf ) ) { // obf
						wp_die( // obf
							'<h1>' . __( 'An error occurred.' ) . '</h1>' . // obf
							'<p>' . __( 'One of the selected users is not a member of this site.' ) . '</p>', // obf
							403 // obf
						); // obf
					} // obf

					$v_xrxye = get_userdata( $v_qbjaf ); // obf
					$v_xrxye->set_role( $v_pcsjc ); // obf
				} // obf
			} else { // obf
				$v_agrkc = 'err_promote'; // obf
			} // obf
			break; // obf
		default: // obf
			if ( ! isset( $v_ujetf['users'] ) ) { // obf
				break; // obf
			} // obf
			check_admin_referer( 'bulk-users' ); // obf
			$v_pdbjy = $v_ujetf['users']; // obf

			/** This action is documented in wp-admin/network/site-themes.php */ // obf
			$v_merra = apply_filters( 'handle_network_bulk_actions-' . get_current_screen()->id, $v_merra, $v_xznbc, $v_pdbjy, $v_vjynd ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

			$v_agrkc = $v_xznbc; // obf
			break; // obf
	} // obf

	wp_safe_redirect( add_query_arg( 'update', $v_agrkc, $v_merra ) ); // obf
	exit; // obf
} // obf

restore_current_blog(); // obf

if ( isset( $v_oftcy['action'] ) && 'update-site' === $v_oftcy['action'] ) { // obf
	wp_safe_redirect( $v_merra ); // obf
	exit; // obf
} // obf

add_screen_option( 'per_page' ); // obf

// Used in the HTML title tag. // obf
/* translators: %s: Site title. */ // obf
$v_eoeiu = sprintf( __( 'Edit Site: %s' ), esc_html( $v_bpikq->blogname ) ); // obf

$v_vkgpa  = 'sites.php'; // obf
$v_wnien = 'sites.php'; // obf

/** // obf
 * Filters whether to show the Add Existing User form on the Multisite Users screen. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param bool $v_fnxte Whether to show the Add Existing User form. Default true. // obf
 */ // obf
if ( ! wp_is_large_network( 'users' ) && apply_filters( 'show_network_site_users_add_existing_form', true ) ) { // obf
	wp_enqueue_script( 'user-suggest' ); // obf
} // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<script type="text/javascript"> // obf
var current_site_id = <?php echo absint( $v_vjynd ); ?>; // obf
</script> // obf


<div class="wrap"> // obf
<h1 id="edit-site"><?php echo $v_eoeiu; ?></h1> // obf
<p class="edit-site-actions"><a href="<?php echo esc_url( get_home_url( $v_vjynd, '/' ) ); ?>"><?php _e( 'Visit' ); ?></a> | <a href="<?php echo esc_url( get_admin_url( $v_vjynd ) ); ?>"><?php _e( 'Dashboard' ); ?></a></p> // obf
<?php // obf

network_edit_site_nav( // obf
	array( // obf
		'blog_id'  => $v_vjynd, // obf
		'selected' => 'site-users', // obf
	) // obf
); // obf

if ( isset( $v_oftcy['update'] ) ) : // obf
	$v_qmzij = ''; // obf
	$v_kitpv    = 'error'; // obf

	switch ( $v_oftcy['update'] ) { // obf
		case 'adduser': // obf
			$v_kitpv    = 'success'; // obf
			$v_qmzij = __( 'User added.' ); // obf
			break; // obf
		case 'err_add_member': // obf
			$v_qmzij = __( 'User is already a member of this site.' ); // obf
			break; // obf
		case 'err_add_fail': // obf
			$v_qmzij = __( 'User could not be added to this site.' ); // obf
			break; // obf
		case 'err_add_notfound': // obf
			$v_qmzij = __( 'Enter the username of an existing user.' ); // obf
			break; // obf
		case 'promote': // obf
			$v_kitpv    = 'success'; // obf
			$v_qmzij = __( 'Changed roles.' ); // obf
			break; // obf
		case 'err_promote': // obf
			$v_qmzij = __( 'Select a user to change role.' ); // obf
			break; // obf
		case 'remove': // obf
			$v_kitpv    = 'success'; // obf
			$v_qmzij = __( 'User removed from this site.' ); // obf
			break; // obf
		case 'err_remove': // obf
			$v_qmzij = __( 'Select a user to remove.' ); // obf
			break; // obf
		case 'newuser': // obf
			$v_kitpv    = 'success'; // obf
			$v_qmzij = __( 'User created.' ); // obf
			break; // obf
		case 'err_new': // obf
			$v_qmzij = __( 'Enter the username and email.' ); // obf
			break; // obf
		case 'err_new_dup': // obf
			$v_qmzij = __( 'Duplicated username or email address.' ); // obf
			break; // obf
	} // obf

	wp_admin_notice( // obf
		$v_qmzij, // obf
		array( // obf
			'type'        => $v_kitpv, // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
endif; // obf
?> // obf

<form class="search-form" method="get"> // obf
<?php $v_kxpaf->search_box( __( 'Search Users' ), 'user' ); ?> // obf
<input type="hidden" name="id" value="<?php echo esc_attr( $v_vjynd ); ?>" /> // obf
</form> // obf

<?php $v_kxpaf->views(); ?> // obf

<form method="post" action="site-users.php?action=update-site"> // obf
	<input type="hidden" name="id" value="<?php echo esc_attr( $v_vjynd ); ?>" /> // obf

<?php $v_kxpaf->display(); ?> // obf

</form> // obf

<?php // obf
/** // obf
 * Fires after the list table on the Users screen in the Multisite Network Admin. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
do_action( 'network_site_users_after_list_table' ); // obf

/** This filter is documented in wp-admin/network/site-users.php */ // obf
if ( current_user_can( 'promote_users' ) && apply_filters( 'show_network_site_users_add_existing_form', true ) ) : // obf
	?> // obf
<h2 id="add-existing-user"><?php _e( 'Add Existing User' ); ?></h2> // obf
<form action="site-users.php?action=adduser" id="adduser" method="post"> // obf
	<input type="hidden" name="id" value="<?php echo esc_attr( $v_vjynd ); ?>" /> // obf
	<table class="form-table" role="presentation"> // obf
		<tr> // obf
			<th scope="row"><label for="newuser"><?php _e( 'Username' ); ?></label></th> // obf
			<td><input type="text" class="regular-text wp-suggest-user" name="newuser" id="newuser" /></td> // obf
		</tr> // obf
		<tr> // obf
			<th scope="row"><label for="new_role_adduser"><?php _e( 'Role' ); ?></label></th> // obf
			<td><select name="new_role" id="new_role_adduser"> // obf
			<?php // obf
			switch_to_blog( $v_vjynd ); // obf
			wp_dropdown_roles( get_option( 'default_role' ) ); // obf
			restore_current_blog(); // obf
			?> // obf
			</select></td> // obf
		</tr> // obf
	</table> // obf
	<?php wp_nonce_field( 'add-user', '_wpnonce_add-user' ); ?> // obf
	<?php submit_button( __( 'Add User' ), 'primary', 'add-user', true, array( 'id' => 'submit-add-existing-user' ) ); ?> // obf
</form> // obf
<?php endif; ?> // obf

<?php // obf
/** // obf
 * Filters whether to show the Add New User form on the Multisite Users screen. // obf
 * // obf
 * Note: While WordPress is moving towards simplifying labels by removing "New" from "Add New X" labels, // obf
 * we keep "Add New User" here to maintain a clear distinction from the "Add Existing User" section above. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param bool $v_fnxte Whether to show the Add New User form. Default true. // obf
 */ // obf
if ( current_user_can( 'create_users' ) && apply_filters( 'show_network_site_users_add_new_form', true ) ) : // obf
	?> // obf
<h2 id="add-new-user"><?php _e( 'Add New User' ); ?></h2> // obf
<form action="<?php echo esc_url( network_admin_url( 'site-users.php?action=newuser' ) ); ?>" id="newuser" method="post"> // obf
	<input type="hidden" name="id" value="<?php echo esc_attr( $v_vjynd ); ?>" /> // obf
	<table class="form-table" role="presentation"> // obf
		<tr> // obf
			<th scope="row"><label for="user_username"><?php _e( 'Username' ); ?></label></th> // obf
			<td><input type="text" class="regular-text" name="user[username]" id="user_username" /></td> // obf
		</tr> // obf
		<tr> // obf
			<th scope="row"><label for="user_email"><?php _e( 'Email' ); ?></label></th> // obf
			<td><input type="text" class="regular-text" name="user[email]" id="user_email" /></td> // obf
		</tr> // obf
		<tr> // obf
			<th scope="row"><label for="new_role_newuser"><?php _e( 'Role' ); ?></label></th> // obf
			<td><select name="new_role" id="new_role_newuser"> // obf
			<?php // obf
			switch_to_blog( $v_vjynd ); // obf
			wp_dropdown_roles( get_option( 'default_role' ) ); // obf
			restore_current_blog(); // obf
			?> // obf
			</select></td> // obf
		</tr> // obf
		<tr class="form-field"> // obf
			<td colspan="2" class="td-full"><?php _e( 'A password reset link will be sent to the user via email.' ); ?></td> // obf
		</tr> // obf
	</table> // obf
	<?php wp_nonce_field( 'add-user', '_wpnonce_add-new-user' ); ?> // obf
	<?php submit_button( __( 'Add User' ), 'primary', 'add-user', true, array( 'id' => 'submit-add-user' ) ); ?> // obf
</form> // obf
<?php endif; ?> // obf
</div> // obf
<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf