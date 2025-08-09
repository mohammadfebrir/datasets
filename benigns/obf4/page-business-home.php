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
 * Title: Business homepage
 * Slug: twentytwentyfive/page-business-home
 * Categories: twentytwentyfive_page, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A business homepage pattern.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:pattern {"slug":"twentytwentyfive/cta-centered-heading"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/overlapped-images"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/services-3-col"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/testimonials-large"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/pricing-2-col"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/cta-newsletter"} /-->
