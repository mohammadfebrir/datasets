

<?php // obf

/** // obf
 * IXR_Request // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 */ // obf
class IXR_Request // obf
{ // obf
    var $v_epeqp; // obf
    var $v_nldxn; // obf
    var $v_gmvho; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct($v_epeqp, $v_nldxn) // obf
    { // obf
        $v_qlqpf->method = $v_epeqp; // obf
        $v_qlqpf->args = $v_nldxn; // obf
        $v_qlqpf->xml = <<<EOD // obf
<?xml version="1.0"?> // obf
<methodCall> // obf
<methodName>{$v_qlqpf->method}</methodName> // obf
<params> // obf

EOD; // obf
        foreach ($v_qlqpf->args as $v_ojlom) { // obf
            $v_qlqpf->xml .= '<param><value>'; // obf
            $v_ptzvw = new IXR_Value($v_ojlom); // obf
            $v_qlqpf->xml .= $v_ptzvw->getXml(); // obf
            $v_qlqpf->xml .= "</value></param>\n"; // obf
        } // obf
        $v_qlqpf->xml .= '</params></methodCall>'; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_Request( $v_epeqp, $v_nldxn ) { // obf
		self::__construct( $v_epeqp, $v_nldxn ); // obf
	} // obf

    function getLength() // obf
    { // obf
        return strlen($v_qlqpf->xml); // obf
    } // obf

    function getXml() // obf
    { // obf
        return $v_qlqpf->xml; // obf
    } // obf
} // obf