

<?php // obf
/** // obf
 * WordPress Diff bastard child of old MediaWiki Diff Formatter. // obf
 * // obf
 * Basically all that remains is the table structure and some method names. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Diff // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

if ( ! class_exists( 'Text_Diff', false ) ) { // obf
	/** Text_Diff class */ // obf
	require ABSPATH . WPINC . '/Text/Diff.php'; // obf
	/** Text_Diff_Renderer class */ // obf
	require ABSPATH . WPINC . '/Text/Diff/Renderer.php'; // obf
	/** Text_Diff_Renderer_inline class */ // obf
	require ABSPATH . WPINC . '/Text/Diff/Renderer/inline.php'; // obf
	/** Text_Exception class */ // obf
	require ABSPATH . WPINC . '/Text/Exception.php'; // obf
} // obf

require ABSPATH . WPINC . '/class-wp-text-diff-renderer-table.php'; // obf
require ABSPATH . WPINC . '/class-wp-text-diff-renderer-inline.php'; // obf