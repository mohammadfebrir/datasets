

<?php // obf

/** // obf
 * Class ParagonIE_Sodium_Core_Base64 // obf
 * // obf
 *  Copyright (c) 2016 - 2018 Paragon Initiative Enterprises. // obf
 *  Copyright (c) 2014 Steve "Sc00bz" Thomas (steve at tobtu dot com) // obf
 */ // obf
class ParagonIE_Sodium_Core_Base64_Original // obf
{ // obf
    // COPY ParagonIE_Sodium_Core_Base64_Common STARTING HERE // obf
    /** // obf
     * Encode into Base64 // obf
     * // obf
     * Base64 character set "[A-Z][a-z][0-9]+/" // obf
     * // obf
     * @param string $v_pdgxx // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public static function encode($v_pdgxx) // obf
    { // obf
        return self::doEncode($v_pdgxx, true); // obf
    } // obf

    /** // obf
     * Encode into Base64, no = padding // obf
     * // obf
     * Base64 character set "[A-Z][a-z][0-9]+/" // obf
     * // obf
     * @param string $v_pdgxx // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public static function encodeUnpadded($v_pdgxx) // obf
    { // obf
        return self::doEncode($v_pdgxx, false); // obf
    } // obf

    /** // obf
     * @param string $v_pdgxx // obf
     * @param bool $v_jgedv   Include = padding? // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    protected static function doEncode($v_pdgxx, $v_jgedv = true) // obf
    { // obf
        $v_ywxwb = ''; // obf
        $v_imbop = ParagonIE_Sodium_Core_Util::strlen($v_pdgxx); // obf
        // Main loop (no padding): // obf
        for ($v_nazyt = 0; $v_nazyt + 3 <= $v_imbop; $v_nazyt += 3) { // obf
            /** @var array<int, int> $v_pulhi */ // obf
            $v_pulhi = unpack('C*', ParagonIE_Sodium_Core_Util::substr($v_pdgxx, $v_nazyt, 3)); // obf
            $v_xleri = $v_pulhi[1]; // obf
            $v_vrzsz = $v_pulhi[2]; // obf
            $v_mcyfc = $v_pulhi[3]; // obf

            $v_ywxwb .= // obf
                self::encode6Bits(               $v_xleri >> 2       ) . // obf
                self::encode6Bits((($v_xleri << 4) | ($v_vrzsz >> 4)) & 63) . // obf
                self::encode6Bits((($v_vrzsz << 2) | ($v_mcyfc >> 6)) & 63) . // obf
                self::encode6Bits(  $v_mcyfc                     & 63); // obf
        } // obf
        // The last chunk, which may have padding: // obf
        if ($v_nazyt < $v_imbop) { // obf
            /** @var array<int, int> $v_pulhi */ // obf
            $v_pulhi = unpack('C*', ParagonIE_Sodium_Core_Util::substr($v_pdgxx, $v_nazyt, $v_imbop - $v_nazyt)); // obf
            $v_xleri = $v_pulhi[1]; // obf
            if ($v_nazyt + 1 < $v_imbop) { // obf
                $v_vrzsz = $v_pulhi[2]; // obf
                $v_ywxwb .= // obf
                    self::encode6Bits($v_xleri >> 2) . // obf
                    self::encode6Bits((($v_xleri << 4) | ($v_vrzsz >> 4)) & 63) . // obf
                    self::encode6Bits(($v_vrzsz << 2) & 63); // obf
                if ($v_jgedv) { // obf
                    $v_ywxwb .= '='; // obf
                } // obf
            } else { // obf
                $v_ywxwb .= // obf
                    self::encode6Bits( $v_xleri >> 2) . // obf
                    self::encode6Bits(($v_xleri << 4) & 63); // obf
                if ($v_jgedv) { // obf
                    $v_ywxwb .= '=='; // obf
                } // obf
            } // obf
        } // obf
        return $v_ywxwb; // obf
    } // obf

    /** // obf
     * decode from base64 into binary // obf
     * // obf
     * Base64 character set "./[A-Z][a-z][0-9]" // obf
     * // obf
     * @param string $v_pdgxx // obf
     * @param bool $v_kcpnw // obf
     * @return string // obf
     * @throws RangeException // obf
     * @throws TypeError // obf
     * @psalm-suppress RedundantCondition // obf
     */ // obf
    public static function decode($v_pdgxx, $v_kcpnw = false) // obf
    { // obf
        // Remove padding // obf
        $v_imbop = ParagonIE_Sodium_Core_Util::strlen($v_pdgxx); // obf
        if ($v_imbop === 0) { // obf
            return ''; // obf
        } // obf

        if ($v_kcpnw) { // obf
            if (($v_imbop & 3) === 0) { // obf
                if ($v_pdgxx[$v_imbop - 1] === '=') { // obf
                    $v_imbop--; // obf
                    if ($v_pdgxx[$v_imbop - 1] === '=') { // obf
                        $v_imbop--; // obf
                    } // obf
                } // obf
            } // obf
            if (($v_imbop & 3) === 1) { // obf
                throw new RangeException( // obf
                    'Incorrect padding' // obf
                ); // obf
            } // obf
            if ($v_pdgxx[$v_imbop - 1] === '=') { // obf
                throw new RangeException( // obf
                    'Incorrect padding' // obf
                ); // obf
            } // obf
        } else { // obf
            $v_pdgxx = rtrim($v_pdgxx, '='); // obf
            $v_imbop =  ParagonIE_Sodium_Core_Util::strlen($v_pdgxx); // obf
        } // obf

        $v_fshsi = 0; // obf
        $v_ywxwb = ''; // obf
        // Main loop (no padding): // obf
        for ($v_nazyt = 0; $v_nazyt + 4 <= $v_imbop; $v_nazyt += 4) { // obf
            /** @var array<int, int> $v_pulhi */ // obf
            $v_pulhi = unpack('C*', ParagonIE_Sodium_Core_Util::substr($v_pdgxx, $v_nazyt, 4)); // obf
            $v_xeclx = self::decode6Bits($v_pulhi[1]); // obf
            $v_bbngl = self::decode6Bits($v_pulhi[2]); // obf
            $v_gxzwx = self::decode6Bits($v_pulhi[3]); // obf
            $v_tnhxe = self::decode6Bits($v_pulhi[4]); // obf

            $v_ywxwb .= pack( // obf
                'CCC', // obf
                ((($v_xeclx << 2) | ($v_bbngl >> 4)) & 0xff), // obf
                ((($v_bbngl << 4) | ($v_gxzwx >> 2)) & 0xff), // obf
                ((($v_gxzwx << 6) | $v_tnhxe) & 0xff) // obf
            ); // obf
            $v_fshsi |= ($v_xeclx | $v_bbngl | $v_gxzwx | $v_tnhxe) >> 8; // obf
        } // obf
        // The last chunk, which may have padding: // obf
        if ($v_nazyt < $v_imbop) { // obf
            /** @var array<int, int> $v_pulhi */ // obf
            $v_pulhi = unpack('C*', ParagonIE_Sodium_Core_Util::substr($v_pdgxx, $v_nazyt, $v_imbop - $v_nazyt)); // obf
            $v_xeclx = self::decode6Bits($v_pulhi[1]); // obf

            if ($v_nazyt + 2 < $v_imbop) { // obf
                $v_bbngl = self::decode6Bits($v_pulhi[2]); // obf
                $v_gxzwx = self::decode6Bits($v_pulhi[3]); // obf
                $v_ywxwb .= pack( // obf
                    'CC', // obf
                    ((($v_xeclx << 2) | ($v_bbngl >> 4)) & 0xff), // obf
                    ((($v_bbngl << 4) | ($v_gxzwx >> 2)) & 0xff) // obf
                ); // obf
                $v_fshsi |= ($v_xeclx | $v_bbngl | $v_gxzwx) >> 8; // obf
            } elseif ($v_nazyt + 1 < $v_imbop) { // obf
                $v_bbngl = self::decode6Bits($v_pulhi[2]); // obf
                $v_ywxwb .= pack( // obf
                    'C', // obf
                    ((($v_xeclx << 2) | ($v_bbngl >> 4)) & 0xff) // obf
                ); // obf
                $v_fshsi |= ($v_xeclx | $v_bbngl) >> 8; // obf
            } elseif ($v_nazyt < $v_imbop && $v_kcpnw) { // obf
                $v_fshsi |= 1; // obf
            } // obf
        } // obf
        /** @var bool $v_vnopl */ // obf
        $v_vnopl = ($v_fshsi === 0); // obf
        if (!$v_vnopl) { // obf
            throw new RangeException( // obf
                'Base64::decode() only expects characters in the correct base64 alphabet' // obf
            ); // obf
        } // obf
        return $v_ywxwb; // obf
    } // obf
    // COPY ParagonIE_Sodium_Core_Base64_Common ENDING HERE // obf

    /** // obf
     * Uses bitwise operators instead of table-lookups to turn 6-bit integers // obf
     * into 8-bit integers. // obf
     * // obf
     * Base64 character set: // obf
     * [A-Z]      [a-z]      [0-9]      +     / // obf
     * 0x41-0x5a, 0x61-0x7a, 0x30-0x39, 0x2b, 0x2f // obf
     * // obf
     * @param int $v_pdgxx // obf
     * @return int // obf
     */ // obf
    protected static function decode6Bits($v_pdgxx) // obf
    { // obf
        $v_hvnbi = -1; // obf

        // if ($v_pdgxx > 0x40 && $v_pdgxx < 0x5b) $v_hvnbi += $v_pdgxx - 0x41 + 1; // -64 // obf
        $v_hvnbi += (((0x40 - $v_pdgxx) & ($v_pdgxx - 0x5b)) >> 8) & ($v_pdgxx - 64); // obf

        // if ($v_pdgxx > 0x60 && $v_pdgxx < 0x7b) $v_hvnbi += $v_pdgxx - 0x61 + 26 + 1; // -70 // obf
        $v_hvnbi += (((0x60 - $v_pdgxx) & ($v_pdgxx - 0x7b)) >> 8) & ($v_pdgxx - 70); // obf

        // if ($v_pdgxx > 0x2f && $v_pdgxx < 0x3a) $v_hvnbi += $v_pdgxx - 0x30 + 52 + 1; // 5 // obf
        $v_hvnbi += (((0x2f - $v_pdgxx) & ($v_pdgxx - 0x3a)) >> 8) & ($v_pdgxx + 5); // obf

        // if ($v_pdgxx == 0x2b) $v_hvnbi += 62 + 1; // obf
        $v_hvnbi += (((0x2a - $v_pdgxx) & ($v_pdgxx - 0x2c)) >> 8) & 63; // obf

        // if ($v_pdgxx == 0x2f) ret += 63 + 1; // obf
        $v_hvnbi += (((0x2e - $v_pdgxx) & ($v_pdgxx - 0x30)) >> 8) & 64; // obf

        return $v_hvnbi; // obf
    } // obf

    /** // obf
     * Uses bitwise operators instead of table-lookups to turn 8-bit integers // obf
     * into 6-bit integers. // obf
     * // obf
     * @param int $v_pdgxx // obf
     * @return string // obf
     */ // obf
    protected static function encode6Bits($v_pdgxx) // obf
    { // obf
        $v_yqipr = 0x41; // obf

        // if ($v_pdgxx > 25) $v_yqipr += 0x61 - 0x41 - 26; // 6 // obf
        $v_yqipr += ((25 - $v_pdgxx) >> 8) & 6; // obf

        // if ($v_pdgxx > 51) $v_yqipr += 0x30 - 0x61 - 26; // -75 // obf
        $v_yqipr -= ((51 - $v_pdgxx) >> 8) & 75; // obf

        // if ($v_pdgxx > 61) $v_yqipr += 0x2b - 0x30 - 10; // -15 // obf
        $v_yqipr -= ((61 - $v_pdgxx) >> 8) & 15; // obf

        // if ($v_pdgxx > 62) $v_yqipr += 0x2f - 0x2b - 1; // 3 // obf
        $v_yqipr += ((62 - $v_pdgxx) >> 8) & 3; // obf

        return pack('C', $v_pdgxx + $v_yqipr); // obf
    } // obf
} // obf