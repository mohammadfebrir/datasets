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
 * Query: Image at left.
 *
 * @package WordPress
 */

return array(
	'title'      => _x( 'Image at left', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
					<div class="wp-block-query">
					<!-- wp:post-template -->
					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
					<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-featured-image {"isLink":true} /--></div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-title {"isLink":true} /-->
					<!-- wp:post-excerpt /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					<!-- /wp:post-template -->
					</div>
					<!-- /wp:query -->',
);
