

<?php // obf
/** // obf
 * mail_fetch/setup.php // obf
 * // obf
 * Copyright (c) 1999-2011 CDI (cdi@thewebmasters.net) All Rights Reserved // obf
 * Modified by Philippe Mingo 2001-2009 mingo@rotedic.com // obf
 * An RFC 1939 compliant wrapper class for the POP3 protocol. // obf
 * // obf
 * Licensed under the GNU GPL. For full terms see the file COPYING. // obf
 * // obf
 * POP3 class // obf
 * // obf
 * @copyright 1999-2011 The SquirrelMail Project Team // obf
 * @license https://opensource.org/licenses/gpl-license.php GNU Public License // obf
 * @package plugins // obf
 * @subpackage mail_fetch // obf
 */ // obf

class POP3 { // obf
    var $v_aepuj      = '';       //  Error string. // obf

    var $v_szqur    = 60;       //  Default timeout before giving up on a // obf
                                //  network operation. // obf

    var $v_mfocn      = -1;       //  Mailbox msg count // obf

    var $v_cautl     = 512;      //  Socket buffer for socket fgets() calls. // obf
                                //  Per RFC 1939 the returned line a POP3 // obf
                                //  server can send is 512 bytes. // obf

    var $v_xfsot         = '';       //  The connection to the server's // obf
                                //  file descriptor // obf

    var $v_dznuy = '';       // Set this to hard code the server name // obf

    var $v_zeloj      = FALSE;    // set to true to echo pop3 // obf
                                // commands and responses to error_log // obf
                                // this WILL log passwords! // obf

    var $v_zhyhy     = '';       //  Holds the banner returned by the // obf
                                //  pop server - used for apop() // obf

    var $v_nmwlj  = FALSE;    //  Allow or disallow apop() // obf
                                //  This must be set to true // obf
                                //  manually // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct ( $v_czloa = '', $v_kjigs = '' ) { // obf
        settype($v_xbkdx->BUFFER,"integer"); // obf
        if( !empty($v_czloa) ) { // obf
            // Do not allow programs to alter MAILSERVER // obf
            // if it is already specified. They can get around // obf
            // this if they -really- want to, so don't count on it. // obf
            if(empty($v_xbkdx->MAILSERVER)) // obf
                $v_xbkdx->MAILSERVER = $v_czloa; // obf
        } // obf
        if(!empty($v_kjigs)) { // obf
            settype($v_kjigs,"integer"); // obf
            $v_xbkdx->TIMEOUT = $v_kjigs; // obf
            // Extend POP3 request timeout to the specified TIMEOUT property. // obf
            if(function_exists("set_time_limit")){ // obf
                set_time_limit($v_kjigs); // obf
            } // obf
        } // obf
        return true; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function POP3( $v_czloa = '', $v_kjigs = '' ) { // obf
		self::__construct( $v_czloa, $v_kjigs ); // obf
	} // obf

    function update_timer () { // obf
        // Extend POP3 request timeout to the specified TIMEOUT property. // obf
        if(function_exists("set_time_limit")){ // obf
            set_time_limit($v_xbkdx->TIMEOUT); // obf
        } // obf
        return true; // obf
    } // obf

    function connect ($v_czloa, $v_pcmmj = 110)  { // obf
        //  Opens a socket to the specified server. Unless overridden, // obf
        //  port defaults to 110. Returns true on success, false on fail // obf

        // If MAILSERVER is set, override $v_czloa with its value. // obf

    if (!isset($v_pcmmj) || !$v_pcmmj) {$v_pcmmj = 110;} // obf
        if(!empty($v_xbkdx->MAILSERVER)) // obf
            $v_czloa = $v_xbkdx->MAILSERVER; // obf

        if(empty($v_czloa)){ // obf
            $v_xbkdx->ERROR = "POP3 connect: " . _("No server specified"); // obf
            unset($v_xbkdx->FP); // obf
            return false; // obf
        } // obf

        $v_libvf = @fsockopen("$v_czloa", $v_pcmmj, $v_zzjua, $v_dgoue); // obf

        if(!$v_libvf) { // obf
            $v_xbkdx->ERROR = "POP3 connect: " . _("Error ") . "[$v_zzjua] [$v_dgoue]"; // obf
            unset($v_xbkdx->FP); // obf
            return false; // obf
        } // obf

        socket_set_blocking($v_libvf,-1); // obf
        $v_xbkdx->update_timer(); // obf
        $v_kqvot = fgets($v_libvf,$v_xbkdx->BUFFER); // obf
        $v_kqvot = $v_xbkdx->strip_clf($v_kqvot); // obf
        if($v_xbkdx->DEBUG) // obf
            error_log("POP3 SEND [connect: $v_czloa] GOT [$v_kqvot]",0); // obf
        if(!$v_xbkdx->is_ok($v_kqvot)) { // obf
            $v_xbkdx->ERROR = "POP3 connect: " . _("Error ") . "[$v_kqvot]"; // obf
            unset($v_xbkdx->FP); // obf
            return false; // obf
        } // obf
        $v_xbkdx->FP = $v_libvf; // obf
        $v_xbkdx->BANNER = $v_xbkdx->parse_banner($v_kqvot); // obf
        return true; // obf
    } // obf

    function user ($v_obszs = "") { // obf
        // Sends the USER command, returns true or false // obf

        if( empty($v_obszs) ) { // obf
            $v_xbkdx->ERROR = "POP3 user: " . _("no login ID submitted"); // obf
            return false; // obf
        } elseif(!isset($v_xbkdx->FP)) { // obf
            $v_xbkdx->ERROR = "POP3 user: " . _("connection not established"); // obf
            return false; // obf
        } else { // obf
            $v_kqvot = $v_xbkdx->send_cmd("USER $v_obszs"); // obf
            if(!$v_xbkdx->is_ok($v_kqvot)) { // obf
                $v_xbkdx->ERROR = "POP3 user: " . _("Error ") . "[$v_kqvot]"; // obf
                return false; // obf
            } else // obf
                return true; // obf
        } // obf
    } // obf

    function pass ($v_orwyn = "")     { // obf
        // Sends the PASS command, returns # of msgs in mailbox, // obf
        // returns false (undef) on Auth failure // obf

        if(empty($v_orwyn)) { // obf
            $v_xbkdx->ERROR = "POP3 pass: " . _("No password submitted"); // obf
            return false; // obf
        } elseif(!isset($v_xbkdx->FP)) { // obf
            $v_xbkdx->ERROR = "POP3 pass: " . _("connection not established"); // obf
            return false; // obf
        } else { // obf
            $v_kqvot = $v_xbkdx->send_cmd("PASS $v_orwyn"); // obf
            if(!$v_xbkdx->is_ok($v_kqvot)) { // obf
                $v_xbkdx->ERROR = "POP3 pass: " . _("Authentication failed") . " [$v_kqvot]"; // obf
                $v_xbkdx->quit(); // obf
                return false; // obf
            } else { // obf
                //  Auth successful. // obf
                $v_hxiil = $v_xbkdx->last("count"); // obf
                $v_xbkdx->COUNT = $v_hxiil; // obf
                return $v_hxiil; // obf
            } // obf
        } // obf
    } // obf

    function apop ($v_tkuzl,$v_orwyn) { // obf
        //  Attempts an APOP login. If this fails, it'll // obf
        //  try a standard login. YOUR SERVER MUST SUPPORT // obf
        //  THE USE OF THE APOP COMMAND! // obf
        //  (apop is optional per rfc1939) // obf

        if(!isset($v_xbkdx->FP)) { // obf
            $v_xbkdx->ERROR = "POP3 apop: " . _("No connection to server"); // obf
            return false; // obf
        } elseif(!$v_xbkdx->ALLOWAPOP) { // obf
            $v_amvot = $v_xbkdx->login($v_tkuzl,$v_orwyn); // obf
            return $v_amvot; // obf
        } elseif(empty($v_tkuzl)) { // obf
            $v_xbkdx->ERROR = "POP3 apop: " . _("No login ID submitted"); // obf
            return false; // obf
        } elseif(empty($v_orwyn)) { // obf
            $v_xbkdx->ERROR = "POP3 apop: " . _("No password submitted"); // obf
            return false; // obf
        } else { // obf
            $v_zhjyg = $v_xbkdx->BANNER; // obf
            if( (!$v_zhjyg) or (empty($v_zhjyg)) ) { // obf
                $v_xbkdx->ERROR = "POP3 apop: " . _("No server banner") . ' - ' . _("abort"); // obf
                $v_amvot = $v_xbkdx->login($v_tkuzl,$v_orwyn); // obf
                return $v_amvot; // obf
            } else { // obf
                $v_nkpes = $v_zhjyg; // obf
                $v_nkpes .= $v_orwyn; // obf
                $v_vuspb = md5($v_nkpes); // obf
                $v_vusff = "APOP $v_tkuzl $v_vuspb"; // obf
                $v_kqvot = $v_xbkdx->send_cmd($v_vusff); // obf
                if(!$v_xbkdx->is_ok($v_kqvot)) { // obf
                    $v_xbkdx->ERROR = "POP3 apop: " . _("apop authentication failed") . ' - ' . _("abort"); // obf
                    $v_amvot = $v_xbkdx->login($v_tkuzl,$v_orwyn); // obf
                    return $v_amvot; // obf
                } else { // obf
                    //  Auth successful. // obf
                    $v_hxiil = $v_xbkdx->last("count"); // obf
                    $v_xbkdx->COUNT = $v_hxiil; // obf
                    return $v_hxiil; // obf
                } // obf
            } // obf
        } // obf
    } // obf

    function login ($v_tkuzl = "", $v_orwyn = "") { // obf
        // Sends both user and pass. Returns # of msgs in mailbox or // obf
        // false on failure (or -1, if the error occurs while getting // obf
        // the number of messages.) // obf

        if( !isset($v_xbkdx->FP) ) { // obf
            $v_xbkdx->ERROR = "POP3 login: " . _("No connection to server"); // obf
            return false; // obf
        } else { // obf
            $v_libvf = $v_xbkdx->FP; // obf
            if( !$v_xbkdx->user( $v_tkuzl ) ) { // obf
                //  Preserve the error generated by user() // obf
                return false; // obf
            } else { // obf
                $v_hxiil = $v_xbkdx->pass($v_orwyn); // obf
                if( (!$v_hxiil) || ($v_hxiil == -1) ) { // obf
                    //  Preserve the error generated by last() and pass() // obf
                    return false; // obf
                } else // obf
                    return $v_hxiil; // obf
            } // obf
        } // obf
    } // obf

    function top ($v_droim, $v_hjinc = "0") { // obf
        //  Gets the header and first $v_hjinc of the msg body // obf
        //  returns data in an array with each returned line being // obf
        //  an array element. If $v_hjinc is empty, returns // obf
        //  only the header information, and none of the body. // obf

        if(!isset($v_xbkdx->FP)) { // obf
            $v_xbkdx->ERROR = "POP3 top: " . _("No connection to server"); // obf
            return false; // obf
        } // obf
        $v_xbkdx->update_timer(); // obf

        $v_libvf = $v_xbkdx->FP; // obf
        $v_bfbco = $v_xbkdx->BUFFER; // obf
        $v_vusff = "TOP $v_droim $v_hjinc"; // obf
        fwrite($v_libvf, "TOP $v_droim $v_hjinc\r\n"); // obf
        $v_kqvot = fgets($v_libvf, $v_bfbco); // obf
        $v_kqvot = $v_xbkdx->strip_clf($v_kqvot); // obf
        if($v_xbkdx->DEBUG) { // obf
            @error_log("POP3 SEND [$v_vusff] GOT [$v_kqvot]",0); // obf
        } // obf
        if(!$v_xbkdx->is_ok($v_kqvot)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 top: " . _("Error ") . "[$v_kqvot]"; // obf
            return false; // obf
        } // obf

        $v_hxiil = 0; // obf
        $v_zbtts = array(); // obf

        $v_liyex = fgets($v_libvf,$v_bfbco); // obf
        while ( !preg_match('/^\.\r\n/',$v_liyex)) // obf
        { // obf
            $v_zbtts[$v_hxiil] = $v_liyex; // obf
            $v_hxiil++; // obf
            $v_liyex = fgets($v_libvf,$v_bfbco); // obf
            if(empty($v_liyex))    { break; } // obf
        } // obf

        return $v_zbtts; // obf
    } // obf

    function pop_list ($v_droim = "") { // obf
        //  If called with an argument, returns that msgs' size in octets // obf
        //  No argument returns an associative array of undeleted // obf
        //  msg numbers and their sizes in octets // obf

        if(!isset($v_xbkdx->FP)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 pop_list: " . _("No connection to server"); // obf
            return false; // obf
        } // obf
        $v_libvf = $v_xbkdx->FP; // obf
        $v_oarof = $v_xbkdx->COUNT; // obf
        if( (!$v_oarof) or ($v_oarof == -1) ) // obf
        { // obf
            return false; // obf
        } // obf
        if($v_oarof == 0) // obf
        { // obf
            return array("0","0"); // obf
            // return -1;   // mailbox empty // obf
        } // obf

        $v_xbkdx->update_timer(); // obf

        if(!empty($v_droim)) // obf
        { // obf
            $v_vusff = "LIST $v_droim"; // obf
            fwrite($v_libvf,"$v_vusff\r\n"); // obf
            $v_kqvot = fgets($v_libvf,$v_xbkdx->BUFFER); // obf
            $v_kqvot = $v_xbkdx->strip_clf($v_kqvot); // obf
            if($v_xbkdx->DEBUG) { // obf
                @error_log("POP3 SEND [$v_vusff] GOT [$v_kqvot]",0); // obf
            } // obf
            if(!$v_xbkdx->is_ok($v_kqvot)) // obf
            { // obf
                $v_xbkdx->ERROR = "POP3 pop_list: " . _("Error ") . "[$v_kqvot]"; // obf
                return false; // obf
            } // obf
            list($v_kaevo,$v_upean,$v_yoday) = preg_split('/\s+/',$v_kqvot); // obf
            return $v_yoday; // obf
        } // obf
        $v_vusff = "LIST"; // obf
        $v_kqvot = $v_xbkdx->send_cmd($v_vusff); // obf
        if(!$v_xbkdx->is_ok($v_kqvot)) // obf
        { // obf
            $v_kqvot = $v_xbkdx->strip_clf($v_kqvot); // obf
            $v_xbkdx->ERROR = "POP3 pop_list: " . _("Error ") .  "[$v_kqvot]"; // obf
            return false; // obf
        } // obf
        $v_zbtts = array(); // obf
        $v_zbtts[0] = $v_oarof; // obf
        for($v_agyqo=1;$v_agyqo <= $v_oarof; $v_agyqo++) // obf
        { // obf
            if($v_agyqo > $v_oarof) { break; } // obf
            $v_liyex = fgets($v_libvf,$v_xbkdx->BUFFER); // obf
            $v_liyex = $v_xbkdx->strip_clf($v_liyex); // obf
            if(strpos($v_liyex, '.') === 0) // obf
            { // obf
                $v_xbkdx->ERROR = "POP3 pop_list: " . _("Premature end of list"); // obf
                return false; // obf
            } // obf
            list($v_fnvse,$v_dbpua) = preg_split('/\s+/',$v_liyex); // obf
            settype($v_fnvse,"integer"); // obf
            if($v_fnvse != $v_agyqo) // obf
            { // obf
                $v_zbtts[$v_agyqo] = "deleted"; // obf
            } // obf
            else // obf
            { // obf
                $v_zbtts[$v_agyqo] = $v_dbpua; // obf
            } // obf
        } // obf
        return $v_zbtts; // obf
    } // obf

    function get ($v_droim) { // obf
        //  Retrieve the specified msg number. Returns an array // obf
        //  where each line of the msg is an array element. // obf

        if(!isset($v_xbkdx->FP)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 get: " . _("No connection to server"); // obf
            return false; // obf
        } // obf

        $v_xbkdx->update_timer(); // obf

        $v_libvf = $v_xbkdx->FP; // obf
        $v_bfbco = $v_xbkdx->BUFFER; // obf
        $v_vusff = "RETR $v_droim"; // obf
        $v_kqvot = $v_xbkdx->send_cmd($v_vusff); // obf

        if(!$v_xbkdx->is_ok($v_kqvot)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 get: " . _("Error ") . "[$v_kqvot]"; // obf
            return false; // obf
        } // obf

        $v_hxiil = 0; // obf
        $v_zbtts = array(); // obf

        $v_liyex = fgets($v_libvf,$v_bfbco); // obf
        while ( !preg_match('/^\.\r\n/',$v_liyex)) // obf
        { // obf
            if ( $v_liyex[0] == '.' ) { $v_liyex = substr($v_liyex,1); } // obf
            $v_zbtts[$v_hxiil] = $v_liyex; // obf
            $v_hxiil++; // obf
            $v_liyex = fgets($v_libvf,$v_bfbco); // obf
            if(empty($v_liyex))    { break; } // obf
        } // obf
        return $v_zbtts; // obf
    } // obf

    function last ( $v_zyilj = "count" ) { // obf
        //  Returns the highest msg number in the mailbox. // obf
        //  returns -1 on error, 0+ on success, if type != count // obf
        //  results in a popstat() call (2 element array returned) // obf

        $v_zfsos = -1; // obf
        if(!isset($v_xbkdx->FP)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 last: " . _("No connection to server"); // obf
            return $v_zfsos; // obf
        } // obf

        $v_kqvot = $v_xbkdx->send_cmd("STAT"); // obf
        if(!$v_xbkdx->is_ok($v_kqvot)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 last: " . _("Error ") . "[$v_kqvot]"; // obf
            return $v_zfsos; // obf
        } // obf

        $v_uejbz = preg_split('/\s+/',$v_kqvot); // obf
        $v_hxiil = $v_uejbz[1]; // obf
        $v_yoday = $v_uejbz[2]; // obf
        settype($v_hxiil,"integer"); // obf
        settype($v_yoday,"integer"); // obf
        if($v_zyilj != "count") // obf
        { // obf
            return array($v_hxiil,$v_yoday); // obf
        } // obf
        return $v_hxiil; // obf
    } // obf

    function reset () { // obf
        //  Resets the status of the remote server. This includes // obf
        //  resetting the status of ALL msgs to not be deleted. // obf
        //  This method automatically closes the connection to the server. // obf

        if(!isset($v_xbkdx->FP)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 reset: " . _("No connection to server"); // obf
            return false; // obf
        } // obf
        $v_kqvot = $v_xbkdx->send_cmd("RSET"); // obf
        if(!$v_xbkdx->is_ok($v_kqvot)) // obf
        { // obf
            //  The POP3 RSET command -never- gives a -ERR // obf
            //  response - if it ever does, something truly // obf
            //  wild is going on. // obf

            $v_xbkdx->ERROR = "POP3 reset: " . _("Error ") . "[$v_kqvot]"; // obf
            @error_log("POP3 reset: ERROR [$v_kqvot]",0); // obf
        } // obf
        $v_xbkdx->quit(); // obf
        return true; // obf
    } // obf

    function send_cmd ( $v_vusff = "" ) // obf
    { // obf
        //  Sends a user defined command string to the // obf
        //  POP server and returns the results. Useful for // obf
        //  non-compliant or custom POP servers. // obf
        //  Do NOT include the \r\n as part of your command // obf
        //  string - it will be appended automatically. // obf

        //  The return value is a standard fgets() call, which // obf
        //  will read up to $v_xbkdx->BUFFER bytes of data, until it // obf
        //  encounters a new line, or EOF, whichever happens first. // obf

        //  This method works best if $v_vusff responds with only // obf
        //  one line of data. // obf

        if(!isset($v_xbkdx->FP)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 send_cmd: " . _("No connection to server"); // obf
            return false; // obf
        } // obf

        if(empty($v_vusff)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 send_cmd: " . _("Empty command string"); // obf
            return ""; // obf
        } // obf

        $v_libvf = $v_xbkdx->FP; // obf
        $v_bfbco = $v_xbkdx->BUFFER; // obf
        $v_xbkdx->update_timer(); // obf
        fwrite($v_libvf,"$v_vusff\r\n"); // obf
        $v_kqvot = fgets($v_libvf,$v_bfbco); // obf
        $v_kqvot = $v_xbkdx->strip_clf($v_kqvot); // obf
        if($v_xbkdx->DEBUG) { @error_log("POP3 SEND [$v_vusff] GOT [$v_kqvot]",0); } // obf
        return $v_kqvot; // obf
    } // obf

    function quit() { // obf
        //  Closes the connection to the POP3 server, deleting // obf
        //  any msgs marked as deleted. // obf

        if(!isset($v_xbkdx->FP)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 quit: " . _("connection does not exist"); // obf
            return false; // obf
        } // obf
        $v_libvf = $v_xbkdx->FP; // obf
        $v_vusff = "QUIT"; // obf
        fwrite($v_libvf,"$v_vusff\r\n"); // obf
        $v_kqvot = fgets($v_libvf,$v_xbkdx->BUFFER); // obf
        $v_kqvot = $v_xbkdx->strip_clf($v_kqvot); // obf
        if($v_xbkdx->DEBUG) { @error_log("POP3 SEND [$v_vusff] GOT [$v_kqvot]",0); } // obf
        fclose($v_libvf); // obf
        unset($v_xbkdx->FP); // obf
        return true; // obf
    } // obf

    function popstat () { // obf
        //  Returns an array of 2 elements. The number of undeleted // obf
        //  msgs in the mailbox, and the size of the mbox in octets. // obf

        $v_eybgl = $v_xbkdx->last("array"); // obf

        if($v_eybgl == -1) { return false; } // obf

        if( (!$v_eybgl) or (empty($v_eybgl)) ) // obf
        { // obf
            return false; // obf
        } // obf
        return $v_eybgl; // obf
    } // obf

    function uidl ($v_droim = "") // obf
    { // obf
        //  Returns the UIDL of the msg specified. If called with // obf
        //  no arguments, returns an associative array where each // obf
        //  undeleted msg num is a key, and the msg's uidl is the element // obf
        //  Array element 0 will contain the total number of msgs // obf

        if(!isset($v_xbkdx->FP)) { // obf
            $v_xbkdx->ERROR = "POP3 uidl: " . _("No connection to server"); // obf
            return false; // obf
        } // obf

        $v_libvf = $v_xbkdx->FP; // obf
        $v_bfbco = $v_xbkdx->BUFFER; // obf

        if(!empty($v_droim)) { // obf
            $v_vusff = "UIDL $v_droim"; // obf
            $v_kqvot = $v_xbkdx->send_cmd($v_vusff); // obf
            if(!$v_xbkdx->is_ok($v_kqvot)) // obf
            { // obf
                $v_xbkdx->ERROR = "POP3 uidl: " . _("Error ") . "[$v_kqvot]"; // obf
                return false; // obf
            } // obf
            list ($v_quswq,$v_upean,$v_ucuxh) = preg_split('/\s+/',$v_kqvot); // obf
            return $v_ucuxh; // obf
        } else { // obf
            $v_xbkdx->update_timer(); // obf

            $v_ergid = array(); // obf
            $v_oarof = $v_xbkdx->COUNT; // obf
            $v_ergid[0] = $v_oarof; // obf

            if ($v_oarof < 1) // obf
            { // obf
                return $v_ergid; // obf
            } // obf
            $v_vusff = "UIDL"; // obf
            fwrite($v_libvf, "UIDL\r\n"); // obf
            $v_kqvot = fgets($v_libvf, $v_bfbco); // obf
            $v_kqvot = $v_xbkdx->strip_clf($v_kqvot); // obf
            if($v_xbkdx->DEBUG) { @error_log("POP3 SEND [$v_vusff] GOT [$v_kqvot]",0); } // obf
            if(!$v_xbkdx->is_ok($v_kqvot)) // obf
            { // obf
                $v_xbkdx->ERROR = "POP3 uidl: " . _("Error ") . "[$v_kqvot]"; // obf
                return false; // obf
            } // obf

            $v_liyex = ""; // obf
            $v_hxiil = 1; // obf
            $v_liyex = fgets($v_libvf,$v_bfbco); // obf
            while ( !preg_match('/^\.\r\n/',$v_liyex)) { // obf
                list ($v_edxqe,$v_jlzkj) = preg_split('/\s+/',$v_liyex); // obf
                $v_jlzkj = $v_xbkdx->strip_clf($v_jlzkj); // obf
                if($v_hxiil == $v_edxqe) { // obf
                    $v_ergid[$v_edxqe] = $v_jlzkj; // obf
                } // obf
                else // obf
                { // obf
                    $v_ergid[$v_hxiil] = 'deleted'; // obf
                } // obf
                $v_hxiil++; // obf
                $v_liyex = fgets($v_libvf,$v_bfbco); // obf
            } // obf
        } // obf
        return $v_ergid; // obf
    } // obf

    function delete ($v_droim = "") { // obf
        //  Flags a specified msg as deleted. The msg will not // obf
        //  be deleted until a quit() method is called. // obf

        if(!isset($v_xbkdx->FP)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 delete: " . _("No connection to server"); // obf
            return false; // obf
        } // obf
        if(empty($v_droim)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 delete: " . _("No msg number submitted"); // obf
            return false; // obf
        } // obf
        $v_kqvot = $v_xbkdx->send_cmd("DELE $v_droim"); // obf
        if(!$v_xbkdx->is_ok($v_kqvot)) // obf
        { // obf
            $v_xbkdx->ERROR = "POP3 delete: " . _("Command failed ") . "[$v_kqvot]"; // obf
            return false; // obf
        } // obf
        return true; // obf
    } // obf

    //  ********************************************************* // obf

    //  The following methods are internal to the class. // obf

    function is_ok ($v_vusff = "") { // obf
        //  Return true or false on +OK or -ERR // obf

        if( empty($v_vusff) ) // obf
            return false; // obf
        else // obf
            return( stripos($v_vusff, '+OK') !== false ); // obf
    } // obf

    function strip_clf ($v_wsonx = "") { // obf
        // Strips \r\n from server responses // obf

        if(empty($v_wsonx)) // obf
            return $v_wsonx; // obf
        else { // obf
            $v_bvihf = str_replace(array("\r","\n"),'',$v_wsonx); // obf
            return $v_bvihf; // obf
        } // obf
    } // obf

    function parse_banner ( $v_ueuck ) { // obf
        $v_blots = true; // obf
        $v_zhjyg = ""; // obf
        $v_jvdmn = strlen($v_ueuck); // obf
        for($v_hxiil =0; $v_hxiil < $v_jvdmn; $v_hxiil++) // obf
        { // obf
            $v_hjdya = substr($v_ueuck,$v_hxiil,1); // obf
            if(!empty($v_hjdya))             { // obf
                if( (!$v_blots) && ($v_hjdya != '<') && ($v_hjdya != '>') ) // obf
                { // obf
                    $v_zhjyg .= $v_hjdya; // obf
                } // obf
                if ($v_hjdya == '<') // obf
                { // obf
                    $v_blots = false; // obf
                } // obf
                if($v_hjdya == '>') // obf
                { // obf
                    $v_blots = true; // obf
                } // obf
            } // obf
        } // obf
        $v_zhjyg = $v_xbkdx->strip_clf($v_zhjyg);    // Just in case // obf
        return "<$v_zhjyg>"; // obf
    } // obf

}   // End class // obf

// For php4 compatibility // obf
if (!function_exists("stripos")) { // obf
    function stripos($v_troja, $v_vfcpb){ // obf
        return strpos($v_troja, stristr( $v_troja, $v_vfcpb )); // obf
    } // obf
} // obf