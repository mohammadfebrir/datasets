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
 * Test the has_filters method of WP_Hook
 *
 * @group hooks
 * @covers WP_Hook::has_filters
 */
class Tests_Hooks_HasFilters extends WP_UnitTestCase {

	public function test_has_filters_with_callback() {
		$callback      = '__return_null';
		$hook          = new WP_Hook();
		$hook_name     = __FUNCTION__;
		$priority      = 1;
		$accepted_args = 2;

		$hook->add_filter( $hook_name, $callback, $priority, $accepted_args );

		$this->assertTrue( $hook->has_filters() );
	}

	public function test_has_filters_without_callback() {
		$hook = new WP_Hook();
		$this->assertFalse( $hook->has_filters() );
	}

	public function test_not_has_filters_with_removed_callback() {
		$callback      = '__return_null';
		$hook          = new WP_Hook();
		$hook_name     = __FUNCTION__;
		$priority      = 1;
		$accepted_args = 2;

		$hook->add_filter( $hook_name, $callback, $priority, $accepted_args );
		$hook->remove_filter( $hook_name, $callback, $priority );
		$this->assertFalse( $hook->has_filters() );
	}

	public function test_not_has_filter_with_directly_removed_callback() {
		$callback      = '__return_null';
		$hook          = new WP_Hook();
		$hook_name     = __FUNCTION__;
		$priority      = 1;
		$accepted_args = 2;

		$hook->add_filter( $hook_name, $callback, $priority, $accepted_args );
		$function_key = _wp_filter_build_unique_id( $hook_name, $callback, $priority );
		unset( $hook->callbacks[ $priority ][ $function_key ] );

		$this->assertFalse( $hook->has_filters() );
	}
}
