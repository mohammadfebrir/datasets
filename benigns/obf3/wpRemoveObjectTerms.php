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
 */
class Tests_Term_WpRemoveObjectTerms extends WP_UnitTestCase {
	/**
	 * @ticket 34338
	 */
	public function test_removal_should_delete_object_relationship_cache() {
		register_taxonomy( 'wptests_tax', 'post' );
		$p = self::factory()->post->create();
		$t = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) );

		wp_set_object_terms( $p, $t, 'wptests_tax' );

		// Pollute the cache.
		get_the_terms( $p, 'wptests_tax' );

		wp_remove_object_terms( $p, $t, 'wptests_tax' );

		$this->assertFalse( get_the_terms( $p, 'wptests_tax' ) );
	}
}
