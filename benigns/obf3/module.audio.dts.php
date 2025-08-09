

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio.dts.php                                        // // obf
// module for analyzing DTS Audio files                        // // obf
// dependencies: NONE                                          // // obf
//                                                             // // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf

/** // obf
* @tutorial http://wiki.multimedia.cx/index.php?title=DTS // obf
*/ // obf
class getid3_dts extends getid3_handler // obf
{ // obf
	/** // obf
	 * Default DTS syncword used in native .cpt or .dts formats. // obf
	 */ // obf
	const syncword = "\x7F\xFE\x80\x01"; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	private $v_lfbjm = 0; // obf

	/** // obf
	 * Possible syncwords indicating bitstream encoding. // obf
	 */ // obf
	public static $v_qhiop = array( // obf
		0 => "\x7F\xFE\x80\x01",  // raw big-endian // obf
		1 => "\xFE\x7F\x01\x80",  // raw little-endian // obf
		2 => "\x1F\xFF\xE8\x00",  // 14-bit big-endian // obf
		3 => "\xFF\x1F\x00\xE8"); // 14-bit little-endian // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_mxvso = &$v_qwowp->getid3->info; // obf
		$v_mxvso['fileformat'] = 'dts'; // obf

		$v_qwowp->fseek($v_mxvso['avdataoffset']); // obf
		$v_fejhu = $v_qwowp->fread(20); // we only need 2 words magic + 6 words frame header, but these words may be normal 16-bit words OR 14-bit words with 2 highest bits set to zero, so 8 words can be either 8*16/8 = 16 bytes OR 8*16*(16/14)/8 = 18.3 bytes // obf

		// check syncword // obf
		$v_yfuye = substr($v_fejhu, 0, 4); // obf
		if (($v_zzkqw = array_search($v_yfuye, self::$v_qhiop)) !== false) { // obf

			$v_mxvso['dts']['raw']['magic'] = $v_yfuye; // obf
			$v_qwowp->readBinDataOffset = 32; // obf

		} elseif ($v_qwowp->isDependencyFor('matroska')) { // obf

			// Matroska contains DTS without syncword encoded as raw big-endian format // obf
			$v_zzkqw = 0; // obf
			$v_qwowp->readBinDataOffset = 0; // obf

		} else { // obf

			unset($v_mxvso['fileformat']); // obf
			return $v_qwowp->error('Expecting "'.implode('| ', array_map('getid3_lib::PrintHexBytes', self::$v_qhiop)).'" at offset '.$v_mxvso['avdataoffset'].', found "'.getid3_lib::PrintHexBytes($v_yfuye).'"'); // obf

		} // obf

		// decode header // obf
		$v_yzowg = ''; // obf
		for ($v_wahlw = 0; $v_wahlw <= strlen($v_fejhu); $v_wahlw += 2) { // obf
			switch ($v_zzkqw) { // obf
				case 0: // raw big-endian // obf
					$v_yzowg .=        getid3_lib::BigEndian2Bin(       substr($v_fejhu, $v_wahlw, 2) ); // obf
					break; // obf
				case 1: // raw little-endian // obf
					$v_yzowg .=        getid3_lib::BigEndian2Bin(strrev(substr($v_fejhu, $v_wahlw, 2))); // obf
					break; // obf
				case 2: // 14-bit big-endian // obf
					$v_yzowg .= substr(getid3_lib::BigEndian2Bin(       substr($v_fejhu, $v_wahlw, 2) ), 2, 14); // obf
					break; // obf
				case 3: // 14-bit little-endian // obf
					$v_yzowg .= substr(getid3_lib::BigEndian2Bin(strrev(substr($v_fejhu, $v_wahlw, 2))), 2, 14); // obf
					break; // obf
			} // obf
		} // obf

		$v_mxvso['dts']['raw']['frame_type']             =        $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['raw']['deficit_samples']        =        $v_qwowp->readBinData($v_yzowg,  5); // obf
		$v_mxvso['dts']['flags']['crc_present']          = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['raw']['pcm_sample_blocks']      =        $v_qwowp->readBinData($v_yzowg,  7); // obf
		$v_mxvso['dts']['raw']['frame_byte_size']        =        $v_qwowp->readBinData($v_yzowg, 14); // obf
		$v_mxvso['dts']['raw']['channel_arrangement']    =        $v_qwowp->readBinData($v_yzowg,  6); // obf
		$v_mxvso['dts']['raw']['sample_frequency']       =        $v_qwowp->readBinData($v_yzowg,  4); // obf
		$v_mxvso['dts']['raw']['bitrate']                =        $v_qwowp->readBinData($v_yzowg,  5); // obf
		$v_mxvso['dts']['flags']['embedded_downmix']     = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['flags']['dynamicrange']         = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['flags']['timestamp']            = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['flags']['auxdata']              = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['flags']['hdcd']                 = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['raw']['extension_audio']        =        $v_qwowp->readBinData($v_yzowg,  3); // obf
		$v_mxvso['dts']['flags']['extended_coding']      = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['flags']['audio_sync_insertion'] = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['raw']['lfe_effects']            =        $v_qwowp->readBinData($v_yzowg,  2); // obf
		$v_mxvso['dts']['flags']['predictor_history']    = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		if ($v_mxvso['dts']['flags']['crc_present']) { // obf
			$v_mxvso['dts']['raw']['crc16']              =        $v_qwowp->readBinData($v_yzowg, 16); // obf
		} // obf
		$v_mxvso['dts']['flags']['mri_perfect_reconst']  = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['raw']['encoder_soft_version']   =        $v_qwowp->readBinData($v_yzowg,  4); // obf
		$v_mxvso['dts']['raw']['copy_history']           =        $v_qwowp->readBinData($v_yzowg,  2); // obf
		$v_mxvso['dts']['raw']['bits_per_sample']        =        $v_qwowp->readBinData($v_yzowg,  2); // obf
		$v_mxvso['dts']['flags']['surround_es']          = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['flags']['front_sum_diff']       = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['flags']['surround_sum_diff']    = (bool) $v_qwowp->readBinData($v_yzowg,  1); // obf
		$v_mxvso['dts']['raw']['dialog_normalization']   =        $v_qwowp->readBinData($v_yzowg,  4); // obf


		$v_mxvso['dts']['bitrate']              = self::bitrateLookup($v_mxvso['dts']['raw']['bitrate']); // obf
		$v_mxvso['dts']['bits_per_sample']      = self::bitPerSampleLookup($v_mxvso['dts']['raw']['bits_per_sample']); // obf
		$v_mxvso['dts']['sample_rate']          = self::sampleRateLookup($v_mxvso['dts']['raw']['sample_frequency']); // obf
		$v_mxvso['dts']['dialog_normalization'] = self::dialogNormalization($v_mxvso['dts']['raw']['dialog_normalization'], $v_mxvso['dts']['raw']['encoder_soft_version']); // obf
		$v_mxvso['dts']['flags']['lossless']    = (($v_mxvso['dts']['raw']['bitrate'] == 31) ? true  : false); // obf
		$v_mxvso['dts']['bitrate_mode']         = (($v_mxvso['dts']['raw']['bitrate'] == 30) ? 'vbr' : 'cbr'); // obf
		$v_mxvso['dts']['channels']             = self::numChannelsLookup($v_mxvso['dts']['raw']['channel_arrangement']); // obf
		$v_mxvso['dts']['channel_arrangement']  = self::channelArrangementLookup($v_mxvso['dts']['raw']['channel_arrangement']); // obf

		$v_mxvso['audio']['dataformat']          = 'dts'; // obf
		$v_mxvso['audio']['lossless']            = $v_mxvso['dts']['flags']['lossless']; // obf
		$v_mxvso['audio']['bitrate_mode']        = $v_mxvso['dts']['bitrate_mode']; // obf
		$v_mxvso['audio']['bits_per_sample']     = $v_mxvso['dts']['bits_per_sample']; // obf
		$v_mxvso['audio']['sample_rate']         = $v_mxvso['dts']['sample_rate']; // obf
		$v_mxvso['audio']['channels']            = $v_mxvso['dts']['channels']; // obf
		$v_mxvso['audio']['bitrate']             = $v_mxvso['dts']['bitrate']; // obf
		if (isset($v_mxvso['avdataend']) && !empty($v_mxvso['dts']['bitrate']) && is_numeric($v_mxvso['dts']['bitrate'])) { // obf
			$v_mxvso['playtime_seconds']         = ($v_mxvso['avdataend'] - $v_mxvso['avdataoffset']) / ($v_mxvso['dts']['bitrate'] / 8); // obf
			if (($v_zzkqw == 2) || ($v_zzkqw == 3)) { // obf
				// 14-bit data packed into 16-bit words, so the playtime is wrong because only (14/16) of the bytes in the data portion of the file are used at the specified bitrate // obf
				$v_mxvso['playtime_seconds'] *= (14 / 16); // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_qdgwx // obf
	 * @param int $v_frtxu // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	private function readBinData($v_qdgwx, $v_frtxu) { // obf
		$v_cmmzf = substr($v_qdgwx, $v_qwowp->readBinDataOffset, $v_frtxu); // obf
		$v_qwowp->readBinDataOffset += $v_frtxu; // obf

		return bindec($v_cmmzf); // obf
	} // obf

	/** // obf
	 * @param int $v_nzzee // obf
	 * // obf
	 * @return int|string|false // obf
	 */ // obf
	public static function bitrateLookup($v_nzzee) { // obf
		static $v_orrjz = array( // obf
			0  => 32000, // obf
			1  => 56000, // obf
			2  => 64000, // obf
			3  => 96000, // obf
			4  => 112000, // obf
			5  => 128000, // obf
			6  => 192000, // obf
			7  => 224000, // obf
			8  => 256000, // obf
			9  => 320000, // obf
			10 => 384000, // obf
			11 => 448000, // obf
			12 => 512000, // obf
			13 => 576000, // obf
			14 => 640000, // obf
			15 => 768000, // obf
			16 => 960000, // obf
			17 => 1024000, // obf
			18 => 1152000, // obf
			19 => 1280000, // obf
			20 => 1344000, // obf
			21 => 1408000, // obf
			22 => 1411200, // obf
			23 => 1472000, // obf
			24 => 1536000, // obf
			25 => 1920000, // obf
			26 => 2048000, // obf
			27 => 3072000, // obf
			28 => 3840000, // obf
			29 => 'open', // obf
			30 => 'variable', // obf
			31 => 'lossless', // obf
		); // obf
		return (isset($v_orrjz[$v_nzzee]) ? $v_orrjz[$v_nzzee] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_nzzee // obf
	 * // obf
	 * @return int|string|false // obf
	 */ // obf
	public static function sampleRateLookup($v_nzzee) { // obf
		static $v_orrjz = array( // obf
			0  => 'invalid', // obf
			1  => 8000, // obf
			2  => 16000, // obf
			3  => 32000, // obf
			4  => 'invalid', // obf
			5  => 'invalid', // obf
			6  => 11025, // obf
			7  => 22050, // obf
			8  => 44100, // obf
			9  => 'invalid', // obf
			10 => 'invalid', // obf
			11 => 12000, // obf
			12 => 24000, // obf
			13 => 48000, // obf
			14 => 'invalid', // obf
			15 => 'invalid', // obf
		); // obf
		return (isset($v_orrjz[$v_nzzee]) ? $v_orrjz[$v_nzzee] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_nzzee // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function bitPerSampleLookup($v_nzzee) { // obf
		static $v_orrjz = array( // obf
			0  => 16, // obf
			1  => 20, // obf
			2  => 24, // obf
			3  => 24, // obf
		); // obf
		return (isset($v_orrjz[$v_nzzee]) ? $v_orrjz[$v_nzzee] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_nzzee // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function numChannelsLookup($v_nzzee) { // obf
		switch ($v_nzzee) { // obf
			case 0: // obf
				return 1; // obf
			case 1: // obf
			case 2: // obf
			case 3: // obf
			case 4: // obf
				return 2; // obf
			case 5: // obf
			case 6: // obf
				return 3; // obf
			case 7: // obf
			case 8: // obf
				return 4; // obf
			case 9: // obf
				return 5; // obf
			case 10: // obf
			case 11: // obf
			case 12: // obf
				return 6; // obf
			case 13: // obf
				return 7; // obf
			case 14: // obf
			case 15: // obf
				return 8; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * @param int $v_nzzee // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function channelArrangementLookup($v_nzzee) { // obf
		static $v_orrjz = array( // obf
			0  => 'A', // obf
			1  => 'A + B (dual mono)', // obf
			2  => 'L + R (stereo)', // obf
			3  => '(L+R) + (L-R) (sum-difference)', // obf
			4  => 'LT + RT (left and right total)', // obf
			5  => 'C + L + R', // obf
			6  => 'L + R + S', // obf
			7  => 'C + L + R + S', // obf
			8  => 'L + R + SL + SR', // obf
			9  => 'C + L + R + SL + SR', // obf
			10 => 'CL + CR + L + R + SL + SR', // obf
			11 => 'C + L + R+ LR + RR + OV', // obf
			12 => 'CF + CR + LF + RF + LR + RR', // obf
			13 => 'CL + C + CR + L + R + SL + SR', // obf
			14 => 'CL + CR + L + R + SL1 + SL2 + SR1 + SR2', // obf
			15 => 'CL + C+ CR + L + R + SL + S + SR', // obf
		); // obf
		return (isset($v_orrjz[$v_nzzee]) ? $v_orrjz[$v_nzzee] : 'user-defined'); // obf
	} // obf

	/** // obf
	 * @param int $v_nzzee // obf
	 * @param int $v_ksqst // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function dialogNormalization($v_nzzee, $v_ksqst) { // obf
		switch ($v_ksqst) { // obf
			case 7: // obf
				return 0 - $v_nzzee; // obf
			case 6: // obf
				return 0 - 16 - $v_nzzee; // obf
		} // obf
		return false; // obf
	} // obf

} // obf