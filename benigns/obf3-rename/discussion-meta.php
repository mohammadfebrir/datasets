

<?php // obf
/** // obf
 * The template for displaying Current Discussion on posts // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Nineteen // obf
 * @since Twenty Nineteen 1.0 // obf
 */ // obf

/* Get data from current discussion on post. */ // obf
$v_bechx    = twentynineteen_get_discussion_data(); // obf
$v_nzsnr = $v_bechx->responses > 0; // obf

if ( $v_nzsnr ) { // obf
	/* translators: %d: Number of comments. */ // obf
	$v_ygcuy = sprintf( _n( '%d Comment', '%d Comments', $v_bechx->responses, 'twentynineteen' ), $v_bechx->responses ); // obf
} else { // obf
	$v_ygcuy = __( 'No comments', 'twentynineteen' ); // obf
} // obf
?> // obf

<div class="discussion-meta"> // obf
	<?php // obf
	if ( $v_nzsnr ) { // obf
		twentynineteen_discussion_avatars_list( $v_bechx->authors ); // obf
	} // obf
	?> // obf
	<p class="discussion-meta-info"> // obf
		<?php echo twentynineteen_get_icon_svg( 'comment', 24 ); ?> // obf
		<span><?php echo esc_html( $v_ygcuy ); ?></span> // obf
	</p> // obf
</div><!-- .discussion-meta --> // obf