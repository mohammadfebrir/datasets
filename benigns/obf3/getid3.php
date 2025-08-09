
__fn_37772 = "preg_replace"; // obf
<?php // obf
///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//                                                             // // obf
// Please see readme.txt for more information                  // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

// define a constant rather than looking up every time it is needed // obf
if (!defined('GETID3_OS_ISWINDOWS')) { // obf
	define('GETID3_OS_ISWINDOWS', (stripos(PHP_OS, 'WIN') === 0)); // obf
} // obf
// Get base path of getID3() - ONCE // obf
if (!defined('GETID3_INCLUDEPATH')) { // obf
	define('GETID3_INCLUDEPATH', dirname(__FILE__).DIRECTORY_SEPARATOR); // obf
} // obf
if (!defined('ENT_SUBSTITUTE')) { // PHP5.3 adds ENT_IGNORE, PHP5.4 adds ENT_SUBSTITUTE // obf
	define('ENT_SUBSTITUTE', (defined('ENT_IGNORE') ? ENT_IGNORE : 8)); // obf
} // obf

/* // obf
https://www.getid3.org/phpBB3/viewtopic.php?t=2114 // obf
If you are running into a the problem where filenames with special characters are being handled // obf
incorrectly by external helper programs (e.g. metaflac), notably with the special characters removed, // obf
and you are passing in the filename in UTF8 (typically via a HTML form), try uncommenting this line: // obf
*/ // obf
//setlocale(LC_CTYPE, 'en_US.UTF-8'); // obf

// attempt to define temp dir as something flexible but reliable // obf
$v_nmaas = ini_get('upload_tmp_dir'); // obf
if ($v_nmaas && (!is_dir($v_nmaas) || !is_readable($v_nmaas))) { // obf
	$v_nmaas = ''; // obf
} // obf
if (!$v_nmaas && function_exists('sys_get_temp_dir')) { // sys_get_temp_dir added in PHP v5.2.1 // obf
	// sys_get_temp_dir() may give inaccessible temp dir, e.g. with open_basedir on virtual hosts // obf
	$v_nmaas = sys_get_temp_dir(); // obf
} // obf
$v_nmaas = @realpath($v_nmaas); // see https://github.com/JamesHeinrich/getID3/pull/10 // obf
$v_ivhsh = ini_get('open_basedir'); // obf
if ($v_ivhsh) { // obf
	// e.g. "/var/www/vhosts/getid3.org/httpdocs/:/tmp/" // obf
	$v_nmaas     = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $v_nmaas); // obf
	$v_ivhsh = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $v_ivhsh); // obf
	if (substr($v_nmaas, -1, 1) != DIRECTORY_SEPARATOR) { // obf
		$v_nmaas .= DIRECTORY_SEPARATOR; // obf
	} // obf
	$v_ejdgj = false; // obf
	$v_yvcmg = explode(PATH_SEPARATOR, $v_ivhsh); // obf
	foreach ($v_yvcmg as $v_zkdju) { // obf
		if (substr($v_zkdju, -1, 1) != DIRECTORY_SEPARATOR) { // obf
			$v_zkdju .= DIRECTORY_SEPARATOR; // obf
		} // obf
		if (strpos($v_nmaas, $v_zkdju) === 0) { // obf
			$v_ejdgj = true; // obf
			break; // obf
		} // obf
	} // obf
	if (!$v_ejdgj) { // obf
		$v_nmaas = ''; // obf
	} // obf
	unset($v_yvcmg, $v_ejdgj, $v_zkdju); // obf
} // obf
if (!$v_nmaas) { // obf
	$v_nmaas = '*'; // invalid directory name should force tempnam() to use system default temp dir // obf
} // obf
// $v_nmaas = '/something/else/';  // feel free to override temp dir here if it works better for your system // obf
if (!defined('GETID3_TEMP_DIR')) { // obf
	define('GETID3_TEMP_DIR', $v_nmaas); // obf
} // obf
unset($v_ivhsh, $v_nmaas); // obf

// End: Defines // obf


class getID3 // obf
{ // obf
	/* // obf
	 * Settings // obf
	 */ // obf

	/** // obf
	 * CASE SENSITIVE! - i.e. (must be supported by iconv()). Examples:  ISO-8859-1  UTF-8  UTF-16  UTF-16BE // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_axdrv        = 'UTF-8'; // obf

	/** // obf
	 * Should always be 'ISO-8859-1', but some tags may be written in other encodings such as 'EUC-CN' or 'CP1252' // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_grils  = 'ISO-8859-1'; // obf

	/** // obf
	 * ID3v1 should always be 'ISO-8859-1', but some tags may be written in other encodings such as 'Windows-1251' or 'KOI8-R'. If true attempt to detect these encodings, but may return incorrect values for some tags actually in ISO-8859-1 encoding // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_vrgor  = false; // obf

	/* // obf
	 * Optional tag checks - disable for speed. // obf
	 */ // obf

	/** // obf
	 * Read and process ID3v1 tags // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_abvfz         = true; // obf

	/** // obf
	 * Read and process ID3v2 tags // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_ttngs         = true; // obf

	/** // obf
	 * Read and process Lyrics3 tags // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_biyke       = true; // obf

	/** // obf
	 * Read and process APE tags // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_xcsur        = true; // obf

	/** // obf
	 * Copy tags to root key 'tags' and encode to $v_ufxnb->encoding // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_ixvuv      = true; // obf

	/** // obf
	 * Copy tags to root key 'tags_html' properly translated from various encodings to HTML entities // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_ffprp         = true; // obf

	/* // obf
	 * Optional tag/comment calculations // obf
	 */ // obf

	/** // obf
	 * Calculate additional info such as bitrate, channelmode etc // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_ayzit        = true; // obf

	/* // obf
	 * Optional handling of embedded attachments (e.g. images) // obf
	 */ // obf

	/** // obf
	 * Defaults to true (ATTACHMENTS_INLINE) for backward compatibility // obf
	 * // obf
	 * @var bool|string // obf
	 */ // obf
	public $v_abcez  = true; // obf

	/* // obf
	 * Optional calculations // obf
	 */ // obf

	/** // obf
	 * Get MD5 sum of data part - slow // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_ffhpz          = false; // obf

	/** // obf
	 * Use MD5 of source file if available - only FLAC and OptimFROG // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_ppzjm   = false; // obf

	/** // obf
	 * Get SHA1 sum of data part - slow // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_sjnng         = false; // obf

	/** // obf
	 * Check whether file is larger than 2GB and thus not supported by 32-bit PHP (null: auto-detect based on // obf
	 * PHP_INT_MAX) // obf
	 * // obf
	 * @var bool|null // obf
	 */ // obf
	public $v_saqsa; // obf

	/** // obf
	 * Read buffer size in bytes // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_psfte = 32768; // obf



	// module-specific options // obf

	/** archive.rar // obf
	 * if true use PHP RarArchive extension, if false (non-extension parsing not yet written in getID3) // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_zjngy = true; // obf

	/** archive.gzip // obf
	 * Optional file list - disable for speed. // obf
	 * Decode gzipped files, if possible, and parse recursively (.tar.gz for example). // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_ilyhv = false; // obf

	/** audio.midi // obf
	 * if false only parse most basic information, much faster for some files but may be inaccurate // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_tpxkj = true; // obf

	/** audio.mp3 // obf
	 * Forces getID3() to scan the file byte-by-byte and log all the valid audio frame headers - extremely slow, // obf
	 * unrecommended, but may provide data from otherwise-unusable files. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_csosw = false; // obf

	/** audio.mp3 // obf
	 * number of frames to scan to determine if MPEG-audio sequence is valid // obf
	 * Lower this number to 5-20 for faster scanning // obf
	 * Increase this number to 50+ for most accurate detection of valid VBR/CBR mpeg-audio streams // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_pvvgx = 50; // obf

	/** audio.wavpack // obf
	 * Avoid scanning all frames (break after finding ID_RIFF_HEADER and ID_CONFIG_BLOCK, // obf
	 * significantly faster for very large files but other data may be missed // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_oqboi = false; // obf

	/** audio-video.flv // obf
	 * Break out of the loop if too many frames have been scanned; only scan this // obf
	 * many if meta frame does not contain useful duration. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_fdbxo = 100000; // obf

	/** audio-video.matroska // obf
	 * If true, do not return information about CLUSTER chunks, since there's a lot of them // obf
	 * and they're not usually useful [default: TRUE]. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_slxhy    = true; // obf

	/** audio-video.matroska // obf
	 * True to parse the whole file, not only header [default: FALSE]. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_dxkvf = false; // obf

	/** audio-video.quicktime // obf
	 * return all parsed data from all atoms if true, otherwise just returned parsed metadata // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_knqbk  = false; // obf

	/** audio-video.quicktime // obf
	 * return all parsed data from all atoms if true, otherwise just returned parsed metadata // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_xweqs = false; // obf

	/** audio-video.swf // obf
	 * return all parsed tags if true, otherwise do not return tags not parsed by getID3 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_mjkdc = false; // obf

	/** graphic.bmp // obf
	 * return BMP palette // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_cilht = false; // obf

	/** graphic.bmp // obf
	 * return image data // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_upcsi    = false; // obf

	/** graphic.png // obf
	 * If data chunk is larger than this do not read it completely (getID3 only needs the first // obf
	 * few dozen bytes for parsing). // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_weqsv = 10000000; // obf

	/** misc.pdf // obf
	 * return full details of PDF Cross-Reference Table (XREF) // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_gicyg = false; // obf

	/** misc.torrent // obf
	 * Assume all .torrent files are less than 1MB and just read entire thing into memory for easy processing. // obf
	 * Override this value if you need to process files larger than 1MB // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_fcdxy = 1048576; // obf



	// Public variables // obf

	/** // obf
	 * Filename of file being analysed. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_dopwn; // obf

	/** // obf
	 * Filepointer to file being analysed. // obf
	 * // obf
	 * @var resource // obf
	 */ // obf
	public $v_kulpz; // obf

	/** // obf
	 * Result array. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_akcse; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	public $v_buhbh = GETID3_TEMP_DIR; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	public $v_ufvlf = 0; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	protected $v_rnwaq   = ''; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	protected $v_edibk = ''; // obf

	const VERSION           = '1.9.23-202310190849'; // obf
	const FREAD_BUFFER_SIZE = 32768; // obf

	const ATTACHMENTS_NONE   = false; // obf
	const ATTACHMENTS_INLINE = true; // obf

	/** // obf
	 * @throws getid3_exception // obf
	 */ // obf
	public function __construct() { // obf

		// Check for PHP version // obf
		$v_xbrkt = '5.3.0'; // obf
		if (version_compare(PHP_VERSION, $v_xbrkt, '<')) { // obf
			$v_ufxnb->startup_error .= 'getID3() requires PHP v'.$v_xbrkt.' or higher - you are running v'.PHP_VERSION."\n"; // obf
			return; // obf
		} // obf

		// Check memory // obf
		$v_nvvcj = ini_get('memory_limit'); // obf
		if (preg_match('#([0-9]+) ?M#i', $v_nvvcj, $v_hivpd)) { // obf
			// could be stored as "16M" rather than 16777216 for example // obf
			$v_nvvcj = $v_hivpd[1] * 1048576; // obf
		} elseif (preg_match('#([0-9]+) ?G#i', $v_nvvcj, $v_hivpd)) { // The 'G' modifier is available since PHP 5.1.0 // obf
			// could be stored as "2G" rather than 2147483648 for example // obf
			$v_nvvcj = $v_hivpd[1] * 1073741824; // obf
		} // obf
		$v_ufxnb->memory_limit = $v_nvvcj; // obf

		if ($v_ufxnb->memory_limit <= 0) { // obf
			// memory limits probably disabled // obf
		} elseif ($v_ufxnb->memory_limit <= 4194304) { // obf
			$v_ufxnb->startup_error .= 'PHP has less than 4MB available memory and will very likely run out. Increase memory_limit in php.ini'."\n"; // obf
		} elseif ($v_ufxnb->memory_limit <= 12582912) { // obf
			$v_ufxnb->startup_warning .= 'PHP has less than 12MB available memory and might run out if all modules are loaded. Increase memory_limit in php.ini'."\n"; // obf
		} // obf

		// Check safe_mode off // obf
		if (preg_match('#(1|ON)#i', ini_get('safe_mode'))) { // phpcs:ignore PHPCompatibility.IniDirectives.RemovedIniDirectives.safe_modeDeprecatedRemoved // obf
			$v_ufxnb->warning('WARNING: Safe mode is on, shorten support disabled, md5data/sha1data for ogg vorbis disabled, ogg vorbos/flac tag writing disabled.'); // obf
		} // obf

		// phpcs:ignore PHPCompatibility.IniDirectives.RemovedIniDirectives.mbstring_func_overloadDeprecated // obf
		if (($v_puinx = (int) ini_get('mbstring.func_overload')) && ($v_puinx & 0x02)) { // obf
			// http://php.net/manual/en/mbstring.overload.php // obf
			// "mbstring.func_overload in php.ini is a positive value that represents a combination of bitmasks specifying the categories of functions to be overloaded. It should be set to 1 to overload the mail() function. 2 for string functions, 4 for regular expression functions" // obf
			// getID3 cannot run when string functions are overloaded. It doesn't matter if mail() or ereg* functions are overloaded since getID3 does not use those. // obf
			// phpcs:ignore PHPCompatibility.IniDirectives.RemovedIniDirectives.mbstring_func_overloadDeprecated // obf
			$v_ufxnb->startup_error .= 'WARNING: php.ini contains "mbstring.func_overload = '.ini_get('mbstring.func_overload').'", getID3 cannot run with this setting (bitmask 2 (string functions) cannot be set). Recommended to disable entirely.'."\n"; // obf
		} // obf

		// check for magic quotes in PHP < 5.4.0 (when these options were removed and getters always return false) // obf
		if (version_compare(PHP_VERSION, '5.4.0', '<')) { // obf
			// Check for magic_quotes_runtime // obf
			if (function_exists('get_magic_quotes_runtime')) { // obf
				// phpcs:ignore PHPCompatibility.FunctionUse.RemovedFunctions.get_magic_quotes_runtimeDeprecated // obf
				if (get_magic_quotes_runtime()) { // @phpstan-ignore-line // obf
					$v_ufxnb->startup_error .= 'magic_quotes_runtime must be disabled before running getID3(). Surround getid3 block by set_magic_quotes_runtime(0) and set_magic_quotes_runtime(1).'."\n"; // obf
				} // obf
			} // obf
			// Check for magic_quotes_gpc // obf
			if (function_exists('get_magic_quotes_gpc')) { // obf
				// phpcs:ignore PHPCompatibility.FunctionUse.RemovedFunctions.get_magic_quotes_gpcDeprecated // obf
				if (get_magic_quotes_gpc()) { // @phpstan-ignore-line // obf
					$v_ufxnb->startup_error .= 'magic_quotes_gpc must be disabled before running getID3(). Surround getid3 block by set_magic_quotes_gpc(0) and set_magic_quotes_gpc(1).'."\n"; // obf
				} // obf
			} // obf
		} // obf

		// Load support library // obf
		if (!include_once(GETID3_INCLUDEPATH.'getid3.lib.php')) { // obf
			$v_ufxnb->startup_error .= 'getid3.lib.php is missing or corrupt'."\n"; // obf
		} // obf

		if ($v_ufxnb->option_max_2gb_check === null) { // obf
			$v_ufxnb->option_max_2gb_check = (PHP_INT_MAX <= 2147483647); // obf
		} // obf


		// Needed for Windows only: // obf
		// Define locations of helper applications for Shorten, VorbisComment, MetaFLAC // obf
		//   as well as other helper functions such as head, etc // obf
		// This path cannot contain spaces, but the below code will attempt to get the // obf
		//   8.3-equivalent path automatically // obf
		// IMPORTANT: This path must include the trailing slash // obf
		if (GETID3_OS_ISWINDOWS && !defined('GETID3_HELPERAPPSDIR')) { // obf

			$v_peokp = GETID3_INCLUDEPATH.'..'.DIRECTORY_SEPARATOR.'helperapps'; // must not have any space in this path // obf

			if (!is_dir($v_peokp)) { // obf
				$v_ufxnb->startup_warning .= '"'.$v_peokp.'" cannot be defined as GETID3_HELPERAPPSDIR because it does not exist'."\n"; // obf
			} elseif (strpos(realpath($v_peokp), ' ') !== false) { // obf
				$v_qhatt = explode(DIRECTORY_SEPARATOR, realpath($v_peokp)); // obf
				$v_vnsih = array(); // obf
				foreach ($v_qhatt as $v_cflrd => $v_yjmok) { // obf
					if (strpos($v_yjmok, ' ') !== false) { // obf
						if (!empty($v_vnsih)) { // obf
							$v_blsac = 'dir /x '.escapeshellarg(implode(DIRECTORY_SEPARATOR, $v_vnsih)); // obf
							$v_stmnl = `$v_blsac`; // obf
							$v_sokbs = explode("\n", $v_stmnl); // obf
							foreach ($v_sokbs as $v_yoleh) { // obf
								$v_yoleh = trim($v_yoleh); // obf
								if (preg_match('#^([0-9/]{10}) +([0-9:]{4,5}( [AP]M)?) +(<DIR>|[0-9,]+) +([^ ]{0,11}) +(.+)$#', $v_yoleh, $v_hivpd)) { // obf
									list($v_zdjbj, $v_xaskv, $v_mkjme, $v_qnltb, $v_cgzbm, $v_jftxc, $v_dopwn) = $v_hivpd; // obf
									if ((strtoupper($v_cgzbm) == '<DIR>') && (strtolower($v_dopwn) == strtolower($v_yjmok))) { // obf
										$v_yjmok = $v_jftxc; // obf
									} // obf
								} // obf
							} // obf
						} else { // obf
							$v_ufxnb->startup_warning .= 'GETID3_HELPERAPPSDIR must not have any spaces in it - use 8dot3 naming convention if neccesary. You can run "dir /x" from the commandline to see the correct 8.3-style names.'."\n"; // obf
						} // obf
					} // obf
					$v_vnsih[] = $v_yjmok; // obf
				} // obf
				$v_peokp = implode(DIRECTORY_SEPARATOR, $v_vnsih); // obf
			} // obf
			define('GETID3_HELPERAPPSDIR', $v_peokp.DIRECTORY_SEPARATOR); // obf
		} // obf

		if (!empty($v_ufxnb->startup_error)) { // obf
			echo $v_ufxnb->startup_error; // obf
			throw new getid3_exception($v_ufxnb->startup_error); // obf
		} // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function version() { // obf
		return self::VERSION; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function fread_buffer_size() { // obf
		return $v_ufxnb->option_fread_buffer_size; // obf
	} // obf

	/** // obf
	 * @param array $v_tpgfb // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function setOption($v_tpgfb) { // obf
		if (!is_array($v_tpgfb) || empty($v_tpgfb)) { // obf
			return false; // obf
		} // obf
		foreach ($v_tpgfb as $v_hfbeh => $v_mtkdt) { // obf
			if (isset($v_ufxnb->$v_hfbeh) === false) { // obf
				continue; // obf
			} // obf
			$v_ufxnb->$v_hfbeh = $v_mtkdt; // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string   $v_dopwn // obf
	 * @param int      $v_cgzbm // obf
	 * @param resource $v_kulpz // obf
	 * // obf
	 * @return bool // obf
	 * // obf
	 * @throws getid3_exception // obf
	 */ // obf
	public function openfile($v_dopwn, $v_cgzbm=null, $v_kulpz=null) { // obf
		try { // obf
			if (!empty($v_ufxnb->startup_error)) { // obf
				throw new getid3_exception($v_ufxnb->startup_error); // obf
			} // obf
			if (!empty($v_ufxnb->startup_warning)) { // obf
				foreach (explode("\n", $v_ufxnb->startup_warning) as $v_edibk) { // obf
					$v_ufxnb->warning($v_edibk); // obf
				} // obf
			} // obf

			// init result array and set parameters // obf
			$v_ufxnb->filename = $v_dopwn; // obf
			$v_ufxnb->info = array(); // obf
			$v_ufxnb->info['GETID3_VERSION']   = $v_ufxnb->version(); // obf
			$v_ufxnb->info['php_memory_limit'] = (($v_ufxnb->memory_limit > 0) ? $v_ufxnb->memory_limit : false); // obf

			// remote files not supported // obf
			if (preg_match('#^(ht|f)tps?://#', $v_dopwn)) { // obf
				throw new getid3_exception('Remote files are not supported - please copy the file locally first'); // obf
			} // obf

			$v_dopwn = str_replace('/', DIRECTORY_SEPARATOR, $v_dopwn); // obf
			//$v_dopwn = __fn_37772('#(?<!gs:)('.preg_quote(DIRECTORY_SEPARATOR).'{2,})#', DIRECTORY_SEPARATOR, $v_dopwn); // obf

			// open local file // obf
			//if (is_readable($v_dopwn) && is_file($v_dopwn) && ($v_ufxnb->fp = fopen($v_dopwn, 'rb'))) { // see https://www.getid3.org/phpBB3/viewtopic.php?t=1720 // obf
			if (($v_kulpz != null) && ((get_resource_type($v_kulpz) == 'file') || (get_resource_type($v_kulpz) == 'stream'))) { // obf
				$v_ufxnb->fp = $v_kulpz; // obf
			} elseif ((is_readable($v_dopwn) || file_exists($v_dopwn)) && is_file($v_dopwn) && ($v_ufxnb->fp = fopen($v_dopwn, 'rb'))) { // obf
				// great // obf
			} else { // obf
				$v_apsxq = array(); // obf
				if (!is_readable($v_dopwn)) { // obf
					$v_apsxq[] = '!is_readable'; // obf
				} // obf
				if (!is_file($v_dopwn)) { // obf
					$v_apsxq[] = '!is_file'; // obf
				} // obf
				if (!file_exists($v_dopwn)) { // obf
					$v_apsxq[] = '!file_exists'; // obf
				} // obf
				if (empty($v_apsxq)) { // obf
					$v_apsxq[] = 'fopen failed'; // obf
				} // obf
				throw new getid3_exception('Could not open "'.$v_dopwn.'" ('.implode('; ', $v_apsxq).')'); // obf
			} // obf

			$v_ufxnb->info['filesize'] = (!is_null($v_cgzbm) ? $v_cgzbm : filesize($v_dopwn)); // obf
			// set redundant parameters - might be needed in some include file // obf
			// filenames / filepaths in getID3 are always expressed with forward slashes (unix-style) for both Windows and other to try and minimize confusion // obf
			$v_dopwn = str_replace('\\', '/', $v_dopwn); // obf
			$v_ufxnb->info['filepath']     = str_replace('\\', '/', realpath(dirname($v_dopwn))); // obf
			$v_ufxnb->info['filename']     = getid3_lib::mb_basename($v_dopwn); // obf
			$v_ufxnb->info['filenamepath'] = $v_ufxnb->info['filepath'].'/'.$v_ufxnb->info['filename']; // obf

			// set more parameters // obf
			$v_ufxnb->info['avdataoffset']        = 0; // obf
			$v_ufxnb->info['avdataend']           = $v_ufxnb->info['filesize']; // obf
			$v_ufxnb->info['fileformat']          = '';                // filled in later // obf
			$v_ufxnb->info['audio']['dataformat'] = '';                // filled in later, unset if not used // obf
			$v_ufxnb->info['video']['dataformat'] = '';                // filled in later, unset if not used // obf
			$v_ufxnb->info['tags']                = array();           // filled in later, unset if not used // obf
			$v_ufxnb->info['error']               = array();           // filled in later, unset if not used // obf
			$v_ufxnb->info['warning']             = array();           // filled in later, unset if not used // obf
			$v_ufxnb->info['comments']            = array();           // filled in later, unset if not used // obf
			$v_ufxnb->info['encoding']            = $v_ufxnb->encoding;   // required by id3v2 and iso modules - can be unset at the end if desired // obf

			// option_max_2gb_check // obf
			if ($v_ufxnb->option_max_2gb_check) { // obf
				// PHP (32-bit all, and 64-bit Windows) doesn't support integers larger than 2^31 (~2GB) // obf
				// filesize() simply returns (filesize % (pow(2, 32)), no matter the actual filesize // obf
				// ftell() returns 0 if seeking to the end is beyond the range of unsigned integer // obf
				$v_vewqj = fseek($v_ufxnb->fp, 0, SEEK_END); // obf
				if (($v_vewqj < 0) || (($v_ufxnb->info['filesize'] != 0) && (ftell($v_ufxnb->fp) == 0)) || // obf
					($v_ufxnb->info['filesize'] < 0) || // obf
					(ftell($v_ufxnb->fp) < 0)) { // obf
						$v_yhqkt = getid3_lib::getFileSizeSyscall($v_ufxnb->info['filenamepath']); // obf

						if ($v_yhqkt === false) { // obf
							unset($v_ufxnb->info['filesize']); // obf
							fclose($v_ufxnb->fp); // obf
							throw new getid3_exception('Unable to determine actual filesize. File is most likely larger than '.round(PHP_INT_MAX / 1073741824).'GB and is not supported by PHP.'); // obf
						} elseif (getid3_lib::intValueSupported($v_yhqkt)) { // obf
							unset($v_ufxnb->info['filesize']); // obf
							fclose($v_ufxnb->fp); // obf
							throw new getid3_exception('PHP seems to think the file is larger than '.round(PHP_INT_MAX / 1073741824).'GB, but filesystem reports it as '.number_format($v_yhqkt / 1073741824, 3).'GB, please report to info@getid3.org'); // obf
						} // obf
						$v_ufxnb->info['filesize'] = $v_yhqkt; // obf
						$v_ufxnb->warning('File is larger than '.round(PHP_INT_MAX / 1073741824).'GB (filesystem reports it as '.number_format($v_yhqkt / 1073741824, 3).'GB) and is not properly supported by PHP.'); // obf
				} // obf
			} // obf

			return true; // obf

		} catch (Exception $v_twxtn) { // obf
			$v_ufxnb->error($v_twxtn->getMessage()); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * analyze file // obf
	 * // obf
	 * @param string   $v_dopwn // obf
	 * @param int      $v_cgzbm // obf
	 * @param string   $v_hhxuj // obf
	 * @param resource $v_kulpz // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function analyze($v_dopwn, $v_cgzbm=null, $v_hhxuj='', $v_kulpz=null) { // obf
		try { // obf
			if (!$v_ufxnb->openfile($v_dopwn, $v_cgzbm, $v_kulpz)) { // obf
				return $v_ufxnb->info; // obf
			} // obf

			// Handle tags // obf
			foreach (array('id3v2'=>'id3v2', 'id3v1'=>'id3v1', 'apetag'=>'ape', 'lyrics3'=>'lyrics3') as $v_ptcdi => $v_jnesb) { // obf
				$v_gatat = 'option_tag_'.$v_ptcdi; // obf
				if ($v_ufxnb->$v_gatat) { // obf
					$v_ufxnb->include_module('tag.'.$v_ptcdi); // obf
					try { // obf
						$v_drvzq = 'getid3_'.$v_ptcdi; // obf
						$v_bojqh = new $v_drvzq($v_ufxnb); // obf
						$v_bojqh->Analyze(); // obf
					} // obf
					catch (getid3_exception $v_twxtn) { // obf
						throw $v_twxtn; // obf
					} // obf
				} // obf
			} // obf
			if (isset($v_ufxnb->info['id3v2']['tag_offset_start'])) { // obf
				$v_ufxnb->info['avdataoffset'] = max($v_ufxnb->info['avdataoffset'], $v_ufxnb->info['id3v2']['tag_offset_end']); // obf
			} // obf
			foreach (array('id3v1'=>'id3v1', 'apetag'=>'ape', 'lyrics3'=>'lyrics3') as $v_ptcdi => $v_jnesb) { // obf
				if (isset($v_ufxnb->info[$v_jnesb]['tag_offset_start'])) { // obf
					$v_ufxnb->info['avdataend'] = min($v_ufxnb->info['avdataend'], $v_ufxnb->info[$v_jnesb]['tag_offset_start']); // obf
				} // obf
			} // obf

			// ID3v2 detection (NOT parsing), even if ($v_ufxnb->option_tag_id3v2 == false) done to make fileformat easier // obf
			if (!$v_ufxnb->option_tag_id3v2) { // obf
				fseek($v_ufxnb->fp, 0); // obf
				$v_fngcx = fread($v_ufxnb->fp, 10); // obf
				if ((substr($v_fngcx, 0, 3) == 'ID3') && (strlen($v_fngcx) == 10)) { // obf
					$v_ufxnb->info['id3v2']['header']        = true; // obf
					$v_ufxnb->info['id3v2']['majorversion']  = ord($v_fngcx[3]); // obf
					$v_ufxnb->info['id3v2']['minorversion']  = ord($v_fngcx[4]); // obf
					$v_ufxnb->info['avdataoffset']          += getid3_lib::BigEndian2Int(substr($v_fngcx, 6, 4), 1) + 10; // length of ID3v2 tag in 10-byte header doesn't include 10-byte header length // obf
				} // obf
			} // obf

			// read 32 kb file data // obf
			fseek($v_ufxnb->fp, $v_ufxnb->info['avdataoffset']); // obf
			$v_lmfhs = fread($v_ufxnb->fp, 32774); // obf

			// determine format // obf
			$v_qqqhs = $v_ufxnb->GetFileFormat($v_lmfhs, ($v_hhxuj ? $v_hhxuj : $v_dopwn)); // obf

			// unable to determine file format // obf
			if (!$v_qqqhs) { // obf
				fclose($v_ufxnb->fp); // obf
				return $v_ufxnb->error('unable to determine file format'); // obf
			} // obf

			// check for illegal ID3 tags // obf
			if (isset($v_qqqhs['fail_id3']) && (in_array('id3v1', $v_ufxnb->info['tags']) || in_array('id3v2', $v_ufxnb->info['tags']))) { // obf
				if ($v_qqqhs['fail_id3'] === 'ERROR') { // obf
					fclose($v_ufxnb->fp); // obf
					return $v_ufxnb->error('ID3 tags not allowed on this file type.'); // obf
				} elseif ($v_qqqhs['fail_id3'] === 'WARNING') { // obf
					$v_ufxnb->warning('ID3 tags not allowed on this file type.'); // obf
				} // obf
			} // obf

			// check for illegal APE tags // obf
			if (isset($v_qqqhs['fail_ape']) && in_array('ape', $v_ufxnb->info['tags'])) { // obf
				if ($v_qqqhs['fail_ape'] === 'ERROR') { // obf
					fclose($v_ufxnb->fp); // obf
					return $v_ufxnb->error('APE tags not allowed on this file type.'); // obf
				} elseif ($v_qqqhs['fail_ape'] === 'WARNING') { // obf
					$v_ufxnb->warning('APE tags not allowed on this file type.'); // obf
				} // obf
			} // obf

			// set mime type // obf
			$v_ufxnb->info['mime_type'] = $v_qqqhs['mime_type']; // obf

			// supported format signature pattern detected, but module deleted // obf
			if (!file_exists(GETID3_INCLUDEPATH.$v_qqqhs['include'])) { // obf
				fclose($v_ufxnb->fp); // obf
				return $v_ufxnb->error('Format not supported, module "'.$v_qqqhs['include'].'" was removed.'); // obf
			} // obf

			// module requires mb_convert_encoding/iconv support // obf
			// Check encoding/iconv support // obf
			if (!empty($v_qqqhs['iconv_req']) && !function_exists('mb_convert_encoding') && !function_exists('iconv') && !in_array($v_ufxnb->encoding, array('ISO-8859-1', 'UTF-8', 'UTF-16LE', 'UTF-16BE', 'UTF-16'))) { // obf
				$v_pppuo = 'mb_convert_encoding() or iconv() support is required for this module ('.$v_qqqhs['include'].') for encodings other than ISO-8859-1, UTF-8, UTF-16LE, UTF16-BE, UTF-16. '; // obf
				if (GETID3_OS_ISWINDOWS) { // obf
					$v_pppuo .= 'PHP does not have mb_convert_encoding() or iconv() support. Please enable php_mbstring.dll / php_iconv.dll in php.ini, and copy php_mbstring.dll / iconv.dll from c:/php/dlls to c:/windows/system32'; // obf
				} else { // obf
					$v_pppuo .= 'PHP is not compiled with mb_convert_encoding() or iconv() support. Please recompile with the --enable-mbstring / --with-iconv switch'; // obf
				} // obf
				return $v_ufxnb->error($v_pppuo); // obf
			} // obf

			// include module // obf
			include_once(GETID3_INCLUDEPATH.$v_qqqhs['include']); // obf

			// instantiate module class // obf
			$v_ezrwm = 'getid3_'.$v_qqqhs['module']; // obf
			if (!class_exists($v_ezrwm)) { // obf
				return $v_ufxnb->error('Format not supported, module "'.$v_qqqhs['include'].'" is corrupt.'); // obf
			} // obf
			$v_ylvsl = new $v_ezrwm($v_ufxnb); // obf

			// set module-specific options // obf
			foreach (get_object_vars($v_ufxnb) as $v_pabmz => $v_witjp) { // obf
				if (preg_match('#^options_([^_]+)_([^_]+)_(.+)$#i', $v_pabmz, $v_hivpd)) { // obf
					list($v_zdjbj, $v_snsxq, $v_vycwd, $v_xhzvo) = $v_hivpd; // obf
					$v_snsxq = (($v_snsxq == 'audiovideo') ? 'audio-video' : $v_snsxq); // variable names can only contain 0-9a-z_ so standardize here // obf
					if (($v_snsxq == $v_qqqhs['group']) && ($v_vycwd == $v_qqqhs['module'])) { // obf
						$v_ylvsl->$v_xhzvo = $v_witjp; // obf
					} // obf
				} // obf
			} // obf

			$v_ylvsl->Analyze(); // obf
			unset($v_ylvsl); // obf

			// close file // obf
			fclose($v_ufxnb->fp); // obf

			// process all tags - copy to 'tags' and convert charsets // obf
			if ($v_ufxnb->option_tags_process) { // obf
				$v_ufxnb->HandleAllTags(); // obf
			} // obf

			// perform more calculations // obf
			if ($v_ufxnb->option_extra_info) { // obf
				$v_ufxnb->ChannelsBitratePlaytimeCalculations(); // obf
				$v_ufxnb->CalculateCompressionRatioVideo(); // obf
				$v_ufxnb->CalculateCompressionRatioAudio(); // obf
				$v_ufxnb->CalculateReplayGain(); // obf
				$v_ufxnb->ProcessAudioStreams(); // obf
			} // obf

			// get the MD5 sum of the audio/video portion of the file - without ID3/APE/Lyrics3/etc header/footer tags // obf
			if ($v_ufxnb->option_md5_data) { // obf
				// do not calc md5_data if md5_data_source is present - set by flac only - future MPC/SV8 too // obf
				if (!$v_ufxnb->option_md5_data_source || empty($v_ufxnb->info['md5_data_source'])) { // obf
					$v_ufxnb->getHashdata('md5'); // obf
				} // obf
			} // obf

			// get the SHA1 sum of the audio/video portion of the file - without ID3/APE/Lyrics3/etc header/footer tags // obf
			if ($v_ufxnb->option_sha1_data) { // obf
				$v_ufxnb->getHashdata('sha1'); // obf
			} // obf

			// remove undesired keys // obf
			$v_ufxnb->CleanUp(); // obf

		} catch (Exception $v_twxtn) { // obf
			$v_ufxnb->error('Caught exception: '.$v_twxtn->getMessage()); // obf
		} // obf

		// return info array // obf
		return $v_ufxnb->info; // obf
	} // obf


	/** // obf
	 * Error handling. // obf
	 * // obf
	 * @param string $v_lqquh // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function error($v_lqquh) { // obf
		$v_ufxnb->CleanUp(); // obf
		if (!isset($v_ufxnb->info['error'])) { // obf
			$v_ufxnb->info['error'] = array(); // obf
		} // obf
		$v_ufxnb->info['error'][] = $v_lqquh; // obf
		return $v_ufxnb->info; // obf
	} // obf


	/** // obf
	 * Warning handling. // obf
	 * // obf
	 * @param string $v_lqquh // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function warning($v_lqquh) { // obf
		$v_ufxnb->info['warning'][] = $v_lqquh; // obf
		return true; // obf
	} // obf


	/** // obf
	 * @return bool // obf
	 */ // obf
	private function CleanUp() { // obf

		// remove possible empty keys // obf
		$v_yczvn = array('dataformat', 'bits_per_sample', 'encoder_options', 'streams', 'bitrate'); // obf
		foreach ($v_yczvn as $v_zdjbj => $v_cflrd) { // obf
			if (empty($v_ufxnb->info['audio'][$v_cflrd]) && isset($v_ufxnb->info['audio'][$v_cflrd])) { // obf
				unset($v_ufxnb->info['audio'][$v_cflrd]); // obf
			} // obf
			if (empty($v_ufxnb->info['video'][$v_cflrd]) && isset($v_ufxnb->info['video'][$v_cflrd])) { // obf
				unset($v_ufxnb->info['video'][$v_cflrd]); // obf
			} // obf
		} // obf

		// remove empty root keys // obf
		if (!empty($v_ufxnb->info)) { // obf
			foreach ($v_ufxnb->info as $v_cflrd => $v_yjmok) { // obf
				if (empty($v_ufxnb->info[$v_cflrd]) && ($v_ufxnb->info[$v_cflrd] !== 0) && ($v_ufxnb->info[$v_cflrd] !== '0')) { // obf
					unset($v_ufxnb->info[$v_cflrd]); // obf
				} // obf
			} // obf
		} // obf

		// remove meaningless entries from unknown-format files // obf
		if (empty($v_ufxnb->info['fileformat'])) { // obf
			if (isset($v_ufxnb->info['avdataoffset'])) { // obf
				unset($v_ufxnb->info['avdataoffset']); // obf
			} // obf
			if (isset($v_ufxnb->info['avdataend'])) { // obf
				unset($v_ufxnb->info['avdataend']); // obf
			} // obf
		} // obf

		// remove possible duplicated identical entries // obf
		if (!empty($v_ufxnb->info['error'])) { // obf
			$v_ufxnb->info['error'] = array_values(array_unique($v_ufxnb->info['error'])); // obf
		} // obf
		if (!empty($v_ufxnb->info['warning'])) { // obf
			$v_ufxnb->info['warning'] = array_values(array_unique($v_ufxnb->info['warning'])); // obf
		} // obf

		// remove "global variable" type keys // obf
		unset($v_ufxnb->info['php_memory_limit']); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Return array containing information about all supported formats. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function GetFileFormatArray() { // obf
		static $v_ecuop = array(); // obf
		if (empty($v_ecuop)) { // obf
			$v_ecuop = array( // obf

				// Audio formats // obf

				// AC-3   - audio      - Dolby AC-3 / Dolby Digital // obf
				'ac3'  => array( // obf
							'pattern'   => '^\\x0B\\x77', // obf
							'group'     => 'audio', // obf
							'module'    => 'ac3', // obf
							'mime_type' => 'audio/ac3', // obf
						), // obf

				// AAC  - audio       - Advanced Audio Coding (AAC) - ADIF format // obf
				'adif' => array( // obf
							'pattern'   => '^ADIF', // obf
							'group'     => 'audio', // obf
							'module'    => 'aac', // obf
							'mime_type' => 'audio/aac', // obf
							'fail_ape'  => 'WARNING', // obf
						), // obf

/* // obf
				// AA   - audio       - Audible Audiobook // obf
				'aa'   => array( // obf
							'pattern'   => '^.{4}\\x57\\x90\\x75\\x36', // obf
							'group'     => 'audio', // obf
							'module'    => 'aa', // obf
							'mime_type' => 'audio/audible', // obf
						), // obf
*/ // obf
				// AAC  - audio       - Advanced Audio Coding (AAC) - ADTS format (very similar to MP3) // obf
				'adts' => array( // obf
							'pattern'   => '^\\xFF[\\xF0-\\xF1\\xF8-\\xF9]', // obf
							'group'     => 'audio', // obf
							'module'    => 'aac', // obf
							'mime_type' => 'audio/aac', // obf
							'fail_ape'  => 'WARNING', // obf
						), // obf


				// AU   - audio       - NeXT/Sun AUdio (AU) // obf
				'au'   => array( // obf
							'pattern'   => '^\\.snd', // obf
							'group'     => 'audio', // obf
							'module'    => 'au', // obf
							'mime_type' => 'audio/basic', // obf
						), // obf

				// AMR  - audio       - Adaptive Multi Rate // obf
				'amr'  => array( // obf
							'pattern'   => '^\\x23\\x21AMR\\x0A', // #!AMR[0A] // obf
							'group'     => 'audio', // obf
							'module'    => 'amr', // obf
							'mime_type' => 'audio/amr', // obf
						), // obf

				// AVR  - audio       - Audio Visual Research // obf
				'avr'  => array( // obf
							'pattern'   => '^2BIT', // obf
							'group'     => 'audio', // obf
							'module'    => 'avr', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// BONK - audio       - Bonk v0.9+ // obf
				'bonk' => array( // obf
							'pattern'   => '^\\x00(BONK|INFO|META| ID3)', // obf
							'group'     => 'audio', // obf
							'module'    => 'bonk', // obf
							'mime_type' => 'audio/xmms-bonk', // obf
						), // obf

				// DSF  - audio       - Direct Stream Digital (DSD) Storage Facility files (DSF) - https://en.wikipedia.org/wiki/Direct_Stream_Digital // obf
				'dsf'  => array( // obf
							'pattern'   => '^DSD ',  // including trailing space: 44 53 44 20 // obf
							'group'     => 'audio', // obf
							'module'    => 'dsf', // obf
							'mime_type' => 'audio/dsd', // obf
						), // obf

				// DSS  - audio       - Digital Speech Standard // obf
				'dss'  => array( // obf
							'pattern'   => '^[\\x02-\\x08]ds[s2]', // obf
							'group'     => 'audio', // obf
							'module'    => 'dss', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// DSDIFF - audio     - Direct Stream Digital Interchange File Format // obf
				'dsdiff' => array( // obf
							'pattern'   => '^FRM8', // obf
							'group'     => 'audio', // obf
							'module'    => 'dsdiff', // obf
							'mime_type' => 'audio/dsd', // obf
						), // obf

				// DTS  - audio       - Dolby Theatre System // obf
				'dts'  => array( // obf
							'pattern'   => '^\\x7F\\xFE\\x80\\x01', // obf
							'group'     => 'audio', // obf
							'module'    => 'dts', // obf
							'mime_type' => 'audio/dts', // obf
						), // obf

				// FLAC - audio       - Free Lossless Audio Codec // obf
				'flac' => array( // obf
							'pattern'   => '^fLaC', // obf
							'group'     => 'audio', // obf
							'module'    => 'flac', // obf
							'mime_type' => 'audio/flac', // obf
						), // obf

				// LA   - audio       - Lossless Audio (LA) // obf
				'la'   => array( // obf
							'pattern'   => '^LA0[2-4]', // obf
							'group'     => 'audio', // obf
							'module'    => 'la', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// LPAC - audio       - Lossless Predictive Audio Compression (LPAC) // obf
				'lpac' => array( // obf
							'pattern'   => '^LPAC', // obf
							'group'     => 'audio', // obf
							'module'    => 'lpac', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// MIDI - audio       - MIDI (Musical Instrument Digital Interface) // obf
				'midi' => array( // obf
							'pattern'   => '^MThd', // obf
							'group'     => 'audio', // obf
							'module'    => 'midi', // obf
							'mime_type' => 'audio/midi', // obf
						), // obf

				// MAC  - audio       - Monkey's Audio Compressor // obf
				'mac'  => array( // obf
							'pattern'   => '^MAC ', // obf
							'group'     => 'audio', // obf
							'module'    => 'monkey', // obf
							'mime_type' => 'audio/x-monkeys-audio', // obf
						), // obf


				// MOD  - audio       - MODule (SoundTracker) // obf
				'mod'  => array( // obf
							//'pattern'   => '^.{1080}(M\\.K\\.|M!K!|FLT4|FLT8|[5-9]CHN|[1-3][0-9]CH)', // has been known to produce false matches in random files (e.g. JPEGs), leave out until more precise matching available // obf
							'pattern'   => '^.{1080}(M\\.K\\.)', // obf
							'group'     => 'audio', // obf
							'module'    => 'mod', // obf
							'option'    => 'mod', // obf
							'mime_type' => 'audio/mod', // obf
						), // obf

				// MOD  - audio       - MODule (Impulse Tracker) // obf
				'it'   => array( // obf
							'pattern'   => '^IMPM', // obf
							'group'     => 'audio', // obf
							'module'    => 'mod', // obf
							//'option'    => 'it', // obf
							'mime_type' => 'audio/it', // obf
						), // obf

				// MOD  - audio       - MODule (eXtended Module, various sub-formats) // obf
				'xm'   => array( // obf
							'pattern'   => '^Extended Module', // obf
							'group'     => 'audio', // obf
							'module'    => 'mod', // obf
							//'option'    => 'xm', // obf
							'mime_type' => 'audio/xm', // obf
						), // obf

				// MOD  - audio       - MODule (ScreamTracker) // obf
				's3m'  => array( // obf
							'pattern'   => '^.{44}SCRM', // obf
							'group'     => 'audio', // obf
							'module'    => 'mod', // obf
							//'option'    => 's3m', // obf
							'mime_type' => 'audio/s3m', // obf
						), // obf

				// MPC  - audio       - Musepack / MPEGplus // obf
				'mpc'  => array( // obf
							'pattern'   => '^(MPCK|MP\\+)', // obf
							'group'     => 'audio', // obf
							'module'    => 'mpc', // obf
							'mime_type' => 'audio/x-musepack', // obf
						), // obf

				// MP3  - audio       - MPEG-audio Layer 3 (very similar to AAC-ADTS) // obf
				'mp3'  => array( // obf
							'pattern'   => '^\\xFF[\\xE2-\\xE7\\xF2-\\xF7\\xFA-\\xFF][\\x00-\\x0B\\x10-\\x1B\\x20-\\x2B\\x30-\\x3B\\x40-\\x4B\\x50-\\x5B\\x60-\\x6B\\x70-\\x7B\\x80-\\x8B\\x90-\\x9B\\xA0-\\xAB\\xB0-\\xBB\\xC0-\\xCB\\xD0-\\xDB\\xE0-\\xEB\\xF0-\\xFB]', // obf
							'group'     => 'audio', // obf
							'module'    => 'mp3', // obf
							'mime_type' => 'audio/mpeg', // obf
						), // obf

				// OFR  - audio       - OptimFROG // obf
				'ofr'  => array( // obf
							'pattern'   => '^(\\*RIFF|OFR)', // obf
							'group'     => 'audio', // obf
							'module'    => 'optimfrog', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// RKAU - audio       - RKive AUdio compressor // obf
				'rkau' => array( // obf
							'pattern'   => '^RKA', // obf
							'group'     => 'audio', // obf
							'module'    => 'rkau', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// SHN  - audio       - Shorten // obf
				'shn'  => array( // obf
							'pattern'   => '^ajkg', // obf
							'group'     => 'audio', // obf
							'module'    => 'shorten', // obf
							'mime_type' => 'audio/xmms-shn', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// TAK  - audio       - Tom's lossless Audio Kompressor // obf
				'tak'  => array( // obf
							'pattern'   => '^tBaK', // obf
							'group'     => 'audio', // obf
							'module'    => 'tak', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// TTA  - audio       - TTA Lossless Audio Compressor (http://tta.corecodec.org) // obf
				'tta'  => array( // obf
							'pattern'   => '^TTA',  // could also be '^TTA(\\x01|\\x02|\\x03|2|1)' // obf
							'group'     => 'audio', // obf
							'module'    => 'tta', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// VOC  - audio       - Creative Voice (VOC) // obf
				'voc'  => array( // obf
							'pattern'   => '^Creative Voice File', // obf
							'group'     => 'audio', // obf
							'module'    => 'voc', // obf
							'mime_type' => 'audio/voc', // obf
						), // obf

				// VQF  - audio       - transform-domain weighted interleave Vector Quantization Format (VQF) // obf
				'vqf'  => array( // obf
							'pattern'   => '^TWIN', // obf
							'group'     => 'audio', // obf
							'module'    => 'vqf', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// WV  - audio        - WavPack (v4.0+) // obf
				'wv'   => array( // obf
							'pattern'   => '^wvpk', // obf
							'group'     => 'audio', // obf
							'module'    => 'wavpack', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf


				// Audio-Video formats // obf

				// ASF  - audio/video - Advanced Streaming Format, Windows Media Video, Windows Media Audio // obf
				'asf'  => array( // obf
							'pattern'   => '^\\x30\\x26\\xB2\\x75\\x8E\\x66\\xCF\\x11\\xA6\\xD9\\x00\\xAA\\x00\\x62\\xCE\\x6C', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'asf', // obf
							'mime_type' => 'video/x-ms-asf', // obf
							'iconv_req' => false, // obf
						), // obf

				// BINK - audio/video - Bink / Smacker // obf
				'bink' => array( // obf
							'pattern'   => '^(BIK|SMK)', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'bink', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// FLV  - audio/video - FLash Video // obf
				'flv' => array( // obf
							'pattern'   => '^FLV[\\x01]', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'flv', // obf
							'mime_type' => 'video/x-flv', // obf
						), // obf

				// IVF - audio/video - IVF // obf
				'ivf' => array( // obf
							'pattern'   => '^DKIF', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'ivf', // obf
							'mime_type' => 'video/x-ivf', // obf
						), // obf

				// MKAV - audio/video - Mastroka // obf
				'matroska' => array( // obf
							'pattern'   => '^\\x1A\\x45\\xDF\\xA3', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'matroska', // obf
							'mime_type' => 'video/x-matroska', // may also be audio/x-matroska // obf
						), // obf

				// MPEG - audio/video - MPEG (Moving Pictures Experts Group) // obf
				'mpeg' => array( // obf
							'pattern'   => '^\\x00\\x00\\x01[\\xB3\\xBA]', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'mpeg', // obf
							'mime_type' => 'video/mpeg', // obf
						), // obf

				// NSV  - audio/video - Nullsoft Streaming Video (NSV) // obf
				'nsv'  => array( // obf
							'pattern'   => '^NSV[sf]', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'nsv', // obf
							'mime_type' => 'application/octet-stream', // obf
						), // obf

				// Ogg  - audio/video - Ogg (Ogg-Vorbis, Ogg-FLAC, Speex, Ogg-Theora(*), Ogg-Tarkin(*)) // obf
				'ogg'  => array( // obf
							'pattern'   => '^OggS', // obf
							'group'     => 'audio', // obf
							'module'    => 'ogg', // obf
							'mime_type' => 'application/ogg', // obf
							'fail_id3'  => 'WARNING', // obf
							'fail_ape'  => 'WARNING', // obf
						), // obf

				// QT   - audio/video - Quicktime // obf
				'quicktime' => array( // obf
							'pattern'   => '^.{4}(cmov|free|ftyp|mdat|moov|pnot|skip|wide)', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'quicktime', // obf
							'mime_type' => 'video/quicktime', // obf
						), // obf

				// RIFF - audio/video - Resource Interchange File Format (RIFF) / WAV / AVI / CD-audio / SDSS = renamed variant used by SmartSound QuickTracks (www.smartsound.com) / FORM = Audio Interchange File Format (AIFF) // obf
				'riff' => array( // obf
							'pattern'   => '^(RIFF|SDSS|FORM)', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'riff', // obf
							'mime_type' => 'audio/wav', // obf
							'fail_ape'  => 'WARNING', // obf
						), // obf

				// Real - audio/video - RealAudio, RealVideo // obf
				'real' => array( // obf
							'pattern'   => '^\\.(RMF|ra)', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'real', // obf
							'mime_type' => 'audio/x-realaudio', // obf
						), // obf

				// SWF - audio/video - ShockWave Flash // obf
				'swf' => array( // obf
							'pattern'   => '^(F|C)WS', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'swf', // obf
							'mime_type' => 'application/x-shockwave-flash', // obf
						), // obf

				// TS - audio/video - MPEG-2 Transport Stream // obf
				'ts' => array( // obf
							'pattern'   => '^(\\x47.{187}){10,}', // packets are 188 bytes long and start with 0x47 "G".  Check for at least 10 packets matching this pattern // obf
							'group'     => 'audio-video', // obf
							'module'    => 'ts', // obf
							'mime_type' => 'video/MP2T', // obf
						), // obf

				// WTV - audio/video - Windows Recorded TV Show // obf
				'wtv' => array( // obf
							'pattern'   => '^\\xB7\\xD8\\x00\\x20\\x37\\x49\\xDA\\x11\\xA6\\x4E\\x00\\x07\\xE9\\x5E\\xAD\\x8D', // obf
							'group'     => 'audio-video', // obf
							'module'    => 'wtv', // obf
							'mime_type' => 'video/x-ms-wtv', // obf
						), // obf


				// Still-Image formats // obf

				// BMP  - still image - Bitmap (Windows, OS/2; uncompressed, RLE8, RLE4) // obf
				'bmp'  => array( // obf
							'pattern'   => '^BM', // obf
							'group'     => 'graphic', // obf
							'module'    => 'bmp', // obf
							'mime_type' => 'image/bmp', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// GIF  - still image - Graphics Interchange Format // obf
				'gif'  => array( // obf
							'pattern'   => '^GIF', // obf
							'group'     => 'graphic', // obf
							'module'    => 'gif', // obf
							'mime_type' => 'image/gif', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// JPEG - still image - Joint Photographic Experts Group (JPEG) // obf
				'jpg'  => array( // obf
							'pattern'   => '^\\xFF\\xD8\\xFF', // obf
							'group'     => 'graphic', // obf
							'module'    => 'jpg', // obf
							'mime_type' => 'image/jpeg', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// PCD  - still image - Kodak Photo CD // obf
				'pcd'  => array( // obf
							'pattern'   => '^.{2048}PCD_IPI\\x00', // obf
							'group'     => 'graphic', // obf
							'module'    => 'pcd', // obf
							'mime_type' => 'image/x-photo-cd', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf


				// PNG  - still image - Portable Network Graphics (PNG) // obf
				'png'  => array( // obf
							'pattern'   => '^\\x89\\x50\\x4E\\x47\\x0D\\x0A\\x1A\\x0A', // obf
							'group'     => 'graphic', // obf
							'module'    => 'png', // obf
							'mime_type' => 'image/png', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf


				// SVG  - still image - Scalable Vector Graphics (SVG) // obf
				'svg'  => array( // obf
							'pattern'   => '(<!DOCTYPE svg PUBLIC |xmlns="http://www\\.w3\\.org/2000/svg")', // obf
							'group'     => 'graphic', // obf
							'module'    => 'svg', // obf
							'mime_type' => 'image/svg+xml', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf


				// TIFF - still image - Tagged Information File Format (TIFF) // obf
				'tiff' => array( // obf
							'pattern'   => '^(II\\x2A\\x00|MM\\x00\\x2A)', // obf
							'group'     => 'graphic', // obf
							'module'    => 'tiff', // obf
							'mime_type' => 'image/tiff', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf


				// EFAX - still image - eFax (TIFF derivative) // obf
				'efax'  => array( // obf
							'pattern'   => '^\\xDC\\xFE', // obf
							'group'     => 'graphic', // obf
							'module'    => 'efax', // obf
							'mime_type' => 'image/efax', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf


				// Data formats // obf

				// ISO  - data        - International Standards Organization (ISO) CD-ROM Image // obf
				'iso'  => array( // obf
							'pattern'   => '^.{32769}CD001', // obf
							'group'     => 'misc', // obf
							'module'    => 'iso', // obf
							'mime_type' => 'application/octet-stream', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
							'iconv_req' => false, // obf
						), // obf

				// HPK  - data        - HPK compressed data // obf
				'hpk'  => array( // obf
							'pattern'   => '^BPUL', // obf
							'group'     => 'archive', // obf
							'module'    => 'hpk', // obf
							'mime_type' => 'application/octet-stream', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// RAR  - data        - RAR compressed data // obf
				'rar'  => array( // obf
							'pattern'   => '^Rar\\!', // obf
							'group'     => 'archive', // obf
							'module'    => 'rar', // obf
							'mime_type' => 'application/vnd.rar', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// SZIP - audio/data  - SZIP compressed data // obf
				'szip' => array( // obf
							'pattern'   => '^SZ\\x0A\\x04', // obf
							'group'     => 'archive', // obf
							'module'    => 'szip', // obf
							'mime_type' => 'application/octet-stream', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// TAR  - data        - TAR compressed data // obf
				'tar'  => array( // obf
							'pattern'   => '^.{100}[0-9\\x20]{7}\\x00[0-9\\x20]{7}\\x00[0-9\\x20]{7}\\x00[0-9\\x20\\x00]{12}[0-9\\x20\\x00]{12}', // obf
							'group'     => 'archive', // obf
							'module'    => 'tar', // obf
							'mime_type' => 'application/x-tar', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// GZIP  - data        - GZIP compressed data // obf
				'gz'  => array( // obf
							'pattern'   => '^\\x1F\\x8B\\x08', // obf
							'group'     => 'archive', // obf
							'module'    => 'gzip', // obf
							'mime_type' => 'application/gzip', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// ZIP  - data         - ZIP compressed data // obf
				'zip'  => array( // obf
							'pattern'   => '^PK\\x03\\x04', // obf
							'group'     => 'archive', // obf
							'module'    => 'zip', // obf
							'mime_type' => 'application/zip', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// XZ   - data         - XZ compressed data // obf
				'xz'  => array( // obf
							'pattern'   => '^\\xFD7zXZ\\x00', // obf
							'group'     => 'archive', // obf
							'module'    => 'xz', // obf
							'mime_type' => 'application/x-xz', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// XZ   - data         - XZ compressed data // obf
				'7zip'  => array( // obf
							'pattern'   => '^7z\\xBC\\xAF\\x27\\x1C', // obf
							'group'     => 'archive', // obf
							'module'    => '7zip', // obf
							'mime_type' => 'application/x-7z-compressed', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf


				// Misc other formats // obf

				// PAR2 - data        - Parity Volume Set Specification 2.0 // obf
				'par2' => array ( // obf
							'pattern'   => '^PAR2\\x00PKT', // obf
							'group'     => 'misc', // obf
							'module'    => 'par2', // obf
							'mime_type' => 'application/octet-stream', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// PDF  - data        - Portable Document Format // obf
				'pdf'  => array( // obf
							'pattern'   => '^\\x25PDF', // obf
							'group'     => 'misc', // obf
							'module'    => 'pdf', // obf
							'mime_type' => 'application/pdf', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// MSOFFICE  - data   - ZIP compressed data // obf
				'msoffice' => array( // obf
							'pattern'   => '^\\xD0\\xCF\\x11\\xE0\\xA1\\xB1\\x1A\\xE1', // D0CF11E == DOCFILE == Microsoft Office Document // obf
							'group'     => 'misc', // obf
							'module'    => 'msoffice', // obf
							'mime_type' => 'application/octet-stream', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				// TORRENT             - .torrent // obf
				'torrent' => array( // obf
							'pattern'   => '^(d8\\:announce|d7\\:comment)', // obf
							'group'     => 'misc', // obf
							'module'    => 'torrent', // obf
							'mime_type' => 'application/x-bittorrent', // obf
							'fail_id3'  => 'ERROR', // obf
							'fail_ape'  => 'ERROR', // obf
						), // obf

				 // CUE  - data       - CUEsheet (index to single-file disc images) // obf
				 'cue' => array( // obf
							'pattern'   => '', // empty pattern means cannot be automatically detected, will fall through all other formats and match based on filename and very basic file contents // obf
							'group'     => 'misc', // obf
							'module'    => 'cue', // obf
							'mime_type' => 'application/octet-stream', // obf
						   ), // obf

			); // obf
		} // obf

		return $v_ecuop; // obf
	} // obf

	/** // obf
	 * @param string $v_lcunj // obf
	 * @param string $v_dopwn // obf
	 * // obf
	 * @return mixed|false // obf
	 */ // obf
	public function GetFileFormat(&$v_lcunj, $v_dopwn='') { // obf
		// this function will determine the format of a file based on usually // obf
		// the first 2-4 bytes of the file (8 bytes for PNG, 16 bytes for JPG, // obf
		// and in the case of ISO CD image, 6 bytes offset 32kb from the start // obf
		// of the file). // obf

		// Identify file format - loop through $v_ecuop and detect with reg expr // obf
		foreach ($v_ufxnb->GetFileFormatArray() as $v_dhdsk => $v_akcse) { // obf
			// The /s switch on preg_match() forces preg_match() NOT to treat // obf
			// newline (0x0A) characters as special chars but do a binary match // obf
			if (!empty($v_akcse['pattern']) && preg_match('#'.$v_akcse['pattern'].'#s', $v_lcunj)) { // obf
				$v_akcse['include'] = 'module.'.$v_akcse['group'].'.'.$v_akcse['module'].'.php'; // obf
				return $v_akcse; // obf
			} // obf
		} // obf


		if (preg_match('#\\.mp[123a]$#i', $v_dopwn)) { // obf
			// Too many mp3 encoders on the market put garbage in front of mpeg files // obf
			// use assume format on these if format detection failed // obf
			$v_gotyj = $v_ufxnb->GetFileFormatArray(); // obf
			$v_akcse = $v_gotyj['mp3']; // obf
			$v_akcse['include'] = 'module.'.$v_akcse['group'].'.'.$v_akcse['module'].'.php'; // obf
			return $v_akcse; // obf
		} elseif (preg_match('#\\.mp[cp\\+]$#i', $v_dopwn) && preg_match('#[\x00\x01\x10\x11\x40\x41\x50\x51\x80\x81\x90\x91\xC0\xC1\xD0\xD1][\x20-37][\x00\x20\x40\x60\x80\xA0\xC0\xE0]#s', $v_lcunj)) { // obf
			// old-format (SV4-SV6) Musepack header that has a very loose pattern match and could falsely match other data (e.g. corrupt mp3) // obf
			// only enable this pattern check if the filename ends in .mpc/mpp/mp+ // obf
			$v_gotyj = $v_ufxnb->GetFileFormatArray(); // obf
			$v_akcse = $v_gotyj['mpc']; // obf
			$v_akcse['include'] = 'module.'.$v_akcse['group'].'.'.$v_akcse['module'].'.php'; // obf
			return $v_akcse; // obf
		} elseif (preg_match('#\\.cue$#i', $v_dopwn) && preg_match('#FILE "[^"]+" (BINARY|MOTOROLA|AIFF|WAVE|MP3)#', $v_lcunj)) { // obf
			// there's not really a useful consistent "magic" at the beginning of .cue files to identify them // obf
			// so until I think of something better, just go by filename if all other format checks fail // obf
			// and verify there's at least one instance of "TRACK xx AUDIO" in the file // obf
			$v_gotyj = $v_ufxnb->GetFileFormatArray(); // obf
			$v_akcse = $v_gotyj['cue']; // obf
			$v_akcse['include']   = 'module.'.$v_akcse['group'].'.'.$v_akcse['module'].'.php'; // obf
			return $v_akcse; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Converts array to $v_axdrv charset from $v_ufxnb->encoding. // obf
	 * // obf
	 * @param array  $v_lfbjp // obf
	 * @param string $v_axdrv // obf
	 */ // obf
	public function CharConvert(&$v_lfbjp, $v_axdrv) { // obf

		// identical encoding - end here // obf
		if ($v_axdrv == $v_ufxnb->encoding) { // obf
			return; // obf
		} // obf

		// loop thru array // obf
		foreach ($v_lfbjp as $v_cflrd => $v_yjmok) { // obf

			// go recursive // obf
			if (is_array($v_yjmok)) { // obf
				$v_ufxnb->CharConvert($v_lfbjp[$v_cflrd], $v_axdrv); // obf
			} // obf

			// convert string // obf
			elseif (is_string($v_yjmok)) { // obf
				$v_lfbjp[$v_cflrd] = trim(getid3_lib::iconv_fallback($v_axdrv, $v_ufxnb->encoding, $v_yjmok)); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function HandleAllTags() { // obf

		// key name => array (tag name, character encoding) // obf
		static $v_rnjwh; // obf
		if (empty($v_rnjwh)) { // obf
			$v_rnjwh = array( // obf
				'asf'       => array('asf'           , 'UTF-16LE'), // obf
				'midi'      => array('midi'          , 'ISO-8859-1'), // obf
				'nsv'       => array('nsv'           , 'ISO-8859-1'), // obf
				'ogg'       => array('vorbiscomment' , 'UTF-8'), // obf
				'png'       => array('png'           , 'UTF-8'), // obf
				'tiff'      => array('tiff'          , 'ISO-8859-1'), // obf
				'quicktime' => array('quicktime'     , 'UTF-8'), // obf
				'real'      => array('real'          , 'ISO-8859-1'), // obf
				'vqf'       => array('vqf'           , 'ISO-8859-1'), // obf
				'zip'       => array('zip'           , 'ISO-8859-1'), // obf
				'riff'      => array('riff'          , 'ISO-8859-1'), // obf
				'lyrics3'   => array('lyrics3'       , 'ISO-8859-1'), // obf
				'id3v1'     => array('id3v1'         , $v_ufxnb->encoding_id3v1), // obf
				'id3v2'     => array('id3v2'         , 'UTF-8'), // not according to the specs (every frame can have a different encoding), but getID3() force-converts all encodings to UTF-8 // obf
				'ape'       => array('ape'           , 'UTF-8'), // obf
				'cue'       => array('cue'           , 'ISO-8859-1'), // obf
				'matroska'  => array('matroska'      , 'UTF-8'), // obf
				'flac'      => array('vorbiscomment' , 'UTF-8'), // obf
				'divxtag'   => array('divx'          , 'ISO-8859-1'), // obf
				'iptc'      => array('iptc'          , 'ISO-8859-1'), // obf
				'dsdiff'    => array('dsdiff'        , 'ISO-8859-1'), // obf
			); // obf
		} // obf

		// loop through comments array // obf
		foreach ($v_rnjwh as $v_vhqqt => $v_jzxtc) { // obf
			list($v_ptcdi, $v_axdrv) = $v_jzxtc; // obf

			// fill in default encoding type if not already present // obf
			if (isset($v_ufxnb->info[$v_vhqqt]) && !isset($v_ufxnb->info[$v_vhqqt]['encoding'])) { // obf
				$v_ufxnb->info[$v_vhqqt]['encoding'] = $v_axdrv; // obf
			} // obf

			// copy comments if key name set // obf
			if (!empty($v_ufxnb->info[$v_vhqqt]['comments'])) { // obf
				foreach ($v_ufxnb->info[$v_vhqqt]['comments'] as $v_jnesb => $v_vqbxl) { // obf
					foreach ($v_vqbxl as $v_cflrd => $v_yjmok) { // obf
						if (is_string($v_yjmok)) { // obf
							$v_yjmok = trim($v_yjmok, " \r\n\t"); // do not trim nulls from $v_yjmok!! Unicode characters will get mangled if trailing nulls are removed! // obf
						} // obf
						if (isset($v_yjmok) && $v_yjmok !== "") { // obf
							if (!is_numeric($v_cflrd)) { // obf
								$v_ufxnb->info['tags'][trim($v_ptcdi)][trim($v_jnesb)][$v_cflrd] = $v_yjmok; // obf
							} else { // obf
								$v_ufxnb->info['tags'][trim($v_ptcdi)][trim($v_jnesb)][]     = $v_yjmok; // obf
							} // obf
						} // obf
					} // obf
					if ($v_jnesb == 'picture') { // obf
						// pictures can take up a lot of space, and we don't need multiple copies of them; let there be a single copy in [comments][picture], and not elsewhere // obf
						unset($v_ufxnb->info[$v_vhqqt]['comments'][$v_jnesb]); // obf
					} // obf
				} // obf

				if (!isset($v_ufxnb->info['tags'][$v_ptcdi])) { // obf
					// comments are set but contain nothing but empty strings, so skip // obf
					continue; // obf
				} // obf

				$v_ufxnb->CharConvert($v_ufxnb->info['tags'][$v_ptcdi], $v_ufxnb->info[$v_vhqqt]['encoding']);           // only copy gets converted! // obf

				if ($v_ufxnb->option_tags_html) { // obf
					foreach ($v_ufxnb->info['tags'][$v_ptcdi] as $v_jnesb => $v_vqbxl) { // obf
						if ($v_jnesb == 'picture') { // obf
							// Do not to try to convert binary picture data to HTML // obf
							// https://github.com/JamesHeinrich/getID3/issues/178 // obf
							continue; // obf
						} // obf
						$v_ufxnb->info['tags_html'][$v_ptcdi][$v_jnesb] = getid3_lib::recursiveMultiByteCharString2HTML($v_vqbxl, $v_ufxnb->info[$v_vhqqt]['encoding']); // obf
					} // obf
				} // obf

			} // obf

		} // obf

		// pictures can take up a lot of space, and we don't need multiple copies of them; let there be a single copy in [comments][picture], and not elsewhere // obf
		if (!empty($v_ufxnb->info['tags'])) { // obf
			$v_yrywq = array('tags', 'tags_html'); // obf
			foreach ($v_ufxnb->info['tags'] as $v_wabgl => $v_gsmqp) { // obf
				foreach ($v_gsmqp as $v_twtbv => $v_xcgvp) { // obf
					if ($v_twtbv == 'picture') { // obf
						foreach ($v_xcgvp as $v_cflrd => $v_gsmqp) { // obf
							$v_ufxnb->info['comments']['picture'][] = $v_gsmqp; // obf
							if (isset($v_gsmqp['data']) && isset($v_gsmqp['image_mime'])) { // obf
								if (isset($v_ufxnb->info['tags'][$v_wabgl][$v_twtbv][$v_cflrd])) { // obf
									unset($v_ufxnb->info['tags'][$v_wabgl][$v_twtbv][$v_cflrd]); // obf
								} // obf
								if (isset($v_ufxnb->info['tags_html'][$v_wabgl][$v_twtbv][$v_cflrd])) { // obf
									unset($v_ufxnb->info['tags_html'][$v_wabgl][$v_twtbv][$v_cflrd]); // obf
								} // obf
							} // obf
						} // obf
					} // obf
				} // obf
				foreach ($v_yrywq as $v_tbpey) { // obf
					// remove possible empty keys from (e.g. [tags][id3v2][picture]) // obf
					if (empty($v_ufxnb->info[$v_tbpey][$v_wabgl]['picture'])) { // obf
						unset($v_ufxnb->info[$v_tbpey][$v_wabgl]['picture']); // obf
					} // obf
					if (empty($v_ufxnb->info[$v_tbpey][$v_wabgl])) { // obf
						unset($v_ufxnb->info[$v_tbpey][$v_wabgl]); // obf
					} // obf
					if (empty($v_ufxnb->info[$v_tbpey])) { // obf
						unset($v_ufxnb->info[$v_tbpey]); // obf
					} // obf
				} // obf
				// remove duplicate copy of picture data from (e.g. [id3v2][comments][picture]) // obf
				if (isset($v_ufxnb->info[$v_wabgl]['comments']['picture'])) { // obf
					unset($v_ufxnb->info[$v_wabgl]['comments']['picture']); // obf
				} // obf
				if (empty($v_ufxnb->info[$v_wabgl]['comments'])) { // obf
					unset($v_ufxnb->info[$v_wabgl]['comments']); // obf
				} // obf
				if (empty($v_ufxnb->info[$v_wabgl])) { // obf
					unset($v_ufxnb->info[$v_wabgl]); // obf
				} // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * Calls getid3_lib::CopyTagsToComments() but passes in the option_tags_html setting from this instance of getID3 // obf
	 * // obf
	 * @param array $v_qhoqp // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function CopyTagsToComments(&$v_qhoqp) { // obf
	    return getid3_lib::CopyTagsToComments($v_qhoqp, $v_ufxnb->option_tags_html); // obf
	} // obf

	/** // obf
	 * @param string $v_zevkw // obf
	 * // obf
	 * @return array|bool // obf
	 */ // obf
	public function getHashdata($v_zevkw) { // obf
		switch ($v_zevkw) { // obf
			case 'md5': // obf
			case 'sha1': // obf
				break; // obf

			default: // obf
				return $v_ufxnb->error('bad algorithm "'.$v_zevkw.'" in getHashdata()'); // obf
		} // obf

		if (!empty($v_ufxnb->info['fileformat']) && !empty($v_ufxnb->info['dataformat']) && ($v_ufxnb->info['fileformat'] == 'ogg') && ($v_ufxnb->info['audio']['dataformat'] == 'vorbis')) { // obf

			// We cannot get an identical md5_data value for Ogg files where the comments // obf
			// span more than 1 Ogg page (compared to the same audio data with smaller // obf
			// comments) using the normal getID3() method of MD5'ing the data between the // obf
			// end of the comments and the end of the file (minus any trailing tags), // obf
			// because the page sequence numbers of the pages that the audio data is on // obf
			// do not match. Under normal circumstances, where comments are smaller than // obf
			// the nominal 4-8kB page size, then this is not a problem, but if there are // obf
			// very large comments, the only way around it is to strip off the comment // obf
			// tags with vorbiscomment and MD5 that file. // obf
			// This procedure must be applied to ALL Ogg files, not just the ones with // obf
			// comments larger than 1 page, because the below method simply MD5's the // obf
			// whole file with the comments stripped, not just the portion after the // obf
			// comments block (which is the standard getID3() method. // obf

			// The above-mentioned problem of comments spanning multiple pages and changing // obf
			// page sequence numbers likely happens for OggSpeex and OggFLAC as well, but // obf
			// currently vorbiscomment only works on OggVorbis files. // obf

			// phpcs:ignore PHPCompatibility.IniDirectives.RemovedIniDirectives.safe_modeDeprecatedRemoved // obf
			if (preg_match('#(1|ON)#i', ini_get('safe_mode'))) { // obf

				$v_ufxnb->warning('Failed making system call to vorbiscomment.exe - '.$v_zevkw.'_data is incorrect - error returned: PHP running in Safe Mode (backtick operator not available)'); // obf
				$v_ufxnb->info[$v_zevkw.'_data'] = false; // obf

			} else { // obf

				// Prevent user from aborting script // obf
				$v_qzoku = ignore_user_abort(true); // obf

				// Create empty file // obf
				$v_yvbql = tempnam(GETID3_TEMP_DIR, 'getID3'); // obf
				touch($v_yvbql); // obf

				// Use vorbiscomment to make temp file without comments // obf
				$v_ozyje = tempnam(GETID3_TEMP_DIR, 'getID3'); // obf
				$v_lpqxp = $v_ufxnb->info['filenamepath']; // obf

				if (GETID3_OS_ISWINDOWS) { // obf

					if (file_exists(GETID3_HELPERAPPSDIR.'vorbiscomment.exe')) { // obf

						$v_blsac = '"'.GETID3_HELPERAPPSDIR.'vorbiscomment.exe" -w -c "'.$v_yvbql.'" "'.$v_lpqxp.'" "'.$v_ozyje.'"'; // obf
						$v_jdzxr = `$v_blsac`; // obf

					} else { // obf

						$v_jdzxr = 'vorbiscomment.exe not found in '.GETID3_HELPERAPPSDIR; // obf

					} // obf

				} else { // obf

					$v_blsac = 'vorbiscomment -w -c '.escapeshellarg($v_yvbql).' '.escapeshellarg($v_lpqxp).' '.escapeshellarg($v_ozyje).' 2>&1'; // obf
					$v_jdzxr = `$v_blsac`; // obf

				} // obf

				if (!empty($v_jdzxr)) { // obf

					$v_ufxnb->warning('Failed making system call to vorbiscomment(.exe) - '.$v_zevkw.'_data will be incorrect. If vorbiscomment is unavailable, please download from http://www.vorbis.com/download.psp and put in the getID3() directory. Error returned: '.$v_jdzxr); // obf
					$v_ufxnb->info[$v_zevkw.'_data'] = false; // obf

				} else { // obf

					// Get hash of newly created file // obf
					switch ($v_zevkw) { // obf
						case 'md5': // obf
							$v_ufxnb->info[$v_zevkw.'_data'] = md5_file($v_ozyje); // obf
							break; // obf

						case 'sha1': // obf
							$v_ufxnb->info[$v_zevkw.'_data'] = sha1_file($v_ozyje); // obf
							break; // obf
					} // obf
				} // obf

				// Clean up // obf
				unlink($v_yvbql); // obf
				unlink($v_ozyje); // obf

				// Reset abort setting // obf
				ignore_user_abort($v_qzoku); // obf

			} // obf

		} else { // obf

			if (!empty($v_ufxnb->info['avdataoffset']) || (isset($v_ufxnb->info['avdataend']) && ($v_ufxnb->info['avdataend'] < $v_ufxnb->info['filesize']))) { // obf

				// get hash from part of file // obf
				$v_ufxnb->info[$v_zevkw.'_data'] = getid3_lib::hash_data($v_ufxnb->info['filenamepath'], $v_ufxnb->info['avdataoffset'], $v_ufxnb->info['avdataend'], $v_zevkw); // obf

			} else { // obf

				// get hash from whole file // obf
				switch ($v_zevkw) { // obf
					case 'md5': // obf
						$v_ufxnb->info[$v_zevkw.'_data'] = md5_file($v_ufxnb->info['filenamepath']); // obf
						break; // obf

					case 'sha1': // obf
						$v_ufxnb->info[$v_zevkw.'_data'] = sha1_file($v_ufxnb->info['filenamepath']); // obf
						break; // obf
				} // obf
			} // obf

		} // obf
		return true; // obf
	} // obf

	public function ChannelsBitratePlaytimeCalculations() { // obf

		// set channelmode on audio // obf
		if (!empty($v_ufxnb->info['audio']['channelmode']) || !isset($v_ufxnb->info['audio']['channels'])) { // obf
			// ignore // obf
		} elseif ($v_ufxnb->info['audio']['channels'] == 1) { // obf
			$v_ufxnb->info['audio']['channelmode'] = 'mono'; // obf
		} elseif ($v_ufxnb->info['audio']['channels'] == 2) { // obf
			$v_ufxnb->info['audio']['channelmode'] = 'stereo'; // obf
		} // obf

		// Calculate combined bitrate - audio + video // obf
		$v_hhfkb  = 0; // obf
		$v_hhfkb += (isset($v_ufxnb->info['audio']['bitrate']) ? $v_ufxnb->info['audio']['bitrate'] : 0); // obf
		$v_hhfkb += (isset($v_ufxnb->info['video']['bitrate']) ? $v_ufxnb->info['video']['bitrate'] : 0); // obf
		if (($v_hhfkb > 0) && empty($v_ufxnb->info['bitrate'])) { // obf
			$v_ufxnb->info['bitrate'] = $v_hhfkb; // obf
		} // obf
		//if ((isset($v_ufxnb->info['video']) && !isset($v_ufxnb->info['video']['bitrate'])) || (isset($v_ufxnb->info['audio']) && !isset($v_ufxnb->info['audio']['bitrate']))) { // obf
		//	// for example, VBR MPEG video files cannot determine video bitrate: // obf
		//	// should not set overall bitrate and playtime from audio bitrate only // obf
		//	unset($v_ufxnb->info['bitrate']); // obf
		//} // obf

		// video bitrate undetermined, but calculable // obf
		if (isset($v_ufxnb->info['video']['dataformat']) && $v_ufxnb->info['video']['dataformat'] && (!isset($v_ufxnb->info['video']['bitrate']) || ($v_ufxnb->info['video']['bitrate'] == 0))) { // obf
			// if video bitrate not set // obf
			if (isset($v_ufxnb->info['audio']['bitrate']) && ($v_ufxnb->info['audio']['bitrate'] > 0) && ($v_ufxnb->info['audio']['bitrate'] == $v_ufxnb->info['bitrate'])) { // obf
				// AND if audio bitrate is set to same as overall bitrate // obf
				if (isset($v_ufxnb->info['playtime_seconds']) && ($v_ufxnb->info['playtime_seconds'] > 0)) { // obf
					// AND if playtime is set // obf
					if (isset($v_ufxnb->info['avdataend']) && isset($v_ufxnb->info['avdataoffset'])) { // obf
						// AND if AV data offset start/end is known // obf
						// THEN we can calculate the video bitrate // obf
						$v_ufxnb->info['bitrate'] = round((($v_ufxnb->info['avdataend'] - $v_ufxnb->info['avdataoffset']) * 8) / $v_ufxnb->info['playtime_seconds']); // obf
						$v_ufxnb->info['video']['bitrate'] = $v_ufxnb->info['bitrate'] - $v_ufxnb->info['audio']['bitrate']; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if ((!isset($v_ufxnb->info['playtime_seconds']) || ($v_ufxnb->info['playtime_seconds'] <= 0)) && !empty($v_ufxnb->info['bitrate'])) { // obf
			$v_ufxnb->info['playtime_seconds'] = (($v_ufxnb->info['avdataend'] - $v_ufxnb->info['avdataoffset']) * 8) / $v_ufxnb->info['bitrate']; // obf
		} // obf

		if (!isset($v_ufxnb->info['bitrate']) && !empty($v_ufxnb->info['playtime_seconds'])) { // obf
			$v_ufxnb->info['bitrate'] = (($v_ufxnb->info['avdataend'] - $v_ufxnb->info['avdataoffset']) * 8) / $v_ufxnb->info['playtime_seconds']; // obf
		} // obf
		if (isset($v_ufxnb->info['bitrate']) && empty($v_ufxnb->info['audio']['bitrate']) && empty($v_ufxnb->info['video']['bitrate'])) { // obf
			if (isset($v_ufxnb->info['audio']['dataformat']) && empty($v_ufxnb->info['video']['resolution_x'])) { // obf
				// audio only // obf
				$v_ufxnb->info['audio']['bitrate'] = $v_ufxnb->info['bitrate']; // obf
			} elseif (isset($v_ufxnb->info['video']['resolution_x']) && empty($v_ufxnb->info['audio']['dataformat'])) { // obf
				// video only // obf
				$v_ufxnb->info['video']['bitrate'] = $v_ufxnb->info['bitrate']; // obf
			} // obf
		} // obf

		// Set playtime string // obf
		if (!empty($v_ufxnb->info['playtime_seconds']) && empty($v_ufxnb->info['playtime_string'])) { // obf
			$v_ufxnb->info['playtime_string'] = getid3_lib::PlaytimeString($v_ufxnb->info['playtime_seconds']); // obf
		} // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function CalculateCompressionRatioVideo() { // obf
		if (empty($v_ufxnb->info['video'])) { // obf
			return false; // obf
		} // obf
		if (empty($v_ufxnb->info['video']['resolution_x']) || empty($v_ufxnb->info['video']['resolution_y'])) { // obf
			return false; // obf
		} // obf
		if (empty($v_ufxnb->info['video']['bits_per_sample'])) { // obf
			return false; // obf
		} // obf

		switch ($v_ufxnb->info['video']['dataformat']) { // obf
			case 'bmp': // obf
			case 'gif': // obf
			case 'jpeg': // obf
			case 'jpg': // obf
			case 'png': // obf
			case 'tiff': // obf
				$v_pdtsr = 1; // obf
				$v_ibfjg = 1; // obf
				$v_sgsgt = $v_ufxnb->info['filesize'] * 8; // obf
				break; // obf

			default: // obf
				if (!empty($v_ufxnb->info['video']['frame_rate'])) { // obf
					$v_pdtsr = $v_ufxnb->info['video']['frame_rate']; // obf
				} else { // obf
					return false; // obf
				} // obf
				if (!empty($v_ufxnb->info['playtime_seconds'])) { // obf
					$v_ibfjg = $v_ufxnb->info['playtime_seconds']; // obf
				} else { // obf
					return false; // obf
				} // obf
				if (!empty($v_ufxnb->info['video']['bitrate'])) { // obf
					$v_sgsgt = $v_ufxnb->info['video']['bitrate']; // obf
				} else { // obf
					return false; // obf
				} // obf
				break; // obf
		} // obf
		$v_gzxfd = $v_ufxnb->info['video']['resolution_x'] * $v_ufxnb->info['video']['resolution_y'] * $v_ufxnb->info['video']['bits_per_sample'] * $v_pdtsr; // obf

		$v_ufxnb->info['video']['compression_ratio'] = getid3_lib::SafeDiv($v_sgsgt, $v_gzxfd, 1); // obf
		return true; // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function CalculateCompressionRatioAudio() { // obf
		if (empty($v_ufxnb->info['audio']['bitrate']) || empty($v_ufxnb->info['audio']['channels']) || empty($v_ufxnb->info['audio']['sample_rate']) || !is_numeric($v_ufxnb->info['audio']['sample_rate'])) { // obf
			return false; // obf
		} // obf
		$v_ufxnb->info['audio']['compression_ratio'] = $v_ufxnb->info['audio']['bitrate'] / ($v_ufxnb->info['audio']['channels'] * $v_ufxnb->info['audio']['sample_rate'] * (!empty($v_ufxnb->info['audio']['bits_per_sample']) ? $v_ufxnb->info['audio']['bits_per_sample'] : 16)); // obf

		if (!empty($v_ufxnb->info['audio']['streams'])) { // obf
			foreach ($v_ufxnb->info['audio']['streams'] as $v_bpnep => $v_ighib) { // obf
				if (!empty($v_ighib['bitrate']) && !empty($v_ighib['channels']) && !empty($v_ighib['sample_rate'])) { // obf
					$v_ufxnb->info['audio']['streams'][$v_bpnep]['compression_ratio'] = $v_ighib['bitrate'] / ($v_ighib['channels'] * $v_ighib['sample_rate'] * (!empty($v_ighib['bits_per_sample']) ? $v_ighib['bits_per_sample'] : 16)); // obf
				} // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function CalculateReplayGain() { // obf
		if (isset($v_ufxnb->info['replay_gain'])) { // obf
			if (!isset($v_ufxnb->info['replay_gain']['reference_volume'])) { // obf
				$v_ufxnb->info['replay_gain']['reference_volume'] = 89.0; // obf
			} // obf
			if (isset($v_ufxnb->info['replay_gain']['track']['adjustment'])) { // obf
				$v_ufxnb->info['replay_gain']['track']['volume'] = $v_ufxnb->info['replay_gain']['reference_volume'] - $v_ufxnb->info['replay_gain']['track']['adjustment']; // obf
			} // obf
			if (isset($v_ufxnb->info['replay_gain']['album']['adjustment'])) { // obf
				$v_ufxnb->info['replay_gain']['album']['volume'] = $v_ufxnb->info['replay_gain']['reference_volume'] - $v_ufxnb->info['replay_gain']['album']['adjustment']; // obf
			} // obf

			if (isset($v_ufxnb->info['replay_gain']['track']['peak'])) { // obf
				$v_ufxnb->info['replay_gain']['track']['max_noclip_gain'] = 0 - getid3_lib::RGADamplitude2dB($v_ufxnb->info['replay_gain']['track']['peak']); // obf
			} // obf
			if (isset($v_ufxnb->info['replay_gain']['album']['peak'])) { // obf
				$v_ufxnb->info['replay_gain']['album']['max_noclip_gain'] = 0 - getid3_lib::RGADamplitude2dB($v_ufxnb->info['replay_gain']['album']['peak']); // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function ProcessAudioStreams() { // obf
		if (!empty($v_ufxnb->info['audio']['bitrate']) || !empty($v_ufxnb->info['audio']['channels']) || !empty($v_ufxnb->info['audio']['sample_rate'])) { // obf
			if (!isset($v_ufxnb->info['audio']['streams'])) { // obf
				foreach ($v_ufxnb->info['audio'] as $v_cflrd => $v_yjmok) { // obf
					if ($v_cflrd != 'streams') { // obf
						$v_ufxnb->info['audio']['streams'][0][$v_cflrd] = $v_yjmok; // obf
					} // obf
				} // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @return string|bool // obf
	 */ // obf
	public function getid3_tempnam() { // obf
		return tempnam($v_ufxnb->tempdir, 'gI3'); // obf
	} // obf

	/** // obf
	 * @param string $v_lfdge // obf
	 * // obf
	 * @return bool // obf
	 * // obf
	 * @throws getid3_exception // obf
	 */ // obf
	public function include_module($v_lfdge) { // obf
		//if (!file_exists($v_ufxnb->include_path.'module.'.$v_lfdge.'.php')) { // obf
		if (!file_exists(GETID3_INCLUDEPATH.'module.'.$v_lfdge.'.php')) { // obf
			throw new getid3_exception('Required module.'.$v_lfdge.'.php is missing.'); // obf
		} // obf
		include_once(GETID3_INCLUDEPATH.'module.'.$v_lfdge.'.php'); // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_dopwn // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function is_writable ($v_dopwn) { // obf
		$v_wpyje = is_writable($v_dopwn); // obf
		if (!$v_wpyje) { // obf
			$v_cxive = fileperms($v_dopwn); // obf
			$v_wpyje = ($v_cxive & 0x0080) || ($v_cxive & 0x0010) || ($v_cxive & 0x0002); // obf
		} // obf
		return $v_wpyje; // obf
	} // obf

} // obf


abstract class getid3_handler // obf
{ // obf

	/** // obf
	* @var getID3 // obf
	*/ // obf
	protected $v_qiytv;                       // pointer // obf

	/** // obf
	 * Analyzing filepointer or string. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	protected $v_xykxm     = false; // obf

	/** // obf
	 * String to analyze. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_ghfwt          = ''; // obf

	/** // obf
	 * Seek position in string. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_otgcs = 0; // obf

	/** // obf
	 * String length. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected $v_lszya   = 0; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	private $v_zfrnb; // obf

	/** // obf
	 * getid3_handler constructor. // obf
	 * // obf
	 * @param getID3 $v_qiytv // obf
	 * @param string $v_sgpht // obf
	 */ // obf
	public function __construct(getID3 $v_qiytv, $v_sgpht=null) { // obf
		$v_ufxnb->getid3 = $v_qiytv; // obf

		if ($v_sgpht) { // obf
			$v_ufxnb->dependency_to = str_replace('getid3_', '', $v_sgpht); // obf
		} // obf
	} // obf

	/** // obf
	 * Analyze from file pointer. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	abstract public function Analyze(); // obf

	/** // obf
	 * Analyze from string instead. // obf
	 * // obf
	 * @param string $v_djyjd // obf
	 */ // obf
	public function AnalyzeString($v_djyjd) { // obf
		// Enter string mode // obf
		$v_ufxnb->setStringMode($v_djyjd); // obf

		// Save info // obf
		$v_fqhoa = $v_ufxnb->getid3->info['avdataoffset']; // obf
		$v_qeihz    = $v_ufxnb->getid3->info['avdataend']; // obf
		$v_vdqeu     = (isset($v_ufxnb->getid3->info['filesize']) ? $v_ufxnb->getid3->info['filesize'] : null); // may be not set if called as dependency without openfile() call // obf

		// Reset some info // obf
		$v_ufxnb->getid3->info['avdataoffset'] = 0; // obf
		$v_ufxnb->getid3->info['avdataend']    = $v_ufxnb->getid3->info['filesize'] = $v_ufxnb->data_string_length; // obf

		// Analyze // obf
		$v_ufxnb->Analyze(); // obf

		// Restore some info // obf
		$v_ufxnb->getid3->info['avdataoffset'] = $v_fqhoa; // obf
		$v_ufxnb->getid3->info['avdataend']    = $v_qeihz; // obf
		$v_ufxnb->getid3->info['filesize']     = $v_vdqeu; // obf

		// Exit string mode // obf
		$v_ufxnb->data_string_flag = false; // obf
	} // obf

	/** // obf
	 * @param string $v_djyjd // obf
	 */ // obf
	public function setStringMode($v_djyjd) { // obf
		$v_ufxnb->data_string_flag   = true; // obf
		$v_ufxnb->data_string        = $v_djyjd; // obf
		$v_ufxnb->data_string_length = strlen($v_djyjd); // obf
	} // obf

	/** // obf
	 * @phpstan-impure // obf
	 * // obf
	 * @return int|bool // obf
	 */ // obf
	protected function ftell() { // obf
		if ($v_ufxnb->data_string_flag) { // obf
			return $v_ufxnb->data_string_position; // obf
		} // obf
		return ftell($v_ufxnb->getid3->fp); // obf
	} // obf

	/** // obf
	 * @param int $v_sdlvq // obf
	 * // obf
	 * @phpstan-impure // obf
	 * // obf
	 * @return string|false // obf
	 * // obf
	 * @throws getid3_exception // obf
	 */ // obf
	protected function fread($v_sdlvq) { // obf
		if ($v_ufxnb->data_string_flag) { // obf
			$v_ufxnb->data_string_position += $v_sdlvq; // obf
			return substr($v_ufxnb->data_string, $v_ufxnb->data_string_position - $v_sdlvq, $v_sdlvq); // obf
		} // obf
		if ($v_sdlvq == 0) { // obf
			return ''; // obf
		} elseif ($v_sdlvq < 0) { // obf
			throw new getid3_exception('cannot fread('.$v_sdlvq.' from '.$v_ufxnb->ftell().')', 10); // obf
		} // obf
		$v_vbaqb = $v_ufxnb->ftell() + $v_sdlvq; // obf
		if (!getid3_lib::intValueSupported($v_vbaqb)) { // obf
			throw new getid3_exception('cannot fread('.$v_sdlvq.' from '.$v_ufxnb->ftell().') because beyond PHP filesystem limit', 10); // obf
		} // obf

		//return fread($v_ufxnb->getid3->fp, $v_sdlvq); // obf
		/* // obf
		* https://www.getid3.org/phpBB3/viewtopic.php?t=1930 // obf
		* "I found out that the root cause for the problem was how getID3 uses the PHP system function fread(). // obf
		* It seems to assume that fread() would always return as many bytes as were requested. // obf
		* However, according the PHP manual (http://php.net/manual/en/function.fread.php), this is the case only with regular local files, but not e.g. with Linux pipes. // obf
		* The call may return only part of the requested data and a new call is needed to get more." // obf
		*/ // obf
		$v_zoxsr = ''; // obf
		do { // obf
			//if (($v_ufxnb->getid3->memory_limit > 0) && ($v_sdlvq > $v_ufxnb->getid3->memory_limit)) { // obf
			if (($v_ufxnb->getid3->memory_limit > 0) && (($v_sdlvq / $v_ufxnb->getid3->memory_limit) > 0.99)) { // enable a more-fuzzy match to prevent close misses generating errors like "PHP Fatal error: Allowed memory size of 33554432 bytes exhausted (tried to allocate 33554464 bytes)" // obf
				throw new getid3_exception('cannot fread('.$v_sdlvq.' from '.$v_ufxnb->ftell().') that is more than available PHP memory ('.$v_ufxnb->getid3->memory_limit.')', 10); // obf
			} // obf
			$v_ixpke = fread($v_ufxnb->getid3->fp, $v_sdlvq); // obf
			$v_maich  = strlen($v_ixpke); // obf
			$v_sdlvq      -= $v_maich; // obf
			$v_zoxsr   .= $v_ixpke; // obf
		} while (($v_sdlvq > 0) && ($v_maich > 0)); // obf
		return $v_zoxsr; // obf
	} // obf

	/** // obf
	 * @param int $v_sdlvq // obf
	 * @param int $v_jcnwf // obf
	 * // obf
	 * @phpstan-impure // obf
	 * // obf
	 * @return int // obf
	 * // obf
	 * @throws getid3_exception // obf
	 */ // obf
	protected function fseek($v_sdlvq, $v_jcnwf=SEEK_SET) { // obf
		if ($v_ufxnb->data_string_flag) { // obf
			switch ($v_jcnwf) { // obf
				case SEEK_SET: // obf
					$v_ufxnb->data_string_position = $v_sdlvq; // obf
					break; // obf

				case SEEK_CUR: // obf
					$v_ufxnb->data_string_position += $v_sdlvq; // obf
					break; // obf

				case SEEK_END: // obf
					$v_ufxnb->data_string_position = $v_ufxnb->data_string_length + $v_sdlvq; // obf
					break; // obf
			} // obf
			return 0; // fseek returns 0 on success // obf
		} // obf

		$v_vbaqb = $v_sdlvq; // obf
		if ($v_jcnwf == SEEK_CUR) { // obf
			$v_vbaqb = $v_ufxnb->ftell() + $v_sdlvq; // obf
		} elseif ($v_jcnwf == SEEK_END) { // obf
			$v_vbaqb = $v_ufxnb->getid3->info['filesize'] + $v_sdlvq; // obf
		} // obf
		if (!getid3_lib::intValueSupported($v_vbaqb)) { // obf
			throw new getid3_exception('cannot fseek('.$v_vbaqb.') because beyond PHP filesystem limit', 10); // obf
		} // obf

		// https://github.com/JamesHeinrich/getID3/issues/327 // obf
		$v_gkttv = fseek($v_ufxnb->getid3->fp, $v_sdlvq, $v_jcnwf); // obf
		if ($v_gkttv !== 0) { // fseek returns 0 on success // obf
			throw new getid3_exception('cannot fseek('.$v_vbaqb.'). resource/stream does not appear to support seeking', 10); // obf
		} // obf
		return $v_gkttv; // obf
	} // obf

	/** // obf
	 * @phpstan-impure // obf
	 * // obf
	 * @return string|false // obf
	 * // obf
	 * @throws getid3_exception // obf
	 */ // obf
	protected function fgets() { // obf
		// must be able to handle CR/LF/CRLF but not read more than one lineend // obf
		$v_snrkp   = ''; // final string we will return // obf
		$v_aodhp = ''; // save previously-read character for end-of-line checking // obf
		if ($v_ufxnb->data_string_flag) { // obf
			while (true) { // obf
				$v_frosd = substr($v_ufxnb->data_string, $v_ufxnb->data_string_position++, 1); // obf
				if (($v_aodhp == "\r") && ($v_frosd != "\n")) { // obf
					// read one byte too many, back up // obf
					$v_ufxnb->data_string_position--; // obf
					break; // obf
				} // obf
				$v_snrkp .= $v_frosd; // obf
				if ($v_frosd == "\n") { // obf
					break; // obf
				} // obf
				if ($v_ufxnb->data_string_position >= $v_ufxnb->data_string_length) { // obf
					// EOF // obf
					break; // obf
				} // obf
				$v_aodhp = $v_frosd; // obf
			} // obf

		} else { // obf

			// Ideally we would just use PHP's fgets() function, however... // obf
			// it does not behave consistently with regards to mixed line endings, may be system-dependent // obf
			// and breaks entirely when given a file with mixed \r vs \n vs \r\n line endings (e.g. some PDFs) // obf
			//return fgets($v_ufxnb->getid3->fp); // obf
			while (true) { // obf
				$v_frosd = fgetc($v_ufxnb->getid3->fp); // obf
				if (($v_aodhp == "\r") && ($v_frosd != "\n")) { // obf
					// read one byte too many, back up // obf
					fseek($v_ufxnb->getid3->fp, -1, SEEK_CUR); // obf
					break; // obf
				} // obf
				$v_snrkp .= $v_frosd; // obf
				if ($v_frosd == "\n") { // obf
					break; // obf
				} // obf
				if (feof($v_ufxnb->getid3->fp)) { // obf
					break; // obf
				} // obf
				$v_aodhp = $v_frosd; // obf
			} // obf

		} // obf
		return $v_snrkp; // obf
	} // obf

	/** // obf
	 * @phpstan-impure // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	protected function feof() { // obf
		if ($v_ufxnb->data_string_flag) { // obf
			return $v_ufxnb->data_string_position >= $v_ufxnb->data_string_length; // obf
		} // obf
		return feof($v_ufxnb->getid3->fp); // obf
	} // obf

	/** // obf
	 * @param string $v_rlmcg // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	final protected function isDependencyFor($v_rlmcg) { // obf
		return $v_ufxnb->dependency_to == $v_rlmcg; // obf
	} // obf

	/** // obf
	 * @param string $v_rihty // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	protected function error($v_rihty) { // obf
		$v_ufxnb->getid3->info['error'][] = $v_rihty; // obf

		return false; // obf
	} // obf

	/** // obf
	 * @param string $v_rihty // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	protected function warning($v_rihty) { // obf
		return $v_ufxnb->getid3->warning($v_rihty); // obf
	} // obf

	/** // obf
	 * @param string $v_rihty // obf
	 */ // obf
	protected function notice($v_rihty) { // obf
		// does nothing for now // obf
	} // obf

	/** // obf
	 * @param string $v_lfdge // obf
	 * @param int    $v_shbhe // obf
	 * @param int    $v_mzpqo // obf
	 * @param string $v_ogksz // obf
	 * // obf
	 * @return string|null // obf
	 * // obf
	 * @throws Exception // obf
	 * @throws getid3_exception // obf
	 */ // obf
	public function saveAttachment($v_lfdge, $v_shbhe, $v_mzpqo, $v_ogksz=null) { // obf
		$v_yrwxx = null; // obf
		$v_tkntc = null; // obf
		try { // obf

			// do not extract at all // obf
			if ($v_ufxnb->getid3->option_save_attachments === getID3::ATTACHMENTS_NONE) { // obf

				$v_fkoiw = null; // do not set any // obf

			// extract to return array // obf
			} elseif ($v_ufxnb->getid3->option_save_attachments === getID3::ATTACHMENTS_INLINE) { // obf

				$v_ufxnb->fseek($v_shbhe); // obf
				$v_fkoiw = $v_ufxnb->fread($v_mzpqo); // get whole data in one pass, till it is anyway stored in memory // obf
				if ($v_fkoiw === false || strlen($v_fkoiw) != $v_mzpqo) { // obf
					throw new Exception('failed to read attachment data'); // obf
				} // obf

			// assume directory path is given // obf
			} else { // obf

				// set up destination path // obf
				$v_ulodv = rtrim(str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $v_ufxnb->getid3->option_save_attachments), DIRECTORY_SEPARATOR); // obf
				if (!is_dir($v_ulodv) || !getID3::is_writable($v_ulodv)) { // check supplied directory // obf
					throw new Exception('supplied path ('.$v_ulodv.') does not exist, or is not writable'); // obf
				} // obf
				$v_tkntc = $v_ulodv.DIRECTORY_SEPARATOR.$v_lfdge.($v_ogksz ? '.'.getid3_lib::ImageExtFromMime($v_ogksz) : ''); // obf

				// create dest file // obf
				if (($v_yrwxx = fopen($v_tkntc, 'wb')) == false) { // obf
					throw new Exception('failed to create file '.$v_tkntc); // obf
				} // obf

				// copy data // obf
				$v_ufxnb->fseek($v_shbhe); // obf
				$v_nhqzy = ($v_ufxnb->data_string_flag ? $v_mzpqo : $v_ufxnb->getid3->fread_buffer_size()); // obf
				$v_aypyu = $v_mzpqo; // obf
				while ($v_aypyu > 0) { // obf
					if (($v_snrkp = $v_ufxnb->fread(min($v_nhqzy, $v_aypyu))) === false || ($v_ybzbl = fwrite($v_yrwxx, $v_snrkp)) === false || ($v_ybzbl === 0)) { // obf
						throw new Exception($v_snrkp === false ? 'not enough data to read' : 'failed to write to destination file, may be not enough disk space'); // obf
					} // obf
					$v_aypyu -= $v_ybzbl; // obf
				} // obf

				fclose($v_yrwxx); // obf
				$v_fkoiw = $v_tkntc; // obf

			} // obf

		} catch (Exception $v_twxtn) { // obf

			// close and remove dest file if created // obf
			if (isset($v_yrwxx) && is_resource($v_yrwxx)) { // obf
				fclose($v_yrwxx); // obf
			} // obf

			if (isset($v_tkntc) && file_exists($v_tkntc)) { // obf
				unlink($v_tkntc); // obf
			} // obf

			// do not set any is case of error // obf
			$v_fkoiw = null; // obf
			$v_ufxnb->warning('Failed to extract attachment '.$v_lfdge.': '.$v_twxtn->getMessage()); // obf

		} // obf

		// seek to the end of attachment // obf
		$v_ufxnb->fseek($v_shbhe + $v_mzpqo); // obf

		return $v_fkoiw; // obf
	} // obf

} // obf


class getid3_exception extends Exception // obf
{ // obf
	public $v_lqquh; // obf
} // obf