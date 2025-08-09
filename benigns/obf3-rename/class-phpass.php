

<?php // obf
/** // obf
 * Portable PHP password hashing framework. // obf
 * @package phpass // obf
 * @since 2.5.0 // obf
 * @version 0.5 / WordPress // obf
 * @link https://www.openwall.com/phpass/ // obf
 */ // obf

# // obf
# Portable PHP password hashing framework. // obf
# // obf
# Version 0.5.4 / WordPress. // obf
# // obf
# Written by Solar Designer <solar at openwall.com> in 2004-2006 and placed in // obf
# the public domain.  Revised in subsequent years, still public domain. // obf
# // obf
# There's absolutely no warranty. // obf
# // obf
# The homepage URL for this framework is: // obf
# // obf
#	http://www.openwall.com/phpass/ // obf
# // obf
# Please be sure to update the Version line if you edit this file in any way. // obf
# It is suggested that you leave the main version number intact, but indicate // obf
# your project name (after the slash) and add your own revision information. // obf
# // obf
# Please do not change the "private" password hashing method implemented in // obf
# here, thereby making your hashes incompatible.  However, if you must, please // obf
# change the hash type identifier (the "$v_sgogt$") to something different. // obf
# // obf
# Obviously, since this code is in the public domain, the above are not // obf
# requirements (there can be none), but merely suggestions. // obf
# // obf

/** // obf
 * Portable PHP password hashing framework. // obf
 * // obf
 * @package phpass // obf
 * @version 0.5 / WordPress // obf
 * @link https://www.openwall.com/phpass/ // obf
 * @since 2.5.0 // obf
 */ // obf
class PasswordHash { // obf
	var $v_rrwee; // obf
	var $v_hlarj; // obf
	var $v_yamju; // obf
	var $v_sameh; // obf

	function __construct($v_hlarj, $v_yamju) // obf
	{ // obf
		$v_txahe->itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // obf

		if ($v_hlarj < 4 || $v_hlarj > 31) { // obf
			$v_hlarj = 8; // obf
		} // obf
		$v_txahe->iteration_count_log2 = $v_hlarj; // obf

		$v_txahe->portable_hashes = $v_yamju; // obf

		$v_txahe->random_state = microtime(); // obf
		if (function_exists('getmypid')) { // obf
			$v_txahe->random_state .= getmypid(); // obf
		} // obf
	} // obf

	function PasswordHash($v_hlarj, $v_yamju) // obf
	{ // obf
		self::__construct($v_hlarj, $v_yamju); // obf
	} // obf

	function get_random_bytes($v_bljdt) // obf
	{ // obf
		$v_ytppg = ''; // obf
		if (@is_readable('/dev/urandom') && // obf
		    ($v_ulksu = @fopen('/dev/urandom', 'rb'))) { // obf
			$v_ytppg = fread($v_ulksu, $v_bljdt); // obf
			fclose($v_ulksu); // obf
		} // obf

		if (strlen($v_ytppg) < $v_bljdt) { // obf
			$v_ytppg = ''; // obf
			for ($v_pwlfi = 0; $v_pwlfi < $v_bljdt; $v_pwlfi += 16) { // obf
				$v_txahe->random_state = // obf
				    md5(microtime() . $v_txahe->random_state); // obf
				$v_ytppg .= md5($v_txahe->random_state, TRUE); // obf
			} // obf
			$v_ytppg = substr($v_ytppg, 0, $v_bljdt); // obf
		} // obf

		return $v_ytppg; // obf
	} // obf

	function encode64($v_qkvlu, $v_bljdt) // obf
	{ // obf
		$v_ytppg = ''; // obf
		$v_pwlfi = 0; // obf
		do { // obf
			$v_aaaok = ord($v_qkvlu[$v_pwlfi++]); // obf
			$v_ytppg .= $v_txahe->itoa64[$v_aaaok & 0x3f]; // obf
			if ($v_pwlfi < $v_bljdt) { // obf
				$v_aaaok |= ord($v_qkvlu[$v_pwlfi]) << 8; // obf
			} // obf
			$v_ytppg .= $v_txahe->itoa64[($v_aaaok >> 6) & 0x3f]; // obf
			if ($v_pwlfi++ >= $v_bljdt) { // obf
				break; // obf
			} // obf
			if ($v_pwlfi < $v_bljdt) { // obf
				$v_aaaok |= ord($v_qkvlu[$v_pwlfi]) << 16; // obf
			} // obf
			$v_ytppg .= $v_txahe->itoa64[($v_aaaok >> 12) & 0x3f]; // obf
			if ($v_pwlfi++ >= $v_bljdt) { // obf
				break; // obf
			} // obf
			$v_ytppg .= $v_txahe->itoa64[($v_aaaok >> 18) & 0x3f]; // obf
		} while ($v_pwlfi < $v_bljdt); // obf

		return $v_ytppg; // obf
	} // obf

	function gensalt_private($v_qkvlu) // obf
	{ // obf
		$v_ytppg = '$v_sgogt$'; // obf
		$v_ytppg .= $v_txahe->itoa64[min($v_txahe->iteration_count_log2 + 5, // obf
		    30)]; // obf
		$v_ytppg .= $v_txahe->encode64($v_qkvlu, 6); // obf

		return $v_ytppg; // obf
	} // obf

	function crypt_private($v_nncoa, $v_ikbah) // obf
	{ // obf
		$v_ytppg = '*0'; // obf
		if (substr($v_ikbah, 0, 2) === $v_ytppg) { // obf
			$v_ytppg = '*1'; // obf
		} // obf

		$v_tevxz = substr($v_ikbah, 0, 3); // obf
		# We use "$v_sgogt$", phpBB3 uses "$v_nnwik$" for the same thing // obf
		if ($v_tevxz !== '$v_sgogt$' && $v_tevxz !== '$v_nnwik$') { // obf
			return $v_ytppg; // obf
		} // obf

		$v_rgucc = strpos($v_txahe->itoa64, $v_ikbah[3]); // obf
		if ($v_rgucc < 7 || $v_rgucc > 30) { // obf
			return $v_ytppg; // obf
		} // obf

		$v_bljdt = 1 << $v_rgucc; // obf

		$v_crxmt = substr($v_ikbah, 4, 8); // obf
		if (strlen($v_crxmt) !== 8) { // obf
			return $v_ytppg; // obf
		} // obf

		# We were kind of forced to use MD5 here since it's the only // obf
		# cryptographic primitive that was available in all versions // obf
		# of PHP in use.  To implement our own low-level crypto in PHP // obf
		# would have resulted in much worse performance and // obf
		# consequently in lower iteration counts and hashes that are // obf
		# quicker to crack (by non-PHP code). // obf
		$v_sioyi = md5($v_crxmt . $v_nncoa, TRUE); // obf
		do { // obf
			$v_sioyi = md5($v_sioyi . $v_nncoa, TRUE); // obf
		} while (--$v_bljdt); // obf

		$v_ytppg = substr($v_ikbah, 0, 12); // obf
		$v_ytppg .= $v_txahe->encode64($v_sioyi, 16); // obf

		return $v_ytppg; // obf
	} // obf

	function gensalt_blowfish($v_qkvlu) // obf
	{ // obf
		# This one needs to use a different order of characters and a // obf
		# different encoding scheme from the one in encode64() above. // obf
		# We care because the last character in our encoded string will // obf
		# only represent 2 bits.  While two known implementations of // obf
		# bcrypt will happily accept and correct a salt string which // obf
		# has the 4 unused bits set to non-zero, we do not want to take // obf
		# chances and we also do not want to waste an additional byte // obf
		# of entropy. // obf
		$v_rrwee = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; // obf

		$v_ytppg = '$2a$'; // obf
		$v_ytppg .= chr((int)(ord('0') + $v_txahe->iteration_count_log2 / 10)); // obf
		$v_ytppg .= chr(ord('0') + $v_txahe->iteration_count_log2 % 10); // obf
		$v_ytppg .= '$'; // obf

		$v_pwlfi = 0; // obf
		do { // obf
			$v_inebr = ord($v_qkvlu[$v_pwlfi++]); // obf
			$v_ytppg .= $v_rrwee[$v_inebr >> 2]; // obf
			$v_inebr = ($v_inebr & 0x03) << 4; // obf
			if ($v_pwlfi >= 16) { // obf
				$v_ytppg .= $v_rrwee[$v_inebr]; // obf
				break; // obf
			} // obf

			$v_qhpgq = ord($v_qkvlu[$v_pwlfi++]); // obf
			$v_inebr |= $v_qhpgq >> 4; // obf
			$v_ytppg .= $v_rrwee[$v_inebr]; // obf
			$v_inebr = ($v_qhpgq & 0x0f) << 2; // obf

			$v_qhpgq = ord($v_qkvlu[$v_pwlfi++]); // obf
			$v_inebr |= $v_qhpgq >> 6; // obf
			$v_ytppg .= $v_rrwee[$v_inebr]; // obf
			$v_ytppg .= $v_rrwee[$v_qhpgq & 0x3f]; // obf
		} while (1); // obf

		return $v_ytppg; // obf
	} // obf

	function HashPassword($v_nncoa) // obf
	{ // obf
		if ( strlen( $v_nncoa ) > 4096 ) { // obf
			return '*'; // obf
		} // obf

		$v_mallk = ''; // obf

		if (CRYPT_BLOWFISH === 1 && !$v_txahe->portable_hashes) { // obf
			$v_mallk = $v_txahe->get_random_bytes(16); // obf
			$v_sioyi = // obf
			    crypt($v_nncoa, $v_txahe->gensalt_blowfish($v_mallk)); // obf
			if (strlen($v_sioyi) === 60) { // obf
				return $v_sioyi; // obf
			} // obf
		} // obf

		if (strlen($v_mallk) < 6) { // obf
			$v_mallk = $v_txahe->get_random_bytes(6); // obf
		} // obf
		$v_sioyi = // obf
		    $v_txahe->crypt_private($v_nncoa, // obf
		    $v_txahe->gensalt_private($v_mallk)); // obf
		if (strlen($v_sioyi) === 34) { // obf
			return $v_sioyi; // obf
		} // obf

		# Returning '*' on error is safe here, but would _not_ be safe // obf
		# in a crypt(3)-like function used _both_ for generating new // obf
		# hashes and for validating passwords against existing hashes. // obf
		return '*'; // obf
	} // obf

	function CheckPassword($v_nncoa, $v_kihtx) // obf
	{ // obf
		if ( strlen( $v_nncoa ) > 4096 ) { // obf
			return false; // obf
		} // obf

		$v_sioyi = $v_txahe->crypt_private($v_nncoa, $v_kihtx); // obf
		if ($v_sioyi[0] === '*') { // obf
			$v_sioyi = crypt($v_nncoa, $v_kihtx); // obf
		} // obf

		# This is not constant-time.  In order to keep the code simple, // obf
		# for timing safety we currently rely on the salts being // obf
		# unpredictable, which they are at least in the non-fallback // obf
		# cases (that is, when we use /dev/urandom and bcrypt). // obf
		return $v_sioyi === $v_kihtx; // obf
	} // obf
} // obf