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
 * Title: Landing page for book
 * Slug: twentytwentyfive/page-landing-book
 * Categories: twentytwentyfive_page, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A landing page for the book with a hero section, pre-order links, locations, FAQs and newsletter signup.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:pattern {"slug":"twentytwentyfive/hero-book"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/cta-book-links"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/banner-about-book"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/cta-book-locations"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/text-faqs"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/cta-newsletter"} /-->
