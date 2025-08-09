

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio-video.matriska.php                             // // obf
// module for analyzing Matroska containers                    // // obf
// dependencies: NONE                                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf

define('EBML_ID_CHAPTERS',                  0x0043A770); // [10][43][A7][70] -- A system to define basic menus and partition data. For more detailed information, look at the Chapters Explanation. // obf
define('EBML_ID_SEEKHEAD',                  0x014D9B74); // [11][4D][9B][74] -- Contains the position of other level 1 elements. // obf
define('EBML_ID_TAGS',                      0x0254C367); // [12][54][C3][67] -- Element containing elements specific to Tracks/Chapters. A list of valid tags can be found <http://www.matroska.org/technical/specs/tagging/index.html>. // obf
define('EBML_ID_INFO',                      0x0549A966); // [15][49][A9][66] -- Contains miscellaneous general information and statistics on the file. // obf
define('EBML_ID_TRACKS',                    0x0654AE6B); // [16][54][AE][6B] -- A top-level block of information with many tracks described. // obf
define('EBML_ID_SEGMENT',                   0x08538067); // [18][53][80][67] -- This element contains all other top-level (level 1) elements. Typically a Matroska file is composed of 1 segment. // obf
define('EBML_ID_ATTACHMENTS',               0x0941A469); // [19][41][A4][69] -- Contain attached files. // obf
define('EBML_ID_EBML',                      0x0A45DFA3); // [1A][45][DF][A3] -- Set the EBML characteristics of the data to follow. Each EBML document has to start with this. // obf
define('EBML_ID_CUES',                      0x0C53BB6B); // [1C][53][BB][6B] -- A top-level element to speed seeking access. All entries are local to the segment. // obf
define('EBML_ID_CLUSTER',                   0x0F43B675); // [1F][43][B6][75] -- The lower level element containing the (monolithic) Block structure. // obf
define('EBML_ID_LANGUAGE',                    0x02B59C); //     [22][B5][9C] -- Specifies the language of the track in the Matroska languages form. // obf
define('EBML_ID_TRACKTIMECODESCALE',          0x03314F); //     [23][31][4F] -- The scale to apply on this track to work at normal speed in relation with other tracks (mostly used to adjust video speed when the audio length differs). // obf
define('EBML_ID_DEFAULTDURATION',             0x03E383); //     [23][E3][83] -- Number of nanoseconds (i.e. not scaled) per frame. // obf
define('EBML_ID_CODECNAME',                   0x058688); //     [25][86][88] -- A human-readable string specifying the codec. // obf
define('EBML_ID_CODECDOWNLOADURL',            0x06B240); //     [26][B2][40] -- A URL to download about the codec used. // obf
define('EBML_ID_TIMECODESCALE',               0x0AD7B1); //     [2A][D7][B1] -- Timecode scale in nanoseconds (1.000.000 means all timecodes in the segment are expressed in milliseconds). // obf
define('EBML_ID_COLOURSPACE',                 0x0EB524); //     [2E][B5][24] -- Same value as in AVI (32 bits). // obf
define('EBML_ID_GAMMAVALUE',                  0x0FB523); //     [2F][B5][23] -- Gamma Value. // obf
define('EBML_ID_CODECSETTINGS',               0x1A9697); //     [3A][96][97] -- A string describing the encoding setting used. // obf
define('EBML_ID_CODECINFOURL',                0x1B4040); //     [3B][40][40] -- A URL to find information about the codec used. // obf
define('EBML_ID_PREVFILENAME',                0x1C83AB); //     [3C][83][AB] -- An escaped filename corresponding to the previous segment. // obf
define('EBML_ID_PREVUID',                     0x1CB923); //     [3C][B9][23] -- A unique ID to identify the previous chained segment (128 bits). // obf
define('EBML_ID_NEXTFILENAME',                0x1E83BB); //     [3E][83][BB] -- An escaped filename corresponding to the next segment. // obf
define('EBML_ID_NEXTUID',                     0x1EB923); //     [3E][B9][23] -- A unique ID to identify the next chained segment (128 bits). // obf
define('EBML_ID_CONTENTCOMPALGO',               0x0254); //         [42][54] -- The compression algorithm used. Algorithms that have been specified so far are: // obf
define('EBML_ID_CONTENTCOMPSETTINGS',           0x0255); //         [42][55] -- Settings that might be needed by the decompressor. For Header Stripping (ContentCompAlgo=3), the bytes that were removed from the beggining of each frames of the track. // obf
define('EBML_ID_DOCTYPE',                       0x0282); //         [42][82] -- A string that describes the type of document that follows this EBML header ('matroska' in our case). // obf
define('EBML_ID_DOCTYPEREADVERSION',            0x0285); //         [42][85] -- The minimum DocType version an interpreter has to support to read this file. // obf
define('EBML_ID_EBMLVERSION',                   0x0286); //         [42][86] -- The version of EBML parser used to create the file. // obf
define('EBML_ID_DOCTYPEVERSION',                0x0287); //         [42][87] -- The version of DocType interpreter used to create the file. // obf
define('EBML_ID_EBMLMAXIDLENGTH',               0x02F2); //         [42][F2] -- The maximum length of the IDs you'll find in this file (4 or less in Matroska). // obf
define('EBML_ID_EBMLMAXSIZELENGTH',             0x02F3); //         [42][F3] -- The maximum length of the sizes you'll find in this file (8 or less in Matroska). This does not override the element size indicated at the beginning of an element. Elements that have an indicated size which is larger than what is allowed by EBMLMaxSizeLength shall be considered invalid. // obf
define('EBML_ID_EBMLREADVERSION',               0x02F7); //         [42][F7] -- The minimum EBML version a parser has to support to read this file. // obf
define('EBML_ID_CHAPLANGUAGE',                  0x037C); //         [43][7C] -- The languages corresponding to the string, in the bibliographic ISO-639-2 form. // obf
define('EBML_ID_CHAPCOUNTRY',                   0x037E); //         [43][7E] -- The countries corresponding to the string, same 2 octets as in Internet domains. // obf
define('EBML_ID_SEGMENTFAMILY',                 0x0444); //         [44][44] -- A randomly generated unique ID that all segments related to each other must use (128 bits). // obf
define('EBML_ID_DATEUTC',                       0x0461); //         [44][61] -- Date of the origin of timecode (value 0), i.e. production date. // obf
define('EBML_ID_TAGLANGUAGE',                   0x047A); //         [44][7A] -- Specifies the language of the tag specified, in the Matroska languages form. // obf
define('EBML_ID_TAGDEFAULT',                    0x0484); //         [44][84] -- Indication to know if this is the default/original language to use for the given tag. // obf
define('EBML_ID_TAGBINARY',                     0x0485); //         [44][85] -- The values of the Tag if it is binary. Note that this cannot be used in the same SimpleTag as TagString. // obf
define('EBML_ID_TAGSTRING',                     0x0487); //         [44][87] -- The value of the Tag. // obf
define('EBML_ID_DURATION',                      0x0489); //         [44][89] -- Duration of the segment (based on TimecodeScale). // obf
define('EBML_ID_CHAPPROCESSPRIVATE',            0x050D); //         [45][0D] -- Some optional data attached to the ChapProcessCodecID information. For ChapProcessCodecID = 1, it is the "DVD level" equivalent. // obf
define('EBML_ID_CHAPTERFLAGENABLED',            0x0598); //         [45][98] -- Specify wether the chapter is enabled. It can be enabled/disabled by a Control Track. When disabled, the movie should skip all the content between the TimeStart and TimeEnd of this chapter. // obf
define('EBML_ID_TAGNAME',                       0x05A3); //         [45][A3] -- The name of the Tag that is going to be stored. // obf
define('EBML_ID_EDITIONENTRY',                  0x05B9); //         [45][B9] -- Contains all information about a segment edition. // obf
define('EBML_ID_EDITIONUID',                    0x05BC); //         [45][BC] -- A unique ID to identify the edition. It's useful for tagging an edition. // obf
define('EBML_ID_EDITIONFLAGHIDDEN',             0x05BD); //         [45][BD] -- If an edition is hidden (1), it should not be available to the user interface (but still to Control Tracks). // obf
define('EBML_ID_EDITIONFLAGDEFAULT',            0x05DB); //         [45][DB] -- If a flag is set (1) the edition should be used as the default one. // obf
define('EBML_ID_EDITIONFLAGORDERED',            0x05DD); //         [45][DD] -- Specify if the chapters can be defined multiple times and the order to play them is enforced. // obf
define('EBML_ID_FILEDATA',                      0x065C); //         [46][5C] -- The data of the file. // obf
define('EBML_ID_FILEMIMETYPE',                  0x0660); //         [46][60] -- MIME type of the file. // obf
define('EBML_ID_FILENAME',                      0x066E); //         [46][6E] -- Filename of the attached file. // obf
define('EBML_ID_FILEREFERRAL',                  0x0675); //         [46][75] -- A binary value that a track/codec can refer to when the attachment is needed. // obf
define('EBML_ID_FILEDESCRIPTION',               0x067E); //         [46][7E] -- A human-friendly name for the attached file. // obf
define('EBML_ID_FILEUID',                       0x06AE); //         [46][AE] -- Unique ID representing the file, as random as possible. // obf
define('EBML_ID_CONTENTENCALGO',                0x07E1); //         [47][E1] -- The encryption algorithm used. The value '0' means that the contents have not been encrypted but only signed. Predefined values: // obf
define('EBML_ID_CONTENTENCKEYID',               0x07E2); //         [47][E2] -- For public key algorithms this is the ID of the public key the data was encrypted with. // obf
define('EBML_ID_CONTENTSIGNATURE',              0x07E3); //         [47][E3] -- A cryptographic signature of the contents. // obf
define('EBML_ID_CONTENTSIGKEYID',               0x07E4); //         [47][E4] -- This is the ID of the private key the data was signed with. // obf
define('EBML_ID_CONTENTSIGALGO',                0x07E5); //         [47][E5] -- The algorithm used for the signature. A value of '0' means that the contents have not been signed but only encrypted. Predefined values: // obf
define('EBML_ID_CONTENTSIGHASHALGO',            0x07E6); //         [47][E6] -- The hash algorithm used for the signature. A value of '0' means that the contents have not been signed but only encrypted. Predefined values: // obf
define('EBML_ID_MUXINGAPP',                     0x0D80); //         [4D][80] -- Muxing application or library ("libmatroska-0.4.3"). // obf
define('EBML_ID_SEEK',                          0x0DBB); //         [4D][BB] -- Contains a single seek entry to an EBML element. // obf
define('EBML_ID_CONTENTENCODINGORDER',          0x1031); //         [50][31] -- Tells when this modification was used during encoding/muxing starting with 0 and counting upwards. The decoder/demuxer has to start with the highest order number it finds and work its way down. This value has to be unique over all ContentEncodingOrder elements in the segment. // obf
define('EBML_ID_CONTENTENCODINGSCOPE',          0x1032); //         [50][32] -- A bit field that describes which elements have been modified in this way. Values (big endian) can be OR'ed. Possible values: // obf
define('EBML_ID_CONTENTENCODINGTYPE',           0x1033); //         [50][33] -- A value describing what kind of transformation has been done. Possible values: // obf
define('EBML_ID_CONTENTCOMPRESSION',            0x1034); //         [50][34] -- Settings describing the compression used. Must be present if the value of ContentEncodingType is 0 and absent otherwise. Each block must be decompressable even if no previous block is available in order not to prevent seeking. // obf
define('EBML_ID_CONTENTENCRYPTION',             0x1035); //         [50][35] -- Settings describing the encryption used. Must be present if the value of ContentEncodingType is 1 and absent otherwise. // obf
define('EBML_ID_CUEREFNUMBER',                  0x135F); //         [53][5F] -- Number of the referenced Block of Track X in the specified Cluster. // obf
define('EBML_ID_NAME',                          0x136E); //         [53][6E] -- A human-readable track name. // obf
define('EBML_ID_CUEBLOCKNUMBER',                0x1378); //         [53][78] -- Number of the Block in the specified Cluster. // obf
define('EBML_ID_TRACKOFFSET',                   0x137F); //         [53][7F] -- A value to add to the Block's Timecode. This can be used to adjust the playback offset of a track. // obf
define('EBML_ID_SEEKID',                        0x13AB); //         [53][AB] -- The binary ID corresponding to the element name. // obf
define('EBML_ID_SEEKPOSITION',                  0x13AC); //         [53][AC] -- The position of the element in the segment in octets (0 = first level 1 element). // obf
define('EBML_ID_STEREOMODE',                    0x13B8); //         [53][B8] -- Stereo-3D video mode. // obf
define('EBML_ID_OLDSTEREOMODE',                 0x13B9); //         [53][B9] -- Bogus StereoMode value used in old versions of libmatroska. DO NOT USE. (0: mono, 1: right eye, 2: left eye, 3: both eyes). // obf
define('EBML_ID_PIXELCROPBOTTOM',               0x14AA); //         [54][AA] -- The number of video pixels to remove at the bottom of the image (for HDTV content). // obf
define('EBML_ID_DISPLAYWIDTH',                  0x14B0); //         [54][B0] -- Width of the video frames to display. // obf
define('EBML_ID_DISPLAYUNIT',                   0x14B2); //         [54][B2] -- Type of the unit for DisplayWidth/Height (0: pixels, 1: centimeters, 2: inches). // obf
define('EBML_ID_ASPECTRATIOTYPE',               0x14B3); //         [54][B3] -- Specify the possible modifications to the aspect ratio (0: free resizing, 1: keep aspect ratio, 2: fixed). // obf
define('EBML_ID_DISPLAYHEIGHT',                 0x14BA); //         [54][BA] -- Height of the video frames to display. // obf
define('EBML_ID_PIXELCROPTOP',                  0x14BB); //         [54][BB] -- The number of video pixels to remove at the top of the image. // obf
define('EBML_ID_PIXELCROPLEFT',                 0x14CC); //         [54][CC] -- The number of video pixels to remove on the left of the image. // obf
define('EBML_ID_PIXELCROPRIGHT',                0x14DD); //         [54][DD] -- The number of video pixels to remove on the right of the image. // obf
define('EBML_ID_FLAGFORCED',                    0x15AA); //         [55][AA] -- Set if that track MUST be used during playback. There can be many forced track for a kind (audio, video or subs), the player should select the one which language matches the user preference or the default + forced track. Overlay MAY happen between a forced and non-forced track of the same kind. // obf
define('EBML_ID_MAXBLOCKADDITIONID',            0x15EE); //         [55][EE] -- The maximum value of BlockAddID. A value 0 means there is no BlockAdditions for this track. // obf
define('EBML_ID_WRITINGAPP',                    0x1741); //         [57][41] -- Writing application ("mkvmerge-0.3.3"). // obf
define('EBML_ID_CLUSTERSILENTTRACKS',           0x1854); //         [58][54] -- The list of tracks that are not used in that part of the stream. It is useful when using overlay tracks on seeking. Then you should decide what track to use. // obf
define('EBML_ID_CLUSTERSILENTTRACKNUMBER',      0x18D7); //         [58][D7] -- One of the track number that are not used from now on in the stream. It could change later if not specified as silent in a further Cluster. // obf
define('EBML_ID_ATTACHEDFILE',                  0x21A7); //         [61][A7] -- An attached file. // obf
define('EBML_ID_CONTENTENCODING',               0x2240); //         [62][40] -- Settings for one content encoding like compression or encryption. // obf
define('EBML_ID_BITDEPTH',                      0x2264); //         [62][64] -- Bits per sample, mostly used for PCM. // obf
define('EBML_ID_CODECPRIVATE',                  0x23A2); //         [63][A2] -- Private data only known to the codec. // obf
define('EBML_ID_TARGETS',                       0x23C0); //         [63][C0] -- Contain all UIDs where the specified meta data apply. It is void to describe everything in the segment. // obf
define('EBML_ID_CHAPTERPHYSICALEQUIV',          0x23C3); //         [63][C3] -- Specify the physical equivalent of this ChapterAtom like "DVD" (60) or "SIDE" (50), see complete list of values. // obf
define('EBML_ID_TAGCHAPTERUID',                 0x23C4); //         [63][C4] -- A unique ID to identify the Chapter(s) the tags belong to. If the value is 0 at this level, the tags apply to all chapters in the Segment. // obf
define('EBML_ID_TAGTRACKUID',                   0x23C5); //         [63][C5] -- A unique ID to identify the Track(s) the tags belong to. If the value is 0 at this level, the tags apply to all tracks in the Segment. // obf
define('EBML_ID_TAGATTACHMENTUID',              0x23C6); //         [63][C6] -- A unique ID to identify the Attachment(s) the tags belong to. If the value is 0 at this level, the tags apply to all the attachments in the Segment. // obf
define('EBML_ID_TAGEDITIONUID',                 0x23C9); //         [63][C9] -- A unique ID to identify the EditionEntry(s) the tags belong to. If the value is 0 at this level, the tags apply to all editions in the Segment. // obf
define('EBML_ID_TARGETTYPE',                    0x23CA); //         [63][CA] -- An informational string that can be used to display the logical level of the target like "ALBUM", "TRACK", "MOVIE", "CHAPTER", etc (see TargetType). // obf
define('EBML_ID_TRACKTRANSLATE',                0x2624); //         [66][24] -- The track identification for the given Chapter Codec. // obf
define('EBML_ID_TRACKTRANSLATETRACKID',         0x26A5); //         [66][A5] -- The binary value used to represent this track in the chapter codec data. The format depends on the ChapProcessCodecID used. // obf
define('EBML_ID_TRACKTRANSLATECODEC',           0x26BF); //         [66][BF] -- The chapter codec using this ID (0: Matroska Script, 1: DVD-menu). // obf
define('EBML_ID_TRACKTRANSLATEEDITIONUID',      0x26FC); //         [66][FC] -- Specify an edition UID on which this translation applies. When not specified, it means for all editions found in the segment. // obf
define('EBML_ID_SIMPLETAG',                     0x27C8); //         [67][C8] -- Contains general information about the target. // obf
define('EBML_ID_TARGETTYPEVALUE',               0x28CA); //         [68][CA] -- A number to indicate the logical level of the target (see TargetType). // obf
define('EBML_ID_CHAPPROCESSCOMMAND',            0x2911); //         [69][11] -- Contains all the commands associated to the Atom. // obf
define('EBML_ID_CHAPPROCESSTIME',               0x2922); //         [69][22] -- Defines when the process command should be handled (0: during the whole chapter, 1: before starting playback, 2: after playback of the chapter). // obf
define('EBML_ID_CHAPTERTRANSLATE',              0x2924); //         [69][24] -- A tuple of corresponding ID used by chapter codecs to represent this segment. // obf
define('EBML_ID_CHAPPROCESSDATA',               0x2933); //         [69][33] -- Contains the command information. The data should be interpreted depending on the ChapProcessCodecID value. For ChapProcessCodecID = 1, the data correspond to the binary DVD cell pre/post commands. // obf
define('EBML_ID_CHAPPROCESS',                   0x2944); //         [69][44] -- Contains all the commands associated to the Atom. // obf
define('EBML_ID_CHAPPROCESSCODECID',            0x2955); //         [69][55] -- Contains the type of the codec used for the processing. A value of 0 means native Matroska processing (to be defined), a value of 1 means the DVD command set is used. More codec IDs can be added later. // obf
define('EBML_ID_CHAPTERTRANSLATEID',            0x29A5); //         [69][A5] -- The binary value used to represent this segment in the chapter codec data. The format depends on the ChapProcessCodecID used. // obf
define('EBML_ID_CHAPTERTRANSLATECODEC',         0x29BF); //         [69][BF] -- The chapter codec using this ID (0: Matroska Script, 1: DVD-menu). // obf
define('EBML_ID_CHAPTERTRANSLATEEDITIONUID',    0x29FC); //         [69][FC] -- Specify an edition UID on which this correspondance applies. When not specified, it means for all editions found in the segment. // obf
define('EBML_ID_CONTENTENCODINGS',              0x2D80); //         [6D][80] -- Settings for several content encoding mechanisms like compression or encryption. // obf
define('EBML_ID_MINCACHE',                      0x2DE7); //         [6D][E7] -- The minimum number of frames a player should be able to cache during playback. If set to 0, the reference pseudo-cache system is not used. // obf
define('EBML_ID_MAXCACHE',                      0x2DF8); //         [6D][F8] -- The maximum cache size required to store referenced frames in and the current frame. 0 means no cache is needed. // obf
define('EBML_ID_CHAPTERSEGMENTUID',             0x2E67); //         [6E][67] -- A segment to play in place of this chapter. Edition ChapterSegmentEditionUID should be used for this segment, otherwise no edition is used. // obf
define('EBML_ID_CHAPTERSEGMENTEDITIONUID',      0x2EBC); //         [6E][BC] -- The edition to play from the segment linked in ChapterSegmentUID. // obf
define('EBML_ID_TRACKOVERLAY',                  0x2FAB); //         [6F][AB] -- Specify that this track is an overlay track for the Track specified (in the u-integer). That means when this track has a gap (see SilentTracks) the overlay track should be used instead. The order of multiple TrackOverlay matters, the first one is the one that should be used. If not found it should be the second, etc. // obf
define('EBML_ID_TAG',                           0x3373); //         [73][73] -- Element containing elements specific to Tracks/Chapters. // obf
define('EBML_ID_SEGMENTFILENAME',               0x3384); //         [73][84] -- A filename corresponding to this segment. // obf
define('EBML_ID_SEGMENTUID',                    0x33A4); //         [73][A4] -- A randomly generated unique ID to identify the current segment between many others (128 bits). // obf
define('EBML_ID_CHAPTERUID',                    0x33C4); //         [73][C4] -- A unique ID to identify the Chapter. // obf
define('EBML_ID_TRACKUID',                      0x33C5); //         [73][C5] -- A unique ID to identify the Track. This should be kept the same when making a direct stream copy of the Track to another file. // obf
define('EBML_ID_ATTACHMENTLINK',                0x3446); //         [74][46] -- The UID of an attachment that is used by this codec. // obf
define('EBML_ID_CLUSTERBLOCKADDITIONS',         0x35A1); //         [75][A1] -- Contain additional blocks to complete the main one. An EBML parser that has no knowledge of the Block structure could still see and use/skip these data. // obf
define('EBML_ID_CHANNELPOSITIONS',              0x347B); //         [7D][7B] -- Table of horizontal angles for each successive channel, see appendix. // obf
define('EBML_ID_OUTPUTSAMPLINGFREQUENCY',       0x38B5); //         [78][B5] -- Real output sampling frequency in Hz (used for SBR techniques). // obf
define('EBML_ID_TITLE',                         0x3BA9); //         [7B][A9] -- General name of the segment. // obf
define('EBML_ID_CHAPTERDISPLAY',                  0x00); //             [80] -- Contains all possible strings to use for the chapter display. // obf
define('EBML_ID_TRACKTYPE',                       0x03); //             [83] -- A set of track types coded on 8 bits (1: video, 2: audio, 3: complex, 0x10: logo, 0x11: subtitle, 0x12: buttons, 0x20: control). // obf
define('EBML_ID_CHAPSTRING',                      0x05); //             [85] -- Contains the string to use as the chapter atom. // obf
define('EBML_ID_CODECID',                         0x06); //             [86] -- An ID corresponding to the codec, see the codec page for more info. // obf
define('EBML_ID_FLAGDEFAULT',                     0x08); //             [88] -- Set if that track (audio, video or subs) SHOULD be used if no language found matches the user preference. // obf
define('EBML_ID_CHAPTERTRACKNUMBER',              0x09); //             [89] -- UID of the Track to apply this chapter too. In the absense of a control track, choosing this chapter will select the listed Tracks and deselect unlisted tracks. Absense of this element indicates that the Chapter should be applied to any currently used Tracks. // obf
define('EBML_ID_CLUSTERSLICES',                   0x0E); //             [8E] -- Contains slices description. // obf
define('EBML_ID_CHAPTERTRACK',                    0x0F); //             [8F] -- List of tracks on which the chapter applies. If this element is not present, all tracks apply // obf
define('EBML_ID_CHAPTERTIMESTART',                0x11); //             [91] -- Timecode of the start of Chapter (not scaled). // obf
define('EBML_ID_CHAPTERTIMEEND',                  0x12); //             [92] -- Timecode of the end of Chapter (timecode excluded, not scaled). // obf
define('EBML_ID_CUEREFTIME',                      0x16); //             [96] -- Timecode of the referenced Block. // obf
define('EBML_ID_CUEREFCLUSTER',                   0x17); //             [97] -- Position of the Cluster containing the referenced Block. // obf
define('EBML_ID_CHAPTERFLAGHIDDEN',               0x18); //             [98] -- If a chapter is hidden (1), it should not be available to the user interface (but still to Control Tracks). // obf
define('EBML_ID_FLAGINTERLACED',                  0x1A); //             [9A] -- Set if the video is interlaced. // obf
define('EBML_ID_CLUSTERBLOCKDURATION',            0x1B); //             [9B] -- The duration of the Block (based on TimecodeScale). This element is mandatory when DefaultDuration is set for the track. When not written and with no DefaultDuration, the value is assumed to be the difference between the timecode of this Block and the timecode of the next Block in "display" order (not coding order). This element can be useful at the end of a Track (as there is not other Block available), or when there is a break in a track like for subtitle tracks. // obf
define('EBML_ID_FLAGLACING',                      0x1C); //             [9C] -- Set if the track may contain blocks using lacing. // obf
define('EBML_ID_CHANNELS',                        0x1F); //             [9F] -- Numbers of channels in the track. // obf
define('EBML_ID_CLUSTERBLOCKGROUP',               0x20); //             [A0] -- Basic container of information containing a single Block or BlockVirtual, and information specific to that Block/VirtualBlock. // obf
define('EBML_ID_CLUSTERBLOCK',                    0x21); //             [A1] -- Block containing the actual data to be rendered and a timecode relative to the Cluster Timecode. // obf
define('EBML_ID_CLUSTERBLOCKVIRTUAL',             0x22); //             [A2] -- A Block with no data. It must be stored in the stream at the place the real Block should be in display order. // obf
define('EBML_ID_CLUSTERSIMPLEBLOCK',              0x23); //             [A3] -- Similar to Block but without all the extra information, mostly used to reduced overhead when no extra feature is needed. // obf
define('EBML_ID_CLUSTERCODECSTATE',               0x24); //             [A4] -- The new codec state to use. Data interpretation is private to the codec. This information should always be referenced by a seek entry. // obf
define('EBML_ID_CLUSTERBLOCKADDITIONAL',          0x25); //             [A5] -- Interpreted by the codec as it wishes (using the BlockAddID). // obf
define('EBML_ID_CLUSTERBLOCKMORE',                0x26); //             [A6] -- Contain the BlockAdditional and some parameters. // obf
define('EBML_ID_CLUSTERPOSITION',                 0x27); //             [A7] -- Position of the Cluster in the segment (0 in live broadcast streams). It might help to resynchronise offset on damaged streams. // obf
define('EBML_ID_CODECDECODEALL',                  0x2A); //             [AA] -- The codec can decode potentially damaged data. // obf
define('EBML_ID_CLUSTERPREVSIZE',                 0x2B); //             [AB] -- Size of the previous Cluster, in octets. Can be useful for backward playing. // obf
define('EBML_ID_TRACKENTRY',                      0x2E); //             [AE] -- Describes a track with all elements. // obf
define('EBML_ID_CLUSTERENCRYPTEDBLOCK',           0x2F); //             [AF] -- Similar to SimpleBlock but the data inside the Block are Transformed (encrypt and/or signed). // obf
define('EBML_ID_PIXELWIDTH',                      0x30); //             [B0] -- Width of the encoded video frames in pixels. // obf
define('EBML_ID_CUETIME',                         0x33); //             [B3] -- Absolute timecode according to the segment time base. // obf
define('EBML_ID_SAMPLINGFREQUENCY',               0x35); //             [B5] -- Sampling frequency in Hz. // obf
define('EBML_ID_CHAPTERATOM',                     0x36); //             [B6] -- Contains the atom information to use as the chapter atom (apply to all tracks). // obf
define('EBML_ID_CUETRACKPOSITIONS',               0x37); //             [B7] -- Contain positions for different tracks corresponding to the timecode. // obf
define('EBML_ID_FLAGENABLED',                     0x39); //             [B9] -- Set if the track is used. // obf
define('EBML_ID_PIXELHEIGHT',                     0x3A); //             [BA] -- Height of the encoded video frames in pixels. // obf
define('EBML_ID_CUEPOINT',                        0x3B); //             [BB] -- Contains all information relative to a seek point in the segment. // obf
define('EBML_ID_CRC32',                           0x3F); //             [BF] -- The CRC is computed on all the data of the Master element it's in, regardless of its position. It's recommended to put the CRC value at the beggining of the Master element for easier reading. All level 1 elements should include a CRC-32. // obf
define('EBML_ID_CLUSTERBLOCKADDITIONID',          0x4B); //             [CB] -- The ID of the BlockAdditional element (0 is the main Block). // obf
define('EBML_ID_CLUSTERLACENUMBER',               0x4C); //             [CC] -- The reverse number of the frame in the lace (0 is the last frame, 1 is the next to last, etc). While there are a few files in the wild with this element, it is no longer in use and has been deprecated. Being able to interpret this element is not required for playback. // obf
define('EBML_ID_CLUSTERFRAMENUMBER',              0x4D); //             [CD] -- The number of the frame to generate from this lace with this delay (allow you to generate many frames from the same Block/Frame). // obf
define('EBML_ID_CLUSTERDELAY',                    0x4E); //             [CE] -- The (scaled) delay to apply to the element. // obf
define('EBML_ID_CLUSTERDURATION',                 0x4F); //             [CF] -- The (scaled) duration to apply to the element. // obf
define('EBML_ID_TRACKNUMBER',                     0x57); //             [D7] -- The track number as used in the Block Header (using more than 127 tracks is not encouraged, though the design allows an unlimited number). // obf
define('EBML_ID_CUEREFERENCE',                    0x5B); //             [DB] -- The Clusters containing the required referenced Blocks. // obf
define('EBML_ID_VIDEO',                           0x60); //             [E0] -- Video settings. // obf
define('EBML_ID_AUDIO',                           0x61); //             [E1] -- Audio settings. // obf
define('EBML_ID_CLUSTERTIMESLICE',                0x68); //             [E8] -- Contains extra time information about the data contained in the Block. While there are a few files in the wild with this element, it is no longer in use and has been deprecated. Being able to interpret this element is not required for playback. // obf
define('EBML_ID_CUECODECSTATE',                   0x6A); //             [EA] -- The position of the Codec State corresponding to this Cue element. 0 means that the data is taken from the initial Track Entry. // obf
define('EBML_ID_CUEREFCODECSTATE',                0x6B); //             [EB] -- The position of the Codec State corresponding to this referenced element. 0 means that the data is taken from the initial Track Entry. // obf
define('EBML_ID_VOID',                            0x6C); //             [EC] -- Used to void damaged data, to avoid unexpected behaviors when using damaged data. The content is discarded. Also used to reserve space in a sub-element for later use. // obf
define('EBML_ID_CLUSTERTIMECODE',                 0x67); //             [E7] -- Absolute timecode of the cluster (based on TimecodeScale). // obf
define('EBML_ID_CLUSTERBLOCKADDID',               0x6E); //             [EE] -- An ID to identify the BlockAdditional level. // obf
define('EBML_ID_CUECLUSTERPOSITION',              0x71); //             [F1] -- The position of the Cluster containing the required Block. // obf
define('EBML_ID_CUETRACK',                        0x77); //             [F7] -- The track for which a position is given. // obf
define('EBML_ID_CLUSTERREFERENCEPRIORITY',        0x7A); //             [FA] -- This frame is referenced and has the specified cache priority. In cache only a frame of the same or higher priority can replace this frame. A value of 0 means the frame is not referenced. // obf
define('EBML_ID_CLUSTERREFERENCEBLOCK',           0x7B); //             [FB] -- Timecode of another frame used as a reference (ie: B or P frame). The timecode is relative to the block it's attached to. // obf
define('EBML_ID_CLUSTERREFERENCEVIRTUAL',         0x7D); //             [FD] -- Relative position of the data that should be in position of the virtual block. // obf


/** // obf
* @tutorial http://www.matroska.org/technical/specs/index.html // obf
* // obf
* @todo Rewrite EBML parser to reduce it's size and honor default element values // obf
* @todo After rewrite implement stream size calculation, that will provide additional useful info and enable AAC/FLAC audio bitrate detection // obf
*/ // obf
class getid3_matroska extends getid3_handler // obf
{ // obf
	/** // obf
	 * If true, do not return information about CLUSTER chunks, since there's a lot of them // obf
	 * and they're not usually useful [default: TRUE]. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_uwpsk    = true; // obf

	/** // obf
	 * True to parse the whole file, not only header [default: FALSE]. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_haoop = false; // obf

	/* // obf
	 * Private parser settings/placeholders. // obf
	 */ // obf
	private $v_ocghc        = ''; // obf
	private $v_tvmkz = 0; // obf
	private $v_uhwrk = 0; // obf
	private $v_njvvp    = 0; // obf
	private $v_fcpph = array(EBML_ID_CRC32, EBML_ID_VOID); // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() // obf
	{ // obf
		$v_xxacd = &$v_yfska->getid3->info; // obf

		// parse container // obf
		try { // obf
			$v_yfska->parseEBML($v_xxacd); // obf
		} catch (Exception $v_fcnmu) { // obf
			$v_yfska->error('EBML parser: '.$v_fcnmu->getMessage()); // obf
		} // obf

		// calculate playtime // obf
		if (isset($v_xxacd['matroska']['info']) && is_array($v_xxacd['matroska']['info'])) { // obf
			foreach ($v_xxacd['matroska']['info'] as $v_jzyzb => $v_tiqia) { // obf
				if (isset($v_tiqia['Duration'])) { // obf
					// TimecodeScale is how many nanoseconds each Duration unit is // obf
					$v_xxacd['playtime_seconds'] = $v_tiqia['Duration'] * ((isset($v_tiqia['TimecodeScale']) ? $v_tiqia['TimecodeScale'] : 1000000) / 1000000000); // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		// extract tags // obf
		if (isset($v_xxacd['matroska']['tags']) && is_array($v_xxacd['matroska']['tags'])) { // obf
			foreach ($v_xxacd['matroska']['tags'] as $v_jzyzb => $v_tiqia) { // obf
				$v_yfska->ExtractCommentsSimpleTag($v_tiqia); // obf
			} // obf
		} // obf

		// process tracks // obf
		if (isset($v_xxacd['matroska']['tracks']['tracks']) && is_array($v_xxacd['matroska']['tracks']['tracks'])) { // obf
			foreach ($v_xxacd['matroska']['tracks']['tracks'] as $v_jzyzb => $v_ogggx) { // obf

				$v_rudhd = array(); // obf
				$v_rudhd['dataformat'] = self::CodecIDtoCommonName($v_ogggx['CodecID']); // obf
				$v_rudhd['default'] = (isset($v_ogggx['FlagDefault']) ? $v_ogggx['FlagDefault'] : true); // obf
				if (isset($v_ogggx['Name'])) { $v_rudhd['name'] = $v_ogggx['Name']; } // obf

				switch ($v_ogggx['TrackType']) { // obf

					case 1: // Video // obf
						$v_rudhd['resolution_x'] = $v_ogggx['PixelWidth']; // obf
						$v_rudhd['resolution_y'] = $v_ogggx['PixelHeight']; // obf
						$v_rudhd['display_unit'] = self::displayUnit(isset($v_ogggx['DisplayUnit']) ? $v_ogggx['DisplayUnit'] : 0); // obf
						$v_rudhd['display_x']    = (isset($v_ogggx['DisplayWidth']) ? $v_ogggx['DisplayWidth'] : $v_ogggx['PixelWidth']); // obf
						$v_rudhd['display_y']    = (isset($v_ogggx['DisplayHeight']) ? $v_ogggx['DisplayHeight'] : $v_ogggx['PixelHeight']); // obf

						if (isset($v_ogggx['PixelCropBottom']))  { $v_rudhd['crop_bottom'] = $v_ogggx['PixelCropBottom']; } // obf
						if (isset($v_ogggx['PixelCropTop']))     { $v_rudhd['crop_top']    = $v_ogggx['PixelCropTop']; } // obf
						if (isset($v_ogggx['PixelCropLeft']))    { $v_rudhd['crop_left']   = $v_ogggx['PixelCropLeft']; } // obf
						if (isset($v_ogggx['PixelCropRight']))   { $v_rudhd['crop_right']  = $v_ogggx['PixelCropRight']; } // obf
						if (!empty($v_ogggx['DefaultDuration'])) { $v_rudhd['frame_rate']  = round(1000000000 / $v_ogggx['DefaultDuration'], 3); } // obf
						if (isset($v_ogggx['CodecName']))        { $v_rudhd['codec']       = $v_ogggx['CodecName']; } // obf

						switch ($v_ogggx['CodecID']) { // obf
							case 'V_MS/VFW/FOURCC': // obf
								getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio-video.riff.php', __FILE__, true); // obf

								$v_dukve = getid3_riff::ParseBITMAPINFOHEADER($v_ogggx['CodecPrivate']); // obf
								$v_rudhd['codec'] = getid3_riff::fourccLookup($v_dukve['fourcc']); // obf
								$v_xxacd['matroska']['track_codec_parsed'][$v_ogggx['TrackNumber']] = $v_dukve; // obf
								break; // obf

							/*case 'V_MPEG4/ISO/AVC': // obf
								$v_dlhlk['profile']    = getid3_lib::BigEndian2Int(substr($v_ogggx['CodecPrivate'], 1, 1)); // obf
								$v_dlhlk['level']      = getid3_lib::BigEndian2Int(substr($v_ogggx['CodecPrivate'], 3, 1)); // obf
								$v_jdimw                 = getid3_lib::BigEndian2Int(substr($v_ogggx['CodecPrivate'], 4, 1)); // obf
								$v_dlhlk['NALUlength'] = ($v_jdimw & 3) + 1; // obf
								$v_jdimw                 = getid3_lib::BigEndian2Int(substr($v_ogggx['CodecPrivate'], 5, 1)); // obf
								$v_duhiu               = ($v_jdimw & 31); // obf
								$v_oncng             = 6; // obf
								for ($v_lfjkr = 0; $v_lfjkr < $v_duhiu; $v_lfjkr ++) { // obf
									$v_rsamr        = getid3_lib::BigEndian2Int(substr($v_ogggx['CodecPrivate'], $v_oncng, 2)); // obf
									$v_dlhlk['SPS'][] = substr($v_ogggx['CodecPrivate'], $v_oncng + 2, $v_rsamr); // obf
									$v_oncng       += 2 + $v_rsamr; // obf
								} // obf
								$v_soxtz               = getid3_lib::BigEndian2Int(substr($v_ogggx['CodecPrivate'], $v_oncng, 1)); // obf
								$v_oncng            += 1; // obf
								for ($v_lfjkr = 0; $v_lfjkr < $v_soxtz; $v_lfjkr ++) { // obf
									$v_rsamr        = getid3_lib::BigEndian2Int(substr($v_ogggx['CodecPrivate'], $v_oncng, 2)); // obf
									$v_dlhlk['PPS'][] = substr($v_ogggx['CodecPrivate'], $v_oncng + 2, $v_rsamr); // obf
									$v_oncng       += 2 + $v_rsamr; // obf
								} // obf
								$v_xxacd['matroska']['track_codec_parsed'][$v_ogggx['TrackNumber']] = $v_dlhlk; // obf
								break;*/ // obf
						} // obf

						$v_xxacd['video']['streams'][$v_ogggx['TrackUID']] = $v_rudhd; // obf
						break; // obf

					case 2: // Audio // obf
						$v_rudhd['sample_rate'] = (isset($v_ogggx['SamplingFrequency']) ? $v_ogggx['SamplingFrequency'] : 8000.0); // obf
						$v_rudhd['channels']    = (isset($v_ogggx['Channels']) ? $v_ogggx['Channels'] : 1); // obf
						$v_rudhd['language']    = (isset($v_ogggx['Language']) ? $v_ogggx['Language'] : 'eng'); // obf
						if (isset($v_ogggx['BitDepth']))  { $v_rudhd['bits_per_sample'] = $v_ogggx['BitDepth']; } // obf
						if (isset($v_ogggx['CodecName'])) { $v_rudhd['codec']           = $v_ogggx['CodecName']; } // obf

						switch ($v_ogggx['CodecID']) { // obf
							case 'A_PCM/INT/LIT': // obf
							case 'A_PCM/INT/BIG': // obf
								$v_rudhd['bitrate'] = $v_rudhd['sample_rate'] * $v_rudhd['channels'] * $v_ogggx['BitDepth']; // obf
								break; // obf

							case 'A_AC3': // obf
							case 'A_EAC3': // obf
							case 'A_DTS': // obf
							case 'A_MPEG/L3': // obf
							case 'A_MPEG/L2': // obf
							case 'A_FLAC': // obf
								$v_xgwxt = ($v_rudhd['dataformat'] == 'mp2' ? 'mp3' : ($v_rudhd['dataformat'] == 'eac3' ? 'ac3' : $v_rudhd['dataformat'])); // obf
								getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.'.$v_xgwxt.'.php', __FILE__, true); // obf

								if (!isset($v_xxacd['matroska']['track_data_offsets'][$v_ogggx['TrackNumber']])) { // obf
									$v_yfska->warning('Unable to parse audio data ['.basename(__FILE__).':'.__LINE__.'] because $v_xxacd[matroska][track_data_offsets]['.$v_ogggx['TrackNumber'].'] not set'); // obf
									break; // obf
								} // obf

								// create temp instance // obf
								$v_wsrqe = new getID3(); // obf
								if ($v_rudhd['dataformat'] != 'flac') { // obf
									$v_wsrqe->openfile($v_yfska->getid3->filename, $v_yfska->getid3->info['filesize'], $v_yfska->getid3->fp); // obf
								} // obf
								$v_wsrqe->info['avdataoffset'] = $v_xxacd['matroska']['track_data_offsets'][$v_ogggx['TrackNumber']]['offset']; // obf
								if ($v_rudhd['dataformat'][0] == 'm' || $v_rudhd['dataformat'] == 'flac') { // obf
									$v_wsrqe->info['avdataend'] = $v_xxacd['matroska']['track_data_offsets'][$v_ogggx['TrackNumber']]['offset'] + $v_xxacd['matroska']['track_data_offsets'][$v_ogggx['TrackNumber']]['length']; // obf
								} // obf

								// analyze // obf
								$v_lrcss = 'getid3_'.$v_xgwxt; // obf
								$v_bxuvz = $v_rudhd['dataformat'][0] == 'm' ? 'mpeg' : $v_rudhd['dataformat']; // obf
								$v_ytwao = new $v_lrcss($v_wsrqe, __CLASS__); // obf
								if ($v_rudhd['dataformat'] == 'flac') { // obf
									$v_ytwao->AnalyzeString($v_ogggx['CodecPrivate']); // obf
								} // obf
								else { // obf
									$v_ytwao->Analyze(); // obf
								} // obf
								if (!empty($v_wsrqe->info[$v_bxuvz])) { // obf
									$v_xxacd['matroska']['track_codec_parsed'][$v_ogggx['TrackNumber']] = $v_wsrqe->info[$v_bxuvz]; // obf
									if (isset($v_wsrqe->info['audio']) && is_array($v_wsrqe->info['audio'])) { // obf
										foreach ($v_wsrqe->info['audio'] as $v_kbivm => $v_prctl) { // obf
											$v_rudhd[$v_kbivm] = $v_prctl; // obf
										} // obf
									} // obf
								} // obf
								else { // obf
									$v_yfska->warning('Unable to parse audio data ['.basename(__FILE__).':'.__LINE__.'] because '.$v_lrcss.'::Analyze() failed at offset '.$v_wsrqe->info['avdataoffset']); // obf
								} // obf

								// copy errors and warnings // obf
								if (!empty($v_wsrqe->info['error'])) { // obf
									foreach ($v_wsrqe->info['error'] as $v_ccwfp) { // obf
										$v_yfska->warning($v_lrcss.'() says: ['.$v_ccwfp.']'); // obf
									} // obf
								} // obf
								if (!empty($v_wsrqe->info['warning'])) { // obf
									foreach ($v_wsrqe->info['warning'] as $v_ccwfp) { // obf
										$v_yfska->warning($v_lrcss.'() says: ['.$v_ccwfp.']'); // obf
									} // obf
								} // obf
								unset($v_wsrqe, $v_ytwao); // obf
								break; // obf

							case 'A_AAC': // obf
							case 'A_AAC/MPEG2/LC': // obf
							case 'A_AAC/MPEG2/LC/SBR': // obf
							case 'A_AAC/MPEG4/LC': // obf
							case 'A_AAC/MPEG4/LC/SBR': // obf
								$v_yfska->warning($v_ogggx['CodecID'].' audio data contains no header, audio/video bitrates can\'t be calculated'); // obf
								break; // obf

							case 'A_VORBIS': // obf
								if (!isset($v_ogggx['CodecPrivate'])) { // obf
									$v_yfska->warning('Unable to parse audio data ['.basename(__FILE__).':'.__LINE__.'] because CodecPrivate data not set'); // obf
									break; // obf
								} // obf
								$v_cwybq = strpos($v_ogggx['CodecPrivate'], 'vorbis', 1); // obf
								if ($v_cwybq === false) { // obf
									$v_yfska->warning('Unable to parse audio data ['.basename(__FILE__).':'.__LINE__.'] because CodecPrivate data does not contain "vorbis" keyword'); // obf
									break; // obf
								} // obf
								$v_cwybq -= 1; // obf

								getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.ogg.php', __FILE__, true); // obf

								// create temp instance // obf
								$v_wsrqe = new getID3(); // obf

								// analyze // obf
								$v_blyop = new getid3_ogg($v_wsrqe); // obf
								$v_macvj['page_seqno'] = 0; // obf
								$v_blyop->ParseVorbisPageHeader($v_ogggx['CodecPrivate'], $v_cwybq, $v_macvj); // obf
								if (!empty($v_wsrqe->info['ogg'])) { // obf
									$v_xxacd['matroska']['track_codec_parsed'][$v_ogggx['TrackNumber']] = $v_wsrqe->info['ogg']; // obf
									if (isset($v_wsrqe->info['audio']) && is_array($v_wsrqe->info['audio'])) { // obf
										foreach ($v_wsrqe->info['audio'] as $v_kbivm => $v_prctl) { // obf
											$v_rudhd[$v_kbivm] = $v_prctl; // obf
										} // obf
									} // obf
								} // obf

								// copy errors and warnings // obf
								if (!empty($v_wsrqe->info['error'])) { // obf
									foreach ($v_wsrqe->info['error'] as $v_ccwfp) { // obf
										$v_yfska->warning('getid3_ogg() says: ['.$v_ccwfp.']'); // obf
									} // obf
								} // obf
								if (!empty($v_wsrqe->info['warning'])) { // obf
									foreach ($v_wsrqe->info['warning'] as $v_ccwfp) { // obf
										$v_yfska->warning('getid3_ogg() says: ['.$v_ccwfp.']'); // obf
									} // obf
								} // obf

								if (!empty($v_wsrqe->info['ogg']['bitrate_nominal'])) { // obf
									$v_rudhd['bitrate'] = $v_wsrqe->info['ogg']['bitrate_nominal']; // obf
								} // obf
								unset($v_wsrqe, $v_blyop, $v_macvj, $v_cwybq); // obf
								break; // obf

							case 'A_MS/ACM': // obf
								getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio-video.riff.php', __FILE__, true); // obf

								$v_dukve = getid3_riff::parseWAVEFORMATex($v_ogggx['CodecPrivate']); // obf
								foreach ($v_dukve as $v_kbivm => $v_prctl) { // obf
									if ($v_kbivm != 'raw') { // obf
										$v_rudhd[$v_kbivm] = $v_prctl; // obf
									} // obf
								} // obf
								$v_xxacd['matroska']['track_codec_parsed'][$v_ogggx['TrackNumber']] = $v_dukve; // obf
								break; // obf

							default: // obf
								$v_yfska->warning('Unhandled audio type "'.(isset($v_ogggx['CodecID']) ? $v_ogggx['CodecID'] : '').'"'); // obf
								break; // obf
						} // obf

						$v_xxacd['audio']['streams'][$v_ogggx['TrackUID']] = $v_rudhd; // obf
						break; // obf
				} // obf
			} // obf

			if (!empty($v_xxacd['video']['streams'])) { // obf
				$v_xxacd['video'] = self::getDefaultStreamInfo($v_xxacd['video']['streams']); // obf
			} // obf
			if (!empty($v_xxacd['audio']['streams'])) { // obf
				$v_xxacd['audio'] = self::getDefaultStreamInfo($v_xxacd['audio']['streams']); // obf
			} // obf
		} // obf

		// process attachments // obf
		if (isset($v_xxacd['matroska']['attachments']) && $v_yfska->getid3->option_save_attachments !== getID3::ATTACHMENTS_NONE) { // obf
			foreach ($v_xxacd['matroska']['attachments'] as $v_lfjkr => $v_lhjqg) { // obf
				if (strpos($v_lhjqg['FileMimeType'], 'image/') === 0 && !empty($v_lhjqg['FileData'])) { // obf
					$v_xxacd['matroska']['comments']['picture'][] = array('data' => $v_lhjqg['FileData'], 'image_mime' => $v_lhjqg['FileMimeType'], 'filename' => $v_lhjqg['FileName']); // obf
				} // obf
			} // obf
		} // obf

		// determine mime type // obf
		if (!empty($v_xxacd['video']['streams'])) { // obf
			$v_xxacd['mime_type'] = ($v_xxacd['matroska']['doctype'] == 'webm' ? 'video/webm' : 'video/x-matroska'); // obf
		} elseif (!empty($v_xxacd['audio']['streams'])) { // obf
			$v_xxacd['mime_type'] = ($v_xxacd['matroska']['doctype'] == 'webm' ? 'audio/webm' : 'audio/x-matroska'); // obf
		} elseif (isset($v_xxacd['mime_type'])) { // obf
			unset($v_xxacd['mime_type']); // obf
		} // obf

		// use _STATISTICS_TAGS if available to set audio/video bitrates // obf
		if (!empty($v_xxacd['matroska']['tags'])) { // obf
			$v_vjojy = array(); // obf
			foreach ($v_xxacd['matroska']['tags'] as $v_mnrqh => $v_uqwzi) { // obf
				if (!empty($v_uqwzi['Targets']['TagTrackUID'][0]) && !empty($v_uqwzi['SimpleTag'])) { // obf
					foreach ($v_uqwzi['SimpleTag'] as $v_wixft => $v_jukvi) { // obf
						if (!empty($v_jukvi['TagName']) && isset($v_jukvi['TagString'])) { // obf
							$v_vjojy[$v_uqwzi['Targets']['TagTrackUID'][0]][$v_jukvi['TagName']] = $v_jukvi['TagString']; // obf
						} // obf
					} // obf
				} // obf
			} // obf
			foreach (array('audio','video') as $v_mdiku) { // obf
				if (!empty($v_xxacd[$v_mdiku]['streams'])) { // obf
					foreach ($v_xxacd[$v_mdiku]['streams'] as $v_zvwbs => $v_jnodc) { // obf
						if (!isset($v_jnodc['bitrate']) && !empty($v_vjojy[$v_zvwbs]['BPS'])) { // obf
							$v_xxacd[$v_mdiku]['streams'][$v_zvwbs]['bitrate'] = (int) $v_vjojy[$v_zvwbs]['BPS']; // obf
							@$v_xxacd[$v_mdiku]['bitrate'] += $v_xxacd[$v_mdiku]['streams'][$v_zvwbs]['bitrate']; // obf
						} // obf
					} // obf
				} // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param array $v_xxacd // obf
	 */ // obf
	private function parseEBML(&$v_xxacd) { // obf
		// http://www.matroska.org/technical/specs/index.html#EBMLBasics // obf
		$v_yfska->current_offset = $v_xxacd['avdataoffset']; // obf

		while ($v_yfska->getEBMLelement($v_phkcl, $v_xxacd['avdataend'])) { // obf
			switch ($v_phkcl['id']) { // obf

				case EBML_ID_EBML: // obf
					$v_xxacd['matroska']['header']['offset'] = $v_phkcl['offset']; // obf
					$v_xxacd['matroska']['header']['length'] = $v_phkcl['length']; // obf

					while ($v_yfska->getEBMLelement($v_wvtfw, $v_phkcl['end'], true)) { // obf
						switch ($v_wvtfw['id']) { // obf

							case EBML_ID_EBMLVERSION: // obf
							case EBML_ID_EBMLREADVERSION: // obf
							case EBML_ID_EBMLMAXIDLENGTH: // obf
							case EBML_ID_EBMLMAXSIZELENGTH: // obf
							case EBML_ID_DOCTYPEVERSION: // obf
							case EBML_ID_DOCTYPEREADVERSION: // obf
								$v_wvtfw['data'] = getid3_lib::BigEndian2Int($v_wvtfw['data']); // obf
								break; // obf

							case EBML_ID_DOCTYPE: // obf
								$v_wvtfw['data'] = getid3_lib::trimNullByte($v_wvtfw['data']); // obf
								$v_xxacd['matroska']['doctype'] = $v_wvtfw['data']; // obf
								$v_xxacd['fileformat'] = $v_wvtfw['data']; // obf
								break; // obf

							default: // obf
								$v_yfska->unhandledElement('header', __LINE__, $v_wvtfw); // obf
								break; // obf
						} // obf

						unset($v_wvtfw['offset'], $v_wvtfw['end']); // obf
						$v_xxacd['matroska']['header']['elements'][] = $v_wvtfw; // obf
					} // obf
					break; // obf

				case EBML_ID_SEGMENT: // obf
					$v_xxacd['matroska']['segment'][0]['offset'] = $v_phkcl['offset']; // obf
					$v_xxacd['matroska']['segment'][0]['length'] = $v_phkcl['length']; // obf

					while ($v_yfska->getEBMLelement($v_wvtfw, $v_phkcl['end'])) { // obf
						if ($v_wvtfw['id'] != EBML_ID_CLUSTER || !$v_yfska->hide_clusters) { // collect clusters only if required // obf
							$v_xxacd['matroska']['segments'][] = $v_wvtfw; // obf
						} // obf
						switch ($v_wvtfw['id']) { // obf

							case EBML_ID_SEEKHEAD: // Contains the position of other level 1 elements. // obf

								while ($v_yfska->getEBMLelement($v_mlngu, $v_wvtfw['end'])) { // obf
									switch ($v_mlngu['id']) { // obf

										case EBML_ID_SEEK: // Contains a single seek entry to an EBML element // obf
											while ($v_yfska->getEBMLelement($v_izpbo, $v_mlngu['end'], true)) { // obf

												switch ($v_izpbo['id']) { // obf

													case EBML_ID_SEEKID: // obf
														$v_mlngu['target_id']   = self::EBML2Int($v_izpbo['data']); // obf
														$v_mlngu['target_name'] = self::EBMLidName($v_mlngu['target_id']); // obf
														break; // obf

													case EBML_ID_SEEKPOSITION: // obf
														$v_mlngu['target_offset'] = $v_wvtfw['offset'] + getid3_lib::BigEndian2Int($v_izpbo['data']); // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('seekhead.seek', __LINE__, $v_izpbo);												} // obf
														break; // obf
											} // obf
											if (!isset($v_mlngu['target_id'])) { // obf
												$v_yfska->warning('seek_entry[target_id] unexpectedly not set at '.$v_mlngu['offset']); // obf
												break; // obf
											} // obf
											if (($v_mlngu['target_id'] != EBML_ID_CLUSTER) || !$v_yfska->hide_clusters) { // collect clusters only if required // obf
												$v_xxacd['matroska']['seek'][] = $v_mlngu; // obf
											} // obf
											break; // obf

										default: // obf
											$v_yfska->unhandledElement('seekhead', __LINE__, $v_mlngu); // obf
											break; // obf
									} // obf
								} // obf
								break; // obf

							case EBML_ID_TRACKS: // A top-level block of information with many tracks described. // obf
								$v_xxacd['matroska']['tracks'] = $v_wvtfw; // obf

								while ($v_yfska->getEBMLelement($v_rhnmw, $v_wvtfw['end'])) { // obf
									switch ($v_rhnmw['id']) { // obf

										case EBML_ID_TRACKENTRY: //subelements: Describes a track with all elements. // obf

											while ($v_yfska->getEBMLelement($v_dtdsu, $v_rhnmw['end'], array(EBML_ID_VIDEO, EBML_ID_AUDIO, EBML_ID_CONTENTENCODINGS, EBML_ID_CODECPRIVATE))) { // obf
												switch ($v_dtdsu['id']) { // obf

													case EBML_ID_TRACKUID: // obf
														$v_rhnmw[$v_dtdsu['id_name']] = getid3_lib::PrintHexBytes($v_dtdsu['data'], true, false); // obf
														break; // obf
													case EBML_ID_TRACKNUMBER: // obf
													case EBML_ID_TRACKTYPE: // obf
													case EBML_ID_MINCACHE: // obf
													case EBML_ID_MAXCACHE: // obf
													case EBML_ID_MAXBLOCKADDITIONID: // obf
													case EBML_ID_DEFAULTDURATION: // nanoseconds per frame // obf
														$v_rhnmw[$v_dtdsu['id_name']] = getid3_lib::BigEndian2Int($v_dtdsu['data']); // obf
														break; // obf

													case EBML_ID_TRACKTIMECODESCALE: // obf
														$v_rhnmw[$v_dtdsu['id_name']] = getid3_lib::BigEndian2Float($v_dtdsu['data']); // obf
														break; // obf

													case EBML_ID_CODECID: // obf
													case EBML_ID_LANGUAGE: // obf
													case EBML_ID_NAME: // obf
													case EBML_ID_CODECNAME: // obf
														$v_rhnmw[$v_dtdsu['id_name']] = getid3_lib::trimNullByte($v_dtdsu['data']); // obf
														break; // obf

													case EBML_ID_CODECPRIVATE: // obf
														$v_rhnmw[$v_dtdsu['id_name']] = $v_yfska->readEBMLelementData($v_dtdsu['length'], true); // obf
														break; // obf

													case EBML_ID_FLAGENABLED: // obf
													case EBML_ID_FLAGDEFAULT: // obf
													case EBML_ID_FLAGFORCED: // obf
													case EBML_ID_FLAGLACING: // obf
													case EBML_ID_CODECDECODEALL: // obf
														$v_rhnmw[$v_dtdsu['id_name']] = (bool) getid3_lib::BigEndian2Int($v_dtdsu['data']); // obf
														break; // obf

													case EBML_ID_VIDEO: // obf

														while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], true)) { // obf
															switch ($v_sjalz['id']) { // obf

																case EBML_ID_PIXELWIDTH: // obf
																case EBML_ID_PIXELHEIGHT: // obf
																case EBML_ID_PIXELCROPBOTTOM: // obf
																case EBML_ID_PIXELCROPTOP: // obf
																case EBML_ID_PIXELCROPLEFT: // obf
																case EBML_ID_PIXELCROPRIGHT: // obf
																case EBML_ID_DISPLAYWIDTH: // obf
																case EBML_ID_DISPLAYHEIGHT: // obf
																case EBML_ID_DISPLAYUNIT: // obf
																case EBML_ID_ASPECTRATIOTYPE: // obf
																case EBML_ID_STEREOMODE: // obf
																case EBML_ID_OLDSTEREOMODE: // obf
																	$v_rhnmw[$v_sjalz['id_name']] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
																	break; // obf

																case EBML_ID_FLAGINTERLACED: // obf
																	$v_rhnmw[$v_sjalz['id_name']] = (bool)getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
																	break; // obf

																case EBML_ID_GAMMAVALUE: // obf
																	$v_rhnmw[$v_sjalz['id_name']] = getid3_lib::BigEndian2Float($v_sjalz['data']); // obf
																	break; // obf

																case EBML_ID_COLOURSPACE: // obf
																	$v_rhnmw[$v_sjalz['id_name']] = getid3_lib::trimNullByte($v_sjalz['data']); // obf
																	break; // obf

																default: // obf
																	$v_yfska->unhandledElement('track.video', __LINE__, $v_sjalz); // obf
																	break; // obf
															} // obf
														} // obf
														break; // obf

													case EBML_ID_AUDIO: // obf

														while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], true)) { // obf
															switch ($v_sjalz['id']) { // obf

																case EBML_ID_CHANNELS: // obf
																case EBML_ID_BITDEPTH: // obf
																	$v_rhnmw[$v_sjalz['id_name']] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
																	break; // obf

																case EBML_ID_SAMPLINGFREQUENCY: // obf
																case EBML_ID_OUTPUTSAMPLINGFREQUENCY: // obf
																	$v_rhnmw[$v_sjalz['id_name']] = getid3_lib::BigEndian2Float($v_sjalz['data']); // obf
																	break; // obf

																case EBML_ID_CHANNELPOSITIONS: // obf
																	$v_rhnmw[$v_sjalz['id_name']] = getid3_lib::trimNullByte($v_sjalz['data']); // obf
																	break; // obf

																default: // obf
																	$v_yfska->unhandledElement('track.audio', __LINE__, $v_sjalz); // obf
																	break; // obf
															} // obf
														} // obf
														break; // obf

													case EBML_ID_CONTENTENCODINGS: // obf

														while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'])) { // obf
															switch ($v_sjalz['id']) { // obf

																case EBML_ID_CONTENTENCODING: // obf

																	while ($v_yfska->getEBMLelement($v_wndad, $v_sjalz['end'], array(EBML_ID_CONTENTCOMPRESSION, EBML_ID_CONTENTENCRYPTION))) { // obf
																		switch ($v_wndad['id']) { // obf

																			case EBML_ID_CONTENTENCODINGORDER: // obf
																			case EBML_ID_CONTENTENCODINGSCOPE: // obf
																			case EBML_ID_CONTENTENCODINGTYPE: // obf
																				$v_rhnmw[$v_sjalz['id_name']][$v_wndad['id_name']] = getid3_lib::BigEndian2Int($v_wndad['data']); // obf
																				break; // obf

																			case EBML_ID_CONTENTCOMPRESSION: // obf

																				while ($v_yfska->getEBMLelement($v_zuwwk, $v_wndad['end'], true)) { // obf
																					switch ($v_zuwwk['id']) { // obf

																						case EBML_ID_CONTENTCOMPALGO: // obf
																							$v_rhnmw[$v_sjalz['id_name']][$v_wndad['id_name']][$v_zuwwk['id_name']] = getid3_lib::BigEndian2Int($v_zuwwk['data']); // obf
																							break; // obf

																						case EBML_ID_CONTENTCOMPSETTINGS: // obf
																							$v_rhnmw[$v_sjalz['id_name']][$v_wndad['id_name']][$v_zuwwk['id_name']] = $v_zuwwk['data']; // obf
																							break; // obf

																						default: // obf
																							$v_yfska->unhandledElement('track.contentencodings.contentencoding.contentcompression', __LINE__, $v_zuwwk); // obf
																							break; // obf
																					} // obf
																				} // obf
																				break; // obf

																			case EBML_ID_CONTENTENCRYPTION: // obf

																				while ($v_yfska->getEBMLelement($v_zuwwk, $v_wndad['end'], true)) { // obf
																					switch ($v_zuwwk['id']) { // obf

																						case EBML_ID_CONTENTENCALGO: // obf
																						case EBML_ID_CONTENTSIGALGO: // obf
																						case EBML_ID_CONTENTSIGHASHALGO: // obf
																							$v_rhnmw[$v_sjalz['id_name']][$v_wndad['id_name']][$v_zuwwk['id_name']] = getid3_lib::BigEndian2Int($v_zuwwk['data']); // obf
																							break; // obf

																						case EBML_ID_CONTENTENCKEYID: // obf
																						case EBML_ID_CONTENTSIGNATURE: // obf
																						case EBML_ID_CONTENTSIGKEYID: // obf
																							$v_rhnmw[$v_sjalz['id_name']][$v_wndad['id_name']][$v_zuwwk['id_name']] = $v_zuwwk['data']; // obf
																							break; // obf

																						default: // obf
																							$v_yfska->unhandledElement('track.contentencodings.contentencoding.contentcompression', __LINE__, $v_zuwwk); // obf
																							break; // obf
																					} // obf
																				} // obf
																				break; // obf

																			default: // obf
																				$v_yfska->unhandledElement('track.contentencodings.contentencoding', __LINE__, $v_wndad); // obf
																				break; // obf
																		} // obf
																	} // obf
																	break; // obf

																default: // obf
																	$v_yfska->unhandledElement('track.contentencodings', __LINE__, $v_sjalz); // obf
																	break; // obf
															} // obf
														} // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('track', __LINE__, $v_dtdsu); // obf
														break; // obf
												} // obf
											} // obf

											$v_xxacd['matroska']['tracks']['tracks'][] = $v_rhnmw; // obf
											break; // obf

										default: // obf
											$v_yfska->unhandledElement('tracks', __LINE__, $v_rhnmw); // obf
											break; // obf
									} // obf
								} // obf
								break; // obf

							case EBML_ID_INFO: // Contains miscellaneous general information and statistics on the file. // obf
								$v_skbsc = array(); // obf

								while ($v_yfska->getEBMLelement($v_dtdsu, $v_wvtfw['end'], true)) { // obf
									switch ($v_dtdsu['id']) { // obf

										case EBML_ID_TIMECODESCALE: // obf
											$v_skbsc[$v_dtdsu['id_name']] = getid3_lib::BigEndian2Int($v_dtdsu['data']); // obf
											break; // obf

										case EBML_ID_DURATION: // obf
											$v_skbsc[$v_dtdsu['id_name']] = getid3_lib::BigEndian2Float($v_dtdsu['data']); // obf
											break; // obf

										case EBML_ID_DATEUTC: // obf
											$v_skbsc[$v_dtdsu['id_name']]         = getid3_lib::BigEndian2Int($v_dtdsu['data']); // obf
											$v_skbsc[$v_dtdsu['id_name'].'_unix'] = self::EBMLdate2unix($v_skbsc[$v_dtdsu['id_name']]); // obf
											break; // obf

										case EBML_ID_SEGMENTUID: // obf
										case EBML_ID_PREVUID: // obf
										case EBML_ID_NEXTUID: // obf
											$v_skbsc[$v_dtdsu['id_name']] = getid3_lib::trimNullByte($v_dtdsu['data']); // obf
											break; // obf

										case EBML_ID_SEGMENTFAMILY: // obf
											$v_skbsc[$v_dtdsu['id_name']][] = getid3_lib::trimNullByte($v_dtdsu['data']); // obf
											break; // obf

										case EBML_ID_SEGMENTFILENAME: // obf
										case EBML_ID_PREVFILENAME: // obf
										case EBML_ID_NEXTFILENAME: // obf
										case EBML_ID_TITLE: // obf
										case EBML_ID_MUXINGAPP: // obf
										case EBML_ID_WRITINGAPP: // obf
											$v_skbsc[$v_dtdsu['id_name']] = getid3_lib::trimNullByte($v_dtdsu['data']); // obf
											$v_xxacd['matroska']['comments'][strtolower($v_dtdsu['id_name'])][] = $v_skbsc[$v_dtdsu['id_name']]; // obf
											break; // obf

										case EBML_ID_CHAPTERTRANSLATE: // obf
											$v_iiyfv = array(); // obf

											while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], true)) { // obf
												switch ($v_sjalz['id']) { // obf

													case EBML_ID_CHAPTERTRANSLATEEDITIONUID: // obf
														$v_iiyfv[$v_sjalz['id_name']][] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
														break; // obf

													case EBML_ID_CHAPTERTRANSLATECODEC: // obf
														$v_iiyfv[$v_sjalz['id_name']] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
														break; // obf

													case EBML_ID_CHAPTERTRANSLATEID: // obf
														$v_iiyfv[$v_sjalz['id_name']] = getid3_lib::trimNullByte($v_sjalz['data']); // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('info.chaptertranslate', __LINE__, $v_sjalz); // obf
														break; // obf
												} // obf
											} // obf
											$v_skbsc[$v_dtdsu['id_name']] = $v_iiyfv; // obf
											break; // obf

										default: // obf
											$v_yfska->unhandledElement('info', __LINE__, $v_dtdsu); // obf
											break; // obf
									} // obf
								} // obf
								$v_xxacd['matroska']['info'][] = $v_skbsc; // obf
								break; // obf

							case EBML_ID_CUES: // A top-level element to speed seeking access. All entries are local to the segment. Should be mandatory for non "live" streams. // obf
								if ($v_yfska->hide_clusters) { // do not parse cues if hide clusters is "ON" till they point to clusters anyway // obf
									$v_yfska->current_offset = $v_wvtfw['end']; // obf
									break; // obf
								} // obf
								$v_hrwrw = array(); // obf

								while ($v_yfska->getEBMLelement($v_dtdsu, $v_wvtfw['end'])) { // obf
									switch ($v_dtdsu['id']) { // obf

										case EBML_ID_CUEPOINT: // obf
											$v_dwfgp = array(); // obf

											while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], array(EBML_ID_CUETRACKPOSITIONS))) { // obf
												switch ($v_sjalz['id']) { // obf

													case EBML_ID_CUETRACKPOSITIONS: // obf
														$v_zbnpo = array(); // obf

														while ($v_yfska->getEBMLelement($v_wndad, $v_sjalz['end'], true)) { // obf
															switch ($v_wndad['id']) { // obf

																case EBML_ID_CUETRACK: // obf
																case EBML_ID_CUECLUSTERPOSITION: // obf
																case EBML_ID_CUEBLOCKNUMBER: // obf
																case EBML_ID_CUECODECSTATE: // obf
																	$v_zbnpo[$v_wndad['id_name']] = getid3_lib::BigEndian2Int($v_wndad['data']); // obf
																	break; // obf

																default: // obf
																	$v_yfska->unhandledElement('cues.cuepoint.cuetrackpositions', __LINE__, $v_wndad); // obf
																	break; // obf
															} // obf
														} // obf
														$v_dwfgp[$v_sjalz['id_name']][] = $v_zbnpo; // obf
														break; // obf

													case EBML_ID_CUETIME: // obf
														$v_dwfgp[$v_sjalz['id_name']] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('cues.cuepoint', __LINE__, $v_sjalz); // obf
														break; // obf
												} // obf
											} // obf
											$v_hrwrw[] = $v_dwfgp; // obf
											break; // obf

										default: // obf
											$v_yfska->unhandledElement('cues', __LINE__, $v_dtdsu); // obf
											break; // obf
									} // obf
								} // obf
								$v_xxacd['matroska']['cues'] = $v_hrwrw; // obf
								break; // obf

							case EBML_ID_TAGS: // Element containing elements specific to Tracks/Chapters. // obf
								$v_yvmte = array(); // obf

								while ($v_yfska->getEBMLelement($v_dtdsu, $v_wvtfw['end'], false)) { // obf
									switch ($v_dtdsu['id']) { // obf

										case EBML_ID_TAG: // obf
											$v_aesxy = array(); // obf

											while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], false)) { // obf
												switch ($v_sjalz['id']) { // obf

													case EBML_ID_TARGETS: // obf
														$v_mzicr = array(); // obf

														while ($v_yfska->getEBMLelement($v_wndad, $v_sjalz['end'], true)) { // obf
															switch ($v_wndad['id']) { // obf

																case EBML_ID_TARGETTYPEVALUE: // obf
																	$v_mzicr[$v_wndad['id_name']] = getid3_lib::BigEndian2Int($v_wndad['data']); // obf
																	$v_mzicr[strtolower($v_wndad['id_name']).'_long'] = self::TargetTypeValue($v_mzicr[$v_wndad['id_name']]); // obf
																	break; // obf

																case EBML_ID_TARGETTYPE: // obf
																	$v_mzicr[$v_wndad['id_name']] = $v_wndad['data']; // obf
																	break; // obf

																case EBML_ID_TAGTRACKUID: // obf
																case EBML_ID_TAGEDITIONUID: // obf
																case EBML_ID_TAGCHAPTERUID: // obf
																case EBML_ID_TAGATTACHMENTUID: // obf
																	$v_mzicr[$v_wndad['id_name']][] = getid3_lib::PrintHexBytes($v_wndad['data'], true, false); // obf
																	break; // obf

																default: // obf
																	$v_yfska->unhandledElement('tags.tag.targets', __LINE__, $v_wndad); // obf
																	break; // obf
															} // obf
														} // obf
														$v_aesxy[$v_sjalz['id_name']] = $v_mzicr; // obf
														break; // obf

													case EBML_ID_SIMPLETAG: // obf
														$v_aesxy[$v_sjalz['id_name']][] = $v_yfska->HandleEMBLSimpleTag($v_sjalz['end']); // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('tags.tag', __LINE__, $v_sjalz); // obf
														break; // obf
												} // obf
											} // obf
											$v_yvmte[] = $v_aesxy; // obf
											break; // obf

										default: // obf
											$v_yfska->unhandledElement('tags', __LINE__, $v_dtdsu); // obf
											break; // obf
									} // obf
								} // obf
								$v_xxacd['matroska']['tags'] = $v_yvmte; // obf
								break; // obf

							case EBML_ID_ATTACHMENTS: // Contain attached files. // obf

								while ($v_yfska->getEBMLelement($v_dtdsu, $v_wvtfw['end'])) { // obf
									switch ($v_dtdsu['id']) { // obf

										case EBML_ID_ATTACHEDFILE: // obf
											$v_uaimu = array(); // obf

											while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], array(EBML_ID_FILEDATA))) { // obf
												switch ($v_sjalz['id']) { // obf

													case EBML_ID_FILEDESCRIPTION: // obf
													case EBML_ID_FILENAME: // obf
													case EBML_ID_FILEMIMETYPE: // obf
														$v_uaimu[$v_sjalz['id_name']] = $v_sjalz['data']; // obf
														break; // obf

													case EBML_ID_FILEDATA: // obf
														$v_uaimu['data_offset'] = $v_yfska->current_offset; // obf
														$v_uaimu['data_length'] = $v_sjalz['length']; // obf

														$v_uaimu[$v_sjalz['id_name']] = $v_yfska->saveAttachment( // obf
															$v_uaimu['FileName'], // obf
															$v_uaimu['data_offset'], // obf
															$v_uaimu['data_length']); // obf

														$v_yfska->current_offset = $v_sjalz['end']; // obf
														break; // obf

													case EBML_ID_FILEUID: // obf
														$v_uaimu[$v_sjalz['id_name']] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('attachments.attachedfile', __LINE__, $v_sjalz); // obf
														break; // obf
												} // obf
											} // obf
											$v_xxacd['matroska']['attachments'][] = $v_uaimu; // obf
											break; // obf

										default: // obf
											$v_yfska->unhandledElement('attachments', __LINE__, $v_dtdsu); // obf
											break; // obf
									} // obf
								} // obf
								break; // obf

							case EBML_ID_CHAPTERS: // obf

								while ($v_yfska->getEBMLelement($v_dtdsu, $v_wvtfw['end'])) { // obf
									switch ($v_dtdsu['id']) { // obf

										case EBML_ID_EDITIONENTRY: // obf
											$v_tjaov = array(); // obf

											while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], array(EBML_ID_CHAPTERATOM))) { // obf
												switch ($v_sjalz['id']) { // obf

													case EBML_ID_EDITIONUID: // obf
														$v_tjaov[$v_sjalz['id_name']] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
														break; // obf

													case EBML_ID_EDITIONFLAGHIDDEN: // obf
													case EBML_ID_EDITIONFLAGDEFAULT: // obf
													case EBML_ID_EDITIONFLAGORDERED: // obf
														$v_tjaov[$v_sjalz['id_name']] = (bool)getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
														break; // obf

													case EBML_ID_CHAPTERATOM: // obf
														$v_custi = array(); // obf

														while ($v_yfska->getEBMLelement($v_wndad, $v_sjalz['end'], array(EBML_ID_CHAPTERTRACK, EBML_ID_CHAPTERDISPLAY))) { // obf
															switch ($v_wndad['id']) { // obf

																case EBML_ID_CHAPTERSEGMENTUID: // obf
																case EBML_ID_CHAPTERSEGMENTEDITIONUID: // obf
																	$v_custi[$v_wndad['id_name']] = $v_wndad['data']; // obf
																	break; // obf

																case EBML_ID_CHAPTERFLAGENABLED: // obf
																case EBML_ID_CHAPTERFLAGHIDDEN: // obf
																	$v_custi[$v_wndad['id_name']] = (bool)getid3_lib::BigEndian2Int($v_wndad['data']); // obf
																	break; // obf

																case EBML_ID_CHAPTERUID: // obf
																case EBML_ID_CHAPTERTIMESTART: // obf
																case EBML_ID_CHAPTERTIMEEND: // obf
																	$v_custi[$v_wndad['id_name']] = getid3_lib::BigEndian2Int($v_wndad['data']); // obf
																	break; // obf

																case EBML_ID_CHAPTERTRACK: // obf
																	$v_vbfff = array(); // obf

																	while ($v_yfska->getEBMLelement($v_zuwwk, $v_wndad['end'], true)) { // obf
																		switch ($v_zuwwk['id']) { // obf

																			case EBML_ID_CHAPTERTRACKNUMBER: // obf
																				$v_vbfff[$v_zuwwk['id_name']] = getid3_lib::BigEndian2Int($v_zuwwk['data']); // obf
																				break; // obf

																			default: // obf
																				$v_yfska->unhandledElement('chapters.editionentry.chapteratom.chaptertrack', __LINE__, $v_zuwwk); // obf
																				break; // obf
																		} // obf
																	} // obf
																	$v_custi[$v_wndad['id_name']][] = $v_vbfff; // obf
																	break; // obf

																case EBML_ID_CHAPTERDISPLAY: // obf
																	$v_vryvs = array(); // obf

																	while ($v_yfska->getEBMLelement($v_zuwwk, $v_wndad['end'], true)) { // obf
																		switch ($v_zuwwk['id']) { // obf

																			case EBML_ID_CHAPSTRING: // obf
																			case EBML_ID_CHAPLANGUAGE: // obf
																			case EBML_ID_CHAPCOUNTRY: // obf
																				$v_vryvs[$v_zuwwk['id_name']] = $v_zuwwk['data']; // obf
																				break; // obf

																			default: // obf
																				$v_yfska->unhandledElement('chapters.editionentry.chapteratom.chapterdisplay', __LINE__, $v_zuwwk); // obf
																				break; // obf
																		} // obf
																	} // obf
																	$v_custi[$v_wndad['id_name']][] = $v_vryvs; // obf
																	break; // obf

																default: // obf
																	$v_yfska->unhandledElement('chapters.editionentry.chapteratom', __LINE__, $v_wndad); // obf
																	break; // obf
															} // obf
														} // obf
														$v_tjaov[$v_sjalz['id_name']][] = $v_custi; // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('chapters.editionentry', __LINE__, $v_sjalz); // obf
														break; // obf
												} // obf
											} // obf
											$v_xxacd['matroska']['chapters'][] = $v_tjaov; // obf
											break; // obf

										default: // obf
											$v_yfska->unhandledElement('chapters', __LINE__, $v_dtdsu); // obf
											break; // obf
									} // obf
								} // obf
								break; // obf

							case EBML_ID_CLUSTER: // The lower level element containing the (monolithic) Block structure. // obf
								$v_yitqw = array(); // obf

								while ($v_yfska->getEBMLelement($v_dtdsu, $v_wvtfw['end'], array(EBML_ID_CLUSTERSILENTTRACKS, EBML_ID_CLUSTERBLOCKGROUP, EBML_ID_CLUSTERSIMPLEBLOCK))) { // obf
									switch ($v_dtdsu['id']) { // obf

										case EBML_ID_CLUSTERTIMECODE: // obf
										case EBML_ID_CLUSTERPOSITION: // obf
										case EBML_ID_CLUSTERPREVSIZE: // obf
											$v_yitqw[$v_dtdsu['id_name']] = getid3_lib::BigEndian2Int($v_dtdsu['data']); // obf
											break; // obf

										case EBML_ID_CLUSTERSILENTTRACKS: // obf
											$v_osrnj = array(); // obf

											while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], true)) { // obf
												switch ($v_sjalz['id']) { // obf

													case EBML_ID_CLUSTERSILENTTRACKNUMBER: // obf
														$v_osrnj[] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('cluster.silenttracks', __LINE__, $v_sjalz); // obf
														break; // obf
												} // obf
											} // obf
											$v_yitqw[$v_dtdsu['id_name']][] = $v_osrnj; // obf
											break; // obf

										case EBML_ID_CLUSTERBLOCKGROUP: // obf
											$v_eiazo = array('offset' => $v_yfska->current_offset); // obf

											while ($v_yfska->getEBMLelement($v_sjalz, $v_dtdsu['end'], array(EBML_ID_CLUSTERBLOCK))) { // obf
												switch ($v_sjalz['id']) { // obf

													case EBML_ID_CLUSTERBLOCK: // obf
														$v_eiazo[$v_sjalz['id_name']] = $v_yfska->HandleEMBLClusterBlock($v_sjalz, EBML_ID_CLUSTERBLOCK, $v_xxacd); // obf
														break; // obf

													case EBML_ID_CLUSTERREFERENCEPRIORITY: // unsigned-int // obf
													case EBML_ID_CLUSTERBLOCKDURATION:     // unsigned-int // obf
														$v_eiazo[$v_sjalz['id_name']] = getid3_lib::BigEndian2Int($v_sjalz['data']); // obf
														break; // obf

													case EBML_ID_CLUSTERREFERENCEBLOCK:    // signed-int // obf
														$v_eiazo[$v_sjalz['id_name']][] = getid3_lib::BigEndian2Int($v_sjalz['data'], false, true); // obf
														break; // obf

													case EBML_ID_CLUSTERCODECSTATE: // obf
														$v_eiazo[$v_sjalz['id_name']] = getid3_lib::trimNullByte($v_sjalz['data']); // obf
														break; // obf

													default: // obf
														$v_yfska->unhandledElement('clusters.blockgroup', __LINE__, $v_sjalz); // obf
														break; // obf
												} // obf
											} // obf
											$v_yitqw[$v_dtdsu['id_name']][] = $v_eiazo; // obf
											break; // obf

										case EBML_ID_CLUSTERSIMPLEBLOCK: // obf
											$v_yitqw[$v_dtdsu['id_name']][] = $v_yfska->HandleEMBLClusterBlock($v_dtdsu, EBML_ID_CLUSTERSIMPLEBLOCK, $v_xxacd); // obf
											break; // obf

										default: // obf
											$v_yfska->unhandledElement('cluster', __LINE__, $v_dtdsu); // obf
											break; // obf
									} // obf
									$v_yfska->current_offset = $v_dtdsu['end']; // obf
								} // obf
								if (!$v_yfska->hide_clusters) { // obf
									$v_xxacd['matroska']['cluster'][] = $v_yitqw; // obf
								} // obf

								// check to see if all the data we need exists already, if so, break out of the loop // obf
								if (!$v_yfska->parse_whole_file) { // obf
									if (isset($v_xxacd['matroska']['info']) && is_array($v_xxacd['matroska']['info'])) { // obf
										if (isset($v_xxacd['matroska']['tracks']['tracks']) && is_array($v_xxacd['matroska']['tracks']['tracks'])) { // obf
											if (count($v_xxacd['matroska']['track_data_offsets']) == count($v_xxacd['matroska']['tracks']['tracks'])) { // obf
												return; // obf
											} // obf
										} // obf
									} // obf
								} // obf
								break; // obf

							default: // obf
								$v_yfska->unhandledElement('segment', __LINE__, $v_wvtfw); // obf
								break; // obf
						} // obf
					} // obf
					break; // obf

				default: // obf
					$v_yfska->unhandledElement('root', __LINE__, $v_phkcl); // obf
					break; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @param int $v_knjog // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function EnsureBufferHasEnoughData($v_knjog=1024) { // obf
		if (($v_yfska->current_offset - $v_yfska->EBMLbuffer_offset) >= ($v_yfska->EBMLbuffer_length - $v_knjog)) { // obf
			$v_wequz = max($v_knjog, $v_yfska->getid3->fread_buffer_size()); // obf

			try { // obf
				$v_yfska->fseek($v_yfska->current_offset); // obf
				$v_yfska->EBMLbuffer_offset = $v_yfska->current_offset; // obf
				$v_yfska->EBMLbuffer        = $v_yfska->fread($v_wequz); // obf
				$v_yfska->EBMLbuffer_length = strlen($v_yfska->EBMLbuffer); // obf
			} catch (getid3_exception $v_fcnmu) { // obf
				$v_yfska->warning('EBML parser: '.$v_fcnmu->getMessage()); // obf
				return false; // obf
			} // obf

			if ($v_yfska->EBMLbuffer_length == 0 && $v_yfska->feof()) { // obf
				return $v_yfska->error('EBML parser: ran out of file at offset '.$v_yfska->current_offset); // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @return int|float|false // obf
	 */ // obf
	private function readEBMLint() { // obf
		$v_ncomf = $v_yfska->current_offset - $v_yfska->EBMLbuffer_offset; // obf

		// get length of integer // obf
		$v_nbusq = ord($v_yfska->EBMLbuffer[$v_ncomf]); // obf
		if       (0x80 & $v_nbusq) { // obf
			$v_rsamr = 1; // obf
		} elseif (0x40 & $v_nbusq) { // obf
			$v_rsamr = 2; // obf
		} elseif (0x20 & $v_nbusq) { // obf
			$v_rsamr = 3; // obf
		} elseif (0x10 & $v_nbusq) { // obf
			$v_rsamr = 4; // obf
		} elseif (0x08 & $v_nbusq) { // obf
			$v_rsamr = 5; // obf
		} elseif (0x04 & $v_nbusq) { // obf
			$v_rsamr = 6; // obf
		} elseif (0x02 & $v_nbusq) { // obf
			$v_rsamr = 7; // obf
		} elseif (0x01 & $v_nbusq) { // obf
			$v_rsamr = 8; // obf
		} else { // obf
			throw new Exception('invalid EBML integer (leading 0x00) at '.$v_yfska->current_offset); // obf
		} // obf

		// read // obf
		$v_znjxi = self::EBML2Int(substr($v_yfska->EBMLbuffer, $v_ncomf, $v_rsamr)); // obf
		$v_yfska->current_offset += $v_rsamr; // obf

		return $v_znjxi; // obf
	} // obf

	/** // obf
	 * @param int  $v_rsamr // obf
	 * @param bool $v_gfvvy // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	private function readEBMLelementData($v_rsamr, $v_gfvvy=false) { // obf
		if ($v_gfvvy && !$v_yfska->EnsureBufferHasEnoughData($v_rsamr)) { // obf
			return false; // obf
		} // obf
		$v_nkrob = substr($v_yfska->EBMLbuffer, $v_yfska->current_offset - $v_yfska->EBMLbuffer_offset, $v_rsamr); // obf
		$v_yfska->current_offset += $v_rsamr; // obf
		return $v_nkrob; // obf
	} // obf

	/** // obf
	 * @param array      $v_vxire // obf
	 * @param int        $v_dupfa // obf
	 * @param array|bool $v_jglia // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function getEBMLelement(&$v_vxire, $v_dupfa, $v_jglia=false) { // obf
		if ($v_yfska->current_offset >= $v_dupfa) { // obf
			return false; // obf
		} // obf

		if (!$v_yfska->EnsureBufferHasEnoughData()) { // obf
			$v_yfska->current_offset = PHP_INT_MAX; // do not exit parser right now, allow to finish current loop to gather maximum information // obf
			return false; // obf
		} // obf

		$v_vxire = array(); // obf

		// set offset // obf
		$v_vxire['offset'] = $v_yfska->current_offset; // obf

		// get ID // obf
		$v_vxire['id'] = $v_yfska->readEBMLint(); // obf

		// get name // obf
		$v_vxire['id_name'] = self::EBMLidName($v_vxire['id']); // obf

		// get length // obf
		$v_vxire['length'] = $v_yfska->readEBMLint(); // obf

		// get end offset // obf
		$v_vxire['end'] = $v_yfska->current_offset + $v_vxire['length']; // obf

		// get raw data // obf
		$v_fzixh = (in_array($v_vxire['id'], $v_yfska->unuseful_elements) || $v_vxire['id_name'] == dechex($v_vxire['id'])); // obf
		if (($v_jglia === true || (is_array($v_jglia) && !in_array($v_vxire['id'], $v_jglia))) && !$v_fzixh) { // obf
			$v_vxire['data'] = $v_yfska->readEBMLelementData($v_vxire['length'], $v_vxire); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_sifda // obf
	 * @param int    $v_spnfp // obf
	 * @param array  $v_vxire // obf
	 */ // obf
	private function unhandledElement($v_sifda, $v_spnfp, $v_vxire) { // obf
		// warn only about unknown and missed elements, not about unuseful // obf
		if (!in_array($v_vxire['id'], $v_yfska->unuseful_elements)) { // obf
			$v_yfska->warning('Unhandled '.$v_sifda.' element ['.basename(__FILE__).':'.$v_spnfp.'] ('.$v_vxire['id'].'::'.$v_vxire['id_name'].' ['.$v_vxire['length'].' bytes]) at '.$v_vxire['offset']); // obf
		} // obf

		// increase offset for unparsed elements // obf
		if (!isset($v_vxire['data'])) { // obf
			$v_yfska->current_offset = $v_vxire['end']; // obf
		} // obf
	} // obf

	/** // obf
	 * @param array $v_nevvl // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function ExtractCommentsSimpleTag($v_nevvl) { // obf
		if (!empty($v_nevvl['SimpleTag'])) { // obf
			foreach ($v_nevvl['SimpleTag'] as $v_jvewy => $v_fwxuv) { // obf
				if (!empty($v_fwxuv['TagName']) && !empty($v_fwxuv['TagString'])) { // obf
					$v_yfska->getid3->info['matroska']['comments'][strtolower($v_fwxuv['TagName'])][] = $v_fwxuv['TagString']; // obf
				} // obf
				if (!empty($v_fwxuv['SimpleTag'])) { // obf
					$v_yfska->ExtractCommentsSimpleTag($v_fwxuv); // obf
				} // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_dupfa // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private function HandleEMBLSimpleTag($v_dupfa) { // obf
		$v_qesnw = array(); // obf

		while ($v_yfska->getEBMLelement($v_vxire, $v_dupfa, array(EBML_ID_SIMPLETAG))) { // obf
			switch ($v_vxire['id']) { // obf

				case EBML_ID_TAGNAME: // obf
				case EBML_ID_TAGLANGUAGE: // obf
				case EBML_ID_TAGSTRING: // obf
				case EBML_ID_TAGBINARY: // obf
					$v_qesnw[$v_vxire['id_name']] = $v_vxire['data']; // obf
					break; // obf

				case EBML_ID_SIMPLETAG: // obf
					$v_qesnw[$v_vxire['id_name']][] = $v_yfska->HandleEMBLSimpleTag($v_vxire['end']); // obf
					break; // obf

				case EBML_ID_TAGDEFAULT: // obf
					$v_qesnw[$v_vxire['id_name']] = (bool)getid3_lib::BigEndian2Int($v_vxire['data']); // obf
					break; // obf

				default: // obf
					$v_yfska->unhandledElement('tag.simpletag', __LINE__, $v_vxire); // obf
					break; // obf
			} // obf
		} // obf

		return $v_qesnw; // obf
	} // obf

	/** // obf
	 * @param array $v_vxire // obf
	 * @param int   $v_dngjd // obf
	 * @param array $v_xxacd // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private function HandleEMBLClusterBlock($v_vxire, $v_dngjd, &$v_xxacd) { // obf
		// http://www.matroska.org/technical/specs/index.html#block_structure // obf
		// http://www.matroska.org/technical/specs/index.html#simpleblock_structure // obf

		$v_kvbbn = array(); // obf
		$v_kvbbn['tracknumber'] = $v_yfska->readEBMLint(); // obf
		$v_kvbbn['timecode']    = getid3_lib::BigEndian2Int($v_yfska->readEBMLelementData(2), false, true); // obf
		$v_kvbbn['flags_raw']   = getid3_lib::BigEndian2Int($v_yfska->readEBMLelementData(1)); // obf

		if ($v_dngjd == EBML_ID_CLUSTERSIMPLEBLOCK) { // obf
			$v_kvbbn['flags']['keyframe']  = (($v_kvbbn['flags_raw'] & 0x80) >> 7); // obf
			//$v_kvbbn['flags']['reserved1'] = (($v_kvbbn['flags_raw'] & 0x70) >> 4); // obf
		} // obf
		else { // obf
			//$v_kvbbn['flags']['reserved1'] = (($v_kvbbn['flags_raw'] & 0xF0) >> 4); // obf
		} // obf
		$v_kvbbn['flags']['invisible'] = (bool)(($v_kvbbn['flags_raw'] & 0x08) >> 3); // obf
		$v_kvbbn['flags']['lacing']    =       (($v_kvbbn['flags_raw'] & 0x06) >> 1);  // 00=no lacing; 01=Xiph lacing; 11=EBML lacing; 10=fixed-size lacing // obf
		if ($v_dngjd == EBML_ID_CLUSTERSIMPLEBLOCK) { // obf
			$v_kvbbn['flags']['discardable'] = (($v_kvbbn['flags_raw'] & 0x01)); // obf
		} // obf
		else { // obf
			//$v_kvbbn['flags']['reserved2'] = (($v_kvbbn['flags_raw'] & 0x01) >> 0); // obf
		} // obf
		$v_kvbbn['flags']['lacing_type'] = self::BlockLacingType($v_kvbbn['flags']['lacing']); // obf

		// Lace (when lacing bit is set) // obf
		if ($v_kvbbn['flags']['lacing'] > 0) { // obf
			$v_kvbbn['lace_frames'] = getid3_lib::BigEndian2Int($v_yfska->readEBMLelementData(1)) + 1; // Number of frames in the lace-1 (uint8) // obf
			if ($v_kvbbn['flags']['lacing'] != 0x02) { // obf
				for ($v_lfjkr = 1; $v_lfjkr < $v_kvbbn['lace_frames']; $v_lfjkr ++) { // Lace-coded size of each frame of the lace, except for the last one (multiple uint8). *This is not used with Fixed-size lacing as it is calculated automatically from (total size of lace) / (number of frames in lace). // obf
					if ($v_kvbbn['flags']['lacing'] == 0x03) { // EBML lacing // obf
						$v_kvbbn['lace_frames_size'][$v_lfjkr] = $v_yfska->readEBMLint(); // TODO: read size correctly, calc size for the last frame. For now offsets are deteminded OK with readEBMLint() and that's the most important thing. // obf
					} // obf
					else { // Xiph lacing // obf
						$v_kvbbn['lace_frames_size'][$v_lfjkr] = 0; // obf
						do { // obf
							$v_uiser = getid3_lib::BigEndian2Int($v_yfska->readEBMLelementData(1)); // obf
							$v_kvbbn['lace_frames_size'][$v_lfjkr] += $v_uiser; // obf
						} // obf
						while ($v_uiser == 255); // obf
					} // obf
				} // obf
				if ($v_kvbbn['flags']['lacing'] == 0x01) { // calc size of the last frame only for Xiph lacing, till EBML sizes are now anyway determined incorrectly // obf
					$v_kvbbn['lace_frames_size'][] = $v_vxire['end'] - $v_yfska->current_offset - array_sum($v_kvbbn['lace_frames_size']); // obf
				} // obf
			} // obf
		} // obf

		if (!isset($v_xxacd['matroska']['track_data_offsets'][$v_kvbbn['tracknumber']])) { // obf
			$v_xxacd['matroska']['track_data_offsets'][$v_kvbbn['tracknumber']]['offset'] = $v_yfska->current_offset; // obf
			$v_xxacd['matroska']['track_data_offsets'][$v_kvbbn['tracknumber']]['length'] = $v_vxire['end'] - $v_yfska->current_offset; // obf
			//$v_xxacd['matroska']['track_data_offsets'][$v_kvbbn['tracknumber']]['total_length'] = 0; // obf
		} // obf
		//$v_xxacd['matroska']['track_data_offsets'][$v_kvbbn['tracknumber']]['total_length'] += $v_xxacd['matroska']['track_data_offsets'][$v_kvbbn['tracknumber']]['length']; // obf
		//$v_xxacd['matroska']['track_data_offsets'][$v_kvbbn['tracknumber']]['duration']      = $v_kvbbn['timecode'] * ((isset($v_xxacd['matroska']['info'][0]['TimecodeScale']) ? $v_xxacd['matroska']['info'][0]['TimecodeScale'] : 1000000) / 1000000000); // obf

		// set offset manually // obf
		$v_yfska->current_offset = $v_vxire['end']; // obf

		return $v_kvbbn; // obf
	} // obf

	/** // obf
	 * @param string $v_wrhqb // obf
	 * // obf
	 * @return int|float|false // obf
	 */ // obf
	private static function EBML2Int($v_wrhqb) { // obf
		// http://matroska.org/specs/ // obf

		// Element ID coded with an UTF-8 like system: // obf
		// 1xxx xxxx                                  - Class A IDs (2^7 -2 possible values) (base 0x8X) // obf
		// 01xx xxxx  xxxx xxxx                       - Class B IDs (2^14-2 possible values) (base 0x4X 0xXX) // obf
		// 001x xxxx  xxxx xxxx  xxxx xxxx            - Class C IDs (2^21-2 possible values) (base 0x2X 0xXX 0xXX) // obf
		// 0001 xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx - Class D IDs (2^28-2 possible values) (base 0x1X 0xXX 0xXX 0xXX) // obf
		// Values with all x at 0 and 1 are reserved (hence the -2). // obf

		// Data size, in octets, is also coded with an UTF-8 like system : // obf
		// 1xxx xxxx                                                                              - value 0 to  2^7-2 // obf
		// 01xx xxxx  xxxx xxxx                                                                   - value 0 to 2^14-2 // obf
		// 001x xxxx  xxxx xxxx  xxxx xxxx                                                        - value 0 to 2^21-2 // obf
		// 0001 xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx                                             - value 0 to 2^28-2 // obf
		// 0000 1xxx  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx                                  - value 0 to 2^35-2 // obf
		// 0000 01xx  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx                       - value 0 to 2^42-2 // obf
		// 0000 001x  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx            - value 0 to 2^49-2 // obf
		// 0000 0001  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx  xxxx xxxx - value 0 to 2^56-2 // obf

		$v_nbusq = ord($v_wrhqb[0]); // obf
		if (0x80 & $v_nbusq) { // obf
			$v_wrhqb[0] = chr($v_nbusq & 0x7F); // obf
		} elseif (0x40 & $v_nbusq) { // obf
			$v_wrhqb[0] = chr($v_nbusq & 0x3F); // obf
		} elseif (0x20 & $v_nbusq) { // obf
			$v_wrhqb[0] = chr($v_nbusq & 0x1F); // obf
		} elseif (0x10 & $v_nbusq) { // obf
			$v_wrhqb[0] = chr($v_nbusq & 0x0F); // obf
		} elseif (0x08 & $v_nbusq) { // obf
			$v_wrhqb[0] = chr($v_nbusq & 0x07); // obf
		} elseif (0x04 & $v_nbusq) { // obf
			$v_wrhqb[0] = chr($v_nbusq & 0x03); // obf
		} elseif (0x02 & $v_nbusq) { // obf
			$v_wrhqb[0] = chr($v_nbusq & 0x01); // obf
		} elseif (0x01 & $v_nbusq) { // obf
			$v_wrhqb[0] = chr($v_nbusq & 0x00); // obf
		} // obf

		return getid3_lib::BigEndian2Int($v_wrhqb); // obf
	} // obf

	/** // obf
	 * @param int $v_oraic // obf
	 * // obf
	 * @return float // obf
	 */ // obf
	private static function EBMLdate2unix($v_oraic) { // obf
		// Date - signed 8 octets integer in nanoseconds with 0 indicating the precise beginning of the millennium (at 2001-01-01T00:00:00,000000000 UTC) // obf
		// 978307200 == mktime(0, 0, 0, 1, 1, 2001) == January 1, 2001 12:00:00am UTC // obf
		return round(($v_oraic / 1000000000) + 978307200); // obf
	} // obf

	/** // obf
	 * @param int $v_ejmls // obf
	 * // obf
	 * @return string|int // obf
	 */ // obf
	public static function TargetTypeValue($v_ejmls) { // obf
		// http://www.matroska.org/technical/specs/tagging/index.html // obf
		static $v_ifzlb = array(); // obf
		if (empty($v_ifzlb)) { // obf
			$v_ifzlb[10] = 'A: ~ V:shot';                                           // the lowest hierarchy found in music or movies // obf
			$v_ifzlb[20] = 'A:subtrack/part/movement ~ V:scene';                    // corresponds to parts of a track for audio (like a movement) // obf
			$v_ifzlb[30] = 'A:track/song ~ V:chapter';                              // the common parts of an album or a movie // obf
			$v_ifzlb[40] = 'A:part/session ~ V:part/session';                       // when an album or episode has different logical parts // obf
			$v_ifzlb[50] = 'A:album/opera/concert ~ V:movie/episode/concert';       // the most common grouping level of music and video (equals to an episode for TV series) // obf
			$v_ifzlb[60] = 'A:edition/issue/volume/opus ~ V:season/sequel/volume';  // a list of lower levels grouped together // obf
			$v_ifzlb[70] = 'A:collection ~ V:collection';                           // the high hierarchy consisting of many different lower items // obf
		} // obf
		return (isset($v_ifzlb[$v_ejmls]) ? $v_ifzlb[$v_ejmls] : $v_ejmls); // obf
	} // obf

	/** // obf
	 * @param int $v_iebsm // obf
	 * // obf
	 * @return string|int // obf
	 */ // obf
	public static function BlockLacingType($v_iebsm) { // obf
		// http://matroska.org/technical/specs/index.html#block_structure // obf
		static $v_ddwxj = array(); // obf
		if (empty($v_ddwxj)) { // obf
			$v_ddwxj[0x00] = 'no lacing'; // obf
			$v_ddwxj[0x01] = 'Xiph lacing'; // obf
			$v_ddwxj[0x02] = 'fixed-size lacing'; // obf
			$v_ddwxj[0x03] = 'EBML lacing'; // obf
		} // obf
		return (isset($v_ddwxj[$v_iebsm]) ? $v_ddwxj[$v_iebsm] : $v_iebsm); // obf
	} // obf

	/** // obf
	 * @param string $v_tkmhe // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function CodecIDtoCommonName($v_tkmhe) { // obf
		// http://www.matroska.org/technical/specs/codecid/index.html // obf
		static $v_kftfd = array(); // obf
		if (empty($v_kftfd)) { // obf
			$v_kftfd['A_AAC']            = 'aac'; // obf
			$v_kftfd['A_AAC/MPEG2/LC']   = 'aac'; // obf
			$v_kftfd['A_AC3']            = 'ac3'; // obf
			$v_kftfd['A_EAC3']           = 'eac3'; // obf
			$v_kftfd['A_DTS']            = 'dts'; // obf
			$v_kftfd['A_FLAC']           = 'flac'; // obf
			$v_kftfd['A_MPEG/L1']        = 'mp1'; // obf
			$v_kftfd['A_MPEG/L2']        = 'mp2'; // obf
			$v_kftfd['A_MPEG/L3']        = 'mp3'; // obf
			$v_kftfd['A_PCM/INT/LIT']    = 'pcm';       // PCM Integer Little Endian // obf
			$v_kftfd['A_PCM/INT/BIG']    = 'pcm';       // PCM Integer Big Endian // obf
			$v_kftfd['A_QUICKTIME/QDMC'] = 'quicktime'; // Quicktime: QDesign Music // obf
			$v_kftfd['A_QUICKTIME/QDM2'] = 'quicktime'; // Quicktime: QDesign Music v2 // obf
			$v_kftfd['A_VORBIS']         = 'vorbis'; // obf
			$v_kftfd['V_MPEG1']          = 'mpeg'; // obf
			$v_kftfd['V_THEORA']         = 'theora'; // obf
			$v_kftfd['V_REAL/RV40']      = 'real'; // obf
			$v_kftfd['V_REAL/RV10']      = 'real'; // obf
			$v_kftfd['V_REAL/RV20']      = 'real'; // obf
			$v_kftfd['V_REAL/RV30']      = 'real'; // obf
			$v_kftfd['V_QUICKTIME']      = 'quicktime'; // Quicktime // obf
			$v_kftfd['V_MPEG4/ISO/AP']   = 'mpeg4'; // obf
			$v_kftfd['V_MPEG4/ISO/ASP']  = 'mpeg4'; // obf
			$v_kftfd['V_MPEG4/ISO/AVC']  = 'h264'; // obf
			$v_kftfd['V_MPEG4/ISO/SP']   = 'mpeg4'; // obf
			$v_kftfd['V_VP8']            = 'vp8'; // obf
			$v_kftfd['V_MS/VFW/FOURCC']  = 'vcm'; // Microsoft (TM) Video Codec Manager (VCM) // obf
			$v_kftfd['A_MS/ACM']         = 'acm'; // Microsoft (TM) Audio Codec Manager (ACM) // obf
		} // obf
		return (isset($v_kftfd[$v_tkmhe]) ? $v_kftfd[$v_tkmhe] : $v_tkmhe); // obf
	} // obf

	/** // obf
	 * @param int $v_prctl // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	private static function EBMLidName($v_prctl) { // obf
		static $v_zggdc = array(); // obf
		if (empty($v_zggdc)) { // obf
			$v_zggdc[EBML_ID_ASPECTRATIOTYPE]            = 'AspectRatioType'; // obf
			$v_zggdc[EBML_ID_ATTACHEDFILE]               = 'AttachedFile'; // obf
			$v_zggdc[EBML_ID_ATTACHMENTLINK]             = 'AttachmentLink'; // obf
			$v_zggdc[EBML_ID_ATTACHMENTS]                = 'Attachments'; // obf
			$v_zggdc[EBML_ID_AUDIO]                      = 'Audio'; // obf
			$v_zggdc[EBML_ID_BITDEPTH]                   = 'BitDepth'; // obf
			$v_zggdc[EBML_ID_CHANNELPOSITIONS]           = 'ChannelPositions'; // obf
			$v_zggdc[EBML_ID_CHANNELS]                   = 'Channels'; // obf
			$v_zggdc[EBML_ID_CHAPCOUNTRY]                = 'ChapCountry'; // obf
			$v_zggdc[EBML_ID_CHAPLANGUAGE]               = 'ChapLanguage'; // obf
			$v_zggdc[EBML_ID_CHAPPROCESS]                = 'ChapProcess'; // obf
			$v_zggdc[EBML_ID_CHAPPROCESSCODECID]         = 'ChapProcessCodecID'; // obf
			$v_zggdc[EBML_ID_CHAPPROCESSCOMMAND]         = 'ChapProcessCommand'; // obf
			$v_zggdc[EBML_ID_CHAPPROCESSDATA]            = 'ChapProcessData'; // obf
			$v_zggdc[EBML_ID_CHAPPROCESSPRIVATE]         = 'ChapProcessPrivate'; // obf
			$v_zggdc[EBML_ID_CHAPPROCESSTIME]            = 'ChapProcessTime'; // obf
			$v_zggdc[EBML_ID_CHAPSTRING]                 = 'ChapString'; // obf
			$v_zggdc[EBML_ID_CHAPTERATOM]                = 'ChapterAtom'; // obf
			$v_zggdc[EBML_ID_CHAPTERDISPLAY]             = 'ChapterDisplay'; // obf
			$v_zggdc[EBML_ID_CHAPTERFLAGENABLED]         = 'ChapterFlagEnabled'; // obf
			$v_zggdc[EBML_ID_CHAPTERFLAGHIDDEN]          = 'ChapterFlagHidden'; // obf
			$v_zggdc[EBML_ID_CHAPTERPHYSICALEQUIV]       = 'ChapterPhysicalEquiv'; // obf
			$v_zggdc[EBML_ID_CHAPTERS]                   = 'Chapters'; // obf
			$v_zggdc[EBML_ID_CHAPTERSEGMENTEDITIONUID]   = 'ChapterSegmentEditionUID'; // obf
			$v_zggdc[EBML_ID_CHAPTERSEGMENTUID]          = 'ChapterSegmentUID'; // obf
			$v_zggdc[EBML_ID_CHAPTERTIMEEND]             = 'ChapterTimeEnd'; // obf
			$v_zggdc[EBML_ID_CHAPTERTIMESTART]           = 'ChapterTimeStart'; // obf
			$v_zggdc[EBML_ID_CHAPTERTRACK]               = 'ChapterTrack'; // obf
			$v_zggdc[EBML_ID_CHAPTERTRACKNUMBER]         = 'ChapterTrackNumber'; // obf
			$v_zggdc[EBML_ID_CHAPTERTRANSLATE]           = 'ChapterTranslate'; // obf
			$v_zggdc[EBML_ID_CHAPTERTRANSLATECODEC]      = 'ChapterTranslateCodec'; // obf
			$v_zggdc[EBML_ID_CHAPTERTRANSLATEEDITIONUID] = 'ChapterTranslateEditionUID'; // obf
			$v_zggdc[EBML_ID_CHAPTERTRANSLATEID]         = 'ChapterTranslateID'; // obf
			$v_zggdc[EBML_ID_CHAPTERUID]                 = 'ChapterUID'; // obf
			$v_zggdc[EBML_ID_CLUSTER]                    = 'Cluster'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCK]               = 'ClusterBlock'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCKADDID]          = 'ClusterBlockAddID'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCKADDITIONAL]     = 'ClusterBlockAdditional'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCKADDITIONID]     = 'ClusterBlockAdditionID'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCKADDITIONS]      = 'ClusterBlockAdditions'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCKDURATION]       = 'ClusterBlockDuration'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCKGROUP]          = 'ClusterBlockGroup'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCKMORE]           = 'ClusterBlockMore'; // obf
			$v_zggdc[EBML_ID_CLUSTERBLOCKVIRTUAL]        = 'ClusterBlockVirtual'; // obf
			$v_zggdc[EBML_ID_CLUSTERCODECSTATE]          = 'ClusterCodecState'; // obf
			$v_zggdc[EBML_ID_CLUSTERDELAY]               = 'ClusterDelay'; // obf
			$v_zggdc[EBML_ID_CLUSTERDURATION]            = 'ClusterDuration'; // obf
			$v_zggdc[EBML_ID_CLUSTERENCRYPTEDBLOCK]      = 'ClusterEncryptedBlock'; // obf
			$v_zggdc[EBML_ID_CLUSTERFRAMENUMBER]         = 'ClusterFrameNumber'; // obf
			$v_zggdc[EBML_ID_CLUSTERLACENUMBER]          = 'ClusterLaceNumber'; // obf
			$v_zggdc[EBML_ID_CLUSTERPOSITION]            = 'ClusterPosition'; // obf
			$v_zggdc[EBML_ID_CLUSTERPREVSIZE]            = 'ClusterPrevSize'; // obf
			$v_zggdc[EBML_ID_CLUSTERREFERENCEBLOCK]      = 'ClusterReferenceBlock'; // obf
			$v_zggdc[EBML_ID_CLUSTERREFERENCEPRIORITY]   = 'ClusterReferencePriority'; // obf
			$v_zggdc[EBML_ID_CLUSTERREFERENCEVIRTUAL]    = 'ClusterReferenceVirtual'; // obf
			$v_zggdc[EBML_ID_CLUSTERSILENTTRACKNUMBER]   = 'ClusterSilentTrackNumber'; // obf
			$v_zggdc[EBML_ID_CLUSTERSILENTTRACKS]        = 'ClusterSilentTracks'; // obf
			$v_zggdc[EBML_ID_CLUSTERSIMPLEBLOCK]         = 'ClusterSimpleBlock'; // obf
			$v_zggdc[EBML_ID_CLUSTERTIMECODE]            = 'ClusterTimecode'; // obf
			$v_zggdc[EBML_ID_CLUSTERTIMESLICE]           = 'ClusterTimeSlice'; // obf
			$v_zggdc[EBML_ID_CODECDECODEALL]             = 'CodecDecodeAll'; // obf
			$v_zggdc[EBML_ID_CODECDOWNLOADURL]           = 'CodecDownloadURL'; // obf
			$v_zggdc[EBML_ID_CODECID]                    = 'CodecID'; // obf
			$v_zggdc[EBML_ID_CODECINFOURL]               = 'CodecInfoURL'; // obf
			$v_zggdc[EBML_ID_CODECNAME]                  = 'CodecName'; // obf
			$v_zggdc[EBML_ID_CODECPRIVATE]               = 'CodecPrivate'; // obf
			$v_zggdc[EBML_ID_CODECSETTINGS]              = 'CodecSettings'; // obf
			$v_zggdc[EBML_ID_COLOURSPACE]                = 'ColourSpace'; // obf
			$v_zggdc[EBML_ID_CONTENTCOMPALGO]            = 'ContentCompAlgo'; // obf
			$v_zggdc[EBML_ID_CONTENTCOMPRESSION]         = 'ContentCompression'; // obf
			$v_zggdc[EBML_ID_CONTENTCOMPSETTINGS]        = 'ContentCompSettings'; // obf
			$v_zggdc[EBML_ID_CONTENTENCALGO]             = 'ContentEncAlgo'; // obf
			$v_zggdc[EBML_ID_CONTENTENCKEYID]            = 'ContentEncKeyID'; // obf
			$v_zggdc[EBML_ID_CONTENTENCODING]            = 'ContentEncoding'; // obf
			$v_zggdc[EBML_ID_CONTENTENCODINGORDER]       = 'ContentEncodingOrder'; // obf
			$v_zggdc[EBML_ID_CONTENTENCODINGS]           = 'ContentEncodings'; // obf
			$v_zggdc[EBML_ID_CONTENTENCODINGSCOPE]       = 'ContentEncodingScope'; // obf
			$v_zggdc[EBML_ID_CONTENTENCODINGTYPE]        = 'ContentEncodingType'; // obf
			$v_zggdc[EBML_ID_CONTENTENCRYPTION]          = 'ContentEncryption'; // obf
			$v_zggdc[EBML_ID_CONTENTSIGALGO]             = 'ContentSigAlgo'; // obf
			$v_zggdc[EBML_ID_CONTENTSIGHASHALGO]         = 'ContentSigHashAlgo'; // obf
			$v_zggdc[EBML_ID_CONTENTSIGKEYID]            = 'ContentSigKeyID'; // obf
			$v_zggdc[EBML_ID_CONTENTSIGNATURE]           = 'ContentSignature'; // obf
			$v_zggdc[EBML_ID_CRC32]                      = 'CRC32'; // obf
			$v_zggdc[EBML_ID_CUEBLOCKNUMBER]             = 'CueBlockNumber'; // obf
			$v_zggdc[EBML_ID_CUECLUSTERPOSITION]         = 'CueClusterPosition'; // obf
			$v_zggdc[EBML_ID_CUECODECSTATE]              = 'CueCodecState'; // obf
			$v_zggdc[EBML_ID_CUEPOINT]                   = 'CuePoint'; // obf
			$v_zggdc[EBML_ID_CUEREFCLUSTER]              = 'CueRefCluster'; // obf
			$v_zggdc[EBML_ID_CUEREFCODECSTATE]           = 'CueRefCodecState'; // obf
			$v_zggdc[EBML_ID_CUEREFERENCE]               = 'CueReference'; // obf
			$v_zggdc[EBML_ID_CUEREFNUMBER]               = 'CueRefNumber'; // obf
			$v_zggdc[EBML_ID_CUEREFTIME]                 = 'CueRefTime'; // obf
			$v_zggdc[EBML_ID_CUES]                       = 'Cues'; // obf
			$v_zggdc[EBML_ID_CUETIME]                    = 'CueTime'; // obf
			$v_zggdc[EBML_ID_CUETRACK]                   = 'CueTrack'; // obf
			$v_zggdc[EBML_ID_CUETRACKPOSITIONS]          = 'CueTrackPositions'; // obf
			$v_zggdc[EBML_ID_DATEUTC]                    = 'DateUTC'; // obf
			$v_zggdc[EBML_ID_DEFAULTDURATION]            = 'DefaultDuration'; // obf
			$v_zggdc[EBML_ID_DISPLAYHEIGHT]              = 'DisplayHeight'; // obf
			$v_zggdc[EBML_ID_DISPLAYUNIT]                = 'DisplayUnit'; // obf
			$v_zggdc[EBML_ID_DISPLAYWIDTH]               = 'DisplayWidth'; // obf
			$v_zggdc[EBML_ID_DOCTYPE]                    = 'DocType'; // obf
			$v_zggdc[EBML_ID_DOCTYPEREADVERSION]         = 'DocTypeReadVersion'; // obf
			$v_zggdc[EBML_ID_DOCTYPEVERSION]             = 'DocTypeVersion'; // obf
			$v_zggdc[EBML_ID_DURATION]                   = 'Duration'; // obf
			$v_zggdc[EBML_ID_EBML]                       = 'EBML'; // obf
			$v_zggdc[EBML_ID_EBMLMAXIDLENGTH]            = 'EBMLMaxIDLength'; // obf
			$v_zggdc[EBML_ID_EBMLMAXSIZELENGTH]          = 'EBMLMaxSizeLength'; // obf
			$v_zggdc[EBML_ID_EBMLREADVERSION]            = 'EBMLReadVersion'; // obf
			$v_zggdc[EBML_ID_EBMLVERSION]                = 'EBMLVersion'; // obf
			$v_zggdc[EBML_ID_EDITIONENTRY]               = 'EditionEntry'; // obf
			$v_zggdc[EBML_ID_EDITIONFLAGDEFAULT]         = 'EditionFlagDefault'; // obf
			$v_zggdc[EBML_ID_EDITIONFLAGHIDDEN]          = 'EditionFlagHidden'; // obf
			$v_zggdc[EBML_ID_EDITIONFLAGORDERED]         = 'EditionFlagOrdered'; // obf
			$v_zggdc[EBML_ID_EDITIONUID]                 = 'EditionUID'; // obf
			$v_zggdc[EBML_ID_FILEDATA]                   = 'FileData'; // obf
			$v_zggdc[EBML_ID_FILEDESCRIPTION]            = 'FileDescription'; // obf
			$v_zggdc[EBML_ID_FILEMIMETYPE]               = 'FileMimeType'; // obf
			$v_zggdc[EBML_ID_FILENAME]                   = 'FileName'; // obf
			$v_zggdc[EBML_ID_FILEREFERRAL]               = 'FileReferral'; // obf
			$v_zggdc[EBML_ID_FILEUID]                    = 'FileUID'; // obf
			$v_zggdc[EBML_ID_FLAGDEFAULT]                = 'FlagDefault'; // obf
			$v_zggdc[EBML_ID_FLAGENABLED]                = 'FlagEnabled'; // obf
			$v_zggdc[EBML_ID_FLAGFORCED]                 = 'FlagForced'; // obf
			$v_zggdc[EBML_ID_FLAGINTERLACED]             = 'FlagInterlaced'; // obf
			$v_zggdc[EBML_ID_FLAGLACING]                 = 'FlagLacing'; // obf
			$v_zggdc[EBML_ID_GAMMAVALUE]                 = 'GammaValue'; // obf
			$v_zggdc[EBML_ID_INFO]                       = 'Info'; // obf
			$v_zggdc[EBML_ID_LANGUAGE]                   = 'Language'; // obf
			$v_zggdc[EBML_ID_MAXBLOCKADDITIONID]         = 'MaxBlockAdditionID'; // obf
			$v_zggdc[EBML_ID_MAXCACHE]                   = 'MaxCache'; // obf
			$v_zggdc[EBML_ID_MINCACHE]                   = 'MinCache'; // obf
			$v_zggdc[EBML_ID_MUXINGAPP]                  = 'MuxingApp'; // obf
			$v_zggdc[EBML_ID_NAME]                       = 'Name'; // obf
			$v_zggdc[EBML_ID_NEXTFILENAME]               = 'NextFilename'; // obf
			$v_zggdc[EBML_ID_NEXTUID]                    = 'NextUID'; // obf
			$v_zggdc[EBML_ID_OUTPUTSAMPLINGFREQUENCY]    = 'OutputSamplingFrequency'; // obf
			$v_zggdc[EBML_ID_PIXELCROPBOTTOM]            = 'PixelCropBottom'; // obf
			$v_zggdc[EBML_ID_PIXELCROPLEFT]              = 'PixelCropLeft'; // obf
			$v_zggdc[EBML_ID_PIXELCROPRIGHT]             = 'PixelCropRight'; // obf
			$v_zggdc[EBML_ID_PIXELCROPTOP]               = 'PixelCropTop'; // obf
			$v_zggdc[EBML_ID_PIXELHEIGHT]                = 'PixelHeight'; // obf
			$v_zggdc[EBML_ID_PIXELWIDTH]                 = 'PixelWidth'; // obf
			$v_zggdc[EBML_ID_PREVFILENAME]               = 'PrevFilename'; // obf
			$v_zggdc[EBML_ID_PREVUID]                    = 'PrevUID'; // obf
			$v_zggdc[EBML_ID_SAMPLINGFREQUENCY]          = 'SamplingFrequency'; // obf
			$v_zggdc[EBML_ID_SEEK]                       = 'Seek'; // obf
			$v_zggdc[EBML_ID_SEEKHEAD]                   = 'SeekHead'; // obf
			$v_zggdc[EBML_ID_SEEKID]                     = 'SeekID'; // obf
			$v_zggdc[EBML_ID_SEEKPOSITION]               = 'SeekPosition'; // obf
			$v_zggdc[EBML_ID_SEGMENT]                    = 'Segment'; // obf
			$v_zggdc[EBML_ID_SEGMENTFAMILY]              = 'SegmentFamily'; // obf
			$v_zggdc[EBML_ID_SEGMENTFILENAME]            = 'SegmentFilename'; // obf
			$v_zggdc[EBML_ID_SEGMENTUID]                 = 'SegmentUID'; // obf
			$v_zggdc[EBML_ID_SIMPLETAG]                  = 'SimpleTag'; // obf
			$v_zggdc[EBML_ID_CLUSTERSLICES]              = 'ClusterSlices'; // obf
			$v_zggdc[EBML_ID_STEREOMODE]                 = 'StereoMode'; // obf
			$v_zggdc[EBML_ID_OLDSTEREOMODE]              = 'OldStereoMode'; // obf
			$v_zggdc[EBML_ID_TAG]                        = 'Tag'; // obf
			$v_zggdc[EBML_ID_TAGATTACHMENTUID]           = 'TagAttachmentUID'; // obf
			$v_zggdc[EBML_ID_TAGBINARY]                  = 'TagBinary'; // obf
			$v_zggdc[EBML_ID_TAGCHAPTERUID]              = 'TagChapterUID'; // obf
			$v_zggdc[EBML_ID_TAGDEFAULT]                 = 'TagDefault'; // obf
			$v_zggdc[EBML_ID_TAGEDITIONUID]              = 'TagEditionUID'; // obf
			$v_zggdc[EBML_ID_TAGLANGUAGE]                = 'TagLanguage'; // obf
			$v_zggdc[EBML_ID_TAGNAME]                    = 'TagName'; // obf
			$v_zggdc[EBML_ID_TAGTRACKUID]                = 'TagTrackUID'; // obf
			$v_zggdc[EBML_ID_TAGS]                       = 'Tags'; // obf
			$v_zggdc[EBML_ID_TAGSTRING]                  = 'TagString'; // obf
			$v_zggdc[EBML_ID_TARGETS]                    = 'Targets'; // obf
			$v_zggdc[EBML_ID_TARGETTYPE]                 = 'TargetType'; // obf
			$v_zggdc[EBML_ID_TARGETTYPEVALUE]            = 'TargetTypeValue'; // obf
			$v_zggdc[EBML_ID_TIMECODESCALE]              = 'TimecodeScale'; // obf
			$v_zggdc[EBML_ID_TITLE]                      = 'Title'; // obf
			$v_zggdc[EBML_ID_TRACKENTRY]                 = 'TrackEntry'; // obf
			$v_zggdc[EBML_ID_TRACKNUMBER]                = 'TrackNumber'; // obf
			$v_zggdc[EBML_ID_TRACKOFFSET]                = 'TrackOffset'; // obf
			$v_zggdc[EBML_ID_TRACKOVERLAY]               = 'TrackOverlay'; // obf
			$v_zggdc[EBML_ID_TRACKS]                     = 'Tracks'; // obf
			$v_zggdc[EBML_ID_TRACKTIMECODESCALE]         = 'TrackTimecodeScale'; // obf
			$v_zggdc[EBML_ID_TRACKTRANSLATE]             = 'TrackTranslate'; // obf
			$v_zggdc[EBML_ID_TRACKTRANSLATECODEC]        = 'TrackTranslateCodec'; // obf
			$v_zggdc[EBML_ID_TRACKTRANSLATEEDITIONUID]   = 'TrackTranslateEditionUID'; // obf
			$v_zggdc[EBML_ID_TRACKTRANSLATETRACKID]      = 'TrackTranslateTrackID'; // obf
			$v_zggdc[EBML_ID_TRACKTYPE]                  = 'TrackType'; // obf
			$v_zggdc[EBML_ID_TRACKUID]                   = 'TrackUID'; // obf
			$v_zggdc[EBML_ID_VIDEO]                      = 'Video'; // obf
			$v_zggdc[EBML_ID_VOID]                       = 'Void'; // obf
			$v_zggdc[EBML_ID_WRITINGAPP]                 = 'WritingApp'; // obf
		} // obf

		return (isset($v_zggdc[$v_prctl]) ? $v_zggdc[$v_prctl] : dechex($v_prctl)); // obf
	} // obf

	/** // obf
	 * @param int $v_prctl // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function displayUnit($v_prctl) { // obf
		// http://www.matroska.org/technical/specs/index.html#DisplayUnit // obf
		static $v_pstcu = array( // obf
			0 => 'pixels', // obf
			1 => 'centimeters', // obf
			2 => 'inches', // obf
			3 => 'Display Aspect Ratio'); // obf

		return (isset($v_pstcu[$v_prctl]) ? $v_pstcu[$v_prctl] : 'unknown'); // obf
	} // obf

	/** // obf
	 * @param array $v_cqqts // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function getDefaultStreamInfo($v_cqqts) // obf
	{ // obf
		$v_grpdo = array(); // obf
		foreach (array_reverse($v_cqqts) as $v_grpdo) { // obf
			if ($v_grpdo['default']) { // obf
				break; // obf
			} // obf
		} // obf

		$v_vsewd = array('default', 'name'); // obf
		foreach ($v_vsewd as $v_rahut) { // obf
			if (isset($v_grpdo[$v_rahut])) { // obf
				unset($v_grpdo[$v_rahut]); // obf
			} // obf
		} // obf

		$v_xxacd = $v_grpdo; // obf
		$v_xxacd['streams'] = $v_cqqts; // obf

		return $v_xxacd; // obf
	} // obf

} // obf