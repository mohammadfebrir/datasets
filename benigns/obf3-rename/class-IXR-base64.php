

<?php // obf

/** // obf
 * IXR_Base64 // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 */ // obf
class IXR_Base64 // obf
{ // obf
    var $v_qelxj; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_qelxj ) // obf
    { // obf
        $v_nwovf->data = $v_qelxj; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_Base64( $v_qelxj ) { // obf
		self::__construct( $v_qelxj ); // obf
	} // obf

    function getXml() // obf
    { // obf
        return '<base64>'.base64_encode($v_nwovf->data).'</base64>'; // obf
    } // obf
} // obf