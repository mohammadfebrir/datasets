

<?php // obf
/** // obf
 * IXR_Value // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 */ // obf
class IXR_Value { // obf
    var $v_puzyn; // obf
    var $v_xablf; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
	function __construct( $v_puzyn, $v_xablf = false ) // obf
    { // obf
        $v_vkcvl->data = $v_puzyn; // obf
        if (!$v_xablf) { // obf
            $v_xablf = $v_vkcvl->calculateType(); // obf
        } // obf
        $v_vkcvl->type = $v_xablf; // obf
        if ($v_xablf == 'struct') { // obf
            // Turn all the values in the array in to new IXR_Value objects // obf
            foreach ($v_vkcvl->data as $v_sfhmo => $v_bosbl) { // obf
                $v_vkcvl->data[$v_sfhmo] = new IXR_Value($v_bosbl); // obf
            } // obf
        } // obf
        if ($v_xablf == 'array') { // obf
            for ($v_hbthh = 0, $v_sisee = count($v_vkcvl->data); $v_hbthh < $v_sisee; $v_hbthh++) { // obf
                $v_vkcvl->data[$v_hbthh] = new IXR_Value($v_vkcvl->data[$v_hbthh]); // obf
            } // obf
        } // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_Value( $v_puzyn, $v_xablf = false ) { // obf
		self::__construct( $v_puzyn, $v_xablf ); // obf
	} // obf

    function calculateType() // obf
    { // obf
        if ($v_vkcvl->data === true || $v_vkcvl->data === false) { // obf
            return 'boolean'; // obf
        } // obf
        if (is_integer($v_vkcvl->data)) { // obf
            return 'int'; // obf
        } // obf
        if (is_double($v_vkcvl->data)) { // obf
            return 'double'; // obf
        } // obf

        // Deal with IXR object types base64 and date // obf
        if (is_object($v_vkcvl->data) && is_a($v_vkcvl->data, 'IXR_Date')) { // obf
            return 'date'; // obf
        } // obf
        if (is_object($v_vkcvl->data) && is_a($v_vkcvl->data, 'IXR_Base64')) { // obf
            return 'base64'; // obf
        } // obf

        // If it is a normal PHP object convert it in to a struct // obf
        if (is_object($v_vkcvl->data)) { // obf
            $v_vkcvl->data = get_object_vars($v_vkcvl->data); // obf
            return 'struct'; // obf
        } // obf
        if (!is_array($v_vkcvl->data)) { // obf
            return 'string'; // obf
        } // obf

        // We have an array - is it an array or a struct? // obf
        if ($v_vkcvl->isStruct($v_vkcvl->data)) { // obf
            return 'struct'; // obf
        } else { // obf
            return 'array'; // obf
        } // obf
    } // obf

    function getXml() // obf
    { // obf
        // Return XML for this value // obf
        switch ($v_vkcvl->type) { // obf
            case 'boolean': // obf
                return '<boolean>'.(($v_vkcvl->data) ? '1' : '0').'</boolean>'; // obf
                break; // obf
            case 'int': // obf
                return '<int>'.$v_vkcvl->data.'</int>'; // obf
                break; // obf
            case 'double': // obf
                return '<double>'.$v_vkcvl->data.'</double>'; // obf
                break; // obf
            case 'string': // obf
                return '<string>'.htmlspecialchars($v_vkcvl->data).'</string>'; // obf
                break; // obf
            case 'array': // obf
                $v_weobx = '<array><data>'."\n"; // obf
                foreach ($v_vkcvl->data as $v_aeozp) { // obf
                    $v_weobx .= '  <value>'.$v_aeozp->getXml()."</value>\n"; // obf
                } // obf
                $v_weobx .= '</data></array>'; // obf
                return $v_weobx; // obf
                break; // obf
            case 'struct': // obf
                $v_weobx = '<struct>'."\n"; // obf
                foreach ($v_vkcvl->data as $v_ujxfn => $v_bosbl) { // obf
					$v_ujxfn = htmlspecialchars($v_ujxfn); // obf
                    $v_weobx .= "  <member><name>$v_ujxfn</name><value>"; // obf
                    $v_weobx .= $v_bosbl->getXml()."</value></member>\n"; // obf
                } // obf
                $v_weobx .= '</struct>'; // obf
                return $v_weobx; // obf
                break; // obf
            case 'date': // obf
            case 'base64': // obf
                return $v_vkcvl->data->getXml(); // obf
                break; // obf
        } // obf
        return false; // obf
    } // obf

    /** // obf
     * Checks whether or not the supplied array is a struct or not // obf
     * // obf
     * @param array $v_nsrnr // obf
     * @return bool // obf
     */ // obf
    function isStruct($v_nsrnr) // obf
    { // obf
        $v_czqvg = 0; // obf
        foreach ($v_nsrnr as $v_sfhmo => $v_bosbl) { // obf
            if ((string)$v_sfhmo !== (string)$v_czqvg) { // obf
                return true; // obf
            } // obf
            $v_czqvg++; // obf
        } // obf
        return false; // obf
    } // obf
} // obf