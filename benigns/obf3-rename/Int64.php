

<?php // obf

/** // obf
 * Class ParagonIE_Sodium_Core32_Int64 // obf
 * // obf
 * Encapsulates a 64-bit integer. // obf
 * // obf
 * These are immutable. It always returns a new instance. // obf
 */ // obf
class ParagonIE_Sodium_Core32_Int64 // obf
{ // obf
    /** // obf
     * @var array<int, int> - four 16-bit integers // obf
     */ // obf
    public $v_shqqr = array(0, 0, 0, 0); // obf

    /** // obf
     * @var int // obf
     */ // obf
    public $v_iuxhw = 0; // obf

    /** // obf
     * @var bool // obf
     */ // obf
    public $v_xpbui = false; // obf

    /** // obf
     * ParagonIE_Sodium_Core32_Int64 constructor. // obf
     * @param array $v_zxbbm // obf
     * @param bool $v_xpbui // obf
     */ // obf
    public function __construct($v_zxbbm = array(0, 0, 0, 0), $v_xpbui = false) // obf
    { // obf
        $v_mktmq->limbs = array( // obf
            (int) $v_zxbbm[0], // obf
            (int) $v_zxbbm[1], // obf
            (int) $v_zxbbm[2], // obf
            (int) $v_zxbbm[3] // obf
        ); // obf
        $v_mktmq->overflow = 0; // obf
        $v_mktmq->unsignedInt = $v_xpbui; // obf
    } // obf

    /** // obf
     * Adds two int64 objects // obf
     * // obf
     * @param ParagonIE_Sodium_Core32_Int64 $v_naulq // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function addInt64(ParagonIE_Sodium_Core32_Int64 $v_naulq) // obf
    { // obf
        $v_hlukm = $v_mktmq->limbs[0]; // obf
        $v_kogqd = $v_mktmq->limbs[1]; // obf
        $v_flfps = $v_mktmq->limbs[2]; // obf
        $v_eihob = $v_mktmq->limbs[3]; // obf
        $v_emaza = $v_naulq->limbs[0]; // obf
        $v_bsrmk = $v_naulq->limbs[1]; // obf
        $v_ijyac = $v_naulq->limbs[2]; // obf
        $v_zjbpx = $v_naulq->limbs[3]; // obf

        $v_zooxl = $v_eihob + ($v_zjbpx & 0xffff); // obf
        $v_czndd = $v_zooxl >> 16; // obf

        $v_hornt = $v_flfps + ($v_ijyac & 0xffff) + $v_czndd; // obf
        $v_czndd = $v_hornt >> 16; // obf

        $v_zftya = $v_kogqd + ($v_bsrmk & 0xffff) + $v_czndd; // obf
        $v_czndd = $v_zftya >> 16; // obf

        $v_gnleo = $v_hlukm + ($v_emaza & 0xffff) + $v_czndd; // obf
        $v_czndd = $v_gnleo >> 16; // obf

        $v_gnleo &= 0xffff; // obf
        $v_zftya &= 0xffff; // obf
        $v_hornt &= 0xffff; // obf
        $v_zooxl &= 0xffff; // obf

        $v_cuoza = new ParagonIE_Sodium_Core32_Int64( // obf
            array($v_gnleo, $v_zftya, $v_hornt, $v_zooxl) // obf
        ); // obf
        $v_cuoza->overflow = $v_czndd; // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * Adds a normal integer to an int64 object // obf
     * // obf
     * @param int $v_yiasd // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function addInt($v_yiasd) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_yiasd, 'int', 1); // obf
        /** @var int $v_yiasd */ // obf
        $v_yiasd = (int) $v_yiasd; // obf

        $v_hlukm = $v_mktmq->limbs[0]; // obf
        $v_kogqd = $v_mktmq->limbs[1]; // obf
        $v_flfps = $v_mktmq->limbs[2]; // obf
        $v_eihob = $v_mktmq->limbs[3]; // obf

        $v_zooxl = $v_eihob + ($v_yiasd & 0xffff); // obf
        $v_czndd = $v_zooxl >> 16; // obf

        $v_hornt = $v_flfps + (($v_yiasd >> 16) & 0xffff) + $v_czndd; // obf
        $v_czndd = $v_hornt >> 16; // obf

        $v_zftya = $v_kogqd + $v_czndd; // obf
        $v_czndd = $v_zftya >> 16; // obf

        $v_gnleo = $v_hlukm + $v_czndd; // obf
        $v_czndd = $v_gnleo >> 16; // obf

        $v_gnleo &= 0xffff; // obf
        $v_zftya &= 0xffff; // obf
        $v_hornt &= 0xffff; // obf
        $v_zooxl &= 0xffff; // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64( // obf
            array($v_gnleo, $v_zftya, $v_hornt, $v_zooxl) // obf
        ); // obf
        $v_cuoza->overflow = $v_czndd; // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param int $v_qsrkj // obf
     * @return int // obf
     */ // obf
    public function compareInt($v_qsrkj = 0) // obf
    { // obf
        $v_yhftz = 0; // obf
        $v_kgbzv = 1; // obf

        $v_jjfjv = 4; // obf
        $v_pgpni = 0; // obf
        while ($v_jjfjv > 0) { // obf
            --$v_jjfjv; // obf
            /** @var int $v_scprf */ // obf
            $v_scprf = $v_mktmq->limbs[$v_jjfjv]; // obf
            /** @var int $v_brhkr */ // obf
            $v_brhkr = ($v_qsrkj >> ($v_pgpni << 4)) & 0xffff; // obf
            /** int */ // obf
            $v_yhftz |= (($v_brhkr - $v_scprf) >> 8) & $v_kgbzv; // obf
            /** int */ // obf
            $v_kgbzv &= (($v_brhkr ^ $v_scprf) - 1) >> 8; // obf
        } // obf
        return ($v_yhftz + $v_yhftz - $v_kgbzv) + 1; // obf
    } // obf

    /** // obf
     * @param int $v_qsrkj // obf
     * @return bool // obf
     */ // obf
    public function isGreaterThan($v_qsrkj = 0) // obf
    { // obf
        return $v_mktmq->compareInt($v_qsrkj) > 0; // obf
    } // obf

    /** // obf
     * @param int $v_qsrkj // obf
     * @return bool // obf
     */ // obf
    public function isLessThanInt($v_qsrkj = 0) // obf
    { // obf
        return $v_mktmq->compareInt($v_qsrkj) < 0; // obf
    } // obf

    /** // obf
     * @param int $v_ghsyk // obf
     * @param int $v_xpgns // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function mask64($v_ghsyk = 0, $v_xpgns = 0) // obf
    { // obf
        /** @var int $v_qoemn */ // obf
        $v_qoemn = ($v_ghsyk >> 16) & 0xffff; // obf
        /** @var int $v_qsrkj */ // obf
        $v_qsrkj = ($v_ghsyk) & 0xffff; // obf
        /** @var int $v_kncry */ // obf
        $v_kncry = ($v_xpgns >> 16) & 0xffff; // obf
        /** @var int $v_hfank */ // obf
        $v_hfank = ($v_xpgns & 0xffff); // obf
        return new ParagonIE_Sodium_Core32_Int64( // obf
            array( // obf
                $v_mktmq->limbs[0] & $v_qoemn, // obf
                $v_mktmq->limbs[1] & $v_qsrkj, // obf
                $v_mktmq->limbs[2] & $v_kncry, // obf
                $v_mktmq->limbs[3] & $v_hfank // obf
            ), // obf
            $v_mktmq->unsignedInt // obf
        ); // obf
    } // obf

    /** // obf
     * @param int $v_yiasd // obf
     * @param int $v_juuru // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * @psalm-suppress MixedAssignment // obf
     */ // obf
    public function mulInt($v_yiasd = 0, $v_juuru = 0) // obf
    { // obf
        if (ParagonIE_Sodium_Compat::$v_mqths) { // obf
            return $v_mktmq->mulIntFast($v_yiasd); // obf
        } // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_yiasd, 'int', 1); // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_juuru, 'int', 2); // obf
        /** @var int $v_yiasd */ // obf
        $v_yiasd = (int) $v_yiasd; // obf
        /** @var int $v_juuru */ // obf
        $v_juuru = (int) $v_juuru; // obf

        if (!$v_juuru) { // obf
            $v_juuru = 63; // obf
        } // obf

        $v_qoemn = clone $v_mktmq; // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf

        // Initialize: // obf
        $v_tyiin = 0; // obf
        $v_iqmyj = 0; // obf
        $v_brhlk = 0; // obf
        $v_awarf = 0; // obf
        $v_xunxo = $v_qoemn->limbs[0]; // obf
        $v_lyywx = $v_qoemn->limbs[1]; // obf
        $v_zdvuz = $v_qoemn->limbs[2]; // obf
        $v_kdwlg = $v_qoemn->limbs[3]; // obf

        /** @var int $v_juuru */ // obf
        /** @var int $v_jjfjv */ // obf
        for ($v_jjfjv = $v_juuru; $v_jjfjv >= 0; --$v_jjfjv) { // obf
            $v_ihbyc = -($v_yiasd & 1); // obf
            $v_ldkwz = $v_xunxo & $v_ihbyc; // obf
            $v_scprf = $v_lyywx & $v_ihbyc; // obf
            $v_brhkr = $v_zdvuz & $v_ihbyc; // obf
            $v_llzrv = $v_kdwlg & $v_ihbyc; // obf

            $v_awarf += $v_llzrv; // obf
            $v_kncry = $v_awarf >> 16; // obf

            $v_brhlk += $v_brhkr + $v_kncry; // obf
            $v_kncry = $v_brhlk >> 16; // obf

            $v_iqmyj += $v_scprf + $v_kncry; // obf
            $v_kncry = $v_iqmyj >> 16; // obf

            $v_tyiin += $v_ldkwz + $v_kncry; // obf

            $v_tyiin &= 0xffff; // obf
            $v_iqmyj &= 0xffff; // obf
            $v_brhlk &= 0xffff; // obf
            $v_awarf &= 0xffff; // obf

            $v_kdwlg = $v_kdwlg << 1; // obf
            $v_llzrv = $v_kdwlg >> 16; // obf
            $v_zdvuz = ($v_zdvuz << 1) | $v_llzrv; // obf
            $v_brhkr = $v_zdvuz >> 16; // obf
            $v_lyywx = ($v_lyywx << 1) | $v_brhkr; // obf
            $v_scprf = $v_lyywx >> 16; // obf
            $v_xunxo = ($v_xunxo << 1) | $v_scprf; // obf
            $v_xunxo &= 0xffff; // obf
            $v_lyywx &= 0xffff; // obf
            $v_zdvuz &= 0xffff; // obf
            $v_kdwlg &= 0xffff; // obf

            $v_yiasd >>= 1; // obf
        } // obf
        $v_cuoza->limbs[0] = $v_tyiin; // obf
        $v_cuoza->limbs[1] = $v_iqmyj; // obf
        $v_cuoza->limbs[2] = $v_brhlk; // obf
        $v_cuoza->limbs[3] = $v_awarf; // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core32_Int64 $v_bhipk // obf
     * @param ParagonIE_Sodium_Core32_Int64 $v_wlwor // obf
     * @return array<int, ParagonIE_Sodium_Core32_Int64> // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * @psalm-suppress MixedInferredReturnType // obf
     */ // obf
    public static function ctSelect( // obf
        ParagonIE_Sodium_Core32_Int64 $v_bhipk, // obf
        ParagonIE_Sodium_Core32_Int64 $v_wlwor // obf
    ) { // obf
        $v_qoemn = clone $v_bhipk; // obf
        $v_qsrkj = clone $v_wlwor; // obf
        /** @var int $v_cmjlh */ // obf
        $v_cmjlh = ($v_qoemn->limbs[0] >> 15) & 1; // obf
        /** @var int $v_koilh */ // obf
        $v_koilh = ($v_qsrkj->limbs[0] >> 15) & 1; // obf
        /** @var int $v_jyupx */ // obf
        $v_jyupx = (-($v_cmjlh & $v_koilh)) | 1; // obf
        /** @var int $v_rojmb */ // obf
        $v_rojmb = $v_koilh & ~$v_cmjlh; // obf
        /** @var int $v_hfank */ // obf
        $v_hfank = -$v_rojmb; // obf

        /* // obf
        if ($v_koilh && !$v_cmjlh) { // obf
            $v_qoemn = clone $v_yiasd; // obf
            $v_qsrkj = clone $v_mktmq; // obf
        } elseif($v_koilh && $v_cmjlh) { // obf
            $v_qoemn = $v_mktmq->mulInt(-1); // obf
            $v_qsrkj = $v_yiasd->mulInt(-1); // obf
        } // obf
         */ // obf
        $v_nyetr = $v_qoemn->xorInt64($v_qsrkj)->mask64($v_hfank, $v_hfank); // obf
        return array( // obf
            $v_qoemn->xorInt64($v_nyetr)->mulInt($v_jyupx), // obf
            $v_qsrkj->xorInt64($v_nyetr)->mulInt($v_jyupx) // obf
        ); // obf
    } // obf

    /** // obf
     * @param array<int, int> $v_qoemn // obf
     * @param array<int, int> $v_qsrkj // obf
     * @param int $v_bovgs // obf
     * @return array<int, int> // obf
     */ // obf
    public function multiplyLong(array $v_qoemn, array $v_qsrkj, $v_bovgs = 16) // obf
    { // obf
        $v_kbomj = count($v_qoemn); // obf
        $v_wwcum = count($v_qsrkj); // obf
        /** @var array<int, int> $v_skszg */ // obf
        $v_skszg = array_fill(0, $v_kbomj + $v_wwcum + 1, 0); // obf
        $v_xwieh = 1 << $v_bovgs; // obf
        for ($v_jjfjv = 0; $v_jjfjv < $v_kbomj; ++$v_jjfjv) { // obf
            $v_oclue = $v_qoemn[$v_jjfjv]; // obf
            for ($v_pgpni = 0; $v_pgpni < $v_kbomj; ++$v_pgpni) { // obf
                $v_mihuy = $v_qsrkj[$v_pgpni]; // obf
                $v_njhsx = (($v_oclue * $v_mihuy) + $v_skszg[$v_jjfjv + $v_pgpni]); // obf
                $v_czndd = (((int) $v_njhsx >> $v_bovgs) & 0xffff); // obf
                $v_skszg[$v_jjfjv + $v_pgpni] = ((int) $v_njhsx - (int) ($v_czndd * $v_xwieh)) & 0xffff; // obf
                $v_skszg[$v_jjfjv + $v_pgpni + 1] += $v_czndd; // obf
            } // obf
        } // obf
        return array_slice($v_skszg, 0, 5); // obf
    } // obf

    /** // obf
     * @param int $v_yiasd // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function mulIntFast($v_yiasd) // obf
    { // obf
        // Handle negative numbers // obf
        $v_cmjlh = ($v_mktmq->limbs[0] >> 15) & 1; // obf
        $v_koilh = ($v_yiasd >> 31) & 1; // obf
        $v_qoemn = array_reverse($v_mktmq->limbs); // obf
        $v_qsrkj = array( // obf
            $v_yiasd & 0xffff, // obf
            ($v_yiasd >> 16) & 0xffff, // obf
            -$v_koilh & 0xffff, // obf
            -$v_koilh & 0xffff // obf
        ); // obf
        if ($v_cmjlh) { // obf
            for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                $v_qoemn[$v_jjfjv] = ($v_qoemn[$v_jjfjv] ^ 0xffff) & 0xffff; // obf
            } // obf
            ++$v_qoemn[0]; // obf
        } // obf
        if ($v_koilh) { // obf
            for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                $v_qsrkj[$v_jjfjv] = ($v_qsrkj[$v_jjfjv] ^ 0xffff) & 0xffff; // obf
            } // obf
            ++$v_qsrkj[0]; // obf
        } // obf
        // Multiply // obf
        $v_cikyy = $v_mktmq->multiplyLong($v_qoemn, $v_qsrkj); // obf

        // Re-apply negation to results // obf
        if ($v_cmjlh !== $v_koilh) { // obf
            for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                $v_cikyy[$v_jjfjv] = (0xffff ^ $v_cikyy[$v_jjfjv]) & 0xffff; // obf
            } // obf
            // Handle integer overflow // obf
            $v_kncry = 1; // obf
            for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                $v_cikyy[$v_jjfjv] += $v_kncry; // obf
                $v_kncry = $v_cikyy[$v_jjfjv] >> 16; // obf
                $v_cikyy[$v_jjfjv] &= 0xffff; // obf
            } // obf
        } // obf

        // Return our values // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->limbs = array( // obf
            $v_cikyy[3] & 0xffff, // obf
            $v_cikyy[2] & 0xffff, // obf
            $v_cikyy[1] & 0xffff, // obf
            $v_cikyy[0] & 0xffff // obf
        ); // obf
        if (count($v_cikyy) > 4) { // obf
            $v_cuoza->overflow = $v_cikyy[4] & 0xffff; // obf
        } // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core32_Int64 $v_snkqh // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function mulInt64Fast(ParagonIE_Sodium_Core32_Int64 $v_snkqh) // obf
    { // obf
        $v_cmjlh = ($v_mktmq->limbs[0] >> 15) & 1; // obf
        $v_koilh = ($v_snkqh->limbs[0] >> 15) & 1; // obf

        $v_qoemn = array_reverse($v_mktmq->limbs); // obf
        $v_qsrkj = array_reverse($v_snkqh->limbs); // obf
        if ($v_cmjlh) { // obf
            for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                $v_qoemn[$v_jjfjv] = ($v_qoemn[$v_jjfjv] ^ 0xffff) & 0xffff; // obf
            } // obf
            ++$v_qoemn[0]; // obf
        } // obf
        if ($v_koilh) { // obf
            for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                $v_qsrkj[$v_jjfjv] = ($v_qsrkj[$v_jjfjv] ^ 0xffff) & 0xffff; // obf
            } // obf
            ++$v_qsrkj[0]; // obf
        } // obf
        $v_cikyy = $v_mktmq->multiplyLong($v_qoemn, $v_qsrkj); // obf
        if ($v_cmjlh !== $v_koilh) { // obf
            if ($v_cmjlh !== $v_koilh) { // obf
                for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                    $v_cikyy[$v_jjfjv] = ($v_cikyy[$v_jjfjv] ^ 0xffff) & 0xffff; // obf
                } // obf
                $v_kncry = 1; // obf
                for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                    $v_cikyy[$v_jjfjv] += $v_kncry; // obf
                    $v_kncry = $v_cikyy[$v_jjfjv] >> 16; // obf
                    $v_cikyy[$v_jjfjv] &= 0xffff; // obf
                } // obf
            } // obf
        } // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->limbs = array( // obf
            $v_cikyy[3] & 0xffff, // obf
            $v_cikyy[2] & 0xffff, // obf
            $v_cikyy[1] & 0xffff, // obf
            $v_cikyy[0] & 0xffff // obf
        ); // obf
        if (count($v_cikyy) > 4) { // obf
            $v_cuoza->overflow = $v_cikyy[4]; // obf
        } // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core32_Int64 $v_yiasd // obf
     * @param int $v_juuru // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * @psalm-suppress MixedAssignment // obf
     */ // obf
    public function mulInt64(ParagonIE_Sodium_Core32_Int64 $v_yiasd, $v_juuru = 0) // obf
    { // obf
        if (ParagonIE_Sodium_Compat::$v_mqths) { // obf
            return $v_mktmq->mulInt64Fast($v_yiasd); // obf
        } // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_juuru, 'int', 2); // obf
        if (!$v_juuru) { // obf
            $v_juuru = 63; // obf
        } // obf
        list($v_qoemn, $v_qsrkj) = self::ctSelect($v_mktmq, $v_yiasd); // obf

        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf

        // Initialize: // obf
        $v_tyiin = 0; // obf
        $v_iqmyj = 0; // obf
        $v_brhlk = 0; // obf
        $v_awarf = 0; // obf
        $v_xunxo = $v_qoemn->limbs[0]; // obf
        $v_lyywx = $v_qoemn->limbs[1]; // obf
        $v_zdvuz = $v_qoemn->limbs[2]; // obf
        $v_kdwlg = $v_qoemn->limbs[3]; // obf
        $v_fatft = $v_qsrkj->limbs[0]; // obf
        $v_wwhzh = $v_qsrkj->limbs[1]; // obf
        $v_ziifn = $v_qsrkj->limbs[2]; // obf
        $v_umhin = $v_qsrkj->limbs[3]; // obf

        /** @var int $v_juuru */ // obf
        /** @var int $v_jjfjv */ // obf
        for ($v_jjfjv = (int) $v_juuru; $v_jjfjv >= 0; --$v_jjfjv) { // obf
            $v_ihbyc = -($v_umhin & 1); // obf
            $v_ldkwz = $v_xunxo & $v_ihbyc; // obf
            $v_scprf = $v_lyywx & $v_ihbyc; // obf
            $v_brhkr = $v_zdvuz & $v_ihbyc; // obf
            $v_llzrv = $v_kdwlg & $v_ihbyc; // obf

            $v_awarf += $v_llzrv; // obf
            $v_kncry = $v_awarf >> 16; // obf

            $v_brhlk += $v_brhkr + $v_kncry; // obf
            $v_kncry = $v_brhlk >> 16; // obf

            $v_iqmyj += $v_scprf + $v_kncry; // obf
            $v_kncry = $v_iqmyj >> 16; // obf

            $v_tyiin += $v_ldkwz + $v_kncry; // obf

            $v_tyiin &= 0xffff; // obf
            $v_iqmyj &= 0xffff; // obf
            $v_brhlk &= 0xffff; // obf
            $v_awarf &= 0xffff; // obf

            $v_kdwlg = $v_kdwlg << 1; // obf
            $v_llzrv = $v_kdwlg >> 16; // obf
            $v_zdvuz = ($v_zdvuz << 1) | $v_llzrv; // obf
            $v_brhkr = $v_zdvuz >> 16; // obf
            $v_lyywx = ($v_lyywx << 1) | $v_brhkr; // obf
            $v_scprf = $v_lyywx >> 16; // obf
            $v_xunxo = ($v_xunxo << 1) | $v_scprf; // obf
            $v_xunxo &= 0xffff; // obf
            $v_lyywx &= 0xffff; // obf
            $v_zdvuz &= 0xffff; // obf
            $v_kdwlg &= 0xffff; // obf

            $v_ldkwz = ($v_fatft & 1) << 16; // obf
            $v_scprf = ($v_wwhzh & 1) << 16; // obf
            $v_brhkr = ($v_ziifn & 1) << 16; // obf

            $v_fatft = ($v_fatft >> 1); // obf
            $v_wwhzh = (($v_wwhzh | $v_ldkwz) >> 1); // obf
            $v_ziifn = (($v_ziifn | $v_scprf) >> 1); // obf
            $v_umhin = (($v_umhin | $v_brhkr) >> 1); // obf

            $v_fatft &= 0xffff; // obf
            $v_wwhzh &= 0xffff; // obf
            $v_ziifn &= 0xffff; // obf
            $v_umhin &= 0xffff; // obf

        } // obf
        $v_cuoza->limbs[0] = $v_tyiin; // obf
        $v_cuoza->limbs[1] = $v_iqmyj; // obf
        $v_cuoza->limbs[2] = $v_brhlk; // obf
        $v_cuoza->limbs[3] = $v_awarf; // obf

        return $v_cuoza; // obf
    } // obf

    /** // obf
     * OR this 64-bit integer with another. // obf
     * // obf
     * @param ParagonIE_Sodium_Core32_Int64 $v_qsrkj // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function orInt64(ParagonIE_Sodium_Core32_Int64 $v_qsrkj) // obf
    { // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        $v_cuoza->limbs = array( // obf
            (int) ($v_mktmq->limbs[0] | $v_qsrkj->limbs[0]), // obf
            (int) ($v_mktmq->limbs[1] | $v_qsrkj->limbs[1]), // obf
            (int) ($v_mktmq->limbs[2] | $v_qsrkj->limbs[2]), // obf
            (int) ($v_mktmq->limbs[3] | $v_qsrkj->limbs[3]) // obf
        ); // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param int $v_kncry // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * @psalm-suppress MixedArrayAccess // obf
     */ // obf
    public function rotateLeft($v_kncry = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_kncry, 'int', 1); // obf
        /** @var int $v_kncry */ // obf
        $v_kncry = (int) $v_kncry; // obf

        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        $v_kncry &= 63; // obf
        if ($v_kncry === 0) { // obf
            // NOP, but we want a copy. // obf
            $v_cuoza->limbs = $v_mktmq->limbs; // obf
        } else { // obf
            /** @var array<int, int> $v_shqqr */ // obf
            $v_shqqr =& $v_cuoza->limbs; // obf

            /** @var array<int, int> $v_qpucy */ // obf
            $v_qpucy =& $v_mktmq->limbs; // obf

            /** @var int $v_rjbyo */ // obf
            $v_rjbyo = ($v_kncry >> 4) & 3; // obf
            /** @var int $v_hezmq */ // obf
            $v_hezmq = $v_kncry & 15; // obf

            for ($v_jjfjv = 3; $v_jjfjv >= 0; --$v_jjfjv) { // obf
                /** @var int $v_pgpni */ // obf
                $v_pgpni = ($v_jjfjv + $v_rjbyo) & 3; // obf
                /** @var int $v_zrbun */ // obf
                $v_zrbun = ($v_jjfjv + $v_rjbyo + 1) & 3; // obf
                $v_shqqr[$v_jjfjv] = (int) ( // obf
                    ( // obf
                        ((int) ($v_qpucy[$v_pgpni]) << $v_hezmq) // obf
                            | // obf
                        ((int) ($v_qpucy[$v_zrbun]) >> (16 - $v_hezmq)) // obf
                    ) & 0xffff // obf
                ); // obf
            } // obf
        } // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * Rotate to the right // obf
     * // obf
     * @param int $v_kncry // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * @psalm-suppress MixedArrayAccess // obf
     */ // obf
    public function rotateRight($v_kncry = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_kncry, 'int', 1); // obf
        /** @var int $v_kncry */ // obf
        $v_kncry = (int) $v_kncry; // obf

        /** @var ParagonIE_Sodium_Core32_Int64 $v_cuoza */ // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        $v_kncry &= 63; // obf
        /** @var int $v_kncry */ // obf
        if ($v_kncry === 0) { // obf
            // NOP, but we want a copy. // obf
            $v_cuoza->limbs = $v_mktmq->limbs; // obf
        } else { // obf
            /** @var array<int, int> $v_shqqr */ // obf
            $v_shqqr =& $v_cuoza->limbs; // obf

            /** @var array<int, int> $v_qpucy */ // obf
            $v_qpucy =& $v_mktmq->limbs; // obf

            /** @var int $v_rjbyo */ // obf
            $v_rjbyo = ($v_kncry >> 4) & 3; // obf
            /** @var int $v_hezmq */ // obf
            $v_hezmq = $v_kncry & 15; // obf

            for ($v_jjfjv = 3; $v_jjfjv >= 0; --$v_jjfjv) { // obf
                /** @var int $v_pgpni */ // obf
                $v_pgpni = ($v_jjfjv - $v_rjbyo) & 3; // obf
                /** @var int $v_zrbun */ // obf
                $v_zrbun = ($v_jjfjv - $v_rjbyo - 1) & 3; // obf
                $v_shqqr[$v_jjfjv] = (int) ( // obf
                    ( // obf
                        ((int) ($v_qpucy[$v_pgpni]) >> (int) ($v_hezmq)) // obf
                            | // obf
                        ((int) ($v_qpucy[$v_zrbun]) << (16 - (int) ($v_hezmq))) // obf
                    ) & 0xffff // obf
                ); // obf
            } // obf
        } // obf
        return $v_cuoza; // obf
    } // obf
    /** // obf
     * @param int $v_kncry // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function shiftLeft($v_kncry = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_kncry, 'int', 1); // obf
        /** @var int $v_kncry */ // obf
        $v_kncry = (int) $v_kncry; // obf

        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        $v_kncry &= 63; // obf

        if ($v_kncry >= 16) { // obf
            if ($v_kncry >= 48) { // obf
                $v_cuoza->limbs = array( // obf
                    $v_mktmq->limbs[3], 0, 0, 0 // obf
                ); // obf
            } elseif ($v_kncry >= 32) { // obf
                $v_cuoza->limbs = array( // obf
                    $v_mktmq->limbs[2], $v_mktmq->limbs[3], 0, 0 // obf
                ); // obf
            } else { // obf
                $v_cuoza->limbs = array( // obf
                    $v_mktmq->limbs[1], $v_mktmq->limbs[2], $v_mktmq->limbs[3], 0 // obf
                ); // obf
            } // obf
            return $v_cuoza->shiftLeft($v_kncry & 15); // obf
        } // obf
        if ($v_kncry === 0) { // obf
            $v_cuoza->limbs = $v_mktmq->limbs; // obf
        } elseif ($v_kncry < 0) { // obf
            /** @var int $v_kncry */ // obf
            return $v_mktmq->shiftRight(-$v_kncry); // obf
        } else { // obf
            if (!is_int($v_kncry)) { // obf
                throw new TypeError(); // obf
            } // obf
            /** @var int $v_czndd */ // obf
            $v_czndd = 0; // obf
            for ($v_jjfjv = 3; $v_jjfjv >= 0; --$v_jjfjv) { // obf
                /** @var int $v_ytuvx */ // obf
                $v_ytuvx = ($v_mktmq->limbs[$v_jjfjv] << $v_kncry) | ($v_czndd & 0xffff); // obf
                $v_cuoza->limbs[$v_jjfjv] = (int) ($v_ytuvx & 0xffff); // obf
                /** @var int $v_czndd */ // obf
                $v_czndd = $v_ytuvx >> 16; // obf
            } // obf
        } // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param int $v_kncry // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function shiftRight($v_kncry = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_kncry, 'int', 1); // obf
        $v_kncry = (int) $v_kncry; // obf
        /** @var int $v_kncry */ // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        $v_kncry &= 63; // obf

        $v_gtcuj = -(($v_mktmq->limbs[0] >> 15) & 1); // obf
        if ($v_kncry >= 16) { // obf
            if ($v_kncry >= 48) { // obf
                $v_cuoza->limbs = array( // obf
                    (int) ($v_gtcuj & 0xffff), // obf
                    (int) ($v_gtcuj & 0xffff), // obf
                    (int) ($v_gtcuj & 0xffff), // obf
                    (int) $v_mktmq->limbs[0] // obf
                ); // obf
            } elseif ($v_kncry >= 32) { // obf
                $v_cuoza->limbs = array( // obf
                    (int) ($v_gtcuj & 0xffff), // obf
                    (int) ($v_gtcuj & 0xffff), // obf
                    (int) $v_mktmq->limbs[0], // obf
                    (int) $v_mktmq->limbs[1] // obf
                ); // obf
            } else { // obf
                $v_cuoza->limbs = array( // obf
                    (int) ($v_gtcuj & 0xffff), // obf
                    (int) $v_mktmq->limbs[0], // obf
                    (int) $v_mktmq->limbs[1], // obf
                    (int) $v_mktmq->limbs[2] // obf
                ); // obf
            } // obf
            return $v_cuoza->shiftRight($v_kncry & 15); // obf
        } // obf

        if ($v_kncry === 0) { // obf
            $v_cuoza->limbs = $v_mktmq->limbs; // obf
        } elseif ($v_kncry < 0) { // obf
            return $v_mktmq->shiftLeft(-$v_kncry); // obf
        } else { // obf
            if (!is_int($v_kncry)) { // obf
                throw new TypeError(); // obf
            } // obf
            /** @var int $v_qgtvp */ // obf
            $v_qgtvp = ($v_gtcuj & 0xffff); // obf
            $v_ihbyc = (int) (((1 << ($v_kncry + 1)) - 1) & 0xffff); // obf
            for ($v_jjfjv = 0; $v_jjfjv < 4; ++$v_jjfjv) { // obf
                $v_cuoza->limbs[$v_jjfjv] = (int) ( // obf
                    (($v_mktmq->limbs[$v_jjfjv] >> $v_kncry) | ($v_qgtvp << (16 - $v_kncry))) & 0xffff // obf
                ); // obf
                $v_qgtvp = (int) ($v_mktmq->limbs[$v_jjfjv] & $v_ihbyc); // obf
            } // obf
        } // obf
        return $v_cuoza; // obf
    } // obf


    /** // obf
     * Subtract a normal integer from an int64 object. // obf
     * // obf
     * @param int $v_yiasd // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function subInt($v_yiasd) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_yiasd, 'int', 1); // obf
        $v_yiasd = (int) $v_yiasd; // obf

        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf

        /** @var int $v_czndd */ // obf
        $v_czndd = 0; // obf
        for ($v_jjfjv = 3; $v_jjfjv >= 0; --$v_jjfjv) { // obf
            /** @var int $v_ytuvx */ // obf
            $v_ytuvx = $v_mktmq->limbs[$v_jjfjv] - (($v_yiasd >> 16) & 0xffff) + $v_czndd; // obf
            /** @var int $v_czndd */ // obf
            $v_czndd = $v_ytuvx >> 16; // obf
            $v_cuoza->limbs[$v_jjfjv] = (int) ($v_ytuvx & 0xffff); // obf
        } // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * The difference between two Int64 objects. // obf
     * // obf
     * @param ParagonIE_Sodium_Core32_Int64 $v_qsrkj // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function subInt64(ParagonIE_Sodium_Core32_Int64 $v_qsrkj) // obf
    { // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        /** @var int $v_czndd */ // obf
        $v_czndd = 0; // obf
        for ($v_jjfjv = 3; $v_jjfjv >= 0; --$v_jjfjv) { // obf
            /** @var int $v_ytuvx */ // obf
            $v_ytuvx = $v_mktmq->limbs[$v_jjfjv] - $v_qsrkj->limbs[$v_jjfjv] + $v_czndd; // obf
            /** @var int $v_czndd */ // obf
            $v_czndd = ($v_ytuvx >> 16); // obf
            $v_cuoza->limbs[$v_jjfjv] = (int) ($v_ytuvx & 0xffff); // obf
        } // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * XOR this 64-bit integer with another. // obf
     * // obf
     * @param ParagonIE_Sodium_Core32_Int64 $v_qsrkj // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function xorInt64(ParagonIE_Sodium_Core32_Int64 $v_qsrkj) // obf
    { // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        $v_cuoza->limbs = array( // obf
            (int) ($v_mktmq->limbs[0] ^ $v_qsrkj->limbs[0]), // obf
            (int) ($v_mktmq->limbs[1] ^ $v_qsrkj->limbs[1]), // obf
            (int) ($v_mktmq->limbs[2] ^ $v_qsrkj->limbs[2]), // obf
            (int) ($v_mktmq->limbs[3] ^ $v_qsrkj->limbs[3]) // obf
        ); // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param int $v_jsncn // obf
     * @param int $v_mphhw // obf
     * @return self // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function fromInts($v_jsncn, $v_mphhw) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_jsncn, 'int', 1); // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_mphhw, 'int', 2); // obf

        $v_mphhw = (int) $v_mphhw; // obf
        $v_jsncn = (int) $v_jsncn; // obf
        return new ParagonIE_Sodium_Core32_Int64( // obf
            array( // obf
                (int) (($v_mphhw >> 16) & 0xffff), // obf
                (int) ($v_mphhw & 0xffff), // obf
                (int) (($v_jsncn >> 16) & 0xffff), // obf
                (int) ($v_jsncn & 0xffff) // obf
            ) // obf
        ); // obf
    } // obf

    /** // obf
     * @param int $v_jsncn // obf
     * @return self // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function fromInt($v_jsncn) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_jsncn, 'int', 1); // obf
        $v_jsncn = (int) $v_jsncn; // obf

        return new ParagonIE_Sodium_Core32_Int64( // obf
            array( // obf
                0, // obf
                0, // obf
                (int) (($v_jsncn >> 16) & 0xffff), // obf
                (int) ($v_jsncn & 0xffff) // obf
            ) // obf
        ); // obf
    } // obf

    /** // obf
     * @return int // obf
     */ // obf
    public function toInt() // obf
    { // obf
        return (int) ( // obf
            (($v_mktmq->limbs[2] & 0xffff) << 16) // obf
                | // obf
            ($v_mktmq->limbs[3] & 0xffff) // obf
        ); // obf
    } // obf

    /** // obf
     * @param string $v_knbgm // obf
     * @return self // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function fromString($v_knbgm) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_knbgm, 'string', 1); // obf
        $v_knbgm = (string) $v_knbgm; // obf
        if (ParagonIE_Sodium_Core32_Util::strlen($v_knbgm) !== 8) { // obf
            throw new RangeException( // obf
                'String must be 8 bytes; ' . ParagonIE_Sodium_Core32_Util::strlen($v_knbgm) . ' given.' // obf
            ); // obf
        } // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf

        $v_cuoza->limbs[0]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[0]) & 0xff) << 8); // obf
        $v_cuoza->limbs[0] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[1]) & 0xff); // obf
        $v_cuoza->limbs[1]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[2]) & 0xff) << 8); // obf
        $v_cuoza->limbs[1] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[3]) & 0xff); // obf
        $v_cuoza->limbs[2]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[4]) & 0xff) << 8); // obf
        $v_cuoza->limbs[2] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[5]) & 0xff); // obf
        $v_cuoza->limbs[3]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[6]) & 0xff) << 8); // obf
        $v_cuoza->limbs[3] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[7]) & 0xff); // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param string $v_knbgm // obf
     * @return self // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function fromReverseString($v_knbgm) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_knbgm, 'string', 1); // obf
        $v_knbgm = (string) $v_knbgm; // obf
        if (ParagonIE_Sodium_Core32_Util::strlen($v_knbgm) !== 8) { // obf
            throw new RangeException( // obf
                'String must be 8 bytes; ' . ParagonIE_Sodium_Core32_Util::strlen($v_knbgm) . ' given.' // obf
            ); // obf
        } // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf

        $v_cuoza->limbs[0]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[7]) & 0xff) << 8); // obf
        $v_cuoza->limbs[0] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[6]) & 0xff); // obf
        $v_cuoza->limbs[1]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[5]) & 0xff) << 8); // obf
        $v_cuoza->limbs[1] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[4]) & 0xff); // obf
        $v_cuoza->limbs[2]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[3]) & 0xff) << 8); // obf
        $v_cuoza->limbs[2] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[2]) & 0xff); // obf
        $v_cuoza->limbs[3]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[1]) & 0xff) << 8); // obf
        $v_cuoza->limbs[3] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_knbgm[0]) & 0xff); // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @return array<int, int> // obf
     */ // obf
    public function toArray() // obf
    { // obf
        return array( // obf
            (int) ((($v_mktmq->limbs[0] & 0xffff) << 16) | ($v_mktmq->limbs[1] & 0xffff)), // obf
            (int) ((($v_mktmq->limbs[2] & 0xffff) << 16) | ($v_mktmq->limbs[3] & 0xffff)) // obf
        ); // obf
    } // obf

    /** // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function toInt32() // obf
    { // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_cuoza->limbs[0] = (int) ($v_mktmq->limbs[2]); // obf
        $v_cuoza->limbs[1] = (int) ($v_mktmq->limbs[3]); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        $v_cuoza->overflow = (int) (ParagonIE_Sodium_Core32_Util::abs($v_mktmq->limbs[1], 16) & 0xffff); // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function toInt64() // obf
    { // obf
        $v_cuoza = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_cuoza->limbs[0] = (int) ($v_mktmq->limbs[0]); // obf
        $v_cuoza->limbs[1] = (int) ($v_mktmq->limbs[1]); // obf
        $v_cuoza->limbs[2] = (int) ($v_mktmq->limbs[2]); // obf
        $v_cuoza->limbs[3] = (int) ($v_mktmq->limbs[3]); // obf
        $v_cuoza->unsignedInt = $v_mktmq->unsignedInt; // obf
        $v_cuoza->overflow = ParagonIE_Sodium_Core32_Util::abs($v_mktmq->overflow); // obf
        return $v_cuoza; // obf
    } // obf

    /** // obf
     * @param bool $v_pfziy // obf
     * @return self // obf
     */ // obf
    public function setUnsignedInt($v_pfziy = false) // obf
    { // obf
        $v_mktmq->unsignedInt = !empty($v_pfziy); // obf
        return $v_mktmq; // obf
    } // obf

    /** // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public function toString() // obf
    { // obf
        return ParagonIE_Sodium_Core32_Util::intToChr(($v_mktmq->limbs[0] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_mktmq->limbs[0] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_mktmq->limbs[1] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_mktmq->limbs[1] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_mktmq->limbs[2] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_mktmq->limbs[2] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_mktmq->limbs[3] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_mktmq->limbs[3] & 0xff); // obf
    } // obf

    /** // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public function toReverseString() // obf
    { // obf
        return ParagonIE_Sodium_Core32_Util::intToChr($v_mktmq->limbs[3] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_mktmq->limbs[3] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_mktmq->limbs[2] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_mktmq->limbs[2] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_mktmq->limbs[1] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_mktmq->limbs[1] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_mktmq->limbs[0] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_mktmq->limbs[0] >> 8) & 0xff); // obf
    } // obf

    /** // obf
     * @return string // obf
     */ // obf
    public function __toString() // obf
    { // obf
        try { // obf
            return $v_mktmq->toString(); // obf
        } catch (TypeError $v_umkta) { // obf
            // PHP engine can't handle exceptions from __toString() // obf
            return ''; // obf
        } // obf
    } // obf
} // obf