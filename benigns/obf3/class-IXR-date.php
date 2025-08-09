

<?php // obf

/** // obf
 * IXR_Date // obf
 * // obf
 * @package IXR // obf
 * @since 1.5.0 // obf
 */ // obf
class IXR_Date { // obf
    var $v_lktpy; // obf
    var $v_rnzic; // obf
    var $v_consh; // obf
    var $v_ularu; // obf
    var $v_lvenv; // obf
    var $v_lnmvi; // obf
    var $v_lqrwo; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_oluwj ) // obf
    { // obf
        // $v_oluwj can be a PHP timestamp or an ISO one // obf
        if (is_numeric($v_oluwj)) { // obf
            $v_lqlhz->parseTimestamp($v_oluwj); // obf
        } else { // obf
            $v_lqlhz->parseIso($v_oluwj); // obf
        } // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function IXR_Date( $v_oluwj ) { // obf
		self::__construct( $v_oluwj ); // obf
	} // obf

    function parseTimestamp($v_umrrz) // obf
    { // obf
        $v_lqlhz->year = gmdate('Y', $v_umrrz); // obf
        $v_lqlhz->month = gmdate('m', $v_umrrz); // obf
        $v_lqlhz->day = gmdate('d', $v_umrrz); // obf
        $v_lqlhz->hour = gmdate('H', $v_umrrz); // obf
        $v_lqlhz->minute = gmdate('i', $v_umrrz); // obf
        $v_lqlhz->second = gmdate('s', $v_umrrz); // obf
        $v_lqlhz->timezone = ''; // obf
    } // obf

    function parseIso($v_txtwt) // obf
    { // obf
        $v_lqlhz->year = substr($v_txtwt, 0, 4); // obf
        $v_lqlhz->month = substr($v_txtwt, 4, 2); // obf
        $v_lqlhz->day = substr($v_txtwt, 6, 2); // obf
        $v_lqlhz->hour = substr($v_txtwt, 9, 2); // obf
        $v_lqlhz->minute = substr($v_txtwt, 12, 2); // obf
        $v_lqlhz->second = substr($v_txtwt, 15, 2); // obf
        $v_lqlhz->timezone = substr($v_txtwt, 17); // obf
    } // obf

    function getIso() // obf
    { // obf
        return $v_lqlhz->year.$v_lqlhz->month.$v_lqlhz->day.'T'.$v_lqlhz->hour.':'.$v_lqlhz->minute.':'.$v_lqlhz->second.$v_lqlhz->timezone; // obf
    } // obf

    function getXml() // obf
    { // obf
        return '<dateTime.iso8601>'.$v_lqlhz->getIso().'</dateTime.iso8601>'; // obf
    } // obf

    function getTimestamp() // obf
    { // obf
        return mktime($v_lqlhz->hour, $v_lqlhz->minute, $v_lqlhz->second, $v_lqlhz->month, $v_lqlhz->day, $v_lqlhz->year); // obf
    } // obf
} // obf