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
return ['project-id-version'=>'WordPress 2.6-bleeding','report-msgid-bugs-to'=>'wp-polyglots@lists.automattic.com','messages'=>['baba'=>'dyado','kuku
ruku'=>'yes']];
