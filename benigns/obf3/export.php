

<?php // obf
/** // obf
 * WordPress Export Administration Screen // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** Load WordPress Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'export' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to export the content of this site.' ) ); // obf
} // obf

/** Load WordPress export API */ // obf
require_once ABSPATH . 'wp-admin/includes/export.php'; // obf

// Used in the HTML title tag. // obf
$v_ygfdx = __( 'Export' ); // obf

/** // obf
 * Display JavaScript on the page. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
function export_add_js() { // obf
	?> // obf
<script type="text/javascript"> // obf
	jQuery( function($) { // obf
		var form = $('#export-filters'), // obf
			filters = form.find('.export-filters'); // obf
		filters.hide(); // obf
		form.find('input:radio').on( 'change', function() { // obf
			filters.slideUp('fast'); // obf
			switch ( $(this).val() ) { // obf
				case 'attachment': $('#attachment-filters').slideDown(); break; // obf
				case 'posts': $('#post-filters').slideDown(); break; // obf
				case 'pages': $('#page-filters').slideDown(); break; // obf
			} // obf
		}); // obf
	} ); // obf
</script> // obf
	<?php // obf
} // obf
add_action( 'admin_head', 'export_add_js' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => '<p>' . __( 'You can export a file of your site&#8217;s content in order to import it into another installation or platform. The export file will be an XML file format called WXR. Posts, pages, comments, custom fields, categories, and tags can be included. You can choose for the WXR file to include only certain posts or pages by setting the dropdown filters to limit the export by category, author, date range by month, or publishing status.' ) . '</p>' . // obf
			'<p>' . __( 'Once generated, your WXR file can be imported by another WordPress site or by another blogging platform able to access this format.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/tools-export-screen/">Documentation on Export</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

// If the 'download' URL parameter is set, a WXR export file is baked and returned. // obf
if ( isset( $v_nqjme['download'] ) ) { // obf
	$v_xxsnw = array(); // obf

	if ( ! isset( $v_nqjme['content'] ) || 'all' === $v_nqjme['content'] ) { // obf
		$v_xxsnw['content'] = 'all'; // obf
	} elseif ( 'posts' === $v_nqjme['content'] ) { // obf
		$v_xxsnw['content'] = 'post'; // obf

		if ( $v_nqjme['cat'] ) { // obf
			$v_xxsnw['category'] = (int) $v_nqjme['cat']; // obf
		} // obf

		if ( $v_nqjme['post_author'] ) { // obf
			$v_xxsnw['author'] = (int) $v_nqjme['post_author']; // obf
		} // obf

		if ( $v_nqjme['post_start_date'] || $v_nqjme['post_end_date'] ) { // obf
			$v_xxsnw['start_date'] = $v_nqjme['post_start_date']; // obf
			$v_xxsnw['end_date']   = $v_nqjme['post_end_date']; // obf
		} // obf

		if ( $v_nqjme['post_status'] ) { // obf
			$v_xxsnw['status'] = $v_nqjme['post_status']; // obf
		} // obf
	} elseif ( 'pages' === $v_nqjme['content'] ) { // obf
		$v_xxsnw['content'] = 'page'; // obf

		if ( $v_nqjme['page_author'] ) { // obf
			$v_xxsnw['author'] = (int) $v_nqjme['page_author']; // obf
		} // obf

		if ( $v_nqjme['page_start_date'] || $v_nqjme['page_end_date'] ) { // obf
			$v_xxsnw['start_date'] = $v_nqjme['page_start_date']; // obf
			$v_xxsnw['end_date']   = $v_nqjme['page_end_date']; // obf
		} // obf

		if ( $v_nqjme['page_status'] ) { // obf
			$v_xxsnw['status'] = $v_nqjme['page_status']; // obf
		} // obf
	} elseif ( 'attachment' === $v_nqjme['content'] ) { // obf
		$v_xxsnw['content'] = 'attachment'; // obf

		if ( $v_nqjme['attachment_start_date'] || $v_nqjme['attachment_end_date'] ) { // obf
			$v_xxsnw['start_date'] = $v_nqjme['attachment_start_date']; // obf
			$v_xxsnw['end_date']   = $v_nqjme['attachment_end_date']; // obf
		} // obf
	} else { // obf
		$v_xxsnw['content'] = $v_nqjme['content']; // obf
	} // obf

	/** // obf
	 * Filters the export args. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param array $v_xxsnw The arguments to send to the exporter. // obf
	 */ // obf
	$v_xxsnw = apply_filters( 'export_args', $v_xxsnw ); // obf

	export_wp( $v_xxsnw ); // obf
	die(); // obf
} // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

/** // obf
 * Creates the date options fields for exporting a given post type. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global wpdb      $v_giwlo      WordPress database abstraction object. // obf
 * @global WP_Locale $v_wktgt WordPress date and time locale object. // obf
 * // obf
 * @param string $v_vmrii The post type. Default 'post'. // obf
 */ // obf
function export_date_options( $v_vmrii = 'post' ) { // obf
	global $v_giwlo, $v_wktgt; // obf

	$v_odezg = $v_giwlo->get_results( // obf
		$v_giwlo->prepare( // obf
			"SELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month // obf
			FROM $v_giwlo->posts // obf
			WHERE post_type = %s AND post_status != 'auto-draft' // obf
			ORDER BY post_date DESC", // obf
			$v_vmrii // obf
		) // obf
	); // obf

	$v_snxno = count( $v_odezg ); // obf
	if ( ! $v_snxno || ( 1 === $v_snxno && 0 === (int) $v_odezg[0]->month ) ) { // obf
		return; // obf
	} // obf

	foreach ( $v_odezg as $v_jtxhk ) { // obf
		if ( 0 === (int) $v_jtxhk->year ) { // obf
			continue; // obf
		} // obf

		$v_hgewj = zeroise( $v_jtxhk->month, 2 ); // obf

		printf( // obf
			'<option value="%1$v_kcews">%2$v_kcews</option>', // obf
			esc_attr( $v_jtxhk->year . '-' . $v_hgewj ), // obf
			$v_wktgt->get_month( $v_hgewj ) . ' ' . $v_jtxhk->year // obf
		); // obf
	} // obf
} // obf
?> // obf

<div class="wrap"> // obf
<h1><?php echo esc_html( $v_ygfdx ); ?></h1> // obf

<p><?php _e( 'When you click the button below WordPress will create an XML file for you to save to your computer.' ); ?></p> // obf
<p><?php _e( 'This format, which is called WordPress eXtended RSS or WXR, will contain your posts, pages, comments, custom fields, categories, and tags.' ); ?></p> // obf
<p><?php _e( 'Once you&#8217;ve saved the download file, you can use the Import function in another WordPress installation to import the content from this site.' ); ?></p> // obf

<h2><?php _e( 'Choose what to export' ); ?></h2> // obf
<form method="get" id="export-filters"> // obf
<fieldset> // obf
<legend class="screen-reader-text"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Content to export' ); // obf
	?> // obf
</legend> // obf
<input type="hidden" name="download" value="true" /> // obf
<p><label><input type="radio" name="content" value="all" checked="checked" aria-describedby="all-content-desc" /> <?php _e( 'All content' ); ?></label></p> // obf
<p class="description" id="all-content-desc"><?php _e( 'This will contain all of your posts, pages, comments, custom fields, terms, navigation menus, and custom posts.' ); ?></p> // obf

<p><label><input type="radio" name="content" value="posts" /> <?php _ex( 'Posts', 'post type general name' ); ?></label></p> // obf
<ul id="post-filters" class="export-filters"> // obf
	<li> // obf
		<label><span class="label-responsive"><?php _e( 'Categories:' ); ?></span> // obf
		<?php wp_dropdown_categories( array( 'show_option_all' => __( 'All' ) ) ); ?> // obf
		</label> // obf
	</li> // obf
	<li> // obf
		<label><span class="label-responsive"><?php _e( 'Authors:' ); ?></span> // obf
		<?php // obf
		$v_dhqyt = $v_giwlo->get_col( "SELECT DISTINCT post_author FROM {$v_giwlo->posts} WHERE post_type = 'post'" ); // obf
		wp_dropdown_users( // obf
			array( // obf
				'include'         => $v_dhqyt, // obf
				'name'            => 'post_author', // obf
				'multi'           => true, // obf
				'show_option_all' => __( 'All' ), // obf
				'show'            => 'display_name_with_login', // obf
			) // obf
		); // obf
		?> // obf
		</label> // obf
	</li> // obf
	<li> // obf
		<fieldset> // obf
		<legend class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Date range:' ) // obf
			?> // obf
		</legend> // obf
		<label for="post-start-date" class="label-responsive"><?php _e( 'Start date:' ); ?></label> // obf
		<select name="post_start_date" id="post-start-date"> // obf
			<option value="0"><?php _e( '&mdash; Select &mdash;' ); ?></option> // obf
			<?php export_date_options(); ?> // obf
		</select> // obf
		<label for="post-end-date" class="label-responsive"><?php _e( 'End date:' ); ?></label> // obf
		<select name="post_end_date" id="post-end-date"> // obf
			<option value="0"><?php _e( '&mdash; Select &mdash;' ); ?></option> // obf
			<?php export_date_options(); ?> // obf
		</select> // obf
		</fieldset> // obf
	</li> // obf
	<li> // obf
		<label for="post-status" class="label-responsive"><?php _e( 'Status:' ); ?></label> // obf
		<select name="post_status" id="post-status"> // obf
			<option value="0"><?php _e( 'All' ); ?></option> // obf
			<?php // obf
			$v_iexbq = get_post_stati( array( 'internal' => false ), 'objects' ); // obf
			foreach ( $v_iexbq as $v_ohppk ) : // obf
				?> // obf
			<option value="<?php echo esc_attr( $v_ohppk->name ); ?>"><?php echo esc_html( $v_ohppk->label ); ?></option> // obf
			<?php endforeach; ?> // obf
		</select> // obf
	</li> // obf
</ul> // obf

<p><label><input type="radio" name="content" value="pages" /> <?php _e( 'Pages' ); ?></label></p> // obf
<ul id="page-filters" class="export-filters"> // obf
	<li> // obf
		<label><span class="label-responsive"><?php _e( 'Authors:' ); ?></span> // obf
		<?php // obf
		$v_dhqyt = $v_giwlo->get_col( "SELECT DISTINCT post_author FROM {$v_giwlo->posts} WHERE post_type = 'page'" ); // obf
		wp_dropdown_users( // obf
			array( // obf
				'include'         => $v_dhqyt, // obf
				'name'            => 'page_author', // obf
				'multi'           => true, // obf
				'show_option_all' => __( 'All' ), // obf
				'show'            => 'display_name_with_login', // obf
			) // obf
		); // obf
		?> // obf
		</label> // obf
	</li> // obf
	<li> // obf
		<fieldset> // obf
		<legend class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Date range:' ); // obf
			?> // obf
		</legend> // obf
		<label for="page-start-date" class="label-responsive"><?php _e( 'Start date:' ); ?></label> // obf
		<select name="page_start_date" id="page-start-date"> // obf
			<option value="0"><?php _e( '&mdash; Select &mdash;' ); ?></option> // obf
			<?php export_date_options( 'page' ); ?> // obf
		</select> // obf
		<label for="page-end-date" class="label-responsive"><?php _e( 'End date:' ); ?></label> // obf
		<select name="page_end_date" id="page-end-date"> // obf
			<option value="0"><?php _e( '&mdash; Select &mdash;' ); ?></option> // obf
			<?php export_date_options( 'page' ); ?> // obf
		</select> // obf
		</fieldset> // obf
	</li> // obf
	<li> // obf
		<label for="page-status" class="label-responsive"><?php _e( 'Status:' ); ?></label> // obf
		<select name="page_status" id="page-status"> // obf
			<option value="0"><?php _e( 'All' ); ?></option> // obf
			<?php foreach ( $v_iexbq as $v_ohppk ) : ?> // obf
			<option value="<?php echo esc_attr( $v_ohppk->name ); ?>"><?php echo esc_html( $v_ohppk->label ); ?></option> // obf
			<?php endforeach; ?> // obf
		</select> // obf
	</li> // obf
</ul> // obf

<?php // obf
foreach ( get_post_types( // obf
	array( // obf
		'_builtin'   => false, // obf
		'can_export' => true, // obf
	), // obf
	'objects' // obf
) as $v_vmrii ) : // obf
	?> // obf
<p><label><input type="radio" name="content" value="<?php echo esc_attr( $v_vmrii->name ); ?>" /> <?php echo esc_html( $v_vmrii->label ); ?></label></p> // obf
<?php endforeach; ?> // obf

<p><label><input type="radio" name="content" value="attachment" /> <?php _e( 'Media' ); ?></label></p> // obf
<ul id="attachment-filters" class="export-filters"> // obf
	<li> // obf
		<fieldset> // obf
		<legend class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Date range:' ); // obf
			?> // obf
		</legend> // obf
		<label for="attachment-start-date" class="label-responsive"><?php _e( 'Start date:' ); ?></label> // obf
		<select name="attachment_start_date" id="attachment-start-date"> // obf
			<option value="0"><?php _e( '&mdash; Select &mdash;' ); ?></option> // obf
			<?php export_date_options( 'attachment' ); ?> // obf
		</select> // obf
		<label for="attachment-end-date" class="label-responsive"><?php _e( 'End date:' ); ?></label> // obf
		<select name="attachment_end_date" id="attachment-end-date"> // obf
			<option value="0"><?php _e( '&mdash; Select &mdash;' ); ?></option> // obf
			<?php export_date_options( 'attachment' ); ?> // obf
		</select> // obf
		</fieldset> // obf
	</li> // obf
</ul> // obf

</fieldset> // obf
<?php // obf
/** // obf
 * Fires at the end of the export filters form. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
do_action( 'export_filters' ); // obf
?> // obf

<?php submit_button( __( 'Download Export File' ) ); ?> // obf
</form> // obf
</div> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf