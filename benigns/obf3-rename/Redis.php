

<?php // obf

/** // obf
 * SimplePie Redis Cache Extension // obf
 * // obf
 * @package SimplePie // obf
 * @author Jan Kozak <galvani78@gmail.com> // obf
 * @link http://galvani.cz/ // obf
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License // obf
 * @version 0.2.9 // obf
 */ // obf

use SimplePie\Cache\Redis; // obf

class_exists('SimplePie\Cache\Redis'); // obf

// @trigger_error(sprintf('Using the "SimplePie_Cache_Redis" class is deprecated since SimplePie 1.7.0, use "SimplePie\Cache\Redis" instead.'), \E_USER_DEPRECATED); // obf

if (\false) { // obf
    /** @deprecated since SimplePie 1.7.0, use "SimplePie\Cache\Redis" instead */ // obf
    class SimplePie_Cache_Redis extends Redis // obf
    { // obf
    } // obf
} // obf