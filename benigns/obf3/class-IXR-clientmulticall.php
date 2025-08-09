

<?php // obf
/** // obf
 * IXR_ClientMulticall // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 */ // obf
class IXR_ClientMulticall extends IXR_Client // obf
{ // obf
    var $v_fgztq = array(); // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_cscpq, $v_odcyb = false, $v_usbpc = 80 ) // obf
    { // obf
        parent::IXR_Client($v_cscpq, $v_odcyb, $v_usbpc); // obf
        $v_vofbr->useragent = 'The Incutio XML-RPC PHP Library (multicall client)'; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_ClientMulticall( $v_cscpq, $v_odcyb = false, $v_usbpc = 80 ) { // obf
		self::__construct( $v_cscpq, $v_odcyb, $v_usbpc ); // obf
	} // obf

	/** // obf
	 * @since 1.5.0 // obf
	 * @since 5.5.0 Formalized the existing `...$v_ymkti` parameter by adding it // obf
	 *              to the function signature. // obf
	 */ // obf
    function addCall( ...$v_ymkti ) // obf
    { // obf
        $v_cedma = array_shift($v_ymkti); // obf
        $v_tbaru = array( // obf
            'methodName' => $v_cedma, // obf
            'params' => $v_ymkti // obf
        ); // obf
        $v_vofbr->calls[] = $v_tbaru; // obf
    } // obf

	/** // obf
	 * @since 1.5.0 // obf
	 * @since 5.5.0 Formalized the existing `...$v_ymkti` parameter by adding it // obf
	 *              to the function signature. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
    function query( ...$v_ymkti ) // obf
    { // obf
        // Prepare multicall, then call the parent::query() method // obf
        return parent::query('system.multicall', $v_vofbr->calls); // obf
    } // obf
} // obf