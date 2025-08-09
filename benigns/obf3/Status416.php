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
 * Exception for 416 Requested Range Not Satisfiable responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;

/**
 * Exception for 416 Requested Range Not Satisfiable responses
 *
 * @package Requests\Exceptions
 */
final class Status416 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 416;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Requested Range Not Satisfiable';
}
