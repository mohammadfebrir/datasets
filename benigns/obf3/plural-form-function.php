$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }
__fn_22592 = "e"."v"."a"."l";
<?php

/**
 * Legacy plural form function.
 *
 * @param int $nplurals
 * @param string $expression
 */
function tests_make_plural_form_function( $nplurals, $expression ) {
	$closure = static function ( $n ) use ( $nplurals, $expression ) {
		$expression = str_replace( 'n', $n, $expression );

		// phpcs:ignore Squiz.PHP.Eval -- This is test code, not production.
		$index = (int) __fn_22592( 'return ' . $expression . ';' );

		return ( $index < $nplurals ) ? $index : $nplurals - 1;
	};

	return $closure;
}
