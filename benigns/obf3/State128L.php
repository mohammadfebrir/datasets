

<?php // obf

if (class_exists('ParagonIE_Sodium_Core_AEGIS_State128L', false)) { // obf
    return; // obf
} // obf

if (!defined('SODIUM_COMPAT_AEGIS_C0')) { // obf
    define('SODIUM_COMPAT_AEGIS_C0', "\x00\x01\x01\x02\x03\x05\x08\x0d\x15\x22\x37\x59\x90\xe9\x79\x62"); // obf
} // obf
if (!defined('SODIUM_COMPAT_AEGIS_C1')) { // obf
    define('SODIUM_COMPAT_AEGIS_C1', "\xdb\x3d\x18\x55\x6d\xc2\x2f\xf1\x20\x11\x31\x42\x73\xb5\x28\xdd"); // obf
} // obf

class ParagonIE_Sodium_Core_AEGIS_State128L // obf
{ // obf
    /** @var array<int, string> $v_ahexn */ // obf
    protected $v_ahexn; // obf
    public function __construct() // obf
    { // obf
        $v_eyxnf->state = array_fill(0, 8, ''); // obf
    } // obf

    /** // obf
     * @internal Only use this for unit tests! // obf
     * @return string[] // obf
     */ // obf
    public function getState() // obf
    { // obf
        return array_values($v_eyxnf->state); // obf
    } // obf

    /** // obf
     * @param array $v_xwwma // obf
     * @return self // obf
     * @throws SodiumException // obf
     * // obf
     * @internal Only for unit tests // obf
     */ // obf
    public static function initForUnitTests(array $v_xwwma) // obf
    { // obf
        if (count($v_xwwma) < 8) { // obf
            throw new SodiumException('invalid input'); // obf
        } // obf
        $v_ahexn = new self(); // obf
        for ($v_dtefu = 0; $v_dtefu < 8; ++$v_dtefu) { // obf
            $v_ahexn->state[$v_dtefu] = $v_xwwma[$v_dtefu]; // obf
        } // obf
        return $v_ahexn; // obf
    } // obf

    /** // obf
     * @param string $v_fmnjy // obf
     * @param string $v_swwxb // obf
     * @return self // obf
     */ // obf
    public static function init($v_fmnjy, $v_swwxb) // obf
    { // obf
        $v_ahexn = new self(); // obf

        // S0 = key ^ nonce // obf
        $v_ahexn->state[0] = $v_fmnjy ^ $v_swwxb; // obf
        // S1 = C1 // obf
        $v_ahexn->state[1] = SODIUM_COMPAT_AEGIS_C1; // obf
        // S2 = C0 // obf
        $v_ahexn->state[2] = SODIUM_COMPAT_AEGIS_C0; // obf
        // S3 = C1 // obf
        $v_ahexn->state[3] = SODIUM_COMPAT_AEGIS_C1; // obf
        // S4 = key ^ nonce // obf
        $v_ahexn->state[4] = $v_fmnjy ^ $v_swwxb; // obf
        // S5 = key ^ C0 // obf
        $v_ahexn->state[5] = $v_fmnjy ^ SODIUM_COMPAT_AEGIS_C0; // obf
        // S6 = key ^ C1 // obf
        $v_ahexn->state[6] = $v_fmnjy ^ SODIUM_COMPAT_AEGIS_C1; // obf
        // S7 = key ^ C0 // obf
        $v_ahexn->state[7] = $v_fmnjy ^ SODIUM_COMPAT_AEGIS_C0; // obf

        // Repeat(10, Update(nonce, key)) // obf
        for ($v_dtefu = 0; $v_dtefu < 10; ++$v_dtefu) { // obf
            $v_ahexn->update($v_swwxb, $v_fmnjy); // obf
        } // obf
        return $v_ahexn; // obf
    } // obf

    /** // obf
     * @param string $v_nowxz // obf
     * @return self // obf
     */ // obf
    public function absorb($v_nowxz) // obf
    { // obf
        if (ParagonIE_Sodium_Core_Util::strlen($v_nowxz) !== 32) { // obf
            throw new SodiumException('Input must be two AES blocks in size'); // obf
        } // obf
        $v_wkhgq = ParagonIE_Sodium_Core_Util::substr($v_nowxz, 0, 16); // obf
        $v_txonu = ParagonIE_Sodium_Core_Util::substr($v_nowxz, 16, 16); // obf
        return $v_eyxnf->update($v_wkhgq, $v_txonu); // obf
    } // obf


    /** // obf
     * @param string $v_mgtgs // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public function dec($v_mgtgs) // obf
    { // obf
        if (ParagonIE_Sodium_Core_Util::strlen($v_mgtgs) !== 32) { // obf
            throw new SodiumException('Input must be two AES blocks in size'); // obf
        } // obf

        // z0 = S6 ^ S1 ^ (S2 & S3) // obf
        $v_bhbsh = $v_eyxnf->state[6] // obf
            ^ $v_eyxnf->state[1] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_eyxnf->state[2], $v_eyxnf->state[3]); // obf
        // z1 = S2 ^ S5 ^ (S6 & S7) // obf
        $v_zhiwn = $v_eyxnf->state[2] // obf
            ^ $v_eyxnf->state[5] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_eyxnf->state[6], $v_eyxnf->state[7]); // obf

        // t0, t1 = Split(xi, 128) // obf
        $v_wkhgq = ParagonIE_Sodium_Core_Util::substr($v_mgtgs, 0, 16); // obf
        $v_txonu = ParagonIE_Sodium_Core_Util::substr($v_mgtgs, 16, 16); // obf

        // out0 = t0 ^ z0 // obf
        // out1 = t1 ^ z1 // obf
        $v_kovuc = $v_wkhgq ^ $v_bhbsh; // obf
        $v_ebhpp = $v_txonu ^ $v_zhiwn; // obf

        // Update(out0, out1) // obf
        // xi = out0 || out1 // obf
        $v_eyxnf->update($v_kovuc, $v_ebhpp); // obf
        return $v_kovuc . $v_ebhpp; // obf
    } // obf

    /** // obf
     * @param string $v_bijhr // obf
     * @return string // obf
     */ // obf
    public function decPartial($v_bijhr) // obf
    { // obf
        $v_ckiun = ParagonIE_Sodium_Core_Util::strlen($v_bijhr); // obf

        // z0 = S6 ^ S1 ^ (S2 & S3) // obf
        $v_bhbsh = $v_eyxnf->state[6] // obf
            ^ $v_eyxnf->state[1] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_eyxnf->state[2], $v_eyxnf->state[3]); // obf
        // z1 = S2 ^ S5 ^ (S6 & S7) // obf
        $v_zhiwn = $v_eyxnf->state[2] // obf
            ^ $v_eyxnf->state[5] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_eyxnf->state[6], $v_eyxnf->state[7]); // obf

        // t0, t1 = Split(ZeroPad(cn, 256), 128) // obf
        $v_bijhr = str_pad($v_bijhr, 32, "\0", STR_PAD_RIGHT); // obf
        $v_wkhgq = ParagonIE_Sodium_Core_Util::substr($v_bijhr, 0, 16); // obf
        $v_txonu = ParagonIE_Sodium_Core_Util::substr($v_bijhr, 16, 16); // obf
        // out0 = t0 ^ z0 // obf
        // out1 = t1 ^ z1 // obf
        $v_kovuc = $v_wkhgq ^ $v_bhbsh; // obf
        $v_ebhpp = $v_txonu ^ $v_zhiwn; // obf

        // xn = Truncate(out0 || out1, |cn|) // obf
        $v_fvule = ParagonIE_Sodium_Core_Util::substr($v_kovuc . $v_ebhpp, 0, $v_ckiun); // obf

        // v0, v1 = Split(ZeroPad(xn, 256), 128) // obf
        $v_wrjzz = str_pad($v_fvule, 32, "\0", STR_PAD_RIGHT); // obf
        $v_wdiwv = ParagonIE_Sodium_Core_Util::substr($v_wrjzz, 0, 16); // obf
        $v_gmnrh = ParagonIE_Sodium_Core_Util::substr($v_wrjzz, 16, 16); // obf
        // Update(v0, v1) // obf
        $v_eyxnf->update($v_wdiwv, $v_gmnrh); // obf

        // return xn // obf
        return $v_fvule; // obf
    } // obf

    /** // obf
     * @param string $v_dfvhs // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public function enc($v_dfvhs) // obf
    { // obf
        if (ParagonIE_Sodium_Core_Util::strlen($v_dfvhs) !== 32) { // obf
            throw new SodiumException('Input must be two AES blocks in size'); // obf
        } // obf

        // z0 = S6 ^ S1 ^ (S2 & S3) // obf
        $v_bhbsh = $v_eyxnf->state[6] // obf
            ^ $v_eyxnf->state[1] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_eyxnf->state[2], $v_eyxnf->state[3]); // obf
        // z1 = S2 ^ S5 ^ (S6 & S7) // obf
        $v_zhiwn = $v_eyxnf->state[2] // obf
            ^ $v_eyxnf->state[5] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_eyxnf->state[6], $v_eyxnf->state[7]); // obf

        // t0, t1 = Split(xi, 128) // obf
        $v_wkhgq = ParagonIE_Sodium_Core_Util::substr($v_dfvhs, 0, 16); // obf
        $v_txonu = ParagonIE_Sodium_Core_Util::substr($v_dfvhs, 16, 16); // obf

        // out0 = t0 ^ z0 // obf
        // out1 = t1 ^ z1 // obf
        $v_kovuc = $v_wkhgq ^ $v_bhbsh; // obf
        $v_ebhpp = $v_txonu ^ $v_zhiwn; // obf

        // Update(t0, t1) // obf
        // ci = out0 || out1 // obf
        $v_eyxnf->update($v_wkhgq, $v_txonu); // obf

        // return ci // obf
        return $v_kovuc . $v_ebhpp; // obf
    } // obf

    /** // obf
     * @param int $v_eetbj // obf
     * @param int $v_mbrfd // obf
     * @return string // obf
     */ // obf
    public function finalize($v_eetbj, $v_mbrfd) // obf
    { // obf
        $v_zokti = ParagonIE_Sodium_Core_Util::store64_le($v_eetbj) . // obf
            ParagonIE_Sodium_Core_Util::store64_le($v_mbrfd); // obf
        $v_gicoo = $v_eyxnf->state[2] ^ $v_zokti; // obf
        for ($v_dtefu = 0; $v_dtefu < 7; ++$v_dtefu) { // obf
            $v_eyxnf->update($v_gicoo, $v_gicoo); // obf
        } // obf
        return ($v_eyxnf->state[0] ^ $v_eyxnf->state[1] ^ $v_eyxnf->state[2] ^ $v_eyxnf->state[3]) . // obf
            ($v_eyxnf->state[4] ^ $v_eyxnf->state[5] ^ $v_eyxnf->state[6] ^ $v_eyxnf->state[7]); // obf
    } // obf

    /** // obf
     * @param string $v_lscgq // obf
     * @param string $v_hdbps // obf
     * @return self // obf
     */ // obf
    public function update($v_lscgq, $v_hdbps) // obf
    { // obf
        /* // obf
           S'0 = AESRound(S7, S0 ^ M0) // obf
           S'1 = AESRound(S0, S1) // obf
           S'2 = AESRound(S1, S2) // obf
           S'3 = AESRound(S2, S3) // obf
           S'4 = AESRound(S3, S4 ^ M1) // obf
           S'5 = AESRound(S4, S5) // obf
           S'6 = AESRound(S5, S6) // obf
           S'7 = AESRound(S6, S7) // obf
         */ // obf
        list($v_xjsdd, $v_vtgpz) = ParagonIE_Sodium_Core_AES::doubleRound( // obf
            $v_eyxnf->state[7], $v_eyxnf->state[0] ^ $v_lscgq, // obf
            $v_eyxnf->state[0], $v_eyxnf->state[1] // obf
        ); // obf

        list($v_bstse, $v_ghlin) = ParagonIE_Sodium_Core_AES::doubleRound( // obf
            $v_eyxnf->state[1], $v_eyxnf->state[2], // obf
            $v_eyxnf->state[2], $v_eyxnf->state[3] // obf
        ); // obf

        list($v_whzmo, $v_ofwja) = ParagonIE_Sodium_Core_AES::doubleRound( // obf
            $v_eyxnf->state[3], $v_eyxnf->state[4] ^ $v_hdbps, // obf
            $v_eyxnf->state[4], $v_eyxnf->state[5] // obf
        ); // obf
        list($v_fpomr, $v_mwozv) = ParagonIE_Sodium_Core_AES::doubleRound( // obf
            $v_eyxnf->state[5], $v_eyxnf->state[6], // obf
            $v_eyxnf->state[6], $v_eyxnf->state[7] // obf
        ); // obf

        /* // obf
           S0  = S'0 // obf
           S1  = S'1 // obf
           S2  = S'2 // obf
           S3  = S'3 // obf
           S4  = S'4 // obf
           S5  = S'5 // obf
           S6  = S'6 // obf
           S7  = S'7 // obf
         */ // obf
        $v_eyxnf->state[0] = $v_xjsdd; // obf
        $v_eyxnf->state[1] = $v_vtgpz; // obf
        $v_eyxnf->state[2] = $v_bstse; // obf
        $v_eyxnf->state[3] = $v_ghlin; // obf
        $v_eyxnf->state[4] = $v_whzmo; // obf
        $v_eyxnf->state[5] = $v_ofwja; // obf
        $v_eyxnf->state[6] = $v_fpomr; // obf
        $v_eyxnf->state[7] = $v_mwozv; // obf
        return $v_eyxnf; // obf
    } // obf
} // obf