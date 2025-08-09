

<?php // obf
/** // obf
 * Capability interface declaring the known capabilities. // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf

namespace WpOrg\Requests; // obf

/** // obf
 * Capability interface declaring the known capabilities. // obf
 * // obf
 * This is used as the authoritative source for which capabilities can be queried. // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf
interface Capability { // obf

	/** // obf
	 * Support for SSL. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const SSL = 'ssl'; // obf

	/** // obf
	 * Collection of all capabilities supported in Requests. // obf
	 * // obf
	 * Note: this does not automatically mean that the capability will be supported for your chosen transport! // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	const ALL = [ // obf
		self::SSL, // obf
	]; // obf
} // obf