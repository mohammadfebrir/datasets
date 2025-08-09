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
return ['domain'=>NULL,'plural-forms'=>'nplurals=2; plural=n != 1;','messages'=>['text directionltr'=>'ltr','<strong>ERROR</strong>: Sorry, that username is not allowed.'=>'<strong>ERROR</strong>: Sorry, that username is not allowed.','Invalid parameter.'=>'Invalid parameter.','menu location(Current: %s)'=>'(Current: %s)','menu(Currently set to: %s)'=>'(Currently set to: %s)'],'language'=>'en_GB','x-generator'=>'Poedit 1.8.10'];