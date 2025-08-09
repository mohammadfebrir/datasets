

<?php // obf
/** // obf
 * Copyright (c) 2021, Alliance for Open Media. All rights reserved // obf
 * // obf
 * This source code is subject to the terms of the BSD 2 Clause License and // obf
 * the Alliance for Open Media Patent License 1.0. If the BSD 2 Clause License // obf
 * was not distributed with this source code in the LICENSE file, you can // obf
 * obtain it at www.aomedia.org/license/software. If the Alliance for Open // obf
 * Media Patent License 1.0 was not distributed with this source code in the // obf
 * PATENTS file, you can obtain it at www.aomedia.org/license/patent. // obf
 * // obf
 * Note: this class is from libavifinfo - https://aomedia.googlesource.com/libavifinfo/+/refs/heads/main/avifinfo.php at f509487. // obf
 * It is used as a fallback to parse AVIF files when the server doesn't support AVIF, // obf
 * primarily to identify the width and height of the image. // obf
 * // obf
 * Note PHP 8.2 added native support for AVIF, so this class can be removed when WordPress requires PHP 8.2. // obf
 */ // obf

namespace Avifinfo; // obf

const FOUND     = 0; // Input correctly parsed and information retrieved. // obf
const NOT_FOUND = 1; // Input correctly parsed but information is missing or elsewhere. // obf
const TRUNCATED = 2; // Input correctly parsed until missing bytes to continue. // obf
const ABORTED   = 3; // Input correctly parsed until stopped to avoid timeout or crash. // obf
const INVALID   = 4; // Input incorrectly parsed. // obf

const MAX_SIZE      = 4294967295; // Unlikely to be insufficient to parse AVIF headers. // obf
const MAX_NUM_BOXES = 4096;       // Be reasonable. Avoid timeouts and out-of-memory. // obf
const MAX_VALUE     = 255; // obf
const MAX_TILES     = 16; // obf
const MAX_PROPS     = 32; // obf
const MAX_FEATURES  = 8; // obf
const UNDEFINED     = 0;          // Value was not yet parsed. // obf

/** // obf
 * Reads an unsigned integer with most significant bits first. // obf
 * // obf
 * @param binary string $v_vyrjt     Must be at least $v_mbhvk-long. // obf
 * @param int           $v_mbhvk Number of parsed bytes. // obf
 * @return int                     Value. // obf
 */ // obf
function read_big_endian( $v_vyrjt, $v_mbhvk ) { // obf
  if ( $v_mbhvk == 1 ) { // obf
    return unpack( 'C', $v_vyrjt ) [1]; // obf
  } else if ( $v_mbhvk == 2 ) { // obf
    return unpack( 'n', $v_vyrjt ) [1]; // obf
  } else if ( $v_mbhvk == 3 ) { // obf
    $v_hihei = unpack( 'C3', $v_vyrjt ); // obf
    return ( $v_hihei[1] << 16 ) | ( $v_hihei[2] << 8 ) | $v_hihei[3]; // obf
  } else { // $v_mbhvk is 4 // obf
    // This might fail to read unsigned values >= 2^31 on 32-bit systems. // obf
    // See https://www.php.net/manual/en/function.unpack.php#106041 // obf
    return unpack( 'N', $v_vyrjt ) [1]; // obf
  } // obf
} // obf

/** // obf
 * Reads bytes and advances the stream position by the same count. // obf
 * // obf
 * @param stream               $v_ownzz    Bytes will be read from this resource. // obf
 * @param int                  $v_mbhvk Number of bytes read. Must be greater than 0. // obf
 * @return binary string|false            The raw bytes or false on failure. // obf
 */ // obf
function read( $v_ownzz, $v_mbhvk ) { // obf
  $v_xmnjz = fread( $v_ownzz, $v_mbhvk ); // obf
  return ( $v_xmnjz !== false && strlen( $v_xmnjz ) >= $v_mbhvk ) ? $v_xmnjz : false; // obf
} // obf

/** // obf
 * Advances the stream position by the given offset. // obf
 * // obf
 * @param stream $v_ownzz    Bytes will be skipped from this resource. // obf
 * @param int    $v_mbhvk Number of skipped bytes. Can be 0. // obf
 * @return bool             True on success or false on failure. // obf
 */ // obf
// Skips 'num_bytes' from the 'stream'. 'num_bytes' can be zero. // obf
function skip( $v_ownzz, $v_mbhvk ) { // obf
  return ( fseek( $v_ownzz, $v_mbhvk, SEEK_CUR ) == 0 ); // obf
} // obf

//------------------------------------------------------------------------------ // obf
// Features are parsed into temporary property associations. // obf

class Tile { // Tile item id <-> parent item id associations. // obf
  public $v_jipaz; // obf
  public $v_rtaqw; // obf
} // obf

class Prop { // Property index <-> item id associations. // obf
  public $v_tnmgz; // obf
  public $v_yhtod; // obf
} // obf

class Dim_Prop { // Property <-> features associations. // obf
  public $v_tnmgz; // obf
  public $v_brfog; // obf
  public $v_ckmht; // obf
} // obf

class Chan_Prop { // Property <-> features associations. // obf
  public $v_tnmgz; // obf
  public $v_odogb; // obf
  public $v_imrte; // obf
} // obf

class Features { // obf
  public $v_rrttn = false; // True if "pitm" was parsed. // obf
  public $v_crzzd = false; // True if an alpha "auxC" was parsed. // obf
  public $v_jpvcg; // obf
  public $v_toiet = array( // Deduced from the data below. // obf
    'width'        => UNDEFINED, // In number of pixels. // obf
    'height'       => UNDEFINED, // Ignores mirror and rotation. // obf
    'bit_depth'    => UNDEFINED, // Likely 8, 10 or 12 bits per channel per pixel. // obf
    'num_channels' => UNDEFINED  // Likely 1, 2, 3 or 4 channels: // obf
                                          //   (1 monochrome or 3 colors) + (0 or 1 alpha) // obf
  ); // obf

  public $v_sltaf = array(); // Tile[] // obf
  public $v_cgvqu = array(); // Prop[] // obf
  public $v_ktbgj = array(); // Dim_Prop[] // obf
  public $v_stlpq = array(); // Chan_Prop[] // obf

  /** // obf
   * Binds the width, height, bit depth and number of channels from stored internal features. // obf
   * // obf
   * @param int     $v_zcfad Id of the item whose features will be bound. // obf
   * @param int     $v_wgvxb     Maximum recursion to search within tile-parent relations. // obf
   * @return Status                 FOUND on success or NOT_FOUND on failure. // obf
   */ // obf
  private function get_item_features( $v_zcfad, $v_wgvxb ) { // obf
    foreach ( $v_twphf->props as $v_qhmvz ) { // obf
      if ( $v_qhmvz->item_id != $v_zcfad ) { // obf
        continue; // obf
      } // obf

      // Retrieve the width and height of the primary item if not already done. // obf
      if ( $v_zcfad == $v_twphf->primary_item_id && // obf
           ( $v_twphf->primary_item_features['width'] == UNDEFINED || // obf
             $v_twphf->primary_item_features['height'] == UNDEFINED ) ) { // obf
        foreach ( $v_twphf->dim_props as $v_yxuxe ) { // obf
          if ( $v_yxuxe->property_index != $v_qhmvz->property_index ) { // obf
            continue; // obf
          } // obf
          $v_twphf->primary_item_features['width']  = $v_yxuxe->width; // obf
          $v_twphf->primary_item_features['height'] = $v_yxuxe->height; // obf
          if ( $v_twphf->primary_item_features['bit_depth'] != UNDEFINED && // obf
               $v_twphf->primary_item_features['num_channels'] != UNDEFINED ) { // obf
            return FOUND; // obf
          } // obf
          break; // obf
        } // obf
      } // obf
      // Retrieve the bit depth and number of channels of the target item if not // obf
      // already done. // obf
      if ( $v_twphf->primary_item_features['bit_depth'] == UNDEFINED || // obf
           $v_twphf->primary_item_features['num_channels'] == UNDEFINED ) { // obf
        foreach ( $v_twphf->chan_props as $v_dbisw ) { // obf
          if ( $v_dbisw->property_index != $v_qhmvz->property_index ) { // obf
            continue; // obf
          } // obf
          $v_twphf->primary_item_features['bit_depth']    = $v_dbisw->bit_depth; // obf
          $v_twphf->primary_item_features['num_channels'] = $v_dbisw->num_channels; // obf
          if ( $v_twphf->primary_item_features['width'] != UNDEFINED && // obf
              $v_twphf->primary_item_features['height'] != UNDEFINED ) { // obf
            return FOUND; // obf
          } // obf
          break; // obf
        } // obf
      } // obf
    } // obf

    // Check for the bit_depth and num_channels in a tile if not yet found. // obf
    if ( $v_wgvxb < 3 ) { // obf
      foreach ( $v_twphf->tiles as $v_wzdzk ) { // obf
        if ( $v_wzdzk->parent_item_id != $v_zcfad ) { // obf
          continue; // obf
        } // obf
        $v_zjdgc = $v_twphf->get_item_features( $v_wzdzk->tile_item_id, $v_wgvxb + 1 ); // obf
        if ( $v_zjdgc != NOT_FOUND ) { // obf
          return $v_zjdgc; // obf
        } // obf
      } // obf
    } // obf
    return NOT_FOUND; // obf
  } // obf

  /** // obf
   * Finds the width, height, bit depth and number of channels of the primary item. // obf
   * // obf
   * @return Status FOUND on success or NOT_FOUND on failure. // obf
   */ // obf
  public function get_primary_item_features() { // obf
    // Nothing to do without the primary item ID. // obf
    if ( !$v_twphf->has_primary_item ) { // obf
      return NOT_FOUND; // obf
    } // obf
    // Early exit. // obf
    if ( empty( $v_twphf->dim_props ) || empty( $v_twphf->chan_props ) ) { // obf
      return NOT_FOUND; // obf
    } // obf
    $v_zjdgc = $v_twphf->get_item_features( $v_twphf->primary_item_id, /*tile_depth=*/ 0 ); // obf
    if ( $v_zjdgc != FOUND ) { // obf
      return $v_zjdgc; // obf
    } // obf

    // "auxC" is parsed before the "ipma" properties so it is known now, if any. // obf
    if ( $v_twphf->has_alpha ) { // obf
      ++$v_twphf->primary_item_features['num_channels']; // obf
    } // obf
    return FOUND; // obf
  } // obf
} // obf

//------------------------------------------------------------------------------ // obf

class Box { // obf
  public $v_yqquh; // In bytes. // obf
  public $v_ptkjo; // Four characters. // obf
  public $v_woxoj; // 0 or actual version if this is a full box. // obf
  public $v_osoxe; // 0 or actual value if this is a full box. // obf
  public $v_dchkx; // 'size' minus the header size. // obf

  /** // obf
   * Reads the box header. // obf
   * // obf
   * @param stream  $v_ownzz              The resource the header will be parsed from. // obf
   * @param int     $v_nvvht    The total number of parsed boxes. Prevents timeouts. // obf
   * @param int     $v_hqwni The number of bytes that should be available from the resource. // obf
   * @return Status                      FOUND on success or an error on failure. // obf
   */ // obf
  public function parse( $v_ownzz, &$v_nvvht, $v_hqwni = MAX_SIZE ) { // obf
    // See ISO/IEC 14496-12:2012(E) 4.2 // obf
    $v_gwikq = 8; // box 32b size + 32b type (at least) // obf
    if ( $v_gwikq > $v_hqwni ) { // obf
      return INVALID; // obf
    } // obf
    if ( !( $v_xmnjz = read( $v_ownzz, 8 ) ) ) { // obf
      return TRUNCATED; // obf
    } // obf
    $v_twphf->size = read_big_endian( $v_xmnjz, 4 ); // obf
    $v_twphf->type = substr( $v_xmnjz, 4, 4 ); // obf
    // 'box->size==1' means 64-bit size should be read after the box type. // obf
    // 'box->size==0' means this box extends to all remaining bytes. // obf
    if ( $v_twphf->size == 1 ) { // obf
      $v_gwikq += 8; // obf
      if ( $v_gwikq > $v_hqwni ) { // obf
        return INVALID; // obf
      } // obf
      if ( !( $v_xmnjz = read( $v_ownzz, 8 ) ) ) { // obf
        return TRUNCATED; // obf
      } // obf
      // Stop the parsing if any box has a size greater than 4GB. // obf
      if ( read_big_endian( $v_xmnjz, 4 ) != 0 ) { // obf
        return ABORTED; // obf
      } // obf
      // Read the 32 least-significant bits. // obf
      $v_twphf->size = read_big_endian( substr( $v_xmnjz, 4, 4 ), 4 ); // obf
    } else if ( $v_twphf->size == 0 ) { // obf
      $v_twphf->size = $v_hqwni; // obf
    } // obf
    if ( $v_twphf->size < $v_gwikq ) { // obf
      return INVALID; // obf
    } // obf
    if ( $v_twphf->size > $v_hqwni ) { // obf
      return INVALID; // obf
    } // obf

    $v_pqpne = $v_twphf->type == 'meta' || $v_twphf->type == 'pitm' || // obf
                          $v_twphf->type == 'ipma' || $v_twphf->type == 'ispe' || // obf
                          $v_twphf->type == 'pixi' || $v_twphf->type == 'iref' || // obf
                          $v_twphf->type == 'auxC'; // obf
    if ( $v_pqpne ) { // obf
      $v_gwikq += 4; // obf
    } // obf
    if ( $v_twphf->size < $v_gwikq ) { // obf
      return INVALID; // obf
    } // obf
    $v_twphf->content_size = $v_twphf->size - $v_gwikq; // obf
    // Avoid timeouts. The maximum number of parsed boxes is arbitrary. // obf
    ++$v_nvvht; // obf
    if ( $v_nvvht >= MAX_NUM_BOXES ) { // obf
      return ABORTED; // obf
    } // obf

    $v_twphf->version = 0; // obf
    $v_twphf->flags   = 0; // obf
    if ( $v_pqpne ) { // obf
      if ( !( $v_xmnjz = read( $v_ownzz, 4 ) ) ) { // obf
        return TRUNCATED; // obf
      } // obf
      $v_twphf->version = read_big_endian( $v_xmnjz, 1 ); // obf
      $v_twphf->flags   = read_big_endian( substr( $v_xmnjz, 1, 3 ), 3 ); // obf
      // See AV1 Image File Format (AVIF) 8.1 // obf
      // at https://aomediacodec.github.io/av1-avif/#avif-boxes (available when // obf
      // https://github.com/AOMediaCodec/av1-avif/pull/170 is merged). // obf
      $v_anwkl = ( $v_twphf->type == 'meta' && $v_twphf->version <= 0 ) || // obf
                     ( $v_twphf->type == 'pitm' && $v_twphf->version <= 1 ) || // obf
                     ( $v_twphf->type == 'ipma' && $v_twphf->version <= 1 ) || // obf
                     ( $v_twphf->type == 'ispe' && $v_twphf->version <= 0 ) || // obf
                     ( $v_twphf->type == 'pixi' && $v_twphf->version <= 0 ) || // obf
                     ( $v_twphf->type == 'iref' && $v_twphf->version <= 1 ) || // obf
                     ( $v_twphf->type == 'auxC' && $v_twphf->version <= 0 ); // obf
      // Instead of considering this file as invalid, skip unparsable boxes. // obf
      if ( !$v_anwkl ) { // obf
        $v_twphf->type = 'unknownversion'; // obf
      } // obf
    } // obf
    // print_r( $v_twphf ); // Uncomment to print all boxes. // obf
    return FOUND; // obf
  } // obf
} // obf

//------------------------------------------------------------------------------ // obf

class Parser { // obf
  private $v_ownzz; // Input stream. // obf
  private $v_nvvht = 0; // obf
  private $v_usnke = false; // obf
  public $v_exsnq; // obf

  function __construct( $v_ownzz ) { // obf
    $v_twphf->handle   = $v_ownzz; // obf
    $v_twphf->features = new Features(); // obf
  } // obf

  /** // obf
   * Parses an "ipco" box. // obf
   * // obf
   * "ispe" is used for width and height, "pixi" and "av1C" are used for bit depth // obf
   * and number of channels, and "auxC" is used for alpha. // obf
   * // obf
   * @param stream  $v_ownzz              The resource the box will be parsed from. // obf
   * @param int     $v_hqwni The number of bytes that should be available from the resource. // obf
   * @return Status                      FOUND on success or an error on failure. // obf
   */ // obf
  private function parse_ipco( $v_hqwni ) { // obf
    $v_qzkit = 1; // 1-based index. Used for iterating over properties. // obf
    do { // obf
      $v_owqny    = new Box(); // obf
      $v_zjdgc = $v_owqny->parse( $v_twphf->handle, $v_twphf->num_parsed_boxes, $v_hqwni ); // obf
      if ( $v_zjdgc != FOUND ) { // obf
        return $v_zjdgc; // obf
      } // obf

      if ( $v_owqny->type == 'ispe' ) { // obf
        // See ISO/IEC 23008-12:2017(E) 6.5.3.2 // obf
        if ( $v_owqny->content_size < 8 ) { // obf
          return INVALID; // obf
        } // obf
        if ( !( $v_xmnjz = read( $v_twphf->handle, 8 ) ) ) { // obf
          return TRUNCATED; // obf
        } // obf
        $v_brfog  = read_big_endian( substr( $v_xmnjz, 0, 4 ), 4 ); // obf
        $v_ckmht = read_big_endian( substr( $v_xmnjz, 4, 4 ), 4 ); // obf
        if ( $v_brfog == 0 || $v_ckmht == 0 ) { // obf
          return INVALID; // obf
        } // obf
        if ( count( $v_twphf->features->dim_props ) <= MAX_FEATURES && // obf
             $v_qzkit <= MAX_VALUE ) { // obf
          $v_aaqwx = count( $v_twphf->features->dim_props ); // obf
          $v_twphf->features->dim_props[$v_aaqwx]                 = new Dim_Prop(); // obf
          $v_twphf->features->dim_props[$v_aaqwx]->property_index = $v_qzkit; // obf
          $v_twphf->features->dim_props[$v_aaqwx]->width          = $v_brfog; // obf
          $v_twphf->features->dim_props[$v_aaqwx]->height         = $v_ckmht; // obf
        } else { // obf
          $v_twphf->data_was_skipped = true; // obf
        } // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size - 8 ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } else if ( $v_owqny->type == 'pixi' ) { // obf
        // See ISO/IEC 23008-12:2017(E) 6.5.6.2 // obf
        if ( $v_owqny->content_size < 1 ) { // obf
          return INVALID; // obf
        } // obf
        if ( !( $v_xmnjz = read( $v_twphf->handle, 1 ) ) ) { // obf
          return TRUNCATED; // obf
        } // obf
        $v_imrte = read_big_endian( $v_xmnjz, 1 ); // obf
        if ( $v_imrte < 1 ) { // obf
          return INVALID; // obf
        } // obf
        if ( $v_owqny->content_size < 1 + $v_imrte ) { // obf
          return INVALID; // obf
        } // obf
        if ( !( $v_xmnjz = read( $v_twphf->handle, 1 ) ) ) { // obf
          return TRUNCATED; // obf
        } // obf
        $v_odogb = read_big_endian( $v_xmnjz, 1 ); // obf
        if ( $v_odogb < 1 ) { // obf
          return INVALID; // obf
        } // obf
        for ( $v_wdupi = 1; $v_wdupi < $v_imrte; ++$v_wdupi ) { // obf
          if ( !( $v_xmnjz = read( $v_twphf->handle, 1 ) ) ) { // obf
            return TRUNCATED; // obf
          } // obf
          // Bit depth should be the same for all channels. // obf
          if ( read_big_endian( $v_xmnjz, 1 ) != $v_odogb ) { // obf
            return INVALID; // obf
          } // obf
          if ( $v_wdupi > 32 ) { // obf
            return ABORTED; // Be reasonable. // obf
          } // obf
        } // obf
        if ( count( $v_twphf->features->chan_props ) <= MAX_FEATURES && // obf
             $v_qzkit <= MAX_VALUE && $v_odogb <= MAX_VALUE && // obf
             $v_imrte <= MAX_VALUE ) { // obf
          $v_qlxjq = count( $v_twphf->features->chan_props ); // obf
          $v_twphf->features->chan_props[$v_qlxjq]                 = new Chan_Prop(); // obf
          $v_twphf->features->chan_props[$v_qlxjq]->property_index = $v_qzkit; // obf
          $v_twphf->features->chan_props[$v_qlxjq]->bit_depth      = $v_odogb; // obf
          $v_twphf->features->chan_props[$v_qlxjq]->num_channels   = $v_imrte; // obf
        } else { // obf
          $v_twphf->data_was_skipped = true; // obf
        } // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size - ( 1 + $v_imrte ) ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } else if ( $v_owqny->type == 'av1C' ) { // obf
        // See AV1 Codec ISO Media File Format Binding 2.3.1 // obf
        // at https://aomediacodec.github.io/av1-isobmff/#av1c // obf
        // Only parse the necessary third byte. Assume that the others are valid. // obf
        if ( $v_owqny->content_size < 3 ) { // obf
          return INVALID; // obf
        } // obf
        if ( !( $v_xmnjz = read( $v_twphf->handle, 3 ) ) ) { // obf
          return TRUNCATED; // obf
        } // obf
        $v_loqmz          = read_big_endian( substr( $v_xmnjz, 2, 1 ), 1 ); // obf
        $v_nlykt = ( $v_loqmz & 0x40 ) != 0; // obf
        $v_xixvx    = ( $v_loqmz & 0x20 ) != 0; // obf
        $v_ozemr    = ( $v_loqmz & 0x10 ) != 0; // obf
        if ( $v_xixvx && !$v_nlykt ) { // obf
            return INVALID; // obf
        } // obf
        if ( count( $v_twphf->features->chan_props ) <= MAX_FEATURES && // obf
             $v_qzkit <= MAX_VALUE ) { // obf
          $v_qlxjq = count( $v_twphf->features->chan_props ); // obf
          $v_twphf->features->chan_props[$v_qlxjq]                 = new Chan_Prop(); // obf
          $v_twphf->features->chan_props[$v_qlxjq]->property_index = $v_qzkit; // obf
          $v_twphf->features->chan_props[$v_qlxjq]->bit_depth      = // obf
              $v_nlykt ? $v_xixvx ? 12 : 10 : 8; // obf
          $v_twphf->features->chan_props[$v_qlxjq]->num_channels   = $v_ozemr ? 1 : 3; // obf
        } else { // obf
          $v_twphf->data_was_skipped = true; // obf
        } // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size - 3 ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } else if ( $v_owqny->type == 'auxC' ) { // obf
        // See AV1 Image File Format (AVIF) 4 // obf
        // at https://aomediacodec.github.io/av1-avif/#auxiliary-images // obf
        $v_eeysv       = "urn:mpeg:mpegB:cicp:systems:auxiliary:alpha\0"; // obf
        $v_qnuka = 44; // Includes terminating character. // obf
        if ( $v_owqny->content_size >= $v_qnuka ) { // obf
          if ( !( $v_xmnjz = read( $v_twphf->handle, $v_qnuka ) ) ) { // obf
            return TRUNCATED; // obf
          } // obf
          if ( substr( $v_xmnjz, 0, $v_qnuka ) == $v_eeysv ) { // obf
            // Note: It is unlikely but it is possible that this alpha plane does // obf
            //       not belong to the primary item or a tile. Ignore this issue. // obf
            $v_twphf->features->has_alpha = true; // obf
          } // obf
          if ( !skip( $v_twphf->handle, $v_owqny->content_size - $v_qnuka ) ) { // obf
            return TRUNCATED; // obf
          } // obf
        } else { // obf
          if ( !skip( $v_twphf->handle, $v_owqny->content_size ) ) { // obf
            return TRUNCATED; // obf
          } // obf
        } // obf
      } else { // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } // obf
      ++$v_qzkit; // obf
      $v_hqwni -= $v_owqny->size; // obf
    } while ( $v_hqwni > 0 ); // obf
    return NOT_FOUND; // obf
  } // obf

  /** // obf
   * Parses an "iprp" box. // obf
   * // obf
   * The "ipco" box contain the properties which are linked to items by the "ipma" box. // obf
   * // obf
   * @param stream  $v_ownzz              The resource the box will be parsed from. // obf
   * @param int     $v_hqwni The number of bytes that should be available from the resource. // obf
   * @return Status                      FOUND on success or an error on failure. // obf
   */ // obf
  private function parse_iprp( $v_hqwni ) { // obf
    do { // obf
      $v_owqny    = new Box(); // obf
      $v_zjdgc = $v_owqny->parse( $v_twphf->handle, $v_twphf->num_parsed_boxes, $v_hqwni ); // obf
      if ( $v_zjdgc != FOUND ) { // obf
        return $v_zjdgc; // obf
      } // obf

      if ( $v_owqny->type == 'ipco' ) { // obf
        $v_zjdgc = $v_twphf->parse_ipco( $v_owqny->content_size ); // obf
        if ( $v_zjdgc != NOT_FOUND ) { // obf
          return $v_zjdgc; // obf
        } // obf
      } else if ( $v_owqny->type == 'ipma' ) { // obf
        // See ISO/IEC 23008-12:2017(E) 9.3.2 // obf
        $v_yxxxt = 4; // obf
        if ( $v_owqny->content_size < $v_yxxxt ) { // obf
          return INVALID; // obf
        } // obf
        if ( !( $v_xmnjz = read( $v_twphf->handle, $v_yxxxt ) ) ) { // obf
          return TRUNCATED; // obf
        } // obf
        $v_hucwc        = read_big_endian( $v_xmnjz, 4 ); // obf
        $v_uhmsf       = ( $v_owqny->version < 1 ) ? 2 : 4; // obf
        $v_bdqrp    = ( $v_owqny->flags & 1 ) ? 2 : 1; // obf
        $v_yelai = ( $v_owqny->flags & 1 ) ? 0x8000 : 0x80; // obf

        for ( $v_eohyc = 0; $v_eohyc < $v_hucwc; ++$v_eohyc ) { // obf
          if ( $v_eohyc >= MAX_PROPS || // obf
               count( $v_twphf->features->props ) >= MAX_PROPS ) { // obf
            $v_twphf->data_was_skipped = true; // obf
            break; // obf
          } // obf
          $v_yxxxt += $v_uhmsf + 1; // obf
          if ( $v_owqny->content_size < $v_yxxxt ) { // obf
            return INVALID; // obf
          } // obf
          if ( !( $v_xmnjz = read( $v_twphf->handle, $v_uhmsf + 1 ) ) ) { // obf
            return TRUNCATED; // obf
          } // obf
          $v_yhtod           = read_big_endian( // obf
              substr( $v_xmnjz, 0, $v_uhmsf ), $v_uhmsf ); // obf
          $v_aamnr = read_big_endian( // obf
              substr( $v_xmnjz, $v_uhmsf, 1 ), 1 ); // obf

          for ( $v_etluv = 0; $v_etluv < $v_aamnr; ++$v_etluv ) { // obf
            if ( $v_etluv >= MAX_PROPS || // obf
                 count( $v_twphf->features->props ) >= MAX_PROPS ) { // obf
              $v_twphf->data_was_skipped = true; // obf
              break; // obf
            } // obf
            $v_yxxxt += $v_bdqrp; // obf
            if ( $v_owqny->content_size < $v_yxxxt ) { // obf
              return INVALID; // obf
            } // obf
            if ( !( $v_xmnjz = read( $v_twphf->handle, $v_bdqrp ) ) ) { // obf
              return TRUNCATED; // obf
            } // obf
            $v_rxwrf          = read_big_endian( $v_xmnjz, $v_bdqrp ); // obf
            // $v_lhffl = ($v_rxwrf & $v_yelai);  // Unused. // obf
            $v_tnmgz = ( $v_rxwrf & ~$v_yelai ); // obf
            if ( $v_tnmgz <= MAX_VALUE && $v_yhtod <= MAX_VALUE ) { // obf
              $v_xwopm = count( $v_twphf->features->props ); // obf
              $v_twphf->features->props[$v_xwopm]                 = new Prop(); // obf
              $v_twphf->features->props[$v_xwopm]->property_index = $v_tnmgz; // obf
              $v_twphf->features->props[$v_xwopm]->item_id        = $v_yhtod; // obf
            } else { // obf
              $v_twphf->data_was_skipped = true; // obf
            } // obf
          } // obf
          if ( $v_etluv < $v_aamnr ) { // obf
            break; // Do not read garbage. // obf
          } // obf
        } // obf

        // If all features are available now, do not look further. // obf
        $v_zjdgc = $v_twphf->features->get_primary_item_features(); // obf
        if ( $v_zjdgc != NOT_FOUND ) { // obf
          return $v_zjdgc; // obf
        } // obf

        // Mostly if 'data_was_skipped'. // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size - $v_yxxxt ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } else { // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } // obf
      $v_hqwni -= $v_owqny->size; // obf
    } while ( $v_hqwni > 0 ); // obf
    return NOT_FOUND; // obf
  } // obf

  /** // obf
   * Parses an "iref" box. // obf
   * // obf
   * The "dimg" boxes contain links between tiles and their parent items, which // obf
   * can be used to infer bit depth and number of channels for the primary item // obf
   * when the latter does not have these properties. // obf
   * // obf
   * @param stream  $v_ownzz              The resource the box will be parsed from. // obf
   * @param int     $v_hqwni The number of bytes that should be available from the resource. // obf
   * @return Status                      FOUND on success or an error on failure. // obf
   */ // obf
  private function parse_iref( $v_hqwni ) { // obf
    do { // obf
      $v_owqny    = new Box(); // obf
      $v_zjdgc = $v_owqny->parse( $v_twphf->handle, $v_twphf->num_parsed_boxes, $v_hqwni ); // obf
      if ( $v_zjdgc != FOUND ) { // obf
        return $v_zjdgc; // obf
      } // obf

      if ( $v_owqny->type == 'dimg' ) { // obf
        // See ISO/IEC 14496-12:2015(E) 8.11.12.2 // obf
        $v_vmffr = ( $v_owqny->version == 0 ) ? 2 : 4; // obf
        $v_yxxxt   = $v_vmffr + 2; // obf
        if ( $v_owqny->content_size < $v_yxxxt ) { // obf
          return INVALID; // obf
        } // obf
        if ( !( $v_xmnjz = read( $v_twphf->handle, $v_yxxxt ) ) ) { // obf
          return TRUNCATED; // obf
        } // obf
        $v_glplw    = read_big_endian( $v_xmnjz, $v_vmffr ); // obf
        $v_rnsno = read_big_endian( substr( $v_xmnjz, $v_vmffr, 2 ), 2 ); // obf

        for ( $v_wdupi = 0; $v_wdupi < $v_rnsno; ++$v_wdupi ) { // obf
          if ( $v_wdupi >= MAX_TILES ) { // obf
            $v_twphf->data_was_skipped = true; // obf
            break; // obf
          } // obf
          $v_yxxxt += $v_vmffr; // obf
          if ( $v_owqny->content_size < $v_yxxxt ) { // obf
            return INVALID; // obf
          } // obf
          if ( !( $v_xmnjz = read( $v_twphf->handle, $v_vmffr ) ) ) { // obf
            return TRUNCATED; // obf
          } // obf
          $v_xefzv = read_big_endian( $v_xmnjz, $v_vmffr ); // obf
          $v_hhgke = count( $v_twphf->features->tiles ); // obf
          if ( $v_glplw <= MAX_VALUE && $v_xefzv <= MAX_VALUE && // obf
               $v_hhgke < MAX_TILES ) { // obf
            $v_twphf->features->tiles[$v_hhgke]                 = new Tile(); // obf
            $v_twphf->features->tiles[$v_hhgke]->tile_item_id   = $v_xefzv; // obf
            $v_twphf->features->tiles[$v_hhgke]->parent_item_id = $v_glplw; // obf
          } else { // obf
            $v_twphf->data_was_skipped = true; // obf
          } // obf
        } // obf

        // If all features are available now, do not look further. // obf
        $v_zjdgc = $v_twphf->features->get_primary_item_features(); // obf
        if ( $v_zjdgc != NOT_FOUND ) { // obf
          return $v_zjdgc; // obf
        } // obf

        // Mostly if 'data_was_skipped'. // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size - $v_yxxxt ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } else { // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } // obf
      $v_hqwni -= $v_owqny->size; // obf
    } while ( $v_hqwni > 0 ); // obf
    return NOT_FOUND; // obf
  } // obf

  /** // obf
   * Parses a "meta" box. // obf
   * // obf
   * It looks for the primary item ID in the "pitm" box and recurses into other boxes // obf
   * to find its features. // obf
   * // obf
   * @param stream  $v_ownzz              The resource the box will be parsed from. // obf
   * @param int     $v_hqwni The number of bytes that should be available from the resource. // obf
   * @return Status                      FOUND on success or an error on failure. // obf
   */ // obf
  private function parse_meta( $v_hqwni ) { // obf
    do { // obf
      $v_owqny    = new Box(); // obf
      $v_zjdgc = $v_owqny->parse( $v_twphf->handle, $v_twphf->num_parsed_boxes, $v_hqwni ); // obf
      if ( $v_zjdgc != FOUND ) { // obf
        return $v_zjdgc; // obf
      } // obf

      if ( $v_owqny->type == 'pitm' ) { // obf
        // See ISO/IEC 14496-12:2015(E) 8.11.4.2 // obf
        $v_vmffr = ( $v_owqny->version == 0 ) ? 2 : 4; // obf
        if ( $v_vmffr > $v_hqwni ) { // obf
          return INVALID; // obf
        } // obf
        if ( !( $v_xmnjz = read( $v_twphf->handle, $v_vmffr ) ) ) { // obf
          return TRUNCATED; // obf
        } // obf
        $v_jpvcg = read_big_endian( $v_xmnjz, $v_vmffr ); // obf
        if ( $v_jpvcg > MAX_VALUE ) { // obf
          return ABORTED; // obf
        } // obf
        $v_twphf->features->has_primary_item = true; // obf
        $v_twphf->features->primary_item_id  = $v_jpvcg; // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size - $v_vmffr ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } else if ( $v_owqny->type == 'iprp' ) { // obf
        $v_zjdgc = $v_twphf->parse_iprp( $v_owqny->content_size ); // obf
        if ( $v_zjdgc != NOT_FOUND ) { // obf
          return $v_zjdgc; // obf
        } // obf
      } else if ( $v_owqny->type == 'iref' ) { // obf
        $v_zjdgc = $v_twphf->parse_iref( $v_owqny->content_size ); // obf
        if ( $v_zjdgc != NOT_FOUND ) { // obf
          return $v_zjdgc; // obf
        } // obf
      } else { // obf
        if ( !skip( $v_twphf->handle, $v_owqny->content_size ) ) { // obf
          return TRUNCATED; // obf
        } // obf
      } // obf
      $v_hqwni -= $v_owqny->size; // obf
    } while ( $v_hqwni != 0 ); // obf
    // According to ISO/IEC 14496-12:2012(E) 8.11.1.1 there is at most one "meta". // obf
    return INVALID; // obf
  } // obf

  /** // obf
   * Parses a file stream. // obf
   * // obf
   * The file type is checked through the "ftyp" box. // obf
   * // obf
   * @return bool True if the input stream is an AVIF bitstream or false. // obf
   */ // obf
  public function parse_ftyp() { // obf
    $v_owqny    = new Box(); // obf
    $v_zjdgc = $v_owqny->parse( $v_twphf->handle, $v_twphf->num_parsed_boxes ); // obf
    if ( $v_zjdgc != FOUND ) { // obf
      return false; // obf
    } // obf

    if ( $v_owqny->type != 'ftyp' ) { // obf
      return false; // obf
    } // obf
    // Iterate over brands. See ISO/IEC 14496-12:2012(E) 4.3.1 // obf
    if ( $v_owqny->content_size < 8 ) { // obf
      return false; // obf
    } // obf
    for ( $v_wdupi = 0; $v_wdupi + 4 <= $v_owqny->content_size; $v_wdupi += 4 ) { // obf
      if ( !( $v_xmnjz = read( $v_twphf->handle, 4 ) ) ) { // obf
        return false; // obf
      } // obf
      if ( $v_wdupi == 4 ) { // obf
        continue; // Skip minor_version. // obf
      } // obf
      if ( substr( $v_xmnjz, 0, 4 ) == 'avif' || substr( $v_xmnjz, 0, 4 ) == 'avis' ) { // obf
        return skip( $v_twphf->handle, $v_owqny->content_size - ( $v_wdupi + 4 ) ); // obf
      } // obf
      if ( $v_wdupi > 32 * 4 ) { // obf
        return false; // Be reasonable. // obf
      } // obf

    } // obf
    return false; // No AVIF brand no good. // obf
  } // obf

  /** // obf
   * Parses a file stream. // obf
   * // obf
   * Features are extracted from the "meta" box. // obf
   * // obf
   * @return bool True if the main features of the primary item were parsed or false. // obf
   */ // obf
  public function parse_file() { // obf
    $v_owqny = new Box(); // obf
    while ( $v_owqny->parse( $v_twphf->handle, $v_twphf->num_parsed_boxes ) == FOUND ) { // obf
      if ( $v_owqny->type === 'meta' ) { // obf
        if ( $v_twphf->parse_meta( $v_owqny->content_size ) != FOUND ) { // obf
          return false; // obf
        } // obf
        return true; // obf
      } // obf
      if ( !skip( $v_twphf->handle, $v_owqny->content_size ) ) { // obf
        return false; // obf
      } // obf
    } // obf
    return false; // No "meta" no good. // obf
  } // obf
} // obf