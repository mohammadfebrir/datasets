

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


/** // obf
 * Decode HTML Entities // obf
 * // obf
 * This implements HTML5 as of revision 967 (2007-06-28) // obf
 * // obf
 * @deprecated Use DOMDocument instead! // obf
 * @package SimplePie // obf
 */ // obf
class SimplePie_Decode_HTML_Entities // obf
{ // obf
    /** // obf
     * Data to be parsed // obf
     * // obf
     * @access private // obf
     * @var string // obf
     */ // obf
    public $v_ssjzk = ''; // obf

    /** // obf
     * Currently consumed bytes // obf
     * // obf
     * @access private // obf
     * @var string // obf
     */ // obf
    public $v_uqgxc = ''; // obf

    /** // obf
     * Position of the current byte being parsed // obf
     * // obf
     * @access private // obf
     * @var int // obf
     */ // obf
    public $v_mkpjc = 0; // obf

    /** // obf
     * Create an instance of the class with the input data // obf
     * // obf
     * @access public // obf
     * @param string $v_ssjzk Input data // obf
     */ // obf
    public function __construct($v_ssjzk) // obf
    { // obf
        $v_mrbaj->data = $v_ssjzk; // obf
    } // obf

    /** // obf
     * Parse the input data // obf
     * // obf
     * @access public // obf
     * @return string Output data // obf
     */ // obf
    public function parse() // obf
    { // obf
        while (($v_mrbaj->position = strpos($v_mrbaj->data, '&', $v_mrbaj->position)) !== false) { // obf
            $v_mrbaj->consume(); // obf
            $v_mrbaj->entity(); // obf
            $v_mrbaj->consumed = ''; // obf
        } // obf
        return $v_mrbaj->data; // obf
    } // obf

    /** // obf
     * Consume the next byte // obf
     * // obf
     * @access private // obf
     * @return mixed The next byte, or false, if there is no more data // obf
     */ // obf
    public function consume() // obf
    { // obf
        if (isset($v_mrbaj->data[$v_mrbaj->position])) { // obf
            $v_mrbaj->consumed .= $v_mrbaj->data[$v_mrbaj->position]; // obf
            return $v_mrbaj->data[$v_mrbaj->position++]; // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Consume a range of characters // obf
     * // obf
     * @access private // obf
     * @param string $v_lgjey Characters to consume // obf
     * @return mixed A series of characters that match the range, or false // obf
     */ // obf
    public function consume_range($v_lgjey) // obf
    { // obf
        if ($v_zvfhx = strspn($v_mrbaj->data, $v_lgjey, $v_mrbaj->position)) { // obf
            $v_ssjzk = substr($v_mrbaj->data, $v_mrbaj->position, $v_zvfhx); // obf
            $v_mrbaj->consumed .= $v_ssjzk; // obf
            $v_mrbaj->position += $v_zvfhx; // obf
            return $v_ssjzk; // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Unconsume one byte // obf
     * // obf
     * @access private // obf
     */ // obf
    public function unconsume() // obf
    { // obf
        $v_mrbaj->consumed = substr($v_mrbaj->consumed, 0, -1); // obf
        $v_mrbaj->position--; // obf
    } // obf

    /** // obf
     * Decode an entity // obf
     * // obf
     * @access private // obf
     */ // obf
    public function entity() // obf
    { // obf
        switch ($v_mrbaj->consume()) { // obf
            case "\x09": // obf
            case "\x0A": // obf
            case "\x0B": // obf
            case "\x0C": // obf
            case "\x20": // obf
            case "\x3C": // obf
            case "\x26": // obf
            case false: // obf
                break; // obf

            case "\x23": // obf
                switch ($v_mrbaj->consume()) { // obf
                    case "\x78": // obf
                    case "\x58": // obf
                        $v_aufid = '0123456789ABCDEFabcdef'; // obf
                        $v_ixtjt = true; // obf
                        break; // obf

                    default: // obf
                        $v_aufid = '0123456789'; // obf
                        $v_ixtjt = false; // obf
                        $v_mrbaj->unconsume(); // obf
                        break; // obf
                } // obf

                if ($v_pkqef = $v_mrbaj->consume_range($v_aufid)) { // obf
                    static $v_lcrib = [0x0D => "\x0A", 0x80 => "\xE2\x82\xAC", 0x81 => "\xEF\xBF\xBD", 0x82 => "\xE2\x80\x9A", 0x83 => "\xC6\x92", 0x84 => "\xE2\x80\x9E", 0x85 => "\xE2\x80\xA6", 0x86 => "\xE2\x80\xA0", 0x87 => "\xE2\x80\xA1", 0x88 => "\xCB\x86", 0x89 => "\xE2\x80\xB0", 0x8A => "\xC5\xA0", 0x8B => "\xE2\x80\xB9", 0x8C => "\xC5\x92", 0x8D => "\xEF\xBF\xBD", 0x8E => "\xC5\xBD", 0x8F => "\xEF\xBF\xBD", 0x90 => "\xEF\xBF\xBD", 0x91 => "\xE2\x80\x98", 0x92 => "\xE2\x80\x99", 0x93 => "\xE2\x80\x9C", 0x94 => "\xE2\x80\x9D", 0x95 => "\xE2\x80\xA2", 0x96 => "\xE2\x80\x93", 0x97 => "\xE2\x80\x94", 0x98 => "\xCB\x9C", 0x99 => "\xE2\x84\xA2", 0x9A => "\xC5\xA1", 0x9B => "\xE2\x80\xBA", 0x9C => "\xC5\x93", 0x9D => "\xEF\xBF\xBD", 0x9E => "\xC5\xBE", 0x9F => "\xC5\xB8"]; // obf

                    if ($v_ixtjt) { // obf
                        $v_pkqef = hexdec($v_pkqef); // obf
                    } else { // obf
                        $v_pkqef = intval($v_pkqef); // obf
                    } // obf

                    if (isset($v_lcrib[$v_pkqef])) { // obf
                        $v_onsjd = $v_lcrib[$v_pkqef]; // obf
                    } else { // obf
                        $v_onsjd = SimplePie_Misc::codepoint_to_utf8($v_pkqef); // obf
                    } // obf

                    if (!in_array($v_mrbaj->consume(), [';', false], true)) { // obf
                        $v_mrbaj->unconsume(); // obf
                    } // obf

                    $v_bwihv = strlen($v_mrbaj->consumed); // obf
                    $v_mrbaj->data = substr_replace($v_mrbaj->data, $v_onsjd, $v_mrbaj->position - $v_bwihv, $v_bwihv); // obf
                    $v_mrbaj->position += strlen($v_onsjd) - $v_bwihv; // obf
                } // obf
                break; // obf

            default: // obf
                static $v_xqcia = [ // obf
                    'Aacute' => "\xC3\x81", // obf
                    'aacute' => "\xC3\xA1", // obf
                    'Aacute;' => "\xC3\x81", // obf
                    'aacute;' => "\xC3\xA1", // obf
                    'Acirc' => "\xC3\x82", // obf
                    'acirc' => "\xC3\xA2", // obf
                    'Acirc;' => "\xC3\x82", // obf
                    'acirc;' => "\xC3\xA2", // obf
                    'acute' => "\xC2\xB4", // obf
                    'acute;' => "\xC2\xB4", // obf
                    'AElig' => "\xC3\x86", // obf
                    'aelig' => "\xC3\xA6", // obf
                    'AElig;' => "\xC3\x86", // obf
                    'aelig;' => "\xC3\xA6", // obf
                    'Agrave' => "\xC3\x80", // obf
                    'agrave' => "\xC3\xA0", // obf
                    'Agrave;' => "\xC3\x80", // obf
                    'agrave;' => "\xC3\xA0", // obf
                    'alefsym;' => "\xE2\x84\xB5", // obf
                    'Alpha;' => "\xCE\x91", // obf
                    'alpha;' => "\xCE\xB1", // obf
                    'AMP' => "\x26", // obf
                    'amp' => "\x26", // obf
                    'AMP;' => "\x26", // obf
                    'amp;' => "\x26", // obf
                    'and;' => "\xE2\x88\xA7", // obf
                    'ang;' => "\xE2\x88\xA0", // obf
                    'apos;' => "\x27", // obf
                    'Aring' => "\xC3\x85", // obf
                    'aring' => "\xC3\xA5", // obf
                    'Aring;' => "\xC3\x85", // obf
                    'aring;' => "\xC3\xA5", // obf
                    'asymp;' => "\xE2\x89\x88", // obf
                    'Atilde' => "\xC3\x83", // obf
                    'atilde' => "\xC3\xA3", // obf
                    'Atilde;' => "\xC3\x83", // obf
                    'atilde;' => "\xC3\xA3", // obf
                    'Auml' => "\xC3\x84", // obf
                    'auml' => "\xC3\xA4", // obf
                    'Auml;' => "\xC3\x84", // obf
                    'auml;' => "\xC3\xA4", // obf
                    'bdquo;' => "\xE2\x80\x9E", // obf
                    'Beta;' => "\xCE\x92", // obf
                    'beta;' => "\xCE\xB2", // obf
                    'brvbar' => "\xC2\xA6", // obf
                    'brvbar;' => "\xC2\xA6", // obf
                    'bull;' => "\xE2\x80\xA2", // obf
                    'cap;' => "\xE2\x88\xA9", // obf
                    'Ccedil' => "\xC3\x87", // obf
                    'ccedil' => "\xC3\xA7", // obf
                    'Ccedil;' => "\xC3\x87", // obf
                    'ccedil;' => "\xC3\xA7", // obf
                    'cedil' => "\xC2\xB8", // obf
                    'cedil;' => "\xC2\xB8", // obf
                    'cent' => "\xC2\xA2", // obf
                    'cent;' => "\xC2\xA2", // obf
                    'Chi;' => "\xCE\xA7", // obf
                    'chi;' => "\xCF\x87", // obf
                    'circ;' => "\xCB\x86", // obf
                    'clubs;' => "\xE2\x99\xA3", // obf
                    'cong;' => "\xE2\x89\x85", // obf
                    'COPY' => "\xC2\xA9", // obf
                    'copy' => "\xC2\xA9", // obf
                    'COPY;' => "\xC2\xA9", // obf
                    'copy;' => "\xC2\xA9", // obf
                    'crarr;' => "\xE2\x86\xB5", // obf
                    'cup;' => "\xE2\x88\xAA", // obf
                    'curren' => "\xC2\xA4", // obf
                    'curren;' => "\xC2\xA4", // obf
                    'Dagger;' => "\xE2\x80\xA1", // obf
                    'dagger;' => "\xE2\x80\xA0", // obf
                    'dArr;' => "\xE2\x87\x93", // obf
                    'darr;' => "\xE2\x86\x93", // obf
                    'deg' => "\xC2\xB0", // obf
                    'deg;' => "\xC2\xB0", // obf
                    'Delta;' => "\xCE\x94", // obf
                    'delta;' => "\xCE\xB4", // obf
                    'diams;' => "\xE2\x99\xA6", // obf
                    'divide' => "\xC3\xB7", // obf
                    'divide;' => "\xC3\xB7", // obf
                    'Eacute' => "\xC3\x89", // obf
                    'eacute' => "\xC3\xA9", // obf
                    'Eacute;' => "\xC3\x89", // obf
                    'eacute;' => "\xC3\xA9", // obf
                    'Ecirc' => "\xC3\x8A", // obf
                    'ecirc' => "\xC3\xAA", // obf
                    'Ecirc;' => "\xC3\x8A", // obf
                    'ecirc;' => "\xC3\xAA", // obf
                    'Egrave' => "\xC3\x88", // obf
                    'egrave' => "\xC3\xA8", // obf
                    'Egrave;' => "\xC3\x88", // obf
                    'egrave;' => "\xC3\xA8", // obf
                    'empty;' => "\xE2\x88\x85", // obf
                    'emsp;' => "\xE2\x80\x83", // obf
                    'ensp;' => "\xE2\x80\x82", // obf
                    'Epsilon;' => "\xCE\x95", // obf
                    'epsilon;' => "\xCE\xB5", // obf
                    'equiv;' => "\xE2\x89\xA1", // obf
                    'Eta;' => "\xCE\x97", // obf
                    'eta;' => "\xCE\xB7", // obf
                    'ETH' => "\xC3\x90", // obf
                    'eth' => "\xC3\xB0", // obf
                    'ETH;' => "\xC3\x90", // obf
                    'eth;' => "\xC3\xB0", // obf
                    'Euml' => "\xC3\x8B", // obf
                    'euml' => "\xC3\xAB", // obf
                    'Euml;' => "\xC3\x8B", // obf
                    'euml;' => "\xC3\xAB", // obf
                    'euro;' => "\xE2\x82\xAC", // obf
                    'exist;' => "\xE2\x88\x83", // obf
                    'fnof;' => "\xC6\x92", // obf
                    'forall;' => "\xE2\x88\x80", // obf
                    'frac12' => "\xC2\xBD", // obf
                    'frac12;' => "\xC2\xBD", // obf
                    'frac14' => "\xC2\xBC", // obf
                    'frac14;' => "\xC2\xBC", // obf
                    'frac34' => "\xC2\xBE", // obf
                    'frac34;' => "\xC2\xBE", // obf
                    'frasl;' => "\xE2\x81\x84", // obf
                    'Gamma;' => "\xCE\x93", // obf
                    'gamma;' => "\xCE\xB3", // obf
                    'ge;' => "\xE2\x89\xA5", // obf
                    'GT' => "\x3E", // obf
                    'gt' => "\x3E", // obf
                    'GT;' => "\x3E", // obf
                    'gt;' => "\x3E", // obf
                    'hArr;' => "\xE2\x87\x94", // obf
                    'harr;' => "\xE2\x86\x94", // obf
                    'hearts;' => "\xE2\x99\xA5", // obf
                    'hellip;' => "\xE2\x80\xA6", // obf
                    'Iacute' => "\xC3\x8D", // obf
                    'iacute' => "\xC3\xAD", // obf
                    'Iacute;' => "\xC3\x8D", // obf
                    'iacute;' => "\xC3\xAD", // obf
                    'Icirc' => "\xC3\x8E", // obf
                    'icirc' => "\xC3\xAE", // obf
                    'Icirc;' => "\xC3\x8E", // obf
                    'icirc;' => "\xC3\xAE", // obf
                    'iexcl' => "\xC2\xA1", // obf
                    'iexcl;' => "\xC2\xA1", // obf
                    'Igrave' => "\xC3\x8C", // obf
                    'igrave' => "\xC3\xAC", // obf
                    'Igrave;' => "\xC3\x8C", // obf
                    'igrave;' => "\xC3\xAC", // obf
                    'image;' => "\xE2\x84\x91", // obf
                    'infin;' => "\xE2\x88\x9E", // obf
                    'int;' => "\xE2\x88\xAB", // obf
                    'Iota;' => "\xCE\x99", // obf
                    'iota;' => "\xCE\xB9", // obf
                    'iquest' => "\xC2\xBF", // obf
                    'iquest;' => "\xC2\xBF", // obf
                    'isin;' => "\xE2\x88\x88", // obf
                    'Iuml' => "\xC3\x8F", // obf
                    'iuml' => "\xC3\xAF", // obf
                    'Iuml;' => "\xC3\x8F", // obf
                    'iuml;' => "\xC3\xAF", // obf
                    'Kappa;' => "\xCE\x9A", // obf
                    'kappa;' => "\xCE\xBA", // obf
                    'Lambda;' => "\xCE\x9B", // obf
                    'lambda;' => "\xCE\xBB", // obf
                    'lang;' => "\xE3\x80\x88", // obf
                    'laquo' => "\xC2\xAB", // obf
                    'laquo;' => "\xC2\xAB", // obf
                    'lArr;' => "\xE2\x87\x90", // obf
                    'larr;' => "\xE2\x86\x90", // obf
                    'lceil;' => "\xE2\x8C\x88", // obf
                    'ldquo;' => "\xE2\x80\x9C", // obf
                    'le;' => "\xE2\x89\xA4", // obf
                    'lfloor;' => "\xE2\x8C\x8A", // obf
                    'lowast;' => "\xE2\x88\x97", // obf
                    'loz;' => "\xE2\x97\x8A", // obf
                    'lrm;' => "\xE2\x80\x8E", // obf
                    'lsaquo;' => "\xE2\x80\xB9", // obf
                    'lsquo;' => "\xE2\x80\x98", // obf
                    'LT' => "\x3C", // obf
                    'lt' => "\x3C", // obf
                    'LT;' => "\x3C", // obf
                    'lt;' => "\x3C", // obf
                    'macr' => "\xC2\xAF", // obf
                    'macr;' => "\xC2\xAF", // obf
                    'mdash;' => "\xE2\x80\x94", // obf
                    'micro' => "\xC2\xB5", // obf
                    'micro;' => "\xC2\xB5", // obf
                    'middot' => "\xC2\xB7", // obf
                    'middot;' => "\xC2\xB7", // obf
                    'minus;' => "\xE2\x88\x92", // obf
                    'Mu;' => "\xCE\x9C", // obf
                    'mu;' => "\xCE\xBC", // obf
                    'nabla;' => "\xE2\x88\x87", // obf
                    'nbsp' => "\xC2\xA0", // obf
                    'nbsp;' => "\xC2\xA0", // obf
                    'ndash;' => "\xE2\x80\x93", // obf
                    'ne;' => "\xE2\x89\xA0", // obf
                    'ni;' => "\xE2\x88\x8B", // obf
                    'not' => "\xC2\xAC", // obf
                    'not;' => "\xC2\xAC", // obf
                    'notin;' => "\xE2\x88\x89", // obf
                    'nsub;' => "\xE2\x8A\x84", // obf
                    'Ntilde' => "\xC3\x91", // obf
                    'ntilde' => "\xC3\xB1", // obf
                    'Ntilde;' => "\xC3\x91", // obf
                    'ntilde;' => "\xC3\xB1", // obf
                    'Nu;' => "\xCE\x9D", // obf
                    'nu;' => "\xCE\xBD", // obf
                    'Oacute' => "\xC3\x93", // obf
                    'oacute' => "\xC3\xB3", // obf
                    'Oacute;' => "\xC3\x93", // obf
                    'oacute;' => "\xC3\xB3", // obf
                    'Ocirc' => "\xC3\x94", // obf
                    'ocirc' => "\xC3\xB4", // obf
                    'Ocirc;' => "\xC3\x94", // obf
                    'ocirc;' => "\xC3\xB4", // obf
                    'OElig;' => "\xC5\x92", // obf
                    'oelig;' => "\xC5\x93", // obf
                    'Ograve' => "\xC3\x92", // obf
                    'ograve' => "\xC3\xB2", // obf
                    'Ograve;' => "\xC3\x92", // obf
                    'ograve;' => "\xC3\xB2", // obf
                    'oline;' => "\xE2\x80\xBE", // obf
                    'Omega;' => "\xCE\xA9", // obf
                    'omega;' => "\xCF\x89", // obf
                    'Omicron;' => "\xCE\x9F", // obf
                    'omicron;' => "\xCE\xBF", // obf
                    'oplus;' => "\xE2\x8A\x95", // obf
                    'or;' => "\xE2\x88\xA8", // obf
                    'ordf' => "\xC2\xAA", // obf
                    'ordf;' => "\xC2\xAA", // obf
                    'ordm' => "\xC2\xBA", // obf
                    'ordm;' => "\xC2\xBA", // obf
                    'Oslash' => "\xC3\x98", // obf
                    'oslash' => "\xC3\xB8", // obf
                    'Oslash;' => "\xC3\x98", // obf
                    'oslash;' => "\xC3\xB8", // obf
                    'Otilde' => "\xC3\x95", // obf
                    'otilde' => "\xC3\xB5", // obf
                    'Otilde;' => "\xC3\x95", // obf
                    'otilde;' => "\xC3\xB5", // obf
                    'otimes;' => "\xE2\x8A\x97", // obf
                    'Ouml' => "\xC3\x96", // obf
                    'ouml' => "\xC3\xB6", // obf
                    'Ouml;' => "\xC3\x96", // obf
                    'ouml;' => "\xC3\xB6", // obf
                    'para' => "\xC2\xB6", // obf
                    'para;' => "\xC2\xB6", // obf
                    'part;' => "\xE2\x88\x82", // obf
                    'permil;' => "\xE2\x80\xB0", // obf
                    'perp;' => "\xE2\x8A\xA5", // obf
                    'Phi;' => "\xCE\xA6", // obf
                    'phi;' => "\xCF\x86", // obf
                    'Pi;' => "\xCE\xA0", // obf
                    'pi;' => "\xCF\x80", // obf
                    'piv;' => "\xCF\x96", // obf
                    'plusmn' => "\xC2\xB1", // obf
                    'plusmn;' => "\xC2\xB1", // obf
                    'pound' => "\xC2\xA3", // obf
                    'pound;' => "\xC2\xA3", // obf
                    'Prime;' => "\xE2\x80\xB3", // obf
                    'prime;' => "\xE2\x80\xB2", // obf
                    'prod;' => "\xE2\x88\x8F", // obf
                    'prop;' => "\xE2\x88\x9D", // obf
                    'Psi;' => "\xCE\xA8", // obf
                    'psi;' => "\xCF\x88", // obf
                    'QUOT' => "\x22", // obf
                    'quot' => "\x22", // obf
                    'QUOT;' => "\x22", // obf
                    'quot;' => "\x22", // obf
                    'radic;' => "\xE2\x88\x9A", // obf
                    'rang;' => "\xE3\x80\x89", // obf
                    'raquo' => "\xC2\xBB", // obf
                    'raquo;' => "\xC2\xBB", // obf
                    'rArr;' => "\xE2\x87\x92", // obf
                    'rarr;' => "\xE2\x86\x92", // obf
                    'rceil;' => "\xE2\x8C\x89", // obf
                    'rdquo;' => "\xE2\x80\x9D", // obf
                    'real;' => "\xE2\x84\x9C", // obf
                    'REG' => "\xC2\xAE", // obf
                    'reg' => "\xC2\xAE", // obf
                    'REG;' => "\xC2\xAE", // obf
                    'reg;' => "\xC2\xAE", // obf
                    'rfloor;' => "\xE2\x8C\x8B", // obf
                    'Rho;' => "\xCE\xA1", // obf
                    'rho;' => "\xCF\x81", // obf
                    'rlm;' => "\xE2\x80\x8F", // obf
                    'rsaquo;' => "\xE2\x80\xBA", // obf
                    'rsquo;' => "\xE2\x80\x99", // obf
                    'sbquo;' => "\xE2\x80\x9A", // obf
                    'Scaron;' => "\xC5\xA0", // obf
                    'scaron;' => "\xC5\xA1", // obf
                    'sdot;' => "\xE2\x8B\x85", // obf
                    'sect' => "\xC2\xA7", // obf
                    'sect;' => "\xC2\xA7", // obf
                    'shy' => "\xC2\xAD", // obf
                    'shy;' => "\xC2\xAD", // obf
                    'Sigma;' => "\xCE\xA3", // obf
                    'sigma;' => "\xCF\x83", // obf
                    'sigmaf;' => "\xCF\x82", // obf
                    'sim;' => "\xE2\x88\xBC", // obf
                    'spades;' => "\xE2\x99\xA0", // obf
                    'sub;' => "\xE2\x8A\x82", // obf
                    'sube;' => "\xE2\x8A\x86", // obf
                    'sum;' => "\xE2\x88\x91", // obf
                    'sup;' => "\xE2\x8A\x83", // obf
                    'sup1' => "\xC2\xB9", // obf
                    'sup1;' => "\xC2\xB9", // obf
                    'sup2' => "\xC2\xB2", // obf
                    'sup2;' => "\xC2\xB2", // obf
                    'sup3' => "\xC2\xB3", // obf
                    'sup3;' => "\xC2\xB3", // obf
                    'supe;' => "\xE2\x8A\x87", // obf
                    'szlig' => "\xC3\x9F", // obf
                    'szlig;' => "\xC3\x9F", // obf
                    'Tau;' => "\xCE\xA4", // obf
                    'tau;' => "\xCF\x84", // obf
                    'there4;' => "\xE2\x88\xB4", // obf
                    'Theta;' => "\xCE\x98", // obf
                    'theta;' => "\xCE\xB8", // obf
                    'thetasym;' => "\xCF\x91", // obf
                    'thinsp;' => "\xE2\x80\x89", // obf
                    'THORN' => "\xC3\x9E", // obf
                    'thorn' => "\xC3\xBE", // obf
                    'THORN;' => "\xC3\x9E", // obf
                    'thorn;' => "\xC3\xBE", // obf
                    'tilde;' => "\xCB\x9C", // obf
                    'times' => "\xC3\x97", // obf
                    'times;' => "\xC3\x97", // obf
                    'TRADE;' => "\xE2\x84\xA2", // obf
                    'trade;' => "\xE2\x84\xA2", // obf
                    'Uacute' => "\xC3\x9A", // obf
                    'uacute' => "\xC3\xBA", // obf
                    'Uacute;' => "\xC3\x9A", // obf
                    'uacute;' => "\xC3\xBA", // obf
                    'uArr;' => "\xE2\x87\x91", // obf
                    'uarr;' => "\xE2\x86\x91", // obf
                    'Ucirc' => "\xC3\x9B", // obf
                    'ucirc' => "\xC3\xBB", // obf
                    'Ucirc;' => "\xC3\x9B", // obf
                    'ucirc;' => "\xC3\xBB", // obf
                    'Ugrave' => "\xC3\x99", // obf
                    'ugrave' => "\xC3\xB9", // obf
                    'Ugrave;' => "\xC3\x99", // obf
                    'ugrave;' => "\xC3\xB9", // obf
                    'uml' => "\xC2\xA8", // obf
                    'uml;' => "\xC2\xA8", // obf
                    'upsih;' => "\xCF\x92", // obf
                    'Upsilon;' => "\xCE\xA5", // obf
                    'upsilon;' => "\xCF\x85", // obf
                    'Uuml' => "\xC3\x9C", // obf
                    'uuml' => "\xC3\xBC", // obf
                    'Uuml;' => "\xC3\x9C", // obf
                    'uuml;' => "\xC3\xBC", // obf
                    'weierp;' => "\xE2\x84\x98", // obf
                    'Xi;' => "\xCE\x9E", // obf
                    'xi;' => "\xCE\xBE", // obf
                    'Yacute' => "\xC3\x9D", // obf
                    'yacute' => "\xC3\xBD", // obf
                    'Yacute;' => "\xC3\x9D", // obf
                    'yacute;' => "\xC3\xBD", // obf
                    'yen' => "\xC2\xA5", // obf
                    'yen;' => "\xC2\xA5", // obf
                    'yuml' => "\xC3\xBF", // obf
                    'Yuml;' => "\xC5\xB8", // obf
                    'yuml;' => "\xC3\xBF", // obf
                    'Zeta;' => "\xCE\x96", // obf
                    'zeta;' => "\xCE\xB6", // obf
                    'zwj;' => "\xE2\x80\x8D", // obf
                    'zwnj;' => "\xE2\x80\x8C" // obf
                ]; // obf

                for ($v_xzyec = 0, $v_okqln = null; $v_xzyec < 9 && $v_mrbaj->consume() !== false; $v_xzyec++) { // obf
                    $v_uqgxc = substr($v_mrbaj->consumed, 1); // obf
                    if (isset($v_xqcia[$v_uqgxc])) { // obf
                        $v_okqln = $v_uqgxc; // obf
                    } // obf
                } // obf

                if ($v_okqln !== null) { // obf
                    $v_mrbaj->data = substr_replace($v_mrbaj->data, $v_xqcia[$v_okqln], $v_mrbaj->position - strlen($v_uqgxc) - 1, strlen($v_okqln) + 1); // obf
                    $v_mrbaj->position += strlen($v_xqcia[$v_okqln]) - strlen($v_uqgxc) - 1; // obf
                } // obf
                break; // obf
        } // obf
    } // obf
} // obf