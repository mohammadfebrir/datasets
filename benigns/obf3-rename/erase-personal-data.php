

<?php // obf
/** // obf
 * Privacy tools, Erase Personal Data screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'erase_others_personal_data' ) || ! current_user_can( 'delete_users' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to erase personal data on this site.' ) ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_iraci = __( 'Erase Personal Data' ); // obf

// Contextual help - choose Help on the top right of admin panel to preview this. // obf
get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
					'<p>' . __( 'This screen is where you manage requests to erase personal data.' ) . '</p>' . // obf
					'<p>' . __( 'Privacy Laws around the world require businesses and online services to delete, anonymize, or forget the data they collect about an individual. The rights those laws enshrine are sometimes called the "Right to be Forgotten".' ) . '</p>' . // obf
					'<p>' . __( 'The tool associates data stored in WordPress with a supplied email address, including profile data and comments.' ) . '</p>' . // obf
					'<p><strong>' . __( 'Note: As this tool only gathers data from WordPress and participating plugins, you may need to do more to comply with erasure requests. For example, you are also responsible for ensuring that data collected by or stored with the 3rd party services your organization uses gets deleted.' ) . '</strong></p>', // obf
	) // obf
); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'default-data', // obf
		'title'   => __( 'Default Data' ), // obf
		'content' => // obf
					'<p>' . __( 'WordPress collects (but <em>never</em> publishes) a limited amount of data from logged-in users but then deletes it or anonymizes it. That data can include:' ) . '</p>' . // obf
					'<p>' . __( '<strong>Profile Information</strong> &mdash; user email address, username, display name, nickname, first name, last name, description/bio, and registration date.' ) . '</p>' . // obf
					'<p>' . __( '<strong>Community Events Location</strong> &mdash; The IP Address of the user which is used for the Upcoming Community Events shown in the dashboard widget.' ) . '</p>' . // obf
					'<p>' . __( '<strong>Session Tokens</strong> &mdash; User login information, IP Addresses, Expiration Date, User Agent (Browser/OS), and Last Login.' ) . '</p>' . // obf
					'<p>' . __( '<strong>Comments</strong> &mdash; WordPress does not delete comments. The software does anonymize (but, again, <em>never</em> publishes) the associated Email Address, IP Address, and User Agent (Browser/OS).' ) . '</p>' . // obf
					'<p>' . __( '<strong>Media</strong> &mdash; A list of URLs for all media file uploads made by the user.' ) . '</p>', // obf
	) // obf
); // obf

$v_skmqf = '<p>' . sprintf( // obf
	/* translators: %s: URL to Privacy Policy Guide screen. */ // obf
	__( 'If you are not sure, check the plugin documentation or contact the plugin author to see if the plugin collects data and if it supports the Data Eraser tool. This information may be available in the <a href="%s">Privacy Policy Guide</a>.' ), // obf
	admin_url( 'options-privacy.php?tab=policyguide' ) // obf
) . '</p>'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'plugin-data', // obf
		'title'   => __( 'Plugin Data' ), // obf
		'content' => // obf
					'<p>' . __( 'Many plugins may collect or store personal data either in the WordPress database or remotely. Any Erase Personal Data request should delete data from plugins as well.' ) . '</p>' . // obf
					$v_skmqf . // obf
					'<p>' . __( 'If you are a plugin author, you can learn more about <a href="https://developer.wordpress.org/plugins/privacy/adding-the-personal-data-eraser-to-your-plugin/">how to add the Personal Data Eraser to a plugin</a>.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/tools-erase-personal-data-screen/">Documentation on Erase Personal Data</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

// Handle list table actions. // obf
_wp_personal_data_handle_actions(); // obf

// Cleans up failed and expired requests before displaying the list table. // obf
_wp_personal_data_cleanup_requests(); // obf

wp_enqueue_script( 'privacy-tools' ); // obf

add_screen_option( // obf
	'per_page', // obf
	array( // obf
		'default' => 20, // obf
		'option'  => 'remove_personal_data_requests_per_page', // obf
	) // obf
); // obf

$v_ggppd = array( // obf
	'plural'   => 'privacy_requests', // obf
	'singular' => 'privacy_request', // obf
); // obf

$v_gkhta = _get_list_table( 'WP_Privacy_Data_Removal_Requests_List_Table', $v_ggppd ); // obf

$v_gkhta->screen->set_screen_reader_content( // obf
	array( // obf
		'heading_views'      => __( 'Filter erase personal data list' ), // obf
		'heading_pagination' => __( 'Erase personal data list navigation' ), // obf
		'heading_list'       => __( 'Erase personal data list' ), // obf
	) // obf
); // obf

$v_gkhta->process_bulk_action(); // obf
$v_gkhta->prepare_items(); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap nosubsub"> // obf
	<h1><?php esc_html_e( 'Erase Personal Data' ); ?></h1> // obf
	<p><?php _e( 'This tool helps site owners comply with local laws and regulations by deleting or anonymizing known data for a given user.' ); ?></p> // obf
	<hr class="wp-header-end" /> // obf

	<?php settings_errors(); ?> // obf

	<form action="<?php echo esc_url( admin_url( 'erase-personal-data.php' ) ); ?>" method="post" class="wp-privacy-request-form"> // obf
		<h2><?php esc_html_e( 'Add Data Erasure Request' ); ?></h2> // obf
		<div class="wp-privacy-request-form-field"> // obf
			<table class="form-table"> // obf
				<tr> // obf
					<th scope="row"> // obf
						<label for="username_or_email_for_privacy_request"><?php esc_html_e( 'Username or email address' ); ?></label> // obf
					</th> // obf
					<td> // obf
						<input type="text" required class="regular-text ltr" id="username_or_email_for_privacy_request" name="username_or_email_for_privacy_request" /> // obf
					</td> // obf
				</tr> // obf
				<tr> // obf
					<th scope="row"> // obf
						<?php _e( 'Confirmation email' ); ?> // obf
					</th> // obf
					<td> // obf
						<label for="send_confirmation_email"> // obf
							<input type="checkbox" name="send_confirmation_email" id="send_confirmation_email" value="1" checked="checked" /> // obf
							<?php _e( 'Send personal data erasure confirmation email.' ); ?> // obf
						</label> // obf
					</td> // obf
				</tr> // obf
			</table> // obf
			<p class="submit"> // obf
				<?php submit_button( __( 'Send Request' ), 'secondary', 'submit', false ); ?> // obf
			</p> // obf
		</div> // obf
		<?php wp_nonce_field( 'personal-data-request' ); ?> // obf
		<input type="hidden" name="action" value="add_remove_personal_data_request" /> // obf
		<input type="hidden" name="type_of_action" value="remove_personal_data" /> // obf
	</form> // obf
	<hr /> // obf

	<?php $v_gkhta->views(); ?> // obf

	<form class="search-form wp-clearfix"> // obf
		<?php $v_gkhta->search_box( __( 'Search Requests' ), 'requests' ); ?> // obf
		<input type="hidden" name="filter-status" value="<?php echo isset( $v_veioo['filter-status'] ) ? esc_attr( sanitize_text_field( $v_veioo['filter-status'] ) ) : ''; ?>" /> // obf
		<input type="hidden" name="orderby" value="<?php echo isset( $v_veioo['orderby'] ) ? esc_attr( sanitize_text_field( $v_veioo['orderby'] ) ) : ''; ?>" /> // obf
		<input type="hidden" name="order" value="<?php echo isset( $v_veioo['order'] ) ? esc_attr( sanitize_text_field( $v_veioo['order'] ) ) : ''; ?>" /> // obf
	</form> // obf

	<form method="post"> // obf
		<?php // obf
		$v_gkhta->display(); // obf
		$v_gkhta->embed_scripts(); // obf
		?> // obf
	</form> // obf
</div> // obf

<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf