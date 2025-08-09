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
 * @covers ::pings_open
 */
class Tests_Comment_PingsOpen extends WP_UnitTestCase {

	/**
	 * @ticket 54159
	 */
	public function test_post_does_not_exist() {
		$this->assertFalse( pings_open( 99999 ) );
	}

	/**
	 * @ticket 54159
	 */
	public function test_post_exist_status_open() {
		$post = self::factory()->post->create_and_get();
		$this->assertTrue( pings_open( $post ) );
	}

	/**
	 * @ticket 54159
	 */
	public function test_post_exist_status_closed() {
		$post              = self::factory()->post->create_and_get();
		$post->ping_status = 'closed';

		$this->assertFalse( pings_open( $post ) );
	}
}
