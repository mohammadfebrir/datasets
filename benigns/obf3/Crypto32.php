

<?php // obf

if (class_exists('ParagonIE_Sodium_Crypto32', false)) { // obf
    return; // obf
} // obf

/** // obf
 * Class ParagonIE_Sodium_Crypto // obf
 * // obf
 * ATTENTION! // obf
 * // obf
 * If you are using this library, you should be using // obf
 * ParagonIE_Sodium_Compat in your code, not this class. // obf
 */ // obf
abstract class ParagonIE_Sodium_Crypto32 // obf
{ // obf
    const aead_chacha20poly1305_KEYBYTES = 32; // obf
    const aead_chacha20poly1305_NSECBYTES = 0; // obf
    const aead_chacha20poly1305_NPUBBYTES = 8; // obf
    const aead_chacha20poly1305_ABYTES = 16; // obf

    const aead_chacha20poly1305_IETF_KEYBYTES = 32; // obf
    const aead_chacha20poly1305_IETF_NSECBYTES = 0; // obf
    const aead_chacha20poly1305_IETF_NPUBBYTES = 12; // obf
    const aead_chacha20poly1305_IETF_ABYTES = 16; // obf

    const aead_xchacha20poly1305_IETF_KEYBYTES = 32; // obf
    const aead_xchacha20poly1305_IETF_NSECBYTES = 0; // obf
    const aead_xchacha20poly1305_IETF_NPUBBYTES = 24; // obf
    const aead_xchacha20poly1305_IETF_ABYTES = 16; // obf

    const box_curve25519xsalsa20poly1305_SEEDBYTES = 32; // obf
    const box_curve25519xsalsa20poly1305_PUBLICKEYBYTES = 32; // obf
    const box_curve25519xsalsa20poly1305_SECRETKEYBYTES = 32; // obf
    const box_curve25519xsalsa20poly1305_BEFORENMBYTES = 32; // obf
    const box_curve25519xsalsa20poly1305_NONCEBYTES = 24; // obf
    const box_curve25519xsalsa20poly1305_MACBYTES = 16; // obf
    const box_curve25519xsalsa20poly1305_BOXZEROBYTES = 16; // obf
    const box_curve25519xsalsa20poly1305_ZEROBYTES = 32; // obf

    const onetimeauth_poly1305_BYTES = 16; // obf
    const onetimeauth_poly1305_KEYBYTES = 32; // obf

    const secretbox_xsalsa20poly1305_KEYBYTES = 32; // obf
    const secretbox_xsalsa20poly1305_NONCEBYTES = 24; // obf
    const secretbox_xsalsa20poly1305_MACBYTES = 16; // obf
    const secretbox_xsalsa20poly1305_BOXZEROBYTES = 16; // obf
    const secretbox_xsalsa20poly1305_ZEROBYTES = 32; // obf

    const secretbox_xchacha20poly1305_KEYBYTES = 32; // obf
    const secretbox_xchacha20poly1305_NONCEBYTES = 24; // obf
    const secretbox_xchacha20poly1305_MACBYTES = 16; // obf
    const secretbox_xchacha20poly1305_BOXZEROBYTES = 16; // obf
    const secretbox_xchacha20poly1305_ZEROBYTES = 32; // obf

    const stream_salsa20_KEYBYTES = 32; // obf

    /** // obf
     * AEAD Decryption with ChaCha20-Poly1305 // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_xvawr // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function aead_chacha20poly1305_decrypt( // obf
        $v_kppxf = '', // obf
        $v_xvawr = '', // obf
        $v_emymn = '', // obf
        $v_elnvk = '' // obf
    ) { // obf
        /** @var int $v_humsm - Length of message (ciphertext + MAC) */ // obf
        $v_humsm = ParagonIE_Sodium_Core32_Util::strlen($v_kppxf); // obf

        /** @var int  $v_nbjiv - Length of ciphertext */ // obf
        $v_nbjiv = $v_humsm - self::aead_chacha20poly1305_ABYTES; // obf

        /** @var int $v_whdck - Length of associated data */ // obf
        $v_whdck = ParagonIE_Sodium_Core32_Util::strlen($v_xvawr); // obf

        /** @var string $v_jsjeu - Message authentication code */ // obf
        $v_jsjeu = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_kppxf, // obf
            $v_nbjiv, // obf
            self::aead_chacha20poly1305_ABYTES // obf
        ); // obf

        /** @var string $v_lbxdl - The encrypted message (sans MAC) */ // obf
        $v_lbxdl = ParagonIE_Sodium_Core32_Util::substr($v_kppxf, 0, $v_nbjiv); // obf

        /** @var string The first block of the chacha20 keystream, used as a poly1305 key */ // obf
        $v_jzmro = ParagonIE_Sodium_Core32_ChaCha20::stream( // obf
            32, // obf
            $v_emymn, // obf
            $v_elnvk // obf
        ); // obf

        /* Recalculate the Poly1305 authentication tag (MAC): */ // obf
        $v_mxxdu = new ParagonIE_Sodium_Core32_Poly1305_State($v_jzmro); // obf
        try { // obf
            ParagonIE_Sodium_Compat::memzero($v_jzmro); // obf
        } catch (SodiumException $v_jmhxy) { // obf
            $v_jzmro = null; // obf
        } // obf
        $v_mxxdu->update($v_xvawr); // obf
        $v_mxxdu->update(ParagonIE_Sodium_Core32_Util::store64_le($v_whdck)); // obf
        $v_mxxdu->update($v_lbxdl); // obf
        $v_mxxdu->update(ParagonIE_Sodium_Core32_Util::store64_le($v_nbjiv)); // obf
        $v_gzrla = $v_mxxdu->finish(); // obf

        /* Compare the given MAC with the recalculated MAC: */ // obf
        if (!ParagonIE_Sodium_Core32_Util::verify_16($v_gzrla, $v_jsjeu)) { // obf
            throw new SodiumException('Invalid MAC'); // obf
        } // obf

        // Here, we know that the MAC is valid, so we decrypt and return the plaintext // obf
        return ParagonIE_Sodium_Core32_ChaCha20::streamXorIc( // obf
            $v_lbxdl, // obf
            $v_emymn, // obf
            $v_elnvk, // obf
            ParagonIE_Sodium_Core32_Util::store64_le(1) // obf
        ); // obf
    } // obf

    /** // obf
     * AEAD Encryption with ChaCha20-Poly1305 // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_xvawr // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function aead_chacha20poly1305_encrypt( // obf
        $v_kppxf = '', // obf
        $v_xvawr = '', // obf
        $v_emymn = '', // obf
        $v_elnvk = '' // obf
    ) { // obf
        /** @var int $v_humsm - Length of the plaintext message */ // obf
        $v_humsm = ParagonIE_Sodium_Core32_Util::strlen($v_kppxf); // obf

        /** @var int $v_whdck - Length of the associated data */ // obf
        $v_whdck = ParagonIE_Sodium_Core32_Util::strlen($v_xvawr); // obf

        /** @var string The first block of the chacha20 keystream, used as a poly1305 key */ // obf
        $v_jzmro = ParagonIE_Sodium_Core32_ChaCha20::stream( // obf
            32, // obf
            $v_emymn, // obf
            $v_elnvk // obf
        ); // obf
        $v_mxxdu = new ParagonIE_Sodium_Core32_Poly1305_State($v_jzmro); // obf
        try { // obf
            ParagonIE_Sodium_Compat::memzero($v_jzmro); // obf
        } catch (SodiumException $v_jmhxy) { // obf
            $v_jzmro = null; // obf
        } // obf

        /** @var string $v_lbxdl - Raw encrypted data */ // obf
        $v_lbxdl = ParagonIE_Sodium_Core32_ChaCha20::streamXorIc( // obf
            $v_kppxf, // obf
            $v_emymn, // obf
            $v_elnvk, // obf
            ParagonIE_Sodium_Core32_Util::store64_le(1) // obf
        ); // obf

        $v_mxxdu->update($v_xvawr); // obf
        $v_mxxdu->update(ParagonIE_Sodium_Core32_Util::store64_le($v_whdck)); // obf
        $v_mxxdu->update($v_lbxdl); // obf
        $v_mxxdu->update(ParagonIE_Sodium_Core32_Util::store64_le($v_humsm)); // obf
        return $v_lbxdl . $v_mxxdu->finish(); // obf
    } // obf

    /** // obf
     * AEAD Decryption with ChaCha20-Poly1305, IETF mode (96-bit nonce) // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_xvawr // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function aead_chacha20poly1305_ietf_decrypt( // obf
        $v_kppxf = '', // obf
        $v_xvawr = '', // obf
        $v_emymn = '', // obf
        $v_elnvk = '' // obf
    ) { // obf
        /** @var int $v_whdck - Length of associated data */ // obf
        $v_whdck = ParagonIE_Sodium_Core32_Util::strlen($v_xvawr); // obf

        /** @var int $v_humsm - Length of message (ciphertext + MAC) */ // obf
        $v_humsm = ParagonIE_Sodium_Core32_Util::strlen($v_kppxf); // obf

        /** @var int  $v_nbjiv - Length of ciphertext */ // obf
        $v_nbjiv = $v_humsm - self::aead_chacha20poly1305_IETF_ABYTES; // obf

        /** @var string The first block of the chacha20 keystream, used as a poly1305 key */ // obf
        $v_jzmro = ParagonIE_Sodium_Core32_ChaCha20::ietfStream( // obf
            32, // obf
            $v_emymn, // obf
            $v_elnvk // obf
        ); // obf

        /** @var string $v_jsjeu - Message authentication code */ // obf
        $v_jsjeu = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_kppxf, // obf
            $v_humsm - self::aead_chacha20poly1305_IETF_ABYTES, // obf
            self::aead_chacha20poly1305_IETF_ABYTES // obf
        ); // obf

        /** @var string $v_lbxdl - The encrypted message (sans MAC) */ // obf
        $v_lbxdl = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_kppxf, // obf
            0, // obf
            $v_humsm - self::aead_chacha20poly1305_IETF_ABYTES // obf
        ); // obf

        /* Recalculate the Poly1305 authentication tag (MAC): */ // obf
        $v_mxxdu = new ParagonIE_Sodium_Core32_Poly1305_State($v_jzmro); // obf
        try { // obf
            ParagonIE_Sodium_Compat::memzero($v_jzmro); // obf
        } catch (SodiumException $v_jmhxy) { // obf
            $v_jzmro = null; // obf
        } // obf
        $v_mxxdu->update($v_xvawr); // obf
        $v_mxxdu->update(str_repeat("\x00", ((0x10 - $v_whdck) & 0xf))); // obf
        $v_mxxdu->update($v_lbxdl); // obf
        $v_mxxdu->update(str_repeat("\x00", (0x10 - $v_nbjiv) & 0xf)); // obf
        $v_mxxdu->update(ParagonIE_Sodium_Core32_Util::store64_le($v_whdck)); // obf
        $v_mxxdu->update(ParagonIE_Sodium_Core32_Util::store64_le($v_nbjiv)); // obf
        $v_gzrla = $v_mxxdu->finish(); // obf

        /* Compare the given MAC with the recalculated MAC: */ // obf
        if (!ParagonIE_Sodium_Core32_Util::verify_16($v_gzrla, $v_jsjeu)) { // obf
            throw new SodiumException('Invalid MAC'); // obf
        } // obf

        // Here, we know that the MAC is valid, so we decrypt and return the plaintext // obf
        return ParagonIE_Sodium_Core32_ChaCha20::ietfStreamXorIc( // obf
            $v_lbxdl, // obf
            $v_emymn, // obf
            $v_elnvk, // obf
            ParagonIE_Sodium_Core32_Util::store64_le(1) // obf
        ); // obf
    } // obf

    /** // obf
     * AEAD Encryption with ChaCha20-Poly1305, IETF mode (96-bit nonce) // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_xvawr // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function aead_chacha20poly1305_ietf_encrypt( // obf
        $v_kppxf = '', // obf
        $v_xvawr = '', // obf
        $v_emymn = '', // obf
        $v_elnvk = '' // obf
    ) { // obf
        /** @var int $v_humsm - Length of the plaintext message */ // obf
        $v_humsm = ParagonIE_Sodium_Core32_Util::strlen($v_kppxf); // obf

        /** @var int $v_whdck - Length of the associated data */ // obf
        $v_whdck = ParagonIE_Sodium_Core32_Util::strlen($v_xvawr); // obf

        /** @var string The first block of the chacha20 keystream, used as a poly1305 key */ // obf
        $v_jzmro = ParagonIE_Sodium_Core32_ChaCha20::ietfStream( // obf
            32, // obf
            $v_emymn, // obf
            $v_elnvk // obf
        ); // obf
        $v_mxxdu = new ParagonIE_Sodium_Core32_Poly1305_State($v_jzmro); // obf
        try { // obf
            ParagonIE_Sodium_Compat::memzero($v_jzmro); // obf
        } catch (SodiumException $v_jmhxy) { // obf
            $v_jzmro = null; // obf
        } // obf

        /** @var string $v_lbxdl - Raw encrypted data */ // obf
        $v_lbxdl = ParagonIE_Sodium_Core32_ChaCha20::ietfStreamXorIc( // obf
            $v_kppxf, // obf
            $v_emymn, // obf
            $v_elnvk, // obf
            ParagonIE_Sodium_Core32_Util::store64_le(1) // obf
        ); // obf

        $v_mxxdu->update($v_xvawr); // obf
        $v_mxxdu->update(str_repeat("\x00", ((0x10 - $v_whdck) & 0xf))); // obf
        $v_mxxdu->update($v_lbxdl); // obf
        $v_mxxdu->update(str_repeat("\x00", ((0x10 - $v_humsm) & 0xf))); // obf
        $v_mxxdu->update(ParagonIE_Sodium_Core32_Util::store64_le($v_whdck)); // obf
        $v_mxxdu->update(ParagonIE_Sodium_Core32_Util::store64_le($v_humsm)); // obf
        return $v_lbxdl . $v_mxxdu->finish(); // obf
    } // obf

    /** // obf
     * AEAD Decryption with ChaCha20-Poly1305, IETF mode (96-bit nonce) // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_xvawr // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function aead_xchacha20poly1305_ietf_decrypt( // obf
        $v_kppxf = '', // obf
        $v_xvawr = '', // obf
        $v_emymn = '', // obf
        $v_elnvk = '' // obf
    ) { // obf
        $v_erqlz = ParagonIE_Sodium_Core32_HChaCha20::hChaCha20( // obf
            ParagonIE_Sodium_Core32_Util::substr($v_emymn, 0, 16), // obf
            $v_elnvk // obf
        ); // obf
        $v_zkfjb = "\x00\x00\x00\x00" . // obf
            ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8); // obf

        return self::aead_chacha20poly1305_ietf_decrypt($v_kppxf, $v_xvawr, $v_zkfjb, $v_erqlz); // obf
    } // obf

    /** // obf
     * AEAD Encryption with ChaCha20-Poly1305, IETF mode (96-bit nonce) // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_xvawr // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function aead_xchacha20poly1305_ietf_encrypt( // obf
        $v_kppxf = '', // obf
        $v_xvawr = '', // obf
        $v_emymn = '', // obf
        $v_elnvk = '' // obf
    ) { // obf
        $v_erqlz = ParagonIE_Sodium_Core32_HChaCha20::hChaCha20( // obf
            ParagonIE_Sodium_Core32_Util::substr($v_emymn, 0, 16), // obf
            $v_elnvk // obf
        ); // obf
        $v_zkfjb = "\x00\x00\x00\x00" . // obf
            ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8); // obf

        return self::aead_chacha20poly1305_ietf_encrypt($v_kppxf, $v_xvawr, $v_zkfjb, $v_erqlz); // obf
    } // obf

    /** // obf
     * HMAC-SHA-512-256 (a.k.a. the leftmost 256 bits of HMAC-SHA-512) // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public static function auth($v_kppxf, $v_elnvk) // obf
    { // obf
        return ParagonIE_Sodium_Core32_Util::substr( // obf
            hash_hmac('sha512', $v_kppxf, $v_elnvk, true), // obf
            0, // obf
            32 // obf
        ); // obf
    } // obf

    /** // obf
     * HMAC-SHA-512-256 validation. Constant-time via hash_equals(). // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_jsjeu // obf
     * @param string $v_kppxf // obf
     * @param string $v_elnvk // obf
     * @return bool // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function auth_verify($v_jsjeu, $v_kppxf, $v_elnvk) // obf
    { // obf
        return ParagonIE_Sodium_Core32_Util::hashEquals( // obf
            $v_jsjeu, // obf
            self::auth($v_kppxf, $v_elnvk) // obf
        ); // obf
    } // obf

    /** // obf
     * X25519 key exchange followed by XSalsa20Poly1305 symmetric encryption // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_iifdp // obf
     * @param string $v_emymn // obf
     * @param string $v_zkgsv // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box($v_iifdp, $v_emymn, $v_zkgsv) // obf
    { // obf
        return self::secretbox( // obf
            $v_iifdp, // obf
            $v_emymn, // obf
            self::box_beforenm( // obf
                self::box_secretkey($v_zkgsv), // obf
                self::box_publickey($v_zkgsv) // obf
            ) // obf
        ); // obf
    } // obf

    /** // obf
     * X25519-XSalsa20-Poly1305 with one ephemeral X25519 keypair. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_tbrxx // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_seal($v_kppxf, $v_tbrxx) // obf
    { // obf
        /** @var string $v_ahkdx */ // obf
        $v_ahkdx = self::box_keypair(); // obf

        /** @var string $v_gfcaz */ // obf
        $v_gfcaz = self::box_secretkey($v_ahkdx); // obf

        /** @var string $v_ikdlv */ // obf
        $v_ikdlv = self::box_publickey($v_ahkdx); // obf

        /** @var string $v_emymn */ // obf
        $v_emymn = self::generichash( // obf
            $v_ikdlv . $v_tbrxx, // obf
            '', // obf
            24 // obf
        ); // obf

        /** @var string $v_zkgsv - The combined keypair used in crypto_box() */ // obf
        $v_zkgsv = self::box_keypair_from_secretkey_and_publickey($v_gfcaz, $v_tbrxx); // obf

        /** @var string $v_lbxdl Ciphertext + MAC from crypto_box */ // obf
        $v_lbxdl = self::box($v_kppxf, $v_emymn, $v_zkgsv); // obf
        try { // obf
            ParagonIE_Sodium_Compat::memzero($v_ahkdx); // obf
            ParagonIE_Sodium_Compat::memzero($v_gfcaz); // obf
            ParagonIE_Sodium_Compat::memzero($v_emymn); // obf
        } catch (SodiumException $v_jmhxy) { // obf
            $v_ahkdx = null; // obf
            $v_gfcaz = null; // obf
            $v_emymn = null; // obf
        } // obf
        return $v_ikdlv . $v_lbxdl; // obf
    } // obf

    /** // obf
     * Opens a message encrypted via box_seal(). // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_zkgsv // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_seal_open($v_kppxf, $v_zkgsv) // obf
    { // obf
        /** @var string $v_ikdlv */ // obf
        $v_ikdlv = ParagonIE_Sodium_Core32_Util::substr($v_kppxf, 0, 32); // obf

        /** @var string $v_lbxdl (ciphertext + MAC) */ // obf
        $v_lbxdl = ParagonIE_Sodium_Core32_Util::substr($v_kppxf, 32); // obf

        /** @var string $v_uryzu */ // obf
        $v_uryzu = self::box_secretkey($v_zkgsv); // obf

        /** @var string $v_tbrxx */ // obf
        $v_tbrxx = self::box_publickey($v_zkgsv); // obf

        /** @var string $v_emymn */ // obf
        $v_emymn = self::generichash( // obf
            $v_ikdlv . $v_tbrxx, // obf
            '', // obf
            24 // obf
        ); // obf

        /** @var string $v_zkgsv */ // obf
        $v_zkgsv = self::box_keypair_from_secretkey_and_publickey($v_uryzu, $v_ikdlv); // obf

        /** @var string $v_nesdk */ // obf
        $v_nesdk = self::box_open($v_lbxdl, $v_emymn, $v_zkgsv); // obf
        try { // obf
            ParagonIE_Sodium_Compat::memzero($v_uryzu); // obf
            ParagonIE_Sodium_Compat::memzero($v_ikdlv); // obf
            ParagonIE_Sodium_Compat::memzero($v_emymn); // obf
        } catch (SodiumException $v_jmhxy) { // obf
            $v_uryzu = null; // obf
            $v_ikdlv = null; // obf
            $v_emymn = null; // obf
        } // obf
        return $v_nesdk; // obf
    } // obf

    /** // obf
     * Used by crypto_box() to get the crypto_secretbox() key. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_oitzo // obf
     * @param string $v_pqzmd // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_beforenm($v_oitzo, $v_pqzmd) // obf
    { // obf
        return ParagonIE_Sodium_Core32_HSalsa20::hsalsa20( // obf
            str_repeat("\x00", 16), // obf
            self::scalarmult($v_oitzo, $v_pqzmd) // obf
        ); // obf
    } // obf

    /** // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @return string // obf
     * @throws Exception // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_keypair() // obf
    { // obf
        $v_lcwqh = random_bytes(32); // obf
        $v_hdqnm = self::scalarmult_base($v_lcwqh); // obf
        return $v_lcwqh . $v_hdqnm; // obf
    } // obf

    /** // obf
     * @param string $v_vguol // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_seed_keypair($v_vguol) // obf
    { // obf
        $v_lcwqh = ParagonIE_Sodium_Core32_Util::substr( // obf
            hash('sha512', $v_vguol, true), // obf
            0, // obf
            32 // obf
        ); // obf
        $v_hdqnm = self::scalarmult_base($v_lcwqh); // obf
        return $v_lcwqh . $v_hdqnm; // obf
    } // obf

    /** // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_lcwqh // obf
     * @param string $v_hdqnm // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_keypair_from_secretkey_and_publickey($v_lcwqh, $v_hdqnm) // obf
    { // obf
        return ParagonIE_Sodium_Core32_Util::substr($v_lcwqh, 0, 32) . // obf
            ParagonIE_Sodium_Core32_Util::substr($v_hdqnm, 0, 32); // obf
    } // obf

    /** // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_zkgsv // obf
     * @return string // obf
     * @throws RangeException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_secretkey($v_zkgsv) // obf
    { // obf
        if (ParagonIE_Sodium_Core32_Util::strlen($v_zkgsv) !== 64) { // obf
            throw new RangeException( // obf
                'Must be ParagonIE_Sodium_Compat::CRYPTO_BOX_KEYPAIRBYTES bytes long.' // obf
            ); // obf
        } // obf
        return ParagonIE_Sodium_Core32_Util::substr($v_zkgsv, 0, 32); // obf
    } // obf

    /** // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_zkgsv // obf
     * @return string // obf
     * @throws RangeException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_publickey($v_zkgsv) // obf
    { // obf
        if (ParagonIE_Sodium_Core32_Util::strlen($v_zkgsv) !== ParagonIE_Sodium_Compat::CRYPTO_BOX_KEYPAIRBYTES) { // obf
            throw new RangeException( // obf
                'Must be ParagonIE_Sodium_Compat::CRYPTO_BOX_KEYPAIRBYTES bytes long.' // obf
            ); // obf
        } // obf
        return ParagonIE_Sodium_Core32_Util::substr($v_zkgsv, 32, 32); // obf
    } // obf

    /** // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_lcwqh // obf
     * @return string // obf
     * @throws RangeException // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_publickey_from_secretkey($v_lcwqh) // obf
    { // obf
        if (ParagonIE_Sodium_Core32_Util::strlen($v_lcwqh) !== ParagonIE_Sodium_Compat::CRYPTO_BOX_SECRETKEYBYTES) { // obf
            throw new RangeException( // obf
                'Must be ParagonIE_Sodium_Compat::CRYPTO_BOX_SECRETKEYBYTES bytes long.' // obf
            ); // obf
        } // obf
        return self::scalarmult_base($v_lcwqh); // obf
    } // obf

    /** // obf
     * Decrypt a message encrypted with box(). // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_lbxdl // obf
     * @param string $v_emymn // obf
     * @param string $v_zkgsv // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function box_open($v_lbxdl, $v_emymn, $v_zkgsv) // obf
    { // obf
        return self::secretbox_open( // obf
            $v_lbxdl, // obf
            $v_emymn, // obf
            self::box_beforenm( // obf
                self::box_secretkey($v_zkgsv), // obf
                self::box_publickey($v_zkgsv) // obf
            ) // obf
        ); // obf
    } // obf

    /** // obf
     * Calculate a BLAKE2b hash. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string|null $v_elnvk // obf
     * @param int $v_qpmnp // obf
     * @return string // obf
     * @throws RangeException // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function generichash($v_kppxf, $v_elnvk = '', $v_qpmnp = 32) // obf
    { // obf
        // This ensures that ParagonIE_Sodium_Core32_BLAKE2b::$v_axmhw is initialized // obf
        ParagonIE_Sodium_Core32_BLAKE2b::pseudoConstructor(); // obf

        $v_yyacw = null; // obf
        if (!empty($v_elnvk)) { // obf
            /** @var SplFixedArray $v_yyacw */ // obf
            $v_yyacw = ParagonIE_Sodium_Core32_BLAKE2b::stringToSplFixedArray($v_elnvk); // obf
            if ($v_yyacw->count() > ParagonIE_Sodium_Core32_BLAKE2b::KEYBYTES) { // obf
                throw new RangeException('Invalid key size'); // obf
            } // obf
        } // obf

        /** @var SplFixedArray $v_yqjca */ // obf
        $v_yqjca = ParagonIE_Sodium_Core32_BLAKE2b::stringToSplFixedArray($v_kppxf); // obf

        /** @var SplFixedArray $v_skpod */ // obf
        $v_skpod = ParagonIE_Sodium_Core32_BLAKE2b::init($v_yyacw, $v_qpmnp); // obf
        ParagonIE_Sodium_Core32_BLAKE2b::update($v_skpod, $v_yqjca, $v_yqjca->count()); // obf

        /** @var SplFixedArray $v_fsyms */ // obf
        $v_fsyms = new SplFixedArray($v_qpmnp); // obf
        $v_fsyms = ParagonIE_Sodium_Core32_BLAKE2b::finish($v_skpod, $v_fsyms); // obf

        /** @var array<int, int> */ // obf
        $v_qarxo = $v_fsyms->toArray(); // obf
        return ParagonIE_Sodium_Core32_Util::intArrayToString($v_qarxo); // obf
    } // obf

    /** // obf
     * Finalize a BLAKE2b hashing context, returning the hash. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_skpod // obf
     * @param int $v_qpmnp // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function generichash_final($v_skpod, $v_qpmnp = 32) // obf
    { // obf
        if (!is_string($v_skpod)) { // obf
            throw new TypeError('Context must be a string'); // obf
        } // obf
        $v_fsyms = new SplFixedArray($v_qpmnp); // obf

        /** @var SplFixedArray $v_hddtn */ // obf
        $v_hddtn = ParagonIE_Sodium_Core32_BLAKE2b::stringToContext($v_skpod); // obf

        /** @var SplFixedArray $v_fsyms */ // obf
        $v_fsyms = ParagonIE_Sodium_Core32_BLAKE2b::finish($v_hddtn, $v_fsyms); // obf

        /** @var array<int, int> */ // obf
        $v_qarxo = $v_fsyms->toArray(); // obf
        return ParagonIE_Sodium_Core32_Util::intArrayToString($v_qarxo); // obf
    } // obf

    /** // obf
     * Initialize a hashing context for BLAKE2b. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_elnvk // obf
     * @param int $v_kvvrp // obf
     * @return string // obf
     * @throws RangeException // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function generichash_init($v_elnvk = '', $v_kvvrp = 32) // obf
    { // obf
        // This ensures that ParagonIE_Sodium_Core32_BLAKE2b::$v_axmhw is initialized // obf
        ParagonIE_Sodium_Core32_BLAKE2b::pseudoConstructor(); // obf

        $v_yyacw = null; // obf
        if (!empty($v_elnvk)) { // obf
            $v_yyacw = ParagonIE_Sodium_Core32_BLAKE2b::stringToSplFixedArray($v_elnvk); // obf
            if ($v_yyacw->count() > ParagonIE_Sodium_Core32_BLAKE2b::KEYBYTES) { // obf
                throw new RangeException('Invalid key size'); // obf
            } // obf
        } // obf

        /** @var SplFixedArray $v_skpod */ // obf
        $v_skpod = ParagonIE_Sodium_Core32_BLAKE2b::init($v_yyacw, $v_kvvrp); // obf

        return ParagonIE_Sodium_Core32_BLAKE2b::contextToString($v_skpod); // obf
    } // obf

    /** // obf
     * Initialize a hashing context for BLAKE2b. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_elnvk // obf
     * @param int $v_kvvrp // obf
     * @param string $v_scbgg // obf
     * @param string $v_gfrrm // obf
     * @return string // obf
     * @throws RangeException // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function generichash_init_salt_personal( // obf
        $v_elnvk = '', // obf
        $v_kvvrp = 32, // obf
        $v_scbgg = '', // obf
        $v_gfrrm = '' // obf
    ) { // obf
        // This ensures that ParagonIE_Sodium_Core32_BLAKE2b::$v_axmhw is initialized // obf
        ParagonIE_Sodium_Core32_BLAKE2b::pseudoConstructor(); // obf

        $v_yyacw = null; // obf
        if (!empty($v_elnvk)) { // obf
            $v_yyacw = ParagonIE_Sodium_Core32_BLAKE2b::stringToSplFixedArray($v_elnvk); // obf
            if ($v_yyacw->count() > ParagonIE_Sodium_Core32_BLAKE2b::KEYBYTES) { // obf
                throw new RangeException('Invalid key size'); // obf
            } // obf
        } // obf
        if (!empty($v_scbgg)) { // obf
            $v_xircu = ParagonIE_Sodium_Core32_BLAKE2b::stringToSplFixedArray($v_scbgg); // obf
        } else { // obf
            $v_xircu = null; // obf
        } // obf
        if (!empty($v_scbgg)) { // obf
            $v_goizh = ParagonIE_Sodium_Core32_BLAKE2b::stringToSplFixedArray($v_gfrrm); // obf
        } else { // obf
            $v_goizh = null; // obf
        } // obf

        /** @var SplFixedArray $v_skpod */ // obf
        $v_skpod = ParagonIE_Sodium_Core32_BLAKE2b::init($v_yyacw, $v_kvvrp, $v_xircu, $v_goizh); // obf

        return ParagonIE_Sodium_Core32_BLAKE2b::contextToString($v_skpod); // obf
    } // obf

    /** // obf
     * Update a hashing context for BLAKE2b with $v_kppxf // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_skpod // obf
     * @param string $v_kppxf // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function generichash_update($v_skpod, $v_kppxf) // obf
    { // obf
        // This ensures that ParagonIE_Sodium_Core32_BLAKE2b::$v_axmhw is initialized // obf
        ParagonIE_Sodium_Core32_BLAKE2b::pseudoConstructor(); // obf

        /** @var SplFixedArray $v_hddtn */ // obf
        $v_hddtn = ParagonIE_Sodium_Core32_BLAKE2b::stringToContext($v_skpod); // obf

        /** @var SplFixedArray $v_yqjca */ // obf
        $v_yqjca = ParagonIE_Sodium_Core32_BLAKE2b::stringToSplFixedArray($v_kppxf); // obf

        ParagonIE_Sodium_Core32_BLAKE2b::update($v_hddtn, $v_yqjca, $v_yqjca->count()); // obf

        return ParagonIE_Sodium_Core32_BLAKE2b::contextToString($v_hddtn); // obf
    } // obf

    /** // obf
     * Libsodium's crypto_kx(). // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_yhtji // obf
     * @param string $v_caeta // obf
     * @param string $v_bdxum // obf
     * @param string $v_mjsgx // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function keyExchange($v_yhtji, $v_caeta, $v_bdxum, $v_mjsgx) // obf
    { // obf
        return self::generichash( // obf
            self::scalarmult($v_yhtji, $v_caeta) . // obf
            $v_bdxum . // obf
            $v_mjsgx // obf
        ); // obf
    } // obf

    /** // obf
     * ECDH over Curve25519 // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_lcwqh // obf
     * @param string $v_hdqnm // obf
     * @return string // obf
     * // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function scalarmult($v_lcwqh, $v_hdqnm) // obf
    { // obf
        $v_jmksy = ParagonIE_Sodium_Core32_X25519::crypto_scalarmult_curve25519_ref10($v_lcwqh, $v_hdqnm); // obf
        self::scalarmult_throw_if_zero($v_jmksy); // obf
        return $v_jmksy; // obf
    } // obf

    /** // obf
     * ECDH over Curve25519, using the basepoint. // obf
     * Used to get a secret key from a public key. // obf
     * // obf
     * @param string $v_yvzjz // obf
     * @return string // obf
     * // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function scalarmult_base($v_yvzjz) // obf
    { // obf
        $v_jmksy = ParagonIE_Sodium_Core32_X25519::crypto_scalarmult_curve25519_ref10_base($v_yvzjz); // obf
        self::scalarmult_throw_if_zero($v_jmksy); // obf
        return $v_jmksy; // obf
    } // obf

    /** // obf
     * This throws an Error if a zero public key was passed to the function. // obf
     * // obf
     * @param string $v_jmksy // obf
     * @return void // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    protected static function scalarmult_throw_if_zero($v_jmksy) // obf
    { // obf
        $v_qjswf = 0; // obf
        for ($v_apivn = 0; $v_apivn < self::box_curve25519xsalsa20poly1305_SECRETKEYBYTES; ++$v_apivn) { // obf
            $v_qjswf |= ParagonIE_Sodium_Core32_Util::chrToInt($v_jmksy[$v_apivn]); // obf
        } // obf

        /* branch-free variant of === 0 */ // obf
        if (-(1 & (($v_qjswf - 1) >> 8))) { // obf
            throw new SodiumException('Zero public key is not allowed'); // obf
        } // obf
    } // obf

    /** // obf
     * XSalsa20-Poly1305 authenticated symmetric-key encryption. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_iifdp // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function secretbox($v_iifdp, $v_emymn, $v_elnvk) // obf
    { // obf
        /** @var string $v_erqlz */ // obf
        $v_erqlz = ParagonIE_Sodium_Core32_HSalsa20::hsalsa20($v_emymn, $v_elnvk); // obf

        /** @var string $v_jzmro */ // obf
        $v_jzmro = str_repeat("\x00", 32); // obf

        /** @var int $v_flwul - Length of the plaintext message */ // obf
        $v_flwul = ParagonIE_Sodium_Core32_Util::strlen($v_iifdp); // obf
        $v_xgtcz = $v_flwul; // obf
        if ($v_xgtcz > 64 - self::secretbox_xsalsa20poly1305_ZEROBYTES) { // obf
            $v_xgtcz = 64 - self::secretbox_xsalsa20poly1305_ZEROBYTES; // obf
        } // obf
        $v_jzmro .= ParagonIE_Sodium_Core32_Util::substr($v_iifdp, 0, $v_xgtcz); // obf

        /** @var string $v_jzmro */ // obf
        $v_jzmro = ParagonIE_Sodium_Core32_Salsa20::salsa20_xor( // obf
            $v_jzmro, // obf
            ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8), // obf
            $v_erqlz // obf
        ); // obf

        /** @var string $v_jskbu */ // obf
        $v_jskbu = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_jzmro, // obf
            self::secretbox_xsalsa20poly1305_ZEROBYTES // obf
        ); // obf
        if ($v_flwul > $v_xgtcz) { // obf
            $v_jskbu .= ParagonIE_Sodium_Core32_Salsa20::salsa20_xor_ic( // obf
                ParagonIE_Sodium_Core32_Util::substr( // obf
                    $v_iifdp, // obf
                    self::secretbox_xsalsa20poly1305_ZEROBYTES // obf
                ), // obf
                ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8), // obf
                1, // obf
                $v_erqlz // obf
            ); // obf
        } // obf
        $v_mxxdu = new ParagonIE_Sodium_Core32_Poly1305_State( // obf
            ParagonIE_Sodium_Core32_Util::substr( // obf
                $v_jzmro, // obf
                0, // obf
                self::onetimeauth_poly1305_KEYBYTES // obf
            ) // obf
        ); // obf
        try { // obf
            ParagonIE_Sodium_Compat::memzero($v_jzmro); // obf
            ParagonIE_Sodium_Compat::memzero($v_erqlz); // obf
        } catch (SodiumException $v_jmhxy) { // obf
            $v_jzmro = null; // obf
            $v_erqlz = null; // obf
        } // obf

        $v_mxxdu->update($v_jskbu); // obf

        /** @var string $v_jskbu - MAC || ciphertext */ // obf
        $v_jskbu = $v_mxxdu->finish() . $v_jskbu; // obf
        unset($v_mxxdu); // obf

        return $v_jskbu; // obf
    } // obf

    /** // obf
     * Decrypt a ciphertext generated via secretbox(). // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_lbxdl // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function secretbox_open($v_lbxdl, $v_emymn, $v_elnvk) // obf
    { // obf
        /** @var string $v_jsjeu */ // obf
        $v_jsjeu = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_lbxdl, // obf
            0, // obf
            self::secretbox_xsalsa20poly1305_MACBYTES // obf
        ); // obf

        /** @var string $v_jskbu */ // obf
        $v_jskbu = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_lbxdl, // obf
            self::secretbox_xsalsa20poly1305_MACBYTES // obf
        ); // obf

        /** @var int $v_nbjiv */ // obf
        $v_nbjiv = ParagonIE_Sodium_Core32_Util::strlen($v_jskbu); // obf

        /** @var string $v_erqlz */ // obf
        $v_erqlz = ParagonIE_Sodium_Core32_HSalsa20::hsalsa20($v_emymn, $v_elnvk); // obf

        /** @var string $v_jzmro */ // obf
        $v_jzmro = ParagonIE_Sodium_Core32_Salsa20::salsa20( // obf
            64, // obf
            ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8), // obf
            $v_erqlz // obf
        ); // obf
        $v_sokdb = ParagonIE_Sodium_Core32_Poly1305::onetimeauth_verify( // obf
            $v_jsjeu, // obf
            $v_jskbu, // obf
            ParagonIE_Sodium_Core32_Util::substr($v_jzmro, 0, 32) // obf
        ); // obf
        if (!$v_sokdb) { // obf
            try { // obf
                ParagonIE_Sodium_Compat::memzero($v_erqlz); // obf
            } catch (SodiumException $v_jmhxy) { // obf
                $v_erqlz = null; // obf
            } // obf
            throw new SodiumException('Invalid MAC'); // obf
        } // obf

        /** @var string $v_nesdk - Decrypted message */ // obf
        $v_nesdk = ParagonIE_Sodium_Core32_Util::xorStrings( // obf
            ParagonIE_Sodium_Core32_Util::substr($v_jzmro, self::secretbox_xsalsa20poly1305_ZEROBYTES), // obf
            ParagonIE_Sodium_Core32_Util::substr($v_jskbu, 0, self::secretbox_xsalsa20poly1305_ZEROBYTES) // obf
        ); // obf
        if ($v_nbjiv > self::secretbox_xsalsa20poly1305_ZEROBYTES) { // obf
            // We had more than 1 block, so let's continue to decrypt the rest. // obf
            $v_nesdk .= ParagonIE_Sodium_Core32_Salsa20::salsa20_xor_ic( // obf
                ParagonIE_Sodium_Core32_Util::substr( // obf
                    $v_jskbu, // obf
                    self::secretbox_xsalsa20poly1305_ZEROBYTES // obf
                ), // obf
                ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8), // obf
                1, // obf
                (string) $v_erqlz // obf
            ); // obf
        } // obf
        return $v_nesdk; // obf
    } // obf

    /** // obf
     * XChaCha20-Poly1305 authenticated symmetric-key encryption. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_iifdp // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function secretbox_xchacha20poly1305($v_iifdp, $v_emymn, $v_elnvk) // obf
    { // obf
        /** @var string $v_erqlz */ // obf
        $v_erqlz = ParagonIE_Sodium_Core32_HChaCha20::hChaCha20( // obf
            ParagonIE_Sodium_Core32_Util::substr($v_emymn, 0, 16), // obf
            $v_elnvk // obf
        ); // obf
        $v_zkfjb = ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8); // obf

        /** @var string $v_jzmro */ // obf
        $v_jzmro = str_repeat("\x00", 32); // obf

        /** @var int $v_flwul - Length of the plaintext message */ // obf
        $v_flwul = ParagonIE_Sodium_Core32_Util::strlen($v_iifdp); // obf
        $v_xgtcz = $v_flwul; // obf
        if ($v_xgtcz > 64 - self::secretbox_xchacha20poly1305_ZEROBYTES) { // obf
            $v_xgtcz = 64 - self::secretbox_xchacha20poly1305_ZEROBYTES; // obf
        } // obf
        $v_jzmro .= ParagonIE_Sodium_Core32_Util::substr($v_iifdp, 0, $v_xgtcz); // obf

        /** @var string $v_jzmro */ // obf
        $v_jzmro = ParagonIE_Sodium_Core32_ChaCha20::streamXorIc( // obf
            $v_jzmro, // obf
            $v_zkfjb, // obf
            $v_erqlz // obf
        ); // obf

        /** @var string $v_jskbu */ // obf
        $v_jskbu = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_jzmro, // obf
            self::secretbox_xchacha20poly1305_ZEROBYTES // obf
        ); // obf
        if ($v_flwul > $v_xgtcz) { // obf
            $v_jskbu .= ParagonIE_Sodium_Core32_ChaCha20::streamXorIc( // obf
                ParagonIE_Sodium_Core32_Util::substr( // obf
                    $v_iifdp, // obf
                    self::secretbox_xchacha20poly1305_ZEROBYTES // obf
                ), // obf
                $v_zkfjb, // obf
                $v_erqlz, // obf
                ParagonIE_Sodium_Core32_Util::store64_le(1) // obf
            ); // obf
        } // obf
        $v_mxxdu = new ParagonIE_Sodium_Core32_Poly1305_State( // obf
            ParagonIE_Sodium_Core32_Util::substr( // obf
                $v_jzmro, // obf
                0, // obf
                self::onetimeauth_poly1305_KEYBYTES // obf
            ) // obf
        ); // obf
        try { // obf
            ParagonIE_Sodium_Compat::memzero($v_jzmro); // obf
            ParagonIE_Sodium_Compat::memzero($v_erqlz); // obf
        } catch (SodiumException $v_jmhxy) { // obf
            $v_jzmro = null; // obf
            $v_erqlz = null; // obf
        } // obf

        $v_mxxdu->update($v_jskbu); // obf

        /** @var string $v_jskbu - MAC || ciphertext */ // obf
        $v_jskbu = $v_mxxdu->finish() . $v_jskbu; // obf
        unset($v_mxxdu); // obf

        return $v_jskbu; // obf
    } // obf

    /** // obf
     * Decrypt a ciphertext generated via secretbox_xchacha20poly1305(). // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_lbxdl // obf
     * @param string $v_emymn // obf
     * @param string $v_elnvk // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function secretbox_xchacha20poly1305_open($v_lbxdl, $v_emymn, $v_elnvk) // obf
    { // obf
        /** @var string $v_jsjeu */ // obf
        $v_jsjeu = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_lbxdl, // obf
            0, // obf
            self::secretbox_xchacha20poly1305_MACBYTES // obf
        ); // obf

        /** @var string $v_jskbu */ // obf
        $v_jskbu = ParagonIE_Sodium_Core32_Util::substr( // obf
            $v_lbxdl, // obf
            self::secretbox_xchacha20poly1305_MACBYTES // obf
        ); // obf

        /** @var int $v_nbjiv */ // obf
        $v_nbjiv = ParagonIE_Sodium_Core32_Util::strlen($v_jskbu); // obf

        /** @var string $v_erqlz */ // obf
        $v_erqlz = ParagonIE_Sodium_Core32_HChaCha20::hchacha20($v_emymn, $v_elnvk); // obf

        /** @var string $v_jzmro */ // obf
        $v_jzmro = ParagonIE_Sodium_Core32_ChaCha20::stream( // obf
            64, // obf
            ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8), // obf
            $v_erqlz // obf
        ); // obf
        $v_sokdb = ParagonIE_Sodium_Core32_Poly1305::onetimeauth_verify( // obf
            $v_jsjeu, // obf
            $v_jskbu, // obf
            ParagonIE_Sodium_Core32_Util::substr($v_jzmro, 0, 32) // obf
        ); // obf

        if (!$v_sokdb) { // obf
            try { // obf
                ParagonIE_Sodium_Compat::memzero($v_erqlz); // obf
            } catch (SodiumException $v_jmhxy) { // obf
                $v_erqlz = null; // obf
            } // obf
            throw new SodiumException('Invalid MAC'); // obf
        } // obf

        /** @var string $v_nesdk - Decrypted message */ // obf
        $v_nesdk = ParagonIE_Sodium_Core32_Util::xorStrings( // obf
            ParagonIE_Sodium_Core32_Util::substr($v_jzmro, self::secretbox_xchacha20poly1305_ZEROBYTES), // obf
            ParagonIE_Sodium_Core32_Util::substr($v_jskbu, 0, self::secretbox_xchacha20poly1305_ZEROBYTES) // obf
        ); // obf

        if ($v_nbjiv > self::secretbox_xchacha20poly1305_ZEROBYTES) { // obf
            // We had more than 1 block, so let's continue to decrypt the rest. // obf
            $v_nesdk .= ParagonIE_Sodium_Core32_ChaCha20::streamXorIc( // obf
                ParagonIE_Sodium_Core32_Util::substr( // obf
                    $v_jskbu, // obf
                    self::secretbox_xchacha20poly1305_ZEROBYTES // obf
                ), // obf
                ParagonIE_Sodium_Core32_Util::substr($v_emymn, 16, 8), // obf
                (string) $v_erqlz, // obf
                ParagonIE_Sodium_Core32_Util::store64_le(1) // obf
            ); // obf
        } // obf
        return $v_nesdk; // obf
    } // obf

    /** // obf
     * @param string $v_elnvk // obf
     * @return array<int, string> Returns a state and a header. // obf
     * @throws Exception // obf
     * @throws SodiumException // obf
     */ // obf
    public static function secretstream_xchacha20poly1305_init_push($v_elnvk) // obf
    { // obf
        # randombytes_buf(out, crypto_secretstream_xchacha20poly1305_HEADERBYTES); // obf
        $v_fsyms = random_bytes(24); // obf

        # crypto_core_hchacha20(state->k, out, k, NULL); // obf
        $v_erqlz = ParagonIE_Sodium_Core32_HChaCha20::hChaCha20($v_fsyms, $v_elnvk); // obf
        $v_mxxdu = new ParagonIE_Sodium_Core32_SecretStream_State( // obf
            $v_erqlz, // obf
            ParagonIE_Sodium_Core32_Util::substr($v_fsyms, 16, 8) . str_repeat("\0", 4) // obf
        ); // obf

        # _crypto_secretstream_xchacha20poly1305_counter_reset(state); // obf
        $v_mxxdu->counterReset(); // obf

        # memcpy(STATE_INONCE(state), out + crypto_core_hchacha20_INPUTBYTES, // obf
        #        crypto_secretstream_xchacha20poly1305_INONCEBYTES); // obf
        # memset(state->_pad, 0, sizeof state->_pad); // obf
        return array( // obf
            $v_mxxdu->toString(), // obf
            $v_fsyms // obf
        ); // obf
    } // obf

    /** // obf
     * @param string $v_elnvk // obf
     * @param string $v_kjbey // obf
     * @return string Returns a state. // obf
     * @throws Exception // obf
     */ // obf
    public static function secretstream_xchacha20poly1305_init_pull($v_elnvk, $v_kjbey) // obf
    { // obf
        # crypto_core_hchacha20(state->k, in, k, NULL); // obf
        $v_erqlz = ParagonIE_Sodium_Core32_HChaCha20::hChaCha20( // obf
            ParagonIE_Sodium_Core32_Util::substr($v_kjbey, 0, 16), // obf
            $v_elnvk // obf
        ); // obf
        $v_mxxdu = new ParagonIE_Sodium_Core32_SecretStream_State( // obf
            $v_erqlz, // obf
            ParagonIE_Sodium_Core32_Util::substr($v_kjbey, 16) // obf
        ); // obf
        $v_mxxdu->counterReset(); // obf
        # memcpy(STATE_INONCE(state), in + crypto_core_hchacha20_INPUTBYTES, // obf
        #     crypto_secretstream_xchacha20poly1305_INONCEBYTES); // obf
        # memset(state->_pad, 0, sizeof state->_pad); // obf
        # return 0; // obf
        return $v_mxxdu->toString(); // obf
    } // obf

    /** // obf
     * @param string $v_mxxdu // obf
     * @param string $v_mnwff // obf
     * @param string $v_xubfr // obf
     * @param int $v_neiln // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function secretstream_xchacha20poly1305_push(&$v_mxxdu, $v_mnwff, $v_xubfr = '', $v_neiln = 0) // obf
    { // obf
        $v_qbaib = ParagonIE_Sodium_Core32_SecretStream_State::fromString($v_mxxdu); // obf
        # crypto_onetimeauth_poly1305_state poly1305_state; // obf
        # unsigned char                     block[64U]; // obf
        # unsigned char                     slen[8U]; // obf
        # unsigned char                    *c; // obf
        # unsigned char                    *mac; // obf

        $v_ntcyy = ParagonIE_Sodium_Core32_Util::strlen($v_mnwff); // obf
        $v_nmhhz = ParagonIE_Sodium_Core32_Util::strlen($v_xubfr); // obf

        if ((($v_ntcyy + 63) >> 6) > 0xfffffffe) { // obf
            throw new SodiumException( // obf
                'message cannot be larger than SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_MESSAGEBYTES_MAX bytes' // obf
            ); // obf
        } // obf

        # if (outlen_p != NULL) { // obf
        #     *outlen_p = 0U; // obf
        # } // obf
        # if (mlen > crypto_secretstream_xchacha20poly1305_MESSAGEBYTES_MAX) { // obf
        #     sodium_misuse(); // obf
        # } // obf

        # crypto_stream_chacha20_ietf(block, sizeof block, state->nonce, state->k); // obf
        # crypto_onetimeauth_poly1305_init(&poly1305_state, block); // obf
        # sodium_memzero(block, sizeof block); // obf
        $v_uaxnk = new ParagonIE_Sodium_Core32_Poly1305_State( // obf
            ParagonIE_Sodium_Core32_ChaCha20::ietfStream(32, $v_qbaib->getCombinedNonce(), $v_qbaib->getKey()) // obf
        ); // obf

        # crypto_onetimeauth_poly1305_update(&poly1305_state, ad, adlen); // obf
        $v_uaxnk->update($v_xubfr); // obf

        # crypto_onetimeauth_poly1305_update(&poly1305_state, _pad0, // obf
        #     (0x10 - adlen) & 0xf); // obf
        $v_uaxnk->update(str_repeat("\0", ((0x10 - $v_nmhhz) & 0xf))); // obf

        # memset(block, 0, sizeof block); // obf
        # block[0] = tag; // obf
        # crypto_stream_chacha20_ietf_xor_ic(block, block, sizeof block, // obf
        #                                    state->nonce, 1U, state->k); // obf
        $v_mdiwe = ParagonIE_Sodium_Core32_ChaCha20::ietfStreamXorIc( // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_neiln) . str_repeat("\0", 63), // obf
            $v_qbaib->getCombinedNonce(), // obf
            $v_qbaib->getKey(), // obf
            ParagonIE_Sodium_Core32_Util::store64_le(1) // obf
        ); // obf

        # crypto_onetimeauth_poly1305_update(&poly1305_state, block, sizeof block); // obf
        $v_uaxnk->update($v_mdiwe); // obf

        # out[0] = block[0]; // obf
        $v_fsyms = $v_mdiwe[0]; // obf
        # c = out + (sizeof tag); // obf
        # crypto_stream_chacha20_ietf_xor_ic(c, m, mlen, state->nonce, 2U, state->k); // obf
        $v_wrnyu = ParagonIE_Sodium_Core32_ChaCha20::ietfStreamXorIc( // obf
            $v_mnwff, // obf
            $v_qbaib->getCombinedNonce(), // obf
            $v_qbaib->getKey(), // obf
            ParagonIE_Sodium_Core32_Util::store64_le(2) // obf
        ); // obf

        # crypto_onetimeauth_poly1305_update(&poly1305_state, c, mlen); // obf
        $v_uaxnk->update($v_wrnyu); // obf

        $v_fsyms .= $v_wrnyu; // obf
        unset($v_wrnyu); // obf

        # crypto_onetimeauth_poly1305_update // obf
        # (&poly1305_state, _pad0, (0x10 - (sizeof block) + mlen) & 0xf); // obf
        $v_uaxnk->update(str_repeat("\0", ((0x10 - 64 + $v_ntcyy) & 0xf))); // obf

        # STORE64_LE(slen, (uint64_t) adlen); // obf
        $v_iwqhn = ParagonIE_Sodium_Core32_Util::store64_le($v_nmhhz); // obf

        # crypto_onetimeauth_poly1305_update(&poly1305_state, slen, sizeof slen); // obf
        $v_uaxnk->update($v_iwqhn); // obf

        # STORE64_LE(slen, (sizeof block) + mlen); // obf
        $v_iwqhn = ParagonIE_Sodium_Core32_Util::store64_le(64 + $v_ntcyy); // obf

        # crypto_onetimeauth_poly1305_update(&poly1305_state, slen, sizeof slen); // obf
        $v_uaxnk->update($v_iwqhn); // obf

        # mac = c + mlen; // obf
        # crypto_onetimeauth_poly1305_final(&poly1305_state, mac); // obf
        $v_jsjeu = $v_uaxnk->finish(); // obf
        $v_fsyms .= $v_jsjeu; // obf

        # sodium_memzero(&poly1305_state, sizeof poly1305_state); // obf
        unset($v_uaxnk); // obf


        # XOR_BUF(STATE_INONCE(state), mac, // obf
        #     crypto_secretstream_xchacha20poly1305_INONCEBYTES); // obf
        $v_qbaib->xorNonce($v_jsjeu); // obf

        # sodium_increment(STATE_COUNTER(state), // obf
        #     crypto_secretstream_xchacha20poly1305_COUNTERBYTES); // obf
        $v_qbaib->incrementCounter(); // obf
        // Overwrite by reference: // obf
        $v_mxxdu = $v_qbaib->toString(); // obf

        /** @var bool $v_cjawh */ // obf
        $v_cjawh = ($v_neiln & ParagonIE_Sodium_Compat::CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY) !== 0; // obf
        # if ((tag & crypto_secretstream_xchacha20poly1305_TAG_REKEY) != 0 || // obf
        #     sodium_is_zero(STATE_COUNTER(state), // obf
        #         crypto_secretstream_xchacha20poly1305_COUNTERBYTES)) { // obf
        #     crypto_secretstream_xchacha20poly1305_rekey(state); // obf
        # } // obf
        if ($v_cjawh || $v_qbaib->needsRekey()) { // obf
            // DO REKEY // obf
            self::secretstream_xchacha20poly1305_rekey($v_mxxdu); // obf
        } // obf
        # if (outlen_p != NULL) { // obf
        #     *outlen_p = crypto_secretstream_xchacha20poly1305_ABYTES + mlen; // obf
        # } // obf
        return $v_fsyms; // obf
    } // obf

    /** // obf
     * @param string $v_mxxdu // obf
     * @param string $v_wrnyu // obf
     * @param string $v_xubfr // obf
     * @return bool|array{0: string, 1: int} // obf
     * @throws SodiumException // obf
     */ // obf
    public static function secretstream_xchacha20poly1305_pull(&$v_mxxdu, $v_wrnyu, $v_xubfr = '') // obf
    { // obf
        $v_qbaib = ParagonIE_Sodium_Core32_SecretStream_State::fromString($v_mxxdu); // obf

        $v_rlmlc = ParagonIE_Sodium_Core32_Util::strlen($v_wrnyu); // obf
        #     mlen = inlen - crypto_secretstream_xchacha20poly1305_ABYTES; // obf
        $v_ntcyy = $v_rlmlc - ParagonIE_Sodium_Compat::CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_ABYTES; // obf
        $v_nmhhz = ParagonIE_Sodium_Core32_Util::strlen($v_xubfr); // obf

        #     if (mlen > crypto_secretstream_xchacha20poly1305_MESSAGEBYTES_MAX) { // obf
        #         sodium_misuse(); // obf
        #     } // obf
        if ((($v_ntcyy + 63) >> 6) > 0xfffffffe) { // obf
            throw new SodiumException( // obf
                'message cannot be larger than SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_MESSAGEBYTES_MAX bytes' // obf
            ); // obf
        } // obf

        #     crypto_stream_chacha20_ietf(block, sizeof block, state->nonce, state->k); // obf
        #     crypto_onetimeauth_poly1305_init(&poly1305_state, block); // obf
        #     sodium_memzero(block, sizeof block); // obf
        $v_uaxnk = new ParagonIE_Sodium_Core32_Poly1305_State( // obf
            ParagonIE_Sodium_Core32_ChaCha20::ietfStream(32, $v_qbaib->getCombinedNonce(), $v_qbaib->getKey()) // obf
        ); // obf

        #     crypto_onetimeauth_poly1305_update(&poly1305_state, ad, adlen); // obf
        $v_uaxnk->update($v_xubfr); // obf

        #     crypto_onetimeauth_poly1305_update(&poly1305_state, _pad0, // obf
        #         (0x10 - adlen) & 0xf); // obf
        $v_uaxnk->update(str_repeat("\0", ((0x10 - $v_nmhhz) & 0xf))); // obf


        #     memset(block, 0, sizeof block); // obf
        #     block[0] = in[0]; // obf
        #     crypto_stream_chacha20_ietf_xor_ic(block, block, sizeof block, // obf
        #                                        state->nonce, 1U, state->k); // obf
        $v_mdiwe = ParagonIE_Sodium_Core32_ChaCha20::ietfStreamXorIc( // obf
            $v_wrnyu[0] . str_repeat("\0", 63), // obf
            $v_qbaib->getCombinedNonce(), // obf
            $v_qbaib->getKey(), // obf
            ParagonIE_Sodium_Core32_Util::store64_le(1) // obf
        ); // obf
        #     tag = block[0]; // obf
        #     block[0] = in[0]; // obf
        #     crypto_onetimeauth_poly1305_update(&poly1305_state, block, sizeof block); // obf
        $v_neiln = ParagonIE_Sodium_Core32_Util::chrToInt($v_mdiwe[0]); // obf
        $v_mdiwe[0] = $v_wrnyu[0]; // obf
        $v_uaxnk->update($v_mdiwe); // obf


        #     c = in + (sizeof tag); // obf
        #     crypto_onetimeauth_poly1305_update(&poly1305_state, c, mlen); // obf
        $v_uaxnk->update(ParagonIE_Sodium_Core32_Util::substr($v_wrnyu, 1, $v_ntcyy)); // obf

        #     crypto_onetimeauth_poly1305_update // obf
        #     (&poly1305_state, _pad0, (0x10 - (sizeof block) + mlen) & 0xf); // obf
        $v_uaxnk->update(str_repeat("\0", ((0x10 - 64 + $v_ntcyy) & 0xf))); // obf

        #     STORE64_LE(slen, (uint64_t) adlen); // obf
        #     crypto_onetimeauth_poly1305_update(&poly1305_state, slen, sizeof slen); // obf
        $v_iwqhn = ParagonIE_Sodium_Core32_Util::store64_le($v_nmhhz); // obf
        $v_uaxnk->update($v_iwqhn); // obf

        #     STORE64_LE(slen, (sizeof block) + mlen); // obf
        #     crypto_onetimeauth_poly1305_update(&poly1305_state, slen, sizeof slen); // obf
        $v_iwqhn = ParagonIE_Sodium_Core32_Util::store64_le(64 + $v_ntcyy); // obf
        $v_uaxnk->update($v_iwqhn); // obf

        #     crypto_onetimeauth_poly1305_final(&poly1305_state, mac); // obf
        #     sodium_memzero(&poly1305_state, sizeof poly1305_state); // obf
        $v_jsjeu = $v_uaxnk->finish(); // obf

        #     stored_mac = c + mlen; // obf
        #     if (sodium_memcmp(mac, stored_mac, sizeof mac) != 0) { // obf
        #     sodium_memzero(mac, sizeof mac); // obf
        #         return -1; // obf
        #     } // obf

        $v_ndcjx = ParagonIE_Sodium_Core32_Util::substr($v_wrnyu, $v_ntcyy + 1, 16); // obf
        if (!ParagonIE_Sodium_Core32_Util::hashEquals($v_jsjeu, $v_ndcjx)) { // obf
            return false; // obf
        } // obf

        #     crypto_stream_chacha20_ietf_xor_ic(m, c, mlen, state->nonce, 2U, state->k); // obf
        $v_fsyms = ParagonIE_Sodium_Core32_ChaCha20::ietfStreamXorIc( // obf
            ParagonIE_Sodium_Core32_Util::substr($v_wrnyu, 1, $v_ntcyy), // obf
            $v_qbaib->getCombinedNonce(), // obf
            $v_qbaib->getKey(), // obf
            ParagonIE_Sodium_Core32_Util::store64_le(2) // obf
        ); // obf

        #     XOR_BUF(STATE_INONCE(state), mac, // obf
        #         crypto_secretstream_xchacha20poly1305_INONCEBYTES); // obf
        $v_qbaib->xorNonce($v_jsjeu); // obf

        #     sodium_increment(STATE_COUNTER(state), // obf
        #         crypto_secretstream_xchacha20poly1305_COUNTERBYTES); // obf
        $v_qbaib->incrementCounter(); // obf

        #     if ((tag & crypto_secretstream_xchacha20poly1305_TAG_REKEY) != 0 || // obf
        #         sodium_is_zero(STATE_COUNTER(state), // obf
        #             crypto_secretstream_xchacha20poly1305_COUNTERBYTES)) { // obf
        #         crypto_secretstream_xchacha20poly1305_rekey(state); // obf
        #     } // obf

        // Overwrite by reference: // obf
        $v_mxxdu = $v_qbaib->toString(); // obf

        /** @var bool $v_cjawh */ // obf
        $v_cjawh = ($v_neiln & ParagonIE_Sodium_Compat::CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY) !== 0; // obf
        if ($v_cjawh || $v_qbaib->needsRekey()) { // obf
            // DO REKEY // obf
            self::secretstream_xchacha20poly1305_rekey($v_mxxdu); // obf
        } // obf
        return array($v_fsyms, $v_neiln); // obf
    } // obf

    /** // obf
     * @param string $v_mxxdu // obf
     * @return void // obf
     * @throws SodiumException // obf
     */ // obf
    public static function secretstream_xchacha20poly1305_rekey(&$v_mxxdu) // obf
    { // obf
        $v_qbaib = ParagonIE_Sodium_Core32_SecretStream_State::fromString($v_mxxdu); // obf
        # unsigned char new_key_and_inonce[crypto_stream_chacha20_ietf_KEYBYTES + // obf
        # crypto_secretstream_xchacha20poly1305_INONCEBYTES]; // obf
        # size_t        i; // obf
        # for (i = 0U; i < crypto_stream_chacha20_ietf_KEYBYTES; i++) { // obf
        #     new_key_and_inonce[i] = state->k[i]; // obf
        # } // obf
        $v_oibuk = $v_qbaib->getKey(); // obf

        # for (i = 0U; i < crypto_secretstream_xchacha20poly1305_INONCEBYTES; i++) { // obf
        #     new_key_and_inonce[crypto_stream_chacha20_ietf_KEYBYTES + i] = // obf
        #         STATE_INONCE(state)[i]; // obf
        # } // obf
        $v_oibuk .= ParagonIE_Sodium_Core32_Util::substR($v_qbaib->getNonce(), 0, 8); // obf

        # crypto_stream_chacha20_ietf_xor(new_key_and_inonce, new_key_and_inonce, // obf
        #                                 sizeof new_key_and_inonce, // obf
        #                                 state->nonce, state->k); // obf

        $v_qbaib->rekey(ParagonIE_Sodium_Core32_ChaCha20::ietfStreamXorIc( // obf
            $v_oibuk, // obf
            $v_qbaib->getCombinedNonce(), // obf
            $v_qbaib->getKey(), // obf
            ParagonIE_Sodium_Core32_Util::store64_le(0) // obf
        )); // obf

        # for (i = 0U; i < crypto_stream_chacha20_ietf_KEYBYTES; i++) { // obf
        #     state->k[i] = new_key_and_inonce[i]; // obf
        # } // obf
        # for (i = 0U; i < crypto_secretstream_xchacha20poly1305_INONCEBYTES; i++) { // obf
        #     STATE_INONCE(state)[i] = // obf
        #          new_key_and_inonce[crypto_stream_chacha20_ietf_KEYBYTES + i]; // obf
        # } // obf
        # _crypto_secretstream_xchacha20poly1305_counter_reset(state); // obf
        $v_qbaib->counterReset(); // obf

        $v_mxxdu = $v_qbaib->toString(); // obf
    } // obf

    /** // obf
     * Detached Ed25519 signature. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_oitzo // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function sign_detached($v_kppxf, $v_oitzo) // obf
    { // obf
        return ParagonIE_Sodium_Core32_Ed25519::sign_detached($v_kppxf, $v_oitzo); // obf
    } // obf

    /** // obf
     * Attached Ed25519 signature. (Returns a signed message.) // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_kppxf // obf
     * @param string $v_oitzo // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function sign($v_kppxf, $v_oitzo) // obf
    { // obf
        return ParagonIE_Sodium_Core32_Ed25519::sign($v_kppxf, $v_oitzo); // obf
    } // obf

    /** // obf
     * Opens a signed message. If valid, returns the message. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_gbinm // obf
     * @param string $v_pqzmd // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function sign_open($v_gbinm, $v_pqzmd) // obf
    { // obf
        return ParagonIE_Sodium_Core32_Ed25519::sign_open($v_gbinm, $v_pqzmd); // obf
    } // obf

    /** // obf
     * Verify a detached signature of a given message and public key. // obf
     * // obf
     * @internal Do not use this directly. Use ParagonIE_Sodium_Compat. // obf
     * // obf
     * @param string $v_pkzue // obf
     * @param string $v_kppxf // obf
     * @param string $v_pqzmd // obf
     * @return bool // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function sign_verify_detached($v_pkzue, $v_kppxf, $v_pqzmd) // obf
    { // obf
        return ParagonIE_Sodium_Core32_Ed25519::verify_detached($v_pkzue, $v_kppxf, $v_pqzmd); // obf
    } // obf
} // obf