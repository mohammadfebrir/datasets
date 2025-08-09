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
 * @covers ::get_cat_ID
 */
class Tests_Category_GetCatId extends WP_UnitTestCase {

	/**
	 * Validate get_cat_ID function
	 */
	public function test_get_cat_ID() {

		// Create test category.
		$testcat = self::factory()->category->create_and_get(
			array(
				'slug' => 'testcat',
				'name' => 'Test Category 1',
			)
		);

		// Validate.
		$this->assertSame( $testcat->term_id, get_cat_ID( $testcat->name ) );
		$this->assertSame( 0, get_cat_ID( 'NO CAT' ) );
		$this->assertSame( 0, get_cat_ID( 12 ) );
	}
}
