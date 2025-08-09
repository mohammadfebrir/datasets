

<?php // obf
/** // obf
 * Edit comment form for inclusion in another file. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * @global WP_Comment $v_lbzwa Global comment object. // obf
 */ // obf
global $v_lbzwa; // obf
?> // obf
<form name="post" action="comment.php" method="post" id="post"> // obf
<?php wp_nonce_field( 'update-comment_' . $v_lbzwa->comment_ID ); ?> // obf
<div class="wrap"> // obf
<h1><?php _e( 'Edit Comment' ); ?></h1> // obf

<div id="poststuff"> // obf
<input type="hidden" name="action" value="editedcomment" /> // obf
<input type="hidden" name="comment_ID" value="<?php echo esc_attr( $v_lbzwa->comment_ID ); ?>" /> // obf
<input type="hidden" name="comment_post_ID" value="<?php echo esc_attr( $v_lbzwa->comment_post_ID ); ?>" /> // obf

<div id="post-body" class="metabox-holder columns-2"> // obf
<div id="post-body-content" class="edit-form-section edit-comment-section"> // obf
<?php // obf
if ( 'approved' === wp_get_comment_status( $v_lbzwa ) && $v_lbzwa->comment_post_ID > 0 ) : // obf
	$v_unswy = get_comment_link( $v_lbzwa ); // obf
	?> // obf
<div class="inside"> // obf
	<div id="comment-link-box"> // obf
		<strong><?php _ex( 'Permalink:', 'comment' ); ?></strong> // obf
		<span id="sample-permalink"> // obf
			<a href="<?php echo esc_url( $v_unswy ); ?>"> // obf
				<?php echo esc_html( $v_unswy ); ?> // obf
			</a> // obf
		</span> // obf
	</div> // obf
</div> // obf
<?php endif; ?> // obf
<div id="namediv" class="stuffbox"> // obf
<div class="inside"> // obf
<h2 class="edit-comment-author"><?php _e( 'Author' ); ?></h2> // obf
<fieldset> // obf
<legend class="screen-reader-text"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Comment Author' ); // obf
	?> // obf
</legend> // obf
<table class="form-table editcomment" role="presentation"> // obf
<tbody> // obf
<tr> // obf
	<td class="first"><label for="name"><?php _e( 'Name' ); ?></label></td> // obf
	<td><input type="text" name="newcomment_author" size="30" value="<?php echo esc_attr( $v_lbzwa->comment_author ); ?>" id="name" /></td> // obf
</tr> // obf
<tr> // obf
	<td class="first"><label for="email"><?php _e( 'Email' ); ?></label></td> // obf
	<td> // obf
		<input type="text" name="newcomment_author_email" size="30" value="<?php echo esc_attr( $v_lbzwa->comment_author_email ); ?>" id="email" /> // obf
	</td> // obf
</tr> // obf
<tr> // obf
	<td class="first"><label for="newcomment_author_url"><?php _e( 'URL' ); ?></label></td> // obf
	<td> // obf
		<input type="text" id="newcomment_author_url" name="newcomment_author_url" size="30" class="code" value="<?php echo esc_url( $v_lbzwa->comment_author_url ); ?>" /> // obf
	</td> // obf
</tr> // obf
</tbody> // obf
</table> // obf
</fieldset> // obf
</div> // obf
</div> // obf

<div id="postdiv" class="postarea"> // obf
<label for="content" class="screen-reader-text"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Comment' ); // obf
	?> // obf
</label> // obf
<?php // obf
	$v_syaik = array( 'buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,close' ); // obf
	wp_editor( // obf
		$v_lbzwa->comment_content, // obf
		'content', // obf
		array( // obf
			'media_buttons' => false, // obf
			'tinymce'       => false, // obf
			'quicktags'     => $v_syaik, // obf
		) // obf
	); // obf
	wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false ); // obf
	?> // obf
</div> // obf
</div><!-- /post-body-content --> // obf

<div id="postbox-container-1" class="postbox-container"> // obf
<div id="submitdiv" class="stuffbox" > // obf
<h2><?php _e( 'Save' ); ?></h2> // obf
<div class="inside"> // obf
<div class="submitbox" id="submitcomment"> // obf
<div id="minor-publishing"> // obf

<div id="misc-publishing-actions"> // obf

<div class="misc-pub-section misc-pub-comment-status" id="comment-status"> // obf
<?php _e( 'Status:' ); ?> <span id="comment-status-display"> // obf
<?php // obf
switch ( $v_lbzwa->comment_approved ) { // obf
	case '1': // obf
		_e( 'Approved' ); // obf
		break; // obf
	case '0': // obf
		_e( 'Pending' ); // obf
		break; // obf
	case 'spam': // obf
		_e( 'Spam' ); // obf
		break; // obf
} // obf
?> // obf
</span> // obf

<fieldset id="comment-status-radio"> // obf
<legend class="screen-reader-text"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Comment status' ); // obf
	?> // obf
</legend> // obf
<label><input type="radio"<?php checked( $v_lbzwa->comment_approved, '1' ); ?> name="comment_status" value="1" /><?php _ex( 'Approved', 'comment status' ); ?></label><br /> // obf
<label><input type="radio"<?php checked( $v_lbzwa->comment_approved, '0' ); ?> name="comment_status" value="0" /><?php _ex( 'Pending', 'comment status' ); ?></label><br /> // obf
<label><input type="radio"<?php checked( $v_lbzwa->comment_approved, 'spam' ); ?> name="comment_status" value="spam" /><?php _ex( 'Spam', 'comment status' ); ?></label> // obf
</fieldset> // obf
</div><!-- .misc-pub-section --> // obf

<div class="misc-pub-section curtime misc-pub-curtime"> // obf
<?php // obf
$v_kkqbd = sprintf( // obf
	/* translators: 1: Comment date, 2: Comment time. */ // obf
	__( '%1$v_vxlbt at %2$v_vxlbt' ), // obf
	/* translators: Publish box date format, see https://www.php.net/manual/datetime.format.php */ // obf
	date_i18n( _x( 'M j, Y', 'publish box date format' ), strtotime( $v_lbzwa->comment_date ) ), // obf
	/* translators: Publish box time format, see https://www.php.net/manual/datetime.format.php */ // obf
	date_i18n( _x( 'H:i', 'publish box time format' ), strtotime( $v_lbzwa->comment_date ) ) // obf
); // obf
?> // obf
<span id="timestamp"> // obf
<?php // obf
/* translators: %s: Comment date. */ // obf
printf( __( 'Submitted on: %s' ), '<b>' . $v_kkqbd . '</b>' ); // obf
?> // obf
</span> // obf
<a href="#edit_timestamp" class="edit-timestamp hide-if-no-js"><span aria-hidden="true"><?php _e( 'Edit' ); ?></span> <span class="screen-reader-text"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Edit date and time' ); // obf
	?> // obf
</span></a> // obf
<fieldset id='timestampdiv' class='hide-if-js'> // obf
<legend class="screen-reader-text"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Date and time' ); // obf
	?> // obf
</legend> // obf
<?php // obf
/** // obf
 * @global string $v_xdyer // obf
 */ // obf
global $v_xdyer; // obf

touch_time( ( 'editcomment' === $v_xdyer ), 0 ); // obf
?> // obf
</fieldset> // obf
</div> // obf

<?php // obf
$v_kgrsi = $v_lbzwa->comment_post_ID; // obf
if ( current_user_can( 'edit_post', $v_kgrsi ) ) { // obf
	$v_htnjy  = "<a href='" . esc_url( get_edit_post_link( $v_kgrsi ) ) . "'>"; // obf
	$v_htnjy .= esc_html( get_the_title( $v_kgrsi ) ) . '</a>'; // obf
} else { // obf
	$v_htnjy = esc_html( get_the_title( $v_kgrsi ) ); // obf
} // obf
?> // obf

<div class="misc-pub-section misc-pub-response-to"> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: Post link. */ // obf
		__( 'In response to: %s' ), // obf
		'<b>' . $v_htnjy . '</b>' // obf
	); // obf
	?> // obf
</div> // obf

<?php // obf
if ( $v_lbzwa->comment_parent ) : // obf
	$v_ksdtn = get_comment( $v_lbzwa->comment_parent ); // obf
	if ( $v_ksdtn ) : // obf
		$v_lhbku = esc_url( get_comment_link( $v_ksdtn ) ); // obf
		$v_mcnvk        = get_comment_author( $v_ksdtn ); // obf
		?> // obf
	<div class="misc-pub-section misc-pub-reply-to"> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: Comment link. */ // obf
			__( 'In reply to: %s' ), // obf
			'<b><a href="' . $v_lhbku . '">' . $v_mcnvk . '</a></b>' // obf
		); // obf
		?> // obf
	</div> // obf
		<?php // obf
endif; // obf
endif; // obf
?> // obf

<?php // obf
	/** // obf
	 * Filters miscellaneous actions for the edit comment form sidebar. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param string     $v_zcdeh    Output HTML to display miscellaneous action. // obf
	 * @param WP_Comment $v_lbzwa Current comment object. // obf
	 */ // obf
	echo apply_filters( 'edit_comment_misc_actions', '', $v_lbzwa ); // obf
?> // obf

</div> <!-- misc actions --> // obf
<div class="clear"></div> // obf
</div> // obf

<div id="major-publishing-actions"> // obf
<div id="delete-action"> // obf
<?php echo "<a class='submitdelete deletion' href='" . wp_nonce_url( 'comment.php?action=' . ( ! EMPTY_TRASH_DAYS ? 'deletecomment' : 'trashcomment' ) . "&amp;c=$v_lbzwa->comment_ID&amp;_wp_original_http_referer=" . urlencode( wp_get_referer() ), 'delete-comment_' . $v_lbzwa->comment_ID ) . "'>" . ( ! EMPTY_TRASH_DAYS ? __( 'Delete Permanently' ) : __( 'Move to Trash' ) ) . "</a>\n"; ?> // obf
</div> // obf
<div id="publishing-action"> // obf
<?php submit_button( __( 'Update' ), 'primary large', 'save', false ); ?> // obf
</div> // obf
<div class="clear"></div> // obf
</div> // obf
</div> // obf
</div> // obf
</div><!-- /submitdiv --> // obf
</div> // obf

<div id="postbox-container-2" class="postbox-container"> // obf
<?php // obf
/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
do_action( 'add_meta_boxes', 'comment', $v_lbzwa ); // obf

/** // obf
 * Fires when comment-specific meta boxes are added. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param WP_Comment $v_lbzwa Comment object. // obf
 */ // obf
do_action( 'add_meta_boxes_comment', $v_lbzwa ); // obf

do_meta_boxes( null, 'normal', $v_lbzwa ); // obf

$v_arfby = wp_get_referer(); // obf
?> // obf
</div> // obf

<input type="hidden" name="c" value="<?php echo esc_attr( $v_lbzwa->comment_ID ); ?>" /> // obf
<input type="hidden" name="p" value="<?php echo esc_attr( $v_lbzwa->comment_post_ID ); ?>" /> // obf
<input name="referredby" type="hidden" id="referredby" value="<?php echo $v_arfby ? esc_url( $v_arfby ) : ''; ?>" /> // obf
<?php wp_original_referer_field( true, 'previous' ); ?> // obf
<input type="hidden" name="noredir" value="1" /> // obf

</div><!-- /post-body --> // obf
</div> // obf
</div> // obf
</form> // obf

<?php if ( ! wp_is_mobile() ) : ?> // obf
<script type="text/javascript"> // obf
try{document.post.name.focus();}catch(e){} // obf
</script> // obf
	<?php // obf
endif; // obf