
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
 * Socket Based FTP implementation // obf
 * // obf
 * @package PemFTP // obf
 * @subpackage Socket // obf
 * @since 2.5.0 // obf
 * // obf
 * @version 1.0 // obf
 * @copyright Alexey Dotsenko // obf
 * @author Alexey Dotsenko // obf
 * @link https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html // obf
 * @license LGPL https://opensource.org/licenses/lgpl-license.html // obf
 */ // obf
class ftp_sockets extends ftp_base { // obf

	function __construct($v_hpdkk=FALSE, $v_ucagr=FALSE) { // obf
		parent::__construct(true, $v_hpdkk, $v_ucagr); // obf
	} // obf

// <!-- --------------------------------------------------------------------------------------- --> // obf
// <!--       Private functions                                                                 --> // obf
// <!-- --------------------------------------------------------------------------------------- --> // obf

	function _settimeout($v_aruvz) { // obf
		if(!@socket_set_option($v_aruvz, SOL_SOCKET, SO_RCVTIMEO, array("sec"=>$v_nsjnv->_timeout, "usec"=>0))) { // obf
			$v_nsjnv->PushError('_connect','socket set receive timeout',socket_strerror(socket_last_error($v_aruvz))); // obf
			@socket_close($v_aruvz); // obf
			return FALSE; // obf
		} // obf
		if(!@socket_set_option($v_aruvz, SOL_SOCKET , SO_SNDTIMEO, array("sec"=>$v_nsjnv->_timeout, "usec"=>0))) { // obf
			$v_nsjnv->PushError('_connect','socket set send timeout',socket_strerror(socket_last_error($v_aruvz))); // obf
			@socket_close($v_aruvz); // obf
			return FALSE; // obf
		} // obf
		return true; // obf
	} // obf

	function _connect($v_atvhu, $v_mkkwm) { // obf
		$v_nsjnv->SendMSG("Creating socket"); // obf
		if(!($v_aruvz = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP))) { // obf
			$v_nsjnv->PushError('_connect','socket create failed',socket_strerror(socket_last_error($v_aruvz))); // obf
			return FALSE; // obf
		} // obf
		if(!$v_nsjnv->_settimeout($v_aruvz)) return FALSE; // obf
		$v_nsjnv->SendMSG("Connecting to \"".$v_atvhu.":".$v_mkkwm."\""); // obf
		if (!($v_vyrnj = @socket_connect($v_aruvz, $v_atvhu, $v_mkkwm))) { // obf
			$v_nsjnv->PushError('_connect','socket connect failed',socket_strerror(socket_last_error($v_aruvz))); // obf
			@socket_close($v_aruvz); // obf
			return FALSE; // obf
		} // obf
		$v_nsjnv->_connected=true; // obf
		return $v_aruvz; // obf
	} // obf

	function _readmsg($v_ytwmr="_readmsg"){ // obf
		if(!$v_nsjnv->_connected) { // obf
			$v_nsjnv->PushError($v_ytwmr,'Connect first'); // obf
			return FALSE; // obf
		} // obf
		$v_lxsfm=true; // obf
		$v_nsjnv->_message=""; // obf
		$v_nsjnv->_code=0; // obf
		$v_qzcdm=true; // obf
		do { // obf
			$v_hywhb=@socket_read($v_nsjnv->_ftp_control_sock, 4096, PHP_BINARY_READ); // obf
			if($v_hywhb===false) { // obf
				$v_qzcdm=$v_lxsfm=false; // obf
				$v_nsjnv->PushError($v_ytwmr,'Read failed', socket_strerror(socket_last_error($v_nsjnv->_ftp_control_sock))); // obf
			} else { // obf
				$v_nsjnv->_message.=$v_hywhb; // obf
				$v_qzcdm = !preg_match("/^([0-9]{3})(-.+\\1)? [^".CRLF."]+".CRLF."$/Us", $v_nsjnv->_message, $v_vdxwz); // obf
			} // obf
		} while($v_qzcdm); // obf
		if($v_nsjnv->LocalEcho) echo "GET < ".rtrim($v_nsjnv->_message, CRLF).CRLF; // obf
		$v_nsjnv->_code=(int)$v_vdxwz[1]; // obf
		return $v_lxsfm; // obf
	} // obf

	function _exec($v_wipms, $v_ytwmr="_exec") { // obf
		if(!$v_nsjnv->_ready) { // obf
			$v_nsjnv->PushError($v_ytwmr,'Connect first'); // obf
			return FALSE; // obf
		} // obf
		if($v_nsjnv->LocalEcho) echo "PUT > ",$v_wipms,CRLF; // obf
		$v_manuj=@socket_write($v_nsjnv->_ftp_control_sock, $v_wipms.CRLF); // obf
		if($v_manuj===false) { // obf
			$v_nsjnv->PushError($v_ytwmr,'socket write failed', socket_strerror(socket_last_error($v_nsjnv->stream))); // obf
			return FALSE; // obf
		} // obf
		$v_nsjnv->_lastaction=time(); // obf
		if(!$v_nsjnv->_readmsg($v_ytwmr)) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function _data_prepare($v_iodqb=FTP_ASCII) { // obf
		if(!$v_nsjnv->_settype($v_iodqb)) return FALSE; // obf
		$v_nsjnv->SendMSG("Creating data socket"); // obf
		$v_nsjnv->_ftp_data_sock = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP); // obf
		if ($v_nsjnv->_ftp_data_sock < 0) { // obf
			$v_nsjnv->PushError('_data_prepare','socket create failed',socket_strerror(socket_last_error($v_nsjnv->_ftp_data_sock))); // obf
			return FALSE; // obf
		} // obf
		if(!$v_nsjnv->_settimeout($v_nsjnv->_ftp_data_sock)) { // obf
			$v_nsjnv->_data_close(); // obf
			return FALSE; // obf
		} // obf
		if($v_nsjnv->_passive) { // obf
			if(!$v_nsjnv->_exec("PASV", "pasv")) { // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			if(!$v_nsjnv->_checkCode()) { // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			$v_yzabp = explode(",", __fn_37772("/^.+ \\(?([0-9]{1,3},[0-9]{1,3},[0-9]{1,3},[0-9]{1,3},[0-9]+,[0-9]+)\\)?.*$/s", "\\1", $v_nsjnv->_message)); // obf
			$v_nsjnv->_datahost=$v_yzabp[0].".".$v_yzabp[1].".".$v_yzabp[2].".".$v_yzabp[3]; // obf
			$v_nsjnv->_dataport=(((int)$v_yzabp[4])<<8) + ((int)$v_yzabp[5]); // obf
			$v_nsjnv->SendMSG("Connecting to ".$v_nsjnv->_datahost.":".$v_nsjnv->_dataport); // obf
			if(!@socket_connect($v_nsjnv->_ftp_data_sock, $v_nsjnv->_datahost, $v_nsjnv->_dataport)) { // obf
				$v_nsjnv->PushError("_data_prepare","socket_connect", socket_strerror(socket_last_error($v_nsjnv->_ftp_data_sock))); // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			else $v_nsjnv->_ftp_temp_sock=$v_nsjnv->_ftp_data_sock; // obf
		} else { // obf
			if(!@socket_getsockname($v_nsjnv->_ftp_control_sock, $v_xnipm, $v_mkkwm)) { // obf
				$v_nsjnv->PushError("_data_prepare","cannot get control socket information", socket_strerror(socket_last_error($v_nsjnv->_ftp_control_sock))); // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			if(!@socket_bind($v_nsjnv->_ftp_data_sock,$v_xnipm)){ // obf
				$v_nsjnv->PushError("_data_prepare","cannot bind data socket", socket_strerror(socket_last_error($v_nsjnv->_ftp_data_sock))); // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			if(!@socket_listen($v_nsjnv->_ftp_data_sock)) { // obf
				$v_nsjnv->PushError("_data_prepare","cannot listen data socket", socket_strerror(socket_last_error($v_nsjnv->_ftp_data_sock))); // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			if(!@socket_getsockname($v_nsjnv->_ftp_data_sock, $v_nsjnv->_datahost, $v_nsjnv->_dataport)) { // obf
				$v_nsjnv->PushError("_data_prepare","cannot get data socket information", socket_strerror(socket_last_error($v_nsjnv->_ftp_data_sock))); // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			if(!$v_nsjnv->_exec('PORT '.str_replace('.',',',$v_nsjnv->_datahost.'.'.($v_nsjnv->_dataport>>8).'.'.($v_nsjnv->_dataport&0x00FF)), "_port")) { // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			if(!$v_nsjnv->_checkCode()) { // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
		} // obf
		return TRUE; // obf
	} // obf

	function _data_read($v_iodqb=FTP_ASCII, $v_chggb=NULL) { // obf
		$v_ithjv=$v_nsjnv->_eol_code[$v_nsjnv->OS_local]; // obf
		if(is_resource($v_chggb)) $v_bxnbv=0; // obf
		else $v_bxnbv=""; // obf
		if(!$v_nsjnv->_passive) { // obf
			$v_nsjnv->SendMSG("Connecting to ".$v_nsjnv->_datahost.":".$v_nsjnv->_dataport); // obf
			$v_nsjnv->_ftp_temp_sock=socket_accept($v_nsjnv->_ftp_data_sock); // obf
			if($v_nsjnv->_ftp_temp_sock===FALSE) { // obf
				$v_nsjnv->PushError("_data_read","socket_accept", socket_strerror(socket_last_error($v_nsjnv->_ftp_temp_sock))); // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
		} // obf

		while(($v_vcprw=@socket_read($v_nsjnv->_ftp_temp_sock, $v_nsjnv->_ftp_buff_size, PHP_BINARY_READ))!==false) { // obf
			if($v_vcprw==="") break; // obf
			if($v_iodqb!=FTP_BINARY) $v_vcprw=__fn_37772("/\r\n|\r|\n/", $v_nsjnv->_eol_code[$v_nsjnv->OS_local], $v_vcprw); // obf
			if(is_resource($v_chggb)) $v_bxnbv+=fwrite($v_chggb, $v_vcprw, strlen($v_vcprw)); // obf
			else $v_bxnbv.=$v_vcprw; // obf
		} // obf
		return $v_bxnbv; // obf
	} // obf

	function _data_write($v_iodqb=FTP_ASCII, $v_chggb=NULL) { // obf
		$v_ithjv=$v_nsjnv->_eol_code[$v_nsjnv->OS_local]; // obf
		if(is_resource($v_chggb)) $v_bxnbv=0; // obf
		else $v_bxnbv=""; // obf
		if(!$v_nsjnv->_passive) { // obf
			$v_nsjnv->SendMSG("Connecting to ".$v_nsjnv->_datahost.":".$v_nsjnv->_dataport); // obf
			$v_nsjnv->_ftp_temp_sock=socket_accept($v_nsjnv->_ftp_data_sock); // obf
			if($v_nsjnv->_ftp_temp_sock===FALSE) { // obf
				$v_nsjnv->PushError("_data_write","socket_accept", socket_strerror(socket_last_error($v_nsjnv->_ftp_temp_sock))); // obf
				$v_nsjnv->_data_close(); // obf
				return false; // obf
			} // obf
		} // obf
		if(is_resource($v_chggb)) { // obf
			while(!feof($v_chggb)) { // obf
				$v_vcprw=fread($v_chggb, $v_nsjnv->_ftp_buff_size); // obf
				if(!$v_nsjnv->_data_write_block($v_iodqb, $v_vcprw)) return false; // obf
			} // obf
		} elseif(!$v_nsjnv->_data_write_block($v_iodqb, $v_chggb)) return false; // obf
		return true; // obf
	} // obf

	function _data_write_block($v_iodqb, $v_vcprw) { // obf
		if($v_iodqb!=FTP_BINARY) $v_vcprw=__fn_37772("/\r\n|\r|\n/", $v_nsjnv->_eol_code[$v_nsjnv->OS_remote], $v_vcprw); // obf
		do { // obf
			if(($v_icsce=@socket_write($v_nsjnv->_ftp_temp_sock, $v_vcprw))===FALSE) { // obf
				$v_nsjnv->PushError("_data_write","socket_write", socket_strerror(socket_last_error($v_nsjnv->_ftp_temp_sock))); // obf
				$v_nsjnv->_data_close(); // obf
				return FALSE; // obf
			} // obf
			$v_vcprw=substr($v_vcprw, $v_icsce); // obf
		} while(!empty($v_vcprw)); // obf
		return true; // obf
	} // obf

	function _data_close() { // obf
		@socket_close($v_nsjnv->_ftp_temp_sock); // obf
		@socket_close($v_nsjnv->_ftp_data_sock); // obf
		$v_nsjnv->SendMSG("Disconnected data from remote host"); // obf
		return TRUE; // obf
	} // obf

	function _quit() { // obf
		if($v_nsjnv->_connected) { // obf
			@socket_close($v_nsjnv->_ftp_control_sock); // obf
			$v_nsjnv->_connected=false; // obf
			$v_nsjnv->SendMSG("Socket closed"); // obf
		} // obf
	} // obf
} // obf
?> // obf