

<?php // obf
/** // obf
 * Parse OPML XML files and store in globals. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

if ( ! defined( 'ABSPATH' ) ) { // obf
	die(); // obf
} // obf

/** // obf
 * @global string $v_mgeif // obf
 */ // obf
global $v_mgeif; // obf

/** // obf
 * Starts a new XML tag. // obf
 * // obf
 * Callback function for xml_set_element_handler(). // obf
 * // obf
 * @since 0.71 // obf
 * @access private // obf
 * // obf
 * @global array $v_kgiuy // obf
 * @global array $v_lhhwo // obf
 * @global array $v_qgaxx // obf
 * @global array $v_ckush // obf
 * @global array $v_vwent // obf
 * // obf
 * @param resource $v_pwyoz   XML Parser resource. // obf
 * @param string   $v_xoldd XML element name. // obf
 * @param array    $v_cylmv    XML element attributes. // obf
 */ // obf
function startElement( $v_pwyoz, $v_xoldd, $v_cylmv ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	global $v_kgiuy, $v_lhhwo, $v_qgaxx, $v_ckush, $v_vwent; // obf

	if ( 'OUTLINE' === $v_xoldd ) { // obf
		$v_qhvde = ''; // obf
		if ( isset( $v_cylmv['TEXT'] ) ) { // obf
			$v_qhvde = $v_cylmv['TEXT']; // obf
		} // obf
		if ( isset( $v_cylmv['TITLE'] ) ) { // obf
			$v_qhvde = $v_cylmv['TITLE']; // obf
		} // obf
		$v_ioucv = ''; // obf
		if ( isset( $v_cylmv['URL'] ) ) { // obf
			$v_ioucv = $v_cylmv['URL']; // obf
		} // obf
		if ( isset( $v_cylmv['HTMLURL'] ) ) { // obf
			$v_ioucv = $v_cylmv['HTMLURL']; // obf
		} // obf

		// Save the data away. // obf
		$v_kgiuy[]        = $v_qhvde; // obf
		$v_lhhwo[]         = $v_ioucv; // obf
		$v_qgaxx[]      = isset( $v_cylmv['TARGET'] ) ? $v_cylmv['TARGET'] : ''; // obf
		$v_vwent[]        = isset( $v_cylmv['XMLURL'] ) ? $v_cylmv['XMLURL'] : ''; // obf
		$v_ckush[] = isset( $v_cylmv['DESCRIPTION'] ) ? $v_cylmv['DESCRIPTION'] : ''; // obf
	} // End if outline. // obf
} // obf

/** // obf
 * Ends a new XML tag. // obf
 * // obf
 * Callback function for xml_set_element_handler(). // obf
 * // obf
 * @since 0.71 // obf
 * @access private // obf
 * // obf
 * @param resource $v_pwyoz   XML Parser resource. // obf
 * @param string   $v_xoldd XML tag name. // obf
 */ // obf
function endElement( $v_pwyoz, $v_xoldd ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid // obf
	// Nothing to do. // obf
} // obf

// Create an XML parser. // obf
if ( ! function_exists( 'xml_parser_create' ) ) { // obf
	wp_trigger_error( '', __( "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ) ); // obf
	wp_die( __( "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ) ); // obf
} // obf

$v_hvpxe = xml_parser_create(); // obf

// Set the functions to handle opening and closing tags. // obf
xml_set_element_handler( $v_hvpxe, 'startElement', 'endElement' ); // obf

if ( ! xml_parse( $v_hvpxe, $v_mgeif, true ) ) { // obf
	printf( // obf
		/* translators: 1: Error message, 2: Line number. */ // obf
		__( 'XML Error: %1$v_ffsji at line %2$v_ffsji' ), // obf
		xml_error_string( xml_get_error_code( $v_hvpxe ) ), // obf
		xml_get_current_line_number( $v_hvpxe ) // obf
	); // obf
} // obf

// Free up memory used by the XML parser. // obf
xml_parser_free( $v_hvpxe ); // obf
unset( $v_hvpxe ); // obf