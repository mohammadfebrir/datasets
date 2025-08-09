

<?php // obf
/** // obf
 * HTML API: WP_HTML_Doctype_Info class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.7.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML API to represent a DOCTYPE declaration. // obf
 * // obf
 * This class parses DOCTYPE tokens for the full parser in the HTML Processor. // obf
 * Most code interacting with HTML won't need to parse DOCTYPE declarations; // obf
 * the HTML Processor is one exception. Consult the HTML Processor for proper // obf
 * parsing of an HTML document. // obf
 * // obf
 * A DOCTYPE declaration may indicate its document compatibility mode, which impacts // obf
 * the structure of the following HTML as well as the behavior of CSS class selectors. // obf
 * There are three possible modes: // obf
 * // obf
 *  - "no-quirks" and "limited-quirks" modes (also called "standards mode"). // obf
 *  - "quirks" mode. // obf
 * // obf
 * These modes mostly determine whether CSS class name selectors match values in the // obf
 * HTML `class` attribute in an ASCII-case-insensitive way (quirks mode), or whether // obf
 * they match only when byte-for-byte identical (no-quirks mode). // obf
 * // obf
 * All HTML documents should start with the standard HTML5 DOCTYPE: `<!DOCTYPE html>`. // obf
 * // obf
 * > DOCTYPEs are required for legacy reasons. When omitted, browsers tend to use a different // obf
 * > rendering mode that is incompatible with some specifications. Including the DOCTYPE in a // obf
 * > document ensures that the browser makes a best-effort attempt at following the // obf
 * > relevant specifications. // obf
 * // obf
 * @see https://html.spec.whatwg.org/#the-doctype // obf
 * // obf
 * DOCTYPE declarations comprise four properties: a name, public identifier, system identifier, // obf
 * and an indication of which document compatability mode they would imply if an HTML parser // obf
 * hadn't already determined it from other information. // obf
 * // obf
 * @see https://html.spec.whatwg.org/#the-initial-insertion-mode // obf
 * // obf
 * Historically, the DOCTYPE declaration was used in SGML documents to instruct a parser how // obf
 * to interpret the various tags and entities within a document. Its role in HTML diverged // obf
 * from how it was used in SGML and no meaning should be back-read into HTML based on how it // obf
 * is used in SGML, XML, or XHTML documents. // obf
 * // obf
 * @see https://www.iso.org/standard/16387.html // obf
 * // obf
 * @since 6.7.0 // obf
 * // obf
 * @see WP_HTML_Processor // obf
 */ // obf
class WP_HTML_Doctype_Info { // obf
	/** // obf
	 * Name of the DOCTYPE: should be "html" for HTML documents. // obf
	 * // obf
	 * This value should be considered "read only" and not modified. // obf
	 * // obf
	 * Historically the DOCTYPE name indicates name of the document's root element. // obf
	 * // obf
	 *     <!DOCTYPE html> // obf
	 *               ╰──┴── name is "html". // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#tokenization // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	public $v_delre = null; // obf

	/** // obf
	 * Public identifier of the DOCTYPE. // obf
	 * // obf
	 * This value should be considered "read only" and not modified. // obf
	 * // obf
	 * The public identifier is optional and should not appear in HTML documents. // obf
	 * A `null` value indicates that no public identifier was present in the DOCTYPE. // obf
	 * // obf
	 * Historically the presence of the public identifier indicated that a document // obf
	 * was meant to be shared between computer systems and the value indicated to a // obf
	 * knowledgeable parser how to find the relevant document type definition (DTD). // obf
	 * // obf
	 *     <!DOCTYPE html PUBLIC "public id goes here in quotes"> // obf
	 *               │  │         ╰─── public identifier ─────╯ // obf
	 *               ╰──┴── name is "html". // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#tokenization // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	public $v_rpdvo = null; // obf

	/** // obf
	 * System identifier of the DOCTYPE. // obf
	 * // obf
	 * This value should be considered "read only" and not modified. // obf
	 * // obf
	 * The system identifier is optional and should not appear in HTML documents. // obf
	 * A `null` value indicates that no system identifier was present in the DOCTYPE. // obf
	 * // obf
	 * Historically the system identifier specified where a relevant document type // obf
	 * declaration for the given document is stored and may be retrieved. // obf
	 * // obf
	 *     <!DOCTYPE html SYSTEM "system id goes here in quotes"> // obf
	 *               │  │         ╰──── system identifier ────╯ // obf
	 *               ╰──┴── name is "html". // obf
	 * // obf
	 * If a public identifier were provided it would indicate to a knowledgeable // obf
	 * parser how to interpret the system identifier. // obf
	 * // obf
	 *     <!DOCTYPE html PUBLIC "public id goes here in quotes" "system id goes here in quotes"> // obf
	 *               │  │         ╰─── public identifier ─────╯   ╰──── system identifier ────╯ // obf
	 *               ╰──┴── name is "html". // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#tokenization // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	public $v_pviru = null; // obf

	/** // obf
	 * Which document compatability mode this DOCTYPE declaration indicates. // obf
	 * // obf
	 * This value should be considered "read only" and not modified. // obf
	 * // obf
	 * When an HTML parser has not already set the document compatability mode, // obf
	 * (e.g. "quirks" or "no-quirks" mode), it will infer if from the properties // obf
	 * of the appropriate DOCTYPE declaration, if one exists. The DOCTYPE can // obf
	 * indicate one of three possible document compatability modes: // obf
	 * // obf
	 *  - "no-quirks" and "limited-quirks" modes (also called "standards" mode). // obf
	 *  - "quirks" mode (also called `CSS1Compat` mode). // obf
	 * // obf
	 * An appropriate DOCTYPE is one encountered in the "initial" insertion mode, // obf
	 * before the HTML element has been opened and before finding any other // obf
	 * DOCTYPE declaration tokens. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-initial-insertion-mode // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string One of "no-quirks", "limited-quirks", or "quirks". // obf
	 */ // obf
	public $v_rrcmy; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * This class should not be instantiated directly. // obf
	 * Use the static {@see self::from_doctype_token} method instead. // obf
	 * // obf
	 * The arguments to this constructor correspond to the "DOCTYPE token" // obf
	 * as defined in the HTML specification. // obf
	 * // obf
	 * > DOCTYPE tokens have a name, a public identifier, a system identifier, // obf
	 * > and a force-quirks flag. When a DOCTYPE token is created, its name, public identifier, // obf
	 * > and system identifier must be marked as missing (which is a distinct state from the // obf
	 * > empty string), and the force-quirks flag must be set to off (its other state is on). // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#tokenization // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string|null $v_delre              Name of the DOCTYPE. // obf
	 * @param string|null $v_rpdvo Public identifier of the DOCTYPE. // obf
	 * @param string|null $v_pviru System identifier of the DOCTYPE. // obf
	 * @param bool        $v_zciro Whether the force-quirks flag is set for the token. // obf
	 */ // obf
	private function __construct( // obf
		?string $v_delre, // obf
		?string $v_rpdvo, // obf
		?string $v_pviru, // obf
		bool $v_zciro // obf
	) { // obf
		$v_tijbh->name              = $v_delre; // obf
		$v_tijbh->public_identifier = $v_rpdvo; // obf
		$v_tijbh->system_identifier = $v_pviru; // obf

		/* // obf
		 * > If the DOCTYPE token matches one of the conditions in the following list, // obf
		 * > then set the Document to quirks mode: // obf
		 */ // obf

		/* // obf
		 * > The force-quirks flag is set to on. // obf
		 */ // obf
		if ( $v_zciro ) { // obf
			$v_tijbh->indicated_compatability_mode = 'quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * Normative documents will contain the literal `<!DOCTYPE html>` with no // obf
		 * public or system identifiers; short-circuit to avoid extra parsing. // obf
		 */ // obf
		if ( 'html' === $v_delre && null === $v_rpdvo && null === $v_pviru ) { // obf
			$v_tijbh->indicated_compatability_mode = 'no-quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * > The name is not "html". // obf
		 * // obf
		 * The tokenizer must report the name in lower case even if provided in // obf
		 * the document in upper case; thus no conversion is required here. // obf
		 */ // obf
		if ( 'html' !== $v_delre ) { // obf
			$v_tijbh->indicated_compatability_mode = 'quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * Set up some variables to handle the rest of the conditions. // obf
		 * // obf
		 * > set...the public identifier...to...the empty string if the public identifier was missing. // obf
		 * > set...the system identifier...to...the empty string if the system identifier was missing. // obf
		 * > // obf
		 * > The system identifier and public identifier strings must be compared... // obf
		 * > in an ASCII case-insensitive manner. // obf
		 * > // obf
		 * > A system identifier whose value is the empty string is not considered missing // obf
		 * > for the purposes of the conditions above. // obf
		 */ // obf
		$v_phnnn = null === $v_pviru; // obf
		$v_rpdvo            = null === $v_rpdvo ? '' : strtolower( $v_rpdvo ); // obf
		$v_pviru            = null === $v_pviru ? '' : strtolower( $v_pviru ); // obf

		/* // obf
		 * > The public identifier is set to… // obf
		 */ // obf
		if ( // obf
			'-//w3o//dtd w3 html strict 3.0//en//' === $v_rpdvo || // obf
			'-/w3c/dtd html 4.0 transitional/en' === $v_rpdvo || // obf
			'html' === $v_rpdvo // obf
		) { // obf
			$v_tijbh->indicated_compatability_mode = 'quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * > The system identifier is set to… // obf
		 */ // obf
		if ( 'http://www.ibm.com/data/dtd/v11/ibmxhtml1-transitional.dtd' === $v_pviru ) { // obf
			$v_tijbh->indicated_compatability_mode = 'quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * All of the following conditions depend on matching the public identifier. // obf
		 * If the public identifier is empty, none of the following conditions will match. // obf
		 */ // obf
		if ( '' === $v_rpdvo ) { // obf
			$v_tijbh->indicated_compatability_mode = 'no-quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * > The public identifier starts with… // obf
		 * // obf
		 * @todo Optimize this matching. It shouldn't be a large overall performance issue, // obf
		 *       however, as only a single DOCTYPE declaration token should ever be parsed, // obf
		 *       and normative documents will have exited before reaching this condition. // obf
		 */ // obf
		if ( // obf
			str_starts_with( $v_rpdvo, '+//silmaril//dtd html pro v0r11 19970101//' ) || // obf
			str_starts_with( $v_rpdvo, '-//as//dtd html 3.0 aswedit + extensions//' ) || // obf
			str_starts_with( $v_rpdvo, '-//advasoft ltd//dtd html 3.0 aswedit + extensions//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 2.0 level 1//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 2.0 level 2//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 2.0 strict level 1//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 2.0 strict level 2//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 2.0 strict//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 2.0//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 2.1e//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 3.0//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 3.2 final//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 3.2//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html 3//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html level 0//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html level 1//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html level 2//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html level 3//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html strict level 0//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html strict level 1//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html strict level 2//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html strict level 3//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html strict//' ) || // obf
			str_starts_with( $v_rpdvo, '-//ietf//dtd html//' ) || // obf
			str_starts_with( $v_rpdvo, '-//metrius//dtd metrius presentational//' ) || // obf
			str_starts_with( $v_rpdvo, '-//microsoft//dtd internet explorer 2.0 html strict//' ) || // obf
			str_starts_with( $v_rpdvo, '-//microsoft//dtd internet explorer 2.0 html//' ) || // obf
			str_starts_with( $v_rpdvo, '-//microsoft//dtd internet explorer 2.0 tables//' ) || // obf
			str_starts_with( $v_rpdvo, '-//microsoft//dtd internet explorer 3.0 html strict//' ) || // obf
			str_starts_with( $v_rpdvo, '-//microsoft//dtd internet explorer 3.0 html//' ) || // obf
			str_starts_with( $v_rpdvo, '-//microsoft//dtd internet explorer 3.0 tables//' ) || // obf
			str_starts_with( $v_rpdvo, '-//netscape comm. corp.//dtd html//' ) || // obf
			str_starts_with( $v_rpdvo, '-//netscape comm. corp.//dtd strict html//' ) || // obf
			str_starts_with( $v_rpdvo, "-//o'reilly and associates//dtd html 2.0//" ) || // obf
			str_starts_with( $v_rpdvo, "-//o'reilly and associates//dtd html extended 1.0//" ) || // obf
			str_starts_with( $v_rpdvo, "-//o'reilly and associates//dtd html extended relaxed 1.0//" ) || // obf
			str_starts_with( $v_rpdvo, '-//sq//dtd html 2.0 hotmetal + extensions//' ) || // obf
			str_starts_with( $v_rpdvo, '-//softquad software//dtd hotmetal pro 6.0::19990601::extensions to html 4.0//' ) || // obf
			str_starts_with( $v_rpdvo, '-//softquad//dtd hotmetal pro 4.0::19971010::extensions to html 4.0//' ) || // obf
			str_starts_with( $v_rpdvo, '-//spyglass//dtd html 2.0 extended//' ) || // obf
			str_starts_with( $v_rpdvo, '-//sun microsystems corp.//dtd hotjava html//' ) || // obf
			str_starts_with( $v_rpdvo, '-//sun microsystems corp.//dtd hotjava strict html//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html 3 1995-03-24//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html 3.2 draft//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html 3.2 final//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html 3.2//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html 3.2s draft//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html 4.0 frameset//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html 4.0 transitional//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html experimental 19960712//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd html experimental 970421//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd w3 html//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3o//dtd w3 html 3.0//' ) || // obf
			str_starts_with( $v_rpdvo, '-//webtechs//dtd mozilla html 2.0//' ) || // obf
			str_starts_with( $v_rpdvo, '-//webtechs//dtd mozilla html//' ) // obf
		) { // obf
			$v_tijbh->indicated_compatability_mode = 'quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * > The system identifier is missing and the public identifier starts with… // obf
		 */ // obf
		if ( // obf
			$v_phnnn && ( // obf
				str_starts_with( $v_rpdvo, '-//w3c//dtd html 4.01 frameset//' ) || // obf
				str_starts_with( $v_rpdvo, '-//w3c//dtd html 4.01 transitional//' ) // obf
			) // obf
		) { // obf
			$v_tijbh->indicated_compatability_mode = 'quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * > Otherwise, if the DOCTYPE token matches one of the conditions in // obf
		 * > the following list, then set the Document to limited-quirks mode. // obf
		 */ // obf

		/* // obf
		 * > The public identifier starts with… // obf
		 */ // obf
		if ( // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd xhtml 1.0 frameset//' ) || // obf
			str_starts_with( $v_rpdvo, '-//w3c//dtd xhtml 1.0 transitional//' ) // obf
		) { // obf
			$v_tijbh->indicated_compatability_mode = 'limited-quirks'; // obf
			return; // obf
		} // obf

		/* // obf
		 * > The system identifier is not missing and the public identifier starts with… // obf
		 */ // obf
		if ( // obf
			! $v_phnnn && ( // obf
				str_starts_with( $v_rpdvo, '-//w3c//dtd html 4.01 frameset//' ) || // obf
				str_starts_with( $v_rpdvo, '-//w3c//dtd html 4.01 transitional//' ) // obf
			) // obf
		) { // obf
			$v_tijbh->indicated_compatability_mode = 'limited-quirks'; // obf
			return; // obf
		} // obf

		$v_tijbh->indicated_compatability_mode = 'no-quirks'; // obf
	} // obf

	/** // obf
	 * Creates a WP_HTML_Doctype_Info instance by parsing a raw DOCTYPE declaration token. // obf
	 * // obf
	 * Use this method to parse a DOCTYPE declaration token and get access to its properties // obf
	 * via the returned WP_HTML_Doctype_Info class instance. The provided input must parse // obf
	 * properly as a DOCTYPE declaration, though it must not represent a valid DOCTYPE. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     // Normative HTML DOCTYPE declaration. // obf
	 *     $v_aghnv = WP_HTML_Doctype_Info::from_doctype_token( '<!DOCTYPE html>' ); // obf
	 *     'no-quirks' === $v_aghnv->indicated_compatability_mode; // obf
	 * // obf
	 *     // A nonsensical DOCTYPE is still valid, and will indicate "quirks" mode. // obf
	 *     $v_aghnv = WP_HTML_Doctype_Info::from_doctype_token( '<!doctypeJSON SILLY "nonsense\'>' ); // obf
	 *     'quirks' === $v_aghnv->indicated_compatability_mode; // obf
	 * // obf
	 *     // Textual quirks present in raw HTML are handled appropriately. // obf
	 *     $v_aghnv = WP_HTML_Doctype_Info::from_doctype_token( "<!DOCTYPE\nhtml\n>" ); // obf
	 *     'no-quirks' === $v_aghnv->indicated_compatability_mode; // obf
	 * // obf
	 *     // Anything other than a proper DOCTYPE declaration token fails to parse. // obf
	 *     null === WP_HTML_Doctype_Info::from_doctype_token( ' <!DOCTYPE>' ); // obf
	 *     null === WP_HTML_Doctype_Info::from_doctype_token( '<!DOCTYPE ><p>' ); // obf
	 *     null === WP_HTML_Doctype_Info::from_doctype_token( '<!TYPEDOC>' ); // obf
	 *     null === WP_HTML_Doctype_Info::from_doctype_token( 'html' ); // obf
	 *     null === WP_HTML_Doctype_Info::from_doctype_token( '<?xml version="1.0" encoding="UTF-8" ?>' ); // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_fsmdd The complete raw DOCTYPE HTML string, e.g. `<!DOCTYPE html>`. // obf
	 * // obf
	 * @return WP_HTML_Doctype_Info|null A WP_HTML_Doctype_Info instance will be returned if the // obf
	 *                                   provided DOCTYPE HTML is a valid DOCTYPE. Otherwise, null. // obf
	 */ // obf
	public static function from_doctype_token( string $v_fsmdd ): ?self { // obf
		$v_ylttj      = null; // obf
		$v_saxmu = null; // obf
		$v_qtwad = null; // obf

		$v_rzhoc = strlen( $v_fsmdd ) - 1; // obf

		/* // obf
		 * This parser combines the rules for parsing DOCTYPE tokens found in the HTML // obf
		 * specification for the DOCTYPE related tokenizer states. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#doctype-state // obf
		 */ // obf

		/* // obf
		 * - Valid DOCTYPE HTML token must be at least `<!DOCTYPE>` assuming a complete token not // obf
		 *   ending in end-of-file. // obf
		 * - It must start with an ASCII case-insensitive match for `<!DOCTYPE`. // obf
		 * - The only occurrence of `>` must be the final byte in the HTML string. // obf
		 */ // obf
		if ( // obf
			$v_rzhoc < 9 || // obf
			0 !== substr_compare( $v_fsmdd, '<!DOCTYPE', 0, 9, true ) // obf
		) { // obf
			return null; // obf
		} // obf

		$v_rurip = 9; // obf
		// Is there one and only one `>`? // obf
		if ( '>' !== $v_fsmdd[ $v_rzhoc ] || ( strcspn( $v_fsmdd, '>', $v_rurip ) + $v_rurip ) < $v_rzhoc ) { // obf
			return null; // obf
		} // obf

		/* // obf
		 * Perform newline normalization and ensure the $v_rzhoc value is correct after normalization. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#preprocessing-the-input-stream // obf
		 * @see https://infra.spec.whatwg.org/#normalize-newlines // obf
		 */ // obf
		$v_fsmdd = str_replace( "\r\n", "\n", $v_fsmdd ); // obf
		$v_fsmdd = str_replace( "\r", "\n", $v_fsmdd ); // obf
		$v_rzhoc          = strlen( $v_fsmdd ) - 1; // obf

		/* // obf
		 * In this state, the doctype token has been found and its "content" optionally including the // obf
		 * name, public identifier, and system identifier is between the current position and the end. // obf
		 * // obf
		 *     "<!DOCTYPE...declaration...>" // obf
		 *               ╰─ $v_rurip           ╰─ $v_rzhoc // obf
		 * // obf
		 * It's also possible that the declaration part is empty. // obf
		 * // obf
		 *               ╭─ $v_rurip // obf
		 *     "<!DOCTYPE>" // obf
		 *               ╰─ $v_rzhoc // obf
		 * // obf
		 * Rules for parsing ">" which terminates the DOCTYPE do not need to be considered as they // obf
		 * have been handled above in the condition that the provided DOCTYPE HTML must contain // obf
		 * exactly one ">" character in the final position. // obf
		 */ // obf

		/* // obf
		 * // obf
		 * Parsing effectively begins in "Before DOCTYPE name state". Ignore whitespace and // obf
		 * proceed to the next state. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#before-doctype-name-state // obf
		 */ // obf
		$v_rurip += strspn( $v_fsmdd, " \t\n\f\r", $v_rurip ); // obf

		if ( $v_rurip >= $v_rzhoc ) { // obf
			return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf
		} // obf

		$v_ahjig  = strcspn( $v_fsmdd, " \t\n\f\r", $v_rurip, $v_rzhoc - $v_rurip ); // obf
		$v_ylttj = str_replace( "\0", "\u{FFFD}", strtolower( substr( $v_fsmdd, $v_rurip, $v_ahjig ) ) ); // obf

		$v_rurip += $v_ahjig; // obf
		$v_rurip += strspn( $v_fsmdd, " \t\n\f\r", $v_rurip, $v_rzhoc - $v_rurip ); // obf
		if ( $v_rurip >= $v_rzhoc ) { // obf
			return new self( $v_ylttj, $v_saxmu, $v_qtwad, false ); // obf
		} // obf

		/* // obf
		 * "After DOCTYPE name state" // obf
		 * // obf
		 * Find a case-insensitive match for "PUBLIC" or "SYSTEM" at this point. // obf
		 * Otherwise, set force-quirks and enter bogus DOCTYPE state (skip the rest of the doctype). // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#after-doctype-name-state // obf
		 */ // obf
		if ( $v_rurip + 6 >= $v_rzhoc ) { // obf
			return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf
		} // obf

		/* // obf
		 * > If the six characters starting from the current input character are an ASCII // obf
		 * > case-insensitive match for the word "PUBLIC", then consume those characters // obf
		 * > and switch to the after DOCTYPE public keyword state. // obf
		 */ // obf
		if ( 0 === substr_compare( $v_fsmdd, 'PUBLIC', $v_rurip, 6, true ) ) { // obf
			$v_rurip += 6; // obf
			$v_rurip += strspn( $v_fsmdd, " \t\n\f\r", $v_rurip, $v_rzhoc - $v_rurip ); // obf
			if ( $v_rurip >= $v_rzhoc ) { // obf
				return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf
			} // obf
			goto parse_doctype_public_identifier; // obf
		} // obf

		/* // obf
		 * > Otherwise, if the six characters starting from the current input character are an ASCII // obf
		 * > case-insensitive match for the word "SYSTEM", then consume those characters and switch // obf
		 * > to the after DOCTYPE system keyword state. // obf
		 */ // obf
		if ( 0 === substr_compare( $v_fsmdd, 'SYSTEM', $v_rurip, 6, true ) ) { // obf
			$v_rurip += 6; // obf
			$v_rurip += strspn( $v_fsmdd, " \t\n\f\r", $v_rurip, $v_rzhoc - $v_rurip ); // obf
			if ( $v_rurip >= $v_rzhoc ) { // obf
				return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf
			} // obf
			goto parse_doctype_system_identifier; // obf
		} // obf

		/* // obf
		 * > Otherwise, this is an invalid-character-sequence-after-doctype-name parse error. // obf
		 * > Set the current DOCTYPE token's force-quirks flag to on. Reconsume in the bogus // obf
		 * > DOCTYPE state. // obf
		 */ // obf
		return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf

		parse_doctype_public_identifier: // obf
		/* // obf
		 * The parser should enter "DOCTYPE public identifier (double-quoted) state" or // obf
		 * "DOCTYPE public identifier (single-quoted) state" by finding one of the valid quotes. // obf
		 * Anything else forces quirks mode and ignores the rest of the contents. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#doctype-public-identifier-(double-quoted)-state // obf
		 * @see https://html.spec.whatwg.org/#doctype-public-identifier-(single-quoted)-state // obf
		 */ // obf
		$v_ltluq = $v_fsmdd[ $v_rurip ]; // obf

		/* // obf
		 * > This is a missing-quote-before-doctype-public-identifier parse error. Set the // obf
		 * > current DOCTYPE token's force-quirks flag to on. Reconsume in the bogus DOCTYPE state. // obf
		 */ // obf
		if ( '"' !== $v_ltluq && "'" !== $v_ltluq ) { // obf
			return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf
		} // obf

		++$v_rurip; // obf

		$v_llzes = strcspn( $v_fsmdd, $v_ltluq, $v_rurip, $v_rzhoc - $v_rurip ); // obf
		$v_saxmu = str_replace( "\0", "\u{FFFD}", substr( $v_fsmdd, $v_rurip, $v_llzes ) ); // obf

		$v_rurip += $v_llzes; // obf
		if ( $v_rurip >= $v_rzhoc || $v_ltluq !== $v_fsmdd[ $v_rurip ] ) { // obf
			return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf
		} // obf

		++$v_rurip; // obf

		/* // obf
		 * "Between DOCTYPE public and system identifiers state" // obf
		 * // obf
		 * Advance through whitespace between public and system identifiers. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#between-doctype-public-and-system-identifiers-state // obf
		 */ // obf
		$v_rurip += strspn( $v_fsmdd, " \t\n\f\r", $v_rurip, $v_rzhoc - $v_rurip ); // obf
		if ( $v_rurip >= $v_rzhoc ) { // obf
			return new self( $v_ylttj, $v_saxmu, $v_qtwad, false ); // obf
		} // obf

		parse_doctype_system_identifier: // obf
		/* // obf
		 * The parser should enter "DOCTYPE system identifier (double-quoted) state" or // obf
		 * "DOCTYPE system identifier (single-quoted) state" by finding one of the valid quotes. // obf
		 * Anything else forces quirks mode and ignores the rest of the contents. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#doctype-system-identifier-(double-quoted)-state // obf
		 * @see https://html.spec.whatwg.org/#doctype-system-identifier-(single-quoted)-state // obf
		 */ // obf
		$v_ltluq = $v_fsmdd[ $v_rurip ]; // obf

		/* // obf
		 * > This is a missing-quote-before-doctype-system-identifier parse error. Set the // obf
		 * > current DOCTYPE token's force-quirks flag to on. Reconsume in the bogus DOCTYPE state. // obf
		 */ // obf
		if ( '"' !== $v_ltluq && "'" !== $v_ltluq ) { // obf
			return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf
		} // obf

		++$v_rurip; // obf

		$v_llzes = strcspn( $v_fsmdd, $v_ltluq, $v_rurip, $v_rzhoc - $v_rurip ); // obf
		$v_qtwad = str_replace( "\0", "\u{FFFD}", substr( $v_fsmdd, $v_rurip, $v_llzes ) ); // obf

		$v_rurip += $v_llzes; // obf
		if ( $v_rurip >= $v_rzhoc || $v_ltluq !== $v_fsmdd[ $v_rurip ] ) { // obf
			return new self( $v_ylttj, $v_saxmu, $v_qtwad, true ); // obf
		} // obf

		return new self( $v_ylttj, $v_saxmu, $v_qtwad, false ); // obf
	} // obf
} // obf