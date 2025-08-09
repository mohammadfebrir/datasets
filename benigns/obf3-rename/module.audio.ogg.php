
__fn_37772 = "preg_replace"; // obf
<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio.ogg.php                                        // // obf
// module for analyzing Ogg Vorbis, OggFLAC and Speex files    // // obf
// dependencies: module.audio.flac.php                         // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.flac.php', __FILE__, true); // obf

class getid3_ogg extends getid3_handler // obf
{ // obf
	/** // obf
	 * @link http://xiph.org/vorbis/doc/Vorbis_I_spec.html // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_fnumb = &$v_qdvmc->getid3->info; // obf

		$v_fnumb['fileformat'] = 'ogg'; // obf

		// Warn about illegal tags - only vorbiscomments are allowed // obf
		if (isset($v_fnumb['id3v2'])) { // obf
			$v_qdvmc->warning('Illegal ID3v2 tag present.'); // obf
		} // obf
		if (isset($v_fnumb['id3v1'])) { // obf
			$v_qdvmc->warning('Illegal ID3v1 tag present.'); // obf
		} // obf
		if (isset($v_fnumb['ape'])) { // obf
			$v_qdvmc->warning('Illegal APE tag present.'); // obf
		} // obf


		// Page 1 - Stream Header // obf

		$v_qdvmc->fseek($v_fnumb['avdataoffset']); // obf

		$v_drpaz = $v_qdvmc->ParseOggPageHeader(); // obf
		$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']] = $v_drpaz; // obf

		if ($v_qdvmc->ftell() >= $v_qdvmc->getid3->fread_buffer_size()) { // obf
			$v_qdvmc->error('Could not find start of Ogg page in the first '.$v_qdvmc->getid3->fread_buffer_size().' bytes (this might not be an Ogg-Vorbis file?)'); // obf
			unset($v_fnumb['fileformat']); // obf
			unset($v_fnumb['ogg']); // obf
			return false; // obf
		} // obf

		$v_bwnaw = $v_qdvmc->fread($v_drpaz['page_length']); // obf
		$v_obzbp = 0; // obf

		if (substr($v_bwnaw, 0, 4) == 'fLaC') { // obf

			$v_fnumb['audio']['dataformat']   = 'flac'; // obf
			$v_fnumb['audio']['bitrate_mode'] = 'vbr'; // obf
			$v_fnumb['audio']['lossless']     = true; // obf

		} elseif (substr($v_bwnaw, 1, 6) == 'vorbis') { // obf

			$v_qdvmc->ParseVorbisPageHeader($v_bwnaw, $v_obzbp, $v_drpaz); // obf

		} elseif (substr($v_bwnaw, 0, 8) == 'OpusHead') { // obf

			if ($v_qdvmc->ParseOpusPageHeader($v_bwnaw, $v_obzbp, $v_drpaz) === false) { // obf
				return false; // obf
			} // obf

		} elseif (substr($v_bwnaw, 0, 8) == 'Speex   ') { // obf

			// http://www.speex.org/manual/node10.html // obf

			$v_fnumb['audio']['dataformat']   = 'speex'; // obf
			$v_fnumb['mime_type']             = 'audio/speex'; // obf
			$v_fnumb['audio']['bitrate_mode'] = 'abr'; // obf
			$v_fnumb['audio']['lossless']     = false; // obf

			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['speex_string']           =                              substr($v_bwnaw, $v_obzbp, 8); // hard-coded to 'Speex   ' // obf
			$v_obzbp += 8; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['speex_version']          =                              substr($v_bwnaw, $v_obzbp, 20); // obf
			$v_obzbp += 20; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['speex_version_id']       = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['header_size']            = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['rate']                   = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['mode']                   = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['mode_bitstream_version'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['nb_channels']            = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['bitrate']                = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['framesize']              = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['vbr']                    = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['frames_per_packet']      = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['extra_headers']          = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['reserved1']              = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['reserved2']              = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
			$v_obzbp += 4; // obf

			$v_fnumb['speex']['speex_version'] = trim($v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['speex_version']); // obf
			$v_fnumb['speex']['sample_rate']   = $v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['rate']; // obf
			$v_fnumb['speex']['channels']      = $v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['nb_channels']; // obf
			$v_fnumb['speex']['vbr']           = (bool) $v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['vbr']; // obf
			$v_fnumb['speex']['band_type']     = $v_qdvmc->SpeexBandModeLookup($v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['mode']); // obf

			$v_fnumb['audio']['sample_rate']   = $v_fnumb['speex']['sample_rate']; // obf
			$v_fnumb['audio']['channels']      = $v_fnumb['speex']['channels']; // obf
			if ($v_fnumb['speex']['vbr']) { // obf
				$v_fnumb['audio']['bitrate_mode'] = 'vbr'; // obf
			} // obf

		} elseif (substr($v_bwnaw, 0, 7) == "\x80".'theora') { // obf

			// http://www.theora.org/doc/Theora.pdf (section 6.2) // obf

			$v_fnumb['ogg']['pageheader']['theora']['theora_magic']             =                           substr($v_bwnaw, $v_obzbp,  7); // hard-coded to "\x80.'theora' // obf
			$v_obzbp += 7; // obf
			$v_fnumb['ogg']['pageheader']['theora']['version_major']            = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
			$v_obzbp += 1; // obf
			$v_fnumb['ogg']['pageheader']['theora']['version_minor']            = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
			$v_obzbp += 1; // obf
			$v_fnumb['ogg']['pageheader']['theora']['version_revision']         = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
			$v_obzbp += 1; // obf
			$v_fnumb['ogg']['pageheader']['theora']['frame_width_macroblocks']  = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  2)); // obf
			$v_obzbp += 2; // obf
			$v_fnumb['ogg']['pageheader']['theora']['frame_height_macroblocks'] = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  2)); // obf
			$v_obzbp += 2; // obf
			$v_fnumb['ogg']['pageheader']['theora']['resolution_x']             = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  3)); // obf
			$v_obzbp += 3; // obf
			$v_fnumb['ogg']['pageheader']['theora']['resolution_y']             = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  3)); // obf
			$v_obzbp += 3; // obf
			$v_fnumb['ogg']['pageheader']['theora']['picture_offset_x']         = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
			$v_obzbp += 1; // obf
			$v_fnumb['ogg']['pageheader']['theora']['picture_offset_y']         = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
			$v_obzbp += 1; // obf
			$v_fnumb['ogg']['pageheader']['theora']['frame_rate_numerator']     = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader']['theora']['frame_rate_denominator']   = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  4)); // obf
			$v_obzbp += 4; // obf
			$v_fnumb['ogg']['pageheader']['theora']['pixel_aspect_numerator']   = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  3)); // obf
			$v_obzbp += 3; // obf
			$v_fnumb['ogg']['pageheader']['theora']['pixel_aspect_denominator'] = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  3)); // obf
			$v_obzbp += 3; // obf
			$v_fnumb['ogg']['pageheader']['theora']['color_space_id']           = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
			$v_obzbp += 1; // obf
			$v_fnumb['ogg']['pageheader']['theora']['nominal_bitrate']          = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  3)); // obf
			$v_obzbp += 3; // obf
			$v_fnumb['ogg']['pageheader']['theora']['flags']                    = getid3_lib::BigEndian2Int(substr($v_bwnaw, $v_obzbp,  2)); // obf
			$v_obzbp += 2; // obf

			$v_fnumb['ogg']['pageheader']['theora']['quality']         = ($v_fnumb['ogg']['pageheader']['theora']['flags'] & 0xFC00) >> 10; // obf
			$v_fnumb['ogg']['pageheader']['theora']['kfg_shift']       = ($v_fnumb['ogg']['pageheader']['theora']['flags'] & 0x03E0) >>  5; // obf
			$v_fnumb['ogg']['pageheader']['theora']['pixel_format_id'] = ($v_fnumb['ogg']['pageheader']['theora']['flags'] & 0x0018) >>  3; // obf
			$v_fnumb['ogg']['pageheader']['theora']['reserved']        = ($v_fnumb['ogg']['pageheader']['theora']['flags'] & 0x0007) >>  0; // should be 0 // obf
			$v_fnumb['ogg']['pageheader']['theora']['color_space']     = self::TheoraColorSpace($v_fnumb['ogg']['pageheader']['theora']['color_space_id']); // obf
			$v_fnumb['ogg']['pageheader']['theora']['pixel_format']    = self::TheoraPixelFormat($v_fnumb['ogg']['pageheader']['theora']['pixel_format_id']); // obf

			$v_fnumb['video']['dataformat']   = 'theora'; // obf
			$v_fnumb['mime_type']             = 'video/ogg'; // obf
			//$v_fnumb['audio']['bitrate_mode'] = 'abr'; // obf
			//$v_fnumb['audio']['lossless']     = false; // obf
			$v_fnumb['video']['resolution_x'] = $v_fnumb['ogg']['pageheader']['theora']['resolution_x']; // obf
			$v_fnumb['video']['resolution_y'] = $v_fnumb['ogg']['pageheader']['theora']['resolution_y']; // obf
			if ($v_fnumb['ogg']['pageheader']['theora']['frame_rate_denominator'] > 0) { // obf
				$v_fnumb['video']['frame_rate'] = (float) $v_fnumb['ogg']['pageheader']['theora']['frame_rate_numerator'] / $v_fnumb['ogg']['pageheader']['theora']['frame_rate_denominator']; // obf
			} // obf
			if ($v_fnumb['ogg']['pageheader']['theora']['pixel_aspect_denominator'] > 0) { // obf
				$v_fnumb['video']['pixel_aspect_ratio'] = (float) $v_fnumb['ogg']['pageheader']['theora']['pixel_aspect_numerator'] / $v_fnumb['ogg']['pageheader']['theora']['pixel_aspect_denominator']; // obf
			} // obf
$v_qdvmc->warning('Ogg Theora (v3) not fully supported in this version of getID3 ['.$v_qdvmc->getid3->version().'] -- bitrate, playtime and all audio data are currently unavailable'); // obf


		} elseif (substr($v_bwnaw, 0, 8) == "fishead\x00") { // obf

			// Ogg Skeleton version 3.0 Format Specification // obf
			// http://xiph.org/ogg/doc/skeleton.html // obf
			$v_obzbp += 8; // obf
			$v_fnumb['ogg']['skeleton']['fishead']['raw']['version_major']                = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  2)); // obf
			$v_obzbp += 2; // obf
			$v_fnumb['ogg']['skeleton']['fishead']['raw']['version_minor']                = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  2)); // obf
			$v_obzbp += 2; // obf
			$v_fnumb['ogg']['skeleton']['fishead']['raw']['presentationtime_numerator']   = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  8)); // obf
			$v_obzbp += 8; // obf
			$v_fnumb['ogg']['skeleton']['fishead']['raw']['presentationtime_denominator'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  8)); // obf
			$v_obzbp += 8; // obf
			$v_fnumb['ogg']['skeleton']['fishead']['raw']['basetime_numerator']           = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  8)); // obf
			$v_obzbp += 8; // obf
			$v_fnumb['ogg']['skeleton']['fishead']['raw']['basetime_denominator']         = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  8)); // obf
			$v_obzbp += 8; // obf
			$v_fnumb['ogg']['skeleton']['fishead']['raw']['utc']                          = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 20)); // obf
			$v_obzbp += 20; // obf

			$v_fnumb['ogg']['skeleton']['fishead']['version']          = $v_fnumb['ogg']['skeleton']['fishead']['raw']['version_major'].'.'.$v_fnumb['ogg']['skeleton']['fishead']['raw']['version_minor']; // obf
			$v_fnumb['ogg']['skeleton']['fishead']['presentationtime'] = getid3_lib::SafeDiv($v_fnumb['ogg']['skeleton']['fishead']['raw']['presentationtime_numerator'], $v_fnumb['ogg']['skeleton']['fishead']['raw']['presentationtime_denominator']); // obf
			$v_fnumb['ogg']['skeleton']['fishead']['basetime']         = getid3_lib::SafeDiv($v_fnumb['ogg']['skeleton']['fishead']['raw']['basetime_numerator'],         $v_fnumb['ogg']['skeleton']['fishead']['raw']['basetime_denominator']); // obf
			$v_fnumb['ogg']['skeleton']['fishead']['utc']              = $v_fnumb['ogg']['skeleton']['fishead']['raw']['utc']; // obf


			$v_lcqca = 0; // obf
			do { // obf
				$v_drpaz = $v_qdvmc->ParseOggPageHeader(); // obf
				$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno'].'.'.$v_lcqca++] = $v_drpaz; // obf
				$v_bwnaw = $v_qdvmc->fread($v_drpaz['page_length']); // obf
				$v_qdvmc->fseek($v_drpaz['page_end_offset']); // obf

				if (substr($v_bwnaw, 0, 8) == "fisbone\x00") { // obf

					$v_obzbp = 8; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['message_header_offset']   = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  4)); // obf
					$v_obzbp += 4; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['serial_number']           = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  4)); // obf
					$v_obzbp += 4; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['number_header_packets']   = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  4)); // obf
					$v_obzbp += 4; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['granulerate_numerator']   = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  8)); // obf
					$v_obzbp += 8; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['granulerate_denominator'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  8)); // obf
					$v_obzbp += 8; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['basegranule']             = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  8)); // obf
					$v_obzbp += 8; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['preroll']                 = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  4)); // obf
					$v_obzbp += 4; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['granuleshift']            = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
					$v_obzbp += 1; // obf
					$v_fnumb['ogg']['skeleton']['fisbone']['raw']['padding']                 =                              substr($v_bwnaw, $v_obzbp,  3); // obf
					$v_obzbp += 3; // obf

				} elseif (substr($v_bwnaw, 1, 6) == 'theora') { // obf

					$v_fnumb['video']['dataformat'] = 'theora1'; // obf
					$v_qdvmc->error('Ogg Theora (v1) not correctly handled in this version of getID3 ['.$v_qdvmc->getid3->version().']'); // obf
					//break; // obf

				} elseif (substr($v_bwnaw, 1, 6) == 'vorbis') { // obf

					$v_qdvmc->ParseVorbisPageHeader($v_bwnaw, $v_obzbp, $v_drpaz); // obf

				} else { // obf
					$v_qdvmc->error('unexpected'); // obf
					//break; // obf
				} // obf
			//} while ($v_drpaz['page_seqno'] == 0); // obf
			} while (($v_drpaz['page_seqno'] == 0) && (substr($v_bwnaw, 0, 8) != "fisbone\x00")); // obf

			$v_qdvmc->fseek($v_drpaz['page_start_offset']); // obf

			$v_qdvmc->error('Ogg Skeleton not correctly handled in this version of getID3 ['.$v_qdvmc->getid3->version().']'); // obf
			//return false; // obf

		} elseif (substr($v_bwnaw, 0, 5) == "\x7F".'FLAC') { // obf
			// https://xiph.org/flac/ogg_mapping.html // obf

			$v_fnumb['audio']['dataformat']   = 'flac'; // obf
			$v_fnumb['audio']['bitrate_mode'] = 'vbr'; // obf
			$v_fnumb['audio']['lossless']     = true; // obf

			$v_fnumb['ogg']['flac']['header']['version_major']  =                         ord(substr($v_bwnaw,  5, 1)); // obf
			$v_fnumb['ogg']['flac']['header']['version_minor']  =                         ord(substr($v_bwnaw,  6, 1)); // obf
			$v_fnumb['ogg']['flac']['header']['header_packets'] =   getid3_lib::BigEndian2Int(substr($v_bwnaw,  7, 2)) + 1; // "A two-byte, big-endian binary number signifying the number of header (non-audio) packets, not including this one. This number may be zero (0x0000) to signify 'unknown' but be aware that some decoders may not be able to handle such streams." // obf
			$v_fnumb['ogg']['flac']['header']['magic']          =                             substr($v_bwnaw,  9, 4); // obf
			if ($v_fnumb['ogg']['flac']['header']['magic'] != 'fLaC') { // obf
				$v_qdvmc->error('Ogg-FLAC expecting "fLaC", found "'.$v_fnumb['ogg']['flac']['header']['magic'].'" ('.trim(getid3_lib::PrintHexBytes($v_fnumb['ogg']['flac']['header']['magic'])).')'); // obf
				return false; // obf
			} // obf
			$v_fnumb['ogg']['flac']['header']['STREAMINFO_bytes'] = getid3_lib::BigEndian2Int(substr($v_bwnaw, 13, 4)); // obf
			$v_fnumb['flac']['STREAMINFO'] = getid3_flac::parseSTREAMINFOdata(substr($v_bwnaw, 17, 34)); // obf
			if (!empty($v_fnumb['flac']['STREAMINFO']['sample_rate'])) { // obf
				$v_fnumb['audio']['bitrate_mode']    = 'vbr'; // obf
				$v_fnumb['audio']['sample_rate']     = $v_fnumb['flac']['STREAMINFO']['sample_rate']; // obf
				$v_fnumb['audio']['channels']        = $v_fnumb['flac']['STREAMINFO']['channels']; // obf
				$v_fnumb['audio']['bits_per_sample'] = $v_fnumb['flac']['STREAMINFO']['bits_per_sample']; // obf
				$v_fnumb['playtime_seconds']         = getid3_lib::SafeDiv($v_fnumb['flac']['STREAMINFO']['samples_stream'], $v_fnumb['flac']['STREAMINFO']['sample_rate']); // obf
			} // obf

		} else { // obf

			$v_qdvmc->error('Expecting one of "vorbis", "Speex", "OpusHead", "vorbis", "fishhead", "theora", "fLaC" identifier strings, found "'.substr($v_bwnaw, 0, 8).'"'); // obf
			unset($v_fnumb['ogg']); // obf
			unset($v_fnumb['mime_type']); // obf
			return false; // obf

		} // obf

		// Page 2 - Comment Header // obf
		$v_drpaz = $v_qdvmc->ParseOggPageHeader(); // obf
		$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']] = $v_drpaz; // obf

		switch ($v_fnumb['audio']['dataformat']) { // obf
			case 'vorbis': // obf
				$v_bwnaw = $v_qdvmc->fread($v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_length']); // obf
				$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['packet_type'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, 0, 1)); // obf
				$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['stream_type'] =                              substr($v_bwnaw, 1, 6); // hard-coded to 'vorbis' // obf

				$v_qdvmc->ParseVorbisComments(); // obf
				break; // obf

			case 'flac': // obf
				$v_ykmro = new getid3_flac($v_qdvmc->getid3); // obf
				if (!$v_ykmro->parseMETAdata()) { // obf
					$v_qdvmc->error('Failed to parse FLAC headers'); // obf
					return false; // obf
				} // obf
				unset($v_ykmro); // obf
				break; // obf

			case 'speex': // obf
				$v_qdvmc->fseek($v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_length'], SEEK_CUR); // obf
				$v_qdvmc->ParseVorbisComments(); // obf
				break; // obf

			case 'opus': // obf
				$v_bwnaw = $v_qdvmc->fread($v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_length']); // obf
				$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['stream_type'] = substr($v_bwnaw, 0, 8); // hard-coded to 'OpusTags' // obf
				if(substr($v_bwnaw, 0, 8)  != 'OpusTags') { // obf
					$v_qdvmc->error('Expected "OpusTags" as header but got "'.substr($v_bwnaw, 0, 8).'"'); // obf
					return false; // obf
				} // obf

				$v_qdvmc->ParseVorbisComments(); // obf
				break; // obf

		} // obf

		// Last Page - Number of Samples // obf
		if (!getid3_lib::intValueSupported($v_fnumb['avdataend'])) { // obf

			$v_qdvmc->warning('Unable to parse Ogg end chunk file (PHP does not support file operations beyond '.round(PHP_INT_MAX / 1073741824).'GB)'); // obf

		} else { // obf

			$v_qdvmc->fseek(max($v_fnumb['avdataend'] - $v_qdvmc->getid3->fread_buffer_size(), 0)); // obf
			$v_ximbo = strrev($v_qdvmc->fread($v_qdvmc->getid3->fread_buffer_size())); // obf
			if ($v_ixnui = strpos($v_ximbo, 'SggO')) { // obf
				$v_qdvmc->fseek($v_fnumb['avdataend'] - ($v_ixnui + strlen('SggO'))); // obf
				$v_fnumb['avdataend'] = $v_qdvmc->ftell(); // obf
				$v_fnumb['ogg']['pageheader']['eos'] = $v_qdvmc->ParseOggPageHeader(); // obf
				$v_fnumb['ogg']['samples']   = $v_fnumb['ogg']['pageheader']['eos']['pcm_abs_position']; // obf
				if ($v_fnumb['ogg']['samples'] == 0) { // obf
					$v_qdvmc->error('Corrupt Ogg file: eos.number of samples == zero'); // obf
					return false; // obf
				} // obf
				if (!empty($v_fnumb['audio']['sample_rate'])) { // obf
					$v_fnumb['ogg']['bitrate_average'] = (($v_fnumb['avdataend'] - $v_fnumb['avdataoffset']) * 8) * $v_fnumb['audio']['sample_rate'] / $v_fnumb['ogg']['samples']; // obf
				} // obf
			} // obf

		} // obf

		if (!empty($v_fnumb['ogg']['bitrate_average'])) { // obf
			$v_fnumb['audio']['bitrate'] = $v_fnumb['ogg']['bitrate_average']; // obf
		} elseif (!empty($v_fnumb['ogg']['bitrate_nominal'])) { // obf
			$v_fnumb['audio']['bitrate'] = $v_fnumb['ogg']['bitrate_nominal']; // obf
		} elseif (!empty($v_fnumb['ogg']['bitrate_min']) && !empty($v_fnumb['ogg']['bitrate_max'])) { // obf
			$v_fnumb['audio']['bitrate'] = ($v_fnumb['ogg']['bitrate_min'] + $v_fnumb['ogg']['bitrate_max']) / 2; // obf
		} // obf
		if (isset($v_fnumb['audio']['bitrate']) && !isset($v_fnumb['playtime_seconds'])) { // obf
			if ($v_fnumb['audio']['bitrate'] == 0) { // obf
				$v_qdvmc->error('Corrupt Ogg file: bitrate_audio == zero'); // obf
				return false; // obf
			} // obf
			$v_fnumb['playtime_seconds'] = (float) ((($v_fnumb['avdataend'] - $v_fnumb['avdataoffset']) * 8) / $v_fnumb['audio']['bitrate']); // obf
		} // obf

		if (isset($v_fnumb['ogg']['vendor'])) { // obf
			$v_fnumb['audio']['encoder'] = __fn_37772('/^Encoded with /', '', $v_fnumb['ogg']['vendor']); // obf

			// Vorbis only // obf
			if ($v_fnumb['audio']['dataformat'] == 'vorbis') { // obf

				// Vorbis 1.0 starts with Xiph.Org // obf
				if  (preg_match('/^Xiph.Org/', $v_fnumb['audio']['encoder'])) { // obf

					if ($v_fnumb['audio']['bitrate_mode'] == 'abr') { // obf

						// Set -b 128 on abr files // obf
						$v_fnumb['audio']['encoder_options'] = '-b '.round($v_fnumb['ogg']['bitrate_nominal'] / 1000); // obf

					} elseif (($v_fnumb['audio']['bitrate_mode'] == 'vbr') && ($v_fnumb['audio']['channels'] == 2) && ($v_fnumb['audio']['sample_rate'] >= 44100) && ($v_fnumb['audio']['sample_rate'] <= 48000)) { // obf
						// Set -q N on vbr files // obf
						$v_fnumb['audio']['encoder_options'] = '-q '.$v_qdvmc->get_quality_from_nominal_bitrate($v_fnumb['ogg']['bitrate_nominal']); // obf

					} // obf
				} // obf

				if (empty($v_fnumb['audio']['encoder_options']) && !empty($v_fnumb['ogg']['bitrate_nominal'])) { // obf
					$v_fnumb['audio']['encoder_options'] = 'Nominal bitrate: '.intval(round($v_fnumb['ogg']['bitrate_nominal'] / 1000)).'kbps'; // obf
				} // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_bwnaw // obf
	 * @param int    $v_obzbp // obf
	 * @param array  $v_drpaz // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function ParseVorbisPageHeader(&$v_bwnaw, &$v_obzbp, &$v_drpaz) { // obf
		$v_fnumb = &$v_qdvmc->getid3->info; // obf
		$v_fnumb['audio']['dataformat'] = 'vorbis'; // obf
		$v_fnumb['audio']['lossless']   = false; // obf

		$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['packet_type'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)); // obf
		$v_obzbp += 1; // obf
		$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['stream_type'] = substr($v_bwnaw, $v_obzbp, 6); // hard-coded to 'vorbis' // obf
		$v_obzbp += 6; // obf
		$v_fnumb['ogg']['bitstreamversion'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
		$v_obzbp += 4; // obf
		$v_fnumb['ogg']['numberofchannels'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)); // obf
		$v_obzbp += 1; // obf
		$v_fnumb['audio']['channels']       = $v_fnumb['ogg']['numberofchannels']; // obf
		$v_fnumb['ogg']['samplerate']       = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
		$v_obzbp += 4; // obf
		if ($v_fnumb['ogg']['samplerate'] == 0) { // obf
			$v_qdvmc->error('Corrupt Ogg file: sample rate == zero'); // obf
			return false; // obf
		} // obf
		$v_fnumb['audio']['sample_rate']    = $v_fnumb['ogg']['samplerate']; // obf
		$v_fnumb['ogg']['samples']          = 0; // filled in later // obf
		$v_fnumb['ogg']['bitrate_average']  = 0; // filled in later // obf
		$v_fnumb['ogg']['bitrate_max']      = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
		$v_obzbp += 4; // obf
		$v_fnumb['ogg']['bitrate_nominal']  = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
		$v_obzbp += 4; // obf
		$v_fnumb['ogg']['bitrate_min']      = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
		$v_obzbp += 4; // obf
		$v_fnumb['ogg']['blocksize_small']  = pow(2,  getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)) & 0x0F); // obf
		$v_fnumb['ogg']['blocksize_large']  = pow(2, (getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)) & 0xF0) >> 4); // obf
		$v_fnumb['ogg']['stop_bit']         = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)); // must be 1, marks end of packet // obf

		$v_fnumb['audio']['bitrate_mode'] = 'vbr'; // overridden if actually abr // obf
		if ($v_fnumb['ogg']['bitrate_max'] == 0xFFFFFFFF) { // obf
			unset($v_fnumb['ogg']['bitrate_max']); // obf
			$v_fnumb['audio']['bitrate_mode'] = 'abr'; // obf
		} // obf
		if ($v_fnumb['ogg']['bitrate_nominal'] == 0xFFFFFFFF) { // obf
			unset($v_fnumb['ogg']['bitrate_nominal']); // obf
		} // obf
		if ($v_fnumb['ogg']['bitrate_min'] == 0xFFFFFFFF) { // obf
			unset($v_fnumb['ogg']['bitrate_min']); // obf
			$v_fnumb['audio']['bitrate_mode'] = 'abr'; // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @link http://tools.ietf.org/html/draft-ietf-codec-oggopus-03 // obf
	 * // obf
	 * @param string $v_bwnaw // obf
	 * @param int    $v_obzbp // obf
	 * @param array  $v_drpaz // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function ParseOpusPageHeader(&$v_bwnaw, &$v_obzbp, &$v_drpaz) { // obf
		$v_fnumb = &$v_qdvmc->getid3->info; // obf
		$v_fnumb['audio']['dataformat']   = 'opus'; // obf
		$v_fnumb['mime_type']             = 'audio/ogg; codecs=opus'; // obf

		/** @todo find a usable way to detect abr (vbr that is padded to be abr) */ // obf
		$v_fnumb['audio']['bitrate_mode'] = 'vbr'; // obf

		$v_fnumb['audio']['lossless']     = false; // obf

		$v_fnumb['ogg']['pageheader']['opus']['opus_magic'] = substr($v_bwnaw, $v_obzbp, 8); // hard-coded to 'OpusHead' // obf
		$v_obzbp += 8; // obf
		$v_fnumb['ogg']['pageheader']['opus']['version']    = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
		$v_obzbp += 1; // obf

		if ($v_fnumb['ogg']['pageheader']['opus']['version'] < 1 || $v_fnumb['ogg']['pageheader']['opus']['version'] > 15) { // obf
			$v_qdvmc->error('Unknown opus version number (only accepting 1-15)'); // obf
			return false; // obf
		} // obf

		$v_fnumb['ogg']['pageheader']['opus']['out_channel_count'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
		$v_obzbp += 1; // obf

		if ($v_fnumb['ogg']['pageheader']['opus']['out_channel_count'] == 0) { // obf
			$v_qdvmc->error('Invalid channel count in opus header (must not be zero)'); // obf
			return false; // obf
		} // obf

		$v_fnumb['ogg']['pageheader']['opus']['pre_skip'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  2)); // obf
		$v_obzbp += 2; // obf

		$v_fnumb['ogg']['pageheader']['opus']['input_sample_rate'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  4)); // obf
		$v_obzbp += 4; // obf

		//$v_fnumb['ogg']['pageheader']['opus']['output_gain'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  2)); // obf
		//$v_obzbp += 2; // obf

		//$v_fnumb['ogg']['pageheader']['opus']['channel_mapping_family'] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp,  1)); // obf
		//$v_obzbp += 1; // obf

		$v_fnumb['opus']['opus_version']       = $v_fnumb['ogg']['pageheader']['opus']['version']; // obf
		$v_fnumb['opus']['sample_rate_input']  = $v_fnumb['ogg']['pageheader']['opus']['input_sample_rate']; // obf
		$v_fnumb['opus']['out_channel_count']  = $v_fnumb['ogg']['pageheader']['opus']['out_channel_count']; // obf

		$v_fnumb['audio']['channels']          = $v_fnumb['opus']['out_channel_count']; // obf
		$v_fnumb['audio']['sample_rate_input'] = $v_fnumb['opus']['sample_rate_input']; // obf
		$v_fnumb['audio']['sample_rate']       = 48000; // "All Opus audio is coded at 48 kHz, and should also be decoded at 48 kHz for playback (unless the target hardware does not support this sampling rate). However, this field may be used to resample the audio back to the original sampling rate, for example, when saving the output to a file." -- https://mf4.xiph.org/jenkins/view/opus/job/opusfile-unix/ws/doc/html/structOpusHead.html // obf
		return true; // obf
	} // obf

	/** // obf
	 * @return array|false // obf
	 */ // obf
	public function ParseOggPageHeader() { // obf
		// http://xiph.org/ogg/vorbis/doc/framing.html // obf
		$v_qmyrq = array(); // obf
		$v_qmyrq['page_start_offset'] = $v_qdvmc->ftell(); // where we started from in the file // obf

		$v_bwnaw = $v_qdvmc->fread($v_qdvmc->getid3->fread_buffer_size()); // obf
		$v_obzbp = 0; // obf
		while (substr($v_bwnaw, $v_obzbp++, 4) != 'OggS') { // obf
			if (($v_qdvmc->ftell() - $v_qmyrq['page_start_offset']) >= $v_qdvmc->getid3->fread_buffer_size()) { // obf
				// should be found before here // obf
				return false; // obf
			} // obf
			if (($v_obzbp + 28) > strlen($v_bwnaw)) { // obf
				if ($v_qdvmc->feof() || (($v_bwnaw .= $v_qdvmc->fread($v_qdvmc->getid3->fread_buffer_size())) === '')) { // obf
					// get some more data, unless eof, in which case fail // obf
					return false; // obf
				} // obf
			} // obf
		} // obf
		$v_obzbp += strlen('OggS') - 1; // page, delimited by 'OggS' // obf

		$v_qmyrq['stream_structver']  = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)); // obf
		$v_obzbp += 1; // obf
		$v_qmyrq['flags_raw']         = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)); // obf
		$v_obzbp += 1; // obf
		$v_qmyrq['flags']['fresh']    = (bool) ($v_qmyrq['flags_raw'] & 0x01); // fresh packet // obf
		$v_qmyrq['flags']['bos']      = (bool) ($v_qmyrq['flags_raw'] & 0x02); // first page of logical bitstream (bos) // obf
		$v_qmyrq['flags']['eos']      = (bool) ($v_qmyrq['flags_raw'] & 0x04); // last page of logical bitstream (eos) // obf

		$v_qmyrq['pcm_abs_position']  = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 8)); // obf
		$v_obzbp += 8; // obf
		$v_qmyrq['stream_serialno']   = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
		$v_obzbp += 4; // obf
		$v_qmyrq['page_seqno']        = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
		$v_obzbp += 4; // obf
		$v_qmyrq['page_checksum']     = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 4)); // obf
		$v_obzbp += 4; // obf
		$v_qmyrq['page_segments']     = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)); // obf
		$v_obzbp += 1; // obf
		$v_qmyrq['page_length'] = 0; // obf
		for ($v_jnbip = 0; $v_jnbip < $v_qmyrq['page_segments']; $v_jnbip++) { // obf
			$v_qmyrq['segment_table'][$v_jnbip] = getid3_lib::LittleEndian2Int(substr($v_bwnaw, $v_obzbp, 1)); // obf
			$v_obzbp += 1; // obf
			$v_qmyrq['page_length'] += $v_qmyrq['segment_table'][$v_jnbip]; // obf
		} // obf
		$v_qmyrq['header_end_offset'] = $v_qmyrq['page_start_offset'] + $v_obzbp; // obf
		$v_qmyrq['page_end_offset']   = $v_qmyrq['header_end_offset'] + $v_qmyrq['page_length']; // obf
		$v_qdvmc->fseek($v_qmyrq['header_end_offset']); // obf

		return $v_qmyrq; // obf
	} // obf

	/** // obf
	 * @link http://xiph.org/vorbis/doc/Vorbis_I_spec.html#x1-810005 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function ParseVorbisComments() { // obf
		$v_fnumb = &$v_qdvmc->getid3->info; // obf

		$v_abjbp = $v_qdvmc->ftell(); // obf
		$v_dfdjg = null; // obf
		$v_tawzi = 0; // obf
		$v_xedcy = 1; // obf
		$v_vflzm = 0; // obf

		switch ($v_fnumb['audio']['dataformat']) { // obf
			case 'vorbis': // obf
			case 'speex': // obf
			case 'opus': // obf
				$v_vflzm = $v_fnumb['ogg']['pageheader'][$v_xedcy]['page_start_offset'];  // Second Ogg page, after header block // obf
				$v_qdvmc->fseek($v_vflzm); // obf
				$v_tawzi = 27 + $v_fnumb['ogg']['pageheader'][$v_xedcy]['page_segments']; // obf
				$v_dfdjg = $v_qdvmc->fread(self::OggPageSegmentLength($v_fnumb['ogg']['pageheader'][$v_xedcy], 1) + $v_tawzi); // obf

				if ($v_fnumb['audio']['dataformat'] == 'vorbis') { // obf
					$v_tawzi += (strlen('vorbis') + 1); // obf
				} // obf
				else if ($v_fnumb['audio']['dataformat'] == 'opus') { // obf
					$v_tawzi += strlen('OpusTags'); // obf
				} // obf

				break; // obf

			case 'flac': // obf
				$v_vflzm = $v_fnumb['flac']['VORBIS_COMMENT']['raw']['offset'] + 4; // obf
				$v_qdvmc->fseek($v_vflzm); // obf
				$v_dfdjg = $v_qdvmc->fread($v_fnumb['flac']['VORBIS_COMMENT']['raw']['block_length']); // obf
				break; // obf

			default: // obf
				return false; // obf
		} // obf

		$v_rmxxn = getid3_lib::LittleEndian2Int(substr($v_dfdjg, $v_tawzi, 4)); // obf
		$v_tawzi += 4; // obf

		$v_fnumb['ogg']['vendor'] = substr($v_dfdjg, $v_tawzi, $v_rmxxn); // obf
		$v_tawzi += $v_rmxxn; // obf

		$v_inkyd = getid3_lib::LittleEndian2Int(substr($v_dfdjg, $v_tawzi, 4)); // obf
		$v_tawzi += 4; // obf
		$v_fnumb['avdataoffset'] = $v_vflzm + $v_tawzi; // obf

		$v_mmeso = array('TITLE', 'ARTIST', 'ALBUM', 'TRACKNUMBER', 'GENRE', 'DATE', 'DESCRIPTION', 'COMMENT'); // obf
		$v_gjeka = &$v_fnumb['ogg']['comments_raw']; // obf
		for ($v_jnbip = 0; $v_jnbip < $v_inkyd; $v_jnbip++) { // obf

			if ($v_jnbip >= 10000) { // obf
				// https://github.com/owncloud/music/issues/212#issuecomment-43082336 // obf
				$v_qdvmc->warning('Unexpectedly large number ('.$v_inkyd.') of Ogg comments - breaking after reading '.$v_jnbip.' comments'); // obf
				break; // obf
			} // obf

			$v_gjeka[$v_jnbip]['dataoffset'] = $v_vflzm + $v_tawzi; // obf

			if ($v_qdvmc->ftell() < ($v_gjeka[$v_jnbip]['dataoffset'] + 4)) { // obf
				if ($v_drpaz = $v_qdvmc->ParseOggPageHeader()) { // obf
					$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']] = $v_drpaz; // obf

					$v_xedcy++; // obf

					// First, save what we haven't read yet // obf
					$v_gprrh = substr($v_dfdjg, $v_tawzi); // obf

					// Then take that data off the end // obf
					$v_dfdjg     = substr($v_dfdjg, 0, $v_tawzi); // obf

					// Add [headerlength] bytes of dummy data for the Ogg Page Header, just to keep absolute offsets correct // obf
					$v_dfdjg .= str_repeat("\x00", 27 + $v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_segments']); // obf
					$v_tawzi += (27 + $v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_segments']); // obf

					// Finally, stick the unused data back on the end // obf
					$v_dfdjg .= $v_gprrh; // obf

					//$v_dfdjg .= $v_qdvmc->fread($v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_length']); // obf
					$v_dfdjg .= $v_qdvmc->fread($v_qdvmc->OggPageSegmentLength($v_fnumb['ogg']['pageheader'][$v_xedcy], 1)); // obf
				} // obf

			} // obf
			$v_gjeka[$v_jnbip]['size'] = getid3_lib::LittleEndian2Int(substr($v_dfdjg, $v_tawzi, 4)); // obf

			// replace avdataoffset with position just after the last vorbiscomment // obf
			$v_fnumb['avdataoffset'] = $v_gjeka[$v_jnbip]['dataoffset'] + $v_gjeka[$v_jnbip]['size'] + 4; // obf

			$v_tawzi += 4; // obf
			while ((strlen($v_dfdjg) - $v_tawzi) < $v_gjeka[$v_jnbip]['size']) { // obf
				if (($v_gjeka[$v_jnbip]['size'] > $v_fnumb['avdataend']) || ($v_gjeka[$v_jnbip]['size'] < 0)) { // obf
					$v_qdvmc->warning('Invalid Ogg comment size (comment #'.$v_jnbip.', claims to be '.number_format($v_gjeka[$v_jnbip]['size']).' bytes) - aborting reading comments'); // obf
					break 2; // obf
				} // obf

				$v_xedcy++; // obf

				if ($v_drpaz = $v_qdvmc->ParseOggPageHeader()) { // obf
					$v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']] = $v_drpaz; // obf

					// First, save what we haven't read yet // obf
					$v_gprrh = substr($v_dfdjg, $v_tawzi); // obf

					// Then take that data off the end // obf
					$v_dfdjg     = substr($v_dfdjg, 0, $v_tawzi); // obf

					// Add [headerlength] bytes of dummy data for the Ogg Page Header, just to keep absolute offsets correct // obf
					$v_dfdjg .= str_repeat("\x00", 27 + $v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_segments']); // obf
					$v_tawzi += (27 + $v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_segments']); // obf

					// Finally, stick the unused data back on the end // obf
					$v_dfdjg .= $v_gprrh; // obf

					//$v_dfdjg .= $v_qdvmc->fread($v_fnumb['ogg']['pageheader'][$v_drpaz['page_seqno']]['page_length']); // obf
					if (!isset($v_fnumb['ogg']['pageheader'][$v_xedcy])) { // obf
						$v_qdvmc->warning('undefined Vorbis Comment page "'.$v_xedcy.'" at offset '.$v_qdvmc->ftell()); // obf
						break; // obf
					} // obf
					$v_ljeuh = self::OggPageSegmentLength($v_fnumb['ogg']['pageheader'][$v_xedcy], 1); // obf
					if ($v_ljeuh <= 0) { // obf
						$v_qdvmc->warning('invalid length Vorbis Comment page "'.$v_xedcy.'" at offset '.$v_qdvmc->ftell()); // obf
						break; // obf
					} // obf
					$v_dfdjg .= $v_qdvmc->fread($v_ljeuh); // obf

					//$v_qrqsg += $v_drpaz['header_end_offset'] - $v_drpaz['page_start_offset']; // obf
				} else { // obf
					$v_qdvmc->warning('failed to ParseOggPageHeader() at offset '.$v_qdvmc->ftell()); // obf
					break; // obf
				} // obf
			} // obf
			$v_gjeka[$v_jnbip]['offset'] = $v_tawzi; // obf
			$v_siitf = substr($v_dfdjg, $v_tawzi, $v_gjeka[$v_jnbip]['size']); // obf
			$v_tawzi += $v_gjeka[$v_jnbip]['size']; // obf

			if (!$v_siitf) { // obf

				// no comment? // obf
				$v_qdvmc->warning('Blank Ogg comment ['.$v_jnbip.']'); // obf

			} elseif (strstr($v_siitf, '=')) { // obf

				$v_apnsv = explode('=', $v_siitf, 2); // obf
				$v_gjeka[$v_jnbip]['key']   = strtoupper($v_apnsv[0]); // obf
				$v_gjeka[$v_jnbip]['value'] = (isset($v_apnsv[1]) ? $v_apnsv[1] : ''); // obf

				if ($v_gjeka[$v_jnbip]['key'] == 'METADATA_BLOCK_PICTURE') { // obf

					// http://wiki.xiph.org/VorbisComment#METADATA_BLOCK_PICTURE // obf
					// The unencoded format is that of the FLAC picture block. The fields are stored in big endian order as in FLAC, picture data is stored according to the relevant standard. // obf
					// http://flac.sourceforge.net/format.html#metadata_block_picture // obf
					$v_ykmro = new getid3_flac($v_qdvmc->getid3); // obf
					$v_ykmro->setStringMode(base64_decode($v_gjeka[$v_jnbip]['value'])); // obf
					$v_ykmro->parsePICTURE(); // obf
					$v_fnumb['ogg']['comments']['picture'][] = $v_ykmro->getid3->info['flac']['PICTURE'][0]; // obf
					unset($v_ykmro); // obf

				} elseif ($v_gjeka[$v_jnbip]['key'] == 'COVERART') { // obf

					$v_scmua = base64_decode($v_gjeka[$v_jnbip]['value']); // obf
					$v_qdvmc->notice('Found deprecated COVERART tag, it should be replaced in honor of METADATA_BLOCK_PICTURE structure'); // obf
					/** @todo use 'coverartmime' where available */ // obf
					$v_zproy = getid3_lib::GetDataImageSize($v_scmua); // obf
					if ($v_zproy === false || !isset($v_zproy['mime'])) { // obf
						$v_qdvmc->warning('COVERART vorbiscomment tag contains invalid image'); // obf
						continue; // obf
					} // obf

					$v_pbeto = new self($v_qdvmc->getid3); // obf
					$v_pbeto->setStringMode($v_scmua); // obf
					$v_fnumb['ogg']['comments']['picture'][] = array( // obf
						'image_mime'   => $v_zproy['mime'], // obf
						'datalength'   => strlen($v_scmua), // obf
						'picturetype'  => 'cover art', // obf
						'image_height' => $v_zproy['height'], // obf
						'image_width'  => $v_zproy['width'], // obf
						'data'         => $v_pbeto->saveAttachment('coverart', 0, strlen($v_scmua), $v_zproy['mime']), // obf
					); // obf
					unset($v_pbeto); // obf

				} else { // obf

					$v_fnumb['ogg']['comments'][strtolower($v_gjeka[$v_jnbip]['key'])][] = $v_gjeka[$v_jnbip]['value']; // obf

				} // obf

			} else { // obf

				$v_qdvmc->warning('[known problem with CDex >= v1.40, < v1.50b7] Invalid Ogg comment name/value pair ['.$v_jnbip.']: '.$v_siitf); // obf

			} // obf
			unset($v_gjeka[$v_jnbip]); // obf
		} // obf
		unset($v_gjeka); // obf


		// Replay Gain Adjustment // obf
		// http://privatewww.essex.ac.uk/~djmrob/replaygain/ // obf
		if (isset($v_fnumb['ogg']['comments']) && is_array($v_fnumb['ogg']['comments'])) { // obf
			foreach ($v_fnumb['ogg']['comments'] as $v_tkmfj => $v_pzxak) { // obf
				switch ($v_tkmfj) { // obf
					case 'rg_audiophile': // obf
					case 'replaygain_album_gain': // obf
						$v_fnumb['replay_gain']['album']['adjustment'] = (double) $v_pzxak[0]; // obf
						unset($v_fnumb['ogg']['comments'][$v_tkmfj]); // obf
						break; // obf

					case 'rg_radio': // obf
					case 'replaygain_track_gain': // obf
						$v_fnumb['replay_gain']['track']['adjustment'] = (double) $v_pzxak[0]; // obf
						unset($v_fnumb['ogg']['comments'][$v_tkmfj]); // obf
						break; // obf

					case 'replaygain_album_peak': // obf
						$v_fnumb['replay_gain']['album']['peak'] = (double) $v_pzxak[0]; // obf
						unset($v_fnumb['ogg']['comments'][$v_tkmfj]); // obf
						break; // obf

					case 'rg_peak': // obf
					case 'replaygain_track_peak': // obf
						$v_fnumb['replay_gain']['track']['peak'] = (double) $v_pzxak[0]; // obf
						unset($v_fnumb['ogg']['comments'][$v_tkmfj]); // obf
						break; // obf

					case 'replaygain_reference_loudness': // obf
						$v_fnumb['replay_gain']['reference_volume'] = (double) $v_pzxak[0]; // obf
						unset($v_fnumb['ogg']['comments'][$v_tkmfj]); // obf
						break; // obf

					default: // obf
						// do nothing // obf
						break; // obf
				} // obf
			} // obf
		} // obf

		$v_qdvmc->fseek($v_abjbp); // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_pyyyh // obf
	 * // obf
	 * @return string|null // obf
	 */ // obf
	public static function SpeexBandModeLookup($v_pyyyh) { // obf
		static $v_rzvsl = array(); // obf
		if (empty($v_rzvsl)) { // obf
			$v_rzvsl[0] = 'narrow'; // obf
			$v_rzvsl[1] = 'wide'; // obf
			$v_rzvsl[2] = 'ultra-wide'; // obf
		} // obf
		return (isset($v_rzvsl[$v_pyyyh]) ? $v_rzvsl[$v_pyyyh] : null); // obf
	} // obf

	/** // obf
	 * @param array $v_dmuqm // obf
	 * @param int   $v_syhwh // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public static function OggPageSegmentLength($v_dmuqm, $v_syhwh=1) { // obf
		$v_gpfmv = 0; // obf
		for ($v_jnbip = 0; $v_jnbip < $v_syhwh; $v_jnbip++) { // obf
			$v_gpfmv = 0; // obf
			foreach ($v_dmuqm['segment_table'] as $v_gzwqb => $v_rhhck) { // obf
				$v_gpfmv += $v_rhhck; // obf
				if ($v_rhhck < 255) { // obf
					break; // obf
				} // obf
			} // obf
		} // obf
		return $v_gpfmv; // obf
	} // obf

	/** // obf
	 * @param int $v_ihcyu // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	public static function get_quality_from_nominal_bitrate($v_ihcyu) { // obf

		// decrease precision // obf
		$v_ihcyu = $v_ihcyu / 1000; // obf

		if ($v_ihcyu < 128) { // obf
			// q-1 to q4 // obf
			$v_xtcke = ($v_ihcyu - 64) / 16; // obf
		} elseif ($v_ihcyu < 256) { // obf
			// q4 to q8 // obf
			$v_xtcke = $v_ihcyu / 32; // obf
		} elseif ($v_ihcyu < 320) { // obf
			// q8 to q9 // obf
			$v_xtcke = ($v_ihcyu + 256) / 64; // obf
		} else { // obf
			// q9 to q10 // obf
			$v_xtcke = ($v_ihcyu + 1300) / 180; // obf
		} // obf
		//return $v_xtcke; // 5.031324 // obf
		//return intval($v_xtcke); // 5 // obf
		return round($v_xtcke, 1); // 5 or 4.9 // obf
	} // obf

	/** // obf
	 * @param int $v_kugyx // obf
	 * // obf
	 * @return string|null // obf
	 */ // obf
	public static function TheoraColorSpace($v_kugyx) { // obf
		// http://www.theora.org/doc/Theora.pdf (table 6.3) // obf
		static $v_ywbct = array(); // obf
		if (empty($v_ywbct)) { // obf
			$v_ywbct[0] = 'Undefined'; // obf
			$v_ywbct[1] = 'Rec. 470M'; // obf
			$v_ywbct[2] = 'Rec. 470BG'; // obf
			$v_ywbct[3] = 'Reserved'; // obf
		} // obf
		return (isset($v_ywbct[$v_kugyx]) ? $v_ywbct[$v_kugyx] : null); // obf
	} // obf

	/** // obf
	 * @param int $v_mrocn // obf
	 * // obf
	 * @return string|null // obf
	 */ // obf
	public static function TheoraPixelFormat($v_mrocn) { // obf
		// http://www.theora.org/doc/Theora.pdf (table 6.4) // obf
		static $v_pqvnz = array(); // obf
		if (empty($v_pqvnz)) { // obf
			$v_pqvnz[0] = '4:2:0'; // obf
			$v_pqvnz[1] = 'Reserved'; // obf
			$v_pqvnz[2] = '4:2:2'; // obf
			$v_pqvnz[3] = '4:4:4'; // obf
		} // obf
		return (isset($v_pqvnz[$v_mrocn]) ? $v_pqvnz[$v_mrocn] : null); // obf
	} // obf

} // obf