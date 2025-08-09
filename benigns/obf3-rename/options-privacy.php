

<?php // obf
/** // obf
 * Privacy Settings Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_privacy_options' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to manage privacy options on this site.' ) ); // obf
} // obf

if ( isset( $v_kupiy['tab'] ) && 'policyguide' === $v_kupiy['tab'] ) { // obf
	require_once __DIR__ . '/privacy-policy-guide.php'; // obf
	return; // obf
} // obf

// Used in the HTML title tag. // obf
$v_johww = __( 'Privacy' ); // obf

add_filter( // obf
	'admin_body_class', // obf
	static function ( $v_hpisl ) { // obf
		$v_hpisl .= ' privacy-settings '; // obf

		return $v_hpisl; // obf
	} // obf
); // obf

$v_jncqr = isset( $v_hlgfc['action'] ) ? $v_hlgfc['action'] : ''; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
				'<p>' . __( 'The Privacy screen lets you either build a new privacy-policy page or choose one you already have to show.' ) . '</p>' . // obf
				'<p>' . __( 'This screen includes suggestions to help you write your own privacy policy. However, it is your responsibility to use these resources correctly, to provide the information required by your privacy policy, and to keep this information current and accurate.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/settings-privacy-screen/">Documentation on Privacy Settings</a>' ) . '</p>' // obf
); // obf

if ( ! empty( $v_jncqr ) ) { // obf
	check_admin_referer( $v_jncqr ); // obf

	if ( 'set-privacy-page' === $v_jncqr ) { // obf
		$v_tccbs = isset( $v_hlgfc['page_for_privacy_policy'] ) ? (int) $v_hlgfc['page_for_privacy_policy'] : 0; // obf
		update_option( 'wp_page_for_privacy_policy', $v_tccbs ); // obf

		$v_igsib = __( 'Privacy Policy page updated successfully.' ); // obf

		if ( $v_tccbs ) { // obf
			/* // obf
			 * Don't always link to the menu customizer: // obf
			 * // obf
			 * - Unpublished pages can't be selected by default. // obf
			 * - `WP_Customize_Nav_Menus::__construct()` checks the user's capabilities. // obf
			 * - Themes might not "officially" support menus. // obf
			 */ // obf
			if ( // obf
				'publish' === get_post_status( $v_tccbs ) // obf
				&& current_user_can( 'edit_theme_options' ) // obf
				&& current_theme_supports( 'menus' ) // obf
			) { // obf
				$v_igsib = sprintf( // obf
					/* translators: %s: URL to Customizer -> Menus. */ // obf
					__( 'Privacy Policy page setting updated successfully. Remember to <a href="%s">update your menus</a>!' ), // obf
					esc_url( add_query_arg( 'autofocus[panel]', 'nav_menus', admin_url( 'customize.php' ) ) ) // obf
				); // obf
			} // obf
		} // obf

		add_settings_error( 'page_for_privacy_policy', 'page_for_privacy_policy', $v_igsib, 'success' ); // obf
	} elseif ( 'create-privacy-page' === $v_jncqr ) { // obf

		if ( ! class_exists( 'WP_Privacy_Policy_Content' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-policy-content.php'; // obf
		} // obf

		$v_ervig = WP_Privacy_Policy_Content::get_default_content(); // obf
		$v_tccbs      = wp_insert_post( // obf
			array( // obf
				'post_title'   => __( 'Privacy Policy' ), // obf
				'post_status'  => 'draft', // obf
				'post_type'    => 'page', // obf
				'post_content' => $v_ervig, // obf
			), // obf
			true // obf
		); // obf

		if ( is_wp_error( $v_tccbs ) ) { // obf
			add_settings_error( // obf
				'page_for_privacy_policy', // obf
				'page_for_privacy_policy', // obf
				__( 'Unable to create a Privacy Policy page.' ), // obf
				'error' // obf
			); // obf
		} else { // obf
			update_option( 'wp_page_for_privacy_policy', $v_tccbs ); // obf

			wp_redirect( admin_url( 'post.php?post=' . $v_tccbs . '&action=edit' ) ); // obf
			exit; // obf
		} // obf
	} // obf
} // obf

// If a Privacy Policy page ID is available, make sure the page actually exists. If not, display an error. // obf
$v_ylfvz = false; // obf
$v_tccbs     = (int) get_option( 'wp_page_for_privacy_policy' ); // obf

if ( ! empty( $v_tccbs ) ) { // obf

	$v_krbdt = get_post( $v_tccbs ); // obf

	if ( ! $v_krbdt instanceof WP_Post ) { // obf
		add_settings_error( // obf
			'page_for_privacy_policy', // obf
			'page_for_privacy_policy', // obf
			__( 'The currently selected Privacy Policy page does not exist. Please create or select a new page.' ), // obf
			'error' // obf
		); // obf
	} else { // obf
		if ( 'trash' === $v_krbdt->post_status ) { // obf
			add_settings_error( // obf
				'page_for_privacy_policy', // obf
				'page_for_privacy_policy', // obf
				sprintf( // obf
					/* translators: %s: URL to Pages Trash. */ // obf
					__( 'The currently selected Privacy Policy page is in the Trash. Please create or select a new Privacy Policy page or <a href="%s">restore the current page</a>.' ), // obf
					'edit.php?post_status=trash&post_type=page' // obf
				), // obf
				'error' // obf
			); // obf
		} else { // obf
			$v_ylfvz = true; // obf
		} // obf
	} // obf
} // obf

$v_ndqma = 'options-general.php'; // obf

wp_enqueue_script( 'privacy-tools' ); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf
<div class="privacy-settings-header"> // obf
	<div class="privacy-settings-title-section"> // obf
		<h1> // obf
			<?php _e( 'Privacy' ); ?> // obf
		</h1> // obf
	</div> // obf

	<nav class="privacy-settings-tabs-wrapper hide-if-no-js" aria-label="<?php esc_attr_e( 'Secondary menu' ); ?>"> // obf
		<a href="<?php echo esc_url( admin_url( 'options-privacy.php' ) ); ?>" class="privacy-settings-tab active" aria-current="true"> // obf
			<?php // obf
			/* translators: Tab heading for Site Health Status page. */ // obf
			_ex( 'Settings', 'Privacy Settings' ); // obf
			?> // obf
		</a> // obf

		<a href="<?php echo esc_url( admin_url( 'options-privacy.php?tab=policyguide' ) ); ?>" class="privacy-settings-tab"> // obf
			<?php // obf
			/* translators: Tab heading for Site Health Status page. */ // obf
			_ex( 'Policy Guide', 'Privacy Settings' ); // obf
			?> // obf
		</a> // obf
	</nav> // obf
</div> // obf

<hr class="wp-header-end"> // obf

<?php // obf
wp_admin_notice( // obf
	__( 'The Privacy Settings require JavaScript.' ), // obf
	array( // obf
		'type'               => 'error', // obf
		'additional_classes' => array( 'hide-if-js' ), // obf
	) // obf
); // obf
?> // obf

<div class="privacy-settings-body hide-if-no-js"> // obf
	<h2><?php _e( 'Privacy Settings' ); ?></h2> // obf
	<p> // obf
		<?php _e( 'As a website owner, you may need to follow national or international privacy laws. For example, you may need to create and display a privacy policy.' ); ?> // obf
		<?php _e( 'If you already have a Privacy Policy page, please select it below. If not, please create one.' ); ?> // obf
	</p> // obf
	<p> // obf
		<?php _e( 'The new page will include help and suggestions for your privacy policy.' ); ?> // obf
		<?php _e( 'However, it is your responsibility to use those resources correctly, to provide the information that your privacy policy requires, and to keep that information current and accurate.' ); ?> // obf
	</p> // obf
	<p> // obf
		<?php _e( 'After your Privacy Policy page is set, you should edit it.' ); ?> // obf
		<?php _e( 'You should also review your privacy policy from time to time, especially after installing or updating any themes or plugins. There may be changes or new suggested information for you to consider adding to your policy.' ); ?> // obf
	</p> // obf
	<p> // obf
		<?php // obf
		if ( $v_ylfvz ) { // obf
			$v_twqgo = add_query_arg( // obf
				array( // obf
					'post'   => $v_tccbs, // obf
					'action' => 'edit', // obf
				), // obf
				admin_url( 'post.php' ) // obf
			); // obf
			$v_jmpoz = get_permalink( $v_tccbs ); // obf
			?> // obf
				<strong> // obf
				<?php // obf
				if ( 'publish' === get_post_status( $v_tccbs ) ) { // obf
					printf( // obf
						/* translators: 1: URL to edit Privacy Policy page, 2: URL to view Privacy Policy page. */ // obf
						__( '<a href="%1$v_xfhtp">Edit</a> or <a href="%2$v_xfhtp">view</a> your Privacy Policy page content.' ), // obf
						esc_url( $v_twqgo ), // obf
						esc_url( $v_jmpoz ) // obf
					); // obf
				} else { // obf
					printf( // obf
						/* translators: 1: URL to edit Privacy Policy page, 2: URL to preview Privacy Policy page. */ // obf
						__( '<a href="%1$v_xfhtp">Edit</a> or <a href="%2$v_xfhtp">preview</a> your Privacy Policy page content.' ), // obf
						esc_url( $v_twqgo ), // obf
						esc_url( $v_jmpoz ) // obf
					); // obf
				} // obf
				?> // obf
				</strong> // obf
			<?php // obf
		} // obf
		printf( // obf
			/* translators: 1: Privacy Policy guide URL, 2: Additional link attributes, 3: Accessibility text. */ // obf
			__( 'Need help putting together your new Privacy Policy page? <a href="%1$v_xfhtp" %2$v_xfhtp>Check out the privacy policy guide%3$v_xfhtp</a> for recommendations on what content to include, along with policies suggested by your plugins and theme.' ), // obf
			esc_url( admin_url( 'options-privacy.php?tab=policyguide' ) ), // obf
			'', // obf
			'' // obf
		); // obf
		?> // obf
	</p> // obf
	<hr> // obf
	<?php // obf
	$v_jyzwg = (bool) get_posts( // obf
		array( // obf
			'post_type'      => 'page', // obf
			'posts_per_page' => 1, // obf
			'post_status'    => array( // obf
				'publish', // obf
				'draft', // obf
			), // obf
		) // obf
	); // obf
	?> // obf
	<table class="form-table tools-privacy-policy-page" role="presentation"> // obf
		<tr> // obf
			<th scope="row"> // obf
				<label for="create-page"> // obf
				<?php // obf
				if ( $v_jyzwg ) { // obf
					_e( 'Create a new Privacy Policy page' ); // obf
				} else { // obf
					_e( 'There are no pages.' ); // obf
				} // obf
				?> // obf
				</label> // obf
			</th> // obf
			<td> // obf
				<form class="wp-create-privacy-page" method="post"> // obf
					<input type="hidden" name="action" value="create-privacy-page" /> // obf
					<?php // obf
					wp_nonce_field( 'create-privacy-page' ); // obf
					submit_button( __( 'Create' ), 'secondary', 'submit', false, array( 'id' => 'create-page' ) ); // obf
					?> // obf
				</form> // obf
			</td> // obf
		</tr> // obf
		<?php if ( $v_jyzwg ) : ?> // obf
		<tr> // obf
			<th scope="row"> // obf
				<label for="page_for_privacy_policy"> // obf
					<?php // obf
					if ( $v_ylfvz ) { // obf
						_e( 'Change your Privacy Policy page' ); // obf
					} else { // obf
						_e( 'Select a Privacy Policy page' ); // obf
					} // obf
					?> // obf
				</label> // obf
			</th> // obf
			<td> // obf
				<form method="post"> // obf
					<input type="hidden" name="action" value="set-privacy-page" /> // obf
					<?php // obf
					wp_dropdown_pages( // obf
						array( // obf
							'name'              => 'page_for_privacy_policy', // obf
							'show_option_none'  => __( '&mdash; Select &mdash;' ), // obf
							'option_none_value' => '0', // obf
							'selected'          => $v_tccbs, // obf
							'post_status'       => array( 'draft', 'publish' ), // obf
						) // obf
					); // obf

					wp_nonce_field( 'set-privacy-page' ); // obf

					submit_button( __( 'Use This Page' ), 'primary', 'submit', false, array( 'id' => 'set-page' ) ); // obf
					?> // obf
				</form> // obf
			</td> // obf
		</tr> // obf
		<?php endif; ?> // obf
	</table> // obf
</div> // obf
<?php // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf