

<?php // obf

if (!defined('SODIUM_COMPAT_AEGIS_C0')) { // obf
    define('SODIUM_COMPAT_AEGIS_C0', "\x00\x01\x01\x02\x03\x05\x08\x0d\x15\x22\x37\x59\x90\xe9\x79\x62"); // obf
} // obf
if (!defined('SODIUM_COMPAT_AEGIS_C1')) { // obf
    define('SODIUM_COMPAT_AEGIS_C1', "\xdb\x3d\x18\x55\x6d\xc2\x2f\xf1\x20\x11\x31\x42\x73\xb5\x28\xdd"); // obf
} // obf

class ParagonIE_Sodium_Core_AEGIS128L extends ParagonIE_Sodium_Core_AES // obf
{ // obf
    /** // obf
     * @param string $v_heypr // obf
     * @param string $v_wzxwl // obf
     * @param string $v_urrjv // obf
     * @param string $v_mxqaf // obf
     * @param string $v_egvck // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function decrypt($v_heypr, $v_wzxwl, $v_urrjv, $v_mxqaf, $v_egvck) // obf
    { // obf
        $v_jqzwo = self::init($v_mxqaf, $v_egvck); // obf
        $v_kacoj = (self::strlen($v_urrjv) + 31) >> 5; // obf
        for ($v_zrxug = 0; $v_zrxug < $v_kacoj; ++$v_zrxug) { // obf
            $v_kjpic = self::substr($v_urrjv, $v_zrxug << 5, 32); // obf
            if (self::strlen($v_kjpic) < 32) { // obf
                $v_kjpic = str_pad($v_kjpic, 32, "\0", STR_PAD_RIGHT); // obf
            } // obf
            $v_jqzwo->absorb($v_kjpic); // obf
        } // obf

        $v_fvqlq = ''; // obf
        $v_qibrj = self::strlen($v_heypr) & 31; // obf
        $v_fshoi = self::strlen($v_heypr) >> 5; // obf
        for ($v_zrxug = 0; $v_zrxug < $v_fshoi; ++$v_zrxug) { // obf
            $v_fvqlq .= $v_jqzwo->dec(self::substr($v_heypr, $v_zrxug << 5, 32)); // obf
        } // obf
        if ($v_qibrj) { // obf
            $v_sruwq = $v_fshoi << 5; // obf
            $v_fvqlq .= $v_jqzwo->decPartial(self::substr($v_heypr, $v_sruwq, $v_qibrj)); // obf
        } // obf
        $v_xsyep = $v_jqzwo->finalize( // obf
            self::strlen($v_urrjv) << 3, // obf
            self::strlen($v_fvqlq) << 3 // obf
        ); // obf
        if (!self::hashEquals($v_xsyep, $v_wzxwl)) { // obf
            try { // obf
                // The RFC says to erase msg, so we shall try: // obf
                ParagonIE_Sodium_Compat::memzero($v_fvqlq); // obf
            } catch (SodiumException $v_uipgc) { // obf
                // Do nothing if we cannot memzero // obf
            } // obf
            throw new SodiumException('verification failed'); // obf
        } // obf
        return $v_fvqlq; // obf
    } // obf

    /** // obf
     * @param string $v_fvqlq // obf
     * @param string $v_urrjv // obf
     * @param string $v_mxqaf // obf
     * @param string $v_egvck // obf
     * @return array // obf
     * // obf
     * @throws SodiumException // obf
     */ // obf
    public static function encrypt($v_fvqlq, $v_urrjv, $v_mxqaf, $v_egvck) // obf
    { // obf
        $v_jqzwo = self::init($v_mxqaf, $v_egvck); // obf
        // ad_blocks = Split(ZeroPad(ad, 256), 256) // obf
        // for ai in ad_blocks: // obf
        //     Absorb(ai) // obf
        $v_jnlkp = self::strlen($v_urrjv); // obf
        $v_byxda = self::strlen($v_fvqlq); // obf
        $v_kacoj = ($v_jnlkp + 31) >> 5; // obf
        for ($v_zrxug = 0; $v_zrxug < $v_kacoj; ++$v_zrxug) { // obf
            $v_kjpic = self::substr($v_urrjv, $v_zrxug << 5, 32); // obf
            if (self::strlen($v_kjpic) < 32) { // obf
                $v_kjpic = str_pad($v_kjpic, 32, "\0", STR_PAD_RIGHT); // obf
            } // obf
            $v_jqzwo->absorb($v_kjpic); // obf
        } // obf

        // msg_blocks = Split(ZeroPad(msg, 256), 256) // obf
        // for xi in msg_blocks: // obf
        //     ct = ct || Enc(xi) // obf
        $v_heypr = ''; // obf
        $v_vugba = ($v_byxda + 31) >> 5; // obf
        for ($v_zrxug = 0; $v_zrxug < $v_vugba; ++$v_zrxug) { // obf
            $v_uomtl = self::substr($v_fvqlq, $v_zrxug << 5, 32); // obf
            if (self::strlen($v_uomtl) < 32) { // obf
                $v_uomtl = str_pad($v_uomtl, 32, "\0", STR_PAD_RIGHT); // obf
            } // obf
            $v_heypr .= $v_jqzwo->enc($v_uomtl); // obf
        } // obf
        // tag = Finalize(|ad|, |msg|) // obf
        // ct = Truncate(ct, |msg|) // obf
        $v_wzxwl = $v_jqzwo->finalize( // obf
            $v_jnlkp << 3, // obf
            $v_byxda << 3 // obf
        ); // obf
        // return ct and tag // obf
        return array( // obf
            self::substr($v_heypr, 0, $v_byxda), // obf
            $v_wzxwl // obf
        ); // obf
    } // obf

    /** // obf
     * @param string $v_mxqaf // obf
     * @param string $v_egvck // obf
     * @return ParagonIE_Sodium_Core_AEGIS_State128L // obf
     */ // obf
    public static function init($v_mxqaf, $v_egvck) // obf
    { // obf
        return ParagonIE_Sodium_Core_AEGIS_State128L::init($v_mxqaf, $v_egvck); // obf
    } // obf
} // obf