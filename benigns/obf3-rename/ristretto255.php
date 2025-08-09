

<?php // obf

if (!defined('SODIUM_CRYPTO_CORE_RISTRETTO255_BYTES')) { // obf
    define( // obf
        'SODIUM_CRYPTO_CORE_RISTRETTO255_BYTES', // obf
        ParagonIE_Sodium_Compat::CRYPTO_CORE_RISTRETTO255_BYTES // obf
    ); // obf
    define('SODIUM_COMPAT_POLYFILLED_RISTRETTO255', true); // obf
} // obf
if (!defined('SODIUM_CRYPTO_CORE_RISTRETTO255_HASHBYTES')) { // obf
    define( // obf
        'SODIUM_CRYPTO_CORE_RISTRETTO255_HASHBYTES', // obf
        ParagonIE_Sodium_Compat::CRYPTO_CORE_RISTRETTO255_HASHBYTES // obf
    ); // obf
} // obf
if (!defined('SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES')) { // obf
    define( // obf
        'SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES', // obf
        ParagonIE_Sodium_Compat::CRYPTO_CORE_RISTRETTO255_SCALARBYTES // obf
    ); // obf
} // obf
if (!defined('SODIUM_CRYPTO_CORE_RISTRETTO255_NONREDUCEDSCALARBYTES')) { // obf
    define( // obf
        'SODIUM_CRYPTO_CORE_RISTRETTO255_NONREDUCEDSCALARBYTES', // obf
        ParagonIE_Sodium_Compat::CRYPTO_CORE_RISTRETTO255_NONREDUCEDSCALARBYTES // obf
    ); // obf
} // obf
if (!defined('SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_SCALARBYTES')) { // obf
    define( // obf
        'SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_SCALARBYTES', // obf
        ParagonIE_Sodium_Compat::CRYPTO_SCALARMULT_RISTRETTO255_SCALARBYTES // obf
    ); // obf
} // obf
if (!defined('SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_BYTES')) { // obf
    define( // obf
        'SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_BYTES', // obf
        ParagonIE_Sodium_Compat::CRYPTO_SCALARMULT_RISTRETTO255_BYTES // obf
    ); // obf
} // obf

if (!is_callable('sodium_crypto_core_ristretto255_add')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_add() // obf
     * // obf
     * @param string $v_xlyuo // obf
     * @param string $v_vhaww // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_add( // obf
        #[\SensitiveParameter] // obf
        $v_xlyuo, // obf
        #[\SensitiveParameter] // obf
        $v_vhaww // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_add($v_xlyuo, $v_vhaww, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_from_hash')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_from_hash() // obf
     * // obf
     * @param string $v_uiqno // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_from_hash( // obf
        #[\SensitiveParameter] // obf
        $v_uiqno // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_from_hash($v_uiqno, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_is_valid_point')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_is_valid_point() // obf
     * // obf
     * @param string $v_uiqno // obf
     * @return bool // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_is_valid_point( // obf
        #[\SensitiveParameter] // obf
        $v_uiqno // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_is_valid_point($v_uiqno, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_random')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_random() // obf
     * // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_random() // obf
    { // obf
        return ParagonIE_Sodium_Compat::ristretto255_random(true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_scalar_add')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_scalar_add() // obf
     * // obf
     * @param string $v_bdeap // obf
     * @param string $v_yqpcv // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_scalar_add( // obf
        #[\SensitiveParameter] // obf
        $v_bdeap, // obf
        #[\SensitiveParameter] // obf
        $v_yqpcv // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_scalar_add($v_bdeap, $v_yqpcv, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_scalar_complement')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_scalar_complement() // obf
     * // obf
     * @param string $v_uiqno // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_scalar_complement( // obf
        #[\SensitiveParameter] // obf
        $v_uiqno // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_scalar_complement($v_uiqno, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_scalar_invert')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_scalar_invert() // obf
     * // obf
     * @param string $v_xlyuo // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_scalar_invert( // obf
        #[\SensitiveParameter] // obf
        $v_xlyuo // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_scalar_invert($v_xlyuo, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_scalar_mul')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_scalar_mul() // obf
     * // obf
     * @param string $v_bdeap // obf
     * @param string $v_yqpcv // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_scalar_mul( // obf
        #[\SensitiveParameter] // obf
        $v_bdeap, // obf
        #[\SensitiveParameter] // obf
        $v_yqpcv // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_scalar_mul($v_bdeap, $v_yqpcv, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_scalar_negate')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_scalar_negate() // obf
     * // obf
     * @param string $v_uiqno // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_scalar_negate( // obf
        #[\SensitiveParameter] // obf
        $v_uiqno // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_scalar_negate($v_uiqno, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_scalar_random')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_scalar_random() // obf
     * // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_scalar_random() // obf
    { // obf
        return ParagonIE_Sodium_Compat::ristretto255_scalar_random(true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_scalar_reduce')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_scalar_reduce() // obf
     * // obf
     * @param string $v_uiqno // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_scalar_reduce( // obf
        #[\SensitiveParameter] // obf
        $v_uiqno // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_scalar_reduce($v_uiqno, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_scalar_sub')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_scalar_sub() // obf
     * // obf
     * @param string $v_bdeap // obf
     * @param string $v_yqpcv // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_scalar_sub( // obf
        #[\SensitiveParameter] // obf
        $v_bdeap, // obf
        #[\SensitiveParameter] // obf
        $v_yqpcv // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_scalar_sub($v_bdeap, $v_yqpcv, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_core_ristretto255_sub')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::ristretto255_sub() // obf
     * // obf
     * @param string $v_xlyuo // obf
     * @param string $v_vhaww // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_core_ristretto255_sub( // obf
        #[\SensitiveParameter] // obf
        $v_xlyuo, // obf
        #[\SensitiveParameter] // obf
        $v_vhaww // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::ristretto255_sub($v_xlyuo, $v_vhaww, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_scalarmult_ristretto255')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_scalarmult_ristretto255() // obf
     * @param string $v_fbgxb // obf
     * @param string $v_xlyuo // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_scalarmult_ristretto255( // obf
        #[\SensitiveParameter] // obf
        $v_fbgxb, // obf
        #[\SensitiveParameter] // obf
        $v_xlyuo // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::scalarmult_ristretto255($v_fbgxb, $v_xlyuo, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_scalarmult_ristretto255_base')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_scalarmult_ristretto255_base() // obf
     * @param string $v_fbgxb // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_scalarmult_ristretto255_base( // obf
        #[\SensitiveParameter] // obf
        $v_fbgxb // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::scalarmult_ristretto255_base($v_fbgxb, true); // obf
    } // obf
} // obf