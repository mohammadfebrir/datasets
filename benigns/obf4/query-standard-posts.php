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
 * Query: Standard.
 *
 * @package WordPress
 */

return array(
	'title'      => _x( 'Standard', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
					<div class="wp-block-query">
					<!-- wp:post-template -->
					<!-- wp:post-title {"isLink":true} /-->
					<!-- wp:post-featured-image  {"isLink":true,"align":"wide"} /-->
					<!-- wp:post-excerpt /-->
					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->
					<!-- wp:post-date /-->
					<!-- /wp:post-template -->
					</div>
					<!-- /wp:query -->',
);
