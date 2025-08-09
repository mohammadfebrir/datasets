

<?php // obf

/** // obf
 * IXR_Error // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 */ // obf
class IXR_Error // obf
{ // obf
    var $v_rryte; // obf
    var $v_dcapt; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_rryte, $v_dcapt ) // obf
    { // obf
        $v_qhxej->code = $v_rryte; // obf
        $v_qhxej->message = htmlspecialchars($v_dcapt); // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_Error( $v_rryte, $v_dcapt ) { // obf
		self::__construct( $v_rryte, $v_dcapt ); // obf
	} // obf

    function getXml() // obf
    { // obf
        $v_qvaoc = <<<EOD // obf
<methodResponse> // obf
  <fault> // obf
    <value> // obf
      <struct> // obf
        <member> // obf
          <name>faultCode</name> // obf
          <value><int>{$v_qhxej->code}</int></value> // obf
        </member> // obf
        <member> // obf
          <name>faultString</name> // obf
          <value><string>{$v_qhxej->message}</string></value> // obf
        </member> // obf
      </struct> // obf
    </value> // obf
  </fault> // obf
</methodResponse> // obf

EOD; // obf
        return $v_qvaoc; // obf
    } // obf
} // obf