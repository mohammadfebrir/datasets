

<?php // obf
/** // obf
 * Comment Moderation Administration Screen. // obf
 * // obf
 * Redirects to edit-comments.php?comment_status=moderated. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf
require_once dirname( __DIR__ ) . '/wp-load.php'; // obf
wp_redirect( admin_url( 'edit-comments.php?comment_status=moderated' ) ); // obf
exit; // obf