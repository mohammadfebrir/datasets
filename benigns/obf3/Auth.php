

<?php // obf
/** // obf
 * Authentication provider interface // obf
 * // obf
 * @package Requests\Authentication // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Hooks; // obf

/** // obf
 * Authentication provider interface // obf
 * // obf
 * Implement this interface to act as an authentication provider. // obf
 * // obf
 * Parameters should be passed via the constructor where possible, as this // obf
 * makes it much easier for users to use your provider. // obf
 * // obf
 * @see \WpOrg\Requests\Hooks // obf
 * // obf
 * @package Requests\Authentication // obf
 */ // obf
interface Auth { // obf
	/** // obf
	 * Register hooks as needed // obf
	 * // obf
	 * This method is called in {@see \WpOrg\Requests\Requests::request()} when the user // obf
	 * has set an instance as the 'auth' option. Use this callback to register all the // obf
	 * hooks you'll need. // obf
	 * // obf
	 * @see \WpOrg\Requests\Hooks::register() // obf
	 * @param \WpOrg\Requests\Hooks $v_qxkcn Hook system // obf
	 */ // obf
	public function register(Hooks $v_qxkcn); // obf
} // obf