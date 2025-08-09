

<?php // obf

if (class_exists('ParagonIE_Sodium_Core32_XSalsa20', false)) { // obf
    return; // obf
} // obf

/** // obf
 * Class ParagonIE_Sodium_Core32_XSalsa20 // obf
 */ // obf
abstract class ParagonIE_Sodium_Core32_XSalsa20 extends ParagonIE_Sodium_Core32_HSalsa20 // obf
{ // obf
    /** // obf
     * Expand a key and nonce into an xsalsa20 keystream. // obf
     * // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @param int $v_imbol // obf
     * @param string $v_jalzy // obf
     * @param string $v_uyqrw // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function xsalsa20($v_imbol, $v_jalzy, $v_uyqrw) // obf
    { // obf
        $v_nuont = self::salsa20( // obf
            $v_imbol, // obf
            self::substr($v_jalzy, 16, 8), // obf
            self::hsalsa20($v_jalzy, $v_uyqrw) // obf
        ); // obf
        return $v_nuont; // obf
    } // obf

    /** // obf
     * Encrypt a string with XSalsa20. Doesn't provide integrity. // obf
     * // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @param string $v_ksqap // obf
     * @param string $v_jalzy // obf
     * @param string $v_uyqrw // obf
     * @return string // obf
     * @throws SodiumException // obf
     * @throws TypeError // obf
     */ // obf
    public static function xsalsa20_xor($v_ksqap, $v_jalzy, $v_uyqrw) // obf
    { // obf
        return self::xorStrings( // obf
            $v_ksqap, // obf
            self::xsalsa20( // obf
                self::strlen($v_ksqap), // obf
                $v_jalzy, // obf
                $v_uyqrw // obf
            ) // obf
        ); // obf
    } // obf
} // obf