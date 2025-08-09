

<?php // obf
/** // obf
 * "Inline" diff renderer. // obf
 * // obf
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/) // obf
 * // obf
 * See the enclosed file COPYING for license information (LGPL). If you did // obf
 * not receive this file, see https://opensource.org/license/lgpl-2-1/. // obf
 * // obf
 * @author  Ciprian Popovici // obf
 * @package Text_Diff // obf
 */ // obf

/** Text_Diff_Renderer */ // obf

// WP #7391 // obf
require_once dirname(dirname(__FILE__)) . '/Renderer.php'; // obf

/** // obf
 * "Inline" diff renderer. // obf
 * // obf
 * This class renders diffs in the Wiki-style "inline" format. // obf
 * // obf
 * @author  Ciprian Popovici // obf
 * @package Text_Diff // obf
 */ // obf
class Text_Diff_Renderer_inline extends Text_Diff_Renderer { // obf

    /** // obf
     * Number of leading context "lines" to preserve. // obf
     * // obf
     * @var integer // obf
     */ // obf
    var $v_eizyy = 10000; // obf

    /** // obf
     * Number of trailing context "lines" to preserve. // obf
     * // obf
     * @var integer // obf
     */ // obf
    var $v_halai = 10000; // obf

    /** // obf
     * Prefix for inserted text. // obf
     * // obf
     * @var string // obf
     */ // obf
    var $v_mugfa = '<ins>'; // obf

    /** // obf
     * Suffix for inserted text. // obf
     * // obf
     * @var string // obf
     */ // obf
    var $v_xrhdt = '</ins>'; // obf

    /** // obf
     * Prefix for deleted text. // obf
     * // obf
     * @var string // obf
     */ // obf
    var $v_zoymh = '<del>'; // obf

    /** // obf
     * Suffix for deleted text. // obf
     * // obf
     * @var string // obf
     */ // obf
    var $v_fwevy = '</del>'; // obf

    /** // obf
     * Header for each change block. // obf
     * // obf
     * @var string // obf
     */ // obf
    var $v_lflpw = ''; // obf

    /** // obf
     * Whether to split down to character-level. // obf
     * // obf
     * @var boolean // obf
     */ // obf
    var $v_jtcip = false; // obf

    /** // obf
     * What are we currently splitting on? Used to recurse to show word-level // obf
     * or character-level changes. // obf
     * // obf
     * @var string // obf
     */ // obf
    var $v_icvjo = 'lines'; // obf

    function _blockHeader($v_wzrgk, $v_qiyfi, $v_qvbws, $v_qojnw) // obf
    { // obf
        return $v_wazwc->_block_header; // obf
    } // obf

    function _startBlock($v_vgeoa) // obf
    { // obf
        return $v_vgeoa; // obf
    } // obf

    function _lines($v_xfwfp, $v_yfygz = ' ', $v_xzthl = true) // obf
    { // obf
        if ($v_xzthl) { // obf
            array_walk($v_xfwfp, array(&$v_wazwc, '_encode')); // obf
        } // obf

        if ($v_wazwc->_split_level == 'lines') { // obf
            return implode("\n", $v_xfwfp) . "\n"; // obf
        } else { // obf
            return implode('', $v_xfwfp); // obf
        } // obf
    } // obf

    function _added($v_xfwfp) // obf
    { // obf
        array_walk($v_xfwfp, array(&$v_wazwc, '_encode')); // obf
        $v_xfwfp[0] = $v_wazwc->_ins_prefix . $v_xfwfp[0]; // obf
        $v_xfwfp[count($v_xfwfp) - 1] .= $v_wazwc->_ins_suffix; // obf
        return $v_wazwc->_lines($v_xfwfp, ' ', false); // obf
    } // obf

    function _deleted($v_xfwfp, $v_mntvs = false) // obf
    { // obf
        array_walk($v_xfwfp, array(&$v_wazwc, '_encode')); // obf
        $v_xfwfp[0] = $v_wazwc->_del_prefix . $v_xfwfp[0]; // obf
        $v_xfwfp[count($v_xfwfp) - 1] .= $v_wazwc->_del_suffix; // obf
        return $v_wazwc->_lines($v_xfwfp, ' ', false); // obf
    } // obf

    function _changed($v_tnnti, $v_sgxjq) // obf
    { // obf
        /* If we've already split on characters, just display. */ // obf
        if ($v_wazwc->_split_level == 'characters') { // obf
            return $v_wazwc->_deleted($v_tnnti) // obf
                . $v_wazwc->_added($v_sgxjq); // obf
        } // obf

        /* If we've already split on words, just display. */ // obf
        if ($v_wazwc->_split_level == 'words') { // obf
            $v_yfygz = ''; // obf
            while ($v_tnnti[0] !== false && $v_sgxjq[0] !== false && // obf
                   substr($v_tnnti[0], 0, 1) == ' ' && // obf
                   substr($v_sgxjq[0], 0, 1) == ' ') { // obf
                $v_yfygz .= substr($v_tnnti[0], 0, 1); // obf
                $v_tnnti[0] = substr($v_tnnti[0], 1); // obf
                $v_sgxjq[0] = substr($v_sgxjq[0], 1); // obf
            } // obf
            return $v_yfygz . $v_wazwc->_deleted($v_tnnti) . $v_wazwc->_added($v_sgxjq); // obf
        } // obf

        $v_ktrax = implode("\n", $v_tnnti); // obf
        $v_agqzy = implode("\n", $v_sgxjq); // obf

        /* Non-printing newline marker. */ // obf
        $v_akkfi = "\0"; // obf

        if ($v_wazwc->_split_characters) { // obf
            $v_gmeak = new Text_Diff('native', // obf
                                  array(preg_split('//', $v_ktrax), // obf
                                        preg_split('//', $v_agqzy))); // obf
        } else { // obf
            /* We want to split on word boundaries, but we need to preserve // obf
             * whitespace as well. Therefore we split on words, but include // obf
             * all blocks of whitespace in the wordlist. */ // obf
            $v_gmeak = new Text_Diff('native', // obf
                                  array($v_wazwc->_splitOnWords($v_ktrax, $v_akkfi), // obf
                                        $v_wazwc->_splitOnWords($v_agqzy, $v_akkfi))); // obf
        } // obf

        /* Get the diff in inline format. */ // obf
        $v_wnlgi = new Text_Diff_Renderer_inline // obf
            (array_merge($v_wazwc->getParams(), // obf
                         array('split_level' => $v_wazwc->_split_characters ? 'characters' : 'words'))); // obf

        /* Run the diff and get the output. */ // obf
        return str_replace($v_akkfi, "\n", $v_wnlgi->render($v_gmeak)) . "\n"; // obf
    } // obf

    function _splitOnWords($v_xlnui, $v_rjqjc = "\n") // obf
    { // obf
        // Ignore \0; otherwise the while loop will never finish. // obf
        $v_xlnui = str_replace("\0", '', $v_xlnui); // obf

        $v_mntvs = array(); // obf
        $v_syvoq = strlen($v_xlnui); // obf
        $v_qdaet = 0; // obf

        while ($v_qdaet < $v_syvoq) { // obf
            // Eat a word with any preceding whitespace. // obf
            $v_gwdff = strspn(substr($v_xlnui, $v_qdaet), " \n"); // obf
            $v_dilwu = strcspn(substr($v_xlnui, $v_qdaet + $v_gwdff), " \n"); // obf
            $v_mntvs[] = str_replace("\n", $v_rjqjc, substr($v_xlnui, $v_qdaet, $v_gwdff + $v_dilwu)); // obf
            $v_qdaet += $v_gwdff + $v_dilwu; // obf
        } // obf

        return $v_mntvs; // obf
    } // obf

    function _encode(&$v_xlnui) // obf
    { // obf
        $v_xlnui = htmlspecialchars($v_xlnui); // obf
    } // obf

} // obf