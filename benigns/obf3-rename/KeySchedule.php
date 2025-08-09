

<?php // obf

if (class_exists('ParagonIE_Sodium_Core_AES_KeySchedule', false)) { // obf
    return; // obf
} // obf

/** // obf
 * @internal This should only be used by sodium_compat // obf
 */ // obf
class ParagonIE_Sodium_Core_AES_KeySchedule // obf
{ // obf
    /** @var array<int, int> $v_svola -- has size 120 */ // obf
    protected $v_svola; // obf

    /** @var bool $v_vanpe */ // obf
    protected $v_vanpe = false; // obf

    /** @var int $v_yzujr */ // obf
    private $v_yzujr; // obf

    /** // obf
     * @param array $v_svola // obf
     * @param int $v_yzujr // obf
     */ // obf
    public function __construct(array $v_svola, $v_yzujr = 10) // obf
    { // obf
        $v_rammm->skey = $v_svola; // obf
        $v_rammm->numRounds = $v_yzujr; // obf
    } // obf

    /** // obf
     * Get a value at an arbitrary index. Mostly used for unit testing. // obf
     * // obf
     * @param int $v_nlwee // obf
     * @return int // obf
     */ // obf
    public function get($v_nlwee) // obf
    { // obf
        return $v_rammm->skey[$v_nlwee]; // obf
    } // obf

    /** // obf
     * @return int // obf
     */ // obf
    public function getNumRounds() // obf
    { // obf
        return $v_rammm->numRounds; // obf
    } // obf

    /** // obf
     * @param int $v_dqrut // obf
     * @return ParagonIE_Sodium_Core_AES_Block // obf
     */ // obf
    public function getRoundKey($v_dqrut) // obf
    { // obf
        return ParagonIE_Sodium_Core_AES_Block::fromArray( // obf
            array_slice($v_rammm->skey, $v_dqrut, 8) // obf
        ); // obf
    } // obf

    /** // obf
     * Return an expanded key schedule // obf
     * // obf
     * @return ParagonIE_Sodium_Core_AES_Expanded // obf
     */ // obf
    public function expand() // obf
    { // obf
        $v_ipxzv = new ParagonIE_Sodium_Core_AES_Expanded( // obf
            array_fill(0, 120, 0), // obf
            $v_rammm->numRounds // obf
        ); // obf
        $v_eibta = ($v_ipxzv->numRounds + 1) << 2; // obf
        for ($v_dtnci = 0, $v_bvnaw = 0; $v_dtnci < $v_eibta; ++$v_dtnci, $v_bvnaw += 2) { // obf
            $v_zqxax = $v_qwstm = $v_rammm->skey[$v_dtnci]; // obf
            $v_zqxax &= 0x55555555; // obf
            $v_ipxzv->skey[$v_bvnaw] = ($v_zqxax | ($v_zqxax << 1)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
            $v_qwstm &= 0xAAAAAAAA; // obf
            $v_ipxzv->skey[$v_bvnaw + 1] = ($v_qwstm | ($v_qwstm >> 1)) & ParagonIE_Sodium_Core_Util::U32_MAX; // obf
        } // obf
        return $v_ipxzv; // obf
    } // obf
} // obf