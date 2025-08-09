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
 * @group comment
 *
 * @covers ::get_comment_author_url
 */
class Tests_Comment_GetCommentAuthorUrl extends WP_UnitTestCase {

	private static $comment;

	public static function set_up_before_class() {
		parent::set_up_before_class();

		self::$comment = self::factory()->comment->create_and_get(
			array(
				'comment_post_ID' => 0,
			)
		);
	}

	public function get_comment_author_url_filter( $comment_author_url, $comment_id, $comment ) {
		$this->assertSame( $comment_id, $comment->comment_ID );

		return $comment_author_url;
	}

	/**
	 * @ticket 41334
	 */
	public function test_comment_author_url_passes_correct_comment_id() {
		add_filter( 'get_comment_author_url', array( $this, 'get_comment_author_url_filter' ), 99, 3 );

		get_comment_author_url( self::$comment );
	}
}
