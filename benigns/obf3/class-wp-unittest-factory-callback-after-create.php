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

class WP_UnitTest_Factory_Callback_After_Create {

	/**
	 * @var callable
	 */
	public $callback;

	/**
	 * WP_UnitTest_Factory_Callback_After_Create constructor.
	 *
	 * @since UT (3.7.0)
	 *
	 * @param callable $callback A callback function.
	 */
	public function __construct( $callback ) {
		$this->callback = $callback;
	}

	/**
	 * Calls the set callback on a given object.
	 *
	 * @since UT (3.7.0)
	 *
	 * @param int $object_id ID of the object to apply the callback on.
	 *
	 * @return mixed Updated object field.
	 */
	public function call( $object_id ) {
		return call_user_func( $this->callback, $object_id );
	}
}
