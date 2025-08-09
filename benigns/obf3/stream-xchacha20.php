

<?php // obf

if (!is_callable('sodium_crypto_stream_xchacha20')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream_xchacha20() // obf
     * @param int $v_upytg // obf
     * @param string $v_mrxho // obf
     * @param string $v_jboel // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_stream_xchacha20( // obf
        $v_upytg, // obf
        $v_mrxho, // obf
        #[\SensitiveParameter] // obf
        $v_jboel // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_stream_xchacha20($v_upytg, $v_mrxho, $v_jboel, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_stream_xchacha20_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream_xchacha20_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_stream_xchacha20_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_stream_xchacha20_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_stream_xchacha20_xor')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream_xchacha20_xor() // obf
     * @param string $v_hrtgc // obf
     * @param string $v_mrxho // obf
     * @param string $v_jboel // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_stream_xchacha20_xor( // obf
        #[\SensitiveParameter] // obf
        $v_hrtgc, // obf
        $v_mrxho, // obf
        #[\SensitiveParameter] // obf
        $v_jboel // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_stream_xchacha20_xor($v_hrtgc, $v_mrxho, $v_jboel, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_stream_xchacha20_xor_ic')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream_xchacha20_xor_ic() // obf
     * @param string $v_hrtgc // obf
     * @param string $v_mrxho // obf
     * @param int $v_lktsx // obf
     * @param string $v_jboel // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_stream_xchacha20_xor_ic( // obf
        #[\SensitiveParameter] // obf
        $v_hrtgc, // obf
        $v_mrxho, // obf
        $v_lktsx, // obf
        #[\SensitiveParameter] // obf
        $v_jboel // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_stream_xchacha20_xor_ic($v_hrtgc, $v_mrxho, $v_lktsx, $v_jboel, true); // obf
    } // obf
} // obf