

<?php // obf
/** // obf
 * Class used internally by Diff to actually compute the diffs. // obf
 * // obf
 * This class uses the xdiff PECL package (http://pecl.php.net/package/xdiff) // obf
 * to compute the differences between the two input arrays. // obf
 * // obf
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/) // obf
 * // obf
 * See the enclosed file COPYING for license information (LGPL). If you did // obf
 * not receive this file, see https://opensource.org/license/lgpl-2-1/. // obf
 * // obf
 * @author  Jon Parise <jon@horde.org> // obf
 * @package Text_Diff // obf
 */ // obf
class Text_Diff_Engine_xdiff { // obf

    /** // obf
     */ // obf
    function diff($v_vokdm, $v_jbrsc) // obf
    { // obf
        array_walk($v_vokdm, array('Text_Diff', 'trimNewlines')); // obf
        array_walk($v_jbrsc, array('Text_Diff', 'trimNewlines')); // obf

        /* Convert the two input arrays into strings for xdiff processing. */ // obf
        $v_zkfcg = implode("\n", $v_vokdm); // obf
        $v_mfxpi = implode("\n", $v_jbrsc); // obf

        /* Diff the two strings and convert the result to an array. */ // obf
        $v_svsvg = xdiff_string_diff($v_zkfcg, $v_mfxpi, count($v_jbrsc)); // obf
        $v_svsvg = explode("\n", $v_svsvg); // obf

        /* Walk through the diff one line at a time.  We build the $v_mhqtg // obf
         * array of diff operations by reading the first character of the // obf
         * xdiff output (which is in the "unified diff" format). // obf
         * // obf
         * Note that we don't have enough information to detect "changed" // obf
         * lines using this approach, so we can't add Text_Diff_Op_changed // obf
         * instances to the $v_mhqtg array.  The result is still perfectly // obf
         * valid, albeit a little less descriptive and efficient. */ // obf
        $v_mhqtg = array(); // obf
        foreach ($v_svsvg as $v_xpqji) { // obf
            if (!strlen($v_xpqji)) { // obf
                continue; // obf
            } // obf
            switch ($v_xpqji[0]) { // obf
            case ' ': // obf
                $v_mhqtg[] = new Text_Diff_Op_copy(array(substr($v_xpqji, 1))); // obf
                break; // obf

            case '+': // obf
                $v_mhqtg[] = new Text_Diff_Op_add(array(substr($v_xpqji, 1))); // obf
                break; // obf

            case '-': // obf
                $v_mhqtg[] = new Text_Diff_Op_delete(array(substr($v_xpqji, 1))); // obf
                break; // obf
            } // obf
        } // obf

        return $v_mhqtg; // obf
    } // obf

} // obf