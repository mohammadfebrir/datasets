
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
 * Defines the newline characters, if not defined already. // obf
 * // obf
 * This can be redefined. // obf
 * // obf
 * @since 2.5.0 // obf
 * @var string // obf
 */ // obf
if ( ! defined( 'CRLF' ) ) { // obf
	define( 'CRLF', "\r\n" ); // obf
} // obf

/** // obf
 * Sets whatever to autodetect ASCII mode. // obf
 * // obf
 * This can be redefined. // obf
 * // obf
 * @since 2.5.0 // obf
 * @var int // obf
 */ // obf
if ( ! defined( 'FTP_AUTOASCII' ) ) { // obf
	define( 'FTP_AUTOASCII', -1 ); // obf
} // obf

/** // obf
 * // obf
 * This can be redefined. // obf
 * @since 2.5.0 // obf
 * @var int // obf
 */ // obf
if ( ! defined( 'FTP_BINARY' ) ) { // obf
	define( 'FTP_BINARY', 1 ); // obf
} // obf

/** // obf
 * // obf
 * This can be redefined. // obf
 * @since 2.5.0 // obf
 * @var int // obf
 */ // obf
if ( ! defined( 'FTP_ASCII' ) ) { // obf
	define( 'FTP_ASCII', 0 ); // obf
} // obf

/** // obf
 * Whether to force FTP. // obf
 * // obf
 * This can be redefined. // obf
 * // obf
 * @since 2.5.0 // obf
 * @var bool // obf
 */ // obf
if ( ! defined( 'FTP_FORCE' ) ) { // obf
	define( 'FTP_FORCE', true ); // obf
} // obf

/** // obf
 * @since 2.5.0 // obf
 * @var string // obf
 */ // obf
define('FTP_OS_Unix','u'); // obf

/** // obf
 * @since 2.5.0 // obf
 * @var string // obf
 */ // obf
define('FTP_OS_Windows','w'); // obf

/** // obf
 * @since 2.5.0 // obf
 * @var string // obf
 */ // obf
define('FTP_OS_Mac','m'); // obf

/** // obf
 * PemFTP base class // obf
 * // obf
 */ // obf
class ftp_base { // obf
	/* Public variables */ // obf
	var $v_hwwqu; // obf
	var $v_ediff; // obf
	var $v_vkqhv; // obf
	var $v_rizvu; // obf

	/* Private variables */ // obf
	var $v_bydkq; // obf
	var $v_hitcl; // obf
	var $v_gmpns; // obf
	var $v_rggpt; // obf
	var $v_xmajx; // obf
	var $v_uabmv; // obf
	var $v_jixes; // obf
	var $v_htsbj; // obf
	var $v_xtlsf; // obf
	var $v_jnleq; // obf
	var $v_nddox; // obf
	var $v_pxvub; // obf
	var $v_aiwjq; // obf
	var $v_jrxwo; // obf
	var $v_qnctx; // obf
	var $v_lrojf; // obf
	var $v_xeopl; // obf
	var $v_nprwf; // obf
	var $v_kiudu; // obf
	var $v_yboqt; // obf
	var $v_osghp; // obf
	var $v_mvzbj; // obf
	var $v_lnbmb; // obf
	var $v_scauq; // obf
	var $v_arckb; // obf

	var $v_fxkvb; // obf
	var $v_ggtfi; // obf
	var $v_nfuvo; // obf
	var $v_wkijq; // obf
	var $v_wjawb; // obf

	/* Constructor */ // obf
	function __construct($v_ueyis=FALSE, $v_nirdd=FALSE, $v_jqpxj=FALSE) { // obf
		$v_bnbac->LocalEcho=$v_jqpxj; // obf
		$v_bnbac->Verbose=$v_nirdd; // obf
		$v_bnbac->_lastaction=NULL; // obf
		$v_bnbac->_error_array=array(); // obf
		$v_bnbac->_eol_code=array(FTP_OS_Unix=>"\n", FTP_OS_Mac=>"\r", FTP_OS_Windows=>"\r\n"); // obf
		$v_bnbac->AuthorizedTransferMode=array(FTP_AUTOASCII, FTP_ASCII, FTP_BINARY); // obf
		$v_bnbac->OS_FullName=array(FTP_OS_Unix => 'UNIX', FTP_OS_Windows => 'WINDOWS', FTP_OS_Mac => 'MACOS'); // obf
		$v_bnbac->AutoAsciiExt=array("ASP","BAT","C","CPP","CSS","CSV","JS","H","HTM","HTML","SHTML","INI","LOG","PHP3","PHTML","PL","PERL","SH","SQL","TXT"); // obf
		$v_bnbac->_port_available=($v_ueyis==TRUE); // obf
		$v_bnbac->SendMSG("Staring FTP client class".($v_bnbac->_port_available?"":" without PORT mode support")); // obf
		$v_bnbac->_connected=FALSE; // obf
		$v_bnbac->_ready=FALSE; // obf
		$v_bnbac->_can_restore=FALSE; // obf
		$v_bnbac->_code=0; // obf
		$v_bnbac->_message=""; // obf
		$v_bnbac->_ftp_buff_size=4096; // obf
		$v_bnbac->_curtype=NULL; // obf
		$v_bnbac->SetUmask(0022); // obf
		$v_bnbac->SetType(FTP_AUTOASCII); // obf
		$v_bnbac->SetTimeout(30); // obf
		$v_bnbac->Passive(!$v_bnbac->_port_available); // obf
		$v_bnbac->_login="anonymous"; // obf
		$v_bnbac->_password="anon@ftp.com"; // obf
		$v_bnbac->_features=array(); // obf
	    $v_bnbac->OS_local=FTP_OS_Unix; // obf
		$v_bnbac->OS_remote=FTP_OS_Unix; // obf
		$v_bnbac->features=array(); // obf
		if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') $v_bnbac->OS_local=FTP_OS_Windows; // obf
		elseif(strtoupper(substr(PHP_OS, 0, 3)) === 'MAC') $v_bnbac->OS_local=FTP_OS_Mac; // obf
	} // obf

	function ftp_base($v_ueyis=FALSE) { // obf
		$v_bnbac->__construct($v_ueyis); // obf
	} // obf

// <!-- --------------------------------------------------------------------------------------- --> // obf
// <!--       Public functions                                                                  --> // obf
// <!-- --------------------------------------------------------------------------------------- --> // obf

	function parselisting($v_nfazc) { // obf
		$v_xoofi = ($v_bnbac->OS_remote == FTP_OS_Windows); // obf
		if ($v_xoofi && preg_match("/([0-9]{2})-([0-9]{2})-([0-9]{2}) +([0-9]{2}):([0-9]{2})(AM|PM) +([0-9]+|<DIR>) +(.+)/",$v_nfazc,$v_fhond)) { // obf
			$v_kuwtk = array(); // obf
			if ($v_fhond[3]<70) { $v_fhond[3]+=2000; } else { $v_fhond[3]+=1900; } // 4digit year fix // obf
			$v_kuwtk['isdir'] = ($v_fhond[7]=="<DIR>"); // obf
			if ( $v_kuwtk['isdir'] ) // obf
				$v_kuwtk['type'] = 'd'; // obf
			else // obf
				$v_kuwtk['type'] = 'f'; // obf
			$v_kuwtk['size'] = $v_fhond[7]; // obf
			$v_kuwtk['month'] = $v_fhond[1]; // obf
			$v_kuwtk['day'] = $v_fhond[2]; // obf
			$v_kuwtk['year'] = $v_fhond[3]; // obf
			$v_kuwtk['hour'] = $v_fhond[4]; // obf
			$v_kuwtk['minute'] = $v_fhond[5]; // obf
			$v_kuwtk['time'] = @mktime($v_fhond[4]+(strcasecmp($v_fhond[6],"PM")==0?12:0),$v_fhond[5],0,$v_fhond[1],$v_fhond[2],$v_fhond[3]); // obf
			$v_kuwtk['am/pm'] = $v_fhond[6]; // obf
			$v_kuwtk['name'] = $v_fhond[8]; // obf
		} else if (!$v_xoofi && $v_fhond=preg_split("/[ ]/",$v_nfazc,9,PREG_SPLIT_NO_EMPTY)) { // obf
			//echo $v_nfazc."\n"; // obf
			$v_nniyj=count($v_fhond); // obf
			if ($v_nniyj<8) return ''; // obf
			$v_kuwtk = array(); // obf
			$v_kuwtk['isdir'] = $v_fhond[0][0] === "d"; // obf
			$v_kuwtk['islink'] = $v_fhond[0][0] === "l"; // obf
			if ( $v_kuwtk['isdir'] ) // obf
				$v_kuwtk['type'] = 'd'; // obf
			elseif ( $v_kuwtk['islink'] ) // obf
				$v_kuwtk['type'] = 'l'; // obf
			else // obf
				$v_kuwtk['type'] = 'f'; // obf
			$v_kuwtk['perms'] = $v_fhond[0]; // obf
			$v_kuwtk['number'] = $v_fhond[1]; // obf
			$v_kuwtk['owner'] = $v_fhond[2]; // obf
			$v_kuwtk['group'] = $v_fhond[3]; // obf
			$v_kuwtk['size'] = $v_fhond[4]; // obf
			if ($v_nniyj==8) { // obf
				sscanf($v_fhond[5],"%d-%d-%d",$v_kuwtk['year'],$v_kuwtk['month'],$v_kuwtk['day']); // obf
				sscanf($v_fhond[6],"%d:%d",$v_kuwtk['hour'],$v_kuwtk['minute']); // obf
				$v_kuwtk['time'] = @mktime($v_kuwtk['hour'],$v_kuwtk['minute'],0,$v_kuwtk['month'],$v_kuwtk['day'],$v_kuwtk['year']); // obf
				$v_kuwtk['name'] = $v_fhond[7]; // obf
			} else { // obf
				$v_kuwtk['month'] = $v_fhond[5]; // obf
				$v_kuwtk['day'] = $v_fhond[6]; // obf
				if (preg_match("/([0-9]{2}):([0-9]{2})/",$v_fhond[7],$v_ulaxr)) { // obf
					$v_kuwtk['year'] = gmdate("Y"); // obf
					$v_kuwtk['hour'] = $v_ulaxr[1]; // obf
					$v_kuwtk['minute'] = $v_ulaxr[2]; // obf
				} else { // obf
					$v_kuwtk['year'] = $v_fhond[7]; // obf
					$v_kuwtk['hour'] = 0; // obf
					$v_kuwtk['minute'] = 0; // obf
				} // obf
				$v_kuwtk['time'] = strtotime(sprintf("%d %s %d %02d:%02d",$v_kuwtk['day'],$v_kuwtk['month'],$v_kuwtk['year'],$v_kuwtk['hour'],$v_kuwtk['minute'])); // obf
				$v_kuwtk['name'] = $v_fhond[8]; // obf
			} // obf
		} // obf

		return $v_kuwtk; // obf
	} // obf

	function SendMSG($v_sbsbe = "", $v_rignt=true) { // obf
		if ($v_bnbac->Verbose) { // obf
			echo $v_sbsbe.($v_rignt?CRLF:""); // obf
			flush(); // obf
		} // obf
		return TRUE; // obf
	} // obf

	function SetType($v_sbtbi=FTP_AUTOASCII) { // obf
		if(!in_array($v_sbtbi, $v_bnbac->AuthorizedTransferMode)) { // obf
			$v_bnbac->SendMSG("Wrong type"); // obf
			return FALSE; // obf
		} // obf
		$v_bnbac->_type=$v_sbtbi; // obf
		$v_bnbac->SendMSG("Transfer type: ".($v_bnbac->_type==FTP_BINARY?"binary":($v_bnbac->_type==FTP_ASCII?"ASCII":"auto ASCII") ) ); // obf
		return TRUE; // obf
	} // obf

	function _settype($v_sbtbi=FTP_ASCII) { // obf
		if($v_bnbac->_ready) { // obf
			if($v_sbtbi==FTP_BINARY) { // obf
				if($v_bnbac->_curtype!=FTP_BINARY) { // obf
					if(!$v_bnbac->_exec("TYPE I", "SetType")) return FALSE; // obf
					$v_bnbac->_curtype=FTP_BINARY; // obf
				} // obf
			} elseif($v_bnbac->_curtype!=FTP_ASCII) { // obf
				if(!$v_bnbac->_exec("TYPE A", "SetType")) return FALSE; // obf
				$v_bnbac->_curtype=FTP_ASCII; // obf
			} // obf
		} else return FALSE; // obf
		return TRUE; // obf
	} // obf

	function Passive($v_uwxgd=NULL) { // obf
		if(is_null($v_uwxgd)) $v_bnbac->_passive=!$v_bnbac->_passive; // obf
		else $v_bnbac->_passive=$v_uwxgd; // obf
		if(!$v_bnbac->_port_available and !$v_bnbac->_passive) { // obf
			$v_bnbac->SendMSG("Only passive connections available!"); // obf
			$v_bnbac->_passive=TRUE; // obf
			return FALSE; // obf
		} // obf
		$v_bnbac->SendMSG("Passive mode ".($v_bnbac->_passive?"on":"off")); // obf
		return TRUE; // obf
	} // obf

	function SetServer($v_qfkjq, $v_seltf=21, $v_xedom=true) { // obf
		if(!is_long($v_seltf)) { // obf
	        $v_bnbac->verbose=true; // obf
    	    $v_bnbac->SendMSG("Incorrect port syntax"); // obf
			return FALSE; // obf
		} else { // obf
			$v_gdohe=@gethostbyname($v_qfkjq); // obf
	        $v_jeiao=@gethostbyaddr($v_qfkjq); // obf
	        if(!$v_gdohe) $v_gdohe=$v_qfkjq; // obf
	        if(!$v_jeiao) $v_jeiao=$v_qfkjq; // obf
	        // Validate the IPAddress PHP4 returns -1 for invalid, PHP5 false // obf
	        // -1 === "255.255.255.255" which is the broadcast address which is also going to be invalid // obf
	        $v_nnyrv = ip2long($v_gdohe); // obf
			if ( ($v_nnyrv == false) || ($v_nnyrv === -1) ) { // obf
				$v_bnbac->SendMSG("Wrong host name/address \"".$v_qfkjq."\""); // obf
				return FALSE; // obf
			} // obf
	        $v_bnbac->_host=$v_gdohe; // obf
	        $v_bnbac->_fullhost=$v_jeiao; // obf
	        $v_bnbac->_port=$v_seltf; // obf
	        $v_bnbac->_dataport=$v_seltf-1; // obf
		} // obf
		$v_bnbac->SendMSG("Host \"".$v_bnbac->_fullhost."(".$v_bnbac->_host."):".$v_bnbac->_port."\""); // obf
		if($v_xedom){ // obf
			if($v_bnbac->_connected) { // obf
				$v_bnbac->SendMSG("Reconnecting"); // obf
				if(!$v_bnbac->quit(FTP_FORCE)) return FALSE; // obf
				if(!$v_bnbac->connect()) return FALSE; // obf
			} // obf
		} // obf
		return TRUE; // obf
	} // obf

	function SetUmask($v_oepap=0022) { // obf
		$v_bnbac->_umask=$v_oepap; // obf
		umask($v_bnbac->_umask); // obf
		$v_bnbac->SendMSG("UMASK 0".decoct($v_bnbac->_umask)); // obf
		return TRUE; // obf
	} // obf

	function SetTimeout($v_lrkcw=30) { // obf
		$v_bnbac->_timeout=$v_lrkcw; // obf
		$v_bnbac->SendMSG("Timeout ".$v_bnbac->_timeout); // obf
		if($v_bnbac->_connected) // obf
			if(!$v_bnbac->_settimeout($v_bnbac->_ftp_control_sock)) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function connect($v_rlkyy=NULL) { // obf
		if(!empty($v_rlkyy)) { // obf
			if(!$v_bnbac->SetServer($v_rlkyy)) return false; // obf
		} // obf
		if($v_bnbac->_ready) return true; // obf
	    $v_bnbac->SendMsg('Local OS : '.$v_bnbac->OS_FullName[$v_bnbac->OS_local]); // obf
		if(!($v_bnbac->_ftp_control_sock = $v_bnbac->_connect($v_bnbac->_host, $v_bnbac->_port))) { // obf
			$v_bnbac->SendMSG("Error : Cannot connect to remote host \"".$v_bnbac->_fullhost." :".$v_bnbac->_port."\""); // obf
			return FALSE; // obf
		} // obf
		$v_bnbac->SendMSG("Connected to remote host \"".$v_bnbac->_fullhost.":".$v_bnbac->_port."\". Waiting for greeting."); // obf
		do { // obf
			if(!$v_bnbac->_readmsg()) return FALSE; // obf
			if(!$v_bnbac->_checkCode()) return FALSE; // obf
			$v_bnbac->_lastaction=time(); // obf
		} while($v_bnbac->_code<200); // obf
		$v_bnbac->_ready=true; // obf
		$v_hjiqd=$v_bnbac->systype(); // obf
		if(!$v_hjiqd) $v_bnbac->SendMSG("Cannot detect remote OS"); // obf
		else { // obf
			if(preg_match("/win|dos|novell/i", $v_hjiqd[0])) $v_bnbac->OS_remote=FTP_OS_Windows; // obf
			elseif(preg_match("/os/i", $v_hjiqd[0])) $v_bnbac->OS_remote=FTP_OS_Mac; // obf
			elseif(preg_match("/(li|u)nix/i", $v_hjiqd[0])) $v_bnbac->OS_remote=FTP_OS_Unix; // obf
			else $v_bnbac->OS_remote=FTP_OS_Mac; // obf
			$v_bnbac->SendMSG("Remote OS: ".$v_bnbac->OS_FullName[$v_bnbac->OS_remote]); // obf
		} // obf
		if(!$v_bnbac->features()) $v_bnbac->SendMSG("Cannot get features list. All supported - disabled"); // obf
		else $v_bnbac->SendMSG("Supported features: ".implode(", ", array_keys($v_bnbac->_features))); // obf
		return TRUE; // obf
	} // obf

	function quit($v_nejsn=false) { // obf
		if($v_bnbac->_ready) { // obf
			if(!$v_bnbac->_exec("QUIT") and !$v_nejsn) return FALSE; // obf
			if(!$v_bnbac->_checkCode() and !$v_nejsn) return FALSE; // obf
			$v_bnbac->_ready=false; // obf
			$v_bnbac->SendMSG("Session finished"); // obf
		} // obf
		$v_bnbac->_quit(); // obf
		return TRUE; // obf
	} // obf

	function login($v_zluml=NULL, $v_gmloa=NULL) { // obf
		if(!is_null($v_zluml)) $v_bnbac->_login=$v_zluml; // obf
		else $v_bnbac->_login="anonymous"; // obf
		if(!is_null($v_gmloa)) $v_bnbac->_password=$v_gmloa; // obf
		else $v_bnbac->_password="anon@anon.com"; // obf
		if(!$v_bnbac->_exec("USER ".$v_bnbac->_login, "login")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		if($v_bnbac->_code!=230) { // obf
			if(!$v_bnbac->_exec((($v_bnbac->_code==331)?"PASS ":"ACCT ").$v_bnbac->_password, "login")) return FALSE; // obf
			if(!$v_bnbac->_checkCode()) return FALSE; // obf
		} // obf
		$v_bnbac->SendMSG("Authentication succeeded"); // obf
		if(empty($v_bnbac->_features)) { // obf
			if(!$v_bnbac->features()) $v_bnbac->SendMSG("Cannot get features list. All supported - disabled"); // obf
			else $v_bnbac->SendMSG("Supported features: ".implode(", ", array_keys($v_bnbac->_features))); // obf
		} // obf
		return TRUE; // obf
	} // obf

	function pwd() { // obf
		if(!$v_bnbac->_exec("PWD", "pwd")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return __fn_37772("/^[0-9]{3} \"(.+)\".*$/s", "\\1", $v_bnbac->_message); // obf
	} // obf

	function cdup() { // obf
		if(!$v_bnbac->_exec("CDUP", "cdup")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return true; // obf
	} // obf

	function chdir($v_khmgk) { // obf
		if(!$v_bnbac->_exec("CWD ".$v_khmgk, "chdir")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function rmdir($v_khmgk) { // obf
		if(!$v_bnbac->_exec("RMD ".$v_khmgk, "rmdir")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function mkdir($v_khmgk) { // obf
		if(!$v_bnbac->_exec("MKD ".$v_khmgk, "mkdir")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function rename($v_bunnv, $v_eorub) { // obf
		if(!$v_bnbac->_exec("RNFR ".$v_bunnv, "rename")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		if($v_bnbac->_code==350) { // obf
			if(!$v_bnbac->_exec("RNTO ".$v_eorub, "rename")) return FALSE; // obf
			if(!$v_bnbac->_checkCode()) return FALSE; // obf
		} else return FALSE; // obf
		return TRUE; // obf
	} // obf

	function filesize($v_khmgk) { // obf
		if(!isset($v_bnbac->_features["SIZE"])) { // obf
			$v_bnbac->PushError("filesize", "not supported by server"); // obf
			return FALSE; // obf
		} // obf
		if(!$v_bnbac->_exec("SIZE ".$v_khmgk, "filesize")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return __fn_37772("/^[0-9]{3} ([0-9]+).*$/s", "\\1", $v_bnbac->_message); // obf
	} // obf

	function abort() { // obf
		if(!$v_bnbac->_exec("ABOR", "abort")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) { // obf
			if($v_bnbac->_code!=426) return FALSE; // obf
			if(!$v_bnbac->_readmsg("abort")) return FALSE; // obf
			if(!$v_bnbac->_checkCode()) return FALSE; // obf
		} // obf
		return true; // obf
	} // obf

	function mdtm($v_khmgk) { // obf
		if(!isset($v_bnbac->_features["MDTM"])) { // obf
			$v_bnbac->PushError("mdtm", "not supported by server"); // obf
			return FALSE; // obf
		} // obf
		if(!$v_bnbac->_exec("MDTM ".$v_khmgk, "mdtm")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		$v_eareu = __fn_37772("/^[0-9]{3} ([0-9]+).*$/s", "\\1", $v_bnbac->_message); // obf
		$v_ykxnm = sscanf($v_eareu, "%4d%2d%2d%2d%2d%2d"); // obf
		$v_yufxm = mktime($v_ykxnm[3], $v_ykxnm[4], $v_ykxnm[5], $v_ykxnm[1], $v_ykxnm[2], $v_ykxnm[0]); // obf
		return $v_yufxm; // obf
	} // obf

	function systype() { // obf
		if(!$v_bnbac->_exec("SYST", "systype")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		$v_yxsyz = explode(" ", $v_bnbac->_message); // obf
		return array($v_yxsyz[1], $v_yxsyz[3]); // obf
	} // obf

	function delete($v_khmgk) { // obf
		if(!$v_bnbac->_exec("DELE ".$v_khmgk, "delete")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function site($v_nlbgd, $v_ytruk="site") { // obf
		if(!$v_bnbac->_exec("SITE ".$v_nlbgd, $v_ytruk)) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function chmod($v_khmgk, $v_sbtbi) { // obf
		if(!$v_bnbac->site( sprintf('CHMOD %o %s', $v_sbtbi, $v_khmgk), "chmod")) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function restore($v_bunnv) { // obf
		if(!isset($v_bnbac->_features["REST"])) { // obf
			$v_bnbac->PushError("restore", "not supported by server"); // obf
			return FALSE; // obf
		} // obf
		if($v_bnbac->_curtype!=FTP_BINARY) { // obf
			$v_bnbac->PushError("restore", "cannot restore in ASCII mode"); // obf
			return FALSE; // obf
		} // obf
		if(!$v_bnbac->_exec("REST ".$v_bunnv, "restore")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return TRUE; // obf
	} // obf

	function features() { // obf
		if(!$v_bnbac->_exec("FEAT", "features")) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		$v_sbomq=preg_split("/[".CRLF."]+/", __fn_37772("/[0-9]{3}[ -].*[".CRLF."]+/", "", $v_bnbac->_message), -1, PREG_SPLIT_NO_EMPTY); // obf
		$v_bnbac->_features=array(); // obf
		foreach($v_sbomq as $v_ysbzk=>$v_jetsy) { // obf
			$v_jetsy=explode(" ", trim($v_jetsy)); // obf
			$v_bnbac->_features[array_shift($v_jetsy)]=$v_jetsy; // obf
		} // obf
		return true; // obf
	} // obf

	function rawlist($v_khmgk="", $v_nafne="") { // obf
		return $v_bnbac->_list(($v_nafne?" ".$v_nafne:"").($v_khmgk?" ".$v_khmgk:""), "LIST", "rawlist"); // obf
	} // obf

	function nlist($v_khmgk="", $v_nafne="") { // obf
		return $v_bnbac->_list(($v_nafne?" ".$v_nafne:"").($v_khmgk?" ".$v_khmgk:""), "NLST", "nlist"); // obf
	} // obf

	function is_exists($v_khmgk) { // obf
		return $v_bnbac->file_exists($v_khmgk); // obf
	} // obf

	function file_exists($v_khmgk) { // obf
		$v_rfbnc=true; // obf
		if(!$v_bnbac->_exec("RNFR ".$v_khmgk, "rename")) $v_rfbnc=FALSE; // obf
		else { // obf
			if(!$v_bnbac->_checkCode()) $v_rfbnc=FALSE; // obf
			$v_bnbac->abort(); // obf
		} // obf
		if($v_rfbnc) $v_bnbac->SendMSG("Remote file ".$v_khmgk." exists"); // obf
		else $v_bnbac->SendMSG("Remote file ".$v_khmgk." does not exist"); // obf
		return $v_rfbnc; // obf
	} // obf

	function fget($v_rdejf, $v_rvymt, $v_xency=0) { // obf
		if($v_bnbac->_can_restore and $v_xency!=0) fseek($v_rdejf, $v_xency); // obf
		$v_kbscf=pathinfo($v_rvymt); // obf
		if($v_bnbac->_type==FTP_ASCII or ($v_bnbac->_type==FTP_AUTOASCII and in_array(strtoupper($v_kbscf["extension"]), $v_bnbac->AutoAsciiExt))) $v_sbtbi=FTP_ASCII; // obf
		else $v_sbtbi=FTP_BINARY; // obf
		if(!$v_bnbac->_data_prepare($v_sbtbi)) { // obf
			return FALSE; // obf
		} // obf
		if($v_bnbac->_can_restore and $v_xency!=0) $v_bnbac->restore($v_xency); // obf
		if(!$v_bnbac->_exec("RETR ".$v_rvymt, "get")) { // obf
			$v_bnbac->_data_close(); // obf
			return FALSE; // obf
		} // obf
		if(!$v_bnbac->_checkCode()) { // obf
			$v_bnbac->_data_close(); // obf
			return FALSE; // obf
		} // obf
		$v_drogr=$v_bnbac->_data_read($v_sbtbi, $v_rdejf); // obf
		$v_bnbac->_data_close(); // obf
		if(!$v_bnbac->_readmsg()) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return $v_drogr; // obf
	} // obf

	function get($v_rvymt, $v_aelfy=NULL, $v_xency=0) { // obf
		if(is_null($v_aelfy)) $v_aelfy=$v_rvymt; // obf
		if (@file_exists($v_aelfy)) $v_bnbac->SendMSG("Warning : local file will be overwritten"); // obf
		$v_rdejf = @fopen($v_aelfy, "w"); // obf
		if (!$v_rdejf) { // obf
			$v_bnbac->PushError("get","cannot open local file", "Cannot create \"".$v_aelfy."\""); // obf
			return FALSE; // obf
		} // obf
		if($v_bnbac->_can_restore and $v_xency!=0) fseek($v_rdejf, $v_xency); // obf
		$v_kbscf=pathinfo($v_rvymt); // obf
		if($v_bnbac->_type==FTP_ASCII or ($v_bnbac->_type==FTP_AUTOASCII and in_array(strtoupper($v_kbscf["extension"]), $v_bnbac->AutoAsciiExt))) $v_sbtbi=FTP_ASCII; // obf
		else $v_sbtbi=FTP_BINARY; // obf
		if(!$v_bnbac->_data_prepare($v_sbtbi)) { // obf
			fclose($v_rdejf); // obf
			return FALSE; // obf
		} // obf
		if($v_bnbac->_can_restore and $v_xency!=0) $v_bnbac->restore($v_xency); // obf
		if(!$v_bnbac->_exec("RETR ".$v_rvymt, "get")) { // obf
			$v_bnbac->_data_close(); // obf
			fclose($v_rdejf); // obf
			return FALSE; // obf
		} // obf
		if(!$v_bnbac->_checkCode()) { // obf
			$v_bnbac->_data_close(); // obf
			fclose($v_rdejf); // obf
			return FALSE; // obf
		} // obf
		$v_drogr=$v_bnbac->_data_read($v_sbtbi, $v_rdejf); // obf
		fclose($v_rdejf); // obf
		$v_bnbac->_data_close(); // obf
		if(!$v_bnbac->_readmsg()) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return $v_drogr; // obf
	} // obf

	function fput($v_rvymt, $v_rdejf, $v_xency=0) { // obf
		if($v_bnbac->_can_restore and $v_xency!=0) fseek($v_rdejf, $v_xency); // obf
		$v_kbscf=pathinfo($v_rvymt); // obf
		if($v_bnbac->_type==FTP_ASCII or ($v_bnbac->_type==FTP_AUTOASCII and in_array(strtoupper($v_kbscf["extension"]), $v_bnbac->AutoAsciiExt))) $v_sbtbi=FTP_ASCII; // obf
		else $v_sbtbi=FTP_BINARY; // obf
		if(!$v_bnbac->_data_prepare($v_sbtbi)) { // obf
			return FALSE; // obf
		} // obf
		if($v_bnbac->_can_restore and $v_xency!=0) $v_bnbac->restore($v_xency); // obf
		if(!$v_bnbac->_exec("STOR ".$v_rvymt, "put")) { // obf
			$v_bnbac->_data_close(); // obf
			return FALSE; // obf
		} // obf
		if(!$v_bnbac->_checkCode()) { // obf
			$v_bnbac->_data_close(); // obf
			return FALSE; // obf
		} // obf
		$v_izkpu=$v_bnbac->_data_write($v_sbtbi, $v_rdejf); // obf
		$v_bnbac->_data_close(); // obf
		if(!$v_bnbac->_readmsg()) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return $v_izkpu; // obf
	} // obf

	function put($v_aelfy, $v_rvymt=NULL, $v_xency=0) { // obf
		if(is_null($v_rvymt)) $v_rvymt=$v_aelfy; // obf
		if (!file_exists($v_aelfy)) { // obf
			$v_bnbac->PushError("put","cannot open local file", "No such file or directory \"".$v_aelfy."\""); // obf
			return FALSE; // obf
		} // obf
		$v_rdejf = @fopen($v_aelfy, "r"); // obf

		if (!$v_rdejf) { // obf
			$v_bnbac->PushError("put","cannot open local file", "Cannot read file \"".$v_aelfy."\""); // obf
			return FALSE; // obf
		} // obf
		if($v_bnbac->_can_restore and $v_xency!=0) fseek($v_rdejf, $v_xency); // obf
		$v_kbscf=pathinfo($v_aelfy); // obf
		if($v_bnbac->_type==FTP_ASCII or ($v_bnbac->_type==FTP_AUTOASCII and in_array(strtoupper($v_kbscf["extension"]), $v_bnbac->AutoAsciiExt))) $v_sbtbi=FTP_ASCII; // obf
		else $v_sbtbi=FTP_BINARY; // obf
		if(!$v_bnbac->_data_prepare($v_sbtbi)) { // obf
			fclose($v_rdejf); // obf
			return FALSE; // obf
		} // obf
		if($v_bnbac->_can_restore and $v_xency!=0) $v_bnbac->restore($v_xency); // obf
		if(!$v_bnbac->_exec("STOR ".$v_rvymt, "put")) { // obf
			$v_bnbac->_data_close(); // obf
			fclose($v_rdejf); // obf
			return FALSE; // obf
		} // obf
		if(!$v_bnbac->_checkCode()) { // obf
			$v_bnbac->_data_close(); // obf
			fclose($v_rdejf); // obf
			return FALSE; // obf
		} // obf
		$v_izkpu=$v_bnbac->_data_write($v_sbtbi, $v_rdejf); // obf
		fclose($v_rdejf); // obf
		$v_bnbac->_data_close(); // obf
		if(!$v_bnbac->_readmsg()) return FALSE; // obf
		if(!$v_bnbac->_checkCode()) return FALSE; // obf
		return $v_izkpu; // obf
	} // obf

	function mput($v_ugmlk=".", $v_opijk=NULL, $v_aingj=false) { // obf
		$v_ugmlk=realpath($v_ugmlk); // obf
		if(!@file_exists($v_ugmlk)) { // obf
			$v_bnbac->PushError("mput","cannot open local folder", "Cannot stat folder \"".$v_ugmlk."\""); // obf
			return FALSE; // obf
		} // obf
		if(!is_dir($v_ugmlk)) return $v_bnbac->put($v_ugmlk, $v_opijk); // obf
		if(empty($v_opijk)) $v_opijk="."; // obf
		elseif(!$v_bnbac->file_exists($v_opijk) and !$v_bnbac->mkdir($v_opijk)) return FALSE; // obf
		if($v_uvkou = opendir($v_ugmlk)) { // obf
			$v_pcubv=array(); // obf
			while (false !== ($v_uskwi = readdir($v_uvkou))) { // obf
				if ($v_uskwi != "." && $v_uskwi != "..") $v_pcubv[]=$v_uskwi; // obf
			} // obf
			closedir($v_uvkou); // obf
		} else { // obf
			$v_bnbac->PushError("mput","cannot open local folder", "Cannot read folder \"".$v_ugmlk."\""); // obf
			return FALSE; // obf
		} // obf
		if(empty($v_pcubv)) return TRUE; // obf
		$v_izkpu=true; // obf
		foreach($v_pcubv as $v_qhqbk) { // obf
			if(is_dir($v_ugmlk."/".$v_qhqbk)) $v_ysyjk=$v_bnbac->mput($v_ugmlk."/".$v_qhqbk, $v_opijk."/".$v_qhqbk); // obf
			else $v_ysyjk=$v_bnbac->put($v_ugmlk."/".$v_qhqbk, $v_opijk."/".$v_qhqbk); // obf
			if(!$v_ysyjk) { // obf
				$v_izkpu=FALSE; // obf
				if(!$v_aingj) break; // obf
			} // obf
		} // obf
		return $v_izkpu; // obf

	} // obf

	function mget($v_opijk, $v_ugmlk=".", $v_aingj=false) { // obf
		$v_pcubv=$v_bnbac->rawlist($v_opijk, "-lA"); // obf
		if($v_pcubv===false) { // obf
			$v_bnbac->PushError("mget","cannot read remote folder list", "Cannot read remote folder \"".$v_opijk."\" contents"); // obf
			return FALSE; // obf
		} // obf
		if(empty($v_pcubv)) return true; // obf
		if(!@file_exists($v_ugmlk)) { // obf
			if(!@mkdir($v_ugmlk)) { // obf
				$v_bnbac->PushError("mget","cannot create local folder", "Cannot create folder \"".$v_ugmlk."\""); // obf
				return FALSE; // obf
			} // obf
		} // obf
		foreach($v_pcubv as $v_ysbzk=>$v_jetsy) { // obf
			$v_pcubv[$v_ysbzk]=$v_bnbac->parselisting($v_jetsy); // obf
			if( ! $v_pcubv[$v_ysbzk] or $v_pcubv[$v_ysbzk]["name"]=="." or $v_pcubv[$v_ysbzk]["name"]=="..") unset($v_pcubv[$v_ysbzk]); // obf
		} // obf
		$v_izkpu=true; // obf
		foreach($v_pcubv as $v_qhqbk) { // obf
			if($v_qhqbk["type"]=="d") { // obf
				if(!$v_bnbac->mget($v_opijk."/".$v_qhqbk["name"], $v_ugmlk."/".$v_qhqbk["name"], $v_aingj)) { // obf
					$v_bnbac->PushError("mget", "cannot copy folder", "Cannot copy remote folder \"".$v_opijk."/".$v_qhqbk["name"]."\" to local \"".$v_ugmlk."/".$v_qhqbk["name"]."\""); // obf
					$v_izkpu=false; // obf
					if(!$v_aingj) break; // obf
				} // obf
			} else { // obf
				if(!$v_bnbac->get($v_opijk."/".$v_qhqbk["name"], $v_ugmlk."/".$v_qhqbk["name"])) { // obf
					$v_bnbac->PushError("mget", "cannot copy file", "Cannot copy remote file \"".$v_opijk."/".$v_qhqbk["name"]."\" to local \"".$v_ugmlk."/".$v_qhqbk["name"]."\""); // obf
					$v_izkpu=false; // obf
					if(!$v_aingj) break; // obf
				} // obf
			} // obf
			@chmod($v_ugmlk."/".$v_qhqbk["name"], $v_qhqbk["perms"]); // obf
			$v_ysyjk=strtotime($v_qhqbk["date"]); // obf
			if($v_ysyjk!==-1 and $v_ysyjk!==false) @touch($v_ugmlk."/".$v_qhqbk["name"], $v_ysyjk); // obf
		} // obf
		return $v_izkpu; // obf
	} // obf

	function mdel($v_opijk, $v_aingj=false) { // obf
		$v_pcubv=$v_bnbac->rawlist($v_opijk, "-la"); // obf
		if($v_pcubv===false) { // obf
			$v_bnbac->PushError("mdel","cannot read remote folder list", "Cannot read remote folder \"".$v_opijk."\" contents"); // obf
			return false; // obf
		} // obf

		foreach($v_pcubv as $v_ysbzk=>$v_jetsy) { // obf
			$v_pcubv[$v_ysbzk]=$v_bnbac->parselisting($v_jetsy); // obf
			if( ! $v_pcubv[$v_ysbzk] or $v_pcubv[$v_ysbzk]["name"]=="." or $v_pcubv[$v_ysbzk]["name"]=="..") unset($v_pcubv[$v_ysbzk]); // obf
		} // obf
		$v_izkpu=true; // obf

		foreach($v_pcubv as $v_qhqbk) { // obf
			if ( empty($v_qhqbk) ) // obf
				continue; // obf

			if($v_qhqbk["type"]=="d") { // obf
				if(!$v_bnbac->mdel($v_opijk."/".$v_qhqbk["name"], $v_aingj)) { // obf
					$v_izkpu=false; // obf
					if(!$v_aingj) break; // obf
				} // obf
			} else { // obf
				if (!$v_bnbac->delete($v_opijk."/".$v_qhqbk["name"])) { // obf
					$v_bnbac->PushError("mdel", "cannot delete file", "Cannot delete remote file \"".$v_opijk."/".$v_qhqbk["name"]."\""); // obf
					$v_izkpu=false; // obf
					if(!$v_aingj) break; // obf
				} // obf
			} // obf
		} // obf

		if(!$v_bnbac->rmdir($v_opijk)) { // obf
			$v_bnbac->PushError("mdel", "cannot delete folder", "Cannot delete remote folder \"".$v_opijk."/".$v_qhqbk["name"]."\""); // obf
			$v_izkpu=false; // obf
		} // obf
		return $v_izkpu; // obf
	} // obf

	function mmkdir($v_yqogf, $v_sbtbi = 0777) { // obf
		if(empty($v_yqogf)) return FALSE; // obf
		if($v_bnbac->is_exists($v_yqogf) or $v_yqogf == "/" ) return TRUE; // obf
		if(!$v_bnbac->mmkdir(dirname($v_yqogf), $v_sbtbi)) return false; // obf
		$v_bxenp=$v_bnbac->mkdir($v_yqogf, $v_sbtbi); // obf
		$v_bnbac->chmod($v_yqogf,$v_sbtbi); // obf
		return $v_bxenp; // obf
	} // obf

	function glob($v_rbrpx, $v_uvkou=NULL) { // obf
		$v_kemll=$v_wwkge=null; // obf
		if(PHP_OS=='WIN32') $v_gvvpi='\\'; // obf
		else $v_gvvpi='/'; // obf
		$v_qwmuv=strrpos($v_rbrpx,$v_gvvpi); // obf
		if(!($v_qwmuv===false)) { // obf
			$v_kemll=substr($v_rbrpx,0,-$v_qwmuv-1); // obf
			$v_rbrpx=substr($v_rbrpx,$v_qwmuv); // obf
		} else $v_kemll=getcwd(); // obf
		if(is_array($v_uvkou) and !empty($v_uvkou)) { // obf
			foreach($v_uvkou as $v_yqogf) { // obf
				if($v_bnbac->glob_pattern_match($v_rbrpx,$v_yqogf)) // obf
				$v_wwkge[]=$v_yqogf; // obf
			} // obf
		} else { // obf
			$v_uvkou=@opendir($v_kemll); // obf
			if($v_uvkou===false) return false; // obf
			while($v_yqogf=readdir($v_uvkou)) { // obf
				if($v_bnbac->glob_pattern_match($v_rbrpx,$v_yqogf)) // obf
				$v_wwkge[]=$v_yqogf; // obf
			} // obf
			closedir($v_uvkou); // obf
		} // obf
		if(is_array($v_wwkge)) return $v_wwkge; // obf
		return false; // obf
	} // obf

	function glob_pattern_match($v_rbrpx,$v_zzocc) { // obf
		$v_drogr=null; // obf
		$v_ojbxc=explode(';',$v_rbrpx); // obf
		foreach($v_ojbxc as $v_rbrpx) { // obf
			$v_kfvrf=array('$','^','.','{','}','(',')','[',']','|'); // obf
			while(str_contains($v_rbrpx,'**')) // obf
				$v_rbrpx=str_replace('**','*',$v_rbrpx); // obf
			foreach($v_kfvrf as $v_ipmfb) // obf
				$v_rbrpx=str_replace($v_ipmfb,"\\$v_ipmfb",$v_rbrpx); // obf
			$v_rbrpx=str_replace('?*','*', // obf
				str_replace('*?','*', // obf
					str_replace('*',".*", // obf
						str_replace('?','.{1,1}',$v_rbrpx)))); // obf
			$v_drogr[]=$v_rbrpx; // obf
		} // obf
		if(count($v_drogr)==1) return($v_bnbac->glob_regexp("^$v_drogr[0]$",$v_zzocc)); // obf
		else { // obf
			foreach($v_drogr as $v_hzuui) // obf
				// TODO: This should probably be glob_regexp(), but needs tests. // obf
				if($v_bnbac->my_regexp("^$v_hzuui$",$v_zzocc)) return true; // obf
		} // obf
		return false; // obf
	} // obf

	function glob_regexp($v_rbrpx,$v_zzocc) { // obf
		$v_tzfvm=(PHP_OS!='WIN32'); // obf
		return ($v_tzfvm? // obf
			preg_match( '/' . preg_quote( $v_rbrpx, '/' ) . '/', $v_zzocc ) : // obf
			preg_match( '/' . preg_quote( $v_rbrpx, '/' ) . '/i', $v_zzocc ) // obf
		); // obf
	} // obf

	function dirlist($v_opijk) { // obf
		$v_pcubv=$v_bnbac->rawlist($v_opijk, "-la"); // obf
		if($v_pcubv===false) { // obf
			$v_bnbac->PushError("dirlist","cannot read remote folder list", "Cannot read remote folder \"".$v_opijk."\" contents"); // obf
			return false; // obf
		} // obf

		$v_qugyd = array(); // obf
		foreach($v_pcubv as $v_ysbzk=>$v_jetsy) { // obf
			$v_fjawk=$v_bnbac->parselisting($v_jetsy); // obf
			if ( empty($v_fjawk) ) // obf
				continue; // obf

			if($v_fjawk["name"]=="." or $v_fjawk["name"]=="..") // obf
				continue; // obf

			$v_qugyd[$v_fjawk['name']] = $v_fjawk; // obf
		} // obf

		return $v_qugyd; // obf
	} // obf
// <!-- --------------------------------------------------------------------------------------- --> // obf
// <!--       Private functions                                                                 --> // obf
// <!-- --------------------------------------------------------------------------------------- --> // obf
	function _checkCode() { // obf
		return ($v_bnbac->_code<400 and $v_bnbac->_code>0); // obf
	} // obf

	function _list($v_nafne="", $v_isdol="LIST", $v_ytruk="_list") { // obf
		if(!$v_bnbac->_data_prepare()) return false; // obf
		if(!$v_bnbac->_exec($v_isdol.$v_nafne, $v_ytruk)) { // obf
			$v_bnbac->_data_close(); // obf
			return FALSE; // obf
		} // obf
		if(!$v_bnbac->_checkCode()) { // obf
			$v_bnbac->_data_close(); // obf
			return FALSE; // obf
		} // obf
		$v_drogr=""; // obf
		if($v_bnbac->_code<200) { // obf
			$v_drogr=$v_bnbac->_data_read(); // obf
			$v_bnbac->_data_close(); // obf
			if(!$v_bnbac->_readmsg()) return FALSE; // obf
			if(!$v_bnbac->_checkCode()) return FALSE; // obf
			if($v_drogr === FALSE ) return FALSE; // obf
			$v_drogr=preg_split("/[".CRLF."]+/", $v_drogr, -1, PREG_SPLIT_NO_EMPTY); // obf
//			$v_bnbac->SendMSG(implode($v_bnbac->_eol_code[$v_bnbac->OS_local], $v_drogr)); // obf
		} // obf
		return $v_drogr; // obf
	} // obf

// <!-- --------------------------------------------------------------------------------------- --> // obf
// <!-- Partie : gestion des erreurs                                                            --> // obf
// <!-- --------------------------------------------------------------------------------------- --> // obf
// Gnre une erreur pour traitement externe  la classe // obf
	function PushError($v_vrclw,$v_thdfp,$v_bnukq=false){ // obf
		$v_psucd=array(); // obf
		$v_psucd['time']=time(); // obf
		$v_psucd['fctname']=$v_vrclw; // obf
		$v_psucd['msg']=$v_thdfp; // obf
		$v_psucd['desc']=$v_bnukq; // obf
		if($v_bnukq) $v_jfyyt=' ('.$v_bnukq.')'; else $v_jfyyt=''; // obf
		$v_bnbac->SendMSG($v_vrclw.': '.$v_thdfp.$v_jfyyt); // obf
		return(array_push($v_bnbac->_error_array,$v_psucd)); // obf
	} // obf

// Rcupre une erreur externe // obf
	function PopError(){ // obf
		if(count($v_bnbac->_error_array)) return(array_pop($v_bnbac->_error_array)); // obf
			else return(false); // obf
	} // obf
} // obf

$v_pvohy = extension_loaded( 'sockets' ); // obf
if ( ! $v_pvohy && function_exists( 'dl' ) && is_callable( 'dl' ) ) { // obf
	$v_tekgh = ( PHP_SHLIB_SUFFIX == 'dll' ) ? 'php_' : ''; // obf
	@dl( $v_tekgh . 'sockets.' . PHP_SHLIB_SUFFIX ); // phpcs:ignore PHPCompatibility.FunctionUse.RemovedFunctions.dlDeprecated // obf
	$v_pvohy = extension_loaded( 'sockets' ); // obf
} // obf

require_once __DIR__ . "/class-ftp-" . ( $v_pvohy ? "sockets" : "pure" ) . ".php"; // obf

if ( $v_pvohy ) { // obf
	class ftp extends ftp_sockets {} // obf
} else { // obf
	class ftp extends ftp_pure {} // obf
} // obf