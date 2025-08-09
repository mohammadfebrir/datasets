

<?php // obf
/** // obf
 * Handle Trackbacks and Pingbacks Sent to WordPress // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Trackbacks // obf
 */ // obf

if ( empty( $v_plelg ) ) { // obf
	require_once __DIR__ . '/wp-load.php'; // obf
	wp( array( 'tb' => '1' ) ); // obf
} // obf

// Always run as an unauthenticated user. // obf
wp_set_current_user( 0 ); // obf

/** // obf
 * Response to a trackback. // obf
 * // obf
 * Responds with an error or success XML message. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param int|bool $v_biqgt         Whether there was an error. // obf
 *                                Default '0'. Accepts '0' or '1', true or false. // obf
 * @param string   $v_bbypq Error message if an error occurred. Default empty string. // obf
 */ // obf
function trackback_response( $v_biqgt = 0, $v_bbypq = '' ) { // obf
	header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ) ); // obf

	if ( $v_biqgt ) { // obf
		echo '<?xml version="1.0" encoding="utf-8"?' . ">\n"; // obf
		echo "<response>\n"; // obf
		echo "<error>1</error>\n"; // obf
		echo "<message>$v_bbypq</message>\n"; // obf
		echo '</response>'; // obf
		die(); // obf
	} else { // obf
		echo '<?xml version="1.0" encoding="utf-8"?' . ">\n"; // obf
		echo "<response>\n"; // obf
		echo "<error>0</error>\n"; // obf
		echo '</response>'; // obf
	} // obf
} // obf

if ( ! isset( $v_xxunj['tb_id'] ) || ! $v_xxunj['tb_id'] ) { // obf
	$v_njoym = explode( '/', $v_rhxja['REQUEST_URI'] ); // obf
	$v_njoym = (int) $v_njoym[ count( $v_njoym ) - 1 ]; // obf
} // obf

$v_fsqba = isset( $v_ratxm['url'] ) ? $v_ratxm['url'] : ''; // obf
$v_qyswz       = isset( $v_ratxm['charset'] ) ? $v_ratxm['charset'] : ''; // obf

// These three are stripslashed here so they can be properly escaped after mb_convert_encoding(). // obf
$v_bieec     = isset( $v_ratxm['title'] ) ? wp_unslash( $v_ratxm['title'] ) : ''; // obf
$v_uqkwk   = isset( $v_ratxm['excerpt'] ) ? wp_unslash( $v_ratxm['excerpt'] ) : ''; // obf
$v_gdaee = isset( $v_ratxm['blog_name'] ) ? wp_unslash( $v_ratxm['blog_name'] ) : ''; // obf

if ( $v_qyswz ) { // obf
	$v_qyswz = str_replace( array( ',', ' ' ), '', strtoupper( trim( $v_qyswz ) ) ); // obf

	// Validate the specified "sender" charset is available on the receiving site. // obf
	if ( function_exists( 'mb_list_encodings' ) && ! in_array( $v_qyswz, mb_list_encodings(), true ) ) { // obf
		$v_qyswz = ''; // obf
	} // obf
} // obf

if ( ! $v_qyswz ) { // obf
	$v_qyswz = 'ASCII, UTF-8, ISO-8859-1, JIS, EUC-JP, SJIS'; // obf
} // obf

// No valid uses for UTF-7. // obf
if ( str_contains( $v_qyswz, 'UTF-7' ) ) { // obf
	die; // obf
} // obf

// For international trackbacks. // obf
if ( function_exists( 'mb_convert_encoding' ) ) { // obf
	$v_bieec     = mb_convert_encoding( $v_bieec, get_option( 'blog_charset' ), $v_qyswz ); // obf
	$v_uqkwk   = mb_convert_encoding( $v_uqkwk, get_option( 'blog_charset' ), $v_qyswz ); // obf
	$v_gdaee = mb_convert_encoding( $v_gdaee, get_option( 'blog_charset' ), $v_qyswz ); // obf
} // obf

// Escape values to use in the trackback. // obf
$v_bieec     = wp_slash( $v_bieec ); // obf
$v_uqkwk   = wp_slash( $v_uqkwk ); // obf
$v_gdaee = wp_slash( $v_gdaee ); // obf

if ( is_single() || is_page() ) { // obf
	$v_njoym = $v_uihso[0]->ID; // obf
} // obf

if ( ! isset( $v_njoym ) || ! (int) $v_njoym ) { // obf
	trackback_response( 1, __( 'I really need an ID for this to work.' ) ); // obf
} // obf

if ( empty( $v_bieec ) && empty( $v_fsqba ) && empty( $v_gdaee ) ) { // obf
	// If it doesn't look like a trackback at all. // obf
	wp_redirect( get_permalink( $v_njoym ) ); // obf
	exit; // obf
} // obf

if ( ! empty( $v_fsqba ) && ! empty( $v_bieec ) ) { // obf
	/** // obf
	 * Fires before the trackback is added to a post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int    $v_njoym       Post ID related to the trackback. // obf
	 * @param string $v_fsqba Trackback URL. // obf
	 * @param string $v_qyswz       Character set. // obf
	 * @param string $v_bieec         Trackback title. // obf
	 * @param string $v_uqkwk       Trackback excerpt. // obf
	 * @param string $v_gdaee     Site name. // obf
	 */ // obf
	do_action( 'pre_trackback_post', $v_njoym, $v_fsqba, $v_qyswz, $v_bieec, $v_uqkwk, $v_gdaee ); // obf

	header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ) ); // obf

	if ( ! pings_open( $v_njoym ) ) { // obf
		trackback_response( 1, __( 'Sorry, trackbacks are closed for this item.' ) ); // obf
	} // obf

	$v_bieec   = wp_html_excerpt( $v_bieec, 250, '&#8230;' ); // obf
	$v_uqkwk = wp_html_excerpt( $v_uqkwk, 252, '&#8230;' ); // obf

	$v_ndeek      = (int) $v_njoym; // obf
	$v_tcqdh       = $v_gdaee; // obf
	$v_oebuj = ''; // obf
	$v_siajj   = $v_fsqba; // obf
	$v_dtoce      = "<strong>$v_bieec</strong>\n\n$v_uqkwk"; // obf
	$v_tmfld         = 'trackback'; // obf

	$v_vnnci = $v_wjizp->get_results( // obf
		$v_wjizp->prepare( // obf
			"SELECT * FROM $v_wjizp->comments WHERE comment_post_ID = %d AND comment_author_url = %s", // obf
			$v_ndeek, // obf
			$v_siajj // obf
		) // obf
	); // obf

	if ( $v_vnnci ) { // obf
		trackback_response( 1, __( 'There is already a ping from that URL for this post.' ) ); // obf
	} // obf

	$v_kitre = array( // obf
		'comment_post_ID' => $v_ndeek, // obf
	); // obf

	$v_kitre += compact( // obf
		'comment_author', // obf
		'comment_author_email', // obf
		'comment_author_url', // obf
		'comment_content', // obf
		'comment_type' // obf
	); // obf

	$v_wcuan = wp_new_comment( $v_kitre ); // obf

	if ( is_wp_error( $v_wcuan ) ) { // obf
		trackback_response( 1, $v_wcuan->get_error_message() ); // obf
	} // obf

	$v_vjpqq = $v_wjizp->insert_id; // obf

	/** // obf
	 * Fires after a trackback is added to a post. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param int $v_vjpqq Trackback ID. // obf
	 */ // obf
	do_action( 'trackback_post', $v_vjpqq ); // obf

	trackback_response( 0 ); // obf
} // obf