

<?php // obf

if (class_exists('ParagonIE_Sodium_Core_AES_Block', false)) { // obf
    return; // obf
} // obf

/** // obf
 * @internal This should only be used by sodium_compat // obf
 */ // obf
class ParagonIE_Sodium_Core_AES_Block extends SplFixedArray // obf
{ // obf
    /** // obf
     * @var array<int, int> // obf
     */ // obf
    protected $v_mncta = array(); // obf

    /** // obf
     * @var int // obf
     */ // obf
    protected $v_fgfps; // obf

    /** // obf
     * @param int $v_fgfps // obf
     */ // obf
    public function __construct($v_fgfps = 8) // obf
    { // obf
        parent::__construct($v_fgfps); // obf
        $v_vlhec->size = $v_fgfps; // obf
        $v_vlhec->values = array_fill(0, $v_fgfps, 0); // obf
    } // obf

    /** // obf
     * @return self // obf
     */ // obf
    public static function init() // obf
    { // obf
        return new self(8); // obf
    } // obf

    /** // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @param array<int, int> $v_tsjdy // obf
     * @param bool $v_lhypt // obf
     * @return self // obf
     * // obf
     * @psalm-suppress MethodSignatureMismatch // obf
     */ // obf
    #[ReturnTypeWillChange] // obf
    public static function fromArray($v_tsjdy, $v_lhypt = null) // obf
    { // obf
        $v_arsvd = count($v_tsjdy); // obf
        if ($v_lhypt) { // obf
            $v_qmvoj = array_keys($v_tsjdy); // obf
        } else { // obf
            $v_qmvoj = range(0, $v_arsvd - 1); // obf
        } // obf
        $v_tsjdy = array_values($v_tsjdy); // obf
        /** @var array<int, int> $v_qmvoj */ // obf

        $v_fpdma = new ParagonIE_Sodium_Core_AES_Block(); // obf
        if ($v_lhypt) { // obf
            for ($v_kvgrg = 0; $v_kvgrg < $v_arsvd; ++$v_kvgrg) { // obf
                $v_fpdma->offsetSet($v_qmvoj[$v_kvgrg], $v_tsjdy[$v_kvgrg]); // obf
            } // obf
        } else { // obf
            for ($v_kvgrg = 0; $v_kvgrg < $v_arsvd; ++$v_kvgrg) { // obf
                $v_fpdma->offsetSet($v_kvgrg, $v_tsjdy[$v_kvgrg]); // obf
            } // obf
        } // obf
        return $v_fpdma; // obf
    } // obf


    /** // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @param int|null $v_ejrwt // obf
     * @param int $v_pwajy // obf
     * @return void // obf
     * // obf
     * @psalm-suppress MethodSignatureMismatch // obf
     * @psalm-suppress MixedArrayOffset // obf
     */ // obf
    #[ReturnTypeWillChange] // obf
    public function offsetSet($v_ejrwt, $v_pwajy) // obf
    { // obf
        if (!is_int($v_pwajy)) { // obf
            throw new InvalidArgumentException('Expected an integer'); // obf
        } // obf
        if (is_null($v_ejrwt)) { // obf
            $v_vlhec->values[] = $v_pwajy; // obf
        } else { // obf
            $v_vlhec->values[$v_ejrwt] = $v_pwajy; // obf
        } // obf
    } // obf

    /** // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @param int $v_ejrwt // obf
     * @return bool // obf
     * // obf
     * @psalm-suppress MethodSignatureMismatch // obf
     * @psalm-suppress MixedArrayOffset // obf
     */ // obf
    #[ReturnTypeWillChange] // obf
    public function offsetExists($v_ejrwt) // obf
    { // obf
        return isset($v_vlhec->values[$v_ejrwt]); // obf
    } // obf

    /** // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @param int $v_ejrwt // obf
     * @return void // obf
     * // obf
     * @psalm-suppress MethodSignatureMismatch // obf
     * @psalm-suppress MixedArrayOffset // obf
     */ // obf
    #[ReturnTypeWillChange] // obf
    public function offsetUnset($v_ejrwt) // obf
    { // obf
        unset($v_vlhec->values[$v_ejrwt]); // obf
    } // obf

    /** // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @param int $v_ejrwt // obf
     * @return int // obf
     * // obf
     * @psalm-suppress MethodSignatureMismatch // obf
     * @psalm-suppress MixedArrayOffset // obf
     */ // obf
    #[ReturnTypeWillChange] // obf
    public function offsetGet($v_ejrwt) // obf
    { // obf
        if (!isset($v_vlhec->values[$v_ejrwt])) { // obf
            $v_vlhec->values[$v_ejrwt] = 0; // obf
        } // obf
        return (int) ($v_vlhec->values[$v_ejrwt]); // obf
    } // obf

    /** // obf
     * @internal You should not use this directly from another application // obf
     * // obf
     * @return array // obf
     */ // obf
    public function __debugInfo() // obf
    { // obf
        $v_ukhuz = array(); // obf
        foreach ($v_vlhec->values as $v_byzxp) { // obf
            $v_ukhuz[] = str_pad(dechex($v_byzxp), 8, '0', STR_PAD_LEFT); // obf
        } // obf
        return array(implode(', ', $v_ukhuz)); // obf
        /* // obf
         return array(implode(', ', $v_vlhec->values)); // obf
         */ // obf
    } // obf

    /** // obf
     * @param int $v_egcne low bit mask // obf
     * @param int $v_mnjir high bit mask // obf
     * @param int $v_phfvl shift // obf
     * @param int $v_ijkwf index 1 // obf
     * @param int $v_sbdrt index 2 // obf
     * @return self // obf
     */ // obf
    public function swapN($v_egcne, $v_mnjir, $v_phfvl, $v_ijkwf, $v_sbdrt) // obf
    { // obf
        static $v_naxqs = ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_deaqc = $v_vlhec->values[$v_ijkwf] & $v_naxqs; // obf
        $v_ybjoy = $v_vlhec->values[$v_sbdrt] & $v_naxqs; // obf
        // (x) = (a & cl) | ((b & cl) << (s)); // obf
        $v_vlhec->values[$v_ijkwf] = ($v_deaqc & $v_egcne) | ((($v_ybjoy & $v_egcne) << $v_phfvl) & $v_naxqs); // obf
        // (y) = ((a & ch) >> (s)) | (b & ch); // obf
        $v_vlhec->values[$v_sbdrt] = ((($v_deaqc & $v_mnjir) & $v_naxqs) >> $v_phfvl) | ($v_ybjoy & $v_mnjir); // obf
        return $v_vlhec; // obf
    } // obf

    /** // obf
     * @param int $v_ijkwf index 1 // obf
     * @param int $v_sbdrt index 2 // obf
     * @return self // obf
     */ // obf
    public function swap2($v_ijkwf, $v_sbdrt) // obf
    { // obf
        return $v_vlhec->swapN(0x55555555, 0xAAAAAAAA, 1, $v_ijkwf, $v_sbdrt); // obf
    } // obf

    /** // obf
     * @param int $v_ijkwf index 1 // obf
     * @param int $v_sbdrt index 2 // obf
     * @return self // obf
     */ // obf
    public function swap4($v_ijkwf, $v_sbdrt) // obf
    { // obf
        return $v_vlhec->swapN(0x33333333, 0xCCCCCCCC, 2, $v_ijkwf, $v_sbdrt); // obf
    } // obf

    /** // obf
     * @param int $v_ijkwf index 1 // obf
     * @param int $v_sbdrt index 2 // obf
     * @return self // obf
     */ // obf
    public function swap8($v_ijkwf, $v_sbdrt) // obf
    { // obf
        return $v_vlhec->swapN(0x0F0F0F0F, 0xF0F0F0F0, 4, $v_ijkwf, $v_sbdrt); // obf
    } // obf

    /** // obf
     * @return self // obf
     */ // obf
    public function orthogonalize() // obf
    { // obf
        return $v_vlhec // obf
            ->swap2(0, 1) // obf
            ->swap2(2, 3) // obf
            ->swap2(4, 5) // obf
            ->swap2(6, 7) // obf

            ->swap4(0, 2) // obf
            ->swap4(1, 3) // obf
            ->swap4(4, 6) // obf
            ->swap4(5, 7) // obf

            ->swap8(0, 4) // obf
            ->swap8(1, 5) // obf
            ->swap8(2, 6) // obf
            ->swap8(3, 7); // obf
    } // obf

    /** // obf
     * @return self // obf
     */ // obf
    public function shiftRows() // obf
    { // obf
        for ($v_kvgrg = 0; $v_kvgrg < 8; ++$v_kvgrg) { // obf
            $v_ijkwf = $v_vlhec->values[$v_kvgrg] & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
            $v_vlhec->values[$v_kvgrg] = ( // obf
                ($v_ijkwf & 0x000000FF) // obf
                    | (($v_ijkwf & 0x0000FC00) >> 2) | (($v_ijkwf & 0x00000300) << 6) // obf
                    | (($v_ijkwf & 0x00F00000) >> 4) | (($v_ijkwf & 0x000F0000) << 4) // obf
                    | (($v_ijkwf & 0xC0000000) >> 6) | (($v_ijkwf & 0x3F000000) << 2) // obf
            ) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        } // obf
        return $v_vlhec; // obf
    } // obf

    /** // obf
     * @param int $v_ijkwf // obf
     * @return int // obf
     */ // obf
    public static function rotr16($v_ijkwf) // obf
    { // obf
        return (($v_ijkwf << 16) & ParagonIE_Sodium_Core_Util::U32_MAX) | ($v_ijkwf >> 16); // obf
    } // obf

    /** // obf
     * @return self // obf
     */ // obf
    public function mixColumns() // obf
    { // obf
        $v_pyzba = $v_vlhec->values[0]; // obf
        $v_slqzx = $v_vlhec->values[1]; // obf
        $v_amxcj = $v_vlhec->values[2]; // obf
        $v_qwxpe = $v_vlhec->values[3]; // obf
        $v_iicqn = $v_vlhec->values[4]; // obf
        $v_xkovv = $v_vlhec->values[5]; // obf
        $v_nuqms = $v_vlhec->values[6]; // obf
        $v_mniwp = $v_vlhec->values[7]; // obf
        $v_jgauh = (($v_pyzba >> 8) | ($v_pyzba << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_txmqh = (($v_slqzx >> 8) | ($v_slqzx << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_uuvoi = (($v_amxcj >> 8) | ($v_amxcj << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_jgerr = (($v_qwxpe >> 8) | ($v_qwxpe << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_gsrot = (($v_iicqn >> 8) | ($v_iicqn << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_onudd = (($v_xkovv >> 8) | ($v_xkovv << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_dtxxn = (($v_nuqms >> 8) | ($v_nuqms << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_ihmtx = (($v_mniwp >> 8) | ($v_mniwp << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf

        $v_vlhec->values[0] = $v_mniwp ^ $v_ihmtx ^ $v_jgauh ^ self::rotr16($v_pyzba ^ $v_jgauh); // obf
        $v_vlhec->values[1] = $v_pyzba ^ $v_jgauh ^ $v_mniwp ^ $v_ihmtx ^ $v_txmqh ^ self::rotr16($v_slqzx ^ $v_txmqh); // obf
        $v_vlhec->values[2] = $v_slqzx ^ $v_txmqh ^ $v_uuvoi ^ self::rotr16($v_amxcj ^ $v_uuvoi); // obf
        $v_vlhec->values[3] = $v_amxcj ^ $v_uuvoi ^ $v_mniwp ^ $v_ihmtx ^ $v_jgerr ^ self::rotr16($v_qwxpe ^ $v_jgerr); // obf
        $v_vlhec->values[4] = $v_qwxpe ^ $v_jgerr ^ $v_mniwp ^ $v_ihmtx ^ $v_gsrot ^ self::rotr16($v_iicqn ^ $v_gsrot); // obf
        $v_vlhec->values[5] = $v_iicqn ^ $v_gsrot ^ $v_onudd ^ self::rotr16($v_xkovv ^ $v_onudd); // obf
        $v_vlhec->values[6] = $v_xkovv ^ $v_onudd ^ $v_dtxxn ^ self::rotr16($v_nuqms ^ $v_dtxxn); // obf
        $v_vlhec->values[7] = $v_nuqms ^ $v_dtxxn ^ $v_ihmtx ^ self::rotr16($v_mniwp ^ $v_ihmtx); // obf
        return $v_vlhec; // obf
    } // obf

    /** // obf
     * @return self // obf
     */ // obf
    public function inverseMixColumns() // obf
    { // obf
        $v_pyzba = $v_vlhec->values[0]; // obf
        $v_slqzx = $v_vlhec->values[1]; // obf
        $v_amxcj = $v_vlhec->values[2]; // obf
        $v_qwxpe = $v_vlhec->values[3]; // obf
        $v_iicqn = $v_vlhec->values[4]; // obf
        $v_xkovv = $v_vlhec->values[5]; // obf
        $v_nuqms = $v_vlhec->values[6]; // obf
        $v_mniwp = $v_vlhec->values[7]; // obf
        $v_jgauh = (($v_pyzba >> 8) | ($v_pyzba << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_txmqh = (($v_slqzx >> 8) | ($v_slqzx << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_uuvoi = (($v_amxcj >> 8) | ($v_amxcj << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_jgerr = (($v_qwxpe >> 8) | ($v_qwxpe << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_gsrot = (($v_iicqn >> 8) | ($v_iicqn << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_onudd = (($v_xkovv >> 8) | ($v_xkovv << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_dtxxn = (($v_nuqms >> 8) | ($v_nuqms << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        $v_ihmtx = (($v_mniwp >> 8) | ($v_mniwp << 24)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf

        $v_vlhec->values[0] = $v_xkovv ^ $v_nuqms ^ $v_mniwp ^ $v_jgauh ^ $v_onudd ^ $v_ihmtx ^ self::rotr16($v_pyzba ^ $v_xkovv ^ $v_nuqms ^ $v_jgauh ^ $v_onudd); // obf
        $v_vlhec->values[1] = $v_pyzba ^ $v_xkovv ^ $v_jgauh ^ $v_txmqh ^ $v_onudd ^ $v_dtxxn ^ $v_ihmtx ^ self::rotr16($v_slqzx ^ $v_xkovv ^ $v_mniwp ^ $v_txmqh ^ $v_onudd ^ $v_dtxxn); // obf
        $v_vlhec->values[2] = $v_pyzba ^ $v_slqzx ^ $v_nuqms ^ $v_txmqh ^ $v_uuvoi ^ $v_dtxxn ^ $v_ihmtx ^ self::rotr16($v_pyzba ^ $v_amxcj ^ $v_nuqms ^ $v_uuvoi ^ $v_dtxxn ^ $v_ihmtx); // obf
        $v_vlhec->values[3] = $v_pyzba ^ $v_slqzx ^ $v_amxcj ^ $v_xkovv ^ $v_nuqms ^ $v_jgauh ^ $v_uuvoi ^ $v_jgerr ^ $v_onudd ^ self::rotr16($v_pyzba ^ $v_slqzx ^ $v_qwxpe ^ $v_xkovv ^ $v_nuqms ^ $v_mniwp ^ $v_jgauh ^ $v_jgerr ^ $v_onudd ^ $v_ihmtx); // obf
        $v_vlhec->values[4] = $v_slqzx ^ $v_amxcj ^ $v_qwxpe ^ $v_xkovv ^ $v_txmqh ^ $v_jgerr ^ $v_gsrot ^ $v_onudd ^ $v_dtxxn ^ $v_ihmtx ^ self::rotr16($v_slqzx ^ $v_amxcj ^ $v_iicqn ^ $v_xkovv ^ $v_mniwp ^ $v_txmqh ^ $v_gsrot ^ $v_onudd ^ $v_dtxxn); // obf
        $v_vlhec->values[5] = $v_amxcj ^ $v_qwxpe ^ $v_iicqn ^ $v_nuqms ^ $v_uuvoi ^ $v_gsrot ^ $v_onudd ^ $v_dtxxn ^ $v_ihmtx ^ self::rotr16($v_amxcj ^ $v_qwxpe ^ $v_xkovv ^ $v_nuqms ^ $v_uuvoi ^ $v_onudd ^ $v_dtxxn ^ $v_ihmtx); // obf
        $v_vlhec->values[6] = $v_qwxpe ^ $v_iicqn ^ $v_xkovv ^ $v_mniwp ^ $v_jgerr ^ $v_onudd ^ $v_dtxxn ^ $v_ihmtx ^ self::rotr16($v_qwxpe ^ $v_iicqn ^ $v_nuqms ^ $v_mniwp ^ $v_jgerr ^ $v_dtxxn ^ $v_ihmtx); // obf
        $v_vlhec->values[7] = $v_iicqn ^ $v_xkovv ^ $v_nuqms ^ $v_gsrot ^ $v_dtxxn ^ $v_ihmtx ^ self::rotr16($v_iicqn ^ $v_xkovv ^ $v_mniwp ^ $v_gsrot ^ $v_ihmtx); // obf
        return $v_vlhec; // obf
    } // obf

    /** // obf
     * @return self // obf
     */ // obf
    public function inverseShiftRows() // obf
    { // obf
        for ($v_kvgrg = 0; $v_kvgrg < 8; ++$v_kvgrg) { // obf
            $v_ijkwf = $v_vlhec->values[$v_kvgrg]; // obf
            $v_vlhec->values[$v_kvgrg] = ParagonIE_Sodium_Core_Util::U32_MAX & ( // obf
                ($v_ijkwf & 0x000000FF) // obf
                    | (($v_ijkwf & 0x00003F00) << 2) | (($v_ijkwf & 0x0000C000) >> 6) // obf
                    | (($v_ijkwf & 0x000F0000) << 4) | (($v_ijkwf & 0x00F00000) >> 4) // obf
                    | (($v_ijkwf & 0x03000000) << 6) | (($v_ijkwf & 0xFC000000) >> 2) // obf
            ); // obf
        } // obf
        return $v_vlhec; // obf
    } // obf
} // obf