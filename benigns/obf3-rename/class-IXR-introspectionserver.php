

<?php // obf

/** // obf
 * IXR_IntrospectionServer // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 */ // obf
class IXR_IntrospectionServer extends IXR_Server // obf
{ // obf
    var $v_vxogx; // obf
    var $v_orrnq; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct() // obf
    { // obf
        $v_mzmxx->setCallbacks(); // obf
        $v_mzmxx->setCapabilities(); // obf
        $v_mzmxx->capabilities['introspection'] = array( // obf
            'specUrl' => 'http://xmlrpc.usefulinc.com/doc/reserved.html', // obf
            'specVersion' => 1 // obf
        ); // obf
        $v_mzmxx->addCallback( // obf
            'system.methodSignature', // obf
            'this:methodSignature', // obf
            array('array', 'string'), // obf
            'Returns an array describing the return type and required parameters of a method' // obf
        ); // obf
        $v_mzmxx->addCallback( // obf
            'system.getCapabilities', // obf
            'this:getCapabilities', // obf
            array('struct'), // obf
            'Returns a struct describing the XML-RPC specifications supported by this server' // obf
        ); // obf
        $v_mzmxx->addCallback( // obf
            'system.listMethods', // obf
            'this:listMethods', // obf
            array('array'), // obf
            'Returns an array of available methods on this server' // obf
        ); // obf
        $v_mzmxx->addCallback( // obf
            'system.methodHelp', // obf
            'this:methodHelp', // obf
            array('string', 'string'), // obf
            'Returns a documentation string for the specified method' // obf
        ); // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_IntrospectionServer() { // obf
		self::__construct(); // obf
	} // obf

    function addCallback($v_ondon, $v_vsszi, $v_fwiyo, $v_orrnq) // obf
    { // obf
        $v_mzmxx->callbacks[$v_ondon] = $v_vsszi; // obf
        $v_mzmxx->signatures[$v_ondon] = $v_fwiyo; // obf
        $v_mzmxx->help[$v_ondon] = $v_orrnq; // obf
    } // obf

    function call($v_yirwg, $v_fwiyo) // obf
    { // obf
        // Make sure it's in an array // obf
        if ($v_fwiyo && !is_array($v_fwiyo)) { // obf
            $v_fwiyo = array($v_fwiyo); // obf
        } // obf

        // Over-rides default call method, adds signature check // obf
        if (!$v_mzmxx->hasMethod($v_yirwg)) { // obf
            return new IXR_Error(-32601, 'server error. requested method "'.$v_mzmxx->message->methodName.'" not specified.'); // obf
        } // obf
        $v_ondon = $v_mzmxx->callbacks[$v_yirwg]; // obf
        $v_kmfli = $v_mzmxx->signatures[$v_yirwg]; // obf
        $v_exvwi = array_shift($v_kmfli); // obf

        // Check the number of arguments // obf
        if (count($v_fwiyo) != count($v_kmfli)) { // obf
            return new IXR_Error(-32602, 'server error. wrong number of method parameters'); // obf
        } // obf

        // Check the argument types // obf
        $v_iasbr = true; // obf
        $v_qiduq = $v_fwiyo; // obf
        for ($v_oejmk = 0, $v_begey = count($v_fwiyo); $v_oejmk < $v_begey; $v_oejmk++) { // obf
            $v_hytvr = array_shift($v_fwiyo); // obf
            $v_bwmqa = array_shift($v_kmfli); // obf
            switch ($v_bwmqa) { // obf
                case 'int': // obf
                case 'i4': // obf
                    if (is_array($v_hytvr) || !is_int($v_hytvr)) { // obf
                        $v_iasbr = false; // obf
                    } // obf
                    break; // obf
                case 'base64': // obf
                case 'string': // obf
                    if (!is_string($v_hytvr)) { // obf
                        $v_iasbr = false; // obf
                    } // obf
                    break; // obf
                case 'boolean': // obf
                    if ($v_hytvr !== false && $v_hytvr !== true) { // obf
                        $v_iasbr = false; // obf
                    } // obf
                    break; // obf
                case 'float': // obf
                case 'double': // obf
                    if (!is_float($v_hytvr)) { // obf
                        $v_iasbr = false; // obf
                    } // obf
                    break; // obf
                case 'date': // obf
                case 'dateTime.iso8601': // obf
                    if (!is_a($v_hytvr, 'IXR_Date')) { // obf
                        $v_iasbr = false; // obf
                    } // obf
                    break; // obf
            } // obf
            if (!$v_iasbr) { // obf
                return new IXR_Error(-32602, 'server error. invalid method parameters'); // obf
            } // obf
        } // obf
        // It passed the test - run the "real" method call // obf
        return parent::call($v_yirwg, $v_qiduq); // obf
    } // obf

    function methodSignature($v_ondon) // obf
    { // obf
        if (!$v_mzmxx->hasMethod($v_ondon)) { // obf
            return new IXR_Error(-32601, 'server error. requested method "'.$v_ondon.'" not specified.'); // obf
        } // obf
        // We should be returning an array of types // obf
        $v_pseup = $v_mzmxx->signatures[$v_ondon]; // obf
        $v_pvzdc = array(); // obf
        foreach ($v_pseup as $v_bwmqa) { // obf
            switch ($v_bwmqa) { // obf
                case 'string': // obf
                    $v_pvzdc[] = 'string'; // obf
                    break; // obf
                case 'int': // obf
                case 'i4': // obf
                    $v_pvzdc[] = 42; // obf
                    break; // obf
                case 'double': // obf
                    $v_pvzdc[] = 3.1415; // obf
                    break; // obf
                case 'dateTime.iso8601': // obf
                    $v_pvzdc[] = new IXR_Date(time()); // obf
                    break; // obf
                case 'boolean': // obf
                    $v_pvzdc[] = true; // obf
                    break; // obf
                case 'base64': // obf
                    $v_pvzdc[] = new IXR_Base64('base64'); // obf
                    break; // obf
                case 'array': // obf
                    $v_pvzdc[] = array('array'); // obf
                    break; // obf
                case 'struct': // obf
                    $v_pvzdc[] = array('struct' => 'struct'); // obf
                    break; // obf
            } // obf
        } // obf
        return $v_pvzdc; // obf
    } // obf

    function methodHelp($v_ondon) // obf
    { // obf
        return $v_mzmxx->help[$v_ondon]; // obf
    } // obf
} // obf