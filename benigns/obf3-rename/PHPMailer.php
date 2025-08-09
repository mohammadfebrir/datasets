
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * PHPMailer - PHP email creation and transport class. // obf
 * PHP Version 5.5. // obf
 * // obf
 * @see https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project // obf
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
 * PHPMailer - PHP email creation and transport class. // obf
 * // obf
 * @author Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk> // obf
 * @author Jim Jagielski (jimjag) <jimjag@gmail.com> // obf
 * @author Andy Prevost (codeworxtech) <codeworxtech@users.sourceforge.net> // obf
 * @author Brent R. Matzelle (original founder) // obf
 */ // obf
class PHPMailer // obf
{ // obf
    const CHARSET_ASCII = 'us-ascii'; // obf
    const CHARSET_ISO88591 = 'iso-8859-1'; // obf
    const CHARSET_UTF8 = 'utf-8'; // obf

    const CONTENT_TYPE_PLAINTEXT = 'text/plain'; // obf
    const CONTENT_TYPE_TEXT_CALENDAR = 'text/calendar'; // obf
    const CONTENT_TYPE_TEXT_HTML = 'text/html'; // obf
    const CONTENT_TYPE_MULTIPART_ALTERNATIVE = 'multipart/alternative'; // obf
    const CONTENT_TYPE_MULTIPART_MIXED = 'multipart/mixed'; // obf
    const CONTENT_TYPE_MULTIPART_RELATED = 'multipart/related'; // obf

    const ENCODING_7BIT = '7bit'; // obf
    const ENCODING_8BIT = '8bit'; // obf
    const ENCODING_BASE64 = 'base64'; // obf
    const ENCODING_BINARY = 'binary'; // obf
    const ENCODING_QUOTED_PRINTABLE = 'quoted-printable'; // obf

    const ENCRYPTION_STARTTLS = 'tls'; // obf
    const ENCRYPTION_SMTPS = 'ssl'; // obf

    const ICAL_METHOD_REQUEST = 'REQUEST'; // obf
    const ICAL_METHOD_PUBLISH = 'PUBLISH'; // obf
    const ICAL_METHOD_REPLY = 'REPLY'; // obf
    const ICAL_METHOD_ADD = 'ADD'; // obf
    const ICAL_METHOD_CANCEL = 'CANCEL'; // obf
    const ICAL_METHOD_REFRESH = 'REFRESH'; // obf
    const ICAL_METHOD_COUNTER = 'COUNTER'; // obf
    const ICAL_METHOD_DECLINECOUNTER = 'DECLINECOUNTER'; // obf

    /** // obf
     * Email priority. // obf
     * Options: null (default), 1 = High, 3 = Normal, 5 = low. // obf
     * When null, the header is not set at all. // obf
     * // obf
     * @var int|null // obf
     */ // obf
    public $v_eifto; // obf

    /** // obf
     * The character set of the message. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_pfhty = self::CHARSET_ISO88591; // obf

    /** // obf
     * The MIME Content-type of the message. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_yssvg = self::CONTENT_TYPE_PLAINTEXT; // obf

    /** // obf
     * The message encoding. // obf
     * Options: "8bit", "7bit", "binary", "base64", and "quoted-printable". // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_egijf = self::ENCODING_8BIT; // obf

    /** // obf
     * Holds the most recent mailer error message. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_pahfy = ''; // obf

    /** // obf
     * The From email address for the message. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_mhulw = ''; // obf

    /** // obf
     * The From name of the message. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_eqoui = ''; // obf

    /** // obf
     * The envelope sender of the message. // obf
     * This will usually be turned into a Return-Path header by the receiver, // obf
     * and is the address that bounces will be sent to. // obf
     * If not empty, will be passed via `-f` to sendmail or as the 'MAIL FROM' value over SMTP. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_ywsyw = ''; // obf

    /** // obf
     * The Subject of the message. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_nckzf = ''; // obf

    /** // obf
     * An HTML or plain text message body. // obf
     * If HTML then call isHTML(true). // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_djqob = ''; // obf

    /** // obf
     * The plain-text message body. // obf
     * This body can be read by mail clients that do not have HTML email // obf
     * capability such as mutt & Eudora. // obf
     * Clients that can read HTML will view the normal Body. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_kuqdj = ''; // obf

    /** // obf
     * An iCal message part body. // obf
     * Only supported in simple alt or alt_inline message types // obf
     * To generate iCal event structures, use classes like EasyPeasyICS or iCalcreator. // obf
     * // obf
     * @see https://kigkonsult.se/iCalcreator/ // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_keomg = ''; // obf

    /** // obf
     * Value-array of "method" in Contenttype header "text/calendar" // obf
     * // obf
     * @var string[] // obf
     */ // obf
    protected static $v_bairn = [ // obf
        self::ICAL_METHOD_REQUEST, // obf
        self::ICAL_METHOD_PUBLISH, // obf
        self::ICAL_METHOD_REPLY, // obf
        self::ICAL_METHOD_ADD, // obf
        self::ICAL_METHOD_CANCEL, // obf
        self::ICAL_METHOD_REFRESH, // obf
        self::ICAL_METHOD_COUNTER, // obf
        self::ICAL_METHOD_DECLINECOUNTER, // obf
    ]; // obf

    /** // obf
     * The complete compiled MIME message body. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_ehplo = ''; // obf

    /** // obf
     * The complete compiled MIME message headers. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_xjgwf = ''; // obf

    /** // obf
     * Extra headers that createHeader() doesn't fold in. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_xdhxx = ''; // obf

    /** // obf
     * Word-wrap the message body to this number of chars. // obf
     * Set to 0 to not wrap. A useful value here is 78, for RFC2822 section 2.1.1 compliance. // obf
     * // obf
     * @see static::STD_LINE_LENGTH // obf
     * // obf
     * @var int // obf
     */ // obf
    public $v_yhfxh = 0; // obf

    /** // obf
     * Which method to use to send mail. // obf
     * Options: "mail", "sendmail", or "smtp". // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_rwipb = 'mail'; // obf

    /** // obf
     * The path to the sendmail program. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_tjyqd = '/usr/sbin/sendmail'; // obf

    /** // obf
     * Whether mail() uses a fully sendmail-compatible MTA. // obf
     * One which supports sendmail's "-oi -f" options. // obf
     * // obf
     * @var bool // obf
     */ // obf
    public $v_qxuhn = true; // obf

    /** // obf
     * The email address that a reading confirmation should be sent to, also known as read receipt. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_ivlih = ''; // obf

    /** // obf
     * The hostname to use in the Message-ID header and as default HELO string. // obf
     * If empty, PHPMailer attempts to find one with, in order, // obf
     * $v_lnjnt['SERVER_NAME'], gethostname(), php_uname('n'), or the value // obf
     * 'localhost.localdomain'. // obf
     * // obf
     * @see PHPMailer::$v_ddlvw // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_fzgba = ''; // obf

    /** // obf
     * An ID to be used in the Message-ID header. // obf
     * If empty, a unique id will be generated. // obf
     * You can set your own, but it must be in the format "<id@domain>", // obf
     * as defined in RFC5322 section 3.6.4 or it will be ignored. // obf
     * // obf
     * @see https://www.rfc-editor.org/rfc/rfc5322#section-3.6.4 // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_vyphu = ''; // obf

    /** // obf
     * The message Date to be used in the Date header. // obf
     * If empty, the current date will be added. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_wzauw = ''; // obf

    /** // obf
     * SMTP hosts. // obf
     * Either a single hostname or multiple semicolon-delimited hostnames. // obf
     * You can also specify a different port // obf
     * for each host by using this format: [hostname:port] // obf
     * (e.g. "smtp1.example.com:25;smtp2.example.com"). // obf
     * You can also specify encryption type, for example: // obf
     * (e.g. "tls://smtp1.example.com:587;ssl://smtp2.example.com:465"). // obf
     * Hosts will be tried in order. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_nbohs = 'localhost'; // obf

    /** // obf
     * The default SMTP server port. // obf
     * // obf
     * @var int // obf
     */ // obf
    public $v_lemqd = 25; // obf

    /** // obf
     * The SMTP HELO/EHLO name used for the SMTP connection. // obf
     * Default is $v_fzgba. If $v_fzgba is empty, PHPMailer attempts to find // obf
     * one with the same method described above for $v_fzgba. // obf
     * // obf
     * @see PHPMailer::$v_fzgba // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_ddlvw = ''; // obf

    /** // obf
     * What kind of encryption to use on the SMTP connection. // obf
     * Options: '', static::ENCRYPTION_STARTTLS, or static::ENCRYPTION_SMTPS. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_cgdfk = ''; // obf

    /** // obf
     * Whether to enable TLS encryption automatically if a server supports it, // obf
     * even if `SMTPSecure` is not set to 'tls'. // obf
     * Be aware that in PHP >= 5.6 this requires that the server's certificates are valid. // obf
     * // obf
     * @var bool // obf
     */ // obf
    public $v_rrvgi = true; // obf

    /** // obf
     * Whether to use SMTP authentication. // obf
     * Uses the Username and Password properties. // obf
     * // obf
     * @see PHPMailer::$v_rgmmr // obf
     * @see PHPMailer::$v_bevwv // obf
     * // obf
     * @var bool // obf
     */ // obf
    public $v_ltaxb = false; // obf

    /** // obf
     * Options array passed to stream_context_create when connecting via SMTP. // obf
     * // obf
     * @var array // obf
     */ // obf
    public $v_hgbud = []; // obf

    /** // obf
     * SMTP username. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_rgmmr = ''; // obf

    /** // obf
     * SMTP password. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_bevwv = ''; // obf

    /** // obf
     * SMTP authentication type. Options are CRAM-MD5, LOGIN, PLAIN, XOAUTH2. // obf
     * If not specified, the first one from that list that the server supports will be selected. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_qguay = ''; // obf

    /** // obf
     * SMTP SMTPXClient command attributes // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_itrkr = []; // obf

    /** // obf
     * An implementation of the PHPMailer OAuthTokenProvider interface. // obf
     * // obf
     * @var OAuthTokenProvider // obf
     */ // obf
    protected $v_kbzze; // obf

    /** // obf
     * The SMTP server timeout in seconds. // obf
     * Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2. // obf
     * // obf
     * @var int // obf
     */ // obf
    public $v_ivhah = 300; // obf

    /** // obf
     * Comma separated list of DSN notifications // obf
     * 'NEVER' under no circumstances a DSN must be returned to the sender. // obf
     *         If you use NEVER all other notifications will be ignored. // obf
     * 'SUCCESS' will notify you when your mail has arrived at its destination. // obf
     * 'FAILURE' will arrive if an error occurred during delivery. // obf
     * 'DELAY'   will notify you if there is an unusual delay in delivery, but the actual // obf
     *           delivery's outcome (success or failure) is not yet decided. // obf
     * // obf
     * @see https://www.rfc-editor.org/rfc/rfc3461.html#section-4.1 for more information about NOTIFY // obf
     */ // obf
    public $v_cqigf = ''; // obf

    /** // obf
     * SMTP class debug output mode. // obf
     * Debug output level. // obf
     * Options: // obf
     * @see SMTP::DEBUG_OFF: No output // obf
     * @see SMTP::DEBUG_CLIENT: Client messages // obf
     * @see SMTP::DEBUG_SERVER: Client and server messages // obf
     * @see SMTP::DEBUG_CONNECTION: As SERVER plus connection status // obf
     * @see SMTP::DEBUG_LOWLEVEL: Noisy, low-level data output, rarely needed // obf
     * // obf
     * @see SMTP::$v_idtms // obf
     * // obf
     * @var int // obf
     */ // obf
    public $v_djgiw = 0; // obf

    /** // obf
     * How to handle debug output. // obf
     * Options: // obf
     * * `echo` Output plain-text as-is, appropriate for CLI // obf
     * * `html` Output escaped, line breaks converted to `<br>`, appropriate for browser output // obf
     * * `error_log` Output to error log as configured in php.ini // obf
     * By default PHPMailer will use `echo` if run from a `cli` or `cli-server` SAPI, `html` otherwise. // obf
     * Alternatively, you can provide a callable expecting two params: a message string and the debug level: // obf
     * // obf
     * ```php // obf
     * $v_paeyz->Debugoutput = function($v_pdnxe, $v_nkdgx) {echo "debug level $v_nkdgx; message: $v_pdnxe";}; // obf
     * ``` // obf
     * // obf
     * Alternatively, you can pass in an instance of a PSR-3 compatible logger, though only `debug` // obf
     * level output is used: // obf
     * // obf
     * ```php // obf
     * $v_paeyz->Debugoutput = new myPsr3Logger; // obf
     * ``` // obf
     * // obf
     * @see SMTP::$v_eysxf // obf
     * // obf
     * @var string|callable|\Psr\Log\LoggerInterface // obf
     */ // obf
    public $v_eysxf = 'echo'; // obf

    /** // obf
     * Whether to keep the SMTP connection open after each message. // obf
     * If this is set to true then the connection will remain open after a send, // obf
     * and closing the connection will require an explicit call to smtpClose(). // obf
     * It's a good idea to use this if you are sending multiple messages as it reduces overhead. // obf
     * See the mailing list example for how to use it. // obf
     * // obf
     * @var bool // obf
     */ // obf
    public $v_uglux = false; // obf

    /** // obf
     * Whether to split multiple to addresses into multiple messages // obf
     * or send them all in one message. // obf
     * Only supported in `mail` and `sendmail` transports, not in SMTP. // obf
     * // obf
     * @var bool // obf
     * // obf
     * @deprecated 6.0.0 PHPMailer isn't a mailing list manager! // obf
     */ // obf
    public $v_cuhtn = false; // obf

    /** // obf
     * Storage for addresses when SingleTo is enabled. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_lqgti = []; // obf

    /** // obf
     * Whether to generate VERP addresses on send. // obf
     * Only applicable when sending via SMTP. // obf
     * // obf
     * @see https://en.wikipedia.org/wiki/Variable_envelope_return_path // obf
     * @see https://www.postfix.org/VERP_README.html Postfix VERP info // obf
     * // obf
     * @var bool // obf
     */ // obf
    public $v_dclst = false; // obf

    /** // obf
     * Whether to allow sending messages with an empty body. // obf
     * // obf
     * @var bool // obf
     */ // obf
    public $v_xkukt = false; // obf

    /** // obf
     * DKIM selector. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_dbsbi = ''; // obf

    /** // obf
     * DKIM Identity. // obf
     * Usually the email address used as the source of the email. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_mcagz = ''; // obf

    /** // obf
     * DKIM passphrase. // obf
     * Used if your key is encrypted. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_kolro = ''; // obf

    /** // obf
     * DKIM signing domain name. // obf
     * // obf
     * @example 'example.com' // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_fadon = ''; // obf

    /** // obf
     * DKIM Copy header field values for diagnostic use. // obf
     * // obf
     * @var bool // obf
     */ // obf
    public $v_drtge = true; // obf

    /** // obf
     * DKIM Extra signing headers. // obf
     * // obf
     * @example ['List-Unsubscribe', 'List-Help'] // obf
     * // obf
     * @var array // obf
     */ // obf
    public $v_zbern = []; // obf

    /** // obf
     * DKIM private key file path. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_msvvr = ''; // obf

    /** // obf
     * DKIM private key string. // obf
     * // obf
     * If set, takes precedence over `$v_msvvr`. // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_jbqxf = ''; // obf

    /** // obf
     * Callback Action function name. // obf
     * // obf
     * The function that handles the result of the send email action. // obf
     * It is called out by send() for each email sent. // obf
     * // obf
     * Value can be any php callable: https://www.php.net/is_callable // obf
     * // obf
     * Parameters: // obf
     *   bool $v_yfstf           result of the send action // obf
     *   array   $v_jidup            email addresses of the recipients // obf
     *   array   $v_muspo            cc email addresses // obf
     *   array   $v_xcoas           bcc email addresses // obf
     *   string  $v_hjses       the subject // obf
     *   string  $v_zteze          the email body // obf
     *   string  $v_ilgvd          email address of sender // obf
     *   string  $v_hkluy         extra information of possible use // obf
     *                          "smtp_transaction_id' => last smtp transaction id // obf
     * // obf
     * @var string // obf
     */ // obf
    public $v_hvnru = ''; // obf

    /** // obf
     * What to put in the X-Mailer header. // obf
     * Options: An empty string for PHPMailer default, whitespace/null for none, or a string to use. // obf
     * // obf
     * @var string|null // obf
     */ // obf
    public $v_asmvd = ''; // obf

    /** // obf
     * Which validator to use by default when validating email addresses. // obf
     * May be a callable to inject your own validator, but there are several built-in validators. // obf
     * The default validator uses PHP's FILTER_VALIDATE_EMAIL filter_var option. // obf
     * // obf
     * @see PHPMailer::validateAddress() // obf
     * // obf
     * @var string|callable // obf
     */ // obf
    public static $v_etxva = 'php'; // obf

    /** // obf
     * An instance of the SMTP sender class. // obf
     * // obf
     * @var SMTP // obf
     */ // obf
    protected $v_zbkte; // obf

    /** // obf
     * The array of 'to' names and addresses. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_jidup = []; // obf

    /** // obf
     * The array of 'cc' names and addresses. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_muspo = []; // obf

    /** // obf
     * The array of 'bcc' names and addresses. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_xcoas = []; // obf

    /** // obf
     * The array of reply-to names and addresses. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_sgldd = []; // obf

    /** // obf
     * An array of all kinds of addresses. // obf
     * Includes all of $v_jidup, $v_muspo, $v_xcoas. // obf
     * // obf
     * @see PHPMailer::$v_jidup // obf
     * @see PHPMailer::$v_muspo // obf
     * @see PHPMailer::$v_xcoas // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_fmwaa = []; // obf

    /** // obf
     * An array of names and addresses queued for validation. // obf
     * In send(), valid and non duplicate entries are moved to $v_fmwaa // obf
     * and one of $v_jidup, $v_muspo, or $v_xcoas. // obf
     * This array is used only for addresses with IDN. // obf
     * // obf
     * @see PHPMailer::$v_jidup // obf
     * @see PHPMailer::$v_muspo // obf
     * @see PHPMailer::$v_xcoas // obf
     * @see PHPMailer::$v_fmwaa // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_dnexd = []; // obf

    /** // obf
     * An array of reply-to names and addresses queued for validation. // obf
     * In send(), valid and non duplicate entries are moved to $v_sgldd. // obf
     * This array is used only for addresses with IDN. // obf
     * // obf
     * @see PHPMailer::$v_sgldd // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_ihyfd = []; // obf

    /** // obf
     * The array of attachments. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_zaexf = []; // obf

    /** // obf
     * The array of custom headers. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_ztuoe = []; // obf

    /** // obf
     * The most recent Message-ID (including angular brackets). // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_gbeno = ''; // obf

    /** // obf
     * The message's MIME type. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_fllio = ''; // obf

    /** // obf
     * The array of MIME boundary strings. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_dpasf = []; // obf

    /** // obf
     * The array of available text strings for the current language. // obf
     * // obf
     * @var array // obf
     */ // obf
    protected $v_exstq = []; // obf

    /** // obf
     * The number of errors encountered. // obf
     * // obf
     * @var int // obf
     */ // obf
    protected $v_egcjr = 0; // obf

    /** // obf
     * The S/MIME certificate file path. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_nfqrv = ''; // obf

    /** // obf
     * The S/MIME key file path. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_agyyb = ''; // obf

    /** // obf
     * The optional S/MIME extra certificates ("CA Chain") file path. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_qthhr = ''; // obf

    /** // obf
     * The S/MIME password for the key. // obf
     * Used only if the key is encrypted. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_oojob = ''; // obf

    /** // obf
     * Whether to throw exceptions for errors. // obf
     * // obf
     * @var bool // obf
     */ // obf
    protected $v_netln = false; // obf

    /** // obf
     * Unique ID used for message ID and boundaries. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected $v_yazlb = ''; // obf

    /** // obf
     * The PHPMailer Version number. // obf
     * // obf
     * @var string // obf
     */ // obf
    const VERSION = '6.9.3'; // obf

    /** // obf
     * Error severity: message only, continue processing. // obf
     * // obf
     * @var int // obf
     */ // obf
    const STOP_MESSAGE = 0; // obf

    /** // obf
     * Error severity: message, likely ok to continue processing. // obf
     * // obf
     * @var int // obf
     */ // obf
    const STOP_CONTINUE = 1; // obf

    /** // obf
     * Error severity: message, plus full stop, critical error reached. // obf
     * // obf
     * @var int // obf
     */ // obf
    const STOP_CRITICAL = 2; // obf

    /** // obf
     * The SMTP standard CRLF line break. // obf
     * If you want to change line break format, change static::$v_svhje, not this. // obf
     */ // obf
    const CRLF = "\r\n"; // obf

    /** // obf
     * "Folding White Space" a white space string used for line folding. // obf
     */ // obf
    const FWS = ' '; // obf

    /** // obf
     * SMTP RFC standard line ending; Carriage Return, Line Feed. // obf
     * // obf
     * @var string // obf
     */ // obf
    protected static $v_svhje = self::CRLF; // obf

    /** // obf
     * The maximum line length supported by mail(). // obf
     * // obf
     * Background: mail() will sometimes corrupt messages // obf
     * with headers longer than 65 chars, see #818. // obf
     * // obf
     * @var int // obf
     */ // obf
    const MAIL_MAX_LINE_LENGTH = 63; // obf

    /** // obf
     * The maximum line length allowed by RFC 2822 section 2.1.1. // obf
     * // obf
     * @var int // obf
     */ // obf
    const MAX_LINE_LENGTH = 998; // obf

    /** // obf
     * The lower maximum line length allowed by RFC 2822 section 2.1.1. // obf
     * This length does NOT include the line break // obf
     * 76 means that lines will be 77 or 78 chars depending on whether // obf
     * the line break format is LF or CRLF; both are valid. // obf
     * // obf
     * @var int // obf
     */ // obf
    const STD_LINE_LENGTH = 76; // obf

    /** // obf
     * Constructor. // obf
     * // obf
     * @param bool $v_netln Should we throw external exceptions? // obf
     */ // obf
    public function __construct($v_netln = null) // obf
    { // obf
        if (null !== $v_netln) { // obf
            $v_jrevf->exceptions = (bool) $v_netln; // obf
        } // obf
        //Pick an appropriate debug output format automatically // obf
        $v_jrevf->Debugoutput = (strpos(PHP_SAPI, 'cli') !== false ? 'echo' : 'html'); // obf
    } // obf

    /** // obf
     * Destructor. // obf
     */ // obf
    public function __destruct() // obf
    { // obf
        //Close any open SMTP connection nicely // obf
        $v_jrevf->smtpClose(); // obf
    } // obf

    /** // obf
     * Call mail() in a safe_mode-aware fashion. // obf
     * Also, unless sendmail_path points to sendmail (or something that // obf
     * claims to be sendmail), don't pass params (not a perfect fix, // obf
     * but it will do). // obf
     * // obf
     * @param string      $v_jidup      To // obf
     * @param string      $v_hjses Subject // obf
     * @param string      $v_zteze    Message Body // obf
     * @param string      $v_qwatj  Additional Header(s) // obf
     * @param string|null $v_yjpsl  Params // obf
     * // obf
     * @return bool // obf
     */ // obf
    private function mailPassthru($v_jidup, $v_hjses, $v_zteze, $v_qwatj, $v_yjpsl) // obf
    { // obf
        //Check overloading of mail function to avoid double-encoding // obf
        if ((int)ini_get('mbstring.func_overload') & 1) { // phpcs:ignore PHPCompatibility.IniDirectives.RemovedIniDirectives.mbstring_func_overloadDeprecated // obf
            $v_hjses = $v_jrevf->secureHeader($v_hjses); // obf
        } else { // obf
            $v_hjses = $v_jrevf->encodeHeader($v_jrevf->secureHeader($v_hjses)); // obf
        } // obf
        //Calling mail() with null params breaks // obf
        $v_jrevf->edebug('Sending with mail()'); // obf
        $v_jrevf->edebug('Sendmail path: ' . ini_get('sendmail_path')); // obf
        $v_jrevf->edebug("Envelope sender: {$v_jrevf->Sender}"); // obf
        $v_jrevf->edebug("To: {$v_jidup}"); // obf
        $v_jrevf->edebug("Subject: {$v_hjses}"); // obf
        $v_jrevf->edebug("Headers: {$v_qwatj}"); // obf
        if (!$v_jrevf->UseSendmailOptions || null === $v_yjpsl) { // obf
            $v_yfstf = @mail($v_jidup, $v_hjses, $v_zteze, $v_qwatj); // obf
        } else { // obf
            $v_jrevf->edebug("Additional params: {$v_yjpsl}"); // obf
            $v_yfstf = @mail($v_jidup, $v_hjses, $v_zteze, $v_qwatj, $v_yjpsl); // obf
        } // obf
        $v_jrevf->edebug('Result: ' . ($v_yfstf ? 'true' : 'false')); // obf
        return $v_yfstf; // obf
    } // obf

    /** // obf
     * Output debugging info via a user-defined method. // obf
     * Only generates output if debug output is enabled. // obf
     * // obf
     * @see PHPMailer::$v_eysxf // obf
     * @see PHPMailer::$v_djgiw // obf
     * // obf
     * @param string $v_pdnxe // obf
     */ // obf
    protected function edebug($v_pdnxe) // obf
    { // obf
        if ($v_jrevf->SMTPDebug <= 0) { // obf
            return; // obf
        } // obf
        //Is this a PSR-3 logger? // obf
        if ($v_jrevf->Debugoutput instanceof \Psr\Log\LoggerInterface) { // obf
            $v_jrevf->Debugoutput->debug(rtrim($v_pdnxe, "\r\n")); // obf

            return; // obf
        } // obf
        //Avoid clash with built-in function names // obf
        if (is_callable($v_jrevf->Debugoutput) && !in_array($v_jrevf->Debugoutput, ['error_log', 'html', 'echo'])) { // obf
            call_user_func($v_jrevf->Debugoutput, $v_pdnxe, $v_jrevf->SMTPDebug); // obf

            return; // obf
        } // obf
        switch ($v_jrevf->Debugoutput) { // obf
            case 'error_log': // obf
                //Don't output, just log // obf
                /** @noinspection ForgottenDebugOutputInspection */ // obf
                error_log($v_pdnxe); // obf
                break; // obf
            case 'html': // obf
                //Cleans up output a bit for a better looking, HTML-safe output // obf
                echo htmlentities( // obf
                    __fn_37772('/[\r\n]+/', '', $v_pdnxe), // obf
                    ENT_QUOTES, // obf
                    'UTF-8' // obf
                ), "<br>\n"; // obf
                break; // obf
            case 'echo': // obf
            default: // obf
                //Normalize line breaks // obf
                $v_pdnxe = __fn_37772('/\r\n|\r/m', "\n", $v_pdnxe); // obf
                echo gmdate('Y-m-d H:i:s'), // obf
                "\t", // obf
                    //Trim trailing space // obf
                trim( // obf
                    //Indent for readability, except for trailing break // obf
                    str_replace( // obf
                        "\n", // obf
                        "\n                   \t                  ", // obf
                        trim($v_pdnxe) // obf
                    ) // obf
                ), // obf
                "\n"; // obf
        } // obf
    } // obf

    /** // obf
     * Sets message type to HTML or plain. // obf
     * // obf
     * @param bool $v_hnnzh True for HTML mode // obf
     */ // obf
    public function isHTML($v_hnnzh = true) // obf
    { // obf
        if ($v_hnnzh) { // obf
            $v_jrevf->ContentType = static::CONTENT_TYPE_TEXT_HTML; // obf
        } else { // obf
            $v_jrevf->ContentType = static::CONTENT_TYPE_PLAINTEXT; // obf
        } // obf
    } // obf

    /** // obf
     * Send messages using SMTP. // obf
     */ // obf
    public function isSMTP() // obf
    { // obf
        $v_jrevf->Mailer = 'smtp'; // obf
    } // obf

    /** // obf
     * Send messages using PHP's mail() function. // obf
     */ // obf
    public function isMail() // obf
    { // obf
        $v_jrevf->Mailer = 'mail'; // obf
    } // obf

    /** // obf
     * Send messages using $v_tjyqd. // obf
     */ // obf
    public function isSendmail() // obf
    { // obf
        $v_feeer = ini_get('sendmail_path'); // obf

        if (false === stripos($v_feeer, 'sendmail')) { // obf
            $v_jrevf->Sendmail = '/usr/sbin/sendmail'; // obf
        } else { // obf
            $v_jrevf->Sendmail = $v_feeer; // obf
        } // obf
        $v_jrevf->Mailer = 'sendmail'; // obf
    } // obf

    /** // obf
     * Send messages using qmail. // obf
     */ // obf
    public function isQmail() // obf
    { // obf
        $v_feeer = ini_get('sendmail_path'); // obf

        if (false === stripos($v_feeer, 'qmail')) { // obf
            $v_jrevf->Sendmail = '/var/qmail/bin/qmail-inject'; // obf
        } else { // obf
            $v_jrevf->Sendmail = $v_feeer; // obf
        } // obf
        $v_jrevf->Mailer = 'qmail'; // obf
    } // obf

    /** // obf
     * Add a "To" address. // obf
     * // obf
     * @param string $v_djyim The email address to send to // obf
     * @param string $v_rzcco // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool true on success, false if address already used or invalid in some way // obf
     */ // obf
    public function addAddress($v_djyim, $v_rzcco = '') // obf
    { // obf
        return $v_jrevf->addOrEnqueueAnAddress('to', $v_djyim, $v_rzcco); // obf
    } // obf

    /** // obf
     * Add a "CC" address. // obf
     * // obf
     * @param string $v_djyim The email address to send to // obf
     * @param string $v_rzcco // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool true on success, false if address already used or invalid in some way // obf
     */ // obf
    public function addCC($v_djyim, $v_rzcco = '') // obf
    { // obf
        return $v_jrevf->addOrEnqueueAnAddress('cc', $v_djyim, $v_rzcco); // obf
    } // obf

    /** // obf
     * Add a "BCC" address. // obf
     * // obf
     * @param string $v_djyim The email address to send to // obf
     * @param string $v_rzcco // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool true on success, false if address already used or invalid in some way // obf
     */ // obf
    public function addBCC($v_djyim, $v_rzcco = '') // obf
    { // obf
        return $v_jrevf->addOrEnqueueAnAddress('bcc', $v_djyim, $v_rzcco); // obf
    } // obf

    /** // obf
     * Add a "Reply-To" address. // obf
     * // obf
     * @param string $v_djyim The email address to reply to // obf
     * @param string $v_rzcco // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool true on success, false if address already used or invalid in some way // obf
     */ // obf
    public function addReplyTo($v_djyim, $v_rzcco = '') // obf
    { // obf
        return $v_jrevf->addOrEnqueueAnAddress('Reply-To', $v_djyim, $v_rzcco); // obf
    } // obf

    /** // obf
     * Add an address to one of the recipient arrays or to the ReplyTo array. Because PHPMailer // obf
     * can't validate addresses with an IDN without knowing the PHPMailer::$v_pfhty (that can still // obf
     * be modified after calling this function), addition of such addresses is delayed until send(). // obf
     * Addresses that have been added already return false, but do not throw exceptions. // obf
     * // obf
     * @param string $v_fobhy    One of 'to', 'cc', 'bcc', or 'Reply-To' // obf
     * @param string $v_djyim The email address // obf
     * @param string $v_rzcco    An optional username associated with the address // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool true on success, false if address already used or invalid in some way // obf
     */ // obf
    protected function addOrEnqueueAnAddress($v_fobhy, $v_djyim, $v_rzcco) // obf
    { // obf
        $v_zljdr = false; // obf
        if ($v_djyim !== null) { // obf
            $v_djyim = trim($v_djyim); // obf
            $v_zljdr = strrpos($v_djyim, '@'); // obf
        } // obf
        if (false === $v_zljdr) { // obf
            //At-sign is missing. // obf
            $v_lscyl = sprintf( // obf
                '%s (%s): %s', // obf
                $v_jrevf->lang('invalid_address'), // obf
                $v_fobhy, // obf
                $v_djyim // obf
            ); // obf
            $v_jrevf->setError($v_lscyl); // obf
            $v_jrevf->edebug($v_lscyl); // obf
            if ($v_jrevf->exceptions) { // obf
                throw new Exception($v_lscyl); // obf
            } // obf

            return false; // obf
        } // obf
        if ($v_rzcco !== null && is_string($v_rzcco)) { // obf
            $v_rzcco = trim(__fn_37772('/[\r\n]+/', '', $v_rzcco)); //Strip breaks and trim // obf
        } else { // obf
            $v_rzcco = ''; // obf
        } // obf
        $v_yjpsl = [$v_fobhy, $v_djyim, $v_rzcco]; // obf
        //Enqueue addresses with IDN until we know the PHPMailer::$v_pfhty. // obf
        //Domain is assumed to be whatever is after the last @ symbol in the address // obf
        if (static::idnSupported() && $v_jrevf->has8bitChars(substr($v_djyim, ++$v_zljdr))) { // obf
            if ('Reply-To' !== $v_fobhy) { // obf
                if (!array_key_exists($v_djyim, $v_jrevf->RecipientsQueue)) { // obf
                    $v_jrevf->RecipientsQueue[$v_djyim] = $v_yjpsl; // obf

                    return true; // obf
                } // obf
            } elseif (!array_key_exists($v_djyim, $v_jrevf->ReplyToQueue)) { // obf
                $v_jrevf->ReplyToQueue[$v_djyim] = $v_yjpsl; // obf

                return true; // obf
            } // obf

            return false; // obf
        } // obf

        //Immediately add standard addresses without IDN. // obf
        return call_user_func_array([$v_jrevf, 'addAnAddress'], $v_yjpsl); // obf
    } // obf

    /** // obf
     * Set the boundaries to use for delimiting MIME parts. // obf
     * If you override this, ensure you set all 3 boundaries to unique values. // obf
     * The default boundaries include a "=_" sequence which cannot occur in quoted-printable bodies, // obf
     * as suggested by https://www.rfc-editor.org/rfc/rfc2045#section-6.7 // obf
     * // obf
     * @return void // obf
     */ // obf
    public function setBoundaries() // obf
    { // obf
        $v_jrevf->uniqueid = $v_jrevf->generateId(); // obf
        $v_jrevf->boundary[1] = 'b1=_' . $v_jrevf->uniqueid; // obf
        $v_jrevf->boundary[2] = 'b2=_' . $v_jrevf->uniqueid; // obf
        $v_jrevf->boundary[3] = 'b3=_' . $v_jrevf->uniqueid; // obf
    } // obf

    /** // obf
     * Add an address to one of the recipient arrays or to the ReplyTo array. // obf
     * Addresses that have been added already return false, but do not throw exceptions. // obf
     * // obf
     * @param string $v_fobhy    One of 'to', 'cc', 'bcc', or 'ReplyTo' // obf
     * @param string $v_djyim The email address to send, resp. to reply to // obf
     * @param string $v_rzcco // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool true on success, false if address already used or invalid in some way // obf
     */ // obf
    protected function addAnAddress($v_fobhy, $v_djyim, $v_rzcco = '') // obf
    { // obf
        if (!in_array($v_fobhy, ['to', 'cc', 'bcc', 'Reply-To'])) { // obf
            $v_lscyl = sprintf( // obf
                '%s: %s', // obf
                $v_jrevf->lang('Invalid recipient kind'), // obf
                $v_fobhy // obf
            ); // obf
            $v_jrevf->setError($v_lscyl); // obf
            $v_jrevf->edebug($v_lscyl); // obf
            if ($v_jrevf->exceptions) { // obf
                throw new Exception($v_lscyl); // obf
            } // obf

            return false; // obf
        } // obf
        if (!static::validateAddress($v_djyim)) { // obf
            $v_lscyl = sprintf( // obf
                '%s (%s): %s', // obf
                $v_jrevf->lang('invalid_address'), // obf
                $v_fobhy, // obf
                $v_djyim // obf
            ); // obf
            $v_jrevf->setError($v_lscyl); // obf
            $v_jrevf->edebug($v_lscyl); // obf
            if ($v_jrevf->exceptions) { // obf
                throw new Exception($v_lscyl); // obf
            } // obf

            return false; // obf
        } // obf
        if ('Reply-To' !== $v_fobhy) { // obf
            if (!array_key_exists(strtolower($v_djyim), $v_jrevf->all_recipients)) { // obf
                $v_jrevf->{$v_fobhy}[] = [$v_djyim, $v_rzcco]; // obf
                $v_jrevf->all_recipients[strtolower($v_djyim)] = true; // obf

                return true; // obf
            } // obf
        } elseif (!array_key_exists(strtolower($v_djyim), $v_jrevf->ReplyTo)) { // obf
            $v_jrevf->ReplyTo[strtolower($v_djyim)] = [$v_djyim, $v_rzcco]; // obf

            return true; // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Parse and validate a string containing one or more RFC822-style comma-separated email addresses // obf
     * of the form "display name <address>" into an array of name/address pairs. // obf
     * Uses the imap_rfc822_parse_adrlist function if the IMAP extension is available. // obf
     * Note that quotes in the name part are removed. // obf
     * // obf
     * @see https://www.andrew.cmu.edu/user/agreen1/testing/mrbs/web/Mail/RFC822.php A more careful implementation // obf
     * // obf
     * @param string $v_ejhhe The address list string // obf
     * @param bool   $v_mruqp Whether to use the IMAP extension to parse the list // obf
     * @param string $v_ffjod The charset to use when decoding the address list string. // obf
     * // obf
     * @return array // obf
     */ // obf
    public static function parseAddresses($v_ejhhe, $v_mruqp = true, $v_ffjod = self::CHARSET_ISO88591) // obf
    { // obf
        $v_ejxwe = []; // obf
        if ($v_mruqp && function_exists('imap_rfc822_parse_adrlist')) { // obf
            //Use this built-in parser if it's available // obf
            $v_praqo = imap_rfc822_parse_adrlist($v_ejhhe, ''); // obf
            // Clear any potential IMAP errors to get rid of notices being thrown at end of script. // obf
            imap_errors(); // obf
            foreach ($v_praqo as $v_djyim) { // obf
                if ( // obf
                    '.SYNTAX-ERROR.' !== $v_djyim->host && // obf
                    static::validateAddress($v_djyim->mailbox . '@' . $v_djyim->host) // obf
                ) { // obf
                    //Decode the name part if it's present and encoded // obf
                    if ( // obf
                        property_exists($v_djyim, 'personal') && // obf
                        //Check for a Mbstring constant rather than using extension_loaded, which is sometimes disabled // obf
                        defined('MB_CASE_UPPER') && // obf
                        preg_match('/^=\?.*\?=$/s', $v_djyim->personal) // obf
                    ) { // obf
                        $v_spdvj = mb_internal_encoding(); // obf
                        mb_internal_encoding($v_ffjod); // obf
                        //Undo any RFC2047-encoded spaces-as-underscores // obf
                        $v_djyim->personal = str_replace('_', '=20', $v_djyim->personal); // obf
                        //Decode the name // obf
                        $v_djyim->personal = mb_decode_mimeheader($v_djyim->personal); // obf
                        mb_internal_encoding($v_spdvj); // obf
                    } // obf

                    $v_ejxwe[] = [ // obf
                        'name' => (property_exists($v_djyim, 'personal') ? $v_djyim->personal : ''), // obf
                        'address' => $v_djyim->mailbox . '@' . $v_djyim->host, // obf
                    ]; // obf
                } // obf
            } // obf
        } else { // obf
            //Use this simpler parser // obf
            $v_praqo = explode(',', $v_ejhhe); // obf
            foreach ($v_praqo as $v_djyim) { // obf
                $v_djyim = trim($v_djyim); // obf
                //Is there a separate name part? // obf
                if (strpos($v_djyim, '<') === false) { // obf
                    //No separate name, just use the whole thing // obf
                    if (static::validateAddress($v_djyim)) { // obf
                        $v_ejxwe[] = [ // obf
                            'name' => '', // obf
                            'address' => $v_djyim, // obf
                        ]; // obf
                    } // obf
                } else { // obf
                    list($v_rzcco, $v_ffdvp) = explode('<', $v_djyim); // obf
                    $v_ffdvp = trim(str_replace('>', '', $v_ffdvp)); // obf
                    $v_rzcco = trim($v_rzcco); // obf
                    if (static::validateAddress($v_ffdvp)) { // obf
                        //Check for a Mbstring constant rather than using extension_loaded, which is sometimes disabled // obf
                        //If this name is encoded, decode it // obf
                        if (defined('MB_CASE_UPPER') && preg_match('/^=\?.*\?=$/s', $v_rzcco)) { // obf
                            $v_spdvj = mb_internal_encoding(); // obf
                            mb_internal_encoding($v_ffjod); // obf
                            //Undo any RFC2047-encoded spaces-as-underscores // obf
                            $v_rzcco = str_replace('_', '=20', $v_rzcco); // obf
                            //Decode the name // obf
                            $v_rzcco = mb_decode_mimeheader($v_rzcco); // obf
                            mb_internal_encoding($v_spdvj); // obf
                        } // obf
                        $v_ejxwe[] = [ // obf
                            //Remove any surrounding quotes and spaces from the name // obf
                            'name' => trim($v_rzcco, '\'" '), // obf
                            'address' => $v_ffdvp, // obf
                        ]; // obf
                    } // obf
                } // obf
            } // obf
        } // obf

        return $v_ejxwe; // obf
    } // obf

    /** // obf
     * Set the From and FromName properties. // obf
     * // obf
     * @param string $v_djyim // obf
     * @param string $v_rzcco // obf
     * @param bool   $v_rajzk    Whether to also set the Sender address, defaults to true // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function setFrom($v_djyim, $v_rzcco = '', $v_rajzk = true) // obf
    { // obf
        $v_djyim = trim((string)$v_djyim); // obf
        $v_rzcco = trim(__fn_37772('/[\r\n]+/', '', $v_rzcco)); //Strip breaks and trim // obf
        //Don't validate now addresses with IDN. Will be done in send(). // obf
        $v_zljdr = strrpos($v_djyim, '@'); // obf
        if ( // obf
            (false === $v_zljdr) // obf
            || ((!$v_jrevf->has8bitChars(substr($v_djyim, ++$v_zljdr)) || !static::idnSupported()) // obf
            && !static::validateAddress($v_djyim)) // obf
        ) { // obf
            $v_lscyl = sprintf( // obf
                '%s (From): %s', // obf
                $v_jrevf->lang('invalid_address'), // obf
                $v_djyim // obf
            ); // obf
            $v_jrevf->setError($v_lscyl); // obf
            $v_jrevf->edebug($v_lscyl); // obf
            if ($v_jrevf->exceptions) { // obf
                throw new Exception($v_lscyl); // obf
            } // obf

            return false; // obf
        } // obf
        $v_jrevf->From = $v_djyim; // obf
        $v_jrevf->FromName = $v_rzcco; // obf
        if ($v_rajzk && empty($v_jrevf->Sender)) { // obf
            $v_jrevf->Sender = $v_djyim; // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Return the Message-ID header of the last email. // obf
     * Technically this is the value from the last time the headers were created, // obf
     * but it's also the message ID of the last sent message except in // obf
     * pathological cases. // obf
     * // obf
     * @return string // obf
     */ // obf
    public function getLastMessageID() // obf
    { // obf
        return $v_jrevf->lastMessageID; // obf
    } // obf

    /** // obf
     * Check that a string looks like an email address. // obf
     * Validation patterns supported: // obf
     * * `auto` Pick best pattern automatically; // obf
     * * `pcre8` Use the squiloople.com pattern, requires PCRE > 8.0; // obf
     * * `pcre` Use old PCRE implementation; // obf
     * * `php` Use PHP built-in FILTER_VALIDATE_EMAIL; // obf
     * * `html5` Use the pattern given by the HTML5 spec for 'email' type form input elements. // obf
     * * `noregex` Don't use a regex: super fast, really dumb. // obf
     * Alternatively you may pass in a callable to inject your own validator, for example: // obf
     * // obf
     * ```php // obf
     * PHPMailer::validateAddress('user@example.com', function($v_djyim) { // obf
     *     return (strpos($v_djyim, '@') !== false); // obf
     * }); // obf
     * ``` // obf
     * // obf
     * You can also set the PHPMailer::$v_etxva static to a callable, allowing built-in methods to use your validator. // obf
     * // obf
     * @param string          $v_djyim       The email address to check // obf
     * @param string|callable $v_nwbxu Which pattern to use // obf
     * // obf
     * @return bool // obf
     */ // obf
    public static function validateAddress($v_djyim, $v_nwbxu = null) // obf
    { // obf
        if (null === $v_nwbxu) { // obf
            $v_nwbxu = static::$v_etxva; // obf
        } // obf
        //Don't allow strings as callables, see SECURITY.md and CVE-2021-3603 // obf
        if (is_callable($v_nwbxu) && !is_string($v_nwbxu)) { // obf
            return call_user_func($v_nwbxu, $v_djyim); // obf
        } // obf
        //Reject line breaks in addresses; it's valid RFC5322, but not RFC5321 // obf
        if (strpos($v_djyim, "\n") !== false || strpos($v_djyim, "\r") !== false) { // obf
            return false; // obf
        } // obf
        switch ($v_nwbxu) { // obf
            case 'pcre': //Kept for BC // obf
            case 'pcre8': // obf
                /* // obf
                 * A more complex and more permissive version of the RFC5322 regex on which FILTER_VALIDATE_EMAIL // obf
                 * is based. // obf
                 * In addition to the addresses allowed by filter_var, also permits: // obf
                 *  * dotless domains: `a@b` // obf
                 *  * comments: `1234 @ local(blah) .machine .example` // obf
                 *  * quoted elements: `'"test blah"@example.org'` // obf
                 *  * numeric TLDs: `a@b.123` // obf
                 *  * unbracketed IPv4 literals: `a@192.168.0.1` // obf
                 *  * IPv6 literals: 'first.last@[IPv6:a1::]' // obf
                 * Not all of these will necessarily work for sending! // obf
                 * // obf
                 * @copyright 2009-2010 Michael Rushton // obf
                 * Feel free to use and redistribute this code. But please keep this copyright notice. // obf
                 */ // obf
                return (bool) preg_match( // obf
                    '/^(?!(?>(?1)"?(?>\\\[ -~]|[^"])"?(?1)){255,})(?!(?>(?1)"?(?>\\\[ -~]|[^"])"?(?1)){65,}@)' . // obf
                    '((?>(?>(?>((?>(?>(?>\x0D\x0A)?[\t ])+|(?>[\t ]*\x0D\x0A)?[\t ]+)?)(\((?>(?2)' . // obf
                    '(?>[\x01-\x08\x0B\x0C\x0E-\'*-\[\]-\x7F]|\\\[\x00-\x7F]|(?3)))*(?2)\)))+(?2))|(?2))?)' . // obf
                    '([!#-\'*+\/-9=?^-~-]+|"(?>(?2)(?>[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\x7F]))*' . // obf
                    '(?2)")(?>(?1)\.(?1)(?4))*(?1)@(?!(?1)[a-z0-9-]{64,})(?1)(?>([a-z0-9](?>[a-z0-9-]*[a-z0-9])?)' . // obf
                    '(?>(?1)\.(?!(?1)[a-z0-9-]{64,})(?1)(?5)){0,126}|\[(?:(?>IPv6:(?>([a-f0-9]{1,4})(?>:(?6)){7}' . // obf
                    '|(?!(?:.*[a-f0-9][:\]]){8,})((?6)(?>:(?6)){0,6})?::(?7)?))|(?>(?>IPv6:(?>(?6)(?>:(?6)){5}:' . // obf
                    '|(?!(?:.*[a-f0-9]:){6,})(?8)?::(?>((?6)(?>:(?6)){0,4}):)?))?(25[0-5]|2[0-4][0-9]|1[0-9]{2}' . // obf
                    '|[1-9]?[0-9])(?>\.(?9)){3}))\])(?1)$/isD', // obf
                    $v_djyim // obf
                ); // obf
            case 'html5': // obf
                /* // obf
                 * This is the pattern used in the HTML5 spec for validation of 'email' type form input elements. // obf
                 * // obf
                 * @see https://html.spec.whatwg.org/#e-mail-state-(type=email) // obf
                 */ // obf
                return (bool) preg_match( // obf
                    '/^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}' . // obf
                    '[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/sD', // obf
                    $v_djyim // obf
                ); // obf
            case 'php': // obf
            default: // obf
                return filter_var($v_djyim, FILTER_VALIDATE_EMAIL) !== false; // obf
        } // obf
    } // obf

    /** // obf
     * Tells whether IDNs (Internationalized Domain Names) are supported or not. This requires the // obf
     * `intl` and `mbstring` PHP extensions. // obf
     * // obf
     * @return bool `true` if required functions for IDN support are present // obf
     */ // obf
    public static function idnSupported() // obf
    { // obf
        return function_exists('idn_to_ascii') && function_exists('mb_convert_encoding'); // obf
    } // obf

    /** // obf
     * Converts IDN in given email address to its ASCII form, also known as punycode, if possible. // obf
     * Important: Address must be passed in same encoding as currently set in PHPMailer::$v_pfhty. // obf
     * This function silently returns unmodified address if: // obf
     * - No conversion is necessary (i.e. domain name is not an IDN, or is already in ASCII form) // obf
     * - Conversion to punycode is impossible (e.g. required PHP functions are not available) // obf
     *   or fails for any reason (e.g. domain contains characters not allowed in an IDN). // obf
     * // obf
     * @see PHPMailer::$v_pfhty // obf
     * // obf
     * @param string $v_djyim The email address to convert // obf
     * // obf
     * @return string The encoded address in ASCII form // obf
     */ // obf
    public function punyencodeAddress($v_djyim) // obf
    { // obf
        //Verify we have required functions, CharSet, and at-sign. // obf
        $v_zljdr = strrpos($v_djyim, '@'); // obf
        if ( // obf
            !empty($v_jrevf->CharSet) && // obf
            false !== $v_zljdr && // obf
            static::idnSupported() // obf
        ) { // obf
            $v_nepix = substr($v_djyim, ++$v_zljdr); // obf
            //Verify CharSet string is a valid one, and domain properly encoded in this CharSet. // obf
            if ($v_jrevf->has8bitChars($v_nepix) && @mb_check_encoding($v_nepix, $v_jrevf->CharSet)) { // obf
                //Convert the domain from whatever charset it's in to UTF-8 // obf
                $v_nepix = mb_convert_encoding($v_nepix, self::CHARSET_UTF8, $v_jrevf->CharSet); // obf
                //Ignore IDE complaints about this line - method signature changed in PHP 5.4 // obf
                $v_yvvdk = 0; // obf
                if (defined('INTL_IDNA_VARIANT_UTS46')) { // obf
                    //Use the current punycode standard (appeared in PHP 7.2) // obf
                    $v_gfxiv = idn_to_ascii( // obf
                        $v_nepix, // obf
                        \IDNA_DEFAULT | \IDNA_USE_STD3_RULES | \IDNA_CHECK_BIDI | // obf
                            \IDNA_CHECK_CONTEXTJ | \IDNA_NONTRANSITIONAL_TO_ASCII, // obf
                        \INTL_IDNA_VARIANT_UTS46 // obf
                    ); // obf
                } elseif (defined('INTL_IDNA_VARIANT_2003')) { // obf
                    //Fall back to this old, deprecated/removed encoding // obf
                    // phpcs:ignore PHPCompatibility.Constants.RemovedConstants.intl_idna_variant_2003Deprecated // obf
                    $v_gfxiv = idn_to_ascii($v_nepix, $v_yvvdk, \INTL_IDNA_VARIANT_2003); // obf
                } else { // obf
                    //Fall back to a default we don't know about // obf
                    // phpcs:ignore PHPCompatibility.ParameterValues.NewIDNVariantDefault.NotSet // obf
                    $v_gfxiv = idn_to_ascii($v_nepix, $v_yvvdk); // obf
                } // obf
                if (false !== $v_gfxiv) { // obf
                    return substr($v_djyim, 0, $v_zljdr) . $v_gfxiv; // obf
                } // obf
            } // obf
        } // obf

        return $v_djyim; // obf
    } // obf

    /** // obf
     * Create a message and send it. // obf
     * Uses the sending method specified by $v_rwipb. // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool false on error - See the ErrorInfo property for details of the error // obf
     */ // obf
    public function send() // obf
    { // obf
        try { // obf
            if (!$v_jrevf->preSend()) { // obf
                return false; // obf
            } // obf

            return $v_jrevf->postSend(); // obf
        } catch (Exception $v_sdxgp) { // obf
            $v_jrevf->mailHeader = ''; // obf
            $v_jrevf->setError($v_sdxgp->getMessage()); // obf
            if ($v_jrevf->exceptions) { // obf
                throw $v_sdxgp; // obf
            } // obf

            return false; // obf
        } // obf
    } // obf

    /** // obf
     * Prepare a message for sending. // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function preSend() // obf
    { // obf
        if ( // obf
            'smtp' === $v_jrevf->Mailer // obf
            || ('mail' === $v_jrevf->Mailer && (\PHP_VERSION_ID >= 80000 || stripos(PHP_OS, 'WIN') === 0)) // obf
        ) { // obf
            //SMTP mandates RFC-compliant line endings // obf
            //and it's also used with mail() on Windows // obf
            static::setLE(self::CRLF); // obf
        } else { // obf
            //Maintain backward compatibility with legacy Linux command line mailers // obf
            static::setLE(PHP_EOL); // obf
        } // obf
        //Check for buggy PHP versions that add a header with an incorrect line break // obf
        if ( // obf
            'mail' === $v_jrevf->Mailer // obf
            && ((\PHP_VERSION_ID >= 70000 && \PHP_VERSION_ID < 70017) // obf
                || (\PHP_VERSION_ID >= 70100 && \PHP_VERSION_ID < 70103)) // obf
            && ini_get('mail.add_x_header') === '1' // obf
            && stripos(PHP_OS, 'WIN') === 0 // obf
        ) { // obf
            trigger_error($v_jrevf->lang('buggy_php'), E_USER_WARNING); // obf
        } // obf

        try { // obf
            $v_jrevf->error_count = 0; //Reset errors // obf
            $v_jrevf->mailHeader = ''; // obf

            //Dequeue recipient and Reply-To addresses with IDN // obf
            foreach (array_merge($v_jrevf->RecipientsQueue, $v_jrevf->ReplyToQueue) as $v_yjpsl) { // obf
                $v_yjpsl[1] = $v_jrevf->punyencodeAddress($v_yjpsl[1]); // obf
                call_user_func_array([$v_jrevf, 'addAnAddress'], $v_yjpsl); // obf
            } // obf
            if (count($v_jrevf->to) + count($v_jrevf->cc) + count($v_jrevf->bcc) < 1) { // obf
                throw new Exception($v_jrevf->lang('provide_address'), self::STOP_CRITICAL); // obf
            } // obf

            //Validate From, Sender, and ConfirmReadingTo addresses // obf
            foreach (['From', 'Sender', 'ConfirmReadingTo'] as $v_vdasc) { // obf
                if ($v_jrevf->{$v_vdasc} === null) { // obf
                    $v_jrevf->{$v_vdasc} = ''; // obf
                    continue; // obf
                } // obf
                $v_jrevf->{$v_vdasc} = trim($v_jrevf->{$v_vdasc}); // obf
                if (empty($v_jrevf->{$v_vdasc})) { // obf
                    continue; // obf
                } // obf
                $v_jrevf->{$v_vdasc} = $v_jrevf->punyencodeAddress($v_jrevf->{$v_vdasc}); // obf
                if (!static::validateAddress($v_jrevf->{$v_vdasc})) { // obf
                    $v_lscyl = sprintf( // obf
                        '%s (%s): %s', // obf
                        $v_jrevf->lang('invalid_address'), // obf
                        $v_vdasc, // obf
                        $v_jrevf->{$v_vdasc} // obf
                    ); // obf
                    $v_jrevf->setError($v_lscyl); // obf
                    $v_jrevf->edebug($v_lscyl); // obf
                    if ($v_jrevf->exceptions) { // obf
                        throw new Exception($v_lscyl); // obf
                    } // obf

                    return false; // obf
                } // obf
            } // obf

            //Set whether the message is multipart/alternative // obf
            if ($v_jrevf->alternativeExists()) { // obf
                $v_jrevf->ContentType = static::CONTENT_TYPE_MULTIPART_ALTERNATIVE; // obf
            } // obf

            $v_jrevf->setMessageType(); // obf
            //Refuse to send an empty message unless we are specifically allowing it // obf
            if (!$v_jrevf->AllowEmpty && empty($v_jrevf->Body)) { // obf
                throw new Exception($v_jrevf->lang('empty_message'), self::STOP_CRITICAL); // obf
            } // obf

            //Trim subject consistently // obf
            $v_jrevf->Subject = trim($v_jrevf->Subject); // obf
            //Create body before headers in case body makes changes to headers (e.g. altering transfer encoding) // obf
            $v_jrevf->MIMEHeader = ''; // obf
            $v_jrevf->MIMEBody = $v_jrevf->createBody(); // obf
            //createBody may have added some headers, so retain them // obf
            $v_sqdbr = $v_jrevf->MIMEHeader; // obf
            $v_jrevf->MIMEHeader = $v_jrevf->createHeader(); // obf
            $v_jrevf->MIMEHeader .= $v_sqdbr; // obf

            //To capture the complete message when using mail(), create // obf
            //an extra header list which createHeader() doesn't fold in // obf
            if ('mail' === $v_jrevf->Mailer) { // obf
                if (count($v_jrevf->to) > 0) { // obf
                    $v_jrevf->mailHeader .= $v_jrevf->addrAppend('To', $v_jrevf->to); // obf
                } else { // obf
                    $v_jrevf->mailHeader .= $v_jrevf->headerLine('To', 'undisclosed-recipients:;'); // obf
                } // obf
                $v_jrevf->mailHeader .= $v_jrevf->headerLine( // obf
                    'Subject', // obf
                    $v_jrevf->encodeHeader($v_jrevf->secureHeader($v_jrevf->Subject)) // obf
                ); // obf
            } // obf

            //Sign with DKIM if enabled // obf
            if ( // obf
                !empty($v_jrevf->DKIM_domain) // obf
                && !empty($v_jrevf->DKIM_selector) // obf
                && (!empty($v_jrevf->DKIM_private_string) // obf
                    || (!empty($v_jrevf->DKIM_private) // obf
                        && static::isPermittedPath($v_jrevf->DKIM_private) // obf
                        && file_exists($v_jrevf->DKIM_private) // obf
                    ) // obf
                ) // obf
            ) { // obf
                $v_pbcwc = $v_jrevf->DKIM_Add( // obf
                    $v_jrevf->MIMEHeader . $v_jrevf->mailHeader, // obf
                    $v_jrevf->encodeHeader($v_jrevf->secureHeader($v_jrevf->Subject)), // obf
                    $v_jrevf->MIMEBody // obf
                ); // obf
                $v_jrevf->MIMEHeader = static::stripTrailingWSP($v_jrevf->MIMEHeader) . static::$v_svhje . // obf
                    static::normalizeBreaks($v_pbcwc) . static::$v_svhje; // obf
            } // obf

            return true; // obf
        } catch (Exception $v_sdxgp) { // obf
            $v_jrevf->setError($v_sdxgp->getMessage()); // obf
            if ($v_jrevf->exceptions) { // obf
                throw $v_sdxgp; // obf
            } // obf

            return false; // obf
        } // obf
    } // obf

    /** // obf
     * Actually send a message via the selected mechanism. // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function postSend() // obf
    { // obf
        try { // obf
            //Choose the mailer and send through it // obf
            switch ($v_jrevf->Mailer) { // obf
                case 'sendmail': // obf
                case 'qmail': // obf
                    return $v_jrevf->sendmailSend($v_jrevf->MIMEHeader, $v_jrevf->MIMEBody); // obf
                case 'smtp': // obf
                    return $v_jrevf->smtpSend($v_jrevf->MIMEHeader, $v_jrevf->MIMEBody); // obf
                case 'mail': // obf
                    return $v_jrevf->mailSend($v_jrevf->MIMEHeader, $v_jrevf->MIMEBody); // obf
                default: // obf
                    $v_kztby = $v_jrevf->Mailer . 'Send'; // obf
                    if (method_exists($v_jrevf, $v_kztby)) { // obf
                        return $v_jrevf->{$v_kztby}($v_jrevf->MIMEHeader, $v_jrevf->MIMEBody); // obf
                    } // obf

                    return $v_jrevf->mailSend($v_jrevf->MIMEHeader, $v_jrevf->MIMEBody); // obf
            } // obf
        } catch (Exception $v_sdxgp) { // obf
            $v_jrevf->setError($v_sdxgp->getMessage()); // obf
            $v_jrevf->edebug($v_sdxgp->getMessage()); // obf
            if ($v_jrevf->Mailer === 'smtp' && $v_jrevf->SMTPKeepAlive == true && $v_jrevf->smtp->connected()) { // obf
                $v_jrevf->smtp->reset(); // obf
            } // obf
            if ($v_jrevf->exceptions) { // obf
                throw $v_sdxgp; // obf
            } // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Send mail using the $v_tjyqd program. // obf
     * // obf
     * @see PHPMailer::$v_tjyqd // obf
     * // obf
     * @param string $v_qwatj The message headers // obf
     * @param string $v_zteze   The message body // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool // obf
     */ // obf
    protected function sendmailSend($v_qwatj, $v_zteze) // obf
    { // obf
        if ($v_jrevf->Mailer === 'qmail') { // obf
            $v_jrevf->edebug('Sending with qmail'); // obf
        } else { // obf
            $v_jrevf->edebug('Sending with sendmail'); // obf
        } // obf
        $v_qwatj = static::stripTrailingWSP($v_qwatj) . static::$v_svhje . static::$v_svhje; // obf
        //This sets the SMTP envelope sender which gets turned into a return-path header by the receiver // obf
        //A space after `-f` is optional, but there is a long history of its presence // obf
        //causing problems, so we don't use one // obf
        //Exim docs: https://www.exim.org/exim-html-current/doc/html/spec_html/ch-the_exim_command_line.html // obf
        //Sendmail docs: https://www.sendmail.org/~ca/email/man/sendmail.html // obf
        //Example problem: https://www.drupal.org/node/1057954 // obf

        //PHP 5.6 workaround // obf
        $v_enkbr = ini_get('sendmail_from'); // obf
        if (empty($v_jrevf->Sender) && !empty($v_enkbr)) { // obf
            //PHP config has a sender address we can use // obf
            $v_jrevf->Sender = ini_get('sendmail_from'); // obf
        } // obf
        //CVE-2016-10033, CVE-2016-10045: Don't pass -f if characters will be escaped. // obf
        if (!empty($v_jrevf->Sender) && static::validateAddress($v_jrevf->Sender) && self::isShellSafe($v_jrevf->Sender)) { // obf
            if ($v_jrevf->Mailer === 'qmail') { // obf
                $v_xmvka = '%s -f%s'; // obf
            } else { // obf
                $v_xmvka = '%s -oi -f%s -t'; // obf
            } // obf
        } else { // obf
            //allow sendmail to choose a default envelope sender. It may // obf
            //seem preferable to force it to use the From header as with // obf
            //SMTP, but that introduces new problems (see // obf
            //<https://github.com/PHPMailer/PHPMailer/issues/2298>), and // obf
            //it has historically worked this way. // obf
            $v_xmvka = '%s -oi -t'; // obf
        } // obf

        $v_pmphq = sprintf($v_xmvka, escapeshellcmd($v_jrevf->Sendmail), $v_jrevf->Sender); // obf
        $v_jrevf->edebug('Sendmail path: ' . $v_jrevf->Sendmail); // obf
        $v_jrevf->edebug('Sendmail command: ' . $v_pmphq); // obf
        $v_jrevf->edebug('Envelope sender: ' . $v_jrevf->Sender); // obf
        $v_jrevf->edebug("Headers: {$v_qwatj}"); // obf

        if ($v_jrevf->SingleTo) { // obf
            foreach ($v_jrevf->SingleToArray as $v_nfqgp) { // obf
                $v_paeyz = @popen($v_pmphq, 'w'); // obf
                if (!$v_paeyz) { // obf
                    throw new Exception($v_jrevf->lang('execute') . $v_jrevf->Sendmail, self::STOP_CRITICAL); // obf
                } // obf
                $v_jrevf->edebug("To: {$v_nfqgp}"); // obf
                fwrite($v_paeyz, 'To: ' . $v_nfqgp . "\n"); // obf
                fwrite($v_paeyz, $v_qwatj); // obf
                fwrite($v_paeyz, $v_zteze); // obf
                $v_yfstf = pclose($v_paeyz); // obf
                $v_ormxw = static::parseAddresses($v_nfqgp, true, $v_jrevf->CharSet); // obf
                $v_jrevf->doCallback( // obf
                    ($v_yfstf === 0), // obf
                    [[$v_ormxw['address'], $v_ormxw['name']]], // obf
                    $v_jrevf->cc, // obf
                    $v_jrevf->bcc, // obf
                    $v_jrevf->Subject, // obf
                    $v_zteze, // obf
                    $v_jrevf->From, // obf
                    [] // obf
                ); // obf
                $v_jrevf->edebug("Result: " . ($v_yfstf === 0 ? 'true' : 'false')); // obf
                if (0 !== $v_yfstf) { // obf
                    throw new Exception($v_jrevf->lang('execute') . $v_jrevf->Sendmail, self::STOP_CRITICAL); // obf
                } // obf
            } // obf
        } else { // obf
            $v_paeyz = @popen($v_pmphq, 'w'); // obf
            if (!$v_paeyz) { // obf
                throw new Exception($v_jrevf->lang('execute') . $v_jrevf->Sendmail, self::STOP_CRITICAL); // obf
            } // obf
            fwrite($v_paeyz, $v_qwatj); // obf
            fwrite($v_paeyz, $v_zteze); // obf
            $v_yfstf = pclose($v_paeyz); // obf
            $v_jrevf->doCallback( // obf
                ($v_yfstf === 0), // obf
                $v_jrevf->to, // obf
                $v_jrevf->cc, // obf
                $v_jrevf->bcc, // obf
                $v_jrevf->Subject, // obf
                $v_zteze, // obf
                $v_jrevf->From, // obf
                [] // obf
            ); // obf
            $v_jrevf->edebug("Result: " . ($v_yfstf === 0 ? 'true' : 'false')); // obf
            if (0 !== $v_yfstf) { // obf
                throw new Exception($v_jrevf->lang('execute') . $v_jrevf->Sendmail, self::STOP_CRITICAL); // obf
            } // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Fix CVE-2016-10033 and CVE-2016-10045 by disallowing potentially unsafe shell characters. // obf
     * Note that escapeshellarg and escapeshellcmd are inadequate for our purposes, especially on Windows. // obf
     * // obf
     * @see https://github.com/PHPMailer/PHPMailer/issues/924 CVE-2016-10045 bug report // obf
     * // obf
     * @param string $v_mwuob The string to be validated // obf
     * // obf
     * @return bool // obf
     */ // obf
    protected static function isShellSafe($v_mwuob) // obf
    { // obf
        //It's not possible to use shell commands safely (which includes the mail() function) without escapeshellarg, // obf
        //but some hosting providers disable it, creating a security problem that we don't want to have to deal with, // obf
        //so we don't. // obf
        if (!function_exists('escapeshellarg') || !function_exists('escapeshellcmd')) { // obf
            return false; // obf
        } // obf

        if ( // obf
            escapeshellcmd($v_mwuob) !== $v_mwuob // obf
            || !in_array(escapeshellarg($v_mwuob), ["'$v_mwuob'", "\"$v_mwuob\""]) // obf
        ) { // obf
            return false; // obf
        } // obf

        $v_gjlnq = strlen($v_mwuob); // obf

        for ($v_uguzv = 0; $v_uguzv < $v_gjlnq; ++$v_uguzv) { // obf
            $v_wjgvt = $v_mwuob[$v_uguzv]; // obf

            //All other characters have a special meaning in at least one common shell, including = and +. // obf
            //Full stop (.) has a special meaning in cmd.exe, but its impact should be negligible here. // obf
            //Note that this does permit non-Latin alphanumeric characters based on the current locale. // obf
            if (!ctype_alnum($v_wjgvt) && strpos('@_-.', $v_wjgvt) === false) { // obf
                return false; // obf
            } // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Check whether a file path is of a permitted type. // obf
     * Used to reject URLs and phar files from functions that access local file paths, // obf
     * such as addAttachment. // obf
     * // obf
     * @param string $v_whtmi A relative or absolute path to a file // obf
     * // obf
     * @return bool // obf
     */ // obf
    protected static function isPermittedPath($v_whtmi) // obf
    { // obf
        //Matches scheme definition from https://www.rfc-editor.org/rfc/rfc3986#section-3.1 // obf
        return !preg_match('#^[a-z][a-z\d+.-]*://#i', $v_whtmi); // obf
    } // obf

    /** // obf
     * Check whether a file path is safe, accessible, and readable. // obf
     * // obf
     * @param string $v_whtmi A relative or absolute path to a file // obf
     * // obf
     * @return bool // obf
     */ // obf
    protected static function fileIsAccessible($v_whtmi) // obf
    { // obf
        if (!static::isPermittedPath($v_whtmi)) { // obf
            return false; // obf
        } // obf
        $v_mhhxg = is_file($v_whtmi); // obf
        //If not a UNC path (expected to start with \\), check read permission, see #2069 // obf
        if (strpos($v_whtmi, '\\\\') !== 0) { // obf
            $v_mhhxg = $v_mhhxg && is_readable($v_whtmi); // obf
        } // obf
        return  $v_mhhxg; // obf
    } // obf

    /** // obf
     * Send mail using the PHP mail() function. // obf
     * // obf
     * @see https://www.php.net/manual/en/book.mail.php // obf
     * // obf
     * @param string $v_qwatj The message headers // obf
     * @param string $v_zteze   The message body // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool // obf
     */ // obf
    protected function mailSend($v_qwatj, $v_zteze) // obf
    { // obf
        $v_qwatj = static::stripTrailingWSP($v_qwatj) . static::$v_svhje . static::$v_svhje; // obf

        $v_emphu = []; // obf
        foreach ($v_jrevf->to as $v_xlcma) { // obf
            $v_emphu[] = $v_jrevf->addrFormat($v_xlcma); // obf
        } // obf
        $v_jidup = trim(implode(', ', $v_emphu)); // obf

        //If there are no To-addresses (e.g. when sending only to BCC-addresses) // obf
        //the following should be added to get a correct DKIM-signature. // obf
        //Compare with $v_jrevf->preSend() // obf
        if ($v_jidup === '') { // obf
            $v_jidup = 'undisclosed-recipients:;'; // obf
        } // obf

        $v_yjpsl = null; // obf
        //This sets the SMTP envelope sender which gets turned into a return-path header by the receiver // obf
        //A space after `-f` is optional, but there is a long history of its presence // obf
        //causing problems, so we don't use one // obf
        //Exim docs: https://www.exim.org/exim-html-current/doc/html/spec_html/ch-the_exim_command_line.html // obf
        //Sendmail docs: https://www.sendmail.org/~ca/email/man/sendmail.html // obf
        //Example problem: https://www.drupal.org/node/1057954 // obf
        //CVE-2016-10033, CVE-2016-10045: Don't pass -f if characters will be escaped. // obf

        //PHP 5.6 workaround // obf
        $v_enkbr = ini_get('sendmail_from'); // obf
        if (empty($v_jrevf->Sender) && !empty($v_enkbr)) { // obf
            //PHP config has a sender address we can use // obf
            $v_jrevf->Sender = ini_get('sendmail_from'); // obf
        } // obf
        if (!empty($v_jrevf->Sender) && static::validateAddress($v_jrevf->Sender)) { // obf
            if (self::isShellSafe($v_jrevf->Sender)) { // obf
                $v_yjpsl = sprintf('-f%s', $v_jrevf->Sender); // obf
            } // obf
            $v_izkge = ini_get('sendmail_from'); // obf
            ini_set('sendmail_from', $v_jrevf->Sender); // obf
        } // obf
        $v_yfstf = false; // obf
        if ($v_jrevf->SingleTo && count($v_emphu) > 1) { // obf
            foreach ($v_emphu as $v_nfqgp) { // obf
                $v_yfstf = $v_jrevf->mailPassthru($v_nfqgp, $v_jrevf->Subject, $v_zteze, $v_qwatj, $v_yjpsl); // obf
                $v_ormxw = static::parseAddresses($v_nfqgp, true, $v_jrevf->CharSet); // obf
                $v_jrevf->doCallback( // obf
                    $v_yfstf, // obf
                    [[$v_ormxw['address'], $v_ormxw['name']]], // obf
                    $v_jrevf->cc, // obf
                    $v_jrevf->bcc, // obf
                    $v_jrevf->Subject, // obf
                    $v_zteze, // obf
                    $v_jrevf->From, // obf
                    [] // obf
                ); // obf
            } // obf
        } else { // obf
            $v_yfstf = $v_jrevf->mailPassthru($v_jidup, $v_jrevf->Subject, $v_zteze, $v_qwatj, $v_yjpsl); // obf
            $v_jrevf->doCallback($v_yfstf, $v_jrevf->to, $v_jrevf->cc, $v_jrevf->bcc, $v_jrevf->Subject, $v_zteze, $v_jrevf->From, []); // obf
        } // obf
        if (isset($v_izkge)) { // obf
            ini_set('sendmail_from', $v_izkge); // obf
        } // obf
        if (!$v_yfstf) { // obf
            throw new Exception($v_jrevf->lang('instantiate'), self::STOP_CRITICAL); // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Get an instance to use for SMTP operations. // obf
     * Override this function to load your own SMTP implementation, // obf
     * or set one with setSMTPInstance. // obf
     * // obf
     * @return SMTP // obf
     */ // obf
    public function getSMTPInstance() // obf
    { // obf
        if (!is_object($v_jrevf->smtp)) { // obf
            $v_jrevf->smtp = new SMTP(); // obf
        } // obf

        return $v_jrevf->smtp; // obf
    } // obf

    /** // obf
     * Provide an instance to use for SMTP operations. // obf
     * // obf
     * @return SMTP // obf
     */ // obf
    public function setSMTPInstance(SMTP $v_zbkte) // obf
    { // obf
        $v_jrevf->smtp = $v_zbkte; // obf

        return $v_jrevf->smtp; // obf
    } // obf

    /** // obf
     * Provide SMTP XCLIENT attributes // obf
     * // obf
     * @param string $v_rzcco  Attribute name // obf
     * @param ?string $v_eixqp Attribute value // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function setSMTPXclientAttribute($v_rzcco, $v_eixqp) // obf
    { // obf
        if (!in_array($v_rzcco, SMTP::$v_ghtgo)) { // obf
            return false; // obf
        } // obf
        if (isset($v_jrevf->SMTPXClient[$v_rzcco]) && $v_eixqp === null) { // obf
            unset($v_jrevf->SMTPXClient[$v_rzcco]); // obf
        } elseif ($v_eixqp !== null) { // obf
            $v_jrevf->SMTPXClient[$v_rzcco] = $v_eixqp; // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Get SMTP XCLIENT attributes // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getSMTPXclientAttributes() // obf
    { // obf
        return $v_jrevf->SMTPXClient; // obf
    } // obf

    /** // obf
     * Send mail via SMTP. // obf
     * Returns false if there is a bad MAIL FROM, RCPT, or DATA input. // obf
     * // obf
     * @see PHPMailer::setSMTPInstance() to use a different class. // obf
     * // obf
     * @uses \PHPMailer\PHPMailer\SMTP // obf
     * // obf
     * @param string $v_qwatj The message headers // obf
     * @param string $v_zteze   The message body // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool // obf
     */ // obf
    protected function smtpSend($v_qwatj, $v_zteze) // obf
    { // obf
        $v_qwatj = static::stripTrailingWSP($v_qwatj) . static::$v_svhje . static::$v_svhje; // obf
        $v_evxdc = []; // obf
        if (!$v_jrevf->smtpConnect($v_jrevf->SMTPOptions)) { // obf
            throw new Exception($v_jrevf->lang('smtp_connect_failed'), self::STOP_CRITICAL); // obf
        } // obf
        //Sender already validated in preSend() // obf
        if ('' === $v_jrevf->Sender) { // obf
            $v_sjitw = $v_jrevf->From; // obf
        } else { // obf
            $v_sjitw = $v_jrevf->Sender; // obf
        } // obf
        if (count($v_jrevf->SMTPXClient)) { // obf
            $v_jrevf->smtp->xclient($v_jrevf->SMTPXClient); // obf
        } // obf
        if (!$v_jrevf->smtp->mail($v_sjitw)) { // obf
            $v_jrevf->setError($v_jrevf->lang('from_failed') . $v_sjitw . ' : ' . implode(',', $v_jrevf->smtp->getError())); // obf
            throw new Exception($v_jrevf->ErrorInfo, self::STOP_CRITICAL); // obf
        } // obf

        $v_vbquc = []; // obf
        //Attempt to send to all recipients // obf
        foreach ([$v_jrevf->to, $v_jrevf->cc, $v_jrevf->bcc] as $v_yirfi) { // obf
            foreach ($v_yirfi as $v_jidup) { // obf
                if (!$v_jrevf->smtp->recipient($v_jidup[0], $v_jrevf->dsn)) { // obf
                    $v_jhwhk = $v_jrevf->smtp->getError(); // obf
                    $v_evxdc[] = ['to' => $v_jidup[0], 'error' => $v_jhwhk['detail']]; // obf
                    $v_ctqvk = false; // obf
                } else { // obf
                    $v_ctqvk = true; // obf
                } // obf

                $v_vbquc[] = ['issent' => $v_ctqvk, 'to' => $v_jidup[0], 'name' => $v_jidup[1]]; // obf
            } // obf
        } // obf

        //Only send the DATA command if we have viable recipients // obf
        if ((count($v_jrevf->all_recipients) > count($v_evxdc)) && !$v_jrevf->smtp->data($v_qwatj . $v_zteze)) { // obf
            throw new Exception($v_jrevf->lang('data_not_accepted'), self::STOP_CRITICAL); // obf
        } // obf

        $v_itrjw = $v_jrevf->smtp->getLastTransactionID(); // obf

        if ($v_jrevf->SMTPKeepAlive) { // obf
            $v_jrevf->smtp->reset(); // obf
        } else { // obf
            $v_jrevf->smtp->quit(); // obf
            $v_jrevf->smtp->close(); // obf
        } // obf

        foreach ($v_vbquc as $v_hokaf) { // obf
            $v_jrevf->doCallback( // obf
                $v_hokaf['issent'], // obf
                [[$v_hokaf['to'], $v_hokaf['name']]], // obf
                [], // obf
                [], // obf
                $v_jrevf->Subject, // obf
                $v_zteze, // obf
                $v_jrevf->From, // obf
                ['smtp_transaction_id' => $v_itrjw] // obf
            ); // obf
        } // obf

        //Create error message for any bad addresses // obf
        if (count($v_evxdc) > 0) { // obf
            $v_ghtlk = ''; // obf
            foreach ($v_evxdc as $v_bgoxp) { // obf
                $v_ghtlk .= $v_bgoxp['to'] . ': ' . $v_bgoxp['error']; // obf
            } // obf
            throw new Exception($v_jrevf->lang('recipients_failed') . $v_ghtlk, self::STOP_CONTINUE); // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Initiate a connection to an SMTP server. // obf
     * Returns false if the operation failed. // obf
     * // obf
     * @param array $v_rffpv An array of options compatible with stream_context_create() // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @uses \PHPMailer\PHPMailer\SMTP // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function smtpConnect($v_rffpv = null) // obf
    { // obf
        if (null === $v_jrevf->smtp) { // obf
            $v_jrevf->smtp = $v_jrevf->getSMTPInstance(); // obf
        } // obf

        //If no options are provided, use whatever is set in the instance // obf
        if (null === $v_rffpv) { // obf
            $v_rffpv = $v_jrevf->SMTPOptions; // obf
        } // obf

        //Already connected? // obf
        if ($v_jrevf->smtp->connected()) { // obf
            return true; // obf
        } // obf

        $v_jrevf->smtp->setTimeout($v_jrevf->Timeout); // obf
        $v_jrevf->smtp->setDebugLevel($v_jrevf->SMTPDebug); // obf
        $v_jrevf->smtp->setDebugOutput($v_jrevf->Debugoutput); // obf
        $v_jrevf->smtp->setVerp($v_jrevf->do_verp); // obf
        if ($v_jrevf->Host === null) { // obf
            $v_jrevf->Host = 'localhost'; // obf
        } // obf
        $v_lhrpm = explode(';', $v_jrevf->Host); // obf
        $v_atfhc = null; // obf

        foreach ($v_lhrpm as $v_djuwk) { // obf
            $v_ehjge = []; // obf
            if ( // obf
                !preg_match( // obf
                    '/^(?:(ssl|tls):\/\/)?(.+?)(?::(\d+))?$/', // obf
                    trim($v_djuwk), // obf
                    $v_ehjge // obf
                ) // obf
            ) { // obf
                $v_jrevf->edebug($v_jrevf->lang('invalid_hostentry') . ' ' . trim($v_djuwk)); // obf
                //Not a valid host entry // obf
                continue; // obf
            } // obf
            //$v_ehjge[1]: optional ssl or tls prefix // obf
            //$v_ehjge[2]: the hostname // obf
            //$v_ehjge[3]: optional port number // obf
            //The host string prefix can temporarily override the current setting for SMTPSecure // obf
            //If it's not specified, the default value is used // obf

            //Check the host name is a valid name or IP address before trying to use it // obf
            if (!static::isValidHost($v_ehjge[2])) { // obf
                $v_jrevf->edebug($v_jrevf->lang('invalid_host') . ' ' . $v_ehjge[2]); // obf
                continue; // obf
            } // obf
            $v_alnfe = ''; // obf
            $v_jjwgq = $v_jrevf->SMTPSecure; // obf
            $v_rmhrt = (static::ENCRYPTION_STARTTLS === $v_jrevf->SMTPSecure); // obf
            if ('ssl' === $v_ehjge[1] || ('' === $v_ehjge[1] && static::ENCRYPTION_SMTPS === $v_jrevf->SMTPSecure)) { // obf
                $v_alnfe = 'ssl://'; // obf
                $v_rmhrt = false; //Can't have SSL and TLS at the same time // obf
                $v_jjwgq = static::ENCRYPTION_SMTPS; // obf
            } elseif ('tls' === $v_ehjge[1]) { // obf
                $v_rmhrt = true; // obf
                //TLS doesn't use a prefix // obf
                $v_jjwgq = static::ENCRYPTION_STARTTLS; // obf
            } // obf
            //Do we need the OpenSSL extension? // obf
            $v_jdtbw = defined('OPENSSL_ALGO_SHA256'); // obf
            if (static::ENCRYPTION_STARTTLS === $v_jjwgq || static::ENCRYPTION_SMTPS === $v_jjwgq) { // obf
                //Check for an OpenSSL constant rather than using extension_loaded, which is sometimes disabled // obf
                if (!$v_jdtbw) { // obf
                    throw new Exception($v_jrevf->lang('extension_missing') . 'openssl', self::STOP_CRITICAL); // obf
                } // obf
            } // obf
            $v_euktu = $v_ehjge[2]; // obf
            $v_koxdm = $v_jrevf->Port; // obf
            if ( // obf
                array_key_exists(3, $v_ehjge) && // obf
                is_numeric($v_ehjge[3]) && // obf
                $v_ehjge[3] > 0 && // obf
                $v_ehjge[3] < 65536 // obf
            ) { // obf
                $v_koxdm = (int) $v_ehjge[3]; // obf
            } // obf
            if ($v_jrevf->smtp->connect($v_alnfe . $v_euktu, $v_koxdm, $v_jrevf->Timeout, $v_rffpv)) { // obf
                try { // obf
                    if ($v_jrevf->Helo) { // obf
                        $v_raooo = $v_jrevf->Helo; // obf
                    } else { // obf
                        $v_raooo = $v_jrevf->serverHostname(); // obf
                    } // obf
                    $v_jrevf->smtp->hello($v_raooo); // obf
                    //Automatically enable TLS encryption if: // obf
                    //* it's not disabled // obf
                    //* we are not connecting to localhost // obf
                    //* we have openssl extension // obf
                    //* we are not already using SSL // obf
                    //* the server offers STARTTLS // obf
                    if ( // obf
                        $v_jrevf->SMTPAutoTLS && // obf
                        $v_jrevf->Host !== 'localhost' && // obf
                        $v_jdtbw && // obf
                        $v_jjwgq !== 'ssl' && // obf
                        $v_jrevf->smtp->getServerExt('STARTTLS') // obf
                    ) { // obf
                        $v_rmhrt = true; // obf
                    } // obf
                    if ($v_rmhrt) { // obf
                        if (!$v_jrevf->smtp->startTLS()) { // obf
                            $v_vvplg = $v_jrevf->getSmtpErrorMessage('connect_host'); // obf
                            throw new Exception($v_vvplg); // obf
                        } // obf
                        //We must resend EHLO after TLS negotiation // obf
                        $v_jrevf->smtp->hello($v_raooo); // obf
                    } // obf
                    if ( // obf
                        $v_jrevf->SMTPAuth && !$v_jrevf->smtp->authenticate( // obf
                            $v_jrevf->Username, // obf
                            $v_jrevf->Password, // obf
                            $v_jrevf->AuthType, // obf
                            $v_jrevf->oauth // obf
                        ) // obf
                    ) { // obf
                        throw new Exception($v_jrevf->lang('authenticate')); // obf
                    } // obf

                    return true; // obf
                } catch (Exception $v_sdxgp) { // obf
                    $v_atfhc = $v_sdxgp; // obf
                    $v_jrevf->edebug($v_sdxgp->getMessage()); // obf
                    //We must have connected, but then failed TLS or Auth, so close connection nicely // obf
                    $v_jrevf->smtp->quit(); // obf
                } // obf
            } // obf
        } // obf
        //If we get here, all connection attempts have failed, so close connection hard // obf
        $v_jrevf->smtp->close(); // obf
        //As we've caught all exceptions, just report whatever the last one was // obf
        if ($v_jrevf->exceptions && null !== $v_atfhc) { // obf
            throw $v_atfhc; // obf
        } // obf
        if ($v_jrevf->exceptions) { // obf
            // no exception was thrown, likely $v_jrevf->smtp->connect() failed // obf
            $v_vvplg = $v_jrevf->getSmtpErrorMessage('connect_host'); // obf
            throw new Exception($v_vvplg); // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Close the active SMTP session if one exists. // obf
     */ // obf
    public function smtpClose() // obf
    { // obf
        if ((null !== $v_jrevf->smtp) && $v_jrevf->smtp->connected()) { // obf
            $v_jrevf->smtp->quit(); // obf
            $v_jrevf->smtp->close(); // obf
        } // obf
    } // obf

    /** // obf
     * Set the language for error messages. // obf
     * The default language is English. // obf
     * // obf
     * @param string $v_latnb  ISO 639-1 2-character language code (e.g. French is "fr") // obf
     *                          Optionally, the language code can be enhanced with a 4-character // obf
     *                          script annotation and/or a 2-character country annotation. // obf
     * @param string $v_xaizd Path to the language file directory, with trailing separator (slash) // obf
     *                          Do not set this from user input! // obf
     * // obf
     * @return bool Returns true if the requested language was loaded, false otherwise. // obf
     */ // obf
    public function setLanguage($v_latnb = 'en', $v_xaizd = '') // obf
    { // obf
        //Backwards compatibility for renamed language codes // obf
        $v_mmjuf = [ // obf
            'br' => 'pt_br', // obf
            'cz' => 'cs', // obf
            'dk' => 'da', // obf
            'no' => 'nb', // obf
            'se' => 'sv', // obf
            'rs' => 'sr', // obf
            'tg' => 'tl', // obf
            'am' => 'hy', // obf
        ]; // obf

        if (array_key_exists($v_latnb, $v_mmjuf)) { // obf
            $v_latnb = $v_mmjuf[$v_latnb]; // obf
        } // obf

        //Define full set of translatable strings in English // obf
        $v_fjoro = [ // obf
            'authenticate' => 'SMTP Error: Could not authenticate.', // obf
            'buggy_php' => 'Your version of PHP is affected by a bug that may result in corrupted messages.' . // obf
                ' To fix it, switch to sending using SMTP, disable the mail.add_x_header option in' . // obf
                ' your php.ini, switch to MacOS or Linux, or upgrade your PHP to version 7.0.17+ or 7.1.3+.', // obf
            'connect_host' => 'SMTP Error: Could not connect to SMTP host.', // obf
            'data_not_accepted' => 'SMTP Error: data not accepted.', // obf
            'empty_message' => 'Message body empty', // obf
            'encoding' => 'Unknown encoding: ', // obf
            'execute' => 'Could not execute: ', // obf
            'extension_missing' => 'Extension missing: ', // obf
            'file_access' => 'Could not access file: ', // obf
            'file_open' => 'File Error: Could not open file: ', // obf
            'from_failed' => 'The following From address failed: ', // obf
            'instantiate' => 'Could not instantiate mail function.', // obf
            'invalid_address' => 'Invalid address: ', // obf
            'invalid_header' => 'Invalid header name or value', // obf
            'invalid_hostentry' => 'Invalid hostentry: ', // obf
            'invalid_host' => 'Invalid host: ', // obf
            'mailer_not_supported' => ' mailer is not supported.', // obf
            'provide_address' => 'You must provide at least one recipient email address.', // obf
            'recipients_failed' => 'SMTP Error: The following recipients failed: ', // obf
            'signing' => 'Signing Error: ', // obf
            'smtp_code' => 'SMTP code: ', // obf
            'smtp_code_ex' => 'Additional SMTP info: ', // obf
            'smtp_connect_failed' => 'SMTP connect() failed.', // obf
            'smtp_detail' => 'Detail: ', // obf
            'smtp_error' => 'SMTP server error: ', // obf
            'variable_set' => 'Cannot set or reset variable: ', // obf
        ]; // obf
        if (empty($v_xaizd)) { // obf
            //Calculate an absolute path so it can work if CWD is not here // obf
            $v_xaizd = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'language' . DIRECTORY_SEPARATOR; // obf
        } // obf

        //Validate $v_latnb // obf
        $v_xpren = true; // obf
        $v_latnb  = strtolower($v_latnb); // obf
        if ( // obf
            !preg_match('/^(?P<lang>[a-z]{2})(?P<script>_[a-z]{4})?(?P<country>_[a-z]{2})?$/', $v_latnb, $v_xaohy) // obf
            && $v_latnb !== 'en' // obf
        ) { // obf
            $v_xpren = false; // obf
            $v_latnb = 'en'; // obf
        } // obf

        //There is no English translation file // obf
        if ('en' !== $v_latnb) { // obf
            $v_tzjnb = []; // obf
            if (!empty($v_xaohy['script']) && !empty($v_xaohy['country'])) { // obf
                $v_tzjnb[] = $v_xaohy['lang'] . $v_xaohy['script'] . $v_xaohy['country']; // obf
            } // obf
            if (!empty($v_xaohy['country'])) { // obf
                $v_tzjnb[] = $v_xaohy['lang'] . $v_xaohy['country']; // obf
            } // obf
            if (!empty($v_xaohy['script'])) { // obf
                $v_tzjnb[] = $v_xaohy['lang'] . $v_xaohy['script']; // obf
            } // obf
            $v_tzjnb[] = $v_xaohy['lang']; // obf

            //Try and find a readable language file for the requested language. // obf
            $v_wkkcg = false; // obf
            foreach ($v_tzjnb as $v_jztgh) { // obf
                $v_jpirr = $v_xaizd . 'phpmailer.lang-' . $v_jztgh . '.php'; // obf
                if (static::fileIsAccessible($v_jpirr)) { // obf
                    $v_wkkcg = true; // obf
                    break; // obf
                } // obf
            } // obf

            if ($v_wkkcg === false) { // obf
                $v_xpren = false; // obf
            } else { // obf
                $v_migrd = file($v_jpirr); // obf
                foreach ($v_migrd as $v_sbwvn) { // obf
                    //Translation file lines look like this: // obf
                    //$v_fjoro['authenticate'] = 'SMTP-Fehler: Authentifizierung fehlgeschlagen.'; // obf
                    //These files are parsed as text and not PHP so as to avoid the possibility of code injection // obf
                    //See https://blog.stevenlevithan.com/archives/match-quoted-string // obf
                    $v_xaohy = []; // obf
                    if ( // obf
                        preg_match( // obf
                            '/^\$v_fjoro\[\'([a-z\d_]+)\'\]\s*=\s*(["\'])(.+)*?\2;/', // obf
                            $v_sbwvn, // obf
                            $v_xaohy // obf
                        ) && // obf
                        //Ignore unknown translation keys // obf
                        array_key_exists($v_xaohy[1], $v_fjoro) // obf
                    ) { // obf
                        //Overwrite language-specific strings so we'll never have missing translation keys. // obf
                        $v_fjoro[$v_xaohy[1]] = (string)$v_xaohy[3]; // obf
                    } // obf
                } // obf
            } // obf
        } // obf
        $v_jrevf->language = $v_fjoro; // obf

        return $v_xpren; //Returns false if language not found // obf
    } // obf

    /** // obf
     * Get the array of strings for the current language. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getTranslations() // obf
    { // obf
        if (empty($v_jrevf->language)) { // obf
            $v_jrevf->setLanguage(); // Set the default language. // obf
        } // obf

        return $v_jrevf->language; // obf
    } // obf

    /** // obf
     * Create recipient headers. // obf
     * // obf
     * @param string $v_pcazs // obf
     * @param array  $v_gekpe An array of recipients, // obf
     *                     where each recipient is a 2-element indexed array with element 0 containing an address // obf
     *                     and element 1 containing a name, like: // obf
     *                     [['joe@example.com', 'Joe User'], ['zoe@example.com', 'Zoe User']] // obf
     * // obf
     * @return string // obf
     */ // obf
    public function addrAppend($v_pcazs, $v_gekpe) // obf
    { // obf
        $v_ejxwe = []; // obf
        foreach ($v_gekpe as $v_djyim) { // obf
            $v_ejxwe[] = $v_jrevf->addrFormat($v_djyim); // obf
        } // obf

        return $v_pcazs . ': ' . implode(', ', $v_ejxwe) . static::$v_svhje; // obf
    } // obf

    /** // obf
     * Format an address for use in a message header. // obf
     * // obf
     * @param array $v_gekpe A 2-element indexed array, element 0 containing an address, element 1 containing a name like // obf
     *                    ['joe@example.com', 'Joe User'] // obf
     * // obf
     * @return string // obf
     */ // obf
    public function addrFormat($v_gekpe) // obf
    { // obf
        if (!isset($v_gekpe[1]) || ($v_gekpe[1] === '')) { //No name provided // obf
            return $v_jrevf->secureHeader($v_gekpe[0]); // obf
        } // obf

        return $v_jrevf->encodeHeader($v_jrevf->secureHeader($v_gekpe[1]), 'phrase') . // obf
            ' <' . $v_jrevf->secureHeader($v_gekpe[0]) . '>'; // obf
    } // obf

    /** // obf
     * Word-wrap message. // obf
     * For use with mailers that do not automatically perform wrapping // obf
     * and for quoted-printable encoded messages. // obf
     * Original written by philippe. // obf
     * // obf
     * @param string $v_vvplg The message to wrap // obf
     * @param int    $v_gjlnq  The line length to wrap to // obf
     * @param bool   $v_mimin Whether to run in Quoted-Printable mode // obf
     * // obf
     * @return string // obf
     */ // obf
    public function wrapText($v_vvplg, $v_gjlnq, $v_mimin = false) // obf
    { // obf
        if ($v_mimin) { // obf
            $v_uvkpk = sprintf(' =%s', static::$v_svhje); // obf
        } else { // obf
            $v_uvkpk = static::$v_svhje; // obf
        } // obf
        //If utf-8 encoding is used, we will need to make sure we don't // obf
        //split multibyte characters when we wrap // obf
        $v_pkwdr = static::CHARSET_UTF8 === strtolower($v_jrevf->CharSet); // obf
        $v_rdiwb = strlen(static::$v_svhje); // obf
        $v_jvfhg = strlen(static::$v_svhje); // obf

        $v_vvplg = static::normalizeBreaks($v_vvplg); // obf
        //Remove a trailing line break // obf
        if (substr($v_vvplg, -$v_rdiwb) === static::$v_svhje) { // obf
            $v_vvplg = substr($v_vvplg, 0, -$v_rdiwb); // obf
        } // obf

        //Split message into lines // obf
        $v_migrd = explode(static::$v_svhje, $v_vvplg); // obf
        //Message will be rebuilt in here // obf
        $v_vvplg = ''; // obf
        foreach ($v_migrd as $v_sbwvn) { // obf
            $v_msmus = explode(' ', $v_sbwvn); // obf
            $v_klwzj = ''; // obf
            $v_xqiqn = true; // obf
            foreach ($v_msmus as $v_gcbqh) { // obf
                if ($v_mimin && (strlen($v_gcbqh) > $v_gjlnq)) { // obf
                    $v_fnqao = $v_gjlnq - strlen($v_klwzj) - $v_jvfhg; // obf
                    if (!$v_xqiqn) { // obf
                        if ($v_fnqao > 20) { // obf
                            $v_iblkr = $v_fnqao; // obf
                            if ($v_pkwdr) { // obf
                                $v_iblkr = $v_jrevf->utf8CharBoundary($v_gcbqh, $v_iblkr); // obf
                            } elseif ('=' === substr($v_gcbqh, $v_iblkr - 1, 1)) { // obf
                                --$v_iblkr; // obf
                            } elseif ('=' === substr($v_gcbqh, $v_iblkr - 2, 1)) { // obf
                                $v_iblkr -= 2; // obf
                            } // obf
                            $v_iiiqn = substr($v_gcbqh, 0, $v_iblkr); // obf
                            $v_gcbqh = substr($v_gcbqh, $v_iblkr); // obf
                            $v_klwzj .= ' ' . $v_iiiqn; // obf
                            $v_vvplg .= $v_klwzj . sprintf('=%s', static::$v_svhje); // obf
                        } else { // obf
                            $v_vvplg .= $v_klwzj . $v_uvkpk; // obf
                        } // obf
                        $v_klwzj = ''; // obf
                    } // obf
                    while ($v_gcbqh !== '') { // obf
                        if ($v_gjlnq <= 0) { // obf
                            break; // obf
                        } // obf
                        $v_iblkr = $v_gjlnq; // obf
                        if ($v_pkwdr) { // obf
                            $v_iblkr = $v_jrevf->utf8CharBoundary($v_gcbqh, $v_iblkr); // obf
                        } elseif ('=' === substr($v_gcbqh, $v_iblkr - 1, 1)) { // obf
                            --$v_iblkr; // obf
                        } elseif ('=' === substr($v_gcbqh, $v_iblkr - 2, 1)) { // obf
                            $v_iblkr -= 2; // obf
                        } // obf
                        $v_iiiqn = substr($v_gcbqh, 0, $v_iblkr); // obf
                        $v_gcbqh = (string) substr($v_gcbqh, $v_iblkr); // obf

                        if ($v_gcbqh !== '') { // obf
                            $v_vvplg .= $v_iiiqn . sprintf('=%s', static::$v_svhje); // obf
                        } else { // obf
                            $v_klwzj = $v_iiiqn; // obf
                        } // obf
                    } // obf
                } else { // obf
                    $v_crokb = $v_klwzj; // obf
                    if (!$v_xqiqn) { // obf
                        $v_klwzj .= ' '; // obf
                    } // obf
                    $v_klwzj .= $v_gcbqh; // obf

                    if ('' !== $v_crokb && strlen($v_klwzj) > $v_gjlnq) { // obf
                        $v_vvplg .= $v_crokb . $v_uvkpk; // obf
                        $v_klwzj = $v_gcbqh; // obf
                    } // obf
                } // obf
                $v_xqiqn = false; // obf
            } // obf
            $v_vvplg .= $v_klwzj . static::$v_svhje; // obf
        } // obf

        return $v_vvplg; // obf
    } // obf

    /** // obf
     * Find the last character boundary prior to $v_gnxkr in a utf-8 // obf
     * quoted-printable encoded string. // obf
     * Original written by Colin Brown. // obf
     * // obf
     * @param string $v_qlyra utf-8 QP text // obf
     * @param int    $v_gnxkr   Find the last character boundary prior to this length // obf
     * // obf
     * @return int // obf
     */ // obf
    public function utf8CharBoundary($v_qlyra, $v_gnxkr) // obf
    { // obf
        $v_whejd = false; // obf
        $v_quikg = 3; // obf
        while (!$v_whejd) { // obf
            $v_wfnxq = substr($v_qlyra, $v_gnxkr - $v_quikg, $v_quikg); // obf
            $v_nuwcc = strpos($v_wfnxq, '='); // obf
            if (false !== $v_nuwcc) { // obf
                //Found start of encoded character byte within $v_quikg block. // obf
                //Check the encoded byte value (the 2 chars after the '=') // obf
                $v_iyusu = substr($v_qlyra, $v_gnxkr - $v_quikg + $v_nuwcc + 1, 2); // obf
                $v_psqew = hexdec($v_iyusu); // obf
                if ($v_psqew < 128) { // obf
                    //Single byte character. // obf
                    //If the encoded char was found at pos 0, it will fit // obf
                    //otherwise reduce maxLength to start of the encoded char // obf
                    if ($v_nuwcc > 0) { // obf
                        $v_gnxkr -= $v_quikg - $v_nuwcc; // obf
                    } // obf
                    $v_whejd = true; // obf
                } elseif ($v_psqew >= 192) { // obf
                    //First byte of a multi byte character // obf
                    //Reduce maxLength to split at start of character // obf
                    $v_gnxkr -= $v_quikg - $v_nuwcc; // obf
                    $v_whejd = true; // obf
                } elseif ($v_psqew < 192) { // obf
                    //Middle byte of a multi byte character, look further back // obf
                    $v_quikg += 3; // obf
                } // obf
            } else { // obf
                //No encoded character found // obf
                $v_whejd = true; // obf
            } // obf
        } // obf

        return $v_gnxkr; // obf
    } // obf

    /** // obf
     * Apply word wrapping to the message body. // obf
     * Wraps the message body to the number of chars set in the WordWrap property. // obf
     * You should only do this to plain-text bodies as wrapping HTML tags may break them. // obf
     * This is called automatically by createBody(), so you don't need to call it yourself. // obf
     */ // obf
    public function setWordWrap() // obf
    { // obf
        if ($v_jrevf->WordWrap < 1) { // obf
            return; // obf
        } // obf

        switch ($v_jrevf->message_type) { // obf
            case 'alt': // obf
            case 'alt_inline': // obf
            case 'alt_attach': // obf
            case 'alt_inline_attach': // obf
                $v_jrevf->AltBody = $v_jrevf->wrapText($v_jrevf->AltBody, $v_jrevf->WordWrap); // obf
                break; // obf
            default: // obf
                $v_jrevf->Body = $v_jrevf->wrapText($v_jrevf->Body, $v_jrevf->WordWrap); // obf
                break; // obf
        } // obf
    } // obf

    /** // obf
     * Assemble message headers. // obf
     * // obf
     * @return string The assembled headers // obf
     */ // obf
    public function createHeader() // obf
    { // obf
        $v_yfstf = ''; // obf

        $v_yfstf .= $v_jrevf->headerLine('Date', '' === $v_jrevf->MessageDate ? self::rfcDate() : $v_jrevf->MessageDate); // obf

        //The To header is created automatically by mail(), so needs to be omitted here // obf
        if ('mail' !== $v_jrevf->Mailer) { // obf
            if ($v_jrevf->SingleTo) { // obf
                foreach ($v_jrevf->to as $v_xlcma) { // obf
                    $v_jrevf->SingleToArray[] = $v_jrevf->addrFormat($v_xlcma); // obf
                } // obf
            } elseif (count($v_jrevf->to) > 0) { // obf
                $v_yfstf .= $v_jrevf->addrAppend('To', $v_jrevf->to); // obf
            } elseif (count($v_jrevf->cc) === 0) { // obf
                $v_yfstf .= $v_jrevf->headerLine('To', 'undisclosed-recipients:;'); // obf
            } // obf
        } // obf
        $v_yfstf .= $v_jrevf->addrAppend('From', [[trim($v_jrevf->From), $v_jrevf->FromName]]); // obf

        //sendmail and mail() extract Cc from the header before sending // obf
        if (count($v_jrevf->cc) > 0) { // obf
            $v_yfstf .= $v_jrevf->addrAppend('Cc', $v_jrevf->cc); // obf
        } // obf

        //sendmail and mail() extract Bcc from the header before sending // obf
        if ( // obf
            ( // obf
                'sendmail' === $v_jrevf->Mailer || 'qmail' === $v_jrevf->Mailer || 'mail' === $v_jrevf->Mailer // obf
            ) // obf
            && count($v_jrevf->bcc) > 0 // obf
        ) { // obf
            $v_yfstf .= $v_jrevf->addrAppend('Bcc', $v_jrevf->bcc); // obf
        } // obf

        if (count($v_jrevf->ReplyTo) > 0) { // obf
            $v_yfstf .= $v_jrevf->addrAppend('Reply-To', $v_jrevf->ReplyTo); // obf
        } // obf

        //mail() sets the subject itself // obf
        if ('mail' !== $v_jrevf->Mailer) { // obf
            $v_yfstf .= $v_jrevf->headerLine('Subject', $v_jrevf->encodeHeader($v_jrevf->secureHeader($v_jrevf->Subject))); // obf
        } // obf

        //Only allow a custom message ID if it conforms to RFC 5322 section 3.6.4 // obf
        //https://www.rfc-editor.org/rfc/rfc5322#section-3.6.4 // obf
        if ( // obf
            '' !== $v_jrevf->MessageID && // obf
            preg_match( // obf
                '/^<((([a-z\d!#$%&\'*+\/=?^_`{|}~-]+(\.[a-z\d!#$%&\'*+\/=?^_`{|}~-]+)*)' . // obf
                '|("(([\x01-\x08\x0B\x0C\x0E-\x1F\x7F]|[\x21\x23-\x5B\x5D-\x7E])' . // obf
                '|(\\[\x01-\x09\x0B\x0C\x0E-\x7F]))*"))@(([a-z\d!#$%&\'*+\/=?^_`{|}~-]+' . // obf
                '(\.[a-z\d!#$%&\'*+\/=?^_`{|}~-]+)*)|(\[(([\x01-\x08\x0B\x0C\x0E-\x1F\x7F]' . // obf
                '|[\x21-\x5A\x5E-\x7E])|(\\[\x01-\x09\x0B\x0C\x0E-\x7F]))*\])))>$/Di', // obf
                $v_jrevf->MessageID // obf
            ) // obf
        ) { // obf
            $v_jrevf->lastMessageID = $v_jrevf->MessageID; // obf
        } else { // obf
            $v_jrevf->lastMessageID = sprintf('<%s@%s>', $v_jrevf->uniqueid, $v_jrevf->serverHostname()); // obf
        } // obf
        $v_yfstf .= $v_jrevf->headerLine('Message-ID', $v_jrevf->lastMessageID); // obf
        if (null !== $v_jrevf->Priority) { // obf
            $v_yfstf .= $v_jrevf->headerLine('X-Priority', $v_jrevf->Priority); // obf
        } // obf
        if ('' === $v_jrevf->XMailer) { // obf
            //Empty string for default X-Mailer header // obf
            $v_yfstf .= $v_jrevf->headerLine( // obf
                'X-Mailer', // obf
                'PHPMailer ' . self::VERSION . ' (https://github.com/PHPMailer/PHPMailer)' // obf
            ); // obf
        } elseif (is_string($v_jrevf->XMailer) && trim($v_jrevf->XMailer) !== '') { // obf
            //Some string // obf
            $v_yfstf .= $v_jrevf->headerLine('X-Mailer', trim($v_jrevf->XMailer)); // obf
        } //Other values result in no X-Mailer header // obf

        if ('' !== $v_jrevf->ConfirmReadingTo) { // obf
            $v_yfstf .= $v_jrevf->headerLine('Disposition-Notification-To', '<' . $v_jrevf->ConfirmReadingTo . '>'); // obf
        } // obf

        //Add custom headers // obf
        foreach ($v_jrevf->CustomHeader as $v_qwatj) { // obf
            $v_yfstf .= $v_jrevf->headerLine( // obf
                trim($v_qwatj[0]), // obf
                $v_jrevf->encodeHeader(trim($v_qwatj[1])) // obf
            ); // obf
        } // obf
        if (!$v_jrevf->sign_key_file) { // obf
            $v_yfstf .= $v_jrevf->headerLine('MIME-Version', '1.0'); // obf
            $v_yfstf .= $v_jrevf->getMailMIME(); // obf
        } // obf

        return $v_yfstf; // obf
    } // obf

    /** // obf
     * Get the message MIME type headers. // obf
     * // obf
     * @return string // obf
     */ // obf
    public function getMailMIME() // obf
    { // obf
        $v_yfstf = ''; // obf
        $v_wifuh = true; // obf
        switch ($v_jrevf->message_type) { // obf
            case 'inline': // obf
                $v_yfstf .= $v_jrevf->headerLine('Content-Type', static::CONTENT_TYPE_MULTIPART_RELATED . ';'); // obf
                $v_yfstf .= $v_jrevf->textLine(' boundary="' . $v_jrevf->boundary[1] . '"'); // obf
                break; // obf
            case 'attach': // obf
            case 'inline_attach': // obf
            case 'alt_attach': // obf
            case 'alt_inline_attach': // obf
                $v_yfstf .= $v_jrevf->headerLine('Content-Type', static::CONTENT_TYPE_MULTIPART_MIXED . ';'); // obf
                $v_yfstf .= $v_jrevf->textLine(' boundary="' . $v_jrevf->boundary[1] . '"'); // obf
                break; // obf
            case 'alt': // obf
            case 'alt_inline': // obf
                $v_yfstf .= $v_jrevf->headerLine('Content-Type', static::CONTENT_TYPE_MULTIPART_ALTERNATIVE . ';'); // obf
                $v_yfstf .= $v_jrevf->textLine(' boundary="' . $v_jrevf->boundary[1] . '"'); // obf
                break; // obf
            default: // obf
                //Catches case 'plain': and case '': // obf
                $v_yfstf .= $v_jrevf->textLine('Content-Type: ' . $v_jrevf->ContentType . '; charset=' . $v_jrevf->CharSet); // obf
                $v_wifuh = false; // obf
                break; // obf
        } // obf
        //RFC1341 part 5 says 7bit is assumed if not specified // obf
        if (static::ENCODING_7BIT !== $v_jrevf->Encoding) { // obf
            //RFC 2045 section 6.4 says multipart MIME parts may only use 7bit, 8bit or binary CTE // obf
            if ($v_wifuh) { // obf
                if (static::ENCODING_8BIT === $v_jrevf->Encoding) { // obf
                    $v_yfstf .= $v_jrevf->headerLine('Content-Transfer-Encoding', static::ENCODING_8BIT); // obf
                } // obf
                //The only remaining alternatives are quoted-printable and base64, which are both 7bit compatible // obf
            } else { // obf
                $v_yfstf .= $v_jrevf->headerLine('Content-Transfer-Encoding', $v_jrevf->Encoding); // obf
            } // obf
        } // obf

        return $v_yfstf; // obf
    } // obf

    /** // obf
     * Returns the whole MIME message. // obf
     * Includes complete headers and body. // obf
     * Only valid post preSend(). // obf
     * // obf
     * @see PHPMailer::preSend() // obf
     * // obf
     * @return string // obf
     */ // obf
    public function getSentMIMEMessage() // obf
    { // obf
        return static::stripTrailingWSP($v_jrevf->MIMEHeader . $v_jrevf->mailHeader) . // obf
            static::$v_svhje . static::$v_svhje . $v_jrevf->MIMEBody; // obf
    } // obf

    /** // obf
     * Create a unique ID to use for boundaries. // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function generateId() // obf
    { // obf
        $v_iblkr = 32; //32 bytes = 256 bits // obf
        $v_gxcah = ''; // obf
        if (function_exists('random_bytes')) { // obf
            try { // obf
                $v_gxcah = random_bytes($v_iblkr); // obf
            } catch (\Exception $v_rerfb) { // obf
                //Do nothing // obf
            } // obf
        } elseif (function_exists('openssl_random_pseudo_bytes')) { // obf
            /** @noinspection CryptographicallySecureRandomnessInspection */ // obf
            $v_gxcah = openssl_random_pseudo_bytes($v_iblkr); // obf
        } // obf
        if ($v_gxcah === '') { // obf
            //We failed to produce a proper random string, so make do. // obf
            //Use a hash to force the length to the same as the other methods // obf
            $v_gxcah = hash('sha256', uniqid((string) mt_rand(), true), true); // obf
        } // obf

        //We don't care about messing up base64 format here, just want a random string // obf
        return str_replace(['=', '+', '/'], '', base64_encode(hash('sha256', $v_gxcah, true))); // obf
    } // obf

    /** // obf
     * Assemble the message body. // obf
     * Returns an empty string on failure. // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return string The assembled message body // obf
     */ // obf
    public function createBody() // obf
    { // obf
        $v_zteze = ''; // obf
        //Create unique IDs and preset boundaries // obf
        $v_jrevf->setBoundaries(); // obf

        if ($v_jrevf->sign_key_file) { // obf
            $v_zteze .= $v_jrevf->getMailMIME() . static::$v_svhje; // obf
        } // obf

        $v_jrevf->setWordWrap(); // obf

        $v_cpuca = $v_jrevf->Encoding; // obf
        $v_vwqpw = $v_jrevf->CharSet; // obf
        //Can we do a 7-bit downgrade? // obf
        if (static::ENCODING_8BIT === $v_cpuca && !$v_jrevf->has8bitChars($v_jrevf->Body)) { // obf
            $v_cpuca = static::ENCODING_7BIT; // obf
            //All ISO 8859, Windows codepage and UTF-8 charsets are ascii compatible up to 7-bit // obf
            $v_vwqpw = static::CHARSET_ASCII; // obf
        } // obf
        //If lines are too long, and we're not already using an encoding that will shorten them, // obf
        //change to quoted-printable transfer encoding for the body part only // obf
        if (static::ENCODING_BASE64 !== $v_jrevf->Encoding && static::hasLineLongerThanMax($v_jrevf->Body)) { // obf
            $v_cpuca = static::ENCODING_QUOTED_PRINTABLE; // obf
        } // obf

        $v_zffqz = $v_jrevf->Encoding; // obf
        $v_wzqjb = $v_jrevf->CharSet; // obf
        //Can we do a 7-bit downgrade? // obf
        if (static::ENCODING_8BIT === $v_zffqz && !$v_jrevf->has8bitChars($v_jrevf->AltBody)) { // obf
            $v_zffqz = static::ENCODING_7BIT; // obf
            //All ISO 8859, Windows codepage and UTF-8 charsets are ascii compatible up to 7-bit // obf
            $v_wzqjb = static::CHARSET_ASCII; // obf
        } // obf
        //If lines are too long, and we're not already using an encoding that will shorten them, // obf
        //change to quoted-printable transfer encoding for the alt body part only // obf
        if (static::ENCODING_BASE64 !== $v_zffqz && static::hasLineLongerThanMax($v_jrevf->AltBody)) { // obf
            $v_zffqz = static::ENCODING_QUOTED_PRINTABLE; // obf
        } // obf
        //Use this as a preamble in all multipart message types // obf
        $v_fdnow = ''; // obf
        switch ($v_jrevf->message_type) { // obf
            case 'inline': // obf
                $v_zteze .= $v_fdnow; // obf
                $v_zteze .= $v_jrevf->getBoundary($v_jrevf->boundary[1], $v_vwqpw, '', $v_cpuca); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->Body, $v_cpuca); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->attachAll('inline', $v_jrevf->boundary[1]); // obf
                break; // obf
            case 'attach': // obf
                $v_zteze .= $v_fdnow; // obf
                $v_zteze .= $v_jrevf->getBoundary($v_jrevf->boundary[1], $v_vwqpw, '', $v_cpuca); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->Body, $v_cpuca); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->attachAll('attachment', $v_jrevf->boundary[1]); // obf
                break; // obf
            case 'inline_attach': // obf
                $v_zteze .= $v_fdnow; // obf
                $v_zteze .= $v_jrevf->textLine('--' . $v_jrevf->boundary[1]); // obf
                $v_zteze .= $v_jrevf->headerLine('Content-Type', static::CONTENT_TYPE_MULTIPART_RELATED . ';'); // obf
                $v_zteze .= $v_jrevf->textLine(' boundary="' . $v_jrevf->boundary[2] . '";'); // obf
                $v_zteze .= $v_jrevf->textLine(' type="' . static::CONTENT_TYPE_TEXT_HTML . '"'); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->getBoundary($v_jrevf->boundary[2], $v_vwqpw, '', $v_cpuca); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->Body, $v_cpuca); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->attachAll('inline', $v_jrevf->boundary[2]); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->attachAll('attachment', $v_jrevf->boundary[1]); // obf
                break; // obf
            case 'alt': // obf
                $v_zteze .= $v_fdnow; // obf
                $v_zteze .= $v_jrevf->getBoundary( // obf
                    $v_jrevf->boundary[1], // obf
                    $v_wzqjb, // obf
                    static::CONTENT_TYPE_PLAINTEXT, // obf
                    $v_zffqz // obf
                ); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->AltBody, $v_zffqz); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->getBoundary( // obf
                    $v_jrevf->boundary[1], // obf
                    $v_vwqpw, // obf
                    static::CONTENT_TYPE_TEXT_HTML, // obf
                    $v_cpuca // obf
                ); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->Body, $v_cpuca); // obf
                $v_zteze .= static::$v_svhje; // obf
                if (!empty($v_jrevf->Ical)) { // obf
                    $v_nqtnd = static::ICAL_METHOD_REQUEST; // obf
                    foreach (static::$v_bairn as $v_fnkhj) { // obf
                        if (stripos($v_jrevf->Ical, 'METHOD:' . $v_fnkhj) !== false) { // obf
                            $v_nqtnd = $v_fnkhj; // obf
                            break; // obf
                        } // obf
                    } // obf
                    $v_zteze .= $v_jrevf->getBoundary( // obf
                        $v_jrevf->boundary[1], // obf
                        '', // obf
                        static::CONTENT_TYPE_TEXT_CALENDAR . '; method=' . $v_nqtnd, // obf
                        '' // obf
                    ); // obf
                    $v_zteze .= $v_jrevf->encodeString($v_jrevf->Ical, $v_jrevf->Encoding); // obf
                    $v_zteze .= static::$v_svhje; // obf
                } // obf
                $v_zteze .= $v_jrevf->endBoundary($v_jrevf->boundary[1]); // obf
                break; // obf
            case 'alt_inline': // obf
                $v_zteze .= $v_fdnow; // obf
                $v_zteze .= $v_jrevf->getBoundary( // obf
                    $v_jrevf->boundary[1], // obf
                    $v_wzqjb, // obf
                    static::CONTENT_TYPE_PLAINTEXT, // obf
                    $v_zffqz // obf
                ); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->AltBody, $v_zffqz); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->textLine('--' . $v_jrevf->boundary[1]); // obf
                $v_zteze .= $v_jrevf->headerLine('Content-Type', static::CONTENT_TYPE_MULTIPART_RELATED . ';'); // obf
                $v_zteze .= $v_jrevf->textLine(' boundary="' . $v_jrevf->boundary[2] . '";'); // obf
                $v_zteze .= $v_jrevf->textLine(' type="' . static::CONTENT_TYPE_TEXT_HTML . '"'); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->getBoundary( // obf
                    $v_jrevf->boundary[2], // obf
                    $v_vwqpw, // obf
                    static::CONTENT_TYPE_TEXT_HTML, // obf
                    $v_cpuca // obf
                ); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->Body, $v_cpuca); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->attachAll('inline', $v_jrevf->boundary[2]); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->endBoundary($v_jrevf->boundary[1]); // obf
                break; // obf
            case 'alt_attach': // obf
                $v_zteze .= $v_fdnow; // obf
                $v_zteze .= $v_jrevf->textLine('--' . $v_jrevf->boundary[1]); // obf
                $v_zteze .= $v_jrevf->headerLine('Content-Type', static::CONTENT_TYPE_MULTIPART_ALTERNATIVE . ';'); // obf
                $v_zteze .= $v_jrevf->textLine(' boundary="' . $v_jrevf->boundary[2] . '"'); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->getBoundary( // obf
                    $v_jrevf->boundary[2], // obf
                    $v_wzqjb, // obf
                    static::CONTENT_TYPE_PLAINTEXT, // obf
                    $v_zffqz // obf
                ); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->AltBody, $v_zffqz); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->getBoundary( // obf
                    $v_jrevf->boundary[2], // obf
                    $v_vwqpw, // obf
                    static::CONTENT_TYPE_TEXT_HTML, // obf
                    $v_cpuca // obf
                ); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->Body, $v_cpuca); // obf
                $v_zteze .= static::$v_svhje; // obf
                if (!empty($v_jrevf->Ical)) { // obf
                    $v_nqtnd = static::ICAL_METHOD_REQUEST; // obf
                    foreach (static::$v_bairn as $v_fnkhj) { // obf
                        if (stripos($v_jrevf->Ical, 'METHOD:' . $v_fnkhj) !== false) { // obf
                            $v_nqtnd = $v_fnkhj; // obf
                            break; // obf
                        } // obf
                    } // obf
                    $v_zteze .= $v_jrevf->getBoundary( // obf
                        $v_jrevf->boundary[2], // obf
                        '', // obf
                        static::CONTENT_TYPE_TEXT_CALENDAR . '; method=' . $v_nqtnd, // obf
                        '' // obf
                    ); // obf
                    $v_zteze .= $v_jrevf->encodeString($v_jrevf->Ical, $v_jrevf->Encoding); // obf
                } // obf
                $v_zteze .= $v_jrevf->endBoundary($v_jrevf->boundary[2]); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->attachAll('attachment', $v_jrevf->boundary[1]); // obf
                break; // obf
            case 'alt_inline_attach': // obf
                $v_zteze .= $v_fdnow; // obf
                $v_zteze .= $v_jrevf->textLine('--' . $v_jrevf->boundary[1]); // obf
                $v_zteze .= $v_jrevf->headerLine('Content-Type', static::CONTENT_TYPE_MULTIPART_ALTERNATIVE . ';'); // obf
                $v_zteze .= $v_jrevf->textLine(' boundary="' . $v_jrevf->boundary[2] . '"'); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->getBoundary( // obf
                    $v_jrevf->boundary[2], // obf
                    $v_wzqjb, // obf
                    static::CONTENT_TYPE_PLAINTEXT, // obf
                    $v_zffqz // obf
                ); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->AltBody, $v_zffqz); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->textLine('--' . $v_jrevf->boundary[2]); // obf
                $v_zteze .= $v_jrevf->headerLine('Content-Type', static::CONTENT_TYPE_MULTIPART_RELATED . ';'); // obf
                $v_zteze .= $v_jrevf->textLine(' boundary="' . $v_jrevf->boundary[3] . '";'); // obf
                $v_zteze .= $v_jrevf->textLine(' type="' . static::CONTENT_TYPE_TEXT_HTML . '"'); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->getBoundary( // obf
                    $v_jrevf->boundary[3], // obf
                    $v_vwqpw, // obf
                    static::CONTENT_TYPE_TEXT_HTML, // obf
                    $v_cpuca // obf
                ); // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->Body, $v_cpuca); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->attachAll('inline', $v_jrevf->boundary[3]); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->endBoundary($v_jrevf->boundary[2]); // obf
                $v_zteze .= static::$v_svhje; // obf
                $v_zteze .= $v_jrevf->attachAll('attachment', $v_jrevf->boundary[1]); // obf
                break; // obf
            default: // obf
                //Catch case 'plain' and case '', applies to simple `text/plain` and `text/html` body content types // obf
                //Reset the `Encoding` property in case we changed it for line length reasons // obf
                $v_jrevf->Encoding = $v_cpuca; // obf
                $v_zteze .= $v_jrevf->encodeString($v_jrevf->Body, $v_jrevf->Encoding); // obf
                break; // obf
        } // obf

        if ($v_jrevf->isError()) { // obf
            $v_zteze = ''; // obf
            if ($v_jrevf->exceptions) { // obf
                throw new Exception($v_jrevf->lang('empty_message'), self::STOP_CRITICAL); // obf
            } // obf
        } elseif ($v_jrevf->sign_key_file) { // obf
            try { // obf
                if (!defined('PKCS7_TEXT')) { // obf
                    throw new Exception($v_jrevf->lang('extension_missing') . 'openssl'); // obf
                } // obf

                $v_udwps = tempnam(sys_get_temp_dir(), 'srcsign'); // obf
                $v_kqtgk = tempnam(sys_get_temp_dir(), 'mailsign'); // obf
                file_put_contents($v_udwps, $v_zteze); // obf

                //Workaround for PHP bug https://bugs.php.net/bug.php?id=69197 // obf
                if (empty($v_jrevf->sign_extracerts_file)) { // obf
                    $v_ddfpn = @openssl_pkcs7_sign( // obf
                        $v_udwps, // obf
                        $v_kqtgk, // obf
                        'file://' . realpath($v_jrevf->sign_cert_file), // obf
                        ['file://' . realpath($v_jrevf->sign_key_file), $v_jrevf->sign_key_pass], // obf
                        [] // obf
                    ); // obf
                } else { // obf
                    $v_ddfpn = @openssl_pkcs7_sign( // obf
                        $v_udwps, // obf
                        $v_kqtgk, // obf
                        'file://' . realpath($v_jrevf->sign_cert_file), // obf
                        ['file://' . realpath($v_jrevf->sign_key_file), $v_jrevf->sign_key_pass], // obf
                        [], // obf
                        PKCS7_DETACHED, // obf
                        $v_jrevf->sign_extracerts_file // obf
                    ); // obf
                } // obf

                @unlink($v_udwps); // obf
                if ($v_ddfpn) { // obf
                    $v_zteze = file_get_contents($v_kqtgk); // obf
                    @unlink($v_kqtgk); // obf
                    //The message returned by openssl contains both headers and body, so need to split them up // obf
                    $v_fmnyy = explode("\n\n", $v_zteze, 2); // obf
                    $v_jrevf->MIMEHeader .= $v_fmnyy[0] . static::$v_svhje . static::$v_svhje; // obf
                    $v_zteze = $v_fmnyy[1]; // obf
                } else { // obf
                    @unlink($v_kqtgk); // obf
                    throw new Exception($v_jrevf->lang('signing') . openssl_error_string()); // obf
                } // obf
            } catch (Exception $v_sdxgp) { // obf
                $v_zteze = ''; // obf
                if ($v_jrevf->exceptions) { // obf
                    throw $v_sdxgp; // obf
                } // obf
            } // obf
        } // obf

        return $v_zteze; // obf
    } // obf

    /** // obf
     * Get the boundaries that this message will use // obf
     * @return array // obf
     */ // obf
    public function getBoundaries() // obf
    { // obf
        if (empty($v_jrevf->boundary)) { // obf
            $v_jrevf->setBoundaries(); // obf
        } // obf
        return $v_jrevf->boundary; // obf
    } // obf

    /** // obf
     * Return the start of a message boundary. // obf
     * // obf
     * @param string $v_dpasf // obf
     * @param string $v_jtucj // obf
     * @param string $v_xbxzt // obf
     * @param string $v_xczhz // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function getBoundary($v_dpasf, $v_jtucj, $v_xbxzt, $v_xczhz) // obf
    { // obf
        $v_yfstf = ''; // obf
        if ('' === $v_jtucj) { // obf
            $v_jtucj = $v_jrevf->CharSet; // obf
        } // obf
        if ('' === $v_xbxzt) { // obf
            $v_xbxzt = $v_jrevf->ContentType; // obf
        } // obf
        if ('' === $v_xczhz) { // obf
            $v_xczhz = $v_jrevf->Encoding; // obf
        } // obf
        $v_yfstf .= $v_jrevf->textLine('--' . $v_dpasf); // obf
        $v_yfstf .= sprintf('Content-Type: %s; charset=%s', $v_xbxzt, $v_jtucj); // obf
        $v_yfstf .= static::$v_svhje; // obf
        //RFC1341 part 5 says 7bit is assumed if not specified // obf
        if (static::ENCODING_7BIT !== $v_xczhz) { // obf
            $v_yfstf .= $v_jrevf->headerLine('Content-Transfer-Encoding', $v_xczhz); // obf
        } // obf
        $v_yfstf .= static::$v_svhje; // obf

        return $v_yfstf; // obf
    } // obf

    /** // obf
     * Return the end of a message boundary. // obf
     * // obf
     * @param string $v_dpasf // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function endBoundary($v_dpasf) // obf
    { // obf
        return static::$v_svhje . '--' . $v_dpasf . '--' . static::$v_svhje; // obf
    } // obf

    /** // obf
     * Set the message type. // obf
     * PHPMailer only supports some preset message types, not arbitrary MIME structures. // obf
     */ // obf
    protected function setMessageType() // obf
    { // obf
        $v_pcazs = []; // obf
        if ($v_jrevf->alternativeExists()) { // obf
            $v_pcazs[] = 'alt'; // obf
        } // obf
        if ($v_jrevf->inlineImageExists()) { // obf
            $v_pcazs[] = 'inline'; // obf
        } // obf
        if ($v_jrevf->attachmentExists()) { // obf
            $v_pcazs[] = 'attach'; // obf
        } // obf
        $v_jrevf->message_type = implode('_', $v_pcazs); // obf
        if ('' === $v_jrevf->message_type) { // obf
            //The 'plain' message_type refers to the message having a single body element, not that it is plain-text // obf
            $v_jrevf->message_type = 'plain'; // obf
        } // obf
    } // obf

    /** // obf
     * Format a header line. // obf
     * // obf
     * @param string     $v_rzcco // obf
     * @param string|int $v_eixqp // obf
     * // obf
     * @return string // obf
     */ // obf
    public function headerLine($v_rzcco, $v_eixqp) // obf
    { // obf
        return $v_rzcco . ': ' . $v_eixqp . static::$v_svhje; // obf
    } // obf

    /** // obf
     * Return a formatted mail line. // obf
     * // obf
     * @param string $v_eixqp // obf
     * // obf
     * @return string // obf
     */ // obf
    public function textLine($v_eixqp) // obf
    { // obf
        return $v_eixqp . static::$v_svhje; // obf
    } // obf

    /** // obf
     * Add an attachment from a path on the filesystem. // obf
     * Never use a user-supplied path to a file! // obf
     * Returns false if the file could not be found or read. // obf
     * Explicitly *does not* support passing URLs; PHPMailer is not an HTTP client. // obf
     * If you need to do that, fetch the resource yourself and pass it in via a local file or string. // obf
     * // obf
     * @param string $v_whtmi        Path to the attachment // obf
     * @param string $v_rzcco        Overrides the attachment name // obf
     * @param string $v_xczhz    File encoding (see $v_egijf) // obf
     * @param string $v_pcazs        MIME type, e.g. `image/jpeg`; determined automatically from $v_whtmi if not specified // obf
     * @param string $v_bbuyf Disposition to use // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function addAttachment( // obf
        $v_whtmi, // obf
        $v_rzcco = '', // obf
        $v_xczhz = self::ENCODING_BASE64, // obf
        $v_pcazs = '', // obf
        $v_bbuyf = 'attachment' // obf
    ) { // obf
        try { // obf
            if (!static::fileIsAccessible($v_whtmi)) { // obf
                throw new Exception($v_jrevf->lang('file_access') . $v_whtmi, self::STOP_CONTINUE); // obf
            } // obf

            //If a MIME type is not specified, try to work it out from the file name // obf
            if ('' === $v_pcazs) { // obf
                $v_pcazs = static::filenameToType($v_whtmi); // obf
            } // obf

            $v_upmpe = (string) static::mb_pathinfo($v_whtmi, PATHINFO_BASENAME); // obf
            if ('' === $v_rzcco) { // obf
                $v_rzcco = $v_upmpe; // obf
            } // obf
            if (!$v_jrevf->validateEncoding($v_xczhz)) { // obf
                throw new Exception($v_jrevf->lang('encoding') . $v_xczhz); // obf
            } // obf

            $v_jrevf->attachment[] = [ // obf
                0 => $v_whtmi, // obf
                1 => $v_upmpe, // obf
                2 => $v_rzcco, // obf
                3 => $v_xczhz, // obf
                4 => $v_pcazs, // obf
                5 => false, //isStringAttachment // obf
                6 => $v_bbuyf, // obf
                7 => $v_rzcco, // obf
            ]; // obf
        } catch (Exception $v_sdxgp) { // obf
            $v_jrevf->setError($v_sdxgp->getMessage()); // obf
            $v_jrevf->edebug($v_sdxgp->getMessage()); // obf
            if ($v_jrevf->exceptions) { // obf
                throw $v_sdxgp; // obf
            } // obf

            return false; // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Return the array of attachments. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getAttachments() // obf
    { // obf
        return $v_jrevf->attachment; // obf
    } // obf

    /** // obf
     * Attach all file, string, and binary attachments to the message. // obf
     * Returns an empty string on failure. // obf
     * // obf
     * @param string $v_ntcem // obf
     * @param string $v_dpasf // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function attachAll($v_ntcem, $v_dpasf) // obf
    { // obf
        //Return text of body // obf
        $v_eadbo = []; // obf
        $v_rruew = []; // obf
        $v_skeib = []; // obf

        //Add all attachments // obf
        foreach ($v_jrevf->attachment as $v_zaexf) { // obf
            //Check if it is a valid disposition_filter // obf
            if ($v_zaexf[6] === $v_ntcem) { // obf
                //Check for string attachment // obf
                $v_mwuob = ''; // obf
                $v_whtmi = ''; // obf
                $v_esxbd = $v_zaexf[5]; // obf
                if ($v_esxbd) { // obf
                    $v_mwuob = $v_zaexf[0]; // obf
                } else { // obf
                    $v_whtmi = $v_zaexf[0]; // obf
                } // obf

                $v_kooks = hash('sha256', serialize($v_zaexf)); // obf
                if (in_array($v_kooks, $v_skeib, true)) { // obf
                    continue; // obf
                } // obf
                $v_skeib[] = $v_kooks; // obf
                $v_rzcco = $v_zaexf[2]; // obf
                $v_xczhz = $v_zaexf[3]; // obf
                $v_pcazs = $v_zaexf[4]; // obf
                $v_bbuyf = $v_zaexf[6]; // obf
                $v_qfwzp = $v_zaexf[7]; // obf
                if ('inline' === $v_bbuyf && array_key_exists($v_qfwzp, $v_rruew)) { // obf
                    continue; // obf
                } // obf
                $v_rruew[$v_qfwzp] = true; // obf

                $v_eadbo[] = sprintf('--%s%s', $v_dpasf, static::$v_svhje); // obf
                //Only include a filename property if we have one // obf
                if (!empty($v_rzcco)) { // obf
                    $v_eadbo[] = sprintf( // obf
                        'Content-Type: %s; name=%s%s', // obf
                        $v_pcazs, // obf
                        static::quotedString($v_jrevf->encodeHeader($v_jrevf->secureHeader($v_rzcco))), // obf
                        static::$v_svhje // obf
                    ); // obf
                } else { // obf
                    $v_eadbo[] = sprintf( // obf
                        'Content-Type: %s%s', // obf
                        $v_pcazs, // obf
                        static::$v_svhje // obf
                    ); // obf
                } // obf
                //RFC1341 part 5 says 7bit is assumed if not specified // obf
                if (static::ENCODING_7BIT !== $v_xczhz) { // obf
                    $v_eadbo[] = sprintf('Content-Transfer-Encoding: %s%s', $v_xczhz, static::$v_svhje); // obf
                } // obf

                //Only set Content-IDs on inline attachments // obf
                if ((string) $v_qfwzp !== '' && $v_bbuyf === 'inline') { // obf
                    $v_eadbo[] = 'Content-ID: <' . $v_jrevf->encodeHeader($v_jrevf->secureHeader($v_qfwzp)) . '>' . static::$v_svhje; // obf
                } // obf

                //Allow for bypassing the Content-Disposition header // obf
                if (!empty($v_bbuyf)) { // obf
                    $v_zciox = $v_jrevf->encodeHeader($v_jrevf->secureHeader($v_rzcco)); // obf
                    if (!empty($v_zciox)) { // obf
                        $v_eadbo[] = sprintf( // obf
                            'Content-Disposition: %s; filename=%s%s', // obf
                            $v_bbuyf, // obf
                            static::quotedString($v_zciox), // obf
                            static::$v_svhje . static::$v_svhje // obf
                        ); // obf
                    } else { // obf
                        $v_eadbo[] = sprintf( // obf
                            'Content-Disposition: %s%s', // obf
                            $v_bbuyf, // obf
                            static::$v_svhje . static::$v_svhje // obf
                        ); // obf
                    } // obf
                } else { // obf
                    $v_eadbo[] = static::$v_svhje; // obf
                } // obf

                //Encode as string attachment // obf
                if ($v_esxbd) { // obf
                    $v_eadbo[] = $v_jrevf->encodeString($v_mwuob, $v_xczhz); // obf
                } else { // obf
                    $v_eadbo[] = $v_jrevf->encodeFile($v_whtmi, $v_xczhz); // obf
                } // obf
                if ($v_jrevf->isError()) { // obf
                    return ''; // obf
                } // obf
                $v_eadbo[] = static::$v_svhje; // obf
            } // obf
        } // obf

        $v_eadbo[] = sprintf('--%s--%s', $v_dpasf, static::$v_svhje); // obf

        return implode('', $v_eadbo); // obf
    } // obf

    /** // obf
     * Encode a file attachment in requested format. // obf
     * Returns an empty string on failure. // obf
     * // obf
     * @param string $v_whtmi     The full path to the file // obf
     * @param string $v_xczhz The encoding to use; one of 'base64', '7bit', '8bit', 'binary', 'quoted-printable' // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function encodeFile($v_whtmi, $v_xczhz = self::ENCODING_BASE64) // obf
    { // obf
        try { // obf
            if (!static::fileIsAccessible($v_whtmi)) { // obf
                throw new Exception($v_jrevf->lang('file_open') . $v_whtmi, self::STOP_CONTINUE); // obf
            } // obf
            $v_excxf = file_get_contents($v_whtmi); // obf
            if (false === $v_excxf) { // obf
                throw new Exception($v_jrevf->lang('file_open') . $v_whtmi, self::STOP_CONTINUE); // obf
            } // obf
            $v_excxf = $v_jrevf->encodeString($v_excxf, $v_xczhz); // obf

            return $v_excxf; // obf
        } catch (Exception $v_sdxgp) { // obf
            $v_jrevf->setError($v_sdxgp->getMessage()); // obf
            $v_jrevf->edebug($v_sdxgp->getMessage()); // obf
            if ($v_jrevf->exceptions) { // obf
                throw $v_sdxgp; // obf
            } // obf

            return ''; // obf
        } // obf
    } // obf

    /** // obf
     * Encode a string in requested format. // obf
     * Returns an empty string on failure. // obf
     * // obf
     * @param string $v_pdnxe      The text to encode // obf
     * @param string $v_xczhz The encoding to use; one of 'base64', '7bit', '8bit', 'binary', 'quoted-printable' // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return string // obf
     */ // obf
    public function encodeString($v_pdnxe, $v_xczhz = self::ENCODING_BASE64) // obf
    { // obf
        $v_dlfkm = ''; // obf
        switch (strtolower($v_xczhz)) { // obf
            case static::ENCODING_BASE64: // obf
                $v_dlfkm = chunk_split( // obf
                    base64_encode($v_pdnxe), // obf
                    static::STD_LINE_LENGTH, // obf
                    static::$v_svhje // obf
                ); // obf
                break; // obf
            case static::ENCODING_7BIT: // obf
            case static::ENCODING_8BIT: // obf
                $v_dlfkm = static::normalizeBreaks($v_pdnxe); // obf
                //Make sure it ends with a line break // obf
                if (substr($v_dlfkm, -(strlen(static::$v_svhje))) !== static::$v_svhje) { // obf
                    $v_dlfkm .= static::$v_svhje; // obf
                } // obf
                break; // obf
            case static::ENCODING_BINARY: // obf
                $v_dlfkm = $v_pdnxe; // obf
                break; // obf
            case static::ENCODING_QUOTED_PRINTABLE: // obf
                $v_dlfkm = $v_jrevf->encodeQP($v_pdnxe); // obf
                break; // obf
            default: // obf
                $v_jrevf->setError($v_jrevf->lang('encoding') . $v_xczhz); // obf
                if ($v_jrevf->exceptions) { // obf
                    throw new Exception($v_jrevf->lang('encoding') . $v_xczhz); // obf
                } // obf
                break; // obf
        } // obf

        return $v_dlfkm; // obf
    } // obf

    /** // obf
     * Encode a header value (not including its label) optimally. // obf
     * Picks shortest of Q, B, or none. Result includes folding if needed. // obf
     * See RFC822 definitions for phrase, comment and text positions. // obf
     * // obf
     * @param string $v_pdnxe      The header value to encode // obf
     * @param string $v_rujou What context the string will be used in // obf
     * // obf
     * @return string // obf
     */ // obf
    public function encodeHeader($v_pdnxe, $v_rujou = 'text') // obf
    { // obf
        $v_zxqcl = 0; // obf
        switch (strtolower($v_rujou)) { // obf
            case 'phrase': // obf
                if (!preg_match('/[\200-\377]/', $v_pdnxe)) { // obf
                    //Can't use addslashes as we don't know the value of magic_quotes_sybase // obf
                    $v_dlfkm = addcslashes($v_pdnxe, "\0..\37\177\\\""); // obf
                    if (($v_pdnxe === $v_dlfkm) && !preg_match('/[^A-Za-z0-9!#$%&\'*+\/=?^_`{|}~ -]/', $v_pdnxe)) { // obf
                        return $v_dlfkm; // obf
                    } // obf

                    return "\"$v_dlfkm\""; // obf
                } // obf
                $v_zxqcl = preg_match_all('/[^\040\041\043-\133\135-\176]/', $v_pdnxe, $v_xaohy); // obf
                break; // obf
            /* @noinspection PhpMissingBreakStatementInspection */ // obf
            case 'comment': // obf
                $v_zxqcl = preg_match_all('/[()"]/', $v_pdnxe, $v_xaohy); // obf
            //fallthrough // obf
            case 'text': // obf
            default: // obf
                $v_zxqcl += preg_match_all('/[\000-\010\013\014\016-\037\177-\377]/', $v_pdnxe, $v_xaohy); // obf
                break; // obf
        } // obf

        if ($v_jrevf->has8bitChars($v_pdnxe)) { // obf
            $v_ffjod = $v_jrevf->CharSet; // obf
        } else { // obf
            $v_ffjod = static::CHARSET_ASCII; // obf
        } // obf

        //Q/B encoding adds 8 chars and the charset ("` =?<charset>?[QB]?<content>?=`"). // obf
        $v_qnonn = 8 + strlen($v_ffjod); // obf

        if ('mail' === $v_jrevf->Mailer) { // obf
            $v_nbske = static::MAIL_MAX_LINE_LENGTH - $v_qnonn; // obf
        } else { // obf
            $v_nbske = static::MAX_LINE_LENGTH - $v_qnonn; // obf
        } // obf

        //Select the encoding that produces the shortest output and/or prevents corruption. // obf
        if ($v_zxqcl > strlen($v_pdnxe) / 3) { // obf
            //More than 1/3 of the content needs encoding, use B-encode. // obf
            $v_xczhz = 'B'; // obf
        } elseif ($v_zxqcl > 0) { // obf
            //Less than 1/3 of the content needs encoding, use Q-encode. // obf
            $v_xczhz = 'Q'; // obf
        } elseif (strlen($v_pdnxe) > $v_nbske) { // obf
            //No encoding needed, but value exceeds max line length, use Q-encode to prevent corruption. // obf
            $v_xczhz = 'Q'; // obf
        } else { // obf
            //No reformatting needed // obf
            $v_xczhz = false; // obf
        } // obf

        switch ($v_xczhz) { // obf
            case 'B': // obf
                if ($v_jrevf->hasMultiBytes($v_pdnxe)) { // obf
                    //Use a custom function which correctly encodes and wraps long // obf
                    //multibyte strings without breaking lines within a character // obf
                    $v_dlfkm = $v_jrevf->base64EncodeWrapMB($v_pdnxe, "\n"); // obf
                } else { // obf
                    $v_dlfkm = base64_encode($v_pdnxe); // obf
                    $v_nbske -= $v_nbske % 4; // obf
                    $v_dlfkm = trim(chunk_split($v_dlfkm, $v_nbske, "\n")); // obf
                } // obf
                $v_dlfkm = __fn_37772('/^(.*)$/m', ' =?' . $v_ffjod . "?$v_xczhz?\\1?=", $v_dlfkm); // obf
                break; // obf
            case 'Q': // obf
                $v_dlfkm = $v_jrevf->encodeQ($v_pdnxe, $v_rujou); // obf
                $v_dlfkm = $v_jrevf->wrapText($v_dlfkm, $v_nbske, true); // obf
                $v_dlfkm = str_replace('=' . static::$v_svhje, "\n", trim($v_dlfkm)); // obf
                $v_dlfkm = __fn_37772('/^(.*)$/m', ' =?' . $v_ffjod . "?$v_xczhz?\\1?=", $v_dlfkm); // obf
                break; // obf
            default: // obf
                return $v_pdnxe; // obf
        } // obf

        return trim(static::normalizeBreaks($v_dlfkm)); // obf
    } // obf

    /** // obf
     * Check if a string contains multi-byte characters. // obf
     * // obf
     * @param string $v_pdnxe multi-byte text to wrap encode // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function hasMultiBytes($v_pdnxe) // obf
    { // obf
        if (function_exists('mb_strlen')) { // obf
            return strlen($v_pdnxe) > mb_strlen($v_pdnxe, $v_jrevf->CharSet); // obf
        } // obf

        //Assume no multibytes (we can't handle without mbstring functions anyway) // obf
        return false; // obf
    } // obf

    /** // obf
     * Does a string contain any 8-bit chars (in any charset)? // obf
     * // obf
     * @param string $v_sutxq // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function has8bitChars($v_sutxq) // obf
    { // obf
        return (bool) preg_match('/[\x80-\xFF]/', $v_sutxq); // obf
    } // obf

    /** // obf
     * Encode and wrap long multibyte strings for mail headers // obf
     * without breaking lines within a character. // obf
     * Adapted from a function by paravoid. // obf
     * // obf
     * @see https://www.php.net/manual/en/function.mb-encode-mimeheader.php#60283 // obf
     * // obf
     * @param string $v_pdnxe       multi-byte text to wrap encode // obf
     * @param string $v_alvhq string to use as linefeed/end-of-line // obf
     * // obf
     * @return string // obf
     */ // obf
    public function base64EncodeWrapMB($v_pdnxe, $v_alvhq = null) // obf
    { // obf
        $v_zlpwp = '=?' . $v_jrevf->CharSet . '?B?'; // obf
        $v_obzfa = '?='; // obf
        $v_dlfkm = ''; // obf
        if (null === $v_alvhq) { // obf
            $v_alvhq = static::$v_svhje; // obf
        } // obf

        $v_hteuz = mb_strlen($v_pdnxe, $v_jrevf->CharSet); // obf
        //Each line must have length <= 75, including $v_zlpwp and $v_obzfa // obf
        $v_gjlnq = 75 - strlen($v_zlpwp) - strlen($v_obzfa); // obf
        //Average multi-byte ratio // obf
        $v_sceqy = $v_hteuz / strlen($v_pdnxe); // obf
        //Base64 has a 4:3 ratio // obf
        $v_yblai = floor($v_gjlnq * $v_sceqy * .75); // obf

        $v_zlgro = 0; // obf
        for ($v_uguzv = 0; $v_uguzv < $v_hteuz; $v_uguzv += $v_zlgro) { // obf
            $v_quikg = 0; // obf
            do { // obf
                $v_zlgro = $v_yblai - $v_quikg; // obf
                $v_cldsb = mb_substr($v_pdnxe, $v_uguzv, $v_zlgro, $v_jrevf->CharSet); // obf
                $v_cldsb = base64_encode($v_cldsb); // obf
                ++$v_quikg; // obf
            } while (strlen($v_cldsb) > $v_gjlnq); // obf
            $v_dlfkm .= $v_cldsb . $v_alvhq; // obf
        } // obf

        //Chomp the last linefeed // obf
        return substr($v_dlfkm, 0, -strlen($v_alvhq)); // obf
    } // obf

    /** // obf
     * Encode a string in quoted-printable format. // obf
     * According to RFC2045 section 6.7. // obf
     * // obf
     * @param string $v_mwuob The text to encode // obf
     * // obf
     * @return string // obf
     */ // obf
    public function encodeQP($v_mwuob) // obf
    { // obf
        return static::normalizeBreaks(quoted_printable_encode($v_mwuob)); // obf
    } // obf

    /** // obf
     * Encode a string using Q encoding. // obf
     * // obf
     * @see https://www.rfc-editor.org/rfc/rfc2047#section-4.2 // obf
     * // obf
     * @param string $v_pdnxe      the text to encode // obf
     * @param string $v_rujou Where the text is going to be used, see the RFC for what that means // obf
     * // obf
     * @return string // obf
     */ // obf
    public function encodeQ($v_pdnxe, $v_rujou = 'text') // obf
    { // obf
        //There should not be any EOL in the string // obf
        $v_pzfmz = ''; // obf
        $v_dlfkm = str_replace(["\r", "\n"], '', $v_pdnxe); // obf
        switch (strtolower($v_rujou)) { // obf
            case 'phrase': // obf
                //RFC 2047 section 5.3 // obf
                $v_pzfmz = '^A-Za-z0-9!*+\/ -'; // obf
                break; // obf
            /* // obf
             * RFC 2047 section 5.2. // obf
             * Build $v_pzfmz without including delimiters and [] // obf
             */ // obf
            /* @noinspection PhpMissingBreakStatementInspection */ // obf
            case 'comment': // obf
                $v_pzfmz = '\(\)"'; // obf
            /* Intentional fall through */ // obf
            case 'text': // obf
            default: // obf
                //RFC 2047 section 5.1 // obf
                //Replace every high ascii, control, =, ? and _ characters // obf
                $v_pzfmz = '\000-\011\013\014\016-\037\075\077\137\177-\377' . $v_pzfmz; // obf
                break; // obf
        } // obf
        $v_xaohy = []; // obf
        if (preg_match_all("/[{$v_pzfmz}]/", $v_dlfkm, $v_xaohy)) { // obf
            //If the string contains an '=', make sure it's the first thing we replace // obf
            //so as to avoid double-encoding // obf
            $v_xqiew = array_search('=', $v_xaohy[0], true); // obf
            if (false !== $v_xqiew) { // obf
                unset($v_xaohy[0][$v_xqiew]); // obf
                array_unshift($v_xaohy[0], '='); // obf
            } // obf
            foreach (array_unique($v_xaohy[0]) as $v_bhchc) { // obf
                $v_dlfkm = str_replace($v_bhchc, '=' . sprintf('%02X', ord($v_bhchc)), $v_dlfkm); // obf
            } // obf
        } // obf
        //Replace spaces with _ (more readable than =20) // obf
        //RFC 2047 section 4.2(2) // obf
        return str_replace(' ', '_', $v_dlfkm); // obf
    } // obf

    /** // obf
     * Add a string or binary attachment (non-filesystem). // obf
     * This method can be used to attach ascii or binary data, // obf
     * such as a BLOB record from a database. // obf
     * // obf
     * @param string $v_mwuob      String attachment data // obf
     * @param string $v_upmpe    Name of the attachment // obf
     * @param string $v_xczhz    File encoding (see $v_egijf) // obf
     * @param string $v_pcazs        File extension (MIME) type // obf
     * @param string $v_bbuyf Disposition to use // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool True on successfully adding an attachment // obf
     */ // obf
    public function addStringAttachment( // obf
        $v_mwuob, // obf
        $v_upmpe, // obf
        $v_xczhz = self::ENCODING_BASE64, // obf
        $v_pcazs = '', // obf
        $v_bbuyf = 'attachment' // obf
    ) { // obf
        try { // obf
            //If a MIME type is not specified, try to work it out from the file name // obf
            if ('' === $v_pcazs) { // obf
                $v_pcazs = static::filenameToType($v_upmpe); // obf
            } // obf

            if (!$v_jrevf->validateEncoding($v_xczhz)) { // obf
                throw new Exception($v_jrevf->lang('encoding') . $v_xczhz); // obf
            } // obf

            //Append to $v_zaexf array // obf
            $v_jrevf->attachment[] = [ // obf
                0 => $v_mwuob, // obf
                1 => $v_upmpe, // obf
                2 => static::mb_pathinfo($v_upmpe, PATHINFO_BASENAME), // obf
                3 => $v_xczhz, // obf
                4 => $v_pcazs, // obf
                5 => true, //isStringAttachment // obf
                6 => $v_bbuyf, // obf
                7 => 0, // obf
            ]; // obf
        } catch (Exception $v_sdxgp) { // obf
            $v_jrevf->setError($v_sdxgp->getMessage()); // obf
            $v_jrevf->edebug($v_sdxgp->getMessage()); // obf
            if ($v_jrevf->exceptions) { // obf
                throw $v_sdxgp; // obf
            } // obf

            return false; // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Add an embedded (inline) attachment from a file. // obf
     * This can include images, sounds, and just about any other document type. // obf
     * These differ from 'regular' attachments in that they are intended to be // obf
     * displayed inline with the message, not just attached for download. // obf
     * This is used in HTML messages that embed the images // obf
     * the HTML refers to using the `$v_qfwzp` value in `img` tags, for example `<img src="cid:mylogo">`. // obf
     * Never use a user-supplied path to a file! // obf
     * // obf
     * @param string $v_whtmi        Path to the attachment // obf
     * @param string $v_qfwzp         Content ID of the attachment; Use this to reference // obf
     *                            the content when using an embedded image in HTML // obf
     * @param string $v_rzcco        Overrides the attachment filename // obf
     * @param string $v_xczhz    File encoding (see $v_egijf) defaults to `base64` // obf
     * @param string $v_pcazs        File MIME type (by default mapped from the `$v_whtmi` filename's extension) // obf
     * @param string $v_bbuyf Disposition to use: `inline` (default) or `attachment` // obf
     *                            (unlikely you want this – {@see `addAttachment()`} instead) // obf
     * // obf
     * @return bool True on successfully adding an attachment // obf
     * @throws Exception // obf
     * // obf
     */ // obf
    public function addEmbeddedImage( // obf
        $v_whtmi, // obf
        $v_qfwzp, // obf
        $v_rzcco = '', // obf
        $v_xczhz = self::ENCODING_BASE64, // obf
        $v_pcazs = '', // obf
        $v_bbuyf = 'inline' // obf
    ) { // obf
        try { // obf
            if (!static::fileIsAccessible($v_whtmi)) { // obf
                throw new Exception($v_jrevf->lang('file_access') . $v_whtmi, self::STOP_CONTINUE); // obf
            } // obf

            //If a MIME type is not specified, try to work it out from the file name // obf
            if ('' === $v_pcazs) { // obf
                $v_pcazs = static::filenameToType($v_whtmi); // obf
            } // obf

            if (!$v_jrevf->validateEncoding($v_xczhz)) { // obf
                throw new Exception($v_jrevf->lang('encoding') . $v_xczhz); // obf
            } // obf

            $v_upmpe = (string) static::mb_pathinfo($v_whtmi, PATHINFO_BASENAME); // obf
            if ('' === $v_rzcco) { // obf
                $v_rzcco = $v_upmpe; // obf
            } // obf

            //Append to $v_zaexf array // obf
            $v_jrevf->attachment[] = [ // obf
                0 => $v_whtmi, // obf
                1 => $v_upmpe, // obf
                2 => $v_rzcco, // obf
                3 => $v_xczhz, // obf
                4 => $v_pcazs, // obf
                5 => false, //isStringAttachment // obf
                6 => $v_bbuyf, // obf
                7 => $v_qfwzp, // obf
            ]; // obf
        } catch (Exception $v_sdxgp) { // obf
            $v_jrevf->setError($v_sdxgp->getMessage()); // obf
            $v_jrevf->edebug($v_sdxgp->getMessage()); // obf
            if ($v_jrevf->exceptions) { // obf
                throw $v_sdxgp; // obf
            } // obf

            return false; // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Add an embedded stringified attachment. // obf
     * This can include images, sounds, and just about any other document type. // obf
     * If your filename doesn't contain an extension, be sure to set the $v_pcazs to an appropriate MIME type. // obf
     * // obf
     * @param string $v_mwuob      The attachment binary data // obf
     * @param string $v_qfwzp         Content ID of the attachment; Use this to reference // obf
     *                            the content when using an embedded image in HTML // obf
     * @param string $v_rzcco        A filename for the attachment. If this contains an extension, // obf
     *                            PHPMailer will attempt to set a MIME type for the attachment. // obf
     *                            For example 'file.jpg' would get an 'image/jpeg' MIME type. // obf
     * @param string $v_xczhz    File encoding (see $v_egijf), defaults to 'base64' // obf
     * @param string $v_pcazs        MIME type - will be used in preference to any automatically derived type // obf
     * @param string $v_bbuyf Disposition to use // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return bool True on successfully adding an attachment // obf
     */ // obf
    public function addStringEmbeddedImage( // obf
        $v_mwuob, // obf
        $v_qfwzp, // obf
        $v_rzcco = '', // obf
        $v_xczhz = self::ENCODING_BASE64, // obf
        $v_pcazs = '', // obf
        $v_bbuyf = 'inline' // obf
    ) { // obf
        try { // obf
            //If a MIME type is not specified, try to work it out from the name // obf
            if ('' === $v_pcazs && !empty($v_rzcco)) { // obf
                $v_pcazs = static::filenameToType($v_rzcco); // obf
            } // obf

            if (!$v_jrevf->validateEncoding($v_xczhz)) { // obf
                throw new Exception($v_jrevf->lang('encoding') . $v_xczhz); // obf
            } // obf

            //Append to $v_zaexf array // obf
            $v_jrevf->attachment[] = [ // obf
                0 => $v_mwuob, // obf
                1 => $v_rzcco, // obf
                2 => $v_rzcco, // obf
                3 => $v_xczhz, // obf
                4 => $v_pcazs, // obf
                5 => true, //isStringAttachment // obf
                6 => $v_bbuyf, // obf
                7 => $v_qfwzp, // obf
            ]; // obf
        } catch (Exception $v_sdxgp) { // obf
            $v_jrevf->setError($v_sdxgp->getMessage()); // obf
            $v_jrevf->edebug($v_sdxgp->getMessage()); // obf
            if ($v_jrevf->exceptions) { // obf
                throw $v_sdxgp; // obf
            } // obf

            return false; // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Validate encodings. // obf
     * // obf
     * @param string $v_xczhz // obf
     * // obf
     * @return bool // obf
     */ // obf
    protected function validateEncoding($v_xczhz) // obf
    { // obf
        return in_array( // obf
            $v_xczhz, // obf
            [ // obf
                self::ENCODING_7BIT, // obf
                self::ENCODING_QUOTED_PRINTABLE, // obf
                self::ENCODING_BASE64, // obf
                self::ENCODING_8BIT, // obf
                self::ENCODING_BINARY, // obf
            ], // obf
            true // obf
        ); // obf
    } // obf

    /** // obf
     * Check if an embedded attachment is present with this cid. // obf
     * // obf
     * @param string $v_qfwzp // obf
     * // obf
     * @return bool // obf
     */ // obf
    protected function cidExists($v_qfwzp) // obf
    { // obf
        foreach ($v_jrevf->attachment as $v_zaexf) { // obf
            if ('inline' === $v_zaexf[6] && $v_qfwzp === $v_zaexf[7]) { // obf
                return true; // obf
            } // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Check if an inline attachment is present. // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function inlineImageExists() // obf
    { // obf
        foreach ($v_jrevf->attachment as $v_zaexf) { // obf
            if ('inline' === $v_zaexf[6]) { // obf
                return true; // obf
            } // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Check if an attachment (non-inline) is present. // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function attachmentExists() // obf
    { // obf
        foreach ($v_jrevf->attachment as $v_zaexf) { // obf
            if ('attachment' === $v_zaexf[6]) { // obf
                return true; // obf
            } // obf
        } // obf

        return false; // obf
    } // obf

    /** // obf
     * Check if this message has an alternative body set. // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function alternativeExists() // obf
    { // obf
        return !empty($v_jrevf->AltBody); // obf
    } // obf

    /** // obf
     * Clear queued addresses of given kind. // obf
     * // obf
     * @param string $v_fobhy 'to', 'cc', or 'bcc' // obf
     */ // obf
    public function clearQueuedAddresses($v_fobhy) // obf
    { // obf
        $v_jrevf->RecipientsQueue = array_filter( // obf
            $v_jrevf->RecipientsQueue, // obf
            static function ($v_yjpsl) use ($v_fobhy) { // obf
                return $v_yjpsl[0] !== $v_fobhy; // obf
            } // obf
        ); // obf
    } // obf

    /** // obf
     * Clear all To recipients. // obf
     */ // obf
    public function clearAddresses() // obf
    { // obf
        foreach ($v_jrevf->to as $v_jidup) { // obf
            unset($v_jrevf->all_recipients[strtolower($v_jidup[0])]); // obf
        } // obf
        $v_jrevf->to = []; // obf
        $v_jrevf->clearQueuedAddresses('to'); // obf
    } // obf

    /** // obf
     * Clear all CC recipients. // obf
     */ // obf
    public function clearCCs() // obf
    { // obf
        foreach ($v_jrevf->cc as $v_muspo) { // obf
            unset($v_jrevf->all_recipients[strtolower($v_muspo[0])]); // obf
        } // obf
        $v_jrevf->cc = []; // obf
        $v_jrevf->clearQueuedAddresses('cc'); // obf
    } // obf

    /** // obf
     * Clear all BCC recipients. // obf
     */ // obf
    public function clearBCCs() // obf
    { // obf
        foreach ($v_jrevf->bcc as $v_xcoas) { // obf
            unset($v_jrevf->all_recipients[strtolower($v_xcoas[0])]); // obf
        } // obf
        $v_jrevf->bcc = []; // obf
        $v_jrevf->clearQueuedAddresses('bcc'); // obf
    } // obf

    /** // obf
     * Clear all ReplyTo recipients. // obf
     */ // obf
    public function clearReplyTos() // obf
    { // obf
        $v_jrevf->ReplyTo = []; // obf
        $v_jrevf->ReplyToQueue = []; // obf
    } // obf

    /** // obf
     * Clear all recipient types. // obf
     */ // obf
    public function clearAllRecipients() // obf
    { // obf
        $v_jrevf->to = []; // obf
        $v_jrevf->cc = []; // obf
        $v_jrevf->bcc = []; // obf
        $v_jrevf->all_recipients = []; // obf
        $v_jrevf->RecipientsQueue = []; // obf
    } // obf

    /** // obf
     * Clear all filesystem, string, and binary attachments. // obf
     */ // obf
    public function clearAttachments() // obf
    { // obf
        $v_jrevf->attachment = []; // obf
    } // obf

    /** // obf
     * Clear all custom headers. // obf
     */ // obf
    public function clearCustomHeaders() // obf
    { // obf
        $v_jrevf->CustomHeader = []; // obf
    } // obf

    /** // obf
     * Clear a specific custom header by name or name and value. // obf
     * $v_rzcco value can be overloaded to contain // obf
     * both header name and value (name:value). // obf
     * // obf
     * @param string      $v_rzcco  Custom header name // obf
     * @param string|null $v_eixqp Header value // obf
     * // obf
     * @return bool True if a header was replaced successfully // obf
     */ // obf
    public function clearCustomHeader($v_rzcco, $v_eixqp = null) // obf
    { // obf
        if (null === $v_eixqp && strpos($v_rzcco, ':') !== false) { // obf
            //Value passed in as name:value // obf
            list($v_rzcco, $v_eixqp) = explode(':', $v_rzcco, 2); // obf
        } // obf
        $v_rzcco = trim($v_rzcco); // obf
        $v_eixqp = (null === $v_eixqp) ? null : trim($v_eixqp); // obf

        foreach ($v_jrevf->CustomHeader as $v_bpaqk => $v_hhmvv) { // obf
            if ($v_hhmvv[0] == $v_rzcco) { // obf
                // We remove the header if the value is not provided or it matches. // obf
                if (null === $v_eixqp ||  $v_hhmvv[1] == $v_eixqp) { // obf
                    unset($v_jrevf->CustomHeader[$v_bpaqk]); // obf
                } // obf
            } // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Replace a custom header. // obf
     * $v_rzcco value can be overloaded to contain // obf
     * both header name and value (name:value). // obf
     * // obf
     * @param string      $v_rzcco  Custom header name // obf
     * @param string|null $v_eixqp Header value // obf
     * // obf
     * @return bool True if a header was replaced successfully // obf
     * @throws Exception // obf
     */ // obf
    public function replaceCustomHeader($v_rzcco, $v_eixqp = null) // obf
    { // obf
        if (null === $v_eixqp && strpos($v_rzcco, ':') !== false) { // obf
            //Value passed in as name:value // obf
            list($v_rzcco, $v_eixqp) = explode(':', $v_rzcco, 2); // obf
        } // obf
        $v_rzcco = trim($v_rzcco); // obf
        $v_eixqp = (null === $v_eixqp) ? '' : trim($v_eixqp); // obf

        $v_ecpdo = false; // obf
        foreach ($v_jrevf->CustomHeader as $v_bpaqk => $v_hhmvv) { // obf
            if ($v_hhmvv[0] == $v_rzcco) { // obf
                if ($v_ecpdo) { // obf
                    unset($v_jrevf->CustomHeader[$v_bpaqk]); // obf
                    continue; // obf
                } // obf
                if (strpbrk($v_rzcco . $v_eixqp, "\r\n") !== false) { // obf
                    if ($v_jrevf->exceptions) { // obf
                        throw new Exception($v_jrevf->lang('invalid_header')); // obf
                    } // obf

                    return false; // obf
                } // obf
                $v_jrevf->CustomHeader[$v_bpaqk] = [$v_rzcco, $v_eixqp]; // obf
                $v_ecpdo = true; // obf
            } // obf
        } // obf

        return true; // obf
    } // obf

    /** // obf
     * Add an error message to the error container. // obf
     * // obf
     * @param string $v_onklq // obf
     */ // obf
    protected function setError($v_onklq) // obf
    { // obf
        ++$v_jrevf->error_count; // obf
        if ('smtp' === $v_jrevf->Mailer && null !== $v_jrevf->smtp) { // obf
            $v_rpnqu = $v_jrevf->smtp->getError(); // obf
            if (!empty($v_rpnqu['error'])) { // obf
                $v_onklq .= $v_jrevf->lang('smtp_error') . $v_rpnqu['error']; // obf
                if (!empty($v_rpnqu['detail'])) { // obf
                    $v_onklq .= ' ' . $v_jrevf->lang('smtp_detail') . $v_rpnqu['detail']; // obf
                } // obf
                if (!empty($v_rpnqu['smtp_code'])) { // obf
                    $v_onklq .= ' ' . $v_jrevf->lang('smtp_code') . $v_rpnqu['smtp_code']; // obf
                } // obf
                if (!empty($v_rpnqu['smtp_code_ex'])) { // obf
                    $v_onklq .= ' ' . $v_jrevf->lang('smtp_code_ex') . $v_rpnqu['smtp_code_ex']; // obf
                } // obf
            } // obf
        } // obf
        $v_jrevf->ErrorInfo = $v_onklq; // obf
    } // obf

    /** // obf
     * Return an RFC 822 formatted date. // obf
     * // obf
     * @return string // obf
     */ // obf
    public static function rfcDate() // obf
    { // obf
        //Set the time zone to whatever the default is to avoid 500 errors // obf
        //Will default to UTC if it's not set properly in php.ini // obf
        date_default_timezone_set(@date_default_timezone_get()); // obf

        return date('D, j M Y H:i:s O'); // obf
    } // obf

    /** // obf
     * Get the server hostname. // obf
     * Returns 'localhost.localdomain' if unknown. // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function serverHostname() // obf
    { // obf
        $v_yfstf = ''; // obf
        if (!empty($v_jrevf->Hostname)) { // obf
            $v_yfstf = $v_jrevf->Hostname; // obf
        } elseif (isset($v_lnjnt) && array_key_exists('SERVER_NAME', $v_lnjnt)) { // obf
            $v_yfstf = $v_lnjnt['SERVER_NAME']; // obf
        } elseif (function_exists('gethostname') && gethostname() !== false) { // obf
            $v_yfstf = gethostname(); // obf
        } elseif (php_uname('n') !== '') { // obf
            $v_yfstf = php_uname('n'); // obf
        } // obf
        if (!static::isValidHost($v_yfstf)) { // obf
            return 'localhost.localdomain'; // obf
        } // obf

        return $v_yfstf; // obf
    } // obf

    /** // obf
     * Validate whether a string contains a valid value to use as a hostname or IP address. // obf
     * IPv6 addresses must include [], e.g. `[::1]`, not just `::1`. // obf
     * // obf
     * @param string $v_euktu The host name or IP address to check // obf
     * // obf
     * @return bool // obf
     */ // obf
    public static function isValidHost($v_euktu) // obf
    { // obf
        //Simple syntax limits // obf
        if ( // obf
            empty($v_euktu) // obf
            || !is_string($v_euktu) // obf
            || strlen($v_euktu) > 256 // obf
            || !preg_match('/^([a-z\d.-]*|\[[a-f\d:]+\])$/i', $v_euktu) // obf
        ) { // obf
            return false; // obf
        } // obf
        //Looks like a bracketed IPv6 address // obf
        if (strlen($v_euktu) > 2 && substr($v_euktu, 0, 1) === '[' && substr($v_euktu, -1, 1) === ']') { // obf
            return filter_var(substr($v_euktu, 1, -1), FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false; // obf
        } // obf
        //If removing all the dots results in a numeric string, it must be an IPv4 address. // obf
        //Need to check this first because otherwise things like `999.0.0.0` are considered valid host names // obf
        if (is_numeric(str_replace('.', '', $v_euktu))) { // obf
            //Is it a valid IPv4 address? // obf
            return filter_var($v_euktu, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false; // obf
        } // obf
        //Is it a syntactically valid hostname (when embedded in a URL)? // obf
        return filter_var('https://' . $v_euktu, FILTER_VALIDATE_URL) !== false; // obf
    } // obf

    /** // obf
     * Get an error message in the current language. // obf
     * // obf
     * @param string $v_mpxvu // obf
     * // obf
     * @return string // obf
     */ // obf
    protected function lang($v_mpxvu) // obf
    { // obf
        if (count($v_jrevf->language) < 1) { // obf
            $v_jrevf->setLanguage(); //Set the default language // obf
        } // obf

        if (array_key_exists($v_mpxvu, $v_jrevf->language)) { // obf
            if ('smtp_connect_failed' === $v_mpxvu) { // obf
                //Include a link to troubleshooting docs on SMTP connection failure. // obf
                //This is by far the biggest cause of support questions // obf
                //but it's usually not PHPMailer's fault. // obf
                return $v_jrevf->language[$v_mpxvu] . ' https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting'; // obf
            } // obf

            return $v_jrevf->language[$v_mpxvu]; // obf
        } // obf

        //Return the key as a fallback // obf
        return $v_mpxvu; // obf
    } // obf

    /** // obf
     * Build an error message starting with a generic one and adding details if possible. // obf
     * // obf
     * @param string $v_lknyi // obf
     * @return string // obf
     */ // obf
    private function getSmtpErrorMessage($v_lknyi) // obf
    { // obf
        $v_vvplg = $v_jrevf->lang($v_lknyi); // obf
        $v_jhwhk = $v_jrevf->smtp->getError(); // obf
        if (!empty($v_jhwhk['error'])) { // obf
            $v_vvplg .= ' ' . $v_jhwhk['error']; // obf
            if (!empty($v_jhwhk['detail'])) { // obf
                $v_vvplg .= ' ' . $v_jhwhk['detail']; // obf
            } // obf
        } // obf

        return $v_vvplg; // obf
    } // obf

    /** // obf
     * Check if an error occurred. // obf
     * // obf
     * @return bool True if an error did occur // obf
     */ // obf
    public function isError() // obf
    { // obf
        return $v_jrevf->error_count > 0; // obf
    } // obf

    /** // obf
     * Add a custom header. // obf
     * $v_rzcco value can be overloaded to contain // obf
     * both header name and value (name:value). // obf
     * // obf
     * @param string      $v_rzcco  Custom header name // obf
     * @param string|null $v_eixqp Header value // obf
     * // obf
     * @return bool True if a header was set successfully // obf
     * @throws Exception // obf
     */ // obf
    public function addCustomHeader($v_rzcco, $v_eixqp = null) // obf
    { // obf
        if (null === $v_eixqp && strpos($v_rzcco, ':') !== false) { // obf
            //Value passed in as name:value // obf
            list($v_rzcco, $v_eixqp) = explode(':', $v_rzcco, 2); // obf
        } // obf
        $v_rzcco = trim($v_rzcco); // obf
        $v_eixqp = (null === $v_eixqp) ? '' : trim($v_eixqp); // obf
        //Ensure name is not empty, and that neither name nor value contain line breaks // obf
        if (empty($v_rzcco) || strpbrk($v_rzcco . $v_eixqp, "\r\n") !== false) { // obf
            if ($v_jrevf->exceptions) { // obf
                throw new Exception($v_jrevf->lang('invalid_header')); // obf
            } // obf

            return false; // obf
        } // obf
        $v_jrevf->CustomHeader[] = [$v_rzcco, $v_eixqp]; // obf

        return true; // obf
    } // obf

    /** // obf
     * Returns all custom headers. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getCustomHeaders() // obf
    { // obf
        return $v_jrevf->CustomHeader; // obf
    } // obf

    /** // obf
     * Create a message body from an HTML string. // obf
     * Automatically inlines images and creates a plain-text version by converting the HTML, // obf
     * overwriting any existing values in Body and AltBody. // obf
     * Do not source $v_vvplg content from user input! // obf
     * $v_ulwga is prepended when handling relative URLs, e.g. <img src="/images/a.png"> and must not be empty // obf
     * will look for an image file in $v_ulwga/images/a.png and convert it to inline. // obf
     * If you don't provide a $v_ulwga, relative paths will be left untouched (and thus probably break in email) // obf
     * Converts data-uri images into embedded attachments. // obf
     * If you don't want to apply these transformations to your HTML, just set Body and AltBody directly. // obf
     * // obf
     * @param string        $v_vvplg  HTML message string // obf
     * @param string        $v_ulwga  Absolute path to a base directory to prepend to relative paths to images // obf
     * @param bool|callable $v_vxbcy Whether to use the internal HTML to text converter // obf
     *                                or your own custom converter // obf
     * @return string The transformed message body // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @see PHPMailer::html2text() // obf
     */ // obf
    public function msgHTML($v_vvplg, $v_ulwga = '', $v_vxbcy = false) // obf
    { // obf
        preg_match_all('/(?<!-)(src|background)=["\'](.*)["\']/Ui', $v_vvplg, $v_cerdc); // obf
        if (array_key_exists(2, $v_cerdc)) { // obf
            if (strlen($v_ulwga) > 1 && '/' !== substr($v_ulwga, -1)) { // obf
                //Ensure $v_ulwga has a trailing / // obf
                $v_ulwga .= '/'; // obf
            } // obf
            foreach ($v_cerdc[2] as $v_ntmji => $v_bmonm) { // obf
                //Convert data URIs into embedded images // obf
                //e.g. "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" // obf
                $v_eerym = []; // obf
                if (preg_match('#^data:(image/(?:jpe?g|gif|png));?(base64)?,(.+)#', $v_bmonm, $v_eerym)) { // obf
                    if (count($v_eerym) === 4 && static::ENCODING_BASE64 === $v_eerym[2]) { // obf
                        $v_yhszc = base64_decode($v_eerym[3]); // obf
                    } elseif ('' === $v_eerym[2]) { // obf
                        $v_yhszc = rawurldecode($v_eerym[3]); // obf
                    } else { // obf
                        //Not recognised so leave it alone // obf
                        continue; // obf
                    } // obf
                    //Hash the decoded data, not the URL, so that the same data-URI image used in multiple places // obf
                    //will only be embedded once, even if it used a different encoding // obf
                    $v_qfwzp = substr(hash('sha256', $v_yhszc), 0, 32) . '@phpmailer.0'; //RFC2392 S 2 // obf

                    if (!$v_jrevf->cidExists($v_qfwzp)) { // obf
                        $v_jrevf->addStringEmbeddedImage( // obf
                            $v_yhszc, // obf
                            $v_qfwzp, // obf
                            'embed' . $v_ntmji, // obf
                            static::ENCODING_BASE64, // obf
                            $v_eerym[1] // obf
                        ); // obf
                    } // obf
                    $v_vvplg = str_replace( // obf
                        $v_cerdc[0][$v_ntmji], // obf
                        $v_cerdc[1][$v_ntmji] . '="cid:' . $v_qfwzp . '"', // obf
                        $v_vvplg // obf
                    ); // obf
                    continue; // obf
                } // obf
                if ( // obf
                    //Only process relative URLs if a basedir is provided (i.e. no absolute local paths) // obf
                    !empty($v_ulwga) // obf
                    //Ignore URLs containing parent dir traversal (..) // obf
                    && (strpos($v_bmonm, '..') === false) // obf
                    //Do not change urls that are already inline images // obf
                    && 0 !== strpos($v_bmonm, 'cid:') // obf
                    //Do not change absolute URLs, including anonymous protocol // obf
                    && !preg_match('#^[a-z][a-z0-9+.-]*:?//#i', $v_bmonm) // obf
                ) { // obf
                    $v_upmpe = static::mb_pathinfo($v_bmonm, PATHINFO_BASENAME); // obf
                    $v_kkwpb = dirname($v_bmonm); // obf
                    if ('.' === $v_kkwpb) { // obf
                        $v_kkwpb = ''; // obf
                    } // obf
                    //RFC2392 S 2 // obf
                    $v_qfwzp = substr(hash('sha256', $v_bmonm), 0, 32) . '@phpmailer.0'; // obf
                    if (strlen($v_ulwga) > 1 && '/' !== substr($v_ulwga, -1)) { // obf
                        $v_ulwga .= '/'; // obf
                    } // obf
                    if (strlen($v_kkwpb) > 1 && '/' !== substr($v_kkwpb, -1)) { // obf
                        $v_kkwpb .= '/'; // obf
                    } // obf
                    if ( // obf
                        $v_jrevf->addEmbeddedImage( // obf
                            $v_ulwga . $v_kkwpb . $v_upmpe, // obf
                            $v_qfwzp, // obf
                            $v_upmpe, // obf
                            static::ENCODING_BASE64, // obf
                            static::_mime_types((string) static::mb_pathinfo($v_upmpe, PATHINFO_EXTENSION)) // obf
                        ) // obf
                    ) { // obf
                        $v_vvplg = __fn_37772( // obf
                            '/' . $v_cerdc[1][$v_ntmji] . '=["\']' . preg_quote($v_bmonm, '/') . '["\']/Ui', // obf
                            $v_cerdc[1][$v_ntmji] . '="cid:' . $v_qfwzp . '"', // obf
                            $v_vvplg // obf
                        ); // obf
                    } // obf
                } // obf
            } // obf
        } // obf
        $v_jrevf->isHTML(); // obf
        //Convert all message body line breaks to LE, makes quoted-printable encoding work much better // obf
        $v_jrevf->Body = static::normalizeBreaks($v_vvplg); // obf
        $v_jrevf->AltBody = static::normalizeBreaks($v_jrevf->html2text($v_vvplg, $v_vxbcy)); // obf
        if (!$v_jrevf->alternativeExists()) { // obf
            $v_jrevf->AltBody = 'This is an HTML-only message. To view it, activate HTML in your email application.' // obf
                . static::$v_svhje; // obf
        } // obf

        return $v_jrevf->Body; // obf
    } // obf

    /** // obf
     * Convert an HTML string into plain text. // obf
     * This is used by msgHTML(). // obf
     * Note - older versions of this function used a bundled advanced converter // obf
     * which was removed for license reasons in #232. // obf
     * Example usage: // obf
     * // obf
     * ```php // obf
     * //Use default conversion // obf
     * $v_fwpnd = $v_paeyz->html2text($v_lnboe); // obf
     * //Use your own custom converter // obf
     * $v_fwpnd = $v_paeyz->html2text($v_lnboe, function($v_lnboe) { // obf
     *     $v_kryey = new MyHtml2text($v_lnboe); // obf
     *     return $v_kryey->get_text(); // obf
     * }); // obf
     * ``` // obf
     * // obf
     * @param string        $v_lnboe     The HTML text to convert // obf
     * @param bool|callable $v_vxbcy Any boolean value to use the internal converter, // obf
     *                                or provide your own callable for custom conversion. // obf
     *                                *Never* pass user-supplied data into this parameter // obf
     * // obf
     * @return string // obf
     */ // obf
    public function html2text($v_lnboe, $v_vxbcy = false) // obf
    { // obf
        if (is_callable($v_vxbcy)) { // obf
            return call_user_func($v_vxbcy, $v_lnboe); // obf
        } // obf

        return html_entity_decode( // obf
            trim(strip_tags(__fn_37772('/<(head|title|style|script)[^>]*>.*?<\/\\1>/si', '', $v_lnboe))), // obf
            ENT_QUOTES, // obf
            $v_jrevf->CharSet // obf
        ); // obf
    } // obf

    /** // obf
     * Get the MIME type for a file extension. // obf
     * // obf
     * @param string $v_ygeap File extension // obf
     * // obf
     * @return string MIME type of file // obf
     */ // obf
    public static function _mime_types($v_ygeap = '') // obf
    { // obf
        $v_ijzpp = [ // obf
            'xl' => 'application/excel', // obf
            'js' => 'application/javascript', // obf
            'hqx' => 'application/mac-binhex40', // obf
            'cpt' => 'application/mac-compactpro', // obf
            'bin' => 'application/macbinary', // obf
            'doc' => 'application/msword', // obf
            'word' => 'application/msword', // obf
            'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // obf
            'xltx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template', // obf
            'potx' => 'application/vnd.openxmlformats-officedocument.presentationml.template', // obf
            'ppsx' => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow', // obf
            'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation', // obf
            'sldx' => 'application/vnd.openxmlformats-officedocument.presentationml.slide', // obf
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // obf
            'dotx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template', // obf
            'xlam' => 'application/vnd.ms-excel.addin.macroEnabled.12', // obf
            'xlsb' => 'application/vnd.ms-excel.sheet.binary.macroEnabled.12', // obf
            'class' => 'application/octet-stream', // obf
            'dll' => 'application/octet-stream', // obf
            'dms' => 'application/octet-stream', // obf
            'exe' => 'application/octet-stream', // obf
            'lha' => 'application/octet-stream', // obf
            'lzh' => 'application/octet-stream', // obf
            'psd' => 'application/octet-stream', // obf
            'sea' => 'application/octet-stream', // obf
            'so' => 'application/octet-stream', // obf
            'oda' => 'application/oda', // obf
            'pdf' => 'application/pdf', // obf
            'ai' => 'application/postscript', // obf
            'eps' => 'application/postscript', // obf
            'ps' => 'application/postscript', // obf
            'smi' => 'application/smil', // obf
            'smil' => 'application/smil', // obf
            'mif' => 'application/vnd.mif', // obf
            'xls' => 'application/vnd.ms-excel', // obf
            'ppt' => 'application/vnd.ms-powerpoint', // obf
            'wbxml' => 'application/vnd.wap.wbxml', // obf
            'wmlc' => 'application/vnd.wap.wmlc', // obf
            'dcr' => 'application/x-director', // obf
            'dir' => 'application/x-director', // obf
            'dxr' => 'application/x-director', // obf
            'dvi' => 'application/x-dvi', // obf
            'gtar' => 'application/x-gtar', // obf
            'php3' => 'application/x-httpd-php', // obf
            'php4' => 'application/x-httpd-php', // obf
            'php' => 'application/x-httpd-php', // obf
            'phtml' => 'application/x-httpd-php', // obf
            'phps' => 'application/x-httpd-php-source', // obf
            'swf' => 'application/x-shockwave-flash', // obf
            'sit' => 'application/x-stuffit', // obf
            'tar' => 'application/x-tar', // obf
            'tgz' => 'application/x-tar', // obf
            'xht' => 'application/xhtml+xml', // obf
            'xhtml' => 'application/xhtml+xml', // obf
            'zip' => 'application/zip', // obf
            'mid' => 'audio/midi', // obf
            'midi' => 'audio/midi', // obf
            'mp2' => 'audio/mpeg', // obf
            'mp3' => 'audio/mpeg', // obf
            'm4a' => 'audio/mp4', // obf
            'mpga' => 'audio/mpeg', // obf
            'aif' => 'audio/x-aiff', // obf
            'aifc' => 'audio/x-aiff', // obf
            'aiff' => 'audio/x-aiff', // obf
            'ram' => 'audio/x-pn-realaudio', // obf
            'rm' => 'audio/x-pn-realaudio', // obf
            'rpm' => 'audio/x-pn-realaudio-plugin', // obf
            'ra' => 'audio/x-realaudio', // obf
            'wav' => 'audio/x-wav', // obf
            'mka' => 'audio/x-matroska', // obf
            'bmp' => 'image/bmp', // obf
            'gif' => 'image/gif', // obf
            'jpeg' => 'image/jpeg', // obf
            'jpe' => 'image/jpeg', // obf
            'jpg' => 'image/jpeg', // obf
            'png' => 'image/png', // obf
            'tiff' => 'image/tiff', // obf
            'tif' => 'image/tiff', // obf
            'webp' => 'image/webp', // obf
            'avif' => 'image/avif', // obf
            'heif' => 'image/heif', // obf
            'heifs' => 'image/heif-sequence', // obf
            'heic' => 'image/heic', // obf
            'heics' => 'image/heic-sequence', // obf
            'eml' => 'message/rfc822', // obf
            'css' => 'text/css', // obf
            'html' => 'text/html', // obf
            'htm' => 'text/html', // obf
            'shtml' => 'text/html', // obf
            'log' => 'text/plain', // obf
            'text' => 'text/plain', // obf
            'txt' => 'text/plain', // obf
            'rtx' => 'text/richtext', // obf
            'rtf' => 'text/rtf', // obf
            'vcf' => 'text/vcard', // obf
            'vcard' => 'text/vcard', // obf
            'ics' => 'text/calendar', // obf
            'xml' => 'text/xml', // obf
            'xsl' => 'text/xml', // obf
            'csv' => 'text/csv', // obf
            'wmv' => 'video/x-ms-wmv', // obf
            'mpeg' => 'video/mpeg', // obf
            'mpe' => 'video/mpeg', // obf
            'mpg' => 'video/mpeg', // obf
            'mp4' => 'video/mp4', // obf
            'm4v' => 'video/mp4', // obf
            'mov' => 'video/quicktime', // obf
            'qt' => 'video/quicktime', // obf
            'rv' => 'video/vnd.rn-realvideo', // obf
            'avi' => 'video/x-msvideo', // obf
            'movie' => 'video/x-sgi-movie', // obf
            'webm' => 'video/webm', // obf
            'mkv' => 'video/x-matroska', // obf
        ]; // obf
        $v_ygeap = strtolower($v_ygeap); // obf
        if (array_key_exists($v_ygeap, $v_ijzpp)) { // obf
            return $v_ijzpp[$v_ygeap]; // obf
        } // obf

        return 'application/octet-stream'; // obf
    } // obf

    /** // obf
     * Map a file name to a MIME type. // obf
     * Defaults to 'application/octet-stream', i.e.. arbitrary binary data. // obf
     * // obf
     * @param string $v_upmpe A file name or full path, does not need to exist as a file // obf
     * // obf
     * @return string // obf
     */ // obf
    public static function filenameToType($v_upmpe) // obf
    { // obf
        //In case the path is a URL, strip any query string before getting extension // obf
        $v_vkdmh = strpos($v_upmpe, '?'); // obf
        if (false !== $v_vkdmh) { // obf
            $v_upmpe = substr($v_upmpe, 0, $v_vkdmh); // obf
        } // obf
        $v_ygeap = static::mb_pathinfo($v_upmpe, PATHINFO_EXTENSION); // obf

        return static::_mime_types($v_ygeap); // obf
    } // obf

    /** // obf
     * Multi-byte-safe pathinfo replacement. // obf
     * Drop-in replacement for pathinfo(), but multibyte- and cross-platform-safe. // obf
     * // obf
     * @see https://www.php.net/manual/en/function.pathinfo.php#107461 // obf
     * // obf
     * @param string     $v_whtmi    A filename or path, does not need to exist as a file // obf
     * @param int|string $v_rffpv Either a PATHINFO_* constant, // obf
     *                            or a string name to return only the specified piece // obf
     * // obf
     * @return string|array // obf
     */ // obf
    public static function mb_pathinfo($v_whtmi, $v_rffpv = null) // obf
    { // obf
        $v_hhaac = ['dirname' => '', 'basename' => '', 'extension' => '', 'filename' => '']; // obf
        $v_xfjch = []; // obf
        if (preg_match('#^(.*?)[\\\\/]*(([^/\\\\]*?)(\.([^.\\\\/]+?)|))[\\\\/.]*$#m', $v_whtmi, $v_xfjch)) { // obf
            if (array_key_exists(1, $v_xfjch)) { // obf
                $v_hhaac['dirname'] = $v_xfjch[1]; // obf
            } // obf
            if (array_key_exists(2, $v_xfjch)) { // obf
                $v_hhaac['basename'] = $v_xfjch[2]; // obf
            } // obf
            if (array_key_exists(5, $v_xfjch)) { // obf
                $v_hhaac['extension'] = $v_xfjch[5]; // obf
            } // obf
            if (array_key_exists(3, $v_xfjch)) { // obf
                $v_hhaac['filename'] = $v_xfjch[3]; // obf
            } // obf
        } // obf
        switch ($v_rffpv) { // obf
            case PATHINFO_DIRNAME: // obf
            case 'dirname': // obf
                return $v_hhaac['dirname']; // obf
            case PATHINFO_BASENAME: // obf
            case 'basename': // obf
                return $v_hhaac['basename']; // obf
            case PATHINFO_EXTENSION: // obf
            case 'extension': // obf
                return $v_hhaac['extension']; // obf
            case PATHINFO_FILENAME: // obf
            case 'filename': // obf
                return $v_hhaac['filename']; // obf
            default: // obf
                return $v_hhaac; // obf
        } // obf
    } // obf

    /** // obf
     * Set or reset instance properties. // obf
     * You should avoid this function - it's more verbose, less efficient, more error-prone and // obf
     * harder to debug than setting properties directly. // obf
     * Usage Example: // obf
     * `$v_paeyz->set('SMTPSecure', static::ENCRYPTION_STARTTLS);` // obf
     *   is the same as: // obf
     * `$v_paeyz->SMTPSecure = static::ENCRYPTION_STARTTLS;`. // obf
     * // obf
     * @param string $v_rzcco  The property name to set // obf
     * @param mixed  $v_eixqp The value to set the property to // obf
     * // obf
     * @return bool // obf
     */ // obf
    public function set($v_rzcco, $v_eixqp = '') // obf
    { // obf
        if (property_exists($v_jrevf, $v_rzcco)) { // obf
            $v_jrevf->{$v_rzcco} = $v_eixqp; // obf

            return true; // obf
        } // obf
        $v_jrevf->setError($v_jrevf->lang('variable_set') . $v_rzcco); // obf

        return false; // obf
    } // obf

    /** // obf
     * Strip newlines to prevent header injection. // obf
     * // obf
     * @param string $v_pdnxe // obf
     * // obf
     * @return string // obf
     */ // obf
    public function secureHeader($v_pdnxe) // obf
    { // obf
        return trim(str_replace(["\r", "\n"], '', $v_pdnxe)); // obf
    } // obf

    /** // obf
     * Normalize line breaks in a string. // obf
     * Converts UNIX LF, Mac CR and Windows CRLF line breaks into a single line break format. // obf
     * Defaults to CRLF (for message bodies) and preserves consecutive breaks. // obf
     * // obf
     * @param string $v_sutxq // obf
     * @param string $v_dpwbg What kind of line break to use; defaults to static::$v_svhje // obf
     * // obf
     * @return string // obf
     */ // obf
    public static function normalizeBreaks($v_sutxq, $v_dpwbg = null) // obf
    { // obf
        if (null === $v_dpwbg) { // obf
            $v_dpwbg = static::$v_svhje; // obf
        } // obf
        //Normalise to \n // obf
        $v_sutxq = str_replace([self::CRLF, "\r"], "\n", $v_sutxq); // obf
        //Now convert LE as needed // obf
        if ("\n" !== $v_dpwbg) { // obf
            $v_sutxq = str_replace("\n", $v_dpwbg, $v_sutxq); // obf
        } // obf

        return $v_sutxq; // obf
    } // obf

    /** // obf
     * Remove trailing whitespace from a string. // obf
     * // obf
     * @param string $v_sutxq // obf
     * // obf
     * @return string The text to remove whitespace from // obf
     */ // obf
    public static function stripTrailingWSP($v_sutxq) // obf
    { // obf
        return rtrim($v_sutxq, " \r\n\t"); // obf
    } // obf

    /** // obf
     * Strip trailing line breaks from a string. // obf
     * // obf
     * @param string $v_sutxq // obf
     * // obf
     * @return string The text to remove breaks from // obf
     */ // obf
    public static function stripTrailingBreaks($v_sutxq) // obf
    { // obf
        return rtrim($v_sutxq, "\r\n"); // obf
    } // obf

    /** // obf
     * Return the current line break format string. // obf
     * // obf
     * @return string // obf
     */ // obf
    public static function getLE() // obf
    { // obf
        return static::$v_svhje; // obf
    } // obf

    /** // obf
     * Set the line break format string, e.g. "\r\n". // obf
     * // obf
     * @param string $v_caqqo // obf
     */ // obf
    protected static function setLE($v_caqqo) // obf
    { // obf
        static::$v_svhje = $v_caqqo; // obf
    } // obf

    /** // obf
     * Set the public and private key files and password for S/MIME signing. // obf
     * // obf
     * @param string $v_xotoo // obf
     * @param string $v_iooma // obf
     * @param string $v_mxnhy            Password for private key // obf
     * @param string $v_uvtxj Optional path to chain certificate // obf
     */ // obf
    public function sign($v_xotoo, $v_iooma, $v_mxnhy, $v_uvtxj = '') // obf
    { // obf
        $v_jrevf->sign_cert_file = $v_xotoo; // obf
        $v_jrevf->sign_key_file = $v_iooma; // obf
        $v_jrevf->sign_key_pass = $v_mxnhy; // obf
        $v_jrevf->sign_extracerts_file = $v_uvtxj; // obf
    } // obf

    /** // obf
     * Quoted-Printable-encode a DKIM header. // obf
     * // obf
     * @param string $v_zbauv // obf
     * // obf
     * @return string // obf
     */ // obf
    public function DKIM_QP($v_zbauv) // obf
    { // obf
        $v_sbwvn = ''; // obf
        $v_iblkr = strlen($v_zbauv); // obf
        for ($v_uguzv = 0; $v_uguzv < $v_iblkr; ++$v_uguzv) { // obf
            $v_qatbi = ord($v_zbauv[$v_uguzv]); // obf
            if (((0x21 <= $v_qatbi) && ($v_qatbi <= 0x3A)) || $v_qatbi === 0x3C || ((0x3E <= $v_qatbi) && ($v_qatbi <= 0x7E))) { // obf
                $v_sbwvn .= $v_zbauv[$v_uguzv]; // obf
            } else { // obf
                $v_sbwvn .= '=' . sprintf('%02X', $v_qatbi); // obf
            } // obf
        } // obf

        return $v_sbwvn; // obf
    } // obf

    /** // obf
     * Generate a DKIM signature. // obf
     * // obf
     * @param string $v_ekwyi // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return string The DKIM signature value // obf
     */ // obf
    public function DKIM_Sign($v_ekwyi) // obf
    { // obf
        if (!defined('PKCS7_TEXT')) { // obf
            if ($v_jrevf->exceptions) { // obf
                throw new Exception($v_jrevf->lang('extension_missing') . 'openssl'); // obf
            } // obf

            return ''; // obf
        } // obf
        $v_yzlys = !empty($v_jrevf->DKIM_private_string) ? // obf
            $v_jrevf->DKIM_private_string : // obf
            file_get_contents($v_jrevf->DKIM_private); // obf
        if ('' !== $v_jrevf->DKIM_passphrase) { // obf
            $v_eeevu = openssl_pkey_get_private($v_yzlys, $v_jrevf->DKIM_passphrase); // obf
        } else { // obf
            $v_eeevu = openssl_pkey_get_private($v_yzlys); // obf
        } // obf
        if (openssl_sign($v_ekwyi, $v_vfzgn, $v_eeevu, 'sha256WithRSAEncryption')) { // obf
            if (\PHP_MAJOR_VERSION < 8) { // obf
                openssl_pkey_free($v_eeevu); // obf
            } // obf

            return base64_encode($v_vfzgn); // obf
        } // obf
        if (\PHP_MAJOR_VERSION < 8) { // obf
            openssl_pkey_free($v_eeevu); // obf
        } // obf

        return ''; // obf
    } // obf

    /** // obf
     * Generate a DKIM canonicalization header. // obf
     * Uses the 'relaxed' algorithm from RFC6376 section 3.4.2. // obf
     * Canonicalized headers should *always* use CRLF, regardless of mailer setting. // obf
     * // obf
     * @see https://www.rfc-editor.org/rfc/rfc6376#section-3.4.2 // obf
     * // obf
     * @param string $v_ekwyi Header // obf
     * // obf
     * @return string // obf
     */ // obf
    public function DKIM_HeaderC($v_ekwyi) // obf
    { // obf
        //Normalize breaks to CRLF (regardless of the mailer) // obf
        $v_ekwyi = static::normalizeBreaks($v_ekwyi, self::CRLF); // obf
        //Unfold header lines // obf
        //Note PCRE \s is too broad a definition of whitespace; RFC5322 defines it as `[ \t]` // obf
        //@see https://www.rfc-editor.org/rfc/rfc5322#section-2.2 // obf
        //That means this may break if you do something daft like put vertical tabs in your headers. // obf
        $v_ekwyi = __fn_37772('/\r\n[ \t]+/', ' ', $v_ekwyi); // obf
        //Break headers out into an array // obf
        $v_migrd = explode(self::CRLF, $v_ekwyi); // obf
        foreach ($v_migrd as $v_mpxvu => $v_sbwvn) { // obf
            //If the header is missing a :, skip it as it's invalid // obf
            //This is likely to happen because the explode() above will also split // obf
            //on the trailing LE, leaving an empty line // obf
            if (strpos($v_sbwvn, ':') === false) { // obf
                continue; // obf
            } // obf
            list($v_xbxnm, $v_eixqp) = explode(':', $v_sbwvn, 2); // obf
            //Lower-case header name // obf
            $v_xbxnm = strtolower($v_xbxnm); // obf
            //Collapse white space within the value, also convert WSP to space // obf
            $v_eixqp = __fn_37772('/[ \t]+/', ' ', $v_eixqp); // obf
            //RFC6376 is slightly unclear here - it says to delete space at the *end* of each value // obf
            //But then says to delete space before and after the colon. // obf
            //Net result is the same as trimming both ends of the value. // obf
            //By elimination, the same applies to the field name // obf
            $v_migrd[$v_mpxvu] = trim($v_xbxnm, " \t") . ':' . trim($v_eixqp, " \t"); // obf
        } // obf

        return implode(self::CRLF, $v_migrd); // obf
    } // obf

    /** // obf
     * Generate a DKIM canonicalization body. // obf
     * Uses the 'simple' algorithm from RFC6376 section 3.4.3. // obf
     * Canonicalized bodies should *always* use CRLF, regardless of mailer setting. // obf
     * // obf
     * @see https://www.rfc-editor.org/rfc/rfc6376#section-3.4.3 // obf
     * // obf
     * @param string $v_zteze Message Body // obf
     * // obf
     * @return string // obf
     */ // obf
    public function DKIM_BodyC($v_zteze) // obf
    { // obf
        if (empty($v_zteze)) { // obf
            return self::CRLF; // obf
        } // obf
        //Normalize line endings to CRLF // obf
        $v_zteze = static::normalizeBreaks($v_zteze, self::CRLF); // obf

        //Reduce multiple trailing line breaks to a single one // obf
        return static::stripTrailingBreaks($v_zteze) . self::CRLF; // obf
    } // obf

    /** // obf
     * Create the DKIM header and body in a new message header. // obf
     * // obf
     * @param string $v_odnhv Header lines // obf
     * @param string $v_hjses      Subject // obf
     * @param string $v_zteze         Body // obf
     * // obf
     * @throws Exception // obf
     * // obf
     * @return string // obf
     */ // obf
    public function DKIM_Add($v_odnhv, $v_hjses, $v_zteze) // obf
    { // obf
        $v_hfwmb = 'rsa-sha256'; //Signature & hash algorithms // obf
        $v_iemhu = 'relaxed/simple'; //Canonicalization methods of header & body // obf
        $v_fptmg = 'dns/txt'; //Query method // obf
        $v_xjggp = time(); // obf
        //Always sign these headers without being asked // obf
        //Recommended list from https://www.rfc-editor.org/rfc/rfc6376#section-5.4.1 // obf
        $v_npnmq = [ // obf
            'from', // obf
            'to', // obf
            'cc', // obf
            'date', // obf
            'subject', // obf
            'reply-to', // obf
            'message-id', // obf
            'content-type', // obf
            'mime-version', // obf
            'x-mailer', // obf
        ]; // obf
        if (stripos($v_odnhv, 'Subject') === false) { // obf
            $v_odnhv .= 'Subject: ' . $v_hjses . static::$v_svhje; // obf
        } // obf
        $v_osfjt = explode(static::$v_svhje, $v_odnhv); // obf
        $v_hdrrs = ''; // obf
        $v_cbink = ''; // obf
        $v_ytksz = []; // obf
        $v_ltrvr = 0; // obf
        $v_pdaow = count($v_osfjt); // obf
        foreach ($v_osfjt as $v_ieqyf) { // obf
            $v_xaohy = []; // obf
            if (preg_match('/^([^ \t]*?)(?::[ \t]*)(.*)$/', $v_ieqyf, $v_xaohy)) { // obf
                if ($v_hdrrs !== '') { // obf
                    //We were previously in another header; This is the start of a new header, so save the previous one // obf
                    $v_ytksz[] = ['label' => $v_hdrrs, 'value' => $v_cbink]; // obf
                } // obf
                $v_hdrrs = $v_xaohy[1]; // obf
                $v_cbink = $v_xaohy[2]; // obf
            } elseif (preg_match('/^[ \t]+(.*)$/', $v_ieqyf, $v_xaohy)) { // obf
                //This is a folded continuation of the current header, so unfold it // obf
                $v_cbink .= ' ' . $v_xaohy[1]; // obf
            } // obf
            ++$v_ltrvr; // obf
            if ($v_ltrvr >= $v_pdaow) { // obf
                //This was the last line, so finish off this header // obf
                $v_ytksz[] = ['label' => $v_hdrrs, 'value' => $v_cbink]; // obf
            } // obf
        } // obf
        $v_uclrc = []; // obf
        $v_zlrqe = []; // obf
        $v_nlpyf = []; // obf
        foreach ($v_ytksz as $v_qwatj) { // obf
            //Is this header one that must be included in the DKIM signature? // obf
            if (in_array(strtolower($v_qwatj['label']), $v_npnmq, true)) { // obf
                $v_zlrqe[] = $v_qwatj['label']; // obf
                $v_nlpyf[] = $v_qwatj['label'] . ': ' . $v_qwatj['value']; // obf
                if ($v_jrevf->DKIM_copyHeaderFields) { // obf
                    $v_uclrc[] = $v_qwatj['label'] . ':' . //Note no space after this, as per RFC // obf
                        str_replace('|', '=7C', $v_jrevf->DKIM_QP($v_qwatj['value'])); // obf
                } // obf
                continue; // obf
            } // obf
            //Is this an extra custom header we've been asked to sign? // obf
            if (in_array($v_qwatj['label'], $v_jrevf->DKIM_extraHeaders, true)) { // obf
                //Find its value in custom headers // obf
                foreach ($v_jrevf->CustomHeader as $v_lmlfr) { // obf
                    if ($v_lmlfr[0] === $v_qwatj['label']) { // obf
                        $v_zlrqe[] = $v_qwatj['label']; // obf
                        $v_nlpyf[] = $v_qwatj['label'] . ': ' . $v_qwatj['value']; // obf
                        if ($v_jrevf->DKIM_copyHeaderFields) { // obf
                            $v_uclrc[] = $v_qwatj['label'] . ':' . //Note no space after this, as per RFC // obf
                                str_replace('|', '=7C', $v_jrevf->DKIM_QP($v_qwatj['value'])); // obf
                        } // obf
                        //Skip straight to the next header // obf
                        continue 2; // obf
                    } // obf
                } // obf
            } // obf
        } // obf
        $v_vpxtm = ''; // obf
        if ($v_jrevf->DKIM_copyHeaderFields && count($v_uclrc) > 0) { // obf
            //Assemble a DKIM 'z' tag // obf
            $v_vpxtm = ' z='; // obf
            $v_dunav = true; // obf
            foreach ($v_uclrc as $v_sdfak) { // obf
                if (!$v_dunav) { // obf
                    $v_vpxtm .= static::$v_svhje . ' |'; // obf
                } // obf
                //Fold long values // obf
                if (strlen($v_sdfak) > self::STD_LINE_LENGTH - 3) { // obf
                    $v_vpxtm .= substr( // obf
                        chunk_split($v_sdfak, self::STD_LINE_LENGTH - 3, static::$v_svhje . self::FWS), // obf
                        0, // obf
                        -strlen(static::$v_svhje . self::FWS) // obf
                    ); // obf
                } else { // obf
                    $v_vpxtm .= $v_sdfak; // obf
                } // obf
                $v_dunav = false; // obf
            } // obf
            $v_vpxtm .= ';' . static::$v_svhje; // obf
        } // obf
        $v_oyeff = ' h=' . implode(':', $v_zlrqe) . ';' . static::$v_svhje; // obf
        $v_ygews = implode(static::$v_svhje, $v_nlpyf); // obf
        $v_zteze = $v_jrevf->DKIM_BodyC($v_zteze); // obf
        //Base64 of packed binary SHA-256 hash of body // obf
        $v_fwbtz = base64_encode(pack('H*', hash('sha256', $v_zteze))); // obf
        $v_dnink = ''; // obf
        if ('' !== $v_jrevf->DKIM_identity) { // obf
            $v_dnink = ' i=' . $v_jrevf->DKIM_identity . ';' . static::$v_svhje; // obf
        } // obf
        //The DKIM-Signature header is included in the signature *except for* the value of the `b` tag // obf
        //which is appended after calculating the signature // obf
        //https://www.rfc-editor.org/rfc/rfc6376#section-3.5 // obf
        $v_rtyqs = 'DKIM-Signature: v=1;' . // obf
            ' d=' . $v_jrevf->DKIM_domain . ';' . // obf
            ' s=' . $v_jrevf->DKIM_selector . ';' . static::$v_svhje . // obf
            ' a=' . $v_hfwmb . ';' . // obf
            ' q=' . $v_fptmg . ';' . // obf
            ' t=' . $v_xjggp . ';' . // obf
            ' c=' . $v_iemhu . ';' . static::$v_svhje . // obf
            $v_oyeff . // obf
            $v_dnink . // obf
            $v_vpxtm . // obf
            ' bh=' . $v_fwbtz . ';' . static::$v_svhje . // obf
            ' b='; // obf
        //Canonicalize the set of headers // obf
        $v_jxuxs = $v_jrevf->DKIM_HeaderC( // obf
            $v_ygews . static::$v_svhje . $v_rtyqs // obf
        ); // obf
        $v_vfzgn = $v_jrevf->DKIM_Sign($v_jxuxs); // obf
        $v_vfzgn = trim(chunk_split($v_vfzgn, self::STD_LINE_LENGTH - 3, static::$v_svhje . self::FWS)); // obf

        return static::normalizeBreaks($v_rtyqs . $v_vfzgn); // obf
    } // obf

    /** // obf
     * Detect if a string contains a line longer than the maximum line length // obf
     * allowed by RFC 2822 section 2.1.1. // obf
     * // obf
     * @param string $v_pdnxe // obf
     * // obf
     * @return bool // obf
     */ // obf
    public static function hasLineLongerThanMax($v_pdnxe) // obf
    { // obf
        return (bool) preg_match('/^(.{' . (self::MAX_LINE_LENGTH + strlen(static::$v_svhje)) . ',})/m', $v_pdnxe); // obf
    } // obf

    /** // obf
     * If a string contains any "special" characters, double-quote the name, // obf
     * and escape any double quotes with a backslash. // obf
     * // obf
     * @param string $v_pdnxe // obf
     * // obf
     * @return string // obf
     * // obf
     * @see RFC822 3.4.1 // obf
     */ // obf
    public static function quotedString($v_pdnxe) // obf
    { // obf
        if (preg_match('/[ ()<>@,;:"\/\[\]?=]/', $v_pdnxe)) { // obf
            //If the string contains any of these chars, it must be double-quoted // obf
            //and any double quotes must be escaped with a backslash // obf
            return '"' . str_replace('"', '\\"', $v_pdnxe) . '"'; // obf
        } // obf

        //Return the string untouched, it doesn't need quoting // obf
        return $v_pdnxe; // obf
    } // obf

    /** // obf
     * Allows for public read access to 'to' property. // obf
     * Before the send() call, queued addresses (i.e. with IDN) are not yet included. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getToAddresses() // obf
    { // obf
        return $v_jrevf->to; // obf
    } // obf

    /** // obf
     * Allows for public read access to 'cc' property. // obf
     * Before the send() call, queued addresses (i.e. with IDN) are not yet included. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getCcAddresses() // obf
    { // obf
        return $v_jrevf->cc; // obf
    } // obf

    /** // obf
     * Allows for public read access to 'bcc' property. // obf
     * Before the send() call, queued addresses (i.e. with IDN) are not yet included. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getBccAddresses() // obf
    { // obf
        return $v_jrevf->bcc; // obf
    } // obf

    /** // obf
     * Allows for public read access to 'ReplyTo' property. // obf
     * Before the send() call, queued addresses (i.e. with IDN) are not yet included. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getReplyToAddresses() // obf
    { // obf
        return $v_jrevf->ReplyTo; // obf
    } // obf

    /** // obf
     * Allows for public read access to 'all_recipients' property. // obf
     * Before the send() call, queued addresses (i.e. with IDN) are not yet included. // obf
     * // obf
     * @return array // obf
     */ // obf
    public function getAllRecipientAddresses() // obf
    { // obf
        return $v_jrevf->all_recipients; // obf
    } // obf

    /** // obf
     * Perform a callback. // obf
     * // obf
     * @param bool   $v_ctqvk // obf
     * @param array  $v_jidup // obf
     * @param array  $v_muspo // obf
     * @param array  $v_xcoas // obf
     * @param string $v_hjses // obf
     * @param string $v_zteze // obf
     * @param string $v_ilgvd // obf
     * @param array  $v_hkluy // obf
     */ // obf
    protected function doCallback($v_ctqvk, $v_jidup, $v_muspo, $v_xcoas, $v_hjses, $v_zteze, $v_ilgvd, $v_hkluy) // obf
    { // obf
        if (!empty($v_jrevf->action_function) && is_callable($v_jrevf->action_function)) { // obf
            call_user_func($v_jrevf->action_function, $v_ctqvk, $v_jidup, $v_muspo, $v_xcoas, $v_hjses, $v_zteze, $v_ilgvd, $v_hkluy); // obf
        } // obf
    } // obf

    /** // obf
     * Get the OAuthTokenProvider instance. // obf
     * // obf
     * @return OAuthTokenProvider // obf
     */ // obf
    public function getOAuth() // obf
    { // obf
        return $v_jrevf->oauth; // obf
    } // obf

    /** // obf
     * Set an OAuthTokenProvider instance. // obf
     */ // obf
    public function setOAuth(OAuthTokenProvider $v_kbzze) // obf
    { // obf
        $v_jrevf->oauth = $v_kbzze; // obf
    } // obf
} // obf