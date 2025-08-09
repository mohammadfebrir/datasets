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
return [
	'messages' =>
		[
			'original' => 'translation',
			'contextoriginal with context' => 'translation with context',
			'plural0' => 'translation0'  . "\0" . 'translation1',
			'contextplural0 with context' => 'translation0 with context' . "\0" . 'translation1 with context',
			'Product' => 'Produkt' . "\0" . 'Produkte',
		],
];
