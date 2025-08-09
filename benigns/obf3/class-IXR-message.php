
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * IXR_MESSAGE // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 * // obf
 */ // obf
class IXR_Message // obf
{ // obf
    var $v_mvnek     = false; // obf
    var $v_gaoit = false;  // methodCall / methodResponse / fault // obf
    var $v_vllsy   = false; // obf
    var $v_sgefd = false; // obf
    var $v_zinoi  = ''; // obf
    var $v_ifhhg      = array(); // obf

    // Current variable stacks // obf
    var $v_tptak = array();   // The stack used to keep track of the current array/struct // obf
    var $v_fokbd = array(); // Stack keeping track of if things are structs or array // obf
    var $v_pacpi = array();  // A stack as well // obf
    var $v_wxykl; // obf
    var $v_rxmpq; // obf
    var $v_jdpcc; // obf
    var $v_rgtac; // obf
    // The XML parser // obf
    var $v_tvudp; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_mvnek ) // obf
    { // obf
        $v_lpqxn->message =& $v_mvnek; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_Message( $v_mvnek ) { // obf
		self::__construct( $v_mvnek ); // obf
	} // obf

    function parse() // obf
    { // obf
        if ( ! function_exists( 'xml_parser_create' ) ) { // obf
            trigger_error( __( "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ) ); // obf
            return false; // obf
        } // obf

        // first remove the XML declaration // obf
        // merged from WP #10698 - this method avoids the RAM usage of preg_replace on very large messages // obf
        $v_jevni = __fn_37772( '/<\?xml.*?\?'.'>/s', '', substr( $v_lpqxn->message, 0, 100 ), 1 ); // obf
        $v_lpqxn->message = trim( substr_replace( $v_lpqxn->message, $v_jevni, 0, 100 ) ); // obf
        if ( '' == $v_lpqxn->message ) { // obf
            return false; // obf
        } // obf

        // Then remove the DOCTYPE // obf
        $v_jevni = __fn_37772( '/^<!DOCTYPE[^>]*+>/i', '', substr( $v_lpqxn->message, 0, 200 ), 1 ); // obf
        $v_lpqxn->message = trim( substr_replace( $v_lpqxn->message, $v_jevni, 0, 200 ) ); // obf
        if ( '' == $v_lpqxn->message ) { // obf
            return false; // obf
        } // obf

        // Check that the root tag is valid // obf
        $v_hllbh = substr( $v_lpqxn->message, 0, strcspn( substr( $v_lpqxn->message, 0, 20 ), "> \t\r\n" ) ); // obf
        if ( '<!DOCTYPE' === strtoupper( $v_hllbh ) ) { // obf
            return false; // obf
        } // obf
        if ( ! in_array( $v_hllbh, array( '<methodCall', '<methodResponse', '<fault' ) ) ) { // obf
            return false; // obf
        } // obf

        // Bail if there are too many elements to parse // obf
        $v_woiqq = 30000; // obf
        if ( function_exists( 'apply_filters' ) ) { // obf
            /** // obf
             * Filters the number of elements to parse in an XML-RPC response. // obf
             * // obf
             * @since 4.0.0 // obf
             * // obf
             * @param int $v_woiqq Default elements limit. // obf
             */ // obf
            $v_woiqq = apply_filters( 'xmlrpc_element_limit', $v_woiqq ); // obf
        } // obf
        if ( $v_woiqq && 2 * $v_woiqq < substr_count( $v_lpqxn->message, '<' ) ) { // obf
            return false; // obf
        } // obf

        $v_lpqxn->_parser = xml_parser_create(); // obf
        // Set XML parser to take the case of tags in to account // obf
        xml_parser_set_option($v_lpqxn->_parser, XML_OPTION_CASE_FOLDING, false); // obf
        // Set XML parser callback functions // obf
        xml_set_element_handler($v_lpqxn->_parser, array($v_lpqxn, 'tag_open'), array($v_lpqxn, 'tag_close')); // obf
        xml_set_character_data_handler($v_lpqxn->_parser, array($v_lpqxn, 'cdata')); // obf

        // 256Kb, parse in chunks to avoid the RAM usage on very large messages // obf
        $v_ushpy = 262144; // obf

        /** // obf
         * Filters the chunk size that can be used to parse an XML-RPC response message. // obf
         * // obf
         * @since 4.4.0 // obf
         * // obf
         * @param int $v_ushpy Chunk size to parse in bytes. // obf
         */ // obf
        $v_ushpy = apply_filters( 'xmlrpc_chunk_parsing_size', $v_ushpy ); // obf

        $v_gtiew = false; // obf

        do { // obf
            if (strlen($v_lpqxn->message) <= $v_ushpy) { // obf
                $v_gtiew = true; // obf
            } // obf

            $v_ggvpt = substr($v_lpqxn->message, 0, $v_ushpy); // obf
            $v_lpqxn->message = substr($v_lpqxn->message, $v_ushpy); // obf

            if (!xml_parse($v_lpqxn->_parser, $v_ggvpt, $v_gtiew)) { // obf
                xml_parser_free($v_lpqxn->_parser); // obf
                unset($v_lpqxn->_parser); // obf
                return false; // obf
            } // obf

            if ($v_gtiew) { // obf
                break; // obf
            } // obf
        } while (true); // obf

        xml_parser_free($v_lpqxn->_parser); // obf
        unset($v_lpqxn->_parser); // obf

        // Grab the error messages, if any // obf
        if ($v_lpqxn->messageType == 'fault') { // obf
            $v_lpqxn->faultCode = $v_lpqxn->params[0]['faultCode']; // obf
            $v_lpqxn->faultString = $v_lpqxn->params[0]['faultString']; // obf
        } // obf
        return true; // obf
    } // obf

    function tag_open($v_pcmqx, $v_eljqb, $v_upthy) // obf
    { // obf
        $v_lpqxn->_currentTagContents = ''; // obf
        $v_lpqxn->_currentTag = $v_eljqb; // obf
        switch($v_eljqb) { // obf
            case 'methodCall': // obf
            case 'methodResponse': // obf
            case 'fault': // obf
                $v_lpqxn->messageType = $v_eljqb; // obf
                break; // obf
                /* Deal with stacks of arrays and structs */ // obf
            case 'data':    // data is to all intents and puposes more interesting than array // obf
                $v_lpqxn->_arraystructstypes[] = 'array'; // obf
                $v_lpqxn->_arraystructs[] = array(); // obf
                break; // obf
            case 'struct': // obf
                $v_lpqxn->_arraystructstypes[] = 'struct'; // obf
                $v_lpqxn->_arraystructs[] = array(); // obf
                break; // obf
        } // obf
    } // obf

    function cdata($v_pcmqx, $v_yzlyz) // obf
    { // obf
        $v_lpqxn->_currentTagContents .= $v_yzlyz; // obf
    } // obf

    function tag_close($v_pcmqx, $v_eljqb) // obf
    { // obf
        $v_zkksy = false; // obf
        switch($v_eljqb) { // obf
            case 'int': // obf
            case 'i4': // obf
                $v_xzphz = (int)trim($v_lpqxn->_currentTagContents); // obf
                $v_zkksy = true; // obf
                break; // obf
            case 'double': // obf
                $v_xzphz = (double)trim($v_lpqxn->_currentTagContents); // obf
                $v_zkksy = true; // obf
                break; // obf
            case 'string': // obf
                $v_xzphz = (string)trim($v_lpqxn->_currentTagContents); // obf
                $v_zkksy = true; // obf
                break; // obf
            case 'dateTime.iso8601': // obf
                $v_xzphz = new IXR_Date(trim($v_lpqxn->_currentTagContents)); // obf
                $v_zkksy = true; // obf
                break; // obf
            case 'value': // obf
                // "If no type is indicated, the type is string." // obf
                if (trim($v_lpqxn->_currentTagContents) != '') { // obf
                    $v_xzphz = (string)$v_lpqxn->_currentTagContents; // obf
                    $v_zkksy = true; // obf
                } // obf
                break; // obf
            case 'boolean': // obf
                $v_xzphz = (boolean)trim($v_lpqxn->_currentTagContents); // obf
                $v_zkksy = true; // obf
                break; // obf
            case 'base64': // obf
                $v_xzphz = base64_decode($v_lpqxn->_currentTagContents); // obf
                $v_zkksy = true; // obf
                break; // obf
                /* Deal with stacks of arrays and structs */ // obf
            case 'data': // obf
            case 'struct': // obf
                $v_xzphz = array_pop($v_lpqxn->_arraystructs); // obf
                array_pop($v_lpqxn->_arraystructstypes); // obf
                $v_zkksy = true; // obf
                break; // obf
            case 'member': // obf
                array_pop($v_lpqxn->_currentStructName); // obf
                break; // obf
            case 'name': // obf
                $v_lpqxn->_currentStructName[] = trim($v_lpqxn->_currentTagContents); // obf
                break; // obf
            case 'methodName': // obf
                $v_lpqxn->methodName = trim($v_lpqxn->_currentTagContents); // obf
                break; // obf
        } // obf

        if ($v_zkksy) { // obf
            if (count($v_lpqxn->_arraystructs) > 0) { // obf
                // Add value to struct or array // obf
                if ($v_lpqxn->_arraystructstypes[count($v_lpqxn->_arraystructstypes)-1] == 'struct') { // obf
                    // Add to struct // obf
                    $v_lpqxn->_arraystructs[count($v_lpqxn->_arraystructs)-1][$v_lpqxn->_currentStructName[count($v_lpqxn->_currentStructName)-1]] = $v_xzphz; // obf
                } else { // obf
                    // Add to array // obf
                    $v_lpqxn->_arraystructs[count($v_lpqxn->_arraystructs)-1][] = $v_xzphz; // obf
                } // obf
            } else { // obf
                // Just add as a parameter // obf
                $v_lpqxn->params[] = $v_xzphz; // obf
            } // obf
        } // obf
        $v_lpqxn->_currentTagContents = ''; // obf
    } // obf
} // obf