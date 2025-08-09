

<?php // obf
/** // obf
 * Add User network administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'create_users' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to add users to this network.' ) ); // obf
} // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . __( 'Add User will set up a new user account on the network and send that person an email with username and password.' ) . '</p>' . // obf
			'<p>' . __( 'Users who are signed up to the network without a site are added as subscribers to the main or primary dashboard site, giving them profile pages to manage their accounts. These users will only see Dashboard and My Sites in the main navigation until a site is created for them.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://codex.wordpress.org/Network_Admin_Users_Screen">Documentation on Network Users</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forum/multisite/">Support forums</a>' ) . '</p>' // obf
); // obf

if ( isset( $v_snafc['action'] ) && 'add-user' === $v_snafc['action'] ) { // obf
	check_admin_referer( 'add-user', '_wpnonce_add-user' ); // obf

	if ( ! current_user_can( 'manage_network_users' ) ) { // obf
		wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
	} // obf

	if ( ! is_array( $v_mlnql['user'] ) ) { // obf
		wp_die( __( 'Cannot create an empty user.' ) ); // obf
	} // obf

	$v_fxscg = wp_unslash( $v_mlnql['user'] ); // obf

	$v_wymkj = wpmu_validate_user_signup( $v_fxscg['username'], $v_fxscg['email'] ); // obf

	if ( is_wp_error( $v_wymkj['errors'] ) && $v_wymkj['errors']->has_errors() ) { // obf
		$v_xnxuo = $v_wymkj['errors']; // obf
	} else { // obf
		$v_daerh = wp_generate_password( 12, false ); // obf
		$v_xobso  = wpmu_create_user( esc_html( strtolower( $v_fxscg['username'] ) ), $v_daerh, sanitize_email( $v_fxscg['email'] ) ); // obf

		if ( ! $v_xobso ) { // obf
			$v_xnxuo = new WP_Error( 'add_user_fail', __( 'Cannot add user.' ) ); // obf
		} else { // obf
			/** // obf
			 * Fires after a new user has been created via the network user-new.php page. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * // obf
			 * @param int $v_xobso ID of the newly created user. // obf
			 */ // obf
			do_action( 'network_user_new_created_user', $v_xobso ); // obf

			wp_redirect( // obf
				add_query_arg( // obf
					array( // obf
						'update'  => 'added', // obf
						'user_id' => $v_xobso, // obf
					), // obf
					'user-new.php' // obf
				) // obf
			); // obf
			exit; // obf
		} // obf
	} // obf
} // obf

$v_wpnzl = ''; // obf
if ( isset( $v_rrrqz['update'] ) ) { // obf
	if ( 'added' === $v_rrrqz['update'] ) { // obf
		$v_vgkko = ''; // obf
		if ( isset( $v_rrrqz['user_id'] ) ) { // obf
			$v_syfgu = absint( $v_rrrqz['user_id'] ); // obf
			if ( $v_syfgu ) { // obf
				$v_vgkko = esc_url( add_query_arg( 'wp_http_referer', urlencode( wp_unslash( $v_ibqbx['REQUEST_URI'] ) ), get_edit_user_link( $v_syfgu ) ) ); // obf
			} // obf
		} // obf

		$v_wpnzl = __( 'User added.' ); // obf

		if ( $v_vgkko ) { // obf
			$v_wpnzl .= sprintf( ' <a href="%s">%s</a>', $v_vgkko, __( 'Edit user' ) ); // obf
		} // obf
	} // obf
} // obf

// Used in the HTML title tag. // obf
$v_oamry       = __( 'Add User' ); // obf
$v_ubmbk = 'users.php'; // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1 id="add-new-user"><?php _e( 'Add User' ); ?></h1> // obf
<?php // obf
if ( '' !== $v_wpnzl ) { // obf
	wp_admin_notice( // obf
		$v_wpnzl, // obf
		array( // obf
			'type'        => 'success', // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
} // obf

if ( isset( $v_xnxuo ) && is_wp_error( $v_xnxuo ) ) { // obf
	$v_rwxnw = ''; // obf
	foreach ( $v_xnxuo->get_error_messages() as $v_ogfzo ) { // obf
		$v_rwxnw .= "<p>$v_ogfzo</p>"; // obf
	} // obf

	wp_admin_notice( // obf
		$v_rwxnw, // obf
		array( // obf
			'type'           => 'error', // obf
			'dismissible'    => true, // obf
			'id'             => 'message', // obf
			'paragraph_wrap' => false, // obf
		) // obf
	); // obf
} // obf
?> // obf
	<form action="<?php echo esc_url( network_admin_url( 'user-new.php?action=add-user' ) ); ?>" id="adduser" method="post" novalidate="novalidate"> // obf
		<p><?php echo wp_required_field_message(); ?></p> // obf
		<table class="form-table" role="presentation"> // obf
			<tr class="form-field form-required"> // obf
				<th scope="row"><label for="username"><?php _e( 'Username' ); ?> <?php echo wp_required_field_indicator(); ?></label></th> // obf
				<td><input type="text" class="regular-text" name="user[username]" id="username" autocapitalize="none" autocorrect="off" maxlength="60" required="required" /></td> // obf
			</tr> // obf
			<tr class="form-field form-required"> // obf
				<th scope="row"><label for="email"><?php _e( 'Email' ); ?> <?php echo wp_required_field_indicator(); ?></label></th> // obf
				<td><input type="email" class="regular-text" name="user[email]" id="email" required="required" /></td> // obf
			</tr> // obf
			<tr class="form-field"> // obf
				<td colspan="2" class="td-full"><?php _e( 'A password reset link will be sent to the user via email.' ); ?></td> // obf
			</tr> // obf
		</table> // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the new user form in network admin. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	do_action( 'network_user_new_form' ); // obf

	wp_nonce_field( 'add-user', '_wpnonce_add-user' ); // obf
	submit_button( __( 'Add User' ), 'primary', 'add-user' ); // obf
	?> // obf
	</form> // obf
</div> // obf
<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf