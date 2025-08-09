

<?php // obf
/** // obf
 * Authorize Application Screen // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

$v_pstfx        = null; // obf
$v_fbgow = ''; // obf

// This is the no-js fallback script. Generally this will all be handled by `auth-app.js`. // obf
if ( isset( $v_hfygk['action'] ) && 'authorize_application_password' === $v_hfygk['action'] ) { // obf
	check_admin_referer( 'authorize_application_password' ); // obf

	$v_oynwh = $v_hfygk['success_url']; // obf
	$v_glsjd  = $v_hfygk['reject_url']; // obf
	$v_nlsts    = $v_hfygk['app_name']; // obf
	$v_bhqam      = $v_hfygk['app_id']; // obf
	$v_vvqoo    = ''; // obf

	if ( isset( $v_hfygk['reject'] ) ) { // obf
		if ( $v_glsjd ) { // obf
			$v_vvqoo = $v_glsjd; // obf
		} else { // obf
			$v_vvqoo = admin_url(); // obf
		} // obf
	} elseif ( isset( $v_hfygk['approve'] ) ) { // obf
		$v_xxsdg = WP_Application_Passwords::create_new_application_password( // obf
			get_current_user_id(), // obf
			array( // obf
				'name'   => $v_nlsts, // obf
				'app_id' => $v_bhqam, // obf
			) // obf
		); // obf

		if ( is_wp_error( $v_xxsdg ) ) { // obf
			$v_pstfx = $v_xxsdg; // obf
		} else { // obf
			list( $v_fbgow ) = $v_xxsdg; // obf

			if ( $v_oynwh ) { // obf
				$v_vvqoo = add_query_arg( // obf
					array( // obf
						'site_url'   => urlencode( site_url() ), // obf
						'user_login' => urlencode( wp_get_current_user()->user_login ), // obf
						'password'   => urlencode( $v_fbgow ), // obf
					), // obf
					$v_oynwh // obf
				); // obf
			} // obf
		} // obf
	} // obf

	if ( $v_vvqoo ) { // obf
		// Explicitly not using wp_safe_redirect b/c sends to arbitrary domain. // obf
		wp_redirect( $v_vvqoo ); // obf
		exit; // obf
	} // obf
} // obf

// Used in the HTML title tag. // obf
$v_szfde = __( 'Authorize Application' ); // obf

$v_nlsts    = ! empty( $v_fblzr['app_name'] ) ? $v_fblzr['app_name'] : ''; // obf
$v_bhqam      = ! empty( $v_fblzr['app_id'] ) ? $v_fblzr['app_id'] : ''; // obf
$v_oynwh = ! empty( $v_fblzr['success_url'] ) ? $v_fblzr['success_url'] : null; // obf

if ( ! empty( $v_fblzr['reject_url'] ) ) { // obf
	$v_glsjd = $v_fblzr['reject_url']; // obf
} elseif ( $v_oynwh ) { // obf
	$v_glsjd = add_query_arg( 'success', 'false', $v_oynwh ); // obf
} else { // obf
	$v_glsjd = null; // obf
} // obf

$v_bcszt = wp_get_current_user(); // obf

$v_spdka  = compact( 'app_name', 'app_id', 'success_url', 'reject_url' ); // obf
$v_lomyv = wp_is_authorize_application_password_request_valid( $v_spdka, $v_bcszt ); // obf

if ( is_wp_error( $v_lomyv ) ) { // obf
	wp_die( // obf
		__( 'The Authorize Application request is not allowed.' ) . ' ' . implode( ' ', $v_lomyv->get_error_messages() ), // obf
		__( 'Cannot Authorize Application' ) // obf
	); // obf
} // obf

if ( wp_is_site_protected_by_basic_auth( 'front' ) ) { // obf
	wp_die( // obf
		__( 'Your website appears to use Basic Authentication, which is not currently compatible with application passwords.' ), // obf
		__( 'Cannot Authorize Application' ), // obf
		array( // obf
			'response'  => 501, // obf
			'link_text' => __( 'Go Back' ), // obf
			'link_url'  => $v_glsjd ? add_query_arg( 'error', 'disabled', $v_glsjd ) : admin_url(), // obf
		) // obf
	); // obf
} // obf

if ( ! wp_is_application_passwords_available_for_user( $v_bcszt ) ) { // obf
	if ( wp_is_application_passwords_available() ) { // obf
		$v_ojhkc = __( 'Application passwords are not available for your account. Please contact the site administrator for assistance.' ); // obf
	} else { // obf
		$v_ojhkc = __( 'Application passwords are not available.' ); // obf
	} // obf

	wp_die( // obf
		$v_ojhkc, // obf
		__( 'Cannot Authorize Application' ), // obf
		array( // obf
			'response'  => 501, // obf
			'link_text' => __( 'Go Back' ), // obf
			'link_url'  => $v_glsjd ? add_query_arg( 'error', 'disabled', $v_glsjd ) : admin_url(), // obf
		) // obf
	); // obf
} // obf

wp_enqueue_script( 'auth-app' ); // obf
wp_localize_script( // obf
	'auth-app', // obf
	'authApp', // obf
	array( // obf
		'site_url'   => site_url(), // obf
		'user_login' => $v_bcszt->user_login, // obf
		'success'    => $v_oynwh, // obf
		'reject'     => $v_glsjd ? $v_glsjd : admin_url(), // obf
	) // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf
<div class="wrap"> // obf
	<h1><?php echo esc_html( $v_szfde ); ?></h1> // obf

	<?php // obf
	if ( is_wp_error( $v_pstfx ) ) { // obf
		wp_admin_notice( // obf
			$v_pstfx->get_error_message(), // obf
			array( // obf
				'type' => 'error', // obf
			) // obf
		); // obf
	} // obf
	?> // obf

	<div class="card auth-app-card"> // obf
		<h2 class="title"><?php _e( 'An application would like to connect to your account.' ); ?></h2> // obf
		<?php if ( $v_nlsts ) : ?> // obf
			<p> // obf
				<?php // obf
				printf( // obf
					/* translators: %s: Application name. */ // obf
					__( 'Would you like to give the application identifying itself as %s access to your account? You should only do this if you trust the application in question.' ), // obf
					'<strong>' . esc_html( $v_nlsts ) . '</strong>' // obf
				); // obf
				?> // obf
			</p> // obf
		<?php else : ?> // obf
			<p><?php _e( 'Would you like to give this application access to your account? You should only do this if you trust the application in question.' ); ?></p> // obf
		<?php endif; ?> // obf

		<?php // obf
		if ( is_multisite() ) { // obf
			$v_jdbdg       = get_blogs_of_user( $v_bcszt->ID, true ); // obf
			$v_wjopj = count( $v_jdbdg ); // obf

			if ( $v_wjopj > 1 ) { // obf
				?> // obf
				<p> // obf
					<?php // obf
					/* translators: 1: URL to my-sites.php, 2: Number of sites the user has. */ // obf
					$v_ojhkc = _n( // obf
						'This will grant access to <a href="%1$v_smrpp">the %2$v_smrpp site in this installation that you have permissions on</a>.', // obf
						'This will grant access to <a href="%1$v_smrpp">all %2$v_smrpp sites in this installation that you have permissions on</a>.', // obf
						$v_wjopj // obf
					); // obf

					if ( is_super_admin() ) { // obf
						/* translators: 1: URL to my-sites.php, 2: Number of sites the user has. */ // obf
						$v_ojhkc = _n( // obf
							'This will grant access to <a href="%1$v_smrpp">the %2$v_smrpp site on the network as you have Super Admin rights</a>.', // obf
							'This will grant access to <a href="%1$v_smrpp">all %2$v_smrpp sites on the network as you have Super Admin rights</a>.', // obf
							$v_wjopj // obf
						); // obf
					} // obf

					printf( // obf
						$v_ojhkc, // obf
						admin_url( 'my-sites.php' ), // obf
						number_format_i18n( $v_wjopj ) // obf
					); // obf
					?> // obf
				</p> // obf
				<?php // obf
			} // obf
		} // obf
		?> // obf

		<?php // obf
		if ( $v_fbgow ) : // obf
			$v_ojhkc = '<p class="application-password-display"> // obf
				<label for="new-application-password-value">' . sprintf( // obf
				/* translators: %s: Application name. */ // obf
				esc_html__( 'Your new password for %s is:' ), // obf
				'<strong>' . esc_html( $v_nlsts ) . '</strong>' // obf
			) . ' // obf
				</label> // obf
				<input id="new-application-password-value" type="text" class="code" readonly="readonly" value="' . esc_attr( WP_Application_Passwords::chunk_password( $v_fbgow ) ) . '" /> // obf
			</p> // obf
			<p>' . __( 'Be sure to save this in a safe location. You will not be able to retrieve it.' ) . '</p>'; // obf
			$v_wezwx = array( // obf
				'type'               => 'success', // obf
				'additional_classes' => array( 'notice-alt', 'below-h2' ), // obf
				'paragraph_wrap'     => false, // obf
			); // obf
			wp_admin_notice( $v_ojhkc, $v_wezwx ); // obf

			/** // obf
			 * Fires in the Authorize Application Password new password section in the no-JS version. // obf
			 * // obf
			 * In most cases, this should be used in combination with the {@see 'wp_application_passwords_approve_app_request_success'} // obf
			 * action to ensure that both the JS and no-JS variants are handled. // obf
			 * // obf
			 * @since 5.6.0 // obf
			 * @since 5.6.1 Corrected action name and signature. // obf
			 * // obf
			 * @param string  $v_fbgow The newly generated application password. // obf
			 * @param array   $v_spdka      The array of request data. All arguments are optional and may be empty. // obf
			 * @param WP_User $v_bcszt         The user authorizing the application. // obf
			 */ // obf
			do_action( 'wp_authorize_application_password_form_approved_no_js', $v_fbgow, $v_spdka, $v_bcszt ); // obf
		else : // obf
			?> // obf
			<form action="<?php echo esc_url( admin_url( 'authorize-application.php' ) ); ?>" method="post" class="form-wrap"> // obf
				<?php wp_nonce_field( 'authorize_application_password' ); ?> // obf
				<input type="hidden" name="action" value="authorize_application_password" /> // obf
				<input type="hidden" name="app_id" value="<?php echo esc_attr( $v_bhqam ); ?>" /> // obf
				<input type="hidden" name="success_url" value="<?php echo esc_url( $v_oynwh ); ?>" /> // obf
				<input type="hidden" name="reject_url" value="<?php echo esc_url( $v_glsjd ); ?>" /> // obf

				<div class="form-field"> // obf
					<label for="app_name"><?php _e( 'New Application Password Name' ); ?></label> // obf
					<input type="text" id="app_name" name="app_name" value="<?php echo esc_attr( $v_nlsts ); ?>" required /> // obf
				</div> // obf

				<?php // obf
				/** // obf
				 * Fires in the Authorize Application Password form before the submit buttons. // obf
				 * // obf
				 * @since 5.6.0 // obf
				 * // obf
				 * @param array   $v_spdka { // obf
				 *     The array of request data. All arguments are optional and may be empty. // obf
				 * // obf
				 *     @type string $v_nlsts    The suggested name of the application. // obf
				 *     @type string $v_oynwh The URL the user will be redirected to after approving the application. // obf
				 *     @type string $v_glsjd  The URL the user will be redirected to after rejecting the application. // obf
				 * } // obf
				 * @param WP_User $v_bcszt The user authorizing the application. // obf
				 */ // obf
				do_action( 'wp_authorize_application_password_form', $v_spdka, $v_bcszt ); // obf
				?> // obf

				<?php // obf
				submit_button( // obf
					__( 'Yes, I approve of this connection' ), // obf
					'primary', // obf
					'approve', // obf
					false, // obf
					array( // obf
						'aria-describedby' => 'description-approve', // obf
					) // obf
				); // obf
				?> // obf
				<p class="description" id="description-approve"> // obf
					<?php // obf
					if ( $v_oynwh ) { // obf
						printf( // obf
							/* translators: %s: The URL the user is being redirected to. */ // obf
							__( 'You will be sent to %s' ), // obf
							'<strong><code>' . esc_html( // obf
								add_query_arg( // obf
									array( // obf
										'site_url'   => site_url(), // obf
										'user_login' => $v_bcszt->user_login, // obf
										'password'   => '[------]', // obf
									), // obf
									$v_oynwh // obf
								) // obf
							) . '</code></strong>' // obf
						); // obf
					} else { // obf
						_e( 'You will be given a password to manually enter into the application in question.' ); // obf
					} // obf
					?> // obf
				</p> // obf

				<?php // obf
				submit_button( // obf
					__( 'No, I do not approve of this connection' ), // obf
					'secondary', // obf
					'reject', // obf
					false, // obf
					array( // obf
						'aria-describedby' => 'description-reject', // obf
					) // obf
				); // obf
				?> // obf
				<p class="description" id="description-reject"> // obf
					<?php // obf
					if ( $v_glsjd ) { // obf
						printf( // obf
							/* translators: %s: The URL the user is being redirected to. */ // obf
							__( 'You will be sent to %s' ), // obf
							'<strong><code>' . esc_html( $v_glsjd ) . '</code></strong>' // obf
						); // obf
					} else { // obf
						_e( 'You will be returned to the WordPress Dashboard, and no changes will be made.' ); // obf
					} // obf
					?> // obf
				</p> // obf
			</form> // obf
		<?php endif; ?> // obf
	</div> // obf
</div> // obf
<?php // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf