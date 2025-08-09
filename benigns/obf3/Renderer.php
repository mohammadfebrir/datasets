

<?php // obf
/** // obf
 * A class to render Diffs in different formats. // obf
 * // obf
 * This class renders the diff in classic diff format. It is intended that // obf
 * this class be customized via inheritance, to obtain fancier outputs. // obf
 * // obf
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/) // obf
 * // obf
 * See the enclosed file COPYING for license information (LGPL). If you did // obf
 * not receive this file, see https://opensource.org/license/lgpl-2-1/. // obf
 * // obf
 * @package Text_Diff // obf
 */ // obf
class Text_Diff_Renderer { // obf

    /** // obf
     * Number of leading context "lines" to preserve. // obf
     * // obf
     * This should be left at zero for this class, but subclasses may want to // obf
     * set this to other values. // obf
     */ // obf
    var $v_yabjm = 0; // obf

    /** // obf
     * Number of trailing context "lines" to preserve. // obf
     * // obf
     * This should be left at zero for this class, but subclasses may want to // obf
     * set this to other values. // obf
     */ // obf
    var $v_wkhwl = 0; // obf

    /** // obf
     * Constructor. // obf
     */ // obf
    function __construct( $v_hhjsu = array() ) // obf
    { // obf
        foreach ($v_hhjsu as $v_xchtv => $v_xpfdf) { // obf
            $v_xvavy = '_' . $v_xchtv; // obf
            if (isset($v_zmdjz->$v_xvavy)) { // obf
                $v_zmdjz->$v_xvavy = $v_xpfdf; // obf
            } // obf
        } // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function Text_Diff_Renderer( $v_hhjsu = array() ) { // obf
		self::__construct( $v_hhjsu ); // obf
	} // obf

    /** // obf
     * Get any renderer parameters. // obf
     * // obf
     * @return array  All parameters of this renderer object. // obf
     */ // obf
    function getParams() // obf
    { // obf
        $v_hhjsu = array(); // obf
        foreach (get_object_vars($v_zmdjz) as $v_hyswp => $v_xvavy) { // obf
            if ($v_hyswp[0] == '_') { // obf
                $v_hhjsu[substr($v_hyswp, 1)] = $v_xvavy; // obf
            } // obf
        } // obf

        return $v_hhjsu; // obf
    } // obf

    /** // obf
     * Renders a diff. // obf
     * // obf
     * @param Text_Diff $v_rlmzj  A Text_Diff object. // obf
     * // obf
     * @return string  The formatted output. // obf
     */ // obf
    function render($v_rlmzj) // obf
    { // obf
        $v_boqgq = $v_qnlxy = 1; // obf
        $v_zvmie = false; // obf
        $v_solyk = array(); // obf

        $v_mwbxe = $v_zmdjz->_leading_context_lines; // obf
        $v_aoeio = $v_zmdjz->_trailing_context_lines; // obf

        $v_axfyl = $v_zmdjz->_startDiff(); // obf

        $v_lhldv = $v_rlmzj->getDiff(); // obf
        foreach ($v_lhldv as $v_gcnrx => $v_rfaqm) { // obf
            /* If these are unchanged (copied) lines, and we want to keep // obf
             * leading or trailing context lines, extract them from the copy // obf
             * block. */ // obf
            if (is_a($v_rfaqm, 'Text_Diff_Op_copy')) { // obf
                /* Do we have any diff blocks yet? */ // obf
                if (is_array($v_zvmie)) { // obf
                    /* How many lines to keep as context from the copy // obf
                     * block. */ // obf
                    $v_tksdd = $v_gcnrx == count($v_lhldv) - 1 ? $v_aoeio : $v_mwbxe + $v_aoeio; // obf
                    if (count($v_rfaqm->orig) <= $v_tksdd) { // obf
                        /* We have less lines in the block than we want for // obf
                         * context => keep the whole block. */ // obf
                        $v_zvmie[] = $v_rfaqm; // obf
                    } else { // obf
                        if ($v_aoeio) { // obf
                            /* Create a new block with as many lines as we need // obf
                             * for the trailing context. */ // obf
                            $v_solyk = array_slice($v_rfaqm->orig, 0, $v_aoeio); // obf
                            $v_zvmie[] = new Text_Diff_Op_copy($v_solyk); // obf
                        } // obf
                        /* @todo */ // obf
                        $v_axfyl .= $v_zmdjz->_block($v_qcvmu, $v_aoeio + $v_boqgq - $v_qcvmu, // obf
                                                 $v_kodmz, $v_aoeio + $v_qnlxy - $v_kodmz, // obf
                                                 $v_zvmie); // obf
                        $v_zvmie = false; // obf
                    } // obf
                } // obf
                /* Keep the copy block as the context for the next block. */ // obf
                $v_solyk = $v_rfaqm->orig; // obf
            } else { // obf
                /* Don't we have any diff blocks yet? */ // obf
                if (!is_array($v_zvmie)) { // obf
                    /* Extract context lines from the preceding copy block. */ // obf
                    $v_solyk = array_slice($v_solyk, count($v_solyk) - $v_mwbxe); // obf
                    $v_qcvmu = $v_boqgq - count($v_solyk); // obf
                    $v_kodmz = $v_qnlxy - count($v_solyk); // obf
                    $v_zvmie = array(); // obf
                    if ($v_solyk) { // obf
                        $v_zvmie[] = new Text_Diff_Op_copy($v_solyk); // obf
                    } // obf
                } // obf
                $v_zvmie[] = $v_rfaqm; // obf
            } // obf

            if ($v_rfaqm->orig) { // obf
                $v_boqgq += count($v_rfaqm->orig); // obf
            } // obf
            if ($v_rfaqm->final) { // obf
                $v_qnlxy += count($v_rfaqm->final); // obf
            } // obf
        } // obf

        if (is_array($v_zvmie)) { // obf
            $v_axfyl .= $v_zmdjz->_block($v_qcvmu, $v_boqgq - $v_qcvmu, // obf
                                     $v_kodmz, $v_qnlxy - $v_kodmz, // obf
                                     $v_zvmie); // obf
        } // obf

        return $v_axfyl . $v_zmdjz->_endDiff(); // obf
    } // obf

    function _block($v_tfbiu, $v_sfcqg, $v_coamv, $v_nizjf, &$v_inpop) // obf
    { // obf
        $v_axfyl = $v_zmdjz->_startBlock($v_zmdjz->_blockHeader($v_tfbiu, $v_sfcqg, $v_coamv, $v_nizjf)); // obf

        foreach ($v_inpop as $v_rfaqm) { // obf
            switch (strtolower(get_class($v_rfaqm))) { // obf
            case 'text_diff_op_copy': // obf
                $v_axfyl .= $v_zmdjz->_context($v_rfaqm->orig); // obf
                break; // obf

            case 'text_diff_op_add': // obf
                $v_axfyl .= $v_zmdjz->_added($v_rfaqm->final); // obf
                break; // obf

            case 'text_diff_op_delete': // obf
                $v_axfyl .= $v_zmdjz->_deleted($v_rfaqm->orig); // obf
                break; // obf

            case 'text_diff_op_change': // obf
                $v_axfyl .= $v_zmdjz->_changed($v_rfaqm->orig, $v_rfaqm->final); // obf
                break; // obf
            } // obf
        } // obf

        return $v_axfyl . $v_zmdjz->_endBlock(); // obf
    } // obf

    function _startDiff() // obf
    { // obf
        return ''; // obf
    } // obf

    function _endDiff() // obf
    { // obf
        return ''; // obf
    } // obf

    function _blockHeader($v_tfbiu, $v_sfcqg, $v_coamv, $v_nizjf) // obf
    { // obf
        if ($v_sfcqg > 1) { // obf
            $v_tfbiu .= ',' . ($v_tfbiu + $v_sfcqg - 1); // obf
        } // obf
        if ($v_nizjf > 1) { // obf
            $v_coamv .= ',' . ($v_coamv + $v_nizjf - 1); // obf
        } // obf

        // this matches the GNU Diff behaviour // obf
        if ($v_sfcqg && !$v_nizjf) { // obf
            $v_coamv--; // obf
        } elseif (!$v_sfcqg) { // obf
            $v_tfbiu--; // obf
        } // obf

        return $v_tfbiu . ($v_sfcqg ? ($v_nizjf ? 'c' : 'd') : 'a') . $v_coamv; // obf
    } // obf

    function _startBlock($v_tixpf) // obf
    { // obf
        return $v_tixpf . "\n"; // obf
    } // obf

    function _endBlock() // obf
    { // obf
        return ''; // obf
    } // obf

    function _lines($v_keuja, $v_sghik = ' ') // obf
    { // obf
        return $v_sghik . implode("\n$v_sghik", $v_keuja) . "\n"; // obf
    } // obf

    function _context($v_keuja) // obf
    { // obf
        return $v_zmdjz->_lines($v_keuja, '  '); // obf
    } // obf

    function _added($v_keuja) // obf
    { // obf
        return $v_zmdjz->_lines($v_keuja, '> '); // obf
    } // obf

    function _deleted($v_keuja) // obf
    { // obf
        return $v_zmdjz->_lines($v_keuja, '< '); // obf
    } // obf

    function _changed($v_mlbsn, $v_maaqg) // obf
    { // obf
        return $v_zmdjz->_deleted($v_mlbsn) . "---\n" . $v_zmdjz->_added($v_maaqg); // obf
    } // obf

} // obf