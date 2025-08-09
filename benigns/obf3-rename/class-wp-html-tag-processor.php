

<?php // obf
/** // obf
 * HTML API: WP_HTML_Tag_Processor class // obf
 * // obf
 * Scans through an HTML document to find specific tags, then // obf
 * transforms those tags by adding, removing, or updating the // obf
 * values of the HTML attributes within that tag (opener). // obf
 * // obf
 * Does not fully parse HTML or _recurse_ into the HTML structure // obf
 * Instead this scans linearly through a document and only parses // obf
 * the HTML tag openers. // obf
 * // obf
 * ### Possible future direction for this module // obf
 * // obf
 *  - Prune the whitespace when removing classes/attributes: e.g. "a b c" -> "c" not " c". // obf
 *    This would increase the size of the changes for some operations but leave more // obf
 *    natural-looking output HTML. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.2.0 // obf
 */ // obf

/** // obf
 * Core class used to modify attributes in an HTML document for tags matching a query. // obf
 * // obf
 * ## Usage // obf
 * // obf
 * Use of this class requires three steps: // obf
 * // obf
 *  1. Create a new class instance with your input HTML document. // obf
 *  2. Find the tag(s) you are looking for. // obf
 *  3. Request changes to the attributes in those tag(s). // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_ovoet = new WP_HTML_Tag_Processor( $v_xjzff ); // obf
 *     if ( $v_ovoet->next_tag( 'option' ) ) { // obf
 *         $v_ovoet->set_attribute( 'selected', true ); // obf
 *     } // obf
 * // obf
 * ### Finding tags // obf
 * // obf
 * The `next_tag()` function moves the internal cursor through // obf
 * your input HTML document until it finds a tag meeting any of // obf
 * the supplied restrictions in the optional query argument. If // obf
 * no argument is provided then it will find the next HTML tag, // obf
 * regardless of what kind it is. // obf
 * // obf
 * If you want to _find whatever the next tag is_: // obf
 * // obf
 *     $v_ovoet->next_tag(); // obf
 * // obf
 * | Goal                                                      | Query                                                                           | // obf
 * |-----------------------------------------------------------|---------------------------------------------------------------------------------| // obf
 * | Find any tag.                                             | `$v_ovoet->next_tag();`                                                            | // obf
 * | Find next image tag.                                      | `$v_ovoet->next_tag( array( 'tag_name' => 'img' ) );`                              | // obf
 * | Find next image tag (without passing the array).          | `$v_ovoet->next_tag( 'img' );`                                                     | // obf
 * | Find next tag containing the `fullwidth` CSS class.       | `$v_ovoet->next_tag( array( 'class_name' => 'fullwidth' ) );`                      | // obf
 * | Find next image tag containing the `fullwidth` CSS class. | `$v_ovoet->next_tag( array( 'tag_name' => 'img', 'class_name' => 'fullwidth' ) );` | // obf
 * // obf
 * If a tag was found meeting your criteria then `next_tag()` // obf
 * will return `true` and you can proceed to modify it. If it // obf
 * returns `false`, however, it failed to find the tag and // obf
 * moved the cursor to the end of the file. // obf
 * // obf
 * Once the cursor reaches the end of the file the processor // obf
 * is done and if you want to reach an earlier tag you will // obf
 * need to recreate the processor and start over, as it's // obf
 * unable to back up or move in reverse. // obf
 * // obf
 * See the section on bookmarks for an exception to this // obf
 * no-backing-up rule. // obf
 * // obf
 * #### Custom queries // obf
 * // obf
 * Sometimes it's necessary to further inspect an HTML tag than // obf
 * the query syntax here permits. In these cases one may further // obf
 * inspect the search results using the read-only functions // obf
 * provided by the processor or external state or variables. // obf
 * // obf
 * Example: // obf
 * // obf
 *     // Paint up to the first five DIV or SPAN tags marked with the "jazzy" style. // obf
 *     $v_qyybo = 5; // obf
 *     while ( $v_qyybo > 0 && $v_ovoet->next_tag() ) { // obf
 *         if ( // obf
 *              ( 'DIV' === $v_ovoet->get_tag() || 'SPAN' === $v_ovoet->get_tag() ) && // obf
 *              'jazzy' === $v_ovoet->get_attribute( 'data-style' ) // obf
 *         ) { // obf
 *             $v_ovoet->add_class( 'theme-style-everest-jazz' ); // obf
 *             $v_qyybo--; // obf
 *         } // obf
 *     } // obf
 * // obf
 * `get_attribute()` will return `null` if the attribute wasn't present // obf
 * on the tag when it was called. It may return `""` (the empty string) // obf
 * in cases where the attribute was present but its value was empty. // obf
 * For boolean attributes, those whose name is present but no value is // obf
 * given, it will return `true` (the only way to set `false` for an // obf
 * attribute is to remove it). // obf
 * // obf
 * #### When matching fails // obf
 * // obf
 * When `next_tag()` returns `false` it could mean different things: // obf
 * // obf
 *  - The requested tag wasn't found in the input document. // obf
 *  - The input document ended in the middle of an HTML syntax element. // obf
 * // obf
 * When a document ends in the middle of a syntax element it will pause // obf
 * the processor. This is to make it possible in the future to extend the // obf
 * input document and proceed - an important requirement for chunked // obf
 * streaming parsing of a document. // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_uhnxn = new WP_HTML_Tag_Processor( 'This <div is="a" partial="token' ); // obf
 *     false === $v_uhnxn->next_tag(); // obf
 * // obf
 * If a special element (see next section) is encountered but no closing tag // obf
 * is found it will count as an incomplete tag. The parser will pause as if // obf
 * the opening tag were incomplete. // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_uhnxn = new WP_HTML_Tag_Processor( '<style>// there could be more styling to come' ); // obf
 *     false === $v_uhnxn->next_tag(); // obf
 * // obf
 *     $v_uhnxn = new WP_HTML_Tag_Processor( '<style>// this is everything</style><div>' ); // obf
 *     true === $v_uhnxn->next_tag( 'DIV' ); // obf
 * // obf
 * #### Special self-contained elements // obf
 * // obf
 * Some HTML elements are handled in a special way; their start and end tags // obf
 * act like a void tag. These are special because their contents can't contain // obf
 * HTML markup. Everything inside these elements is handled in a special way // obf
 * and content that _appears_ like HTML tags inside of them isn't. There can // obf
 * be no nesting in these elements. // obf
 * // obf
 * In the following list, "raw text" means that all of the content in the HTML // obf
 * until the matching closing tag is treated verbatim without any replacements // obf
 * and without any parsing. // obf
 * // obf
 *  - IFRAME allows no content but requires a closing tag. // obf
 *  - NOEMBED (deprecated) content is raw text. // obf
 *  - NOFRAMES (deprecated) content is raw text. // obf
 *  - SCRIPT content is plaintext apart from legacy rules allowing `</script>` inside an HTML comment. // obf
 *  - STYLE content is raw text. // obf
 *  - TITLE content is plain text but character references are decoded. // obf
 *  - TEXTAREA content is plain text but character references are decoded. // obf
 *  - XMP (deprecated) content is raw text. // obf
 * // obf
 * ### Modifying HTML attributes for a found tag // obf
 * // obf
 * Once you've found the start of an opening tag you can modify // obf
 * any number of the attributes on that tag. You can set a new // obf
 * value for an attribute, remove the entire attribute, or do // obf
 * nothing and move on to the next opening tag. // obf
 * // obf
 * Example: // obf
 * // obf
 *     if ( $v_ovoet->next_tag( array( 'class_name' => 'wp-group-block' ) ) ) { // obf
 *         $v_ovoet->set_attribute( 'title', 'This groups the contained content.' ); // obf
 *         $v_ovoet->remove_attribute( 'data-test-id' ); // obf
 *     } // obf
 * // obf
 * If `set_attribute()` is called for an existing attribute it will // obf
 * overwrite the existing value. Similarly, calling `remove_attribute()` // obf
 * for a non-existing attribute has no effect on the document. Both // obf
 * of these methods are safe to call without knowing if a given attribute // obf
 * exists beforehand. // obf
 * // obf
 * ### Modifying CSS classes for a found tag // obf
 * // obf
 * The tag processor treats the `class` attribute as a special case. // obf
 * Because it's a common operation to add or remove CSS classes, this // obf
 * interface adds helper methods to make that easier. // obf
 * // obf
 * As with attribute values, adding or removing CSS classes is a safe // obf
 * operation that doesn't require checking if the attribute or class // obf
 * exists before making changes. If removing the only class then the // obf
 * entire `class` attribute will be removed. // obf
 * // obf
 * Example: // obf
 * // obf
 *     // from `<span>Yippee!</span>` // obf
 *     //   to `<span class="is-active">Yippee!</span>` // obf
 *     $v_ovoet->add_class( 'is-active' ); // obf
 * // obf
 *     // from `<span class="excited">Yippee!</span>` // obf
 *     //   to `<span class="excited is-active">Yippee!</span>` // obf
 *     $v_ovoet->add_class( 'is-active' ); // obf
 * // obf
 *     // from `<span class="is-active heavy-accent">Yippee!</span>` // obf
 *     //   to `<span class="is-active heavy-accent">Yippee!</span>` // obf
 *     $v_ovoet->add_class( 'is-active' ); // obf
 * // obf
 *     // from `<input type="text" class="is-active rugby not-disabled" length="24">` // obf
 *     //   to `<input type="text" class="is-active not-disabled" length="24"> // obf
 *     $v_ovoet->remove_class( 'rugby' ); // obf
 * // obf
 *     // from `<input type="text" class="rugby" length="24">` // obf
 *     //   to `<input type="text" length="24"> // obf
 *     $v_ovoet->remove_class( 'rugby' ); // obf
 * // obf
 *     // from `<input type="text" length="24">` // obf
 *     //   to `<input type="text" length="24"> // obf
 *     $v_ovoet->remove_class( 'rugby' ); // obf
 * // obf
 * When class changes are enqueued but a direct change to `class` is made via // obf
 * `set_attribute` then the changes to `set_attribute` (or `remove_attribute`) // obf
 * will take precedence over those made through `add_class` and `remove_class`. // obf
 * // obf
 * ### Bookmarks // obf
 * // obf
 * While scanning through the input HTMl document it's possible to set // obf
 * a named bookmark when a particular tag is found. Later on, after // obf
 * continuing to scan other tags, it's possible to `seek` to one of // obf
 * the set bookmarks and then proceed again from that point forward. // obf
 * // obf
 * Because bookmarks create processing overhead one should avoid // obf
 * creating too many of them. As a rule, create only bookmarks // obf
 * of known string literal names; avoid creating "mark_{$v_wpexh}" // obf
 * and so on. It's fine from a performance standpoint to create a // obf
 * bookmark and update it frequently, such as within a loop. // obf
 * // obf
 *     $v_secof = 0; // obf
 *     while ( $v_csxcx->next_tag( array( 'tag_name' => 'UL', 'class_name' => 'todo' ) ) ) { // obf
 *         $v_csxcx->set_bookmark( 'list-start' ); // obf
 *         while ( $v_csxcx->next_tag( array( 'tag_closers' => 'visit' ) ) ) { // obf
 *             if ( 'UL' === $v_csxcx->get_tag() && $v_csxcx->is_tag_closer() ) { // obf
 *                 $v_csxcx->set_bookmark( 'list-end' ); // obf
 *                 $v_csxcx->seek( 'list-start' ); // obf
 *                 $v_csxcx->set_attribute( 'data-contained-todos', (string) $v_secof ); // obf
 *                 $v_secof = 0; // obf
 *                 $v_csxcx->seek( 'list-end' ); // obf
 *                 break; // obf
 *             } // obf
 * // obf
 *             if ( 'LI' === $v_csxcx->get_tag() && ! $v_csxcx->is_tag_closer() ) { // obf
 *                 $v_secof++; // obf
 *             } // obf
 *         } // obf
 *     } // obf
 * // obf
 * ## Tokens and finer-grained processing. // obf
 * // obf
 * It's possible to scan through every lexical token in the // obf
 * HTML document using the `next_token()` function. This // obf
 * alternative form takes no argument and provides no built-in // obf
 * query syntax. // obf
 * // obf
 * Example: // obf
 * // obf
 *      $v_aywlf = '(untitled)'; // obf
 *      $v_qvsam  = ''; // obf
 *      while ( $v_uhnxn->next_token() ) { // obf
 *          switch ( $v_uhnxn->get_token_name() ) { // obf
 *              case '#text': // obf
 *                  $v_qvsam .= $v_uhnxn->get_modifiable_text(); // obf
 *                  break; // obf
 * // obf
 *              case 'BR': // obf
 *                  $v_qvsam .= "\n"; // obf
 *                  break; // obf
 * // obf
 *              case 'TITLE': // obf
 *                  $v_aywlf = $v_uhnxn->get_modifiable_text(); // obf
 *                  break; // obf
 *          } // obf
 *      } // obf
 *      return trim( "# {$v_aywlf}\n\n{$v_qvsam}" ); // obf
 * // obf
 * ### Tokens and _modifiable text_. // obf
 * // obf
 * #### Special "atomic" HTML elements. // obf
 * // obf
 * Not all HTML elements are able to contain other elements inside of them. // obf
 * For instance, the contents inside a TITLE element are plaintext (except // obf
 * that character references like &amp; will be decoded). This means that // obf
 * if the string `<img>` appears inside a TITLE element, then it's not an // obf
 * image tag, but rather it's text describing an image tag. Likewise, the // obf
 * contents of a SCRIPT or STYLE element are handled entirely separately in // obf
 * a browser than the contents of other elements because they represent a // obf
 * different language than HTML. // obf
 * // obf
 * For these elements the Tag Processor treats the entire sequence as one, // obf
 * from the opening tag, including its contents, through its closing tag. // obf
 * This means that the it's not possible to match the closing tag for a // obf
 * SCRIPT element unless it's unexpected; the Tag Processor already matched // obf
 * it when it found the opening tag. // obf
 * // obf
 * The inner contents of these elements are that element's _modifiable text_. // obf
 * // obf
 * The special elements are: // obf
 *  - `SCRIPT` whose contents are treated as raw plaintext but supports a legacy // obf
 *    style of including JavaScript inside of HTML comments to avoid accidentally // obf
 *    closing the SCRIPT from inside a JavaScript string. E.g. `console.log( '</script>' )`. // obf
 *  - `TITLE` and `TEXTAREA` whose contents are treated as plaintext and then any // obf
 *    character references are decoded. E.g. `1 &lt; 2 < 3` becomes `1 < 2 < 3`. // obf
 *  - `IFRAME`, `NOSCRIPT`, `NOEMBED`, `NOFRAME`, `STYLE` whose contents are treated as // obf
 *    raw plaintext and left as-is. E.g. `1 &lt; 2 < 3` remains `1 &lt; 2 < 3`. // obf
 * // obf
 * #### Other tokens with modifiable text. // obf
 * // obf
 * There are also non-elements which are void/self-closing in nature and contain // obf
 * modifiable text that is part of that individual syntax token itself. // obf
 * // obf
 *  - `#text` nodes, whose entire token _is_ the modifiable text. // obf
 *  - HTML comments and tokens that become comments due to some syntax error. The // obf
 *    text for these tokens is the portion of the comment inside of the syntax. // obf
 *    E.g. for `<!-- comment -->` the text is `" comment "` (note the spaces are included). // obf
 *  - `CDATA` sections, whose text is the content inside of the section itself. E.g. for // obf
 *    `<![CDATA[some content]]>` the text is `"some content"` (with restrictions [1]). // obf
 *  - "Funky comments," which are a special case of invalid closing tags whose name is // obf
 *    invalid. The text for these nodes is the text that a browser would transform into // obf
 *    an HTML comment when parsing. E.g. for `</%post_author>` the text is `%post_author`. // obf
 *  - `DOCTYPE` declarations like `<DOCTYPE html>` which have no closing tag. // obf
 *  - XML Processing instruction nodes like `<?wp __( "Like" ); ?>` (with restrictions [2]). // obf
 *  - The empty end tag `</>` which is ignored in the browser and DOM. // obf
 * // obf
 * [1]: There are no CDATA sections in HTML. When encountering `<![CDATA[`, everything // obf
 *      until the next `>` becomes a bogus HTML comment, meaning there can be no CDATA // obf
 *      section in an HTML document containing `>`. The Tag Processor will first find // obf
 *      all valid and bogus HTML comments, and then if the comment _would_ have been a // obf
 *      CDATA section _were they to exist_, it will indicate this as the type of comment. // obf
 * // obf
 * [2]: XML allows a broader range of characters in a processing instruction's target name // obf
 *      and disallows "xml" as a name, since it's special. The Tag Processor only recognizes // obf
 *      target names with an ASCII-representable subset of characters. It also exhibits the // obf
 *      same constraint as with CDATA sections, in that `>` cannot exist within the token // obf
 *      since Processing Instructions do no exist within HTML and their syntax transforms // obf
 *      into a bogus comment in the DOM. // obf
 * // obf
 * ## Design and limitations // obf
 * // obf
 * The Tag Processor is designed to linearly scan HTML documents and tokenize // obf
 * HTML tags and their attributes. It's designed to do this as efficiently as // obf
 * possible without compromising parsing integrity. Therefore it will be // obf
 * slower than some methods of modifying HTML, such as those incorporating // obf
 * over-simplified PCRE patterns, but will not introduce the defects and // obf
 * failures that those methods bring in, which lead to broken page renders // obf
 * and often to security vulnerabilities. On the other hand, it will be faster // obf
 * than full-blown HTML parsers such as DOMDocument and use considerably // obf
 * less memory. It requires a negligible memory overhead, enough to consider // obf
 * it a zero-overhead system. // obf
 * // obf
 * The performance characteristics are maintained by avoiding tree construction // obf
 * and semantic cleanups which are specified in HTML5. Because of this, for // obf
 * example, it's not possible for the Tag Processor to associate any given // obf
 * opening tag with its corresponding closing tag, or to return the inner markup // obf
 * inside an element. Systems may be built on top of the Tag Processor to do // obf
 * this, but the Tag Processor is and should be constrained so it can remain an // obf
 * efficient, low-level, and reliable HTML scanner. // obf
 * // obf
 * The Tag Processor's design incorporates a "garbage-in-garbage-out" philosophy. // obf
 * HTML5 specifies that certain invalid content be transformed into different forms // obf
 * for display, such as removing null bytes from an input document and replacing // obf
 * invalid characters with the Unicode replacement character `U+FFFD` (visually "�"). // obf
 * Where errors or transformations exist within the HTML5 specification, the Tag Processor // obf
 * leaves those invalid inputs untouched, passing them through to the final browser // obf
 * to handle. While this implies that certain operations will be non-spec-compliant, // obf
 * such as reading the value of an attribute with invalid content, it also preserves a // obf
 * simplicity and efficiency for handling those error cases. // obf
 * // obf
 * Most operations within the Tag Processor are designed to minimize the difference // obf
 * between an input and output document for any given change. For example, the // obf
 * `add_class` and `remove_class` methods preserve whitespace and the class ordering // obf
 * within the `class` attribute; and when encountering tags with duplicated attributes, // obf
 * the Tag Processor will leave those invalid duplicate attributes where they are but // obf
 * update the proper attribute which the browser will read for parsing its value. An // obf
 * exception to this rule is that all attribute updates store their values as // obf
 * double-quoted strings, meaning that attributes on input with single-quoted or // obf
 * unquoted values will appear in the output with double-quotes. // obf
 * // obf
 * ### Scripting Flag // obf
 * // obf
 * The Tag Processor parses HTML with the "scripting flag" disabled. This means // obf
 * that it doesn't run any scripts while parsing the page. In a browser with // obf
 * JavaScript enabled, for example, the script can change the parse of the // obf
 * document as it loads. On the server, however, evaluating JavaScript is not // obf
 * only impractical, but also unwanted. // obf
 * // obf
 * Practically this means that the Tag Processor will descend into NOSCRIPT // obf
 * elements and process its child tags. Were the scripting flag enabled, such // obf
 * as in a typical browser, the contents of NOSCRIPT are skipped entirely. // obf
 * // obf
 * This allows the HTML API to process the content that will be presented in // obf
 * a browser when scripting is disabled, but it offers a different view of a // obf
 * page than most browser sessions will experience. E.g. the tags inside the // obf
 * NOSCRIPT disappear. // obf
 * // obf
 * ### Text Encoding // obf
 * // obf
 * The Tag Processor assumes that the input HTML document is encoded with a // obf
 * text encoding compatible with 7-bit ASCII's '<', '>', '&', ';', '/', '=', // obf
 * "'", '"', 'a' - 'z', 'A' - 'Z', and the whitespace characters ' ', tab, // obf
 * carriage-return, newline, and form-feed. // obf
 * // obf
 * In practice, this includes almost every single-byte encoding as well as // obf
 * UTF-8. Notably, however, it does not include UTF-16. If providing input // obf
 * that's incompatible, then convert the encoding beforehand. // obf
 * // obf
 * @since 6.2.0 // obf
 * @since 6.2.1 Fix: Support for various invalid comments; attribute updates are case-insensitive. // obf
 * @since 6.3.2 Fix: Skip HTML-like content inside rawtext elements such as STYLE. // obf
 * @since 6.5.0 Pauses processor when input ends in an incomplete syntax token. // obf
 *              Introduces "special" elements which act like void elements, e.g. TITLE, STYLE. // obf
 *              Allows scanning through all tokens and processing modifiable text, where applicable. // obf
 */ // obf
class WP_HTML_Tag_Processor { // obf
	/** // obf
	 * The maximum number of bookmarks allowed to exist at // obf
	 * any given time. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var int // obf
	 * // obf
	 * @see WP_HTML_Tag_Processor::set_bookmark() // obf
	 */ // obf
	const MAX_BOOKMARKS = 10; // obf

	/** // obf
	 * Maximum number of times seek() can be called. // obf
	 * Prevents accidental infinite loops. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var int // obf
	 * // obf
	 * @see WP_HTML_Tag_Processor::seek() // obf
	 */ // obf
	const MAX_SEEK_OPS = 1000; // obf

	/** // obf
	 * The HTML document to parse. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_xjzff; // obf

	/** // obf
	 * The last query passed to next_tag(). // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var array|null // obf
	 */ // obf
	private $v_kjtec; // obf

	/** // obf
	 * The tag name this processor currently scans for. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var string|null // obf
	 */ // obf
	private $v_owcvt; // obf

	/** // obf
	 * The CSS class name this processor currently scans for. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var string|null // obf
	 */ // obf
	private $v_ukinj; // obf

	/** // obf
	 * The match offset this processor currently scans for. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var int|null // obf
	 */ // obf
	private $v_vyfyy; // obf

	/** // obf
	 * Whether to visit tag closers, e.g. </div>, when walking an input document. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_crpcm; // obf

	/** // obf
	 * Specifies mode of operation of the parser at any given time. // obf
	 * // obf
	 * | State           | Meaning                                                              | // obf
	 * | ----------------|----------------------------------------------------------------------| // obf
	 * | *Ready*         | The parser is ready to run.                                          | // obf
	 * | *Complete*      | There is nothing left to parse.                                      | // obf
	 * | *Incomplete*    | The HTML ended in the middle of a token; nothing more can be parsed. | // obf
	 * | *Matched tag*   | Found an HTML tag; it's possible to modify its attributes.           | // obf
	 * | *Text node*     | Found a #text node; this is plaintext and modifiable.                | // obf
	 * | *CDATA node*    | Found a CDATA section; this is modifiable.                           | // obf
	 * | *Comment*       | Found a comment or bogus comment; this is modifiable.                | // obf
	 * | *Presumptuous*  | Found an empty tag closer: `</>`.                                    | // obf
	 * | *Funky comment* | Found a tag closer with an invalid tag name; this is modifiable.     | // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @see WP_HTML_Tag_Processor::STATE_READY // obf
	 * @see WP_HTML_Tag_Processor::STATE_COMPLETE // obf
	 * @see WP_HTML_Tag_Processor::STATE_INCOMPLETE_INPUT // obf
	 * @see WP_HTML_Tag_Processor::STATE_MATCHED_TAG // obf
	 * @see WP_HTML_Tag_Processor::STATE_TEXT_NODE // obf
	 * @see WP_HTML_Tag_Processor::STATE_CDATA_NODE // obf
	 * @see WP_HTML_Tag_Processor::STATE_COMMENT // obf
	 * @see WP_HTML_Tag_Processor::STATE_DOCTYPE // obf
	 * @see WP_HTML_Tag_Processor::STATE_PRESUMPTUOUS_TAG // obf
	 * @see WP_HTML_Tag_Processor::STATE_FUNKY_COMMENT // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_wdaan = self::STATE_READY; // obf

	/** // obf
	 * Indicates if the document is in quirks mode or no-quirks mode. // obf
	 * // obf
	 *  Impact on HTML parsing: // obf
	 * // obf
	 *   - In `NO_QUIRKS_MODE` (also known as "standard mode"): // obf
	 *       - CSS class and ID selectors match byte-for-byte (case-sensitively). // obf
	 *       - A TABLE start tag `<table>` implicitly closes any open `P` element. // obf
	 * // obf
	 *   - In `QUIRKS_MODE`: // obf
	 *       - CSS class and ID selectors match match in an ASCII case-insensitive manner. // obf
	 *       - A TABLE start tag `<table>` opens a `TABLE` element as a child of a `P` // obf
	 *         element if one is open. // obf
	 * // obf
	 * Quirks and no-quirks mode are thus mostly about styling, but have an impact when // obf
	 * tables are found inside paragraph elements. // obf
	 * // obf
	 * @see self::QUIRKS_MODE // obf
	 * @see self::NO_QUIRKS_MODE // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_vchhw = self::NO_QUIRKS_MODE; // obf

	/** // obf
	 * Indicates whether the parser is inside foreign content, // obf
	 * e.g. inside an SVG or MathML element. // obf
	 * // obf
	 * One of 'html', 'svg', or 'math'. // obf
	 * // obf
	 * Several parsing rules change based on whether the parser // obf
	 * is inside foreign content, including whether CDATA sections // obf
	 * are allowed and whether a self-closing flag indicates that // obf
	 * an element has no content. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_aemsp = 'html'; // obf

	/** // obf
	 * What kind of syntax token became an HTML comment. // obf
	 * // obf
	 * Since there are many ways in which HTML syntax can create an HTML comment, // obf
	 * this indicates which of those caused it. This allows the Tag Processor to // obf
	 * represent more from the original input document than would appear in the DOM. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_jaegj = null; // obf

	/** // obf
	 * What kind of text the matched text node represents, if it was subdivided. // obf
	 * // obf
	 * @see self::TEXT_IS_NULL_SEQUENCE // obf
	 * @see self::TEXT_IS_WHITESPACE // obf
	 * @see self::TEXT_IS_GENERIC // obf
	 * @see self::subdivide_text_appropriately // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_szvnv = self::TEXT_IS_GENERIC; // obf

	/** // obf
	 * How many bytes from the original HTML document have been read and parsed. // obf
	 * // obf
	 * This value points to the latest byte offset in the input document which // obf
	 * has been already parsed. It is the internal cursor for the Tag Processor // obf
	 * and updates while scanning through the HTML tokens. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var int // obf
	 */ // obf
	private $v_mwdut = 0; // obf

	/** // obf
	 * Byte offset in input document where current token starts. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <div id="test">... // obf
	 *     01234 // obf
	 *     - token starts at 0 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var int|null // obf
	 */ // obf
	private $v_bifmt; // obf

	/** // obf
	 * Byte length of current token. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <div id="test">... // obf
	 *     012345678901234 // obf
	 *     - token length is 14 - 0 = 14 // obf
	 * // obf
	 *     a <!-- comment --> is a token. // obf
	 *     0123456789 123456789 123456789 // obf
	 *     - token length is 17 - 2 = 15 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var int|null // obf
	 */ // obf
	private $v_mlwyr; // obf

	/** // obf
	 * Byte offset in input document where current tag name starts. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <div id="test">... // obf
	 *     01234 // obf
	 *      - tag name starts at 1 // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var int|null // obf
	 */ // obf
	private $v_nhole; // obf

	/** // obf
	 * Byte length of current tag name. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <div id="test">... // obf
	 *     01234 // obf
	 *      --- tag name length is 3 // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var int|null // obf
	 */ // obf
	private $v_kpiyr; // obf

	/** // obf
	 * Byte offset into input document where current modifiable text starts. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_rjzqt; // obf

	/** // obf
	 * Byte length of modifiable text. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_jhqcc; // obf

	/** // obf
	 * Whether the current tag is an opening tag, e.g. <div>, or a closing tag, e.g. </div>. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_tjofj; // obf

	/** // obf
	 * Lazily-built index of attributes found within an HTML tag, keyed by the attribute name. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     // Supposing the parser is working through this content // obf
	 *     // and stops after recognizing the `id` attribute. // obf
	 *     // <div id="test-4" class=outline title="data:text/plain;base64=asdk3nk1j3fo8"> // obf
	 *     //                 ^ parsing will continue from this point. // obf
	 *     $v_wrtvs->attributes = array( // obf
	 *         'id' => new WP_HTML_Attribute_Token( 'id', 9, 6, 5, 11, false ) // obf
	 *     ); // obf
	 * // obf
	 *     // When picking up parsing again, or when asking to find the // obf
	 *     // `class` attribute we will continue and add to this array. // obf
	 *     $v_wrtvs->attributes = array( // obf
	 *         'id'    => new WP_HTML_Attribute_Token( 'id', 9, 6, 5, 11, false ), // obf
	 *         'class' => new WP_HTML_Attribute_Token( 'class', 23, 7, 17, 13, false ) // obf
	 *     ); // obf
	 * // obf
	 *     // Note that only the `class` attribute value is stored in the index. // obf
	 *     // That's because it is the only value used by this class at the moment. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var WP_HTML_Attribute_Token[] // obf
	 */ // obf
	private $v_cqnga = array(); // obf

	/** // obf
	 * Tracks spans of duplicate attributes on a given tag, used for removing // obf
	 * all copies of an attribute when calling `remove_attribute()`. // obf
	 * // obf
	 * @since 6.3.2 // obf
	 * // obf
	 * @var (WP_HTML_Span[])[]|null // obf
	 */ // obf
	private $v_ivrsl = null; // obf

	/** // obf
	 * Which class names to add or remove from a tag. // obf
	 * // obf
	 * These are tracked separately from attribute updates because they are // obf
	 * semantically distinct, whereas this interface exists for the common // obf
	 * case of adding and removing class names while other attributes are // obf
	 * generally modified as with DOM `setAttribute` calls. // obf
	 * // obf
	 * When modifying an HTML document these will eventually be collapsed // obf
	 * into a single `set_attribute( 'class', $v_oqgwa )` call. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     // Add the `wp-block-group` class, remove the `wp-group` class. // obf
	 *     $v_sjenr = array( // obf
	 *         // Indexed by a comparable class name. // obf
	 *         'wp-block-group' => WP_HTML_Tag_Processor::ADD_CLASS, // obf
	 *         'wp-group'       => WP_HTML_Tag_Processor::REMOVE_CLASS // obf
	 *     ); // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var bool[] // obf
	 */ // obf
	private $v_sjenr = array(); // obf

	/** // obf
	 * Tracks a semantic location in the original HTML which // obf
	 * shifts with updates as they are applied to the document. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var WP_HTML_Span[] // obf
	 */ // obf
	protected $v_hxrqs = array(); // obf

	const ADD_CLASS    = true; // obf
	const REMOVE_CLASS = false; // obf
	const SKIP_CLASS   = null; // obf

	/** // obf
	 * Lexical replacements to apply to input HTML document. // obf
	 * // obf
	 * "Lexical" in this class refers to the part of this class which // obf
	 * operates on pure text _as text_ and not as HTML. There's a line // obf
	 * between the public interface, with HTML-semantic methods like // obf
	 * `set_attribute` and `add_class`, and an internal state that tracks // obf
	 * text offsets in the input document. // obf
	 * // obf
	 * When higher-level HTML methods are called, those have to transform their // obf
	 * operations (such as setting an attribute's value) into text diffing // obf
	 * operations (such as replacing the sub-string from indices A to B with // obf
	 * some given new string). These text-diffing operations are the lexical // obf
	 * updates. // obf
	 * // obf
	 * As new higher-level methods are added they need to collapse their // obf
	 * operations into these lower-level lexical updates since that's the // obf
	 * Tag Processor's internal language of change. Any code which creates // obf
	 * these lexical updates must ensure that they do not cross HTML syntax // obf
	 * boundaries, however, so these should never be exposed outside of this // obf
	 * class or any classes which intentionally expand its functionality. // obf
	 * // obf
	 * These are enqueued while editing the document instead of being immediately // obf
	 * applied to avoid processing overhead, string allocations, and string // obf
	 * copies when applying many updates to a single document. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     // Replace an attribute stored with a new value, indices // obf
	 *     // sourced from the lazily-parsed HTML recognizer. // obf
	 *     $v_rjnxl  = $v_cqnga['src']->start; // obf
	 *     $v_oyirs = $v_cqnga['src']->length; // obf
	 *     $v_pgwdr[] = new WP_HTML_Text_Replacement( $v_rjnxl, $v_oyirs, $v_anmim ); // obf
	 * // obf
	 *     // Correspondingly, something like this will appear in this array. // obf
	 *     $v_fvuic = array( // obf
	 *         WP_HTML_Text_Replacement( 14, 28, 'https://my-site.my-domain/wp-content/uploads/2014/08/kittens.jpg' ) // obf
	 *     ); // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var WP_HTML_Text_Replacement[] // obf
	 */ // obf
	protected $v_fvuic = array(); // obf

	/** // obf
	 * Tracks and limits `seek()` calls to prevent accidental infinite loops. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @var int // obf
	 * // obf
	 * @see WP_HTML_Tag_Processor::seek() // obf
	 */ // obf
	protected $v_oifld = 0; // obf

	/** // obf
	 * Whether the parser should skip over an immediately-following linefeed // obf
	 * character, as is the case with LISTING, PRE, and TEXTAREA. // obf
	 * // obf
	 * > If the next token is a U+000A LINE FEED (LF) character token, then // obf
	 * > ignore that token and move on to the next one. (Newlines at the start // obf
	 * > of [these] elements are ignored as an authoring convenience.) // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var int|null // obf
	 */ // obf
	private $v_tgsjy = null; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_xjzff HTML to process. // obf
	 */ // obf
	public function __construct( $v_xjzff ) { // obf
		$v_wrtvs->html = $v_xjzff; // obf
	} // obf

	/** // obf
	 * Switches parsing mode into a new namespace, such as when // obf
	 * encountering an SVG tag and entering foreign content. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_tdbgc One of 'html', 'svg', or 'math' indicating into what // obf
	 *                              namespace the next tokens will be processed. // obf
	 * @return bool Whether the namespace was valid and changed. // obf
	 */ // obf
	public function change_parsing_namespace( string $v_tdbgc ): bool { // obf
		if ( ! in_array( $v_tdbgc, array( 'html', 'math', 'svg' ), true ) ) { // obf
			return false; // obf
		} // obf

		$v_wrtvs->parsing_namespace = $v_tdbgc; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Finds the next tag matching the $v_naehj. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.5.0 No longer processes incomplete tokens at end of document; pauses the processor at start of token. // obf
	 * // obf
	 * @param array|string|null $v_naehj { // obf
	 *     Optional. Which tag name to find, having which class, etc. Default is to find any tag. // obf
	 * // obf
	 *     @type string|null $v_qttln     Which tag to find, or `null` for "any tag." // obf
	 *     @type int|null    $v_ltgnk Find the Nth tag matching all search criteria. // obf
	 *                                     1 for "first" tag, 3 for "third," etc. // obf
	 *                                     Defaults to first tag. // obf
	 *     @type string|null $v_lwzxh   Tag must contain this whole class name to match. // obf
	 *     @type string|null $v_uqovj  "visit" or "skip": whether to stop on tag closers, e.g. </div>. // obf
	 * } // obf
	 * @return bool Whether a tag was matched. // obf
	 */ // obf
	public function next_tag( $v_naehj = null ): bool { // obf
		$v_wrtvs->parse_query( $v_naehj ); // obf
		$v_qzpul = 0; // obf

		do { // obf
			if ( false === $v_wrtvs->next_token() ) { // obf
				return false; // obf
			} // obf

			if ( self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state ) { // obf
				continue; // obf
			} // obf

			if ( $v_wrtvs->matches() ) { // obf
				++$v_qzpul; // obf
			} // obf
		} while ( $v_qzpul < $v_wrtvs->sought_match_offset ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Finds the next token in the HTML document. // obf
	 * // obf
	 * An HTML document can be viewed as a stream of tokens, // obf
	 * where tokens are things like HTML tags, HTML comments, // obf
	 * text nodes, etc. This method finds the next token in // obf
	 * the HTML document and returns whether it found one. // obf
	 * // obf
	 * If it starts parsing a token and reaches the end of the // obf
	 * document then it will seek to the start of the last // obf
	 * token and pause, returning `false` to indicate that it // obf
	 * failed to find a complete token. // obf
	 * // obf
	 * Possible token types, based on the HTML specification: // obf
	 * // obf
	 *  - an HTML tag, whether opening, closing, or void. // obf
	 *  - a text node - the plaintext inside tags. // obf
	 *  - an HTML comment. // obf
	 *  - a DOCTYPE declaration. // obf
	 *  - a processing instruction, e.g. `<?xml version="1.0" ?>`. // obf
	 * // obf
	 * The Tag Processor currently only supports the tag token. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @since 6.7.0 Recognizes CDATA sections within foreign content. // obf
	 * // obf
	 * @return bool Whether a token was parsed. // obf
	 */ // obf
	public function next_token(): bool { // obf
		return $v_wrtvs->base_class_next_token(); // obf
	} // obf

	/** // obf
	 * Internal method which finds the next token in the HTML document. // obf
	 * // obf
	 * This method is a protected internal function which implements the logic for // obf
	 * finding the next token in a document. It exists so that the parser can update // obf
	 * its state without affecting the location of the cursor in the document and // obf
	 * without triggering subclass methods for things like `next_token()`, e.g. when // obf
	 * applying patches before searching for the next token. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @return bool Whether a token was parsed. // obf
	 */ // obf
	private function base_class_next_token(): bool { // obf
		$v_bqzil = $v_wrtvs->bytes_already_parsed; // obf
		$v_wrtvs->after_tag(); // obf

		// Don't proceed if there's nothing more to scan. // obf
		if ( // obf
			self::STATE_COMPLETE === $v_wrtvs->parser_state || // obf
			self::STATE_INCOMPLETE_INPUT === $v_wrtvs->parser_state // obf
		) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * The next step in the parsing loop determines the parsing state; // obf
		 * clear it so that state doesn't linger from the previous step. // obf
		 */ // obf
		$v_wrtvs->parser_state = self::STATE_READY; // obf

		if ( $v_wrtvs->bytes_already_parsed >= strlen( $v_wrtvs->html ) ) { // obf
			$v_wrtvs->parser_state = self::STATE_COMPLETE; // obf
			return false; // obf
		} // obf

		// Find the next tag if it exists. // obf
		if ( false === $v_wrtvs->parse_next_tag() ) { // obf
			if ( self::STATE_INCOMPLETE_INPUT === $v_wrtvs->parser_state ) { // obf
				$v_wrtvs->bytes_already_parsed = $v_bqzil; // obf
			} // obf

			return false; // obf
		} // obf

		/* // obf
		 * For legacy reasons the rest of this function handles tags and their // obf
		 * attributes. If the processor has reached the end of the document // obf
		 * or if it matched any other token then it should return here to avoid // obf
		 * attempting to process tag-specific syntax. // obf
		 */ // obf
		if ( // obf
			self::STATE_INCOMPLETE_INPUT !== $v_wrtvs->parser_state && // obf
			self::STATE_COMPLETE !== $v_wrtvs->parser_state && // obf
			self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state // obf
		) { // obf
			return true; // obf
		} // obf

		// Parse all of its attributes. // obf
		while ( $v_wrtvs->parse_next_attribute() ) { // obf
			continue; // obf
		} // obf

		// Ensure that the tag closes before the end of the document. // obf
		if ( // obf
			self::STATE_INCOMPLETE_INPUT === $v_wrtvs->parser_state || // obf
			$v_wrtvs->bytes_already_parsed >= strlen( $v_wrtvs->html ) // obf
		) { // obf
			// Does this appropriately clear state (parsed attributes)? // obf
			$v_wrtvs->parser_state         = self::STATE_INCOMPLETE_INPUT; // obf
			$v_wrtvs->bytes_already_parsed = $v_bqzil; // obf

			return false; // obf
		} // obf

		$v_ayjcz = strpos( $v_wrtvs->html, '>', $v_wrtvs->bytes_already_parsed ); // obf
		if ( false === $v_ayjcz ) { // obf
			$v_wrtvs->parser_state         = self::STATE_INCOMPLETE_INPUT; // obf
			$v_wrtvs->bytes_already_parsed = $v_bqzil; // obf

			return false; // obf
		} // obf
		$v_wrtvs->parser_state         = self::STATE_MATCHED_TAG; // obf
		$v_wrtvs->bytes_already_parsed = $v_ayjcz + 1; // obf
		$v_wrtvs->token_length         = $v_wrtvs->bytes_already_parsed - $v_wrtvs->token_starts_at; // obf

		/* // obf
		 * Certain tags require additional processing. The first-letter pre-check // obf
		 * avoids unnecessary string allocation when comparing the tag names. // obf
		 * // obf
		 *  - IFRAME // obf
		 *  - LISTING (deprecated) // obf
		 *  - NOEMBED (deprecated) // obf
		 *  - NOFRAMES (deprecated) // obf
		 *  - PRE // obf
		 *  - SCRIPT // obf
		 *  - STYLE // obf
		 *  - TEXTAREA // obf
		 *  - TITLE // obf
		 *  - XMP (deprecated) // obf
		 */ // obf
		if ( // obf
			$v_wrtvs->is_closing_tag || // obf
			'html' !== $v_wrtvs->parsing_namespace || // obf
			1 !== strspn( $v_wrtvs->html, 'iIlLnNpPsStTxX', $v_wrtvs->tag_name_starts_at, 1 ) // obf
		) { // obf
			return true; // obf
		} // obf

		$v_qttln = $v_wrtvs->get_tag(); // obf

		/* // obf
		 * For LISTING, PRE, and TEXTAREA, the first linefeed of an immediately-following // obf
		 * text node is ignored as an authoring convenience. // obf
		 * // obf
		 * @see static::skip_newline_at // obf
		 */ // obf
		if ( 'LISTING' === $v_qttln || 'PRE' === $v_qttln ) { // obf
			$v_wrtvs->skip_newline_at = $v_wrtvs->bytes_already_parsed; // obf
			return true; // obf
		} // obf

		/* // obf
		 * There are certain elements whose children are not DATA but are instead // obf
		 * RCDATA or RAWTEXT. These cannot contain other elements, and the contents // obf
		 * are parsed as plaintext, with character references decoded in RCDATA but // obf
		 * not in RAWTEXT. // obf
		 * // obf
		 * These elements are described here as "self-contained" or special atomic // obf
		 * elements whose end tag is consumed with the opening tag, and they will // obf
		 * contain modifiable text inside of them. // obf
		 * // obf
		 * Preserve the opening tag pointers, as these will be overwritten // obf
		 * when finding the closing tag. They will be reset after finding // obf
		 * the closing to tag to point to the opening of the special atomic // obf
		 * tag sequence. // obf
		 */ // obf
		$v_nhole   = $v_wrtvs->tag_name_starts_at; // obf
		$v_kpiyr      = $v_wrtvs->tag_name_length; // obf
		$v_ayjcz          = $v_wrtvs->token_starts_at + $v_wrtvs->token_length; // obf
		$v_cqnga           = $v_wrtvs->attributes; // obf
		$v_ivrsl = $v_wrtvs->duplicate_attributes; // obf

		// Find the closing tag if necessary. // obf
		switch ( $v_qttln ) { // obf
			case 'SCRIPT': // obf
				$v_wzmgw = $v_wrtvs->skip_script_data(); // obf
				break; // obf

			case 'TEXTAREA': // obf
			case 'TITLE': // obf
				$v_wzmgw = $v_wrtvs->skip_rcdata( $v_qttln ); // obf
				break; // obf

			/* // obf
			 * In the browser this list would include the NOSCRIPT element, // obf
			 * but the Tag Processor is an environment with the scripting // obf
			 * flag disabled, meaning that it needs to descend into the // obf
			 * NOSCRIPT element to be able to properly process what will be // obf
			 * sent to a browser. // obf
			 * // obf
			 * Note that this rule makes HTML5 syntax incompatible with XML, // obf
			 * because the parsing of this token depends on client application. // obf
			 * The NOSCRIPT element cannot be represented in the XHTML syntax. // obf
			 */ // obf
			case 'IFRAME': // obf
			case 'NOEMBED': // obf
			case 'NOFRAMES': // obf
			case 'STYLE': // obf
			case 'XMP': // obf
				$v_wzmgw = $v_wrtvs->skip_rawtext( $v_qttln ); // obf
				break; // obf

			// No other tags should be treated in their entirety here. // obf
			default: // obf
				return true; // obf
		} // obf

		if ( ! $v_wzmgw ) { // obf
			$v_wrtvs->parser_state         = self::STATE_INCOMPLETE_INPUT; // obf
			$v_wrtvs->bytes_already_parsed = $v_bqzil; // obf
			return false; // obf
		} // obf

		/* // obf
		 * The values here look like they reference the opening tag but they reference // obf
		 * the closing tag instead. This is why the opening tag values were stored // obf
		 * above in a variable. It reads confusingly here, but that's because the // obf
		 * functions that skip the contents have moved all the internal cursors past // obf
		 * the inner content of the tag. // obf
		 */ // obf
		$v_wrtvs->token_starts_at      = $v_bqzil; // obf
		$v_wrtvs->token_length         = $v_wrtvs->bytes_already_parsed - $v_wrtvs->token_starts_at; // obf
		$v_wrtvs->text_starts_at       = $v_ayjcz; // obf
		$v_wrtvs->text_length          = $v_wrtvs->tag_name_starts_at - $v_wrtvs->text_starts_at; // obf
		$v_wrtvs->tag_name_starts_at   = $v_nhole; // obf
		$v_wrtvs->tag_name_length      = $v_kpiyr; // obf
		$v_wrtvs->attributes           = $v_cqnga; // obf
		$v_wrtvs->duplicate_attributes = $v_ivrsl; // obf

		return true; // obf
	} // obf

	/** // obf
	 * Whether the processor paused because the input HTML document ended // obf
	 * in the middle of a syntax element, such as in the middle of a tag. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_uhnxn = new WP_HTML_Tag_Processor( '<input type="text" value="Th' ); // obf
	 *     false      === $v_uhnxn->get_next_tag(); // obf
	 *     true       === $v_uhnxn->paused_at_incomplete_token(); // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return bool Whether the parse paused at the start of an incomplete token. // obf
	 */ // obf
	public function paused_at_incomplete_token(): bool { // obf
		return self::STATE_INCOMPLETE_INPUT === $v_wrtvs->parser_state; // obf
	} // obf

	/** // obf
	 * Generator for a foreach loop to step through each class name for the matched tag. // obf
	 * // obf
	 * This generator function is designed to be used inside a "foreach" loop. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_csxcx = new WP_HTML_Tag_Processor( "<div class='free &lt;egg&lt;\tlang-en'>" ); // obf
	 *     $v_csxcx->next_tag(); // obf
	 *     foreach ( $v_csxcx->class_list() as $v_lwzxh ) { // obf
	 *         echo "{$v_lwzxh} "; // obf
	 *     } // obf
	 *     // Outputs: "free <egg> lang-en " // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function class_list() { // obf
		if ( self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state ) { // obf
			return; // obf
		} // obf

		/** @var string $v_axbmo contains the string value of the class attribute, with character references decoded. */ // obf
		$v_axbmo = $v_wrtvs->get_attribute( 'class' ); // obf

		if ( ! is_string( $v_axbmo ) ) { // obf
			return; // obf
		} // obf

		$v_buijw = array(); // obf

		$v_nkdqq = self::QUIRKS_MODE === $v_wrtvs->compat_mode; // obf

		$v_fpleq = 0; // obf
		while ( $v_fpleq < strlen( $v_axbmo ) ) { // obf
			// Skip past any initial boundary characters. // obf
			$v_fpleq += strspn( $v_axbmo, " \t\f\r\n", $v_fpleq ); // obf
			if ( $v_fpleq >= strlen( $v_axbmo ) ) { // obf
				return; // obf
			} // obf

			// Find the byte length until the next boundary. // obf
			$v_oyirs = strcspn( $v_axbmo, " \t\f\r\n", $v_fpleq ); // obf
			if ( 0 === $v_oyirs ) { // obf
				return; // obf
			} // obf

			$v_hmdon = str_replace( "\x00", "\u{FFFD}", substr( $v_axbmo, $v_fpleq, $v_oyirs ) ); // obf
			if ( $v_nkdqq ) { // obf
				$v_hmdon = strtolower( $v_hmdon ); // obf
			} // obf
			$v_fpleq += $v_oyirs; // obf

			/* // obf
			 * It's expected that the number of class names for a given tag is relatively small. // obf
			 * Given this, it is probably faster overall to scan an array for a value rather // obf
			 * than to use the class name as a key and check if it's a key of $v_buijw. // obf
			 */ // obf
			if ( in_array( $v_hmdon, $v_buijw, true ) ) { // obf
				continue; // obf
			} // obf

			$v_buijw[] = $v_hmdon; // obf
			yield $v_hmdon; // obf
		} // obf
	} // obf


	/** // obf
	 * Returns if a matched tag contains the given ASCII case-insensitive class name. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_lbkvw Look for this CSS class name, ASCII case-insensitive. // obf
	 * @return bool|null Whether the matched tag contains the given class name, or null if not matched. // obf
	 */ // obf
	public function has_class( $v_lbkvw ): ?bool { // obf
		if ( self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state ) { // obf
			return null; // obf
		} // obf

		$v_nzabd = self::QUIRKS_MODE === $v_wrtvs->compat_mode; // obf

		$v_pnryh = strlen( $v_lbkvw ); // obf
		foreach ( $v_wrtvs->class_list() as $v_lwzxh ) { // obf
			if ( // obf
				strlen( $v_lwzxh ) === $v_pnryh && // obf
				0 === substr_compare( $v_lwzxh, $v_lbkvw, 0, strlen( $v_lbkvw ), $v_nzabd ) // obf
			) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf


	/** // obf
	 * Sets a bookmark in the HTML document. // obf
	 * // obf
	 * Bookmarks represent specific places or tokens in the HTML // obf
	 * document, such as a tag opener or closer. When applying // obf
	 * edits to a document, such as setting an attribute, the // obf
	 * text offsets of that token may shift; the bookmark is // obf
	 * kept updated with those shifts and remains stable unless // obf
	 * the entire span of text in which the token sits is removed. // obf
	 * // obf
	 * Release bookmarks when they are no longer needed. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <main><h2>Surprising fact you may not know!</h2></main> // obf
	 *           ^  ^ // obf
	 *            \-|-- this `H2` opener bookmark tracks the token // obf
	 * // obf
	 *     <main class="clickbait"><h2>Surprising fact you may no… // obf
	 *                             ^  ^ // obf
	 *                              \-|-- it shifts with edits // obf
	 * // obf
	 * Bookmarks provide the ability to seek to a previously-scanned // obf
	 * place in the HTML document. This avoids the need to re-scan // obf
	 * the entire document. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <ul><li>One</li><li>Two</li><li>Three</li></ul> // obf
	 *                                 ^^^^ // obf
	 *                                 want to note this last item // obf
	 * // obf
	 *     $v_csxcx = new WP_HTML_Tag_Processor( $v_xjzff ); // obf
	 *     $v_tvcio = false; // obf
	 *     while ( $v_csxcx->next_tag( array( 'tag_closers' => $v_tvcio ? 'visit' : 'skip' ) ) ) { // obf
	 *         if ( 'UL' === $v_csxcx->get_tag() ) { // obf
	 *             if ( $v_csxcx->is_tag_closer() ) { // obf
	 *                 $v_tvcio = false; // obf
	 *                 $v_csxcx->set_bookmark( 'resume' ); // obf
	 *                 if ( $v_csxcx->seek( 'last-li' ) ) { // obf
	 *                     $v_csxcx->add_class( 'last-li' ); // obf
	 *                 } // obf
	 *                 $v_csxcx->seek( 'resume' ); // obf
	 *                 $v_csxcx->release_bookmark( 'last-li' ); // obf
	 *                 $v_csxcx->release_bookmark( 'resume' ); // obf
	 *             } else { // obf
	 *                 $v_tvcio = true; // obf
	 *             } // obf
	 *         } // obf
	 * // obf
	 *         if ( 'LI' === $v_csxcx->get_tag() ) { // obf
	 *             $v_csxcx->set_bookmark( 'last-li' ); // obf
	 *         } // obf
	 *     } // obf
	 * // obf
	 * Bookmarks intentionally hide the internal string offsets // obf
	 * to which they refer. They are maintained internally as // obf
	 * updates are applied to the HTML document and therefore // obf
	 * retain their "position" - the location to which they // obf
	 * originally pointed. The inability to use bookmarks with // obf
	 * functions like `substr` is therefore intentional to guard // obf
	 * against accidentally breaking the HTML. // obf
	 * // obf
	 * Because bookmarks allocate memory and require processing // obf
	 * for every applied update, they are limited and require // obf
	 * a name. They should not be created with programmatically-made // obf
	 * names, such as "li_{$v_wpexh}" with some loop. As a general // obf
	 * rule they should only be created with string-literal names // obf
	 * like "start-of-section" or "last-paragraph". // obf
	 * // obf
	 * Bookmarks are a powerful tool to enable complicated behavior. // obf
	 * Consider double-checking that you need this tool if you are // obf
	 * reaching for it, as inappropriate use could lead to broken // obf
	 * HTML structure or unwanted processing overhead. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_hmdon Identifies this particular bookmark. // obf
	 * @return bool Whether the bookmark was successfully created. // obf
	 */ // obf
	public function set_bookmark( $v_hmdon ): bool { // obf
		// It only makes sense to set a bookmark if the parser has paused on a concrete token. // obf
		if ( // obf
			self::STATE_COMPLETE === $v_wrtvs->parser_state || // obf
			self::STATE_INCOMPLETE_INPUT === $v_wrtvs->parser_state // obf
		) { // obf
			return false; // obf
		} // obf

		if ( ! array_key_exists( $v_hmdon, $v_wrtvs->bookmarks ) && count( $v_wrtvs->bookmarks ) >= static::MAX_BOOKMARKS ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Too many bookmarks: cannot create any more.' ), // obf
				'6.2.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_wrtvs->bookmarks[ $v_hmdon ] = new WP_HTML_Span( $v_wrtvs->token_starts_at, $v_wrtvs->token_length ); // obf

		return true; // obf
	} // obf


	/** // obf
	 * Removes a bookmark that is no longer needed. // obf
	 * // obf
	 * Releasing a bookmark frees up the small // obf
	 * performance overhead it requires. // obf
	 * // obf
	 * @param string $v_hmdon Name of the bookmark to remove. // obf
	 * @return bool Whether the bookmark already existed before removal. // obf
	 */ // obf
	public function release_bookmark( $v_hmdon ): bool { // obf
		if ( ! array_key_exists( $v_hmdon, $v_wrtvs->bookmarks ) ) { // obf
			return false; // obf
		} // obf

		unset( $v_wrtvs->bookmarks[ $v_hmdon ] ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Skips contents of generic rawtext elements. // obf
	 * // obf
	 * @since 6.3.2 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#generic-raw-text-element-parsing-algorithm // obf
	 * // obf
	 * @param string $v_qttln The uppercase tag name which will close the RAWTEXT region. // obf
	 * @return bool Whether an end to the RAWTEXT region was found before the end of the document. // obf
	 */ // obf
	private function skip_rawtext( string $v_qttln ): bool { // obf
		/* // obf
		 * These two functions distinguish themselves on whether character references are // obf
		 * decoded, and since functionality to read the inner markup isn't supported, it's // obf
		 * not necessary to implement these two functions separately. // obf
		 */ // obf
		return $v_wrtvs->skip_rcdata( $v_qttln ); // obf
	} // obf

	/** // obf
	 * Skips contents of RCDATA elements, namely title and textarea tags. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#rcdata-state // obf
	 * // obf
	 * @param string $v_qttln The uppercase tag name which will close the RCDATA region. // obf
	 * @return bool Whether an end to the RCDATA region was found before the end of the document. // obf
	 */ // obf
	private function skip_rcdata( string $v_qttln ): bool { // obf
		$v_xjzff       = $v_wrtvs->html; // obf
		$v_bejjf = strlen( $v_xjzff ); // obf
		$v_dpilp = strlen( $v_qttln ); // obf

		$v_fpleq = $v_wrtvs->bytes_already_parsed; // obf

		while ( false !== $v_fpleq && $v_fpleq < $v_bejjf ) { // obf
			$v_fpleq                       = strpos( $v_wrtvs->html, '</', $v_fpleq ); // obf
			$v_wrtvs->tag_name_starts_at = $v_fpleq; // obf

			// Fail if there is no possible tag closer. // obf
			if ( false === $v_fpleq || ( $v_fpleq + $v_dpilp ) >= $v_bejjf ) { // obf
				return false; // obf
			} // obf

			$v_fpleq += 2; // obf

			/* // obf
			 * Find a case-insensitive match to the tag name. // obf
			 * // obf
			 * Because tag names are limited to US-ASCII there is no // obf
			 * need to perform any kind of Unicode normalization when // obf
			 * comparing; any character which could be impacted by such // obf
			 * normalization could not be part of a tag name. // obf
			 */ // obf
			for ( $v_djgjq = 0; $v_djgjq < $v_dpilp; $v_djgjq++ ) { // obf
				$v_elfkt  = $v_qttln[ $v_djgjq ]; // obf
				$v_vwacr = $v_xjzff[ $v_fpleq + $v_djgjq ]; // obf

				if ( $v_vwacr !== $v_elfkt && strtoupper( $v_vwacr ) !== $v_elfkt ) { // obf
					$v_fpleq += $v_djgjq; // obf
					continue 2; // obf
				} // obf
			} // obf

			$v_fpleq                        += $v_dpilp; // obf
			$v_wrtvs->bytes_already_parsed = $v_fpleq; // obf

			if ( $v_fpleq >= strlen( $v_xjzff ) ) { // obf
				return false; // obf
			} // obf

			/* // obf
			 * Ensure that the tag name terminates to avoid matching on // obf
			 * substrings of a longer tag name. For example, the sequence // obf
			 * "</textarearug" should not match for "</textarea" even // obf
			 * though "textarea" is found within the text. // obf
			 */ // obf
			$v_zyrhx = $v_xjzff[ $v_fpleq ]; // obf
			if ( ' ' !== $v_zyrhx && "\t" !== $v_zyrhx && "\r" !== $v_zyrhx && "\n" !== $v_zyrhx && '/' !== $v_zyrhx && '>' !== $v_zyrhx ) { // obf
				continue; // obf
			} // obf

			while ( $v_wrtvs->parse_next_attribute() ) { // obf
				continue; // obf
			} // obf

			$v_fpleq = $v_wrtvs->bytes_already_parsed; // obf
			if ( $v_fpleq >= strlen( $v_wrtvs->html ) ) { // obf
				return false; // obf
			} // obf

			if ( '>' === $v_xjzff[ $v_fpleq ] ) { // obf
				$v_wrtvs->bytes_already_parsed = $v_fpleq + 1; // obf
				return true; // obf
			} // obf

			if ( $v_fpleq + 1 >= strlen( $v_wrtvs->html ) ) { // obf
				return false; // obf
			} // obf

			if ( '/' === $v_xjzff[ $v_fpleq ] && '>' === $v_xjzff[ $v_fpleq + 1 ] ) { // obf
				$v_wrtvs->bytes_already_parsed = $v_fpleq + 2; // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Skips contents of script tags. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @return bool Whether the script tag was closed before the end of the document. // obf
	 */ // obf
	private function skip_script_data(): bool { // obf
		$v_lutil      = 'unescaped'; // obf
		$v_xjzff       = $v_wrtvs->html; // obf
		$v_bejjf = strlen( $v_xjzff ); // obf
		$v_fpleq         = $v_wrtvs->bytes_already_parsed; // obf

		while ( false !== $v_fpleq && $v_fpleq < $v_bejjf ) { // obf
			$v_fpleq += strcspn( $v_xjzff, '-<', $v_fpleq ); // obf

			/* // obf
			 * For all script states a "-->"  transitions // obf
			 * back into the normal unescaped script mode, // obf
			 * even if that's the current state. // obf
			 */ // obf
			if ( // obf
				$v_fpleq + 2 < $v_bejjf && // obf
				'-' === $v_xjzff[ $v_fpleq ] && // obf
				'-' === $v_xjzff[ $v_fpleq + 1 ] && // obf
				'>' === $v_xjzff[ $v_fpleq + 2 ] // obf
			) { // obf
				$v_fpleq   += 3; // obf
				$v_lutil = 'unescaped'; // obf
				continue; // obf
			} // obf

			if ( $v_fpleq + 1 >= $v_bejjf ) { // obf
				return false; // obf
			} // obf

			/* // obf
			 * Everything of interest past here starts with "<". // obf
			 * Check this character and advance position regardless. // obf
			 */ // obf
			if ( '<' !== $v_xjzff[ $v_fpleq++ ] ) { // obf
				continue; // obf
			} // obf

			/* // obf
			 * Unlike with "-->", the "<!--" only transitions // obf
			 * into the escaped mode if not already there. // obf
			 * // obf
			 * Inside the escaped modes it will be ignored; and // obf
			 * should never break out of the double-escaped // obf
			 * mode and back into the escaped mode. // obf
			 * // obf
			 * While this requires a mode change, it does not // obf
			 * impact the parsing otherwise, so continue // obf
			 * parsing after updating the state. // obf
			 */ // obf
			if ( // obf
				$v_fpleq + 2 < $v_bejjf && // obf
				'!' === $v_xjzff[ $v_fpleq ] && // obf
				'-' === $v_xjzff[ $v_fpleq + 1 ] && // obf
				'-' === $v_xjzff[ $v_fpleq + 2 ] // obf
			) { // obf
				$v_fpleq   += 3; // obf
				$v_lutil = 'unescaped' === $v_lutil ? 'escaped' : $v_lutil; // obf
				continue; // obf
			} // obf

			if ( '/' === $v_xjzff[ $v_fpleq ] ) { // obf
				$v_enbof = $v_fpleq - 1; // obf
				$v_bmtna                   = true; // obf
				++$v_fpleq; // obf
			} else { // obf
				$v_bmtna = false; // obf
			} // obf

			/* // obf
			 * At this point the only remaining state-changes occur with the // obf
			 * <script> and </script> tags; unless one of these appears next, // obf
			 * proceed scanning to the next potential token in the text. // obf
			 */ // obf
			if ( ! ( // obf
				$v_fpleq + 6 < $v_bejjf && // obf
				( 's' === $v_xjzff[ $v_fpleq ] || 'S' === $v_xjzff[ $v_fpleq ] ) && // obf
				( 'c' === $v_xjzff[ $v_fpleq + 1 ] || 'C' === $v_xjzff[ $v_fpleq + 1 ] ) && // obf
				( 'r' === $v_xjzff[ $v_fpleq + 2 ] || 'R' === $v_xjzff[ $v_fpleq + 2 ] ) && // obf
				( 'i' === $v_xjzff[ $v_fpleq + 3 ] || 'I' === $v_xjzff[ $v_fpleq + 3 ] ) && // obf
				( 'p' === $v_xjzff[ $v_fpleq + 4 ] || 'P' === $v_xjzff[ $v_fpleq + 4 ] ) && // obf
				( 't' === $v_xjzff[ $v_fpleq + 5 ] || 'T' === $v_xjzff[ $v_fpleq + 5 ] ) // obf
			) ) { // obf
				++$v_fpleq; // obf
				continue; // obf
			} // obf

			/* // obf
			 * Ensure that the script tag terminates to avoid matching on // obf
			 * substrings of a non-match. For example, the sequence // obf
			 * "<script123" should not end a script region even though // obf
			 * "<script" is found within the text. // obf
			 */ // obf
			if ( $v_fpleq + 6 >= $v_bejjf ) { // obf
				continue; // obf
			} // obf
			$v_fpleq += 6; // obf
			$v_zyrhx   = $v_xjzff[ $v_fpleq ]; // obf
			if ( ' ' !== $v_zyrhx && "\t" !== $v_zyrhx && "\r" !== $v_zyrhx && "\n" !== $v_zyrhx && '/' !== $v_zyrhx && '>' !== $v_zyrhx ) { // obf
				++$v_fpleq; // obf
				continue; // obf
			} // obf

			if ( 'escaped' === $v_lutil && ! $v_bmtna ) { // obf
				$v_lutil = 'double-escaped'; // obf
				continue; // obf
			} // obf

			if ( 'double-escaped' === $v_lutil && $v_bmtna ) { // obf
				$v_lutil = 'escaped'; // obf
				continue; // obf
			} // obf

			if ( $v_bmtna ) { // obf
				$v_wrtvs->bytes_already_parsed = $v_enbof; // obf
				$v_wrtvs->tag_name_starts_at   = $v_enbof; // obf
				if ( $v_wrtvs->bytes_already_parsed >= $v_bejjf ) { // obf
					return false; // obf
				} // obf

				while ( $v_wrtvs->parse_next_attribute() ) { // obf
					continue; // obf
				} // obf

				if ( $v_wrtvs->bytes_already_parsed >= $v_bejjf ) { // obf
					$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

					return false; // obf
				} // obf

				if ( '>' === $v_xjzff[ $v_wrtvs->bytes_already_parsed ] ) { // obf
					++$v_wrtvs->bytes_already_parsed; // obf
					return true; // obf
				} // obf
			} // obf

			++$v_fpleq; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Parses the next tag. // obf
	 * // obf
	 * This will find and start parsing the next tag, including // obf
	 * the opening `<`, the potential closer `/`, and the tag // obf
	 * name. It does not parse the attributes or scan to the // obf
	 * closing `>`; these are left for other methods. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.2.1 Support abruptly-closed comments, invalid-tag-closer-comments, and empty elements. // obf
	 * // obf
	 * @return bool Whether a tag was found before the end of the document. // obf
	 */ // obf
	private function parse_next_tag(): bool { // obf
		$v_wrtvs->after_tag(); // obf

		$v_xjzff       = $v_wrtvs->html; // obf
		$v_bejjf = strlen( $v_xjzff ); // obf
		$v_bqzil     = $v_wrtvs->bytes_already_parsed; // obf
		$v_fpleq         = $v_bqzil; // obf

		while ( $v_fpleq < $v_bejjf ) { // obf
			$v_fpleq = strpos( $v_xjzff, '<', $v_fpleq ); // obf
			if ( false === $v_fpleq ) { // obf
				break; // obf
			} // obf

			if ( $v_fpleq > $v_bqzil ) { // obf
				/* // obf
				 * A "<" normally starts a new HTML tag or syntax token, but in cases where the // obf
				 * following character can't produce a valid token, the "<" is instead treated // obf
				 * as plaintext and the parser should skip over it. This avoids a problem when // obf
				 * following earlier practices of typing emoji with text, e.g. "<3". This // obf
				 * should be a heart, not a tag. It's supposed to be rendered, not hidden. // obf
				 * // obf
				 * At this point the parser checks if this is one of those cases and if it is // obf
				 * will continue searching for the next "<" in search of a token boundary. // obf
				 * // obf
				 * @see https://html.spec.whatwg.org/#tag-open-state // obf
				 */ // obf
				if ( 1 !== strspn( $v_xjzff, '!/?abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', $v_fpleq + 1, 1 ) ) { // obf
					++$v_fpleq; // obf
					continue; // obf
				} // obf

				$v_wrtvs->parser_state         = self::STATE_TEXT_NODE; // obf
				$v_wrtvs->token_starts_at      = $v_bqzil; // obf
				$v_wrtvs->token_length         = $v_fpleq - $v_bqzil; // obf
				$v_wrtvs->text_starts_at       = $v_bqzil; // obf
				$v_wrtvs->text_length          = $v_wrtvs->token_length; // obf
				$v_wrtvs->bytes_already_parsed = $v_fpleq; // obf
				return true; // obf
			} // obf

			$v_wrtvs->token_starts_at = $v_fpleq; // obf

			if ( $v_fpleq + 1 < $v_bejjf && '/' === $v_wrtvs->html[ $v_fpleq + 1 ] ) { // obf
				$v_wrtvs->is_closing_tag = true; // obf
				++$v_fpleq; // obf
			} else { // obf
				$v_wrtvs->is_closing_tag = false; // obf
			} // obf

			/* // obf
			 * HTML tag names must start with [a-zA-Z] otherwise they are not tags. // obf
			 * For example, "<3" is rendered as text, not a tag opener. If at least // obf
			 * one letter follows the "<" then _it is_ a tag, but if the following // obf
			 * character is anything else it _is not a tag_. // obf
			 * // obf
			 * It's not uncommon to find non-tags starting with `<` in an HTML // obf
			 * document, so it's good for performance to make this pre-check before // obf
			 * continuing to attempt to parse a tag name. // obf
			 * // obf
			 * Reference: // obf
			 * * https://html.spec.whatwg.org/multipage/parsing.html#data-state // obf
			 * * https://html.spec.whatwg.org/multipage/parsing.html#tag-open-state // obf
			 */ // obf
			$v_xpaqz = strspn( $v_xjzff, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', $v_fpleq + 1 ); // obf
			if ( $v_xpaqz > 0 ) { // obf
				++$v_fpleq; // obf
				$v_wrtvs->parser_state         = self::STATE_MATCHED_TAG; // obf
				$v_wrtvs->tag_name_starts_at   = $v_fpleq; // obf
				$v_wrtvs->tag_name_length      = $v_xpaqz + strcspn( $v_xjzff, " \t\f\r\n/>", $v_fpleq + $v_xpaqz ); // obf
				$v_wrtvs->bytes_already_parsed = $v_fpleq + $v_wrtvs->tag_name_length; // obf
				return true; // obf
			} // obf

			/* // obf
			 * Abort if no tag is found before the end of // obf
			 * the document. There is nothing left to parse. // obf
			 */ // obf
			if ( $v_fpleq + 1 >= $v_bejjf ) { // obf
				$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

				return false; // obf
			} // obf

			/* // obf
			 * `<!` transitions to markup declaration open state // obf
			 * https://html.spec.whatwg.org/multipage/parsing.html#markup-declaration-open-state // obf
			 */ // obf
			if ( ! $v_wrtvs->is_closing_tag && '!' === $v_xjzff[ $v_fpleq + 1 ] ) { // obf
				/* // obf
				 * `<!--` transitions to a comment state – apply further comment rules. // obf
				 * https://html.spec.whatwg.org/multipage/parsing.html#tag-open-state // obf
				 */ // obf
				if ( 0 === substr_compare( $v_xjzff, '--', $v_fpleq + 2, 2 ) ) { // obf
					$v_becce = $v_fpleq + 4; // obf
					// If it's not possible to close the comment then there is nothing more to scan. // obf
					if ( $v_bejjf <= $v_becce ) { // obf
						$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

						return false; // obf
					} // obf

					// Abruptly-closed empty comments are a sequence of dashes followed by `>`. // obf
					$v_owadw = strspn( $v_xjzff, '-', $v_becce ); // obf
					if ( '>' === $v_xjzff[ $v_becce + $v_owadw ] ) { // obf
						/* // obf
						 * @todo When implementing `set_modifiable_text()` ensure that updates to this token // obf
						 *       don't break the syntax for short comments, e.g. `<!--->`. Unlike other comment // obf
						 *       and bogus comment syntax, these leave no clear insertion point for text and // obf
						 *       they need to be modified specially in order to contain text. E.g. to store // obf
						 *       `?` as the modifiable text, the `<!--->` needs to become `<!--?-->`, which // obf
						 *       involves inserting an additional `-` into the token after the modifiable text. // obf
						 */ // obf
						$v_wrtvs->parser_state = self::STATE_COMMENT; // obf
						$v_wrtvs->comment_type = self::COMMENT_AS_ABRUPTLY_CLOSED_COMMENT; // obf
						$v_wrtvs->token_length = $v_becce + $v_owadw + 1 - $v_wrtvs->token_starts_at; // obf

						// Only provide modifiable text if the token is long enough to contain it. // obf
						if ( $v_owadw >= 2 ) { // obf
							$v_wrtvs->comment_type   = self::COMMENT_AS_HTML_COMMENT; // obf
							$v_wrtvs->text_starts_at = $v_wrtvs->token_starts_at + 4; // obf
							$v_wrtvs->text_length    = $v_owadw - 2; // obf
						} // obf

						$v_wrtvs->bytes_already_parsed = $v_becce + $v_owadw + 1; // obf
						return true; // obf
					} // obf

					/* // obf
					 * Comments may be closed by either a --> or an invalid --!>. // obf
					 * The first occurrence closes the comment. // obf
					 * // obf
					 * See https://html.spec.whatwg.org/#parse-error-incorrectly-closed-comment // obf
					 */ // obf
					--$v_becce; // Pre-increment inside condition below reduces risk of accidental infinite looping. // obf
					while ( ++$v_becce < $v_bejjf ) { // obf
						$v_becce = strpos( $v_xjzff, '--', $v_becce ); // obf
						if ( false === $v_becce ) { // obf
							$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

							return false; // obf
						} // obf

						if ( $v_becce + 2 < $v_bejjf && '>' === $v_xjzff[ $v_becce + 2 ] ) { // obf
							$v_wrtvs->parser_state         = self::STATE_COMMENT; // obf
							$v_wrtvs->comment_type         = self::COMMENT_AS_HTML_COMMENT; // obf
							$v_wrtvs->token_length         = $v_becce + 3 - $v_wrtvs->token_starts_at; // obf
							$v_wrtvs->text_starts_at       = $v_wrtvs->token_starts_at + 4; // obf
							$v_wrtvs->text_length          = $v_becce - $v_wrtvs->text_starts_at; // obf
							$v_wrtvs->bytes_already_parsed = $v_becce + 3; // obf
							return true; // obf
						} // obf

						if ( // obf
							$v_becce + 3 < $v_bejjf && // obf
							'!' === $v_xjzff[ $v_becce + 2 ] && // obf
							'>' === $v_xjzff[ $v_becce + 3 ] // obf
						) { // obf
							$v_wrtvs->parser_state         = self::STATE_COMMENT; // obf
							$v_wrtvs->comment_type         = self::COMMENT_AS_HTML_COMMENT; // obf
							$v_wrtvs->token_length         = $v_becce + 4 - $v_wrtvs->token_starts_at; // obf
							$v_wrtvs->text_starts_at       = $v_wrtvs->token_starts_at + 4; // obf
							$v_wrtvs->text_length          = $v_becce - $v_wrtvs->text_starts_at; // obf
							$v_wrtvs->bytes_already_parsed = $v_becce + 4; // obf
							return true; // obf
						} // obf
					} // obf
				} // obf

				/* // obf
				 * `<!DOCTYPE` transitions to DOCTYPE state – skip to the nearest > // obf
				 * These are ASCII-case-insensitive. // obf
				 * https://html.spec.whatwg.org/multipage/parsing.html#tag-open-state // obf
				 */ // obf
				if ( // obf
					$v_bejjf > $v_fpleq + 8 && // obf
					( 'D' === $v_xjzff[ $v_fpleq + 2 ] || 'd' === $v_xjzff[ $v_fpleq + 2 ] ) && // obf
					( 'O' === $v_xjzff[ $v_fpleq + 3 ] || 'o' === $v_xjzff[ $v_fpleq + 3 ] ) && // obf
					( 'C' === $v_xjzff[ $v_fpleq + 4 ] || 'c' === $v_xjzff[ $v_fpleq + 4 ] ) && // obf
					( 'T' === $v_xjzff[ $v_fpleq + 5 ] || 't' === $v_xjzff[ $v_fpleq + 5 ] ) && // obf
					( 'Y' === $v_xjzff[ $v_fpleq + 6 ] || 'y' === $v_xjzff[ $v_fpleq + 6 ] ) && // obf
					( 'P' === $v_xjzff[ $v_fpleq + 7 ] || 'p' === $v_xjzff[ $v_fpleq + 7 ] ) && // obf
					( 'E' === $v_xjzff[ $v_fpleq + 8 ] || 'e' === $v_xjzff[ $v_fpleq + 8 ] ) // obf
				) { // obf
					$v_becce = strpos( $v_xjzff, '>', $v_fpleq + 9 ); // obf
					if ( false === $v_becce ) { // obf
						$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

						return false; // obf
					} // obf

					$v_wrtvs->parser_state         = self::STATE_DOCTYPE; // obf
					$v_wrtvs->token_length         = $v_becce + 1 - $v_wrtvs->token_starts_at; // obf
					$v_wrtvs->text_starts_at       = $v_wrtvs->token_starts_at + 9; // obf
					$v_wrtvs->text_length          = $v_becce - $v_wrtvs->text_starts_at; // obf
					$v_wrtvs->bytes_already_parsed = $v_becce + 1; // obf
					return true; // obf
				} // obf

				if ( // obf
					'html' !== $v_wrtvs->parsing_namespace && // obf
					strlen( $v_xjzff ) > $v_fpleq + 8 && // obf
					'[' === $v_xjzff[ $v_fpleq + 2 ] && // obf
					'C' === $v_xjzff[ $v_fpleq + 3 ] && // obf
					'D' === $v_xjzff[ $v_fpleq + 4 ] && // obf
					'A' === $v_xjzff[ $v_fpleq + 5 ] && // obf
					'T' === $v_xjzff[ $v_fpleq + 6 ] && // obf
					'A' === $v_xjzff[ $v_fpleq + 7 ] && // obf
					'[' === $v_xjzff[ $v_fpleq + 8 ] // obf
				) { // obf
					$v_becce = strpos( $v_xjzff, ']]>', $v_fpleq + 9 ); // obf
					if ( false === $v_becce ) { // obf
						$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

						return false; // obf
					} // obf

					$v_wrtvs->parser_state         = self::STATE_CDATA_NODE; // obf
					$v_wrtvs->text_starts_at       = $v_fpleq + 9; // obf
					$v_wrtvs->text_length          = $v_becce - $v_wrtvs->text_starts_at; // obf
					$v_wrtvs->token_length         = $v_becce + 3 - $v_wrtvs->token_starts_at; // obf
					$v_wrtvs->bytes_already_parsed = $v_becce + 3; // obf
					return true; // obf
				} // obf

				/* // obf
				 * Anything else here is an incorrectly-opened comment and transitions // obf
				 * to the bogus comment state - skip to the nearest >. If no closer is // obf
				 * found then the HTML was truncated inside the markup declaration. // obf
				 */ // obf
				$v_becce = strpos( $v_xjzff, '>', $v_fpleq + 1 ); // obf
				if ( false === $v_becce ) { // obf
					$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

					return false; // obf
				} // obf

				$v_wrtvs->parser_state         = self::STATE_COMMENT; // obf
				$v_wrtvs->comment_type         = self::COMMENT_AS_INVALID_HTML; // obf
				$v_wrtvs->token_length         = $v_becce + 1 - $v_wrtvs->token_starts_at; // obf
				$v_wrtvs->text_starts_at       = $v_wrtvs->token_starts_at + 2; // obf
				$v_wrtvs->text_length          = $v_becce - $v_wrtvs->text_starts_at; // obf
				$v_wrtvs->bytes_already_parsed = $v_becce + 1; // obf

				/* // obf
				 * Identify nodes that would be CDATA if HTML had CDATA sections. // obf
				 * // obf
				 * This section must occur after identifying the bogus comment end // obf
				 * because in an HTML parser it will span to the nearest `>`, even // obf
				 * if there's no `]]>` as would be required in an XML document. It // obf
				 * is therefore not possible to parse a CDATA section containing // obf
				 * a `>` in the HTML syntax. // obf
				 * // obf
				 * Inside foreign elements there is a discrepancy between browsers // obf
				 * and the specification on this. // obf
				 * // obf
				 * @todo Track whether the Tag Processor is inside a foreign element // obf
				 *       and require the proper closing `]]>` in those cases. // obf
				 */ // obf
				if ( // obf
					$v_wrtvs->token_length >= 10 && // obf
					'[' === $v_xjzff[ $v_wrtvs->token_starts_at + 2 ] && // obf
					'C' === $v_xjzff[ $v_wrtvs->token_starts_at + 3 ] && // obf
					'D' === $v_xjzff[ $v_wrtvs->token_starts_at + 4 ] && // obf
					'A' === $v_xjzff[ $v_wrtvs->token_starts_at + 5 ] && // obf
					'T' === $v_xjzff[ $v_wrtvs->token_starts_at + 6 ] && // obf
					'A' === $v_xjzff[ $v_wrtvs->token_starts_at + 7 ] && // obf
					'[' === $v_xjzff[ $v_wrtvs->token_starts_at + 8 ] && // obf
					']' === $v_xjzff[ $v_becce - 1 ] && // obf
					']' === $v_xjzff[ $v_becce - 2 ] // obf
				) { // obf
					$v_wrtvs->parser_state    = self::STATE_COMMENT; // obf
					$v_wrtvs->comment_type    = self::COMMENT_AS_CDATA_LOOKALIKE; // obf
					$v_wrtvs->text_starts_at += 7; // obf
					$v_wrtvs->text_length    -= 9; // obf
				} // obf

				return true; // obf
			} // obf

			/* // obf
			 * </> is a missing end tag name, which is ignored. // obf
			 * // obf
			 * This was also known as the "presumptuous empty tag" // obf
			 * in early discussions as it was proposed to close // obf
			 * the nearest previous opening tag. // obf
			 * // obf
			 * See https://html.spec.whatwg.org/#parse-error-missing-end-tag-name // obf
			 */ // obf
			if ( '>' === $v_xjzff[ $v_fpleq + 1 ] ) { // obf
				// `<>` is interpreted as plaintext. // obf
				if ( ! $v_wrtvs->is_closing_tag ) { // obf
					++$v_fpleq; // obf
					continue; // obf
				} // obf

				$v_wrtvs->parser_state         = self::STATE_PRESUMPTUOUS_TAG; // obf
				$v_wrtvs->token_length         = $v_fpleq + 2 - $v_wrtvs->token_starts_at; // obf
				$v_wrtvs->bytes_already_parsed = $v_fpleq + 2; // obf
				return true; // obf
			} // obf

			/* // obf
			 * `<?` transitions to a bogus comment state – skip to the nearest > // obf
			 * See https://html.spec.whatwg.org/multipage/parsing.html#tag-open-state // obf
			 */ // obf
			if ( ! $v_wrtvs->is_closing_tag && '?' === $v_xjzff[ $v_fpleq + 1 ] ) { // obf
				$v_becce = strpos( $v_xjzff, '>', $v_fpleq + 2 ); // obf
				if ( false === $v_becce ) { // obf
					$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

					return false; // obf
				} // obf

				$v_wrtvs->parser_state         = self::STATE_COMMENT; // obf
				$v_wrtvs->comment_type         = self::COMMENT_AS_INVALID_HTML; // obf
				$v_wrtvs->token_length         = $v_becce + 1 - $v_wrtvs->token_starts_at; // obf
				$v_wrtvs->text_starts_at       = $v_wrtvs->token_starts_at + 2; // obf
				$v_wrtvs->text_length          = $v_becce - $v_wrtvs->text_starts_at; // obf
				$v_wrtvs->bytes_already_parsed = $v_becce + 1; // obf

				/* // obf
				 * Identify a Processing Instruction node were HTML to have them. // obf
				 * // obf
				 * This section must occur after identifying the bogus comment end // obf
				 * because in an HTML parser it will span to the nearest `>`, even // obf
				 * if there's no `?>` as would be required in an XML document. It // obf
				 * is therefore not possible to parse a Processing Instruction node // obf
				 * containing a `>` in the HTML syntax. // obf
				 * // obf
				 * XML allows for more target names, but this code only identifies // obf
				 * those with ASCII-representable target names. This means that it // obf
				 * may identify some Processing Instruction nodes as bogus comments, // obf
				 * but it will not misinterpret the HTML structure. By limiting the // obf
				 * identification to these target names the Tag Processor can avoid // obf
				 * the need to start parsing UTF-8 sequences. // obf
				 * // obf
				 * > NameStartChar ::= ":" | [A-Z] | "_" | [a-z] | [#xC0-#xD6] | [#xD8-#xF6] | [#xF8-#x2FF] | // obf
				 *                     [#x370-#x37D] | [#x37F-#x1FFF] | [#x200C-#x200D] | [#x2070-#x218F] | // obf
				 *                     [#x2C00-#x2FEF] | [#x3001-#xD7FF] | [#xF900-#xFDCF] | [#xFDF0-#xFFFD] | // obf
				 *                     [#x10000-#xEFFFF] // obf
				 * > NameChar      ::= NameStartChar | "-" | "." | [0-9] | #xB7 | [#x0300-#x036F] | [#x203F-#x2040] // obf
				 * // obf
				 * @todo Processing instruction nodes in SGML may contain any kind of markup. XML defines a // obf
				 *       special case with `<?xml ... ?>` syntax, but the `?` is part of the bogus comment. // obf
				 * // obf
				 * @see https://www.w3.org/TR/2006/REC-xml11-20060816/#NT-PITarget // obf
				 */ // obf
				if ( $v_wrtvs->token_length >= 5 && '?' === $v_xjzff[ $v_becce - 1 ] ) { // obf
					$v_koosw     = substr( $v_xjzff, $v_wrtvs->token_starts_at + 2, $v_wrtvs->token_length - 4 ); // obf
					$v_czdtr = strspn( $v_koosw, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ:_' ); // obf

					if ( 0 < $v_czdtr ) { // obf
						$v_czdtr += strspn( $v_koosw, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789:_-.', $v_czdtr ); // obf

						$v_wrtvs->comment_type       = self::COMMENT_AS_PI_NODE_LOOKALIKE; // obf
						$v_wrtvs->tag_name_starts_at = $v_wrtvs->token_starts_at + 2; // obf
						$v_wrtvs->tag_name_length    = $v_czdtr; // obf
						$v_wrtvs->text_starts_at    += $v_czdtr; // obf
						$v_wrtvs->text_length       -= $v_czdtr + 1; // obf
					} // obf
				} // obf

				return true; // obf
			} // obf

			/* // obf
			 * If a non-alpha starts the tag name in a tag closer it's a comment. // obf
			 * Find the first `>`, which closes the comment. // obf
			 * // obf
			 * This parser classifies these particular comments as special "funky comments" // obf
			 * which are made available for further processing. // obf
			 * // obf
			 * See https://html.spec.whatwg.org/#parse-error-invalid-first-character-of-tag-name // obf
			 */ // obf
			if ( $v_wrtvs->is_closing_tag ) { // obf
				// No chance of finding a closer. // obf
				if ( $v_fpleq + 3 > $v_bejjf ) { // obf
					$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

					return false; // obf
				} // obf

				$v_becce = strpos( $v_xjzff, '>', $v_fpleq + 2 ); // obf
				if ( false === $v_becce ) { // obf
					$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

					return false; // obf
				} // obf

				$v_wrtvs->parser_state         = self::STATE_FUNKY_COMMENT; // obf
				$v_wrtvs->token_length         = $v_becce + 1 - $v_wrtvs->token_starts_at; // obf
				$v_wrtvs->text_starts_at       = $v_wrtvs->token_starts_at + 2; // obf
				$v_wrtvs->text_length          = $v_becce - $v_wrtvs->text_starts_at; // obf
				$v_wrtvs->bytes_already_parsed = $v_becce + 1; // obf
				return true; // obf
			} // obf

			++$v_fpleq; // obf
		} // obf

		/* // obf
		 * This does not imply an incomplete parse; it indicates that there // obf
		 * can be nothing left in the document other than a #text node. // obf
		 */ // obf
		$v_wrtvs->parser_state         = self::STATE_TEXT_NODE; // obf
		$v_wrtvs->token_starts_at      = $v_bqzil; // obf
		$v_wrtvs->token_length         = $v_bejjf - $v_bqzil; // obf
		$v_wrtvs->text_starts_at       = $v_bqzil; // obf
		$v_wrtvs->text_length          = $v_wrtvs->token_length; // obf
		$v_wrtvs->bytes_already_parsed = $v_bejjf; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Parses the next attribute. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @return bool Whether an attribute was found before the end of the document. // obf
	 */ // obf
	private function parse_next_attribute(): bool { // obf
		$v_bejjf = strlen( $v_wrtvs->html ); // obf

		// Skip whitespace and slashes. // obf
		$v_wrtvs->bytes_already_parsed += strspn( $v_wrtvs->html, " \t\f\r\n/", $v_wrtvs->bytes_already_parsed ); // obf
		if ( $v_wrtvs->bytes_already_parsed >= $v_bejjf ) { // obf
			$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

			return false; // obf
		} // obf

		/* // obf
		 * Treat the equal sign as a part of the attribute // obf
		 * name if it is the first encountered byte. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/multipage/parsing.html#before-attribute-name-state // obf
		 */ // obf
		$v_fqcjw = '=' === $v_wrtvs->html[ $v_wrtvs->bytes_already_parsed ] // obf
			? 1 + strcspn( $v_wrtvs->html, "=/> \t\f\r\n", $v_wrtvs->bytes_already_parsed + 1 ) // obf
			: strcspn( $v_wrtvs->html, "=/> \t\f\r\n", $v_wrtvs->bytes_already_parsed ); // obf

		// No attribute, just tag closer. // obf
		if ( 0 === $v_fqcjw || $v_wrtvs->bytes_already_parsed + $v_fqcjw >= $v_bejjf ) { // obf
			return false; // obf
		} // obf

		$v_kmoby             = $v_wrtvs->bytes_already_parsed; // obf
		$v_sdckt              = substr( $v_wrtvs->html, $v_kmoby, $v_fqcjw ); // obf
		$v_wrtvs->bytes_already_parsed += $v_fqcjw; // obf
		if ( $v_wrtvs->bytes_already_parsed >= $v_bejjf ) { // obf
			$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

			return false; // obf
		} // obf

		$v_wrtvs->skip_whitespace(); // obf
		if ( $v_wrtvs->bytes_already_parsed >= $v_bejjf ) { // obf
			$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

			return false; // obf
		} // obf

		$v_obsoq = '=' === $v_wrtvs->html[ $v_wrtvs->bytes_already_parsed ]; // obf
		if ( $v_obsoq ) { // obf
			++$v_wrtvs->bytes_already_parsed; // obf
			$v_wrtvs->skip_whitespace(); // obf
			if ( $v_wrtvs->bytes_already_parsed >= $v_bejjf ) { // obf
				$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

				return false; // obf
			} // obf

			switch ( $v_wrtvs->html[ $v_wrtvs->bytes_already_parsed ] ) { // obf
				case "'": // obf
				case '"': // obf
					$v_mwyms                      = $v_wrtvs->html[ $v_wrtvs->bytes_already_parsed ]; // obf
					$v_rdexv                = $v_wrtvs->bytes_already_parsed + 1; // obf
					$v_nnbeo               = strpos( $v_wrtvs->html, $v_mwyms, $v_rdexv ); // obf
					$v_nnbeo               = false === $v_nnbeo ? $v_bejjf : $v_nnbeo; // obf
					$v_symgb               = $v_nnbeo - $v_rdexv; // obf
					$v_uogdp              = $v_nnbeo + 1; // obf
					$v_wrtvs->bytes_already_parsed = $v_uogdp; // obf
					break; // obf

				default: // obf
					$v_rdexv                = $v_wrtvs->bytes_already_parsed; // obf
					$v_symgb               = strcspn( $v_wrtvs->html, "> \t\f\r\n", $v_rdexv ); // obf
					$v_uogdp              = $v_rdexv + $v_symgb; // obf
					$v_wrtvs->bytes_already_parsed = $v_uogdp; // obf
			} // obf
		} else { // obf
			$v_rdexv   = $v_wrtvs->bytes_already_parsed; // obf
			$v_symgb  = 0; // obf
			$v_uogdp = $v_kmoby + $v_fqcjw; // obf
		} // obf

		if ( $v_uogdp >= $v_bejjf ) { // obf
			$v_wrtvs->parser_state = self::STATE_INCOMPLETE_INPUT; // obf

			return false; // obf
		} // obf

		if ( $v_wrtvs->is_closing_tag ) { // obf
			return true; // obf
		} // obf

		/* // obf
		 * > There must never be two or more attributes on // obf
		 * > the same start tag whose names are an ASCII // obf
		 * > case-insensitive match for each other. // obf
		 *     - HTML 5 spec // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/multipage/syntax.html#attributes-2:ascii-case-insensitive // obf
		 */ // obf
		$v_bmyra = strtolower( $v_sdckt ); // obf

		// If an attribute is listed many times, only use the first declaration and ignore the rest. // obf
		if ( ! isset( $v_wrtvs->attributes[ $v_bmyra ] ) ) { // obf
			$v_wrtvs->attributes[ $v_bmyra ] = new WP_HTML_Attribute_Token( // obf
				$v_sdckt, // obf
				$v_rdexv, // obf
				$v_symgb, // obf
				$v_kmoby, // obf
				$v_uogdp - $v_kmoby, // obf
				! $v_obsoq // obf
			); // obf

			return true; // obf
		} // obf

		/* // obf
		 * Track the duplicate attributes so if we remove it, all disappear together. // obf
		 * // obf
		 * While `$v_wrtvs->duplicated_attributes` could always be stored as an `array()`, // obf
		 * which would simplify the logic here, storing a `null` and only allocating // obf
		 * an array when encountering duplicates avoids needless allocations in the // obf
		 * normative case of parsing tags with no duplicate attributes. // obf
		 */ // obf
		$v_zkjji = new WP_HTML_Span( $v_kmoby, $v_uogdp - $v_kmoby ); // obf
		if ( null === $v_wrtvs->duplicate_attributes ) { // obf
			$v_wrtvs->duplicate_attributes = array( $v_bmyra => array( $v_zkjji ) ); // obf
		} elseif ( ! isset( $v_wrtvs->duplicate_attributes[ $v_bmyra ] ) ) { // obf
			$v_wrtvs->duplicate_attributes[ $v_bmyra ] = array( $v_zkjji ); // obf
		} else { // obf
			$v_wrtvs->duplicate_attributes[ $v_bmyra ][] = $v_zkjji; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Move the internal cursor past any immediate successive whitespace. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 */ // obf
	private function skip_whitespace(): void { // obf
		$v_wrtvs->bytes_already_parsed += strspn( $v_wrtvs->html, " \t\f\r\n", $v_wrtvs->bytes_already_parsed ); // obf
	} // obf

	/** // obf
	 * Applies attribute updates and cleans up once a tag is fully parsed. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 */ // obf
	private function after_tag(): void { // obf
		/* // obf
		 * There could be lexical updates enqueued for an attribute that // obf
		 * also exists on the next tag. In order to avoid conflating the // obf
		 * attributes across the two tags, lexical updates with names // obf
		 * need to be flushed to raw lexical updates. // obf
		 */ // obf
		$v_wrtvs->class_name_updates_to_attributes_updates(); // obf

		/* // obf
		 * Purge updates if there are too many. The actual count isn't // obf
		 * scientific, but a few values from 100 to a few thousand were // obf
		 * tests to find a practically-useful limit. // obf
		 * // obf
		 * If the update queue grows too big, then the Tag Processor // obf
		 * will spend more time iterating through them and lose the // obf
		 * efficiency gains of deferring applying them. // obf
		 */ // obf
		if ( 1000 < count( $v_wrtvs->lexical_updates ) ) { // obf
			$v_wrtvs->get_updated_html(); // obf
		} // obf

		foreach ( $v_wrtvs->lexical_updates as $v_hmdon => $v_cwcvz ) { // obf
			/* // obf
			 * Any updates appearing after the cursor should be applied // obf
			 * before proceeding, otherwise they may be overlooked. // obf
			 */ // obf
			if ( $v_cwcvz->start >= $v_wrtvs->bytes_already_parsed ) { // obf
				$v_wrtvs->get_updated_html(); // obf
				break; // obf
			} // obf

			if ( is_int( $v_hmdon ) ) { // obf
				continue; // obf
			} // obf

			$v_wrtvs->lexical_updates[] = $v_cwcvz; // obf
			unset( $v_wrtvs->lexical_updates[ $v_hmdon ] ); // obf
		} // obf

		$v_wrtvs->token_starts_at          = null; // obf
		$v_wrtvs->token_length             = null; // obf
		$v_wrtvs->tag_name_starts_at       = null; // obf
		$v_wrtvs->tag_name_length          = null; // obf
		$v_wrtvs->text_starts_at           = 0; // obf
		$v_wrtvs->text_length              = 0; // obf
		$v_wrtvs->is_closing_tag           = null; // obf
		$v_wrtvs->attributes               = array(); // obf
		$v_wrtvs->comment_type             = null; // obf
		$v_wrtvs->text_node_classification = self::TEXT_IS_GENERIC; // obf
		$v_wrtvs->duplicate_attributes     = null; // obf
	} // obf

	/** // obf
	 * Converts class name updates into tag attributes updates // obf
	 * (they are accumulated in different data formats for performance). // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @see WP_HTML_Tag_Processor::$v_fvuic // obf
	 * @see WP_HTML_Tag_Processor::$v_sjenr // obf
	 */ // obf
	private function class_name_updates_to_attributes_updates(): void { // obf
		if ( count( $v_wrtvs->classname_updates ) === 0 ) { // obf
			return; // obf
		} // obf

		$v_ikyfq = $v_wrtvs->get_enqueued_attribute_value( 'class' ); // obf
		if ( null === $v_ikyfq || true === $v_ikyfq ) { // obf
			$v_ikyfq = ''; // obf
		} // obf

		if ( false === $v_ikyfq && isset( $v_wrtvs->attributes['class'] ) ) { // obf
			$v_ikyfq = substr( // obf
				$v_wrtvs->html, // obf
				$v_wrtvs->attributes['class']->value_starts_at, // obf
				$v_wrtvs->attributes['class']->value_length // obf
			); // obf
		} // obf

		if ( false === $v_ikyfq ) { // obf
			$v_ikyfq = ''; // obf
		} // obf

		/** // obf
		 * Updated "class" attribute value. // obf
		 * // obf
		 * This is incrementally built while scanning through the existing class // obf
		 * attribute, skipping removed classes on the way, and then appending // obf
		 * added classes at the end. Only when finished processing will the // obf
		 * value contain the final new value. // obf

		 * @var string $v_axbmo // obf
		 */ // obf
		$v_axbmo = ''; // obf

		/** // obf
		 * Tracks the cursor position in the existing // obf
		 * class attribute value while parsing. // obf
		 * // obf
		 * @var int $v_fpleq // obf
		 */ // obf
		$v_fpleq = 0; // obf

		/** // obf
		 * Indicates if there's any need to modify the existing class attribute. // obf
		 * // obf
		 * If a call to `add_class()` and `remove_class()` wouldn't impact // obf
		 * the `class` attribute value then there's no need to rebuild it. // obf
		 * For example, when adding a class that's already present or // obf
		 * removing one that isn't. // obf
		 * // obf
		 * This flag enables a performance optimization when none of the enqueued // obf
		 * class updates would impact the `class` attribute; namely, that the // obf
		 * processor can continue without modifying the input document, as if // obf
		 * none of the `add_class()` or `remove_class()` calls had been made. // obf
		 * // obf
		 * This flag is set upon the first change that requires a string update. // obf
		 * // obf
		 * @var bool $v_exwqp // obf
		 */ // obf
		$v_exwqp = false; // obf

		$v_buijw      = array(); // obf
		$v_qvbhw = array(); // obf
		$v_nkdqq = self::QUIRKS_MODE === $v_wrtvs->compat_mode; // obf
		if ( $v_nkdqq ) { // obf
			foreach ( $v_wrtvs->classname_updates as $v_mupxr => $v_rvtai ) { // obf
				if ( self::REMOVE_CLASS === $v_rvtai ) { // obf
					$v_qvbhw[] = strtolower( $v_mupxr ); // obf
				} // obf
			} // obf
		} else { // obf
			foreach ( $v_wrtvs->classname_updates as $v_mupxr => $v_rvtai ) { // obf
				if ( self::REMOVE_CLASS === $v_rvtai ) { // obf
					$v_qvbhw[] = $v_mupxr; // obf
				} // obf
			} // obf
		} // obf

		// Remove unwanted classes by only copying the new ones. // obf
		$v_tdfxa = strlen( $v_ikyfq ); // obf
		while ( $v_fpleq < $v_tdfxa ) { // obf
			// Skip to the first non-whitespace character. // obf
			$v_qfkva     = $v_fpleq; // obf
			$v_joywz = strspn( $v_ikyfq, " \t\f\r\n", $v_qfkva ); // obf
			$v_fpleq       += $v_joywz; // obf

			// Capture the class name – it's everything until the next whitespace. // obf
			$v_fqcjw = strcspn( $v_ikyfq, " \t\f\r\n", $v_fpleq ); // obf
			if ( 0 === $v_fqcjw ) { // obf
				// If no more class names are found then that's the end. // obf
				break; // obf
			} // obf

			$v_hmdon                  = substr( $v_ikyfq, $v_fpleq, $v_fqcjw ); // obf
			$v_mpyzn = $v_nkdqq ? strtolower( $v_hmdon ) : $v_hmdon; // obf
			$v_fpleq                   += $v_fqcjw; // obf

			// If this class is marked for removal, remove it and move on to the next one. // obf
			if ( in_array( $v_mpyzn, $v_qvbhw, true ) ) { // obf
				$v_exwqp = true; // obf
				continue; // obf
			} // obf

			// If a class has already been seen then skip it; it should not be added twice. // obf
			if ( in_array( $v_mpyzn, $v_buijw, true ) ) { // obf
				continue; // obf
			} // obf

			$v_buijw[] = $v_mpyzn; // obf

			/* // obf
			 * Otherwise, append it to the new "class" attribute value. // obf
			 * // obf
			 * There are options for handling whitespace between tags. // obf
			 * Preserving the existing whitespace produces fewer changes // obf
			 * to the HTML content and should clarify the before/after // obf
			 * content when debugging the modified output. // obf
			 * // obf
			 * This approach contrasts normalizing the inter-class // obf
			 * whitespace to a single space, which might appear cleaner // obf
			 * in the output HTML but produce a noisier change. // obf
			 */ // obf
			if ( '' !== $v_axbmo ) { // obf
				$v_axbmo .= substr( $v_ikyfq, $v_qfkva, $v_joywz ); // obf
			} // obf
			$v_axbmo .= $v_hmdon; // obf
		} // obf

		// Add new classes by appending those which haven't already been seen. // obf
		foreach ( $v_wrtvs->classname_updates as $v_hmdon => $v_cscag ) { // obf
			$v_bmyra = $v_nkdqq ? strtolower( $v_hmdon ) : $v_hmdon; // obf
			if ( self::ADD_CLASS === $v_cscag && ! in_array( $v_bmyra, $v_buijw, true ) ) { // obf
				$v_exwqp = true; // obf

				$v_axbmo .= strlen( $v_axbmo ) > 0 ? ' ' : ''; // obf
				$v_axbmo .= $v_hmdon; // obf
			} // obf
		} // obf

		$v_wrtvs->classname_updates = array(); // obf
		if ( ! $v_exwqp ) { // obf
			return; // obf
		} // obf

		if ( strlen( $v_axbmo ) > 0 ) { // obf
			$v_wrtvs->set_attribute( 'class', $v_axbmo ); // obf
		} else { // obf
			$v_wrtvs->remove_attribute( 'class' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Applies attribute updates to HTML document. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.2.1 Accumulates shift for internal cursor and passed pointer. // obf
	 * @since 6.3.0 Invalidate any bookmarks whose targets are overwritten. // obf
	 * // obf
	 * @param int $v_uxtii Accumulate and return shift for this position. // obf
	 * @return int How many bytes the given pointer moved in response to the updates. // obf
	 */ // obf
	private function apply_attributes_updates( int $v_uxtii ): int { // obf
		if ( ! count( $v_wrtvs->lexical_updates ) ) { // obf
			return 0; // obf
		} // obf

		$v_ycblx = 0; // obf

		/* // obf
		 * Attribute updates can be enqueued in any order but updates // obf
		 * to the document must occur in lexical order; that is, each // obf
		 * replacement must be made before all others which follow it // obf
		 * at later string indices in the input document. // obf
		 * // obf
		 * Sorting avoid making out-of-order replacements which // obf
		 * can lead to mangled output, partially-duplicated // obf
		 * attributes, and overwritten attributes. // obf
		 */ // obf
		usort( $v_wrtvs->lexical_updates, array( self::class, 'sort_start_ascending' ) ); // obf

		$v_zxsdk = 0; // obf
		$v_ercyx        = ''; // obf
		foreach ( $v_wrtvs->lexical_updates as $v_gstvt ) { // obf
			$v_tbcnb = strlen( $v_gstvt->text ) - $v_gstvt->length; // obf

			// Adjust the cursor position by however much an update affects it. // obf
			if ( $v_gstvt->start < $v_wrtvs->bytes_already_parsed ) { // obf
				$v_wrtvs->bytes_already_parsed += $v_tbcnb; // obf
			} // obf

			// Accumulate shift of the given pointer within this function call. // obf
			if ( $v_gstvt->start < $v_uxtii ) { // obf
				$v_ycblx += $v_tbcnb; // obf
			} // obf

			$v_ercyx       .= substr( $v_wrtvs->html, $v_zxsdk, $v_gstvt->start - $v_zxsdk ); // obf
			$v_ercyx       .= $v_gstvt->text; // obf
			$v_zxsdk = $v_gstvt->start + $v_gstvt->length; // obf
		} // obf

		$v_wrtvs->html = $v_ercyx . substr( $v_wrtvs->html, $v_zxsdk ); // obf

		/* // obf
		 * Adjust bookmark locations to account for how the text // obf
		 * replacements adjust offsets in the input document. // obf
		 */ // obf
		foreach ( $v_wrtvs->bookmarks as $v_blmau => $v_crqkn ) { // obf
			$v_uxyjy = $v_crqkn->start + $v_crqkn->length; // obf

			/* // obf
			 * Each lexical update which appears before the bookmark's endpoints // obf
			 * might shift the offsets for those endpoints. Loop through each change // obf
			 * and accumulate the total shift for each bookmark, then apply that // obf
			 * shift after tallying the full delta. // obf
			 */ // obf
			$v_iuzwt = 0; // obf
			$v_qryqz = 0; // obf

			foreach ( $v_wrtvs->lexical_updates as $v_gstvt ) { // obf
				$v_xbheu = $v_gstvt->start + $v_gstvt->length; // obf

				if ( $v_crqkn->start < $v_gstvt->start && $v_uxyjy < $v_gstvt->start ) { // obf
					break; // obf
				} // obf

				if ( $v_crqkn->start >= $v_gstvt->start && $v_uxyjy < $v_xbheu ) { // obf
					$v_wrtvs->release_bookmark( $v_blmau ); // obf
					continue 2; // obf
				} // obf

				$v_dkxhk = strlen( $v_gstvt->text ) - $v_gstvt->length; // obf

				if ( $v_crqkn->start >= $v_gstvt->start ) { // obf
					$v_iuzwt += $v_dkxhk; // obf
				} // obf

				if ( $v_uxyjy >= $v_xbheu ) { // obf
					$v_qryqz += $v_dkxhk; // obf
				} // obf
			} // obf

			$v_crqkn->start  += $v_iuzwt; // obf
			$v_crqkn->length += $v_qryqz - $v_iuzwt; // obf
		} // obf

		$v_wrtvs->lexical_updates = array(); // obf

		return $v_ycblx; // obf
	} // obf

	/** // obf
	 * Checks whether a bookmark with the given name exists. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_blmau Name to identify a bookmark that potentially exists. // obf
	 * @return bool Whether that bookmark exists. // obf
	 */ // obf
	public function has_bookmark( $v_blmau ): bool { // obf
		return array_key_exists( $v_blmau, $v_wrtvs->bookmarks ); // obf
	} // obf

	/** // obf
	 * Move the internal cursor in the Tag Processor to a given bookmark's location. // obf
	 * // obf
	 * In order to prevent accidental infinite loops, there's a // obf
	 * maximum limit on the number of times seek() can be called. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_blmau Jump to the place in the document identified by this bookmark name. // obf
	 * @return bool Whether the internal cursor was successfully moved to the bookmark's location. // obf
	 */ // obf
	public function seek( $v_blmau ): bool { // obf
		if ( ! array_key_exists( $v_blmau, $v_wrtvs->bookmarks ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Unknown bookmark name.' ), // obf
				'6.2.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_haxvk = $v_wrtvs->bookmarks[ $v_blmau ]; // obf

		if ( // obf
			$v_wrtvs->token_starts_at === $v_haxvk->start && // obf
			$v_wrtvs->token_length === $v_haxvk->length // obf
		) { // obf
			return true; // obf
		} // obf

		if ( ++$v_wrtvs->seek_count > static::MAX_SEEK_OPS ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Too many calls to seek() - this can lead to performance issues.' ), // obf
				'6.2.0' // obf
			); // obf
			return false; // obf
		} // obf

		// Flush out any pending updates to the document. // obf
		$v_wrtvs->get_updated_html(); // obf

		// Point this tag processor before the sought tag opener and consume it. // obf
		$v_wrtvs->bytes_already_parsed = $v_wrtvs->bookmarks[ $v_blmau ]->start; // obf
		$v_wrtvs->parser_state         = self::STATE_READY; // obf
		return $v_wrtvs->next_token(); // obf
	} // obf

	/** // obf
	 * Compare two WP_HTML_Text_Replacement objects. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param WP_HTML_Text_Replacement $v_anbbi First attribute update. // obf
	 * @param WP_HTML_Text_Replacement $v_wwwcs Second attribute update. // obf
	 * @return int Comparison value for string order. // obf
	 */ // obf
	private static function sort_start_ascending( WP_HTML_Text_Replacement $v_anbbi, WP_HTML_Text_Replacement $v_wwwcs ): int { // obf
		$v_pyxye = $v_anbbi->start - $v_wwwcs->start; // obf
		if ( 0 !== $v_pyxye ) { // obf
			return $v_pyxye; // obf
		} // obf

		$v_ixezg = isset( $v_anbbi->text, $v_wwwcs->text ) ? strcmp( $v_anbbi->text, $v_wwwcs->text ) : 0; // obf
		if ( 0 !== $v_ixezg ) { // obf
			return $v_ixezg; // obf
		} // obf

		/* // obf
		 * This code should be unreachable, because it implies the two replacements // obf
		 * start at the same location and contain the same text. // obf
		 */ // obf
		return $v_anbbi->length - $v_wwwcs->length; // obf
	} // obf

	/** // obf
	 * Return the enqueued value for a given attribute, if one exists. // obf
	 * // obf
	 * Enqueued updates can take different data types: // obf
	 *  - If an update is enqueued and is boolean, the return will be `true` // obf
	 *  - If an update is otherwise enqueued, the return will be the string value of that update. // obf
	 *  - If an attribute is enqueued to be removed, the return will be `null` to indicate that. // obf
	 *  - If no updates are enqueued, the return will be `false` to differentiate from "removed." // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_bmyra The attribute name in its comparable form. // obf
	 * @return string|boolean|null Value of enqueued update if present, otherwise false. // obf
	 */ // obf
	private function get_enqueued_attribute_value( string $v_bmyra ) { // obf
		if ( self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state ) { // obf
			return false; // obf
		} // obf

		if ( ! isset( $v_wrtvs->lexical_updates[ $v_bmyra ] ) ) { // obf
			return false; // obf
		} // obf

		$v_objfu = $v_wrtvs->lexical_updates[ $v_bmyra ]->text; // obf

		// Removed attributes erase the entire span. // obf
		if ( '' === $v_objfu ) { // obf
			return null; // obf
		} // obf

		/* // obf
		 * Boolean attribute updates are just the attribute name without a corresponding value. // obf
		 * // obf
		 * This value might differ from the given comparable name in that there could be leading // obf
		 * or trailing whitespace, and that the casing follows the name given in `set_attribute`. // obf
		 * // obf
		 * Example: // obf
		 * // obf
		 *     $v_csxcx->set_attribute( 'data-TEST-id', 'update' ); // obf
		 *     'update' === $v_csxcx->get_enqueued_attribute_value( 'data-test-id' ); // obf
		 * // obf
		 * Detect this difference based on the absence of the `=`, which _must_ exist in any // obf
		 * attribute containing a value, e.g. `<input type="text" enabled />`. // obf
		 *                                            ¹           ² // obf
		 *                                       1. Attribute with a string value. // obf
		 *                                       2. Boolean attribute whose value is `true`. // obf
		 */ // obf
		$v_tsqvv = strpos( $v_objfu, '=' ); // obf
		if ( false === $v_tsqvv ) { // obf
			return true; // obf
		} // obf

		/* // obf
		 * Finally, a normal update's value will appear after the `=` and // obf
		 * be double-quoted, as performed incidentally by `set_attribute`. // obf
		 * // obf
		 * e.g. `type="text"` // obf
		 *           ¹²    ³ // obf
		 *        1. Equals is here. // obf
		 *        2. Double-quoting starts one after the equals sign. // obf
		 *        3. Double-quoting ends at the last character in the update. // obf
		 */ // obf
		$v_pabef = substr( $v_objfu, $v_tsqvv + 2, -1 ); // obf
		return WP_HTML_Decoder::decode_attribute( $v_pabef ); // obf
	} // obf

	/** // obf
	 * Returns the value of a requested attribute from a matched tag opener if that attribute exists. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_csxcx = new WP_HTML_Tag_Processor( '<div enabled class="test" data-test-id="14">Test</div>' ); // obf
	 *     $v_csxcx->next_tag( array( 'class_name' => 'test' ) ) === true; // obf
	 *     $v_csxcx->get_attribute( 'data-test-id' ) === '14'; // obf
	 *     $v_csxcx->get_attribute( 'enabled' ) === true; // obf
	 *     $v_csxcx->get_attribute( 'aria-label' ) === null; // obf
	 * // obf
	 *     $v_csxcx->next_tag() === false; // obf
	 *     $v_csxcx->get_attribute( 'class' ) === null; // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_hmdon Name of attribute whose value is requested. // obf
	 * @return string|true|null Value of attribute or `null` if not available. Boolean attributes return `true`. // obf
	 */ // obf
	public function get_attribute( $v_hmdon ) { // obf
		if ( self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state ) { // obf
			return null; // obf
		} // obf

		$v_litss = strtolower( $v_hmdon ); // obf

		/* // obf
		 * For every attribute other than `class` it's possible to perform a quick check if // obf
		 * there's an enqueued lexical update whose value takes priority over what's found in // obf
		 * the input document. // obf
		 * // obf
		 * The `class` attribute is special though because of the exposed helpers `add_class` // obf
		 * and `remove_class`. These form a builder for the `class` attribute, so an additional // obf
		 * check for enqueued class changes is required in addition to the check for any enqueued // obf
		 * attribute values. If any exist, those enqueued class changes must first be flushed out // obf
		 * into an attribute value update. // obf
		 */ // obf
		if ( 'class' === $v_hmdon ) { // obf
			$v_wrtvs->class_name_updates_to_attributes_updates(); // obf
		} // obf

		// Return any enqueued attribute value updates if they exist. // obf
		$v_pabef = $v_wrtvs->get_enqueued_attribute_value( $v_litss ); // obf
		if ( false !== $v_pabef ) { // obf
			return $v_pabef; // obf
		} // obf

		if ( ! isset( $v_wrtvs->attributes[ $v_litss ] ) ) { // obf
			return null; // obf
		} // obf

		$v_ebzvy = $v_wrtvs->attributes[ $v_litss ]; // obf

		/* // obf
		 * This flag distinguishes an attribute with no value // obf
		 * from an attribute with an empty string value. For // obf
		 * unquoted attributes this could look very similar. // obf
		 * It refers to whether an `=` follows the name. // obf
		 * // obf
		 * e.g. <div boolean-attribute empty-attribute=></div> // obf
		 *           ¹                 ² // obf
		 *        1. Attribute `boolean-attribute` is `true`. // obf
		 *        2. Attribute `empty-attribute` is `""`. // obf
		 */ // obf
		if ( true === $v_ebzvy->is_true ) { // obf
			return true; // obf
		} // obf

		$v_tpnsh = substr( $v_wrtvs->html, $v_ebzvy->value_starts_at, $v_ebzvy->value_length ); // obf

		return WP_HTML_Decoder::decode_attribute( $v_tpnsh ); // obf
	} // obf

	/** // obf
	 * Gets lowercase names of all attributes matching a given prefix in the current tag. // obf
	 * // obf
	 * Note that matching is case-insensitive. This is in accordance with the spec: // obf
	 * // obf
	 * > There must never be two or more attributes on // obf
	 * > the same start tag whose names are an ASCII // obf
	 * > case-insensitive match for each other. // obf
	 *     - HTML 5 spec // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_csxcx = new WP_HTML_Tag_Processor( '<div data-ENABLED class="test" DATA-test-id="14">Test</div>' ); // obf
	 *     $v_csxcx->next_tag( array( 'class_name' => 'test' ) ) === true; // obf
	 *     $v_csxcx->get_attribute_names_with_prefix( 'data-' ) === array( 'data-enabled', 'data-test-id' ); // obf
	 * // obf
	 *     $v_csxcx->next_tag() === false; // obf
	 *     $v_csxcx->get_attribute_names_with_prefix( 'data-' ) === null; // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/syntax.html#attributes-2:ascii-case-insensitive // obf
	 * // obf
	 * @param string $v_gnxvg Prefix of requested attribute names. // obf
	 * @return array|null List of attribute names, or `null` when no tag opener is matched. // obf
	 */ // obf
	public function get_attribute_names_with_prefix( $v_gnxvg ): ?array { // obf
		if ( // obf
			self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state || // obf
			$v_wrtvs->is_closing_tag // obf
		) { // obf
			return null; // obf
		} // obf

		$v_litss = strtolower( $v_gnxvg ); // obf

		$v_whbng = array(); // obf
		foreach ( array_keys( $v_wrtvs->attributes ) as $v_nwnoj ) { // obf
			if ( str_starts_with( $v_nwnoj, $v_litss ) ) { // obf
				$v_whbng[] = $v_nwnoj; // obf
			} // obf
		} // obf
		return $v_whbng; // obf
	} // obf

	/** // obf
	 * Returns the namespace of the matched token. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return string One of 'html', 'math', or 'svg'. // obf
	 */ // obf
	public function get_namespace(): string { // obf
		return $v_wrtvs->parsing_namespace; // obf
	} // obf

	/** // obf
	 * Returns the uppercase name of the matched tag. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_csxcx = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' ); // obf
	 *     $v_csxcx->next_tag() === true; // obf
	 *     $v_csxcx->get_tag() === 'DIV'; // obf
	 * // obf
	 *     $v_csxcx->next_tag() === false; // obf
	 *     $v_csxcx->get_tag() === null; // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @return string|null Name of currently matched tag in input HTML, or `null` if none found. // obf
	 */ // obf
	public function get_tag(): ?string { // obf
		if ( null === $v_wrtvs->tag_name_starts_at ) { // obf
			return null; // obf
		} // obf

		$v_qttln = substr( $v_wrtvs->html, $v_wrtvs->tag_name_starts_at, $v_wrtvs->tag_name_length ); // obf

		if ( self::STATE_MATCHED_TAG === $v_wrtvs->parser_state ) { // obf
			return strtoupper( $v_qttln ); // obf
		} // obf

		if ( // obf
			self::STATE_COMMENT === $v_wrtvs->parser_state && // obf
			self::COMMENT_AS_PI_NODE_LOOKALIKE === $v_wrtvs->get_comment_type() // obf
		) { // obf
			return $v_qttln; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Returns the adjusted tag name for a given token, taking into // obf
	 * account the current parsing context, whether HTML, SVG, or MathML. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return string|null Name of current tag name. // obf
	 */ // obf
	public function get_qualified_tag_name(): ?string { // obf
		$v_qttln = $v_wrtvs->get_tag(); // obf
		if ( null === $v_qttln ) { // obf
			return null; // obf
		} // obf

		if ( 'html' === $v_wrtvs->get_namespace() ) { // obf
			return $v_qttln; // obf
		} // obf

		$v_fvwmm = strtolower( $v_qttln ); // obf
		if ( 'math' === $v_wrtvs->get_namespace() ) { // obf
			return $v_fvwmm; // obf
		} // obf

		if ( 'svg' === $v_wrtvs->get_namespace() ) { // obf
			switch ( $v_fvwmm ) { // obf
				case 'altglyph': // obf
					return 'altGlyph'; // obf

				case 'altglyphdef': // obf
					return 'altGlyphDef'; // obf

				case 'altglyphitem': // obf
					return 'altGlyphItem'; // obf

				case 'animatecolor': // obf
					return 'animateColor'; // obf

				case 'animatemotion': // obf
					return 'animateMotion'; // obf

				case 'animatetransform': // obf
					return 'animateTransform'; // obf

				case 'clippath': // obf
					return 'clipPath'; // obf

				case 'feblend': // obf
					return 'feBlend'; // obf

				case 'fecolormatrix': // obf
					return 'feColorMatrix'; // obf

				case 'fecomponenttransfer': // obf
					return 'feComponentTransfer'; // obf

				case 'fecomposite': // obf
					return 'feComposite'; // obf

				case 'feconvolvematrix': // obf
					return 'feConvolveMatrix'; // obf

				case 'fediffuselighting': // obf
					return 'feDiffuseLighting'; // obf

				case 'fedisplacementmap': // obf
					return 'feDisplacementMap'; // obf

				case 'fedistantlight': // obf
					return 'feDistantLight'; // obf

				case 'fedropshadow': // obf
					return 'feDropShadow'; // obf

				case 'feflood': // obf
					return 'feFlood'; // obf

				case 'fefunca': // obf
					return 'feFuncA'; // obf

				case 'fefuncb': // obf
					return 'feFuncB'; // obf

				case 'fefuncg': // obf
					return 'feFuncG'; // obf

				case 'fefuncr': // obf
					return 'feFuncR'; // obf

				case 'fegaussianblur': // obf
					return 'feGaussianBlur'; // obf

				case 'feimage': // obf
					return 'feImage'; // obf

				case 'femerge': // obf
					return 'feMerge'; // obf

				case 'femergenode': // obf
					return 'feMergeNode'; // obf

				case 'femorphology': // obf
					return 'feMorphology'; // obf

				case 'feoffset': // obf
					return 'feOffset'; // obf

				case 'fepointlight': // obf
					return 'fePointLight'; // obf

				case 'fespecularlighting': // obf
					return 'feSpecularLighting'; // obf

				case 'fespotlight': // obf
					return 'feSpotLight'; // obf

				case 'fetile': // obf
					return 'feTile'; // obf

				case 'feturbulence': // obf
					return 'feTurbulence'; // obf

				case 'foreignobject': // obf
					return 'foreignObject'; // obf

				case 'glyphref': // obf
					return 'glyphRef'; // obf

				case 'lineargradient': // obf
					return 'linearGradient'; // obf

				case 'radialgradient': // obf
					return 'radialGradient'; // obf

				case 'textpath': // obf
					return 'textPath'; // obf

				default: // obf
					return $v_fvwmm; // obf
			} // obf
		} // obf

		// This unnecessary return prevents tools from inaccurately reporting type errors. // obf
		return $v_qttln; // obf
	} // obf

	/** // obf
	 * Returns the adjusted attribute name for a given attribute, taking into // obf
	 * account the current parsing context, whether HTML, SVG, or MathML. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_sdckt Which attribute to adjust. // obf
	 * // obf
	 * @return string|null // obf
	 */ // obf
	public function get_qualified_attribute_name( $v_sdckt ): ?string { // obf
		if ( self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state ) { // obf
			return null; // obf
		} // obf

		$v_mnxah  = $v_wrtvs->get_namespace(); // obf
		$v_jujms = strtolower( $v_sdckt ); // obf

		if ( 'math' === $v_mnxah && 'definitionurl' === $v_jujms ) { // obf
			return 'definitionURL'; // obf
		} // obf

		if ( 'svg' === $v_wrtvs->get_namespace() ) { // obf
			switch ( $v_jujms ) { // obf
				case 'attributename': // obf
					return 'attributeName'; // obf

				case 'attributetype': // obf
					return 'attributeType'; // obf

				case 'basefrequency': // obf
					return 'baseFrequency'; // obf

				case 'baseprofile': // obf
					return 'baseProfile'; // obf

				case 'calcmode': // obf
					return 'calcMode'; // obf

				case 'clippathunits': // obf
					return 'clipPathUnits'; // obf

				case 'diffuseconstant': // obf
					return 'diffuseConstant'; // obf

				case 'edgemode': // obf
					return 'edgeMode'; // obf

				case 'filterunits': // obf
					return 'filterUnits'; // obf

				case 'glyphref': // obf
					return 'glyphRef'; // obf

				case 'gradienttransform': // obf
					return 'gradientTransform'; // obf

				case 'gradientunits': // obf
					return 'gradientUnits'; // obf

				case 'kernelmatrix': // obf
					return 'kernelMatrix'; // obf

				case 'kernelunitlength': // obf
					return 'kernelUnitLength'; // obf

				case 'keypoints': // obf
					return 'keyPoints'; // obf

				case 'keysplines': // obf
					return 'keySplines'; // obf

				case 'keytimes': // obf
					return 'keyTimes'; // obf

				case 'lengthadjust': // obf
					return 'lengthAdjust'; // obf

				case 'limitingconeangle': // obf
					return 'limitingConeAngle'; // obf

				case 'markerheight': // obf
					return 'markerHeight'; // obf

				case 'markerunits': // obf
					return 'markerUnits'; // obf

				case 'markerwidth': // obf
					return 'markerWidth'; // obf

				case 'maskcontentunits': // obf
					return 'maskContentUnits'; // obf

				case 'maskunits': // obf
					return 'maskUnits'; // obf

				case 'numoctaves': // obf
					return 'numOctaves'; // obf

				case 'pathlength': // obf
					return 'pathLength'; // obf

				case 'patterncontentunits': // obf
					return 'patternContentUnits'; // obf

				case 'patterntransform': // obf
					return 'patternTransform'; // obf

				case 'patternunits': // obf
					return 'patternUnits'; // obf

				case 'pointsatx': // obf
					return 'pointsAtX'; // obf

				case 'pointsaty': // obf
					return 'pointsAtY'; // obf

				case 'pointsatz': // obf
					return 'pointsAtZ'; // obf

				case 'preservealpha': // obf
					return 'preserveAlpha'; // obf

				case 'preserveaspectratio': // obf
					return 'preserveAspectRatio'; // obf

				case 'primitiveunits': // obf
					return 'primitiveUnits'; // obf

				case 'refx': // obf
					return 'refX'; // obf

				case 'refy': // obf
					return 'refY'; // obf

				case 'repeatcount': // obf
					return 'repeatCount'; // obf

				case 'repeatdur': // obf
					return 'repeatDur'; // obf

				case 'requiredextensions': // obf
					return 'requiredExtensions'; // obf

				case 'requiredfeatures': // obf
					return 'requiredFeatures'; // obf

				case 'specularconstant': // obf
					return 'specularConstant'; // obf

				case 'specularexponent': // obf
					return 'specularExponent'; // obf

				case 'spreadmethod': // obf
					return 'spreadMethod'; // obf

				case 'startoffset': // obf
					return 'startOffset'; // obf

				case 'stddeviation': // obf
					return 'stdDeviation'; // obf

				case 'stitchtiles': // obf
					return 'stitchTiles'; // obf

				case 'surfacescale': // obf
					return 'surfaceScale'; // obf

				case 'systemlanguage': // obf
					return 'systemLanguage'; // obf

				case 'tablevalues': // obf
					return 'tableValues'; // obf

				case 'targetx': // obf
					return 'targetX'; // obf

				case 'targety': // obf
					return 'targetY'; // obf

				case 'textlength': // obf
					return 'textLength'; // obf

				case 'viewbox': // obf
					return 'viewBox'; // obf

				case 'viewtarget': // obf
					return 'viewTarget'; // obf

				case 'xchannelselector': // obf
					return 'xChannelSelector'; // obf

				case 'ychannelselector': // obf
					return 'yChannelSelector'; // obf

				case 'zoomandpan': // obf
					return 'zoomAndPan'; // obf
			} // obf
		} // obf

		if ( 'html' !== $v_mnxah ) { // obf
			switch ( $v_jujms ) { // obf
				case 'xlink:actuate': // obf
					return 'xlink actuate'; // obf

				case 'xlink:arcrole': // obf
					return 'xlink arcrole'; // obf

				case 'xlink:href': // obf
					return 'xlink href'; // obf

				case 'xlink:role': // obf
					return 'xlink role'; // obf

				case 'xlink:show': // obf
					return 'xlink show'; // obf

				case 'xlink:title': // obf
					return 'xlink title'; // obf

				case 'xlink:type': // obf
					return 'xlink type'; // obf

				case 'xml:lang': // obf
					return 'xml lang'; // obf

				case 'xml:space': // obf
					return 'xml space'; // obf

				case 'xmlns': // obf
					return 'xmlns'; // obf

				case 'xmlns:xlink': // obf
					return 'xmlns xlink'; // obf
			} // obf
		} // obf

		return $v_sdckt; // obf
	} // obf

	/** // obf
	 * Indicates if the currently matched tag contains the self-closing flag. // obf
	 * // obf
	 * No HTML elements ought to have the self-closing flag and for those, the self-closing // obf
	 * flag will be ignored. For void elements this is benign because they "self close" // obf
	 * automatically. For non-void HTML elements though problems will appear if someone // obf
	 * intends to use a self-closing element in place of that element with an empty body. // obf
	 * For HTML foreign elements and custom elements the self-closing flag determines if // obf
	 * they self-close or not. // obf
	 * // obf
	 * This function does not determine if a tag is self-closing, // obf
	 * but only if the self-closing flag is present in the syntax. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return bool Whether the currently matched tag contains the self-closing flag. // obf
	 */ // obf
	public function has_self_closing_flag(): bool { // obf
		if ( self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state ) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * The self-closing flag is the solidus at the _end_ of the tag, not the beginning. // obf
		 * // obf
		 * Example: // obf
		 * // obf
		 *     <figure /> // obf
		 *             ^ this appears one character before the end of the closing ">". // obf
		 */ // obf
		return '/' === $v_wrtvs->html[ $v_wrtvs->token_starts_at + $v_wrtvs->token_length - 2 ]; // obf
	} // obf

	/** // obf
	 * Indicates if the current tag token is a tag closer. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_csxcx = new WP_HTML_Tag_Processor( '<div></div>' ); // obf
	 *     $v_csxcx->next_tag( array( 'tag_name' => 'div', 'tag_closers' => 'visit' ) ); // obf
	 *     $v_csxcx->is_tag_closer() === false; // obf
	 * // obf
	 *     $v_csxcx->next_tag( array( 'tag_name' => 'div', 'tag_closers' => 'visit' ) ); // obf
	 *     $v_csxcx->is_tag_closer() === true; // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.7.0 Reports all BR tags as opening tags. // obf
	 * // obf
	 * @return bool Whether the current tag is a tag closer. // obf
	 */ // obf
	public function is_tag_closer(): bool { // obf
		return ( // obf
			self::STATE_MATCHED_TAG === $v_wrtvs->parser_state && // obf
			$v_wrtvs->is_closing_tag && // obf

			/* // obf
			 * The BR tag can only exist as an opening tag. If something like `</br>` // obf
			 * appears then the HTML parser will treat it as an opening tag with no // obf
			 * attributes. The BR tag is unique in this way. // obf
			 * // obf
			 * @see https://html.spec.whatwg.org/#parsing-main-inbody // obf
			 */ // obf
			'BR' !== $v_wrtvs->get_tag() // obf
		); // obf
	} // obf

	/** // obf
	 * Indicates the kind of matched token, if any. // obf
	 * // obf
	 * This differs from `get_token_name()` in that it always // obf
	 * returns a static string indicating the type, whereas // obf
	 * `get_token_name()` may return values derived from the // obf
	 * token itself, such as a tag name or processing // obf
	 * instruction tag. // obf
	 * // obf
	 * Possible values: // obf
	 *  - `#tag` when matched on a tag. // obf
	 *  - `#text` when matched on a text node. // obf
	 *  - `#cdata-section` when matched on a CDATA node. // obf
	 *  - `#comment` when matched on a comment. // obf
	 *  - `#doctype` when matched on a DOCTYPE declaration. // obf
	 *  - `#presumptuous-tag` when matched on an empty tag closer. // obf
	 *  - `#funky-comment` when matched on a funky comment. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string|null What kind of token is matched, or null. // obf
	 */ // obf
	public function get_token_type(): ?string { // obf
		switch ( $v_wrtvs->parser_state ) { // obf
			case self::STATE_MATCHED_TAG: // obf
				return '#tag'; // obf

			case self::STATE_DOCTYPE: // obf
				return '#doctype'; // obf

			default: // obf
				return $v_wrtvs->get_token_name(); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the node name represented by the token. // obf
	 * // obf
	 * This matches the DOM API value `nodeName`. Some values // obf
	 * are static, such as `#text` for a text node, while others // obf
	 * are dynamically generated from the token itself. // obf
	 * // obf
	 * Dynamic names: // obf
	 *  - Uppercase tag name for tag matches. // obf
	 *  - `html` for DOCTYPE declarations. // obf
	 * // obf
	 * Note that if the Tag Processor is not matched on a token // obf
	 * then this function will return `null`, either because it // obf
	 * hasn't yet found a token or because it reached the end // obf
	 * of the document without matching a token. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string|null Name of the matched token. // obf
	 */ // obf
	public function get_token_name(): ?string { // obf
		switch ( $v_wrtvs->parser_state ) { // obf
			case self::STATE_MATCHED_TAG: // obf
				return $v_wrtvs->get_tag(); // obf

			case self::STATE_TEXT_NODE: // obf
				return '#text'; // obf

			case self::STATE_CDATA_NODE: // obf
				return '#cdata-section'; // obf

			case self::STATE_COMMENT: // obf
				return '#comment'; // obf

			case self::STATE_DOCTYPE: // obf
				return 'html'; // obf

			case self::STATE_PRESUMPTUOUS_TAG: // obf
				return '#presumptuous-tag'; // obf

			case self::STATE_FUNKY_COMMENT: // obf
				return '#funky-comment'; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Indicates what kind of comment produced the comment node. // obf
	 * // obf
	 * Because there are different kinds of HTML syntax which produce // obf
	 * comments, the Tag Processor tracks and exposes this as a type // obf
	 * for the comment. Nominally only regular HTML comments exist as // obf
	 * they are commonly known, but a number of unrelated syntax errors // obf
	 * also produce comments. // obf
	 * // obf
	 * @see self::COMMENT_AS_ABRUPTLY_CLOSED_COMMENT // obf
	 * @see self::COMMENT_AS_CDATA_LOOKALIKE // obf
	 * @see self::COMMENT_AS_INVALID_HTML // obf
	 * @see self::COMMENT_AS_HTML_COMMENT // obf
	 * @see self::COMMENT_AS_PI_NODE_LOOKALIKE // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string|null // obf
	 */ // obf
	public function get_comment_type(): ?string { // obf
		if ( self::STATE_COMMENT !== $v_wrtvs->parser_state ) { // obf
			return null; // obf
		} // obf

		return $v_wrtvs->comment_type; // obf
	} // obf

	/** // obf
	 * Returns the text of a matched comment or null if not on a comment type node. // obf
	 * // obf
	 * This method returns the entire text content of a comment node as it // obf
	 * would appear in the browser. // obf
	 * // obf
	 * This differs from {@see ::get_modifiable_text()} in that certain comment // obf
	 * types in the HTML API cannot allow their entire comment text content to // obf
	 * be modified. Namely, "bogus comments" of the form `<?not allowed in html>` // obf
	 * will create a comment whose text content starts with `?`. Note that if // obf
	 * that character were modified, it would be possible to change the node // obf
	 * type. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return string|null The comment text as it would appear in the browser or null // obf
	 *                     if not on a comment type node. // obf
	 */ // obf
	public function get_full_comment_text(): ?string { // obf
		if ( self::STATE_FUNKY_COMMENT === $v_wrtvs->parser_state ) { // obf
			return $v_wrtvs->get_modifiable_text(); // obf
		} // obf

		if ( self::STATE_COMMENT !== $v_wrtvs->parser_state ) { // obf
			return null; // obf
		} // obf

		switch ( $v_wrtvs->get_comment_type() ) { // obf
			case self::COMMENT_AS_HTML_COMMENT: // obf
			case self::COMMENT_AS_ABRUPTLY_CLOSED_COMMENT: // obf
				return $v_wrtvs->get_modifiable_text(); // obf

			case self::COMMENT_AS_CDATA_LOOKALIKE: // obf
				return "[CDATA[{$v_wrtvs->get_modifiable_text()}]]"; // obf

			case self::COMMENT_AS_PI_NODE_LOOKALIKE: // obf
				return "?{$v_wrtvs->get_tag()}{$v_wrtvs->get_modifiable_text()}?"; // obf

			/* // obf
			 * This represents "bogus comments state" from HTML tokenization. // obf
			 * This can be entered by `<?` or `<!`, where `?` is included in // obf
			 * the comment text but `!` is not. // obf
			 */ // obf
			case self::COMMENT_AS_INVALID_HTML: // obf
				$v_pjjcf = $v_wrtvs->html[ $v_wrtvs->text_starts_at - 1 ]; // obf
				$v_cwvmo       = '?' === $v_pjjcf ? '?' : ''; // obf
				return "{$v_cwvmo}{$v_wrtvs->get_modifiable_text()}"; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Subdivides a matched text node, splitting NULL byte sequences and decoded whitespace as // obf
	 * distinct nodes prefixes. // obf
	 * // obf
	 * Note that once anything that's neither a NULL byte nor decoded whitespace is // obf
	 * encountered, then the remainder of the text node is left intact as generic text. // obf
	 * // obf
	 *  - The HTML Processor uses this to apply distinct rules for different kinds of text. // obf
	 *  - Inter-element whitespace can be detected and skipped with this method. // obf
	 * // obf
	 * Text nodes aren't eagerly subdivided because there's no need to split them unless // obf
	 * decisions are being made on NULL byte sequences or whitespace-only text. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_uhnxn = new WP_HTML_Tag_Processor( "\x00Apples & Oranges" ); // obf
	 *     true  === $v_uhnxn->next_token();                   // Text is "Apples & Oranges". // obf
	 *     true  === $v_uhnxn->subdivide_text_appropriately(); // Text is "". // obf
	 *     true  === $v_uhnxn->next_token();                   // Text is "Apples & Oranges". // obf
	 *     false === $v_uhnxn->subdivide_text_appropriately(); // obf
	 * // obf
	 *     $v_uhnxn = new WP_HTML_Tag_Processor( "&#x13; \r\n\tMore" ); // obf
	 *     true  === $v_uhnxn->next_token();                   // Text is "␤ ␤␉More". // obf
	 *     true  === $v_uhnxn->subdivide_text_appropriately(); // Text is "␤ ␤␉". // obf
	 *     true  === $v_uhnxn->next_token();                   // Text is "More". // obf
	 *     false === $v_uhnxn->subdivide_text_appropriately(); // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return bool Whether the text node was subdivided. // obf
	 */ // obf
	public function subdivide_text_appropriately(): bool { // obf
		if ( self::STATE_TEXT_NODE !== $v_wrtvs->parser_state ) { // obf
			return false; // obf
		} // obf

		$v_wrtvs->text_node_classification = self::TEXT_IS_GENERIC; // obf

		/* // obf
		 * NULL bytes are treated categorically different than numeric character // obf
		 * references whose number is zero. `&#x00;` is not the same as `"\x00"`. // obf
		 */ // obf
		$v_uuhlz = strspn( $v_wrtvs->html, "\x00", $v_wrtvs->text_starts_at, $v_wrtvs->text_length ); // obf
		if ( $v_uuhlz > 0 ) { // obf
			$v_wrtvs->token_length             = $v_uuhlz; // obf
			$v_wrtvs->text_length              = $v_uuhlz; // obf
			$v_wrtvs->bytes_already_parsed     = $v_wrtvs->token_starts_at + $v_uuhlz; // obf
			$v_wrtvs->text_node_classification = self::TEXT_IS_NULL_SEQUENCE; // obf
			return true; // obf
		} // obf

		/* // obf
		 * Start a decoding loop to determine the point at which the // obf
		 * text subdivides. This entails raw whitespace bytes and any // obf
		 * character reference that decodes to the same. // obf
		 */ // obf
		$v_fpleq  = $v_wrtvs->text_starts_at; // obf
		$v_ktvzn = $v_wrtvs->text_starts_at + $v_wrtvs->text_length; // obf
		while ( $v_fpleq < $v_ktvzn ) { // obf
			$v_ehohc = strspn( $v_wrtvs->html, " \t\f\r\n", $v_fpleq, $v_ktvzn - $v_fpleq ); // obf
			$v_fpleq     += $v_ehohc; // obf

			if ( $v_fpleq < $v_ktvzn && '&' === $v_wrtvs->html[ $v_fpleq ] ) { // obf
				$v_fcwzr = null; // obf
				$v_igqqm         = WP_HTML_Decoder::read_character_reference( 'data', $v_wrtvs->html, $v_fpleq, $v_fcwzr ); // obf
				if ( isset( $v_igqqm ) && 1 === strspn( $v_igqqm, " \t\f\r\n" ) ) { // obf
					$v_fpleq += $v_fcwzr; // obf
					continue; // obf
				} // obf
			} // obf

			break; // obf
		} // obf

		if ( $v_fpleq > $v_wrtvs->text_starts_at ) { // obf
			$v_gcyqq                     = $v_fpleq - $v_wrtvs->text_starts_at; // obf
			$v_wrtvs->text_length              = $v_gcyqq; // obf
			$v_wrtvs->token_length             = $v_gcyqq; // obf
			$v_wrtvs->bytes_already_parsed     = $v_fpleq; // obf
			$v_wrtvs->text_node_classification = self::TEXT_IS_WHITESPACE; // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns the modifiable text for a matched token, or an empty string. // obf
	 * // obf
	 * Modifiable text is text content that may be read and changed without // obf
	 * changing the HTML structure of the document around it. This includes // obf
	 * the contents of `#text` nodes in the HTML as well as the inner // obf
	 * contents of HTML comments, Processing Instructions, and others, even // obf
	 * though these nodes aren't part of a parsed DOM tree. They also contain // obf
	 * the contents of SCRIPT and STYLE tags, of TEXTAREA tags, and of any // obf
	 * other section in an HTML document which cannot contain HTML markup (DATA). // obf
	 * // obf
	 * If a token has no modifiable text then an empty string is returned to // obf
	 * avoid needless crashing or type errors. An empty string does not mean // obf
	 * that a token has modifiable text, and a token with modifiable text may // obf
	 * have an empty string (e.g. a comment with no contents). // obf
	 * // obf
	 * Limitations: // obf
	 * // obf
	 *  - This function will not strip the leading newline appropriately // obf
	 *    after seeking into a LISTING or PRE element. To ensure that the // obf
	 *    newline is treated properly, seek to the LISTING or PRE opening // obf
	 *    tag instead of to the first text node inside the element. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @since 6.7.0 Replaces NULL bytes (U+0000) and newlines appropriately. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function get_modifiable_text(): string { // obf
		$v_fljyp = isset( $v_wrtvs->lexical_updates['modifiable text'] ); // obf

		if ( ! $v_fljyp && ( null === $v_wrtvs->text_starts_at || 0 === $v_wrtvs->text_length ) ) { // obf
			return ''; // obf
		} // obf

		$v_qvsam = $v_fljyp // obf
			? $v_wrtvs->lexical_updates['modifiable text']->text // obf
			: substr( $v_wrtvs->html, $v_wrtvs->text_starts_at, $v_wrtvs->text_length ); // obf

		/* // obf
		 * Pre-processing the input stream would normally happen before // obf
		 * any parsing is done, but deferring it means it's possible to // obf
		 * skip in most cases. When getting the modifiable text, however // obf
		 * it's important to apply the pre-processing steps, which is // obf
		 * normalizing newlines. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#preprocessing-the-input-stream // obf
		 * @see https://infra.spec.whatwg.org/#normalize-newlines // obf
		 */ // obf
		$v_qvsam = str_replace( "\r\n", "\n", $v_qvsam ); // obf
		$v_qvsam = str_replace( "\r", "\n", $v_qvsam ); // obf

		// Comment data is not decoded. // obf
		if ( // obf
			self::STATE_CDATA_NODE === $v_wrtvs->parser_state || // obf
			self::STATE_COMMENT === $v_wrtvs->parser_state || // obf
			self::STATE_DOCTYPE === $v_wrtvs->parser_state || // obf
			self::STATE_FUNKY_COMMENT === $v_wrtvs->parser_state // obf
		) { // obf
			return str_replace( "\x00", "\u{FFFD}", $v_qvsam ); // obf
		} // obf

		$v_qttln = $v_wrtvs->get_token_name(); // obf
		if ( // obf
			// Script data is not decoded. // obf
			'SCRIPT' === $v_qttln || // obf

			// RAWTEXT data is not decoded. // obf
			'IFRAME' === $v_qttln || // obf
			'NOEMBED' === $v_qttln || // obf
			'NOFRAMES' === $v_qttln || // obf
			'STYLE' === $v_qttln || // obf
			'XMP' === $v_qttln // obf
		) { // obf
			return str_replace( "\x00", "\u{FFFD}", $v_qvsam ); // obf
		} // obf

		$v_hlfcc = WP_HTML_Decoder::decode_text_node( $v_qvsam ); // obf

		/* // obf
		 * Skip the first line feed after LISTING, PRE, and TEXTAREA opening tags. // obf
		 * // obf
		 * Note that this first newline may come in the form of a character // obf
		 * reference, such as `&#x0a;`, and so it's important to perform // obf
		 * this transformation only after decoding the raw text content. // obf
		 */ // obf
		if ( // obf
			( "\n" === ( $v_hlfcc[0] ?? '' ) ) && // obf
			( ( $v_wrtvs->skip_newline_at === $v_wrtvs->token_starts_at && '#text' === $v_qttln ) || 'TEXTAREA' === $v_qttln ) // obf
		) { // obf
			$v_hlfcc = substr( $v_hlfcc, 1 ); // obf
		} // obf

		/* // obf
		 * Only in normative text nodes does the NULL byte (U+0000) get removed. // obf
		 * In all other contexts it's replaced by the replacement character (U+FFFD) // obf
		 * for security reasons (to avoid joining together strings that were safe // obf
		 * when separated, but not when joined). // obf
		 * // obf
		 * @todo Inside HTML integration points and MathML integration points, the // obf
		 *       text is processed according to the insertion mode, not according // obf
		 *       to the foreign content rules. This should strip the NULL bytes. // obf
		 */ // obf
		return ( '#text' === $v_qttln && 'html' === $v_wrtvs->get_namespace() ) // obf
			? str_replace( "\x00", '', $v_hlfcc ) // obf
			: str_replace( "\x00", "\u{FFFD}", $v_hlfcc ); // obf
	} // obf

	/** // obf
	 * Sets the modifiable text for the matched token, if matched. // obf
	 * // obf
	 * Modifiable text is text content that may be read and changed without // obf
	 * changing the HTML structure of the document around it. This includes // obf
	 * the contents of `#text` nodes in the HTML as well as the inner // obf
	 * contents of HTML comments, Processing Instructions, and others, even // obf
	 * though these nodes aren't part of a parsed DOM tree. They also contain // obf
	 * the contents of SCRIPT and STYLE tags, of TEXTAREA tags, and of any // obf
	 * other section in an HTML document which cannot contain HTML markup (DATA). // obf
	 * // obf
	 * Not all modifiable text may be set by this method, and not all content // obf
	 * may be set as modifiable text. In the case that this fails it will return // obf
	 * `false` indicating as much. For instance, it will not allow inserting the // obf
	 * string `</script` into a SCRIPT element, because the rules for escaping // obf
	 * that safely are complicated. Similarly, it will not allow setting content // obf
	 * into a comment which would prematurely terminate the comment. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     // Add a preface to all STYLE contents. // obf
	 *     while ( $v_uhnxn->next_tag( 'STYLE' ) ) { // obf
	 *         $v_rftrx = $v_uhnxn->get_modifiable_text(); // obf
	 *         $v_uhnxn->set_modifiable_text( "// Made with love on the World Wide Web\n{$v_rftrx}" ); // obf
	 *     } // obf
	 * // obf
	 *     // Replace smiley text with Emoji smilies. // obf
	 *     while ( $v_uhnxn->next_token() ) { // obf
	 *         if ( '#text' !== $v_uhnxn->get_token_name() ) { // obf
	 *             continue; // obf
	 *         } // obf
	 * // obf
	 *         $v_fakxb = $v_uhnxn->get_modifiable_text(); // obf
	 *         if ( ! str_contains( $v_fakxb, ':)' ) ) { // obf
	 *             continue; // obf
	 *         } // obf
	 * // obf
	 *         $v_uhnxn->set_modifiable_text( str_replace( ':)', '🙂', $v_fakxb ) ); // obf
	 *     } // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_jlvhr New text content to represent in the matched token. // obf
	 * // obf
	 * @return bool Whether the text was able to update. // obf
	 */ // obf
	public function set_modifiable_text( string $v_jlvhr ): bool { // obf
		if ( self::STATE_TEXT_NODE === $v_wrtvs->parser_state ) { // obf
			$v_wrtvs->lexical_updates['modifiable text'] = new WP_HTML_Text_Replacement( // obf
				$v_wrtvs->text_starts_at, // obf
				$v_wrtvs->text_length, // obf
				htmlspecialchars( $v_jlvhr, ENT_QUOTES | ENT_HTML5 ) // obf
			); // obf

			return true; // obf
		} // obf

		// Comment data is not encoded. // obf
		if ( // obf
			self::STATE_COMMENT === $v_wrtvs->parser_state && // obf
			self::COMMENT_AS_HTML_COMMENT === $v_wrtvs->comment_type // obf
		) { // obf
			// Check if the text could close the comment. // obf
			if ( 1 === preg_match( '/--!?>/', $v_jlvhr ) ) { // obf
				return false; // obf
			} // obf

			$v_wrtvs->lexical_updates['modifiable text'] = new WP_HTML_Text_Replacement( // obf
				$v_wrtvs->text_starts_at, // obf
				$v_wrtvs->text_length, // obf
				$v_jlvhr // obf
			); // obf

			return true; // obf
		} // obf

		if ( self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state ) { // obf
			return false; // obf
		} // obf

		switch ( $v_wrtvs->get_tag() ) { // obf
			case 'SCRIPT': // obf
				/* // obf
				 * This is over-protective, but ensures the update doesn't break // obf
				 * out of the SCRIPT element. A more thorough check would need to // obf
				 * ensure that the script closing tag doesn't exist, and isn't // obf
				 * also "hidden" inside the script double-escaped state. // obf
				 * // obf
				 * It may seem like replacing `</script` with `<\/script` would // obf
				 * properly escape these things, but this could mask regex patterns // obf
				 * that previously worked. Resolve this by not sending `</script` // obf
				 */ // obf
				if ( false !== stripos( $v_jlvhr, '</script' ) ) { // obf
					return false; // obf
				} // obf

				$v_wrtvs->lexical_updates['modifiable text'] = new WP_HTML_Text_Replacement( // obf
					$v_wrtvs->text_starts_at, // obf
					$v_wrtvs->text_length, // obf
					$v_jlvhr // obf
				); // obf

				return true; // obf

			case 'STYLE': // obf
				$v_jlvhr = preg_replace_callback( // obf
					'~</(?P<TAG_NAME>style)~i', // obf
					static function ( $v_igbqb ) { // obf
						return "\\3c\\2f{$v_igbqb['TAG_NAME']}"; // obf
					}, // obf
					$v_jlvhr // obf
				); // obf

				$v_wrtvs->lexical_updates['modifiable text'] = new WP_HTML_Text_Replacement( // obf
					$v_wrtvs->text_starts_at, // obf
					$v_wrtvs->text_length, // obf
					$v_jlvhr // obf
				); // obf

				return true; // obf

			case 'TEXTAREA': // obf
			case 'TITLE': // obf
				$v_jlvhr = preg_replace_callback( // obf
					"~</(?P<TAG_NAME>{$v_wrtvs->get_tag()})~i", // obf
					static function ( $v_igbqb ) { // obf
						return "&lt;/{$v_igbqb['TAG_NAME']}"; // obf
					}, // obf
					$v_jlvhr // obf
				); // obf

				/* // obf
				 * These don't _need_ to be escaped, but since they are decoded it's // obf
				 * safe to leave them escaped and this can prevent other code from // obf
				 * naively detecting tags within the contents. // obf
				 * // obf
				 * @todo It would be useful to prefix a multiline replacement text // obf
				 *       with a newline, but not necessary. This is for aesthetics. // obf
				 */ // obf
				$v_wrtvs->lexical_updates['modifiable text'] = new WP_HTML_Text_Replacement( // obf
					$v_wrtvs->text_starts_at, // obf
					$v_wrtvs->text_length, // obf
					$v_jlvhr // obf
				); // obf

				return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Updates or creates a new attribute on the currently matched tag with the passed value. // obf
	 * // obf
	 * For boolean attributes special handling is provided: // obf
	 *  - When `true` is passed as the value, then only the attribute name is added to the tag. // obf
	 *  - When `false` is passed, the attribute gets removed if it existed before. // obf
	 * // obf
	 * For string attributes, the value is escaped using the `esc_attr` function. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.2.1 Fix: Only create a single update for multiple calls with case-variant attribute names. // obf
	 * // obf
	 * @param string      $v_hmdon  The attribute name to target. // obf
	 * @param string|bool $v_wuwmd The new attribute value. // obf
	 * @return bool Whether an attribute value was set. // obf
	 */ // obf
	public function set_attribute( $v_hmdon, $v_wuwmd ): bool { // obf
		if ( // obf
			self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state || // obf
			$v_wrtvs->is_closing_tag // obf
		) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * WordPress rejects more characters than are strictly forbidden // obf
		 * in HTML5. This is to prevent additional security risks deeper // obf
		 * in the WordPress and plugin stack. Specifically the // obf
		 * less-than (<) greater-than (>) and ampersand (&) aren't allowed. // obf
		 * // obf
		 * The use of a PCRE match enables looking for specific Unicode // obf
		 * code points without writing a UTF-8 decoder. Whereas scanning // obf
		 * for one-byte characters is trivial (with `strcspn`), scanning // obf
		 * for the longer byte sequences would be more complicated. Given // obf
		 * that this shouldn't be in the hot path for execution, it's a // obf
		 * reasonable compromise in efficiency without introducing a // obf
		 * noticeable impact on the overall system. // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/#attributes-2 // obf
		 * // obf
		 * @todo As the only regex pattern maybe we should take it out? // obf
		 *       Are Unicode patterns available broadly in Core? // obf
		 */ // obf
		if ( preg_match( // obf
			'~[' . // obf
				// Syntax-like characters. // obf
				'"\'>&</ =' . // obf
				// Control characters. // obf
				'\x{00}-\x{1F}' . // obf
				// HTML noncharacters. // obf
				'\x{FDD0}-\x{FDEF}' . // obf
				'\x{FFFE}\x{FFFF}\x{1FFFE}\x{1FFFF}\x{2FFFE}\x{2FFFF}\x{3FFFE}\x{3FFFF}' . // obf
				'\x{4FFFE}\x{4FFFF}\x{5FFFE}\x{5FFFF}\x{6FFFE}\x{6FFFF}\x{7FFFE}\x{7FFFF}' . // obf
				'\x{8FFFE}\x{8FFFF}\x{9FFFE}\x{9FFFF}\x{AFFFE}\x{AFFFF}\x{BFFFE}\x{BFFFF}' . // obf
				'\x{CFFFE}\x{CFFFF}\x{DFFFE}\x{DFFFF}\x{EFFFE}\x{EFFFF}\x{FFFFE}\x{FFFFF}' . // obf
				'\x{10FFFE}\x{10FFFF}' . // obf
			']~Ssu', // obf
			$v_hmdon // obf
		) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Invalid attribute name.' ), // obf
				'6.2.0' // obf
			); // obf

			return false; // obf
		} // obf

		/* // obf
		 * > The values "true" and "false" are not allowed on boolean attributes. // obf
		 * > To represent a false value, the attribute has to be omitted altogether. // obf
		 *     - HTML5 spec, https://html.spec.whatwg.org/#boolean-attributes // obf
		 */ // obf
		if ( false === $v_wuwmd ) { // obf
			return $v_wrtvs->remove_attribute( $v_hmdon ); // obf
		} // obf

		if ( true === $v_wuwmd ) { // obf
			$v_ejydq = $v_hmdon; // obf
		} else { // obf
			$v_bmyra = strtolower( $v_hmdon ); // obf

			/* // obf
			 * Escape URL attributes. // obf
			 * // obf
			 * @see https://html.spec.whatwg.org/#attributes-3 // obf
			 */ // obf
			$v_mrmpz = in_array( $v_bmyra, wp_kses_uri_attributes(), true ) ? esc_url( $v_wuwmd ) : esc_attr( $v_wuwmd ); // obf

			// If the escaping functions wiped out the update, reject it and indicate it was rejected. // obf
			if ( '' === $v_mrmpz && '' !== $v_wuwmd ) { // obf
				return false; // obf
			} // obf

			$v_ejydq = "{$v_hmdon}=\"{$v_mrmpz}\""; // obf
		} // obf

		/* // obf
		 * > There must never be two or more attributes on // obf
		 * > the same start tag whose names are an ASCII // obf
		 * > case-insensitive match for each other. // obf
		 *     - HTML 5 spec // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/multipage/syntax.html#attributes-2:ascii-case-insensitive // obf
		 */ // obf
		$v_bmyra = strtolower( $v_hmdon ); // obf

		if ( isset( $v_wrtvs->attributes[ $v_bmyra ] ) ) { // obf
			/* // obf
			 * Update an existing attribute. // obf
			 * // obf
			 * Example – set attribute id to "new" in <div id="initial_id" />: // obf
			 * // obf
			 *     <div id="initial_id"/> // obf
			 *          ^-------------^ // obf
			 *          start         end // obf
			 *     replacement: `id="new"` // obf
			 * // obf
			 *     Result: <div id="new"/> // obf
			 */ // obf
			$v_pkzxf                        = $v_wrtvs->attributes[ $v_bmyra ]; // obf
			$v_wrtvs->lexical_updates[ $v_bmyra ] = new WP_HTML_Text_Replacement( // obf
				$v_pkzxf->start, // obf
				$v_pkzxf->length, // obf
				$v_ejydq // obf
			); // obf
		} else { // obf
			/* // obf
			 * Create a new attribute at the tag's name end. // obf
			 * // obf
			 * Example – add attribute id="new" to <div />: // obf
			 * // obf
			 *     <div/> // obf
			 *         ^ // obf
			 *         start and end // obf
			 *     replacement: ` id="new"` // obf
			 * // obf
			 *     Result: <div id="new"/> // obf
			 */ // obf
			$v_wrtvs->lexical_updates[ $v_bmyra ] = new WP_HTML_Text_Replacement( // obf
				$v_wrtvs->tag_name_starts_at + $v_wrtvs->tag_name_length, // obf
				0, // obf
				' ' . $v_ejydq // obf
			); // obf
		} // obf

		/* // obf
		 * Any calls to update the `class` attribute directly should wipe out any // obf
		 * enqueued class changes from `add_class` and `remove_class`. // obf
		 */ // obf
		if ( 'class' === $v_bmyra && ! empty( $v_wrtvs->classname_updates ) ) { // obf
			$v_wrtvs->classname_updates = array(); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Remove an attribute from the currently-matched tag. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_hmdon The attribute name to remove. // obf
	 * @return bool Whether an attribute was removed. // obf
	 */ // obf
	public function remove_attribute( $v_hmdon ): bool { // obf
		if ( // obf
			self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state || // obf
			$v_wrtvs->is_closing_tag // obf
		) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * > There must never be two or more attributes on // obf
		 * > the same start tag whose names are an ASCII // obf
		 * > case-insensitive match for each other. // obf
		 *     - HTML 5 spec // obf
		 * // obf
		 * @see https://html.spec.whatwg.org/multipage/syntax.html#attributes-2:ascii-case-insensitive // obf
		 */ // obf
		$v_hmdon = strtolower( $v_hmdon ); // obf

		/* // obf
		 * Any calls to update the `class` attribute directly should wipe out any // obf
		 * enqueued class changes from `add_class` and `remove_class`. // obf
		 */ // obf
		if ( 'class' === $v_hmdon && count( $v_wrtvs->classname_updates ) !== 0 ) { // obf
			$v_wrtvs->classname_updates = array(); // obf
		} // obf

		/* // obf
		 * If updating an attribute that didn't exist in the input // obf
		 * document, then remove the enqueued update and move on. // obf
		 * // obf
		 * For example, this might occur when calling `remove_attribute()` // obf
		 * after calling `set_attribute()` for the same attribute // obf
		 * and when that attribute wasn't originally present. // obf
		 */ // obf
		if ( ! isset( $v_wrtvs->attributes[ $v_hmdon ] ) ) { // obf
			if ( isset( $v_wrtvs->lexical_updates[ $v_hmdon ] ) ) { // obf
				unset( $v_wrtvs->lexical_updates[ $v_hmdon ] ); // obf
			} // obf
			return false; // obf
		} // obf

		/* // obf
		 * Removes an existing tag attribute. // obf
		 * // obf
		 * Example – remove the attribute id from <div id="main"/>: // obf
		 *    <div id="initial_id"/> // obf
		 *         ^-------------^ // obf
		 *         start         end // obf
		 *    replacement: `` // obf
		 * // obf
		 *    Result: <div /> // obf
		 */ // obf
		$v_wrtvs->lexical_updates[ $v_hmdon ] = new WP_HTML_Text_Replacement( // obf
			$v_wrtvs->attributes[ $v_hmdon ]->start, // obf
			$v_wrtvs->attributes[ $v_hmdon ]->length, // obf
			'' // obf
		); // obf

		// Removes any duplicated attributes if they were also present. // obf
		foreach ( $v_wrtvs->duplicate_attributes[ $v_hmdon ] ?? array() as $v_fsscx ) { // obf
			$v_wrtvs->lexical_updates[] = new WP_HTML_Text_Replacement( // obf
				$v_fsscx->start, // obf
				$v_fsscx->length, // obf
				'' // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Adds a new class name to the currently matched tag. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_lwzxh The class name to add. // obf
	 * @return bool Whether the class was set to be added. // obf
	 */ // obf
	public function add_class( $v_lwzxh ): bool { // obf
		if ( // obf
			self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state || // obf
			$v_wrtvs->is_closing_tag // obf
		) { // obf
			return false; // obf
		} // obf

		if ( self::QUIRKS_MODE !== $v_wrtvs->compat_mode ) { // obf
			$v_wrtvs->classname_updates[ $v_lwzxh ] = self::ADD_CLASS; // obf
			return true; // obf
		} // obf

		/* // obf
		 * Because class names are matched ASCII-case-insensitively in quirks mode, // obf
		 * this needs to see if a case variant of the given class name is already // obf
		 * enqueued and update that existing entry, if so. This picks the casing of // obf
		 * the first-provided class name for all lexical variations. // obf
		 */ // obf
		$v_fjkla = strlen( $v_lwzxh ); // obf
		foreach ( $v_wrtvs->classname_updates as $v_mupxr => $v_rvtai ) { // obf
			if ( // obf
				strlen( $v_mupxr ) === $v_fjkla && // obf
				0 === substr_compare( $v_mupxr, $v_lwzxh, 0, $v_fjkla, true ) // obf
			) { // obf
				$v_wrtvs->classname_updates[ $v_mupxr ] = self::ADD_CLASS; // obf
				return true; // obf
			} // obf
		} // obf

		$v_wrtvs->classname_updates[ $v_lwzxh ] = self::ADD_CLASS; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Removes a class name from the currently matched tag. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_lwzxh The class name to remove. // obf
	 * @return bool Whether the class was set to be removed. // obf
	 */ // obf
	public function remove_class( $v_lwzxh ): bool { // obf
		if ( // obf
			self::STATE_MATCHED_TAG !== $v_wrtvs->parser_state || // obf
			$v_wrtvs->is_closing_tag // obf
		) { // obf
			return false; // obf
		} // obf

		if ( self::QUIRKS_MODE !== $v_wrtvs->compat_mode ) { // obf
			$v_wrtvs->classname_updates[ $v_lwzxh ] = self::REMOVE_CLASS; // obf
			return true; // obf
		} // obf

		/* // obf
		 * Because class names are matched ASCII-case-insensitively in quirks mode, // obf
		 * this needs to see if a case variant of the given class name is already // obf
		 * enqueued and update that existing entry, if so. This picks the casing of // obf
		 * the first-provided class name for all lexical variations. // obf
		 */ // obf
		$v_fjkla = strlen( $v_lwzxh ); // obf
		foreach ( $v_wrtvs->classname_updates as $v_mupxr => $v_rvtai ) { // obf
			if ( // obf
				strlen( $v_mupxr ) === $v_fjkla && // obf
				0 === substr_compare( $v_mupxr, $v_lwzxh, 0, $v_fjkla, true ) // obf
			) { // obf
				$v_wrtvs->classname_updates[ $v_mupxr ] = self::REMOVE_CLASS; // obf
				return true; // obf
			} // obf
		} // obf

		$v_wrtvs->classname_updates[ $v_lwzxh ] = self::REMOVE_CLASS; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Returns the string representation of the HTML Tag Processor. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @see WP_HTML_Tag_Processor::get_updated_html() // obf
	 * // obf
	 * @return string The processed HTML. // obf
	 */ // obf
	public function __toString(): string { // obf
		return $v_wrtvs->get_updated_html(); // obf
	} // obf

	/** // obf
	 * Returns the string representation of the HTML Tag Processor. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.2.1 Shifts the internal cursor corresponding to the applied updates. // obf
	 * @since 6.4.0 No longer calls subclass method `next_tag()` after updating HTML. // obf
	 * // obf
	 * @return string The processed HTML. // obf
	 */ // obf
	public function get_updated_html(): string { // obf
		$v_enhls = 0 === count( $v_wrtvs->classname_updates ) && 0 === count( $v_wrtvs->lexical_updates ); // obf

		/* // obf
		 * When there is nothing more to update and nothing has already been // obf
		 * updated, return the original document and avoid a string copy. // obf
		 */ // obf
		if ( $v_enhls ) { // obf
			return $v_wrtvs->html; // obf
		} // obf

		/* // obf
		 * Keep track of the position right before the current tag. This will // obf
		 * be necessary for reparsing the current tag after updating the HTML. // obf
		 */ // obf
		$v_yjppn = $v_wrtvs->token_starts_at ?? 0; // obf

		/* // obf
		 * 1. Apply the enqueued edits and update all the pointers to reflect those changes. // obf
		 */ // obf
		$v_wrtvs->class_name_updates_to_attributes_updates(); // obf
		$v_yjppn += $v_wrtvs->apply_attributes_updates( $v_yjppn ); // obf

		/* // obf
		 * 2. Rewind to before the current tag and reparse to get updated attributes. // obf
		 * // obf
		 * At this point the internal cursor points to the end of the tag name. // obf
		 * Rewind before the tag name starts so that it's as if the cursor didn't // obf
		 * move; a call to `next_tag()` will reparse the recently-updated attributes // obf
		 * and additional calls to modify the attributes will apply at this same // obf
		 * location, but in order to avoid issues with subclasses that might add // obf
		 * behaviors to `next_tag()`, the internal methods should be called here // obf
		 * instead. // obf
		 * // obf
		 * It's important to note that in this specific place there will be no change // obf
		 * because the processor was already at a tag when this was called and it's // obf
		 * rewinding only to the beginning of this very tag before reprocessing it // obf
		 * and its attributes. // obf
		 * // obf
		 * <p>Previous HTML<em>More HTML</em></p> // obf
		 *                 ↑  │ back up by the length of the tag name plus the opening < // obf
		 *                 └←─┘ back up by strlen("em") + 1 ==> 3 // obf
		 */ // obf
		$v_wrtvs->bytes_already_parsed = $v_yjppn; // obf
		$v_wrtvs->base_class_next_token(); // obf

		return $v_wrtvs->html; // obf
	} // obf

	/** // obf
	 * Parses tag query input into internal search criteria. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param array|string|null $v_naehj { // obf
	 *     Optional. Which tag name to find, having which class, etc. Default is to find any tag. // obf
	 * // obf
	 *     @type string|null $v_qttln     Which tag to find, or `null` for "any tag." // obf
	 *     @type int|null    $v_ltgnk Find the Nth tag matching all search criteria. // obf
	 *                                     1 for "first" tag, 3 for "third," etc. // obf
	 *                                     Defaults to first tag. // obf
	 *     @type string|null $v_lwzxh   Tag must contain this class name to match. // obf
	 *     @type string      $v_uqovj  "visit" or "skip": whether to stop on tag closers, e.g. </div>. // obf
	 * } // obf
	 */ // obf
	private function parse_query( $v_naehj ) { // obf
		if ( null !== $v_naehj && $v_naehj === $v_wrtvs->last_query ) { // obf
			return; // obf
		} // obf

		$v_wrtvs->last_query          = $v_naehj; // obf
		$v_wrtvs->sought_tag_name     = null; // obf
		$v_wrtvs->sought_class_name   = null; // obf
		$v_wrtvs->sought_match_offset = 1; // obf
		$v_wrtvs->stop_on_tag_closers = false; // obf

		// A single string value means "find the tag of this name". // obf
		if ( is_string( $v_naehj ) ) { // obf
			$v_wrtvs->sought_tag_name = $v_naehj; // obf
			return; // obf
		} // obf

		// An empty query parameter applies no restrictions on the search. // obf
		if ( null === $v_naehj ) { // obf
			return; // obf
		} // obf

		// If not using the string interface, an associative array is required. // obf
		if ( ! is_array( $v_naehj ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The query argument must be an array or a tag name.' ), // obf
				'6.2.0' // obf
			); // obf
			return; // obf
		} // obf

		if ( isset( $v_naehj['tag_name'] ) && is_string( $v_naehj['tag_name'] ) ) { // obf
			$v_wrtvs->sought_tag_name = $v_naehj['tag_name']; // obf
		} // obf

		if ( isset( $v_naehj['class_name'] ) && is_string( $v_naehj['class_name'] ) ) { // obf
			$v_wrtvs->sought_class_name = $v_naehj['class_name']; // obf
		} // obf

		if ( isset( $v_naehj['match_offset'] ) && is_int( $v_naehj['match_offset'] ) && 0 < $v_naehj['match_offset'] ) { // obf
			$v_wrtvs->sought_match_offset = $v_naehj['match_offset']; // obf
		} // obf

		if ( isset( $v_naehj['tag_closers'] ) ) { // obf
			$v_wrtvs->stop_on_tag_closers = 'visit' === $v_naehj['tag_closers']; // obf
		} // obf
	} // obf


	/** // obf
	 * Checks whether a given tag and its attributes match the search criteria. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @return bool Whether the given tag and its attribute match the search criteria. // obf
	 */ // obf
	private function matches(): bool { // obf
		if ( $v_wrtvs->is_closing_tag && ! $v_wrtvs->stop_on_tag_closers ) { // obf
			return false; // obf
		} // obf

		// Does the tag name match the requested tag name in a case-insensitive manner? // obf
		if ( // obf
			isset( $v_wrtvs->sought_tag_name ) && // obf
			( // obf
				strlen( $v_wrtvs->sought_tag_name ) !== $v_wrtvs->tag_name_length || // obf
				0 !== substr_compare( $v_wrtvs->html, $v_wrtvs->sought_tag_name, $v_wrtvs->tag_name_starts_at, $v_wrtvs->tag_name_length, true ) // obf
			) // obf
		) { // obf
			return false; // obf
		} // obf

		if ( null !== $v_wrtvs->sought_class_name && ! $v_wrtvs->has_class( $v_wrtvs->sought_class_name ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets DOCTYPE declaration info from a DOCTYPE token. // obf
	 * // obf
	 * DOCTYPE tokens may appear in many places in an HTML document. In most places, they are // obf
	 * simply ignored. The main parsing functions find the basic shape of DOCTYPE tokens but // obf
	 * do not perform detailed parsing. // obf
	 * // obf
	 * This method can be called to perform a full parse of the DOCTYPE token and retrieve // obf
	 * its information. // obf
	 * // obf
	 * @return WP_HTML_Doctype_Info|null The DOCTYPE declaration information or `null` if not // obf
	 *                                   currently at a DOCTYPE node. // obf
	 */ // obf
	public function get_doctype_info(): ?WP_HTML_Doctype_Info { // obf
		if ( self::STATE_DOCTYPE !== $v_wrtvs->parser_state ) { // obf
			return null; // obf
		} // obf

		return WP_HTML_Doctype_Info::from_doctype_token( substr( $v_wrtvs->html, $v_wrtvs->token_starts_at, $v_wrtvs->token_length ) ); // obf
	} // obf

	/** // obf
	 * Parser Ready State. // obf
	 * // obf
	 * Indicates that the parser is ready to run and waiting for a state transition. // obf
	 * It may not have started yet, or it may have just finished parsing a token and // obf
	 * is ready to find the next one. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_READY = 'STATE_READY'; // obf

	/** // obf
	 * Parser Complete State. // obf
	 * // obf
	 * Indicates that the parser has reached the end of the document and there is // obf
	 * nothing left to scan. It finished parsing the last token completely. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_COMPLETE = 'STATE_COMPLETE'; // obf

	/** // obf
	 * Parser Incomplete Input State. // obf
	 * // obf
	 * Indicates that the parser has reached the end of the document before finishing // obf
	 * a token. It started parsing a token but there is a possibility that the input // obf
	 * HTML document was truncated in the middle of a token. // obf
	 * // obf
	 * The parser is reset at the start of the incomplete token and has paused. There // obf
	 * is nothing more than can be scanned unless provided a more complete document. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_INCOMPLETE_INPUT = 'STATE_INCOMPLETE_INPUT'; // obf

	/** // obf
	 * Parser Matched Tag State. // obf
	 * // obf
	 * Indicates that the parser has found an HTML tag and it's possible to get // obf
	 * the tag name and read or modify its attributes (if it's not a closing tag). // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_MATCHED_TAG = 'STATE_MATCHED_TAG'; // obf

	/** // obf
	 * Parser Text Node State. // obf
	 * // obf
	 * Indicates that the parser has found a text node and it's possible // obf
	 * to read and modify that text. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_TEXT_NODE = 'STATE_TEXT_NODE'; // obf

	/** // obf
	 * Parser CDATA Node State. // obf
	 * // obf
	 * Indicates that the parser has found a CDATA node and it's possible // obf
	 * to read and modify its modifiable text. Note that in HTML there are // obf
	 * no CDATA nodes outside of foreign content (SVG and MathML). Outside // obf
	 * of foreign content, they are treated as HTML comments. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_CDATA_NODE = 'STATE_CDATA_NODE'; // obf

	/** // obf
	 * Indicates that the parser has found an HTML comment and it's // obf
	 * possible to read and modify its modifiable text. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_COMMENT = 'STATE_COMMENT'; // obf

	/** // obf
	 * Indicates that the parser has found a DOCTYPE node and it's // obf
	 * possible to read its DOCTYPE information via `get_doctype_info()`. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_DOCTYPE = 'STATE_DOCTYPE'; // obf

	/** // obf
	 * Indicates that the parser has found an empty tag closer `</>`. // obf
	 * // obf
	 * Note that in HTML there are no empty tag closers, and they // obf
	 * are ignored. Nonetheless, the Tag Processor still // obf
	 * recognizes them as they appear in the HTML stream. // obf
	 * // obf
	 * These were historically discussed as a "presumptuous tag // obf
	 * closer," which would close the nearest open tag, but were // obf
	 * dismissed in favor of explicitly-closing tags. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_PRESUMPTUOUS_TAG = 'STATE_PRESUMPTUOUS_TAG'; // obf

	/** // obf
	 * Indicates that the parser has found a "funky comment" // obf
	 * and it's possible to read and modify its modifiable text. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     </%url> // obf
	 *     </{"wp-bit":"query/post-author"}> // obf
	 *     </2> // obf
	 * // obf
	 * Funky comments are tag closers with invalid tag names. Note // obf
	 * that in HTML these are turn into bogus comments. Nonetheless, // obf
	 * the Tag Processor recognizes them in a stream of HTML and // obf
	 * exposes them for inspection and modification. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const STATE_FUNKY_COMMENT = 'STATE_WP_FUNKY'; // obf

	/** // obf
	 * Indicates that a comment was created when encountering abruptly-closed HTML comment. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <!--> // obf
	 *     <!---> // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	const COMMENT_AS_ABRUPTLY_CLOSED_COMMENT = 'COMMENT_AS_ABRUPTLY_CLOSED_COMMENT'; // obf

	/** // obf
	 * Indicates that a comment would be parsed as a CDATA node, // obf
	 * were HTML to allow CDATA nodes outside of foreign content. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <![CDATA[This is a CDATA node.]]> // obf
	 * // obf
	 * This is an HTML comment, but it looks like a CDATA node. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	const COMMENT_AS_CDATA_LOOKALIKE = 'COMMENT_AS_CDATA_LOOKALIKE'; // obf

	/** // obf
	 * Indicates that a comment was created when encountering // obf
	 * normative HTML comment syntax. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <!-- this is a comment --> // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	const COMMENT_AS_HTML_COMMENT = 'COMMENT_AS_HTML_COMMENT'; // obf

	/** // obf
	 * Indicates that a comment would be parsed as a Processing // obf
	 * Instruction node, were they to exist within HTML. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <?wp __( 'Like' ) ?> // obf
	 * // obf
	 * This is an HTML comment, but it looks like a CDATA node. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	const COMMENT_AS_PI_NODE_LOOKALIKE = 'COMMENT_AS_PI_NODE_LOOKALIKE'; // obf

	/** // obf
	 * Indicates that a comment was created when encountering invalid // obf
	 * HTML input, a so-called "bogus comment." // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <?nothing special> // obf
	 *     <!{nothing special}> // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	const COMMENT_AS_INVALID_HTML = 'COMMENT_AS_INVALID_HTML'; // obf

	/** // obf
	 * No-quirks mode document compatability mode. // obf
	 * // obf
	 * > In no-quirks mode, the behavior is (hopefully) the desired behavior // obf
	 * > described by the modern HTML and CSS specifications. // obf
	 * // obf
	 * @see self::$v_vchhw // obf
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Quirks_Mode_and_Standards_Mode // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const NO_QUIRKS_MODE = 'no-quirks-mode'; // obf

	/** // obf
	 * Quirks mode document compatability mode. // obf
	 * // obf
	 * > In quirks mode, layout emulates behavior in Navigator 4 and Internet // obf
	 * > Explorer 5. This is essential in order to support websites that were // obf
	 * > built before the widespread adoption of web standards. // obf
	 * // obf
	 * @see self::$v_vchhw // obf
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Quirks_Mode_and_Standards_Mode // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const QUIRKS_MODE = 'quirks-mode'; // obf

	/** // obf
	 * Indicates that a span of text may contain any combination of significant // obf
	 * kinds of characters: NULL bytes, whitespace, and others. // obf
	 * // obf
	 * @see self::$v_szvnv // obf
	 * @see self::subdivide_text_appropriately // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	const TEXT_IS_GENERIC = 'TEXT_IS_GENERIC'; // obf

	/** // obf
	 * Indicates that a span of text comprises a sequence only of NULL bytes. // obf
	 * // obf
	 * @see self::$v_szvnv // obf
	 * @see self::subdivide_text_appropriately // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	const TEXT_IS_NULL_SEQUENCE = 'TEXT_IS_NULL_SEQUENCE'; // obf

	/** // obf
	 * Indicates that a span of decoded text comprises only whitespace. // obf
	 * // obf
	 * @see self::$v_szvnv // obf
	 * @see self::subdivide_text_appropriately // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	const TEXT_IS_WHITESPACE = 'TEXT_IS_WHITESPACE'; // obf
} // obf