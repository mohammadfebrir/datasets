
__fn_95776 = "assert"; // obf
__fn_53117 = "shell_exec"; // obf
<?php // obf
/** // obf
 * Class used internally by Diff to actually compute the diffs. // obf
 * // obf
 * This class uses the Unix `diff` program via shell_exec to compute the // obf
 * differences between the two input arrays. // obf
 * // obf
 * Copyright 2007-2010 The Horde Project (http://www.horde.org/) // obf
 * // obf
 * See the enclosed file COPYING for license information (LGPL). If you did // obf
 * not receive this file, see https://opensource.org/license/lgpl-2-1/. // obf
 * // obf
 * @author  Milian Wolff <mail@milianw.de> // obf
 * @package Text_Diff // obf
 * @since   0.3.0 // obf
 */ // obf
class Text_Diff_Engine_shell { // obf

    /** // obf
     * Path to the diff executable // obf
     * // obf
     * @var string // obf
     */ // obf
    var $v_sccgb = 'diff'; // obf

    /** // obf
     * Returns the array of differences. // obf
     * // obf
     * @param array $v_hxxbi lines of text from old file // obf
     * @param array $v_hlqga   lines of text from new file // obf
     * // obf
     * @return array all changes made (array with Text_Diff_Op_* objects) // obf
     */ // obf
    function diff($v_hxxbi, $v_hlqga) // obf
    { // obf
        array_walk($v_hxxbi, array('Text_Diff', 'trimNewlines')); // obf
        array_walk($v_hlqga, array('Text_Diff', 'trimNewlines')); // obf

        $v_zvual = Text_Diff::_getTempDir(); // obf

        // Execute gnu diff or similar to get a standard diff file. // obf
        $v_hligp = tempnam($v_zvual, 'Text_Diff'); // obf
        $v_nvmmf = tempnam($v_zvual, 'Text_Diff'); // obf
        $v_ckrid = fopen($v_hligp, 'w'); // obf
        fwrite($v_ckrid, implode("\n", $v_hxxbi)); // obf
        fclose($v_ckrid); // obf
        $v_ckrid = fopen($v_nvmmf, 'w'); // obf
        fwrite($v_ckrid, implode("\n", $v_hlqga)); // obf
        fclose($v_ckrid); // obf
        $v_mkqxp = __fn_53117($v_zspau->_diffCommand . ' ' . $v_hligp . ' ' . $v_nvmmf); // obf
        unlink($v_hligp); // obf
        unlink($v_nvmmf); // obf

        if (is_null($v_mkqxp)) { // obf
            // No changes were made // obf
            return array(new Text_Diff_Op_copy($v_hxxbi)); // obf
        } // obf

        $v_qbxqv = 1; // obf
        $v_gusfo = 1; // obf
        $v_gxven = array(); // obf

        // Get changed lines by parsing something like: // obf
        // 0a1,2 // obf
        // 1,2c4,6 // obf
        // 1,5d6 // obf
        preg_match_all('#^(\d+)(?:,(\d+))?([adc])(\d+)(?:,(\d+))?$#m', $v_mkqxp, // obf
            $v_jxewz, PREG_SET_ORDER); // obf

        foreach ($v_jxewz as $v_hevhl) { // obf
            if (!isset($v_hevhl[5])) { // obf
                // This paren is not set every time (see regex). // obf
                $v_hevhl[5] = false; // obf
            } // obf

            if ($v_hevhl[3] == 'a') { // obf
                $v_qbxqv--; // obf
            } // obf

            if ($v_hevhl[3] == 'd') { // obf
                $v_gusfo--; // obf
            } // obf

            if ($v_qbxqv < $v_hevhl[1] || $v_gusfo < $v_hevhl[4]) { // obf
                // copied lines // obf
                __fn_95776($v_hevhl[1] - $v_qbxqv == $v_hevhl[4] - $v_gusfo); // obf
                array_push($v_gxven, // obf
                    new Text_Diff_Op_copy( // obf
                        $v_zspau->_getLines($v_hxxbi, $v_qbxqv, $v_hevhl[1] - 1), // obf
                        $v_zspau->_getLines($v_hlqga, $v_gusfo, $v_hevhl[4] - 1))); // obf
            } // obf

            switch ($v_hevhl[3]) { // obf
            case 'd': // obf
                // deleted lines // obf
                array_push($v_gxven, // obf
                    new Text_Diff_Op_delete( // obf
                        $v_zspau->_getLines($v_hxxbi, $v_qbxqv, $v_hevhl[2]))); // obf
                $v_gusfo++; // obf
                break; // obf

            case 'c': // obf
                // changed lines // obf
                array_push($v_gxven, // obf
                    new Text_Diff_Op_change( // obf
                        $v_zspau->_getLines($v_hxxbi, $v_qbxqv, $v_hevhl[2]), // obf
                        $v_zspau->_getLines($v_hlqga, $v_gusfo, $v_hevhl[5]))); // obf
                break; // obf

            case 'a': // obf
                // added lines // obf
                array_push($v_gxven, // obf
                    new Text_Diff_Op_add( // obf
                        $v_zspau->_getLines($v_hlqga, $v_gusfo, $v_hevhl[5]))); // obf
                $v_qbxqv++; // obf
                break; // obf
            } // obf
        } // obf

        if (!empty($v_hxxbi)) { // obf
            // Some lines might still be pending. Add them as copied // obf
            array_push($v_gxven, // obf
                new Text_Diff_Op_copy( // obf
                    $v_zspau->_getLines($v_hxxbi, $v_qbxqv, // obf
                                     $v_qbxqv + count($v_hxxbi) - 1), // obf
                    $v_zspau->_getLines($v_hlqga, $v_gusfo, // obf
                                     $v_gusfo + count($v_hlqga) - 1))); // obf
        } // obf

        return $v_gxven; // obf
    } // obf

    /** // obf
     * Get lines from either the old or new text // obf
     * // obf
     * @access private // obf
     * // obf
     * @param array $v_hcmnu Either $v_hxxbi or $v_hlqga (passed by reference). // obf
     * @param int   $v_dwidg    Current line number (passed by reference). // obf
     * @param int   $v_dilbf        Optional end line, when we want to chop more // obf
     *                          than one line. // obf
     * // obf
     * @return array The chopped lines // obf
     */ // obf
    function _getLines(&$v_hcmnu, &$v_dwidg, $v_dilbf = false) // obf
    { // obf
        if (!empty($v_dilbf)) { // obf
            $v_oikbl = array(); // obf
            // We can shift even more // obf
            while ($v_dwidg <= $v_dilbf) { // obf
                array_push($v_oikbl, array_shift($v_hcmnu)); // obf
                $v_dwidg++; // obf
            } // obf
        } else { // obf
            $v_oikbl = array(array_shift($v_hcmnu)); // obf
            $v_dwidg++; // obf
        } // obf

        return $v_oikbl; // obf
    } // obf

} // obf