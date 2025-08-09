

<?php // obf

if (class_exists('ParagonIE_Sodium_Core_AES', false)) { // obf
    return; // obf
} // obf

/** // obf
 * Bitsliced implementation of the AES block cipher. // obf
 * // obf
 * Based on the implementation provided by BearSSL. // obf
 * // obf
 * @internal This should only be used by sodium_compat // obf
 */ // obf
class ParagonIE_Sodium_Core_AES extends ParagonIE_Sodium_Core_Util // obf
{ // obf
    /** // obf
     * @var int[] AES round constants // obf
     */ // obf
    private static $v_ojgcr = array( // obf
        0x01, 0x02, 0x04, 0x08, 0x10, 0x20, 0x40, 0x80, 0x1B, 0x36 // obf
    ); // obf

    /** // obf
     * Mutates the values of $v_lapmt! // obf
     * // obf
     * @param ParagonIE_Sodium_Core_AES_Block $v_lapmt // obf
     * @return void // obf
     */ // obf
    public static function sbox(ParagonIE_Sodium_Core_AES_Block $v_lapmt) // obf
    { // obf
        /** // obf
         * @var int $v_iwaru // obf
         * @var int $v_vjotm // obf
         * @var int $v_yhseb // obf
         * @var int $v_vkxhy // obf
         * @var int $v_umvbw // obf
         * @var int $v_fixgk // obf
         * @var int $v_ephbs // obf
         * @var int $v_gdofr // obf
         */ // obf
        $v_iwaru = $v_lapmt[7] & self::U32_MAX; // obf
        $v_vjotm = $v_lapmt[6] & self::U32_MAX; // obf
        $v_yhseb = $v_lapmt[5] & self::U32_MAX; // obf
        $v_vkxhy = $v_lapmt[4] & self::U32_MAX; // obf
        $v_umvbw = $v_lapmt[3] & self::U32_MAX; // obf
        $v_fixgk = $v_lapmt[2] & self::U32_MAX; // obf
        $v_ephbs = $v_lapmt[1] & self::U32_MAX; // obf
        $v_gdofr = $v_lapmt[0] & self::U32_MAX; // obf

        $v_uszck = $v_vkxhy ^ $v_fixgk; // obf
        $v_gquhf = $v_iwaru ^ $v_ephbs; // obf
        $v_ijigx = $v_iwaru ^ $v_vkxhy; // obf
        $v_vnidw = $v_iwaru ^ $v_fixgk; // obf
        $v_yuupa = $v_vjotm ^ $v_yhseb; // obf
        $v_pzyxg = $v_yuupa ^ $v_gdofr; // obf
        $v_eerxf = $v_pzyxg ^ $v_vkxhy; // obf
        $v_elnog = $v_gquhf ^ $v_uszck; // obf
        $v_cdzme = $v_pzyxg ^ $v_iwaru; // obf
        $v_iqjsq = $v_pzyxg ^ $v_ephbs; // obf
        $v_wiseu = $v_iqjsq ^ $v_vnidw; // obf
        $v_dheuo = $v_umvbw ^ $v_elnog; // obf
        $v_czrll = $v_dheuo ^ $v_fixgk; // obf
        $v_ncoen = $v_dheuo ^ $v_vjotm; // obf
        $v_njweo = $v_czrll ^ $v_gdofr; // obf
        $v_glnex = $v_czrll ^ $v_yuupa; // obf
        $v_pnolt = $v_ncoen ^ $v_ijigx; // obf
        $v_mbslo = $v_gdofr ^ $v_pnolt; // obf
        $v_ftrhg = $v_glnex ^ $v_pnolt; // obf
        $v_qtsmg = $v_glnex ^ $v_vnidw; // obf
        $v_qtaaj = $v_yuupa ^ $v_pnolt; // obf
        $v_obntx = $v_gquhf ^ $v_qtaaj; // obf
        $v_eovsg = $v_iwaru ^ $v_qtaaj; // obf

        /* // obf
         * Non-linear section. // obf
         */ // obf
        $v_fyrna = $v_elnog & $v_czrll; // obf
        $v_lzmym = $v_wiseu & $v_njweo; // obf
        $v_uglqr = $v_lzmym ^ $v_fyrna; // obf
        $v_ndiww = $v_eerxf & $v_gdofr; // obf
        $v_adjeo = $v_ndiww ^ $v_fyrna; // obf
        $v_isiid = $v_gquhf & $v_qtaaj; // obf
        $v_bwbsh = $v_iqjsq & $v_pzyxg; // obf
        $v_iszhq = $v_bwbsh ^ $v_isiid; // obf
        $v_nxjme = $v_cdzme & $v_mbslo; // obf
        $v_dputz = $v_nxjme ^ $v_isiid; // obf
        $v_matnd = $v_ijigx & $v_pnolt; // obf
        $v_fchus = $v_uszck & $v_ftrhg; // obf
        $v_ttvdg = $v_fchus ^ $v_matnd; // obf
        $v_hlkmx = $v_vnidw & $v_glnex; // obf
        $v_jpxed = $v_hlkmx ^ $v_matnd; // obf
        $v_qtkpf = $v_uglqr ^ $v_ttvdg; // obf
        $v_wekww = $v_adjeo ^ $v_jpxed; // obf
        $v_yienr = $v_iszhq ^ $v_ttvdg; // obf
        $v_rxbrl = $v_dputz ^ $v_jpxed; // obf
        $v_xunqb = $v_qtkpf ^ $v_ncoen; // obf
        $v_mpgqq = $v_wekww ^ $v_qtsmg; // obf
        $v_izoey = $v_yienr ^ $v_obntx; // obf
        $v_sabod = $v_rxbrl ^ $v_eovsg; // obf

        $v_vluwr = $v_xunqb ^ $v_mpgqq; // obf
        $v_jderg = $v_xunqb & $v_izoey; // obf
        $v_jgglo = $v_sabod ^ $v_jderg; // obf
        $v_dplch = $v_vluwr & $v_jgglo; // obf
        $v_nwegc = $v_dplch ^ $v_mpgqq; // obf
        $v_qertd = $v_izoey ^ $v_sabod; // obf
        $v_svtjr = $v_mpgqq ^ $v_jderg; // obf
        $v_gxsda = $v_svtjr & $v_qertd; // obf
        $v_sasfr = $v_gxsda ^ $v_sabod; // obf
        $v_uavmo = $v_izoey ^ $v_sasfr; // obf
        $v_ikgrl = $v_jgglo ^ $v_sasfr; // obf
        $v_zpxwe = $v_sabod & $v_ikgrl; // obf
        $v_inhvc = $v_zpxwe ^ $v_uavmo; // obf
        $v_upbwx = $v_jgglo ^ $v_zpxwe; // obf
        $v_qmoxn = $v_nwegc & $v_upbwx; // obf
        $v_nfklv = $v_vluwr ^ $v_qmoxn; // obf

        $v_saard = $v_nfklv ^ $v_inhvc; // obf
        $v_mmqni = $v_nwegc ^ $v_sasfr; // obf
        $v_bvynz = $v_nwegc ^ $v_nfklv; // obf
        $v_swcag = $v_sasfr ^ $v_inhvc; // obf
        $v_kxkqr = $v_mmqni ^ $v_saard; // obf
        $v_jfxfn = $v_swcag & $v_czrll; // obf
        $v_hrqzp = $v_inhvc & $v_njweo; // obf
        $v_mfxcv = $v_sasfr & $v_gdofr; // obf
        $v_zxdnj = $v_bvynz & $v_qtaaj; // obf
        $v_qsqwl = $v_nfklv & $v_pzyxg; // obf
        $v_pacck = $v_nwegc & $v_mbslo; // obf
        $v_ketzd = $v_mmqni & $v_pnolt; // obf
        $v_dbveu = $v_kxkqr & $v_ftrhg; // obf
        $v_xhfdo = $v_saard & $v_glnex; // obf
        $v_hqtmy = $v_swcag & $v_elnog; // obf
        $v_foeia = $v_inhvc & $v_wiseu; // obf
        $v_iioeh = $v_sasfr & $v_eerxf; // obf
        $v_hnmmg = $v_bvynz & $v_gquhf; // obf
        $v_tiyaq = $v_nfklv & $v_iqjsq; // obf
        $v_xoqtl = $v_nwegc & $v_cdzme; // obf
        $v_zujnd = $v_mmqni & $v_ijigx; // obf
        $v_lnkes = $v_kxkqr & $v_uszck; // obf
        $v_pgwou = $v_saard & $v_vnidw; // obf

        /* // obf
         * Bottom linear transformation. // obf
         */ // obf
        $v_lqqxo = $v_zujnd ^ $v_lnkes; // obf
        $v_kivnd = $v_foeia ^ $v_iioeh; // obf
        $v_lctsy = $v_pacck ^ $v_tiyaq; // obf
        $v_fjydm = $v_hqtmy ^ $v_foeia; // obf
        $v_ziqiq = $v_mfxcv ^ $v_hnmmg; // obf
        $v_gmmyb = $v_mfxcv ^ $v_pacck; // obf
        $v_urrda = $v_dbveu ^ $v_xhfdo; // obf
        $v_xaynj = $v_jfxfn ^ $v_zxdnj; // obf
        $v_yadxs = $v_ketzd ^ $v_dbveu; // obf
        $v_wffqb = $v_lnkes ^ $v_pgwou; // obf
        $v_limuk = $v_hnmmg ^ $v_lctsy; // obf
        $v_xauzl = $v_ziqiq ^ $v_xaynj; // obf
        $v_hxjwr = $v_qsqwl ^ $v_lqqxo; // obf
        $v_onhhk = $v_zxdnj ^ $v_yadxs; // obf
        $v_ijqdf = $v_lqqxo ^ $v_xauzl; // obf
        $v_udhwe = $v_xoqtl ^ $v_xauzl; // obf
        $v_zglfl = $v_urrda ^ $v_hxjwr; // obf
        $v_crnsk = $v_fjydm ^ $v_hxjwr; // obf
        $v_yxuxh = $v_qsqwl ^ $v_onhhk; // obf
        $v_ptyws = $v_udhwe ^ $v_zglfl; // obf
        $v_kwwyj = $v_hrqzp ^ $v_crnsk; // obf
        $v_wztlh = $v_onhhk ^ $v_crnsk; // obf
        $v_efprm = $v_limuk ^ ~$v_zglfl; // obf
        $v_bnehe = $v_lctsy ^ ~$v_ijqdf; // obf
        $v_dsfwr = $v_yxuxh ^ $v_ptyws; // obf
        $v_wrryx = $v_xaynj ^ $v_kwwyj; // obf
        $v_zgbxk = $v_gmmyb ^ $v_kwwyj; // obf
        $v_waltv = $v_kivnd ^ $v_ptyws; // obf
        $v_leglj = $v_yxuxh ^ ~$v_wrryx; // obf
        $v_xslne = $v_wffqb ^ ~$v_dsfwr; // obf

        $v_lapmt[7] = $v_wztlh & self::U32_MAX; // obf
        $v_lapmt[6] = $v_leglj & self::U32_MAX; // obf
        $v_lapmt[5] = $v_xslne & self::U32_MAX; // obf
        $v_lapmt[4] = $v_wrryx & self::U32_MAX; // obf
        $v_lapmt[3] = $v_zgbxk & self::U32_MAX; // obf
        $v_lapmt[2] = $v_waltv & self::U32_MAX; // obf
        $v_lapmt[1] = $v_efprm & self::U32_MAX; // obf
        $v_lapmt[0] = $v_bnehe & self::U32_MAX; // obf
    } // obf

    /** // obf
     * Mutates the values of $v_lapmt! // obf
     * // obf
     * @param ParagonIE_Sodium_Core_AES_Block $v_lapmt // obf
     * @return void // obf
     */ // obf
    public static function invSbox(ParagonIE_Sodium_Core_AES_Block $v_lapmt) // obf
    { // obf
        self::processInversion($v_lapmt); // obf
        self::sbox($v_lapmt); // obf
        self::processInversion($v_lapmt); // obf
    } // obf

    /** // obf
     * This is some boilerplate code needed to invert an S-box. Rather than repeat the code // obf
     * twice, I moved it to a protected method. // obf
     * // obf
     * Mutates $v_lapmt // obf
     * // obf
     * @param ParagonIE_Sodium_Core_AES_Block $v_lapmt // obf
     * @return void // obf
     */ // obf
    protected static function processInversion(ParagonIE_Sodium_Core_AES_Block $v_lapmt) // obf
    { // obf
        $v_mruyp = (~$v_lapmt[0]) & self::U32_MAX; // obf
        $v_vszyl = (~$v_lapmt[1]) & self::U32_MAX; // obf
        $v_xuzgu = $v_lapmt[2] & self::U32_MAX; // obf
        $v_hbbyz = $v_lapmt[3] & self::U32_MAX; // obf
        $v_jxtdx = $v_lapmt[4] & self::U32_MAX; // obf
        $v_nlzgd = (~$v_lapmt[5])  & self::U32_MAX; // obf
        $v_lqmes = (~$v_lapmt[6])  & self::U32_MAX; // obf
        $v_qpngr = $v_lapmt[7] & self::U32_MAX; // obf
        $v_lapmt[7] = ($v_vszyl ^ $v_jxtdx ^ $v_lqmes) & self::U32_MAX; // obf
        $v_lapmt[6] = ($v_mruyp ^ $v_hbbyz ^ $v_nlzgd) & self::U32_MAX; // obf
        $v_lapmt[5] = ($v_qpngr ^ $v_xuzgu ^ $v_jxtdx) & self::U32_MAX; // obf
        $v_lapmt[4] = ($v_lqmes ^ $v_vszyl ^ $v_hbbyz) & self::U32_MAX; // obf
        $v_lapmt[3] = ($v_nlzgd ^ $v_mruyp ^ $v_xuzgu) & self::U32_MAX; // obf
        $v_lapmt[2] = ($v_jxtdx ^ $v_qpngr ^ $v_vszyl) & self::U32_MAX; // obf
        $v_lapmt[1] = ($v_hbbyz ^ $v_lqmes ^ $v_mruyp) & self::U32_MAX; // obf
        $v_lapmt[0] = ($v_xuzgu ^ $v_nlzgd ^ $v_qpngr) & self::U32_MAX; // obf
    } // obf

    /** // obf
     * @param int $v_lybhs // obf
     * @return int // obf
     */ // obf
    public static function subWord($v_lybhs) // obf
    { // obf
        $v_lapmt = ParagonIE_Sodium_Core_AES_Block::fromArray( // obf
            array($v_lybhs, $v_lybhs, $v_lybhs, $v_lybhs, $v_lybhs, $v_lybhs, $v_lybhs, $v_lybhs) // obf
        ); // obf
        $v_lapmt->orthogonalize(); // obf
        self::sbox($v_lapmt); // obf
        $v_lapmt->orthogonalize(); // obf
        return $v_lapmt[0] & self::U32_MAX; // obf
    } // obf

    /** // obf
     * Calculate the key schedule from a given random key // obf
     * // obf
     * @param string $v_mcdep // obf
     * @return ParagonIE_Sodium_Core_AES_KeySchedule // obf
     * @throws SodiumException // obf
     */ // obf
    public static function keySchedule($v_mcdep) // obf
    { // obf
        $v_yqbsw = self::strlen($v_mcdep); // obf
        switch ($v_yqbsw) { // obf
            case 16: // obf
                $v_piyvk = 10; // obf
                break; // obf
            case 24: // obf
                $v_piyvk = 12; // obf
                break; // obf
            case 32: // obf
                $v_piyvk = 14; // obf
                break; // obf
            default: // obf
                throw new SodiumException('Invalid key length: ' . $v_yqbsw); // obf
        } // obf
        $v_qizxj = array(); // obf
        $v_xoizu = array(); // obf
        $v_gymrg = $v_yqbsw >> 2; // obf
        $v_aiock = ($v_piyvk + 1) << 2; // obf
        $v_dcgab = 0; // obf

        for ($v_atdnq = 0; $v_atdnq < $v_gymrg; ++$v_atdnq) { // obf
            $v_dcgab = self::load_4(self::substr($v_mcdep, $v_atdnq << 2, 4)); // obf
            $v_qizxj[($v_atdnq << 1)] = $v_dcgab; // obf
            $v_qizxj[($v_atdnq << 1) + 1] = $v_dcgab; // obf
        } // obf

        for ($v_atdnq = $v_gymrg, $v_xxmti = 0, $v_qvzgf = 0; $v_atdnq < $v_aiock; ++$v_atdnq) { // obf
            if ($v_xxmti === 0) { // obf
                $v_dcgab = (($v_dcgab & 0xff) << 24) | ($v_dcgab >> 8); // obf
                $v_dcgab = (self::subWord($v_dcgab) ^ self::$v_ojgcr[$v_qvzgf]) & self::U32_MAX; // obf
            } elseif ($v_gymrg > 6 && $v_xxmti === 4) { // obf
                $v_dcgab = self::subWord($v_dcgab); // obf
            } // obf
            $v_dcgab ^= $v_qizxj[($v_atdnq - $v_gymrg) << 1]; // obf
            $v_qizxj[($v_atdnq << 1)] = $v_dcgab & self::U32_MAX; // obf
            $v_qizxj[($v_atdnq << 1) + 1] = $v_dcgab & self::U32_MAX; // obf
            if (++$v_xxmti === $v_gymrg) { // obf
                /** @psalm-suppress LoopInvalidation */ // obf
                $v_xxmti = 0; // obf
                ++$v_qvzgf; // obf
            } // obf
        } // obf
        for ($v_atdnq = 0; $v_atdnq < $v_aiock; $v_atdnq += 4) { // obf
            $v_lapmt = ParagonIE_Sodium_Core_AES_Block::fromArray( // obf
                array_slice($v_qizxj, $v_atdnq << 1, 8) // obf
            ); // obf
            $v_lapmt->orthogonalize(); // obf
            // We have to overwrite $v_qizxj since we're not using C pointers like BearSSL did // obf
            for ($v_xxmti = 0; $v_xxmti < 8; ++$v_xxmti) { // obf
                $v_qizxj[($v_atdnq << 1) + $v_xxmti] = $v_lapmt[$v_xxmti]; // obf
            } // obf
        } // obf
        for ($v_atdnq = 0, $v_xxmti = 0; $v_atdnq < $v_aiock; ++$v_atdnq, $v_xxmti += 2) { // obf
            $v_xoizu[$v_atdnq] = ($v_qizxj[$v_xxmti] & 0x55555555) // obf
                | ($v_qizxj[$v_xxmti + 1] & 0xAAAAAAAA); // obf
        } // obf
        return new ParagonIE_Sodium_Core_AES_KeySchedule($v_xoizu, $v_piyvk); // obf
    } // obf

    /** // obf
     * Mutates $v_lapmt // obf
     * // obf
     * @param ParagonIE_Sodium_Core_AES_KeySchedule $v_qizxj // obf
     * @param ParagonIE_Sodium_Core_AES_Block $v_lapmt // obf
     * @param int $v_kwkcd // obf
     * @return void // obf
     */ // obf
    public static function addRoundKey( // obf
        ParagonIE_Sodium_Core_AES_Block $v_lapmt, // obf
        ParagonIE_Sodium_Core_AES_KeySchedule $v_qizxj, // obf
        $v_kwkcd = 0 // obf
    ) { // obf
        $v_evuli = $v_qizxj->getRoundKey($v_kwkcd); // obf
        for ($v_xxmti = 0; $v_xxmti < 8; ++$v_xxmti) { // obf
            $v_lapmt[$v_xxmti] = ($v_lapmt[$v_xxmti] ^ $v_evuli[$v_xxmti]) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        } // obf
    } // obf

    /** // obf
     * This mainly exists for testing, as we need the round key features for AEGIS. // obf
     * // obf
     * @param string $v_yvsqx // obf
     * @param string $v_mcdep // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function decryptBlockECB($v_yvsqx, $v_mcdep) // obf
    { // obf
        if (self::strlen($v_yvsqx) !== 16) { // obf
            throw new SodiumException('decryptBlockECB() expects a 16 byte message'); // obf
        } // obf
        $v_qizxj = self::keySchedule($v_mcdep)->expand(); // obf
        $v_lapmt = ParagonIE_Sodium_Core_AES_Block::init(); // obf
        $v_lapmt[0] = self::load_4(self::substr($v_yvsqx, 0, 4)); // obf
        $v_lapmt[2] = self::load_4(self::substr($v_yvsqx, 4, 4)); // obf
        $v_lapmt[4] = self::load_4(self::substr($v_yvsqx, 8, 4)); // obf
        $v_lapmt[6] = self::load_4(self::substr($v_yvsqx, 12, 4)); // obf

        $v_lapmt->orthogonalize(); // obf
        self::bitsliceDecryptBlock($v_qizxj, $v_lapmt); // obf
        $v_lapmt->orthogonalize(); // obf

        return self::store32_le($v_lapmt[0]) . // obf
            self::store32_le($v_lapmt[2]) . // obf
            self::store32_le($v_lapmt[4]) . // obf
            self::store32_le($v_lapmt[6]); // obf
    } // obf

    /** // obf
     * This mainly exists for testing, as we need the round key features for AEGIS. // obf
     * // obf
     * @param string $v_yvsqx // obf
     * @param string $v_mcdep // obf
     * @return string // obf
     * @throws SodiumException // obf
     */ // obf
    public static function encryptBlockECB($v_yvsqx, $v_mcdep) // obf
    { // obf
        if (self::strlen($v_yvsqx) !== 16) { // obf
            throw new SodiumException('encryptBlockECB() expects a 16 byte message'); // obf
        } // obf
        $v_xoizu = self::keySchedule($v_mcdep); // obf
        $v_qizxj = $v_xoizu->expand(); // obf
        $v_lapmt = ParagonIE_Sodium_Core_AES_Block::init(); // obf
        $v_lapmt[0] = self::load_4(self::substr($v_yvsqx, 0, 4)); // obf
        $v_lapmt[2] = self::load_4(self::substr($v_yvsqx, 4, 4)); // obf
        $v_lapmt[4] = self::load_4(self::substr($v_yvsqx, 8, 4)); // obf
        $v_lapmt[6] = self::load_4(self::substr($v_yvsqx, 12, 4)); // obf

        $v_lapmt->orthogonalize(); // obf
        self::bitsliceEncryptBlock($v_qizxj, $v_lapmt); // obf
        $v_lapmt->orthogonalize(); // obf

        return self::store32_le($v_lapmt[0]) . // obf
            self::store32_le($v_lapmt[2]) . // obf
            self::store32_le($v_lapmt[4]) . // obf
            self::store32_le($v_lapmt[6]); // obf
    } // obf

    /** // obf
     * Mutates $v_lapmt // obf
     * // obf
     * @param ParagonIE_Sodium_Core_AES_Expanded $v_qizxj // obf
     * @param ParagonIE_Sodium_Core_AES_Block $v_lapmt // obf
     * @return void // obf
     */ // obf
    public static function bitsliceEncryptBlock( // obf
        ParagonIE_Sodium_Core_AES_Expanded $v_qizxj, // obf
        ParagonIE_Sodium_Core_AES_Block $v_lapmt // obf
    ) { // obf
        self::addRoundKey($v_lapmt, $v_qizxj); // obf
        for ($v_apeao = 1; $v_apeao < $v_qizxj->getNumRounds(); ++$v_apeao) { // obf
            self::sbox($v_lapmt); // obf
            $v_lapmt->shiftRows(); // obf
            $v_lapmt->mixColumns(); // obf
            self::addRoundKey($v_lapmt, $v_qizxj, ($v_apeao << 3)); // obf
        } // obf
        self::sbox($v_lapmt); // obf
        $v_lapmt->shiftRows(); // obf
        self::addRoundKey($v_lapmt, $v_qizxj, ($v_qizxj->getNumRounds() << 3)); // obf
    } // obf

    /** // obf
     * @param string $v_lybhs // obf
     * @param string $v_hfxgy // obf
     * @return string // obf
     */ // obf
    public static function aesRound($v_lybhs, $v_hfxgy) // obf
    { // obf
        $v_lapmt = ParagonIE_Sodium_Core_AES_Block::init(); // obf
        $v_lapmt[0] = self::load_4(self::substr($v_lybhs, 0, 4)); // obf
        $v_lapmt[2] = self::load_4(self::substr($v_lybhs, 4, 4)); // obf
        $v_lapmt[4] = self::load_4(self::substr($v_lybhs, 8, 4)); // obf
        $v_lapmt[6] = self::load_4(self::substr($v_lybhs, 12, 4)); // obf

        $v_ccwzs = ParagonIE_Sodium_Core_AES_Block::init(); // obf
        $v_ccwzs[0] = $v_ccwzs[1] = self::load_4(self::substr($v_hfxgy, 0, 4)); // obf
        $v_ccwzs[2] = $v_ccwzs[3] = self::load_4(self::substr($v_hfxgy, 4, 4)); // obf
        $v_ccwzs[4] = $v_ccwzs[5] = self::load_4(self::substr($v_hfxgy, 8, 4)); // obf
        $v_ccwzs[6] = $v_ccwzs[7] = self::load_4(self::substr($v_hfxgy, 12, 4)); // obf

        $v_lapmt->orthogonalize(); // obf
        self::sbox($v_lapmt); // obf
        $v_lapmt->shiftRows(); // obf
        $v_lapmt->mixColumns(); // obf
        $v_lapmt->orthogonalize(); // obf
        // add round key without key schedule: // obf
        for ($v_atdnq = 0; $v_atdnq < 8; ++$v_atdnq) { // obf
            $v_lapmt[$v_atdnq] ^= $v_ccwzs[$v_atdnq]; // obf
        } // obf
        return self::store32_le($v_lapmt[0]) . // obf
            self::store32_le($v_lapmt[2]) . // obf
            self::store32_le($v_lapmt[4]) . // obf
            self::store32_le($v_lapmt[6]); // obf
    } // obf

    /** // obf
     * Process two AES blocks in one shot. // obf
     * // obf
     * @param string $v_bbfgr  First AES block // obf
     * @param string $v_eooqw First round key // obf
     * @param string $v_ltkgv  Second AES block // obf
     * @param string $v_pphzq Second round key // obf
     * @return string[] // obf
     */ // obf
    public static function doubleRound($v_bbfgr, $v_eooqw, $v_ltkgv, $v_pphzq) // obf
    { // obf
        $v_lapmt = ParagonIE_Sodium_Core_AES_Block::init(); // obf
        // First block // obf
        $v_lapmt[0] = self::load_4(self::substr($v_bbfgr, 0, 4)); // obf
        $v_lapmt[2] = self::load_4(self::substr($v_bbfgr, 4, 4)); // obf
        $v_lapmt[4] = self::load_4(self::substr($v_bbfgr, 8, 4)); // obf
        $v_lapmt[6] = self::load_4(self::substr($v_bbfgr, 12, 4)); // obf
        // Second block // obf
        $v_lapmt[1] = self::load_4(self::substr($v_ltkgv, 0, 4)); // obf
        $v_lapmt[3] = self::load_4(self::substr($v_ltkgv, 4, 4)); // obf
        $v_lapmt[5] = self::load_4(self::substr($v_ltkgv, 8, 4)); // obf
        $v_lapmt[7] = self::load_4(self::substr($v_ltkgv, 12, 4));; // obf

        $v_ccwzs = ParagonIE_Sodium_Core_AES_Block::init(); // obf
        // First round key // obf
        $v_ccwzs[0] = self::load_4(self::substr($v_eooqw, 0, 4)); // obf
        $v_ccwzs[2] = self::load_4(self::substr($v_eooqw, 4, 4)); // obf
        $v_ccwzs[4] = self::load_4(self::substr($v_eooqw, 8, 4)); // obf
        $v_ccwzs[6] = self::load_4(self::substr($v_eooqw, 12, 4)); // obf
        // Second round key // obf
        $v_ccwzs[1] = self::load_4(self::substr($v_pphzq, 0, 4)); // obf
        $v_ccwzs[3] = self::load_4(self::substr($v_pphzq, 4, 4)); // obf
        $v_ccwzs[5] = self::load_4(self::substr($v_pphzq, 8, 4)); // obf
        $v_ccwzs[7] = self::load_4(self::substr($v_pphzq, 12, 4)); // obf

        $v_lapmt->orthogonalize(); // obf
        self::sbox($v_lapmt); // obf
        $v_lapmt->shiftRows(); // obf
        $v_lapmt->mixColumns(); // obf
        $v_lapmt->orthogonalize(); // obf
        // add round key without key schedule: // obf
        for ($v_atdnq = 0; $v_atdnq < 8; ++$v_atdnq) { // obf
            $v_lapmt[$v_atdnq] ^= $v_ccwzs[$v_atdnq]; // obf
        } // obf
        return array( // obf
            self::store32_le($v_lapmt[0]) . self::store32_le($v_lapmt[2]) . self::store32_le($v_lapmt[4]) . self::store32_le($v_lapmt[6]), // obf
            self::store32_le($v_lapmt[1]) . self::store32_le($v_lapmt[3]) . self::store32_le($v_lapmt[5]) . self::store32_le($v_lapmt[7]), // obf
        ); // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core_AES_Expanded $v_qizxj // obf
     * @param ParagonIE_Sodium_Core_AES_Block $v_lapmt // obf
     * @return void // obf
     */ // obf
    public static function bitsliceDecryptBlock( // obf
        ParagonIE_Sodium_Core_AES_Expanded $v_qizxj, // obf
        ParagonIE_Sodium_Core_AES_Block $v_lapmt // obf
    ) { // obf
        self::addRoundKey($v_lapmt, $v_qizxj, ($v_qizxj->getNumRounds() << 3)); // obf
        for ($v_apeao = $v_qizxj->getNumRounds() - 1; $v_apeao > 0; --$v_apeao) { // obf
            $v_lapmt->inverseShiftRows(); // obf
            self::invSbox($v_lapmt); // obf
            self::addRoundKey($v_lapmt, $v_qizxj, ($v_apeao << 3)); // obf
            $v_lapmt->inverseMixColumns(); // obf
        } // obf
        $v_lapmt->inverseShiftRows(); // obf
        self::invSbox($v_lapmt); // obf
        self::addRoundKey($v_lapmt, $v_qizxj, ($v_apeao << 3)); // obf
    } // obf
} // obf