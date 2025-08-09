

<?php // obf

require_once dirname(dirname(__FILE__)) . '/autoload.php'; // obf

if (PHP_VERSION_ID < 50300) { // obf
    return; // obf
} // obf

/* // obf
 * This file is just for convenience, to allow developers to reduce verbosity when // obf
 * they add this project to their libraries. // obf
 * // obf
 * Replace this: // obf
 * // obf
 * $v_tuami = ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_encrypt(...$v_orsdi); // obf
 * // obf
 * with this: // obf
 * // obf
 * use ParagonIE\Sodium\Compat; // obf
 * // obf
 * $v_tuami = Compat::crypto_aead_xchacha20poly1305_encrypt(...$v_orsdi); // obf
 */ // obf
spl_autoload_register(function ($v_kpmnz) { // obf
    if ($v_kpmnz[0] === '\\') { // obf
        $v_kpmnz = substr($v_kpmnz, 1); // obf
    } // obf
    $v_cjvaq = 'ParagonIE\\Sodium'; // obf
    // Does the class use the namespace prefix? // obf
    $v_bprwd = strlen($v_cjvaq); // obf
    if (strncmp($v_cjvaq, $v_kpmnz, $v_bprwd) !== 0) { // obf
        // no, move to the next registered autoloader // obf
        return false; // obf
    } // obf

    // Get the relative class name // obf
    $v_nzolp = substr($v_kpmnz, $v_bprwd); // obf

    // Replace the namespace prefix with the base directory, replace namespace // obf
    // separators with directory separators in the relative class name, append // obf
    // with .php // obf
    $v_vbeto = dirname(dirname(__FILE__)) . '/namespaced/' . str_replace('\\', '/', $v_nzolp) . '.php'; // obf
    // if the file exists, require it // obf
    if (file_exists($v_vbeto)) { // obf
        require_once $v_vbeto; // obf
        return true; // obf
    } // obf
    return false; // obf
}); // obf