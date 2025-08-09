

<?php // obf
///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio-video.asf.php                                  // // obf
// module for analyzing ASF, WMA and WMV files                 // // obf
// dependencies: module.audio-video.riff.php                   // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio-video.riff.php', __FILE__, true); // obf

class getid3_asf extends getid3_handler // obf
{ // obf
	protected static $v_xjuaj = array( // obf
		1 => 'Nearest Past Data Packet', // obf
		2 => 'Nearest Past Media Object', // obf
		3 => 'Nearest Past Cleanpoint' // obf
	); // obf

	protected static $v_ahubh = array( // obf
		1 => 'Nearest Past Data Packet', // obf
		2 => 'Nearest Past Media Object', // obf
		3 => 'Nearest Past Cleanpoint', // obf
		0xFF => 'Frame Number Offset' // obf
	); // obf

	protected static $v_hxrus = array( // obf
		2 => 'Nearest Past Media Object', // obf
		3 => 'Nearest Past Cleanpoint' // obf
	); // obf

	/** // obf
	 * @param getID3 $v_yaheo // obf
	 */ // obf
	public function __construct(getID3 $v_yaheo) { // obf
		parent::__construct($v_yaheo);  // extends getid3_handler::__construct() // obf

		// initialize all GUID constants // obf
		$v_tfhzl = $v_tqdtj->KnownGUIDs(); // obf
		foreach ($v_tfhzl as $v_djojo => $v_npvum) { // obf
			if (!defined($v_djojo)) { // obf
				define($v_djojo, $v_tqdtj->GUIDtoBytestring($v_npvum)); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_sjlhl = &$v_tqdtj->getid3->info; // obf

		// Shortcuts // obf
		$v_lfubp = &$v_sjlhl['audio']; // obf
		$v_vvlxt = &$v_sjlhl['video']; // obf
		$v_sjlhl['asf']  = array(); // obf
		$v_oycny = &$v_sjlhl['asf']; // obf
		$v_oycny['comments'] = array(); // obf
		$v_mukeu    = &$v_oycny['comments']; // obf
		$v_oycny['header_object'] = array(); // obf
		$v_ashjb     = &$v_oycny['header_object']; // obf


		// ASF structure: // obf
		// * Header Object [required] // obf
		//   * File Properties Object [required]   (global file attributes) // obf
		//   * Stream Properties Object [required] (defines media stream & characteristics) // obf
		//   * Header Extension Object [required]  (additional functionality) // obf
		//   * Content Description Object          (bibliographic information) // obf
		//   * Script Command Object               (commands for during playback) // obf
		//   * Marker Object                       (named jumped points within the file) // obf
		// * Data Object [required] // obf
		//   * Data Packets // obf
		// * Index Object // obf

		// Header Object: (mandatory, one only) // obf
		// Field Name                   Field Type   Size (bits) // obf
		// Object ID                    GUID         128             // GUID for header object - GETID3_ASF_Header_Object // obf
		// Object Size                  QWORD        64              // size of header object, including 30 bytes of Header Object header // obf
		// Number of Header Objects     DWORD        32              // number of objects in header object // obf
		// Reserved1                    BYTE         8               // hardcoded: 0x01 // obf
		// Reserved2                    BYTE         8               // hardcoded: 0x02 // obf

		$v_sjlhl['fileformat'] = 'asf'; // obf

		$v_tqdtj->fseek($v_sjlhl['avdataoffset']); // obf
		$v_cqvhs = $v_tqdtj->fread(30); // obf

		$v_ashjb['objectid']      = substr($v_cqvhs, 0, 16); // obf
		$v_ashjb['objectid_guid'] = $v_tqdtj->BytestringToGUID($v_ashjb['objectid']); // obf
		if ($v_ashjb['objectid'] != GETID3_ASF_Header_Object) { // obf
			unset($v_sjlhl['fileformat'], $v_sjlhl['asf']); // obf
			return $v_tqdtj->error('ASF header GUID {'.$v_tqdtj->BytestringToGUID($v_ashjb['objectid']).'} does not match expected "GETID3_ASF_Header_Object" GUID {'.$v_tqdtj->BytestringToGUID(GETID3_ASF_Header_Object).'}'); // obf
		} // obf
		$v_ashjb['objectsize']    = getid3_lib::LittleEndian2Int(substr($v_cqvhs, 16, 8)); // obf
		$v_ashjb['headerobjects'] = getid3_lib::LittleEndian2Int(substr($v_cqvhs, 24, 4)); // obf
		$v_ashjb['reserved1']     = getid3_lib::LittleEndian2Int(substr($v_cqvhs, 28, 1)); // obf
		$v_ashjb['reserved2']     = getid3_lib::LittleEndian2Int(substr($v_cqvhs, 29, 1)); // obf

		$v_qeixb = $v_tqdtj->ftell(); // obf
		$v_cifvx = $v_tqdtj->fread($v_ashjb['objectsize'] - 30); // obf
		$v_gtrtc = 0; // obf
		$v_lkprn = array(); // obf
		$v_npocm = array(); // obf
		$v_sooff = array(); // obf

		for ($v_gwium = 0; $v_gwium < $v_ashjb['headerobjects']; $v_gwium++) { // obf
			$v_jeztb = substr($v_cifvx, $v_gtrtc, 16); // obf
			$v_gtrtc += 16; // obf
			$v_gewik = $v_tqdtj->BytestringToGUID($v_jeztb); // obf
			$v_vkpdq = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
			$v_gtrtc += 8; // obf
			switch ($v_jeztb) { // obf

				case GETID3_ASF_File_Properties_Object: // obf
					// File Properties Object: (mandatory, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for file properties object - GETID3_ASF_File_Properties_Object // obf
					// Object Size                  QWORD        64              // size of file properties object, including 104 bytes of File Properties Object header // obf
					// File ID                      GUID         128             // unique ID - identical to File ID in Data Object // obf
					// File Size                    QWORD        64              // entire file in bytes. Invalid if Broadcast Flag == 1 // obf
					// Creation Date                QWORD        64              // date & time of file creation. Maybe invalid if Broadcast Flag == 1 // obf
					// Data Packets Count           QWORD        64              // number of data packets in Data Object. Invalid if Broadcast Flag == 1 // obf
					// Play Duration                QWORD        64              // playtime, in 100-nanosecond units. Invalid if Broadcast Flag == 1 // obf
					// Send Duration                QWORD        64              // time needed to send file, in 100-nanosecond units. Players can ignore this value. Invalid if Broadcast Flag == 1 // obf
					// Preroll                      QWORD        64              // time to buffer data before starting to play file, in 1-millisecond units. If <> 0, PlayDuration and PresentationTime have been offset by this amount // obf
					// Flags                        DWORD        32              // // obf
					// * Broadcast Flag             bits         1  (0x01)       // file is currently being written, some header values are invalid // obf
					// * Seekable Flag              bits         1  (0x02)       // is file seekable // obf
					// * Reserved                   bits         30 (0xFFFFFFFC) // reserved - set to zero // obf
					// Minimum Data Packet Size     DWORD        32              // in bytes. should be same as Maximum Data Packet Size. Invalid if Broadcast Flag == 1 // obf
					// Maximum Data Packet Size     DWORD        32              // in bytes. should be same as Minimum Data Packet Size. Invalid if Broadcast Flag == 1 // obf
					// Maximum Bitrate              DWORD        32              // maximum instantaneous bitrate in bits per second for entire file, including all data streams and ASF overhead // obf

					// shortcut // obf
					$v_oycny['file_properties_object'] = array(); // obf
					$v_nrusc      = &$v_oycny['file_properties_object']; // obf

					$v_nrusc['offset']             = $v_qeixb + $v_gtrtc; // obf
					$v_nrusc['objectid']           = $v_jeztb; // obf
					$v_nrusc['objectid_guid']      = $v_gewik; // obf
					$v_nrusc['objectsize']         = $v_vkpdq; // obf
					$v_nrusc['fileid']             = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_nrusc['fileid_guid']        = $v_tqdtj->BytestringToGUID($v_nrusc['fileid']); // obf
					$v_nrusc['filesize']           = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
					$v_gtrtc += 8; // obf
					$v_nrusc['creation_date']      = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
					$v_nrusc['creation_date_unix'] = $v_tqdtj->FILETIMEtoUNIXtime($v_nrusc['creation_date']); // obf
					$v_gtrtc += 8; // obf
					$v_nrusc['data_packets']       = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
					$v_gtrtc += 8; // obf
					$v_nrusc['play_duration']      = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
					$v_gtrtc += 8; // obf
					$v_nrusc['send_duration']      = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
					$v_gtrtc += 8; // obf
					$v_nrusc['preroll']            = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
					$v_gtrtc += 8; // obf
					$v_nrusc['flags_raw']          = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_nrusc['flags']['broadcast'] = (bool) ($v_nrusc['flags_raw'] & 0x0001); // obf
					$v_nrusc['flags']['seekable']  = (bool) ($v_nrusc['flags_raw'] & 0x0002); // obf

					$v_nrusc['min_packet_size']    = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_nrusc['max_packet_size']    = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_nrusc['max_bitrate']        = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf

					if ($v_nrusc['flags']['broadcast']) { // obf

						// broadcast flag is set, some values invalid // obf
						unset($v_nrusc['filesize']); // obf
						unset($v_nrusc['data_packets']); // obf
						unset($v_nrusc['play_duration']); // obf
						unset($v_nrusc['send_duration']); // obf
						unset($v_nrusc['min_packet_size']); // obf
						unset($v_nrusc['max_packet_size']); // obf

					} else { // obf

						// broadcast flag NOT set, perform calculations // obf
						$v_sjlhl['playtime_seconds'] = ($v_nrusc['play_duration'] / 10000000) - ($v_nrusc['preroll'] / 1000); // obf

						//$v_sjlhl['bitrate'] = $v_nrusc['max_bitrate']; // obf
						$v_sjlhl['bitrate'] = getid3_lib::SafeDiv($v_nrusc['filesize'] * 8, $v_sjlhl['playtime_seconds']); // obf
					} // obf
					break; // obf

				case GETID3_ASF_Stream_Properties_Object: // obf
					// Stream Properties Object: (mandatory, one per media stream) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for stream properties object - GETID3_ASF_Stream_Properties_Object // obf
					// Object Size                  QWORD        64              // size of stream properties object, including 78 bytes of Stream Properties Object header // obf
					// Stream Type                  GUID         128             // GETID3_ASF_Audio_Media, GETID3_ASF_Video_Media or GETID3_ASF_Command_Media // obf
					// Error Correction Type        GUID         128             // GETID3_ASF_Audio_Spread for audio-only streams, GETID3_ASF_No_Error_Correction for other stream types // obf
					// Time Offset                  QWORD        64              // 100-nanosecond units. typically zero. added to all timestamps of samples in the stream // obf
					// Type-Specific Data Length    DWORD        32              // number of bytes for Type-Specific Data field // obf
					// Error Correction Data Length DWORD        32              // number of bytes for Error Correction Data field // obf
					// Flags                        WORD         16              // // obf
					// * Stream Number              bits         7 (0x007F)      // number of this stream.  1 <= valid <= 127 // obf
					// * Reserved                   bits         8 (0x7F80)      // reserved - set to zero // obf
					// * Encrypted Content Flag     bits         1 (0x8000)      // stream contents encrypted if set // obf
					// Reserved                     DWORD        32              // reserved - set to zero // obf
					// Type-Specific Data           BYTESTREAM   variable        // type-specific format data, depending on value of Stream Type // obf
					// Error Correction Data        BYTESTREAM   variable        // error-correction-specific format data, depending on value of Error Correct Type // obf

					// There is one GETID3_ASF_Stream_Properties_Object for each stream (audio, video) but the // obf
					// stream number isn't known until halfway through decoding the structure, hence it // obf
					// it is decoded to a temporary variable and then stuck in the appropriate index later // obf

					$v_sooff['offset']             = $v_qeixb + $v_gtrtc; // obf
					$v_sooff['objectid']           = $v_jeztb; // obf
					$v_sooff['objectid_guid']      = $v_gewik; // obf
					$v_sooff['objectsize']         = $v_vkpdq; // obf
					$v_sooff['stream_type']        = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_sooff['stream_type_guid']   = $v_tqdtj->BytestringToGUID($v_sooff['stream_type']); // obf
					$v_sooff['error_correct_type'] = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_sooff['error_correct_guid'] = $v_tqdtj->BytestringToGUID($v_sooff['error_correct_type']); // obf
					$v_sooff['time_offset']        = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
					$v_gtrtc += 8; // obf
					$v_sooff['type_data_length']   = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_sooff['error_data_length']  = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_sooff['flags_raw']          = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_dapnd               = $v_sooff['flags_raw'] & 0x007F; // obf
					$v_sooff['flags']['encrypted'] = (bool) ($v_sooff['flags_raw'] & 0x8000); // obf

					$v_gtrtc += 4; // reserved - DWORD // obf
					$v_sooff['type_specific_data'] = substr($v_cifvx, $v_gtrtc, $v_sooff['type_data_length']); // obf
					$v_gtrtc += $v_sooff['type_data_length']; // obf
					$v_sooff['error_correct_data'] = substr($v_cifvx, $v_gtrtc, $v_sooff['error_data_length']); // obf
					$v_gtrtc += $v_sooff['error_data_length']; // obf

					switch ($v_sooff['stream_type']) { // obf

						case GETID3_ASF_Audio_Media: // obf
							$v_lfubp['dataformat']   = (!empty($v_lfubp['dataformat'])   ? $v_lfubp['dataformat']   : 'asf'); // obf
							$v_lfubp['bitrate_mode'] = (!empty($v_lfubp['bitrate_mode']) ? $v_lfubp['bitrate_mode'] : 'cbr'); // obf

							$v_plfvu = getid3_riff::parseWAVEFORMATex(substr($v_sooff['type_specific_data'], 0, 16)); // obf
							unset($v_plfvu['raw']); // obf
							$v_lfubp = getid3_lib::array_merge_noclobber($v_plfvu, $v_lfubp); // obf
							break; // obf

						case GETID3_ASF_Video_Media: // obf
							$v_vvlxt['dataformat']   = (!empty($v_vvlxt['dataformat'])   ? $v_vvlxt['dataformat']   : 'asf'); // obf
							$v_vvlxt['bitrate_mode'] = (!empty($v_vvlxt['bitrate_mode']) ? $v_vvlxt['bitrate_mode'] : 'cbr'); // obf
							break; // obf

						case GETID3_ASF_Command_Media: // obf
						default: // obf
							// do nothing // obf
							break; // obf

					} // obf

					$v_oycny['stream_properties_object'][$v_dapnd] = $v_sooff; // obf
					unset($v_sooff); // clear for next stream, if any // obf
					break; // obf

				case GETID3_ASF_Header_Extension_Object: // obf
					// Header Extension Object: (mandatory, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Header Extension object - GETID3_ASF_Header_Extension_Object // obf
					// Object Size                  QWORD        64              // size of Header Extension object, including 46 bytes of Header Extension Object header // obf
					// Reserved Field 1             GUID         128             // hardcoded: GETID3_ASF_Reserved_1 // obf
					// Reserved Field 2             WORD         16              // hardcoded: 0x00000006 // obf
					// Header Extension Data Size   DWORD        32              // in bytes. valid: 0, or > 24. equals object size minus 46 // obf
					// Header Extension Data        BYTESTREAM   variable        // array of zero or more extended header objects // obf

					// shortcut // obf
					$v_oycny['header_extension_object'] = array(); // obf
					$v_srjsr      = &$v_oycny['header_extension_object']; // obf

					$v_srjsr['offset']              = $v_qeixb + $v_gtrtc; // obf
					$v_srjsr['objectid']            = $v_jeztb; // obf
					$v_srjsr['objectid_guid']       = $v_gewik; // obf
					$v_srjsr['objectsize']          = $v_vkpdq; // obf
					$v_srjsr['reserved_1']          = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_srjsr['reserved_1_guid']     = $v_tqdtj->BytestringToGUID($v_srjsr['reserved_1']); // obf
					if ($v_srjsr['reserved_1'] != GETID3_ASF_Reserved_1) { // obf
						$v_tqdtj->warning('header_extension_object.reserved_1 GUID ('.$v_tqdtj->BytestringToGUID($v_srjsr['reserved_1']).') does not match expected "GETID3_ASF_Reserved_1" GUID ('.$v_tqdtj->BytestringToGUID(GETID3_ASF_Reserved_1).')'); // obf
						//return false; // obf
						break; // obf
					} // obf
					$v_srjsr['reserved_2']          = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					if ($v_srjsr['reserved_2'] != 6) { // obf
						$v_tqdtj->warning('header_extension_object.reserved_2 ('.$v_srjsr['reserved_2'].') does not match expected value of "6"'); // obf
						//return false; // obf
						break; // obf
					} // obf
					$v_srjsr['extension_data_size'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_srjsr['extension_data']      =                              substr($v_cifvx, $v_gtrtc, $v_srjsr['extension_data_size']); // obf
					$v_lclyx = 0; // obf
					$v_srjsr['extension_data_parsed'] = $v_tqdtj->HeaderExtensionObjectDataParse($v_srjsr['extension_data'], $v_lclyx); // obf
					if ($v_lclyx === 0) { // obf
						unset($v_srjsr['extension_data']); // obf
					} // obf
					$v_gtrtc += $v_srjsr['extension_data_size']; // obf
					break; // obf

				case GETID3_ASF_Codec_List_Object: // obf
					// Codec List Object: (optional, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Codec List object - GETID3_ASF_Codec_List_Object // obf
					// Object Size                  QWORD        64              // size of Codec List object, including 44 bytes of Codec List Object header // obf
					// Reserved                     GUID         128             // hardcoded: 86D15241-311D-11D0-A3A4-00A0C90348F6 // obf
					// Codec Entries Count          DWORD        32              // number of entries in Codec Entries array // obf
					// Codec Entries                array of:    variable        // // obf
					// * Type                       WORD         16              // 0x0001 = Video Codec, 0x0002 = Audio Codec, 0xFFFF = Unknown Codec // obf
					// * Codec Name Length          WORD         16              // number of Unicode characters stored in the Codec Name field // obf
					// * Codec Name                 WCHAR        variable        // array of Unicode characters - name of codec used to create the content // obf
					// * Codec Description Length   WORD         16              // number of Unicode characters stored in the Codec Description field // obf
					// * Codec Description          WCHAR        variable        // array of Unicode characters - description of format used to create the content // obf
					// * Codec Information Length   WORD         16              // number of Unicode characters stored in the Codec Information field // obf
					// * Codec Information          BYTESTREAM   variable        // opaque array of information bytes about the codec used to create the content // obf

					// shortcut // obf
					$v_oycny['codec_list_object'] = array(); // obf
					/** @var mixed[] $v_npocm */ // obf
					$v_npocm      = &$v_oycny['codec_list_object']; // obf

					$v_npocm['offset']                    = $v_qeixb + $v_gtrtc; // obf
					$v_npocm['objectid']                  = $v_jeztb; // obf
					$v_npocm['objectid_guid']             = $v_gewik; // obf
					$v_npocm['objectsize']                = $v_vkpdq; // obf
					$v_npocm['reserved']                  = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_npocm['reserved_guid']             = $v_tqdtj->BytestringToGUID($v_npocm['reserved']); // obf
					if ($v_npocm['reserved'] != $v_tqdtj->GUIDtoBytestring('86D15241-311D-11D0-A3A4-00A0C90348F6')) { // obf
						$v_tqdtj->warning('codec_list_object.reserved GUID {'.$v_tqdtj->BytestringToGUID($v_npocm['reserved']).'} does not match expected "GETID3_ASF_Reserved_1" GUID {86D15241-311D-11D0-A3A4-00A0C90348F6}'); // obf
						//return false; // obf
						break; // obf
					} // obf
					$v_npocm['codec_entries_count'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					if ($v_npocm['codec_entries_count'] > 0) { // obf
						$v_npocm['codec_entries'] = array(); // obf
					} // obf
					$v_gtrtc += 4; // obf
					for ($v_lslap = 0; $v_lslap < $v_npocm['codec_entries_count']; $v_lslap++) { // obf
						// shortcut // obf
						$v_npocm['codec_entries'][$v_lslap] = array(); // obf
						$v_ldbzv = &$v_npocm['codec_entries'][$v_lslap]; // obf

						$v_ldbzv['type_raw'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_ldbzv['type'] = self::codecListObjectTypeLookup($v_ldbzv['type_raw']); // obf

						$v_fojak = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)) * 2; // 2 bytes per character // obf
						$v_gtrtc += 2; // obf
						$v_ldbzv['name'] = substr($v_cifvx, $v_gtrtc, $v_fojak); // obf
						$v_gtrtc += $v_fojak; // obf

						$v_aayna = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)) * 2; // 2 bytes per character // obf
						$v_gtrtc += 2; // obf
						$v_ldbzv['description'] = substr($v_cifvx, $v_gtrtc, $v_aayna); // obf
						$v_gtrtc += $v_aayna; // obf

						$v_oazjj = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_ldbzv['information'] = substr($v_cifvx, $v_gtrtc, $v_oazjj); // obf
						$v_gtrtc += $v_oazjj; // obf

						if ($v_ldbzv['type_raw'] == 2) { // audio codec // obf

							if (strpos($v_ldbzv['description'], ',') === false) { // obf
								$v_tqdtj->warning('[asf][codec_list_object][codec_entries]['.$v_lslap.'][description] expected to contain comma-separated list of parameters: "'.$v_ldbzv['description'].'"'); // obf
							} else { // obf

								list($v_rxczp, $v_nckhh, $v_ryzum) = explode(',', $v_tqdtj->TrimConvert($v_ldbzv['description'])); // obf
								$v_lfubp['codec'] = $v_tqdtj->TrimConvert($v_ldbzv['name']); // obf

								if (!isset($v_lfubp['bitrate']) && strstr($v_rxczp, 'kbps')) { // obf
									$v_lfubp['bitrate'] = (int) trim(str_replace('kbps', '', $v_rxczp)) * 1000; // obf
								} // obf
								//if (!isset($v_vvlxt['bitrate']) && isset($v_lfubp['bitrate']) && isset($v_oycny['file_properties_object']['max_bitrate']) && ($v_npocm['codec_entries_count'] > 1)) { // obf
								if (empty($v_vvlxt['bitrate']) && !empty($v_lfubp['bitrate']) && !empty($v_sjlhl['bitrate'])) { // obf
									//$v_vvlxt['bitrate'] = $v_oycny['file_properties_object']['max_bitrate'] - $v_lfubp['bitrate']; // obf
									$v_vvlxt['bitrate'] = $v_sjlhl['bitrate'] - $v_lfubp['bitrate']; // obf
								} // obf

								$v_nckhh = (int) trim(str_replace('kHz', '', $v_nckhh)); // obf
								switch ($v_nckhh) { // obf
									case 8: // obf
									case 8000: // obf
										$v_lfubp['sample_rate'] = 8000; // obf
										break; // obf

									case 11: // obf
									case 11025: // obf
										$v_lfubp['sample_rate'] = 11025; // obf
										break; // obf

									case 12: // obf
									case 12000: // obf
										$v_lfubp['sample_rate'] = 12000; // obf
										break; // obf

									case 16: // obf
									case 16000: // obf
										$v_lfubp['sample_rate'] = 16000; // obf
										break; // obf

									case 22: // obf
									case 22050: // obf
										$v_lfubp['sample_rate'] = 22050; // obf
										break; // obf

									case 24: // obf
									case 24000: // obf
										$v_lfubp['sample_rate'] = 24000; // obf
										break; // obf

									case 32: // obf
									case 32000: // obf
										$v_lfubp['sample_rate'] = 32000; // obf
										break; // obf

									case 44: // obf
									case 441000: // obf
										$v_lfubp['sample_rate'] = 44100; // obf
										break; // obf

									case 48: // obf
									case 48000: // obf
										$v_lfubp['sample_rate'] = 48000; // obf
										break; // obf

									default: // obf
										$v_tqdtj->warning('unknown frequency: "'.$v_nckhh.'" ('.$v_tqdtj->TrimConvert($v_ldbzv['description']).')'); // obf
										break; // obf
								} // obf

								if (!isset($v_lfubp['channels'])) { // obf
									if (strstr($v_ryzum, 'stereo')) { // obf
										$v_lfubp['channels'] = 2; // obf
									} elseif (strstr($v_ryzum, 'mono')) { // obf
										$v_lfubp['channels'] = 1; // obf
									} // obf
								} // obf

							} // obf
						} // obf
					} // obf
					break; // obf

				case GETID3_ASF_Script_Command_Object: // obf
					// Script Command Object: (optional, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Script Command object - GETID3_ASF_Script_Command_Object // obf
					// Object Size                  QWORD        64              // size of Script Command object, including 44 bytes of Script Command Object header // obf
					// Reserved                     GUID         128             // hardcoded: 4B1ACBE3-100B-11D0-A39B-00A0C90348F6 // obf
					// Commands Count               WORD         16              // number of Commands structures in the Script Commands Objects // obf
					// Command Types Count          WORD         16              // number of Command Types structures in the Script Commands Objects // obf
					// Command Types                array of:    variable        // // obf
					// * Command Type Name Length   WORD         16              // number of Unicode characters for Command Type Name // obf
					// * Command Type Name          WCHAR        variable        // array of Unicode characters - name of a type of command // obf
					// Commands                     array of:    variable        // // obf
					// * Presentation Time          DWORD        32              // presentation time of that command, in milliseconds // obf
					// * Type Index                 WORD         16              // type of this command, as a zero-based index into the array of Command Types of this object // obf
					// * Command Name Length        WORD         16              // number of Unicode characters for Command Name // obf
					// * Command Name               WCHAR        variable        // array of Unicode characters - name of this command // obf

					// shortcut // obf
					$v_oycny['script_command_object'] = array(); // obf
					$v_unsey      = &$v_oycny['script_command_object']; // obf

					$v_unsey['offset']               = $v_qeixb + $v_gtrtc; // obf
					$v_unsey['objectid']             = $v_jeztb; // obf
					$v_unsey['objectid_guid']        = $v_gewik; // obf
					$v_unsey['objectsize']           = $v_vkpdq; // obf
					$v_unsey['reserved']             = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_unsey['reserved_guid']        = $v_tqdtj->BytestringToGUID($v_unsey['reserved']); // obf
					if ($v_unsey['reserved'] != $v_tqdtj->GUIDtoBytestring('4B1ACBE3-100B-11D0-A39B-00A0C90348F6')) { // obf
						$v_tqdtj->warning('script_command_object.reserved GUID {'.$v_tqdtj->BytestringToGUID($v_unsey['reserved']).'} does not match expected "GETID3_ASF_Reserved_1" GUID {4B1ACBE3-100B-11D0-A39B-00A0C90348F6}'); // obf
						//return false; // obf
						break; // obf
					} // obf
					$v_unsey['commands_count']       = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_unsey['command_types_count']  = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					for ($v_vmwid = 0; $v_vmwid < $v_unsey['command_types_count']; $v_vmwid++) { // obf
						$v_ppyzi = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)) * 2; // 2 bytes per character // obf
						$v_gtrtc += 2; // obf
						$v_unsey['command_types'][$v_vmwid]['name'] = substr($v_cifvx, $v_gtrtc, $v_ppyzi); // obf
						$v_gtrtc += $v_ppyzi; // obf
					} // obf
					for ($v_ozzbv = 0; $v_ozzbv < $v_unsey['commands_count']; $v_ozzbv++) { // obf
						$v_unsey['commands'][$v_ozzbv]['presentation_time']  = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
						$v_gtrtc += 4; // obf
						$v_unsey['commands'][$v_ozzbv]['type_index']         = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf

						$v_ppyzi = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)) * 2; // 2 bytes per character // obf
						$v_gtrtc += 2; // obf
						$v_unsey['commands'][$v_ozzbv]['name'] = substr($v_cifvx, $v_gtrtc, $v_ppyzi); // obf
						$v_gtrtc += $v_ppyzi; // obf
					} // obf
					break; // obf

				case GETID3_ASF_Marker_Object: // obf
					// Marker Object: (optional, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Marker object - GETID3_ASF_Marker_Object // obf
					// Object Size                  QWORD        64              // size of Marker object, including 48 bytes of Marker Object header // obf
					// Reserved                     GUID         128             // hardcoded: 4CFEDB20-75F6-11CF-9C0F-00A0C90349CB // obf
					// Markers Count                DWORD        32              // number of Marker structures in Marker Object // obf
					// Reserved                     WORD         16              // hardcoded: 0x0000 // obf
					// Name Length                  WORD         16              // number of bytes in the Name field // obf
					// Name                         WCHAR        variable        // name of the Marker Object // obf
					// Markers                      array of:    variable        // // obf
					// * Offset                     QWORD        64              // byte offset into Data Object // obf
					// * Presentation Time          QWORD        64              // in 100-nanosecond units // obf
					// * Entry Length               WORD         16              // length in bytes of (Send Time + Flags + Marker Description Length + Marker Description + Padding) // obf
					// * Send Time                  DWORD        32              // in milliseconds // obf
					// * Flags                      DWORD        32              // hardcoded: 0x00000000 // obf
					// * Marker Description Length  DWORD        32              // number of bytes in Marker Description field // obf
					// * Marker Description         WCHAR        variable        // array of Unicode characters - description of marker entry // obf
					// * Padding                    BYTESTREAM   variable        // optional padding bytes // obf

					// shortcut // obf
					$v_oycny['marker_object'] = array(); // obf
					$v_ikjkp     = &$v_oycny['marker_object']; // obf

					$v_ikjkp['offset']               = $v_qeixb + $v_gtrtc; // obf
					$v_ikjkp['objectid']             = $v_jeztb; // obf
					$v_ikjkp['objectid_guid']        = $v_gewik; // obf
					$v_ikjkp['objectsize']           = $v_vkpdq; // obf
					$v_ikjkp['reserved']             = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_ikjkp['reserved_guid']        = $v_tqdtj->BytestringToGUID($v_ikjkp['reserved']); // obf
					if ($v_ikjkp['reserved'] != $v_tqdtj->GUIDtoBytestring('4CFEDB20-75F6-11CF-9C0F-00A0C90349CB')) { // obf
						$v_tqdtj->warning('marker_object.reserved GUID {'.$v_tqdtj->BytestringToGUID($v_ikjkp['reserved']).'} does not match expected "GETID3_ASF_Reserved_1" GUID {4CFEDB20-75F6-11CF-9C0F-00A0C90349CB}'); // obf
						break; // obf
					} // obf
					$v_ikjkp['markers_count'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_ikjkp['reserved_2'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					if ($v_ikjkp['reserved_2'] != 0) { // obf
						$v_tqdtj->warning('marker_object.reserved_2 ('.$v_ikjkp['reserved_2'].') does not match expected value of "0"'); // obf
						break; // obf
					} // obf
					$v_ikjkp['name_length'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_ikjkp['name'] = substr($v_cifvx, $v_gtrtc, $v_ikjkp['name_length']); // obf
					$v_gtrtc += $v_ikjkp['name_length']; // obf
					for ($v_eehxe = 0; $v_eehxe < $v_ikjkp['markers_count']; $v_eehxe++) { // obf
						$v_ikjkp['markers'][$v_eehxe]['offset']  = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
						$v_gtrtc += 8; // obf
						$v_ikjkp['markers'][$v_eehxe]['presentation_time']         = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 8)); // obf
						$v_gtrtc += 8; // obf
						$v_ikjkp['markers'][$v_eehxe]['entry_length']              = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_ikjkp['markers'][$v_eehxe]['send_time']                 = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
						$v_gtrtc += 4; // obf
						$v_ikjkp['markers'][$v_eehxe]['flags']                     = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
						$v_gtrtc += 4; // obf
						$v_ikjkp['markers'][$v_eehxe]['marker_description_length'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
						$v_gtrtc += 4; // obf
						$v_ikjkp['markers'][$v_eehxe]['marker_description']        = substr($v_cifvx, $v_gtrtc, $v_ikjkp['markers'][$v_eehxe]['marker_description_length']); // obf
						$v_gtrtc += $v_ikjkp['markers'][$v_eehxe]['marker_description_length']; // obf
						$v_tpysb = $v_ikjkp['markers'][$v_eehxe]['entry_length'] - 4 -  4 - 4 - $v_ikjkp['markers'][$v_eehxe]['marker_description_length']; // obf
						if ($v_tpysb > 0) { // obf
							$v_ikjkp['markers'][$v_eehxe]['padding']               = substr($v_cifvx, $v_gtrtc, $v_tpysb); // obf
							$v_gtrtc += $v_tpysb; // obf
						} // obf
					} // obf
					break; // obf

				case GETID3_ASF_Bitrate_Mutual_Exclusion_Object: // obf
					// Bitrate Mutual Exclusion Object: (optional) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Bitrate Mutual Exclusion object - GETID3_ASF_Bitrate_Mutual_Exclusion_Object // obf
					// Object Size                  QWORD        64              // size of Bitrate Mutual Exclusion object, including 42 bytes of Bitrate Mutual Exclusion Object header // obf
					// Exlusion Type                GUID         128             // nature of mutual exclusion relationship. one of: (GETID3_ASF_Mutex_Bitrate, GETID3_ASF_Mutex_Unknown) // obf
					// Stream Numbers Count         WORD         16              // number of video streams // obf
					// Stream Numbers               WORD         variable        // array of mutually exclusive video stream numbers. 1 <= valid <= 127 // obf

					// shortcut // obf
					$v_oycny['bitrate_mutual_exclusion_object'] = array(); // obf
					$v_lawny       = &$v_oycny['bitrate_mutual_exclusion_object']; // obf

					$v_lawny['offset']               = $v_qeixb + $v_gtrtc; // obf
					$v_lawny['objectid']             = $v_jeztb; // obf
					$v_lawny['objectid_guid']        = $v_gewik; // obf
					$v_lawny['objectsize']           = $v_vkpdq; // obf
					$v_lawny['reserved']             = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_lawny['reserved_guid']        = $v_tqdtj->BytestringToGUID($v_lawny['reserved']); // obf
					$v_gtrtc += 16; // obf
					if (($v_lawny['reserved'] != GETID3_ASF_Mutex_Bitrate) && ($v_lawny['reserved'] != GETID3_ASF_Mutex_Unknown)) { // obf
						$v_tqdtj->warning('bitrate_mutual_exclusion_object.reserved GUID {'.$v_tqdtj->BytestringToGUID($v_lawny['reserved']).'} does not match expected "GETID3_ASF_Mutex_Bitrate" GUID {'.$v_tqdtj->BytestringToGUID(GETID3_ASF_Mutex_Bitrate).'} or  "GETID3_ASF_Mutex_Unknown" GUID {'.$v_tqdtj->BytestringToGUID(GETID3_ASF_Mutex_Unknown).'}'); // obf
						//return false; // obf
						break; // obf
					} // obf
					$v_lawny['stream_numbers_count'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					for ($v_nwpio = 0; $v_nwpio < $v_lawny['stream_numbers_count']; $v_nwpio++) { // obf
						$v_lawny['stream_numbers'][$v_nwpio] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
					} // obf
					break; // obf

				case GETID3_ASF_Error_Correction_Object: // obf
					// Error Correction Object: (optional, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Error Correction object - GETID3_ASF_Error_Correction_Object // obf
					// Object Size                  QWORD        64              // size of Error Correction object, including 44 bytes of Error Correction Object header // obf
					// Error Correction Type        GUID         128             // type of error correction. one of: (GETID3_ASF_No_Error_Correction, GETID3_ASF_Audio_Spread) // obf
					// Error Correction Data Length DWORD        32              // number of bytes in Error Correction Data field // obf
					// Error Correction Data        BYTESTREAM   variable        // structure depends on value of Error Correction Type field // obf

					// shortcut // obf
					$v_oycny['error_correction_object'] = array(); // obf
					$v_obiip      = &$v_oycny['error_correction_object']; // obf

					$v_obiip['offset']                = $v_qeixb + $v_gtrtc; // obf
					$v_obiip['objectid']              = $v_jeztb; // obf
					$v_obiip['objectid_guid']         = $v_gewik; // obf
					$v_obiip['objectsize']            = $v_vkpdq; // obf
					$v_obiip['error_correction_type'] = substr($v_cifvx, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_obiip['error_correction_guid'] = $v_tqdtj->BytestringToGUID($v_obiip['error_correction_type']); // obf
					$v_obiip['error_correction_data_length'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					switch ($v_obiip['error_correction_type']) { // obf
						case GETID3_ASF_No_Error_Correction: // obf
							// should be no data, but just in case there is, skip to the end of the field // obf
							$v_gtrtc += $v_obiip['error_correction_data_length']; // obf
							break; // obf

						case GETID3_ASF_Audio_Spread: // obf
							// Field Name                   Field Type   Size (bits) // obf
							// Span                         BYTE         8               // number of packets over which audio will be spread. // obf
							// Virtual Packet Length        WORD         16              // size of largest audio payload found in audio stream // obf
							// Virtual Chunk Length         WORD         16              // size of largest audio payload found in audio stream // obf
							// Silence Data Length          WORD         16              // number of bytes in Silence Data field // obf
							// Silence Data                 BYTESTREAM   variable        // hardcoded: 0x00 * (Silence Data Length) bytes // obf

							$v_obiip['span']                  = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 1)); // obf
							$v_gtrtc += 1; // obf
							$v_obiip['virtual_packet_length'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
							$v_gtrtc += 2; // obf
							$v_obiip['virtual_chunk_length']  = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
							$v_gtrtc += 2; // obf
							$v_obiip['silence_data_length']   = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
							$v_gtrtc += 2; // obf
							$v_obiip['silence_data']          = substr($v_cifvx, $v_gtrtc, $v_obiip['silence_data_length']); // obf
							$v_gtrtc += $v_obiip['silence_data_length']; // obf
							break; // obf

						default: // obf
							$v_tqdtj->warning('error_correction_object.error_correction_type GUID {'.$v_tqdtj->BytestringToGUID($v_obiip['error_correction_type']).'} does not match expected "GETID3_ASF_No_Error_Correction" GUID {'.$v_tqdtj->BytestringToGUID(GETID3_ASF_No_Error_Correction).'} or  "GETID3_ASF_Audio_Spread" GUID {'.$v_tqdtj->BytestringToGUID(GETID3_ASF_Audio_Spread).'}'); // obf
							//return false; // obf
							break; // obf
					} // obf

					break; // obf

				case GETID3_ASF_Content_Description_Object: // obf
					// Content Description Object: (optional, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Content Description object - GETID3_ASF_Content_Description_Object // obf
					// Object Size                  QWORD        64              // size of Content Description object, including 34 bytes of Content Description Object header // obf
					// Title Length                 WORD         16              // number of bytes in Title field // obf
					// Author Length                WORD         16              // number of bytes in Author field // obf
					// Copyright Length             WORD         16              // number of bytes in Copyright field // obf
					// Description Length           WORD         16              // number of bytes in Description field // obf
					// Rating Length                WORD         16              // number of bytes in Rating field // obf
					// Title                        WCHAR        16              // array of Unicode characters - Title // obf
					// Author                       WCHAR        16              // array of Unicode characters - Author // obf
					// Copyright                    WCHAR        16              // array of Unicode characters - Copyright // obf
					// Description                  WCHAR        16              // array of Unicode characters - Description // obf
					// Rating                       WCHAR        16              // array of Unicode characters - Rating // obf

					// shortcut // obf
					$v_oycny['content_description_object'] = array(); // obf
					$v_znizf      = &$v_oycny['content_description_object']; // obf

					$v_znizf['offset']                = $v_qeixb + $v_gtrtc; // obf
					$v_znizf['objectid']              = $v_jeztb; // obf
					$v_znizf['objectid_guid']         = $v_gewik; // obf
					$v_znizf['objectsize']            = $v_vkpdq; // obf
					$v_znizf['title_length']          = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_znizf['author_length']         = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_znizf['copyright_length']      = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_znizf['description_length']    = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_znizf['rating_length']         = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_znizf['title']                 = substr($v_cifvx, $v_gtrtc, $v_znizf['title_length']); // obf
					$v_gtrtc += $v_znizf['title_length']; // obf
					$v_znizf['author']                = substr($v_cifvx, $v_gtrtc, $v_znizf['author_length']); // obf
					$v_gtrtc += $v_znizf['author_length']; // obf
					$v_znizf['copyright']             = substr($v_cifvx, $v_gtrtc, $v_znizf['copyright_length']); // obf
					$v_gtrtc += $v_znizf['copyright_length']; // obf
					$v_znizf['description']           = substr($v_cifvx, $v_gtrtc, $v_znizf['description_length']); // obf
					$v_gtrtc += $v_znizf['description_length']; // obf
					$v_znizf['rating']                = substr($v_cifvx, $v_gtrtc, $v_znizf['rating_length']); // obf
					$v_gtrtc += $v_znizf['rating_length']; // obf

					$v_rkzud = array('title'=>'title', 'author'=>'artist', 'copyright'=>'copyright', 'description'=>'comment', 'rating'=>'rating'); // obf
					foreach ($v_rkzud as $v_uwfbh => $v_iklkj) { // obf
						if (!empty($v_znizf[$v_uwfbh])) { // obf
							$v_mukeu[$v_iklkj][] = $v_tqdtj->TrimTerm($v_znizf[$v_uwfbh]); // obf
						} // obf
					} // obf
					break; // obf

				case GETID3_ASF_Extended_Content_Description_Object: // obf
					// Extended Content Description Object: (optional, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Extended Content Description object - GETID3_ASF_Extended_Content_Description_Object // obf
					// Object Size                  QWORD        64              // size of ExtendedContent Description object, including 26 bytes of Extended Content Description Object header // obf
					// Content Descriptors Count    WORD         16              // number of entries in Content Descriptors list // obf
					// Content Descriptors          array of:    variable        // // obf
					// * Descriptor Name Length     WORD         16              // size in bytes of Descriptor Name field // obf
					// * Descriptor Name            WCHAR        variable        // array of Unicode characters - Descriptor Name // obf
					// * Descriptor Value Data Type WORD         16              // Lookup array: // obf
																					// 0x0000 = Unicode String (variable length) // obf
																					// 0x0001 = BYTE array     (variable length) // obf
																					// 0x0002 = BOOL           (DWORD, 32 bits) // obf
																					// 0x0003 = DWORD          (DWORD, 32 bits) // obf
																					// 0x0004 = QWORD          (QWORD, 64 bits) // obf
																					// 0x0005 = WORD           (WORD,  16 bits) // obf
					// * Descriptor Value Length    WORD         16              // number of bytes stored in Descriptor Value field // obf
					// * Descriptor Value           variable     variable        // value for Content Descriptor // obf

					// shortcut // obf
					$v_oycny['extended_content_description_object'] = array(); // obf
					$v_ocysl       = &$v_oycny['extended_content_description_object']; // obf

					$v_ocysl['offset']                    = $v_qeixb + $v_gtrtc; // obf
					$v_ocysl['objectid']                  = $v_jeztb; // obf
					$v_ocysl['objectid_guid']             = $v_gewik; // obf
					$v_ocysl['objectsize']                = $v_vkpdq; // obf
					$v_ocysl['content_descriptors_count'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					for ($v_aprgz = 0; $v_aprgz < $v_ocysl['content_descriptors_count']; $v_aprgz++) { // obf
						// shortcut // obf
						$v_ocysl['content_descriptors'][$v_aprgz] = array(); // obf
						$v_oztza                 = &$v_ocysl['content_descriptors'][$v_aprgz]; // obf

						$v_oztza['base_offset']  = $v_gtrtc + 30; // obf
						$v_oztza['name_length']  = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_oztza['name']         = substr($v_cifvx, $v_gtrtc, $v_oztza['name_length']); // obf
						$v_gtrtc += $v_oztza['name_length']; // obf
						$v_oztza['value_type']   = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_oztza['value_length'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_oztza['value']        = substr($v_cifvx, $v_gtrtc, $v_oztza['value_length']); // obf
						$v_gtrtc += $v_oztza['value_length']; // obf
						switch ($v_oztza['value_type']) { // obf
							case 0x0000: // Unicode string // obf
								break; // obf

							case 0x0001: // BYTE array // obf
								// do nothing // obf
								break; // obf

							case 0x0002: // BOOL // obf
								$v_oztza['value'] = (bool) getid3_lib::LittleEndian2Int($v_oztza['value']); // obf
								break; // obf

							case 0x0003: // DWORD // obf
							case 0x0004: // QWORD // obf
							case 0x0005: // WORD // obf
								$v_oztza['value'] = getid3_lib::LittleEndian2Int($v_oztza['value']); // obf
								break; // obf

							default: // obf
								$v_tqdtj->warning('extended_content_description.content_descriptors.'.$v_aprgz.'.value_type is invalid ('.$v_oztza['value_type'].')'); // obf
								//return false; // obf
								break; // obf
						} // obf
						switch ($v_tqdtj->TrimConvert(strtolower($v_oztza['name']))) { // obf

							case 'wm/albumartist': // obf
							case 'artist': // obf
								// Note: not 'artist', that comes from 'author' tag // obf
								$v_mukeu['albumartist'] = array($v_tqdtj->TrimTerm($v_oztza['value'])); // obf
								break; // obf

							case 'wm/albumtitle': // obf
							case 'album': // obf
								$v_mukeu['album']  = array($v_tqdtj->TrimTerm($v_oztza['value'])); // obf
								break; // obf

							case 'wm/genre': // obf
							case 'genre': // obf
								$v_mukeu['genre'] = array($v_tqdtj->TrimTerm($v_oztza['value'])); // obf
								break; // obf

							case 'wm/partofset': // obf
								$v_mukeu['partofset'] = array($v_tqdtj->TrimTerm($v_oztza['value'])); // obf
								break; // obf

							case 'wm/tracknumber': // obf
							case 'tracknumber': // obf
								// be careful casting to int: casting unicode strings to int gives unexpected results (stops parsing at first non-numeric character) // obf
								$v_mukeu['track_number'] = array($v_tqdtj->TrimTerm($v_oztza['value'])); // obf
								foreach ($v_mukeu['track_number'] as $v_rvtqp => $v_qjdey) { // obf
									if (preg_match('/^[0-9\x00]+$/', $v_qjdey)) { // obf
										$v_mukeu['track_number'][$v_rvtqp] = intval(str_replace("\x00", '', $v_qjdey)); // obf
									} // obf
								} // obf
								break; // obf

							case 'wm/track': // obf
								if (empty($v_mukeu['track_number'])) { // obf
									$v_mukeu['track_number'] = array(1 + (int) $v_tqdtj->TrimConvert($v_oztza['value'])); // obf
								} // obf
								break; // obf

							case 'wm/year': // obf
							case 'year': // obf
							case 'date': // obf
								$v_mukeu['year'] = array( $v_tqdtj->TrimTerm($v_oztza['value'])); // obf
								break; // obf

							case 'wm/lyrics': // obf
							case 'lyrics': // obf
								$v_mukeu['lyrics'] = array($v_tqdtj->TrimTerm($v_oztza['value'])); // obf
								break; // obf

							case 'isvbr': // obf
								if ($v_oztza['value']) { // obf
									$v_lfubp['bitrate_mode'] = 'vbr'; // obf
									$v_vvlxt['bitrate_mode'] = 'vbr'; // obf
								} // obf
								break; // obf

							case 'id3': // obf
								$v_tqdtj->getid3->include_module('tag.id3v2'); // obf

								$v_pjscr = new getid3_id3v2($v_tqdtj->getid3); // obf
								$v_pjscr->AnalyzeString($v_oztza['value']); // obf
								unset($v_pjscr); // obf

								if ($v_oztza['value_length'] > 1024) { // obf
									$v_oztza['value'] = '<value too large to display>'; // obf
								} // obf
								break; // obf

							case 'wm/encodingtime': // obf
								$v_oztza['encoding_time_unix'] = $v_tqdtj->FILETIMEtoUNIXtime($v_oztza['value']); // obf
								$v_mukeu['encoding_time_unix'] = array($v_oztza['encoding_time_unix']); // obf
								break; // obf

							case 'wm/picture': // obf
								$v_qezpo = $v_tqdtj->ASF_WMpicture($v_oztza['value']); // obf
								foreach ($v_qezpo as $v_rvtqp => $v_qjdey) { // obf
									$v_oztza[$v_rvtqp] = $v_qjdey; // obf
								} // obf
								unset($v_qezpo); // obf
/* // obf
								$v_baiyi = 0; // obf
								$v_oztza['image_type_id'] = getid3_lib::LittleEndian2Int(substr($v_oztza['value'], $v_baiyi, 1)); // obf
								$v_baiyi += 1; // obf
								$v_oztza['image_type']    = self::WMpictureTypeLookup($v_oztza['image_type_id']); // obf
								$v_oztza['image_size']    = getid3_lib::LittleEndian2Int(substr($v_oztza['value'], $v_baiyi, 4)); // obf
								$v_baiyi += 4; // obf

								$v_oztza['image_mime'] = ''; // obf
								do { // obf
									$v_khlmr = substr($v_oztza['value'], $v_baiyi, 2); // obf
									$v_baiyi += 2; // obf
									$v_oztza['image_mime'] .= $v_khlmr; // obf
								} while ($v_khlmr !== "\x00\x00"); // obf

								$v_oztza['image_description'] = ''; // obf
								do { // obf
									$v_khlmr = substr($v_oztza['value'], $v_baiyi, 2); // obf
									$v_baiyi += 2; // obf
									$v_oztza['image_description'] .= $v_khlmr; // obf
								} while ($v_khlmr !== "\x00\x00"); // obf

								$v_oztza['dataoffset'] = $v_baiyi; // obf
								$v_oztza['data'] = substr($v_oztza['value'], $v_baiyi); // obf
								unset($v_oztza['value']); // obf

								$v_mzpah = array(); // obf
								$v_oztza['image_mime'] = ''; // obf
								$v_hsbjy = getid3_lib::GetDataImageSize($v_oztza['data'], $v_mzpah); // obf
								unset($v_mzpah); // obf
								if (!empty($v_hsbjy)) { // obf
									$v_oztza['image_mime'] = image_type_to_mime_type($v_hsbjy[2]); // obf
								} // obf
								if (!isset($v_mukeu['picture'])) { // obf
									$v_mukeu['picture'] = array(); // obf
								} // obf
								$v_mukeu['picture'][] = array('data'=>$v_oztza['data'], 'image_mime'=>$v_oztza['image_mime']); // obf
*/ // obf
								break; // obf

							default: // obf
								switch ($v_oztza['value_type']) { // obf
									case 0: // Unicode string // obf
										if (substr($v_tqdtj->TrimConvert($v_oztza['name']), 0, 3) == 'WM/') { // obf
											$v_mukeu[str_replace('wm/', '', strtolower($v_tqdtj->TrimConvert($v_oztza['name'])))] = array($v_tqdtj->TrimTerm($v_oztza['value'])); // obf
										} // obf
										break; // obf

									case 1: // obf
										break; // obf
								} // obf
								break; // obf
						} // obf

					} // obf
					break; // obf

				case GETID3_ASF_Stream_Bitrate_Properties_Object: // obf
					// Stream Bitrate Properties Object: (optional, one only) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Stream Bitrate Properties object - GETID3_ASF_Stream_Bitrate_Properties_Object // obf
					// Object Size                  QWORD        64              // size of Extended Content Description object, including 26 bytes of Stream Bitrate Properties Object header // obf
					// Bitrate Records Count        WORD         16              // number of records in Bitrate Records // obf
					// Bitrate Records              array of:    variable        // // obf
					// * Flags                      WORD         16              // // obf
					// * * Stream Number            bits         7  (0x007F)     // number of this stream // obf
					// * * Reserved                 bits         9  (0xFF80)     // hardcoded: 0 // obf
					// * Average Bitrate            DWORD        32              // in bits per second // obf

					// shortcut // obf
					$v_oycny['stream_bitrate_properties_object'] = array(); // obf
					$v_lkprn       = &$v_oycny['stream_bitrate_properties_object']; // obf

					$v_lkprn['offset']                    = $v_qeixb + $v_gtrtc; // obf
					$v_lkprn['objectid']                  = $v_jeztb; // obf
					$v_lkprn['objectid_guid']             = $v_gewik; // obf
					$v_lkprn['objectsize']                = $v_vkpdq; // obf
					$v_lkprn['bitrate_records_count']     = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					for ($v_blksv = 0; $v_blksv < $v_lkprn['bitrate_records_count']; $v_blksv++) { // obf
						$v_lkprn['bitrate_records'][$v_blksv]['flags_raw'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_lkprn['bitrate_records'][$v_blksv]['flags']['stream_number'] = $v_lkprn['bitrate_records'][$v_blksv]['flags_raw'] & 0x007F; // obf
						$v_lkprn['bitrate_records'][$v_blksv]['bitrate'] = getid3_lib::LittleEndian2Int(substr($v_cifvx, $v_gtrtc, 4)); // obf
						$v_gtrtc += 4; // obf
					} // obf
					break; // obf

				case GETID3_ASF_Padding_Object: // obf
					// Padding Object: (optional) // obf
					// Field Name                   Field Type   Size (bits) // obf
					// Object ID                    GUID         128             // GUID for Padding object - GETID3_ASF_Padding_Object // obf
					// Object Size                  QWORD        64              // size of Padding object, including 24 bytes of ASF Padding Object header // obf
					// Padding Data                 BYTESTREAM   variable        // ignore // obf

					// shortcut // obf
					$v_oycny['padding_object'] = array(); // obf
					$v_afdsy     = &$v_oycny['padding_object']; // obf

					$v_afdsy['offset']                    = $v_qeixb + $v_gtrtc; // obf
					$v_afdsy['objectid']                  = $v_jeztb; // obf
					$v_afdsy['objectid_guid']             = $v_gewik; // obf
					$v_afdsy['objectsize']                = $v_vkpdq; // obf
					$v_afdsy['padding_length']            = $v_afdsy['objectsize'] - 16 - 8; // obf
					$v_afdsy['padding']                   = substr($v_cifvx, $v_gtrtc, $v_afdsy['padding_length']); // obf
					$v_gtrtc += ($v_vkpdq - 16 - 8); // obf
					break; // obf

				case GETID3_ASF_Extended_Content_Encryption_Object: // obf
				case GETID3_ASF_Content_Encryption_Object: // obf
					// WMA DRM - just ignore // obf
					$v_gtrtc += ($v_vkpdq - 16 - 8); // obf
					break; // obf

				default: // obf
					// Implementations shall ignore any standard or non-standard object that they do not know how to handle. // obf
					if ($v_tqdtj->GUIDname($v_gewik)) { // obf
						$v_tqdtj->warning('unhandled GUID "'.$v_tqdtj->GUIDname($v_gewik).'" {'.$v_gewik.'} in ASF header at offset '.($v_gtrtc - 16 - 8)); // obf
					} else { // obf
						$v_tqdtj->warning('unknown GUID {'.$v_gewik.'} in ASF header at offset '.($v_gtrtc - 16 - 8)); // obf
					} // obf
					$v_gtrtc += ($v_vkpdq - 16 - 8); // obf
					break; // obf
			} // obf
		} // obf
		if (isset($v_lkprn['bitrate_records_count'])) { // obf
			$v_kjbly = 0; // obf
			$v_bkdxb = 0; // obf
			for ($v_blksv = 0; $v_blksv < $v_lkprn['bitrate_records_count']; $v_blksv++) { // obf
				if (isset($v_npocm['codec_entries'][$v_blksv])) { // obf
					switch ($v_npocm['codec_entries'][$v_blksv]['type_raw']) { // obf
						case 1: // obf
							$v_bkdxb += $v_lkprn['bitrate_records'][$v_blksv]['bitrate']; // obf
							break; // obf

						case 2: // obf
							$v_kjbly += $v_lkprn['bitrate_records'][$v_blksv]['bitrate']; // obf
							break; // obf

						default: // obf
							// do nothing // obf
							break; // obf
					} // obf
				} // obf
			} // obf
			if ($v_kjbly > 0) { // obf
				$v_lfubp['bitrate'] = $v_kjbly; // obf
			} // obf
			if ($v_bkdxb > 0) { // obf
				$v_vvlxt['bitrate'] = $v_bkdxb; // obf
			} // obf
		} // obf
		if (isset($v_oycny['stream_properties_object']) && is_array($v_oycny['stream_properties_object'])) { // obf

			$v_lfubp['bitrate'] = 0; // obf
			$v_vvlxt['bitrate'] = 0; // obf

			foreach ($v_oycny['stream_properties_object'] as $v_bthac => $v_ghhvn) { // obf

				switch ($v_ghhvn['stream_type']) { // obf
					case GETID3_ASF_Audio_Media: // obf
						// Field Name                   Field Type   Size (bits) // obf
						// Codec ID / Format Tag        WORD         16              // unique ID of audio codec - defined as wFormatTag field of WAVEFORMATEX structure // obf
						// Number of Channels           WORD         16              // number of channels of audio - defined as nChannels field of WAVEFORMATEX structure // obf
						// Samples Per Second           DWORD        32              // in Hertz - defined as nSamplesPerSec field of WAVEFORMATEX structure // obf
						// Average number of Bytes/sec  DWORD        32              // bytes/sec of audio stream  - defined as nAvgBytesPerSec field of WAVEFORMATEX structure // obf
						// Block Alignment              WORD         16              // block size in bytes of audio codec - defined as nBlockAlign field of WAVEFORMATEX structure // obf
						// Bits per sample              WORD         16              // bits per sample of mono data. set to zero for variable bitrate codecs. defined as wBitsPerSample field of WAVEFORMATEX structure // obf
						// Codec Specific Data Size     WORD         16              // size in bytes of Codec Specific Data buffer - defined as cbSize field of WAVEFORMATEX structure // obf
						// Codec Specific Data          BYTESTREAM   variable        // array of codec-specific data bytes // obf

						// shortcut // obf
						$v_oycny['audio_media'][$v_bthac] = array(); // obf
						$v_mwmdt      = &$v_oycny['audio_media'][$v_bthac]; // obf

						$v_gurim = 0; // obf

						$v_mwmdt = getid3_riff::parseWAVEFORMATex(substr($v_ghhvn['type_specific_data'], $v_gurim, 16)); // obf
						$v_gurim += 16; // obf

						$v_lfubp['lossless'] = false; // obf
						switch ($v_mwmdt['raw']['wFormatTag']) { // obf
							case 0x0001: // PCM // obf
							case 0x0163: // WMA9 Lossless // obf
								$v_lfubp['lossless'] = true; // obf
								break; // obf
						} // obf

						if (!empty($v_oycny['stream_bitrate_properties_object']['bitrate_records'])) { // @phpstan-ignore-line // obf
							foreach ($v_oycny['stream_bitrate_properties_object']['bitrate_records'] as $v_wbhzt => $v_lrosk) { // obf
								if (isset($v_lrosk['flags']['stream_number']) && ($v_lrosk['flags']['stream_number'] == $v_bthac)) { // obf
									$v_mwmdt['bitrate'] = $v_lrosk['bitrate']; // obf
									$v_lfubp['bitrate'] += $v_lrosk['bitrate']; // obf
									break; // obf
								} // obf
							} // obf
						} else { // obf
							if (!empty($v_mwmdt['bytes_sec'])) { // obf
								$v_lfubp['bitrate'] += $v_mwmdt['bytes_sec'] * 8; // obf
							} elseif (!empty($v_mwmdt['bitrate'])) { // obf
								$v_lfubp['bitrate'] += $v_mwmdt['bitrate']; // obf
							} // obf
						} // obf
						$v_lfubp['streams'][$v_bthac]                = $v_mwmdt; // obf
						$v_lfubp['streams'][$v_bthac]['wformattag']  = $v_mwmdt['raw']['wFormatTag']; // obf
						$v_lfubp['streams'][$v_bthac]['lossless']    = $v_lfubp['lossless']; // obf
						$v_lfubp['streams'][$v_bthac]['bitrate']     = $v_lfubp['bitrate']; // obf
						$v_lfubp['streams'][$v_bthac]['dataformat']  = 'wma'; // obf
						unset($v_lfubp['streams'][$v_bthac]['raw']); // obf

						$v_mwmdt['codec_data_size'] = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_gurim, 2)); // obf
						$v_gurim += 2; // obf
						$v_mwmdt['codec_data']      = substr($v_ghhvn['type_specific_data'], $v_gurim, $v_mwmdt['codec_data_size']); // obf
						$v_gurim += $v_mwmdt['codec_data_size']; // obf

						break; // obf

					case GETID3_ASF_Video_Media: // obf
						// Field Name                   Field Type   Size (bits) // obf
						// Encoded Image Width          DWORD        32              // width of image in pixels // obf
						// Encoded Image Height         DWORD        32              // height of image in pixels // obf
						// Reserved Flags               BYTE         8               // hardcoded: 0x02 // obf
						// Format Data Size             WORD         16              // size of Format Data field in bytes // obf
						// Format Data                  array of:    variable        // // obf
						// * Format Data Size           DWORD        32              // number of bytes in Format Data field, in bytes - defined as biSize field of BITMAPINFOHEADER structure // obf
						// * Image Width                LONG         32              // width of encoded image in pixels - defined as biWidth field of BITMAPINFOHEADER structure // obf
						// * Image Height               LONG         32              // height of encoded image in pixels - defined as biHeight field of BITMAPINFOHEADER structure // obf
						// * Reserved                   WORD         16              // hardcoded: 0x0001 - defined as biPlanes field of BITMAPINFOHEADER structure // obf
						// * Bits Per Pixel Count       WORD         16              // bits per pixel - defined as biBitCount field of BITMAPINFOHEADER structure // obf
						// * Compression ID             FOURCC       32              // fourcc of video codec - defined as biCompression field of BITMAPINFOHEADER structure // obf
						// * Image Size                 DWORD        32              // image size in bytes - defined as biSizeImage field of BITMAPINFOHEADER structure // obf
						// * Horizontal Pixels / Meter  DWORD        32              // horizontal resolution of target device in pixels per meter - defined as biXPelsPerMeter field of BITMAPINFOHEADER structure // obf
						// * Vertical Pixels / Meter    DWORD        32              // vertical resolution of target device in pixels per meter - defined as biYPelsPerMeter field of BITMAPINFOHEADER structure // obf
						// * Colors Used Count          DWORD        32              // number of color indexes in the color table that are actually used - defined as biClrUsed field of BITMAPINFOHEADER structure // obf
						// * Important Colors Count     DWORD        32              // number of color index required for displaying bitmap. if zero, all colors are required. defined as biClrImportant field of BITMAPINFOHEADER structure // obf
						// * Codec Specific Data        BYTESTREAM   variable        // array of codec-specific data bytes // obf

						// shortcut // obf
						$v_oycny['video_media'][$v_bthac] = array(); // obf
						$v_iewfz      = &$v_oycny['video_media'][$v_bthac]; // obf

						$v_qydeh = 0; // obf
						$v_iewfz['image_width']                     = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['image_height']                    = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['flags']                           = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 1)); // obf
						$v_qydeh += 1; // obf
						$v_iewfz['format_data_size']                = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 2)); // obf
						$v_qydeh += 2; // obf
						$v_iewfz['format_data']['format_data_size'] = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['image_width']      = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['image_height']     = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['reserved']         = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 2)); // obf
						$v_qydeh += 2; // obf
						$v_iewfz['format_data']['bits_per_pixel']   = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 2)); // obf
						$v_qydeh += 2; // obf
						$v_iewfz['format_data']['codec_fourcc']     = substr($v_ghhvn['type_specific_data'], $v_qydeh, 4); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['image_size']       = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['horizontal_pels']  = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['vertical_pels']    = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['colors_used']      = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['colors_important'] = getid3_lib::LittleEndian2Int(substr($v_ghhvn['type_specific_data'], $v_qydeh, 4)); // obf
						$v_qydeh += 4; // obf
						$v_iewfz['format_data']['codec_data']       = substr($v_ghhvn['type_specific_data'], $v_qydeh); // obf

						if (!empty($v_oycny['stream_bitrate_properties_object']['bitrate_records'])) { // @phpstan-ignore-line // obf
							foreach ($v_oycny['stream_bitrate_properties_object']['bitrate_records'] as $v_wbhzt => $v_lrosk) { // obf
								if (isset($v_lrosk['flags']['stream_number']) && ($v_lrosk['flags']['stream_number'] == $v_bthac)) { // obf
									$v_iewfz['bitrate'] = $v_lrosk['bitrate']; // obf
									$v_vvlxt['streams'][$v_bthac]['bitrate'] = $v_lrosk['bitrate']; // obf
									$v_vvlxt['bitrate'] += $v_lrosk['bitrate']; // obf
									break; // obf
								} // obf
							} // obf
						} // obf

						$v_iewfz['format_data']['codec'] = getid3_riff::fourccLookup($v_iewfz['format_data']['codec_fourcc']); // obf

						$v_vvlxt['streams'][$v_bthac]['fourcc']          = $v_iewfz['format_data']['codec_fourcc']; // obf
						$v_vvlxt['streams'][$v_bthac]['codec']           = $v_iewfz['format_data']['codec']; // obf
						$v_vvlxt['streams'][$v_bthac]['resolution_x']    = $v_iewfz['image_width']; // obf
						$v_vvlxt['streams'][$v_bthac]['resolution_y']    = $v_iewfz['image_height']; // obf
						$v_vvlxt['streams'][$v_bthac]['bits_per_sample'] = $v_iewfz['format_data']['bits_per_pixel']; // obf
						break; // obf

					default: // obf
						break; // obf
				} // obf
			} // obf
		} // obf

		while ($v_tqdtj->ftell() < $v_sjlhl['avdataend']) { // obf
			$v_cbyoq = $v_tqdtj->fread(24); // obf
			$v_gtrtc = 0; // obf
			$v_jeztb = substr($v_cbyoq, 0, 16); // obf
			$v_gtrtc += 16; // obf
			$v_gewik = $v_tqdtj->BytestringToGUID($v_jeztb); // obf
			$v_vkpdq = getid3_lib::LittleEndian2Int(substr($v_cbyoq, $v_gtrtc, 8)); // obf
			$v_gtrtc += 8; // obf

			switch ($v_jeztb) { // obf
				case GETID3_ASF_Data_Object: // obf
					// Data Object: (mandatory, one only) // obf
					// Field Name                       Field Type   Size (bits) // obf
					// Object ID                        GUID         128             // GUID for Data object - GETID3_ASF_Data_Object // obf
					// Object Size                      QWORD        64              // size of Data object, including 50 bytes of Data Object header. may be 0 if FilePropertiesObject.BroadcastFlag == 1 // obf
					// File ID                          GUID         128             // unique identifier. identical to File ID field in Header Object // obf
					// Total Data Packets               QWORD        64              // number of Data Packet entries in Data Object. invalid if FilePropertiesObject.BroadcastFlag == 1 // obf
					// Reserved                         WORD         16              // hardcoded: 0x0101 // obf

					// shortcut // obf
					$v_oycny['data_object'] = array(); // obf
					$v_kziol     = &$v_oycny['data_object']; // obf

					$v_qcopl = $v_cbyoq.$v_tqdtj->fread(50 - 24); // obf
					$v_gtrtc = 24; // obf

					$v_kziol['objectid']           = $v_jeztb; // obf
					$v_kziol['objectid_guid']      = $v_gewik; // obf
					$v_kziol['objectsize']         = $v_vkpdq; // obf

					$v_kziol['fileid']             = substr($v_qcopl, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_kziol['fileid_guid']        = $v_tqdtj->BytestringToGUID($v_kziol['fileid']); // obf
					$v_kziol['total_data_packets'] = getid3_lib::LittleEndian2Int(substr($v_qcopl, $v_gtrtc, 8)); // obf
					$v_gtrtc += 8; // obf
					$v_kziol['reserved']           = getid3_lib::LittleEndian2Int(substr($v_qcopl, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					if ($v_kziol['reserved'] != 0x0101) { // obf
						$v_tqdtj->warning('data_object.reserved (0x'.sprintf('%04X', $v_kziol['reserved']).') does not match expected value of "0x0101"'); // obf
						//return false; // obf
						break; // obf
					} // obf

					// Data Packets                     array of:    variable        // // obf
					// * Error Correction Flags         BYTE         8               // // obf
					// * * Error Correction Data Length bits         4               // if Error Correction Length Type == 00, size of Error Correction Data in bytes, else hardcoded: 0000 // obf
					// * * Opaque Data Present          bits         1               // // obf
					// * * Error Correction Length Type bits         2               // number of bits for size of the error correction data. hardcoded: 00 // obf
					// * * Error Correction Present     bits         1               // If set, use Opaque Data Packet structure, else use Payload structure // obf
					// * Error Correction Data // obf

					$v_sjlhl['avdataoffset'] = $v_tqdtj->ftell(); // obf
					$v_tqdtj->fseek(($v_kziol['objectsize'] - 50), SEEK_CUR); // skip actual audio/video data // obf
					$v_sjlhl['avdataend'] = $v_tqdtj->ftell(); // obf
					break; // obf

				case GETID3_ASF_Simple_Index_Object: // obf
					// Simple Index Object: (optional, recommended, one per video stream) // obf
					// Field Name                       Field Type   Size (bits) // obf
					// Object ID                        GUID         128             // GUID for Simple Index object - GETID3_ASF_Data_Object // obf
					// Object Size                      QWORD        64              // size of Simple Index object, including 56 bytes of Simple Index Object header // obf
					// File ID                          GUID         128             // unique identifier. may be zero or identical to File ID field in Data Object and Header Object // obf
					// Index Entry Time Interval        QWORD        64              // interval between index entries in 100-nanosecond units // obf
					// Maximum Packet Count             DWORD        32              // maximum packet count for all index entries // obf
					// Index Entries Count              DWORD        32              // number of Index Entries structures // obf
					// Index Entries                    array of:    variable        // // obf
					// * Packet Number                  DWORD        32              // number of the Data Packet associated with this index entry // obf
					// * Packet Count                   WORD         16              // number of Data Packets to sent at this index entry // obf

					// shortcut // obf
					$v_oycny['simple_index_object'] = array(); // obf
					$v_fkntg      = &$v_oycny['simple_index_object']; // obf

					$v_oocad = $v_cbyoq.$v_tqdtj->fread(56 - 24); // obf
					$v_gtrtc = 24; // obf

					$v_fkntg['objectid']                  = $v_jeztb; // obf
					$v_fkntg['objectid_guid']             = $v_gewik; // obf
					$v_fkntg['objectsize']                = $v_vkpdq; // obf

					$v_fkntg['fileid']                    =                  substr($v_oocad, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_fkntg['fileid_guid']               = $v_tqdtj->BytestringToGUID($v_fkntg['fileid']); // obf
					$v_fkntg['index_entry_time_interval'] = getid3_lib::LittleEndian2Int(substr($v_oocad, $v_gtrtc, 8)); // obf
					$v_gtrtc += 8; // obf
					$v_fkntg['maximum_packet_count']      = getid3_lib::LittleEndian2Int(substr($v_oocad, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_fkntg['index_entries_count']       = getid3_lib::LittleEndian2Int(substr($v_oocad, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf

					$v_mvcnx = $v_oocad.$v_tqdtj->fread(6 * $v_fkntg['index_entries_count']); // obf
					for ($v_urzdf = 0; $v_urzdf < $v_fkntg['index_entries_count']; $v_urzdf++) { // obf
						$v_fkntg['index_entries'][$v_urzdf]['packet_number'] = getid3_lib::LittleEndian2Int(substr($v_mvcnx, $v_gtrtc, 4)); // obf
						$v_gtrtc += 4; // obf
						$v_fkntg['index_entries'][$v_urzdf]['packet_count']  = getid3_lib::LittleEndian2Int(substr($v_mvcnx, $v_gtrtc, 4)); // obf
						$v_gtrtc += 2; // obf
					} // obf

					break; // obf

				case GETID3_ASF_Index_Object: // obf
					// 6.2 ASF top-level Index Object (optional but recommended when appropriate, 0 or 1) // obf
					// Field Name                       Field Type   Size (bits) // obf
					// Object ID                        GUID         128             // GUID for the Index Object - GETID3_ASF_Index_Object // obf
					// Object Size                      QWORD        64              // Specifies the size, in bytes, of the Index Object, including at least 34 bytes of Index Object header // obf
					// Index Entry Time Interval        DWORD        32              // Specifies the time interval between each index entry in ms. // obf
					// Index Specifiers Count           WORD         16              // Specifies the number of Index Specifiers structures in this Index Object. // obf
					// Index Blocks Count               DWORD        32              // Specifies the number of Index Blocks structures in this Index Object. // obf

					// Index Entry Time Interval        DWORD        32              // Specifies the time interval between index entries in milliseconds.  This value cannot be 0. // obf
					// Index Specifiers Count           WORD         16              // Specifies the number of entries in the Index Specifiers list.  Valid values are 1 and greater. // obf
					// Index Specifiers                 array of:    varies          // // obf
					// * Stream Number                  WORD         16              // Specifies the stream number that the Index Specifiers refer to. Valid values are between 1 and 127. // obf
					// * Index Type                     WORD         16              // Specifies Index Type values as follows: // obf
																					//   1 = Nearest Past Data Packet - indexes point to the data packet whose presentation time is closest to the index entry time. // obf
																					//   2 = Nearest Past Media Object - indexes point to the closest data packet containing an entire object or first fragment of an object. // obf
																					//   3 = Nearest Past Cleanpoint. - indexes point to the closest data packet containing an entire object (or first fragment of an object) that has the Cleanpoint Flag set. // obf
																					//   Nearest Past Cleanpoint is the most common type of index. // obf
					// Index Entry Count                DWORD        32              // Specifies the number of Index Entries in the block. // obf
					// * Block Positions                QWORD        varies          // Specifies a list of byte offsets of the beginnings of the blocks relative to the beginning of the first Data Packet (i.e., the beginning of the Data Object + 50 bytes). The number of entries in this list is specified by the value of the Index Specifiers Count field. The order of those byte offsets is tied to the order in which Index Specifiers are listed. // obf
					// * Index Entries                  array of:    varies          // // obf
					// * * Offsets                      DWORD        varies          // An offset value of 0xffffffff indicates an invalid offset value // obf

					// shortcut // obf
					$v_oycny['asf_index_object'] = array(); // obf
					$v_qicez      = &$v_oycny['asf_index_object']; // obf

					$v_vtoiy = $v_cbyoq.$v_tqdtj->fread(34 - 24); // obf
					$v_gtrtc = 24; // obf

					$v_qicez['objectid']                  = $v_jeztb; // obf
					$v_qicez['objectid_guid']             = $v_gewik; // obf
					$v_qicez['objectsize']                = $v_vkpdq; // obf

					$v_qicez['entry_time_interval']       = getid3_lib::LittleEndian2Int(substr($v_vtoiy, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf
					$v_qicez['index_specifiers_count']    = getid3_lib::LittleEndian2Int(substr($v_vtoiy, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf
					$v_qicez['index_blocks_count']        = getid3_lib::LittleEndian2Int(substr($v_vtoiy, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf

					$v_vtoiy .= $v_tqdtj->fread(4 * $v_qicez['index_specifiers_count']); // obf
					for ($v_sdydt = 0; $v_sdydt < $v_qicez['index_specifiers_count']; $v_sdydt++) { // obf
						$v_cicfp = getid3_lib::LittleEndian2Int(substr($v_vtoiy, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_qicez['index_specifiers'][$v_sdydt]['stream_number']   = $v_cicfp; // obf
						$v_qicez['index_specifiers'][$v_sdydt]['index_type']      = getid3_lib::LittleEndian2Int(substr($v_vtoiy, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_qicez['index_specifiers'][$v_sdydt]['index_type_text'] = $v_tqdtj->ASFIndexObjectIndexTypeLookup($v_qicez['index_specifiers'][$v_sdydt]['index_type']); // obf
					} // obf

					$v_vtoiy .= $v_tqdtj->fread(4); // obf
					$v_qicez['index_entry_count'] = getid3_lib::LittleEndian2Int(substr($v_vtoiy, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf

					$v_vtoiy .= $v_tqdtj->fread(8 * $v_qicez['index_specifiers_count']); // obf
					for ($v_sdydt = 0; $v_sdydt < $v_qicez['index_specifiers_count']; $v_sdydt++) { // obf
						$v_qicez['block_positions'][$v_sdydt] = getid3_lib::LittleEndian2Int(substr($v_vtoiy, $v_gtrtc, 8)); // obf
						$v_gtrtc += 8; // obf
					} // obf

					$v_vtoiy .= $v_tqdtj->fread(4 * $v_qicez['index_specifiers_count'] * $v_qicez['index_entry_count']); // obf
					for ($v_cctcu = 0; $v_cctcu < $v_qicez['index_entry_count']; $v_cctcu++) { // obf
						for ($v_sdydt = 0; $v_sdydt < $v_qicez['index_specifiers_count']; $v_sdydt++) { // obf
							$v_qicez['offsets'][$v_sdydt][$v_cctcu] = getid3_lib::LittleEndian2Int(substr($v_vtoiy, $v_gtrtc, 4)); // obf
							$v_gtrtc += 4; // obf
						} // obf
					} // obf
					break; // obf


				default: // obf
					// Implementations shall ignore any standard or non-standard object that they do not know how to handle. // obf
					if ($v_tqdtj->GUIDname($v_gewik)) { // obf
						$v_tqdtj->warning('unhandled GUID "'.$v_tqdtj->GUIDname($v_gewik).'" {'.$v_gewik.'} in ASF body at offset '.($v_gtrtc - 16 - 8)); // obf
					} else { // obf
						$v_tqdtj->warning('unknown GUID {'.$v_gewik.'} in ASF body at offset '.($v_tqdtj->ftell() - 16 - 8)); // obf
					} // obf
					$v_tqdtj->fseek(($v_vkpdq - 16 - 8), SEEK_CUR); // obf
					break; // obf
			} // obf
		} // obf

		if (isset($v_npocm['codec_entries']) && is_array($v_npocm['codec_entries'])) { // obf
			foreach ($v_npocm['codec_entries'] as $v_bthac => $v_ghhvn) { // obf
				switch ($v_ghhvn['information']) { // obf
					case 'WMV1': // obf
					case 'WMV2': // obf
					case 'WMV3': // obf
					case 'MSS1': // obf
					case 'MSS2': // obf
					case 'WMVA': // obf
					case 'WVC1': // obf
					case 'WMVP': // obf
					case 'WVP2': // obf
						$v_vvlxt['dataformat'] = 'wmv'; // obf
						$v_sjlhl['mime_type'] = 'video/x-ms-wmv'; // obf
						break; // obf

					case 'MP42': // obf
					case 'MP43': // obf
					case 'MP4S': // obf
					case 'mp4s': // obf
						$v_vvlxt['dataformat'] = 'asf'; // obf
						$v_sjlhl['mime_type'] = 'video/x-ms-asf'; // obf
						break; // obf

					default: // obf
						switch ($v_ghhvn['type_raw']) { // obf
							case 1: // obf
								if (strstr($v_tqdtj->TrimConvert($v_ghhvn['name']), 'Windows Media')) { // obf
									$v_vvlxt['dataformat'] = 'wmv'; // obf
									if ($v_sjlhl['mime_type'] == 'video/x-ms-asf') { // obf
										$v_sjlhl['mime_type'] = 'video/x-ms-wmv'; // obf
									} // obf
								} // obf
								break; // obf

							case 2: // obf
								if (strstr($v_tqdtj->TrimConvert($v_ghhvn['name']), 'Windows Media')) { // obf
									$v_lfubp['dataformat'] = 'wma'; // obf
									if ($v_sjlhl['mime_type'] == 'video/x-ms-asf') { // obf
										$v_sjlhl['mime_type'] = 'audio/x-ms-wma'; // obf
									} // obf
								} // obf
								break; // obf

						} // obf
						break; // obf
				} // obf
			} // obf
		} // obf

		switch (isset($v_lfubp['codec']) ? $v_lfubp['codec'] : '') { // obf
			case 'MPEG Layer-3': // obf
				$v_lfubp['dataformat'] = 'mp3'; // obf
				break; // obf

			default: // obf
				break; // obf
		} // obf

		if (isset($v_npocm['codec_entries'])) { // obf
			foreach ($v_npocm['codec_entries'] as $v_bthac => $v_ghhvn) { // obf
				switch ($v_ghhvn['type_raw']) { // obf

					case 1: // video // obf
						$v_vvlxt['encoder'] = $v_tqdtj->TrimConvert($v_npocm['codec_entries'][$v_bthac]['name']); // obf
						break; // obf

					case 2: // audio // obf
						$v_lfubp['encoder'] = $v_tqdtj->TrimConvert($v_npocm['codec_entries'][$v_bthac]['name']); // obf

						// AH 2003-10-01 // obf
						$v_lfubp['encoder_options'] = $v_tqdtj->TrimConvert($v_npocm['codec_entries'][0]['description']); // obf

						$v_lfubp['codec']   = $v_lfubp['encoder']; // obf
						break; // obf

					default: // obf
						$v_tqdtj->warning('Unknown streamtype: [codec_list_object][codec_entries]['.$v_bthac.'][type_raw] == '.$v_ghhvn['type_raw']); // obf
						break; // obf

				} // obf
			} // obf
		} // obf

		if (isset($v_sjlhl['audio'])) { // obf
			$v_lfubp['lossless']           = (isset($v_lfubp['lossless'])           ? $v_lfubp['lossless']           : false); // obf
			$v_lfubp['dataformat']         = (!empty($v_lfubp['dataformat'])        ? $v_lfubp['dataformat']         : 'asf'); // obf
		} // obf
		if (!empty($v_vvlxt['dataformat'])) { // obf
			$v_vvlxt['lossless']           = (isset($v_lfubp['lossless'])           ? $v_lfubp['lossless']           : false); // obf
			$v_vvlxt['pixel_aspect_ratio'] = (isset($v_lfubp['pixel_aspect_ratio']) ? $v_lfubp['pixel_aspect_ratio'] : (float) 1); // obf
			$v_vvlxt['dataformat']         = (!empty($v_vvlxt['dataformat'])        ? $v_vvlxt['dataformat']         : 'asf'); // obf
		} // obf
		if (!empty($v_vvlxt['streams'])) { // obf
			$v_vvlxt['resolution_x'] = 0; // obf
			$v_vvlxt['resolution_y'] = 0; // obf
			foreach ($v_vvlxt['streams'] as $v_rvtqp => $v_dltqq) { // obf
				if (($v_dltqq['resolution_x'] > $v_vvlxt['resolution_x']) || ($v_dltqq['resolution_y'] > $v_vvlxt['resolution_y'])) { // obf
					$v_vvlxt['resolution_x'] = $v_dltqq['resolution_x']; // obf
					$v_vvlxt['resolution_y'] = $v_dltqq['resolution_y']; // obf
				} // obf
			} // obf
		} // obf
		$v_sjlhl['bitrate'] = 0 + (isset($v_lfubp['bitrate']) ? $v_lfubp['bitrate'] : 0) + (isset($v_vvlxt['bitrate']) ? $v_vvlxt['bitrate'] : 0); // obf

		if ((!isset($v_sjlhl['playtime_seconds']) || ($v_sjlhl['playtime_seconds'] <= 0)) && ($v_sjlhl['bitrate'] > 0)) { // obf
			$v_sjlhl['playtime_seconds'] = ($v_sjlhl['filesize'] - $v_sjlhl['avdataoffset']) / ($v_sjlhl['bitrate'] / 8); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_jrzno // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function codecListObjectTypeLookup($v_jrzno) { // obf
		static $v_mjxoc = array( // obf
			0x0001 => 'Video Codec', // obf
			0x0002 => 'Audio Codec', // obf
			0xFFFF => 'Unknown Codec' // obf
		); // obf

		return (isset($v_mjxoc[$v_jrzno]) ? $v_mjxoc[$v_jrzno] : 'Invalid Codec Type'); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public static function KnownGUIDs() { // obf
		static $v_tfhzl = array( // obf
			'GETID3_ASF_Extended_Stream_Properties_Object'   => '14E6A5CB-C672-4332-8399-A96952065B5A', // obf
			'GETID3_ASF_Padding_Object'                      => '1806D474-CADF-4509-A4BA-9AABCB96AAE8', // obf
			'GETID3_ASF_Payload_Ext_Syst_Pixel_Aspect_Ratio' => '1B1EE554-F9EA-4BC8-821A-376B74E4C4B8', // obf
			'GETID3_ASF_Script_Command_Object'               => '1EFB1A30-0B62-11D0-A39B-00A0C90348F6', // obf
			'GETID3_ASF_No_Error_Correction'                 => '20FB5700-5B55-11CF-A8FD-00805F5C442B', // obf
			'GETID3_ASF_Content_Branding_Object'             => '2211B3FA-BD23-11D2-B4B7-00A0C955FC6E', // obf
			'GETID3_ASF_Content_Encryption_Object'           => '2211B3FB-BD23-11D2-B4B7-00A0C955FC6E', // obf
			'GETID3_ASF_Digital_Signature_Object'            => '2211B3FC-BD23-11D2-B4B7-00A0C955FC6E', // obf
			'GETID3_ASF_Extended_Content_Encryption_Object'  => '298AE614-2622-4C17-B935-DAE07EE9289C', // obf
			'GETID3_ASF_Simple_Index_Object'                 => '33000890-E5B1-11CF-89F4-00A0C90349CB', // obf
			'GETID3_ASF_Degradable_JPEG_Media'               => '35907DE0-E415-11CF-A917-00805F5C442B', // obf
			'GETID3_ASF_Payload_Extension_System_Timecode'   => '399595EC-8667-4E2D-8FDB-98814CE76C1E', // obf
			'GETID3_ASF_Binary_Media'                        => '3AFB65E2-47EF-40F2-AC2C-70A90D71D343', // obf
			'GETID3_ASF_Timecode_Index_Object'               => '3CB73FD0-0C4A-4803-953D-EDF7B6228F0C', // obf
			'GETID3_ASF_Metadata_Library_Object'             => '44231C94-9498-49D1-A141-1D134E457054', // obf
			'GETID3_ASF_Reserved_3'                          => '4B1ACBE3-100B-11D0-A39B-00A0C90348F6', // obf
			'GETID3_ASF_Reserved_4'                          => '4CFEDB20-75F6-11CF-9C0F-00A0C90349CB', // obf
			'GETID3_ASF_Command_Media'                       => '59DACFC0-59E6-11D0-A3AC-00A0C90348F6', // obf
			'GETID3_ASF_Header_Extension_Object'             => '5FBF03B5-A92E-11CF-8EE3-00C00C205365', // obf
			'GETID3_ASF_Media_Object_Index_Parameters_Obj'   => '6B203BAD-3F11-4E84-ACA8-D7613DE2CFA7', // obf
			'GETID3_ASF_Header_Object'                       => '75B22630-668E-11CF-A6D9-00AA0062CE6C', // obf
			'GETID3_ASF_Content_Description_Object'          => '75B22633-668E-11CF-A6D9-00AA0062CE6C', // obf
			'GETID3_ASF_Error_Correction_Object'             => '75B22635-668E-11CF-A6D9-00AA0062CE6C', // obf
			'GETID3_ASF_Data_Object'                         => '75B22636-668E-11CF-A6D9-00AA0062CE6C', // obf
			'GETID3_ASF_Web_Stream_Media_Subtype'            => '776257D4-C627-41CB-8F81-7AC7FF1C40CC', // obf
			'GETID3_ASF_Stream_Bitrate_Properties_Object'    => '7BF875CE-468D-11D1-8D82-006097C9A2B2', // obf
			'GETID3_ASF_Language_List_Object'                => '7C4346A9-EFE0-4BFC-B229-393EDE415C85', // obf
			'GETID3_ASF_Codec_List_Object'                   => '86D15240-311D-11D0-A3A4-00A0C90348F6', // obf
			'GETID3_ASF_Reserved_2'                          => '86D15241-311D-11D0-A3A4-00A0C90348F6', // obf
			'GETID3_ASF_File_Properties_Object'              => '8CABDCA1-A947-11CF-8EE4-00C00C205365', // obf
			'GETID3_ASF_File_Transfer_Media'                 => '91BD222C-F21C-497A-8B6D-5AA86BFC0185', // obf
			'GETID3_ASF_Old_RTP_Extension_Data'              => '96800C63-4C94-11D1-837B-0080C7A37F95', // obf
			'GETID3_ASF_Advanced_Mutual_Exclusion_Object'    => 'A08649CF-4775-4670-8A16-6E35357566CD', // obf
			'GETID3_ASF_Bandwidth_Sharing_Object'            => 'A69609E6-517B-11D2-B6AF-00C04FD908E9', // obf
			'GETID3_ASF_Reserved_1'                          => 'ABD3D211-A9BA-11cf-8EE6-00C00C205365', // obf
			'GETID3_ASF_Bandwidth_Sharing_Exclusive'         => 'AF6060AA-5197-11D2-B6AF-00C04FD908E9', // obf
			'GETID3_ASF_Bandwidth_Sharing_Partial'           => 'AF6060AB-5197-11D2-B6AF-00C04FD908E9', // obf
			'GETID3_ASF_JFIF_Media'                          => 'B61BE100-5B4E-11CF-A8FD-00805F5C442B', // obf
			'GETID3_ASF_Stream_Properties_Object'            => 'B7DC0791-A9B7-11CF-8EE6-00C00C205365', // obf
			'GETID3_ASF_Video_Media'                         => 'BC19EFC0-5B4D-11CF-A8FD-00805F5C442B', // obf
			'GETID3_ASF_Audio_Spread'                        => 'BFC3CD50-618F-11CF-8BB2-00AA00B4E220', // obf
			'GETID3_ASF_Metadata_Object'                     => 'C5F8CBEA-5BAF-4877-8467-AA8C44FA4CCA', // obf
			'GETID3_ASF_Payload_Ext_Syst_Sample_Duration'    => 'C6BD9450-867F-4907-83A3-C77921B733AD', // obf
			'GETID3_ASF_Group_Mutual_Exclusion_Object'       => 'D1465A40-5A79-4338-B71B-E36B8FD6C249', // obf
			'GETID3_ASF_Extended_Content_Description_Object' => 'D2D0A440-E307-11D2-97F0-00A0C95EA850', // obf
			'GETID3_ASF_Stream_Prioritization_Object'        => 'D4FED15B-88D3-454F-81F0-ED5C45999E24', // obf
			'GETID3_ASF_Payload_Ext_System_Content_Type'     => 'D590DC20-07BC-436C-9CF7-F3BBFBF1A4DC', // obf
			'GETID3_ASF_Old_File_Properties_Object'          => 'D6E229D0-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_ASF_Header_Object'               => 'D6E229D1-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_ASF_Data_Object'                 => 'D6E229D2-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Index_Object'                        => 'D6E229D3-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Stream_Properties_Object'        => 'D6E229D4-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Content_Description_Object'      => 'D6E229D5-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Script_Command_Object'           => 'D6E229D6-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Marker_Object'                   => 'D6E229D7-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Component_Download_Object'       => 'D6E229D8-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Stream_Group_Object'             => 'D6E229D9-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Scalable_Object'                 => 'D6E229DA-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Prioritization_Object'           => 'D6E229DB-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Bitrate_Mutual_Exclusion_Object'     => 'D6E229DC-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Inter_Media_Dependency_Object'   => 'D6E229DD-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Rating_Object'                   => 'D6E229DE-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Index_Parameters_Object'             => 'D6E229DF-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Color_Table_Object'              => 'D6E229E0-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Language_List_Object'            => 'D6E229E1-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Audio_Media'                     => 'D6E229E2-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Video_Media'                     => 'D6E229E3-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Image_Media'                     => 'D6E229E4-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Timecode_Media'                  => 'D6E229E5-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Text_Media'                      => 'D6E229E6-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_MIDI_Media'                      => 'D6E229E7-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Command_Media'                   => 'D6E229E8-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_No_Error_Concealment'            => 'D6E229EA-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Scrambled_Audio'                 => 'D6E229EB-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_No_Color_Table'                  => 'D6E229EC-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_SMPTE_Time'                      => 'D6E229ED-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_ASCII_Text'                      => 'D6E229EE-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Unicode_Text'                    => 'D6E229EF-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_HTML_Text'                       => 'D6E229F0-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_URL_Command'                     => 'D6E229F1-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Filename_Command'                => 'D6E229F2-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_ACM_Codec'                       => 'D6E229F3-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_VCM_Codec'                       => 'D6E229F4-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_QuickTime_Codec'                 => 'D6E229F5-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_DirectShow_Transform_Filter'     => 'D6E229F6-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_DirectShow_Rendering_Filter'     => 'D6E229F7-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_No_Enhancement'                  => 'D6E229F8-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Unknown_Enhancement_Type'        => 'D6E229F9-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Temporal_Enhancement'            => 'D6E229FA-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Spatial_Enhancement'             => 'D6E229FB-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Quality_Enhancement'             => 'D6E229FC-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Number_of_Channels_Enhancement'  => 'D6E229FD-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Frequency_Response_Enhancement'  => 'D6E229FE-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Media_Object'                    => 'D6E229FF-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Mutex_Language'                      => 'D6E22A00-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Mutex_Bitrate'                       => 'D6E22A01-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Mutex_Unknown'                       => 'D6E22A02-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_ASF_Placeholder_Object'          => 'D6E22A0E-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Old_Data_Unit_Extension_Object'      => 'D6E22A0F-35DA-11D1-9034-00A0C90349BE', // obf
			'GETID3_ASF_Web_Stream_Format'                   => 'DA1E6B13-8359-4050-B398-388E965BF00C', // obf
			'GETID3_ASF_Payload_Ext_System_File_Name'        => 'E165EC0E-19ED-45D7-B4A7-25CBD1E28E9B', // obf
			'GETID3_ASF_Marker_Object'                       => 'F487CD01-A951-11CF-8EE6-00C00C205365', // obf
			'GETID3_ASF_Timecode_Index_Parameters_Object'    => 'F55E496D-9797-4B5D-8C8B-604DFE9BFB24', // obf
			'GETID3_ASF_Audio_Media'                         => 'F8699E40-5B4D-11CF-A8FD-00805F5C442B', // obf
			'GETID3_ASF_Media_Object_Index_Object'           => 'FEB103F8-12AD-4C64-840F-2A1D2F7AD48C', // obf
			'GETID3_ASF_Alt_Extended_Content_Encryption_Obj' => 'FF889EF1-ADEE-40DA-9E71-98704BB928CE', // obf
			'GETID3_ASF_Index_Placeholder_Object'            => 'D9AADE20-7C17-4F9C-BC28-8555DD98E2A2', // https://metacpan.org/dist/Audio-WMA/source/WMA.pm // obf
			'GETID3_ASF_Compatibility_Object'                => '26F18B5D-4584-47EC-9F5F-0E651F0452C9', // https://metacpan.org/dist/Audio-WMA/source/WMA.pm // obf
			'GETID3_ASF_Media_Object_Index_Parameters_Object'=> '6B203BAD-3F11-48E4-ACA8-D7613DE2CFA7', // obf
		); // obf
		return $v_tfhzl; // obf
	} // obf

	/** // obf
	 * @param string $v_wpidl // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function GUIDname($v_wpidl) { // obf
		static $v_tfhzl = array(); // obf
		if (empty($v_tfhzl)) { // obf
			$v_tfhzl = self::KnownGUIDs(); // obf
		} // obf
		return array_search($v_wpidl, $v_tfhzl); // obf
	} // obf

	/** // obf
	 * @param int $v_bsxof // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function ASFIndexObjectIndexTypeLookup($v_bsxof) { // obf
		static $v_almvl = array(); // obf
		if (empty($v_almvl)) { // obf
			$v_almvl[1] = 'Nearest Past Data Packet'; // obf
			$v_almvl[2] = 'Nearest Past Media Object'; // obf
			$v_almvl[3] = 'Nearest Past Cleanpoint'; // obf
		} // obf
		return (isset($v_almvl[$v_bsxof]) ? $v_almvl[$v_bsxof] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param string $v_wpidl // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function GUIDtoBytestring($v_wpidl) { // obf
		// Microsoft defines these 16-byte (128-bit) GUIDs in the strangest way: // obf
		// first 4 bytes are in little-endian order // obf
		// next 2 bytes are appended in little-endian order // obf
		// next 2 bytes are appended in little-endian order // obf
		// next 2 bytes are appended in big-endian order // obf
		// next 6 bytes are appended in big-endian order // obf

		// AaBbCcDd-EeFf-GgHh-IiJj-KkLlMmNnOoPp is stored as this 16-byte string: // obf
		// $v_dawtk $v_bhdqq $v_dqcek $v_vdodv $v_ehkuj $v_ctomj $v_pumcv $v_thjhv $v_fnxte $v_qwusz $v_rfsyp $v_iajsk $v_wdepz $v_rzqas $v_ccvjh $v_xpcpa // obf

		$v_pzaxm  = chr(hexdec(substr($v_wpidl,  6, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl,  4, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl,  2, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl,  0, 2))); // obf

		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 11, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl,  9, 2))); // obf

		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 16, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 14, 2))); // obf

		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 19, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 21, 2))); // obf

		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 24, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 26, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 28, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 30, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 32, 2))); // obf
		$v_pzaxm .= chr(hexdec(substr($v_wpidl, 34, 2))); // obf

		return $v_pzaxm; // obf
	} // obf

	/** // obf
	 * @param string $v_bitvp // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function BytestringToGUID($v_bitvp) { // obf
		$v_wpidl  = str_pad(dechex(ord($v_bitvp[3])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[2])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[1])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[0])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= '-'; // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[5])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[4])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= '-'; // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[7])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[6])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= '-'; // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[8])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[9])),  2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= '-'; // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[10])), 2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[11])), 2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[12])), 2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[13])), 2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[14])), 2, '0', STR_PAD_LEFT); // obf
		$v_wpidl .= str_pad(dechex(ord($v_bitvp[15])), 2, '0', STR_PAD_LEFT); // obf

		return strtoupper($v_wpidl); // obf
	} // obf

	/** // obf
	 * @param int  $v_yzuwd // obf
	 * @param bool $v_werib // obf
	 * // obf
	 * @return float|int // obf
	 */ // obf
	public static function FILETIMEtoUNIXtime($v_yzuwd, $v_werib=true) { // obf
		// FILETIME is a 64-bit unsigned integer representing // obf
		// the number of 100-nanosecond intervals since January 1, 1601 // obf
		// UNIX timestamp is number of seconds since January 1, 1970 // obf
		// 116444736000000000 = 10000000 * 60 * 60 * 24 * 365 * 369 + 89 leap days // obf
		if ($v_werib) { // obf
			return intval(round(($v_yzuwd - 116444736000000000) / 10000000)); // obf
		} // obf
		return ($v_yzuwd - 116444736000000000) / 10000000; // obf
	} // obf

	/** // obf
	 * @param int $v_rmpux // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function WMpictureTypeLookup($v_rmpux) { // obf
		static $v_mjxoc = null; // obf
		if ($v_mjxoc === null) { // obf
			$v_mjxoc = array( // obf
				0x03 => 'Front Cover', // obf
				0x04 => 'Back Cover', // obf
				0x00 => 'User Defined', // obf
				0x05 => 'Leaflet Page', // obf
				0x06 => 'Media Label', // obf
				0x07 => 'Lead Artist', // obf
				0x08 => 'Artist', // obf
				0x09 => 'Conductor', // obf
				0x0A => 'Band', // obf
				0x0B => 'Composer', // obf
				0x0C => 'Lyricist', // obf
				0x0D => 'Recording Location', // obf
				0x0E => 'During Recording', // obf
				0x0F => 'During Performance', // obf
				0x10 => 'Video Screen Capture', // obf
				0x12 => 'Illustration', // obf
				0x13 => 'Band Logotype', // obf
				0x14 => 'Publisher Logotype' // obf
			); // obf
			$v_mjxoc = array_map(function($v_rsedi) { // obf
				return getid3_lib::iconv_fallback('UTF-8', 'UTF-16LE', $v_rsedi); // obf
			}, $v_mjxoc); // obf
		} // obf

		return (isset($v_mjxoc[$v_rmpux]) ? $v_mjxoc[$v_rmpux] : ''); // obf
	} // obf

	/** // obf
	 * @param string $v_moetj // obf
	 * @param int    $v_lclyx // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function HeaderExtensionObjectDataParse(&$v_moetj, &$v_lclyx) { // obf
		// https://web.archive.org/web/20140419205228/http://msdn.microsoft.com/en-us/library/bb643323.aspx // obf

		$v_gtrtc = 0; // obf
		$v_pqcnv = 0; // obf
		$v_egzzg = array(); // obf
		while ($v_pqcnv < strlen($v_moetj)) { // obf
			$v_gtrtc = $v_pqcnv; // obf
			$v_tjwxl = array(); // obf

			$v_tjwxl['guid']                              =                              substr($v_moetj, $v_gtrtc, 16); // obf
			$v_gtrtc += 16; // obf
			$v_tjwxl['guid_text'] = $v_tqdtj->BytestringToGUID($v_tjwxl['guid']); // obf
			$v_tjwxl['guid_name'] = $v_tqdtj->GUIDname($v_tjwxl['guid_text']); // obf

			$v_tjwxl['size']                              = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  8)); // obf
			$v_gtrtc += 8; // obf
			if ($v_tjwxl['size'] <= 0) { // obf
				break; // obf
			} // obf

			switch ($v_tjwxl['guid']) { // obf
				case GETID3_ASF_Extended_Stream_Properties_Object: // obf
					$v_tjwxl['start_time']                        = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  8)); // obf
					$v_gtrtc += 8; // obf
					$v_tjwxl['start_time_unix']                   = $v_tqdtj->FILETIMEtoUNIXtime($v_tjwxl['start_time']); // obf

					$v_tjwxl['end_time']                          = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  8)); // obf
					$v_gtrtc += 8; // obf
					$v_tjwxl['end_time_unix']                     = $v_tqdtj->FILETIMEtoUNIXtime($v_tjwxl['end_time']); // obf

					$v_tjwxl['data_bitrate']                      = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['buffer_size']                       = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['initial_buffer_fullness']           = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['alternate_data_bitrate']            = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['alternate_buffer_size']             = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['alternate_initial_buffer_fullness'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['maximum_object_size']               = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['flags_raw']                         = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
					$v_gtrtc += 4; // obf
					$v_tjwxl['flags']['reliable']                = (bool) $v_tjwxl['flags_raw'] & 0x00000001; // obf
					$v_tjwxl['flags']['seekable']                = (bool) $v_tjwxl['flags_raw'] & 0x00000002; // obf
					$v_tjwxl['flags']['no_cleanpoints']          = (bool) $v_tjwxl['flags_raw'] & 0x00000004; // obf
					$v_tjwxl['flags']['resend_live_cleanpoints'] = (bool) $v_tjwxl['flags_raw'] & 0x00000008; // obf

					$v_tjwxl['stream_number']                     = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					$v_tjwxl['stream_language_id_index']          = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					$v_tjwxl['average_time_per_frame']            = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  8)); // obf
					$v_gtrtc += 8; // obf

					$v_tjwxl['stream_name_count']                 = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					$v_tjwxl['payload_extension_system_count']    = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['stream_name_count']; $v_aecbn++) { // obf
						$v_bihim = array(); // obf

						$v_bihim['language_id_index']             = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf

						$v_bihim['stream_name_length']            = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf

						$v_bihim['stream_name']                   =                              substr($v_moetj, $v_gtrtc,  $v_bihim['stream_name_length']); // obf
						$v_gtrtc += $v_bihim['stream_name_length']; // obf

						$v_tjwxl['stream_names'][$v_aecbn] = $v_bihim; // obf
					} // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['payload_extension_system_count']; $v_aecbn++) { // obf
						$v_wfkix = array(); // obf

						$v_wfkix['extension_system_id']   =                              substr($v_moetj, $v_gtrtc, 16); // obf
						$v_gtrtc += 16; // obf
						$v_wfkix['extension_system_id_text'] = $v_tqdtj->BytestringToGUID($v_wfkix['extension_system_id']); // obf

						$v_wfkix['extension_system_size'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf
						if ($v_wfkix['extension_system_size'] <= 0) { // obf
							break 2; // obf
						} // obf

						$v_wfkix['extension_system_info_length'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
						$v_gtrtc += 4; // obf

						$v_wfkix['extension_system_info'] = substr($v_moetj, $v_gtrtc,  $v_wfkix['extension_system_info_length']); // obf
						$v_gtrtc += $v_wfkix['extension_system_info_length']; // obf

						$v_tjwxl['payload_extension_systems'][$v_aecbn] = $v_wfkix; // obf
					} // obf

					break; // obf

				case GETID3_ASF_Advanced_Mutual_Exclusion_Object: // obf
					$v_tjwxl['exclusion_type']       = substr($v_moetj, $v_gtrtc, 16); // obf
					$v_gtrtc += 16; // obf
					$v_tjwxl['exclusion_type_text']  = $v_tqdtj->BytestringToGUID($v_tjwxl['exclusion_type']); // obf

					$v_tjwxl['stream_numbers_count'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['stream_numbers_count']; $v_aecbn++) { // obf
						$v_tjwxl['stream_numbers'][$v_aecbn] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf
					} // obf

					break; // obf

				case GETID3_ASF_Stream_Prioritization_Object: // obf
					$v_tjwxl['priority_records_count'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['priority_records_count']; $v_aecbn++) { // obf
						$v_vzuwe = array(); // obf

						$v_vzuwe['stream_number'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf

						$v_vzuwe['flags_raw']     = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_vzuwe['flags']['mandatory'] = (bool) $v_vzuwe['flags_raw'] & 0x00000001; // obf

						$v_tjwxl['priority_records'][$v_aecbn] = $v_vzuwe; // obf
					} // obf

					break; // obf

				case GETID3_ASF_Padding_Object: // obf
					// padding, skip it // obf
					break; // obf

				case GETID3_ASF_Metadata_Object: // obf
					$v_tjwxl['description_record_counts'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['description_record_counts']; $v_aecbn++) { // obf
						$v_bzhjl = array(); // obf

						$v_bzhjl['reserved_1']         = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // must be zero // obf
						$v_gtrtc += 2; // obf

						$v_bzhjl['stream_number']      = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf

						$v_bzhjl['name_length']        = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf

						$v_bzhjl['data_type']          = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf
						$v_bzhjl['data_type_text'] = self::metadataLibraryObjectDataTypeLookup($v_bzhjl['data_type']); // obf

						$v_bzhjl['data_length']        = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
						$v_gtrtc += 4; // obf

						$v_bzhjl['name']               =                              substr($v_moetj, $v_gtrtc,  $v_bzhjl['name_length']); // obf
						$v_gtrtc += $v_bzhjl['name_length']; // obf

						$v_bzhjl['data']               =                              substr($v_moetj, $v_gtrtc,  $v_bzhjl['data_length']); // obf
						$v_gtrtc += $v_bzhjl['data_length']; // obf
						switch ($v_bzhjl['data_type']) { // obf
							case 0x0000: // Unicode string // obf
								break; // obf

							case 0x0001: // BYTE array // obf
								// do nothing // obf
								break; // obf

							case 0x0002: // BOOL // obf
								$v_bzhjl['data'] = (bool) getid3_lib::LittleEndian2Int($v_bzhjl['data']); // obf
								break; // obf

							case 0x0003: // DWORD // obf
							case 0x0004: // QWORD // obf
							case 0x0005: // WORD // obf
								$v_bzhjl['data'] = getid3_lib::LittleEndian2Int($v_bzhjl['data']); // obf
								break; // obf

							case 0x0006: // GUID // obf
								$v_bzhjl['data_text'] = $v_tqdtj->BytestringToGUID($v_bzhjl['data']); // obf
								break; // obf
						} // obf

						$v_tjwxl['description_record'][$v_aecbn] = $v_bzhjl; // obf
					} // obf
					break; // obf

				case GETID3_ASF_Language_List_Object: // obf
					$v_tjwxl['language_id_record_counts'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['language_id_record_counts']; $v_aecbn++) { // obf
						$v_qwzff = array(); // obf

						$v_qwzff['language_id_length']         = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  1)); // obf
						$v_gtrtc += 1; // obf

						$v_qwzff['language_id']                =                              substr($v_moetj, $v_gtrtc,  $v_qwzff['language_id_length']); // obf
						$v_gtrtc += $v_qwzff['language_id_length']; // obf

						$v_tjwxl['language_id_record'][$v_aecbn] = $v_qwzff; // obf
					} // obf
					break; // obf

				case GETID3_ASF_Metadata_Library_Object: // obf
					$v_tjwxl['description_records_count'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['description_records_count']; $v_aecbn++) { // obf
						$v_bzhjl = array(); // obf

						$v_bzhjl['language_list_index'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf

						$v_bzhjl['stream_number']       = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf

						$v_bzhjl['name_length']         = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf

						$v_bzhjl['data_type']           = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  2)); // obf
						$v_gtrtc += 2; // obf
						$v_bzhjl['data_type_text'] = self::metadataLibraryObjectDataTypeLookup($v_bzhjl['data_type']); // obf

						$v_bzhjl['data_length']         = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc,  4)); // obf
						$v_gtrtc += 4; // obf

						$v_bzhjl['name']                =                              substr($v_moetj, $v_gtrtc,  $v_bzhjl['name_length']); // obf
						$v_gtrtc += $v_bzhjl['name_length']; // obf

						$v_bzhjl['data']                =                              substr($v_moetj, $v_gtrtc,  $v_bzhjl['data_length']); // obf
						$v_gtrtc += $v_bzhjl['data_length']; // obf

						if (preg_match('#^WM/Picture$#', str_replace("\x00", '', trim($v_bzhjl['name'])))) { // obf
							$v_qezpo = $v_tqdtj->ASF_WMpicture($v_bzhjl['data']); // obf
							foreach ($v_qezpo as $v_rvtqp => $v_qjdey) { // obf
								$v_bzhjl['data'] = $v_qezpo; // obf
							} // obf
							unset($v_qezpo); // obf
						} // obf

						$v_tjwxl['description_record'][$v_aecbn] = $v_bzhjl; // obf
					} // obf
					break; // obf

				case GETID3_ASF_Index_Parameters_Object: // obf
					$v_tjwxl['index_entry_time_interval'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['index_specifiers_count']    = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['index_specifiers_count']; $v_aecbn++) { // obf
						$v_cleuv = array(); // obf

						$v_cleuv['stream_number']   = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf

						$v_cleuv['index_type']      = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_cleuv['index_type_text'] = isset(static::$v_xjuaj[$v_cleuv['index_type']]) // obf
							? static::$v_xjuaj[$v_cleuv['index_type']] // obf
							: 'invalid' // obf
						; // obf

						$v_tjwxl['index_specifiers'][$v_aecbn] = $v_cleuv; // obf
					} // obf

					break; // obf

				case GETID3_ASF_Media_Object_Index_Parameters_Object: // obf
					$v_tjwxl['index_entry_count_interval'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['index_specifiers_count']     = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['index_specifiers_count']; $v_aecbn++) { // obf
						$v_cleuv = array(); // obf

						$v_cleuv['stream_number']   = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf

						$v_cleuv['index_type']      = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_cleuv['index_type_text'] = isset(static::$v_ahubh[$v_cleuv['index_type']]) // obf
							? static::$v_ahubh[$v_cleuv['index_type']] // obf
							: 'invalid' // obf
						; // obf

						$v_tjwxl['index_specifiers'][$v_aecbn] = $v_cleuv; // obf
					} // obf

					break; // obf

				case GETID3_ASF_Timecode_Index_Parameters_Object: // obf
					// 4.11	Timecode Index Parameters Object (mandatory only if TIMECODE index is present in file, 0 or 1) // obf
					// Field name                     Field type   Size (bits) // obf
					// Object ID                      GUID         128             // GUID for the Timecode Index Parameters Object - ASF_Timecode_Index_Parameters_Object // obf
					// Object Size                    QWORD        64              // Specifies the size, in bytes, of the Timecode Index Parameters Object. Valid values are at least 34 bytes. // obf
					// Index Entry Count Interval     DWORD        32              // This value is ignored for the Timecode Index Parameters Object. // obf
					// Index Specifiers Count         WORD         16              // Specifies the number of entries in the Index Specifiers list. Valid values are 1 and greater. // obf
					// Index Specifiers               array of:    varies          // // obf
					// * Stream Number                WORD         16              // Specifies the stream number that the Index Specifiers refer to. Valid values are between 1 and 127. // obf
					// * Index Type                   WORD         16              // Specifies the type of index. Values are defined as follows (1 is not a valid value): // obf
					                                                               // 2 = Nearest Past Media Object - indexes point to the closest data packet containing an entire video frame or the first fragment of a video frame // obf
					                                                               // 3 = Nearest Past Cleanpoint - indexes point to the closest data packet containing an entire video frame (or first fragment of a video frame) that is a key frame. // obf
					                                                               // Nearest Past Media Object is the most common value // obf

					$v_tjwxl['index_entry_count_interval'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 4)); // obf
					$v_gtrtc += 4; // obf

					$v_tjwxl['index_specifiers_count']     = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
					$v_gtrtc += 2; // obf

					for ($v_aecbn = 0; $v_aecbn < $v_tjwxl['index_specifiers_count']; $v_aecbn++) { // obf
						$v_cleuv = array(); // obf

						$v_cleuv['stream_number']   = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf

						$v_cleuv['index_type']      = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 2)); // obf
						$v_gtrtc += 2; // obf
						$v_cleuv['index_type_text'] = isset(static::$v_hxrus[$v_cleuv['index_type']]) // obf
							? static::$v_hxrus[$v_cleuv['index_type']] // obf
							: 'invalid' // obf
						; // obf

						$v_tjwxl['index_specifiers'][$v_aecbn] = $v_cleuv; // obf
					} // obf

					break; // obf

				case GETID3_ASF_Compatibility_Object: // obf
					$v_tjwxl['profile'] = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 1)); // obf
					$v_gtrtc += 1; // obf

					$v_tjwxl['mode']    = getid3_lib::LittleEndian2Int(substr($v_moetj, $v_gtrtc, 1)); // obf
					$v_gtrtc += 1; // obf

					break; // obf

				default: // obf
					$v_lclyx++; // obf
					if ($v_tqdtj->GUIDname($v_tjwxl['guid_text'])) { // obf
						$v_tqdtj->warning('unhandled Header Extension Object GUID "'.$v_tqdtj->GUIDname($v_tjwxl['guid_text']).'" {'.$v_tjwxl['guid_text'].'} at offset '.($v_gtrtc - 16 - 8)); // obf
					} else { // obf
						$v_tqdtj->warning('unknown Header Extension Object GUID {'.$v_tjwxl['guid_text'].'} in at offset '.($v_gtrtc - 16 - 8)); // obf
					} // obf
					break; // obf
			} // obf
			$v_egzzg[] = $v_tjwxl; // obf

			$v_pqcnv += $v_tjwxl['size']; // obf
		} // obf
		return $v_egzzg; // obf
	} // obf

	/** // obf
	 * @param int $v_bsxof // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function metadataLibraryObjectDataTypeLookup($v_bsxof) { // obf
		static $v_mjxoc = array( // obf
			0x0000 => 'Unicode string', // The data consists of a sequence of Unicode characters // obf
			0x0001 => 'BYTE array',     // The type of the data is implementation-specific // obf
			0x0002 => 'BOOL',           // The data is 2 bytes long and should be interpreted as a 16-bit unsigned integer. Only 0x0000 or 0x0001 are permitted values // obf
			0x0003 => 'DWORD',          // The data is 4 bytes long and should be interpreted as a 32-bit unsigned integer // obf
			0x0004 => 'QWORD',          // The data is 8 bytes long and should be interpreted as a 64-bit unsigned integer // obf
			0x0005 => 'WORD',           // The data is 2 bytes long and should be interpreted as a 16-bit unsigned integer // obf
			0x0006 => 'GUID',           // The data is 16 bytes long and should be interpreted as a 128-bit GUID // obf
		); // obf
		return (isset($v_mjxoc[$v_bsxof]) ? $v_mjxoc[$v_bsxof] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param string $v_gzfzd // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function ASF_WMpicture(&$v_gzfzd) { // obf
		//typedef struct _WMPicture{ // obf
		//  LPWSTR  pwszMIMEType; // obf
		//  BYTE  bPictureType; // obf
		//  LPWSTR  pwszDescription; // obf
		//  DWORD  dwDataLen; // obf
		//  BYTE*  pbData; // obf
		//} WM_PICTURE; // obf

		$v_qezpo = array(); // obf

		$v_gtrtc = 0; // obf
		$v_qezpo['image_type_id'] = getid3_lib::LittleEndian2Int(substr($v_gzfzd, $v_gtrtc, 1)); // obf
		$v_gtrtc += 1; // obf
		$v_qezpo['image_type']    = self::WMpictureTypeLookup($v_qezpo['image_type_id']); // obf
		$v_qezpo['image_size']    = getid3_lib::LittleEndian2Int(substr($v_gzfzd, $v_gtrtc, 4)); // obf
		$v_gtrtc += 4; // obf

		$v_qezpo['image_mime'] = ''; // obf
		do { // obf
			$v_khlmr = substr($v_gzfzd, $v_gtrtc, 2); // obf
			$v_gtrtc += 2; // obf
			$v_qezpo['image_mime'] .= $v_khlmr; // obf
		} while ($v_khlmr !== "\x00\x00"); // obf

		$v_qezpo['image_description'] = ''; // obf
		do { // obf
			$v_khlmr = substr($v_gzfzd, $v_gtrtc, 2); // obf
			$v_gtrtc += 2; // obf
			$v_qezpo['image_description'] .= $v_khlmr; // obf
		} while ($v_khlmr !== "\x00\x00"); // obf

		$v_qezpo['dataoffset'] = $v_gtrtc; // obf
		$v_qezpo['data'] = substr($v_gzfzd, $v_gtrtc); // obf

		$v_mzpah = array(); // obf
		$v_qezpo['image_mime'] = ''; // obf
		$v_hsbjy = getid3_lib::GetDataImageSize($v_qezpo['data'], $v_mzpah); // obf
		unset($v_mzpah); // obf
		if (!empty($v_hsbjy)) { // obf
			$v_qezpo['image_mime'] = image_type_to_mime_type($v_hsbjy[2]); // obf
		} // obf
		if (!isset($v_tqdtj->getid3->info['asf']['comments']['picture'])) { // obf
			$v_tqdtj->getid3->info['asf']['comments']['picture'] = array(); // obf
		} // obf
		$v_tqdtj->getid3->info['asf']['comments']['picture'][] = array('data'=>$v_qezpo['data'], 'image_mime'=>$v_qezpo['image_mime']); // obf

		return $v_qezpo; // obf
	} // obf

	/** // obf
	 * Remove terminator 00 00 and convert UTF-16LE to Latin-1. // obf
	 * // obf
	 * @param string $v_dfhyq // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function TrimConvert($v_dfhyq) { // obf
		return trim(getid3_lib::iconv_fallback('UTF-16LE', 'ISO-8859-1', self::TrimTerm($v_dfhyq)), ' '); // obf
	} // obf

	/** // obf
	 * Remove terminator 00 00. // obf
	 * // obf
	 * @param string $v_dfhyq // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function TrimTerm($v_dfhyq) { // obf
		// remove terminator, only if present (it should be, but...) // obf
		if (substr($v_dfhyq, -2) === "\x00\x00") { // obf
			$v_dfhyq = substr($v_dfhyq, 0, -2); // obf
		} // obf
		return $v_dfhyq; // obf
	} // obf

} // obf