
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * PHPMailer RFC821 SMTP email transport class. // obf
 * PHP Version 5.5. // obf
 * // obf
 * @see       https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project // obf
 * // obf
 * @author    Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk> // obf
 * @author    Jim Jagielski (jimjag) <jimjag@gmail.com> // obf
 * @author    Andy Prevost (codeworxtech) <codeworxtech@users.sourceforge.net> // obf
 * @author    Brent R. Matzelle (original founder) // obf
 * @copyright 2012 - 2020 Marcus Bointon // obf
 * @copyright 2010 - 2012 Jim Jagielski // obf
 * @copyright 2004 - 2009 Andy Prevost // obf
 * @license   https://www.gnu.org/licenses/old-licenses/lgpl-2.1.html GNU Lesser General Public License // obf
 * @note      This program is distributed in the hope that it will be useful - WITHOUT // obf
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or // obf
 * FITNESS FOR A PARTICULAR PURPOSE. // obf
 */ // obf

namespace PHPMailer\PHPMailer; // obf

/** // obf
 * PHPMailer RFC821 SMTP email transport class. // obf
 * Implements RFC 821 SMTP commands and provides some utility methods for sending mail to an SMTP server. // obf
 * // obf
 * @author Chris Ryan // obf
 * @author Marcus Bointon <phpmailer@synchromedia.co.uk> // obf
 */ // obf
class SMTP // obf
{ // obf
    /** // obf
     * The PHPMailer SMTP version number. // obf
     * // obf
     * @var string // obf
     */ // obf
    const VERSION = '6.9.3'; // obf

    /** // obf
     * SMTP line break constant. // obf
     * // obf
     * @var string // obf
     */ // obf
    const LE = "\r\n"; // obf

    /** // obf
     * The SMTP port to use if one is not specified. // obf
     * // obf
     * @var int // obf
     */ // obf
    const DEFAULT_PORT = 25; // obf

    /** // obf
     * The SMTPs port to use if one is not specified. // obf
     * // obf
     * @var int // obf
     */ // obf
    const DEFAULT_SECURE_PORT = 465; // obf

    /** // obf
     * The maximum line length allowed by RFC 5321 section 4.5.3.1.6, // obf
     * *excluding* a trailing CRLF break. // obf
     * // obf
     * @see https://www.rfc-editor.org/rfc/rfc5321#section-4.5.3.1.6 // obf
     * // obf
     * @var int // obf
     */ // obf
    const MAX_LINE_LENGTH = 998; // obf

    /** // obf
     * The maximum line length allowed for replies in RFC 5321 section 4.5.3.1.5, // obf
     * *including* a trailing CRLF line break. // obf
     * // obf
     * @see https://www.rfc-editor.org/rfc/rfc5321#section-4.5.3.1.5 // obf
     * // obf
     * @var int // obf
     */ // obf
    const MAX_REPLY_LENGTH = 512; // obf

    /** // obf
     * Debug level for no output. // obf
     * // obf
     * @var int // obf
     */ // obf
    const DEBUG_OFF = 0; // obf

    /** // obf
     * Debug level to show client -> server messages. // obf
     * // obf
     * @var int // obf
     */ // obf
    const DEBUG_CLIENT = 1; // obf

    /** // obf
     * Debug level to show client -> server and server -> client messages. // obf
     * // obf
     * @var int // obf
     */ // obf
    const DEBUG_SERVER = 2; // obf

    /** // obf
     * Debug level to show connection status, client -> server and server -> client messages. // obf
     * // obf
     * @var int // obf
     */ // obf
    const DEBUG_CONNECTION = 3; // obf

    /** // obf
     * Debug level to show all messages. // obf
     * // obf
     * @var int // obf
     */ // obf
    const DEBUG_LOWLEVEL = 4; // obf

    /** // obf
     * Debug output level. // obf
     * Options: // obf
     * * self::DEBUG_OFF (`0`) No debug output, default // obf
     * * self::DEBUG_CLIENT (`1`) Client commands // obf
     * * self::DEBUG_SERVER (`2`) Client commands and server responses // obf
     * * self::DEBUG_CONNECTION (`3`) As DEBUG_SERVER plus connection status // obf
     * * self::DEBUG_LOWLEVEL (`4`) Low-level data output, all messages. // obf
     * // obf
     * @var int // obf
     */ // obf
    public $v_egwnj = self::DEBUG_OFF; // obf

    /** // obf
     * How to handle debug output. // obf
     * Options: // obf
     * * `echo` Output plain-text as-is, appropriate for CLI // obf
     * * `html` Output escaped, line breaks converted to `<br>`, appropriate for browser output // obf
     * * `error_log` Output to error log as configured in php.ini // obf
     * Alternatively, you can provide a callable expecting two params: a message string and the debug level: // obf
     * // obf
     * ```php // obf
     * $v_ulhht->Debugoutput = function($v_ggwwo, $v_ikcze) {echo "debug level $v_ikcze; message: $v_ggwwo";}; // obf
     * ``` // obf
     * // obf
     * Alternatively, you can pass in an instance of a PSR-3 compatible logger, though only `debug` // obf
     * level output is used: // obf
     * // obf
     * ```php // obf
     * $v_znufy->Debugoutput = new myPsr3Logger; // obf
     * ``` // obf
     * // obf
     * @var string|callable|\Psr\Log\LoggerInterface // obf
     */ // obf
    public $v_krmhk = 'echo'; // obf

    /** // obf
     * Whether to use VERP. // obf
     * // obf
     * @see https://en.wikipedia.org/wiki/Variable_envelope_return_path // obf
     * @see https://www.postfix.org/VERP_README.html Info on VERP // obf
     * // obf
     * @var bool // obf
     */ // obf
    public $v_ohfnf = false; // obf

    /** // obf
     * The timeout value for connection, in seconds. // obf
     * Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2. // obf
     * This needs to be quite high to function correctly with hosts using greetdelay as an anti-spam measure. // obf
     * // obf
     * @see https://www.rfc-editor.org/rfc/rfc2821#section-4.5.3.2 // obf
     * // obf
     * @var int // obf
     */ // obf
    public $v_cbrue = 300; // obf

    /** // obf
     * How long to wait for commands to complete, in seconds. // obf
     * Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2. // obf
     * // obf
     * @var int // obf
     */ // obf
    public $v_yjzed = 300; // obf

    /** // obf
     * Patterns to extract an SMTP transaction id from reply to a DATA command. // obf
     * The first capture group in each regex will be used as the ID. // obf
     * MS ESMTP returns the message ID, which may not be correct for internal tracking. // obf
     * // obf
     * @var string[] // obf
     */ // obf
    protected $v_peaqz = [ // obf
        'exim' => '/[\d]{3} OK id=(.*)/', // obf
        'sendmail' => '/[\d]{3} 2\.0\.0 (.*) Message/', // obf
        'postfix' => '/[\d]{3} 2\.0\.0 Ok: queued as (.*)/', // obf
        'Microsoft_ESMTP' => '/[0-9]{3} 2\.[\d]\.0 (.*)@(?:.*) Queued mail for delivery/', // obf
        'Amazon_SES' => '/[\d]{3} Ok (.*)/', // obf
        'SendGrid' => '/[\d]{3} Ok: queued as (.*)/', // obf
        'CampaignMonitor' => '/[\d]{3} 2\.0\.0 OK:([a-zA-Z\d]{48})/', // obf
        'Haraka' => '/[\d]{3} Message Queued \((.*)\)/', // obf
        'ZoneMTA' => '/[\d]{3} Message queued as (.*)/', // obf
        'Mailjet' => '/[\d]{3} OK queued as (.*)/', // obf
    ]; // obf

    /** // obf
     * Allowed SMTP XCLIENT attributes. // obf
     * Must be allowed by the SMTP server. EHLO response is not checked. // obf
     * // obf
     * @see https://www.postfix.org/XCLIENT_README.html // obf
     * // obf
     * @var array // obf
     */ // obf
    public static $v_pclxd = [ // obf
        'NAME', 'ADDR', 'PORT', 'PROTO', 'HELO', 'LOGIN', 'DESTADDR', 'DESTPORT' // obf
    ]; // obf

    /** // obf
     * The last transaction ID issued in response to a DATA command, // obf
     * if one was detected. // obf
     * // obf
     * @var string|bool|null // obf
     */ // obf
    protected $v_nvqxt; // obf

    /** // obf
     * The socket for the server connection. // obf
     * // obf
     * @var ?resource // obf
     */ // obf
    protected $v_bstbq; // obf

    /** // obf
     * Error information, if any, for the last SMTP command. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_mmbdh = [ // obf
        'error' => '', // obf
        'detail' => '', // obf
        'smtp_code' => '', // obf
        'smtp_code_ex' => '', // obf
    ]; // obf

    /** // obf
     * The reply the server sent to us for HELO. // obf
     * If null, no HELO string has yet been received. // obf
     * // obf
     * @var string|null // obf
     */ // obf
    protected $v_bpjjy; // obf

    /** // obf
     * The set of SMTP extensions sent in reply to EHLO command. // obf
     * Indexes of the array are extension names. // obf
     * Value at index 'HELO' or 'EHLO' (according to command that was sent) // obf
     * represents the server name. In case of HELO it is the only element of the array. // obf
     * Other values can be boolean TRUE or an array containing extension options. // obf
     * If null, no HELO/EHLO string has yet been received. // obf
     * // obf
     * @var array|null // obf
     */ // obf
    protected $v_zaajy; // obf

    /** // obf
     * The most recent reply received from the server. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_kusai = ''; // obf

    /** // obf
     * Output debugging info via a user-selected method. // obf
     * // obf
     * @param string $v_ggwwo   Debug string to output // obf
     * @param int    $v_ikcze The debug level of this message; see DEBUG_* constants // obf
     * // obf
     * @see SMTP::$v_krmhk // obf
     * @see SMTP::$v_egwnj // obf
     */ // obf
    protected function edebug($v_ggwwo, $v_ikcze = 0) // obf
    { // obf
        if ($v_ikcze > $v_pwtwb->do_debug) { // obf
            return; // obf
        } // obf
        //Is this a PSR-3 logger? // obf
        if ($v_pwtwb->Debugoutput instanceof \Psr\Log\LoggerInterface) { // obf
            //Remove trailing line breaks potentially added by calls to SMTP::client_send() // obf
            $v_pwtwb->Debugoutput->debug(rtrim($v_ggwwo, "\r\n")); // obf

            return; // obf
        } // obf
        //Avoid clash with built-in function names // obf
        if (is_callable($v_pwtwb->Debugoutput) && !in_array($v_pwtwb->Debugoutput, ['error_log', 'html', 'echo'])) { // obf
            call_user_func($v_pwtwb->Debugoutput, $v_ggwwo, $v_ikcze); // obf

            return; // obf
        } // obf
        switch ($v_pwtwb->Debugoutput) { // obf
            case 'error_log': // obf
                //Don't output, just log // obf
                /** @noinspection ForgottenDebugOutputInspection */ // obf
                error_log($v_ggwwo); // obf
                break; // obf
            case 'html': // obf
                //Cleans up output a bit for a better looking, HTML-safe output // obf
                echo gmdate('Y-m-d H:i:s'), ' ', htmlentities( // obf
                    __fn_37772('/[\r\n]+/', '', $v_ggwwo), // obf
                    ENT_QUOTES, // obf
                    'UTF-8' // obf
                ), "<br>\n"; // obf
                break; // obf
            case 'echo': // obf
            default: // obf
                //Normalize line breaks // obf
                $v_ggwwo = __fn_37772('/\r\n|\r/m', "\n", $v_ggwwo); // obf
                echo gmdate('Y-m-d H:i:s'), // obf
                "\t", // obf
                    //Trim trailing space // obf
                trim( // obf
                    //Indent for readability, except for trailing break // obf
                    str_replace( // obf
                        "\n", // obf
                        "\n                   \t                  ", // obf
                        trim($v_ggwwo) // obf
                    ) // obf
                ), // obf
                "\n"; // obf
        } // obf
    } // obf

    /** // obf
     * Connect to an SMTP server. // obf
     * // obf
     * @param string $v_prslo    SMTP server IP or host name // obf
     * @param int    $v_gchqn    The port number to connect to // obf
     * @param int    $v_twkxl How long to wait for the connection to open // obf
     * @param array  $v_nfzwj An array of options for stream_context_create() // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function connect($v_prslo, $v_gchqn = null, $v_twkxl = 30, $v_nfzwj = []) // obf
    { // obf
        //Clear errors to avoid confusion // obf
        $v_pwtwb->setError(''); // obf
        //Make sure we are __not__ connected // obf
        if ($v_pwtwb->connected()) { // obf
            //Already connected, generate error // obf
            $v_pwtwb->setError('Already connected to a server'); // obf

            return false; // obf
        } // obf
        if (empty($v_gchqn)) { // obf
            $v_gchqn = self::DEFAULT_PORT; // obf
        } // obf
        //Connect to the SMTP server // obf
        $v_pwtwb->edebug( // obf
            "Connection: opening to $v_prslo:$v_gchqn, timeout=$v_twkxl, options=" . // obf
            (count($v_nfzwj) > 0 ? var_export($v_nfzwj, true) : 'array()'), // obf
            self::DEBUG_CONNECTION // obf
        ); // obf

        $v_pwtwb->smtp_conn = $v_pwtwb->getSMTPConnection($v_prslo, $v_gchqn, $v_twkxl, $v_nfzwj); // obf

        if ($v_pwtwb->smtp_conn === false) { // obf
            //Error info already set inside `getSMTPConnection()` // obf
            return false; // obf
        } // obf

        $v_pwtwb->edebug('Connection: opened', self::DEBUG_CONNECTION); // obf

        //Get any announcement // obf
        $v_pwtwb->last_reply = $v_pwtwb->get_lines(); // obf
        $v_pwtwb->edebug('SERVER -> CLIENT: ' . $v_pwtwb->last_reply, self::DEBUG_SERVER); // obf
        $v_dzgfq = (int)substr($v_pwtwb->last_reply, 0, 3); // obf
        if ($v_dzgfq === 220) { // obf
            return true; // obf
        } // obf
        //Anything other than a 220 response means something went wrong // obf
        //RFC 5321 says the server will wait for us to send a QUIT in response to a 554 error // obf
        //https://www.rfc-editor.org/rfc/rfc5321#section-3.1 // obf
        if ($v_dzgfq === 554) { // obf
            $v_pwtwb->quit(); // obf
        } // obf
        //This will handle 421 responses which may not wait for a QUIT (e.g. if the server is being shut down) // obf
        $v_pwtwb->edebug('Connection: closing due to error', self::DEBUG_CONNECTION); // obf
        $v_pwtwb->close(); // obf
        return false; // obf
    } // obf

    /** // obf
     * Create connection to the SMTP server. // obf
     * // obf
     * @param string $v_prslo    SMTP server IP or host name // obf
     * @param int    $v_gchqn    The port number to connect to // obf
     * @param int    $v_twkxl How long to wait for the connection to open // obf
     * @param array  $v_nfzwj An array of options for stream_context_create() // obf
     * // obf
     * @return false|resource // obf
     */ // obf
    protected function getSMTPConnection($v_prslo, $v_gchqn = null, $v_twkxl = 30, $v_nfzwj = []) // obf
    { // obf
        static $v_twxbl; // obf
        //This is enabled by default since 5.0.0 but some providers disable it // obf
        //Check this once and cache the result // obf
        if (null === $v_twxbl) { // obf
            $v_twxbl = function_exists('stream_socket_client'); // obf
        } // obf

        $v_ygssd = 0; // obf
        $v_qwndm = ''; // obf
        if ($v_twxbl) { // obf
            $v_qlxub = stream_context_create($v_nfzwj); // obf
            set_error_handler(function () { // obf
                call_user_func_array([$v_pwtwb, 'errorHandler'], func_get_args()); // obf
            }); // obf
            $v_pqhpv = stream_socket_client( // obf
                $v_prslo . ':' . $v_gchqn, // obf
                $v_ygssd, // obf
                $v_qwndm, // obf
                $v_twkxl, // obf
                STREAM_CLIENT_CONNECT, // obf
                $v_qlxub // obf
            ); // obf
        } else { // obf
            //Fall back to fsockopen which should work in more places, but is missing some features // obf
            $v_pwtwb->edebug( // obf
                'Connection: stream_socket_client not available, falling back to fsockopen', // obf
                self::DEBUG_CONNECTION // obf
            ); // obf
            set_error_handler(function () { // obf
                call_user_func_array([$v_pwtwb, 'errorHandler'], func_get_args()); // obf
            }); // obf
            $v_pqhpv = fsockopen( // obf
                $v_prslo, // obf
                $v_gchqn, // obf
                $v_ygssd, // obf
                $v_qwndm, // obf
                $v_twkxl // obf
            ); // obf
        } // obf
        restore_error_handler(); // obf

        //Verify we connected properly // obf
        if (!is_resource($v_pqhpv)) { // obf
            $v_pwtwb->setError( // obf
                'Failed to connect to server', // obf
                '', // obf
                (string) $v_ygssd, // obf
                $v_qwndm // obf
            ); // obf
            $v_pwtwb->edebug( // obf
                'SMTP ERROR: ' . $v_pwtwb->error['error'] // obf
                . ": $v_qwndm ($v_ygssd)", // obf
                self::DEBUG_CLIENT // obf
            ); // obf

            return false; // obf
        } // obf

        //SMTP server can take longer to respond, give longer timeout for first read // obf
        //Windows does not have support for this timeout function // obf
        if (strpos(PHP_OS, 'WIN') !== 0) { // obf
            $v_mvswp = (int)ini_get('max_execution_time'); // obf
            //Don't bother if unlimited, or if set_time_limit is disabled // obf
            if (0 !== $v_mvswp && $v_twkxl > $v_mvswp && strpos(ini_get('disable_functions'), 'set_time_limit') === false) { // obf
                @set_time_limit($v_twkxl); // obf
            } // obf
            stream_set_timeout($v_pqhpv, $v_twkxl, 0); // obf
        } // obf

        return $v_pqhpv; // obf
    } // obf

    /** // obf
     * Initiate a TLS (encrypted) session. // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function startTLS() // obf
    { // obf
        if (!$v_pwtwb->sendCommand('STARTTLS', 'STARTTLS', 220)) { // obf
            return false; // obf
        } // obf

        //Allow the best TLS version(s) we can // obf
        $v_duygx = STREAM_CRYPTO_METHOD_TLS_CLIENT; // obf

        //PHP 5.6.7 dropped inclusion of TLS 1.1 and 1.2 in STREAM_CRYPTO_METHOD_TLS_CLIENT // obf
        //so add them back in manually if we can // obf
        if (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) { // obf
            $v_duygx |= STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT; // obf
            $v_duygx |= STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT; // obf
        } // obf

        //Begin encrypted connection // obf
            set_error_handler(function () { // obf
                call_user_func_array([$v_pwtwb, 'errorHandler'], func_get_args()); // obf
            }); // obf
        $v_gclww = stream_socket_enable_crypto( // obf
            $v_pwtwb->smtp_conn, // obf
            true, // obf
            $v_duygx // obf
        ); // obf
        restore_error_handler(); // obf

        return (bool) $v_gclww; // obf
    } // obf

    /** // obf
     * Perform SMTP authentication. // obf
     * Must be run after hello(). // obf
     * // obf
     * @see    hello() // obf
     * // obf
     * @param string $v_qpmpv The user name // obf
     * @param string $v_luqmc The password // obf
     * @param string $v_gtfve The auth type (CRAM-MD5, PLAIN, LOGIN, XOAUTH2) // obf
     * @param OAuthTokenProvider $v_wnldu An optional OAuthTokenProvider instance for XOAUTH2 authentication // obf
     * // obf
     * @return bool True if successfully authenticated // obf
     */ // obf
    public function authenticate( // obf
        $v_qpmpv, // obf
        $v_luqmc, // obf
        $v_gtfve = null, // obf
        $v_wnldu = null // obf
    ) { // obf
        if (!$v_pwtwb->server_caps) { // obf
            $v_pwtwb->setError('Authentication is not allowed before HELO/EHLO'); // obf

            return false; // obf
        } // obf

        if (array_key_exists('EHLO', $v_pwtwb->server_caps)) { // obf
            //SMTP extensions are available; try to find a proper authentication method // obf
            if (!array_key_exists('AUTH', $v_pwtwb->server_caps)) { // obf
                $v_pwtwb->setError('Authentication is not allowed at this stage'); // obf
                //'at this stage' means that auth may be allowed after the stage changes // obf
                //e.g. after STARTTLS // obf

                return false; // obf
            } // obf

            $v_pwtwb->edebug('Auth method requested: ' . ($v_gtfve ?: 'UNSPECIFIED'), self::DEBUG_LOWLEVEL); // obf
            $v_pwtwb->edebug( // obf
                'Auth methods available on the server: ' . implode(',', $v_pwtwb->server_caps['AUTH']), // obf
                self::DEBUG_LOWLEVEL // obf
            ); // obf

            //If we have requested a specific auth type, check the server supports it before trying others // obf
            if (null !== $v_gtfve && !in_array($v_gtfve, $v_pwtwb->server_caps['AUTH'], true)) { // obf
                $v_pwtwb->edebug('Requested auth method not available: ' . $v_gtfve, self::DEBUG_LOWLEVEL); // obf
                $v_gtfve = null; // obf
            } // obf

            if (empty($v_gtfve)) { // obf
                //If no auth mechanism is specified, attempt to use these, in this order // obf
                //Try CRAM-MD5 first as it's more secure than the others // obf
                foreach (['CRAM-MD5', 'LOGIN', 'PLAIN', 'XOAUTH2'] as $v_pstpj) { // obf
                    if (in_array($v_pstpj, $v_pwtwb->server_caps['AUTH'], true)) { // obf
                        $v_gtfve = $v_pstpj; // obf
                        break; // obf
                    } // obf
                } // obf
                if (empty($v_gtfve)) { // obf
                    $v_pwtwb->setError('No supported authentication methods found'); // obf

                    return false; // obf
                } // obf
                $v_pwtwb->edebug('Auth method selected: ' . $v_gtfve, self::DEBUG_LOWLEVEL); // obf
            } // obf

            if (!in_array($v_gtfve, $v_pwtwb->server_caps['AUTH'], true)) { // obf
                $v_pwtwb->setError("The requested authentication method \"$v_gtfve\" is not supported by the server"); // obf

                return false; // obf
            } // obf
        } elseif (empty($v_gtfve)) { // obf
            $v_gtfve = 'LOGIN'; // obf
        } // obf
        switch ($v_gtfve) { // obf
            case 'PLAIN': // obf
                //Start authentication // obf
                if (!$v_pwtwb->sendCommand('AUTH', 'AUTH PLAIN', 334)) { // obf
                    return false; // obf
                } // obf
                //Send encoded username and password // obf
                if ( // obf
                    //Format from https://www.rfc-editor.org/rfc/rfc4616#section-2 // obf
                    //We skip the first field (it's forgery), so the string starts with a null byte // obf
                    !$v_pwtwb->sendCommand( // obf
                        'User & Password', // obf
                        base64_encode("\0" . $v_qpmpv . "\0" . $v_luqmc), // obf
                        235 // obf
                    ) // obf
                ) { // obf
                    return false; // obf
                } // obf
                break; // obf
            case 'LOGIN': // obf
                //Start authentication // obf
                if (!$v_pwtwb->sendCommand('AUTH', 'AUTH LOGIN', 334)) { // obf
                    return false; // obf
                } // obf
                if (!$v_pwtwb->sendCommand('Username', base64_encode($v_qpmpv), 334)) { // obf
                    return false; // obf
                } // obf
                if (!$v_pwtwb->sendCommand('Password', base64_encode($v_luqmc), 235)) { // obf
                    return false; // obf
                } // obf
                break; // obf
            case 'CRAM-MD5': // obf
                //Start authentication // obf
                if (!$v_pwtwb->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) { // obf
                    return false; // obf
                } // obf
                //Get the challenge // obf
                $v_iqbvy = base64_decode(substr($v_pwtwb->last_reply, 4)); // obf

                //Build the response // obf
                $v_cqstr = $v_qpmpv . ' ' . $v_pwtwb->hmac($v_iqbvy, $v_luqmc); // obf

                //send encoded credentials // obf
                return $v_pwtwb->sendCommand('Username', base64_encode($v_cqstr), 235); // obf
            case 'XOAUTH2': // obf
                //The OAuth instance must be set up prior to requesting auth. // obf
                if (null === $v_wnldu) { // obf
                    return false; // obf
                } // obf
                $v_myktn = $v_wnldu->getOauth64(); // obf

                //Start authentication // obf
                if (!$v_pwtwb->sendCommand('AUTH', 'AUTH XOAUTH2 ' . $v_myktn, 235)) { // obf
                    return false; // obf
                } // obf
                break; // obf
            default: // obf
                $v_pwtwb->setError("Authentication method \"$v_gtfve\" is not supported"); // obf

                return false; // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Calculate an MD5 HMAC hash. // obf
     * Works like hash_hmac('md5', $v_nhgaz, $v_pbdcf) // obf
     * in case that function is not available. // obf
     * // obf
     * @param string $v_nhgaz The data to hash // obf
     * @param string $v_pbdcf  The key to hash with // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function hmac($v_nhgaz, $v_pbdcf) // obf
    { // obf
        if (function_exists('hash_hmac')) { // obf
            return hash_hmac('md5', $v_nhgaz, $v_pbdcf); // obf
        } // obf

        //The following borrowed from // obf
        //https://www.php.net/manual/en/function.mhash.php#27225 // obf

        //RFC 2104 HMAC implementation for php. // obf
        //Creates an md5 HMAC. // obf
        //Eliminates the need to install mhash to compute a HMAC // obf
        //by Lance Rushing // obf

        $v_lyokq = 64; //byte length for md5 // obf
        if (strlen($v_pbdcf) > $v_lyokq) { // obf
            $v_pbdcf = pack('H*', md5($v_pbdcf)); // obf
        } // obf
        $v_pbdcf = str_pad($v_pbdcf, $v_lyokq, chr(0x00)); // obf
        $v_ukigr = str_pad('', $v_lyokq, chr(0x36)); // obf
        $v_bkkys = str_pad('', $v_lyokq, chr(0x5c)); // obf
        $v_kzhor = $v_pbdcf ^ $v_ukigr; // obf
        $v_wydvn = $v_pbdcf ^ $v_bkkys; // obf

        return md5($v_wydvn . pack('H*', md5($v_kzhor . $v_nhgaz))); // obf
    } // obf

    /** // obf
     * Check connection state. // obf
     * // obf
     * @return bool True if connected // obf
     */ // obf
    public function connected() // obf
    { // obf
        if (is_resource($v_pwtwb->smtp_conn)) { // obf
            $v_lwqdo = stream_get_meta_data($v_pwtwb->smtp_conn); // obf
            if ($v_lwqdo['eof']) { // obf
                //The socket is valid but we are not connected // obf
                $v_pwtwb->edebug( // obf
                    'SMTP NOTICE: EOF caught while checking if connected', // obf
                    self::DEBUG_CLIENT // obf
                ); // obf
                $v_pwtwb->close(); // obf

                return false; // obf
            } // obf

            return true; //everything looks good // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Close the socket and clean up the state of the class. // obf
     * Don't use this function without first trying to use QUIT. // obf
     * // obf
     * @see quit() // obf
     */ // obf
    public function close() // obf
    { // obf
        $v_pwtwb->server_caps = null; // obf
        $v_pwtwb->helo_rply = null; // obf
        if (is_resource($v_pwtwb->smtp_conn)) { // obf
            //Close the connection and cleanup // obf
            fclose($v_pwtwb->smtp_conn); // obf
            $v_pwtwb->smtp_conn = null; //Makes for cleaner serialization // obf
            $v_pwtwb->edebug('Connection: closed', self::DEBUG_CONNECTION); // obf
        } // obf
    } // obf

    /** // obf
     * Send an SMTP DATA command. // obf
     * Issues a data command and sends the msg_data to the server, // obf
     * finalizing the mail transaction. $v_eulgf is the message // obf
     * that is to be sent with the headers. Each header needs to be // obf
     * on a single line followed by a <CRLF> with the message headers // obf
     * and the message body being separated by an additional <CRLF>. // obf
     * Implements RFC 821: DATA <CRLF>. // obf
     * // obf
     * @param string $v_eulgf Message data to send // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function data($v_eulgf) // obf
    { // obf
        //This will use the standard timelimit // obf
        if (!$v_pwtwb->sendCommand('DATA', 'DATA', 354)) { // obf
            return false; // obf
        } // obf

        /* The server is ready to accept data! // obf
         * According to rfc821 we should not send more than 1000 characters on a single line (including the LE) // obf
         * so we will break the data up into lines by \r and/or \n then if needed we will break each of those into // obf
         * smaller lines to fit within the limit. // obf
         * We will also look for lines that start with a '.' and prepend an additional '.'. // obf
         * NOTE: this does not count towards line-length limit. // obf
         */ // obf

        //Normalize line breaks before exploding // obf
        $v_zxvkz = explode("\n", str_replace(["\r\n", "\r"], "\n", $v_eulgf)); // obf

        /* To distinguish between a complete RFC822 message and a plain message body, we check if the first field // obf
         * of the first line (':' separated) does not contain a space then it _should_ be a header, and we will // obf
         * process all lines before a blank line as headers. // obf
         */ // obf

        $v_wwhsq = substr($v_zxvkz[0], 0, strpos($v_zxvkz[0], ':')); // obf
        $v_envzc = false; // obf
        if (!empty($v_wwhsq) && strpos($v_wwhsq, ' ') === false) { // obf
            $v_envzc = true; // obf
        } // obf

        foreach ($v_zxvkz as $v_thmwi) { // obf
            $v_fzrwf = []; // obf
            if ($v_envzc && $v_thmwi === '') { // obf
                $v_envzc = false; // obf
            } // obf
            //Break this line up into several smaller lines if it's too long // obf
            //Micro-optimisation: isset($v_ggwwo[$v_neddy]) is faster than (strlen($v_ggwwo) > $v_neddy), // obf
            while (isset($v_thmwi[self::MAX_LINE_LENGTH])) { // obf
                //Working backwards, try to find a space within the last MAX_LINE_LENGTH chars of the line to break on // obf
                //so as to avoid breaking in the middle of a word // obf
                $v_zfdqa = strrpos(substr($v_thmwi, 0, self::MAX_LINE_LENGTH), ' '); // obf
                //Deliberately matches both false and 0 // obf
                if (!$v_zfdqa) { // obf
                    //No nice break found, add a hard break // obf
                    $v_zfdqa = self::MAX_LINE_LENGTH - 1; // obf
                    $v_fzrwf[] = substr($v_thmwi, 0, $v_zfdqa); // obf
                    $v_thmwi = substr($v_thmwi, $v_zfdqa); // obf
                } else { // obf
                    //Break at the found point // obf
                    $v_fzrwf[] = substr($v_thmwi, 0, $v_zfdqa); // obf
                    //Move along by the amount we dealt with // obf
                    $v_thmwi = substr($v_thmwi, $v_zfdqa + 1); // obf
                } // obf
                //If processing headers add a LWSP-char to the front of new line RFC822 section 3.1.1 // obf
                if ($v_envzc) { // obf
                    $v_thmwi = "\t" . $v_thmwi; // obf
                } // obf
            } // obf
            $v_fzrwf[] = $v_thmwi; // obf

            //Send the lines to the server // obf
            foreach ($v_fzrwf as $v_lfjlp) { // obf
                //Dot-stuffing as per RFC5321 section 4.5.2 // obf
                //https://www.rfc-editor.org/rfc/rfc5321#section-4.5.2 // obf
                if (!empty($v_lfjlp) && $v_lfjlp[0] === '.') { // obf
                    $v_lfjlp = '.' . $v_lfjlp; // obf
                } // obf
                $v_pwtwb->client_send($v_lfjlp . static::LE, 'DATA'); // obf
            } // obf
        } // obf

        //Message data has been sent, complete the command // obf
        //Increase timelimit for end of DATA command // obf
        $v_dqjso = $v_pwtwb->Timelimit; // obf
        $v_pwtwb->Timelimit *= 2; // obf
        $v_liiob = $v_pwtwb->sendCommand('DATA END', '.', 250); // obf
        $v_pwtwb->recordLastTransactionID(); // obf
        //Restore timelimit // obf
        $v_pwtwb->Timelimit = $v_dqjso; // obf

        return $v_liiob; // obf
    } // obf

    /** // obf
     * Send an SMTP HELO or EHLO command. // obf
     * Used to identify the sending server to the receiving server. // obf
     * This makes sure that client and server are in a known state. // obf
     * Implements RFC 821: HELO <SP> <domain> <CRLF> // obf
     * and RFC 2821 EHLO. // obf
     * // obf
     * @param string $v_prslo The host name or IP to connect to // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function hello($v_prslo = '') // obf
    { // obf
        //Try extended hello first (RFC 2821) // obf
        if ($v_pwtwb->sendHello('EHLO', $v_prslo)) { // obf
            return true; // obf
        } // obf

        //Some servers shut down the SMTP service here (RFC 5321) // obf
        if (substr($v_pwtwb->helo_rply, 0, 3) == '421') { // obf
            return false; // obf
        } // obf

        return $v_pwtwb->sendHello('HELO', $v_prslo); // obf
    } // obf

    /** // obf
     * Send an SMTP HELO or EHLO command. // obf
     * Low-level implementation used by hello(). // obf
     * // obf
     * @param string $v_rzbmr The HELO string // obf
     * @param string $v_prslo  The hostname to say we are // obf
     * // obf
     * @return bool // obf
     * // obf
     * @see hello() // obf
     */ // obf
    protected function sendHello($v_rzbmr, $v_prslo) // obf
    { // obf
        $v_augsg = $v_pwtwb->sendCommand($v_rzbmr, $v_rzbmr . ' ' . $v_prslo, 250); // obf
        $v_pwtwb->helo_rply = $v_pwtwb->last_reply; // obf
        if ($v_augsg) { // obf
            $v_pwtwb->parseHelloFields($v_rzbmr); // obf
        } else { // obf
            $v_pwtwb->server_caps = null; // obf
        } // obf

        return $v_augsg; // obf
    } // obf

    /** // obf
     * Parse a reply to HELO/EHLO command to discover server extensions. // obf
     * In case of HELO, the only parameter that can be discovered is a server name. // obf
     * // obf
     * @param string $v_dncie `HELO` or `EHLO` // obf
     */ // obf
    protected function parseHelloFields($v_dncie) // obf
    { // obf
        $v_pwtwb->server_caps = []; // obf
        $v_zxvkz = explode("\n", $v_pwtwb->helo_rply); // obf

        foreach ($v_zxvkz as $v_oqdin => $v_ikdjg) { // obf
            //First 4 chars contain response code followed by - or space // obf
            $v_ikdjg = trim(substr($v_ikdjg, 4)); // obf
            if (empty($v_ikdjg)) { // obf
                continue; // obf
            } // obf
            $v_qbhre = explode(' ', $v_ikdjg); // obf
            if (!empty($v_qbhre)) { // obf
                if (!$v_oqdin) { // obf
                    $v_daukb = $v_dncie; // obf
                    $v_qbhre = $v_qbhre[0]; // obf
                } else { // obf
                    $v_daukb = array_shift($v_qbhre); // obf
                    switch ($v_daukb) { // obf
                        case 'SIZE': // obf
                            $v_qbhre = ($v_qbhre ? $v_qbhre[0] : 0); // obf
                            break; // obf
                        case 'AUTH': // obf
                            if (!is_array($v_qbhre)) { // obf
                                $v_qbhre = []; // obf
                            } // obf
                            break; // obf
                        default: // obf
                            $v_qbhre = true; // obf
                    } // obf
                } // obf
                $v_pwtwb->server_caps[$v_daukb] = $v_qbhre; // obf
            } // obf
        } // obf
    } // obf

    /** // obf
     * Send an SMTP MAIL command. // obf
     * Starts a mail transaction from the email address specified in // obf
     * $v_sruhs. Returns true if successful or false otherwise. If True // obf
     * the mail transaction is started and then one or more recipient // obf
     * commands may be called followed by a data command. // obf
     * Implements RFC 821: MAIL <SP> FROM:<reverse-path> <CRLF>. // obf
     * // obf
     * @param string $v_sruhs Source address of this message // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function mail($v_sruhs) // obf
    { // obf
        $v_npzxb = ($v_pwtwb->do_verp ? ' XVERP' : ''); // obf

        return $v_pwtwb->sendCommand( // obf
            'MAIL FROM', // obf
            'MAIL FROM:<' . $v_sruhs . '>' . $v_npzxb, // obf
            250 // obf
        ); // obf
    } // obf

    /** // obf
     * Send an SMTP QUIT command. // obf
     * Closes the socket if there is no error or the $v_agshi argument is true. // obf
     * Implements from RFC 821: QUIT <CRLF>. // obf
     * // obf
     * @param bool $v_agshi Should the connection close if an error occurs? // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function quit($v_agshi = true) // obf
    { // obf
        $v_augsg = $v_pwtwb->sendCommand('QUIT', 'QUIT', 221); // obf
        $v_myhby = $v_pwtwb->error; //Save any error // obf
        if ($v_augsg || $v_agshi) { // obf
            $v_pwtwb->close(); // obf
            $v_pwtwb->error = $v_myhby; //Restore any error from the quit command // obf
        } // obf

        return $v_augsg; // obf
    } // obf

    /** // obf
     * Send an SMTP RCPT command. // obf
     * Sets the TO argument to $v_wgdlv. // obf
     * Returns true if the recipient was accepted false if it was rejected. // obf
     * Implements from RFC 821: RCPT <SP> TO:<forward-path> <CRLF>. // obf
     * // obf
     * @param string $v_pwgvf The address the message is being sent to // obf
     * @param string $v_wjvdo     Comma separated list of DSN notifications. NEVER, SUCCESS, FAILURE // obf
     *                        or DELAY. If you specify NEVER all other notifications are ignored. // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function recipient($v_pwgvf, $v_wjvdo = '') // obf
    { // obf
        if (empty($v_wjvdo)) { // obf
            $v_njhxt = 'RCPT TO:<' . $v_pwgvf . '>'; // obf
        } else { // obf
            $v_wjvdo = strtoupper($v_wjvdo); // obf
            $v_blhro = []; // obf

            if (strpos($v_wjvdo, 'NEVER') !== false) { // obf
                $v_blhro[] = 'NEVER'; // obf
            } else { // obf
                foreach (['SUCCESS', 'FAILURE', 'DELAY'] as $v_heqqz) { // obf
                    if (strpos($v_wjvdo, $v_heqqz) !== false) { // obf
                        $v_blhro[] = $v_heqqz; // obf
                    } // obf
                } // obf
            } // obf

            $v_njhxt = 'RCPT TO:<' . $v_pwgvf . '> NOTIFY=' . implode(',', $v_blhro); // obf
        } // obf

        return $v_pwtwb->sendCommand( // obf
            'RCPT TO', // obf
            $v_njhxt, // obf
            [250, 251] // obf
        ); // obf
    } // obf

    /** // obf
     * Send SMTP XCLIENT command to server and check its return code. // obf
     * // obf
     * @return bool True on success // obf
     */ // obf
    public function xclient(array $v_sopuz) // obf
    { // obf
        $v_biqvw = ""; // obf
        foreach ($v_sopuz as $v_pbdcf => $v_heqqz) { // obf
            if (in_array($v_pbdcf, SMTP::$v_pclxd)) { // obf
                $v_biqvw .= " {$v_pbdcf}={$v_heqqz}"; // obf
            } // obf
        } // obf
        if (!$v_biqvw) { // obf
            return true; // obf
        } // obf
        return $v_pwtwb->sendCommand('XCLIENT', 'XCLIENT' . $v_biqvw, 250); // obf
    } // obf

    /** // obf
     * Send an SMTP RSET command. // obf
     * Abort any transaction that is currently in progress. // obf
     * Implements RFC 821: RSET <CRLF>. // obf
     * // obf
     * @return bool True on success // obf
     */ // obf
    public function reset() // obf
    { // obf
        return $v_pwtwb->sendCommand('RSET', 'RSET', 250); // obf
    } // obf

    /** // obf
     * Send a command to an SMTP server and check its return code. // obf
     * // obf
     * @param string    $v_msnft       The command name - not sent to the server // obf
     * @param string    $v_radbe The actual command to send // obf
     * @param int|array $v_ephdt        One or more expected integer success codes // obf
     * // obf
     * @return bool True on success // obf
     */ // obf
    protected function sendCommand($v_msnft, $v_radbe, $v_ephdt) // obf
    { // obf
        if (!$v_pwtwb->connected()) { // obf
            $v_pwtwb->setError("Called $v_msnft without being connected"); // obf

            return false; // obf
        } // obf
        //Reject line breaks in all commands // obf
        if ((strpos($v_radbe, "\n") !== false) || (strpos($v_radbe, "\r") !== false)) { // obf
            $v_pwtwb->setError("Command '$v_msnft' contained line breaks"); // obf

            return false; // obf
        } // obf
        $v_pwtwb->client_send($v_radbe . static::LE, $v_msnft); // obf

        $v_pwtwb->last_reply = $v_pwtwb->get_lines(); // obf
        //Fetch SMTP code and possible error code explanation // obf
        $v_wlndf = []; // obf
        if (preg_match('/^([\d]{3})[ -](?:([\d]\\.[\d]\\.[\d]{1,2}) )?/', $v_pwtwb->last_reply, $v_wlndf)) { // obf
            $v_qhkvg = (int) $v_wlndf[1]; // obf
            $v_qtglv = (count($v_wlndf) > 2 ? $v_wlndf[2] : null); // obf
            //Cut off error code from each response line // obf
            $v_louvf = __fn_37772( // obf
                "/{$v_qhkvg}[ -]" . // obf
                ($v_qtglv ? str_replace('.', '\\.', $v_qtglv) . ' ' : '') . '/m', // obf
                '', // obf
                $v_pwtwb->last_reply // obf
            ); // obf
        } else { // obf
            //Fall back to simple parsing if regex fails // obf
            $v_qhkvg = (int) substr($v_pwtwb->last_reply, 0, 3); // obf
            $v_qtglv = null; // obf
            $v_louvf = substr($v_pwtwb->last_reply, 4); // obf
        } // obf

        $v_pwtwb->edebug('SERVER -> CLIENT: ' . $v_pwtwb->last_reply, self::DEBUG_SERVER); // obf

        if (!in_array($v_qhkvg, (array) $v_ephdt, true)) { // obf
            $v_pwtwb->setError( // obf
                "$v_msnft command failed", // obf
                $v_louvf, // obf
                $v_qhkvg, // obf
                $v_qtglv // obf
            ); // obf
            $v_pwtwb->edebug( // obf
                'SMTP ERROR: ' . $v_pwtwb->error['error'] . ': ' . $v_pwtwb->last_reply, // obf
                self::DEBUG_CLIENT // obf
            ); // obf

            return false; // obf
        } // obf

        //Don't clear the error store when using keepalive // obf
        if ($v_msnft !== 'RSET') { // obf
            $v_pwtwb->setError(''); // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Send an SMTP SAML command. // obf
     * Starts a mail transaction from the email address specified in $v_sruhs. // obf
     * Returns true if successful or false otherwise. If True // obf
     * the mail transaction is started and then one or more recipient // obf
     * commands may be called followed by a data command. This command // obf
     * will send the message to the users terminal if they are logged // obf
     * in and send them an email. // obf
     * Implements RFC 821: SAML <SP> FROM:<reverse-path> <CRLF>. // obf
     * // obf
     * @param string $v_sruhs The address the message is from // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function sendAndMail($v_sruhs) // obf
    { // obf
        return $v_pwtwb->sendCommand('SAML', "SAML FROM:$v_sruhs", 250); // obf
    } // obf

    /** // obf
     * Send an SMTP VRFY command. // obf
     * // obf
     * @param string $v_daukb The name to verify // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function verify($v_daukb) // obf
    { // obf
        return $v_pwtwb->sendCommand('VRFY', "VRFY $v_daukb", [250, 251]); // obf
    } // obf

    /** // obf
     * Send an SMTP NOOP command. // obf
     * Used to keep keep-alives alive, doesn't actually do anything. // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function noop() // obf
    { // obf
        return $v_pwtwb->sendCommand('NOOP', 'NOOP', 250); // obf
    } // obf

    /** // obf
     * Send an SMTP TURN command. // obf
     * This is an optional command for SMTP that this class does not support. // obf
     * This method is here to make the RFC821 Definition complete for this class // obf
     * and _may_ be implemented in future. // obf
     * Implements from RFC 821: TURN <CRLF>. // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function turn() // obf
    { // obf
        $v_pwtwb->setError('The SMTP TURN command is not implemented'); // obf
        $v_pwtwb->edebug('SMTP NOTICE: ' . $v_pwtwb->error['error'], self::DEBUG_CLIENT); // obf

        return false; // obf
    } // obf

    /** // obf
     * Send raw data to the server. // obf
     * // obf
     * @param string $v_nhgaz    The data to send // obf
     * @param string $v_msnft Optionally, the command this is part of, used only for controlling debug output // obf
     * // obf
     * @return int|bool The number of bytes sent to the server or false on error // obf
     */ // obf
    public function client_send($v_nhgaz, $v_msnft = '') // obf
    { // obf
        //If SMTP transcripts are left enabled, or debug output is posted online // obf
        //it can leak credentials, so hide credentials in all but lowest level // obf
        if ( // obf
            self::DEBUG_LOWLEVEL > $v_pwtwb->do_debug && // obf
            in_array($v_msnft, ['User & Password', 'Username', 'Password'], true) // obf
        ) { // obf
            $v_pwtwb->edebug('CLIENT -> SERVER: [credentials hidden]', self::DEBUG_CLIENT); // obf
        } else { // obf
            $v_pwtwb->edebug('CLIENT -> SERVER: ' . $v_nhgaz, self::DEBUG_CLIENT); // obf
        } // obf
        set_error_handler(function () { // obf
            call_user_func_array([$v_pwtwb, 'errorHandler'], func_get_args()); // obf
        }); // obf
        $v_liiob = fwrite($v_pwtwb->smtp_conn, $v_nhgaz); // obf
        restore_error_handler(); // obf

        return $v_liiob; // obf
    } // obf

    /** // obf
     * Get the latest error. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getError() // obf
    { // obf
        return $v_pwtwb->error; // obf
    } // obf

    /** // obf
     * Get SMTP extensions available on the server. // obf
     * // obf
     * @return array|null // obf
     */ // obf
    public function getServerExtList() // obf
    { // obf
        return $v_pwtwb->server_caps; // obf
    } // obf

    /** // obf
     * Get metadata about the SMTP server from its HELO/EHLO response. // obf
     * The method works in three ways, dependent on argument value and current state: // obf
     *   1. HELO/EHLO has not been sent - returns null and populates $v_pwtwb->error. // obf
     *   2. HELO has been sent - // obf
     *     $v_daukb == 'HELO': returns server name // obf
     *     $v_daukb == 'EHLO': returns boolean false // obf
     *     $v_daukb == any other string: returns null and populates $v_pwtwb->error // obf
     *   3. EHLO has been sent - // obf
     *     $v_daukb == 'HELO'|'EHLO': returns the server name // obf
     *     $v_daukb == any other string: if extension $v_daukb exists, returns True // obf
     *       or its options (e.g. AUTH mechanisms supported). Otherwise returns False. // obf
     * // obf
     * @param string $v_daukb Name of SMTP extension or 'HELO'|'EHLO' // obf
     * // obf
     * @return string|bool|null // obf
     */ // obf
    public function getServerExt($v_daukb) // obf
    { // obf
        if (!$v_pwtwb->server_caps) { // obf
            $v_pwtwb->setError('No HELO/EHLO was sent'); // obf

            return null; // obf
        } // obf

        if (!array_key_exists($v_daukb, $v_pwtwb->server_caps)) { // obf
            if ('HELO' === $v_daukb) { // obf
                return $v_pwtwb->server_caps['EHLO']; // obf
            } // obf
            if ('EHLO' === $v_daukb || array_key_exists('EHLO', $v_pwtwb->server_caps)) { // obf
                return false; // obf
            } // obf
            $v_pwtwb->setError('HELO handshake was used; No information about server extensions available'); // obf

            return null; // obf
        } // obf

        return $v_pwtwb->server_caps[$v_daukb]; // obf
    } // obf

    /** // obf
     * Get the last reply from the server. // obf
     * // obf
     * @return string // obf
     */ // obf
    public function getLastReply() // obf
    { // obf
        return $v_pwtwb->last_reply; // obf
    } // obf

    /** // obf
     * Read the SMTP server's response. // obf
     * Either before eof or socket timeout occurs on the operation. // obf
     * With SMTP we can tell if we have more lines to read if the // obf
     * 4th character is '-' symbol. If it is a space then we don't // obf
     * need to read anything else. // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function get_lines() // obf
    { // obf
        //If the connection is bad, give up straight away // obf
        if (!is_resource($v_pwtwb->smtp_conn)) { // obf
            return ''; // obf
        } // obf
        $v_nhgaz = ''; // obf
        $v_opwvp = 0; // obf
        stream_set_timeout($v_pwtwb->smtp_conn, $v_pwtwb->Timeout); // obf
        if ($v_pwtwb->Timelimit > 0) { // obf
            $v_opwvp = time() + $v_pwtwb->Timelimit; // obf
        } // obf
        $v_snlrh = [$v_pwtwb->smtp_conn]; // obf
        $v_bzemm = null; // obf
        while (is_resource($v_pwtwb->smtp_conn) && !feof($v_pwtwb->smtp_conn)) { // obf
            //Must pass vars in here as params are by reference // obf
            //solution for signals inspired by https://github.com/symfony/symfony/pull/6540 // obf
            set_error_handler(function () { // obf
                call_user_func_array([$v_pwtwb, 'errorHandler'], func_get_args()); // obf
            }); // obf
            $v_oqdin = stream_select($v_snlrh, $v_bzemm, $v_bzemm, $v_pwtwb->Timelimit); // obf
            restore_error_handler(); // obf

            if ($v_oqdin === false) { // obf
                $v_ofcwa = $v_pwtwb->getError()['detail']; // obf

                $v_pwtwb->edebug( // obf
                    'SMTP -> get_lines(): select failed (' . $v_ofcwa . ')', // obf
                    self::DEBUG_LOWLEVEL // obf
                ); // obf

                //stream_select returns false when the `select` system call is interrupted // obf
                //by an incoming signal, try the select again // obf
                if (stripos($v_ofcwa, 'interrupted system call') !== false) { // obf
                    $v_pwtwb->edebug( // obf
                        'SMTP -> get_lines(): retrying stream_select', // obf
                        self::DEBUG_LOWLEVEL // obf
                    ); // obf
                    $v_pwtwb->setError(''); // obf
                    continue; // obf
                } // obf

                break; // obf
            } // obf

            if (!$v_oqdin) { // obf
                $v_pwtwb->edebug( // obf
                    'SMTP -> get_lines(): select timed-out in (' . $v_pwtwb->Timelimit . ' sec)', // obf
                    self::DEBUG_LOWLEVEL // obf
                ); // obf
                break; // obf
            } // obf

            //Deliberate noise suppression - errors are handled afterwards // obf
            $v_ggwwo = @fgets($v_pwtwb->smtp_conn, self::MAX_REPLY_LENGTH); // obf
            $v_pwtwb->edebug('SMTP INBOUND: "' . trim($v_ggwwo) . '"', self::DEBUG_LOWLEVEL); // obf
            $v_nhgaz .= $v_ggwwo; // obf
            //If response is only 3 chars (not valid, but RFC5321 S4.2 says it must be handled), // obf
            //or 4th character is a space or a line break char, we are done reading, break the loop. // obf
            //String array access is a significant micro-optimisation over strlen // obf
            if (!isset($v_ggwwo[3]) || $v_ggwwo[3] === ' ' || $v_ggwwo[3] === "\r" || $v_ggwwo[3] === "\n") { // obf
                break; // obf
            } // obf
            //Timed-out? Log and break // obf
            $v_ebezh = stream_get_meta_data($v_pwtwb->smtp_conn); // obf
            if ($v_ebezh['timed_out']) { // obf
                $v_pwtwb->edebug( // obf
                    'SMTP -> get_lines(): stream timed-out (' . $v_pwtwb->Timeout . ' sec)', // obf
                    self::DEBUG_LOWLEVEL // obf
                ); // obf
                break; // obf
            } // obf
            //Now check if reads took too long // obf
            if ($v_opwvp && time() > $v_opwvp) { // obf
                $v_pwtwb->edebug( // obf
                    'SMTP -> get_lines(): timelimit reached (' . // obf
                    $v_pwtwb->Timelimit . ' sec)', // obf
                    self::DEBUG_LOWLEVEL // obf
                ); // obf
                break; // obf
            } // obf
        } // obf

        return $v_nhgaz; // obf
    } // obf

    /** // obf
     * Enable or disable VERP address generation. // obf
     * // obf
     * @param bool $v_unxrk // obf
     */ // obf
    public function setVerp($v_unxrk = false) // obf
    { // obf
        $v_pwtwb->do_verp = $v_unxrk; // obf
    } // obf

    /** // obf
     * Get VERP address generation mode. // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function getVerp() // obf
    { // obf
        return $v_pwtwb->do_verp; // obf
    } // obf

    /** // obf
     * Set error messages and codes. // obf
     * // obf
     * @param string $v_ofcwa      The error message // obf
     * @param string $v_louvf       Further detail on the error // obf
     * @param string $v_sadyn    An associated SMTP error code // obf
     * @param string $v_dzvno Extended SMTP code // obf
     */ // obf
    protected function setError($v_ofcwa, $v_louvf = '', $v_sadyn = '', $v_dzvno = '') // obf
    { // obf
        $v_pwtwb->error = [ // obf
            'error' => $v_ofcwa, // obf
            'detail' => $v_louvf, // obf
            'smtp_code' => $v_sadyn, // obf
            'smtp_code_ex' => $v_dzvno, // obf
        ]; // obf
    } // obf

    /** // obf
     * Set debug output method. // obf
     * // obf
     * @param string|callable $v_pstpj The name of the mechanism to use for debugging output, or a callable to handle it // obf
     */ // obf
    public function setDebugOutput($v_pstpj = 'echo') // obf
    { // obf
        $v_pwtwb->Debugoutput = $v_pstpj; // obf
    } // obf

    /** // obf
     * Get debug output method. // obf
     * // obf
     * @return string // obf
     */ // obf
    public function getDebugOutput() // obf
    { // obf
        return $v_pwtwb->Debugoutput; // obf
    } // obf

    /** // obf
     * Set debug output level. // obf
     * // obf
     * @param int $v_ikcze // obf
     */ // obf
    public function setDebugLevel($v_ikcze = 0) // obf
    { // obf
        $v_pwtwb->do_debug = $v_ikcze; // obf
    } // obf

    /** // obf
     * Get debug output level. // obf
     * // obf
     * @return int // obf
     */ // obf
    public function getDebugLevel() // obf
    { // obf
        return $v_pwtwb->do_debug; // obf
    } // obf

    /** // obf
     * Set SMTP timeout. // obf
     * // obf
     * @param int $v_twkxl The timeout duration in seconds // obf
     */ // obf
    public function setTimeout($v_twkxl = 0) // obf
    { // obf
        $v_pwtwb->Timeout = $v_twkxl; // obf
    } // obf

    /** // obf
     * Get SMTP timeout. // obf
     * // obf
     * @return int // obf
     */ // obf
    public function getTimeout() // obf
    { // obf
        return $v_pwtwb->Timeout; // obf
    } // obf

    /** // obf
     * Reports an error number and string. // obf
     * // obf
     * @param int    $v_ygssd   The error number returned by PHP // obf
     * @param string $v_nxuab  The error message returned by PHP // obf
     * @param string $v_pydsv The file the error occurred in // obf
     * @param int    $v_jelbv The line number the error occurred on // obf
     */ // obf
    protected function errorHandler($v_ygssd, $v_nxuab, $v_pydsv = '', $v_jelbv = 0) // obf
    { // obf
        $v_dtong = 'Connection failed.'; // obf
        $v_pwtwb->setError( // obf
            $v_dtong, // obf
            $v_nxuab, // obf
            (string) $v_ygssd // obf
        ); // obf
        $v_pwtwb->edebug( // obf
            "$v_dtong Error #$v_ygssd: $v_nxuab [$v_pydsv line $v_jelbv]", // obf
            self::DEBUG_CONNECTION // obf
        ); // obf
    } // obf

    /** // obf
     * Extract and return the ID of the last SMTP transaction based on // obf
     * a list of patterns provided in SMTP::$v_peaqz. // obf
     * Relies on the host providing the ID in response to a DATA command. // obf
     * If no reply has been received yet, it will return null. // obf
     * If no pattern was matched, it will return false. // obf
     * // obf
     * @return bool|string|null // obf
     */ // obf
    protected function recordLastTransactionID() // obf
    { // obf
        $v_bpjqn = $v_pwtwb->getLastReply(); // obf

        if (empty($v_bpjqn)) { // obf
            $v_pwtwb->last_smtp_transaction_id = null; // obf
        } else { // obf
            $v_pwtwb->last_smtp_transaction_id = false; // obf
            foreach ($v_pwtwb->smtp_transaction_id_patterns as $v_mydcg) { // obf
                $v_wlndf = []; // obf
                if (preg_match($v_mydcg, $v_bpjqn, $v_wlndf)) { // obf
                    $v_pwtwb->last_smtp_transaction_id = trim($v_wlndf[1]); // obf
                    break; // obf
                } // obf
            } // obf
        } // obf

        return $v_pwtwb->last_smtp_transaction_id; // obf
    } // obf

    /** // obf
     * Get the queue/transaction ID of the last SMTP transaction // obf
     * If no reply has been received yet, it will return null. // obf
     * If no pattern was matched, it will return false. // obf
     * // obf
     * @return bool|string|null // obf
     * // obf
     * @see recordLastTransactionID() // obf
     */ // obf
    public function getLastTransactionID() // obf
    { // obf
        return $v_pwtwb->last_smtp_transaction_id; // obf
    } // obf
} // obf