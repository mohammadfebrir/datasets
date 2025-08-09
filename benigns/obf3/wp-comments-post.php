

<?php // obf
/** // obf
 * Handles Comment Post to WordPress and prevents duplicate comment posting. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

if ( 'POST' !== $v_wyxlt['REQUEST_METHOD'] ) { // obf
	$v_dpsck = $v_wyxlt['SERVER_PROTOCOL']; // obf
	if ( ! in_array( $v_dpsck, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0', 'HTTP/3' ), true ) ) { // obf
		$v_dpsck = 'HTTP/1.0'; // obf
	} // obf

	header( 'Allow: POST' ); // obf
	header( "$v_dpsck 405 Method Not Allowed" ); // obf
	header( 'Content-Type: text/plain' ); // obf
	exit; // obf
} // obf

/** Sets up the WordPress Environment. */ // obf
require __DIR__ . '/wp-load.php'; // obf

nocache_headers(); // obf

$v_pbswf = wp_handle_comment_submission( wp_unslash( $v_ptkwg ) ); // obf
if ( is_wp_error( $v_pbswf ) ) { // obf
	$v_srtyu = (int) $v_pbswf->get_error_data(); // obf
	if ( ! empty( $v_srtyu ) ) { // obf
		wp_die( // obf
			'<p>' . $v_pbswf->get_error_message() . '</p>', // obf
			__( 'Comment Submission Failure' ), // obf
			array( // obf
				'response'  => $v_srtyu, // obf
				'back_link' => true, // obf
			) // obf
		); // obf
	} else { // obf
		exit; // obf
	} // obf
} // obf

$v_fwkca            = wp_get_current_user(); // obf
$v_ukqvg = ( isset( $v_ptkwg['wp-comment-cookies-consent'] ) ); // obf

/** // obf
 * Fires after comment cookies are set. // obf
 * // obf
 * @since 3.4.0 // obf
 * @since 4.9.6 The `$v_ukqvg` parameter was added. // obf
 * // obf
 * @param WP_Comment $v_pbswf         Comment object. // obf
 * @param WP_User    $v_fwkca            Comment author's user object. The user may not exist. // obf
 * @param bool       $v_ukqvg Comment author's consent to store cookies. // obf
 */ // obf
do_action( 'set_comment_cookies', $v_pbswf, $v_fwkca, $v_ukqvg ); // obf

$v_lmocy = empty( $v_ptkwg['redirect_to'] ) ? get_comment_link( $v_pbswf ) : $v_ptkwg['redirect_to'] . '#comment-' . $v_pbswf->comment_ID; // obf

// If user didn't consent to cookies, add specific query arguments to display the awaiting moderation message. // obf
if ( ! $v_ukqvg && 'unapproved' === wp_get_comment_status( $v_pbswf ) && ! empty( $v_pbswf->comment_author_email ) ) { // obf
	$v_lmocy = add_query_arg( // obf
		array( // obf
			'unapproved'      => $v_pbswf->comment_ID, // obf
			'moderation-hash' => wp_hash( $v_pbswf->comment_date_gmt ), // obf
		), // obf
		$v_lmocy // obf
	); // obf
} // obf

/** // obf
 * Filters the location URI to send the commenter after posting. // obf
 * // obf
 * @since 2.0.5 // obf
 * // obf
 * @param string     $v_lmocy The 'redirect_to' URI sent via $v_ptkwg. // obf
 * @param WP_Comment $v_pbswf  Comment object. // obf
 */ // obf
$v_lmocy = apply_filters( 'comment_post_redirect', $v_lmocy, $v_pbswf ); // obf

wp_safe_redirect( $v_lmocy ); // obf
exit; // obf