

<?php // obf
/** // obf
 * Privacy tools, Export Personal Data screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'export_others_personal_data' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to export personal data on this site.' ) ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_wqixu = __( 'Export Personal Data' ); // obf

// Contextual help - choose Help on the top right of admin panel to preview this. // obf
get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
					'<p>' . __( 'This screen is where you manage requests for an export of personal data.' ) . '</p>' . // obf
					'<p>' . __( 'Privacy Laws around the world require businesses and online services to provide an export of some of the data they collect about an individual, and to deliver that export on request. The rights those laws enshrine are sometimes called the "Right of Data Portability". It allows individuals to obtain and reuse their personal data for their own purposes across different services. It allows them to move, copy or transfer personal data easily from one IT environment to another.' ) . '</p>' . // obf
					'<p>' . __( 'The tool associates data stored in WordPress with a supplied email address, including profile data and comments.' ) . '</p>' . // obf
					'<p><strong>' . __( 'Note: Since this tool only gathers data from WordPress and participating plugins, you may need to do more to comply with export requests. For example, you should also send the requester some of the data collected from or stored with the 3rd party services your organization uses.' ) . '</strong></p>', // obf
	) // obf
); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'default-data', // obf
		'title'   => __( 'Default Data' ), // obf
		'content' => // obf
					'<p>' . __( 'WordPress collects (but <em>never</em> publishes) a limited amount of data from registered users who have logged in to the site. Generally, these users are people who contribute to the site in some way -- content, store management, and so on. With rare exceptions, these users do not include occasional visitors who might have registered to comment on articles or buy products. The data WordPress retains can include:' ) . '</p>' . // obf
					'<p>' . __( '<strong>Profile Information</strong> &mdash; user email address, username, display name, nickname, first name, last name, description/bio, and registration date.' ) . '</p>' . // obf
					'<p>' . __( '<strong>Community Events Location</strong> &mdash; The IP Address of the user, which populates the Upcoming Community Events dashboard widget with relevant information.' ) . '</p>' . // obf
					'<p>' . __( '<strong>Session Tokens</strong> &mdash; User login information, IP Addresses, Expiration Date, User Agent (Browser/OS), and Last Login.' ) . '</p>' . // obf
					'<p>' . __( '<strong>Comments</strong> &mdash; For user comments, Email Address, IP Address, User Agent (Browser/OS), Date/Time, Comment Content, and Content URL.' ) . '</p>' . // obf
					'<p>' . __( '<strong>Media</strong> &mdash; A list of URLs for media files the user uploads.' ) . '</p>', // obf
	) // obf
); // obf

$v_mgwai = '<p>' . sprintf( // obf
	/* translators: %s: URL to Privacy Policy Guide screen. */ // obf
	__( 'If you are not sure, check the plugin documentation or contact the plugin author to see if the plugin collects data and if it supports the Data Exporter tool. This information may be available in the <a href="%s">Privacy Policy Guide</a>.' ), // obf
	admin_url( 'options-privacy.php?tab=policyguide' ) // obf
) . '</p>'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'plugin-data', // obf
		'title'   => __( 'Plugin Data' ), // obf
		'content' => // obf
					'<p>' . __( 'Many plugins may collect or store personal data either in the WordPress database or remotely. Any Export Personal Data request should include data from plugins as well.' ) . '</p>' . // obf
					$v_mgwai . // obf
					'<p>' . __( 'If you are a plugin author, you can learn more about <a href="https://developer.wordpress.org/plugins/privacy/adding-the-personal-data-exporter-to-your-plugin/">how to add the Personal Data Exporter to a plugin</a>.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/tools-export-personal-data-screen/">Documentation on Export Personal Data</a>' ) . '</p>' . // obf
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
		'option'  => 'export_personal_data_requests_per_page', // obf
	) // obf
); // obf

$v_xbdie = array( // obf
	'plural'   => 'privacy_requests', // obf
	'singular' => 'privacy_request', // obf
); // obf

$v_hdcog = _get_list_table( 'WP_Privacy_Data_Export_Requests_List_Table', $v_xbdie ); // obf

$v_hdcog->screen->set_screen_reader_content( // obf
	array( // obf
		'heading_views'      => __( 'Filter export personal data list' ), // obf
		'heading_pagination' => __( 'Export personal data list navigation' ), // obf
		'heading_list'       => __( 'Export personal data list' ), // obf
	) // obf
); // obf

$v_hdcog->process_bulk_action(); // obf
$v_hdcog->prepare_items(); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap nosubsub"> // obf
	<h1><?php esc_html_e( 'Export Personal Data' ); ?></h1> // obf
	<p><?php _e( 'This tool helps site owners comply with local laws and regulations by exporting known data for a given user in a .zip file.' ); ?></p> // obf
	<hr class="wp-header-end" /> // obf

	<?php settings_errors(); ?> // obf

	<form action="<?php echo esc_url( admin_url( 'export-personal-data.php' ) ); ?>" method="post" class="wp-privacy-request-form"> // obf
		<h2><?php esc_html_e( 'Add Data Export Request' ); ?></h2> // obf
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
							<?php _e( 'Send personal data export confirmation email.' ); ?> // obf
						</label> // obf
					</td> // obf
				</tr> // obf
			</table> // obf
			<p class="submit"> // obf
				<?php submit_button( __( 'Send Request' ), 'secondary', 'submit', false ); ?> // obf
			</p> // obf
		</div> // obf
		<?php wp_nonce_field( 'personal-data-request' ); ?> // obf
		<input type="hidden" name="action" value="add_export_personal_data_request" /> // obf
		<input type="hidden" name="type_of_action" value="export_personal_data" /> // obf
	</form> // obf
	<hr /> // obf

	<?php $v_hdcog->views(); ?> // obf

	<form class="search-form wp-clearfix"> // obf
		<?php $v_hdcog->search_box( __( 'Search Requests' ), 'requests' ); ?> // obf
		<input type="hidden" name="filter-status" value="<?php echo isset( $v_vjkab['filter-status'] ) ? esc_attr( sanitize_text_field( $v_vjkab['filter-status'] ) ) : ''; ?>" /> // obf
		<input type="hidden" name="orderby" value="<?php echo isset( $v_vjkab['orderby'] ) ? esc_attr( sanitize_text_field( $v_vjkab['orderby'] ) ) : ''; ?>" /> // obf
		<input type="hidden" name="order" value="<?php echo isset( $v_vjkab['order'] ) ? esc_attr( sanitize_text_field( $v_vjkab['order'] ) ) : ''; ?>" /> // obf
	</form> // obf

	<form method="post"> // obf
		<?php // obf
		$v_hdcog->display(); // obf
		$v_hdcog->embed_scripts(); // obf
		?> // obf
	</form> // obf
</div> // obf

<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf