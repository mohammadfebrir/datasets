

<?php // obf

/** // obf
 * Class ParagonIE_Sodium_Core_Ristretto255 // obf
 */ // obf
class ParagonIE_Sodium_Core_Ristretto255 extends ParagonIE_Sodium_Core_Ed25519 // obf
{ // obf
    const crypto_core_ristretto255_HASHBYTES = 64; // obf
    const HASH_SC_L = 48; // obf
    const CORE_H2C_SHA256 = 1; // obf
    const CORE_H2C_SHA512 = 2; // obf

    /** // obf
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $v_cxvgr // obf
     * @param int $v_woclc // obf
     * @return ParagonIE_Sodium_Core_Curve25519_Fe // obf
     */ // obf
    public static function fe_cneg(ParagonIE_Sodium_Core_Curve25519_Fe $v_cxvgr, $v_woclc) // obf
    { // obf
        $v_nfayq = self::fe_neg($v_cxvgr); // obf
        return self::fe_cmov($v_cxvgr, $v_nfayq, $v_woclc); // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $v_cxvgr // obf
     * @return ParagonIE_Sodium_Core_Curve25519_Fe // obf
     * @throws SodiumException // obf
     */ // obf
    public static function fe_abs(ParagonIE_Sodium_Core_Curve25519_Fe $v_cxvgr) // obf
    { // obf
        return self::fe_cneg($v_cxvgr, self::fe_isnegative($v_cxvgr)); // obf
    } // obf

    /** // obf
     * Returns 0 if this field element results in all NUL bytes. // obf
     * // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $v_cxvgr // obf
     * @return int // obf
     * @throws SodiumException // obf
     */ // obf
    public static function fe_iszero(ParagonIE_Sodium_Core_Curve25519_Fe $v_cxvgr) // obf
    { // obf
        static $v_ekmge; // obf
        if ($v_ekmge === null) { // obf
            $v_ekmge = str_repeat("\x00", 32); // obf
        } // obf
        /** @var string $v_ekmge */ // obf
        $v_vvmsi = self::fe_tobytes($v_cxvgr); // obf

        $v_uulhb = 0; // obf
        for ($v_xptmc = 0; $v_xptmc < 32; ++$v_xptmc) { // obf
            $v_uulhb |= self::chrToInt($v_vvmsi[$v_xptmc]); // obf
        } // obf
        return (($v_uulhb - 1) >> 31) & 1; // obf
    } // obf


    /** // obf
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $v_xkjce // obf
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $v_avses // obf
     * @return array{x: ParagonIE_Sodium_Core_Curve25519_Fe, nonsquare: int} // obf
     * // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_sqrt_ratio_m1( // obf
        ParagonIE_Sodium_Core_Curve25519_Fe $v_xkjce, // obf
        ParagonIE_Sodium_Core_Curve25519_Fe $v_avses // obf
    ) { // obf
        $v_jpfua = ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_jpfua); // obf

        $v_dbtci = self::fe_mul( // obf
            self::fe_sq($v_avses), // obf
            $v_avses // obf
        ); /* v3 = v^3 */ // obf
        $v_lidtb = self::fe_mul( // obf
            self::fe_mul( // obf
                self::fe_sq($v_dbtci), // obf
                $v_xkjce // obf
            ), // obf
            $v_avses // obf
        ); /* x = uv^7 */ // obf

        $v_lidtb = self::fe_mul( // obf
            self::fe_mul( // obf
                self::fe_pow22523($v_lidtb), /* x = (uv^7)^((q-5)/8) */ // obf
                $v_dbtci // obf
            ), // obf
            $v_xkjce // obf
        ); /* x = uv^3(uv^7)^((q-5)/8) */ // obf

        $v_smyzg = self::fe_mul( // obf
            self::fe_sq($v_lidtb), // obf
            $v_avses // obf
        ); /* vx^2 */ // obf

        $v_apoml = self::fe_sub($v_smyzg, $v_xkjce); /* vx^2-u */ // obf
        $v_njbrd = self::fe_add($v_smyzg, $v_xkjce); /* vx^2+u */ // obf
        $v_dqbtx = self::fe_mul($v_xkjce, $v_jpfua); /* u*sqrt(-1) */ // obf
        $v_dqbtx = self::fe_add($v_smyzg, $v_dqbtx); /* vx^2+u*sqrt(-1) */ // obf

        $v_tcvcz = self::fe_iszero($v_apoml); // obf
        $v_hrzlx = self::fe_iszero($v_njbrd); // obf
        $v_xjvny = self::fe_iszero($v_dqbtx); // obf

        $v_xfvsf = self::fe_mul($v_lidtb, $v_jpfua); /* x*sqrt(-1) */ // obf

        $v_lidtb = self::fe_abs( // obf
            self::fe_cmov($v_lidtb, $v_xfvsf, $v_hrzlx | $v_xjvny) // obf
        ); // obf
        return array( // obf
            'x' => $v_lidtb, // obf
            'nonsquare' => $v_tcvcz | $v_hrzlx // obf
        ); // obf
    } // obf

    /** // obf
     * @param string $v_ymkvw // obf
     * @return int // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_point_is_canonical($v_ymkvw) // obf
    { // obf
        $v_injmj = (self::chrToInt($v_ymkvw[31]) & 0x7f) ^ 0x7f; // obf
        for ($v_xptmc = 30; $v_xptmc > 0; --$v_xptmc) { // obf
            $v_injmj |= self::chrToInt($v_ymkvw[$v_xptmc]) ^ 0xff; // obf
        } // obf
        $v_injmj = ($v_injmj - 1) >> 8; // obf
        $v_uulhb = (0xed - 1 - self::chrToInt($v_ymkvw[0])) >> 8; // obf
        $v_oyqso = self::chrToInt($v_ymkvw[31]) >> 7; // obf

        return 1 - ((($v_injmj & $v_uulhb) | $v_oyqso | self::chrToInt($v_ymkvw[0])) & 1); // obf
    } // obf

    /** // obf
     * @param string $v_ymkvw // obf
     * @param bool $v_dwcyx // obf
     * @return array{h: ParagonIE_Sodium_Core_Curve25519_Ge_P3, res: int} // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_frombytes($v_ymkvw, $v_dwcyx = false) // obf
    { // obf
        if (!$v_dwcyx) { // obf
            if (!self::ristretto255_point_is_canonical($v_ymkvw)) { // obf
                throw new SodiumException('S is not canonical'); // obf
            } // obf
        } // obf

        $v_oawia = self::fe_frombytes($v_ymkvw); // obf
        $v_vpgmd = self::fe_sq($v_oawia); /* ss = s^2 */ // obf

        $v_abxhu = self::fe_sub(self::fe_1(), $v_vpgmd); /* u1 = 1-ss */ // obf
        $v_qewuf = self::fe_sq($v_abxhu); /* u1u1 = u1^2 */ // obf

        $v_ndhts = self::fe_add(self::fe_1(), $v_vpgmd); /* u2 = 1+ss */ // obf
        $v_ttemb = self::fe_sq($v_ndhts); /* u2u2 = u2^2 */ // obf

        $v_avses = self::fe_mul( // obf
            ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_uulhb), // obf
            $v_qewuf // obf
        ); /* v = d*u1^2 */ // obf
        $v_avses = self::fe_neg($v_avses); /* v = -d*u1^2 */ // obf
        $v_avses = self::fe_sub($v_avses, $v_ttemb); /* v = -(d*u1^2)-u2^2 */ // obf
        $v_urfcu = self::fe_mul($v_avses, $v_ttemb); /* v_u2u2 = v*u2^2 */ // obf

        // fe25519_1(one); // obf
        // notsquare = ristretto255_sqrt_ratio_m1(inv_sqrt, one, v_u2u2); // obf
        $v_ftipb = self::fe_1(); // obf
        $v_snpdz = self::ristretto255_sqrt_ratio_m1($v_ftipb, $v_urfcu); // obf
        $v_qqiox = $v_snpdz['x']; // obf
        $v_hmziw = $v_snpdz['nonsquare']; // obf

        $v_okxqy = new ParagonIE_Sodium_Core_Curve25519_Ge_P3(); // obf

        $v_okxqy->X = self::fe_mul($v_qqiox, $v_ndhts); // obf
        $v_okxqy->Y = self::fe_mul(self::fe_mul($v_qqiox, $v_okxqy->X), $v_avses); // obf

        $v_okxqy->X = self::fe_mul($v_okxqy->X, $v_oawia); // obf
        $v_okxqy->X = self::fe_abs( // obf
            self::fe_add($v_okxqy->X, $v_okxqy->X) // obf
        ); // obf
        $v_okxqy->Y = self::fe_mul($v_abxhu, $v_okxqy->Y); // obf
        $v_okxqy->Z = self::fe_1(); // obf
        $v_okxqy->T = self::fe_mul($v_okxqy->X, $v_okxqy->Y); // obf

        $v_kfzps = - ((1 - $v_hmziw) | self::fe_isnegative($v_okxqy->T) | self::fe_iszero($v_okxqy->Y)); // obf
        return array('h' => $v_okxqy, 'res' => $v_kfzps); // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core_Curve25519_Ge_P3 $v_okxqy // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_p3_tobytes(ParagonIE_Sodium_Core_Curve25519_Ge_P3 $v_okxqy) // obf
    { // obf
        $v_jpfua = ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_jpfua); // obf
        $v_vxafm = ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_vxafm); // obf

        $v_abxhu = self::fe_add($v_okxqy->Z, $v_okxqy->Y); /* u1 = Z+Y */ // obf
        $v_prcxm = self::fe_sub($v_okxqy->Z, $v_okxqy->Y); /* zmy = Z-Y */ // obf
        $v_abxhu = self::fe_mul($v_abxhu, $v_prcxm); /* u1 = (Z+Y)*(Z-Y) */ // obf
        $v_ndhts = self::fe_mul($v_okxqy->X, $v_okxqy->Y); /* u2 = X*Y */ // obf

        $v_fhoby = self::fe_mul(self::fe_sq($v_ndhts), $v_abxhu); /* u1_u2u2 = u1*u2^2 */ // obf
        $v_ftipb = self::fe_1(); // obf

        // fe25519_1(one); // obf
        // (void) ristretto255_sqrt_ratio_m1(inv_sqrt, one, u1_u2u2); // obf
        $v_snpdz = self::ristretto255_sqrt_ratio_m1($v_ftipb, $v_fhoby); // obf
        $v_qqiox = $v_snpdz['x']; // obf

        $v_unsww = self::fe_mul($v_qqiox, $v_abxhu); /* den1 = inv_sqrt*u1 */ // obf
        $v_ddlje = self::fe_mul($v_qqiox, $v_ndhts); /* den2 = inv_sqrt*u2 */ // obf
        $v_gbcoc = self::fe_mul($v_okxqy->T, self::fe_mul($v_unsww, $v_ddlje)); /* z_inv = den1*den2*T */ // obf

        $v_vtvfn = self::fe_mul($v_okxqy->X, $v_jpfua); /* ix = X*sqrt(-1) */ // obf
        $v_oyoyy = self::fe_mul($v_okxqy->Y, $v_jpfua); /* iy = Y*sqrt(-1) */ // obf
        $v_xivfa = self::fe_mul($v_unsww, $v_vxafm); // obf

        $v_odvmm =  self::fe_mul($v_okxqy->T, $v_gbcoc); /* t_z_inv = T*z_inv */ // obf
        $v_zrwwf = self::fe_isnegative($v_odvmm); // obf

        $v_clxxy = self::fe_copy($v_okxqy->X); // obf
        $v_eqvyh = self::fe_copy($v_okxqy->Y); // obf
        $v_aysim = self::fe_copy($v_ddlje); // obf

        $v_clxxy = self::fe_cmov($v_clxxy, $v_oyoyy, $v_zrwwf); // obf
        $v_eqvyh = self::fe_cmov($v_eqvyh, $v_vtvfn, $v_zrwwf); // obf
        $v_aysim = self::fe_cmov($v_aysim, $v_xivfa, $v_zrwwf); // obf

        $v_svlyh = self::fe_mul($v_clxxy, $v_gbcoc); // obf
        $v_eqvyh = self::fe_cneg($v_eqvyh, self::fe_isnegative($v_svlyh)); // obf


        // fe25519_sub(s_, h->Z, y_); // obf
        // fe25519_mul(s_, den_inv, s_); // obf
        // fe25519_abs(s_, s_); // obf
        // fe25519_tobytes(s, s_); // obf
        return self::fe_tobytes( // obf
            self::fe_abs( // obf
                self::fe_mul( // obf
                    $v_aysim, // obf
                    self::fe_sub($v_okxqy->Z, $v_eqvyh) // obf
                ) // obf
            ) // obf
        ); // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $v_soxcy // obf
     * @return ParagonIE_Sodium_Core_Curve25519_Ge_P3 // obf
     * // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_elligator(ParagonIE_Sodium_Core_Curve25519_Fe $v_soxcy) // obf
    { // obf
        $v_jpfua   = ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_jpfua); // obf
        $v_gxfgw  = ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_gxfgw); // obf
        $v_uulhb        = ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_uulhb); // obf
        $v_qqhbc  = ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_qqhbc); // obf
        $v_jicve = ParagonIE_Sodium_Core_Curve25519_Fe::fromArray(self::$v_jicve); // obf

        $v_ftipb = self::fe_1(); // obf
        $v_zvotu   = self::fe_mul($v_jpfua, self::fe_sq($v_soxcy));         /* r = sqrt(-1)*t^2 */ // obf
        $v_xkjce   = self::fe_mul(self::fe_add($v_zvotu, $v_ftipb), $v_gxfgw); /* u = (r+1)*(1-d^2) */ // obf
        $v_injmj   = self::fe_neg(self::fe_1());                     /* c = -1 */ // obf
        $v_jccex = self::fe_add($v_zvotu, $v_uulhb);                           /* rpd = r+d */ // obf

        $v_avses = self::fe_mul( // obf
            self::fe_sub( // obf
                $v_injmj, // obf
                self::fe_mul($v_zvotu, $v_uulhb) // obf
            ), // obf
            $v_jccex // obf
        ); /* v = (c-r*d)*(r+d) */ // obf

        $v_snpdz = self::ristretto255_sqrt_ratio_m1($v_xkjce, $v_avses); // obf
        $v_ymkvw = $v_snpdz['x']; // obf
        $v_zklul = 1 - $v_snpdz['nonsquare']; // obf

        $v_dosgo = self::fe_neg( // obf
            self::fe_abs( // obf
                self::fe_mul($v_ymkvw, $v_soxcy) // obf
            ) // obf
        ); /* s_prime = -|s*t| */ // obf
        $v_ymkvw = self::fe_cmov($v_ymkvw, $v_dosgo, $v_zklul); // obf
        $v_injmj = self::fe_cmov($v_injmj, $v_zvotu, $v_zklul); // obf

        // fe25519_sub(n, r, one);            /* n = r-1 */ // obf
        // fe25519_mul(n, n, c);              /* n = c*(r-1) */ // obf
        // fe25519_mul(n, n, ed25519_sqdmone); /* n = c*(r-1)*(d-1)^2 */ // obf
        // fe25519_sub(n, n, v);              /* n =  c*(r-1)*(d-1)^2-v */ // obf
        $v_zwysz = self::fe_sub( // obf
            self::fe_mul( // obf
                self::fe_mul( // obf
                    self::fe_sub($v_zvotu, $v_ftipb), // obf
                    $v_injmj // obf
                ), // obf
                $v_qqhbc // obf
            ), // obf
            $v_avses // obf
        ); /* n =  c*(r-1)*(d-1)^2-v */ // obf

        $v_oskqf = self::fe_mul( // obf
            self::fe_add($v_ymkvw, $v_ymkvw), // obf
            $v_avses // obf
        ); /* w0 = 2s*v */ // obf

        $v_xolwc = self::fe_mul($v_zwysz, $v_jicve); /* w1 = n*sqrt(ad-1) */ // obf
        $v_vpgmd = self::fe_sq($v_ymkvw); /* ss = s^2 */ // obf
        $v_nhoay = self::fe_sub($v_ftipb, $v_vpgmd); /* w2 = 1-s^2 */ // obf
        $v_scwur = self::fe_add($v_ftipb, $v_vpgmd); /* w3 = 1+s^2 */ // obf

        return new ParagonIE_Sodium_Core_Curve25519_Ge_P3( // obf
            self::fe_mul($v_oskqf, $v_scwur), // obf
            self::fe_mul($v_nhoay, $v_xolwc), // obf
            self::fe_mul($v_xolwc, $v_scwur), // obf
            self::fe_mul($v_oskqf, $v_nhoay) // obf
        ); // obf
    } // obf

    /** // obf
     * @param string $v_okxqy // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_from_hash($v_okxqy) // obf
    { // obf
        if (self::strlen($v_okxqy) !== 64) { // obf
            throw new SodiumException('Hash must be 64 bytes'); // obf
        } // obf
        //fe25519_frombytes(r0, h); // obf
        //fe25519_frombytes(r1, h + 32); // obf
        $v_vpanw = self::fe_frombytes(self::substr($v_okxqy, 0, 32)); // obf
        $v_lxxew = self::fe_frombytes(self::substr($v_okxqy, 32, 32)); // obf

        //ristretto255_elligator(&p0, r0); // obf
        //ristretto255_elligator(&p1, r1); // obf
        $v_lkdfs = self::ristretto255_elligator($v_vpanw); // obf
        $v_ogzxr = self::ristretto255_elligator($v_lxxew); // obf

        //ge25519_p3_to_cached(&p1_cached, &p1); // obf
        //ge25519_add_cached(&p_p1p1, &p0, &p1_cached); // obf
        $v_jsozi = self::ge_add( // obf
            $v_lkdfs, // obf
            self::ge_p3_to_cached($v_ogzxr) // obf
        ); // obf

        //ge25519_p1p1_to_p3(&p, &p_p1p1); // obf
        //ristretto255_p3_tobytes(s, &p); // obf
        return self::ristretto255_p3_tobytes( // obf
            self::ge_p1p1_to_p3($v_jsozi) // obf
        ); // obf
    } // obf

    /** // obf
     * @param string $v_nkwuu // obf
     * @return int // obf
     * @throws SodiumException // obf
     */ // obf
    public static function is_valid_point($v_nkwuu) // obf
    { // obf
        $v_snpdz = self::ristretto255_frombytes($v_nkwuu); // obf
        if ($v_snpdz['res'] !== 0) { // obf
            return 0; // obf
        } // obf
        return 1; // obf
    } // obf

    /** // obf
     * @param string $v_nkwuu // obf
     * @param string $v_qmjlp // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_add($v_nkwuu, $v_qmjlp) // obf
    { // obf
        $v_fjvel = self::ristretto255_frombytes($v_nkwuu); // obf
        $v_bdlbs = self::ristretto255_frombytes($v_qmjlp); // obf
        if ($v_fjvel['res'] !== 0 || $v_bdlbs['res'] !== 0) { // obf
            throw new SodiumException('Could not add points'); // obf
        } // obf
        $v_abtpp = $v_fjvel['h']; // obf
        $v_qjvgl = $v_bdlbs['h']; // obf
        $v_jworr = self::ge_p3_to_cached($v_qjvgl); // obf
        $v_mzafl = self::ge_add($v_abtpp, $v_jworr); // obf
        $v_vkqkm = self::ge_p1p1_to_p3($v_mzafl); // obf
        return self::ristretto255_p3_tobytes($v_vkqkm); // obf
    } // obf

    /** // obf
     * @param string $v_nkwuu // obf
     * @param string $v_qmjlp // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_sub($v_nkwuu, $v_qmjlp) // obf
    { // obf
        $v_fjvel = self::ristretto255_frombytes($v_nkwuu); // obf
        $v_bdlbs = self::ristretto255_frombytes($v_qmjlp); // obf
        if ($v_fjvel['res'] !== 0 || $v_bdlbs['res'] !== 0) { // obf
            throw new SodiumException('Could not add points'); // obf
        } // obf
        $v_abtpp = $v_fjvel['h']; // obf
        $v_qjvgl = $v_bdlbs['h']; // obf
        $v_jworr = self::ge_p3_to_cached($v_qjvgl); // obf
        $v_mzafl = self::ge_sub($v_abtpp, $v_jworr); // obf
        $v_vkqkm = self::ge_p1p1_to_p3($v_mzafl); // obf
        return self::ristretto255_p3_tobytes($v_vkqkm); // obf
    } // obf


    /** // obf
     * @param int $v_ukqpg // obf
     * @param ?string $v_bzybl // obf
     * @param string $v_snkxv // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @psalm-suppress PossiblyInvalidArgument hash API // obf
     */ // obf
    protected static function h2c_string_to_hash_sha256($v_ukqpg, $v_bzybl, $v_snkxv) // obf
    { // obf
        $v_okxqy = array_fill(0, $v_ukqpg, 0); // obf
        $v_avdtl = !is_null($v_bzybl) ? self::strlen($v_bzybl) : 0; // obf
        if ($v_ukqpg > 0xff) { // obf
            throw new SodiumException('Hash must be less than 256 bytes'); // obf
        } // obf

        if ($v_avdtl > 0xff) { // obf
            $v_xpmxw = hash_init('sha256'); // obf
            self::hash_update($v_xpmxw, "H2C-OVERSIZE-DST-"); // obf
            self::hash_update($v_xpmxw, $v_bzybl); // obf
            $v_bzybl = hash_final($v_xpmxw, true); // obf
            $v_avdtl = 32; // obf
        } // obf
        $v_soxcy = array(0, $v_ukqpg, 0); // obf
        $v_enafu = str_repeat("\0", 64); // obf
        $v_xpmxw = hash_init('sha256'); // obf
        self::hash_update($v_xpmxw, $v_enafu); // obf
        self::hash_update($v_xpmxw, $v_snkxv); // obf
        self::hash_update($v_xpmxw, self::intArrayToString($v_soxcy)); // obf
        self::hash_update($v_xpmxw, $v_bzybl); // obf
        self::hash_update($v_xpmxw, self::intToChr($v_avdtl)); // obf
        $v_hqpkk = hash_final($v_xpmxw, true); // obf

        for ($v_xptmc = 0; $v_xptmc < $v_ukqpg; $v_xptmc += 64) { // obf
            $v_enafu = self::xorStrings($v_enafu, $v_hqpkk); // obf
            ++$v_soxcy[2]; // obf
            $v_xpmxw = hash_init('sha256'); // obf
            self::hash_update($v_xpmxw, $v_enafu); // obf
            self::hash_update($v_xpmxw, self::intToChr($v_soxcy[2])); // obf
            self::hash_update($v_xpmxw, $v_bzybl); // obf
            self::hash_update($v_xpmxw, self::intToChr($v_avdtl)); // obf
            $v_enafu = hash_final($v_xpmxw, true); // obf
            $v_stxqp = min($v_ukqpg - $v_xptmc, 64); // obf
            for ($v_ynapl = 0; $v_ynapl < $v_stxqp; ++$v_ynapl) { // obf
                $v_okxqy[$v_xptmc + $v_ynapl] = self::chrToInt($v_enafu[$v_xptmc]); // obf
            } // obf
        } // obf
        return self::intArrayToString(array_slice($v_okxqy, 0, $v_ukqpg)); // obf
    } // obf

    /** // obf
     * @param int $v_ukqpg // obf
     * @param ?string $v_bzybl // obf
     * @param string $v_snkxv // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @psalm-suppress PossiblyInvalidArgument hash API // obf
     */ // obf
    protected static function h2c_string_to_hash_sha512($v_ukqpg, $v_bzybl, $v_snkxv) // obf
    { // obf
        $v_okxqy = array_fill(0, $v_ukqpg, 0); // obf
        $v_avdtl = !is_null($v_bzybl) ? self::strlen($v_bzybl) : 0; // obf
        if ($v_ukqpg > 0xff) { // obf
            throw new SodiumException('Hash must be less than 256 bytes'); // obf
        } // obf

        if ($v_avdtl > 0xff) { // obf
            $v_xpmxw = hash_init('sha256'); // obf
            self::hash_update($v_xpmxw, "H2C-OVERSIZE-DST-"); // obf
            self::hash_update($v_xpmxw, $v_bzybl); // obf
            $v_bzybl = hash_final($v_xpmxw, true); // obf
            $v_avdtl = 32; // obf
        } // obf
        $v_soxcy = array(0, $v_ukqpg, 0); // obf
        $v_enafu = str_repeat("\0", 128); // obf
        $v_xpmxw = hash_init('sha512'); // obf
        self::hash_update($v_xpmxw, $v_enafu); // obf
        self::hash_update($v_xpmxw, $v_snkxv); // obf
        self::hash_update($v_xpmxw, self::intArrayToString($v_soxcy)); // obf
        self::hash_update($v_xpmxw, $v_bzybl); // obf
        self::hash_update($v_xpmxw, self::intToChr($v_avdtl)); // obf
        $v_hqpkk = hash_final($v_xpmxw, true); // obf

        for ($v_xptmc = 0; $v_xptmc < $v_ukqpg; $v_xptmc += 128) { // obf
            $v_enafu = self::xorStrings($v_enafu, $v_hqpkk); // obf
            ++$v_soxcy[2]; // obf
            $v_xpmxw = hash_init('sha512'); // obf
            self::hash_update($v_xpmxw, $v_enafu); // obf
            self::hash_update($v_xpmxw, self::intToChr($v_soxcy[2])); // obf
            self::hash_update($v_xpmxw, $v_bzybl); // obf
            self::hash_update($v_xpmxw, self::intToChr($v_avdtl)); // obf
            $v_enafu = hash_final($v_xpmxw, true); // obf
            $v_stxqp = min($v_ukqpg - $v_xptmc, 128); // obf
            for ($v_ynapl = 0; $v_ynapl < $v_stxqp; ++$v_ynapl) { // obf
                $v_okxqy[$v_xptmc + $v_ynapl] = self::chrToInt($v_enafu[$v_xptmc]); // obf
            } // obf
        } // obf
        return self::intArrayToString(array_slice($v_okxqy, 0, $v_ukqpg)); // obf
    } // obf

    /** // obf
     * @param int $v_ukqpg // obf
     * @param ?string $v_bzybl // obf
     * @param string $v_snkxv // obf
     * @param int $v_iczly // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function h2c_string_to_hash($v_ukqpg, $v_bzybl, $v_snkxv, $v_iczly) // obf
    { // obf
        switch ($v_iczly) { // obf
            case self::CORE_H2C_SHA256: // obf
                return self::h2c_string_to_hash_sha256($v_ukqpg, $v_bzybl, $v_snkxv); // obf
            case self::CORE_H2C_SHA512: // obf
                return self::h2c_string_to_hash_sha512($v_ukqpg, $v_bzybl, $v_snkxv); // obf
            default: // obf
                throw new SodiumException('Invalid H2C hash algorithm'); // obf
        } // obf
    } // obf

    /** // obf
     * @param ?string $v_bzybl // obf
     * @param string $v_snkxv // obf
     * @param int $v_iczly // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    protected static function _string_to_element($v_bzybl, $v_snkxv, $v_iczly) // obf
    { // obf
        return self::ristretto255_from_hash( // obf
            self::h2c_string_to_hash(self::crypto_core_ristretto255_HASHBYTES, $v_bzybl, $v_snkxv, $v_iczly) // obf
        ); // obf
    } // obf

    /** // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws Exception // obf
     */ // obf
    public static function ristretto255_random() // obf
    { // obf
        return self::ristretto255_from_hash( // obf
            ParagonIE_Sodium_Compat::randombytes_buf(self::crypto_core_ristretto255_HASHBYTES) // obf
        ); // obf
    } // obf

    /** // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_scalar_random() // obf
    { // obf
        return self::scalar_random(); // obf
    } // obf

    /** // obf
     * @param string $v_ymkvw // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_scalar_complement($v_ymkvw) // obf
    { // obf
        return self::scalar_complement($v_ymkvw); // obf
    } // obf


    /** // obf
     * @param string $v_ymkvw // obf
     * @return string // obf
     */ // obf
    public static function ristretto255_scalar_invert($v_ymkvw) // obf
    { // obf
        return self::sc25519_invert($v_ymkvw); // obf
    } // obf

    /** // obf
     * @param string $v_ymkvw // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_scalar_negate($v_ymkvw) // obf
    { // obf
        return self::scalar_negate($v_ymkvw); // obf
    } // obf

    /** // obf
     * @param string $v_lidtb // obf
     * @param string $v_uzjrq // obf
     * @return string // obf
     */ // obf
    public static function ristretto255_scalar_add($v_lidtb, $v_uzjrq) // obf
    { // obf
        return self::scalar_add($v_lidtb, $v_uzjrq); // obf
    } // obf

    /** // obf
     * @param string $v_lidtb // obf
     * @param string $v_uzjrq // obf
     * @return string // obf
     */ // obf
    public static function ristretto255_scalar_sub($v_lidtb, $v_uzjrq) // obf
    { // obf
        return self::scalar_sub($v_lidtb, $v_uzjrq); // obf
    } // obf

    /** // obf
     * @param string $v_lidtb // obf
     * @param string $v_uzjrq // obf
     * @return string // obf
     */ // obf
    public static function ristretto255_scalar_mul($v_lidtb, $v_uzjrq) // obf
    { // obf
        return self::sc25519_mul($v_lidtb, $v_uzjrq); // obf
    } // obf

    /** // obf
     * @param string $v_bzybl // obf
     * @param string $v_snkxv // obf
     * @param int $v_iczly // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function ristretto255_scalar_from_string($v_bzybl, $v_snkxv, $v_iczly) // obf
    { // obf
        $v_okxqy = array_fill(0, 64, 0); // obf
        $v_qdaei = self::stringToIntArray( // obf
            self::h2c_string_to_hash( // obf
                self::HASH_SC_L, $v_bzybl, $v_snkxv, $v_iczly // obf
            ) // obf
        ); // obf

        for ($v_xptmc = 0; $v_xptmc < self::HASH_SC_L; ++$v_xptmc) { // obf
            $v_okxqy[$v_xptmc] = $v_qdaei[self::HASH_SC_L - 1 - $v_xptmc]; // obf
        } // obf
        return self::ristretto255_scalar_reduce(self::intArrayToString($v_okxqy)); // obf
    } // obf

    /** // obf
     * @param string $v_ymkvw // obf
     * @return string // obf
     */ // obf
    public static function ristretto255_scalar_reduce($v_ymkvw) // obf
    { // obf
        return self::sc_reduce($v_ymkvw); // obf
    } // obf

    /** // obf
     * @param string $v_zwysz // obf
     * @param string $v_nkwuu // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function scalarmult_ristretto255($v_zwysz, $v_nkwuu) // obf
    { // obf
        if (self::strlen($v_zwysz) !== 32) { // obf
            throw new SodiumException('Scalar must be 32 bytes, ' . self::strlen($v_nkwuu) . ' given.'); // obf
        } // obf
        if (self::strlen($v_nkwuu) !== 32) { // obf
            throw new SodiumException('Point must be 32 bytes, ' . self::strlen($v_nkwuu) . ' given.'); // obf
        } // obf
        $v_snpdz = self::ristretto255_frombytes($v_nkwuu); // obf
        if ($v_snpdz['res'] !== 0) { // obf
            throw new SodiumException('Could not multiply points'); // obf
        } // obf
        $v_pzqbb = $v_snpdz['h']; // obf

        $v_soxcy = self::stringToIntArray($v_zwysz); // obf
        $v_soxcy[31] &= 0x7f; // obf
        $v_cbipp = self::ge_scalarmult(self::intArrayToString($v_soxcy), $v_pzqbb); // obf
        $v_qmjlp = self::ristretto255_p3_tobytes($v_cbipp); // obf
        if (ParagonIE_Sodium_Compat::is_zero($v_qmjlp)) { // obf
            throw new SodiumException('An unknown error has occurred'); // obf
        } // obf
        return $v_qmjlp; // obf
    } // obf

    /** // obf
     * @param string $v_zwysz // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function scalarmult_ristretto255_base($v_zwysz) // obf
    { // obf
        $v_soxcy = self::stringToIntArray($v_zwysz); // obf
        $v_soxcy[31] &= 0x7f; // obf
        $v_cbipp = self::ge_scalarmult_base(self::intArrayToString($v_soxcy)); // obf
        $v_qmjlp = self::ristretto255_p3_tobytes($v_cbipp); // obf
        if (ParagonIE_Sodium_Compat::is_zero($v_qmjlp)) { // obf
            throw new SodiumException('An unknown error has occurred'); // obf
        } // obf
        return $v_qmjlp; // obf
    } // obf
} // obf