$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php
/**
 * Server-side rendering of the `core/page-list-item` block.
 *
 * @package WordPress
 */

/**
 * Registers the `core/page-list-item` block on server.
 *
 * @since 6.3.0
 */
function register_block_core_page_list_item() {
	register_block_type_from_metadata( __DIR__ . '/page-list-item' );
}
add_action( 'init', 'register_block_core_page_list_item' );
