

<?php // obf
/** // obf
 * Server-side rendering of the `core/page-list-item` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Registers the `core/page-list-item` block on server. // obf
 * // obf
 * @since 6.3.0 // obf
 */ // obf
function register_block_core_page_list_item() { // obf
	register_block_type_from_metadata( __DIR__ . '/page-list-item' ); // obf
} // obf
add_action( 'init', 'register_block_core_page_list_item' ); // obf