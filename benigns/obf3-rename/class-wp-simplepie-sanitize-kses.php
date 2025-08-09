

<?php // obf
/** // obf
 * Feed API: WP_SimplePie_Sanitize_KSES class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Feed // obf
 * @since 4.7.0 // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * Core class used to implement SimplePie feed sanitization. // obf
 * // obf
 * Extends the SimplePie\Sanitize class to use KSES, because // obf
 * we cannot universally count on DOMDocument being available. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_SimplePie_Sanitize_KSES extends SimplePie\Sanitize { // obf

	/** // obf
	 * WordPress SimplePie sanitization using KSES. // obf
	 * // obf
	 * Sanitizes the incoming data, to ensure that it matches the type of data expected, using KSES. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param mixed   $v_utilv The data that needs to be sanitized. // obf
	 * @param int     $v_qljdm The type of data that it's supposed to be. // obf
	 * @param string  $v_sqefb Optional. The `xml:base` value to use when converting relative // obf
	 *                      URLs to absolute ones. Default empty. // obf
	 * @return mixed Sanitized data. // obf
	 */ // obf
	public function sanitize( $v_utilv, $v_qljdm, $v_sqefb = '' ) { // obf
		$v_utilv = trim( $v_utilv ); // obf
		if ( $v_qljdm & SimplePie\SimplePie::CONSTRUCT_MAYBE_HTML ) { // obf
			if ( preg_match( '/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\/[A-Za-z][^\x09\x0A\x0B\x0C\x0D\x20\x2F\x3E]*' . SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $v_utilv ) ) { // obf
				$v_qljdm |= SimplePie\SimplePie::CONSTRUCT_HTML; // obf
			} else { // obf
				$v_qljdm |= SimplePie\SimplePie::CONSTRUCT_TEXT; // obf
			} // obf
		} // obf
		if ( $v_qljdm & SimplePie\SimplePie::CONSTRUCT_BASE64 ) { // obf
			$v_utilv = base64_decode( $v_utilv ); // obf
		} // obf
		if ( $v_qljdm & ( SimplePie\SimplePie::CONSTRUCT_HTML | \SimplePie\SimplePie::CONSTRUCT_XHTML ) ) { // obf
			$v_utilv = wp_kses_post( $v_utilv ); // obf
			if ( 'UTF-8' !== $v_ebxvf->output_encoding ) { // obf
				$v_utilv = $v_ebxvf->registry->call( 'Misc', 'change_encoding', array( $v_utilv, 'UTF-8', $v_ebxvf->output_encoding ) ); // obf
			} // obf
			return $v_utilv; // obf
		} else { // obf
			return parent::sanitize( $v_utilv, $v_qljdm, $v_sqefb ); // obf
		} // obf
	} // obf
} // obf