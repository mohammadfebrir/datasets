
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * PemFTP - An Ftp implementation in pure PHP // obf
 * // obf
 * @package PemFTP // obf
 * @since 2.5.0 // obf
 * // obf
 * @version 1.0 // obf
 * @copyright Alexey Dotsenko // obf
 * @author Alexey Dotsenko // obf
 * @link https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html // obf
 * @license LGPL https://opensource.org/licenses/lgpl-license.html // obf
 */ // obf

/** // obf
 * FTP implementation using fsockopen to connect. // obf
 * // obf
 * @package PemFTP // obf
 * @subpackage Pure // obf
 * @since 2.5.0 // obf
 * // obf
 * @version 1.0 // obf
 * @copyright Alexey Dotsenko // obf
 * @author Alexey Dotsenko // obf
 * @link https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html // obf
 * @license LGPL https://opensource.org/licenses/lgpl-license.html // obf
 */ // obf
class ftp_pure extends ftp_base { // obf

	function __construct($v_bgevd=FALSE, $v_ulhzt=FALSE) { // obf
		parent::__construct(false, $v_bgevd, $v_ulhzt); // obf
	} // obf

// <!-- --------------------------------------------------------------------------------------- --> // obf
// <!--       Private functions                                                                 --> // obf
// <!-- --------------------------------------------------------------------------------------- --> // obf

	function _settimeout($v_uqihy) { // obf
		if(!@stream_set_timeout($v_uqihy, $v_brgtj->_timeout)) { // obf
			$v_brgtj->PushError('_settimeout','socket set send timeout'); // obf
			$v_brgtj->_quit(); // obf
			return FALSE; // obf
		} // obf
		return TRUE; // obf
	} // obf

	function _connect($v_nvvqy, $v_iqutf) { // obf
		$v_brgtj->SendMSG("Creating socket"); // obf
		$v_uqihy = @fsockopen($v_nvvqy, $v_iqutf, $v_pmigo, $v_mqpdy, $v_brgtj->_timeout); // obf
		if (!$v_uqihy) { // obf
			$v_brgtj->PushError('_connect','socket connect failed', $v_mqpdy." (".$v_pmigo.")"); // obf
			return FALSE; // obf
		} // obf
		$v_brgtj->_connected=true; // obf
		return $v_uqihy; // obf
	} // obf

	function _readmsg($v_xgsja="_readmsg"){ // obf
		if(!$v_brgtj->_connected) { // obf
			$v_brgtj->PushError($v_xgsja, 'Connect first'); // obf
			return FALSE; // obf
		} // obf
		$v_batjw=true; // obf
		$v_brgtj->_message=""; // obf
		$v_brgtj->_code=0; // obf
		$v_dtujd=true; // obf
		do { // obf
			$v_cdvff=@fgets($v_brgtj->_ftp_control_sock, 512); // obf
			if($v_cdvff===false) { // obf
				$v_dtujd=$v_batjw=false; // obf
				$v_brgtj->PushError($v_xgsja,'Read failed'); // obf
			} else { // obf
				$v_brgtj->_message.=$v_cdvff; // obf
				if(preg_match("/^([0-9]{3})(-(.*[".CRLF."]{1,2})+\\1)? [^".CRLF."]+[".CRLF."]{1,2}$/", $v_brgtj->_message, $v_gfves)) $v_dtujd=false; // obf
			} // obf
		} while($v_dtujd); // obf
		if($v_brgtj->LocalEcho) echo "GET < ".rtrim($v_brgtj->_message, CRLF).CRLF; // obf
		$v_brgtj->_code=(int)$v_gfves[1]; // obf
		return $v_batjw; // obf
	} // obf

	function _exec($v_hecoo, $v_xgsja="_exec") { // obf
		if(!$v_brgtj->_ready) { // obf
			$v_brgtj->PushError($v_xgsja,'Connect first'); // obf
			return FALSE; // obf
		} // obf
		if($v_brgtj->LocalEcho) echo "PUT > ",$v_hecoo,CRLF; // obf
		$v_tngcm=@fputs($v_brgtj->_ftp_control_sock, $v_hecoo.CRLF); // obf
		if($v_tngcm===false) { // obf
			$v_brgtj->PushError($v_xgsja,'socket write failed'); // obf
			return FALSE; // obf
		} // obf
		$v_brgtj->_lastaction=time(); // obf
		if(!$v_brgtj->_readmsg($v_xgsja)) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function _data_prepare($v_gzfai=FTP_ASCII) { // obf
		if(!$v_brgtj->_settype($v_gzfai)) return FALSE; // obf
		if($v_brgtj->_passive) { // obf
			if(!$v_brgtj->_exec("PASV", "pasv")) { // obf
				$v_brgtj->_data_close(); // obf
				return FALSE; // obf
			} // obf
			if(!$v_brgtj->_checkCode()) { // obf
				$v_brgtj->_data_close(); // obf
				return FALSE; // obf
			} // obf
			$v_ndvjw = explode(",", __fn_37772("/^.+ \\(?([0-9]{1,3},[0-9]{1,3},[0-9]{1,3},[0-9]{1,3},[0-9]+,[0-9]+)\\)?.*$/s", "\\1", $v_brgtj->_message)); // obf
			$v_brgtj->_datahost=$v_ndvjw[0].".".$v_ndvjw[1].".".$v_ndvjw[2].".".$v_ndvjw[3]; // obf
            $v_brgtj->_dataport=(((int)$v_ndvjw[4])<<8) + ((int)$v_ndvjw[5]); // obf
			$v_brgtj->SendMSG("Connecting to ".$v_brgtj->_datahost.":".$v_brgtj->_dataport); // obf
			$v_brgtj->_ftp_data_sock=@fsockopen($v_brgtj->_datahost, $v_brgtj->_dataport, $v_pmigo, $v_mqpdy, $v_brgtj->_timeout); // obf
			if(!$v_brgtj->_ftp_data_sock) { // obf
				$v_brgtj->PushError("_data_prepare","fsockopen fails", $v_mqpdy." (".$v_pmigo.")"); // obf
				$v_brgtj->_data_close(); // obf
				return FALSE; // obf
			} // obf
			else $v_brgtj->_ftp_data_sock; // obf
		} else { // obf
			$v_brgtj->SendMSG("Only passive connections available!"); // obf
			return FALSE; // obf
		} // obf
		return TRUE; // obf
	} // obf

	function _data_read($v_gzfai=FTP_ASCII, $v_qvpia=NULL) { // obf
		if(is_resource($v_qvpia)) $v_weatp=0; // obf
		else $v_weatp=""; // obf
		if(!$v_brgtj->_passive) { // obf
			$v_brgtj->SendMSG("Only passive connections available!"); // obf
			return FALSE; // obf
		} // obf
		while (!feof($v_brgtj->_ftp_data_sock)) { // obf
			$v_yiejg=fread($v_brgtj->_ftp_data_sock, $v_brgtj->_ftp_buff_size); // obf
			if($v_gzfai!=FTP_BINARY) $v_yiejg=__fn_37772("/\r\n|\r|\n/", $v_brgtj->_eol_code[$v_brgtj->OS_local], $v_yiejg); // obf
			if(is_resource($v_qvpia)) $v_weatp+=fwrite($v_qvpia, $v_yiejg, strlen($v_yiejg)); // obf
			else $v_weatp.=$v_yiejg; // obf
		} // obf
		return $v_weatp; // obf
	} // obf

	function _data_write($v_gzfai=FTP_ASCII, $v_qvpia=NULL) { // obf
		if(is_resource($v_qvpia)) $v_weatp=0; // obf
		else $v_weatp=""; // obf
		if(!$v_brgtj->_passive) { // obf
			$v_brgtj->SendMSG("Only passive connections available!"); // obf
			return FALSE; // obf
		} // obf
		if(is_resource($v_qvpia)) { // obf
			while(!feof($v_qvpia)) { // obf
				$v_yiejg=fread($v_qvpia, $v_brgtj->_ftp_buff_size); // obf
				if(!$v_brgtj->_data_write_block($v_gzfai, $v_yiejg)) return false; // obf
			} // obf
		} elseif(!$v_brgtj->_data_write_block($v_gzfai, $v_qvpia)) return false; // obf
		return TRUE; // obf
	} // obf

	function _data_write_block($v_gzfai, $v_yiejg) { // obf
		if($v_gzfai!=FTP_BINARY) $v_yiejg=__fn_37772("/\r\n|\r|\n/", $v_brgtj->_eol_code[$v_brgtj->OS_remote], $v_yiejg); // obf
		do { // obf
			if(($v_dvbdy=@fwrite($v_brgtj->_ftp_data_sock, $v_yiejg))===FALSE) { // obf
				$v_brgtj->PushError("_data_write","Can't write to socket"); // obf
				return FALSE; // obf
			} // obf
			$v_yiejg=substr($v_yiejg, $v_dvbdy); // obf
		} while(!empty($v_yiejg)); // obf
		return true; // obf
	} // obf

	function _data_close() { // obf
		@fclose($v_brgtj->_ftp_data_sock); // obf
		$v_brgtj->SendMSG("Disconnected data from remote host"); // obf
		return TRUE; // obf
	} // obf

	function _quit($v_blbli=FALSE) { // obf
		if($v_brgtj->_connected or $v_blbli) { // obf
			@fclose($v_brgtj->_ftp_control_sock); // obf
			$v_brgtj->_connected=false; // obf
			$v_brgtj->SendMSG("Socket closed"); // obf
		} // obf
	} // obf
} // obf

?> // obf