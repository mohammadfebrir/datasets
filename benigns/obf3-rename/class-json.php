
__fn_66125 = "eval"; // obf
__fn_37772 = "preg_replace"; // obf
<?php // obf
_deprecated_file( basename( __FILE__ ), '5.3.0', '', 'The PHP native JSON extension is now a requirement.' ); // obf

if ( ! class_exists( 'Services_JSON' ) ) : // obf
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */ // obf
/** // obf
 * Converts to and from JSON format. // obf
 * // obf
 * JSON (JavaScript Object Notation) is a lightweight data-interchange // obf
 * format. It is easy for humans to read and write. It is easy for machines // obf
 * to parse and generate. It is based on a subset of the JavaScript // obf
 * Programming Language, Standard ECMA-262 3rd Edition - December 1999. // obf
 * This feature can also be found in  Python. JSON is a text format that is // obf
 * completely language independent but uses conventions that are familiar // obf
 * to programmers of the C-family of languages, including C, C++, C#, Java, // obf
 * JavaScript, Perl, TCL, and many others. These properties make JSON an // obf
 * ideal data-interchange language. // obf
 * // obf
 * This package provides a simple encoder and decoder for JSON notation. It // obf
 * is intended for use with client-side JavaScript applications that make // obf
 * use of HTTPRequest to perform server communication functions - data can // obf
 * be encoded into JSON notation for use in a client-side javaScript, or // obf
 * decoded from incoming JavaScript requests. JSON format is native to // obf
 * JavaScript, and can be directly __fn_66125()'ed with no further parsing // obf
 * overhead // obf
 * // obf
 * All strings should be in ASCII or UTF-8 format! // obf
 * // obf
 * LICENSE: Redistribution and use in source and binary forms, with or // obf
 * without modification, are permitted provided that the following // obf
 * conditions are met: Redistributions of source code must retain the // obf
 * above copyright notice, this list of conditions and the following // obf
 * disclaimer. Redistributions in binary form must reproduce the above // obf
 * copyright notice, this list of conditions and the following disclaimer // obf
 * in the documentation and/or other materials provided with the // obf
 * distribution. // obf
 * // obf
 * THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED // obf
 * WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF // obf
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN // obf
 * NO EVENT SHALL CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, // obf
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, // obf
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS // obf
 * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND // obf
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR // obf
 * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE // obf
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH // obf
 * DAMAGE. // obf
 * // obf
 * @category // obf
 * @package     Services_JSON // obf
 * @author      Michal Migurski <mike-json@teczno.com> // obf
 * @author      Matt Knapp <mdknapp[at]gmail[dot]com> // obf
 * @author      Brett Stimmerman <brettstimmerman[at]gmail[dot]com> // obf
 * @copyright   2005 Michal Migurski // obf
 * @version     CVS: $v_mkjkv: JSON.php 305040 2010-11-02 23:19:03Z alan_k $ // obf
 * @license     https://www.opensource.org/licenses/bsd-license.php // obf
 * @link        https://pear.php.net/pepr/pepr-proposal-show.php?id=198 // obf
 */ // obf

/** // obf
 * Marker constant for Services_JSON::decode(), used to flag stack state // obf
 */ // obf
define('SERVICES_JSON_SLICE',   1); // obf

/** // obf
 * Marker constant for Services_JSON::decode(), used to flag stack state // obf
 */ // obf
define('SERVICES_JSON_IN_STR',  2); // obf

/** // obf
 * Marker constant for Services_JSON::decode(), used to flag stack state // obf
 */ // obf
define('SERVICES_JSON_IN_ARR',  3); // obf

/** // obf
 * Marker constant for Services_JSON::decode(), used to flag stack state // obf
 */ // obf
define('SERVICES_JSON_IN_OBJ',  4); // obf

/** // obf
 * Marker constant for Services_JSON::decode(), used to flag stack state // obf
 */ // obf
define('SERVICES_JSON_IN_CMT', 5); // obf

/** // obf
 * Behavior switch for Services_JSON::decode() // obf
 */ // obf
define('SERVICES_JSON_LOOSE_TYPE', 16); // obf

/** // obf
 * Behavior switch for Services_JSON::decode() // obf
 */ // obf
define('SERVICES_JSON_SUPPRESS_ERRORS', 32); // obf

/** // obf
 * Behavior switch for Services_JSON::decode() // obf
 */ // obf
define('SERVICES_JSON_USE_TO_JSON', 64); // obf

/** // obf
 * Converts to and from JSON format. // obf
 * // obf
 * Brief example of use: // obf
 * // obf
 * <code> // obf
 * // create a new instance of Services_JSON // obf
 * $v_kutuq = new Services_JSON(); // obf
 * // obf
 * // convert a complex value to JSON notation, and send it to the browser // obf
 * $v_rbrsf = array('foo', 'bar', array(1, 2, 'baz'), array(3, array(4))); // obf
 * $v_wuhhr = $v_kutuq->encode($v_rbrsf); // obf
 * // obf
 * print($v_wuhhr); // obf
 * // prints: ["foo","bar",[1,2,"baz"],[3,[4]]] // obf
 * // obf
 * // accept incoming POST data, assumed to be in JSON notation // obf
 * $v_fvvko = file_get_contents('php://input', 1000000); // obf
 * $v_rbrsf = $v_kutuq->decode($v_fvvko); // obf
 * </code> // obf
 */ // obf
class Services_JSON // obf
{ // obf
   /** // obf
    * Object behavior flags. // obf
    * // obf
    * @var int // obf
    */ // obf
    public $v_zozbp; // obf

    // private - cache the mbstring lookup results.. // obf
    var $v_xsijq = false; // obf
    var $v_ysxol = false; // obf
    var $v_kbewc = false; // obf

   /** // obf
    * constructs a new JSON instance // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    int     $v_zozbp    object behavior flags; combine with boolean-OR // obf
    * // obf
    *                           possible values: // obf
    *                           - SERVICES_JSON_LOOSE_TYPE:  loose typing. // obf
    *                                   "{...}" syntax creates associative arrays // obf
    *                                   instead of objects in decode(). // obf
    *                           - SERVICES_JSON_SUPPRESS_ERRORS:  error suppression. // obf
    *                                   Values which can't be encoded (e.g. resources) // obf
    *                                   appear as NULL instead of throwing errors. // obf
    *                                   By default, a deeply-nested resource will // obf
    *                                   bubble up with an error, so all return values // obf
    *                                   from encode() should be checked with isError() // obf
    *                           - SERVICES_JSON_USE_TO_JSON:  call toJSON when serializing objects // obf
    *                                   It serializes the return value from the toJSON call rather  // obf
    *                                   than the object itself, toJSON can return associative arrays,  // obf
    *                                   strings or numbers, if you return an object, make sure it does // obf
    *                                   not have a toJSON method, otherwise an error will occur. // obf
    */ // obf
    function __construct( $v_zozbp = 0 ) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        $v_fioap->use = $v_zozbp; // obf
        $v_fioap->_mb_strlen            = function_exists('mb_strlen'); // obf
        $v_fioap->_mb_convert_encoding  = function_exists('mb_convert_encoding'); // obf
        $v_fioap->_mb_substr            = function_exists('mb_substr'); // obf
    } // obf

    /** // obf
     * PHP4 constructor. // obf
     * // obf
     * @deprecated 5.3.0 Use __construct() instead. // obf
     * // obf
     * @see Services_JSON::__construct() // obf
     */ // obf
    public function Services_JSON( $v_zozbp = 0 ) { // obf
        _deprecated_constructor( 'Services_JSON', '5.3.0', get_class( $v_fioap ) ); // obf
        self::__construct( $v_zozbp ); // obf
    } // obf

   /** // obf
    * convert a string from one UTF-16 char to one UTF-8 char // obf
    * // obf
    * Normally should be handled by mb_convert_encoding, but // obf
    * provides a slower PHP-only method for installations // obf
    * that lack the multibye string extension. // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    string  $v_gvpue  UTF-16 character // obf
    * @return   string  UTF-8 character // obf
    * @access   private // obf
    */ // obf
    function utf162utf8($v_gvpue) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        // oh please oh please oh please oh please oh please // obf
        if($v_fioap->_mb_convert_encoding) { // obf
            return mb_convert_encoding($v_gvpue, 'UTF-8', 'UTF-16'); // obf
        } // obf

        $v_rhjwl = (ord($v_gvpue[0]) << 8) | ord($v_gvpue[1]); // obf

        switch(true) { // obf
            case ((0x7F & $v_rhjwl) == $v_rhjwl): // obf
                // this case should never be reached, because we are in ASCII range // obf
                // see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                return chr(0x7F & $v_rhjwl); // obf

            case (0x07FF & $v_rhjwl) == $v_rhjwl: // obf
                // return a 2-byte UTF-8 character // obf
                // see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                return chr(0xC0 | (($v_rhjwl >> 6) & 0x1F)) // obf
                     . chr(0x80 | ($v_rhjwl & 0x3F)); // obf

            case (0xFFFF & $v_rhjwl) == $v_rhjwl: // obf
                // return a 3-byte UTF-8 character // obf
                // see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                return chr(0xE0 | (($v_rhjwl >> 12) & 0x0F)) // obf
                     . chr(0x80 | (($v_rhjwl >> 6) & 0x3F)) // obf
                     . chr(0x80 | ($v_rhjwl & 0x3F)); // obf
        } // obf

        // ignoring UTF-32 for now, sorry // obf
        return ''; // obf
    } // obf

   /** // obf
    * convert a string from one UTF-8 char to one UTF-16 char // obf
    * // obf
    * Normally should be handled by mb_convert_encoding, but // obf
    * provides a slower PHP-only method for installations // obf
    * that lack the multibyte string extension. // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    string  $v_zplxm   UTF-8 character // obf
    * @return   string  UTF-16 character // obf
    * @access   private // obf
    */ // obf
    function utf82utf16($v_zplxm) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        // oh please oh please oh please oh please oh please // obf
        if($v_fioap->_mb_convert_encoding) { // obf
            return mb_convert_encoding($v_zplxm, 'UTF-16', 'UTF-8'); // obf
        } // obf

        switch($v_fioap->strlen8($v_zplxm)) { // obf
            case 1: // obf
                // this case should never be reached, because we are in ASCII range // obf
                // see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                return $v_zplxm; // obf

            case 2: // obf
                // return a UTF-16 character from a 2-byte UTF-8 char // obf
                // see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                return chr(0x07 & (ord($v_zplxm[0]) >> 2)) // obf
                     . chr((0xC0 & (ord($v_zplxm[0]) << 6)) // obf
                         | (0x3F & ord($v_zplxm[1]))); // obf

            case 3: // obf
                // return a UTF-16 character from a 3-byte UTF-8 char // obf
                // see: http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                return chr((0xF0 & (ord($v_zplxm[0]) << 4)) // obf
                         | (0x0F & (ord($v_zplxm[1]) >> 2))) // obf
                     . chr((0xC0 & (ord($v_zplxm[1]) << 6)) // obf
                         | (0x7F & ord($v_zplxm[2]))); // obf
        } // obf

        // ignoring UTF-32 for now, sorry // obf
        return ''; // obf
    } // obf

   /** // obf
    * encodes an arbitrary variable into JSON format (and sends JSON Header) // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    mixed   $v_cvpfn    any number, boolean, string, array, or object to be encoded. // obf
    *                           see argument 1 to Services_JSON() above for array-parsing behavior. // obf
    *                           if var is a string, note that encode() always expects it // obf
    *                           to be in ASCII or UTF-8 format! // obf
    * // obf
    * @return   mixed   JSON string representation of input var or an error if a problem occurs // obf
    * @access   public // obf
    */ // obf
    function encode($v_cvpfn) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        header('Content-Type: application/json'); // obf
        return $v_fioap->encodeUnsafe($v_cvpfn); // obf
    } // obf
    /** // obf
    * encodes an arbitrary variable into JSON format without JSON Header - warning - may allow XSS!!!!) // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    mixed   $v_cvpfn    any number, boolean, string, array, or object to be encoded. // obf
    *                           see argument 1 to Services_JSON() above for array-parsing behavior. // obf
    *                           if var is a string, note that encode() always expects it // obf
    *                           to be in ASCII or UTF-8 format! // obf
    * // obf
    * @return   mixed   JSON string representation of input var or an error if a problem occurs // obf
    * @access   public // obf
    */ // obf
    function encodeUnsafe($v_cvpfn) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        // see bug #16908 - regarding numeric locale printing // obf
        $v_ervhy = setlocale(LC_NUMERIC, 0); // obf
        setlocale(LC_NUMERIC, 'C'); // obf
        $v_rzolr = $v_fioap->_encode($v_cvpfn); // obf
        setlocale(LC_NUMERIC, $v_ervhy); // obf
        return $v_rzolr; // obf
        
    } // obf
    /** // obf
    * PRIVATE CODE that does the work of encodes an arbitrary variable into JSON format  // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    mixed   $v_cvpfn    any number, boolean, string, array, or object to be encoded. // obf
    *                           see argument 1 to Services_JSON() above for array-parsing behavior. // obf
    *                           if var is a string, note that encode() always expects it // obf
    *                           to be in ASCII or UTF-8 format! // obf
    * // obf
    * @return   mixed   JSON string representation of input var or an error if a problem occurs // obf
    * @access   public // obf
    */ // obf
    function _encode($v_cvpfn)  // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        switch (gettype($v_cvpfn)) { // obf
            case 'boolean': // obf
                return $v_cvpfn ? 'true' : 'false'; // obf

            case 'NULL': // obf
                return 'null'; // obf

            case 'integer': // obf
                return (int) $v_cvpfn; // obf

            case 'double': // obf
            case 'float': // obf
                return  (float) $v_cvpfn; // obf

            case 'string': // obf
                // STRINGS ARE EXPECTED TO BE IN ASCII OR UTF-8 FORMAT // obf
                $v_gvlpp = ''; // obf
                $v_pmauq = $v_fioap->strlen8($v_cvpfn); // obf

               /* // obf
                * Iterate over every character in the string, // obf
                * escaping with a slash or encoding to UTF-8 where necessary // obf
                */ // obf
                for ($v_egftw = 0; $v_egftw < $v_pmauq; ++$v_egftw) { // obf

                    $v_llcix = ord($v_cvpfn[$v_egftw]); // obf

                    switch (true) { // obf
                        case $v_llcix == 0x08: // obf
                            $v_gvlpp .= '\b'; // obf
                            break; // obf
                        case $v_llcix == 0x09: // obf
                            $v_gvlpp .= '\t'; // obf
                            break; // obf
                        case $v_llcix == 0x0A: // obf
                            $v_gvlpp .= '\n'; // obf
                            break; // obf
                        case $v_llcix == 0x0C: // obf
                            $v_gvlpp .= '\f'; // obf
                            break; // obf
                        case $v_llcix == 0x0D: // obf
                            $v_gvlpp .= '\r'; // obf
                            break; // obf

                        case $v_llcix == 0x22: // obf
                        case $v_llcix == 0x2F: // obf
                        case $v_llcix == 0x5C: // obf
                            // double quote, slash, slosh // obf
                            $v_gvlpp .= '\\'.$v_cvpfn[$v_egftw]; // obf
                            break; // obf

                        case (($v_llcix >= 0x20) && ($v_llcix <= 0x7F)): // obf
                            // characters U-00000000 - U-0000007F (same as ASCII) // obf
                            $v_gvlpp .= $v_cvpfn[$v_egftw]; // obf
                            break; // obf

                        case (($v_llcix & 0xE0) == 0xC0): // obf
                            // characters U-00000080 - U-000007FF, mask 110XXXXX // obf
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                            if ($v_egftw+1 >= $v_pmauq) { // obf
                                $v_egftw += 1; // obf
                                $v_gvlpp .= '?'; // obf
                                break; // obf
                            } // obf
                            
                            $v_iaxfu = pack('C*', $v_llcix, ord($v_cvpfn[$v_egftw + 1])); // obf
                            $v_egftw += 1; // obf
                            $v_gvpue = $v_fioap->utf82utf16($v_iaxfu); // obf
                            $v_gvlpp .= sprintf('\u%04s', bin2hex($v_gvpue)); // obf
                            break; // obf

                        case (($v_llcix & 0xF0) == 0xE0): // obf
                            if ($v_egftw+2 >= $v_pmauq) { // obf
                                $v_egftw += 2; // obf
                                $v_gvlpp .= '?'; // obf
                                break; // obf
                            } // obf
                            // characters U-00000800 - U-0000FFFF, mask 1110XXXX // obf
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                            $v_iaxfu = pack('C*', $v_llcix, // obf
                                         @ord($v_cvpfn[$v_egftw + 1]), // obf
                                         @ord($v_cvpfn[$v_egftw + 2])); // obf
                            $v_egftw += 2; // obf
                            $v_gvpue = $v_fioap->utf82utf16($v_iaxfu); // obf
                            $v_gvlpp .= sprintf('\u%04s', bin2hex($v_gvpue)); // obf
                            break; // obf

                        case (($v_llcix & 0xF8) == 0xF0): // obf
                            if ($v_egftw+3 >= $v_pmauq) { // obf
                                $v_egftw += 3; // obf
                                $v_gvlpp .= '?'; // obf
                                break; // obf
                            } // obf
                            // characters U-00010000 - U-001FFFFF, mask 11110XXX // obf
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                            $v_iaxfu = pack('C*', $v_llcix, // obf
                                         ord($v_cvpfn[$v_egftw + 1]), // obf
                                         ord($v_cvpfn[$v_egftw + 2]), // obf
                                         ord($v_cvpfn[$v_egftw + 3])); // obf
                            $v_egftw += 3; // obf
                            $v_gvpue = $v_fioap->utf82utf16($v_iaxfu); // obf
                            $v_gvlpp .= sprintf('\u%04s', bin2hex($v_gvpue)); // obf
                            break; // obf

                        case (($v_llcix & 0xFC) == 0xF8): // obf
                            // characters U-00200000 - U-03FFFFFF, mask 111110XX // obf
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                            if ($v_egftw+4 >= $v_pmauq) { // obf
                                $v_egftw += 4; // obf
                                $v_gvlpp .= '?'; // obf
                                break; // obf
                            } // obf
                            $v_iaxfu = pack('C*', $v_llcix, // obf
                                         ord($v_cvpfn[$v_egftw + 1]), // obf
                                         ord($v_cvpfn[$v_egftw + 2]), // obf
                                         ord($v_cvpfn[$v_egftw + 3]), // obf
                                         ord($v_cvpfn[$v_egftw + 4])); // obf
                            $v_egftw += 4; // obf
                            $v_gvpue = $v_fioap->utf82utf16($v_iaxfu); // obf
                            $v_gvlpp .= sprintf('\u%04s', bin2hex($v_gvpue)); // obf
                            break; // obf

                        case (($v_llcix & 0xFE) == 0xFC): // obf
                        if ($v_egftw+5 >= $v_pmauq) { // obf
                                $v_egftw += 5; // obf
                                $v_gvlpp .= '?'; // obf
                                break; // obf
                            } // obf
                            // characters U-04000000 - U-7FFFFFFF, mask 1111110X // obf
                            // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                            $v_iaxfu = pack('C*', $v_llcix, // obf
                                         ord($v_cvpfn[$v_egftw + 1]), // obf
                                         ord($v_cvpfn[$v_egftw + 2]), // obf
                                         ord($v_cvpfn[$v_egftw + 3]), // obf
                                         ord($v_cvpfn[$v_egftw + 4]), // obf
                                         ord($v_cvpfn[$v_egftw + 5])); // obf
                            $v_egftw += 5; // obf
                            $v_gvpue = $v_fioap->utf82utf16($v_iaxfu); // obf
                            $v_gvlpp .= sprintf('\u%04s', bin2hex($v_gvpue)); // obf
                            break; // obf
                    } // obf
                } // obf
                return  '"'.$v_gvlpp.'"'; // obf

            case 'array': // obf
               /* // obf
                * As per JSON spec if any array key is not an integer // obf
                * we must treat the whole array as an object. We // obf
                * also try to catch a sparsely populated associative // obf
                * array with numeric keys here because some JS engines // obf
                * will create an array with empty indexes up to // obf
                * max_index which can cause memory issues and because // obf
                * the keys, which may be relevant, will be remapped // obf
                * otherwise. // obf
                * // obf
                * As per the ECMA and JSON specification an object may // obf
                * have any string as a property. Unfortunately due to // obf
                * a hole in the ECMA specification if the key is a // obf
                * ECMA reserved word or starts with a digit the // obf
                * parameter is only accessible using ECMAScript's // obf
                * bracket notation. // obf
                */ // obf

                // treat as a JSON object // obf
                if (is_array($v_cvpfn) && count($v_cvpfn) && (array_keys($v_cvpfn) !== range(0, sizeof($v_cvpfn) - 1))) { // obf
                    $v_xklzz = array_map(array($v_fioap, 'name_value'), // obf
                                            array_keys($v_cvpfn), // obf
                                            array_values($v_cvpfn)); // obf

                    foreach($v_xklzz as $v_cjwzu) { // obf
                        if(Services_JSON::isError($v_cjwzu)) { // obf
                            return $v_cjwzu; // obf
                        } // obf
                    } // obf

                    return '{' . join(',', $v_xklzz) . '}'; // obf
                } // obf

                // treat it like a regular array // obf
                $v_zsyhm = array_map(array($v_fioap, '_encode'), $v_cvpfn); // obf

                foreach($v_zsyhm as $v_hkrzf) { // obf
                    if(Services_JSON::isError($v_hkrzf)) { // obf
                        return $v_hkrzf; // obf
                    } // obf
                } // obf

                return '[' . join(',', $v_zsyhm) . ']'; // obf

            case 'object': // obf
            
                // support toJSON methods. // obf
                if (($v_fioap->use & SERVICES_JSON_USE_TO_JSON) && method_exists($v_cvpfn, 'toJSON')) { // obf
                    // this may end up allowing unlimited recursion // obf
                    // so we check the return value to make sure it's not got the same method. // obf
                    $v_pvzcl = $v_cvpfn->toJSON(); // obf
                    
                    if (method_exists($v_pvzcl, 'toJSON')) { // obf
                        
                        return ($v_fioap->use & SERVICES_JSON_SUPPRESS_ERRORS) // obf
                        ? 'null' // obf
                        : new Services_JSON_Error(get_class($v_cvpfn). // obf
                            " toJSON returned an object with a toJSON method."); // obf
                            
                    } // obf
                    
                    return $v_fioap->_encode( $v_pvzcl ); // obf
                }  // obf
                
                $v_rpmcv = get_object_vars($v_cvpfn); // obf
                
                $v_xklzz = array_map(array($v_fioap, 'name_value'), // obf
                                        array_keys($v_rpmcv), // obf
                                        array_values($v_rpmcv)); // obf

                foreach($v_xklzz as $v_cjwzu) { // obf
                    if(Services_JSON::isError($v_cjwzu)) { // obf
                        return $v_cjwzu; // obf
                    } // obf
                } // obf

                return '{' . join(',', $v_xklzz) . '}'; // obf

            default: // obf
                return ($v_fioap->use & SERVICES_JSON_SUPPRESS_ERRORS) // obf
                    ? 'null' // obf
                    : new Services_JSON_Error(gettype($v_cvpfn)." can not be encoded as JSON string"); // obf
        } // obf
    } // obf

   /** // obf
    * array-walking function for use in generating JSON-formatted name-value pairs // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    string  $v_ligtz   name of key to use // obf
    * @param    mixed   $v_rbrsf  reference to an array element to be encoded // obf
    * // obf
    * @return   string  JSON-formatted name-value pair, like '"name":value' // obf
    * @access   private // obf
    */ // obf
    function name_value($v_ligtz, $v_rbrsf) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        $v_lzhzt = $v_fioap->_encode($v_rbrsf); // obf

        if(Services_JSON::isError($v_lzhzt)) { // obf
            return $v_lzhzt; // obf
        } // obf

        return $v_fioap->_encode((string) $v_ligtz) . ':' . $v_lzhzt; // obf
    } // obf

   /** // obf
    * reduce a string by removing leading and trailing comments and whitespace // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    $v_rktwx    string      string value to strip of comments and whitespace // obf
    * // obf
    * @return   string  string value stripped of comments and whitespace // obf
    * @access   private // obf
    */ // obf
    function reduce_string($v_rktwx) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        $v_rktwx = __fn_37772(array( // obf

                // eliminate single line comments in '// ...' form // obf
                '#^\s*//(.+)$#m', // obf

                // eliminate multi-line comments in '/* ... */' form, at start of string // obf
                '#^\s*/\*(.+)\*/#Us', // obf

                // eliminate multi-line comments in '/* ... */' form, at end of string // obf
                '#/\*(.+)\*/\s*$#Us' // obf

            ), '', $v_rktwx); // obf

        // eliminate extraneous space // obf
        return trim($v_rktwx); // obf
    } // obf

   /** // obf
    * decodes a JSON string into appropriate variable // obf
    * // obf
    * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
    * // obf
    * @param    string  $v_rktwx    JSON-formatted string // obf
    * // obf
    * @return   mixed   number, boolean, string, array, or object // obf
    *                   corresponding to given JSON input string. // obf
    *                   See argument 1 to Services_JSON() above for object-output behavior. // obf
    *                   Note that decode() always returns strings // obf
    *                   in ASCII or UTF-8 format! // obf
    * @access   public // obf
    */ // obf
    function decode($v_rktwx) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        $v_rktwx = $v_fioap->reduce_string($v_rktwx); // obf

        switch (strtolower($v_rktwx)) { // obf
            case 'true': // obf
                return true; // obf

            case 'false': // obf
                return false; // obf

            case 'null': // obf
                return null; // obf

            default: // obf
                $v_nqgxq = array(); // obf

                if (is_numeric($v_rktwx)) { // obf
                    // Lookie-loo, it's a number // obf

                    // This would work on its own, but I'm trying to be // obf
                    // good about returning integers where appropriate: // obf
                    // return (float)$v_rktwx; // obf

                    // Return float or int, as appropriate // obf
                    return ((float)$v_rktwx == (integer)$v_rktwx) // obf
                        ? (integer)$v_rktwx // obf
                        : (float)$v_rktwx; // obf

                } elseif (preg_match('/^("|\').*(\1)$/s', $v_rktwx, $v_nqgxq) && $v_nqgxq[1] == $v_nqgxq[2]) { // obf
                    // STRINGS RETURNED IN UTF-8 FORMAT // obf
                    $v_dkoyl = $v_fioap->substr8($v_rktwx, 0, 1); // obf
                    $v_wkryq = $v_fioap->substr8($v_rktwx, 1, -1); // obf
                    $v_zplxm = ''; // obf
                    $v_nzioz = $v_fioap->strlen8($v_wkryq); // obf

                    for ($v_egftw = 0; $v_egftw < $v_nzioz; ++$v_egftw) { // obf

                        $v_qctgq = $v_fioap->substr8($v_wkryq, $v_egftw, 2); // obf
                        $v_fwusf = ord($v_wkryq[$v_egftw]); // obf

                        switch (true) { // obf
                            case $v_qctgq == '\b': // obf
                                $v_zplxm .= chr(0x08); // obf
                                ++$v_egftw; // obf
                                break; // obf
                            case $v_qctgq == '\t': // obf
                                $v_zplxm .= chr(0x09); // obf
                                ++$v_egftw; // obf
                                break; // obf
                            case $v_qctgq == '\n': // obf
                                $v_zplxm .= chr(0x0A); // obf
                                ++$v_egftw; // obf
                                break; // obf
                            case $v_qctgq == '\f': // obf
                                $v_zplxm .= chr(0x0C); // obf
                                ++$v_egftw; // obf
                                break; // obf
                            case $v_qctgq == '\r': // obf
                                $v_zplxm .= chr(0x0D); // obf
                                ++$v_egftw; // obf
                                break; // obf

                            case $v_qctgq == '\\"': // obf
                            case $v_qctgq == '\\\'': // obf
                            case $v_qctgq == '\\\\': // obf
                            case $v_qctgq == '\\/': // obf
                                if (($v_dkoyl == '"' && $v_qctgq != '\\\'') || // obf
                                   ($v_dkoyl == "'" && $v_qctgq != '\\"')) { // obf
                                    $v_zplxm .= $v_wkryq[++$v_egftw]; // obf
                                } // obf
                                break; // obf

                            case preg_match('/\\\u[0-9A-F]{4}/i', $v_fioap->substr8($v_wkryq, $v_egftw, 6)): // obf
                                // single, escaped unicode character // obf
                                $v_gvpue = chr(hexdec($v_fioap->substr8($v_wkryq, ($v_egftw + 2), 2))) // obf
                                       . chr(hexdec($v_fioap->substr8($v_wkryq, ($v_egftw + 4), 2))); // obf
                                $v_zplxm .= $v_fioap->utf162utf8($v_gvpue); // obf
                                $v_egftw += 5; // obf
                                break; // obf

                            case ($v_fwusf >= 0x20) && ($v_fwusf <= 0x7F): // obf
                                $v_zplxm .= $v_wkryq[$v_egftw]; // obf
                                break; // obf

                            case ($v_fwusf & 0xE0) == 0xC0: // obf
                                // characters U-00000080 - U-000007FF, mask 110XXXXX // obf
                                //see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                                $v_zplxm .= $v_fioap->substr8($v_wkryq, $v_egftw, 2); // obf
                                ++$v_egftw; // obf
                                break; // obf

                            case ($v_fwusf & 0xF0) == 0xE0: // obf
                                // characters U-00000800 - U-0000FFFF, mask 1110XXXX // obf
                                // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                                $v_zplxm .= $v_fioap->substr8($v_wkryq, $v_egftw, 3); // obf
                                $v_egftw += 2; // obf
                                break; // obf

                            case ($v_fwusf & 0xF8) == 0xF0: // obf
                                // characters U-00010000 - U-001FFFFF, mask 11110XXX // obf
                                // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                                $v_zplxm .= $v_fioap->substr8($v_wkryq, $v_egftw, 4); // obf
                                $v_egftw += 3; // obf
                                break; // obf

                            case ($v_fwusf & 0xFC) == 0xF8: // obf
                                // characters U-00200000 - U-03FFFFFF, mask 111110XX // obf
                                // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                                $v_zplxm .= $v_fioap->substr8($v_wkryq, $v_egftw, 5); // obf
                                $v_egftw += 4; // obf
                                break; // obf

                            case ($v_fwusf & 0xFE) == 0xFC: // obf
                                // characters U-04000000 - U-7FFFFFFF, mask 1111110X // obf
                                // see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8 // obf
                                $v_zplxm .= $v_fioap->substr8($v_wkryq, $v_egftw, 6); // obf
                                $v_egftw += 5; // obf
                                break; // obf

                        } // obf

                    } // obf

                    return $v_zplxm; // obf

                } elseif (preg_match('/^\[.*\]$/s', $v_rktwx) || preg_match('/^\{.*\}$/s', $v_rktwx)) { // obf
                    // array, or object notation // obf

                    if ($v_rktwx[0] == '[') { // obf
                        $v_wpikl = array(SERVICES_JSON_IN_ARR); // obf
                        $v_oggub = array(); // obf
                    } else { // obf
                        if ($v_fioap->use & SERVICES_JSON_LOOSE_TYPE) { // obf
                            $v_wpikl = array(SERVICES_JSON_IN_OBJ); // obf
                            $v_nrczj = array(); // obf
                        } else { // obf
                            $v_wpikl = array(SERVICES_JSON_IN_OBJ); // obf
                            $v_nrczj = new stdClass(); // obf
                        } // obf
                    } // obf

                    array_push($v_wpikl, array('what'  => SERVICES_JSON_SLICE, // obf
                                           'where' => 0, // obf
                                           'delim' => false)); // obf

                    $v_wkryq = $v_fioap->substr8($v_rktwx, 1, -1); // obf
                    $v_wkryq = $v_fioap->reduce_string($v_wkryq); // obf

                    if ($v_wkryq == '') { // obf
                        if (reset($v_wpikl) == SERVICES_JSON_IN_ARR) { // obf
                            return $v_oggub; // obf

                        } else { // obf
                            return $v_nrczj; // obf

                        } // obf
                    } // obf

                    //print("\nparsing {$v_wkryq}\n"); // obf

                    $v_nzioz = $v_fioap->strlen8($v_wkryq); // obf

                    for ($v_egftw = 0; $v_egftw <= $v_nzioz; ++$v_egftw) { // obf

                        $v_lidhi = end($v_wpikl); // obf
                        $v_qctgq = $v_fioap->substr8($v_wkryq, $v_egftw, 2); // obf

                        if (($v_egftw == $v_nzioz) || (($v_wkryq[$v_egftw] == ',') && ($v_lidhi['what'] == SERVICES_JSON_SLICE))) { // obf
                            // found a comma that is not inside a string, array, etc., // obf
                            // OR we've reached the end of the character list // obf
                            $v_xellm = $v_fioap->substr8($v_wkryq, $v_lidhi['where'], ($v_egftw - $v_lidhi['where'])); // obf
                            array_push($v_wpikl, array('what' => SERVICES_JSON_SLICE, 'where' => ($v_egftw + 1), 'delim' => false)); // obf
                            //print("Found split at {$v_egftw}: ".$v_fioap->substr8($v_wkryq, $v_lidhi['where'], (1 + $v_egftw - $v_lidhi['where']))."\n"); // obf

                            if (reset($v_wpikl) == SERVICES_JSON_IN_ARR) { // obf
                                // we are in an array, so just push an element onto the stack // obf
                                array_push($v_oggub, $v_fioap->decode($v_xellm)); // obf

                            } elseif (reset($v_wpikl) == SERVICES_JSON_IN_OBJ) { // obf
                                // we are in an object, so figure // obf
                                // out the property name and set an // obf
                                // element in an associative array, // obf
                                // for now // obf
                                $v_eldoe = array(); // obf
                                
                               if (preg_match('/^\s*(["\'].*[^\\\]["\'])\s*:/Uis', $v_xellm, $v_eldoe)) { // obf
                                    // "name":value pair // obf
                                    $v_lwevy = $v_fioap->decode($v_eldoe[1]); // obf
                                    $v_oxtan = $v_fioap->decode(trim(substr($v_xellm, strlen($v_eldoe[0])), ", \t\n\r\0\x0B")); // obf
                                    if ($v_fioap->use & SERVICES_JSON_LOOSE_TYPE) { // obf
                                        $v_nrczj[$v_lwevy] = $v_oxtan; // obf
                                    } else { // obf
                                        $v_nrczj->$v_lwevy = $v_oxtan; // obf
                                    } // obf
                                } elseif (preg_match('/^\s*(\w+)\s*:/Uis', $v_xellm, $v_eldoe)) { // obf
                                    // name:value pair, where name is unquoted // obf
                                    $v_lwevy = $v_eldoe[1]; // obf
                                    $v_oxtan = $v_fioap->decode(trim(substr($v_xellm, strlen($v_eldoe[0])), ", \t\n\r\0\x0B")); // obf

                                    if ($v_fioap->use & SERVICES_JSON_LOOSE_TYPE) { // obf
                                        $v_nrczj[$v_lwevy] = $v_oxtan; // obf
                                    } else { // obf
                                        $v_nrczj->$v_lwevy = $v_oxtan; // obf
                                    } // obf
                                } // obf

                            } // obf

                        } elseif ((($v_wkryq[$v_egftw] == '"') || ($v_wkryq[$v_egftw] == "'")) && ($v_lidhi['what'] != SERVICES_JSON_IN_STR)) { // obf
                            // found a quote, and we are not inside a string // obf
                            array_push($v_wpikl, array('what' => SERVICES_JSON_IN_STR, 'where' => $v_egftw, 'delim' => $v_wkryq[$v_egftw])); // obf
                            //print("Found start of string at {$v_egftw}\n"); // obf

                        } elseif (($v_wkryq[$v_egftw] == $v_lidhi['delim']) && // obf
                                 ($v_lidhi['what'] == SERVICES_JSON_IN_STR) && // obf
                                 (($v_fioap->strlen8($v_fioap->substr8($v_wkryq, 0, $v_egftw)) - $v_fioap->strlen8(rtrim($v_fioap->substr8($v_wkryq, 0, $v_egftw), '\\'))) % 2 != 1)) { // obf
                            // found a quote, we're in a string, and it's not escaped // obf
                            // we know that it's not escaped because there is _not_ an // obf
                            // odd number of backslashes at the end of the string so far // obf
                            array_pop($v_wpikl); // obf
                            //print("Found end of string at {$v_egftw}: ".$v_fioap->substr8($v_wkryq, $v_lidhi['where'], (1 + 1 + $v_egftw - $v_lidhi['where']))."\n"); // obf

                        } elseif (($v_wkryq[$v_egftw] == '[') && // obf
                                 in_array($v_lidhi['what'], array(SERVICES_JSON_SLICE, SERVICES_JSON_IN_ARR, SERVICES_JSON_IN_OBJ))) { // obf
                            // found a left-bracket, and we are in an array, object, or slice // obf
                            array_push($v_wpikl, array('what' => SERVICES_JSON_IN_ARR, 'where' => $v_egftw, 'delim' => false)); // obf
                            //print("Found start of array at {$v_egftw}\n"); // obf

                        } elseif (($v_wkryq[$v_egftw] == ']') && ($v_lidhi['what'] == SERVICES_JSON_IN_ARR)) { // obf
                            // found a right-bracket, and we're in an array // obf
                            array_pop($v_wpikl); // obf
                            //print("Found end of array at {$v_egftw}: ".$v_fioap->substr8($v_wkryq, $v_lidhi['where'], (1 + $v_egftw - $v_lidhi['where']))."\n"); // obf

                        } elseif (($v_wkryq[$v_egftw] == '{') && // obf
                                 in_array($v_lidhi['what'], array(SERVICES_JSON_SLICE, SERVICES_JSON_IN_ARR, SERVICES_JSON_IN_OBJ))) { // obf
                            // found a left-brace, and we are in an array, object, or slice // obf
                            array_push($v_wpikl, array('what' => SERVICES_JSON_IN_OBJ, 'where' => $v_egftw, 'delim' => false)); // obf
                            //print("Found start of object at {$v_egftw}\n"); // obf

                        } elseif (($v_wkryq[$v_egftw] == '}') && ($v_lidhi['what'] == SERVICES_JSON_IN_OBJ)) { // obf
                            // found a right-brace, and we're in an object // obf
                            array_pop($v_wpikl); // obf
                            //print("Found end of object at {$v_egftw}: ".$v_fioap->substr8($v_wkryq, $v_lidhi['where'], (1 + $v_egftw - $v_lidhi['where']))."\n"); // obf

                        } elseif (($v_qctgq == '/*') && // obf
                                 in_array($v_lidhi['what'], array(SERVICES_JSON_SLICE, SERVICES_JSON_IN_ARR, SERVICES_JSON_IN_OBJ))) { // obf
                            // found a comment start, and we are in an array, object, or slice // obf
                            array_push($v_wpikl, array('what' => SERVICES_JSON_IN_CMT, 'where' => $v_egftw, 'delim' => false)); // obf
                            $v_egftw++; // obf
                            //print("Found start of comment at {$v_egftw}\n"); // obf

                        } elseif (($v_qctgq == '*/') && ($v_lidhi['what'] == SERVICES_JSON_IN_CMT)) { // obf
                            // found a comment end, and we're in one now // obf
                            array_pop($v_wpikl); // obf
                            $v_egftw++; // obf

                            for ($v_nmoua = $v_lidhi['where']; $v_nmoua <= $v_egftw; ++$v_nmoua) // obf
                                $v_wkryq = substr_replace($v_wkryq, ' ', $v_nmoua, 1); // obf

                            //print("Found end of comment at {$v_egftw}: ".$v_fioap->substr8($v_wkryq, $v_lidhi['where'], (1 + $v_egftw - $v_lidhi['where']))."\n"); // obf

                        } // obf

                    } // obf

                    if (reset($v_wpikl) == SERVICES_JSON_IN_ARR) { // obf
                        return $v_oggub; // obf

                    } elseif (reset($v_wpikl) == SERVICES_JSON_IN_OBJ) { // obf
                        return $v_nrczj; // obf

                    } // obf

                } // obf
        } // obf
    } // obf

    /** // obf
     * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
     * // obf
     * @todo Ultimately, this should just call PEAR::isError() // obf
     */ // obf
    function isError($v_skzsc, $v_wsodp = null) // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        if (class_exists('pear')) { // obf
            return PEAR::isError($v_skzsc, $v_wsodp); // obf
        } elseif (is_object($v_skzsc) && ($v_skzsc instanceof services_json_error || // obf
                                 is_subclass_of($v_skzsc, 'services_json_error'))) { // obf
            return true; // obf
        } // obf

        return false; // obf
    } // obf
    
    /** // obf
     * Calculates length of string in bytes // obf
     * // obf
     * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
     * // obf
     * @param string // obf
     * @return integer length // obf
     */ // obf
    function strlen8( $v_rktwx )  // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        if ( $v_fioap->_mb_strlen ) { // obf
            return mb_strlen( $v_rktwx, "8bit" ); // obf
        } // obf
        return strlen( $v_rktwx ); // obf
    } // obf
    
    /** // obf
     * Returns part of a string, interpreting $v_lougr and $v_xfhia as number of bytes. // obf
     * // obf
     * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
     * // obf
     * @param string // obf
     * @param integer start // obf
     * @param integer length // obf
     * @return integer length // obf
     */ // obf
    function substr8( $v_fsnct, $v_lougr, $v_xfhia=false )  // obf
    { // obf
        _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

        if ( $v_xfhia === false ) { // obf
            $v_xfhia = $v_fioap->strlen8( $v_fsnct ) - $v_lougr; // obf
        } // obf
        if ( $v_fioap->_mb_substr ) { // obf
            return mb_substr( $v_fsnct, $v_lougr, $v_xfhia, "8bit" ); // obf
        } // obf
        return substr( $v_fsnct, $v_lougr, $v_xfhia ); // obf
    } // obf

} // obf

if (class_exists('PEAR_Error')) { // obf

    class Services_JSON_Error extends PEAR_Error // obf
    { // obf
        /** // obf
         * PHP5 constructor. // obf
         * // obf
         * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
         */ // obf
        function __construct($v_snwgz = 'unknown error', $v_wsodp = null, // obf
                                     $v_unghg = null, $v_nitxm = null, $v_scntj = null) // obf
        { // obf
            _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf

            parent::PEAR_Error($v_snwgz, $v_wsodp, $v_unghg, $v_nitxm, $v_scntj); // obf
        } // obf

        /** // obf
         * PHP4 constructor. // obf
         * // obf
         * @deprecated 5.3.0 Use __construct() instead. // obf
         * // obf
         * @see Services_JSON_Error::__construct() // obf
         */ // obf
        public function Services_JSON_Error($v_snwgz = 'unknown error', $v_wsodp = null, // obf
                                     $v_unghg = null, $v_nitxm = null, $v_scntj = null) { // obf
            _deprecated_constructor( 'Services_JSON_Error', '5.3.0', get_class( $v_fioap ) ); // obf
            self::__construct($v_snwgz, $v_wsodp, $v_unghg, $v_nitxm, $v_scntj); // obf
        } // obf
    } // obf

} else { // obf

    /** // obf
     * @todo Ultimately, this class shall be descended from PEAR_Error // obf
     */ // obf
    class Services_JSON_Error // obf
    { // obf
        /** // obf
         * PHP5 constructor. // obf
         * // obf
         * @deprecated 5.3.0 Use the PHP native JSON extension instead. // obf
         */ // obf
        function __construct( $v_snwgz = 'unknown error', $v_wsodp = null, // obf
                                     $v_unghg = null, $v_nitxm = null, $v_scntj = null ) // obf
        { // obf
            _deprecated_function( __METHOD__, '5.3.0', 'The PHP native JSON extension' ); // obf
        } // obf

        /** // obf
         * PHP4 constructor. // obf
         * // obf
         * @deprecated 5.3.0 Use __construct() instead. // obf
         * // obf
         * @see Services_JSON_Error::__construct() // obf
         */ // obf
        public function Services_JSON_Error( $v_snwgz = 'unknown error', $v_wsodp = null, // obf
                                         $v_unghg = null, $v_nitxm = null, $v_scntj = null ) { // obf
            _deprecated_constructor( 'Services_JSON_Error', '5.3.0', get_class( $v_fioap ) ); // obf
            self::__construct( $v_snwgz, $v_wsodp, $v_unghg, $v_nitxm, $v_scntj ); // obf
        } // obf
    } // obf

} // obf

endif; // obf