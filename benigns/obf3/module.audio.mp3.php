

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio.mp3.php                                        // // obf
// module for analyzing MP3 files                              // // obf
// dependencies: NONE                                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf


class getid3_mp3 extends getid3_handler // obf
{ // obf
	/** // obf
	 * Forces getID3() to scan the file byte-by-byte and log all the valid audio frame headers - extremely slow, // obf
	 * unrecommended, but may provide data from otherwise-unusable files. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_tqtrh = false; // obf

	/** // obf
	 * number of frames to scan to determine if MPEG-audio sequence is valid // obf
	 * Lower this number to 5-20 for faster scanning // obf
	 * Increase this number to 50+ for most accurate detection of valid VBR/CBR mpeg-audio streams // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_qodbp = 50; // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_vjmpi = &$v_cityt->getid3->info; // obf

		$v_otxfy = $v_vjmpi['avdataoffset']; // obf

		if (!$v_cityt->getOnlyMPEGaudioInfo($v_vjmpi['avdataoffset'])) { // obf
			if ($v_cityt->allow_bruteforce) { // obf
				$v_cityt->error('Rescanning file in BruteForce mode'); // obf
				$v_cityt->getOnlyMPEGaudioInfoBruteForce(); // obf
			} // obf
		} // obf


		if (isset($v_vjmpi['mpeg']['audio']['bitrate_mode'])) { // obf
			$v_vjmpi['audio']['bitrate_mode'] = strtolower($v_vjmpi['mpeg']['audio']['bitrate_mode']); // obf
		} // obf

		$v_hwiae = null; // obf
		if (((isset($v_vjmpi['id3v2']['headerlength']) && ($v_vjmpi['avdataoffset'] > $v_vjmpi['id3v2']['headerlength'])) || (!isset($v_vjmpi['id3v2']) && ($v_vjmpi['avdataoffset'] > 0) && ($v_vjmpi['avdataoffset'] != $v_otxfy)))) { // obf

			$v_cphnr = 'Unknown data before synch '; // obf
			if (isset($v_vjmpi['id3v2']['headerlength'])) { // obf
				$v_cphnr .= '(ID3v2 header ends at '.$v_vjmpi['id3v2']['headerlength'].', then '.($v_vjmpi['avdataoffset'] - $v_vjmpi['id3v2']['headerlength']).' bytes garbage, '; // obf
			} elseif ($v_otxfy > 0) { // obf
				$v_cphnr .= '(should be at '.$v_otxfy.', '; // obf
			} else { // obf
				$v_cphnr .= '(should be at beginning of file, '; // obf
			} // obf
			$v_cphnr .= 'synch detected at '.$v_vjmpi['avdataoffset'].')'; // obf
			if (isset($v_vjmpi['audio']['bitrate_mode']) && ($v_vjmpi['audio']['bitrate_mode'] == 'cbr')) { // obf

				if (!empty($v_vjmpi['id3v2']['headerlength']) && (($v_vjmpi['avdataoffset'] - $v_vjmpi['id3v2']['headerlength']) == $v_vjmpi['mpeg']['audio']['framelength'])) { // obf

					$v_cphnr .= '. This is a known problem with some versions of LAME (3.90-3.92) DLL in CBR mode.'; // obf
					$v_vjmpi['audio']['codec'] = 'LAME'; // obf
					$v_hwiae = 'LAME3.'; // obf

				} elseif (empty($v_vjmpi['id3v2']['headerlength']) && ($v_vjmpi['avdataoffset'] == $v_vjmpi['mpeg']['audio']['framelength'])) { // obf

					$v_cphnr .= '. This is a known problem with some versions of LAME (3.90 - 3.92) DLL in CBR mode.'; // obf
					$v_vjmpi['audio']['codec'] = 'LAME'; // obf
					$v_hwiae = 'LAME3.'; // obf

				} // obf

			} // obf
			$v_cityt->warning($v_cphnr); // obf

		} // obf

		if (isset($v_vjmpi['mpeg']['audio']['LAME'])) { // obf
			$v_vjmpi['audio']['codec'] = 'LAME'; // obf
			if (!empty($v_vjmpi['mpeg']['audio']['LAME']['long_version'])) { // obf
				$v_vjmpi['audio']['encoder'] = rtrim($v_vjmpi['mpeg']['audio']['LAME']['long_version'], "\x00"); // obf
			} elseif (!empty($v_vjmpi['mpeg']['audio']['LAME']['short_version'])) { // obf
				$v_vjmpi['audio']['encoder'] = rtrim($v_vjmpi['mpeg']['audio']['LAME']['short_version'], "\x00"); // obf
			} // obf
		} // obf

		$v_hwiae = (!empty($v_hwiae) ? $v_hwiae : (isset($v_vjmpi['audio']['encoder']) ? $v_vjmpi['audio']['encoder'] : '')); // obf
		if (!empty($v_hwiae) && (substr($v_hwiae, 0, 6) == 'LAME3.') && !preg_match('[0-9\)]', substr($v_hwiae, -1))) { // obf
			// a version number of LAME that does not end with a number like "LAME3.92" // obf
			// or with a closing parenthesis like "LAME3.88 (alpha)" // obf
			// or a version of LAME with the LAMEtag-not-filled-in-DLL-mode bug (3.90-3.92) // obf

			// not sure what the actual last frame length will be, but will be less than or equal to 1441 // obf
			$v_cgkyz = 1441; // obf

			// Not sure what version of LAME this is - look in padding of last frame for longer version string // obf
			$v_cxtor = $v_vjmpi['avdataend'] - $v_cgkyz; // obf
			$v_cityt->fseek($v_cxtor); // obf
			$v_rmeyu = $v_cityt->fread($v_cgkyz); // obf
			switch (substr($v_hwiae, -1)) { // obf
				case 'a': // obf
				case 'b': // obf
					// "LAME3.94a" will have a longer version string of "LAME3.94 (alpha)" for example // obf
					// need to trim off "a" to match longer string // obf
					$v_hwiae = substr($v_hwiae, 0, -1); // obf
					break; // obf
			} // obf
			if (($v_gtgde = strstr($v_rmeyu, $v_hwiae)) !== false) { // obf
				if (substr($v_gtgde, 0, strlen($v_hwiae)) == $v_hwiae) { // obf
					$v_crdmi = substr($v_gtgde, 0, strspn($v_gtgde, 'LAME0123456789., (abcdefghijklmnopqrstuvwxyzJFSOND)')); //"LAME3.90.3"  "LAME3.87 (beta 1, Sep 27 2000)" "LAME3.88 (beta)" // obf
					if (empty($v_vjmpi['audio']['encoder']) || (strlen($v_crdmi) > strlen($v_vjmpi['audio']['encoder']))) { // obf
						if (!empty($v_vjmpi['audio']['encoder']) && !empty($v_vjmpi['mpeg']['audio']['LAME']['short_version']) && ($v_vjmpi['audio']['encoder'] == $v_vjmpi['mpeg']['audio']['LAME']['short_version'])) { // obf
							if (preg_match('#^LAME[0-9\\.]+#', $v_crdmi, $v_jpixn)) { // obf
								// "LAME3.100" -> "LAME3.100.1", but avoid including "(alpha)" and similar // obf
								$v_vjmpi['mpeg']['audio']['LAME']['short_version'] = $v_jpixn[0]; // obf
							} // obf
						} // obf
						$v_vjmpi['audio']['encoder'] = $v_crdmi; // obf
					} // obf
				} // obf
			} // obf
		} // obf
		if (!empty($v_vjmpi['audio']['encoder'])) { // obf
			$v_vjmpi['audio']['encoder'] = rtrim($v_vjmpi['audio']['encoder'], "\x00 "); // obf
		} // obf

		switch (isset($v_vjmpi['mpeg']['audio']['layer']) ? $v_vjmpi['mpeg']['audio']['layer'] : '') { // obf
			case 1: // obf
			case 2: // obf
				$v_vjmpi['audio']['dataformat'] = 'mp'.$v_vjmpi['mpeg']['audio']['layer']; // obf
				break; // obf
		} // obf
		if (isset($v_vjmpi['fileformat']) && ($v_vjmpi['fileformat'] == 'mp3')) { // obf
			switch ($v_vjmpi['audio']['dataformat']) { // obf
				case 'mp1': // obf
				case 'mp2': // obf
				case 'mp3': // obf
					$v_vjmpi['fileformat'] = $v_vjmpi['audio']['dataformat']; // obf
					break; // obf

				default: // obf
					$v_cityt->warning('Expecting [audio][dataformat] to be mp1/mp2/mp3 when fileformat == mp3, [audio][dataformat] actually "'.$v_vjmpi['audio']['dataformat'].'"'); // obf
					break; // obf
			} // obf
		} // obf

		if (empty($v_vjmpi['fileformat'])) { // obf
			unset($v_vjmpi['fileformat']); // obf
			unset($v_vjmpi['audio']['bitrate_mode']); // obf
			unset($v_vjmpi['avdataoffset']); // obf
			unset($v_vjmpi['avdataend']); // obf
			return false; // obf
		} // obf

		$v_vjmpi['mime_type']         = 'audio/mpeg'; // obf
		$v_vjmpi['audio']['lossless'] = false; // obf

		// Calculate playtime // obf
		if (!isset($v_vjmpi['playtime_seconds']) && isset($v_vjmpi['audio']['bitrate']) && ($v_vjmpi['audio']['bitrate'] > 0)) { // obf
			// https://github.com/JamesHeinrich/getID3/issues/161 // obf
			// VBR header frame contains ~0.026s of silent audio data, but is not actually part of the original encoding and should be ignored // obf
			$v_ybink = ((isset($v_vjmpi['mpeg']['audio']['VBR_frames']) && isset($v_vjmpi['mpeg']['audio']['framelength'])) ? $v_vjmpi['mpeg']['audio']['framelength'] : 0); // obf

			$v_vjmpi['playtime_seconds'] = ($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset'] - $v_ybink) * 8 / $v_vjmpi['audio']['bitrate']; // obf
		} // obf

		$v_vjmpi['audio']['encoder_options'] = $v_cityt->GuessEncoderOptions(); // obf

		return true; // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function GuessEncoderOptions() { // obf
		// shortcuts // obf
		$v_vjmpi = &$v_cityt->getid3->info; // obf
		$v_dptcl = array(); // obf
		$v_rxbhq = array(); // obf
		if (!empty($v_vjmpi['mpeg']['audio'])) { // obf
			$v_dptcl = &$v_vjmpi['mpeg']['audio']; // obf
			if (!empty($v_dptcl['LAME'])) { // obf
				$v_rxbhq = &$v_dptcl['LAME']; // obf
			} // obf
		} // obf

		$v_twfdr = ''; // obf
		static $v_ymdvv = array(16, 24, 40, 56, 112, 128, 160, 192, 256); // obf

		if (isset($v_dptcl['VBR_method']) && ($v_dptcl['VBR_method'] == 'Fraunhofer') && !empty($v_dptcl['VBR_quality'])) { // obf

			$v_twfdr = 'VBR q'.$v_dptcl['VBR_quality']; // obf

		} elseif (!empty($v_rxbhq['preset_used']) && isset($v_rxbhq['preset_used_id']) && (!in_array($v_rxbhq['preset_used_id'], $v_ymdvv))) { // obf

			$v_twfdr = $v_rxbhq['preset_used']; // obf

		} elseif (!empty($v_rxbhq['vbr_quality'])) { // obf

			static $v_yzfbo = array(); // obf
			if (empty($v_yzfbo)) { // obf

				//$v_yzfbo[abrbitrate_minbitrate][vbr_quality][raw_vbr_method][raw_noise_shaping][raw_stereo_mode][ath_type][lowpass_frequency] = 'preset name'; // obf
				$v_yzfbo[0xFF][58][1][1][3][2][20500] = '--alt-preset insane';        // 3.90,   3.90.1, 3.92 // obf
				$v_yzfbo[0xFF][58][1][1][3][2][20600] = '--alt-preset insane';        // 3.90.2, 3.90.3, 3.91 // obf
				$v_yzfbo[0xFF][57][1][1][3][4][20500] = '--alt-preset insane';        // 3.94,   3.95 // obf
				$v_yzfbo['**'][78][3][2][3][2][19500] = '--alt-preset extreme';       // 3.90,   3.90.1, 3.92 // obf
				$v_yzfbo['**'][78][3][2][3][2][19600] = '--alt-preset extreme';       // 3.90.2, 3.91 // obf
				$v_yzfbo['**'][78][3][1][3][2][19600] = '--alt-preset extreme';       // 3.90.3 // obf
				$v_yzfbo['**'][78][4][2][3][2][19500] = '--alt-preset fast extreme';  // 3.90,   3.90.1, 3.92 // obf
				$v_yzfbo['**'][78][4][2][3][2][19600] = '--alt-preset fast extreme';  // 3.90.2, 3.90.3, 3.91 // obf
				$v_yzfbo['**'][78][3][2][3][4][19000] = '--alt-preset standard';      // 3.90,   3.90.1, 3.90.2, 3.91, 3.92 // obf
				$v_yzfbo['**'][78][3][1][3][4][19000] = '--alt-preset standard';      // 3.90.3 // obf
				$v_yzfbo['**'][78][4][2][3][4][19000] = '--alt-preset fast standard'; // 3.90,   3.90.1, 3.90.2, 3.91, 3.92 // obf
				$v_yzfbo['**'][78][4][1][3][4][19000] = '--alt-preset fast standard'; // 3.90.3 // obf
				$v_yzfbo['**'][88][4][1][3][3][19500] = '--r3mix';                    // 3.90,   3.90.1, 3.92 // obf
				$v_yzfbo['**'][88][4][1][3][3][19600] = '--r3mix';                    // 3.90.2, 3.90.3, 3.91 // obf
				$v_yzfbo['**'][67][4][1][3][4][18000] = '--r3mix';                    // 3.94,   3.95 // obf
				$v_yzfbo['**'][68][3][2][3][4][18000] = '--alt-preset medium';        // 3.90.3 // obf
				$v_yzfbo['**'][68][4][2][3][4][18000] = '--alt-preset fast medium';   // 3.90.3 // obf

				$v_yzfbo[0xFF][99][1][1][1][2][0]     = '--preset studio';            // 3.90,   3.90.1, 3.90.2, 3.91, 3.92 // obf
				$v_yzfbo[0xFF][58][2][1][3][2][20600] = '--preset studio';            // 3.90.3, 3.93.1 // obf
				$v_yzfbo[0xFF][58][2][1][3][2][20500] = '--preset studio';            // 3.93 // obf
				$v_yzfbo[0xFF][57][2][1][3][4][20500] = '--preset studio';            // 3.94,   3.95 // obf
				$v_yzfbo[0xC0][88][1][1][1][2][0]     = '--preset cd';                // 3.90,   3.90.1, 3.90.2,   3.91, 3.92 // obf
				$v_yzfbo[0xC0][58][2][2][3][2][19600] = '--preset cd';                // 3.90.3, 3.93.1 // obf
				$v_yzfbo[0xC0][58][2][2][3][2][19500] = '--preset cd';                // 3.93 // obf
				$v_yzfbo[0xC0][57][2][1][3][4][19500] = '--preset cd';                // 3.94,   3.95 // obf
				$v_yzfbo[0xA0][78][1][1][3][2][18000] = '--preset hifi';              // 3.90,   3.90.1, 3.90.2,   3.91, 3.92 // obf
				$v_yzfbo[0xA0][58][2][2][3][2][18000] = '--preset hifi';              // 3.90.3, 3.93,   3.93.1 // obf
				$v_yzfbo[0xA0][57][2][1][3][4][18000] = '--preset hifi';              // 3.94,   3.95 // obf
				$v_yzfbo[0x80][67][1][1][3][2][18000] = '--preset tape';              // 3.90,   3.90.1, 3.90.2,   3.91, 3.92 // obf
				$v_yzfbo[0x80][67][1][1][3][2][15000] = '--preset radio';             // 3.90,   3.90.1, 3.90.2,   3.91, 3.92 // obf
				$v_yzfbo[0x70][67][1][1][3][2][15000] = '--preset fm';                // 3.90,   3.90.1, 3.90.2,   3.91, 3.92 // obf
				$v_yzfbo[0x70][58][2][2][3][2][16000] = '--preset tape/radio/fm';     // 3.90.3, 3.93,   3.93.1 // obf
				$v_yzfbo[0x70][57][2][1][3][4][16000] = '--preset tape/radio/fm';     // 3.94,   3.95 // obf
				$v_yzfbo[0x38][58][2][2][0][2][10000] = '--preset voice';             // 3.90.3, 3.93,   3.93.1 // obf
				$v_yzfbo[0x38][57][2][1][0][4][15000] = '--preset voice';             // 3.94,   3.95 // obf
				$v_yzfbo[0x38][57][2][1][0][4][16000] = '--preset voice';             // 3.94a14 // obf
				$v_yzfbo[0x28][65][1][1][0][2][7500]  = '--preset mw-us';             // 3.90,   3.90.1, 3.92 // obf
				$v_yzfbo[0x28][65][1][1][0][2][7600]  = '--preset mw-us';             // 3.90.2, 3.91 // obf
				$v_yzfbo[0x28][58][2][2][0][2][7000]  = '--preset mw-us';             // 3.90.3, 3.93,   3.93.1 // obf
				$v_yzfbo[0x28][57][2][1][0][4][10500] = '--preset mw-us';             // 3.94,   3.95 // obf
				$v_yzfbo[0x28][57][2][1][0][4][11200] = '--preset mw-us';             // 3.94a14 // obf
				$v_yzfbo[0x28][57][2][1][0][4][8800]  = '--preset mw-us';             // 3.94a15 // obf
				$v_yzfbo[0x18][58][2][2][0][2][4000]  = '--preset phon+/lw/mw-eu/sw'; // 3.90.3, 3.93.1 // obf
				$v_yzfbo[0x18][58][2][2][0][2][3900]  = '--preset phon+/lw/mw-eu/sw'; // 3.93 // obf
				$v_yzfbo[0x18][57][2][1][0][4][5900]  = '--preset phon+/lw/mw-eu/sw'; // 3.94,   3.95 // obf
				$v_yzfbo[0x18][57][2][1][0][4][6200]  = '--preset phon+/lw/mw-eu/sw'; // 3.94a14 // obf
				$v_yzfbo[0x18][57][2][1][0][4][3200]  = '--preset phon+/lw/mw-eu/sw'; // 3.94a15 // obf
				$v_yzfbo[0x10][58][2][2][0][2][3800]  = '--preset phone';             // 3.90.3, 3.93.1 // obf
				$v_yzfbo[0x10][58][2][2][0][2][3700]  = '--preset phone';             // 3.93 // obf
				$v_yzfbo[0x10][57][2][1][0][4][5600]  = '--preset phone';             // 3.94,   3.95 // obf
			} // obf

			if (isset($v_yzfbo[$v_rxbhq['raw']['abrbitrate_minbitrate']][$v_rxbhq['vbr_quality']][$v_rxbhq['raw']['vbr_method']][$v_rxbhq['raw']['noise_shaping']][$v_rxbhq['raw']['stereo_mode']][$v_rxbhq['ath_type']][$v_rxbhq['lowpass_frequency']])) { // obf

				$v_twfdr = $v_yzfbo[$v_rxbhq['raw']['abrbitrate_minbitrate']][$v_rxbhq['vbr_quality']][$v_rxbhq['raw']['vbr_method']][$v_rxbhq['raw']['noise_shaping']][$v_rxbhq['raw']['stereo_mode']][$v_rxbhq['ath_type']][$v_rxbhq['lowpass_frequency']]; // obf

			} elseif (isset($v_yzfbo['**'][$v_rxbhq['vbr_quality']][$v_rxbhq['raw']['vbr_method']][$v_rxbhq['raw']['noise_shaping']][$v_rxbhq['raw']['stereo_mode']][$v_rxbhq['ath_type']][$v_rxbhq['lowpass_frequency']])) { // obf

				$v_twfdr = $v_yzfbo['**'][$v_rxbhq['vbr_quality']][$v_rxbhq['raw']['vbr_method']][$v_rxbhq['raw']['noise_shaping']][$v_rxbhq['raw']['stereo_mode']][$v_rxbhq['ath_type']][$v_rxbhq['lowpass_frequency']]; // obf

			} elseif ($v_vjmpi['audio']['bitrate_mode'] == 'vbr') { // obf

				// http://gabriel.mp3-tech.org/mp3infotag.html // obf
				// int    Quality = (100 - 10 * gfp->VBR_q - gfp->quality)h // obf


				$v_cpezx = 10 - ceil($v_rxbhq['vbr_quality'] / 10); // obf
				$v_lvgbh = 100 - $v_rxbhq['vbr_quality'] - ($v_cpezx * 10); // obf
				$v_twfdr = '-V'.$v_cpezx.' -q'.$v_lvgbh; // obf

			} elseif ($v_vjmpi['audio']['bitrate_mode'] == 'cbr') { // obf

				$v_twfdr = strtoupper($v_vjmpi['audio']['bitrate_mode']).ceil($v_vjmpi['audio']['bitrate'] / 1000); // obf

			} else { // obf

				$v_twfdr = strtoupper($v_vjmpi['audio']['bitrate_mode']); // obf

			} // obf

		} elseif (!empty($v_rxbhq['bitrate_abr'])) { // obf

			$v_twfdr = 'ABR'.$v_rxbhq['bitrate_abr']; // obf

		} elseif (!empty($v_vjmpi['audio']['bitrate'])) { // obf

			if ($v_vjmpi['audio']['bitrate_mode'] == 'cbr') { // obf
				$v_twfdr = strtoupper($v_vjmpi['audio']['bitrate_mode']).round($v_vjmpi['audio']['bitrate'] / 1000); // obf
			} else { // obf
				$v_twfdr = strtoupper($v_vjmpi['audio']['bitrate_mode']); // obf
			} // obf

		} // obf
		if (!empty($v_rxbhq['bitrate_min'])) { // obf
			$v_twfdr .= ' -b'.$v_rxbhq['bitrate_min']; // obf
		} // obf

		if (isset($v_dptcl['bitrate']) && $v_dptcl['bitrate'] === 'free') { // obf
			$v_twfdr .= ' --freeformat'; // obf
		} // obf

		if (!empty($v_rxbhq['encoding_flags']['nogap_prev']) || !empty($v_rxbhq['encoding_flags']['nogap_next'])) { // obf
			$v_twfdr .= ' --nogap'; // obf
		} // obf

		if (!empty($v_rxbhq['lowpass_frequency'])) { // obf
			$v_vthri = explode(' ', $v_twfdr, 4); // obf
			if ($v_vthri[0] == '--r3mix') { // obf
				$v_vthri[1] = 'r3mix'; // obf
			} // obf
			switch ($v_vthri[0]) { // obf
				case '--preset': // obf
				case '--alt-preset': // obf
				case '--r3mix': // obf
					if ($v_vthri[1] == 'fast') { // obf
						$v_vthri[1] .= ' '.$v_vthri[2]; // obf
					} // obf
					switch ($v_vthri[1]) { // obf
						case 'portable': // obf
						case 'medium': // obf
						case 'standard': // obf
						case 'extreme': // obf
						case 'insane': // obf
						case 'fast portable': // obf
						case 'fast medium': // obf
						case 'fast standard': // obf
						case 'fast extreme': // obf
						case 'fast insane': // obf
						case 'r3mix': // obf
							static $v_aixkb = array( // obf
									'insane|20500'        => 20500, // obf
									'insane|20600'        => 20600,  // 3.90.2, 3.90.3, 3.91 // obf
									'medium|18000'        => 18000, // obf
									'fast medium|18000'   => 18000, // obf
									'extreme|19500'       => 19500,  // 3.90,   3.90.1, 3.92, 3.95 // obf
									'extreme|19600'       => 19600,  // 3.90.2, 3.90.3, 3.91, 3.93.1 // obf
									'fast extreme|19500'  => 19500,  // 3.90,   3.90.1, 3.92, 3.95 // obf
									'fast extreme|19600'  => 19600,  // 3.90.2, 3.90.3, 3.91, 3.93.1 // obf
									'standard|19000'      => 19000, // obf
									'fast standard|19000' => 19000, // obf
									'r3mix|19500'         => 19500,  // 3.90,   3.90.1, 3.92 // obf
									'r3mix|19600'         => 19600,  // 3.90.2, 3.90.3, 3.91 // obf
									'r3mix|18000'         => 18000,  // 3.94,   3.95 // obf
								); // obf
							if (!isset($v_aixkb[$v_vthri[1].'|'.$v_rxbhq['lowpass_frequency']]) && ($v_rxbhq['lowpass_frequency'] < 22050) && (round($v_rxbhq['lowpass_frequency'] / 1000) < round($v_dptcl['sample_rate'] / 2000))) { // obf
								$v_twfdr .= ' --lowpass '.$v_rxbhq['lowpass_frequency']; // obf
							} // obf
							break; // obf

						default: // obf
							break; // obf
					} // obf
					break; // obf
			} // obf
		} // obf

		if (isset($v_rxbhq['raw']['source_sample_freq'])) { // obf
			if (($v_dptcl['sample_rate'] == 44100) && ($v_rxbhq['raw']['source_sample_freq'] != 1)) { // obf
				$v_twfdr .= ' --resample 44100'; // obf
			} elseif (($v_dptcl['sample_rate'] == 48000) && ($v_rxbhq['raw']['source_sample_freq'] != 2)) { // obf
				$v_twfdr .= ' --resample 48000'; // obf
			} elseif ($v_dptcl['sample_rate'] < 44100) { // obf
				switch ($v_rxbhq['raw']['source_sample_freq']) { // obf
					case 0: // <= 32000 // obf
						// may or may not be same as source frequency - ignore // obf
						break; // obf
					case 1: // 44100 // obf
					case 2: // 48000 // obf
					case 3: // 48000+ // obf
						$v_vthri = explode(' ', $v_twfdr, 4); // obf
						switch ($v_vthri[0]) { // obf
							case '--preset': // obf
							case '--alt-preset': // obf
								switch ($v_vthri[1]) { // obf
									case 'fast': // obf
									case 'portable': // obf
									case 'medium': // obf
									case 'standard': // obf
									case 'extreme': // obf
									case 'insane': // obf
										$v_twfdr .= ' --resample '.$v_dptcl['sample_rate']; // obf
										break; // obf

									default: // obf
										static $v_uthrq = array( // obf
												'phon+/lw/mw-eu/sw|16000' => 16000, // obf
												'mw-us|24000'             => 24000, // 3.95 // obf
												'mw-us|32000'             => 32000, // 3.93 // obf
												'mw-us|16000'             => 16000, // 3.92 // obf
												'phone|16000'             => 16000, // obf
												'phone|11025'             => 11025, // 3.94a15 // obf
												'radio|32000'             => 32000, // 3.94a15 // obf
												'fm/radio|32000'          => 32000, // 3.92 // obf
												'fm|32000'                => 32000, // 3.90 // obf
												'voice|32000'             => 32000); // obf
										if (!isset($v_uthrq[$v_vthri[1].'|'.$v_dptcl['sample_rate']])) { // obf
											$v_twfdr .= ' --resample '.$v_dptcl['sample_rate']; // obf
										} // obf
										break; // obf
								} // obf
								break; // obf

							case '--r3mix': // obf
							default: // obf
								$v_twfdr .= ' --resample '.$v_dptcl['sample_rate']; // obf
								break; // obf
						} // obf
						break; // obf
				} // obf
			} // obf
		} // obf
		if (empty($v_twfdr) && !empty($v_vjmpi['audio']['bitrate']) && !empty($v_vjmpi['audio']['bitrate_mode'])) { // obf
			//$v_twfdr = strtoupper($v_vjmpi['audio']['bitrate_mode']).ceil($v_vjmpi['audio']['bitrate'] / 1000); // obf
			$v_twfdr = strtoupper($v_vjmpi['audio']['bitrate_mode']); // obf
		} // obf

		return $v_twfdr; // obf
	} // obf

	/** // obf
	 * @param int   $v_fuvin // obf
	 * @param array $v_vjmpi // obf
	 * @param bool  $v_kxlbk // obf
	 * @param bool  $v_iljzs // obf
	 * @param bool  $v_vofjh // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function decodeMPEGaudioHeader($v_fuvin, &$v_vjmpi, $v_kxlbk=true, $v_iljzs=false, $v_vofjh=false) { // obf
		static $v_katni; // obf
		static $v_sllde; // obf
		static $v_leoru; // obf
		static $v_lobhh; // obf
		static $v_tkgtg; // obf
		static $v_jthwq; // obf
		static $v_zonhm; // obf
		if (empty($v_katni)) { // obf
			$v_katni       = self::MPEGaudioVersionArray(); // obf
			$v_sllde         = self::MPEGaudioLayerArray(); // obf
			$v_leoru       = self::MPEGaudioBitrateArray(); // obf
			$v_lobhh     = self::MPEGaudioFrequencyArray(); // obf
			$v_tkgtg   = self::MPEGaudioChannelModeArray(); // obf
			$v_jthwq = self::MPEGaudioModeExtensionArray(); // obf
			$v_zonhm      = self::MPEGaudioEmphasisArray(); // obf
		} // obf

		if ($v_cityt->fseek($v_fuvin) != 0) { // obf
			$v_cityt->error('decodeMPEGaudioHeader() failed to seek to next offset at '.$v_fuvin); // obf
			return false; // obf
		} // obf
		//$v_hglle = $v_cityt->fread(1441); // worst-case max length = 32kHz @ 320kbps layer 3 = 1441 bytes/frame // obf
		$v_hglle = $v_cityt->fread(226); // LAME header at offset 36 + 190 bytes of Xing/LAME data // obf

		// MP3 audio frame structure: // obf
		// $v_pyrhg $v_pyrhg $v_pyrhg $v_pyrhg [$v_pkbvb $v_pkbvb] $v_vurth... // obf
		// where $v_pyrhg..$v_pyrhg is the four-byte mpeg-audio header (below) // obf
		// $v_pkbvb $v_pkbvb is the optional 2-byte CRC // obf
		// and $v_vurth... is the audio data // obf

		$v_budqs = substr($v_hglle, 0, 4); // obf
		$v_bboir = getid3_lib::PrintHexBytes($v_budqs, true, false, false); // obf
		static $v_ksguq = array(); // obf
		if (isset($v_ksguq[$v_bboir])) { // obf
			$v_eacxa = $v_ksguq[$v_bboir]; // obf
		} else { // obf
			$v_eacxa = self::MPEGaudioHeaderDecode($v_budqs); // obf
			$v_ksguq[$v_bboir] = $v_eacxa; // obf
		} // obf

		static $v_kdbum = array(); // obf
		if (!isset($v_kdbum[$v_bboir])) { // Not in cache // obf
			//$v_kdbum[$v_bboir] = self::MPEGaudioHeaderValid($v_eacxa, false, true);  // allow badly-formatted freeformat (from LAME 3.90 - 3.93.1) // obf
			$v_kdbum[$v_bboir] = self::MPEGaudioHeaderValid($v_eacxa, false, false); // obf
		} // obf

		// shortcut // obf
		if (!isset($v_vjmpi['mpeg']['audio'])) { // obf
			$v_vjmpi['mpeg']['audio'] = array(); // obf
		} // obf
		$v_dptcl = &$v_vjmpi['mpeg']['audio']; // obf

		if ($v_kdbum[$v_bboir]) { // obf
			$v_dptcl['raw'] = $v_eacxa; // obf
		} else { // obf
			$v_cityt->warning('Invalid MPEG audio header ('.getid3_lib::PrintHexBytes($v_budqs).') at offset '.$v_fuvin); // obf
			return false; // obf
		} // obf

		if (!$v_vofjh) { // obf
			$v_dptcl['version']       = $v_katni[$v_dptcl['raw']['version']]; // obf
			$v_dptcl['layer']         = $v_sllde[$v_dptcl['raw']['layer']]; // obf

			$v_dptcl['channelmode']   = $v_tkgtg[$v_dptcl['raw']['channelmode']]; // obf
			$v_dptcl['channels']      = (($v_dptcl['channelmode'] == 'mono') ? 1 : 2); // obf
			$v_dptcl['sample_rate']   = $v_lobhh[$v_dptcl['version']][$v_dptcl['raw']['sample_rate']]; // obf
			$v_dptcl['protection']    = !$v_dptcl['raw']['protection']; // obf
			$v_dptcl['private']       = (bool) $v_dptcl['raw']['private']; // obf
			$v_dptcl['modeextension'] = $v_jthwq[$v_dptcl['layer']][$v_dptcl['raw']['modeextension']]; // obf
			$v_dptcl['copyright']     = (bool) $v_dptcl['raw']['copyright']; // obf
			$v_dptcl['original']      = (bool) $v_dptcl['raw']['original']; // obf
			$v_dptcl['emphasis']      = $v_zonhm[$v_dptcl['raw']['emphasis']]; // obf

			$v_vjmpi['audio']['channels']    = $v_dptcl['channels']; // obf
			$v_vjmpi['audio']['sample_rate'] = $v_dptcl['sample_rate']; // obf

			if ($v_dptcl['protection']) { // obf
				$v_dptcl['crc'] = getid3_lib::BigEndian2Int(substr($v_hglle, 4, 2)); // obf
			} // obf
		} // obf

		if ($v_dptcl['raw']['bitrate'] == 15) { // obf
			// http://www.hydrogenaudio.org/?act=ST&f=16&t=9682&st=0 // obf
			$v_cityt->warning('Invalid bitrate index (15), this is a known bug in free-format MP3s encoded by LAME v3.90 - 3.93.1'); // obf
			$v_dptcl['raw']['bitrate'] = 0; // obf
		} // obf
		$v_dptcl['padding'] = (bool) $v_dptcl['raw']['padding']; // obf
		$v_dptcl['bitrate'] = $v_leoru[$v_dptcl['version']][$v_dptcl['layer']][$v_dptcl['raw']['bitrate']]; // obf

		if (($v_dptcl['bitrate'] == 'free') && ($v_fuvin == $v_vjmpi['avdataoffset'])) { // obf
			// only skip multiple frame check if free-format bitstream found at beginning of file // obf
			// otherwise is quite possibly simply corrupted data // obf
			$v_kxlbk = false; // obf
		} // obf

		// For Layer 2 there are some combinations of bitrate and mode which are not allowed. // obf
		if (!$v_vofjh && ($v_dptcl['layer'] == '2')) { // obf

			$v_vjmpi['audio']['dataformat'] = 'mp2'; // obf
			switch ($v_dptcl['channelmode']) { // obf

				case 'mono': // obf
					if (($v_dptcl['bitrate'] == 'free') || ($v_dptcl['bitrate'] <= 192000)) { // obf
						// these are ok // obf
					} else { // obf
						$v_cityt->error($v_dptcl['bitrate'].'kbps not allowed in Layer 2, '.$v_dptcl['channelmode'].'.'); // obf
						return false; // obf
					} // obf
					break; // obf

				case 'stereo': // obf
				case 'joint stereo': // obf
				case 'dual channel': // obf
					if (($v_dptcl['bitrate'] == 'free') || ($v_dptcl['bitrate'] == 64000) || ($v_dptcl['bitrate'] >= 96000)) { // obf
						// these are ok // obf
					} else { // obf
						$v_cityt->error(intval(round($v_dptcl['bitrate'] / 1000)).'kbps not allowed in Layer 2, '.$v_dptcl['channelmode'].'.'); // obf
						return false; // obf
					} // obf
					break; // obf

			} // obf

		} // obf


		if ($v_vjmpi['audio']['sample_rate'] > 0) { // obf
			$v_dptcl['framelength'] = self::MPEGaudioFrameLength($v_dptcl['bitrate'], $v_dptcl['version'], $v_dptcl['layer'], (int) $v_dptcl['padding'], $v_vjmpi['audio']['sample_rate']); // obf
		} // obf

		$v_qhquk = $v_fuvin + 1; // obf
		if ($v_dptcl['bitrate'] != 'free') { // obf

			$v_vjmpi['audio']['bitrate'] = $v_dptcl['bitrate']; // obf

			if (isset($v_dptcl['framelength'])) { // obf
				$v_qhquk = $v_fuvin + $v_dptcl['framelength']; // obf
			} else { // obf
				$v_cityt->error('Frame at offset('.$v_fuvin.') is has an invalid frame length.'); // obf
				return false; // obf
			} // obf

		} // obf

		$v_aogky = 0; // obf

		//////////////////////////////////////////////////////////////////////////////////// // obf
		// Variable-bitrate headers // obf

		if (substr($v_hglle, 4 + 32, 4) == 'VBRI') { // obf
			// Fraunhofer VBR header is hardcoded 'VBRI' at offset 0x24 (36) // obf
			// specs taken from http://minnie.tuhs.org/pipermail/mp3encoder/2001-January/001800.html // obf

			$v_dptcl['bitrate_mode'] = 'vbr'; // obf
			$v_dptcl['VBR_method']   = 'Fraunhofer'; // obf
			$v_vjmpi['audio']['codec']              = 'Fraunhofer'; // obf

			$v_nhyii = substr($v_hglle, 4 + 2, 32); // obf

			$v_aglyq = 36; // obf

			$v_dptcl['VBR_encoder_version']     = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq +  4, 2)); // VbriVersion // obf
			$v_dptcl['VBR_encoder_delay']       = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq +  6, 2)); // VbriDelay // obf
			$v_dptcl['VBR_quality']             = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq +  8, 2)); // VbriQuality // obf
			$v_dptcl['VBR_bytes']               = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq + 10, 4)); // VbriStreamBytes // obf
			$v_dptcl['VBR_frames']              = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq + 14, 4)); // VbriStreamFrames // obf
			$v_dptcl['VBR_seek_offsets']        = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq + 18, 2)); // VbriTableSize // obf
			$v_dptcl['VBR_seek_scale']          = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq + 20, 2)); // VbriTableScale // obf
			$v_dptcl['VBR_entry_bytes']         = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq + 22, 2)); // VbriEntryBytes // obf
			$v_dptcl['VBR_entry_frames']        = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq + 24, 2)); // VbriEntryFrames // obf

			$v_aogky = $v_dptcl['VBR_bytes']; // obf

			$v_ikyiz = $v_fuvin; // obf
			for ($v_xoczv = 0; $v_xoczv < $v_dptcl['VBR_seek_offsets']; $v_xoczv++) { // obf
				$v_bfwww = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aglyq, $v_dptcl['VBR_entry_bytes'])); // obf
				$v_aglyq += $v_dptcl['VBR_entry_bytes']; // obf
				$v_dptcl['VBR_offsets_relative'][$v_xoczv] = ($v_bfwww * $v_dptcl['VBR_seek_scale']); // obf
				$v_dptcl['VBR_offsets_absolute'][$v_xoczv] = ($v_bfwww * $v_dptcl['VBR_seek_scale']) + $v_ikyiz; // obf
				$v_ikyiz += $v_bfwww; // obf
			} // obf


		} else { // obf

			// Xing VBR header is hardcoded 'Xing' at a offset 0x0D (13), 0x15 (21) or 0x24 (36) // obf
			// depending on MPEG layer and number of channels // obf

			$v_ozdzo = self::XingVBRidOffset($v_dptcl['version'], $v_dptcl['channelmode']); // obf
			$v_nhyii = substr($v_hglle, 4 + 2, $v_ozdzo - 4); // obf

			if ((substr($v_hglle, $v_ozdzo, strlen('Xing')) == 'Xing') || (substr($v_hglle, $v_ozdzo, strlen('Info')) == 'Info')) { // obf
				// 'Xing' is traditional Xing VBR frame // obf
				// 'Info' is LAME-encoded CBR (This was done to avoid CBR files to be recognized as traditional Xing VBR files by some decoders.) // obf
				// 'Info' *can* legally be used to specify a VBR file as well, however. // obf

				// http://www.multiweb.cz/twoinches/MP3inside.htm // obf
				//00..03 = "Xing" or "Info" // obf
				//04..07 = Flags: // obf
				//  0x01  Frames Flag     set if value for number of frames in file is stored // obf
				//  0x02  Bytes Flag      set if value for filesize in bytes is stored // obf
				//  0x04  TOC Flag        set if values for TOC are stored // obf
				//  0x08  VBR Scale Flag  set if values for VBR scale is stored // obf
				//08..11  Frames: Number of frames in file (including the first Xing/Info one) // obf
				//12..15  Bytes:  File length in Bytes // obf
				//16..115  TOC (Table of Contents): // obf
				//  Contains of 100 indexes (one Byte length) for easier lookup in file. Approximately solves problem with moving inside file. // obf
				//  Each Byte has a value according this formula: // obf
				//  (TOC[i] / 256) * fileLenInBytes // obf
				//  So if song lasts eg. 240 sec. and you want to jump to 60. sec. (and file is 5 000 000 Bytes length) you can use: // obf
				//  TOC[(60/240)*100] = TOC[25] // obf
				//  and corresponding Byte in file is then approximately at: // obf
				//  (TOC[25]/256) * 5000000 // obf
				//116..119  VBR Scale // obf


				// should be safe to leave this at 'vbr' and let it be overriden to 'cbr' if a CBR preset/mode is used by LAME // obf
//				if (substr($v_hglle, $v_ozdzo, strlen('Info')) == 'Xing') { // obf
					$v_dptcl['bitrate_mode'] = 'vbr'; // obf
					$v_dptcl['VBR_method']   = 'Xing'; // obf
//				} else { // obf
//					$v_iljzs = true; // obf
//					$v_dptcl['bitrate_mode'] = 'cbr'; // obf
//				} // obf

				$v_dptcl['xing_flags_raw'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_ozdzo + 4, 4)); // obf

				$v_dptcl['xing_flags']['frames']    = (bool) ($v_dptcl['xing_flags_raw'] & 0x00000001); // obf
				$v_dptcl['xing_flags']['bytes']     = (bool) ($v_dptcl['xing_flags_raw'] & 0x00000002); // obf
				$v_dptcl['xing_flags']['toc']       = (bool) ($v_dptcl['xing_flags_raw'] & 0x00000004); // obf
				$v_dptcl['xing_flags']['vbr_scale'] = (bool) ($v_dptcl['xing_flags_raw'] & 0x00000008); // obf

				if ($v_dptcl['xing_flags']['frames']) { // obf
					$v_dptcl['VBR_frames'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_ozdzo +  8, 4)); // obf
					//$v_dptcl['VBR_frames']--; // don't count header Xing/Info frame // obf
				} // obf
				if ($v_dptcl['xing_flags']['bytes']) { // obf
					$v_dptcl['VBR_bytes']  = getid3_lib::BigEndian2Int(substr($v_hglle, $v_ozdzo + 12, 4)); // obf
				} // obf

				//if (($v_dptcl['bitrate'] == 'free') && !empty($v_dptcl['VBR_frames']) && !empty($v_dptcl['VBR_bytes'])) { // obf
				//if (!empty($v_dptcl['VBR_frames']) && !empty($v_dptcl['VBR_bytes'])) { // obf
				if (!empty($v_dptcl['VBR_frames'])) { // obf
					$v_vdjue  = 0; // obf
					if (!empty($v_dptcl['VBR_bytes'])) { // obf
						$v_vdjue = $v_dptcl['VBR_bytes']; // obf
					} elseif (!empty($v_vjmpi['filesize'])) { // obf
						$v_vdjue  = $v_vjmpi['filesize']; // obf
						$v_vdjue -= (isset($v_vjmpi['id3v2']['headerlength']) ? intval($v_vjmpi['id3v2']['headerlength']) : 0); // obf
						$v_vdjue -= (isset($v_vjmpi['id3v1']) ? 128 : 0); // obf
						$v_vdjue -= (isset($v_vjmpi['tag_offset_end']) ? $v_vjmpi['tag_offset_end'] - $v_vjmpi['tag_offset_start'] : 0); // obf
						$v_cityt->warning('MP3.Xing header missing VBR_bytes, assuming MPEG audio portion of file is '.number_format($v_vdjue).' bytes'); // obf
					} // obf

					$v_vxlkv = $v_vdjue / $v_dptcl['VBR_frames']; // obf

					if ($v_dptcl['layer'] == '1') { // obf
						// BitRate = (((FrameLengthInBytes / 4) - Padding) * SampleRate) / 12 // obf
						//$v_vjmpi['audio']['bitrate'] = ((($v_vxlkv / 4) - intval($v_dptcl['padding'])) * $v_dptcl['sample_rate']) / 12; // obf
						$v_vjmpi['audio']['bitrate'] = ($v_vxlkv / 4) * $v_dptcl['sample_rate'] * (2 / $v_vjmpi['audio']['channels']) / 12; // obf
					} else { // obf
						// Bitrate = ((FrameLengthInBytes - Padding) * SampleRate) / 144 // obf
						//$v_vjmpi['audio']['bitrate'] = (($v_vxlkv - intval($v_dptcl['padding'])) * $v_dptcl['sample_rate']) / 144; // obf
						$v_vjmpi['audio']['bitrate'] = $v_vxlkv * $v_dptcl['sample_rate'] * (2 / $v_vjmpi['audio']['channels']) / 144; // obf
					} // obf
					$v_dptcl['framelength'] = floor($v_vxlkv); // obf
				} // obf

				if ($v_dptcl['xing_flags']['toc']) { // obf
					$v_ixwob = substr($v_hglle, $v_ozdzo + 16, 100); // obf
					for ($v_xoczv = 0; $v_xoczv < 100; $v_xoczv++) { // obf
						$v_dptcl['toc'][$v_xoczv] = ord($v_ixwob[$v_xoczv]); // obf
					} // obf
				} // obf
				if ($v_dptcl['xing_flags']['vbr_scale']) { // obf
					$v_dptcl['VBR_scale'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_ozdzo + 116, 4)); // obf
				} // obf


				// http://gabriel.mp3-tech.org/mp3infotag.html // obf
				if (substr($v_hglle, $v_ozdzo + 120, 4) == 'LAME') { // obf

					// shortcut // obf
					$v_dptcl['LAME'] = array(); // obf
					$v_rxbhq    = &$v_dptcl['LAME']; // obf


					$v_rxbhq['long_version']  = substr($v_hglle, $v_ozdzo + 120, 20); // obf
					$v_rxbhq['short_version'] = substr($v_rxbhq['long_version'], 0, 9); // obf

					//$v_rxbhq['numeric_version'] = str_replace('LAME', '', $v_rxbhq['short_version']); // obf
					$v_rxbhq['numeric_version'] = ''; // obf
					if (preg_match('#^LAME([0-9\\.a-z]*)#', $v_rxbhq['long_version'], $v_jpixn)) { // obf
						$v_rxbhq['short_version']   = $v_jpixn[0]; // obf
						$v_rxbhq['numeric_version'] = $v_jpixn[1]; // obf
					} // obf
					if (strlen($v_rxbhq['numeric_version']) > 0) { // obf
						foreach (explode('.', $v_rxbhq['numeric_version']) as $v_eofru => $v_lnukr) { // obf
							$v_rxbhq['integer_version'][$v_eofru] = intval($v_lnukr); // obf
						} // obf
						//if ($v_rxbhq['short_version'] >= 'LAME3.90') { // obf
						if ((($v_rxbhq['integer_version'][0] * 1000) + $v_rxbhq['integer_version'][1]) >= 3090) { // cannot use string version compare, may have "LAME3.90" or "LAME3.100" -- see https://github.com/JamesHeinrich/getID3/issues/207 // obf

							// extra 11 chars are not part of version string when LAMEtag present // obf
							unset($v_rxbhq['long_version']); // obf

							// It the LAME tag was only introduced in LAME v3.90 // obf
							// https://wiki.hydrogenaud.io/index.php/LAME#VBR_header_and_LAME_tag // obf
							// https://hydrogenaud.io/index.php?topic=9933 // obf

							// Offsets of various bytes in http://gabriel.mp3-tech.org/mp3infotag.html // obf
							// are assuming a 'Xing' identifier offset of 0x24, which is the case for // obf
							// MPEG-1 non-mono, but not for other combinations // obf
							$v_aevex = $v_ozdzo - 0x24; // obf

							// shortcuts // obf
							$v_rxbhq['RGAD']    = array('track'=>array(), 'album'=>array()); // obf
							$v_eisuk       = &$v_rxbhq['RGAD']; // obf
							$v_ihibk = &$v_eisuk['track']; // obf
							$v_xjwtr = &$v_eisuk['album']; // obf
							$v_rxbhq['raw'] = array(); // obf
							$v_gqxqo    = &$v_rxbhq['raw']; // obf

							// byte $9B  VBR Quality // obf
							// This field is there to indicate a quality level, although the scale was not precised in the original Xing specifications. // obf
							// Actually overwrites original Xing bytes // obf
							unset($v_dptcl['VBR_scale']); // obf
							$v_rxbhq['vbr_quality'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0x9B, 1)); // obf

							// bytes $9C-$v_zqwkz  Encoder short VersionString // obf
							$v_rxbhq['short_version'] = substr($v_hglle, $v_aevex + 0x9C, 9); // obf

							// byte $v_bqvua  Info Tag revision + VBR method // obf
							$v_yggbk = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xA5, 1)); // obf

							$v_rxbhq['tag_revision']   = ($v_yggbk & 0xF0) >> 4; // obf
							$v_gqxqo['vbr_method'] =  $v_yggbk & 0x0F; // obf
							$v_rxbhq['vbr_method']     = self::LAMEvbrMethodLookup($v_gqxqo['vbr_method']); // obf
							$v_dptcl['bitrate_mode']        = substr($v_rxbhq['vbr_method'], 0, 3); // usually either 'cbr' or 'vbr', but truncates 'vbr-old / vbr-rh' to 'vbr' // obf

							// byte $v_xajgc  Lowpass filter value // obf
							$v_rxbhq['lowpass_frequency'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xA6, 1)) * 100; // obf

							// bytes $v_vcoqw-$v_ifive  Replay Gain // obf
							// https://web.archive.org/web/20021015212753/http://privatewww.essex.ac.uk/~djmrob/replaygain/rg_data_format.html // obf
							// bytes $v_vcoqw-$v_tofpc : 32 bit floating point "Peak signal amplitude" // obf
							if ($v_rxbhq['short_version'] >= 'LAME3.94b') { // obf
								// LAME 3.94a16 and later - 9.23 fixed point // obf
								// ie 0x0059E2EE / (2^23) = 5890798 / 8388608 = 0.7022378444671630859375 // obf
								$v_eisuk['peak_amplitude'] = (float) ((getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xA7, 4))) / 8388608); // obf
							} else { // obf
								// LAME 3.94a15 and earlier - 32-bit floating point // obf
								// Actually 3.94a16 will fall in here too and be WRONG, but is hard to detect 3.94a16 vs 3.94a15 // obf
								$v_eisuk['peak_amplitude'] = getid3_lib::LittleEndian2Float(substr($v_hglle, $v_aevex + 0xA7, 4)); // obf
							} // obf
							if ($v_eisuk['peak_amplitude'] == 0) { // obf
								unset($v_eisuk['peak_amplitude']); // obf
							} else { // obf
								$v_eisuk['peak_db'] = getid3_lib::RGADamplitude2dB($v_eisuk['peak_amplitude']); // obf
							} // obf

							$v_gqxqo['RGAD_track']      =   getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xAB, 2)); // obf
							$v_gqxqo['RGAD_album']      =   getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xAD, 2)); // obf


							if ($v_gqxqo['RGAD_track'] != 0) { // obf

								$v_ihibk['raw']['name']        = ($v_gqxqo['RGAD_track'] & 0xE000) >> 13; // obf
								$v_ihibk['raw']['originator']  = ($v_gqxqo['RGAD_track'] & 0x1C00) >> 10; // obf
								$v_ihibk['raw']['sign_bit']    = ($v_gqxqo['RGAD_track'] & 0x0200) >> 9; // obf
								$v_ihibk['raw']['gain_adjust'] =  $v_gqxqo['RGAD_track'] & 0x01FF; // obf
								$v_ihibk['name']       = getid3_lib::RGADnameLookup($v_ihibk['raw']['name']); // obf
								$v_ihibk['originator'] = getid3_lib::RGADoriginatorLookup($v_ihibk['raw']['originator']); // obf
								$v_ihibk['gain_db']    = getid3_lib::RGADadjustmentLookup($v_ihibk['raw']['gain_adjust'], $v_ihibk['raw']['sign_bit']); // obf

								if (!empty($v_eisuk['peak_amplitude'])) { // obf
									$v_vjmpi['replay_gain']['track']['peak']   = $v_eisuk['peak_amplitude']; // obf
								} // obf
								$v_vjmpi['replay_gain']['track']['originator'] = $v_ihibk['originator']; // obf
								$v_vjmpi['replay_gain']['track']['adjustment'] = $v_ihibk['gain_db']; // obf
							} else { // obf
								unset($v_eisuk['track']); // obf
							} // obf
							if ($v_gqxqo['RGAD_album'] != 0) { // obf

								$v_xjwtr['raw']['name']        = ($v_gqxqo['RGAD_album'] & 0xE000) >> 13; // obf
								$v_xjwtr['raw']['originator']  = ($v_gqxqo['RGAD_album'] & 0x1C00) >> 10; // obf
								$v_xjwtr['raw']['sign_bit']    = ($v_gqxqo['RGAD_album'] & 0x0200) >> 9; // obf
								$v_xjwtr['raw']['gain_adjust'] = $v_gqxqo['RGAD_album'] & 0x01FF; // obf
								$v_xjwtr['name']       = getid3_lib::RGADnameLookup($v_xjwtr['raw']['name']); // obf
								$v_xjwtr['originator'] = getid3_lib::RGADoriginatorLookup($v_xjwtr['raw']['originator']); // obf
								$v_xjwtr['gain_db']    = getid3_lib::RGADadjustmentLookup($v_xjwtr['raw']['gain_adjust'], $v_xjwtr['raw']['sign_bit']); // obf

								if (!empty($v_eisuk['peak_amplitude'])) { // obf
									$v_vjmpi['replay_gain']['album']['peak']   = $v_eisuk['peak_amplitude']; // obf
								} // obf
								$v_vjmpi['replay_gain']['album']['originator'] = $v_xjwtr['originator']; // obf
								$v_vjmpi['replay_gain']['album']['adjustment'] = $v_xjwtr['gain_db']; // obf
							} else { // obf
								unset($v_eisuk['album']); // obf
							} // obf
							if (empty($v_eisuk)) { // obf
								unset($v_rxbhq['RGAD']); // obf
							} // obf


							// byte $v_asmdj  Encoding flags + ATH Type // obf
							$v_wgnub = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xAF, 1)); // obf
							$v_rxbhq['encoding_flags']['nspsytune']   = (bool) ($v_wgnub & 0x10); // obf
							$v_rxbhq['encoding_flags']['nssafejoint'] = (bool) ($v_wgnub & 0x20); // obf
							$v_rxbhq['encoding_flags']['nogap_next']  = (bool) ($v_wgnub & 0x40); // obf
							$v_rxbhq['encoding_flags']['nogap_prev']  = (bool) ($v_wgnub & 0x80); // obf
							$v_rxbhq['ath_type']                      =         $v_wgnub & 0x0F; // obf

							// byte $v_wsbbe  if ABR {specified bitrate} else {minimal bitrate} // obf
							$v_rxbhq['raw']['abrbitrate_minbitrate'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xB0, 1)); // obf
							if ($v_gqxqo['vbr_method'] == 2) { // Average BitRate (ABR) // obf
								$v_rxbhq['bitrate_abr'] = $v_rxbhq['raw']['abrbitrate_minbitrate']; // obf
							} elseif ($v_gqxqo['vbr_method'] == 1) { // Constant BitRate (CBR) // obf
								// ignore // obf
							} elseif ($v_rxbhq['raw']['abrbitrate_minbitrate'] > 0) { // Variable BitRate (VBR) - minimum bitrate // obf
								$v_rxbhq['bitrate_min'] = $v_rxbhq['raw']['abrbitrate_minbitrate']; // obf
							} // obf

							// bytes $v_jmxcp-$v_sjgve  Encoder delays // obf
							$v_vdbji = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xB1, 3)); // obf
							$v_rxbhq['encoder_delay'] = ($v_vdbji & 0xFFF000) >> 12; // obf
							$v_rxbhq['end_padding']   =  $v_vdbji & 0x000FFF; // obf

							// byte $v_rxktq  Misc // obf
							$v_mfksc = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xB4, 1)); // obf
							$v_gqxqo['noise_shaping']       = ($v_mfksc & 0x03); // obf
							$v_gqxqo['stereo_mode']         = ($v_mfksc & 0x1C) >> 2; // obf
							$v_gqxqo['not_optimal_quality'] = ($v_mfksc & 0x20) >> 5; // obf
							$v_gqxqo['source_sample_freq']  = ($v_mfksc & 0xC0) >> 6; // obf
							$v_rxbhq['noise_shaping']       = $v_gqxqo['noise_shaping']; // obf
							$v_rxbhq['stereo_mode']         = self::LAMEmiscStereoModeLookup($v_gqxqo['stereo_mode']); // obf
							$v_rxbhq['not_optimal_quality'] = (bool) $v_gqxqo['not_optimal_quality']; // obf
							$v_rxbhq['source_sample_freq']  = self::LAMEmiscSourceSampleFrequencyLookup($v_gqxqo['source_sample_freq']); // obf

							// byte $v_dzgoj  MP3 Gain // obf
							$v_gqxqo['mp3_gain'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xB5, 1), false, true); // obf
							$v_rxbhq['mp3_gain_db']     = (getid3_lib::RGADamplitude2dB(2) / 4) * $v_gqxqo['mp3_gain']; // obf
							$v_rxbhq['mp3_gain_factor'] = pow(2, ($v_rxbhq['mp3_gain_db'] / 6)); // obf

							// bytes $v_rjpai-$v_gzkqm  Preset and surround info // obf
							$v_zoawu = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xB6, 2)); // obf
							// Reserved                                                    = ($v_zoawu & 0xC000); // obf
							$v_gqxqo['surround_info'] = ($v_zoawu & 0x3800); // obf
							$v_rxbhq['surround_info']     = self::LAMEsurroundInfoLookup($v_gqxqo['surround_info']); // obf
							$v_rxbhq['preset_used_id']    = ($v_zoawu & 0x07FF); // obf
							$v_rxbhq['preset_used']       = self::LAMEpresetUsedLookup($v_rxbhq); // obf
							if (!empty($v_rxbhq['preset_used_id']) && empty($v_rxbhq['preset_used'])) { // obf
								$v_cityt->warning('Unknown LAME preset used ('.$v_rxbhq['preset_used_id'].') - please report to info@getid3.org'); // obf
							} // obf
							if (($v_rxbhq['short_version'] == 'LAME3.90.') && !empty($v_rxbhq['preset_used_id'])) { // obf
								// this may change if 3.90.4 ever comes out // obf
								$v_rxbhq['short_version'] = 'LAME3.90.3'; // obf
							} // obf

							// bytes $v_vayup-$v_tojpq  MusicLength // obf
							$v_rxbhq['audio_bytes'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xB8, 4)); // obf
							$v_aogky = (($v_rxbhq['audio_bytes'] > 0) ? $v_rxbhq['audio_bytes'] : $v_dptcl['VBR_bytes']); // obf

							// bytes $v_syagm-$v_sayxo  MusicCRC // obf
							$v_rxbhq['music_crc']    = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xBC, 2)); // obf

							// bytes $v_ynpyc-$v_lelnu  CRC-16 of Info Tag // obf
							$v_rxbhq['lame_tag_crc'] = getid3_lib::BigEndian2Int(substr($v_hglle, $v_aevex + 0xBE, 2)); // obf


							// LAME CBR // obf
							if ($v_gqxqo['vbr_method'] == 1 && $v_dptcl['bitrate'] !== 'free') { // obf

								$v_dptcl['bitrate_mode'] = 'cbr'; // obf
								$v_dptcl['bitrate'] = self::ClosestStandardMP3Bitrate($v_dptcl['bitrate']); // obf
								$v_vjmpi['audio']['bitrate'] = $v_dptcl['bitrate']; // obf
								//if (empty($v_dptcl['bitrate']) || (!empty($v_rxbhq['bitrate_min']) && ($v_rxbhq['bitrate_min'] != 255))) { // obf
								//	$v_dptcl['bitrate'] = $v_rxbhq['bitrate_min']; // obf
								//} // obf

							} // obf

						} // obf
					} // obf
				} // obf

			} else { // obf

				// not Fraunhofer or Xing VBR methods, most likely CBR (but could be VBR with no header) // obf
				$v_dptcl['bitrate_mode'] = 'cbr'; // obf
				if ($v_kxlbk) { // obf
					$v_dptcl['bitrate_mode'] = 'vbr'; // obf
					if ($v_cityt->RecursiveFrameScanning($v_fuvin, $v_qhquk, true)) { // obf
						$v_kxlbk = false; // obf
						$v_dptcl['bitrate_mode'] = 'cbr'; // obf
					} // obf
					if ($v_dptcl['bitrate_mode'] == 'vbr') { // obf
						$v_cityt->warning('VBR file with no VBR header. Bitrate values calculated from actual frame bitrates.'); // obf
					} // obf
				} // obf

			} // obf

		} // obf

		if (($v_aogky > 0) && ($v_aogky != ($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']))) { // obf
			if ($v_aogky > ($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset'])) { // obf
				if ($v_cityt->isDependencyFor('matroska') || $v_cityt->isDependencyFor('riff')) { // obf
					// ignore, audio data is broken into chunks so will always be data "missing" // obf
				} // obf
				elseif (($v_aogky - ($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset'])) == 1) { // obf
					$v_cityt->warning('Last byte of data truncated (this is a known bug in Meracl ID3 Tag Writer before v1.3.5)'); // obf
				} // obf
				else { // obf
					$v_cityt->warning('Probable truncated file: expecting '.$v_aogky.' bytes of audio data, only found '.($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']).' (short by '.($v_aogky - ($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset'])).' bytes)'); // obf
				} // obf
			} else { // obf
				if ((($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']) - $v_aogky) == 1) { // obf
				//	$v_dmmra = $v_cityt->ftell(); // obf
				//	$v_cityt->fseek($v_vjmpi['avdataend']); // obf
				//	$v_jtoni = $v_cityt->fread(1); // obf
				//	$v_cityt->fseek($v_dmmra); // obf
				//	if ($v_jtoni === "\x00") { // obf
						$v_vjmpi['avdataend']--; // obf
				//		$v_cityt->warning('Extra null byte at end of MP3 data assumed to be RIFF padding and therefore ignored'); // obf
				//	} else { // obf
				//		$v_cityt->warning('Too much data in file: expecting '.$v_aogky.' bytes of audio data, found '.($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']).' ('.(($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']) - $v_aogky).' bytes too many)'); // obf
				//	} // obf
				} else { // obf
					$v_cityt->warning('Too much data in file: expecting '.$v_aogky.' bytes of audio data, found '.($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']).' ('.(($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']) - $v_aogky).' bytes too many)'); // obf
				} // obf
			} // obf
		} // obf

		if (($v_dptcl['bitrate'] == 'free') && empty($v_vjmpi['audio']['bitrate'])) { // obf
			if (($v_fuvin == $v_vjmpi['avdataoffset']) && empty($v_dptcl['VBR_frames'])) { // obf
				$v_xzmum = $v_cityt->FreeFormatFrameLength($v_fuvin, true); // obf
				if ($v_xzmum > 0) { // obf
					$v_dptcl['framelength'] = $v_xzmum; // obf
					if ($v_dptcl['layer'] == '1') { // obf
						// BitRate = (((FrameLengthInBytes / 4) - Padding) * SampleRate) / 12 // obf
						$v_vjmpi['audio']['bitrate'] = ((($v_xzmum / 4) - intval($v_dptcl['padding'])) * $v_dptcl['sample_rate']) / 12; // obf
					} else { // obf
						// Bitrate = ((FrameLengthInBytes - Padding) * SampleRate) / 144 // obf
						$v_vjmpi['audio']['bitrate'] = (($v_xzmum - intval($v_dptcl['padding'])) * $v_dptcl['sample_rate']) / 144; // obf
					} // obf
				} else { // obf
					$v_cityt->error('Error calculating frame length of free-format MP3 without Xing/LAME header'); // obf
				} // obf
			} // obf
		} // obf

		if (isset($v_dptcl['VBR_frames']) ? $v_dptcl['VBR_frames'] : '') { // obf
			switch ($v_dptcl['bitrate_mode']) { // obf
				case 'vbr': // obf
				case 'abr': // obf
					$v_mqbqh = 1152; // obf
					if (($v_dptcl['version'] == '1') && ($v_dptcl['layer'] == 1)) { // obf
						$v_mqbqh = 384; // obf
					} elseif ((($v_dptcl['version'] == '2') || ($v_dptcl['version'] == '2.5')) && ($v_dptcl['layer'] == 3)) { // obf
						$v_mqbqh = 576; // obf
					} // obf
					$v_dptcl['VBR_bitrate'] = (isset($v_dptcl['VBR_bytes']) ? (($v_dptcl['VBR_bytes'] / $v_dptcl['VBR_frames']) * 8) * ($v_vjmpi['audio']['sample_rate'] / $v_mqbqh) : 0); // obf
					if ($v_dptcl['VBR_bitrate'] > 0) { // obf
						$v_vjmpi['audio']['bitrate']       = $v_dptcl['VBR_bitrate']; // obf
						$v_dptcl['bitrate'] = $v_dptcl['VBR_bitrate']; // to avoid confusion // obf
					} // obf
					break; // obf
			} // obf
		} // obf

		// End variable-bitrate headers // obf
		//////////////////////////////////////////////////////////////////////////////////// // obf

		if ($v_kxlbk) { // obf

			if (!$v_cityt->RecursiveFrameScanning($v_fuvin, $v_qhquk, $v_iljzs)) { // obf
				return false; // obf
			} // obf
			if (!empty($v_cityt->getid3->info['mp3_validity_check_bitrates']) && !empty($v_dptcl['bitrate_mode']) && ($v_dptcl['bitrate_mode'] == 'vbr') && !empty($v_dptcl['VBR_bitrate'])) { // obf
				// https://github.com/JamesHeinrich/getID3/issues/287 // obf
				if (count(array_keys($v_cityt->getid3->info['mp3_validity_check_bitrates'])) == 1) { // obf
					list($v_iduyr) = array_keys($v_cityt->getid3->info['mp3_validity_check_bitrates']); // obf
					$v_ablkz = abs($v_dptcl['VBR_bitrate'] - $v_iduyr) / $v_iduyr; // obf
					if ($v_ablkz < 0.01) { // obf
						// VBR header bitrate may differ slightly from true bitrate of frames, perhaps accounting for overhead of VBR header frame itself? // obf
						// If measured CBR bitrate is within 1% of specified bitrate in VBR header then assume that file is truly CBR // obf
						$v_dptcl['bitrate_mode'] = 'cbr'; // obf
						//$v_cityt->warning('VBR header ignored, assuming CBR '.round($v_iduyr / 1000).'kbps based on scan of '.$v_cityt->mp3_valid_check_frames.' frames'); // obf
					} // obf
				} // obf
			} // obf
			if (isset($v_cityt->getid3->info['mp3_validity_check_bitrates'])) { // obf
				unset($v_cityt->getid3->info['mp3_validity_check_bitrates']); // obf
			} // obf

		} // obf


		//if (false) { // obf
		//    // experimental side info parsing section - not returning anything useful yet // obf
		// // obf
		//    $v_aqgwp = getid3_lib::BigEndian2Bin($v_nhyii); // obf
		//    $v_cgyvu = 0; // obf
		// // obf
		//    if ($v_dptcl['version'] == '1') { // obf
		//        if ($v_dptcl['channelmode'] == 'mono') { // obf
		//            // MPEG-1 (mono) // obf
		//            $v_dptcl['side_info']['main_data_begin'] = substr($v_aqgwp, $v_cgyvu, 9); // obf
		//            $v_cgyvu += 9; // obf
		//            $v_cgyvu += 5; // obf
		//        } else { // obf
		//            // MPEG-1 (stereo, joint-stereo, dual-channel) // obf
		//            $v_dptcl['side_info']['main_data_begin'] = substr($v_aqgwp, $v_cgyvu, 9); // obf
		//            $v_cgyvu += 9; // obf
		//            $v_cgyvu += 3; // obf
		//        } // obf
		//    } else { // 2 or 2.5 // obf
		//        if ($v_dptcl['channelmode'] == 'mono') { // obf
		//            // MPEG-2, MPEG-2.5 (mono) // obf
		//            $v_dptcl['side_info']['main_data_begin'] = substr($v_aqgwp, $v_cgyvu, 8); // obf
		//            $v_cgyvu += 8; // obf
		//            $v_cgyvu += 1; // obf
		//        } else { // obf
		//            // MPEG-2, MPEG-2.5 (stereo, joint-stereo, dual-channel) // obf
		//            $v_dptcl['side_info']['main_data_begin'] = substr($v_aqgwp, $v_cgyvu, 8); // obf
		//            $v_cgyvu += 8; // obf
		//            $v_cgyvu += 2; // obf
		//        } // obf
		//    } // obf
		// // obf
		//    if ($v_dptcl['version'] == '1') { // obf
		//        for ($v_tfnez = 0; $v_tfnez < $v_vjmpi['audio']['channels']; $v_tfnez++) { // obf
		//            for ($v_aotwe = 0; $v_aotwe < 4; $v_aotwe++) { // obf
		//                $v_dptcl['scfsi'][$v_tfnez][$v_aotwe] = substr($v_aqgwp, $v_cgyvu, 1); // obf
		//                $v_cgyvu += 2; // obf
		//            } // obf
		//        } // obf
		//    } // obf
		//    for ($v_wcelm = 0; $v_wcelm < (($v_dptcl['version'] == '1') ? 2 : 1); $v_wcelm++) { // obf
		//        for ($v_tfnez = 0; $v_tfnez < $v_vjmpi['audio']['channels']; $v_tfnez++) { // obf
		//            $v_dptcl['part2_3_length'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 12); // obf
		//            $v_cgyvu += 12; // obf
		//            $v_dptcl['big_values'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 9); // obf
		//            $v_cgyvu += 9; // obf
		//            $v_dptcl['global_gain'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 8); // obf
		//            $v_cgyvu += 8; // obf
		//            if ($v_dptcl['version'] == '1') { // obf
		//                $v_dptcl['scalefac_compress'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 4); // obf
		//                $v_cgyvu += 4; // obf
		//            } else { // obf
		//                $v_dptcl['scalefac_compress'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 9); // obf
		//                $v_cgyvu += 9; // obf
		//            } // obf
		//            $v_dptcl['window_switching_flag'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 1); // obf
		//            $v_cgyvu += 1; // obf
		// // obf
		//            if ($v_dptcl['window_switching_flag'][$v_wcelm][$v_tfnez] == '1') { // obf
		// // obf
		//                $v_dptcl['block_type'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 2); // obf
		//                $v_cgyvu += 2; // obf
		//                $v_dptcl['mixed_block_flag'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 1); // obf
		//                $v_cgyvu += 1; // obf
		// // obf
		//                for ($v_zpljg = 0; $v_zpljg < 2; $v_zpljg++) { // obf
		//                    $v_dptcl['table_select'][$v_wcelm][$v_tfnez][$v_zpljg] = substr($v_aqgwp, $v_cgyvu, 5); // obf
		//                    $v_cgyvu += 5; // obf
		//                } // obf
		//                $v_dptcl['table_select'][$v_wcelm][$v_tfnez][2] = 0; // obf
		// // obf
		//                for ($v_xifiy = 0; $v_xifiy < 3; $v_xifiy++) { // obf
		//                    $v_dptcl['subblock_gain'][$v_wcelm][$v_tfnez][$v_xifiy] = substr($v_aqgwp, $v_cgyvu, 3); // obf
		//                    $v_cgyvu += 3; // obf
		//                } // obf
		// // obf
		//            } else { // obf
		// // obf
		//                for ($v_zpljg = 0; $v_zpljg < 3; $v_zpljg++) { // obf
		//                    $v_dptcl['table_select'][$v_wcelm][$v_tfnez][$v_zpljg] = substr($v_aqgwp, $v_cgyvu, 5); // obf
		//                    $v_cgyvu += 5; // obf
		//                } // obf
		// // obf
		//                $v_dptcl['region0_count'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 4); // obf
		//                $v_cgyvu += 4; // obf
		//                $v_dptcl['region1_count'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 3); // obf
		//                $v_cgyvu += 3; // obf
		//                $v_dptcl['block_type'][$v_wcelm][$v_tfnez] = 0; // obf
		//            } // obf
		// // obf
		//            if ($v_dptcl['version'] == '1') { // obf
		//                $v_dptcl['preflag'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 1); // obf
		//                $v_cgyvu += 1; // obf
		//            } // obf
		//            $v_dptcl['scalefac_scale'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 1); // obf
		//            $v_cgyvu += 1; // obf
		//            $v_dptcl['count1table_select'][$v_wcelm][$v_tfnez] = substr($v_aqgwp, $v_cgyvu, 1); // obf
		//            $v_cgyvu += 1; // obf
		//        } // obf
		//    } // obf
		//} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_fuvin // obf
	 * @param int $v_qhquk // obf
	 * @param bool $v_iljzs // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function RecursiveFrameScanning(&$v_fuvin, &$v_qhquk, $v_iljzs) { // obf
		$v_vjmpi = &$v_cityt->getid3->info; // obf
		$v_cuslu = array('error' => array(), 'warning'=> array(), 'avdataend' => $v_vjmpi['avdataend'], 'avdataoffset' => $v_vjmpi['avdataoffset']); // obf
		$v_cityt->decodeMPEGaudioHeader($v_fuvin, $v_cuslu, false); // obf

		$v_vjmpi['mp3_validity_check_bitrates'] = array(); // obf
		for ($v_xoczv = 0; $v_xoczv < $v_cityt->mp3_valid_check_frames; $v_xoczv++) { // obf
			// check next (default: 50) frames for validity, to make sure we haven't run across a false synch // obf
			if (($v_qhquk + 4) >= $v_vjmpi['avdataend']) { // obf
				// end of file // obf
				return true; // obf
			} // obf

			$v_shtmu = array('error' => array(), 'warning' => array(), 'avdataend' => $v_vjmpi['avdataend'], 'avdataoffset'=>$v_vjmpi['avdataoffset']); // obf
			if ($v_cityt->decodeMPEGaudioHeader($v_qhquk, $v_shtmu, false)) { // obf
				/** @phpstan-ignore-next-line */ // obf
				getid3_lib::safe_inc($v_vjmpi['mp3_validity_check_bitrates'][$v_shtmu['mpeg']['audio']['bitrate']]); // obf
				if ($v_iljzs) { // obf
					// force CBR mode, used for trying to pick out invalid audio streams with valid(?) VBR headers, or VBR streams with no VBR header // obf
					if (!isset($v_shtmu['mpeg']['audio']['bitrate']) || !isset($v_cuslu['mpeg']['audio']['bitrate']) || ($v_shtmu['mpeg']['audio']['bitrate'] != $v_cuslu['mpeg']['audio']['bitrate'])) { // obf
						return false; // obf
					} // obf
				} // obf


				// next frame is OK, get ready to check the one after that // obf
				if (isset($v_shtmu['mpeg']['audio']['framelength']) && ($v_shtmu['mpeg']['audio']['framelength'] > 0)) { // obf
					$v_qhquk += $v_shtmu['mpeg']['audio']['framelength']; // obf
				} else { // obf
					$v_cityt->error('Frame at offset ('.$v_fuvin.') is has an invalid frame length.'); // obf
					return false; // obf
				} // obf

			} elseif (!empty($v_cuslu['mpeg']['audio']['framelength']) && (($v_qhquk + $v_cuslu['mpeg']['audio']['framelength']) > $v_vjmpi['avdataend'])) { // obf

				// it's not the end of the file, but there's not enough data left for another frame, so assume it's garbage/padding and return OK // obf
				return true; // obf

			} else { // obf

				// next frame is not valid, note the error and fail, so scanning can contiue for a valid frame sequence // obf
				$v_cityt->warning('Frame at offset ('.$v_fuvin.') is valid, but the next one at ('.$v_qhquk.') is not.'); // obf

				return false; // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param int  $v_fuvin // obf
	 * @param bool $v_drpwb // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public function FreeFormatFrameLength($v_fuvin, $v_drpwb=false) { // obf
		$v_vjmpi = &$v_cityt->getid3->info; // obf

		$v_cityt->fseek($v_fuvin); // obf
		$v_uocem = $v_cityt->fread(32768); // obf

		$v_fazoh = substr($v_uocem, 0, 4); // obf
		// may be different pattern due to padding // obf
		$v_frkqu = $v_fazoh[0].$v_fazoh[1].chr(ord($v_fazoh[2]) | 0x02).$v_fazoh[3]; // obf
		if ($v_frkqu === $v_fazoh) { // obf
			$v_frkqu = $v_fazoh[0].$v_fazoh[1].chr(ord($v_fazoh[2]) & 0xFD).$v_fazoh[3]; // obf
		} // obf

		$v_ioshm = false; // obf
		$v_dwpmt = strpos($v_uocem, $v_fazoh, 4); // obf
		$v_lwbiz = strpos($v_uocem, $v_frkqu, 4); // obf
		if ($v_dwpmt > 4) { // obf
			$v_ioshm = $v_dwpmt; // obf
		} // obf
		if (($v_lwbiz > 4) && ($v_lwbiz < $v_dwpmt)) { // obf
			$v_ioshm = $v_lwbiz; // obf
		} // obf
		if (!$v_ioshm) { // obf

			// LAME 3.88 has a different value for modeextension on the first frame vs the rest // obf
			$v_dwpmt = strpos($v_uocem, substr($v_fazoh, 0, 3), 4); // obf
			$v_lwbiz = strpos($v_uocem, substr($v_frkqu, 0, 3), 4); // obf

			if ($v_dwpmt > 4) { // obf
				$v_ioshm = $v_dwpmt; // obf
			} // obf
			if (($v_lwbiz > 4) && ($v_lwbiz < $v_dwpmt)) { // obf
				$v_ioshm = $v_lwbiz; // obf
			} // obf
			if (!$v_ioshm) { // obf
				$v_cityt->error('Cannot find next free-format synch pattern ('.getid3_lib::PrintHexBytes($v_fazoh).' or '.getid3_lib::PrintHexBytes($v_frkqu).') after offset '.$v_fuvin); // obf
				return false; // obf
			} else { // obf
				$v_cityt->warning('ModeExtension varies between first frame and other frames (known free-format issue in LAME 3.88)'); // obf
				$v_vjmpi['audio']['codec']   = 'LAME'; // obf
				$v_vjmpi['audio']['encoder'] = 'LAME3.88'; // obf
				$v_fazoh = substr($v_fazoh, 0, 3); // obf
				$v_frkqu = substr($v_frkqu, 0, 3); // obf
			} // obf
		} // obf

		if ($v_drpwb) { // obf

			$v_asqmt = array(); // obf
			$v_pujil = $v_fuvin + $v_ioshm; // obf
			while ($v_pujil < ($v_vjmpi['avdataend'] - 6)) { // obf
				$v_cityt->fseek($v_pujil - 1); // obf
				$v_vhsoh = $v_cityt->fread(6); // obf
				if ((substr($v_vhsoh, 1, strlen($v_fazoh)) == $v_fazoh) || (substr($v_vhsoh, 1, strlen($v_frkqu)) == $v_frkqu)) { // obf
					// good - found where expected // obf
					$v_asqmt[] = $v_ioshm; // obf
				} elseif ((substr($v_vhsoh, 0, strlen($v_fazoh)) == $v_fazoh) || (substr($v_vhsoh, 0, strlen($v_frkqu)) == $v_frkqu)) { // obf
					// ok - found one byte earlier than expected (last frame wasn't padded, first frame was) // obf
					$v_asqmt[] = ($v_ioshm - 1); // obf
					$v_pujil--; // obf
				} elseif ((substr($v_vhsoh, 2, strlen($v_fazoh)) == $v_fazoh) || (substr($v_vhsoh, 2, strlen($v_frkqu)) == $v_frkqu)) { // obf
					// ok - found one byte later than expected (last frame was padded, first frame wasn't) // obf
					$v_asqmt[] = ($v_ioshm + 1); // obf
					$v_pujil++; // obf
				} else { // obf
					$v_cityt->error('Did not find expected free-format sync pattern at offset '.$v_pujil); // obf
					return false; // obf
				} // obf
				$v_pujil += $v_ioshm; // obf
			} // obf
			if (count($v_asqmt) > 0) { // obf
				$v_ioshm = intval(round(array_sum($v_asqmt) / count($v_asqmt))); // obf
			} // obf
		} // obf
		return $v_ioshm; // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function getOnlyMPEGaudioInfoBruteForce() { // obf
		$v_ksguq   = array(); // obf
		$v_kdbum    = array(); // obf
		$v_ebqfw   = array(); // obf
		$v_katni       = self::MPEGaudioVersionArray(); // obf
		$v_sllde         = self::MPEGaudioLayerArray(); // obf
		$v_leoru       = self::MPEGaudioBitrateArray(); // obf
		$v_lobhh     = self::MPEGaudioFrequencyArray(); // obf
		$v_tkgtg   = self::MPEGaudioChannelModeArray(); // obf
		$v_jthwq = self::MPEGaudioModeExtensionArray(); // obf
		$v_zonhm      = self::MPEGaudioEmphasisArray(); // obf
		$v_qpkyc        = array(); // obf
		$v_bouai          = array(); // obf
		$v_azfrp        = array(); // obf
		$v_odnoi        = array(); // obf
		$v_wrvuv      = array(); // obf
		$v_wcjxj                 = array(); // obf
		$v_wcjxj['bitrate']      = array(); // obf
		$v_wcjxj['frequency']    = array(); // obf
		$v_wcjxj['layer']        = array(); // obf
		$v_wcjxj['version']      = array(); // obf
		$v_wcjxj['padding']      = array(); // obf

		$v_vjmpi = &$v_cityt->getid3->info; // obf
		$v_cityt->fseek($v_vjmpi['avdataoffset']); // obf

		$v_ytxjn = 5000; // obf
		$v_rjnak  = 0; // obf

		$v_pzklw = $v_vjmpi['avdataoffset']; // obf
		while ($v_cityt->ftell() < $v_vjmpi['avdataend']) { // obf
			set_time_limit(30); // obf
			$v_budqs = $v_cityt->fread(4); // obf
			if (strlen($v_budqs) < 4) { // obf
				break; // obf
			} // obf
			if ($v_budqs[0] != "\xFF") { // obf
				for ($v_xoczv = 1; $v_xoczv < 4; $v_xoczv++) { // obf
					if ($v_budqs[$v_xoczv] == "\xFF") { // obf
						$v_cityt->fseek($v_xoczv - 4, SEEK_CUR); // obf
						continue 2; // obf
					} // obf
				} // obf
				continue; // obf
			} // obf
			if (!isset($v_ksguq[$v_budqs])) { // obf
				$v_ksguq[$v_budqs] = self::MPEGaudioHeaderDecode($v_budqs); // obf
			} // obf
			if (!isset($v_kdbum[$v_budqs])) { // obf
				$v_kdbum[$v_budqs] = self::MPEGaudioHeaderValid($v_ksguq[$v_budqs], false, false); // obf
			} // obf
			if ($v_kdbum[$v_budqs]) { // obf

				if (!isset($v_ebqfw[$v_budqs])) { // obf
					$v_qpkyc[$v_budqs]   = $v_katni[$v_ksguq[$v_budqs]['version']]; // obf
					$v_bouai[$v_budqs]     = $v_sllde[$v_ksguq[$v_budqs]['layer']]; // obf
					$v_azfrp[$v_budqs]   = $v_leoru[$v_qpkyc[$v_budqs]][$v_bouai[$v_budqs]][$v_ksguq[$v_budqs]['bitrate']]; // obf
					$v_odnoi[$v_budqs]   = (bool) $v_ksguq[$v_budqs]['padding']; // obf
					$v_wrvuv[$v_budqs] = $v_lobhh[$v_qpkyc[$v_budqs]][$v_ksguq[$v_budqs]['sample_rate']]; // obf
					$v_ebqfw[$v_budqs] = self::MPEGaudioFrameLength( // obf
						$v_azfrp[$v_budqs], // obf
						$v_qpkyc[$v_budqs], // obf
						$v_bouai[$v_budqs], // obf
						$v_odnoi[$v_budqs], // obf
						$v_wrvuv[$v_budqs]); // obf
				} // obf
				if ($v_ebqfw[$v_budqs] > 4) { // obf
					$v_efdxu = $v_cityt->ftell(); // obf
					$v_cityt->fseek($v_ebqfw[$v_budqs] - 4, SEEK_CUR); // obf
					$v_jlzzw = $v_cityt->fread(4); // obf
					if ($v_jlzzw[0] == "\xFF") { // obf
						if (!isset($v_ksguq[$v_jlzzw])) { // obf
							$v_ksguq[$v_jlzzw] = self::MPEGaudioHeaderDecode($v_jlzzw); // obf
						} // obf
						if (!isset($v_kdbum[$v_jlzzw])) { // obf
							$v_kdbum[$v_jlzzw] = self::MPEGaudioHeaderValid($v_ksguq[$v_jlzzw], false, false); // obf
						} // obf
						if ($v_kdbum[$v_jlzzw]) { // obf
							$v_cityt->fseek(-4, SEEK_CUR); // obf

							$v_wcjxj['bitrate'][$v_azfrp[$v_budqs]] = isset($v_wcjxj['bitrate'][$v_azfrp[$v_budqs]]) ? ++$v_wcjxj['bitrate'][$v_azfrp[$v_budqs]] : 1; // obf
							$v_wcjxj['layer'][$v_bouai[$v_budqs]] = isset($v_wcjxj['layer'][$v_bouai[$v_budqs]]) ? ++$v_wcjxj['layer'][$v_bouai[$v_budqs]] : 1; // obf
							$v_wcjxj['version'][$v_qpkyc[$v_budqs]] = isset($v_wcjxj['version'][$v_qpkyc[$v_budqs]]) ? ++$v_wcjxj['version'][$v_qpkyc[$v_budqs]] : 1; // obf
							$v_wcjxj['padding'][intval($v_odnoi[$v_budqs])] = isset($v_wcjxj['padding'][intval($v_odnoi[$v_budqs])]) ? ++$v_wcjxj['padding'][intval($v_odnoi[$v_budqs])] : 1; // obf
							$v_wcjxj['frequency'][$v_wrvuv[$v_budqs]] = isset($v_wcjxj['frequency'][$v_wrvuv[$v_budqs]]) ? ++$v_wcjxj['frequency'][$v_wrvuv[$v_budqs]] : 1; // obf
							if (++$v_rjnak >= $v_ytxjn) { // obf
								$v_gqhqa = getid3_lib::SafeDiv($v_cityt->ftell() - $v_vjmpi['avdataoffset'], $v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']); // obf
								$v_cityt->warning('too many MPEG audio frames to scan, only scanned first '.$v_ytxjn.' frames ('.number_format($v_gqhqa * 100, 1).'% of file) and extrapolated distribution, playtime and bitrate may be incorrect.'); // obf
								foreach ($v_wcjxj as $v_zpyuw => $v_zgdkq) { // obf
									foreach ($v_zgdkq as $v_kpfic => $v_cvbpf) { // obf
										$v_wcjxj[$v_zpyuw][$v_kpfic] = $v_gqhqa ? round($v_cvbpf / $v_gqhqa) : 1; // obf
									} // obf
								} // obf
								break; // obf
							} // obf
							continue; // obf
						} // obf
					} // obf
					unset($v_jlzzw); // obf
					$v_cityt->fseek($v_efdxu - 3); // obf
				} // obf

			} // obf
		} // obf
		foreach ($v_wcjxj as $v_eofru => $v_fvqaf) { // obf
			ksort($v_wcjxj[$v_eofru], SORT_NUMERIC); // obf
		} // obf
		ksort($v_wcjxj['version'], SORT_STRING); // obf
		$v_vjmpi['mpeg']['audio']['bitrate_distribution']   = $v_wcjxj['bitrate']; // obf
		$v_vjmpi['mpeg']['audio']['frequency_distribution'] = $v_wcjxj['frequency']; // obf
		$v_vjmpi['mpeg']['audio']['layer_distribution']     = $v_wcjxj['layer']; // obf
		$v_vjmpi['mpeg']['audio']['version_distribution']   = $v_wcjxj['version']; // obf
		$v_vjmpi['mpeg']['audio']['padding_distribution']   = $v_wcjxj['padding']; // obf
		if (count($v_wcjxj['version']) > 1) { // obf
			$v_cityt->error('Corrupt file - more than one MPEG version detected'); // obf
		} // obf
		if (count($v_wcjxj['layer']) > 1) { // obf
			$v_cityt->error('Corrupt file - more than one MPEG layer detected'); // obf
		} // obf
		if (count($v_wcjxj['frequency']) > 1) { // obf
			$v_cityt->error('Corrupt file - more than one MPEG sample rate detected'); // obf
		} // obf


		$v_uzzfk = 0; // obf
		foreach ($v_wcjxj['bitrate'] as $v_bufrd => $v_chbpq) { // obf
			if ($v_bufrd != 'free') { // obf
				$v_uzzfk += ($v_bufrd * $v_chbpq); // obf
			} // obf
		} // obf
		$v_vjmpi['mpeg']['audio']['frame_count']  = array_sum($v_wcjxj['bitrate']); // obf
		if ($v_vjmpi['mpeg']['audio']['frame_count'] == 0) { // obf
			$v_cityt->error('no MPEG audio frames found'); // obf
			return false; // obf
		} // obf
		$v_vjmpi['mpeg']['audio']['bitrate']      = ($v_uzzfk / $v_vjmpi['mpeg']['audio']['frame_count']); // obf
		$v_vjmpi['mpeg']['audio']['bitrate_mode'] = ((count($v_wcjxj['bitrate']) > 0) ? 'vbr' : 'cbr'); // obf
		$v_vjmpi['mpeg']['audio']['sample_rate']  = getid3_lib::array_max($v_wcjxj['frequency'], true); // obf

		$v_vjmpi['audio']['bitrate']      = $v_vjmpi['mpeg']['audio']['bitrate']; // obf
		$v_vjmpi['audio']['bitrate_mode'] = $v_vjmpi['mpeg']['audio']['bitrate_mode']; // obf
		$v_vjmpi['audio']['sample_rate']  = $v_vjmpi['mpeg']['audio']['sample_rate']; // obf
		$v_vjmpi['audio']['dataformat']   = 'mp'.getid3_lib::array_max($v_wcjxj['layer'], true); // obf
		$v_vjmpi['fileformat']            = $v_vjmpi['audio']['dataformat']; // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int  $v_srrnt // obf
	 * @param bool $v_cxquj // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function getOnlyMPEGaudioInfo($v_srrnt, $v_cxquj=false) { // obf
		// looks for synch, decodes MPEG audio header // obf

		$v_vjmpi = &$v_cityt->getid3->info; // obf

		static $v_katni; // obf
		static $v_sllde; // obf
		static $v_leoru; // obf
		if (empty($v_katni)) { // obf
			$v_katni = self::MPEGaudioVersionArray(); // obf
			$v_sllde   = self::MPEGaudioLayerArray(); // obf
			$v_leoru = self::MPEGaudioBitrateArray(); // obf
		} // obf

		$v_cityt->fseek($v_srrnt); // obf
		$v_swowt = min(128 * 1024, $v_vjmpi['avdataend'] - $v_srrnt); // obf
		if ($v_swowt <= 0) { // obf
			$v_cityt->error('Invalid $v_swowt at offset '.$v_srrnt); // obf
			return false; // obf
		} // obf
		$v_iuouo = $v_cityt->fread($v_swowt); // obf
		$v_swowt = strlen($v_iuouo); // obf
		$v_vjwel = 0; // obf
		$v_mldoi = 0; // obf
		$v_cucvm = 1000; // obf
		$v_gawpz = null; // obf
		while ($v_vjwel < $v_swowt) { // obf
			if ((($v_srrnt + $v_vjwel)  < $v_vjmpi['avdataend']) && !$v_cityt->feof()) { // obf

				if ($v_vjwel > $v_swowt) { // obf
					// if a synch's not found within the first 128k bytes, then give up // obf
					$v_cityt->error('Could not find valid MPEG audio synch within the first '.round($v_swowt / 1024).'kB'); // obf
					if (isset($v_vjmpi['audio']['bitrate'])) { // obf
						unset($v_vjmpi['audio']['bitrate']); // obf
					} // obf
					if (isset($v_vjmpi['mpeg']['audio'])) { // obf
						unset($v_vjmpi['mpeg']['audio']); // obf
					} // obf
					if (empty($v_vjmpi['mpeg'])) { // obf
						unset($v_vjmpi['mpeg']); // obf
					} // obf
					return false; // obf
				} // obf
			} // obf

			if (($v_vjwel + 1) >= strlen($v_iuouo)) { // obf
				$v_cityt->error('Could not find valid MPEG synch before end of file'); // obf
				return false; // obf
			} // obf

			if (($v_iuouo[$v_vjwel] == "\xFF") && ($v_iuouo[($v_vjwel + 1)] > "\xE0")) { // possible synch detected // obf
				if (++$v_mldoi >= $v_cucvm) { // obf
					// https://github.com/JamesHeinrich/getID3/issues/286 // obf
					// corrupt files claiming to be MP3, with a large number of 0xFF bytes near the beginning, can cause this loop to take a very long time // obf
					// should have escape condition to avoid spending too much time scanning a corrupt file // obf
					// if a synch's not found within the first 128k bytes, then give up // obf
					$v_cityt->error('Could not find valid MPEG audio synch after scanning '.$v_mldoi.' candidate offsets'); // obf
					if (isset($v_vjmpi['audio']['bitrate'])) { // obf
						unset($v_vjmpi['audio']['bitrate']); // obf
					} // obf
					if (isset($v_vjmpi['mpeg']['audio'])) { // obf
						unset($v_vjmpi['mpeg']['audio']); // obf
					} // obf
					if (empty($v_vjmpi['mpeg'])) { // obf
						unset($v_vjmpi['mpeg']); // obf
					} // obf
					return false; // obf
				} // obf
				$v_bjoqo = null; // obf
				if (!isset($v_gawpz) && !isset($v_vjmpi['mpeg']['audio'])) { // obf
					$v_gawpz = $v_vjmpi; // obf
					$v_bjoqo = $v_srrnt + $v_vjwel; // obf
					if (!$v_cityt->decodeMPEGaudioHeader($v_bjoqo, $v_gawpz, false)) { // obf
						// if this is the first valid MPEG-audio frame, save it in case it's a VBR header frame and there's // obf
						// garbage between this frame and a valid sequence of MPEG-audio frames, to be restored below // obf
						unset($v_gawpz); // obf
					} // obf
				} // obf

				$v_cdrxj = $v_vjmpi; // only overwrite real data if valid header found // obf
				if ($v_cityt->decodeMPEGaudioHeader($v_srrnt + $v_vjwel, $v_cdrxj, true)) { // obf
					$v_vjmpi = $v_cdrxj; // obf
					$v_vjmpi['avdataoffset'] = $v_srrnt + $v_vjwel; // obf
					switch (isset($v_vjmpi['fileformat']) ? $v_vjmpi['fileformat'] : '') { // obf
						case '': // obf
						case 'id3': // obf
						case 'ape': // obf
						case 'mp3': // obf
							$v_vjmpi['fileformat']          = 'mp3'; // obf
							$v_vjmpi['audio']['dataformat'] = 'mp3'; // obf
							break; // obf
					} // obf
					if (isset($v_gawpz) && isset($v_gawpz['mpeg']['audio']['bitrate_mode']) && ($v_gawpz['mpeg']['audio']['bitrate_mode'] == 'vbr')) { // obf
						if (!(abs($v_vjmpi['audio']['bitrate'] - $v_gawpz['audio']['bitrate']) <= 1)) { // obf
							// If there is garbage data between a valid VBR header frame and a sequence // obf
							// of valid MPEG-audio frames the VBR data is no longer discarded. // obf
							$v_vjmpi = $v_gawpz; // obf
							$v_vjmpi['avdataoffset']        = $v_bjoqo; // obf
							$v_vjmpi['fileformat']          = 'mp3'; // obf
							$v_vjmpi['audio']['dataformat'] = 'mp3'; // obf
							$v_cdrxj                       = $v_vjmpi; // obf
							unset($v_cdrxj['mpeg']['audio']); // obf
							$v_vwczr = $v_bjoqo + $v_gawpz['mpeg']['audio']['framelength']; // obf
							$v_uoqcs   = $v_srrnt + $v_vjwel; // obf
							if ($v_cityt->decodeMPEGaudioHeader($v_uoqcs, $v_cdrxj, true, true)) { // obf
								$v_vjmpi = $v_cdrxj; // obf
								$v_vjmpi['avdataoffset'] = $v_uoqcs; // obf
								$v_cityt->warning('apparently-valid VBR header not used because could not find '.$v_cityt->mp3_valid_check_frames.' consecutive MPEG-audio frames immediately after VBR header (garbage data for '.($v_uoqcs - $v_vwczr).' bytes between '.$v_vwczr.' and '.$v_uoqcs.'), but did find valid CBR stream starting at '.$v_uoqcs); // obf
							} else { // obf
								$v_cityt->warning('using data from VBR header even though could not find '.$v_cityt->mp3_valid_check_frames.' consecutive MPEG-audio frames immediately after VBR header (garbage data for '.($v_uoqcs - $v_vwczr).' bytes between '.$v_vwczr.' and '.$v_uoqcs.')'); // obf
							} // obf
						} // obf
					} // obf
					if (isset($v_vjmpi['mpeg']['audio']['bitrate_mode']) && ($v_vjmpi['mpeg']['audio']['bitrate_mode'] == 'vbr') && !isset($v_vjmpi['mpeg']['audio']['VBR_method'])) { // obf
						// VBR file with no VBR header // obf
						$v_cxquj = true; // obf
					} // obf

					if ($v_cxquj) { // obf

						$v_vjmpi['mpeg']['audio']['stereo_distribution']  = array('stereo'=>0, 'joint stereo'=>0, 'dual channel'=>0, 'mono'=>0); // obf
						$v_vjmpi['mpeg']['audio']['version_distribution'] = array('1'=>0, '2'=>0, '2.5'=>0); // obf

						if ($v_vjmpi['mpeg']['audio']['version'] == '1') { // obf
							if ($v_vjmpi['mpeg']['audio']['layer'] == 3) { // obf
								$v_vjmpi['mpeg']['audio']['bitrate_distribution'] = array('free'=>0, 32000=>0, 40000=>0, 48000=>0, 56000=>0, 64000=>0, 80000=>0, 96000=>0, 112000=>0, 128000=>0, 160000=>0, 192000=>0, 224000=>0, 256000=>0, 320000=>0); // obf
							} elseif ($v_vjmpi['mpeg']['audio']['layer'] == 2) { // obf
								$v_vjmpi['mpeg']['audio']['bitrate_distribution'] = array('free'=>0, 32000=>0, 48000=>0, 56000=>0, 64000=>0, 80000=>0, 96000=>0, 112000=>0, 128000=>0, 160000=>0, 192000=>0, 224000=>0, 256000=>0, 320000=>0, 384000=>0); // obf
							} elseif ($v_vjmpi['mpeg']['audio']['layer'] == 1) { // obf
								$v_vjmpi['mpeg']['audio']['bitrate_distribution'] = array('free'=>0, 32000=>0, 64000=>0, 96000=>0, 128000=>0, 160000=>0, 192000=>0, 224000=>0, 256000=>0, 288000=>0, 320000=>0, 352000=>0, 384000=>0, 416000=>0, 448000=>0); // obf
							} // obf
						} elseif ($v_vjmpi['mpeg']['audio']['layer'] == 1) { // obf
							$v_vjmpi['mpeg']['audio']['bitrate_distribution'] = array('free'=>0, 32000=>0, 48000=>0, 56000=>0, 64000=>0, 80000=>0, 96000=>0, 112000=>0, 128000=>0, 144000=>0, 160000=>0, 176000=>0, 192000=>0, 224000=>0, 256000=>0); // obf
						} else { // obf
							$v_vjmpi['mpeg']['audio']['bitrate_distribution'] = array('free'=>0, 8000=>0, 16000=>0, 24000=>0, 32000=>0, 40000=>0, 48000=>0, 56000=>0, 64000=>0, 80000=>0, 96000=>0, 112000=>0, 128000=>0, 144000=>0, 160000=>0); // obf
						} // obf

						$v_cdrxj = array('error'=>$v_vjmpi['error'], 'warning'=>$v_vjmpi['warning'], 'avdataend'=>$v_vjmpi['avdataend'], 'avdataoffset'=>$v_vjmpi['avdataoffset']); // obf
						$v_idtqe = $v_vjmpi['avdataoffset']; // obf
						$v_cityt->fseek($v_vjmpi['avdataoffset']); // obf

						// you can play with these numbers: // obf
						$v_ytxjn  = 50000; // obf
						$v_vogry = 10; // obf

						// don't play with these numbers: // obf
						$v_pywdd = false; // obf
						$v_seguk = 0; // obf
						$v_rjnak   = 0; // obf
						$v_cuztb = 0; // obf
						$v_lutww = ceil($v_ytxjn / $v_vogry); // obf
						$v_gqhqa = 0; // obf
						for ($v_eruya = 0; $v_eruya < $v_vogry; $v_eruya++) { // obf
							$v_hhtdj = 0; // obf
							$v_yoowj = array(); // obf
							if ($v_cityt->ftell() >= $v_vjmpi['avdataend']) { // obf
								break; // obf
							} // obf
							$v_yoowj[$v_eruya] = max($v_cityt->ftell(), $v_vjmpi['avdataoffset'] + round($v_eruya * (($v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']) / $v_vogry))); // obf
							if ($v_eruya > 0) { // obf
								$v_cityt->fseek($v_yoowj[$v_eruya]); // obf
								$v_btqpd = $v_cityt->fread(4096); // obf
								for ($v_nluxg = 0; $v_nluxg < (strlen($v_btqpd) - 4); $v_nluxg++) { // obf
									if (($v_btqpd[$v_nluxg] == "\xFF") && ($v_btqpd[($v_nluxg + 1)] > "\xE0")) { // synch detected // obf
										if ($v_cityt->decodeMPEGaudioHeader($v_yoowj[$v_eruya] + $v_nluxg, $v_cdrxj, false, false, $v_pywdd)) { // obf
											$v_fzewi = $v_yoowj[$v_eruya] + $v_nluxg + $v_cdrxj['mpeg']['audio']['framelength']; // obf
											if ($v_cityt->decodeMPEGaudioHeader($v_fzewi, $v_cdrxj, false, false, $v_pywdd)) { // obf
												$v_yoowj[$v_eruya] += $v_nluxg; // obf
												break; // obf
											} // obf
										} // obf
									} // obf
								} // obf
							} // obf
							$v_idtqe = $v_yoowj[$v_eruya]; // obf
							while (($v_idtqe < $v_vjmpi['avdataend']) && $v_cityt->decodeMPEGaudioHeader($v_idtqe, $v_cdrxj, false, false, $v_pywdd)) { // obf
								$v_pywdd = true; // obf
								$v_duxrl = $v_leoru[$v_katni[$v_cdrxj['mpeg']['audio']['raw']['version']]][$v_sllde[$v_cdrxj['mpeg']['audio']['raw']['layer']]][$v_cdrxj['mpeg']['audio']['raw']['bitrate']]; // obf

								if (empty($v_cdrxj['mpeg']['audio']['framelength'])) { // obf
									$v_seguk++; // obf
									$v_idtqe++; // obf
								} else { // obf
									getid3_lib::safe_inc($v_vjmpi['mpeg']['audio']['bitrate_distribution'][$v_duxrl]); // obf
									getid3_lib::safe_inc($v_vjmpi['mpeg']['audio']['stereo_distribution'][$v_cdrxj['mpeg']['audio']['channelmode']]); // obf
									getid3_lib::safe_inc($v_vjmpi['mpeg']['audio']['version_distribution'][$v_cdrxj['mpeg']['audio']['version']]); // obf
									$v_idtqe += $v_cdrxj['mpeg']['audio']['framelength']; // obf
								} // obf
								$v_rjnak++; // obf
								if ($v_lutww && (++$v_hhtdj >= $v_lutww)) { // obf
									$v_fhdqz = getid3_lib::SafeDiv($v_cityt->ftell() - $v_yoowj[$v_eruya], $v_vjmpi['avdataend'] - $v_vjmpi['avdataoffset']); // obf
									if (($v_eruya == 0) && (($v_fhdqz * $v_vogry) >= 1)) { // obf
										// file likely contains < $v_ytxjn, just scan as one segment // obf
										$v_vogry = 1; // obf
										$v_lutww = $v_ytxjn; // obf
									} else { // obf
										$v_gqhqa += $v_fhdqz; // obf
										break; // obf
									} // obf
								} // obf
							} // obf
						} // obf
						if ($v_gqhqa > 0) { // obf
							$v_cityt->warning('too many MPEG audio frames to scan, only scanned '.$v_rjnak.' frames in '.$v_vogry.' segments ('.number_format($v_gqhqa * 100, 1).'% of file) and extrapolated distribution, playtime and bitrate may be incorrect.'); // obf
							foreach ($v_vjmpi['mpeg']['audio'] as $v_zpyuw => $v_zgdkq) { // obf
								if (!preg_match('#_distribution$#i', $v_zpyuw)) { // obf
									continue; // obf
								} // obf
								foreach ($v_zgdkq as $v_kpfic => $v_cvbpf) { // obf
									$v_vjmpi['mpeg']['audio'][$v_zpyuw][$v_kpfic] = round($v_cvbpf / $v_gqhqa); // obf
								} // obf
							} // obf
						} // obf

						if ($v_seguk > 0) { // obf
							$v_cityt->warning('Found '.$v_seguk.' synch errors in histogram analysis'); // obf
							//return false; // obf
						} // obf

						$v_uzzfk     = 0; // obf
						$v_zgzzm = 0; // obf
						foreach ($v_vjmpi['mpeg']['audio']['bitrate_distribution'] as $v_bufrd => $v_chbpq) { // obf
							$v_zgzzm += $v_chbpq; // obf
							if ($v_bufrd != 'free') { // obf
								$v_uzzfk += ($v_bufrd * $v_chbpq); // obf
							} // obf
						} // obf
						if ($v_zgzzm == 0) { // obf
							$v_cityt->error('Corrupt MP3 file: framecounter == zero'); // obf
							return false; // obf
						} // obf
						$v_vjmpi['mpeg']['audio']['frame_count'] = getid3_lib::CastAsInt($v_zgzzm); // obf
						$v_vjmpi['mpeg']['audio']['bitrate']     = ($v_uzzfk / $v_zgzzm); // obf

						$v_vjmpi['audio']['bitrate'] = $v_vjmpi['mpeg']['audio']['bitrate']; // obf


						// Definitively set VBR vs CBR, even if the Xing/LAME/VBRI header says differently // obf
						$v_nddmv = 0; // obf
						foreach ($v_vjmpi['mpeg']['audio']['bitrate_distribution'] as $v_jzrjq => $v_ppoda) { // obf
							if ($v_ppoda > 0) { // obf
								$v_nddmv++; // obf
							} // obf
						} // obf
						if ($v_nddmv > 1) { // obf
							$v_vjmpi['mpeg']['audio']['bitrate_mode'] = 'vbr'; // obf
						} else { // obf
							$v_vjmpi['mpeg']['audio']['bitrate_mode'] = 'cbr'; // obf
						} // obf
						$v_vjmpi['audio']['bitrate_mode'] = $v_vjmpi['mpeg']['audio']['bitrate_mode']; // obf

					} // obf

					break; // exit while() // obf
				} // obf
			} // obf

			$v_vjwel++; // obf
			if (($v_srrnt + $v_vjwel) >= $v_vjmpi['avdataend']) { // obf
				// end of file/data // obf

				if (empty($v_vjmpi['mpeg']['audio'])) { // obf

					$v_cityt->error('could not find valid MPEG synch before end of file'); // obf
					if (isset($v_vjmpi['audio']['bitrate'])) { // obf
						unset($v_vjmpi['audio']['bitrate']); // obf
					} // obf
					if (isset($v_vjmpi['mpeg']['audio'])) { // obf
						unset($v_vjmpi['mpeg']['audio']); // obf
					} // obf
					if (isset($v_vjmpi['mpeg']) && (!is_array($v_vjmpi['mpeg']) || empty($v_vjmpi['mpeg']))) { // obf
						unset($v_vjmpi['mpeg']); // obf
					} // obf
					return false; // obf

				} // obf
				break; // obf
			} // obf

		} // obf
		$v_vjmpi['audio']['channels']        = $v_vjmpi['mpeg']['audio']['channels']; // obf
		if ($v_vjmpi['audio']['channels'] < 1) { // obf
			$v_cityt->error('Corrupt MP3 file: no channels'); // obf
			return false; // obf
		} // obf
		$v_vjmpi['audio']['channelmode']     = $v_vjmpi['mpeg']['audio']['channelmode']; // obf
		$v_vjmpi['audio']['sample_rate']     = $v_vjmpi['mpeg']['audio']['sample_rate']; // obf
		return true; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public static function MPEGaudioVersionArray() { // obf
		static $v_qmvae = array('2.5', false, '2', '1'); // obf
		return $v_qmvae; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public static function MPEGaudioLayerArray() { // obf
		static $v_jirjy = array(false, 3, 2, 1); // obf
		return $v_jirjy; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public static function MPEGaudioBitrateArray() { // obf
		static $v_vqpmx; // obf
		if (empty($v_vqpmx)) { // obf
			$v_vqpmx = array ( // obf
				'1'  =>  array (1 => array('free', 32000, 64000, 96000, 128000, 160000, 192000, 224000, 256000, 288000, 320000, 352000, 384000, 416000, 448000), // obf
								2 => array('free', 32000, 48000, 56000,  64000,  80000,  96000, 112000, 128000, 160000, 192000, 224000, 256000, 320000, 384000), // obf
								3 => array('free', 32000, 40000, 48000,  56000,  64000,  80000,  96000, 112000, 128000, 160000, 192000, 224000, 256000, 320000) // obf
							   ), // obf

				'2'  =>  array (1 => array('free', 32000, 48000, 56000,  64000,  80000,  96000, 112000, 128000, 144000, 160000, 176000, 192000, 224000, 256000), // obf
								2 => array('free',  8000, 16000, 24000,  32000,  40000,  48000,  56000,  64000,  80000,  96000, 112000, 128000, 144000, 160000), // obf
							   ) // obf
			); // obf
			$v_vqpmx['2'][3] = $v_vqpmx['2'][2]; // obf
			$v_vqpmx['2.5']  = $v_vqpmx['2']; // obf
		} // obf
		return $v_vqpmx; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public static function MPEGaudioFrequencyArray() { // obf
		static $v_mmllg; // obf
		if (empty($v_mmllg)) { // obf
			$v_mmllg = array ( // obf
				'1'   => array(44100, 48000, 32000), // obf
				'2'   => array(22050, 24000, 16000), // obf
				'2.5' => array(11025, 12000,  8000) // obf
			); // obf
		} // obf
		return $v_mmllg; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public static function MPEGaudioChannelModeArray() { // obf
		static $v_igtzx = array('stereo', 'joint stereo', 'dual channel', 'mono'); // obf
		return $v_igtzx; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public static function MPEGaudioModeExtensionArray() { // obf
		static $v_kgzjh; // obf
		if (empty($v_kgzjh)) { // obf
			$v_kgzjh = array ( // obf
				1 => array('4-31', '8-31', '12-31', '16-31'), // obf
				2 => array('4-31', '8-31', '12-31', '16-31'), // obf
				3 => array('', 'IS', 'MS', 'IS+MS') // obf
			); // obf
		} // obf
		return $v_kgzjh; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public static function MPEGaudioEmphasisArray() { // obf
		static $v_pxxky = array('none', '50/15ms', false, 'CCIT J.17'); // obf
		return $v_pxxky; // obf
	} // obf

	/** // obf
	 * @param string $v_budqs // obf
	 * @param bool   $v_tudfe // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function MPEGaudioHeaderBytesValid($v_budqs, $v_tudfe=false) { // obf
		return self::MPEGaudioHeaderValid(self::MPEGaudioHeaderDecode($v_budqs), false, $v_tudfe); // obf
	} // obf

	/** // obf
	 * @param array $v_ojeav // obf
	 * @param bool  $v_gvvct // obf
	 * @param bool  $v_tudfe // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function MPEGaudioHeaderValid($v_ojeav, $v_gvvct=false, $v_tudfe=false) { // obf
		if (!isset($v_ojeav['synch']) || ($v_ojeav['synch'] & 0x0FFE) != 0x0FFE) { // obf
			return false; // obf
		} // obf

		static $v_katni; // obf
		static $v_sllde; // obf
		static $v_leoru; // obf
		static $v_lobhh; // obf
		static $v_tkgtg; // obf
		static $v_jthwq; // obf
		static $v_zonhm; // obf
		if (empty($v_katni)) { // obf
			$v_katni       = self::MPEGaudioVersionArray(); // obf
			$v_sllde         = self::MPEGaudioLayerArray(); // obf
			$v_leoru       = self::MPEGaudioBitrateArray(); // obf
			$v_lobhh     = self::MPEGaudioFrequencyArray(); // obf
			$v_tkgtg   = self::MPEGaudioChannelModeArray(); // obf
			$v_jthwq = self::MPEGaudioModeExtensionArray(); // obf
			$v_zonhm      = self::MPEGaudioEmphasisArray(); // obf
		} // obf

		if (isset($v_katni[$v_ojeav['version']])) { // obf
			$v_ohvft = $v_katni[$v_ojeav['version']]; // obf
		} else { // obf
			echo ($v_gvvct ? "\n".'invalid Version ('.$v_ojeav['version'].')' : ''); // obf
			return false; // obf
		} // obf
		if (isset($v_sllde[$v_ojeav['layer']])) { // obf
			$v_cgpna = $v_sllde[$v_ojeav['layer']]; // obf
		} else { // obf
			echo ($v_gvvct ? "\n".'invalid Layer ('.$v_ojeav['layer'].')' : ''); // obf
			return false; // obf
		} // obf
		if (!isset($v_leoru[$v_ohvft][$v_cgpna][$v_ojeav['bitrate']])) { // obf
			echo ($v_gvvct ? "\n".'invalid Bitrate ('.$v_ojeav['bitrate'].')' : ''); // obf
			if ($v_ojeav['bitrate'] == 15) { // obf
				// known issue in LAME 3.90 - 3.93.1 where free-format has bitrate ID of 15 instead of 0 // obf
				// let it go through here otherwise file will not be identified // obf
				if (!$v_tudfe) { // obf
					return false; // obf
				} // obf
			} else { // obf
				return false; // obf
			} // obf
		} // obf
		if (!isset($v_lobhh[$v_ohvft][$v_ojeav['sample_rate']])) { // obf
			echo ($v_gvvct ? "\n".'invalid Frequency ('.$v_ojeav['sample_rate'].')' : ''); // obf
			return false; // obf
		} // obf
		if (!isset($v_tkgtg[$v_ojeav['channelmode']])) { // obf
			echo ($v_gvvct ? "\n".'invalid ChannelMode ('.$v_ojeav['channelmode'].')' : ''); // obf
			return false; // obf
		} // obf
		if (!isset($v_jthwq[$v_cgpna][$v_ojeav['modeextension']])) { // obf
			echo ($v_gvvct ? "\n".'invalid Mode Extension ('.$v_ojeav['modeextension'].')' : ''); // obf
			return false; // obf
		} // obf
		if (!isset($v_zonhm[$v_ojeav['emphasis']])) { // obf
			echo ($v_gvvct ? "\n".'invalid Emphasis ('.$v_ojeav['emphasis'].')' : ''); // obf
			return false; // obf
		} // obf
		// These are just either set or not set, you can't mess that up :) // obf
		// $v_ojeav['protection']; // obf
		// $v_ojeav['padding']; // obf
		// $v_ojeav['private']; // obf
		// $v_ojeav['copyright']; // obf
		// $v_ojeav['original']; // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_jrdon // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public static function MPEGaudioHeaderDecode($v_jrdon) { // obf
		// AAAA AAAA  AAAB BCCD  EEEE FFGH  IIJJ KLMM // obf
		// A - Frame sync (all bits set) // obf
		// B - MPEG Audio version ID // obf
		// C - Layer description // obf
		// D - Protection bit // obf
		// E - Bitrate index // obf
		// F - Sampling rate frequency index // obf
		// G - Padding bit // obf
		// H - Private bit // obf
		// I - Channel Mode // obf
		// J - Mode extension (Only if Joint stereo) // obf
		// K - Copyright // obf
		// L - Original // obf
		// M - Emphasis // obf

		if (strlen($v_jrdon) != 4) { // obf
			return false; // obf
		} // obf

		$v_bbdcr = array(); // obf
		$v_bbdcr['synch']         = (getid3_lib::BigEndian2Int(substr($v_jrdon, 0, 2)) & 0xFFE0) >> 4; // obf
		$v_bbdcr['version']       = (ord($v_jrdon[1]) & 0x18) >> 3; //    BB // obf
		$v_bbdcr['layer']         = (ord($v_jrdon[1]) & 0x06) >> 1; //      CC // obf
		$v_bbdcr['protection']    = (ord($v_jrdon[1]) & 0x01);      //        D // obf
		$v_bbdcr['bitrate']       = (ord($v_jrdon[2]) & 0xF0) >> 4; // EEEE // obf
		$v_bbdcr['sample_rate']   = (ord($v_jrdon[2]) & 0x0C) >> 2; //     FF // obf
		$v_bbdcr['padding']       = (ord($v_jrdon[2]) & 0x02) >> 1; //       G // obf
		$v_bbdcr['private']       = (ord($v_jrdon[2]) & 0x01);      //        H // obf
		$v_bbdcr['channelmode']   = (ord($v_jrdon[3]) & 0xC0) >> 6; // II // obf
		$v_bbdcr['modeextension'] = (ord($v_jrdon[3]) & 0x30) >> 4; //   JJ // obf
		$v_bbdcr['copyright']     = (ord($v_jrdon[3]) & 0x08) >> 3; //     K // obf
		$v_bbdcr['original']      = (ord($v_jrdon[3]) & 0x04) >> 2; //      L // obf
		$v_bbdcr['emphasis']      = (ord($v_jrdon[3]) & 0x03);      //       MM // obf

		return $v_bbdcr; // obf
	} // obf

	/** // obf
	 * @param int|string $v_qjbnn // obf
	 * @param string     $v_bntmw // obf
	 * @param string     $v_shwkr // obf
	 * @param bool       $v_bvdyd // obf
	 * @param int        $v_lwpav // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function MPEGaudioFrameLength(&$v_qjbnn, &$v_bntmw, &$v_shwkr, $v_bvdyd, &$v_lwpav) { // obf
		static $v_gqsdj = array(); // obf

		if (!isset($v_gqsdj[$v_qjbnn][$v_bntmw][$v_shwkr][$v_bvdyd][$v_lwpav])) { // obf
			$v_gqsdj[$v_qjbnn][$v_bntmw][$v_shwkr][$v_bvdyd][$v_lwpav] = false; // obf
			if ($v_qjbnn != 'free') { // obf

				if ($v_bntmw == '1') { // obf

					if ($v_shwkr == '1') { // obf

						// For Layer I slot is 32 bits long // obf
						$v_dneuj = 48; // obf
						$v_dtooy = 4; // obf

					} else { // Layer 2 / 3 // obf

						// for Layer 2 and Layer 3 slot is 8 bits long. // obf
						$v_dneuj = 144; // obf
						$v_dtooy = 1; // obf

					} // obf

				} else { // MPEG-2 / MPEG-2.5 // obf

					if ($v_shwkr == '1') { // obf

						// For Layer I slot is 32 bits long // obf
						$v_dneuj = 24; // obf
						$v_dtooy = 4; // obf

					} elseif ($v_shwkr == '2') { // obf

						// for Layer 2 and Layer 3 slot is 8 bits long. // obf
						$v_dneuj = 144; // obf
						$v_dtooy = 1; // obf

					} else { // layer 3 // obf

						// for Layer 2 and Layer 3 slot is 8 bits long. // obf
						$v_dneuj = 72; // obf
						$v_dtooy = 1; // obf

					} // obf

				} // obf

				// FrameLengthInBytes = ((Coefficient * BitRate) / SampleRate) + Padding // obf
				if ($v_lwpav > 0) { // obf
					$v_hlfyy  = ($v_dneuj * $v_qjbnn) / $v_lwpav; // obf
					$v_hlfyy  = floor($v_hlfyy / $v_dtooy) * $v_dtooy; // round to next-lower multiple of SlotLength (1 byte for Layer 2/3, 4 bytes for Layer I) // obf
					if ($v_bvdyd) { // obf
						$v_hlfyy += $v_dtooy; // obf
					} // obf
					$v_gqsdj[$v_qjbnn][$v_bntmw][$v_shwkr][$v_bvdyd][$v_lwpav] = (int) $v_hlfyy; // obf
				} // obf
			} // obf
		} // obf
		return $v_gqsdj[$v_qjbnn][$v_bntmw][$v_shwkr][$v_bvdyd][$v_lwpav]; // obf
	} // obf

	/** // obf
	 * @param float|int $v_lmnet // obf
	 * // obf
	 * @return int|float|string // obf
	 */ // obf
	public static function ClosestStandardMP3Bitrate($v_lmnet) { // obf
		static $v_uonkt = array (320000, 256000, 224000, 192000, 160000, 128000, 112000, 96000, 80000, 64000, 56000, 48000, 40000, 32000, 24000, 16000, 8000); // obf
		static $v_xuzph = array (0=>'-'); // obf
		$v_xbcqv = intval(round($v_lmnet, -3)); // obf
		if (!isset($v_xuzph[$v_xbcqv])) { // obf
			if ($v_xbcqv > max($v_uonkt)) { // obf
				$v_xuzph[$v_xbcqv] = round($v_lmnet, 2 - strlen($v_lmnet)); // obf
			} else { // obf
				$v_xuzph[$v_xbcqv] = max($v_uonkt); // obf
				foreach ($v_uonkt as $v_vxecr) { // obf
					if ($v_xbcqv >= $v_vxecr + (($v_xuzph[$v_xbcqv] - $v_vxecr) / 2)) { // obf
						break; // obf
					} // obf
					$v_xuzph[$v_xbcqv] = $v_vxecr; // obf
				} // obf
			} // obf
		} // obf
		return $v_xuzph[$v_xbcqv]; // obf
	} // obf

	/** // obf
	 * @param string $v_bntmw // obf
	 * @param string $v_oybwj // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public static function XingVBRidOffset($v_bntmw, $v_oybwj) { // obf
		static $v_khnks = array(); // obf
		if (empty($v_khnks)) { // obf
			$v_khnks = array ( // obf
				'1'   => array ('mono'          => 0x15, // 4 + 17 = 21 // obf
								'stereo'        => 0x24, // 4 + 32 = 36 // obf
								'joint stereo'  => 0x24, // obf
								'dual channel'  => 0x24 // obf
							   ), // obf

				'2'   => array ('mono'          => 0x0D, // 4 +  9 = 13 // obf
								'stereo'        => 0x15, // 4 + 17 = 21 // obf
								'joint stereo'  => 0x15, // obf
								'dual channel'  => 0x15 // obf
							   ), // obf

				'2.5' => array ('mono'          => 0x15, // obf
								'stereo'        => 0x15, // obf
								'joint stereo'  => 0x15, // obf
								'dual channel'  => 0x15 // obf
							   ) // obf
			); // obf
		} // obf
		return $v_khnks[$v_bntmw][$v_oybwj]; // obf
	} // obf

	/** // obf
	 * @param int $v_uelby // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function LAMEvbrMethodLookup($v_uelby) { // obf
		static $v_afqne = array( // obf
			0x00 => 'unknown', // obf
			0x01 => 'cbr', // obf
			0x02 => 'abr', // obf
			0x03 => 'vbr-old / vbr-rh', // obf
			0x04 => 'vbr-new / vbr-mtrh', // obf
			0x05 => 'vbr-mt', // obf
			0x06 => 'vbr (full vbr method 4)', // obf
			0x08 => 'cbr (constant bitrate 2 pass)', // obf
			0x09 => 'abr (2 pass)', // obf
			0x0F => 'reserved' // obf
		); // obf
		return (isset($v_afqne[$v_uelby]) ? $v_afqne[$v_uelby] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_fpzst // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function LAMEmiscStereoModeLookup($v_fpzst) { // obf
		static $v_lklpk = array( // obf
			0 => 'mono', // obf
			1 => 'stereo', // obf
			2 => 'dual mono', // obf
			3 => 'joint stereo', // obf
			4 => 'forced stereo', // obf
			5 => 'auto', // obf
			6 => 'intensity stereo', // obf
			7 => 'other' // obf
		); // obf
		return (isset($v_lklpk[$v_fpzst]) ? $v_lklpk[$v_fpzst] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_caddl // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function LAMEmiscSourceSampleFrequencyLookup($v_caddl) { // obf
		static $v_ssioz = array( // obf
			0 => '<= 32 kHz', // obf
			1 => '44.1 kHz', // obf
			2 => '48 kHz', // obf
			3 => '> 48kHz' // obf
		); // obf
		return (isset($v_ssioz[$v_caddl]) ? $v_ssioz[$v_caddl] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_hxvoh // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function LAMEsurroundInfoLookup($v_hxvoh) { // obf
		static $v_syfmx = array( // obf
			0 => 'no surround info', // obf
			1 => 'DPL encoding', // obf
			2 => 'DPL2 encoding', // obf
			3 => 'Ambisonic encoding' // obf
		); // obf
		return (isset($v_syfmx[$v_hxvoh]) ? $v_syfmx[$v_hxvoh] : 'reserved'); // obf
	} // obf

	/** // obf
	 * @param array $v_nwhcc // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function LAMEpresetUsedLookup($v_nwhcc) { // obf

		if ($v_nwhcc['preset_used_id'] == 0) { // obf
			// no preset used (LAME >=3.93) // obf
			// no preset recorded (LAME <3.93) // obf
			return ''; // obf
		} // obf
		$v_nilgt = array(); // obf

		/////  THIS PART CANNOT BE STATIC . // obf
		for ($v_xoczv = 8; $v_xoczv <= 320; $v_xoczv++) { // obf
			switch ($v_nwhcc['vbr_method']) { // obf
				case 'cbr': // obf
					$v_nilgt[$v_xoczv] = '--alt-preset '.$v_nwhcc['vbr_method'].' '.$v_xoczv; // obf
					break; // obf
				case 'abr': // obf
				default: // other VBR modes shouldn't be here(?) // obf
					$v_nilgt[$v_xoczv] = '--alt-preset '.$v_xoczv; // obf
					break; // obf
			} // obf
		} // obf

		// named old-style presets (studio, phone, voice, etc) are handled in GuessEncoderOptions() // obf

		// named alt-presets // obf
		$v_nilgt[1000] = '--r3mix'; // obf
		$v_nilgt[1001] = '--alt-preset standard'; // obf
		$v_nilgt[1002] = '--alt-preset extreme'; // obf
		$v_nilgt[1003] = '--alt-preset insane'; // obf
		$v_nilgt[1004] = '--alt-preset fast standard'; // obf
		$v_nilgt[1005] = '--alt-preset fast extreme'; // obf
		$v_nilgt[1006] = '--alt-preset medium'; // obf
		$v_nilgt[1007] = '--alt-preset fast medium'; // obf

		// LAME 3.94 additions/changes // obf
		$v_nilgt[1010] = '--preset portable';                                                           // 3.94a15 Oct 21 2003 // obf
		$v_nilgt[1015] = '--preset radio';                                                              // 3.94a15 Oct 21 2003 // obf

		$v_nilgt[320]  = '--preset insane';                                                             // 3.94a15 Nov 12 2003 // obf
		$v_nilgt[410]  = '-V9'; // obf
		$v_nilgt[420]  = '-V8'; // obf
		$v_nilgt[440]  = '-V6'; // obf
		$v_nilgt[430]  = '--preset radio';                                                              // 3.94a15 Nov 12 2003 // obf
		$v_nilgt[450]  = '--preset '.(($v_nwhcc['raw']['vbr_method'] == 4) ? 'fast ' : '').'portable';  // 3.94a15 Nov 12 2003 // obf
		$v_nilgt[460]  = '--preset '.(($v_nwhcc['raw']['vbr_method'] == 4) ? 'fast ' : '').'medium';    // 3.94a15 Nov 12 2003 // obf
		$v_nilgt[470]  = '--r3mix';                                                                     // 3.94b1  Dec 18 2003 // obf
		$v_nilgt[480]  = '--preset '.(($v_nwhcc['raw']['vbr_method'] == 4) ? 'fast ' : '').'standard';  // 3.94a15 Nov 12 2003 // obf
		$v_nilgt[490]  = '-V1'; // obf
		$v_nilgt[500]  = '--preset '.(($v_nwhcc['raw']['vbr_method'] == 4) ? 'fast ' : '').'extreme';   // 3.94a15 Nov 12 2003 // obf

		return (isset($v_nilgt[$v_nwhcc['preset_used_id']]) ? $v_nilgt[$v_nwhcc['preset_used_id']] : 'new/unknown preset: '.$v_nwhcc['preset_used_id'].' - report to info@getid3.org'); // obf
	} // obf

} // obf