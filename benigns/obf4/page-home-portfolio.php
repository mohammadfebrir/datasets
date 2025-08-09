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
 * Title: Portfolio home with post featured images
 * Slug: twentytwentyfour/page-home-portfolio
 * Categories: twentytwentyfour_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A portfolio home page with a description and a 4-column post section with only feature images.
 */
?>

<!-- wp:pattern {"slug":"twentytwentyfour/hidden-portfolio-hero"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/posts-images-only-offset-4-col"} /-->
