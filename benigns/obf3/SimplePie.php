

<?php // obf

/** // obf
 * SimplePie // obf
 * // obf
 * A PHP-Based RSS and Atom Feed Framework. // obf
 * Takes the hard work out of managing a complete RSS/Atom solution. // obf
 * // obf
 * Copyright (c) 2004-2017, Ryan Parman, Sam Sneddon, Ryan McCue, and contributors // obf
 * All rights reserved. // obf
 * // obf
 * Redistribution and use in source and binary forms, with or without modification, are // obf
 * permitted provided that the following conditions are met: // obf
 * // obf
 * 	* Redistributions of source code must retain the above copyright notice, this list of // obf
 * 	  conditions and the following disclaimer. // obf
 * // obf
 * 	* Redistributions in binary form must reproduce the above copyright notice, this list // obf
 * 	  of conditions and the following disclaimer in the documentation and/or other materials // obf
 * 	  provided with the distribution. // obf
 * // obf
 * 	* Neither the name of the SimplePie Team nor the names of its contributors may be used // obf
 * 	  to endorse or promote products derived from this software without specific prior // obf
 * 	  written permission. // obf
 * // obf
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS // obf
 * OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY // obf
 * AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS // obf
 * AND CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR // obf
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR // obf
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY // obf
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR // obf
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE // obf
 * POSSIBILITY OF SUCH DAMAGE. // obf
 * // obf
 * @package SimplePie // obf
 * @version 1.7.0 // obf
 * @copyright 2004-2017 Ryan Parman, Sam Sneddon, Ryan McCue // obf
 * @author Ryan Parman // obf
 * @author Sam Sneddon // obf
 * @author Ryan McCue // obf
 * @link http://simplepie.org/ SimplePie // obf
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License // obf
 */ // obf

use SimplePie\SimplePie as NamespacedSimplePie; // obf

class_exists('SimplePie\SimplePie'); // obf

// @trigger_error(sprintf('Using the "SimplePie" class is deprecated since SimplePie 1.7.0, use "SimplePie\SimplePie" instead.'), \E_USER_DEPRECATED); // obf

if (\false) { // obf
    /** @deprecated since SimplePie 1.7.0, use "SimplePie\SimplePie" instead */ // obf
    class SimplePie extends NamespacedSimplePie // obf
    { // obf
    } // obf
} // obf

/** // obf
 * SimplePie Name // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAME instead. // obf
 */ // obf
define('SIMPLEPIE_NAME', NamespacedSimplePie::NAME); // obf

/** // obf
 * SimplePie Version // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::VERSION instead. // obf
 */ // obf
define('SIMPLEPIE_VERSION', NamespacedSimplePie::VERSION); // obf

/** // obf
 * SimplePie Build // obf
 * @todo Hardcode for release (there's no need to have to call SimplePie_Misc::get_build() only every load of simplepie.inc) // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\Misc::get_build() instead. // obf
 */ // obf
define('SIMPLEPIE_BUILD', gmdate('YmdHis', \SimplePie\Misc::get_build())); // obf

/** // obf
 * SimplePie Website URL // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::URL instead. // obf
 */ // obf
define('SIMPLEPIE_URL', NamespacedSimplePie::URL); // obf

/** // obf
 * SimplePie Useragent // obf
 * @see SimplePie::set_useragent() // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\Misc::get_default_useragent() instead. // obf
 */ // obf
define('SIMPLEPIE_USERAGENT', \SimplePie\Misc::get_default_useragent()); // obf

/** // obf
 * SimplePie Linkback // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LINKBACK instead. // obf
 */ // obf
define('SIMPLEPIE_LINKBACK', NamespacedSimplePie::LINKBACK); // obf

/** // obf
 * No Autodiscovery // obf
 * @see SimplePie::set_autodiscovery_level() // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LOCATOR_NONE instead. // obf
 */ // obf
define('SIMPLEPIE_LOCATOR_NONE', NamespacedSimplePie::LOCATOR_NONE); // obf

/** // obf
 * Feed Link Element Autodiscovery // obf
 * @see SimplePie::set_autodiscovery_level() // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LOCATOR_AUTODISCOVERY instead. // obf
 */ // obf
define('SIMPLEPIE_LOCATOR_AUTODISCOVERY', NamespacedSimplePie::LOCATOR_AUTODISCOVERY); // obf

/** // obf
 * Local Feed Extension Autodiscovery // obf
 * @see SimplePie::set_autodiscovery_level() // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LOCATOR_LOCAL_EXTENSION instead. // obf
 */ // obf
define('SIMPLEPIE_LOCATOR_LOCAL_EXTENSION', NamespacedSimplePie::LOCATOR_LOCAL_EXTENSION); // obf

/** // obf
 * Local Feed Body Autodiscovery // obf
 * @see SimplePie::set_autodiscovery_level() // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LOCATOR_LOCAL_BODY instead. // obf
 */ // obf
define('SIMPLEPIE_LOCATOR_LOCAL_BODY', NamespacedSimplePie::LOCATOR_LOCAL_BODY); // obf

/** // obf
 * Remote Feed Extension Autodiscovery // obf
 * @see SimplePie::set_autodiscovery_level() // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LOCATOR_REMOTE_EXTENSION instead. // obf
 */ // obf
define('SIMPLEPIE_LOCATOR_REMOTE_EXTENSION', NamespacedSimplePie::LOCATOR_REMOTE_EXTENSION); // obf

/** // obf
 * Remote Feed Body Autodiscovery // obf
 * @see SimplePie::set_autodiscovery_level() // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LOCATOR_REMOTE_BODY instead. // obf
 */ // obf
define('SIMPLEPIE_LOCATOR_REMOTE_BODY', NamespacedSimplePie::LOCATOR_REMOTE_BODY); // obf

/** // obf
 * All Feed Autodiscovery // obf
 * @see SimplePie::set_autodiscovery_level() // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LOCATOR_ALL instead. // obf
 */ // obf
define('SIMPLEPIE_LOCATOR_ALL', NamespacedSimplePie::LOCATOR_ALL); // obf

/** // obf
 * No known feed type // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_NONE instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_NONE', NamespacedSimplePie::TYPE_NONE); // obf

/** // obf
 * RSS 0.90 // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_090 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_090', NamespacedSimplePie::TYPE_RSS_090); // obf

/** // obf
 * RSS 0.91 (Netscape) // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_091_NETSCAPE instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_091_NETSCAPE', NamespacedSimplePie::TYPE_RSS_091_NETSCAPE); // obf

/** // obf
 * RSS 0.91 (Userland) // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_091_USERLAND instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_091_USERLAND', NamespacedSimplePie::TYPE_RSS_091_USERLAND); // obf

/** // obf
 * RSS 0.91 (both Netscape and Userland) // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_091 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_091', NamespacedSimplePie::TYPE_RSS_091); // obf

/** // obf
 * RSS 0.92 // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_092 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_092', NamespacedSimplePie::TYPE_RSS_092); // obf

/** // obf
 * RSS 0.93 // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_093 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_093', NamespacedSimplePie::TYPE_RSS_093); // obf

/** // obf
 * RSS 0.94 // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_094 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_094', NamespacedSimplePie::TYPE_RSS_094); // obf

/** // obf
 * RSS 1.0 // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_10 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_10', NamespacedSimplePie::TYPE_RSS_10); // obf

/** // obf
 * RSS 2.0 // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_20 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_20', NamespacedSimplePie::TYPE_RSS_20); // obf

/** // obf
 * RDF-based RSS // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_RDF instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_RDF', NamespacedSimplePie::TYPE_RSS_RDF); // obf

/** // obf
 * Non-RDF-based RSS (truly intended as syndication format) // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_SYNDICATION instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_SYNDICATION', NamespacedSimplePie::TYPE_RSS_SYNDICATION); // obf

/** // obf
 * All RSS // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_RSS_ALL instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_RSS_ALL', NamespacedSimplePie::TYPE_RSS_ALL); // obf

/** // obf
 * Atom 0.3 // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_ATOM_03 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_ATOM_03', NamespacedSimplePie::TYPE_ATOM_03); // obf

/** // obf
 * Atom 1.0 // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_ATOM_10 instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_ATOM_10', NamespacedSimplePie::TYPE_ATOM_10); // obf

/** // obf
 * All Atom // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_ATOM_ALL instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_ATOM_ALL', NamespacedSimplePie::TYPE_ATOM_ALL); // obf

/** // obf
 * All feed types // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::TYPE_ALL instead. // obf
 */ // obf
define('SIMPLEPIE_TYPE_ALL', NamespacedSimplePie::TYPE_ALL); // obf

/** // obf
 * No construct // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::CONSTRUCT_NONE instead. // obf
 */ // obf
define('SIMPLEPIE_CONSTRUCT_NONE', NamespacedSimplePie::CONSTRUCT_NONE); // obf

/** // obf
 * Text construct // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::CONSTRUCT_TEXT instead. // obf
 */ // obf
define('SIMPLEPIE_CONSTRUCT_TEXT', NamespacedSimplePie::CONSTRUCT_TEXT); // obf

/** // obf
 * HTML construct // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::CONSTRUCT_HTML instead. // obf
 */ // obf
define('SIMPLEPIE_CONSTRUCT_HTML', NamespacedSimplePie::CONSTRUCT_HTML); // obf

/** // obf
 * XHTML construct // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::CONSTRUCT_XHTML instead. // obf
 */ // obf
define('SIMPLEPIE_CONSTRUCT_XHTML', NamespacedSimplePie::CONSTRUCT_XHTML); // obf

/** // obf
 * base64-encoded construct // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::CONSTRUCT_BASE64 instead. // obf
 */ // obf
define('SIMPLEPIE_CONSTRUCT_BASE64', NamespacedSimplePie::CONSTRUCT_BASE64); // obf

/** // obf
 * IRI construct // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::CONSTRUCT_IRI instead. // obf
 */ // obf
define('SIMPLEPIE_CONSTRUCT_IRI', NamespacedSimplePie::CONSTRUCT_IRI); // obf

/** // obf
 * A construct that might be HTML // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::CONSTRUCT_MAYBE_HTML instead. // obf
 */ // obf
define('SIMPLEPIE_CONSTRUCT_MAYBE_HTML', NamespacedSimplePie::CONSTRUCT_MAYBE_HTML); // obf

/** // obf
 * All constructs // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::CONSTRUCT_ALL instead. // obf
 */ // obf
define('SIMPLEPIE_CONSTRUCT_ALL', NamespacedSimplePie::CONSTRUCT_ALL); // obf

/** // obf
 * Don't change case // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::SAME_CASE instead. // obf
 */ // obf
define('SIMPLEPIE_SAME_CASE', NamespacedSimplePie::SAME_CASE); // obf

/** // obf
 * Change to lowercase // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::LOWERCASE instead. // obf
 */ // obf
define('SIMPLEPIE_LOWERCASE', NamespacedSimplePie::LOWERCASE); // obf

/** // obf
 * Change to uppercase // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::UPPERCASE instead. // obf
 */ // obf
define('SIMPLEPIE_UPPERCASE', NamespacedSimplePie::UPPERCASE); // obf

/** // obf
 * PCRE for HTML attributes // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::PCRE_HTML_ATTRIBUTE instead. // obf
 */ // obf
define('SIMPLEPIE_PCRE_HTML_ATTRIBUTE', NamespacedSimplePie::PCRE_HTML_ATTRIBUTE); // obf

/** // obf
 * PCRE for XML attributes // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::PCRE_XML_ATTRIBUTE instead. // obf
 */ // obf
define('SIMPLEPIE_PCRE_XML_ATTRIBUTE', NamespacedSimplePie::PCRE_XML_ATTRIBUTE); // obf

/** // obf
 * XML Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_XML instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_XML', NamespacedSimplePie::NAMESPACE_XML); // obf

/** // obf
 * Atom 1.0 Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_ATOM_10 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_ATOM_10', NamespacedSimplePie::NAMESPACE_ATOM_10); // obf

/** // obf
 * Atom 0.3 Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_ATOM_03 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_ATOM_03', NamespacedSimplePie::NAMESPACE_ATOM_03); // obf

/** // obf
 * RDF Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_RDF instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_RDF', NamespacedSimplePie::NAMESPACE_RDF); // obf

/** // obf
 * RSS 0.90 Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_RSS_090 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_RSS_090', NamespacedSimplePie::NAMESPACE_RSS_090); // obf

/** // obf
 * RSS 1.0 Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_RSS_10 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_RSS_10', NamespacedSimplePie::NAMESPACE_RSS_10); // obf

/** // obf
 * RSS 1.0 Content Module Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_RSS_10_MODULES_CONTENT instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_RSS_10_MODULES_CONTENT', NamespacedSimplePie::NAMESPACE_RSS_10_MODULES_CONTENT); // obf

/** // obf
 * RSS 2.0 Namespace // obf
 * (Stupid, I know, but I'm certain it will confuse people less with support.) // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_RSS_20 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_RSS_20', NamespacedSimplePie::NAMESPACE_RSS_20); // obf

/** // obf
 * DC 1.0 Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_DC_10 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_DC_10', NamespacedSimplePie::NAMESPACE_DC_10); // obf

/** // obf
 * DC 1.1 Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_DC_11 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_DC_11', NamespacedSimplePie::NAMESPACE_DC_11); // obf

/** // obf
 * W3C Basic Geo (WGS84 lat/long) Vocabulary Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_W3C_BASIC_GEO instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_W3C_BASIC_GEO', NamespacedSimplePie::NAMESPACE_W3C_BASIC_GEO); // obf

/** // obf
 * GeoRSS Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_GEORSS instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_GEORSS', NamespacedSimplePie::NAMESPACE_GEORSS); // obf

/** // obf
 * Media RSS Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_MEDIARSS instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_MEDIARSS', NamespacedSimplePie::NAMESPACE_MEDIARSS); // obf

/** // obf
 * Wrong Media RSS Namespace. Caused by a long-standing typo in the spec. // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_MEDIARSS_WRONG instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG', NamespacedSimplePie::NAMESPACE_MEDIARSS_WRONG); // obf

/** // obf
 * Wrong Media RSS Namespace #2. New namespace introduced in Media RSS 1.5. // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_MEDIARSS_WRONG2 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG2', NamespacedSimplePie::NAMESPACE_MEDIARSS_WRONG2); // obf

/** // obf
 * Wrong Media RSS Namespace #3. A possible typo of the Media RSS 1.5 namespace. // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_MEDIARSS_WRONG3 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG3', NamespacedSimplePie::NAMESPACE_MEDIARSS_WRONG3); // obf

/** // obf
 * Wrong Media RSS Namespace #4. New spec location after the RSS Advisory Board takes it over, but not a valid namespace. // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_MEDIARSS_WRONG4 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG4', NamespacedSimplePie::NAMESPACE_MEDIARSS_WRONG4); // obf

/** // obf
 * Wrong Media RSS Namespace #5. A possible typo of the RSS Advisory Board URL. // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_MEDIARSS_WRONG5 instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_MEDIARSS_WRONG5', NamespacedSimplePie::NAMESPACE_MEDIARSS_WRONG5); // obf

/** // obf
 * iTunes RSS Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_ITUNES instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_ITUNES', NamespacedSimplePie::NAMESPACE_ITUNES); // obf

/** // obf
 * XHTML Namespace // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::NAMESPACE_XHTML instead. // obf
 */ // obf
define('SIMPLEPIE_NAMESPACE_XHTML', NamespacedSimplePie::NAMESPACE_XHTML); // obf

/** // obf
 * IANA Link Relations Registry // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::IANA_LINK_RELATIONS_REGISTRY instead. // obf
 */ // obf
define('SIMPLEPIE_IANA_LINK_RELATIONS_REGISTRY', NamespacedSimplePie::IANA_LINK_RELATIONS_REGISTRY); // obf

/** // obf
 * No file source // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::FILE_SOURCE_NONE instead. // obf
 */ // obf
define('SIMPLEPIE_FILE_SOURCE_NONE', NamespacedSimplePie::FILE_SOURCE_NONE); // obf

/** // obf
 * Remote file source // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::FILE_SOURCE_REMOTE instead. // obf
 */ // obf
define('SIMPLEPIE_FILE_SOURCE_REMOTE', NamespacedSimplePie::FILE_SOURCE_REMOTE); // obf

/** // obf
 * Local file source // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::FILE_SOURCE_LOCAL instead. // obf
 */ // obf
define('SIMPLEPIE_FILE_SOURCE_LOCAL', NamespacedSimplePie::FILE_SOURCE_LOCAL); // obf

/** // obf
 * fsockopen() file source // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::FILE_SOURCE_FSOCKOPEN instead. // obf
 */ // obf
define('SIMPLEPIE_FILE_SOURCE_FSOCKOPEN', NamespacedSimplePie::FILE_SOURCE_FSOCKOPEN); // obf

/** // obf
 * cURL file source // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::FILE_SOURCE_CURL instead. // obf
 */ // obf
define('SIMPLEPIE_FILE_SOURCE_CURL', NamespacedSimplePie::FILE_SOURCE_CURL); // obf

/** // obf
 * file_get_contents() file source // obf
 * @deprecated since SimplePie 1.7.0, use \SimplePie\SimplePie::FILE_SOURCE_FILE_GET_CONTENTS instead. // obf
 */ // obf
define('SIMPLEPIE_FILE_SOURCE_FILE_GET_CONTENTS', NamespacedSimplePie::FILE_SOURCE_FILE_GET_CONTENTS); // obf