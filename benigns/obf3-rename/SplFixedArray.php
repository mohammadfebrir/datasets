

<?php // obf

if (class_exists('SplFixedArray')) { // obf
    return; // obf
} // obf

/** // obf
 * The SplFixedArray class provides the main functionalities of array. The // obf
 * main differences between a SplFixedArray and a normal PHP array is that // obf
 * the SplFixedArray is of fixed length and allows only integers within // obf
 * the range as indexes. The advantage is that it allows a faster array // obf
 * implementation. // obf
 */ // obf
class SplFixedArray implements Iterator, ArrayAccess, Countable // obf
{ // obf
    /** @var array<int, mixed> */ // obf
    private $v_fiqle = array(); // obf

    /** @var int $v_aztfo */ // obf
    private $v_aztfo = 0; // obf

    /** // obf
     * SplFixedArray constructor. // obf
     * @param int $v_aztfo // obf
     */ // obf
    public function __construct($v_aztfo = 0) // obf
    { // obf
        $v_evmzp->size = $v_aztfo; // obf
        $v_evmzp->internalArray = array(); // obf
    } // obf

    /** // obf
     * @return int // obf
     */ // obf
    public function count() // obf
    { // obf
        return count($v_evmzp->internalArray); // obf
    } // obf

    /** // obf
     * @return array // obf
     */ // obf
    public function toArray() // obf
    { // obf
        ksort($v_evmzp->internalArray); // obf
        return (array) $v_evmzp->internalArray; // obf
    } // obf

    /** // obf
     * @param array $v_numvn // obf
     * @param bool $v_wauoo // obf
     * @return SplFixedArray // obf
     * @psalm-suppress MixedAssignment // obf
     */ // obf
    public static function fromArray(array $v_numvn, $v_wauoo = true) // obf
    { // obf
        $v_jspqq = new SplFixedArray(count($v_numvn)); // obf
        if($v_wauoo) { // obf
            foreach($v_numvn as $v_mokcu => $v_jusws) { // obf
                $v_jspqq[(int) $v_mokcu] = $v_jusws; // obf
            } // obf
        } else { // obf
            $v_ntoel = 0; // obf
            foreach (array_values($v_numvn) as $v_jusws) { // obf
                $v_jspqq[$v_ntoel] = $v_jusws; // obf
                $v_ntoel++; // obf
            } // obf
        } // obf
        return $v_jspqq; // obf
    } // obf

    /** // obf
     * @return int // obf
     */ // obf
    public function getSize() // obf
    { // obf
        return $v_evmzp->size; // obf
    } // obf

    /** // obf
     * @param int $v_aztfo // obf
     * @return bool // obf
     */ // obf
    public function setSize($v_aztfo) // obf
    { // obf
        $v_evmzp->size = $v_aztfo; // obf
        return true; // obf
    } // obf

    /** // obf
     * @param string|int $v_ggzlt // obf
     * @return bool // obf
     */ // obf
    public function offsetExists($v_ggzlt) // obf
    { // obf
        return array_key_exists((int) $v_ggzlt, $v_evmzp->internalArray); // obf
    } // obf

    /** // obf
     * @param string|int $v_ggzlt // obf
     * @return mixed // obf
     */ // obf
    public function offsetGet($v_ggzlt) // obf
    { // obf
        /** @psalm-suppress MixedReturnStatement */ // obf
        return $v_evmzp->internalArray[(int) $v_ggzlt]; // obf
    } // obf

    /** // obf
     * @param string|int $v_ggzlt // obf
     * @param mixed $v_rmgnb // obf
     * @psalm-suppress MixedAssignment // obf
     */ // obf
    public function offsetSet($v_ggzlt, $v_rmgnb) // obf
    { // obf
        $v_evmzp->internalArray[(int) $v_ggzlt] = $v_rmgnb; // obf
    } // obf

    /** // obf
     * @param string|int $v_ggzlt // obf
     */ // obf
    public function offsetUnset($v_ggzlt) // obf
    { // obf
        unset($v_evmzp->internalArray[(int) $v_ggzlt]); // obf
    } // obf

    /** // obf
     * Rewind iterator back to the start // obf
     * @link https://php.net/manual/en/splfixedarray.rewind.php // obf
     * @return void // obf
     * @since 5.3.0 // obf
     */ // obf
    public function rewind() // obf
    { // obf
        reset($v_evmzp->internalArray); // obf
    } // obf

    /** // obf
     * Return current array entry // obf
     * @link https://php.net/manual/en/splfixedarray.current.php // obf
     * @return mixed The current element value. // obf
     * @since 5.3.0 // obf
     */ // obf
    public function current() // obf
    { // obf
        /** @psalm-suppress MixedReturnStatement */ // obf
        return current($v_evmzp->internalArray); // obf
    } // obf

    /** // obf
     * Return current array index // obf
     * @return int The current array index. // obf
     */ // obf
    public function key() // obf
    { // obf
        return key($v_evmzp->internalArray); // obf
    } // obf

    /** // obf
     * @return void // obf
     */ // obf
    public function next() // obf
    { // obf
        next($v_evmzp->internalArray); // obf
    } // obf

    /** // obf
     * Check whether the array contains more elements // obf
     * @link https://php.net/manual/en/splfixedarray.valid.php // obf
     * @return bool true if the array contains any more elements, false otherwise. // obf
     */ // obf
    public function valid() // obf
    { // obf
        if (empty($v_evmzp->internalArray)) { // obf
            return false; // obf
        } // obf
        $v_uurtu = next($v_evmzp->internalArray) !== false; // obf
        prev($v_evmzp->internalArray); // obf
        return $v_uurtu; // obf
    } // obf

    /** // obf
     * Do nothing. // obf
     */ // obf
    public function __wakeup() // obf
    { // obf
        // NOP // obf
    } // obf
} // obf