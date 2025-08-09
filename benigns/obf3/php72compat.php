

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
    'BASE64_VARIANT_ORIGINAL', // obf
    'BASE64_VARIANT_ORIGINAL_NO_PADDING', // obf
    'BASE64_VARIANT_URLSAFE', // obf
    'BASE64_VARIANT_URLSAFE_NO_PADDING', // obf
    'CRYPTO_AEAD_AES256GCM_KEYBYTES', // obf
    'CRYPTO_AEAD_AES256GCM_NSECBYTES', // obf
    'CRYPTO_AEAD_AES256GCM_NPUBBYTES', // obf
    'CRYPTO_AEAD_AES256GCM_ABYTES', // obf
    'CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES', // obf
    'CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES', // obf
    'CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES', // obf
    'CRYPTO_AEAD_CHACHA20POLY1305_ABYTES', // obf
    'CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES', // obf
    'CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES', // obf
    'CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES', // obf
    'CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES', // obf
    'CRYPTO_AEAD_XCHACHA20POLY1305_IETF_KEYBYTES', // obf
    'CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NSECBYTES', // obf
    'CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES', // obf
    'CRYPTO_AEAD_XCHACHA20POLY1305_IETF_ABYTES', // obf
    'CRYPTO_AUTH_BYTES', // obf
    'CRYPTO_AUTH_KEYBYTES', // obf
    'CRYPTO_BOX_SEALBYTES', // obf
    'CRYPTO_BOX_SECRETKEYBYTES', // obf
    'CRYPTO_BOX_PUBLICKEYBYTES', // obf
    'CRYPTO_BOX_KEYPAIRBYTES', // obf
    'CRYPTO_BOX_MACBYTES', // obf
    'CRYPTO_BOX_NONCEBYTES', // obf
    'CRYPTO_BOX_SEEDBYTES', // obf
    'CRYPTO_KDF_BYTES_MIN', // obf
    'CRYPTO_KDF_BYTES_MAX', // obf
    'CRYPTO_KDF_CONTEXTBYTES', // obf
    'CRYPTO_KDF_KEYBYTES', // obf
    'CRYPTO_KX_BYTES', // obf
    'CRYPTO_KX_KEYPAIRBYTES', // obf
    'CRYPTO_KX_PRIMITIVE', // obf
    'CRYPTO_KX_SEEDBYTES', // obf
    'CRYPTO_KX_PUBLICKEYBYTES', // obf
    'CRYPTO_KX_SECRETKEYBYTES', // obf
    'CRYPTO_KX_SESSIONKEYBYTES', // obf
    'CRYPTO_GENERICHASH_BYTES', // obf
    'CRYPTO_GENERICHASH_BYTES_MIN', // obf
    'CRYPTO_GENERICHASH_BYTES_MAX', // obf
    'CRYPTO_GENERICHASH_KEYBYTES', // obf
    'CRYPTO_GENERICHASH_KEYBYTES_MIN', // obf
    'CRYPTO_GENERICHASH_KEYBYTES_MAX', // obf
    'CRYPTO_PWHASH_SALTBYTES', // obf
    'CRYPTO_PWHASH_STRPREFIX', // obf
    'CRYPTO_PWHASH_ALG_ARGON2I13', // obf
    'CRYPTO_PWHASH_ALG_ARGON2ID13', // obf
    'CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE', // obf
    'CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE', // obf
    'CRYPTO_PWHASH_MEMLIMIT_MODERATE', // obf
    'CRYPTO_PWHASH_OPSLIMIT_MODERATE', // obf
    'CRYPTO_PWHASH_MEMLIMIT_SENSITIVE', // obf
    'CRYPTO_PWHASH_OPSLIMIT_SENSITIVE', // obf
    'CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES', // obf
    'CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX', // obf
    'CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE', // obf
    'CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE', // obf
    'CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE', // obf
    'CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE', // obf
    'CRYPTO_SCALARMULT_BYTES', // obf
    'CRYPTO_SCALARMULT_SCALARBYTES', // obf
    'CRYPTO_SHORTHASH_BYTES', // obf
    'CRYPTO_SHORTHASH_KEYBYTES', // obf
    'CRYPTO_SECRETBOX_KEYBYTES', // obf
    'CRYPTO_SECRETBOX_MACBYTES', // obf
    'CRYPTO_SECRETBOX_NONCEBYTES', // obf
    'CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_ABYTES', // obf
    'CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_HEADERBYTES', // obf
    'CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_KEYBYTES', // obf
    'CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PUSH', // obf
    'CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PULL', // obf
    'CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY', // obf
    'CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL', // obf
    'CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_MESSAGEBYTES_MAX', // obf
    'CRYPTO_SIGN_BYTES', // obf
    'CRYPTO_SIGN_SEEDBYTES', // obf
    'CRYPTO_SIGN_PUBLICKEYBYTES', // obf
    'CRYPTO_SIGN_SECRETKEYBYTES', // obf
    'CRYPTO_SIGN_KEYPAIRBYTES', // obf
    'CRYPTO_STREAM_KEYBYTES', // obf
    'CRYPTO_STREAM_NONCEBYTES', // obf
    'CRYPTO_STREAM_XCHACHA20_KEYBYTES', // obf
    'CRYPTO_STREAM_XCHACHA20_NONCEBYTES', // obf
    'LIBRARY_MAJOR_VERSION', // obf
    'LIBRARY_MINOR_VERSION', // obf
    'LIBRARY_VERSION_MAJOR', // obf
    'LIBRARY_VERSION_MINOR', // obf
    'VERSION_STRING' // obf
    ) as $v_rbjqd // obf
) { // obf
    if (!defined("SODIUM_$v_rbjqd") && defined("ParagonIE_Sodium_Compat::$v_rbjqd")) { // obf
        define("SODIUM_$v_rbjqd", constant("ParagonIE_Sodium_Compat::$v_rbjqd")); // obf
    } // obf
} // obf
if (!is_callable('sodium_add')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::add() // obf
     * @param string $v_qfflj // obf
     * @param string $v_zuwvd // obf
     * @return void // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_add( // obf
        #[\SensitiveParameter] // obf
        &$v_qfflj, // obf
        #[\SensitiveParameter] // obf
        $v_zuwvd // obf
    ) { // obf
        ParagonIE_Sodium_Compat::add($v_qfflj, $v_zuwvd); // obf
    } // obf
} // obf
if (!is_callable('sodium_base642bin')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::bin2base64() // obf
     * @param string $v_mdqux // obf
     * @param int $v_flwjl // obf
     * @param string $v_wvqip // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_base642bin( // obf
        #[\SensitiveParameter] // obf
        $v_mdqux, // obf
        $v_flwjl, // obf
        $v_wvqip ='' // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::base642bin($v_mdqux, $v_flwjl, $v_wvqip); // obf
    } // obf
} // obf
if (!is_callable('sodium_bin2base64')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::bin2base64() // obf
     * @param string $v_mdqux // obf
     * @param int $v_flwjl // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_bin2base64( // obf
        #[\SensitiveParameter] // obf
        $v_mdqux, // obf
        $v_flwjl // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::bin2base64($v_mdqux, $v_flwjl); // obf
    } // obf
} // obf
if (!is_callable('sodium_bin2hex')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::hex2bin() // obf
     * @param string $v_mdqux // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_bin2hex( // obf
        #[\SensitiveParameter] // obf
        $v_mdqux // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::bin2hex($v_mdqux); // obf
    } // obf
} // obf
if (!is_callable('sodium_compare')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::compare() // obf
     * @param string $v_qfflj // obf
     * @param string $v_zuwvd // obf
     * @return int // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_compare( // obf
        #[\SensitiveParameter] // obf
        $v_qfflj, // obf
        #[\SensitiveParameter] // obf
        $v_zuwvd // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::compare($v_qfflj, $v_zuwvd); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_aes256gcm_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_decrypt() // obf
     * @param string $v_xnlnm // obf
     * @param string $v_stbhd // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string|bool // obf
     */ // obf
    function sodium_crypto_aead_aes256gcm_decrypt( // obf
        $v_xnlnm, // obf
        $v_stbhd, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_decrypt( // obf
                $v_xnlnm, // obf
                $v_stbhd, // obf
                $v_mdmlc, // obf
                $v_moktm // obf
            ); // obf
        } catch (Error $v_bdptq) { // obf
            return false; // obf
        } catch (Exception $v_bdptq) { // obf
            if (($v_bdptq instanceof SodiumException) && ($v_bdptq->getMessage() === 'AES-256-GCM is not available')) { // obf
                throw $v_bdptq; // obf
            } // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_aes256gcm_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_encrypt() // obf
     * @param string $v_eocms // obf
     * @param string $v_stbhd // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_aead_aes256gcm_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_stbhd, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_encrypt($v_eocms, $v_stbhd, $v_mdmlc, $v_moktm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_aes256gcm_is_available')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_is_available() // obf
     * @return bool // obf
     */ // obf
    function sodium_crypto_aead_aes256gcm_is_available() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_is_available(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_chacha20poly1305_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_decrypt() // obf
     * @param string $v_xnlnm // obf
     * @param string $v_stbhd // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string|bool // obf
     */ // obf
    function sodium_crypto_aead_chacha20poly1305_decrypt( // obf
        $v_xnlnm, // obf
        $v_stbhd, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_decrypt( // obf
                $v_xnlnm, // obf
                $v_stbhd, // obf
                $v_mdmlc, // obf
                $v_moktm // obf
            ); // obf
        } catch (Error $v_bdptq) { // obf
            return false; // obf
        } catch (Exception $v_bdptq) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_chacha20poly1305_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_encrypt() // obf
     * @param string $v_eocms // obf
     * @param string $v_stbhd // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_aead_chacha20poly1305_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_stbhd, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_encrypt( // obf
            $v_eocms, // obf
            $v_stbhd, // obf
            $v_mdmlc, // obf
            $v_moktm // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_chacha20poly1305_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_aead_chacha20poly1305_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_chacha20poly1305_ietf_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_decrypt() // obf
     * @param string $v_eocms // obf
     * @param string $v_stbhd // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string|bool // obf
     */ // obf
    function sodium_crypto_aead_chacha20poly1305_ietf_decrypt( // obf
        $v_eocms, // obf
        $v_stbhd, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_decrypt( // obf
                $v_eocms, // obf
                $v_stbhd, // obf
                $v_mdmlc, // obf
                $v_moktm // obf
            ); // obf
        } catch (Error $v_bdptq) { // obf
            return false; // obf
        } catch (Exception $v_bdptq) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_chacha20poly1305_ietf_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_encrypt() // obf
     * @param string $v_eocms // obf
     * @param string $v_stbhd // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_aead_chacha20poly1305_ietf_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_stbhd, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_encrypt( // obf
            $v_eocms, // obf
            $v_stbhd, // obf
            $v_mdmlc, // obf
            $v_moktm // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_chacha20poly1305_ietf_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_aead_chacha20poly1305_ietf_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_xchacha20poly1305_ietf_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_decrypt() // obf
     * @param string $v_xnlnm // obf
     * @param string $v_stbhd // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string|bool // obf
     */ // obf
    function sodium_crypto_aead_xchacha20poly1305_ietf_decrypt( // obf
        $v_xnlnm, // obf
        $v_stbhd, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_decrypt( // obf
                $v_xnlnm, // obf
                $v_stbhd, // obf
                $v_mdmlc, // obf
                $v_moktm, // obf
                true // obf
            ); // obf
        } catch (Error $v_bdptq) { // obf
            return false; // obf
        } catch (Exception $v_bdptq) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_xchacha20poly1305_ietf_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_encrypt() // obf
     * @param string $v_eocms // obf
     * @param string $v_stbhd // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_aead_xchacha20poly1305_ietf_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_stbhd, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_encrypt( // obf
            $v_eocms, // obf
            $v_stbhd, // obf
            $v_mdmlc, // obf
            $v_moktm, // obf
            true // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_aead_xchacha20poly1305_ietf_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_aead_xchacha20poly1305_ietf_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_auth')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_auth() // obf
     * @param string $v_eocms // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_auth( // obf
        $v_eocms, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_auth($v_eocms, $v_moktm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_auth_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_auth_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_auth_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_auth_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_auth_verify')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_auth_verify() // obf
     * @param string $v_fuhic // obf
     * @param string $v_eocms // obf
     * @param string $v_moktm // obf
     * @return bool // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_auth_verify( // obf
        $v_fuhic, // obf
        $v_eocms, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_auth_verify($v_fuhic, $v_eocms, $v_moktm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box() // obf
     * @param string $v_eocms // obf
     * @param string $v_mdmlc // obf
     * @param string $v_uvrwu // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_box( // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box($v_eocms, $v_mdmlc, $v_uvrwu); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_keypair')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_keypair() // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_box_keypair() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_box_keypair(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_keypair_from_secretkey_and_publickey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_keypair_from_secretkey_and_publickey() // obf
     * @param string $v_apoue // obf
     * @param string $v_qookg // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_box_keypair_from_secretkey_and_publickey( // obf
        #[\SensitiveParameter] // obf
        $v_apoue, // obf
        $v_qookg // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_keypair_from_secretkey_and_publickey($v_apoue, $v_qookg); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_open')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_open() // obf
     * @param string $v_xnlnm // obf
     * @param string $v_mdmlc // obf
     * @param string $v_uvrwu // obf
     * @return string|bool // obf
     */ // obf
    function sodium_crypto_box_open( // obf
        $v_xnlnm, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_box_open($v_xnlnm, $v_mdmlc, $v_uvrwu); // obf
        } catch (Error $v_bdptq) { // obf
            return false; // obf
        } catch (Exception $v_bdptq) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_publickey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_publickey() // obf
     * @param string $v_uvrwu // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_box_publickey( // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_publickey($v_uvrwu); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_publickey_from_secretkey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_publickey_from_secretkey() // obf
     * @param string $v_apoue // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_box_publickey_from_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_apoue // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_publickey_from_secretkey($v_apoue); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_seal')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_seal() // obf
     * @param string $v_eocms // obf
     * @param string $v_qookg // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_box_seal( // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_qookg // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_seal($v_eocms, $v_qookg); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_seal_open')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_seal_open() // obf
     * @param string $v_eocms // obf
     * @param string $v_uvrwu // obf
     * @return string|bool // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_box_seal_open( // obf
        $v_eocms, // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_box_seal_open($v_eocms, $v_uvrwu); // obf
        } catch (SodiumException $v_bdptq) { // obf
            if ($v_bdptq->getMessage() === 'Argument 2 must be CRYPTO_BOX_KEYPAIRBYTES long.') { // obf
                throw $v_bdptq; // obf
            } // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_secretkey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_secretkey() // obf
     * @param string $v_uvrwu // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_box_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_secretkey($v_uvrwu); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_box_seed_keypair')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_seed_keypair() // obf
     * @param string $v_bnylm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_box_seed_keypair( // obf
        #[\SensitiveParameter] // obf
        $v_bnylm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_seed_keypair($v_bnylm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_generichash')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash() // obf
     * @param string $v_eocms // obf
     * @param string|null $v_moktm // obf
     * @param int $v_nwqmg // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_generichash( // obf
        $v_eocms, // obf
        #[\SensitiveParameter] // obf
        $v_moktm = null, // obf
        $v_nwqmg = 32 // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_generichash($v_eocms, $v_moktm, $v_nwqmg); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_generichash_final')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash_final() // obf
     * @param string|null $v_paoeo // obf
     * @param int $v_bbsvv // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_generichash_final(&$v_paoeo, $v_bbsvv = 32) // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_generichash_final($v_paoeo, $v_bbsvv); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_generichash_init')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash_init() // obf
     * @param string|null $v_moktm // obf
     * @param int $v_nwqmg // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_generichash_init( // obf
        #[\SensitiveParameter] // obf
        $v_moktm = null, // obf
        $v_nwqmg = 32 // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_generichash_init($v_moktm, $v_nwqmg); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_generichash_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_generichash_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_generichash_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_generichash_update')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash_update() // obf
     * @param string|null $v_paoeo // obf
     * @param string $v_eocms // obf
     * @return void // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_generichash_update( // obf
        #[\SensitiveParameter] // obf
        &$v_paoeo, // obf
        $v_eocms = '' // obf
    ) { // obf
        ParagonIE_Sodium_Compat::crypto_generichash_update($v_paoeo, $v_eocms); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kdf_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_kdf_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_kdf_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_kdf_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kdf_derive_from_key')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_kdf_derive_from_key() // obf
     * @param int $v_dkhuj // obf
     * @param int $v_yvidk // obf
     * @param string $v_yjxxd // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_kdf_derive_from_key( // obf
        $v_dkhuj, // obf
        $v_yvidk, // obf
        $v_yjxxd, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_kdf_derive_from_key( // obf
            $v_dkhuj, // obf
            $v_yvidk, // obf
            $v_yjxxd, // obf
            $v_moktm // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kx')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_kx() // obf
     * @param string $v_wdapn // obf
     * @param string $v_akcsl // obf
     * @param string $v_biqxd // obf
     * @param string $v_vbood // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_kx( // obf
        #[\SensitiveParameter] // obf
        $v_wdapn, // obf
        $v_akcsl, // obf
        $v_biqxd, // obf
        $v_vbood // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_kx( // obf
            $v_wdapn, // obf
            $v_akcsl, // obf
            $v_biqxd, // obf
            $v_vbood // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kx_seed_keypair')) { // obf
    /** // obf
     * @param string $v_bnylm // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_kx_seed_keypair( // obf
        #[\SensitiveParameter] // obf
        $v_bnylm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_kx_seed_keypair($v_bnylm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kx_keypair')) { // obf
    /** // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_kx_keypair() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_kx_keypair(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kx_client_session_keys')) { // obf
    /** // obf
     * @param string $v_ycmig // obf
     * @param string $v_nlujr // obf
     * @return array{0: string, 1: string} // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_kx_client_session_keys( // obf
        #[\SensitiveParameter] // obf
        $v_ycmig, // obf
        $v_nlujr // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_kx_client_session_keys($v_ycmig, $v_nlujr); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kx_server_session_keys')) { // obf
    /** // obf
     * @param string $v_btfzm // obf
     * @param string $v_ldpyp // obf
     * @return array{0: string, 1: string} // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_kx_server_session_keys( // obf
        #[\SensitiveParameter] // obf
        $v_btfzm, // obf
        $v_ldpyp // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_kx_server_session_keys($v_btfzm, $v_ldpyp); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kx_secretkey')) { // obf
    /** // obf
     * @param string $v_uvrwu // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_kx_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_kx_secretkey($v_uvrwu); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_kx_publickey')) { // obf
    /** // obf
     * @param string $v_uvrwu // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_kx_publickey( // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_kx_publickey($v_uvrwu); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_pwhash')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash() // obf
     * @param int $v_nwqmg // obf
     * @param string $v_joqib // obf
     * @param string $v_rzeib // obf
     * @param int $v_bvdgs // obf
     * @param int $v_kxzop // obf
     * @param int|null $v_sburx // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_pwhash( // obf
        $v_nwqmg, // obf
        #[\SensitiveParameter] // obf
        $v_joqib, // obf
        $v_rzeib, // obf
        $v_bvdgs, // obf
        $v_kxzop, // obf
        $v_sburx = null // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash($v_nwqmg, $v_joqib, $v_rzeib, $v_bvdgs, $v_kxzop, $v_sburx); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_pwhash_str')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_str() // obf
     * @param string $v_joqib // obf
     * @param int $v_bvdgs // obf
     * @param int $v_kxzop // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_pwhash_str( // obf
        #[\SensitiveParameter] // obf
        $v_joqib, // obf
        $v_bvdgs, // obf
        $v_kxzop // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_str($v_joqib, $v_bvdgs, $v_kxzop); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_pwhash_str_needs_rehash')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_str_needs_rehash() // obf
     * @param string $v_xfcad // obf
     * @param int $v_bvdgs // obf
     * @param int $v_kxzop // obf
     * @return bool // obf
     * // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_pwhash_str_needs_rehash( // obf
        #[\SensitiveParameter] // obf
        $v_xfcad, // obf
        $v_bvdgs, // obf
        $v_kxzop // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_str_needs_rehash($v_xfcad, $v_bvdgs, $v_kxzop); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_pwhash_str_verify')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_str_verify() // obf
     * @param string $v_joqib // obf
     * @param string $v_xfcad // obf
     * @return bool // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_pwhash_str_verify( // obf
        #[\SensitiveParameter] // obf
        $v_joqib, // obf
        #[\SensitiveParameter] // obf
        $v_xfcad // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_str_verify($v_joqib, $v_xfcad); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_pwhash_scryptsalsa208sha256')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256() // obf
     * @param int $v_nwqmg // obf
     * @param string $v_joqib // obf
     * @param string $v_rzeib // obf
     * @param int $v_bvdgs // obf
     * @param int $v_kxzop // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_pwhash_scryptsalsa208sha256( // obf
        $v_nwqmg, // obf
        #[\SensitiveParameter] // obf
        $v_joqib, // obf
        $v_rzeib, // obf
        $v_bvdgs, // obf
        $v_kxzop // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256( // obf
            $v_nwqmg, // obf
            $v_joqib, // obf
            $v_rzeib, // obf
            $v_bvdgs, // obf
            $v_kxzop // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_pwhash_scryptsalsa208sha256_str')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str() // obf
     * @param string $v_joqib // obf
     * @param int $v_bvdgs // obf
     * @param int $v_kxzop // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_pwhash_scryptsalsa208sha256_str( // obf
        #[\SensitiveParameter] // obf
        $v_joqib, // obf
        $v_bvdgs, // obf
        $v_kxzop // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str($v_joqib, $v_bvdgs, $v_kxzop); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_pwhash_scryptsalsa208sha256_str_verify')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str_verify() // obf
     * @param string $v_joqib // obf
     * @param string $v_xfcad // obf
     * @return bool // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_pwhash_scryptsalsa208sha256_str_verify( // obf
        #[\SensitiveParameter] // obf
        $v_joqib, // obf
        #[\SensitiveParameter] // obf
        $v_xfcad // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str_verify($v_joqib, $v_xfcad); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_scalarmult')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_scalarmult() // obf
     * @param string $v_ycjdk // obf
     * @param string $v_mbjjz // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_scalarmult( // obf
        #[\SensitiveParameter] // obf
        $v_ycjdk, // obf
        $v_mbjjz // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_scalarmult($v_ycjdk, $v_mbjjz); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_scalarmult_base')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_scalarmult_base() // obf
     * @param string $v_ycjdk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_scalarmult_base( // obf
        #[\SensitiveParameter] // obf
        $v_ycjdk // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_scalarmult_base($v_ycjdk); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretbox')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_secretbox() // obf
     * @param string $v_eocms // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_secretbox( // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_secretbox($v_eocms, $v_mdmlc, $v_moktm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretbox_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_secretbox_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_secretbox_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_secretbox_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretbox_open')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_secretbox_open() // obf
     * @param string $v_xnlnm // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string|bool // obf
     */ // obf
    function sodium_crypto_secretbox_open( // obf
        $v_xnlnm, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_secretbox_open($v_xnlnm, $v_mdmlc, $v_moktm); // obf
        } catch (Error $v_bdptq) { // obf
            return false; // obf
        } catch (Exception $v_bdptq) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretstream_xchacha20poly1305_init_push')) { // obf
    /** // obf
     * @param string $v_moktm // obf
     * @return array<int, string> // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_secretstream_xchacha20poly1305_init_push( // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_secretstream_xchacha20poly1305_init_push($v_moktm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretstream_xchacha20poly1305_push')) { // obf
    /** // obf
     * @param string $v_paoeo // obf
     * @param string $v_eocms // obf
     * @param string $v_stbhd // obf
     * @param int $v_wivtr // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_secretstream_xchacha20poly1305_push( // obf
        #[\SensitiveParameter] // obf
        &$v_paoeo, // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_stbhd = '', // obf
        $v_wivtr = 0 // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_secretstream_xchacha20poly1305_push( // obf
            $v_paoeo, // obf
            $v_eocms, // obf
            $v_stbhd, // obf
            $v_wivtr // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretstream_xchacha20poly1305_init_pull')) { // obf
    /** // obf
     * @param string $v_dpudu // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_secretstream_xchacha20poly1305_init_pull( // obf
        $v_dpudu, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_secretstream_xchacha20poly1305_init_pull($v_dpudu, $v_moktm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretstream_xchacha20poly1305_pull')) { // obf
    /** // obf
     * @param string $v_paoeo // obf
     * @param string $v_xnlnm // obf
     * @param string $v_stbhd // obf
     * @return bool|array{0: string, 1: int} // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_secretstream_xchacha20poly1305_pull( // obf
        #[\SensitiveParameter] // obf
        &$v_paoeo, // obf
        $v_xnlnm, // obf
        $v_stbhd = '' // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_secretstream_xchacha20poly1305_pull( // obf
            $v_paoeo, // obf
            $v_xnlnm, // obf
            $v_stbhd // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretstream_xchacha20poly1305_rekey')) { // obf
    /** // obf
     * @param string $v_paoeo // obf
     * @return void // obf
     * @throws SodiumException // obf
     */ // obf
    function sodium_crypto_secretstream_xchacha20poly1305_rekey( // obf
        #[\SensitiveParameter] // obf
        &$v_paoeo // obf
    ) { // obf
        ParagonIE_Sodium_Compat::crypto_secretstream_xchacha20poly1305_rekey($v_paoeo); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_secretstream_xchacha20poly1305_keygen')) { // obf
    /** // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_secretstream_xchacha20poly1305_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_secretstream_xchacha20poly1305_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_shorthash')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_shorthash() // obf
     * @param string $v_eocms // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_shorthash( // obf
        $v_eocms, // obf
        #[\SensitiveParameter] // obf
        $v_moktm = '' // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_shorthash($v_eocms, $v_moktm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_shorthash_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_shorthash_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_shorthash_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_shorthash_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign() // obf
     * @param string $v_eocms // obf
     * @param string $v_apoue // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign( // obf
        $v_eocms, // obf
        #[\SensitiveParameter] // obf
        $v_apoue // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign($v_eocms, $v_apoue); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_detached')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_detached() // obf
     * @param string $v_eocms // obf
     * @param string $v_apoue // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_detached( // obf
        $v_eocms, // obf
        #[\SensitiveParameter] // obf
        $v_apoue // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_detached($v_eocms, $v_apoue); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_keypair_from_secretkey_and_publickey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_keypair_from_secretkey_and_publickey() // obf
     * @param string $v_apoue // obf
     * @param string $v_qookg // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_keypair_from_secretkey_and_publickey( // obf
        #[\SensitiveParameter] // obf
        $v_apoue, // obf
        $v_qookg // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_keypair_from_secretkey_and_publickey($v_apoue, $v_qookg); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_keypair')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_keypair() // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_keypair() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_keypair(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_open')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_open() // obf
     * @param string $v_fddom // obf
     * @param string $v_qookg // obf
     * @return string|bool // obf
     */ // obf
    function sodium_crypto_sign_open($v_fddom, $v_qookg) // obf
    { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_sign_open($v_fddom, $v_qookg); // obf
        } catch (Error $v_bdptq) { // obf
            return false; // obf
        } catch (Exception $v_bdptq) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_publickey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_publickey() // obf
     * @param string $v_uvrwu // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_publickey( // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_publickey($v_uvrwu); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_publickey_from_secretkey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_publickey_from_secretkey() // obf
     * @param string $v_apoue // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_publickey_from_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_apoue // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_publickey_from_secretkey($v_apoue); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_secretkey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_secretkey() // obf
     * @param string $v_uvrwu // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_uvrwu // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_secretkey($v_uvrwu); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_seed_keypair')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_seed_keypair() // obf
     * @param string $v_bnylm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_seed_keypair( // obf
        #[\SensitiveParameter] // obf
        $v_bnylm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_seed_keypair($v_bnylm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_verify_detached')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_verify_detached() // obf
     * @param string $v_rkxkx // obf
     * @param string $v_eocms // obf
     * @param string $v_qookg // obf
     * @return bool // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_verify_detached($v_rkxkx, $v_eocms, $v_qookg) // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_verify_detached($v_rkxkx, $v_eocms, $v_qookg); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_ed25519_pk_to_curve25519')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_ed25519_pk_to_curve25519() // obf
     * @param string $v_qookg // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_ed25519_pk_to_curve25519($v_qookg) // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_ed25519_pk_to_curve25519($v_qookg); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_sign_ed25519_sk_to_curve25519')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_ed25519_sk_to_curve25519() // obf
     * @param string $v_apoue // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_sign_ed25519_sk_to_curve25519( // obf
        #[\SensitiveParameter] // obf
        $v_apoue // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_ed25519_sk_to_curve25519($v_apoue); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_stream')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream() // obf
     * @param int $v_nwqmg // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_stream( // obf
        $v_nwqmg, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_stream($v_nwqmg, $v_mdmlc, $v_moktm); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_stream_keygen')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream_keygen() // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_crypto_stream_keygen() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_stream_keygen(); // obf
    } // obf
} // obf
if (!is_callable('sodium_crypto_stream_xor')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream_xor() // obf
     * @param string $v_eocms // obf
     * @param string $v_mdmlc // obf
     * @param string $v_moktm // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_crypto_stream_xor( // obf
        #[\SensitiveParameter] // obf
        $v_eocms, // obf
        $v_mdmlc, // obf
        #[\SensitiveParameter] // obf
        $v_moktm // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_stream_xor($v_eocms, $v_mdmlc, $v_moktm); // obf
    } // obf
} // obf
require_once dirname(__FILE__) . '/stream-xchacha20.php'; // obf
if (!is_callable('sodium_hex2bin')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::hex2bin() // obf
     * @param string $v_mdqux // obf
     * @param string $v_wvqip // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_hex2bin( // obf
        #[\SensitiveParameter] // obf
        $v_mdqux, // obf
        $v_wvqip = '' // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::hex2bin($v_mdqux, $v_wvqip); // obf
    } // obf
} // obf
if (!is_callable('sodium_increment')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::increment() // obf
     * @param string $v_mdqux // obf
     * @return void // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_increment( // obf
        #[\SensitiveParameter] // obf
        &$v_mdqux // obf
    ) { // obf
        ParagonIE_Sodium_Compat::increment($v_mdqux); // obf
    } // obf
} // obf
if (!is_callable('sodium_library_version_major')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::library_version_major() // obf
     * @return int // obf
     */ // obf
    function sodium_library_version_major() // obf
    { // obf
        return ParagonIE_Sodium_Compat::library_version_major(); // obf
    } // obf
} // obf
if (!is_callable('sodium_library_version_minor')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::library_version_minor() // obf
     * @return int // obf
     */ // obf
    function sodium_library_version_minor() // obf
    { // obf
        return ParagonIE_Sodium_Compat::library_version_minor(); // obf
    } // obf
} // obf
if (!is_callable('sodium_version_string')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::version_string() // obf
     * @return string // obf
     */ // obf
    function sodium_version_string() // obf
    { // obf
        return ParagonIE_Sodium_Compat::version_string(); // obf
    } // obf
} // obf
if (!is_callable('sodium_memcmp')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::memcmp() // obf
     * @param string $v_qfflj // obf
     * @param string $v_zuwvd // obf
     * @return int // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_memcmp( // obf
        #[\SensitiveParameter] // obf
        $v_qfflj, // obf
        #[\SensitiveParameter] // obf
        $v_zuwvd // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::memcmp($v_qfflj, $v_zuwvd); // obf
    } // obf
} // obf
if (!is_callable('sodium_memzero')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::memzero() // obf
     * @param string $v_mdqux // obf
     * @return void // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * // obf
     * @psalm-suppress ReferenceConstraintViolation // obf
     */ // obf
    function sodium_memzero( // obf
        #[\SensitiveParameter] // obf
        &$v_mdqux // obf
    ) { // obf
        ParagonIE_Sodium_Compat::memzero($v_mdqux); // obf
    } // obf
} // obf
if (!is_callable('sodium_pad')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::pad() // obf
     * @param string $v_rxnkm // obf
     * @param int $v_bjhmf // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_pad( // obf
        #[\SensitiveParameter] // obf
        $v_rxnkm, // obf
        $v_bjhmf // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::pad($v_rxnkm, $v_bjhmf, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_unpad')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::pad() // obf
     * @param string $v_zyvdh // obf
     * @param int $v_bjhmf // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    function sodium_unpad( // obf
        #[\SensitiveParameter] // obf
        $v_zyvdh, // obf
        $v_bjhmf // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::unpad($v_zyvdh, $v_bjhmf, true); // obf
    } // obf
} // obf
if (!is_callable('sodium_randombytes_buf')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::randombytes_buf() // obf
     * @param int $v_howjr // obf
     * @return string // obf
     * @throws Exception // obf
     */ // obf
    function sodium_randombytes_buf($v_howjr) // obf
    { // obf
        return ParagonIE_Sodium_Compat::randombytes_buf($v_howjr); // obf
    } // obf
} // obf

if (!is_callable('sodium_randombytes_uniform')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::randombytes_uniform() // obf
     * @param int $v_olmuw // obf
     * @return int // obf
     * @throws Exception // obf
     */ // obf
    function sodium_randombytes_uniform($v_olmuw) // obf
    { // obf
        return ParagonIE_Sodium_Compat::randombytes_uniform($v_olmuw); // obf
    } // obf
} // obf

if (!is_callable('sodium_randombytes_random16')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::randombytes_random16() // obf
     * @return int // obf
     * @throws Exception // obf
     */ // obf
    function sodium_randombytes_random16() // obf
    { // obf
        return ParagonIE_Sodium_Compat::randombytes_random16(); // obf
    } // obf
} // obf