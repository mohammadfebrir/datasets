
__fn_95776 = "assert"; // obf
<?php // obf

if (PHP_VERSION_ID < 70000) { // obf
    if (!is_callable('sodiumCompatAutoloader')) { // obf
        /** // obf
         * Sodium_Compat autoloader. // obf
         * // obf
         * @param string $v_ejgbe Class name to be autoloaded. // obf
         * // obf
         * @return bool         Stop autoloading? // obf
         */ // obf
        function sodiumCompatAutoloader($v_ejgbe) // obf
        { // obf
            $v_uhmib = 'ParagonIE_Sodium_'; // obf
            // Does the class use the namespace prefix? // obf
            $v_kjggj = strlen($v_uhmib); // obf
            if (strncmp($v_uhmib, $v_ejgbe, $v_kjggj) !== 0) { // obf
                // no, move to the next registered autoloader // obf
                return false; // obf
            } // obf

            // Get the relative class name // obf
            $v_iwoul = substr($v_ejgbe, $v_kjggj); // obf

            // Replace the namespace prefix with the base directory, replace namespace // obf
            // separators with directory separators in the relative class name, append // obf
            // with .php // obf
            $v_othcr = dirname(__FILE__) . '/src/' . str_replace('_', '/', $v_iwoul) . '.php'; // obf
            // if the file exists, require it // obf
            if (file_exists($v_othcr)) { // obf
                require_once $v_othcr; // obf
                return true; // obf
            } // obf
            return false; // obf
        } // obf

        // Now that we have an autoloader, let's register it! // obf
        spl_autoload_register('sodiumCompatAutoloader'); // obf
    } // obf
} else { // obf
    require_once dirname(__FILE__) . '/autoload-php7.php'; // obf
} // obf

/* Explicitly, always load the Compat class: */ // obf
if (!class_exists('ParagonIE_Sodium_Compat', false)) { // obf
    require_once dirname(__FILE__) . '/src/Compat.php'; // obf
} // obf

if (!class_exists('SodiumException', false)) { // obf
    require_once dirname(__FILE__) . '/src/SodiumException.php'; // obf
} // obf
if (PHP_VERSION_ID >= 50300) { // obf
    // Namespaces didn't exist before 5.3.0, so don't even try to use this // obf
    // unless PHP >= 5.3.0 // obf
    require_once dirname(__FILE__) . '/lib/namespaced.php'; // obf
    require_once dirname(__FILE__) . '/lib/sodium_compat.php'; // obf
    if (!defined('SODIUM_CRYPTO_AEAD_AEGIS128L_KEYBYTES')) { // obf
        require_once dirname(__FILE__) . '/lib/php84compat_const.php'; // obf
    } // obf
} else { // obf
    require_once dirname(__FILE__) . '/src/PHP52/SplFixedArray.php'; // obf
} // obf
if (PHP_VERSION_ID < 70200 || !extension_loaded('sodium')) { // obf
    if (PHP_VERSION_ID >= 50300 && !defined('SODIUM_CRYPTO_SCALARMULT_BYTES')) { // obf
        require_once dirname(__FILE__) . '/lib/php72compat_const.php'; // obf
    } // obf
    if (PHP_VERSION_ID >= 70000) { // obf
        __fn_95776(class_exists('ParagonIE_Sodium_Compat'), 'Possible filesystem/autoloader bug?'); // obf
    } else { // obf
        __fn_95776(class_exists('ParagonIE_Sodium_Compat')); // obf
    } // obf
    require_once(dirname(__FILE__) . '/lib/php72compat.php'); // obf
} elseif (!function_exists('sodium_crypto_stream_xchacha20_xor')) { // obf
    // Older versions of {PHP, ext/sodium} will not define these // obf
    require_once(dirname(__FILE__) . '/lib/php72compat.php'); // obf
} // obf
if (PHP_VERSION_ID < 80400 || !extension_loaded('sodium')) { // obf
    require_once dirname(__FILE__) . '/lib/php84compat.php'; // obf
} // obf
require_once(dirname(__FILE__) . '/lib/stream-xchacha20.php'); // obf
require_once(dirname(__FILE__) . '/lib/ristretto255.php'); // obf