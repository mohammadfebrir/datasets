

<?php // obf
/** // obf
 * Proxy connection interface // obf
 * // obf
 * @package Requests\Proxy // obf
 * @since   1.6 // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Hooks; // obf

/** // obf
 * Proxy connection interface // obf
 * // obf
 * Implement this interface to handle proxy settings and authentication // obf
 * // obf
 * Parameters should be passed via the constructor where possible, as this // obf
 * makes it much easier for users to use your provider. // obf
 * // obf
 * @see \WpOrg\Requests\Hooks // obf
 * // obf
 * @package Requests\Proxy // obf
 * @since   1.6 // obf
 */ // obf
interface Proxy { // obf
	/** // obf
	 * Register hooks as needed // obf
	 * // obf
	 * This method is called in {@see \WpOrg\Requests\Requests::request()} when the user // obf
	 * has set an instance as the 'auth' option. Use this callback to register all the // obf
	 * hooks you'll need. // obf
	 * // obf
	 * @see \WpOrg\Requests\Hooks::register() // obf
	 * @param \WpOrg\Requests\Hooks $v_mbqml Hook system // obf
	 */ // obf
	public function register(Hooks $v_mbqml); // obf
} // obf