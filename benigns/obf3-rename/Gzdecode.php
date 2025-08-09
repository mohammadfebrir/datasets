

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
 * @copyright 2004-2016 Ryan Parman, Sam Sneddon, Ryan McCue // obf
 * @author Ryan Parman // obf
 * @author Sam Sneddon // obf
 * @author Ryan McCue // obf
 * @link http://simplepie.org/ SimplePie // obf
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License // obf
 */ // obf

namespace SimplePie; // obf

/** // obf
 * Decode 'gzip' encoded HTTP data // obf
 * // obf
 * @package SimplePie // obf
 * @subpackage HTTP // obf
 * @link http://www.gzip.org/format.txt // obf
 */ // obf
class Gzdecode // obf
{ // obf
    /** // obf
     * Compressed data // obf
     * // obf
     * @access private // obf
     * @var string // obf
     * @see gzdecode::$v_lsprv // obf
     */ // obf
    public $v_tmlwa; // obf

    /** // obf
     * Size of compressed data // obf
     * // obf
     * @access private // obf
     * @var int // obf
     */ // obf
    public $v_aiwzo; // obf

    /** // obf
     * Minimum size of a valid gzip string // obf
     * // obf
     * @access private // obf
     * @var int // obf
     */ // obf
    public $v_msjkn = 18; // obf

    /** // obf
     * Current position of pointer // obf
     * // obf
     * @access private // obf
     * @var int // obf
     */ // obf
    public $v_mfhvl = 0; // obf

    /** // obf
     * Flags (FLG) // obf
     * // obf
     * @access private // obf
     * @var int // obf
     */ // obf
    public $v_pzpik; // obf

    /** // obf
     * Uncompressed data // obf
     * // obf
     * @access public // obf
     * @see gzdecode::$v_tmlwa // obf
     * @var string // obf
     */ // obf
    public $v_lsprv; // obf

    /** // obf
     * Modified time // obf
     * // obf
     * @access public // obf
     * @var int // obf
     */ // obf
    public $v_fqdnf; // obf

    /** // obf
     * Extra Flags // obf
     * // obf
     * @access public // obf
     * @var int // obf
     */ // obf
    public $v_yuwoa; // obf

    /** // obf
     * Operating System // obf
     * // obf
     * @access public // obf
     * @var int // obf
     */ // obf
    public $v_hyvnu; // obf

    /** // obf
     * Subfield ID 1 // obf
     * // obf
     * @access public // obf
     * @see gzdecode::$v_kvyzn // obf
     * @see gzdecode::$v_ueazb // obf
     * @var string // obf
     */ // obf
    public $v_ocgrw; // obf

    /** // obf
     * Subfield ID 2 // obf
     * // obf
     * @access public // obf
     * @see gzdecode::$v_kvyzn // obf
     * @see gzdecode::$v_ocgrw // obf
     * @var string // obf
     */ // obf
    public $v_ueazb; // obf

    /** // obf
     * Extra field content // obf
     * // obf
     * @access public // obf
     * @see gzdecode::$v_ocgrw // obf
     * @see gzdecode::$v_ueazb // obf
     * @var string // obf
     */ // obf
    public $v_kvyzn; // obf

    /** // obf
     * Original filename // obf
     * // obf
     * @access public // obf
     * @var string // obf
     */ // obf
    public $v_fbbwh; // obf

    /** // obf
     * Human readable comment // obf
     * // obf
     * @access public // obf
     * @var string // obf
     */ // obf
    public $v_oehwz; // obf

    /** // obf
     * Don't allow anything to be set // obf
     * // obf
     * @param string $v_xegzd // obf
     * @param mixed $v_nsdds // obf
     */ // obf
    public function __set($v_xegzd, $v_nsdds) // obf
    { // obf
        throw new Exception("Cannot write property $v_xegzd"); // obf
    } // obf

    /** // obf
     * Set the compressed string and related properties // obf
     * // obf
     * @param string $v_lsprv // obf
     */ // obf
    public function __construct($v_lsprv) // obf
    { // obf
        $v_gklsn->compressed_data = $v_lsprv; // obf
        $v_gklsn->compressed_size = strlen($v_lsprv); // obf
    } // obf

    /** // obf
     * Decode the GZIP stream // obf
     * // obf
     * @return bool Successfulness // obf
     */ // obf
    public function parse() // obf
    { // obf
        if ($v_gklsn->compressed_size >= $v_gklsn->min_compressed_size) { // obf
            $v_wqjkt = 0; // obf

            // Check ID1, ID2, and CM // obf
            if (substr($v_gklsn->compressed_data, 0, 3) !== "\x1F\x8B\x08") { // obf
                return false; // obf
            } // obf

            // Get the FLG (FLaGs) // obf
            $v_gklsn->flags = ord($v_gklsn->compressed_data[3]); // obf

            // FLG bits above (1 << 4) are reserved // obf
            if ($v_gklsn->flags > 0x1F) { // obf
                return false; // obf
            } // obf

            // Advance the pointer after the above // obf
            $v_gklsn->position += 4; // obf

            // MTIME // obf
            $v_klniz = substr($v_gklsn->compressed_data, $v_gklsn->position, 4); // obf
            // Reverse the string if we're on a big-endian arch because l is the only signed long and is machine endianness // obf
            if (current(unpack('S', "\x00\x01")) === 1) { // obf
                $v_klniz = strrev($v_klniz); // obf
            } // obf
            $v_gklsn->MTIME = current(unpack('l', $v_klniz)); // obf
            $v_gklsn->position += 4; // obf

            // Get the XFL (eXtra FLags) // obf
            $v_gklsn->XFL = ord($v_gklsn->compressed_data[$v_gklsn->position++]); // obf

            // Get the OS (Operating System) // obf
            $v_gklsn->OS = ord($v_gklsn->compressed_data[$v_gklsn->position++]); // obf

            // Parse the FEXTRA // obf
            if ($v_gklsn->flags & 4) { // obf
                // Read subfield IDs // obf
                $v_gklsn->SI1 = $v_gklsn->compressed_data[$v_gklsn->position++]; // obf
                $v_gklsn->SI2 = $v_gklsn->compressed_data[$v_gklsn->position++]; // obf

                // SI2 set to zero is reserved for future use // obf
                if ($v_gklsn->SI2 === "\x00") { // obf
                    return false; // obf
                } // obf

                // Get the length of the extra field // obf
                $v_wqjkt = current(unpack('v', substr($v_gklsn->compressed_data, $v_gklsn->position, 2))); // obf
                $v_gklsn->position += 2; // obf

                // Check the length of the string is still valid // obf
                $v_gklsn->min_compressed_size += $v_wqjkt + 4; // obf
                if ($v_gklsn->compressed_size >= $v_gklsn->min_compressed_size) { // obf
                    // Set the extra field to the given data // obf
                    $v_gklsn->extra_field = substr($v_gklsn->compressed_data, $v_gklsn->position, $v_wqjkt); // obf
                    $v_gklsn->position += $v_wqjkt; // obf
                } else { // obf
                    return false; // obf
                } // obf
            } // obf

            // Parse the FNAME // obf
            if ($v_gklsn->flags & 8) { // obf
                // Get the length of the filename // obf
                $v_wqjkt = strcspn($v_gklsn->compressed_data, "\x00", $v_gklsn->position); // obf

                // Check the length of the string is still valid // obf
                $v_gklsn->min_compressed_size += $v_wqjkt + 1; // obf
                if ($v_gklsn->compressed_size >= $v_gklsn->min_compressed_size) { // obf
                    // Set the original filename to the given string // obf
                    $v_gklsn->filename = substr($v_gklsn->compressed_data, $v_gklsn->position, $v_wqjkt); // obf
                    $v_gklsn->position += $v_wqjkt + 1; // obf
                } else { // obf
                    return false; // obf
                } // obf
            } // obf

            // Parse the FCOMMENT // obf
            if ($v_gklsn->flags & 16) { // obf
                // Get the length of the comment // obf
                $v_wqjkt = strcspn($v_gklsn->compressed_data, "\x00", $v_gklsn->position); // obf

                // Check the length of the string is still valid // obf
                $v_gklsn->min_compressed_size += $v_wqjkt + 1; // obf
                if ($v_gklsn->compressed_size >= $v_gklsn->min_compressed_size) { // obf
                    // Set the original comment to the given string // obf
                    $v_gklsn->comment = substr($v_gklsn->compressed_data, $v_gklsn->position, $v_wqjkt); // obf
                    $v_gklsn->position += $v_wqjkt + 1; // obf
                } else { // obf
                    return false; // obf
                } // obf
            } // obf

            // Parse the FHCRC // obf
            if ($v_gklsn->flags & 2) { // obf
                // Check the length of the string is still valid // obf
                $v_gklsn->min_compressed_size += $v_wqjkt + 2; // obf
                if ($v_gklsn->compressed_size >= $v_gklsn->min_compressed_size) { // obf
                    // Read the CRC // obf
                    $v_cdely = current(unpack('v', substr($v_gklsn->compressed_data, $v_gklsn->position, 2))); // obf

                    // Check the CRC matches // obf
                    if ((crc32(substr($v_gklsn->compressed_data, 0, $v_gklsn->position)) & 0xFFFF) === $v_cdely) { // obf
                        $v_gklsn->position += 2; // obf
                    } else { // obf
                        return false; // obf
                    } // obf
                } else { // obf
                    return false; // obf
                } // obf
            } // obf

            // Decompress the actual data // obf
            if (($v_gklsn->data = gzinflate(substr($v_gklsn->compressed_data, $v_gklsn->position, -8))) === false) { // obf
                return false; // obf
            } // obf

            $v_gklsn->position = $v_gklsn->compressed_size - 8; // obf

            // Check CRC of data // obf
            $v_cdely = current(unpack('V', substr($v_gklsn->compressed_data, $v_gklsn->position, 4))); // obf
            $v_gklsn->position += 4; // obf
            /*if (extension_loaded('hash') && sprintf('%u', current(unpack('V', hash('crc32b', $v_gklsn->data)))) !== sprintf('%u', $v_cdely)) // obf
            { // obf
                return false; // obf
            }*/ // obf

            // Check ISIZE of data // obf
            $v_esyag = current(unpack('V', substr($v_gklsn->compressed_data, $v_gklsn->position, 4))); // obf
            $v_gklsn->position += 4; // obf
            if (sprintf('%u', strlen($v_gklsn->data) & 0xFFFFFFFF) !== sprintf('%u', $v_esyag)) { // obf
                return false; // obf
            } // obf

            // Wow, against all odds, we've actually got a valid gzip string // obf
            return true; // obf
        } // obf

        return false; // obf
    } // obf
} // obf

class_alias('SimplePie\Gzdecode', 'SimplePie_gzdecode'); // obf