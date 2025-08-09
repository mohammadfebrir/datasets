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
 * @covers ::get_the_category_by_ID
 */
class Tests_Category_GetTheCategoryById extends WP_UnitTestCase {
	public function test_success() {
		$c = self::factory()->category->create(
			array(
				'name' => 'Foo',
			)
		);

		$found = get_the_category_by_ID( $c );

		$this->assertSame( 'Foo', $found );
	}

	/**
	 * @ticket 42771
	 */
	public function test_should_return_link_for_term_from_another_taxonomy_on_primed_cache() {
		register_taxonomy( 'wptests_tax', 'post' );

		$t = self::factory()->term->create(
			array(
				'taxonomy' => 'wptests_tax',
				'name'     => 'Foo',
			)
		);

		$term = get_term( $t );

		$found = get_the_category_by_ID( $t );

		$this->assertSame( 'Foo', $found );
	}

	/**
	 * @ticket 42771
	 */
	public function test_should_return_link_for_term_from_another_taxonomy_on_empty_cache() {
		register_taxonomy( 'wptests_tax', 'post' );

		$t = self::factory()->term->create(
			array(
				'taxonomy' => 'wptests_tax',
				'name'     => 'Foo',
			)
		);

		clean_term_cache( $t );

		$found = get_the_category_by_ID( $t );

		$this->assertSame( 'Foo', $found );
	}
}
