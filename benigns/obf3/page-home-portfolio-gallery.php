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
 * Title: Portfolio home image gallery
 * Slug: twentytwentyfour/page-home-gallery
 * Categories: twentytwentyfour_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A portfolio home page that features a gallery.
 */
?>

<!-- wp:pattern {"slug":"twentytwentyfour/hidden-portfolio-hero"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/gallery-offset-images-grid-4-col"} /-->
