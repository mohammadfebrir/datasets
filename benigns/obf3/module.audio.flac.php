

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio.flac.php                                       // // obf
// module for analyzing FLAC and OggFLAC audio files           // // obf
// dependencies: module.audio.ogg.php                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.ogg.php', __FILE__, true); // obf

/** // obf
* @tutorial http://flac.sourceforge.net/format.html // obf
*/ // obf
class getid3_flac extends getid3_handler // obf
{ // obf
	const syncword = 'fLaC'; // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_nblhz = &$v_okbyv->getid3->info; // obf

		$v_okbyv->fseek($v_nblhz['avdataoffset']); // obf
		$v_zbcpo = $v_okbyv->fread(4); // obf
		if ($v_zbcpo != self::syncword) { // obf
			return $v_okbyv->error('Expecting "'.getid3_lib::PrintHexBytes(self::syncword).'" at offset '.$v_nblhz['avdataoffset'].', found "'.getid3_lib::PrintHexBytes($v_zbcpo).'"'); // obf
		} // obf
		$v_nblhz['fileformat']            = 'flac'; // obf
		$v_nblhz['audio']['dataformat']   = 'flac'; // obf
		$v_nblhz['audio']['bitrate_mode'] = 'vbr'; // obf
		$v_nblhz['audio']['lossless']     = true; // obf

		// parse flac container // obf
		return $v_okbyv->parseMETAdata(); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function parseMETAdata() { // obf
		$v_nblhz = &$v_okbyv->getid3->info; // obf
		do { // obf
			$v_ibszd   = $v_okbyv->ftell(); // obf
			$v_fwjqs   = $v_okbyv->fread(4); // obf
			$v_awrfs         = getid3_lib::BigEndian2Int(substr($v_fwjqs, 0, 1));  // LBFBT = LastBlockFlag + BlockType // obf
			$v_ingyq = (bool) ($v_awrfs & 0x80); // obf
			$v_phqfq     =        ($v_awrfs & 0x7F); // obf
			$v_jbwdu   = getid3_lib::BigEndian2Int(substr($v_fwjqs, 1, 3)); // obf
			$v_jmiaf = self::metaBlockTypeLookup($v_phqfq); // obf

			if (($v_ibszd + 4 + $v_jbwdu) > $v_nblhz['avdataend']) { // obf
				$v_okbyv->warning('METADATA_BLOCK_HEADER.BLOCK_TYPE ('.$v_jmiaf.') at offset '.$v_ibszd.' extends beyond end of file'); // obf
				break; // obf
			} // obf
			if ($v_jbwdu < 1) { // obf
				if ($v_jmiaf != 'reserved') { // obf
					// probably supposed to be zero-length // obf
					$v_okbyv->warning('METADATA_BLOCK_HEADER.BLOCK_LENGTH ('.$v_jmiaf.') at offset '.$v_ibszd.' is zero bytes'); // obf
					continue; // obf
				} // obf
				$v_okbyv->error('METADATA_BLOCK_HEADER.BLOCK_LENGTH ('.$v_jbwdu.') at offset '.$v_ibszd.' is invalid'); // obf
				break; // obf
			} // obf

			$v_nblhz['flac'][$v_jmiaf]['raw'] = array(); // obf
			$v_vofxp = &$v_nblhz['flac'][$v_jmiaf]['raw']; // obf

			$v_vofxp['offset']          = $v_ibszd; // obf
			$v_vofxp['last_meta_block'] = $v_ingyq; // obf
			$v_vofxp['block_type']      = $v_phqfq; // obf
			$v_vofxp['block_type_text'] = $v_jmiaf; // obf
			$v_vofxp['block_length']    = $v_jbwdu; // obf
			if ($v_vofxp['block_type'] != 0x06) { // do not read attachment data automatically // obf
				$v_vofxp['block_data']  = $v_okbyv->fread($v_jbwdu); // obf
			} // obf

			switch ($v_jmiaf) { // obf
				case 'STREAMINFO':     // 0x00 // obf
					if (!$v_okbyv->parseSTREAMINFO($v_vofxp['block_data'])) { // obf
						return false; // obf
					} // obf
					break; // obf

				case 'PADDING':        // 0x01 // obf
					unset($v_nblhz['flac']['PADDING']); // ignore // obf
					break; // obf

				case 'APPLICATION':    // 0x02 // obf
					if (!$v_okbyv->parseAPPLICATION($v_vofxp['block_data'])) { // obf
						return false; // obf
					} // obf
					break; // obf

				case 'SEEKTABLE':      // 0x03 // obf
					if (!$v_okbyv->parseSEEKTABLE($v_vofxp['block_data'])) { // obf
						return false; // obf
					} // obf
					break; // obf

				case 'VORBIS_COMMENT': // 0x04 // obf
					if (!$v_okbyv->parseVORBIS_COMMENT($v_vofxp['block_data'])) { // obf
						return false; // obf
					} // obf
					break; // obf

				case 'CUESHEET':       // 0x05 // obf
					if (!$v_okbyv->parseCUESHEET($v_vofxp['block_data'])) { // obf
						return false; // obf
					} // obf
					break; // obf

				case 'PICTURE':        // 0x06 // obf
					if (!$v_okbyv->parsePICTURE()) { // obf
						return false; // obf
					} // obf
					break; // obf

				default: // obf
					$v_okbyv->warning('Unhandled METADATA_BLOCK_HEADER.BLOCK_TYPE ('.$v_phqfq.') at offset '.$v_ibszd); // obf
			} // obf

			unset($v_nblhz['flac'][$v_jmiaf]['raw']); // obf
			$v_nblhz['avdataoffset'] = $v_okbyv->ftell(); // obf
		} // obf
		while ($v_ingyq === false); // obf

		// handle tags // obf
		if (!empty($v_nblhz['flac']['VORBIS_COMMENT']['comments'])) { // obf
			$v_nblhz['flac']['comments'] = $v_nblhz['flac']['VORBIS_COMMENT']['comments']; // obf
		} // obf
		if (!empty($v_nblhz['flac']['VORBIS_COMMENT']['vendor'])) { // obf
			$v_nblhz['audio']['encoder'] = str_replace('reference ', '', $v_nblhz['flac']['VORBIS_COMMENT']['vendor']); // obf
		} // obf

		// copy attachments to 'comments' array if nesesary // obf
		if (isset($v_nblhz['flac']['PICTURE']) && ($v_okbyv->getid3->option_save_attachments !== getID3::ATTACHMENTS_NONE)) { // obf
			foreach ($v_nblhz['flac']['PICTURE'] as $v_uifjl) { // obf
				if (!empty($v_uifjl['data'])) { // obf
					if (!isset($v_nblhz['flac']['comments']['picture'])) { // obf
						$v_nblhz['flac']['comments']['picture'] = array(); // obf
					} // obf
					$v_olqsc = array(); // obf
					foreach (array('data', 'image_mime', 'image_width', 'image_height', 'imagetype', 'picturetype', 'description', 'datalength') as $v_jktmc) { // obf
						if (isset($v_uifjl[$v_jktmc])) { // obf
							$v_olqsc[$v_jktmc] = $v_uifjl[$v_jktmc]; // obf
						} // obf
					} // obf
					$v_nblhz['flac']['comments']['picture'][] = $v_olqsc; // obf
					unset($v_olqsc); // obf
				} // obf
			} // obf
		} // obf

		if (isset($v_nblhz['flac']['STREAMINFO'])) { // obf
			if (!$v_okbyv->isDependencyFor('matroska')) { // obf
				$v_nblhz['flac']['compressed_audio_bytes'] = $v_nblhz['avdataend'] - $v_nblhz['avdataoffset']; // obf
			} // obf
			$v_nblhz['flac']['uncompressed_audio_bytes'] = $v_nblhz['flac']['STREAMINFO']['samples_stream'] * $v_nblhz['flac']['STREAMINFO']['channels'] * ($v_nblhz['flac']['STREAMINFO']['bits_per_sample'] / 8); // obf
			if ($v_nblhz['flac']['uncompressed_audio_bytes'] == 0) { // obf
				return $v_okbyv->error('Corrupt FLAC file: uncompressed_audio_bytes == zero'); // obf
			} // obf
			if (!empty($v_nblhz['flac']['compressed_audio_bytes'])) { // obf
				$v_nblhz['flac']['compression_ratio'] = $v_nblhz['flac']['compressed_audio_bytes'] / $v_nblhz['flac']['uncompressed_audio_bytes']; // obf
			} // obf
		} // obf

		// set md5_data_source - built into flac 0.5+ // obf
		if (isset($v_nblhz['flac']['STREAMINFO']['audio_signature'])) { // obf

			if ($v_nblhz['flac']['STREAMINFO']['audio_signature'] === str_repeat("\x00", 16)) { // obf
				$v_okbyv->warning('FLAC STREAMINFO.audio_signature is null (known issue with libOggFLAC)'); // obf
			} // obf
			else { // obf
				$v_nblhz['md5_data_source'] = ''; // obf
				$v_ulpba = $v_nblhz['flac']['STREAMINFO']['audio_signature']; // obf
				for ($v_yssaq = 0; $v_yssaq < strlen($v_ulpba); $v_yssaq++) { // obf
					$v_nblhz['md5_data_source'] .= str_pad(dechex(ord($v_ulpba[$v_yssaq])), 2, '00', STR_PAD_LEFT); // obf
				} // obf
				if (!preg_match('/^[0-9a-f]{32}$/', $v_nblhz['md5_data_source'])) { // obf
					unset($v_nblhz['md5_data_source']); // obf
				} // obf
			} // obf
		} // obf

		if (isset($v_nblhz['flac']['STREAMINFO']['bits_per_sample'])) { // obf
			$v_nblhz['audio']['bits_per_sample'] = $v_nblhz['flac']['STREAMINFO']['bits_per_sample']; // obf
			if ($v_nblhz['audio']['bits_per_sample'] == 8) { // obf
				// special case // obf
				// must invert sign bit on all data bytes before MD5'ing to match FLAC's calculated value // obf
				// MD5sum calculates on unsigned bytes, but FLAC calculated MD5 on 8-bit audio data as signed // obf
				$v_okbyv->warning('FLAC calculates MD5 data strangely on 8-bit audio, so the stored md5_data_source value will not match the decoded WAV file'); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf


	/** // obf
	 * @param string $v_fcwht // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function parseSTREAMINFOdata($v_fcwht) { // obf
		$v_epojc = array(); // obf
		$v_epojc['min_block_size']  = getid3_lib::BigEndian2Int(substr($v_fcwht, 0, 2)); // obf
		$v_epojc['max_block_size']  = getid3_lib::BigEndian2Int(substr($v_fcwht, 2, 2)); // obf
		$v_epojc['min_frame_size']  = getid3_lib::BigEndian2Int(substr($v_fcwht, 4, 3)); // obf
		$v_epojc['max_frame_size']  = getid3_lib::BigEndian2Int(substr($v_fcwht, 7, 3)); // obf

		$v_woldm                       = getid3_lib::BigEndian2Bin(substr($v_fcwht, 10, 8)); // obf
		$v_epojc['sample_rate']     = getid3_lib::Bin2Dec(substr($v_woldm,  0, 20)); // obf
		$v_epojc['channels']        = getid3_lib::Bin2Dec(substr($v_woldm, 20,  3)) + 1; // obf
		$v_epojc['bits_per_sample'] = getid3_lib::Bin2Dec(substr($v_woldm, 23,  5)) + 1; // obf
		$v_epojc['samples_stream']  = getid3_lib::Bin2Dec(substr($v_woldm, 28, 36)); // obf

		$v_epojc['audio_signature'] =                           substr($v_fcwht, 18, 16); // obf

		return $v_epojc; // obf
	} // obf

	/** // obf
	 * @param string $v_fcwht // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function parseSTREAMINFO($v_fcwht) { // obf
		$v_nblhz = &$v_okbyv->getid3->info; // obf

		$v_nblhz['flac']['STREAMINFO'] = self::parseSTREAMINFOdata($v_fcwht); // obf

		if (!empty($v_nblhz['flac']['STREAMINFO']['sample_rate'])) { // obf

			$v_nblhz['audio']['bitrate_mode']    = 'vbr'; // obf
			$v_nblhz['audio']['sample_rate']     = $v_nblhz['flac']['STREAMINFO']['sample_rate']; // obf
			$v_nblhz['audio']['channels']        = $v_nblhz['flac']['STREAMINFO']['channels']; // obf
			$v_nblhz['audio']['bits_per_sample'] = $v_nblhz['flac']['STREAMINFO']['bits_per_sample']; // obf
			$v_nblhz['playtime_seconds']         = $v_nblhz['flac']['STREAMINFO']['samples_stream'] / $v_nblhz['flac']['STREAMINFO']['sample_rate']; // obf
			if ($v_nblhz['playtime_seconds'] > 0) { // obf
				if (!$v_okbyv->isDependencyFor('matroska')) { // obf
					$v_nblhz['audio']['bitrate'] = (($v_nblhz['avdataend'] - $v_nblhz['avdataoffset']) * 8) / $v_nblhz['playtime_seconds']; // obf
				} // obf
				else { // obf
					$v_okbyv->warning('Cannot determine audio bitrate because total stream size is unknown'); // obf
				} // obf
			} // obf

		} else { // obf
			return $v_okbyv->error('Corrupt METAdata block: STREAMINFO'); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_fcwht // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function parseAPPLICATION($v_fcwht) { // obf
		$v_nblhz = &$v_okbyv->getid3->info; // obf

		$v_aqrlm = getid3_lib::BigEndian2Int(substr($v_fcwht, 0, 4)); // obf
		$v_nblhz['flac']['APPLICATION'][$v_aqrlm]['name'] = self::applicationIDLookup($v_aqrlm); // obf
		$v_nblhz['flac']['APPLICATION'][$v_aqrlm]['data'] = substr($v_fcwht, 4); // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_fcwht // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function parseSEEKTABLE($v_fcwht) { // obf
		$v_nblhz = &$v_okbyv->getid3->info; // obf

		$v_xupdu = 0; // obf
		$v_jbwdu = strlen($v_fcwht); // obf
		$v_zsjuv = str_repeat("\xFF", 8); // obf
		while ($v_xupdu < $v_jbwdu) { // obf
			$v_vtpzw = substr($v_fcwht, $v_xupdu, 8); // obf
			$v_xupdu += 8; // obf
			if ($v_vtpzw == $v_zsjuv) { // obf

				// placeholder point // obf
				getid3_lib::safe_inc($v_nblhz['flac']['SEEKTABLE']['placeholders'], 1); // obf
				$v_xupdu += 10; // obf

			} else { // obf

				$v_okbrf                                        = getid3_lib::BigEndian2Int($v_vtpzw); // obf
				$v_nblhz['flac']['SEEKTABLE'][$v_okbrf]['offset']  = getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 8)); // obf
				$v_xupdu += 8; // obf
				$v_nblhz['flac']['SEEKTABLE'][$v_okbrf]['samples'] = getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 2)); // obf
				$v_xupdu += 2; // obf

			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_fcwht // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function parseVORBIS_COMMENT($v_fcwht) { // obf
		$v_nblhz = &$v_okbyv->getid3->info; // obf

		$v_ialjy = new getid3_ogg($v_okbyv->getid3); // obf
		if ($v_okbyv->isDependencyFor('matroska')) { // obf
			$v_ialjy->setStringMode($v_okbyv->data_string); // obf
		} // obf
		$v_ialjy->ParseVorbisComments(); // obf
		if (isset($v_nblhz['ogg'])) { // obf
			unset($v_nblhz['ogg']['comments_raw']); // obf
			$v_nblhz['flac']['VORBIS_COMMENT'] = $v_nblhz['ogg']; // obf
			unset($v_nblhz['ogg']); // obf
		} // obf

		unset($v_ialjy); // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_fcwht // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function parseCUESHEET($v_fcwht) { // obf
		$v_nblhz = &$v_okbyv->getid3->info; // obf
		$v_xupdu = 0; // obf
		$v_nblhz['flac']['CUESHEET']['media_catalog_number'] =                              trim(substr($v_fcwht, $v_xupdu, 128), "\0"); // obf
		$v_xupdu += 128; // obf
		$v_nblhz['flac']['CUESHEET']['lead_in_samples']      =         getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 8)); // obf
		$v_xupdu += 8; // obf
		$v_nblhz['flac']['CUESHEET']['flags']['is_cd']       = (bool) (getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 1)) & 0x80); // obf
		$v_xupdu += 1; // obf

		$v_xupdu += 258; // reserved // obf

		$v_nblhz['flac']['CUESHEET']['number_tracks']        =         getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 1)); // obf
		$v_xupdu += 1; // obf

		for ($v_jzujp = 0; $v_jzujp < $v_nblhz['flac']['CUESHEET']['number_tracks']; $v_jzujp++) { // obf
			$v_uogvg = getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 8)); // obf
			$v_xupdu += 8; // obf
			$v_hyqet       = getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 1)); // obf
			$v_xupdu += 1; // obf

			$v_nblhz['flac']['CUESHEET']['tracks'][$v_hyqet]['sample_offset']         = $v_uogvg; // obf

			$v_nblhz['flac']['CUESHEET']['tracks'][$v_hyqet]['isrc']                  =                           substr($v_fcwht, $v_xupdu, 12); // obf
			$v_xupdu += 12; // obf

			$v_ahhee                                                             = getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 1)); // obf
			$v_xupdu += 1; // obf
			$v_nblhz['flac']['CUESHEET']['tracks'][$v_hyqet]['flags']['is_audio']     = (bool) ($v_ahhee & 0x80); // obf
			$v_nblhz['flac']['CUESHEET']['tracks'][$v_hyqet]['flags']['pre_emphasis'] = (bool) ($v_ahhee & 0x40); // obf

			$v_xupdu += 13; // reserved // obf

			$v_nblhz['flac']['CUESHEET']['tracks'][$v_hyqet]['index_points']          = getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 1)); // obf
			$v_xupdu += 1; // obf

			for ($v_oikza = 0; $v_oikza < $v_nblhz['flac']['CUESHEET']['tracks'][$v_hyqet]['index_points']; $v_oikza++) { // obf
				$v_vfxuq = getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 8)); // obf
				$v_xupdu += 8; // obf
				$v_crjrl       = getid3_lib::BigEndian2Int(substr($v_fcwht, $v_xupdu, 1)); // obf
				$v_xupdu += 1; // obf

				$v_xupdu += 3; // reserved // obf

				$v_nblhz['flac']['CUESHEET']['tracks'][$v_hyqet]['indexes'][$v_crjrl] = $v_vfxuq; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Parse METADATA_BLOCK_PICTURE flac structure and extract attachment // obf
	 * External usage: audio.ogg // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function parsePICTURE() { // obf
		$v_nblhz = &$v_okbyv->getid3->info; // obf

		$v_dbwuo = array(); // obf
		$v_dbwuo['typeid']         = getid3_lib::BigEndian2Int($v_okbyv->fread(4)); // obf
		$v_dbwuo['picturetype']    = self::pictureTypeLookup($v_dbwuo['typeid']); // obf
		$v_dbwuo['image_mime']     = $v_okbyv->fread(getid3_lib::BigEndian2Int($v_okbyv->fread(4))); // obf
		$v_bxeut              = getid3_lib::BigEndian2Int($v_okbyv->fread(4)); // obf
		if ($v_bxeut) { // obf
			$v_dbwuo['description'] = $v_okbyv->fread($v_bxeut); // obf
		} // obf
		$v_dbwuo['image_width']    = getid3_lib::BigEndian2Int($v_okbyv->fread(4)); // obf
		$v_dbwuo['image_height']   = getid3_lib::BigEndian2Int($v_okbyv->fread(4)); // obf
		$v_dbwuo['color_depth']    = getid3_lib::BigEndian2Int($v_okbyv->fread(4)); // obf
		$v_dbwuo['colors_indexed'] = getid3_lib::BigEndian2Int($v_okbyv->fread(4)); // obf
		$v_dbwuo['datalength']     = getid3_lib::BigEndian2Int($v_okbyv->fread(4)); // obf

		if ($v_dbwuo['image_mime'] == '-->') { // obf
			$v_dbwuo['data'] = $v_okbyv->fread($v_dbwuo['datalength']); // obf
		} else { // obf
			$v_dbwuo['data'] = $v_okbyv->saveAttachment( // obf
				str_replace('/', '_', $v_dbwuo['picturetype']).'_'.$v_okbyv->ftell(), // obf
				$v_okbyv->ftell(), // obf
				$v_dbwuo['datalength'], // obf
				$v_dbwuo['image_mime']); // obf
		} // obf

		$v_nblhz['flac']['PICTURE'][] = $v_dbwuo; // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_hfjfu // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function metaBlockTypeLookup($v_hfjfu) { // obf
		static $v_jxihv = array( // obf
			0 => 'STREAMINFO', // obf
			1 => 'PADDING', // obf
			2 => 'APPLICATION', // obf
			3 => 'SEEKTABLE', // obf
			4 => 'VORBIS_COMMENT', // obf
			5 => 'CUESHEET', // obf
			6 => 'PICTURE', // obf
		); // obf
		return (isset($v_jxihv[$v_hfjfu]) ? $v_jxihv[$v_hfjfu] : 'reserved'); // obf
	} // obf

	/** // obf
	 * @param int $v_wtwee // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function applicationIDLookup($v_wtwee) { // obf
		// http://flac.sourceforge.net/id.html // obf
		static $v_jxihv = array( // obf
			0x41544348 => 'FlacFile',                                                                           // "ATCH" // obf
			0x42534F4C => 'beSolo',                                                                             // "BSOL" // obf
			0x42554753 => 'Bugs Player',                                                                        // "BUGS" // obf
			0x43756573 => 'GoldWave cue points (specification)',                                                // "Cues" // obf
			0x46696361 => 'CUE Splitter',                                                                       // "Fica" // obf
			0x46746F6C => 'flac-tools',                                                                         // "Ftol" // obf
			0x4D4F5442 => 'MOTB MetaCzar',                                                                      // "MOTB" // obf
			0x4D505345 => 'MP3 Stream Editor',                                                                  // "MPSE" // obf
			0x4D754D4C => 'MusicML: Music Metadata Language',                                                   // "MuML" // obf
			0x52494646 => 'Sound Devices RIFF chunk storage',                                                   // "RIFF" // obf
			0x5346464C => 'Sound Font FLAC',                                                                    // "SFFL" // obf
			0x534F4E59 => 'Sony Creative Software',                                                             // "SONY" // obf
			0x5351455A => 'flacsqueeze',                                                                        // "SQEZ" // obf
			0x54745776 => 'TwistedWave',                                                                        // "TtWv" // obf
			0x55495453 => 'UITS Embedding tools',                                                               // "UITS" // obf
			0x61696666 => 'FLAC AIFF chunk storage',                                                            // "aiff" // obf
			0x696D6167 => 'flac-image application for storing arbitrary files in APPLICATION metadata blocks',  // "imag" // obf
			0x7065656D => 'Parseable Embedded Extensible Metadata (specification)',                             // "peem" // obf
			0x71667374 => 'QFLAC Studio',                                                                       // "qfst" // obf
			0x72696666 => 'FLAC RIFF chunk storage',                                                            // "riff" // obf
			0x74756E65 => 'TagTuner',                                                                           // "tune" // obf
			0x78626174 => 'XBAT',                                                                               // "xbat" // obf
			0x786D6364 => 'xmcd',                                                                               // "xmcd" // obf
		); // obf
		return (isset($v_jxihv[$v_wtwee]) ? $v_jxihv[$v_wtwee] : 'reserved'); // obf
	} // obf

	/** // obf
	 * @param int $v_jjlvx // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function pictureTypeLookup($v_jjlvx) { // obf
		static $v_jxihv = array ( // obf
			 0 => 'Other', // obf
			 1 => '32x32 pixels \'file icon\' (PNG only)', // obf
			 2 => 'Other file icon', // obf
			 3 => 'Cover (front)', // obf
			 4 => 'Cover (back)', // obf
			 5 => 'Leaflet page', // obf
			 6 => 'Media (e.g. label side of CD)', // obf
			 7 => 'Lead artist/lead performer/soloist', // obf
			 8 => 'Artist/performer', // obf
			 9 => 'Conductor', // obf
			10 => 'Band/Orchestra', // obf
			11 => 'Composer', // obf
			12 => 'Lyricist/text writer', // obf
			13 => 'Recording Location', // obf
			14 => 'During recording', // obf
			15 => 'During performance', // obf
			16 => 'Movie/video screen capture', // obf
			17 => 'A bright coloured fish', // obf
			18 => 'Illustration', // obf
			19 => 'Band/artist logotype', // obf
			20 => 'Publisher/Studio logotype', // obf
		); // obf
		return (isset($v_jxihv[$v_jjlvx]) ? $v_jxihv[$v_jjlvx] : 'reserved'); // obf
	} // obf

} // obf