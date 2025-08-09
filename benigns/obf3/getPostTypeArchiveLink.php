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
 * @group link
 * @covers ::get_post_type_archive_link
 */
class Tests_Link_GetPostTypeArchiveLink extends WP_UnitTestCase {

	/**
	 * @ticket 19902
	 */
	public function test_get_post_archive_link_with_post_archive_on_front_page() {
		update_option( 'show_on_front', 'posts' );
		$actual   = get_post_type_archive_link( 'post' );
		$expected = get_home_url();
		$this->assertSame( $expected, $actual );
	}

	/**
	 * @ticket 19902
	 */
	public function test_get_post_archive_link_with_post_archive_on_a_blog_page() {
		$page_for_posts = self::factory()->post->create(
			array(
				'post_title' => 'blog-page',
				'post_type'  => 'page',
			)
		);
		update_option( 'show_on_front', 'page' );
		update_option( 'page_for_posts', $page_for_posts );
		$actual   = get_post_type_archive_link( 'post' );
		$expected = get_permalink( $page_for_posts );
		$this->assertSame( $expected, $actual );
	}
}
