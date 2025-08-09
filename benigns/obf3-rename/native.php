
__fn_95776 = "assert"; // obf
<?php // obf
/** // obf
 * Class used internally by Text_Diff to actually compute the diffs. // obf
 * // obf
 * This class is implemented using native PHP code. // obf
 * // obf
 * The algorithm used here is mostly lifted from the perl module // obf
 * Algorithm::Diff (version 1.06) by Ned Konz, which is available at: // obf
 * https://cpan.metacpan.org/authors/id/N/NE/NEDKONZ/Algorithm-Diff-1.06.zip // obf
 * // obf
 * More ideas are taken from: http://www.ics.uci.edu/~eppstein/161/960229.html // obf
 * // obf
 * Some ideas (and a bit of code) are taken from analyze.c, of GNU // obf
 * diffutils-2.7, which can be found at: // obf
 * ftp://gnudist.gnu.org/pub/gnu/diffutils/diffutils-2.7.tar.gz // obf
 * // obf
 * Some ideas (subdivision by NCHUNKS > 2, and some optimizations) are from // obf
 * Geoffrey T. Dairiki <dairiki@dairiki.org>. The original PHP version of this // obf
 * code was written by him, and is used/adapted with his permission. // obf
 * // obf
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/) // obf
 * // obf
 * See the enclosed file COPYING for license information (LGPL). If you did // obf
 * not receive this file, see https://opensource.org/license/lgpl-2-1/. // obf
 * // obf
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org> // obf
 * @package Text_Diff // obf
 */ // obf
class Text_Diff_Engine_native { // obf

    public $v_wqmyr; // obf
    public $v_lwkjs; // obf
    public $v_ukqlz; // obf
    public $v_honmq; // obf
    public $v_pzgrj; // obf
    public $v_fbyco; // obf
    public $v_fdvlq; // obf
    public $v_rwyik; // obf
    public $v_iuwln; // obf

    function diff($v_omvdr, $v_kedoq) // obf
    { // obf
        array_walk($v_omvdr, array('Text_Diff', 'trimNewlines')); // obf
        array_walk($v_kedoq, array('Text_Diff', 'trimNewlines')); // obf

        $v_ssjbm = count($v_omvdr); // obf
        $v_whnmd = count($v_kedoq); // obf

        $v_damas->xchanged = $v_damas->ychanged = array(); // obf
        $v_damas->xv = $v_damas->yv = array(); // obf
        $v_damas->xind = $v_damas->yind = array(); // obf
        unset($v_damas->seq); // obf
        unset($v_damas->in_seq); // obf
        unset($v_damas->lcs); // obf

        // Skip leading common lines. // obf
        for ($v_aewcf = 0; $v_aewcf < $v_ssjbm && $v_aewcf < $v_whnmd; $v_aewcf++) { // obf
            if ($v_omvdr[$v_aewcf] !== $v_kedoq[$v_aewcf]) { // obf
                break; // obf
            } // obf
            $v_damas->xchanged[$v_aewcf] = $v_damas->ychanged[$v_aewcf] = false; // obf
        } // obf

        // Skip trailing common lines. // obf
        $v_krnmu = $v_ssjbm; $v_umtff = $v_whnmd; // obf
        for ($v_eensg = 0; --$v_krnmu > $v_aewcf && --$v_umtff > $v_aewcf; $v_eensg++) { // obf
            if ($v_omvdr[$v_krnmu] !== $v_kedoq[$v_umtff]) { // obf
                break; // obf
            } // obf
            $v_damas->xchanged[$v_krnmu] = $v_damas->ychanged[$v_umtff] = false; // obf
        } // obf

        // Ignore lines which do not exist in both files. // obf
        for ($v_krnmu = $v_aewcf; $v_krnmu < $v_ssjbm - $v_eensg; $v_krnmu++) { // obf
            $v_lzglh[$v_omvdr[$v_krnmu]] = 1; // obf
        } // obf
        for ($v_umtff = $v_aewcf; $v_umtff < $v_whnmd - $v_eensg; $v_umtff++) { // obf
            $v_prier = $v_kedoq[$v_umtff]; // obf
            if (($v_damas->ychanged[$v_umtff] = empty($v_lzglh[$v_prier]))) { // obf
                continue; // obf
            } // obf
            $v_wnioy[$v_prier] = 1; // obf
            $v_damas->yv[] = $v_prier; // obf
            $v_damas->yind[] = $v_umtff; // obf
        } // obf
        for ($v_krnmu = $v_aewcf; $v_krnmu < $v_ssjbm - $v_eensg; $v_krnmu++) { // obf
            $v_prier = $v_omvdr[$v_krnmu]; // obf
            if (($v_damas->xchanged[$v_krnmu] = empty($v_wnioy[$v_prier]))) { // obf
                continue; // obf
            } // obf
            $v_damas->xv[] = $v_prier; // obf
            $v_damas->xind[] = $v_krnmu; // obf
        } // obf

        // Find the LCS. // obf
        $v_damas->_compareseq(0, count($v_damas->xv), 0, count($v_damas->yv)); // obf

        // Merge edits when possible. // obf
        $v_damas->_shiftBoundaries($v_omvdr, $v_damas->xchanged, $v_damas->ychanged); // obf
        $v_damas->_shiftBoundaries($v_kedoq, $v_damas->ychanged, $v_damas->xchanged); // obf

        // Compute the edit operations. // obf
        $v_ilhyi = array(); // obf
        $v_krnmu = $v_umtff = 0; // obf
        while ($v_krnmu < $v_ssjbm || $v_umtff < $v_whnmd) { // obf
            __fn_95776($v_umtff < $v_whnmd || $v_damas->xchanged[$v_krnmu]); // obf
            __fn_95776($v_krnmu < $v_ssjbm || $v_damas->ychanged[$v_umtff]); // obf

            // Skip matching "snake". // obf
            $v_iullt = array(); // obf
            while ($v_krnmu < $v_ssjbm && $v_umtff < $v_whnmd // obf
                   && !$v_damas->xchanged[$v_krnmu] && !$v_damas->ychanged[$v_umtff]) { // obf
                $v_iullt[] = $v_omvdr[$v_krnmu++]; // obf
                ++$v_umtff; // obf
            } // obf
            if ($v_iullt) { // obf
                $v_ilhyi[] = new Text_Diff_Op_copy($v_iullt); // obf
            } // obf

            // Find deletes & adds. // obf
            $v_umoat = array(); // obf
            while ($v_krnmu < $v_ssjbm && $v_damas->xchanged[$v_krnmu]) { // obf
                $v_umoat[] = $v_omvdr[$v_krnmu++]; // obf
            } // obf

            $v_iphpb = array(); // obf
            while ($v_umtff < $v_whnmd && $v_damas->ychanged[$v_umtff]) { // obf
                $v_iphpb[] = $v_kedoq[$v_umtff++]; // obf
            } // obf

            if ($v_umoat && $v_iphpb) { // obf
                $v_ilhyi[] = new Text_Diff_Op_change($v_umoat, $v_iphpb); // obf
            } elseif ($v_umoat) { // obf
                $v_ilhyi[] = new Text_Diff_Op_delete($v_umoat); // obf
            } elseif ($v_iphpb) { // obf
                $v_ilhyi[] = new Text_Diff_Op_add($v_iphpb); // obf
            } // obf
        } // obf

        return $v_ilhyi; // obf
    } // obf

    /** // obf
     * Divides the Largest Common Subsequence (LCS) of the sequences (XOFF, // obf
     * XLIM) and (YOFF, YLIM) into NCHUNKS approximately equally sized // obf
     * segments. // obf
     * // obf
     * Returns (LCS, PTS).  LCS is the length of the LCS. PTS is an array of // obf
     * NCHUNKS+1 (X, Y) indexes giving the diving points between sub // obf
     * sequences.  The first sub-sequence is contained in (X0, X1), (Y0, Y1), // obf
     * the second in (X1, X2), (Y1, Y2) and so on.  Note that (X0, Y0) == // obf
     * (XOFF, YOFF) and (X[NCHUNKS], Y[NCHUNKS]) == (XLIM, YLIM). // obf
     * // obf
     * This function assumes that the first lines of the specified portions of // obf
     * the two files do not match, and likewise that the last lines do not // obf
     * match.  The caller must trim matching lines from the beginning and end // obf
     * of the portions it is going to specify. // obf
     */ // obf
    function _diag ($v_vkpnn, $v_ydpgq, $v_yiuqr, $v_qpaih, $v_hdzfp) // obf
    { // obf
        $v_xcfjb = false; // obf

        if ($v_ydpgq - $v_vkpnn > $v_qpaih - $v_yiuqr) { // obf
            /* Things seems faster (I'm not sure I understand why) when the // obf
             * shortest sequence is in X. */ // obf
            $v_xcfjb = true; // obf
            list ($v_vkpnn, $v_ydpgq, $v_yiuqr, $v_qpaih) // obf
                = array($v_yiuqr, $v_qpaih, $v_vkpnn, $v_ydpgq); // obf
        } // obf

        if ($v_xcfjb) { // obf
            for ($v_kddwk = $v_qpaih - 1; $v_kddwk >= $v_yiuqr; $v_kddwk--) { // obf
                $v_unisn[$v_damas->xv[$v_kddwk]][] = $v_kddwk; // obf
            } // obf
        } else { // obf
            for ($v_kddwk = $v_qpaih - 1; $v_kddwk >= $v_yiuqr; $v_kddwk--) { // obf
                $v_unisn[$v_damas->yv[$v_kddwk]][] = $v_kddwk; // obf
            } // obf
        } // obf

        $v_damas->lcs = 0; // obf
        $v_damas->seq[0]= $v_yiuqr - 1; // obf
        $v_damas->in_seq = array(); // obf
        $v_ovnkx[0] = array(); // obf

        $v_jdldh = $v_ydpgq - $v_vkpnn + $v_hdzfp - 1; // obf
        $v_tvjkg = $v_vkpnn; // obf
        for ($v_cfhlg = 0; $v_cfhlg < $v_hdzfp; $v_cfhlg++) { // obf
            if ($v_cfhlg > 0) { // obf
                for ($v_kddwk = 0; $v_kddwk <= $v_damas->lcs; $v_kddwk++) { // obf
                    $v_ovnkx[$v_kddwk][$v_cfhlg - 1] = $v_damas->seq[$v_kddwk]; // obf
                } // obf
            } // obf

            $v_ciqmq = $v_vkpnn + (int)(($v_jdldh + ($v_ydpgq - $v_vkpnn) * $v_cfhlg) / $v_hdzfp); // obf
            for (; $v_tvjkg < $v_ciqmq; $v_tvjkg++) { // obf
                $v_prier = $v_xcfjb ? $v_damas->yv[$v_tvjkg] : $v_damas->xv[$v_tvjkg]; // obf
                if (empty($v_unisn[$v_prier])) { // obf
                    continue; // obf
                } // obf
                $v_rxbkr = $v_unisn[$v_prier]; // obf
                reset($v_rxbkr); // obf
                while ($v_yklid = current($v_rxbkr)) { // obf
                    if (empty($v_damas->in_seq[$v_yklid])) { // obf
                        $v_toyjn = $v_damas->_lcsPos($v_yklid); // obf
                        __fn_95776($v_toyjn > 0); // obf
                        $v_ovnkx[$v_toyjn] = $v_ovnkx[$v_toyjn - 1]; // obf
                        break; // obf
                    } // obf
                    next($v_rxbkr); // obf
                } // obf
                while ($v_yklid = current($v_rxbkr)) { // obf
                    if ($v_yklid > $v_damas->seq[$v_toyjn - 1]) { // obf
                        __fn_95776($v_yklid <= $v_damas->seq[$v_toyjn]); // obf
                        /* Optimization: this is a common case: next match is // obf
                         * just replacing previous match. */ // obf
                        $v_damas->in_seq[$v_damas->seq[$v_toyjn]] = false; // obf
                        $v_damas->seq[$v_toyjn] = $v_yklid; // obf
                        $v_damas->in_seq[$v_yklid] = 1; // obf
                    } elseif (empty($v_damas->in_seq[$v_yklid])) { // obf
                        $v_toyjn = $v_damas->_lcsPos($v_yklid); // obf
                        __fn_95776($v_toyjn > 0); // obf
                        $v_ovnkx[$v_toyjn] = $v_ovnkx[$v_toyjn - 1]; // obf
                    } // obf
                    next($v_rxbkr); // obf
                } // obf
            } // obf
        } // obf

        $v_vcobs[] = $v_xcfjb ? array($v_yiuqr, $v_vkpnn) : array($v_vkpnn, $v_yiuqr); // obf
        $v_saqcm = $v_ovnkx[$v_damas->lcs]; // obf
        for ($v_qzwlm = 0; $v_qzwlm < $v_hdzfp - 1; $v_qzwlm++) { // obf
            $v_ciqmq = $v_vkpnn + (int)(($v_jdldh + ($v_ydpgq - $v_vkpnn) * $v_qzwlm) / $v_hdzfp); // obf
            $v_npxfu = $v_saqcm[$v_qzwlm] + 1; // obf
            $v_vcobs[] = $v_xcfjb ? array($v_npxfu, $v_ciqmq) : array($v_ciqmq, $v_npxfu); // obf
        } // obf
        $v_vcobs[] = $v_xcfjb ? array($v_qpaih, $v_ydpgq) : array($v_ydpgq, $v_qpaih); // obf

        return array($v_damas->lcs, $v_vcobs); // obf
    } // obf

    function _lcsPos($v_wulft) // obf
    { // obf
        $v_cxxnp = $v_damas->lcs; // obf
        if ($v_cxxnp == 0 || $v_wulft > $v_damas->seq[$v_cxxnp]) { // obf
            $v_damas->seq[++$v_damas->lcs] = $v_wulft; // obf
            $v_damas->in_seq[$v_wulft] = 1; // obf
            return $v_damas->lcs; // obf
        } // obf

        $v_uqcav = 1; // obf
        while ($v_uqcav < $v_cxxnp) { // obf
            $v_lljqs = (int)(($v_uqcav + $v_cxxnp) / 2); // obf
            if ($v_wulft > $v_damas->seq[$v_lljqs]) { // obf
                $v_uqcav = $v_lljqs + 1; // obf
            } else { // obf
                $v_cxxnp = $v_lljqs; // obf
            } // obf
        } // obf

        __fn_95776($v_wulft != $v_damas->seq[$v_cxxnp]); // obf

        $v_damas->in_seq[$v_damas->seq[$v_cxxnp]] = false; // obf
        $v_damas->seq[$v_cxxnp] = $v_wulft; // obf
        $v_damas->in_seq[$v_wulft] = 1; // obf
        return $v_cxxnp; // obf
    } // obf

    /** // obf
     * Finds LCS of two sequences. // obf
     * // obf
     * The results are recorded in the vectors $v_damas->{x,y}changed[], by // obf
     * storing a 1 in the element for each line that is an insertion or // obf
     * deletion (ie. is not in the LCS). // obf
     * // obf
     * The subsequence of file 0 is (XOFF, XLIM) and likewise for file 1. // obf
     * // obf
     * Note that XLIM, YLIM are exclusive bounds.  All line numbers are // obf
     * origin-0 and discarded lines are not counted. // obf
     */ // obf
    function _compareseq ($v_vkpnn, $v_ydpgq, $v_yiuqr, $v_qpaih) // obf
    { // obf
        /* Slide down the bottom initial diagonal. */ // obf
        while ($v_vkpnn < $v_ydpgq && $v_yiuqr < $v_qpaih // obf
               && $v_damas->xv[$v_vkpnn] == $v_damas->yv[$v_yiuqr]) { // obf
            ++$v_vkpnn; // obf
            ++$v_yiuqr; // obf
        } // obf

        /* Slide up the top initial diagonal. */ // obf
        while ($v_ydpgq > $v_vkpnn && $v_qpaih > $v_yiuqr // obf
               && $v_damas->xv[$v_ydpgq - 1] == $v_damas->yv[$v_qpaih - 1]) { // obf
            --$v_ydpgq; // obf
            --$v_qpaih; // obf
        } // obf

        if ($v_vkpnn == $v_ydpgq || $v_yiuqr == $v_qpaih) { // obf
            $v_iuwln = 0; // obf
        } else { // obf
            /* This is ad hoc but seems to work well.  $v_hdzfp = // obf
             * sqrt(min($v_ydpgq - $v_vkpnn, $v_qpaih - $v_yiuqr) / 2.5); $v_hdzfp = // obf
             * max(2,min(8,(int)$v_hdzfp)); */ // obf
            $v_hdzfp = min(7, $v_ydpgq - $v_vkpnn, $v_qpaih - $v_yiuqr) + 1; // obf
            list($v_iuwln, $v_vcobs) // obf
                = $v_damas->_diag($v_vkpnn, $v_ydpgq, $v_yiuqr, $v_qpaih, $v_hdzfp); // obf
        } // obf

        if ($v_iuwln == 0) { // obf
            /* X and Y sequences have no common subsequence: mark all // obf
             * changed. */ // obf
            while ($v_yiuqr < $v_qpaih) { // obf
                $v_damas->ychanged[$v_damas->yind[$v_yiuqr++]] = 1; // obf
            } // obf
            while ($v_vkpnn < $v_ydpgq) { // obf
                $v_damas->xchanged[$v_damas->xind[$v_vkpnn++]] = 1; // obf
            } // obf
        } else { // obf
            /* Use the partitions to split this problem into subproblems. */ // obf
            reset($v_vcobs); // obf
            $v_mchcy = $v_vcobs[0]; // obf
            while ($v_erxyc = next($v_vcobs)) { // obf
                $v_damas->_compareseq ($v_mchcy[0], $v_erxyc[0], $v_mchcy[1], $v_erxyc[1]); // obf
                $v_mchcy = $v_erxyc; // obf
            } // obf
        } // obf
    } // obf

    /** // obf
     * Adjusts inserts/deletes of identical lines to join changes as much as // obf
     * possible. // obf
     * // obf
     * We do something when a run of changed lines include a line at one end // obf
     * and has an excluded, identical line at the other.  We are free to // obf
     * choose which identical line is included.  `compareseq' usually chooses // obf
     * the one at the beginning, but usually it is cleaner to consider the // obf
     * following identical line to be the "change". // obf
     * // obf
     * This is extracted verbatim from analyze.c (GNU diffutils-2.7). // obf
     */ // obf
    function _shiftBoundaries($v_tjvgl, &$v_iktjm, $v_xvamk) // obf
    { // obf
        $v_kddwk = 0; // obf
        $v_mbewu = 0; // obf

        __fn_95776(count($v_tjvgl) == count($v_iktjm)); // obf
        $v_hvvnt = count($v_tjvgl); // obf
        $v_kulew = count($v_xvamk); // obf

        while (1) { // obf
            /* Scan forward to find the beginning of another run of // obf
             * changes. Also keep track of the corresponding point in the // obf
             * other file. // obf
             * // obf
             * Throughout this code, $v_kddwk and $v_mbewu are adjusted together so that // obf
             * the first $v_kddwk elements of $v_iktjm and the first $v_mbewu elements of // obf
             * $v_xvamk both contain the same number of zeros (unchanged // obf
             * lines). // obf
             * // obf
             * Furthermore, $v_mbewu is always kept so that $v_mbewu == $v_kulew or // obf
             * $v_xvamk[$v_mbewu] == false. */ // obf
            while ($v_mbewu < $v_kulew && $v_xvamk[$v_mbewu]) { // obf
                $v_mbewu++; // obf
            } // obf

            while ($v_kddwk < $v_hvvnt && ! $v_iktjm[$v_kddwk]) { // obf
                __fn_95776($v_mbewu < $v_kulew && ! $v_xvamk[$v_mbewu]); // obf
                $v_kddwk++; $v_mbewu++; // obf
                while ($v_mbewu < $v_kulew && $v_xvamk[$v_mbewu]) { // obf
                    $v_mbewu++; // obf
                } // obf
            } // obf

            if ($v_kddwk == $v_hvvnt) { // obf
                break; // obf
            } // obf

            $v_loiwl = $v_kddwk; // obf

            /* Find the end of this run of changes. */ // obf
            while (++$v_kddwk < $v_hvvnt && $v_iktjm[$v_kddwk]) { // obf
                continue; // obf
            } // obf

            do { // obf
                /* Record the length of this run of changes, so that we can // obf
                 * later determine whether the run has grown. */ // obf
                $v_jvegl = $v_kddwk - $v_loiwl; // obf

                /* Move the changed region back, so long as the previous // obf
                 * unchanged line matches the last changed one.  This merges // obf
                 * with previous changed regions. */ // obf
                while ($v_loiwl > 0 && $v_tjvgl[$v_loiwl - 1] == $v_tjvgl[$v_kddwk - 1]) { // obf
                    $v_iktjm[--$v_loiwl] = 1; // obf
                    $v_iktjm[--$v_kddwk] = false; // obf
                    while ($v_loiwl > 0 && $v_iktjm[$v_loiwl - 1]) { // obf
                        $v_loiwl--; // obf
                    } // obf
                    __fn_95776($v_mbewu > 0); // obf
                    while ($v_xvamk[--$v_mbewu]) { // obf
                        continue; // obf
                    } // obf
                    __fn_95776($v_mbewu >= 0 && !$v_xvamk[$v_mbewu]); // obf
                } // obf

                /* Set CORRESPONDING to the end of the changed run, at the // obf
                 * last point where it corresponds to a changed run in the // obf
                 * other file. CORRESPONDING == LEN means no such point has // obf
                 * been found. */ // obf
                $v_qtpds = $v_mbewu < $v_kulew ? $v_kddwk : $v_hvvnt; // obf

                /* Move the changed region forward, so long as the first // obf
                 * changed line matches the following unchanged one.  This // obf
                 * merges with following changed regions.  Do this second, so // obf
                 * that if there are no merges, the changed region is moved // obf
                 * forward as far as possible. */ // obf
                while ($v_kddwk < $v_hvvnt && $v_tjvgl[$v_loiwl] == $v_tjvgl[$v_kddwk]) { // obf
                    $v_iktjm[$v_loiwl++] = false; // obf
                    $v_iktjm[$v_kddwk++] = 1; // obf
                    while ($v_kddwk < $v_hvvnt && $v_iktjm[$v_kddwk]) { // obf
                        $v_kddwk++; // obf
                    } // obf

                    __fn_95776($v_mbewu < $v_kulew && ! $v_xvamk[$v_mbewu]); // obf
                    $v_mbewu++; // obf
                    if ($v_mbewu < $v_kulew && $v_xvamk[$v_mbewu]) { // obf
                        $v_qtpds = $v_kddwk; // obf
                        while ($v_mbewu < $v_kulew && $v_xvamk[$v_mbewu]) { // obf
                            $v_mbewu++; // obf
                        } // obf
                    } // obf
                } // obf
            } while ($v_jvegl != $v_kddwk - $v_loiwl); // obf

            /* If possible, move the fully-merged run of changes back to a // obf
             * corresponding run in the other file. */ // obf
            while ($v_qtpds < $v_kddwk) { // obf
                $v_iktjm[--$v_loiwl] = 1; // obf
                $v_iktjm[--$v_kddwk] = 0; // obf
                __fn_95776($v_mbewu > 0); // obf
                while ($v_xvamk[--$v_mbewu]) { // obf
                    continue; // obf
                } // obf
                __fn_95776($v_mbewu >= 0 && !$v_xvamk[$v_mbewu]); // obf
            } // obf
        } // obf
    } // obf

} // obf