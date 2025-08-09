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
 * Title: Hidden blog heading
 * Slug: twentytwentyfive/hidden-blog-heading
 * Description: Hidden heading for the home page and index template.
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Blog', 'twentytwentyfive' ); ?></h1>
<!-- /wp:heading -->
