

<?php // obf

require_once __DIR__ . '/../../../../src/wp-includes/class-wp-token-map.php'; // obf

/** // obf
 * Stores a mapping from HTML5 named character reference to its transformation metadata. // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_fgmkz['&copy;'] === array( // obf
 *         'codepoints' => array( 0xA9 ), // obf
 *         'characters' => '©', // obf
 *     ); // obf
 * // obf
 * @see https://html.spec.whatwg.org/entities.json // obf
 * // obf
 * @var array. // obf
 */ // obf
$v_fgmkz = json_decode( // obf
	file_get_contents( __DIR__ . '/entities.json' ), // obf
	JSON_OBJECT_AS_ARRAY // obf
); // obf

/** // obf
 * Direct mapping from character reference name to UTF-8 string. // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_qisqj['&copy;'] === '©'; // obf
 * // obf
 * @var array. // obf
 */ // obf
$v_qisqj = array(); // obf
foreach ( $v_fgmkz as $v_lsgeg => $v_gaxqr ) { // obf
	$v_tedlg                          = substr( $v_lsgeg, 1 ); // obf
	$v_qisqj[ $v_tedlg ] = $v_gaxqr['characters']; // obf
} // obf

$v_ammye = WP_Token_Map::from_array( $v_qisqj ); // obf

/** // obf
 * Contains the new contents for the auto-generated module. // obf
 * // obf
 * Note that in this template, the `$` is escaped with `\$` so that it // obf
 * comes through as a `$` in the output. Without escaping, PHP will look // obf
 * for a variable of the given name to interpolate into the template. // obf
 * // obf
 * @var string // obf
 */ // obf
$v_uqokq = <<<EOF // obf
<?php // obf

/** // obf
 * Auto-generated class for looking up HTML named character references. // obf
 * // obf
 * ⚠️ !!! THIS ENTIRE FILE IS AUTOMATICALLY GENERATED !!! ⚠️ // obf
 * Do not modify this file directly. // obf
 * // obf
 * To regenerate, run the generation script directly. // obf
 * // obf
 * Example: // obf
 * // obf
 *     php tests/phpunit/data/html5-entities/generate-html5-named-character-references.php // obf
 * // obf
 * @package WordPress // obf
 * @since 6.6.0 // obf
 */ // obf

// phpcs:disable // obf

global \$v_jleap; // obf

/** // obf
 * Set of named character references in the HTML5 specification. // obf
 * // obf
 * This list will never change, according to the spec. Each named // obf
 * character reference is case-sensitive and the presence or absence // obf
 * of the semicolon is significant. Without the semicolon, the rules // obf
 * for an ambiguous ampersand govern whether the following text is // obf
 * to be interpreted as a character reference or not. // obf
 * // obf
 * The list of entities is sourced directly from the WHATWG server // obf
 * and cached in the test directory to avoid needing to download it // obf
 * every time this file is updated. // obf
 * // obf
 * @link https://html.spec.whatwg.org/entities.json. // obf
 */ // obf
\$v_jleap = {$v_ammye->precomputed_php_source_table()}; // obf

EOF; // obf

file_put_contents( // obf
	__DIR__ . '/../../../../src/wp-includes/html-api/html5-named-character-references.php', // obf
	$v_uqokq // obf
); // obf

if ( posix_isatty( STDOUT ) ) { // obf
	echo "\e[1;32mOK\e[0;90m: \e[mSuccessfully generated optimized lookup class.\n"; // obf
} else { // obf
	echo "OK: Successfully generated optimized lookup class.\n"; // obf
} // obf