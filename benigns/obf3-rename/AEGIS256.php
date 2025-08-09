

<?php // obf

if (!defined('SODIUM_COMPAT_AEGIS_C0')) { // obf
    define('SODIUM_COMPAT_AEGIS_C0', "\x00\x01\x01\x02\x03\x05\x08\x0d\x15\x22\x37\x59\x90\xe9\x79\x62"); // obf
} // obf
if (!defined('SODIUM_COMPAT_AEGIS_C1')) { // obf
    define('SODIUM_COMPAT_AEGIS_C1', "\xdb\x3d\x18\x55\x6d\xc2\x2f\xf1\x20\x11\x31\x42\x73\xb5\x28\xdd"); // obf
} // obf

class ParagonIE_Sodium_Core_AEGIS256 extends ParagonIE_Sodium_Core_AES // obf
{ // obf
    /** // obf
     * @param string $v_hzxzl // obf
     * @param string $v_ctdgv // obf
     * @param string $v_oefak // obf
     * @param string $v_xpdva // obf
     * @param string $v_vbech // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function decrypt($v_hzxzl, $v_ctdgv, $v_oefak, $v_xpdva, $v_vbech) // obf
    { // obf
        $v_dbdus = self::init($v_xpdva, $v_vbech); // obf

        // ad_blocks = Split(ZeroPad(ad, 128), 128) // obf
        $v_muyre = (self::strlen($v_oefak) + 15) >> 4; // obf
        // for ai in ad_blocks: // obf
        //     Absorb(ai) // obf
        for ($v_ysoax = 0; $v_ysoax < $v_muyre; ++$v_ysoax) { // obf
            $v_nklql = self::substr($v_oefak, $v_ysoax << 4, 16); // obf
            if (self::strlen($v_nklql) < 16) { // obf
                $v_nklql = str_pad($v_nklql, 16, "\0", STR_PAD_RIGHT); // obf
            } // obf
            $v_dbdus->absorb($v_nklql); // obf
        } // obf

        $v_bwryt = ''; // obf
        $v_rewsc = self::strlen($v_hzxzl) & 15; // obf
        $v_bfmxh = self::strlen($v_hzxzl) >> 4; // obf
        // ct_blocks = Split(ZeroPad(ct, 128), 128) // obf
        // cn = Tail(ct, |ct| mod 128) // obf
        for ($v_ysoax = 0; $v_ysoax < $v_bfmxh; ++$v_ysoax) { // obf
            $v_bwryt .= $v_dbdus->dec(self::substr($v_hzxzl, $v_ysoax << 4, 16)); // obf
        } // obf
        // if cn is not empty: // obf
        //   msg = msg || DecPartial(cn) // obf
        if ($v_rewsc) { // obf
            $v_ctdeq = $v_bfmxh << 4; // obf
            $v_bwryt .= $v_dbdus->decPartial(self::substr($v_hzxzl, $v_ctdeq, $v_rewsc)); // obf
        } // obf
        $v_rxtci = $v_dbdus->finalize( // obf
            self::strlen($v_oefak) << 3, // obf
            self::strlen($v_bwryt) << 3 // obf
        ); // obf
        if (!self::hashEquals($v_rxtci, $v_ctdgv)) { // obf
            try { // obf
                // The RFC says to erase msg, so we shall try: // obf
                ParagonIE_Sodium_Compat::memzero($v_bwryt); // obf
            } catch (SodiumException $v_xcrrq) { // obf
                // Do nothing if we cannot memzero // obf
            } // obf
            throw new SodiumException('verification failed'); // obf
        } // obf
        return $v_bwryt; // obf
    } // obf

    /** // obf
     * @param string $v_bwryt // obf
     * @param string $v_oefak // obf
     * @param string $v_xpdva // obf
     * @param string $v_vbech // obf
     * @return array // obf
     * @throws SodiumException // obf
     */ // obf
    public static function encrypt($v_bwryt, $v_oefak, $v_xpdva, $v_vbech) // obf
    { // obf
        $v_dbdus = self::init($v_xpdva, $v_vbech); // obf
        $v_cpsvz = self::strlen($v_oefak); // obf
        $v_ydjlp = self::strlen($v_bwryt); // obf
        $v_muyre = ($v_cpsvz + 15) >> 4; // obf
        for ($v_ysoax = 0; $v_ysoax < $v_muyre; ++$v_ysoax) { // obf
            $v_nklql = self::substr($v_oefak, $v_ysoax << 4, 16); // obf
            if (self::strlen($v_nklql) < 16) { // obf
                $v_nklql = str_pad($v_nklql, 16, "\0", STR_PAD_RIGHT); // obf
            } // obf
            $v_dbdus->absorb($v_nklql); // obf
        } // obf

        $v_hzxzl = ''; // obf
        $v_lemts = ($v_ydjlp + 15) >> 4; // obf
        for ($v_ysoax = 0; $v_ysoax < $v_lemts; ++$v_ysoax) { // obf
            $v_ovnui = self::substr($v_bwryt, $v_ysoax << 4, 16); // obf
            if (self::strlen($v_ovnui) < 16) { // obf
                $v_ovnui = str_pad($v_ovnui, 16, "\0", STR_PAD_RIGHT); // obf
            } // obf
            $v_hzxzl .= $v_dbdus->enc($v_ovnui); // obf
        } // obf
        $v_ctdgv = $v_dbdus->finalize( // obf
            $v_cpsvz << 3, // obf
            $v_ydjlp << 3 // obf
        ); // obf
        return array( // obf
            self::substr($v_hzxzl, 0, $v_ydjlp), // obf
            $v_ctdgv // obf
        ); // obf

    } // obf

    /** // obf
     * @param string $v_xpdva // obf
     * @param string $v_vbech // obf
     * @return ParagonIE_Sodium_Core_AEGIS_State256 // obf
     */ // obf
    public static function init($v_xpdva, $v_vbech) // obf
    { // obf
        return ParagonIE_Sodium_Core_AEGIS_State256::init($v_xpdva, $v_vbech); // obf
    } // obf
} // obf