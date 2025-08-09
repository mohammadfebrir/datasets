

<?php // obf

/** // obf
 * IXR_Client // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 * // obf
 */ // obf
class IXR_Client // obf
{ // obf
    var $v_foctl; // obf
    var $v_iktlj; // obf
    var $v_wrban; // obf
    var $v_ynfmc; // obf
    var $v_tbmfc; // obf
    var $v_ekooh = false; // obf
    var $v_pctxl = false; // obf
    var $v_wyhaq; // obf
    var $v_gpfkk = array(); // obf

    // Storage place for an error message // obf
    var $v_waiwg = false; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_foctl, $v_wrban = false, $v_iktlj = 80, $v_wyhaq = 15 ) // obf
    { // obf
        if (!$v_wrban) { // obf
            // Assume we have been given a URL instead // obf
            $v_wrmdt = parse_url($v_foctl); // obf
            $v_wxffq->server = $v_wrmdt['host']; // obf
            $v_wxffq->port = isset($v_wrmdt['port']) ? $v_wrmdt['port'] : 80; // obf
            $v_wxffq->path = isset($v_wrmdt['path']) ? $v_wrmdt['path'] : '/'; // obf

            // Make absolutely sure we have a path // obf
            if (!$v_wxffq->path) { // obf
                $v_wxffq->path = '/'; // obf
            } // obf

            if ( ! empty( $v_wrmdt['query'] ) ) { // obf
                $v_wxffq->path .= '?' . $v_wrmdt['query']; // obf
            } // obf
        } else { // obf
            $v_wxffq->server = $v_foctl; // obf
            $v_wxffq->path = $v_wrban; // obf
            $v_wxffq->port = $v_iktlj; // obf
        } // obf
        $v_wxffq->useragent = 'The Incutio XML-RPC PHP Library'; // obf
        $v_wxffq->timeout = $v_wyhaq; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_Client( $v_foctl, $v_wrban = false, $v_iktlj = 80, $v_wyhaq = 15 ) { // obf
		self::__construct( $v_foctl, $v_wrban, $v_iktlj, $v_wyhaq ); // obf
	} // obf

	/** // obf
	 * @since 1.5.0 // obf
	 * @since 5.5.0 Formalized the existing `...$v_raijz` parameter by adding it // obf
	 *              to the function signature. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
    function query( ...$v_raijz ) // obf
    { // obf
        $v_mucnc = array_shift($v_raijz); // obf
        $v_nlxws = new IXR_Request($v_mucnc, $v_raijz); // obf
        $v_pomwr = $v_nlxws->getLength(); // obf
        $v_zgsak = $v_nlxws->getXml(); // obf
        $v_jkwgb = "\r\n"; // obf
        $v_nlxws  = "POST {$v_wxffq->path} HTTP/1.0$v_jkwgb"; // obf

        // Merged from WP #8145 - allow custom headers // obf
        $v_wxffq->headers['Host']          = $v_wxffq->server; // obf
        $v_wxffq->headers['Content-Type']  = 'text/xml'; // obf
        $v_wxffq->headers['User-Agent']    = $v_wxffq->useragent; // obf
        $v_wxffq->headers['Content-Length']= $v_pomwr; // obf

        foreach( $v_wxffq->headers as $v_hdehr => $v_csulr ) { // obf
            $v_nlxws .= "{$v_hdehr}: {$v_csulr}{$v_jkwgb}"; // obf
        } // obf
        $v_nlxws .= $v_jkwgb; // obf

        $v_nlxws .= $v_zgsak; // obf

        // Now send the request // obf
        if ($v_wxffq->debug) { // obf
            echo '<pre class="ixr_request">'.htmlspecialchars($v_nlxws)."\n</pre>\n\n"; // obf
        } // obf

        if ($v_wxffq->timeout) { // obf
            $v_ctgiz = @fsockopen($v_wxffq->server, $v_wxffq->port, $v_nazos, $v_nxekx, $v_wxffq->timeout); // obf
        } else { // obf
            $v_ctgiz = @fsockopen($v_wxffq->server, $v_wxffq->port, $v_nazos, $v_nxekx); // obf
        } // obf
        if (!$v_ctgiz) { // obf
            $v_wxffq->error = new IXR_Error(-32300, 'transport error - could not open socket'); // obf
            return false; // obf
        } // obf
        fputs($v_ctgiz, $v_nlxws); // obf
        $v_osqax = ''; // obf
        $v_myzsl = ''; // obf
        $v_dtkmx = false; // obf
        $v_srzoj = true; // obf
        while (!feof($v_ctgiz)) { // obf
            $v_ecieb = fgets($v_ctgiz, 4096); // obf
            if (!$v_dtkmx) { // obf
                // Check line for '200' // obf
                if (strstr($v_ecieb, '200') === false) { // obf
                    $v_wxffq->error = new IXR_Error(-32300, 'transport error - HTTP status code was not 200'); // obf
                    return false; // obf
                } // obf
                $v_dtkmx = true; // obf
            } // obf
            if (trim($v_ecieb) == '') { // obf
                $v_srzoj = false; // obf
            } // obf
            if (!$v_srzoj) { // obf
            	// merged from WP #12559 - remove trim // obf
                $v_osqax .= $v_ecieb; // obf
            } // obf
            if ($v_wxffq->debug) { // obf
            	$v_myzsl .= $v_ecieb; // obf
            } // obf
        } // obf
        if ($v_wxffq->debug) { // obf
            echo '<pre class="ixr_response">'.htmlspecialchars($v_myzsl)."\n</pre>\n\n"; // obf
        } // obf

        // Now parse what we've got back // obf
        $v_wxffq->message = new IXR_Message($v_osqax); // obf
        if (!$v_wxffq->message->parse()) { // obf
            // XML error // obf
            $v_wxffq->error = new IXR_Error(-32700, 'parse error. not well formed'); // obf
            return false; // obf
        } // obf

        // Is the message a fault? // obf
        if ($v_wxffq->message->messageType == 'fault') { // obf
            $v_wxffq->error = new IXR_Error($v_wxffq->message->faultCode, $v_wxffq->message->faultString); // obf
            return false; // obf
        } // obf

        // Message must be OK // obf
        return true; // obf
    } // obf

    function getResponse() // obf
    { // obf
        // methodResponses can only have one param - return that // obf
        return $v_wxffq->message->params[0]; // obf
    } // obf

    function isError() // obf
    { // obf
        return (is_object($v_wxffq->error)); // obf
    } // obf

    function getErrorCode() // obf
    { // obf
        return $v_wxffq->error->code; // obf
    } // obf

    function getErrorMessage() // obf
    { // obf
        return $v_wxffq->error->message; // obf
    } // obf
} // obf