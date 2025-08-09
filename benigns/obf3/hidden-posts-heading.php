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
 * Title: Posts heading
 * Slug: twentytwentyfour/hidden-posts-heading
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<h1 class="wp-block-heading alignwide" style="padding-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Posts', 'twentytwentyfour' ); ?></h1>
<!-- /wp:heading -->
