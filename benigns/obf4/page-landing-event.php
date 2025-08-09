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
 * Title: Landing page for event
 * Slug: twentytwentyfive/page-landing-event
 * Categories: twentytwentyfive_page, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A landing page for the event with a hero section, description, FAQs and call to action.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>

<!-- wp:pattern {"slug":"twentytwentyfive/hero-full-width-image"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/heading-and-paragraph-with-image"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/banner-description-images-grid"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/text-faqs"} /-->
<!-- wp:pattern {"slug":"twentytwentyfive/contact-centered-social-link"} /-->
