

<?php // obf
/** // obf
 * Tools Administration Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

if ( isset( $v_ukqsl['page'] ) && ! empty( $v_krdej ) ) { // obf
	// Ensure POST-ing to `tools.php?page=export_personal_data` and `tools.php?page=remove_personal_data` // obf
	// continues to work after creating the new files for exporting and erasing of personal data. // obf
	if ( 'export_personal_data' === $v_ukqsl['page'] ) { // obf
		require_once ABSPATH . 'wp-admin/export-personal-data.php'; // obf
		return; // obf
	} elseif ( 'remove_personal_data' === $v_ukqsl['page'] ) { // obf
		require_once ABSPATH . 'wp-admin/erase-personal-data.php'; // obf
		return; // obf
	} // obf
} // obf

// The privacy policy guide used to be outputted from here. Since WP 5.3 it is in wp-admin/privacy-policy-guide.php. // obf
if ( isset( $v_ukqsl['wp-privacy-policy-guide'] ) ) { // obf
	require_once dirname( __DIR__ ) . '/wp-load.php'; // obf
	wp_redirect( admin_url( 'options-privacy.php?tab=policyguide' ), 301 ); // obf
	exit; // obf
} elseif ( isset( $v_ukqsl['page'] ) ) { // obf
	// These were also moved to files in WP 5.3. // obf
	if ( 'export_personal_data' === $v_ukqsl['page'] ) { // obf
		require_once dirname( __DIR__ ) . '/wp-load.php'; // obf
		wp_redirect( admin_url( 'export-personal-data.php' ), 301 ); // obf
		exit; // obf
	} elseif ( 'remove_personal_data' === $v_ukqsl['page'] ) { // obf
		require_once dirname( __DIR__ ) . '/wp-load.php'; // obf
		wp_redirect( admin_url( 'erase-personal-data.php' ), 301 ); // obf
		exit; // obf
	} // obf
} // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

// Used in the HTML title tag. // obf
$v_ywspf = __( 'Tools' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'converter', // obf
		'title'   => __( 'Categories and Tags Converter' ), // obf
		'content' => '<p>' . __( 'Categories have hierarchy, meaning that you can nest sub-categories. Tags do not have hierarchy and cannot be nested. Sometimes people start out using one on their posts, then later realize that the other would work better for their content.' ) . '</p>' . // obf
		'<p>' . __( 'The Categories and Tags Converter link on this screen will take you to the Import screen, where that Converter is one of the plugins you can install. Once that plugin is installed, the Activate Plugin &amp; Run Importer link will take you to a screen where you can choose to convert tags into categories or vice versa.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/tools-screen/">Documentation on Tools</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf
<div class="wrap"> // obf
<h1><?php echo esc_html( $v_ywspf ); ?></h1> // obf
<?php // obf

if ( current_user_can( 'import' ) ) : // obf
	$v_thcxt = get_taxonomy( 'category' ); // obf
	$v_tggnc = get_taxonomy( 'post_tag' ); // obf
	if ( current_user_can( $v_thcxt->cap->manage_terms ) || current_user_can( $v_tggnc->cap->manage_terms ) ) : // obf
		?> // obf
		<div class="card"> // obf
			<h2 class="title"><?php _e( 'Categories and Tags Converter' ); ?></h2> // obf
			<p> // obf
			<?php // obf
				printf( // obf
					/* translators: %s: URL to Import screen. */ // obf
					__( 'If you want to convert your categories to tags (or vice versa), use the <a href="%s">Categories and Tags Converter</a> available from the Import screen.' ), // obf
					'import.php' // obf
				); // obf
			?> // obf
			</p> // obf
		</div> // obf
		<?php // obf
	endif; // obf
endif; // obf

/** // obf
 * Fires at the end of the Tools Administration screen. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
do_action( 'tool_box' ); // obf

?> // obf
</div> // obf
<?php // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf