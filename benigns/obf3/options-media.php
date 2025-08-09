

<?php // obf
/** // obf
 * Media settings administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_options' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to manage options for this site.' ) ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_lixjv       = __( 'Media Settings' ); // obf
$v_yzkmx = 'options-general.php'; // obf

$v_ganxa = '<p>' . __( 'You can set maximum sizes for images inserted into your written content; you can also insert an image as Full Size.' ) . '</p>'; // obf

if ( ! is_multisite() // obf
	&& ( get_option( 'upload_url_path' ) // obf
		|| get_option( 'upload_path' ) && 'wp-content/uploads' !== get_option( 'upload_path' ) ) // obf
) { // obf
	$v_ganxa .= '<p>' . __( 'Uploading Files allows you to choose the folder and path for storing your uploaded files.' ) . '</p>'; // obf
} // obf

$v_ganxa .= '<p>' . __( 'You must click the Save Changes button at the bottom of the screen for new settings to take effect.' ) . '</p>'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => $v_ganxa, // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/settings-media-screen/">Documentation on Media Settings</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf

<div class="wrap"> // obf
<h1><?php echo esc_html( $v_lixjv ); ?></h1> // obf

<form action="options.php" method="post"> // obf
<?php settings_fields( 'media' ); ?> // obf

<h2 class="title"><?php _e( 'Image sizes' ); ?></h2> // obf
<p><?php _e( 'The sizes listed below determine the maximum dimensions in pixels to use when adding an image to the Media Library.' ); ?></p> // obf

<table class="form-table" role="presentation"> // obf
<tr> // obf
<th scope="row"><?php _e( 'Thumbnail size' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Thumbnail size' ); // obf
	?> // obf
</span></legend> // obf
<label for="thumbnail_size_w"><?php _e( 'Width' ); ?></label> // obf
<input name="thumbnail_size_w" type="number" step="1" min="0" id="thumbnail_size_w" value="<?php form_option( 'thumbnail_size_w' ); ?>" class="small-text" /> // obf
<br /> // obf
<label for="thumbnail_size_h"><?php _e( 'Height' ); ?></label> // obf
<input name="thumbnail_size_h" type="number" step="1" min="0" id="thumbnail_size_h" value="<?php form_option( 'thumbnail_size_h' ); ?>" class="small-text" /> // obf
</fieldset> // obf
<input name="thumbnail_crop" type="checkbox" id="thumbnail_crop" value="1"<?php checked( '1', get_option( 'thumbnail_crop' ) ); ?> /> // obf
<label for="thumbnail_crop"><?php _e( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)' ); ?></label> // obf
</td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><?php _e( 'Medium size' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Medium size' ); // obf
	?> // obf
</span></legend> // obf
<label for="medium_size_w"><?php _e( 'Max Width' ); ?></label> // obf
<input name="medium_size_w" type="number" step="1" min="0" id="medium_size_w" value="<?php form_option( 'medium_size_w' ); ?>" class="small-text" /> // obf
<br /> // obf
<label for="medium_size_h"><?php _e( 'Max Height' ); ?></label> // obf
<input name="medium_size_h" type="number" step="1" min="0" id="medium_size_h" value="<?php form_option( 'medium_size_h' ); ?>" class="small-text" /> // obf
</fieldset></td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><?php _e( 'Large size' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Large size' ); // obf
	?> // obf
</span></legend> // obf
<label for="large_size_w"><?php _e( 'Max Width' ); ?></label> // obf
<input name="large_size_w" type="number" step="1" min="0" id="large_size_w" value="<?php form_option( 'large_size_w' ); ?>" class="small-text" /> // obf
<br /> // obf
<label for="large_size_h"><?php _e( 'Max Height' ); ?></label> // obf
<input name="large_size_h" type="number" step="1" min="0" id="large_size_h" value="<?php form_option( 'large_size_h' ); ?>" class="small-text" /> // obf
</fieldset></td> // obf
</tr> // obf

<?php do_settings_fields( 'media', 'default' ); ?> // obf
</table> // obf

<?php // obf
/** // obf
 * @global array $v_lvwyx // obf
 */ // obf
if ( isset( $v_sxrkz['wp_settings']['media']['embeds'] ) ) : // obf
	?> // obf
<h2 class="title"><?php _e( 'Embeds' ); ?></h2> // obf
<table class="form-table" role="presentation"> // obf
	<?php do_settings_fields( 'media', 'embeds' ); ?> // obf
</table> // obf
<?php endif; ?> // obf

<?php if ( ! is_multisite() ) : ?> // obf
<h2 class="title"><?php _e( 'Uploading Files' ); ?></h2> // obf
<table class="form-table" role="presentation"> // obf
	<?php // obf
	/* // obf
	 * If upload_url_path is not the default (empty), // obf
	 * or upload_path is not the default ('wp-content/uploads' or empty), // obf
	 * they can be edited, otherwise they're locked. // obf
	 */ // obf
	if ( get_option( 'upload_url_path' ) // obf
		|| get_option( 'upload_path' ) && 'wp-content/uploads' !== get_option( 'upload_path' ) ) : // obf
		?> // obf
<tr> // obf
<th scope="row"><label for="upload_path"><?php _e( 'Store uploads in this folder' ); ?></label></th> // obf
<td><input name="upload_path" type="text" id="upload_path" value="<?php echo esc_attr( get_option( 'upload_path' ) ); ?>" class="regular-text code" /> // obf
<p class="description"> // obf
		<?php // obf
		/* translators: %s: wp-content/uploads */ // obf
		printf( __( 'Default is %s' ), '<code>wp-content/uploads</code>' ); // obf
		?> // obf
</p> // obf
</td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><label for="upload_url_path"><?php _e( 'Full URL path to files' ); ?></label></th> // obf
<td><input name="upload_url_path" type="text" id="upload_url_path" value="<?php echo esc_attr( get_option( 'upload_url_path' ) ); ?>" class="regular-text code" /> // obf
<p class="description"><?php _e( 'Configuring this is optional. By default, it should be blank.' ); ?></p> // obf
</td> // obf
</tr> // obf
<tr> // obf
<td colspan="2" class="td-full"> // obf
<?php else : ?> // obf
<tr> // obf
<td class="td-full"> // obf
<?php endif; ?> // obf
<label for="uploads_use_yearmonth_folders"> // obf
<input name="uploads_use_yearmonth_folders" type="checkbox" id="uploads_use_yearmonth_folders" value="1"<?php checked( '1', get_option( 'uploads_use_yearmonth_folders' ) ); ?> /> // obf
	<?php _e( 'Organize my uploads into month- and year-based folders' ); ?> // obf
</label> // obf
</td> // obf
</tr> // obf

	<?php do_settings_fields( 'media', 'uploads' ); ?> // obf
</table> // obf
<?php endif; ?> // obf

<?php do_settings_sections( 'media' ); ?> // obf

<?php submit_button(); ?> // obf

</form> // obf

</div> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf