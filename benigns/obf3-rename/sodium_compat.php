

<?php // obf
namespace Sodium; // obf

require_once dirname(dirname(__FILE__)) . '/autoload.php'; // obf

use ParagonIE_Sodium_Compat; // obf

/** // obf
 * This file will monkey patch the pure-PHP implementation in place of the // obf
 * PECL functions, but only if they do not already exist. // obf
 * // obf
 * Thus, the functions just proxy to the appropriate ParagonIE_Sodium_Compat // obf
 * method. // obf
 */ // obf
if (!is_callable('\\Sodium\\bin2hex')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::bin2hex() // obf
     * @param string $v_nqlpi // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function bin2hex( // obf
        #[\SensitiveParameter] // obf
        $v_nqlpi // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::bin2hex($v_nqlpi); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\compare')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::compare() // obf
     * @param string $v_zqsgx // obf
     * @param string $v_ltece // obf
     * @return int // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function compare( // obf
        #[\SensitiveParameter] // obf
        $v_zqsgx, // obf
        #[\SensitiveParameter] // obf
        $v_ltece // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::compare($v_zqsgx, $v_ltece); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_aead_aes256gcm_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_decrypt() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hsdfc // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string|bool // obf
     */ // obf
    function crypto_aead_aes256gcm_decrypt( // obf
        $v_ifscz, // obf
        $v_hsdfc, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_decrypt($v_ifscz, $v_hsdfc, $v_hrwvf, $v_aiswx); // obf
        } catch (\TypeError $v_gaued) { // obf
            return false; // obf
        } catch (\SodiumException $v_gaued) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_aead_aes256gcm_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_encrypt() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hsdfc // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_aead_aes256gcm_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_ifscz, // obf
        $v_hsdfc, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_encrypt($v_ifscz, $v_hsdfc, $v_hrwvf, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_aead_aes256gcm_is_available')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_is_available() // obf
     * @return bool // obf
     */ // obf
    function crypto_aead_aes256gcm_is_available() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_aes256gcm_is_available(); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_aead_chacha20poly1305_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_decrypt() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hsdfc // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string|bool // obf
     */ // obf
    function crypto_aead_chacha20poly1305_decrypt( // obf
        $v_ifscz, // obf
        $v_hsdfc, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_decrypt($v_ifscz, $v_hsdfc, $v_hrwvf, $v_aiswx); // obf
        } catch (\TypeError $v_gaued) { // obf
            return false; // obf
        } catch (\SodiumException $v_gaued) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_aead_chacha20poly1305_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_encrypt() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hsdfc // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_aead_chacha20poly1305_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_ifscz, // obf
        $v_hsdfc, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_encrypt($v_ifscz, $v_hsdfc, $v_hrwvf, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_aead_chacha20poly1305_ietf_decrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_decrypt() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hsdfc // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string|bool // obf
     */ // obf
    function crypto_aead_chacha20poly1305_ietf_decrypt( // obf
        $v_ifscz, // obf
        $v_hsdfc, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_decrypt($v_ifscz, $v_hsdfc, $v_hrwvf, $v_aiswx); // obf
        } catch (\TypeError $v_gaued) { // obf
            return false; // obf
        } catch (\SodiumException $v_gaued) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_aead_chacha20poly1305_ietf_encrypt')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_encrypt() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hsdfc // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_aead_chacha20poly1305_ietf_encrypt( // obf
        #[\SensitiveParameter] // obf
        $v_ifscz, // obf
        $v_hsdfc, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_aead_chacha20poly1305_ietf_encrypt($v_ifscz, $v_hsdfc, $v_hrwvf, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_auth')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_auth() // obf
     * @param string $v_ifscz // obf
     * @param string $v_aiswx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_auth( // obf
        $v_ifscz, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_auth($v_ifscz, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_auth_verify')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_auth_verify() // obf
     * @param string $v_oirbv // obf
     * @param string $v_ifscz // obf
     * @param string $v_aiswx // obf
     * @return bool // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_auth_verify( // obf
        $v_oirbv, // obf
        $v_ifscz, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_auth_verify($v_oirbv, $v_ifscz, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hrwvf // obf
     * @param string $v_lizmj // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_box( // obf
        #[\SensitiveParameter] // obf
        $v_ifscz, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_lizmj // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box($v_ifscz, $v_hrwvf, $v_lizmj); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box_keypair')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_keypair() // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_box_keypair() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_box_keypair(); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box_keypair_from_secretkey_and_publickey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_keypair_from_secretkey_and_publickey() // obf
     * @param string $v_dajbe // obf
     * @param string $v_wtscf // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_box_keypair_from_secretkey_and_publickey( // obf
        #[\SensitiveParameter] // obf
        $v_dajbe, // obf
        $v_wtscf // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_keypair_from_secretkey_and_publickey($v_dajbe, $v_wtscf); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box_open')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_open() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hrwvf // obf
     * @param string $v_lizmj // obf
     * @return string|bool // obf
     */ // obf
    function crypto_box_open( // obf
        #[\SensitiveParameter] // obf
        $v_ifscz, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_lizmj // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_box_open($v_ifscz, $v_hrwvf, $v_lizmj); // obf
        } catch (\TypeError $v_gaued) { // obf
            return false; // obf
        } catch (\SodiumException $v_gaued) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box_publickey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_publickey() // obf
     * @param string $v_weasy // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_box_publickey( // obf
        #[\SensitiveParameter] // obf
        $v_weasy // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_publickey($v_weasy); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box_publickey_from_secretkey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_publickey_from_secretkey() // obf
     * @param string $v_dajbe // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_box_publickey_from_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_dajbe // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_publickey_from_secretkey($v_dajbe); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box_seal')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_seal_open() // obf
     * @param string $v_ifscz // obf
     * @param string $v_rqpyh // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_box_seal( // obf
        #[\SensitiveParameter] // obf
        $v_ifscz, // obf
        $v_rqpyh // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_seal($v_ifscz, $v_rqpyh); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box_seal_open')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_seal_open() // obf
     * @param string $v_ifscz // obf
     * @param string $v_lizmj // obf
     * @return string|bool // obf
     */ // obf
    function crypto_box_seal_open( // obf
        $v_ifscz, // obf
        #[\SensitiveParameter] // obf
        $v_lizmj // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_box_seal_open($v_ifscz, $v_lizmj); // obf
        } catch (\TypeError $v_gaued) { // obf
            return false; // obf
        } catch (\SodiumException $v_gaued) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_box_secretkey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_box_secretkey() // obf
     * @param string $v_weasy // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_box_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_weasy // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_box_secretkey($v_weasy); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_generichash')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash() // obf
     * @param string $v_ifscz // obf
     * @param string|null $v_aiswx // obf
     * @param int $v_jwzcx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_generichash( // obf
        $v_ifscz, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx = null, // obf
        $v_jwzcx = 32 // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_generichash($v_ifscz, $v_aiswx, $v_jwzcx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_generichash_final')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash_final() // obf
     * @param string|null $v_zsnci // obf
     * @param int $v_tcqug // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_generichash_final( // obf
        #[\SensitiveParameter] // obf
        &$v_zsnci, // obf
        $v_tcqug = 32 // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_generichash_final($v_zsnci, $v_tcqug); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_generichash_init')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash_init() // obf
     * @param string|null $v_aiswx // obf
     * @param int $v_jwzcx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_generichash_init( // obf
        #[\SensitiveParameter] // obf
        $v_aiswx = null, // obf
        $v_jwzcx = 32 // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_generichash_init($v_aiswx, $v_jwzcx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_generichash_update')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_generichash_update() // obf
     * @param string|null $v_zsnci // obf
     * @param string $v_ifscz // obf
     * @return void // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_generichash_update( // obf
        #[\SensitiveParameter] // obf
        &$v_zsnci, // obf
        $v_ifscz = '' // obf
    ) { // obf
        ParagonIE_Sodium_Compat::crypto_generichash_update($v_zsnci, $v_ifscz); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_kx')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_kx() // obf
     * @param string $v_wwqjb // obf
     * @param string $v_smwun // obf
     * @param string $v_crhyy // obf
     * @param string $v_jitfn // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_kx( // obf
        #[\SensitiveParameter] // obf
        $v_wwqjb, // obf
        $v_smwun, // obf
        $v_crhyy, // obf
        $v_jitfn // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_kx( // obf
            $v_wwqjb, // obf
            $v_smwun, // obf
            $v_crhyy, // obf
            $v_jitfn, // obf
            true // obf
        ); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_pwhash')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash() // obf
     * @param int $v_dvzib // obf
     * @param string $v_vplbk // obf
     * @param string $v_qcxec // obf
     * @param int $v_nzgng // obf
     * @param int $v_fqjdk // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_pwhash( // obf
        $v_dvzib, // obf
        #[\SensitiveParameter] // obf
        $v_vplbk, // obf
        $v_qcxec, // obf
        $v_nzgng, // obf
        $v_fqjdk // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash($v_dvzib, $v_vplbk, $v_qcxec, $v_nzgng, $v_fqjdk); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_pwhash_str')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_str() // obf
     * @param string $v_vplbk // obf
     * @param int $v_nzgng // obf
     * @param int $v_fqjdk // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_pwhash_str( // obf
        #[\SensitiveParameter] // obf
        $v_vplbk, // obf
        $v_nzgng, // obf
        $v_fqjdk // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_str($v_vplbk, $v_nzgng, $v_fqjdk); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_pwhash_str_verify')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_str_verify() // obf
     * @param string $v_vplbk // obf
     * @param string $v_vhhvc // obf
     * @return bool // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_pwhash_str_verify( // obf
        #[\SensitiveParameter] // obf
        $v_vplbk, // obf
        #[\SensitiveParameter] // obf
        $v_vhhvc // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_str_verify($v_vplbk, $v_vhhvc); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_pwhash_scryptsalsa208sha256')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256() // obf
     * @param int $v_dvzib // obf
     * @param string $v_vplbk // obf
     * @param string $v_qcxec // obf
     * @param int $v_nzgng // obf
     * @param int $v_fqjdk // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_pwhash_scryptsalsa208sha256( // obf
        $v_dvzib, // obf
        #[\SensitiveParameter] // obf
        $v_vplbk, // obf
        #[\SensitiveParameter] // obf
        $v_qcxec, // obf
        $v_nzgng, // obf
        $v_fqjdk // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256($v_dvzib, $v_vplbk, $v_qcxec, $v_nzgng, $v_fqjdk); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_pwhash_scryptsalsa208sha256_str')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str() // obf
     * @param string $v_vplbk // obf
     * @param int $v_nzgng // obf
     * @param int $v_fqjdk // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_pwhash_scryptsalsa208sha256_str( // obf
        #[\SensitiveParameter] // obf
        $v_vplbk, // obf
        $v_nzgng, // obf
        $v_fqjdk // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str($v_vplbk, $v_nzgng, $v_fqjdk); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_pwhash_scryptsalsa208sha256_str_verify')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str_verify() // obf
     * @param string $v_vplbk // obf
     * @param string $v_vhhvc // obf
     * @return bool // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_pwhash_scryptsalsa208sha256_str_verify( // obf
        #[\SensitiveParameter] // obf
        $v_vplbk, // obf
        #[\SensitiveParameter] // obf
        $v_vhhvc // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_pwhash_scryptsalsa208sha256_str_verify($v_vplbk, $v_vhhvc); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_scalarmult')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_scalarmult() // obf
     * @param string $v_hvdmz // obf
     * @param string $v_ibkhc // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_scalarmult( // obf
        #[\SensitiveParameter] // obf
        $v_hvdmz, // obf
        $v_ibkhc // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_scalarmult($v_hvdmz, $v_ibkhc); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_scalarmult_base')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_scalarmult_base() // obf
     * @param string $v_hvdmz // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_scalarmult_base( // obf
        #[\SensitiveParameter] // obf
        $v_hvdmz // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_scalarmult_base($v_hvdmz); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_secretbox')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_secretbox() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_secretbox( // obf
        #[\SensitiveParameter] // obf
        $v_ifscz, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_secretbox($v_ifscz, $v_hrwvf, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_secretbox_open')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_secretbox_open() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string|bool // obf
     */ // obf
    function crypto_secretbox_open( // obf
        $v_ifscz, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_secretbox_open($v_ifscz, $v_hrwvf, $v_aiswx); // obf
        } catch (\TypeError $v_gaued) { // obf
            return false; // obf
        } catch (\SodiumException $v_gaued) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_shorthash')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_shorthash() // obf
     * @param string $v_ifscz // obf
     * @param string $v_aiswx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_shorthash( // obf
        $v_ifscz, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx = '' // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_shorthash($v_ifscz, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign() // obf
     * @param string $v_ifscz // obf
     * @param string $v_dajbe // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign( // obf
        $v_ifscz, // obf
        #[\SensitiveParameter] // obf
        $v_dajbe // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign($v_ifscz, $v_dajbe); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_detached')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_detached() // obf
     * @param string $v_ifscz // obf
     * @param string $v_dajbe // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_detached( // obf
        $v_ifscz, // obf
        #[\SensitiveParameter] // obf
        $v_dajbe // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_detached($v_ifscz, $v_dajbe); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_keypair')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_keypair() // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_keypair() // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_keypair(); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_open')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_open() // obf
     * @param string $v_wypkv // obf
     * @param string $v_wtscf // obf
     * @return string|bool // obf
     */ // obf
    function crypto_sign_open($v_wypkv, $v_wtscf) // obf
    { // obf
        try { // obf
            return ParagonIE_Sodium_Compat::crypto_sign_open($v_wypkv, $v_wtscf); // obf
        } catch (\TypeError $v_gaued) { // obf
            return false; // obf
        } catch (\SodiumException $v_gaued) { // obf
            return false; // obf
        } // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_publickey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_publickey() // obf
     * @param string $v_weasy // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_publickey( // obf
        #[\SensitiveParameter] // obf
        $v_weasy // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_publickey($v_weasy); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_publickey_from_secretkey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_publickey_from_secretkey() // obf
     * @param string $v_dajbe // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_publickey_from_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_dajbe // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_publickey_from_secretkey($v_dajbe); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_secretkey')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_secretkey() // obf
     * @param string $v_weasy // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_secretkey( // obf
        #[\SensitiveParameter] // obf
        $v_weasy // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_secretkey($v_weasy); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_seed_keypair')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_seed_keypair() // obf
     * @param string $v_hzhff // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_seed_keypair( // obf
        #[\SensitiveParameter] // obf
        $v_hzhff // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_seed_keypair($v_hzhff); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_verify_detached')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_verify_detached() // obf
     * @param string $v_mjbua // obf
     * @param string $v_ifscz // obf
     * @param string $v_wtscf // obf
     * @return bool // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_verify_detached($v_mjbua, $v_ifscz, $v_wtscf) // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_verify_detached($v_mjbua, $v_ifscz, $v_wtscf); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_ed25519_pk_to_curve25519')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_ed25519_pk_to_curve25519() // obf
     * @param string $v_wtscf // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_ed25519_pk_to_curve25519($v_wtscf) // obf
    { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_ed25519_pk_to_curve25519($v_wtscf); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_sign_ed25519_sk_to_curve25519')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_sign_ed25519_sk_to_curve25519() // obf
     * @param string $v_dajbe // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_sign_ed25519_sk_to_curve25519( // obf
        #[\SensitiveParameter] // obf
        $v_dajbe // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_sign_ed25519_sk_to_curve25519($v_dajbe); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_stream')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream() // obf
     * @param int $v_fqzrr // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_stream( // obf
        $v_fqzrr, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_stream($v_fqzrr, $v_hrwvf, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\crypto_stream_xor')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::crypto_stream_xor() // obf
     * @param string $v_ifscz // obf
     * @param string $v_hrwvf // obf
     * @param string $v_aiswx // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function crypto_stream_xor( // obf
        #[\SensitiveParameter] // obf
        $v_ifscz, // obf
        $v_hrwvf, // obf
        #[\SensitiveParameter] // obf
        $v_aiswx // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::crypto_stream_xor($v_ifscz, $v_hrwvf, $v_aiswx); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\hex2bin')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::hex2bin() // obf
     * @param string $v_nqlpi // obf
     * @return string // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function hex2bin( // obf
        #[\SensitiveParameter] // obf
        $v_nqlpi // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::hex2bin($v_nqlpi); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\memcmp')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::memcmp() // obf
     * @param string $v_zqsgx // obf
     * @param string $v_ltece // obf
     * @return int // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     */ // obf
    function memcmp( // obf
        #[\SensitiveParameter] // obf
        $v_zqsgx, // obf
        #[\SensitiveParameter] // obf
        $v_ltece // obf
    ) { // obf
        return ParagonIE_Sodium_Compat::memcmp($v_zqsgx, $v_ltece); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\memzero')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::memzero() // obf
     * @param string $v_bkrdj // obf
     * @return void // obf
     * @throws \SodiumException // obf
     * @throws \TypeError // obf
     * // obf
     * @psalm-suppress MissingParamType // obf
     * @psalm-suppress MissingReturnType // obf
     * @psalm-suppress ReferenceConstraintViolation // obf
     */ // obf
    function memzero( // obf
        #[\SensitiveParameter] // obf
        &$v_bkrdj // obf
    ) { // obf
        ParagonIE_Sodium_Compat::memzero($v_bkrdj); // obf
    } // obf
} // obf
if (!is_callable('\\Sodium\\randombytes_buf')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::randombytes_buf() // obf
     * @param int $v_oautc // obf
     * @return string // obf
     * @throws \TypeError // obf
     */ // obf
    function randombytes_buf($v_oautc) // obf
    { // obf
        return ParagonIE_Sodium_Compat::randombytes_buf($v_oautc); // obf
    } // obf
} // obf

if (!is_callable('\\Sodium\\randombytes_uniform')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::randombytes_uniform() // obf
     * @param int $v_rxpdq // obf
     * @return int // obf
     * @throws \SodiumException // obf
     * @throws \Error // obf
     */ // obf
    function randombytes_uniform($v_rxpdq) // obf
    { // obf
        return ParagonIE_Sodium_Compat::randombytes_uniform($v_rxpdq); // obf
    } // obf
} // obf

if (!is_callable('\\Sodium\\randombytes_random16')) { // obf
    /** // obf
     * @see ParagonIE_Sodium_Compat::randombytes_random16() // obf
     * @return int // obf
     */ // obf
    function randombytes_random16() // obf
    { // obf
        return ParagonIE_Sodium_Compat::randombytes_random16(); // obf
    } // obf
} // obf

if (!defined('\\Sodium\\CRYPTO_AUTH_BYTES')) { // obf
    require_once dirname(__FILE__) . '/constants.php'; // obf
} // obf