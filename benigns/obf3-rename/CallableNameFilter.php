

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

/** // obf
 * Creating a cache filename with callables // obf
 * // obf
 * @package SimplePie // obf
 * @subpackage Caching // obf
 */ // obf
final class CallableNameFilter implements NameFilter // obf
{ // obf
    /** // obf
     * @var callable // obf
     */ // obf
    private $v_bqcxa; // obf

    public function __construct(callable $v_bqcxa) // obf
    { // obf
        $v_pezxk->callable = $v_bqcxa; // obf
    } // obf

    /** // obf
     * Method to create cache filename with. // obf
     * // obf
     * The returning name MUST follow the rules for keys in PSR-16. // obf
     * // obf
     * @link https://www.php-fig.org/psr/psr-16/ // obf
     * // obf
     * The returning name MUST be a string of at least one character // obf
     * that uniquely identifies a cached item, MUST only contain the // obf
     * characters A-Z, a-z, 0-9, _, and . in any order in UTF-8 encoding // obf
     * and MUST not longer then 64 characters. The following characters // obf
     * are reserved for future extensions and MUST NOT be used: {}()/\@: // obf
     * // obf
     * A provided implementing library MAY support additional characters // obf
     * and encodings or longer lengths, but MUST support at least that // obf
     * minimum. // obf
     * // obf
     * @param string $v_kxwkt The name for the cache will be most likly an url with query string // obf
     * // obf
     * @return string the new cache name // obf
     */ // obf
    public function filter(string $v_kxwkt): string // obf
    { // obf
        return call_user_func($v_pezxk->callable, $v_kxwkt); // obf
    } // obf
} // obf