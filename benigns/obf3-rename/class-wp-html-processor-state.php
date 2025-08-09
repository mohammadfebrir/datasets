

<?php // obf
/** // obf
 * HTML API: WP_HTML_Processor_State class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML processor during HTML parsing // obf
 * for managing the internal parsing state. // obf
 * // obf
 * This class is designed for internal use by the HTML processor. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @access private // obf
 * // obf
 * @see WP_HTML_Processor // obf
 */ // obf
class WP_HTML_Processor_State { // obf
	/* // obf
	 * Insertion mode constants. // obf
	 * // obf
	 * These constants exist and are named to make it easier to // obf
	 * discover and recognize the supported insertion modes in // obf
	 * the parser. // obf
	 * // obf
	 * Out of all the possible insertion modes, only those // obf
	 * supported by the parser are listed here. As support // obf
	 * is added to the parser for more modes, add them here // obf
	 * following the same naming and value pattern. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-insertion-mode // obf
	 */ // obf

	/** // obf
	 * Initial insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-initial-insertion-mode // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_INITIAL = 'insertion-mode-initial'; // obf

	/** // obf
	 * Before HTML insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-before-html-insertion-mode // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_BEFORE_HTML = 'insertion-mode-before-html'; // obf

	/** // obf
	 * Before head insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-beforehead // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_BEFORE_HEAD = 'insertion-mode-before-head'; // obf

	/** // obf
	 * In head insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inhead // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_HEAD = 'insertion-mode-in-head'; // obf

	/** // obf
	 * In head noscript insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inheadnoscript // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_HEAD_NOSCRIPT = 'insertion-mode-in-head-noscript'; // obf

	/** // obf
	 * After head insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-afterhead // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_AFTER_HEAD = 'insertion-mode-after-head'; // obf

	/** // obf
	 * In body insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inbody // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_BODY = 'insertion-mode-in-body'; // obf

	/** // obf
	 * In table insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intable // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_TABLE = 'insertion-mode-in-table'; // obf

	/** // obf
	 * In table text insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intabletext // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_TABLE_TEXT = 'insertion-mode-in-table-text'; // obf

	/** // obf
	 * In caption insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-incaption // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_CAPTION = 'insertion-mode-in-caption'; // obf

	/** // obf
	 * In column group insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-incolumngroup // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_COLUMN_GROUP = 'insertion-mode-in-column-group'; // obf

	/** // obf
	 * In table body insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intablebody // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_TABLE_BODY = 'insertion-mode-in-table-body'; // obf

	/** // obf
	 * In row insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inrow // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_ROW = 'insertion-mode-in-row'; // obf

	/** // obf
	 * In cell insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-incell // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_CELL = 'insertion-mode-in-cell'; // obf

	/** // obf
	 * In select insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inselect // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_SELECT = 'insertion-mode-in-select'; // obf

	/** // obf
	 * In select in table insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inselectintable // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_SELECT_IN_TABLE = 'insertion-mode-in-select-in-table'; // obf

	/** // obf
	 * In template insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intemplate // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_TEMPLATE = 'insertion-mode-in-template'; // obf

	/** // obf
	 * After body insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-afterbody // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_AFTER_BODY = 'insertion-mode-after-body'; // obf

	/** // obf
	 * In frameset insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inframeset // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_IN_FRAMESET = 'insertion-mode-in-frameset'; // obf

	/** // obf
	 * After frameset insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-afterframeset // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_AFTER_FRAMESET = 'insertion-mode-after-frameset'; // obf

	/** // obf
	 * After after body insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-after-after-body-insertion-mode // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_AFTER_AFTER_BODY = 'insertion-mode-after-after-body'; // obf

	/** // obf
	 * After after frameset insertion mode for full HTML parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-after-after-frameset-insertion-mode // obf
	 * @see WP_HTML_Processor_State::$v_svxyn // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const INSERTION_MODE_AFTER_AFTER_FRAMESET = 'insertion-mode-after-after-frameset'; // obf

	/** // obf
	 * The stack of template insertion modes. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-insertion-mode:stack-of-template-insertion-modes // obf
	 * // obf
	 * @var array<string> // obf
	 */ // obf
	public $v_txzpq = array(); // obf

	/** // obf
	 * Tracks open elements while scanning HTML. // obf
	 * // obf
	 * This property is initialized in the constructor and never null. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#stack-of-open-elements // obf
	 * // obf
	 * @var WP_HTML_Open_Elements // obf
	 */ // obf
	public $v_bhgkm; // obf

	/** // obf
	 * Tracks open formatting elements, used to handle mis-nested formatting element tags. // obf
	 * // obf
	 * This property is initialized in the constructor and never null. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#list-of-active-formatting-elements // obf
	 * // obf
	 * @var WP_HTML_Active_Formatting_Elements // obf
	 */ // obf
	public $v_moxqd; // obf

	/** // obf
	 * Refers to the currently-matched tag, if any. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var WP_HTML_Token|null // obf
	 */ // obf
	public $v_lrkub = null; // obf

	/** // obf
	 * Tree construction insertion mode. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#insertion-mode // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_svxyn = self::INSERTION_MODE_INITIAL; // obf

	/** // obf
	 * Context node initializing fragment parser, if created as a fragment parser. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @deprecated 6.8.0 WP_HTML_Processor tracks the context_node internally. // obf
	 * // obf
	 * @var null // obf
	 */ // obf
	public $v_xcxjx = null; // obf

	/** // obf
	 * The recognized encoding of the input byte stream. // obf
	 * // obf
	 * > The stream of code points that comprises the input to the tokenization // obf
	 * > stage will be initially seen by the user agent as a stream of bytes // obf
	 * > (typically coming over the network or from the local file system). // obf
	 * > The bytes encode the actual characters according to a particular character // obf
	 * > encoding, which the user agent uses to decode the bytes into characters. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	public $v_brfuv = null; // obf

	/** // obf
	 * The parser's confidence in the input encoding. // obf
	 * // obf
	 * > When the HTML parser is decoding an input byte stream, it uses a character // obf
	 * > encoding and a confidence. The confidence is either tentative, certain, or // obf
	 * > irrelevant. The encoding used, and whether the confidence in that encoding // obf
	 * > is tentative or certain, is used during the parsing to determine whether to // obf
	 * > change the encoding. If no encoding is necessary, e.g. because the parser is // obf
	 * > operating on a Unicode stream and doesn't have to use a character encoding // obf
	 * > at all, then the confidence is irrelevant. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_rrvdu = 'tentative'; // obf

	/** // obf
	 * HEAD element pointer. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#head-element-pointer // obf
	 * // obf
	 * @var WP_HTML_Token|null // obf
	 */ // obf
	public $v_isnxz = null; // obf

	/** // obf
	 * FORM element pointer. // obf
	 * // obf
	 * > points to the last form element that was opened and whose end tag has // obf
	 * > not yet been seen. It is used to make form controls associate with // obf
	 * > forms in the face of dramatically bad markup, for historical reasons. // obf
	 * > It is ignored inside template elements. // obf
	 * // obf
	 * @todo This may be invalidated by a seek operation. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#form-element-pointer // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var WP_HTML_Token|null // obf
	 */ // obf
	public $v_quzkl = null; // obf

	/** // obf
	 * The frameset-ok flag indicates if a `FRAMESET` element is allowed in the current state. // obf
	 * // obf
	 * > The frameset-ok flag is set to "ok" when the parser is created. It is set to "not ok" after certain tokens are seen. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#frameset-ok-flag // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_xvnpb = true; // obf

	/** // obf
	 * Constructor - creates a new and empty state value. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see WP_HTML_Processor // obf
	 */ // obf
	public function __construct() { // obf
		$v_rufwi->stack_of_open_elements     = new WP_HTML_Open_Elements(); // obf
		$v_rufwi->active_formatting_elements = new WP_HTML_Active_Formatting_Elements(); // obf
	} // obf
} // obf