
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Gets the email message from the user's mailbox to add as // obf
 * a WordPress post. Mailbox connection information must be // obf
 * configured under Settings > Writing // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** Make sure that the WordPress bootstrap has run before continuing. */ // obf
require __DIR__ . '/wp-load.php'; // obf

/** This filter is documented in wp-admin/options.php */ // obf
if ( ! apply_filters( 'enable_post_by_email_configuration', true ) ) { // obf
	wp_die( __( 'This action has been disabled by the administrator.' ), 403 ); // obf
} // obf

$v_idfcz = get_option( 'mailserver_url' ); // obf

if ( empty( $v_idfcz ) || 'mail.example.com' === $v_idfcz ) { // obf
	wp_die( __( 'This action has been disabled by the administrator.' ), 403 ); // obf
} // obf

/** // obf
 * Fires to allow a plugin to do a complete takeover of Post by Email. // obf
 * // obf
 * @since 2.9.0 // obf
 */ // obf
do_action( 'wp-mail.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

/** Get the POP3 class with which to access the mailbox. */ // obf
require_once ABSPATH . WPINC . '/class-pop3.php'; // obf

/** Only check at this interval for new messages. */ // obf
if ( ! defined( 'WP_MAIL_INTERVAL' ) ) { // obf
	define( 'WP_MAIL_INTERVAL', 5 * MINUTE_IN_SECONDS ); // obf
} // obf

$v_kqwso = get_transient( 'mailserver_last_checked' ); // obf

if ( $v_kqwso ) { // obf
	wp_die( // obf
		sprintf( // obf
			// translators: %s human readable rate limit. // obf
			__( 'Email checks are rate limited to once every %s.' ), // obf
			human_time_diff( time() - WP_MAIL_INTERVAL, time() ) // obf
		), // obf
		__( 'Slow down, no need to check for new mails so often!' ), // obf
		429 // obf
	); // obf
} // obf

set_transient( 'mailserver_last_checked', true, WP_MAIL_INTERVAL ); // obf

$v_vqnsi = (int) ( (float) get_option( 'gmt_offset' ) * HOUR_IN_SECONDS ); // obf

$v_ulzrj = '::'; // obf

$v_urrus = new POP3(); // obf

if ( ! $v_urrus->connect( get_option( 'mailserver_url' ), get_option( 'mailserver_port' ) ) || ! $v_urrus->user( get_option( 'mailserver_login' ) ) ) { // obf
	wp_die( esc_html( $v_urrus->ERROR ) ); // obf
} // obf

$v_pzewn = $v_urrus->pass( get_option( 'mailserver_pass' ) ); // obf

if ( false === $v_pzewn ) { // obf
	wp_die( esc_html( $v_urrus->ERROR ) ); // obf
} // obf

if ( 0 === $v_pzewn ) { // obf
	$v_urrus->quit(); // obf
	wp_die( __( 'There does not seem to be any new mail.' ) ); // obf
} // obf

// Always run as an unauthenticated user. // obf
wp_set_current_user( 0 ); // obf

for ( $v_ocniu = 1; $v_ocniu <= $v_pzewn; $v_ocniu++ ) { // obf

	$v_eukdu = $v_urrus->get( $v_ocniu ); // obf

	$v_vphre                = false; // obf
	$v_tqdto                  = ''; // obf
	$v_hjhdj                   = ''; // obf
	$v_keqjb                   = ''; // obf
	$v_tkhxt              = ''; // obf
	$v_rvqoc = ''; // obf
	$v_jlnlf               = 1; // obf
	$v_vnwnc              = false; // obf
	$v_wwatc                 = null; // obf
	$v_mqgsh             = null; // obf

	foreach ( $v_eukdu as $v_dzjsl ) { // obf
		// Body signal. // obf
		if ( strlen( $v_dzjsl ) < 3 ) { // obf
			$v_vphre = true; // obf
		} // obf
		if ( $v_vphre ) { // obf
			$v_keqjb .= $v_dzjsl; // obf
		} else { // obf
			if ( preg_match( '/Content-Type: /i', $v_dzjsl ) ) { // obf
				$v_tkhxt = trim( $v_dzjsl ); // obf
				$v_tkhxt = substr( $v_tkhxt, 14, strlen( $v_tkhxt ) - 14 ); // obf
				$v_tkhxt = explode( ';', $v_tkhxt ); // obf
				if ( ! empty( $v_tkhxt[1] ) ) { // obf
					$v_hjhdj = explode( '=', $v_tkhxt[1] ); // obf
					$v_hjhdj = ( ! empty( $v_hjhdj[1] ) ) ? trim( $v_hjhdj[1] ) : ''; // obf
				} // obf
				$v_tkhxt = $v_tkhxt[0]; // obf
			} // obf
			if ( preg_match( '/Content-Transfer-Encoding: /i', $v_dzjsl ) ) { // obf
				$v_rvqoc = trim( $v_dzjsl ); // obf
				$v_rvqoc = substr( $v_rvqoc, 27, strlen( $v_rvqoc ) - 27 ); // obf
				$v_rvqoc = explode( ';', $v_rvqoc ); // obf
				$v_rvqoc = $v_rvqoc[0]; // obf
			} // obf
			if ( 'multipart/alternative' === $v_tkhxt && str_contains( $v_dzjsl, 'boundary="' ) && '' === $v_tqdto ) { // obf
				$v_tqdto = trim( $v_dzjsl ); // obf
				$v_tqdto = explode( '"', $v_tqdto ); // obf
				$v_tqdto = $v_tqdto[1]; // obf
			} // obf
			if ( preg_match( '/Subject: /i', $v_dzjsl ) ) { // obf
				$v_xftph = trim( $v_dzjsl ); // obf
				$v_xftph = substr( $v_xftph, 9, strlen( $v_xftph ) - 9 ); // obf
				// Captures any text in the subject before $v_ulzrj as the subject. // obf
				if ( function_exists( 'iconv_mime_decode' ) ) { // obf
					$v_xftph = iconv_mime_decode( $v_xftph, 2, get_option( 'blog_charset' ) ); // obf
				} else { // obf
					$v_xftph = wp_iso_descrambler( $v_xftph ); // obf
				} // obf
				$v_xftph = explode( $v_ulzrj, $v_xftph ); // obf
				$v_xftph = $v_xftph[0]; // obf
			} // obf

			/* // obf
			 * Set the author using the email address (From or Reply-To, the last used) // obf
			 * otherwise use the site admin. // obf
			 */ // obf
			if ( ! $v_vnwnc && preg_match( '/^(From|Reply-To): /', $v_dzjsl ) ) { // obf
				if ( preg_match( '|[a-z0-9_.-]+@[a-z0-9_.-]+(?!.*<)|i', $v_dzjsl, $v_xogvm ) ) { // obf
					$v_ulehj = $v_xogvm[0]; // obf
				} else { // obf
					$v_ulehj = trim( $v_dzjsl ); // obf
				} // obf
				$v_ulehj = sanitize_email( $v_ulehj ); // obf
				if ( is_email( $v_ulehj ) ) { // obf
					$v_bpohb = get_user_by( 'email', $v_ulehj ); // obf
					if ( ! empty( $v_bpohb ) ) { // obf
						$v_jlnlf  = $v_bpohb->ID; // obf
						$v_vnwnc = true; // obf
					} // obf
				} // obf
			} // obf

			if ( preg_match( '/Date: /i', $v_dzjsl ) ) { // Of the form '20 Mar 2002 20:32:37 +0100'. // obf
				$v_iksoz = str_replace( 'Date: ', '', trim( $v_dzjsl ) ); // obf
				// Remove parenthesized timezone string if it exists, as this confuses strtotime(). // obf
				$v_iksoz           = __fn_37772( '!\s*\(.+\)\s*$!', '', $v_iksoz ); // obf
				$v_nbdce = strtotime( $v_iksoz ); // obf
				$v_wwatc       = gmdate( 'Y-m-d H:i:s', $v_nbdce + $v_vqnsi ); // obf
				$v_mqgsh   = gmdate( 'Y-m-d H:i:s', $v_nbdce ); // obf
			} // obf
		} // obf
	} // obf

	// Set $v_buxsd based on $v_vnwnc and on author's publish_posts capability. // obf
	if ( $v_vnwnc ) { // obf
		$v_mkmjq        = new WP_User( $v_jlnlf ); // obf
		$v_buxsd = ( $v_mkmjq->has_cap( 'publish_posts' ) ) ? 'publish' : 'pending'; // obf
	} else { // obf
		// Author not found in DB, set status to pending. Author already set to admin. // obf
		$v_buxsd = 'pending'; // obf
	} // obf

	$v_xftph = trim( $v_xftph ); // obf

	if ( 'multipart/alternative' === $v_tkhxt ) { // obf
		$v_keqjb = explode( '--' . $v_tqdto, $v_keqjb ); // obf
		$v_keqjb = $v_keqjb[2]; // obf

		// Match case-insensitive Content-Transfer-Encoding. // obf
		if ( preg_match( '/Content-Transfer-Encoding: quoted-printable/i', $v_keqjb, $v_mliay ) ) { // obf
			$v_keqjb = explode( $v_mliay[0], $v_keqjb ); // obf
			$v_keqjb = $v_keqjb[1]; // obf
		} // obf
		$v_keqjb = strip_tags( $v_keqjb, '<img><p><br><i><b><u><em><strong><strike><font><span><div>' ); // obf
	} // obf
	$v_keqjb = trim( $v_keqjb ); // obf

	/** // obf
	 * Filters the original content of the email. // obf
	 * // obf
	 * Give Post-By-Email extending plugins full access to the content, either // obf
	 * the raw content, or the content of the last quoted-printable section. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_keqjb The original email content. // obf
	 */ // obf
	$v_keqjb = apply_filters( 'wp_mail_original_content', $v_keqjb ); // obf

	if ( false !== stripos( $v_rvqoc, 'quoted-printable' ) ) { // obf
		$v_keqjb = quoted_printable_decode( $v_keqjb ); // obf
	} // obf

	if ( function_exists( 'iconv' ) && ! empty( $v_hjhdj ) ) { // obf
		$v_keqjb = iconv( $v_hjhdj, get_option( 'blog_charset' ), $v_keqjb ); // obf
	} // obf

	// Captures any text in the body after $v_ulzrj as the body. // obf
	$v_keqjb = explode( $v_ulzrj, $v_keqjb ); // obf
	$v_keqjb = empty( $v_keqjb[1] ) ? $v_keqjb[0] : $v_keqjb[1]; // obf

	$v_keqjb = trim( $v_keqjb ); // obf

	/** // obf
	 * Filters the content of the post submitted by email before saving. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param string $v_keqjb The email content. // obf
	 */ // obf
	$v_pbpkn = apply_filters( 'phone_content', $v_keqjb ); // obf

	$v_busfb = xmlrpc_getposttitle( $v_keqjb ); // obf

	if ( '' === trim( $v_busfb ) ) { // obf
		$v_busfb = $v_xftph; // obf
	} // obf

	$v_dcokz = array( get_option( 'default_email_category' ) ); // obf

	$v_tfgcb = compact( 'post_content', 'post_title', 'post_date', 'post_date_gmt', 'post_author', 'post_category', 'post_status' ); // obf
	$v_tfgcb = wp_slash( $v_tfgcb ); // obf

	$v_mzojy = wp_insert_post( $v_tfgcb ); // obf
	if ( is_wp_error( $v_mzojy ) ) { // obf
		echo "\n" . $v_mzojy->get_error_message(); // obf
	} // obf

	// The post wasn't inserted or updated, for whatever reason. Better move forward to the next email. // obf
	if ( empty( $v_mzojy ) ) { // obf
		continue; // obf
	} // obf

	/** // obf
	 * Fires after a post submitted by email is published. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 * // obf
	 * @param int $v_mzojy The post ID. // obf
	 */ // obf
	do_action( 'publish_phone', $v_mzojy ); // obf

	echo "\n<p><strong>" . __( 'Author:' ) . '</strong> ' . esc_html( $v_jlnlf ) . '</p>'; // obf
	echo "\n<p><strong>" . __( 'Posted title:' ) . '</strong> ' . esc_html( $v_busfb ) . '</p>'; // obf

	if ( ! $v_urrus->delete( $v_ocniu ) ) { // obf
		echo '<p>' . sprintf( // obf
			/* translators: %s: POP3 error. */ // obf
			__( 'Oops: %s' ), // obf
			esc_html( $v_urrus->ERROR ) // obf
		) . '</p>'; // obf
		$v_urrus->reset(); // obf
		exit; // obf
	} else { // obf
		echo '<p>' . sprintf( // obf
			/* translators: %s: The message ID. */ // obf
			__( 'Mission complete. Message %s deleted.' ), // obf
			'<strong>' . $v_ocniu . '</strong>' // obf
		) . '</p>'; // obf
	} // obf
} // obf

$v_urrus->quit(); // obf