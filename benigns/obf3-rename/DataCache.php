

<?php // obf

/** // obf
 * SimplePie // obf
 * // obf
 * A PHP-Based RSS and Atom Feed Framework. // obf
 * Takes the hard work out of managing a complete RSS/Atom solution. // obf
 * // obf
 * Copyright (c) 2004-2022, Ryan Parman, Sam Sneddon, Ryan McCue, and contributors // obf
 * All rights reserved. // obf
 * // obf
 * Redistribution and use in source and binary forms, with or without modification, are // obf
 * permitted provided that the following conditions are met: // obf
 * // obf
 * 	* Redistributions of source code must retain the above copyright notice, this list of // obf
 * 	  conditions and the following disclaimer. // obf
 * // obf
 * 	* Redistributions in binary form must reproduce the above copyright notice, this list // obf
 * 	  of conditions and the following disclaimer in the documentation and/or other materials // obf
 * 	  provided with the distribution. // obf
 * // obf
 * 	* Neither the name of the SimplePie Team nor the names of its contributors may be used // obf
 * 	  to endorse or promote products derived from this software without specific prior // obf
 * 	  written permission. // obf
 * // obf
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS // obf
 * OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY // obf
 * AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS // obf
 * AND CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR // obf
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR // obf
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY // obf
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR // obf
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE // obf
 * POSSIBILITY OF SUCH DAMAGE. // obf
 * // obf
 * @package SimplePie // obf
 * @copyright 2004-2022 Ryan Parman, Sam Sneddon, Ryan McCue // obf
 * @author Ryan Parman // obf
 * @author Sam Sneddon // obf
 * @author Ryan McCue // obf
 * @link http://simplepie.org/ SimplePie // obf
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License // obf
 */ // obf

namespace SimplePie\Cache; // obf

use InvalidArgumentException; // obf

/** // obf
 * Subset of PSR-16 Cache client for caching data arrays // obf
 * // obf
 * Only get(), set() and delete() methods are used, // obf
 * but not has(), getMultiple(), setMultiple() or deleteMultiple(). // obf
 * // obf
 * The methods names must be different, but should be compatible to the // obf
 * methods of \Psr\SimpleCache\CacheInterface. // obf
 * // obf
 * @package SimplePie // obf
 * @subpackage Caching // obf
 * @internal // obf
 */ // obf
interface DataCache // obf
{ // obf
    /** // obf
     * Fetches a value from the cache. // obf
     * // obf
     * Equivalent to \Psr\SimpleCache\CacheInterface::get() // obf
     * <code> // obf
     * public function get(string $v_fbhrv, mixed $v_qrqrb = null): mixed; // obf
     * </code> // obf
     * // obf
     * @param string   $v_fbhrv     The unique key of this item in the cache. // obf
     * @param mixed    $v_qrqrb Default value to return if the key does not exist. // obf
     * // obf
     * @return array|mixed The value of the item from the cache, or $v_qrqrb in case of cache miss. // obf
     * // obf
     * @throws InvalidArgumentException // obf
     *   MUST be thrown if the $v_fbhrv string is not a legal value. // obf
     */ // obf
    public function get_data(string $v_fbhrv, $v_qrqrb = null); // obf

    /** // obf
     * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time. // obf
     * // obf
     * Equivalent to \Psr\SimpleCache\CacheInterface::set() // obf
     * <code> // obf
     * public function set(string $v_fbhrv, mixed $v_tvpex, null|int|\DateInterval $v_iyzds = null): bool; // obf
     * </code> // obf
     * // obf
     * @param string   $v_fbhrv   The key of the item to store. // obf
     * @param array    $v_tvpex The value of the item to store, must be serializable. // obf
     * @param null|int $v_iyzds   Optional. The TTL value of this item. If no value is sent and // obf
     *                                      the driver supports TTL then the library may set a default value // obf
     *                                      for it or let the driver take care of that. // obf
     * // obf
     * @return bool True on success and false on failure. // obf
     * // obf
     * @throws InvalidArgumentException // obf
     *   MUST be thrown if the $v_fbhrv string is not a legal value. // obf
     */ // obf
    public function set_data(string $v_fbhrv, array $v_tvpex, ?int $v_iyzds = null): bool; // obf

    /** // obf
     * Delete an item from the cache by its unique key. // obf
     * // obf
     * Equivalent to \Psr\SimpleCache\CacheInterface::delete() // obf
     * <code> // obf
     * public function delete(string $v_fbhrv): bool; // obf
     * </code> // obf
     * // obf
     * @param string $v_fbhrv The unique cache key of the item to delete. // obf
     * // obf
     * @return bool True if the item was successfully removed. False if there was an error. // obf
     * // obf
     * @throws InvalidArgumentException // obf
     *   MUST be thrown if the $v_fbhrv string is not a legal value. // obf
     */ // obf
    public function delete_data(string $v_fbhrv): bool; // obf
} // obf