

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio.ac3.php                                        // // obf
// module for analyzing AC-3 (aka Dolby Digital) audio files   // // obf
// dependencies: NONE                                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf

class getid3_ac3 extends getid3_handler // obf
{ // obf
	/** // obf
	 * @var array // obf
	 */ // obf
	private $v_qoqqa = array(); // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	private $v_blxxr = 0; // obf

	const syncword = 0x0B77; // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_knbol = &$v_gkhog->getid3->info; // obf

		///AH // obf
		$v_knbol['ac3']['raw']['bsi'] = array(); // obf
		$v_iangv              = &$v_knbol['ac3']; // obf
		$v_ppiwu          = &$v_iangv['raw']; // obf
		$v_jbwur      = &$v_ppiwu['bsi']; // obf


		// http://www.atsc.org/standards/a_52a.pdf // obf

		$v_knbol['fileformat'] = 'ac3'; // obf

		// An AC-3 serial coded audio bit stream is made up of a sequence of synchronization frames // obf
		// Each synchronization frame contains 6 coded audio blocks (AB), each of which represent 256 // obf
		// new audio samples per channel. A synchronization information (SI) header at the beginning // obf
		// of each frame contains information needed to acquire and maintain synchronization. A // obf
		// bit stream information (BSI) header follows SI, and contains parameters describing the coded // obf
		// audio service. The coded audio blocks may be followed by an auxiliary data (Aux) field. At the // obf
		// end of each frame is an error check field that includes a CRC word for error detection. An // obf
		// additional CRC word is located in the SI header, the use of which, by a decoder, is optional. // obf
		// // obf
		// syncinfo() | bsi() | AB0 | AB1 | AB2 | AB3 | AB4 | AB5 | Aux | CRC // obf

		// syncinfo() { // obf
		// 	 syncword    16 // obf
		// 	 crc1        16 // obf
		// 	 fscod        2 // obf
		// 	 frmsizecod   6 // obf
		// } /* end of syncinfo */ // obf

		$v_gkhog->fseek($v_knbol['avdataoffset']); // obf
		$v_tdpaw = $v_gkhog->fread(100); // should be enough to cover all data, there are some variable-length fields...? // obf
		$v_gkhog->AC3header['syncinfo']  =     getid3_lib::BigEndian2Int(substr($v_tdpaw, 0, 2)); // obf
		$v_gkhog->AC3header['bsi']       =     getid3_lib::BigEndian2Bin(substr($v_tdpaw, 2)); // obf
		$v_jbwur['bsid'] = (getid3_lib::LittleEndian2Int(substr($v_tdpaw, 5, 1)) & 0xF8) >> 3; // AC3 and E-AC3 put the "bsid" version identifier in the same place, but unfortnately the 4 bytes between the syncword and the version identifier are interpreted differently, so grab it here so the following code structure can make sense // obf
		unset($v_tdpaw); // obf

		if ($v_gkhog->AC3header['syncinfo'] !== self::syncword) { // obf
			if (!$v_gkhog->isDependencyFor('matroska')) { // obf
				unset($v_knbol['fileformat'], $v_knbol['ac3']); // obf
				return $v_gkhog->error('Expecting "'.dechex(self::syncword).'" at offset '.$v_knbol['avdataoffset'].', found "'.dechex($v_gkhog->AC3header['syncinfo']).'"'); // obf
			} // obf
		} // obf

		$v_knbol['audio']['dataformat']   = 'ac3'; // obf
		$v_knbol['audio']['bitrate_mode'] = 'cbr'; // obf
		$v_knbol['audio']['lossless']     = false; // obf

		if ($v_jbwur['bsid'] <= 8) { // obf

			$v_jbwur['crc1']       = getid3_lib::Bin2Dec($v_gkhog->readHeaderBSI(16)); // obf
			$v_jbwur['fscod']      =                     $v_gkhog->readHeaderBSI(2);   // 5.4.1.3 // obf
			$v_jbwur['frmsizecod'] =                     $v_gkhog->readHeaderBSI(6);   // 5.4.1.4 // obf
			if ($v_jbwur['frmsizecod'] > 37) { // binary: 100101 - see Table 5.18 Frame Size Code Table (1 word = 16 bits) // obf
				$v_gkhog->warning('Unexpected ac3.bsi.frmsizecod value: '.$v_jbwur['frmsizecod'].', bitrate not set correctly'); // obf
			} // obf

			$v_jbwur['bsid']  = $v_gkhog->readHeaderBSI(5); // we already know this from pre-parsing the version identifier, but re-read it to let the bitstream flow as intended // obf
			$v_jbwur['bsmod'] = $v_gkhog->readHeaderBSI(3); // obf
			$v_jbwur['acmod'] = $v_gkhog->readHeaderBSI(3); // obf

			if ($v_jbwur['acmod'] & 0x01) { // obf
				// If the lsb of acmod is a 1, center channel is in use and cmixlev follows in the bit stream. // obf
				$v_jbwur['cmixlev'] = $v_gkhog->readHeaderBSI(2); // obf
				$v_iangv['center_mix_level'] = self::centerMixLevelLookup($v_jbwur['cmixlev']); // obf
			} // obf

			if ($v_jbwur['acmod'] & 0x04) { // obf
				// If the msb of acmod is a 1, surround channels are in use and surmixlev follows in the bit stream. // obf
				$v_jbwur['surmixlev'] = $v_gkhog->readHeaderBSI(2); // obf
				$v_iangv['surround_mix_level'] = self::surroundMixLevelLookup($v_jbwur['surmixlev']); // obf
			} // obf

			if ($v_jbwur['acmod'] == 0x02) { // obf
				// When operating in the two channel mode, this 2-bit code indicates whether or not the program has been encoded in Dolby Surround. // obf
				$v_jbwur['dsurmod'] = $v_gkhog->readHeaderBSI(2); // obf
				$v_iangv['dolby_surround_mode'] = self::dolbySurroundModeLookup($v_jbwur['dsurmod']); // obf
			} // obf

			$v_jbwur['flags']['lfeon'] = (bool) $v_gkhog->readHeaderBSI(1); // obf

			// This indicates how far the average dialogue level is below digital 100 percent. Valid values are 1-31. // obf
			// The value of 0 is reserved. The values of 1 to 31 are interpreted as -1 dB to -31 dB with respect to digital 100 percent. // obf
			$v_jbwur['dialnorm'] = $v_gkhog->readHeaderBSI(5);                 // 5.4.2.8 dialnorm: Dialogue Normalization, 5 Bits // obf

			$v_jbwur['flags']['compr'] = (bool) $v_gkhog->readHeaderBSI(1);       // 5.4.2.9 compre: Compression Gain Word Exists, 1 Bit // obf
			if ($v_jbwur['flags']['compr']) { // obf
				$v_jbwur['compr'] = $v_gkhog->readHeaderBSI(8);                // 5.4.2.10 compr: Compression Gain Word, 8 Bits // obf
				$v_iangv['heavy_compression'] = self::heavyCompression($v_jbwur['compr']); // obf
			} // obf

			$v_jbwur['flags']['langcod'] = (bool) $v_gkhog->readHeaderBSI(1);     // 5.4.2.11 langcode: Language Code Exists, 1 Bit // obf
			if ($v_jbwur['flags']['langcod']) { // obf
				$v_jbwur['langcod'] = $v_gkhog->readHeaderBSI(8);              // 5.4.2.12 langcod: Language Code, 8 Bits // obf
			} // obf

			$v_jbwur['flags']['audprodinfo'] = (bool) $v_gkhog->readHeaderBSI(1);  // 5.4.2.13 audprodie: Audio Production Information Exists, 1 Bit // obf
			if ($v_jbwur['flags']['audprodinfo']) { // obf
				$v_jbwur['mixlevel'] = $v_gkhog->readHeaderBSI(5);             // 5.4.2.14 mixlevel: Mixing Level, 5 Bits // obf
				$v_jbwur['roomtyp']  = $v_gkhog->readHeaderBSI(2);             // 5.4.2.15 roomtyp: Room Type, 2 Bits // obf

				$v_iangv['mixing_level'] = (80 + $v_jbwur['mixlevel']).'dB'; // obf
				$v_iangv['room_type']    = self::roomTypeLookup($v_jbwur['roomtyp']); // obf
			} // obf


			$v_jbwur['dialnorm2'] = $v_gkhog->readHeaderBSI(5);                // 5.4.2.16 dialnorm2: Dialogue Normalization, ch2, 5 Bits // obf
			$v_iangv['dialogue_normalization2'] = '-'.$v_jbwur['dialnorm2'].'dB';  // This indicates how far the average dialogue level is below digital 100 percent. Valid values are 1-31. The value of 0 is reserved. The values of 1 to 31 are interpreted as -1 dB to -31 dB with respect to digital 100 percent. // obf

			$v_jbwur['flags']['compr2'] = (bool) $v_gkhog->readHeaderBSI(1);       // 5.4.2.17 compr2e: Compression Gain Word Exists, ch2, 1 Bit // obf
			if ($v_jbwur['flags']['compr2']) { // obf
				$v_jbwur['compr2'] = $v_gkhog->readHeaderBSI(8);               // 5.4.2.18 compr2: Compression Gain Word, ch2, 8 Bits // obf
				$v_iangv['heavy_compression2'] = self::heavyCompression($v_jbwur['compr2']); // obf
			} // obf

			$v_jbwur['flags']['langcod2'] = (bool) $v_gkhog->readHeaderBSI(1);    // 5.4.2.19 langcod2e: Language Code Exists, ch2, 1 Bit // obf
			if ($v_jbwur['flags']['langcod2']) { // obf
				$v_jbwur['langcod2'] = $v_gkhog->readHeaderBSI(8);             // 5.4.2.20 langcod2: Language Code, ch2, 8 Bits // obf
			} // obf

			$v_jbwur['flags']['audprodinfo2'] = (bool) $v_gkhog->readHeaderBSI(1); // 5.4.2.21 audprodi2e: Audio Production Information Exists, ch2, 1 Bit // obf
			if ($v_jbwur['flags']['audprodinfo2']) { // obf
				$v_jbwur['mixlevel2'] = $v_gkhog->readHeaderBSI(5);            // 5.4.2.22 mixlevel2: Mixing Level, ch2, 5 Bits // obf
				$v_jbwur['roomtyp2']  = $v_gkhog->readHeaderBSI(2);            // 5.4.2.23 roomtyp2: Room Type, ch2, 2 Bits // obf

				$v_iangv['mixing_level2'] = (80 + $v_jbwur['mixlevel2']).'dB'; // obf
				$v_iangv['room_type2']    = self::roomTypeLookup($v_jbwur['roomtyp2']); // obf
			} // obf

			$v_jbwur['copyright'] = (bool) $v_gkhog->readHeaderBSI(1);         // 5.4.2.24 copyrightb: Copyright Bit, 1 Bit // obf

			$v_jbwur['original']  = (bool) $v_gkhog->readHeaderBSI(1);         // 5.4.2.25 origbs: Original Bit Stream, 1 Bit // obf

			$v_jbwur['flags']['timecod1'] = $v_gkhog->readHeaderBSI(2);            // 5.4.2.26 timecod1e, timcode2e: Time Code (first and second) Halves Exist, 2 Bits // obf
			if ($v_jbwur['flags']['timecod1'] & 0x01) { // obf
				$v_jbwur['timecod1'] = $v_gkhog->readHeaderBSI(14);            // 5.4.2.27 timecod1: Time code first half, 14 bits // obf
				$v_iangv['timecode1'] = 0; // obf
				$v_iangv['timecode1'] += (($v_jbwur['timecod1'] & 0x3E00) >>  9) * 3600;  // The first 5 bits of this 14-bit field represent the time in hours, with valid values of 0�23 // obf
				$v_iangv['timecode1'] += (($v_jbwur['timecod1'] & 0x01F8) >>  3) *   60;  // The next 6 bits represent the time in minutes, with valid values of 0�59 // obf
				$v_iangv['timecode1'] += (($v_jbwur['timecod1'] & 0x0003) >>  0) *    8;  // The final 3 bits represents the time in 8 second increments, with valid values of 0�7 (representing 0, 8, 16, ... 56 seconds) // obf
			} // obf
			if ($v_jbwur['flags']['timecod1'] & 0x02) { // obf
				$v_jbwur['timecod2'] = $v_gkhog->readHeaderBSI(14);            // 5.4.2.28 timecod2: Time code second half, 14 bits // obf
				$v_iangv['timecode2'] = 0; // obf
				$v_iangv['timecode2'] += (($v_jbwur['timecod2'] & 0x3800) >> 11) *   1;              // The first 3 bits of this 14-bit field represent the time in seconds, with valid values from 0�7 (representing 0-7 seconds) // obf
				$v_iangv['timecode2'] += (($v_jbwur['timecod2'] & 0x07C0) >>  6) *  (1 / 30);        // The next 5 bits represents the time in frames, with valid values from 0�29 (one frame = 1/30th of a second) // obf
				$v_iangv['timecode2'] += (($v_jbwur['timecod2'] & 0x003F) >>  0) * ((1 / 30) / 60);  // The final 6 bits represents fractions of 1/64 of a frame, with valid values from 0�63 // obf
			} // obf

			$v_jbwur['flags']['addbsi'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
			if ($v_jbwur['flags']['addbsi']) { // obf
				$v_jbwur['addbsi_length'] = $v_gkhog->readHeaderBSI(6) + 1; // This 6-bit code, which exists only if addbside is a 1, indicates the length in bytes of additional bit stream information. The valid range of addbsil is 0�63, indicating 1�64 additional bytes, respectively. // obf

				$v_gkhog->AC3header['bsi'] .= getid3_lib::BigEndian2Bin($v_gkhog->fread($v_jbwur['addbsi_length'])); // obf

				$v_jbwur['addbsi_data'] = substr($v_gkhog->AC3header['bsi'], $v_gkhog->BSIoffset, $v_jbwur['addbsi_length'] * 8); // obf
				$v_gkhog->BSIoffset += $v_jbwur['addbsi_length'] * 8; // obf
			} // obf


		} elseif ($v_jbwur['bsid'] <= 16) { // E-AC3 // obf


			$v_gkhog->error('E-AC3 parsing is incomplete and experimental in this version of getID3 ('.$v_gkhog->getid3->version().'). Notably the bitrate calculations are wrong -- value might (or not) be correct, but it is not calculated correctly. Email info@getid3.org if you know how to calculate EAC3 bitrate correctly.'); // obf
			$v_knbol['audio']['dataformat'] = 'eac3'; // obf

			$v_jbwur['strmtyp']          =        $v_gkhog->readHeaderBSI(2); // obf
			$v_jbwur['substreamid']      =        $v_gkhog->readHeaderBSI(3); // obf
			$v_jbwur['frmsiz']           =        $v_gkhog->readHeaderBSI(11); // obf
			$v_jbwur['fscod']            =        $v_gkhog->readHeaderBSI(2); // obf
			if ($v_jbwur['fscod'] == 3) { // obf
				$v_jbwur['fscod2']       =        $v_gkhog->readHeaderBSI(2); // obf
				$v_jbwur['numblkscod'] = 3; // six blocks per syncframe // obf
			} else { // obf
				$v_jbwur['numblkscod']   =        $v_gkhog->readHeaderBSI(2); // obf
			} // obf
			$v_iangv['bsi']['blocks_per_sync_frame'] = self::blocksPerSyncFrame($v_jbwur['numblkscod']); // obf
			$v_jbwur['acmod']            =        $v_gkhog->readHeaderBSI(3); // obf
			$v_jbwur['flags']['lfeon']   = (bool) $v_gkhog->readHeaderBSI(1); // obf
			$v_jbwur['bsid']             =        $v_gkhog->readHeaderBSI(5); // we already know this from pre-parsing the version identifier, but re-read it to let the bitstream flow as intended // obf
			$v_jbwur['dialnorm']         =        $v_gkhog->readHeaderBSI(5); // obf
			$v_jbwur['flags']['compr']       = (bool) $v_gkhog->readHeaderBSI(1); // obf
			if ($v_jbwur['flags']['compr']) { // obf
				$v_jbwur['compr']        =        $v_gkhog->readHeaderBSI(8); // obf
			} // obf
			if ($v_jbwur['acmod'] == 0) { // if 1+1 mode (dual mono, so some items need a second value) // obf
				$v_jbwur['dialnorm2']    =        $v_gkhog->readHeaderBSI(5); // obf
				$v_jbwur['flags']['compr2']  = (bool) $v_gkhog->readHeaderBSI(1); // obf
				if ($v_jbwur['flags']['compr2']) { // obf
					$v_jbwur['compr2']   =        $v_gkhog->readHeaderBSI(8); // obf
				} // obf
			} // obf
			if ($v_jbwur['strmtyp'] == 1) { // if dependent stream // obf
				$v_jbwur['flags']['chanmap'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
				if ($v_jbwur['flags']['chanmap']) { // obf
					$v_jbwur['chanmap']  =        $v_gkhog->readHeaderBSI(8); // obf
				} // obf
			} // obf
			$v_jbwur['flags']['mixmdat']     = (bool) $v_gkhog->readHeaderBSI(1); // obf
			if ($v_jbwur['flags']['mixmdat']) { // Mixing metadata // obf
				if ($v_jbwur['acmod'] > 2) { // if more than 2 channels // obf
					$v_jbwur['dmixmod']  =        $v_gkhog->readHeaderBSI(2); // obf
				} // obf
				if (($v_jbwur['acmod'] & 0x01) && ($v_jbwur['acmod'] > 2)) { // if three front channels exist // obf
					$v_jbwur['ltrtcmixlev'] =        $v_gkhog->readHeaderBSI(3); // obf
					$v_jbwur['lorocmixlev'] =        $v_gkhog->readHeaderBSI(3); // obf
				} // obf
				if ($v_jbwur['acmod'] & 0x04) { // if a surround channel exists // obf
					$v_jbwur['ltrtsurmixlev'] =        $v_gkhog->readHeaderBSI(3); // obf
					$v_jbwur['lorosurmixlev'] =        $v_gkhog->readHeaderBSI(3); // obf
				} // obf
				if ($v_jbwur['flags']['lfeon']) { // if the LFE channel exists // obf
					$v_jbwur['flags']['lfemixlevcod'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
					if ($v_jbwur['flags']['lfemixlevcod']) { // obf
						$v_jbwur['lfemixlevcod']  =        $v_gkhog->readHeaderBSI(5); // obf
					} // obf
				} // obf
				if ($v_jbwur['strmtyp'] == 0) { // if independent stream // obf
					$v_jbwur['flags']['pgmscl'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
					if ($v_jbwur['flags']['pgmscl']) { // obf
						$v_jbwur['pgmscl']  =        $v_gkhog->readHeaderBSI(6); // obf
					} // obf
					if ($v_jbwur['acmod'] == 0) { // if 1+1 mode (dual mono, so some items need a second value) // obf
						$v_jbwur['flags']['pgmscl2'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
						if ($v_jbwur['flags']['pgmscl2']) { // obf
							$v_jbwur['pgmscl2']  =        $v_gkhog->readHeaderBSI(6); // obf
						} // obf
					} // obf
					$v_jbwur['flags']['extpgmscl'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
					if ($v_jbwur['flags']['extpgmscl']) { // obf
						$v_jbwur['extpgmscl']  =        $v_gkhog->readHeaderBSI(6); // obf
					} // obf
					$v_jbwur['mixdef']  =        $v_gkhog->readHeaderBSI(2); // obf
					if ($v_jbwur['mixdef'] == 1) { // mixing option 2 // obf
						$v_jbwur['premixcmpsel']  = (bool) $v_gkhog->readHeaderBSI(1); // obf
						$v_jbwur['drcsrc']        = (bool) $v_gkhog->readHeaderBSI(1); // obf
						$v_jbwur['premixcmpscl']  =        $v_gkhog->readHeaderBSI(3); // obf
					} elseif ($v_jbwur['mixdef'] == 2) { // mixing option 3 // obf
						$v_jbwur['mixdata']       =        $v_gkhog->readHeaderBSI(12); // obf
					} elseif ($v_jbwur['mixdef'] == 3) { // mixing option 4 // obf
						$v_gndsm = 0; // obf
						$v_jbwur['mixdeflen']     =        $v_gkhog->readHeaderBSI(5); $v_gndsm += 5; // obf
						$v_jbwur['flags']['mixdata2'] = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
						if ($v_jbwur['flags']['mixdata2']) { // obf
							$v_jbwur['premixcmpsel']  = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							$v_jbwur['drcsrc']        = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							$v_jbwur['premixcmpscl']  =        $v_gkhog->readHeaderBSI(3); $v_gndsm += 3; // obf
							$v_jbwur['flags']['extpgmlscl']   = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['extpgmlscl']) { // obf
								$v_jbwur['extpgmlscl']    =        $v_gkhog->readHeaderBSI(4); $v_gndsm += 4; // obf
							} // obf
							$v_jbwur['flags']['extpgmcscl']   = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['extpgmcscl']) { // obf
								$v_jbwur['extpgmcscl']    =        $v_gkhog->readHeaderBSI(4); $v_gndsm += 4; // obf
							} // obf
							$v_jbwur['flags']['extpgmrscl']   = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['extpgmrscl']) { // obf
								$v_jbwur['extpgmrscl']    =        $v_gkhog->readHeaderBSI(4); // obf
							} // obf
							$v_jbwur['flags']['extpgmlsscl']  = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['extpgmlsscl']) { // obf
								$v_jbwur['extpgmlsscl']   =        $v_gkhog->readHeaderBSI(4); $v_gndsm += 4; // obf
							} // obf
							$v_jbwur['flags']['extpgmrsscl']  = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['extpgmrsscl']) { // obf
								$v_jbwur['extpgmrsscl']   =        $v_gkhog->readHeaderBSI(4); $v_gndsm += 4; // obf
							} // obf
							$v_jbwur['flags']['extpgmlfescl'] = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['extpgmlfescl']) { // obf
								$v_jbwur['extpgmlfescl']  =        $v_gkhog->readHeaderBSI(4); $v_gndsm += 4; // obf
							} // obf
							$v_jbwur['flags']['dmixscl']      = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['dmixscl']) { // obf
								$v_jbwur['dmixscl']       =        $v_gkhog->readHeaderBSI(4); $v_gndsm += 4; // obf
							} // obf
							$v_jbwur['flags']['addch']        = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['addch']) { // obf
								$v_jbwur['flags']['extpgmaux1scl']   = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
								if ($v_jbwur['flags']['extpgmaux1scl']) { // obf
									$v_jbwur['extpgmaux1scl']    =        $v_gkhog->readHeaderBSI(4); $v_gndsm += 4; // obf
								} // obf
								$v_jbwur['flags']['extpgmaux2scl']   = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
								if ($v_jbwur['flags']['extpgmaux2scl']) { // obf
									$v_jbwur['extpgmaux2scl']    =        $v_gkhog->readHeaderBSI(4); $v_gndsm += 4; // obf
								} // obf
							} // obf
						} // obf
						$v_jbwur['flags']['mixdata3'] = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
						if ($v_jbwur['flags']['mixdata3']) { // obf
							$v_jbwur['spchdat']   =        $v_gkhog->readHeaderBSI(5); $v_gndsm += 5; // obf
							$v_jbwur['flags']['addspchdat'] = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
							if ($v_jbwur['flags']['addspchdat']) { // obf
								$v_jbwur['spchdat1']   =         $v_gkhog->readHeaderBSI(5); $v_gndsm += 5; // obf
								$v_jbwur['spchan1att'] =         $v_gkhog->readHeaderBSI(2); $v_gndsm += 2; // obf
								$v_jbwur['flags']['addspchdat1'] = (bool) $v_gkhog->readHeaderBSI(1); $v_gndsm += 1; // obf
								if ($v_jbwur['flags']['addspchdat1']) { // obf
									$v_jbwur['spchdat2']   =         $v_gkhog->readHeaderBSI(5); $v_gndsm += 5; // obf
									$v_jbwur['spchan2att'] =         $v_gkhog->readHeaderBSI(3); $v_gndsm += 3; // obf
								} // obf
							} // obf
						} // obf
						$v_blyid = (8 * ($v_jbwur['mixdeflen'] + 2)) - $v_gndsm; // obf
						$v_xvwxs = (($v_blyid % 8) ? 8 - ($v_blyid % 8) : 0); // obf
						$v_jbwur['mixdata']     =        $v_gkhog->readHeaderBSI($v_blyid); // obf
						$v_jbwur['mixdatafill'] =        $v_gkhog->readHeaderBSI($v_xvwxs); // obf
						unset($v_gndsm, $v_blyid, $v_xvwxs); // obf
					} // obf
					if ($v_jbwur['acmod'] < 2) { // if mono or dual mono source // obf
						$v_jbwur['flags']['paninfo'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
						if ($v_jbwur['flags']['paninfo']) { // obf
							$v_jbwur['panmean']   =        $v_gkhog->readHeaderBSI(8); // obf
							$v_jbwur['paninfo']   =        $v_gkhog->readHeaderBSI(6); // obf
						} // obf
						if ($v_jbwur['acmod'] == 0) { // if 1+1 mode (dual mono, so some items need a second value) // obf
							$v_jbwur['flags']['paninfo2'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
							if ($v_jbwur['flags']['paninfo2']) { // obf
								$v_jbwur['panmean2']   =        $v_gkhog->readHeaderBSI(8); // obf
								$v_jbwur['paninfo2']   =        $v_gkhog->readHeaderBSI(6); // obf
							} // obf
						} // obf
					} // obf
					$v_jbwur['flags']['frmmixcfginfo'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
					if ($v_jbwur['flags']['frmmixcfginfo']) { // mixing configuration information // obf
						if ($v_jbwur['numblkscod'] == 0) { // obf
							$v_jbwur['blkmixcfginfo'][0]  =        $v_gkhog->readHeaderBSI(5); // obf
						} else { // obf
							for ($v_pfvss = 0; $v_pfvss < $v_jbwur['numblkscod']; $v_pfvss++) { // obf
								$v_jbwur['flags']['blkmixcfginfo'.$v_pfvss] = (bool) $v_gkhog->readHeaderBSI(1); // obf
								if ($v_jbwur['flags']['blkmixcfginfo'.$v_pfvss]) { // mixing configuration information // obf
									$v_jbwur['blkmixcfginfo'][$v_pfvss]  =        $v_gkhog->readHeaderBSI(5); // obf
								} // obf
							} // obf
						} // obf
					} // obf
				} // obf
			} // obf
			$v_jbwur['flags']['infomdat']          = (bool) $v_gkhog->readHeaderBSI(1); // obf
			if ($v_jbwur['flags']['infomdat']) { // Informational metadata // obf
				$v_jbwur['bsmod']                  =        $v_gkhog->readHeaderBSI(3); // obf
				$v_jbwur['flags']['copyrightb']    = (bool) $v_gkhog->readHeaderBSI(1); // obf
				$v_jbwur['flags']['origbs']        = (bool) $v_gkhog->readHeaderBSI(1); // obf
				if ($v_jbwur['acmod'] == 2) { //  if in 2/0 mode // obf
					$v_jbwur['dsurmod']            =        $v_gkhog->readHeaderBSI(2); // obf
					$v_jbwur['dheadphonmod']       =        $v_gkhog->readHeaderBSI(2); // obf
				} // obf
				if ($v_jbwur['acmod'] >= 6) { //  if both surround channels exist // obf
					$v_jbwur['dsurexmod']          =        $v_gkhog->readHeaderBSI(2); // obf
				} // obf
				$v_jbwur['flags']['audprodi']      = (bool) $v_gkhog->readHeaderBSI(1); // obf
				if ($v_jbwur['flags']['audprodi']) { // obf
					$v_jbwur['mixlevel']           =        $v_gkhog->readHeaderBSI(5); // obf
					$v_jbwur['roomtyp']            =        $v_gkhog->readHeaderBSI(2); // obf
					$v_jbwur['flags']['adconvtyp'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
				} // obf
				if ($v_jbwur['acmod'] == 0) { //  if 1+1 mode (dual mono, so some items need a second value) // obf
					$v_jbwur['flags']['audprodi2']      = (bool) $v_gkhog->readHeaderBSI(1); // obf
					if ($v_jbwur['flags']['audprodi2']) { // obf
						$v_jbwur['mixlevel2']           =        $v_gkhog->readHeaderBSI(5); // obf
						$v_jbwur['roomtyp2']            =        $v_gkhog->readHeaderBSI(2); // obf
						$v_jbwur['flags']['adconvtyp2'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
					} // obf
				} // obf
				if ($v_jbwur['fscod'] < 3) { // if not half sample rate // obf
					$v_jbwur['flags']['sourcefscod'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
				} // obf
			} // obf
			if (($v_jbwur['strmtyp'] == 0) && ($v_jbwur['numblkscod'] != 3)) { //  if both surround channels exist // obf
				$v_jbwur['flags']['convsync'] = (bool) $v_gkhog->readHeaderBSI(1); // obf
			} // obf
			if ($v_jbwur['strmtyp'] == 2) { //  if bit stream converted from AC-3 // obf
				if ($v_jbwur['numblkscod'] != 3) { // 6 blocks per syncframe // obf
					$v_jbwur['flags']['blkid']  = 1; // obf
				} else { // obf
					$v_jbwur['flags']['blkid']  = (bool) $v_gkhog->readHeaderBSI(1); // obf
				} // obf
				if ($v_jbwur['flags']['blkid']) { // obf
					$v_jbwur['frmsizecod']  =        $v_gkhog->readHeaderBSI(6); // obf
				} // obf
			} // obf
			$v_jbwur['flags']['addbsi']  = (bool) $v_gkhog->readHeaderBSI(1); // obf
			if ($v_jbwur['flags']['addbsi']) { // obf
				$v_jbwur['addbsil']  =        $v_gkhog->readHeaderBSI(6); // obf
				$v_jbwur['addbsi']   =        $v_gkhog->readHeaderBSI(($v_jbwur['addbsil'] + 1) * 8); // obf
			} // obf

		} else { // obf

			$v_gkhog->error('Bit stream identification is version '.$v_jbwur['bsid'].', but getID3() only understands up to version 16. Please submit a support ticket with a sample file.'); // obf
			unset($v_knbol['ac3']); // obf
			return false; // obf

		} // obf

		if (isset($v_jbwur['fscod2'])) { // obf
			$v_iangv['sample_rate'] = self::sampleRateCodeLookup2($v_jbwur['fscod2']); // obf
		} else { // obf
			$v_iangv['sample_rate'] = self::sampleRateCodeLookup($v_jbwur['fscod']); // obf
		} // obf
		if ($v_jbwur['fscod'] <= 3) { // obf
			$v_knbol['audio']['sample_rate'] = $v_iangv['sample_rate']; // obf
		} else { // obf
			$v_gkhog->warning('Unexpected ac3.bsi.fscod value: '.$v_jbwur['fscod']); // obf
		} // obf
		if (isset($v_jbwur['frmsizecod'])) { // obf
			$v_iangv['frame_length'] = self::frameSizeLookup($v_jbwur['frmsizecod'], $v_jbwur['fscod']); // obf
			$v_iangv['bitrate']      = self::bitrateLookup($v_jbwur['frmsizecod']); // obf
		} elseif (!empty($v_jbwur['frmsiz'])) { // obf
			// this isn't right, but it's (usually) close, roughly 5% less than it should be. // obf
			// but WHERE is the actual bitrate value stored in EAC3?? email info@getid3.org if you know! // obf
			$v_iangv['bitrate']      = ($v_jbwur['frmsiz'] + 1) * 16 * 30; // The frmsiz field shall contain a value one less than the overall size of the coded syncframe in 16-bit words. That is, this field may assume a value ranging from 0 to 2047, and these values correspond to syncframe sizes ranging from 1 to 2048. // obf
			// kludge-fix to make it approximately the expected value, still not "right": // obf
			$v_iangv['bitrate'] = round(($v_iangv['bitrate'] * 1.05) / 16000) * 16000; // obf
		} // obf
		$v_knbol['audio']['bitrate'] = $v_iangv['bitrate']; // obf

		if (isset($v_jbwur['bsmod']) && isset($v_jbwur['acmod'])) { // obf
			$v_iangv['service_type'] = self::serviceTypeLookup($v_jbwur['bsmod'], $v_jbwur['acmod']); // obf
		} // obf
		$v_rxcfx = self::audioCodingModeLookup($v_jbwur['acmod']); // obf
		foreach($v_rxcfx as $v_zecad => $v_nivwa) { // obf
			$v_iangv[$v_zecad] = $v_nivwa; // obf
		} // obf
		switch ($v_jbwur['acmod']) { // obf
			case 0: // obf
			case 1: // obf
				$v_knbol['audio']['channelmode'] = 'mono'; // obf
				break; // obf
			case 3: // obf
			case 4: // obf
				$v_knbol['audio']['channelmode'] = 'stereo'; // obf
				break; // obf
			default: // obf
				$v_knbol['audio']['channelmode'] = 'surround'; // obf
				break; // obf
		} // obf
		$v_knbol['audio']['channels'] = $v_iangv['num_channels']; // obf

		$v_iangv['lfe_enabled'] = $v_jbwur['flags']['lfeon']; // obf
		if ($v_jbwur['flags']['lfeon']) { // obf
			$v_knbol['audio']['channels'] .= '.1'; // obf
		} // obf

		$v_iangv['channels_enabled'] = self::channelsEnabledLookup($v_jbwur['acmod'], $v_jbwur['flags']['lfeon']); // obf
		$v_iangv['dialogue_normalization'] = '-'.$v_jbwur['dialnorm'].'dB'; // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_xgklh // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	private function readHeaderBSI($v_xgklh) { // obf
		$v_zudkp = substr($v_gkhog->AC3header['bsi'], $v_gkhog->BSIoffset, $v_xgklh); // obf
		$v_gkhog->BSIoffset += $v_xgklh; // obf

		return bindec($v_zudkp); // obf
	} // obf

	/** // obf
	 * @param int $v_nxtov // obf
	 * // obf
	 * @return int|string|false // obf
	 */ // obf
	public static function sampleRateCodeLookup($v_nxtov) { // obf
		static $v_otdbi = array( // obf
			0 => 48000, // obf
			1 => 44100, // obf
			2 => 32000, // obf
			3 => 'reserved' // If the reserved code is indicated, the decoder should not attempt to decode audio and should mute. // obf
		); // obf
		return (isset($v_otdbi[$v_nxtov]) ? $v_otdbi[$v_nxtov] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_lqvvb // obf
	 * // obf
	 * @return int|string|false // obf
	 */ // obf
	public static function sampleRateCodeLookup2($v_lqvvb) { // obf
		static $v_wpyod = array( // obf
			0 => 24000, // obf
			1 => 22050, // obf
			2 => 16000, // obf
			3 => 'reserved' // If the reserved code is indicated, the decoder should not attempt to decode audio and should mute. // obf
		); // obf
		return (isset($v_wpyod[$v_lqvvb]) ? $v_wpyod[$v_lqvvb] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_hahss // obf
	 * @param int $v_vanzg // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function serviceTypeLookup($v_hahss, $v_vanzg) { // obf
		static $v_lztef = array(); // obf
		if (empty($v_lztef)) { // obf
			for ($v_mdexk = 0; $v_mdexk <= 7; $v_mdexk++) { // obf
				$v_lztef[0][$v_mdexk] = 'main audio service: complete main (CM)'; // obf
				$v_lztef[1][$v_mdexk] = 'main audio service: music and effects (ME)'; // obf
				$v_lztef[2][$v_mdexk] = 'associated service: visually impaired (VI)'; // obf
				$v_lztef[3][$v_mdexk] = 'associated service: hearing impaired (HI)'; // obf
				$v_lztef[4][$v_mdexk] = 'associated service: dialogue (D)'; // obf
				$v_lztef[5][$v_mdexk] = 'associated service: commentary (C)'; // obf
				$v_lztef[6][$v_mdexk] = 'associated service: emergency (E)'; // obf
			} // obf

			$v_lztef[7][1]      = 'associated service: voice over (VO)'; // obf
			for ($v_mdexk = 2; $v_mdexk <= 7; $v_mdexk++) { // obf
				$v_lztef[7][$v_mdexk] = 'main audio service: karaoke'; // obf
			} // obf
		} // obf
		return (isset($v_lztef[$v_hahss][$v_vanzg]) ? $v_lztef[$v_hahss][$v_vanzg] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_vanzg // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public static function audioCodingModeLookup($v_vanzg) { // obf
		// array(channel configuration, # channels (not incl LFE), channel order) // obf
		static $v_qnpiu = array ( // obf
			0 => array('channel_config'=>'1+1', 'num_channels'=>2, 'channel_order'=>'Ch1,Ch2'), // obf
			1 => array('channel_config'=>'1/0', 'num_channels'=>1, 'channel_order'=>'C'), // obf
			2 => array('channel_config'=>'2/0', 'num_channels'=>2, 'channel_order'=>'L,R'), // obf
			3 => array('channel_config'=>'3/0', 'num_channels'=>3, 'channel_order'=>'L,C,R'), // obf
			4 => array('channel_config'=>'2/1', 'num_channels'=>3, 'channel_order'=>'L,R,S'), // obf
			5 => array('channel_config'=>'3/1', 'num_channels'=>4, 'channel_order'=>'L,C,R,S'), // obf
			6 => array('channel_config'=>'2/2', 'num_channels'=>4, 'channel_order'=>'L,R,SL,SR'), // obf
			7 => array('channel_config'=>'3/2', 'num_channels'=>5, 'channel_order'=>'L,C,R,SL,SR'), // obf
		); // obf
		return (isset($v_qnpiu[$v_vanzg]) ? $v_qnpiu[$v_vanzg] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_twhdo // obf
	 * // obf
	 * @return int|float|string|false // obf
	 */ // obf
	public static function centerMixLevelLookup($v_twhdo) { // obf
		static $v_qgxvh; // obf
		if (empty($v_qgxvh)) { // obf
			$v_qgxvh = array( // obf
				0 => pow(2, -3.0 / 6), // 0.707 (-3.0 dB) // obf
				1 => pow(2, -4.5 / 6), // 0.595 (-4.5 dB) // obf
				2 => pow(2, -6.0 / 6), // 0.500 (-6.0 dB) // obf
				3 => 'reserved' // obf
			); // obf
		} // obf
		return (isset($v_qgxvh[$v_twhdo]) ? $v_qgxvh[$v_twhdo] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_juchc // obf
	 * // obf
	 * @return int|float|string|false // obf
	 */ // obf
	public static function surroundMixLevelLookup($v_juchc) { // obf
		static $v_eqnzv; // obf
		if (empty($v_eqnzv)) { // obf
			$v_eqnzv = array( // obf
				0 => pow(2, -3.0 / 6), // obf
				1 => pow(2, -6.0 / 6), // obf
				2 => 0, // obf
				3 => 'reserved' // obf
			); // obf
		} // obf
		return (isset($v_eqnzv[$v_juchc]) ? $v_eqnzv[$v_juchc] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_elrob // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function dolbySurroundModeLookup($v_elrob) { // obf
		static $v_bdpjg = array( // obf
			0 => 'not indicated', // obf
			1 => 'Not Dolby Surround encoded', // obf
			2 => 'Dolby Surround encoded', // obf
			3 => 'reserved' // obf
		); // obf
		return (isset($v_bdpjg[$v_elrob]) ? $v_bdpjg[$v_elrob] : false); // obf
	} // obf

	/** // obf
	 * @param int  $v_vanzg // obf
	 * @param bool $v_yoqlf // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function channelsEnabledLookup($v_vanzg, $v_yoqlf) { // obf
		$v_gbtfr = array( // obf
			'ch1'=>($v_vanzg == 0), // obf
			'ch2'=>($v_vanzg == 0), // obf
			'left'=>($v_vanzg > 1), // obf
			'right'=>($v_vanzg > 1), // obf
			'center'=>(bool) ($v_vanzg & 0x01), // obf
			'surround_mono'=>false, // obf
			'surround_left'=>false, // obf
			'surround_right'=>false, // obf
			'lfe'=>$v_yoqlf); // obf
		switch ($v_vanzg) { // obf
			case 4: // obf
			case 5: // obf
				$v_gbtfr['surround_mono']  = true; // obf
				break; // obf
			case 6: // obf
			case 7: // obf
				$v_gbtfr['surround_left']  = true; // obf
				$v_gbtfr['surround_right'] = true; // obf
				break; // obf
		} // obf
		return $v_gbtfr; // obf
	} // obf

	/** // obf
	 * @param int $v_qvmnh // obf
	 * // obf
	 * @return float|int // obf
	 */ // obf
	public static function heavyCompression($v_qvmnh) { // obf
		// The first four bits indicate gain changes in 6.02dB increments which can be // obf
		// implemented with an arithmetic shift operation. The following four bits // obf
		// indicate linear gain changes, and require a 5-bit multiply. // obf
		// We will represent the two 4-bit fields of compr as follows: // obf
		//   X0 X1 X2 X3 . Y4 Y5 Y6 Y7 // obf
		// The meaning of the X values is most simply described by considering X to represent a 4-bit // obf
		// signed integer with values from -8 to +7. The gain indicated by X is then (X + 1) * 6.02 dB. The // obf
		// following table shows this in detail. // obf

		// Meaning of 4 msb of compr // obf
		//  7    +48.16 dB // obf
		//  6    +42.14 dB // obf
		//  5    +36.12 dB // obf
		//  4    +30.10 dB // obf
		//  3    +24.08 dB // obf
		//  2    +18.06 dB // obf
		//  1    +12.04 dB // obf
		//  0     +6.02 dB // obf
		// -1         0 dB // obf
		// -2     -6.02 dB // obf
		// -3    -12.04 dB // obf
		// -4    -18.06 dB // obf
		// -5    -24.08 dB // obf
		// -6    -30.10 dB // obf
		// -7    -36.12 dB // obf
		// -8    -42.14 dB // obf

		$v_wruqk = str_pad(decbin(($v_qvmnh & 0xF0) >> 4), 4, '0', STR_PAD_LEFT); // obf
		if ($v_wruqk[0] == '1') { // obf
			$v_ozfem = -8 + bindec(substr($v_wruqk, 1)); // obf
		} else { // obf
			$v_ozfem = bindec(substr($v_wruqk, 1)); // obf
		} // obf
		$v_ozfem = ($v_ozfem + 1) * getid3_lib::RGADamplitude2dB(2); // obf

		// The value of Y is a linear representation of a gain change of up to -6 dB. Y is considered to // obf
		// be an unsigned fractional integer, with a leading value of 1, or: 0.1 Y4 Y5 Y6 Y7 (base 2). Y can // obf
		// represent values between 0.111112 (or 31/32) and 0.100002 (or 1/2). Thus, Y can represent gain // obf
		// changes from -0.28 dB to -6.02 dB. // obf

		$v_eaxbd = (16 + ($v_qvmnh & 0x0F)) / 32; // obf

		// The combination of X and Y values allows compr to indicate gain changes from // obf
		//  48.16 - 0.28 = +47.89 dB, to // obf
		// -42.14 - 6.02 = -48.16 dB. // obf

		return $v_ozfem - $v_eaxbd; // obf
	} // obf

	/** // obf
	 * @param int $v_azjtx // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function roomTypeLookup($v_azjtx) { // obf
		static $v_jocpz = array( // obf
			0 => 'not indicated', // obf
			1 => 'large room, X curve monitor', // obf
			2 => 'small room, flat monitor', // obf
			3 => 'reserved' // obf
		); // obf
		return (isset($v_jocpz[$v_azjtx]) ? $v_jocpz[$v_azjtx] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_nvxsb // obf
	 * @param int $v_nxtov // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function frameSizeLookup($v_nvxsb, $v_nxtov) { // obf
		// LSB is whether padding is used or not // obf
		$v_hthwx     = (bool) ($v_nvxsb & 0x01); // obf
		$v_atbbj =        ($v_nvxsb & 0x3E) >> 1; // obf

		static $v_cacbg = array(); // obf
		if (empty($v_cacbg)) { // obf
			$v_cacbg = array ( // obf
				0  => array( 128,  138,  192),  //  32 kbps // obf
				1  => array( 160,  174,  240),  //  40 kbps // obf
				2  => array( 192,  208,  288),  //  48 kbps // obf
				3  => array( 224,  242,  336),  //  56 kbps // obf
				4  => array( 256,  278,  384),  //  64 kbps // obf
				5  => array( 320,  348,  480),  //  80 kbps // obf
				6  => array( 384,  416,  576),  //  96 kbps // obf
				7  => array( 448,  486,  672),  // 112 kbps // obf
				8  => array( 512,  556,  768),  // 128 kbps // obf
				9  => array( 640,  696,  960),  // 160 kbps // obf
				10 => array( 768,  834, 1152),  // 192 kbps // obf
				11 => array( 896,  974, 1344),  // 224 kbps // obf
				12 => array(1024, 1114, 1536),  // 256 kbps // obf
				13 => array(1280, 1392, 1920),  // 320 kbps // obf
				14 => array(1536, 1670, 2304),  // 384 kbps // obf
				15 => array(1792, 1950, 2688),  // 448 kbps // obf
				16 => array(2048, 2228, 3072),  // 512 kbps // obf
				17 => array(2304, 2506, 3456),  // 576 kbps // obf
				18 => array(2560, 2786, 3840)   // 640 kbps // obf
			); // obf
		} // obf
		$v_hzywp = 0; // obf
		if (($v_nxtov == 1) && $v_hthwx) { // obf
			// frame lengths are padded by 1 word (16 bits) at 44100 // obf
			// (fscode==1) means 44100Hz (see sampleRateCodeLookup) // obf
			$v_hzywp = 2; // obf
		} // obf
		return (isset($v_cacbg[$v_atbbj][$v_nxtov]) ? $v_cacbg[$v_atbbj][$v_nxtov] + $v_hzywp : false); // obf
	} // obf

	/** // obf
	 * @param int $v_nvxsb // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function bitrateLookup($v_nvxsb) { // obf
		// LSB is whether padding is used or not // obf
		$v_hthwx     = (bool) ($v_nvxsb & 0x01); // obf
		$v_atbbj =        ($v_nvxsb & 0x3E) >> 1; // obf

		static $v_iravx = array( // obf
			 0 =>  32000, // obf
			 1 =>  40000, // obf
			 2 =>  48000, // obf
			 3 =>  56000, // obf
			 4 =>  64000, // obf
			 5 =>  80000, // obf
			 6 =>  96000, // obf
			 7 => 112000, // obf
			 8 => 128000, // obf
			 9 => 160000, // obf
			10 => 192000, // obf
			11 => 224000, // obf
			12 => 256000, // obf
			13 => 320000, // obf
			14 => 384000, // obf
			15 => 448000, // obf
			16 => 512000, // obf
			17 => 576000, // obf
			18 => 640000, // obf
		); // obf
		return (isset($v_iravx[$v_atbbj]) ? $v_iravx[$v_atbbj] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_aqpum // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function blocksPerSyncFrame($v_aqpum) { // obf
		static $v_pbrvi = array( // obf
			0 => 1, // obf
			1 => 2, // obf
			2 => 3, // obf
			3 => 6, // obf
		); // obf
		return (isset($v_pbrvi[$v_aqpum]) ? $v_pbrvi[$v_aqpum] : false); // obf
	} // obf


} // obf