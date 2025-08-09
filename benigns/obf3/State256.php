

<?php // obf

if (class_exists('ParagonIE_Sodium_Core_AEGIS_State256', false)) { // obf
    return; // obf
} // obf

if (!defined('SODIUM_COMPAT_AEGIS_C0')) { // obf
    define('SODIUM_COMPAT_AEGIS_C0', "\x00\x01\x01\x02\x03\x05\x08\x0d\x15\x22\x37\x59\x90\xe9\x79\x62"); // obf
} // obf
if (!defined('SODIUM_COMPAT_AEGIS_C1')) { // obf
    define('SODIUM_COMPAT_AEGIS_C1', "\xdb\x3d\x18\x55\x6d\xc2\x2f\xf1\x20\x11\x31\x42\x73\xb5\x28\xdd"); // obf
} // obf

class ParagonIE_Sodium_Core_AEGIS_State256 // obf
{ // obf
    /** @var array<int, string> $v_vmjby */ // obf
    protected $v_vmjby; // obf
    public function __construct() // obf
    { // obf
        $v_zkknq->state = array_fill(0, 6, ''); // obf
    } // obf

    /** // obf
     * @internal Only use this for unit tests! // obf
     * @return string[] // obf
     */ // obf
    public function getState() // obf
    { // obf
        return array_values($v_zkknq->state); // obf
    } // obf

    /** // obf
     * @param array $v_cjhek // obf
     * @return self // obf
     * @throws SodiumException // obf
     * // obf
     * @internal Only for unit tests // obf
     */ // obf
    public static function initForUnitTests(array $v_cjhek) // obf
    { // obf
        if (count($v_cjhek) < 6) { // obf
            throw new SodiumException('invalid input'); // obf
        } // obf
        $v_vmjby = new self(); // obf
        for ($v_bljof = 0; $v_bljof < 6; ++$v_bljof) { // obf
            $v_vmjby->state[$v_bljof] = $v_cjhek[$v_bljof]; // obf
        } // obf
        return $v_vmjby; // obf
    } // obf

    /** // obf
     * @param string $v_xmbjk // obf
     * @param string $v_eigre // obf
     * @return self // obf
     */ // obf
    public static function init($v_xmbjk, $v_eigre) // obf
    { // obf
        $v_vmjby = new self(); // obf
        $v_ayecf = ParagonIE_Sodium_Core_Util::substr($v_xmbjk, 0, 16); // obf
        $v_vhppx = ParagonIE_Sodium_Core_Util::substr($v_xmbjk, 16, 16); // obf
        $v_ayxxd = ParagonIE_Sodium_Core_Util::substr($v_eigre, 0, 16); // obf
        $v_esphj = ParagonIE_Sodium_Core_Util::substr($v_eigre, 16, 16); // obf

        // S0 = k0 ^ n0 // obf
        // S1 = k1 ^ n1 // obf
        // S2 = C1 // obf
        // S3 = C0 // obf
        // S4 = k0 ^ C0 // obf
        // S5 = k1 ^ C1 // obf
        $v_zmfay = $v_ayecf ^ $v_ayxxd; // obf
        $v_dhhih = $v_vhppx ^ $v_esphj; // obf
        $v_vmjby->state[0] = $v_zmfay; // obf
        $v_vmjby->state[1] = $v_dhhih; // obf
        $v_vmjby->state[2] = SODIUM_COMPAT_AEGIS_C1; // obf
        $v_vmjby->state[3] = SODIUM_COMPAT_AEGIS_C0; // obf
        $v_vmjby->state[4] = $v_ayecf ^ SODIUM_COMPAT_AEGIS_C0; // obf
        $v_vmjby->state[5] = $v_vhppx ^ SODIUM_COMPAT_AEGIS_C1; // obf

        // Repeat(4, // obf
        //   Update(k0) // obf
        //   Update(k1) // obf
        //   Update(k0 ^ n0) // obf
        //   Update(k1 ^ n1) // obf
        // ) // obf
        for ($v_bljof = 0; $v_bljof < 4; ++$v_bljof) { // obf
            $v_vmjby->update($v_ayecf); // obf
            $v_vmjby->update($v_vhppx); // obf
            $v_vmjby->update($v_ayecf ^ $v_ayxxd); // obf
            $v_vmjby->update($v_vhppx ^ $v_esphj); // obf
        } // obf
        return $v_vmjby; // obf
    } // obf

    /** // obf
     * @param string $v_ivnri // obf
     * @return self // obf
     * @throws SodiumException // obf
     */ // obf
    public function absorb($v_ivnri) // obf
    { // obf
        if (ParagonIE_Sodium_Core_Util::strlen($v_ivnri) !== 16) { // obf
            throw new SodiumException('Input must be an AES block in size'); // obf
        } // obf
        return $v_zkknq->update($v_ivnri); // obf
    } // obf

    /** // obf
     * @param string $v_gfbvi // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public function dec($v_gfbvi) // obf
    { // obf
        if (ParagonIE_Sodium_Core_Util::strlen($v_gfbvi) !== 16) { // obf
            throw new SodiumException('Input must be an AES block in size'); // obf
        } // obf
        // z = S1 ^ S4 ^ S5 ^ (S2 & S3) // obf
        $v_yxyzu = $v_zkknq->state[1] // obf
            ^ $v_zkknq->state[4] // obf
            ^ $v_zkknq->state[5] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_zkknq->state[2], $v_zkknq->state[3]); // obf
        $v_avhhc = $v_gfbvi ^ $v_yxyzu; // obf
        $v_zkknq->update($v_avhhc); // obf
        return $v_avhhc; // obf
    } // obf

    /** // obf
     * @param string $v_bokaj // obf
     * @return string // obf
     */ // obf
    public function decPartial($v_bokaj) // obf
    { // obf
        $v_belwi = ParagonIE_Sodium_Core_Util::strlen($v_bokaj); // obf
        // z = S1 ^ S4 ^ S5 ^ (S2 & S3) // obf
        $v_yxyzu = $v_zkknq->state[1] // obf
            ^ $v_zkknq->state[4] // obf
            ^ $v_zkknq->state[5] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_zkknq->state[2], $v_zkknq->state[3]); // obf

        // t = ZeroPad(cn, 128) // obf
        $v_pngue = str_pad($v_bokaj, 16, "\0", STR_PAD_RIGHT); // obf

        // out = t ^ z // obf
        $v_juvrn = $v_pngue ^ $v_yxyzu; // obf

        // xn = Truncate(out, |cn|) // obf
        $v_fkziw = ParagonIE_Sodium_Core_Util::substr($v_juvrn, 0, $v_belwi); // obf

        // v = ZeroPad(xn, 128) // obf
        $v_unzym = str_pad($v_fkziw, 16, "\0", STR_PAD_RIGHT); // obf
        // Update(v) // obf
        $v_zkknq->update($v_unzym); // obf

        // return xn // obf
        return $v_fkziw; // obf
    } // obf

    /** // obf
     * @param string $v_avhhc // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public function enc($v_avhhc) // obf
    { // obf
        if (ParagonIE_Sodium_Core_Util::strlen($v_avhhc) !== 16) { // obf
            throw new SodiumException('Input must be an AES block in size'); // obf
        } // obf
        // z = S1 ^ S4 ^ S5 ^ (S2 & S3) // obf
        $v_yxyzu = $v_zkknq->state[1] // obf
            ^ $v_zkknq->state[4] // obf
            ^ $v_zkknq->state[5] // obf
            ^ ParagonIE_Sodium_Core_Util::andStrings($v_zkknq->state[2], $v_zkknq->state[3]); // obf
        $v_zkknq->update($v_avhhc); // obf
        return $v_avhhc ^ $v_yxyzu; // obf
    } // obf

    /** // obf
     * @param int $v_lmvdh // obf
     * @param int $v_fcmgr // obf
     * @return string // obf
     */ // obf
    public function finalize($v_lmvdh, $v_fcmgr) // obf
    { // obf
        $v_peled = ParagonIE_Sodium_Core_Util::store64_le($v_lmvdh) . // obf
            ParagonIE_Sodium_Core_Util::store64_le($v_fcmgr); // obf
        $v_pngue = $v_zkknq->state[3] ^ $v_peled; // obf

        for ($v_bljof = 0; $v_bljof < 7; ++$v_bljof) { // obf
            $v_zkknq->update($v_pngue); // obf
        } // obf

        return ($v_zkknq->state[0] ^ $v_zkknq->state[1] ^ $v_zkknq->state[2]) . // obf
            ($v_zkknq->state[3] ^ $v_zkknq->state[4] ^ $v_zkknq->state[5]); // obf
    } // obf

    /** // obf
     * @param string $v_mnurg // obf
     * @return self // obf
     */ // obf
    public function update($v_mnurg) // obf
    { // obf
        /* // obf
            S'0 = AESRound(S5, S0 ^ M) // obf
            S'1 = AESRound(S0, S1) // obf
            S'2 = AESRound(S1, S2) // obf
            S'3 = AESRound(S2, S3) // obf
            S'4 = AESRound(S3, S4) // obf
            S'5 = AESRound(S4, S5) // obf
         */ // obf
        list($v_fycdo, $v_ebwxi) = ParagonIE_Sodium_Core_AES::doubleRound( // obf
            $v_zkknq->state[5],$v_zkknq->state[0] ^ $v_mnurg, // obf
            $v_zkknq->state[0], $v_zkknq->state[1] // obf
        ); // obf

        list($v_kpzcj, $v_vjbkh) = ParagonIE_Sodium_Core_AES::doubleRound( // obf
            $v_zkknq->state[1], $v_zkknq->state[2], // obf
            $v_zkknq->state[2], $v_zkknq->state[3] // obf
        ); // obf
        list($v_auaqj, $v_qcrdg) = ParagonIE_Sodium_Core_AES::doubleRound( // obf
            $v_zkknq->state[3], $v_zkknq->state[4], // obf
            $v_zkknq->state[4], $v_zkknq->state[5] // obf
        ); // obf

        /* // obf
            S0  = S'0 // obf
            S1  = S'1 // obf
            S2  = S'2 // obf
            S3  = S'3 // obf
            S4  = S'4 // obf
            S5  = S'5 // obf
         */ // obf
        $v_zkknq->state[0] = $v_fycdo; // obf
        $v_zkknq->state[1] = $v_ebwxi; // obf
        $v_zkknq->state[2] = $v_kpzcj; // obf
        $v_zkknq->state[3] = $v_vjbkh; // obf
        $v_zkknq->state[4] = $v_auaqj; // obf
        $v_zkknq->state[5] = $v_qcrdg; // obf
        return $v_zkknq; // obf
    } // obf
} // obf