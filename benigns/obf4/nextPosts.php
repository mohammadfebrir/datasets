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
 * Tests the `next_posts()` function.
 *
 * @since 6.4.0
 *
 * @group link
 *
 * @covers ::next_posts
 */
class Tests_Link_NextPosts extends WP_UnitTestCase {

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
	 * The absence of a deprecation notice on PHP 8.1+ also shows that the issue is resolved.
	 *
	 * @ticket 59154
	 */
	public function test_should_return_empty_string_when_no_next_posts_page_link() {
		$this->assertSame( '', next_posts( 1, false ) );
	}
}
