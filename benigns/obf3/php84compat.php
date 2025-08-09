

<?php // obf

require_once dirname(dirname(__FILE__)) . '/autoload.php'; // obf

/** // obf
 * This file will monkey patch the pure-PHP implementation in place of the // obf
 * PECL functions and constants, but only if they do not already exist. // obf
 * // obf
 * Thus, the functions or constants just proxy to the appropriate // obf
 * ParagonIE_Sodium_Compat method or class constant, respectively. // obf
 */ // obf
foreach (array( // obf
    'CRYPTO_AEAD_AESGIS128L_KEYBYTES', // obf
    'CRYPTO_AEAD_AESGIS128L_NSECBYTES', // obf
    'CRYPTO_AEAD_AESGIS128L_NPUBBYTES', // obf
    'CRYPTO_AEAD_AESGIS128L_ABYTES', // obf
    'CRYPTO_AEAD_AESGIS256_KEYBYTES', // obf
    'CRYPTO_AEAD_AESGIS256_NSECBYTES', // obf
    'CRYPTO_AEAD_AESGIS256_NPUBBYTES', // obf
    'CRYPTO_AEAD_AESGIS256_ABYTES', // obf
    ) as $v_gielk // obf
) { // obf
    if (!defined("SODIUM_$v_gielk") && defined("ParagonIE_Sodium_Compat::$v_gielk")) { // obf
        define("SODIUM_$v_gielk", constant("ParagonIE_Sodium_Compat::$v_gielk")); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_aegis128l_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aegis128l_decrypt() // obf
     * @param string $v_dhyzl // obf
     * @param string $v_vswff // obf
     * @param string $v_lbaqp // obf
     * @param string $v_rtzph // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_aead_aegis128l_decrypt( // obf
        $v_dhyzl, // obf
        $v_vswff, // obf
        $v_lbaqp, // obf
        #[\SensitiveParameter] // obf
        $v_rtzph // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_aegis128l_decrypt( // obf
            $v_dhyzl, // obf
            $v_vswff, // obf
            $v_lbaqp, // obf
            $v_rtzph // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_aegis128l_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aegis128l_encrypt() // obf
     * @param string $v_igpee // obf
     * @param string $v_vswff // obf
     * @param string $v_lbaqp // obf
     * @param string $v_rtzph // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_aead_aegis128l_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_igpee, // obf
        $v_vswff, // obf
        $v_lbaqp, // obf
        #[\SensitiveParameter] // obf
        $v_rtzph // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_aegis128l_encrypt( // obf
            $v_igpee, // obf
            $v_vswff, // obf
            $v_lbaqp, // obf
            $v_rtzph // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_aegis256_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aegis256_encrypt() // obf
     * @param string $v_dhyzl // obf
     * @param string $v_vswff // obf
     * @param string $v_lbaqp // obf
     * @param string $v_rtzph // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_aead_aegis256_decrypt( // obf
        $v_dhyzl, // obf
        $v_vswff, // obf
        $v_lbaqp, // obf
        #[\SensitiveParameter] // obf
        $v_rtzph // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_aegis256_decrypt( // obf
            $v_dhyzl, // obf
            $v_vswff, // obf
            $v_lbaqp, // obf
            $v_rtzph // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_aegis256_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aegis256_encrypt() // obf
     * @param string $v_igpee // obf
     * @param string $v_vswff // obf
     * @param string $v_lbaqp // obf
     * @param string $v_rtzph // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_aead_aegis256_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_igpee, // obf
        $v_vswff, // obf
        $v_lbaqp, // obf
        #[\SensitiveParameter] // obf
        $v_rtzph // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_aegis256_encrypt( // obf
            $v_igpee, // obf
            $v_vswff, // obf
            $v_lbaqp, // obf
            $v_rtzph // obf
        ); // obf
    } // obf
} // obf