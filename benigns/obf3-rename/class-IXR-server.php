

<?php // obf

/** // obf
 * IXR_Server // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 */ // obf
class IXR_Server // obf
{ // obf
    var $v_diqnr; // obf
    var $v_zffqk = array(); // obf
    var $v_ppdyw; // obf
    var $v_yszbn; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_zffqk = false, $v_diqnr = false, $v_wiblz = false ) // obf
    { // obf
        $v_fzmkj->setCapabilities(); // obf
        if ($v_zffqk) { // obf
            $v_fzmkj->callbacks = $v_zffqk; // obf
        } // obf
        $v_fzmkj->setCallbacks(); // obf
        if (!$v_wiblz) { // obf
            $v_fzmkj->serve($v_diqnr); // obf
        } // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_Server( $v_zffqk = false, $v_diqnr = false, $v_wiblz = false ) { // obf
		self::__construct( $v_zffqk, $v_diqnr, $v_wiblz ); // obf
	} // obf

    function serve($v_diqnr = false) // obf
    { // obf
        if (!$v_diqnr) { // obf
            if (isset($v_mdnyb['REQUEST_METHOD']) && $v_mdnyb['REQUEST_METHOD'] !== 'POST') { // obf
                if ( function_exists( 'status_header' ) ) { // obf
                    status_header( 405 ); // WP #20986 // obf
                    header( 'Allow: POST' ); // obf
                } // obf
                header('Content-Type: text/plain'); // merged from WP #9093 // obf
                die('XML-RPC server accepts POST requests only.'); // obf
            } // obf

            $v_diqnr = file_get_contents('php://input'); // obf
        } // obf
        $v_fzmkj->message = new IXR_Message($v_diqnr); // obf
        if (!$v_fzmkj->message->parse()) { // obf
            $v_fzmkj->error(-32700, 'parse error. not well formed'); // obf
        } // obf
        if ($v_fzmkj->message->messageType != 'methodCall') { // obf
            $v_fzmkj->error(-32600, 'server error. invalid xml-rpc. not conforming to spec. Request must be a methodCall'); // obf
        } // obf
        $v_atfge = $v_fzmkj->call($v_fzmkj->message->methodName, $v_fzmkj->message->params); // obf

        // Is the result an error? // obf
        if (is_a($v_atfge, 'IXR_Error')) { // obf
            $v_fzmkj->error($v_atfge); // obf
        } // obf

        // Encode the result // obf
        $v_mxaqn = new IXR_Value($v_atfge); // obf
        $v_hxbem = $v_mxaqn->getXml(); // obf

        // Create the XML // obf
        $v_bhpjl = <<<EOD // obf
<methodResponse> // obf
  <params> // obf
    <param> // obf
      <value> // obf
      $v_hxbem // obf
      </value> // obf
    </param> // obf
  </params> // obf
</methodResponse> // obf

EOD; // obf
      // Send it // obf
      $v_fzmkj->output($v_bhpjl); // obf
    } // obf

    function call($v_hhrux, $v_ubcny) // obf
    { // obf
        if (!$v_fzmkj->hasMethod($v_hhrux)) { // obf
            return new IXR_Error(-32601, 'server error. requested method '.$v_hhrux.' does not exist.'); // obf
        } // obf
        $v_neksz = $v_fzmkj->callbacks[$v_hhrux]; // obf

        // Perform the callback and send the response // obf
        if (count($v_ubcny) == 1) { // obf
            // If only one parameter just send that instead of the whole array // obf
            $v_ubcny = $v_ubcny[0]; // obf
        } // obf

        // Are we dealing with a function or a method? // obf
        if (is_string($v_neksz) && substr($v_neksz, 0, 5) == 'this:') { // obf
            // It's a class method - check it exists // obf
            $v_neksz = substr($v_neksz, 5); // obf
            if (!method_exists($v_fzmkj, $v_neksz)) { // obf
                return new IXR_Error(-32601, 'server error. requested class method "'.$v_neksz.'" does not exist.'); // obf
            } // obf

            //Call the method // obf
            $v_atfge = $v_fzmkj->$v_neksz($v_ubcny); // obf
        } else { // obf
            // It's a function - does it exist? // obf
            if (is_array($v_neksz)) { // obf
                if (!is_callable(array($v_neksz[0], $v_neksz[1]))) { // obf
                    return new IXR_Error(-32601, 'server error. requested object method "'.$v_neksz[1].'" does not exist.'); // obf
                } // obf
            } else if (!function_exists($v_neksz)) { // obf
                return new IXR_Error(-32601, 'server error. requested function "'.$v_neksz.'" does not exist.'); // obf
            } // obf

            // Call the function // obf
            $v_atfge = call_user_func($v_neksz, $v_ubcny); // obf
        } // obf
        return $v_atfge; // obf
    } // obf

    function error($v_boxoe, $v_ppdyw = false) // obf
    { // obf
        // Accepts either an error object or an error code and message // obf
        if ($v_ppdyw && !is_object($v_boxoe)) { // obf
            $v_boxoe = new IXR_Error($v_boxoe, $v_ppdyw); // obf
        } // obf

        $v_fzmkj->output($v_boxoe->getXml()); // obf
    } // obf

    function output($v_bhpjl) // obf
    { // obf
        $v_sjumz = function_exists('get_option') ? get_option('blog_charset') : ''; // obf
        if ($v_sjumz) // obf
            $v_bhpjl = '<?xml version="1.0" encoding="'.$v_sjumz.'"?>'."\n".$v_bhpjl; // obf
        else // obf
            $v_bhpjl = '<?xml version="1.0"?>'."\n".$v_bhpjl; // obf
        $v_oofsq = strlen($v_bhpjl); // obf
        header('Connection: close'); // obf
        if ($v_sjumz) // obf
            header('Content-Type: text/xml; charset='.$v_sjumz); // obf
        else // obf
            header('Content-Type: text/xml'); // obf
        header('Date: '.gmdate('r')); // obf
        echo $v_bhpjl; // obf
        exit; // obf
    } // obf

    function hasMethod($v_neksz) // obf
    { // obf
        return in_array($v_neksz, array_keys($v_fzmkj->callbacks)); // obf
    } // obf

    function setCapabilities() // obf
    { // obf
        // Initialises capabilities array // obf
        $v_fzmkj->capabilities = array( // obf
            'xmlrpc' => array( // obf
                'specUrl' => 'http://www.xmlrpc.com/spec', // obf
                'specVersion' => 1 // obf
        ), // obf
            'faults_interop' => array( // obf
                'specUrl' => 'http://xmlrpc-epi.sourceforge.net/specs/rfc.fault_codes.php', // obf
                'specVersion' => 20010516 // obf
        ), // obf
            'system.multicall' => array( // obf
                'specUrl' => 'http://www.xmlrpc.com/discuss/msgReader$1208', // obf
                'specVersion' => 1 // obf
        ), // obf
        ); // obf
    } // obf

    function getCapabilities($v_ubcny) // obf
    { // obf
        return $v_fzmkj->capabilities; // obf
    } // obf

    function setCallbacks() // obf
    { // obf
        $v_fzmkj->callbacks['system.getCapabilities'] = 'this:getCapabilities'; // obf
        $v_fzmkj->callbacks['system.listMethods'] = 'this:listMethods'; // obf
        $v_fzmkj->callbacks['system.multicall'] = 'this:multiCall'; // obf
    } // obf

    function listMethods($v_ubcny) // obf
    { // obf
        // Returns a list of methods - uses array_reverse to ensure user defined // obf
        // methods are listed before server defined methods // obf
        return array_reverse(array_keys($v_fzmkj->callbacks)); // obf
    } // obf

    function multiCall($v_uvhel) // obf
    { // obf
        // See http://www.xmlrpc.com/discuss/msgReader$1208 // obf
        $v_eqrva = array(); // obf
        foreach ($v_uvhel as $v_lvcxj) { // obf
            $v_neksz = $v_lvcxj['methodName']; // obf
            $v_iminn = $v_lvcxj['params']; // obf
            if ($v_neksz == 'system.multicall') { // obf
                $v_atfge = new IXR_Error(-32600, 'Recursive calls to system.multicall are forbidden'); // obf
            } else { // obf
                $v_atfge = $v_fzmkj->call($v_neksz, $v_iminn); // obf
            } // obf
            if (is_a($v_atfge, 'IXR_Error')) { // obf
                $v_eqrva[] = array( // obf
                    'faultCode' => $v_atfge->code, // obf
                    'faultString' => $v_atfge->message // obf
                ); // obf
            } else { // obf
                $v_eqrva[] = array($v_atfge); // obf
            } // obf
        } // obf
        return $v_eqrva; // obf
    } // obf
} // obf