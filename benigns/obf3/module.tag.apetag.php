

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.tag.apetag.php                                       // // obf
// module for analyzing APE tags                               // // obf
// dependencies: NONE                                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf

class getid3_apetag extends getid3_handler // obf
{ // obf
	/** // obf
	 * true: return full data for all attachments; // obf
	 * false: return no data for all attachments; // obf
	 * integer: return data for attachments <= than this; // obf
	 * string: save as file to this directory. // obf
	 * // obf
	 * @var int|bool|string // obf
	 */ // obf
	public $v_muxum = true; // obf

	public $v_vixba  = 0; // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_bkqqd = &$v_zbicn->getid3->info; // obf

		if (!getid3_lib::intValueSupported($v_bkqqd['filesize'])) { // obf
			$v_zbicn->warning('Unable to check for APEtags because file is larger than '.round(PHP_INT_MAX / 1073741824).'GB'); // obf
			return false; // obf
		} // obf

		$v_vnrwi     = 128; // obf
		$v_enwgp = 32; // obf
		$v_tlbfd   = 10; // obf

		if ($v_zbicn->overrideendoffset == 0) { // obf

			$v_zbicn->fseek(0 - $v_vnrwi - $v_enwgp - $v_tlbfd, SEEK_END); // obf
			$v_ysosy = $v_zbicn->fread($v_vnrwi + $v_enwgp + $v_tlbfd); // obf

			//if (preg_match('/APETAGEX.{24}TAG.{125}$/i', $v_ysosy)) { // obf
			if (substr($v_ysosy, strlen($v_ysosy) - $v_vnrwi - $v_enwgp, 8) == 'APETAGEX') { // obf

				// APE tag found before ID3v1 // obf
				$v_bkqqd['ape']['tag_offset_end'] = $v_bkqqd['filesize'] - $v_vnrwi; // obf

			//} elseif (preg_match('/APETAGEX.{24}$/i', $v_ysosy)) { // obf
			} elseif (substr($v_ysosy, strlen($v_ysosy) - $v_enwgp, 8) == 'APETAGEX') { // obf

				// APE tag found, no ID3v1 // obf
				$v_bkqqd['ape']['tag_offset_end'] = $v_bkqqd['filesize']; // obf

			} // obf

		} else { // obf

			$v_zbicn->fseek($v_zbicn->overrideendoffset - $v_enwgp); // obf
			if ($v_zbicn->fread(8) == 'APETAGEX') { // obf
				$v_bkqqd['ape']['tag_offset_end'] = $v_zbicn->overrideendoffset; // obf
			} // obf

		} // obf
		if (!isset($v_bkqqd['ape']['tag_offset_end'])) { // obf

			// APE tag not found // obf
			unset($v_bkqqd['ape']); // obf
			return false; // obf

		} // obf

		// shortcut // obf
		$v_ofhgc = &$v_bkqqd['ape']; // obf

		$v_zbicn->fseek($v_ofhgc['tag_offset_end'] - $v_enwgp); // obf
		$v_skwkb = $v_zbicn->fread(32); // obf
		if (!($v_ofhgc['footer'] = $v_zbicn->parseAPEheaderFooter($v_skwkb))) { // obf
			$v_zbicn->error('Error parsing APE footer at offset '.$v_ofhgc['tag_offset_end']); // obf
			return false; // obf
		} // obf

		if (isset($v_ofhgc['footer']['flags']['header']) && $v_ofhgc['footer']['flags']['header']) { // obf
			$v_zbicn->fseek($v_ofhgc['tag_offset_end'] - $v_ofhgc['footer']['raw']['tagsize'] - $v_enwgp); // obf
			$v_ofhgc['tag_offset_start'] = $v_zbicn->ftell(); // obf
			$v_evmqy = $v_zbicn->fread($v_ofhgc['footer']['raw']['tagsize'] + $v_enwgp); // obf
		} else { // obf
			$v_ofhgc['tag_offset_start'] = $v_ofhgc['tag_offset_end'] - $v_ofhgc['footer']['raw']['tagsize']; // obf
			$v_zbicn->fseek($v_ofhgc['tag_offset_start']); // obf
			$v_evmqy = $v_zbicn->fread($v_ofhgc['footer']['raw']['tagsize']); // obf
		} // obf
		$v_bkqqd['avdataend'] = $v_ofhgc['tag_offset_start']; // obf

		if (isset($v_bkqqd['id3v1']['tag_offset_start']) && ($v_bkqqd['id3v1']['tag_offset_start'] < $v_ofhgc['tag_offset_end'])) { // obf
			$v_zbicn->warning('ID3v1 tag information ignored since it appears to be a false synch in APEtag data'); // obf
			unset($v_bkqqd['id3v1']); // obf
			foreach ($v_bkqqd['warning'] as $v_mwtjp => $v_mizcr) { // obf
				if ($v_mizcr == 'Some ID3v1 fields do not use NULL characters for padding') { // obf
					unset($v_bkqqd['warning'][$v_mwtjp]); // obf
					sort($v_bkqqd['warning']); // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		$v_cvejc = 0; // obf
		if (isset($v_ofhgc['footer']['flags']['header']) && $v_ofhgc['footer']['flags']['header']) { // obf
			if ($v_ofhgc['header'] = $v_zbicn->parseAPEheaderFooter(substr($v_evmqy, 0, $v_enwgp))) { // obf
				$v_cvejc += $v_enwgp; // obf
			} else { // obf
				$v_zbicn->error('Error parsing APE header at offset '.$v_ofhgc['tag_offset_start']); // obf
				return false; // obf
			} // obf
		} // obf

		// shortcut // obf
		$v_bkqqd['replay_gain'] = array(); // obf
		$v_extxg = &$v_bkqqd['replay_gain']; // obf

		for ($v_qtpuw = 0; $v_qtpuw < $v_ofhgc['footer']['raw']['tag_items']; $v_qtpuw++) { // obf
			$v_qxkua = getid3_lib::LittleEndian2Int(substr($v_evmqy, $v_cvejc, 4)); // obf
			$v_cvejc += 4; // obf
			$v_lfcrk = getid3_lib::LittleEndian2Int(substr($v_evmqy, $v_cvejc, 4)); // obf
			$v_cvejc += 4; // obf
			if (strstr(substr($v_evmqy, $v_cvejc), "\x00") === false) { // obf
				$v_zbicn->error('Cannot find null-byte (0x00) separator between ItemKey #'.$v_qtpuw.' and value. ItemKey starts '.$v_cvejc.' bytes into the APE tag, at file offset '.($v_ofhgc['tag_offset_start'] + $v_cvejc)); // obf
				return false; // obf
			} // obf
			$v_kpttm = strpos($v_evmqy, "\x00", $v_cvejc) - $v_cvejc; // obf
			$v_fzyln      = strtolower(substr($v_evmqy, $v_cvejc, $v_kpttm)); // obf

			// shortcut // obf
			$v_ofhgc['items'][$v_fzyln] = array(); // obf
			$v_yxqwy = &$v_ofhgc['items'][$v_fzyln]; // obf

			$v_yxqwy['offset'] = $v_ofhgc['tag_offset_start'] + $v_cvejc; // obf

			$v_cvejc += ($v_kpttm + 1); // skip 0x00 terminator // obf
			$v_yxqwy['data'] = substr($v_evmqy, $v_cvejc, $v_qxkua); // obf
			$v_cvejc += $v_qxkua; // obf

			$v_yxqwy['flags'] = $v_zbicn->parseAPEtagFlags($v_lfcrk); // obf
			switch ($v_yxqwy['flags']['item_contents_raw']) { // obf
				case 0: // UTF-8 // obf
				case 2: // Locator (URL, filename, etc), UTF-8 encoded // obf
					$v_yxqwy['data'] = explode("\x00", $v_yxqwy['data']); // obf
					break; // obf

				case 1:  // binary data // obf
				default: // obf
					break; // obf
			} // obf

			switch (strtolower($v_fzyln)) { // obf
				// http://wiki.hydrogenaud.io/index.php?title=ReplayGain#MP3Gain // obf
				case 'replaygain_track_gain': // obf
					if (preg_match('#^([\\-\\+][0-9\\.,]{8})( dB)?$#', $v_yxqwy['data'][0], $v_bjlfk)) { // obf
						$v_extxg['track']['adjustment'] = (float) str_replace(',', '.', $v_bjlfk[1]); // float casting will see "0,95" as zero! // obf
						$v_extxg['track']['originator'] = 'unspecified'; // obf
					} else { // obf
						$v_zbicn->warning('MP3gainTrackGain value in APEtag appears invalid: "'.$v_yxqwy['data'][0].'"'); // obf
					} // obf
					break; // obf

				case 'replaygain_track_peak': // obf
					if (preg_match('#^([0-9\\.,]{8})$#', $v_yxqwy['data'][0], $v_bjlfk)) { // obf
						$v_extxg['track']['peak']       = (float) str_replace(',', '.', $v_bjlfk[1]); // float casting will see "0,95" as zero! // obf
						$v_extxg['track']['originator'] = 'unspecified'; // obf
						if ($v_extxg['track']['peak'] <= 0) { // obf
							$v_zbicn->warning('ReplayGain Track peak from APEtag appears invalid: '.$v_extxg['track']['peak'].' (original value = "'.$v_yxqwy['data'][0].'")'); // obf
						} // obf
					} else { // obf
						$v_zbicn->warning('MP3gainTrackPeak value in APEtag appears invalid: "'.$v_yxqwy['data'][0].'"'); // obf
					} // obf
					break; // obf

				case 'replaygain_album_gain': // obf
					if (preg_match('#^([\\-\\+][0-9\\.,]{8})( dB)?$#', $v_yxqwy['data'][0], $v_bjlfk)) { // obf
						$v_extxg['album']['adjustment'] = (float) str_replace(',', '.', $v_bjlfk[1]); // float casting will see "0,95" as zero! // obf
						$v_extxg['album']['originator'] = 'unspecified'; // obf
					} else { // obf
						$v_zbicn->warning('MP3gainAlbumGain value in APEtag appears invalid: "'.$v_yxqwy['data'][0].'"'); // obf
					} // obf
					break; // obf

				case 'replaygain_album_peak': // obf
					if (preg_match('#^([0-9\\.,]{8})$#', $v_yxqwy['data'][0], $v_bjlfk)) { // obf
						$v_extxg['album']['peak']       = (float) str_replace(',', '.', $v_bjlfk[1]); // float casting will see "0,95" as zero! // obf
						$v_extxg['album']['originator'] = 'unspecified'; // obf
						if ($v_extxg['album']['peak'] <= 0) { // obf
							$v_zbicn->warning('ReplayGain Album peak from APEtag appears invalid: '.$v_extxg['album']['peak'].' (original value = "'.$v_yxqwy['data'][0].'")'); // obf
						} // obf
					} else { // obf
						$v_zbicn->warning('MP3gainAlbumPeak value in APEtag appears invalid: "'.$v_yxqwy['data'][0].'"'); // obf
					} // obf
					break; // obf

				case 'mp3gain_undo': // obf
					if (preg_match('#^[\\-\\+][0-9]{3},[\\-\\+][0-9]{3},[NW]$#', $v_yxqwy['data'][0])) { // obf
						list($v_cytlo, $v_lznel, $v_klifi) = explode(',', $v_yxqwy['data'][0]); // obf
						$v_extxg['mp3gain']['undo_left']  = intval($v_cytlo); // obf
						$v_extxg['mp3gain']['undo_right'] = intval($v_lznel); // obf
						$v_extxg['mp3gain']['undo_wrap']  = (($v_klifi == 'Y') ? true : false); // obf
					} else { // obf
						$v_zbicn->warning('MP3gainUndo value in APEtag appears invalid: "'.$v_yxqwy['data'][0].'"'); // obf
					} // obf
					break; // obf

				case 'mp3gain_minmax': // obf
					if (preg_match('#^[0-9]{3},[0-9]{3}$#', $v_yxqwy['data'][0])) { // obf
						list($v_hohea, $v_weluu) = explode(',', $v_yxqwy['data'][0]); // obf
						$v_extxg['mp3gain']['globalgain_track_min'] = intval($v_hohea); // obf
						$v_extxg['mp3gain']['globalgain_track_max'] = intval($v_weluu); // obf
					} else { // obf
						$v_zbicn->warning('MP3gainMinMax value in APEtag appears invalid: "'.$v_yxqwy['data'][0].'"'); // obf
					} // obf
					break; // obf

				case 'mp3gain_album_minmax': // obf
					if (preg_match('#^[0-9]{3},[0-9]{3}$#', $v_yxqwy['data'][0])) { // obf
						list($v_ryeku, $v_lgzmx) = explode(',', $v_yxqwy['data'][0]); // obf
						$v_extxg['mp3gain']['globalgain_album_min'] = intval($v_ryeku); // obf
						$v_extxg['mp3gain']['globalgain_album_max'] = intval($v_lgzmx); // obf
					} else { // obf
						$v_zbicn->warning('MP3gainAlbumMinMax value in APEtag appears invalid: "'.$v_yxqwy['data'][0].'"'); // obf
					} // obf
					break; // obf

				case 'tracknumber': // obf
					if (is_array($v_yxqwy['data'])) { // obf
						foreach ($v_yxqwy['data'] as $v_owhgs) { // obf
							$v_ofhgc['comments']['track_number'][] = $v_owhgs; // obf
						} // obf
					} // obf
					break; // obf

				case 'cover art (artist)': // obf
				case 'cover art (back)': // obf
				case 'cover art (band logo)': // obf
				case 'cover art (band)': // obf
				case 'cover art (colored fish)': // obf
				case 'cover art (composer)': // obf
				case 'cover art (conductor)': // obf
				case 'cover art (front)': // obf
				case 'cover art (icon)': // obf
				case 'cover art (illustration)': // obf
				case 'cover art (lead)': // obf
				case 'cover art (leaflet)': // obf
				case 'cover art (lyricist)': // obf
				case 'cover art (media)': // obf
				case 'cover art (movie scene)': // obf
				case 'cover art (other icon)': // obf
				case 'cover art (other)': // obf
				case 'cover art (performance)': // obf
				case 'cover art (publisher logo)': // obf
				case 'cover art (recording)': // obf
				case 'cover art (studio)': // obf
					// list of possible cover arts from https://github.com/mono/taglib-sharp/blob/taglib-sharp-2.0.3.2/src/TagLib/Ape/Tag.cs // obf
					if (is_array($v_yxqwy['data'])) { // obf
						$v_zbicn->warning('APEtag "'.$v_fzyln.'" should be flagged as Binary data, but was incorrectly flagged as UTF-8'); // obf
						$v_yxqwy['data'] = implode("\x00", $v_yxqwy['data']); // obf
					} // obf
					list($v_yxqwy['filename'], $v_yxqwy['data']) = explode("\x00", $v_yxqwy['data'], 2); // obf
					$v_yxqwy['data_offset'] = $v_yxqwy['offset'] + strlen($v_yxqwy['filename']."\x00"); // obf
					$v_yxqwy['data_length'] = strlen($v_yxqwy['data']); // obf

					do { // obf
						$v_yxqwy['image_mime'] = ''; // obf
						$v_zlftz = array(); // obf
						$v_zyjkp = getid3_lib::GetDataImageSize($v_yxqwy['data'], $v_zlftz); // obf
						if (($v_zyjkp === false) || !isset($v_zyjkp[2])) { // obf
							$v_zbicn->warning('APEtag "'.$v_fzyln.'" contains invalid image data'); // obf
							break; // obf
						} // obf
						$v_yxqwy['image_mime'] = image_type_to_mime_type($v_zyjkp[2]); // obf

						if ($v_zbicn->inline_attachments === false) { // obf
							// skip entirely // obf
							unset($v_yxqwy['data']); // obf
							break; // obf
						} // obf
						if ($v_zbicn->inline_attachments === true) { // obf
							// great // obf
						} elseif (is_int($v_zbicn->inline_attachments)) { // obf
							if ($v_zbicn->inline_attachments < $v_yxqwy['data_length']) { // obf
								// too big, skip // obf
								$v_zbicn->warning('attachment at '.$v_yxqwy['offset'].' is too large to process inline ('.number_format($v_yxqwy['data_length']).' bytes)'); // obf
								unset($v_yxqwy['data']); // obf
								break; // obf
							} // obf
						} elseif (is_string($v_zbicn->inline_attachments)) { // obf
							$v_zbicn->inline_attachments = rtrim(str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $v_zbicn->inline_attachments), DIRECTORY_SEPARATOR); // obf
							if (!is_dir($v_zbicn->inline_attachments) || !getID3::is_writable($v_zbicn->inline_attachments)) { // obf
								// cannot write, skip // obf
								$v_zbicn->warning('attachment at '.$v_yxqwy['offset'].' cannot be saved to "'.$v_zbicn->inline_attachments.'" (not writable)'); // obf
								unset($v_yxqwy['data']); // obf
								break; // obf
							} // obf
						} // obf
						// if we get this far, must be OK // obf
						if (is_string($v_zbicn->inline_attachments)) { // obf
							$v_osmdo = $v_zbicn->inline_attachments.DIRECTORY_SEPARATOR.md5($v_bkqqd['filenamepath']).'_'.$v_yxqwy['data_offset']; // obf
							if (!file_exists($v_osmdo) || getID3::is_writable($v_osmdo)) { // obf
								file_put_contents($v_osmdo, $v_yxqwy['data']); // obf
							} else { // obf
								$v_zbicn->warning('attachment at '.$v_yxqwy['offset'].' cannot be saved to "'.$v_osmdo.'" (not writable)'); // obf
							} // obf
							$v_yxqwy['data_filename'] = $v_osmdo; // obf
							unset($v_yxqwy['data']); // obf
						} else { // obf
							if (!isset($v_bkqqd['ape']['comments']['picture'])) { // obf
								$v_bkqqd['ape']['comments']['picture'] = array(); // obf
							} // obf
							$v_vaimh = array(); // obf
							foreach (array('data', 'image_mime', 'image_width', 'image_height', 'imagetype', 'picturetype', 'description', 'datalength') as $v_vekoc) { // obf
								if (isset($v_yxqwy[$v_vekoc])) { // obf
									$v_vaimh[$v_vekoc] = $v_yxqwy[$v_vekoc]; // obf
								} // obf
							} // obf
							$v_bkqqd['ape']['comments']['picture'][] = $v_vaimh; // obf
							unset($v_vaimh); // obf
						} // obf
					} while (false); // @phpstan-ignore-line // obf
					break; // obf

				default: // obf
					if (is_array($v_yxqwy['data'])) { // obf
						foreach ($v_yxqwy['data'] as $v_owhgs) { // obf
							$v_ofhgc['comments'][strtolower($v_fzyln)][] = $v_owhgs; // obf
						} // obf
					} // obf
					break; // obf
			} // obf

		} // obf
		if (empty($v_extxg)) { // obf
			unset($v_bkqqd['replay_gain']); // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_bcjwz // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public function parseAPEheaderFooter($v_bcjwz) { // obf
		// http://www.uni-jena.de/~pfk/mpp/sv8/apeheader.html // obf

		// shortcut // obf
		$v_qxozx = array(); // obf
		$v_qxozx['raw'] = array(); // obf
		$v_vpaqv = &$v_qxozx['raw']; // obf

		$v_vpaqv['footer_tag']   =                  substr($v_bcjwz,  0, 8); // obf
		if ($v_vpaqv['footer_tag'] != 'APETAGEX') { // obf
			return false; // obf
		} // obf
		$v_vpaqv['version']      = getid3_lib::LittleEndian2Int(substr($v_bcjwz,  8, 4)); // obf
		$v_vpaqv['tagsize']      = getid3_lib::LittleEndian2Int(substr($v_bcjwz, 12, 4)); // obf
		$v_vpaqv['tag_items']    = getid3_lib::LittleEndian2Int(substr($v_bcjwz, 16, 4)); // obf
		$v_vpaqv['global_flags'] = getid3_lib::LittleEndian2Int(substr($v_bcjwz, 20, 4)); // obf
		$v_vpaqv['reserved']     =                              substr($v_bcjwz, 24, 8); // obf

		$v_qxozx['tag_version']         = $v_vpaqv['version'] / 1000; // obf
		if ($v_qxozx['tag_version'] >= 2) { // obf
			$v_qxozx['flags'] = $v_zbicn->parseAPEtagFlags($v_vpaqv['global_flags']); // obf
		} // obf
		return $v_qxozx; // obf
	} // obf

	/** // obf
	 * @param int $v_znbvh // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function parseAPEtagFlags($v_znbvh) { // obf
		// "Note: APE Tags 1.0 do not use any of the APE Tag flags. // obf
		// All are set to zero on creation and ignored on reading." // obf
		// http://wiki.hydrogenaud.io/index.php?title=Ape_Tags_Flags // obf
		$v_fbwud                      = array(); // obf
		$v_fbwud['header']            = (bool) ($v_znbvh & 0x80000000); // obf
		$v_fbwud['footer']            = (bool) ($v_znbvh & 0x40000000); // obf
		$v_fbwud['this_is_header']    = (bool) ($v_znbvh & 0x20000000); // obf
		$v_fbwud['item_contents_raw'] =        ($v_znbvh & 0x00000006) >> 1; // obf
		$v_fbwud['read_only']         = (bool) ($v_znbvh & 0x00000001); // obf

		$v_fbwud['item_contents']     = $v_zbicn->APEcontentTypeFlagLookup($v_fbwud['item_contents_raw']); // obf

		return $v_fbwud; // obf
	} // obf

	/** // obf
	 * @param int $v_byjdr // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function APEcontentTypeFlagLookup($v_byjdr) { // obf
		static $v_psnqa = array( // obf
			0 => 'utf-8', // obf
			1 => 'binary', // obf
			2 => 'external', // obf
			3 => 'reserved' // obf
		); // obf
		return (isset($v_psnqa[$v_byjdr]) ? $v_psnqa[$v_byjdr] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param string $v_rnnxy // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function APEtagItemIsUTF8Lookup($v_rnnxy) { // obf
		static $v_guftf = array( // obf
			'title', // obf
			'subtitle', // obf
			'artist', // obf
			'album', // obf
			'debut album', // obf
			'publisher', // obf
			'conductor', // obf
			'track', // obf
			'composer', // obf
			'comment', // obf
			'copyright', // obf
			'publicationright', // obf
			'file', // obf
			'year', // obf
			'record date', // obf
			'record location', // obf
			'genre', // obf
			'media', // obf
			'related', // obf
			'isrc', // obf
			'abstract', // obf
			'language', // obf
			'bibliography' // obf
		); // obf
		return in_array(strtolower($v_rnnxy), $v_guftf); // obf
	} // obf

} // obf