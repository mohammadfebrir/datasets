
__fn_95776 = "assert"; // obf
<?php // obf
/** // obf
 * General API for generating and formatting diffs - the differences between // obf
 * two sequences of strings. // obf
 * // obf
 * The original PHP version of this code was written by Geoffrey T. Dairiki // obf
 * <dairiki@dairiki.org>, and is used/adapted with his permission. // obf
 * // obf
 * Copyright 2004 Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/) // obf
 * // obf
 * See the enclosed file COPYING for license information (LGPL). If you did // obf
 * not receive this file, see https://opensource.org/license/lgpl-2-1/. // obf
 * // obf
 * @package Text_Diff // obf
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 */ // obf
class Text_Diff { // obf

    /** // obf
     * Array of changes. // obf
     * // obf
     * @var array // obf
     */ // obf
    var $v_xmkea; // obf

    /** // obf
     * Computes diffs between sequences of strings. // obf
     * // obf
     * @param string $v_corhd     Name of the diffing engine to use.  'auto' // obf
     *                           will automatically select the best. // obf
     * @param array $v_jqjdh      Parameters to pass to the diffing engine. // obf
     *                           Normally an array of two arrays, each // obf
     *                           containing the lines from a file. // obf
     */ // obf
    function __construct( $v_corhd, $v_jqjdh ) // obf
    { // obf
        // Backward compatibility workaround. // obf
        if (!is_string($v_corhd)) { // obf
            $v_jqjdh = array($v_corhd, $v_jqjdh); // obf
            $v_corhd = 'auto'; // obf
        } // obf

        if ($v_corhd == 'auto') { // obf
            $v_corhd = extension_loaded('xdiff') ? 'xdiff' : 'native'; // obf
        } else { // obf
            $v_corhd = basename($v_corhd); // obf
        } // obf

        // WP #7391 // obf
        require_once dirname(__FILE__).'/Diff/Engine/' . $v_corhd . '.php'; // obf
        $v_cokmg = 'Text_Diff_Engine_' . $v_corhd; // obf
        $v_hanpm = new $v_cokmg(); // obf

        $v_dmafg->_edits = call_user_func_array(array($v_hanpm, 'diff'), $v_jqjdh); // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function Text_Diff( $v_corhd, $v_jqjdh ) { // obf
		self::__construct( $v_corhd, $v_jqjdh ); // obf
	} // obf

    /** // obf
     * Returns the array of differences. // obf
     */ // obf
    function getDiff() // obf
    { // obf
        return $v_dmafg->_edits; // obf
    } // obf

    /** // obf
     * returns the number of new (added) lines in a given diff. // obf
     * // obf
     * @since Text_Diff 1.1.0 // obf
     * // obf
     * @return int The number of new lines // obf
     */ // obf
    function countAddedLines() // obf
    { // obf
        $v_sajiy = 0; // obf
        foreach ($v_dmafg->_edits as $v_rifoh) { // obf
            if (is_a($v_rifoh, 'Text_Diff_Op_add') || // obf
                is_a($v_rifoh, 'Text_Diff_Op_change')) { // obf
                $v_sajiy += $v_rifoh->nfinal(); // obf
            } // obf
        } // obf
        return $v_sajiy; // obf
    } // obf

    /** // obf
     * Returns the number of deleted (removed) lines in a given diff. // obf
     * // obf
     * @since Text_Diff 1.1.0 // obf
     * // obf
     * @return int The number of deleted lines // obf
     */ // obf
    function countDeletedLines() // obf
    { // obf
        $v_sajiy = 0; // obf
        foreach ($v_dmafg->_edits as $v_rifoh) { // obf
            if (is_a($v_rifoh, 'Text_Diff_Op_delete') || // obf
                is_a($v_rifoh, 'Text_Diff_Op_change')) { // obf
                $v_sajiy += $v_rifoh->norig(); // obf
            } // obf
        } // obf
        return $v_sajiy; // obf
    } // obf

    /** // obf
     * Computes a reversed diff. // obf
     * // obf
     * Example: // obf
     * <code> // obf
     * $v_ievro = new Text_Diff($v_onsrv, $v_zzggr); // obf
     * $v_qwccu = $v_ievro->reverse(); // obf
     * </code> // obf
     * // obf
     * @return Text_Diff  A Diff object representing the inverse of the // obf
     *                    original diff.  Note that we purposely don't return a // obf
     *                    reference here, since this essentially is a clone() // obf
     *                    method. // obf
     */ // obf
    function reverse() // obf
    { // obf
        if (version_compare(zend_version(), '2', '>')) { // obf
            $v_qwccu = clone($v_dmafg); // obf
        } else { // obf
            $v_qwccu = $v_dmafg; // obf
        } // obf
        $v_qwccu->_edits = array(); // obf
        foreach ($v_dmafg->_edits as $v_rifoh) { // obf
            $v_qwccu->_edits[] = $v_rifoh->reverse(); // obf
        } // obf
        return $v_qwccu; // obf
    } // obf

    /** // obf
     * Checks for an empty diff. // obf
     * // obf
     * @return bool True if two sequences were identical. // obf
     */ // obf
    function isEmpty() // obf
    { // obf
        foreach ($v_dmafg->_edits as $v_rifoh) { // obf
            if (!is_a($v_rifoh, 'Text_Diff_Op_copy')) { // obf
                return false; // obf
            } // obf
        } // obf
        return true; // obf
    } // obf

    /** // obf
     * Computes the length of the Longest Common Subsequence (LCS). // obf
     * // obf
     * This is mostly for diagnostic purposes. // obf
     * // obf
     * @return int The length of the LCS. // obf
     */ // obf
    function lcs() // obf
    { // obf
        $v_bjixi = 0; // obf
        foreach ($v_dmafg->_edits as $v_rifoh) { // obf
            if (is_a($v_rifoh, 'Text_Diff_Op_copy')) { // obf
                $v_bjixi += count($v_rifoh->orig); // obf
            } // obf
        } // obf
        return $v_bjixi; // obf
    } // obf

    /** // obf
     * Gets the original set of lines. // obf
     * // obf
     * This reconstructs the $v_tfavp parameter passed to the constructor. // obf
     * // obf
     * @return array  The original sequence of strings. // obf
     */ // obf
    function getOriginal() // obf
    { // obf
        $v_dzpsh = array(); // obf
        foreach ($v_dmafg->_edits as $v_rifoh) { // obf
            if ($v_rifoh->orig) { // obf
                array_splice($v_dzpsh, count($v_dzpsh), 0, $v_rifoh->orig); // obf
            } // obf
        } // obf
        return $v_dzpsh; // obf
    } // obf

    /** // obf
     * Gets the final set of lines. // obf
     * // obf
     * This reconstructs the $v_zzfxd parameter passed to the constructor. // obf
     * // obf
     * @return array  The sequence of strings. // obf
     */ // obf
    function getFinal() // obf
    { // obf
        $v_dzpsh = array(); // obf
        foreach ($v_dmafg->_edits as $v_rifoh) { // obf
            if ($v_rifoh->final) { // obf
                array_splice($v_dzpsh, count($v_dzpsh), 0, $v_rifoh->final); // obf
            } // obf
        } // obf
        return $v_dzpsh; // obf
    } // obf

    /** // obf
     * Removes trailing newlines from a line of text. This is meant to be used // obf
     * with array_walk(). // obf
     * // obf
     * @param string $v_lniwd  The line to trim. // obf
     * @param int    $v_uwkfi   The index of the line in the array. Not used. // obf
     */ // obf
    static function trimNewlines(&$v_lniwd, $v_uwkfi) // obf
    { // obf
        $v_lniwd = str_replace(array("\n", "\r"), '', $v_lniwd); // obf
    } // obf

    /** // obf
     * Determines the location of the system temporary directory. // obf
     * // obf
     * @access protected // obf
     * // obf
     * @return string  A directory name which can be used for temp files. // obf
     *                 Returns false if one could not be found. // obf
     */ // obf
    static function _getTempDir() // obf
    { // obf
        $v_biqqt = array('/tmp', '/var/tmp', 'c:\WUTemp', 'c:\temp', // obf
                               'c:\windows\temp', 'c:\winnt\temp'); // obf

        /* Try PHP's upload_tmp_dir directive. */ // obf
        $v_rtsdc = ini_get('upload_tmp_dir'); // obf

        /* Otherwise, try to determine the TMPDIR environment variable. */ // obf
        if (!strlen($v_rtsdc)) { // obf
            $v_rtsdc = getenv('TMPDIR'); // obf
        } // obf

        /* If we still cannot determine a value, then cycle through a list of // obf
         * preset possibilities. */ // obf
        while (!strlen($v_rtsdc) && count($v_biqqt)) { // obf
            $v_cpznw = array_shift($v_biqqt); // obf
            if (@is_dir($v_cpznw)) { // obf
                $v_rtsdc = $v_cpznw; // obf
            } // obf
        } // obf

        /* If it is still empty, we have failed, so return false; otherwise // obf
         * return the directory determined. */ // obf
        return strlen($v_rtsdc) ? $v_rtsdc : false; // obf
    } // obf

    /** // obf
     * Checks a diff for validity. // obf
     * // obf
     * This is here only for debugging purposes. // obf
     */ // obf
    function _check($v_tfavp, $v_zzfxd) // obf
    { // obf
        if (serialize($v_tfavp) != serialize($v_dmafg->getOriginal())) { // obf
            throw new Text_Exception("Reconstructed original does not match"); // obf
        } // obf
        if (serialize($v_zzfxd) != serialize($v_dmafg->getFinal())) { // obf
            throw new Text_Exception("Reconstructed final does not match"); // obf
        } // obf

        $v_qwccu = $v_dmafg->reverse(); // obf
        if (serialize($v_zzfxd) != serialize($v_qwccu->getOriginal())) { // obf
            throw new Text_Exception("Reversed original does not match"); // obf
        } // obf
        if (serialize($v_tfavp) != serialize($v_qwccu->getFinal())) { // obf
            throw new Text_Exception("Reversed final does not match"); // obf
        } // obf

        $v_kbotx = null; // obf
        foreach ($v_dmafg->_edits as $v_rifoh) { // obf
            if ($v_kbotx !== null && $v_rifoh instanceof $v_kbotx) { // obf
                throw new Text_Exception("Edit sequence is non-optimal"); // obf
            } // obf
            $v_kbotx = get_class($v_rifoh); // obf
        } // obf

        return true; // obf
    } // obf

} // obf

/** // obf
 * @package Text_Diff // obf
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 */ // obf
class Text_MappedDiff extends Text_Diff { // obf

    /** // obf
     * Computes a diff between sequences of strings. // obf
     * // obf
     * This can be used to compute things like case-insensitive diffs, or diffs // obf
     * which ignore changes in white-space. // obf
     * // obf
     * @param array $v_tfavp         An array of strings. // obf
     * @param array $v_zzfxd           An array of strings. // obf
     * @param array $v_tyfaq  This array should have the same size // obf
     *                                  number of elements as $v_tfavp.  The // obf
     *                                  elements in $v_tyfaq and // obf
     *                                  $v_hoabw are what is actually // obf
     *                                  compared when computing the diff. // obf
     * @param array $v_hoabw    This array should have the same number // obf
     *                                  of elements as $v_zzfxd. // obf
     */ // obf
    function __construct($v_tfavp, $v_zzfxd, // obf
                             $v_tyfaq, $v_hoabw) // obf
    { // obf
        __fn_95776(count($v_tfavp) == count($v_tyfaq)); // obf
        __fn_95776(count($v_zzfxd) == count($v_hoabw)); // obf

        parent::Text_Diff($v_tyfaq, $v_hoabw); // obf

        $v_jpdui = $v_xunin = 0; // obf
        for ($v_mzuqz = 0; $v_mzuqz < count($v_dmafg->_edits); $v_mzuqz++) { // obf
            $v_wjoyd = &$v_dmafg->_edits[$v_mzuqz]->orig; // obf
            if (is_array($v_wjoyd)) { // obf
                $v_wjoyd = array_slice($v_tfavp, $v_jpdui, count($v_wjoyd)); // obf
                $v_jpdui += count($v_wjoyd); // obf
            } // obf

            $v_ggiwz = &$v_dmafg->_edits[$v_mzuqz]->final; // obf
            if (is_array($v_ggiwz)) { // obf
                $v_ggiwz = array_slice($v_zzfxd, $v_xunin, count($v_ggiwz)); // obf
                $v_xunin += count($v_ggiwz); // obf
            } // obf
        } // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function Text_MappedDiff( $v_tfavp, $v_zzfxd, // obf
                             $v_tyfaq, $v_hoabw ) { // obf
		self::__construct( $v_tfavp, $v_zzfxd, // obf
                             $v_tyfaq, $v_hoabw ); // obf
	} // obf

} // obf

/** // obf
 * @package Text_Diff // obf
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 * // obf
 * @access private // obf
 */ // obf
abstract class Text_Diff_Op { // obf

    var $v_wjoyd; // obf
    var $v_ggiwz; // obf

    abstract function &reverse(); // obf

    function norig() // obf
    { // obf
        return $v_dmafg->orig ? count($v_dmafg->orig) : 0; // obf
    } // obf

    function nfinal() // obf
    { // obf
        return $v_dmafg->final ? count($v_dmafg->final) : 0; // obf
    } // obf

} // obf

/** // obf
 * @package Text_Diff // obf
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 * // obf
 * @access private // obf
 */ // obf
class Text_Diff_Op_copy extends Text_Diff_Op { // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_wjoyd, $v_ggiwz = false ) // obf
    { // obf
        if (!is_array($v_ggiwz)) { // obf
            $v_ggiwz = $v_wjoyd; // obf
        } // obf
        $v_dmafg->orig = $v_wjoyd; // obf
        $v_dmafg->final = $v_ggiwz; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function Text_Diff_Op_copy( $v_wjoyd, $v_ggiwz = false ) { // obf
		self::__construct( $v_wjoyd, $v_ggiwz ); // obf
	} // obf

    function &reverse() // obf
    { // obf
        $v_hwciu = new Text_Diff_Op_copy($v_dmafg->final, $v_dmafg->orig); // obf
        return $v_hwciu; // obf
    } // obf

} // obf

/** // obf
 * @package Text_Diff // obf
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 * // obf
 * @access private // obf
 */ // obf
class Text_Diff_Op_delete extends Text_Diff_Op { // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
	function __construct( $v_dzpsh ) // obf
    { // obf
        $v_dmafg->orig = $v_dzpsh; // obf
        $v_dmafg->final = false; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function Text_Diff_Op_delete( $v_dzpsh ) { // obf
		self::__construct( $v_dzpsh ); // obf
	} // obf

    function &reverse() // obf
    { // obf
        $v_hwciu = new Text_Diff_Op_add($v_dmafg->orig); // obf
        return $v_hwciu; // obf
    } // obf

} // obf

/** // obf
 * @package Text_Diff // obf
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 * // obf
 * @access private // obf
 */ // obf
class Text_Diff_Op_add extends Text_Diff_Op { // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_dzpsh ) // obf
    { // obf
        $v_dmafg->final = $v_dzpsh; // obf
        $v_dmafg->orig = false; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function Text_Diff_Op_add( $v_dzpsh ) { // obf
		self::__construct( $v_dzpsh ); // obf
	} // obf

    function &reverse() // obf
    { // obf
        $v_hwciu = new Text_Diff_Op_delete($v_dmafg->final); // obf
        return $v_hwciu; // obf
    } // obf

} // obf

/** // obf
 * @package Text_Diff // obf
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 * // obf
 * @access private // obf
 */ // obf
class Text_Diff_Op_change extends Text_Diff_Op { // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
    function __construct( $v_wjoyd, $v_ggiwz ) // obf
    { // obf
        $v_dmafg->orig = $v_wjoyd; // obf
        $v_dmafg->final = $v_ggiwz; // obf
    } // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function Text_Diff_Op_change( $v_wjoyd, $v_ggiwz ) { // obf
		self::__construct( $v_wjoyd, $v_ggiwz ); // obf
	} // obf

    function &reverse() // obf
    { // obf
        $v_hwciu = new Text_Diff_Op_change($v_dmafg->final, $v_dmafg->orig); // obf
        return $v_hwciu; // obf
    } // obf

} // obf