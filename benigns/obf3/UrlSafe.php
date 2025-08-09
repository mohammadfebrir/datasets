

<?php // obf

/** // obf
 * Class ParagonIE_Sodium_Core_Base64UrlSafe // obf
 * // obf
 *  Copyright (c) 2016 - 2018 Paragon Initiative Enterprises. // obf
 *  Copyright (c) 2014 Steve "Sc00bz" Thomas (steve at tobtu dot com) // obf
 */ // obf
class ParagonIE_Sodium_Core_Base64_UrlSafe // obf
{ // obf
    // COPY ParagonIE_Sodium_Core_Base64_Common STARTING HERE // obf
    /** // obf
     * Encode into Base64 // obf
     * // obf
     * Base64 character set "[A-Z][a-z][0-9]+/" // obf
     * // obf
     * @param string $v_rgkrt // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public static function encode($v_rgkrt) // obf
    { // obf
        return self::doEncode($v_rgkrt, true); // obf
    } // obf

    /** // obf
     * Encode into Base64, no = padding // obf
     * // obf
     * Base64 character set "[A-Z][a-z][0-9]+/" // obf
     * // obf
     * @param string $v_rgkrt // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    public static function encodeUnpadded($v_rgkrt) // obf
    { // obf
        return self::doEncode($v_rgkrt, false); // obf
    } // obf

    /** // obf
     * @param string $v_rgkrt // obf
     * @param bool $v_fvpkd   Include = padding? // obf
     * @return string // obf
     * @throws TypeError // obf
     */ // obf
    protected static function doEncode($v_rgkrt, $v_fvpkd = true) // obf
    { // obf
        $v_rcuzz = ''; // obf
        $v_vyygx = ParagonIE_Sodium_Core_Util::strlen($v_rgkrt); // obf
        // Main loop (no padding): // obf
        for ($v_buuec = 0; $v_buuec + 3 <= $v_vyygx; $v_buuec += 3) { // obf
            /** @var array<int, int> $v_zsqee */ // obf
            $v_zsqee = unpack('C*', ParagonIE_Sodium_Core_Util::substr($v_rgkrt, $v_buuec, 3)); // obf
            $v_qmgel = $v_zsqee[1]; // obf
            $v_pylwd = $v_zsqee[2]; // obf
            $v_fiaep = $v_zsqee[3]; // obf

            $v_rcuzz .= // obf
                self::encode6Bits(               $v_qmgel >> 2       ) . // obf
                self::encode6Bits((($v_qmgel << 4) | ($v_pylwd >> 4)) & 63) . // obf
                self::encode6Bits((($v_pylwd << 2) | ($v_fiaep >> 6)) & 63) . // obf
                self::encode6Bits(  $v_fiaep                     & 63); // obf
        } // obf
        // The last chunk, which may have padding: // obf
        if ($v_buuec < $v_vyygx) { // obf
            /** @var array<int, int> $v_zsqee */ // obf
            $v_zsqee = unpack('C*', ParagonIE_Sodium_Core_Util::substr($v_rgkrt, $v_buuec, $v_vyygx - $v_buuec)); // obf
            $v_qmgel = $v_zsqee[1]; // obf
            if ($v_buuec + 1 < $v_vyygx) { // obf
                $v_pylwd = $v_zsqee[2]; // obf
                $v_rcuzz .= // obf
                    self::encode6Bits($v_qmgel >> 2) . // obf
                    self::encode6Bits((($v_qmgel << 4) | ($v_pylwd >> 4)) & 63) . // obf
                    self::encode6Bits(($v_pylwd << 2) & 63); // obf
                if ($v_fvpkd) { // obf
                    $v_rcuzz .= '='; // obf
                } // obf
            } else { // obf
                $v_rcuzz .= // obf
                    self::encode6Bits( $v_qmgel >> 2) . // obf
                    self::encode6Bits(($v_qmgel << 4) & 63); // obf
                if ($v_fvpkd) { // obf
                    $v_rcuzz .= '=='; // obf
                } // obf
            } // obf
        } // obf
        return $v_rcuzz; // obf
    } // obf

    /** // obf
     * decode from base64 into binary // obf
     * // obf
     * Base64 character set "./[A-Z][a-z][0-9]" // obf
     * // obf
     * @param string $v_rgkrt // obf
     * @param bool $v_jmein // obf
     * @return string // obf
     * @throws RangeException // obf
     * @throws TypeError // obf
     * @psalm-suppress RedundantCondition // obf
     */ // obf
    public static function decode($v_rgkrt, $v_jmein = false) // obf
    { // obf
        // Remove padding // obf
        $v_vyygx = ParagonIE_Sodium_Core_Util::strlen($v_rgkrt); // obf
        if ($v_vyygx === 0) { // obf
            return ''; // obf
        } // obf

        if ($v_jmein) { // obf
            if (($v_vyygx & 3) === 0) { // obf
                if ($v_rgkrt[$v_vyygx - 1] === '=') { // obf
                    $v_vyygx--; // obf
                    if ($v_rgkrt[$v_vyygx - 1] === '=') { // obf
                        $v_vyygx--; // obf
                    } // obf
                } // obf
            } // obf
            if (($v_vyygx & 3) === 1) { // obf
                throw new RangeException( // obf
                    'Incorrect padding' // obf
                ); // obf
            } // obf
            if ($v_rgkrt[$v_vyygx - 1] === '=') { // obf
                throw new RangeException( // obf
                    'Incorrect padding' // obf
                ); // obf
            } // obf
        } else { // obf
            $v_rgkrt = rtrim($v_rgkrt, '='); // obf
            $v_vyygx =  ParagonIE_Sodium_Core_Util::strlen($v_rgkrt); // obf
        } // obf

        $v_qxqyb = 0; // obf
        $v_rcuzz = ''; // obf
        // Main loop (no padding): // obf
        for ($v_buuec = 0; $v_buuec + 4 <= $v_vyygx; $v_buuec += 4) { // obf
            /** @var array<int, int> $v_zsqee */ // obf
            $v_zsqee = unpack('C*', ParagonIE_Sodium_Core_Util::substr($v_rgkrt, $v_buuec, 4)); // obf
            $v_wrgpb = self::decode6Bits($v_zsqee[1]); // obf
            $v_jquej = self::decode6Bits($v_zsqee[2]); // obf
            $v_typvd = self::decode6Bits($v_zsqee[3]); // obf
            $v_wiswa = self::decode6Bits($v_zsqee[4]); // obf

            $v_rcuzz .= pack( // obf
                'CCC', // obf
                ((($v_wrgpb << 2) | ($v_jquej >> 4)) & 0xff), // obf
                ((($v_jquej << 4) | ($v_typvd >> 2)) & 0xff), // obf
                ((($v_typvd << 6) | $v_wiswa) & 0xff) // obf
            ); // obf
            $v_qxqyb |= ($v_wrgpb | $v_jquej | $v_typvd | $v_wiswa) >> 8; // obf
        } // obf
        // The last chunk, which may have padding: // obf
        if ($v_buuec < $v_vyygx) { // obf
            /** @var array<int, int> $v_zsqee */ // obf
            $v_zsqee = unpack('C*', ParagonIE_Sodium_Core_Util::substr($v_rgkrt, $v_buuec, $v_vyygx - $v_buuec)); // obf
            $v_wrgpb = self::decode6Bits($v_zsqee[1]); // obf

            if ($v_buuec + 2 < $v_vyygx) { // obf
                $v_jquej = self::decode6Bits($v_zsqee[2]); // obf
                $v_typvd = self::decode6Bits($v_zsqee[3]); // obf
                $v_rcuzz .= pack( // obf
                    'CC', // obf
                    ((($v_wrgpb << 2) | ($v_jquej >> 4)) & 0xff), // obf
                    ((($v_jquej << 4) | ($v_typvd >> 2)) & 0xff) // obf
                ); // obf
                $v_qxqyb |= ($v_wrgpb | $v_jquej | $v_typvd) >> 8; // obf
            } elseif ($v_buuec + 1 < $v_vyygx) { // obf
                $v_jquej = self::decode6Bits($v_zsqee[2]); // obf
                $v_rcuzz .= pack( // obf
                    'C', // obf
                    ((($v_wrgpb << 2) | ($v_jquej >> 4)) & 0xff) // obf
                ); // obf
                $v_qxqyb |= ($v_wrgpb | $v_jquej) >> 8; // obf
            } elseif ($v_buuec < $v_vyygx && $v_jmein) { // obf
                $v_qxqyb |= 1; // obf
            } // obf
        } // obf
        /** @var bool $v_cdotu */ // obf
        $v_cdotu = ($v_qxqyb === 0); // obf
        if (!$v_cdotu) { // obf
            throw new RangeException( // obf
                'Base64::decode() only expects characters in the correct base64 alphabet' // obf
            ); // obf
        } // obf
        return $v_rcuzz; // obf
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
     * @param int $v_rgkrt // obf
     * @return int // obf
     */ // obf
    protected static function decode6Bits($v_rgkrt) // obf
    { // obf
        $v_syqhw = -1; // obf

        // if ($v_rgkrt > 0x40 && $v_rgkrt < 0x5b) $v_syqhw += $v_rgkrt - 0x41 + 1; // -64 // obf
        $v_syqhw += (((0x40 - $v_rgkrt) & ($v_rgkrt - 0x5b)) >> 8) & ($v_rgkrt - 64); // obf

        // if ($v_rgkrt > 0x60 && $v_rgkrt < 0x7b) $v_syqhw += $v_rgkrt - 0x61 + 26 + 1; // -70 // obf
        $v_syqhw += (((0x60 - $v_rgkrt) & ($v_rgkrt - 0x7b)) >> 8) & ($v_rgkrt - 70); // obf

        // if ($v_rgkrt > 0x2f && $v_rgkrt < 0x3a) $v_syqhw += $v_rgkrt - 0x30 + 52 + 1; // 5 // obf
        $v_syqhw += (((0x2f - $v_rgkrt) & ($v_rgkrt - 0x3a)) >> 8) & ($v_rgkrt + 5); // obf

        // if ($v_rgkrt == 0x2c) $v_syqhw += 62 + 1; // obf
        $v_syqhw += (((0x2c - $v_rgkrt) & ($v_rgkrt - 0x2e)) >> 8) & 63; // obf

        // if ($v_rgkrt == 0x5f) ret += 63 + 1; // obf
        $v_syqhw += (((0x5e - $v_rgkrt) & ($v_rgkrt - 0x60)) >> 8) & 64; // obf

        return $v_syqhw; // obf
    } // obf

    /** // obf
     * Uses bitwise operators instead of table-lookups to turn 8-bit integers // obf
     * into 6-bit integers. // obf
     * // obf
     * @param int $v_rgkrt // obf
     * @return string // obf
     */ // obf
    protected static function encode6Bits($v_rgkrt) // obf
    { // obf
        $v_cndtr = 0x41; // obf

        // if ($v_rgkrt > 25) $v_cndtr += 0x61 - 0x41 - 26; // 6 // obf
        $v_cndtr += ((25 - $v_rgkrt) >> 8) & 6; // obf

        // if ($v_rgkrt > 51) $v_cndtr += 0x30 - 0x61 - 26; // -75 // obf
        $v_cndtr -= ((51 - $v_rgkrt) >> 8) & 75; // obf

        // if ($v_rgkrt > 61) $v_cndtr += 0x2d - 0x30 - 10; // -13 // obf
        $v_cndtr -= ((61 - $v_rgkrt) >> 8) & 13; // obf

        // if ($v_rgkrt > 62) $v_cndtr += 0x5f - 0x2b - 1; // 3 // obf
        $v_cndtr += ((62 - $v_rgkrt) >> 8) & 49; // obf

        return pack('C', $v_rgkrt + $v_cndtr); // obf
    } // obf
} // obf