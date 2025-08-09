

<?php // obf

/** // obf
 * Class ParagonIE_Sodium_Core32_Int32 // obf
 * // obf
 * Encapsulates a 32-bit integer. // obf
 * // obf
 * These are immutable. It always returns a new instance. // obf
 */ // obf
class ParagonIE_Sodium_Core32_Int32 // obf
{ // obf
    /** // obf
     * @var array<int, int> - two 16-bit integers // obf
     * // obf
     * 0 is the higher 16 bits // obf
     * 1 is the lower 16 bits // obf
     */ // obf
    public $v_dzsvm = array(0, 0); // obf

    /** // obf
     * @var int // obf
     */ // obf
    public $v_shnrr = 0; // obf

    /** // obf
     * @var bool // obf
     */ // obf
    public $v_teeba = false; // obf

    /** // obf
     * ParagonIE_Sodium_Core32_Int32 constructor. // obf
     * @param array $v_wgfyq // obf
     * @param bool $v_teeba // obf
     */ // obf
    public function __construct($v_wgfyq = array(0, 0), $v_teeba = false) // obf
    { // obf
        $v_jjvuu->limbs = array( // obf
            (int) $v_wgfyq[0], // obf
            (int) $v_wgfyq[1] // obf
        ); // obf
        $v_jjvuu->overflow = 0; // obf
        $v_jjvuu->unsignedInt = $v_teeba; // obf
    } // obf

    /** // obf
     * Adds two int32 objects // obf
     * // obf
     * @param ParagonIE_Sodium_Core32_Int32 $v_vivhn // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function addInt32(ParagonIE_Sodium_Core32_Int32 $v_vivhn) // obf
    { // obf
        $v_fsegw = $v_jjvuu->limbs[0]; // obf
        $v_wlemu = $v_jjvuu->limbs[1]; // obf
        $v_cqbyu = $v_vivhn->limbs[0]; // obf
        $v_yvxeh = $v_vivhn->limbs[1]; // obf

        $v_kpfmn = $v_wlemu + ($v_yvxeh & 0xffff); // obf
        $v_llpkq = $v_kpfmn >> 16; // obf

        $v_qgwlf = $v_fsegw + ($v_cqbyu & 0xffff) + $v_llpkq; // obf
        $v_llpkq = $v_qgwlf >> 16; // obf

        $v_qgwlf &= 0xffff; // obf
        $v_kpfmn &= 0xffff; // obf

        $v_fweog = new ParagonIE_Sodium_Core32_Int32( // obf
            array($v_qgwlf, $v_kpfmn) // obf
        ); // obf
        $v_fweog->overflow = $v_llpkq; // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * Adds a normal integer to an int32 object // obf
     * // obf
     * @param int $v_dflpj // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function addInt($v_dflpj) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_dflpj, 'int', 1); // obf
        /** @var int $v_dflpj */ // obf
        $v_dflpj = (int) $v_dflpj; // obf

        $v_dflpj = (int) $v_dflpj; // obf

        $v_fsegw = $v_jjvuu->limbs[0]; // obf
        $v_wlemu = $v_jjvuu->limbs[1]; // obf

        $v_kpfmn = $v_wlemu + ($v_dflpj & 0xffff); // obf
        $v_llpkq = $v_kpfmn >> 16; // obf

        $v_qgwlf = $v_fsegw + (($v_dflpj >> 16) & 0xffff) + $v_llpkq; // obf
        $v_llpkq = $v_qgwlf >> 16; // obf
        $v_qgwlf &= 0xffff; // obf
        $v_kpfmn &= 0xffff; // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32( // obf
            array($v_qgwlf, $v_kpfmn) // obf
        ); // obf
        $v_fweog->overflow = $v_llpkq; // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param int $v_bgxno // obf
     * @return int // obf
     */ // obf
    public function compareInt($v_bgxno = 0) // obf
    { // obf
        $v_hoodl = 0; // obf
        $v_pfvtx = 1; // obf

        $v_iqsxz = 2; // obf
        $v_xrywf = 0; // obf
        while ($v_iqsxz > 0) { // obf
            --$v_iqsxz; // obf
            /** @var int $v_jfghx */ // obf
            $v_jfghx = $v_jjvuu->limbs[$v_iqsxz]; // obf
            /** @var int $v_mvbdt */ // obf
            $v_mvbdt = ($v_bgxno >> ($v_xrywf << 4)) & 0xffff; // obf
            /** @var int $v_hoodl */ // obf
            $v_hoodl |= (($v_mvbdt - $v_jfghx) >> 8) & $v_pfvtx; // obf
            /** @var int $v_pfvtx */ // obf
            $v_pfvtx &= (($v_mvbdt ^ $v_jfghx) - 1) >> 8; // obf
        } // obf
        return ($v_hoodl + $v_hoodl - $v_pfvtx) + 1; // obf
    } // obf

    /** // obf
     * @param int $v_phwpv // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function mask($v_phwpv = 0) // obf
    { // obf
        /** @var int $v_qnivf */ // obf
        $v_qnivf = ((int) $v_phwpv >> 16); // obf
        $v_qnivf &= 0xffff; // obf
        /** @var int $v_acaef */ // obf
        $v_acaef = ((int) $v_phwpv) & 0xffff; // obf
        return new ParagonIE_Sodium_Core32_Int32( // obf
            array( // obf
                (int) ($v_jjvuu->limbs[0] & $v_qnivf), // obf
                (int) ($v_jjvuu->limbs[1] & $v_acaef) // obf
            ), // obf
            $v_jjvuu->unsignedInt // obf
        ); // obf
    } // obf

    /** // obf
     * @param array<int, int> $v_wvbwm // obf
     * @param array<int, int> $v_bgxno // obf
     * @param int $v_mmeos // obf
     * @return array<int, int> // obf
     */ // obf
    public function multiplyLong(array $v_wvbwm, array $v_bgxno, $v_mmeos = 16) // obf
    { // obf
        $v_inuqb = count($v_wvbwm); // obf
        $v_fxxej = count($v_bgxno); // obf
        /** @var array<int, int> $v_ezcgo */ // obf
        $v_ezcgo = array_fill(0, $v_inuqb + $v_fxxej + 1, 0); // obf
        $v_mvqow = 1 << $v_mmeos; // obf
        for ($v_iqsxz = 0; $v_iqsxz < $v_inuqb; ++$v_iqsxz) { // obf
            $v_bgbqx = $v_wvbwm[$v_iqsxz]; // obf
            for ($v_xrywf = 0; $v_xrywf < $v_inuqb; ++$v_xrywf) { // obf
                $v_dgwao = $v_bgxno[$v_xrywf]; // obf
                $v_ghawa = ($v_bgbqx * $v_dgwao) + $v_ezcgo[$v_iqsxz + $v_xrywf]; // obf
                $v_llpkq = ((int) $v_ghawa >> $v_mmeos & 0xffff); // obf
                $v_ezcgo[$v_iqsxz + $v_xrywf] = ((int) $v_ghawa - (int) ($v_llpkq * $v_mvqow)) & 0xffff; // obf
                $v_ezcgo[$v_iqsxz + $v_xrywf + 1] += $v_llpkq; // obf
            } // obf
        } // obf
        return array_slice($v_ezcgo, 0, 5); // obf
    } // obf

    /** // obf
     * @param int $v_dflpj // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function mulIntFast($v_dflpj) // obf
    { // obf
        // Handle negative numbers // obf
        $v_jkqes = ($v_jjvuu->limbs[0] >> 15) & 1; // obf
        $v_muoux = ($v_dflpj >> 31) & 1; // obf
        $v_wvbwm = array_reverse($v_jjvuu->limbs); // obf
        $v_bgxno = array( // obf
            $v_dflpj & 0xffff, // obf
            ($v_dflpj >> 16) & 0xffff // obf
        ); // obf
        if ($v_jkqes) { // obf
            for ($v_iqsxz = 0; $v_iqsxz < 2; ++$v_iqsxz) { // obf
                $v_wvbwm[$v_iqsxz] = ($v_wvbwm[$v_iqsxz] ^ 0xffff) & 0xffff; // obf
            } // obf
            ++$v_wvbwm[0]; // obf
        } // obf
        if ($v_muoux) { // obf
            for ($v_iqsxz = 0; $v_iqsxz < 2; ++$v_iqsxz) { // obf
                $v_bgxno[$v_iqsxz] = ($v_bgxno[$v_iqsxz] ^ 0xffff) & 0xffff; // obf
            } // obf
            ++$v_bgxno[0]; // obf
        } // obf
        // Multiply // obf
        $v_famdt = $v_jjvuu->multiplyLong($v_wvbwm, $v_bgxno); // obf

        // Re-apply negation to results // obf
        if ($v_jkqes !== $v_muoux) { // obf
            for ($v_iqsxz = 0; $v_iqsxz < 2; ++$v_iqsxz) { // obf
                $v_famdt[$v_iqsxz] = (0xffff ^ $v_famdt[$v_iqsxz]) & 0xffff; // obf
            } // obf
            // Handle integer overflow // obf
            $v_prygy = 1; // obf
            for ($v_iqsxz = 0; $v_iqsxz < 2; ++$v_iqsxz) { // obf
                $v_famdt[$v_iqsxz] += $v_prygy; // obf
                $v_prygy = $v_famdt[$v_iqsxz] >> 16; // obf
                $v_famdt[$v_iqsxz] &= 0xffff; // obf
            } // obf
        } // obf

        // Return our values // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->limbs = array( // obf
            $v_famdt[1] & 0xffff, // obf
            $v_famdt[0] & 0xffff // obf
        ); // obf
        if (count($v_famdt) > 2) { // obf
            $v_fweog->overflow = $v_famdt[2] & 0xffff; // obf
        } // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core32_Int32 $v_yifqr // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function mulInt32Fast(ParagonIE_Sodium_Core32_Int32 $v_yifqr) // obf
    { // obf
        $v_jkqes = ($v_jjvuu->limbs[0] >> 15) & 1; // obf
        $v_muoux = ($v_yifqr->limbs[0] >> 15) & 1; // obf

        $v_wvbwm = array_reverse($v_jjvuu->limbs); // obf
        $v_bgxno = array_reverse($v_yifqr->limbs); // obf
        if ($v_jkqes) { // obf
            for ($v_iqsxz = 0; $v_iqsxz < 2; ++$v_iqsxz) { // obf
                $v_wvbwm[$v_iqsxz] = ($v_wvbwm[$v_iqsxz] ^ 0xffff) & 0xffff; // obf
            } // obf
            ++$v_wvbwm[0]; // obf
        } // obf
        if ($v_muoux) { // obf
            for ($v_iqsxz = 0; $v_iqsxz < 2; ++$v_iqsxz) { // obf
                $v_bgxno[$v_iqsxz] = ($v_bgxno[$v_iqsxz] ^ 0xffff) & 0xffff; // obf
            } // obf
            ++$v_bgxno[0]; // obf
        } // obf
        $v_famdt = $v_jjvuu->multiplyLong($v_wvbwm, $v_bgxno); // obf
        if ($v_jkqes !== $v_muoux) { // obf
            if ($v_jkqes !== $v_muoux) { // obf
                for ($v_iqsxz = 0; $v_iqsxz < 2; ++$v_iqsxz) { // obf
                    $v_famdt[$v_iqsxz] = ($v_famdt[$v_iqsxz] ^ 0xffff) & 0xffff; // obf
                } // obf
                $v_prygy = 1; // obf
                for ($v_iqsxz = 0; $v_iqsxz < 2; ++$v_iqsxz) { // obf
                    $v_famdt[$v_iqsxz] += $v_prygy; // obf
                    $v_prygy = $v_famdt[$v_iqsxz] >> 16; // obf
                    $v_famdt[$v_iqsxz] &= 0xffff; // obf
                } // obf
            } // obf
        } // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->limbs = array( // obf
            $v_famdt[1] & 0xffff, // obf
            $v_famdt[0] & 0xffff // obf
        ); // obf
        if (count($v_famdt) > 2) { // obf
            $v_fweog->overflow = $v_famdt[2]; // obf
        } // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param int $v_dflpj // obf
     * @param int $v_bfvrm // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function mulInt($v_dflpj = 0, $v_bfvrm = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_dflpj, 'int', 1); // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_bfvrm, 'int', 2); // obf
        if (ParagonIE_Sodium_Compat::$v_eycwa) { // obf
            return $v_jjvuu->mulIntFast((int) $v_dflpj); // obf
        } // obf
        /** @var int $v_dflpj */ // obf
        $v_dflpj = (int) $v_dflpj; // obf
        /** @var int $v_bfvrm */ // obf
        $v_bfvrm = (int) $v_bfvrm; // obf

        if (!$v_bfvrm) { // obf
            $v_bfvrm = 31; // obf
        } // obf
        /** @var int $v_bfvrm */ // obf

        $v_wvbwm = clone $v_jjvuu; // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf

        // Initialize: // obf
        $v_xlwkp = 0; // obf
        $v_qjnwy = 0; // obf
        $v_rbqlu = $v_wvbwm->limbs[0]; // obf
        $v_tecrx = $v_wvbwm->limbs[1]; // obf

        /** @var int $v_bfvrm */ // obf
        /** @var int $v_iqsxz */ // obf
        for ($v_iqsxz = $v_bfvrm; $v_iqsxz >= 0; --$v_iqsxz) { // obf
            $v_phwpv = (int) (-($v_dflpj & 1)); // obf
            $v_ygoag = $v_rbqlu & $v_phwpv; // obf
            $v_jfghx = $v_tecrx & $v_phwpv; // obf

            $v_qjnwy += $v_jfghx; // obf
            $v_prygy = $v_qjnwy >> 16; // obf

            $v_xlwkp += $v_ygoag + $v_prygy; // obf

            $v_xlwkp &= 0xffff; // obf
            $v_qjnwy &= 0xffff; // obf

            $v_tecrx = ($v_tecrx << 1); // obf
            $v_jfghx = $v_tecrx >> 16; // obf
            $v_rbqlu = ($v_rbqlu << 1) | $v_jfghx; // obf
            $v_rbqlu &= 0xffff; // obf
            $v_tecrx &= 0xffff; // obf
            $v_dflpj >>= 1; // obf
        } // obf
        $v_fweog->limbs[0] = $v_xlwkp; // obf
        $v_fweog->limbs[1] = $v_qjnwy; // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param ParagonIE_Sodium_Core32_Int32 $v_dflpj // obf
     * @param int $v_bfvrm // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function mulInt32(ParagonIE_Sodium_Core32_Int32 $v_dflpj, $v_bfvrm = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_bfvrm, 'int', 2); // obf
        if (ParagonIE_Sodium_Compat::$v_eycwa) { // obf
            return $v_jjvuu->mulInt32Fast($v_dflpj); // obf
        } // obf
        if (!$v_bfvrm) { // obf
            $v_bfvrm = 31; // obf
        } // obf
        /** @var int $v_bfvrm */ // obf

        $v_wvbwm = clone $v_jjvuu; // obf
        $v_bgxno = clone $v_dflpj; // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf

        // Initialize: // obf
        $v_xlwkp = 0; // obf
        $v_qjnwy = 0; // obf
        $v_rbqlu = $v_wvbwm->limbs[0]; // obf
        $v_tecrx = $v_wvbwm->limbs[1]; // obf
        $v_jormh = $v_bgxno->limbs[0]; // obf
        $v_ggcwl = $v_bgxno->limbs[1]; // obf

        /** @var int $v_bfvrm */ // obf
        /** @var int $v_iqsxz */ // obf
        for ($v_iqsxz = $v_bfvrm; $v_iqsxz >= 0; --$v_iqsxz) { // obf
            $v_phwpv = (int) (-($v_ggcwl & 1)); // obf
            $v_ygoag = $v_rbqlu & $v_phwpv; // obf
            $v_jfghx = $v_tecrx & $v_phwpv; // obf

            $v_qjnwy += $v_jfghx; // obf
            $v_prygy = $v_qjnwy >> 16; // obf

            $v_xlwkp += $v_ygoag + $v_prygy; // obf

            $v_xlwkp &= 0xffff; // obf
            $v_qjnwy &= 0xffff; // obf

            $v_tecrx = ($v_tecrx << 1); // obf
            $v_jfghx = $v_tecrx >> 16; // obf
            $v_rbqlu = ($v_rbqlu << 1) | $v_jfghx; // obf
            $v_rbqlu &= 0xffff; // obf
            $v_tecrx &= 0xffff; // obf

            $v_ygoag = ($v_jormh & 1) << 16; // obf
            $v_jormh = ($v_jormh >> 1); // obf
            $v_ggcwl = (($v_ggcwl | $v_ygoag) >> 1); // obf

            $v_jormh &= 0xffff; // obf
            $v_ggcwl &= 0xffff; // obf

        } // obf
        $v_fweog->limbs[0] = $v_xlwkp; // obf
        $v_fweog->limbs[1] = $v_qjnwy; // obf

        return $v_fweog; // obf
    } // obf

    /** // obf
     * OR this 32-bit integer with another. // obf
     * // obf
     * @param ParagonIE_Sodium_Core32_Int32 $v_bgxno // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function orInt32(ParagonIE_Sodium_Core32_Int32 $v_bgxno) // obf
    { // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        $v_fweog->limbs = array( // obf
            (int) ($v_jjvuu->limbs[0] | $v_bgxno->limbs[0]), // obf
            (int) ($v_jjvuu->limbs[1] | $v_bgxno->limbs[1]) // obf
        ); // obf
        /** @var int overflow */ // obf
        $v_fweog->overflow = $v_jjvuu->overflow | $v_bgxno->overflow; // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param int $v_bgxno // obf
     * @return bool // obf
     */ // obf
    public function isGreaterThan($v_bgxno = 0) // obf
    { // obf
        return $v_jjvuu->compareInt($v_bgxno) > 0; // obf
    } // obf

    /** // obf
     * @param int $v_bgxno // obf
     * @return bool // obf
     */ // obf
    public function isLessThanInt($v_bgxno = 0) // obf
    { // obf
        return $v_jjvuu->compareInt($v_bgxno) < 0; // obf
    } // obf

    /** // obf
     * @param int $v_prygy // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * @psalm-suppress MixedArrayAccess // obf
     */ // obf
    public function rotateLeft($v_prygy = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_prygy, 'int', 1); // obf
        /** @var int $v_prygy */ // obf
        $v_prygy = (int) $v_prygy; // obf

        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        $v_prygy &= 31; // obf
        if ($v_prygy === 0) { // obf
            // NOP, but we want a copy. // obf
            $v_fweog->limbs = $v_jjvuu->limbs; // obf
        } else { // obf
            /** @var int $v_prygy */ // obf

            /** @var int $v_ugytz */ // obf
            $v_ugytz = ($v_prygy >> 4) & 1; // obf

            /** @var int $v_nzrog */ // obf
            $v_nzrog = $v_prygy & 15; // obf

            /** @var array<int, int> $v_dzsvm */ // obf
            $v_dzsvm =& $v_fweog->limbs; // obf

            /** @var array<int, int> $v_airsg */ // obf
            $v_airsg =& $v_jjvuu->limbs; // obf

            for ($v_iqsxz = 1; $v_iqsxz >= 0; --$v_iqsxz) { // obf
                /** @var int $v_xrywf */ // obf
                $v_xrywf = ($v_iqsxz + $v_ugytz) & 1; // obf
                /** @var int $v_fkuee */ // obf
                $v_fkuee = ($v_iqsxz + $v_ugytz + 1) & 1; // obf
                $v_dzsvm[$v_iqsxz] = (int) ( // obf
                    ( // obf
                        ((int) ($v_airsg[$v_xrywf]) << $v_nzrog) // obf
                            | // obf
                        ((int) ($v_airsg[$v_fkuee]) >> (16 - $v_nzrog)) // obf
                    ) & 0xffff // obf
                ); // obf
            } // obf
        } // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * Rotate to the right // obf
     * // obf
     * @param int $v_prygy // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * @psalm-suppress MixedArrayAccess // obf
     */ // obf
    public function rotateRight($v_prygy = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_prygy, 'int', 1); // obf
        /** @var int $v_prygy */ // obf
        $v_prygy = (int) $v_prygy; // obf

        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        $v_prygy &= 31; // obf
        /** @var int $v_prygy */ // obf
        if ($v_prygy === 0) { // obf
            // NOP, but we want a copy. // obf
            $v_fweog->limbs = $v_jjvuu->limbs; // obf
        } else { // obf
            /** @var int $v_prygy */ // obf

            /** @var int $v_ugytz */ // obf
            $v_ugytz = ($v_prygy >> 4) & 1; // obf

            /** @var int $v_nzrog */ // obf
            $v_nzrog = $v_prygy & 15; // obf

            /** @var array<int, int> $v_dzsvm */ // obf
            $v_dzsvm =& $v_fweog->limbs; // obf

            /** @var array<int, int> $v_airsg */ // obf
            $v_airsg =& $v_jjvuu->limbs; // obf

            for ($v_iqsxz = 1; $v_iqsxz >= 0; --$v_iqsxz) { // obf
                /** @var int $v_xrywf */ // obf
                $v_xrywf = ($v_iqsxz - $v_ugytz) & 1; // obf
                /** @var int $v_fkuee */ // obf
                $v_fkuee = ($v_iqsxz - $v_ugytz - 1) & 1; // obf
                $v_dzsvm[$v_iqsxz] = (int) ( // obf
                    ( // obf
                        ((int) ($v_airsg[$v_xrywf]) >> (int) ($v_nzrog)) // obf
                            | // obf
                        ((int) ($v_airsg[$v_fkuee]) << (16 - (int) ($v_nzrog))) // obf
                    ) & 0xffff // obf
                ); // obf
            } // obf
        } // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param bool $v_uyurg // obf
     * @return self // obf
     */ // obf
    public function setUnsignedInt($v_uyurg = false) // obf
    { // obf
        $v_jjvuu->unsignedInt = !empty($v_uyurg); // obf
        return $v_jjvuu; // obf
    } // obf

    /** // obf
     * @param int $v_prygy // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function shiftLeft($v_prygy = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_prygy, 'int', 1); // obf
        /** @var int $v_prygy */ // obf
        $v_prygy = (int) $v_prygy; // obf

        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        $v_prygy &= 63; // obf
        /** @var int $v_prygy */ // obf
        if ($v_prygy === 0) { // obf
            $v_fweog->limbs = $v_jjvuu->limbs; // obf
        } elseif ($v_prygy < 0) { // obf
            /** @var int $v_prygy */ // obf
            return $v_jjvuu->shiftRight(-$v_prygy); // obf
        } else { // obf
            /** @var int $v_prygy */ // obf
            /** @var int $v_nnmqi */ // obf
            $v_nnmqi = $v_jjvuu->limbs[1] << $v_prygy; // obf
            $v_fweog->limbs[1] = (int)($v_nnmqi & 0xffff); // obf
            /** @var int $v_llpkq */ // obf
            $v_llpkq = $v_nnmqi >> 16; // obf

            /** @var int $v_nnmqi */ // obf
            $v_nnmqi = ($v_jjvuu->limbs[0] << $v_prygy) | ($v_llpkq & 0xffff); // obf
            $v_fweog->limbs[0] = (int) ($v_nnmqi & 0xffff); // obf
        } // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param int $v_prygy // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     * @psalm-suppress MixedAssignment // obf
     * @psalm-suppress MixedOperand // obf
     */ // obf
    public function shiftRight($v_prygy = 0) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_prygy, 'int', 1); // obf
        /** @var int $v_prygy */ // obf
        $v_prygy = (int) $v_prygy; // obf

        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        $v_prygy &= 63; // obf
        /** @var int $v_prygy */ // obf
        if ($v_prygy >= 16) { // obf
            $v_fweog->limbs = array( // obf
                (int) ($v_jjvuu->overflow & 0xffff), // obf
                (int) ($v_jjvuu->limbs[0]) // obf
            ); // obf
            $v_fweog->overflow = $v_jjvuu->overflow >> 16; // obf
            return $v_fweog->shiftRight($v_prygy & 15); // obf
        } // obf
        if ($v_prygy === 0) { // obf
            $v_fweog->limbs = $v_jjvuu->limbs; // obf
        } elseif ($v_prygy < 0) { // obf
            /** @var int $v_prygy */ // obf
            return $v_jjvuu->shiftLeft(-$v_prygy); // obf
        } else { // obf
            if (!is_int($v_prygy)) { // obf
                throw new TypeError(); // obf
            } // obf
            /** @var int $v_prygy */ // obf
            // $v_fweog->limbs[0] = (int) (($v_jjvuu->limbs[0] >> $v_prygy) & 0xffff); // obf
            $v_jhtjz = (int) ($v_jjvuu->overflow & ((1 << ($v_prygy + 1)) - 1)); // obf
            $v_fweog->limbs[0] = (int) ((($v_jjvuu->limbs[0] >> $v_prygy) | ($v_jhtjz << (16 - $v_prygy))) & 0xffff); // obf
            $v_ycbfr = (int) ($v_jjvuu->limbs[0] & ((1 << ($v_prygy + 1)) - 1)); // obf
            $v_fweog->limbs[1] = (int) ((($v_jjvuu->limbs[1] >> $v_prygy) | ($v_ycbfr << (16 - $v_prygy))) & 0xffff); // obf
            $v_fweog->overflow >>= $v_prygy; // obf
        } // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * Subtract a normal integer from an int32 object. // obf
     * // obf
     * @param int $v_dflpj // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public function subInt($v_dflpj) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_dflpj, 'int', 1); // obf
        /** @var int $v_dflpj */ // obf
        $v_dflpj = (int) $v_dflpj; // obf

        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf

        /** @var int $v_nnmqi */ // obf
        $v_nnmqi = $v_jjvuu->limbs[1] - ($v_dflpj & 0xffff); // obf
        /** @var int $v_llpkq */ // obf
        $v_llpkq = $v_nnmqi >> 16; // obf
        $v_fweog->limbs[1] = (int) ($v_nnmqi & 0xffff); // obf

        /** @var int $v_nnmqi */ // obf
        $v_nnmqi = $v_jjvuu->limbs[0] - (($v_dflpj >> 16) & 0xffff) + $v_llpkq; // obf
        $v_fweog->limbs[0] = (int) ($v_nnmqi & 0xffff); // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * Subtract two int32 objects from each other // obf
     * // obf
     * @param ParagonIE_Sodium_Core32_Int32 $v_bgxno // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function subInt32(ParagonIE_Sodium_Core32_Int32 $v_bgxno) // obf
    { // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf

        /** @var int $v_nnmqi */ // obf
        $v_nnmqi = $v_jjvuu->limbs[1] - ($v_bgxno->limbs[1] & 0xffff); // obf
        /** @var int $v_llpkq */ // obf
        $v_llpkq = $v_nnmqi >> 16; // obf
        $v_fweog->limbs[1] = (int) ($v_nnmqi & 0xffff); // obf

        /** @var int $v_nnmqi */ // obf
        $v_nnmqi = $v_jjvuu->limbs[0] - ($v_bgxno->limbs[0] & 0xffff) + $v_llpkq; // obf
        $v_fweog->limbs[0] = (int) ($v_nnmqi & 0xffff); // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * XOR this 32-bit integer with another. // obf
     * // obf
     * @param ParagonIE_Sodium_Core32_Int32 $v_bgxno // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function xorInt32(ParagonIE_Sodium_Core32_Int32 $v_bgxno) // obf
    { // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        $v_fweog->limbs = array( // obf
            (int) ($v_jjvuu->limbs[0] ^ $v_bgxno->limbs[0]), // obf
            (int) ($v_jjvuu->limbs[1] ^ $v_bgxno->limbs[1]) // obf
        ); // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param int $v_ierxb // obf
     * @return self // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function fromInt($v_ierxb) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_ierxb, 'int', 1);; // obf
        /** @var int $v_ierxb */ // obf
        $v_ierxb = (int) $v_ierxb; // obf

        return new ParagonIE_Sodium_Core32_Int32( // obf
            array( // obf
                (int) (($v_ierxb >> 16) & 0xffff), // obf
                (int) ($v_ierxb & 0xffff) // obf
            ) // obf
        ); // obf
    } // obf

    /** // obf
     * @param string $v_wizdz // obf
     * @return self // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function fromString($v_wizdz) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_wizdz, 'string', 1); // obf
        $v_wizdz = (string) $v_wizdz; // obf
        if (ParagonIE_Sodium_Core32_Util::strlen($v_wizdz) !== 4) { // obf
            throw new RangeException( // obf
                'String must be 4 bytes; ' . ParagonIE_Sodium_Core32_Util::strlen($v_wizdz) . ' given.' // obf
            ); // obf
        } // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf

        $v_fweog->limbs[0]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_wizdz[0]) & 0xff) << 8); // obf
        $v_fweog->limbs[0] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_wizdz[1]) & 0xff); // obf
        $v_fweog->limbs[1]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_wizdz[2]) & 0xff) << 8); // obf
        $v_fweog->limbs[1] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_wizdz[3]) & 0xff); // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @param string $v_wizdz // obf
     * @return self // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function fromReverseString($v_wizdz) // obf
    { // obf
        ParagonIE_Sodium_Core32_Util::declareScalarType($v_wizdz, 'string', 1); // obf
        $v_wizdz = (string) $v_wizdz; // obf
        if (ParagonIE_Sodium_Core32_Util::strlen($v_wizdz) !== 4) { // obf
            throw new RangeException( // obf
                'String must be 4 bytes; ' . ParagonIE_Sodium_Core32_Util::strlen($v_wizdz) . ' given.' // obf
            ); // obf
        } // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf

        $v_fweog->limbs[0]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_wizdz[3]) & 0xff) << 8); // obf
        $v_fweog->limbs[0] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_wizdz[2]) & 0xff); // obf
        $v_fweog->limbs[1]  = (int) ((ParagonIE_Sodium_Core32_Util::chrToInt($v_wizdz[1]) & 0xff) << 8); // obf
        $v_fweog->limbs[1] |= (ParagonIE_Sodium_Core32_Util::chrToInt($v_wizdz[0]) & 0xff); // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @return array<int, int> // obf
     */ // obf
    public function toArray() // obf
    { // obf
        return array((int) ($v_jjvuu->limbs[0] << 16 | $v_jjvuu->limbs[1])); // obf
    } // obf

    /** // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public function toString() // obf
    { // obf
        return // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_jjvuu->limbs[0] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_jjvuu->limbs[0] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_jjvuu->limbs[1] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_jjvuu->limbs[1] & 0xff); // obf
    } // obf

    /** // obf
     * @return int // obf
     */ // obf
    public function toInt() // obf
    { // obf
        return (int) ( // obf
            (($v_jjvuu->limbs[0] & 0xffff) << 16) // obf
                | // obf
            ($v_jjvuu->limbs[1] & 0xffff) // obf
        ); // obf
    } // obf

    /** // obf
     * @return ParagonIE_Sodium_Core32_Int32 // obf
     */ // obf
    public function toInt32() // obf
    { // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int32(); // obf
        $v_fweog->limbs[0] = (int) ($v_jjvuu->limbs[0] & 0xffff); // obf
        $v_fweog->limbs[1] = (int) ($v_jjvuu->limbs[1] & 0xffff); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        $v_fweog->overflow = (int) ($v_jjvuu->overflow & 0x7fffffff); // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @return ParagonIE_Sodium_Core32_Int64 // obf
     */ // obf
    public function toInt64() // obf
    { // obf
        $v_fweog = new ParagonIE_Sodium_Core32_Int64(); // obf
        $v_fweog->unsignedInt = $v_jjvuu->unsignedInt; // obf
        if ($v_jjvuu->unsignedInt) { // obf
            $v_fweog->limbs[0] += (($v_jjvuu->overflow >> 16) & 0xffff); // obf
            $v_fweog->limbs[1] += (($v_jjvuu->overflow) & 0xffff); // obf
        } else { // obf
            $v_uqjit = -(($v_jjvuu->limbs[0] >> 15) & 1); // obf
            $v_fweog->limbs[0] = (int)($v_uqjit & 0xffff); // obf
            $v_fweog->limbs[1] = (int)($v_uqjit & 0xffff); // obf
        } // obf
        $v_fweog->limbs[2] = (int) ($v_jjvuu->limbs[0] & 0xffff); // obf
        $v_fweog->limbs[3] = (int) ($v_jjvuu->limbs[1] & 0xffff); // obf
        return $v_fweog; // obf
    } // obf

    /** // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public function toReverseString() // obf
    { // obf
        return ParagonIE_Sodium_Core32_Util::intToChr($v_jjvuu->limbs[1] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_jjvuu->limbs[1] >> 8) & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr($v_jjvuu->limbs[0] & 0xff) . // obf
            ParagonIE_Sodium_Core32_Util::intToChr(($v_jjvuu->limbs[0] >> 8) & 0xff); // obf
    } // obf

    /** // obf
     * @return string // obf
     */ // obf
    public function __toString() // obf
    { // obf
        try { // obf
            return $v_jjvuu->toString(); // obf
        } catch (TypeError $v_bqfpz) { // obf
            // PHP engine can't handle exceptions from __toString() // obf
            return ''; // obf
        } // obf
    } // obf
} // obf