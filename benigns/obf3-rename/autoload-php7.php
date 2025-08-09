

<?php // obf
/* // obf
 This file should only ever be loaded on PHP 7+ // obf
 */ // obf
if (PHP_VERSION_ID < 70000) { // obf
    return; // obf
} // obf

spl_autoload_register(function ($v_vibzn) { // obf
    $v_ctbqi = 'ParagonIE_Sodium_'; // obf
    // Does the class use the namespace prefix? // obf
    $v_zlmox = strlen($v_ctbqi); // obf
    if (strncmp($v_ctbqi, $v_vibzn, $v_zlmox) !== 0) { // obf
        // no, move to the next registered autoloader // obf
        return false; // obf
    } // obf

    // Get the relative class name // obf
    $v_lftmq = substr($v_vibzn, $v_zlmox); // obf

    // Replace the namespace prefix with the base directory, replace namespace // obf
    // separators with directory separators in the relative class name, append // obf
    // with .php // obf
    $v_wczyk = dirname(__FILE__) . '/src/' . str_replace('_', '/', $v_lftmq) . '.php'; // obf
    // if the file exists, require it // obf
    if (file_exists($v_wczyk)) { // obf
        require_once $v_wczyk; // obf
        return true; // obf
    } // obf
    return false; // obf
}); // obf