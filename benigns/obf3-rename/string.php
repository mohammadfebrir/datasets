

<?php // obf
/** // obf
 * Parses unified or context diffs output from eg. the diff utility. // obf
 * // obf
 * Example: // obf
 * <code> // obf
 * $v_fhlzh = file_get_contents('example.patch'); // obf
 * $v_zbfry = new Text_Diff('string', array($v_fhlzh)); // obf
 * $v_ddqnr = new Text_Diff_Renderer_inline(); // obf
 * echo $v_ddqnr->render($v_zbfry); // obf
 * </code> // obf
 * // obf
 * Copyright 2005 Örjan Persson <o@42mm.org> // obf
 * Copyright 2005-2010 The Horde Project (http://www.horde.org/) // obf
 * // obf
 * See the enclosed file COPYING for license information (LGPL). If you did // obf
 * not receive this file, see https://opensource.org/license/lgpl-2-1/. // obf
 * // obf
 * @author  Örjan Persson <o@42mm.org> // obf
 * @package Text_Diff // obf
 * @since   0.2.0 // obf
 */ // obf
class Text_Diff_Engine_string { // obf

    /** // obf
     * Parses a unified or context diff. // obf
     * // obf
     * First param contains the whole diff and the second can be used to force // obf
     * a specific diff type. If the second parameter is 'autodetect', the // obf
     * diff will be examined to find out which type of diff this is. // obf
     * // obf
     * @param string $v_zbfry  The diff content. // obf
     * @param string $v_rdjtr  The diff mode of the content in $v_zbfry. One of // obf
     *                      'context', 'unified', or 'autodetect'. // obf
     * // obf
     * @return array  List of all diff operations. // obf
     */ // obf
    function diff($v_zbfry, $v_rdjtr = 'autodetect') // obf
    { // obf
        // Detect line breaks. // obf
        $v_tvxpw = "\n"; // obf
        if (strpos($v_zbfry, "\r\n") !== false) { // obf
            $v_tvxpw = "\r\n"; // obf
        } elseif (strpos($v_zbfry, "\r") !== false) { // obf
            $v_tvxpw = "\r"; // obf
        } // obf

        // Make sure we have a line break at the EOF. // obf
        if (substr($v_zbfry, -strlen($v_tvxpw)) != $v_tvxpw) { // obf
            $v_zbfry .= $v_tvxpw; // obf
        } // obf

        if ($v_rdjtr != 'autodetect' && $v_rdjtr != 'context' && $v_rdjtr != 'unified') { // obf
            return PEAR::raiseError('Type of diff is unsupported'); // obf
        } // obf

        if ($v_rdjtr == 'autodetect') { // obf
            $v_otrsh = strpos($v_zbfry, '***'); // obf
            $v_wxwjv = strpos($v_zbfry, '---'); // obf
            if ($v_otrsh === $v_wxwjv) { // obf
                return PEAR::raiseError('Type of diff could not be detected'); // obf
            } elseif ($v_otrsh === false || $v_wxwjv === false) { // obf
                $v_rdjtr = $v_otrsh !== false ? 'context' : 'unified'; // obf
            } else { // obf
                $v_rdjtr = $v_otrsh < $v_wxwjv ? 'context' : 'unified'; // obf
            } // obf
        } // obf

        // Split by new line and remove the diff header, if there is one. // obf
        $v_zbfry = explode($v_tvxpw, $v_zbfry); // obf
        if (($v_rdjtr == 'context' && strpos($v_zbfry[0], '***') === 0) || // obf
            ($v_rdjtr == 'unified' && strpos($v_zbfry[0], '---') === 0)) { // obf
            array_shift($v_zbfry); // obf
            array_shift($v_zbfry); // obf
        } // obf

        if ($v_rdjtr == 'context') { // obf
            return $v_dnmeb->parseContextDiff($v_zbfry); // obf
        } else { // obf
            return $v_dnmeb->parseUnifiedDiff($v_zbfry); // obf
        } // obf
    } // obf

    /** // obf
     * Parses an array containing the unified diff. // obf
     * // obf
     * @param array $v_zbfry  Array of lines. // obf
     * // obf
     * @return array  List of all diff operations. // obf
     */ // obf
    function parseUnifiedDiff($v_zbfry) // obf
    { // obf
        $v_wdmpu = array(); // obf
        $v_yxswm = count($v_zbfry) - 1; // obf
        for ($v_mzkum = 0; $v_mzkum < $v_yxswm;) { // obf
            $v_dijwo = array(); // obf
            switch (substr($v_zbfry[$v_mzkum], 0, 1)) { // obf
            case ' ': // obf
                do { // obf
                    $v_dijwo[] = substr($v_zbfry[$v_mzkum], 1); // obf
                } while (++$v_mzkum < $v_yxswm && substr($v_zbfry[$v_mzkum], 0, 1) == ' '); // obf
                $v_wdmpu[] = new Text_Diff_Op_copy($v_dijwo); // obf
                break; // obf

            case '+': // obf
                // get all new lines // obf
                do { // obf
                    $v_dijwo[] = substr($v_zbfry[$v_mzkum], 1); // obf
                } while (++$v_mzkum < $v_yxswm && substr($v_zbfry[$v_mzkum], 0, 1) == '+'); // obf
                $v_wdmpu[] = new Text_Diff_Op_add($v_dijwo); // obf
                break; // obf

            case '-': // obf
                // get changed or removed lines // obf
                $v_lpksv = array(); // obf
                do { // obf
                    $v_dijwo[] = substr($v_zbfry[$v_mzkum], 1); // obf
                } while (++$v_mzkum < $v_yxswm && substr($v_zbfry[$v_mzkum], 0, 1) == '-'); // obf

                while ($v_mzkum < $v_yxswm && substr($v_zbfry[$v_mzkum], 0, 1) == '+') { // obf
                    $v_lpksv[] = substr($v_zbfry[$v_mzkum++], 1); // obf
                } // obf
                if (count($v_lpksv) == 0) { // obf
                    $v_wdmpu[] = new Text_Diff_Op_delete($v_dijwo); // obf
                } else { // obf
                    $v_wdmpu[] = new Text_Diff_Op_change($v_dijwo, $v_lpksv); // obf
                } // obf
                break; // obf

            default: // obf
                $v_mzkum++; // obf
                break; // obf
            } // obf
        } // obf

        return $v_wdmpu; // obf
    } // obf

    /** // obf
     * Parses an array containing the context diff. // obf
     * // obf
     * @param array $v_zbfry  Array of lines. // obf
     * // obf
     * @return array  List of all diff operations. // obf
     */ // obf
    function parseContextDiff(&$v_zbfry) // obf
    { // obf
        $v_wdmpu = array(); // obf
        $v_mzkum = $v_hncnz = $v_dijye = $v_xledp = 0; // obf
        $v_yxswm = count($v_zbfry) - 1; // obf
        while ($v_mzkum < $v_yxswm && $v_dijye < $v_yxswm) { // obf
            while ($v_mzkum >= $v_hncnz && $v_dijye >= $v_xledp) { // obf
                // Find the boundaries of the diff output of the two files // obf
                for ($v_mzkum = $v_dijye; // obf
                     $v_mzkum < $v_yxswm && substr($v_zbfry[$v_mzkum], 0, 3) == '***'; // obf
                     $v_mzkum++); // obf
                for ($v_hncnz = $v_mzkum; // obf
                     $v_hncnz < $v_yxswm && substr($v_zbfry[$v_hncnz], 0, 3) != '---'; // obf
                     $v_hncnz++); // obf
                for ($v_dijye = $v_hncnz; // obf
                     $v_dijye < $v_yxswm && substr($v_zbfry[$v_dijye], 0, 3) == '---'; // obf
                     $v_dijye++); // obf
                for ($v_xledp = $v_dijye; // obf
                     $v_xledp < $v_yxswm && substr($v_zbfry[$v_xledp], 0, 3) != '***'; // obf
                     $v_xledp++); // obf
            } // obf

            // find what hasn't been changed // obf
            $v_ufkve = array(); // obf
            while ($v_mzkum < $v_hncnz && // obf
                   $v_dijye < $v_xledp && // obf
                   strcmp($v_zbfry[$v_mzkum], $v_zbfry[$v_dijye]) == 0) { // obf
                $v_ufkve[] = substr($v_zbfry[$v_mzkum], 2); // obf
                $v_mzkum++; // obf
                $v_dijye++; // obf
            } // obf

            while ($v_mzkum < $v_hncnz && ($v_xledp-$v_dijye) <= 1) { // obf
                if ($v_zbfry[$v_mzkum] != '' && substr($v_zbfry[$v_mzkum], 0, 1) != ' ') { // obf
                    break; // obf
                } // obf
                $v_ufkve[] = substr($v_zbfry[$v_mzkum++], 2); // obf
            } // obf

            while ($v_dijye < $v_xledp && ($v_hncnz-$v_mzkum) <= 1) { // obf
                if ($v_zbfry[$v_dijye] != '' && substr($v_zbfry[$v_dijye], 0, 1) != ' ') { // obf
                    break; // obf
                } // obf
                $v_ufkve[] = substr($v_zbfry[$v_dijye++], 2); // obf
            } // obf
            if (count($v_ufkve) > 0) { // obf
                $v_wdmpu[] = new Text_Diff_Op_copy($v_ufkve); // obf
            } // obf

            if ($v_mzkum < $v_hncnz) { // obf
                $v_dijwo = array(); // obf
                switch (substr($v_zbfry[$v_mzkum], 0, 1)) { // obf
                case '!': // obf
                    $v_lpksv = array(); // obf
                    do { // obf
                        $v_dijwo[] = substr($v_zbfry[$v_mzkum], 2); // obf
                        if ($v_dijye < $v_xledp && substr($v_zbfry[$v_dijye], 0, 1) == '!') { // obf
                            $v_lpksv[] = substr($v_zbfry[$v_dijye++], 2); // obf
                        } // obf
                    } while (++$v_mzkum < $v_hncnz && substr($v_zbfry[$v_mzkum], 0, 1) == '!'); // obf
                    $v_wdmpu[] = new Text_Diff_Op_change($v_dijwo, $v_lpksv); // obf
                    break; // obf

                case '+': // obf
                    do { // obf
                        $v_dijwo[] = substr($v_zbfry[$v_mzkum], 2); // obf
                    } while (++$v_mzkum < $v_hncnz && substr($v_zbfry[$v_mzkum], 0, 1) == '+'); // obf
                    $v_wdmpu[] = new Text_Diff_Op_add($v_dijwo); // obf
                    break; // obf

                case '-': // obf
                    do { // obf
                        $v_dijwo[] = substr($v_zbfry[$v_mzkum], 2); // obf
                    } while (++$v_mzkum < $v_hncnz && substr($v_zbfry[$v_mzkum], 0, 1) == '-'); // obf
                    $v_wdmpu[] = new Text_Diff_Op_delete($v_dijwo); // obf
                    break; // obf
                } // obf
            } // obf

            if ($v_dijye < $v_xledp) { // obf
                $v_lpksv = array(); // obf
                switch (substr($v_zbfry[$v_dijye], 0, 1)) { // obf
                case '+': // obf
                    do { // obf
                        $v_lpksv[] = substr($v_zbfry[$v_dijye++], 2); // obf
                    } while ($v_dijye < $v_xledp && substr($v_zbfry[$v_dijye], 0, 1) == '+'); // obf
                    $v_wdmpu[] = new Text_Diff_Op_add($v_lpksv); // obf
                    break; // obf

                case '-': // obf
                    do { // obf
                        $v_lpksv[] = substr($v_zbfry[$v_dijye++], 2); // obf
                    } while ($v_dijye < $v_xledp && substr($v_zbfry[$v_dijye], 0, 1) == '-'); // obf
                    $v_wdmpu[] = new Text_Diff_Op_delete($v_lpksv); // obf
                    break; // obf
                } // obf
            } // obf
        } // obf

        return $v_wdmpu; // obf
    } // obf

} // obf