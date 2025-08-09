

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//                                                             // // obf
// getid3.lib.php - part of getID3()                           // // obf
//  see readme.txt for more details                            // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if(!defined('GETID3_LIBXML_OPTIONS') && defined('LIBXML_VERSION')) { // obf
	if(LIBXML_VERSION >= 20621) { // obf
		define('GETID3_LIBXML_OPTIONS', LIBXML_NOENT | LIBXML_NONET | LIBXML_NOWARNING | LIBXML_COMPACT); // obf
	} else { // obf
		define('GETID3_LIBXML_OPTIONS', LIBXML_NOENT | LIBXML_NONET | LIBXML_NOWARNING); // obf
	} // obf
} // obf

class getid3_lib // obf
{ // obf
	/** // obf
	 * @param string      $v_jrerr // obf
	 * @param bool        $v_roxwa // obf
	 * @param bool        $v_qtnkc // obf
	 * @param string|bool $v_ehrix // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function PrintHexBytes($v_jrerr, $v_roxwa=true, $v_qtnkc=true, $v_ehrix='UTF-8') { // obf
		$v_icmhu = ''; // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy++) { // obf
			if ($v_roxwa) { // obf
				$v_icmhu .= str_pad(dechex(ord($v_jrerr[$v_mlhdy])), 2, '0', STR_PAD_LEFT); // obf
			} else { // obf
				$v_icmhu .= ' '.(preg_match("#[\x20-\x7E]#", $v_jrerr[$v_mlhdy]) ? $v_jrerr[$v_mlhdy] : '¤'); // obf
			} // obf
			if ($v_qtnkc) { // obf
				$v_icmhu .= ' '; // obf
			} // obf
		} // obf
		if (!empty($v_ehrix)) { // obf
			if ($v_ehrix === true) { // obf
				$v_ehrix = 'UTF-8'; // prior to getID3 v1.9.0 the function's 4th parameter was boolean // obf
			} // obf
			$v_icmhu = htmlentities($v_icmhu, ENT_QUOTES, $v_ehrix); // obf
		} // obf
		return $v_icmhu; // obf
	} // obf

	/** // obf
	 * Truncates a floating-point number at the decimal point. // obf
	 * // obf
	 * @param float $v_mhbep // obf
	 * // obf
	 * @return float|int returns int (if possible, otherwise float) // obf
	 */ // obf
	public static function trunc($v_mhbep) { // obf
		if ($v_mhbep >= 1) { // obf
			$v_jozks = floor($v_mhbep); // obf
		} elseif ($v_mhbep <= -1) { // obf
			$v_jozks = ceil($v_mhbep); // obf
		} else { // obf
			$v_jozks = 0; // obf
		} // obf
		if (self::intValueSupported($v_jozks)) { // obf
			$v_jozks = (int) $v_jozks; // obf
		} // obf
		return $v_jozks; // obf
	} // obf

	/** // obf
	 * @param int|null $v_xdtqp // obf
	 * @param int      $v_qphyw // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function safe_inc(&$v_xdtqp, $v_qphyw=1) { // obf
		if (isset($v_xdtqp)) { // obf
			$v_xdtqp += $v_qphyw; // obf
		} else { // obf
			$v_xdtqp = $v_qphyw; // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param int|float $v_qanhh // obf
	 * // obf
	 * @return int|float // obf
	 */ // obf
	public static function CastAsInt($v_qanhh) { // obf
		// convert to float if not already // obf
		$v_qanhh = (float) $v_qanhh; // obf

		// convert a float to type int, only if possible // obf
		if (self::trunc($v_qanhh) == $v_qanhh) { // obf
			// it's not floating point // obf
			if (self::intValueSupported($v_qanhh)) { // obf
				// it's within int range // obf
				$v_qanhh = (int) $v_qanhh; // obf
			} // obf
		} // obf
		return $v_qanhh; // obf
	} // obf

	/** // obf
	 * @param int $v_roiml // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function intValueSupported($v_roiml) { // obf
		// check if integers are 64-bit // obf
		static $v_qnxjo = null; // obf
		if ($v_qnxjo === null) { // 10x faster than is_null() // obf
			$v_qnxjo = is_int(pow(2, 31)); // 32-bit int are limited to (2^31)-1 // obf
			if (!$v_qnxjo && !defined('PHP_INT_MIN')) { // obf
				define('PHP_INT_MIN', ~PHP_INT_MAX); // obf
			} // obf
		} // obf
		// if integers are 64-bit - no other check required // obf
		if ($v_qnxjo || (($v_roiml <= PHP_INT_MAX) && ($v_roiml >= PHP_INT_MIN))) { // obf
			return true; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Perform a division, guarding against division by zero // obf
	 * // obf
	 * @param float|int $v_jbgih // obf
	 * @param float|int $v_qkzcq // obf
	 * @param float|int $v_jocvy // obf
	 * @return float|int // obf
	 */ // obf
	public static function SafeDiv($v_jbgih, $v_qkzcq, $v_jocvy = 0) { // obf
		return $v_qkzcq ? $v_jbgih / $v_qkzcq : $v_jocvy; // obf
	} // obf

	/** // obf
	 * @param string $v_zirop // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	public static function DecimalizeFraction($v_zirop) { // obf
		list($v_jbgih, $v_qkzcq) = explode('/', $v_zirop); // obf
		return (int) $v_jbgih / ($v_qkzcq ? $v_qkzcq : 1); // obf
	} // obf

	/** // obf
	 * @param string $v_zuomz // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	public static function DecimalBinary2Float($v_zuomz) { // obf
		$v_jbgih   = self::Bin2Dec($v_zuomz); // obf
		$v_qkzcq = self::Bin2Dec('1'.str_repeat('0', strlen($v_zuomz))); // obf
		return ($v_jbgih / $v_qkzcq); // obf
	} // obf

	/** // obf
	 * @link http://www.scri.fsu.edu/~jac/MAD3401/Backgrnd/binary.html // obf
	 * // obf
	 * @param string $v_dbfqz // obf
	 * @param int    $v_rduwl // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function NormalizeBinaryPoint($v_dbfqz, $v_rduwl=52) { // obf
		if (strpos($v_dbfqz, '.') === false) { // obf
			$v_dbfqz = '0.'.$v_dbfqz; // obf
		} elseif ($v_dbfqz[0] == '.') { // obf
			$v_dbfqz = '0'.$v_dbfqz; // obf
		} // obf
		$v_chwha = 0; // obf
		while (($v_dbfqz[0] != '1') || (substr($v_dbfqz, 1, 1) != '.')) { // obf
			if (substr($v_dbfqz, 1, 1) == '.') { // obf
				$v_chwha--; // obf
				$v_dbfqz = substr($v_dbfqz, 2, 1).'.'.substr($v_dbfqz, 3); // obf
			} else { // obf
				$v_nlmss = strpos($v_dbfqz, '.'); // obf
				$v_chwha += ($v_nlmss - 1); // obf
				$v_dbfqz = str_replace('.', '', $v_dbfqz); // obf
				$v_dbfqz = $v_dbfqz[0].'.'.substr($v_dbfqz, 1); // obf
			} // obf
		} // obf
		$v_dbfqz = str_pad(substr($v_dbfqz, 0, $v_rduwl + 2), $v_rduwl + 2, '0', STR_PAD_RIGHT); // obf
		return array('normalized'=>$v_dbfqz, 'exponent'=>(int) $v_chwha); // obf
	} // obf

	/** // obf
	 * @link http://www.scri.fsu.edu/~jac/MAD3401/Backgrnd/binary.html // obf
	 * // obf
	 * @param float $v_xclvm // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function Float2BinaryDecimal($v_xclvm) { // obf
		$v_rduwl = 128; // to how many bits of precision should the calculations be taken? // obf
		$v_xhcra   = self::trunc($v_xclvm); // obf
		$v_ghzsu = abs($v_xclvm - $v_xhcra); // obf
		$v_rtqln = ''; // obf
		while (($v_ghzsu != 0) && (strlen($v_rtqln) < $v_rduwl)) { // obf
			$v_ghzsu *= 2; // obf
			$v_rtqln .= (string) self::trunc($v_ghzsu); // obf
			$v_ghzsu -= self::trunc($v_ghzsu); // obf
		} // obf
		$v_dbfqz = decbin($v_xhcra).'.'.$v_rtqln; // obf
		return $v_dbfqz; // obf
	} // obf

	/** // obf
	 * @link http://www.scri.fsu.edu/~jac/MAD3401/Backgrnd/ieee-expl.html // obf
	 * // obf
	 * @param float $v_xclvm // obf
	 * @param int $v_kwgvr // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function Float2String($v_xclvm, $v_kwgvr) { // obf
		$v_oxfuf = 0; // obf
		$v_klttl = 0; // obf
		switch ($v_kwgvr) { // obf
			case 32: // obf
				$v_oxfuf = 8; // obf
				$v_klttl = 23; // obf
				break; // obf

			case 64: // obf
				$v_oxfuf = 11; // obf
				$v_klttl = 52; // obf
				break; // obf

			default: // obf
				return false; // obf
		} // obf
		if ($v_xclvm >= 0) { // obf
			$v_xpojw = '0'; // obf
		} else { // obf
			$v_xpojw = '1'; // obf
		} // obf
		$v_uawlm  = self::NormalizeBinaryPoint(self::Float2BinaryDecimal($v_xclvm), $v_klttl); // obf
		$v_vwaia    = pow(2, $v_oxfuf - 1) - 1 + $v_uawlm['exponent']; // (127 or 1023) +/- exponent // obf
		$v_xsphb = str_pad(decbin($v_vwaia), $v_oxfuf, '0', STR_PAD_LEFT); // obf
		$v_kfwox = str_pad(substr($v_uawlm['normalized'], 2), $v_klttl, '0', STR_PAD_RIGHT); // obf

		return self::BigEndian2String(self::Bin2Dec($v_xpojw.$v_xsphb.$v_kfwox), $v_kwgvr % 8, false); // obf
	} // obf

	/** // obf
	 * @param string $v_prwgh // obf
	 * // obf
	 * @return float|false // obf
	 */ // obf
	public static function LittleEndian2Float($v_prwgh) { // obf
		return self::BigEndian2Float(strrev($v_prwgh)); // obf
	} // obf

	/** // obf
	 * ANSI/IEEE Standard 754-1985, Standard for Binary Floating Point Arithmetic // obf
	 * // obf
	 * @link https://web.archive.org/web/20120325162206/http://www.psc.edu/general/software/packages/ieee/ieee.php // obf
	 * @link http://www.scri.fsu.edu/~jac/MAD3401/Backgrnd/ieee.html // obf
	 * // obf
	 * @param string $v_prwgh // obf
	 * // obf
	 * @return float|false // obf
	 */ // obf
	public static function BigEndian2Float($v_prwgh) { // obf
		$v_vpamn = self::BigEndian2Bin($v_prwgh); // obf
		if (!$v_vpamn) { // obf
			return 0; // obf
		} // obf
		$v_xpojw = $v_vpamn[0]; // obf
		$v_xclvm = 0; // obf
		$v_oxfuf = 0; // obf
		$v_klttl = 0; // obf

		switch (strlen($v_prwgh) * 8) { // obf
			case 32: // obf
				$v_oxfuf = 8; // obf
				$v_klttl = 23; // obf
				break; // obf

			case 64: // obf
				$v_oxfuf = 11; // obf
				$v_klttl = 52; // obf
				break; // obf

			case 80: // obf
				// 80-bit Apple SANE format // obf
				// http://www.mactech.com/articles/mactech/Vol.06/06.01/SANENormalized/ // obf
				$v_byhtn = substr($v_vpamn, 1, 15); // obf
				$v_ytpqc = intval($v_vpamn[16]); // obf
				$v_xjeoe = substr($v_vpamn, 17, 63); // obf
				$v_chwha = pow(2, self::Bin2Dec($v_byhtn) - 16383); // obf
				$v_zirop = $v_ytpqc + self::DecimalBinary2Float($v_xjeoe); // obf
				$v_xclvm = $v_chwha * $v_zirop; // obf
				if ($v_xpojw == '1') { // obf
					$v_xclvm *= -1; // obf
				} // obf
				return $v_xclvm; // obf

			default: // obf
				return false; // obf
		} // obf
		$v_byhtn = substr($v_vpamn, 1, $v_oxfuf); // obf
		$v_xjeoe = substr($v_vpamn, $v_oxfuf + 1, $v_klttl); // obf
		$v_chwha = self::Bin2Dec($v_byhtn); // obf
		$v_zirop = self::Bin2Dec($v_xjeoe); // obf

		if (($v_chwha == (pow(2, $v_oxfuf) - 1)) && ($v_zirop != 0)) { // obf
			// Not a Number // obf
			$v_xclvm = NAN; // obf
		} elseif (($v_chwha == (pow(2, $v_oxfuf) - 1)) && ($v_zirop == 0)) { // obf
			if ($v_xpojw == '1') { // obf
				$v_xclvm = -INF; // obf
			} else { // obf
				$v_xclvm = INF; // obf
			} // obf
		} elseif (($v_chwha == 0) && ($v_zirop == 0)) { // obf
			if ($v_xpojw == '1') { // obf
				$v_xclvm = -0.0; // obf
			} else { // obf
				$v_xclvm = 0.0; // obf
			} // obf
		} elseif (($v_chwha == 0) && ($v_zirop != 0)) { // obf
			// These are 'unnormalized' values // obf
			$v_xclvm = pow(2, (-1 * (pow(2, $v_oxfuf - 1) - 2))) * self::DecimalBinary2Float($v_xjeoe); // obf
			if ($v_xpojw == '1') { // obf
				$v_xclvm *= -1; // obf
			} // obf
		} elseif ($v_chwha != 0) { // obf
			$v_xclvm = pow(2, ($v_chwha - (pow(2, $v_oxfuf - 1) - 1))) * (1 + self::DecimalBinary2Float($v_xjeoe)); // obf
			if ($v_xpojw == '1') { // obf
				$v_xclvm *= -1; // obf
			} // obf
		} // obf
		return (float) $v_xclvm; // obf
	} // obf

	/** // obf
	 * @param string $v_prwgh // obf
	 * @param bool   $v_wiksm // obf
	 * @param bool   $v_soprc // obf
	 * // obf
	 * @return int|float|false // obf
	 * @throws Exception // obf
	 */ // obf
	public static function BigEndian2Int($v_prwgh, $v_wiksm=false, $v_soprc=false) { // obf
		$v_nwlsd = 0; // obf
		$v_stnki = strlen($v_prwgh); // obf
		if ($v_stnki == 0) { // obf
			return false; // obf
		} // obf
		for ($v_mlhdy = 0; $v_mlhdy < $v_stnki; $v_mlhdy++) { // obf
			if ($v_wiksm) { // disregard MSB, effectively 7-bit bytes // obf
				//$v_nwlsd = $v_nwlsd | (ord($v_prwgh{$v_mlhdy}) & 0x7F) << (($v_stnki - 1 - $v_mlhdy) * 7); // faster, but runs into problems past 2^31 on 32-bit systems // obf
				$v_nwlsd += (ord($v_prwgh[$v_mlhdy]) & 0x7F) * pow(2, ($v_stnki - 1 - $v_mlhdy) * 7); // obf
			} else { // obf
				$v_nwlsd += ord($v_prwgh[$v_mlhdy]) * pow(256, ($v_stnki - 1 - $v_mlhdy)); // obf
			} // obf
		} // obf
		if ($v_soprc && !$v_wiksm) { // obf
			// synchsafe ints are not allowed to be signed // obf
			if ($v_stnki <= PHP_INT_SIZE) { // obf
				$v_nhbhn = 0x80 << (8 * ($v_stnki - 1)); // obf
				if ($v_nwlsd & $v_nhbhn) { // obf
					$v_nwlsd = 0 - ($v_nwlsd & ($v_nhbhn - 1)); // obf
				} // obf
			} else { // obf
				throw new Exception('ERROR: Cannot have signed integers larger than '.(8 * PHP_INT_SIZE).'-bits ('.strlen($v_prwgh).') in self::BigEndian2Int()'); // obf
			} // obf
		} // obf
		return self::CastAsInt($v_nwlsd); // obf
	} // obf

	/** // obf
	 * @param string $v_prwgh // obf
	 * @param bool   $v_soprc // obf
	 * // obf
	 * @return int|float|false // obf
	 */ // obf
	public static function LittleEndian2Int($v_prwgh, $v_soprc=false) { // obf
		return self::BigEndian2Int(strrev($v_prwgh), false, $v_soprc); // obf
	} // obf

	/** // obf
	 * @param string $v_prwgh // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function LittleEndian2Bin($v_prwgh) { // obf
		return self::BigEndian2Bin(strrev($v_prwgh)); // obf
	} // obf

	/** // obf
	 * @param string $v_prwgh // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function BigEndian2Bin($v_prwgh) { // obf
		$v_tipwj = ''; // obf
		$v_stnki = strlen($v_prwgh); // obf
		for ($v_mlhdy = 0; $v_mlhdy < $v_stnki; $v_mlhdy++) { // obf
			$v_tipwj .= str_pad(decbin(ord($v_prwgh[$v_mlhdy])), 8, '0', STR_PAD_LEFT); // obf
		} // obf
		return $v_tipwj; // obf
	} // obf

	/** // obf
	 * @param int  $v_nftzf // obf
	 * @param int  $v_bnjis // obf
	 * @param bool $v_wiksm // obf
	 * @param bool $v_soprc // obf
	 * // obf
	 * @return string // obf
	 * @throws Exception // obf
	 */ // obf
	public static function BigEndian2String($v_nftzf, $v_bnjis=1, $v_wiksm=false, $v_soprc=false) { // obf
		if ($v_nftzf < 0) { // obf
			throw new Exception('ERROR: self::BigEndian2String() does not support negative numbers'); // obf
		} // obf
		$v_ghufd = (($v_wiksm || $v_soprc) ? 0x7F : 0xFF); // obf
		$v_izpse = ''; // obf
		if ($v_soprc) { // obf
			if ($v_bnjis > PHP_INT_SIZE) { // obf
				throw new Exception('ERROR: Cannot have signed integers larger than '.(8 * PHP_INT_SIZE).'-bits in self::BigEndian2String()'); // obf
			} // obf
			$v_nftzf = $v_nftzf & (0x80 << (8 * ($v_bnjis - 1))); // obf
		} // obf
		while ($v_nftzf != 0) { // obf
			$v_qnohg = ($v_nftzf / ($v_ghufd + 1)); // obf
			$v_izpse = chr(ceil(($v_qnohg - floor($v_qnohg)) * $v_ghufd)).$v_izpse; // obf
			$v_nftzf = floor($v_qnohg); // obf
		} // obf
		return str_pad($v_izpse, $v_bnjis, "\x00", STR_PAD_LEFT); // obf
	} // obf

	/** // obf
	 * @param int $v_nftzf // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function Dec2Bin($v_nftzf) { // obf
		if (!is_numeric($v_nftzf)) { // obf
			// https://github.com/JamesHeinrich/getID3/issues/299 // obf
			trigger_error('TypeError: Dec2Bin(): Argument #1 ($v_nftzf) must be numeric, '.gettype($v_nftzf).' given', E_USER_WARNING); // obf
			return ''; // obf
		} // obf
		$v_thctj = array(); // obf
		while ($v_nftzf >= 256) { // obf
			$v_thctj[] = (int) (($v_nftzf / 256) - (floor($v_nftzf / 256))) * 256; // obf
			$v_nftzf = floor($v_nftzf / 256); // obf
		} // obf
		$v_thctj[] = (int) $v_nftzf; // obf
		$v_lyylj = ''; // obf
		foreach ($v_thctj as $v_mlhdy => $v_chahb) { // obf
			$v_lyylj = (($v_mlhdy == count($v_thctj) - 1) ? decbin($v_chahb) : str_pad(decbin($v_chahb), 8, '0', STR_PAD_LEFT)).$v_lyylj; // obf
		} // obf
		return $v_lyylj; // obf
	} // obf

	/** // obf
	 * @param string $v_lyylj // obf
	 * @param bool   $v_soprc // obf
	 * // obf
	 * @return int|float // obf
	 */ // obf
	public static function Bin2Dec($v_lyylj, $v_soprc=false) { // obf
		$v_hobkz = 1; // obf
		if ($v_soprc) { // obf
			if ($v_lyylj[0] == '1') { // obf
				$v_hobkz = -1; // obf
			} // obf
			$v_lyylj = substr($v_lyylj, 1); // obf
		} // obf
		$v_nqfoc = 0; // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_lyylj); $v_mlhdy++) { // obf
			$v_nqfoc += ((int) substr($v_lyylj, strlen($v_lyylj) - $v_mlhdy - 1, 1)) * pow(2, $v_mlhdy); // obf
		} // obf
		return self::CastAsInt($v_nqfoc * $v_hobkz); // obf
	} // obf

	/** // obf
	 * @param string $v_lyylj // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function Bin2String($v_lyylj) { // obf
		// return 'hi' for input of '0110100001101001' // obf
		$v_jrerr = ''; // obf
		$v_glbhl = strrev($v_lyylj); // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_glbhl); $v_mlhdy += 8) { // obf
			$v_jrerr = chr(self::Bin2Dec(strrev(substr($v_glbhl, $v_mlhdy, 8)))).$v_jrerr; // obf
		} // obf
		return $v_jrerr; // obf
	} // obf

	/** // obf
	 * @param int  $v_nftzf // obf
	 * @param int  $v_bnjis // obf
	 * @param bool $v_wiksm // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function LittleEndian2String($v_nftzf, $v_bnjis=1, $v_wiksm=false) { // obf
		$v_izpse = ''; // obf
		while ($v_nftzf > 0) { // obf
			if ($v_wiksm) { // obf
				$v_izpse = $v_izpse.chr($v_nftzf & 127); // obf
				$v_nftzf >>= 7; // obf
			} else { // obf
				$v_izpse = $v_izpse.chr($v_nftzf & 255); // obf
				$v_nftzf >>= 8; // obf
			} // obf
		} // obf
		return str_pad($v_izpse, $v_bnjis, "\x00", STR_PAD_RIGHT); // obf
	} // obf

	/** // obf
	 * @param mixed $v_ehppz // obf
	 * @param mixed $v_wsqhe // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public static function array_merge_clobber($v_ehppz, $v_wsqhe) { // obf
		// written by kcØhireability*com // obf
		// taken from http://www.php.net/manual/en/function.array-merge-recursive.php // obf
		if (!is_array($v_ehppz) || !is_array($v_wsqhe)) { // obf
			return false; // obf
		} // obf
		$v_dstmm = $v_ehppz; // obf
		foreach ($v_wsqhe as $v_yziqv => $v_ovdrf) { // obf
			if (is_array($v_ovdrf) && isset($v_dstmm[$v_yziqv]) && is_array($v_dstmm[$v_yziqv])) { // obf
				$v_dstmm[$v_yziqv] = self::array_merge_clobber($v_dstmm[$v_yziqv], $v_ovdrf); // obf
			} else { // obf
				$v_dstmm[$v_yziqv] = $v_ovdrf; // obf
			} // obf
		} // obf
		return $v_dstmm; // obf
	} // obf

	/** // obf
	 * @param mixed $v_ehppz // obf
	 * @param mixed $v_wsqhe // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public static function array_merge_noclobber($v_ehppz, $v_wsqhe) { // obf
		if (!is_array($v_ehppz) || !is_array($v_wsqhe)) { // obf
			return false; // obf
		} // obf
		$v_dstmm = $v_ehppz; // obf
		foreach ($v_wsqhe as $v_yziqv => $v_ovdrf) { // obf
			if (is_array($v_ovdrf) && isset($v_dstmm[$v_yziqv]) && is_array($v_dstmm[$v_yziqv])) { // obf
				$v_dstmm[$v_yziqv] = self::array_merge_noclobber($v_dstmm[$v_yziqv], $v_ovdrf); // obf
			} elseif (!isset($v_dstmm[$v_yziqv])) { // obf
				$v_dstmm[$v_yziqv] = $v_ovdrf; // obf
			} // obf
		} // obf
		return $v_dstmm; // obf
	} // obf

	/** // obf
	 * @param mixed $v_ehppz // obf
	 * @param mixed $v_wsqhe // obf
	 * // obf
	 * @return array|false|null // obf
	 */ // obf
	public static function flipped_array_merge_noclobber($v_ehppz, $v_wsqhe) { // obf
		if (!is_array($v_ehppz) || !is_array($v_wsqhe)) { // obf
			return false; // obf
		} // obf
		# naturally, this only works non-recursively // obf
		$v_dstmm = array_flip($v_ehppz); // obf
		foreach (array_flip($v_wsqhe) as $v_yziqv => $v_ovdrf) { // obf
			if (!isset($v_dstmm[$v_yziqv])) { // obf
				$v_dstmm[$v_yziqv] = count($v_dstmm); // obf
			} // obf
		} // obf
		return array_flip($v_dstmm); // obf
	} // obf

	/** // obf
	 * @param array $v_wieoo // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function ksort_recursive(&$v_wieoo) { // obf
		ksort($v_wieoo); // obf
		foreach ($v_wieoo as $v_yziqv => $v_wrjrm) { // obf
			if (is_array($v_wrjrm)) { // obf
				self::ksort_recursive($v_wieoo[$v_yziqv]); // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_aretw // obf
	 * @param int    $v_qkwzw // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function fileextension($v_aretw, $v_qkwzw=1) { // obf
		if (strstr($v_aretw, '.')) { // obf
			$v_jutzc = strrev($v_aretw); // obf
			$v_iaudg = 0; // obf
			for ($v_mlhdy = 0; $v_mlhdy < $v_qkwzw; $v_mlhdy++) { // obf
				$v_iaudg = strpos($v_jutzc, '.', $v_iaudg + 1); // obf
				if ($v_iaudg === false) { // obf
					return ''; // obf
				} // obf
			} // obf
			return strrev(substr($v_jutzc, 0, $v_iaudg)); // obf
		} // obf
		return ''; // obf
	} // obf

	/** // obf
	 * @param int $v_relzt // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function PlaytimeString($v_relzt) { // obf
		$v_yotnr = (($v_relzt < 0) ? '-' : ''); // obf
		$v_relzt = round(abs($v_relzt)); // obf
		$v_wtovp = (int) floor( $v_relzt                            / 3600); // obf
		$v_xjwll = (int) floor(($v_relzt - (3600 * $v_wtovp)            ) /   60); // obf
		$v_fnrku = (int) round( $v_relzt - (3600 * $v_wtovp) - (60 * $v_xjwll)        ); // obf
		return $v_yotnr.($v_wtovp ? $v_wtovp.':' : '').($v_wtovp ? str_pad($v_xjwll, 2, '0', STR_PAD_LEFT) : intval($v_xjwll)).':'.str_pad($v_fnrku, 2, 0, STR_PAD_LEFT); // obf
	} // obf

	/** // obf
	 * @param int $v_xtmax // obf
	 * // obf
	 * @return int|float // obf
	 */ // obf
	public static function DateMac2Unix($v_xtmax) { // obf
		// Macintosh timestamp: seconds since 00:00h January 1, 1904 // obf
		// UNIX timestamp:      seconds since 00:00h January 1, 1970 // obf
		return self::CastAsInt($v_xtmax - 2082844800); // obf
	} // obf

	/** // obf
	 * @param string $v_uhdcb // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	public static function FixedPoint8_8($v_uhdcb) { // obf
		return self::BigEndian2Int(substr($v_uhdcb, 0, 1)) + (float) (self::BigEndian2Int(substr($v_uhdcb, 1, 1)) / pow(2, 8)); // obf
	} // obf

	/** // obf
	 * @param string $v_uhdcb // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	public static function FixedPoint16_16($v_uhdcb) { // obf
		return self::BigEndian2Int(substr($v_uhdcb, 0, 2)) + (float) (self::BigEndian2Int(substr($v_uhdcb, 2, 2)) / pow(2, 16)); // obf
	} // obf

	/** // obf
	 * @param string $v_uhdcb // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	public static function FixedPoint2_30($v_uhdcb) { // obf
		$v_ezdnt = self::BigEndian2Bin($v_uhdcb); // obf
		return self::Bin2Dec(substr($v_ezdnt, 0, 2)) + (float) (self::Bin2Dec(substr($v_ezdnt, 2, 30)) / pow(2, 30)); // obf
	} // obf


	/** // obf
	 * @param string $v_fecxa // obf
	 * @param string $v_opmxt // obf
	 * @param mixed $v_paezs // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function CreateDeepArray($v_fecxa, $v_opmxt, $v_paezs) { // obf
		// assigns $v_paezs to a nested array path: // obf
		//   $v_jmdqd = self::CreateDeepArray('/path/to/my', '/', 'file.txt') // obf
		// is the same as: // obf
		//   $v_jmdqd = array('path'=>array('to'=>'array('my'=>array('file.txt')))); // obf
		// or // obf
		//   $v_jmdqd['path']['to']['my'] = 'file.txt'; // obf
		$v_fecxa = ltrim($v_fecxa, $v_opmxt); // obf
		$v_yoqxu = array(); // obf
		if (($v_kvyvw = strpos($v_fecxa, $v_opmxt)) !== false) { // obf
			$v_yoqxu[substr($v_fecxa, 0, $v_kvyvw)] = self::CreateDeepArray(substr($v_fecxa, $v_kvyvw + 1), $v_opmxt, $v_paezs); // obf
		} else { // obf
			$v_yoqxu[$v_fecxa] = $v_paezs; // obf
		} // obf
		return $v_yoqxu; // obf
	} // obf

	/** // obf
	 * @param array $v_vuqws // obf
	 * @param bool  $v_qanuo // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function array_max($v_vuqws, $v_qanuo=false) { // obf
		$v_foljk = false; // obf
		$v_csvgw   = false; // obf
		foreach ($v_vuqws as $v_yziqv => $v_wrjrm) { // obf
			if (!is_array($v_wrjrm)) { // obf
				if (($v_foljk === false) || ($v_wrjrm > $v_foljk)) { // obf
					$v_foljk = $v_wrjrm; // obf
					$v_csvgw = $v_yziqv; // obf
				} // obf
			} // obf
		} // obf
		return ($v_qanuo ? $v_csvgw : $v_foljk); // obf
	} // obf

	/** // obf
	 * @param array $v_vuqws // obf
	 * @param bool  $v_qanuo // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function array_min($v_vuqws, $v_qanuo=false) { // obf
		$v_pvbxr = false; // obf
		$v_xpsmu   = false; // obf
		foreach ($v_vuqws as $v_yziqv => $v_wrjrm) { // obf
			if (!is_array($v_wrjrm)) { // obf
				if (($v_pvbxr === false) || ($v_wrjrm < $v_pvbxr)) { // obf
					$v_pvbxr = $v_wrjrm; // obf
					$v_xpsmu = $v_yziqv; // obf
				} // obf
			} // obf
		} // obf
		return ($v_qanuo ? $v_xpsmu : $v_pvbxr); // obf
	} // obf

	/** // obf
	 * @param string $v_znrkr // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public static function XML2array($v_znrkr) { // obf
		if (function_exists('simplexml_load_string') && function_exists('libxml_disable_entity_loader')) { // obf
			// http://websec.io/2012/08/27/Preventing-XEE-in-PHP.html // obf
			// https://core.trac.wordpress.org/changeset/29378 // obf
			// This function has been deprecated in PHP 8.0 because in libxml 2.9.0, external entity loading is // obf
			// disabled by default, but is still needed when LIBXML_NOENT is used. // obf
			$v_qmbqh = @libxml_disable_entity_loader(true); // obf
			$v_efsoa = simplexml_load_string($v_znrkr, 'SimpleXMLElement', GETID3_LIBXML_OPTIONS); // obf
			$v_dfssz = self::SimpleXMLelement2array($v_efsoa); // obf
			@libxml_disable_entity_loader($v_qmbqh); // obf
			return $v_dfssz; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	* @param SimpleXMLElement|array|mixed $v_efsoa // obf
	* // obf
	* @return mixed // obf
	*/ // obf
	public static function SimpleXMLelement2array($v_efsoa) { // obf
		if (!is_object($v_efsoa) && !is_array($v_efsoa)) { // obf
			return $v_efsoa; // obf
		} // obf
		$v_aturf = $v_efsoa instanceof SimpleXMLElement ? get_object_vars($v_efsoa) : $v_efsoa; // obf
		foreach ($v_aturf as $v_yziqv => $v_wrjrm) { // obf
			$v_aturf[$v_yziqv] = self::SimpleXMLelement2array($v_wrjrm); // obf
		} // obf
		return $v_aturf; // obf
	} // obf

	/** // obf
	 * Returns checksum for a file from starting position to absolute end position. // obf
	 * // obf
	 * @param string $v_oxviq // obf
	 * @param int    $v_iaudg // obf
	 * @param int    $v_zosqr // obf
	 * @param string $v_lrxul // obf
	 * // obf
	 * @return string|false // obf
	 * @throws getid3_exception // obf
	 */ // obf
	public static function hash_data($v_oxviq, $v_iaudg, $v_zosqr, $v_lrxul) { // obf
		if (!self::intValueSupported($v_zosqr)) { // obf
			return false; // obf
		} // obf
		if (!in_array($v_lrxul, array('md5', 'sha1'))) { // obf
			throw new getid3_exception('Invalid algorithm ('.$v_lrxul.') in self::hash_data()'); // obf
		} // obf

		$v_gsepn = $v_zosqr - $v_iaudg; // obf

		$v_sdphd = fopen($v_oxviq, 'rb'); // obf
		fseek($v_sdphd, $v_iaudg); // obf
		$v_qxfnf = hash_init($v_lrxul); // obf
		while ($v_gsepn > 0) { // obf
			$v_hxmpm = fread($v_sdphd, min($v_gsepn, getID3::FREAD_BUFFER_SIZE)); // obf
			hash_update($v_qxfnf, $v_hxmpm); // obf
			$v_gsepn -= getID3::FREAD_BUFFER_SIZE; // obf
		} // obf
		$v_wxdue = hash_final($v_qxfnf); // obf
		fclose($v_sdphd); // obf

		return $v_wxdue; // obf
	} // obf

	/** // obf
	 * @param string $v_nrsok // obf
	 * @param string $v_eqiuz // obf
	 * @param int    $v_iaudg // obf
	 * @param int    $v_hcxug // obf
	 * // obf
	 * @return bool // obf
	 * @throws Exception // obf
	 * // obf
	 * @deprecated Unused, may be removed in future versions of getID3 // obf
	 */ // obf
	public static function CopyFileParts($v_nrsok, $v_eqiuz, $v_iaudg, $v_hcxug) { // obf
		if (!self::intValueSupported($v_iaudg + $v_hcxug)) { // obf
			throw new Exception('cannot copy file portion, it extends beyond the '.round(PHP_INT_MAX / 1073741824).'GB limit'); // obf
		} // obf
		if (is_readable($v_nrsok) && is_file($v_nrsok) && ($v_fraag = fopen($v_nrsok, 'rb'))) { // obf
			if (($v_ddjpo = fopen($v_eqiuz, 'wb'))) { // obf
				if (fseek($v_fraag, $v_iaudg) == 0) { // obf
					$v_rmqxo = $v_hcxug; // obf
					while (($v_rmqxo > 0) && ($v_hxmpm = fread($v_fraag, min($v_rmqxo, getID3::FREAD_BUFFER_SIZE)))) { // obf
						$v_pleab = fwrite($v_ddjpo, $v_hxmpm, $v_rmqxo); // obf
						$v_rmqxo -= $v_pleab; // obf
					} // obf
					fclose($v_ddjpo); // obf
					return true; // obf
				} else { // obf
					fclose($v_fraag); // obf
					throw new Exception('failed to seek to offset '.$v_iaudg.' in '.$v_nrsok); // obf
				} // obf
			} else { // obf
				throw new Exception('failed to create file for writing '.$v_eqiuz); // obf
			} // obf
		} else { // obf
			throw new Exception('failed to open file for reading '.$v_nrsok); // obf
		} // obf
	} // obf

	/** // obf
	 * @param int $v_ngvjn // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_int_utf8($v_ngvjn) { // obf
		if ($v_ngvjn < 128) { // obf
			// 0bbbbbbb // obf
			$v_uycvm = chr($v_ngvjn); // obf
		} elseif ($v_ngvjn < 2048) { // obf
			// 110bbbbb 10bbbbbb // obf
			$v_uycvm  = chr(($v_ngvjn >>   6) | 0xC0); // obf
			$v_uycvm .= chr(($v_ngvjn & 0x3F) | 0x80); // obf
		} elseif ($v_ngvjn < 65536) { // obf
			// 1110bbbb 10bbbbbb 10bbbbbb // obf
			$v_uycvm  = chr(($v_ngvjn >>  12) | 0xE0); // obf
			$v_uycvm .= chr(($v_ngvjn >>   6) | 0xC0); // obf
			$v_uycvm .= chr(($v_ngvjn & 0x3F) | 0x80); // obf
		} else { // obf
			// 11110bbb 10bbbbbb 10bbbbbb 10bbbbbb // obf
			$v_uycvm  = chr(($v_ngvjn >>  18) | 0xF0); // obf
			$v_uycvm .= chr(($v_ngvjn >>  12) | 0xC0); // obf
			$v_uycvm .= chr(($v_ngvjn >>   6) | 0xC0); // obf
			$v_uycvm .= chr(($v_ngvjn & 0x3F) | 0x80); // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * ISO-8859-1 => UTF-8 // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * @param bool   $v_lrhar // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_iso88591_utf8($v_jrerr, $v_lrhar=false) { // obf
		$v_uycvm = ''; // obf
		if ($v_lrhar) { // obf
			$v_uycvm .= "\xEF\xBB\xBF"; // obf
		} // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy++) { // obf
			$v_ngvjn = ord($v_jrerr[$v_mlhdy]); // obf
			$v_uycvm .= self::iconv_fallback_int_utf8($v_ngvjn); // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * ISO-8859-1 => UTF-16BE // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * @param bool   $v_lrhar // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_iso88591_utf16be($v_jrerr, $v_lrhar=false) { // obf
		$v_uycvm = ''; // obf
		if ($v_lrhar) { // obf
			$v_uycvm .= "\xFE\xFF"; // obf
		} // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy++) { // obf
			$v_uycvm .= "\x00".$v_jrerr[$v_mlhdy]; // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * ISO-8859-1 => UTF-16LE // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * @param bool   $v_lrhar // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_iso88591_utf16le($v_jrerr, $v_lrhar=false) { // obf
		$v_uycvm = ''; // obf
		if ($v_lrhar) { // obf
			$v_uycvm .= "\xFF\xFE"; // obf
		} // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy++) { // obf
			$v_uycvm .= $v_jrerr[$v_mlhdy]."\x00"; // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * ISO-8859-1 => UTF-16LE (BOM) // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_iso88591_utf16($v_jrerr) { // obf
		return self::iconv_fallback_iso88591_utf16le($v_jrerr, true); // obf
	} // obf

	/** // obf
	 * UTF-8 => ISO-8859-1 // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf8_iso88591($v_jrerr) { // obf
		$v_uycvm = ''; // obf
		$v_iaudg = 0; // obf
		$v_fdpyu = strlen($v_jrerr); // obf
		while ($v_iaudg < $v_fdpyu) { // obf
			if ((ord($v_jrerr[$v_iaudg]) | 0x07) == 0xF7) { // obf
				// 11110bbb 10bbbbbb 10bbbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x07) << 18) & // obf
						   ((ord($v_jrerr[($v_iaudg + 1)]) & 0x3F) << 12) & // obf
						   ((ord($v_jrerr[($v_iaudg + 2)]) & 0x3F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 3)]) & 0x3F); // obf
				$v_iaudg += 4; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x0F) == 0xEF) { // obf
				// 1110bbbb 10bbbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x0F) << 12) & // obf
						   ((ord($v_jrerr[($v_iaudg + 1)]) & 0x3F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 2)]) & 0x3F); // obf
				$v_iaudg += 3; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x1F) == 0xDF) { // obf
				// 110bbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x1F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 1)]) & 0x3F); // obf
				$v_iaudg += 2; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x7F) == 0x7F) { // obf
				// 0bbbbbbb // obf
				$v_ngvjn = ord($v_jrerr[$v_iaudg]); // obf
				$v_iaudg += 1; // obf
			} else { // obf
				// error? throw some kind of warning here? // obf
				$v_ngvjn = false; // obf
				$v_iaudg += 1; // obf
			} // obf
			if ($v_ngvjn !== false) { // obf
				$v_uycvm .= (($v_ngvjn < 256) ? chr($v_ngvjn) : '?'); // obf
			} // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * UTF-8 => UTF-16BE // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * @param bool   $v_lrhar // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf8_utf16be($v_jrerr, $v_lrhar=false) { // obf
		$v_uycvm = ''; // obf
		if ($v_lrhar) { // obf
			$v_uycvm .= "\xFE\xFF"; // obf
		} // obf
		$v_iaudg = 0; // obf
		$v_fdpyu = strlen($v_jrerr); // obf
		while ($v_iaudg < $v_fdpyu) { // obf
			if ((ord($v_jrerr[$v_iaudg]) | 0x07) == 0xF7) { // obf
				// 11110bbb 10bbbbbb 10bbbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x07) << 18) & // obf
						   ((ord($v_jrerr[($v_iaudg + 1)]) & 0x3F) << 12) & // obf
						   ((ord($v_jrerr[($v_iaudg + 2)]) & 0x3F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 3)]) & 0x3F); // obf
				$v_iaudg += 4; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x0F) == 0xEF) { // obf
				// 1110bbbb 10bbbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x0F) << 12) & // obf
						   ((ord($v_jrerr[($v_iaudg + 1)]) & 0x3F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 2)]) & 0x3F); // obf
				$v_iaudg += 3; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x1F) == 0xDF) { // obf
				// 110bbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x1F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 1)]) & 0x3F); // obf
				$v_iaudg += 2; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x7F) == 0x7F) { // obf
				// 0bbbbbbb // obf
				$v_ngvjn = ord($v_jrerr[$v_iaudg]); // obf
				$v_iaudg += 1; // obf
			} else { // obf
				// error? throw some kind of warning here? // obf
				$v_ngvjn = false; // obf
				$v_iaudg += 1; // obf
			} // obf
			if ($v_ngvjn !== false) { // obf
				$v_uycvm .= (($v_ngvjn < 65536) ? self::BigEndian2String($v_ngvjn, 2) : "\x00".'?'); // obf
			} // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * UTF-8 => UTF-16LE // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * @param bool   $v_lrhar // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf8_utf16le($v_jrerr, $v_lrhar=false) { // obf
		$v_uycvm = ''; // obf
		if ($v_lrhar) { // obf
			$v_uycvm .= "\xFF\xFE"; // obf
		} // obf
		$v_iaudg = 0; // obf
		$v_fdpyu = strlen($v_jrerr); // obf
		while ($v_iaudg < $v_fdpyu) { // obf
			if ((ord($v_jrerr[$v_iaudg]) | 0x07) == 0xF7) { // obf
				// 11110bbb 10bbbbbb 10bbbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x07) << 18) & // obf
						   ((ord($v_jrerr[($v_iaudg + 1)]) & 0x3F) << 12) & // obf
						   ((ord($v_jrerr[($v_iaudg + 2)]) & 0x3F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 3)]) & 0x3F); // obf
				$v_iaudg += 4; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x0F) == 0xEF) { // obf
				// 1110bbbb 10bbbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x0F) << 12) & // obf
						   ((ord($v_jrerr[($v_iaudg + 1)]) & 0x3F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 2)]) & 0x3F); // obf
				$v_iaudg += 3; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x1F) == 0xDF) { // obf
				// 110bbbbb 10bbbbbb // obf
				$v_ngvjn = ((ord($v_jrerr[($v_iaudg + 0)]) & 0x1F) <<  6) & // obf
							(ord($v_jrerr[($v_iaudg + 1)]) & 0x3F); // obf
				$v_iaudg += 2; // obf
			} elseif ((ord($v_jrerr[$v_iaudg]) | 0x7F) == 0x7F) { // obf
				// 0bbbbbbb // obf
				$v_ngvjn = ord($v_jrerr[$v_iaudg]); // obf
				$v_iaudg += 1; // obf
			} else { // obf
				// error? maybe throw some warning here? // obf
				$v_ngvjn = false; // obf
				$v_iaudg += 1; // obf
			} // obf
			if ($v_ngvjn !== false) { // obf
				$v_uycvm .= (($v_ngvjn < 65536) ? self::LittleEndian2String($v_ngvjn, 2) : '?'."\x00"); // obf
			} // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * UTF-8 => UTF-16LE (BOM) // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf8_utf16($v_jrerr) { // obf
		return self::iconv_fallback_utf8_utf16le($v_jrerr, true); // obf
	} // obf

	/** // obf
	 * UTF-16BE => UTF-8 // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf16be_utf8($v_jrerr) { // obf
		if (substr($v_jrerr, 0, 2) == "\xFE\xFF") { // obf
			// strip BOM // obf
			$v_jrerr = substr($v_jrerr, 2); // obf
		} // obf
		$v_uycvm = ''; // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy += 2) { // obf
			$v_ngvjn = self::BigEndian2Int(substr($v_jrerr, $v_mlhdy, 2)); // obf
			$v_uycvm .= self::iconv_fallback_int_utf8($v_ngvjn); // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * UTF-16LE => UTF-8 // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf16le_utf8($v_jrerr) { // obf
		if (substr($v_jrerr, 0, 2) == "\xFF\xFE") { // obf
			// strip BOM // obf
			$v_jrerr = substr($v_jrerr, 2); // obf
		} // obf
		$v_uycvm = ''; // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy += 2) { // obf
			$v_ngvjn = self::LittleEndian2Int(substr($v_jrerr, $v_mlhdy, 2)); // obf
			$v_uycvm .= self::iconv_fallback_int_utf8($v_ngvjn); // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * UTF-16BE => ISO-8859-1 // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf16be_iso88591($v_jrerr) { // obf
		if (substr($v_jrerr, 0, 2) == "\xFE\xFF") { // obf
			// strip BOM // obf
			$v_jrerr = substr($v_jrerr, 2); // obf
		} // obf
		$v_uycvm = ''; // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy += 2) { // obf
			$v_ngvjn = self::BigEndian2Int(substr($v_jrerr, $v_mlhdy, 2)); // obf
			$v_uycvm .= (($v_ngvjn < 256) ? chr($v_ngvjn) : '?'); // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * UTF-16LE => ISO-8859-1 // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf16le_iso88591($v_jrerr) { // obf
		if (substr($v_jrerr, 0, 2) == "\xFF\xFE") { // obf
			// strip BOM // obf
			$v_jrerr = substr($v_jrerr, 2); // obf
		} // obf
		$v_uycvm = ''; // obf
		for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy += 2) { // obf
			$v_ngvjn = self::LittleEndian2Int(substr($v_jrerr, $v_mlhdy, 2)); // obf
			$v_uycvm .= (($v_ngvjn < 256) ? chr($v_ngvjn) : '?'); // obf
		} // obf
		return $v_uycvm; // obf
	} // obf

	/** // obf
	 * UTF-16 (BOM) => ISO-8859-1 // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf16_iso88591($v_jrerr) { // obf
		$v_lrhar = substr($v_jrerr, 0, 2); // obf
		if ($v_lrhar == "\xFE\xFF") { // obf
			return self::iconv_fallback_utf16be_iso88591(substr($v_jrerr, 2)); // obf
		} elseif ($v_lrhar == "\xFF\xFE") { // obf
			return self::iconv_fallback_utf16le_iso88591(substr($v_jrerr, 2)); // obf
		} // obf
		return $v_jrerr; // obf
	} // obf

	/** // obf
	 * UTF-16 (BOM) => UTF-8 // obf
	 * // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function iconv_fallback_utf16_utf8($v_jrerr) { // obf
		$v_lrhar = substr($v_jrerr, 0, 2); // obf
		if ($v_lrhar == "\xFE\xFF") { // obf
			return self::iconv_fallback_utf16be_utf8(substr($v_jrerr, 2)); // obf
		} elseif ($v_lrhar == "\xFF\xFE") { // obf
			return self::iconv_fallback_utf16le_utf8(substr($v_jrerr, 2)); // obf
		} // obf
		return $v_jrerr; // obf
	} // obf

	/** // obf
	 * @param string $v_bmkbg // obf
	 * @param string $v_wqvhf // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 * @throws Exception // obf
	 */ // obf
	public static function iconv_fallback($v_bmkbg, $v_wqvhf, $v_jrerr) { // obf

		if ($v_bmkbg == $v_wqvhf) { // obf
			return $v_jrerr; // obf
		} // obf

		// mb_convert_encoding() available // obf
		if (function_exists('mb_convert_encoding')) { // obf
			if ((strtoupper($v_bmkbg) == 'UTF-16') && (substr($v_jrerr, 0, 2) != "\xFE\xFF") && (substr($v_jrerr, 0, 2) != "\xFF\xFE")) { // obf
				// if BOM missing, mb_convert_encoding will mishandle the conversion, assume UTF-16BE and prepend appropriate BOM // obf
				$v_jrerr = "\xFF\xFE".$v_jrerr; // obf
			} // obf
			if ((strtoupper($v_bmkbg) == 'UTF-16') && (strtoupper($v_wqvhf) == 'UTF-8')) { // obf
				if (($v_jrerr == "\xFF\xFE") || ($v_jrerr == "\xFE\xFF")) { // obf
					// if string consists of only BOM, mb_convert_encoding will return the BOM unmodified // obf
					return ''; // obf
				} // obf
			} // obf
			if ($v_tjmil = @mb_convert_encoding($v_jrerr, $v_wqvhf, $v_bmkbg)) { // obf
				switch ($v_wqvhf) { // obf
					case 'ISO-8859-1': // obf
						$v_tjmil = rtrim($v_tjmil, "\x00"); // obf
						break; // obf
				} // obf
				return $v_tjmil; // obf
			} // obf
			return $v_jrerr; // obf

		// iconv() available // obf
		} elseif (function_exists('iconv')) { // obf
			if ($v_tjmil = @iconv($v_bmkbg, $v_wqvhf.'//TRANSLIT', $v_jrerr)) { // obf
				switch ($v_wqvhf) { // obf
					case 'ISO-8859-1': // obf
						$v_tjmil = rtrim($v_tjmil, "\x00"); // obf
						break; // obf
				} // obf
				return $v_tjmil; // obf
			} // obf

			// iconv() may sometimes fail with "illegal character in input string" error message // obf
			// and return an empty string, but returning the unconverted string is more useful // obf
			return $v_jrerr; // obf
		} // obf


		// neither mb_convert_encoding or iconv() is available // obf
		static $v_vvbaf = array(); // obf
		if (empty($v_vvbaf)) { // obf
			$v_vvbaf['ISO-8859-1']['UTF-8']    = 'iconv_fallback_iso88591_utf8'; // obf
			$v_vvbaf['ISO-8859-1']['UTF-16']   = 'iconv_fallback_iso88591_utf16'; // obf
			$v_vvbaf['ISO-8859-1']['UTF-16BE'] = 'iconv_fallback_iso88591_utf16be'; // obf
			$v_vvbaf['ISO-8859-1']['UTF-16LE'] = 'iconv_fallback_iso88591_utf16le'; // obf
			$v_vvbaf['UTF-8']['ISO-8859-1']    = 'iconv_fallback_utf8_iso88591'; // obf
			$v_vvbaf['UTF-8']['UTF-16']        = 'iconv_fallback_utf8_utf16'; // obf
			$v_vvbaf['UTF-8']['UTF-16BE']      = 'iconv_fallback_utf8_utf16be'; // obf
			$v_vvbaf['UTF-8']['UTF-16LE']      = 'iconv_fallback_utf8_utf16le'; // obf
			$v_vvbaf['UTF-16']['ISO-8859-1']   = 'iconv_fallback_utf16_iso88591'; // obf
			$v_vvbaf['UTF-16']['UTF-8']        = 'iconv_fallback_utf16_utf8'; // obf
			$v_vvbaf['UTF-16LE']['ISO-8859-1'] = 'iconv_fallback_utf16le_iso88591'; // obf
			$v_vvbaf['UTF-16LE']['UTF-8']      = 'iconv_fallback_utf16le_utf8'; // obf
			$v_vvbaf['UTF-16BE']['ISO-8859-1'] = 'iconv_fallback_utf16be_iso88591'; // obf
			$v_vvbaf['UTF-16BE']['UTF-8']      = 'iconv_fallback_utf16be_utf8'; // obf
		} // obf
		if (isset($v_vvbaf[strtoupper($v_bmkbg)][strtoupper($v_wqvhf)])) { // obf
			$v_wnzuq = $v_vvbaf[strtoupper($v_bmkbg)][strtoupper($v_wqvhf)]; // obf
			return self::$v_wnzuq($v_jrerr); // obf
		} // obf
		throw new Exception('PHP does not has mb_convert_encoding() or iconv() support - cannot convert from '.$v_bmkbg.' to '.$v_wqvhf); // obf
	} // obf

	/** // obf
	 * @param mixed  $v_pnvvd // obf
	 * @param string $v_kggai // obf
	 * // obf
	 * @return mixed // obf
	 */ // obf
	public static function recursiveMultiByteCharString2HTML($v_pnvvd, $v_kggai='ISO-8859-1') { // obf
		if (is_string($v_pnvvd)) { // obf
			return self::MultiByteCharString2HTML($v_pnvvd, $v_kggai); // obf
		} elseif (is_array($v_pnvvd)) { // obf
			$v_xwtpy = array(); // obf
			foreach ($v_pnvvd as $v_yziqv => $v_wrjrm) { // obf
				$v_xwtpy[$v_yziqv] = self::recursiveMultiByteCharString2HTML($v_wrjrm, $v_kggai); // obf
			} // obf
			return $v_xwtpy; // obf
		} // obf
		// integer, float, objects, resources, etc // obf
		return $v_pnvvd; // obf
	} // obf

	/** // obf
	 * @param string|int|float $v_jrerr // obf
	 * @param string           $v_kggai // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function MultiByteCharString2HTML($v_jrerr, $v_kggai='ISO-8859-1') { // obf
		$v_jrerr = (string) $v_jrerr; // in case trying to pass a numeric (float, int) string, would otherwise return an empty string // obf
		$v_gsdei = ''; // obf

		switch (strtolower($v_kggai)) { // obf
			case '1251': // obf
			case '1252': // obf
			case '866': // obf
			case '932': // obf
			case '936': // obf
			case '950': // obf
			case 'big5': // obf
			case 'big5-hkscs': // obf
			case 'cp1251': // obf
			case 'cp1252': // obf
			case 'cp866': // obf
			case 'euc-jp': // obf
			case 'eucjp': // obf
			case 'gb2312': // obf
			case 'ibm866': // obf
			case 'iso-8859-1': // obf
			case 'iso-8859-15': // obf
			case 'iso8859-1': // obf
			case 'iso8859-15': // obf
			case 'koi8-r': // obf
			case 'koi8-ru': // obf
			case 'koi8r': // obf
			case 'shift_jis': // obf
			case 'sjis': // obf
			case 'win-1251': // obf
			case 'windows-1251': // obf
			case 'windows-1252': // obf
				$v_gsdei = htmlentities($v_jrerr, ENT_COMPAT, $v_kggai); // obf
				break; // obf

			case 'utf-8': // obf
				$v_mridd = strlen($v_jrerr); // obf
				for ($v_mlhdy = 0; $v_mlhdy < $v_mridd; $v_mlhdy++) { // obf
					$v_tvext = ord($v_jrerr[$v_mlhdy]); // obf
					$v_ngvjn = 0; // obf
					if ($v_tvext < 0x80) { // obf
						$v_ngvjn = $v_tvext; // obf
					} elseif ((($v_tvext & 0xF0) >> 4) == 0x0F  &&  $v_mlhdy+3 < $v_mridd) { // obf
						$v_ngvjn  = (($v_tvext & 0x07) << 18); // obf
						$v_ngvjn += ((ord($v_jrerr[++$v_mlhdy]) & 0x3F) << 12); // obf
						$v_ngvjn += ((ord($v_jrerr[++$v_mlhdy]) & 0x3F) << 6); // obf
						$v_ngvjn +=  (ord($v_jrerr[++$v_mlhdy]) & 0x3F); // obf
					} elseif ((($v_tvext & 0xE0) >> 5) == 0x07  &&  $v_mlhdy+2 < $v_mridd) { // obf
						$v_ngvjn  = (($v_tvext & 0x0F) << 12); // obf
						$v_ngvjn += ((ord($v_jrerr[++$v_mlhdy]) & 0x3F) << 6); // obf
						$v_ngvjn +=  (ord($v_jrerr[++$v_mlhdy]) & 0x3F); // obf
					} elseif ((($v_tvext & 0xC0) >> 6) == 0x03  &&  $v_mlhdy+1 < $v_mridd) { // obf
						$v_ngvjn  = (($v_tvext & 0x1F) << 6); // obf
						$v_ngvjn += (ord($v_jrerr[++$v_mlhdy]) & 0x3F); // obf
					} // obf
					if (($v_ngvjn >= 32) && ($v_ngvjn <= 127)) { // obf
						$v_gsdei .= htmlentities(chr($v_ngvjn)); // obf
					} else { // obf
						$v_gsdei .= '&#'.$v_ngvjn.';'; // obf
					} // obf
				} // obf
				break; // obf

			case 'utf-16le': // obf
				for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy += 2) { // obf
					$v_ngvjn = self::LittleEndian2Int(substr($v_jrerr, $v_mlhdy, 2)); // obf
					if (($v_ngvjn >= 32) && ($v_ngvjn <= 127)) { // obf
						$v_gsdei .= chr($v_ngvjn); // obf
					} else { // obf
						$v_gsdei .= '&#'.$v_ngvjn.';'; // obf
					} // obf
				} // obf
				break; // obf

			case 'utf-16be': // obf
				for ($v_mlhdy = 0; $v_mlhdy < strlen($v_jrerr); $v_mlhdy += 2) { // obf
					$v_ngvjn = self::BigEndian2Int(substr($v_jrerr, $v_mlhdy, 2)); // obf
					if (($v_ngvjn >= 32) && ($v_ngvjn <= 127)) { // obf
						$v_gsdei .= chr($v_ngvjn); // obf
					} else { // obf
						$v_gsdei .= '&#'.$v_ngvjn.';'; // obf
					} // obf
				} // obf
				break; // obf

			default: // obf
				$v_gsdei = 'ERROR: Character set "'.$v_kggai.'" not supported in MultiByteCharString2HTML()'; // obf
				break; // obf
		} // obf
		return $v_gsdei; // obf
	} // obf

	/** // obf
	 * @param int $v_oqjxy // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function RGADnameLookup($v_oqjxy) { // obf
		static $v_gnhwh = array(); // obf
		if (empty($v_gnhwh)) { // obf
			$v_gnhwh[0] = 'not set'; // obf
			$v_gnhwh[1] = 'Track Gain Adjustment'; // obf
			$v_gnhwh[2] = 'Album Gain Adjustment'; // obf
		} // obf

		return (isset($v_gnhwh[$v_oqjxy]) ? $v_gnhwh[$v_oqjxy] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_ioadb // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function RGADoriginatorLookup($v_ioadb) { // obf
		static $v_ajdax = array(); // obf
		if (empty($v_ajdax)) { // obf
			$v_ajdax[0] = 'unspecified'; // obf
			$v_ajdax[1] = 'pre-set by artist/producer/mastering engineer'; // obf
			$v_ajdax[2] = 'set by user'; // obf
			$v_ajdax[3] = 'determined automatically'; // obf
		} // obf

		return (isset($v_ajdax[$v_ioadb]) ? $v_ajdax[$v_ioadb] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_kgvdd // obf
	 * @param int $v_xpojw // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	public static function RGADadjustmentLookup($v_kgvdd, $v_xpojw) { // obf
		$v_buifl = (float) $v_kgvdd / 10; // obf
		if ($v_xpojw == 1) { // obf
			$v_buifl *= -1; // obf
		} // obf
		return $v_buifl; // obf
	} // obf

	/** // obf
	 * @param int $v_oqjxy // obf
	 * @param int $v_ioadb // obf
	 * @param int $v_zjnuk // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function RGADgainString($v_oqjxy, $v_ioadb, $v_zjnuk) { // obf
		if ($v_zjnuk < 0) { // obf
			$v_xpojw = '1'; // obf
		} else { // obf
			$v_xpojw = '0'; // obf
		} // obf
		$v_dzlgd = intval(round($v_zjnuk * 10)); // obf
		$v_lxjzd  = str_pad(decbin($v_oqjxy), 3, '0', STR_PAD_LEFT); // obf
		$v_lxjzd .= str_pad(decbin($v_ioadb), 3, '0', STR_PAD_LEFT); // obf
		$v_lxjzd .= $v_xpojw; // obf
		$v_lxjzd .= str_pad(decbin($v_dzlgd), 9, '0', STR_PAD_LEFT); // obf

		return $v_lxjzd; // obf
	} // obf

	/** // obf
	 * @param float $v_lwrlw // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	public static function RGADamplitude2dB($v_lwrlw) { // obf
		return 20 * log10($v_lwrlw); // obf
	} // obf

	/** // obf
	 * @param string $v_tapfh // obf
	 * @param array  $v_zcjnm // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public static function GetDataImageSize($v_tapfh, &$v_zcjnm=array()) { // obf
		if (PHP_VERSION_ID >= 50400) { // obf
			$v_ytjvq = @getimagesizefromstring($v_tapfh, $v_zcjnm); // obf
			if ($v_ytjvq === false || !isset($v_ytjvq[0], $v_ytjvq[1])) { // obf
				return false; // obf
			} // obf
			$v_ytjvq['height'] = $v_ytjvq[0]; // obf
			$v_ytjvq['width'] = $v_ytjvq[1]; // obf
			return $v_ytjvq; // obf
		} // obf
		static $v_soiho = ''; // obf
		if (empty($v_soiho)) { // obf
			if (function_exists('sys_get_temp_dir')) { // obf
				$v_soiho = sys_get_temp_dir(); // https://github.com/JamesHeinrich/getID3/issues/52 // obf
			} // obf

			// yes this is ugly, feel free to suggest a better way // obf
			if (include_once(dirname(__FILE__).'/getid3.php')) { // obf
				$v_sbmtg = new getID3(); // obf
				if ($v_lllfd = $v_sbmtg->tempdir) { // obf
					$v_soiho = $v_lllfd; // obf
				} // obf
				unset($v_sbmtg, $v_lllfd); // obf
			} // obf
		} // obf
		$v_ytjvq = false; // obf
		if ($v_powqm = tempnam($v_soiho, 'gI3')) { // obf
			if (is_writable($v_powqm) && is_file($v_powqm) && ($v_ojakm = fopen($v_powqm, 'wb'))) { // obf
				fwrite($v_ojakm, $v_tapfh); // obf
				fclose($v_ojakm); // obf
				$v_ytjvq = @getimagesize($v_powqm, $v_zcjnm); // obf
				if (($v_ytjvq === false) || !isset($v_ytjvq[0]) || !isset($v_ytjvq[1])) { // obf
					return false; // obf
				} // obf
				$v_ytjvq['height'] = $v_ytjvq[0]; // obf
				$v_ytjvq['width']  = $v_ytjvq[1]; // obf
			} // obf
			unlink($v_powqm); // obf
		} // obf
		return $v_ytjvq; // obf
	} // obf

	/** // obf
	 * @param string $v_unsam // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function ImageExtFromMime($v_unsam) { // obf
		// temporary way, works OK for now, but should be reworked in the future // obf
		return str_replace(array('image/', 'x-', 'jpeg'), array('', '', 'jpg'), $v_unsam); // obf
	} // obf

	/** // obf
	 * @param array $v_jztvv // obf
	 * @param bool  $v_cvueb default true (just as in the main getID3 class) // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function CopyTagsToComments(&$v_jztvv, $v_cvueb=true) { // obf
		// Copy all entries from ['tags'] into common ['comments'] // obf
		if (!empty($v_jztvv['tags'])) { // obf

			// Some tag types can only support limited character sets and may contain data in non-standard encoding (usually ID3v1) // obf
			// and/or poorly-transliterated tag values that are also in tag formats that do support full-range character sets // obf
			// To make the output more user-friendly, process the potentially-problematic tag formats last to enhance the chance that // obf
			// the first entries in [comments] are the most correct and the "bad" ones (if any) come later. // obf
			// https://github.com/JamesHeinrich/getID3/issues/338 // obf
			$v_jbbzt = array('id3v1','riff'); // obf
			foreach ($v_jbbzt as $v_fmsfk) { // obf
				if (isset($v_jztvv['tags'][$v_fmsfk])) { // obf
					// bubble ID3v1 to the end, if present to aid in detecting bad ID3v1 encodings // obf
					$v_xcxyo = $v_jztvv['tags'][$v_fmsfk]; // obf
					unset($v_jztvv['tags'][$v_fmsfk]); // obf
					$v_jztvv['tags'][$v_fmsfk] = $v_xcxyo; // obf
					unset($v_xcxyo); // obf
				} // obf
			} // obf
			foreach ($v_jztvv['tags'] as $v_lbzgo => $v_becar) { // obf
				foreach ($v_becar as $v_ekbcf => $v_cjsfd) { // obf
					foreach ($v_cjsfd as $v_yziqv => $v_wrjrm) { // obf
						if (!empty($v_wrjrm)) { // obf
							if (empty($v_jztvv['comments'][$v_ekbcf])) { // obf

								// fall through and append value // obf

							} elseif ($v_lbzgo == 'id3v1') { // obf

								$v_adgnp = strlen(trim($v_wrjrm)); // obf
								foreach ($v_jztvv['comments'][$v_ekbcf] as $v_djgkj => $v_spblr) { // obf
									$v_kgcvp = strlen(trim($v_spblr)); // obf
									if (($v_adgnp <= $v_kgcvp) && (substr($v_spblr, 0, $v_adgnp) == trim($v_wrjrm))) { // obf
										// new value is identical but shorter-than (or equal-length to) one already in comments - skip // obf
										break 2; // obf
									} // obf

									if (function_exists('mb_convert_encoding')) { // obf
										if (trim($v_wrjrm) == trim(substr(mb_convert_encoding($v_spblr, $v_jztvv['id3v1']['encoding'], $v_jztvv['encoding']), 0, 30))) { // obf
											// value stored in ID3v1 appears to be probably the multibyte value transliterated (badly) into ISO-8859-1 in ID3v1. // obf
											// As an example, Foobar2000 will do this if you tag a file with Chinese or Arabic or Cyrillic or something that doesn't fit into ISO-8859-1 the ID3v1 will consist of mostly "?" characters, one per multibyte unrepresentable character // obf
											break 2; // obf
										} // obf
									} // obf
								} // obf

							} elseif (!is_array($v_wrjrm)) { // obf

								$v_adgnp   =    strlen(trim($v_wrjrm)); // obf
								$v_nintw = mb_strlen(trim($v_wrjrm)); // obf
								foreach ($v_jztvv['comments'][$v_ekbcf] as $v_djgkj => $v_spblr) { // obf
									$v_kgcvp   =    strlen(trim($v_spblr)); // obf
									$v_ncoeb = mb_strlen(trim($v_spblr)); // obf
									if (($v_nintw == $v_ncoeb) && ($v_spblr == getid3_lib::iconv_fallback('UTF-8', 'ASCII', $v_wrjrm))) { // obf
										// https://github.com/JamesHeinrich/getID3/issues/338 // obf
										// check for tags containing extended characters that may have been forced into limited-character storage (e.g. UTF8 values into ASCII) // obf
										// which will usually display unrepresentable characters as "?" // obf
										$v_jztvv['comments'][$v_ekbcf][$v_djgkj] = trim($v_wrjrm); // obf
										break; // obf
									} // obf
									if ((strlen($v_spblr) > 10) && ($v_adgnp > $v_kgcvp) && (substr(trim($v_wrjrm), 0, strlen($v_spblr)) == $v_spblr)) { // obf
										$v_jztvv['comments'][$v_ekbcf][$v_djgkj] = trim($v_wrjrm); // obf
										break; // obf
									} // obf
								} // obf

							} // obf
							if (is_array($v_wrjrm) || empty($v_jztvv['comments'][$v_ekbcf]) || !in_array(trim($v_wrjrm), $v_jztvv['comments'][$v_ekbcf])) { // obf
								$v_wrjrm = (is_string($v_wrjrm) ? trim($v_wrjrm) : $v_wrjrm); // obf
								if (!is_int($v_yziqv) && !ctype_digit($v_yziqv)) { // obf
									$v_jztvv['comments'][$v_ekbcf][$v_yziqv] = $v_wrjrm; // obf
								} else { // obf
									if (!isset($v_jztvv['comments'][$v_ekbcf])) { // obf
										$v_jztvv['comments'][$v_ekbcf] = array($v_wrjrm); // obf
									} else { // obf
										$v_jztvv['comments'][$v_ekbcf][] = $v_wrjrm; // obf
									} // obf
								} // obf
							} // obf
						} // obf
					} // obf
				} // obf
			} // obf

			// attempt to standardize spelling of returned keys // obf
			if (!empty($v_jztvv['comments'])) { // obf
				$v_ofkwy = array( // obf
					'tracknumber' => 'track_number', // obf
					'track'       => 'track_number', // obf
				); // obf
				foreach ($v_ofkwy as $v_arskj => $v_nnhdy) { // obf
					if (array_key_exists($v_arskj, $v_jztvv['comments']) && !array_key_exists($v_nnhdy, $v_jztvv['comments'])) { // obf
						$v_jztvv['comments'][$v_nnhdy] = $v_jztvv['comments'][$v_arskj]; // obf
						unset($v_jztvv['comments'][$v_arskj]); // obf
					} // obf
				} // obf
			} // obf

			if ($v_cvueb) { // obf
				// Copy ['comments'] to ['comments_html'] // obf
				if (!empty($v_jztvv['comments'])) { // obf
					foreach ($v_jztvv['comments'] as $v_vwvvt => $v_ezldq) { // obf
						if ($v_vwvvt == 'picture') { // obf
							// pictures can take up a lot of space, and we don't need multiple copies of them // obf
							// let there be a single copy in [comments][picture], and not elsewhere // obf
							continue; // obf
						} // obf
						foreach ($v_ezldq as $v_nscpk => $v_wrjrm) { // obf
							if (is_array($v_wrjrm)) { // obf
								$v_jztvv['comments_html'][$v_vwvvt][$v_nscpk] = $v_wrjrm; // obf
							} else { // obf
								$v_jztvv['comments_html'][$v_vwvvt][$v_nscpk] = str_replace('&#0;', '', self::MultiByteCharString2HTML($v_wrjrm, $v_jztvv['encoding'])); // obf
							} // obf
						} // obf
					} // obf
				} // obf
			} // obf

		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_yziqv // obf
	 * @param int    $v_xevai // obf
	 * @param int    $v_zosqr // obf
	 * @param string $v_oxviq // obf
	 * @param string $v_arxce // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function EmbeddedLookup($v_yziqv, $v_xevai, $v_zosqr, $v_oxviq, $v_arxce) { // obf

		// Cached // obf
		static $v_irayy; // obf
		if (isset($v_irayy[$v_oxviq][$v_arxce])) { // obf
			return (isset($v_irayy[$v_oxviq][$v_arxce][$v_yziqv]) ? $v_irayy[$v_oxviq][$v_arxce][$v_yziqv] : ''); // obf
		} // obf

		// Init // obf
		$v_ehclj  = strlen($v_yziqv); // obf
		$v_awssg = $v_zosqr - $v_xevai - 7; // obf

		// Open php file // obf
		$v_sdphd = fopen($v_oxviq, 'r'); // obf

		// Discard $v_xevai lines // obf
		for ($v_mlhdy = 0; $v_mlhdy < ($v_xevai + 3); $v_mlhdy++) { // obf
			fgets($v_sdphd, 1024); // obf
		} // obf

		// Loop thru line // obf
		while (0 < $v_awssg--) { // obf

			// Read line // obf
			$v_teyfv = ltrim(fgets($v_sdphd, 1024), "\t "); // obf

			// METHOD A: only cache the matching key - less memory but slower on next lookup of not-previously-looked-up key // obf
			//$v_zbpov = substr($v_teyfv, 0, $v_ehclj); // obf
			//if ($v_yziqv == $v_zbpov)  { // obf
			//	$v_irayy[$v_oxviq][$v_arxce][$v_zbpov] = substr($v_teyfv, $v_ehclj + 1); // obf
			//	break; // obf
			//} // obf

			// METHOD B: cache all keys in this lookup - more memory but faster on next lookup of not-previously-looked-up key // obf
			//$v_irayy[$v_oxviq][$v_arxce][substr($v_teyfv, 0, $v_ehclj)] = trim(substr($v_teyfv, $v_ehclj + 1)); // obf
			$v_rfnue = explode("\t", $v_teyfv, 2); // obf
			$v_rufld   = (isset($v_rfnue[0]) ? $v_rfnue[0] : ''); // obf
			$v_curfy = (isset($v_rfnue[1]) ? $v_rfnue[1] : ''); // obf
			$v_irayy[$v_oxviq][$v_arxce][$v_rufld] = trim($v_curfy); // obf
		} // obf

		// Close and return // obf
		fclose($v_sdphd); // obf
		return (isset($v_irayy[$v_oxviq][$v_arxce][$v_yziqv]) ? $v_irayy[$v_oxviq][$v_arxce][$v_yziqv] : ''); // obf
	} // obf

	/** // obf
	 * @param string $v_aretw // obf
	 * @param string $v_hpobw // obf
	 * @param bool   $v_jensm // obf
	 * // obf
	 * @return bool // obf
	 * @throws Exception // obf
	 */ // obf
	public static function IncludeDependency($v_aretw, $v_hpobw, $v_jensm=false) { // obf
		global $v_robnd; // obf

		if (file_exists($v_aretw)) { // obf
			if (include_once($v_aretw)) { // obf
				return true; // obf
			} else { // obf
				$v_gjpwn = basename($v_hpobw).' depends on '.$v_aretw.', which has errors'; // obf
			} // obf
		} else { // obf
			$v_gjpwn = basename($v_hpobw).' depends on '.$v_aretw.', which is missing'; // obf
		} // obf
		if ($v_jensm) { // obf
			throw new Exception($v_gjpwn); // obf
		} else { // obf
			$v_robnd[] = $v_gjpwn; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * @param string $v_jrerr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function trimNullByte($v_jrerr) { // obf
		return trim($v_jrerr, "\x00"); // obf
	} // obf

	/** // obf
	 * @param string $v_lpccg // obf
	 * // obf
	 * @return float|bool // obf
	 */ // obf
	public static function getFileSizeSyscall($v_lpccg) { // obf
		$v_htbmm = null; // obf
		$v_zucts = false; // obf

		if (GETID3_OS_ISWINDOWS) { // obf
			if (class_exists('COM')) { // From PHP 5.3.15 and 5.4.5, COM and DOTNET is no longer built into the php core.you have to add COM support in php.ini: // obf
				$v_yalxm = new COM('Scripting.FileSystemObject'); // obf
				$v_oxviq = $v_yalxm->GetFile($v_lpccg); // obf
				$v_zucts = $v_oxviq->Size(); // obf
				unset($v_yalxm, $v_oxviq); // obf
			} else { // obf
				$v_htbmm = 'for %I in ('.escapeshellarg($v_lpccg).') do @echo %~zI'; // obf
			} // obf
		} else { // obf
			$v_htbmm = 'ls -l '.escapeshellarg($v_lpccg).' | awk \'{print $5}\''; // obf
		} // obf
		if (isset($v_htbmm)) { // obf
			$v_lkcvr = trim(`$v_htbmm`); // obf
			if (ctype_digit($v_lkcvr)) { // obf
				$v_zucts = (float) $v_lkcvr; // obf
			} // obf
		} // obf
		return $v_zucts; // obf
	} // obf

	/** // obf
	 * @param string $v_aretw // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function truepath($v_aretw) { // obf
		// 2017-11-08: this could use some improvement, patches welcome // obf
		if (preg_match('#^(\\\\\\\\|//)[a-z0-9]#i', $v_aretw, $v_guvld)) { // obf
			// PHP's built-in realpath function does not work on UNC Windows shares // obf
			$v_dldaz = array(); // obf
			foreach (explode('/', str_replace('\\', '/', $v_aretw)) as $v_gowgq) { // obf
				if ($v_gowgq == '.') { // obf
					continue; // obf
				} // obf
				if ($v_gowgq == '..') { // obf
					if (count($v_dldaz)) { // obf
						array_pop($v_dldaz); // obf
					} else { // obf
						// cannot step above this level, already at top level // obf
						return false; // obf
					} // obf
				} else { // obf
					$v_dldaz[] = $v_gowgq; // obf
				} // obf
			} // obf
			return implode(DIRECTORY_SEPARATOR, $v_dldaz); // obf
		} // obf
		return realpath($v_aretw); // obf
	} // obf

	/** // obf
	 * Workaround for Bug #37268 (https://bugs.php.net/bug.php?id=37268) // obf
	 * // obf
	 * @param string $v_lpccg A path. // obf
	 * @param string $v_flras If the name component ends in suffix this will also be cut off. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function mb_basename($v_lpccg, $v_flras = '') { // obf
		$v_zafna = preg_split('#/#', rtrim($v_lpccg, '/ ')); // obf
		return substr(basename('X'.$v_zafna[count($v_zafna) - 1], $v_flras), 1); // obf
	} // obf

} // obf