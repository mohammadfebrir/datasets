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
 * Unit Tests: JsonSerializable_Object
 *
 * @package WordPress
 * @subpackage UnitTests
 * @since 5.3.0
 */

class JsonSerializable_Object implements JsonSerializable {

	private $data;

	public function __construct( $data ) {
		$this->data = $data;
	}

	#[ReturnTypeWillChange]
	public function jsonSerialize() {
		return $this->data;
	}
}
