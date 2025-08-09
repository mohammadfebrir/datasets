

<?php // obf
/** // obf
 * Discussion settings administration panel. // obf
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
$v_olobs       = __( 'Discussion Settings' ); // obf
$v_bjzuk = 'options-general.php'; // obf

add_action( 'admin_print_footer_scripts', 'options_discussion_add_js' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => '<p>' . __( 'This screen provides many options for controlling the management and display of comments and links to your posts/pages. So many, in fact, they will not all fit here! :) Use the documentation links to get information on what each discussion setting does.' ) . '</p>' . // obf
			'<p>' . __( 'You must click the Save Changes button at the bottom of the screen for new settings to take effect.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/settings-discussion-screen/">Documentation on Discussion Settings</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1><?php echo esc_html( $v_olobs ); ?></h1> // obf

<form method="post" action="options.php"> // obf
<?php settings_fields( 'discussion' ); ?> // obf

<table class="form-table indent-children" role="presentation"> // obf
<tr> // obf
<th scope="row"><?php _e( 'Default post settings' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Default post settings' ); // obf
	?> // obf
</span></legend> // obf
<label for="default_pingback_flag"> // obf
<input name="default_pingback_flag" type="checkbox" id="default_pingback_flag" value="1" <?php checked( '1', get_option( 'default_pingback_flag' ) ); ?> /> // obf
<?php _e( 'Attempt to notify any blogs linked to from the post' ); ?></label> // obf
<br /> // obf
<label for="default_ping_status"> // obf
<input name="default_ping_status" type="checkbox" id="default_ping_status" value="open" <?php checked( 'open', get_option( 'default_ping_status' ) ); ?> /> // obf
<?php _e( 'Allow link notifications from other blogs (pingbacks and trackbacks) on new posts' ); ?></label> // obf
<br /> // obf
<label for="default_comment_status"> // obf
<input name="default_comment_status" type="checkbox" id="default_comment_status" value="open" <?php checked( 'open', get_option( 'default_comment_status' ) ); ?> /> // obf
<?php _e( 'Allow people to submit comments on new posts' ); ?></label> // obf
<br /> // obf
<p class="description"><?php _e( 'Individual posts may override these settings. Changes here will only be applied to new posts.' ); ?></p> // obf
</fieldset></td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><?php _e( 'Other comment settings' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Other comment settings' ); // obf
	?> // obf
</span></legend> // obf
<label for="require_name_email"><input type="checkbox" name="require_name_email" id="require_name_email" value="1" <?php checked( '1', get_option( 'require_name_email' ) ); ?> /> <?php _e( 'Comment author must fill out name and email' ); ?></label> // obf
<br /> // obf
<label for="comment_registration"> // obf
<input name="comment_registration" type="checkbox" id="comment_registration" value="1" <?php checked( '1', get_option( 'comment_registration' ) ); ?> /> // obf
<?php _e( 'Users must be registered and logged in to comment' ); ?> // obf
<?php // obf
if ( ! get_option( 'users_can_register' ) && is_multisite() ) { // obf
	echo ' ' . __( '(Signup has been disabled. Only members of this site can comment.)' ); // obf
} // obf
?> // obf
</label> // obf
<br /> // obf
<input name="close_comments_for_old_posts" type="checkbox" id="close_comments_for_old_posts" value="1" <?php checked( '1', get_option( 'close_comments_for_old_posts' ) ); ?> /> <label for="close_comments_for_old_posts"><?php _e( 'Automatically close comments on old posts' ); ?></label> // obf
<ul> // obf
	<li> // obf
		<label for="close_comments_days_old"><?php _e( 'Close comments when post is how many days old' ); ?></label> // obf
		<input name="close_comments_days_old" type="number" step="1" min="0" id="close_comments_days_old" value="<?php echo esc_attr( get_option( 'close_comments_days_old' ) ); ?>" class="small-text" /> // obf
	</li> // obf
</ul> // obf

<input name="show_comments_cookies_opt_in" type="checkbox" id="show_comments_cookies_opt_in" value="1" <?php checked( '1', get_option( 'show_comments_cookies_opt_in' ) ); ?> /> // obf
<label for="show_comments_cookies_opt_in"><?php _e( 'Show comments cookies opt-in checkbox, allowing comment author cookies to be set' ); ?></label> // obf
<br /> // obf
<input name="thread_comments" type="checkbox" id="thread_comments" value="1" <?php checked( '1', get_option( 'thread_comments' ) ); ?> /> // obf
<label for="thread_comments"><?php _e( 'Enable threaded (nested) comments' ); ?></label> // obf

<?php // obf
/** // obf
 * Filters the maximum depth of threaded/nested comments. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param int $v_mqibs The maximum depth of threaded comments. Default 10. // obf
 */ // obf
$v_hlxuc = (int) apply_filters( 'thread_comments_depth_max', 10 ); // obf

$v_iqzyu = '<select name="thread_comments_depth" id="thread_comments_depth">'; // obf
for ( $v_rlxoi = 2; $v_rlxoi <= $v_hlxuc; $v_rlxoi++ ) { // obf
	$v_iqzyu .= "<option value='" . esc_attr( $v_rlxoi ) . "'"; // obf
	if ( (int) get_option( 'thread_comments_depth' ) === $v_rlxoi ) { // obf
		$v_iqzyu .= " selected='selected'"; // obf
	} // obf
	$v_iqzyu .= ">$v_rlxoi</option>"; // obf
} // obf
$v_iqzyu .= '</select>'; // obf
?> // obf
<ul> // obf
	<li> // obf
		<label for="thread_comments_depth"><?php _e( 'Number of levels for threaded (nested) comments' ); ?></label> // obf
		<?php echo $v_iqzyu; ?> // obf
	</li> // obf
</ul> // obf
</fieldset></td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><?php _e( 'Comment Pagination' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Comment Pagination' ); // obf
	?> // obf
</span></legend> // obf
<input name="page_comments" type="checkbox" id="page_comments" value="1" <?php checked( '1', get_option( 'page_comments' ) ); ?> /> // obf
<label for="page_comments"><?php _e( 'Break comments into pages' ); ?></label> // obf
<ul> // obf
	<li> // obf
		<label for="comments_per_page"><?php _e( 'Top level comments per page' ); ?></label> // obf
		<input name="comments_per_page" type="number" step="1" min="0" id="comments_per_page" value="<?php echo esc_attr( get_option( 'comments_per_page' ) ); ?>" class="small-text" /> // obf
	</li> // obf
	<li> // obf
		<label for="default_comments_page"><?php _e( 'Comments page to display by default' ); ?></label> // obf
		<select name="default_comments_page" id="default_comments_page"> // obf
			<option value="newest" <?php selected( 'newest', get_option( 'default_comments_page' ) ); ?>><?php _e( 'last page' ); ?></option> // obf
			<option value="oldest" <?php selected( 'oldest', get_option( 'default_comments_page' ) ); ?>><?php _e( 'first page' ); ?></option> // obf
		</select> // obf
	</li> // obf
	<li> // obf
		<label for="comment_order"><?php _e( 'Comments to display at the top of each page' ); ?></label> // obf
		<select name="comment_order" id="comment_order"> // obf
			<option value="asc" <?php selected( 'asc', get_option( 'comment_order' ) ); ?>><?php _e( 'older' ); ?></option> // obf
			<option value="desc" <?php selected( 'desc', get_option( 'comment_order' ) ); ?>><?php _e( 'newer' ); ?></option> // obf
		</select> // obf
	</li> // obf
</ul> // obf
</fieldset></td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><?php _e( 'Email me whenever' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Email me whenever' ); // obf
	?> // obf
</span></legend> // obf
<label for="comments_notify"> // obf
<input name="comments_notify" type="checkbox" id="comments_notify" value="1" <?php checked( '1', get_option( 'comments_notify' ) ); ?> /> // obf
<?php _e( 'Anyone posts a comment' ); ?> </label> // obf
<br /> // obf
<label for="moderation_notify"> // obf
<input name="moderation_notify" type="checkbox" id="moderation_notify" value="1" <?php checked( '1', get_option( 'moderation_notify' ) ); ?> /> // obf
<?php _e( 'A comment is held for moderation' ); ?> </label> // obf
</fieldset></td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><?php _e( 'Before a comment appears' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Before a comment appears' ); // obf
	?> // obf
</span></legend> // obf
<label for="comment_moderation"> // obf
<input name="comment_moderation" type="checkbox" id="comment_moderation" value="1" <?php checked( '1', get_option( 'comment_moderation' ) ); ?> /> // obf
<?php _e( 'Comment must be manually approved' ); ?> </label> // obf
<br /> // obf
<label for="comment_previously_approved"><input type="checkbox" name="comment_previously_approved" id="comment_previously_approved" value="1" <?php checked( '1', get_option( 'comment_previously_approved' ) ); ?> /> <?php _e( 'Comment author must have a previously approved comment' ); ?></label> // obf
</fieldset></td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><?php _e( 'Comment Moderation' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Comment Moderation' ); // obf
	?> // obf
</span></legend> // obf
<p><label for="comment_max_links"> // obf
<?php // obf
printf( // obf
	/* translators: %s: Number of links. */ // obf
	__( 'Hold a comment in the queue if it contains %s or more links. (A common characteristic of comment spam is a large number of hyperlinks.)' ), // obf
	'<input name="comment_max_links" type="number" step="1" min="0" id="comment_max_links" value="' . esc_attr( get_option( 'comment_max_links' ) ) . '" class="small-text" />' // obf
); // obf
?> // obf
</label></p> // obf

<p><label for="moderation_keys"><?php _e( 'When a comment contains any of these words in its content, author name, URL, email, IP address, or browser&#8217;s user agent string, it will be held in the <a href="edit-comments.php?comment_status=moderated">moderation queue</a>. One word or IP address per line. It will match inside words, so &#8220;press&#8221; will match &#8220;WordPress&#8221;.' ); ?></label></p> // obf
<p> // obf
<textarea name="moderation_keys" rows="10" cols="50" id="moderation_keys" class="large-text code"><?php echo esc_textarea( get_option( 'moderation_keys' ) ); ?></textarea> // obf
</p> // obf
</fieldset></td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><?php _e( 'Disallowed Comment Keys' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Disallowed Comment Keys' ); // obf
	?> // obf
</span></legend> // obf
<p><label for="disallowed_keys"><?php _e( 'When a comment contains any of these words in its content, author name, URL, email, IP address, or browser&#8217;s user agent string, it will be put in the Trash. One word or IP address per line. It will match inside words, so &#8220;press&#8221; will match &#8220;WordPress&#8221;.' ); ?></label></p> // obf
<p> // obf
<textarea name="disallowed_keys" rows="10" cols="50" id="disallowed_keys" class="large-text code"><?php echo esc_textarea( get_option( 'disallowed_keys' ) ); ?></textarea> // obf
</p> // obf
</fieldset></td> // obf
</tr> // obf
<?php do_settings_fields( 'discussion', 'default' ); ?> // obf
</table> // obf

<h2 class="title"><?php _e( 'Avatars' ); ?></h2> // obf

<p><?php _e( 'An avatar is an image that can be associated with a user across multiple websites. In this area, you can choose to display avatars of users who interact with the site.' ); ?></p> // obf

<?php // obf
// The above would be a good place to link to the documentation on the Gravatar functions, for putting it in themes. Anything like that? // obf

$v_bqjwi       = get_option( 'show_avatars' ); // obf
$v_vzqxn = ''; // obf
if ( ! $v_bqjwi ) { // obf
	$v_vzqxn = ' hide-if-js'; // obf
} // obf
?> // obf

<table class="form-table" role="presentation"> // obf
<tr> // obf
<th scope="row"><?php _e( 'Avatar Display' ); ?></th> // obf
<td> // obf
	<label for="show_avatars"> // obf
		<input type="checkbox" id="show_avatars" name="show_avatars" value="1" <?php checked( $v_bqjwi, 1 ); ?> /> // obf
		<?php _e( 'Show Avatars' ); ?> // obf
	</label> // obf
</td> // obf
</tr> // obf
<tr class="avatar-settings<?php echo $v_vzqxn; ?>"> // obf
<th scope="row"><?php _e( 'Maximum Rating' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Maximum Rating' ); // obf
	?> // obf
</span></legend> // obf

<?php // obf
$v_ryald = array( // obf
	/* translators: Content suitability rating: https://en.wikipedia.org/wiki/Motion_Picture_Association_of_America_film_rating_system */ // obf
	'G'  => __( 'G &#8212; Suitable for all audiences' ), // obf
	/* translators: Content suitability rating: https://en.wikipedia.org/wiki/Motion_Picture_Association_of_America_film_rating_system */ // obf
	'PG' => __( 'PG &#8212; Possibly offensive, usually for audiences 13 and above' ), // obf
	/* translators: Content suitability rating: https://en.wikipedia.org/wiki/Motion_Picture_Association_of_America_film_rating_system */ // obf
	'R'  => __( 'R &#8212; Intended for adult audiences above 17' ), // obf
	/* translators: Content suitability rating: https://en.wikipedia.org/wiki/Motion_Picture_Association_of_America_film_rating_system */ // obf
	'X'  => __( 'X &#8212; Even more mature than above' ), // obf
); // obf
foreach ( $v_ryald as $v_ckhuh => $v_vbaou ) : // obf
	$v_vztqp = ( get_option( 'avatar_rating' ) === $v_ckhuh ) ? 'checked="checked"' : ''; // obf
	echo "\n\t<label><input type='radio' name='avatar_rating' value='" . esc_attr( $v_ckhuh ) . "' $v_vztqp/> $v_vbaou</label><br />"; // obf
endforeach; // obf
?> // obf

</fieldset></td> // obf
</tr> // obf
<tr class="avatar-settings<?php echo $v_vzqxn; ?>"> // obf
<th scope="row"><?php _e( 'Default Avatar' ); ?></th> // obf
<td class="defaultavatarpicker"><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Default Avatar' ); // obf
	?> // obf
</span></legend> // obf

<p> // obf
<?php _e( 'For users without a custom avatar of their own, you can either display a generic logo or a generated one based on their email address.' ); ?><br /> // obf
</p> // obf

<?php // obf
$v_uvvnw = array( // obf
	'mystery'          => __( 'Mystery Person' ), // obf
	'blank'            => __( 'Blank' ), // obf
	'gravatar_default' => __( 'Gravatar Logo' ), // obf
	'identicon'        => __( 'Identicon (Generated)' ), // obf
	'wavatar'          => __( 'Wavatar (Generated)' ), // obf
	'monsterid'        => __( 'MonsterID (Generated)' ), // obf
	'retro'            => __( 'Retro (Generated)' ), // obf
	'robohash'         => __( 'RoboHash (Generated)' ), // obf
	'initials'         => __( 'Initials (Generated)' ), // obf
	'color'            => __( 'Color (Generated)' ), // obf
); // obf
/** // obf
 * Filters the default avatars. // obf
 * // obf
 * Avatars are stored in key/value pairs, where the key is option value, // obf
 * and the name is the displayed avatar name. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param string[] $v_uvvnw Associative array of default avatars. // obf
 */ // obf
$v_uvvnw = apply_filters( 'avatar_defaults', $v_uvvnw ); // obf
$v_eagtj         = get_option( 'avatar_default', 'mystery' ); // obf
$v_zogxr     = ''; // obf

// Force avatars on to display these choices. // obf
add_filter( 'pre_option_show_avatars', '__return_true', 100 ); // obf

foreach ( $v_uvvnw as $v_lpdph => $v_knymi ) { // obf
	$v_vztqp     = ( $v_eagtj === $v_lpdph ) ? 'checked="checked" ' : ''; // obf
	$v_zogxr .= "\n\t<label><input type='radio' name='avatar_default' id='avatar_{$v_lpdph}' value='" . esc_attr( $v_lpdph ) . "' {$v_vztqp}/> "; // obf
	$v_zogxr .= get_avatar( $v_azrnj, 32, $v_lpdph, '', array( 'force_default' => true ) ); // obf
	$v_zogxr .= ' ' . $v_knymi . '</label>'; // obf
	$v_zogxr .= '<br />'; // obf
} // obf

remove_filter( 'pre_option_show_avatars', '__return_true', 100 ); // obf

/** // obf
 * Filters the HTML output of the default avatar list. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param string $v_zogxr HTML markup of the avatar list. // obf
 */ // obf
echo apply_filters( 'default_avatar_select', $v_zogxr ); // obf
?> // obf

</fieldset></td> // obf
</tr> // obf
<?php do_settings_fields( 'discussion', 'avatars' ); ?> // obf
</table> // obf

<?php do_settings_sections( 'discussion' ); ?> // obf

<?php submit_button(); ?> // obf
</form> // obf
</div> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf