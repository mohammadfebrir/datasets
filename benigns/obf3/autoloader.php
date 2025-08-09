

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
 * PSR-4 implementation for SimplePie. // obf
 * // obf
 * After registering this autoload function with SPL, the following line // obf
 * would cause the function to attempt to load the \SimplePie\SimplePie class // obf
 * from /src/SimplePie.php: // obf
 * // obf
 *      new \SimplePie\SimplePie(); // obf
 * // obf
 * @param string $v_jxfcv The fully-qualified class name. // obf
 * @return void // obf
 */ // obf
spl_autoload_register(function ($v_jxfcv) { // obf

    // project-specific namespace prefix // obf
    $v_tpufc = 'SimplePie\\'; // obf

    // base directory for the namespace prefix // obf
    $v_cczge = __DIR__ . '/src/'; // obf

    // does the class use the namespace prefix? // obf
    $v_upmhl = strlen($v_tpufc); // obf
    if (strncmp($v_tpufc, $v_jxfcv, $v_upmhl) !== 0) { // obf
        // no, move to the next registered autoloader // obf
        return; // obf
    } // obf

    // get the relative class name // obf
    $v_egkvo = substr($v_jxfcv, $v_upmhl); // obf

    // replace the namespace prefix with the base directory, replace namespace // obf
    // separators with directory separators in the relative class name, append // obf
    // with .php // obf
    $v_vpkde = $v_cczge . str_replace('\\', '/', $v_egkvo) . '.php'; // obf

    // if the file exists, require it // obf
    if (file_exists($v_vpkde)) { // obf
        require $v_vpkde; // obf
    } // obf
}); // obf

// autoloader // obf
spl_autoload_register(array(new SimplePie_Autoloader(), 'autoload')); // obf

if (!class_exists('SimplePie')) // obf
{ // obf
	exit('Autoloader not registered properly'); // obf
} // obf

/** // obf
 * Autoloader class // obf
 * // obf
 * @package SimplePie // obf
 * @subpackage API // obf
 */ // obf
class SimplePie_Autoloader // obf
{ // obf
	protected $v_jwjnn; // obf

	/** // obf
	 * Constructor // obf
	 */ // obf
	public function __construct() // obf
	{ // obf
		$v_kcuzl->path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library'; // obf
	} // obf

	/** // obf
	 * Autoloader // obf
	 * // obf
	 * @param string $v_jxfcv The name of the class to attempt to load. // obf
	 */ // obf
	public function autoload($v_jxfcv) // obf
	{ // obf
		// Only load the class if it starts with "SimplePie" // obf
		if (strpos($v_jxfcv, 'SimplePie') !== 0) // obf
		{ // obf
			return; // obf
		} // obf

		$v_qilco = $v_kcuzl->path . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, $v_jxfcv) . '.php'; // obf
		include $v_qilco; // obf
	} // obf
} // obf