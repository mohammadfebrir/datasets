

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio-video.riff.php                                 // // obf
// module for analyzing RIFF files                             // // obf
// multiple formats supported by this module:                  // // obf
//    Wave, AVI, AIFF/AIFC, (MP3,AC3)/RIFF, Wavpack v3, 8SVX   // // obf
// dependencies: module.audio.mp3.php                          // // obf
//               module.audio.ac3.php                          // // obf
//               module.audio.dts.php                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

/** // obf
* @todo Parse AC-3/DTS audio inside WAVE correctly // obf
* @todo Rewrite RIFF parser totally // obf
*/ // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.mp3.php', __FILE__, true); // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.ac3.php', __FILE__, true); // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.dts.php', __FILE__, true); // obf

class getid3_riff extends getid3_handler // obf
{ // obf
	protected $v_fedbz = 'riff'; // default // obf

	/** // obf
	 * @return bool // obf
	 * // obf
	 * @throws getid3_exception // obf
	 */ // obf
	public function Analyze() { // obf
		$v_cboke = &$v_hgrnp->getid3->info; // obf

		// initialize these values to an empty array, otherwise they default to NULL // obf
		// and you can't append array values to a NULL value // obf
		$v_cboke['riff'] = array('raw'=>array()); // obf

		// Shortcuts // obf
		$v_fqham             = &$v_cboke['riff']; // obf
		$v_dmdqf         = &$v_fqham['raw']; // obf
		$v_vmiwx            = &$v_cboke['audio']; // obf
		$v_iwbrs            = &$v_cboke['video']; // obf
		$v_iycrh = &$v_vmiwx['dataformat']; // obf
		$v_qmyja       = &$v_fqham['audio']; // obf
		$v_cbpeq       = &$v_fqham['video']; // obf
		$v_bkacs        = array(); // obf

		$v_hakhs                 = array(); // obf
		$v_hakhs['avdataoffset'] = $v_cboke['avdataoffset']; // obf
		$v_hakhs['avdataend']    = $v_cboke['avdataend']; // obf

		$v_hgrnp->fseek($v_cboke['avdataoffset']); // obf
		$v_mhlur = $v_hgrnp->fread(12); // obf
		$v_uyxwr = $v_hgrnp->ftell(); // obf
		$v_unstx    = substr($v_mhlur, 0, 4); // obf
		$v_njsvd    = substr($v_mhlur, 4, 4); // obf
		$v_wupbk = substr($v_mhlur, 8, 4); // obf

		switch ($v_unstx) { // obf

			case 'FORM':  // AIFF, AIFC // obf
				//$v_cboke['fileformat']   = 'aiff'; // obf
				$v_hgrnp->container = 'aiff'; // obf
				$v_fqham['header_size'] = $v_hgrnp->EitherEndian2Int($v_njsvd); // obf
				$v_fqham[$v_wupbk]  = $v_hgrnp->ParseRIFF($v_uyxwr, ($v_uyxwr + $v_fqham['header_size'] - 4)); // obf
				break; // obf

			case 'RIFF':  // AVI, WAV, etc // obf
			case 'SDSS':  // SDSS is identical to RIFF, just renamed. Used by SmartSound QuickTracks (www.smartsound.com) // obf
			case 'RMP3':  // RMP3 is identical to RIFF, just renamed. Used by [unknown program] when creating RIFF-MP3s // obf
				//$v_cboke['fileformat']   = 'riff'; // obf
				$v_hgrnp->container = 'riff'; // obf
				$v_fqham['header_size'] = $v_hgrnp->EitherEndian2Int($v_njsvd); // obf
				if ($v_wupbk == 'RMP3') { // obf
					// RMP3 is identical to WAVE, just renamed. Used by [unknown program] when creating RIFF-MP3s // obf
					$v_wupbk = 'WAVE'; // obf
				} // obf
				if ($v_wupbk != 'AMV ') { // obf
					// AMV files are RIFF-AVI files with parts of the spec deliberately broken, such as chunk size fields hardcoded to zero (because players known in hardware that these fields are always a certain size // obf
					// Handled separately in ParseRIFFAMV() // obf
					$v_fqham[$v_wupbk]  = $v_hgrnp->ParseRIFF($v_uyxwr, ($v_uyxwr + $v_fqham['header_size'] - 4)); // obf
				} // obf
				if (($v_cboke['avdataend'] - $v_cboke['filesize']) == 1) { // obf
					// LiteWave appears to incorrectly *not* pad actual output file // obf
					// to nearest WORD boundary so may appear to be short by one // obf
					// byte, in which case - skip warning // obf
					$v_cboke['avdataend'] = $v_cboke['filesize']; // obf
				} // obf

				$v_etkjy = $v_hakhs['avdataoffset'] + 8 + $v_fqham['header_size']; // 8 = "RIFF" + 32-bit offset // obf
				while ($v_etkjy < min($v_cboke['filesize'], $v_cboke['avdataend'])) { // obf
					try { // obf
						$v_hgrnp->fseek($v_etkjy); // obf
					} catch (getid3_exception $v_peswc) { // obf
						if ($v_peswc->getCode() == 10) { // obf
							//$v_hgrnp->warning('RIFF parser: '.$v_peswc->getMessage()); // obf
							$v_hgrnp->error('AVI extends beyond '.round(PHP_INT_MAX / 1073741824).'GB and PHP filesystem functions cannot read that far, playtime may be wrong'); // obf
							$v_hgrnp->warning('[avdataend] value may be incorrect, multiple AVIX chunks may be present'); // obf
							break; // obf
						} else { // obf
							throw $v_peswc; // obf
						} // obf
					} // obf
					$v_bfxkh = $v_hgrnp->fread(12); // obf
					if ($v_etkjy == ($v_cboke['avdataend'] - 1)) { // obf
						if (substr($v_bfxkh, 0, 1) == "\x00") { // obf
							// RIFF padded to WORD boundary, we're actually already at the end // obf
							break; // obf
						} // obf
					} // obf
					$v_crzyh =                         substr($v_bfxkh, 0, 4); // obf
					$v_mryxz     = $v_hgrnp->EitherEndian2Int(substr($v_bfxkh, 4, 4)); // obf
					$v_nkyfo     =                         substr($v_bfxkh, 8, 4); // obf
					$v_eplvc = array(); // obf
					$v_eplvc['offset'] = $v_etkjy + 8; // obf
					$v_eplvc['size']   = $v_mryxz; // obf
					$v_etkjy = $v_eplvc['offset'] + $v_eplvc['size']; // obf

					switch ($v_crzyh) { // obf
						case 'RIFF': // obf
							$v_eplvc['chunks'] = $v_hgrnp->ParseRIFF($v_eplvc['offset'] + 4, $v_etkjy); // obf
							if (!isset($v_fqham[$v_nkyfo])) { // obf
								$v_fqham[$v_nkyfo] = array(); // obf
							} // obf
							$v_fqham[$v_nkyfo][] = $v_eplvc; // obf
							break; // obf

						case 'AMV ': // obf
							unset($v_cboke['riff']); // obf
							$v_cboke['amv'] = $v_hgrnp->ParseRIFFAMV($v_eplvc['offset'] + 4, $v_etkjy); // obf
							break; // obf

						case 'JUNK': // obf
							// ignore // obf
							$v_fqham[$v_crzyh][] = $v_eplvc; // obf
							break; // obf

						case 'IDVX': // obf
							$v_cboke['divxtag']['comments'] = self::ParseDIVXTAG($v_hgrnp->fread($v_eplvc['size'])); // obf
							break; // obf

						default: // obf
							if ($v_cboke['filesize'] == ($v_eplvc['offset'] - 8 + 128)) { // obf
								$v_ikfzq = $v_bfxkh.$v_hgrnp->fread(128 - 12); // obf
								if (substr($v_ikfzq, -7) == 'DIVXTAG') { // obf
									// DIVXTAG is supposed to be inside an IDVX chunk in a LIST chunk, but some bad encoders just slap it on the end of a file // obf
									$v_hgrnp->warning('Found wrongly-structured DIVXTAG at offset '.($v_hgrnp->ftell() - 128).', parsing anyway'); // obf
									$v_cboke['divxtag']['comments'] = self::ParseDIVXTAG($v_ikfzq); // obf
									break 2; // obf
								} // obf
							} // obf
							$v_hgrnp->warning('Expecting "RIFF|JUNK|IDVX" at '.$v_etkjy.', found "'.$v_crzyh.'" ('.getid3_lib::PrintHexBytes($v_crzyh).') - skipping rest of file'); // obf
							break 2; // obf

					} // obf

				} // obf
				if ($v_wupbk == 'WAVE') { // obf
					$v_bkacs = &$v_fqham['WAVE']; // obf
				} // obf
				break; // obf

			default: // obf
				$v_hgrnp->error('Cannot parse RIFF (this is maybe not a RIFF / WAV / AVI file?) - expecting "FORM|RIFF|SDSS|RMP3" found "'.$v_wupbk.'" instead'); // obf
				//unset($v_cboke['fileformat']); // obf
				return false; // obf
		} // obf

		$v_xhmcy = 0; // obf
		switch ($v_wupbk) { // obf

			// http://en.wikipedia.org/wiki/Wav // obf
			case 'WAVE': // obf
				$v_cboke['fileformat'] = 'wav'; // obf

				if (empty($v_vmiwx['bitrate_mode'])) { // obf
					$v_vmiwx['bitrate_mode'] = 'cbr'; // obf
				} // obf
				if (empty($v_iycrh)) { // obf
					$v_iycrh = 'wav'; // obf
				} // obf

				if (isset($v_bkacs['data'][0]['offset'])) { // obf
					$v_cboke['avdataoffset'] = $v_bkacs['data'][0]['offset'] + 8; // obf
					$v_cboke['avdataend']    = $v_cboke['avdataoffset'] + $v_bkacs['data'][0]['size']; // obf
				} // obf
				if (isset($v_bkacs['fmt '][0]['data'])) { // obf

					$v_qmyja[$v_xhmcy] = self::parseWAVEFORMATex($v_bkacs['fmt '][0]['data']); // obf
					$v_vmiwx['wformattag'] = $v_qmyja[$v_xhmcy]['raw']['wFormatTag']; // obf
					if (!isset($v_qmyja[$v_xhmcy]['bitrate']) || ($v_qmyja[$v_xhmcy]['bitrate'] == 0)) { // obf
						$v_hgrnp->error('Corrupt RIFF file: bitrate_audio == zero'); // obf
						return false; // obf
					} // obf
					$v_dmdqf['fmt '] = $v_qmyja[$v_xhmcy]['raw']; // obf
					unset($v_qmyja[$v_xhmcy]['raw']); // obf
					$v_vmiwx['streams'][$v_xhmcy] = $v_qmyja[$v_xhmcy]; // obf

					$v_vmiwx = (array) getid3_lib::array_merge_noclobber($v_vmiwx, $v_qmyja[$v_xhmcy]); // obf
					if (substr($v_vmiwx['codec'], 0, strlen('unknown: 0x')) == 'unknown: 0x') { // obf
						$v_hgrnp->warning('Audio codec = '.$v_vmiwx['codec']); // obf
					} // obf
					$v_vmiwx['bitrate'] = $v_qmyja[$v_xhmcy]['bitrate']; // obf

					if (empty($v_cboke['playtime_seconds'])) { // may already be set (e.g. DTS-WAV) // obf
						$v_cboke['playtime_seconds'] =  (float)getid3_lib::SafeDiv(($v_cboke['avdataend'] - $v_cboke['avdataoffset']) * 8, $v_vmiwx['bitrate']); // obf
					} // obf

					$v_vmiwx['lossless'] = false; // obf
					if (isset($v_bkacs['data'][0]['offset']) && isset($v_dmdqf['fmt ']['wFormatTag'])) { // obf
						switch ($v_dmdqf['fmt ']['wFormatTag']) { // obf

							case 0x0001:  // PCM // obf
								$v_vmiwx['lossless'] = true; // obf
								break; // obf

							case 0x2000:  // AC-3 // obf
								$v_iycrh = 'ac3'; // obf
								break; // obf

							default: // obf
								// do nothing // obf
								break; // obf

						} // obf
					} // obf
					$v_vmiwx['streams'][$v_xhmcy]['wformattag']   = $v_vmiwx['wformattag']; // obf
					$v_vmiwx['streams'][$v_xhmcy]['bitrate_mode'] = $v_vmiwx['bitrate_mode']; // obf
					$v_vmiwx['streams'][$v_xhmcy]['lossless']     = $v_vmiwx['lossless']; // obf
					$v_vmiwx['streams'][$v_xhmcy]['dataformat']   = $v_iycrh; // obf
				} // obf

				if (isset($v_bkacs['rgad'][0]['data'])) { // obf

					// shortcuts // obf
					$v_bykfa = &$v_bkacs['rgad'][0]['data']; // obf
					$v_dmdqf['rgad']    = array('track'=>array(), 'album'=>array()); // obf
					$v_czpqp       = &$v_dmdqf['rgad']; // obf
					$v_oethz = &$v_czpqp['track']; // obf
					$v_vygzc = &$v_czpqp['album']; // obf

					$v_czpqp['fPeakAmplitude']      = getid3_lib::LittleEndian2Float(substr($v_bykfa, 0, 4)); // obf
					$v_czpqp['nRadioRgAdjust']      =        $v_hgrnp->EitherEndian2Int(substr($v_bykfa, 4, 2)); // obf
					$v_czpqp['nAudiophileRgAdjust'] =        $v_hgrnp->EitherEndian2Int(substr($v_bykfa, 6, 2)); // obf

					$v_zyxvu      = str_pad(getid3_lib::Dec2Bin($v_czpqp['nRadioRgAdjust']), 16, '0', STR_PAD_LEFT); // obf
					$v_uvrqt = str_pad(getid3_lib::Dec2Bin($v_czpqp['nAudiophileRgAdjust']), 16, '0', STR_PAD_LEFT); // obf
					$v_oethz['name']       = getid3_lib::Bin2Dec(substr($v_zyxvu, 0, 3)); // obf
					$v_oethz['originator'] = getid3_lib::Bin2Dec(substr($v_zyxvu, 3, 3)); // obf
					$v_oethz['signbit']    = getid3_lib::Bin2Dec(substr($v_zyxvu, 6, 1)); // obf
					$v_oethz['adjustment'] = getid3_lib::Bin2Dec(substr($v_zyxvu, 7, 9)); // obf
					$v_vygzc['name']       = getid3_lib::Bin2Dec(substr($v_uvrqt, 0, 3)); // obf
					$v_vygzc['originator'] = getid3_lib::Bin2Dec(substr($v_uvrqt, 3, 3)); // obf
					$v_vygzc['signbit']    = getid3_lib::Bin2Dec(substr($v_uvrqt, 6, 1)); // obf
					$v_vygzc['adjustment'] = getid3_lib::Bin2Dec(substr($v_uvrqt, 7, 9)); // obf

					$v_fqham['rgad']['peakamplitude'] = $v_czpqp['fPeakAmplitude']; // obf
					if (($v_oethz['name'] != 0) && ($v_oethz['originator'] != 0)) { // obf
						$v_fqham['rgad']['track']['name']            = getid3_lib::RGADnameLookup($v_oethz['name']); // obf
						$v_fqham['rgad']['track']['originator']      = getid3_lib::RGADoriginatorLookup($v_oethz['originator']); // obf
						$v_fqham['rgad']['track']['adjustment']      = getid3_lib::RGADadjustmentLookup($v_oethz['adjustment'], $v_oethz['signbit']); // obf
					} // obf
					if (($v_vygzc['name'] != 0) && ($v_vygzc['originator'] != 0)) { // obf
						$v_fqham['rgad']['album']['name']       = getid3_lib::RGADnameLookup($v_vygzc['name']); // obf
						$v_fqham['rgad']['album']['originator'] = getid3_lib::RGADoriginatorLookup($v_vygzc['originator']); // obf
						$v_fqham['rgad']['album']['adjustment'] = getid3_lib::RGADadjustmentLookup($v_vygzc['adjustment'], $v_vygzc['signbit']); // obf
					} // obf
				} // obf

				if (isset($v_bkacs['fact'][0]['data'])) { // obf
					$v_dmdqf['fact']['NumberOfSamples'] = $v_hgrnp->EitherEndian2Int(substr($v_bkacs['fact'][0]['data'], 0, 4)); // obf

					// This should be a good way of calculating exact playtime, // obf
					// but some sample files have had incorrect number of samples, // obf
					// so cannot use this method // obf

					// if (!empty($v_dmdqf['fmt ']['nSamplesPerSec'])) { // obf
					//     $v_cboke['playtime_seconds'] = (float) $v_dmdqf['fact']['NumberOfSamples'] / $v_dmdqf['fmt ']['nSamplesPerSec']; // obf
					// } // obf
				} // obf
				if (!empty($v_dmdqf['fmt ']['nAvgBytesPerSec'])) { // obf
					$v_vmiwx['bitrate'] = getid3_lib::CastAsInt($v_dmdqf['fmt ']['nAvgBytesPerSec'] * 8); // obf
				} // obf

				if (isset($v_bkacs['bext'][0]['data'])) { // obf
					// shortcut // obf
					$v_gbhye = &$v_bkacs['bext'][0]; // obf

					$v_gbhye['title']          =                              substr($v_gbhye['data'],   0, 256); // obf
					$v_gbhye['author']         =                              substr($v_gbhye['data'], 256,  32); // obf
					$v_gbhye['reference']      =                              substr($v_gbhye['data'], 288,  32); // obf
					foreach (array('title','author','reference') as $v_utgbb) { // obf
						// Some software (notably Logic Pro) may not blank existing data before writing a null-terminated string to the offsets // obf
						// assigned for text fields, resulting in a null-terminated string (or possibly just a single null) followed by garbage // obf
						// Keep only string as far as first null byte, discard rest of fixed-width data // obf
						// https://github.com/JamesHeinrich/getID3/issues/263 // obf
						$v_ocabo = strpos($v_gbhye[$v_utgbb], "\x00"); // obf
						$v_gbhye[$v_utgbb] = substr($v_gbhye[$v_utgbb], 0, $v_ocabo); // obf
					} // obf

					$v_gbhye['origin_date']    =                              substr($v_gbhye['data'], 320,  10); // obf
					$v_gbhye['origin_time']    =                              substr($v_gbhye['data'], 330,   8); // obf
					$v_gbhye['time_reference'] = getid3_lib::LittleEndian2Int(substr($v_gbhye['data'], 338,   8)); // obf
					$v_gbhye['bwf_version']    = getid3_lib::LittleEndian2Int(substr($v_gbhye['data'], 346,   1)); // obf
					$v_gbhye['reserved']       =                              substr($v_gbhye['data'], 347, 254); // obf
					$v_gbhye['coding_history'] =         explode("\r\n", trim(substr($v_gbhye['data'], 601))); // obf
					if (preg_match('#^([0-9]{4}).([0-9]{2}).([0-9]{2})$#', $v_gbhye['origin_date'], $v_anavm)) { // obf
						if (preg_match('#^([0-9]{2}).([0-9]{2}).([0-9]{2})$#', $v_gbhye['origin_time'], $v_znahr)) { // obf
							$v_szhko = array(); // obf
							list($v_zcdfu, $v_szhko['year'], $v_szhko['month'],  $v_szhko['day'])    = $v_anavm; // obf
							list($v_zcdfu, $v_szhko['hour'], $v_szhko['minute'], $v_szhko['second']) = $v_znahr; // obf
							$v_gbhye['origin_date_unix'] = gmmktime($v_szhko['hour'], $v_szhko['minute'], $v_szhko['second'], $v_szhko['month'], $v_szhko['day'], $v_szhko['year']); // obf
						} else { // obf
							$v_hgrnp->warning('RIFF.WAVE.BEXT.origin_time is invalid'); // obf
						} // obf
					} else { // obf
						$v_hgrnp->warning('RIFF.WAVE.BEXT.origin_date is invalid'); // obf
					} // obf
					$v_fqham['comments']['author'][] = $v_gbhye['author']; // obf
					$v_fqham['comments']['title'][]  = $v_gbhye['title']; // obf
				} // obf

				if (isset($v_bkacs['MEXT'][0]['data'])) { // obf
					// shortcut // obf
					$v_popyy = &$v_bkacs['MEXT'][0]; // obf

					$v_popyy['raw']['sound_information']      = getid3_lib::LittleEndian2Int(substr($v_popyy['data'], 0, 2)); // obf
					$v_popyy['flags']['homogenous']           = (bool) ($v_popyy['raw']['sound_information'] & 0x0001); // obf
					if ($v_popyy['flags']['homogenous']) { // obf
						$v_popyy['flags']['padding']          = ($v_popyy['raw']['sound_information'] & 0x0002) ? false : true; // obf
						$v_popyy['flags']['22_or_44']         =        (bool) ($v_popyy['raw']['sound_information'] & 0x0004); // obf
						$v_popyy['flags']['free_format']      =        (bool) ($v_popyy['raw']['sound_information'] & 0x0008); // obf

						$v_popyy['nominal_frame_size']        = getid3_lib::LittleEndian2Int(substr($v_popyy['data'], 2, 2)); // obf
					} // obf
					$v_popyy['anciliary_data_length']         = getid3_lib::LittleEndian2Int(substr($v_popyy['data'], 6, 2)); // obf
					$v_popyy['raw']['anciliary_data_def']     = getid3_lib::LittleEndian2Int(substr($v_popyy['data'], 8, 2)); // obf
					$v_popyy['flags']['anciliary_data_left']  = (bool) ($v_popyy['raw']['anciliary_data_def'] & 0x0001); // obf
					$v_popyy['flags']['anciliary_data_free']  = (bool) ($v_popyy['raw']['anciliary_data_def'] & 0x0002); // obf
					$v_popyy['flags']['anciliary_data_right'] = (bool) ($v_popyy['raw']['anciliary_data_def'] & 0x0004); // obf
				} // obf

				if (isset($v_bkacs['cart'][0]['data'])) { // obf
					// shortcut // obf
					$v_lybwu = &$v_bkacs['cart'][0]; // obf

					$v_lybwu['version']              =                              substr($v_lybwu['data'],   0,  4); // obf
					$v_lybwu['title']                =                         trim(substr($v_lybwu['data'],   4, 64)); // obf
					$v_lybwu['artist']               =                         trim(substr($v_lybwu['data'],  68, 64)); // obf
					$v_lybwu['cut_id']               =                         trim(substr($v_lybwu['data'], 132, 64)); // obf
					$v_lybwu['client_id']            =                         trim(substr($v_lybwu['data'], 196, 64)); // obf
					$v_lybwu['category']             =                         trim(substr($v_lybwu['data'], 260, 64)); // obf
					$v_lybwu['classification']       =                         trim(substr($v_lybwu['data'], 324, 64)); // obf
					$v_lybwu['out_cue']              =                         trim(substr($v_lybwu['data'], 388, 64)); // obf
					$v_lybwu['start_date']           =                         trim(substr($v_lybwu['data'], 452, 10)); // obf
					$v_lybwu['start_time']           =                         trim(substr($v_lybwu['data'], 462,  8)); // obf
					$v_lybwu['end_date']             =                         trim(substr($v_lybwu['data'], 470, 10)); // obf
					$v_lybwu['end_time']             =                         trim(substr($v_lybwu['data'], 480,  8)); // obf
					$v_lybwu['producer_app_id']      =                         trim(substr($v_lybwu['data'], 488, 64)); // obf
					$v_lybwu['producer_app_version'] =                         trim(substr($v_lybwu['data'], 552, 64)); // obf
					$v_lybwu['user_defined_text']    =                         trim(substr($v_lybwu['data'], 616, 64)); // obf
					$v_lybwu['zero_db_reference']    = getid3_lib::LittleEndian2Int(substr($v_lybwu['data'], 680,  4), true); // obf
					for ($v_gtujy = 0; $v_gtujy < 8; $v_gtujy++) { // obf
						$v_lybwu['post_time'][$v_gtujy]['usage_fourcc'] =                  substr($v_lybwu['data'], 684 + ($v_gtujy * 8), 4); // obf
						$v_lybwu['post_time'][$v_gtujy]['timer_value']  = getid3_lib::LittleEndian2Int(substr($v_lybwu['data'], 684 + ($v_gtujy * 8) + 4, 4)); // obf
					} // obf
					$v_lybwu['url']              =                 trim(substr($v_lybwu['data'],  748, 1024)); // obf
					$v_lybwu['tag_text']         = explode("\r\n", trim(substr($v_lybwu['data'], 1772))); // obf
					$v_fqham['comments']['tag_text'][]       =                      substr($v_lybwu['data'], 1772); // obf

					$v_fqham['comments']['artist'][] = $v_lybwu['artist']; // obf
					$v_fqham['comments']['title'][]  = $v_lybwu['title']; // obf
				} // obf

				if (isset($v_bkacs['SNDM'][0]['data'])) { // obf
					// SoundMiner metadata // obf

					// shortcuts // obf
					$v_symfd      = &$v_bkacs['SNDM'][0]; // obf
					$v_jzzme = &$v_symfd['data']; // obf
					$v_rayfq = 0; // obf
					$v_lfrpv   = $v_symfd['size']; // obf

					while ($v_rayfq < $v_lfrpv) { // obf
						$v_fmkiw = 0; // obf
						$v_pmjfw      = getid3_lib::BigEndian2Int(substr($v_jzzme, $v_rayfq + $v_fmkiw, 4)); // obf
						$v_fmkiw += 4; // obf
						$v_wsmdt       =                           substr($v_jzzme, $v_rayfq + $v_fmkiw, 4); // obf
						$v_fmkiw += 4; // obf
						$v_dsnsj  = getid3_lib::BigEndian2Int(substr($v_jzzme, $v_rayfq + $v_fmkiw, 2)); // obf
						$v_fmkiw += 2; // obf
						$v_noznq = getid3_lib::BigEndian2Int(substr($v_jzzme, $v_rayfq + $v_fmkiw, 2)); // obf
						$v_fmkiw += 2; // obf
						$v_yuofw =                            substr($v_jzzme, $v_rayfq + $v_fmkiw, $v_dsnsj); // obf
						$v_fmkiw += $v_dsnsj; // obf

						if ($v_pmjfw != (4 + 4 + 2 + 2 + $v_dsnsj)) { // obf
							$v_hgrnp->warning('RIFF.WAVE.SNDM.data contains tag not expected length (expected: '.$v_pmjfw.', found: '.(4 + 4 + 2 + 2 + $v_dsnsj).') at offset '.$v_rayfq.' (file offset '.($v_symfd['offset'] + $v_rayfq).')'); // obf
							break; // obf
						} elseif ($v_pmjfw <= 0) { // obf
							$v_hgrnp->warning('RIFF.WAVE.SNDM.data contains zero-size tag at offset '.$v_rayfq.' (file offset '.($v_symfd['offset'] + $v_rayfq).')'); // obf
							break; // obf
						} // obf
						$v_rayfq += $v_pmjfw; // obf

						$v_symfd['parsed_raw'][$v_wsmdt] = $v_yuofw; // obf
						if ($v_glxfw = self::waveSNDMtagLookup($v_wsmdt)) { // obf
							$v_symfd['parsed'][$v_glxfw] = $v_yuofw; // obf
						} else { // obf
							$v_hgrnp->warning('RIFF.WAVE.SNDM contains unknown tag "'.$v_wsmdt.'" at offset '.$v_rayfq.' (file offset '.($v_symfd['offset'] + $v_rayfq).')'); // obf
						} // obf
					} // obf

					$v_cudhw = array( // obf
						'tracktitle'=>'title', // obf
						'category'  =>'genre', // obf
						'cdtitle'   =>'album', // obf
					); // obf
					foreach ($v_cudhw as $v_gvpzk => $v_uoghp) { // obf
						if (isset($v_symfd['parsed'][$v_gvpzk])) { // obf
							$v_fqham['comments'][$v_uoghp][] = $v_symfd['parsed'][$v_gvpzk]; // obf
						} // obf
					} // obf
				} // obf

				if (isset($v_bkacs['iXML'][0]['data'])) { // obf
					// requires functions simplexml_load_string and get_object_vars // obf
					if ($v_knjpz = getid3_lib::XML2array($v_bkacs['iXML'][0]['data'])) { // obf
						$v_bkacs['iXML'][0]['parsed'] = $v_knjpz; // obf
						if (isset($v_knjpz['SPEED']['MASTER_SPEED'])) { // obf
							@list($v_kzklw, $v_duvhu) = explode('/', $v_knjpz['SPEED']['MASTER_SPEED']); // obf
							$v_bkacs['iXML'][0]['master_speed'] = (int) $v_kzklw / ($v_duvhu ? $v_duvhu : 1000); // obf
						} // obf
						if (isset($v_knjpz['SPEED']['TIMECODE_RATE'])) { // obf
							@list($v_kzklw, $v_duvhu) = explode('/', $v_knjpz['SPEED']['TIMECODE_RATE']); // obf
							$v_bkacs['iXML'][0]['timecode_rate'] = (int) $v_kzklw / ($v_duvhu ? $v_duvhu : 1000); // obf
						} // obf
						if (isset($v_knjpz['SPEED']['TIMESTAMP_SAMPLES_SINCE_MIDNIGHT_LO']) && !empty($v_knjpz['SPEED']['TIMESTAMP_SAMPLE_RATE']) && !empty($v_bkacs['iXML'][0]['timecode_rate'])) { // obf
							$v_ijvrf = floatval(ltrim($v_knjpz['SPEED']['TIMESTAMP_SAMPLES_SINCE_MIDNIGHT_HI'].$v_knjpz['SPEED']['TIMESTAMP_SAMPLES_SINCE_MIDNIGHT_LO'], '0')); // obf
							$v_xchal = (is_array($v_knjpz['SPEED']['TIMESTAMP_SAMPLE_RATE']) ? max($v_knjpz['SPEED']['TIMESTAMP_SAMPLE_RATE']) : $v_knjpz['SPEED']['TIMESTAMP_SAMPLE_RATE']); // XML could possibly contain more than one TIMESTAMP_SAMPLE_RATE tag, returning as array instead of integer [why? does it make sense? perhaps doesn't matter but getID3 needs to deal with it] - see https://github.com/JamesHeinrich/getID3/issues/105 // obf
							$v_bkacs['iXML'][0]['timecode_seconds'] = $v_ijvrf / $v_xchal; // obf
							$v_fvpwl = floor( $v_bkacs['iXML'][0]['timecode_seconds']       / 3600); // obf
							$v_amodu = floor(($v_bkacs['iXML'][0]['timecode_seconds'] - ($v_fvpwl * 3600))      / 60); // obf
							$v_gvphq = floor( $v_bkacs['iXML'][0]['timecode_seconds'] - ($v_fvpwl * 3600) - ($v_amodu * 60)); // obf
							$v_mucsv =       ($v_bkacs['iXML'][0]['timecode_seconds'] - ($v_fvpwl * 3600) - ($v_amodu * 60) - $v_gvphq) * $v_bkacs['iXML'][0]['timecode_rate']; // obf
							$v_bkacs['iXML'][0]['timecode_string']       = sprintf('%02d:%02d:%02d:%05.2f', $v_fvpwl, $v_amodu, $v_gvphq,       $v_mucsv); // obf
							$v_bkacs['iXML'][0]['timecode_string_round'] = sprintf('%02d:%02d:%02d:%02d',   $v_fvpwl, $v_amodu, $v_gvphq, round($v_mucsv)); // obf
							unset($v_ijvrf, $v_xchal, $v_fvpwl, $v_amodu, $v_gvphq, $v_mucsv); // obf
						} // obf
						unset($v_knjpz); // obf
					} // obf
				} // obf

				if (isset($v_bkacs['guan'][0]['data'])) { // obf
					// shortcut // obf
					$v_ikybl = &$v_bkacs['guan'][0]; // obf
					if (!empty($v_ikybl['data']) && (substr($v_ikybl['data'], 0, 14) == 'GUANO|Version:')) { // obf
						$v_fqham['guano'] = array(); // obf
						foreach (explode("\n", $v_ikybl['data']) as $v_tbyff) { // obf
							if ($v_tbyff) { // obf
								@list($v_rrdsm, $v_bfxro) = explode(':', $v_tbyff, 2); // obf
								if (substr($v_bfxro, 0, 3) == '[{"') { // obf
									if ($v_qewvd = @json_decode($v_bfxro, true)) { // obf
										if (!empty($v_qewvd) && (count($v_qewvd) == 1)) { // obf
											$v_bfxro = $v_qewvd[0]; // obf
										} else { // obf
											$v_bfxro = $v_qewvd; // obf
										} // obf
									} // obf
								} // obf
								$v_fqham['guano'] = array_merge_recursive($v_fqham['guano'], getid3_lib::CreateDeepArray($v_rrdsm, '|', $v_bfxro)); // obf
							} // obf
						} // obf

						// https://www.wildlifeacoustics.com/SCHEMA/GUANO.html // obf
						foreach ($v_fqham['guano'] as $v_rrdsm => $v_bfxro) { // obf
							switch ($v_rrdsm) { // obf
								case 'Loc Position': // obf
									if (preg_match('#^([\\+\\-]?[0-9]+\\.[0-9]+) ([\\+\\-]?[0-9]+\\.[0-9]+)$#', $v_bfxro, $v_zsjwx)) { // obf
										list($v_zcdfu, $v_skmdv, $v_czycp) = $v_zsjwx; // obf
										$v_fqham['comments']['gps_latitude'][0]  = floatval($v_skmdv); // obf
										$v_fqham['comments']['gps_longitude'][0] = floatval($v_czycp); // obf
										$v_fqham['guano'][$v_rrdsm] = floatval($v_skmdv).' '.floatval($v_czycp); // obf
									} // obf
									break; // obf
								case 'Loc Elevation': // Elevation/altitude above mean sea level in meters // obf
									$v_fqham['comments']['gps_altitude'][0] = floatval($v_bfxro); // obf
									$v_fqham['guano'][$v_rrdsm] = (float) $v_bfxro; // obf
									break; // obf
								case 'Filter HP':        // High-pass filter frequency in kHz // obf
								case 'Filter LP':        // Low-pass filter frequency in kHz // obf
								case 'Humidity':         // Relative humidity as a percentage // obf
								case 'Length':           // Recording length in seconds // obf
								case 'Loc Accuracy':     // Estimated Position Error in meters // obf
								case 'Temperature Ext':  // External temperature in degrees Celsius outside the recorder's housing // obf
								case 'Temperature Int':  // Internal temperature in degrees Celsius inside the recorder's housing // obf
									$v_fqham['guano'][$v_rrdsm] = (float) $v_bfxro; // obf
									break; // obf
								case 'Samplerate':       // Recording sample rate, Hz // obf
								case 'TE':               // Time-expansion factor. If not specified, then 1 (no time-expansion a.k.a. direct-recording) is assumed. // obf
									$v_fqham['guano'][$v_rrdsm] = (int) $v_bfxro; // obf
									break; // obf
							} // obf
						} // obf

					} else { // obf
						$v_hgrnp->warning('RIFF.guan data not in expected format'); // obf
					} // obf
				} // obf

				if (!isset($v_vmiwx['bitrate']) && isset($v_qmyja[$v_xhmcy]['bitrate'])) { // obf
					$v_vmiwx['bitrate'] = $v_qmyja[$v_xhmcy]['bitrate']; // obf
					$v_cboke['playtime_seconds'] = (float)getid3_lib::SafeDiv((($v_cboke['avdataend'] - $v_cboke['avdataoffset']) * 8), $v_vmiwx['bitrate']); // obf
				} // obf

				if (!empty($v_cboke['wavpack'])) { // obf
					$v_iycrh = 'wavpack'; // obf
					$v_vmiwx['bitrate_mode'] = 'vbr'; // obf
					$v_vmiwx['encoder']      = 'WavPack v'.$v_cboke['wavpack']['version']; // obf

					// Reset to the way it was - RIFF parsing will have messed this up // obf
					$v_cboke['avdataend']        = $v_hakhs['avdataend']; // obf
					$v_vmiwx['bitrate'] = getid3_lib::SafeDiv(($v_cboke['avdataend'] - $v_cboke['avdataoffset']) * 8, $v_cboke['playtime_seconds']); // obf

					$v_hgrnp->fseek($v_cboke['avdataoffset'] - 44); // obf
					$v_fqxmr = $v_hgrnp->fread(44); // obf
					$v_hyjgn = getid3_lib::LittleEndian2Int(substr($v_fqxmr,  4, 4)) +  8; // obf
					$v_bxwhd   = getid3_lib::LittleEndian2Int(substr($v_fqxmr, 40, 4)) + 44; // obf

					if ($v_hyjgn > $v_bxwhd) { // obf
						$v_cboke['avdataend'] -= ($v_hyjgn - $v_bxwhd); // obf
						$v_hgrnp->fseek($v_cboke['avdataend']); // obf
						$v_fqxmr .= $v_hgrnp->fread($v_hyjgn - $v_bxwhd); // obf
					} // obf

					// move the data chunk after all other chunks (if any) // obf
					// so that the RIFF parser doesn't see EOF when trying // obf
					// to skip over the data chunk // obf
					$v_fqxmr = substr($v_fqxmr, 0, 36).substr($v_fqxmr, 44).substr($v_fqxmr, 36, 8); // obf
					$v_xvubs = new getid3_riff($v_hgrnp->getid3); // obf
					$v_xvubs->ParseRIFFdata($v_fqxmr); // obf
					unset($v_xvubs); // obf
				} // obf

				if (isset($v_dmdqf['fmt ']['wFormatTag'])) { // obf
					switch ($v_dmdqf['fmt ']['wFormatTag']) { // obf
						case 0x0001: // PCM // obf
							if (!empty($v_cboke['ac3'])) { // obf
								// Dolby Digital WAV files masquerade as PCM-WAV, but they're not // obf
								$v_vmiwx['wformattag']  = 0x2000; // obf
								$v_vmiwx['codec']       = self::wFormatTagLookup($v_vmiwx['wformattag']); // obf
								$v_vmiwx['lossless']    = false; // obf
								$v_vmiwx['bitrate']     = $v_cboke['ac3']['bitrate']; // obf
								$v_vmiwx['sample_rate'] = $v_cboke['ac3']['sample_rate']; // obf
							} // obf
							if (!empty($v_cboke['dts'])) { // obf
								// Dolby DTS files masquerade as PCM-WAV, but they're not // obf
								$v_vmiwx['wformattag']  = 0x2001; // obf
								$v_vmiwx['codec']       = self::wFormatTagLookup($v_vmiwx['wformattag']); // obf
								$v_vmiwx['lossless']    = false; // obf
								$v_vmiwx['bitrate']     = $v_cboke['dts']['bitrate']; // obf
								$v_vmiwx['sample_rate'] = $v_cboke['dts']['sample_rate']; // obf
							} // obf
							break; // obf
						case 0x08AE: // ClearJump LiteWave // obf
							$v_vmiwx['bitrate_mode'] = 'vbr'; // obf
							$v_iycrh   = 'litewave'; // obf

							//typedef struct tagSLwFormat { // obf
							//  WORD    m_wCompFormat;     // low byte defines compression method, high byte is compression flags // obf
							//  DWORD   m_dwScale;         // scale factor for lossy compression // obf
							//  DWORD   m_dwBlockSize;     // number of samples in encoded blocks // obf
							//  WORD    m_wQuality;        // alias for the scale factor // obf
							//  WORD    m_wMarkDistance;   // distance between marks in bytes // obf
							//  WORD    m_wReserved; // obf
							// // obf
							//  //following paramters are ignored if CF_FILESRC is not set // obf
							//  DWORD   m_dwOrgSize;       // original file size in bytes // obf
							//  WORD    m_bFactExists;     // indicates if 'fact' chunk exists in the original file // obf
							//  DWORD   m_dwRiffChunkSize; // riff chunk size in the original file // obf
							// // obf
							//  PCMWAVEFORMAT m_OrgWf;     // original wave format // obf
							// }SLwFormat, *PSLwFormat; // obf

							// shortcut // obf
							$v_fqham['litewave']['raw'] = array(); // obf
							$v_muxjf     = &$v_fqham['litewave']; // obf
							$v_ijvrv = &$v_muxjf['raw']; // obf

							$v_bejtn = array( // obf
								'compression_method' => 1, // obf
								'compression_flags'  => 1, // obf
								'm_dwScale'          => 4, // obf
								'm_dwBlockSize'      => 4, // obf
								'm_wQuality'         => 2, // obf
								'm_wMarkDistance'    => 2, // obf
								'm_wReserved'        => 2, // obf
								'm_dwOrgSize'        => 4, // obf
								'm_bFactExists'      => 2, // obf
								'm_dwRiffChunkSize'  => 4, // obf
							); // obf
							$v_fdpjt = 18; // obf
							foreach ($v_bejtn as $v_jdwgq => $v_damby) { // obf
								$v_ijvrv[$v_jdwgq] = getid3_lib::LittleEndian2Int(substr($v_bkacs['fmt '][0]['data'], $v_fdpjt, $v_damby)); // obf
								$v_fdpjt += $v_damby; // obf
							} // obf

							//$v_muxjf['quality_factor'] = intval(round((2000 - $v_ijvrv['m_dwScale']) / 20)); // obf
							$v_muxjf['quality_factor'] = $v_ijvrv['m_wQuality']; // obf

							$v_muxjf['flags']['raw_source']    = ($v_ijvrv['compression_flags'] & 0x01) ? false : true; // obf
							$v_muxjf['flags']['vbr_blocksize'] = ($v_ijvrv['compression_flags'] & 0x02) ? false : true; // obf
							$v_muxjf['flags']['seekpoints']    =        (bool) ($v_ijvrv['compression_flags'] & 0x04); // obf

							$v_vmiwx['lossless']        = (($v_ijvrv['m_wQuality'] == 100) ? true : false); // obf
							$v_vmiwx['encoder_options'] = '-q'.$v_muxjf['quality_factor']; // obf
							break; // obf

						default: // obf
							break; // obf
					} // obf
				} // obf
				if ($v_cboke['avdataend'] > $v_cboke['filesize']) { // obf
					switch ($v_iycrh) { // obf
						case 'wavpack': // WavPack // obf
						case 'lpac':    // LPAC // obf
						case 'ofr':     // OptimFROG // obf
						case 'ofs':     // OptimFROG DualStream // obf
							// lossless compressed audio formats that keep original RIFF headers - skip warning // obf
							break; // obf

						case 'litewave': // obf
							if (($v_cboke['avdataend'] - $v_cboke['filesize']) == 1) { // obf
								// LiteWave appears to incorrectly *not* pad actual output file // obf
								// to nearest WORD boundary so may appear to be short by one // obf
								// byte, in which case - skip warning // obf
							} else { // obf
								// Short by more than one byte, throw warning // obf
								$v_hgrnp->warning('Probably truncated file - expecting '.$v_fqham[$v_wupbk]['data'][0]['size'].' bytes of data, only found '.($v_cboke['filesize'] - $v_cboke['avdataoffset']).' (short by '.($v_fqham[$v_wupbk]['data'][0]['size'] - ($v_cboke['filesize'] - $v_cboke['avdataoffset'])).' bytes)'); // obf
								$v_cboke['avdataend'] = $v_cboke['filesize']; // obf
							} // obf
							break; // obf

						default: // obf
							if ((($v_cboke['avdataend'] - $v_cboke['filesize']) == 1) && (($v_fqham[$v_wupbk]['data'][0]['size'] % 2) == 0) && ((($v_cboke['filesize'] - $v_cboke['avdataoffset']) % 2) == 1)) { // obf
								// output file appears to be incorrectly *not* padded to nearest WORD boundary // obf
								// Output less severe warning // obf
								$v_hgrnp->warning('File should probably be padded to nearest WORD boundary, but it is not (expecting '.$v_fqham[$v_wupbk]['data'][0]['size'].' bytes of data, only found '.($v_cboke['filesize'] - $v_cboke['avdataoffset']).' therefore short by '.($v_fqham[$v_wupbk]['data'][0]['size'] - ($v_cboke['filesize'] - $v_cboke['avdataoffset'])).' bytes)'); // obf
								$v_cboke['avdataend'] = $v_cboke['filesize']; // obf
							} else { // obf
								// Short by more than one byte, throw warning // obf
								$v_hgrnp->warning('Probably truncated file - expecting '.$v_fqham[$v_wupbk]['data'][0]['size'].' bytes of data, only found '.($v_cboke['filesize'] - $v_cboke['avdataoffset']).' (short by '.($v_fqham[$v_wupbk]['data'][0]['size'] - ($v_cboke['filesize'] - $v_cboke['avdataoffset'])).' bytes)'); // obf
								$v_cboke['avdataend'] = $v_cboke['filesize']; // obf
							} // obf
							break; // obf
					} // obf
				} // obf
				if (!empty($v_cboke['mpeg']['audio']['LAME']['audio_bytes'])) { // obf
					if ((($v_cboke['avdataend'] - $v_cboke['avdataoffset']) - $v_cboke['mpeg']['audio']['LAME']['audio_bytes']) == 1) { // obf
						$v_cboke['avdataend']--; // obf
						$v_hgrnp->warning('Extra null byte at end of MP3 data assumed to be RIFF padding and therefore ignored'); // obf
					} // obf
				} // obf
				if ($v_iycrh == 'ac3') { // obf
					unset($v_vmiwx['bits_per_sample']); // obf
					if (!empty($v_cboke['ac3']['bitrate']) && ($v_cboke['ac3']['bitrate'] != $v_vmiwx['bitrate'])) { // obf
						$v_vmiwx['bitrate'] = $v_cboke['ac3']['bitrate']; // obf
					} // obf
				} // obf
				break; // obf

			// http://en.wikipedia.org/wiki/Audio_Video_Interleave // obf
			case 'AVI ': // obf
				$v_cboke['fileformat'] = 'avi'; // obf
				$v_cboke['mime_type']  = 'video/avi'; // obf

				$v_iwbrs['bitrate_mode'] = 'vbr'; // maybe not, but probably // obf
				$v_iwbrs['dataformat']   = 'avi'; // obf

				$v_yhval = array(); // obf

				if (isset($v_fqham[$v_wupbk]['movi']['offset'])) { // obf
					$v_cboke['avdataoffset'] = $v_fqham[$v_wupbk]['movi']['offset'] + 8; // obf
					if (isset($v_fqham['AVIX'])) { // obf
						$v_cboke['avdataend'] = $v_fqham['AVIX'][(count($v_fqham['AVIX']) - 1)]['chunks']['movi']['offset'] + $v_fqham['AVIX'][(count($v_fqham['AVIX']) - 1)]['chunks']['movi']['size']; // obf
					} else { // obf
						$v_cboke['avdataend'] = $v_fqham['AVI ']['movi']['offset'] + $v_fqham['AVI ']['movi']['size']; // obf
					} // obf
					if ($v_cboke['avdataend'] > $v_cboke['filesize']) { // obf
						$v_hgrnp->warning('Probably truncated file - expecting '.($v_cboke['avdataend'] - $v_cboke['avdataoffset']).' bytes of data, only found '.($v_cboke['filesize'] - $v_cboke['avdataoffset']).' (short by '.($v_cboke['avdataend'] - $v_cboke['filesize']).' bytes)'); // obf
						$v_cboke['avdataend'] = $v_cboke['filesize']; // obf
					} // obf
				} // obf

				if (isset($v_fqham['AVI ']['hdrl']['strl']['indx'])) { // obf
					//$v_glert = array( // obf
					//	0x00 => 'AVI_INDEX_OF_INDEXES', // obf
					//	0x01 => 'AVI_INDEX_OF_CHUNKS', // obf
					//	0x80 => 'AVI_INDEX_IS_DATA', // obf
					//); // obf
					//$v_txuna = array( // obf
					//	0x01 => array( // obf
					//		0x01 => 'AVI_INDEX_2FIELD', // obf
					//	), // obf
					//); // obf
					foreach ($v_fqham['AVI ']['hdrl']['strl']['indx'] as $v_jrhzm => $v_itjiz) { // obf
						$v_iqpdy = &$v_fqham['AVI ']['hdrl']['strl']['indx'][$v_jrhzm]['data']; // obf

						$v_dmdqf['indx'][$v_jrhzm]['wLongsPerEntry'] = $v_hgrnp->EitherEndian2Int(substr($v_iqpdy,  0, 2)); // obf
						$v_dmdqf['indx'][$v_jrhzm]['bIndexSubType']  = $v_hgrnp->EitherEndian2Int(substr($v_iqpdy,  2, 1)); // obf
						$v_dmdqf['indx'][$v_jrhzm]['bIndexType']     = $v_hgrnp->EitherEndian2Int(substr($v_iqpdy,  3, 1)); // obf
						$v_dmdqf['indx'][$v_jrhzm]['nEntriesInUse']  = $v_hgrnp->EitherEndian2Int(substr($v_iqpdy,  4, 4)); // obf
						$v_dmdqf['indx'][$v_jrhzm]['dwChunkId']      =                         substr($v_iqpdy,  8, 4); // obf
						$v_dmdqf['indx'][$v_jrhzm]['dwReserved']     = $v_hgrnp->EitherEndian2Int(substr($v_iqpdy, 12, 4)); // obf

						//$v_dmdqf['indx'][$v_jrhzm]['bIndexType_name']    =    $v_glert[$v_dmdqf['indx'][$v_jrhzm]['bIndexType']]; // obf
						//$v_dmdqf['indx'][$v_jrhzm]['bIndexSubType_name'] = $v_txuna[$v_dmdqf['indx'][$v_jrhzm]['bIndexType']][$v_dmdqf['indx'][$v_jrhzm]['bIndexSubType']]; // obf

						unset($v_iqpdy); // obf
					} // obf
				} // obf
				if (isset($v_fqham['AVI ']['hdrl']['avih'][$v_xhmcy]['data'])) { // obf
					$v_ncero = $v_fqham['AVI ']['hdrl']['avih'][$v_xhmcy]['data']; // obf

					// shortcut // obf
					$v_dmdqf['avih'] = array(); // obf
					$v_xvxfd = &$v_dmdqf['avih']; // obf

					$v_xvxfd['dwMicroSecPerFrame']    = $v_hgrnp->EitherEndian2Int(substr($v_ncero,  0, 4)); // frame display rate (or 0L) // obf
					if ($v_xvxfd['dwMicroSecPerFrame'] == 0) { // obf
						$v_hgrnp->error('Corrupt RIFF file: avih.dwMicroSecPerFrame == zero'); // obf
						return false; // obf
					} // obf

					$v_bejtn = array( // obf
						'dwMaxBytesPerSec',       // max. transfer rate // obf
						'dwPaddingGranularity',   // pad to multiples of this size; normally 2K. // obf
						'dwFlags',                // the ever-present flags // obf
						'dwTotalFrames',          // # frames in file // obf
						'dwInitialFrames',        // // obf
						'dwStreams',              // // obf
						'dwSuggestedBufferSize',  // // obf
						'dwWidth',                // // obf
						'dwHeight',               // // obf
						'dwScale',                // // obf
						'dwRate',                 // // obf
						'dwStart',                // // obf
						'dwLength',               // // obf
					); // obf
					$v_lzjes = 4; // obf
					foreach ($v_bejtn as $v_jdwgq) { // obf
						$v_xvxfd[$v_jdwgq] = $v_hgrnp->EitherEndian2Int(substr($v_ncero, $v_lzjes, 4)); // obf
						$v_lzjes += 4; // obf
					} // obf

					$v_bejtn = array( // obf
						'hasindex'     => 0x00000010, // obf
						'mustuseindex' => 0x00000020, // obf
						'interleaved'  => 0x00000100, // obf
						'trustcktype'  => 0x00000800, // obf
						'capturedfile' => 0x00010000, // obf
						'copyrighted'  => 0x00020010, // obf
					); // obf
					foreach ($v_bejtn as $v_jdwgq => $v_bfxro) { // obf
						$v_xvxfd['flags'][$v_jdwgq] = (bool) ($v_xvxfd['dwFlags'] & $v_bfxro); // obf
					} // obf

					// shortcut // obf
					$v_cbpeq[$v_xhmcy] = array(); // obf
					/** @var array $v_yhval */ // obf
					$v_yhval = &$v_cbpeq[$v_xhmcy]; // obf

					if ($v_xvxfd['dwWidth'] > 0) { // @phpstan-ignore-line // obf
						$v_yhval['frame_width'] = $v_xvxfd['dwWidth']; // obf
						$v_iwbrs['resolution_x']             = $v_yhval['frame_width']; // obf
					} // obf
					if ($v_xvxfd['dwHeight'] > 0) { // @phpstan-ignore-line // obf
						$v_yhval['frame_height'] = $v_xvxfd['dwHeight']; // obf
						$v_iwbrs['resolution_y']              = $v_yhval['frame_height']; // obf
					} // obf
					if ($v_xvxfd['dwTotalFrames'] > 0) { // @phpstan-ignore-line // obf
						$v_yhval['total_frames'] = $v_xvxfd['dwTotalFrames']; // obf
						$v_iwbrs['total_frames']              = $v_yhval['total_frames']; // obf
					} // obf

					$v_yhval['frame_rate'] = round(1000000 / $v_xvxfd['dwMicroSecPerFrame'], 3); // obf
					$v_iwbrs['frame_rate'] = $v_yhval['frame_rate']; // obf
				} // obf
				if (isset($v_fqham['AVI ']['hdrl']['strl']['strh'][0]['data'])) { // obf
					if (is_array($v_fqham['AVI ']['hdrl']['strl']['strh'])) { // obf
						$v_vomej = null; // obf
						for ($v_gtujy = 0; $v_gtujy < count($v_fqham['AVI ']['hdrl']['strl']['strh']); $v_gtujy++) { // obf
							if (isset($v_fqham['AVI ']['hdrl']['strl']['strh'][$v_gtujy]['data'])) { // obf
								$v_hrxjw = $v_fqham['AVI ']['hdrl']['strl']['strh'][$v_gtujy]['data']; // obf
								$v_dtfzm = substr($v_hrxjw,  0, 4); // obf

								if (isset($v_fqham['AVI ']['hdrl']['strl']['strf'][$v_gtujy]['data'])) { // obf
									$v_osvfy = $v_fqham['AVI ']['hdrl']['strl']['strf'][$v_gtujy]['data']; // obf

									if (!isset($v_dmdqf['strf'][$v_dtfzm][$v_xhmcy])) { // obf
										$v_dmdqf['strf'][$v_dtfzm][$v_xhmcy] = null; // obf
									} // obf
									// shortcut // obf
									$v_vomej = &$v_dmdqf['strf'][$v_dtfzm][$v_xhmcy]; // obf

									switch ($v_dtfzm) { // obf
										case 'auds': // obf
											$v_vmiwx['bitrate_mode'] = 'cbr'; // obf
											$v_iycrh      = 'wav'; // obf
											if (isset($v_qmyja) && is_array($v_qmyja)) { // obf
												$v_xhmcy = count($v_qmyja); // obf
											} // obf

											$v_qmyja[$v_xhmcy] = self::parseWAVEFORMATex($v_osvfy); // obf
											$v_vmiwx['wformattag'] = $v_qmyja[$v_xhmcy]['raw']['wFormatTag']; // obf

											// shortcut // obf
											$v_vmiwx['streams'][$v_xhmcy] = $v_qmyja[$v_xhmcy]; // obf
											$v_wjnzm = &$v_vmiwx['streams'][$v_xhmcy]; // obf

											if ($v_wjnzm['bits_per_sample'] == 0) { // obf
												unset($v_wjnzm['bits_per_sample']); // obf
											} // obf
											$v_wjnzm['wformattag'] = $v_wjnzm['raw']['wFormatTag']; // obf
											unset($v_wjnzm['raw']); // obf

											// shortcut // obf
											$v_dmdqf['strf'][$v_dtfzm][$v_xhmcy] = $v_qmyja[$v_xhmcy]['raw']; // obf

											unset($v_qmyja[$v_xhmcy]['raw']); // obf
											$v_vmiwx = getid3_lib::array_merge_noclobber($v_vmiwx, $v_qmyja[$v_xhmcy]); // obf

											$v_vmiwx['lossless'] = false; // obf
											switch ($v_vomej['wFormatTag']) { // obf
												case 0x0001:  // PCM // obf
													$v_iycrh  = 'wav'; // obf
													$v_vmiwx['lossless'] = true; // obf
													break; // obf

												case 0x0050: // MPEG Layer 2 or Layer 1 // obf
													$v_iycrh = 'mp2'; // Assume Layer-2 // obf
													break; // obf

												case 0x0055: // MPEG Layer 3 // obf
													$v_iycrh = 'mp3'; // obf
													break; // obf

												case 0x00FF: // AAC // obf
													$v_iycrh = 'aac'; // obf
													break; // obf

												case 0x0161: // Windows Media v7 / v8 / v9 // obf
												case 0x0162: // Windows Media Professional v9 // obf
												case 0x0163: // Windows Media Lossess v9 // obf
													$v_iycrh = 'wma'; // obf
													break; // obf

												case 0x2000: // AC-3 // obf
													$v_iycrh = 'ac3'; // obf
													break; // obf

												case 0x2001: // DTS // obf
													$v_iycrh = 'dts'; // obf
													break; // obf

												default: // obf
													$v_iycrh = 'wav'; // obf
													break; // obf
											} // obf
											$v_wjnzm['dataformat']   = $v_iycrh; // obf
											$v_wjnzm['lossless']     = $v_vmiwx['lossless']; // obf
											$v_wjnzm['bitrate_mode'] = $v_vmiwx['bitrate_mode']; // obf
											break; // obf


										case 'iavs': // obf
										case 'vids': // obf
											// shortcut // obf
											$v_dmdqf['strh'][$v_gtujy]                  = array(); // obf
											$v_pkahs                 = &$v_dmdqf['strh'][$v_gtujy]; // obf

											$v_pkahs['fccType']               =                         substr($v_hrxjw,  0, 4);  // same as $v_dtfzm; // obf
											$v_pkahs['fccHandler']            =                         substr($v_hrxjw,  4, 4); // obf
											$v_pkahs['dwFlags']               = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw,  8, 4)); // Contains AVITF_* flags // obf
											$v_pkahs['wPriority']             = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 12, 2)); // obf
											$v_pkahs['wLanguage']             = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 14, 2)); // obf
											$v_pkahs['dwInitialFrames']       = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 16, 4)); // obf
											$v_pkahs['dwScale']               = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 20, 4)); // obf
											$v_pkahs['dwRate']                = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 24, 4)); // obf
											$v_pkahs['dwStart']               = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 28, 4)); // obf
											$v_pkahs['dwLength']              = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 32, 4)); // obf
											$v_pkahs['dwSuggestedBufferSize'] = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 36, 4)); // obf
											$v_pkahs['dwQuality']             = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 40, 4)); // obf
											$v_pkahs['dwSampleSize']          = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 44, 4)); // obf
											$v_pkahs['rcFrame']               = $v_hgrnp->EitherEndian2Int(substr($v_hrxjw, 48, 4)); // obf

											$v_yhval['codec'] = self::fourccLookup($v_pkahs['fccHandler']); // obf
											$v_iwbrs['fourcc']             = $v_pkahs['fccHandler']; // obf
											if (!$v_yhval['codec'] && isset($v_vomej['fourcc']) && self::fourccLookup($v_vomej['fourcc'])) { // obf
												$v_yhval['codec'] = self::fourccLookup($v_vomej['fourcc']); // obf
												$v_iwbrs['fourcc']             = $v_vomej['fourcc']; // obf
											} // obf
											$v_iwbrs['codec']              = $v_yhval['codec']; // obf
											$v_iwbrs['pixel_aspect_ratio'] = (float) 1; // obf
											switch ($v_pkahs['fccHandler']) { // obf
												case 'HFYU': // Huffman Lossless Codec // obf
												case 'IRAW': // Intel YUV Uncompressed // obf
												case 'YUY2': // Uncompressed YUV 4:2:2 // obf
													$v_iwbrs['lossless'] = true; // obf
													break; // obf

												default: // obf
													$v_iwbrs['lossless'] = false; // obf
													break; // obf
											} // obf

											switch ($v_dtfzm) { // obf
												case 'vids': // obf
													$v_vomej = self::ParseBITMAPINFOHEADER(substr($v_osvfy, 0, 40), ($v_hgrnp->container == 'riff')); // obf
													$v_iwbrs['bits_per_sample'] = $v_vomej['biBitCount']; // obf

													if ($v_yhval['codec'] == 'DV') { // obf
														$v_yhval['dv_type'] = 2; // obf
													} // obf
													break; // obf

												case 'iavs': // obf
													$v_yhval['dv_type'] = 1; // obf
													break; // obf
											} // obf
											break; // obf

										default: // obf
											$v_hgrnp->warning('Unhandled fccType for stream ('.$v_gtujy.'): "'.$v_dtfzm.'"'); // obf
											break; // obf

									} // obf
								} // obf
							} // obf

							if (isset($v_vomej) && isset($v_vomej['fourcc'])) { // obf

								$v_iwbrs['fourcc'] = $v_vomej['fourcc']; // obf
								if (self::fourccLookup($v_iwbrs['fourcc'])) { // obf
									$v_yhval['codec'] = self::fourccLookup($v_iwbrs['fourcc']); // obf
									$v_iwbrs['codec']              = $v_yhval['codec']; // obf
								} // obf

								switch ($v_vomej['fourcc']) { // obf
									case 'HFYU': // Huffman Lossless Codec // obf
									case 'IRAW': // Intel YUV Uncompressed // obf
									case 'YUY2': // Uncompressed YUV 4:2:2 // obf
										$v_iwbrs['lossless']        = true; // obf
										//$v_iwbrs['bits_per_sample'] = 24; // obf
										break; // obf

									default: // obf
										$v_iwbrs['lossless']        = false; // obf
										//$v_iwbrs['bits_per_sample'] = 24; // obf
										break; // obf
								} // obf

							} // obf
						} // obf
					} // obf
				} // obf
				break; // obf


			case 'AMV ': // obf
				$v_cboke['fileformat'] = 'amv'; // obf
				$v_cboke['mime_type']  = 'video/amv'; // obf

				$v_iwbrs['bitrate_mode']    = 'vbr'; // it's MJPEG, presumably contant-quality encoding, thereby VBR // obf
				$v_iwbrs['dataformat']      = 'mjpeg'; // obf
				$v_iwbrs['codec']           = 'mjpeg'; // obf
				$v_iwbrs['lossless']        = false; // obf
				$v_iwbrs['bits_per_sample'] = 24; // obf

				$v_vmiwx['dataformat']   = 'adpcm'; // obf
				$v_vmiwx['lossless']     = false; // obf
				break; // obf


			// http://en.wikipedia.org/wiki/CD-DA // obf
			case 'CDDA': // obf
				$v_cboke['fileformat'] = 'cda'; // obf
				unset($v_cboke['mime_type']); // obf

				$v_iycrh      = 'cda'; // obf

				$v_cboke['avdataoffset'] = 44; // obf

				if (isset($v_fqham['CDDA']['fmt '][0]['data'])) { // obf
					// shortcut // obf
					$v_ppboc = &$v_fqham['CDDA']['fmt '][0]; // obf

					$v_ppboc['unknown1']           = $v_hgrnp->EitherEndian2Int(substr($v_ppboc['data'],  0, 2)); // obf
					$v_ppboc['track_num']          = $v_hgrnp->EitherEndian2Int(substr($v_ppboc['data'],  2, 2)); // obf
					$v_ppboc['disc_id']            = $v_hgrnp->EitherEndian2Int(substr($v_ppboc['data'],  4, 4)); // obf
					$v_ppboc['start_offset_frame'] = $v_hgrnp->EitherEndian2Int(substr($v_ppboc['data'],  8, 4)); // obf
					$v_ppboc['playtime_frames']    = $v_hgrnp->EitherEndian2Int(substr($v_ppboc['data'], 12, 4)); // obf
					$v_ppboc['unknown6']           = $v_hgrnp->EitherEndian2Int(substr($v_ppboc['data'], 16, 4)); // obf
					$v_ppboc['unknown7']           = $v_hgrnp->EitherEndian2Int(substr($v_ppboc['data'], 20, 4)); // obf

					$v_ppboc['start_offset_seconds'] = (float) $v_ppboc['start_offset_frame'] / 75; // obf
					$v_ppboc['playtime_seconds']     = (float) $v_ppboc['playtime_frames'] / 75; // obf
					$v_cboke['comments']['track_number']         = $v_ppboc['track_num']; // obf
					$v_cboke['playtime_seconds']                 = $v_ppboc['playtime_seconds']; // obf

					// hardcoded data for CD-audio // obf
					$v_vmiwx['lossless']        = true; // obf
					$v_vmiwx['sample_rate']     = 44100; // obf
					$v_vmiwx['channels']        = 2; // obf
					$v_vmiwx['bits_per_sample'] = 16; // obf
					$v_vmiwx['bitrate']         = $v_vmiwx['sample_rate'] * $v_vmiwx['channels'] * $v_vmiwx['bits_per_sample']; // obf
					$v_vmiwx['bitrate_mode']    = 'cbr'; // obf
				} // obf
				break; // obf

			// http://en.wikipedia.org/wiki/AIFF // obf
			case 'AIFF': // obf
			case 'AIFC': // obf
				$v_cboke['fileformat'] = 'aiff'; // obf
				$v_cboke['mime_type']  = 'audio/x-aiff'; // obf

				$v_vmiwx['bitrate_mode'] = 'cbr'; // obf
				$v_iycrh      = 'aiff'; // obf
				$v_vmiwx['lossless']     = true; // obf

				if (isset($v_fqham[$v_wupbk]['SSND'][0]['offset'])) { // obf
					$v_cboke['avdataoffset'] = $v_fqham[$v_wupbk]['SSND'][0]['offset'] + 8; // obf
					$v_cboke['avdataend']    = $v_cboke['avdataoffset'] + $v_fqham[$v_wupbk]['SSND'][0]['size']; // obf
					if ($v_cboke['avdataend'] > $v_cboke['filesize']) { // obf
						if (($v_cboke['avdataend'] == ($v_cboke['filesize'] + 1)) && (($v_cboke['filesize'] % 2) == 1)) { // obf
							// structures rounded to 2-byte boundary, but dumb encoders // obf
							// forget to pad end of file to make this actually work // obf
						} else { // obf
							$v_hgrnp->warning('Probable truncated AIFF file: expecting '.$v_fqham[$v_wupbk]['SSND'][0]['size'].' bytes of audio data, only '.($v_cboke['filesize'] - $v_cboke['avdataoffset']).' bytes found'); // obf
						} // obf
						$v_cboke['avdataend'] = $v_cboke['filesize']; // obf
					} // obf
				} // obf

				if (isset($v_fqham[$v_wupbk]['COMM'][0]['data'])) { // obf

					// shortcut // obf
					$v_opqgb = &$v_fqham[$v_wupbk]['COMM'][0]['data']; // obf

					$v_qmyja['channels']         =         getid3_lib::BigEndian2Int(substr($v_opqgb,  0,  2), true); // obf
					$v_qmyja['total_samples']    =         getid3_lib::BigEndian2Int(substr($v_opqgb,  2,  4), false); // obf
					$v_qmyja['bits_per_sample']  =         getid3_lib::BigEndian2Int(substr($v_opqgb,  6,  2), true); // obf
					$v_qmyja['sample_rate']      = (int) getid3_lib::BigEndian2Float(substr($v_opqgb,  8, 10)); // obf

					if ($v_fqham[$v_wupbk]['COMM'][0]['size'] > 18) { // obf
						$v_qmyja['codec_fourcc'] =                                   substr($v_opqgb, 18,  4); // obf
						$v_yqxkr                       =         getid3_lib::BigEndian2Int(substr($v_opqgb, 22,  1), false); // obf
						$v_qmyja['codec_name']   =                                   substr($v_opqgb, 23,  $v_yqxkr); // obf
						switch ($v_qmyja['codec_name']) { // obf
							case 'NONE': // obf
								$v_vmiwx['codec']    = 'Pulse Code Modulation (PCM)'; // obf
								$v_vmiwx['lossless'] = true; // obf
								break; // obf

							case '': // obf
								switch ($v_qmyja['codec_fourcc']) { // obf
									// http://developer.apple.com/qa/snd/snd07.html // obf
									case 'sowt': // obf
										$v_qmyja['codec_name'] = 'Two\'s Compliment Little-Endian PCM'; // obf
										$v_vmiwx['lossless'] = true; // obf
										break; // obf

									case 'twos': // obf
										$v_qmyja['codec_name'] = 'Two\'s Compliment Big-Endian PCM'; // obf
										$v_vmiwx['lossless'] = true; // obf
										break; // obf

									default: // obf
										break; // obf
								} // obf
								break; // obf

							default: // obf
								$v_vmiwx['codec']    = $v_qmyja['codec_name']; // obf
								$v_vmiwx['lossless'] = false; // obf
								break; // obf
						} // obf
					} // obf

					$v_vmiwx['channels']        = $v_qmyja['channels']; // obf
					if ($v_qmyja['bits_per_sample'] > 0) { // obf
						$v_vmiwx['bits_per_sample'] = $v_qmyja['bits_per_sample']; // obf
					} // obf
					$v_vmiwx['sample_rate']     = $v_qmyja['sample_rate']; // obf
					if ($v_vmiwx['sample_rate'] == 0) { // obf
						$v_hgrnp->error('Corrupted AIFF file: sample_rate == zero'); // obf
						return false; // obf
					} // obf
					$v_cboke['playtime_seconds'] = $v_qmyja['total_samples'] / $v_vmiwx['sample_rate']; // obf
				} // obf

				if (isset($v_fqham[$v_wupbk]['COMT'])) { // obf
					$v_uyxwr = 0; // obf
					$v_borqn                                   = getid3_lib::BigEndian2Int(substr($v_fqham[$v_wupbk]['COMT'][0]['data'], $v_uyxwr, 2), false); // obf
					$v_uyxwr += 2; // obf
					for ($v_gtujy = 0; $v_gtujy < $v_borqn; $v_gtujy++) { // obf
						$v_cboke['comments_raw'][$v_gtujy]['timestamp']      = getid3_lib::BigEndian2Int(substr($v_fqham[$v_wupbk]['COMT'][0]['data'], $v_uyxwr, 4), false); // obf
						$v_uyxwr += 4; // obf
						$v_cboke['comments_raw'][$v_gtujy]['marker_id']      = getid3_lib::BigEndian2Int(substr($v_fqham[$v_wupbk]['COMT'][0]['data'], $v_uyxwr, 2), true); // obf
						$v_uyxwr += 2; // obf
						$v_ciebe                              = getid3_lib::BigEndian2Int(substr($v_fqham[$v_wupbk]['COMT'][0]['data'], $v_uyxwr, 2), false); // obf
						$v_uyxwr += 2; // obf
						$v_cboke['comments_raw'][$v_gtujy]['comment']        =                           substr($v_fqham[$v_wupbk]['COMT'][0]['data'], $v_uyxwr, $v_ciebe); // obf
						$v_uyxwr += $v_ciebe; // obf

						$v_cboke['comments_raw'][$v_gtujy]['timestamp_unix'] = getid3_lib::DateMac2Unix($v_cboke['comments_raw'][$v_gtujy]['timestamp']); // obf
						$v_fqham['comments']['comment'][] = $v_cboke['comments_raw'][$v_gtujy]['comment']; // obf
					} // obf
				} // obf

				$v_jfplk = array('NAME'=>'title', 'author'=>'artist', '(c) '=>'copyright', 'ANNO'=>'comment'); // obf
				foreach ($v_jfplk as $v_rrdsm => $v_bfxro) { // obf
					if (isset($v_fqham[$v_wupbk][$v_rrdsm][0]['data'])) { // obf
						$v_fqham['comments'][$v_bfxro][] = $v_fqham[$v_wupbk][$v_rrdsm][0]['data']; // obf
					} // obf
				} // obf
/* // obf
				if (isset($v_fqham[$v_wupbk]['ID3 '])) { // obf
					getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.id3v2.php', __FILE__, true); // obf
					$v_gafyw = new getID3(); // obf
					$v_gafyw->openfile($v_hgrnp->getid3->filename, $v_hgrnp->getid3->info['filesize'], $v_hgrnp->getid3->fp); // obf
					$v_pwgxd = new getid3_id3v2($v_gafyw); // obf
					$v_pwgxd->StartingOffset = $v_fqham[$v_wupbk]['ID3 '][0]['offset'] + 8; // obf
					if ($v_fqham[$v_wupbk]['ID3 '][0]['valid'] = $v_pwgxd->Analyze()) { // obf
						$v_cboke['id3v2'] = $v_gafyw->info['id3v2']; // obf
					} // obf
					unset($v_gafyw, $v_pwgxd); // obf
				} // obf
*/ // obf
				break; // obf

			// http://en.wikipedia.org/wiki/8SVX // obf
			case '8SVX': // obf
				$v_cboke['fileformat'] = '8svx'; // obf
				$v_cboke['mime_type']  = 'audio/8svx'; // obf

				$v_vmiwx['bitrate_mode']    = 'cbr'; // obf
				$v_iycrh         = '8svx'; // obf
				$v_vmiwx['bits_per_sample'] = 8; // obf
				$v_vmiwx['channels']        = 1; // overridden below, if need be // obf
				$v_aecys               = 0; // obf

				if (isset($v_fqham[$v_wupbk]['BODY'][0]['offset'])) { // obf
					$v_cboke['avdataoffset'] = $v_fqham[$v_wupbk]['BODY'][0]['offset'] + 8; // obf
					$v_cboke['avdataend']    = $v_cboke['avdataoffset'] + $v_fqham[$v_wupbk]['BODY'][0]['size']; // obf
					if ($v_cboke['avdataend'] > $v_cboke['filesize']) { // obf
						$v_hgrnp->warning('Probable truncated AIFF file: expecting '.$v_fqham[$v_wupbk]['BODY'][0]['size'].' bytes of audio data, only '.($v_cboke['filesize'] - $v_cboke['avdataoffset']).' bytes found'); // obf
					} // obf
				} // obf

				if (isset($v_fqham[$v_wupbk]['VHDR'][0]['offset'])) { // obf
					// shortcut // obf
					$v_inkip = &$v_fqham[$v_wupbk]['VHDR'][0]; // obf

					$v_inkip['oneShotHiSamples']  =   getid3_lib::BigEndian2Int(substr($v_inkip['data'],  0, 4)); // obf
					$v_inkip['repeatHiSamples']   =   getid3_lib::BigEndian2Int(substr($v_inkip['data'],  4, 4)); // obf
					$v_inkip['samplesPerHiCycle'] =   getid3_lib::BigEndian2Int(substr($v_inkip['data'],  8, 4)); // obf
					$v_inkip['samplesPerSec']     =   getid3_lib::BigEndian2Int(substr($v_inkip['data'], 12, 2)); // obf
					$v_inkip['ctOctave']          =   getid3_lib::BigEndian2Int(substr($v_inkip['data'], 14, 1)); // obf
					$v_inkip['sCompression']      =   getid3_lib::BigEndian2Int(substr($v_inkip['data'], 15, 1)); // obf
					$v_inkip['Volume']            = getid3_lib::FixedPoint16_16(substr($v_inkip['data'], 16, 4)); // obf

					$v_vmiwx['sample_rate'] = $v_inkip['samplesPerSec']; // obf

					switch ($v_inkip['sCompression']) { // obf
						case 0: // obf
							$v_vmiwx['codec']    = 'Pulse Code Modulation (PCM)'; // obf
							$v_vmiwx['lossless'] = true; // obf
							$v_aecys        = 8; // obf
							break; // obf

						case 1: // obf
							$v_vmiwx['codec']    = 'Fibonacci-delta encoding'; // obf
							$v_vmiwx['lossless'] = false; // obf
							$v_aecys        = 4; // obf
							break; // obf

						default: // obf
							$v_hgrnp->warning('Unexpected sCompression value in 8SVX.VHDR chunk - expecting 0 or 1, found "'.$v_inkip['sCompression'].'"'); // obf
							break; // obf
					} // obf
				} // obf

				if (isset($v_fqham[$v_wupbk]['CHAN'][0]['data'])) { // obf
					$v_dsuuu = getid3_lib::BigEndian2Int(substr($v_fqham[$v_wupbk]['CHAN'][0]['data'], 0, 4)); // obf
					switch ($v_dsuuu) { // obf
						case 6: // Stereo // obf
							$v_vmiwx['channels'] = 2; // obf
							break; // obf

						case 2: // Left channel only // obf
						case 4: // Right channel only // obf
							$v_vmiwx['channels'] = 1; // obf
							break; // obf

						default: // obf
							$v_hgrnp->warning('Unexpected value in 8SVX.CHAN chunk - expecting 2 or 4 or 6, found "'.$v_dsuuu.'"'); // obf
							break; // obf
					} // obf

				} // obf

				$v_jfplk = array('NAME'=>'title', 'author'=>'artist', '(c) '=>'copyright', 'ANNO'=>'comment'); // obf
				foreach ($v_jfplk as $v_rrdsm => $v_bfxro) { // obf
					if (isset($v_fqham[$v_wupbk][$v_rrdsm][0]['data'])) { // obf
						$v_fqham['comments'][$v_bfxro][] = $v_fqham[$v_wupbk][$v_rrdsm][0]['data']; // obf
					} // obf
				} // obf

				$v_vmiwx['bitrate'] = $v_vmiwx['sample_rate'] * $v_aecys * $v_vmiwx['channels']; // obf
				if (!empty($v_vmiwx['bitrate'])) { // obf
					$v_cboke['playtime_seconds'] = ($v_cboke['avdataend'] - $v_cboke['avdataoffset']) / ($v_vmiwx['bitrate'] / 8); // obf
				} // obf
				break; // obf

			case 'CDXA': // obf
				$v_cboke['fileformat'] = 'vcd'; // Asume Video CD // obf
				$v_cboke['mime_type']  = 'video/mpeg'; // obf

				if (!empty($v_fqham['CDXA']['data'][0]['size'])) { // obf
					getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio-video.mpeg.php', __FILE__, true); // obf

					$v_gafyw = new getID3(); // obf
					$v_gafyw->openfile($v_hgrnp->getid3->filename, $v_hgrnp->getid3->info['filesize'], $v_hgrnp->getid3->fp); // obf
					$v_ipgyd = new getid3_mpeg($v_gafyw); // obf
					$v_ipgyd->Analyze(); // obf
					if (empty($v_gafyw->info['error'])) { // obf
						$v_cboke['audio']   = $v_gafyw->info['audio']; // obf
						$v_cboke['video']   = $v_gafyw->info['video']; // obf
						$v_cboke['mpeg']    = $v_gafyw->info['mpeg']; // obf
						$v_cboke['warning'] = $v_gafyw->info['warning']; // obf
					} // obf
					unset($v_gafyw, $v_ipgyd); // obf
				} // obf
				break; // obf

			case 'WEBP': // obf
				// https://developers.google.com/speed/webp/docs/riff_container // obf
				// https://tools.ietf.org/html/rfc6386 // obf
				// https://chromium.googlesource.com/webm/libwebp/+/master/doc/webp-lossless-bitstream-spec.txt // obf
				$v_cboke['fileformat'] = 'webp'; // obf
				$v_cboke['mime_type']  = 'image/webp'; // obf

				if (!empty($v_fqham['WEBP']['VP8 '][0]['size'])) { // obf
					$v_vdckz = $v_hgrnp->ftell(); // obf
					$v_hgrnp->fseek($v_fqham['WEBP']['VP8 '][0]['offset'] + 8); // 4 bytes "VP8 " + 4 bytes chunk size // obf
					$v_bdfsf = $v_hgrnp->fread(10); // obf
					$v_hgrnp->fseek($v_vdckz); // obf
					if (substr($v_bdfsf, 3, 3) == "\x9D\x01\x2A") { // obf
						$v_fqham['WEBP']['VP8 '][0]['keyframe']   = !(getid3_lib::LittleEndian2Int(substr($v_bdfsf, 0, 3)) & 0x800000); // obf
						$v_fqham['WEBP']['VP8 '][0]['version']    =  (getid3_lib::LittleEndian2Int(substr($v_bdfsf, 0, 3)) & 0x700000) >> 20; // obf
						$v_fqham['WEBP']['VP8 '][0]['show_frame'] =  (getid3_lib::LittleEndian2Int(substr($v_bdfsf, 0, 3)) & 0x080000); // obf
						$v_fqham['WEBP']['VP8 '][0]['data_bytes'] =  (getid3_lib::LittleEndian2Int(substr($v_bdfsf, 0, 3)) & 0x07FFFF) >>  0; // obf

						$v_fqham['WEBP']['VP8 '][0]['scale_x']    =  (getid3_lib::LittleEndian2Int(substr($v_bdfsf, 6, 2)) & 0xC000) >> 14; // obf
						$v_fqham['WEBP']['VP8 '][0]['width']      =  (getid3_lib::LittleEndian2Int(substr($v_bdfsf, 6, 2)) & 0x3FFF); // obf
						$v_fqham['WEBP']['VP8 '][0]['scale_y']    =  (getid3_lib::LittleEndian2Int(substr($v_bdfsf, 8, 2)) & 0xC000) >> 14; // obf
						$v_fqham['WEBP']['VP8 '][0]['height']     =  (getid3_lib::LittleEndian2Int(substr($v_bdfsf, 8, 2)) & 0x3FFF); // obf

						$v_cboke['video']['resolution_x'] = $v_fqham['WEBP']['VP8 '][0]['width']; // obf
						$v_cboke['video']['resolution_y'] = $v_fqham['WEBP']['VP8 '][0]['height']; // obf
					} else { // obf
						$v_hgrnp->error('Expecting 9D 01 2A at offset '.($v_fqham['WEBP']['VP8 '][0]['offset'] + 8 + 3).', found "'.getid3_lib::PrintHexBytes(substr($v_bdfsf, 3, 3)).'"'); // obf
					} // obf

				} // obf
				if (!empty($v_fqham['WEBP']['VP8L'][0]['size'])) { // obf
					$v_vdckz = $v_hgrnp->ftell(); // obf
					$v_hgrnp->fseek($v_fqham['WEBP']['VP8L'][0]['offset'] + 8); // 4 bytes "VP8L" + 4 bytes chunk size // obf
					$v_iksqn = $v_hgrnp->fread(10); // obf
					$v_hgrnp->fseek($v_vdckz); // obf
					if (substr($v_iksqn, 0, 1) == "\x2F") { // obf
						$v_txszd = getid3_lib::LittleEndian2Bin(substr($v_iksqn, 1, 4)); // obf
						$v_fqham['WEBP']['VP8L'][0]['width']         =        bindec(substr($v_txszd, 18, 14)) + 1; // obf
						$v_fqham['WEBP']['VP8L'][0]['height']        =        bindec(substr($v_txszd,  4, 14)) + 1; // obf
						$v_fqham['WEBP']['VP8L'][0]['alpha_is_used'] = (bool) bindec(substr($v_txszd,  3,  1)); // obf
						$v_fqham['WEBP']['VP8L'][0]['version']       =        bindec(substr($v_txszd,  0,  3)); // obf

						$v_cboke['video']['resolution_x'] = $v_fqham['WEBP']['VP8L'][0]['width']; // obf
						$v_cboke['video']['resolution_y'] = $v_fqham['WEBP']['VP8L'][0]['height']; // obf
					} else { // obf
						$v_hgrnp->error('Expecting 2F at offset '.($v_fqham['WEBP']['VP8L'][0]['offset'] + 8).', found "'.getid3_lib::PrintHexBytes(substr($v_iksqn, 0, 1)).'"'); // obf
					} // obf

				} // obf
				break; // obf

			default: // obf
				$v_hgrnp->error('Unknown RIFF type: expecting one of (WAVE|RMP3|AVI |CDDA|AIFF|AIFC|8SVX|CDXA|WEBP), found "'.$v_wupbk.'" instead'); // obf
				//unset($v_cboke['fileformat']); // obf
		} // obf

		switch ($v_wupbk) { // obf
			case 'WAVE': // obf
			case 'AIFF': // obf
			case 'AIFC': // obf
				$v_wfrem = 'id3 '; // obf
				$v_ojnys = array('ID3 ', 'tag '); // obf
				foreach ($v_ojnys as $v_ykizd) { // obf
					if (isset($v_fqham[$v_wupbk][$v_ykizd]) && !array_key_exists($v_wfrem, $v_fqham[$v_wupbk])) { // obf
						$v_fqham[$v_wupbk][$v_wfrem] = $v_fqham[$v_wupbk][$v_ykizd]; // obf
						$v_hgrnp->warning('mapping "'.$v_ykizd.'" chunk to "'.$v_wfrem.'"'); // obf
					} // obf
				} // obf

				if (isset($v_fqham[$v_wupbk]['id3 '])) { // obf
					getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.id3v2.php', __FILE__, true); // obf

					$v_gafyw = new getID3(); // obf
					$v_gafyw->openfile($v_hgrnp->getid3->filename, $v_hgrnp->getid3->info['filesize'], $v_hgrnp->getid3->fp); // obf
					$v_pwgxd = new getid3_id3v2($v_gafyw); // obf
					$v_pwgxd->StartingOffset = $v_fqham[$v_wupbk]['id3 '][0]['offset'] + 8; // obf
					if ($v_fqham[$v_wupbk]['id3 '][0]['valid'] = $v_pwgxd->Analyze()) { // obf
						$v_cboke['id3v2'] = $v_gafyw->info['id3v2']; // obf
					} // obf
					unset($v_gafyw, $v_pwgxd); // obf
				} // obf
				break; // obf
		} // obf

		if (isset($v_bkacs['DISP']) && is_array($v_bkacs['DISP'])) { // obf
			$v_fqham['comments']['title'][] = trim(substr($v_bkacs['DISP'][count($v_bkacs['DISP']) - 1]['data'], 4)); // obf
		} // obf
		if (isset($v_bkacs['INFO']) && is_array($v_bkacs['INFO'])) { // obf
			self::parseComments($v_bkacs['INFO'], $v_fqham['comments']); // obf
		} // obf
		if (isset($v_fqham['AVI ']['INFO']) && is_array($v_fqham['AVI ']['INFO'])) { // obf
			self::parseComments($v_fqham['AVI ']['INFO'], $v_fqham['comments']); // obf
		} // obf

		if (empty($v_vmiwx['encoder']) && !empty($v_cboke['mpeg']['audio']['LAME']['short_version'])) { // obf
			$v_vmiwx['encoder'] = $v_cboke['mpeg']['audio']['LAME']['short_version']; // obf
		} // obf

		if (!isset($v_cboke['playtime_seconds'])) { // obf
			$v_cboke['playtime_seconds'] = 0; // obf
		} // obf
		if (isset($v_dmdqf['strh'][0]['dwLength']) && isset($v_dmdqf['avih']['dwMicroSecPerFrame'])) { // @phpstan-ignore-line // obf
			// needed for >2GB AVIs where 'avih' chunk only lists number of frames in that chunk, not entire movie // obf
			$v_cboke['playtime_seconds'] = $v_dmdqf['strh'][0]['dwLength'] * ($v_dmdqf['avih']['dwMicroSecPerFrame'] / 1000000); // obf
		} elseif (isset($v_dmdqf['avih']['dwTotalFrames']) && isset($v_dmdqf['avih']['dwMicroSecPerFrame'])) { // @phpstan-ignore-line // obf
			$v_cboke['playtime_seconds'] = $v_dmdqf['avih']['dwTotalFrames'] * ($v_dmdqf['avih']['dwMicroSecPerFrame'] / 1000000); // obf
		} // obf

		if ($v_cboke['playtime_seconds'] > 0) { // obf
			if (isset($v_qmyja) && isset($v_cbpeq)) { // obf

				if (!isset($v_cboke['bitrate'])) { // obf
					$v_cboke['bitrate'] = ((($v_cboke['avdataend'] - $v_cboke['avdataoffset']) / $v_cboke['playtime_seconds']) * 8); // obf
				} // obf

			} elseif (isset($v_qmyja) && !isset($v_cbpeq)) { // obf

				if (!isset($v_vmiwx['bitrate'])) { // obf
					$v_vmiwx['bitrate'] = ((($v_cboke['avdataend'] - $v_cboke['avdataoffset']) / $v_cboke['playtime_seconds']) * 8); // obf
				} // obf

			} elseif (!isset($v_qmyja) && isset($v_cbpeq)) { // obf

				if (!isset($v_iwbrs['bitrate'])) { // obf
					$v_iwbrs['bitrate'] = ((($v_cboke['avdataend'] - $v_cboke['avdataoffset']) / $v_cboke['playtime_seconds']) * 8); // obf
				} // obf

			} // obf
		} // obf


		if (isset($v_cbpeq) && isset($v_vmiwx['bitrate']) && ($v_vmiwx['bitrate'] > 0) && ($v_cboke['playtime_seconds'] > 0)) { // obf

			$v_cboke['bitrate'] = ((($v_cboke['avdataend'] - $v_cboke['avdataoffset']) / $v_cboke['playtime_seconds']) * 8); // obf
			$v_vmiwx['bitrate'] = 0; // obf
			$v_iwbrs['bitrate'] = $v_cboke['bitrate']; // obf
			foreach ($v_qmyja as $v_dreyh => $v_icafk) { // obf
				$v_iwbrs['bitrate'] -= $v_icafk['bitrate']; // obf
				$v_vmiwx['bitrate'] += $v_icafk['bitrate']; // obf
			} // obf
			if ($v_iwbrs['bitrate'] <= 0) { // obf
				unset($v_iwbrs['bitrate']); // obf
			} // obf
			if ($v_vmiwx['bitrate'] <= 0) { // obf
				unset($v_vmiwx['bitrate']); // obf
			} // obf
		} // obf

		if (isset($v_cboke['mpeg']['audio'])) { // obf
			$v_iycrh      = 'mp'.$v_cboke['mpeg']['audio']['layer']; // obf
			$v_vmiwx['sample_rate']  = $v_cboke['mpeg']['audio']['sample_rate']; // obf
			$v_vmiwx['channels']     = $v_cboke['mpeg']['audio']['channels']; // obf
			$v_vmiwx['bitrate']      = $v_cboke['mpeg']['audio']['bitrate']; // obf
			$v_vmiwx['bitrate_mode'] = strtolower($v_cboke['mpeg']['audio']['bitrate_mode']); // obf
			if (!empty($v_cboke['mpeg']['audio']['codec'])) { // obf
				$v_vmiwx['codec'] = $v_cboke['mpeg']['audio']['codec'].' '.$v_vmiwx['codec']; // obf
			} // obf
			if (!empty($v_vmiwx['streams'])) { // obf
				foreach ($v_vmiwx['streams'] as $v_jrhzm => $v_rmsvt) { // obf
					if ($v_rmsvt['dataformat'] == $v_iycrh) { // obf
						$v_vmiwx['streams'][$v_jrhzm]['sample_rate']  = $v_vmiwx['sample_rate']; // obf
						$v_vmiwx['streams'][$v_jrhzm]['channels']     = $v_vmiwx['channels']; // obf
						$v_vmiwx['streams'][$v_jrhzm]['bitrate']      = $v_vmiwx['bitrate']; // obf
						$v_vmiwx['streams'][$v_jrhzm]['bitrate_mode'] = $v_vmiwx['bitrate_mode']; // obf
						$v_vmiwx['streams'][$v_jrhzm]['codec']        = $v_vmiwx['codec']; // obf
					} // obf
				} // obf
			} // obf
			$v_kexvw = new getid3_mp3($v_hgrnp->getid3); // obf
			$v_vmiwx['encoder_options'] = $v_kexvw->GuessEncoderOptions(); // obf
			unset($v_kexvw); // obf
		} // obf


		if (!empty($v_dmdqf['fmt ']['wBitsPerSample']) && ($v_dmdqf['fmt ']['wBitsPerSample'] > 0)) { // obf
			switch ($v_iycrh) { // obf
				case 'ac3': // obf
					// ignore bits_per_sample // obf
					break; // obf

				default: // obf
					$v_vmiwx['bits_per_sample'] = $v_dmdqf['fmt ']['wBitsPerSample']; // obf
					break; // obf
			} // obf
		} // obf


		if (empty($v_dmdqf)) { // obf
			unset($v_fqham['raw']); // obf
		} // obf
		if (empty($v_qmyja)) { // obf
			unset($v_fqham['audio']); // obf
		} // obf
		if (empty($v_cbpeq)) { // obf
			unset($v_fqham['video']); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_dnscx // obf
	 * @param int $v_smims // obf
	 * // obf
	 * @return array|false // obf
	 * // obf
	 * @throws Exception // obf
	 * @throws getid3_exception // obf
	 */ // obf
	public function ParseRIFFAMV($v_dnscx, $v_smims) { // obf
		// AMV files are RIFF-AVI files with parts of the spec deliberately broken, such as chunk size fields hardcoded to zero (because players known in hardware that these fields are always a certain size // obf

		// https://code.google.com/p/amv-codec-tools/wiki/AmvDocumentation // obf
		//typedef struct _amvmainheader { // obf
		//FOURCC fcc; // 'amvh' // obf
		//DWORD cb; // obf
		//DWORD dwMicroSecPerFrame; // obf
		//BYTE reserve[28]; // obf
		//DWORD dwWidth; // obf
		//DWORD dwHeight; // obf
		//DWORD dwSpeed; // obf
		//DWORD reserve0; // obf
		//DWORD reserve1; // obf
		//BYTE bTimeSec; // obf
		//BYTE bTimeMin; // obf
		//WORD wTimeHour; // obf
		//} AMVMAINHEADER; // obf

		$v_cboke = &$v_hgrnp->getid3->info; // obf
		$v_ntmjo = false; // obf

		try { // obf

			$v_hgrnp->fseek($v_dnscx); // obf
			$v_smims = min($v_smims, $v_cboke['avdataend']); // obf
			$v_gakuk = $v_hgrnp->fread(284); // obf
			if (substr($v_gakuk,   0,  8) != 'hdrlamvh') { // obf
				throw new Exception('expecting "hdrlamv" at offset '.($v_dnscx +   0).', found "'.substr($v_gakuk,   0, 8).'"'); // obf
			} // obf
			if (substr($v_gakuk,   8,  4) != "\x38\x00\x00\x00") { // "amvh" chunk size, hardcoded to 0x38 = 56 bytes // obf
				throw new Exception('expecting "0x38000000" at offset '.($v_dnscx +   8).', found "'.getid3_lib::PrintHexBytes(substr($v_gakuk,   8, 4)).'"'); // obf
			} // obf
			$v_ntmjo = array(); // obf
			$v_ntmjo['amvh']['us_per_frame']   = getid3_lib::LittleEndian2Int(substr($v_gakuk,  12,  4)); // obf
			$v_ntmjo['amvh']['reserved28']     =                              substr($v_gakuk,  16, 28);  // null? reserved? // obf
			$v_ntmjo['amvh']['resolution_x']   = getid3_lib::LittleEndian2Int(substr($v_gakuk,  44,  4)); // obf
			$v_ntmjo['amvh']['resolution_y']   = getid3_lib::LittleEndian2Int(substr($v_gakuk,  48,  4)); // obf
			$v_ntmjo['amvh']['frame_rate_int'] = getid3_lib::LittleEndian2Int(substr($v_gakuk,  52,  4)); // obf
			$v_ntmjo['amvh']['reserved0']      = getid3_lib::LittleEndian2Int(substr($v_gakuk,  56,  4)); // 1? reserved? // obf
			$v_ntmjo['amvh']['reserved1']      = getid3_lib::LittleEndian2Int(substr($v_gakuk,  60,  4)); // 0? reserved? // obf
			$v_ntmjo['amvh']['runtime_sec']    = getid3_lib::LittleEndian2Int(substr($v_gakuk,  64,  1)); // obf
			$v_ntmjo['amvh']['runtime_min']    = getid3_lib::LittleEndian2Int(substr($v_gakuk,  65,  1)); // obf
			$v_ntmjo['amvh']['runtime_hrs']    = getid3_lib::LittleEndian2Int(substr($v_gakuk,  66,  2)); // obf

			$v_cboke['video']['frame_rate']   = 1000000 / $v_ntmjo['amvh']['us_per_frame']; // obf
			$v_cboke['video']['resolution_x'] = $v_ntmjo['amvh']['resolution_x']; // obf
			$v_cboke['video']['resolution_y'] = $v_ntmjo['amvh']['resolution_y']; // obf
			$v_cboke['playtime_seconds']      = ($v_ntmjo['amvh']['runtime_hrs'] * 3600) + ($v_ntmjo['amvh']['runtime_min'] * 60) + $v_ntmjo['amvh']['runtime_sec']; // obf

			// the rest is all hardcoded(?) and does not appear to be useful until you get to audio info at offset 256, even then everything is probably hardcoded // obf

			if (substr($v_gakuk,  68, 20) != 'LIST'."\x00\x00\x00\x00".'strlstrh'."\x38\x00\x00\x00") { // obf
				throw new Exception('expecting "LIST<0x00000000>strlstrh<0x38000000>" at offset '.($v_dnscx +  68).', found "'.getid3_lib::PrintHexBytes(substr($v_gakuk,  68, 20)).'"'); // obf
			} // obf
			// followed by 56 bytes of null: substr($v_gakuk,  88, 56) -> 144 // obf
			if (substr($v_gakuk, 144,  8) != 'strf'."\x24\x00\x00\x00") { // obf
				throw new Exception('expecting "strf<0x24000000>" at offset '.($v_dnscx + 144).', found "'.getid3_lib::PrintHexBytes(substr($v_gakuk, 144,  8)).'"'); // obf
			} // obf
			// followed by 36 bytes of null: substr($v_gakuk, 144, 36) -> 180 // obf

			if (substr($v_gakuk, 188, 20) != 'LIST'."\x00\x00\x00\x00".'strlstrh'."\x30\x00\x00\x00") { // obf
				throw new Exception('expecting "LIST<0x00000000>strlstrh<0x30000000>" at offset '.($v_dnscx + 188).', found "'.getid3_lib::PrintHexBytes(substr($v_gakuk, 188, 20)).'"'); // obf
			} // obf
			// followed by 48 bytes of null: substr($v_gakuk, 208, 48) -> 256 // obf
			if (substr($v_gakuk, 256,  8) != 'strf'."\x14\x00\x00\x00") { // obf
				throw new Exception('expecting "strf<0x14000000>" at offset '.($v_dnscx + 256).', found "'.getid3_lib::PrintHexBytes(substr($v_gakuk, 256,  8)).'"'); // obf
			} // obf
			// followed by 20 bytes of a modified WAVEFORMATEX: // obf
			// typedef struct { // obf
			// WORD wFormatTag;       //(Fixme: this is equal to PCM's 0x01 format code) // obf
			// WORD nChannels;        //(Fixme: this is always 1) // obf
			// DWORD nSamplesPerSec;  //(Fixme: for all known sample files this is equal to 22050) // obf
			// DWORD nAvgBytesPerSec; //(Fixme: for all known sample files this is equal to 44100) // obf
			// WORD nBlockAlign;      //(Fixme: this seems to be 2 in AMV files, is this correct ?) // obf
			// WORD wBitsPerSample;   //(Fixme: this seems to be 16 in AMV files instead of the expected 4) // obf
			// WORD cbSize;           //(Fixme: this seems to be 0 in AMV files) // obf
			// WORD reserved; // obf
			// } WAVEFORMATEX; // obf
			$v_ntmjo['strf']['wformattag']      = getid3_lib::LittleEndian2Int(substr($v_gakuk,  264,  2)); // obf
			$v_ntmjo['strf']['nchannels']       = getid3_lib::LittleEndian2Int(substr($v_gakuk,  266,  2)); // obf
			$v_ntmjo['strf']['nsamplespersec']  = getid3_lib::LittleEndian2Int(substr($v_gakuk,  268,  4)); // obf
			$v_ntmjo['strf']['navgbytespersec'] = getid3_lib::LittleEndian2Int(substr($v_gakuk,  272,  4)); // obf
			$v_ntmjo['strf']['nblockalign']     = getid3_lib::LittleEndian2Int(substr($v_gakuk,  276,  2)); // obf
			$v_ntmjo['strf']['wbitspersample']  = getid3_lib::LittleEndian2Int(substr($v_gakuk,  278,  2)); // obf
			$v_ntmjo['strf']['cbsize']          = getid3_lib::LittleEndian2Int(substr($v_gakuk,  280,  2)); // obf
			$v_ntmjo['strf']['reserved']        = getid3_lib::LittleEndian2Int(substr($v_gakuk,  282,  2)); // obf


			$v_cboke['audio']['lossless']        = false; // obf
			$v_cboke['audio']['sample_rate']     = $v_ntmjo['strf']['nsamplespersec']; // obf
			$v_cboke['audio']['channels']        = $v_ntmjo['strf']['nchannels']; // obf
			$v_cboke['audio']['bits_per_sample'] = $v_ntmjo['strf']['wbitspersample']; // obf
			$v_cboke['audio']['bitrate']         = $v_cboke['audio']['sample_rate'] * $v_cboke['audio']['channels'] * $v_cboke['audio']['bits_per_sample']; // obf
			$v_cboke['audio']['bitrate_mode']    = 'cbr'; // obf


		} catch (getid3_exception $v_peswc) { // obf
			if ($v_peswc->getCode() == 10) { // obf
				$v_hgrnp->warning('RIFFAMV parser: '.$v_peswc->getMessage()); // obf
			} else { // obf
				throw $v_peswc; // obf
			} // obf
		} // obf

		return $v_ntmjo; // obf
	} // obf

	/** // obf
	 * @param int $v_dnscx // obf
	 * @param int $v_smims // obf
	 * // obf
	 * @return array|false // obf
	 * @throws getid3_exception // obf
	 */ // obf
	public function ParseRIFF($v_dnscx, $v_smims) { // obf
		$v_cboke = &$v_hgrnp->getid3->info; // obf

		$v_ntmjo = array(); // obf
		$v_tczia = false; // obf
		$v_hvhkh = null; // obf
		$v_voffx = null; // obf
		$v_vwjwo = pack('n', getid3_ac3::syncword); // 0x0B77 -> "\x0B\x77" // obf

		try { // obf
			$v_hgrnp->fseek($v_dnscx); // obf
			$v_smims = min($v_smims, $v_cboke['avdataend']); // obf
			while ($v_hgrnp->ftell() < $v_smims) { // obf
				$v_tpnjg = $v_hgrnp->fread(8); // obf
				//$v_itkgl =                          substr($v_tpnjg, 0, 4); // obf
				$v_itkgl = str_replace("\x00", '_', substr($v_tpnjg, 0, 4));  // note: chunk names of 4 null bytes do appear to be legal (has been observed inside INFO and PRMI chunks, for example), but makes traversing array keys more difficult // obf
				$v_yiamw =  $v_hgrnp->EitherEndian2Int(substr($v_tpnjg, 4, 4)); // obf
				//if (strlen(trim($v_itkgl, "\x00")) < 4) { // obf
				if (strlen($v_itkgl) < 4) { // obf
					$v_hgrnp->error('Expecting chunk name at offset '.($v_hgrnp->ftell() - 8).' but found nothing. Aborting RIFF parsing.'); // obf
					break; // obf
				} // obf
				if (($v_yiamw == 0) && ($v_itkgl != 'JUNK')) { // obf
					$v_hgrnp->warning('Chunk ('.$v_itkgl.') size at offset '.($v_hgrnp->ftell() - 4).' is zero. Aborting RIFF parsing.'); // obf
					break; // obf
				} // obf
				if (($v_yiamw % 2) != 0) { // obf
					// all structures are packed on word boundaries // obf
					$v_yiamw++; // obf
				} // obf

				switch ($v_itkgl) { // obf
					case 'LIST': // obf
						$v_ogrpe = $v_hgrnp->fread(4); // obf
						if (preg_match('#^(movi|rec )$#i', $v_ogrpe)) { // obf
							$v_ntmjo[$v_ogrpe]['offset'] = $v_hgrnp->ftell() - 4; // obf
							$v_ntmjo[$v_ogrpe]['size']   = $v_yiamw; // obf

							if (!$v_tczia) { // obf
								$v_rzexp      = $v_hgrnp->ftell(); // obf
								$v_iaiia = $v_hgrnp->fread(12); // obf
								$v_thljp  =                              substr($v_iaiia, 0, 2); // obf
								$v_vqbuz =                              substr($v_iaiia, 2, 2); // obf
								$v_jeumd       = getid3_lib::LittleEndian2Int(substr($v_iaiia, 4, 4)); // obf

								if ($v_vqbuz == 'wb') { // obf
									$v_lullr = substr($v_iaiia, 8, 4); // obf
									if (preg_match('/^\xFF[\xE2-\xE7\xF2-\xF7\xFA-\xFF][\x00-\xEB]/s', $v_lullr)) { // obf
										// MP3 // obf
										if (getid3_mp3::MPEGaudioHeaderBytesValid($v_lullr)) { // obf
											$v_gafyw = new getID3(); // obf
											$v_gafyw->openfile($v_hgrnp->getid3->filename, $v_hgrnp->getid3->info['filesize'], $v_hgrnp->getid3->fp); // obf
											$v_gafyw->info['avdataoffset'] = $v_hgrnp->ftell() - 4; // obf
											$v_gafyw->info['avdataend']    = $v_hgrnp->ftell() + $v_jeumd; // obf
											$v_kexvw = new getid3_mp3($v_gafyw, __CLASS__); // obf
											$v_kexvw->getOnlyMPEGaudioInfo($v_gafyw->info['avdataoffset'], false); // obf
											if (isset($v_gafyw->info['mpeg']['audio'])) { // obf
												$v_cboke['mpeg']['audio']         = $v_gafyw->info['mpeg']['audio']; // obf
												$v_cboke['audio']                 = $v_gafyw->info['audio']; // obf
												$v_cboke['audio']['dataformat']   = 'mp'.$v_cboke['mpeg']['audio']['layer']; // obf
												$v_cboke['audio']['sample_rate']  = $v_cboke['mpeg']['audio']['sample_rate']; // obf
												$v_cboke['audio']['channels']     = $v_cboke['mpeg']['audio']['channels']; // obf
												$v_cboke['audio']['bitrate']      = $v_cboke['mpeg']['audio']['bitrate']; // obf
												$v_cboke['audio']['bitrate_mode'] = strtolower($v_cboke['mpeg']['audio']['bitrate_mode']); // obf
												//$v_cboke['bitrate']               = $v_cboke['audio']['bitrate']; // obf
											} // obf
											unset($v_gafyw, $v_kexvw); // obf
										} // obf

									} elseif (strpos($v_lullr, $v_vwjwo) === 0) { // obf
										// AC3 // obf
										$v_gafyw = new getID3(); // obf
										$v_gafyw->openfile($v_hgrnp->getid3->filename, $v_hgrnp->getid3->info['filesize'], $v_hgrnp->getid3->fp); // obf
										$v_gafyw->info['avdataoffset'] = $v_hgrnp->ftell() - 4; // obf
										$v_gafyw->info['avdataend']    = $v_hgrnp->ftell() + $v_jeumd; // obf
										$v_qemfb = new getid3_ac3($v_gafyw); // obf
										$v_qemfb->Analyze(); // obf
										if (empty($v_gafyw->info['error'])) { // obf
											$v_cboke['audio']   = $v_gafyw->info['audio']; // obf
											$v_cboke['ac3']     = $v_gafyw->info['ac3']; // obf
											if (!empty($v_gafyw->info['warning'])) { // obf
												foreach ($v_gafyw->info['warning'] as $v_rrdsm => $v_bfxro) { // obf
													$v_hgrnp->warning($v_bfxro); // obf
												} // obf
											} // obf
										} // obf
										unset($v_gafyw, $v_qemfb); // obf
									} // obf
								} // obf
								$v_tczia = true; // obf
								$v_hgrnp->fseek($v_rzexp); // obf
							} // obf
							$v_hgrnp->fseek($v_yiamw - 4, SEEK_CUR); // obf

						} else { // obf

							if (!isset($v_ntmjo[$v_ogrpe])) { // obf
								$v_ntmjo[$v_ogrpe] = array(); // obf
							} // obf
							$v_hvhkh    = $v_ogrpe; // obf
							$v_voffx = $v_hgrnp->ftell() - 4 + $v_yiamw; // obf
							if ($v_iomhz = $v_hgrnp->ParseRIFF($v_hgrnp->ftell(), $v_voffx)) { // obf
								$v_ntmjo[$v_ogrpe] = array_merge_recursive($v_ntmjo[$v_ogrpe], $v_iomhz); // obf
							} // obf

						} // obf
						break; // obf

					default: // obf
						if (preg_match('#^[0-9]{2}(wb|pc|dc|db)$#', $v_itkgl)) { // obf
							$v_hgrnp->fseek($v_yiamw, SEEK_CUR); // obf
							break; // obf
						} // obf
						$v_qeugz = 0; // obf
						if (isset($v_ntmjo[$v_itkgl]) && is_array($v_ntmjo[$v_itkgl])) { // obf
							$v_qeugz = count($v_ntmjo[$v_itkgl]); // obf
						} // obf
						$v_ntmjo[$v_itkgl][$v_qeugz]['offset'] = $v_hgrnp->ftell() - 8; // obf
						$v_ntmjo[$v_itkgl][$v_qeugz]['size']   = $v_yiamw; // obf
						switch ($v_itkgl) { // obf
							case 'data': // obf
								$v_cboke['avdataoffset'] = $v_hgrnp->ftell(); // obf
								$v_cboke['avdataend']    = $v_cboke['avdataoffset'] + $v_yiamw; // obf

								$v_rhelc = $v_hgrnp->fread(36); // obf
								if ($v_rhelc === '') { // obf
									break; // obf
								} // obf
								if (preg_match('/^\xFF[\xE2-\xE7\xF2-\xF7\xFA-\xFF][\x00-\xEB]/s', substr($v_rhelc, 0, 4))) { // obf

									// Probably is MP3 data // obf
									if (getid3_mp3::MPEGaudioHeaderBytesValid(substr($v_rhelc, 0, 4))) { // obf
										$v_gafyw = new getID3(); // obf
										$v_gafyw->openfile($v_hgrnp->getid3->filename, $v_hgrnp->getid3->info['filesize'], $v_hgrnp->getid3->fp); // obf
										$v_gafyw->info['avdataoffset'] = $v_cboke['avdataoffset']; // obf
										$v_gafyw->info['avdataend']    = $v_cboke['avdataend']; // obf
										$v_kexvw = new getid3_mp3($v_gafyw, __CLASS__); // obf
										$v_kexvw->getOnlyMPEGaudioInfo($v_cboke['avdataoffset'], false); // obf
										if (empty($v_gafyw->info['error'])) { // obf
											$v_cboke['audio'] = $v_gafyw->info['audio']; // obf
											$v_cboke['mpeg']  = $v_gafyw->info['mpeg']; // obf
										} // obf
										unset($v_gafyw, $v_kexvw); // obf
									} // obf

								} elseif (($v_vuluf = (substr($v_rhelc, 0, 2) == $v_vwjwo)) || substr($v_rhelc, 8, 2) == strrev($v_vwjwo)) { // obf

									// This is probably AC-3 data // obf
									$v_gafyw = new getID3(); // obf
									if ($v_vuluf) { // obf
										$v_gafyw->openfile($v_hgrnp->getid3->filename, $v_hgrnp->getid3->info['filesize'], $v_hgrnp->getid3->fp); // obf
										$v_gafyw->info['avdataoffset'] = $v_cboke['avdataoffset']; // obf
										$v_gafyw->info['avdataend']    = $v_cboke['avdataend']; // obf
									} // obf
									$v_qemfb = new getid3_ac3($v_gafyw); // obf
									if ($v_vuluf) { // obf
										$v_qemfb->Analyze(); // obf
									} else { // obf
										// Dolby Digital WAV // obf
										// AC-3 content, but not encoded in same format as normal AC-3 file // obf
										// For one thing, byte order is swapped // obf
										$v_zndqs = ''; // obf
										for ($v_gtujy = 0; $v_gtujy < 28; $v_gtujy += 2) { // obf
											$v_zndqs .= substr($v_rhelc, 8 + $v_gtujy + 1, 1); // obf
											$v_zndqs .= substr($v_rhelc, 8 + $v_gtujy + 0, 1); // obf
										} // obf
										$v_qemfb->getid3->info['avdataoffset'] = 0; // obf
										$v_qemfb->getid3->info['avdataend']    = strlen($v_zndqs); // obf
										$v_qemfb->AnalyzeString($v_zndqs); // obf
									} // obf

									if (empty($v_gafyw->info['error'])) { // obf
										$v_cboke['audio'] = $v_gafyw->info['audio']; // obf
										$v_cboke['ac3']   = $v_gafyw->info['ac3']; // obf
										if (!empty($v_gafyw->info['warning'])) { // obf
											foreach ($v_gafyw->info['warning'] as $v_uwugj) { // obf
												$v_hgrnp->warning('getid3_ac3() says: ['.$v_uwugj.']'); // obf
											} // obf
										} // obf
									} // obf
									unset($v_gafyw, $v_qemfb); // obf

								} elseif (preg_match('/^('.implode('|', array_map('preg_quote', getid3_dts::$v_rkywi)).')/', $v_rhelc)) { // obf

									// This is probably DTS data // obf
									$v_gafyw = new getID3(); // obf
									$v_gafyw->openfile($v_hgrnp->getid3->filename, $v_hgrnp->getid3->info['filesize'], $v_hgrnp->getid3->fp); // obf
									$v_gafyw->info['avdataoffset'] = $v_cboke['avdataoffset']; // obf
									$v_aifnf = new getid3_dts($v_gafyw); // obf
									$v_aifnf->Analyze(); // obf
									if (empty($v_gafyw->info['error'])) { // obf
										$v_cboke['audio']            = $v_gafyw->info['audio']; // obf
										$v_cboke['dts']              = $v_gafyw->info['dts']; // obf
										$v_cboke['playtime_seconds'] = $v_gafyw->info['playtime_seconds']; // may not match RIFF calculations since DTS-WAV often used 14/16 bit-word packing // obf
										if (!empty($v_gafyw->info['warning'])) { // obf
											foreach ($v_gafyw->info['warning'] as $v_uwugj) { // obf
												$v_hgrnp->warning('getid3_dts() says: ['.$v_uwugj.']'); // obf
											} // obf
										} // obf
									} // obf

									unset($v_gafyw, $v_aifnf); // obf

								} elseif (substr($v_rhelc, 0, 4) == 'wvpk') { // obf

									// This is WavPack data // obf
									$v_cboke['wavpack']['offset'] = $v_cboke['avdataoffset']; // obf
									$v_cboke['wavpack']['size']   = getid3_lib::LittleEndian2Int(substr($v_rhelc, 4, 4)); // obf
									$v_hgrnp->parseWavPackHeader(substr($v_rhelc, 8, 28)); // obf

								} else { // obf
									// This is some other kind of data (quite possibly just PCM) // obf
									// do nothing special, just skip it // obf
								} // obf
								$v_bvnlb = $v_cboke['avdataend']; // obf
								$v_hgrnp->fseek($v_bvnlb); // obf
								break; // obf

							case 'iXML': // obf
							case 'bext': // obf
							case 'cart': // obf
							case 'fmt ': // obf
							case 'strh': // obf
							case 'strf': // obf
							case 'indx': // obf
							case 'MEXT': // obf
							case 'DISP': // obf
							case 'wamd': // obf
							case 'guan': // obf
								// always read data in // obf
							case 'JUNK': // obf
								// should be: never read data in // obf
								// but some programs write their version strings in a JUNK chunk (e.g. VirtualDub, AVIdemux, etc) // obf
								if ($v_yiamw < 1048576) { // obf
									if ($v_yiamw > 0) { // obf
										$v_ntmjo[$v_itkgl][$v_qeugz]['data'] = $v_hgrnp->fread($v_yiamw); // obf
										if ($v_itkgl == 'JUNK') { // obf
											if (preg_match('#^([\\x20-\\x7F]+)#', $v_ntmjo[$v_itkgl][$v_qeugz]['data'], $v_zsjwx)) { // obf
												// only keep text characters [chr(32)-chr(127)] // obf
												$v_cboke['riff']['comments']['junk'][] = trim($v_zsjwx[1]); // obf
											} // obf
											// but if nothing there, ignore // obf
											// remove the key in either case // obf
											unset($v_ntmjo[$v_itkgl][$v_qeugz]['data']); // obf
										} // obf
									} // obf
								} else { // obf
									$v_hgrnp->warning('Chunk "'.$v_itkgl.'" at offset '.$v_hgrnp->ftell().' is unexpectedly larger than 1MB (claims to be '.number_format($v_yiamw).' bytes), skipping data'); // obf
									$v_hgrnp->fseek($v_yiamw, SEEK_CUR); // obf
								} // obf
								break; // obf

							//case 'IDVX': // obf
							//	$v_cboke['divxtag']['comments'] = self::ParseDIVXTAG($v_hgrnp->fread($v_yiamw)); // obf
							//	break; // obf

							case 'scot': // obf
								// https://cmsdk.com/node-js/adding-scot-chunk-to-wav-file.html // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['data'] = $v_hgrnp->fread($v_yiamw); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['alter']           =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],   0,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['attrib']          =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],   1,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['artnum']          = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],   2,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['title']           =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],   4,  43);  // "name" in other documentation // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['copy']            =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  47,   4); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['padd']            =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  51,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['asclen']          =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  52,   5); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['startseconds']    = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  57,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['starthundredths'] = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  59,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['endseconds']      = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  61,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['endhundreths']    = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  63,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['sdate']           =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  65,   6); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['kdate']           =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  71,   6); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['start_hr']        =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  77,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['kill_hr']         =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  78,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['digital']         =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  79,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['sample_rate']     = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  80,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['stereo']          =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  82,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['compress']        =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  83,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['eomstrt']         = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  84,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['eomlen']          = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  88,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['attrib2']         = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  90,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['future1']         =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'],  94,  12); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['catfontcolor']    = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 106,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['catcolor']        = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 110,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['segeompos']       = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 114,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['vt_startsecs']    = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 118,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['vt_starthunds']   = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 120,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['priorcat']        =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 122,   3); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['priorcopy']       =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 125,   4); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['priorpadd']       =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 129,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['postcat']         =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 130,   3); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['postcopy']        =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 133,   4); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['postpadd']        =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 137,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['hrcanplay']       =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 138,  21); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['future2']         =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 159, 108); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['artist']          =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 267,  34); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['comment']         =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 301,  34); // "trivia" in other documentation // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['intro']           =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 335,   2); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['end']             =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 337,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['year']            =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 338,   4); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['obsolete2']       =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 342,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['rec_hr']          =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 343,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['rdate']           =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 344,   6); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['mpeg_bitrate']    = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 350,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['pitch']           = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 352,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['playlevel']       = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 354,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['lenvalid']        =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 356,   1); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['filelength']      = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 357,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['newplaylevel']    = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 361,   2)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['chopsize']        = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 363,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['vteomovr']        = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 367,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['desiredlen']      = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 371,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['triggers']        = getid3_lib::LittleEndian2Int(substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 375,   4)); // obf
								$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['fillout']         =                              substr($v_ntmjo[$v_itkgl][$v_qeugz]['data'], 379,   33); // obf

								foreach (array('title', 'artist', 'comment') as $v_rrdsm) { // obf
									if (trim($v_ntmjo[$v_itkgl][$v_qeugz]['parsed'][$v_rrdsm])) { // obf
										$v_cboke['riff']['comments'][$v_rrdsm] = array($v_ntmjo[$v_itkgl][$v_qeugz]['parsed'][$v_rrdsm]); // obf
									} // obf
								} // obf
								if ($v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['filelength'] && !empty($v_cboke['filesize']) && ($v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['filelength'] != $v_cboke['filesize'])) { // obf
									$v_hgrnp->warning('RIFF.WAVE.scot.filelength ('.$v_ntmjo[$v_itkgl][$v_qeugz]['parsed']['filelength'].') different from actual filesize ('.$v_cboke['filesize'].')'); // obf
								} // obf
								break; // obf

							default: // obf
								if (!empty($v_hvhkh) && isset($v_voffx) && (($v_ntmjo[$v_itkgl][$v_qeugz]['offset'] + $v_ntmjo[$v_itkgl][$v_qeugz]['size']) <= $v_voffx)) { // obf
									$v_ntmjo[$v_hvhkh][$v_itkgl][$v_qeugz]['offset'] = $v_ntmjo[$v_itkgl][$v_qeugz]['offset']; // obf
									$v_ntmjo[$v_hvhkh][$v_itkgl][$v_qeugz]['size']   = $v_ntmjo[$v_itkgl][$v_qeugz]['size']; // obf
									unset($v_ntmjo[$v_itkgl][$v_qeugz]['offset']); // obf
									unset($v_ntmjo[$v_itkgl][$v_qeugz]['size']); // obf
									if (isset($v_ntmjo[$v_itkgl][$v_qeugz]) && empty($v_ntmjo[$v_itkgl][$v_qeugz])) { // obf
										unset($v_ntmjo[$v_itkgl][$v_qeugz]); // obf
									} // obf
									if (count($v_ntmjo[$v_itkgl]) === 0) { // obf
										unset($v_ntmjo[$v_itkgl]); // obf
									} // obf
									$v_ntmjo[$v_hvhkh][$v_itkgl][$v_qeugz]['data'] = $v_hgrnp->fread($v_yiamw); // obf
								} elseif ($v_yiamw < 2048) { // obf
									// only read data in if smaller than 2kB // obf
									$v_ntmjo[$v_itkgl][$v_qeugz]['data'] = $v_hgrnp->fread($v_yiamw); // obf
								} else { // obf
									$v_hgrnp->fseek($v_yiamw, SEEK_CUR); // obf
								} // obf
								break; // obf
						} // obf
						break; // obf
				} // obf
			} // obf

		} catch (getid3_exception $v_peswc) { // obf
			if ($v_peswc->getCode() == 10) { // obf
				$v_hgrnp->warning('RIFF parser: '.$v_peswc->getMessage()); // obf
			} else { // obf
				throw $v_peswc; // obf
			} // obf
		} // obf

		return !empty($v_ntmjo) ? $v_ntmjo : false; // obf
	} // obf

	/** // obf
	 * @param string $v_fqxmr // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function ParseRIFFdata(&$v_fqxmr) { // obf
		$v_cboke = &$v_hgrnp->getid3->info; // obf
		if ($v_fqxmr) { // obf
			$v_oybvm = tempnam(GETID3_TEMP_DIR, 'getID3'); // obf
			$v_tkfoz  = fopen($v_oybvm, 'wb'); // obf
			$v_xxtcn = strlen($v_fqxmr); // obf
			$v_bdypy = getid3_lib::LittleEndian2String($v_xxtcn, 4); // obf
			for ($v_gtujy = 0; $v_gtujy < 4; $v_gtujy++) { // obf
				$v_fqxmr[($v_gtujy + 4)] = $v_bdypy[$v_gtujy]; // obf
			} // obf
			fwrite($v_tkfoz, $v_fqxmr); // obf
			fclose($v_tkfoz); // obf

			$v_gafyw = new getID3(); // obf
			$v_gafyw->openfile($v_oybvm); // obf
			$v_gafyw->info['filesize']     = $v_xxtcn; // obf
			$v_gafyw->info['filenamepath'] = $v_cboke['filenamepath']; // obf
			$v_gafyw->info['tags']         = $v_cboke['tags']; // obf
			$v_gafyw->info['warning']      = $v_cboke['warning']; // obf
			$v_gafyw->info['error']        = $v_cboke['error']; // obf
			$v_gafyw->info['comments']     = $v_cboke['comments']; // obf
			$v_gafyw->info['audio']        = (isset($v_cboke['audio']) ? $v_cboke['audio'] : array()); // obf
			$v_gafyw->info['video']        = (isset($v_cboke['video']) ? $v_cboke['video'] : array()); // obf
			$v_xvubs = new getid3_riff($v_gafyw); // obf
			$v_xvubs->Analyze(); // obf

			$v_cboke['riff']     = $v_gafyw->info['riff']; // obf
			$v_cboke['warning']  = $v_gafyw->info['warning']; // obf
			$v_cboke['error']    = $v_gafyw->info['error']; // obf
			$v_cboke['tags']     = $v_gafyw->info['tags']; // obf
			$v_cboke['comments'] = $v_gafyw->info['comments']; // obf
			unset($v_xvubs, $v_gafyw); // obf
			unlink($v_oybvm); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * @param array $v_sfzsi // obf
	 * @param array $v_yudce // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function parseComments(&$v_sfzsi, &$v_yudce) { // obf
		$v_pmebx = array( // obf
			'IARL'=>'archivallocation', // obf
			'IART'=>'artist', // obf
			'ICDS'=>'costumedesigner', // obf
			'ICMS'=>'commissionedby', // obf
			'ICMT'=>'comment', // obf
			'ICNT'=>'country', // obf
			'ICOP'=>'copyright', // obf
			'ICRD'=>'creationdate', // obf
			'IDIM'=>'dimensions', // obf
			'IDIT'=>'digitizationdate', // obf
			'IDPI'=>'resolution', // obf
			'IDST'=>'distributor', // obf
			'IEDT'=>'editor', // obf
			'IENG'=>'engineers', // obf
			'IFRM'=>'accountofparts', // obf
			'IGNR'=>'genre', // obf
			'IKEY'=>'keywords', // obf
			'ILGT'=>'lightness', // obf
			'ILNG'=>'language', // obf
			'IMED'=>'orignalmedium', // obf
			'IMUS'=>'composer', // obf
			'INAM'=>'title', // obf
			'IPDS'=>'productiondesigner', // obf
			'IPLT'=>'palette', // obf
			'IPRD'=>'product', // obf
			'IPRO'=>'producer', // obf
			'IPRT'=>'part', // obf
			'IRTD'=>'rating', // obf
			'ISBJ'=>'subject', // obf
			'ISFT'=>'software', // obf
			'ISGN'=>'secondarygenre', // obf
			'ISHP'=>'sharpness', // obf
			'ISRC'=>'sourcesupplier', // obf
			'ISRF'=>'digitizationsource', // obf
			'ISTD'=>'productionstudio', // obf
			'ISTR'=>'starring', // obf
			'ITCH'=>'encoded_by', // obf
			'IWEB'=>'url', // obf
			'IWRI'=>'writer', // obf
			'____'=>'comment', // obf
		); // obf
		foreach ($v_pmebx as $v_rrdsm => $v_bfxro) { // obf
			if (isset($v_sfzsi[$v_rrdsm])) { // obf
				foreach ($v_sfzsi[$v_rrdsm] as $v_msadu => $v_mjabs) { // obf
					if (!empty($v_mjabs['data']) && trim($v_mjabs['data']) != '') { // obf
						if (isset($v_yudce[$v_bfxro])) { // obf
							$v_yudce[$v_bfxro][] =     trim($v_mjabs['data']); // obf
						} else { // obf
							$v_yudce[$v_bfxro] = array(trim($v_mjabs['data'])); // obf
						} // obf
					} // obf
				} // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_fgfwf // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function parseWAVEFORMATex($v_fgfwf) { // obf
		// shortcut // obf
		$v_hjplq        = array(); // obf
		$v_hjplq['raw'] = array(); // obf
		$v_vfaas    = &$v_hjplq['raw']; // obf

		$v_vfaas['wFormatTag']      = substr($v_fgfwf,  0, 2); // obf
		$v_vfaas['nChannels']       = substr($v_fgfwf,  2, 2); // obf
		$v_vfaas['nSamplesPerSec']  = substr($v_fgfwf,  4, 4); // obf
		$v_vfaas['nAvgBytesPerSec'] = substr($v_fgfwf,  8, 4); // obf
		$v_vfaas['nBlockAlign']     = substr($v_fgfwf, 12, 2); // obf
		$v_vfaas['wBitsPerSample']  = substr($v_fgfwf, 14, 2); // obf
		if (strlen($v_fgfwf) > 16) { // obf
			$v_vfaas['cbSize']      = substr($v_fgfwf, 16, 2); // obf
		} // obf
		$v_vfaas = array_map('getid3_lib::LittleEndian2Int', $v_vfaas); // obf

		$v_hjplq['codec']           = self::wFormatTagLookup($v_vfaas['wFormatTag']); // obf
		$v_hjplq['channels']        = $v_vfaas['nChannels']; // obf
		$v_hjplq['sample_rate']     = $v_vfaas['nSamplesPerSec']; // obf
		$v_hjplq['bitrate']         = $v_vfaas['nAvgBytesPerSec'] * 8; // obf
		$v_hjplq['bits_per_sample'] = $v_vfaas['wBitsPerSample']; // obf

		return $v_hjplq; // obf
	} // obf

	/** // obf
	 * @param string $v_hbeek // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function parseWavPackHeader($v_hbeek) { // obf
		// typedef struct { // obf
		//     char ckID [4]; // obf
		//     long ckSize; // obf
		//     short version; // obf
		//     short bits;                // added for version 2.00 // obf
		//     short flags, shift;        // added for version 3.00 // obf
		//     long total_samples, crc, crc2; // obf
		//     char extension [4], extra_bc, extras [3]; // obf
		// } WavpackHeader; // obf

		// shortcut // obf
		$v_cboke = &$v_hgrnp->getid3->info; // obf
		$v_cboke['wavpack']  = array(); // obf
		$v_kreor = &$v_cboke['wavpack']; // obf

		$v_kreor['version']           = getid3_lib::LittleEndian2Int(substr($v_hbeek,  0, 2)); // obf
		if ($v_kreor['version'] >= 2) { // obf
			$v_kreor['bits']          = getid3_lib::LittleEndian2Int(substr($v_hbeek,  2, 2)); // obf
		} // obf
		if ($v_kreor['version'] >= 3) { // obf
			$v_kreor['flags_raw']     = getid3_lib::LittleEndian2Int(substr($v_hbeek,  4, 2)); // obf
			$v_kreor['shift']         = getid3_lib::LittleEndian2Int(substr($v_hbeek,  6, 2)); // obf
			$v_kreor['total_samples'] = getid3_lib::LittleEndian2Int(substr($v_hbeek,  8, 4)); // obf
			$v_kreor['crc1']          = getid3_lib::LittleEndian2Int(substr($v_hbeek, 12, 4)); // obf
			$v_kreor['crc2']          = getid3_lib::LittleEndian2Int(substr($v_hbeek, 16, 4)); // obf
			$v_kreor['extension']     =                              substr($v_hbeek, 20, 4); // obf
			$v_kreor['extra_bc']      = getid3_lib::LittleEndian2Int(substr($v_hbeek, 24, 1)); // obf
			for ($v_gtujy = 0; $v_gtujy <= 2; $v_gtujy++) { // obf
				$v_kreor['extras'][]  = getid3_lib::LittleEndian2Int(substr($v_hbeek, 25 + $v_gtujy, 1)); // obf
			} // obf

			// shortcut // obf
			$v_kreor['flags'] = array(); // obf
			$v_hbjdu = &$v_kreor['flags']; // obf

			$v_hbjdu['mono']                 = (bool) ($v_kreor['flags_raw'] & 0x000001); // obf
			$v_hbjdu['fast_mode']            = (bool) ($v_kreor['flags_raw'] & 0x000002); // obf
			$v_hbjdu['raw_mode']             = (bool) ($v_kreor['flags_raw'] & 0x000004); // obf
			$v_hbjdu['calc_noise']           = (bool) ($v_kreor['flags_raw'] & 0x000008); // obf
			$v_hbjdu['high_quality']         = (bool) ($v_kreor['flags_raw'] & 0x000010); // obf
			$v_hbjdu['3_byte_samples']       = (bool) ($v_kreor['flags_raw'] & 0x000020); // obf
			$v_hbjdu['over_20_bits']         = (bool) ($v_kreor['flags_raw'] & 0x000040); // obf
			$v_hbjdu['use_wvc']              = (bool) ($v_kreor['flags_raw'] & 0x000080); // obf
			$v_hbjdu['noiseshaping']         = (bool) ($v_kreor['flags_raw'] & 0x000100); // obf
			$v_hbjdu['very_fast_mode']       = (bool) ($v_kreor['flags_raw'] & 0x000200); // obf
			$v_hbjdu['new_high_quality']     = (bool) ($v_kreor['flags_raw'] & 0x000400); // obf
			$v_hbjdu['cancel_extreme']       = (bool) ($v_kreor['flags_raw'] & 0x000800); // obf
			$v_hbjdu['cross_decorrelation']  = (bool) ($v_kreor['flags_raw'] & 0x001000); // obf
			$v_hbjdu['new_decorrelation']    = (bool) ($v_kreor['flags_raw'] & 0x002000); // obf
			$v_hbjdu['joint_stereo']         = (bool) ($v_kreor['flags_raw'] & 0x004000); // obf
			$v_hbjdu['extra_decorrelation']  = (bool) ($v_kreor['flags_raw'] & 0x008000); // obf
			$v_hbjdu['override_noiseshape']  = (bool) ($v_kreor['flags_raw'] & 0x010000); // obf
			$v_hbjdu['override_jointstereo'] = (bool) ($v_kreor['flags_raw'] & 0x020000); // obf
			$v_hbjdu['copy_source_filetime'] = (bool) ($v_kreor['flags_raw'] & 0x040000); // obf
			$v_hbjdu['create_exe']           = (bool) ($v_kreor['flags_raw'] & 0x080000); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_wiagk // obf
	 * @param bool   $v_inomd // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function ParseBITMAPINFOHEADER($v_wiagk, $v_inomd=true) { // obf

		$v_firur                    = array(); // obf
		$v_firur['biSize']          = substr($v_wiagk,  0, 4); // number of bytes required by the BITMAPINFOHEADER structure // obf
		$v_firur['biWidth']         = substr($v_wiagk,  4, 4); // width of the bitmap in pixels // obf
		$v_firur['biHeight']        = substr($v_wiagk,  8, 4); // height of the bitmap in pixels. If biHeight is positive, the bitmap is a 'bottom-up' DIB and its origin is the lower left corner. If biHeight is negative, the bitmap is a 'top-down' DIB and its origin is the upper left corner // obf
		$v_firur['biPlanes']        = substr($v_wiagk, 12, 2); // number of color planes on the target device. In most cases this value must be set to 1 // obf
		$v_firur['biBitCount']      = substr($v_wiagk, 14, 2); // Specifies the number of bits per pixels // obf
		$v_firur['biSizeImage']     = substr($v_wiagk, 20, 4); // size of the bitmap data section of the image (the actual pixel data, excluding BITMAPINFOHEADER and RGBQUAD structures) // obf
		$v_firur['biXPelsPerMeter'] = substr($v_wiagk, 24, 4); // horizontal resolution, in pixels per metre, of the target device // obf
		$v_firur['biYPelsPerMeter'] = substr($v_wiagk, 28, 4); // vertical resolution, in pixels per metre, of the target device // obf
		$v_firur['biClrUsed']       = substr($v_wiagk, 32, 4); // actual number of color indices in the color table used by the bitmap. If this value is zero, the bitmap uses the maximum number of colors corresponding to the value of the biBitCount member for the compression mode specified by biCompression // obf
		$v_firur['biClrImportant']  = substr($v_wiagk, 36, 4); // number of color indices that are considered important for displaying the bitmap. If this value is zero, all colors are important // obf
		$v_firur = array_map('getid3_lib::'.($v_inomd ? 'Little' : 'Big').'Endian2Int', $v_firur); // obf

		$v_firur['fourcc']          = substr($v_wiagk, 16, 4);  // compression identifier // obf

		return $v_firur; // obf
	} // obf

	/** // obf
	 * @param string $v_ikfzq // obf
	 * @param bool   $v_uvsbo // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function ParseDIVXTAG($v_ikfzq, $v_uvsbo=false) { // obf
		// structure from "IDivX" source, Form1.frm, by "Greg Frazier of Daemonic Software Group", email: gfrazier@icestorm.net, web: http://dsg.cjb.net/ // obf
		// source available at http://files.divx-digest.com/download/c663efe7ef8ad2e90bf4af4d3ea6188a/on0SWN2r/edit/IDivX.zip // obf
		// 'Byte Layout:                   '1111111111111111 // obf
		// '32 for Movie - 1               '1111111111111111 // obf
		// '28 for Author - 6              '6666666666666666 // obf
		// '4  for year - 2                '6666666666662222 // obf
		// '3  for genre - 3               '7777777777777777 // obf
		// '48 for Comments - 7            '7777777777777777 // obf
		// '1  for Rating - 4              '7777777777777777 // obf
		// '5  for Future Additions - 0    '333400000DIVXTAG // obf
		// '128 bytes total // obf

		static $v_zdpks  = array( // obf
			 0 => 'Action', // obf
			 1 => 'Action/Adventure', // obf
			 2 => 'Adventure', // obf
			 3 => 'Adult', // obf
			 4 => 'Anime', // obf
			 5 => 'Cartoon', // obf
			 6 => 'Claymation', // obf
			 7 => 'Comedy', // obf
			 8 => 'Commercial', // obf
			 9 => 'Documentary', // obf
			10 => 'Drama', // obf
			11 => 'Home Video', // obf
			12 => 'Horror', // obf
			13 => 'Infomercial', // obf
			14 => 'Interactive', // obf
			15 => 'Mystery', // obf
			16 => 'Music Video', // obf
			17 => 'Other', // obf
			18 => 'Religion', // obf
			19 => 'Sci Fi', // obf
			20 => 'Thriller', // obf
			21 => 'Western', // obf
		), // obf
		$v_pepsl = array( // obf
			 0 => 'Unrated', // obf
			 1 => 'G', // obf
			 2 => 'PG', // obf
			 3 => 'PG-13', // obf
			 4 => 'R', // obf
			 5 => 'NC-17', // obf
		); // obf

		$v_firur              = array(); // obf
		$v_firur['title']     =        trim(substr($v_ikfzq,   0, 32)); // obf
		$v_firur['artist']    =        trim(substr($v_ikfzq,  32, 28)); // obf
		$v_firur['year']      = intval(trim(substr($v_ikfzq,  60,  4))); // obf
		$v_firur['comment']   =        trim(substr($v_ikfzq,  64, 48)); // obf
		$v_firur['genre_id']  = intval(trim(substr($v_ikfzq, 112,  3))); // obf
		$v_firur['rating_id'] =         ord(substr($v_ikfzq, 115,  1)); // obf
		//$v_firur['padding'] =             substr($v_ikfzq, 116,  5);  // 5-byte null // obf
		//$v_firur['magic']   =             substr($v_ikfzq, 121,  7);  // "DIVXTAG" // obf

		$v_firur['genre']  = (isset($v_zdpks[$v_firur['genre_id']])   ? $v_zdpks[$v_firur['genre_id']]   : $v_firur['genre_id']); // obf
		$v_firur['rating'] = (isset($v_pepsl[$v_firur['rating_id']]) ? $v_pepsl[$v_firur['rating_id']] : $v_firur['rating_id']); // obf

		if (!$v_uvsbo) { // obf
			unset($v_firur['genre_id'], $v_firur['rating_id']); // obf
			foreach ($v_firur as $v_rrdsm => $v_bfxro) { // obf
				if (empty($v_bfxro)) { // obf
					unset($v_firur[$v_rrdsm]); // obf
				} // obf
			} // obf
		} // obf

		foreach ($v_firur as $v_ivllo => $v_bfxro) { // obf
			$v_firur[$v_ivllo] = array($v_bfxro); // obf
		} // obf

		return $v_firur; // obf
	} // obf

	/** // obf
	 * @param string $v_eaboe // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function waveSNDMtagLookup($v_eaboe) { // obf
		$v_krqur = __LINE__; // obf

		/** This is not a comment! // obf

			©kwd	keywords // obf
			©BPM	bpm // obf
			©trt	tracktitle // obf
			©des	description // obf
			©gen	category // obf
			©fin	featuredinstrument // obf
			©LID	longid // obf
			©bex	bwdescription // obf
			©pub	publisher // obf
			©cdt	cdtitle // obf
			©alb	library // obf
			©com	composer // obf

		*/ // obf

		return getid3_lib::EmbeddedLookup($v_eaboe, $v_krqur, __LINE__, __FILE__, 'riff-sndm'); // obf
	} // obf

	/** // obf
	 * @param int $v_lefwj // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function wFormatTagLookup($v_lefwj) { // obf

		$v_krqur = __LINE__; // obf

		/** This is not a comment! // obf

			0x0000	Microsoft Unknown Wave Format // obf
			0x0001	Pulse Code Modulation (PCM) // obf
			0x0002	Microsoft ADPCM // obf
			0x0003	IEEE Float // obf
			0x0004	Compaq Computer VSELP // obf
			0x0005	IBM CVSD // obf
			0x0006	Microsoft A-Law // obf
			0x0007	Microsoft mu-Law // obf
			0x0008	Microsoft DTS // obf
			0x0010	OKI ADPCM // obf
			0x0011	Intel DVI/IMA ADPCM // obf
			0x0012	Videologic MediaSpace ADPCM // obf
			0x0013	Sierra Semiconductor ADPCM // obf
			0x0014	Antex Electronics G.723 ADPCM // obf
			0x0015	DSP Solutions DigiSTD // obf
			0x0016	DSP Solutions DigiFIX // obf
			0x0017	Dialogic OKI ADPCM // obf
			0x0018	MediaVision ADPCM // obf
			0x0019	Hewlett-Packard CU // obf
			0x0020	Yamaha ADPCM // obf
			0x0021	Speech Compression Sonarc // obf
			0x0022	DSP Group TrueSpeech // obf
			0x0023	Echo Speech EchoSC1 // obf
			0x0024	Audiofile AF36 // obf
			0x0025	Audio Processing Technology APTX // obf
			0x0026	AudioFile AF10 // obf
			0x0027	Prosody 1612 // obf
			0x0028	LRC // obf
			0x0030	Dolby AC2 // obf
			0x0031	Microsoft GSM 6.10 // obf
			0x0032	MSNAudio // obf
			0x0033	Antex Electronics ADPCME // obf
			0x0034	Control Resources VQLPC // obf
			0x0035	DSP Solutions DigiREAL // obf
			0x0036	DSP Solutions DigiADPCM // obf
			0x0037	Control Resources CR10 // obf
			0x0038	Natural MicroSystems VBXADPCM // obf
			0x0039	Crystal Semiconductor IMA ADPCM // obf
			0x003A	EchoSC3 // obf
			0x003B	Rockwell ADPCM // obf
			0x003C	Rockwell Digit LK // obf
			0x003D	Xebec // obf
			0x0040	Antex Electronics G.721 ADPCM // obf
			0x0041	G.728 CELP // obf
			0x0042	MSG723 // obf
			0x0050	MPEG Layer-2 or Layer-1 // obf
			0x0052	RT24 // obf
			0x0053	PAC // obf
			0x0055	MPEG Layer-3 // obf
			0x0059	Lucent G.723 // obf
			0x0060	Cirrus // obf
			0x0061	ESPCM // obf
			0x0062	Voxware // obf
			0x0063	Canopus Atrac // obf
			0x0064	G.726 ADPCM // obf
			0x0065	G.722 ADPCM // obf
			0x0066	DSAT // obf
			0x0067	DSAT Display // obf
			0x0069	Voxware Byte Aligned // obf
			0x0070	Voxware AC8 // obf
			0x0071	Voxware AC10 // obf
			0x0072	Voxware AC16 // obf
			0x0073	Voxware AC20 // obf
			0x0074	Voxware MetaVoice // obf
			0x0075	Voxware MetaSound // obf
			0x0076	Voxware RT29HW // obf
			0x0077	Voxware VR12 // obf
			0x0078	Voxware VR18 // obf
			0x0079	Voxware TQ40 // obf
			0x0080	Softsound // obf
			0x0081	Voxware TQ60 // obf
			0x0082	MSRT24 // obf
			0x0083	G.729A // obf
			0x0084	MVI MV12 // obf
			0x0085	DF G.726 // obf
			0x0086	DF GSM610 // obf
			0x0088	ISIAudio // obf
			0x0089	Onlive // obf
			0x0091	SBC24 // obf
			0x0092	Dolby AC3 SPDIF // obf
			0x0093	MediaSonic G.723 // obf
			0x0094	Aculab PLC    Prosody 8kbps // obf
			0x0097	ZyXEL ADPCM // obf
			0x0098	Philips LPCBB // obf
			0x0099	Packed // obf
			0x00FF	AAC // obf
			0x0100	Rhetorex ADPCM // obf
			0x0101	IBM mu-law // obf
			0x0102	IBM A-law // obf
			0x0103	IBM AVC Adaptive Differential Pulse Code Modulation (ADPCM) // obf
			0x0111	Vivo G.723 // obf
			0x0112	Vivo Siren // obf
			0x0123	Digital G.723 // obf
			0x0125	Sanyo LD ADPCM // obf
			0x0130	Sipro Lab Telecom ACELP NET // obf
			0x0131	Sipro Lab Telecom ACELP 4800 // obf
			0x0132	Sipro Lab Telecom ACELP 8V3 // obf
			0x0133	Sipro Lab Telecom G.729 // obf
			0x0134	Sipro Lab Telecom G.729A // obf
			0x0135	Sipro Lab Telecom Kelvin // obf
			0x0140	Windows Media Video V8 // obf
			0x0150	Qualcomm PureVoice // obf
			0x0151	Qualcomm HalfRate // obf
			0x0155	Ring Zero Systems TUB GSM // obf
			0x0160	Microsoft Audio 1 // obf
			0x0161	Windows Media Audio V7 / V8 / V9 // obf
			0x0162	Windows Media Audio Professional V9 // obf
			0x0163	Windows Media Audio Lossless V9 // obf
			0x0200	Creative Labs ADPCM // obf
			0x0202	Creative Labs Fastspeech8 // obf
			0x0203	Creative Labs Fastspeech10 // obf
			0x0210	UHER Informatic GmbH ADPCM // obf
			0x0220	Quarterdeck // obf
			0x0230	I-link Worldwide VC // obf
			0x0240	Aureal RAW Sport // obf
			0x0250	Interactive Products HSX // obf
			0x0251	Interactive Products RPELP // obf
			0x0260	Consistent Software CS2 // obf
			0x0270	Sony SCX // obf
			0x0300	Fujitsu FM Towns Snd // obf
			0x0400	BTV Digital // obf
			0x0401	Intel Music Coder // obf
			0x0450	QDesign Music // obf
			0x0680	VME VMPCM // obf
			0x0681	AT&T Labs TPC // obf
			0x08AE	ClearJump LiteWave // obf
			0x1000	Olivetti GSM // obf
			0x1001	Olivetti ADPCM // obf
			0x1002	Olivetti CELP // obf
			0x1003	Olivetti SBC // obf
			0x1004	Olivetti OPR // obf
			0x1100	Lernout & Hauspie Codec (0x1100) // obf
			0x1101	Lernout & Hauspie CELP Codec (0x1101) // obf
			0x1102	Lernout & Hauspie SBC Codec (0x1102) // obf
			0x1103	Lernout & Hauspie SBC Codec (0x1103) // obf
			0x1104	Lernout & Hauspie SBC Codec (0x1104) // obf
			0x1400	Norris // obf
			0x1401	AT&T ISIAudio // obf
			0x1500	Soundspace Music Compression // obf
			0x181C	VoxWare RT24 Speech // obf
			0x1FC4	NCT Soft ALF2CD (www.nctsoft.com) // obf
			0x2000	Dolby AC3 // obf
			0x2001	Dolby DTS // obf
			0x2002	WAVE_FORMAT_14_4 // obf
			0x2003	WAVE_FORMAT_28_8 // obf
			0x2004	WAVE_FORMAT_COOK // obf
			0x2005	WAVE_FORMAT_DNET // obf
			0x674F	Ogg Vorbis 1 // obf
			0x6750	Ogg Vorbis 2 // obf
			0x6751	Ogg Vorbis 3 // obf
			0x676F	Ogg Vorbis 1+ // obf
			0x6770	Ogg Vorbis 2+ // obf
			0x6771	Ogg Vorbis 3+ // obf
			0x7A21	GSM-AMR (CBR, no SID) // obf
			0x7A22	GSM-AMR (VBR, including SID) // obf
			0xFFFE	WAVE_FORMAT_EXTENSIBLE // obf
			0xFFFF	WAVE_FORMAT_DEVELOPMENT // obf

		*/ // obf

		return getid3_lib::EmbeddedLookup('0x'.str_pad(strtoupper(dechex($v_lefwj)), 4, '0', STR_PAD_LEFT), $v_krqur, __LINE__, __FILE__, 'riff-wFormatTag'); // obf
	} // obf

	/** // obf
	 * @param string $v_xezie // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function fourccLookup($v_xezie) { // obf

		$v_krqur = __LINE__; // obf

		/** This is not a comment! // obf

			swot	http://developer.apple.com/qa/snd/snd07.html // obf
			____	No Codec (____) // obf
			_BIT	BI_BITFIELDS (Raw RGB) // obf
			_JPG	JPEG compressed // obf
			_PNG	PNG compressed W3C/ISO/IEC (RFC-2083) // obf
			_RAW	Full Frames (Uncompressed) // obf
			_RGB	Raw RGB Bitmap // obf
			_RL4	RLE 4bpp RGB // obf
			_RL8	RLE 8bpp RGB // obf
			3IV1	3ivx MPEG-4 v1 // obf
			3IV2	3ivx MPEG-4 v2 // obf
			3IVX	3ivx MPEG-4 // obf
			AASC	Autodesk Animator // obf
			ABYR	Kensington ?ABYR? // obf
			AEMI	Array Microsystems VideoONE MPEG1-I Capture // obf
			AFLC	Autodesk Animator FLC // obf
			AFLI	Autodesk Animator FLI // obf
			AMPG	Array Microsystems VideoONE MPEG // obf
			ANIM	Intel RDX (ANIM) // obf
			AP41	AngelPotion Definitive // obf
			ASV1	Asus Video v1 // obf
			ASV2	Asus Video v2 // obf
			ASVX	Asus Video 2.0 (audio) // obf
			AUR2	AuraVision Aura 2 Codec - YUV 4:2:2 // obf
			AURA	AuraVision Aura 1 Codec - YUV 4:1:1 // obf
			AVDJ	Independent JPEG Group\'s codec (AVDJ) // obf
			AVRN	Independent JPEG Group\'s codec (AVRN) // obf
			AYUV	4:4:4 YUV (AYUV) // obf
			AZPR	Quicktime Apple Video (AZPR) // obf
			BGR 	Raw RGB32 // obf
			BLZ0	Blizzard DivX MPEG-4 // obf
			BTVC	Conexant Composite Video // obf
			BINK	RAD Game Tools Bink Video // obf
			BT20	Conexant Prosumer Video // obf
			BTCV	Conexant Composite Video Codec // obf
			BW10	Data Translation Broadway MPEG Capture // obf
			CC12	Intel YUV12 // obf
			CDVC	Canopus DV // obf
			CFCC	Digital Processing Systems DPS Perception // obf
			CGDI	Microsoft Office 97 Camcorder Video // obf
			CHAM	Winnov Caviara Champagne // obf
			CJPG	Creative WebCam JPEG // obf
			CLJR	Cirrus Logic YUV 4:1:1 // obf
			CMYK	Common Data Format in Printing (Colorgraph) // obf
			CPLA	Weitek 4:2:0 YUV Planar // obf
			CRAM	Microsoft Video 1 (CRAM) // obf
			cvid	Radius Cinepak // obf
			CVID	Radius Cinepak // obf
			CWLT	Microsoft Color WLT DIB // obf
			CYUV	Creative Labs YUV // obf
			CYUY	ATI YUV // obf
			D261	H.261 // obf
			D263	H.263 // obf
			DIB 	Device Independent Bitmap // obf
			DIV1	FFmpeg OpenDivX // obf
			DIV2	Microsoft MPEG-4 v1/v2 // obf
			DIV3	DivX ;-) MPEG-4 v3.x Low-Motion // obf
			DIV4	DivX ;-) MPEG-4 v3.x Fast-Motion // obf
			DIV5	DivX MPEG-4 v5.x // obf
			DIV6	DivX ;-) (MS MPEG-4 v3.x) // obf
			DIVX	DivX MPEG-4 v4 (OpenDivX / Project Mayo) // obf
			divx	DivX MPEG-4 // obf
			DMB1	Matrox Rainbow Runner hardware MJPEG // obf
			DMB2	Paradigm MJPEG // obf
			DSVD	?DSVD? // obf
			DUCK	Duck TrueMotion 1.0 // obf
			DPS0	DPS/Leitch Reality Motion JPEG // obf
			DPSC	DPS/Leitch PAR Motion JPEG // obf
			DV25	Matrox DVCPRO codec // obf
			DV50	Matrox DVCPRO50 codec // obf
			DVC 	IEC 61834 and SMPTE 314M (DVC/DV Video) // obf
			DVCP	IEC 61834 and SMPTE 314M (DVC/DV Video) // obf
			DVHD	IEC Standard DV 1125 lines @ 30fps / 1250 lines @ 25fps // obf
			DVMA	Darim Vision DVMPEG (dummy for MPEG compressor) (www.darvision.com) // obf
			DVSL	IEC Standard DV compressed in SD (SDL) // obf
			DVAN	?DVAN? // obf
			DVE2	InSoft DVE-2 Videoconferencing // obf
			dvsd	IEC 61834 and SMPTE 314M DVC/DV Video // obf
			DVSD	IEC 61834 and SMPTE 314M DVC/DV Video // obf
			DVX1	Lucent DVX1000SP Video Decoder // obf
			DVX2	Lucent DVX2000S Video Decoder // obf
			DVX3	Lucent DVX3000S Video Decoder // obf
			DX50	DivX v5 // obf
			DXT1	Microsoft DirectX Compressed Texture (DXT1) // obf
			DXT2	Microsoft DirectX Compressed Texture (DXT2) // obf
			DXT3	Microsoft DirectX Compressed Texture (DXT3) // obf
			DXT4	Microsoft DirectX Compressed Texture (DXT4) // obf
			DXT5	Microsoft DirectX Compressed Texture (DXT5) // obf
			DXTC	Microsoft DirectX Compressed Texture (DXTC) // obf
			DXTn	Microsoft DirectX Compressed Texture (DXTn) // obf
			EM2V	Etymonix MPEG-2 I-frame (www.etymonix.com) // obf
			EKQ0	Elsa ?EKQ0? // obf
			ELK0	Elsa ?ELK0? // obf
			ESCP	Eidos Escape // obf
			ETV1	eTreppid Video ETV1 // obf
			ETV2	eTreppid Video ETV2 // obf
			ETVC	eTreppid Video ETVC // obf
			FLIC	Autodesk FLI/FLC Animation // obf
			FLV1	Sorenson Spark // obf
			FLV4	On2 TrueMotion VP6 // obf
			FRWT	Darim Vision Forward Motion JPEG (www.darvision.com) // obf
			FRWU	Darim Vision Forward Uncompressed (www.darvision.com) // obf
			FLJP	D-Vision Field Encoded Motion JPEG // obf
			FPS1	FRAPS v1 // obf
			FRWA	SoftLab-Nsk Forward Motion JPEG w/ alpha channel // obf
			FRWD	SoftLab-Nsk Forward Motion JPEG // obf
			FVF1	Iterated Systems Fractal Video Frame // obf
			GLZW	Motion LZW (gabest@freemail.hu) // obf
			GPEG	Motion JPEG (gabest@freemail.hu) // obf
			GWLT	Microsoft Greyscale WLT DIB // obf
			H260	Intel ITU H.260 Videoconferencing // obf
			H261	Intel ITU H.261 Videoconferencing // obf
			H262	Intel ITU H.262 Videoconferencing // obf
			H263	Intel ITU H.263 Videoconferencing // obf
			H264	Intel ITU H.264 Videoconferencing // obf
			H265	Intel ITU H.265 Videoconferencing // obf
			H266	Intel ITU H.266 Videoconferencing // obf
			H267	Intel ITU H.267 Videoconferencing // obf
			H268	Intel ITU H.268 Videoconferencing // obf
			H269	Intel ITU H.269 Videoconferencing // obf
			HFYU	Huffman Lossless Codec // obf
			HMCR	Rendition Motion Compensation Format (HMCR) // obf
			HMRR	Rendition Motion Compensation Format (HMRR) // obf
			I263	FFmpeg I263 decoder // obf
			IF09	Indeo YVU9 ("YVU9 with additional delta-frame info after the U plane") // obf
			IUYV	Interlaced version of UYVY (www.leadtools.com) // obf
			IY41	Interlaced version of Y41P (www.leadtools.com) // obf
			IYU1	12 bit format used in mode 2 of the IEEE 1394 Digital Camera 1.04 spec    IEEE standard // obf
			IYU2	24 bit format used in mode 2 of the IEEE 1394 Digital Camera 1.04 spec    IEEE standard // obf
			IYUV	Planar YUV format (8-bpp Y plane, followed by 8-bpp 2×2 U and V planes) // obf
			i263	Intel ITU H.263 Videoconferencing (i263) // obf
			I420	Intel Indeo 4 // obf
			IAN 	Intel Indeo 4 (RDX) // obf
			ICLB	InSoft CellB Videoconferencing // obf
			IGOR	Power DVD // obf
			IJPG	Intergraph JPEG // obf
			ILVC	Intel Layered Video // obf
			ILVR	ITU-T H.263+ // obf
			IPDV	I-O Data Device Giga AVI DV Codec // obf
			IR21	Intel Indeo 2.1 // obf
			IRAW	Intel YUV Uncompressed // obf
			IV30	Intel Indeo 3.0 // obf
			IV31	Intel Indeo 3.1 // obf
			IV32	Ligos Indeo 3.2 // obf
			IV33	Ligos Indeo 3.3 // obf
			IV34	Ligos Indeo 3.4 // obf
			IV35	Ligos Indeo 3.5 // obf
			IV36	Ligos Indeo 3.6 // obf
			IV37	Ligos Indeo 3.7 // obf
			IV38	Ligos Indeo 3.8 // obf
			IV39	Ligos Indeo 3.9 // obf
			IV40	Ligos Indeo Interactive 4.0 // obf
			IV41	Ligos Indeo Interactive 4.1 // obf
			IV42	Ligos Indeo Interactive 4.2 // obf
			IV43	Ligos Indeo Interactive 4.3 // obf
			IV44	Ligos Indeo Interactive 4.4 // obf
			IV45	Ligos Indeo Interactive 4.5 // obf
			IV46	Ligos Indeo Interactive 4.6 // obf
			IV47	Ligos Indeo Interactive 4.7 // obf
			IV48	Ligos Indeo Interactive 4.8 // obf
			IV49	Ligos Indeo Interactive 4.9 // obf
			IV50	Ligos Indeo Interactive 5.0 // obf
			JBYR	Kensington ?JBYR? // obf
			JPEG	Still Image JPEG DIB // obf
			JPGL	Pegasus Lossless Motion JPEG // obf
			KMVC	Team17 Software Karl Morton\'s Video Codec // obf
			LSVM	Vianet Lighting Strike Vmail (Streaming) (www.vianet.com) // obf
			LEAD	LEAD Video Codec // obf
			Ljpg	LEAD MJPEG Codec // obf
			MDVD	Alex MicroDVD Video (hacked MS MPEG-4) (www.tiasoft.de) // obf
			MJPA	Morgan Motion JPEG (MJPA) (www.morgan-multimedia.com) // obf
			MJPB	Morgan Motion JPEG (MJPB) (www.morgan-multimedia.com) // obf
			MMES	Matrox MPEG-2 I-frame // obf
			MP2v	Microsoft S-Mpeg 4 version 1 (MP2v) // obf
			MP42	Microsoft S-Mpeg 4 version 2 (MP42) // obf
			MP43	Microsoft S-Mpeg 4 version 3 (MP43) // obf
			MP4S	Microsoft S-Mpeg 4 version 3 (MP4S) // obf
			MP4V	FFmpeg MPEG-4 // obf
			MPG1	FFmpeg MPEG 1/2 // obf
			MPG2	FFmpeg MPEG 1/2 // obf
			MPG3	FFmpeg DivX ;-) (MS MPEG-4 v3) // obf
			MPG4	Microsoft MPEG-4 // obf
			MPGI	Sigma Designs MPEG // obf
			MPNG	PNG images decoder // obf
			MSS1	Microsoft Windows Screen Video // obf
			MSZH	LCL (Lossless Codec Library) (www.geocities.co.jp/Playtown-Denei/2837/LRC.htm) // obf
			M261	Microsoft H.261 // obf
			M263	Microsoft H.263 // obf
			M4S2	Microsoft Fully Compliant MPEG-4 v2 simple profile (M4S2) // obf
			m4s2	Microsoft Fully Compliant MPEG-4 v2 simple profile (m4s2) // obf
			MC12	ATI Motion Compensation Format (MC12) // obf
			MCAM	ATI Motion Compensation Format (MCAM) // obf
			MJ2C	Morgan Multimedia Motion JPEG2000 // obf
			mJPG	IBM Motion JPEG w/ Huffman Tables // obf
			MJPG	Microsoft Motion JPEG DIB // obf
			MP42	Microsoft MPEG-4 (low-motion) // obf
			MP43	Microsoft MPEG-4 (fast-motion) // obf
			MP4S	Microsoft MPEG-4 (MP4S) // obf
			mp4s	Microsoft MPEG-4 (mp4s) // obf
			MPEG	Chromatic Research MPEG-1 Video I-Frame // obf
			MPG4	Microsoft MPEG-4 Video High Speed Compressor // obf
			MPGI	Sigma Designs MPEG // obf
			MRCA	FAST Multimedia Martin Regen Codec // obf
			MRLE	Microsoft Run Length Encoding // obf
			MSVC	Microsoft Video 1 // obf
			MTX1	Matrox ?MTX1? // obf
			MTX2	Matrox ?MTX2? // obf
			MTX3	Matrox ?MTX3? // obf
			MTX4	Matrox ?MTX4? // obf
			MTX5	Matrox ?MTX5? // obf
			MTX6	Matrox ?MTX6? // obf
			MTX7	Matrox ?MTX7? // obf
			MTX8	Matrox ?MTX8? // obf
			MTX9	Matrox ?MTX9? // obf
			MV12	Motion Pixels Codec (old) // obf
			MWV1	Aware Motion Wavelets // obf
			nAVI	SMR Codec (hack of Microsoft MPEG-4) (IRC #shadowrealm) // obf
			NT00	NewTek LightWave HDTV YUV w/ Alpha (www.newtek.com) // obf
			NUV1	NuppelVideo // obf
			NTN1	Nogatech Video Compression 1 // obf
			NVS0	nVidia GeForce Texture (NVS0) // obf
			NVS1	nVidia GeForce Texture (NVS1) // obf
			NVS2	nVidia GeForce Texture (NVS2) // obf
			NVS3	nVidia GeForce Texture (NVS3) // obf
			NVS4	nVidia GeForce Texture (NVS4) // obf
			NVS5	nVidia GeForce Texture (NVS5) // obf
			NVT0	nVidia GeForce Texture (NVT0) // obf
			NVT1	nVidia GeForce Texture (NVT1) // obf
			NVT2	nVidia GeForce Texture (NVT2) // obf
			NVT3	nVidia GeForce Texture (NVT3) // obf
			NVT4	nVidia GeForce Texture (NVT4) // obf
			NVT5	nVidia GeForce Texture (NVT5) // obf
			PIXL	MiroXL, Pinnacle PCTV // obf
			PDVC	I-O Data Device Digital Video Capture DV codec // obf
			PGVV	Radius Video Vision // obf
			PHMO	IBM Photomotion // obf
			PIM1	MPEG Realtime (Pinnacle Cards) // obf
			PIM2	Pegasus Imaging ?PIM2? // obf
			PIMJ	Pegasus Imaging Lossless JPEG // obf
			PVEZ	Horizons Technology PowerEZ // obf
			PVMM	PacketVideo Corporation MPEG-4 // obf
			PVW2	Pegasus Imaging Wavelet Compression // obf
			Q1.0	Q-Team\'s QPEG 1.0 (www.q-team.de) // obf
			Q1.1	Q-Team\'s QPEG 1.1 (www.q-team.de) // obf
			QPEG	Q-Team QPEG 1.0 // obf
			qpeq	Q-Team QPEG 1.1 // obf
			RGB 	Raw BGR32 // obf
			RGBA	Raw RGB w/ Alpha // obf
			RMP4	REALmagic MPEG-4 (unauthorized XVID copy) (www.sigmadesigns.com) // obf
			ROQV	Id RoQ File Video Decoder // obf
			RPZA	Quicktime Apple Video (RPZA) // obf
			RUD0	Rududu video codec (http://rududu.ifrance.com/rududu/) // obf
			RV10	RealVideo 1.0 (aka RealVideo 5.0) // obf
			RV13	RealVideo 1.0 (RV13) // obf
			RV20	RealVideo G2 // obf
			RV30	RealVideo 8 // obf
			RV40	RealVideo 9 // obf
			RGBT	Raw RGB w/ Transparency // obf
			RLE 	Microsoft Run Length Encoder // obf
			RLE4	Run Length Encoded (4bpp, 16-color) // obf
			RLE8	Run Length Encoded (8bpp, 256-color) // obf
			RT21	Intel Indeo RealTime Video 2.1 // obf
			rv20	RealVideo G2 // obf
			rv30	RealVideo 8 // obf
			RVX 	Intel RDX (RVX ) // obf
			SMC 	Apple Graphics (SMC ) // obf
			SP54	Logitech Sunplus Sp54 Codec for Mustek GSmart Mini 2 // obf
			SPIG	Radius Spigot // obf
			SVQ3	Sorenson Video 3 (Apple Quicktime 5) // obf
			s422	Tekram VideoCap C210 YUV 4:2:2 // obf
			SDCC	Sun Communication Digital Camera Codec // obf
			SFMC	CrystalNet Surface Fitting Method // obf
			SMSC	Radius SMSC // obf
			SMSD	Radius SMSD // obf
			smsv	WorldConnect Wavelet Video // obf
			SPIG	Radius Spigot // obf
			SPLC	Splash Studios ACM Audio Codec (www.splashstudios.net) // obf
			SQZ2	Microsoft VXTreme Video Codec V2 // obf
			STVA	ST Microelectronics CMOS Imager Data (Bayer) // obf
			STVB	ST Microelectronics CMOS Imager Data (Nudged Bayer) // obf
			STVC	ST Microelectronics CMOS Imager Data (Bunched) // obf
			STVX	ST Microelectronics CMOS Imager Data (Extended CODEC Data Format) // obf
			STVY	ST Microelectronics CMOS Imager Data (Extended CODEC Data Format with Correction Data) // obf
			SV10	Sorenson Video R1 // obf
			SVQ1	Sorenson Video // obf
			T420	Toshiba YUV 4:2:0 // obf
			TM2A	Duck TrueMotion Archiver 2.0 (www.duck.com) // obf
			TVJP	Pinnacle/Truevision Targa 2000 board (TVJP) // obf
			TVMJ	Pinnacle/Truevision Targa 2000 board (TVMJ) // obf
			TY0N	Tecomac Low-Bit Rate Codec (www.tecomac.com) // obf
			TY2C	Trident Decompression Driver // obf
			TLMS	TeraLogic Motion Intraframe Codec (TLMS) // obf
			TLST	TeraLogic Motion Intraframe Codec (TLST) // obf
			TM20	Duck TrueMotion 2.0 // obf
			TM2X	Duck TrueMotion 2X // obf
			TMIC	TeraLogic Motion Intraframe Codec (TMIC) // obf
			TMOT	Horizons Technology TrueMotion S // obf
			tmot	Horizons TrueMotion Video Compression // obf
			TR20	Duck TrueMotion RealTime 2.0 // obf
			TSCC	TechSmith Screen Capture Codec // obf
			TV10	Tecomac Low-Bit Rate Codec // obf
			TY2N	Trident ?TY2N? // obf
			U263	UB Video H.263/H.263+/H.263++ Decoder // obf
			UMP4	UB Video MPEG 4 (www.ubvideo.com) // obf
			UYNV	Nvidia UYVY packed 4:2:2 // obf
			UYVP	Evans & Sutherland YCbCr 4:2:2 extended precision // obf
			UCOD	eMajix.com ClearVideo // obf
			ULTI	IBM Ultimotion // obf
			UYVY	UYVY packed 4:2:2 // obf
			V261	Lucent VX2000S // obf
			VIFP	VFAPI Reader Codec (www.yks.ne.jp/~hori/) // obf
			VIV1	FFmpeg H263+ decoder // obf
			VIV2	Vivo H.263 // obf
			VQC2	Vector-quantised codec 2 (research) http://eprints.ecs.soton.ac.uk/archive/00001310/01/VTC97-js.pdf) // obf
			VTLP	Alaris VideoGramPiX // obf
			VYU9	ATI YUV (VYU9) // obf
			VYUY	ATI YUV (VYUY) // obf
			V261	Lucent VX2000S // obf
			V422	Vitec Multimedia 24-bit YUV 4:2:2 Format // obf
			V655	Vitec Multimedia 16-bit YUV 4:2:2 Format // obf
			VCR1	ATI Video Codec 1 // obf
			VCR2	ATI Video Codec 2 // obf
			VCR3	ATI VCR 3.0 // obf
			VCR4	ATI VCR 4.0 // obf
			VCR5	ATI VCR 5.0 // obf
			VCR6	ATI VCR 6.0 // obf
			VCR7	ATI VCR 7.0 // obf
			VCR8	ATI VCR 8.0 // obf
			VCR9	ATI VCR 9.0 // obf
			VDCT	Vitec Multimedia Video Maker Pro DIB // obf
			VDOM	VDOnet VDOWave // obf
			VDOW	VDOnet VDOLive (H.263) // obf
			VDTZ	Darim Vison VideoTizer YUV // obf
			VGPX	Alaris VideoGramPiX // obf
			VIDS	Vitec Multimedia YUV 4:2:2 CCIR 601 for V422 // obf
			VIVO	Vivo H.263 v2.00 // obf
			vivo	Vivo H.263 // obf
			VIXL	Miro/Pinnacle Video XL // obf
			VLV1	VideoLogic/PURE Digital Videologic Capture // obf
			VP30	On2 VP3.0 // obf
			VP31	On2 VP3.1 // obf
			VP6F	On2 TrueMotion VP6 // obf
			VX1K	Lucent VX1000S Video Codec // obf
			VX2K	Lucent VX2000S Video Codec // obf
			VXSP	Lucent VX1000SP Video Codec // obf
			WBVC	Winbond W9960 // obf
			WHAM	Microsoft Video 1 (WHAM) // obf
			WINX	Winnov Software Compression // obf
			WJPG	AverMedia Winbond JPEG // obf
			WMV1	Windows Media Video V7 // obf
			WMV2	Windows Media Video V8 // obf
			WMV3	Windows Media Video V9 // obf
			WNV1	Winnov Hardware Compression // obf
			XYZP	Extended PAL format XYZ palette (www.riff.org) // obf
			x263	Xirlink H.263 // obf
			XLV0	NetXL Video Decoder // obf
			XMPG	Xing MPEG (I-Frame only) // obf
			XVID	XviD MPEG-4 (www.xvid.org) // obf
			XXAN	?XXAN? // obf
			YU92	Intel YUV (YU92) // obf
			YUNV	Nvidia Uncompressed YUV 4:2:2 // obf
			YUVP	Extended PAL format YUV palette (www.riff.org) // obf
			Y211	YUV 2:1:1 Packed // obf
			Y411	YUV 4:1:1 Packed // obf
			Y41B	Weitek YUV 4:1:1 Planar // obf
			Y41P	Brooktree PC1 YUV 4:1:1 Packed // obf
			Y41T	Brooktree PC1 YUV 4:1:1 with transparency // obf
			Y42B	Weitek YUV 4:2:2 Planar // obf
			Y42T	Brooktree UYUV 4:2:2 with transparency // obf
			Y422	ADS Technologies Copy of UYVY used in Pyro WebCam firewire camera // obf
			Y800	Simple, single Y plane for monochrome images // obf
			Y8  	Grayscale video // obf
			YC12	Intel YUV 12 codec // obf
			YUV8	Winnov Caviar YUV8 // obf
			YUV9	Intel YUV9 // obf
			YUY2	Uncompressed YUV 4:2:2 // obf
			YUYV	Canopus YUV // obf
			YV12	YVU12 Planar // obf
			YVU9	Intel YVU9 Planar (8-bpp Y plane, followed by 8-bpp 4x4 U and V planes) // obf
			YVYU	YVYU 4:2:2 Packed // obf
			ZLIB	Lossless Codec Library zlib compression (www.geocities.co.jp/Playtown-Denei/2837/LRC.htm) // obf
			ZPEG	Metheus Video Zipper // obf

		*/ // obf

		return getid3_lib::EmbeddedLookup($v_xezie, $v_krqur, __LINE__, __FILE__, 'riff-fourcc'); // obf
	} // obf

	/** // obf
	 * @param string $v_jnltn // obf
	 * @param bool   $v_txvoa // obf
	 * // obf
	 * @return int|float|false // obf
	 */ // obf
	private function EitherEndian2Int($v_jnltn, $v_txvoa=false) { // obf
		if ($v_hgrnp->container == 'riff') { // obf
			return getid3_lib::LittleEndian2Int($v_jnltn, $v_txvoa); // obf
		} // obf
		return getid3_lib::BigEndian2Int($v_jnltn, false, $v_txvoa); // obf
	} // obf

} // obf