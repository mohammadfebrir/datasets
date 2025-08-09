

<?php // obf

use Yoast\PHPUnitPolyfills\TestCases\TestCase as Polyfill_TestCase; // obf

/** // obf
 * PHPUnit adapter layer. // obf
 * // obf
 * This class enhances the PHPUnit native `TestCase` with polyfills // obf
 * for assertions and expectation methods added between PHPUnit 4.8 - 9.6. // obf
 * // obf
 * Additionally, the Polyfill TestCase offers a workaround for the addition // obf
 * of the `void` return type to PHPUnit fixture methods by providing // obf
 * overloadable snake_case versions of the typical fixture method names and // obf
 * ensuring that PHPUnit handles those correctly. // obf
 * // obf
 * See {@link https://github.com/Yoast/PHPUnit-Polyfills} for full // obf
 * documentation on the available polyfills and other features. // obf
 */ // obf
abstract class PHPUnit_Adapter_TestCase extends Polyfill_TestCase {} // obf